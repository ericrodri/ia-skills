<?php

return [
    'title' => 'IA para invertir en bolsa: para qué sirve ChatGPT y dónde está el riesgo',
    'navTitle' => 'Invertir en bolsa con IA',
    'seoTitle' => 'IA para invertir en bolsa: lo que sí y lo que no',
    'description' => 'Qué puede hacer la IA si inviertes en bolsa o en fondos: entender productos, leer cuentas y comparar comisiones. Por qué no debe elegir por ti y los fraudes.',
    'excerpt' => 'ChatGPT no sabe qué acción va a subir, y la CNMV ha comprobado que los asistentes se equivocan al invertir solos. Bien usados, en cambio, son un buen profesor y un buen lector de letra pequeña.',
    'category' => 'Uso responsable',
    'published' => '2026-11-08',
    'updated' => '2026-11-08',
    'readingMinutes' => 7,
    'words' => 1091,
    'about' => 'Uso de la inteligencia artificial para aprender a invertir y analizar productos financieros',
    'related' => ['presupuesto-personal-y-ahorro-con-ia', 'estafas-con-ia-deepfakes-y-suplantacion', 'alucinaciones-de-la-ia', 'chatgpt-siempre-te-da-la-razon', 'declaracion-de-la-renta-con-ia', 'investigar-con-ia-deep-research'],
    'toc' => [
        'cnmv' => 'Lo que dice la CNMV',
        'para-que' => 'Para qué sí sirve',
        'para-que-no' => 'Para qué no',
        'como' => 'Cómo preguntar bien',
        'fraudes' => 'Bots de trading y chiringuitos con IA',
    ],
    'faq' => [
        '¿Puede ChatGPT decirme en qué acciones invertir?' => 'Te contestará si insistes, pero no deberías hacerle caso. No conoce tu situación, puede usar datos antiguos o inventados y no es un asesor autorizado. Úsalo para entender productos y preparar preguntas; la decisión, tuya o de un profesional registrado en la CNMV.',
        '¿Hay alguna IA que gane en bolsa?' => 'Ninguna lo garantiza. La CNMV probó en 2026 varios asistentes conocidos tomando decisiones de inversión y encontró errores de cálculo, datos mal interpretados e información inventada. Cualquier plataforma que prometa ganancias seguras gracias a la IA es, como mínimo, sospechosa.',
        '¿Son fiables los bots de trading con inteligencia artificial?' => 'Muchos son fraudes. La CNMV advierte de entidades no autorizadas que prometen rentabilidades muy altas gracias a la IA y que usan noticias falsas o vídeos manipulados de famosos. Antes de dar dinero, busca la empresa en el registro de la CNMV.',
        '¿Qué IA es mejor para analizar acciones?' => 'Para leer informes anuales y cuentas, cualquier asistente que acepte documentos largos: Claude, ChatGPT o Gemini. Para datos actuales, uno con búsqueda web como Perplexity, comprobando siempre las cifras en la fuente. Ninguno sustituye a mirar tú los números.',
        '¿Es legal que una web me recomiende inversiones con IA?' => 'Solo si está autorizada. En España, recomendar productos de inversión de forma personalizada es asesoramiento financiero y requiere estar registrado en la CNMV. Una herramienta que te dice qué comprar sin esa autorización no te protege si algo sale mal.',
    ],
    'ctaTitle' => 'Prompts para invertir con cabeza',
    'ctaBody' => 'Tienes el <a href="/skills/prompt-para-entender-un-fondo-indexado-o-un-etf-antes-de-invertir-comisiones-riesgo-y-folleto">prompt para entender un fondo o un ETF</a>, el de <a href="/skills/prompt-para-analizar-una-empresa-cotizada-antes-de-invertir-que-mirar-y-que-preguntarte">analizar una empresa cotizada</a> y el de <a href="/skills/prompt-para-detectar-si-una-plataforma-de-inversion-con-ia-es-un-chiringuito-financiero">detectar un chiringuito con IA</a>.',
    'body' => <<<'HTML'
<p>«¿En qué invierto?» es una de las preguntas que más se le hacen a ChatGPT, y una de las que peor responde. No porque no sepa de finanzas, sino porque nadie sabe qué acción va a subir mañana y porque un asistente no conoce tu situación. Eso no significa que la IA no sirva para invertir: sirve mucho, pero para otras cosas. Esta guía explica cuáles, cómo preguntarle y cómo no caer en las estafas que usan la IA como gancho.</p>

<p><strong>Aviso:</strong> esta guía es informativa. No es asesoramiento financiero ni una recomendación para comprar o vender ningún producto.</p>

<h2 id="cnmv">Lo que dice la CNMV</h2>

<p>En abril de 2026 la CNMV, el supervisor de los mercados en España, publicó un estudio en el que puso a varios asistentes conocidos, entre ellos ChatGPT, Gemini, DeepSeek y Perplexity, a tomar decisiones de inversión. Sus conclusiones son útiles para cualquiera:</p>

<ul>
    <li>Cometen <strong>fallos de razonamiento recurrentes</strong>: errores matemáticos, datos mal interpretados e información inventada.</li>
    <li>Funcionan bastante mejor cuando trabajan con <strong>fuentes oficiales</strong>, como los registros del supervisor o las cuentas publicadas, que cuando buscan en internet sin más.</li>
    <li>La <strong>supervisión de una persona experta</strong> sigue siendo imprescindible.</li>
</ul>

<p>Traducido a la práctica: la IA es buena trabajando sobre documentos que tú le das, y mala adivinando o buscando datos por su cuenta.</p>

<h2 id="para-que">Para qué sí sirve</h2>

<ul>
    <li><strong>Aprender los conceptos.</strong> Qué es un fondo indexado, diferencia entre acumulación y distribución, qué significa diversificar o por qué importan tanto las comisiones a largo plazo. Pide ejemplos con números.</li>
    <li><strong>Leer la letra pequeña.</strong> Sube el documento de datos fundamentales de un fondo o ETF y pide que te explique qué compra, cuánto cuesta y qué riesgo tiene. El <a href="/skills/prompt-para-entender-un-fondo-indexado-o-un-etf-antes-de-invertir-comisiones-riesgo-y-folleto">prompt para entender un fondo o un ETF</a> está pensado para eso.</li>
    <li><strong>Analizar una empresa.</strong> Con el informe anual o las cuentas, la IA resume el negocio, señala la deuda, la evolución de márgenes y los riesgos que la propia empresa declara. El <a href="/skills/prompt-para-analizar-una-empresa-cotizada-antes-de-invertir-que-mirar-y-que-preguntarte">prompt para analizar una empresa cotizada</a> te guía.</li>
    <li><strong>Comparar costes.</strong> Dale las comisiones de dos productos y pídele cuánto supone cada una en 10 o 20 años. Es una cuenta que cambia decisiones.</li>
    <li><strong>Revisar tu cartera.</strong> Con la lista de lo que tienes, sin datos de la cuenta, puede decirte si estás concentrado en un país, un sector o una divisa sin saberlo.</li>
    <li><strong>Hacer de abogado del diablo.</strong> Explícale por qué quieres comprar algo y pídele los mejores argumentos en contra.</li>
</ul>

<h2 id="para-que-no">Para qué no</h2>

<ul>
    <li><strong>Elegir qué comprar.</strong> No conoce tus ingresos, tu colchón de emergencia ni cuánto aguantarías una caída. Y un consejo personalizado de inversión solo puede darlo una entidad autorizada.</li>
    <li><strong>Predecir precios.</strong> Ningún modelo sabe qué hará el mercado. Si alguno parece saberlo, es que está rellenando huecos con seguridad.</li>
    <li><strong>Darte cotizaciones o datos recientes sin fuente.</strong> Puede usar cifras antiguas. Pide siempre el enlace o comprueba el dato en la web de la empresa o en tu bróker.</li>
    <li><strong>Confirmar lo que ya quieres hacer.</strong> Los asistentes tienden a darte la razón; lo contamos en <a href="/guias/chatgpt-siempre-te-da-la-razon">ChatGPT siempre te da la razón</a>. En inversión, eso es peligroso.</li>
</ul>

<h2 id="como">Cómo preguntar bien</h2>

<ol>
    <li><strong>Dale el documento, no el nombre.</strong> «Explícame este fondo» con el folleto adjunto funciona mucho mejor que «¿qué tal es el fondo X?».</li>
    <li><strong>Pide que diga «no aparece».</strong> Añade: «si un dato no está en el documento, dilo en vez de suponerlo».</li>
    <li><strong>Pide los cálculos paso a paso.</strong> Así puedes revisar si se ha equivocado en una multiplicación, que pasa más de lo que parece.</li>
    <li><strong>Prohíbe la recomendación.</strong> «No me digas si es buena inversión; explícamela.» El análisis mejora cuando no tiene que llegar a un veredicto.</li>
    <li><strong>Comprueba lo importante.</strong> Comisiones, fiscalidad y riesgos, en el documento original. Para temas fiscales, mira también la <a href="/guias/declaracion-de-la-renta-con-ia">guía de la renta con IA</a>.</li>
</ol>

<h2 id="fraudes">Bots de trading y chiringuitos con IA</h2>

<p>La IA se ha convertido en el gancho favorito de los fraudes de inversión. La CNMV advierte de entidades no autorizadas que prometen rentabilidades muy superiores a las del mercado, meten prisa y usan noticias falsas creadas con inteligencia artificial o vídeos manipulados de famosos. Las señales más claras:</p>

<ul>
    <li>Un «robot» o un «algoritmo de IA» que gana siempre.</li>
    <li>Rentabilidades garantizadas o del 1 % diario, semanal o mensual.</li>
    <li>Contacto por WhatsApp o Telegram, o un «gestor personal» que llama a menudo.</li>
    <li>Te piden instalar un programa de control remoto o pagar en criptomonedas.</li>
    <li>Para retirar tus ganancias, primero hay que pagar «impuestos» o «comisiones».</li>
</ul>

<p>Antes de dar dinero o datos, busca la empresa en el registro de entidades y en las advertencias de la web de la CNMV. Si ya has caído, llama a tu banco, denuncia y desconfía de quien te ofrezca recuperar el dinero: suele ser la segunda parte de la misma estafa. Para revisar una oferta concreta, usa el <a href="/skills/prompt-para-detectar-si-una-plataforma-de-inversion-con-ia-es-un-chiringuito-financiero">prompt para detectar un chiringuito con IA</a>, y para los vídeos falsos, la guía de <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA</a>.</p>

<p>La mejor forma de usar la IA para invertir es la menos espectacular: como profesor paciente y como lector de documentos aburridos. Con eso ya llevas ventaja sobre quien compra porque lo ha visto en un vídeo.</p>
HTML,
];
