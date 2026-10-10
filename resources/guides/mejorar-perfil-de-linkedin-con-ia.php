<?php

return [
    'title' => 'Cómo mejorar tu perfil de LinkedIn con IA: titular, extracto y experiencia, con ejemplos',
    'navTitle' => 'Perfil de LinkedIn con IA',
    'seoTitle' => 'Mejorar tu perfil de LinkedIn con IA (con ejemplos)',
    'description' => 'Mejora tu perfil de LinkedIn con IA: prompts para el titular, el extracto y la experiencia, ejemplos de antes y después y cómo evitar el perfil genérico.',
    'excerpt' => 'La IA escribe en segundos un perfil de LinkedIn impecable e idéntico a otros diez mil. Lo que sirve es usarla para sacar a la luz tus resultados, ordenarlos y encontrar las palabras que busca quien selecciona. Los datos los pones tú.',
    'category' => 'Práctica',
    'published' => '2026-10-10',
    'updated' => '2026-10-10',
    'readingMinutes' => 10,
    'words' => 1583,
    'about' => 'Redacción y optimización de perfiles profesionales de LinkedIn con asistentes de inteligencia artificial',
    'related' => ['cv-y-carta-de-presentacion-con-ia', 'foto-de-perfil-profesional-con-ia', 'entrevista-de-trabajo-con-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'ia-para-redes-sociales', 'prompts-de-ia-por-profesion'],
    'toc' => [
        'el-problema' => 'El perfil que suena a todos',
        'limites' => 'Qué cabe en cada sección',
        'materia-prima' => 'Reúne la materia prima',
        'titular' => 'El titular, con ejemplos',
        'extracto' => 'El extracto (Acerca de), con un ejemplo',
        'experiencia' => 'Experiencia y aptitudes',
        'palabras-clave' => 'Las palabras que busca quien selecciona',
        'revision' => 'Revisión final',
    ],
    'faq' => [
        '¿Qué IA es mejor para mejorar el perfil de LinkedIn?' => 'Cualquier asistente general sirve: ChatGPT, Gemini, Claude o Copilot redactan bien en su versión gratuita. LinkedIn también incluye ayuda de redacción con IA en algunos planes de pago. La diferencia la marcan los datos que le das sobre tu trabajo, no la herramienta.',
        '¿Se nota si un perfil de LinkedIn está escrito con IA?' => 'Se nota cuando es genérico: «apasionado», «orientado a resultados», «sinergias», frases largas sin una sola cifra. Si el texto tiene logros concretos, nombres de proyectos y tu forma de hablar, nadie sabrá qué herramienta usaste, ni le importará.',
        '¿Cuántos caracteres tiene el titular de LinkedIn?' => 'El titular admite hasta 220 caracteres y el extracto (Acerca de) hasta 2.600. Pero en los resultados de búsqueda y en los comentarios solo se ve el principio del titular, así que lo importante tiene que ir en los primeros 60 o 70 caracteres.',
        '¿Qué pongo en el titular de LinkedIn si no tengo trabajo?' => 'Lo mismo que pondrías con trabajo: qué sabes hacer y para quién. «Técnica de selección · Reclutamiento IT y perfiles técnicos» funciona mejor que «Buscando nuevas oportunidades», que no contiene ninguna palabra que un reclutador vaya a buscar. Que estás disponible ya lo indica la opción «Open to work».',
        '¿Debo pegar mi perfil completo en ChatGPT?' => 'Puedes pegar tu experiencia, pero quita antes datos que no hacen falta: teléfono, dirección, nombres de clientes bajo confidencialidad o cifras internas de tu empresa que no sean públicas. Para mejorar el texto basta con describir el logro sin datos sensibles.',
        '¿Sirve la IA para escribir publicaciones en LinkedIn?' => 'Sirve para ordenar una idea y pulir el borrador, no para inventarla. Las publicaciones que funcionan cuentan algo que te ha pasado o que has aprendido en tu trabajo. Escribe tú la idea en dos frases y pide a la IA que la estructure, sin añadir moralejas ni emojis.',
    ],
    'ctaTitle' => 'Instrucciones de redacción profesional',
    'ctaBody' => 'Si escribes a menudo sobre tu trabajo, unas instrucciones fijas te ahorran repetir contexto. En el <a href="/skills">catálogo de skills</a> hay plantillas para <a href="/profesiones/rrhh">recursos humanos</a>, <a href="/profesiones/ventas">ventas</a>, <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/freelancers">freelancers</a>.',
    'body' => <<<'HTML'
<p>Pide a cualquier asistente «mejora mi perfil de LinkedIn» y obtendrás un texto impecable: «Profesional apasionado por la innovación, orientado a resultados y con una sólida trayectoria». Es exactamente lo que dicen otros diez mil perfiles, y por eso nadie lo lee. La IA es útil en LinkedIn para otra cosa: hacerte preguntas hasta sacar tus resultados reales, ordenarlos y encontrar las palabras con las que te buscan los reclutadores.</p>

<p>El método, en corto: deja que la IA te entreviste para sacar tus logros, pídele el titular y el extracto a partir de esos datos, cruza tu perfil con ofertas reales para encontrar las palabras clave y comprueba cada cifra antes de publicar. Abajo tienes los prompts de cada paso y ejemplos de antes y después.</p>

<h2 id="el-problema">El perfil que suena a todos</h2>

<p>Un modelo de lenguaje sin datos tuyos devuelve el perfil medio de tu profesión. Correcto, y sin nada que te distinga. Añadir «hazlo más original» no lo arregla; lo arregla darle material que solo tienes tú: qué hiciste, para quién y qué cambió gracias a ello. Las muletillas que delatan un texto automático las repasamos en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">se nota si un texto lo escribe una IA</a>.</p>

<h2 id="limites">Qué cabe en cada sección</h2>

<p>Conviene decirle a la IA cuánto espacio tiene, o te devolverá textos que LinkedIn corta. Estos son los límites de cada campo y la parte que se lee sin pulsar nada:</p>

<table>
    <thead>
        <tr><th>Sección</th><th>Límite</th><th>Lo que se ve de un vistazo</th></tr>
    </thead>
    <tbody>
        <tr><td>Titular</td><td>220 caracteres</td><td>Los primeros 60-70 en búsquedas y comentarios</td></tr>
        <tr><td>Acerca de (extracto)</td><td>2.600 caracteres</td><td>Dos o tres líneas antes de «ver más»</td></tr>
        <tr><td>Cargo de cada puesto</td><td>100 caracteres</td><td>Completo</td></tr>
        <tr><td>Descripción de cada puesto</td><td>2.000 caracteres</td><td>Dos o tres líneas</td></tr>
        <tr><td>Aptitudes</td><td>Hasta 100</td><td>Las que destaques arriba</td></tr>
    </tbody>
</table>

<h2 id="materia-prima">Reúne la materia prima</h2>

<p>Si no sabes por dónde empezar, deja que la IA te entreviste. Un ejemplo de petición:</p>

<blockquote>«Quiero reescribir mi perfil de LinkedIn. Trabajo como [puesto] en [sector]. Hazme preguntas de una en una, como un buen seleccionador, para sacar mis logros concretos de los últimos cinco años: proyectos, cifras, problemas que resolví y qué cambió después. No escribas nada todavía.»</blockquote>

<p>Responde con datos aunque sean aproximados: «reduje el tiempo de cierre mensual de diez a seis días», «llevé la cuenta de tres clientes que suponían el 40 % de la facturación del equipo». Al terminar, pide un resumen con tus cinco logros más fuertes. Esa lista es la base de todo lo demás, y te servirá también para el <a href="/guias/cv-y-carta-de-presentacion-con-ia">CV y la carta de presentación</a>.</p>

<p>Antes de pegar nada, quita lo que no hace falta: teléfono, nombres de clientes bajo confidencialidad y cifras internas que no sean públicas.</p>

<h2 id="titular">El titular, con ejemplos</h2>

<p>Es lo que más se ve: aparece en los resultados de búsqueda, en los comentarios y en cada invitación. Una fórmula que funciona: <strong>qué haces + para quién + un resultado o especialidad</strong>.</p>

<blockquote>«Con estos logros, propón diez titulares para LinkedIn de menos de 120 caracteres. Que empiecen por lo que hago, no por adjetivos. Prohibido: apasionado, experto, visionario, gurú, emojis.»</blockquote>

<p>Elige uno y retócalo. Así cambia el titular en distintas profesiones cuando la IA trabaja con datos en lugar de con adjetivos:</p>

<table>
    <thead>
        <tr><th>Profesión</th><th>Antes</th><th>Después</th></tr>
    </thead>
    <tbody>
        <tr><td>Finanzas</td><td>Profesional de las finanzas con vocación de servicio</td><td>Contable para pymes de hostelería · Cierres mensuales en la mitad de tiempo</td></tr>
        <tr><td>Ventas</td><td>Comercial apasionado por los retos</td><td>Ventas B2B de software logístico · De primera reunión a contrato en 45 días</td></tr>
        <tr><td>Marketing</td><td>Especialista en marketing digital</td><td>Marketing de contenidos para SaaS · SEO y newsletter que generan demos</td></tr>
        <tr><td>Recursos humanos</td><td>HR Business Partner orientada a personas</td><td>Selección de perfiles técnicos · Procesos cerrados en 3 semanas, no en 3 meses</td></tr>
        <tr><td>Diseño</td><td>Diseñador creativo e innovador</td><td>Diseño de producto para apps de salud · Flujos que la gente termina</td></tr>
        <tr><td>Freelance</td><td>Freelance · Abierto a proyectos</td><td>Traductora inglés-español para farmacéuticas · Ensayos clínicos y prospectos</td></tr>
    </tbody>
</table>

<p>Ninguno de los «después» usa una palabra que no pueda explicarse en una entrevista, y todos empiezan por el término que alguien escribiría en el buscador.</p>

<h2 id="extracto">El extracto (Acerca de), con un ejemplo</h2>

<p>Antes de pulsar «ver más» solo se leen dos o tres líneas del extracto. Esas líneas deciden si alguien sigue. Pide a la IA esta estructura:</p>

<ol>
    <li><strong>Primera frase</strong>: qué problema resuelves y a quién, en lenguaje llano.</li>
    <li><strong>Dos o tres logros</strong> con cifra o ejemplo concreto.</li>
    <li><strong>Cómo trabajas</strong>: una o dos frases sobre tu forma de hacer las cosas.</li>
    <li><strong>Qué buscas</strong>: nuevos clientes, un cambio de puesto, colaboraciones. Si no buscas nada, dilo de otra forma: en qué temas te gusta que te escriban.</li>
</ol>

<p>Un ejemplo con esa estructura, para la contable del titular anterior:</p>

<blockquote>«Ayudo a restaurantes y hoteles pequeños a saber cada mes cuánto ganan de verdad, sin esperar al cierre del trimestre. En los últimos tres años he llevado la contabilidad de 14 negocios de hostelería. Bajé el cierre mensual de diez a seis días automatizando la conciliación bancaria, y detecté en dos clientes márgenes negativos en el menú del día que nadie había calculado. Trabajo con informes de una página: si un dato no sirve para decidir algo, no va. Si tienes un negocio de hostelería y los números te llegan tarde, escríbeme.»</blockquote>

<p>Son unos 550 caracteres: cabe de sobra y se lee en medio minuto. Escríbelo en primera persona y pide frases cortas. Después léelo en voz alta: si hay una frase que no dirías en una conversación, cámbiala.</p>

<h2 id="experiencia">Experiencia y aptitudes</h2>

<p>En cada puesto, el error típico es copiar la descripción del cargo: «responsable de la gestión de cuentas». La IA es muy buena convirtiendo funciones en logros si le das los datos:</p>

<blockquote>«Convierte estas funciones en tres o cuatro viñetas de logros. Cada viñeta empieza por un verbo de acción y, si hay cifra, la incluye. No inventes cifras: si falta un dato, pregúntamelo.»</blockquote>

<p>La última frase importa. Sin ella, el modelo rellena huecos con números verosímiles que no son tuyos, y cualquier entrevistador puede preguntarte por ellos. Por qué ocurre lo explica la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. El cambio que buscas es este:</p>

<ul>
    <li><strong>Antes</strong>: «Responsable de la gestión de cuentas clave y de la relación con clientes».</li>
    <li><strong>Después</strong>: «Llevé tres cuentas que suponían el 40 % de la facturación del equipo y renové las tres en 2025, una de ellas con un 15 % más de volumen».</li>
</ul>

<p>Para las aptitudes, pide que compare tu experiencia con tres o cuatro ofertas del puesto al que aspiras y que te diga qué aptitudes de esas ofertas puedes demostrar. Añade solo esas.</p>

<h2 id="palabras-clave">Las palabras que busca quien selecciona</h2>

<p>Los reclutadores buscan en LinkedIn como en Google: escriben el nombre del puesto, una herramienta o una especialidad. Si tu perfil usa otras palabras, no apareces. Pega dos o tres ofertas reales y pide:</p>

<blockquote>«Extrae los términos que se repiten en estas ofertas: nombres del puesto, herramientas, certificaciones y especialidades. Marca cuáles ya aparecen en mi perfil y cuáles faltan.»</blockquote>

<p>Incorpora los que te describan de verdad en el titular, el extracto y la experiencia, con naturalidad. Repetir una palabra diez veces no ayuda y se nota.</p>

<h2 id="revision">Revisión final</h2>

<ul>
    <li><strong>Busca las muletillas</strong>: pide a la IA que te señale cada adjetivo vacío y cada frase que podría estar en el perfil de otra persona.</li>
    <li><strong>Comprueba cada cifra</strong>: todo lo que pongas tiene que poder contarse en una entrevista. Para prepararla, sigue con <a href="/guias/entrevista-de-trabajo-con-ia">la entrevista de trabajo con IA</a>.</li>
    <li><strong>Cuida la foto</strong>: es lo primero que se ve; cómo hacerla con IA sin que parezca otra persona está en <a href="/guias/foto-de-perfil-profesional-con-ia">foto de perfil profesional con IA</a>.</li>
    <li><strong>Pide una opinión humana</strong>: un compañero que te conozca detectará en un minuto si el perfil suena a ti.</li>
</ul>

<p>Un buen perfil no es el más pulido, sino el que deja claro en diez segundos qué haces y por qué alguien debería escribirte.</p>
HTML,
];
