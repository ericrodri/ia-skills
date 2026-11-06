<?php

return [
    'title' => 'Cómo desactivar Gemini en el móvil: botón de encendido, «Hey Google» y actividad',
    'navTitle' => 'Desactivar Gemini en el móvil',
    'seoTitle' => 'Cómo desactivar Gemini en Android, Samsung y Xiaomi',
    'description' => 'Cómo quitar Gemini del botón de encendido, apagar «Hey Google», dejar de usarlo como asistente y borrar su actividad en Android, Samsung y Xiaomi.',
    'excerpt' => 'Gemini sustituyó al Asistente de Google en los móviles Android y ya no hay botón para volver atrás. Lo que sí puedes hacer es que no salte al mantener pulsado el botón, que no escuche «Hey Google» y que no guarde tus conversaciones.',
    'category' => 'Herramientas',
    'published' => '2026-11-06',
    'updated' => '2026-11-06',
    'readingMinutes' => 7,
    'words' => 1367,
    'about' => 'Desactivar el asistente Gemini en teléfonos Android',
    'related' => ['como-usar-gemini', 'gemini-no-genera-imagenes', 'chatgpt-vs-gemini', 'hablar-con-chatgpt-por-voz', 'ia-local-privada-en-tu-ordenador', 'memoria-e-historial-de-chatgpt'],
    'toc' => [
        'que-paso' => 'Qué ha pasado con el Asistente de Google',
        'boton' => 'Que no salte al mantener pulsado el botón',
        'hey-google' => 'Apagar «Hey Google» y la pantalla de bloqueo',
        'predeterminado' => 'Quitarlo como asistente o desactivar la aplicación',
        'actividad' => 'Que no guarde tus conversaciones',
        'cual-elegir' => 'Qué desactivar según lo que te moleste',
    ],
    'faq' => [
        '¿Se puede volver al Asistente de Google en lugar de Gemini?' => 'En los móviles Android, ya no. Google retiró el Asistente en septiembre de 2026 y quitó del menú de Gemini la opción de «Cambiar al Asistente de Google». Lo que sí puedes hacer es que Gemini no se abra con el botón ni con la voz, o dejar el móvil sin ningún asistente. Los altavoces y pantallas Nest no se ven afectados por ese cambio.',
        '¿Cómo quito Gemini del botón de encendido?' => 'En Ajustes, busca «botón» o «gestos». En un Pixel está en Sistema, Gestos, Mantener pulsado el botón de encendido; en Samsung, en Funciones avanzadas, Botón lateral. Cambia la acción de mantener pulsado a «Menú de apagado». A partir de ahí el botón vuelve a mostrar las opciones de apagar y reiniciar.',
        '¿Puedo desinstalar Gemini?' => 'Depende del móvil. Si venía de fábrica, Android suele ofrecer «Desactivar» en lugar de «Desinstalar». Ojo: según la propia ayuda de Google, borrar la aplicación no quita Gemini como asistente predeterminado. Para eso hay que ir a Aplicaciones predeterminadas, Aplicación de asistente digital, y elegir «Ninguna».',
        '¿Gemini escucha todo lo que digo?' => 'No graba de forma continua. Con «Hey Google» activado, el móvil escucha localmente esa frase y solo entonces empieza a enviar audio. Si no te fías, apaga «Hey Google» en los ajustes de Gemini. Las grabaciones de audio para mejorar los servicios de Google vienen desactivadas por defecto.',
        '¿Cómo borro lo que le he preguntado a Gemini?' => 'En gemini.google.com o en la aplicación, entra en Actividad. Ahí puedes borrar conversaciones sueltas o todo, desactivar la opción de guardar la actividad y cambiar el borrado automático, que por defecto es a los 18 meses. Aunque lo desactives, Google guarda las conversaciones hasta 72 horas para poder darte el servicio.',
    ],
    'ctaTitle' => 'Si al final prefieres usarlo bien',
    'ctaBody' => 'Gemini rinde bastante más con un buen prompt que con preguntas sueltas. Tienes ideas en la guía de <a href="/guias/como-usar-gemini">cómo usar Gemini</a> y prompts listos para copiar en el <a href="/skills">catálogo de skills</a>.',
    'body' => <<<'HTML'
<p>Mantienes pulsado el botón de encendido para apagar el móvil y, en lugar del menú de siempre, aparece Gemini preguntándote en qué puede ayudarte. Es una de las quejas más repetidas desde que Google lo convirtió en el asistente por defecto de Android.</p>

<p>No hace falta aguantarlo. Gemini se puede apartar del botón, dejar de escuchar «Hey Google», quitar como asistente y, si lo usas, impedir que guarde tus conversaciones. Esta guía va por partes, de lo más leve a lo más drástico.</p>

<h2 id="que-paso">Qué ha pasado con el Asistente de Google</h2>

<p>Durante años, los móviles Android traían el Asistente de Google. Desde 2024 Google fue ofreciendo Gemini como sustituto, con la opción de volver al Asistente desde el menú de la aplicación. Esa opción ya no existe: en septiembre de 2026 Google retiró el Asistente de los móviles y tabletas Android, y quitó el atajo para volver atrás de las versiones recientes de la aplicación de Gemini.</p>

<p>Así que, si buscas cómo «volver al Asistente», la respuesta corta es que en el móvil no se puede. Lo que sí controlas es cuándo se abre Gemini, si escucha tu voz y qué guarda. Los altavoces y pantallas de Google Nest siguen aparte y no se ven afectados por ese cambio.</p>

<h2 id="boton">Que no salte al mantener pulsado el botón</h2>

<p>Es lo que más molesta y lo más fácil de arreglar. La opción está en los ajustes del sistema, no en los de Gemini, y su nombre cambia según el fabricante:</p>

<figure>
<table>
    <thead>
        <tr><th>Móvil</th><th>Dónde está</th><th>Qué elegir</th></tr>
    </thead>
    <tbody>
        <tr><td>Google Pixel y Android puro</td><td>Ajustes, Sistema, Gestos, Mantener pulsado el botón de encendido</td><td>Menú de apagado</td></tr>
        <tr><td>Samsung</td><td>Ajustes, Funciones avanzadas, Botón lateral</td><td>En «Mantener pulsado», Menú de apagado</td></tr>
        <tr><td>Xiaomi, Redmi y POCO</td><td>Ajustes, Ajustes adicionales, Atajos de gestos (el nombre varía según la versión)</td><td>Quitar el atajo del asistente del botón de encendido</td></tr>
        <tr><td>Motorola, OnePlus y otros</td><td>Ajustes, Sistema o Gestos, botón de encendido</td><td>Menú de apagado</td></tr>
    </tbody>
</table>
</figure>

<p>Si no lo encuentras, usa el buscador de los ajustes y escribe «botón», «encendido», «lateral» o «gestos». La propia ayuda de Google reconoce que los pasos cambian de un fabricante a otro.</p>

<p>Revisa también el gesto de deslizar desde una esquina inferior de la pantalla: en muchos móviles abre el asistente. Suele estar en el mismo apartado de gestos o en el de navegación del sistema.</p>

<h2 id="hey-google">Apagar «Hey Google» y la pantalla de bloqueo</h2>

<p>Si lo que te molesta es que se active al oír algo parecido a «Hey Google» en la televisión o en una conversación, desactiva la escucha por voz:</p>

<ol>
    <li>Abre la aplicación de <strong>Gemini</strong>.</li>
    <li>Toca tu <strong>foto de perfil</strong> y entra en <strong>Ajustes</strong>.</li>
    <li>Entra en <strong>Hablar con Gemini sin usar las manos</strong> y apaga <strong>«Hey Google»</strong>.</li>
</ol>

<p>En esos mismos ajustes está <strong>Gemini en la pantalla de bloqueo</strong>. Si apagas la opción de usarlo sin desbloquear, nadie podrá preguntarle nada con tu móvil bloqueado, que es una buena idea si lo dejas encima de la mesa en el trabajo.</p>

<p>Con el botón y la voz desactivados, Gemini sigue instalado pero solo se abre si tocas su icono. Para mucha gente es el punto justo: no estorba y sigue ahí si algún día lo necesitas.</p>

<h2 id="predeterminado">Quitarlo como asistente o desactivar la aplicación</h2>

<p>Si no quieres ningún asistente, puedes dejar el móvil sin asistente predeterminado:</p>

<ol>
    <li>Abre <strong>Ajustes</strong> y entra en <strong>Aplicaciones</strong>.</li>
    <li>Busca <strong>Aplicaciones predeterminadas</strong> y luego <strong>Aplicación de asistente digital</strong>.</li>
    <li>En <strong>Aplicación de asistente digital predeterminada</strong>, elige <strong>Ninguna</strong> u otra aplicación que prefieras.</li>
</ol>

<p>Fíjate en que ahí aparece «Google», no «Gemini»: es la misma opción. Si eliges «Ninguna», el gesto del botón y el de la esquina dejan de abrir asistente alguno.</p>

<p>Para ir más allá, entra en Ajustes, Aplicaciones, Gemini. Si el móvil lo trajo de fábrica, lo normal es que solo puedas pulsar <strong>Desactivar</strong>; si lo instalaste tú, podrás <strong>Desinstalar</strong>. Ten en cuenta un detalle que Google advierte en su ayuda: borrar la aplicación no quita Gemini como asistente predeterminado. Haz primero el paso anterior.</p>

<p>Una cosa que no se desactiva así: las funciones de Gemini dentro de otras aplicaciones, como el botón de Gemini en Gmail, en Google Docs o en Chrome. Se gestionan desde los ajustes de cada aplicación y, en cuentas del trabajo o de un centro educativo, las controla el administrador. Si te ocurre en el trabajo, lo explicamos en <a href="/guias/gemini-no-genera-imagenes">por qué Gemini no genera imágenes</a>, donde contamos cómo afectan esas restricciones.</p>

<h2 id="actividad">Que no guarde tus conversaciones</h2>

<p>Si vas a seguir usando Gemini, merece la pena revisar qué guarda. Con la sesión iniciada y la opción de guardar actividad encendida, Google conserva tus conversaciones en tu cuenta. En mayores de 18 años viene activada por defecto.</p>

<ul>
    <li><strong>Para desactivarla:</strong> en gemini.google.com entra en <strong>Actividad</strong> y, arriba, pulsa sobre el estado y elige desactivar, o desactivar y borrar la actividad.</li>
    <li><strong>Para borrar automáticamente:</strong> por defecto se borra a los 18 meses. Puedes cambiarlo a 3 o 36 meses, o a no borrar nunca.</li>
    <li><strong>Lo que se queda igual:</strong> aunque la desactives, Google guarda las conversaciones hasta 72 horas para poder responderte, sin que aparezcan en tu actividad.</li>
    <li><strong>El audio:</strong> el uso de tus grabaciones de voz para mejorar los servicios viene desactivado por defecto. Compruébalo en esa misma página si usas Gemini Live.</li>
</ul>

<p>Con la actividad apagada, Gemini pierde parte de su conexión con otras aplicaciones. Es el precio de la privacidad. Si lo que te preocupa es no compartir datos sensibles, la regla es la misma que con cualquier asistente: no le cuentes lo que no le contarías a un desconocido. Lo explicamos con detalle en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos</a>, y si quieres una IA que no salga de tu equipo, en <a href="/guias/ia-local-privada-en-tu-ordenador">IA local y privada en tu ordenador</a>.</p>

<h2 id="cual-elegir">Qué desactivar según lo que te moleste</h2>

<figure>
<table>
    <thead>
        <tr><th>Lo que te pasa</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>Se abre al intentar apagar el móvil</td><td>Cambiar la acción del botón a «Menú de apagado»</td></tr>
        <tr><td>Se activa solo al oír algo</td><td>Apagar «Hey Google» en los ajustes de Gemini</td></tr>
        <tr><td>Cualquiera puede usarlo con el móvil bloqueado</td><td>Apagar Gemini en la pantalla de bloqueo</td></tr>
        <tr><td>No quieres ningún asistente</td><td>Asistente digital predeterminado: «Ninguna» y desactivar la aplicación</td></tr>
        <tr><td>Lo usas pero no quieres que guarde nada</td><td>Desactivar la actividad o poner el borrado automático a 3 meses</td></tr>
    </tbody>
</table>
</figure>

<p>Nuestra recomendación para la mayoría: quita Gemini del botón, apaga «Hey Google» y deja la aplicación instalada. No te molestará y, si un día quieres probar a <a href="/guias/hablar-con-chatgpt-por-voz">hablar con la IA por voz</a> o compararlo con ChatGPT en <a href="/guias/chatgpt-vs-gemini">ChatGPT o Gemini</a>, lo tendrás a un toque.</p>
HTML,
];
