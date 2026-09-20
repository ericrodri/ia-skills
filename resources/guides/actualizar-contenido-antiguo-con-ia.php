<?php

return [
    'title' => 'Actualizar contenido antiguo: cuándo refrescar, fusionar o podar',
    'navTitle' => 'Actualizar contenido antiguo',
    'seoTitle' => 'Actualizar contenido antiguo: método',
    'description' => 'Tu tráfico cae y no sabes qué artículo tocar. El árbol de decisión para refrescar, fusionar, podar o dejar cada página en paz, con los datos que lo deciden.',
    'excerpt' => 'Cambiar la fecha no es actualizar. Este es el método para decidir, página por página, cuál merece una reescritura, cuál se fusiona con otra y cuál se retira con redirección.',
    'category' => 'Método',
    'published' => '2026-09-20',
    'updated' => '2026-09-20',
    'readingMinutes' => 10,
    'words' => 1655,
    'about' => 'El mantenimiento del contenido publicado: content decay, actualización, fusión y poda',
    'related' => ['enlazado-interno-y-arquitectura-web', 'escribir-contenido-seo-con-ia', 'eeat-experiencia-contenido-con-ia', 'ai-overviews-caida-de-clics', 'medir-el-trafico-de-ia'],
    'toc' => [
        'decae' => 'Por qué el contenido decae (y no siempre es culpa tuya)',
        'diagnostico' => 'El diagnóstico: cuatro números por página',
        'arbol' => 'El árbol de decisión',
        'refrescar' => 'Cómo se refresca de verdad',
        'fusionar' => 'Fusionar: el caso que más tráfico recupera',
        'podar' => 'Podar sin hacerse daño',
        'medir' => 'Cómo saber si ha funcionado',
    ],
    'faq' => [
        '¿Cambiar la fecha de publicación mejora el posicionamiento?' => 'No por sí sola, y Google lo ha dicho más de una vez. La fecha es una señal declarativa: si el contenido es el mismo, actualizarla no cambia nada y, en el mejor de los casos, se ignora. El riesgo es que el usuario vea «actualizado en 2026» y encuentre datos de 2023: eso sí deteriora la confianza, que es lo que de verdad se está midiendo. Cambia la fecha cuando cambies el contenido, y solo entonces.',
        '¿Cada cuánto hay que revisar el contenido antiguo?' => 'Depende de la velocidad del tema, no del calendario. Una guía sobre normativa o sobre herramientas de IA se queda vieja en meses; una sobre un proceso estable aguanta años. Una cadencia razonable es revisar el inventario completo dos veces al año y mirar cada mes solo las diez páginas con más impresiones, que son las que más cuesta perder.',
        '¿Borrar páginas puede mejorar el SEO del sitio?' => 'Puede, pero es el último recurso, no la primera opción. Borrar ayuda cuando hay cientos de URLs sin demanda ni enlaces que se rastrean, se indexan y diluyen los temas del sitio. En un sitio de cincuenta artículos, borrar no va a mover nada: el problema suele ser de destino sin decidir, no de volumen. Antes de borrar, comprueba si lo que hay se puede fusionar.',
        '¿Sirve la IA para reescribir los artículos antiguos?' => 'Sirve para las partes mecánicas: detectar datos que ya no cuadran, sacar la lista de afirmaciones que habría que verificar, proponer una estructura nueva a partir de las consultas reales que recibe la página. No sirve para la parte que da valor, que es aportar lo que ha cambiado desde que lo escribiste. Si la reescritura se limita a reformular lo mismo con otras palabras, tendrás un artículo distinto y el mismo problema.',
        '¿Qué hago con un artículo que perdió tráfico porque la consulta ya la responde la IA?' => 'Primero, comprobar que es eso: en Search Console se ve como impresiones estables con clics cayendo, no como impresiones cayendo. Si es el caso, reescribir por reescribir no lo recupera. Lo que funciona es desplazar el ángulo hacia lo que un resumen generado no puede dar —datos propios, un proceso concreto, una plantilla descargable— y aceptar que parte de ese tráfico no vuelve.',
    ],
    'ctaTitle' => 'Prompts de auditoría de contenido votados por profesionales',
    'ctaBody' => 'Clasificación por intención, detección de solapamientos y briefings de reescritura: <a href="/profesiones/marketing">Marketing</a>. Si además llevas la parte de redirecciones y plantillas, mira <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>Hay un momento en la vida de cualquier sitio con unos años en el que publicar deja de ser la prioridad. Tienes doscientos artículos, la mitad no recibe visitas, y cada uno que añades tarda más en despegar. En ese punto la palanca ya no es escribir más: es decidir qué hacer con lo que ya tienes.</p>

<p>El problema es que «actualizar contenido antiguo» se ha convertido en un consejo vacío. Todo el mundo lo recomienda, casi nadie explica cómo se elige qué tocar. Esto es el método.</p>

<h2 id="decae">Por qué el contenido decae (y no siempre es culpa tuya)</h2>

<p>Una página pierde tráfico por razones muy distintas y cada una pide una respuesta distinta. Confundirlas es lo que hace que se reescriban artículos que no lo necesitaban.</p>

<figure>
<table>
    <thead>
        <tr><th>Causa</th><th>Cómo se ve en los datos</th><th>Respuesta</th></tr>
    </thead>
    <tbody>
        <tr><td>El contenido envejeció</td><td>Posición media que baja despacio y de forma sostenida</td><td>Refrescar</td></tr>
        <tr><td>La intención de la consulta cambió</td><td>Impresiones estables, posición que se desploma de golpe</td><td>Reescribir con otro ángulo</td></tr>
        <tr><td>Te canibalizas con otra página tuya</td><td>Dos URLs alternándose para la misma consulta</td><td>Fusionar</td></tr>
        <tr><td>Entró un competidor mejor</td><td>Caída de posición sin cambios en la demanda</td><td>Refrescar con lo que a él le falta</td></tr>
        <tr><td>La respuesta la da ya el buscador</td><td>Impresiones estables, CTR en caída</td><td>Cambiar el ángulo; asumir parte de la pérdida</td></tr>
        <tr><td>Bajó el interés en el tema</td><td>Impresiones a la baja, posición intacta</td><td>No tocar nada</td></tr>
    </tbody>
</table>
</figure>

<p>Ese último caso es importante: si la consulta ya no se busca, ninguna reescritura la va a resucitar. Es tiempo invertido en una página que no puede crecer.</p>

<h2 id="diagnostico">El diagnóstico: cuatro números por página</h2>

<p>Todo lo que necesitas sale de Search Console y de un rastreo. Exporta doce meses de datos por página y compara los últimos noventa días contra los mismos noventa del año anterior. Para cada URL, anota:</p>

<ul>
    <li><strong>Impresiones</strong> y su variación interanual. Es la demanda: dice si el tema sigue vivo.</li>
    <li><strong>Clics</strong> y su variación. Comparado con lo anterior, separa «me buscan menos» de «me buscan igual y no entran».</li>
    <li><strong>Posición media</strong>. Dice si el problema es de competencia o de demanda.</li>
    <li><strong>Enlaces internos entrantes</strong>, del rastreo. Muchas páginas que parecen muertas están simplemente huérfanas, y eso se arregla con un enlace en vez de con una reescritura. El método está en la <a href="/guias/enlazado-interno-y-arquitectura-web">guía de enlazado interno</a>.</li>
</ul>

<p>Con esas cuatro columnas en una hoja ya puedes ordenar por oportunidad: impresiones altas con posición entre 5 y 20 es donde está casi todo el retorno. Lo que está en posición 60 con veinte impresiones no se arregla, se decide.</p>

<h2 id="arbol">El árbol de decisión</h2>

<p>Para cada página, en este orden. La primera respuesta afirmativa manda:</p>

<ol>
    <li><strong>¿Otra página tuya compite por la misma intención?</strong> → Fusionar. Este caso va primero porque reescribir dos páginas que se pisan solo hace que se pisen mejor.</li>
    <li><strong>¿Tiene impresiones relevantes y está entre la posición 5 y la 20?</strong> → Refrescar. Es el caso con mejor retorno por hora invertida.</li>
    <li><strong>¿Tiene impresiones pero la consulta pide ahora otra cosa?</strong> → Reescribir con otro ángulo. No es un refresco: es un artículo nuevo en la misma URL.</li>
    <li><strong>¿Cero impresiones, cero enlaces entrantes y cero demanda en el tema?</strong> → Podar.</li>
    <li><strong>¿Nada de lo anterior?</strong> → Dejarla en paz y revisarla en seis meses.</li>
</ol>

<p>La quinta opción es la que más cuesta aplicar y la que más tiempo ahorra. En un inventario de doscientas páginas, lo normal es que entre veinte y treinta pidan acción. Las otras ciento setenta están bien como están.</p>

<h2 id="refrescar">Cómo se refresca de verdad</h2>

<p>Refrescar no es pasar el artículo por un modelo y pedirle que lo mejore. Eso produce texto más largo que dice lo mismo, que es exactamente lo que no hace falta. El trabajo tiene cuatro partes:</p>

<p><strong>1. Verificar todo lo que es un hecho.</strong> Cifras, precios, nombres de producto, versiones, plazos legales, capturas de pantalla. Aquí la IA sí ayuda: pásale el texto y pídele que extraiga cada afirmación verificable en una lista, con la frase exacta. Luego compruebas tú una por una. Un modelo detecta bien qué es una afirmación factual; sobre si es cierta, no te fíes.</p>

<p><strong>2. Mirar qué te preguntan de verdad.</strong> En Search Console, filtra las consultas de esa URL. Casi siempre hay dos o tres preguntas con impresiones que el artículo no responde. Esas son las secciones nuevas, y no hace falta inventarse el brief.</p>

<p><strong>3. Cortar.</strong> La introducción de 2022 que explica qué es la inteligencia artificial sobra. La sección sobre una herramienta que ya no existe, también. Un refresco decente suele quitar tanto como añade.</p>

<p><strong>4. Reenlazar.</strong> Al artículo actualizado le faltan enlaces a lo que has publicado desde entonces, y a lo que has publicado desde entonces le falta enlazarlo a él.</p>

<p>Cuando el refresco toca datos o experiencia propia, es el momento de aplicar lo de la <a href="/guias/eeat-experiencia-contenido-con-ia">guía de E-E-A-T</a>: quién firma, qué ha probado y de dónde sale cada cifra.</p>

<h2 id="fusionar">Fusionar: el caso que más tráfico recupera</h2>

<p>Dos o tres artículos medianos sobre el mismo tema casi siempre rinden peor que uno bueno. La mecánica:</p>

<ol>
    <li>Elige la URL superviviente: la que más enlaces internos y externos tenga, no la mejor escrita. Los enlaces no se reescriben; el texto sí.</li>
    <li>Lleva a esa URL lo que las otras tengan de valioso, integrado en la estructura, no pegado al final.</li>
    <li>Redirecciona las demás con un 301 a la superviviente.</li>
    <li><strong>Actualiza los enlaces internos que apuntaban a las retiradas</strong> para que apunten directamente a la nueva. Dejarlos encadenando redirecciones es el paso que siempre se olvida.</li>
    <li>Si alguna tenía enlaces externos relevantes, avisa a quien enlazó si tienes relación. Si no, la redirección hace su trabajo.</li>
</ol>

<p>Un aviso sobre la redirección: tiene que ir a la página equivalente, no a la portada ni a la categoría. Una redirección masiva a la home se trata como un error blando y no transfiere nada.</p>

<h2 id="podar">Podar sin hacerse daño</h2>

<p>Podar es retirar contenido que no tiene demanda, no tiene enlaces y no encaja con el sitio. Antes de hacerlo, tres comprobaciones que evitan el noventa por ciento de los arrepentimientos:</p>

<ul>
    <li><strong>¿Tiene enlaces externos?</strong> Si alguien la enlazó, no se borra: se redirige a lo más parecido.</li>
    <li><strong>¿Convierte aunque no traiga tráfico?</strong> Una página con cincuenta visitas al mes que genera dos contactos no es contenido muerto.</li>
    <li><strong>¿Es lo único que cubre ese tema?</strong> Entonces no sobra: está sin trabajar.</li>
</ul>

<p>Si pasa las tres, elige el destino: redirección 301 si hay una página equivalente, <code>410</code> si no la hay y el contenido no volverá, <code>noindex</code> si quieres conservarla visible para los usuarios pero fuera del índice. Borrar sin más y dejar un 404 solo tiene sentido en páginas que nadie enlazó nunca.</p>

<h2 id="medir">Cómo saber si ha funcionado</h2>

<p>Márcate la fecha de cada cambio en la misma hoja del inventario, y no mires nada durante cuatro semanas. Los movimientos de las dos primeras son ruido de recrawl.</p>

<p>A partir de ahí, compara los veintiocho días posteriores contra los veintiocho anteriores, y para la misma URL y las mismas consultas. Si la comparación se hace contra el total del sitio, cualquier cosa parecerá que funciona.</p>

<figure>
<table>
    <thead>
        <tr><th>Acción</th><th>Qué esperar</th><th>Cuándo</th></tr>
    </thead>
    <tbody>
        <tr><td>Refresco</td><td>Posición media mejor en las consultas que ya tenía</td><td>3–8 semanas</td></tr>
        <tr><td>Fusión</td><td>La superviviente supera la suma de clics de las dos</td><td>4–12 semanas</td></tr>
        <tr><td>Poda</td><td>Nada visible en tráfico; menos URLs rastreadas</td><td>Se mide en el rastreo, no en clics</td></tr>
        <tr><td>Reenlazado</td><td>Más impresiones en la página reforzada</td><td>2–6 semanas</td></tr>
    </tbody>
</table>
</figure>

<p>Y una expectativa honesta: parte del tráfico que se perdió con la llegada de los resúmenes generados no vuelve con una reescritura, porque el clic ya no se produce. Lo que se recupera ahí es otra cosa —ser la fuente que se cita— y se trabaja distinto; está en la <a href="/guias/ai-overviews-caida-de-clics">guía sobre la caída de clics</a>.</p>
HTML,
];
