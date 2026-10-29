<?php

return [
    'title' => 'Comentario de texto con IA: cómo usarla para aprender a hacerlo, no para copiarlo',
    'navTitle' => 'Comentario de texto con IA',
    'seoTitle' => 'Comentario de texto con IA: pasos y prompts',
    'description' => 'Cómo hacer un comentario de texto con ayuda de ChatGPT, Gemini o Claude: tema, estructura, recursos y opinión, con prompts para practicar antes del examen.',
    'excerpt' => 'El comentario de texto se aprende haciendo comentarios, y en el examen no vas a tener la IA al lado. Bien usada, es un profesor paciente que te corrige cada intento. Mal usada, es la forma más rápida de llegar a la selectividad sin saber hacer uno.',
    'category' => 'Práctica',
    'published' => '2026-10-27',
    'updated' => '2026-10-27',
    'readingMinutes' => 7,
    'words' => 1167,
    'about' => 'Uso de asistentes de inteligencia artificial para aprender y practicar el comentario de texto en secundaria, bachillerato y la prueba de acceso a la universidad',
    'related' => ['hacer-una-redaccion-con-ia', 'estudiar-con-ia', 'resumir-un-libro-con-ia', 'corregir-ortografia-con-ia', 'parafrasear-textos-con-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'ia-para-profesores'],
    'toc' => [
        'por-que-no-copiar' => 'Por qué no sirve pedirle el comentario hecho',
        'pasos' => 'Los pasos del comentario',
        'leer' => 'Entender el texto con la IA',
        'escribir' => 'Escribir tú, corregir con la IA',
        'practicar' => 'Practicar para el examen',
        'fallos' => 'Dónde se equivoca la IA',
    ],
    'faq' => [
        '¿Qué partes tiene un comentario de texto?' => 'Depende de la asignatura y del profesor, pero lo habitual es: localización del texto, tema, resumen, estructura, análisis de la forma o de los argumentos y una valoración personal. Pide siempre a tu profesor el modelo que va a usar para corregir.',
        '¿Se nota si un comentario de texto lo ha hecho ChatGPT?' => 'A menudo sí: un profesor que conoce cómo escribes nota el cambio de estilo, las frases genéricas y los recursos que no están en el texto. Y en el examen se nota siempre, porque ahí no hay IA.',
        '¿Puede la IA corregir mi comentario de texto?' => 'Sí, y es uno de sus mejores usos. Pásale el texto original, tu comentario y los criterios de corrección, y pídele que señale fallos y te pregunte en lugar de reescribirlo. Su nota es orientativa: la que cuenta es la de tu profesor.',
        '¿Sirve para comentarios de texto de Historia o Filosofía?' => 'Sí. Cambia el contenido del análisis (contexto histórico, tesis y argumentos), pero el método es el mismo: entender el texto con su ayuda, escribir tú y usarla para corregir. En Historia, comprueba fechas y datos, que es donde más inventa.',
        '¿Es trampa usar IA para hacer comentarios de texto?' => 'Entregar como tuyo un comentario escrito por la IA lo es, y muchos centros lo sancionan. Usarla para entender un texto, practicar o revisar lo que has escrito es estudiar. Si dudas, pregunta a tu profesor qué uso acepta.',
    ],
    'ctaTitle' => 'Skills para estudiar y escribir',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para aprender, resumir y revisar textos con IA, muchas pensadas para <a href="/profesiones/rrhh">formación</a> y <a href="/profesiones/freelancers">freelancers</a>.',
    'body' => <<<'HTML'
<p>El comentario de texto es uno de los ejercicios más temidos de la ESO y el bachillerato, y uno de los que más pesan en la prueba de acceso a la universidad, en Lengua, en Historia y en Filosofía. También es de los que más se intentan resolver con ChatGPT: se pega el texto, se pide el comentario y se entrega. El problema es que el día del examen no hay chat. Esta guía explica cómo usar la IA para aprender a comentar textos, que es lo que de verdad se evalúa.</p>

<h2 id="por-que-no-copiar">Por qué no sirve pedirle el comentario hecho</h2>

<p>Un comentario generado por la IA suele ser correcto en apariencia y flojo en lo que importa: frases que valen para cualquier texto, recursos literarios que no aparecen en el fragmento y una opinión personal que no es de nadie. Un profesor lo detecta enseguida, y la guía sobre <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">si se nota que un texto lo escribe una IA</a> explica las señales que delatan estos textos.</p>

<p>Pero el motivo principal es otro: el comentario es una destreza, como montar en bici. Leer veinte comentarios hechos por otro no te enseña a hacer uno. Lo que funciona es hacerlos tú y recibir correcciones rápidas, y ahí la IA es muy buena. Es la misma idea que desarrollamos en <a href="/guias/estudiar-con-ia">cómo estudiar con IA</a>.</p>

<h2 id="pasos">Los pasos del comentario</h2>

<p>Cada profesor y cada comunidad autónoma tienen su modelo, así que lo primero es tener claro el tuyo. El más común en Lengua incluye:</p>

<ol>
    <li><strong>Localización</strong>: autor, obra, época, género.</li>
    <li><strong>Tema</strong>: la idea central en una frase.</li>
    <li><strong>Resumen</strong>: el contenido con tus palabras, sin opinar.</li>
    <li><strong>Estructura</strong>: las partes del texto y cómo se relacionan.</li>
    <li><strong>Análisis</strong>: la forma (recursos, registro, tipo de texto) o los argumentos, según la asignatura.</li>
    <li><strong>Valoración personal</strong>: tu opinión razonada sobre el texto.</li>
</ol>

<p>Si tu profesor os ha dado un modelo o unos criterios de corrección, guárdalos: se los vas a pasar a la IA en cada práctica para que corrija con las mismas reglas.</p>

<h2 id="leer">Entender el texto con la IA</h2>

<p>Antes de escribir, tienes que entender el texto. Aquí la IA puede explicarte vocabulario, contexto o referencias que no conoces, sin darte el análisis hecho:</p>

<blockquote>«Te pego un texto de [AUTOR] para un comentario de texto de 2.º de bachillerato. No me hagas el comentario. Explícame solo las palabras y las referencias que un estudiante de mi edad puede no entender, y el contexto histórico mínimo para situarlo.»</blockquote>

<p>Después, que te guíe con preguntas en lugar de respuestas:</p>

<blockquote>«Hazme, de una en una, las preguntas que debería hacerme para encontrar el tema y la estructura de este texto. Espera a que conteste cada una y dime si voy bien, sin darme la solución.»</blockquote>

<p>Si el texto forma parte de una lectura obligatoria completa, puede ayudarte repasar la obra antes; en <a href="/guias/resumir-un-libro-con-ia">resumir un libro con IA</a> explicamos cómo hacerlo sin quedarte solo con el resumen.</p>

<h2 id="escribir">Escribir tú, corregir con la IA</h2>

<p>Escribe el comentario entero tú, con el tiempo del examen si puedes. Luego pásaselo a la IA con el texto original y los criterios:</p>

<blockquote>«Este es el texto, mi comentario y los criterios de corrección de mi profesor. Corrígelo como lo haría un profesor de bachillerato exigente: dime qué apartado está flojo y por qué, qué recursos o argumentos importantes se me han escapado y qué frases son demasiado vagas. No reescribas el comentario. Ponle una nota orientativa sobre 10.»</blockquote>

<p>Con las correcciones, reescribe tú los apartados débiles y vuelve a pedir revisión. Dos o tres vueltas sobre el mismo comentario enseñan más que cinco comentarios nuevos sin corregir. Para la ortografía y la puntuación, que también cuentan en la nota, puedes <a href="/guias/corregir-ortografia-con-ia">corregir la ortografía con IA</a> pidiéndole que te explique cada error en lugar de arreglarlo sin más.</p>

<p>Un uso muy útil para el resumen: escribe el tuyo y pídele que te diga si has copiado expresiones del texto original o si has metido opiniones. Son los dos fallos más típicos de ese apartado. Si te cuesta decir lo mismo con otras palabras, la guía de <a href="/guias/parafrasear-textos-con-ia">parafrasear textos con IA</a> tiene ejercicios para practicarlo.</p>

<h2 id="practicar">Practicar para el examen</h2>

<p>La IA puede ser un banco de ejercicios infinito. Algunas formas de entrenar:</p>

<ul>
    <li><strong>Textos de exámenes reales</strong>: las universidades publican los exámenes de la prueba de acceso de años anteriores. Usa esos textos, que son los que se parecen a lo que vas a encontrar.</li>
    <li><strong>Ejercicios parciales</strong>: «dame cinco fragmentos breves y yo te digo el tema de cada uno en una frase; corrígeme».</li>
    <li><strong>Recursos literarios</strong>: pídele fragmentos con recursos marcados en tu temario para que los identifiques, y que te corrija.</li>
    <li><strong>Valoración personal</strong>: escribe la tuya y pídele que te haga de abogado del diablo con argumentos en contra. Mejora mucho la opinión razonada.</li>
</ul>

<h2 id="fallos">Dónde se equivoca la IA</h2>

<p>Corrige bien, pero no es infalible. Los fallos más comunes en comentarios de texto son tres: atribuir un texto o una fecha equivocados, ver recursos literarios donde no los hay (o etiquetar mal uno que sí está) y, en Historia, mezclar datos de épocas cercanas. Cuando algo de su corrección te sorprenda, compruébalo en el libro o pregunta a tu profesor; en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a> explicamos por qué inventa con tanta seguridad.</p>

<p>Si eres docente y quieres preparar textos y rúbricas para tus alumnos, la guía de <a href="/guias/ia-para-profesores">IA para profesores</a> recoge cómo hacerlo. Y si eres estudiante, la regla de oro es sencilla: que todo lo que entregues lo hayas escrito tú, y que la IA solo haya hecho de profesor. El mismo método sirve para los textos de opinión y los ensayos: lo explicamos en <a href="/guias/hacer-una-redaccion-con-ia">hacer una redacción con IA</a>.</p>
HTML,
];
