<?php

return [
    'title' => 'Vídeo y audio con IA en el trabajo: qué rinde y qué hay que etiquetar',
    'navTitle' => 'Vídeo y audio con IA',
    'seoTitle' => 'Vídeo y audio con IA: qué rinde y qué etiquetar',
    'description' => 'Los usos de vídeo y voz sintética que ahorran trabajo de verdad, los que salen mal, y las obligaciones de etiquetado que aplican desde agosto de 2026.',
    'excerpt' => 'Generar un vídeo es hoy lo barato; lo caro sigue siendo tener algo que contar. Qué usos rinden de verdad en una empresa, cuáles quedan mal y no lo sabes, qué permisos hacen falta para clonar una voz o una cara, y qué obliga a marcar el Reglamento europeo desde el 2 de agosto de 2026.',
    'category' => 'Herramientas',
    'published' => '2026-09-17',
    'updated' => '2026-09-17',
    'readingMinutes' => 11,
    'words' => 1850,
    'about' => 'Generación de vídeo y audio sintético con inteligencia artificial en entornos profesionales',
    'related' => ['imagenes-con-ia-derechos-y-uso-comercial', 'presentaciones-con-ia', 'ai-act-obligaciones-empresas'],
    'toc' => [
        'que-hay' => 'Qué hay: cuatro cosas distintas que se llaman igual',
        'que-rinde' => 'Qué rinde y qué no',
        'doblaje' => 'Doblaje y subtítulos: el caso que casi siempre sale a cuenta',
        'avatares' => 'Avatares: dónde funcionan y dónde incomodan',
        'permisos' => 'Clonar una voz o una cara: de quién es el permiso',
        'etiquetado' => 'Lo que hay que etiquetar desde agosto de 2026',
        'flujo' => 'Un flujo de trabajo sensato',
    ],
    'faq' => [
        '¿Hay que avisar de que un vídeo está hecho con IA?' => 'Desde el 2 de agosto de 2026 se aplican las obligaciones de transparencia del artículo 50 del Reglamento europeo de IA. Quien desarrolla el generador debe marcar la salida en un formato legible por máquina; quien difunde una ultrafalsificación —contenido que aparenta ser real— debe revelar que está generado o manipulado artificialmente. Un vídeo claramente ficticio o estilizado no entra ahí; uno que simula a una persona real diciendo algo, sí.',
        '¿Puedo usar comercialmente un vídeo generado con IA?' => 'Depende de las condiciones de la herramienta, que varían mucho más que en imagen. Revisa tres cosas antes de firmar nada con un cliente: si el plan que pagas incluye uso comercial, si el proveedor se reserva derechos sobre lo generado y qué pasa si alguien reclama por parecido con material protegido. La lógica general de derechos es la misma que en la guía de imágenes con IA.',
        '¿Es legal clonar la voz de un empleado o un directivo?' => 'Solo con su consentimiento explícito, específico y revocable, y aun así conviene documentar para qué usos y durante cuánto tiempo. La voz y la imagen de una persona identificable son datos personales, y en España están además protegidas por el derecho a la propia imagen. Un permiso genérico firmado al entrar en la empresa no cubre clonar su voz tres años después para un vídeo comercial.',
        '¿Qué herramienta uso para traducir mis vídeos?' => 'Las plataformas de doblaje con IA traducen, clonan la voz del original y ajustan el movimiento de los labios en decenas de idiomas. Para formación interna y contenido informativo el resultado es más que suficiente. Para lo comercial en un mercado nuevo, haz que un nativo revise el guion antes de doblar: el fallo casi nunca está en la pronunciación, está en una expresión que allí significa otra cosa.',
        '¿La IA sustituye a una productora de vídeo?' => 'Sustituye la parte cara de lo repetitivo: actualizar un vídeo de formación cuando cambia un procedimiento, producir veinte versiones de un mismo mensaje, doblar a seis idiomas. No sustituye lo que da valor a una pieza de marca, que es la idea, el guion y la dirección. El riesgo real no es quedarse sin productora: es publicar mucho más contenido mediocre porque de pronto es barato.',
        '¿Se nota si un vídeo o una voz son sintéticos?' => 'Cada vez menos, y esa es justo la razón de ser de las reglas de etiquetado. En audio limpio y frases cortas la mayoría de la gente ya no distingue una voz clonada. En vídeo aguantan más las tomas largas, las manos y las transiciones bruscas. Apoyar cualquier decisión —tuya o de tu equipo— en «ya lo notaré» es una mala apuesta, y en el terreno del fraude es directamente peligrosa.',
    ],
    'ctaTitle' => 'El guion sigue siendo el trabajo',
    'ctaBody' => 'La herramienta produce el vídeo; lo que decide si funciona es el guion. En el catálogo hay skills de guion, mensaje y comunicación en <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>Producir un minuto de vídeo decente costaba hasta hace poco un día de trabajo y varios cientos de euros. Ahora cuesta un prompt. Eso ha cambiado dos cosas: una buena, que ciertos trabajos que nadie hacía porque no salían a cuenta ahora se hacen, y una mala, que el listón de «publicar» ha bajado mucho más deprisa que el de «merecer la pena».</p>

<p>Esta guía separa lo que de verdad rinde de lo que solo impresiona en una demo, y explica qué obligaciones nuevas hay encima desde el pasado 2 de agosto.</p>

<h2 id="que-hay">Qué hay: cuatro cosas distintas que se llaman igual</h2>

<p>Bajo «vídeo con IA» conviven cuatro tecnologías con niveles de madurez muy diferentes. Mezclarlas es la causa de casi toda la decepción:</p>

<figure>
<table>
    <thead>
        <tr><th>Qué es</th><th>Qué hace</th><th>Madurez</th><th>Uso profesional realista</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Generación de vídeo</strong></td><td>Crea planos desde una descripción o una imagen</td><td>Impresionante en planos cortos, frágil en continuidad</td><td>Recursos de apoyo, fondos, ilustración de conceptos</td></tr>
        <tr><td><strong>Voz sintética</strong></td><td>Locuta un texto con una voz elegida o clonada</td><td>Muy madura</td><td>Narración, formación, versiones en varios idiomas</td></tr>
        <tr><td><strong>Avatares</strong></td><td>Una persona sintética lee tu guion a cámara</td><td>Madura, con cierto efecto de extrañeza</td><td>Formación interna, comunicados, tutoriales de producto</td></tr>
        <tr><td><strong>Doblaje y subtitulado</strong></td><td>Traduce un vídeo real conservando la voz y ajustando los labios</td><td>La más madura y la más rentable</td><td>Internacionalizar lo que ya tienes grabado</td></tr>
    </tbody>
</table>
</figure>

<p>La que sale en las noticias es la primera. La que paga facturas es la cuarta.</p>

<h2 id="que-rinde">Qué rinde y qué no</h2>

<p>La regla que ordena todo el asunto: <strong>la IA rinde cuando el valor está en la información, y falla cuando el valor está en la pieza</strong>.</p>

<figure>
<table>
    <thead>
        <tr><th>Caso</th><th>Veredicto</th><th>Por qué</th></tr>
    </thead>
    <tbody>
        <tr><td>Formación interna que cambia cada trimestre</td><td><strong>Rinde mucho</strong></td><td>Actualizar un procedimiento ya no exige volver a grabar a nadie</td></tr>
        <tr><td>Doblar a varios idiomas lo que ya tienes</td><td><strong>Rinde mucho</strong></td><td>Multiplica el alcance de material que ya está hecho y amortizado</td></tr>
        <tr><td>Tutoriales de producto y pantallas de ayuda</td><td><strong>Rinde</strong></td><td>Contenido funcional, se consume por la información</td></tr>
        <tr><td>Comunicados internos y resúmenes de dirección</td><td><strong>Rinde</strong></td><td>Se ve una vez, nadie espera producción</td></tr>
        <tr><td>Publicaciones sociales de relleno</td><td>Dudoso</td><td>Barato de producir, barato de ignorar. Más volumen no es más resultado</td></tr>
        <tr><td>Anuncio de marca o pieza de campaña</td><td><strong>No, todavía</strong></td><td>La continuidad entre planos y el control fino siguen fallando donde más se nota</td></tr>
        <tr><td>Testimonios de clientes</td><td><strong>No, nunca</strong></td><td>Sintetizar a un cliente que no dijo eso es publicidad engañosa, además de un problema legal</td></tr>
    </tbody>
</table>
</figure>

<p>La última fila no es un matiz técnico. Fabricar el testimonio de una persona, aunque sea con su permiso genérico, cruza una línea distinta de la del resto de la tabla.</p>

<h2 id="doblaje">Doblaje y subtítulos: el caso que casi siempre sale a cuenta</h2>

<p>Si solo vas a probar una cosa, que sea esta. Tienes material grabado —formación, webinars, presentaciones de producto— que funciona en un idioma y no existe en los demás. El doblaje con IA traduce, mantiene la voz del original y ajusta el movimiento de los labios, y las plataformas actuales cubren decenas de idiomas y dialectos.</p>

<p>Tres cosas que conviene saber antes:</p>

<ul>
    <li><strong>Revisa el guion antes de doblar, no después.</strong> Corregir el texto cuesta minutos; regenerar diez vídeos, no. Y el error típico no es de pronunciación: es una expresión que en el mercado de destino significa otra cosa.</li>
    <li><strong>Las cifras, las unidades y los nombres propios son donde falla.</strong> Repásalos siempre, uno por uno.</li>
    <li><strong>Para lo comercial, que lo vea un nativo.</strong> Veinte minutos de una persona que vive allí evitan el vídeo que suena a traducción y desactiva la venta.</li>
</ul>

<h2 id="avatares">Avatares: dónde funcionan y dónde incomodan</h2>

<p>Un avatar —una persona sintética que lee tu guion a cámara— sale bien en contenido funcional y regular en cualquier cosa que pida cercanía. La diferencia no es la calidad técnica, es la expectativa de quien mira.</p>

<ul>
    <li><strong>Funciona:</strong> instrucciones de un procedimiento, módulos de formación, explicación de una funcionalidad, avisos operativos. Nadie esperaba una persona concreta.</li>
    <li><strong>Incomoda:</strong> el mensaje del director general a la plantilla, la bienvenida a un empleado nuevo, la disculpa por una incidencia. Ahí el contenido <em>es</em> que una persona se moleste en decirlo, y un avatar comunica exactamente lo contrario.</li>
</ul>

<p>Si usas un avatar con la cara de alguien de la empresa, díselo a quien lo va a ver. No por la norma —que también—, sino porque descubrirlo por su cuenta destruye más confianza de la que ahorró el vídeo.</p>

<h2 id="permisos">Clonar una voz o una cara: de quién es el permiso</h2>

<p>La voz y la imagen de una persona identificable son datos personales, y en España cuentan además con la protección del derecho a la propia imagen. De ahí salen cuatro reglas que no son opinables:</p>

<ol>
    <li><strong>Consentimiento explícito y específico.</strong> Firmado, para usos concretos, con plazo. Un permiso genérico del contrato de trabajo no cubre clonar la voz de alguien tres años después para una campaña.</li>
    <li><strong>Revocable.</strong> Y con un procedimiento real para cuando alguien se va de la empresa: qué pasa con los vídeos publicados y con el modelo de voz entrenado.</li>
    <li><strong>Nunca sobre terceros sin permiso.</strong> Ni clientes, ni proveedores, ni personas públicas. Que un vídeo sea «claramente una broma» no es defensa suficiente.</li>
    <li><strong>Documentado en algún sitio.</strong> Quién autorizó qué, cuándo y para qué. El día que haya una discusión, la conversación de chat donde alguien dijo «por mí vale» no sirve.</li>
</ol>

<p>Y un aviso que conecta con algo más feo: <strong>cada voz clonada que circula por tu empresa es también material de partida para un fraude</strong>. La suplantación de directivos funciona precisamente con este tipo de audio, y merece su propio procedimiento: está en <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">la guía sobre estafas con IA</a>.</p>

<h2 id="etiquetado">Lo que hay que etiquetar desde agosto de 2026</h2>

<p>El <strong>artículo 50 del Reglamento europeo de IA</strong> está en aplicación desde el 2 de agosto de 2026, y es el que afecta directamente a quien publica contenido sintético. En corto, y quedándonos con lo que toca a una empresa normal:</p>

<figure>
<table>
    <thead>
        <tr><th>Supuesto</th><th>Qué obliga</th><th>A quién</th></tr>
    </thead>
    <tbody>
        <tr><td>El sistema genera audio, imagen o vídeo sintéticos</td><td>Marcar la salida en formato legible por máquina y detectable como artificial</td><td>A quien desarrolla el generador</td></tr>
        <tr><td>Difundes una ultrafalsificación: parece real, no lo es</td><td>Revelar que el contenido ha sido generado o manipulado</td><td>A quien la publica: tú</td></tr>
        <tr><td>Una persona interactúa con un sistema de IA</td><td>Que sepa que no habla con una persona</td><td>A quien lo despliega</td></tr>
    </tbody>
</table>
</figure>

<p>Dos matices que evitan sustos y excesos:</p>

<ul>
    <li><strong>No todo contenido con IA dentro es una ultrafalsificación.</strong> Una animación estilizada, un fondo generado o una locución que nadie confundiría con una persona concreta no activan la obligación de revelar. Lo que la activa es simular algo o a alguien real de forma que induzca a error.</li>
    <li><strong>La marca legible por máquina no es cosa tuya, pero elegir proveedor sí.</strong> Si tu herramienta no incorpora esas marcas de procedencia, el problema acaba siendo tuyo el día que tengas que demostrar el origen de una pieza. Pregúntalo antes de contratar.</li>
</ul>

<p>Las sanciones de este bloque llegan hasta 15 millones de euros o el 3 % del volumen de negocio mundial. Para pymes se aplica la menor de las dos cifras. El calendario completo y el resto de obligaciones están en <a href="/guias/ai-act-obligaciones-empresas">la guía del AI Act</a>, y la parte de derechos de uso comercial se solapa bastante con <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">la de imágenes con IA</a>.</p>

<h2 id="flujo">Un flujo de trabajo sensato</h2>

<ol>
    <li><strong>Decide si el vídeo es el formato.</strong> Buena parte de lo que se produce en vídeo se leería mejor en una página. Que sea barato no lo convierte en el canal adecuado.</li>
    <li><strong>Escribe el guion primero, aparte.</strong> Es el 80 % del resultado y la parte donde la IA ayuda de verdad como redactora, no como cámara.</li>
    <li><strong>Léelo en voz alta.</strong> Lo que no se puede decir sin quedarse sin aire suena fatal locutado, con voz sintética o humana.</li>
    <li><strong>Produce la versión mínima</strong> y enséñasela a tres personas antes de hacer las otras nueve versiones.</li>
    <li><strong>Etiqueta al publicar</strong>, no al terminar. La revelación pertenece al sitio donde se ve, no a la carpeta del proyecto.</li>
    <li><strong>Guarda el guion y los ajustes.</strong> Cuando cambie el procedimiento dentro de seis meses, actualizar será un rato en lugar de empezar de cero, que es justo el motivo por el que compensaba usar IA.</li>
</ol>

<p>El resumen honesto: la IA ha abaratado la producción, no la comunicación. El cuello de botella sigue estando donde estaba, en tener algo que decir y saber a quién. Lo mismo que pasa <a href="/guias/presentaciones-con-ia">con las presentaciones</a>, que la IA hace en cinco minutos y sigue sin poder defender por ti.</p>
HTML,
];
