<?php

return [
    'title' => 'IA para autónomos y pymes: por dónde empezar sin gastar de más',
    'navTitle' => 'IA para autónomos y pymes',
    'seoTitle' => 'IA para autónomos y pymes: por dónde empezar',
    'description' => 'Las cinco tareas donde un negocio pequeño gana de verdad con IA, el stack mínimo, lo que cuesta al mes y las obligaciones que no puedes saltarte.',
    'excerpt' => 'Sin departamento de IT, sin presupuesto de proyecto y sin tiempo para pilotos de seis meses. Qué tareas mueven la caja de un negocio pequeño, qué herramientas bastan, cuánto cuesta de verdad y qué obligaciones no puedes saltarte por ser pequeño.',
    'category' => 'Método',
    'published' => '2026-09-15',
    'updated' => '2026-09-15',
    'readingMinutes' => 12,
    'words' => 1965,
    'about' => 'Adopción de inteligencia artificial en pymes y autónomos',
    'related' => ['automatizar-sin-programar-n8n-make-zapier', 'medir-si-la-ia-ahorra-tiempo', 'usar-ia-sin-filtrar-datos-de-clientes'],
    'toc' => [
        'por-donde-no' => 'Por dónde no empezar',
        'las-cinco' => 'Las cinco tareas que mueven la caja',
        'stack' => 'El stack mínimo y lo que cuesta de verdad',
        'chat-o-automatizacion' => 'Cuándo pasar del chat a la automatización',
        'obligaciones' => 'Lo que no puedes saltarte por ser pequeño',
        'plan' => 'Plan de 30 días con presupuesto de cero a cuarenta euros',
        'errores' => 'Cuatro errores caros que se repiten',
    ],
    'faq' => [
        '¿Cuánto cuesta empezar con IA en un negocio pequeño?' => 'Una suscripción de chat de pago ronda los 20 € al mes por persona, y con eso se cubre el 80 % de lo que necesita un autónomo o una pyme pequeña. El siguiente escalón —una herramienta de automatización para conectar formulario, correo y hoja de cálculo— añade entre 0 y 30 € al mes según volumen. Por debajo de 50 € mensuales está casi todo lo que de verdad mueve el negocio. Lo que se dispara son los proyectos a medida, y ese salto no toca hasta tener una tarea medida y estable.',
        '¿Qué IA es mejor para un autónomo?' => 'Una de pago, la que sea, usada a diario, es mejor que tres gratuitas usadas de vez en cuando. La versión gratuita limita longitud, número de mensajes y acceso a las funciones que ahorran tiempo de verdad: trabajar con archivos, buscar en la web y mantener instrucciones fijas. Elige una, paga el mes y úsala para todo durante treinta días antes de comparar.',
        '¿Puedo usar IA con datos de mis clientes?' => 'Con condiciones. En planes de empresa o de pago con protección comercial, tus conversaciones no se usan para entrenar y hay contrato de encargado de tratamiento, que es lo que el RGPD exige. Aun así, la buena práctica es minimizar: no hace falta el nombre y el DNI del cliente para redactar su propuesta. Y las herramientas gratuitas de consumo no valen para datos personales de terceros.',
        '¿Merece la pena poner un chatbot de IA en mi web?' => 'Casi nunca como primer paso, y es lo primero que vende todo el mundo. Un negocio pequeño recibe pocas consultas y muy variadas: el chatbot cuesta configurarlo, se equivoca en los casos raros —que son la mayoría— y molesta a quien solo quería un teléfono. Rinde mucho más atacar el correo y las propuestas, que es donde de verdad se van las horas. El chatbot tiene sentido cuando recibes decenas de consultas repetidas al día.',
        '¿Tengo que avisar a mis clientes de que uso IA?' => 'Depende de para qué. No hace falta declarar que un borrador se redactó con ayuda, igual que nadie declara el corrector ortográfico. Sí debes ser transparente cuando el cliente interactúa con un sistema automatizado creyendo que habla con una persona, y cuando publicas contenido sintético —imagen, audio o vídeo— que podría confundirse con real: son obligaciones de transparencia del Reglamento europeo de IA. Y nunca presentes como propia una experiencia que no has tenido.',
        '¿Hay ayudas o deducciones para digitalizarse con IA?' => 'Las convocatorias de ayudas a la digitalización van cambiando de nombre, importe y plazos cada año, así que cualquier cifra concreta que leas envejece rápido. Consulta la sede electrónica del organismo competente y a tu gestoría antes de contar con ellas. Consejo de fondo: no diseñes tu adopción alrededor de una ayuda. Lo que cuesta menos de 50 € al mes no necesita subvención, y lo que sí la necesita conviene haberlo validado antes en pequeño.',
    ],
    'ctaTitle' => 'Empieza por un prompt que ya funciona',
    'ctaBody' => 'No hace falta inventar el método desde cero: en el catálogo hay skills y prompts escritos por profesionales que trabajan por su cuenta o en equipos pequeños. Empieza por <a href="/profesiones/freelancers">Freelancers</a>, <a href="/profesiones/ventas">Ventas</a>, <a href="/profesiones/finanzas">Finanzas</a> o <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>Casi todo lo que se publica sobre adoptar IA en una empresa está escrito para organizaciones con departamento de sistemas, comité de gobernanza y presupuesto de proyecto. Cuando eso se «adapta» a una pyme, el resultado es el mismo plan dividido por diez: un piloto de seis meses que nadie tiene tiempo de ejecutar.</p>

<p>Un negocio pequeño juega con otras reglas. No tiene equipo de IT, pero tampoco tiene que pedir permiso a nadie. No tiene presupuesto, pero puede cambiar un proceso el martes por la mañana. Esta guía está escrita con esas dos cosas en mente.</p>

<h2 id="por-donde-no">Por dónde no empezar</h2>

<p>Tres arranques que se repiten y fallan casi siempre:</p>

<ul>
    <li><strong>El chatbot en la web.</strong> Es lo primero que vende todo el mundo y lo último que necesita un negocio pequeño. Con pocas consultas y muy variadas, el bot se equivoca justo en los casos raros —que aquí son la mayoría— y estorba a quien buscaba un teléfono. Tiene sentido con decenas de preguntas repetidas al día. Antes, no.</li>
    <li><strong>La herramienta «para tu sector».</strong> Un producto vertical que cuesta 200 € al mes y hace una cosa concreta que un chat genérico bien instruido resuelve por veinte. A veces compensa, pero es la segunda compra, nunca la primera.</li>
    <li><strong>El proyecto de transformación.</strong> Mapear procesos, elegir casos de uso, definir KPIs. En una empresa de seis personas, eso son tres meses de reuniones para acabar donde habrías llegado el primer día probando con la tarea más pesada.</li>
</ul>

<p>El patrón de los tres es el mismo: empiezan por la herramienta o por el plan, no por la tarea que hoy te come la tarde.</p>

<h2 id="las-cinco">Las cinco tareas que mueven la caja</h2>

<p>En negocios pequeños, los ahorros grandes están concentrados en muy pocos sitios. Estos cinco, por orden de rentabilidad:</p>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>Qué delegas</th><th>Por qué rinde tanto aquí</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Propuestas y presupuestos</strong></td><td>El borrador a partir de tus notas de la llamada y de una propuesta anterior que ganó</td><td>Es lo que más se pospone y lo que más directamente cierra ventas. Bajar de 90 a 25 minutos significa enviar el mismo día</td></tr>
        <tr><td><strong>Correo y seguimiento</strong></td><td>Respuestas a consultas frecuentes, seguimientos, reclamación de impagos</td><td>Son muchos minutos sueltos que no se contabilizan y suman horas a la semana</td></tr>
        <tr><td><strong>Contenido y visibilidad</strong></td><td>Fichas de servicio, publicaciones, boletín, textos de la web</td><td>Es lo primero que se abandona cuando hay trabajo, y lo que hace que haya trabajo dentro de tres meses</td></tr>
        <tr><td><strong>Administración</strong></td><td>Extraer datos de facturas y albaranes, cuadrar, preparar la documentación para la gestoría</td><td>Trabajo sin valor añadido que nadie quiere hacer y que siempre se hace de noche</td></tr>
        <tr><td><strong>Traducción y mercados nuevos</strong></td><td>Web, propuestas y correos en otro idioma</td><td>Abre mercado sin contratar a nadie. Con revisión nativa en lo comercial</td></tr>
    </tbody>
</table>
</figure>

<p>Fíjate en que ninguna es «hacer mi oficio». La IA no va a diseñar tu instalación eléctrica ni a llevar tu contabilidad. Va a quitarte la parte administrativa y comercial que te impide dedicarte a tu oficio, que en un autónomo es fácilmente el 40 % de la semana.</p>

<p>Si quieres el detalle por tarea, hay guías específicas para <a href="/guias/escribir-correos-con-ia">escribir correos</a>, <a href="/guias/ia-en-excel-y-google-sheets">hojas de cálculo</a> y <a href="/guias/resumir-documentos-largos-con-ia">documentos largos</a>.</p>

<h2 id="stack">El stack mínimo y lo que cuesta de verdad</h2>

<figure>
<table>
    <thead>
        <tr><th>Pieza</th><th>Para qué</th><th>Coste mensual</th><th>¿Cuándo?</th></tr>
    </thead>
    <tbody>
        <tr><td>Un chat de pago</td><td>El 80 % de todo: escribir, analizar, resumir, traducir</td><td>~20 € por persona</td><td>Desde el día uno</td></tr>
        <tr><td>Instrucciones guardadas o proyecto</td><td>Que no tengas que explicar tu negocio cada vez</td><td>Incluido</td><td>Semana uno</td></tr>
        <tr><td>Transcripción de reuniones y llamadas</td><td>Notas y tareas sin escribir nada</td><td>0–15 €</td><td>Si tienes más de tres llamadas a la semana</td></tr>
        <tr><td>Automatización sin código</td><td>Conectar formulario, correo, hoja y facturación</td><td>0–30 €</td><td>Cuando una tarea se repite igual 20 veces al mes</td></tr>
        <tr><td>Herramienta vertical de tu sector</td><td>Un proceso concreto muy específico</td><td>Variable, suele empezar en 50 €</td><td>Solo si lo anterior se queda corto, con un número que lo justifique</td></tr>
    </tbody>
</table>
</figure>

<p>La pieza que más rendimiento da y menos se usa es la segunda, que además es gratis: <strong>guardar en las instrucciones personalizadas qué haces, para quién, con qué tono y qué no debe inventarse nunca</strong>. Diez minutos de configuración que mejoran todas las respuestas del año. Sin eso, cada conversación empieza explicando tu negocio desde cero y los resultados salen genéricos.</p>

<h2 id="chat-o-automatizacion">Cuándo pasar del chat a la automatización</h2>

<p>La tentación de automatizar llega pronto y casi siempre demasiado pronto. El umbral razonable son tres condiciones a la vez:</p>

<ol>
    <li><strong>La tarea se repite igual al menos veinte veces al mes.</strong> Por debajo, el tiempo de montar y mantener el flujo no se recupera.</li>
    <li><strong>El procedimiento está escrito y estable.</strong> Si aún cambias el prompt cada semana, estás automatizando algo que todavía no sabes hacer.</li>
    <li><strong>Un fallo no es grave o se detecta enseguida.</strong> Automatizar el envío de un presupuesto sin que nadie lo mire es cómo se manda un precio equivocado a un cliente bueno.</li>
</ol>

<p>Cumplidas las tres, la elección de herramienta y los costes reales están en <a href="/guias/automatizar-sin-programar-n8n-make-zapier">n8n vs Make vs Zapier</a>. Y antes de dar el salto, conviene tener el número: el método corto está en <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si la IA ahorra tiempo</a>.</p>

<h2 id="obligaciones">Lo que no puedes saltarte por ser pequeño</h2>

<p>Ser pequeño no exime de nada, y hay tres cosas que conviene tener resueltas desde el principio porque arreglarlas después cuesta más.</p>

<ul>
    <li><strong>Datos personales de clientes.</strong> Si metes datos de terceros en una herramienta, esa herramienta es un encargado del tratamiento y necesitas el contrato correspondiente y una base legal. En la práctica: usa planes de pago o de empresa con protección comercial —donde tus conversaciones no alimentan el entrenamiento— y minimiza lo que escribes. Para redactar una propuesta no hace falta el DNI de nadie. El criterio completo, en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">qué puedes poner en el prompt y qué no</a>.</li>
    <li><strong>Transparencia.</strong> Si un cliente habla con un sistema automatizado creyendo que habla contigo, hay que decírselo. Y el contenido sintético que pueda confundirse con real debe identificarse. Son obligaciones de transparencia del Reglamento europeo de IA, y aplican también al negocio de una persona: <a href="/guias/ai-act-obligaciones-empresas">qué obliga y desde cuándo</a>.</li>
    <li><strong>Lo que firmas es tuyo.</strong> Un presupuesto con un precio inventado, un contrato con una cláusula que el modelo se sacó de la manga o una ficha de producto con una certificación que no tienes son responsabilidad tuya al cien por cien. Todo lo que salga con tu nombre se lee entero antes de enviarse. Sin excepciones y sin prisa como excusa.</li>
</ul>

<h2 id="plan">Plan de 30 días con presupuesto de cero a cuarenta euros</h2>

<ol>
    <li><strong>Días 1 y 2.</strong> Apunta durante dos días todo lo que haces que no sea tu oficio: correos, presupuestos, papeleo, publicaciones. Suma las horas. Ese número es el que vas a atacar.</li>
    <li><strong>Día 3.</strong> Contrata <em>una</em> suscripción de pago y configura las instrucciones personalizadas: a qué te dedicas, quién es tu cliente, cómo escribes, qué no debe inventar jamás.</li>
    <li><strong>Días 4 a 10.</strong> Una sola tarea, la más pesada de la lista, normalmente propuestas. Hazla con IA todas las veces que toque. Guarda el prompt que funcione en un archivo de texto: ese archivo es tu activo, no la herramienta.</li>
    <li><strong>Días 11 a 20.</strong> Añade la segunda tarea, casi siempre correo y seguimiento. Sigue anotando minutos.</li>
    <li><strong>Días 21 a 25.</strong> Contenido: convierte lo que ya sabes —las preguntas que te hacen los clientes— en fichas y publicaciones. Es el trabajo que rinde dentro de tres meses.</li>
    <li><strong>Días 26 a 30.</strong> Balance. Compara las horas del día 1 con las de ahora. Decide qué se queda, qué merece automatizarse y qué has descubierto que no compensaba.</li>
</ol>

<p>Al final del mes tienes dos cosas que no tenías: un puñado de prompts que funcionan en tu negocio concreto y una cifra de horas propia. Las dos valen más que cualquier curso.</p>

<h2 id="errores">Cuatro errores caros que se repiten</h2>

<p><strong>Probar todo y no adoptar nada.</strong> Quince herramientas abiertas, ninguna en el flujo de trabajo del lunes. Una sola, usada treinta días seguidos, rinde más que quince probadas una tarde.</p>

<p><strong>No guardar los prompts.</strong> Es el error más caro y el más silencioso. Reescribir cada vez la misma instrucción tira por la borda el aprendizaje acumulado. Un documento con tus diez prompts buenos es el activo que te llevas si mañana cambias de herramienta.</p>

<p><strong>Publicar sin leer.</strong> Un dato inventado en un presupuesto o en una ficha de producto cuesta un cliente, y a veces algo peor. La velocidad no es excusa: ahorrar cuarenta minutos y perder una cuenta no es un ahorro.</p>

<p><strong>Esperar a tenerlo todo claro.</strong> El coste de empezar es una suscripción de veinte euros y una tarde. El coste de esperar un año, mientras tu competencia responde presupuestos el mismo día, es bastante más difícil de calcular y bastante más alto.</p>
HTML,
];
