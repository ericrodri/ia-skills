<?php

return [
    'title' => 'Prompts de IA por profesión: cuáles usar según tu trabajo',
    'navTitle' => 'Prompts por profesión',
    'seoTitle' => 'Prompts de IA por profesión: guía por oficio',
    'description' => 'Qué prompts de IA merecen la pena en marketing, desarrollo, ventas, RRHH, finanzas, legal, diseño y soporte. Con qué empezar en cada área y cómo adaptar un prompt genérico a tu contexto.',
    'excerpt' => 'Los prompts que circulan por LinkedIn valen para la demo y fallan en el trabajo real. Esta guía recorre las ocho áreas donde la IA ya ahorra horas y dice por dónde empezar en cada una.',
    'category' => 'Catálogo',
    'published' => '2026-08-27',
    'updated' => '2026-08-27',
    'readingMinutes' => 10,
    'words' => 1700,
    'about' => 'Prompts de IA',
    'related' => ['como-escribir-prompts-efectivos', 'que-son-los-skills-de-claude-code', 'automatizar-tareas-con-ia-en-el-trabajo'],
    'toc' => [
        'por-que-profesion' => 'Por qué los prompts genéricos fallan',
        'marketing' => 'Marketing y contenido',
        'desarrollo' => 'Desarrollo de software',
        'ventas' => 'Ventas',
        'rrhh' => 'Recursos humanos',
        'finanzas-legal' => 'Finanzas y legal',
        'diseno-producto-soporte' => 'Diseño, producto y soporte',
        'adaptar' => 'Cómo adaptar cualquier prompt a tu contexto',
    ],
    'faq' => [
        '¿Los prompts funcionan igual en ChatGPT, Claude y Gemini?' => 'La estructura sí: contexto, tarea, criterios, formato de salida. Lo que cambia es el acabado. Claude tiende a mantener mejor las instrucciones largas y el tono en textos extensos; ChatGPT resuelve rápido piezas cortas; Gemini se apoya en el ecosistema de Google. Si un prompt está bien escrito, el cambio de herramienta se nota en los matices, no en si funciona.',
        '¿Cuántos prompts necesito para mi trabajo?' => 'Menos de los que parece. Cinco o seis bien afinados para las tareas que repites cada semana cubren la mayor parte del ahorro. Coleccionar doscientos prompts que no vas a volver a abrir es la forma más común de no sacar partido a esto.',
        '¿Cuándo conviene convertir un prompt en un skill?' => 'Cuando lo has pegado tres veces. A partir de ahí el coste de mantenerlo en un documento aparte —buscarlo, adaptarlo, recordar que existe— supera al de escribirlo una vez como procedimiento reutilizable.',
        '¿Puedo usar estos prompts con datos de clientes?' => 'Depende de la política de tu empresa y del proveedor del modelo. La pauta prudente: anonimiza antes de pegar (nombres, identificadores, importes exactos), y para todo lo que sea dato personal o material confidencial, comprueba antes qué plan tienes contratado y si esos datos se usan para entrenamiento.',
        '¿Los prompts de esta web son gratis?' => 'Sí. El catálogo es abierto y colaborativo: cualquiera puede consultar los prompts, copiarlos y publicar los suyos. El orden de aparición lo decide la comunidad votando lo que de verdad usa.',
    ],
    'ctaTitle' => 'Empieza por tu área',
    'ctaBody' => 'Cada profesión tiene su propia página con los prompts y skills mejor valorados por quien trabaja en ella. Elige la tuya y copia el primero que te encaje: <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/desarrollo">Desarrollo</a>, <a href="/profesiones/ventas">Ventas</a>, <a href="/profesiones/rrhh">RRHH</a>, <a href="/profesiones/finanzas">Finanzas</a>, <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/diseno">Diseño</a>, <a href="/profesiones/product-management">Product Management</a>, <a href="/profesiones/customer-support">Atención al cliente</a> o <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>Hay una diferencia enorme entre el prompt que impresiona en una captura de pantalla y el que usas un martes por la tarde con un informe real delante. El primero está escrito para lucirse; el segundo, para ahorrarte cuarenta minutos.</p>

<p>Esta guía recorre las áreas donde la IA ya está ahorrando tiempo de verdad y dice, para cada una, qué tipo de tarea merece la pena delegar y cuál no.</p>

<h2 id="por-que-profesion">Por qué los prompts genéricos fallan</h2>

<p>«Actúa como experto en marketing y escribe un plan de contenidos» produce un plan que podría servir para cualquier empresa del mundo, que es otra forma de decir que no sirve para la tuya.</p>

<p>Lo que separa un prompt útil de uno decorativo son tres cosas que el genérico nunca trae:</p>

<ul>
    <li><strong>El contexto que solo tú tienes.</strong> A quién le vendes, qué presupuesto manejas, qué probaste el trimestre pasado y no funcionó.</li>
    <li><strong>El criterio de decisión.</strong> Qué hace que una opción sea mejor que otra en tu caso concreto: margen, plazo, riesgo, esfuerzo del equipo.</li>
    <li><strong>El formato de salida.</strong> Si no lo pides, cada ejecución te dará una forma distinta y acabarás reformateando a mano lo que venías a ahorrarte.</li>
</ul>

<p>La anatomía completa de un prompt que aguanta uso diario está en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>. Aquí vamos a lo concreto: qué delegar en cada oficio.</p>

<h2 id="marketing">Marketing y contenido</h2>

<p>Es el área con más ruido y, aun así, donde el ahorro es más medible. Lo que funciona:</p>

<ul>
    <li><strong>Análisis de competencia estructurado.</strong> Pásale lo que publican tres competidores y pide diferencias de posicionamiento, no un resumen. El resumen ya lo sabes leer tú.</li>
    <li><strong>Variantes para test.</strong> Diez asuntos de email o cinco titulares con la hipótesis explícita detrás de cada uno, para poder interpretar el resultado del test.</li>
    <li><strong>Briefing de contenido a partir de datos.</strong> Dale las consultas por las que ya apareces y pide qué falta cubrir. Esto es investigación, no redacción.</li>
</ul>

<p>Lo que no funciona: pedirle el artículo entero y publicarlo. Se nota, aporta poco y desde que los buscadores premian el contenido con experiencia real detrás, es contraproducente. Delega el andamiaje; escribe tú la parte que solo tú puedes escribir.</p>

<p><a href="/profesiones/marketing">Ver los prompts de marketing del catálogo →</a></p>

<h2 id="desarrollo">Desarrollo de software</h2>

<p>La profesión donde la IA ha cambiado más el día a día, y donde el criterio importa más porque el error es ejecutable.</p>

<ul>
    <li><strong>Revisión de cambios antes del pull request.</strong> Un procedimiento fijo que mire correctitud, casos límite y contrato público encuentra cosas que el ojo cansado no ve.</li>
    <li><strong>Tests para código que ya existe.</strong> La tarea más ingrata y la que mejor sale, sobre todo pidiendo casos límite explícitamente.</li>
    <li><strong>Entender código ajeno.</strong> «Explícame qué hace este módulo y qué pasa si le llega un valor nulo» ahorra la tarde de arqueología.</li>
    <li><strong>Migraciones mecánicas.</strong> Cambios repetidos en cincuenta archivos con un patrón claro.</li>
</ul>

<p>Aquí es donde convertir prompts en <a href="/guias/que-son-los-skills-de-claude-code">skills</a> rinde más, porque las convenciones del equipo dejan de depender de que alguien las recuerde en la revisión.</p>

<p><a href="/profesiones/desarrollo">Ver los prompts de desarrollo del catálogo →</a></p>

<h2 id="ventas">Ventas</h2>

<p>El uso obvio —escribir correos en frío— es el que peor envejece: cuando todo el mundo manda el mismo correo generado, el canal se quema. Los usos que aguantan:</p>

<ul>
    <li><strong>Preparación de reunión.</strong> Investiga la cuenta, cruza con lo que vendes y devuelve tres ángulos y las dos objeciones más probables.</li>
    <li><strong>Resumen de llamada a CRM.</strong> De la transcripción a los campos que de verdad rellenas, con los siguientes pasos y las fechas comprometidas.</li>
    <li><strong>Ensayo de objeciones.</strong> Que haga de cliente difícil con el perfil de tu comprador real. Es de lo poco que sustituye a un compañero disponible.</li>
</ul>

<p><a href="/profesiones/ventas">Ver los prompts de ventas del catálogo →</a></p>

<h2 id="rrhh">Recursos humanos</h2>

<p>Área de alto volumen documental y, a la vez, de mucho cuidado legal. La línea es clara: la IA prepara, la persona decide.</p>

<ul>
    <li><strong>Descripciones de puesto</strong> a partir de las funciones reales, no del organigrama.</li>
    <li><strong>Guiones de entrevista estructurada</strong> con la rúbrica de evaluación incluida, que es lo que hace comparables a dos candidatos.</li>
    <li><strong>Planes de onboarding</strong> por rol, con los primeros treinta días desglosados.</li>
    <li><strong>Síntesis de encuestas de clima</strong>: agrupar cientos de respuestas abiertas en temas, con citas textuales de apoyo.</li>
</ul>

<p>Lo que no debe delegarse: la decisión de descartar. Que la IA ordene y documente; que el criterio sea humano y quede por escrito.</p>

<p><a href="/profesiones/rrhh">Ver los prompts de RRHH del catálogo →</a></p>

<h2 id="finanzas-legal">Finanzas y legal</h2>

<p>Dos áreas distintas con el mismo patrón: mucho documento, poco margen de error y una necesidad clara de trazabilidad.</p>

<p>En <strong>finanzas</strong>, lo que rinde es la explicación de desviaciones —dale el presupuesto y el real y pide las cinco diferencias que expliquen el 80 % del hueco—, el comentario de cierre a partir de los números y la revisión de supuestos de un modelo. Lo que no: pedirle que calcule. Los cálculos, en la hoja; la IA los interpreta y los redacta.</p>

<p>En <strong>legal</strong>, la extracción de cláusulas frente a una lista de comprobación, la comparación de dos versiones de un contrato señalando qué cambió en las obligaciones y la traducción de jerga a lenguaje entendible para el equipo de negocio. Siempre con revisión de un profesional: un resumen que se salte una cláusula es peor que no tener resumen.</p>

<p><a href="/profesiones/finanzas">Prompts de finanzas</a> · <a href="/profesiones/legal">Prompts de legal</a></p>

<h2 id="diseno-producto-soporte">Diseño, producto y soporte</h2>

<figure>
<table>
    <thead>
        <tr><th>Área</th><th>Lo que mejor funciona</th><th>Lo que conviene no delegar</th></tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="/profesiones/diseno">Diseño</a></td>
            <td>Briefs a partir de una conversación, crítica estructurada de una pantalla, variantes de microcopy</td>
            <td>La dirección visual y la decisión final</td>
        </tr>
        <tr>
            <td><a href="/profesiones/product-management">Product Management</a></td>
            <td>Agrupar feedback disperso en temas, redactar historias de usuario con criterios de aceptación, preparar el PRD</td>
            <td>Priorizar el roadmap</td>
        </tr>
        <tr>
            <td><a href="/profesiones/customer-support">Atención al cliente</a></td>
            <td>Borradores de respuesta desde la base de conocimiento, clasificación de tickets, detección de patrones repetidos</td>
            <td>Enviar sin revisar en casos delicados</td>
        </tr>
        <tr>
            <td><a href="/profesiones/freelancers">Freelancers</a></td>
            <td>Propuestas a partir de la llamada, presupuestos por alcance, seguimiento de clientes</td>
            <td>Fijar el precio</td>
        </tr>
    </tbody>
</table>
</figure>

<h2 id="adaptar">Cómo adaptar cualquier prompt a tu contexto</h2>

<p>Cuando cojas un prompt del catálogo —o de cualquier sitio— haz estos cuatro cambios antes de usarlo en serio:</p>

<ol>
    <li><strong>Sustituye el sector genérico por el tuyo</strong>, con sus palabras. No «empresa B2B», sino «software de gestión para clínicas dentales de menos de diez empleados».</li>
    <li><strong>Añade una restricción real.</strong> Presupuesto, plazo, herramientas que ya tienes contratadas, cosas que no se pueden tocar. Las restricciones son lo que convierte una respuesta bonita en una aplicable.</li>
    <li><strong>Di qué formato quieres.</strong> Tabla, lista de cinco, borrador de correo de 120 palabras. Concreto.</li>
    <li><strong>Añade un ejemplo de lo que consideras bueno.</strong> Un solo ejemplo de salida acertada vale más que tres párrafos describiéndola.</li>
</ol>

<p>Y cuando ese prompt adaptado te haya funcionado tres veces, deja de tenerlo en un documento suelto: <a href="/guias/como-crear-un-skill-para-claude-code">conviértelo en un skill</a> para que se cargue solo cuando la tarea aparezca.</p>
HTML,
];
