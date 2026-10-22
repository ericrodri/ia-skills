<?php

return [
    'title' => 'Cómo saber si una imagen está hecha con IA: señales, herramientas y límites',
    'navTitle' => 'Saber si una imagen es de IA',
    'seoTitle' => 'Cómo saber si una imagen está hecha con IA',
    'description' => 'Señales visuales, metadatos de procedencia, marcas de agua como SynthID y búsqueda inversa: cómo comprobar si una foto es real o generada con IA.',
    'excerpt' => 'Las imágenes generadas con IA ya no se delatan por los seis dedos. Lo que sigue funcionando es combinar tres comprobaciones: el contexto de dónde sale la imagen, los metadatos y marcas de agua de procedencia, y la búsqueda inversa.',
    'category' => 'Práctica',
    'published' => '2026-10-14',
    'updated' => '2026-10-14',
    'readingMinutes' => 7,
    'words' => 1165,
    'about' => 'Verificación de imágenes generadas o manipuladas con inteligencia artificial',
    'related' => ['identificar-plantas-con-ia', 'estafas-con-ia-deepfakes-y-suplantacion', 'se-nota-si-un-texto-lo-escribe-una-ia', 'crear-imagenes-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial', 'alucinaciones-de-la-ia', 'editar-fotos-con-ia'],
    'toc' => [
        'por-que' => 'Por qué ya no basta con mirar',
        'contexto' => 'Primero, el contexto',
        'senales' => 'Señales visuales que aún ayudan',
        'procedencia' => 'Metadatos y marcas de agua',
        'busqueda-inversa' => 'Búsqueda inversa de imágenes',
        'detectores' => 'Detectores automáticos: para qué sirven',
        'rutina' => 'Una rutina de dos minutos',
    ],
    'faq' => [
        '¿Hay alguna web gratis para saber si una imagen es de IA?' => 'Hay varios detectores gratuitos y algunos asistentes, como Gemini, permiten preguntar si una imagen lleva la marca de agua de Google. Úsalos como una pista más: aciertan bastante con imágenes recién generadas y fallan mucho con capturas, fotos recortadas o comprimidas.',
        '¿Se puede saber con certeza si una foto es falsa?' => 'Solo cuando hay una prueba positiva: metadatos de procedencia intactos, una marca de agua detectada o la foto original localizada con búsqueda inversa. Que un detector diga «90 % IA» no es una prueba, y que no encuentres nada tampoco demuestra que la imagen sea real.',
        '¿Las fotos editadas con IA cuentan como imágenes de IA?' => 'Depende de la edición. Casi todos los móviles usan IA para mejorar las fotos, y eso no las hace falsas. Lo relevante es si se ha añadido, quitado o cambiado algo que altera lo que la imagen muestra, como una persona, un cartel o un lugar.',
        '¿ChatGPT puede decirme si una imagen está hecha con IA?' => 'Puede describir detalles sospechosos y leer los metadatos si se los pegas, pero no tiene acceso a todas las marcas de agua y puede equivocarse con total seguridad. Pídele que señale qué detalles concretos le hacen dudar y compruébalos tú.',
        '¿Qué hago si encuentro una imagen falsa sobre mí o mi empresa?' => 'Guarda capturas con la fecha y el enlace, denúnciala en la plataforma donde se publica y, si hay suplantación, amenazas o contenido íntimo, acude a la policía. En España también puedes pedir la retirada de contenido sensible a la Agencia Española de Protección de Datos.',
    ],
    'ctaTitle' => 'Verificar antes de publicar',
    'ctaBody' => 'Revisar fuentes e imágenes antes de compartir es parte del trabajo en comunicación y atención al cliente. En el <a href="/skills">catálogo de skills</a> encontrarás instrucciones de <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/customer-support">atención al cliente</a> para revisar contenido con criterio.',
    'body' => <<<'HTML'
<p>Hace dos años, una imagen generada con IA se reconocía por las manos con seis dedos o los textos ilegibles. Hoy los generadores dibujan manos correctas, escriben carteles sin faltas y imitan el ruido de una cámara de móvil. Por eso la pregunta «¿esta foto es real?» ya no se responde mirando un detalle, sino combinando varias comprobaciones. Esta guía explica cuáles funcionan, cuáles no y una rutina sencilla para usar antes de compartir algo.</p>

<h2 id="por-que">Por qué ya no basta con mirar</h2>

<p>Los modelos de imagen mejoran cada pocos meses, y los errores típicos que se enseñaban en 2023 están casi resueltos. Además, muchas imágenes falsas no se generan desde cero: son fotos reales con una parte cambiada, que es mucho más difícil de detectar. Y al revés, las fotos reales de un móvil moderno pasan por tanto procesado automático que a veces parecen artificiales.</p>

<p>La consecuencia práctica es que el ojo humano sirve para sospechar, no para confirmar. La confirmación viene de fuera de la imagen.</p>

<h2 id="contexto">Primero, el contexto</h2>

<p>Antes de hacer zoom, pregúntate de dónde viene la imagen. Es la comprobación que más falsos detecta y la que menos se hace:</p>

<ul>
    <li><strong>¿Quién la publicó primero?</strong> Una cuenta creada hace semanas, sin historial ni fuentes, es una mala señal.</li>
    <li><strong>¿Algún medio fiable la ha recogido?</strong> Si muestra algo muy llamativo y nadie más lo cuenta, desconfía.</li>
    <li><strong>¿Busca una reacción rápida?</strong> Indignación, urgencia o una oferta increíble son el patrón de las <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA</a>.</li>
    <li><strong>¿Encaja con los datos?</strong> Clima, estación del año, idioma de los carteles, matrículas, uniformes.</li>
</ul>

<h2 id="senales">Señales visuales que aún ayudan</h2>

<p>Ninguna es definitiva, pero varias juntas justifican investigar más:</p>

<ul>
    <li><strong>Textos secundarios</strong>: el cartel principal suele estar bien, pero las etiquetas del fondo, los rótulos lejanos o las páginas de un libro a menudo son garabatos.</li>
    <li><strong>Coherencia física</strong>: sombras que van en direcciones distintas, reflejos que no coinciden con la escena, gafas con una patilla que desaparece.</li>
    <li><strong>Detalles repetidos</strong>: caras casi idénticas en una multitud, ladrillos o hojas que se repiten como un patrón.</li>
    <li><strong>Bordes y uniones</strong>: pelo que se funde con el fondo, dedos unidos a un objeto, pendientes distintos en cada oreja.</li>
    <li><strong>Acabado demasiado perfecto</strong>: piel sin poros, iluminación de estudio en una escena que debería ser casual.</li>
</ul>

<p>Amplía la imagen y recorre los bordes y el fondo, no el centro: es ahí donde los generadores prestan menos atención.</p>

<h2 id="procedencia">Metadatos y marcas de agua</h2>

<p>Aquí está la vía más sólida, porque no adivina: lee información que alguien dejó en el archivo.</p>

<ul>
    <li><strong>Credenciales de contenido (C2PA)</strong>. Es un estándar que firma la imagen en origen e indica con qué se creó o editó. Lo usan varios generadores de imágenes, algunas cámaras y programas de edición. Puedes leerlas subiendo el archivo a un verificador de credenciales de contenido.</li>
    <li><strong>Marcas de agua invisibles</strong>. Google marca con SynthID las imágenes que generan sus modelos, y en la aplicación de Gemini puedes subir una imagen y preguntar si la ha creado una IA de Google. Otras empresas tienen sistemas propios.</li>
    <li><strong>Metadatos EXIF</strong>. Una foto de cámara suele incluir modelo, objetivo y fecha. Su ausencia no prueba nada, pero un campo de software que menciona un generador sí es revelador.</li>
</ul>

<p>El gran límite: las redes sociales y las aplicaciones de mensajería suelen borrar los metadatos al subir la imagen, y una captura de pantalla los elimina por completo. Que no haya credenciales no significa que la imagen sea real. Pasa lo mismo con el texto, como contamos en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">¿se nota si un texto lo escribe una IA?</a></p>

<h2 id="busqueda-inversa">Búsqueda inversa de imágenes</h2>

<p>Subir la imagen a un buscador de imágenes (Google Lens, Bing o TinEye) responde a dos preguntas muy útiles:</p>

<ul>
    <li><strong>¿Existe una versión anterior?</strong> Si aparece la misma foto publicada hace años en otro contexto, ya sabes que la están reutilizando.</li>
    <li><strong>¿Existe el original sin retocar?</strong> Comparar las dos versiones muestra exactamente qué se ha añadido o quitado.</li>
</ul>

<p>Recorta la imagen si tiene textos o marcos añadidos: el buscador encuentra mejor la foto limpia. La misma búsqueda por imagen sirve para muchas otras cosas, por ejemplo para <a href="/guias/identificar-plantas-con-ia">identificar plantas con una foto</a>.</p>

<h2 id="detectores">Detectores automáticos: para qué sirven</h2>

<p>Los detectores de imágenes de IA analizan patrones estadísticos y devuelven un porcentaje. Son útiles para un primer filtro, con tres precauciones:</p>

<ul>
    <li><strong>Fallan con imágenes comprimidas, recortadas o reescaladas</strong>, que es justo lo que circula por WhatsApp.</li>
    <li><strong>Se quedan atrás</strong> cuando sale un modelo nuevo de imagen.</li>
    <li><strong>Dan falsos positivos</strong> con fotos reales muy editadas o hechas con modo retrato.</li>
</ul>

<p>Si usas un asistente como ChatGPT o Gemini para analizarla, pídele que enumere los detalles concretos que le hacen dudar y por qué. Una respuesta del tipo «parece generada» sin detalles comprobables vale poco: los asistentes también pueden <a href="/guias/alucinaciones-de-la-ia">inventar</a> con mucha seguridad.</p>

<h2 id="rutina">Una rutina de dos minutos</h2>

<p>Antes de compartir una imagen llamativa o de tomar una decisión basada en ella:</p>

<ol>
    <li>Mira quién la publicó y si alguna fuente fiable la confirma.</li>
    <li>Haz una búsqueda inversa para encontrar versiones anteriores.</li>
    <li>Si tienes el archivo original, revisa credenciales de contenido y marcas de agua.</li>
    <li>Recorre bordes, fondo y textos secundarios con zoom.</li>
    <li>Si sigues sin certeza, no la compartas como real; di que no está verificada.</li>
</ol>

<p>Si eres tú quien genera imágenes, marcarlas como hechas con IA y conservar las credenciales evita muchos malentendidos. Para publicarlas con fines comerciales, revisa también lo que explicamos sobre <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos y uso comercial</a>.</p>
HTML,
];
