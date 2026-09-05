<?php

return [
    'title' => 'Resumir documentos largos con IA: el problema no es el resumen, es lo que omite',
    'navTitle' => 'Resumir documentos con IA',
    'seoTitle' => 'Resumir documentos largos con IA: método y verificación',
    'description' => 'Un resumen de IA casi nunca miente: omite. Cómo pedir citas con página, dónde falla el centro de un documento largo y qué verificar antes de decidir.',
    'excerpt' => 'Pedir el resumen de un PDF de doscientas páginas funciona a la primera y ahí está la trampa: no hay forma de ver lo que se quedó fuera. El método consiste en obligar al resumen a señalar de dónde sale cada frase.',
    'category' => 'Práctica',
    'published' => '2026-09-03',
    'updated' => '2026-09-03',
    'readingMinutes' => 11,
    'words' => 1830,
    'about' => 'Resumen y análisis de documentos extensos con inteligencia artificial',
    'related' => ['investigar-con-ia-deep-research', 'errores-al-usar-ia-en-el-trabajo', 'usar-ia-sin-filtrar-datos-de-clientes'],
    'toc' => [
        'omision' => 'Un resumen no miente: omite',
        'centro' => 'Por qué el centro del documento es el punto débil',
        'antes' => 'Antes de subir el archivo: el PDF que no tiene texto',
        'citas' => 'La regla que cambia todo: exigir la cita con página',
        'prompts' => 'Tres prompts: el mapa, el resumen y la pregunta directa',
        'que-falta' => 'El prompt que nadie usa: qué has dejado fuera',
        'por-partes' => 'Cuando el documento no cabe: trocear por secciones, no por páginas',
        'contratos' => 'Contratos, pliegos y cuentas anuales: lo que se lee entero igual',
        'datos' => 'Qué documentos no deberías subir',
        'flujo' => 'El flujo completo, en seis pasos',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para resumir documentos largos?' => 'La que te devuelve el resumen con la referencia de dónde sale cada afirmación, porque es la única característica que te permite verificar sin releer el documento entero. Hoy eso lo hacen bien NotebookLM (cita el fragmento exacto de cada fuente), Claude (cita con número de página en PDFs) y Perplexity con un archivo subido. La capacidad de contexto importa menos de lo que parece: casi todos los modelos actuales se tragan un PDF de doscientas páginas, y ninguno te avisa de lo que decidió no contarte.',
        '¿Puedo fiarme del resumen de un contrato hecho con IA?' => 'Para preparar la lectura, sí. Para decidir, no. Un resumen falla por omisión, y una omisión no se detecta leyendo el resumen: la cláusula de penalización o la excepción del anexo desaparecen sin dejar hueco. Lo razonable es usar la IA para localizar dónde están las cláusulas que te importan —duración, prórroga, penalizaciones, limitación de responsabilidad, jurisdicción, protección de datos— y leer esas páginas tú. El resumen te ahorra la búsqueda, no la lectura de lo que firmas.',
        '¿Por qué la IA se salta información que está en el documento?' => 'Por dos motivos distintos que conviene no confundir. El primero es de posición: la precisión al recuperar un dato cae cuando ese dato está en el centro del texto en vez de al principio o al final, un efecto descrito como «lost in the middle» con caídas superiores al 30 % en los trabajos originales. Los modelos de 2026 han mejorado mucho en esa prueba, pero el patrón sigue ahí. El segundo es de instrucción: cuando pides «un resumen», el modelo optimiza brevedad y coherencia, así que descarta lo que no encaja en el hilo principal. La excepción rara es exactamente lo que a ti te interesaba.',
        '¿Cómo resumo un PDF escaneado?' => 'Comprueba antes si el PDF tiene texto: intenta seleccionar un párrafo con el ratón. Si no puedes, es una imagen y necesita OCR previo —Acrobat lo trae, y Tesseract es gratuito—. Muchos modelos actuales leen imágenes y devolverán algo aunque no haya texto, y ahí está el peligro: el reconocimiento visual confunde cifras, columnas y tablas sin avisar, y un 3 que era un 8 llega al resumen con el mismo aplomo que el resto. Con documentos escaneados, verifica siempre las cifras contra la página original.',
        '¿Cuántas páginas puede resumir una IA de una vez?' => 'La pregunta útil no es cuántas caben, sino a partir de cuántas empieza a degradarse la respuesta. Un documento de 20 a 40 páginas se resume con fiabilidad alta. Entre 40 y 150, sigue funcionando pero conviene pedir citas y comprobar dos o tres. Por encima de eso, trocea por secciones lógicas: resume capítulo a capítulo y monta después el resumen de resúmenes. Es más lento y es la diferencia entre un resumen que puedes defender y uno que solo suena bien.',
        '¿Qué documentos no debería subir a una IA?' => 'Los que llevan datos personales de terceros que no puedes tratar en esa herramienta, y los que están bajo obligación de confidencialidad ajena: expedientes de personal, historiales, propuestas no firmadas de otra empresa, documentación de un cliente que no autorizó ese tratamiento. La pregunta práctica no es si el documento es sensible, sino si la herramienta que vas a usar está aprobada para esa categoría de dato. Está desarrollado en la guía sobre usar IA sin filtrar datos de clientes.',
    ],
    'ctaTitle' => 'Prompts de lectura y análisis que ya usa gente',
    'ctaBody' => 'Leer documentos ajenos con criterio es la tarea repetida de media empresa, y por tanto candidata a tener un prompt fijo. Hay material votado por quien lo usa en <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/finanzas">Finanzas</a> y <a href="/profesiones/product-management">Product Management</a>.',
    'body' => <<<'HTML'
<p>Subes un PDF de doscientas páginas, pides un resumen y en veinte segundos tienes página y media que se lee bien, ordena el documento y no contiene ni una frase falsa. Es la demostración que convence a cualquiera, y también el sitio exacto donde empieza el problema.</p>

<p>Porque la pregunta que importa no es si el resumen es correcto. Es <strong>qué se quedó fuera</strong>, y eso el resumen no lo dice.</p>

<h2 id="omision">Un resumen no miente: omite</h2>

<p>Conviene separar los dos modos de fallo, porque se arreglan de forma distinta.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Inventar</th><th>Omitir</th></tr>
    </thead>
    <tbody>
        <tr><td>Qué pasa</td><td>Aparece un dato que no está en el documento</td><td>No aparece un dato que sí está</td></tr>
        <tr><td>Frecuencia al resumir</td><td>Baja: con el documento delante, hay poco que inventar</td><td><strong>Alta, y es inevitable:</strong> resumir es descartar</td></tr>
        <tr><td>Cómo se detecta</td><td>Buscando la frase en el original</td><td><strong>No se detecta leyendo el resumen</strong></td></tr>
        <tr><td>Consecuencia típica</td><td>Un dato raro que chirría</td><td>Una decisión tomada sin la cláusula que la cambiaba</td></tr>
    </tbody>
</table>
</figure>

<p>Ahí está toda la asimetría. Cuando un modelo inventa, el error deja un rastro visible; cuando omite, el hueco no se ve, y la persona que lee el resumen se queda con la impresión de haber leído el documento. Un resumen bien escrito es <em>más</em> peligroso que uno mediocre, porque no invita a comprobar nada. El otro lado de la moneda —lo que el modelo añade cuando no tiene de dónde leer— está en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<p>Y hay un agravante de diseño: cuando pides «un resumen», estás pidiendo brevedad y coherencia. El modelo entrega justo eso, y para lograrlo descarta lo que no encaja en el hilo principal. La excepción, el caso raro, la nota a pie con la penalización: precisamente lo que hace que ese documento se distinga de los otros cuarenta parecidos.</p>

<h2 id="centro">Por qué el centro del documento es el punto débil</h2>

<p>Existe un efecto medido con nombre propio en la literatura técnica: <em>lost in the middle</em>. Al pedir a un modelo que recupere un dato concreto de un texto largo, la precisión es alta si el dato está al principio o al final, y cae cuando está en el centro. Los trabajos que lo describieron midieron degradaciones superiores al 30 % solo por mover el dato de sitio, con una curva en U parecida a la del recuerdo humano de una lista: se recuerda el principio y el final.</p>

<p>La investigación de 2026 matiza el panorama —algunos modelos recientes recuperan un dato aislado con buena precisión sea cual sea su posición— pero la consecuencia práctica aguanta, y por un motivo que las pruebas de laboratorio no capturan: encontrar <em>un</em> dato cuando te lo piden no es lo mismo que decidir <em>qué</em> datos merecen estar en un resumen. Lo primero ha mejorado mucho; lo segundo sigue siendo un juicio editorial que el modelo hace solo, sin decirte con qué criterio.</p>

<p>Regla operativa: <strong>si lo que buscas está en el medio de un documento largo, no confíes en que el resumen general lo traiga. Pregunta por ello.</strong></p>

<h2 id="antes">Antes de subir el archivo: el PDF que no tiene texto</h2>

<p>Un paso de diez segundos que ahorra errores caros. Abre el PDF e intenta seleccionar un párrafo con el ratón:</p>

<ul>
    <li><strong>Se selecciona el texto:</strong> el PDF tiene capa de texto. Adelante.</li>
    <li><strong>No se selecciona nada:</strong> es una imagen escaneada. Necesita OCR antes —Acrobat lo incluye, Tesseract es gratuito—.</li>
</ul>

<p>Lo peligroso es que los modelos actuales leen imágenes y te devolverán un resumen igualmente, sin avisar de que están interpretando píxeles. El reconocimiento visual falla justo donde más duele: cifras con decimales, tablas a varias columnas, números de cláusula, importes. Un 3 que era un 8 aparece en el resumen con el mismo aplomo que el resto del texto. Con documentos escaneados, toda cifra que vayas a usar se verifica contra la página original, sin excepción.</p>

<p>Segunda comprobación, para documentos con formato complejo: pide al modelo que te transcriba literalmente una tabla concreta y compárala con el original. Si esa tabla sale bien, el resto de la lectura es fiable; si sale desordenada, el documento necesita otro tratamiento.</p>

<h2 id="citas">La regla que cambia todo: exigir la cita con página</h2>

<p>Es el único cambio de esta guía que, por sí solo, arregla la mitad del problema: <strong>no pidas un resumen, pide un resumen citado</strong>. Cada afirmación con la página o el apartado de donde sale.</p>

<p>Sirve para tres cosas a la vez:</p>

<ol>
    <li><strong>Verificar sin releer.</strong> Compruebas tres citas al azar en dos minutos. Si las tres cuadran, el resto es razonablemente fiable.</li>
    <li><strong>Convertir el resumen en un índice.</strong> Sabes a qué página ir cuando alguien pregunte por un punto concreto.</li>
    <li><strong>Sacar a la superficie lo que no tiene respaldo.</strong> Cuando el modelo no encuentra de dónde sale una frase, o la reformula con menos seguridad o la deja sin cita. Ambas cosas son información.</li>
</ol>

<p>Las herramientas que hoy lo hacen bien son las pensadas para documentos: NotebookLM devuelve el fragmento exacto de cada fuente, Claude cita con número de página en PDFs, y Perplexity con un archivo subido enlaza a la sección. Esa capacidad pesa más en la elección que el tamaño de contexto que anuncie cada una.</p>

<h2 id="prompts">Tres prompts: el mapa, el resumen y la pregunta directa</h2>

<p>El orden importa. El error habitual es empezar por el resumen; el mapa primero da mucho mejor resultado, porque te dice qué preguntar.</p>

<pre><code>1. MAPA (siempre el primero)
Antes de resumir nada, dame el índice real de este documento:
apartados, qué páginas ocupa cada uno y en una línea de qué trata.
No interpretes ni valores todavía.

2. RESUMEN CITADO
Resume el documento en 15 puntos como máximo. Cada punto acaba
con la página o el apartado de donde sale, entre corchetes.
Si un punto no puedes localizarlo, márcalo como [sin localizar].
No incluyas nada que no esté en el texto.

3. PREGUNTA DIRECTA (una por asunto)
En este documento, ¿qué dice exactamente sobre [asunto]?
Cita el párrafo literal y su página. Si no dice nada, responde
"no aparece" y no completes con lo habitual en documentos
de este tipo.</code></pre>

<p>La última línea del tercer prompt es la que evita el fallo más traicionero: sin ella, cuando el documento no dice nada sobre el asunto, el modelo tiende a rellenar con lo que suele decir un documento de ese tipo. Es una respuesta plausible, útil y falsa.</p>

<h2 id="que-falta">El prompt que nadie usa: qué has dejado fuera</h2>

<p>Una vez tienes el resumen, la pregunta más rentable de todo el proceso:</p>

<pre><code>Del documento completo, ¿qué has dejado fuera del resumen
que alguien podría considerar relevante? Lista los apartados
que has resumido en una línea o menos y di qué contienen.</code></pre>

<p>No es infalible —el modelo no tiene un registro fiel de sus propios descartes— pero funciona sorprendentemente bien para lo que importa: <strong>señalar las zonas del documento que el resumen tocó por encima</strong>. Ahí es donde suele estar la excepción que te interesaba. Es el mismo movimiento que en la <a href="/guias/ia-para-reuniones-y-actas">guía de actas de reunión</a> resulta más útil de todo el acta: preguntar por lo que quedó sin cerrar en vez de por lo que se dijo.</p>

<h2 id="por-partes">Cuando el documento no cabe: trocear por secciones, no por páginas</h2>

<p>Con documentos muy largos —cientos de páginas, o varios archivos a la vez— la fiabilidad se recupera troceando. Con una condición: <strong>los cortes van por límites lógicos, no cada X páginas</strong>. Un capítulo partido en dos produce dos resúmenes que se pierden el argumento.</p>

<figure>
<table>
    <thead>
        <tr><th>Extensión</th><th>Cómo tratarlo</th><th>Verificación</th></tr>
    </thead>
    <tbody>
        <tr><td>Hasta 40 páginas</td><td>De una vez</td><td>Dos citas al azar</td></tr>
        <tr><td>40 a 150 páginas</td><td>De una vez, con resumen citado</td><td>Tres citas, una del centro</td></tr>
        <tr><td>Más de 150 páginas</td><td>Por secciones, y luego resumen de resúmenes</td><td>Una cita por sección</td></tr>
        <tr><td>Varios documentos</td><td>Uno a uno, y comparación al final</td><td>Cada dato en su documento de origen</td></tr>
    </tbody>
</table>
</figure>

<p>Y una precaución del último caso: cuando comparas varios documentos en la misma conversación, es fácil que un dato del contrato B aparezca atribuido al contrato A. Al comparar, exige siempre el nombre del archivo junto a cada dato.</p>

<h2 id="contratos">Contratos, pliegos y cuentas anuales: lo que se lee entero igual</h2>

<p>Hay una categoría en la que el resumen sirve para preparar la lectura y nunca para sustituirla. La regla es sencilla: <strong>lo que firmas, lo lees</strong>. La IA te dice dónde mirar.</p>

<p>En un contrato o un pliego, las páginas que se leen enteras aunque el resumen las mencione:</p>

<ul>
    <li>Duración, prórroga automática y forma de terminación.</li>
    <li>Penalizaciones, intereses de demora y garantías.</li>
    <li>Limitación de responsabilidad y sus excepciones.</li>
    <li>Cesión, subcontratación y cambio de control.</li>
    <li>Jurisdicción y ley aplicable.</li>
    <li>Tratamiento de datos personales y subencargados.</li>
    <li><strong>Los anexos.</strong> Es donde vive lo que contradice al cuerpo del contrato, y donde los resúmenes se detienen menos.</li>
</ul>

<p>El prompt que mejor rinde aquí no pide un resumen, pide localización: «dime en qué página está cada uno de estos siete puntos y cita la primera línea de cada uno». Diez minutos de lectura dirigida en lugar de dos horas de lectura completa, sin renunciar a haber leído lo que decide.</p>

<h2 id="datos">Qué documentos no deberías subir</h2>

<p>La pregunta no es si el documento es sensible, sino si la herramienta está aprobada para esa categoría de dato. Los tres casos que se cuelan con más frecuencia:</p>

<ul>
    <li><strong>Documentación de un cliente</strong> que no autorizó ese tratamiento. El deber de confidencialidad no distingue entre leerlo tú y subirlo a un tercero.</li>
    <li><strong>Expedientes de personal</strong>, evaluaciones e informes médicos. Datos personales, y a veces de categoría especial.</li>
    <li><strong>Propuestas y presupuestos ajenos</strong> recibidos bajo acuerdo de confidencialidad.</li>
</ul>

<p>El criterio completo, con las orientaciones de la AEPD sobre agentes, está en la guía sobre <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="flujo">El flujo completo, en seis pasos</h2>

<ol>
    <li><strong>Comprueba que el PDF tiene texto.</strong> Selecciona un párrafo. Si no puedes, OCR primero.</li>
    <li><strong>Pide el mapa</strong> antes del resumen: apartados y páginas.</li>
    <li><strong>Pide el resumen citado</strong>, con página en cada punto y marca de lo no localizado.</li>
    <li><strong>Pregunta qué quedó fuera.</strong> Es el paso que casi nadie da y el que más aporta.</li>
    <li><strong>Verifica tres citas</strong>, una de ellas del centro del documento.</li>
    <li><strong>Lee entero lo que decide.</strong> Cláusulas críticas, cifras que van a un informe, anexos.</li>
</ol>

<p>Los seis pasos suman diez minutos sobre los veinte segundos del resumen directo. La diferencia es que al final puedes decir qué has leído y qué no, que es exactamente lo que te van a preguntar si algo sale mal. El resto de fallos que se repiten al trabajar con IA están en la guía de <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores al usar IA en el trabajo</a>.</p>
HTML,
];
