<?php

return [
    'title' => 'Qué es un skill de IA y para qué sirve',
    'navTitle' => 'Qué es un skill de IA',
    'seoTitle' => 'Qué es un skill de IA: definición, usos y ejemplos',
    'description' => 'Un skill de IA es un procedimiento escrito que el asistente aplica solo cuando reconoce la tarea. Qué es, en qué se diferencia de un prompt y dónde se usa.',
    'excerpt' => 'Un prompt lo pegas tú cada vez. Un skill lo aplica el asistente por su cuenta cuando reconoce la tarea. Qué es exactamente, en qué se diferencia de un GPT, un agente o un servidor MCP, y cómo empezar.',
    'category' => 'Fundamentos',
    'published' => '2026-10-24',
    'updated' => '2026-10-24',
    'readingMinutes' => 9,
    'words' => 1485,
    'about' => 'Skills para asistentes de inteligencia artificial y el estándar abierto Agent Skills',
    'related' => ['que-son-los-skills-de-claude-code', 'agent-skills-estandar-abierto', 'gpts-proyectos-y-skills', 'que-es-un-agente-de-ia'],
    'toc' => [
        'que-es' => 'Qué es un skill de IA',
        'problema' => 'El problema que resuelve',
        'por-dentro' => 'Cómo es un skill por dentro',
        'diferencias' => 'Skill, prompt, GPT, agente y MCP',
        'donde' => 'Dónde se pueden usar',
        'ejemplos' => 'Ejemplos por profesión',
        'empezar' => 'Cómo empezar hoy',
    ],
    'faq' => [
        '¿Se dice «un skill» o «una skill»?' => 'Las dos formas se usan y no hay una norma fijada. «Skill» es una palabra inglesa que significa habilidad: quien piensa en un archivo o un programa suele decir «un skill», y quien piensa en la habilidad que aprende el asistente, «una skill».',
        '¿Un skill es lo mismo que un prompt?' => 'No. El contenido puede parecerse, pero un prompt lo pegas tú en cada conversación, y un skill queda guardado y el asistente lo aplica solo cuando reconoce la tarea. Muchos buenos skills empiezan siendo un prompt que se repetía demasiado.',
        '¿Hace falta saber programar para usar o escribir un skill?' => 'No. Un skill es un archivo de texto con instrucciones. Si sabes explicarle a un compañero cómo se hace una tarea, sabes escribir un skill. Algunos skills avanzados incluyen scripts de apoyo, pero son opcionales.',
        '¿Los skills son gratis?' => 'El formato es abierto: cualquiera puede escribir, compartir o descargar skills sin pagar. Lo que puede ser de pago es la herramienta que los ejecuta, según el plan que tengas en cada una.',
        '¿Es seguro instalar un skill que ha escrito otra persona?' => 'Conviene leerlo antes, igual que leerías un script antes de ejecutarlo. Un skill es texto, pero sus instrucciones pueden pedirle al asistente que ejecute comandos o modifique archivos, y el asistente lo hará con los permisos que tú le hayas dado.',
    ],
    'ctaTitle' => 'Miles de skills listos para usar',
    'ctaBody' => 'En el catálogo hay skills y prompts en español para cada profesión, la mayoría con su SKILL.md listo para descargar. Empieza por <a href="/profesiones/diseno">Diseño</a>, <a href="/profesiones/marketing">Marketing</a> o <a href="/profesiones/desarrollo">Desarrollo</a>, o <a href="/skills">explora el catálogo completo</a>.',
    'body' => <<<'HTML'
<p>Si usas la IA para trabajar, conoces la escena: tienes un prompt que funciona —el de resumir reuniones, el de revisar un contrato, el de redactar una propuesta— y cada vez que lo necesitas lo buscas, lo copias, lo pegas y lo retocas. Funciona, pero depende de que te acuerdes de que existe y de dónde lo guardaste.</p>

<p>Los skills nacieron para quitar ese paso. La palabra se usa ya para cosas bastante distintas, así que conviene tener claro qué significa exactamente.</p>

<h2 id="que-es">Qué es un skill de IA</h2>

<p><strong>Un skill de IA es un conjunto de instrucciones guardado que el asistente carga por sí mismo cuando detecta que la tarea lo requiere.</strong> No lo pegas tú: lo instalas una vez y, a partir de ahí, el asistente lo aplica cada vez que reconoce la situación para la que fue escrito.</p>

<p>Tres rasgos lo distinguen de un prompt cualquiera:</p>

<ul>
    <li><strong>Persiste.</strong> No vive dentro de una conversación: está disponible en todas.</li>
    <li><strong>Se activa solo.</strong> El asistente decide cuándo usarlo a partir de una descripción que escribes tú.</li>
    <li><strong>Tiene criterio, no solo formato.</strong> Un buen skill no se limita a «ponlo en una tabla»: dice qué mirar, en qué orden y qué descartar.</li>
</ul>

<p>En inglés, <em>skill</em> significa habilidad, y la idea es justo esa: enseñarle al asistente a hacer algo bien, de forma que no haga falta volver a explicárselo.</p>

<h2 id="problema">El problema que resuelve</h2>

<p>Un modelo de lenguaje no recuerda cómo trabajas. Cada conversación empieza de cero, así que el conocimiento sobre <em>cómo</em> quieres las cosas —el tono de tus correos, los criterios para revisar un contrato, el formato de tus informes— se queda fuera de la herramienta: en tu cabeza o en un documento aparte.</p>

<p>Eso tiene tres costes que se notan con el uso diario:</p>

<ol>
    <li><strong>Repetición.</strong> Vuelves a escribir o a pegar lo mismo una y otra vez.</li>
    <li><strong>Resultados que varían.</strong> Si cada vez lo pides de una manera algo distinta, cada vez obtienes una respuesta distinta.</li>
    <li><strong>Conocimiento que no se comparte.</strong> Lo que sabes hacer bien con la IA no le sirve a tu equipo, porque no está escrito en ningún sitio que el asistente lea.</li>
</ol>

<p>Un skill resuelve los tres a la vez: escribes el procedimiento una vez, el asistente lo aplica siempre igual, y cualquiera que lo tenga instalado obtiene el mismo resultado.</p>

<h2 id="por-dentro">Cómo es un skill por dentro</h2>

<p>El formato es deliberadamente sencillo. Un skill es una carpeta con un archivo <code>SKILL.md</code>, que tiene dos partes:</p>

<pre><code>---
name: resumir-reunion
description: Resume una reunión en decisiones, tareas con
  responsable y temas abiertos. Úsalo cuando el usuario pegue
  una transcripción o pida un acta o un resumen de reunión.
---

# Resumen de reunión

1. Decisiones tomadas, una por línea.
2. Tareas: qué, quién y para cuándo. Si falta el responsable,
   márcalo como «sin asignar»; no lo inventes.
3. Temas que quedaron abiertos.

Máximo una página. Sin introducción ni conclusiones.</code></pre>

<p>Arriba, entre guiones, va la cabecera con el <strong>nombre</strong> y la <strong>descripción</strong>. Debajo, las instrucciones en texto normal. La carpeta puede llevar además plantillas, ejemplos o scripts de apoyo, pero para la mayoría de tareas basta con el archivo.</p>

<p>La pieza clave es la descripción. El asistente no lee todos tus skills enteros en cada mensaje: lee solo sus descripciones y, cuando una encaja con lo que le pides, carga el resto. Por eso la descripción tiene que decir <em>cuándo</em> usarlo, con las palabras que de verdad vas a escribir. Cómo se redactan para que se activen bien lo contamos en <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill</a>.</p>

<h2 id="diferencias">Skill, prompt, GPT, agente y MCP: en qué se diferencian</h2>

<p>Son términos que se usan como sinónimos y no lo son. La forma más rápida de distinguirlos es preguntarse qué guarda cada uno y quién decide cuándo se usa.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Qué es</th><th>Quién lo activa</th><th>Para qué sirve</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Prompt</strong></td><td>Un texto que escribes en el chat</td><td>Tú, cada vez</td><td>Una petición puntual</td></tr>
        <tr><td><strong>Skill</strong></td><td>Un procedimiento escrito que el asistente guarda</td><td>El asistente, al reconocer la tarea</td><td>Hacer una tarea repetida siempre igual</td></tr>
        <tr><td><strong>GPT o proyecto</strong></td><td>Un asistente configurado con instrucciones fijas</td><td>Tú, al abrirlo</td><td>Un contexto de trabajo estable</td></tr>
        <tr><td><strong>Agente</strong></td><td>Una IA que encadena pasos y ejecuta acciones</td><td>Tú, dándole un objetivo</td><td>Tareas de varios pasos</td></tr>
        <tr><td><strong>Servidor MCP</strong></td><td>Una conexión a datos o herramientas externas</td><td>El asistente, cuando necesita esos datos</td><td>Darle acceso a lo que no tiene</td></tr>
    </tbody>
</table>
</figure>

<p>La diferencia que más confunde es la de skill y MCP. Un skill le enseña al asistente <em>cómo</em> hacer algo; un servidor MCP le da <em>acceso</em> a algo: un calendario, una base de datos, un catálogo. Se combinan bien, porque un skill puede describir el procedimiento y apoyarse en un MCP para consultar los datos.</p>

<p>Si dudas entre guardar un prompt como GPT, como proyecto o como skill, lo comparamos con detalle en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>, y lo que separa a un agente de un chatbot está en <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>

<h2 id="donde">Dónde se pueden usar</h2>

<p>Los skills nacieron en Claude, pero el formato se publicó como estándar abierto, <strong>Agent Skills</strong>, y hoy lo leen muchas herramientas. Entre ellas:</p>

<ul>
    <li><strong>Claude Code</strong>, que los busca en <code>~/.claude/skills/</code> para los tuyos y en <code>.claude/skills/</code> dentro de cada proyecto.</li>
    <li><strong>Cursor</strong>, <strong>VS Code con GitHub Copilot</strong> y <strong>Codex</strong>, que comparten la carpeta <code>.agents/skills/</code>.</li>
    <li><strong>ChatGPT</strong>, donde se invocan escribiendo <code>@</code> y el nombre del skill.</li>
</ul>

<p>Lo que escribas, por tanto, no te ata a una herramienta: el mismo skill te sirve si mañana cambias de asistente. Qué carpeta lee cada uno y qué campos viajan bien entre ellos está en <a href="/guias/agent-skills-estandar-abierto">Agent Skills: el estándar abierto</a>, y cómo funcionan en concreto dentro de Claude Code, en <a href="/guias/que-son-los-skills-de-claude-code">skills de Claude Code</a>.</p>

<p>¿Y en las herramientas que no los leen? El contenido de un skill sigue siendo útil, porque es un buen prompt. Lo que se pierde es la activación automática, no el procedimiento.</p>

<h2 id="ejemplos">Ejemplos de skills por profesión</h2>

<p>Un skill rinde en cualquier tarea que se repita y tenga criterio. Algunos ejemplos de lo que se puede dejar escrito:</p>

<ul>
    <li><strong><a href="/profesiones/marketing">Marketing</a>:</strong> adaptar un texto al tono de la marca, o revisar un anuncio contra las normas de publicidad antes de publicarlo.</li>
    <li><strong><a href="/profesiones/desarrollo">Desarrollo</a>:</strong> revisar un pull request siempre con la misma lista de comprobaciones, o escribir los mensajes de commit con la convención del equipo.</li>
    <li><strong><a href="/profesiones/diseno">Diseño</a>:</strong> convertir un brief en propuestas de concepto, paleta y tipografía con un formato fijo.</li>
    <li><strong><a href="/profesiones/legal">Legal</a>:</strong> revisar un contrato marcando las cláusulas de riesgo y proponiendo una redacción alternativa.</li>
    <li><strong><a href="/profesiones/ventas">Ventas</a>:</strong> preparar una llamada con un cliente a partir de sus datos y de su historial.</li>
    <li><strong><a href="/profesiones/rrhh">Recursos humanos</a>:</strong> redactar una oferta de empleo que no suene a plantilla.</li>
</ul>

<p>Todos tienen algo en común: hay una forma buena de hacerlo, y escribirla una vez evita tener que explicarla cada vez.</p>

<h2 id="empezar">Cómo empezar hoy</h2>

<p>Hay tres caminos, de menos a más esfuerzo:</p>

<ol>
    <li><strong>Usar uno ya escrito.</strong> En el <a href="/skills">catálogo de ia-skills</a> hay miles de skills y prompts en español organizados por profesión, la mayoría con su <code>SKILL.md</code> listo para descargar.</li>
    <li><strong>Dejar que tu asistente los busque.</strong> Si usas Claude Code, puedes conectar el catálogo con un comando y Claude buscará e instalará skills por su cuenta durante la conversación. Lo explicamos en <a href="/mcp">ia-skills dentro de Claude Code</a>.</li>
    <li><strong>Escribir el tuyo.</strong> Coge el prompt que más repites, añádele una descripción de cuándo usarlo y guárdalo como <code>SKILL.md</code>. El paso a paso está en <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill para Claude Code</a>.</li>
</ol>

<p>Si te quedas con una sola idea: un prompt resuelve una petición; un skill resuelve una tarea que vas a repetir. En cuanto te sorprendas pegando el mismo texto por tercera vez, ese texto está pidiendo ser un skill.</p>
HTML,
];
