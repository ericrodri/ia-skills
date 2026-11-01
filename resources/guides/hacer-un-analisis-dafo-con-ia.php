<?php

return [
    'title' => 'Cómo hacer un análisis DAFO con IA que sirva para decidir algo',
    'navTitle' => 'Análisis DAFO con IA',
    'seoTitle' => 'Cómo hacer un análisis DAFO con IA (con ejemplo)',
    'description' => 'Haz un análisis DAFO con ChatGPT, Gemini o Claude: qué datos darle, prompts por cuadrante, la matriz cruzada y el CAME, y cómo evitar el DAFO genérico.',
    'excerpt' => 'Pide a una IA «hazme un DAFO de mi empresa» y tendrás cuatro listas que valen para cualquier negocio. El DAFO útil sale de tus datos, separa bien lo interno de lo externo y termina en decisiones. Así se hace con ChatGPT, Gemini o Claude, paso a paso.',
    'category' => 'Método',
    'published' => '2026-11-01',
    'updated' => '2026-11-01',
    'readingMinutes' => 7,
    'words' => 1137,
    'about' => 'Elaboración de un análisis DAFO (debilidades, amenazas, fortalezas y oportunidades) con asistentes de inteligencia artificial, incluida la matriz cruzada y el análisis CAME',
    'related' => ['plan-de-negocio-con-ia', 'investigar-con-ia-deep-research', 'ia-para-autonomos-y-pymes', 'hacer-un-informe-con-ia', 'presentaciones-con-ia', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-es' => 'Qué es un DAFO y para qué sirve',
        'generico' => 'Por qué la IA hace DAFO genéricos',
        'datos' => 'Paso 1: darle tus datos',
        'cuadrantes' => 'Paso 2: interno y externo, por separado',
        'cruzado' => 'Paso 3: la matriz cruzada y el CAME',
        'trabajo-clase' => 'Si es para un trabajo de clase',
    ],
    'faq' => [
        '¿Qué significa DAFO?' => 'Son las iniciales de Debilidades, Amenazas, Fortalezas y Oportunidades. En inglés se llama SWOT. Las fortalezas y debilidades son internas (dependen de ti) y las oportunidades y amenazas son externas (del mercado o del entorno).',
        '¿Qué IA es mejor para hacer un DAFO?' => 'ChatGPT, Gemini y Claude lo hacen bien si les das datos propios. Para la parte externa conviene un asistente que busque en internet y cite fuentes, como Perplexity o los modos de investigación a fondo, porque las oportunidades y amenazas dependen de datos actuales.',
        '¿Cuántos puntos debe tener cada cuadrante?' => 'Entre tres y cinco. Más puntos no hacen el análisis mejor: lo diluyen. Si la IA te da diez por cuadrante, pídele que se quede con los que más afectan a la decisión que tienes que tomar.',
        '¿Qué es el análisis CAME?' => 'Es el paso que sigue al DAFO: Corregir las debilidades, Afrontar las amenazas, Mantener las fortalezas y Explotar las oportunidades. Convierte el diagnóstico en acciones concretas.',
        '¿Puedo usar un DAFO hecho con IA en un trabajo de clase?' => 'Depende de las normas de tu centro. Lo honesto es usar la IA para entender el método, buscar información y revisar tu borrador, y escribir el análisis tú. Si tu profesor permite usarla, indica cómo la has usado.',
    ],
    'ctaTitle' => 'Skills de estrategia y análisis',
    'ctaBody' => 'En <a href="/profesiones/product-management">Product Management</a> y <a href="/profesiones/marketing">Marketing</a> hay skills de análisis de mercado, competencia y estrategia que puedes usar junto a tu DAFO; también puedes buscar «estrategia» en el <a href="/skills">catálogo</a>.',
    'body' => <<<'HTML'
<p>El análisis DAFO es de las herramientas de estrategia más usadas, en empresas y en clase: aparece en planes de negocio, en trabajos de bachillerato y de la universidad, en candidaturas a subvenciones y en presentaciones a socios. También es de las que peor salen cuando se las pides a una IA sin más. Esta guía explica cómo hacer un DAFO con ChatGPT, Gemini o Claude que diga algo de tu caso y que termine en decisiones.</p>

<h2 id="que-es">Qué es un DAFO y para qué sirve</h2>

<p>Un DAFO ordena en cuatro cuadrantes lo que sabes de un proyecto, una empresa o incluso de ti mismo cuando buscas trabajo:</p>

<ul>
    <li><strong>Fortalezas</strong> y <strong>debilidades</strong>: internas. Dependen de ti: tu equipo, tu producto, tus costes, tu reputación.</li>
    <li><strong>Oportunidades</strong> y <strong>amenazas</strong>: externas. Vienen del mercado, la competencia, la normativa o la tecnología, y no las controlas.</li>
</ul>

<p>Sirve para una cosa: decidir. Si al terminarlo no sabes qué vas a hacer distinto, el DAFO se ha quedado en un ejercicio de rellenar casillas.</p>

<h2 id="generico">Por qué la IA hace DAFO genéricos</h2>

<p>Si escribes «hazme un DAFO de una cafetería», la IA te dará «buena ubicación» como fortaleza, «competencia de grandes cadenas» como amenaza y «auge del consumo de café de especialidad» como oportunidad. Vale para cualquier cafetería de cualquier ciudad, así que no vale para la tuya. Hay tres errores típicos:</p>

<ul>
    <li><strong>Inventa lo interno</strong>. No conoce tu negocio, así que supone fortalezas que quizá no tienes.</li>
    <li><strong>Mezcla los cuadrantes</strong>. «Tener redes sociales» no es una oportunidad (es algo tuyo); «el crecimiento del comercio online» no es una fortaleza (es del entorno).</li>
    <li><strong>Afirma datos sin fuente</strong>. Cifras de mercado o tendencias que suenan bien y no se pueden comprobar. Lo explicamos en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>.</li>
</ul>

<h2 id="datos">Paso 1: darle tus datos</h2>

<p>La parte interna solo la puedes aportar tú. Antes de pedir nada, escribe en diez líneas lo que sabes: qué vendes, a quién, a qué precio, cuántos clientes tienes, qué te dicen bien y mal, qué te cuesta más y qué decisión tienes encima de la mesa. Luego:</p>

<blockquote>«Voy a hacer un análisis DAFO de mi negocio para decidir si abro un segundo local. Te paso mis datos. Antes de hacer nada, hazme las preguntas que necesites para que el análisis sea específico de mi caso y no genérico. No inventes datos que no te haya dado.»</blockquote>

<p>Responder a esas preguntas es la mitad del trabajo, y la más útil. Si el DAFO es para un plan de negocio, tienes el proceso completo en <a href="/guias/plan-de-negocio-con-ia">hacer un plan de negocio con IA</a>.</p>

<h2 id="cuadrantes">Paso 2: interno y externo, por separado</h2>

<p>Pide cada mitad por separado. Para lo interno, trabaja solo con lo que le has contado:</p>

<blockquote>«Con los datos que te he dado, propón entre 3 y 5 fortalezas y entre 3 y 5 debilidades. Cada punto debe ser algo interno, que dependa de mí, y debe ir con el dato concreto que lo justifica. Si algo no lo puedes justificar con mis datos, no lo pongas.»</blockquote>

<p>Para lo externo necesitas información actual, así que usa un asistente que busque en internet y cite fuentes, como <a href="/guias/como-usar-perplexity">Perplexity</a> o los modos de <a href="/guias/investigar-con-ia-deep-research">investigación a fondo</a>:</p>

<blockquote>«Busca oportunidades y amenazas externas para una cafetería de especialidad en [barrio, ciudad] en los próximos dos años: competencia cercana, cambios de hábitos, normativa, precios de materias primas. Entre 3 y 5 de cada, cada una con su fuente enlazada. Nada de lo que dependa del propio negocio.»</blockquote>

<p>Abre los enlaces y comprueba las cifras que vayas a usar. Después, pídele una última revisión: «Revisa los cuatro cuadrantes. ¿Hay algún punto en el cuadrante equivocado o que sea tan general que valdría para cualquier negocio? Señálalos».</p>

<h2 id="cruzado">Paso 3: la matriz cruzada y el CAME</h2>

<p>Aquí es donde la IA aporta más, porque cruzar cuadrantes es mecánico y ella lo hace rápido. La matriz cruzada combina lo interno con lo externo y da cuatro tipos de estrategia:</p>

<ul>
    <li><strong>Ofensivas</strong> (fortalezas + oportunidades): usar lo que haces bien para aprovechar lo que viene.</li>
    <li><strong>Defensivas</strong> (fortalezas + amenazas): usar lo que haces bien para protegerte.</li>
    <li><strong>De reorientación</strong> (debilidades + oportunidades): corregir algo para no perder una oportunidad.</li>
    <li><strong>De supervivencia</strong> (debilidades + amenazas): lo que más urge vigilar.</li>
</ul>

<blockquote>«Con este DAFO, haz la matriz cruzada: propón una o dos estrategias concretas por cada combinación. Después haz el análisis CAME (corregir, afrontar, mantener, explotar) y termina con las tres acciones que más impacto tendrían en la decisión de abrir un segundo local, con lo que costaría cada una.»</blockquote>

<p>Trata esas propuestas como un borrador para discutir, no como una recomendación. Para presentárselo a socios o a un banco, puedes ordenar el resultado en un documento con <a href="/guias/hacer-un-informe-con-ia">hacer un informe con IA</a> o en diapositivas con <a href="/guias/presentaciones-con-ia">presentaciones con IA</a>; una tabla de cuatro cuadrantes cabe en una sola.</p>

<h2 id="trabajo-clase">Si es para un trabajo de clase</h2>

<p>En bachillerato, FP y la universidad el DAFO suele pedirse sobre una empresa real (Inditex, Mercadona, una marca de tu ciudad) o sobre un proyecto inventado. La IA te puede ayudar a entender el método, buscar noticias y datos con fuente y revisar si tienes los puntos en el cuadrante correcto. Lo que se evalúa es tu análisis, así que escríbelo tú y cita las fuentes. Para las referencias, en <a href="/guias/citar-en-apa-con-ia">citar en APA con IA</a> tienes el formato.</p>

<p>También funciona para decisiones personales, como cambiar de trabajo: pon tus habilidades como fortalezas, lo que te falta como debilidades y lo que pasa en tu sector como oportunidades y amenazas. La regla es la misma: tus datos dentro, fuentes fuera y, al final, una decisión.</p>
HTML,
];
