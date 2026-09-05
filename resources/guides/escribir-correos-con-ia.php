<?php

return [
    'title' => 'Escribir correos con IA sin que se note el molde',
    'navTitle' => 'Escribir correos con IA',
    'seoTitle' => 'Escribir correos con IA: prompts, tono y errores',
    'description' => 'El correo generado se reconoce por el ritmo, no por las palabras. Qué contexto hace falta, seis prompts por tipo de mensaje y los envíos que no delegues.',
    'excerpt' => 'Casi nadie detecta un correo escrito con IA por su vocabulario. Lo detecta porque todos los párrafos miden lo mismo, porque abre agradeciendo algo que nadie hizo y porque cierra ofreciendo una disponibilidad que no existe.',
    'category' => 'Práctica',
    'published' => '2026-09-05',
    'updated' => '2026-09-05',
    'readingMinutes' => 10,
    'words' => 1977,
    'about' => 'Redacción de correo electrónico profesional asistida por modelos de lenguaje',
    'related' => ['como-escribir-prompts-efectivos', 'se-nota-si-un-texto-lo-escribe-una-ia', 'prompts-de-ia-por-profesion'],
    'toc' => [
        'por-que-se-nota' => 'Por qué se nota, y no es por las palabras',
        'contexto' => 'Las cuatro cosas que el modelo no puede adivinar',
        'estructura' => 'Un correo de trabajo tiene tres partes, no cinco',
        'prompts' => 'Seis prompts por tipo de correo',
        'tono' => 'Calibrar el tono con muestras, no con adjetivos',
        'no-delegar' => 'Los correos que no conviene delegar',
        'masivos' => 'Correos en serie: dónde está el límite real',
        'rutina' => 'La rutina de dos minutos',
    ],
    'faq' => [
        '¿Se nota si un correo lo ha escrito una IA?' => 'Se nota por la forma, no por el vocabulario. Los rasgos que delatan un correo generado son estructurales: párrafos de longitud casi idéntica, una apertura que agradece algo que no ha ocurrido («gracias por tu mensaje» cuando escribes tú primero), listas de tres elementos donde el tercero sobra, y un cierre que ofrece disponibilidad total. Quien lee no piensa «esto lo ha escrito una máquina», piensa «esto no me lo ha escrito a mí», que es peor. Se corrige recortando: un correo de trabajo bueno rara vez pasa de ciento cincuenta palabras.',
        '¿Qué prompt uso para escribir un correo profesional?' => 'Uno que traiga el contexto que el modelo no tiene. La plantilla que funciona en casi todos los casos incluye seis datos: a quién escribes y qué relación tienes con esa persona, qué ha pasado antes (pega el hilo), qué quieres que haga al recibirlo, qué restricción hay de plazo o de dinero, qué tono manejáis normalmente y cuánto puede ocupar. Sin esos seis, el modelo rellena con lo genérico y de ahí sale el correo que parece de todos y de nadie.',
        '¿Es seguro pegar un hilo de correo en ChatGPT o Claude?' => 'Depende de dónde estén los datos y de qué contenga el hilo. En las cuentas de empresa con retención desactivada, o en Copilot dentro del propio tenant, el riesgo es el que la organización ya haya aceptado por contrato. En una cuenta personal gratuita, un hilo con nombres de clientes, importes o condiciones contractuales es una cesión de datos que probablemente no esté cubierta por ningún acuerdo. La práctica sensata es sustituir nombres y cifras por marcadores antes de pegar, y hacerlo siempre igual para que sea un hábito y no una decisión.',
        '¿Cómo consigo que la IA escriba como yo?' => 'Enseñándole muestras, no describiéndote con adjetivos. «Escribe en un tono cercano pero profesional» no significa nada operativo: cada modelo interpreta esa frase de forma distinta y la media siempre acaba en el mismo registro plano. Lo que sí funciona es pegar tres o cuatro correos tuyos reales, pedirle que extraiga las reglas que observa (longitud media, si saludas por el nombre, si usas condicionales, cómo cierras) y guardar esas reglas para reutilizarlas. Es la diferencia entre pedir un estilo y darle uno.',
        '¿Puedo usar IA para responder correos de clientes?' => 'Para borradores sí; para enviar sin leer, no. El patrón que aguanta es que la IA prepare la respuesta y una persona la valide antes de que salga, sobre todo cuando el mensaje reconoce un error, acepta una condición o menciona una cifra. Los fallos caros en atención al cliente no vienen de un correo mal redactado, vienen de un correo que promete un plazo que nadie puede cumplir o que da por buena una versión de los hechos que no se ha comprobado.',
        '¿Cuántas palabras debe tener un correo de trabajo?' => 'Entre cincuenta y ciento cincuenta en la mayoría de los casos, y la pregunta importante no es esa sino cuántas decisiones pides. Un correo con una petición clara se responde; uno con tres se queda sin contestar o se contesta a medias. Cuando el borrador generado se va a cuatrocientas palabras, casi siempre es porque contiene dos correos distintos que conviene separar, no porque el asunto sea complejo.',
    ],
    'ctaTitle' => 'Prompts de correo ya escritos, por profesión',
    'ctaBody' => 'La redacción de correos aparece en casi todas las profesiones del catálogo con matices distintos: seguimiento comercial en <a href="/profesiones/ventas">Ventas</a>, respuestas a incidencias en <a href="/profesiones/customer-support">Customer Support</a> y comunicaciones internas en <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>Llega un correo de un proveedor. Tres párrafos, todos de cuatro líneas. Empieza dándote las gracias por tu tiempo, aunque no le hayas dado nada todavía. En medio hay una lista de tres puntos donde el tercero repite el primero con otras palabras. Y termina diciendo que queda a tu entera disposición para cualquier cosa que necesites.</p>

<p>No hay ni una palabra rara. Aun así sabes que ese correo no lo escribió nadie pensando en ti.</p>

<h2 id="por-que-se-nota">Por qué se nota, y no es por las palabras</h2>

<p>La conversación sobre textos generados suele girar en torno al léxico: que si «en el vertiginoso mundo actual», que si «desatar el potencial». Esas expresiones se corrigen en diez segundos y no son el problema en el correo profesional, porque casi nadie las deja pasar.</p>

<p>Lo que delata un correo generado es la <strong>métrica</strong>. Los modelos producen texto con una regularidad que la escritura humana no tiene: párrafos de longitud parecida, frases con la misma cadencia, enumeraciones que siempre traen tres elementos. Un correo escrito por una persona con prisa tiene un párrafo de una línea, otro de seis y una frase suelta al final. Esa irregularidad es información: dice que alguien estuvo ahí decidiendo qué era importante.</p>

<p>Hay tres tics más que aparecen en casi todos los borradores sin corregir:</p>

<ul>
    <li><strong>La apertura de cortesía falsa.</strong> «Gracias por ponerte en contacto» en un correo que inicias tú. El modelo asume que responde porque en su entrenamiento la mayoría de los correos eran respuestas.</li>
    <li><strong>El resumen de lo que el otro ya sabe.</strong> Dos frases recapitulando el contexto compartido antes de llegar al asunto. Quien recibe el correo estuvo en esa reunión.</li>
    <li><strong>El cierre de disponibilidad infinita.</strong> «Quedo a tu disposición para cualquier duda» no pide nada. Un correo que no pide nada no se contesta.</li>
</ul>

<p>Si solo vas a hacer una cosa con los borradores que genere el modelo, que sea borrar la primera frase y la última. En la mayoría de los casos el correo mejora sin añadir nada.</p>

<h2 id="contexto">Las cuatro cosas que el modelo no puede adivinar</h2>

<p>Un correo mediocre generado por IA casi nunca es culpa del modelo: es que le pediste un correo sin darle lo que hace que un correo sea de alguien para alguien. Hay cuatro datos que no están en ninguna parte salvo en tu cabeza.</p>

<figure>
<table>
    <thead>
        <tr><th>Dato</th><th>Qué pasa si falta</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>La relación</strong></td><td>Sale el registro medio: ni el tuteo de un compañero ni la formalidad de un cliente nuevo. Suena a circular.</td></tr>
        <tr><td><strong>El historial</strong></td><td>Repite lo que ya está hablado y omite el detalle que llevabais tres semanas discutiendo.</td></tr>
        <tr><td><strong>La acción concreta</strong></td><td>Cierra pidiendo «tu feedback» en vez de «confírmame el jueves si entramos con la opción B».</td></tr>
        <tr><td><strong>La restricción</strong></td><td>Ofrece flexibilidad que no tienes: plazos abiertos, alcance ampliable, disponibilidad total.</td></tr>
    </tbody>
</table>
</figure>

<p>La última es la que más caro sale. Un borrador generado tiende a sonar acomodaticio porque el texto amable es más probable que el texto que dice «esto no entra en el presupuesto». Si no le das el límite, no lo va a inventar, y el correo saldrá prometiendo de más.</p>

<h2 id="estructura">Un correo de trabajo tiene tres partes, no cinco</h2>

<p>Los modelos, salvo que se les diga otra cosa, escriben en cinco movimientos: saludo, cortesía, contexto, contenido, cierre. Es la estructura de una carta, no la de un correo entre gente que trabaja junta.</p>

<p>La forma que funciona tiene tres:</p>

<ol>
    <li><strong>Qué pasa</strong>, en la primera frase. Si el asunto es «Presupuesto revisado», la primera línea dice qué ha cambiado en el presupuesto.</li>
    <li><strong>Lo que necesitas saber para decidir</strong>. Solo eso. Los anexos, los matices y los porqués van debajo o en el adjunto.</li>
    <li><strong>Qué esperas y para cuándo</strong>. Una petición, una fecha.</li>
</ol>

<p>Esta estructura es además la que sobrevive a la lectura en móvil, que es donde se leen la mayoría de los correos de trabajo por primera vez. Todo lo que quede por debajo de la primera pantalla se lee en diagonal o no se lee.</p>

<p>Merece la pena decirlo en el prompt de forma explícita, porque es una instrucción que el modelo cumple bien: «estructura en tres movimientos: qué pasa, qué necesito que sepa, qué le pido y para cuándo».</p>

<h2 id="prompts">Seis prompts por tipo de correo</h2>

<p>Cada uno de estos parte de la misma base —contexto, relación, acción, límite— y cambia solo la instrucción de forma. Están escritos para pegarse tal cual y sustituir los corchetes.</p>

<h3>Seguimiento de una propuesta sin respuesta</h3>

<pre><code>Escribe un seguimiento a [nombre], [cargo] de [empresa], a quien envié
una propuesta el [fecha] y no ha contestado. Hemos hablado [dos] veces
antes, nos tuteamos.

Reglas: máximo 80 palabras. No pidas disculpas por insistir. No repitas
el contenido de la propuesta. Dale una salida fácil: que pueda
responderme con una sola palabra si el proyecto está parado.
Termina con una pregunta cerrada, no con una oferta de ayuda.</code></pre>

<h3>Decir que no a una petición</h3>

<pre><code>Redacta una negativa a [petición] de [quién]. Contexto: [por qué no
puede ser]. Quiero mantener la relación.

Reglas: la negativa va en la primera frase, no al final. Una sola
justificación, la más honesta, sin adornarla. Ofrece una alternativa
real si la hay; si no la hay, no inventes una. Máximo 100 palabras.
Sin «lamentablemente» ni «desafortunadamente».</code></pre>

<h3>Reclamar algo que va con retraso</h3>

<pre><code>Escribo a [quién] porque [entregable] tenía fecha [fecha] y no ha
llegado. Es la [primera/segunda] vez. La relación es [buena/tensa].

Reglas: tono neutro, sin reproche ni ironía. Menciona el impacto
concreto en [qué se bloquea], no el incumplimiento en abstracto.
Pide una fecha nueva, no una explicación. Máximo 90 palabras.</code></pre>

<h3>Responder a una queja de un cliente</h3>

<pre><code>Responde a esta queja: [pegar mensaje literal]. Lo que sé que pasó
realmente: [hechos]. Lo que puedo ofrecer: [compensación o solución].
Lo que NO puedo ofrecer: [límites].

Reglas: reconoce el hecho concreto que salió mal, no «las molestias».
No prometas nada fuera de lo que puedo ofrecer. Di qué va a pasar y
cuándo. Máximo 120 palabras. Sin plantillas de disculpa genérica.</code></pre>

<h3>Presentarte en frío</h3>

<pre><code>Correo en frío a [nombre], [cargo] en [empresa]. Motivo real por el que
le escribo a esta persona y no a otra: [señal concreta: una oferta de
empleo publicada, una nota de prensa, un cambio de herramienta].
Lo que ofrezco: [una sola cosa].

Reglas: la señal concreta va en la primera línea y demuestra que he
mirado su empresa. Máximo 70 palabras. Una sola petición: [quince
minutos / una respuesta de sí o no]. Prohibido: «espero que estés bien»,
«me pongo en contacto contigo», adjetivos sobre mi empresa.</code></pre>

<h3>Resumir un hilo largo para reenviarlo</h3>

<pre><code>Este hilo tiene [n] mensajes: [pegar]. Voy a reenviarlo a [quién], que
no ha participado y necesita [decidir X].

Devuélveme: (1) el estado actual en dos frases; (2) los puntos donde
hay desacuerdo, con quién sostiene cada posición; (3) lo que se le pide
a [quién] exactamente. Si algo del hilo queda ambiguo, dilo en vez de
resolverlo tú.</code></pre>

<p>Ese último cierre —«dilo en vez de resolverlo tú»— conviene arrastrarlo a todos los prompts de correo que trabajen sobre material real. Es la instrucción que evita que el modelo tape con una frase razonable lo que en el hilo estaba sin decidir. La mecánica está desarrollada en la guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="tono">Calibrar el tono con muestras, no con adjetivos</h2>

<p>«Cercano pero profesional» es la instrucción de tono más repetida y la que menos hace. No es que el modelo la ignore: es que esa descripción admite cien registros distintos y el modelo elige el promedio, que suena a departamento de comunicación.</p>

<p>El método que sí cambia el resultado ocupa diez minutos y se hace una vez:</p>

<ol>
    <li>Coge cuatro correos tuyos reales que te parezcan bien escritos. Distintos entre sí: uno interno, uno a cliente, uno incómodo, uno breve.</li>
    <li>Pégalos y pide: <em>«Extrae las reglas de estilo que observas. Longitud media de frase y de correo, cómo saludo, cómo cierro, si uso condicionales, qué no aparece nunca. Dame diez reglas en imperativo, sin adjetivos valorativos.»</em></li>
    <li>Revisa la lista y corrige lo que no te representa. Saldrán dos o tres reglas que no reconoces como tuyas.</li>
    <li>Guarda esas reglas donde se apliquen solas: las instrucciones de un proyecto, un skill, o un fichero que pegues al principio.</li>
</ol>

<p>El resultado suele ser incómodo la primera vez, porque las reglas que salen son más secas de lo que uno cree escribir. Esa sequedad es justo lo que falta en el borrador genérico.</p>

<h2 id="no-delegar">Los correos que no conviene delegar</h2>

<p>Hay mensajes donde el coste de sonar a plantilla supera cualquier ahorro de tiempo, y no son los que uno esperaría. No son los difíciles: son los que llevan carga personal.</p>

<figure>
<table>
    <thead>
        <tr><th>Tipo de correo</th><th>Por qué</th></tr>
    </thead>
    <tbody>
        <tr><td>Condolencias, enfermedad, malas noticias personales</td><td>La torpeza sincera comunica mejor que la fluidez. Un texto correcto aquí se lee como indiferencia.</td></tr>
        <tr><td>Reconocer un error propio</td><td>El borrador tiende a diluir la responsabilidad en pasiva. La disculpa que funciona nombra quién hizo qué.</td></tr>
        <tr><td>Despedidas y decisiones sobre personas</td><td>Además del tono, hay implicaciones legales que dependen de la redacción exacta.</td></tr>
        <tr><td>Compromisos contractuales</td><td>Una condición mal formulada en un correo puede ser vinculante. Ver la <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>.</td></tr>
        <tr><td>Felicitaciones a alguien de tu equipo</td><td>Si se nota el molde, resta en lugar de sumar. Tres líneas tuyas valen más que doce generadas.</td></tr>
    </tbody>
</table>
</figure>

<p>En estos casos la IA sigue siendo útil para lo de antes y lo de después: ordenar qué quieres decir, o revisar si el correo ya escrito dice algo que no pretendías. Lo que no conviene es que ponga las palabras.</p>

<h2 id="masivos">Correos en serie: dónde está el límite real</h2>

<p>La promesa de «cincuenta correos personalizados en media hora» es cierta en la parte mecánica y engañosa en la que importa. Un modelo hace bien la variación superficial: cambiar el nombre, el sector, el cargo, un adjetivo. Eso no es personalización, es un mail merge con más sinónimos, y quien recibe treinta correos así al día lo distingue.</p>

<p>La personalización que cambia la tasa de respuesta necesita <strong>una señal por destinatario</strong>: algo verificable de esa empresa concreta que justifique el correo. Ahí el cuello de botella no es la redacción, es reunir esas señales, y eso tiene coste aunque la IA participe.</p>

<p>Dos precauciones que conviene fijar antes de mandar nada en serie:</p>

<ul>
    <li><strong>Ninguna afirmación sobre el destinatario que no venga de un campo verificado.</strong> Si el modelo genera libremente el «he visto que estáis creciendo en el sector X», va a inventar la mitad, y el fallo llega firmado con tu nombre.</li>
    <li><strong>Revisa la muestra completa, no tres al azar.</strong> Los errores en generación masiva no se reparten al azar: se concentran en las filas con datos incompletos, que son justo las que no salen en un muestreo.</li>
</ul>

<p>Y por debajo de todo eso está la normativa: en la Unión Europea, el correo comercial no solicitado sigue necesitando base legal y un mecanismo de baja funcional, y que el texto lo haya escrito un modelo no cambia nada de eso. La <a href="/guias/ai-act-obligaciones-empresas">guía del AI Act</a> cubre qué se añade en 2026 sobre transparencia.</p>

<h2 id="rutina">La rutina de dos minutos</h2>

<p>Todo lo anterior se comprime en una revisión corta que conviene hacer siempre, en este orden:</p>

<ol>
    <li><strong>Borra la primera frase y la última.</strong> Vuelve a leer. Nueve de cada diez veces el correo está mejor.</li>
    <li><strong>Busca la petición.</strong> Si no encuentras una acción y una fecha, el correo no está terminado.</li>
    <li><strong>Comprueba los datos duros.</strong> Cifras, fechas, nombres propios, importes. Es donde se cuela el error que no se perdona.</li>
    <li><strong>Rompe la simetría.</strong> Parte un párrafo, junta dos, deja una frase suelta. Escribe una línea a mano.</li>
    <li><strong>Léelo como si lo recibieras tú.</strong> Si te llegara este correo, ¿contestarías o lo dejarías para luego?</li>
</ol>

<p>La regla que resume el resto: <strong>la IA escribe el borrador, tú decides lo que pides</strong>. La parte que no se delega no es la redacción, es saber qué quieres que pase cuando el otro termine de leer.</p>
HTML,
];
