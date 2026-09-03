<?php

return [
    'title' => 'Los ocho errores que se repiten al usar IA en el trabajo',
    'navTitle' => 'Errores al usar IA',
    'seoTitle' => 'Errores al usar IA en el trabajo: los ocho que se repiten',
    'description' => 'Los ocho fallos que se repiten al usar IA en el trabajo, por qué el modelo prefiere inventar antes que decir «no sé», y qué comprobar en treinta segundos.',
    'excerpt' => 'Ninguno de los ocho tiene que ver con saber escribir prompts. Tienen que ver con no distinguir las tareas donde un error se ve de las tareas donde un error se publica.',
    'category' => 'Práctica',
    'published' => '2026-09-03',
    'updated' => '2026-09-03',
    'readingMinutes' => 10,
    'words' => 1760,
    'about' => 'Errores frecuentes en el uso profesional de la inteligencia artificial',
    'related' => ['como-escribir-prompts-efectivos', 'usar-ia-sin-filtrar-datos-de-clientes', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'por-que-inventa' => 'Por qué un modelo prefiere inventar antes que decir «no sé»',
        'error-1' => '1. Delegar el criterio en vez de la tarea',
        'error-2' => '2. Dar por buenas cifras, citas y referencias',
        'error-3' => '3. Pegar en el prompt lo que no debe salir de la empresa',
        'error-4' => '4. Pedir «un texto sobre X» y arreglarlo a mano',
        'error-5' => '5. No dar contexto y culpar al modelo',
        'error-6' => '6. Fiarse del resumen de un documento que no has leído',
        'error-7' => '7. Tratar la primera respuesta como la respuesta',
        'error-8' => '8. No dejar rastro de qué se hizo con IA',
        'coste' => 'Las tareas donde el error se ve y las tareas donde se publica',
        'checklist' => 'La comprobación de treinta segundos',
    ],
    'faq' => [
        '¿Por qué la IA se inventa datos si no sabe la respuesta?' => 'Porque durante años se la ha evaluado con exámenes de respuesta única donde dejar en blanco puntúa igual que fallar. OpenAI lo explicó en un artículo de septiembre de 2025 sobre por qué persisten las alucinaciones: si el examen no premia la abstención, el modelo que arriesga siempre saca mejor nota que el que reconoce no saber, y eso es lo que optimiza el entrenamiento. El dato que lo resume es de la propia comparativa: un modelo con razonamiento se abstuvo en el 52 % de las preguntas y falló en el 26 %, mientras que otro anterior se abstuvo en el 1 % y falló en el 75 %. Menos respuestas, muchos menos errores.',
        '¿Cuáles son los errores más graves al usar IA en el trabajo?' => 'Los que no se ven al revisar. Un texto mal escrito se detecta leyéndolo; una cifra inventada con formato correcto, una cláusula que el resumen omitió o un dato de cliente que ya viajó a un tercero no se detectan leyendo el resultado. Por eso los tres errores caros son: dar por buenas cifras y citas sin comprobarlas, resumir un documento del que vas a decidir sin leer las partes críticas, y pegar en el prompt información que no debía salir de la empresa. Los cinco restantes cuestan tiempo, no credibilidad.',
        '¿Cómo detecto si una cita o una referencia es inventada?' => 'Buscándola por su identificador, no por su título. Un DOI, un número de sentencia, un número de BOE o un ISBN se comprueban en el registro oficial en menos de un minuto. El título, en cambio, suele ser plausible y devuelve resultados parecidos que confunden. Y una regla que ahorra tiempo: si el modelo cita algo que no puede haber leído —un documento interno, una fuente de pago, una norma posterior a su corte de conocimiento— la probabilidad de que exista tal cual la describe es baja, aunque el enlace parezca correcto.',
        '¿Es verdad que hay abogados sancionados por citar sentencias que no existen?' => 'Sí, y está documentado caso por caso. La base de datos de resoluciones judiciales con citas fabricadas que mantiene el investigador Damien Charlotin reunía 1.871 registros a 11 de agosto de 2026, con Estados Unidos como origen de en torno al 69 %. Los importes van de una reprimenda pública a sanciones de cinco cifras: en Whiting v. City of Athens (13 de marzo de 2026) el tribunal encontró más de veinticuatro citas falsas e impuso 15.000 dólares a cada letrado, más costas. No es un riesgo teórico ni exclusivo de la abogacía: es el mismo error en el sector que audita las citas con más rigor.',
        '¿Hay que avisar de que un trabajo se ha hecho con IA?' => 'Depende de para qué y para quién, y por eso conviene tenerlo escrito antes de que surja el caso. Lo que casi siempre hay que declarar: entregables a cliente donde la autoría importa, informes que alguien va a citar, y cualquier uso que la política interna clasifique como sujeto a revisión. Lo que normalmente no: un borrador que vas a reescribir, una búsqueda, una fórmula que has verificado. La forma práctica de resolverlo es una <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a> corta que diga qué se declara, en vez de dejarlo al criterio de cada persona.',
        '¿El error es del modelo o de quien lo usa?' => 'Del reparto de tareas, que es una decisión humana. El modelo hace bien lo que es reversible y verificable —redactar, reformular, estructurar, proponer— y hace mal lo que exige saber si algo es cierto. Cuando alguien le encarga lo segundo, el resultado sale mal aunque el prompt sea impecable. Ahí es donde la elección de herramienta importa mucho menos de lo que parece: lo que cambia el resultado es qué le pides.',
    ],
    'ctaTitle' => 'Prompts que ya han pasado por el filtro de alguien',
    'ctaBody' => 'La mitad de estos errores desaparecen cuando reutilizas un prompt que ya funcionó en lugar de improvisar. Hay material votado por quien lo usa en <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/finanzas">Finanzas</a> y <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>Casi todas las listas de errores al usar IA en el trabajo hablan de prompts: que sea específico, que dé contexto, que asigne un rol. Está bien y es lo de menos. Los fallos que cuestan dinero y credibilidad no vienen de escribir mal la petición, sino de encargarle al modelo una tarea en la que un error no se nota al revisar el resultado.</p>

<p>Los ocho que siguen son los que aparecen una y otra vez. Van ordenados de más frecuente a más caro, y cada uno lleva la señal por la que se detecta y el arreglo concreto.</p>

<h2 id="por-que-inventa">Por qué un modelo prefiere inventar antes que decir «no sé»</h2>

<p>Antes de la lista conviene entender el mecanismo, porque explica seis de los ocho errores.</p>

<p>Un modelo de lenguaje no busca la verdad: predice la continuación más probable de un texto. Eso ya se sabe. Lo que se sabe menos es por qué, después de años de mejoras, sigue prefiriendo una respuesta falsa a admitir que no sabe. OpenAI publicó en septiembre de 2025 un artículo dedicado a esa pregunta, y la respuesta no es técnica sino de incentivos: <strong>los exámenes con los que se mide a los modelos puntúan igual el blanco que el error</strong>. En un test así, quien arriesga siempre saca mejor nota que quien se abstiene, y el entrenamiento optimiza exactamente lo que el test premia.</p>

<p>La comparativa que acompañaba al artículo lo deja en dos líneas de números:</p>

<figure>
<table>
    <thead>
        <tr><th>Comportamiento</th><th>Modelo con razonamiento</th><th>Modelo anterior</th></tr>
    </thead>
    <tbody>
        <tr><td>Se abstiene de responder</td><td>52 %</td><td>1 %</td></tr>
        <tr><td>Responde y falla</td><td>26 %</td><td>75 %</td></tr>
    </tbody>
</table>
<figcaption>Fuente: OpenAI, sobre por qué persisten las alucinaciones (septiembre de 2025). El modelo que contesta menos falla mucho menos.</figcaption>
</figure>

<p>De ahí sale la regla que gobierna todo lo demás: <strong>una respuesta segura no es una respuesta verificada</strong>. El tono de seguridad es un producto del estilo, no de la certeza. Y si el modelo no va a marcar sus propias dudas, el trabajo de marcarlas es tuyo.</p>

<h2 id="error-1">1. Delegar el criterio en vez de la tarea</h2>

<p>Es el error de base y el más difícil de ver, porque el resultado parece bueno. «¿Qué proveedor elegimos?», «¿este contrato es aceptable?», «¿a este candidato lo pasamos a la siguiente fase?». El modelo responderá a las tres con argumentos bien construidos, y ninguna de las tres tiene una respuesta que él pueda saber.</p>

<p><strong>La señal:</strong> la respuesta te convence y no sabrías decir qué la haría falsa.</p>

<p><strong>El arreglo:</strong> reformular la pregunta de decisión en pregunta de preparación. En vez de «¿qué proveedor elegimos?», «monta la tabla comparativa con estos seis criterios y marca dónde falta información para decidir». Sigue ahorrando el mismo tiempo y la decisión se queda donde tiene dueño.</p>

<h2 id="error-2">2. Dar por buenas cifras, citas y referencias</h2>

<p>Los tres formatos que más se inventan son también los tres que menos se comprueban: el porcentaje atribuido a una consultora, la cita textual de una persona real y la referencia bibliográfica con año y editorial. Salen bien formateados, y el formato correcto es justo lo que apaga la sospecha.</p>

<p>La medida más seria que existe sobre esto es el estudio de la Unión Europea de Radiodifusión y la BBC publicado en octubre de 2025: más de 3.000 respuestas de ChatGPT, Copilot, Gemini y Perplexity, evaluadas por 22 medios públicos de 18 países en 14 idiomas. El <strong>45 % contenía al menos un problema importante</strong>; el 31 %, fallos graves de atribución —fuente mal citada, incompleta o engañosa—; el 20 %, errores de precisión, incluida información inventada o caducada.</p>

<p>En el ámbito profesional donde las citas se auditan con más rigor, el resultado está documentado caso por caso. La base de datos de resoluciones judiciales con citas fabricadas que mantiene el investigador Damien Charlotin reunía <strong>1.871 registros a 11 de agosto de 2026</strong>. Dos ejemplos de la tanda de primavera: en <em>Fletcher</em> (18 de febrero de 2026) el tribunal contó dieciséis citas textuales fabricadas y reprochó además que se le ocultara el uso de IA; en <em>Whiting v. City of Athens</em> (13 de marzo de 2026), más de veinticuatro citas falsas y 15.000 dólares de sanción a cada letrado, más costas dobles.</p>

<p><strong>El arreglo:</strong> comprobar por identificador, nunca por título. DOI, número de sentencia, número de BOE, ISBN. Un minuto por referencia, y solo para las que vayan a salir del borrador.</p>

<h2 id="error-3">3. Pegar en el prompt lo que no debe salir de la empresa</h2>

<p>Es el único error de la lista que no se puede arreglar después. Cuando el listado de clientes, el pliego sin firmar o la nómina ya han viajado a un servicio no aprobado, no hay revisión que lo deshaga.</p>

<p><strong>La señal:</strong> estás copiando de un archivo que no habrías enviado por correo a un desconocido.</p>

<p><strong>El arreglo:</strong> saber qué herramienta tienes aprobada para qué categoría de dato, y sustituir nombres por etiquetas cuando el prompt no necesita el nombre real. Está desarrollado en la guía sobre <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>, con el criterio de la AEPD sobre agentes.</p>

<h2 id="error-4">4. Pedir «un texto sobre X» y arreglarlo a mano</h2>

<p>Genera un resultado correcto, genérico y con el tono de nadie. Después vienen veinte minutos de reescritura que suman más que escribirlo de cero. La sensación de haber ahorrado tiempo se sostiene porque el primer borrador llegó rápido.</p>

<p><strong>El arreglo:</strong> dar la materia prima —notas, datos, media frase con la idea real— y pedir estructura y redacción sobre eso. Un modelo escribe mucho mejor <em>con</em> tu contenido que <em>sobre</em> tu tema. La <a href="/guias/como-escribir-prompts-efectivos">guía de prompts</a> tiene el patrón completo.</p>

<h2 id="error-5">5. No dar contexto y culpar al modelo</h2>

<p>Variante del anterior, tan común que merece línea propia: pedir una fórmula sin decir qué versión de la hoja, pedir un correo sin decir a quién, pedir un resumen sin decir para quién es. El modelo rellena los huecos con lo más probable, que casi nunca es tu caso.</p>

<p><strong>El arreglo:</strong> tres datos fijos en la primera línea —quién eres, para quién es, qué formato quieres— y el resto de la petición después. Es la diferencia entre corregir y aprovechar.</p>

<h2 id="error-6">6. Fiarse del resumen de un documento que no has leído</h2>

<p>Aquí el error cambia de naturaleza. Un resumen no falla diciendo algo falso: falla <strong>omitiendo</strong>, y una omisión no se detecta leyendo el resumen. La cláusula de penalización, la excepción del anexo o el párrafo que cambia el plazo desaparecen sin dejar hueco visible.</p>

<p>El fenómeno tiene nombre en la literatura técnica —<em>lost in the middle</em>— y una forma medida: la precisión al recuperar un dato cae de manera acusada cuando ese dato está en el centro del documento en vez de al principio o al final, con caídas superiores al 30 % en los trabajos que lo describieron. Los modelos de 2026 han mejorado bastante en esa prueba concreta, pero la consecuencia práctica no ha cambiado: <strong>el medio de un documento largo es donde menos se puede confiar</strong>.</p>

<p><strong>El arreglo:</strong> pedir el resumen con citas y número de página, y leer entero solo lo que sostiene la decisión. El método está en la guía sobre <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>.</p>

<h2 id="error-7">7. Tratar la primera respuesta como la respuesta</h2>

<p>La primera salida es un borrador que sale con aspecto de definitivo. Ese es todo el problema: un texto bien maquetado y sin titubeos parece cerrado, y quien lo recibe deja de buscarle el fallo.</p>

<p><strong>El arreglo:</strong> una segunda vuelta de dos preguntas, siempre las mismas. «¿Qué parte de esta respuesta no puedes verificar?» y «¿qué le falta para que alguien pueda actuar con ella?». Cuestan diez segundos y suelen mover más el resultado que reescribir el prompt.</p>

<h2 id="error-8">8. No dejar rastro de qué se hizo con IA</h2>

<p>El error tardío. Seis meses después, nadie sabe si aquel informe se revisó, quién lo firmó ni con qué herramienta se hizo. El problema no aparece mientras todo va bien; aparece el día que alguien pregunta, y ese día la ausencia de rastro es indistinguible de la negligencia.</p>

<p>Desde el 2 de agosto de 2026 hay además un motivo normativo, con los deberes de transparencia del Reglamento Europeo de IA en aplicación y supervisión nacional capaz de sancionar. Está resumido en la <a href="/guias/ai-act-obligaciones-empresas">guía del AI Act para empresas</a>.</p>

<p><strong>El arreglo:</strong> una línea en el propio documento —herramienta, fecha, quién revisó— en los entregables que salen fuera. No hace falta un registro corporativo para empezar.</p>

<h2 id="coste">Las tareas donde el error se ve y las tareas donde se publica</h2>

<p>Si hay una sola idea que llevarse, es esta tabla. La columna de la derecha es donde se pierde la confianza de un cliente o de un jefe.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>El error se ve al revisar</th><th>El error pasa la revisión</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Ejemplos</strong></td><td>Redactar, reformular, traducir, estructurar, proponer alternativas, escribir una fórmula</td><td>Cifras, citas, referencias, resúmenes de documentos largos, cálculos, cualquier dato de un archivo que no has abierto</td></tr>
        <tr><td><strong>Qué hace falta</strong></td><td>Leerlo</td><td>Comprobarlo contra la fuente</td></tr>
        <tr><td><strong>Coste si sale mal</strong></td><td>Tiempo</td><td>Credibilidad, y a veces dinero</td></tr>
    </tbody>
</table>
</figure>

<p>La columna derecha no significa «no uses IA». Significa que ahí el trabajo no termina cuando llega la respuesta.</p>

<h2 id="checklist">La comprobación de treinta segundos</h2>

<p>Antes de que algo salga de tu pantalla, cinco preguntas. Si las cinco son «no», el riesgo real es bajo.</p>

<ol>
    <li><strong>¿Hay alguna cifra, cita o referencia?</strong> Compruébala por identificador.</li>
    <li><strong>¿Alguien va a decidir con esto?</strong> Entonces la decisión necesita un nombre humano.</li>
    <li><strong>¿Resume un documento que no he leído?</strong> Lee las dos partes que sostienen la conclusión.</li>
    <li><strong>¿Pegué algo que no debía salir?</strong> Si sí, ya es un incidente: avisa, no lo tapes.</li>
    <li><strong>¿Se va a citar o firmar?</strong> Deja el rastro de revisión.</li>
</ol>

<p>Ninguna de las cinco tiene que ver con escribir mejores prompts, y eso es el resumen del artículo. La calidad del prompt determina si el resultado sirve. El reparto de tareas determina si el error se va a ver.</p>
HTML,
];
