<?php

return [
    'title' => 'Hacer un presupuesto personal con IA: ordena tus gastos y ahorra sin hojas imposibles',
    'navTitle' => 'Presupuesto personal con IA',
    'seoTitle' => 'Cómo hacer un presupuesto personal con IA',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para clasificar tus gastos, montar un presupuesto mensual y encontrar dónde ahorrar, sin darle a la IA tus datos bancarios.',
    'excerpt' => 'La parte pesada de un presupuesto es clasificar cientos de movimientos y montar la hoja. La IA hace eso en minutos. Las decisiones sobre en qué gastar, y cualquier inversión, siguen siendo tuyas.',
    'category' => 'Práctica',
    'published' => '2026-10-15',
    'updated' => '2026-10-15',
    'readingMinutes' => 6,
    'words' => 1058,
    'about' => 'Presupuesto doméstico y control de gastos personales con asistentes de inteligencia artificial',
    'related' => ['entender-tu-nomina-con-ia', 'ia-en-excel-y-google-sheets', 'menu-semanal-con-ia', 'comprar-con-ia-black-friday', 'usar-ia-sin-filtrar-datos-de-clientes', 'alucinaciones-de-la-ia', 'como-escribir-prompts-efectivos'],
    'toc' => [
        'para-que' => 'Para qué sirve (y para qué no)',
        'datos' => 'Exportar tus movimientos sin exponerte',
        'clasificar' => 'Clasificar los gastos',
        'presupuesto' => 'Montar el presupuesto del mes',
        'ahorrar' => 'Encontrar dónde ahorrar',
        'seguimiento' => 'Revisarlo cada mes',
    ],
    'faq' => [
        '¿Es seguro pasarle mis gastos a ChatGPT?' => 'Lo es si antes quitas lo que te identifica: número de cuenta, nombre completo, DNI y referencias de transferencias a personas. Para clasificar gastos basta con la fecha, el concepto y el importe. Revisa también si tu cuenta permite que las conversaciones se usen para entrenar el modelo y desactívalo si prefieres.',
        '¿Puede la IA decirme en qué invertir mis ahorros?' => 'No debería ser tu fuente. Los asistentes no conocen tu situación completa, pueden equivocarse con datos y productos y no son asesores financieros regulados. Úsala para entender conceptos y preparar preguntas, y toma esa decisión con un profesional autorizado.',
        '¿Qué es la regla 50/30/20?' => 'Un reparto orientativo de los ingresos netos: 50 % para necesidades (vivienda, comida, suministros), 30 % para gastos personales y 20 % para ahorro o deudas. No encaja con todo el mundo, sobre todo con alquileres altos, pero es un buen punto de partida para que la IA compare tu reparto real.',
        '¿Qué herramienta de IA es mejor para hacer un presupuesto?' => 'Cualquiera que acepte archivos y haga cálculos: ChatGPT, Gemini, Claude o Copilot en Excel. Lo importante es que trabaje sobre tu archivo y no sobre números que tú le dictas de memoria, y que compruebes los totales.',
        '¿Cada cuánto debo revisar el presupuesto?' => 'Una vez al mes es suficiente para la mayoría. Exportas los movimientos, pides la clasificación con las mismas categorías y comparas con el mes anterior. Son unos quince minutos.',
    ],
    'ctaTitle' => 'Números claros también en el trabajo',
    'ctaBody' => 'Las mismas técnicas sirven para las cuentas de un negocio pequeño. En el <a href="/skills">catálogo de skills</a> tienes instrucciones de <a href="/profesiones/finanzas">finanzas</a> y para <a href="/profesiones/freelancers">autónomos</a> que ordenan gastos y previsiones.',
    'body' => <<<'HTML'
<p>Casi todo el mundo sabe que debería llevar un presupuesto y casi nadie lo mantiene más de dos meses. El motivo rara vez es la falta de voluntad: es que clasificar uno a uno los movimientos del banco es aburrido. Ese es justo el trabajo que un asistente de IA hace bien. Esta guía explica cómo pasar de un extracto bancario desordenado a un presupuesto mensual claro, y cómo usarlo para ahorrar, sin entregar tus datos más sensibles.</p>

<h2 id="para-que">Para qué sirve (y para qué no)</h2>

<ul>
    <li><strong>Sirve</strong> para clasificar movimientos, detectar suscripciones olvidadas, calcular medias y comparar meses.</li>
    <li><strong>Sirve</strong> para montar la hoja de cálculo con fórmulas y gráficos sin saber Excel.</li>
    <li><strong>Sirve</strong> para explicarte conceptos: qué es un fondo de emergencia, cómo funciona una TAE o qué significa amortizar.</li>
    <li><strong>No sirve</strong> como asesor de inversiones. No conoce tu situación completa, puede <a href="/guias/alucinaciones-de-la-ia">equivocarse con datos</a> y no responde de sus consejos. Para invertir, consulta con un profesional autorizado.</li>
</ul>

<h2 id="datos">Exportar tus movimientos sin exponerte</h2>

<p>Todos los bancos permiten descargar los movimientos de la cuenta y de la tarjeta en Excel o CSV desde la web. Descarga los últimos tres meses: uno solo puede engañar por un gasto excepcional.</p>

<p>Antes de subir el archivo, límpialo:</p>

<ul>
    <li>Deja solo tres columnas: <strong>fecha, concepto e importe</strong>.</li>
    <li>Borra el número de cuenta, el titular y el saldo.</li>
    <li>En las transferencias a personas, cambia el nombre por algo genérico como «Transferencia a familiar».</li>
    <li>Nunca pegues contraseñas, códigos de verificación ni el número completo de la tarjeta.</li>
</ul>

<p>Es la misma lógica que explicamos en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos</a>: la IA solo necesita lo imprescindible para hacer la tarea.</p>

<h2 id="clasificar">Clasificar los gastos</h2>

<blockquote>«Te adjunto mis movimientos bancarios de los últimos tres meses (fecha, concepto, importe). Clasifica cada gasto en una de estas categorías: vivienda, suministros, supermercado, transporte, restaurantes y ocio, suscripciones, salud, ropa, regalos, otros. Si no estás seguro de un concepto, márcalo como «revisar» en lugar de adivinar. Devuélveme una tabla con el total por categoría y por mes, y una lista aparte de todos los cargos que se repiten cada mes.»</blockquote>

<p>Revisa los marcados como «revisar» y corrige los errores: el asistente no sabe que «BZM 4471» es tu gimnasio. Díselo una vez y pídele que lo tenga en cuenta en adelante.</p>

<p>Comprueba siempre un par de totales a mano o con una suma en la hoja de cálculo. Los modelos actuales calculan bien cuando ejecutan código sobre el archivo, pero pueden fallar si hacen las cuentas «de cabeza».</p>

<h2 id="presupuesto">Montar el presupuesto del mes</h2>

<p>Con el gasto real por categoría, el presupuesto sale casi solo:</p>

<blockquote>«Mis ingresos netos son de [IMPORTE] al mes. Con la media de gasto por categoría que has calculado, propón un presupuesto mensual. Compara mi reparto con la regla 50/30/20 y dime en qué categorías me desvío más. Prepara una hoja de cálculo con una fila por categoría, columnas de presupuesto, gasto real y diferencia, y formato condicional en rojo cuando me pase.»</blockquote>

<p>Si usas Excel o Google Sheets, el propio Copilot o Gemini dentro de la hoja puede crear las fórmulas; lo explicamos en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>. Añade también una línea para un <strong>fondo de emergencia</strong>: el objetivo habitual son entre tres y seis meses de gastos básicos.</p>

<h2 id="ahorrar">Encontrar dónde ahorrar</h2>

<p>Aquí la IA aporta ideas que a uno no se le ocurren mirando su propio extracto:</p>

<ul>
    <li><strong>Suscripciones</strong>: pide la lista de cargos recurrentes con su coste anual. Ver «180 € al año» en lugar de «14,99 €» cambia la decisión.</li>
    <li><strong>Gastos hormiga</strong>: cafés, comida a domicilio, envíos. Pide el total por trimestre y la frecuencia.</li>
    <li><strong>Supermercado</strong>: un <a href="/guias/menu-semanal-con-ia">menú semanal con lista de la compra</a> es de lo que más reduce este capítulo.</li>
    <li><strong>Suministros</strong>: pega tu factura de luz o de móvil (sin datos personales) y pide que te explique cada concepto y qué preguntar al comparar tarifas.</li>
    <li><strong>Ingresos</strong>: antes de cuadrar gastos, asegúrate de que cobras lo que te corresponde. La guía para <a href="/guias/entender-tu-nomina-con-ia">entender tu nómina con IA</a> explica cada línea y qué revisar.</li>
    <li><strong>Compras grandes</strong>: antes de las rebajas, decide cuánto puedes gastar y usa la IA para <a href="/guias/comprar-con-ia-black-friday">comparar precios con cabeza</a>.</li>
</ul>

<p>Pide propuestas concretas y cuantificadas: «Dame tres cambios que me ahorrarían al menos 100 € al mes, ordenados de menor a mayor esfuerzo». Las decisiones son tuyas; la IA solo pone los números delante.</p>

<h2 id="seguimiento">Revisarlo cada mes</h2>

<p>Un presupuesto solo funciona si se revisa. Una rutina de quince minutos al mes:</p>

<ol>
    <li>Descarga y limpia los movimientos del mes.</li>
    <li>Pide la clasificación con las mismas categorías; si usas un proyecto o un asistente personalizado con las instrucciones guardadas, no tendrás que repetirlas.</li>
    <li>Compara con el presupuesto y con el mes anterior.</li>
    <li>Ajusta una sola cosa para el mes siguiente.</li>
</ol>

<p>En enero, con los gastos de Navidad aún recientes, es buen momento para empezar: tendrás un mes de diciembre muy visible con el que comparar el resto del año.</p>
HTML,
];
