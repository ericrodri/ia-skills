<?php

return [
    'title' => 'Cómo planificar un viaje con IA: itinerario, presupuesto y qué comprobar antes de reservar',
    'navTitle' => 'Planificar un viaje con IA',
    'seoTitle' => 'Cómo planificar un viaje con IA paso a paso',
    'description' => 'Cómo planificar un viaje con IA: qué datos darle, cómo pedir itinerario y presupuesto, qué herramienta usar y qué comprobar antes de reservar.',
    'excerpt' => 'La IA arma en un minuto un itinerario que antes costaba una tarde de pestañas abiertas. También se inventa horarios, mezcla precios de hace dos años y no sabe que el museo cierra los lunes. Cómo aprovechar lo primero sin pagar lo segundo.',
    'category' => 'Práctica',
    'published' => '2026-10-07',
    'updated' => '2026-10-07',
    'readingMinutes' => 7,
    'words' => 1231,
    'about' => 'Planificación de viajes, itinerarios y presupuestos con asistentes de inteligencia artificial',
    'related' => ['menu-semanal-con-ia', 'como-usar-perplexity', 'alucinaciones-de-la-ia', 'como-escribir-prompts-efectivos', 'herramientas-de-ia-gratis', 'traducir-con-ia', 'aprender-ingles-con-ia'],
    'toc' => [
        'para-que-sirve' => 'Para qué sirve y para qué no',
        'que-herramienta' => 'Qué herramienta usar',
        'los-datos' => 'Los datos que necesita',
        'paso-a-paso' => 'El plan paso a paso',
        'comprobar' => 'Qué comprobar antes de reservar',
        'durante-el-viaje' => 'Durante el viaje',
    ],
    'faq' => [
        '¿Qué IA es mejor para planificar un viaje?' => 'Para el itinerario y las ideas sirve cualquier asistente general, como ChatGPT, Gemini o Claude. Para datos que cambian, como horarios, precios o requisitos de entrada, conviene una herramienta que busque en la web y cite fuentes, como Perplexity o el modo de búsqueda de ChatGPT y Gemini. Gemini, además, puede consultar Google Maps y vuelos de Google.',
        '¿Puede la IA reservar vuelos y hoteles por mí?' => 'Algunos asistentes con modo agente pueden navegar por webs de reservas y rellenar formularios, pero no es buena idea dejar que paguen solos: se equivocan de fecha, de tarifa o de número de viajeros. Úsala para comparar y preparar la reserva, y haz tú el último paso revisando cada dato antes de pagar.',
        '¿Son fiables los precios y horarios que da ChatGPT?' => 'No sin comprobarlos. Los modelos mezclan información de distintas fechas y a veces inventan datos concretos con total seguridad. Toma los precios como orden de magnitud para el presupuesto y confirma horarios, días de cierre y tarifas en la web oficial de cada sitio antes de organizar el día en torno a ellos.',
        '¿Puedo planificar un viaje con IA gratis?' => 'Sí. Los planes gratuitos de ChatGPT, Gemini, Claude o Perplexity bastan para preparar un itinerario, un presupuesto y una lista de equipaje. El límite está en el número de mensajes o de búsquedas al día; si lo preparas en una o dos sesiones bien organizadas, no se nota.',
        '¿Qué datos no debo darle a la IA cuando planifico un viaje?' => 'No hace falta, ni conviene, pegar el número de pasaporte, los datos de la tarjeta ni los localizadores de reserva. Para planificar le basta con fechas, ciudad de salida, número de viajeros, presupuesto y gustos. Si subes una reserva para que te haga el resumen, tacha antes los datos personales.',
    ],
    'ctaTitle' => 'Instrucciones que ya funcionan',
    'ctaBody' => 'Un itinerario es un buen ejercicio para aprender a dar contexto a la IA. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para organizar y planificar, por ejemplo en <a href="/profesiones/freelancers">autónomos</a> y <a href="/profesiones/product-management">gestión de producto</a>.',
    'body' => <<<'HTML'
<p>Preparar un viaje solía significar una tarde con veinte pestañas abiertas: blogs, foros, mapas, webs de museos y comparadores. Un asistente de IA resume ese trabajo en unos minutos y propone un itinerario con orden lógico, tiempos y presupuesto. El problema es que lo hace con la misma seguridad cuando acierta que cuando se inventa que un mercado abre el domingo. Esta guía explica cómo pedirle el plan y, sobre todo, qué comprobar antes de pagar nada.</p>

<h2 id="para-que-sirve">Para qué sirve y para qué no</h2>

<p>La IA es muy buena en lo que cuesta pensar y poco en lo que cambia cada semana:</p>

<ul>
    <li><strong>Sirve para</strong>: repartir los días por zonas para no cruzar la ciudad tres veces, proponer alternativas según tus gustos, calcular un presupuesto aproximado, preparar la lista de equipaje, traducir frases útiles y explicar costumbres locales.</li>
    <li><strong>No sirve, sin comprobar</strong>, para: horarios, precios exactos, días de cierre, requisitos de entrada al país, frecuencias de transporte o si un restaurante sigue abierto. Son datos que cambian y que el modelo puede tener desactualizados o directamente inventar, como explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
</ul>

<h2 id="que-herramienta">Qué herramienta usar</h2>

<table>
    <thead>
        <tr><th>Herramienta</th><th>Fuerte en</th><th>Úsala para</th></tr>
    </thead>
    <tbody>
        <tr><td>ChatGPT, Claude</td><td>Organizar, razonar, adaptar el plan a tus gustos</td><td>El itinerario, el presupuesto y la lista de equipaje</td></tr>
        <tr><td>Gemini</td><td>Conexión con Google Maps y vuelos de Google</td><td>Distancias, tiempos de desplazamiento y opciones de vuelo</td></tr>
        <tr><td>Perplexity o el modo búsqueda</td><td>Buscar en la web y citar la fuente</td><td>Datos que cambian: horarios, requisitos, eventos en tus fechas</td></tr>
    </tbody>
</table>

<p>No necesitas pagar ninguna: los planes gratuitos bastan para un viaje. Si quieres comparar qué ofrece cada una, está en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>, y cómo sacarle partido a la búsqueda con fuentes en <a href="/guias/como-usar-perplexity">cómo usar Perplexity</a>.</p>

<h2 id="los-datos">Los datos que necesita</h2>

<p>«Organízame un viaje a Roma» da un itinerario genérico, el mismo que le daría a cualquiera. La diferencia la marca el contexto. Antes de escribir, ten claro:</p>

<ul>
    <li><strong>Fechas y duración</strong>, con horas de llegada y salida: el primer y el último día casi nunca son días completos.</li>
    <li><strong>Quién viaja</strong>: edades, si hay niños, movilidad reducida o alguien que no camina mucho.</li>
    <li><strong>Presupuesto</strong> total o por día, y si incluye vuelos y alojamiento.</li>
    <li><strong>Ritmo</strong>: tres visitas al día o una y mucho paseo.</li>
    <li><strong>Gustos y vetos</strong>: museos sí, colas de dos horas no; comida local, nada de cadenas.</li>
    <li><strong>Dónde te alojas</strong>, si ya lo sabes, para que agrupe los planes cerca.</li>
</ul>

<h2 id="paso-a-paso">El plan paso a paso</h2>

<p>Mejor en varias peticiones cortas que en una enorme. Este orden funciona:</p>

<p><strong>1. El esqueleto.</strong> Pide primero el reparto por zonas, sin detalle:</p>

<blockquote>«Viajamos dos adultos y un niño de 8 años a Lisboa del 14 al 18 de marzo. Llegamos el 14 a las 13:00 y salimos el 18 a las 17:00. Nos alojamos en el barrio de Baixa. Nos gusta caminar, la comida local y los miradores; no nos interesan las compras. Presupuesto de 120 € al día para los tres sin contar hotel. Propón un reparto de los días por zonas, con una actividad principal por mañana y otra por tarde, y dime qué excursión de un día merece la pena. No inventes horarios ni precios exactos: si no estás seguro, dilo.»</blockquote>

<p>Esa última frase no elimina los errores, pero reduce los datos inventados y te señala lo que tienes que verificar. Más trucos para pedir bien están en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<p><strong>2. Ajusta.</strong> Corrige lo que no encaje: «el martes llueve según la previsión, cambia el día de playa por algo a cubierto», «quita un mirador y pon una tarde libre».</p>

<p><strong>3. El detalle.</strong> Con el esqueleto cerrado, pide cada día con tiempos de desplazamiento, una opción para comer en la zona y un plan alternativo si algo está cerrado.</p>

<p><strong>4. El presupuesto.</strong> Pide una tabla con transporte, comidas, entradas e imprevistos, y que marque qué cifras son estimaciones. Si la copias a una hoja de cálculo, podrás ir anotando lo que gastas de verdad.</p>

<p><strong>5. La lista.</strong> Equipaje según la previsión, documentos, enchufes, aplicaciones que conviene descargar y unas cuantas frases en el idioma local.</p>

<h2 id="comprobar">Qué comprobar antes de reservar</h2>

<p>Todo lo que tenga fecha, hora o precio se confirma en la fuente oficial. En particular:</p>

<ul>
    <li><strong>Requisitos de entrada</strong>: pasaporte o DNI, visados, autorizaciones electrónicas y vacunas. Consulta la web del país de destino y las recomendaciones de viaje del Ministerio de Asuntos Exteriores, no a la IA.</li>
    <li><strong>Horarios y días de cierre</strong> de museos y monumentos, y si hay que reservar entrada con antelación.</li>
    <li><strong>Transporte</strong>: horarios de trenes y autobuses, y si la línea existe todavía.</li>
    <li><strong>Eventos en tus fechas</strong>: festivos, huelgas u obras que cambian el plan.</li>
    <li><strong>Que el sitio existe</strong>: busca en el mapa cada restaurante y alojamiento que te recomiende. A veces mezcla nombres o propone locales que cerraron hace años.</li>
</ul>

<p>Si un asistente con modo agente se ofrece a reservar por ti, déjale comparar y preparar, pero el pago hazlo tú, revisando fechas, nombres y número de viajeros. Y no le pegues el número de pasaporte ni los datos de la tarjeta: para planificar no los necesita.</p>

<h2 id="durante-el-viaje">Durante el viaje</h2>

<p>En destino, la IA del móvil sigue siendo útil. Con la cámara puedes traducir una carta o un cartel, y con la voz mantener una conversación sencilla con alguien que no habla tu idioma; lo contamos en <a href="/guias/traducir-con-ia">traducir con IA</a>. También sirve para replanificar sobre la marcha: «estamos en tal sitio, ha empezado a llover y tenemos tres horas, ¿qué hay a cubierto a menos de quince minutos andando?». Con la misma regla de siempre: lo que dependa de un horario, compruébalo antes de ir.</p>
HTML,
];
