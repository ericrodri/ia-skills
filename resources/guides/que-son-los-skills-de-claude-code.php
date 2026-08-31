<?php

return [
    'title' => 'Qué son los skills de Claude Code y para qué sirven',
    'navTitle' => 'Qué son los skills',
    'seoTitle' => 'Qué son los skills de Claude Code: guía práctica',
    'description' => 'Un skill es una carpeta con un SKILL.md que enseña a Claude a hacer una tarea concreta siempre igual. Qué son, en qué se diferencian de un prompt y cuándo usar cada cosa.',
    'excerpt' => 'Un prompt se escribe una vez y se olvida. Un skill se instala una vez y se usa siempre. Esta es la diferencia y por qué importa cuando trabajas con IA todos los días.',
    'category' => 'Fundamentos',
    'published' => '2026-08-20',
    'updated' => '2026-08-26',
    'readingMinutes' => 8,
    'words' => 1310,
    'about' => 'Claude Code',
    'related' => ['como-crear-un-skill-para-claude-code', 'empezar-con-claude-code', 'plugins-y-mcp-en-claude-code'],
    'toc' => [
        'que-es' => 'Qué es exactamente un skill',
        'prompt-vs-skill' => 'Prompt, skill y plugin: las diferencias',
        'como-funciona' => 'Cómo decide Claude que debe usar un skill',
        'donde-viven' => 'Dónde se instalan y quién los ve',
        'cuando-usar' => 'Cuándo merece la pena convertir un prompt en skill',
        'errores' => 'Los cinco errores que más se repiten',
    ],
    'faq' => [
        '¿Necesito saber programar para usar un skill?' => 'No. Un skill es un archivo de texto en Markdown. Si sabes escribir instrucciones claras para un compañero de trabajo, sabes escribir un skill. La parte técnica se reduce a crear una carpeta y un archivo.',
        '¿Los skills funcionan con ChatGPT o Gemini?' => 'El formato SKILL.md con carga automática es propio de Claude. Pero el contenido de un buen skill —el procedimiento, los criterios, el formato de salida— se puede pegar como prompt en cualquier herramienta. En ia-skills muchas fichas indican si el recurso es un skill instalable o un prompt reutilizable.',
        '¿Cuántos skills puedo tener instalados a la vez?' => 'Tantos como quieras, porque solo se carga en contexto el que la tarea necesita. Lo que sí conviene evitar es tener varios skills con descripciones parecidas: si dos compiten por la misma tarea, el modelo puede elegir el que no esperabas.',
        '¿Un skill puede ejecutar comandos o tocar mis archivos?' => 'El skill en sí es texto: instrucciones. Lo que puede pasar es que esas instrucciones le pidan al asistente ejecutar comandos, y ahí el asistente sí actúa con los permisos que tú le has dado. Por eso conviene leer un skill antes de instalarlo, igual que leerías un script antes de ejecutarlo.',
        '¿Se pueden compartir skills con el equipo?' => 'Sí, y es donde más valor tienen. Si el skill vive en el repositorio del proyecto, cualquiera que lo clone lo tiene disponible. Es la forma más barata de que una convención interna deje de depender de que alguien la recuerde.',
    ],
    'ctaTitle' => 'Skills listos para instalar',
    'ctaBody' => 'En el catálogo hay skills y prompts ya escritos y votados por quien los usa a diario. Empieza por la categoría de <a href="/profesiones/desarrollo">Desarrollo</a> si trabajas con código, o por <a href="/profesiones/marketing">Marketing</a> si tu día son campañas y contenido.',
    'body' => <<<'HTML'
<p>Si llevas unos meses usando IA para trabajar, probablemente tengas un documento —o una nota, o un chat marcado como favorito— donde guardas los prompts que sí funcionan. El de resumir reuniones. El de revisar código. El que te escribe la descripción de una vacante sin que suene a plantilla de 2015.</p>

<p>Ese documento es el síntoma de un problema: el conocimiento sobre <em>cómo</em> pedirle las cosas a la IA está fuera de la herramienta. Cada vez que lo necesitas tienes que acordarte de que existe, buscarlo, copiarlo y adaptarlo. Los skills existen para resolver exactamente eso.</p>

<h2 id="que-es">Qué es exactamente un skill</h2>

<p>Un skill es una carpeta con un archivo llamado <code>SKILL.md</code> dentro. Ese archivo tiene dos partes: una cabecera con el nombre y una descripción de cuándo debe usarse, y debajo las instrucciones en Markdown normal.</p>

<pre><code>~/.claude/skills/
└── revisar-pr/
    └── SKILL.md</code></pre>

<p>Y el contenido, simplificado:</p>

<pre><code>---
name: revisar-pr
description: Revisa un pull request buscando bugs, casos
  no cubiertos por tests y cambios que rompan la API pública.
  Úsalo cuando el usuario pida revisar código o un PR.
---

# Revisión de pull request

## Qué mirar, en este orden
1. Correctitud: ¿el cambio hace lo que dice el título?
2. Casos límite: nulos, listas vacías, fallos de red.
3. Contrato público: ¿rompe algo que otros consumen?

## Cómo reportar
Agrupa por severidad. Cada hallazgo con archivo:línea
y un escenario concreto de fallo, no una opinión.
Si no hay nada, dilo en una línea y termina.</code></pre>

<p>Eso es todo. No hay código, no hay configuración, no hay instalador. Es un procedimiento escrito, guardado en un sitio donde el asistente puede encontrarlo.</p>

<h2 id="prompt-vs-skill">Prompt, skill y plugin: las diferencias</h2>

<p>Los tres términos se usan como sinónimos y no lo son. La diferencia práctica está en quién se acuerda de usarlos y qué pueden hacer.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Prompt</th><th>Skill</th><th>Plugin</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Qué es</strong></td><td>Un texto que pegas en el chat</td><td>Una carpeta con instrucciones que el asistente carga solo</td><td>Un paquete que puede traer skills, comandos y automatismos</td></tr>
        <tr><td><strong>Quién lo invoca</strong></td><td>Tú, copiando y pegando</td><td>El asistente, al detectar la tarea</td><td>Se instala una vez y queda activo</td></tr>
        <tr><td><strong>Persiste</strong></td><td>No</td><td>Sí</td><td>Sí</td></tr>
        <tr><td><strong>Se comparte</strong></td><td>Mandando el texto</td><td>Metiéndolo en el repo</td><td>Por un marketplace o repositorio</td></tr>
        <tr><td><strong>Cuándo elegirlo</strong></td><td>Tarea puntual</td><td>Tarea que repites</td><td>Flujo con varias piezas</td></tr>
    </tbody>
</table>
</figure>

<p>La regla que uso: si he pegado el mismo texto tres veces, deja de ser un prompt y se convierte en un skill. Si el skill necesita además ejecutar scripts, engancharse a un evento o venir acompañado de otros, entonces hablamos de plugin.</p>

<h2 id="como-funciona">Cómo decide Claude que debe usar un skill</h2>

<p>Aquí está la parte que casi nadie explica bien, y la que determina si tu skill se usará o quedará muerto en el disco.</p>

<p>El asistente no lee todos tus skills en cada mensaje: eso llenaría el contexto de ruido. Lo que lee es la <strong>descripción</strong> de cada uno. Con esa lista corta decide si alguna encaja con lo que le estás pidiendo y, solo entonces, carga el contenido completo de ese skill.</p>

<p>La consecuencia es directa: la descripción no es documentación, es el mecanismo de activación. Estas dos descripciones producen resultados muy distintos:</p>

<ul>
    <li><strong>Mala:</strong> «Herramienta de revisión de código.» Describe qué es, no cuándo usarla. El modelo no tiene con qué comparar tu petición.</li>
    <li><strong>Buena:</strong> «Revisa un pull request buscando bugs y casos sin tests. Úsalo cuando el usuario pida revisar código, un PR, un diff o diga que algo "está raro" en un cambio.» Incluye las palabras que la persona va a escribir de verdad.</li>
</ul>

<p>Escribe la descripción pensando en las frases que dirás tú, no en el nombre técnico de la tarea. Si tu equipo dice «pásale un ojo a esto», que esa frase aparezca.</p>

<h2 id="donde-viven">Dónde se instalan y quién los ve</h2>

<p>Hay dos ubicaciones y la elección tiene consecuencias sociales, no técnicas:</p>

<ul>
    <li><code>~/.claude/skills/</code> — tus skills personales. Están en todos tus proyectos y no los ve nadie más. Aquí van tus manías: cómo quieres los mensajes de commit, cómo prefieres que te resuma un documento.</li>
    <li><code>.claude/skills/</code> dentro del repositorio — skills del proyecto. Se versionan con el código y los tiene todo el que clone. Aquí van las convenciones del equipo: cómo se escriben los tests en esta casa, qué hay que revisar antes de tocar el módulo de facturación.</li>
</ul>

<p>El segundo caso es el que cambia cómo trabaja un equipo. Una convención que vive en la cabeza de dos personas se pierde en cuanto una se va de vacaciones. La misma convención escrita en un skill del repositorio la aplica cualquiera, incluido el que entró la semana pasada.</p>

<h2 id="cuando-usar">Cuándo merece la pena convertir un prompt en skill</h2>

<p>No todo merece un skill. Estas cuatro señales indican que sí:</p>

<ol>
    <li><strong>Lo repites.</strong> Tres veces es el umbral razonable.</li>
    <li><strong>El resultado varía sin que quieras.</strong> Si cada vez que pides lo mismo obtienes un formato distinto, lo que falta es un procedimiento fijo.</li>
    <li><strong>Tiene criterio, no solo formato.</strong> «Ponlo en tabla» no necesita un skill. «Prioriza por impacto en ingresos y descarta lo que no se pueda medir en un trimestre» sí: es una decisión que quieres que se tome siempre igual.</li>
    <li><strong>Otra persona debería poder hacerlo igual que tú.</strong> El skill es la forma más barata de documentar cómo se hace algo bien.</li>
</ol>

<h2 id="errores">Los cinco errores que más se repiten</h2>

<ol>
    <li><strong>Descripción vaga.</strong> El skill nunca se activa y acabas invocándolo a mano, lo que anula su ventaja.</li>
    <li><strong>Meterlo todo en un skill.</strong> Un skill que hace revisión de código, generación de tests y redacción de changelog no hace bien ninguna de las tres. Uno por tarea.</li>
    <li><strong>Escribir un ensayo.</strong> Las instrucciones se compilan mentalmente cada vez que se cargan. Sé imperativo: pasos, criterios, formato de salida. Fuera la introducción y las justificaciones.</li>
    <li><strong>No decir cuándo <em>no</em> aplicarlo.</strong> Una línea de «no lo uses si…» evita la mitad de las activaciones equivocadas.</li>
    <li><strong>No fijar el formato de salida.</strong> Si no dices cómo quieres el resultado, cada ejecución te dará una versión distinta y tendrás que reformatear a mano.</li>
</ol>

<p>Cuando tengas claro esto, el siguiente paso es escribir el tuyo. Lo cubrimos paso a paso en <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill para Claude Code</a>, y si lo que necesitas es afinar el texto de las instrucciones, en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<p>Y si has llegado hasta aquí sin tener la herramienta instalada, el orden natural es el inverso: primero <a href="/guias/empezar-con-claude-code">instalar Claude Code y sobrevivir a la primera semana</a>, y volver a los skills cuando el proyecto ya te responda.</p>
HTML,
];
