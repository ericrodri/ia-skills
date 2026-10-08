<?php

return [
    'title' => 'Cómo convertir texto a voz con IA: herramientas, trucos para que suene natural y qué está permitido',
    'navTitle' => 'Convertir texto a voz con IA',
    'seoTitle' => 'Convertir texto a voz con IA: guía práctica',
    'description' => 'Cómo pasar texto a voz con IA: qué herramienta usar gratis o de pago, cómo preparar el texto para que suene natural y qué voces puedes usar sin problemas.',
    'excerpt' => 'Las voces sintéticas ya no suenan a contestador automático: con un buen texto pasan por una locución grabada. El truco está menos en la herramienta que en cómo escribes para el oído, y en no usar una voz que no es tuya.',
    'category' => 'Práctica',
    'published' => '2026-10-08',
    'updated' => '2026-10-08',
    'readingMinutes' => 8,
    'words' => 1247,
    'about' => 'Síntesis de voz (texto a voz) con inteligencia artificial para narraciones, vídeos y accesibilidad',
    'related' => ['video-y-audio-con-ia-en-el-trabajo', 'crear-videos-con-ia', 'pasar-audio-a-texto-con-ia', 'estafas-con-ia-deepfakes-y-suplantacion', 'traducir-con-ia', 'herramientas-de-ia-gratis'],
    'toc' => [
        'para-que' => 'Para qué se usa',
        'herramientas' => 'Qué herramienta usar',
        'escribir-para-el-oido' => 'Escribir para el oído',
        'paso-a-paso' => 'De texto a audio, paso a paso',
        'voces' => 'Qué voces puedes usar',
        'limites' => 'Dónde todavía falla',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para convertir texto a voz en español?' => 'Para locuciones con calidad de estudio, ElevenLabs es la referencia, con buenas voces en español de España y de Latinoamérica. Para escuchar documentos o páginas web, la lectura en voz alta de Microsoft Edge y las voces del propio móvil son gratis y suenan bien. Si haces vídeo, los editores como CapCut traen voces integradas que ahorran un paso.',
        '¿Se puede convertir texto a voz gratis?' => 'Sí. La función de leer en voz alta de Edge, las voces de accesibilidad de Android e iPhone y los planes gratuitos de servicios como ElevenLabs permiten generar audio sin pagar. Los planes gratuitos limitan los caracteres al mes y a veces el uso comercial, así que revisa las condiciones si el audio va a un proyecto de pago.',
        '¿Puedo usar una voz generada con IA en YouTube o en un anuncio?' => 'Normalmente sí, si el plan de la herramienta incluye uso comercial y la voz es de catálogo o la tuya propia. Lo que no puedes hacer es imitar la voz de una persona real sin su permiso. Y si el contenido puede confundirse con una persona real hablando, conviene indicar que la voz es sintética.',
        '¿Es legal clonar mi propia voz con IA?' => 'Clonar tu propia voz es legal y las herramientas serias te piden demostrar que es tuya, por ejemplo leyendo una frase de verificación. Guarda el acceso a esa voz como guardas una contraseña: con unos segundos de audio alguien podría usarla para suplantarte.',
        '¿Cómo hago que la voz de la IA no suene robótica?' => 'Escribe frases cortas, como hablarías, y pon la puntuación pensando en las pausas. Escribe los números, siglas y nombres extranjeros como se pronuncian, genera por párrafos para poder repetir solo lo que falle y prueba dos o tres voces antes de decidir: cada una encaja con un tipo de texto.',
    ],
    'ctaTitle' => 'Guiones que suenan bien',
    'ctaBody' => 'Una buena locución empieza por un buen guion. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para escribir guiones y piezas de audio, por ejemplo en <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/freelancers">autónomos</a>.',
    'body' => <<<'HTML'
<p>Convertir texto a voz ya no da como resultado esa voz metálica que leía las estaciones del metro. Las voces sintéticas actuales respiran, entonan y, con un texto bien preparado, cuesta distinguirlas de una locución grabada. Sirven para narrar un vídeo, escuchar un documento mientras conduces o publicar un artículo también en audio. Esta guía explica qué herramienta usar, cómo escribir para que suene natural y qué voces puedes usar sin meterte en problemas.</p>

<h2 id="para-que">Para qué se usa</h2>

<ul>
    <li><strong>Narrar vídeos</strong>: tutoriales, vídeos cortos para redes, presentaciones de producto. Es el uso más común y el que más se nota cuando sale mal.</li>
    <li><strong>Escuchar en lugar de leer</strong>: informes, apuntes, artículos largos o un libro en PDF, mientras haces otra cosa.</li>
    <li><strong>Accesibilidad</strong>: ofrecer versión en audio de un texto para quien tiene dificultades de lectura o visión.</li>
    <li><strong>Versiones en otros idiomas</strong>: traducir el guion y locutarlo en otro idioma sin contratar a un locutor por cada uno. Cómo traducir bien antes de locutar está en <a href="/guias/traducir-con-ia">traducir con IA</a>.</li>
</ul>

<p>Es el camino inverso a la transcripción, que pasa una grabación a texto; ese lo explicamos en <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto con IA</a>.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<table>
    <thead>
        <tr><th>Necesitas</th><th>Herramienta</th><th>Coste</th></tr>
    </thead>
    <tbody>
        <tr><td>Escuchar un documento o una web</td><td>Leer en voz alta de Microsoft Edge, o la lectura de pantalla del móvil</td><td>Gratis</td></tr>
        <tr><td>Locución de calidad para un vídeo o pódcast</td><td>ElevenLabs y servicios similares, con voces de catálogo en español</td><td>Plan gratuito limitado; de pago para uso comercial y más caracteres</td></tr>
        <tr><td>Voz directamente dentro del vídeo</td><td>Editores como CapCut o Canva, que traen texto a voz integrado</td><td>Gratis con límites</td></tr>
        <tr><td>Convertir apuntes en un audio tipo pódcast</td><td>El resumen en audio de NotebookLM, dentro de Gemini</td><td>Gratis con límites</td></tr>
        <tr><td>Muchos audios automatizados</td><td>Las API de voz de Google, Microsoft, OpenAI o ElevenLabs</td><td>Pago por caracteres</td></tr>
    </tbody>
</table>

<p>Si vas a montar un vídeo completo, la voz es solo una pieza; el resto del proceso está en <a href="/guias/crear-videos-con-ia">crear vídeos con IA</a>.</p>

<h2 id="escribir-para-el-oido">Escribir para el oído</h2>

<p>La mayoría de las locuciones que suenan a robot no fallan por la voz, sino por el texto. Un texto escrito para leerse no siempre funciona al oírlo. Antes de generar el audio, repásalo con estas reglas:</p>

<ul>
    <li><strong>Frases cortas</strong>. Una idea por frase. Las subordinadas largas obligan a la voz a una entonación plana.</li>
    <li><strong>Puntuación para las pausas</strong>. La coma es una pausa breve; el punto, una más larga. Si quieres que respire antes de un dato importante, pon un punto.</li>
    <li><strong>Números y siglas como se dicen</strong>. «1.250 €» puede leerse de formas raras; «mil doscientos cincuenta euros», no. Lo mismo con «IA», «SEO» o «km/h».</li>
    <li><strong>Nombres extranjeros</strong>: prueba cómo los pronuncia y, si falla, escríbelos como suenan.</li>
    <li><strong>Nada de paréntesis, tablas ni listas con viñetas</strong>: en audio no existen. Conviértelos en frases.</li>
</ul>

<p>Un asistente de IA te ayuda con esta parte. Pídele: «Reescribe este texto para que lo lea una voz sintética: frases cortas, números escritos con letras, sin paréntesis ni listas, y el mismo contenido. Señala las palabras que pueden pronunciarse mal».</p>

<h2 id="paso-a-paso">De texto a audio, paso a paso</h2>

<p><strong>1. Elige la voz con tu texto, no con la demo.</strong> Pega un párrafo real en tres o cuatro voces. Una voz grave y pausada encaja en un documental y desentona en un vídeo de quince segundos para redes.</p>

<p><strong>2. Ajusta velocidad y estilo.</strong> Casi todas las herramientas permiten cambiar la velocidad y algunas la estabilidad o la emoción. Más estabilidad suena más uniforme; menos, más expresiva pero con más sorpresas.</p>

<p><strong>3. Genera por párrafos.</strong> Si generas diez minutos de golpe y falla una palabra en el minuto siete, toca repetirlo todo. Por párrafos, solo rehaces lo que falla, y los caracteres del plan cunden más.</p>

<p><strong>4. Escucha entero antes de publicar.</strong> Con auriculares y sin leer el texto a la vez, porque si lo lees, el cerebro corrige lo que el oído no oye bien.</p>

<p><strong>5. Descarga en buena calidad</strong> y guarda el texto final junto al audio. Si mañana cambia un dato, regeneras solo ese fragmento.</p>

<h2 id="voces">Qué voces puedes usar</h2>

<p>Aquí está el único punto delicado del tema:</p>

<ul>
    <li><strong>Voces de catálogo</strong>: las que ofrece la herramienta. Puedes usarlas según las condiciones de tu plan; en muchos planes gratuitos el uso comercial no está incluido o exige citar la herramienta.</li>
    <li><strong>Tu propia voz clonada</strong>: legal y útil para no grabar cada vídeo. Las herramientas serias te piden verificar que es tuya. Protege esa cuenta: tu voz clonada es justo lo que alguien necesitaría para suplantarte.</li>
    <li><strong>La voz de otra persona</strong>: solo con su permiso, por escrito. Imitar a un famoso, a tu jefe o a un familiar sin autorización puede vulnerar sus derechos y es la base de muchos fraudes; lo contamos en <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA, deepfakes y suplantación</a>.</li>
</ul>

<p>Si el audio puede confundirse con una persona real hablando, indica que la voz es sintética. En un contexto profesional, además, hay obligaciones de etiquetado que explicamos en <a href="/guias/video-y-audio-con-ia-en-el-trabajo">vídeo y audio con IA en el trabajo</a>.</p>

<h2 id="limites">Dónde todavía falla</h2>

<ul>
    <li><strong>Textos muy largos</strong>: en audios de más de diez o quince minutos, el tono puede ir cambiando sin motivo. Generar por partes lo evita.</li>
    <li><strong>Emociones fuertes</strong>: una voz sintética lee bien un tutorial; un texto que tiene que emocionar sigue notándose.</li>
    <li><strong>Términos técnicos y nombres propios</strong>: es donde más tropieza. Escúchalos uno a uno.</li>
    <li><strong>Diálogos</strong>: hacer que dos voces conversen con naturalidad requiere generar cada intervención por separado y montarlas después.</li>
</ul>

<p>Para la mayoría de los usos, con un texto bien escrito y diez minutos de pruebas, el resultado es más que suficiente. La diferencia entre una locución que suena a máquina y una que pasa por humana casi siempre está en el guion.</p>
HTML,
];
