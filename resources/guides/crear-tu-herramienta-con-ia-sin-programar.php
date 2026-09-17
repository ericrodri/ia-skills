<?php

return [
    'title' => 'Vibe coding: crear tu propia herramienta sin saber programar',
    'navTitle' => 'Crear tu herramienta sin programar',
    'seoTitle' => 'Vibe coding: crear tu herramienta sin programar',
    'description' => 'Qué puede construir de verdad alguien que no programa, con qué herramientas, dónde está el límite y qué revisar antes de que lo use otra persona.',
    'excerpt' => 'Describes lo que quieres y la IA escribe el código. Funciona mejor de lo que esperabas y falla en sitios que no ves. Qué tipo de herramienta sale bien, cuál no, y la lista de comprobación que separa un experimento de algo que puedes dejar en manos de un compañero.',
    'category' => 'Práctica',
    'published' => '2026-09-17',
    'updated' => '2026-09-17',
    'readingMinutes' => 12,
    'words' => 2050,
    'about' => 'Desarrollo de software asistido por IA para personas sin perfil técnico',
    'related' => ['automatizar-sin-programar-n8n-make-zapier', 'claude-code-vs-cursor', 'empezar-con-claude-code'],
    'toc' => [
        'que-es' => 'Qué es y de dónde sale el nombre',
        'que-sale-bien' => 'Qué sale bien y qué no, por tipo de herramienta',
        'herramientas' => 'Con qué se hace: tres niveles',
        'primera-tarde' => 'Tu primera tarde, paso a paso',
        'el-muro' => 'El muro del 80 %',
        'seguridad' => 'Lo que la IA no te avisa de que ha hecho mal',
        'cuando-no' => 'Cuándo no deberías construirlo tú',
    ],
    'faq' => [
        '¿Qué es exactamente el vibe coding?' => 'Describir en lenguaje natural la herramienta que quieres y dejar que un modelo de IA escriba el código, sin leerlo ni corregirlo a mano. El término lo acuñó Andrej Karpathy a principios de 2025 para nombrar una forma de programar en la que «te olvidas de que el código existe», y el Collins Dictionary lo eligió palabra del año 2025. Lo que empezó como una broma entre desarrolladores describe hoy cómo mucha gente sin perfil técnico construye sus propias utilidades.',
        '¿Puedo crear una app de verdad sin saber programar?' => 'Puedes crear una herramienta de verdad, que no es lo mismo. Una calculadora interna, un formulario que ordena respuestas, un panel que lee una hoja de cálculo o un script que renombra 400 archivos salen bien y funcionan de forma fiable. Un producto con usuarios de pago, datos personales y facturación es otra categoría: ahí el código es la parte fácil y lo que falta es todo lo demás.',
        '¿Cuánto cuesta montar algo así?' => 'Menos de lo que parece. La suscripción de chat que ya pagas sirve para empezar, y las herramientas específicas se mueven entre 0 y 25 € al mes en sus planes de entrada. El coste real no es la suscripción: es el tiempo que se come el último 20 % del proyecto, que suele ser más que todo el resto junto.',
        '¿Es seguro publicar algo hecho así?' => 'Solo después de revisarlo. Los análisis de código generado por IA coinciden en que alrededor de la mitad no supera comprobaciones básicas de seguridad, y el fallo más repetido es el más tonto: claves de acceso escritas dentro del propio código. Si la herramienta vive en tu ordenador y no la usa nadie más, el riesgo es bajo. En cuanto está en internet, necesitas que alguien con criterio técnico la mire.',
        '¿Esto sustituye a los programadores?' => 'Sustituye a la hoja de cálculo imposible que nadie iba a convertir nunca en una aplicación, y a la petición interna que llevaba dos años en la cola de sistemas. Lo que no sustituye es el criterio sobre qué se puede romper, qué datos no pueden salir de ahí y qué pasa cuando algo falla a las tres de la mañana. En la práctica cambia quién escribe la primera versión, no quién responde de ella.',
        '¿Qué diferencia hay con automatizar en Make o n8n?' => 'La automatización conecta herramientas que ya existen: cuando llega un formulario, crea la fila y manda el correo. El vibe coding crea la herramienta que no existe. Si tu problema es «estas cinco aplicaciones no se hablan», la automatización es más rápida y se rompe menos. Si es «necesito algo que no vende nadie», entonces toca construirlo.',
    ],
    'ctaTitle' => 'Antes de construir, mira si ya está escrito',
    'ctaBody' => 'Buena parte de lo que la gente construye desde cero ya existe como prompt o skill probado. Revisa el catálogo de <a href="/profesiones/desarrollo">Desarrollo</a>, <a href="/profesiones/product-management">Product Management</a> y <a href="/profesiones/freelancers">Freelancers</a> antes de abrir el editor.',
    'body' => <<<'HTML'
<p>Hay un momento reconocible: llevas cuarenta minutos peleándote con una hoja de cálculo que hace algo que no debería hacer una hoja de cálculo, y piensas «esto debería ser un botón». Antes, ese pensamiento moría ahí. Ahora describes el botón en un chat y, veinte minutos después, existe.</p>

<p>Esta guía va de esa distancia entre «existe» y «puedo confiar en ello», que es donde está todo lo interesante.</p>

<h2 id="que-es">Qué es y de dónde sale el nombre</h2>

<p>El término lo acuñó Andrej Karpathy a principios de 2025 para describir, medio en broma, una forma de programar en la que aceptas el código sin leerlo: le cuentas al modelo la sensación de lo que quieres, pruebas, dices «no, así no» y vuelves a probar. El chiste cuajó, el <em>Collins Dictionary</em> lo nombró palabra del año 2025 y hoy describe algo bastante concreto: construir software sin leer el código que lo hace funcionar.</p>

<p>Conviene separar dos cosas que se confunden todo el rato:</p>

<ul>
    <li><strong>Programar con ayuda de IA.</strong> Alguien que sabe leer código lo revisa, lo corrige y decide. La IA escribe más rápido, pero el criterio sigue siendo humano. De eso va <a href="/guias/claude-code-vs-cursor">la comparativa entre Claude Code y Cursor</a>.</li>
    <li><strong>Vibe coding de verdad.</strong> Nadie lee el código. El único criterio es si al probarlo hace lo que querías. Es lo que hace la mayoría de la gente sin perfil técnico, y es de lo que va esta guía.</li>
</ul>

<p>La segunda funciona sorprendentemente bien dentro de unos límites muy concretos, y falla de formas que no se ven hasta que es tarde. Saber dónde está esa frontera es la mitad del trabajo.</p>

<h2 id="que-sale-bien">Qué sale bien y qué no, por tipo de herramienta</h2>

<p>No es una cuestión de dificultad técnica, sino de qué pasa cuando se rompe. Ordenado de más a menos rentable:</p>

<figure>
<table>
    <thead>
        <tr><th>Tipo</th><th>Ejemplo real</th><th>Qué pasa si falla</th><th>Veredicto</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Script de un solo uso</strong></td><td>Renombrar 400 fotos según el nombre del cliente, extraer las tablas de 30 PDF</td><td>Nada: lo ejecutas otra vez</td><td>Ideal. Empieza aquí</td></tr>
        <tr><td><strong>Calculadora o simulador interno</strong></td><td>Presupuesto por horas y perfiles, comparador de tarifas de proveedor</td><td>Un número mal, que detectas porque conoces el negocio</td><td>Muy bueno, con casos de prueba</td></tr>
        <tr><td><strong>Panel sobre datos que ya tienes</strong></td><td>Gráficas de tu hoja de ventas, estado de los proyectos abiertos</td><td>Enseña un dato desactualizado</td><td>Bueno si los datos son de solo lectura</td></tr>
        <tr><td><strong>Herramienta interna con varios usuarios</strong></td><td>Registro de incidencias del equipo, reserva de salas</td><td>Alguien pierde su trabajo o ve lo que no debe</td><td>Cuidado: ya hay datos y permisos</td></tr>
        <tr><td><strong>Algo en internet con clientes</strong></td><td>Portal de clientes, formulario que guarda datos personales</td><td>Brecha de datos, con lo que eso implica</td><td>No sin revisión técnica</td></tr>
    </tbody>
</table>
</figure>

<p>La línea está clara: <strong>mientras los datos no sean de otras personas y el fallo lo pagues tú, construye sin miedo.</strong> En cuanto aparece un tercero —un compañero, un cliente, un dato personal— cambia la conversación, y no por purismo técnico sino porque cambian tus obligaciones. Esa parte la cubre <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">la guía sobre datos de clientes</a>.</p>

<h2 id="herramientas">Con qué se hace: tres niveles</h2>

<figure>
<table>
    <thead>
        <tr><th>Nivel</th><th>Herramientas</th><th>Para qué sirve</th><th>Coste</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>El chat que ya pagas</strong></td><td>ChatGPT, Claude, Gemini</td><td>Scripts sueltos, fórmulas, una página pequeña que descargas y abres. Sin instalar nada</td><td>Incluido</td></tr>
        <tr><td><strong>Constructores de app</strong></td><td>Lovable, Bolt, v0, Replit, Google AI Studio</td><td>Aplicaciones con pantallas, base de datos y dirección pública. Escribes la idea y sale funcionando</td><td>Plan gratuito limitado; 20–25 € al mes al usarlo en serio</td></tr>
        <tr><td><strong>Agentes sobre tu ordenador</strong></td><td>Claude Code, Cursor, Codex</td><td>Trabajan sobre archivos reales de tu máquina y ejecutan comandos. Mucho más potentes y menos amables</td><td>Incluido en planes de pago de chat o por consumo</td></tr>
    </tbody>
</table>
</figure>

<p>Consejo poco intuitivo: <strong>empieza por el primero aunque quieras llegar al segundo.</strong> Quien arranca en un constructor de apps acaba con un proyecto de siete pantallas que no entiende y que no sabe arreglar. Quien arranca pidiéndole al chat un script de veinte líneas aprende lo que de verdad importa —cómo describir bien lo que quiere y cómo comprobar el resultado— sobre algo que cabe en la cabeza.</p>

<p>Si el salto al tercer nivel te interesa, <a href="/guias/empezar-con-claude-code">la guía de instalación de Claude Code</a> asume que no eres desarrollador.</p>

<h2 id="primera-tarde">Tu primera tarde, paso a paso</h2>

<p>Elige una tarea repetitiva que hagas a mano y que no toque datos de nadie. Después:</p>

<ol>
    <li><strong>Describe el resultado, no la solución.</strong> «Tengo una carpeta con facturas en PDF y necesito una hoja con fecha, proveedor e importe de cada una» funciona mucho mejor que «hazme un script en Python con pdfplumber». Tú sabes el problema; deja que elija las piezas.</li>
    <li><strong>Da un ejemplo real.</strong> Una factura de muestra, tres filas de tu hoja, una captura del documento. Un ejemplo concreto ahorra cuatro rondas de correcciones, y esto vale para cualquier prompt, no solo para código: lo desarrolla <a href="/guias/como-escribir-prompts-efectivos">la guía de prompts efectivos</a>.</li>
    <li><strong>Pide instrucciones de instalación para alguien que no programa.</strong> Explícitamente. Si no lo pides, dará por supuesto medio entorno de desarrollo.</li>
    <li><strong>Pruébalo con un caso que sabes de memoria.</strong> Una factura cuyo importe conoces. Si ese sale bien, prueba el caso raro: la que tiene dos páginas, la que está escaneada torcida, la que viene en otro idioma.</li>
    <li><strong>Cuando falle, pega el error entero.</strong> Sin resumirlo ni pedir perdón. El texto rojo que asusta es exactamente la información que necesita el modelo.</li>
    <li><strong>Guarda el prompt que funcionó.</strong> Es más valioso que el código: con él puedes reconstruirlo, adaptarlo o pasárselo a otra persona. <a href="/guias/gpts-proyectos-y-skills">Guardarlo como skill o proyecto</a> es lo que convierte el experimento en algo reutilizable.</li>
</ol>

<p>Una tarde honesta son dos o tres horas. Si a la segunda hora sigues sin nada que funcione, casi siempre es porque el objetivo era demasiado grande, no porque no sepas hacerlo.</p>

<h2 id="el-muro">El muro del 80 %</h2>

<p>Esto es lo que nadie enseña en los vídeos: las primeras dos horas son eufóricas y las siguientes veinte son otra cosa. El patrón se repite tanto que conviene esperarlo.</p>

<p>Llegas rápido a algo que hace lo principal. Y entonces empiezan los casos que no habías contado: el archivo vacío, el nombre con tilde, el usuario que pulsa dos veces, el mes que tiene 28 días. Cada arreglo es fácil. El problema es que arreglar el séptimo rompe el tercero, y como no lees el código no tienes forma de saberlo hasta que alguien te lo dice.</p>

<p>Tres cosas que sí ayudan:</p>

<ul>
    <li><strong>Apunta tus casos de prueba en una lista y repásalos enteros después de cada cambio.</strong> Cinco minutos. Es la única red de seguridad que tienes sin leer código.</li>
    <li><strong>Guarda una copia de la versión que funcionaba</strong> antes de pedir el siguiente cambio. Una carpeta con la fecha basta. La mitad de los desastres se arreglan volviendo atrás.</li>
    <li><strong>Empieza conversación nueva cuando la cosa se vuelva tonta.</strong> A partir de cierto punto el modelo olvida decisiones de hace veinte mensajes y reintroduce fallos que ya habíais arreglado. No es impresión tuya: le pasa a todos los modelos y lo explica <a href="/guias/ventana-de-contexto-conversaciones-largas">la guía sobre la ventana de contexto</a>. Abre un chat limpio, pega el código actual y describe solo el cambio que quieres.</li>
</ul>

<h2 id="seguridad">Lo que la IA no te avisa de que ha hecho mal</h2>

<p>El código generado por IA funciona y es inseguro con una frecuencia incómoda. Los análisis públicos de los últimos dos años coinciden en el orden de magnitud: cerca de la mitad del código generado no pasa comprobaciones básicas de seguridad, y los repositorios públicos registraron en 2025 el mayor salto interanual de credenciales filtradas del que hay registro.</p>

<p>No hace falta entender de seguridad para evitar lo peor. Cuatro preguntas, formuladas tal cual al modelo, cubren la mayor parte:</p>

<figure>
<table>
    <thead>
        <tr><th>Pregunta que haces</th><th>Qué estás evitando</th></tr>
    </thead>
    <tbody>
        <tr><td>«¿Hay alguna clave, contraseña o token escrito dentro del código? Sácalo a un archivo de configuración aparte»</td><td>El fallo número uno: publicar tus credenciales sin darte cuenta</td></tr>
        <tr><td>«¿Quién puede abrir esto? ¿Hay alguna pantalla accesible sin haber iniciado sesión?»</td><td>Paneles de administración abiertos a internet</td></tr>
        <tr><td>«¿Qué pasa si alguien escribe algo raro en este formulario?»</td><td>Las inyecciones de toda la vida, que siguen siendo el pan de cada día</td></tr>
        <tr><td>«¿Se guarda algún dato personal? ¿Dónde y durante cuánto tiempo?»</td><td>Convertirte en responsable de un tratamiento de datos sin enterarte</td></tr>
    </tbody>
</table>
</figure>

<p>Y una regla que no admite matices: <strong>si la herramienta va a estar accesible desde internet y guarda datos de personas, que la mire alguien con criterio técnico antes.</strong> Una hora de revisión cuesta menos que cualquiera de las alternativas.</p>

<h2 id="cuando-no">Cuándo no deberías construirlo tú</h2>

<p>Cuatro señales de que la respuesta correcta es comprar, contratar o no hacerlo:</p>

<ul>
    <li><strong>Ya existe y cuesta 15 € al mes.</strong> Construir la versión mala de algo que ya está resuelto es el error más caro, porque el coste aparece después, cuando eres tú quien tiene que mantenerlo.</li>
    <li><strong>El problema real es que tus herramientas no se hablan.</strong> Eso es automatización, no software nuevo, y se resuelve más rápido y con menos superficie de fallo: <a href="/guias/automatizar-sin-programar-n8n-make-zapier">n8n, Make y Zapier</a>.</li>
    <li><strong>Va a tocar dinero, nóminas o datos de salud.</strong> No por la dificultad, sino por lo que pasa cuando se equivoca en el caso número 300.</li>
    <li><strong>Alguien más va a depender de ello dentro de seis meses.</strong> Todo lo que un equipo usa a diario necesita alguien que lo arregle cuando se rompa. Si ese alguien eres tú y no lees el código, acabas de crearte un trabajo que no querías.</li>
</ul>

<p>Dicho todo lo anterior: la mayoría de lo que la gente necesita en su día a día son scripts pequeños y calculadoras internas que no llegan a ninguna de estas cuatro líneas. Ahí el vibe coding no es un experimento, es la forma más rápida de resolverlo. Y si quieres saber si de verdad te está ahorrando tiempo, <a href="/guias/medir-si-la-ia-ahorra-tiempo">mídelo</a> antes de contarlo como victoria.</p>
HTML,
];
