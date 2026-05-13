<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class DevSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'profession_id' => 2,
                'user_id' => 1,
                'title' => 'Convierte tu codebase en un mapa de conocimiento navegable con Graphify',
                'slug' => 'codebase-knowledge-graph-graphify',
                'description' => 'Transforma cualquier proyecto de código en un grafo interactivo que muestra qué módulos son el núcleo de tu arquitectura, cómo se relacionan entre sí y qué preguntas puedes hacer sobre el sistema sin abrir un solo archivo.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Graphify en tu proyecto

### 1. Instalar Graphify
```bash
pip install graphifyy
```

### 2. Ejecutar sobre tu proyecto
```bash
# Desde el directorio raíz de tu proyecto
graphify .

# O sobre carpetas específicas (ignora vendor/node_modules)
graphify app/ src/ routes/
```

### 3. Outputs generados en graphify-out/
- **graph.html** — visualización interactiva del grafo (ábrela en el navegador)
- **GRAPH_REPORT.md** — informe con los god nodes (módulos más conectados), comunidades detectadas y preguntas sugeridas
- **graph.json** — formato GraphRAG para consultas de IA

### 4. Consultar el grafo con lenguaje natural
```bash
graphify query "¿cómo se relaciona el módulo de autenticación con la base de datos?"
graphify path "UserController" "Database"
graphify explain "SkillController"
```

### 5. Mantener el grafo actualizado
```bash
# Re-extrae solo archivos nuevos/modificados (sin coste de LLM)
graphify update .
```

### Tip para Claude Code
Añade estas reglas a tu CLAUDE.md para que Claude consulte el grafo automáticamente:
```
- Antes de responder preguntas de arquitectura, lee graphify-out/GRAPH_REPORT.md
- Para relaciones entre módulos, usa graphify query en vez de grep
- Después de modificar código, ejecuta graphify update .
```
PROMPT,
                'tool_name' => 'Claude Code',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Incorporarte a un proyecto legacy, hacer code review de arquitectura, o documentar un sistema complejo sin leerlo archivo por archivo.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ],
            [
                'profession_id' => 2,
                'user_id' => 1,
                'title' => 'Reduce un 75% los tokens de Claude Code con el plugin Caveman',
                'slug' => 'reducir-tokens-claude-code-caveman',
                'description' => 'El plugin Caveman hace que Claude responda de forma ultra-comprimida — sin verbosidad, sin relleno — manteniendo toda la precisión técnica. Ideal para sesiones largas de programación donde el contexto importa.',
                'prompt_content' => <<<'PROMPT'
## Workflow: Instalar y usar Caveman en Claude Code

### 1. Añadir el marketplace de Caveman
```bash
claude plugin marketplace add JuliusBrussee/caveman
```

### 2. Instalar el plugin
```bash
claude plugin install caveman@caveman
```

### 3. Verificar que está activo
```bash
claude plugin list
# ❯ caveman@caveman  ✔ enabled
```

### ¿Qué cambia?
Claude pasa de responder:
> "I would recommend checking the database connection configuration, as there might be an issue with the credentials or the host settings."

A responder:
> "check db config: credentials + host"

### Cuándo es más útil
- Sesiones largas de debugging donde el contexto se llena rápido
- Revisiones de código donde solo necesitas el veredicto, no el ensayo
- Workflows automatizados donde procesas mucha salida de Claude

### Activar / desactivar temporalmente
```bash
claude plugin disable caveman@caveman
claude plugin enable caveman@caveman
```
PROMPT,
                'tool_name' => 'Claude Code',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Sesiones intensas de programación donde quieres respuestas directas y no desperdiciar contexto con texto de relleno.',
                'status' => 'published',
                'vote_score' => 0,
                'views_count' => 0,
                'saves_count' => 0,
                'version' => 1,
            ],
        ];

        foreach ($skills as $data) {
            Skill::firstOrCreate(['slug' => $data['slug']], $data);
            echo 'Created: ' . $data['title'] . PHP_EOL;
        }
    }
}
