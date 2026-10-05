<?php

return [
    'title' => 'Crear un logo con IA: cómo hacerlo bien y qué hacer antes de usarlo',
    'navTitle' => 'Crear un logo con IA',
    'seoTitle' => 'Crear un logo con IA: pasos, prompts y límites',
    'description' => 'Cómo crear un logo con IA paso a paso: qué herramienta usar, instrucciones que funcionan, cómo pasarlo a vector y qué comprobar antes de registrarlo.',
    'excerpt' => 'Un generador de imágenes te da cuarenta propuestas de logo en diez minutos. Ninguna es todavía un logo: falta elegir, simplificar, pasarlo a vector y comprobar que no se parece al de otro. Así se hace el recorrido completo.',
    'category' => 'Práctica',
    'published' => '2026-10-05',
    'updated' => '2026-10-05',
    'readingMinutes' => 7,
    'words' => 1096,
    'about' => 'Diseño de logotipos e identidad de marca con herramientas de inteligencia artificial',
    'related' => ['prompts-para-diseno-grafico', 'imagenes-con-ia-derechos-y-uso-comercial', 'crear-imagenes-con-ia', 'crear-una-pagina-web-con-ia', 'ia-para-autonomos-y-pymes', 'editar-fotos-con-ia'],
    'toc' => [
        'que-da' => 'Qué te da la IA y qué no',
        'antes' => 'Antes de abrir la herramienta',
        'herramientas' => 'Qué herramienta usar',
        'instrucciones' => 'Instrucciones que funcionan',
        'terminar' => 'De la imagen al logo terminado',
        'derechos' => 'Derechos y registro de marca',
    ],
    'faq' => [
        '¿Se puede hacer un logo gratis con IA?' => 'Sí. Gemini, ChatGPT y Canva permiten generar propuestas de logo sin pagar, con límites diarios. Lo que suele costar dinero o tiempo es lo que viene después: convertir la imagen elegida en un archivo vectorial limpio y preparar las versiones para cada uso. Para un proyecto pequeño, se puede hacer todo sin coste dedicándole una tarde.',
        '¿Cuál es la mejor IA para crear logos?' => 'Para explorar ideas, ChatGPT y Gemini entienden bien las instrucciones y escriben texto legible dentro de la imagen. Ideogram destaca en logotipos con letras. Recraft genera directamente en formato vectorial, lo que ahorra un paso. Canva y Looka son cómodos si quieres además una plantilla de identidad completa.',
        '¿Puedo registrar como marca un logo hecho con IA?' => 'Puedes solicitar el registro de marca en la OEPM o la EUIPO, porque lo que se protege es el signo distintivo para unos productos o servicios. Lo que es dudoso es la protección por derechos de autor de una imagen generada sin aportación creativa humana. Antes de registrar, busca marcas parecidas en las bases de datos oficiales y, si es posible, rediseña el logo a mano.',
        '¿Cómo paso un logo de IA a vector (SVG)?' => 'Los generadores de imagen producen archivos de píxeles. Para convertirlos a vector usa una herramienta de vectorización, como el calco de imagen de Illustrator, Inkscape (gratis) o Vectorizer, y revisa después las curvas a mano. La alternativa es generar directamente en vector con una herramienta como Recraft.',
        '¿Un logo hecho con IA puede parecerse al de otra empresa?' => 'Sí, y es el riesgo principal. Los modelos tienden a repetir soluciones habituales y pueden reproducir rasgos de logos conocidos. Haz una búsqueda inversa de imágenes con Google Lens y consulta las bases de datos de marcas antes de imprimir nada o de solicitar el registro.',
    ],
    'ctaTitle' => 'Instrucciones para identidad visual',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay prompts para identidad de marca, logotipos y piezas gráficas. Mira los de <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Para un autónomo o un negocio que empieza, encargar un logo a un estudio puede costar más de lo que tiene sentido gastar el primer mes. La IA ofrece una alternativa razonable: decenas de propuestas en minutos y un resultado digno si se trabaja bien. Pero la imagen que sale del generador no es todavía un logo, y saltarse los pasos posteriores es la causa de la mayoría de logos de IA que se ven mal impresos o que acaban pareciéndose demasiado al de otro.</p>

<h2 id="que-da">Qué te da la IA y qué no</h2>

<p>La IA es muy buena explorando: estilos, tipografías, combinaciones de color y símbolos que no se te habrían ocurrido. Es mucho peor en lo que distingue a un buen logo de una ilustración bonita:</p>

<ul>
    <li><strong>Simplicidad.</strong> Un logo tiene que leerse a 16 píxeles en una pestaña del navegador y en el lateral de una furgoneta. La IA tiende a añadir detalles, degradados y sombras.</li>
    <li><strong>Formato.</strong> Genera imágenes de píxeles, no archivos vectoriales que puedan ampliarse sin perder calidad.</li>
    <li><strong>Originalidad comprobada.</strong> No sabe si lo que propone se parece a una marca registrada.</li>
</ul>

<p>Dicho de otro modo: úsala como un diseñador que te enseña bocetos, no como quien te entrega el logo final.</p>

<h2 id="antes">Antes de abrir la herramienta</h2>

<p>Diez minutos de reflexión mejoran más el resultado que cualquier truco de redacción. Apunta:</p>

<ol>
    <li><strong>Qué haces y para quién</strong>, en una frase.</li>
    <li><strong>Tres adjetivos</strong> que debería transmitir la marca: cercana, técnica, artesanal, rápida, seria…</li>
    <li><strong>Qué no quieres</strong>: colores de la competencia, símbolos tópicos de tu sector (la bombilla, el engranaje, el cohete).</li>
    <li><strong>Dónde se usará</strong> sobre todo: redes, rótulo, envases, web. Cambia lo que importa.</li>
</ol>

<h2 id="herramientas">Qué herramienta usar</h2>

<ul>
    <li><strong>ChatGPT y Gemini:</strong> los más cómodos para explorar ideas conversando y para pedir cambios sobre una propuesta concreta. Ya escriben bien el texto dentro de la imagen.</li>
    <li><strong>Ideogram:</strong> especialmente bueno en logotipos tipográficos, donde el nombre es el protagonista.</li>
    <li><strong>Recraft:</strong> genera en vector (SVG), lo que ahorra el paso más técnico.</li>
    <li><strong>Canva y Looka:</strong> pensados para quien quiere, además del logo, plantillas de tarjetas, redes y documentos con la misma identidad.</li>
</ul>

<p>Si no conoces los generadores de imagen en general, empieza por la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>.</p>

<h2 id="instrucciones">Instrucciones que funcionan</h2>

<p>Una instrucción de logo útil pide explícitamente lo que la IA tiende a olvidar:</p>

<blockquote>«Diseña un logotipo para "Horno Lucía", una panadería artesanal de barrio. Estilo: cercano y tradicional, sin resultar antiguo. Un símbolo sencillo de una espiga junto al nombre. Diseño plano, sin degradados ni sombras, máximo dos colores, fondo blanco. Debe leerse bien en tamaño pequeño. Dame cuatro variantes distintas.»</blockquote>

<p>Después, itera sobre la que más te guste: «quédate con la tercera, simplifica la espiga a tres trazos y prueba una versión en un solo color». Pide siempre una <strong>versión monocroma</strong>: si el logo no funciona en negro sobre blanco, no es un buen logo. Tienes más instrucciones de este tipo en <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a>.</p>

<h2 id="terminar">De la imagen al logo terminado</h2>

<ol>
    <li><strong>Vectoriza</strong> la propuesta elegida con Inkscape (gratis), Illustrator o un vectorizador web, y repasa las curvas.</li>
    <li><strong>Sustituye la tipografía</strong> que haya inventado la IA por una fuente real con licencia comercial, por ejemplo de Google Fonts. Así podrás usarla también en la web y los documentos.</li>
    <li><strong>Prepara las versiones</strong>: horizontal, solo símbolo, en un color, en negativo para fondos oscuros, y un icono cuadrado para redes y favicon.</li>
    <li><strong>Prueba en contexto</strong>: en una tarjeta, en la cabecera de la web, en una foto de perfil. Si vas a montar la web ahora, la guía de <a href="/guias/crear-una-pagina-web-con-ia">crear una página web con IA</a> sigue desde aquí.</li>
</ol>

<h2 id="derechos">Derechos y registro de marca</h2>

<p>Dos preguntas distintas que suelen mezclarse. La primera es si puedes usar el logo: en general sí, siempre que las condiciones de la herramienta permitan el uso comercial en tu plan. La segunda es si es tuyo en exclusiva, y ahí la respuesta es menos clara, porque una imagen generada sin aportación creativa humana relevante puede no estar protegida por derechos de autor. Lo explicamos con detalle en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>.</p>

<p>Lo que sí protege tu marca es el registro en la OEPM (España) o la EUIPO (toda la Unión Europea). Antes de solicitarlo:</p>

<ul>
    <li>Busca marcas parecidas en las bases de datos oficiales, como TMview, en tu sector.</li>
    <li>Haz una búsqueda inversa de imagen con Google Lens para detectar parecidos con logos existentes.</li>
    <li>Cuanto más hayas modificado tú la propuesta original, más sólida será tu posición si alguien la discute.</li>
</ul>

<p>Para un negocio que empieza, este proceso suele bastar. Cuando la marca crezca, un diseñador puede partir de lo que ya tienes y convertirlo en una identidad completa. Más ideas para arrancar con poco presupuesto en <a href="/guias/ia-para-autonomos-y-pymes">IA para autónomos y pymes</a>.</p>
HTML,
];
