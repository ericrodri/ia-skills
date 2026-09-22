<?php

return [
    'title' => 'Canibalización de keywords: cómo detectarla y arreglarla',
    'navTitle' => 'Canibalización de keywords',
    'seoTitle' => 'Canibalización SEO: cómo arreglarla',
    'description' => 'Cómo saber si dos páginas de tu web compiten por la misma búsqueda, cuándo es un problema real y cuándo no, y qué hacer: fusionar, reenfocar o dejarlo.',
    'excerpt' => 'Tienes tres artículos sobre lo mismo y Google alterna entre ellos sin decidirse. No es un castigo: es que le has dado tres respuestas a una pregunta. Así se detecta y así se arregla.',
    'category' => 'Método',
    'published' => '2026-09-21',
    'updated' => '2026-09-21',
    'readingMinutes' => 10,
    'words' => 1650,
    'about' => 'Canibalización de palabras clave en SEO',
    'related' => ['intencion-de-busqueda-en-seo', 'enlazado-interno-y-arquitectura-web', 'autoridad-tematica-y-clusters-de-contenido', 'diagnosticar-caida-de-trafico-seo', 'actualizar-contenido-antiguo-con-ia', 'keyword-research-con-ia', 'auditoria-seo-tecnica'],
    'toc' => [
        'que-es' => 'Qué es exactamente',
        'cuando-importa' => 'Cuándo es un problema y cuándo no',
        'detectar' => 'Cómo detectarla con Search Console',
        'decidir' => 'El árbol de decisión',
        'fusionar' => 'Cómo se fusionan dos páginas bien',
        'prevenir' => 'Cómo dejar de producirla',
        'errores' => 'Errores al arreglarla',
    ],
    'faq' => [
        '¿Google penaliza la canibalización?' => 'No existe una penalización por esto. No hay una acción manual ni un filtro específico: lo que hay es un reparto. Google elige una de tus páginas para cada consulta, y si la elección es dudosa va alternando, con lo que ninguna acumula el historial de clics y de enlaces que tendría una sola. El daño es de oportunidad, no de castigo, y por eso no aparece en ningún informe de Search Console: hay que ir a buscarlo.',
        '¿Es malo que salgan dos de mis páginas para la misma búsqueda?' => 'No siempre. Si salen en los puestos 2 y 5 ocupando más espacio en la página de resultados, eso es bueno y se llama doble resultado. El problema es distinto: cuando ninguna de las dos consolida, cuando alternan de semana en semana, o cuando la que sale no es la que quieres que salga, por ejemplo un artículo informativo en lugar de la página de servicio.',
        '¿Me sirve la etiqueta canonical para arreglarlo?' => 'Solo cuando las dos páginas son de verdad la misma cosa: variantes de URL, versiones con parámetros, una ficha duplicada. Para dos artículos con contenido distinto sobre la misma intención, el canonical es una tirita: Google lo trata como una sugerencia y puede ignorarla, y mientras tanto sigues manteniendo dos páginas. Si el contenido es distinto pero la intención es la misma, lo que toca es fusionar.',
        '¿Y si las dos páginas posicionan bien?' => 'Entonces no lo toques. La regla práctica es intervenir solo cuando hay un perjuicio medible: alternancia, una posición estancada en la segunda página o tráfico que llega a la página que no convierte. Fusionar dos páginas que funcionan es una forma habitual de perder tráfico por arreglar algo que no estaba roto.',
        '¿Cada cuánto conviene revisarlo?' => 'Una vez por trimestre en un sitio que publica poco, y cada mes si publicas varias piezas a la semana o tienes un catálogo con filtros que generan URLs. También conviene revisarlo justo después de cerrar un cluster de contenido, que es el momento en el que más se produce.',
    ],
    'ctaTitle' => 'Prompts de auditoría de contenidos votados por profesionales',
    'ctaBody' => 'Inventarios de contenido, criterios de fusión y redacción de reemplazos: <a href="/profesiones/marketing">Marketing</a>. Para cruzar datos de Search Console a escala, mira <a href="/profesiones/analisis-de-datos">Análisis de datos</a>.',
    'body' => <<<'HTML'
<p>Es uno de los problemas de SEO más comunes y de los peor explicados. La versión que circula —«Google se confunde y te castiga»— no describe lo que pasa, y lleva a arreglar cosas que no están rotas y a dejar sin tocar las que sí.</p>

<h2 id="que-es">Qué es exactamente</h2>

<p>Ocurre cuando dos o más páginas de tu sitio responden a <strong>la misma intención de búsqueda</strong>. No a la misma palabra: a la misma intención. Esa distinción es toda la guía, y si no tienes claro cómo se identifica una intención, empieza por la <a href="/guias/intencion-de-busqueda-en-seo">guía de intención de búsqueda</a>.</p>

<p>Dos páginas pueden compartir la palabra «factura» y no competir en absoluto, porque una explica qué datos lleva una factura y la otra vende un programa para emitirlas. Son intenciones distintas y Google las trata como tales. En cambio, «cómo hacer una factura» y «guía para emitir facturas» son el mismo artículo escrito dos veces, aunque no compartan ni una palabra clave exacta.</p>

<p>Lo que pasa entonces no es un castigo. Es que Google tiene que elegir cuál de las dos enseña, la elección es dudosa, y va alternando. El coste real es acumulativo: cada página reúne la mitad de las señales —clics, tiempo, enlaces internos, enlaces externos— que reuniría una sola, y ninguna llega a consolidar.</p>

<h2 id="cuando-importa">Cuándo es un problema y cuándo no</h2>

<p>Esta tabla ahorra la mayoría de las intervenciones innecesarias:</p>

<figure>
<table>
    <thead>
        <tr><th>Situación</th><th>¿Problema?</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>Dos URLs alternan de semana en semana para la misma consulta</td><td><strong>Sí</strong></td><td>Fusionar</td></tr>
        <tr><td>Un artículo informativo posiciona por delante de tu página de servicio para una consulta comercial</td><td><strong>Sí</strong></td><td>Reenfocar y reenlazar</td></tr>
        <tr><td>Las dos salen a la vez, en puestos 2 y 6</td><td>No</td><td>Nada</td></tr>
        <tr><td>Diez fichas de producto casi idénticas por variantes</td><td>Depende</td><td>Canonical o página única con variantes</td></tr>
        <tr><td>Cinco páginas de ciudad con el mismo texto y el nombre cambiado</td><td><strong>Sí</strong></td><td>Contenido local real o menos páginas</td></tr>
        <tr><td>Dos páginas posicionan bien y estables, cada una con su consulta</td><td>No</td><td>Nada</td></tr>
    </tbody>
</table>
</figure>

<p>El último caso de la lista —las páginas por ciudad clonadas— es el que más se ve en sitios que han montado páginas a escala sin diferenciar el contenido. Ahí el problema no se arregla fusionando: se arregla decidiendo qué páginas merecen existir. El criterio está en la <a href="/guias/seo-programatico-con-ia">guía de SEO programático</a> y, para el caso concreto de los negocios locales, en la <a href="/guias/seo-local-con-ia">de SEO local</a>.</p>

<h2 id="detectar">Cómo detectarla con Search Console</h2>

<p>No hace falta ninguna herramienta de pago. El método completo, en cuatro pasos:</p>

<ol>
    <li><strong>Search Console → Rendimiento → Resultados de búsqueda.</strong> Pon el rango en 3 meses, abre la pestaña de <em>Consultas</em> y ordena por impresiones.</li>
    <li><strong>Haz clic en una consulta y pasa a la pestaña de <em>Páginas</em>.</strong> Si aparece más de una URL con impresiones significativas para esa consulta, tienes un candidato. Con una URL sola, no hay nada que mirar.</li>
    <li><strong>Comprueba si alternan.</strong> Filtra por esa consulta, compara dos periodos de seis semanas y mira si la URL que se lleva los clics cambia. La alternancia es la prueba: una URL dominante estable con otra recogiendo migajas no es canibalización, es una página relevante y otra tangencial.</li>
    <li><strong>Confirma la intención a mano.</strong> Abre las dos páginas y responde a una pregunta: ¿a qué vino el usuario y las dos le dan lo mismo? Si la respuesta es sí, es el mismo artículo dos veces.</li>
</ol>

<p>El atajo de buscar <code>site:tudominio.com "la consulta"</code> en Google sirve como comprobación rápida de qué páginas tienes sobre el tema, pero no dice cuál posiciona ni cómo, así que no sustituye a los pasos 2 y 3.</p>

<p>Si el sitio es grande, exporta las consultas de Search Console con más de 100 impresiones, agrupa por consulta y quédate con las que tengan dos o más URLs cuyos clics estén repartidos entre el 30 % y el 70 %. Ese rango es donde vive la alternancia; por encima del 80 % hay una ganadora clara.</p>

<h2 id="decidir">El árbol de decisión</h2>

<p>Con las dos páginas delante, solo hay cuatro salidas posibles:</p>

<ul>
    <li><strong>Fusionar y redirigir.</strong> Cuando las dos responden a lo mismo y ninguna es claramente mejor. Es la opción por defecto y la que más recupera.</li>
    <li><strong>Reenfocar una.</strong> Cuando el tema da para dos piezas distintas y el solape es de redacción, no de fondo. Se reescribe una para que responda a la intención vecina que estaba sin cubrir, y se ajustan título, H1 y enlaces internos.</li>
    <li><strong>Consolidar con canonical.</strong> Solo para duplicados técnicos: parámetros, variantes, versiones para imprimir. Si el contenido es distinto, no es esto.</li>
    <li><strong>No hacer nada.</strong> Cuando no hay perjuicio medible. Más frecuente de lo que se admite.</li>
</ul>

<p>Lo que casi nunca es la respuesta es el <code>noindex</code>. Desindexar una página con tráfico e historial para que otra brille tira a la basura las señales acumuladas sin traspasarlas: si la página no debe existir, redirige; si debe existir pero no posicionar por esa consulta, reenfócala.</p>

<h2 id="fusionar">Cómo se fusionan dos páginas bien</h2>

<p>La fusión mal hecha pierde tráfico, y es el motivo por el que mucha gente prefiere dejar la canibalización tal cual. Hecha en este orden, no lo pierde:</p>

<ol>
    <li><strong>Elige la URL que se queda</strong> por historial y enlaces, no por gusto: la que más clics acumula y más enlaces externos tiene, aunque su texto sea peor. El texto se cambia; el historial no se traslada.</li>
    <li><strong>Lleva lo mejor de la otra a la que se queda.</strong> Fusionar no es pegar los dos textos: es que la página resultante responda mejor que cualquiera de las dos. Si al terminar tiene 3.000 palabras de las cuales 1.200 se repiten, la fusión está a medias.</li>
    <li><strong>Redirección 301 de la vieja a la que se queda.</strong> Directa, sin cadenas de redirecciones intermedias.</li>
    <li><strong>Actualiza los enlaces internos.</strong> Todos los que apuntaban a la URL retirada deben apuntar ya a la definitiva. Dejar que lo resuelva la redirección funciona, pero deja el sitio lleno de saltos innecesarios; el criterio de anchors está en la <a href="/guias/enlazado-interno-y-arquitectura-web">guía de enlazado interno</a>.</li>
    <li><strong>Espera seis semanas antes de juzgar.</strong> Las primeras dos suelen bajar. Medir a los siete días y revertir es la forma más común de no arreglar nada nunca.</li>
</ol>

<h2 id="prevenir">Cómo dejar de producirla</h2>

<p>Casi toda la canibalización se genera en el momento de decidir qué escribir, no al escribir:</p>

<ul>
    <li><strong>Una intención, una página.</strong> Es la regla entera. Agrupa las consultas por lo que el usuario quiere conseguir, no por parecido de palabras.</li>
    <li><strong>Antes de publicar, busca en tu propio sitio.</strong> Treinta segundos de <code>site:</code> evitan el 90 % de los casos.</li>
    <li><strong>Mantén un inventario de contenido</strong> con URL, intención y consulta objetivo. Sin él, a los cien artículos nadie recuerda qué hay publicado.</li>
    <li><strong>Revisa al cerrar cada cluster.</strong> Los clusters de contenido son la causa número uno: al cubrir un tema a fondo es fácil escribir dos veces el mismo sub-tema. Cómo montarlos sin que pase está en la <a href="/guias/autoridad-tematica-y-clusters-de-contenido">guía de autoridad temática</a>.</li>
</ul>

<h2 id="errores">Errores al arreglarla</h2>

<ul>
    <li><strong>Fusionar por volumen de palabras.</strong> Quedarse con la página más larga en lugar de con la que tiene historial y enlaces.</li>
    <li><strong>Redirigir a la home.</strong> Cuando el destino no responde a lo mismo que la página retirada, Google trata la redirección como un soft 404 y la señal se pierde igualmente.</li>
    <li><strong>Cambiar solo el título.</strong> Retocar el <code>&lt;title&gt;</code> sin tocar el cuerpo no cambia a qué intención responde la página. Vuelve a los dos meses.</li>
    <li><strong>Arreglar cincuenta casos a la vez.</strong> Sin margen para observar, no se sabe qué funcionó. De diez en diez, con seis semanas entre tandas.</li>
    <li><strong>Confundirlo con una caída general.</strong> Si el tráfico baja en todo el sitio y no en unas consultas concretas, la causa está en otra parte: el orden para descartarlas está en la <a href="/guias/diagnosticar-caida-de-trafico-seo">guía de diagnóstico de caídas</a>.</li>
</ul>

<p>Dicho de la forma más corta posible: la canibalización no es un fallo de Google interpretando tu web, es tu web dando dos respuestas a una pregunta. Arreglarla casi siempre significa publicar menos páginas y mejores, que es la conclusión a la que llega todo el mundo con tres años de archivo a cuestas.</p>
HTML,
];
