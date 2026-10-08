<?php

return [
    'title' => 'Cómo hacer un menú semanal con IA y la lista de la compra en cinco minutos',
    'navTitle' => 'Menú semanal con IA',
    'seoTitle' => 'Menú semanal y lista de la compra con IA',
    'description' => 'Cómo hacer un menú semanal con IA: qué datos darle, cómo sacar recetas y lista de la compra, aprovechar las sobras y cuándo hace falta un nutricionista.',
    'excerpt' => 'Decidir qué se come cada día cansa más que cocinar. La IA hace en cinco minutos un menú para toda la semana, con la lista de la compra ordenada por pasillos. Lo que no sabe es lo que hay en tu nevera ni lo que le sienta mal a tu familia, si no se lo dices.',
    'category' => 'Práctica',
    'published' => '2026-10-08',
    'updated' => '2026-10-08',
    'readingMinutes' => 7,
    'words' => 1190,
    'about' => 'Planificación de menús semanales, recetas y lista de la compra con asistentes de inteligencia artificial',
    'related' => ['planificar-un-viaje-con-ia', 'como-escribir-prompts-efectivos', 'herramientas-de-ia-gratis', 'alucinaciones-de-la-ia', 'gpts-proyectos-y-skills', 'ia-en-excel-y-google-sheets'],
    'toc' => [
        'que-hace-bien' => 'Qué hace bien y qué no',
        'los-datos' => 'Los datos que necesita',
        'paso-a-paso' => 'Del menú a la lista de la compra',
        'ahorrar' => 'Ahorrar y no tirar comida',
        'reutilizar' => 'Que no tengas que explicarlo cada semana',
        'salud' => 'Dietas, alergias y salud',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer un menú semanal?' => 'Cualquier asistente general sirve: ChatGPT, Gemini, Claude o Copilot hacen menús y listas de la compra de buena calidad en su versión gratuita. La diferencia la marca el contexto que le das, no la herramienta. Si quieres que recuerde tus preferencias, usa la memoria del asistente o un proyecto con instrucciones fijas.',
        '¿Puede la IA hacerme una dieta para adelgazar?' => 'Puede proponer menús equilibrados y más ligeros para una persona sana, y es una buena ayuda para organizarse. Pero no conoce tu historial, no calcula bien tus necesidades y puede proponer cantidades poco adecuadas. Si tienes una enfermedad, tomas medicación, estás embarazada o quieres perder mucho peso, el plan debe hacerlo un dietista-nutricionista o tu médico.',
        '¿Es fiable la IA con las alergias e intolerancias?' => 'No del todo. Si se lo dices, evitará los alimentos obvios, pero puede olvidar ingredientes ocultos, como el gluten de algunas salsas o la leche de algunos embutidos, o mezclar una restricción a mitad de conversación. Con alergias, revisa cada receta y lee siempre la etiqueta del producto que compras.',
        '¿Puedo hacer el menú con lo que tengo en la nevera?' => 'Sí, y es uno de los usos más prácticos. Haz una foto de la nevera y la despensa o escribe la lista, y pide un menú que use primero lo que caduca antes. Revisa que haya identificado bien los alimentos de la foto antes de dar el menú por bueno.',
        '¿Los precios que da la IA para la compra son reales?' => 'No. Los precios son estimaciones que pueden estar desactualizadas o no corresponder a tu supermercado. Sirven para comparar opciones más o menos caras dentro del menú, pero el presupuesto real lo da el ticket. Si quieres controlar el gasto, anota lo que pagas y pásaselo la semana siguiente.',
    ],
    'ctaTitle' => 'Instrucciones que se reutilizan',
    'ctaBody' => 'Un menú semanal es el ejemplo perfecto de instrucción que repites cada semana. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para planificar y organizar, por ejemplo en <a href="/profesiones/freelancers">autónomos</a> y <a href="/profesiones/product-management">gestión de producto</a>.',
    'body' => <<<'HTML'
<p>Decidir qué se come cada día de la semana cansa más que cocinar. La IA resuelve esa parte en cinco minutos: propone un menú variado, adapta las recetas a tus gustos y te da la lista de la compra ordenada por secciones del supermercado. Lo que no sabe, si no se lo cuentas, es qué hay en tu nevera, cuánto tiempo tienes entre semana o qué no come tu hijo pequeño. Esta guía explica cómo dárselo y cómo sacar el máximo partido.</p>

<h2 id="que-hace-bien">Qué hace bien y qué no</h2>

<ul>
    <li><strong>Hace bien</strong>: variar el menú sin repetir, equilibrar verdura, legumbre, pescado y carne a lo largo de la semana, aprovechar los mismos ingredientes en varios platos, escalar raciones y convertir el menú en una lista de la compra.</li>
    <li><strong>Hace mal, sin ayuda</strong>: precios, porque no conoce los de tu supermercado; cantidades exactas para necesidades especiales; y respetar restricciones a lo largo de una conversación larga, donde a veces se le olvida algo que dijiste al principio.</li>
</ul>

<h2 id="los-datos">Los datos que necesita</h2>

<p>«Hazme un menú semanal» da un menú de revista, el mismo para todo el mundo. Antes de pedirlo, ten claro:</p>

<ul>
    <li><strong>Cuántos sois y qué comidas</strong>: ¿comidas y cenas? ¿Alguien come fuera entre semana?</li>
    <li><strong>Tiempo de cocina</strong>: veinte minutos entre semana y más el domingo es muy distinto de cocinar cada día con calma.</li>
    <li><strong>Gustos y vetos</strong>: lo que no se come en casa, aunque sea por manía.</li>
    <li><strong>Restricciones</strong>: alergias, intolerancias, vegetarianos, poca sal.</li>
    <li><strong>Lo que ya tienes</strong>: la despensa y lo que caduca pronto.</li>
    <li><strong>Presupuesto</strong> aproximado y si quieres cocinar por tandas el fin de semana.</li>
</ul>

<h2 id="paso-a-paso">Del menú a la lista de la compra</h2>

<p><strong>1. El menú.</strong> Un ejemplo con todo el contexto:</p>

<blockquote>«Somos dos adultos y dos niños de 6 y 10 años. Haz el menú de comidas y cenas de lunes a viernes. Entre semana tengo como máximo 30 minutos para cocinar; el domingo puedo dedicar dos horas a dejar cosas preparadas. No comemos cerdo y a los niños no les gustan las verduras enteras, mejor en cremas o escondidas. Tengo en la nevera medio calabacín, puerros y un paquete de pechugas que caduca el miércoles. Quiero legumbre dos veces y pescado dos veces. Presenta el menú en una tabla.»</blockquote>

<p><strong>2. Ajusta.</strong> Cambia lo que no encaje: «el jueves cenamos fuera, quítalo», «cambia el salmón por algo más barato». Es más rápido corregir que volver a empezar. Si quieres afinar cómo pedir las cosas, está en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<p><strong>3. Las recetas.</strong> Pide las de los platos que no conoces, con cantidades para tu familia y tiempos reales. Y lo que se puede adelantar el domingo.</p>

<p><strong>4. La lista de la compra.</strong> «Haz la lista de la compra de todo el menú, agrupada por secciones del supermercado, con cantidades, y sin lo que ya tengo en casa». Tachar lo que ya tienes antes de salir sigue siendo cosa tuya.</p>

<h2 id="ahorrar">Ahorrar y no tirar comida</h2>

<p>Aquí es donde la IA más se nota en el bolsillo:</p>

<ul>
    <li><strong>Foto de la nevera</strong>: los asistentes con visión identifican lo que hay en una foto. Pide un menú que use primero lo que caduca antes. Comprueba que ha reconocido bien cada alimento.</li>
    <li><strong>Ingredientes que se repiten</strong>: «usa el mismo manojo de cilantro en dos platos», «aprovecha el pollo asado del domingo para dos cenas».</li>
    <li><strong>Ofertas de la semana</strong>: pega las ofertas del folleto de tu supermercado y pide que construya el menú a partir de ellas.</li>
    <li><strong>Las sobras</strong>: «me han sobrado arroz y medio pimiento, ¿qué cena hago en quince minutos?».</li>
</ul>

<p>Los precios que te dé son orientativos: el modelo no consulta tu supermercado y puede tener datos de hace años, por la misma razón que explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. Si quieres llevar el gasto real, anótalo en una hoja de cálculo.</p>

<h2 id="reutilizar">Que no tengas que explicarlo cada semana</h2>

<p>Escribir cada lunes quiénes sois, qué no coméis y cuánto tiempo tienes es lo que hace que muchos lo dejen. Hay dos soluciones:</p>

<ul>
    <li><strong>La memoria del asistente</strong>: ChatGPT, Gemini y Claude pueden recordar datos entre conversaciones. Díselo una vez: «recuerda que en casa no comemos cerdo y que mi hijo es alérgico a los frutos secos».</li>
    <li><strong>Un proyecto o un GPT</strong> con las instrucciones fijas: así cada semana solo escribes «menú de esta semana, el miércoles comemos fuera». Cómo montarlo está en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</li>
</ul>

<p>Ninguno de los dos requiere pagar: los planes gratuitos de los asistentes, que repasamos en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>, bastan para esto.</p>

<h2 id="salud">Dietas, alergias y salud</h2>

<p>Para una familia sana que quiere comer variado, la IA es una ayuda excelente. Hay casos en los que no basta:</p>

<ul>
    <li><strong>Alergias</strong>: aunque se lo digas, puede proponer una salsa o un embutido con el alérgeno escondido. Revisa cada receta y lee la etiqueta de lo que compras.</li>
    <li><strong>Enfermedades y medicación</strong>: diabetes, enfermedad renal, hipertensión o interacciones con medicamentos. Ahí el plan lo marca tu médico o un dietista-nutricionista.</li>
    <li><strong>Perder mucho peso, embarazo, niños pequeños o deportistas</strong>: las necesidades cambian y la IA no calcula bien las cantidades para tu caso.</li>
</ul>

<p>En esos casos, la IA sigue siendo útil para la parte aburrida: convertir el plan que te ha dado el profesional en un menú semanal variado y en una lista de la compra. Pásale sus pautas y pídele que las respete al pie de la letra.</p>
HTML,
];
