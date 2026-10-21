<?php

return [
    'title' => 'Interpretar una analítica de sangre con IA: qué te puede explicar y dónde debe parar',
    'navTitle' => 'Interpretar una analítica con IA',
    'seoTitle' => 'Interpretar una analítica de sangre con IA',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para entender los valores de tu analítica sin dar tus datos de salud, qué preguntas llevar al médico y cuándo no fiarse.',
    'excerpt' => 'Los resultados llegan al móvil días antes de la cita y llenos de siglas. Un asistente de IA puede explicarte qué mide cada valor y preparar tus preguntas para el médico. Lo que no debe hacer es darte un diagnóstico ni tranquilizarte ante algo que hay que mirar.',
    'category' => 'Práctica',
    'published' => '2026-10-21',
    'updated' => '2026-10-21',
    'readingMinutes' => 8,
    'words' => 1302,
    'about' => 'Uso responsable de asistentes de inteligencia artificial para comprender los resultados de análisis clínicos y preparar la consulta médica',
    'related' => ['alucinaciones-de-la-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'resumir-documentos-largos-con-ia', 'contar-calorias-con-ia', 'plan-de-entrenamiento-con-ia', 'ia-local-privada-en-tu-ordenador'],
    'toc' => [
        'puede' => 'Qué puede hacer la IA y qué no',
        'privacidad' => 'Antes de subir nada: tus datos de salud',
        'como' => 'Cómo pedírselo',
        'leer' => 'Cómo leer lo que te responde',
        'consulta' => 'Preparar la consulta con el médico',
        'urgente' => 'Cuándo no esperar',
    ],
    'faq' => [
        '¿Es fiable ChatGPT para interpretar una analítica?' => 'Para explicar qué mide cada valor y qué significa en general estar por encima o por debajo del rango, suele acertar, porque es información muy documentada. Para decir qué te pasa a ti, no: no conoce tu historial, tu medicación ni cómo te encuentras, y puede equivocarse con seguridad. Úsalo para entender y preparar preguntas, no para decidir.',
        '¿Por qué mis valores de referencia no coinciden con los que da la IA?' => 'Cada laboratorio fija sus propios rangos según su método y sus aparatos, y además cambian con la edad, el sexo o el embarazo. Manda siempre que la IA use los rangos impresos en tu informe, no los que conoce de memoria.',
        '¿Es seguro subir mi analítica a un asistente de IA?' => 'Los datos de salud son de los más delicados que existen. Antes de subir nada, tapa tu nombre, DNI, número de historia y código de barras, o copia solo los valores a mano. Revisa si la herramienta usa tus conversaciones para entrenar y desactívalo. Si prefieres que no salgan de tu ordenador, existen modelos que funcionan en local.',
        '¿Puedo usar la IA para saber si debo cambiar mi medicación?' => 'No. Cualquier cambio de dosis, de pastilla o de horario lo decide quien te la recetó. La IA puede ayudarte a escribir la pregunta para la consulta, por ejemplo si un valor alterado puede tener relación con lo que tomas, pero no a tomar la decisión.',
        '¿Sirve también para otros informes médicos?' => 'El método es el mismo para un análisis de orina, un informe de radiología o el resumen de un alta: pedir explicaciones en lenguaje llano, sin datos personales, y llevar las dudas al médico. Cuanto más técnico y específico es el informe, más prudente hay que ser con la respuesta.',
    ],
    'ctaTitle' => 'Instrucciones para entender documentos',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para resumir documentos, explicar textos técnicos en lenguaje llano y preparar preguntas, útiles para <a href="/profesiones/analisis-de-datos">análisis de datos</a> y para <a href="/profesiones/freelancers">profesionales independientes</a>.',
    'body' => <<<'HTML'
<p>Los resultados de la analítica suelen llegar a la aplicación del centro de salud o del laboratorio antes que la cita con el médico, y entre medias hay días de mirar asteriscos y siglas sin entender nada. Pegar el informe en ChatGPT, Gemini o Claude se ha vuelto lo normal. Bien usado, ayuda mucho: te explica qué es cada cosa y llegas a la consulta con preguntas mejores. Mal usado, te asusta sin motivo o, peor, te tranquiliza cuando no debe. Esta guía explica cómo hacerlo con cabeza.</p>

<p><strong>Una advertencia antes de empezar:</strong> esta guía no es consejo médico. La IA puede ayudarte a entender un informe, pero quien interpreta tus resultados es tu médico, que conoce tu historia.</p>

<h2 id="puede">Qué puede hacer la IA y qué no</h2>

<p>Lo que hace bien:</p>

<ul>
    <li><strong>Traducir siglas</strong>: qué es el VCM, la GPT, la TSH o el colesterol LDL, y para qué se piden.</li>
    <li><strong>Explicar en general</strong> qué suele significar que un valor esté algo por encima o por debajo del rango, y qué cosas cotidianas lo alteran: no estar en ayunas, haber hecho ejercicio intenso, estar deshidratado.</li>
    <li><strong>Ordenar</strong> un informe largo: separar lo que está dentro del rango de lo que no, y agrupar los valores relacionados.</li>
    <li><strong>Preparar preguntas</strong> concretas para la consulta.</li>
</ul>

<p>Lo que no debe hacer:</p>

<ul>
    <li><strong>Diagnosticar.</strong> Un valor alterado puede deberse a muchas cosas, la mayoría sin importancia, y algunas que sí la tienen. Distinguirlas exige saber cómo estás, qué tomas y qué te ha pasado antes.</li>
    <li><strong>Decidir sobre tu medicación</strong> ni sobre si ir o no al médico.</li>
    <li><strong>Ser tu única fuente.</strong> Los asistentes se equivocan con un tono muy seguro; en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a> se explica por qué pasa y cómo detectarlo.</li>
</ul>

<h2 id="privacidad">Antes de subir nada: tus datos de salud</h2>

<p>Una analítica dice mucho de ti, y lo que subes a un asistente sale de tu control. Antes de compartirla:</p>

<ol>
    <li><strong>Quita lo que te identifica</strong>: nombre, DNI, tarjeta sanitaria, número de historia, fecha de nacimiento, códigos de barras y el nombre del centro. Lo más seguro es no subir el PDF y copiar solo los valores con sus rangos.</li>
    <li><strong>Revisa la configuración</strong> del asistente y desactiva el uso de tus conversaciones para entrenar el modelo.</li>
    <li><strong>Da solo el contexto que necesita</strong>: edad aproximada y sexo, si estás embarazada y si tomas alguna medicación que afecte a los análisis. No hace falta más.</li>
</ol>

<p>Si quieres ir un paso más allá, hay modelos que funcionan en tu propio ordenador sin enviar nada a internet; se explica en <a href="/guias/ia-local-privada-en-tu-ordenador">IA local y privada en tu ordenador</a>. Las mismas reglas que se aplican a los datos de clientes en el trabajo valen aquí: <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos personales</a>.</p>

<h2 id="como">Cómo pedírselo</h2>

<p>La forma de preguntar cambia mucho la respuesta. Esta plantilla obliga al asistente a usar tus rangos, a hablar claro y a no ir más allá de lo que puede:</p>

<blockquote>«Te paso los resultados de una analítica de sangre de una mujer de 45 años, en ayunas, que no toma medicación. Para cada valor tienes el resultado y el rango de referencia de mi laboratorio. 1) Explica en lenguaje sencillo qué mide cada uno. 2) Señala los que están fuera de rango usando SOLO los rangos que te doy. 3) Para esos, explica las causas más habituales, de las más frecuentes a las menos, sin darme un diagnóstico. 4) Dime qué preguntas concretas debería hacerle a mi médico. Si algún valor requiere atención rápida, dilo al principio.»</blockquote>

<p>Después pega los valores, uno por línea: «Hemoglobina: 11,8 g/dl (12,0 – 15,5)». Si el informe es muy largo, pégalo por bloques (hemograma, bioquímica, hormonas) en lugar de todo a la vez; la guía de <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a> explica por qué los asistentes pierden detalles en textos extensos.</p>

<h2 id="leer">Cómo leer lo que te responde</h2>

<p>Con la respuesta delante, tres comprobaciones rápidas:</p>

<ul>
    <li><strong>¿Ha copiado bien tus valores?</strong> Revisa que los números y las unidades coinciden con tu informe. Un error al transcribir cambia toda la explicación.</li>
    <li><strong>¿Ha usado tus rangos?</strong> Si dice que algo está alto pero tu laboratorio lo da como normal, manda tu laboratorio.</li>
    <li><strong>¿Habla de probabilidades o de certezas?</strong> Si te suelta un nombre de enfermedad como si fuera seguro, desconfía. Una buena respuesta habla de «causas posibles» y te manda a confirmar con el médico.</li>
</ul>

<p>Ten en cuenta también algo que la IA no ve: muchos valores apenas fuera de rango no significan nada por sí solos, y lo que importa a menudo es la evolución. Si tienes analíticas anteriores, pide que compare: «¿Cómo han cambiado estos valores entre estas tres analíticas?». Una tabla con la evolución es de lo más útil que puedes llevar a la consulta.</p>

<h2 id="consulta">Preparar la consulta con el médico</h2>

<p>Las consultas son cortas, y llegar con las dudas ordenadas ayuda a los dos. Pide al asistente una lista final:</p>

<blockquote>«Con todo lo anterior, escribe una lista de un máximo de cinco preguntas para mi médico, ordenadas por importancia, en frases cortas.»</blockquote>

<p>Llévala impresa o en el móvil, junto con la lista de medicación y cualquier síntoma que hayas notado. Y cuenta al médico que has consultado a una IA: no es nada raro, y le permite aclararte lo que el asistente haya dicho mal.</p>

<p>Si la analítica es parte de un cambio de hábitos, como bajar el colesterol o la glucosa, la IA sí puede ayudarte después con el día a día: menús en <a href="/guias/menu-semanal-con-ia">menú semanal con IA</a>, seguimiento en <a href="/guias/contar-calorias-con-ia">contar calorías con IA</a> y ejercicio en <a href="/guias/plan-de-entrenamiento-con-ia">plan de entrenamiento con IA</a>, siempre dentro de lo que te haya indicado tu médico.</p>

<h2 id="urgente">Cuándo no esperar</h2>

<p>Ni la IA ni esta guía sustituyen una llamada al médico. Contacta con tu centro de salud sin esperar a la cita si tu informe marca algún valor como crítico o urgente, si el laboratorio te ha llamado, o si además de un valor alterado tienes síntomas que te preocupan. Ante un empeoramiento brusco, dolor intenso, dificultad para respirar o pérdida de conocimiento, llama al 112.</p>
HTML,
];
