<?php

return [
    'title' => 'Cómo posicionar una web nueva en Google: los primeros 90 días',
    'navTitle' => 'Posicionar una web nueva',
    'seoTitle' => 'Cómo posicionar una web nueva en Google',
    'description' => 'Plan de 90 días para posicionar una web nueva: qué búsquedas atacar primero, qué publicar, cómo lograr que Google la indexe y cuánto tarda de verdad.',
    'excerpt' => 'Una web nueva no compite con las grandes por las búsquedas grandes. Compite por las pequeñas que nadie ha resuelto bien, y desde ahí crece. Este es el orden de trabajo de los tres primeros meses y lo que puedes esperar en cada uno.',
    'category' => 'Método',
    'published' => '2026-09-24',
    'updated' => '2026-09-24',
    'readingMinutes' => 7,
    'words' => 1206,
    'about' => 'Posicionamiento de una web nueva en Google',
    'related' => ['analisis-de-competencia-seo', 'keyword-research-con-ia', 'google-search-console-guia', 'autoridad-tematica-y-clusters-de-contenido', 'intencion-de-busqueda-en-seo', 'menciones-de-marca-y-enlaces', 'paginas-que-google-no-indexa'],
    'toc' => [
        'expectativas' => 'Cuánto tarda de verdad',
        'antes' => 'Antes de publicar',
        'mes-1' => 'Mes 1: base técnica y primeras páginas',
        'mes-2' => 'Mes 2: completar el tema',
        'mes-3' => 'Mes 3: señales externas y ajuste',
        'ia' => 'Dónde ayuda la IA y dónde no',
        'errores' => 'Errores típicos de una web nueva',
    ],
    'faq' => [
        '¿Cuánto tarda una web nueva en aparecer en Google?' => 'Indexarse puede llevar desde unos días hasta unas semanas si la web está bien enlazada y tiene sitemap. Posicionar para búsquedas con competencia es otra cosa: lo normal es empezar a ver clics en búsquedas pequeñas entre el segundo y el cuarto mes, y tráfico apreciable a partir del sexto, según el sector y el ritmo de publicación.',
        '¿Existe el «sandbox» de Google para webs nuevas?' => 'Google ha negado siempre que exista un periodo de castigo para webs nuevas. Lo que sí ocurre es que una web sin historial ni enlaces tiene pocas señales de confianza, y eso hace que tarde en posicionar para búsquedas competidas. El efecto es parecido, pero la solución no es esperar, sino acumular esas señales.',
        '¿Cuántos artículos hay que publicar al principio?' => 'No hay una cifra mágica, pero una web que cubre un tema con veinte o treinta páginas bien enlazadas entre sí da a Google mucho más contexto que una con cinco. Importa más cubrir un tema completo que publicar mucho sobre temas dispersos.',
        '¿Conviene comprar un dominio antiguo?' => 'Solo si el dominio tiene historia limpia y del mismo tema. Un dominio caducado con enlaces de otro sector no transmite nada útil y Google trata el abuso de dominios caducados como spam. Para la mayoría de proyectos, un dominio nuevo con buen contenido es la opción más segura.',
        '¿Sirven de algo las redes sociales para el SEO de una web nueva?' => 'No como factor de posicionamiento directo, pero sí como vía de descubrimiento: generan las primeras visitas, las primeras menciones y, a veces, los primeros enlaces. En una web sin audiencia son la forma más rápida de que alguien lea lo que publicas.',
    ],
    'ctaTitle' => 'Prompts para arrancar una web desde cero',
    'ctaBody' => 'Buscar temas con poca competencia, planificar el primer cluster o redactar briefs de contenido: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO mejor valorados.',
    'body' => <<<'HTML'
<p>La mayoría de consejos de SEO están pensados para webs que ya tienen tráfico: optimizar lo que funciona, recuperar lo que cae. Una web nueva no tiene nada de eso. No tiene datos en Search Console, no tiene enlaces y Google no sabe de qué va. El trabajo de los primeros meses es darle esas tres cosas en el orden correcto.</p>

<h2 id="expectativas">Cuánto tarda de verdad</h2>

<p>Conviene saberlo antes de empezar, porque la mayoría de webs nuevas se abandonan justo antes de que empiecen a funcionar:</p>

<figure>
<table>
    <thead>
        <tr><th>Momento</th><th>Lo normal</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Semanas 1–4</strong></td><td>Las páginas se indexan. Impresiones sueltas, casi ningún clic.</td></tr>
        <tr><td><strong>Meses 2–4</strong></td><td>Primeros clics en búsquedas pequeñas y muy concretas.</td></tr>
        <tr><td><strong>Meses 4–6</strong></td><td>Algunas páginas entran en la primera página para búsquedas de competencia media.</td></tr>
        <tr><td><strong>A partir del mes 6</strong></td><td>Crecimiento más visible si el ritmo de publicación se ha mantenido.</td></tr>
    </tbody>
</table>
</figure>

<p>Varía mucho según el sector. En un nicho con poca competencia puede ir más rápido; en salud, finanzas o temas legales, bastante más lento, porque Google exige más señales de confianza.</p>

<h2 id="antes">Antes de publicar</h2>

<p>Tres decisiones que luego cuestan mucho de cambiar:</p>

<ol>
    <li><strong>Un tema, no varios.</strong> Una web nueva tiene que ser la mejor en algo pequeño antes de aspirar a algo grande. «Recetas» es inabarcable; «recetas para freidora de aire» se puede cubrir entero en unos meses.</li>
    <li><strong>Una lista de búsquedas pequeñas.</strong> Busca preguntas concretas, de cola larga, donde los resultados actuales son foros, páginas viejas o respuestas incompletas. Ahí una web nueva puede ganar. El método está en la guía de <a href="/guias/keyword-research-con-ia">keyword research con IA</a>, y cómo detectar dónde flojean los resultados actuales, en la de <a href="/guias/analisis-de-competencia-seo">análisis de la competencia SEO</a>.</li>
    <li><strong>Una estructura de URLs que aguante.</strong> Categorías claras y URLs cortas y descriptivas. Cambiarlas más adelante obliga a hacer una <a href="/guias/migracion-web-sin-perder-seo">migración</a>, aunque sea pequeña.</li>
</ol>

<h2 id="mes-1">Mes 1: base técnica y primeras páginas</h2>

<ul>
    <li><strong>Search Console desde el primer día.</strong> Verifica la propiedad de dominio y envía el sitemap. Aunque al principio no haya datos, es donde verás qué se indexa y qué no. La configuración está en la guía de <a href="/guias/google-search-console-guia">Google Search Console</a>.</li>
    <li><strong>Lo técnico mínimo.</strong> HTTPS, que el contenido esté en el HTML y no dependa de JavaScript, que las páginas carguen rápido en el móvil y que no haya un <code>noindex</code> olvidado del entorno de pruebas. Si quieres revisarlo a fondo, sigue la <a href="/guias/auditoria-seo-tecnica">auditoría técnica</a>.</li>
    <li><strong>Las páginas que explican quién eres.</strong> Sobre nosotros, contacto y autoría visible. Una web sin nadie detrás tiene muy poco de lo que Google llama <a href="/guias/eeat-experiencia-contenido-con-ia">E-E-A-T</a>.</li>
    <li><strong>Las primeras diez páginas.</strong> Una página principal del tema y nueve que respondan preguntas concretas de tu lista, enlazadas entre sí.</li>
</ul>

<h2 id="mes-2">Mes 2: completar el tema</h2>

<p>El objetivo del segundo mes es que Google vea que tu web cubre el tema entero, no un par de artículos sueltos. Es la idea de la <a href="/guias/autoridad-tematica-y-clusters-de-contenido">autoridad temática</a>:</p>

<ol>
    <li><strong>Llega a veinte o treinta páginas</strong> sobre el mismo tema, cada una con una <a href="/guias/intencion-de-busqueda-en-seo">intención de búsqueda</a> distinta.</li>
    <li><strong>Enlaza con cabeza.</strong> Cada página nueva enlaza a la principal del tema y a dos o tres relacionadas, y recibe enlaces de las que ya existían.</li>
    <li><strong>Mira las primeras impresiones.</strong> Search Console empieza a enseñar para qué consultas apareces. A menudo son búsquedas que no habías previsto: son pistas de lo siguiente que publicar.</li>
</ol>

<h2 id="mes-3">Mes 3: señales externas y ajuste</h2>

<p>Con contenido suficiente, lo que más frena a una web nueva es que nadie fuera de ella la menciona. Las formas de conseguirlo que no son spam:</p>

<ul>
    <li><strong>Directorios y perfiles legítimos de tu sector.</strong> Asociaciones profesionales, cámaras de comercio, plataformas del nicho. Si tienes negocio físico, el Perfil de Empresa de Google, como explica la guía de <a href="/guias/seo-local-con-ia">SEO local</a>.</li>
    <li><strong>Contenido que otros quieran citar.</strong> Un dato propio, una encuesta pequeña, una herramienta útil.</li>
    <li><strong>Participar donde está tu público.</strong> Foros, comunidades y redes donde puedes aportar y enlazar cuando viene a cuento.</li>
</ul>

<p>La estrategia completa está en la guía de <a href="/guias/menciones-de-marca-y-enlaces">menciones de marca y enlaces</a>. Al final del tercer mes, revisa las páginas con impresiones y pocos clics: suelen necesitar un título mejor o una respuesta más clara arriba.</p>

<h2 id="ia">Dónde ayuda la IA y dónde no</h2>

<p>La IA acelera mucho el arranque de una web, sobre todo en tareas de preparación:</p>

<ul>
    <li><strong>Sí:</strong> agrupar búsquedas por intención, proponer la estructura del tema, redactar briefs, revisar si un borrador responde a la pregunta o detectar huecos frente a la competencia.</li>
    <li><strong>Con cuidado:</strong> redactar borradores. Sirven si les añades experiencia propia, datos y revisión, como explica la guía de <a href="/guias/escribir-contenido-seo-con-ia">contenido SEO con IA</a>.</li>
    <li><strong>No:</strong> publicar cien artículos generados en una semana. Una web nueva sin historial que publica en masa textos sin nada propio es exactamente el patrón que Google trata como abuso de contenido a escala.</li>
</ul>

<h2 id="errores">Errores típicos de una web nueva</h2>

<ul>
    <li><strong>Atacar búsquedas imposibles.</strong> Competir por la palabra principal del sector desde el primer día solo produce frustración.</li>
    <li><strong>Publicar de todo un poco.</strong> Diez temas con tres artículos cada uno pesan mucho menos que un tema con treinta.</li>
    <li><strong>Rendirse en el mes tres.</strong> Justo cuando empiezan las impresiones. Los datos de los primeros meses son pequeños, pero la tendencia es lo que cuenta.</li>
    <li><strong>No mirar la indexación.</strong> Si las páginas no entran en el índice, nada de lo demás importa. Las causas habituales están en la guía de <a href="/guias/paginas-que-google-no-indexa">páginas que Google no indexa</a>.</li>
    <li><strong>Comprar enlaces.</strong> Es la tentación típica cuando el tráfico no llega, y en una web sin historial el riesgo de acción manual es mayor que el beneficio.</li>
</ul>

<p>Resumido: una web nueva gana empezando pequeño. Un tema acotado, búsquedas concretas que nadie resuelve bien, veinte o treinta páginas bien enlazadas y paciencia para llegar al sexto mes publicando con constancia.</p>
HTML,
];
