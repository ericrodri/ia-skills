<?php

return [
    'title' => 'Animar una foto con IA: hacer que se mueva sin que parezca un muñeco',
    'navTitle' => 'Animar una foto con IA',
    'seoTitle' => 'Animar una foto con IA: que se mueva y sea creíble',
    'description' => 'Cómo convertir una foto en un vídeo corto con IA: qué herramienta usar, cómo describir el movimiento, qué foto funciona mejor y qué se puede hacer gratis.',
    'excerpt' => 'Subir una foto y verla sonreír, girar la cabeza o mecerse con el viento está al alcance de cualquiera. Que el resultado no dé grima depende de tres cosas: la foto que eliges, cómo describes el movimiento y saber cuándo parar.',
    'category' => 'Práctica',
    'published' => '2026-10-26',
    'updated' => '2026-10-26',
    'readingMinutes' => 7,
    'words' => 1220,
    'about' => 'Animación de fotografías fijas con generadores de vídeo de inteligencia artificial',
    'related' => ['crear-videos-con-ia', 'restaurar-fotos-antiguas-con-ia', 'mejorar-calidad-de-una-foto-con-ia', 'estafas-con-ia-deepfakes-y-suplantacion', 'imagenes-con-ia-derechos-y-uso-comercial', 'herramientas-de-ia-gratis'],
    'toc' => [
        'como-funciona' => 'Qué hace la IA cuando anima una foto',
        'herramientas' => 'Qué herramienta usar',
        'foto' => 'Elegir y preparar la foto',
        'instruccion' => 'Cómo describir el movimiento',
        'errores' => 'Los fallos típicos y cómo evitarlos',
        'limites' => 'Personas reales, permisos y etiquetas',
    ],
    'faq' => [
        '¿Se puede animar una foto con IA gratis?' => 'Sí, con límites. Varias herramientas dan créditos diarios o de bienvenida que alcanzan para unos pocos clips de cinco a diez segundos. Lo habitual en los planes gratuitos es una marca de agua, menos resolución y una cola de espera más larga.',
        '¿Qué IA anima mejor las fotos antiguas?' => 'Para retratos familiares dan buen resultado los generadores de vídeo generales, como Veo dentro de Gemini o Kling, siempre que pidas un movimiento muy pequeño. Las aplicaciones de genealogía, como MyHeritage, tienen funciones pensadas solo para caras. Restaura antes la foto: una imagen nítida se anima mucho mejor.',
        '¿Puedo hacer que una persona de la foto hable?' => 'Sí, algunas herramientas sincronizan los labios con un audio o un texto. Es la parte que peor funciona y la más delicada: es fácil que parezca falso, y hacer hablar a alguien real sin su permiso es un uso que las plataformas y la ley tratan con dureza.',
        '¿Cuánto dura el vídeo que sale de una foto?' => 'Entre cinco y diez segundos en la mayoría de herramientas. Para algo más largo se generan varios clips y se unen en un editor, aunque cuanto más se alarga el movimiento más fácil es que la cara o las manos se deformen.',
        '¿Tengo que avisar de que el vídeo está hecho con IA?' => 'Si lo publicas y parece real, sí. En la Unión Europea el Reglamento de IA obliga a señalar los contenidos que aparentan ser auténticos sin serlo, y YouTube, TikTok o Instagram piden marcarlos. Para un recuerdo familiar que se queda en casa no hace falta.',
    ],
    'ctaTitle' => 'Skills para trabajar con imagen y vídeo',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para generar y editar imagen y vídeo, muchas pensadas para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Animar una foto con IA es convertir una imagen fija en un vídeo corto: la abuela que sonríe en un retrato de 1960, el mar que se mueve en la foto de las vacaciones, el producto que gira despacio sobre la mesa. Se hace en un par de minutos y desde el móvil. El problema no es conseguir que se mueva, sino que se mueva de forma creíble. Esta guía explica qué herramienta usar, qué foto elegir y cómo pedir el movimiento para no acabar con una cara de cera.</p>

<h2 id="como-funciona">Qué hace la IA cuando anima una foto</h2>

<p>La IA no «descubre» cómo se movía la persona o el paisaje: lo inventa. Un generador de vídeo toma tu foto como primer fotograma y predice los siguientes según lo que le has pedido y lo que ha visto en millones de vídeos. Por eso la sonrisa de un retrato animado es plausible, pero no es la sonrisa real de esa persona.</p>

<p>Tenerlo claro evita dos decepciones. La primera, esperar un recuerdo fiel: es una recreación. La segunda, pedir demasiado: cuanto más movimiento pides, más tiene que inventar la IA y más se nota.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<p>Casi todos los generadores de vídeo aceptan una imagen como punto de partida. Los que mejor funcionan hoy para animar fotos:</p>

<ul>
    <li><strong>Veo, dentro de Gemini</strong>: subes la foto, describes el movimiento y genera un clip corto con sonido. Muy convincente con personas y paisajes; la cuenta gratuita tiene un cupo pequeño.</li>
    <li><strong>Kling</strong>: da créditos diarios gratuitos y bastante control sobre el movimiento de cámara. Buena opción para probar sin pagar.</li>
    <li><strong>Sora</strong>: la aplicación de vídeo de OpenAI también parte de imágenes, con restricciones fuertes cuando aparecen personas reales.</li>
    <li><strong>Runway y Luma</strong>: más orientadas a uso profesional, con controles finos de cámara y de duración.</li>
    <li><strong>Aplicaciones de genealogía como MyHeritage</strong>: animan solo la cara de un retrato con gestos predefinidos. Menos libertad, pero muy sencillas para fotos familiares.</li>
</ul>

<p>Las funciones y los cupos gratuitos cambian a menudo, así que comprueba las condiciones antes de elegir. Si quieres hacer algo más largo que un clip, la guía de <a href="/guias/crear-videos-con-ia">crear vídeos con IA</a> explica cómo unir varias tomas en un vídeo con sentido.</p>

<h2 id="foto">Elegir y preparar la foto</h2>

<p>La foto decide la mitad del resultado. Funcionan mejor las que cumplen esto:</p>

<ul>
    <li><strong>Nítidas</strong>: una imagen borrosa obliga a la IA a inventar detalle, y lo inventado se deforma al moverse. Si es pequeña o tiene ruido, pásala antes por un escalador; lo explicamos en <a href="/guias/mejorar-calidad-de-una-foto-con-ia">mejorar la calidad de una foto con IA</a>.</li>
    <li><strong>Con la cara de frente o de tres cuartos</strong>: los perfiles y las caras pequeñas al fondo salen peor.</li>
    <li><strong>Sin manos en primer plano</strong>: los dedos siguen siendo el punto débil de casi todos los modelos.</li>
    <li><strong>Con pocas personas</strong>: una foto de grupo animada suele acabar con alguien que cambia de cara a mitad del clip.</li>
</ul>

<p>Si es una foto antigua con rayas, manchas o pliegues, arréglala primero. Animar una foto dañada multiplica los defectos. La guía de <a href="/guias/restaurar-fotos-antiguas-con-ia">restaurar fotos antiguas con IA</a> va paso a paso, y el orden correcto es siempre restaurar, comprobar que la cara no ha cambiado y solo entonces animar.</p>

<h2 id="instruccion">Cómo describir el movimiento</h2>

<p>La instrucción es corta, pero conviene que diga tres cosas: qué se mueve, cuánto y qué hace la cámara. Compara:</p>

<blockquote>«Que se mueva.»</blockquote>

<p>Con eso la IA decide por ti, y suele exagerar. Mucho mejor:</p>

<blockquote>«La mujer del retrato parpadea, sonríe ligeramente y gira la cabeza unos centímetros hacia la izquierda. Movimiento lento y sutil. La cámara está fija. Mantén la ropa, el peinado y el fondo exactamente como en la foto.»</blockquote>

<p>Algunos ejemplos que suelen salir bien:</p>

<ul>
    <li><strong>Paisaje</strong>: «Las olas rompen suavemente, las nubes avanzan despacio hacia la derecha. Cámara fija.»</li>
    <li><strong>Mascota</strong>: «El perro mueve las orejas y mira hacia la cámara. Nada más se mueve.»</li>
    <li><strong>Producto</strong>: «La taza gira despacio sobre sí misma mientras sale vapor. Fondo y luz sin cambios.»</li>
    <li><strong>Foto de viaje</strong>: «La cámara se acerca lentamente a la catedral. Las personas siguen caminando con naturalidad.»</li>
</ul>

<p>Pide movimientos pequeños y lentos, sobre todo con caras. Si el primer intento no convence, cambia una sola cosa de la instrucción cada vez; así sabes qué ha mejorado el resultado.</p>

<h2 id="errores">Los fallos típicos y cómo evitarlos</h2>

<ul>
    <li><strong>La cara cambia a mitad del clip</strong>: pide menos movimiento, acorta la duración y añade «mantén los rasgos de la cara sin cambios».</li>
    <li><strong>Efecto muñeco de cera</strong>: suele venir de una foto demasiado suavizada al restaurarla. Prueba con una versión menos retocada.</li>
    <li><strong>Objetos que aparecen o desaparecen</strong>: describe lo que debe quedarse quieto, no solo lo que se mueve.</li>
    <li><strong>Movimiento de cámara mareante</strong>: escribe «cámara fija» salvo que quieras lo contrario.</li>
    <li><strong>Marca de agua o baja resolución</strong>: es el precio de los planes gratuitos. Genera las pruebas gratis y paga solo la versión final si la necesitas limpia.</li>
</ul>

<h2 id="limites">Personas reales, permisos y etiquetas</h2>

<p>Animar el retrato de tu bisabuelo para enseñarlo en una comida familiar no plantea problemas. Animar la foto de una persona viva y compartirla es otra cosa: necesitas su permiso, y si el vídeo la hace decir o hacer algo que no hizo, entras en el terreno de los deepfakes. La guía sobre <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA y suplantación</a> explica por qué las plataformas lo persiguen.</p>

<p>Si vas a publicar el vídeo y puede pasar por real, márcalo como generado con IA. Y si es para un uso comercial, revisa los derechos de la foto original y las condiciones de la herramienta; lo resumimos en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>. Con una buena foto, un movimiento pequeño y dos o tres intentos, el resultado puede emocionar sin que nadie piense que algo raro le pasa a la cara.</p>
HTML,
];
