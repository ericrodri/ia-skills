<?php

return [
    'title' => 'Presentaciones con IA: hace las diapositivas, no la presentación',
    'navTitle' => 'Presentaciones con IA',
    'seoTitle' => 'Cómo hacer presentaciones con IA: guion, diapositivas y export',
    'description' => 'La IA genera veinte diapositivas correctas que no convencen a nadie. El orden que sí funciona: guion en texto primero, titulares de acción y después diseño.',
    'excerpt' => 'Una presentación generada de una sola frase sale rápida, bonita y sin argumento. El trabajo que no se puede delegar es decidir qué frase va en cada diapositiva, y ese trabajo se hace en texto.',
    'category' => 'Práctica',
    'published' => '2026-09-03',
    'updated' => '2026-09-03',
    'readingMinutes' => 10,
    'words' => 1770,
    'about' => 'Creación de presentaciones y diapositivas con inteligencia artificial',
    'related' => ['ia-en-excel-y-google-sheets', 'como-escribir-prompts-efectivos', 'errores-al-usar-ia-en-el-trabajo'],
    'toc' => [
        'por-que-no-convence' => 'Por qué la presentación generada de un tirón no convence',
        'titulares' => 'El titular de acción: la técnica que hace el trabajo',
        'orden' => 'El orden correcto: guion en texto, después diapositivas',
        'vias' => 'Tres vías para generar, con tres consecuencias',
        'prompts' => 'Cuatro prompts, en el orden en que se usan',
        'datos' => 'Cifras y gráficos: la IA redacta, la hoja calcula',
        'exportar' => 'Lo que se rompe al exportar (y cómo evitarlo)',
        'imagenes' => 'Imágenes generadas: cuándo suman y cuándo delatan',
        'ultimo-tramo' => 'El último tramo no se delega',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para hacer presentaciones?' => 'Depende de dónde tenga que acabar el archivo, que es lo que casi nadie mira antes de empezar. Si la presentación va a circular en PowerPoint con la plantilla corporativa, Copilot dentro de PowerPoint es la opción con menos fricción porque escribe sobre tus diseños y puede tirar de documentos internos de SharePoint. Si vive en Google Workspace, Gemini en Slides hace lo equivalente. Las herramientas dedicadas tipo Gamma dan el mejor diseño por defecto y son las más rápidas, con dos costes: la exportación a PowerPoint casi siempre rompe algo y el plan gratuito suele dejar marca de agua. La calidad del argumento no la decide ninguna de las tres.',
        '¿Cómo hago una presentación con IA que no parezca hecha con IA?' => 'Dándole tu contenido en vez de tu tema. Una presentación generada a partir de «hazme diez diapositivas sobre nuestro plan de marketing» sale genérica porque el modelo no tiene nada específico con lo que trabajar y rellena con lo que suele haber en un plan de marketing. La misma petición con tus notas, tus cifras y tu conclusión ya escrita produce algo que solo podrías haber presentado tú. El otro delator es visual: plantilla por defecto, iconos redondeados y una foto abstracta en cada diapositiva. Aplicar la plantilla de tu empresa quita el 80 % del aspecto genérico.',
        '¿Cuántas diapositivas debe tener una presentación?' => 'Tantas como mensajes tengas, y ese número casi nunca es veinte. La regla que funciona mejor que cualquier cifra: un mensaje por diapositiva, escrito en el titular como frase completa. Si al escribir los titulares te sale la misma idea dos veces, sobra una diapositiva; si un titular necesita una conjunción para caber, faltan dos. Los generadores producen por defecto entre diez y veinte, porque es lo que llena una reunión, no porque sea lo que exige tu argumento.',
        '¿Puedo pedir a la IA que calcule los datos de las diapositivas?' => 'No, y es el error que más caro sale porque una cifra mal calculada en una diapositiva se proyecta delante de quien la conoce. El reparto correcto es el mismo que en las hojas de cálculo: la hoja calcula, la IA redacta. Calcula en Excel o en Sheets, pega el resultado y pide a la IA el titular que describe ese resultado, la escala del eje y el pie del gráfico. Nunca el número.',
        '¿Por qué se descoloca la presentación al exportarla a PowerPoint?' => 'Porque las herramientas dedicadas maquetan con motores web —cajas que se adaptan, fuentes cargadas de la red, degradados y capas— y PowerPoint tiene que traducir todo eso a su propio modelo de diapositiva. Lo que se rompe siempre es lo mismo: fuentes que no están instaladas en el equipo de destino y se sustituyen, cuadros de texto que crecen y desbordan, iconos que se convierten en imágenes de baja resolución y gráficos que dejan de ser editables. Si el archivo tiene que acabar en PowerPoint, genera dentro de PowerPoint. Si no, exporta a PDF y presenta desde ahí.',
        '¿Se nota si la presentación la ha hecho una IA?' => 'Se nota el contenido genérico, no la herramienta. Nadie distingue una diapositiva bien maquetada por Copilot de una hecha a mano, pero cualquiera detecta una presentación que no dice nada concreto sobre su empresa, con titulares que son categorías («Resultados», «Próximos pasos») en vez de afirmaciones. La prueba rápida: lee solo los titulares en orden. Si no cuentan la historia completa, ninguna cantidad de diseño lo va a arreglar.',
    ],
    'ctaTitle' => 'Prompts de presentación que ya usa gente',
    'ctaBody' => 'El comité mensual, la propuesta a cliente y la demo de producto son presentaciones repetidas, así que merecen un prompt fijo en lugar de improvisarse cada vez. Hay material votado por quien lo usa en <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/product-management">Product Management</a>.',
    'body' => <<<'HTML'
<p>Escribes una frase, esperas veinte segundos y tienes dieciocho diapositivas maquetadas, con iconos, con jerarquía tipográfica y sin una sola errata. Es la demostración más vistosa que tiene la IA generativa hoy, y también la que produce más presentaciones que nadie recuerda al día siguiente.</p>

<p>El motivo es que el trabajo duro de una presentación no está en las diapositivas. Está en decidir qué frase va en cada una y en qué orden, y eso es exactamente lo que no se puede delegar en una petición de una línea.</p>

<h2 id="por-que-no-convence">Por qué la presentación generada de un tirón no convence</h2>

<p>Si pides «diez diapositivas sobre nuestro plan de marketing», el modelo no tiene tu plan. Tiene la estructura estadística de los planes de marketing, y eso es lo que devuelve: contexto, objetivos, público, canales, calendario, métricas, próximos pasos. Los siete apartados están bien puestos y ninguno dice nada que tu comité no supiera.</p>

<p>El fallo tiene tres síntomas reconocibles:</p>

<figure>
<table>
    <thead>
        <tr><th>Síntoma</th><th>Qué lo causa</th></tr>
    </thead>
    <tbody>
        <tr><td>Titulares que son categorías: «Resultados», «Contexto», «Próximos pasos»</td><td>El modelo organiza por temas porque no sabe qué quieres afirmar</td></tr>
        <tr><td>Cinco viñetas por diapositiva, todas del mismo peso</td><td>Sin jerarquía de importancia, todo entra al mismo nivel</td></tr>
        <tr><td>Suena a cualquier empresa del sector</td><td>No le diste contenido propio, le diste un tema</td></tr>
    </tbody>
</table>
</figure>

<p>Los tres se arreglan con el mismo cambio, y es el único que de verdad importa.</p>

<h2 id="titulares">El titular de acción: la técnica que hace el trabajo</h2>

<p>Un titular de acción es una <strong>frase completa que afirma algo</strong>, en lugar de una etiqueta que anuncia el tema. Es una técnica vieja del mundo de la consultoría y funciona por un motivo mecánico: obliga a saber qué quieres decir antes de decidir cómo se ve.</p>

<figure>
<table>
    <thead>
        <tr><th>Titular de categoría</th><th>Titular de acción</th></tr>
    </thead>
    <tbody>
        <tr><td>Resultados del trimestre</td><td>Los ingresos crecen un 12 %, todo por renovaciones</td></tr>
        <tr><td>Análisis de la competencia</td><td>Dos competidores han bajado precio; nosotros no debemos seguirles</td></tr>
        <tr><td>Próximos pasos</td><td>Necesitamos aprobar dos contrataciones antes de octubre</td></tr>
    </tbody>
</table>
</figure>

<p>La prueba de calidad es inmediata y no requiere abrir el archivo: <strong>lee solo los titulares, en orden. Si cuentan la historia entera y llevan a la conclusión, la presentación está hecha</strong>; lo que queda es maquetarla. Si al leerlos no se entiende qué pides ni por qué, ninguna herramienta de diseño lo va a salvar.</p>

<p>Y aquí está el encaje con la IA: escribir titulares de acción es una tarea de redacción sobre contenido que tú aportas, es decir, exactamente lo que un modelo hace bien. Reescribir doce categorías en doce afirmaciones es cuestión de un prompt, y es el prompt con más impacto de toda la guía.</p>

<h2 id="orden">El orden correcto: guion en texto, después diapositivas</h2>

<p>El error de proceso es empezar por el archivo. El orden que funciona invierte los dos primeros pasos:</p>

<ol>
    <li><strong>Materia prima en bruto.</strong> Tus notas, las cifras ya calculadas, la conclusión a la que quieres llegar. Sin ordenar.</li>
    <li><strong>Guion en texto plano.</strong> Una línea por diapositiva, escrita como afirmación. Aquí se decide todo, y se decide en un documento, no en un editor de diapositivas.</li>
    <li><strong>Revisión del guion leyendo solo los titulares.</strong> Sobra lo que se repite; falta lo que salta.</li>
    <li><strong>Generación de las diapositivas</strong> a partir del guion aprobado, no del tema.</li>
    <li><strong>Datos y gráficos</strong> pegados desde la hoja de cálculo, nunca generados.</li>
    <li><strong>Ajuste visual y ensayo en voz alta.</strong></li>
</ol>

<p>Los pasos 1 a 3 son el 80 % del valor y ocupan el 20 % del tiempo. La razón de hacerlos en texto es práctica: reordenar cinco líneas de un documento cuesta diez segundos, y reordenar cinco diapositivas ya maquetadas cuesta diez minutos y te hace defender lo que ya has diseñado.</p>

<h2 id="vias">Tres vías para generar, con tres consecuencias</h2>

<figure>
<table>
    <thead>
        <tr><th>Vía</th><th>Cómo funciona</th><th>Fuerte en</th><th>Cuándo elegirla</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Dentro de la suite</strong><br>(Copilot en PowerPoint, Gemini en Slides)</td><td>Genera sobre tus propias plantillas y puede leer documentos internos</td><td>Plantilla corporativa correcta y estructura de empresa</td><td>Por defecto, si la presentación va a circular como PPTX o en Slides</td></tr>
        <tr><td><strong>Herramienta dedicada</strong><br>(Gamma y similares)</td><td>Genera el diseño completo desde un texto o un guion</td><td>Diseño por defecto muy por encima, y velocidad</td><td>Presentaciones que se consumen en web o en PDF, y borradores para convencer rápido</td></tr>
        <tr><td><strong>Mixta</strong></td><td>El guion y los titulares en un chat, la maquetación en tu editor</td><td>Control total del resultado</td><td>Comité, cliente, inversores: todo lo que se defiende en directo</td></tr>
    </tbody>
</table>
</figure>

<p>La vía mixta es la que menos se cuenta y la que mejor rinde en presentaciones importantes, porque separa las dos tareas: el modelo hace la redacción y tú controlas la maquetación en la herramienta donde el archivo va a vivir. Se evita de paso el problema del apartado de exportación.</p>

<p>Un detalle de coste que conviene mirar antes de montar el flujo de trabajo del equipo: las funciones de IA de las suites van en licencias de pago por usuario y mes, y los planes gratuitos de las herramientas dedicadas suelen marcar la presentación con su marca de agua o limitar el número de generaciones. Una presentación a cliente con marca de agua ajena es un problema que se descubre tarde.</p>

<h2 id="prompts">Cuatro prompts, en el orden en que se usan</h2>

<pre><code>1. GUION (el que más rinde)
Te paso mis notas y la conclusión a la que quiero llegar.
Devuélveme un guion de diapositivas: una línea por diapositiva,
cada una escrita como afirmación completa, no como categoría.
Máximo 12. Marca con [DATO] las que necesitan una cifra que
tengo que aportar yo.
Notas: [pega]
Conclusión: [la frase que quieres que se lleven]

2. TITULARES
Reescribe estos titulares de categoría como titulares de acción:
frase completa, en presente, con el mensaje concreto. Si un
titular no puede afirmar nada porque le falta información,
dilo en vez de inventar. [pega los titulares]

3. RECORTE
Este guion tiene 18 diapositivas para una reunión de 20 minutos.
Dime qué 6 quitarías y por qué, y cuáles dos se pueden fusionar
sin perder el argumento.

4. OBJECIONES (el más útil y el menos usado)
Eres el director financiero que va a escuchar esta presentación.
Dame las cinco preguntas incómodas que harías y en qué diapositiva
esperarías la respuesta. No respondas por mí.</code></pre>

<p>El cuarto es el que cambia reuniones. Una presentación que anticipa la objeción se defiende sola, y anticipar objeciones es una tarea de generación de hipótesis: justo lo que conviene delegar. El patrón general de este tipo de peticiones está en la <a href="/guias/como-escribir-prompts-efectivos">guía de prompts efectivos</a>.</p>

<h2 id="datos">Cifras y gráficos: la IA redacta, la hoja calcula</h2>

<p>Una cifra inventada en un documento se corrige antes de enviarlo. Una cifra inventada en una diapositiva se proyecta delante de la persona que la conoce de memoria, y ahí no hay corrección posible.</p>

<p>El reparto es el mismo que en las hojas de cálculo, y por el mismo motivo: <strong>la hoja calcula, la IA redacta</strong>. Calcula en Excel o en Sheets, pega el resultado, y usa el modelo para lo que sí hace bien alrededor de un gráfico:</p>

<ul>
    <li>El titular que describe lo que muestra el gráfico.</li>
    <li>Qué tipo de gráfico corresponde a esos datos, y cuál no.</li>
    <li>El pie que explica la fuente y el periodo.</li>
    <li>La frase de la implicación: qué hay que hacer con ese número.</li>
</ul>

<p>Nunca el número. El razonamiento completo, con los cuatro errores de cálculo que se repiten, está en la <a href="/guias/ia-en-excel-y-google-sheets">guía de IA en Excel y Google Sheets</a>.</p>

<h2 id="exportar">Lo que se rompe al exportar (y cómo evitarlo)</h2>

<p>El problema aparece al final, cuando ya no hay tiempo. Las herramientas dedicadas maquetan con motores web y PowerPoint tiene que traducir eso a su propio modelo. Lo que se rompe es siempre lo mismo:</p>

<figure>
<table>
    <thead>
        <tr><th>Se rompe</th><th>Cómo se manifiesta</th><th>Prevención</th></tr>
    </thead>
    <tbody>
        <tr><td>Fuentes</td><td>Se sustituyen en el equipo de destino y desmontan el ajuste del texto</td><td>Usar fuentes estándar o incrustarlas al guardar</td></tr>
        <tr><td>Cajas de texto</td><td>Crecen y desbordan la diapositiva</td><td>Revisar diapositiva a diapositiva tras exportar</td></tr>
        <tr><td>Gráficos</td><td>Llegan como imagen y dejan de ser editables</td><td>Rehacerlos en el editor de destino</td></tr>
        <tr><td>Iconos y degradados</td><td>Pixelados o con el color cambiado</td><td>Comprobar en pantalla grande</td></tr>
    </tbody>
</table>
</figure>

<p>Dos reglas que ahorran el mal rato: <strong>si el archivo tiene que acabar en PowerPoint, genera dentro de PowerPoint</strong>. Y si no hace falta que nadie lo edite, presenta desde el PDF, que no se descoloca en ningún equipo. Revisa además el archivo en el ordenador y la pantalla donde vas a presentar, no solo en el tuyo.</p>

<h2 id="imagenes">Imágenes generadas: cuándo suman y cuándo delatan</h2>

<p>Una imagen generada funciona cuando es ilustrativa y abstracta —una portada, una transición de sección, una metáfora visual— y delata cuando pretende ser información: personas con manos raras, gráficos falsos con ejes ilegibles, capturas de pantalla de productos que no existen.</p>

<p>La prueba es sencilla: si la imagen aporta un dato, no puede ser generada. Si aporta ambiente, puede. Y en presentaciones a cliente conviene comprobar además qué dice la política de marca de la empresa sobre imágenes generadas, porque cada vez más marcas tienen una.</p>

<h2 id="ultimo-tramo">El último tramo no se delega</h2>

<p>Quedan tres cosas que ninguna herramienta va a hacer por ti, y son las que deciden cómo sale la reunión.</p>

<ol>
    <li><strong>La última diapositiva.</strong> Qué pides exactamente: una decisión, un presupuesto, una firma, un sí. Los generadores ponen «Gracias» o «Preguntas», que es renunciar al motivo de la reunión.</li>
    <li><strong>El ensayo en voz alta.</strong> Diez minutos. Es donde se descubre que la diapositiva 7 no se puede contar sin la 9, y donde se cae la mitad del texto que sobraba.</li>
    <li><strong>Las cifras contra la fuente.</strong> Cada número de cada diapositiva, comprobado en la hoja de origen. Es el chequeo que evita el error que se recuerda meses.</li>
</ol>

<p>Con eso, la IA te ha ahorrado la maquetación, la redacción de los titulares y la ronda de objeciones: bastante tiempo. Lo que no te ha ahorrado es tener algo que decir, y ese sigue siendo el trabajo. Otros fallos que se repiten al trabajar con IA están recogidos en la guía de <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores al usar IA en el trabajo</a>.</p>
HTML,
];
