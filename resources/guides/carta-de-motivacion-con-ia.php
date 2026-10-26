<?php

return [
    'title' => 'Carta de motivación con IA: para una beca, un máster o un Erasmus sin sonar a plantilla',
    'navTitle' => 'Carta de motivación con IA',
    'seoTitle' => 'Carta de motivación con IA: beca, máster o Erasmus',
    'description' => 'Cómo escribir con ChatGPT o Claude una carta de motivación para una beca, un máster o un Erasmus: estructura, prompts y cómo evitar que suene a IA.',
    'excerpt' => 'Un comité de becas lee cientos de cartas que empiezan igual. La IA puede ayudarte a escribir la tuya más rápido, pero si le dejas el contenido acabará siendo la carta número cien. Cómo usarla para ordenar tu historia, no para inventarla.',
    'category' => 'Práctica',
    'published' => '2026-10-26',
    'updated' => '2026-10-26',
    'readingMinutes' => 7,
    'words' => 1156,
    'about' => 'Redacción de cartas de motivación para becas, másteres y programas académicos con ayuda de asistentes de inteligencia artificial',
    'related' => ['cv-y-carta-de-presentacion-con-ia', 'carta-de-recomendacion-con-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'tfg-con-ia', 'traducir-con-ia', 'corregir-ortografia-con-ia'],
    'toc' => [
        'que-es' => 'Qué es (y qué no es) una carta de motivación',
        'material' => 'Reunir el material antes de abrir la IA',
        'estructura' => 'La estructura que funciona',
        'redactar' => 'Redactar con la IA párrafo a párrafo',
        'revisar' => 'Que no suene a plantilla',
        'idioma' => 'Si la carta va en inglés',
    ],
    'faq' => [
        '¿Cuánto debe ocupar una carta de motivación?' => 'Lo que diga la convocatoria, que manda siempre. Si no fija un límite, una página, entre 400 y 600 palabras, es lo habitual. Más larga no es mejor: el comité lee muchas y agradece las que van al grano.',
        '¿Se nota si una carta de motivación está escrita con ChatGPT?' => 'Muchas veces sí, y no por un detector, sino porque suena genérica: frases sobre la pasión y los retos que podría firmar cualquiera. Si la carta está llena de hechos que solo te han pasado a ti, deja de notarse.',
        '¿Está permitido usar IA para escribir la carta de motivación?' => 'Depende de la institución. Algunas universidades y becas lo prohíben o piden declararlo, y otras lo aceptan como ayuda para redactar. Lee las bases de la convocatoria; si no dicen nada, usa la IA para ordenar y corregir, no para inventar contenido.',
        '¿En qué se diferencia de una carta de presentación?' => 'La carta de presentación acompaña un currículum para un empleo y se centra en lo que aportas a la empresa. La de motivación se pide para estudios, becas o voluntariados y se centra en por qué quieres ese programa y qué harás con él.',
        '¿Puedo usar la misma carta para varias becas?' => 'Puedes reutilizar la base, pero el párrafo sobre el programa tiene que ser distinto en cada una. Es lo primero que delata una carta enviada en serie, y la IA te ayuda a adaptarlo si le pasas la convocatoria concreta.',
    ],
    'ctaTitle' => 'Skills para escribir mejor',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para redactar, revisar y adaptar textos formales, muchas pensadas para <a href="/profesiones/rrhh">recursos humanos</a> y <a href="/profesiones/freelancers">freelancers</a>.',
    'body' => <<<'HTML'
<p>La carta de motivación es el documento que más se repite en las solicitudes de becas, másteres, programas Erasmus, doctorados y voluntariados, y también el que más se escribe a última hora. Un asistente como ChatGPT, Gemini o Claude puede quitarle mucho miedo a la página en blanco. El riesgo es que, si le dejas decidir qué contar, tu carta se parezca a todas las demás que el comité también ha recibido escritas con IA. Esta guía explica cómo usarla para lo que hace bien: ordenar, estructurar y pulir tu propia historia.</p>

<h2 id="que-es">Qué es (y qué no es) una carta de motivación</h2>

<p>Responde a dos preguntas: por qué quieres este programa y por qué eres una buena candidatura. No es un currículum en prosa, ni una lista de virtudes, ni una declaración de amor a la universidad. El comité ya tiene tu expediente; lo que busca en la carta es una razón coherente que una tu pasado, el programa y lo que quieres hacer después.</p>

<p>Si lo que necesitas es una carta para acompañar un currículum en una oferta de empleo, eso es una carta de presentación, y la explicamos en <a href="/guias/cv-y-carta-de-presentacion-con-ia">CV y carta de presentación con IA</a>.</p>

<h2 id="material">Reunir el material antes de abrir la IA</h2>

<p>La calidad de la carta depende de lo que le des al asistente. Antes de escribir nada, ten a mano:</p>

<ul>
    <li><strong>La convocatoria completa</strong>: requisitos, criterios de evaluación, límite de palabras y, si existen, las preguntas concretas que debe responder la carta.</li>
    <li><strong>Lo que sabes del programa</strong>: asignaturas, profesorado, laboratorios o proyectos que te interesan de verdad, y por qué.</li>
    <li><strong>Tres o cuatro experiencias tuyas</strong>: un trabajo, un proyecto, un voluntariado o un problema que resolviste, con detalles concretos.</li>
    <li><strong>Tu objetivo después</strong>: qué quieres hacer cuando termines, aunque no esté cerrado.</li>
</ul>

<p>Con ese material, el primer prompt no debería pedir la carta, sino preguntas:</p>

<blockquote>«Voy a solicitar [PROGRAMA] en [UNIVERSIDAD O ENTIDAD]. Te pego la convocatoria y mis notas. Antes de escribir nada, hazme las preguntas que necesites para entender por qué encajo en este programa y qué me diferencia. No inventes experiencias ni datos.»</blockquote>

<p>Responder a esas preguntas por escrito es, en sí, la mitad del trabajo: ahí aparecen los detalles que harán la carta tuya.</p>

<h2 id="estructura">La estructura que funciona</h2>

<p>Para una carta de una página, cuatro bloques bastan:</p>

<ol>
    <li><strong>Apertura</strong>: un momento o una pregunta concreta que explique de dónde viene tu interés. Evita empezar con «Desde pequeño siempre me ha apasionado».</li>
    <li><strong>Trayectoria</strong>: dos o tres experiencias que demuestran que estás preparado, contadas con hechos y resultados.</li>
    <li><strong>Por qué este programa</strong>: qué tiene este en concreto que no tienen otros. Es el párrafo que más pesa y el que más se descuida.</li>
    <li><strong>Después</strong>: qué harás con lo aprendido y cómo encaja con los objetivos de la beca o la entidad.</li>
</ol>

<p>Pide a la IA un esquema con esos bloques y las ideas de tus respuestas, y revísalo antes de pasar a redactar. Cambiar un esquema es mucho más fácil que reescribir una carta entera.</p>

<h2 id="redactar">Redactar con la IA párrafo a párrafo</h2>

<p>Pedir la carta completa de una vez da un texto correcto y sin vida. Funciona mejor ir bloque a bloque:</p>

<blockquote>«Escribe solo el párrafo de trayectoria, unas 120 palabras, usando estas dos experiencias. Tono sobrio y en primera persona. Nada de adjetivos como "apasionado" o "proactivo": que los hechos hablen por sí solos.»</blockquote>

<p>Para el párrafo del programa, pásale la información real de la convocatoria y de la web del programa y pide que la relacione con tus intereses. Si el asistente menciona asignaturas, profesores o proyectos, comprueba que existen: es justo el tipo de detalle que tiende a inventar.</p>

<p>Si la convocatoria plantea preguntas concretas («describe un reto que hayas superado», «¿cómo contribuirás a la comunidad?»), responde cada una en su propio bloque, con el mismo método.</p>

<h2 id="revisar">Que no suene a plantilla</h2>

<p>Una vez tengas el borrador completo, haz dos revisiones. La primera, con la propia IA en modo crítico:</p>

<blockquote>«Lee esta carta como un miembro exigente del comité de selección que ya ha leído cien cartas hoy. Señala las frases que podría haber escrito cualquier candidato, las afirmaciones sin pruebas y lo que sobra para quedar en 500 palabras.»</blockquote>

<p>La segunda, tuya y en voz alta. Cambia todo lo que no dirías nunca: las frases demasiado redondas, los «además» y «asimismo» encadenados, los cierres grandilocuentes. La guía sobre <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">si se nota que un texto lo escribe una IA</a> recoge las señales más típicas. Para la ortografía y la puntuación finales, puedes <a href="/guias/corregir-ortografia-con-ia">corregir la ortografía con IA</a>.</p>

<p>Si además necesitas cartas de apoyo de un profesor o un responsable, la guía de la <a href="/guias/carta-de-recomendacion-con-ia">carta de recomendación con IA</a> te ayuda a prepararles un borrador que les facilite el trabajo.</p>

<h2 id="idioma">Si la carta va en inglés</h2>

<p>Muchos másteres y programas internacionales piden la carta en inglés, a veces con otro nombre: <em>motivation letter</em>, <em>statement of purpose</em> o <em>personal statement</em>. No son exactamente lo mismo; los dos últimos suelen pedir más detalle académico o personal, así que lee bien qué espera cada programa.</p>

<p>Lo más fiable es escribir primero las ideas en español y pedir después una versión en inglés natural, no una traducción palabra por palabra. Explicamos cómo hacerlo en <a href="/guias/traducir-con-ia">traducir con IA</a>. Revisa el resultado con alguien que domine el idioma si puedes. Y, en cualquier idioma, la regla es la misma: la IA da forma, pero las experiencias, las razones y los planes tienen que ser tuyos.</p>
HTML,
];
