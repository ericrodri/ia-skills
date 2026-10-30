<?php

return [
    'title' => 'Cómo hacer un árbol genealógico con IA: buscar, leer actas antiguas y dibujarlo',
    'navTitle' => 'Hacer un árbol genealógico con IA',
    'seoTitle' => 'Cómo hacer un árbol genealógico con IA',
    'description' => 'Haz tu árbol genealógico con ayuda de la IA: dónde buscar, cómo leer actas antiguas, ordenar los datos y dibujar el árbol sin inventar antepasados.',
    'excerpt' => 'Pregunta a un chat por tus bisabuelos y te dará nombres, fechas y hasta el origen noble del apellido. Todo inventado. La IA no conoce a tu familia, pero es una ayuda enorme para leer letra antigua, traducir latín, ordenar datos y dibujar el árbol. Así se usa bien.',
    'category' => 'Práctica',
    'published' => '2026-10-30',
    'updated' => '2026-10-30',
    'readingMinutes' => 7,
    'words' => 1157,
    'about' => 'Uso de asistentes de inteligencia artificial en la investigación genealógica: planificación de la búsqueda, transcripción de documentos antiguos, organización de datos familiares y representación del árbol',
    'related' => ['escribir-una-biografia-con-ia', 'restaurar-fotos-antiguas-con-ia', 'alucinaciones-de-la-ia', 'mapas-mentales-y-esquemas-con-ia', 'ideas-de-regalo-y-amigo-invisible-con-ia', 'investigar-con-ia-deep-research'],
    'toc' => [
        'limite' => 'Lo que la IA no puede hacer',
        'empezar' => 'Empieza por casa',
        'buscar' => 'Dónde buscar los documentos',
        'leer' => 'Leer actas antiguas con IA',
        'ordenar' => 'Ordenar los datos',
        'dibujar' => 'Dibujar el árbol',
    ],
    'faq' => [
        '¿Hay alguna IA que haga el árbol genealógico sola?' => 'No a partir de un nombre. Las plataformas como MyHeritage o Ancestry usan IA para sugerir coincidencias con documentos y con árboles de otros usuarios, pero cada sugerencia hay que comprobarla. Un chat general no tiene acceso a esos registros y, si le preguntas por tus antepasados, se los inventa.',
        '¿Dónde busco a mis antepasados en España?' => 'Para nacimientos, matrimonios y defunciones desde 1871, en el Registro Civil. Antes de esa fecha, en los libros parroquiales, que se guardan en las parroquias o en los archivos diocesanos. FamilySearch tiene muchos de estos libros digitalizados y su consulta es gratuita con una cuenta.',
        '¿Puede la IA leer documentos antiguos escritos a mano?' => 'Los asistentes que aceptan imágenes leen bastante bien la letra de los siglos XIX y XX, y peor la más antigua o un documento dañado. Pídele la transcripción literal, que marque lo que no lee seguro y compara siempre los nombres y fechas con la imagen.',
        '¿Qué programa uso para hacer el árbol genealógico gratis?' => 'FamilySearch permite construir el árbol gratis, aunque es un árbol compartido con otros usuarios. Gramps es un programa libre que guarda todo en tu ordenador. Ambos importan y exportan archivos GEDCOM, el formato estándar.',
        '¿Es seguro subir datos de mi familia a la IA o a webs de genealogía?' => 'Con los fallecidos hay poco problema. Con las personas vivas, sé prudente: no publiques sus datos en árboles públicos sin su permiso y evita subir documentos con números de identidad o direcciones actuales.',
    ],
    'ctaTitle' => 'Skills para investigar y ordenar información',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para transcribir documentos, extraer datos a tablas e investigar con fuentes citadas, útiles más allá de la genealogía para <a href="/profesiones/freelancers">profesionales independientes</a> y equipos de <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Hacer el árbol genealógico de la familia es un proyecto que muchos dejan para cuando haya tiempo, y que las reuniones de Navidad, con los mayores contando historias, vuelven a poner sobre la mesa. La IA lo hace más fácil, pero no de la forma que se suele esperar: no encuentra a tus antepasados, te ayuda a encontrarlos tú. Esta guía explica qué partes del trabajo le puedes dar y cuáles no.</p>

<h2 id="limite">Lo que la IA no puede hacer</h2>

<p>Si escribes en un chat «hazme el árbol genealógico de la familia García Fernández de Zamora», recibirás un árbol con nombres, fechas y profesiones. Parecerá creíble y será inventado. Los asistentes generales no tienen acceso a los registros civiles ni parroquiales, y ante una pregunta sin datos completan con lo que suena verosímil, como explicamos en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>. Lo mismo pasa con el «origen del apellido»: muchas de esas historias de linajes y escudos son leyenda.</p>

<p>La regla es simple: <strong>cada persona del árbol tiene que salir de un documento o de un testimonio</strong>, y la IA solo trabaja con lo que tú le das.</p>

<h2 id="empezar">Empieza por casa</h2>

<p>Lo primero no está en internet. Habla con los mayores de la familia y reúne papeles: libros de familia, partidas de nacimiento, esquelas, recordatorios de comunión, fotos con nombres en el reverso. La IA ayuda a preparar esa conversación:</p>

<blockquote>«Voy a hablar con mi tío abuelo para hacer el árbol genealógico. Prepárame una lista de preguntas para sacar nombres completos, fechas aproximadas, pueblos de origen y oficios de sus padres, abuelos, hermanos y primos. Añade preguntas para recordar a parientes que murieron jóvenes o que emigraron.»</blockquote>

<p>Graba la conversación si te deja y apunta también las historias: si después quieres convertirlas en un relato, en <a href="/guias/escribir-una-biografia-con-ia">escribir una biografía con IA</a> explicamos cómo.</p>

<h2 id="buscar">Dónde buscar los documentos</h2>

<p>Con lo que sepas de la familia, pide a la IA un plan de búsqueda adaptado. En España, el esquema general es este:</p>

<ul>
    <li><strong>Registro Civil</strong>: nacimientos, matrimonios y defunciones desde 1871. Las certificaciones se pueden pedir por internet en la sede del Ministerio de Justicia.</li>
    <li><strong>Libros parroquiales</strong>: bautismos, matrimonios y entierros anteriores, en la parroquia o en el archivo diocesano. Muchos están digitalizados en FamilySearch, de consulta gratuita.</li>
    <li><strong>Archivos públicos</strong>: padrones municipales, expedientes militares y de emigración. El portal PARES da acceso a los archivos estatales.</li>
</ul>

<blockquote>«Mi bisabuelo nació hacia 1880 en [PUEBLO, PROVINCIA] y se casó en [LUGAR] hacia 1905. ¿Qué documentos debería buscar para confirmar sus datos y los de sus padres, en qué archivos y en qué orden? Dime qué información aparece normalmente en cada documento.»</blockquote>

<p>Comprueba las direcciones y los requisitos de cada archivo en su web: la IA acierta con el esquema general y falla con detalles concretos. Para búsquedas largas, los modos de investigación que explicamos en <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a> citan sus fuentes y son más fáciles de verificar.</p>

<h2 id="leer">Leer actas antiguas con IA</h2>

<p>Aquí la IA ahorra más horas. Una partida de bautismo del siglo XIX tiene letra difícil, abreviaturas y, a menudo, está en latín. Los asistentes que aceptan imágenes, como ChatGPT, Claude o Gemini, pueden ayudar:</p>

<blockquote>«Transcribe literalmente esta partida de bautismo, respetando la ortografía original. Marca con [?] cada palabra que no leas con seguridad. Después tradúcela al español actual y saca en una lista: bautizado, fecha, padres, abuelos paternos y maternos, padrinos y lugares.»</blockquote>

<p>Fotografía el documento con buena luz y de frente, y si está muy dañado, prueba antes a mejorar la imagen. Revisa siempre nombres y fechas contra el original: una lectura equivocada te puede llevar a la rama de otra familia. Lo bueno de estas actas es que suelen nombrar a los abuelos, así que cada documento te sube una o dos generaciones.</p>

<h2 id="ordenar">Ordenar los datos</h2>

<p>A partir de unas decenas de personas, la memoria no basta. Pide a la IA que convierta tus notas en una tabla con una fila por persona: identificador, nombre, apellidos, nacimiento, defunción, padre, madre, cónyuge y documento de origen. Pídele también que señale contradicciones, como fechas imposibles o dos personas que podrían ser la misma.</p>

<p>Esa tabla se pasa luego a un programa de genealogía. Gramps es libre y guarda todo en tu ordenador; FamilySearch, MyHeritage y Ancestry funcionan en internet y sugieren coincidencias con otros árboles, que conviene comprobar una a una. Todos usan GEDCOM, el formato estándar para pasar árboles de un programa a otro.</p>

<p>Ten cuidado con las personas vivas: no publiques sus datos en árboles públicos sin su permiso.</p>

<h2 id="dibujar">Dibujar el árbol</h2>

<p>Los programas de genealogía dibujan el árbol y lo exportan para imprimir. Si quieres algo más personal, la IA puede ayudarte con el diseño:</p>

<ul>
    <li><strong>Esquema rápido</strong>: pídele el árbol en formato Mermaid o como lista sangrada para revisarlo de un vistazo. En <a href="/guias/mapas-mentales-y-esquemas-con-ia">mapas mentales y esquemas con IA</a> explicamos cómo convertir ese código en un dibujo.</li>
    <li><strong>Versión decorada</strong>: los generadores de imágenes no escriben bien muchos nombres seguidos. Pide un fondo ilustrado sin texto y añade los nombres tú en Canva o en cualquier editor.</li>
    <li><strong>Con fotos</strong>: añade retratos de cada generación. Si están dañados, mira cómo <a href="/guias/restaurar-fotos-antiguas-con-ia">restaurar fotos antiguas con IA</a> sin cambiar las caras.</li>
</ul>

<p>Impreso y enmarcado, o en un pequeño libro con las historias de cada rama, el árbol es de los regalos que más emocionan en una reunión familiar. Si buscas más ideas de ese tipo, tienes una lista en <a href="/guias/ideas-de-regalo-y-amigo-invisible-con-ia">ideas de regalo con IA</a>.</p>
HTML,
];
