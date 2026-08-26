#!/usr/bin/env python3
"""Reconstruye el grafo de conocimiento de graphify acotado al código del proyecto.

Por qué existe este script en lugar de `graphify update .`:

    `graphify update .` escanea el directorio entero, incluidos `vendor/` y
    `node_modules/`. En agosto de 2026 eso convirtió un grafo de 160 nodos en
    uno de 58.659 (graph.json pasó de KB a 44 MB) y graphify dejó de generar
    graph.html por superar el límite de 5.000 nodos de la visualización.

    Aquí el corpus se acota explícitamente a DIRS.

Extracción solo AST, sin LLM: coste de tokens cero. Si algún día quieres aristas
semánticas (relaciones que el AST no puede ver), eso requiere una pasada con
modelo y es otro flujo — ver la skill /graphify.

Uso:
    python3 scripts/graphify_rebuild.py
"""

import json
import re
import sys
from datetime import datetime, timezone
from pathlib import Path

from graphify.analyze import god_nodes, suggest_questions, surprising_connections
from graphify.build import build_from_json
from graphify.cluster import cluster, score_all
from graphify.detect import detect, save_manifest
from graphify.export import to_json
from graphify.extract import collect_files, extract
from graphify.report import generate

# Código del proyecto, sin dependencias.
#
# `database/seeders` queda fuera a propósito: son >100 ficheros generados, casi
# idénticos entre sí (todos exponen únicamente run()), y dominarían las
# comunidades sin aportar estructura. Añádelo a la lista si alguna vez los
# quieres dentro.
DIRS = [
    'app',
    'resources/js',
    'routes',
    'database/migrations',
    'database/factories',
]

# Etiquetas de las comunidades grandes. Las que no estén aquí toman el nombre
# de su nodo más conectado. Revísalas si la estructura del proyecto cambia.
COMMUNITY_LABELS = {
    0:  'Skills: alta e importación',
    1:  'Comentarios y capa Inertia',
    2:  'Modelo Skill',
    3:  'Modelo User y API tokens',
    4:  'Votación',
    5:  'Login y rate limit de acceso',
    6:  'Generación de imágenes OG',
    7:  'Perfil y claves de API',
    8:  'Arranque y límites de peticiones',
    9:  'Modelo Profession',
    10: 'Moderación de admin',
    11: 'Sesión de autenticación',
    12: 'Permisos sobre skills',
    13: 'Observer de caché de skills',
}

OUT = Path('graphify-out')


def detect_corpus() -> dict:
    code, docs, total_files, total_words = [], [], 0, 0

    for directory in DIRS:
        if not Path(directory).exists():
            print(f'  aviso: {directory} no existe, se omite')
            continue
        result = detect(Path(directory))
        total_files += result['total_files']
        total_words += result['total_words']
        code += result.get('files', {}).get('code', [])
        docs += result.get('files', {}).get('document', [])

    print(f'Corpus: {total_files} archivos · ~{total_words:,} palabras')
    return {
        'total_files': total_files,
        'total_words': total_words,
        'files': {'code': code, 'document': docs},
        'skipped_sensitive': [],
    }


def extract_ast(detection: dict) -> dict:
    files = []
    for f in detection['files']['code']:
        path = Path(f)
        files.extend(collect_files(path) if path.is_dir() else [path])

    if not files:
        sys.exit('ERROR: no se encontró ningún archivo de código en DIRS.')

    result = extract(files, cache_root=Path('.'))
    print(f'AST: {len(result["nodes"])} nodos, {len(result["edges"])} aristas')

    return {
        'nodes': result['nodes'],
        'edges': result['edges'],
        'hyperedges': [],
        'input_tokens': 0,
        'output_tokens': 0,
    }


def label_for(community_id: int, members: list, graph) -> str:
    if community_id in COMMUNITY_LABELS:
        return COMMUNITY_LABELS[community_id]

    best = max(members, key=lambda n: graph.degree(n) if n in graph else 0)
    label = graph.nodes[best].get('label', best) if best in graph.nodes else best
    label = re.sub(r'\(\)$', '', str(label)).strip('._')
    return label.split('.')[-1] or 'Sin nombre'


def main() -> None:
    OUT.mkdir(exist_ok=True)

    detection = detect_corpus()
    extraction = extract_ast(detection)

    graph = build_from_json(extraction)
    if graph.number_of_nodes() == 0:
        sys.exit('ERROR: el grafo quedó vacío.')

    communities = cluster(graph)
    cohesion = score_all(graph, communities)
    labels = {cid: label_for(cid, members, graph) for cid, members in communities.items()}

    gods = god_nodes(graph)
    surprises = surprising_connections(graph, communities)
    questions = suggest_questions(graph, communities, labels)

    report = generate(graph, communities, cohesion, labels, gods, surprises,
                      detection, {'input': 0, 'output': 0}, '.',
                      suggested_questions=questions)

    (OUT / 'GRAPH_REPORT.md').write_text(report)
    (OUT / '.graphify_labels.json').write_text(
        json.dumps({str(k): v for k, v in labels.items()}, ensure_ascii=False)
    )
    (OUT / '.graphify_python').write_text(sys.executable)
    to_json(graph, communities, str(OUT / 'graph.json'))

    save_manifest(detection['files'])

    cost_path = OUT / 'cost.json'
    cost = json.loads(cost_path.read_text()) if cost_path.exists() else {
        'runs': [], 'total_input_tokens': 0, 'total_output_tokens': 0,
    }
    cost['runs'].append({
        'date': datetime.now(timezone.utc).isoformat(),
        'input_tokens': 0,
        'output_tokens': 0,
        'files': detection['total_files'],
    })
    cost_path.write_text(json.dumps(cost, indent=2))

    print(f'Grafo: {graph.number_of_nodes()} nodos, {graph.number_of_edges()} aristas, '
          f'{len(communities)} comunidades')
    print(f'Escrito en {OUT}/ — ejecuta `graphify export html` para la visualización.')


if __name__ == '__main__':
    main()
