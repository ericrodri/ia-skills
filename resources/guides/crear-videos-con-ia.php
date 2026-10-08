<?php

return [
    'title' => 'Crear vídeos con IA: herramientas, pasos y qué esperar del resultado',
    'navTitle' => 'Crear vídeos con IA',
    'seoTitle' => 'Crear vídeos con IA: herramientas y pasos',
    'description' => 'Cómo crear vídeos con IA desde un texto o una foto: Veo, Sora, Kling o CapCut, cómo escribir la instrucción y qué se puede hacer gratis.',
    'excerpt' => 'Escribir una frase y recibir un vídeo de ocho segundos ya es rutina. Montar con eso algo que alguien quiera ver hasta el final no lo es. Qué herramienta conviene para cada caso, cómo pedir las tomas y cómo unirlas en un vídeo con sentido.',
    'category' => 'Práctica',
    'published' => '2026-10-05',
    'updated' => '2026-10-05',
    'readingMinutes' => 7,
    'words' => 1187,
    'about' => 'Generación y montaje de vídeos con herramientas de inteligencia artificial',
    'related' => ['convertir-texto-a-voz-con-ia', 'video-y-audio-con-ia-en-el-trabajo', 'crear-imagenes-con-ia', 'ia-para-redes-sociales', 'crear-musica-con-ia', 'pasar-audio-a-texto-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial'],
    'toc' => [
        'tipos' => 'Tres formas de hacer un vídeo con IA',
        'herramientas' => 'Qué herramienta usar',
        'instruccion' => 'Cómo escribir la instrucción de cada toma',
        'pasos' => 'De tomas sueltas a un vídeo terminado',
        'gratis' => 'Qué se puede hacer gratis',
        'limites' => 'Límites y lo que hay que etiquetar',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para crear vídeos?' => 'Depende del tipo de vídeo. Para tomas realistas a partir de un texto, Veo (dentro de Gemini) y Sora dan hoy los resultados más convincentes, con sonido incluido. Kling y Runway ofrecen más control sobre el movimiento de cámara. Para montar un vídeo para redes con subtítulos, música y cortes, CapCut es la opción más práctica.',
        '¿Se pueden crear vídeos con IA gratis?' => 'Sí, con límites. CapCut tiene funciones de IA gratuitas para montar, subtitular y quitar fondos. Varias herramientas de generación, como Kling, dan créditos diarios o de bienvenida que alcanzan para unas pocas tomas cortas. Las versiones gratuitas suelen añadir marca de agua y limitar la duración y la resolución.',
        '¿Cuánto dura un vídeo hecho con IA?' => 'Cada toma generada dura entre cinco y veinte segundos según la herramienta y el plan. Un vídeo más largo se construye uniendo varias tomas en un editor. Pedir directamente un vídeo de un minuto suele dar peor resultado que generar seis tomas de diez segundos bien descritas y montarlas.',
        '¿Puedo convertir una foto en vídeo con IA?' => 'Sí. La mayoría de generadores aceptan una imagen como punto de partida y la animan según tu instrucción: que la persona gire la cabeza, que el agua se mueva, que la cámara se acerque. Es la forma más fiable de mantener el aspecto de un producto o un personaje entre tomas.',
        '¿Puedo subir a YouTube o TikTok un vídeo hecho con IA?' => 'Sí, pero ambas plataformas piden marcar el contenido sintético realista, y en la Unión Europea el Reglamento de IA obliga desde agosto de 2026 a avisar cuando un vídeo aparenta ser real sin serlo. Revisa también si el plan de la herramienta permite uso comercial si vas a monetizar.',
    ],
    'ctaTitle' => 'El guion antes que la herramienta',
    'ctaBody' => 'Un vídeo con IA funciona o no según su guion. En el <a href="/skills">catálogo de skills</a> hay instrucciones para guiones, ganchos y piezas para redes en <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/diseno">diseño</a>.',
    'body' => <<<'HTML'
<p>Escribir «un perro corriendo por la playa al atardecer» y recibir un vídeo con olas, luz dorada y hasta el sonido del mar es algo que cualquiera puede hacer hoy desde el móvil. Lo que no ha cambiado es lo difícil: decidir qué contar y montarlo para que se vea hasta el final. Esta guía separa las formas de crear vídeos con IA, recomienda herramientas para cada una y explica el proceso que mejor funciona.</p>

<h2 id="tipos">Tres formas de hacer un vídeo con IA</h2>

<p>Bajo la misma búsqueda se esconden tres tareas muy distintas, y elegir mal la herramienta es el error más común:</p>

<ul>
    <li><strong>Generar tomas desde cero.</strong> Escribes lo que quieres ver y el modelo crea un clip corto. Sirve para escenas que no podrías grabar, ambientes o planos de recurso.</li>
    <li><strong>Animar una imagen.</strong> Partes de una foto o ilustración y la IA le da movimiento. Es la manera de mantener el mismo producto, personaje o estilo en varias tomas.</li>
    <li><strong>Montar con ayuda de la IA.</strong> Grabas tú (o reúnes clips) y la herramienta corta silencios, añade subtítulos, propone música y adapta el formato a vertical. Es lo que más tiempo ahorra a quien publica a menudo.</li>
</ul>

<p>Hay una cuarta, los avatares que leen un guion, más propia de la formación interna y la comunicación de empresa. Esos usos, y lo que conviene vigilar con ellos, están en <a href="/guias/video-y-audio-con-ia-en-el-trabajo">vídeo y audio con IA en el trabajo</a>.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<ul>
    <li><strong>Veo, dentro de Gemini:</strong> tomas realistas con sonido y diálogo sincronizado. Se usa desde la propia aplicación de Gemini con un plan de pago, y de forma limitada en algunas pruebas gratuitas.</li>
    <li><strong>Sora:</strong> el generador de OpenAI, con aplicación propia. Muy bueno en escenas con personas y en mantener la física creíble.</li>
    <li><strong>Kling, Hailuo y Runway:</strong> generadores especializados con más control sobre la cámara, la duración y el paso de imagen a vídeo. Kling suele ser el más generoso con los créditos gratuitos.</li>
    <li><strong>CapCut:</strong> editor gratuito con subtítulos automáticos, eliminación de fondos, voces y plantillas. Para redes sociales es casi imprescindible.</li>
    <li><strong>Canva:</strong> si ya haces ahí tus diseños, permite generar clips cortos y montar vídeos sencillos con tu identidad visual.</li>
</ul>

<p>Las herramientas cambian de nombre y de precio cada pocos meses; lo que se mantiene es el reparto: un generador para crear tomas y un editor para unirlas.</p>

<h2 id="instruccion">Cómo escribir la instrucción de cada toma</h2>

<p>Una buena instrucción de vídeo describe cinco cosas: quién o qué aparece, qué hace, dónde ocurre, cómo se mueve la cámara y qué estilo tiene. Por ejemplo:</p>

<blockquote>«Primer plano de una taza de café humeante sobre una mesa de madera junto a una ventana. La cámara se acerca despacio. Luz de mañana suave, estilo anuncio cálido. Se oye lluvia de fondo.»</blockquote>

<p>Tres consejos que ahorran créditos:</p>

<ul>
    <li><strong>Una acción por toma.</strong> Si pides que alguien entre, se siente, sonría y beba, algo saldrá raro. Divide en varias tomas.</li>
    <li><strong>Nombra el movimiento de cámara</strong> con palabras de cine: plano fijo, travelling lateral, acercamiento lento, vista aérea.</li>
    <li><strong>Parte de una imagen</strong> cuando necesites coherencia. Genera primero el fotograma con la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a> y luego anímalo.</li>
</ul>

<h2 id="pasos">De tomas sueltas a un vídeo terminado</h2>

<ol>
    <li><strong>Escribe el guion</strong> en cinco o seis frases, una por toma. Puedes pedir ayuda a ChatGPT o Claude, pero decide tú el mensaje.</li>
    <li><strong>Genera cada toma</strong> dos o tres veces y quédate con la mejor. Descarta sin pena las que tengan manos raras o textos deformados.</li>
    <li><strong>Monta en un editor</strong> (CapCut, Canva o el que uses): ordena, recorta y ajusta el ritmo.</li>
    <li><strong>Añade voz y música.</strong> Si narras tú, mejor que una voz sintética para contenido personal. Para la banda sonora tienes la guía de <a href="/guias/crear-musica-con-ia">crear música con IA</a>.</li>
    <li><strong>Pon subtítulos.</strong> La mayoría de la gente ve los vídeos sin sonido. Los editores los generan solos; revisa nombres propios y cifras.</li>
    <li><strong>Exporta en el formato de cada red</strong>: vertical para TikTok, Reels y Shorts; horizontal para YouTube. Cómo adaptar el mensaje a cada una está en <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a>.</li>
</ol>

<p>Si el vídeo parte de una charla, un pódcast o una entrevista grabada, el primer paso es sacar el texto: la guía de <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto con IA</a> explica cómo, y con esa transcripción es fácil elegir los fragmentos que merecen un clip.</p>

<h2 id="gratis">Qué se puede hacer gratis</h2>

<p>Con herramientas gratuitas puedes montar, subtitular y editar sin límite práctico, y generar unas pocas tomas al día. Lo que se paga es generar mucho, en alta resolución, sin marca de agua y con derecho a uso comercial. Para probar si un formato funciona en tus redes, lo gratuito basta; el resto de opciones sin coste están en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<h2 id="limites">Límites y lo que hay que etiquetar</h2>

<ul>
    <li><strong>Personas reales:</strong> no generes vídeos de alguien identificable diciendo o haciendo algo que no ocurrió. Además de poder vulnerar su derecho a la propia imagen, es exactamente el tipo de contenido con el que se cometen <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas y suplantaciones</a>.</li>
    <li><strong>Etiquetado:</strong> desde agosto de 2026 el Reglamento europeo de IA obliga a avisar cuando un vídeo realista está generado o manipulado. YouTube, TikTok e Instagram tienen además su propia casilla para marcarlo.</li>
    <li><strong>Uso comercial:</strong> los planes gratuitos suelen excluirlo. Antes de usar un clip en un anuncio o un trabajo para un cliente, lee las condiciones; la lógica de derechos es la misma que en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA</a>.</li>
</ul>
HTML,
];
