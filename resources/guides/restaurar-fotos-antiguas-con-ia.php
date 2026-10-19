<?php

return [
    'title' => 'Restaurar fotos antiguas con IA: arreglar, colorear y mejorar la calidad',
    'navTitle' => 'Restaurar fotos antiguas',
    'seoTitle' => 'Restaurar fotos antiguas con IA paso a paso',
    'description' => 'Cómo restaurar fotos antiguas con IA: escanearlas bien, quitar arañazos, mejorar la nitidez y colorear sin que la IA cambie las caras de tu familia.',
    'excerpt' => 'Una foto rota o desvaída de tus abuelos se puede recuperar en minutos con IA. El truco está en escanearla bien, pedir los arreglos por pasos y comparar siempre con el original, porque la IA rellena lo que falta inventando.',
    'category' => 'Práctica',
    'published' => '2026-10-12',
    'updated' => '2026-10-12',
    'readingMinutes' => 8,
    'words' => 1253,
    'about' => 'Restauración, coloreado y mejora de calidad de fotografías antiguas con inteligencia artificial',
    'related' => ['mejorar-calidad-de-una-foto-con-ia', 'editar-fotos-con-ia', 'crear-videos-con-ia', 'herramientas-de-ia-gratis', 'imagenes-con-ia-derechos-y-uso-comercial', 'crear-imagenes-con-ia', 'estafas-con-ia-deepfakes-y-suplantacion'],
    'toc' => [
        'que-hace' => 'Qué puede arreglar la IA y qué no',
        'escanear' => 'Primero, una buena copia digital',
        'herramientas' => 'Qué herramienta usar',
        'pasos' => 'Restaurar por pasos',
        'colorear' => 'Colorear una foto en blanco y negro',
        'revisar' => 'Cómo saber si la IA se ha pasado',
        'guardar' => 'Guardar y compartir el resultado',
    ],
    'faq' => [
        '¿Qué IA restaura fotos antiguas gratis?' => 'Gemini y ChatGPT restauran fotos que les subes con un plan gratuito limitado: basta pedir que quiten arañazos, mejoren la nitidez o la coloreen. Google Fotos y la galería de muchos móviles incluyen mejoras automáticas, y hay webs especializadas en restaurar y colorear con algunas fotos gratis al día.',
        '¿Se puede mejorar la calidad de una foto borrosa con IA?' => 'Sí, hasta cierto punto. Los modelos de aumento de resolución hacen una foto pequeña o algo borrosa mucho más nítida, pero los detalles que no estaban en la imagen los inventan. En caras pequeñas o muy desenfocadas el resultado puede parecer otra persona.',
        '¿Cómo coloreo una foto en blanco y negro con IA?' => 'Sube la foto a un asistente que edite imágenes y pide «colorea esta foto con colores realistas de la época, sin cambiar caras ni composición». Si conoces algún color real, como el de un vestido o unos ojos, indícalo; la IA solo puede adivinar los demás.',
        '¿Es mejor escanear la foto o hacerle una foto con el móvil?' => 'Un escáner a 600 ppp da mejor resultado porque evita reflejos y deformaciones. Si solo tienes el móvil, usa una aplicación de escaneo de fotos que elimine reflejos, haz la foto de frente con luz natural indirecta y sin flash.',
        '¿Es seguro subir fotos familiares a una IA?' => 'Las fotos se procesan en servidores de la empresa y, según el plan y la configuración, pueden usarse para entrenar modelos. Revisa los ajustes de privacidad, desactiva el uso para entrenamiento si la herramienta lo permite y evita subir fotos de otras personas sin su permiso.',
    ],
    'ctaTitle' => 'Instrucciones para trabajar con imágenes',
    'ctaBody' => 'Restaurar, retocar y preparar fotos para publicar son tareas que se repiten. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Casi todas las familias tienen una caja con fotos dobladas, manchadas o tan desvaídas que apenas se distingue quién sale. Restaurarlas antes exigía horas de retoque o pagar a un profesional. Hoy una IA quita arañazos, devuelve el contraste y hasta colorea una foto en blanco y negro en un par de minutos. Esta guía explica cómo hacerlo bien y, sobre todo, cómo evitar que la IA convierta a tu bisabuela en otra persona.</p>

<h2 id="que-hace">Qué puede arreglar la IA y qué no</h2>

<p>La IA es muy buena con los daños típicos del papel:</p>

<ul>
    <li><strong>Arañazos, polvo, manchas y pliegues</strong>: los detecta y rellena con lo que hay alrededor.</li>
    <li><strong>Colores desvaídos o virados</strong>: las fotos de los setenta y ochenta que se han vuelto rojizas o amarillas recuperan un tono natural.</li>
    <li><strong>Falta de nitidez</strong>: aumenta la resolución y define bordes.</li>
    <li><strong>Blanco y negro</strong>: propone colores verosímiles.</li>
</ul>

<p>Lo que no puede hacer es recuperar información que no está. Si falta media cara porque la foto está rota, o si los rostros son unos pocos píxeles en una foto de grupo, la IA los <strong>inventa</strong>. El resultado puede ser bonito, pero ya no es un documento fiel. Conviene tenerlo claro antes de enseñar la foto como «la original arreglada».</p>

<h2 id="escanear">Primero, una buena copia digital</h2>

<p>La calidad final depende mucho de la copia de partida. Una foto torcida, con reflejos o con poca resolución obliga a la IA a adivinar más.</p>

<ul>
    <li><strong>Con escáner</strong>: a 600 ppp como mínimo, y a 1.200 si la foto es pequeña, como las de carné. Guarda en PNG o TIFF, no en JPG muy comprimido.</li>
    <li><strong>Con el móvil</strong>: usa una aplicación de escaneo de fotos, que hace varias tomas y elimina los reflejos. Luz natural indirecta, sin flash, móvil paralelo a la foto.</li>
    <li><strong>Fotos en marco o álbum</strong>: sácalas si puedes. El cristal y el plástico añaden reflejos que la IA confunde con daños.</li>
</ul>

<p>Guarda siempre esa copia sin tocar. Es tu original digital y la necesitarás para comparar.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<ul>
    <li><strong>Gemini o ChatGPT</strong>: subes la foto y pides lo que quieres por escrito. Son los más flexibles y tienen uso gratuito con límites.</li>
    <li><strong>Google Fotos y la galería del móvil</strong>: mejoras automáticas de luz y nitidez en un toque. Suficiente para daños leves.</li>
    <li><strong>Webs especializadas en restaurar y colorear</strong>: hacen el proceso completo con un botón y suelen dejar unas pocas fotos gratis.</li>
    <li><strong>Photoshop</strong>: tiene filtros de restauración y coloreado con IA y permite retocar a mano lo que falle. Para trabajos de encargo o fotos muy dañadas.</li>
</ul>

<p>En <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a> comparamos estas herramientas para otros retoques, y en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a> están sus límites gratuitos.</p>

<p>Si la foto no es antigua sino simplemente pequeña o pixelada (una imagen de WhatsApp, una captura de vídeo), no necesitas todo el proceso de restauración: basta con aumentar la resolución, como se explica en <a href="/guias/mejorar-calidad-de-una-foto-con-ia">mejorar la calidad de una foto con IA</a>.</p>

<h2 id="pasos">Restaurar por pasos</h2>

<p>Pedirlo todo de golpe («arréglala y coloréala») da peores resultados que ir por partes. Un orden que funciona:</p>

<ol>
    <li><strong>Limpieza</strong>: «Quita los arañazos, manchas y pliegues de esta foto. No cambies las caras, la ropa ni la composición.»</li>
    <li><strong>Luz y contraste</strong>: «Recupera el contraste y corrige el tono amarillento, manteniendo el aspecto de foto antigua.»</li>
    <li><strong>Nitidez</strong>: «Aumenta la nitidez y la resolución sin suavizar la piel ni añadir detalles que no estén.»</li>
    <li><strong>Color</strong>, si lo quieres, en el último paso.</li>
</ol>

<p>Después de cada paso, compara con la versión anterior. Si algo ha empeorado, vuelve atrás y repite con una instrucción más concreta en lugar de seguir encadenando ediciones: cada pasada acumula pequeños cambios.</p>

<p>La frase «no cambies las caras» parece obvia, pero marca la diferencia. Sin ella, muchos modelos «embellecen» los rostros: suavizan arrugas, agrandan los ojos o modernizan el peinado.</p>

<h2 id="colorear">Colorear una foto en blanco y negro</h2>

<p>La IA no sabe de qué color era el vestido de tu abuela. Propone colores probables según la época y el tipo de prenda. Para que se acerque a la realidad:</p>

<ul>
    <li><strong>Da los datos que conozcas</strong>: «el abrigo era azul marino, el pelo castaño oscuro, la fachada de piedra gris».</li>
    <li><strong>Sitúa la época y el lugar</strong>: «foto de un pueblo de Castilla hacia 1950» orienta los tonos de ropa y paisaje.</li>
    <li><strong>Pide colores sobrios</strong>: «colores realistas y algo apagados, como una foto en color de la época». Si no, tiende a saturar.</li>
</ul>

<p>Guarda también la versión en blanco y negro restaurada. Para muchas familias es la más fiel y la que mejor envejece.</p>

<h2 id="revisar">Cómo saber si la IA se ha pasado</h2>

<p>Pon el original y el resultado uno al lado del otro y amplía las caras. Señales de que la IA ha inventado de más:</p>

<ul>
    <li>Rasgos que no reconoces: otra nariz, otra forma de ojos, dientes perfectos.</li>
    <li>Piel lisa como de plástico o pelo con textura repetida.</li>
    <li>Manos, botones o letras deformados.</li>
    <li>Personas del fondo convertidas en figuras extrañas.</li>
</ul>

<p>Lo mejor es enseñársela a alguien que conociera a las personas de la foto. Si dice «no parece él», repite con menos aumento de nitidez o restaura esa zona por separado.</p>

<h2 id="guardar">Guardar y compartir el resultado</h2>

<ul>
    <li><strong>Guarda tres versiones</strong>: el escaneo original, la restaurada y, si la hay, la coloreada. Pon en el nombre del archivo quién sale y el año aproximado.</li>
    <li><strong>Indica que está restaurada con IA</strong> si la compartes o la usas en un árbol genealógico, para que nadie la tome por un documento exacto.</li>
    <li><strong>Para imprimir</strong>, exporta a la máxima resolución y pide una prueba pequeña antes de encargar una copia grande.</li>
    <li><strong>Animarla</strong>: algunas herramientas de vídeo convierten la foto en un clip corto en el que la persona sonríe o gira la cabeza. Emociona, pero es un efecto inventado; lo explicamos en <a href="/guias/crear-videos-con-ia">crear vídeos con IA</a>.</li>
</ul>

<p>Las mismas técnicas que devuelven la vida a una foto antigua sirven para fabricar imágenes falsas de personas reales. En <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA y deepfakes</a> está cómo reconocerlas.</p>
HTML,
];
