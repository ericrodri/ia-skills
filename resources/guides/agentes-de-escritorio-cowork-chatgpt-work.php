<?php

return [
    'title' => 'Agentes de escritorio: qué cambia cuando la IA trabaja sobre tus carpetas',
    'navTitle' => 'Agentes de escritorio',
    'seoTitle' => 'Claude Cowork, ChatGPT Work y Gemini Spark: guía real',
    'description' => 'Cowork, ChatGPT Work y Gemini Spark no responden: entregan ficheros. Qué delegar, dónde se procesan tus documentos y en qué siguen fallando.',
    'excerpt' => 'Le das acceso a una carpeta con cuarenta facturas, pides el cierre del trimestre y cierras el portátil. Cuando vuelves hay una hoja de cálculo, un documento con tres anomalías y una nota que dice que dos facturas no cuadran con su albarán. Eso ya no es un chat.',
    'category' => 'Herramientas',
    'published' => '2026-09-08',
    'updated' => '2026-09-08',
    'readingMinutes' => 11,
    'words' => 1992,
    'about' => 'Agentes de IA de escritorio que operan sobre ficheros y aplicaciones del usuario',
    'related' => ['que-es-un-agente-de-ia', 'automatizar-tareas-con-ia-en-el-trabajo', 'usar-ia-sin-filtrar-datos-de-clientes'],
    'toc' => [
        'que-cambia' => 'Qué cambia respecto al chat de siempre',
        'los-tres' => 'Cowork, ChatGPT Work y Gemini Spark: dónde vive el material',
        'carpeta' => 'La carpeta es la nueva conversación',
        'donde-se-procesa' => 'Dónde se procesan tus archivos, que no es lo mismo que dónde están',
        'encargos' => 'Ocho encargos que salen bien',
        'escribir-encargo' => 'Un encargo no es un prompt largo',
        'lo-que-falla' => 'Lo que todavía sale mal',
        'cowork-o-code' => 'Cowork o Claude Code: cuál te toca',
    ],
    'faq' => [
        '¿Qué es Claude Cowork y en qué se diferencia de Claude a secas?' => 'Cowork es la pestaña de Claude Desktop en la que Anthropic dejó de darte respuestas para darte ficheros. Llegó en enero de 2026 para macOS y Windows, le concedes permiso sobre carpetas concretas de tu ordenador y a partir de ahí lee, edita y crea documentos ahí dentro, además de ejecutar tareas programadas mientras tú estás en otra cosa. La diferencia con el chat no es de inteligencia sino de unidad de trabajo: en el chat pides un mensaje y lo copias a mano a donde haga falta; en Cowork pides un encargo y lo que revisas al final es un archivo que ya está en su sitio.',
        '¿Claude Cowork es gratis?' => 'No hay plan gratuito. Va incluido en las suscripciones de pago de Claude —Pro por 20 dólares al mes es la puerta de entrada, y por encima están Max y Team— pero no se vende suelto: si ya pagas Claude, ya tienes Cowork. El detalle que conviene tener presente antes de lanzar encargos largos es que comparte la misma cuota de uso que el chat y que Claude Code, así que un agente trabajando media hora sobre una carpeta grande se come el presupuesto que ibas a gastar en otra cosa.',
        '¿Qué diferencia hay entre Claude Cowork, ChatGPT Work y Gemini Spark?' => 'Dónde vive el material sobre el que trabajan. Cowork parte de carpetas de tu ordenador a las que le das permiso. ChatGPT Work, presentado por OpenAI en julio de 2026, parte de las aplicaciones que conectas —correo, Slack, calendario, hojas de cálculo, Notion, Figma— y devuelve documentos, presentaciones o sitios terminados. Gemini Spark vive dentro de la cuenta de Google y corre en los servidores de Google en segundo plano, incluso con el dispositivo apagado, sobre Gmail, Calendar, Drive, Docs y Sheets, con suscripción a Google AI Pro o Ultra. La elección práctica casi nunca es cuál es mejor, sino dónde tienes tú los documentos.',
        '¿Es seguro darle acceso a mis carpetas a un agente de IA?' => 'El riesgo real no es que el agente sea malicioso: es que el permiso se concede por carpeta o por aplicación, no por documento. Si apuntas a la carpeta del cliente entera, todo lo que hay dentro entra en el ámbito, incluidos los tres ficheros que no querías compartir. Y aunque los archivos estén en tu disco, el procesamiento ocurre en la infraestructura del proveedor. La práctica sensata es crear una carpeta específica por encargo y copiar dentro solo lo necesario, en lugar de apuntar a Documentos o a Descargas.',
        '¿Puede un agente de escritorio borrar o estropear mis archivos?' => 'Puede sobrescribir, y es el fallo más caro de los que se ven. Los agentes trabajan bien creando ficheros nuevos y peor modificando los que ya existen, sobre todo cuando en la carpeta hay tres versiones del mismo documento y ninguna se llama de forma que se distinga. La costumbre que evita el disgusto es separar entrada y salida: una subcarpeta de fuentes que el agente solo lee y otra de salida donde escribe, más control de versiones o una copia antes de empezar.',
        '¿Cowork sustituye a Claude Code?' => 'No, cubren cosas distintas y la frontera es el entregable. Si lo que sale del encargo es un documento, una hoja, una presentación o un conjunto de ficheros de oficina, eso es Cowork. Si lo que sale es código dentro de un repositorio, con sus pruebas, su historial de git y su revisión, eso sigue siendo Claude Code, que está construido alrededor de esa forma de trabajar. Quien no programa no necesita Claude Code para nada; quien programa acabará usando los dos para cosas diferentes.',
    ],
    'ctaTitle' => 'Encargos ya escritos, por profesión',
    'ctaBody' => 'Un agente de escritorio rinde tanto como el encargo que recibe. En el catálogo hay instrucciones ya probadas para cerrar mes en <a href="/profesiones/finanzas">Finanzas</a>, revisar contratos en <a href="/profesiones/legal">Legal</a> y montar entregables de cliente en <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>Le das acceso a una carpeta con cuarenta facturas y le pides el cierre del trimestre. Cierras el portátil y te vas a una reunión.</p>

<p>Cuando vuelves hay una hoja de cálculo con los totales, un documento con tres anomalías señaladas y una nota que dice que dos facturas no cuadran con su albarán. No hay que copiar nada de una ventana a otra: los ficheros están en la carpeta, con nombre y fecha.</p>

<p>Esto no es un chat más rápido. Es otro formato de trabajo, y conviene entender en qué se diferencia antes de decidir si compensa.</p>

<h2 id="que-cambia">Qué cambia respecto al chat de siempre</h2>

<p>En un chat la unidad es el mensaje. Tú aportas el contexto pegándolo, el modelo devuelve texto y el trabajo de colocar ese texto donde sirve —la hoja, el documento, el correo— lo haces tú. Ese último tramo, que nadie contabiliza, es donde se va la mitad del tiempo que la IA supuestamente ahorra.</p>

<p>En un agente de escritorio la unidad es el <strong>encargo</strong>. Cambian tres cosas a la vez:</p>

<ul>
    <li><strong>El contexto deja de pegarse.</strong> El material es una carpeta o una aplicación conectada, y el agente entra a mirar lo que necesita cuando lo necesita. No hay que resumirle nada de antemano.</li>
    <li><strong>El trabajo ocurre sin ti delante.</strong> Se lanza y sigue. Algunos, además, se programan para repetirse: el mismo encargo cada lunes sobre la carpeta de esa semana.</li>
    <li><strong>El entregable ya tiene formato.</strong> Sale un .xlsx, un .docx, una presentación, un conjunto de ficheros renombrados. No sale un bloque de texto que describe lo que deberías hacer.</li>
</ul>

<p>Hay un cuarto cambio que nadie anuncia y que importa más que los tres anteriores: <strong>la revisión se vuelve más difícil</strong>. Un párrafo mediocre se detecta leyéndolo. Una hoja de cálculo con doscientas filas bien formateadas y tres mal sumadas parece terminada, y el aspecto de terminado desactiva la desconfianza justo cuando más falta hace. Todo lo que sigue está escrito alrededor de ese problema.</p>

<h2 id="los-tres">Cowork, ChatGPT Work y Gemini Spark: dónde vive el material</h2>

<p>Los tres grandes lanzaron su agente en 2026 y la comparación por capacidades no lleva a ninguna parte, porque se copian entre ellos cada seis semanas. La diferencia que sí se mantiene es de dónde sacan el material y dónde dejan el resultado.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Claude Cowork</th><th>ChatGPT Work</th><th>Gemini Spark</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Material</strong></td><td>Carpetas de tu ordenador a las que das permiso</td><td>Aplicaciones que conectas: correo, Slack, calendario, hojas, Notion, Figma</td><td>Tu cuenta de Google: Gmail, Calendar, Drive, Docs, Sheets</td></tr>
        <tr><td><strong>Dónde vive</strong></td><td>Pestaña en Claude Desktop, macOS y Windows</td><td>Dentro de ChatGPT</td><td>Dentro de la app de Gemini, en los servidores de Google</td></tr>
        <tr><td><strong>Trabajo en segundo plano</strong></td><td>Sí, con tareas programadas</td><td>Sí, encargos de varios pasos y larga duración</td><td>Sí, incluso con el dispositivo apagado</td></tr>
        <tr><td><strong>Coste</strong></td><td>Incluido en los planes de pago de Claude, desde 20 $/mes; sin plan gratuito</td><td>Ligado a los planes de ChatGPT</td><td>Requiere Google AI Pro o Ultra</td></tr>
    </tbody>
</table>
</figure>

<p>La consecuencia práctica es aburrida y decisiva: <strong>elige el que ya esté donde están tus documentos</strong>. Una asesoría que trabaja con carpetas en el disco y un NAS quiere Cowork. Un equipo cuya vida entera está en Workspace quiere Spark. Una empresa que vive en Slack, Notion y Figma quiere Work. Cambiar de sitio los documentos para poder usar el agente que te gustaba más es exactamente el tipo de decisión que luego se abandona a los dos meses.</p>

<p>Conviene además no leer «agente» como sinónimo de autonomía total. Lo que estas herramientas hacen es ejecutar un encargo acotado con permisos concretos; el marco conceptual, con sus límites, está en la guía sobre <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>

<h2 id="carpeta">La carpeta es la nueva conversación</h2>

<p>Quien viene del chat tiende a pensar que el prompt es lo que determina el resultado. Con un agente de escritorio, la mitad del resultado la determina cómo está montada la carpeta, porque eso es lo que el agente lee.</p>

<p>La estructura que funciona no tiene nada de sofisticado:</p>

<pre><code>cierre-Q3-cliente-X/
  fuentes/          ← lo que el agente solo lee
  salida/           ← lo único donde puede escribir
  contexto.md       ← lo que no está en los ficheros</code></pre>

<p>Tres reglas que ahorran la mayoría de los sustos:</p>

<ol>
    <li><strong>Una carpeta por encargo, no una carpeta permanente.</strong> Apuntar a «Documentos» o a «Descargas» es dar acceso a años de material que no tiene nada que ver, y multiplicar las oportunidades de que el agente use el fichero equivocado.</li>
    <li><strong>Nombres que distingan versiones.</strong> Si dentro hay <code>presupuesto.xlsx</code>, <code>presupuesto_v2.xlsx</code> y <code>presupuesto_final.xlsx</code>, el agente elegirá uno y no será necesariamente el tuyo. Borra los que no valen antes de empezar.</li>
    <li><strong>Un <code>contexto.md</code> con lo que solo sabes tú.</strong> Qué cliente es, qué pasó el trimestre anterior, qué criterio se sigue cuando una factura llega sin albarán. Es el equivalente al briefing que le darías a alguien que entra nuevo.</li>
</ol>

<p>Esa separación entre <code>fuentes/</code> y <code>salida/</code> parece burocracia hasta la primera vez que un agente sobrescribe el original en lugar de crear una copia.</p>

<h2 id="donde-se-procesa">Dónde se procesan tus archivos, que no es lo mismo que dónde están</h2>

<p>Aquí hay una confusión que conviene deshacer, porque afecta a lo que puedes y no puedes delegar en un entorno profesional.</p>

<p>Que Cowork lea ficheros de tu disco no significa que el modelo se ejecute en tu ordenador. <strong>El contenido de esos ficheros viaja a la infraestructura del proveedor</strong>, se procesa allí y vuelve. No hay opción de modelo local ni autoalojado. Con Spark el punto es aún más claro, porque corre íntegramente en los servidores de Google. Con Work, el ámbito es el de los permisos que concediste al conectar cada aplicación.</p>

<p>De ahí salen dos consecuencias operativas:</p>

<ul>
    <li><strong>El permiso es de grano grueso.</strong> Se concede sobre una carpeta o sobre una aplicación entera, no documento a documento. Lo que decide qué se expone es lo que tú metas dentro, y por eso la carpeta por encargo no es orden, es control de acceso.</li>
    <li><strong>La categoría del dato manda sobre la comodidad.</strong> Nóminas, historiales, contratos con cláusulas de confidencialidad y datos personales de terceros siguen sujetos a lo que la organización haya firmado, y que el fichero no salga de tu carpeta a mano no cambia nada. Los criterios están desarrollados en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> y en la <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>.</li>
</ul>

<p>Dicho lo cual: la mayoría del trabajo de oficina no es material sensible. Una carpeta con presentaciones internas, notas de reunión y hojas de seguimiento no requiere ninguna ceremonia. Merece la pena decidir una vez qué categorías entran y cuáles no, y no volver a pensarlo cada vez.</p>

<h2 id="encargos">Ocho encargos que salen bien</h2>

<p>La lista está filtrada por un criterio: que el resultado se pueda comprobar en menos tiempo del que costaría hacerlo a mano. Un encargo cuya revisión dura más que la tarea original es una pérdida disfrazada, que es el fallo que describe la guía sobre <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si la IA ahorra tiempo</a>.</p>

<figure>
<table>
    <thead>
        <tr><th>Encargo</th><th>Entregable y cómo se comprueba</th></tr>
    </thead>
    <tbody>
        <tr><td>Consolidar facturas o gastos de un periodo</td><td>Hoja con totales por categoría más una lista de excepciones. Se comprueba cuadrando el total contra el extracto.</td></tr>
        <tr><td>Comparar dos versiones de un contrato</td><td>Documento con las cláusulas que cambian y el efecto de cada cambio. Se comprueba mirando tres al azar.</td></tr>
        <tr><td>Convertir una carpeta de notas de reunión en un seguimiento de acuerdos</td><td>Tabla de acuerdo, responsable y fecha. Se comprueba porque tú estuviste en las reuniones.</td></tr>
        <tr><td>Renombrar y clasificar un archivo desordenado</td><td>Ficheros movidos según un criterio explícito, con un registro de qué fue a dónde.</td></tr>
        <tr><td>Preparar el borrador de una propuesta a partir de tres anteriores</td><td>Documento con la estructura habitual y los huecos marcados. Se comprueba leyendo lo que dejó marcado.</td></tr>
        <tr><td>Extraer datos de un lote de PDF a una hoja</td><td>Una fila por documento y una columna con el nombre del fichero de origen. Se comprueba muestreando cinco.</td></tr>
        <tr><td>Revisar la coherencia de una entrega larga</td><td>Lista de contradicciones, cifras que no cuadran entre secciones y referencias rotas.</td></tr>
        <tr><td>Un informe semanal recurrente sobre la misma carpeta</td><td>El mismo documento cada lunes. Se comprueba una vez bien y luego por diferencias.</td></tr>
    </tbody>
</table>
</figure>

<p>Hay un patrón: casi todos son tareas de <strong>reunir, cotejar y ordenar</strong> material que ya existe. Ahí el agente es netamente superior a una persona con prisa. En cambio, en cuanto el encargo exige decidir qué es importante, el resultado depende de un criterio que solo tú tienes y que hay que escribir.</p>

<h2 id="escribir-encargo">Un encargo no es un prompt largo</h2>

<p>La instrucción que funciona en un chat —contexto, tarea, formato— se queda corta aquí, porque un agente además tiene que saber dónde mirar, dónde escribir y qué hacer cuando algo no cuadra. Cuatro bloques:</p>

<pre><code>MATERIAL
En fuentes/ hay las facturas de julio a septiembre en PDF y el
extracto bancario en CSV. En contexto.md están los criterios de
categorización que usamos.

ENCARGO
Consolida las facturas en una hoja con una fila por factura:
fecha, proveedor, base, IVA, total, categoría y fichero de origen.
Suma por categoría en una segunda pestaña.

ENTREGA
Escribe solo en salida/. Nombra el fichero cierre-Q3.xlsx.
No modifiques nada de fuentes/.

CUANDO ALGO NO CUADRE
No lo resuelvas por tu cuenta. Anótalo en una pestaña
"revisar" con el fichero, el campo y por qué dudas. Prefiero
veinte filas en revisar que una cifra inventada.</code></pre>

<p>El cuarto bloque es el que separa un encargo útil de uno peligroso. Sin él, el agente hará lo que hace un modelo cuando le falta un dato: rellenar con lo más plausible, que en una hoja de cálculo es indistinguible de un dato real. El mecanismo, y por qué la instrucción explícita lo reduce tanto, está en la guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="lo-que-falla">Lo que todavía sale mal</h2>

<p>Después de unos meses de uso, los fallos se repiten y casi ninguno es el que la gente teme.</p>

<ul>
    <li><strong>El entregable plausible pero incompleto.</strong> Procesa treinta y ocho de los cuarenta ficheros, produce un documento impecable y no menciona los dos que se saltó. Se detecta pidiendo siempre el recuento: cuántos ficheros entraron, cuántas filas salieron.</li>
    <li><strong>La versión equivocada.</strong> Ya mencionado, y sigue siendo la primera causa de resultados absurdos. La carpeta sucia envenena el encargo entero.</li>
    <li><strong>La cuota que desaparece.</strong> En Claude, Cowork comparte presupuesto con el chat y con Code. Un encargo grande sobre una carpeta grande consume mucho más de lo que la gente estima, y el aviso llega cuando ya no puedes usar la herramienta esa tarde.</li>
    <li><strong>La sobreescritura.</strong> Los agentes crean bien y editan regular. Si el encargo toca ficheros existentes, copia antes o trabaja con control de versiones.</li>
    <li><strong>El silencio ante la ambigüedad.</strong> Casi nunca preguntan. Si en el material hay dos criterios contradictorios, eligen uno y siguen. Por eso el bloque de «cuando algo no cuadre» va en todos los encargos.</li>
</ul>

<h2 id="cowork-o-code">Cowork o Claude Code: cuál te toca</h2>

<p>La confusión es razonable porque los dos productos se llaman parecido y los dos trabajan sobre ficheros. La frontera es el entregable, no la dificultad.</p>

<p>Si lo que sale del encargo es <strong>material de oficina</strong> —documentos, hojas, presentaciones, PDF, carpetas ordenadas— eso es Cowork, y no necesitas saber programar ni abrir una terminal. Si lo que sale es <strong>código dentro de un repositorio</strong>, con sus pruebas y su historial, eso es <a href="/guias/empezar-con-claude-code">Claude Code</a>, que está construido alrededor de git y de la línea de comandos porque ese es el flujo de trabajo de quien programa.</p>

<p>Hay un puente entre ambos que merece la pena conocer: los <a href="/guias/que-son-los-skills-de-claude-code">skills</a>, las instrucciones reutilizables que un modelo carga cuando reconoce que la tarea las necesita. Un procedimiento escrito una vez —cómo se categoriza un gasto en tu empresa, qué revisa tu despacho en un contrato de arrendamiento— deja de reescribirse en cada encargo. Es la diferencia entre usar un agente y tener un agente que sabe cómo trabajáis.</p>

<p>Y la regla de fondo, que no ha cambiado con el salto del chat al agente: <strong>delegar la ejecución no es delegar el criterio</strong>. Lo que el agente te devuelve es un borrador con formato de cosa terminada. Sigue haciendo falta alguien que sepa mirar la fila que no cuadra.</p>
HTML,
];
