<?php

return [
    'title' => 'Entender tu nómina con IA: qué significa cada línea y qué revisar',
    'navTitle' => 'Entender tu nómina con IA',
    'seoTitle' => 'Entender tu nómina con IA: devengos y deducciones',
    'description' => 'Cómo leer tu nómina con ayuda de ChatGPT, Gemini o Claude: devengos, cotizaciones, IRPF y líquido, qué datos quitar antes y los errores que conviene revisar.',
    'excerpt' => 'La nómina está llena de siglas y porcentajes que casi nadie sabe leer. Un asistente de IA te explica cada línea en un par de minutos, siempre que le pases solo los números y compruebes tú lo que depende de tu convenio.',
    'category' => 'Práctica',
    'published' => '2026-10-23',
    'updated' => '2026-10-23',
    'readingMinutes' => 9,
    'words' => 1406,
    'about' => 'Lectura e interpretación de la nómina española (devengos, deducciones, cotizaciones e IRPF) con ayuda de asistentes de inteligencia artificial',
    'related' => ['pedir-un-aumento-de-sueldo-con-ia', 'presupuesto-personal-y-ahorro-con-ia', 'carta-de-baja-voluntaria-con-ia', 'revisar-un-contrato-con-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'escribir-una-reclamacion-con-ia', 'alucinaciones-de-la-ia'],
    'toc' => [
        'partes' => 'Las cuatro partes de una nómina',
        'datos' => 'Qué quitar antes de pegarla',
        'peticion' => 'Cómo pedir la explicación',
        'revisar' => 'Lo que conviene comprobar',
        'limites' => 'Dónde no fiarse de la IA',
    ],
    'faq' => [
        '¿Es seguro subir mi nómina a ChatGPT?' => 'Es razonable si antes tapas lo que te identifica: nombre, DNI, número de afiliación a la Seguridad Social, cuenta bancaria y datos de la empresa. Para entender la nómina basta con los conceptos y los importes. Revisa también si tu cuenta permite usar las conversaciones para entrenar el modelo y desactívalo si prefieres.',
        '¿Por qué me retienen tanto IRPF?' => 'La retención depende de tu salario anual previsto y de tu situación personal y familiar (hijos, discapacidad, pensiones que pagas). Si no has comunicado a la empresa algún cambio, puedes estar reteniendo de más o de menos. La IA puede explicarte cómo se calcula, pero el dato exacto lo da el simulador de retenciones de la Agencia Tributaria.',
        '¿Qué diferencia hay entre salario bruto y neto?' => 'El bruto es todo lo que devengas antes de descuentos. El neto, o líquido a percibir, es lo que llega a tu cuenta después de restar tus cotizaciones a la Seguridad Social y la retención de IRPF. La diferencia no se pierde del todo: la retención se regulariza en la declaración de la renta.',
        '¿La IA puede decirme si mi nómina está mal?' => 'Puede detectar incoherencias (una suma que no cuadra, un porcentaje raro, un concepto que no aparecía el mes anterior), pero no conoce tu convenio ni tu contrato. Úsala para saber qué preguntar y confirma cualquier sospecha con recursos humanos, la gestoría o un graduado social.',
        '¿Qué es la base de cotización?' => 'Es la cantidad sobre la que se aplican los porcentajes de la Seguridad Social. Incluye el salario y la parte proporcional de las pagas extra aunque no estén prorrateadas, y tiene un mínimo y un máximo que se actualizan cada año. Por eso no coincide con lo que cobras ese mes.',
    ],
    'ctaTitle' => 'Skills para nóminas y finanzas personales',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para revisar documentos laborales, ordenar gastos y preparar presupuestos, muchas pensadas para <a href="/profesiones/finanzas">finanzas</a> y <a href="/profesiones/rrhh">recursos humanos</a>.',
    'body' => <<<'HTML'
<p>Cada mes llega la nómina y la mayoría de la gente mira una sola cifra: lo que entra en la cuenta. El resto (contingencias comunes, base de cotización, prorrata, IRPF) parece escrito para otra persona. Un asistente como ChatGPT, Gemini o Claude es muy útil aquí: le pasas los conceptos y los importes y te explica, línea a línea y en lenguaje normal, de dónde sale cada número. Esta guía cuenta cómo hacerlo sin entregar tus datos personales y qué cosas tienes que comprobar tú.</p>

<p>Lo que sigue se refiere a nóminas españolas y es orientativo. Las cifras exactas de cotización y los topes cambian cada año, y lo que te corresponde depende de tu convenio colectivo.</p>

<h2 id="partes">Las cuatro partes de una nómina</h2>

<p>Todas las nóminas siguen un modelo oficial, así que se leen igual aunque cambie el diseño:</p>

<ul>
    <li><strong>Encabezado</strong>: datos de la empresa y tuyos, categoría o grupo profesional, antigüedad y periodo de liquidación.</li>
    <li><strong>Devengos</strong>: lo que ganas. Se dividen en <em>percepciones salariales</em> (salario base, complementos como antigüedad, nocturnidad o plus de convenio, horas extra y pagas extra si van prorrateadas) y <em>no salariales</em> (dietas, plus de transporte, indemnizaciones), que tienen un trato distinto a efectos de cotización.</li>
    <li><strong>Deducciones</strong>: lo que se descuenta. Tus cotizaciones a la Seguridad Social (contingencias comunes, desempleo, formación profesional y el mecanismo de equidad intergeneracional), la retención de IRPF y, si los hay, anticipos o cuotas sindicales.</li>
    <li><strong>Pie</strong>: las bases de cotización y lo que paga la empresa por ti. No te lo descuentan, pero sirve para entender cuánto cuesta tu puesto.</li>
</ul>

<p>El <strong>líquido a percibir</strong> es la resta de devengos menos deducciones. Es lo único que llega a tu banco.</p>

<h2 id="datos">Qué quitar antes de pegarla</h2>

<p>Una nómina tiene casi todos los datos que alguien necesita para suplantarte: nombre, DNI, número de la Seguridad Social, cuenta bancaria y empresa. Nada de eso hace falta para entenderla. Antes de subirla:</p>

<ol>
    <li>Si es un PDF, tapa esos campos con un rectángulo en cualquier editor, o mejor, haz una captura solo de la tabla de conceptos e importes.</li>
    <li>Si prefieres escribirla, copia únicamente las líneas: «Salario base 1.450,00», «Plus convenio 120,00», «Contingencias comunes 4,70 % 82,35»…</li>
    <li>Añade tú el contexto que la IA no puede adivinar: si tienes contrato indefinido o temporal, si las pagas extra van prorrateadas y cuántas son.</li>
</ol>

<p>Si usas la IA también en el trabajo con datos de otras personas, la guía sobre <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos</a> explica qué opciones de privacidad conviene activar en cada asistente.</p>

<h2 id="peticion">Cómo pedir la explicación</h2>

<p>Esta petición funciona en cualquier asistente:</p>

<blockquote>«Te paso los conceptos de mi nómina española de [MES]. Contrato [indefinido/temporal], [12/14] pagas, extras [prorrateadas/no prorrateadas]. Explícame en lenguaje sencillo qué es cada concepto, comprueba que las sumas de devengos y deducciones cuadran y dime qué porcentaje de mi bruto se va en Seguridad Social y en IRPF. Si algo te parece raro, dime qué debería preguntar a la empresa, sin dar por hecho que es un error.»</blockquote>

<p>La última frase es importante: sin ella, el asistente tiende a sacar conclusiones con mucha seguridad. Con ella, te devuelve preguntas, que es lo útil.</p>

<p>Dos peticiones de seguimiento que suelen merecer la pena:</p>

<ul>
    <li><strong>Comparar dos meses</strong>: pega la nómina de este mes y la del anterior y pide «qué ha cambiado y por qué puede ser». Sirve para detectar una subida de IRPF, unas horas extra que faltan o un complemento que ha desaparecido.</li>
    <li><strong>Pasar de bruto anual a neto mensual</strong>: útil antes de aceptar una oferta. Da el bruto anual, el número de pagas y tu situación familiar, y pide una estimación con los supuestos a la vista para poder corregirlos.</li>
</ul>

<p>Si quieres llevar después esa cifra a tus cuentas de casa, la guía de <a href="/guias/presupuesto-personal-y-ahorro-con-ia">presupuesto personal y ahorro con IA</a> continúa justo donde acaba esta.</p>

<h2 id="revisar">Lo que conviene comprobar</h2>

<p>Con la explicación delante, repasa estos puntos, que son donde aparecen la mayoría de los errores reales:</p>

<ul>
    <li><strong>La categoría y el salario base</strong>: deben coincidir con las tablas salariales de tu convenio para ese año. Un error de grupo profesional se arrastra mes tras mes.</li>
    <li><strong>La antigüedad</strong>: si tu convenio paga trienios o quinquenios, comprueba que se han aplicado al cumplirse.</li>
    <li><strong>Las horas extra</strong>: que aparezcan todas y con el precio que fija el convenio o el contrato.</li>
    <li><strong>Los porcentajes de cotización</strong>: el de desempleo es distinto si tu contrato es temporal. Si te han hecho indefinido y no ha cambiado, pregunta.</li>
    <li><strong>El IRPF</strong>: si has tenido un hijo, te has mudado por trabajo o tu salario ha cambiado mucho, la empresa debería recalcular la retención. A veces hay que comunicarlo con el modelo 145.</li>
    <li><strong>Las pagas extra</strong>: si no van prorrateadas, en junio y diciembre (o cuando diga tu convenio) debe aparecer una línea más.</li>
</ul>

<p>Si encuentras algo que no cuadra, primero pregunta a recursos humanos o a la gestoría por escrito y con calma; muchas diferencias tienen explicación. Si no la tiene y no se corrige, la guía de <a href="/guias/escribir-una-reclamacion-con-ia">escribir una reclamación con IA</a> ayuda a redactarla con datos y sin tono agresivo.</p>

<h2 id="limites">Dónde no fiarse de la IA</h2>

<p>El asistente explica muy bien los conceptos, que son los mismos en todas las nóminas. Falla en lo que depende de datos que no tiene o que cambian cada año:</p>

<ul>
    <li><strong>Los porcentajes y topes vigentes</strong>: puede darte los de un año anterior. Pídele que diga de qué año son y contrástalos con la web de la Seguridad Social.</li>
    <li><strong>Tu convenio</strong>: no lo conoce. Si quieres que lo tenga en cuenta, pégale el artículo concreto (tablas salariales, antigüedad, pagas).</li>
    <li><strong>El cálculo exacto del IRPF</strong>: es aproximado. Para la cifra buena está el simulador de retenciones de la Agencia Tributaria.</li>
    <li><strong>Las conclusiones legales</strong>: «te están pagando por debajo de convenio» es una afirmación que debe confirmar un profesional. Por qué la IA a veces cita normas o cifras inexistentes está explicado en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
</ul>

<p>Usada así, como un compañero que sabe leer nóminas y te ayuda a preparar las preguntas, la IA convierte un papel incomprensible en algo que puedes revisar en diez minutos al mes. Si al revisarla concluyes que cobras menos de lo que vale tu trabajo, la guía para <a href="/guias/pedir-un-aumento-de-sueldo-con-ia">pedir un aumento de sueldo con IA</a> te ayuda a preparar la cifra y la conversación. Y si estás pensando en cambiar de trabajo, entender tu nómina actual es el primer paso para comparar ofertas; cuando llegue el momento, la guía de la <a href="/guias/carta-de-baja-voluntaria-con-ia">carta de baja voluntaria</a> explica el preaviso y qué debe incluir el finiquito, y la de <a href="/guias/revisar-un-contrato-con-ia">revisar un contrato con IA</a> sirve para leer el nuevo antes de firmar.</p>
HTML,
];
