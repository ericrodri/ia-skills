<?php

return [
    'title' => 'Automatizar sin programar: n8n, Make y Zapier con IA dentro',
    'navTitle' => 'n8n, Make y Zapier',
    'seoTitle' => 'n8n vs Make vs Zapier: automatizar con IA sin programar',
    'description' => 'Cuál de las tres elegir según lo que pagas y lo que sabes, el primer flujo que conviene montar y cuándo dejar decidir al modelo en vez de fijar las reglas.',
    'excerpt' => 'Estas herramientas llevan años moviendo datos de una aplicación a otra. Lo que cambió al meterles un modelo dentro es que ahora pueden automatizar tareas que exigen criterio, y ahí es donde empiezan a romperse de formas nuevas.',
    'category' => 'Herramientas',
    'published' => '2026-09-09',
    'updated' => '2026-09-09',
    'readingMinutes' => 12,
    'words' => 2026,
    'about' => 'Plataformas de automatización sin código (n8n, Make, Zapier) con modelos de lenguaje integrados para automatizar procesos de trabajo',
    'related' => ['automatizar-tareas-con-ia-en-el-trabajo', 'que-es-un-agente-de-ia', 'medir-si-la-ia-ahorra-tiempo'],
    'toc' => [
        'que-cambia' => 'Qué cambió cuando les metieron un modelo dentro',
        'tres-opciones' => 'Las tres opciones, sin empate',
        'coste' => 'Cómo se paga cada una y por qué la factura sorprende',
        'primer-flujo' => 'El primer flujo que conviene montar',
        'flujo-o-agente' => 'Flujo fijo o agente: cuándo dejar decidir al modelo',
        'errores' => 'Los cinco errores que rompen flujos en producción',
        'gobierno' => 'Quién es el dueño del flujo',
        'cuando-codigo' => 'Cuándo esto ya no basta',
    ],
    'faq' => [
        '¿Qué diferencia hay entre n8n, Make y Zapier?' => 'Se diferencian en el precio, en la curva de aprendizaje y en dónde se ejecutan. Zapier es el más fácil de empezar y el más caro cuando el volumen crece, con un catálogo de integraciones muy amplio. Make tiene un editor visual que hace legibles los flujos con muchas ramas y sale más barato por operación. n8n es de código abierto, se puede instalar en tu propio servidor —lo que significa que los datos no pasan por un tercero y que el coste no crece con el volumen de ejecuciones— y es el más potente para agentes de IA, a cambio de exigir bastante más criterio técnico. Para un equipo sin perfil técnico, Make suele ser el punto de equilibrio.',
        '¿Cuál es mejor para crear agentes de IA sin código?' => 'n8n, con diferencia, y no por casualidad: su modelo de nodos encaja bien con la idea de un agente que dispone de varias herramientas y decide cuál usar en cada paso. Las tres plataformas integran módulos de modelos de lenguaje, pero n8n permite construir el bucle completo —el agente recibe una petición, elige entre las herramientas que le has dado, ejecuta y revisa el resultado— con más control sobre lo que puede y no puede hacer. Make y Zapier van bien cuando el modelo es un paso más dentro de un flujo que tú has fijado de antemano.',
        '¿Cuánto cuesta automatizar con estas herramientas?' => 'Los planes de entrada de las opciones en la nube se mueven en el orden de veinte a treinta euros al mes, pero el precio de la etiqueta engaña porque lo que se factura son operaciones o ejecuciones, no flujos. Un flujo que se dispara con cada correo recibido consume muchísimo más que uno que se ejecuta una vez al día, y ese detalle es el que produce las facturas inesperadas del segundo mes. n8n autoalojado cambia el modelo por completo: pagas el servidor —unos pocos euros al mes— y las ejecuciones son ilimitadas, a cambio de ocuparte del mantenimiento. Aparte va el coste de las llamadas al modelo de IA, que se factura por tokens.',
        '¿Merece la pena n8n autoalojado o mejor la nube?' => 'La nube, salvo que se cumpla alguna de estas tres condiciones: mucho volumen de ejecuciones, datos que no pueden pasar por un proveedor externo, o alguien en el equipo que ya administra servidores. Autoalojar implica hacerse cargo de las actualizaciones, de las copias de seguridad y de que el servicio siga levantado, y un flujo crítico caído un lunes por la mañana porque nadie actualizó el servidor cuesta más que la suscripción ahorrada. La ruta razonable es empezar en la nube, comprobar que el flujo aporta valor y plantearse la mudanza cuando la factura o el cumplimiento lo justifiquen.',
        '¿Qué tareas conviene automatizar primero con estas herramientas?' => 'Las que tienen tres propiedades juntas: se repiten muchas veces, siguen un criterio que puedes escribir y su fallo se detecta rápido. Clasificar y etiquetar correo entrante, pasar los datos de un formulario al CRM enriquecidos con un resumen, avisar en el chat del equipo cuando un ticket cumple ciertas condiciones, generar el primer borrador de una respuesta que después revisa una persona. Lo que no conviene automatizar primero es nada que envíe algo al exterior sin revisión humana, ni nada cuyo fallo tarde semanas en notarse, como la limpieza de un dato que otro proceso usará más adelante.',
        '¿Puede la IA de estos flujos equivocarse y qué pasa entonces?' => 'Se equivoca, y el problema es que un flujo automatizado se equivoca muchas veces antes de que nadie lo mire. Un paso con modelo de lenguaje puede clasificar mal, inventar un campo o devolver un formato distinto al esperado, y a diferencia de un error de programación no falla de forma limpia: devuelve algo plausible que el resto del flujo acepta. La protección es de diseño, no de vigilancia: validar la salida del modelo antes de usarla, obligarle a responder con un conjunto cerrado de valores, y dejar un registro consultable de lo que hizo el flujo para que un error se pueda encontrar y deshacer.',
    ],
    'ctaTitle' => 'Los flujos que de verdad se montan, por profesión',
    'ctaBody' => 'Los procesos que mejor se automatizan son los que tienen entrada constante: cualificación de leads en <a href="/profesiones/ventas">Ventas</a>, cribado y seguimiento en <a href="/profesiones/rrhh">RRHH</a>, clasificación de tickets en <a href="/profesiones/customer-support">Customer Support</a> y facturación en <a href="/profesiones/finanzas">Finanzas</a>.',
    'body' => <<<'HTML'
<p>Estas herramientas llevan casi una década haciendo lo mismo: cuando pasa algo en una aplicación, hacer que pase otra cosa en otra. Formulario nuevo, fila en la hoja de cálculo. Factura pagada, mensaje en el chat. Útil, aburrido y sin ninguna necesidad de inteligencia.</p>

<p>Lo que cambió al meterles un modelo de lenguaje dentro es la clase de tarea que alcanzan. <strong>Un flujo puede ahora automatizar trabajo que exige criterio</strong> —leer un correo y decidir de qué va, resumir una llamada, redactar una respuesta— y ahí es donde empieza a resultar valioso y a romperse de formas nuevas.</p>

<p>Esta guía es la capa de herramienta. La decisión previa —<em>qué</em> automatizar y qué no tocar— está en la guía sobre <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA en el trabajo</a>, y conviene tenerla resuelta antes de abrir ninguna de las tres: la causa más común de automatización inútil no es elegir mal la plataforma, es automatizar la tarea equivocada con la plataforma correcta.</p>

<h2 id="que-cambia">Qué cambió cuando les metieron un modelo dentro</h2>

<p>Antes, para que un flujo tomara una decisión, había que escribir la regla completa por adelantado: <em>si el asunto contiene «factura», entonces…</em>. Funciona hasta que alguien escribe «recibo», y en la práctica siempre alguien escribe «recibo».</p>

<p>Con un modelo en medio, el paso pasa a ser: <em>lee este correo y dime si trata de facturación, de soporte o de ventas</em>. Eso desbloquea tres categorías de trabajo que antes no eran automatizables:</p>

<ul>
    <li><strong>Clasificar por sentido</strong> en lugar de por palabras exactas.</li>
    <li><strong>Extraer datos de texto desordenado</strong>: fechas, importes y nombres de un correo escrito por una persona con prisa.</li>
    <li><strong>Redactar</strong> el primer borrador de algo que luego se revisa.</li>
</ul>

<p>Y aparece un problema nuevo que hay que entender antes de montar nada. <strong>Un paso programado falla de forma limpia y un paso con modelo falla de forma plausible.</strong> Si una regla no encuentra el campo que buscaba, el flujo se detiene con un error y alguien se enteran. Si el modelo no encuentra el importe, es capaz de devolver un número razonable que se parece a un importe, y el resto del flujo lo acepta sin protestar. El error no se detiene: se propaga.</p>

<p>De esa asimetría sale casi todo el diseño sensato en esta materia.</p>

<h2 id="tres-opciones">Las tres opciones, sin empate</h2>

<figure>
<table>
    <thead>
        <tr><th></th><th>Zapier</th><th>Make</th><th>n8n</th></tr>
    </thead>
    <tbody>
        <tr><td>Curva de entrada</td><td>La más suave</td><td>Media</td><td>La más exigente</td></tr>
        <tr><td>Editor</td><td>Lista de pasos</td><td>Lienzo visual con ramas</td><td>Nodos, con opción de código</td></tr>
        <tr><td>Integraciones</td><td>El catálogo más amplio</td><td>Amplio</td><td>Amplio, más nodo HTTP genérico</td></tr>
        <tr><td>Coste al crecer</td><td>El más caro</td><td>Intermedio</td><td>Plano si lo autoalojas</td></tr>
        <tr><td>Autoalojable</td><td>No</td><td>No</td><td><strong>Sí</strong></td></tr>
        <tr><td>Agentes de IA</td><td>Básico</td><td>Correcto</td><td><strong>El más completo</strong></td></tr>
        <tr><td>Elígelo si…</td><td>Quieres el primer flujo funcionando esta tarde</td><td>Tus procesos tienen condiciones y ramas</td><td>Hay volumen, datos sensibles o alguien técnico</td></tr>
    </tbody>
</table>
</figure>

<p>Traducido a recomendación, que es lo que casi nadie se atreve a dar:</p>

<p><strong>Si no hay nadie técnico en el equipo, Make.</strong> Es el punto de equilibrio real: el lienzo visual hace que un proceso con condiciones se pueda leer de un vistazo seis meses después, cosa que la lista de pasos de Zapier no consigue, y el coste por operación no se dispara igual.</p>

<p><strong>Si el objetivo es probar la idea hoy, Zapier.</strong> Su ventaja es que la integración que necesitas casi seguro existe. Como plataforma para quedarse es cara, pero para validar en una tarde si el flujo aporta algo, esa caridad es irrelevante.</p>

<p><strong>Si hay volumen, datos que no deben salir o intención de construir agentes, n8n.</strong> Es la única de las tres que se puede ejecutar en tu propia infraestructura, lo que la convierte en la respuesta cuando el departamento legal ha bloqueado enviar datos de clientes a un tercero —el mismo razonamiento que hay detrás de la <a href="/guias/ia-local-privada-en-tu-ordenador">IA local</a>—. Y es la que mejor soporta un agente al que le das varias herramientas y dejas decidir.</p>

<h2 id="coste">Cómo se paga cada una y por qué la factura sorprende</h2>

<p>El error de cálculo es siempre el mismo: <strong>se factura por ejecuciones u operaciones, no por flujos</strong>. Dos automatizaciones aparentemente similares pueden diferenciarse en dos órdenes de magnitud según cómo se disparen.</p>

<figure>
<table>
    <thead>
        <tr><th>Disparador</th><th>Ejecuciones al mes</th><th>Comentario</th></tr>
    </thead>
    <tbody>
        <tr><td>Cada correo recibido</td><td>Miles</td><td>El clásico que revienta el plan de entrada</td></tr>
        <tr><td>Comprobación cada 5 minutos</td><td>~8.600</td><td>Consume aunque no haya nada que hacer</td></tr>
        <tr><td>Cada formulario enviado</td><td>Docenas o cientos</td><td>Proporcional al negocio, predecible</td></tr>
        <tr><td>Una vez al día</td><td>~30</td><td>Prácticamente gratis en cualquier plan</td></tr>
    </tbody>
</table>
</figure>

<p>Dos medidas bajan la factura sin quitar funcionalidad. La primera: <strong>filtrar lo antes posible</strong>. Si el flujo solo actúa sobre el 5 % de los correos, el filtro tiene que ser el primer paso y no el tercero, porque lo que se paga son los pasos ejecutados. La segunda: <strong>agrupar en lote lo que no es urgente</strong>. Un proceso que revisa todo a las siete de la mañana cuesta una ejecución diaria en lugar de doce mil.</p>

<p>Y aparte va el coste del modelo, que se factura por tokens y suele ser el menor de los dos hasta que alguien decide pasarle el documento entero al modelo en cada ejecución. Como orden de magnitud: clasificar un correo son céntimos de céntimo; resumir un PDF de cien páginas cuatro mil veces al mes, no.</p>

<h2 id="primer-flujo">El primer flujo que conviene montar</h2>

<p>No el más útil: el que más enseña con menos riesgo. Tiene que cumplir cuatro condiciones —volumen alto, criterio escribible, error visible al momento y <strong>ninguna salida al exterior</strong>—.</p>

<p>El que casi siempre cumple las cuatro es <em>clasificar y enrutar entrada</em>. La forma canónica:</p>

<pre><code>1. DISPARADOR   Llega un correo a soporte@ / un formulario nuevo
2. FILTRO       Descartar notificaciones automáticas y copias
3. MODELO       Clasificar en: facturación | incidencia | comercial | otro
                Extraer: cliente, urgencia (alta/media/baja), resumen en 1 frase
4. VALIDACIÓN   ¿La categoría es una de las cuatro? ¿La urgencia, una de las tres?
                Si no → etiquetar "revisar a mano" y parar
5. ACCIÓN       Etiquetar, asignar responsable y anotar en la hoja de registro
6. AVISO        Solo si urgencia = alta, mensaje al canal del equipo</code></pre>

<p>El paso 4 es el que separa un flujo que aguanta de uno que hay que desmontar en un mes, y es el que casi nadie pone. Sin validación, el día que el modelo devuelva «facturación urgente» en lugar de una de las cuatro categorías, el flujo escribirá esa cadena en el campo y ninguna vista lo mostrará bien.</p>

<p>El prompt del paso 3, escrito para ser validable:</p>

<pre><code>Clasifica este mensaje. Responde SOLO con un objeto JSON con
exactamente estas cuatro claves y ningún texto adicional:

{
  "categoria": una de ["facturacion","incidencia","comercial","otro"],
  "urgencia": una de ["alta","media","baja"],
  "cliente": nombre si aparece, o null,
  "resumen": una frase de menos de 20 palabras
}

Si dudas entre dos categorías, usa "otro".
No inventes el nombre del cliente: si no aparece, pon null.

MENSAJE:
[...]</code></pre>

<p>Las tres últimas instrucciones son las que se ganan a base de disgustos. Cerrar el conjunto de valores permite validar. Dar una salida explícita para la duda evita que el modelo fuerce una categoría. Y prohibir expresamente inventar el cliente es necesario porque, si no se prohíbe, lo deduce del dominio del correo con una seguridad admirable.</p>

<h2 id="flujo-o-agente">Flujo fijo o agente: cuándo dejar decidir al modelo</h2>

<p>Todas las plataformas ofrecen ya la variante «agente»: en lugar de encadenar pasos, le das al modelo un objetivo y un conjunto de herramientas y decide él la secuencia. Suena mejor y casi nunca es lo que conviene.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Flujo fijo</th><th>Agente</th></tr>
    </thead>
    <tbody>
        <tr><td>Quién decide el orden</td><td>Tú, al montarlo</td><td>El modelo, en cada ejecución</td></tr>
        <tr><td>Dos ejecuciones iguales</td><td>Hacen lo mismo</td><td>Pueden hacer cosas distintas</td></tr>
        <tr><td>Depuración</td><td>Miras qué paso falló</td><td>Reconstruyes qué decidió y por qué</td></tr>
        <tr><td>Coste</td><td>Predecible</td><td>Variable, a veces mucho</td></tr>
        <tr><td>Encaja cuando</td><td>El proceso es conocido</td><td>La entrada es imprevisible y las rutas, muchas</td></tr>
    </tbody>
</antml>
</table>
</figure>

<p>La regla que evita casi todos los problemas: <strong>si eres capaz de dibujar el proceso, no uses un agente</strong>. Un agente se justifica cuando dibujarlo exigiría cincuenta ramas, y a cambio aceptas que dos ejecuciones idénticas no garantizan el mismo resultado. Lo que hay detrás del concepto está desarrollado en la guía sobre <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>

<p>Y una precaución que no es opcional cuando se le dan herramientas a un modelo: <strong>las herramientas que se le entregan deben ser de solo lectura o de efecto reversible</strong>. Un agente con permiso para enviar correos, borrar registros o mover dinero es una decisión que hay que tomar despierto, no un ajuste que se activa por probar.</p>

<h2 id="errores">Los cinco errores que rompen flujos en producción</h2>

<ol>
    <li><strong>No validar la salida del modelo.</strong> El error madre, del que salen la mitad de los demás. Todo lo que devuelva el modelo se comprueba antes de usarse.</li>
    <li><strong>Automatizar el envío al exterior el primer día.</strong> Un flujo que responde solo a clientes es un flujo que se disculpa solo ante clientes. Fase uno: el flujo prepara el borrador. Fase dos, cuando lleve semanas acertando: se plantea el envío.</li>
    <li><strong>Ignorar el reintento.</strong> Cuando una API falla, la plataforma reintenta, y si el paso no es idempotente se duplica la factura, el ticket o el mensaje. Hay que preguntarse qué pasa si el flujo se ejecuta dos veces con la misma entrada.</li>
    <li><strong>No dejar registro.</strong> Un flujo sin bitácora de qué hizo y con qué datos es imposible de auditar y de deshacer. Una hoja con fecha, entrada, decisión y resultado basta, y es lo primero que se agradece.</li>
    <li><strong>Dejar el flujo sin dueño.</strong> Los flujos se rompen solos cuando la aplicación del otro lado cambia su API o alguien renombra una columna. Sin nadie que vigile, el flujo falla en silencio durante semanas.</li>
</ol>

<p>El cuarto y el quinto son los que convierten una automatización en deuda. Y el silencio es la parte grave: <strong>hay que montar la alerta de fallo antes que el propio flujo</strong>, porque una automatización caída sin avisar es peor que no tenerla —el trabajo ha dejado de hacerse y todo el mundo cree que se hace—.</p>

<h2 id="gobierno">Quién es el dueño del flujo</h2>

<p>Estas herramientas son tan accesibles que la primera automatización de una empresa casi nunca la monta el departamento de sistemas. La monta alguien de operaciones un jueves por la tarde, con su cuenta personal y sus credenciales.</p>

<p>Eso produce una forma nueva de <em>shadow IT</em> con dos consecuencias concretas. La primera: cuando esa persona se va, el flujo sigue ejecutándose con sus accesos hasta que se desactivan, y entonces deja de funcionar sin que nadie sepa qué era. La segunda: un flujo que lee correos de clientes y los manda a un modelo es un tratamiento de datos personales que no está en ningún registro de actividades.</p>

<p>Tres medidas que cuestan una tarde y evitan los dos problemas:</p>

<ul>
    <li><strong>Cuentas de la empresa, no personales</strong>, para la plataforma y para las conexiones.</li>
    <li><strong>Una fila por flujo en el inventario de sistemas de IA</strong>: qué hace, qué datos toca, quién es el responsable. Es el mismo inventario que pide la guía del <a href="/guias/ai-act-obligaciones-empresas">AI Act</a>, y los flujos son justo lo que nunca aparece en él.</li>
    <li><strong>Una revisión trimestral</strong>: qué flujos están activos, cuáles no ha mirado nadie y cuáles se pueden apagar.</li>
</ul>

<h2 id="cuando-codigo">Cuándo esto ya no basta</h2>

<p>Hay un punto en el que insistir sin código cuesta más que escribirlo. Las señales son reconocibles:</p>

<ul>
    <li><strong>El flujo tiene más de veinte pasos</strong> y nadie entiende ya la rama de la derecha.</li>
    <li><strong>Hay módulos de código dentro del flujo</strong>. Si ya estás programando, estás programando en el peor editor posible.</li>
    <li><strong>La factura de operaciones supera lo que costaría un servidor pequeño.</strong></li>
    <li><strong>Necesitas probar los cambios antes de publicarlos</strong>, y en el flujo no hay forma de hacerlo sin tocar producción.</li>
</ul>

<p>Que el flujo llegue a ese punto no es un fracaso, es información: ha demostrado que el proceso merece código. Reescribirlo con la lógica ya validada es un trabajo pequeño y de riesgo bajo, y muchísimo más barato que haberlo programado el primer día sin saber si servía para algo.</p>

<p>Que es, al final, el argumento entero a favor de estas herramientas. No son la forma más elegante de automatizar nada: <strong>son la forma más barata de averiguar si merece la pena automatizarlo</strong>. Usadas así —para descubrir, con la disposición a tirarlas cuando el proceso madure— es difícil que salgan mal. Usadas como infraestructura definitiva sobre la que se apoya el negocio, acaban siendo un sistema crítico que nadie sabe mantener y que se factura por ejecución.</p>
HTML,
];
