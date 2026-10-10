<?php

return [
    'title' => 'Los skills de IA más virales de 2026 y cuáles merecen la pena',
    'navTitle' => 'Skills más virales',
    'seoTitle' => 'Los skills de IA más virales de 2026',
    'description' => 'Superpowers, las reglas de Karpathy, los skills de documentos y las modas de imagen: qué hacen los skills más virales de 2026 y cuáles valen la pena.',
    'excerpt' => 'Hay miles de skills en GitHub y la mayoría están abandonados. Estos son los que de verdad se han extendido este año, qué hace cada uno y la versión en español que puedes usar hoy.',
    'category' => 'Herramientas',
    'published' => '2026-10-10',
    'updated' => '2026-10-10',
    'readingMinutes' => 11,
    'words' => 1770,
    'about' => 'Claude Code',
    'related' => ['que-son-los-skills-de-claude-code', 'como-crear-un-skill-para-claude-code', 'plugins-y-mcp-en-claude-code'],
    'toc' => [
        'como-medimos' => 'Qué significa «viral» en un skill',
        'desarrollo' => 'Programar: Superpowers y las reglas de Karpathy',
        'diseno' => 'Diseño: interfaces que no parezcan hechas por IA',
        'documentos' => 'Documentos: Word, Excel, PowerPoint y PDF',
        'video' => 'Vídeo: cortar, recortar y reutilizar',
        'marketing' => 'Marketing: el paquete más popular fuera del código',
        'investigacion' => 'Investigación y datos',
        'imagen' => 'Las modas de imagen que no son skills',
        'elegir' => 'Cómo elegir sin llenarte de skills',
    ],
    'faq' => [
        '¿Qué skill de Claude es el más popular?' => 'Superpowers, de Jesse Vincent, aparece primero en casi todas las listas de 2026. Es un conjunto de skills que obliga a trabajar en orden: pensar la idea, planificar, escribir los tests, programar y revisar. Las cifras de estrellas en GitHub que citan los distintos artículos no coinciden entre sí, pero todos lo ponen arriba.',
        '¿Las reglas de Karpathy las escribió Andrej Karpathy?' => 'No. Es un skill de la comunidad que resume en reglas los comentarios públicos de Karpathy sobre los errores típicos de la IA al programar: dar por buenos supuestos sin comprobarlos, tocar código que nadie pidió cambiar o hacer cambios más grandes de lo necesario. Se ha hecho popular por su nombre, pero lo útil es el contenido.',
        '¿Sirven estos skills fuera de Claude?' => 'El formato SKILL.md es un estándar abierto, así que la mayoría funcionan también en otros asistentes que lo admiten. Y aunque tu herramienta no cargue skills, el texto de las instrucciones se puede pegar como prompt. Cada ficha de ia-skills se puede descargar como SKILL.md o copiar como prompt.',
        '¿Es seguro instalar un skill que he encontrado en GitHub?' => 'Un skill es texto, pero ese texto puede pedirle al asistente que ejecute comandos con tus permisos. Léelo entero antes de instalarlo, igual que leerías un script antes de ejecutarlo, y desconfía de los que piden descargar cosas o enviar datos a direcciones externas sin explicar por qué.',
        '¿Cuántos skills debería tener instalados?' => 'Los que uses de verdad. Solo se carga el que la tarea necesita, así que tener muchos no ralentiza nada, pero si dos skills tienen descripciones parecidas el asistente puede elegir el que no esperabas. Diez bien elegidos rinden más que cien instalados por si acaso.',
    ],
    'ctaTitle' => 'Todos los skills virales, en español y listos para usar',
    'ctaBody' => 'Las 70 fichas de esta guía están en el catálogo, con su prompt completo y la opción de descargarlas como SKILL.md. Si trabajas con código empieza por <a href="/profesiones/desarrollo">Desarrollo</a>; si tu día son campañas y contenido, por <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>En GitHub hay ya miles de skills para Claude y otros asistentes. La mayoría son pruebas de un fin de semana que nadie mantiene. Unos pocos, en cambio, se han copiado, compartido y recomendado tanto que se han convertido en la forma estándar de trabajar para mucha gente. Esta guía recoge esos pocos: qué hace cada uno, para quién sirve y dónde está la versión en español que hemos preparado en el catálogo.</p>

<p>Si no tienes claro qué es un skill, empieza por <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills de Claude Code</a>. En dos frases: un skill es un archivo de instrucciones que el asistente carga solo cuando la tarea lo necesita, y sirve para que haga algo siempre igual de bien sin que tengas que volver a explicárselo.</p>

<h2 id="como-medimos">Qué significa «viral» en un skill</h2>

<p>Para esta lista hemos cruzado los rankings más citados de 2026 con las estrellas de GitHub de cada repositorio. Un aviso antes de seguir: las cifras no cuadran entre fuentes. Al skill más popular, Superpowers, unos artículos le atribuyen unas 40.000 estrellas y otros más de 200.000, medidas en fechas distintas. Por eso no damos un número exacto para cada uno. Lo que sí es fiable es la coincidencia: los nombres de esta guía aparecen en casi todas las listas.</p>

<p>Los hemos agrupado por el tipo de trabajo que resuelven, no por popularidad, porque lo que te interesa es cuál encaja con lo que haces.</p>

<h2 id="desarrollo">Programar: Superpowers y las reglas de Karpathy</h2>

<p>Los dos skills más extendidos del año son de programación y comparten una idea: la IA programa peor cuando se lanza a escribir código sin pensar antes.</p>

<p><strong>Superpowers</strong>, de Jesse Vincent, es un conjunto de skills que impone un orden: primero se discute la idea, luego se diseña, se escribe un plan, se escriben los tests, se programa y se revisa. Parece burocracia, pero evita el error más caro de trabajar con IA, que es descubrir a la tercera hora que el asistente entendió otra cosa. Nuestra versión en español es el <a href="/skills/flujo-de-desarrollo-completo-de-la-lluvia-de-ideas-a-la-revision-final">flujo de desarrollo completo, de la lluvia de ideas a la revisión final</a>, y el mismo repositorio incluye un método de <a href="/skills/depuracion-sistematica-por-hipotesis-antes-de-tocar-el-codigo">depuración por hipótesis antes de tocar el código</a> que merece la pena por sí solo.</p>

<p>Las <strong>reglas de Karpathy</strong> son un skill de la comunidad, no del propio Andrej Karpathy, que convierte en normas sus críticas a cómo programan los modelos: comprobar los supuestos en lugar de inventarlos, hacer el cambio más pequeño posible, no tocar lo que nadie pidió y validar antes de ejecutar. Es probablemente el skill con mejor relación entre lo poco que ocupa y lo mucho que cambia el resultado. Está en el catálogo como <a href="/skills/reglas-de-karpathy-para-programar-con-ia-sin-romper-nada">reglas de Karpathy para programar con IA sin romper nada</a>.</p>

<p>Alrededor de esos dos hay una familia de skills de revisión que también circulan mucho:</p>

<ul>
    <li><a href="/skills/revision-de-codigo-con-niveles-de-severidad-p0-a-p3">Revisión de código con niveles de severidad P0 a P3</a>, para que el informe distinga lo que bloquea de lo que es una sugerencia.</li>
    <li><a href="/skills/revision-de-seguridad-con-owasp-top-10-y-asvs-como-checklist">Revisión de seguridad con OWASP Top 10 y ASVS</a> y su complemento preventivo, <a href="/skills/generar-codigo-seguro-desde-el-principio-inyeccion-control-de-acceso-y-deserializacion">generar código seguro desde el principio</a>.</li>
    <li><a href="/skills/crear-pull-requests-con-titulo-descripcion-y-checklist-de-ci-impecables">Crear pull requests con título, descripción y lista de comprobación</a>, uno de los más instalados por equipos.</li>
    <li><a href="/skills/patrones-multiagente-orquestador-trabajadores-en-paralelo-y-revisor">Patrones multiagente</a>, para repartir una tarea grande entre varios agentes con un revisor al final.</li>
</ul>

<p>Dos más son útiles aunque no escribas código: <a href="/skills/ingenieria-de-contexto-que-dar-a-la-ia-que-dejar-fuera-y-en-que-orden">ingeniería de contexto</a>, que enseña qué darle a la IA y qué dejar fuera, y la <a href="/skills/autoevaluacion-de-confianza-que-la-ia-puntue-cuanto-se-fia-de-su-respuesta">autoevaluación de confianza</a>, que obliga al modelo a decir cuánto se fía de su propia respuesta.</p>

<h2 id="diseno">Diseño: interfaces que no parezcan hechas por IA</h2>

<p>El skill de diseño más citado es <strong>frontend-design</strong>, del repositorio oficial de Anthropic. Ataca un problema que cualquiera ha visto: las páginas generadas por IA se parecen todas, con los mismos degradados, las mismas tarjetas redondeadas y la misma tipografía. El skill obliga a decidir una dirección visual antes de escribir una línea. Nuestra adaptación es <a href="/skills/disenar-interfaces-con-personalidad-que-no-parezcan-hechas-por-ia">diseñar interfaces con personalidad que no parezcan hechas por IA</a>.</p>

<p>Le siguen skills que explican sus decisiones en lugar de solo tomarlas, como <a href="/skills/elegir-paleta-de-color-tipografias-y-tipo-de-grafico-justificando-cada-decision">elegir paleta, tipografías y tipo de gráfico justificando cada decisión</a>, y auditores que revisan sin reescribir: la <a href="/skills/auditoria-de-diseno-contra-estandares-profesionales-sin-reescribir-componentes">auditoría de diseño contra estándares profesionales</a> y la <a href="/skills/auditoria-de-accesibilidad-wcag-22-de-una-pantalla">auditoría de accesibilidad WCAG 2.2</a>.</p>

<h2 id="documentos">Documentos: Word, Excel, PowerPoint y PDF</h2>

<p>Los skills de documentos de Anthropic son de los más usados fuera del mundo del desarrollo, porque resuelven algo muy concreto: que la IA entregue un archivo de verdad y no un texto que luego tienes que maquetar tú. Están en el repositorio oficial con licencia de código disponible, no de código abierto, así que se pueden usar pero no redistribuir modificados.</p>

<p>En el catálogo tienes el equivalente por tarea: un <a href="/skills/informe-en-word-con-estructura-profesional-estilos-y-tabla-de-contenidos">informe en Word con estilos y tabla de contenidos</a>, un <a href="/skills/modelo-financiero-en-excel-con-supuestos-formulas-y-escenarios">modelo financiero en Excel con supuestos y escenarios</a>, una <a href="/skills/presentacion-de-powerpoint-guion-de-diapositivas-mensajes-y-notas-del-orador">presentación de PowerPoint con notas del orador</a> y la <a href="/skills/extraer-datos-de-pdfs-de-facturas-y-contratos-a-una-tabla">extracción de datos de facturas y contratos en PDF</a>.</p>

<p>Del mismo repositorio sale <strong>skill-creator</strong>, el skill que ayuda a escribir skills. Si te convence la idea, nuestra versión es <a href="/skills/crear-tu-propio-skill-de-claude-con-skillmd-nombre-descripcion-y-pasos">crear tu propio skill con SKILL.md</a>, y la guía <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill para Claude Code</a> explica el proceso paso a paso.</p>

<h2 id="video">Vídeo: cortar, recortar y reutilizar</h2>

<p>La sorpresa del año ha sido el vídeo. Una serie de skills pequeños, cada uno con una sola tarea, se ha extendido entre creadores porque ahorran justo la parte más tediosa de la edición:</p>

<ul>
    <li><a href="/skills/guion-de-corte-eliminar-silencios-muletillas-y-repeticiones-de-una-transcripcion">Quitar silencios, muletillas y repeticiones</a> respetando las pausas que sí son intencionadas.</li>
    <li><a href="/skills/detectar-los-momentos-virales-de-un-video-largo-y-convertirlos-en-clips-verticales-916">Detectar los mejores momentos de un vídeo largo</a> y convertirlos en clips verticales con subtítulos.</li>
    <li><a href="/skills/plan-de-zooms-y-empujes-de-camara-para-videos-de-cabeza-parlante">Planificar zooms</a> y <a href="/skills/buscador-de-b-roll-que-recurso-visual-poner-en-cada-momento-del-guion">buscar recursos visuales para cada momento del guion</a>.</li>
    <li><a href="/skills/guion-y-brief-tecnico-para-un-video-explicativo-animado-con-remotion">Vídeos explicativos con Remotion</a>, que se programan en lugar de editarse.</li>
</ul>

<p>A eso se suman dos clásicos del contenido: los <a href="/skills/ganchos-de-los-3-primeros-segundos-para-shorts-reels-y-tiktok">ganchos de los tres primeros segundos</a> y <a href="/skills/reutilizar-un-video-largo-en-10-piezas-linkedin-hilo-newsletter-y-carrusel">reutilizar un vídeo largo en diez piezas</a> para otras redes.</p>

<h2 id="marketing">Marketing: el paquete más popular fuera del código</h2>

<p>El paquete de skills de marketing de Corey Haines es el más popular de los que no tienen nada que ver con programar. Reúne una veintena de tareas de crecimiento con un enfoque muy práctico: cada skill parte de una página o un dato real y devuelve cambios concretos, no consejos genéricos.</p>

<p>Las versiones en español más útiles son la <a href="/skills/auditoria-cro-de-una-pagina-con-hipotesis-de-mejora-priorizadas">auditoría de conversión con hipótesis priorizadas</a>, el <a href="/skills/copy-de-pagina-de-inicio-orientado-a-conversion">texto de la página de inicio</a>, la <a href="/skills/secuencia-de-emails-de-bienvenida-y-activacion-para-nuevos-usuarios">secuencia de emails de bienvenida</a>, la <a href="/skills/disenar-la-pagina-de-precios-estructura-de-planes-anclaje-y-objeciones">página de precios</a> y las <a href="/skills/paginas-de-comparacion-contra-competidores-x-vs-y-y-alternativas-a-x">páginas de comparación con la competencia</a>.</p>

<h2 id="investigacion">Investigación y datos</h2>

<p>En investigación, lo que más se ha compartido son skills que obligan a citar fuentes en lugar de inventarlas. La <a href="/skills/busqueda-de-articulos-academicos-y-redaccion-con-citas-verificables">búsqueda de artículos académicos con citas verificables</a> y la <a href="/skills/investigacion-profunda-autonoma-preguntas-fuentes-contraste-y-sintesis">investigación profunda en varias fases</a> son las dos más pedidas, junto con la <a href="/skills/verificacion-de-afirmaciones-de-un-texto-con-nivel-de-confianza">verificación de afirmaciones con nivel de confianza</a>.</p>

<p>Para datos, el favorito es el <a href="/skills/resumen-estadistico-completo-de-un-csv-distribuciones-correlaciones-y-anomalias">resumen estadístico de un CSV</a>: le pasas un archivo y te devuelve distribuciones, correlaciones y valores raros antes de que tú hayas abierto la hoja. Y para terminar el trabajo, <a href="/skills/convertir-datos-crudos-en-un-informe-ejecutivo-de-una-pagina">convertir datos crudos en un informe ejecutivo de una página</a>.</p>

<h2 id="imagen">Las modas de imagen que no son skills</h2>

<p>Si has buscado «prompts virales» seguramente te has encontrado otra cosa: estilos de imagen que se extienden por redes en pocos días. No son skills de GitHub sino modas, pero funcionan igual de bien convertidos en instrucciones reutilizables. En el catálogo los hemos montado así: Claude te hace las preguntas necesarias y te devuelve el prompt final, en inglés, listo para pegar en el generador de imágenes que uses.</p>

<p>Los más compartidos este año: el <a href="/skills/mini-yo-en-un-diorama-tu-version-en-miniatura-dentro-de-un-mundo-a-escala">mini-yo dentro de un diorama</a>, el <a href="/skills/poster-de-viaje-en-doble-exposicion-con-ia-tu-silueta-llena-de-paisaje">póster de viaje en doble exposición</a>, el <a href="/skills/retrato-old-money-para-perfil-profesional-elegancia-discreta-generada-con-ia">retrato «old money»</a>, la <a href="/skills/tu-yo-de-la-infancia-y-tu-yo-actual-juntos-en-la-misma-foto-con-ia">foto con tu yo de la infancia</a> y los <a href="/skills/video-estilo-plastilina-y-stop-motion-para-un-anuncio-de-tu-producto">vídeos de plastilina</a>. Antes de publicar nada, repasa <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">qué derechos tienes sobre las imágenes generadas con IA</a>: imitar el estilo reconocible de un estudio o usar la foto de otra persona sin permiso sigue siendo un problema aunque lo haya hecho una máquina.</p>

<h2 id="elegir">Cómo elegir sin llenarte de skills</h2>

<p>Que un skill sea viral no significa que te sirva a ti. Tres criterios para decidir:</p>

<ol>
    <li><strong>Que resuelva algo que haces cada semana.</strong> Un skill que usas una vez al año es un prompt guardado con más pasos.</li>
    <li><strong>Que lo hayas leído entero.</strong> Un skill puede pedirle al asistente que ejecute comandos con tus permisos. Si no entiendes lo que hace, no lo instales.</li>
    <li><strong>Que no compita con otro.</strong> Si tienes dos skills de revisión de código con descripciones parecidas, el asistente elegirá uno y no siempre el que esperas. Quédate con el mejor.</li>
</ol>

<p>Lo más razonable es empezar por uno de tu área, usarlo una semana y añadir el siguiente cuando el primero se haya vuelto costumbre. Para un desarrollador, las reglas de Karpathy. Para quien hace contenido, el de cortar silencios. Para todos los demás, el informe ejecutivo de una página.</p>
HTML,
];
