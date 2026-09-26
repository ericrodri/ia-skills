<?php

return [
    'title' => 'Robots.txt y bots de IA: qué bloquear y qué dejar pasar',
    'navTitle' => 'Robots.txt y bots de IA',
    'seoTitle' => 'Robots.txt y bots de IA: qué bloquear',
    'description' => 'GPTBot, ClaudeBot, PerplexityBot, Google-Extended: qué hace cada bot de IA, cuáles bloquear en robots.txt y cómo hacerlo sin desaparecer de ChatGPT.',
    'excerpt' => 'Bloquear «a la IA» en robots.txt ya no es una sola decisión. Cada empresa tiene un bot para entrenar modelos, otro para su buscador y otro que visita tu página cuando un usuario lo pide. Tratarlos igual es la forma más rápida de desaparecer de las respuestas sin proteger nada.',
    'category' => 'Método',
    'published' => '2026-09-26',
    'updated' => '2026-09-26',
    'readingMinutes' => 8,
    'words' => 1257,
    'about' => 'Control de rastreadores de inteligencia artificial con robots.txt',
    'related' => ['aparecer-en-chatgpt-y-perplexity-geo', 'llms-txt-sirve-para-algo', 'medir-el-trafico-de-ia', 'auditoria-seo-tecnica', 'paginas-que-google-no-indexa', 'modo-ia-de-google'],
    'toc' => [
        'tres-tipos' => 'Los tres tipos de bot de IA',
        'lista' => 'Los bots que conviene conocer',
        'decidir' => 'Qué bloquear según tu negocio',
        'ejemplos' => 'Tres robots.txt de ejemplo',
        'cdn' => 'El bloqueo que no sabías que tenías',
        'limites' => 'Lo que robots.txt no puede hacer',
        'comprobar' => 'Cómo comprobar que funciona',
    ],
    'faq' => [
        '¿Bloquear GPTBot me saca de ChatGPT?' => 'No del todo. GPTBot es el rastreador que recoge contenido para entrenar modelos. Las respuestas con fuentes de ChatGPT dependen de OAI-SearchBot, y las visitas que ChatGPT hace cuando un usuario le pide leer una página, de ChatGPT-User. Puedes bloquear el primero y permitir los otros dos, que es lo que hacen muchos medios.',
        '¿Bloquear Google-Extended me quita de los AI Overviews?' => 'No. Google-Extended no es un bot, es una señal que le dice a Google que no use tu contenido para entrenar ni para dar contexto a Gemini. Los AI Overviews y el Modo IA se alimentan del índice normal de Googlebot, así que la única forma de salir de ellos es salir de la búsqueda, o limitar los fragmentos con nosnippet.',
        '¿Todos los bots de IA respetan robots.txt?' => 'Los de las grandes empresas dicen hacerlo con sus rastreadores automáticos. Con los agentes que actúan a petición de un usuario la cosa cambia: algunos proveedores documentan que no aplican robots.txt porque consideran que es el usuario quien visita la página. Y hay bots menos conocidos que lo ignoran sin más; contra esos solo sirve bloquear en el servidor o en la CDN.',
        '¿Bloquear los bots de IA mejora mi posicionamiento en Google?' => 'No. Googlebot es independiente de los bots de IA de otras empresas y bloquearlos no cambia nada en Google. Lo que sí puede pasar es lo contrario: una regla demasiado amplia en robots.txt o en el cortafuegos que acaba afectando a Googlebot o a Bingbot.',
        '¿Hace falta un llms.txt además de robots.txt?' => 'No. robots.txt es el mecanismo que los bots leen para saber si pueden entrar. llms.txt es una propuesta de índice para modelos de lenguaje que, a día de hoy, ninguna gran empresa se ha comprometido a usar. Si tienes que elegir dónde dedicar el tiempo, revisa bien el robots.txt.',
    ],
    'ctaTitle' => 'Prompts para revisar la parte técnica de tu web',
    'ctaBody' => 'Auditar un robots.txt, leer los registros del servidor o preparar un informe técnico para tu equipo: en <a href="/profesiones/marketing">Marketing</a> y <a href="/profesiones/desarrollo">Desarrollo</a> están los prompts que mejor funcionan.',
    'body' => <<<'HTML'
<p>Hace dos años la pregunta era sencilla: ¿dejo que la IA use mi contenido o no? Añadías <code>User-agent: GPTBot</code> y <code>Disallow: /</code> y listo. Hoy esa regla sola puede sacarte de las respuestas de ChatGPT, dejar pasar a otros veinte bots y no proteger lo que querías proteger. El motivo es que cada empresa de IA ya no tiene un bot, sino varios, y cada uno hace algo distinto.</p>

<h2 id="tres-tipos">Los tres tipos de bot de IA</h2>

<figure>
<table>
    <thead>
        <tr><th>Tipo</th><th>Qué hace</th><th>Si lo bloqueas</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Entrenamiento</strong></td><td>Recoge páginas para entrenar futuros modelos</td><td>Tu contenido no entra en el entrenamiento. No afecta a las citas.</td></tr>
        <tr><td><strong>Búsqueda</strong></td><td>Indexa páginas para el buscador del asistente</td><td>Dejas de aparecer como fuente en sus respuestas.</td></tr>
        <tr><td><strong>A petición del usuario</strong></td><td>Visita una página concreta porque alguien se lo ha pedido</td><td>El asistente no puede leer tu página cuando un usuario la menciona.</td></tr>
    </tbody>
</table>
</figure>

<p>La mayoría de webs que quieren «proteger su contenido» en realidad quieren bloquear solo el primer tipo. Y la mayoría de las que quieren «aparecer en ChatGPT» necesitan que los otros dos puedan entrar.</p>

<h2 id="lista">Los bots que conviene conocer</h2>

<figure>
<table>
    <thead>
        <tr><th>Empresa</th><th>Entrenamiento</th><th>Búsqueda</th><th>A petición</th></tr>
    </thead>
    <tbody>
        <tr><td>OpenAI</td><td><code>GPTBot</code></td><td><code>OAI-SearchBot</code></td><td><code>ChatGPT-User</code></td></tr>
        <tr><td>Anthropic</td><td><code>ClaudeBot</code></td><td><code>Claude-SearchBot</code></td><td><code>Claude-User</code></td></tr>
        <tr><td>Perplexity</td><td>—</td><td><code>PerplexityBot</code></td><td><code>Perplexity-User</code></td></tr>
        <tr><td>Google</td><td><code>Google-Extended</code> (señal, no bot)</td><td><code>Googlebot</code></td><td>—</td></tr>
        <tr><td>Apple</td><td><code>Applebot-Extended</code> (señal)</td><td><code>Applebot</code></td><td>—</td></tr>
        <tr><td>Otros</td><td><code>CCBot</code>, <code>Bytespider</code>, <code>meta-externalagent</code></td><td>—</td><td>—</td></tr>
    </tbody>
</table>
</figure>

<p>Dos matices importantes. Primero, <strong>Google-Extended y Applebot-Extended no rastrean nada</strong>: son nombres que lees en robots.txt para decidir si el contenido que ya recoge Googlebot o Applebot puede usarse para entrenar sus modelos. Segundo, <strong>los AI Overviews y el <a href="/guias/modo-ia-de-google">Modo IA de Google</a> dependen de Googlebot</strong>, no de Google-Extended. Bloquear Google-Extended no te saca de ahí.</p>

<p>La lista cambia cada pocos meses. Antes de tocar nada, consulta la documentación oficial de cada empresa, que publica sus agentes y, en muchos casos, los rangos de IP desde los que rastrean.</p>

<h2 id="decidir">Qué bloquear según tu negocio</h2>

<ul>
    <li><strong>Vives de que te descubran</strong> (servicios, software, tiendas, marca personal). Deja pasar a todos. Que un asistente te recomiende es un canal de captación, como explica la guía de <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">cómo aparecer en ChatGPT y Perplexity</a>. Si te preocupa el entrenamiento, bloquea solo los de entrenamiento.</li>
    <li><strong>Vives de la publicidad o de las suscripciones</strong> (medios, contenido de pago). Bloquea el entrenamiento y piensa bien el resto. Cada respuesta completa es una visita que no llega, pero salir de todas las respuestas también te quita visibilidad. Muchos medios permiten la búsqueda y bloquean el entrenamiento.</li>
    <li><strong>Tienes contenido que no debería salir de tu web</strong> (zonas privadas, datos de clientes). Eso no se protege con robots.txt: se protege con autenticación. robots.txt es público y cualquiera puede leer qué rutas intentas esconder.</li>
</ul>

<h2 id="ejemplos">Tres robots.txt de ejemplo</h2>

<p><strong>1. Bloquear solo el entrenamiento</strong>, manteniendo las citas:</p>

<pre><code>User-agent: GPTBot
User-agent: ClaudeBot
User-agent: CCBot
User-agent: Bytespider
User-agent: meta-externalagent
User-agent: Google-Extended
User-agent: Applebot-Extended
Disallow: /

User-agent: *
Allow: /</code></pre>

<p><strong>2. Permitir todo menos una sección</strong>, por ejemplo artículos de pago:</p>

<pre><code>User-agent: GPTBot
User-agent: ClaudeBot
User-agent: OAI-SearchBot
User-agent: Claude-SearchBot
User-agent: PerplexityBot
Disallow: /premium/

User-agent: *
Allow: /</code></pre>

<p><strong>3. Salir de todo lo que sea IA</strong>. Añade al primer ejemplo los bots de búsqueda y de usuario (<code>OAI-SearchBot</code>, <code>ChatGPT-User</code>, <code>Claude-SearchBot</code>, <code>Claude-User</code>, <code>PerplexityBot</code>, <code>Perplexity-User</code>). Ten claro el precio: desapareces como fuente en esos asistentes.</p>

<p>Agrupar varios <code>User-agent</code> encima de una misma regla es válido y más fácil de mantener que repetir el bloque. Lo que no funciona es escribir <code>User-agent: *AI*</code>: robots.txt no admite comodines en el nombre del agente.</p>

<h2 id="cdn">El bloqueo que no sabías que tenías</h2>

<p>La causa más frecuente de que una web no aparezca en los asistentes no está en robots.txt, sino en la CDN o el cortafuegos. Cloudflare, por ejemplo, empezó en 2025 a bloquear por defecto a los rastreadores de IA en los dominios nuevos, y otros proveedores tienen reglas de «protección contra bots» que los meten en el mismo saco que el spam.</p>

<p>Si tu robots.txt permite a <code>OAI-SearchBot</code> pero la CDN le devuelve un 403, el resultado es el mismo que si lo hubieras bloqueado. Revisa la configuración de bots de tu proveedor y decide allí lo mismo que decidiste en robots.txt.</p>

<h2 id="limites">Lo que robots.txt no puede hacer</h2>

<ul>
    <li><strong>No es una barrera.</strong> Es una petición. Los bots serios la respetan; los demás, no. Para esos hace falta bloquear por agente o por IP en el servidor.</li>
    <li><strong>No borra lo que ya se recogió.</strong> Si tu contenido entró en un entrenamiento anterior, bloquear hoy no lo saca de ahí.</li>
    <li><strong>No controla lo que otros publican.</strong> Si tu texto está copiado en otra web o citado en un foro, los bots lo leerán allí.</li>
    <li><strong>No aplica siempre a los agentes de usuario.</strong> Algunos proveedores indican que sus visitas a petición de un usuario no siguen robots.txt, porque tratan esa visita como la de una persona.</li>
</ul>

<h2 id="comprobar">Cómo comprobar que funciona</h2>

<ol>
    <li><strong>Lee tu robots.txt en producción</strong>, no el del repositorio. Es habitual que un despliegue lo sobrescriba con el del entorno de pruebas, y eso también afecta a Google: la guía de <a href="/guias/paginas-que-google-no-indexa">páginas que Google no indexa</a> explica cómo detectarlo.</li>
    <li><strong>Busca los agentes en los registros del servidor.</strong> Si permitiste a <code>OAI-SearchBot</code> y no aparece nunca, o aparece con respuestas 403, el bloqueo está en otro sitio.</li>
    <li><strong>Pregunta a los asistentes por tu marca</strong> o por una página concreta y comprueba si la citan o si dicen que no pueden acceder.</li>
    <li><strong>Mide lo que llega.</strong> Las visitas que vienen de ChatGPT o Perplexity se pueden separar en la analítica, como se explica en <a href="/guias/medir-el-trafico-de-ia">cómo medir el tráfico que llega desde la IA</a>.</li>
</ol>

<p>Resumido: separa entrenamiento, búsqueda y visitas de usuario, decide cada una según de qué vive tu web y comprueba que la CDN dice lo mismo que el robots.txt. Casi todos los problemas vienen de tratar a todos los bots de IA como si fueran uno.</p>
HTML,
];
