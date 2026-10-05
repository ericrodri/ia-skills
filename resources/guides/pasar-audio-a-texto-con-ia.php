<?php

return [
    'title' => 'Pasar audio a texto con IA: transcribir notas de voz, entrevistas y vídeos',
    'navTitle' => 'Pasar audio a texto con IA',
    'seoTitle' => 'Pasar audio a texto con IA: gratis y rápido',
    'description' => 'Cómo pasar audio a texto con IA: transcribir gratis audios de WhatsApp, notas de voz, entrevistas y vídeos de YouTube, y dejar el texto limpio.',
    'excerpt' => 'Transcribir una hora de entrevista ya no lleva una tarde: lleva unos minutos y una revisión. Qué herramienta usar según el audio, cómo conseguir una transcripción limpia y qué hacer con ella después.',
    'category' => 'Práctica',
    'published' => '2026-10-05',
    'updated' => '2026-10-05',
    'readingMinutes' => 6,
    'words' => 1029,
    'about' => 'Transcripción automática de audio y vídeo a texto con inteligencia artificial',
    'related' => ['ia-para-reuniones-y-actas', 'resumir-documentos-largos-con-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'crear-videos-con-ia', 'estudiar-con-ia', 'ia-local-privada-en-tu-ordenador'],
    'toc' => [
        'como-funciona' => 'Qué hace la IA al transcribir',
        'segun-el-audio' => 'Qué herramienta usar según el audio',
        'calidad' => 'Cómo conseguir una transcripción limpia',
        'despues' => 'Qué hacer con el texto',
        'privacidad' => 'Audios con datos personales',
    ],
    'faq' => [
        '¿Cómo paso un audio a texto gratis?' => 'Desde el móvil, la grabadora de muchos Android y las notas de voz del iPhone transcriben sin coste. En el ordenador, Word para la web tiene la opción Transcribir con minutos incluidos en Microsoft 365, y Gemini o ChatGPT aceptan un archivo de audio y devuelven el texto. Para audios largos y privados, Whisper funciona gratis en tu propio equipo.',
        '¿Se pueden transcribir los audios de WhatsApp?' => 'Sí. WhatsApp incluye la transcripción de notas de voz: se activa en Ajustes, Chats, Transcripciones de mensajes de voz, y después basta con mantener pulsado el audio y elegir Transcribir. Se procesa en el propio teléfono, así que el contenido no sale del dispositivo.',
        '¿Qué tan precisa es la transcripción con IA?' => 'Con un audio limpio y una sola persona hablando, las herramientas actuales aciertan casi todas las palabras en español. La precisión baja con ruido, varias voces que se pisan, acentos marcados o mucho vocabulario técnico. Los nombres propios, las siglas y las cifras son lo que más conviene revisar.',
        '¿Cómo transcribo un vídeo de YouTube?' => 'YouTube genera subtítulos automáticos en muchos vídeos: abre la descripción y pulsa Mostrar transcripción para ver y copiar el texto. Gemini también puede resumir o transcribir un vídeo público si le pegas el enlace. Si el vídeo es tuyo, descarga el audio y pásalo por cualquier transcriptor.',
        '¿La IA distingue quién habla en una grabación?' => 'Muchas herramientas sí: separan a los hablantes y los etiquetan como Hablante 1, Hablante 2, y luego puedes ponerles nombre. Funciona bien con dos o tres personas y voces distintas; con muchas voces parecidas o gente que se interrumpe comete errores que hay que corregir a mano.',
    ],
    'ctaTitle' => 'De la transcripción al documento',
    'ctaBody' => 'Una transcripción es materia prima. En el <a href="/skills">catálogo de skills</a> hay instrucciones para convertirla en actas, artículos o informes, por ejemplo en <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>Transcribir una entrevista a mano lleva unas cuatro horas por cada hora de audio. Con IA lleva unos minutos, más el tiempo de revisar. Esa diferencia ha convertido la transcripción en algo cotidiano: periodistas, estudiantes, investigadores, abogados y cualquiera que reciba audios de WhatsApp demasiado largos. Esta guía explica qué herramienta conviene según lo que quieras transcribir y cómo dejar el texto listo para usar.</p>

<h2 id="como-funciona">Qué hace la IA al transcribir</h2>

<p>Los modelos de reconocimiento de voz actuales, como Whisper de OpenAI o los que usan Google y Microsoft, no comparan sonidos con un diccionario: han aprendido de cientos de miles de horas de audio y predicen el texto más probable teniendo en cuenta el contexto. Por eso ponen puntos y comas, entienden palabras mal pronunciadas y acaban acertando casi siempre en español.</p>

<p>Esa misma forma de funcionar tiene un efecto curioso: cuando el audio no se entiende, el modelo a veces inventa una frase verosímil en lugar de dejar un hueco. Es el equivalente sonoro de las <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>, y la razón por la que una transcripción importante siempre se revisa.</p>

<h2 id="segun-el-audio">Qué herramienta usar según el audio</h2>

<table>
    <thead>
        <tr><th>Qué quieres transcribir</th><th>Opción recomendada</th></tr>
    </thead>
    <tbody>
        <tr><td>Audios de WhatsApp</td><td>La transcripción integrada de WhatsApp, que funciona en el propio teléfono</td></tr>
        <tr><td>Notas de voz propias</td><td>La grabadora del móvil (Android) o Notas de voz (iPhone), que transcriben al grabar</td></tr>
        <tr><td>Entrevista o clase grabada</td><td>Word para la web (Transcribir), Gemini o ChatGPT subiendo el archivo, o servicios como Otter o Turboscribe</td></tr>
        <tr><td>Reuniones en Teams, Meet o Zoom</td><td>La transcripción de la propia plataforma; lo explicamos en <a href="/guias/ia-para-reuniones-y-actas">reuniones y actas con IA</a></td></tr>
        <tr><td>Vídeo de YouTube</td><td>La opción Mostrar transcripción del propio vídeo, o pegar el enlace en Gemini</td></tr>
        <tr><td>Audio confidencial o muy largo</td><td>Whisper en tu ordenador, sin enviar nada a internet</td></tr>
    </tbody>
</table>

<p>Para la mayoría de la gente, la combinación de la grabadora del móvil y un asistente como Gemini o ChatGPT cubre el 90 % de los casos sin pagar nada. Si necesitas transcribir decenas de horas al mes, compensa un servicio específico de pago, que suele permitir archivos más largos, separar hablantes y exportar con marcas de tiempo.</p>

<h2 id="calidad">Cómo conseguir una transcripción limpia</h2>

<p>La calidad se decide antes de transcribir, al grabar:</p>

<ul>
    <li><strong>Acerca el micrófono</strong> a quien habla. Un móvil sobre la mesa a medio metro rinde mucho mejor que uno en el otro extremo de la sala.</li>
    <li><strong>Evita el ruido de fondo</strong>: cafeterías, ventiladores, música. Es lo que más errores provoca.</li>
    <li><strong>Que no se pisen las voces.</strong> En entrevistas, deja terminar la frase antes de preguntar.</li>
</ul>

<p>Y después, al revisar, pide ayuda al propio asistente:</p>

<blockquote>«Esta es la transcripción automática de una entrevista. Corrige los errores evidentes de reconocimiento, añade puntuación y separa por hablantes. No cambies el sentido de ninguna frase ni resumas. Marca entre corchetes las partes que no estés seguro de haber entendido. Los nombres correctos son: [lista de nombres y términos técnicos].»</blockquote>

<p>La lista final de nombres y términos es lo que más mejora el resultado: la IA no puede adivinar cómo se escribe el apellido de tu entrevistado ni la marca de tu cliente.</p>

<h2 id="despues">Qué hacer con el texto</h2>

<p>Con la transcripción en la mano, la IA puede convertirla en casi cualquier cosa:</p>

<ul>
    <li><strong>Resumen o acta</strong> con decisiones y tareas pendientes.</li>
    <li><strong>Apuntes de estudio</strong> a partir de una clase grabada, con preguntas para repasar; más ideas en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</li>
    <li><strong>Artículo o publicación</strong> a partir de un pódcast o una charla.</li>
    <li><strong>Subtítulos y clips</strong> para redes, eligiendo los mejores fragmentos; el resto del proceso está en <a href="/guias/crear-videos-con-ia">crear vídeos con IA</a>.</li>
    <li><strong>Traducción</strong> a otro idioma, que sale mejor desde un texto revisado que desde el audio directamente.</li>
</ul>

<p>Si la grabación dura horas, trocea antes de resumir: la guía de <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a> explica cómo evitar que el asistente se salte la mitad.</p>

<h2 id="privacidad">Audios con datos personales</h2>

<p>Una grabación con la voz de otra persona contiene datos personales, y a menudo también información delicada: una consulta médica, una reunión con un cliente, una entrevista de trabajo. Antes de subirla a un servicio en la nube:</p>

<ul>
    <li><strong>Avisa de que grabas</strong> y, si vas a transcribir con IA, dilo también.</li>
    <li><strong>Usa la cuenta de empresa</strong>, no la personal, si el audio es de trabajo; las condiciones sobre el uso de tus datos cambian mucho entre ambas. Lo detallamos en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</li>
    <li><strong>Transcribe en local</strong> lo más sensible. Whisper funciona en un ordenador normal con programas gratuitos; cómo montarlo está en <a href="/guias/ia-local-privada-en-tu-ordenador">IA local y privada en tu ordenador</a>.</li>
</ul>
HTML,
];
