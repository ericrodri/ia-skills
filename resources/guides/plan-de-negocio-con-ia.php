<?php

return [
    'title' => 'Hacer un plan de negocio con IA: paso a paso, con prompts y sin cifras inventadas',
    'navTitle' => 'Plan de negocio con IA',
    'seoTitle' => 'Plan de negocio con IA: paso a paso y con prompts',
    'description' => 'Cómo hacer un plan de negocio con IA: qué apartados puede redactar, cómo validar el mercado sin datos inventados y cómo montar las cifras para un banco.',
    'excerpt' => 'La IA escribe un plan de negocio en treinta segundos, y ese es el problema: sale uno genérico con cifras que nadie ha comprobado. Cómo usarla para pensar mejor el negocio, no para rellenar un documento.',
    'category' => 'Método',
    'published' => '2026-10-06',
    'updated' => '2026-10-06',
    'readingMinutes' => 7,
    'words' => 1175,
    'about' => 'Elaboración de un plan de negocio para emprendedores y autónomos con ayuda de inteligencia artificial',
    'related' => ['ia-para-autonomos-y-pymes', 'investigar-con-ia-deep-research', 'ia-en-excel-y-google-sheets', 'alucinaciones-de-la-ia', 'crear-un-logo-con-ia', 'crear-una-pagina-web-con-ia'],
    'toc' => [
        'el-problema' => 'El error de pedir el plan entero',
        'orden' => 'El orden que funciona',
        'cliente' => 'Paso 1: cliente y problema',
        'mercado' => 'Paso 2: mercado y competencia, con fuentes',
        'numeros' => 'Paso 3: los números',
        'riesgos' => 'Paso 4: que la IA te lleve la contraria',
        'documento' => 'Paso 5: el documento final',
    ],
    'faq' => [
        '¿Puede la IA hacer un plan de negocio completo?' => 'Puede redactar uno completo en segundos, pero será genérico y sus cifras de mercado no estarán comprobadas. Funciona mucho mejor si la usas por partes: para definir el cliente, ordenar la investigación, montar la hoja de cálculo de previsiones y buscar los puntos débiles, y después redactar el documento con tus datos reales.',
        '¿Qué IA es mejor para hacer un plan de negocio?' => 'Cualquiera de los asistentes generales, como ChatGPT, Gemini o Claude, sirve para redactar y razonar. Para la parte de mercado conviene uno que busque en internet y cite fuentes, como Perplexity o los modos de investigación a fondo de los grandes asistentes. Para las cifras, una hoja de cálculo con la IA ayudando a construir las fórmulas.',
        '¿Sirve un plan de negocio hecho con IA para pedir un préstamo?' => 'Sí, siempre que las cifras sean tuyas y puedas defenderlas. Al banco o a una entidad de financiación pública no le importa con qué herramienta se redactó, sino que la previsión de ingresos sea creíble, los costes estén completos y sepas explicar de dónde sale cada número cuando te pregunten.',
        '¿Qué apartados tiene un plan de negocio?' => 'Los habituales son: resumen, descripción del producto o servicio, cliente y problema que resuelve, análisis de mercado y competencia, plan de marketing y ventas, organización y equipo, plan de operaciones, plan económico y financiero con previsiones a tres años, y riesgos. Para un autónomo que empieza basta una versión corta de cada uno.',
        '¿Puedo fiarme de los datos de mercado que da la IA?' => 'No sin comprobarlos. Los asistentes generan con facilidad tamaños de mercado y porcentajes verosímiles que no existen. Pide siempre la fuente, abre el enlace y verifica la cifra en el documento original; para España, el INE, los informes sectoriales y las asociaciones profesionales suelen ser los puntos de partida más fiables.',
    ],
    'ctaTitle' => 'Instrucciones para cada parte del negocio',
    'ctaBody' => 'Después del plan viene el trabajo diario. En el <a href="/skills">catálogo de skills</a> hay instrucciones para <a href="/profesiones/freelancers">autónomos</a>, <a href="/profesiones/finanzas">finanzas</a> y <a href="/profesiones/marketing">marketing</a> listas para usar con cualquier asistente.',
    'body' => <<<'HTML'
<p>Un plan de negocio sirve para dos cosas: convencer a otros (un banco, un socio, una convocatoria de ayudas) y, sobre todo, obligarte a pensar si el negocio tiene sentido antes de poner dinero. La IA es muy útil para la segunda y peligrosa para la primera si se usa mal. Esta guía propone un método por pasos que aprovecha lo que hace bien y evita lo que hace mal.</p>

<h2 id="el-problema">El error de pedir el plan entero</h2>

<p>Si le pides a cualquier asistente «hazme un plan de negocio para una cafetería de especialidad», te devolverá en segundos un documento con todos los apartados, una estrategia de marketing en redes y una previsión que alcanza el punto de equilibrio en el mes catorce. Parece un plan. No lo es.</p>

<p>Ese documento tiene tres problemas. Es <strong>genérico</strong>: vale para cualquier cafetería de cualquier ciudad. Tiene <strong>cifras inventadas</strong>: el tamaño de mercado y el ticket medio son verosímiles, pero nadie los ha comprobado, y es el terreno típico de las <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. Y, lo peor, <strong>no te ha hecho pensar</strong>, que era el objetivo.</p>

<h2 id="orden">El orden que funciona</h2>

<p>Usa la IA como un consultor al que vas dando información y que te hace preguntas, no como un redactor. Cinco pasos, cada uno en su conversación o en un mismo proyecto con tus notas cargadas:</p>

<ol>
    <li>Cliente y problema.</li>
    <li>Mercado y competencia, con fuentes.</li>
    <li>Números en una hoja de cálculo.</li>
    <li>Riesgos y puntos débiles.</li>
    <li>Redacción del documento final.</li>
</ol>

<h2 id="cliente">Paso 1: cliente y problema</h2>

<p>Empieza por lo que solo sabes tú. Cuéntale la idea con detalle y pídele que te entreviste:</p>

<blockquote>«Quiero montar [negocio] en [ciudad]. Antes de escribir nada, hazme una a una las preguntas que haría un consultor para entender quién es el cliente, qué problema le resuelvo, por qué me elegiría a mí y cuánto estaría dispuesto a pagar. No sigas hasta que responda cada una.»</blockquote>

<p>Al final, pídele un resumen de una página con el cliente tipo y la propuesta de valor. Si al leerlo no te reconoces, corrige ahora: todo lo demás se construye encima.</p>

<h2 id="mercado">Paso 2: mercado y competencia, con fuentes</h2>

<p>Aquí la IA ayuda a buscar y ordenar, siempre con enlaces. Usa un asistente que busque en internet, como <a href="/guias/como-usar-perplexity">Perplexity</a> o los modos de investigación a fondo, y exige la fuente de cada dato:</p>

<blockquote>«Busca datos sobre [sector] en [ciudad o país]: número de negocios, gasto medio por cliente y tendencia de los últimos años. Para cada cifra, dame el enlace y el año del dato. Si no encuentras una fuente, dilo en lugar de estimar.»</blockquote>

<p>Abre los enlaces y comprueba las cifras clave en el documento original. Para la competencia, haz tú la lista de los cinco o seis negocios cercanos y pídele que la convierta en una tabla comparativa a partir de sus webs y reseñas. El método completo de investigación está en <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a>.</p>

<h2 id="numeros">Paso 3: los números</h2>

<p>Las previsiones no se piden en el chat: se construyen en una hoja de cálculo donde cada cifra tenga una fórmula a la vista. La IA es buena montando la estructura:</p>

<blockquote>«Diseña una hoja de previsión a tres años para [negocio]: ingresos por línea de producto (clientes al mes × ticket medio), costes fijos, costes variables, inversión inicial, amortización, impuestos y tesorería mensual el primer año. Dame las columnas, las fórmulas y deja en amarillo las celdas que tengo que rellenar yo.»</blockquote>

<p>Las celdas amarillas son el trabajo de verdad: alquiler, sueldos, cuota de autónomos, precios de proveedores. Pide presupuestos reales. Cómo pedirle fórmulas y revisarlas está en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>. Y para fiscalidad y forma jurídica, la IA orienta pero quien decide es una gestoría.</p>

<h2 id="riesgos">Paso 4: que la IA te lleve la contraria</h2>

<p>Los asistentes tienden a darte la razón. Pídeles explícitamente lo contrario:</p>

<blockquote>«Actúa como un analista de riesgos de un banco que tiene que decidir si me presta [importe]. Con este plan y esta hoja de cálculo, dime las cinco razones por las que lo rechazarías, ordenadas por gravedad, y qué dato o cambio respondería a cada una.»</blockquote>

<p>Repite con «escenario pesimista»: ventas un 30 % por debajo y seis meses más hasta el punto de equilibrio. Si el negocio no aguanta ese escenario con tu colchón de tesorería, es mejor saberlo ahora.</p>

<h2 id="documento">Paso 5: el documento final</h2>

<p>Con todo lo anterior, ahora sí, pide la redacción. Pásale el resumen del cliente, la tabla de mercado con fuentes, el resultado de la hoja de cálculo y las respuestas a los riesgos, e indica para quién es: un banco quiere ver tesorería y garantías; una convocatoria de ayudas, el encaje con sus criterios. Revisa que todas las cifras del texto coincidan con las de la hoja.</p>

<p>Y no compartas en un chat personal datos que no deberían salir de tu negocio, como contratos o datos de socios: <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> explica qué cuenta usar. Cuando el plan esté listo, los siguientes pasos suelen ser la marca y la web: tienes guías para <a href="/guias/crear-un-logo-con-ia">crear un logo con IA</a> y <a href="/guias/crear-una-pagina-web-con-ia">crear una página web con IA</a>, y una visión general del día a día en <a href="/guias/ia-para-autonomos-y-pymes">IA para autónomos y pymes</a>.</p>
HTML,
];
