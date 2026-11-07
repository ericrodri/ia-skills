<?php

return [
    'title' => '¿Se puede hacer la declaración de la renta con IA? Lo que hace bien y lo que no',
    'navTitle' => 'Declaración de la renta con IA',
    'seoTitle' => 'Declaración de la renta con IA: qué puede hacer',
    'description' => 'Cómo usar ChatGPT, Claude o Gemini para la declaración de la renta: revisar el borrador, encontrar deducciones y preparar dudas, sin dar tus datos fiscales.',
    'excerpt' => 'Ninguna IA presenta la renta por ti, y no debería. Pero bien usada te ayuda a entender el borrador, a no dejarte deducciones y a llegar al gestor con las preguntas claras.',
    'category' => 'Práctica',
    'published' => '2026-11-08',
    'updated' => '2026-11-08',
    'readingMinutes' => 7,
    'words' => 1183,
    'about' => 'Uso de la inteligencia artificial para preparar la declaración de la renta en España',
    'related' => ['entender-tu-nomina-con-ia', 'presupuesto-personal-y-ahorro-con-ia', 'contabilidad-con-ia', 'alucinaciones-de-la-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'ia-para-autonomos-y-pymes'],
    'toc' => [
        'respuesta' => 'La respuesta corta',
        'para-que' => 'Para qué sirve la IA en la renta',
        'como' => 'Cómo usarla paso a paso',
        'datos' => 'Qué datos no darle nunca',
        'errores' => 'Dónde se equivoca',
        'calendario' => 'Cuándo se presenta',
    ],
    'faq' => [
        '¿Puede ChatGPT hacer mi declaración de la renta?' => 'No. ChatGPT no tiene acceso a tus datos fiscales ni puede presentar nada ante la Agencia Tributaria. La declaración se hace en Renta Web, en la app de la Agencia Tributaria o con un gestor. La IA sirve para entender el borrador, repasar deducciones y preparar dudas.',
        '¿Es seguro subir mis datos fiscales a ChatGPT?' => 'No es buena idea. El PDF de datos fiscales lleva tu DNI, tus ingresos, tu cuenta bancaria y los datos de tu familia. Para que la IA te ayude basta con describir tu situación sin datos que te identifiquen. Si aun así subes un documento, tacha antes nombre, DNI, dirección y cuentas.',
        '¿La IA conoce las deducciones de mi comunidad autónoma?' => 'Conoce muchas, pero puede tener datos de otro año: las deducciones autonómicas cambian casi cada ejercicio. Úsala para hacer la lista de las que podrían encajar contigo y comprueba cada una en el Manual práctico de Renta de la Agencia Tributaria o en Renta Web.',
        '¿Quién responde si la IA me hace equivocarme en la renta?' => 'Tú. La declaración es responsabilidad del contribuyente, y un error que acabe en una paralela o una sanción no se puede atribuir a un chatbot. Por eso la IA debe ayudarte a revisar, no decidir por ti.',
        '¿Cuándo empieza la campaña de la renta?' => 'Normalmente a principios de abril, con presentación por internet hasta finales de junio. La declaración que se presenta en la primavera de 2027 corresponde a los ingresos de 2026. La Agencia Tributaria publica las fechas exactas en su calendario del contribuyente.',
    ],
    'ctaTitle' => 'Prompts para revisar tu renta',
    'ctaBody' => 'Tienes el <a href="/skills/prompt-para-revisar-el-borrador-de-la-renta-con-ia-sin-darle-tus-datos-personales">prompt para revisar el borrador sin dar tus datos</a> y el de <a href="/skills/prompt-para-encontrar-las-deducciones-de-la-renta-de-tu-comunidad-autonoma-que-te-pueden-corresponder">deducciones de tu comunidad autónoma</a>.',
    'body' => <<<'HTML'
<p>Cada primavera millones de personas abren el borrador de la renta, ven una cifra y lo confirman sin entender de dónde sale. Otros se pasan una tarde buscando en foros si pueden deducirse el alquiler o la guardería. Un asistente de IA no va a hacer la declaración por ti, pero puede ahorrarte buena parte de esa tarde. Esta guía explica para qué sirve, cómo usarlo sin entregar tus datos y en qué se equivoca.</p>

<h2 id="respuesta">La respuesta corta</h2>

<p>No, no se puede «hacer la renta con ChatGPT» en el sentido de que la IA la rellene y la presente. ChatGPT, Claude o Gemini no tienen acceso a tus datos fiscales ni pueden identificarse ante la Agencia Tributaria. La declaración se sigue haciendo en Renta Web, en la app de la Agencia Tributaria o con un gestor.</p>

<p>Lo que sí puedes hacer es usar la IA como un asesor de bolsillo que te explica conceptos, repasa tu situación y te dice qué comprobar. Usada así, es de las tareas en las que más tiempo ahorra.</p>

<h2 id="para-que">Para qué sirve la IA en la renta</h2>

<ul>
    <li><strong>Entender el borrador.</strong> Qué son los rendimientos del trabajo, por qué te retienen lo que te retienen o qué es la base liquidable. Pega el concepto que no entiendas y pide una explicación con un ejemplo.</li>
    <li><strong>Repasar lo que puede faltar.</strong> El borrador se hace con la información que tiene Hacienda, y hay cosas que no conoce: un alquiler que cobras, una venta de fondos en un bróker extranjero, un donativo o algunas deducciones autonómicas.</li>
    <li><strong>Hacer la lista de deducciones.</strong> Con tu comunidad y tu situación familiar, la IA propone las deducciones que podrían corresponderte y qué requisito comprobar en cada una.</li>
    <li><strong>Comparar conjunta e individual.</strong> Te explica cuándo suele salir mejor cada opción. Para el cálculo real, Renta Web te enseña las dos.</li>
    <li><strong>Preparar las preguntas para el gestor.</strong> Si vas a un profesional, llegar con tu situación ordenada y tres dudas claras abarata y acelera la consulta.</li>
    <li><strong>Entender una carta de Hacienda.</strong> Un requerimiento o una propuesta de liquidación escritos en lenguaje administrativo se entienden mejor con una explicación sencilla al lado. Quita antes los datos personales.</li>
</ul>

<h2 id="como">Cómo usarla paso a paso</h2>

<ol>
    <li><strong>Abre tu borrador en Renta Web</strong> y anota tu situación: comunidad autónoma, familia, tipo de ingresos, vivienda y movimientos especiales del año. Sin nombres ni DNI.</li>
    <li><strong>Pide a la IA una lista de comprobación</strong> para tu caso: qué apartados suelen venir incompletos y qué deducciones podrían encajar. El <a href="/skills/prompt-para-revisar-el-borrador-de-la-renta-con-ia-sin-darle-tus-datos-personales">prompt para revisar el borrador</a> ya está preparado para eso.</li>
    <li><strong>Busca las deducciones de tu comunidad.</strong> Son las que más se olvidan: alquiler para jóvenes, nacimiento de hijos, guardería, familia numerosa o gastos educativos, según la comunidad. Usa el <a href="/skills/prompt-para-encontrar-las-deducciones-de-la-renta-de-tu-comunidad-autonoma-que-te-pueden-corresponder">prompt de deducciones autonómicas</a>, mejor con la búsqueda web activada.</li>
    <li><strong>Comprueba cada punto en Renta Web.</strong> La ayuda de cada casilla y el Manual práctico de Renta de la Agencia Tributaria son la fuente buena. La IA te dice dónde mirar; Renta Web te dice si se aplica.</li>
    <li><strong>Si algo no cuadra, pregunta a quien responde.</strong> La Agencia Tributaria tiene asistentes y teléfonos de ayuda en su sede, y un gestor puede revisar los casos complejos.</li>
</ol>

<h2 id="datos">Qué datos no darle nunca</h2>

<p>Para ayudarte con la renta, la IA no necesita saber quién eres. Basta con tu situación. No subas a un chatbot:</p>

<ul>
    <li>El PDF de datos fiscales o el borrador completo con tu nombre y DNI.</li>
    <li>Tu número de referencia, tu Cl@ve o cualquier código de acceso a la Agencia Tributaria. Ningún servicio legítimo te lo pedirá por chat.</li>
    <li>Números de cuenta, direcciones y datos de tus hijos o de tu pareja.</li>
</ul>

<p>Si quieres que la IA lea un documento concreto, tacha antes esos datos. Y revisa si tu cuenta permite usar tus conversaciones para entrenar el modelo; lo explicamos en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos</a>.</p>

<h2 id="errores">Dónde se equivoca</h2>

<p>La renta es un terreno donde la IA falla de formas muy concretas:</p>

<ul>
    <li><strong>Datos de otro año.</strong> Límites, porcentajes y deducciones cambian cada ejercicio. Un modelo entrenado con información antigua te dará cifras que ya no valen, con total seguridad.</li>
    <li><strong>Mezclar comunidades.</strong> Puede atribuirte una deducción de otra comunidad o de otro país. País Vasco y Navarra tienen además su propio sistema y no usan Renta Web.</li>
    <li><strong>Inventar requisitos.</strong> Si no sabe un dato, a veces lo completa. Es el problema de las <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a>, y en temas fiscales sale caro.</li>
    <li><strong>Darte la razón.</strong> Si preguntas «¿me puedo deducir esto?» con ganas de oír que sí, tenderá a decírtelo. Pregunta mejor «qué requisitos tiene y cuál podría no cumplir».</li>
</ul>

<p>La regla es sencilla: la IA propone y Renta Web confirma. Si no puedes comprobar algo en una fuente oficial, no lo metas en la declaración.</p>

<h2 id="calendario">Cuándo se presenta</h2>

<p>La campaña suele abrirse a principios de abril y la presentación por internet termina a finales de junio. La declaración que se presenta en la primavera de 2027 corresponde a lo ganado en 2026. Las fechas exactas, incluido el plazo para domiciliar el pago, las publica la Agencia Tributaria en su calendario del contribuyente.</p>

<p>No hace falta esperar a abril para prepararla. Si guardas durante el año los justificantes de donativos, guardería o alquiler, y te apuntas los movimientos especiales, la revisión con IA te llevará media hora. Si trabajas por tu cuenta, el IVA y los pagos trimestrales se preparan de forma parecida; lo contamos en <a href="/guias/contabilidad-con-ia">IA para contabilidad</a>. Y si tu duda es la nómina y las retenciones, empieza por <a href="/guias/entender-tu-nomina-con-ia">entender tu nómina con IA</a>.</p>
HTML,
];
