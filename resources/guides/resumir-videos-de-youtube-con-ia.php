<?php

return [
    'title' => 'Resumir vídeos de YouTube con IA: tres formas que funcionan y cómo saber si el resumen es fiel',
    'navTitle' => 'Resumir vídeos de YouTube con IA',
    'seoTitle' => 'Cómo resumir un vídeo de YouTube con IA',
    'description' => 'Cómo resumir un vídeo de YouTube con IA: con Gemini, con la transcripción o con un cuaderno de fuentes. Qué pedir y cómo comprobar que el resumen es fiel.',
    'excerpt' => 'Una conferencia de dos horas, un tutorial de cuarenta minutos o un pódcast entero: la IA puede decirte en un minuto qué cuenta y en qué minuto. Tres formas de hacerlo, qué pedir y los fallos típicos que conviene vigilar.',
    'category' => 'Práctica',
    'published' => '2026-10-07',
    'updated' => '2026-10-07',
    'readingMinutes' => 6,
    'words' => 1052,
    'about' => 'Resumen y extracción de ideas de vídeos de YouTube mediante inteligencia artificial y transcripciones',
    'related' => ['resumir-documentos-largos-con-ia', 'pasar-audio-a-texto-con-ia', 'gemini-notebook-antes-notebooklm', 'estudiar-con-ia', 'alucinaciones-de-la-ia', 'como-usar-gemini'],
    'toc' => [
        'como-funciona' => 'Cómo lo hace la IA',
        'tres-formas' => 'Tres formas de hacerlo',
        'que-pedir' => 'Qué pedir además del resumen',
        'fiel' => 'Cómo saber si el resumen es fiel',
        'limites' => 'Cuándo no funciona',
    ],
    'faq' => [
        '¿Cómo resumo un vídeo de YouTube con IA gratis?' => 'La forma más directa es pegar el enlace del vídeo en Gemini y pedirle un resumen: puede leer el contenido de YouTube sin que hagas nada más. Si prefieres otro asistente, abre la transcripción del vídeo desde la descripción en YouTube, cópiala y pégala en ChatGPT o Claude junto con lo que quieres que te resuma. Las dos opciones funcionan en los planes gratuitos.',
        '¿Puede ChatGPT ver un vídeo de YouTube?' => 'No de forma fiable a partir del enlace: según el modo y la versión, a veces solo lee el título y la descripción y rellena el resto con suposiciones. Lo seguro es darle la transcripción. Si te devuelve un resumen sin haberla recibido, desconfía y pídele que diga de dónde ha sacado cada idea.',
        '¿Qué hago si el vídeo no tiene transcripción?' => 'Algunos vídeos no tienen subtítulos, ni manuales ni automáticos, y entonces la IA no tiene texto del que partir. Puedes descargar el audio, si el autor lo permite, y transcribirlo con una herramienta de transcripción, o usar un asistente que procese el audio directamente. Comprueba antes que tienes derecho a descargarlo.',
        '¿Es legal resumir vídeos de YouTube con IA?' => 'Hacer un resumen para tu uso personal, para estudiar o para decidir si ves el vídeo entero no plantea problemas. Distinto es publicar el resumen como contenido propio o copiar fragmentos largos de la transcripción en tu web: ahí entran los derechos del autor. Si lo citas en público, enlaza el vídeo y resume con tus palabras.',
        '¿Sirve para vídeos en otro idioma?' => 'Sí. Puedes pedir el resumen en español de un vídeo en inglés, alemán o japonés, siempre que tenga transcripción o subtítulos automáticos. Ten en cuenta que los subtítulos automáticos fallan con nombres propios, cifras y términos técnicos, y esos errores pasan al resumen, así que revisa esos datos en el vídeo.',
    ],
    'ctaTitle' => 'Del resumen al trabajo',
    'ctaBody' => 'Resumir es el primer paso; lo útil es lo que haces después. En el <a href="/skills">catálogo de skills</a> hay instrucciones para sacar ideas, actas y contenidos de vídeos y documentos, por ejemplo en <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/analisis-de-datos">análisis de datos</a>.',
    'body' => <<<'HTML'
<p>Hay vídeos que merecen dos horas y vídeos que caben en cinco líneas, y antes de verlos no hay forma de saber cuál es cuál. Resumir un vídeo de YouTube con IA resuelve eso: te dice de qué va, cuáles son las ideas principales y en qué minuto aparece lo que buscas. Funciona bien con conferencias, tutoriales, entrevistas y pódcast. Lo importante es saber de dónde saca la información la IA, porque de eso depende que el resumen sea fiel o se lo invente.</p>

<h2 id="como-funciona">Cómo lo hace la IA</h2>

<p>La IA no «ve» el vídeo como tú. Casi siempre trabaja con la <strong>transcripción</strong>: el texto de lo que se dice, que YouTube genera automáticamente en la mayoría de vídeos o que el autor sube a mano. Eso tiene dos consecuencias prácticas:</p>

<ul>
    <li>Lo que solo se ve y no se dice (una gráfica, un código en pantalla, una demostración) no entra en el resumen.</li>
    <li>Si los subtítulos automáticos se equivocan con un nombre o una cifra, el resumen repetirá el error.</li>
</ul>

<h2 id="tres-formas">Tres formas de hacerlo</h2>

<table>
    <thead>
        <tr><th>Forma</th><th>Cómo</th><th>Mejor para</th></tr>
    </thead>
    <tbody>
        <tr><td>Gemini con el enlace</td><td>Pegas la dirección del vídeo y pides el resumen</td><td>Lo más rápido, un vídeo suelto</td></tr>
        <tr><td>Transcripción en cualquier asistente</td><td>Copias la transcripción desde YouTube y la pegas en ChatGPT, Claude u otro</td><td>Control total sobre lo que lee la IA</td></tr>
        <tr><td>Cuaderno de fuentes</td><td>Añades varios vídeos como fuentes y preguntas sobre todos</td><td>Estudiar un tema con varios vídeos y documentos</td></tr>
    </tbody>
</table>

<p><strong>Con Gemini.</strong> Al ser de Google, puede leer el contenido de YouTube directamente. Pega el enlace y escribe lo que quieres. Es la opción más cómoda; cómo aprovechar el resto de sus funciones está en <a href="/guias/como-usar-gemini">cómo usar Gemini</a>.</p>

<p><strong>Con la transcripción.</strong> En YouTube, abre la descripción del vídeo y pulsa «Mostrar transcripción». Desactiva las marcas de tiempo si no las quieres, selecciona todo el texto, cópialo y pégalo en el asistente. Es un paso más, pero sabes exactamente qué ha leído. No te fíes de pegar solo el enlace en un asistente que no tenga acceso a YouTube: algunos leen el título y la descripción y rellenan el resto con suposiciones.</p>

<p><strong>Con un cuaderno de fuentes.</strong> Herramientas como el cuaderno de Gemini, antes NotebookLM, aceptan vídeos de YouTube como fuente junto a PDF y páginas web, y responden citando el fragmento. Es lo mejor para preparar un tema con varias fuentes; lo explicamos en <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a>.</p>

<h2 id="que-pedir">Qué pedir además del resumen</h2>

<p>«Resúmeme este vídeo» da un párrafo genérico. Pide lo que vas a usar:</p>

<blockquote>«Resume este vídeo en 5 ideas principales, cada una con el minuto aproximado en que aparece. Después, lista las recomendaciones prácticas que da el ponente y las cifras o datos que cita. Si algo no queda claro en la transcripción, dilo en lugar de suponerlo.»</blockquote>

<p>Otras peticiones útiles:</p>

<ul>
    <li><strong>Pasos de un tutorial</strong>, numerados, con lo que hace falta antes de empezar.</li>
    <li><strong>Preguntas de repaso</strong> para comprobar que has entendido una clase, como contamos en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</li>
    <li><strong>Argumentos a favor y en contra</strong> en un debate o una entrevista.</li>
    <li><strong>¿Merece la pena verlo entero?</strong> Pide qué aporta que no esté en el resumen.</li>
    <li><strong>Notas en otro idioma</strong>: el resumen en español de un vídeo en inglés.</li>
</ul>

<h2 id="fiel">Cómo saber si el resumen es fiel</h2>

<p>Un resumen puede sonar convincente y estar mal. Tres comprobaciones rápidas:</p>

<ol>
    <li><strong>Salta a dos o tres minutos que cite</strong> y comprueba que allí se dice eso. Si las marcas de tiempo no cuadran, desconfía del resto.</li>
    <li><strong>Revisa cifras, nombres y citas textuales</strong>: son lo que más falla, tanto por los subtítulos automáticos como por las <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
    <li><strong>Pregunta por lo que falta</strong>: «¿qué parte del vídeo no has incluido en el resumen?». Si la respuesta es vaga, puede que no haya leído la transcripción entera.</li>
</ol>

<h2 id="limites">Cuándo no funciona</h2>

<ul>
    <li><strong>Vídeos sin transcripción</strong>: sin texto no hay resumen. Puedes transcribir el audio, si tienes derecho a descargarlo, con lo que explicamos en <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto con IA</a>.</li>
    <li><strong>Vídeos muy visuales</strong>: recetas, manualidades o demostraciones de programas, donde lo importante se ve y no se dice.</li>
    <li><strong>Vídeos muy largos</strong>: una transcripción de tres horas puede superar lo que el asistente lee de una vez. Divídela por partes y pide un resumen de cada una antes del resumen final, igual que con los <a href="/guias/resumir-documentos-largos-con-ia">documentos largos</a>.</li>
    <li><strong>Publicarlo</strong>: un resumen para ti no plantea problemas; copiar la transcripción o publicar el resumen como contenido propio sí puede chocar con los derechos del autor. Si lo compartes, enlaza el vídeo.</li>
</ul>
HTML,
];
