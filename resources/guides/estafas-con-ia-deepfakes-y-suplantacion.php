<?php

return [
    'title' => 'Estafas con IA en el trabajo: deepfakes de voz y fraude del CEO',
    'navTitle' => 'Estafas con IA en el trabajo',
    'seoTitle' => 'Estafas con IA: deepfakes de voz y fraude del CEO',
    'description' => 'Cómo funcionan las estafas que clonan voces y caras de directivos, por qué los protocolos de verificación clásicos ya no sirven y qué poner en su lugar.',
    'excerpt' => 'Tres segundos de audio bastan para clonar una voz, y la videollamada dejó de ser prueba de nada. Cómo son estos fraudes por dentro, por qué los empleados que caen suelen estar siguiendo el protocolo, y el procedimiento de verificación que sí aguanta.',
    'category' => 'Práctica',
    'published' => '2026-09-17',
    'updated' => '2026-09-17',
    'readingMinutes' => 11,
    'words' => 1800,
    'about' => 'Fraude mediante suplantación de identidad con inteligencia artificial generativa',
    'related' => ['usar-ia-sin-filtrar-datos-de-clientes', 'politica-de-uso-de-ia-en-la-empresa', 'se-nota-si-un-texto-lo-escribe-una-ia'],
    'toc' => [
        'que-cambio' => 'Qué cambió exactamente',
        'anatomia' => 'Anatomía de un fraude del CEO moderno',
        'por-que-cae' => 'Por qué cae gente que hace bien su trabajo',
        'senales' => 'Señales que siguen funcionando (y las que ya no)',
        'protocolo' => 'El protocolo que sí aguanta',
        'personal' => 'La versión doméstica: la llamada del familiar',
        'si-ocurre' => 'Qué hacer en la primera hora',
    ],
    'faq' => [
        '¿Cuánto audio hace falta para clonar una voz?' => 'Muy poco. Las herramientas de clonación disponibles hoy reconstruyen tono, timbre, cadencia y muletillas a partir de clips de apenas unos segundos, y muchas son gratuitas. Eso significa que cualquiera con un vídeo tuyo en LinkedIn, una nota de voz reenviada, una intervención en un pódcast o un mensaje de tu contestador tiene material suficiente. No hace falta ser una persona pública.',
        '¿Se puede detectar un deepfake a simple vista?' => 'Cada vez menos, y apoyar el procedimiento en eso es el error de fondo. En 2024 quedaban pistas visibles —parpadeo raro, bordes del pelo, desincronización labial— pero cada generación de modelos borra unas cuantas. Lo que no cambia es el contexto: la urgencia, la confidencialidad, la cuenta nueva y la petición de saltarse un paso. Ahí es donde hay que mirar, no en los píxeles.',
        '¿Qué es el fraude del CEO?' => 'Un fraude en el que alguien se hace pasar por un directivo con autoridad para ordenar un pago urgente y confidencial, normalmente a una cuenta nueva y con una excusa que desalienta preguntar: una adquisición secreta, una inspección, una multa. Existía mucho antes de la IA y se hacía por correo. Lo que ha cambiado es que ahora el atacante puede poner voz y cara, que es justo lo que se usaba para desmentirlo.',
        '¿Sirve de algo tener una palabra clave con el equipo?' => 'Sirve, y es de lo más barato que se puede implantar, pero no como pieza única. Una palabra acordada de antemano y nunca escrita en canales digitales resuelve bien el caso de la llamada inesperada. El problema es que se comparte, se olvida y no escala a una empresa de doscientas personas. Para pagos, el control que de verdad aguanta es la devolución de llamada al número del directorio interno más la doble autorización.',
        '¿Esto solo afecta a empresas grandes?' => 'No. Las cifras grandes salen en prensa porque son grandes, pero el volumen está en operaciones de cuatro y cinco cifras contra pymes y despachos, donde no hay departamento financiero con controles separados y donde una sola persona puede autorizar una transferencia. El atacante busca ese punto: alguien con acceso al banco y sin nadie a quien preguntar.',
        '¿Dónde se denuncia en España?' => 'El INCIBE atiende de forma gratuita a través de su línea de ayuda en ciberseguridad, orienta sobre los pasos y publica casos reales anonimizados que valen como material de formación. La denuncia formal se presenta ante Policía Nacional o Guardia Civil. Si ha salido dinero, lo primero no es denunciar, es llamar al banco para intentar la retrocesión: ahí las horas cuentan.',
    ],
    'ctaTitle' => 'Convierte esto en un procedimiento, no en un aviso',
    'ctaBody' => 'Un correo de advertencia se olvida en dos semanas; un procedimiento escrito, no. En el catálogo hay skills para redactar protocolos y comunicaciones internas en <a href="/profesiones/finanzas">Finanzas</a>, <a href="/profesiones/legal">Legal</a> y <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>En enero de 2024, un empleado del área financiera de la ingeniería Arup, en Hong Kong, recibió un correo extraño sobre una transacción confidencial. Sospechó. Hizo lo correcto: pidió una videollamada para confirmarlo. Se conectó, vio y oyó al director financiero y a varios compañeros que conocía, y autorizó las transferencias. Quince operaciones, unos 25 millones de dólares, un solo día.</p>

<p>Todos los participantes de aquella videollamada eran generados por ordenador. Y el detalle importante no es el importe: es que <strong>el empleado no se saltó el protocolo, lo siguió</strong>. El protocolo asumía que una videollamada demuestra que hay una persona al otro lado. Eso dejó de ser cierto.</p>

<h2 id="que-cambio">Qué cambió exactamente</h2>

<p>El fraude del CEO y la factura falsa llevan décadas funcionando por correo. Durante todo ese tiempo, la defensa recomendada fue siempre la misma: ante la duda, llama o pide una videollamada. Funcionaba porque falsificar una voz o una cara en directo era caro y difícil.</p>

<p>Ya no lo es. La clonación de voz reconstruye tono, timbre, cadencia y hasta las muletillas de una persona a partir de unos pocos segundos de audio, con herramientas al alcance de cualquiera —las mismas que se usan de forma legítima para <a href="/guias/video-y-audio-con-ia-en-el-trabajo">doblar vídeos corporativos</a>—. El vídeo va un paso por detrás pero va. En España, los operadores bloquean cada año cientos de millones de llamadas fraudulentas, y las autoridades llevan varios trimestres señalando el crecimiento de las denuncias por suplantación con medios biométricos.</p>

<p>La consecuencia práctica cabe en una frase: <strong>ver y oír a alguien ha dejado de ser una forma de verificar quién es</strong>. Todo procedimiento interno que dependa de eso está roto y hay que reescribirlo.</p>

<h2 id="anatomia">Anatomía de un fraude del CEO moderno</h2>

<p>Casi siempre siguen el mismo guion de cinco actos. Reconocerlo por la estructura es mucho más fiable que intentar detectar el deepfake:</p>

<figure>
<table>
    <thead>
        <tr><th>Fase</th><th>Qué hace el atacante</th><th>De dónde saca el material</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>1. Reconocimiento</strong></td><td>Identifica quién puede ordenar un pago y quién lo ejecuta</td><td>LinkedIn, la web corporativa, notas de prensa, el organigrama que alguien publicó</td></tr>
        <tr><td><strong>2. Captura de voz y cara</strong></td><td>Reúne muestras del directivo a suplantar</td><td>Webinars, entrevistas, vídeos corporativos, pódcast, redes</td></tr>
        <tr><td><strong>3. Primer contacto</strong></td><td>Correo o mensaje que introduce una operación confidencial y urgente</td><td>Dominio parecido al real, o una cuenta comprometida de verdad</td></tr>
        <tr><td><strong>4. Verificación falsa</strong></td><td>Llamada o videollamada que «confirma» lo anterior</td><td>Voz clonada, vídeo sintético, a veces varios participantes</td></tr>
        <tr><td><strong>5. Presión y ejecución</strong></td><td>Plazo corto, prohibición de comentarlo, cuenta nueva</td><td>Casi siempre fuera del horario habitual o en vísperas de festivo</td></tr>
    </tbody>
</table>
</figure>

<p>Fíjate en la fase 4: es un añadido reciente y es precisamente el paso que tu procedimiento antifraude recomendaba dar. El atacante no ha roto el control; lo ha convertido en parte del engaño.</p>

<h2 id="por-que-cae">Por qué cae gente que hace bien su trabajo</h2>

<p>La lectura fácil —«no estaba atento»— es cómoda y falsa. Los que caen suelen ser personas competentes bajo tres presiones simultáneas:</p>

<ul>
    <li><strong>Autoridad.</strong> Quien pide es, aparentemente, quien firma tu evaluación. Decirle a tu director financiero «no me fío, voy a comprobarlo» tiene un coste social real, y el fraude está diseñado justo sobre ese coste.</li>
    <li><strong>Confidencialidad.</strong> «No lo comentes con nadie hasta que se anuncie» desactiva el único control que de verdad funciona, que es preguntar al de al lado.</li>
    <li><strong>Urgencia.</strong> El plazo corto impide el paso lento —llamar, esperar, confirmar— que habría deshecho el engaño.</li>
</ul>

<p>De ahí se deduce lo que hay que arreglar, y no es la atención de las personas: <strong>hay que quitarle a la víctima la responsabilidad de decidir</strong>. Mientras verificar dependa de que alguien se atreva, el fraude seguirá funcionando.</p>

<h2 id="senales">Señales que siguen funcionando (y las que ya no)</h2>

<figure>
<table>
    <thead>
        <tr><th>Señal</th><th>¿Sirve hoy?</th><th>Por qué</th></tr>
    </thead>
    <tbody>
        <tr><td>Parpadeo raro, bordes del pelo, manos extrañas</td><td>Cada vez menos</td><td>Es exactamente lo que cada nueva generación de modelos corrige</td></tr>
        <tr><td>Voz un poco metálica o plana</td><td>Poco fiable</td><td>Una llamada de móvil con mala cobertura suena igual de rara</td></tr>
        <tr><td>Faltas de ortografía en el correo</td><td>Ya no</td><td>La misma IA redacta correos impecables en cualquier idioma</td></tr>
        <tr><td><strong>Cuenta bancaria nueva o en otro país</strong></td><td><strong>Sí</strong></td><td>El dinero tiene que acabar en algún sitio y ese sitio es nuevo</td></tr>
        <tr><td><strong>Prohibición de comentarlo con nadie</strong></td><td><strong>Sí</strong></td><td>Ninguna operación legítima necesita que rompas la cadena de mando</td></tr>
        <tr><td><strong>Prisa desproporcionada</strong></td><td><strong>Sí</strong></td><td>Las operaciones reales soportan veinte minutos de comprobación</td></tr>
        <tr><td><strong>Cambio de canal habitual</strong></td><td><strong>Sí</strong></td><td>El director que nunca usa WhatsApp para esto, hoy lo usa</td></tr>
        <tr><td><strong>Se salta un paso del procedimiento</strong></td><td><strong>Sí</strong></td><td>Es el objetivo del ataque, siempre</td></tr>
    </tbody>
</table>
</figure>

<p>Las cuatro señales que aguantan tienen algo en común: <strong>ninguna depende de detectar la falsificación</strong>. Son propiedades de la petición, no del medio. Por eso no envejecen con los modelos.</p>

<h2 id="protocolo">El protocolo que sí aguanta</h2>

<p>Cuatro reglas. Se escriben en media página y se explican en diez minutos:</p>

<ol>
    <li><strong>Devolución de llamada al número del directorio interno.</strong> Nunca al número desde el que te llaman, ni al que aparece en el correo, ni al del pie de firma. Cuelgas y llamas tú al número que ya tenías guardado. Un atacante puede falsificar la voz; no puede contestar en el móvil de tu director financiero.</li>
    <li><strong>Doble autorización para cualquier pago fuera de lo rutinario.</strong> Dos personas, dos canales, y la segunda no se entera por la primera. Es el control que convierte un fraude en dos fraudes simultáneos, y eso multiplica la dificultad.</li>
    <li><strong>Periodo de enfriamiento para cuentas nuevas.</strong> Un alta de beneficiario o un cambio de IBAN no se ejecuta el mismo día, se confirma por un canal independiente con el proveedor. Casi todo el fraude de factura falsa muere aquí.</li>
    <li><strong>Permiso explícito para dudar.</strong> Escrito, firmado por dirección y repetido en voz alta: <em>nadie será penalizado por verificar una orden de pago, aunque venga del consejero delegado y aunque resulte ser legítima</em>. Sin esta regla, las otras tres se saltan por educación.</li>
</ol>

<p>Para equipos pequeños funciona además una <strong>palabra acordada</strong>: una frase que solo conocen las personas con acceso al banco, pactada en persona y nunca escrita en un chat ni en un correo. Barata, eficaz y con fecha de caducidad: hay que cambiarla cuando alguien entra o sale.</p>

<p>Conviene además que la formación interna use casos reales y no avisos genéricos: el INCIBE publica casos anonimizados que sirven tal cual, y el resto de patrones de uso indebido está en <a href="/guias/errores-al-usar-ia-en-el-trabajo">los ocho errores que se repiten al usar IA en el trabajo</a>.</p>

<p>Lo lógico es que todo esto no viva en un correo suelto, sino dentro de la <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA de la empresa</a>, junto al resto de normas que la gente sí acaba consultando, y en coherencia con las obligaciones que ya te aplican por <a href="/guias/ai-act-obligaciones-empresas">el Reglamento europeo de IA</a>.</p>

<h2 id="personal">La versión doméstica: la llamada del familiar</h2>

<p>El mismo ataque, sin empresa de por medio, es hoy más frecuente que el corporativo: una llamada con la voz de un hijo, un nieto o un hermano que ha tenido un accidente, ha perdido el móvil o está detenido, y necesita dinero ya. La emoción hace el trabajo que en la empresa hacen la autoridad y la urgencia.</p>

<p>Las contramedidas son igual de sencillas y conviene contárselas a las personas mayores de la familia:</p>

<ul>
    <li><strong>Cuelga y llama tú al número de siempre.</strong> Aunque el que llama insista en que no puede colgar. Especialmente si insiste en eso.</li>
    <li><strong>Pregunta algo que solo esa persona sepa</strong> y que no esté en ninguna red social. Dónde comisteis el domingo, cómo se llamaba el perro.</li>
    <li><strong>Acordad una palabra en familia.</strong> Suena a juego y funciona.</li>
    <li><strong>Desconfía de la urgencia por sistema.</strong> Ninguna emergencia real empeora por dos minutos de comprobación.</li>
</ul>

<h2 id="si-ocurre">Qué hacer en la primera hora</h2>

<p>Si ya ha salido el dinero, el orden importa más que la calma:</p>

<ol>
    <li><strong>Llama al banco inmediatamente</strong> y pide la retrocesión de la transferencia. Es lo único que depende del reloj: en las primeras horas hay opciones reales de recuperar fondos que después desaparecen.</li>
    <li><strong>No borres nada.</strong> Correos, registros de llamada, grabaciones, capturas, cabeceras. Aunque dé vergüenza, es la prueba.</li>
    <li><strong>Avisa internamente a quien corresponda</strong> —dirección, finanzas y quien lleve sistemas— y comprueba si la cuenta de correo del suplantado está comprometida, porque muchas veces lo está.</li>
    <li><strong>Denuncia ante Policía Nacional o Guardia Civil</strong> y apóyate en la línea de ayuda gratuita del INCIBE para los pasos.</li>
    <li><strong>Valora si hubo brecha de datos personales.</strong> Si el atacante accedió a un buzón con datos de clientes o empleados, se activa el régimen de notificación del RGPD y sus plazos. Esa parte la detalla <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">la guía sobre datos de clientes</a>.</li>
</ol>

<p>Y una última cosa, la que más cuesta: <strong>cuéntalo dentro de la empresa</strong>. El silencio por vergüenza es el mejor aliado del siguiente intento, que suele llegar a otro departamento pocas semanas después, con el mismo guion y el mismo dominio parecido.</p>
HTML,
];
