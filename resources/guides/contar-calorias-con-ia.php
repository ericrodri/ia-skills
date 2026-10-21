<?php

return [
    'title' => 'Contar calorías con IA: qué tan fiable es la foto del plato y cómo usarla bien',
    'navTitle' => 'Contar calorías con IA',
    'seoTitle' => 'Contar calorías con IA: foto del plato y fiabilidad',
    'description' => 'Cómo contar calorías y macros con ChatGPT, Gemini o apps con foto del plato: cuándo aciertan, dónde fallan (aceite, salsas, raciones) y cómo usarlas bien.',
    'excerpt' => 'Haces una foto al plato y la IA te dice 540 kcal. Parece magia, pero no ve el aceite, no sabe cuánto pesa el arroz y confunde una salsa con otra. Bien usada sirve para tener una idea y detectar hábitos; para un control fino sigue haciendo falta la báscula.',
    'category' => 'Práctica',
    'published' => '2026-10-19',
    'updated' => '2026-10-19',
    'readingMinutes' => 8,
    'words' => 1277,
    'about' => 'Estimación de calorías y macronutrientes de comidas con asistentes y aplicaciones de inteligencia artificial',
    'related' => ['interpretar-una-analitica-con-ia', 'menu-semanal-con-ia', 'plan-de-entrenamiento-con-ia', 'alucinaciones-de-la-ia', 'organizar-tu-tiempo-con-ia', 'herramientas-de-ia-gratis', 'ia-en-excel-y-google-sheets'],
    'toc' => [
        'como-funciona' => 'Cómo calcula la IA las calorías de una foto',
        'donde-falla' => 'Dónde se equivoca',
        'como-hacerlo' => 'Cómo hacerlo para que acierte más',
        'apps' => 'Asistente general o app de calorías',
        'seguimiento' => 'Llevar el registro de la semana',
        'cuidado' => 'Cuándo no fiarte solo de la IA',
    ],
    'faq' => [
        '¿Es fiable contar calorías con una foto?' => 'Para hacerse una idea, sí; para un control preciso, no. La IA reconoce bien qué alimentos hay en el plato, pero calcula mal la cantidad y no ve el aceite, la mantequilla ni el azúcar de las salsas. En platos sencillos el error suele ser pequeño; en guisos, fritos y platos de restaurante puede ser grande.',
        '¿Qué IA es mejor para contar calorías?' => 'ChatGPT, Gemini y Claude analizan fotos y explican el cálculo, lo que permite corregirlo. Las apps de nutrición con escáner de comida (MyFitnessPal, Yazio, Lose It! y otras) añaden una base de datos de alimentos y el registro diario. Lo mejor es la que vayas a usar todos los días.',
        '¿Puedo contar macros (proteína, grasa, hidratos) con IA?' => 'Sí, pide el desglose por alimento y el total de proteína, grasa e hidratos. Tiene el mismo problema que las calorías: si la cantidad está mal estimada, los macros también. Para proteína, que es lo que más suele interesar, pesar la carne, el pescado o el yogur una vez ya mejora mucho el cálculo.',
        '¿Sirve para alguien con diabetes?' => 'No como única herramienta. Para ajustar la insulina, un error en los hidratos tiene consecuencias. Úsala como apoyo y sigue el método que te haya indicado tu equipo médico o tu dietista-nutricionista.',
        '¿Es seguro subir fotos de mi comida a la IA?' => 'Una foto del plato no suele ser un dato delicado, pero revisa que no aparezcan caras, documentos o tu casa reconocible. Si llevas un registro de peso o datos de salud, mira en la configuración del asistente si las conversaciones se usan para entrenar el modelo y desactívalo si lo prefieres.',
    ],
    'ctaTitle' => 'Organiza tus hábitos con IA',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> encontrarás instrucciones para planificar, llevar registros en hojas de cálculo y montar rutinas, la mayoría pensadas para <a href="/profesiones/freelancers">autónomos</a> y <a href="/profesiones/rrhh">recursos humanos</a> pero fáciles de adaptar a tu día a día.',
    'body' => <<<'HTML'
<p>Contar calorías apuntando cada alimento en una app aburre a cualquiera en dos semanas. Por eso se ha hecho tan popular la otra opción: hacer una foto al plato y que la IA calcule. Funciona mejor de lo que esperarías en algunas cosas y peor en otras. Esta guía explica qué hace bien, dónde falla y cómo usarla para que te sirva sin convertir cada comida en un examen.</p>

<h2 id="como-funciona">Cómo calcula la IA las calorías de una foto</h2>

<p>El proceso tiene tres pasos, y conviene conocerlos porque cada uno puede fallar:</p>

<ol>
    <li><strong>Reconoce los alimentos</strong>: «pechuga a la plancha, arroz blanco, ensalada de tomate». En esto los modelos actuales son bastante buenos.</li>
    <li><strong>Estima la cantidad</strong> a partir del tamaño en la imagen: «unos 150 g de pollo, 180 g de arroz cocido». Aquí está el error más grande, porque una foto no da profundidad ni peso.</li>
    <li><strong>Calcula</strong> con valores nutricionales de referencia. Esta parte es casi aritmética, aunque los valores de un mismo alimento varían según la marca y la preparación.</li>
</ol>

<h2 id="donde-falla">Dónde se equivoca</h2>

<ul>
    <li><strong>La grasa que no se ve</strong>: el aceite de la sartén, la mantequilla del puré, el chorrito de aceite de la ensalada. Una cucharada de aceite son unas 90 kcal y en la foto es invisible.</li>
    <li><strong>Las raciones</strong>: un plato hondo engaña, el arroz amontonado engaña y un plato grande hace parecer pequeña cualquier ración.</li>
    <li><strong>Platos mezclados</strong>: lentejas con chorizo, lasaña, un guiso. La IA adivina la receta y sus proporciones.</li>
    <li><strong>Bebidas y salsas</strong>: un refresco y uno sin azúcar son iguales en la foto, y la mayonesa se confunde con el alioli o el yogur.</li>
    <li><strong>Seguridad sin motivo</strong>: el asistente te dirá «542 kcal» con la misma seguridad cuando acierta que cuando se inventa media receta. Es el mismo fenómeno que se explica en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>: un número exacto no significa un cálculo exacto. Pasa lo mismo cuando se le pregunta por los resultados de unos análisis; en <a href="/guias/interpretar-una-analitica-con-ia">interpretar una analítica con IA</a> se explica cómo hacerlo con prudencia.</li>
</ul>

<h2 id="como-hacerlo">Cómo hacerlo para que acierte más</h2>

<p>Cuatro gestos mejoran mucho el resultado:</p>

<ul>
    <li><strong>Foto desde arriba</strong>, con buena luz y algo de referencia de tamaño: un tenedor al lado del plato.</li>
    <li><strong>Di lo que no se ve</strong>: «hecho con una cucharada de aceite de oliva», «el yogur es natural sin azúcar», «la bebida es agua».</li>
    <li><strong>Da los pesos que sepas</strong>: si has pesado el arroz en crudo o el paquete de pechugas dice 300 g y te has comido la mitad, dilo.</li>
    <li><strong>Pide el desglose</strong> para poder corregir.</li>
</ul>

<blockquote>«Calcula las calorías y los macros de esta comida. Contexto: el pollo se ha hecho a la plancha con una cucharadita de aceite, el arroz eran 70 g en crudo y la ensalada lleva una cucharada de aceite de oliva. Dame una tabla con cada alimento, la cantidad estimada, las kcal, la proteína, la grasa y los hidratos, y un total. Marca qué cantidades has supuesto tú y dame un rango, no solo un número.»</blockquote>

<p>Pedir un rango («entre 550 y 700 kcal») es más honesto que un número exacto y te recuerda que es una estimación. Si ves una cantidad que no cuadra, corrígela: «el arroz era la mitad». Para comidas que repites mucho (tu desayuno, tu táper de los lunes), pésalas una vez y guarda el cálculo; desde entonces ya no hace falta foto.</p>

<h2 id="apps">Asistente general o app de calorías</h2>

<p><strong>Un asistente general</strong> como ChatGPT, Gemini o Claude tiene la ventaja de que explica el cálculo y acepta correcciones en lenguaje normal. La desventaja es que no guarda un registro ordenado si no se lo montas tú.</p>

<p><strong>Las apps de nutrición</strong> (MyFitnessPal, Yazio, Lose It! y otras) ya incluyen escáner de fotos o de código de barras, una base de datos con productos de supermercado y el registro diario con objetivos. El código de barras es mucho más preciso que la foto para cualquier producto envasado. Muchas de estas funciones son de pago; en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a> tienes alternativas sin coste.</p>

<p>La mejor opción es la que vayas a usar a diario. Para la mayoría, eso significa: foto rápida en las comidas de casa, código de barras en lo envasado y no obsesionarse con la comida de restaurante, donde nadie sabe cuánto aceite lleva.</p>

<h2 id="seguimiento">Llevar el registro de la semana</h2>

<p>Lo útil de contar calorías no es el número de una comida, es el patrón: qué días te pasas, qué cenas son más pesadas, cuánta proteína tomas de verdad. Si usas un asistente, crea un proyecto o una conversación solo para esto y, al final de la semana, pide:</p>

<blockquote>«Resume esta semana en una tabla por días con kcal y proteína. Dime qué tres cambios pequeños tendrían más efecto, teniendo en cuenta lo que como normalmente.»</blockquote>

<p>Si te gusta tenerlo en una hoja de cálculo, en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a> se explica cómo hacerla con ayuda del asistente. Y el paso siguiente natural es planificar en lugar de solo registrar: con <a href="/guias/menu-semanal-con-ia">un menú semanal hecho con IA</a> puedes pedir que ya venga ajustado a tus calorías y a la proteína que buscas, y combinarlo con un <a href="/guias/plan-de-entrenamiento-con-ia">plan de entrenamiento</a>.</p>

<h2 id="cuidado">Cuándo no fiarte solo de la IA</h2>

<ul>
    <li><strong>Diabetes, enfermedad renal u otras patologías</strong> en las que la dieta forma parte del tratamiento: la IA puede apoyar, pero las cantidades las marca tu médico o un dietista-nutricionista.</li>
    <li><strong>Embarazo, lactancia y menores</strong>: no son momentos para hacer dietas por tu cuenta.</li>
    <li><strong>Si contar te genera ansiedad</strong>, culpa o te lleva a saltarte comidas, déjalo y habla con un profesional. Contar calorías es una herramienta, no una obligación, y hay quien come mejor sin hacerlo.</li>
    <li><strong>Objetivos muy agresivos</strong>: si un asistente te propone una cifra muy baja de calorías, no la sigas sin consultarlo.</li>
</ul>

<p>Usada con sentido común, la foto del plato es una forma rápida de aprender cuánto comes de verdad. Al cabo de unas semanas casi siempre pasa lo mismo: ya sabes calcularlo a ojo y la app deja de hacer falta.</p>
HTML,
];
