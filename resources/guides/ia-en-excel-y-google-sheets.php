<?php

return [
    'title' => 'Cómo usar la IA en Excel y Google Sheets sin romper la hoja',
    'navTitle' => 'IA en Excel y Sheets',
    'seoTitle' => 'Cómo usar la IA en Excel: fórmulas, limpieza y análisis',
    'description' => 'La IA escribe fórmulas mejor de lo que calcula. Cómo aprovecharlo en Excel y Google Sheets, con o sin Copilot, y qué comprobar antes de fiarte.',
    'excerpt' => 'Un modelo de lenguaje es buenísimo escribiendo la fórmula y bastante malo aplicándola. Toda la técnica consiste en repartir el trabajo así: la IA redacta, la hoja calcula. Con los prompts y las comprobaciones.',
    'category' => 'Práctica',
    'published' => '2026-09-02',
    'updated' => '2026-09-02',
    'readingMinutes' => 11,
    'words' => 1840,
    'about' => 'Uso de inteligencia artificial en hojas de cálculo',
    'related' => ['presentaciones-con-ia', 'como-escribir-prompts-efectivos', 'usar-ia-sin-filtrar-datos-de-clientes'],
    'toc' => [
        'regla' => 'La regla que evita el 90 % de los errores',
        'tres-caminos' => 'Los tres caminos y cuál te toca',
        'formulas' => 'Fórmulas: el caso donde la IA gana claramente',
        'contexto' => 'El paso que casi nadie da: describir la hoja',
        'limpieza' => 'Datos sucios: separar, normalizar, categorizar',
        'analisis' => 'Análisis: donde hay que desconfiar de verdad',
        'no-pegues' => 'Lo que no debes pegar en un chat',
        'verificar' => 'Verificar sin rehacer el trabajo a mano',
        'prompts' => 'Cuatro prompts que puedes copiar',
    ],
    'faq' => [
        '¿Se puede usar IA en Excel sin pagar Copilot?' => 'Sí, y para la mayoría de las tareas funciona igual de bien. Copilot vive dentro de Excel y ve tus datos, lo que ahorra copiar y pegar; pero el trabajo donde la IA aporta más —escribir la fórmula, montar la expresión regular, explicar un error, generar una macro— se puede hacer en cualquier chat gratuito describiendo la estructura de la hoja sin enseñar los datos. De hecho es el método más seguro: si describes las columnas en lugar de pegar las filas, no sacas información de la empresa a ningún sitio.',
        '¿Por qué la IA se equivoca al sumar mis datos?' => 'Porque un modelo de lenguaje predice texto, no ejecuta operaciones. Cuando le pegas doscientas filas y le pides el total, no está sumando: está produciendo el número que le parece plausible, y suele acertar en el orden de magnitud y fallar en los decimales. Es exactamente el error más peligroso, porque el resultado parece correcto. La solución no es insistir con un prompt mejor: es pedirle la fórmula y dejar que la hoja haga la aritmética.',
        '¿Qué necesita Copilot en Excel para funcionar?' => 'Una licencia de Microsoft 365 con el complemento de Copilot asignado —tener E3 o E5 no lo incluye, se compra aparte y usuario por usuario—, el archivo en formato .xlsx, .xlsb o .xlsm, guardado en OneDrive o SharePoint y con Autoguardado activado. Y una condición que no aparece en los requisitos oficiales pero determina el resultado: que el rango esté convertido en tabla con Ctrl+T. Sobre un rango suelto con celdas combinadas y filas de título, Copilot acierta mucho menos.',
        '¿Existe una función de IA dentro de Google Sheets?' => 'Sí. Google Sheets tiene la función =AI(), equivalente a =GEMINI(), que acepta un prompt y referencias a celdas: por ejemplo =AI("Clasifica este comentario como queja, duda o elogio: " & B2). Sirve para clasificar, traducir, extraer campos de un texto y resumir, y está disponible en varios planes de Workspace Business y Enterprise y en las suscripciones Gemini Pro y Ultra. Tiene un tope de 350 celdas generadas por selección, así que para columnas largas conviene ir por tramos.',
        '¿Puedo pegar datos de clientes en ChatGPT para analizarlos?' => 'No sin quitar antes lo que identifica a las personas. Nombres, correos, teléfonos, NIF o números de pedido que permitan llegar a un cliente son datos personales, y pegarlos en una herramienta que no esté contratada por la empresa para ese uso es una cesión de datos a un tercero. La forma práctica de trabajar es sustituir la columna identificadora por un código en la propia hoja, o directamente describir la estructura sin enseñar filas reales. Está desarrollado en la guía sobre usar IA sin filtrar datos de clientes.',
        '¿Merece la pena pedirle a la IA que genere macros o Apps Script?' => 'Merece la pena y es donde el ahorro es más grande, con una precaución: pruébalo siempre sobre una copia. Una fórmula equivocada da un resultado raro que ves; una macro equivocada reescribe cien celdas sin preguntar y el deshacer no siempre alcanza. Pide el código, léelo por encima buscando cualquier instrucción que borre o sobrescriba, ejecútalo en un duplicado del archivo y compara.',
    ],
    'ctaTitle' => 'Prompts de hoja de cálculo ya escritos',
    'ctaBody' => 'En el catálogo hay prompts probados para conciliaciones, informes y limpieza de datos en <a href="/profesiones/finanzas">Finanzas</a>, <a href="/profesiones/marketing">Marketing</a> y <a href="/profesiones/product-management">Product Management</a>, ordenados por los votos de quien los usa cada semana.',
    'body' => <<<'HTML'
<p>Hay una forma de usar la IA en una hoja de cálculo que funciona muy bien y otra que produce números falsos con una convicción alarmante. La diferencia no está en la herramienta ni en el prompt: está en quién hace la aritmética.</p>

<p>Esta guía va de eso, y de las cosas concretas que sí conviene delegar: fórmulas, expresiones regulares, limpieza de datos y macros. Vale para Excel con Copilot, para Excel sin Copilot y para Google Sheets.</p>

<h2 id="regla">La regla que evita el 90 % de los errores</h2>

<p>Un modelo de lenguaje no calcula. Predice el siguiente trozo de texto, y un número es texto. Cuando le pegas trescientas filas de facturación y le pides el total del trimestre, no está sumando nada: está generando la cifra que resulta más plausible dado el aspecto de tus datos. Acierta el orden de magnitud casi siempre, y falla los decimales casi siempre. Es el peor tipo de error posible, porque el resultado <em>parece</em> bien.</p>

<p>De ahí la regla, y todo lo demás en esta guía es una aplicación suya:</p>

<figure>
<table>
    <thead>
        <tr><th>Pídele a la IA</th><th>Deja que lo haga la hoja</th></tr>
    </thead>
    <tbody>
        <tr><td>Escribir la fórmula</td><td>Evaluarla</td></tr>
        <tr><td>Diseñar la expresión regular</td><td>Aplicarla a 40.000 filas</td></tr>
        <tr><td>Explicar por qué sale #¡VALOR!</td><td>Recalcular</td></tr>
        <tr><td>Decidir la lógica de la categorización</td><td>Ejecutarla en cada celda</td></tr>
        <tr><td>Redactar la macro</td><td>Correrla</td></tr>
    </tbody>
</table>
</figure>

<p>La columna izquierda es razonamiento sobre estructura, que es lo que un modelo hace bien. La derecha es cálculo determinista, que es lo que Excel hace bien y un modelo no hace en absoluto.</p>

<h2 id="tres-caminos">Los tres caminos y cuál te toca</h2>

<figure>
<table>
    <thead>
        <tr><th>Camino</th><th>Qué necesitas</th><th>Para qué es mejor</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Copilot dentro de Excel</strong></td><td>Licencia M365 con el complemento de Copilot, archivo .xlsx en OneDrive o SharePoint y Autoguardado activado</td><td>Explorar una hoja que ya tienes: resúmenes, columnas calculadas, tablas dinámicas</td></tr>
        <tr><td><strong>Gemini en Google Sheets y la función =AI()</strong></td><td>Plan de Workspace Business o Enterprise, o suscripción Gemini Pro o Ultra</td><td>Clasificar y extraer campos celda a celda, dentro de la propia hoja</td></tr>
        <tr><td><strong>Un chat cualquiera al lado</strong></td><td>Nada. Cualquier asistente, incluido el plan gratuito</td><td>Fórmulas, regex, depurar errores, macros. Es el más seguro y el más barato</td></tr>
    </tbody>
</table>
</figure>

<p>El tercero es el que casi nadie considera y el que resuelve más problemas por euro gastado. Copilot ahorra el copia-pega y ve tus datos; para escribir una fórmula, ver los datos es innecesario: basta saber qué hay en cada columna. Si estás dudando si pagar Copilot, prueba dos semanas por el camino tres y decide después.</p>

<p>Un detalle sobre Copilot que no sale en los requisitos y determina el resultado más que la licencia: <strong>convierte el rango en tabla con Ctrl+T</strong>. Sobre un rango suelto, con celdas combinadas y dos filas de título decorativas, Copilot falla mucho. Sobre una tabla con encabezados de una sola fila, acierta.</p>

<h2 id="formulas">Fórmulas: el caso donde la IA gana claramente</h2>

<p>Escribir fórmulas es traducir una intención a una sintaxis rígida y muy documentada. Es justo el trabajo que un modelo hace bien, y para la mayoría de la gente sustituye a quince minutos de buscar en foros.</p>

<p>Los tres usos por orden de rentabilidad:</p>

<ol>
    <li><strong>Del enunciado a la fórmula.</strong> «Necesito la suma de la columna Importe cuando Estado sea "pagado" y la Fecha esté en el trimestre actual.» Sale un <code>SUMAR.SI.CONJUNTO</code> correcto a la primera casi siempre.</li>
    <li><strong>Descifrar la fórmula que heredaste.</strong> Pega ese anidamiento de seis niveles que dejó alguien que ya no trabaja aquí y pide que lo explique paso a paso y que señale qué pasa si una celda está vacía. Aquí el ahorro es enorme y el riesgo, nulo.</li>
    <li><strong>Depurar el error.</strong> Pega la fórmula, el error exacto (<code>#¡N/D!</code>, <code>#¡VALOR!</code>, <code>#¡REF!</code>) y una descripción de los tipos de dato de las columnas implicadas. El diagnóstico suele ser el de siempre —un número guardado como texto, un espacio invisible al final, una coincidencia exacta que no existe— y llega en un párrafo.</li>
</ol>

<p>Dos avisos concretos. El primero: <strong>di siempre en qué idioma está tu Excel</strong>. Un Excel en español espera <code>SUMAR.SI.CONJUNTO</code> y punto y coma como separador de argumentos; si no lo dices, es probable que te llegue <code>SUMIFS</code> con comas y no funcione. El segundo: si trabajas en Excel de escritorio con una versión de hace años, dilo también, porque te propondrán <code>BUSCARX</code> y <code>DESREF</code> dinámicas que quizá no tengas.</p>

<h2 id="contexto">El paso que casi nadie da: describir la hoja</h2>

<p>La diferencia entre una respuesta útil y una inservible casi siempre es contexto sobre la estructura. No hace falta enseñar datos: hace falta enseñar el esqueleto.</p>

<pre><code>Excel en español, Microsoft 365.
Tabla "Ventas" en la hoja Datos, encabezados en la fila 1, 12.000 filas.
Columnas:
A Fecha (fecha)
B Cliente (texto)
C Comercial (texto)
D Producto (texto)
E Importe (número, 2 decimales)
F Estado (texto: pagado | pendiente | anulado)
Quiero en otra hoja: importe pagado por comercial y mes,
con los meses en columnas.</code></pre>

<p>Diez líneas que no contienen ni un dato real y que evitan las tres preguntas de vuelta y los dos intentos fallidos. Es el mismo principio que en cualquier otra tarea —está desarrollado en la <a href="/guias/como-escribir-prompts-efectivos">guía de prompts efectivos</a>—, solo que aquí la estructura <em>es</em> el contexto.</p>

<h2 id="limpieza">Datos sucios: separar, normalizar, categorizar</h2>

<p>Aquí está el ahorro grande, porque limpiar datos es tedioso y no requiere criterio de negocio. Tres patrones que se repiten en todas las empresas:</p>

<ul>
    <li><strong>Un campo que son tres.</strong> Direcciones, nombres completos, referencias con formato irregular. Pide la fórmula de extracción o la expresión regular, y sobre todo <strong>pide que enumere los casos raros que su propuesta no cubre</strong>: los segundos apellidos, las partículas «de la», los códigos con guion opcional. Esa lista vale más que la fórmula.</li>
    <li><strong>El mismo valor escrito de nueve maneras.</strong> «Madrid», «madrid», «MADRID», «Madrid ». Aquí la IA no debe tocar tus datos: pídele la tabla de equivalencias y aplícala con un <code>BUSCARV</code>. Así queda un registro visible de qué se convirtió en qué, y puedes deshacerlo.</li>
    <li><strong>Categorizar texto libre.</strong> Clasificar 2.000 comentarios de clientes en cuatro categorías. Esto es lo que la función <code>=AI()</code> de Google Sheets hace de forma nativa, con la sintaxis <code>=AI("Clasifica como queja, duda o elogio: " &amp; B2)</code> y un límite de 350 celdas generadas por selección. Sin esa función, el método es pedirle que categorice un lote de cincuenta pegados en el chat y revisar los cincuenta antes de seguir.</li>
</ul>

<p>La regla en los tres casos: la IA propone la <em>lógica</em> de transformación y tú la aplicas con una fórmula auditable. Nunca le pidas la hoja limpia de vuelta, porque no podrás saber qué cambió.</p>

<h2 id="analisis">Análisis: donde hay que desconfiar de verdad</h2>

<p>«Analiza estos datos y dime qué ves» es la petición más tentadora y la que más disgustos da. Un asistente que ve tus datos —Copilot, o un chat con el fichero subido y ejecución de código— hará algo razonable. Un chat al que le pegas las filas, no: te dará conclusiones con cifras inventadas, y en un informe eso es exactamente el tipo de dato que nadie vuelve a comprobar.</p>

<p>La versión que sí funciona invierte el orden: en vez de pedir conclusiones, pide <strong>qué comprobaciones harías tú</strong>.</p>

<pre><code>Con la estructura de tabla que te he descrito, dime las cinco
comprobaciones que harías para detectar problemas de calidad de
datos, y la fórmula de cada una. No calcules nada: dame las fórmulas.</code></pre>

<p>Salen duplicados por cliente y fecha, importes negativos, fechas fuera de rango, estados no contemplados, huecos en la serie mensual. Cada una con su fórmula, evaluada por Excel, con el resultado que hay en tu hoja y no en la imaginación de un modelo.</p>

<h2 id="no-pegues">Lo que no debes pegar en un chat</h2>

<p>Una hoja de cálculo de empresa es, casi por definición, el sitio donde están los datos que no deben salir. Lo que no se pega en una herramienta que la empresa no ha contratado para eso:</p>

<ul>
    <li>Columnas que identifican a personas: nombre, correo, teléfono, NIF, número de cliente o de pedido.</li>
    <li>Nóminas, retribuciones y evaluaciones de desempeño, aunque quites los nombres: en una plantilla pequeña el importe identifica solo.</li>
    <li>Precios de coste, márgenes por cliente y cualquier cosa cubierta por un acuerdo de confidencialidad.</li>
</ul>

<p>La alternativa práctica no es renunciar a la IA: es trabajar con el esqueleto en vez de con la carne. Describe las columnas, sustituye la identificadora por un código en la propia hoja, o construye tres filas de ejemplo inventadas que tengan la misma forma que las reales. Para escribir una fórmula, tres filas falsas valen exactamente igual que doce mil verdaderas. El detalle está en la <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">guía sobre usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="verificar">Verificar sin rehacer el trabajo a mano</h2>

<p>Cuatro comprobaciones que cuestan un minuto y cogen casi todo:</p>

<ol>
    <li><strong>Una fila conocida.</strong> Aplica la fórmula nueva a un caso cuyo resultado sepas de memoria. Si ahí cuadra, el resto es fontanería.</li>
    <li><strong>Los extremos.</strong> Una celda vacía, un cero, un texto donde se espera número, la primera y la última fila del rango. Es donde vive la mitad de los fallos.</li>
    <li><strong>El total contra otro camino.</strong> Si la fórmula nueva suma por comercial, comprueba que la suma de todos los comerciales es igual al total general calculado aparte. Un descuadre pequeño delata un criterio de filtro mal puesto.</li>
    <li><strong>Cuenta las filas que entran.</strong> Añade un <code>CONTAR.SI.CONJUNTO</code> con los mismos criterios que el <code>SUMAR.SI.CONJUNTO</code>. Si suma 40.000 € sobre tres filas cuando esperabas trescientas, lo ves al instante.</li>
</ol>

<p>Y para macros o Apps Script, una regla aparte que no admite excepción: <strong>ejecútalo sobre un duplicado del archivo</strong>. Una fórmula mala da un número raro que ves; una macro mala sobrescribe doscientas celdas sin avisar y el deshacer no siempre llega. Antes de ejecutar, lee el código buscando cualquier instrucción que borre, limpie o escriba sobre un rango.</p>

<h2 id="prompts">Cuatro prompts que puedes copiar</h2>

<p>Sustituye lo que va entre corchetes. Los cuatro asumen que antes has pegado la descripción de la estructura de la hoja.</p>

<pre><code>1. FÓRMULA
Excel en español, Microsoft 365. Necesito una fórmula que [objetivo].
Devuélveme la fórmula, una explicación de dos líneas y los casos
en los que fallaría.

2. DESCIFRAR
Explica qué hace esta fórmula paso a paso y qué devuelve si
[columna] está vacía: [pega la fórmula]

3. LIMPIEZA
Tengo la columna [X] con el formato [describe la variedad real].
Dame la fórmula para extraer [lo que quieres] y después la lista
de variantes que tu fórmula NO cubriría.

4. AUDITORÍA
Dame las cinco comprobaciones de calidad de datos que harías sobre
esta tabla, con la fórmula de cada una. No calcules resultados.</code></pre>

<p>Ninguno de los cuatro pide un número, y eso no es casualidad: es la regla del principio aplicada cuatro veces. La IA redacta, la hoja calcula.</p>

<p>La regla se extiende al sitio donde acaban esos números: una cifra mal calculada en un documento se corrige antes de enviarlo, pero en una diapositiva se proyecta delante de quien la conoce de memoria. Cómo repartir el trabajo cuando el destino es una presentación está en la guía de <a href="/guias/presentaciones-con-ia">presentaciones con IA</a>.</p>
HTML,
];
