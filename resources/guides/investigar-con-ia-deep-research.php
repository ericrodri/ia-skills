<?php

return [
    'title' => 'Investigar con IA: qué hace bien deep research y dónde falla',
    'navTitle' => 'Investigar con IA',
    'seoTitle' => 'Deep research: investigar con IA y verificar fuentes',
    'description' => 'Un informe con cuarenta citas parece riguroso hasta que abres tres. Cómo funciona la investigación profunda, sus tres sesgos y el protocolo de verificación.',
    'excerpt' => 'La investigación profunda con IA no falla inventando fuentes: falla eligiéndolas. Un informe puede tener cuarenta enlaces reales y aun así estar construido sobre lo que era fácil de encontrar en lugar de lo que era cierto.',
    'category' => 'Método',
    'published' => '2026-09-05',
    'updated' => '2026-09-05',
    'readingMinutes' => 11,
    'words' => 1811,
    'about' => 'Investigación documental asistida por agentes de IA con búsqueda web',
    'related' => ['alucinaciones-de-la-ia', 'resumir-documentos-largos-con-ia', 'que-es-un-agente-de-ia'],
    'toc' => [
        'que-es' => 'Qué hace un modo de investigación profunda',
        'no-es' => 'El fallo no es inventar: es seleccionar',
        'sesgos' => 'Tres sesgos que arrastra cualquier informe generado',
        'donde-sirve' => 'Dónde rinde y dónde te hace perder tiempo',
        'encargo' => 'Cómo se formula el encargo',
        'verificar' => 'El protocolo de verificación en tres pasadas',
        'citar' => 'Qué puedes publicar y cómo se cita',
        'regla' => 'La regla que queda',
    ],
    'faq' => [
        '¿Qué es deep research y en qué se diferencia de una búsqueda normal?' => 'Es un modo agéntico: en lugar de responder de una vez, el sistema descompone la pregunta en subpreguntas, lanza decenas de búsquedas, abre páginas, lee lo que encuentra, reformula según lo que va viendo y termina redactando un informe con enlaces. Una búsqueda normal en un chat hace dos o tres consultas y responde en segundos; una investigación profunda encadena iteraciones durante cinco a treinta minutos. La diferencia real no es la longitud del resultado, es que el sistema decide sobre la marcha qué buscar a continuación.',
        '¿Se puede fiar uno de las fuentes que cita un informe de IA?' => 'De que existan, casi siempre; de que sostengan lo que se les atribuye, no siempre. Cuando el sistema navega de verdad, los enlaces suelen ser reales, y ahí desaparece la referencia fantasma clásica. Lo que persiste es más sutil: una fuente citada para una afirmación que no aparece en ella, un dato correcto atribuido al agregador en vez de al estudio original, o una cifra que en la fuente venía con un matiz que se perdió por el camino. Por eso la verificación se hace abriendo enlaces, no contándolos.',
        '¿Cuánto tarda una investigación profunda con IA?' => 'Entre cinco y treinta minutos según la herramienta y la amplitud de la pregunta, y el tiempo no correlaciona con la calidad. Una consulta mal formulada tarda lo mismo y devuelve treinta páginas de material adyacente. El tiempo que de verdad importa es el de después: revisar un informe generado en serio cuesta entre veinte y cuarenta minutos, y si no piensas dedicarlos, el ahorro es aparente.',
        '¿Sirve para investigar temas de España o de mi sector?' => 'Rinde mucho menos, y conviene saberlo antes de encargarlo. Cuanto más específico y local es el tema —normativa autonómica, convenios sectoriales, cifras de un mercado pequeño—, más se apoya el sistema en fuentes secundarias en inglés y en material de agencias que reescriben a otros. En esos casos funciona mejor al revés: reúne tú los documentos oficiales, pégalos y usa la IA para leerlos y contrastarlos, en lugar de pedirle que los encuentre.',
        '¿Puedo publicar un informe hecho con deep research?' => 'No tal cual. Un informe generado es material de partida: te da el mapa del tema, los nombres que se repiten y las fuentes por donde empezar. Publicarlo sin reescribir arrastra tres problemas: afirmaciones que ninguna fuente sostiene exactamente, párrafos demasiado próximos a su origen y una estructura que se reconoce. Lo que sí se publica bien es lo que tú escribes después de leer las fuentes que el informe te ahorró encontrar.',
        '¿Qué hago si dos fuentes del informe se contradicen?' => 'Alegrarte, porque es la señal más útil que puede darte. Un informe generado tiende a la síntesis: cuando hay discrepancia, suele promediar o quedarse con la versión más repetida, y ahí se pierde justo lo interesante. Si detectas la contradicción, ve a las dos fuentes primarias y mira qué medían, en qué periodo y con qué metodología. Casi siempre no se contradicen: responden a preguntas distintas. Conviene pedir explícitamente en el encargo que las discrepancias se señalen en vez de resolverse.',
    ],
    'ctaTitle' => 'Investigar es una tarea con instrucciones propias',
    'ctaBody' => 'Los encargos de investigación que aguantan llevan dentro el criterio de fuentes y la orden de marcar lo que no se pudo confirmar. Hay material escrito con esa costumbre para <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/product-management">Product</a> y <a href="/profesiones/legal">Legal</a>.',
    'body' => <<<'HTML'
<p>Pides un análisis del mercado. Vuelve un informe de once páginas con cuarenta y dos citas numeradas, secciones ordenadas y un resumen ejecutivo que suena a consultora.</p>

<p>Abres la cita 7: existe, pero es un post de una agencia que no dice lo que el informe le atribuye. La cita 12 lleva a un artículo que cita a su vez a otro. La 31 es un estudio real y bueno, de 2021. Ninguna de las tres está inventada. Y aun así, la mitad del informe no se sostiene.</p>

<h2 id="que-es">Qué hace un modo de investigación profunda</h2>

<p>Conviene entender el mecanismo, porque explica exactamente dónde falla.</p>

<p>Cuando le haces una pregunta normal a un chat con búsqueda, hace dos o tres consultas y responde. Un modo de investigación profunda funciona como un agente: descompone tu pregunta en subpreguntas, lanza búsquedas, abre resultados, lee, y —esta es la parte que cambia todo— <strong>decide sobre la marcha qué buscar a continuación en función de lo que acaba de leer</strong>. Repite ese ciclo decenas de veces durante cinco a treinta minutos y al final redacta.</p>

<p>De ahí salen sus dos propiedades. La buena: cubre en veinte minutos un terreno que a una persona le llevaría media jornada de pestañas abiertas. La mala: cada iteración parte de lo que encontró en la anterior, así que si las primeras búsquedas caen en un rincón mediocre del tema, todo lo que viene después profundiza en ese rincón. El informe será coherente, extenso y estará mirando al sitio equivocado.</p>

<p>Es un agente en el sentido estricto —planifica, actúa, observa y replanifica—, con las mismas implicaciones que cualquier otro, descritas en la guía sobre <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>

<h2 id="no-es">El fallo no es inventar: es seleccionar</h2>

<p>La preocupación heredada de los primeros años es la referencia fantasma: la fuente con autor, año y título verosímiles que no existe. Cuando el sistema navega de verdad, ese fallo baja mucho, porque las URL salen de páginas que ha abierto.</p>

<p>Lo que queda es más difícil de ver, y por eso es peor:</p>

<figure>
<table>
    <thead>
        <tr><th>Fallo</th><th>Cómo se manifiesta</th><th>Cómo se detecta</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Atribución torcida</strong></td><td>La fuente existe pero no dice eso, o lo dice con un matiz que se perdió</td><td>Abrir y buscar la frase concreta dentro</td></tr>
        <tr><td><strong>Fuente de segunda mano</strong></td><td>Cita al medio que resume el estudio, no al estudio</td><td>Mirar si la fuente cita a su vez a otra</td></tr>
        <tr><td><strong>Dato caducado</strong></td><td>Cifra correcta en su momento, presentada como actual</td><td>Buscar la fecha del dato, no la de la página</td></tr>
        <tr><td><strong>Fuente interesada</strong></td><td>La afirmación viene de quien vende la solución</td><td>Preguntarse quién paga la página</td></tr>
        <tr><td><strong>Consenso fabricado</strong></td><td>Cinco fuentes que dicen lo mismo porque se copian entre sí</td><td>Rastrear el origen común</td></tr>
    </tbody>
</table>
</figure>

<p>El último es el más traicionero, porque activa justo la heurística que usamos para fiarnos: si cinco sitios distintos dicen la misma cifra, parece confirmada. En la web esa coincidencia significa a menudo lo contrario —que hay una única fuente original y cuatro reescrituras—, y el sistema no distingue una cosa de la otra porque ambas se parecen mucho desde fuera.</p>

<h2 id="sesgos">Tres sesgos que arrastra cualquier informe generado</h2>

<p><strong>Sesgo de indexación.</strong> El sistema encuentra lo que está en abierto y bien posicionado. Los informes de pago, las bases de datos con muro, los PDF sin texto y la documentación interna no existen para él. En sectores donde el conocimiento serio vive detrás de una suscripción, el informe se construye con la capa divulgativa de encima.</p>

<p><strong>Sesgo de idioma.</strong> En temas locales españoles el material disponible es una fracción del anglosajón, así que el sistema completa con fuentes en inglés y con contenido de agencias que reescriben. El resultado tiene una forma reconocible: correcto en lo general, impreciso justo donde tú necesitabas precisión.</p>

<p><strong>Sesgo de recencia invertido.</strong> Suena contraintuitivo: los documentos más citados y mejor posicionados llevan años acumulando enlaces, así que un informe puede apoyarse en el estudio de 2021 y no en el de este año, que todavía no ha tenido tiempo de ser citado. Si el tema se mueve rápido, la síntesis va con retraso sin avisar.</p>

<p>Ninguno de los tres se arregla con un prompt mejor. Se compensan sabiendo que están ahí y mirando específicamente lo que dejan fuera.</p>

<h2 id="donde-sirve">Dónde rinde y dónde te hace perder tiempo</h2>

<figure>
<table>
    <thead>
        <tr><th>Tipo de encargo</th><th>Rendimiento</th></tr>
    </thead>
    <tbody>
        <tr><td>Mapear un tema que no conoces: quién es quién, qué términos se usan, qué discusiones hay</td><td><strong>Muy bueno.</strong> Es su mejor uso, y suele ahorrar medio día</td></tr>
        <tr><td>Panorama de proveedores o herramientas de una categoría</td><td><strong>Bueno</strong> para el listado; malo para el criterio, porque casi todo lo escrito es material de venta</td></tr>
        <tr><td>Estado de una discusión técnica o académica</td><td><strong>Bueno</strong> si es un campo con literatura abierta</td></tr>
        <tr><td>Cronología de hechos públicos</td><td><strong>Bueno</strong>, con las fechas siempre por comprobar</td></tr>
        <tr><td>Cifras de mercado concretas, sobre todo locales</td><td><strong>Malo.</strong> Lo bueno es de pago; lo gratis se copia entre sí</td></tr>
        <tr><td>Normativa aplicable a un caso</td><td><strong>Malo y arriesgado.</strong> Encuentra la norma general y se pierde la excepción que aplica</td></tr>
        <tr><td>Nada sobre una empresa o persona concreta pequeña</td><td><strong>Malo.</strong> Con poco material, rellena</td></tr>
    </tbody>
</table>
</figure>

<p>Hay un patrón detrás de la tabla: el sistema rinde cuando la respuesta está repartida por muchas fuentes y hay que juntarla, y falla cuando la respuesta está en una fuente concreta y difícil que hay que saber encontrar. Es un buen agregador y un mal archivero.</p>

<p>Para el segundo caso el orden correcto se invierte: reúne tú los documentos —el BOE, el convenio, el informe de pago que sí tienes— y usa la IA para leerlos, contrastarlos y extraer, que es donde sigue siendo excelente. Ese trabajo está cubierto en la guía de <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos</a>.</p>

<h2 id="encargo">Cómo se formula el encargo</h2>

<p>La diferencia entre un informe aprovechable y treinta páginas de relleno se decide antes de darle a enviar. Un encargo útil trae cinco cosas que el genérico no tiene.</p>

<pre><code>Investiga [pregunta concreta, no un tema].

Decisión que tengo que tomar: [para qué me sirve esto]. Lo que ya sé y
no hace falta repetir: [contexto]. Alcance: [geografía], [periodo],
[sector].

Criterio de fuentes: prioriza fuentes primarias (estudios, registros
oficiales, documentación del propio fabricante) sobre artículos que las
resumen. Marca cada afirmación como [PRIMARIA] o [SECUNDARIA].

Si encuentras discrepancias entre fuentes, NO las resuelvas: exponlas
con quién sostiene cada versión y de qué fecha es cada dato.

Si algo no puedes confirmar con al menos una fuente primaria, escríbelo
en una sección final «Sin confirmar» en lugar de omitirlo.

Formato: máximo [n] páginas. Cada cifra con su fecha y su fuente al
lado. Termina con las tres preguntas que quedan abiertas.</code></pre>

<p>Las dos instrucciones que más cambian el resultado son la de no resolver discrepancias y la de la sección «Sin confirmar». La primera preserva la información más valiosa, que es dónde el campo no está de acuerdo consigo mismo. La segunda convierte el silencio en algo visible: sin ella, lo que el sistema no encontró simplemente no aparece, y un hueco invisible es indistinguible de una ausencia real.</p>

<p>Una precisión sobre el alcance: pedir «todo sobre X» produce material adyacente porque el sistema no tiene criterio para descartar. Pedir «qué evidencia hay de que X mejora Y en empresas de menos de cincuenta personas, entre 2024 y hoy» produce un informe que se puede leer.</p>

<h2 id="verificar">El protocolo de verificación en tres pasadas</h2>

<p>Verificar un informe de cuarenta citas abriendo las cuarenta no lo hace nadie, y no hace falta. Lo que funciona es concentrar el esfuerzo donde está el riesgo.</p>

<p><strong>Primera pasada, cinco minutos: las afirmaciones que sostienen la decisión.</strong> Localiza las tres o cuatro frases de las que depende lo que vas a hacer con el informe. Abre solo esas fuentes y busca dentro la frase concreta. Este paso solo ya caza la mayor parte de los problemas que importan, porque los errores en lo periférico no cambian nada.</p>

<p><strong>Segunda pasada, diez minutos: los números.</strong> Toda cifra que vayas a repetir en voz alta. Para cada una, tres comprobaciones: de qué año es el dato (no la página), quién lo midió, y si la fuente es el estudio o alguien que lo resume. Aquí es donde aparecen la mayoría de los datos caducados, y son los que más caro salen porque se citan en reuniones.</p>

<p><strong>Tercera pasada, cinco minutos: qué falta.</strong> Esta es la que casi nadie hace y la más rentable. Pregúntate qué esperabas encontrar y no está: el competidor que no aparece, la objeción evidente que nadie plantea, la fuente crítica del sector. Un informe generado casi nunca contiene la contra, porque la contra suele estar peor posicionada que la promesa.</p>

<p>Un truco barato para esa tercera pasada: pedirle al mismo sistema, en un mensaje nuevo y en blanco, <em>«¿qué argumentos en contra de esta conclusión existen y quién los sostiene?»</em>. Preguntado por separado sale mejor material que pidiéndole que se autocritique dentro del mismo hilo, donde tiende a defender lo que acaba de escribir.</p>

<h2 id="citar">Qué puedes publicar y cómo se cita</h2>

<p>Un informe generado es un punto de partida, no un texto publicable, y hay tres razones concretas.</p>

<p>La primera es de exactitud: las afirmaciones que ninguna fuente sostiene exactamente sobreviven a una lectura rápida y no a un lector que abra los enlaces. La segunda es de derechos: parte de los párrafos pueden quedar muy próximos a su origen, y una síntesis demasiado fiel de un texto ajeno sigue siendo un problema aunque haya un enlace debajo. La tercera es de posicionamiento: el material que se reconoce como reciclado de otras diez páginas no aporta nada que las otras diez no tuvieran ya.</p>

<p>La forma sensata de trabajar es tratar el informe como el trabajo de documentación que te ahorra encontrar las fuentes, no como el borrador. Lees las fuentes primarias que te ha localizado, y escribes tú, citando lo que has leído. Lo que aporta valor —y lo que los buscadores y los motores generativos acaban premiando— es lo que solo tú puedes decir: tus datos, tu experiencia con el problema, la contra que nadie publica. Eso está desarrollado en la guía sobre <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">aparecer en ChatGPT y Perplexity</a>.</p>

<p>Y si el informe se comparte dentro de la empresa, conviene que lleve la etiqueta puesta: quién lo encargó, con qué herramienta, en qué fecha y qué partes se han verificado. Un documento sin esa cabecera circula tres semanas después como si fuera un análisis revisado, y para entonces nadie recuerda que nunca lo fue.</p>

<h2 id="regla">La regla que queda</h2>

<p>La investigación profunda con IA es excelente para saber dónde mirar y mediocre para decidir qué es verdad. Ese reparto es bastante estable y no depende de qué herramienta uses.</p>

<p>De ahí sale una forma de trabajar que funciona: <strong>encárgale el mapa y quédate tú con el juicio</strong>. Deja que cubra el terreno, que te traiga los nombres, los términos y los enlaces que no habrías encontrado en media jornada. Y reserva tus veinte minutos para abrir las cuatro fuentes de las que depende la decisión, que es exactamente la parte que no se delega.</p>
HTML,
];
