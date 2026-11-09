<?php

return [
    'title' => 'IA para contabilidad: facturas, asientos e IVA sin teclear a mano',
    'navTitle' => 'IA para contabilidad',
    'seoTitle' => 'IA para contabilidad: facturas, asientos e IVA',
    'description' => 'Cómo usar la IA en la contabilidad de un autónomo o una pyme: leer facturas, proponer asientos y preparar el IVA, y lo que no resuelve, Verifactu incluido.',
    'excerpt' => 'Pasar facturas a mano es de las tareas que mejor hace la IA. Elegir la cuenta contable o decidir qué gasto es deducible ya es otra cosa. Así se reparte el trabajo sin perder el control.',
    'category' => 'Práctica',
    'published' => '2026-11-08',
    'updated' => '2026-11-08',
    'readingMinutes' => 7,
    'words' => 1199,
    'about' => 'Inteligencia artificial aplicada a la contabilidad y la gestión de facturas en España',
    'related' => ['pasar-una-foto-a-texto-con-ia', 'ia-para-autonomos-y-pymes', 'ia-en-excel-y-google-sheets', 'declaracion-de-la-renta-con-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'hacer-un-informe-con-ia', 'automatizar-sin-programar-n8n-make-zapier'],
    'toc' => [
        'que-hace' => 'Qué parte de la contabilidad hace bien',
        'herramientas' => 'Qué herramienta usar',
        'facturas' => 'De la factura al asiento',
        'iva' => 'El IVA trimestral',
        'verifactu' => 'IA y Verifactu',
        'limites' => 'Límites y precauciones',
    ],
    'faq' => [
        '¿Qué IA es mejor para contabilidad?' => 'Depende de la tarea. Para leer facturas a diario, la que ya trae tu programa de contabilidad o facturación, porque deja los datos donde tienen que estar. Para dudas, análisis y tareas puntuales, ChatGPT, Claude o Gemini con los documentos adjuntos. Para hojas de cálculo, Copilot en Excel o Gemini en Google Sheets.',
        '¿Puede la IA hacer los asientos contables?' => 'Puede proponerlos con las cuentas del Plan General Contable y suele acertar en las facturas habituales. Falla más en casos especiales: operaciones intracomunitarias, inversión del sujeto pasivo, gastos de deducibilidad dudosa o inmovilizado. Revisa siempre las propuestas antes de contabilizarlas.',
        '¿Se pueden subir facturas a ChatGPT?' => 'Técnicamente sí, pero llevan datos de terceros: nombres, NIF y direcciones de clientes y proveedores. Usa una cuenta de empresa que no entrene con tus datos, o una herramienta contable con contrato de tratamiento de datos, y no subas más información de la necesaria.',
        '¿Usar ChatGPT para facturar cumple con Verifactu?' => 'No. Verifactu exige que las facturas se emitan con un programa que cumpla el reglamento, con registro de cada factura y código QR. Un texto o un PDF generado por un chatbot no lo cumple. La IA puede ayudarte a elegir y configurar ese programa, no sustituirlo.',
        '¿Cuándo es obligatorio Verifactu?' => 'Según la norma vigente, desde el 1 de enero de 2027 para las sociedades y desde el 1 de julio de 2027 para autónomos y demás obligados. En octubre de 2026 Hacienda anunció su intención de retrasarlo de nuevo; hasta que no se publique en el BOE, las fechas que obligan son esas.',
    ],
    'ctaTitle' => 'Prompts para tu contabilidad',
    'ctaBody' => 'Empieza por el <a href="/skills/prompt-para-contabilizar-facturas-con-ia-asientos-segun-el-plan-general-contable">prompt para contabilizar facturas</a> y el de <a href="/skills/prompt-para-preparar-el-modelo-303-del-iva-con-ia-ordenar-facturas-y-revisar-antes-de-presentar">preparar el modelo 303</a>. En <a href="/profesiones/finanzas">finanzas</a> tienes más.',
    'body' => <<<'HTML'
<p>La contabilidad de un autónomo o de una pyme tiene una parte mecánica enorme: recoger facturas, copiar importes, separar el IVA, cuadrar el banco. Es justo el tipo de trabajo que la IA hace rápido y bien. Hay otra parte que exige criterio, como decidir si un gasto es deducible, y ahí la IA ayuda pero no decide. Esta guía explica cómo repartir el trabajo, con qué herramientas y qué cosas no resuelve.</p>

<h2 id="que-hace">Qué parte de la contabilidad hace bien</h2>

<ul>
    <li><strong>Leer facturas y tickets.</strong> Extrae proveedor, fecha, base, tipo de IVA, cuota y total de un PDF o una foto. Con un lote de facturas, te devuelve una tabla ordenada.</li>
    <li><strong>Proponer asientos.</strong> Con las cuentas del Plan General Contable (compras, servicios, IVA soportado, proveedores) y comprobando que el debe y el haber cuadran.</li>
    <li><strong>Conciliar el banco.</strong> Cruza los movimientos del extracto con las facturas y te señala lo que no casa: cobros sin factura, facturas sin cobrar, duplicados.</li>
    <li><strong>Preparar el trimestre.</strong> Sumar el IVA repercutido y el soportado, detectar facturas fuera de plazo y repasar errores antes del modelo 303.</li>
    <li><strong>Explicar los números.</strong> Convierte un balance o una cuenta de resultados en un resumen que entiende quien no es contable, y te ayuda a hacer una previsión de caja.</li>
</ul>

<h2 id="herramientas">Qué herramienta usar</h2>

<ul>
    <li><strong>Tu programa de contabilidad o facturación.</strong> La mayoría ya incluye lectura automática de facturas y sugerencia de cuentas. Para el día a día es la mejor opción, porque los datos quedan en su sitio y no hay que copiarlos.</li>
    <li><strong>ChatGPT, Claude o Gemini.</strong> Para tareas puntuales: revisar un trimestre, resolver una duda, preparar un cierre o analizar las cuentas. Claude y Gemini aguantan bien documentos largos.</li>
    <li><strong>La hoja de cálculo con IA.</strong> Copilot en Excel o Gemini en Google Sheets, para fórmulas, tablas dinámicas y previsiones. Lo explicamos en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>.</li>
    <li><strong>Automatizaciones.</strong> Si recibes muchas facturas por correo, se puede montar un flujo que las lea y las deje en una hoja o en el programa. Ver <a href="/guias/automatizar-sin-programar-n8n-make-zapier">automatizar sin programar</a>.</li>
</ul>

<h2 id="facturas">De la factura al asiento</h2>

<ol>
    <li><strong>Reúne las facturas del periodo</strong> en una carpeta: PDF, fotos o la exportación de tu programa.</li>
    <li><strong>Pide primero la tabla.</strong> Que extraiga los datos de cada factura y marque las que no se leen bien o a las que les falta algo obligatorio, como el NIF o la fecha.</li>
    <li><strong>Revisa la tabla</strong> contra los originales. Es el paso que evita la mayoría de errores: un 8 leído como 3 descuadra todo el trimestre.</li>
    <li><strong>Pide los asientos</strong> con las cuentas que ya usas, y que justifique las dudosas. El <a href="/skills/prompt-para-contabilizar-facturas-con-ia-asientos-segun-el-plan-general-contable">prompt para contabilizar facturas</a> hace los dos pasos y marca los casos especiales.</li>
    <li><strong>Pasa los asientos a tu programa</strong> o a la gestoría, con las dudas anotadas.</li>
</ol>

<p>Si solo necesitas sacar los datos de muchos PDF a una tabla, también te sirve el prompt para <a href="/skills/extraer-datos-de-pdfs-de-facturas-y-contratos-a-una-tabla">extraer datos de facturas y contratos</a>.</p>

<h2 id="iva">El IVA trimestral</h2>

<p>Para un autónomo, el modelo 303 es el momento en que más se notan los errores de todo el trimestre. La IA ayuda a llegar con todo revisado:</p>

<ul>
    <li>Ordena las facturas emitidas por tipo de IVA y suma bases y cuotas.</li>
    <li>Separa el IVA que puedes deducir del dudoso: vehículo, móvil, comidas o suministros de casa compartidos con el uso personal.</li>
    <li>Detecta operaciones especiales: clientes de otros países de la UE o servicios con inversión del sujeto pasivo.</li>
    <li>Revisa errores típicos: facturas de otro trimestre, numeración saltada o tickets que no son factura.</li>
</ul>

<p>El <a href="/skills/prompt-para-preparar-el-modelo-303-del-iva-con-ia-ordenar-facturas-y-revisar-antes-de-presentar">prompt para preparar el modelo 303</a> sigue ese orden. El modelo se presenta en la sede de la Agencia Tributaria o lo presenta tu gestoría; la IA solo te ayuda a llegar con los números claros. Para la declaración anual, mira la guía de <a href="/guias/declaracion-de-la-renta-con-ia">la renta con IA</a>.</p>

<h2 id="verifactu">IA y Verifactu</h2>

<p>Verifactu obliga a emitir las facturas con un programa que cumpla el reglamento de sistemas de facturación: cada factura queda registrada, encadenada con la anterior y con un código QR que Hacienda puede verificar. Según la norma vigente, es obligatorio desde el 1 de enero de 2027 para las sociedades y desde el 1 de julio de 2027 para autónomos y demás obligados. En octubre de 2026 Hacienda anunció su intención de aplazarlo otra vez; mientras no se publique en el BOE, conviene prepararse para esas fechas.</p>

<p>Lo importante para esta guía: <strong>una factura hecha con ChatGPT no cumple Verifactu</strong>, por bien que quede. La IA puede ayudarte a comparar programas, migrar tus datos o preparar el plan de cambio, con el prompt de <a href="/skills/facturacion-electronica-y-verifactu-plan-de-preparacion-para-tu-empresa">facturación electrónica y Verifactu</a>, pero la factura tiene que salir del programa.</p>

<h2 id="limites">Límites y precauciones</h2>

<ul>
    <li><strong>Los importes, siempre revisados.</strong> La IA puede leer mal una cifra o sumar mal una columna larga. Compara los totales con las facturas.</li>
    <li><strong>El criterio fiscal es tuyo o de tu asesor.</strong> Si un gasto es deducible depende de tu actividad y de cómo lo interprete Hacienda. La IA te explica el criterio general, no lo decide.</li>
    <li><strong>Los datos de terceros.</strong> Las facturas llevan nombres y NIF de clientes y proveedores. Usa cuentas que no entrenen con tus datos y lee <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos de clientes</a>.</li>
    <li><strong>No inventes normativa.</strong> Tipos, plazos y casillas cambian. Pide a la IA que diga cuándo no está segura y comprueba en la Agencia Tributaria.</li>
</ul>

<p>Bien usada, la IA no sustituye a la gestoría: le llega mejor material. Y a ti te deja más tiempo para mirar lo que de verdad importa en las cuentas, que es si el negocio gana dinero. Más ideas para el día a día del negocio en <a href="/guias/ia-para-autonomos-y-pymes">IA para autónomos y pymes</a>.</p>
HTML,
];
