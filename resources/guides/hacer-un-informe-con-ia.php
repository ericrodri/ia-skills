<?php

return [
    'title' => 'Cómo hacer un informe con IA: estructura, datos y prompts para el trabajo',
    'navTitle' => 'Hacer un informe con IA',
    'seoTitle' => 'Cómo hacer un informe con IA: estructura y prompts',
    'description' => 'Cómo redactar un informe de trabajo con ChatGPT, Claude, Gemini o Copilot: estructura, análisis de datos, resumen ejecutivo y revisión, con prompts listos.',
    'excerpt' => 'La IA escribe un informe de diez páginas en un minuto, pero lo que hace valioso un informe es lo que ella no sabe: tus datos, tu contexto y qué decisión tiene que tomar quien lo lee. Así se reparte el trabajo para que el resultado sea fiable.',
    'category' => 'Práctica',
    'published' => '2026-10-29',
    'updated' => '2026-10-29',
    'readingMinutes' => 6,
    'words' => 1014,
    'about' => 'Uso de asistentes de inteligencia artificial para estructurar, redactar y revisar informes profesionales a partir de datos y documentos propios',
    'related' => ['resumir-documentos-largos-con-ia', 'ia-en-excel-y-google-sheets', 'presentaciones-con-ia', 'ia-para-reuniones-y-actas', 'usar-ia-sin-filtrar-datos-de-clientes', 'alucinaciones-de-la-ia'],
    'toc' => [
        'antes' => 'Antes de escribir: para quién y para qué',
        'estructura' => 'La estructura',
        'material' => 'Darle el material',
        'datos' => 'Analizar los datos',
        'redactar' => 'Redactar y pulir',
        'revisar' => 'Revisar antes de enviarlo',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer informes?' => 'Claude y ChatGPT redactan bien textos largos y estructurados; Copilot es cómodo si trabajas en Word y Excel de Microsoft 365, y Gemini si usas Google Docs. Importa más darle buen material que la herramienta elegida.',
        '¿Puede la IA analizar los datos de un Excel para el informe?' => 'Sí. ChatGPT, Claude y Gemini pueden leer hojas de cálculo, calcular totales, variaciones y tendencias y hacer gráficos. Pídele que te enseñe los cálculos y comprueba a mano dos o tres cifras clave antes de usarlas.',
        '¿Qué partes tiene un informe?' => 'Lo habitual es: resumen ejecutivo, contexto y objetivo, metodología o fuentes, resultados, conclusiones y recomendaciones, y anexos con el detalle. En informes breves basta con resumen, resultados y recomendaciones.',
        '¿Es seguro subir documentos de la empresa a la IA?' => 'Depende de la herramienta y de tu cuenta. Las versiones de empresa suelen garantizar que no se entrena con tus datos; las gratuitas no siempre. Revisa la política de tu empresa y quita datos personales o de clientes si no estás seguro.',
        '¿Hay que decir que el informe se ha hecho con IA?' => 'Depende de tu empresa y del destinatario. Muchas organizaciones lo piden en sus políticas de uso de IA. En cualquier caso, quien firma el informe responde de lo que dice, así que revísalo como si lo hubieras escrito entero tú.',
    ],
    'ctaTitle' => 'Skills para informes y análisis',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para analizar datos, resumir documentos y redactar informes, pensadas para <a href="/profesiones/finanzas">finanzas</a>, <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/product-management">producto</a>.',
    'body' => <<<'HTML'
<p>Informes mensuales de ventas, de una campaña, de un proyecto, de una incidencia o de una auditoría: en muchos trabajos, redactar informes se come horas cada semana. Es una de las tareas donde la IA ahorra más tiempo, y también donde un error puede costar más, porque alguien va a tomar decisiones a partir de lo que pone. Esta guía explica cómo hacer un informe con IA que puedas firmar tranquilo.</p>

<h2 id="antes">Antes de escribir: para quién y para qué</h2>

<p>El fallo más común de los informes hechos con IA es que son genéricos: correctos, largos y sin conclusión. Se evita respondiendo antes a tres preguntas y dándoselas a la IA:</p>

<ul>
    <li><strong>¿Quién lo va a leer?</strong> Un director con dos minutos, un cliente o un equipo técnico necesitan informes muy distintos.</li>
    <li><strong>¿Qué decisión tiene que tomar?</strong> Aprobar un presupuesto, cambiar de proveedor, seguir con una campaña.</li>
    <li><strong>¿Cuál es tu conclusión?</strong> Si no la tienes clara, el informe tampoco la tendrá.</li>
</ul>

<h2 id="estructura">La estructura</h2>

<p>Si tu empresa tiene una plantilla de informe, úsala y pásasela a la IA. Si no, esta estructura vale para casi todo:</p>

<ol>
    <li><strong>Resumen ejecutivo</strong>: conclusión y recomendación en cinco líneas. Va al principio aunque se escriba al final.</li>
    <li><strong>Contexto y objetivo</strong>: por qué existe este informe.</li>
    <li><strong>Fuentes y método</strong>: de dónde salen los datos y qué periodo cubren.</li>
    <li><strong>Resultados</strong>: los datos, con gráficos o tablas.</li>
    <li><strong>Conclusiones y recomendaciones</strong>: qué significan los resultados y qué propones hacer.</li>
    <li><strong>Anexos</strong>: el detalle que solo algunos van a mirar.</li>
</ol>

<p>Pide a la IA el índice antes que el texto:</p>

<blockquote>«Voy a hacer un informe sobre [TEMA] para [DESTINATARIO], que tiene que decidir [DECISIÓN]. Mi conclusión es [CONCLUSIÓN]. Propón un índice con lo que debería ir en cada apartado y la extensión aproximada. Dime qué información me falta para que el informe sea convincente.»</blockquote>

<h2 id="material">Darle el material</h2>

<p>La IA solo puede escribir sobre lo que le das. Adjunta las hojas de cálculo, las actas, los correos relevantes o los informes anteriores. Si son documentos largos, la guía de <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a> explica cómo trocearlos sin perder detalles, y si parte del material son reuniones, en <a href="/guias/ia-para-reuniones-y-actas">IA para reuniones y actas</a> explicamos cómo sacar de ellas acuerdos y cifras.</p>

<p>Antes de subir nada, quita lo que no debe salir de la empresa: nombres de clientes, datos personales, contratos confidenciales. Lo explicamos con detalle en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos de clientes</a>.</p>

<h2 id="datos">Analizar los datos</h2>

<p>ChatGPT, Claude y Gemini pueden abrir un Excel o un CSV, calcular y dibujar gráficos. El prompt que mejor funciona pide los cálculos a la vista:</p>

<blockquote>«Analiza esta hoja con las ventas de [PERIODO]. Calcula el total, la variación frente al periodo anterior y los tres productos que más han subido y bajado. Enséñame cómo has hecho cada cálculo. Después, dime qué tres datos contarías en el informe y con qué gráfico.»</blockquote>

<p>Comprueba a mano dos o tres cifras clave: es la forma más rápida de detectar si ha leído mal una columna. Si trabajas mucho con hojas de cálculo, en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a> tienes más ejemplos. Y si un dato visual tiene que destacar, puedes convertirlo en una <a href="/guias/hacer-una-infografia-con-ia">infografía hecha con IA</a> para el anexo o la presentación.</p>

<h2 id="redactar">Redactar y pulir</h2>

<p>Con el índice y los datos revisados, pide la redacción apartado por apartado, no el informe entero de golpe. Así controlas cada parte:</p>

<blockquote>«Redacta el apartado de resultados usando solo estos datos. Tono profesional y directo, frases cortas, sin adjetivos de relleno. Cada párrafo empieza por la idea principal. Si un dato no permite una conclusión clara, dilo.»</blockquote>

<p>El resumen ejecutivo, al final y con un límite estricto: «Resume el informe en cinco líneas: situación, conclusión principal, recomendación y lo que pasa si no se hace nada». Es la parte que más gente va a leer.</p>

<p>Luego quita relleno. Los textos de IA tienden a repetir la conclusión tres veces y a usar frases como «es importante destacar que». Pídele: «Recorta este informe un 30 % sin perder datos ni conclusiones». Si tu informe acabará en diapositivas, la guía de <a href="/guias/presentaciones-con-ia">presentaciones con IA</a> explica cómo pasar de uno a otro.</p>

<h2 id="revisar">Revisar antes de enviarlo</h2>

<p>Tú firmas el informe, así que la revisión final es tuya. Repasa:</p>

<ul>
    <li><strong>Cifras</strong>: cada número del texto coincide con la hoja de origen.</li>
    <li><strong>Afirmaciones</strong>: nada que no salga de tu material. La IA tiende a completar con datos verosímiles, como explicamos en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>.</li>
    <li><strong>Conclusión</strong>: es la tuya, no una versión suavizada.</li>
    <li><strong>Destinatario</strong>: el nivel técnico encaja con quien lo lee.</li>
</ul>

<p>Un último prompt útil: «Lee este informe como si fueras [DESTINATARIO] y dime qué tres preguntas me harías después de leerlo». Si puedes responderlas en el propio informe, te ahorras la reunión.</p>
HTML,
];
