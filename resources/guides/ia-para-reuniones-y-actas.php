<?php

return [
    'title' => 'IA para reuniones: de la transcripción al acta que alguien lee',
    'navTitle' => 'IA para reuniones',
    'seoTitle' => 'IA para reuniones: transcribir, resumir y sacar las tareas',
    'description' => 'Transcribir una reunión ya es un problema resuelto. Resumirla bien, no. Qué herramienta elegir, qué pedirle al resumen y qué hay que avisar antes de grabar.',
    'excerpt' => 'El resumen automático que llega a tu correo lo lee poca gente, porque cuenta lo que se dijo en vez de lo que se decidió. La diferencia está en lo que le pides después, y en avisar antes de grabar.',
    'category' => 'Práctica',
    'published' => '2026-09-02',
    'updated' => '2026-09-02',
    'readingMinutes' => 10,
    'words' => 1720,
    'about' => 'Automatización de actas y resúmenes de reuniones con IA',
    'related' => ['automatizar-tareas-con-ia-en-el-trabajo', 'usar-ia-sin-filtrar-datos-de-clientes', 'ai-act-obligaciones-empresas'],
    'toc' => [
        'que-esta-resuelto' => 'Lo que está resuelto y lo que no',
        'tipos' => 'Tres formas de grabar, con tres consecuencias distintas',
        'avisar' => 'Antes de grabar: qué hay que avisar y a quién',
        'acta' => 'El acta útil tiene cuatro bloques',
        'prompt' => 'El prompt que convierte una transcripción en un acta',
        'sin-decidir' => 'La pregunta que nadie hace: qué quedó sin decidir',
        'donde-falla' => 'Dónde falla la transcripción y cómo se nota',
        'responsable' => 'El acta sigue teniendo un dueño humano',
    ],
    'faq' => [
        '¿Cuál es la mejor herramienta de IA para transcribir reuniones?' => 'Depende de dónde vivan tus reuniones más que de la calidad de la transcripción, que hoy es buena en casi todas. Si tu empresa está en Microsoft 365 y las reuniones son en Teams, Copilot es la opción con menos fricción porque no mete un invitado extra ni saca el audio del entorno donde ya están los datos. Lo mismo con Gemini si vives en Google Workspace y Meet. Las herramientas dedicadas —Fireflies, Otter, tl;dv, Fathom— aportan cuando necesitas buscar en el histórico de todas las reuniones o integrar con el CRM, y tienen a cambio el coste de que el audio viaja a un tercero que hay que valorar.',
        '¿Es legal grabar una reunión de trabajo para transcribirla con IA?' => 'Grabar una conversación en la que tú participas no es delito en España, pero eso no es la pregunta relevante. Cuando la empresa graba, transcribe y almacena la reunión, está tratando datos personales de los asistentes y necesita una base jurídica, informar a los participantes y una política de conservación. Lo práctico: avisar al principio de cada reunión, tener el aviso también por escrito en la convocatoria, y no grabar reuniones de evaluación de desempeño, disciplinarias o de negociación laboral sin pasar por asesoría. Con clientes o candidatos externos, pide su conformidad de forma explícita.',
        '¿Hay que avisar de que el asistente de IA está en la reunión?' => 'Sí, y desde agosto de 2026 hay además un argumento normativo: el artículo 50 del Reglamento Europeo de IA obliga a informar cuando una persona interactúa con un sistema de IA, salvo que sea evidente. Un bot que aparece en la lista de asistentes con un nombre propio no es evidente para nadie. Al margen de la norma, es lo que evita el problema real: la gente que descubre a mitad de reunión que se está grabando deja de decir cosas útiles, y el acta empeora.',
        '¿Por qué el resumen automático no sirve para nada?' => 'Porque resume la conversación en lugar de extraer la decisión. Te devuelve «el equipo debatió las opciones de precio y valoró distintos enfoques», que es cierto y es inútil: no dice qué se eligió, quién lo hace ni para cuándo. La transcripción contiene esa información; el resumen por defecto la diluye porque está optimizado para describir la reunión, no para que alguien actúe. Se arregla pidiendo el acta con una estructura fija en lugar de aceptar el resumen que llega solo.',
        '¿Puedo pegar la transcripción en ChatGPT para sacar el acta?' => 'Solo si la herramienta está aprobada por tu empresa para eso y la reunión no contiene datos que no deban salir. Una transcripción es uno de los documentos más sensibles que genera una empresa: lleva nombres de clientes, cifras, opiniones sobre personas y todo lo que se dice cuando nadie está redactando con cuidado. Si el asistente que grabó ya vive dentro de tu entorno, saca el acta ahí. Si vas a llevarla a otro sitio, quita antes los nombres de terceros y las cifras que no necesitas para el resumen.',
        '¿Cuánto tiempo hay que guardar las grabaciones?' => 'El menos posible, y decidido de antemano. La grabación en bruto casi nunca hace falta una vez tienes el acta aprobada: fija un plazo corto —dos o cuatro semanas— para el audio y la transcripción completa, y conserva solo el acta, que es el documento con valor. El problema de dejarlo por defecto es que las plataformas guardan indefinidamente, y a los dos años tienes un archivo con miles de conversaciones sobre personas que nadie puede justificar si alguien pregunta.',
    ],
    'ctaTitle' => 'Prompts de reunión que ya usa gente',
    'ctaBody' => 'El acta, el seguimiento y el correo posterior son tareas repetidas, y por tanto candidatas a tener un prompt fijo. Hay material votado por quien lo usa en <a href="/profesiones/product-management">Product Management</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>Casi todo el mundo que ha probado un asistente de reuniones ha pasado por la misma secuencia: asombro las dos primeras semanas, y luego una carpeta de correos sin abrir con resúmenes que nadie lee. La transcripción funciona. El resumen, no tanto. Y el motivo es concreto y arreglable.</p>

<h2 id="que-esta-resuelto">Lo que está resuelto y lo que no</h2>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>Estado</th></tr>
    </thead>
    <tbody>
        <tr><td>Transcribir español conversacional</td><td><strong>Resuelto.</strong> Cualquier herramienta actual sirve</td></tr>
        <tr><td>Distinguir quién habla</td><td>Bien en llamadas con auriculares, mal en una sala con micro compartido</td></tr>
        <tr><td>Resumir de qué se habló</td><td>Resuelto y poco útil</td></tr>
        <tr><td>Extraer decisiones, dueño y plazo</td><td><strong>Requiere que se lo pidas.</strong> Es donde está todo el valor</td></tr>
        <tr><td>Detectar lo que quedó sin cerrar</td><td>Casi ninguna herramienta lo hace por defecto</td></tr>
    </tbody>
</table>
</figure>

<p>La conclusión práctica es que el trabajo de elegir herramienta importa mucho menos de lo que parece, y el de decidir qué le pides después importa mucho más. Un resumen genérico dice «el equipo debatió las opciones de precio y valoró distintos enfoques». Es verdad y no sirve: no dice qué se eligió, quién lo hace ni cuándo. La información estaba en la transcripción; el resumen la diluyó porque está optimizado para describir la reunión, no para que alguien actúe al leerlo.</p>

<h2 id="tipos">Tres formas de grabar, con tres consecuencias distintas</h2>

<figure>
<table>
    <thead>
        <tr><th>Vía</th><th>Cómo funciona</th><th>Dónde va el audio</th><th>Cuándo elegirla</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Nativa de la plataforma</strong><br>(Copilot en Teams, Gemini en Meet, Zoom AI Companion)</td><td>Se activa la transcripción de la propia reunión</td><td>Se queda en el entorno que ya tienes contratado</td><td>Por defecto, si ya pagas la suite. Menos fricción y ningún tercero nuevo</td></tr>
        <tr><td><strong>Bot dedicado</strong><br>(Fireflies, Otter, tl;dv, Fathom)</td><td>Un invitado entra en la llamada y graba</td><td>A la nube del proveedor</td><td>Cuando necesitas buscar en el histórico de todas las reuniones o volcar al CRM</td></tr>
        <tr><td><strong>Grabación propia + transcripción aparte</strong></td><td>Grabas y procesas tú el fichero</td><td>Donde tú decidas</td><td>Reuniones sensibles: comités, legal, negociación</td></tr>
    </tbody>
</table>
</figure>

<p>La decisión no es de calidad, es de a quién le estás dando el audio. Una transcripción de reunión es uno de los documentos más sensibles que produce una empresa: lleva nombres de clientes, cifras, y opiniones sobre personas dichas sin el cuidado con el que se escribiría un correo. Antes de aprobar un bot dedicado, mira dónde procesa los datos, cuánto los conserva y si los usa para entrenar. Es el mismo criterio de la <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">guía sobre usar IA sin filtrar datos de clientes</a>, aplicado al canal más descuidado.</p>

<p>Hay además un efecto de segundo orden del bot dedicado que casi nadie anticipa: aparece un invitado con nombre propio en la lista de asistentes, y cuando la reunión es con un cliente, toca explicarlo. Con la vía nativa el aviso es más natural porque forma parte de la plataforma que el cliente ya esperaba.</p>

<h2 id="avisar">Antes de grabar: qué hay que avisar y a quién</h2>

<p>Grabar una conversación en la que participas no es delito en España. Pero esa no es la pregunta: cuando <strong>la empresa</strong> graba, transcribe y almacena, está tratando datos personales de los asistentes y eso necesita base jurídica, información previa y un plazo de conservación.</p>

<p>Lo mínimo razonable, sin convertirlo en un proyecto:</p>

<ul>
    <li><strong>Un aviso en la convocatoria</strong> cuando la reunión se va a grabar. Una línea basta, y deja rastro escrito.</li>
    <li><strong>Un aviso verbal al empezar</strong>, siempre, aunque el bot ya esté en la lista. Desde agosto de 2026 el artículo 50 del Reglamento Europeo de IA obliga además a informar cuando alguien interactúa con un sistema de IA salvo que sea evidente, y un invitado llamado «Notetaker» no es evidente para nadie. Está en la <a href="/guias/ai-act-obligaciones-empresas">guía del AI Act para empresas</a>.</li>
    <li><strong>Conformidad explícita con externos.</strong> Clientes, candidatos, proveedores. Preguntar y esperar la respuesta, no anunciar.</li>
    <li><strong>Un plazo de borrado decidido de antemano.</strong> Dos o cuatro semanas para audio y transcripción completa; el acta se conserva. Lo que no se decide se queda para siempre, y a los dos años tienes miles de conversaciones sobre personas que nadie puede justificar.</li>
    <li><strong>Tres tipos de reunión que no se graban</strong> sin pasar por asesoría: evaluación de desempeño, procedimiento disciplinario y negociación con la representación laboral.</li>
</ul>

<p>El motivo de avisar bien no es solo normativo. Cuando alguien descubre a mitad de reunión que se está grabando, deja de decir lo que iba a decir, y el acta que sale de ahí es peor. El aviso al principio protege la calidad de la reunión, además de cubrirte.</p>

<h2 id="acta">El acta útil tiene cuatro bloques</h2>

<p>Un acta que la gente lee no es un resumen más corto: es una estructura distinta. Cuatro bloques, en este orden:</p>

<ol>
    <li><strong>Decisiones.</strong> Qué se decidió, en una frase por decisión. No qué se debatió.</li>
    <li><strong>Tareas.</strong> Qué hay que hacer, quién y para cuándo. Una tarea sin nombre propio no es una tarea.</li>
    <li><strong>Abierto.</strong> Lo que se discutió y no se cerró, con qué hace falta para cerrarlo.</li>
    <li><strong>Contexto.</strong> El resto, para quien no estuvo. Al final, porque es lo que menos se lee.</li>
</ol>

<p>El orden importa: lo accionable arriba, la narración abajo. Los resúmenes automáticos hacen justo lo contrario y ahí se pierden.</p>

<h2 id="prompt">El prompt que convierte una transcripción en un acta</h2>

<pre><code>A partir de esta transcripción, redacta el acta con esta estructura
exacta y nada más:

DECISIONES: una línea por decisión tomada. Solo lo que se cerró.
TAREAS: tabla con tarea | responsable (nombre) | fecha comprometida.
ABIERTO: temas discutidos sin cerrar y qué falta para cerrarlos.
CONTEXTO: máximo 5 líneas para quien no asistió.

Reglas:
- Si una tarea no tiene responsable o fecha explícitos en la
  transcripción, escribe "sin asignar" o "sin fecha". No lo deduzcas.
- Para cada decisión, añade entre corchetes la cita literal de la
  transcripción donde se toma.
- Si algo parece una decisión pero no se confirmó, va en ABIERTO.
- No inventes cifras. Si se menciona un número sin quedar claro,
  escríbelo con "(por confirmar)".

Transcripción:
[pega aquí]</code></pre>

<p>Las cuatro reglas del final son las que hacen el trabajo. La del <strong>«sin asignar»</strong> es la más importante: sin ella, el modelo reparte responsables por verosimilitud —le asigna la tarea a quien más habló del tema— y acabas con un acta que atribuye compromisos que nadie asumió. Es el fallo más caro de todos, porque nadie lo detecta hasta que llega la fecha.</p>

<p>La de <strong>la cita literal entre corchetes</strong> convierte el acta en algo verificable: puedes comprobar cinco decisiones en un minuto buscando las citas, en vez de releer la transcripción entera. Y tiene un efecto lateral útil: cuando el modelo no encuentra una cita clara, se le nota, porque la que pone no dice lo que él resumió.</p>

<h2 id="sin-decidir">La pregunta que nadie hace: qué quedó sin decidir</h2>

<p>Todas las herramientas resumen lo que pasó. Casi ninguna te dice lo que <em>no</em> pasó, que suele ser la información más valiosa de la reunión. Una segunda pasada sobre la misma transcripción, con este prompt corto:</p>

<pre><code>Sobre la misma transcripción, responde a tres preguntas:
1. ¿Qué temas se plantearon y se abandonaron sin conclusión?
2. ¿Qué desacuerdos entre asistentes quedaron sin resolver?
3. ¿Qué compromisos se enunciaron en condicional o sin fecha?
Cita la parte de la transcripción en cada caso.</code></pre>

<p>Esto es lo que un buen secretario de reunión hace y un resumen automático no: señalar los cabos. La respuesta a la tercera pregunta, en particular, predice bastante bien qué habrá que volver a hablar en la reunión siguiente.</p>

<h2 id="donde-falla">Dónde falla la transcripción y cómo se nota</h2>

<ul>
    <li><strong>Sala con micrófono compartido.</strong> Es el peor escenario y el más común. La atribución de intervenciones se mezcla y las tareas se asignan mal. Si la reunión importa, que cada persona entre con su equipo y sus auriculares aunque estéis en la misma sala.</li>
    <li><strong>Nombres propios y jerga interna.</strong> Los nombres de vuestros productos y de vuestros clientes salen mal transcritos, y con ellos las decisiones que los mencionan. Casi todas las herramientas permiten cargar un vocabulario personalizado: hacerlo una vez arregla esto para siempre.</li>
    <li><strong>La ironía y el «bueno, ya veremos».</strong> El modelo lee el «sí, claro, lo hacemos mañana» sarcástico como un compromiso con fecha. Es una de las razones para exigir la cita literal.</li>
    <li><strong>Decisiones implícitas.</strong> «Pues eso» y nadie objeta. Un humano entiende que se aprobó; la transcripción no registra el silencio ni los gestos. Estas decisiones se pierden siempre, y es un buen argumento para cerrar en voz alta lo que se decide.</li>
</ul>

<h2 id="responsable">El acta sigue teniendo un dueño humano</h2>

<p>El error de organización más frecuente es tratar el acta automática como un documento que no requiere aprobación. Si nadie la firma, nadie la corrige, y una tarea mal atribuida se convierte en un malentendido de dos semanas.</p>

<p>La rutina que funciona cabe en tres pasos: alguien que estuvo en la reunión repasa los bloques de decisiones y tareas —dos minutos, con las citas es rápido—, corrige lo que haga falta, y lo envía él. El acta la manda una persona, no un bot. Eso es lo que hace que la gente la lea y que las correcciones lleguen.</p>

<p>Bien montado, el ahorro es de los más claros que hay con IA: quince o veinte minutos por reunión de redacción que desaparecen casi enteros, sobre una tarea que se repite varias veces por semana. Es justo el perfil de tarea que merece la pena medir en serio, con línea base y todo, como está explicado en la <a href="/guias/medir-si-la-ia-ahorra-tiempo">guía para medir si la IA ahorra tiempo</a>.</p>
HTML,
];
