<?php

return [
    'title' => 'Citar en APA con IA: cómo hacer la bibliografía sin referencias inventadas',
    'navTitle' => 'Citar en APA con IA',
    'seoTitle' => 'Citar en APA con IA: bibliografía sin errores',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para dar formato APA a citas y bibliografía sin que invente referencias: prompts, ejemplos de la 7.ª edición y qué revisar.',
    'excerpt' => 'La IA es buena poniendo comas, cursivas y paréntesis en su sitio, que es justo lo que más cansa de las normas APA. Es pésima buscando fuentes. La regla que lo resume todo: tú le das las referencias, ella les da formato.',
    'category' => 'Práctica',
    'published' => '2026-10-28',
    'updated' => '2026-10-28',
    'readingMinutes' => 8,
    'words' => 1298,
    'about' => 'Uso de asistentes de inteligencia artificial para dar formato a citas y referencias bibliográficas según las normas APA en trabajos académicos',
    'related' => ['tfg-con-ia', 'alucinaciones-de-la-ia', 'investigar-con-ia-deep-research', 'estudiar-con-ia', 'parafrasear-textos-con-ia', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'regla' => 'La regla de oro: tú das las fuentes',
        'basico' => 'Lo básico de APA 7 en dos minutos',
        'formato' => 'Dar formato a tu bibliografía',
        'texto' => 'Las citas dentro del texto',
        'citar-ia' => 'Cómo citar a la propia IA',
        'revisar' => 'Qué revisar antes de entregar',
    ],
    'faq' => [
        '¿ChatGPT puede hacer la bibliografía de mi trabajo?' => 'Puede darle formato APA a las referencias que tú le pases, y lo hace bien. Lo que no debes pedirle es que busque o se invente las fuentes: una parte de las referencias que genera no existen o no dicen lo que afirma.',
        '¿Qué edición de las normas APA se usa ahora?' => 'La 7.ª edición, publicada en 2019, es la que piden casi todas las universidades y centros. Aun así, revisa la guía de tu facultad o de tu profesor: algunos mantienen la 6.ª o tienen adaptaciones propias.',
        '¿Cómo se cita a ChatGPT en APA?' => 'Como autor va la empresa que lo desarrolla (OpenAI), el año de la versión, el nombre del modelo con la versión entre paréntesis, la descripción entre corchetes y la dirección web. Muchos centros piden además explicar en el método cómo se ha usado y adjuntar el diálogo.',
        '¿Es mejor usar Zotero o la IA para citar?' => 'Para un trabajo largo, un gestor de referencias como Zotero o Mendeley es más fiable: guarda los datos de la fuente real y genera la bibliografía en el estilo que elijas. La IA es útil para dudas puntuales, casos raros y para revisar un listado ya hecho.',
        '¿La IA ordena bien la bibliografía alfabéticamente?' => 'Normalmente sí, pero falla con apellidos compuestos, partículas como «de» o «van» y varias obras del mismo autor en el mismo año (2024a, 2024b). Repasa el orden a mano en esos casos.',
    ],
    'ctaTitle' => 'Skills para estudiar e investigar',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para resumir, investigar y revisar textos académicos con IA, muchas pensadas para <a href="/profesiones/rrhh">formación</a> y <a href="/profesiones/freelancers">freelancers</a>.',
    'body' => <<<'HTML'
<p>Las normas APA son el estilo de citas más usado en trabajos de clase, TFG, TFM y artículos de ciencias sociales, educación, psicología o empresa. Y son también una de las partes más pesadas de cualquier trabajo: dónde va el punto, qué va en cursiva, cuándo se pone «et al.». Es lógico pedírselo a ChatGPT. Esta guía explica cómo hacerlo bien, porque hay un uso que ahorra horas y otro que puede suspenderte el trabajo.</p>

<h2 id="regla">La regla de oro: tú das las fuentes</h2>

<p>Si le pides a un asistente «dame cinco referencias en APA sobre el teletrabajo», te devolverá cinco referencias impecables en apariencia: autores, año, título, revista, volumen y páginas. Algunas serán reales. Otras no existirán, o existirán con otro título, otros autores u otro año. El modelo no consulta un catálogo: genera texto que tiene la forma de una referencia. Lo explicamos con detalle en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>.</p>

<p>Un profesor o un tribunal solo tiene que buscar una referencia para descubrirlo, y una bibliografía inventada suele tratarse como una falta grave. Por eso la regla es simple: <strong>las fuentes las buscas tú</strong> (en Google Scholar, en la biblioteca de tu universidad o en las bases de datos de tu área) y <strong>la IA solo les da formato</strong>. Si necesitas ayuda para encontrar bibliografía, los modos de investigación que enlazan a sus fuentes son más útiles; la guía de <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a> explica cómo usarlos y cómo comprobar lo que citan.</p>

<h2 id="basico">Lo básico de APA 7 en dos minutos</h2>

<p>La 7.ª edición es la vigente desde 2019. Conviene conocer la estructura para detectar los errores de la IA, aunque no la memorices entera:</p>

<ul>
    <li><strong>Libro</strong>: Apellido, A. A. (Año). <em>Título del libro en cursiva</em>. Editorial.</li>
    <li><strong>Artículo de revista</strong>: Apellido, A. A. y Apellido, B. B. (Año). Título del artículo. <em>Nombre de la Revista</em>, <em>volumen</em>(número), páginas. https://doi.org/...</li>
    <li><strong>Página web</strong>: Autor u organización. (Año, día de mes). <em>Título de la página</em>. Nombre del sitio. URL</li>
    <li><strong>Cita en el texto</strong>: (Apellido, año) o Apellido (año) dice que... Con tres o más autores, solo el primero seguido de «et al.» desde la primera cita.</li>
</ul>

<p>Dos cambios de la 7.ª respecto a la 6.ª que la IA a veces mezcla: ya no se pone la ciudad de la editorial, y el DOI se escribe como dirección web completa, sin «doi:» delante. Si tu centro usa otra edición o un estilo propio, díselo al asistente en la petición.</p>

<h2 id="formato">Dar formato a tu bibliografía</h2>

<p>El caso más útil: tienes un listado desordenado de fuentes (copiado de la biblioteca, apuntado a mano o mezclado entre estilos) y quieres dejarlo en APA. Pásale los datos tal cual:</p>

<blockquote>«Te paso los datos de las fuentes que he usado en mi trabajo. Dales formato según las normas APA 7.ª edición, ordénalas alfabéticamente y no añadas ni inventes ningún dato: si falta algo necesario (año, editorial, DOI, páginas), escribe [FALTA] en ese lugar para que yo lo busque. No añadas fuentes nuevas.»</blockquote>

<p>Las dos últimas frases son las importantes. Sin ellas, el modelo tiende a «completar» lo que falta con datos plausibles, que es exactamente el problema que quieres evitar. Con el marcador [FALTA] sabes qué tienes que comprobar en la fuente original.</p>

<p>Funciona igual con una foto de la página de créditos de un libro o con el enlace de un artículo, siempre que el asistente pueda leerlo. Si te da un DOI que no estaba en lo que le pasaste, desconfía y búscalo.</p>

<h2 id="texto">Las citas dentro del texto</h2>

<p>La otra mitad del trabajo son las citas en el cuerpo. Aquí la IA ayuda a revisar, no a escribir:</p>

<blockquote>«Este es un apartado de mi trabajo y su bibliografía. Revisa solo las citas: dime si cada cita del texto tiene su referencia en la bibliografía y al revés, si el formato es APA 7 y si alguna cita textual larga debería ir en bloque. No cambies el contenido del texto.»</blockquote>

<p>Es una revisión que a mano lleva mucho tiempo y en la que se escapan errores: una cita sin su referencia, un año que no coincide, un autor mal escrito. La IA los encuentra rápido. Recuerda también que las citas textuales de menos de 40 palabras van entre comillas y con página, y las de 40 o más en párrafo aparte sangrado y sin comillas.</p>

<p>Si estás citando ideas de otros con tus palabras, también hay que citarlas. La guía de <a href="/guias/parafrasear-textos-con-ia">parafrasear textos con IA</a> explica cómo hacerlo sin copiar y sin perder la referencia.</p>

<h2 id="citar-ia">Cómo citar a la propia IA</h2>

<p>Cada vez más centros piden declarar el uso de la IA y, si se reproduce algo que ha generado, citarla. La APA publicó en 2023 una propuesta que siguen muchas universidades. Para ChatGPT tendría esta forma:</p>

<blockquote>OpenAI. (2025). <em>ChatGPT</em> (versión del 10 de octubre) [Modelo de lenguaje de gran tamaño]. https://chatgpt.com</blockquote>

<p>Y en el texto: (OpenAI, 2025). Para otros asistentes cambian la empresa (Google para Gemini, Anthropic para Claude), el nombre y la dirección. Muchas facultades piden además explicar en la metodología para qué se ha usado y adjuntar las conversaciones en un anexo. Consulta antes la normativa de tu centro; en la guía del <a href="/guias/tfg-con-ia">TFG con IA</a> hablamos de qué se suele permitir y cómo declararlo.</p>

<h2 id="revisar">Qué revisar antes de entregar</h2>

<p>Aunque la IA haya hecho bien el formato, dedica diez minutos a esta lista:</p>

<ol>
    <li><strong>Cada referencia existe</strong>: búscala en Google Scholar o en el catálogo de la biblioteca. Si no aparece, no la entregues.</li>
    <li><strong>Los datos coinciden</strong> con la fuente: autores en el mismo orden, año, título exacto.</li>
    <li><strong>Las cursivas</strong> están donde tocan: título del libro, nombre y volumen de la revista. Al copiar desde un chat a veces se pierden.</li>
    <li><strong>Los [FALTA]</strong> se han completado todos.</li>
    <li><strong>El orden alfabético</strong> es correcto con apellidos compuestos y partículas.</li>
    <li><strong>La sangría francesa</strong> (la segunda línea de cada referencia, metida hacia dentro) está aplicada en el documento final.</li>
</ol>

<p>Para un trabajo largo, plantéate usar un gestor de referencias como Zotero, que es gratuito: guarda los datos de las fuentes reales y genera la bibliografía sola. Entonces la IA queda para lo que mejor hace: resolver dudas concretas («¿cómo cito una ley española en APA?») y revisar el resultado. Si además estás preparando exámenes, en <a href="/guias/estudiar-con-ia">cómo estudiar con IA</a> tienes técnicas para usarla sin que piense por ti.</p>
HTML,
];
