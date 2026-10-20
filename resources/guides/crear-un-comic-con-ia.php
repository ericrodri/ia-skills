<?php

return [
    'title' => 'Crear un cómic con IA: del guion a las viñetas con el mismo personaje en todas',
    'navTitle' => 'Crear un cómic con IA',
    'seoTitle' => 'Crear un cómic con IA: guion, viñetas y personajes',
    'description' => 'Cómo hacer un cómic con ChatGPT, Gemini o Canva: escribir el guion por viñetas, mantener el mismo personaje, poner los bocadillos y montar la página.',
    'excerpt' => 'La IA dibuja una viñeta espectacular en segundos. Lo difícil es que en la siguiente el protagonista siga teniendo la misma cara. Con un guion por viñetas, una ficha del personaje y los bocadillos puestos a mano, sale un cómic que se entiende y se lee de un tirón.',
    'category' => 'Práctica',
    'published' => '2026-10-20',
    'updated' => '2026-10-20',
    'readingMinutes' => 8,
    'words' => 1361,
    'about' => 'Creación de cómics, tiras cómicas y novelas gráficas con asistentes de inteligencia artificial y generadores de imágenes',
    'related' => ['crear-un-cuento-infantil-con-ia', 'crear-imagenes-con-ia', 'dibujos-para-colorear-con-ia', 'crear-stickers-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial', 'escribir-un-libro-con-ia'],
    'toc' => [
        'formato' => 'Elige el formato antes de dibujar',
        'guion' => 'El guion, viñeta a viñeta',
        'personaje' => 'El mismo personaje en todas las viñetas',
        'vinetas' => 'Generar las viñetas',
        'bocadillos' => 'Los bocadillos, siempre a mano',
        'publicar' => 'Montar, imprimir y publicar',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer un cómic?' => 'Para el guion sirve cualquier asistente: ChatGPT, Gemini o Claude. Para las viñetas, los generadores de imagen de ChatGPT y Gemini son los que mejor mantienen un personaje si les pasas una imagen de referencia. Para montar la página y poner los bocadillos, Canva o cualquier editor con plantillas de cómic.',
        '¿Puede la IA hacer una página entera de cómic de una vez?' => 'Puede, y para una tira corta de tres o cuatro viñetas a veces sale bien. Para una página con seis viñetas o más, el resultado suele mezclar escenas y equivocarse con los textos. Genera cada viñeta por separado y móntalas tú: tardas algo más y controlas cada detalle.',
        '¿Cómo consigo que el personaje no cambie de cara?' => 'Escribe una ficha con su aspecto (pelo, ropa, colores, rasgos) y pégala entera en cada petición, trabaja en la misma conversación y adjunta la mejor imagen del personaje como referencia. Aun así habrá pequeñas diferencias; corrige solo las que se noten a primera vista.',
        '¿Puedo vender un cómic hecho con IA?' => 'Puedes, pero las imágenes generadas solo con IA no siempre están protegidas por derechos de autor, y algunas plataformas y editoriales piden declararlo. El guion y el montaje sí son obra tuya. Antes de vender, revisa las condiciones de la herramienta y de la plataforma donde vas a publicar.',
        '¿Se puede hacer un cómic con personajes conocidos?' => 'Para un uso privado, como un regalo o un trabajo de clase, nadie suele poner pegas. Para publicarlo o venderlo, no: los personajes de cómics, películas y series tienen dueño. Pide a la IA un personaje original inspirado en un estilo, no una copia de uno existente.',
    ],
    'ctaTitle' => 'Más instrucciones para crear imágenes',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones listas para generar ilustraciones con un estilo constante, escribir guiones y preparar piezas para redes, muchas pensadas para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Hacer un cómic con IA es más fácil que nunca y, a la vez, tiene una trampa que no tienen otras imágenes: una historia necesita que el protagonista sea el mismo de la primera a la última viñeta, y los generadores tienden a cambiarle el peinado, la ropa o la edad sin avisar. Esta guía explica el orden de trabajo que evita ese problema y el otro gran fallo, los textos ilegibles dentro de los bocadillos. Sirve para una tira cómica para redes, un cómic de regalo o un trabajo de clase.</p>

<h2 id="formato">Elige el formato antes de dibujar</h2>

<p>El formato decide cuántas viñetas tienes y cuánta historia cabe. Las tres opciones habituales:</p>

<ul>
    <li><strong>Tira cómica</strong>: tres o cuatro viñetas en horizontal, con un chiste o una situación que se resuelve en la última. Es lo más fácil para empezar y lo que mejor funciona en redes.</li>
    <li><strong>Página de cómic</strong>: entre seis y nueve viñetas en una cuadrícula, con una escena completa. Ideal para un regalo o una lámina.</li>
    <li><strong>Historia de varias páginas</strong>: de cuatro a veinte páginas. Aquí el guion pesa mucho más que el dibujo.</li>
</ul>

<p>Para un carrusel de Instagram, piensa en viñetas cuadradas, una por imagen; para imprimir, en una página A4 o A5 vertical.</p>

<h2 id="guion">El guion, viñeta a viñeta</h2>

<p>Un cómic se escribe por viñetas, no como un cuento. Cada viñeta tiene tres cosas: qué se ve, quién habla y qué dice. Pídeselo así al asistente:</p>

<blockquote>«Escribe el guion de una tira cómica de 4 viñetas. Protagonista: [PERSONAJE]. Situación: [QUÉ PASA]. Tono: [HUMOR BLANCO / IRÓNICO / TIERNO]. Para cada viñeta indica: plano (general, medio o primer plano), qué se ve, y el diálogo de cada personaje con un máximo de 12 palabras por bocadillo. La gracia tiene que estar en la última viñeta.»</blockquote>

<p>Dos cosas que marcan la diferencia:</p>

<ul>
    <li><strong>Pocas palabras por bocadillo.</strong> Un cómic con párrafos dentro de los globos no se lee. Si el asistente se alarga, pide «reduce cada diálogo a la mitad».</li>
    <li><strong>Variar los planos.</strong> Cuatro viñetas con el mismo encuadre aburren. Un plano general para situar, primeros planos para las reacciones.</li>
</ul>

<p>Si la historia es larga o para niños, el método se parece al de <a href="/guias/crear-un-cuento-infantil-con-ia">crear un cuento infantil con IA</a>: primero la historia completa, luego la división en páginas.</p>

<h2 id="personaje">El mismo personaje en todas las viñetas</h2>

<p>Este es el paso que más se salta y el que más tiempo ahorra después. Antes de generar ninguna viñeta, crea al personaje:</p>

<ol>
    <li><strong>Escribe una ficha</strong> con todo lo que se ve: «Chica de 12 años, pelo rizado castaño recogido en dos moños, gafas redondas rojas, sudadera amarilla con una estrella, vaqueros y zapatillas verdes».</li>
    <li><strong>Genera una hoja de personaje</strong>: «Dibuja a este personaje de frente, de perfil y de espaldas, sobre fondo blanco, estilo cómic europeo con línea clara». Repite hasta que te guste.</li>
    <li><strong>Usa esa imagen como referencia</strong> en cada viñeta: adjúntala y pega la ficha entera. ChatGPT y Gemini respetan mucho mejor el aspecto cuando ven una imagen que cuando solo leen una descripción.</li>
</ol>

<p>Si hay varios personajes, haz una hoja de cada uno y dales colores de ropa muy distintos: así el lector los reconoce aunque la cara varíe un poco. Para un protagonista que se parezca a una persona real, como en un regalo, en <a href="/guias/crear-un-avatar-con-ia">crear un avatar con IA</a> se explica cómo conseguir parecido.</p>

<h2 id="vinetas">Generar las viñetas</h2>

<p>Con el guion y la hoja de personaje, genera una viñeta por petición. Una plantilla que funciona:</p>

<blockquote>«Viñeta de cómic, estilo [EL MISMO SIEMPRE]. Personaje: [FICHA]. Plano: [PLANO]. Escena: [QUÉ SE VE]. Formato cuadrado. Deja espacio libre en la parte superior para un bocadillo. No escribas ningún texto ni bocadillo dentro de la imagen.»</blockquote>

<p>El estilo conviene fijarlo con palabras concretas y repetirlas igual cada vez: «manga en blanco y negro con tramas», «cómic europeo de línea clara», «estilo tebeo clásico con colores planos», «acuarela suave». Cambiar una sola palabra cambia el dibujo.</p>

<p>Si una viñeta sale casi bien, no la generes de nuevo desde cero: pide el cambio concreto («la misma imagen, pero con la boca abierta de sorpresa»). Y si quieres más ideas sobre cómo describir escenas, la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a> tiene el método completo.</p>

<h2 id="bocadillos">Los bocadillos, siempre a mano</h2>

<p>Los generadores escriben cada vez mejor, pero en un cómic hay mucho texto en poco espacio, y es fácil que cambien una letra, se coman una tilde o inventen una palabra. Por eso los bocadillos se ponen después, con un editor:</p>

<ul>
    <li><strong>Canva</strong> tiene formas de bocadillo y de cartela listas para arrastrar. Es lo más rápido.</li>
    <li><strong>Una presentación</strong> de diapositivas también sirve: imagen de fondo, forma ovalada blanca con borde negro y texto encima.</li>
    <li><strong>Tipografía de cómic</strong>: usa una letra que imite la rotulada a mano y escríbela en mayúsculas, como en los tebeos. Que sea grande: debe leerse en el móvil sin ampliar.</li>
</ul>

<p>El orden de lectura importa: los bocadillos se leen de izquierda a derecha y de arriba abajo, así que quien habla primero va arriba a la izquierda. Si un texto no cabe, recórtalo antes que reducir la letra. Para repasar los diálogos, <a href="/guias/corregir-ortografia-con-ia">corregir la ortografía con IA</a> es un paso de un minuto que evita erratas a la vista de todos.</p>

<h2 id="publicar">Montar, imprimir y publicar</h2>

<p>Para montar una página, Canva y otros editores tienen plantillas de cuadrícula de cómic: arrastras cada viñeta a su hueco y ajustas. Deja un margen blanco entre viñetas, llamado calle, de unos 3 o 4 mm en papel; sin él, la página parece un collage.</p>

<ul>
    <li><strong>Para redes</strong>: una viñeta por imagen en un carrusel cuadrado de 1080×1080, o la tira entera en una imagen horizontal. La última viñeta, la del remate, nunca en la portada del carrusel. Más formatos en <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a>.</li>
    <li><strong>Para imprimir</strong>: exporta en PDF a 300 ppp. Si alguna viñeta ha salido pequeña, amplíala antes con lo que explica <a href="/guias/mejorar-calidad-de-una-foto-con-ia">mejorar la calidad de una foto con IA</a>. Las imprentas de fotolibros hacen cómics grapados o de tapa dura desde un solo ejemplar.</li>
    <li><strong>Para colorear</strong>: si el cómic es para niños, pide las mismas viñetas en línea negra sin color y tendrás un cuaderno para pintar; se explica en <a href="/guias/dibujos-para-colorear-con-ia">dibujos para colorear con IA</a>.</li>
</ul>

<p>Si vas a publicarlo o venderlo, lee antes <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a>: las viñetas generadas solo con IA no siempre están protegidas, y algunas plataformas piden declararlo. El guion y el montaje sí son tuyos, y son justo lo que hace que un cómic merezca la pena.</p>
HTML,
];
