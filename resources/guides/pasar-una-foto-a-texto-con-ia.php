<?php

return [
    'title' => 'Pasar una foto a texto: copiar, traducir o cambiar el texto de una imagen con el móvil o con IA',
    'navTitle' => 'Pasar una foto a texto',
    'seoTitle' => 'Pasar una foto a texto: gratis, a Word o con IA',
    'description' => 'Cómo pasar una foto a texto editable gratis: en el iPhone, Android, Windows 11 y Google Docs, a Word o Excel, y con ChatGPT o Gemini para letra a mano.',
    'excerpt' => 'Copiar el texto de una foto ya no exige volver a teclearlo: el móvil y el ordenador lo hacen solos, y la IA se encarga de lo difícil, como la letra a mano o las tablas. Qué usar en cada caso y cómo evitar que se invente palabras.',
    'category' => 'Práctica',
    'published' => '2026-11-09',
    'updated' => '2026-11-09',
    'readingMinutes' => 7,
    'words' => 1178,
    'about' => 'Reconocimiento de texto en imágenes (OCR) en el móvil, el ordenador y con asistentes de inteligencia artificial',
    'related' => ['pasar-audio-a-texto-con-ia', 'ia-en-excel-y-google-sheets', 'resumir-documentos-largos-con-ia', 'traducir-con-ia', 'contabilidad-con-ia', 'estudiar-con-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'alucinaciones-de-la-ia'],
    'toc' => [
        'lo-mas-rapido' => 'Lo más rápido según tu dispositivo',
        'con-ia' => 'Cuándo merece la pena usar ChatGPT o Gemini',
        'la-foto' => 'Cómo hacer la foto para que se lea bien',
        'word-excel' => 'Llevar el texto a Word o a Excel',
        'privacidad' => 'Documentos con datos personales',
    ],
    'faq' => [
        '¿Cómo paso una foto a texto gratis?' => 'Con lo que ya tienes: en el iPhone, Texto en vivo te deja seleccionar y copiar el texto de cualquier foto; en Android, Google Lens hace lo mismo desde Google Fotos o la cámara; en Windows 11, la herramienta Recortes tiene Acciones de texto. Para documentos difíciles, ChatGPT y Gemini leen imágenes en sus versiones gratuitas.',
        '¿Cómo paso el texto de una foto a Word?' => 'Copia el texto con cualquiera de esas opciones y pégalo en Word. Si prefieres un documento directamente, sube la imagen a Google Drive, ábrela con Documentos de Google y descárgala como .docx. Si el documento tiene tablas o columnas, pide a ChatGPT o Gemini que lo transcriba respetando la estructura.',
        '¿La IA puede leer letra escrita a mano?' => 'Sí, y es donde más ventaja saca a los lectores de texto clásicos. ChatGPT y Gemini leen bien la letra a mano clara, apuntes y notas, y se defienden con letra difícil. Pídeles que marquen lo que no puedan leer en lugar de adivinarlo, y revisa nombres y cifras.',
        '¿Qué pasó con Microsoft Lens?' => 'Microsoft retiró la aplicación Lens del móvil a finales de 2025 y recomienda en su lugar la función de escaneo de la aplicación Microsoft 365 Copilot. Si la usabas para escanear documentos, cualquiera de las opciones de esta guía la sustituye.',
        '¿Se puede cambiar el texto de una imagen?' => 'Sí: ChatGPT y Gemini pueden editar una imagen y sustituir un texto por otro, por ejemplo para traducir un cartel o corregir una errata, intentando mantener la tipografía. No siempre sale a la primera; en la ficha de cambiar el texto de una imagen hay un prompt que lo hace más fiable.',
    ],
    'ctaTitle' => 'Prompts para sacar el texto de tus fotos',
    'ctaBody' => 'Tienes prompts listos para <a href="/skills/prompt-para-pasar-a-texto-una-foto-o-un-documento-escaneado-con-chatgpt-o-gemini">pasar a texto una foto o un documento escaneado</a>, <a href="/skills/prompt-para-pasar-una-tabla-de-una-foto-a-excel-con-ia-sin-que-se-descuadren-las-columnas">pasar una tabla a Excel</a> y <a href="/skills/prompt-para-cambiar-o-traducir-el-texto-de-una-imagen-con-ia-sin-perder-la-tipografia">cambiar el texto de una imagen</a>.',
    'body' => <<<'HTML'
<p>Una factura en papel, la página de un libro, una pizarra al final de clase, la captura de un PDF que no deja copiar: todos acaban en lo mismo, un texto que necesitas editar y que está atrapado en una imagen. Volver a teclearlo ya no tiene sentido. El reconocimiento de texto, lo que se conoce como OCR, viene de serie en el móvil y en el ordenador, y los asistentes de IA llegan donde el OCR clásico se queda corto. Esta guía explica qué usar en cada caso.</p>

<h2 id="lo-mas-rapido">Lo más rápido según tu dispositivo</h2>

<table>
    <thead>
        <tr><th>Dónde estás</th><th>Cómo copiar el texto</th></tr>
    </thead>
    <tbody>
        <tr><td>iPhone</td><td>Texto en vivo: abre la foto, mantén pulsado sobre el texto y elige Copiar. Funciona en español desde el iPhone XS con iOS 15 o posterior.</td></tr>
        <tr><td>Android</td><td>Google Lens: en Google Fotos, abre la imagen, pulsa Lens y después Texto para seleccionar y copiar.</td></tr>
        <tr><td>Windows 11</td><td>Haz una captura con Windows + Mayús + S, ábrela en Recortes y pulsa Acciones de texto; luego Copiar todo el texto.</td></tr>
        <tr><td>Mac</td><td>Texto en vivo también funciona en Fotos y en Vista Previa: selecciona el texto de la imagen como si fuera un documento.</td></tr>
        <tr><td>Cualquier ordenador</td><td>Sube la imagen a Google Drive y elige Abrir con, Documentos de Google: el texto aparece debajo de la imagen. Google pide archivos de 2 MB como máximo.</td></tr>
        <tr><td>Una tabla</td><td>Excel tiene Datos desde imagen, en Windows y en Mac: pega una captura o elige un archivo y lo convierte en celdas.</td></tr>
    </tbody>
</table>

<p>Para un párrafo impreso y bien fotografiado, cualquiera de estas opciones acierta casi todo y no sube nada a un chat. Es lo primero que conviene probar.</p>

<h2 id="con-ia">Cuándo merece la pena usar ChatGPT o Gemini</h2>

<p>El OCR del sistema reconoce letras; un asistente de IA entiende el documento. Esa diferencia se nota en cuatro situaciones:</p>

<ul>
    <li><strong>Letra a mano.</strong> Apuntes, notas, recetas de la abuela o una carta antigua. Los lectores clásicos fallan mucho; ChatGPT y Gemini leen bien la letra clara y razonablemente la difícil.</li>
    <li><strong>Fotos torcidas o con sombras.</strong> Un ticket arrugado o una página fotografiada de lado salen mejor con IA que con el OCR del móvil.</li>
    <li><strong>Estructura.</strong> Si necesitas las columnas de una tabla, los apartados de un contrato o los datos de varias facturas ordenados, la IA puede devolverlo ya organizado.</li>
    <li><strong>Hacer algo con el texto.</strong> Traducirlo, resumirlo, corregirlo o pasarlo a otro formato en el mismo paso.</li>
</ul>

<p>Tiene un riesgo que el OCR clásico no tiene: cuando una palabra no se lee bien, la IA tiende a poner la que le parece más probable, sin avisar. Es la misma tendencia que explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. Por eso conviene pedirle siempre una transcripción literal:</p>

<blockquote>«Transcribe literalmente el texto de esta imagen. No corrijas la ortografía ni completes palabras: si algo no se lee, márcalo con [ILEGIBLE]. Respeta los saltos de línea y los títulos.»</blockquote>

<p>Y revisa a mano lo que más se equivoca: nombres propios, cifras, fechas e importes.</p>

<h2 id="la-foto">Cómo hacer la foto para que se lea bien</h2>

<p>Casi todos los errores se deciden al hacer la foto:</p>

<ul>
    <li><strong>De frente y sin inclinar.</strong> Coloca el móvil paralelo a la hoja. Las cámaras del iPhone y de muchos Android tienen un modo de escanear documentos que endereza la imagen.</li>
    <li><strong>Con luz uniforme.</strong> Junto a una ventana y sin flash, que crea un reflejo justo en el centro. Evita tu propia sombra sobre la hoja.</li>
    <li><strong>Una página por foto.</strong> Dos páginas de un libro abierto en la misma imagen mezclan las líneas.</li>
    <li><strong>Que el texto ocupe la imagen.</strong> Cuanto más pequeña sea la letra en la foto, más errores.</li>
</ul>

<p>Si el documento ya es un PDF escaneado, no hace falta fotografiarlo: ChatGPT y Gemini aceptan el PDF directamente, y Google Drive también lo convierte a texto.</p>

<h2 id="word-excel">Llevar el texto a Word o a Excel</h2>

<p>Para <strong>Word</strong>, lo más sencillo es copiar y pegar. Si quieres conservar títulos y listas, pide al asistente que devuelva el texto con formato y pégalo después; o usa Google Docs, que deja descargar el resultado como documento de Word.</p>

<p>Para <strong>Excel</strong>, la función Datos desde imagen funciona bien con tablas limpias. Cuando la tabla está fotografiada en papel, tiene celdas combinadas o importes con separadores distintos, sale mejor pedírsela a la IA en formato de tabla y comprobar que las sumas cuadran. Más ideas para trabajar con hojas de cálculo en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>.</p>

<p>Si lo que tienes son facturas o tickets para tu contabilidad, la guía de <a href="/guias/contabilidad-con-ia">contabilidad con IA</a> explica cómo pasar de las fotos a los asientos sin perder el control.</p>

<h2 id="privacidad">Documentos con datos personales</h2>

<p>Una foto de un DNI, una nómina, un informe médico o un contrato contiene datos que no deberían acabar en cualquier sitio. Antes de subirla a un chat:</p>

<ul>
    <li><strong>Usa primero el OCR del dispositivo.</strong> Texto en vivo, Google Lens y Recortes procesan el texto en tu propio equipo o con tu cuenta, sin enviarlo a una conversación.</li>
    <li><strong>Tapa lo que no necesitas</strong>: números de documento, cuentas bancarias o firmas. La herramienta Recortes de Windows tiene una opción para ocultar texto de una captura antes de compartirla.</li>
    <li><strong>Si es de trabajo, usa la cuenta de la empresa</strong>, no la personal. Lo detallamos en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</li>
</ul>

<p>Y si el texto que necesitas está en una grabación y no en una imagen, el proceso equivalente está en <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto con IA</a>.</p>
HTML,
];
