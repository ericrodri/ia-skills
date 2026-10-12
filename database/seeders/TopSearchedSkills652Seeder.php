<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills652Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para que la IA no sea complaciente: instrucciones permanentes para ChatGPT, Gemini o Claude',
                'description'       => 'Texto para pegar en las instrucciones personalizadas y que la IA deje de darte la razón por sistema: crítica concreta, justificada y útil, sin ser grosera.',
                'prompt_content'    => <<<'EOT'
Quiero que redactes unas instrucciones permanentes para pegar en la configuración de mi asistente de IA (instrucciones personalizadas de ChatGPT, "Gems" o información guardada de Gemini, o preferencias de proyecto en Claude). El objetivo es que deje de ser complaciente: que no me dé la razón por defecto, que no me halague y que me diga con claridad cuándo algo que planteo está mal, es dudoso o se puede mejorar.

Contexto sobre mí:
- A qué me dedico: [TU PROFESIÓN O ACTIVIDAD]
- Para qué uso la IA sobre todo: [EJ.: REVISAR TEXTOS, TOMAR DECISIONES DE NEGOCIO, PROGRAMAR, ESTUDIAR]
- Qué me molesta de cómo responde ahora: [EJ.: "QUÉ BUENA PREGUNTA", ME DA LA RAZÓN AUNQUE ME EQUIVOQUE, CAMBIA DE OPINIÓN EN CUANTO INSISTO]
- Límite de caracteres del campo donde lo voy a pegar (si lo sé): [NÚMERO O "NO LO SÉ"]
- Tono que prefiero: [DIRECTO Y CORDIAL / SECO Y BREVE / DIRECTO PERO CON EXPLICACIONES]

Las instrucciones que redactes deben cubrir, como mínimo, estos comportamientos:
1. No empezar las respuestas con elogios a mi pregunta ni a mi trabajo. Si algo está bien, decirlo una vez y con motivo concreto.
2. Si detectas un error, una premisa falsa o un supuesto discutible en lo que planteo, señalarlo antes de responder, aunque no te lo haya pedido.
3. No cambiar de opinión solo porque yo insista o me muestre molesto. Cambiar únicamente si aporto un argumento o un dato nuevo, y decir cuál ha sido.
4. Distinguir entre lo que sabes con seguridad, lo que es probable y lo que es una suposición.
5. Cuando haya varias opciones razonables, decir cuál elegirías tú y por qué, en vez de presentar todas como igual de válidas.
6. Ser sincero no significa ser grosero: la crítica debe ser concreta (qué parte, qué problema), justificada (por qué es un problema) y útil (qué haría en su lugar).
7. Si no tienes información suficiente para opinar con fundamento, decirlo y preguntar en vez de rellenar.

Formato de salida que necesito:
- **Versión completa** de las instrucciones, escrita en segunda persona ("Cuando te pregunte…, tú…"), en frases cortas y verificables. Nada de frases vagas como "sé honesto": cada instrucción debe describir un comportamiento observable.
- **Versión corta** que quepa en el límite de caracteres indicado (si no lo sé, una de unos 1.200 caracteres).
- **Dos o tres frases de prueba** que pueda escribir justo después para comprobar si las instrucciones funcionan (por ejemplo, una afirmación mía que sea falsa a propósito, o una idea floja presentada con entusiasmo), y qué debería responder la IA si las sigue.
- **Advertencias**: en qué situaciones estas instrucciones pueden volverse molestas (por ejemplo, cuando solo quiero un borrador rápido) y una frase que pueda añadir en un mensaje concreto para relajarlas puntualmente, como "modo rápido: sin crítica".

Ten en cuenta que ningún modelo sigue estas instrucciones al cien por cien: indica también qué hacer si, pasados unos días, vuelve a ser complaciente (recordárselo en el mensaje, reformular la instrucción, abrir conversación nueva).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Configurar ChatGPT, Gemini o Claude para que critique con fundamento en lugar de dar la razón por sistema.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Abogado del diablo: que la IA ataque tu decisión antes de tomarla',
                'description'       => 'La IA argumenta en contra de tu decisión con los mejores argumentos posibles, separa lo grave de lo menor y te dice qué comprobar antes de comprometerte.',
                'prompt_content'    => <<<'EOT'
Actúa como abogado del diablo. Voy a contarte una decisión que estoy a punto de tomar y tu trabajo es construir el caso más sólido posible en contra, no el más fácil de rebatir. No busco que me convenzas de no hacerlo, sino descubrir qué no he visto antes de comprometerme.

La decisión:
- Qué voy a hacer: [DESCRIBE LA DECISIÓN EN DOS O TRES FRASES]
- Por qué quiero hacerlo: [TUS RAZONES PRINCIPALES]
- Alternativas que he descartado y por qué: [ALTERNATIVAS]
- Qué está en juego (dinero, tiempo, personas, reputación): [LO QUE ARRIESGAS]
- Plazo para decidir: [FECHA O "SIN PRISA"]
- Cuánto me costaría dar marcha atrás: [FÁCIL / CARO / IMPOSIBLE]

Reglas para tu papel:
1. Argumenta contra la decisión con los mejores argumentos disponibles, aunque tú personalmente creas que es buena idea.
2. Nada de objeciones genéricas que valdrían para cualquier decisión ("puede salir mal", "hay riesgos"). Cada objeción tiene que referirse a algo concreto de lo que te he contado.
3. Ataca también mis razones: dime cuáles se basan en suposiciones que no he comprobado o en deseos más que en datos.
4. Si una de las alternativas que descarté merece una segunda mirada, defiéndela.
5. Sé directo pero no despectivo: esto es una revisión seria, no una burla.

Formato de salida:
**1. El caso en contra, en un párrafo.** Como si tuvieras que convencer a alguien neutral de que no lo haga.

**2. Objeciones ordenadas por gravedad.** Para cada una:
- La objeción, en una frase.
- Por qué importa en mi caso concreto.
- Gravedad: alta (podría hacer que la decisión sea un error), media (cambiaría cómo hacerlo) o baja (detalle a vigilar).
- Qué dato o prueba la confirmaría o la desmontaría.

**3. Mis razones bajo la lupa.** Una tabla con cada razón que di, si es un hecho comprobado, una suposición razonable o una esperanza, y cómo comprobarla.

**4. La alternativa que más merece reconsiderarse**, si la hay, y por qué.

**5. Tu veredicto honesto, ya fuera del papel.** Después de todo lo anterior, ¿la decisión sigue siendo razonable? Responde con una de estas tres: "adelante", "adelante con estos cambios" o "espera hasta comprobar esto", y justifícalo en tres líneas.

**6. Tres comprobaciones baratas** que pueda hacer antes del [PLAZO] para decidir con más seguridad.

Si te falta información clave para atacar bien la decisión, hazme hasta tres preguntas antes de empezar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Poner a prueba una decisión importante (de producto, profesional o personal) antes de comprometerte.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Crítica sincera de una idea de negocio: sin halagos y con lo que tendría que ser verdad para que funcione',
                'description'       => 'Evaluación honesta de tu idea de negocio: supuestos críticos, puntos débiles, competencia real y experimentos baratos para validarla antes de invertir.',
                'prompt_content'    => <<<'EOT'
Quiero una opinión sincera sobre una idea de negocio. No necesito ánimos ni frases como "es una idea muy interesante": necesito saber si tiene sentido, qué tendría que ser verdad para que funcione y qué puedo comprobar barato antes de invertir dinero o meses de trabajo.

La idea:
- Qué es, en dos frases: [DESCRIPCIÓN]
- A quién va dirigida: [CLIENTE TIPO, LO MÁS CONCRETO POSIBLE]
- Qué problema le resuelve y cómo lo resuelve hoy sin mí: [PROBLEMA Y SOLUCIÓN ACTUAL]
- Cómo ganaría dinero: [MODELO: VENTA, SUSCRIPCIÓN, COMISIÓN, SERVICIO…]
- Precio que tengo en mente: [PRECIO]
- Competidores que conozco: [NOMBRES O "NO CONOZCO NINGUNO"]
- Mis recursos: [DINERO DISPONIBLE, HORAS A LA SEMANA, HABILIDADES, CONTACTOS]
- Lo que ya he comprobado (entrevistas, ventas, lista de espera): [LO QUE TENGAS O "NADA TODAVÍA"]

Instrucciones:
1. No halagues la idea. Si hay algo realmente bueno, dilo una vez y explica por qué.
2. Si no conozco competidores, no lo tomes como ventaja: dime qué tipo de soluciones probablemente existen (incluidas las alternativas indirectas como Excel, una gestoría o "no hacer nada").
3. Separa los problemas de la idea de los problemas de ejecución.
4. No inventes cifras de mercado. Si das un orden de magnitud, explica de dónde sale y márcalo como estimación.
5. La crítica debe ser concreta y útil: cada punto débil debe ir acompañado de qué haría yo para resolverlo o comprobarlo.

Formato de salida:
**Resumen en tres líneas**: qué es lo más prometedor, cuál es el mayor riesgo y tu opinión general.

**Lo que tendría que ser verdad para que funcione**: entre cinco y ocho supuestos, en forma de afirmación comprobable (por ejemplo: "al menos 1 de cada 10 [CLIENTE TIPO] con los que hable pagaría [PRECIO] antes de que el producto exista"). Para cada uno, indica si hoy es un hecho, una suposición razonable o una apuesta, y qué pasa con el negocio si resulta falso.

**Puntos débiles por orden de gravedad**: problema, por qué lo es, y qué cambiaría en la idea para atenuarlo.

**La competencia real**: con quién compites de verdad por el dinero y la atención del cliente.

**Números de servilleta**: cuántos clientes necesito a [PRECIO] para cubrir unos gastos de [GASTOS MENSUALES APROXIMADOS] y si eso parece alcanzable con mis recursos.

**Tres experimentos baratos** para las próximas dos semanas, ordenados por cuánto reducen la incertidumbre, con cuánto cuestan y qué resultado me haría seguir o parar.

**Veredicto**: "seguir", "seguir cambiando esto" o "replantear", con la justificación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Validar con honestidad una idea de negocio o proyecto freelance antes de invertir tiempo y dinero.',
                'vote_score'        => 75,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Corrección honesta de un texto: qué falla, por orden de gravedad, sin reescribirlo entero',
                'description'       => 'La IA revisa tu texto como un editor exigente: lista los problemas de más a menos graves, cita el fragmento exacto y propone el arreglo sin cambiar tu voz.',
                'prompt_content'    => <<<'EOT'
Revisa el texto que te pego al final como lo haría un editor exigente y honesto. No lo reescribas entero: quiero mantener mi voz y aprender qué falla. Señala los problemas, ordénalos por gravedad y propón cómo arreglar cada uno.

Datos del texto:
- Tipo de texto: [ARTÍCULO DE BLOG / CORREO / PÁGINA DE VENTA / PUBLICACIÓN DE LINKEDIN / INFORME / OTRO]
- Para quién es: [LECTOR CONCRETO]
- Qué quiero que haga o piense el lector al terminar: [OBJETIVO]
- Tono que busco: [CERCANO / PROFESIONAL / PERSUASIVO / NEUTRO]
- Límite de extensión, si lo hay: [PALABRAS O CARACTERES]

Criterios de revisión, de más a menos importante:
1. **Fondo**: ¿se entiende la idea principal? ¿cumple el objetivo? ¿hay afirmaciones sin apoyo, contradicciones o huecos lógicos?
2. **Estructura**: ¿el orden ayuda o estorba? ¿el inicio engancha? ¿el final cierra o se diluye?
3. **Claridad**: frases demasiado largas, jerga innecesaria, ambigüedades, párrafos que dicen dos veces lo mismo.
4. **Estilo**: muletillas, anglicismos evitables, frases hechas, exceso de adjetivos, tono que no encaja con el lector.
5. **Corrección**: ortografía, puntuación, concordancias, tildes.

Reglas:
- Sé sincero: si el texto tiene un problema de fondo, dilo primero, aunque el resto esté bien escrito. No sirve de nada pulir comas en un texto que no cumple su objetivo.
- No uses fórmulas de cortesía vacías ("en general está muy bien, pero…") salvo que sea verdad, y en ese caso explica qué está bien en concreto.
- Cita siempre el fragmento exacto al que te refieres, entre comillas.
- Cuando propongas un cambio, que sea el mínimo necesario para resolver el problema.
- Si algo es cuestión de gusto y no un error, márcalo como "opcional".

Formato de salida:
**Diagnóstico en dos frases**: cuál es el principal problema del texto y si está listo para publicarse o enviarse.

**Tabla de problemas** ordenada por gravedad, con columnas: n.º | gravedad (grave / importante / menor / opcional) | fragmento citado | qué falla | propuesta de arreglo.

**Lo que funciona y no hay que tocar**: dos o tres puntos concretos, para que no los estropee al corregir.

**Patrones que se repiten**: errores que cometo varias veces, para que los vigile en el futuro.

Si el texto es muy largo, revisa a fondo los primeros [NÚMERO] párrafos y en el resto señala solo los problemas graves.

Texto:
[PEGA AQUÍ TU TEXTO]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Recibir una corrección franca y priorizada de un texto propio sin perder tu estilo.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Premortem con IA: imagina que tu proyecto ha fracasado y descubre por qué',
                'description'       => 'Técnica del premortem: la IA da por hecho que el proyecto ha fracasado, explica las causas más probables y te ayuda a prevenirlas antes de empezar.',
                'prompt_content'    => <<<'EOT'
Vamos a hacer un premortem de mi proyecto. La técnica consiste en situarse en el futuro, dar por hecho que el proyecto ha fracasado y explicar por qué ocurrió. Funciona porque es más fácil encontrar causas de un fracaso "ya ocurrido" que imaginar riesgos en abstracto.

El proyecto:
- Qué es y qué se quiere conseguir: [DESCRIPCIÓN Y OBJETIVO]
- Cómo sabremos que ha salido bien (métrica o resultado): [CRITERIO DE ÉXITO]
- Fecha de inicio y fecha límite: [FECHAS]
- Equipo y responsabilidades: [PERSONAS Y ROLES]
- Presupuesto: [IMPORTE]
- Dependencias externas (proveedores, otros equipos, aprobaciones): [DEPENDENCIAS]
- Lo que más me preocupa ahora mismo: [PREOCUPACIÓN]

Instrucciones:
1. Sitúate en [FECHA LÍMITE + 3 MESES]. El proyecto ha fracasado de forma clara. Escribe la historia del fracaso en un párrafo, en pasado, como si lo contara alguien del equipo.
2. Después, enumera entre ocho y doce causas posibles del fracaso. Cubre categorías distintas: personas y equipo, planificación y plazos, presupuesto, tecnología o herramientas, cliente o usuario, dependencias externas, comunicación y decisiones.
3. Evita causas genéricas ("mala comunicación"). Cada causa debe ser específica de este proyecto y describir cómo empezó el problema, qué señal temprana lo anunciaba y en qué momento se volvió irreversible.
4. No te limites a lo que me preocupa: lo interesante es lo que no he mencionado.
5. Sé honesto con la probabilidad: no infles los riesgos para parecer exhaustivo.

Formato de salida:
**La historia del fracaso** (un párrafo).

**Tabla de causas** con columnas: causa | señal de alerta temprana | probabilidad (alta/media/baja) | impacto (alto/medio/bajo) | medida preventiva | quién debería vigilarla.

**Las tres causas que más importan**: las de mayor combinación de probabilidad e impacto, con una explicación de por qué las priorizas.

**Cambios al plan**: qué añadirías, quitarías o adelantarías en el plan actual para reducir esos tres riesgos. Que sean acciones concretas con responsable y fecha orientativa.

**Puntos de control**: tres o cuatro momentos del proyecto en los que convenga parar y comprobar si alguna señal de alerta se está cumpliendo, con la pregunta exacta que habría que hacerse en cada uno.

**Lo que sigue siendo incierto**: riesgos que no se pueden prevenir y solo cabe aceptar o preparar un plan B.

Si te falta información para que el ejercicio sea útil, hazme hasta tres preguntas antes de empezar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Anticipar los riesgos reales de un proyecto antes del arranque y ajustar el plan en consecuencia.',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Detectar tus sesgos en un razonamiento o una decisión con ayuda de la IA',
                'description'       => 'La IA revisa tu razonamiento e identifica sesgos cognitivos concretos (confirmación, anclaje, coste hundido…) citando dónde aparecen y cómo corregirlos.',
                'prompt_content'    => <<<'EOT'
Quiero que revises un razonamiento mío para detectar sesgos cognitivos. No busco una lista teórica de sesgos, sino que señales dónde, en lo que te cuento, es probable que esté razonando mal y cómo podría comprobarlo.

Contexto:
- Qué decisión o conclusión estoy evaluando: [DECISIÓN, POR EJEMPLO: CONTRATAR A UN CANDIDATO, DESPEDIR A ALGUIEN, CAMBIAR DE TRABAJO, INVERTIR EN UN PROYECTO]
- Mi razonamiento, tal cual lo pienso: [EXPLICA POR QUÉ CREES LO QUE CREES, CON TUS PALABRAS]
- Información que he tenido en cuenta: [DATOS, OPINIONES, EXPERIENCIAS]
- Información que he descartado o no he buscado: [SI LO SABES]
- Cuánto tiempo y dinero llevo invertido en esto: [INVERSIÓN PREVIA]
- Qué siento respecto a la decisión: [ILUSIÓN, MIEDO, PRESIÓN, CANSANCIO…]
- Quién más opina y qué opina: [OTRAS PERSONAS]

Instrucciones:
1. Lee el razonamiento buscando patrones concretos: sesgo de confirmación, anclaje, coste hundido, efecto halo, exceso de confianza, disponibilidad, aversión a la pérdida, pensamiento de grupo, sesgo de statu quo, atribución, afinidad, y cualquier otro que realmente aparezca.
2. Señala solo los sesgos para los que haya indicios en lo que he escrito. No los enumeres todos por si acaso.
3. Para cada sesgo, cita la frase o el argumento exacto en el que lo ves.
4. Ten en cuenta que detectar un sesgo no significa que la conclusión sea falsa: un razonamiento sesgado puede llegar a una conclusión correcta. Dime si, corregido el sesgo, la conclusión se sostiene.
5. Sé directo pero respetuoso. Todos tenemos sesgos; no se trata de juzgarme.

Formato de salida:
**Sesgos detectados**, de más a menos influyente en la decisión. Para cada uno:
- Nombre del sesgo y definición en una línea.
- Dónde aparece (cita literal).
- Cómo puede estar distorsionando mi conclusión.
- Una pregunta que debería hacerme para contrarrestarlo.
- Una comprobación concreta (dato que buscar, persona a quien preguntar, prueba que hacer).

**El argumento contrario más fuerte** que no estoy considerando.

**Reformulación neutral**: mi razonamiento reescrito sin los sesgos, con los mismos datos, para ver a qué conclusión lleva.

**Veredicto**: si la decisión sigue siendo razonable, si conviene retrasarla o si los sesgos la invalidan, en tres líneas.

**Hábito para el futuro**: una práctica sencilla para decisiones parecidas (por ejemplo, criterios fijados antes de ver las opciones, o pedir opinión a alguien sin decirle la mía).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Revisar decisiones de contratación, evaluación de personas u otras elecciones importantes en busca de sesgos.',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Que la IA diga cuánto sabe de verdad: nivel de certeza, qué supone y qué deberías comprobar',
                'description'       => 'Prompt para que la IA marque el grado de certeza de cada afirmación, separe hechos de suposiciones y te diga qué verificar en fuentes oficiales.',
                'prompt_content'    => <<<'EOT'
Necesito que respondas a mi pregunta indicando con honestidad cuánto sabes de verdad. Prefiero una respuesta que diga "no estoy seguro" donde corresponde a una respuesta segura de sí misma que contenga errores. Esto es especialmente importante porque voy a usar la respuesta para [USO: TOMAR UNA DECISIÓN, ESCRIBIR UN DOCUMENTO, ASESORAR A UN CLIENTE, ESTUDIAR].

Mi pregunta:
[ESCRIBE TU PREGUNTA]

Contexto relevante:
- País o jurisdicción, si aplica: [EJ.: ESPAÑA, CATALUÑA, UNIÓN EUROPEA]
- Fecha a la que se refiere la pregunta: [HOY / UN AÑO CONCRETO]
- Lo que ya sé o creo saber: [TUS CONOCIMIENTOS PREVIOS]
- Documentos que puedo aportar: [SI LOS TIENES, PÉGALOS AL FINAL]

Reglas de respuesta:
1. Marca cada afirmación importante con su nivel de certeza:
   - [ALTA]: conocimiento consolidado y estable, poco probable que haya cambiado.
   - [MEDIA]: probablemente correcto, pero puede depender de detalles, haber cambiado recientemente o variar según el caso.
   - [BAJA]: suposición razonada, recuerdo impreciso o dato que no puedo confirmar.
2. Separa con claridad los hechos de las interpretaciones y de las recomendaciones.
3. Si tu información puede estar desactualizada (normativa, precios, plazos, versiones de software, cargos públicos), dilo expresamente e indica la fecha aproximada hasta la que llega tu conocimiento.
4. No inventes referencias: ni números de artículo, ni sentencias, ni estudios, ni enlaces, ni citas. Si mencionas una fuente, que sea una que exista y descríbela de forma que yo pueda buscarla; si no estás seguro del dato exacto, dilo.
5. Enumera las suposiciones que has hecho para responder (por ejemplo, "supongo que eres autónomo y no sociedad").
6. Si la pregunta no tiene una respuesta única, explica de qué depende.
7. Si no tienes base suficiente para responder, dilo y explica qué información te faltaría.

Formato de salida:
**Respuesta corta** (tres o cuatro líneas) con su nivel de certeza global.

**Desarrollo**, con cada afirmación relevante marcada como [ALTA], [MEDIA] o [BAJA].

**Suposiciones que he hecho**: lista.

**Qué deberías comprobar y dónde**: tabla con la afirmación, por qué conviene verificarla y el tipo de fuente adecuada (boletín oficial, web del organismo, profesional colegiado, documentación oficial del producto…).

**Lo que no sé**: preguntas relacionadas que no puedo responder con fiabilidad.

**Cuándo consultar a un profesional**: si el asunto tiene consecuencias legales, fiscales, médicas o económicas importantes, dilo claramente y explica qué tipo de profesional.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Obtener respuestas sobre normativa u otros temas delicados sabiendo qué parte es fiable y qué hay que verificar.',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Que la IA te pregunte antes de suponer: modo entrevista para tareas ambiguas',
                'description'       => 'En lugar de inventar lo que no le has dicho, la IA te entrevista por rondas, resume lo entendido y solo entonces hace la tarea. Ideal para encargos poco definidos.',
                'prompt_content'    => <<<'EOT'
Antes de hacer la tarea que te voy a encargar, quiero que me entrevistes. Muchas veces las respuestas de la IA fallan porque rellena con suposiciones lo que yo no he explicado. Esta vez prefiero dedicar unos minutos a responder preguntas y obtener un resultado que encaje a la primera.

La tarea:
[DESCRIBE LO QUE NECESITAS, AUNQUE SEA DE FORMA VAGA. EJ.: "UN DOCUMENTO DE REQUISITOS PARA UNA NUEVA FUNCIÓN", "UN PLAN PARA LANZAR UN PRODUCTO", "UNA PRESENTACIÓN PARA LA DIRECCIÓN"]

Lo que ya sé que quiero:
[TODO LO QUE TENGAS CLARO]

Cómo debes hacer la entrevista:
1. No empieces la tarea todavía.
2. Primero, dime en dos o tres líneas qué has entendido y cuáles son las principales zonas de ambigüedad.
3. Hazme las preguntas por rondas, de tres a cinco preguntas cada vez, empezando por las que más cambian el resultado (objetivo, destinatario, alcance, restricciones) y dejando para el final los detalles de forma.
4. Cuando una pregunta tenga respuestas típicas, ofréceme opciones numeradas para que pueda contestar rápido, y añade siempre "otra".
5. Si una respuesta mía es contradictoria o vaga, dímelo y repregunta en lugar de suponer.
6. No preguntes por preguntar: si algo no va a cambiar el resultado, no lo preguntes. Máximo tres rondas, salvo que te pida más.
7. Si yo respondo "no lo sé" o "decide tú", propón la opción que elegirías, explica por qué en una línea y anótala como decisión tuya.

Cuando tengas suficiente información:
**Resumen del encargo**, con este formato:
- Objetivo:
- Destinatario:
- Alcance (qué incluye y qué no):
- Restricciones (extensión, plazo, tono, formato):
- Criterio de éxito (cómo sabré que el resultado es bueno):
- Decisiones que has tomado tú por mí:
- Suposiciones que siguen abiertas:

Espera a que confirme o corrija el resumen. Solo cuando escriba "adelante", haz la tarea.

Al entregar el resultado, añade al final:
- Tres puntos donde crees que puede no encajar con lo que esperaba.
- Qué pregunta te habría gustado hacerme y no hiciste.

Si la tarea es tan clara que no necesita entrevista, dímelo y pregúntame si prefiero que empieces directamente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Encargar a la IA tareas poco definidas sin que rellene los huecos con suposiciones equivocadas.',
                'vote_score'        => 64,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Opinión sincera de tu currículum como lo leería un reclutador escéptico',
                'description'       => 'La IA lee tu CV como un reclutador con prisa y poca paciencia: qué ve en los primeros segundos, qué le hace descartarlo y cómo arreglarlo para la oferta.',
                'prompt_content'    => <<<'EOT'
Lee mi currículum como lo haría un reclutador escéptico que tiene cien candidaturas para el mismo puesto y muy poco tiempo. No quiero ánimos: quiero saber por qué podría acabar en el montón de descartes y qué cambiar para evitarlo. Sé franco, pero que cada crítica sea concreta y venga con una propuesta.

Datos:
- Puesto al que me presento: [PUESTO]
- Sector y tipo de empresa: [SECTOR, TAMAÑO, PAÍS]
- Texto de la oferta (si la tengo): [PEGA LA OFERTA O RESUME LOS REQUISITOS]
- Mi situación: [EJ.: CAMBIO DE SECTOR, VUELTA TRAS UN PARÓN, PRIMER EMPLEO, BUSCO UN ASCENSO]
- Lo que creo que es mi punto fuerte: [PUNTO FUERTE]
- Lo que me preocupa de mi perfil: [PREOCUPACIÓN, SI LA HAY]

Cómo debes revisarlo:
1. **Lectura rápida**: describe qué se queda en la cabeza tras un primer vistazo de unos segundos (cargo actual, empresa, años de experiencia, algo que llame la atención) y si eso encaja con el puesto.
2. **Motivos de descarte**: enumera, como pensaría el reclutador, las razones por las que podría descartarme. Incluye las que no sean justas pero sean habituales (huecos sin explicar, cambios frecuentes, títulos de puesto confusos, formato difícil de leer).
3. **Logros frente a tareas**: señala las líneas que describen tareas ("encargado de…") en lugar de resultados, y reescribe como ejemplo dos o tres de ellas usando solo la información que yo te he dado. Si falta un dato (una cifra, un resultado), no lo inventes: indica con [DATO A COMPLETAR] qué debería añadir.
4. **Encaje con la oferta**: tabla con los requisitos principales, si mi CV los demuestra, los menciona sin pruebas o no los cubre.
5. **Filtros automáticos**: palabras clave de la oferta que no aparecen en el CV y formatos que podrían dar problemas en un sistema de selección (tablas, columnas, gráficos, iconos).
6. **Lo que sobra**: información que ocupa espacio sin aportar al puesto.

Formato de salida:
- Veredicto inicial en una línea: "pasaría el primer filtro", "dudoso" o "probablemente descartado", y por qué.
- Las secciones anteriores, en ese orden.
- **Los cinco cambios prioritarios**, ordenados por impacto, con el texto actual y el texto propuesto.
- Una pregunta que probablemente me harían en la entrevista por algo del CV, y cómo prepararla.

No incluyas datos personales sensibles en tus propuestas (foto, edad, estado civil) salvo que sea habitual y útil en el país indicado.

Mi currículum:
[PEGA AQUÍ EL TEXTO DE TU CV]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Revisar el currículum con mirada de reclutador antes de enviarlo a una oferta concreta.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Revisión crítica de un plan financiero personal o de negocio',
                'description'       => 'La IA revisa tu plan financiero buscando supuestos optimistas, gastos olvidados y riesgos de liquidez, con escenarios y preguntas para validarlo.',
                'prompt_content'    => <<<'EOT'
Revisa de forma crítica un plan financiero. Quiero que busques supuestos demasiado optimistas, gastos que he olvidado, riesgos de liquidez y errores de cálculo. No me digas que está bien si no lo está. No necesito asesoramiento de inversión personalizado; necesito una revisión de la lógica y los números que yo te doy.

Tipo de plan: [PLAN PERSONAL O FAMILIAR / PLAN DE UN NEGOCIO O PROYECTO]

Datos del plan:
- Objetivo: [EJ.: AHORRAR PARA LA ENTRADA DE UN PISO, LLEGAR AL PUNTO DE EQUILIBRIO, PAGAR UNA DEUDA]
- Horizonte temporal: [MESES O AÑOS]
- Ingresos previstos, con su origen y cómo de seguros son: [INGRESOS]
- Gastos fijos: [LISTA CON IMPORTES]
- Gastos variables: [LISTA CON IMPORTES]
- Deudas (importe, cuota, tipo de interés, plazo): [DEUDAS]
- Colchón o reservas disponibles: [IMPORTE]
- Supuestos de crecimiento (ventas, sueldo, rentabilidad, inflación): [SUPUESTOS]
- Impuestos tenidos en cuenta: [CUÁLES O "NINGUNO"]
- Si es un negocio, plazos de cobro y de pago: [DÍAS]

Instrucciones:
1. Comprueba primero que las cuentas cuadran. Si hay errores aritméticos, señálalos.
2. Identifica los supuestos más optimistas y explica por qué lo son (por ejemplo, ventas que crecen cada mes sin interrupción, cero imprevistos, rentabilidades garantizadas).
3. Busca gastos que suelen olvidarse: impuestos y cuotas, seguros, mantenimiento, comisiones, gastos anuales prorrateados, vacaciones, reposición de equipos, morosidad o retrasos en los cobros.
4. Analiza la liquidez mes a mes: ¿hay algún mes en que el dinero disponible baja de cero o del colchón mínimo razonable?
5. Calcula tres escenarios: base (mis supuestos), prudente (ingresos un [PORCENTAJE]% menores y gastos un [PORCENTAJE]% mayores) y adverso (pérdida de la principal fuente de ingresos durante [MESES] meses).
6. Sé directo y concreto. Si el plan no es viable con estos números, dilo.
7. Si das referencias fiscales o normativas, indica tu nivel de certeza y recomiéndame comprobarlas con un asesor o en la fuente oficial.

Formato de salida:
- **Diagnóstico en tres líneas**: viable, viable con ajustes o no viable, y por qué.
- **Errores de cálculo**, si los hay.
- **Supuestos optimistas**: tabla con supuesto, por qué es arriesgado y un valor más prudente.
- **Gastos olvidados**: lista con estimación orientativa, marcada como estimación.
- **Tabla de escenarios** con resultado final y mes más ajustado de cada uno.
- **Cinco ajustes prioritarios** para hacer el plan más sólido.
- **Preguntas que debería poder responder** antes de seguir adelante.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Poner a prueba un presupuesto personal o un plan financiero de negocio antes de tomar decisiones con él.',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
        ];

        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");
                continue;
            }
            Skill::create(array_merge($data, [
                'user_id'     => $admin->id,
                'slug'        => $slug,
                'status'      => 'published',
                'version'     => 1,
                'views_count' => rand(150, 600),
                'saves_count' => rand(15, 60),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
