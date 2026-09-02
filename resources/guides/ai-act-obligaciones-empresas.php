<?php

return [
    'title' => 'AI Act: las obligaciones que ya afectan a tu empresa',
    'navTitle' => 'AI Act para empresas',
    'seoTitle' => 'AI Act 2026: qué obliga a tu empresa (y qué se ha aplazado)',
    'description' => 'El Reglamento Europeo de IA ya se sanciona. Qué obliga a cualquier empresa que use IA: formar al personal, avisar y marcar el contenido generado.',
    'excerpt' => 'No hace falta desarrollar IA para tener obligaciones: basta con usarla. Las tres que aplican a casi todo el mundo —formar al personal, avisar y marcar—, las que se han aplazado y un plan de 30 días para dejarlo cerrado.',
    'category' => 'Normativa',
    'published' => '2026-09-02',
    'updated' => '2026-09-02',
    'readingMinutes' => 13,
    'words' => 2120,
    'about' => 'Reglamento Europeo de Inteligencia Artificial',
    'related' => ['politica-de-uso-de-ia-en-la-empresa', 'usar-ia-sin-filtrar-datos-de-clientes', 'automatizar-tareas-con-ia-en-el-trabajo'],
    'toc' => [
        'quien-obliga' => 'La confusión de base: esto no va solo de quien fabrica IA',
        'calendario' => 'Qué está en vigor y qué se ha aplazado',
        'alfabetizacion' => 'Artículo 4: formar al personal no es opcional',
        'que-cuenta' => 'Qué cuenta como alfabetización y qué no',
        'transparencia' => 'Artículo 50: avisar que es una IA y marcar lo que genera',
        'prohibiciones' => 'Las prácticas prohibidas que sí te pueden pillar',
        'sanciones' => 'Cuánto cuesta no hacerlo',
        'inventario' => 'El inventario: el documento del que sale todo lo demás',
        'plan' => 'Plan de 30 días',
    ],
    'faq' => [
        '¿El AI Act obliga a mi empresa si solo usamos ChatGPT?' => 'Sí, en la parte que importa. El Reglamento distingue entre proveedor (quien desarrolla o comercializa el sistema) y responsable del despliegue (quien lo usa en el ejercicio de su actividad), y una empresa que pone ChatGPT, Claude o Copilot a trabajar cae en la segunda categoría. Como responsable del despliegue no tienes que auditar el modelo ni documentar cómo se entrenó, pero sí garantizar la alfabetización en IA de tu personal (artículo 4) y cumplir las obligaciones de transparencia del artículo 50 cuando el sistema interactúa con personas o genera contenido publicable.',
        '¿Desde cuándo es obligatoria la formación en IA?' => 'Desde el 2 de febrero de 2025. El artículo 4 fue una de las primeras piezas del Reglamento en aplicarse, junto con las prohibiciones del artículo 5, y no ha entrado en ninguno de los aplazamientos posteriores. Lo que cambió después es la capacidad real de exigirlo: el régimen sancionador del artículo 99 empezó a aplicarse el 2 de agosto de 2025 y la supervisión nacional está desplegada desde agosto de 2026. La obligación llevaba año y medio en vigor antes de que hubiera quien pudiera preguntar por ella.',
        '¿Cuántas horas de formación exige el AI Act?' => 'Ninguna. El artículo 4 no fija horas, ni temario, ni exige un proveedor externo o un certificado. Habla de un «nivel suficiente de alfabetización en materia de IA» teniendo en cuenta los conocimientos técnicos, la experiencia y la formación de las personas afectadas, y el contexto en que se usan los sistemas. Eso es deliberado y tiene una consecuencia práctica: como no hay un mínimo que puedas cumplir por defecto, lo que se te va a pedir es evidencia de que has valorado el riesgo de tus usos concretos y has formado en consecuencia.',
        '¿Hay que avisar de que un texto lo ha escrito una IA?' => 'Depende de para qué sea. El artículo 50 obliga a marcar el contenido sintético en formato legible por máquina y a informar cuando se publica texto generado por IA con el fin de informar al público sobre asuntos de interés público, o cuando se difunden ultrafalsificaciones de imagen, audio o vídeo. Un correo interno o un borrador que un humano revisa y firma no entran ahí. Un artículo de tu blog corporativo sobre un tema de interés público, publicado sin revisión editorial humana, sí. Y ojo con la excepción: si una persona revisa el contenido y alguien asume la responsabilidad editorial, la obligación de informar decae.',
        '¿Qué pasó con el aplazamiento de las obligaciones de alto riesgo?' => 'El paquete conocido como Digital Omnibus movió el calendario de los sistemas de alto riesgo: los del anexo III pasaron de agosto de 2026 a finales de 2027, y los del anexo I a 2028. Lo importante es lo que no movió: las prohibiciones del artículo 5, la alfabetización del artículo 4, las obligaciones de los modelos de uso general y la transparencia del artículo 50 siguen su calendario original. Si tu conclusión al leer la noticia del aplazamiento fue «tenemos un año más para todo», es la conclusión equivocada.',
        '¿Cuál es la multa por incumplir el artículo 50?' => 'Hasta 15 millones de euros o el 3 % del volumen de negocio mundial anual, la cifra que sea mayor. Para las prácticas prohibidas del artículo 5 la horquilla sube a 35 millones o el 7 %, y facilitar información incorrecta a las autoridades se queda en 7,5 millones o el 1 %. Para pymes y empresas emergentes se aplica la menor de las dos cifras en lugar de la mayor, y la autoridad debe ponderar gravedad, duración, cooperación y si el incumplimiento fue intencionado.',
    ],
    'ctaTitle' => 'La formación se sostiene mejor con material propio',
    'ctaBody' => 'La forma más barata de alfabetizar a un equipo es darle prompts que ya funcionan en su oficio y explicarle por qué funcionan. En el catálogo hay material votado por quien lo usa a diario en <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/rrhh">RRHH</a>, <a href="/profesiones/finanzas">Finanzas</a> y siete profesiones más.',
    'body' => <<<'HTML'
<p>Hay una lectura muy extendida del Reglamento Europeo de Inteligencia Artificial que dice, más o menos, que es un problema de las grandes tecnológicas. Es cómoda y es falsa. El texto reparte obligaciones por el papel que juegas, no por tu tamaño, y el papel de casi todas las empresas españolas —«usamos herramientas de IA que ha hecho otro»— tiene deberes propios desde febrero de 2025.</p>

<p>Esta guía no es un resumen del Reglamento: son 113 artículos y no necesitas leerlos. Es la lista de lo que te aplica si tú no fabricas IA, solo la usas, con las fechas reales y un plan para cerrarlo en un mes.</p>

<h2 id="quien-obliga">La confusión de base: esto no va solo de quien fabrica IA</h2>

<p>El Reglamento define varios papeles. Los dos que importan aquí:</p>

<figure>
<table>
    <thead>
        <tr><th>Papel</th><th>Quién es</th><th>Qué le toca</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Proveedor</strong></td><td>Quien desarrolla un sistema de IA y lo pone en el mercado con su nombre</td><td>El bloque gordo: documentación técnica, gestión de riesgos, evaluación de conformidad</td></tr>
        <tr><td><strong>Responsable del despliegue</strong></td><td>Quien usa un sistema de IA en el ejercicio de su actividad profesional</td><td>Alfabetización, transparencia, supervisión humana y uso conforme a las instrucciones</td></tr>
    </tbody>
</table>
</figure>

<p>Si tu empresa tiene licencias de ChatGPT Business, Copilot o Claude y la gente las usa para trabajar, eres responsable del despliegue. No te toca auditar el modelo ni explicar con qué datos se entrenó: eso es del proveedor. Te tocan tres cosas concretas que sí están en tu mano y de las que hablamos a continuación.</p>

<p>Y hay una trampa que conviene conocer: si coges un sistema de otro y <strong>lo pones en el mercado con tu marca</strong>, o le cambias la finalidad prevista, dejas de ser responsable del despliegue y pasas a ser proveedor, con todo el paquete. Montar un chatbot sobre la API de un tercero y publicarlo como «el asistente de [tu empresa]» está más cerca de esa frontera de lo que parece.</p>

<h2 id="calendario">Qué está en vigor y qué se ha aplazado</h2>

<p>El calendario se ha movido y las noticias sobre el movimiento han generado más confusión que el calendario original. El estado a septiembre de 2026:</p>

<figure>
<table>
    <thead>
        <tr><th>Fecha</th><th>Qué aplica</th><th>Estado</th></tr>
    </thead>
    <tbody>
        <tr><td>2 feb 2025</td><td>Prohibiciones (art. 5) y alfabetización en IA (art. 4)</td><td><strong>En vigor</strong></td></tr>
        <tr><td>2 ago 2025</td><td>Modelos de uso general, gobernanza y régimen sancionador (art. 99)</td><td><strong>En vigor</strong></td></tr>
        <tr><td>2 ago 2026</td><td>Transparencia del art. 50 y aplicación general del Reglamento</td><td><strong>En vigor</strong></td></tr>
        <tr><td>dic 2027</td><td>Sistemas de alto riesgo del anexo III</td><td>Aplazado</td></tr>
        <tr><td>ago 2028</td><td>Sistemas de alto riesgo del anexo I (productos regulados)</td><td>Aplazado</td></tr>
    </tbody>
</table>
</figure>

<p>El aplazamiento afecta a los sistemas de alto riesgo: los que deciden sobre acceso al empleo, a la educación, a servicios esenciales o al crédito. Si estás usando IA para cribar currículums, eso es alto riesgo del anexo III y tienes margen hasta finales de 2027 para el paquete completo de obligaciones.</p>

<p>Lo que <strong>no</strong> se ha aplazado es todo lo demás. Las tres obligaciones transversales —artículo 4, artículo 5 y artículo 50— siguen exactamente donde estaban, y son las que afectan a la empresa que no hace nada de alto riesgo.</p>

<h2 id="alfabetizacion">Artículo 4: formar al personal no es opcional</h2>

<p>El artículo 4 es corto y por eso se lee mal. Obliga a proveedores y responsables del despliegue a adoptar medidas para garantizar que su personal —y cualquiera que opere los sistemas por su cuenta— tenga un <em>nivel suficiente de alfabetización en materia de IA</em>, teniendo en cuenta sus conocimientos previos y el contexto en que se van a usar los sistemas.</p>

<p>Tres cosas que la gente da por hechas y no están en el texto:</p>

<ul>
    <li><strong>No fija horas ni temario.</strong> No hay un mínimo de cuatro horas ni un programa oficial que puedas comprar y dar por cumplido.</li>
    <li><strong>No exige certificado ni proveedor externo.</strong> Puedes formar en casa. Lo que necesitas es poder demostrar que lo has hecho.</li>
    <li><strong>No es un curso único.</strong> «Nivel suficiente» es un estado, no un evento. Quien entra nuevo en la empresa también tiene que llegar a ese nivel.</li>
</ul>

<p>La ausencia de mínimos es lo que desconcierta a todo el mundo, y es intencionada: el Reglamento está escrito para ser proporcional. La consecuencia práctica es que no puedes cumplir por defecto, pero tampoco hace falta desplegar un máster. Lo que se te va a pedir en una inspección es evidencia de que <strong>has valorado tus usos concretos y has formado en consecuencia</strong>: un registro de quién ha recibido qué, cuándo, y sobre qué sistemas.</p>

<h2 id="que-cuenta">Qué cuenta como alfabetización y qué no</h2>

<p>Un vídeo genérico de veinte minutos sobre «qué es la inteligencia artificial» y un test de cinco preguntas cumple el trámite y no cumple la norma, porque no está referido a tus sistemas ni a tus riesgos. Lo que sí funciona, ordenado de más a menos importante:</p>

<ol>
    <li><strong>Qué herramientas están aprobadas y cuáles no.</strong> Nombres concretos, y qué hacer si alguien quiere usar una que no está en la lista. Sin esto, lo demás es teoría.</li>
    <li><strong>Qué datos no entran nunca.</strong> Datos personales de clientes, información sujeta a contrato de confidencialidad, credenciales. Con ejemplos de tu negocio, no del negocio de nadie.</li>
    <li><strong>Qué límites tiene la herramienta.</strong> Que inventa citas y cifras con total aplomo, que no sabe lo que pasó la semana pasada si no se lo das, que dos preguntas iguales pueden dar respuestas distintas.</li>
    <li><strong>Quién revisa qué antes de que salga.</strong> Un criterio explícito de supervisión humana según lo que esté en juego.</li>
    <li><strong>Cómo se avisa de un problema.</strong> Un canal, una persona y la garantía de que avisar no tiene coste personal.</li>
</ol>

<p>Los puntos 1, 2 y 4 probablemente ya estén escritos si tienes una política de uso de IA. Si no la tienes, escríbela primero: la formación es el vehículo, la política es el contenido. Está desarrollada en la <a href="/guias/politica-de-uso-de-ia-en-la-empresa">guía de política de uso de IA en la empresa</a>, y la parte de datos de clientes, en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="transparencia">Artículo 50: avisar que es una IA y marcar lo que genera</h2>

<p>El artículo 50 es el que entró en aplicación general el 2 de agosto de 2026 y el que más gente tiene incumplido sin saberlo. Cuatro supuestos, de los que a una empresa normal le afectan sobre todo los dos primeros:</p>

<figure>
<table>
    <thead>
        <tr><th>Supuesto</th><th>Obligación</th><th>Caso típico</th></tr>
    </thead>
    <tbody>
        <tr><td>Sistema que interactúa con personas</td><td>Informar de que están ante una IA, salvo que sea evidente</td><td>Chatbot de atención al cliente</td></tr>
        <tr><td>Generación de contenido sintético</td><td>Marcarlo en formato legible por máquina y detectable como generado</td><td>Imágenes y textos producidos con IA</td></tr>
        <tr><td>Ultrafalsificaciones</td><td>Revelar que el contenido ha sido generado o manipulado</td><td>Vídeo o voz sintética de una persona real</td></tr>
        <tr><td>Texto publicado para informar al público</td><td>Revelar la generación artificial</td><td>Nota de prensa o artículo sobre asuntos de interés público</td></tr>
    </tbody>
</table>
</figure>

<p>Dos matices que evitan la sobrerreacción. El primero: la obligación de revelar en el cuarto supuesto <strong>decae si una persona revisa el contenido y alguien asume la responsabilidad editorial</strong>. Un blog corporativo con borrador de IA y revisión humana firmada no necesita un aviso en cada entrada. El segundo: el marcado legible por máquina es una obligación del proveedor del sistema generador, no tuya. Lo tuyo es no quitarlo.</p>

<p>Donde sí tienes trabajo directo es en el chatbot. Si tienes uno en la web, ábrelo ahora y comprueba si el primer mensaje deja claro que no es una persona. «Hola, soy Ana, ¿en qué te ayudo?» no lo deja claro. Y en las plantillas de correo automático que firma un nombre humano, tampoco.</p>

<h2 id="prohibiciones">Las prácticas prohibidas que sí te pueden pillar</h2>

<p>El artículo 5 suena a ciencia ficción distópica —puntuación social, manipulación subliminal— y por eso casi nadie lo lee entero. Hay dos prohibiciones que una empresa corriente puede pisar sin proponérselo:</p>

<ul>
    <li><strong>Reconocimiento de emociones en el trabajo o en centros educativos.</strong> Incluye herramientas de análisis de sentimiento sobre entrevistas grabadas o llamadas de ventas cuando puntúan el estado emocional de la persona. Analizar el contenido de una llamada es una cosa; inferir emociones del empleado, otra.</li>
    <li><strong>Categorización biométrica</strong> para deducir raza, opiniones políticas, afiliación sindical, creencias, vida sexual u orientación sexual.</li>
</ul>

<p>Estas dos no se han aplazado, están en vigor desde febrero de 2025 y son las que llevan la sanción más alta del Reglamento.</p>

<h2 id="sanciones">Cuánto cuesta no hacerlo</h2>

<figure>
<table>
    <thead>
        <tr><th>Incumplimiento</th><th>Tope</th></tr>
    </thead>
    <tbody>
        <tr><td>Prácticas prohibidas (art. 5)</td><td>35 M € o 7 % del volumen de negocio mundial</td></tr>
        <tr><td>Resto de obligaciones, incluida la transparencia del art. 50</td><td>15 M € o 3 %</td></tr>
        <tr><td>Información incorrecta a las autoridades</td><td>7,5 M € o 1 %</td></tr>
    </tbody>
</table>
</figure>

<p>Se aplica la cifra mayor de las dos, salvo para pymes y empresas emergentes, donde se aplica la menor. Y la autoridad tiene que ponderar gravedad, duración, cooperación, si hubo intención y si es reincidencia, así que el tope no es la sanción esperada de un chatbot sin aviso.</p>

<p>Con todo, el riesgo económico realista para una pyme no es la multa. Es la cláusula de cumplimiento normativo de un contrato con un cliente grande, que te va a pedir por escrito que acredites la alfabetización de tu personal mucho antes de que llame ninguna autoridad. Ese es el motivo práctico para tener el registro hecho.</p>

<h2 id="inventario">El inventario: el documento del que sale todo lo demás</h2>

<p>Todo lo anterior se vuelve manejable en cuanto tienes una tabla. Una hoja, una fila por sistema de IA en uso:</p>

<pre><code>sistema | proveedor | quién lo usa | para qué | ¿datos personales? |
¿interactúa con clientes? | ¿genera contenido que se publica? |
¿decide sobre personas? | responsable</code></pre>

<p>Rellenarla lleva un par de tardes y produce tres respuestas de golpe: la lista de herramientas aprobadas para la formación, los sistemas que activan el artículo 50 (columnas 6 y 7) y los candidatos a alto riesgo (columna 8). Además destapa lo que nadie había registrado, que suele ser bastante: la extensión que alguien instaló en el navegador, el bot de transcripción que se cuela en las reuniones, la cuenta personal de una herramienta que se usa para trabajo.</p>

<p>Empieza por preguntar, no por auditar. Si el inventario se percibe como cacería, la mitad de los usos no se declaran y te queda un documento que certifica una realidad falsa.</p>

<h2 id="plan">Plan de 30 días</h2>

<ol>
    <li><strong>Semana 1 — Inventario.</strong> La tabla de arriba, preguntando por equipos. Sin juicio, solo censo.</li>
    <li><strong>Semana 2 — Política.</strong> Herramientas aprobadas, datos que no entran nunca, qué se revisa antes de salir y a quién se avisa. Dos folios bastan.</li>
    <li><strong>Semana 3 — Transparencia.</strong> Repasa chatbots, formularios automáticos y contenido publicado contra la tabla del artículo 50. Ajusta los avisos donde falten.</li>
    <li><strong>Semana 4 — Formación y registro.</strong> Una sesión por área, con los prompts y los casos de esa área. Y un registro con fecha, asistentes y material entregado: eso es la evidencia.</li>
</ol>

<p>Un aviso final sobre el orden. La tentación es empezar por la formación, porque es la obligación que se nombra y la que se puede subcontratar. Hacerlo así produce sesiones genéricas que no acreditan nada, porque no están referidas a los sistemas que de verdad usas. El inventario primero no es burocracia: es lo que hace que la formación sea defendible.</p>
HTML,
];
