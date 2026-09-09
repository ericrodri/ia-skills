<?php

return [
    'title' => 'IA local: modelos en tu ordenador sin enviar datos a nadie',
    'navTitle' => 'IA local y privada',
    'seoTitle' => 'IA local en tu ordenador: guía práctica y honesta',
    'description' => 'Ejecutar un modelo en tu propio ordenador con Ollama o LM Studio: qué hardware hace falta de verdad, qué modelo elegir y qué no resuelve por sí solo.',
    'excerpt' => 'La promesa es limpia: el documento no sale de tu disco. La parte que casi nadie cuenta es que un modelo local resuelve el problema de dónde viajan los datos y no resuelve ninguno de los otros, y que confundir las dos cosas sale caro.',
    'category' => 'Herramientas',
    'published' => '2026-09-09',
    'updated' => '2026-09-09',
    'readingMinutes' => 14,
    'words' => 2231,
    'about' => 'Ejecución local de modelos de lenguaje en el puesto de trabajo con Ollama y LM Studio, y sus implicaciones de privacidad y cumplimiento',
    'related' => ['usar-ia-sin-filtrar-datos-de-clientes', 'ai-act-obligaciones-empresas', 'politica-de-uso-de-ia-en-la-empresa'],
    'toc' => [
        'que-es' => 'Qué es exactamente ejecutar IA en local',
        'cuando-merece' => 'Cuándo merece la pena y cuándo es capricho',
        'hardware' => 'Qué hardware hace falta de verdad',
        'herramientas' => 'Ollama o LM Studio: cuál de los dos',
        'modelos' => 'Qué modelo elegir para cada trabajo',
        'lo-que-pierdes' => 'Lo que pierdes respecto a un modelo de frontera',
        'no-resuelve' => 'Lo que la IA local no resuelve por sí sola',
        'montarlo' => 'Montarlo en media hora',
        'cuando-no' => 'Cuándo no es la respuesta',
    ],
    'faq' => [
        '¿Qué es la IA local y en qué se diferencia de ChatGPT?' => 'IA local significa que el modelo se descarga a tu ordenador y se ejecuta con tu procesador y tu memoria, sin conexión a ningún servidor. Cuando escribes un prompt en ChatGPT, Claude o Gemini, ese texto viaja a los servidores del proveedor, se procesa allí y vuelve. Con un modelo local el texto no sale de la máquina: puedes desconectar el cable de red y seguir trabajando. La diferencia práctica no es de calidad ni de velocidad, es de quién tiene la posibilidad técnica de leer lo que escribes. En un modelo local, nadie más que tú.',
        '¿Qué ordenador necesito para ejecutar un modelo de IA en local?' => 'Menos de lo que la gente cree para probarlo y más de lo que le gustaría para usarlo a diario. Con 8 GB de RAM y sin tarjeta gráfica dedicada puedes ejecutar modelos de 3 o 4 mil millones de parámetros y comprobar que la cosa funciona, aunque irán lentos y se equivocarán a menudo. El punto en el que la experiencia deja de ser un experimento está en 16 GB de memoria, que permite mover modelos de 8B con soltura, y el trabajo diario cómodo empieza en 24 GB de VRAM o de memoria unificada. Los Mac con chip de la serie M tienen ventaja porque comparten memoria entre procesador y gráfica, así que un Mac de 32 GB rinde por encima de lo que su precio sugiere.',
        '¿Es la IA local más segura para datos de clientes?' => 'Es mejor en un aspecto concreto y neutra en el resto. Elimina la transferencia a un tercero, que es el punto que más preocupa en los contratos y el que hace que muchos departamentos legales bloqueen las herramientas en la nube. Lo que no elimina es nada de lo demás: el portátil se puede perder, el disco puede estar sin cifrar, la carpeta con los expedientes sigue siendo accesible a quien tenga la sesión abierta y los prompts que guardes localmente son datos personales igual que antes. Un modelo local en un equipo sin cifrado de disco ni control de acceso es peor que una herramienta en la nube con contrato de tratamiento firmado.',
        '¿Cumple el RGPD usar IA local?' => 'La ejecución local elimina una de las cuestiones más difíciles del RGPD —la transferencia a un tercero y, si ese tercero está fuera de la UE, la transferencia internacional— pero no convierte el tratamiento en lícito por sí misma. Si tratas datos personales sigues necesitando base jurídica, información a los interesados, minimización y medidas de seguridad, y sigues teniendo que valorar si el uso concreto exige una evaluación de impacto. Lo que cambia es que el responsable del tratamiento eres tú y solo tú, lo cual simplifica el papeleo del encargado y te carga entera la responsabilidad técnica.',
        '¿Merece la pena la IA local si ya pago ChatGPT o Claude?' => 'Como sustituto, casi nunca. Como complemento para una franja concreta de trabajo, bastante a menudo. La franja es esta: material que no quieres o no puedes subir a un tercero, y tareas donde la diferencia de calidad entre un modelo de 30B y un modelo de frontera no cambia el resultado —clasificar, extraer campos, reformular, resumir texto que ya tienes delante, primeras versiones de un borrador. Para razonamiento complejo, para código no trivial y para cualquier cosa donde el resultado se juzgue por su calidad final, el modelo de pago sigue ganando por un margen que no se cierra con hardware doméstico.',
        '¿Se puede usar IA local sin conexión a internet?' => 'Sí, y ese es uno de sus argumentos menos comentados. Una vez descargado el modelo, la inferencia funciona en avión, en una obra sin cobertura, en una sala de datos aislada o en la oficina de un cliente que no da acceso a su red. También significa que no dependes de que el proveedor tenga el servicio caído, ni de sus límites de uso, ni de que decida cambiar el precio o retirar el modelo que usabas. Lo que sí necesita conexión es la descarga inicial, que son varios gigabytes por modelo.',
    ],
    'ctaTitle' => 'Trabajo con material que no debería salir del disco',
    'ctaBody' => 'Las profesiones que más rendimiento sacan a un modelo local son las que manejan documentación sujeta a confidencialidad: expedientes en <a href="/profesiones/legal">Legal</a>, datos de empleados en <a href="/profesiones/rrhh">RRHH</a> y cierres y previsiones en <a href="/profesiones/finanzas">Finanzas</a>.',
    'body' => <<<'HTML'
<p>La promesa es limpia y por eso convence tan rápido: <strong>el documento no sale de tu disco</strong>. Nada que enseñar a un comité de seguridad, ningún contrato de tratamiento que negociar, ninguna cláusula sobre a qué país viajan los datos.</p>

<p>La parte que casi nadie cuenta es que un modelo local resuelve el problema de dónde viajan los datos y <strong>no resuelve ninguno de los otros</strong>. Confundir las dos cosas es el error que convierte una buena decisión técnica en un falso cumplimiento.</p>

<h2 id="que-es">Qué es exactamente ejecutar IA en local</h2>

<p>Un modelo de lenguaje es, en el disco, un fichero de varios gigabytes con los pesos de una red neuronal. Ejecutarlo en local significa descargar ese fichero y hacer que tu propio procesador y tu propia memoria calculen la respuesta, en lugar de enviar el prompt a un servidor que hace el cálculo y devuelve el resultado.</p>

<p>Consecuencias que se derivan de esa frase, todas verificables sin fiarse de nadie:</p>

<ul>
    <li><strong>El texto no sale de la máquina.</strong> Puedes desconectar la red y seguir trabajando. Es la única forma de comprobación que no depende de creerse una política de privacidad.</li>
    <li><strong>No hay límites de uso ni coste por token.</strong> El coste es la electricidad y el hardware que ya tenías.</li>
    <li><strong>El modelo no cambia si tú no lo cambias.</strong> Nadie actualiza el modelo por debajo y te altera los resultados de un día para otro, que es una molestia real en producción.</li>
    <li><strong>No hay conocimiento del mundo posterior a su entrenamiento</strong> y no hay búsqueda web salvo que la montes tú.</li>
</ul>

<p>Lo que <em>no</em> significa: no significa entrenar un modelo con tus datos. Eso es otra cosa, cuesta órdenes de magnitud más y casi ninguna empresa que dice necesitarlo lo necesita. Aquí se ejecuta un modelo ya entrenado por otro, igual que se ejecuta un programa.</p>

<h2 id="cuando-merece">Cuándo merece la pena y cuándo es capricho</h2>

<p>La IA local tiene un problema de reputación doble: la desprecian los que la han probado con el modelo equivocado en el hardware equivocado, y la sobrevenden los que la han montado un domingo y quieren justificar el domingo.</p>

<p>El criterio honesto es la naturaleza de la tarea, no el entusiasmo:</p>

<figure>
<table>
    <thead>
        <tr><th>Situación</th><th>¿Local?</th><th>Por qué</th></tr>
    </thead>
    <tbody>
        <tr><td>Material que no puedes subir a un tercero por contrato</td><td><strong>Sí</strong></td><td>Es el caso que justifica todo lo demás, incluida la incomodidad</td></tr>
        <tr><td>Clasificar, extraer campos, reformular, resumir</td><td><strong>Sí</strong></td><td>Un modelo de 8B–30B ya lo hace bien; la frontera no aporta nada</td></tr>
        <tr><td>Volumen alto de tareas repetitivas y mecánicas</td><td><strong>Sí</strong></td><td>Sin coste por token, el volumen deja de ser un problema económico</td></tr>
        <tr><td>Trabajo sin conexión o en red ajena</td><td><strong>Sí</strong></td><td>Funciona donde no hay internet ni permiso para usarlo</td></tr>
        <tr><td>Razonamiento largo, análisis con matices, código no trivial</td><td>No</td><td>La diferencia con un modelo de frontera es grande y se nota en el resultado</td></tr>
        <tr><td>Uso ocasional, dos veces por semana</td><td>No</td><td>El mantenimiento no se amortiza; paga la suscripción</td></tr>
        <tr><td>Equipo sin nadie que sepa administrarlo</td><td>No</td><td>Un modelo local desatendido envejece y nadie se da cuenta</td></tr>
    </tbody>
</table>
</figure>

<p>Hay un patrón en la columna del sí: <strong>las tareas donde el modelo trabaja sobre texto que ya tienes delante</strong>. Cuando el material está en el prompt, el trabajo del modelo es transformar, y transformar es mucho más fácil que saber. Ahí un modelo mediano compite de igual a igual. En cuanto la respuesta correcta depende de conocimiento que el modelo debe traer de dentro, la diferencia de tamaño se hace visible en la primera respuesta.</p>

<h2 id="hardware">Qué hardware hace falta de verdad</h2>

<p>La cifra que manda es la memoria, no la velocidad del procesador. Un modelo cabe o no cabe; si no cabe, el sistema tira de disco y la experiencia pasa de lenta a inservible.</p>

<p>Como los modelos se distribuyen <em>cuantizados</em> —con los pesos guardados con menos precisión para que ocupen menos, normalmente en la variante llamada Q4—, un modelo de 8B que en precisión completa ocuparía unos 16 GB se queda en unos 5. Esa es la razón de que esto funcione en un portátil normal.</p>

<figure>
<table>
    <thead>
        <tr><th>Memoria disponible</th><th>Tamaño de modelo</th><th>Para qué sirve en la práctica</th></tr>
    </thead>
    <tbody>
        <tr><td>8 GB RAM, sin gráfica</td><td>3B–4B</td><td>Comprobar que funciona. Lento y con errores frecuentes</td></tr>
        <tr><td>16 GB</td><td>8B</td><td>El primer punto usable: resumir, clasificar, reformular</td></tr>
        <tr><td>16 GB VRAM</td><td>14B, o 20B–24B cuantizado</td><td>Trabajo diario real sobre documentos</td></tr>
        <tr><td>24–32 GB VRAM o unificada</td><td>30B–32B</td><td>La zona buena: calidad suficiente para casi todo el trabajo de oficina</td></tr>
        <tr><td>48 GB o más</td><td>70B</td><td>Se acerca a la frontera de hace un año. Ya es inversión, no experimento</td></tr>
    </tbody>
</table>
</figure>

<p>Dos notas que ahorran dinero. La primera: <strong>los Mac con chip de la serie M rinden por encima de su precio</strong> en esta tarea concreta, porque la memoria es unificada y la gráfica puede usarla entera; un Mac de 32 GB mueve modelos que en un PC exigirían una tarjeta gráfica carísima. La segunda: no compres hardware para esto antes de haber probado un modelo de 8B en el equipo que ya tienes. Casi todo el mundo descubre en esa prueba que su caso de uso real era más modesto de lo que imaginaba.</p>

<h2 id="herramientas">Ollama o LM Studio: cuál de los dos</h2>

<p>Son las dos puertas de entrada, y la elección es más sencilla de lo que parece porque no compiten por el mismo usuario.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Ollama</th><th>LM Studio</th></tr>
    </thead>
    <tbody>
        <tr><td>Interfaz</td><td>Línea de comandos, con aplicación de escritorio añadida después</td><td>Aplicación gráfica desde el principio</td></tr>
        <tr><td>Fuerte en</td><td>Automatizar y conectar con otras herramientas</td><td>Probar modelos y comparar sin saber nada</td></tr>
        <tr><td>Servidor local</td><td>Sí, compatible con la API de OpenAI</td><td>Sí, compatible con la API de OpenAI</td></tr>
        <tr><td>Elígelo si</td><td>Vas a llamarlo desde scripts o desde otra aplicación</td><td>Quieres un chat privado y no quieres tocar un terminal</td></tr>
    </tbody>
</table>
</figure>

<p>Lo relevante de los dos es la última fila de la tabla anterior: ambos exponen un servidor local que habla el mismo idioma que la API de OpenAI. Eso significa que <strong>cualquier herramienta que sepa hablar con OpenAI puede apuntar a tu ordenador cambiando una URL</strong>, y es lo que convierte esto en algo más que un chat de juguete: el mismo script que hoy manda los datos a un proveedor puede mandarlos a <code>localhost</code> mañana, sin reescribirlo.</p>

<h2 id="modelos">Qué modelo elegir para cada trabajo</h2>

<p>El catálogo cambia cada pocas semanas y cualquier lista concreta caduca. Lo que no caduca es el criterio de elección, que tiene tres preguntas.</p>

<ol>
    <li><strong>¿Cuánta memoria tengo?</strong> Determina el tamaño máximo, y el tamaño manda sobre la marca. Un modelo de 14B de una familia mediocre suele batir a uno de 4B de la familia mejor valorada.</li>
    <li><strong>¿Necesito ventana de contexto larga?</strong> Si vas a meterle documentos enteros, el contexto es más importante que la inteligencia. Y ojo: la ventana de contexto consume memoria además del modelo, así que un modelo que cabía justo deja de caber al abrirle el contexto.</li>
    <li><strong>¿Es una tarea general o de código?</strong> Los modelos especializados en código rinden claramente mejor en su terreno y claramente peor fuera de él.</li>
</ol>

<p>Con eso, la regla práctica: <strong>el modelo más grande que quepa holgadamente, de una familia reciente y con la cuantización Q4</strong>. Familias como Qwen, Gemma, Mistral o los modelos abiertos de OpenAI cubren el espectro entero, y dentro de cada una la elección es de talla, no de fe.</p>

<p>Una advertencia sobre las comparativas: los rankings de modelos abiertos miden razonamiento y programación, que es lo que sabe medir un benchmark. Casi ninguno mide lo que a ti te va a importar, que es si escribe un español natural o si obedece instrucciones de formato sin desviarse. Pruébalo con tres tareas tuyas —de las que ya sabes la respuesta correcta— antes de adoptarlo.</p>

<h2 id="lo-que-pierdes">Lo que pierdes respecto a un modelo de frontera</h2>

<p>Esta sección es la que falta en casi todo lo que se escribe sobre IA local, y es la que evita la decepción.</p>

<ul>
    <li><strong>Obediencia a instrucciones complejas.</strong> Un prompt con siete condiciones lo cumple entero un modelo de frontera; un modelo de 8B cumple cinco y se olvida de dos, casi siempre las últimas.</li>
    <li><strong>Resistencia a la alucinación.</strong> Los modelos pequeños inventan más y con la misma seguridad. Todo lo de la guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a> aplica aquí multiplicado.</li>
    <li><strong>Contexto útil de verdad.</strong> Muchos anuncian ventanas enormes y se degradan mucho antes de llenarlas: la información del medio se pierde.</li>
    <li><strong>Herramientas alrededor.</strong> Búsqueda web, ejecución de código, lectura de PDF con tablas, memoria entre sesiones. En la nube viene incluido; en local lo montas tú o no lo tienes.</li>
    <li><strong>Velocidad.</strong> Con hardware doméstico se leen las respuestas a la velocidad a la que se generan. Para trabajo por lotes es irrelevante; para conversar, molesta.</li>
</ul>

<p>Dicho en una frase: <strong>un modelo local es un buen transformador de texto y un mal consejero</strong>. Encájalo donde su trabajo sea transformar.</p>

<h2 id="no-resuelve">Lo que la IA local no resuelve por sí sola</h2>

<p>Aquí está el error caro. Se instala un modelo local, se anuncia que ya se puede trabajar con datos de clientes y se da por resuelto el cumplimiento. No lo está, porque la transferencia a un tercero era una de las preguntas y no la única.</p>

<p>Lo que sigue exactamente igual que antes:</p>

<ul>
    <li><strong>Sigues tratando datos personales.</strong> Y por tanto sigues necesitando base jurídica, minimización, información a los interesados y plazos de conservación. La guía sobre <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> no queda derogada por instalar Ollama.</li>
    <li><strong>El portátil es ahora el punto débil.</strong> Si el disco no está cifrado y el equipo se pierde, has cambiado un riesgo de transferencia por un riesgo de pérdida, que es más probable.</li>
    <li><strong>Los prompts y las respuestas se guardan en algún sitio.</strong> Por defecto, en el perfil del usuario, sin control de acceso y fuera de cualquier copia de seguridad corporativa.</li>
    <li><strong>El Reglamento de IA no distingue por dónde se ejecuta.</strong> Las obligaciones de alfabetización del artículo 4 y de transparencia del artículo 50 aplican igual, como detalla la guía del <a href="/guias/ai-act-obligaciones-empresas">AI Act para empresas</a>.</li>
    <li><strong>Aparece un riesgo nuevo: nadie lo mantiene.</strong> Un modelo instalado hace ocho meses sigue respondiendo con aplomo y nadie revisa si sigue siendo el adecuado.</li>
</ul>

<p>La conclusión no es que no valga la pena; es que <strong>la IA local cambia el mapa de riesgos en lugar de vaciarlo</strong>, y quien la despliega tiene que redibujar el mapa. Si tu empresa tiene una <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>, los modelos locales necesitan su párrafo: quién puede instalarlos, en qué equipos, con qué cifrado y quién revisa la lista.</p>

<h2 id="montarlo">Montarlo en media hora</h2>

<p>El camino corto para salir de la teoría hoy mismo, con el equipo que ya tienes.</p>

<ol>
    <li><strong>Instala Ollama o LM Studio</strong> y descarga un modelo de 8B en Q4. Son unos 5 GB.</li>
    <li><strong>Comprueba que cabe.</strong> Mira la memoria mientras responde. Si el sistema empieza a tirar de disco, baja de talla; no hay ajuste que arregle eso.</li>
    <li><strong>Pásale tres tareas cuya respuesta ya conoces.</strong> Reales, de tu trabajo, no acertijos. Es la única prueba que importa.</li>
    <li><strong>Cifra el disco antes de meter nada real.</strong> BitLocker o FileVault, activado y verificado. Este paso no es opcional y es el que más se salta.</li>
    <li><strong>Decide dónde se guarda el historial</strong> y si ese sitio entra en las copias de seguridad y en las políticas de retención.</li>
    <li><strong>Apunta la fecha y el modelo</strong> en la tabla de sistemas de IA de la empresa. Un modelo local no inventariado es exactamente el tipo de herramienta que aparece en una auditoría y no en el inventario.</li>
</ol>

<p>Un prompt de arranque que funciona bien con modelos pequeños, porque acota mucho y no les pide criterio:</p>

<pre><code>Trabaja solo con el texto que te doy debajo. No añadas
información que no esté ahí. Si algo no aparece, escribe
"no consta" en lugar de completarlo.

Devuélveme, en este orden y sin comentarios adicionales:
1. Un resumen de tres frases
2. Las fechas y los importes que aparezcan, con la frase
   exacta de la que sale cada uno
3. Lo que quede ambiguo o incompleto

TEXTO:
[...]</code></pre>

<p>La instrucción de pedir la frase exacta de la que sale cada dato es la que más rendimiento da en local: obliga al modelo a anclarse en el texto y te deja comprobar el resultado sin releerlo entero.</p>

<h2 id="cuando-no">Cuándo no es la respuesta</h2>

<p>Tres casos en los que montar esto es trabajo perdido.</p>

<p><strong>Cuando el motivo real era el precio.</strong> Ahorrarse veinte euros al mes con dos días de configuración y un mantenimiento indefinido no es un ahorro. La IA local se justifica por confidencialidad, por volumen o por trabajo sin conexión, no por el recibo.</p>

<p><strong>Cuando el problema era de permisos internos y no de tecnología.</strong> Si el departamento legal ha bloqueado las herramientas de IA sin distinguir entre usos, instalar un modelo en local para esquivar la prohibición crea un problema mayor que el que resuelve. Eso es <em>shadow IT</em> con otro nombre.</p>

<p><strong>Cuando el trabajo se juzga por su calidad final.</strong> Una propuesta a cliente, un informe con firma o un análisis del que dependa una decisión sobre dinero merecen el mejor modelo disponible, y ese no está en tu portátil.</p>

<p>Con todo, hay una razón para probarlo que no aparece en ninguna comparativa: <strong>ejecutar un modelo en tu propia máquina es lo que deshace la magia</strong>. Al ver los gigabytes en el disco, la memoria llenándose y las palabras saliendo a la velocidad a la que la máquina puede calcularlas, uno deja de tratar la herramienta como un oráculo y empieza a tratarla como lo que es. Ese cambio de percepción vale la tarde que cuesta, incluso si acabas volviendo a la suscripción de siempre.</p>
HTML,
];
