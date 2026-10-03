<?php

return [
    'title' => 'Meta AI en WhatsApp: qué es, qué ve y cómo limitarlo',
    'navTitle' => 'Meta AI en WhatsApp',
    'seoTitle' => 'Meta AI en WhatsApp: qué es y cómo limitarlo',
    'description' => 'Qué es el círculo azul de Meta AI en WhatsApp, qué puede leer de tus chats, por qué no se puede quitar del todo y qué ajustes cambiar para limitarlo.',
    'excerpt' => 'El círculo azul de WhatsApp es Meta AI, el asistente de Meta. No lee tus chats por su cuenta, pero sí todo lo que le escribes o le reenvías. Esto es lo que conviene saber y los ajustes que reducen su presencia.',
    'category' => 'Herramientas',
    'published' => '2026-10-03',
    'updated' => '2026-10-03',
    'readingMinutes' => 7,
    'words' => 1126,
    'about' => 'Funcionamiento, privacidad y ajustes del asistente de inteligencia artificial Meta AI dentro de WhatsApp',
    'related' => ['usar-ia-sin-filtrar-datos-de-clientes', 'estafas-con-ia-deepfakes-y-suplantacion', 'como-usar-chatgpt', 'como-usar-grok', 'herramientas-de-ia-gratis', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-es' => 'Qué es el círculo azul',
        'que-ve' => 'Qué ve Meta AI y qué no',
        'quitar' => '¿Se puede quitar?',
        'ajustes' => 'Los ajustes que sí reducen su presencia',
        'para-que' => 'Para qué puede servir',
        'trabajo' => 'WhatsApp de trabajo: la regla que importa',
    ],
    'faq' => [
        '¿Qué es Meta AI en WhatsApp?' => 'Es el asistente de inteligencia artificial de Meta, la empresa dueña de WhatsApp, Instagram y Facebook. Aparece como un círculo azul y morado en la pantalla de chats y en la barra de búsqueda. Funciona como ChatGPT: le escribes, responde, resume o genera imágenes.',
        '¿Meta AI lee mis conversaciones de WhatsApp?' => 'No por su cuenta. Los chats normales siguen cifrados de extremo a extremo y Meta AI no tiene acceso a ellos. Lo que sí procesa Meta es todo lo que escribes en el chat con Meta AI, lo que le reenvías y los mensajes en los que lo mencionas con @Meta AI dentro de un grupo.',
        '¿Cómo quito Meta AI de WhatsApp?' => 'No hay un interruptor para eliminarlo por completo. Puedes no usarlo, archivar o borrar su chat, borrar lo que sabe de ti escribiendo /reset-ai en esa conversación y activar la privacidad avanzada del chat en los grupos donde no quieras que nadie lo invoque.',
        '¿Meta usa mis datos para entrenar su IA?' => 'Meta usa las interacciones con Meta AI y el contenido público de Facebook e Instagram para entrenar sus modelos. En la Unión Europea puedes oponerte desde el centro de privacidad de Meta. Las conversaciones privadas cifradas de WhatsApp no forman parte de ese entrenamiento, según la propia Meta.',
        '¿Puedo usar ChatGPT en WhatsApp en lugar de Meta AI?' => 'Meta intentó dejar fuera de WhatsApp a los asistentes de otras empresas desde enero de 2026. La Comisión Europea consideró que eso podía vulnerar las normas de competencia y le ordenó en 2026 restablecer el acceso. La disponibilidad concreta de cada asistente puede cambiar; consulta la web oficial de cada uno.',
    ],
    'ctaTitle' => 'Prompts que puedes usar en cualquier asistente',
    'ctaBody' => 'Si prefieres trabajar con otro asistente, las instrucciones del <a href="/skills">catálogo de skills</a> funcionan igual en ChatGPT, Claude o Gemini. Busca la de tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Un día apareció un círculo azul y morado en WhatsApp y mucha gente sigue sin saber qué es, si lee sus mensajes o cómo quitarlo. Es Meta AI, el asistente de inteligencia artificial de Meta. Esta guía responde a esas tres dudas sin alarmismo y sin rodeos: qué ve, qué no ve, qué se puede desactivar y qué no, y cuándo puede resultar útil.</p>

<h2 id="que-es">Qué es el círculo azul</h2>

<p>Meta AI es el asistente de Meta, la empresa de WhatsApp, Instagram y Facebook. Funciona como cualquier chatbot: le escribes y responde, resume, traduce, busca información o crea imágenes. Está en tres sitios dentro de WhatsApp:</p>

<ul>
    <li><strong>El botón del círculo</strong> en la pantalla de chats, que abre una conversación con el asistente.</li>
    <li><strong>La barra de búsqueda</strong>, que mezcla tus resultados con sugerencias de preguntas a la IA.</li>
    <li><strong>Los grupos</strong>, donde cualquier participante puede escribir @Meta AI para invocarlo.</li>
</ul>

<p>Por dentro es un modelo de lenguaje como los de ChatGPT o Gemini, con los mismos puntos débiles: puede inventarse datos con total seguridad. Si no tienes claro qué es eso ni por qué pasa, empieza por <a href="/guias/que-es-la-inteligencia-artificial">qué es la inteligencia artificial</a>.</p>

<h2 id="que-ve">Qué ve Meta AI y qué no</h2>

<p>Aquí está la confusión principal, así que vale la pena ser precisos:</p>

<ul>
    <li><strong>No ve tus chats normales.</strong> Las conversaciones con personas siguen cifradas de extremo a extremo. Ni Meta AI ni Meta pueden leerlas.</li>
    <li><strong>Sí ve todo lo que le escribes</strong> en su chat, y lo que le reenvías. Al reenviarle un mensaje o una foto, ese contenido sale del cifrado y llega a los servidores de Meta.</li>
    <li><strong>En un grupo, ve el mensaje en el que lo mencionan</strong> y aquellos a los que se responda citándolo. Si un compañero escribe «@Meta AI resume esto», el contenido que le pase lo procesa Meta, aunque tú no hayas escrito nada.</li>
</ul>

<p>Ese último punto es el que más sorprende: tu privacidad en un grupo depende también de lo que hagan los demás.</p>

<h2 id="quitar">¿Se puede quitar?</h2>

<p>No del todo. Meta lo considera una función integrada de la aplicación y no ofrece un interruptor para eliminarlo. Lo que no hay que hacer es instalar versiones modificadas de WhatsApp que prometen quitarlo: incumplen las condiciones de uso, pueden llevar a que bloqueen tu cuenta y son una vía clásica de malware. Los trucos de esa familia aparecen en la guía de <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA</a>.</p>

<p>A esto se suma el frente de la competencia. Meta intentó que su asistente fuera el único de propósito general dentro de WhatsApp desde enero de 2026, y la Comisión Europea abrió un procedimiento que acabó con una orden de medidas provisionales para restablecer el acceso a los asistentes de otras empresas. Es una situación que puede cambiar; para saber si tu asistente favorito funciona en WhatsApp, consulta su web oficial.</p>

<h2 id="ajustes">Los ajustes que sí reducen su presencia</h2>

<ol>
    <li><strong>Borra lo que sabe de ti.</strong> En el chat con Meta AI, escribe <code>/reset-ai</code>. Elimina la memoria de esa conversación en los servidores de Meta.</li>
    <li><strong>Archiva o elimina su chat</strong> para que no aparezca arriba en la lista.</li>
    <li><strong>Activa la privacidad avanzada del chat</strong> en los grupos sensibles (en la información del grupo). Entre otras cosas, impide que se use Meta AI en ese grupo y bloquea la exportación del chat.</li>
    <li><strong>Revisa el entrenamiento.</strong> En el centro de privacidad de Meta, los usuarios de la UE pueden oponerse a que sus datos se usen para entrenar los modelos.</li>
</ol>

<p>Los nombres de los menús cambian con las versiones de la aplicación. Si no encuentras una opción, busca en <em>Ajustes</em> › <em>Privacidad</em> o en la información de cada chat.</p>

<h2 id="para-que">Para qué puede servir</h2>

<p>Si lo vas a usar, que sea en tareas donde no compartas nada privado:</p>

<ul>
    <li>Preguntas rápidas sin salir de la aplicación: una conversión, una receta, una duda de ortografía.</li>
    <li>Traducir una frase antes de enviarla a alguien que habla otro idioma. Para textos largos, mira <a href="/guias/traducir-con-ia">cómo traducir con IA</a>.</li>
    <li>Crear una imagen divertida para un grupo de amigos.</li>
</ul>

<p>Para todo lo que vaya más allá, otros asistentes ofrecen más control, historial organizado y planes con garantías. Hay opciones sin coste en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>, y para empezar con el más conocido, <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a>.</p>

<h2 id="trabajo">WhatsApp de trabajo: la regla que importa</h2>

<p>Muchos autónomos y pymes atienden a sus clientes por WhatsApp. Ahí el riesgo de Meta AI es concreto: un empleado que reenvía al asistente el mensaje de un cliente para que le redacte la respuesta está pasando datos personales a un tercero sin base para hacerlo.</p>

<ul>
    <li>No reenvíes a Meta AI mensajes, fotos ni documentos de clientes.</li>
    <li>Activa la privacidad avanzada en los grupos internos donde circule información de la empresa.</li>
    <li>Recógelo por escrito en vuestra <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>, junto con el resto de asistentes.</li>
</ul>

<p>El criterio general para no filtrar información con ninguna herramienta está en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos de clientes</a>. Y si lo que buscas es atender mejor a tus clientes con IA, hay formas más seguras que reenviar mensajes: las explicamos en <a href="/guias/chatbot-de-atencion-al-cliente-con-ia">chatbot de atención al cliente con IA</a>.</p>
HTML,
];
