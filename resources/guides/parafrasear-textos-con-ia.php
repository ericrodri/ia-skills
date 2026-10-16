<?php

return [
    'title' => 'Parafrasear un texto con IA: reescribir sin perder el sentido (ni copiar)',
    'navTitle' => 'Parafrasear textos con IA',
    'seoTitle' => 'Parafrasear un texto con IA sin perder el sentido',
    'description' => 'Cómo parafrasear con IA de forma útil y honesta: prompts para cambiar tono y extensión, comprobar que el sentido no cambia y cuándo hay que citar.',
    'excerpt' => 'Parafrasear es decir lo mismo con otras palabras. La IA lo hace en segundos, pero con dos riesgos: que cambie el significado sin que te des cuenta y que lo uses para disfrazar un texto ajeno. Bien usada, sirve para adaptar tus propios textos a otro público, otro tono u otra extensión.',
    'category' => 'Práctica',
    'published' => '2026-10-16',
    'updated' => '2026-10-16',
    'readingMinutes' => 7,
    'words' => 1073,
    'about' => 'Reformulación y paráfrasis de textos con asistentes de inteligencia artificial, y su uso académico y profesional',
    'related' => ['corregir-ortografia-con-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'tfg-con-ia', 'estudiar-con-ia', 'resumir-documentos-largos-con-ia', 'escribir-correos-con-ia'],
    'toc' => [
        'para-que' => 'Para qué sirve parafrasear',
        'prompt' => 'Un prompt que diga qué cambiar',
        'ejemplos' => 'Cinco encargos habituales',
        'sentido' => 'Comprobar que dice lo mismo',
        'plagio' => 'Parafrasear no es dejar de citar',
        'voz' => 'Que siga sonando a ti',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para parafrasear en español?' => 'Los asistentes generales como ChatGPT, Gemini, Claude o Copilot parafrasean bien en español y permiten explicar qué quieres cambiar. Las herramientas de parafraseo específicas son más rápidas, pero dan menos control sobre el tono y el público.',
        '¿Parafrasear con IA es plagio?' => 'Si el texto original es de otra persona y no la citas, sí, aunque las palabras sean distintas: el plagio es apropiarse de ideas, no solo de frases. Parafrasear tus propios textos o fuentes que citas correctamente no lo es.',
        '¿Los detectores de IA notan un texto parafraseado?' => 'A veces sí y a veces no, y también se equivocan con textos escritos por personas. No uses la paráfrasis para esquivar un detector: si tu centro prohíbe la IA, el problema es el uso, no si te pillan.',
        '¿Cómo parafraseo sin cambiar el significado?' => 'Pide que conserve datos, cifras, nombres y matices, y después compara frase a frase el original y la nueva versión, o pide a la IA que te señale cualquier diferencia de significado entre ambos.',
        '¿Se puede parafrasear un texto en otro idioma?' => 'Sí, puedes pedir que lo traduzca y lo adapte a la vez. Pero si necesitas una traducción fiel, tradúcelo primero y parafrasea después, para controlar cada paso por separado.',
    ],
    'ctaTitle' => 'Instrucciones para reescribir con criterio',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones de <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/ventas">ventas</a> para adaptar un mismo texto a distintos canales y públicos sin perder el mensaje.',
    'body' => <<<'HTML'
<p>«Parafrasear» es una de las cosas que más se le piden a una IA, y también una de las que más se usan mal. Bien hecho, sirve para explicar algo complicado de forma sencilla, convertir un informe en un correo o adaptar un texto tuyo a otro público. Mal hecho, cambia el significado sin avisar o se usa para presentar como propio un texto ajeno. Esta guía explica cómo sacarle partido a lo primero y por qué lo segundo no funciona.</p>

<h2 id="para-que">Para qué sirve parafrasear</h2>

<p>Los usos más útiles tienen algo en común: el texto de partida es tuyo o lo vas a citar, y lo que cambia es la forma, no el contenido.</p>

<ul>
    <li><strong>Simplificar</strong>: explicar una norma, un contrato o un artículo científico con palabras de todos los días.</li>
    <li><strong>Cambiar el tono</strong>: de técnico a cercano, de enfadado a firme pero educado.</li>
    <li><strong>Cambiar la extensión</strong>: dejar un párrafo en una frase o desarrollar una idea en un párrafo.</li>
    <li><strong>Evitar repeticiones</strong> en tus propios textos, cuando llevas tres párrafos diciendo «además».</li>
    <li><strong>Entender mejor</strong>: reformular con tus palabras lo que estás estudiando es una buena forma de comprobar que lo has entendido, como contamos en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</li>
</ul>

<h2 id="prompt">Un prompt que diga qué cambiar</h2>

<p>Si solo pides «parafrasea esto», la IA cambiará palabras al azar y el resultado será igual de largo, algo más pomposo y no necesariamente mejor. Dile qué quieres conseguir:</p>

<blockquote>«Reescribe este párrafo para un público sin conocimientos técnicos. Mantén todos los datos, cifras y nombres tal cual. Usa frases cortas y vocabulario cotidiano. No añadas información que no esté en el original. Dame dos versiones: una de extensión parecida y otra de la mitad.»</blockquote>

<p>Los elementos clave son tres: <strong>para quién</strong> es el texto, <strong>qué debe conservarse</strong> intacto y <strong>qué puede cambiar</strong>. Pedir dos o tres versiones también ayuda: es más fácil elegir y combinar que corregir una sola.</p>

<h2 id="ejemplos">Cinco encargos habituales</h2>

<ul>
    <li><strong>Del informe al correo</strong>: «Convierte este apartado del informe en un correo de cinco líneas para dirección, con la conclusión en la primera frase».</li>
    <li><strong>Del correo tenso al correo firme</strong>: «Reescribe este correo para que sea firme y educado, sin ironía ni reproches». Más ideas en <a href="/guias/escribir-correos-con-ia">escribir correos con IA</a>.</li>
    <li><strong>De la ficha técnica a la descripción de producto</strong>: «Reescribe estas características pensando en lo que gana el cliente, sin exagerar ni inventar ventajas».</li>
    <li><strong>Del texto legal al lenguaje claro</strong>: «Explícame esta cláusula como se la explicarías a un amigo y dime qué implica para mí». Útil para entender, pero no sustituye el consejo de un profesional.</li>
    <li><strong>De tu borrador a una versión más fluida</strong>: «Reescribe este párrafo mío para que se lea mejor, conservando mis expresiones y mi forma de argumentar».</li>
</ul>

<p>Si lo que quieres es reducir un documento largo a lo esencial, eso es resumir, no parafrasear: lo explicamos en <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>.</p>

<h2 id="sentido">Comprobar que dice lo mismo</h2>

<p>El riesgo principal de parafrasear es que el significado cambie sin que lo notes. Pasa más de lo que parece: un «puede» que se convierte en «debe», un «algunos» que pasa a ser «la mayoría», una condición que desaparece. Para evitarlo:</p>

<ol>
    <li>Compara frase a frase el original y la versión nueva, sobre todo en textos con cifras, plazos u obligaciones.</li>
    <li>Pide a la IA, en una conversación nueva, que compare los dos textos: «Señala cualquier diferencia de significado entre el texto A y el texto B, por pequeña que sea».</li>
    <li>Revisa que no haya añadido datos. Cuando un texto le parece incompleto, la IA tiende a rellenarlo, y eso es una <a href="/guias/alucinaciones-de-la-ia">alucinación</a> aunque suene razonable.</li>
</ol>

<h2 id="plagio">Parafrasear no es dejar de citar</h2>

<p>Muchas búsquedas de «parafrasear con IA» vienen de estudiantes que quieren evitar que un trabajo salga como copiado. Conviene ser claros: cambiar las palabras de un texto ajeno no lo convierte en tuyo. El plagio consiste en presentar como propias las ideas de otra persona, y eso no cambia por usar sinónimos.</p>

<ul>
    <li>Si usas una idea de una fuente, <strong>cítala</strong>, la hayas parafraseado tú o la IA.</li>
    <li>Si tu centro tiene normas sobre IA, cúmplelas. En el <a href="/guias/tfg-con-ia">TFG</a> y en los trabajos de clase, muchas universidades piden declarar qué herramientas has usado y para qué.</li>
    <li>No uses la paráfrasis para esquivar detectores. Además de ser poco honesto, los detectores fallan en ambos sentidos, como explicamos en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">se nota si un texto lo escribe una IA</a>.</li>
</ul>

<p>El uso legítimo en el ámbito académico es otro: entender una fuente difícil, comprobar que la has entendido escribiéndola con tus palabras y pedir a la IA que te diga si tu versión es fiel.</p>

<h2 id="voz">Que siga sonando a ti</h2>

<p>Un texto parafraseado por IA tiende a sonar a IA: frases equilibradas, adjetivos de más, conectores como «además» o «en definitiva» en cada párrafo. Para que conserve tu voz:</p>

<ul>
    <li>Pega un texto tuyo como ejemplo de estilo y pide que lo imite.</li>
    <li>Pide que conserve tus expresiones y que cambie solo lo necesario.</li>
    <li>Lee el resultado en voz alta y quita lo que nunca dirías.</li>
</ul>

<p>Y si solo necesitas quitar faltas y comas mal puestas, no parafrasees: basta con <a href="/guias/corregir-ortografia-con-ia">corregir la ortografía con IA</a>, que deja tu texto como está y arregla únicamente los errores.</p>
HTML,
];
