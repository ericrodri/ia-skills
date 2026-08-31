<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills93Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 4,
                'title'            => 'Prospección asistida por IA: investiga 50 cuentas en una hora',
                'description'      => 'El proceso para pasar de una lista de empresas a fichas de cuenta con ángulo de entrada, interlocutor probable y primera frase concreta, sin caer en la personalización de mentira.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de prospección B2B con experiencia en equipos que trabajan cuentas medianas y grandes. Tengo una lista de empresas y quiero convertirla en fichas de cuenta que sirvan para escribir un primer mensaje que no parezca masivo.

## Lo que te voy a dar

1. Lista de empresas (nombre y web).
2. Mi producto: qué problema resuelve, para quién y con qué prueba.
3. Mi perfil de cliente ideal y las señales que indican que una cuenta encaja.
4. Los tres motivos por los que se ganan mis operaciones y los tres por los que se pierden.

## Para cada cuenta, la ficha

| Campo | Qué quiero |
|---|---|
| Encaje | Alto / medio / bajo, con la señal que lo justifica |
| Qué hacen | En una frase, con el lenguaje que usan ellos |
| Señal de dolor | Algo observable: oferta de empleo, cambio de equipo, nota de prensa, reseña, apartado de su web |
| Interlocutor probable | Cargo, no nombre inventado |
| Ángulo de entrada | La hipótesis del problema, en una frase |
| Primera frase | Una línea concreta que demuestre que hemos mirado |
| Motivo de descarte | Si el encaje es bajo, por qué, para no volver a mirarla |

## Reglas que quiero que respetes

1. **Nada de inventar.** Si no encuentras la señal, escribe «sin señal encontrada». Una cuenta sin señal se trabaja con un mensaje genérico honesto o se deja para más adelante; lo que hunde una campaña es una personalización falsa que el destinatario detecta en dos segundos.
2. **Nada de nombres de personas ni datos personales inferidos.** Cargo, no nombre.
3. **Nada de halagos.** «Me encanta lo que hacéis» resta credibilidad. La señal sustituye al halago.
4. **Fuente por dato.** Cada señal, con el sitio de donde sale.

## Priorización

Ordena la lista final en tres bloques: trabajar ahora (encaje alto con señal), trabajar con mensaje genérico (encaje alto sin señal) y descartar por ahora (con motivo). Dime cuántas hay en cada bloque, porque eso ya es información sobre la calidad de la lista.

## Y una advertencia honesta

Si más de la mitad de las cuentas tienen encaje bajo, el problema no es la prospección: es el criterio con el que se construyó la lista. Dímelo y propón los filtros para la siguiente.

## Entregables

1. Las fichas de cuenta completas, en formato tabla.
2. La lista priorizada en los tres bloques.
3. Diagnóstico de la calidad de la lista y filtros para la próxima.
4. Tres plantillas de primer mensaje: con señal fuerte, con señal débil y sin señal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir una lista de empresas en fichas de cuenta con señal real, ángulo de entrada y primer mensaje, descartando lo que no encaja',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'De la reunión al CRM: convierte la transcripción en campos, riesgos y siguiente paso',
                'description'      => 'Estructura lo que se dijo en una llamada comercial en los campos que de verdad usa el pipeline, con las señales de riesgo, lo que quedó sin preguntar y el correo de seguimiento redactado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director comercial que revisa oportunidades cada semana. Te voy a dar la transcripción o mis notas de una reunión de ventas y quiero convertirla en información utilizable, no en un resumen bonito.

## Lo que te voy a dar

1. Transcripción o notas de la reunión.
2. Etapa actual de la oportunidad y qué se supone que tenía que pasar en esta llamada.
3. Los campos de mi CRM que hay que rellenar.
4. Mi metodología de cualificación, si uso alguna.

## Salida 1 — Campos del CRM

Rellena solo con lo que se dijo. Para cada campo, marca la fuente:

| Campo | Valor | Fuente |
|---|---|---|
| Problema declarado | | Cita literal |
| Impacto cuantificado | | Cita o «no cuantificado» |
| Situación actual (cómo lo resuelven hoy) | | |
| Criterios de decisión | | |
| Proceso de decisión y quién firma | | |
| Presupuesto y de dónde sale | | |
| Plazo y qué lo mueve | | |
| Competencia o alternativa considerada | | |
| Siguiente paso comprometido, con fecha | | |

Donde no haya información, escribe «no preguntado» o «evitado por el cliente». Esta distinción es la más valiosa de todo el ejercicio: un campo evitado es una señal, un campo no preguntado es un fallo del vendedor.

## Salida 2 — Señales

Clasifica lo que se oyó:

- **Compra:** preguntas sobre implantación, involucra a más gente, pide referencias, habla en futuro con nosotros dentro.
- **Riesgo:** «lo comentamos internamente» sin fecha, presupuesto sin dueño, el problema no le duele, el interlocutor no decide, comparación por precio.
- **Descalificación:** no hay problema, no hay presupuesto en el horizonte, plazo indefinido, ya han elegido a otro.

Cada señal con la cita que la sostiene.

## Salida 3 — Lo que falta

Las 5 preguntas que había que hacer y no se hicieron, con la redacción exacta para la próxima conversación y por qué importa cada una.

## Salida 4 — Correo de seguimiento

Redáctalo con esta estructura: lo que entendimos de su situación (con sus palabras), lo que acordamos, el siguiente paso con fecha y una sola cosa que aporte valor. Máximo 150 palabras, sin adjetivos de folleto.

## Salida 5 — Veredicto

Probabilidad honesta de cierre y en qué se basa. Si la oportunidad debería descalificarse, dilo con claridad: un pipeline con operaciones muertas hace daño a la previsión y al ánimo del equipo.

## Entregables

Las cinco salidas anteriores, en ese orden, listas para pegar en el CRM y en el correo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Transformar la transcripción de una reunión comercial en campos de CRM, señales de riesgo, preguntas pendientes y correo de seguimiento',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Personalización a escala sin sonar a robot: plantillas con variables que sí funcionan',
                'description'      => 'Diseña la secuencia donde lo que se repite es la estructura y lo que cambia es sustancia real, con el control de calidad que evita el «he visto que en [empresa] hacéis [cosa genérica]».',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en prospección saliente que ha visto morir muchas secuencias por personalización de mentira. Quiero un sistema donde se pueda escribir a 200 personas sin que ninguna reciba algo que huela a plantilla.

## Contexto que necesito

1. Producto, problema que resuelve y prueba disponible (cifra, caso, referencia).
2. Segmento y cargo al que escribes.
3. Volumen semanal y quién escribe.
4. Qué has enviado hasta ahora y qué tasas obtienes (apertura, respuesta, reunión).

## El diagnóstico primero

Revisa mis mensajes actuales y márcame:

- Frases que podrían enviarse a cualquier empresa cambiando el nombre.
- Halagos vacíos y entusiasmo injustificado.
- Párrafos sobre nosotros antes de nombrar el problema del otro.
- Peticiones desproporcionadas para un primer contacto («30 minutos» a alguien que no sabe quién eres).
- Variables que se notan que son variables.

## El sistema de tres capas

| Capa | Qué es | Se escribe |
|---|---|---|
| Estructura | El esqueleto del mensaje | Una vez |
| Ángulo | La hipótesis del problema, por segmento | Una vez por segmento (3-5 en total) |
| Detalle | La prueba de que hemos mirado esta cuenta | Una línea por cuenta |

La personalización real está en la tercera capa y es una sola línea. No hace falta más: hace falta que sea verdad y que sea específica.

## Los detalles que valen y los que no

**Valen:** una oferta de empleo que revela una prioridad, un cambio reciente en su producto, una decisión que han comunicado, una reseña que describe el problema, algo concreto de su web que revela cómo trabajan hoy.

**No valen:** el sector, el tamaño, la ciudad, el número de empleados, «vuestro crecimiento», «vuestra apuesta por la innovación».

## Estructura del primer mensaje

1. Asunto de 3-5 palabras, sin promesa ni gancho de anuncio.
2. Primera línea: el detalle de la cuenta. Sin saludo largo.
3. Segunda y tercera: el problema que suele acompañar a ese detalle, con una cifra o un caso.
4. Cuarta: la pregunta de bajo compromiso, concreta y fácil de contestar con sí o no.
5. Firma corta. Sin postdata publicitaria.

Longitud objetivo: menos de 90 palabras.

## Secuencia

Diseña 4-5 toques repartidos en tres semanas, donde cada uno aporte algo nuevo (un caso, un dato, una pregunta distinta) y ninguno sea «hago seguimiento de mi correo anterior». Incluye el último mensaje de cierre de hilo, que es el que más respuestas genera cuando está bien escrito.

## Control de calidad

Regla de la prueba de sustitución: cambia el nombre de la empresa por el de otra cualquiera. Si el mensaje sigue teniendo sentido, no está personalizado. Aplícala a cada mensaje antes de enviar.

## Entregables

1. Diagnóstico de mis mensajes actuales, frase por frase.
2. Estructura, ángulos por segmento y ejemplos de detalle válido.
3. La secuencia completa redactada.
4. Prueba de sustitución aplicada a cada mensaje.
5. Qué medir por toque para saber cuál funciona.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar secuencias de prospección con personalización real por cuenta, con estructura reutilizable y control de calidad antes de enviar',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis de llamadas de venta con IA: descubre qué patrones cierran de verdad',
                'description'      => 'Compara llamadas ganadas y perdidas para encontrar diferencias observables —no opiniones— y convertirlas en cambios concretos en el guion y en el entrenamiento del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de habilitación de ventas con experiencia analizando grabaciones. Quiero saber qué distingue nuestras llamadas ganadas de las perdidas, con evidencia y no con teoría.

## Lo que te voy a dar

1. Transcripciones de llamadas: al menos 5 ganadas y 5 perdidas de operaciones ya cerradas.
2. Resultado de cada una y valor de la operación.
3. Etapa del proceso a la que corresponden (deben ser comparables).
4. El guion o la metodología que se supone que sigue el equipo.

## Advertencia metodológica que quiero que apliques

Con 10 llamadas no se demuestra causalidad. Lo que buscamos son diferencias observables que merezca la pena probar, no leyes. Etiqueta cada hallazgo con «patrón fuerte» (aparece en casi todas las de un grupo y en casi ninguna del otro) o «indicio» (aparece más, pero con excepciones). No dictamines lo que no sostienen los datos.

## Dimensiones a medir

| Dimensión | Cómo se mide |
|---|---|
| Reparto de la palabra | % de tiempo que habla el vendedor |
| Preguntas | Número, tipo (abiertas/cerradas) y momento |
| Profundidad | Cuántas veces se repregunta sobre la misma respuesta |
| Cuantificación | Si se llega a poner una cifra al problema |
| Monólogo más largo | Duración del bloque más largo del vendedor |
| Producto | Minuto en el que se empieza a hablar de la solución |
| Objeciones | Cuáles salen y cómo se responden |
| Siguiente paso | Si se cierra con fecha y con compromiso mutuo |
| Interlocutores | Cuántos participan y quién decide |
| Lenguaje | Términos del cliente contra jerga nuestra |

## Análisis comparativo

Entrega la tabla con la media de cada dimensión en ganadas y en perdidas, la diferencia, y la etiqueta de fuerza del patrón. Añade las citas más reveladoras de cada grupo.

Presta atención especial a los momentos de giro: la frase después de la cual la conversación cambia de tono, en las ganadas y en las perdidas. Suele ser lo más aprovechable de todo el análisis.

## De los hallazgos a los cambios

Para cada patrón fuerte:

1. El cambio concreto en el guion o en el comportamiento.
2. Cómo se entrena en una sesión de 30 minutos.
3. Cómo se comprueba en las próximas 10 llamadas (métrica observable).

## Entregables

1. Tabla comparativa por dimensión con etiquetas de fuerza.
2. Los momentos de giro con sus citas.
3. Tres cambios concretos en el guion, ordenados por impacto esperado.
4. Guion de la sesión de entrenamiento.
5. Qué medir en las siguientes llamadas para validar o descartar cada cambio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comparar llamadas ganadas y perdidas para identificar patrones observables y convertirlos en cambios de guion y entrenamiento',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Battlecards de competencia que el equipo usa de verdad (y se mantienen al día)',
                'description'      => 'Fichas de una página por competidor con lo que se dice en la conversación real: dónde ganamos, dónde perdemos, cómo responder sin mentir y el proceso para que no se queden obsoletas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de marketing de producto con experiencia en ventas competitivas. Quiero battlecards que un comercial abra en medio de una llamada, no un documento de 20 páginas que nadie lee.

## Contexto que necesito

1. Tu producto: qué hace, para quién y su precio o modelo.
2. Los 3-5 competidores con los que te comparan de verdad (incluye el status quo: hoja de cálculo, proceso manual, no hacer nada).
3. Operaciones ganadas y perdidas recientes contra cada uno, con el motivo real si lo conoces.
4. Objeciones que oyes cuando aparece cada competidor.

## Estructura de la ficha (una página, sin excepciones)

1. **Cómo se posicionan ellos.** En sus palabras, tomadas de su web. Sin caricaturizar: un comercial que llega a una llamada con una versión falsa del competidor queda en evidencia en el minuto tres.
2. **Cuándo ganan ellos.** Los tres escenarios donde son la elección correcta. Este apartado es el que da credibilidad a todo lo demás, y el que casi ninguna battlecard incluye.
3. **Cuándo ganamos nosotros.** Los tres escenarios, con la prueba (caso, cifra, referencia).
4. **Las tres preguntas** que hacen visible la diferencia sin nombrarlos. Preguntas sobre el problema del cliente, no sobre funciones.
5. **Objeciones y respuestas.** Cada una en tres líneas: reconocer, matizar con un hecho, devolver al criterio del cliente.
6. **Trampas.** Lo que no se dice nunca: afirmaciones sin comprobar, comparativas de precio sacadas de contexto, funciones que anunciamos y no tenemos.
7. **Señales tempranas.** Cómo detectar que están en la operación antes de que lo digan.

## Reglas de contenido

- Cada afirmación sobre el competidor, con fecha y fuente. Los productos cambian y una battlecard con datos de hace un año hace perder operaciones.
- Nada de comparar funciones que el cliente no ha mencionado.
- Precio: solo hechos públicos, con la fecha de consulta.
- Si en un punto son mejores, se dice. Que el comercial lo sepa antes de que lo diga el cliente.

## Mantenimiento

Propón el proceso: responsable por competidor, revisión trimestral, canal donde ventas reporta lo que oye en las llamadas, y la regla de actualización inmediata cuando alguien detecta un cambio de precio o de posicionamiento.

## Entregables

1. Una ficha completa por competidor, en el formato de una página.
2. La ficha del status quo, que suele ser el competidor más frecuente.
3. Las preguntas de descubrimiento que separan escenarios.
4. Proceso de mantenimiento con responsables y cadencia.
5. Qué información falta y cómo conseguirla (entrevistas de pérdida, llamadas grabadas, clientes que vinieron de ellos).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir battlecards de una página por competidor con escenarios de victoria y derrota, objeciones y proceso de mantenimiento',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Responder a un pliego o RFP con IA: del documento al borrador en un día',
                'description'      => 'Cómo descomponer un pliego en requisitos, decidir si merece la pena presentarse, reutilizar respuestas anteriores y redactar el borrador con las evidencias que exige cada apartado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de propuestas con experiencia en licitaciones y concursos privados. Tengo un pliego y quiero decidir si presentarme y, si sí, producir el borrador rápido y sin olvidar nada.

## Lo que te voy a dar

1. El pliego o RFP completo.
2. Nuestras capacidades reales, casos y certificaciones.
3. Respuestas a pliegos anteriores, si las tengo.
4. Fecha límite y quién puede dedicar tiempo.

## Paso 1 — Matriz de requisitos

Extrae **todos** los requisitos del documento, incluidos los que están escondidos en párrafos de contexto. Para cada uno:

| Campo | Contenido |
|---|---|
| Referencia | Apartado y página del pliego |
| Requisito | Texto resumido |
| Tipo | Obligatorio / valorable / informativo |
| Puntuación | Si el pliego la indica |
| ¿Cumplimos? | Sí / parcial / no |
| Evidencia | Documento, caso o certificado que lo prueba |
| Responsable | Quién redacta ese apartado |

Los requisitos obligatorios que no cumplimos son la información más importante: si hay uno solo excluyente, no hay propuesta que escribir.

## Paso 2 — Decisión de presentarse

Analiza y recomienda con criterio, no con optimismo:

- Requisitos excluyentes que no cumplimos.
- Encaje real con lo que sabemos hacer.
- Coste de preparar la propuesta contra probabilidad razonable y valor del contrato.
- Señales de que el pliego está escrito para otro (requisitos muy específicos, plazos imposibles, referencias que solo tiene un proveedor).
- Si compensa presentarse para posicionarse aunque no se gane, dilo con esa condición explícita.

## Paso 3 — Reutilización

Cruza la matriz con las respuestas anteriores: qué se puede reutilizar tal cual, qué hay que adaptar y qué es nuevo. Marca lo reutilizado para que alguien lo revise: el error clásico es dejar el nombre del cliente anterior en un párrafo.

## Paso 4 — Borrador

Redacta cada apartado siguiendo el orden y la nomenclatura del pliego —los evaluadores puntúan con una plantilla, y facilitarles el trabajo puntúa—. Para cada apartado: respuesta directa al requisito, cómo lo hacemos, evidencia y qué obtiene el cliente. Sin relleno corporativo.

## Paso 5 — Control final

Lista de verificación: todos los requisitos respondidos, límites de extensión, formatos y firmas, documentación administrativa, coherencia de cifras entre apartados, y nombres del cliente correctos en todo el documento.

## Entregables

1. Matriz de requisitos completa.
2. Recomendación de presentarse o no, con los motivos.
3. Mapa de reutilización.
4. Borrador de la propuesta por apartados.
5. Lista de verificación final y calendario de las últimas 48 horas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Descomponer un pliego en matriz de requisitos, decidir si presentarse y producir el borrador de propuesta con evidencias por apartado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Revisión de oportunidades: qué falta para cerrar cada operación de este trimestre',
                'description'      => 'El análisis operación por operación que separa lo que va a cerrar de lo que está en el pipeline por inercia, con la acción concreta que desbloquea cada una.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director comercial exigente en una revisión de pipeline. Te voy a dar mis oportunidades abiertas y quiero que las cuestiones una por una, sin dejar pasar la fe.

## Lo que te voy a dar

Por cada oportunidad: cliente, valor, etapa, fecha prevista de cierre, último contacto, qué se ha hecho y qué se supone que pasa después.

## El interrogatorio, por operación

Responde estas preguntas con lo que hay, y marca claramente lo que no se sabe:

1. **¿Hay un problema declarado por el cliente, con impacto que él mismo haya cuantificado?** Si el impacto lo hemos calculado nosotros, no cuenta.
2. **¿Quién firma?** Nombre del cargo y prueba de que lo hemos hablado con esa persona o con quien la representa.
3. **¿Cuál es el proceso de compra?** Pasos, aprobaciones, compras, legal, seguridad. Una operación sin proceso conocido no tiene fecha creíble.
4. **¿Qué mueve el plazo?** Si no hay un motivo del cliente para decidir en esa fecha, la fecha es nuestra, no suya.
5. **¿Contra qué competimos?** Incluido «no hacer nada», que gana más veces que cualquier competidor.
6. **¿Cuál es el siguiente paso comprometido, con fecha, por ambas partes?** Un correo pendiente de respuesta no es un siguiente paso.
7. **¿Cuánto tiempo lleva sin moverse?** Una operación estancada más de dos ciclos de venta habituales está muerta y no lo sabe.

## Clasificación

Coloca cada oportunidad en un cubo y justifícalo:

| Cubo | Criterio | Acción |
|---|---|---|
| Va a cerrar | Problema, decisor, proceso, plazo del cliente y siguiente paso, todo presente | Ejecutar el plan de cierre |
| Cerrable con trabajo | Falta uno o dos elementos, identificados | La acción que los consigue, con fecha |
| Espejismo | Falta el problema o el decisor | Reabrir el descubrimiento o descalificar |
| Muerta | Estancada, sin respuesta, sin plazo | Cerrar como perdida y liberar el tiempo |

## Previsión honesta

Suma por cubo y da tres cifras: compromiso (solo el primer cubo), previsión razonable (primer cubo más la parte del segundo con acción concreta y fecha) y escenario optimista. Explica en qué se diferencia cada una y qué tendría que pasar para llegar a la siguiente.

Si el compromiso no llega al objetivo del trimestre, dilo y calcula cuánta actividad nueva haría falta según nuestros ratios y nuestro ciclo de venta. Descubrirlo en la semana 4 permite reaccionar; descubrirlo en la semana 11 es solo un informe.

## Entregables

1. Ficha de interrogatorio por operación, con los huecos señalados.
2. Clasificación en los cuatro cubos.
3. Acción concreta con fecha y responsable para cada operación cerrable.
4. Las tres cifras de previsión con sus supuestos.
5. Lista de operaciones a cerrar como perdidas esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Revisar el pipeline operación por operación para separar previsión creíble de espejismos y definir la acción que desbloquea cada una',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Señales de compra en tiempo real: monta tu sistema de detección de eventos disparadores',
                'description'      => 'Define qué eventos indican que una cuenta va a comprar en los próximos 90 días, cómo detectarlos sin herramientas caras y qué mensaje corresponde a cada uno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de generación de demanda B2B. Quiero dejar de escribir a cuentas frías por orden alfabético y empezar a escribir cuando algo indica que el momento es bueno.

## Contexto que necesito

1. Producto y a quién le vendes.
2. Las últimas 10 operaciones ganadas: ¿qué había cambiado en el cliente justo antes de que nos contactara o de que respondiera?
3. Herramientas disponibles y presupuesto para datos.
4. Volumen de cuentas en tu mercado.

## Paso 1 — Derivar las señales de tus propias ventas

Antes de mirar listas genéricas, saca las señales de tu histórico. Para cada operación ganada, identifica el cambio previo: contrataron a alguien, cambiaron de responsable, abrieron mercado, publicaron resultados, sufrieron una incidencia, les creció el volumen, cambió una norma que les afecta.

De ahí sale tu lista de señales, ordenada por frecuencia. Es más fiable que cualquier lista de manual, porque describe a tus clientes.

## Paso 2 — Catálogo de señales

Para cada señal:

| Campo | Contenido |
|---|---|
| Señal | Qué ocurre |
| Por qué importa | Qué problema crea o hace visible |
| Cómo se detecta | Fuente concreta y gratuita si existe |
| Ventana | Cuánto tiempo sigue siendo relevante |
| Fuerza | Alta / media / baja según tu histórico |
| Mensaje | El ángulo que corresponde |

Fuentes que casi nadie explota y son gratis: ofertas de empleo (revelan prioridades y huecos), notas de prensa, cambios en su web o en sus precios, reseñas nuevas, movimientos de personas en cargos clave, cambios normativos del sector, apariciones en eventos.

## Paso 3 — Sistema de vigilancia

Diseña el sistema con lo que tengo:

- Qué se vigila de forma automática (alertas, fuentes RSS, cambios de página) y con qué frecuencia.
- Qué se revisa a mano y cuánto tiempo cuesta a la semana.
- Dónde se registra la señal para que no se pierda: campo en el CRM con fecha y ventana.
- Cómo se reparten las señales al equipo cada mañana, en menos de diez minutos.

## Paso 4 — Mensaje por señal

Para las cinco señales más fuertes, redacta el primer mensaje. La señal se menciona una vez, sin dramatizar, y se conecta con el problema. Nada de «he visto que estáis contratando, seguro que estáis creciendo mucho»: el mensaje bueno nombra el problema que aparece cuando ocurre eso.

## Entregables

1. Señales derivadas de tu histórico, ordenadas por frecuencia.
2. Catálogo completo con fuentes de detección y ventanas.
3. Diseño del sistema de vigilancia y del reparto diario.
4. Cinco mensajes redactados, uno por señal fuerte.
5. Cómo medir si trabajar por señales mejora tu tasa de respuesta frente a la lista fría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de detección de eventos disparadores derivado del histórico de ventas, con fuentes gratuitas y mensaje por señal',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ramp-up de un comercial nuevo: plan 30-60-90 con el material generado',
                'description'      => 'El plan que lleva a una persona nueva de la primera semana a su primera operación cerrada, con hitos verificables, material de estudio y los ensayos que sustituyen al acompañamiento improvisado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de habilitación de ventas. Entra una persona nueva al equipo comercial y quiero que produzca antes y mejor que los anteriores, con un plan verificable y no con «acompaña a llamadas y ya irás viendo».

## Contexto que necesito

1. Perfil que entra: experiencia previa, si conoce el sector, si conoce el tipo de venta.
2. Nuestra venta: ciclo medio, ticket, número de interlocutores, complejidad técnica.
3. Material existente: guion, casos, battlecards, demostración, grabaciones.
4. Quién puede dedicarle tiempo y cuánto a la semana.
5. Cuándo se espera la primera operación cerrada, de forma realista.

## Principio del plan

Cada semana termina con algo demostrable, no con «lectura completada». La medida del avance es qué puede hacer solo, no qué ha leído.

## Días 1-30 — Entender

| Semana | Objetivo | Prueba de que está conseguido |
|---|---|---|
| 1 | Producto y cliente | Explica el producto en 3 minutos a alguien de otro equipo, sin apoyo |
| 2 | El problema del cliente | Redacta las 10 preguntas de descubrimiento y las defiende |
| 3 | Competencia y objeciones | Responde en ensayo a las 8 objeciones más frecuentes |
| 4 | Proceso y herramientas | Registra una oportunidad completa en el CRM sin ayuda |

Actividad de fondo: escuchar dos grabaciones al día, una ganada y una perdida, con ficha de lo aprendido.

## Días 31-60 — Practicar

- Primeras conversaciones de descubrimiento con acompañamiento, y después en solitario con revisión de la grabación.
- Demostración ensayada tres veces antes de hacerla ante un cliente.
- Prospección propia: número concreto de contactos semanales y revisión de los mensajes antes de enviarlos las dos primeras semanas.
- Un ensayo semanal de 30 minutos sobre el escenario que peor le salió.

## Días 61-90 — Producir

- Pipeline propio con el volumen mínimo para su cuota.
- Primera propuesta enviada y revisada.
- Revisión de oportunidades con el mismo nivel de exigencia que el resto del equipo.
- Objetivo del día 90: definido y medido, no aspiracional.

## Material a generar

Prepárame la lista de lo que hay que producir y para cuándo: guion de descubrimiento, hoja de objeciones, resumen de casos, guion de demostración, plantillas de correo, criterios de cualificación y la lista de grabaciones recomendadas por tema.

## Señales de alarma

Qué mirar en la semana 4, 8 y 12 para detectar que el ramp-up no va bien: no hace preguntas, no ensaya, evita el teléfono, no registra, se lo aprende de memoria sin entender el problema del cliente. Y qué hacer en cada caso.

## Entregables

1. Plan de 90 días con hitos y su prueba de consecución.
2. Calendario semanal de la primera persona que entra.
3. Lista de material a producir, con responsable y fecha.
4. Guion de los ensayos semanales.
5. Señales de alarma y plan de intervención.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el plan de incorporación de un comercial nuevo con hitos verificables, ensayos y material de habilitación',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Higiene del CRM: limpia y enriquece los datos para que la previsión signifique algo',
                'description'      => 'Diagnóstico de la basura acumulada en el CRM, reglas de limpieza y el mínimo de campos obligatorios que el equipo sí rellena, para que los informes dejen de mentir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de operaciones de ventas. Nuestro CRM tiene datos sucios, duplicados y campos que nadie rellena, y las decisiones se toman con informes que no reflejan la realidad. Quiero un plan de limpieza y un régimen de mantenimiento.

## Contexto que necesito

1. CRM y volumen: cuentas, contactos, oportunidades abiertas y cerradas.
2. Campos actuales y cuáles son obligatorios hoy.
3. Informes que se usan para tomar decisiones y quién los mira.
4. Cuántas personas registran datos y con qué disciplina.

## Paso 1 — Diagnóstico

Detecta y cuantifica:

| Problema | Cómo detectarlo | Consecuencia |
|---|---|---|
| Duplicados | Coincidencia por dominio, teléfono, nombre normalizado | Actividad repetida al mismo cliente |
| Oportunidades zombis | Sin actividad en más de dos ciclos de venta | Previsión inflada |
| Fechas de cierre en el pasado | Filtro directo | Informes sin sentido |
| Campos vacíos en oportunidades avanzadas | Etapa alta sin decisor ni presupuesto | Cualificación inexistente |
| Etapas mal usadas | Oportunidades que saltan etapas o vuelven atrás | Ratios de conversión falsos |
| Contactos sin cargo o sin consentimiento registrado | Filtro | Riesgo normativo y mensajes mal dirigidos |

Dame el número de cada problema, porque el volumen es lo que decide el orden de trabajo.

## Paso 2 — Reglas de limpieza

Para cada problema, la regla de decisión: qué registro sobrevive en una fusión de duplicados, qué se hace con las oportunidades zombis (cerrar como perdidas con motivo, no borrar), cómo se recalculan las fechas de cierre y qué se archiva. Todo con criterio escrito, porque estas decisiones se van a repetir cada trimestre.

## Paso 3 — El mínimo viable de campos

Aquí está la causa raíz de la mayoría de los CRM sucios: hay 40 campos y nadie los rellena. Propón el conjunto mínimo obligatorio por etapa, con esta regla: **un campo obligatorio solo se justifica si alguien toma una decisión con él.** Para cada campo que propongas, di qué decisión soporta. Los que no soporten ninguna, se eliminan o se dejan opcionales.

## Paso 4 — Enriquecimiento

Qué datos merece la pena completar (sector, tamaño, tecnología, cargo normalizado), de dónde salen, y el criterio de coste: enriquecer 5.000 cuentas que nadie va a trabajar es gasto, no inversión.

## Paso 5 — Régimen de mantenimiento

- Revisión semanal de la persona responsable de cada oportunidad: fecha, siguiente paso y etapa.
- Comprobación automática que avisa de los incumplimientos, sin bloquear el trabajo.
- Limpieza trimestral con las reglas del paso 2.
- Una sola métrica pública de calidad de datos, para que se vea.

## Entregables

1. Diagnóstico cuantificado por tipo de problema.
2. Reglas de limpieza escritas y listas para ejecutar.
3. Propuesta de campos obligatorios por etapa, con la decisión que soporta cada uno.
4. Plan de enriquecimiento con criterio de coste.
5. Régimen de mantenimiento y la métrica de calidad elegida.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diagnosticar y limpiar los datos del CRM, definir el mínimo de campos obligatorios útiles y establecer un régimen de mantenimiento',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
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
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
