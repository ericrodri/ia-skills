<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills98Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento escrita para que la IA responda bien',
                'description'      => 'Reestructura los artículos de ayuda con el formato que un asistente puede citar sin equivocarse: una pregunta por artículo, respuesta arriba, condiciones explícitas y nada de ambigüedad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de contenido de soporte con experiencia conectando asistentes de IA a centros de ayuda. Mi base de conocimiento está escrita para personas que navegan; quiero que también funcione como fuente para un asistente.

## Contexto que necesito

1. Cuántos artículos hay y cuándo se revisaron por última vez.
2. Los 20 motivos de contacto más frecuentes.
3. Producto y tipos de plan o de cliente (importa: la mayoría de las respuestas dependen del plan).
4. Si ya hay un asistente conectado y qué falla en sus respuestas.

## El diagnóstico

Los fallos de un asistente sobre una base de conocimiento casi nunca son del modelo. Son estos:

| Problema del contenido | Efecto en la respuesta |
|---|---|
| Un artículo que responde cinco preguntas distintas | Mezcla respuestas de casos que no aplican |
| La respuesta al final, tras tres párrafos de contexto | Devuelve el contexto y no la respuesta |
| Condiciones implícitas («en algunos planes») | Afirma cosas falsas para el plan del cliente |
| Dos artículos que se contradicen | Elige uno al azar |
| Capturas de pantalla con la información que no está en el texto | Se pierde la instrucción |
| Artículos obsoletos que nadie ha borrado | Cita procedimientos que ya no existen |

Revisa mis artículos y dime en qué casos caigo, con ejemplos concretos.

## Formato objetivo de cada artículo

1. **Título: una sola pregunta**, redactada como la escribe el cliente.
2. **Respuesta directa en las dos primeras frases.**
3. **Condiciones explícitas:** para qué planes, roles, países o versiones aplica. Y para cuáles no.
4. **Pasos numerados**, cada uno con la acción y lo que se ve al terminarla.
5. **Casos particulares** reales, con su respuesta.
6. **Qué hacer si no funciona**, con el punto de contacto.
7. **Fecha de revisión y responsable.**

Un artículo, una pregunta. Si un artículo responde tres, se parte en tres y se enlazan entre sí.

## Reglas de escritura

- Nada de «normalmente», «suele», «en la mayoría de los casos» sin decir cuáles.
- Toda instrucción que esté en una imagen, también en texto.
- Un solo nombre por cada elemento del producto, igual que en la interfaz.
- Sin remitir a otro artículo para la respuesta principal: los enlaces son para profundizar.

## Trabajo de limpieza

- Detectar contradicciones entre artículos y decidir cuál es el bueno.
- Archivar lo obsoleto en lugar de dejarlo publicado, y excluirlo de la fuente del asistente.
- Cubrir los motivos de contacto frecuentes que no tienen artículo, que suelen ser el 20% de los tickets.

## Además

Define qué debe hacer el asistente cuando no encuentra respuesta: decir que no lo sabe y ofrecer contacto humano. Jamás improvisar la política del producto. Y qué preguntas deriva siempre a una persona: facturación de un caso concreto, datos de la cuenta, incidencias, reclamaciones.

## Entregables

1. Diagnóstico de mis artículos con los problemas encontrados.
2. Tres artículos reescritos completos, como modelo.
3. Lista de artículos a partir, a fusionar y a archivar.
4. Motivos de contacto sin cobertura, priorizados.
5. Reglas de comportamiento del asistente ante ausencia de información.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reestructurar la base de conocimiento de soporte para que un asistente de IA la cite correctamente, con una pregunta por artículo y condiciones explícitas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Respuestas sugeridas con IA que el agente revisa en diez segundos',
                'description'      => 'Diseña el sistema de borradores automáticos para el equipo de soporte: qué información recibe el modelo, qué formato produce y qué comprueba el agente antes de enviar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de operaciones de soporte con experiencia implantando asistencia de IA para agentes. Quiero que el equipo responda más rápido sin enviar respuestas genéricas ni incorrectas.

## Contexto que necesito

1. Canales atendidos y volumen diario por canal.
2. Tiempo medio de respuesta actual y objetivo.
3. Herramienta de soporte y si permite integrar sugerencias.
4. Tipos de ticket más frecuentes.
5. Qué información del cliente está disponible en el momento de responder (plan, historial, estado de la cuenta).

## Paso 1 — Qué tickets sí y qué tickets no

| Tipo | Sugerencia automática | Motivo |
|---|---|---|
| Pregunta cubierta por la documentación | Sí | Respuesta verificable |
| Instrucción de configuración | Sí | Pasos conocidos |
| Estado de un pedido o de una incidencia | Sí, con datos del sistema | Objetivo |
| Reclamación o cliente enfadado | Solo estructura, no texto final | El tono lo pone una persona |
| Facturación de un caso concreto | No | Riesgo alto de error con consecuencia económica |
| Incidencia crítica | No | Comunicación coordinada |
| Petición de excepción o descuento | No | Es una decisión, no una respuesta |

## Paso 2 — Contexto que recibe el modelo

Define exactamente qué se le pasa: el mensaje del cliente, los artículos de ayuda relevantes, el plan y los datos de cuenta necesarios, el historial reciente del cliente y la guía de tono. Y qué no se le pasa: datos innecesarios, información de otros clientes, notas internas con juicios sobre el cliente.

Instrucción clave: la sugerencia debe basarse solo en la documentación aportada y en los datos del sistema. Si la respuesta no está ahí, la sugerencia correcta es «no hay información suficiente, deriva a…», no una respuesta inventada con buen tono.

## Paso 3 — Formato de la sugerencia

Que el agente pueda revisarla de un vistazo:

1. Respuesta propuesta.
2. **Fuente de cada afirmación**: el artículo o el campo del sistema del que sale. Esto es lo que hace que la revisión cueste diez segundos y no dos minutos.
3. Nivel de confianza y qué falta, si falta algo.
4. Qué NO se ha podido verificar.

## Paso 4 — Lo que el agente comprueba siempre

Lista corta, memorizable: que aplica al plan del cliente, que los datos concretos (importes, fechas, estados) coinciden con el sistema, que responde a lo que se preguntó y no a algo parecido, y que el tono encaja con el estado de ánimo del cliente.

## Paso 5 — Medición y mejora

- Porcentaje de sugerencias usadas tal cual, editadas y descartadas.
- Motivos de descarte, categorizados. Aquí está la información para mejorar el sistema.
- Efecto en tiempo de respuesta y en satisfacción, medidos por separado: una respuesta rápida y mala empeora la satisfacción.
- Revisión mensual de los tipos de ticket donde la sugerencia falla más, para retirarlos del alcance o mejorar la documentación.

## Entregables

1. Alcance definido: tipos de ticket dentro y fuera, con motivo.
2. Especificación del contexto que recibe el modelo.
3. Formato obligatorio de la sugerencia, con las fuentes.
4. Lista de comprobación del agente antes de enviar.
5. Cuadro de medición y ciclo de mejora mensual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implantar respuestas sugeridas con IA para agentes de soporte, con fuentes citadas, alcance delimitado y comprobación antes de enviar',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Clasificación y enrutado automático de tickets: reglas antes que modelos',
                'description'      => 'Diseña el sistema que etiqueta y dirige cada ticket al equipo correcto, empezando por reglas deterministas y usando el modelo solo donde de verdad aporta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de operaciones de soporte. Los tickets llegan a un buzón único y se reparten a mano, con retrasos y con tickets que dan tres vueltas antes de llegar a quien puede resolverlos.

## Contexto que necesito

1. Volumen diario y canales de entrada.
2. Equipos o especialidades a los que puede ir un ticket.
3. Cómo se reparte hoy y cuánto tiempo se dedica a repartir.
4. Porcentaje aproximado de tickets mal enrutados y coste de un reenvío.
5. Herramienta de soporte y qué automatizaciones admite.

## Paso 1 — Taxonomía mínima

Antes de automatizar nada, define las etiquetas que se van a usar. Regla: **una etiqueta solo existe si cambia lo que alguien hace con el ticket.** Máximo tres dimensiones:

| Dimensión | Valores | Para qué sirve |
|---|---|---|
| Motivo | 8-12 valores | Enrutado y análisis |
| Urgencia | 3 niveles con criterio objetivo | Orden de atención |
| Tipo de cliente o plan | Los que tengáis | Nivel de servicio |

Si hoy tenéis 40 etiquetas, dime cuáles fusionar y cuáles eliminar.

## Paso 2 — Reglas deterministas primero

Buena parte del enrutado se resuelve sin modelo, y las reglas son más rápidas, más baratas y auditables:

- Canal de entrada o dirección de destino.
- Formulario con campo de motivo elegido por el cliente.
- Cliente identificado y su nivel de servicio.
- Palabras clave inequívocas (nombre de un módulo, «factura», «no puedo entrar»).
- Estado de la cuenta o del pedido consultado en el sistema.

Define estas reglas primero y dime qué porcentaje del volumen cubren. Solo lo que quede va al modelo.

## Paso 3 — El modelo donde aporta

Para el resto: clasificación por motivo a partir del texto, con estas condiciones:

1. Devuelve la etiqueta más un nivel de confianza.
2. Por debajo del umbral, va a una cola de revisión humana y no se enruta a ciegas.
3. Nunca decide la urgencia máxima por sí solo: la urgencia crítica la confirma una persona.
4. Registra la clasificación propuesta y la final, para poder medir el acierto.

## Paso 4 — Casos especiales

Diseña el tratamiento de: tickets con varios asuntos en un mensaje, respuestas a hilos cerrados, mensajes automáticos y notificaciones, clientes que escriben por el canal equivocado, y mensajes en otros idiomas.

## Paso 5 — Vigilancia

- Tasa de acierto de la clasificación, medida sobre una muestra semanal.
- Porcentaje de reenvíos entre equipos, que es el indicador que de verdad importa.
- Tiempo desde la entrada hasta la primera asignación.
- Revisión mensual de las categorías con más error.

Y la regla de seguridad: si la tasa de acierto baja de un umbral que fijemos, se vuelve al reparto manual para esas categorías. Un enrutado malo automático cuesta más que un reparto manual.

## Entregables

1. Taxonomía mínima propuesta, con las etiquetas a eliminar.
2. Reglas deterministas y cobertura estimada.
3. Especificación del clasificador con umbrales y cola de revisión.
4. Tratamiento de los casos especiales.
5. Cuadro de vigilancia con umbral de retorno al manual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la clasificación y el enrutado automático de tickets con taxonomía mínima, reglas deterministas y clasificador con umbral de confianza',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Resumen de conversación para escalar sin que el cliente repita nada',
                'description'      => 'El formato de resumen que permite a quien recibe un escalado entender el caso en un minuto: qué pide el cliente, qué se ha probado, qué se ha descartado y qué se necesita.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de soporte técnico con experiencia en escalados entre niveles. El problema clásico: el nivel 2 recibe un hilo de 40 mensajes, no lo lee, pregunta lo que ya se preguntó y el cliente lo repite todo enfadado.

## Lo que te voy a dar

1. La conversación completa del ticket.
2. Datos del cliente: plan, antigüedad, criticidad.
3. A quién se escala y qué necesita saber ese equipo.
4. Notas internas, si las hay.

## Formato del resumen de escalado

### 1. Una línea de situación
Qué necesita el cliente y desde cuándo. Sin adjetivos.

### 2. Impacto
A cuántos usuarios afecta, si hay bloqueo total o parcial, si hay pérdida de datos o de dinero, y si es reproducible. Sin esto no se puede priorizar.

### 3. Cronología
Los hechos con fecha y hora: cuándo empezó, qué pasó, qué cambió en medio (un despliegue, un cambio de configuración del cliente, una actualización).

### 4. Qué se ha probado y con qué resultado
Tabla, no prosa:

| Acción | Resultado |
|---|---|

Esta es la sección que evita repetir trabajo, y la que casi nunca se escribe.

### 5. Qué se ha descartado y por qué
Hipótesis eliminadas con la evidencia que las elimina.

### 6. Datos técnicos
Identificadores de cuenta y de operación, versión, navegador o dispositivo, mensajes de error literales, capturas o registros relevantes, hora exacta de la última reproducción.

### 7. Qué se pide exactamente
No «que lo miren». Una petición concreta: confirmar si el comportamiento es esperado, revisar el registro de tal proceso, aplicar una corrección, o dar una fecha.

### 8. Estado con el cliente
Qué se le ha dicho, qué espera, cuándo se le prometió respuesta y con qué tono está la conversación. Quien continúe necesita saberlo antes de escribir.

## Reglas del resumen

- Nada de interpretaciones presentadas como hechos: separa lo que dijo el cliente de lo que deducimos.
- Citas literales cuando la formulación importa.
- Sin juicios sobre el cliente en el texto del escalado.
- Máximo una pantalla. Si no cabe, hay que ordenar mejor, no escribir más.

## Además

- Señala qué información falta y hay que pedir al cliente antes de escalar (escalar incompleto genera un ciclo perdido de un día).
- Redacta el mensaje al cliente informando del escalado, con expectativa realista de plazo.

## Entregables

1. El resumen de escalado completo en el formato anterior.
2. Lista de datos que faltan y cómo pedirlos.
3. Mensaje al cliente sobre el escalado.
4. Plantilla reutilizable para el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Generar resúmenes de escalado con cronología, acciones probadas y petición concreta para que el siguiente nivel no repita trabajo',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Sentimiento y prioridad con IA: úsalo bien y sabe cuándo no fiarte',
                'description'      => 'Cómo usar el análisis automático de tono y urgencia sin que decida por ti: qué señales sí son fiables, qué sesgos tiene y qué controles hacen falta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de soporte con experiencia en herramientas de análisis automático de conversaciones. Quiero usar detección de sentimiento y de urgencia con criterio, no como un semáforo que nadie cuestiona.

## Contexto que necesito

1. Volumen y canales.
2. Qué decisiones querrías tomar con esta señal: orden de atención, alertas, asignación a un perfil concreto.
3. Idiomas de los clientes.
4. Perfil de cliente: consumidor, empresa, técnico.

## Paso 1 — Para qué sirve y para qué no

| Uso | Fiabilidad | Recomendación |
|---|---|---|
| Detectar mensajes muy negativos para atenderlos antes | Media-alta | Sí, como señal de apoyo |
| Alertar de amenaza de cancelación o de daño reputacional | Media | Sí, con revisión inmediata |
| Puntuar la satisfacción del cliente sustituyendo a la encuesta | Baja | No |
| Evaluar el desempeño del agente por el sentimiento del cliente | Muy baja | No, y además es injusto |
| Cerrar tickets automáticamente por sentimiento positivo | Muy baja | No |

## Paso 2 — Los sesgos que hay que conocer

- **Cultura y estilo:** la cortesía y el grado de queja directa varían mucho entre idiomas y culturas. Un mensaje escueto no es un mensaje hostil.
- **Perfil técnico:** los clientes técnicos describen fallos sin emoción y la herramienta los lee como neutros aunque el problema sea grave.
- **Ironía y educación excesiva:** «excelente, tercer intento» suele clasificarse como positivo.
- **Idioma:** el rendimiento cae en idiomas con menos datos, y suele fallar en textos cortos.
- **Longitud:** los mensajes de una línea dan resultados inestables.

Por eso la urgencia no se deriva del tono: se deriva de hechos. Bloqueo total, pérdida de datos, dinero afectado, número de usuarios, cliente crítico, incumplimiento de un compromiso de servicio.

## Paso 3 — Diseño del sistema

1. **Prioridad = reglas de hecho** (impacto, plan, compromiso de servicio) **+ señal de tono como modificador**, nunca como criterio principal.
2. Alertas separadas para lo que sí conviene detectar por texto: amenaza de cancelación, mención de reclamación formal o de redes públicas, mención de daño a personas o a datos.
3. Umbral prudente: mejor pocas alertas fiables que un flujo que el equipo aprende a ignorar.
4. Revisión humana de toda alerta antes de cambiar la prioridad de un caso.

## Paso 4 — Calibración

Protocolo: toma 100 tickets ya cerrados, que dos personas los clasifiquen a mano y compara con el resultado automático. Mide el acuerdo por idioma y por tipo de cliente. Si el acuerdo es bajo en un segmento, se desactiva para ese segmento. Repite la calibración cada trimestre y cada vez que cambie la herramienta.

## Paso 5 — Uso responsable con el equipo

Declara explícitamente qué NO se va a hacer con estos datos: evaluar personas, tomar decisiones disciplinarias o publicar rankings. Si el equipo cree que la herramienta se usa para vigilarlo, adaptará su forma de escribir y los datos dejarán de servir para nada.

## Entregables

1. Usos aprobados y prohibidos para mi caso.
2. Reglas de prioridad basadas en hechos, con el tono como modificador.
3. Configuración de alertas con umbrales.
4. Protocolo de calibración con la muestra y los criterios de desactivación.
5. Comunicación al equipo sobre el uso de los datos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar análisis automático de sentimiento y urgencia en soporte con reglas basadas en hechos, calibración periódica y límites de uso claros',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Control de calidad de tickets con IA: rúbrica, muestreo y conversación con el agente',
                'description'      => 'Monta la revisión de calidad que mejora al equipo en lugar de vigilarlo: rúbrica con criterios observables, muestreo representativo y devolución útil.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de calidad en un equipo de atención al cliente. Quiero un sistema de control de calidad que sirva para mejorar y que el equipo no perciba como una amenaza.

## Contexto que necesito

1. Tamaño del equipo, canales y volumen de tickets.
2. Cómo se revisa la calidad hoy, si se revisa.
3. Los problemas de calidad que ves: respuestas incompletas, tono, plazos, errores técnicos.
4. Si hay compromisos de nivel de servicio con clientes.

## Paso 1 — Rúbrica con criterios observables

Máximo seis criterios, cada uno comprobable por dos revisores distintos con el mismo resultado:

| Criterio | Qué se comprueba | Peso |
|---|---|---|
| Resolución | ¿El cliente obtuvo lo que necesitaba, sin volver a escribir? | Alto |
| Exactitud | ¿La información es correcta y aplica a su plan? | Alto |
| Completitud | ¿Se responde a todo lo preguntado, incluidas las preguntas secundarias? | Medio |
| Claridad | ¿Se entiende sin conocimiento previo? Pasos accionables | Medio |
| Tono | ¿Adecuado al estado del cliente? Sin plantilla evidente | Medio |
| Proceso | Etiquetado, notas y escalado según procedimiento | Bajo |

Nada de «empatía» sin definición: se traduce en conductas observables (reconoce el problema, no culpa al cliente, no minimiza).

## Paso 2 — Muestreo que no engaña

- Muestra aleatoria por agente y por semana, con un mínimo por persona para que sea comparable.
- Muestra dirigida a los casos que importan: tickets reabiertos, escalados, con valoración baja, y los de clientes críticos.
- Nada de revisar solo lo que salió mal: sin la muestra aleatoria no se sabe cómo es el trabajo normal.

Dame los números concretos según mi volumen y mi equipo.

## Paso 3 — Papel de la IA

Qué puede hacer:

1. Preseleccionar candidatos a revisión (reaperturas, contradicciones con la documentación, plazos incumplidos, respuestas que no responden a lo preguntado).
2. Comprobar hechos verificables: si la respuesta contradice el artículo de ayuda, si el plan del cliente admite lo prometido, si se respondieron todas las preguntas.
3. Preparar el resumen del caso para que la revisión humana cueste dos minutos.

Qué no debe hacer: puntuar tono, decidir la nota final, ni alimentar automáticamente una evaluación de desempeño. La nota la pone una persona que responde de ella.

## Paso 4 — La devolución

- Semanal, breve, con un caso concreto y un cambio pedido.
- Empieza por lo que se hizo bien, con el ejemplo. No como fórmula, sino porque el equipo replica lo que se reconoce.
- Un solo foco de mejora a la vez.
- Distinguir siempre: ¿es un problema de la persona, del procedimiento, de la documentación o del producto? La mayoría de las veces no es de la persona, y eso hay que decirlo en voz alta.

## Paso 5 — Uso agregado

Informe mensual: criterios con peor resultado en el conjunto, temas donde falla la información, formación necesaria, y los tres cambios de proceso o de documentación que quitarían más errores de raíz.

## Entregables

1. Rúbrica completa con criterios observables y pesos.
2. Plan de muestreo con números concretos.
3. Especificación de lo que hace la IA y de lo que no.
4. Guion de la devolución semanal.
5. Estructura del informe mensual agregado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el control de calidad de tickets con rúbrica observable, muestreo representativo y devolución que mejora al equipo',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Informe semanal de soporte que producto y dirección sí leen',
                'description'      => 'Convierte el volumen de tickets de la semana en una página con los tres problemas que importan, su coste y la decisión que se pide a cada área.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de soporte que reporta a producto y a dirección. Hoy mando un informe con métricas que nadie mira. Quiero uno que provoque decisiones.

## Lo que te voy a dar

1. Datos de la semana: volumen, motivos, tiempos, reaperturas, satisfacción.
2. Comparación con las semanas anteriores.
3. Incidencias ocurridas.
4. Lo que ya se reportó antes y sigue sin resolverse.

## Estructura del informe (una página)

### 1. Titular
Dos frases: qué ha pasado esta semana y qué hace falta de otras áreas.

### 2. Los tres problemas de la semana
Para cada uno:

- Qué ocurre, en el lenguaje del cliente.
- Cuántos tickets y qué porcentaje del total.
- Coste: horas de soporte dedicadas y, si se puede, clientes en riesgo.
- Quién puede resolverlo: producto, ingeniería, documentación, comercial, nosotros.
- Qué se pide exactamente y para cuándo.

Tres, no diez. Un informe con diez prioridades no tiene ninguna.

### 3. Cuadro de indicadores
Solo los que se usan para decidir: volumen, tiempo de primera respuesta, tiempo de resolución, reaperturas, satisfacción y tickets evitables. Con tendencia, no con el valor aislado.

### 4. Lo repetido
Los problemas ya reportados que siguen abiertos, con el número de semanas que llevan y el coste acumulado. Esta sección es la que mueve prioridades: un problema que cuesta 6 horas de soporte a la semana lleva 78 horas en tres meses, y eso ya es dinero comparable al coste de arreglarlo.

### 5. Lo que hemos resuelto nosotros
Documentación mejorada, plantillas nuevas, formación. Para que se vea que el equipo no solo pide.

### 6. Voz del cliente
Tres citas literales que expliquen mejor que cualquier gráfico qué está pasando. Sin datos que identifiquen a nadie.

## Reglas

- Una página. Lo demás, en un anexo que nadie tiene que abrir.
- Cada número con su porqué.
- Ninguna petición sin destinatario y sin fecha.
- Sin reproches a otras áreas: hechos, coste y petición.

## Entregables

1. El informe completo de esta semana.
2. Plantilla reutilizable.
3. Cálculo del coste acumulado de los problemas repetidos.
4. Las tres peticiones formuladas para que se puedan aceptar o rechazar con un sí o un no.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Producir el informe semanal de soporte en una página con los tres problemas de mayor coste y una petición concreta por área',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Análisis posterior de un caso complejo: que no vuelva a costar dos semanas',
                'description'      => 'Documenta un caso difícil ya cerrado para convertirlo en conocimiento reutilizable: cronología, causa, qué lo alargó y qué cambia a partir de ahora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de soporte técnico con cultura de aprendizaje sin culpables. Acabamos de cerrar un caso que ha durado semanas, ha rebotado entre equipos y ha dejado al cliente molesto. Quiero convertirlo en algo útil.

## Lo que te voy a dar

1. El hilo completo del ticket y las notas internas.
2. Fechas de los hitos: apertura, escalados, cambios de responsable, cierre.
3. Qué resolvió finalmente el problema.
4. Estado del cliente al terminar.

## Regla de partida

Sin nombres y sin culpables. Cada retraso se explica por un hueco del sistema —información que no estaba, permiso que no se tenía, procedimiento que no existía—, no por una persona. Un análisis que busca responsables produce equipos que ocultan casos difíciles, que es exactamente lo contrario de lo que queremos.

## Paso 1 — Cronología con tiempos muertos

Tabla con: fecha y hora, qué ocurrió, quién actuó (por rol), y **tiempo transcurrido desde el hito anterior**. La última columna es la que revela el problema: casi siempre el tiempo total no está en el trabajo, está en las esperas.

## Paso 2 — Causa del problema y causa de la duración

Dos análisis distintos y los dos necesarios:

- **Causa del problema del cliente:** qué fallaba y por qué.
- **Causa de la duración:** por qué tardamos. Falta de información inicial, escalado incompleto, ausencia de acceso, procedimiento inexistente, hipótesis mantenida demasiado tiempo sin comprobar, cambio de responsable sin traspaso, dependencia de una única persona.

En un caso largo, la segunda causa suele ser más caro de ignorar que la primera.

## Paso 3 — Los momentos de decisión

Identifica los tres puntos donde el caso podría haber cambiado de rumbo. Para cada uno: qué información había disponible, qué se decidió, qué se podría haber hecho y qué habría hecho falta para verlo en ese momento. Sin condicional acusatorio: el objetivo es diseñar la señal que la próxima vez estará a la vista.

## Paso 4 — Qué cambia a partir de ahora

Solo cambios verificables, con responsable y fecha:

| Cambio | Tipo | Responsable | Fecha |
|---|---|---|---|
| Artículo de ayuda nuevo o corregido | Documentación | | |
| Campo obligatorio en el formulario de entrada | Proceso | | |
| Guía de diagnóstico para este tipo de caso | Conocimiento | | |
| Acceso o permiso que faltaba | Herramientas | | |
| Regla de escalado con plazo | Proceso | | |
| Corrección o mejora en el producto | Producto | | |

Máximo cinco. Un análisis con veinte acciones no produce ninguna.

## Paso 5 — Con el cliente

- Qué se le explicó y qué queda pendiente de explicar.
- Mensaje de cierre honesto: qué pasó, qué hemos cambiado y qué puede esperar. Sin excusas largas.
- Si conviene seguimiento en dos semanas, con qué pretexto concreto.

## Entregables

1. Cronología con tiempos muertos señalados.
2. Causa del problema y causa de la duración, separadas.
3. Los tres momentos de decisión con la señal que faltaba.
4. Máximo cinco cambios con responsable y fecha.
5. Mensaje de cierre al cliente y guía de diagnóstico para el próximo caso igual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Documentar un caso de soporte complejo para extraer la causa de la duración y convertirlo en cambios concretos de proceso y documentación',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Formación del equipo de soporte con casos reales del histórico',
                'description'      => 'Convierte los tickets ya resueltos en material de entrenamiento: casos de práctica, respuestas de referencia y sesiones cortas sobre los errores que de verdad se cometen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de formación en un equipo de atención al cliente. Tengo miles de tickets resueltos y gente nueva que tarda semanas en soltarse. Quiero usar el histórico como material de entrenamiento.

## Contexto que necesito

1. Tamaño del equipo y rotación.
2. Cuánto tarda hoy una persona nueva en trabajar sola, y qué le cuesta más.
3. Los tipos de ticket más frecuentes y los más difíciles.
4. Errores que se repiten entre agentes con experiencia.
5. Tiempo disponible para formación a la semana.

## Paso 1 — Selección de casos

Elige del histórico y anonimiza (fuera nombres, cuentas, importes identificables):

| Categoría | Cuántos | Para qué |
|---|---|---|
| Frecuentes bien resueltos | 10 | Modelo de respuesta y de tono |
| Frecuentes mal resueltos | 5 | Análisis de qué falló, sin culpables |
| Difíciles resueltos bien | 5 | Método de diagnóstico |
| Cliente enfadado con buen desenlace | 3 | Manejo de tono |
| Casos con excepción concedida | 3 | Criterio de decisión y sus límites |
| Casos que se escalaron correctamente | 3 | Cuándo no seguir intentándolo |

## Paso 2 — Formato de cada caso de práctica

1. El mensaje del cliente, tal como llegó.
2. La información disponible en ese momento (plan, historial, estado).
3. **Pausa:** qué harías tú. La persona escribe su respuesta antes de ver nada más.
4. La respuesta que se dio realmente.
5. Comentario: qué funciona, qué habría sido mejor, qué se comprobó y qué no.
6. La regla que se lleva de aquí, en una frase.

El paso 3 es imprescindible. Leer respuestas ajenas enseña la mitad que intentar responder y compararse.

## Paso 3 — Sesiones cortas

Diseña sesiones de 30 minutos con estructura fija: un caso práctico, comparación de respuestas del grupo, la regla del día y un compromiso concreto para la semana. Una a la semana sostenida vale más que una jornada de formación trimestral.

Temas por orden de utilidad, ajustados a mis errores frecuentes: verificar antes de afirmar, responder a todo lo preguntado, escribir pasos que se puedan seguir, decir que no sin cerrar la puerta, manejar el enfado sin someterse, y saber cuándo escalar.

## Paso 4 — Autonomía por niveles

Define qué puede resolver alguien solo en cada momento: primera semana (solo tipos concretos, con revisión previa al envío), segunda (los frecuentes sin revisión, con muestreo posterior), tercera (todo menos excepciones y facturación), a partir del mes (autonomía completa con las excepciones habituales del equipo).

## Paso 5 — Mantenimiento del material

Cada caso complejo bien resuelto se convierte en material. Define quién lo selecciona, cada cuánto y dónde vive, para que la biblioteca crezca sin proyecto.

## Entregables

1. Criterios de selección y lista de casos a extraer del histórico.
2. Cinco casos de práctica completos, anonimizados.
3. Calendario de sesiones de 30 minutos para un trimestre.
4. Niveles de autonomía con sus criterios.
5. Proceso de mantenimiento de la biblioteca de casos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir el histórico de tickets en material de formación con casos de práctica anonimizados, sesiones cortas y niveles de autonomía',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Medir el ahorro real de la IA en soporte: deflexión, coste por ticket y calidad',
                'description'      => 'Calcula si el autoservicio y la automatización están ahorrando de verdad, separando el efecto real del desplazamiento de tickets y del deterioro de la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como analista de operaciones de soporte. Hemos implantado autoservicio y automatización con IA, y hay cifras optimistas circulando. Quiero saber qué está pasando de verdad.

## Contexto que necesito

1. Qué se ha implantado y desde cuándo.
2. Volumen de tickets antes y después, por canal y por motivo.
3. Datos de uso del centro de ayuda o del asistente: consultas, resoluciones declaradas, derivaciones.
4. Coste del equipo y coste de las herramientas.
5. Satisfacción antes y después, y tasa de reapertura.

## Paso 1 — La trampa de la deflexión

La métrica que casi todos usan mal. Una consulta atendida por el asistente no es un ticket evitado si:

- El cliente después abre el ticket igualmente (mira las derivaciones y los tickets con conversación previa).
- El cliente se va sin resolver y sin escribir (esto no aparece en ninguna métrica y es el peor resultado posible).
- El ticket se ha desplazado a otro canal: teléfono, redes, comercial, o directamente a una cancelación.

Define la deflexión defendible: consultas resueltas sin contacto posterior en N días, medido sobre el mismo cliente. Y dime cómo obtener ese dato con lo que tengo.

## Paso 2 — Coste por ticket bien calculado

| Componente | Qué incluir |
|---|---|
| Coste del equipo | Salarios y cargas, más la parte de supervisión |
| Herramientas | Licencias, consumo variable, mantenimiento |
| Tiempo de mantenimiento del contenido | Horas de documentación y de ajuste del asistente |
| Retrabajo | Tickets reabiertos y escalados evitables |

El coste de mantenimiento del contenido y del sistema se olvida siempre, y es recurrente. Un asistente que nadie mantiene degrada su calidad en meses.

## Paso 3 — Comparación honesta

Compara el mismo periodo del año anterior y controla lo que ha cambiado además de la IA: número de clientes, lanzamientos de producto, incidencias, cambios de precio, estacionalidad. Si el volumen ha bajado un 20% y la base de clientes ha bajado un 15%, el ahorro atribuible es otro.

## Paso 4 — El otro lado de la balanza

Comprueba que el ahorro no se está pagando con experiencia:

- Satisfacción por tipo de resolución: autoservicio, asistente, agente.
- Tasa de reapertura.
- Tiempo total hasta la resolución, no tiempo de primera respuesta (una respuesta automática instantánea mejora ese indicador sin resolver nada).
- Esfuerzo del cliente: cuántos pasos ha tenido que dar.
- Abandono en el flujo del asistente.

## Paso 5 — Veredicto y decisiones

- Ahorro atribuible con su intervalo de incertidumbre, no una cifra única falsamente precisa.
- Qué está funcionando y conviene ampliar.
- Qué está desplazando trabajo en lugar de eliminarlo, y hay que corregir.
- Qué habría que dejar de automatizar.

## Entregables

1. Definición defendible de deflexión y cómo medirla con mis datos.
2. Coste por ticket antes y después, con todos los componentes.
3. Comparación controlada por los factores externos.
4. Cuadro de calidad de la experiencia por tipo de resolución.
5. Veredicto con tres decisiones concretas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Medir el ahorro real de la automatización en soporte separando deflexión defendible de desplazamiento de tickets y controlando la calidad de la experiencia',
                'vote_score'       => 32,
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
