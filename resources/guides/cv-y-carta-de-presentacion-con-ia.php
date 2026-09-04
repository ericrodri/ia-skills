<?php

return [
    'title' => 'CV y carta de presentación con IA: adaptar sí, redactar de cero no',
    'navTitle' => 'CV y carta con IA',
    'seoTitle' => 'CV y carta de presentación con IA: método, ATS y prompts',
    'description' => 'Un CV generado de un tirón se descarta igual de rápido que el de siempre. Qué mira un ATS, qué parte conviene delegar y los prompts que hacen el trabajo.',
    'excerpt' => 'La IA no consigue entrevistas escribiendo un currículum bonito. Las consigue en el paso que casi nadie da: reescribir el mismo CV para cada oferta, en cinco minutos en lugar de en cuarenta.',
    'category' => 'Práctica',
    'published' => '2026-09-04',
    'updated' => '2026-09-04',
    'readingMinutes' => 11,
    'words' => 1850,
    'about' => 'Uso de la inteligencia artificial para preparar el currículum y la candidatura',
    'related' => ['como-escribir-prompts-efectivos', 'prompts-de-ia-por-profesion', 'se-nota-si-un-texto-lo-escribe-una-ia'],
    'toc' => [
        'ats' => 'Qué hace de verdad un ATS con tu currículum',
        'trampa' => 'El truco de las palabras clave ocultas y por qué te bloquea',
        'reparto' => 'Qué parte del CV se delega y cuál no',
        'prompts-cv' => 'Tres prompts para adaptar el CV a una oferta',
        'logros' => 'Convertir tareas en logros: el cambio con más efecto',
        'carta' => 'La carta de presentación y el párrafo que no puede escribir un modelo',
        'linkedin' => 'LinkedIn: el mismo material, otro lector',
        'entrevista' => 'Preparar la entrevista con la oferta delante',
        'linea' => 'Dónde está la línea: adaptar no es inventar',
        'datos' => 'Tus datos personales en el prompt',
    ],
    'faq' => [
        '¿Es malo usar IA para escribir el currículum?' => 'No lo es para adaptarlo, ordenarlo o reescribir descripciones flojas, que es donde ahorra tiempo de verdad. Sí sale mal cuando se le pide el currículum entero a partir de un puesto genérico, porque devuelve el mismo perfil que le devuelve a todo el mundo: mucha proactividad, mucha orientación a resultados y ni un dato comprobable. Quien selecciona lee decenas de candidaturas al día y ese patrón lo reconoce en diez segundos. La regla que funciona es aportar tú los hechos y usar el modelo para expresarlos mejor.',
        '¿Qué es un ATS y cómo funciona con mi CV?' => 'Un ATS (Applicant Tracking System) es el software con el que las empresas reciben y ordenan candidaturas. Lo primero que hace es extraer el texto de tu archivo y trocearlo en campos: experiencia, formación, empresas, fechas, habilidades. Después puntúa la coincidencia con los requisitos de la oferta. Los sistemas actuales incorporan modelos de lenguaje y ya captan sinónimos, así que la vieja obsesión por repetir la palabra exacta importa menos, pero el paso frágil sigue siendo el primero: si el archivo no se lee bien, no hay nada que puntuar.',
        '¿Qué formato de CV pasa mejor los filtros ATS?' => 'Un PDF generado desde un procesador de texto, con una sola columna, títulos de sección estándar (Experiencia, Formación, Habilidades), fechas en un formato uniforme y sin datos importantes metidos en cabeceras, pies, cuadros de texto, imágenes o iconos. Las plantillas de dos columnas con barras de progreso y gráficos circulares son las que más problemas dan al extraer el texto. Y nunca envíes un CV escaneado o exportado como imagen: para el sistema es una página en blanco.',
        '¿Cómo adapto mi CV a cada oferta sin tardar una hora?' => 'Pegando la oferta y tu CV en el mismo prompt y pidiendo tres cosas concretas: qué requisitos de la oferta ya cubres y en qué línea de tu CV se ve, cuáles no aparecen aunque los tengas, y qué reordenación de los puntos de cada puesto pondría lo relevante arriba. Es un trabajo de reescritura sobre material que ya existe, que es justo lo que un modelo hace bien. Bajar de cuarenta minutos a cinco es lo que permite personalizar de verdad todas las candidaturas en lugar de mandar la misma a todas.',
        '¿Se nota si la carta de presentación la ha escrito una IA?' => 'Se nota el contenido genérico, no la herramienta. Lo que delata una carta es que serviría igual para otra empresa: elogios intercambiables, entusiasmo sin motivo concreto y ninguna referencia a algo específico de esa compañía o de ese puesto. Una carta con un párrafo sobre por qué te interesa ese producto en particular, con un dato que solo se sabe si has mirado, no la escribe un modelo por su cuenta porque esa información no está en el prompt salvo que la pongas tú.',
        '¿Puedo pegar mi currículum en ChatGPT? ¿Y la oferta?' => 'La oferta no tiene ningún problema, es pública. Tu CV lleva datos personales: nombre, teléfono, dirección, historial laboral completo. Lo prudente es quitar los datos de contacto antes de pegarlo, que además no aportan nada a la tarea, y desactivar el uso de tus conversaciones para entrenamiento en los ajustes de la herramienta. Y si estás buscando trabajo mientras trabajas en otro sitio, no lo hagas nunca desde la cuenta corporativa de tu empresa actual.',
    ],
    'ctaTitle' => 'Prompts de candidatura por profesión',
    'ctaBody' => 'Cada sector valora cosas distintas en un CV, así que los prompts que funcionan también cambian. Hay material votado por quien lo usa en <a href="/profesiones/rrhh">RRHH</a>, <a href="/profesiones/desarrollo">Desarrollo</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>El uso más extendido de la IA para buscar trabajo es también el que peor funciona: pedirle un currículum. Devuelve uno correcto, ordenado, sin erratas y absolutamente idéntico al que le devuelve a las otras cuatrocientas personas que le han pedido lo mismo para ese puesto.</p>

<p>Donde sí cambia el resultado es en un paso distinto, el que casi nadie da porque cuesta demasiado tiempo: <strong>reescribir el mismo CV para cada oferta</strong>. Hacerlo a mano son cuarenta minutos y por eso no se hace. Con la oferta pegada al lado son cinco, y ahí está toda la diferencia.</p>

<h2 id="ats">Qué hace de verdad un ATS con tu currículum</h2>

<p>Antes de que una persona vea tu candidatura, la procesa un software de gestión de candidatos. Conviene saber en qué orden hace las cosas, porque el punto frágil no es el que suele preocupar.</p>

<ol>
    <li><strong>Extrae el texto del archivo.</strong> Aquí es donde se pierden candidaturas: si el CV es una imagen, un diseño en dos columnas o tiene los datos en cabeceras y cuadros de texto, lo que se extrae sale desordenado o directamente vacío.</li>
    <li><strong>Trocea en campos.</strong> Puesto, empresa, fechas, formación, habilidades. Los títulos de sección poco convencionales —«Mi trayectoria» en lugar de «Experiencia»— dificultan este paso.</li>
    <li><strong>Puntúa contra la oferta.</strong> Los sistemas actuales llevan modelos de lenguaje dentro y ya reconocen sinónimos y equivalencias, así que repetir la palabra exacta importa menos que hace unos años.</li>
    <li><strong>Ordena la lista para quien selecciona.</strong> Que es quien decide de verdad, leyendo por encima durante unos segundos.</li>
</ol>

<p>La conclusión práctica es poco glamurosa: <strong>el formato aburrido gana</strong>. Una columna, PDF generado desde el procesador de texto (nunca escaneado), títulos estándar, fechas uniformes, sin gráficos de nivel ni iconos con información dentro. El diseño creativo tiene su sitio en una cartera de trabajos enlazada aparte, no en el archivo que tiene que atravesar el sistema.</p>

<h2 id="trampa">El truco de las palabras clave ocultas y por qué te bloquea</h2>

<p>Circula desde hace años el consejo de pegar la oferta entera en texto blanco sobre fondo blanco, o en tamaño uno, al final del CV, para inflar la coincidencia. Hoy es una mala idea con consecuencias concretas.</p>

<p>El texto oculto se extrae exactamente igual que el visible, porque el sistema no lee colores: lee la capa de texto del PDF. Y los ATS actuales detectan ese patrón —una densidad de términos que no aparece en la parte visible del documento— y marcan la candidatura como fraudulenta. En varias plataformas eso significa quedar excluido de todos los procesos de esa empresa, a veces de forma permanente.</p>

<p>La versión legítima de la misma idea funciona mejor y no arriesga nada: usar el vocabulario de la oferta en la parte visible, cuando describe algo que de verdad has hecho. Si la oferta pide «gestión de stakeholders» y tú lo llamabas «trato con clientes internos», cambiar el término no es hacer trampa, es hablar el idioma de quien lee.</p>

<h2 id="reparto">Qué parte del CV se delega y cuál no</h2>

<figure>
<table>
    <thead>
        <tr><th>Delega sin miedo</th><th>Hazlo tú</th></tr>
    </thead>
    <tbody>
        <tr><td>Reescribir una descripción de puesto floja</td><td>Decidir qué experiencia entra y cuál sobra</td></tr>
        <tr><td>Convertir tareas en logros con verbo y resultado</td><td>Aportar las cifras y comprobarlas</td></tr>
        <tr><td>Detectar qué requisitos de la oferta no aparecen en tu CV</td><td>Explicar los huecos del historial</td></tr>
        <tr><td>Ajustar el orden de los puntos a la oferta</td><td>El párrafo de por qué esa empresa</td></tr>
        <tr><td>Unificar tiempos verbales, fechas y formato</td><td>La revisión final, entera</td></tr>
        <tr><td>Generar preguntas probables de entrevista</td><td>Las respuestas</td></tr>
    </tbody>
</table>
</figure>

<p>La columna izquierda es transformación de material que ya tienes; la derecha requiere información que solo está en tu cabeza. Es el mismo reparto que rige cualquier tarea delegada a un modelo, y saltárselo es lo que produce el CV genérico.</p>

<h2 id="prompts-cv">Tres prompts para adaptar el CV a una oferta</h2>

<pre><code>1. DIAGNÓSTICO (el que más rinde, y va primero)
Te paso una oferta de empleo y mi CV actual.
Devuélveme tres listas:
A) Requisitos de la oferta que ya cubro, indicando en qué línea
   exacta de mi CV se ve.
B) Requisitos que no aparecen en mi CV. Para cada uno, dime qué
   te haría falta saber de mí para incluirlo. No lo inventes.
C) Contenido de mi CV que no aporta nada para esta oferta.
Oferta: [pega]  CV: [pega]

2. REORDENAR SIN AÑADIR
Reescribe la sección de experiencia poniendo primero, dentro de
cada puesto, lo relevante para esta oferta. No añadas ninguna
información que no esté ya en mi CV. Máximo cuatro puntos por
puesto. Si un punto pierde sentido al recortarlo, dímelo.

3. REVISIÓN DE QUIEN SELECCIONA
Eres quien va a leer 200 candidaturas para esta oferta y dedicas
15 segundos a cada una. Lee mi CV y dime: qué has entendido que
hago, si pasaría el primer filtro y qué tres cosas te han hecho
dudar. Sé duro, no me animes.</code></pre>

<p>El tercero es el más incómodo y el más útil. El primero es el que hay que ejecutar en toda candidatura seria, porque la lista B suele revelar dos o tres cosas que sí has hecho y nunca habías puesto por escrito.</p>

<h2 id="logros">Convertir tareas en logros: el cambio con más efecto</h2>

<p>La mayoría de los currículums describen funciones —lo que ponía en el contrato— en vez de resultados. El arreglo es mecánico y un modelo lo hace muy bien, siempre que le des la materia prima.</p>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>Logro</th></tr>
    </thead>
    <tbody>
        <tr><td>Responsable de las redes sociales de la empresa</td><td>Llevé LinkedIn e Instagram de 3.000 a 11.000 seguidores en 18 meses con 4 publicaciones semanales</td></tr>
        <tr><td>Atención al cliente por teléfono y correo</td><td>Gestioné unas 60 incidencias diarias con una satisfacción media de 4,6 sobre 5</td></tr>
        <tr><td>Participé en la migración del sistema de facturación</td><td>Migré 12.000 registros de facturación a Odoo sin interrumpir el servicio</td></tr>
    </tbody>
</table>
</figure>

<p>La estructura es siempre la misma: <strong>verbo en primera persona + qué + cifra + en cuánto tiempo</strong>. Las cifras las pones tú; si no las recuerdas, una estimación honesta y redonda vale más que ninguna, pero tiene que ser tuya. Un modelo que rellena ese hueco por su cuenta se inventa el número, y ese número te lo van a preguntar en la entrevista. Es el mismo mecanismo que explica <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>: donde hay un hueco, se rellena.</p>

<h2 id="carta">La carta de presentación y el párrafo que no puede escribir un modelo</h2>

<p>Una carta de presentación tiene tres párrafos y solo uno decide algo.</p>

<ol>
    <li><strong>Por qué esta empresa.</strong> Concreto, con algo que solo se sabe habiendo mirado: su producto, un cambio reciente, un problema que se ve desde fuera. <strong>Este es el párrafo que no se delega</strong>, porque la información no está en el prompt a menos que la pongas tú.</li>
    <li><strong>Qué traes.</strong> Dos logros de tu CV escogidos por su encaje con la oferta, no los dos que más te gustan.</li>
    <li><strong>Qué propones.</strong> Una frase sobre qué harías en los primeros meses. Casi nadie la escribe y se recuerda.</li>
</ol>

<p>Lo que hunde una carta es que sirva igual para otra empresa. «Me apasiona vuestra cultura de innovación» es una frase que no ha costado nada escribir y que se lee como tal. El modelo la produce por defecto precisamente porque es lo más probable; evitarla es cuestión de darle tu material en lugar de un tema, y el porqué está en la guía sobre <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">si se nota que un texto lo ha escrito una IA</a>.</p>

<h2 id="linkedin">LinkedIn: el mismo material, otro lector</h2>

<p>El CV lo lee primero un sistema y después una persona con prisa. El perfil de LinkedIn lo lee alguien que ya te está buscando o que acaba de recibir tu candidatura y quiere comprobar si encajas. Tres ajustes que rinden:</p>

<ul>
    <li><strong>El titular no es tu cargo.</strong> «Analista de datos» describe la nómina. «Analista de datos | logística y previsión de demanda | SQL, Python» describe lo que sabes hacer, y es lo que se busca.</li>
    <li><strong>El extracto en primera persona.</strong> Es el único sitio del proceso donde se te permite sonar a persona. Pídele al modelo tres versiones a partir de tus notas y quédate con frases de las tres.</li>
    <li><strong>Las habilidades, las de la oferta.</strong> Los buscadores internos de quien recluta filtran por ese campo antes que por ningún otro.</li>
</ul>

<h2 id="entrevista">Preparar la entrevista con la oferta delante</h2>

<p>Es la parte donde la IA aporta más y donde menos se usa. Un prompt basta:</p>

<pre><code>Te paso la oferta y mi CV. Eres quien va a entrevistarme.
Dame las 10 preguntas que harías, ordenadas de más a menos
probable, y marca las 3 que buscan un punto débil de mi perfil.
No respondas por mí: quiero prepararlas yo.
Después, dime qué 5 preguntas debería hacer yo al final para
que se note que entiendo el puesto.</code></pre>

<p>La instrucción de no responder importa: leer respuestas ajenas no prepara nada. Y el bloque final resuelve el momento en el que casi todo el mundo improvisa mal.</p>

<h2 id="linea">Dónde está la línea: adaptar no es inventar</h2>

<p>La frontera es sencilla de enunciar y hay que tenerla clara antes de empezar, porque el modelo la cruza solo si se lo permites.</p>

<figure>
<table>
    <thead>
        <tr><th>Legítimo</th><th>No</th></tr>
    </thead>
    <tbody>
        <tr><td>Usar el vocabulario de la oferta para lo que sí hiciste</td><td>Añadir una herramienta que no has tocado</td></tr>
        <tr><td>Reordenar y priorizar tu experiencia</td><td>Estirar fechas para tapar un hueco</td></tr>
        <tr><td>Redondear una cifra que conoces</td><td>Dejar que el modelo invente la cifra</td></tr>
        <tr><td>Reescribir tu texto con mejor redacción</td><td>Firmar un texto sobre logros que no son tuyos</td></tr>
    </tbody>
</table>
</figure>

<p>La comprobación final es siempre la misma: <strong>lee tu CV en voz alta y pregúntate si puedes defender cada línea durante cinco minutos</strong>. Lo que no aguante esa prueba, fuera. Una exageración en el papel se convierte en una pregunta técnica en la entrevista, y ahí no hay dónde esconderse.</p>

<h2 id="datos">Tus datos personales en el prompt</h2>

<p>Un currículum es un documento con bastantes datos personales dentro: nombre completo, teléfono, dirección, historial laboral y a veces fecha de nacimiento. Tres precauciones que no cuestan nada:</p>

<ul>
    <li><strong>Quita los datos de contacto antes de pegarlo.</strong> No aportan nada a la tarea de reescritura.</li>
    <li><strong>Desactiva el uso de tus conversaciones para entrenamiento</strong> en los ajustes de la herramienta. Está en la configuración de todas las principales.</li>
    <li><strong>No busques trabajo desde la cuenta corporativa de tu empresa actual.</strong> En un plan de empresa, esas conversaciones pueden ser visibles para administración.</li>
</ul>

<p>El criterio general para decidir qué se pega y qué no está en la guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>; aquí el dato sensible es el tuyo, pero el razonamiento no cambia.</p>

<p>Con esto, el reparto queda donde tiene que estar: la herramienta se ocupa de la reescritura, del formato y de la ronda de preguntas incómodas, y tú de los hechos, de las cifras y del párrafo que explica por qué esa empresa. Es lo que convierte veinte candidaturas iguales en veinte candidaturas distintas sin dedicarle el fin de semana.</p>
HTML,
];
