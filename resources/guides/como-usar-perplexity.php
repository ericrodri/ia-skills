<?php

return [
    'title' => 'Cómo usar Perplexity: buscar con IA y comprobar las fuentes',
    'navTitle' => 'Cómo usar Perplexity',
    'seoTitle' => 'Cómo usar Perplexity: buscar con IA y fuentes',
    'description' => 'Cómo usar Perplexity para buscar información con fuentes: qué preguntarle, los espacios, la investigación a fondo, el navegador Comet y sus límites.',
    'excerpt' => 'Perplexity es un buscador que responde con un texto y enlaza cada frase a su fuente. Bien usado, sustituye a media hora de abrir pestañas; mal usado, te da una respuesta segura construida sobre fuentes flojas.',
    'category' => 'Herramientas',
    'published' => '2026-09-30',
    'updated' => '2026-09-30',
    'readingMinutes' => 7,
    'words' => 1157,
    'about' => 'Uso práctico de Perplexity como buscador con inteligencia artificial',
    'related' => ['planificar-un-viaje-con-ia', 'investigar-con-ia-deep-research', 'alucinaciones-de-la-ia', 'como-usar-claude', 'como-usar-chatgpt', 'herramientas-de-ia-gratis', 'aparecer-en-chatgpt-y-perplexity-geo'],
    'toc' => [
        'que-es' => 'Qué es y en qué se diferencia de un chat',
        'empezar' => 'Empezar: cuenta y primera búsqueda',
        'preguntar' => 'Cómo preguntarle para que acierte',
        'fuentes' => 'Leer las fuentes (la parte que nadie hace)',
        'funciones' => 'Espacios, investigación a fondo y Comet',
        'cuando' => 'Cuándo usar Perplexity y cuándo no',
    ],
    'faq' => [
        '¿Qué es Perplexity?' => 'Perplexity es un buscador con inteligencia artificial. En lugar de una lista de enlaces, busca en la web, lee varias páginas y te devuelve una respuesta redactada con números que enlazan a la fuente de cada afirmación. Puedes seguir preguntando sobre el mismo tema como en una conversación.',
        '¿Perplexity es gratis?' => 'Sí, se puede usar gratis desde la web o la aplicación, incluso sin cuenta para búsquedas sueltas. El plan de pago añade más búsquedas avanzadas al día, elegir el modelo de IA, subir más archivos y más uso de la investigación a fondo.',
        '¿Es mejor Perplexity o ChatGPT para buscar información?' => 'Para preguntas de actualidad o datos que necesitas comprobar, Perplexity suele ser más cómodo porque muestra las fuentes de forma muy visible y está pensado para buscar. Para redactar, razonar sobre tus propios documentos o crear contenido, un asistente como ChatGPT o Claude va mejor. Muchos profesionales usan los dos.',
        '¿Qué es Comet de Perplexity?' => 'Comet es el navegador web de Perplexity. Funciona como Chrome, pero con un asistente en un lateral que puede resumir la página que estás viendo, comparar varias pestañas o hacer pequeñas tareas por ti. El navegador es gratuito; algunas funciones avanzadas requieren un plan de pago.',
        '¿Me puedo fiar de las respuestas de Perplexity?' => 'Más que de un chat sin fuentes, pero no a ciegas. Perplexity puede citar una página que no dice exactamente lo que afirma la respuesta, o apoyarse en fuentes poco fiables. Para cualquier dato que vayas a usar en tu trabajo, abre la fuente citada y compruébalo.',
    ],
    'ctaTitle' => 'Prompts de investigación listos para usar',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para investigar mercados, competidores y normativa que puedes adaptar a Perplexity. Empieza por tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Perplexity es, ante todo, un buscador. Le haces una pregunta, busca en la web, lee varias páginas y te devuelve una respuesta redactada en la que cada frase lleva un número que enlaza a su fuente. Esa diferencia con ChatGPT, Claude o Gemini, que nacieron como asistentes de conversación y luego aprendieron a buscar, marca para qué sirve bien y para qué no. Esta guía explica cómo sacarle partido en el trabajo sin caer en su trampa principal: creer que una respuesta con enlaces es una respuesta comprobada.</p>

<h2 id="que-es">Qué es y en qué se diferencia de un chat</h2>

<p>Un asistente como ChatGPT responde sobre todo con lo que aprendió durante su entrenamiento y busca en la web cuando lo considera necesario. Perplexity hace lo contrario: <strong>busca siempre</strong> y construye la respuesta a partir de lo que encuentra. Por eso destaca en tres tipos de preguntas:</p>

<ul>
    <li><strong>Actualidad</strong>: cambios normativos, noticias del sector, lanzamientos de la competencia.</li>
    <li><strong>Datos verificables</strong>: precios, fechas, cifras de mercado, requisitos de un trámite. También los de un viaje, como horarios o requisitos de entrada; cómo combinarlo con un chat para el itinerario está en <a href="/guias/planificar-un-viaje-con-ia">planificar un viaje con IA</a>.</li>
    <li><strong>Panorámicas rápidas</strong>: «qué opciones hay para…», «qué dicen las fuentes sobre…».</li>
</ul>

<p>Y rinde peor cuando la tarea es redactar un texto largo con tu tono, razonar sobre tus propios documentos o trabajar de forma continuada en un proyecto. Para eso encaja mejor un asistente de conversación; lo explicamos en las guías de <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a> y <a href="/guias/como-usar-claude">cómo usar Claude</a>.</p>

<h2 id="empezar">Empezar: cuenta y primera búsqueda</h2>

<p>Entra en perplexity.ai o instala la aplicación. Puedes hacer búsquedas sin cuenta, pero conviene crearla para guardar el historial y organizar búsquedas por temas. La versión gratuita basta para aprender; qué incluye frente a otras herramientas sin coste está en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<p>Antes de empezar, revisa en los ajustes el idioma de las respuestas y si quieres que se guarde tu historial. Y recuerda que lo que escribes viaja a sus servidores: no pegues datos de clientes en una búsqueda.</p>

<h2 id="preguntar">Cómo preguntarle para que acierte</h2>

<p>El error más común es usar Perplexity como Google, con dos o tres palabras sueltas. Rinde mucho más con <strong>una pregunta completa y con contexto</strong>. Compara «ayudas autónomos 2026» con esto:</p>
<pre><code>Soy autónomo en Andalucía, dado de alta desde hace dos años, con un
pequeño estudio de diseño. ¿Qué ayudas públicas para digitalización o
contratación siguen abiertas este año? Para cada una: organismo,
cuantía, plazo y enlace a la convocatoria oficial.</code></pre>

<p>Tres ajustes que mejoran mucho los resultados:</p>

<ol>
    <li><strong>Pide fuentes de un tipo concreto</strong>: «usa solo fuentes oficiales», «prioriza estudios académicos», «busca en foros de usuarios».</li>
    <li><strong>Acota la fecha</strong> cuando importe: «solo información publicada desde enero».</li>
    <li><strong>Pide el formato</strong>: una tabla comparativa, una lista con enlaces, un resumen de cinco líneas.</li>
</ol>

<p>Después, sigue preguntando en la misma conversación: Perplexity mantiene el contexto y afina la búsqueda. Más técnicas generales en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="fuentes">Leer las fuentes (la parte que nadie hace)</h2>

<p>Los números junto a cada frase dan una sensación de rigor que no siempre está justificada. Perplexity puede equivocarse de tres maneras:</p>

<ul>
    <li><strong>Cita una fuente que no dice eso.</strong> La página existe, pero la afirmación está exagerada, sacada de contexto o mezclada con otra.</li>
    <li><strong>Se apoya en fuentes flojas.</strong> Un blog que copia a otro blog, una nota de prensa de una empresa o un foro sin contrastar.</li>
    <li><strong>Mezcla fechas.</strong> Junta un dato de hace tres años con otro de este mes como si fueran del mismo momento.</li>
</ul>

<p>La regla práctica: <strong>para todo dato que vaya a salir de tu mesa, abre la fuente</strong> y comprueba que dice lo que Perplexity afirma. Tarda un minuto y evita el error más caro. Por qué los modelos se inventan cosas con total seguridad lo explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="funciones">Espacios, investigación a fondo y Comet</h2>

<ul>
    <li><strong>Espacios.</strong> Agrupan búsquedas sobre un tema y permiten fijar instrucciones y archivos propios. Útiles para seguir un sector, un cliente o una licitación durante semanas.</li>
    <li><strong>Investigación a fondo.</strong> En lugar de una búsqueda rápida, trabaja varios minutos, consulta decenas de fuentes y entrega un informe. Cuándo compensa y cómo revisarlo está en la guía de <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a>.</li>
    <li><strong>Comet.</strong> Es el navegador de Perplexity: un navegador normal con un asistente al lado que resume la página que estás leyendo, compara pestañas o rellena tareas sencillas. Si te interesa que la IA actúe por ti, lee antes <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>, y no le des acceso a cuentas sensibles.</li>
</ul>

<h2 id="cuando">Cuándo usar Perplexity y cuándo no</h2>

<p>Usa Perplexity cuando la pregunta tenga respuesta en internet y necesites saber de dónde sale: preparar una reunión con un cliente, revisar qué ha cambiado en una normativa, comparar proveedores o hacer un primer mapa de un tema nuevo.</p>

<p>No lo uses como sustituto de tu criterio ni de las fuentes primarias. Para decisiones legales, fiscales o médicas, Perplexity te ayuda a encontrar el documento oficial, pero la respuesta está en ese documento, no en el resumen.</p>

<p>Si tienes una web, hay otra cara de la moneda: Perplexity también es un canal por el que tus clientes pueden encontrarte. Cómo conseguir que te cite está en <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">aparecer en ChatGPT y Perplexity</a>.</p>

<p>Si solo te quedas con una idea: Perplexity te ahorra buscar, no comprobar. Úsalo para llegar antes a las fuentes buenas y lee esas fuentes.</p>
HTML,
];
