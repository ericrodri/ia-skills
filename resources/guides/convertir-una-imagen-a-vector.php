<?php

return [
    'title' => 'Convertir una imagen a vector gratis: logos y dibujos a SVG con Inkscape, Adobe Express o Illustrator',
    'navTitle' => 'Convertir una imagen a vector',
    'seoTitle' => 'Convertir una imagen a vector gratis: logos a SVG',
    'description' => 'Cómo pasar una imagen o un logo a vector (SVG) gratis con Inkscape, Adobe Express o Illustrator, qué hace la IA y cómo prepararlo para corte láser.',
    'excerpt' => 'Un logo en PNG se ve borroso en cuanto lo amplías; en vector se ve nítido a cualquier tamaño. Convertirlo es gratis y lleva diez minutos si sabes qué herramienta usar y cómo preparar antes la imagen. Esta guía lo explica paso a paso.',
    'category' => 'Práctica',
    'published' => '2026-11-10',
    'updated' => '2026-11-10',
    'readingMinutes' => 9,
    'words' => 1441,
    'about' => 'Vectorización de imágenes: convertir logos, dibujos e iconos de mapa de bits a formatos vectoriales como SVG, PDF o DXF',
    'related' => ['crear-un-logo-con-ia', 'prompts-para-diseno-grafico', 'quitar-el-fondo-de-una-foto-con-ia', 'mejorar-calidad-de-una-foto-con-ia', 'convertir-una-foto-en-dibujo-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial', 'herramientas-de-ia-gratis'],
    'toc' => [
        'que-es' => 'Píxeles y vectores: qué cambia',
        'herramientas' => 'Qué herramienta usar',
        'inkscape' => 'Paso a paso con Inkscape (gratis)',
        'illustrator' => 'Con Illustrator',
        'con-ia' => 'Dónde ayuda la IA y dónde no',
        'laser' => 'Para corte o grabado láser',
        'revisar' => 'Cómo saber si ha quedado bien',
    ],
    'faq' => [
        '¿Cómo convierto una imagen a vector gratis?' => 'Con Inkscape, que es gratuito y funciona en Windows, Mac y Linux: importa la imagen, pulsa Mayús + Alt + B para abrir la vectorización, ajusta la vista previa y guarda como SVG. Si no quieres instalar nada, el convertidor de PNG a SVG de Adobe Express es gratuito y va bien con logos e iconos sencillos.',
        '¿ChatGPT o Gemini pueden convertir una imagen en vector?' => 'No de verdad. Sus generadores de imagen crean archivos de píxeles (PNG o JPG), no SVG. Lo que sí hacen bien es limpiar la imagen antes de vectorizarla: enderezarla, quitar sombras y dejar colores planos. ChatGPT también puede escribir el código SVG de un icono muy simple, pero no de un logo complejo.',
        '¿Se puede vectorizar una imagen en Canva?' => 'Sí, con la función Vectorizar imagen, que forma parte de Canva Pro: acepta JPG y PNG de hasta 10 MB y el resultado se descarga en SVG, otra opción que también exige Pro. Si no tienes suscripción, Inkscape o Adobe Express hacen lo mismo gratis.',
        '¿Se puede vectorizar una foto?' => 'Técnicamente sí, pero el resultado ya no parece una foto: se convierte en manchas de color o en un dibujo de líneas, con miles de formas. La vectorización está pensada para logos, iconos, ilustraciones planas, firmas y dibujos a línea. Si quieres ese efecto artístico, primero conviértela en dibujo.',
        '¿Qué formato necesito para corte láser o vinilo?' => 'Para cortar, un vector con contornos cerrados: SVG, DXF o PDF, según lo que acepte tu programa. Para grabar, muchas máquinas aceptan también una imagen, pero el vector da bordes más limpios. LightBurn tiene su propia función para trazar imágenes y xTool Creative Space importa SVG.',
        '¿Cómo vectorizo un logo pixelado?' => 'En dos pasos: primero pide a ChatGPT o Gemini que redibuje el logo nítido, con colores planos y sin cambiar el diseño, y después vectoriza esa imagen limpia. Vectorizar directamente un logo borroso da bordes temblorosos y muchos nodos de sobra.',
    ],
    'ctaTitle' => 'Prompts para preparar la imagen antes de vectorizar',
    'ctaBody' => 'Tienes prompts listos para <a href="/skills/prompt-para-vectorizar-un-logo-o-dibujo-con-ia-limpiar-la-imagen-y-pasarla-a-vector">limpiar un logo o un dibujo y pasarlo a vector</a>, <a href="/skills/prompt-para-arreglar-un-logo-pixelado-o-borroso-con-ia-sin-cambiar-el-diseno">arreglar un logo pixelado</a> y <a href="/skills/prompt-para-preparar-una-imagen-para-grabado-o-corte-laser-con-ia">preparar una imagen para grabado o corte láser</a>.',
    'body' => <<<'HTML'
<p>Te piden el logo «en vector» para una lona, una camiseta o la máquina láser, y lo único que tienes es un PNG pequeño o una foto del cartel. La solución es vectorizarlo: calcar la imagen para convertirla en formas que se puedan ampliar sin perder nitidez. Hay herramientas gratuitas que lo hacen en un minuto. El truco está en saber cuál usar y en preparar bien la imagen antes, que es donde la IA sí ayuda.</p>

<h2 id="que-es">Píxeles y vectores: qué cambia</h2>

<p>Una imagen PNG o JPG está hecha de píxeles: al ampliarla, se ven los cuadraditos y los bordes se emborronan. Un archivo vectorial (SVG, PDF, EPS o DXF) guarda formas y curvas, así que se ve igual de nítido en una tarjeta que en una valla publicitaria, y cada color se puede cambiar por separado.</p>

<p>Vectorizar es pasar de lo primero a lo segundo. Funciona muy bien con <strong>logos, iconos, ilustraciones de colores planos, firmas y dibujos a línea</strong>. Con fotos no tiene mucho sentido: el resultado se convierte en manchas de color con miles de formas.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<table>
    <thead>
        <tr><th>Herramienta</th><th>Precio</th><th>Para qué va bien</th></tr>
    </thead>
    <tbody>
        <tr><td>Inkscape</td><td>Gratis (Windows, Mac y Linux)</td><td>La mejor opción gratuita con control total: número de colores, suavizado y edición de nodos.</td></tr>
        <tr><td>Adobe Express</td><td>Gratis, en el navegador</td><td>Logos e iconos sencillos sin instalar nada. Revisa que se mantenga el fondo transparente, porque no siempre lo conserva.</td></tr>
        <tr><td>Illustrator</td><td>De pago</td><td>Si ya lo tienes: Calco de imagen da muy buen resultado y se edita al momento.</td></tr>
        <tr><td>Canva</td><td>Canva Pro</td><td>Vectorizar imagen acepta JPG y PNG de hasta 10 MB; la descarga en SVG también es de Pro.</td></tr>
        <tr><td>Recraft</td><td>Plan gratuito con créditos diarios</td><td>Vectoriza y también genera logos directamente en vector. Lo que haces en el plan gratuito es público y no se puede usar con fines comerciales.</td></tr>
        <tr><td>Vectorizer.ai</td><td>Suscripción para descargar</td><td>Muy buen calco automático; puedes subir la imagen y ver el resultado gratis, pero para descargarlo hay que pagar.</td></tr>
    </tbody>
</table>

<p>Si es para tu negocio y lo vas a usar a menudo, Inkscape compensa los diez minutos que cuesta aprenderlo. Si solo necesitas salir del paso con un icono, Adobe Express basta.</p>

<h2 id="inkscape">Paso a paso con Inkscape (gratis)</h2>

<ol>
    <li><strong>Importa la imagen</strong> con Archivo, Importar (o arrástrala a la ventana) y haz clic sobre ella para seleccionarla.</li>
    <li><strong>Abre la vectorización</strong> con Mayús + Alt + B. Está en el menú de trazos, en la opción Vectorizar mapa de bits; el nombre exacto del menú cambia un poco según la versión.</li>
    <li><strong>Elige el modo.</strong> Para un logo en una sola tinta, una firma o un dibujo a línea, usa un solo escaneo por umbral de brillo. Para un logo de varios colores, usa varios escaneos por colores e indica cuántos tiene: si son tres, pon tres.</li>
    <li><strong>Mira la vista previa</strong> y mueve el umbral hasta que los bordes salgan limpios y no aparezcan manchas.</li>
    <li><strong>Aplica.</strong> El vector queda encima de la imagen original: arrástralo a un lado y borra la imagen.</li>
    <li><strong>Simplifica</strong> con Ctrl + L si ves demasiados nodos, y repasa a mano las curvas que hayan quedado raras.</li>
    <li><strong>Guarda</strong> como SVG para web o corte, o como PDF para imprenta.</li>
</ol>

<p>Si el logo tiene texto, lo mejor es borrar las letras vectorizadas y escribirlas de nuevo con la tipografía real. Si no sabes cuál es, la ficha para <a href="/skills/prompt-para-identificar-la-tipografia-de-una-imagen-o-un-logo-con-ia">identificar la tipografía de una imagen</a> te ayuda a encontrarla o a elegir una parecida.</p>

<h2 id="illustrator">Con Illustrator</h2>

<p>Coloca la imagen, selecciónala y abre el panel Calco de imagen desde el menú Ventana. Elige un ajuste predefinido (hay uno para logotipos en blanco y negro y otros por número de colores), activa la vista previa y ajusta el umbral o los colores. Cuando te convenza, pulsa <strong>Expandir</strong>: hasta ese momento no son formas editables. Si dejas el ajuste en escala de grises, Illustrator crea una malla con muchísimos puntos, así que conviene reducir colores antes de expandir.</p>

<h2 id="con-ia">Dónde ayuda la IA y dónde no</h2>

<p>ChatGPT y Gemini <strong>no exportan vectores</strong>: generan imágenes de píxeles. Pedirles «pásame este logo a SVG» suele acabar en un PNG con apariencia de vector o en un código que no se parece al original. Donde sí ahorran trabajo es en el paso anterior:</p>

<ul>
    <li><strong>Limpiar la imagen.</strong> Una foto torcida del cartel, con sombras y reflejos, da un vector malo. Si se la pasas a la IA para que la deje recta, sobre fondo blanco y con colores planos, el calco sale a la primera. Lo tienes en el <a href="/skills/prompt-para-vectorizar-un-logo-o-dibujo-con-ia-limpiar-la-imagen-y-pasarla-a-vector">prompt para vectorizar un logo o un dibujo</a>.</li>
    <li><strong>Recuperar un logo pixelado.</strong> Si solo tienes una versión diminuta o borrosa, primero pide que lo redibuje nítido sin cambiar el diseño, con el <a href="/skills/prompt-para-arreglar-un-logo-pixelado-o-borroso-con-ia-sin-cambiar-el-diseno">prompt para arreglar un logo pixelado</a>, y vectoriza después.</li>
    <li><strong>Iconos muy simples.</strong> Para una flecha, un círculo con una letra o una forma geométrica, ChatGPT puede escribir directamente el código SVG. Con logos detallados no funciona.</li>
    <li><strong>Generar en vector desde cero.</strong> Si aún no tienes logo, Recraft lo genera ya en vector. Para el resto del proceso, sigue la guía de <a href="/guias/crear-un-logo-con-ia">crear un logo con IA</a>.</li>
</ul>

<p>Una precaución: cuando la IA redibuja, reinterpreta. Compara siempre el resultado con el original, sobre todo letras, proporciones y detalles pequeños.</p>

<h2 id="laser">Para corte o grabado láser</h2>

<p>Las máquinas láser y de vinilo distinguen dos trabajos:</p>

<ul>
    <li><strong>Cortar</strong> necesita un vector con contornos cerrados: el láser sigue la línea. Usa SVG, DXF o PDF según lo que acepte tu programa.</li>
    <li><strong>Grabar</strong> puede hacerse con una imagen, pero un dibujo en blanco y negro sin degradados graba mucho más limpio que una foto.</li>
</ul>

<p>LightBurn tiene su propia función para trazar imágenes, en el menú Herramientas o con Alt + T, y guarda el resultado como vector. xTool Creative Space importa SVG, así que puedes vectorizar en Inkscape o LightBurn y llevar el archivo después. Para dejar la imagen preparada, con líneas gruesas, sin grises y sin detalles que el láser no pueda reproducir, tienes el <a href="/skills/prompt-para-preparar-una-imagen-para-grabado-o-corte-laser-con-ia">prompt para preparar una imagen para grabado o corte láser</a>.</p>

<h2 id="revisar">Cómo saber si ha quedado bien</h2>

<ul>
    <li><strong>Amplía al 800 %</strong>: los bordes deben seguir siendo curvas suaves, no escalones.</li>
    <li><strong>Cuenta los colores</strong>: si el logo tiene tres y el vector tiene veinte tonos parecidos, vuelve a vectorizar con menos colores.</li>
    <li><strong>Mira los nodos</strong>: una letra con cientos de puntos dará problemas al imprimir o cortar. Simplifica.</li>
    <li><strong>Prueba un fondo de color</strong>: así ves si queda un recuadro blanco que no debería estar. Si necesitas el logo sin fondo en PNG, la ficha de <a href="/skills/prompt-para-hacer-un-logo-con-fondo-transparente-con-chatgpt-png-sin-fondo">logo con fondo transparente</a> explica cómo conseguirlo.</li>
</ul>

<p>Y un recordatorio: vectorizar el logo de otra marca no te da derecho a usarlo. Hazlo con el tuyo, el de un cliente que te lo encarga o con permiso. Lo explicamos en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>.</p>
HTML,
];
