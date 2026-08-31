<?php

return [
    'title' => 'Cómo crear un skill para Claude Code paso a paso',
    'navTitle' => 'Crear un skill',
    'seoTitle' => 'Cómo crear un skill para Claude Code (paso a paso)',
    'description' => 'Crea tu primer skill en diez minutos: estructura del SKILL.md, cómo escribir la descripción que lo activa, cómo probarlo y cómo compartirlo con tu equipo.',
    'excerpt' => 'De un prompt que repites a un skill que se activa solo. La estructura del archivo, la descripción que decide si funciona, y cómo probar que hace lo que esperas.',
    'category' => 'Tutorial',
    'published' => '2026-08-21',
    'updated' => '2026-08-26',
    'readingMinutes' => 7,
    'words' => 1170,
    'about' => 'Claude Code',
    'related' => ['que-son-los-skills-de-claude-code', 'como-escribir-prompts-efectivos', 'plugins-y-mcp-en-claude-code'],
    'toc' => [
        'antes-de-empezar' => 'Antes de empezar: elige la tarea correcta',
        'estructura' => 'La estructura mínima',
        'descripcion' => 'La descripción: la parte que decide todo',
        'instrucciones' => 'Escribir las instrucciones',
        'probarlo' => 'Probarlo (y por qué casi siempre falla la primera vez)',
        'compartirlo' => 'Compartirlo con el equipo',
        'plantilla' => 'Plantilla para copiar',
    ],
    'faq' => [
        '¿Dónde tengo que guardar el archivo SKILL.md?' => 'En una carpeta con el nombre del skill, dentro de ~/.claude/skills/ si quieres usarlo en todos tus proyectos, o dentro de .claude/skills/ en el repositorio si quiere tenerlo todo el equipo. El nombre de la carpeta y el campo name deben coincidir.',
        '¿Cuánto debe medir un skill?' => 'Lo más corto que siga siendo inequívoco. Entre 30 y 150 líneas cubre la mayoría de casos. Si te sale mucho más largo, normalmente es que estás juntando dos tareas distintas y conviene partirlo en dos skills.',
        '¿Puedo incluir archivos de apoyo?' => 'Sí. Cualquier archivo que pongas en la carpeta del skill puede referenciarse desde el SKILL.md: una plantilla, un ejemplo de salida, una lista de criterios larga. Es la forma de no inflar las instrucciones principales.',
        '¿Cómo sé si mi skill se está activando?' => 'Pídele algo con las palabras que usarías normalmente y comprueba si el resultado sigue el procedimiento que escribiste. Si no lo sigue, el problema casi siempre está en la descripción, no en las instrucciones.',
        '¿Puedo publicar mi skill para que lo usen otros?' => 'Sí. Puedes subirlo a un repositorio público o compartirlo en ia-skills, donde otros profesionales lo votan y comentan. Los skills mejor valorados son los que llevan puestos meses de uso real, no los recién escritos.',
    ],
    'ctaTitle' => 'No empieces de cero',
    'ctaBody' => 'Antes de escribir el tuyo, mira si alguien ya resolvió esa tarea. Hay skills y prompts para todas las profesiones, con el prompt completo a la vista y ordenados por lo útiles que le han parecido a quien los usó.',
    'body' => <<<'HTML'
<p>Escribir un skill lleva diez minutos. Escribir un skill que se active cuando lo necesitas y produzca siempre el mismo tipo de resultado lleva dos o tres iteraciones. Esta guía va sobre lo segundo.</p>

<h2 id="antes-de-empezar">Antes de empezar: elige la tarea correcta</h2>

<p>El primer skill de casi todo el mundo falla por la misma razón: se elige una tarea demasiado grande. «Ayúdame con el marketing» no es una tarea. «Escribe la variante B de un asunto de email para un test A/B, con la hipótesis explícita» sí lo es.</p>

<p>Busca algo que cumpla las tres condiciones:</p>

<ul>
    <li>Lo has hecho al menos tres veces este mes.</li>
    <li>Sabrías explicárselo a alguien nuevo en cinco minutos.</li>
    <li>Reconoces un resultado bueno de uno malo al verlo.</li>
</ul>

<p>Esa tercera condición es la importante. Si no sabes distinguir el resultado bueno del malo, no puedes escribir los criterios, y sin criterios el skill es solo un formato.</p>

<h2 id="estructura">La estructura mínima</h2>

<p>Una carpeta y un archivo:</p>

<pre><code>~/.claude/skills/
└── resumen-reunion/
    └── SKILL.md</code></pre>

<p>El nombre de la carpeta es el identificador del skill: en minúsculas, con guiones, sin acentos. Nada de <code>Resumen Reunión</code>.</p>

<p>Dentro, el archivo tiene una cabecera delimitada por tres guiones y, debajo, Markdown normal:</p>

<pre><code>---
name: resumen-reunion
description: [cuándo debe usarse]
---

# [Título]

[Instrucciones]</code></pre>

<h2 id="descripcion">La descripción: la parte que decide todo</h2>

<p>El asistente no lee tus skills enteros en cada mensaje. Lee las descripciones y, con eso, decide cuál cargar. Si la descripción no menciona las palabras que tú usas de verdad, el skill no se activa nunca.</p>

<p>Una descripción que funciona tiene tres piezas:</p>

<ol>
    <li><strong>Qué hace</strong>, en una frase con verbo.</li>
    <li><strong>Cuándo usarlo</strong>, con las expresiones reales que dirás. Incluye sinónimos y la forma coloquial.</li>
    <li><strong>Cuándo no</strong>, si hay riesgo de solaparse con otro skill.</li>
</ol>

<p>Compara:</p>

<pre><code># Se activa poco
description: Genera resúmenes de reuniones.

# Se activa cuando toca
description: Convierte notas o una transcripción de
  reunión en un resumen con decisiones, responsables y
  fechas. Úsalo cuando el usuario pegue notas de una
  reunión, una transcripción, un acta, o pida "saca los
  acuerdos de esto" o "qué salió de la call".
  No lo uses para resumir documentos que no sean reuniones.</code></pre>

<p>La segunda es más larga y por eso funciona: cubre cómo hablas tú un martes por la tarde, no cómo se llamaría la tarea en un manual.</p>

<h2 id="instrucciones">Escribir las instrucciones</h2>

<p>Las instrucciones se leen como un procedimiento, no como un artículo. Cuatro secciones cubren prácticamente cualquier skill:</p>

<h3>1. El procedimiento</h3>

<p>Pasos numerados, en imperativo. Cada paso debe ser verificable: si no puedes decir si un paso se cumplió o no, reescríbelo.</p>

<h3>2. Los criterios</h3>

<p>Aquí va tu conocimiento, y es lo que diferencia un skill útil de una plantilla. Qué se prioriza, qué se descarta, qué es un resultado bueno.</p>

<pre><code>## Criterios
- Una decisión sin responsable no es una decisión:
  márcala como pendiente de asignar.
- Si algo se discutió pero no se cerró, va en "abierto",
  no en "acuerdos".
- No inventes fechas. Si no se dijo, escribe "sin fecha".</code></pre>

<h3>3. El formato de salida</h3>

<p>Descríbelo o, mejor, enséñalo. Un ejemplo de tres líneas ahorra un párrafo de explicación y elimina la ambigüedad.</p>

<h3>4. Los límites</h3>

<p>Qué no debe hacer. «No propongas soluciones si no te las piden.» «No reescribas las citas literales.» Los límites evitan el 80 % de los resultados que luego hay que corregir a mano.</p>

<h2 id="probarlo">Probarlo (y por qué casi siempre falla la primera vez)</h2>

<p>Prueba con tres entradas distintas: una fácil, una desordenada y una donde falte información. La tercera es la que revela si tus criterios están completos.</p>

<p>Cuando algo salga mal, el diagnóstico es casi siempre uno de estos tres:</p>

<figure>
<table>
    <thead><tr><th>Síntoma</th><th>Causa habitual</th><th>Arreglo</th></tr></thead>
    <tbody>
        <tr><td>No se activa</td><td>La descripción no tiene tus palabras</td><td>Añade las frases reales que usaste al pedirlo</td></tr>
        <tr><td>Se activa cuando no toca</td><td>La descripción es demasiado amplia</td><td>Añade una línea de «no lo uses si…»</td></tr>
        <tr><td>El formato cambia cada vez</td><td>No hay ejemplo de salida</td><td>Pega un ejemplo corto en el skill</td></tr>
        <tr><td>Se inventa datos</td><td>No dijiste qué hacer si falta información</td><td>Añade la regla explícita: «si no consta, escribe X»</td></tr>
    </tbody>
</table>
</figure>

<p>Un truco que ahorra tiempo: cuando un resultado te decepcione, en vez de reescribir el skill a ciegas, pregunta qué parte de las instrucciones llevó a esa decisión. La respuesta suele señalar la línea ambigua exacta.</p>

<h2 id="compartirlo">Compartirlo con el equipo</h2>

<p>Mueve la carpeta a <code>.claude/skills/</code> dentro del repositorio y haz commit. A partir de ahí, cualquiera que clone el proyecto tiene el skill disponible sin instalar nada.</p>

<p>Dos consejos que evitan discusiones más adelante:</p>

<ul>
    <li>Trata el skill como código: pasa por pull request y se revisa. Un skill mal escrito propaga una mala práctica a todo el equipo con mucha eficiencia.</li>
    <li>Escribe en la cabecera del archivo por qué existe. En seis meses nadie recordará qué problema resolvía, y sin ese contexto la gente lo borra o lo duplica.</li>
</ul>

<h2 id="plantilla">Plantilla para copiar</h2>

<pre><code>---
name: nombre-del-skill
description: [Qué hace, en una frase con verbo.]
  Úsalo cuando el usuario [frases reales, incluye
  sinónimos y la forma coloquial]. No lo uses para
  [caso que pertenece a otro skill].
---

# [Título de la tarea]

## Procedimiento
1. [Paso verificable]
2. [Paso verificable]
3. [Paso verificable]

## Criterios
- [Qué se prioriza y por qué]
- [Qué se descarta]
- [Qué hacer si falta información]

## Formato de salida
[Descripción breve + ejemplo corto real]

## Límites
- No [cosa que no debe hacer]
- No [cosa que no debe hacer]</code></pre>

<p>Con eso tienes un skill funcionando. Si el siguiente paso es enganchar herramientas externas o automatizar algo que ocurre solo, eso ya son plugins y MCP: lo cubrimos en <a href="/guias/plugins-y-mcp-en-claude-code">plugins y MCP en Claude Code</a>.</p>
HTML,
];
