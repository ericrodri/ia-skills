<?php

return [
    'title' => 'Revisar un contrato con IA: alquiler, trabajo o servicios sin firmar a ciegas',
    'navTitle' => 'Revisar un contrato con IA',
    'seoTitle' => 'Cómo revisar un contrato con IA antes de firmar',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para entender un contrato de alquiler, trabajo o servicios y detectar cláusulas dudosas antes de firmar.',
    'excerpt' => 'La IA lee un contrato de veinte páginas en segundos y te lo explica en lenguaje llano. Es una forma excelente de llegar preparado a la firma. No es un abogado: no conoce tu situación, puede equivocarse con la ley y no responde si algo sale mal.',
    'category' => 'Práctica',
    'published' => '2026-10-17',
    'updated' => '2026-10-17',
    'readingMinutes' => 7,
    'words' => 1234,
    'about' => 'Lectura y análisis de contratos de alquiler, trabajo y servicios con asistentes de inteligencia artificial',
    'related' => ['carta-de-baja-voluntaria-con-ia', 'interpretar-una-analitica-con-ia', 'resumir-documentos-largos-con-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'alucinaciones-de-la-ia', 'escribir-una-reclamacion-con-ia', 'como-escribir-prompts-efectivos', 'ia-para-autonomos-y-pymes'],
    'toc' => [
        'para-que-sirve' => 'Para qué sirve (y para qué no)',
        'antes' => 'Antes de pegar el contrato',
        'prompts' => 'Los prompts que funcionan',
        'por-tipo' => 'Qué mirar según el tipo de contrato',
        'comprobar' => 'Comprobar lo que dice la IA',
        'abogado' => 'Cuándo llamar a un profesional',
    ],
    'faq' => [
        '¿Puede la IA revisar un contrato?' => 'Puede leerlo, resumirlo, explicarte cada cláusula en lenguaje llano y señalar las que son poco habituales o te perjudican. No puede garantizar que el contrato sea legal ni sustituye el consejo de un abogado cuando hay mucho en juego.',
        '¿Es seguro subir un contrato a ChatGPT?' => 'Depende de lo que contenga. Antes de subirlo tapa nombres, DNI, direcciones, números de cuenta e importes que no necesites analizar. Si es un contrato de tu empresa, consulta la política interna: muchas prohíben pegar documentos de clientes en asistentes públicos.',
        '¿Qué IA es mejor para analizar contratos?' => 'Para un contrato de pocas páginas sirve cualquier asistente general. Para documentos largos conviene uno con una ventana de contexto grande, como Claude o Gemini, que lee el documento completo sin perder las cláusulas del final.',
        '¿La IA conoce la ley española?' => 'Conoce los principios generales y las normas más citadas, pero puede confundir leyes de otros países, citar versiones antiguas o inventar artículos. Cualquier referencia legal que te dé debe comprobarse en el BOE o con un profesional.',
        '¿Puedo usar la IA para redactar un contrato?' => 'Puede darte un borrador para acuerdos sencillos, pero los modelos genéricos que circulan por internet y los que genera la IA suelen olvidar cláusulas importantes. Para algo con dinero o plazos relevantes, que lo revise un abogado antes de firmarlo.',
    ],
    'ctaTitle' => 'Leer contratos forma parte de muchos trabajos',
    'ctaBody' => 'Si revisas contratos a diario, en el <a href="/skills">catálogo de skills</a> hay instrucciones para <a href="/profesiones/legal">profesionales del derecho</a> y <a href="/profesiones/freelancers">autónomos</a> que sistematizan la revisión de cláusulas.',
    'body' => <<<'HTML'
<p>Un contrato de alquiler, una oferta de trabajo, las condiciones de una permanencia telefónica o un acuerdo con un cliente. Casi todo el mundo firma documentos que no ha leído entero, porque son largos, están escritos en un lenguaje difícil y siempre hay prisa. Los asistentes de IA cambian eso: en un par de minutos te explican qué estás firmando y qué cláusulas merecen una pregunta. Esta guía explica cómo hacerlo bien, qué datos no debes darles y en qué momento la IA deja de ser suficiente.</p>

<h2 id="para-que-sirve">Para qué sirve (y para qué no)</h2>

<ul>
    <li><strong>Sirve</strong> para resumir el contrato: quién se compromete a qué, cuánto cuesta, cuánto dura y cómo se termina.</li>
    <li><strong>Sirve</strong> para traducir el lenguaje jurídico a un español que entiendas, cláusula por cláusula.</li>
    <li><strong>Sirve</strong> para señalar lo que es poco habitual, desequilibrado o ambiguo, y para preparar las preguntas que harás antes de firmar.</li>
    <li><strong>No sirve</strong> para decirte con seguridad si una cláusula es legal. Puede orientarte, pero se equivoca con la normativa y no conoce las circunstancias que no le cuentas.</li>
    <li><strong>No sirve</strong> como garantía. Si algo sale mal, el asistente no responde; un abogado sí.</li>
</ul>

<h2 id="antes">Antes de pegar el contrato</h2>

<p>Un contrato es un documento lleno de datos personales. Antes de subirlo:</p>

<ul>
    <li><strong>Tapa los datos que no hacen falta</strong>: nombres, DNI, direcciones, números de cuenta y firmas. Sustitúyelos por marcadores como [ARRENDADOR] o [INQUILINO]. Para entender una cláusula no hace falta saber quién eres.</li>
    <li><strong>Si es un contrato de trabajo o de un cliente</strong>, revisa la política de tu empresa sobre IA. En <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> tienes los criterios.</li>
    <li><strong>Usa el documento completo</strong>, no un resumen ni una foto borrosa. Si es un PDF escaneado, comprueba que el asistente lo ha leído bien pidiéndole que cite la primera y la última cláusula.</li>
    <li><strong>Dile tu papel</strong>: no es lo mismo revisar un alquiler como inquilino que como propietario. La IA tiene que saber qué intereses defiendes.</li>
</ul>

<h2 id="prompts">Los prompts que funcionan</h2>

<p>Empieza por entender, no por juzgar:</p>

<blockquote>«Te adjunto un contrato de alquiler de vivienda en España. Soy el inquilino. Resúmelo en una tabla con: duración, renta y cómo se actualiza, fianza y garantías adicionales, gastos que pago yo, obras y reparaciones, causas de resolución y penalizaciones. Cita el número de cláusula en cada fila. Si algo no aparece en el contrato, escribe "no aparece" en lugar de suponerlo.»</blockquote>

<p>Citar la cláusula es lo que te permite comprobar cada afirmación. Después pasa al análisis:</p>

<blockquote>«Ahora señala las cláusulas que sean poco habituales en este tipo de contrato o que me perjudiquen, explicando por qué en una o dos frases. Ordénalas de más a menos importante. Para cada una, propón una pregunta que pueda hacer al propietario o una redacción alternativa que pueda pedir.»</blockquote>

<p>Y termina con lo que falta, que es lo que más se pasa por alto:</p>

<blockquote>«¿Qué cosas que suelen aparecer en un contrato así no aparecen en este? ¿Hay alguna cláusula ambigua que pueda interpretarse de dos maneras?»</blockquote>

<p>Para contratos muy largos, lee también <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>: explica cómo evitar que el asistente se salte las páginas del final. El mismo método de pedir explicaciones en lenguaje llano sin dar datos personales sirve para otros documentos difíciles, como se cuenta en <a href="/guias/interpretar-una-analitica-con-ia">interpretar una analítica de sangre con IA</a>.</p>

<h2 id="por-tipo">Qué mirar según el tipo de contrato</h2>

<ul>
    <li><strong>Alquiler de vivienda</strong>: duración y prórrogas, cómo se actualiza la renta, fianza y garantías adicionales, quién paga cada gasto, qué pasa si te vas antes y el estado de la vivienda al entrar. Pide que compare las garantías exigidas con los límites habituales, y comprueba el resultado.</li>
    <li><strong>Contrato de trabajo</strong>: tipo de contrato y periodo de prueba, jornada y horario, salario bruto y cómo se reparte en pagas, convenio aplicable, cláusulas de no competencia, de exclusividad o de permanencia por formación. Pide que te calcule el neto aproximado y contrástalo con un simulador oficial.</li>
    <li><strong>Servicios y suscripciones</strong> (telefonía, gimnasio, software): permanencia, renovación automática, cómo y con cuánta antelación se cancela, subidas de precio y penalizaciones.</li>
    <li><strong>Contratos con clientes, si eres autónomo</strong>: alcance del trabajo, número de revisiones incluidas, plazos de pago, propiedad intelectual de lo que entregas y responsabilidad máxima. La guía de <a href="/guias/ia-para-autonomos-y-pymes">IA para autónomos y pymes</a> tiene más ejemplos.</li>
</ul>

<h2 id="comprobar">Comprobar lo que dice la IA</h2>

<p>Los asistentes pueden afirmar con total seguridad cosas falsas, sobre todo cuando citan leyes. Tres hábitos evitan la mayoría de los errores:</p>

<ul>
    <li><strong>Vuelve al texto</strong>. Cuando el resumen diga algo importante, abre la cláusula que cita y léela tú. Si no coincide, díselo y pide que lo corrija.</li>
    <li><strong>Pide las fuentes de cualquier norma</strong> y compruébalas en el BOE o en la web del organismo. Si el asistente no tiene búsqueda en internet, trata cualquier artículo que cite como una pista, no como un dato. En <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a> se explica por qué pasa.</li>
    <li><strong>Haz la pregunta al revés</strong>: «¿Qué argumentos tendría la otra parte para defender esta cláusula?». Te ayuda a no llegar a la negociación con una idea equivocada de lo fuerte que es tu posición.</li>
</ul>

<h2 id="abogado">Cuándo llamar a un profesional</h2>

<p>La IA es suficiente para entender una suscripción o preparar las preguntas de un alquiler. Busca un abogado, un gestor o el asesoramiento gratuito de tu sindicato u oficina de consumo cuando:</p>

<ul>
    <li>Hay mucho dinero en juego: compraventa de vivienda, hipoteca, herencia, venta de un negocio.</li>
    <li>El contrato incluye penalizaciones importantes, exclusividad o no competencia.</li>
    <li>La otra parte se niega a cambiar una cláusula que la IA ha marcado como problemática.</li>
    <li>Ya hay un conflicto. En ese caso, la IA puede ayudarte a ordenar los hechos y a escribir el primer escrito; en <a href="/guias/escribir-una-reclamacion-con-ia">escribir una reclamación con IA</a> tienes cómo.</li>
</ul>

<p>Llegar a esa consulta con el resumen y las preguntas preparadas también ahorra tiempo y dinero: el profesional se centra en lo que de verdad importa. Y si lo que tienes delante es tu salida de la empresa, la guía de <a href="/guias/carta-de-baja-voluntaria-con-ia">carta de baja voluntaria con IA</a> explica cómo calcular el preaviso a partir de tu contrato o convenio.</p>
HTML,
];
