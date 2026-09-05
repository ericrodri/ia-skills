<?php

return [
    'title' => '¿Se nota si un texto lo ha escrito una IA? Lo que detectan los detectores',
    'navTitle' => 'Detectores de IA',
    'seoTitle' => 'Detectores de IA: qué miden en realidad y por qué fallan',
    'description' => 'Un detector no lee el origen del texto: estima probabilidad. Qué tasa de falsos positivos tiene, a quién perjudica y qué sí delata un texto generado.',
    'excerpt' => 'La pregunta que casi todo el mundo hace es si le van a pillar. La pregunta útil es otra: qué mide exactamente la herramienta que dice haberte pillado, y cuánto se equivoca.',
    'category' => 'Fundamentos',
    'published' => '2026-09-04',
    'updated' => '2026-09-04',
    'readingMinutes' => 10,
    'words' => 1790,
    'about' => 'Detección de textos generados por inteligencia artificial y sus límites',
    'related' => ['escribir-correos-con-ia', 'errores-al-usar-ia-en-el-trabajo', 'como-escribir-prompts-efectivos'],
    'toc' => [
        'que-miden' => 'Qué mide un detector, que no es lo que parece',
        'falsos-positivos' => 'Falsos positivos: quién paga el error',
        'porcentaje' => 'Cómo leer un «92 % generado por IA»',
        'que-si-delata' => 'Lo que sí delata un texto, y no es estadístico',
        'marcas-de-agua' => 'Marcas de agua y metadatos: la vía que sí es técnica',
        'humanizadores' => 'Los humanizadores y por qué son la respuesta equivocada',
        'empresa' => 'Qué hacer si en tu empresa se usa un detector',
        'escribir' => 'Escribir con IA de manera que suene a ti',
    ],
    'faq' => [
        '¿Se puede saber con certeza si un texto lo ha escrito una IA?' => 'No, y ninguna herramienta seria lo afirma en su letra pequeña. Un detector no accede al origen del documento: analiza el texto y estima la probabilidad de que presente patrones estadísticos asociados a la generación automática, sobre todo una perplejidad baja, es decir, palabras muy predecibles unas detrás de otras. Esa estimación se acerca bastante en textos largos y sin editar, y se desploma en cuanto el texto es corto, ha sido revisado por una persona o mezcla párrafos de las dos procedencias.',
        '¿Son fiables los detectores de IA?' => 'Como indicio, dentro de un rango; como prueba, no. Las evaluaciones independientes publican tasas de falsos positivos que van desde alrededor del 2 % en las herramientas más precisas con textos largos en inglés hasta cifras mucho mayores en escenarios adversos, y en textos escritos por hablantes no nativos se han medido porcentajes que superan el 50 %. Ningún fabricante garantiza el 100 %, y varias universidades han desactivado estos detectores en sus plataformas justamente por el volumen de acusaciones injustas que generaban.',
        '¿Por qué un detector marca como IA un texto que he escrito yo?' => 'Porque lo que penaliza es la previsibilidad, no la autoría. Un texto claro, ordenado, con frases de longitud homogénea y vocabulario neutro puntúa alto en «generado por IA» aunque lo hayas escrito a mano, y eso describe la prosa de manuales, informes, documentación técnica y de casi cualquiera que escriba en un idioma que no es el suyo. La ironía es evidente: cuanto mejor sigues las normas de escritura clara, más sospechoso pareces para la herramienta.',
        '¿Cómo detectan los profesores o los reclutadores el uso de IA?' => 'En la práctica, muy pocas veces por un detector, y casi siempre por el contenido. Lo que delata es el desajuste: un registro que no encaja con el resto de lo que has escrito, una respuesta correcta y genérica que podría valer para cualquier empresa, datos que no cuadran con el expediente, referencias que no existen o un nivel de detalle que se evapora en cuanto se pregunta por lo concreto. En una entrevista o en una defensa oral, dos preguntas de seguimiento resuelven la duda mejor que cualquier porcentaje.',
        '¿Es legítimo usar IA para escribir en el trabajo?' => 'Depende de lo que diga tu organización, y por eso conviene que lo diga por escrito en lugar de dejarlo a la interpretación de cada cual. En la mayoría de empresas el uso está aceptado para redactar, resumir o revisar, con dos condiciones estables: que la persona firmante responda del contenido y que no se peguen datos confidenciales en herramientas no aprobadas. Los conflictos aparecen casi siempre por la ausencia de una política clara, no por el uso en sí.',
        '¿Funciona pedirle a la IA que escriba como un humano?' => 'Produce un texto con frases más desiguales y algún giro coloquial, lo que reduce la puntuación de algunos detectores, pero no resuelve el problema de fondo: sigue sin decir nada que solo pudieras decir tú. Un párrafo con tu ejemplo concreto, tu cifra y tu opinión no lo genera ningún modelo por su cuenta, y es lo único que hace que un texto parezca tuyo, que es algo distinto de parecer humano.',
    ],
    'ctaTitle' => 'Prompts que producen texto con tu voz',
    'ctaBody' => 'Un texto suena a ti cuando el prompt lleva tus ejemplos y tus restricciones dentro. Hay material trabajado así en <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/rrhh">RRHH</a> y <a href="/profesiones/customer-support">Customer Support</a>.',
    'body' => <<<'HTML'
<p>Pegas tu texto en un detector y sale «87 % probabilidad de IA». Lo escribiste tú, entero, un martes por la tarde. Pegas otro que sí generaste con ChatGPT y sale «12 % probabilidad de IA».</p>

<p>Esto no es una anécdota rara: es el comportamiento normal de estas herramientas, y se explica en cuanto se entiende qué están midiendo. No están leyendo el origen del documento, porque no tienen forma de acceder a él. Están midiendo lo predecible que es tu prosa.</p>

<h2 id="que-miden">Qué mide un detector, que no es lo que parece</h2>

<p>Un detector de IA recibe un texto y nada más: ni metadatos, ni historial de edición, ni la conversación de la que salió. Con eso calcula dos propiedades estadísticas:</p>

<figure>
<table>
    <thead>
        <tr><th>Métrica</th><th>Qué mide</th><th>Qué puntúa como «IA»</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Perplejidad</strong></td><td>Lo sorprendente que resulta cada palabra dado lo anterior</td><td>Perplejidad baja: cada palabra es la esperable</td></tr>
        <tr><td><strong>Ráfaga</strong> <em>(burstiness)</em></td><td>La variación en longitud y estructura de las frases</td><td>Poca variación: frases de tamaño parecido</td></tr>
    </tbody>
</table>
</figure>

<p>El razonamiento es que un modelo de lenguaje, al elegir en cada paso la continuación más probable, produce texto de perplejidad baja y ritmo uniforme, mientras que una persona alterna frases largas y cortas y de vez en cuando escoge una palabra rara.</p>

<p>Funciona a medias, y falla en un punto que lo invalida como prueba: <strong>hay muchísima gente que escribe de forma predecible y uniforme sin ninguna ayuda</strong>. La escritura técnica bien hecha, la prosa administrativa, un manual de producto y el texto de alguien que redacta en un idioma que no es el suyo comparten exactamente ese perfil. La herramienta no distingue «lo escribió una máquina» de «está escrito de manera clara y regular».</p>

<h2 id="falsos-positivos">Falsos positivos: quién paga el error</h2>

<p>Los dos errores posibles no cuestan lo mismo. Un falso negativo —texto generado que pasa por humano— no le hace daño a nadie en concreto. Un falso positivo señala a una persona real.</p>

<p>Las cifras publicadas por evaluaciones independientes se mueven en un rango amplio: en torno al 2 % de falsos positivos en las herramientas más precisas analizando textos largos en inglés nativo, y proporciones muy superiores en el resto de escenarios. El caso mejor documentado es el de los hablantes no nativos, donde se han medido tasas por encima del 50 %: la escritura con vocabulario más conservador y estructuras más simples es, para el detector, indistinguible de la generada.</p>

<p>Los perfiles con más riesgo de ser marcados por error son bastante reconocibles:</p>

<ul>
    <li>Quien escribe en un idioma extranjero.</li>
    <li>Quien redacta documentación técnica o textos normativos.</li>
    <li>Quien usa plantillas, guías de estilo o correctores gramaticales exigentes.</li>
    <li>Quien escribe textos cortos, donde no hay muestra suficiente para estimar nada.</li>
    <li>Personas neurodivergentes con un estilo de escritura muy estructurado.</li>
</ul>

<p>Varias universidades han acabado desactivando estos detectores en sus plataformas por este motivo. No porque no acierten nunca, sino porque el coste de acusar a quien no lo merece es asimétrico y no hay forma de defenderse: es imposible demostrar que un texto propio es propio.</p>

<h2 id="porcentaje">Cómo leer un «92 % generado por IA»</h2>

<p>Ese número casi nunca significa lo que la gente entiende. Merece la pena fijar tres cosas:</p>

<ol>
    <li><strong>No es una probabilidad de autoría.</strong> Es la puntuación que el clasificador asigna a un patrón, calibrada sobre el conjunto con el que se entrenó. Cambia el tipo de texto y la calibración deja de valer.</li>
    <li><strong>No es un porcentaje del documento.</strong> Un «40 % IA» no quiere decir que cuatro de cada diez párrafos estén generados.</li>
    <li><strong>No es reproducible entre herramientas.</strong> El mismo texto pasado por tres detectores da tres resultados que a menudo se contradicen entre sí.</li>
</ol>

<p>La consecuencia práctica: un resultado alto sirve para abrir una conversación, nunca para cerrarla. Cualquier proceso —académico, laboral o editorial— que convierta ese número en una sanción automática está construyendo una decisión grave sobre una medida que su propio fabricante no garantiza.</p>

<h2 id="que-si-delata">Lo que sí delata un texto, y no es estadístico</h2>

<p>Mientras las herramientas discuten sobre perplejidad, quien lee detecta otra cosa completamente distinta, y con bastante fiabilidad. No detecta la máquina: detecta el vacío.</p>

<figure>
<table>
    <thead>
        <tr><th>Señal</th><th>Por qué aparece</th></tr>
    </thead>
    <tbody>
        <tr><td>Vale para cualquier empresa del sector</td><td>Se pidió sobre un tema, no sobre un caso</td></tr>
        <tr><td>Estructura simétrica: tres bloques, tres viñetas cada uno</td><td>El modelo equilibra por defecto</td></tr>
        <tr><td>Ningún dato que no estuviera ya en la pregunta</td><td>No se aportó material propio</td></tr>
        <tr><td>Cierre que resume lo dicho sin añadir nada</td><td>Patrón de conclusión aprendido</td></tr>
        <tr><td>Registro que no encaja con el resto de tus textos</td><td>El desajuste con el histórico es lo que más salta</td></tr>
        <tr><td>Se deshace a la segunda pregunta de detalle</td><td>No hay experiencia detrás del texto</td></tr>
    </tbody>
</table>
</figure>

<p>La última es la definitiva, y no necesita ninguna herramienta. En una entrevista, en una defensa o en una reunión de seguimiento, dos preguntas concretas sobre lo que se afirma resuelven la duda mejor que cualquier porcentaje. Y todas estas señales tienen el mismo origen: se pidió un texto sobre un tema en lugar de un texto a partir de material propio.</p>

<h2 id="marcas-de-agua">Marcas de agua y metadatos: la vía que sí es técnica</h2>

<p>Existe una línea distinta a la del análisis estadístico, y es la única con base sólida: marcar el contenido en el momento de generarlo.</p>

<ul>
    <li><strong>Marca de agua estadística en el texto.</strong> El generador sesga levemente su elección de palabras siguiendo un patrón secreto que después se puede verificar. Es sólida en teoría y frágil en cuanto alguien edita o reescribe el texto.</li>
    <li><strong>Metadatos de procedencia</strong> (el estándar C2PA y similares). Firman el archivo en origen. Funcionan bien para imagen y vídeo, y en texto se pierden en el primer copiar y pegar.</li>
    <li><strong>Historial de edición.</strong> Un documento en Google Docs o Word con su historial guarda cómo se escribió. No es una prueba de autoría, pero es la evidencia más informativa de las tres, y es la que suele resolver las disputas reales.</li>
</ul>

<p>La diferencia de fondo con los detectores: estas vías comprueban una marca que se puso a propósito, en lugar de adivinar el origen a partir del estilo. Y todas comparten la misma debilidad, que es que solo cubren el contenido que pasó por un sistema que las implementa.</p>

<h2 id="humanizadores">Los humanizadores y por qué son la respuesta equivocada</h2>

<p>Hay un mercado entero de herramientas que reescriben el texto generado para bajar la puntuación de los detectores: varían la longitud de las frases, meten alguna palabra menos frecuente y rompen la simetría. Contra algunos detectores funcionan; es una carrera que se libra cada pocos meses en las dos direcciones.</p>

<p>El problema es que resuelven una pregunta equivocada. El texto sigue sin contener nada que solo pudieras aportar tú, así que sigue fallando la única prueba que importa: la de quien lo lee y pregunta. Y añaden dos costes propios que rara vez se mencionan: el reescrito suele perder precisión —cambian términos técnicos por sinónimos que no lo son— y, si la reescritura la hace un tercero con tu documento dentro, acabas de sacar contenido de tu empresa por una vía que nadie ha aprobado. Ese razonamiento está en la guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="empresa">Qué hacer si en tu empresa se usa un detector</h2>

<p>Si el detector lo pone la organización, la conversación no va de tecnología, va de política interna. Tres puntos que conviene fijar por escrito:</p>

<ol>
    <li><strong>Qué está permitido.</strong> Casi siempre la respuesta razonable es «usar IA sí, responder del resultado también». Prohibir el uso sin decirlo claro solo consigue que se use a escondidas y sin criterio.</li>
    <li><strong>Que ningún resultado de detector sea concluyente por sí solo.</strong> Ni para una sanción, ni para descartar una candidatura, ni para rechazar una entrega. Es un indicio que abre una conversación.</li>
    <li><strong>Qué se hace en caso de duda.</strong> Preguntar por el contenido: cómo se llegó a esa cifra, de dónde sale ese ejemplo, qué se descartó por el camino. Quien escribió el texto lo sabe.</li>
</ol>

<p>El marco completo para redactar esto está en la guía de <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA en la empresa</a>.</p>

<h2 id="escribir">Escribir con IA de manera que suene a ti</h2>

<p>La forma de no parecer un texto generado no es esquivar detectores: es que el texto contenga cosas que solo tú puedes poner.</p>

<ul>
    <li><strong>Aporta el material tú.</strong> Tus notas, tus cifras, tu caso. Un texto escrito a partir de un tema sale genérico por construcción.</li>
    <li><strong>Dale ejemplos de cómo escribes.</strong> Dos o tres textos tuyos en el prompt hacen más por el tono que cualquier adjetivo sobre el estilo deseado.</li>
    <li><strong>Quédate con la primera y la última frase.</strong> Son las que fijan la voz y las que más se notan.</li>
    <li><strong>Mete una opinión.</strong> Un modelo evita mojarse por defecto; el texto que no se moja es el que suena a nadie.</li>
    <li><strong>Quita una de cada tres estructuras simétricas.</strong> El ritmo de tres bloques iguales es el tic más reconocible.</li>
</ul>

<p>Hecho así, la pregunta de si se nota deja de tener interés: el texto dice algo concreto que nadie más podría haber escrito, y eso es indistinguible de haberlo escrito tú porque en lo que importa lo has escrito tú. La herramienta se ha ocupado de la redacción, no del contenido, que es el reparto que funciona en <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">casi cualquier tarea delegada a una IA</a>.</p>
HTML,
];
