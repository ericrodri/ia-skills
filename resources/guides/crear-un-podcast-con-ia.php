<?php

return [
    'title' => 'Cómo crear un podcast con IA: guion, grabación, edición y publicación',
    'navTitle' => 'Crear un podcast con IA',
    'seoTitle' => 'Cómo crear un podcast con IA sin sonar a robot',
    'description' => 'Podcast con IA paso a paso: preparar el guion, limpiar el audio, editar quitando muletillas, voces sintéticas, transcripción y notas del episodio.',
    'excerpt' => 'La IA no hace un buen podcast por ti, pero quita casi todo el trabajo pesado: preparar el guion, limpiar el sonido de una grabación casera, cortar silencios y muletillas, transcribir y escribir las notas del episodio. La voz y las ideas siguen siendo lo que hace que alguien vuelva.',
    'category' => 'Práctica',
    'published' => '2026-10-10',
    'updated' => '2026-10-10',
    'readingMinutes' => 6,
    'words' => 1049,
    'about' => 'Producción de podcasts con ayuda de inteligencia artificial: guion, mejora de audio, edición, voces sintéticas y transcripción',
    'related' => ['convertir-texto-a-voz-con-ia', 'pasar-audio-a-texto-con-ia', 'crear-musica-con-ia', 'video-y-audio-con-ia-en-el-trabajo', 'gemini-notebook-antes-notebooklm', 'ia-para-redes-sociales'],
    'toc' => [
        'que-hace-la-ia' => 'Qué hace la IA y qué no',
        'formato' => 'Definir el formato',
        'guion' => 'Preparar el episodio',
        'grabar' => 'Grabar y limpiar el audio',
        'editar' => 'Editar sin pelearte con la onda',
        'voces' => 'Voces sintéticas y podcasts generados',
        'publicar' => 'Transcripción, notas y difusión',
    ],
    'faq' => [
        '¿Se puede hacer un podcast entero con IA?' => 'Técnicamente sí: hay herramientas que convierten un documento en una conversación entre dos voces sintéticas. Sirven para repasar un tema o para uso interno, pero para un podcast público suelen sonar parecidos entre sí y cuesta fidelizar oyentes. Lo habitual es usar la IA para preparar, limpiar y editar tu propia voz.',
        '¿Qué IA sirve para mejorar el audio de un podcast?' => 'Hay herramientas que eliminan ruido de fondo y eco de una grabación hecha con el móvil o un micrófono sencillo, como el mejorador de voz de Adobe Podcast, y editores como Descript que incluyen esa función. Muchos editores de audio y vídeo traen ya un botón de reducción de ruido con IA.',
        '¿Puedo clonar mi voz para no tener que grabar?' => 'Algunos servicios de texto a voz permiten crear una copia de tu voz a partir de unos minutos de grabación. Sirve para corregir una frase sin volver a grabar. Úsalo solo con tu propia voz y avisa a tu audiencia si un episodio entero está generado.',
        '¿Cuánto debe durar un episodio de podcast?' => 'No hay una cifra correcta; depende del formato. Entre 20 y 40 minutos es habitual en entrevistas y temas de divulgación, y los formatos diarios suelen quedarse en 10 o 15. Lo importante es que no sobre nada: la IA ayuda a detectar las partes que se alargan.',
        '¿Dónde publico el podcast?' => 'Necesitas un servicio de alojamiento que genere el canal RSS, como Spotify for Creators u otras plataformas de alojamiento, y desde ahí lo distribuyes a Spotify, Apple Podcasts, YouTube y el resto. Muchos tienen plan gratuito para empezar.',
    ],
    'ctaTitle' => 'Instrucciones para producir contenido',
    'ctaBody' => 'Notas del episodio, títulos y piezas para redes se repiten en cada entrega. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para <a href="/profesiones/marketing">marketing</a> y <a href="/profesiones/freelancers">freelancers</a> que puedes adaptar a tu podcast.',
    'body' => <<<'HTML'
<p>Hacer un podcast tiene una parte creativa, que es pensar qué contar y contarlo bien, y una parte pesada: preparar el guion, conseguir que una grabación casera suene limpia, cortar silencios y «eeeh», transcribir y escribir las notas de cada episodio. La IA se ocupa ya de casi toda la parte pesada. La voz y las ideas siguen siendo lo que hace que alguien vuelva al siguiente episodio. Esta guía recorre el proceso completo.</p>

<h2 id="que-hace-la-ia">Qué hace la IA y qué no</h2>

<ul>
    <li><strong>Bien</strong>: proponer temas y estructura, preparar preguntas de entrevista, limpiar ruido y eco, editar a partir del texto, transcribir, escribir títulos, notas y piezas para redes.</li>
    <li><strong>Regular</strong>: generar el episodio entero con voces sintéticas. Funciona, pero suena a lo que es.</li>
    <li><strong>Mal</strong>: aportar opinión, experiencia o anécdotas propias. Y cualquier dato que diga en el guion hay que comprobarlo: puede inventarlo.</li>
</ul>

<h2 id="formato">Definir el formato</h2>

<p>Antes del primer episodio, usa la IA como compañero para pensar el formato:</p>

<blockquote>«Quiero hacer un podcast sobre [tema] para [público]. Tengo [tiempo] a la semana. Propón tres formatos posibles (monólogo, entrevista, tertulia) con duración, frecuencia y la estructura fija de cada episodio. Para cada uno, dime qué podcasts parecidos existen y qué podría hacer distinto.»</blockquote>

<p>Comprueba los podcasts que te nombre: alguno puede no existir. Lo útil es la estructura fija, por ejemplo: entradilla de 30 segundos, tema principal, sección corta recurrente y despedida. Una estructura que se repite facilita grabar y fideliza.</p>

<h2 id="guion">Preparar el episodio</h2>

<p>Un guion leído palabra por palabra suena leído. Mejor una escaleta: los puntos que quieres tratar, en orden, con las ideas clave y los datos. Pide a la IA:</p>

<blockquote>«Este es mi material para el episodio: [notas]. Organízalo en una escaleta de cinco bloques para unos 25 minutos. En cada bloque, la idea principal en una frase y dos ejemplos de mis notas. Escribe completas solo la entrada y la despedida.»</blockquote>

<p>Para una entrevista, pásale la biografía del invitado y algo que haya publicado, y pide preguntas abiertas que no pueda contestar con un sí o un no. Si el material de partida son documentos largos, la herramienta de <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a> ayuda a sacar las ideas principales.</p>

<h2 id="grabar">Grabar y limpiar el audio</h2>

<p>La IA ha bajado mucho la exigencia técnica. Con un micrófono sencillo, o incluso el móvil, en una habitación con cortinas o muebles que absorban el eco, se puede empezar. Después, un mejorador de voz con IA, como el de Adobe Podcast o el que traen editores como Descript, quita el ruido de fondo y la reverberación con un clic.</p>

<p>No abuses: con el filtro al máximo, la voz puede sonar metálica. Prueba con un fragmento y compara con el original.</p>

<h2 id="editar">Editar sin pelearte con la onda</h2>

<p>Los editores con transcripción integrada han cambiado la edición: el programa convierte el audio en texto, y borrar una frase del texto la borra del audio. Además, suelen detectar y quitar de golpe muletillas y silencios largos. Es la forma más rápida de editar si no tienes experiencia.</p>

<p>Revisa lo que corta de forma automática. Quitar todas las pausas deja un ritmo atropellado, y algunas muletillas son parte de tu forma de hablar. Para la sintonía y las transiciones, hay generadores de música con IA; qué licencias tienen está en <a href="/guias/crear-musica-con-ia">crear música con IA</a>.</p>

<h2 id="voces">Voces sintéticas y podcasts generados</h2>

<p>Las herramientas de <a href="/guias/convertir-texto-a-voz-con-ia">texto a voz</a> tienen dos usos razonables en un podcast: corregir una frase mal dicha sin volver a grabar, con una copia de tu propia voz, y crear versiones en otros idiomas. También existen herramientas que convierten un documento en una conversación entre dos presentadores sintéticos, útiles para repasar un tema o para formación interna en una empresa.</p>

<p>Para un podcast público, avisa si un episodio está generado y no clones nunca la voz de otra persona sin su permiso.</p>

<h2 id="publicar">Transcripción, notas y difusión</h2>

<p>Con el episodio terminado, la transcripción es la materia prima de todo lo demás. Cómo obtenerla está en <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto con IA</a>. Con ella, pide a la IA:</p>

<ul>
    <li><strong>Cinco títulos</strong> concretos, que digan de qué va el episodio, sin frases tipo «no te lo puedes perder».</li>
    <li><strong>Las notas del episodio</strong>: resumen de tres líneas, capítulos con su minuto y los enlaces mencionados.</li>
    <li><strong>Tres fragmentos de 30 a 60 segundos</strong> que funcionen solos, para recortarlos como clips.</li>
    <li><strong>Un artículo para tu web</strong> a partir de la transcripción, que ayuda a que el contenido aparezca en buscadores.</li>
</ul>

<p>Las ideas para mover los clips están en <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a>. Y recuerda que lo que más hace crecer un podcast no es la producción, sino publicar con constancia. La IA te ahorra las horas que harían falta para lograrlo.</p>
HTML,
];
