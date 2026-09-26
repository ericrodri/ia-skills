<?php

return [
    'title' => 'llms.txt: qué es y si sirve de algo en 2026',
    'navTitle' => 'llms.txt',
    'seoTitle' => 'llms.txt: ¿sirve de algo en 2026?',
    'description' => 'Los datos de 2026 dicen que casi nadie lee el fichero llms.txt. Qué es, qué ha dicho Google, cuándo compensa ponerlo igualmente y qué hacer en su lugar.',
    'excerpt' => 'Medio sector recomienda añadir un llms.txt y los datos dicen que casi ningún bot lo pide. Aquí están las cifras, la postura de Google y la decisión razonable: cuesta veinte minutos, no es una estrategia.',
    'category' => 'Método',
    'published' => '2026-09-19',
    'updated' => '2026-09-19',
    'readingMinutes' => 10,
    'words' => 1588,
    'about' => 'El fichero llms.txt y su utilidad real para la visibilidad en IA',
    'related' => ['robots-txt-y-bots-de-ia', 'aparecer-en-chatgpt-y-perplexity-geo', 'datos-estructurados-para-ia', 'medir-el-trafico-de-ia', 'auditoria-seo-tecnica', 'ai-overviews-caida-de-clics'],
    'toc' => [
        'que-es' => 'Qué es exactamente un llms.txt',
        'datos' => 'Lo que dicen los datos de 2026',
        'google' => 'Qué han dicho Google y los demás',
        'decision' => 'Entonces, ¿lo pongo o no?',
        'como' => 'Cómo hacer uno decente en veinte minutos',
        'alternativa' => 'Lo que sí mueve la aguja',
        'errores' => 'Errores habituales',
    ],
    'faq' => [
        '¿Google lee el llms.txt?' => 'No. Google ha dicho públicamente que no lo usa ni tiene planes de usarlo, y en su documentación sobre optimización para funciones generativas aparece en la lista de tácticas innecesarias. Uno de sus portavoces llegó a compararlo con la vieja etiqueta meta keywords: un fichero que el editor rellena declarando lo que quiere que se entienda de su sitio, sin ninguna verificación posible. La comparación es dura pero describe bien el problema de fondo.',
        '¿Y ChatGPT, Claude o Perplexity?' => 'Ninguna de las grandes compañías se ha comprometido públicamente a leerlo en producción. Lo que sí está documentado es que sus rastreadores piden con ganas el contenido en Markdown cuando existe: hay experimentos en los que exponer versiones .md de las páginas generó cientos de peticiones de ClaudeBot y GPTBot en menos de una hora. Es decir, lo que les interesa es el contenido limpio, no el índice que lo anuncia.',
        '¿Entonces por qué todo el mundo lo recomienda?' => 'Porque es la recomendación más barata de dar y la más fácil de ejecutar: un fichero de texto, quince minutos y una casilla marcada en el informe. Además apareció en el momento exacto en que todo el mundo buscaba algo accionable que hacer con la visibilidad en IA. Que una táctica sea popular y que funcione son dos cosas independientes, y esta es un buen recordatorio.',
        '¿Puede hacer daño tenerlo?' => 'Directamente no: es un fichero estático que nadie pide. El daño es de oportunidad y de mantenimiento. De oportunidad, si te sirve de coartada para no hacer el trabajo que sí importa. De mantenimiento, si se queda desactualizado y acaba describiendo una estructura de sitio que ya no existe, lo cual es peor que no tenerlo. Si no lo vas a generar automáticamente, mejor no lo pongas.',
        '¿Cambiará esto en el futuro?' => 'Puede. El estándar es joven y a alguna de las compañías le puede compensar adoptarlo, sobre todo para documentación técnica, que es el caso de uso donde más sentido tiene. La postura razonable es la de siempre con los estándares emergentes: si generarlo te cuesta veinte minutos y cero mantenimiento, adelante; si te obliga a montar un proceso, espera a que alguien confirme que lo lee.',
    ],
    'ctaTitle' => 'Los prompts de SEO que usa gente que vive de esto',
    'ctaBody' => 'Auditoría de contenido, briefings y clasificación por intención, votados por profesionales: <a href="/profesiones/marketing">Marketing</a>. Si lo que llevas es la parte técnica, mira <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>En 2024 alguien propuso un fichero llamado <code>llms.txt</code>: un índice en Markdown, en la raíz del dominio, que le explicara a un modelo de lenguaje qué hay en tu sitio y por dónde empezar a leer. La idea es buena. El problema es que dos años después casi nadie lo pide.</p>

<p>Esta guía resume lo que se sabe a fecha de 2026, para que puedas decidir en cinco minutos en vez de repetir lo que se lee por ahí.</p>

<h2 id="que-es">Qué es exactamente un llms.txt</h2>

<p>Un fichero de texto plano en <code>tudominio.com/llms.txt</code>, escrito en Markdown, con una estructura mínima: un título con el nombre del sitio, un párrafo que lo resume y varias listas de enlaces agrupados por sección, cada uno con una frase de contexto.</p>

<p>Conviene no confundirlo con dos cosas que sí funcionan:</p>

<figure>
<table>
    <thead>
        <tr><th>Fichero</th><th>Para qué sirve</th><th>¿Lo respetan?</th></tr>
    </thead>
    <tbody>
        <tr><td><code>robots.txt</code></td><td>Decir qué rastreadores pueden entrar y dónde</td><td><strong>Sí</strong>, es el mecanismo estándar para bloquear o permitir bots de IA</td></tr>
        <tr><td><code>sitemap.xml</code></td><td>Listar tus URL y cuándo cambiaron</td><td><strong>Sí</strong>, los buscadores lo consumen a diario</td></tr>
        <tr><td><code>llms.txt</code></td><td>Resumir tu sitio para un modelo de lenguaje</td><td><strong>Casi nunca</strong>, y ninguna compañía grande se ha comprometido</td></tr>
    </tbody>
</table>
</figure>

<p>La diferencia importante: los dos primeros son protocolos con consumidores confirmados. El tercero es una propuesta que todavía espera a que alguien la adopte de verdad.</p>

<h2 id="datos">Lo que dicen los datos de 2026</h2>

<p>No hace falta opinar, porque hay medición:</p>

<ul>
    <li><strong>El 97 % de los ficheros no recibe ni una petición.</strong> Un análisis de Ahrefs sobre unos 137.000 sitios con <code>llms.txt</code> publicado encontró que la inmensa mayoría nunca fueron solicitados por nadie.</li>
    <li><strong>408 peticiones sobre 500 millones de visitas de bots.</strong> En una ventana de noventa días monitorizando tráfico de rastreadores de IA, las peticiones dirigidas al fichero fueron un residuo estadístico.</li>
    <li><strong>Adopción del 10 % y correlación nula con ser citado.</strong> Un estudio de SE Ranking sobre 300.000 dominios situó la adopción en torno al 10 %. Entre los cincuenta dominios más citados por los asistentes, solo uno tenía el fichero.</li>
</ul>

<p>Ese último dato es el que zanja el debate práctico. Si el fichero fuera una palanca de visibilidad, los sitios que más aparecen en las respuestas de IA lo tendrían. No lo tienen y aparecen igual, porque lo que los pone ahí es otra cosa.</p>

<h2 id="google">Qué han dicho Google y los demás</h2>

<p>Google ha sido explícito: no lo usa y no tiene planes de usarlo. Su documentación para aparecer en funciones generativas lo menciona entre las tácticas que no hacen falta, y uno de sus ingenieros lo comparó con la etiqueta <code>meta keywords</code>, que murió precisamente porque era una declaración del propio editor sin forma de verificarla.</p>

<p>El resto del sector no ha dicho ni que sí ni que no. A fecha de hoy, ninguna de las compañías grandes —OpenAI, Anthropic, Google, Meta, Mistral— ha confirmado que sus sistemas de producción lean el fichero.</p>

<p>Hay un matiz que sí importa y que casi siempre se cuenta mal. Los rastreadores de IA <strong>sí</strong> muestran apetito por el contenido en Markdown: cuando un sitio expone versiones <code>.md</code> de sus páginas, esos bots las piden y las consumen. Lo que les interesa es el texto limpio sin plantilla, no el índice que lo anuncia. Quien confunde las dos cosas concluye que el <code>llms.txt</code> funciona cuando lo que funciona es publicar contenido fácil de leer.</p>

<h2 id="decision">Entonces, ¿lo pongo o no?</h2>

<p>La respuesta honesta es que da bastante igual, y esa es información útil cuando alguien te lo vende como prioridad.</p>

<p>Nosotros mantenemos uno en <a href="/llms.txt">/llms.txt</a>. La razón no es que esperemos tráfico de ahí: es que se genera solo a partir del mismo registro de contenidos que alimenta el sitemap, cuesta cero mantenimiento y sirve de índice legible para cualquier persona o herramienta que quiera entender el sitio de una pasada. Con ese coste, la apuesta es asimétrica: si algún día alguien lo lee, ya está puesto.</p>

<p>El criterio se resume así:</p>

<figure>
<table>
    <thead>
        <tr><th>Situación</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>Puedes generarlo automáticamente</td><td>Ponlo y olvídate</td></tr>
        <tr><td>Tienes documentación técnica extensa</td><td>Ponlo: es el caso de uso con más sentido</td></tr>
        <tr><td>Habría que mantenerlo a mano</td><td>No lo pongas</td></tr>
        <tr><td>Es lo único que ibas a hacer por la visibilidad en IA</td><td>Cambia de plan, no de fichero</td></tr>
    </tbody>
</table>
</figure>

<h2 id="como">Cómo hacer uno decente en veinte minutos</h2>

<p>Si decides ponerlo, que al menos esté bien hecho:</p>

<ol>
    <li><strong>Genéralo desde tu fuente de verdad.</strong> El mismo listado que produce el sitemap sirve. Si tu sitio tiene el contenido en base de datos, esto son veinte líneas de código y se actualiza solo.</li>
    <li><strong>Empieza por el resumen.</strong> Un párrafo que diga qué es el sitio, para quién y en qué idioma. Es la parte con más probabilidad de ser leída por una persona.</li>
    <li><strong>Agrupa por secciones reales</strong> y pon una frase de contexto por enlace. Una lista de URL desnudas no aporta nada que el sitemap no tenga ya.</li>
    <li><strong>No lo infles.</strong> Cincuenta enlaces bien elegidos valen más que mil. Si tu sitio tiene miles de páginas, enlaza las secciones, no las fichas.</li>
    <li><strong>Sírvelo como <code>text/plain</code></strong> y comprueba que devuelve 200 y que no pasa por ninguna redirección rara.</li>
    <li><strong>Ponle fecha de actualización</strong> y revisa una vez al trimestre que sigue describiendo el sitio que tienes.</li>
</ol>

<h2 id="alternativa">Lo que sí mueve la aguja</h2>

<p>Si el objetivo real es que los asistentes te citen, el orden de prioridades es este, y el fichero no está entre los cinco primeros:</p>

<ol>
    <li><strong>Que tu HTML se entienda sin ejecutar JavaScript.</strong> Muchos rastreadores de IA no renderizan. Si tu contenido aparece después de cargar el bundle, para ellos tu página está vacía. Cómo comprobarlo está en la <a href="/guias/auditoria-seo-tecnica">auditoría SEO técnica</a>.</li>
    <li><strong>Que no los estés bloqueando sin saberlo.</strong> Revisa el <code>robots.txt</code> y las reglas del cortafuegos: es sorprendentemente común bloquear a GPTBot o ClaudeBot por defecto y luego preguntarse por qué no aparece nadie. La lista de bots y tres configuraciones de ejemplo están en la guía de <a href="/guias/robots-txt-y-bots-de-ia">robots.txt y bots de IA</a>.</li>
    <li><strong>Responder la pregunta en la primera frase</strong> de cada apartado, con encabezados que sean la pregunta literal. Es lo que convierte un párrafo en un fragmento citable, y es el núcleo de la <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">guía de GEO</a>.</li>
    <li><strong>Tener datos, cifras y ejemplos propios.</strong> Un modelo cita lo que no puede generar por su cuenta.</li>
    <li><strong>Que te mencionen en otros sitios.</strong> Las menciones de marca pesan más que cualquier fichero que publiques tú mismo.</li>
    <li><strong>Marcar lo marcable</strong> con datos estructurados, con la expectativa correcta sobre lo que hacen y lo que no: está medido en la guía de <a href="/guias/datos-estructurados-para-ia">datos estructurados</a>.</li>
</ol>

<p>Y después, medir. Si no sabes cuántas visitas llegan hoy desde asistentes, no vas a saber si algo de esto ha funcionado: la <a href="/guias/medir-el-trafico-de-ia">guía de medición</a> explica cómo montarlo en una tarde.</p>

<h2 id="errores">Errores habituales</h2>

<ol>
    <li><strong>Tratarlo como una estrategia.</strong> Es un fichero de texto. Aparecer en las respuestas de los asistentes depende de qué publicas y de quién te menciona.</li>
    <li><strong>Copiar el sitemap dentro.</strong> Una lista de mil URL sin contexto no es un índice, es ruido en otro formato.</li>
    <li><strong>Dejarlo caducar.</strong> Un fichero de hace un año que describe secciones que ya no existen da peor impresión que su ausencia.</li>
    <li><strong>Bloquear a los bots y poner el fichero.</strong> Pasa más de lo que parece: se prohíbe el rastreo en <code>robots.txt</code> y se publica un índice para quien no puede entrar.</li>
    <li><strong>Pagarlo aparte.</strong> Si alguien te lo factura como partida propia de un proyecto de visibilidad en IA, ya sabes por dónde empezar a preguntar.</li>
</ol>
HTML,
];
