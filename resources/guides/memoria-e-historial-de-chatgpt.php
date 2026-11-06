<?php

return [
    'title' => 'Memoria e historial de ChatGPT: cómo verlos, borrarlos y qué hacer si la memoria está llena',
    'navTitle' => 'Memoria e historial de ChatGPT',
    'seoTitle' => 'Memoria de ChatGPT: borrarla, llena e historial',
    'description' => 'Cómo funciona la memoria de ChatGPT, qué hacer si está llena, cómo borrar el historial en el móvil o el ordenador y cómo evitar que guarde lo que le cuentas.',
    'excerpt' => 'ChatGPT recuerda cosas de ti de dos formas distintas, y borrar una no borra la otra. Esta guía explica dónde está cada una, cómo limpiarlas y qué hacer cuando aparece el aviso de memoria llena.',
    'category' => 'Herramientas',
    'published' => '2026-11-05',
    'updated' => '2026-11-06',
    'readingMinutes' => 8,
    'words' => 1447,
    'about' => 'Memoria, historial de conversaciones y privacidad en ChatGPT',
    'related' => ['como-usar-chatgpt', 'usar-ia-sin-filtrar-datos-de-clientes', 'ventana-de-contexto-conversaciones-largas', 'gpts-proyectos-y-skills', 'chatgpt-no-funciona', 'vale-la-pena-pagar-chatgpt-plus'],
    'toc' => [
        'dos-memorias' => 'Memoria e historial no son lo mismo',
        'ver' => 'Ver y borrar lo que ChatGPT recuerda',
        'llena' => 'Memoria llena: qué significa y cómo liberarla',
        'historial' => 'Borrar el historial de conversaciones',
        'temporal' => 'Chat temporal y entrenamiento: que no guarde nada',
        'cuenta' => 'Descargar tus datos o borrar la cuenta',
    ],
    'faq' => [
        '¿Cómo se borra la memoria de ChatGPT?' => 'Entra en los ajustes, abre el apartado de personalización y pulsa en gestionar memorias. Ahí ves la lista de lo que ChatGPT ha guardado sobre ti y puedes borrar cada recuerdo con el icono de papelera o todos a la vez. También puedes pedírselo en la conversación: «olvida que vivo en Sevilla». Ten en cuenta que borrar un chat no borra lo que memorizó en él.',
        '¿Qué hago si la memoria de ChatGPT está llena?' => 'El aviso significa que ya no cabe ningún recuerdo nuevo, no que ChatGPT deje de funcionar. Entra en gestionar memorias y borra lo que ya no sirve: datos repetidos, cosas de un proyecto terminado o detalles que guardó sin que se lo pidieras. Otra opción es pedirle que resuma varios recuerdos en uno. Lo que sea estable y largo, como tu estilo de escritura, va mejor en las instrucciones personalizadas.',
        '¿Cómo borro el historial de ChatGPT en el móvil?' => 'Para borrar una conversación, mantén pulsado su nombre en la lista de chats o abre su menú de tres puntos y elige eliminar. Para borrarlas todas, ve a los ajustes y busca la opción de eliminar todos los chats en el apartado de controles de datos. Lo que borres en el móvil desaparece también del ordenador, porque el historial va ligado a la cuenta.',
        '¿ChatGPT recuerda conversaciones anteriores?' => 'Sí, si tienes activada la memoria. Por un lado guarda recuerdos concretos, que puedes ver y editar. Por otro, puede consultar tus conversaciones anteriores para personalizar las respuestas. Las dos opciones se activan o desactivan por separado en los ajustes de personalización. Si las desactivas, cada chat empieza desde cero, aunque el historial siga visible en la barra lateral.',
        '¿Dónde están los chats archivados de ChatGPT?' => 'No aparecen en la barra lateral, pero no se han borrado. En el ordenador, entra en Ajustes, Controles de datos, Chats archivados y pulsa Gestionar: ahí puedes abrirlos, desarchivarlos o borrarlos. En el móvil están en el mismo apartado de los ajustes. El buscador del historial también los encuentra.',
        '¿Si borro un chat, OpenAI lo borra de verdad?' => 'Desaparece de tu cuenta al momento, y OpenAI dice que lo elimina de sus sistemas en un plazo de unos 30 días, salvo que tenga que conservarlo por motivos legales o de seguridad. Si ese chat ya se usó para entrenar modelos, borrarlo no deshace ese entrenamiento; por eso conviene desactivar la opción de mejorar el modelo antes de compartir información delicada.',
    ],
    'ctaTitle' => 'Instrucciones que no ocupan memoria',
    'ctaBody' => 'En lugar de que ChatGPT memorice cómo trabajas, guárdalo en un prompt reutilizable. En el <a href="/skills">catálogo de skills</a> tienes instrucciones listas por <a href="/guias/prompts-de-ia-por-profesion">profesión</a>, y en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a> cómo organizarlas.',
    'body' => <<<'HTML'
<p>Un día ChatGPT te saluda por tu nombre, sabe a qué te dedicas y recuerda que no comes carne. Al otro te salta un aviso de que su memoria está llena. Y cuando borras una conversación, descubres que sigue acordándose de lo que le contaste en ella.</p>

<p>Todo tiene explicación: ChatGPT recuerda cosas de dos formas diferentes, y cada una se gestiona en un sitio distinto. Esta guía explica cuáles son, cómo verlas y cómo limpiarlas.</p>

<h2 id="dos-memorias">Memoria e historial no son lo mismo</h2>

<figure>
<table>
    <thead>
        <tr><th>Qué es</th><th>Qué guarda</th><th>Dónde se gestiona</th></tr>
    </thead>
    <tbody>
        <tr><td>Memorias guardadas</td><td>Datos concretos sobre ti: tu nombre, tu trabajo, tus preferencias, un proyecto</td><td>Ajustes, personalización, gestionar memorias</td></tr>
        <tr><td>Referencia al historial</td><td>Lo que ChatGPT deduce consultando tus conversaciones anteriores</td><td>Ajustes, personalización, opción de consultar el historial</td></tr>
        <tr><td>Historial de chats</td><td>Las conversaciones completas que ves en la barra lateral</td><td>La propia lista de chats y los controles de datos</td></tr>
        <tr><td>Instrucciones personalizadas</td><td>Lo que tú le dices de forma fija sobre ti y cómo quieres que responda</td><td>Ajustes, personalización</td></tr>
    </tbody>
</table>
</figure>

<p>La consecuencia práctica es importante: <strong>borrar un chat no borra lo que ChatGPT memorizó en él</strong>, y borrar la memoria no borra tus chats. Si quieres que olvide algo del todo, tienes que limpiar las dos cosas.</p>

<p>Y no hay que confundir nada de esto con la ventana de contexto, que es lo que el modelo puede tener en cuenta dentro de una misma conversación. Cuando una charla muy larga empieza a olvidar lo del principio, el problema es ese, y lo explicamos en <a href="/guias/ventana-de-contexto-conversaciones-largas">por qué la IA olvida en conversaciones largas</a>.</p>

<h2 id="ver">Ver y borrar lo que ChatGPT recuerda</h2>

<ol>
    <li><strong>Abre los ajustes</strong> desde tu nombre o tu foto, en la esquina de la pantalla.</li>
    <li><strong>Entra en personalización.</strong> Verás dos interruptores: uno para las memorias guardadas y otro para consultar el historial de chats.</li>
    <li><strong>Pulsa en gestionar memorias.</strong> Aparece la lista de todo lo que ha guardado sobre ti.</li>
    <li><strong>Borra lo que no quieras</strong>, uno a uno con la papelera o todo de golpe.</li>
</ol>

<p>Merece la pena revisar la lista de vez en cuando. Es habitual encontrar cosas que guardó sin que se lo pidieras, como un dato de un familiar o algo que solo era para una tarea concreta. También puedes gestionarla hablando: «¿qué recuerdas de mí?», «olvida lo de mi viaje a Roma» o «recuerda que escribo siempre en español de España».</p>

<p>Si prefieres que no recuerde nada, apaga los dos interruptores. ChatGPT seguirá funcionando igual, pero cada conversación empezará de cero.</p>

<h2 id="llena">Memoria llena: qué significa y cómo liberarla</h2>

<p>Las memorias guardadas tienen un espacio limitado, menor en el plan gratuito que en los de pago. Cuando se agota, aparece el aviso de memoria llena y ChatGPT deja de guardar recuerdos nuevos, aunque sigue respondiendo con normalidad y usando los que ya tiene.</p>

<p>Para liberar espacio:</p>

<ul>
    <li><strong>Borra lo caducado:</strong> proyectos terminados, viajes pasados, datos que han cambiado.</li>
    <li><strong>Elimina duplicados.</strong> Es frecuente que guarde lo mismo varias veces con palabras distintas.</li>
    <li><strong>Pídele que los resuma:</strong> «junta mis recuerdos sobre mi trabajo en uno solo y borra los demás». Revisa después la lista para comprobar que lo ha hecho.</li>
    <li><strong>Mueve lo estable a las instrucciones personalizadas.</strong> Tu profesión, tu tono preferido o el formato de respuesta no necesitan ocupar memoria: se escriben una vez en las instrucciones y se aplican siempre.</li>
    <li><strong>Usa proyectos para el trabajo.</strong> Si trabajas con documentos y contexto de un cliente, es mejor un proyecto con sus archivos que llenar la memoria general; lo contamos en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</li>
</ul>

<p>OpenAI ha ido cambiando cómo se gestiona la memoria, y en algunas cuentas ChatGPT ya reorganiza y prioriza los recuerdos por su cuenta, así que el aviso aparece menos. Si te sale, los pasos de arriba siguen siendo la solución.</p>

<h2 id="historial">Borrar el historial de conversaciones</h2>

<ul>
    <li><strong>Un chat:</strong> abre el menú de tres puntos junto a su nombre en la barra lateral, o mantenlo pulsado en el móvil, y elige eliminar.</li>
    <li><strong>Todos los chats:</strong> en los ajustes, dentro de los controles de datos, está la opción de eliminar todos los chats.</li>
    <li><strong>Archivar en lugar de borrar:</strong> si solo quieres despejar la lista, archiva. El chat desaparece de la barra lateral pero lo puedes recuperar desde los ajustes, en Controles de datos, Chats archivados.</li>
</ul>

<p>El historial va ligado a tu cuenta, así que lo que borres en el móvil desaparece también del ordenador y de la web. OpenAI elimina los chats borrados de sus sistemas en un plazo de unos 30 días, salvo obligaciones legales o de seguridad.</p>

<h2 id="temporal">Chat temporal y entrenamiento: que no guarde nada</h2>

<p>Si vas a preguntar algo delicado, hay dos herramientas mejores que borrar después:</p>

<ul>
    <li><strong>Chat temporal.</strong> Se activa desde la parte superior de un chat nuevo. Esa conversación no aparece en el historial, no usa ni crea memorias y no se usa para entrenar modelos. OpenAI puede conservar una copia durante un tiempo limitado por seguridad.</li>
    <li><strong>Desactivar la mejora del modelo.</strong> En los controles de datos hay una opción para que tus conversaciones no se usen para entrenar. Desactívala si usas ChatGPT para trabajar.</li>
</ul>

<p>Ni una cosa ni otra convierten ChatGPT en un sitio adecuado para contraseñas, datos médicos identificables o información de clientes. Para eso, revisa <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">cómo usar la IA sin filtrar datos de clientes</a>, y si necesitas que nada salga de tu equipo, la alternativa es una <a href="/guias/ia-local-privada-en-tu-ordenador">IA local en tu ordenador</a>.</p>

<h2 id="cuenta">Descargar tus datos o borrar la cuenta</h2>

<p>En los controles de datos está también la opción de <strong>exportar tus datos</strong>: recibes por correo un archivo con todas tus conversaciones. Conviene hacerlo antes de borrar nada importante.</p>

<p>Si quieres irte del todo, la opción de <strong>eliminar la cuenta</strong> está en los ajustes, en el apartado de la cuenta o de controles de datos según la versión de la aplicación. Antes de hacerlo:</p>

<ul>
    <li>Si pagas una suscripción contratada desde el iPhone o desde Android, cancélala en la tienda de aplicaciones: borrar la cuenta no siempre la cancela.</li>
    <li>Borrar la cuenta elimina chats, memorias, GPTs y proyectos, y no se puede deshacer.</li>
</ul>

<p>Para la mayoría de la gente no hace falta llegar a eso. Revisar la memoria cada pocos meses, usar el chat temporal para lo delicado y tener desactivado el entrenamiento cubre casi todo. Si estás empezando con la herramienta, tienes lo básico en <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a>.</p>
HTML,
];
