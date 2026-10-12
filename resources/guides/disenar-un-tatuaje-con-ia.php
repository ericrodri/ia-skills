<?php

return [
    'title' => 'Diseñar un tatuaje con IA: ideas, prompts y cómo llevarlo al tatuador',
    'navTitle' => 'Diseñar un tatuaje con IA',
    'seoTitle' => 'Diseñar un tatuaje con IA: ideas y prompts',
    'description' => 'Cómo usar la IA para buscar ideas de tatuaje, pedir el estilo adecuado, verlo sobre tu piel y llevar al tatuador un diseño que sí se pueda tatuar.',
    'excerpt' => 'La IA es una herramienta estupenda para explorar ideas de tatuaje y ver cómo quedarían en tu brazo. Lo que no hace es saber cómo envejece la tinta en la piel: por eso el diseño final debería pasar siempre por las manos del tatuador.',
    'category' => 'Práctica',
    'published' => '2026-10-12',
    'updated' => '2026-10-12',
    'readingMinutes' => 7,
    'words' => 1085,
    'about' => 'Diseño de tatuajes con generadores de imágenes de inteligencia artificial',
    'related' => ['crear-imagenes-con-ia', 'prompts-para-diseno-grafico', 'imagenes-con-ia-derechos-y-uso-comercial', 'editar-fotos-con-ia', 'crear-un-logo-con-ia', 'herramientas-de-ia-gratis'],
    'toc' => [
        'para-que' => 'Para qué sirve la IA (y para qué no)',
        'idea' => 'De una idea vaga a un concepto',
        'prompt' => 'Cómo pedir el diseño',
        'piel' => 'Verlo sobre tu piel antes de hacerlo',
        'tatuador' => 'Llevarlo al tatuador',
        'letras' => 'Frases, nombres y otros idiomas',
        'derechos' => 'Copiar estilos y diseños ajenos',
    ],
    'faq' => [
        '¿Qué IA sirve para diseñar tatuajes gratis?' => 'Cualquier generador de imágenes general sirve: ChatGPT, Gemini o Copilot crean diseños a partir de una descripción con su plan gratuito limitado. También hay aplicaciones específicas de tatuajes con IA, pero suelen usar los mismos modelos con plantillas de estilo añadidas.',
        '¿Puedo ver cómo me queda un tatuaje con IA?' => 'Sí. Sube una foto de la zona del cuerpo junto al diseño y pide que lo coloque con el tamaño y la orientación que quieras, adaptándolo a la curva de la piel. Da una idea bastante buena del tamaño y la posición, aunque el color real de la tinta en tu piel será algo distinto.',
        '¿Los tatuadores aceptan diseños hechos con IA?' => 'Muchos los aceptan como referencia, igual que una foto de Pinterest, y lo redibujan a su estilo. Algunos prefieren no trabajar con ellos o cobran el diseño aparte. Pregunta antes y lleva la imagen como punto de partida, no como plantilla cerrada.',
        '¿Por qué la IA escribe mal las letras del tatuaje?' => 'Los generadores de imágenes han mejorado mucho con el texto, pero aún cambian letras, acentos o caracteres de otros alfabetos. Para una frase o un nombre, elige la tipografía con la IA y deja que el tatuador escriba el texto, y haz revisar cualquier palabra en otro idioma por un hablante nativo.',
        '¿Puedo pedir un tatuaje al estilo de un tatuador famoso?' => 'Puedes inspirarte en un estilo general, como el tradicional o el blackwork, pero pedir a la IA que imite a un artista concreto y tatuarlo es copiar su trabajo. Si te gusta su estilo, lo justo es pedirle el diseño a esa persona.',
    ],
    'ctaTitle' => 'Instrucciones para crear imágenes',
    'ctaBody' => 'Describir bien una imagen es una habilidad que sirve para mucho más que tatuajes. En el <a href="/skills">catálogo de skills</a> hay prompts probados de <a href="/profesiones/diseno">diseño</a> para ilustración, logotipos y estilos gráficos.',
    'body' => <<<'HTML'
<p>Buscar ideas para un tatuaje solía significar horas en Pinterest y en los perfiles de tatuadores. Con un generador de imágenes puedes describir lo que tienes en la cabeza y ver en segundos diez versiones distintas, en diferentes estilos y tamaños. Es una forma excelente de aclarar qué quieres. Esta guía explica cómo sacarle partido y qué cosas la IA todavía no sabe hacer cuando el lienzo es tu piel.</p>

<h2 id="para-que">Para qué sirve la IA (y para qué no)</h2>

<p>La IA es muy útil para:</p>

<ul>
    <li><strong>Explorar</strong>: ver la misma idea en estilo tradicional, fine line, acuarela o geométrico antes de decidir.</li>
    <li><strong>Concretar</strong>: pasar de «algo que represente a mi familia» a un motivo dibujable.</li>
    <li><strong>Probar tamaño y lugar</strong> sobre una foto de tu cuerpo.</li>
    <li><strong>Comunicarte con el tatuador</strong>: llegar con una imagen ahorra mucha explicación.</li>
</ul>

<p>Lo que no sabe es cómo se comporta la tinta. Las líneas muy finas y juntas se difuminan con los años, los detalles diminutos se convierten en una mancha y algunos degradados no se pueden reproducir en piel. Un diseño precioso en pantalla puede ser un mal tatuaje. Por eso la IA da la idea y el tatuador da la versión final.</p>

<h2 id="idea">De una idea vaga a un concepto</h2>

<p>Si aún no tienes claro el motivo, usa primero un asistente de texto como lluvia de ideas:</p>

<blockquote>«Quiero un tatuaje pequeño que recuerde a mi abuela, que era costurera y adoraba las golondrinas. Propón ocho ideas de motivo, cada una en una frase, y explica qué simboliza cada elemento.»</blockquote>

<p>Elige una o dos y pide variantes. Pregunta también por el significado de los símbolos que te atraigan: algunos tienen connotaciones que conviene conocer antes de llevarlos de por vida. Verifica esa información, porque la IA puede <a href="/guias/alucinaciones-de-la-ia">inventarse</a> significados con mucha seguridad.</p>

<h2 id="prompt">Cómo pedir el diseño</h2>

<p>Un buen prompt de tatuaje incluye cinco datos:</p>

<ol>
    <li><strong>Motivo</strong>: qué aparece, con detalle.</li>
    <li><strong>Estilo</strong>: tradicional, neotradicional, fine line, blackwork, puntillismo, realismo, acuarela, minimalista.</li>
    <li><strong>Color</strong>: solo tinta negra, negro y gris, o colores concretos.</li>
    <li><strong>Zona y tamaño</strong>: «para el antebrazo, unos 10 cm de alto».</li>
    <li><strong>Formato</strong>: «diseño de tatuaje sobre fondo blanco liso, sin piel ni sombras de fondo».</li>
</ol>

<p>Por ejemplo:</p>

<blockquote>«Diseño de tatuaje fine line de una golondrina con un hilo y una aguja, solo tinta negra, líneas limpias y no demasiado juntas, para el interior de la muñeca, unos 6 cm. Fondo blanco liso.»</blockquote>

<p>Pedir «líneas no demasiado juntas» y «pocos detalles pequeños» ya acerca el resultado a algo tatuable. Para iterar, pide cambios concretos sobre la imagen que te gusta en vez de generar desde cero; lo explicamos en <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>, y en <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a> hay vocabulario de estilos que también sirve aquí.</p>

<h2 id="piel">Verlo sobre tu piel antes de hacerlo</h2>

<p>Es probablemente el uso más útil. Haz una foto de la zona con buena luz y súbela junto al diseño:</p>

<blockquote>«Coloca este diseño en el antebrazo de la foto, a unos 10 cm de alto, siguiendo la curva del brazo. Que parezca un tatuaje curado, no recién hecho. No cambies nada más de la foto.»</blockquote>

<p>Prueba varios tamaños y posiciones. Lo que en pantalla parece grande a menudo queda pequeño en el brazo, y al revés. Si quieres más trucos para este tipo de montajes, están en <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a>.</p>

<h2 id="tatuador">Llevarlo al tatuador</h2>

<ul>
    <li><strong>Llévalo como referencia</strong>, junto a dos o tres imágenes de tatuajes reales que te gusten.</li>
    <li><strong>Pregunta qué cambiaría</strong> para que envejezca bien: grosor de líneas, tamaño mínimo, espacio entre elementos.</li>
    <li><strong>Acepta que lo redibuje</strong>. Un buen tatuador adapta el diseño a tu anatomía y a su técnica; ese trabajo tiene valor y a veces se cobra aparte.</li>
    <li><strong>Pregunta antes</strong> si trabaja con diseños de IA. Algunos estudios prefieren crear desde cero.</li>
</ul>

<h2 id="letras">Frases, nombres y otros idiomas</h2>

<p>El texto es el punto débil de los generadores de imágenes. Aunque han mejorado, todavía cambian letras, se comen acentos o deforman caracteres de otros alfabetos. Para un tatuaje con texto:</p>

<ul>
    <li>Usa la IA para elegir el estilo de letra, no para escribir la frase final.</li>
    <li>Pide al tatuador que componga el texto con la tipografía elegida.</li>
    <li>Para frases en japonés, chino, árabe, hebreo o latín, haz que una persona que domine el idioma revise la traducción y la escritura. Un traductor automático no basta; ver <a href="/guias/traducir-con-ia">traducir con IA</a>.</li>
</ul>

<h2 id="derechos">Copiar estilos y diseños ajenos</h2>

<p>Inspirarte en un estilo general es normal. Pedir a la IA «al estilo de» un tatuador concreto o reproducir el diseño de otra persona es otra cosa: es aprovechar su trabajo sin pagarlo, y en la comunidad del tatuaje está muy mal visto. Lo mismo con personajes y logotipos protegidos. En <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a> explicamos dónde están los límites legales.</p>

<p>La regla práctica: usa la IA para descubrir qué quieres y deja que un profesional lo convierta en algo que lleves con gusto dentro de veinte años.</p>
HTML,
];
