<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills99Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 10,
                'title'            => 'Vender servicios con IA sin ser técnico: cómo empaquetarlos y qué prometer',
                'description'      => 'Convierte tu oficio actual más IA en una oferta concreta con alcance, entregables y precio, sin prometer transformaciones que no puedes sostener.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de negocio para profesionales independientes. Uso IA a diario en mi trabajo y quiero convertirlo en una oferta vendible, sin fingir que soy ingeniero de machine learning.

## Contexto que necesito

1. Tu oficio actual y a quién sirves.
2. Qué haces ya con IA y cuánto tiempo o dinero ahorra, con números si los tienes.
3. Tarifa actual y forma de cobrar.
4. Tres clientes tipo y su problema más caro.
5. Qué NO quieres hacer, aunque te lo paguen.

## Paso 1 — El posicionamiento honesto

Hay tres formas de vender esto y conviene elegir una:

| Posicionamiento | Qué vendes | Riesgo |
|---|---|---|
| Tu oficio, más rápido | El mismo resultado en menos tiempo | Presión para bajar el precio |
| Tu oficio, con más alcance | Lo que antes no era rentable hacer | Hay que explicar el valor nuevo |
| Implantar IA en su equipo | Que ellos aprendan a hacerlo | Exige método y formación, no solo prompts |

Recomiéndame uno según mi perfil y explícame por qué los otros dos encajan peor. Y avísame de la trampa: si vendes «el mismo resultado más rápido», estás invitando al cliente a pagar menos.

## Paso 2 — Empaquetar tres ofertas

Para cada una: nombre, para quién, problema que resuelve, qué incluye exactamente, qué NO incluye, entregables concretos, duración, precio y qué necesitas del cliente para poder hacerlo.

Un paquete pequeño de entrada (diagnóstico corto y de bajo riesgo), uno principal y uno de continuidad. El de entrada es el que abre puertas cuando no te conocen.

## Paso 3 — Lo que se promete y lo que no

Redacta las promesas en términos verificables: entregables, plazos y, cuando se pueda, resultado medido con la línea base que se mide antes de empezar. Y la lista explícita de lo que no se promete: que la IA no se equivoque, que se sustituya a nadie, que el ahorro sea inmediato sin cambiar procesos.

Aquí es donde este mercado está lleno de humo. Ser el que dice «esto no lo puedo garantizar y esto sí» convierte más de lo que parece, sobre todo con clientes que ya se han llevado un chasco.

## Paso 4 — La objeción principal

Prepara la respuesta a la objeción que vas a oír siempre: «¿y por qué no lo hacemos nosotros directamente con el chat?». La respuesta buena no es defensiva: es explicar qué parte del trabajo es el criterio, la verificación y el proceso, y demostrarlo con un ejemplo de algo que salió mal por no tenerlo.

## Paso 5 — Prueba de que sabes

Sin cartera de clientes en esto, hay que fabricar la prueba: un caso propio con números, una herramienta pequeña y pública, una plantilla que la gente usa, o un antes y después de tu propio negocio. Propón las tres piezas de prueba más rápidas de construir en mi caso.

## Entregables

1. Posicionamiento recomendado con la justificación.
2. Las tres ofertas empaquetadas con alcance, precio y exclusiones.
3. Promesas verificables y lista de lo que no se promete.
4. Guion de respuesta a la objeción principal.
5. Tres piezas de prueba a construir esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir el uso propio de IA en una oferta de servicios empaquetada con alcance, precio y promesas verificables',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auditoría de IA para pymes como servicio: qué entregas y cuánto cobras',
                'description'      => 'El servicio de diagnóstico completo: qué se revisa, cómo se ejecuta en dos semanas, qué informe se entrega y cómo se convierte en un proyecto de implantación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor independiente que ha vendido y ejecutado diagnósticos de IA en pequeñas empresas. Quiero montar este servicio con un alcance cerrado, para no acabar haciendo un proyecto de tres meses cobrando como un informe.

## Contexto que necesito

1. Tu perfil y en qué áreas puedes opinar con criterio.
2. Tipo de empresas objetivo: tamaño, sector, madurez digital.
3. Tarifa diaria de referencia.
4. Si quieres que el diagnóstico lleve a un proyecto tuyo o sea un servicio en sí mismo.

## Paso 1 — Alcance del diagnóstico

Define qué entra y qué no. Como referencia, un diagnóstico de valor real cubre:

| Bloque | Qué se revisa |
|---|---|
| Procesos | Las tareas que más horas consumen, con datos de quien las hace |
| Uso actual | Qué herramientas se usan ya, aprobadas y no aprobadas |
| Datos | Qué información existe, dónde y en qué estado; qué se puede usar |
| Riesgos | Datos que se están pegando donde no se debe, decisiones sin supervisión |
| Capacidades | Nivel real del equipo, no el declarado |
| Oportunidades | Casos priorizados con esfuerzo y ahorro estimados |
| Gobierno | Si hay política, formación y responsables |

Fuera del alcance: implantar, integrar sistemas, formar al equipo, redactar la política. Eso es la fase siguiente y se cobra aparte.

## Paso 2 — Ejecución en dos semanas

Plan día a día:

- Días 1-2: entrevistas con dirección y con responsables de área (6-8 conversaciones de 45 minutos, con guion).
- Días 3-4: observación de las tareas candidatas, con cronometraje real. Aquí aparecen las sorpresas: la tarea que todos creen que cuesta dos horas cuesta seis.
- Día 5: revisión de datos, herramientas y accesos.
- Días 6-7: pruebas rápidas de dos o tres casos, para tener evidencia y no teoría.
- Días 8-9: análisis, priorización y redacción.
- Día 10: presentación y entrega.

Dame el guion de las entrevistas por perfil.

## Paso 3 — El informe

Estructura de lo que se entrega:

1. Resumen de una página para dirección, con las tres decisiones que se piden.
2. Mapa de procesos con horas y coste actual.
3. Casos priorizados: esfuerzo, ahorro estimado, riesgo y prerrequisitos.
4. Riesgos detectados, ordenados por gravedad, con las medidas inmediatas.
5. Plan de 90 días con hitos y responsables internos.
6. Qué NO recomiendo hacer y por qué. Esta sección es la que da credibilidad y la que casi nadie incluye.

## Paso 4 — Precio

Propón el precio en función de mi tarifa y del tamaño de la empresa, con dos formatos: diagnóstico corto (3-4 días, empresas pequeñas) y completo (8-10 días). Incluye qué pasa si el cliente quiere ampliar el alcance a mitad: cómo se recotiza sin discusión.

## Paso 5 — Continuidad

Cómo se plantea la fase siguiente sin que parezca que el informe era un anzuelo: las opciones de implantación con precio orientativo, el criterio para elegir la primera, y la alternativa de que lo hagan ellos con acompañamiento puntual, que a veces es la recomendación correcta.

## Entregables

1. Alcance cerrado, con lo que queda fuera.
2. Plan de ejecución día a día y guiones de entrevista.
3. Índice y estructura del informe, con la sección de «no recomendado».
4. Propuesta de precios en dos formatos y cláusula de cambio de alcance.
5. Guion de la conversación de continuidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y vender un servicio de diagnóstico de IA para pymes con alcance cerrado, plan de ejecución, informe y precio',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Tu flujo de trabajo con IA como freelance: qué automatizar y qué no tocar nunca',
                'description'      => 'Reparte tus tareas de la semana entre lo que delegas, lo que asistes y lo que haces a mano, con el criterio que protege lo que el cliente te paga de verdad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de productividad para profesionales independientes que factura por su criterio, no por sus horas. Quiero rediseñar mi semana con IA sin degradar lo que vendo.

## Contexto que necesito

1. Tu servicio y a quién sirves.
2. Las 15 tareas que ocupan tu semana, con horas aproximadas.
3. Qué parte de tu trabajo pagaría más el cliente si supiera lo que hay detrás.
4. Herramientas que usas hoy.
5. Cuántas horas facturables tienes y cuántas querrías.

## Paso 1 — Separar lo que vendes de lo que soportas

Clasifica mis 15 tareas:

| Tipo | Qué es | Regla |
|---|---|---|
| Núcleo | Lo que el cliente paga: criterio, decisión, relación | No se delega. Se puede acelerar la preparación |
| Producción | Ejecución con criterio, verificable | Asistida, con revisión tuya |
| Soporte | Administración, seguimiento, formato, resúmenes | Delegable, con verificación rápida |
| Ruido | No aporta a nadie y se hace por costumbre | Eliminar, no automatizar |

La cuarta categoría es la más rentable y la que nadie revisa: automatizar una tarea inútil la convierte en una tarea inútil más rápida.

## Paso 2 — Lo que no se delega, y por qué

Sé explícito conmigo. En un negocio de una persona, lo que no se delega suele ser: la conversación con el cliente, el diagnóstico del problema, la decisión difícil, la mala noticia y la revisión final de lo que sale con tu nombre. Si delegas eso, dejas de vender criterio y empiezas a vender producción intercambiable, que es un mercado peor.

## Paso 3 — Los cinco automatismos con mejor retorno

Para las tareas delegables, propón cinco flujos concretos con: qué entra, qué produce, cómo se verifica en un minuto y cuánto tiempo ahorra a la semana. Candidatos habituales en un negocio de una persona:

- De la reunión a las notas y las tareas.
- De las notas a la propuesta, con la plantilla propia.
- Seguimiento de propuestas y de facturas pendientes.
- Preparación de la investigación previa a una primera reunión.
- Borradores de contenido para tu propia captación.

## Paso 4 — El material que hace que funcione

Prepara una vez y sirve siempre: contexto de tu negocio y tus clientes, guía de tu voz escrita, plantillas propias, lista de datos que nunca se pegan, y las instrucciones guardadas por tarea. Sin esto, cada uso empieza de cero y el ahorro es la mitad.

## Paso 5 — Medir de verdad

Cuatro semanas de registro: tarea, minutos antes, minutos después incluyendo la revisión, y si el resultado fue igual, mejor o peor. Al terminar: qué se queda, qué se descarta y en qué se han reinvertido las horas liberadas. Si se han reinvertido en más tareas de soporte, el rediseño ha fracasado.

## Entregables

1. Las 15 tareas clasificadas, con el ruido señalado para eliminar.
2. Lista explícita de lo no delegable en mi caso.
3. Los cinco flujos con su verificación de un minuto.
4. Material de contexto a preparar, con plantillas.
5. Hoja de registro de cuatro semanas y criterio de decisión final.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Rediseñar el flujo de trabajo de un freelance con IA separando lo que se vende de lo que se soporta y midiendo el ahorro real',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cláusula de uso de IA en tu contrato: transparencia sin perder el trabajo',
                'description'      => 'Cómo declarar que usas IA en tu proceso, qué garantías puedes dar de verdad y cómo responder al cliente que lo pregunta o al que lo prohíbe.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor de profesionales independientes con experiencia en contratos de servicios. Uso IA en mi trabajo y quiero dejarlo claro por escrito, sin regalar argumentos para bajar mi precio ni asumir garantías que no puedo cumplir.

Nota: esto produce un borrador y argumentos de negociación. Un contrato con consecuencias relevantes conviene revisarlo con un profesional habilitado.

## Contexto que necesito

1. Tu servicio y qué entregas.
2. En qué partes del proceso usas IA y con qué herramientas y plan.
3. Tipo de cliente: empresa grande, pyme, particular, agencia.
4. Si tus clientes te han preguntado ya, y qué respondiste.
5. Si manejas información confidencial o datos personales de tus clientes.

## Paso 1 — Decidir qué se declara

Tres niveles, con sus consecuencias:

| Nivel | Qué dice | Cuándo conviene |
|---|---|---|
| Silencio | No se menciona | Cada vez menos viable; si el cliente lo descubre después, es un problema de confianza |
| Declaración general | «Uso herramientas de asistencia en mi proceso; el resultado final es mío y respondo de él» | La opción por defecto para la mayoría |
| Declaración detallada | Qué herramientas, en qué fases, con qué revisión | Clientes grandes, sectores regulados, o cuando te lo exigen |

Recomiéndame uno para mi caso. Y ojo con el silencio: cada vez más contratos de cliente incluyen su propia cláusula, y firmar una prohibición que ya estás incumpliendo es el peor escenario posible.

## Paso 2 — Redactar las cláusulas

1. **Declaración de proceso:** uso de herramientas de asistencia, con responsabilidad íntegra del resultado por tu parte.
2. **Confidencialidad:** compromiso de no introducir información confidencial del cliente en herramientas no aprobadas, y de usar planes con condiciones de tratamiento adecuadas.
3. **Titularidad:** el entregable se cede al cliente en los términos habituales, con la garantía honesta que puedes dar (trabajo propio, sin copia deliberada, herramientas con licencia de uso comercial).
4. **Revisión humana:** compromiso explícito de revisión y verificación, que es exactamente lo que el cliente compra.
5. **Datos personales:** si los hay, remisión al acuerdo correspondiente.

Redáctalas en lenguaje claro. Una cláusula que el cliente no entiende genera más preguntas que la que no existe.

## Paso 3 — Las garantías que no puedes dar

Lista de lo que no debes firmar aunque te lo pidan, con la redacción alternativa: que ningún fragmento coincida con obra ajena, que el resultado sea original en sentido absoluto, o que no haya usado IA en absoluto si sí la usas. Prefiere obligaciones de conducta y de subsanación a garantías de resultado imposible.

## Paso 4 — Las conversaciones

Prepara tres guiones:

- **El cliente pregunta si usas IA.** Respuesta honesta y en positivo: qué parte del proceso, qué revisas, por qué el resultado es mejor y no peor.
- **El cliente lo prohíbe.** Preguntar qué le preocupa de verdad —normalmente es confidencialidad o calidad, no la herramienta— y ofrecer la solución a esa preocupación concreta. Si la prohibición se mantiene, valorar el precio y el plazo sin ella, porque cambian.
- **El cliente quiere pagar menos «porque lo hace la IA».** El argumento no es defender tus horas: es que compra un resultado y una responsabilidad. Prepara la respuesta con ejemplos de lo que aportas.

## Entregables

1. Nivel de declaración recomendado con la justificación.
2. Las cláusulas redactadas, listas para tu contrato.
3. Lista de garantías que no debes firmar, con alternativa.
4. Los tres guiones de conversación.
5. Qué revisar si el contrato lo aporta el cliente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Añadir al contrato de un freelance la declaración de uso de IA con garantías cumplibles y preparar las conversaciones con el cliente',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Presupuestar un proyecto que usa IA: coste variable, incertidumbre y riesgos',
                'description'      => 'Cómo poner precio a un proyecto donde parte del coste depende del consumo y parte del resultado es incierto, sin comerte el margen ni asustar al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor independiente con experiencia presupuestando proyectos con componente de IA, incluidos los que salieron mal por presupuestar con optimismo. Tengo un proyecto que cotizar.

## Contexto que necesito

1. Qué pide el cliente y qué se entregaría.
2. Qué parte usa IA: modelo, volumen esperado, si hay integración con sus sistemas.
3. Estado de sus datos y de sus sistemas (esto suele ser el 40% del esfuerzo real).
4. Tu tarifa y tu disponibilidad.
5. Cuánto puedes perder sin que te haga daño, si el proyecto se alarga.

## Paso 1 — Descomponer el trabajo

| Bloque | Certidumbre | Cómo se cotiza |
|---|---|---|
| Diagnóstico y diseño | Alta | Precio fijo |
| Preparación de datos y accesos | **Baja** | Por tiempo, o con supuestos escritos |
| Construcción | Media | Fijo con alcance cerrado |
| Ajuste de calidad (prompts, evaluación) | Baja | Por iteraciones acotadas |
| Integración con sus sistemas | Baja | Por tiempo, con dependencia de terceros declarada |
| Formación y documentación | Alta | Fijo |
| Mantenimiento | Recurrente | Cuota mensual aparte |

Regla: **lo incierto no se cotiza a precio fijo.** El bloque de datos y accesos es donde mueren los presupuestos: llegas y resulta que la información está en tres sitios, sin permisos, y nadie sabe quién los da.

## Paso 2 — El coste de consumo

Explica cómo tratarlo: cálculo de coste por uso, quién paga el consumo (recomendación: cuenta del cliente, a su nombre, siempre que sea posible), techo de gasto y aviso, y qué pasa si el volumen real supera lo previsto.

Nunca asumas el coste variable de un tercero dentro de un precio fijo sin techo. Es la forma más rápida de trabajar gratis si el proyecto tiene éxito.

## Paso 3 — Supuestos escritos

Redacta la lista de supuestos con la consecuencia si no se cumplen: acceso a los sistemas en X días, interlocutor con capacidad de decidir disponible, datos en el formato acordado, número de rondas de revisión incluidas, número de casos de prueba. Cada supuesto incumplido activa una recotización que ya está pactada, así que no hay conversación incómoda a mitad.

## Paso 4 — Riesgos y cómo se reparten

- Que la calidad no alcance el umbral esperado: define el umbral de antemano y qué pasa si no se llega (rediseño, devolución parcial, cierre acordado). No prometas una calidad que depende de datos que no has visto.
- Que el proveedor del modelo cambie precios o condiciones.
- Que el cliente cambie el alcance.
- Que el proyecto dependa de un tercero que no responde.

## Paso 5 — La propuesta

Estructura de la oferta: fase 1 de diagnóstico a precio cerrado y bajo riesgo, con el precio orientativo de las fases siguientes y el compromiso de recotizarlas con información real al terminar. Es más honesto, se vende mejor y evita el presupuesto a ciegas que después hay que renegociar.

## Entregables

1. Desglose del trabajo con la forma de cotizar cada bloque.
2. Tratamiento del coste de consumo, con techo y responsable de pago.
3. Lista de supuestos con su consecuencia.
4. Tabla de riesgos con el reparto propuesto.
5. La propuesta redactada, por fases, con precios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Presupuestar un proyecto con componente de IA separando lo cierto de lo incierto, con techo de consumo, supuestos escritos y reparto de riesgos',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Encontrar clientes para proyectos de IA: dónde están y qué buscan de verdad',
                'description'      => 'El mapa de dónde salen estos encargos, qué señales indican que una empresa está lista para pagar, y el primer mensaje que abre conversación en lugar de sonar a proveedor más.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor independiente que ha conseguido clientes de proyectos de IA sin publicidad y sin ser una referencia conocida. Quiero un plan de captación realista para los próximos 90 días.

## Contexto que necesito

1. Tu oferta y a quién sirve.
2. Tu red actual: antiguos clientes, antiguos compañeros, sector donde te conocen.
3. Tiempo semanal disponible para captación.
4. Casos o pruebas que puedas mostrar hoy.
5. Presupuesto de captación, si hay alguno.

## Paso 1 — De dónde salen estos encargos

Ordenado por probabilidad real para alguien sin marca establecida:

| Vía | Por qué funciona | Esfuerzo |
|---|---|---|
| Clientes actuales y antiguos | Ya confían; el proyecto de IA es una extensión | Bajo |
| Tu red profesional directa | Te conocen trabajando | Bajo |
| Asesorías, gestorías y consultoras pequeñas | Tienen la relación y no tienen el perfil técnico | Medio, muy rentable |
| Asociaciones sectoriales y cámaras | Buscan formación y diagnósticos | Medio |
| Subcontratación para agencias | Volumen estable, margen menor | Medio |
| Contenido especializado en un nicho | Atrae al que ya busca | Alto, lento, duradero |
| Comunidades y eventos del sector del cliente | Ahí está quien tiene el problema | Medio |
| Prospección en frío | Funciona con señal y mensaje muy concreto | Alto |

La tercera fila es la más desaprovechada: el asesor de una pyme tiene la confianza y le piden ayuda con esto constantemente sin saber a quién derivar.

## Paso 2 — Señales de que una empresa está lista

Lo que indica presupuesto y urgencia, no curiosidad: han contratado a alguien para procesos o datos, tienen un problema de volumen creciente con el mismo equipo, han sufrido un error caro por trabajo manual, están en pleno cambio de sistema, o alguien de dirección ha empezado a hablar del tema en público.

Y las señales de que **no** está lista, para no perder meses: quieren «ver qué se puede hacer con la IA» sin problema concreto, no hay nadie que decida, o esperan que el proyecto se pague solo desde el primer mes.

## Paso 3 — El mensaje de entrada

Redacta tres versiones: para cliente antiguo, para asesoría que puede derivar y para contacto en frío con señal. Reglas: nombrar el problema y no la tecnología, una prueba concreta (un caso con número), y una petición pequeña. Nada de «la IA está transformando el sector».

## Paso 4 — La primera conversación

Guion de 30 minutos: qué preguntar para entender el proceso, qué preguntar para saber si hay presupuesto y decisión, cómo detectar que solo quieren una charla gratis, y cómo cerrar con un siguiente paso concreto (normalmente el diagnóstico corto de pago).

Incluye la parte incómoda: cómo decir «esto no lo necesitáis» cuando es verdad. Es lo que hace que te llamen para el siguiente.

## Paso 5 — Plan de 90 días

Reparto semanal de horas entre las vías elegidas, con número de conversaciones objetivo, y los tres indicadores a seguir: conversaciones mantenidas, diagnósticos vendidos y proyectos cerrados.

## Entregables

1. Las tres vías prioritarias para mi caso, con la justificación.
2. Lista de 20 contactos concretos a abordar, sacada de mi red y de mi sector.
3. Los tres mensajes de entrada redactados.
4. Guion de la primera conversación.
5. Plan de 90 días con indicadores semanales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un plan de captación de clientes para proyectos de IA con vías priorizadas, señales de compra y mensajes de entrada',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Formación y talleres de IA como línea de ingresos',
                'description'      => 'Diseña un taller que la gente recomiende: contenido por perfil, ejercicios con el trabajo real de los asistentes, y el modelo de precio y de continuidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como formador independiente con experiencia impartiendo talleres de IA en empresas, incluidos los que salieron regular. Quiero montar esta línea de ingresos con criterio.

## Contexto que necesito

1. Tu experiencia práctica: qué usas de verdad y en qué contexto.
2. Público objetivo: empresa completa, un departamento, profesionales sueltos.
3. Formato posible: presencial, en línea, mixto; duración disponible.
4. Tu tarifa de referencia.
5. Si has dado formación antes y qué tal.

## Paso 1 — El error que arruina estos talleres

Enseñar herramientas en lugar de resolver el trabajo de los asistentes. Al día siguiente nadie usa nada porque nunca se aplicó a su tarea real. Diseña contra eso: **la mitad del tiempo tiene que ser el asistente trabajando en su propia tarea, con acompañamiento.**

Segundo error: mezclar en la misma sala a quien no ha abierto nunca un asistente con quien ya automatiza. Los dos salen insatisfechos. Propón cómo segmentar con una encuesta previa de tres preguntas.

## Paso 2 — Estructura de un taller de 4 horas

| Bloque | Duración | Contenido |
|---|---|---|
| Marco | 30 min | Qué hacen bien y mal estos sistemas, con ejemplos de su sector |
| Método | 45 min | Cómo pedir las cosas y cómo verificar. Con la tarea de cada uno delante |
| Práctica 1 | 60 min | Su tarea real, guiada, con revisión individual |
| Riesgos y datos | 30 min | Qué no se pega, qué se revisa siempre, la política de la empresa |
| Práctica 2 | 60 min | Convertir lo que funcionó en un procedimiento reutilizable |
| Cierre | 15 min | Compromiso concreto de cada uno para la semana siguiente |

El compromiso final es lo que hace que el taller sirva. Sin él, la sensación es buena y el efecto es cero.

## Paso 3 — Materiales

- Encuesta previa: tarea que quieren resolver, nivel, herramienta disponible.
- Cuaderno de trabajo con los ejercicios y espacio para sus prompts.
- Biblioteca de instrucciones por perfil, para llevarse.
- Lista de verificación de revisión, en una tarjeta.
- Resumen posterior con lo producido en la sala.

## Paso 4 — Precio y formatos

Propón precios según mi tarifa para: taller de medio día en empresa, programa de tres sesiones con trabajo entre ellas, sesión abierta para profesionales sueltos, y acompañamiento posterior mensual. Con el criterio de qué incluye cada uno y hasta cuántas personas por sesión (más de 15 con práctica individual no funciona).

## Paso 5 — Que no se quede en el día

Lo que separa un taller de un cambio real: seguimiento a las dos semanas de 30 minutos, un canal para dudas durante un mes, y una medida sencilla del efecto (qué tareas han cambiado y cuánto tiempo ahorran). Esa medida es tu mejor argumento comercial para el siguiente cliente.

## Entregables

1. Encuesta previa de tres preguntas y criterio de segmentación.
2. Programa detallado del taller con tiempos y ejercicios.
3. Índice del cuaderno de trabajo y de los materiales.
4. Propuesta de precios por formato.
5. Plan de seguimiento posterior y forma de medir el efecto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar talleres de IA para empresas con práctica sobre el trabajo real de los asistentes, materiales, precios y seguimiento posterior',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Boletín asistido por IA que no suena a IA',
                'description'      => 'Monta el sistema para publicar cada semana sin que el contenido se vuelva genérico: la parte que aporta la máquina, la que aportas tú y el filtro que impide publicar relleno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como editor con experiencia en boletines profesionales que la gente abre. Quiero publicar con constancia usando IA como apoyo, sin que el resultado suene a lo mismo que reciben de otros diez.

## Contexto que necesito

1. Tu nicho y a quién escribes.
2. Objetivo del boletín: captación, autoridad, comunidad, ventas.
3. Cadencia realista que puedes sostener y tiempo semanal disponible.
4. Qué tienes que otros no: acceso, datos, casos, experiencia, opinión.
5. Dos o tres boletines que te gusten y por qué.

## Paso 1 — Qué hace la máquina y qué haces tú

| Tarea | Quién |
|---|---|
| Vigilancia de fuentes y descarte de lo irrelevante | IA, con tu criterio de filtro |
| Selección final de los temas | Tú |
| La opinión, la interpretación y la consecuencia para el lector | **Tú, siempre** |
| Primer borrador estructural | IA, sobre tus notas |
| El ejemplo propio, la anécdota, el número real | Tú |
| Titulares alternativos y limpieza de texto | IA |
| Revisión final y verificación | Tú |

La regla que define la calidad: **la IA no aporta la opinión.** Un boletín sin opinión propia es un agregador, y de agregadores hay demasiados y son gratis.

## Paso 2 — Estructura fija que reduce el trabajo

Propón una estructura repetible de 4-5 bloques, con el número de palabras de cada uno. Una estructura fija baja el coste de producción y sube la constancia. Como referencia: una idea principal con opinión, un caso o número concreto, dos o tres enlaces comentados —comentados, no listados— y algo utilizable esta semana.

## Paso 3 — El filtro anti-relleno

Antes de enviar, tres preguntas. Si alguna falla, no se envía y se manda otra cosa:

1. ¿Hay algo aquí que el lector no pudiera obtener preguntándole a un chatbot?
2. ¿Hay una opinión que alguien podría discutir? Si nadie puede estar en desacuerdo, no dice nada.
3. ¿Hay algo concreto —un número, un caso, un procedimiento— y no solo consideraciones?

Es mejor saltarse una semana que publicar relleno. Publicar relleno enseña a la gente a no abrirte.

## Paso 4 — Rastros de escritura automática que hay que eliminar

Prepárame la lista de patrones a buscar y quitar de mis borradores: aperturas de contexto grandilocuentes, enumeraciones de tres elementos en cada párrafo, contraposiciones huecas, cierres que resumen lo ya dicho, adjetivos intensificadores, hedging constante y el vocabulario que delata el origen. Y la lista de mis propias muletillas, si te doy dos textos míos.

## Paso 5 — Rutina semanal

Reparto del tiempo en bloques: recolección continua de notas durante la semana (la clave está aquí, no en el día de escribir), selección, escritura, revisión y envío. Con la duración de cada bloque y el día.

## Entregables

1. Reparto de tareas entre tú y la IA.
2. Estructura fija del boletín con extensiones.
3. El filtro anti-relleno en formato tarjeta.
4. Lista de patrones a eliminar en la revisión.
5. Rutina semanal con horas y días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Producir un boletín profesional con apoyo de IA manteniendo opinión propia y aplicando un filtro que impide publicar contenido genérico',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Demostrar que el trabajo es tuyo cuando usas IA: proceso y evidencia',
                'description'      => 'Cómo documentar tu proceso de trabajo para poder responder con tranquilidad a un cliente que duda, a un concurso que lo exige o a una acusación de contenido generado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor de profesionales creativos y técnicos. Uso IA como apoyo y quiero poder demostrar mi aportación: ante un cliente que sospecha, ante un pliego que pide declaración, o ante un detector automático que se equivoca.

## Contexto que necesito

1. Tu oficio y qué entregas: texto, diseño, código, análisis, formación.
2. En qué fases usas IA y con qué herramientas.
3. Si algún cliente lo ha cuestionado ya y en qué términos.
4. Si trabajas con concursos, subvenciones o clientes con políticas estrictas.

## Paso 1 — La conversación de fondo

Aclaremos qué se te pide en realidad, porque no es lo mismo:

| Situación | Lo que preocupa de verdad |
|---|---|
| Cliente que sospecha | Que le estén cobrando por algo sin trabajo detrás |
| Pliego o concurso | Cumplimiento formal y titularidad de derechos |
| Detector automático | Un falso positivo que hay que rebatir |
| Medio o editorial | Política editorial y responsabilidad |

Para cada una, la respuesta útil es distinta. Dime cuál es mi caso principal.

## Paso 2 — Documentar el proceso, no defenderse

La mejor prueba no es un certificado, es el rastro del trabajo. Define qué conservar de forma natural, sin montar burocracia:

- Notas y esquemas previos, con fecha.
- Versiones intermedias del entregable (el historial de versiones o del repositorio ya lo hace por ti).
- Fuentes consultadas y decisiones tomadas, en una línea cada una.
- Registro por entregable: qué se hizo con asistencia, qué se revisó y qué se reescribió.
- Las preguntas que hiciste al cliente y sus respuestas: nadie más tiene esa información.

Ese último punto es la evidencia más fuerte de todas: el trabajo que incorpora contexto que solo tú obtuviste no puede haber salido de una herramienta genérica.

## Paso 3 — Sobre los detectores

Ten claro el argumento técnico para poder explicarlo con calma: los detectores de texto generado producen falsos positivos con frecuencia, penalizan la escritura clara y estructurada, y funcionan peor con quien no escribe en su lengua materna. No son prueba de nada por sí solos.

Respuesta recomendada ante un aviso de detector: no discutir el porcentaje, ofrecer el rastro del proceso —versiones, notas, decisiones—, y explicar el método de trabajo. La conversación se gana con el proceso, nunca con el resultado de otra herramienta.

## Paso 4 — Declaración honesta

Redacta tu declaración estándar de tres frases: qué herramientas usas, en qué fases, y qué responsabilidad asumes sobre el resultado. Una para tu web o propuesta, y otra más formal para pliegos.

## Paso 5 — Cuando el cliente lo prohíbe

Cómo trabajar sin IA cuando el contrato lo exige, y qué cambia en precio y plazo. Y la advertencia clara: no firmes una prohibición que no vas a cumplir. Es el único escenario de este tema que puede acabar de verdad mal.

## Entregables

1. Identificación de mi caso principal y la respuesta que corresponde.
2. Sistema de documentación del proceso, con lo que ya genero de forma automática.
3. Argumentario sobre detectores, en lenguaje para clientes.
4. Declaración estándar en dos versiones.
5. Cómo cotizar un proyecto con prohibición de uso de IA.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Documentar el proceso de trabajo para acreditar la aportación propia cuando se usa IA y responder a clientes, pliegos o detectores',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Precio por valor cuando la IA reduce tus horas: resuelve el dilema del ahorro',
                'description'      => 'Si tardas la mitad, ¿cobras la mitad? El razonamiento y las tácticas para cambiar de precio por horas a precio por resultado sin perder a los clientes que ya tienes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de precios para profesionales independientes. Con IA hago en cuatro horas lo que antes me llevaba doce. Si sigo cobrando por horas, gano un tercio. Y si el cliente se entera, presionará el precio.

## Contexto que necesito

1. Tu servicio y cómo cobras hoy: hora, día, proyecto, retenido.
2. Tres trabajos recientes: precio cobrado, horas antes y horas ahora.
3. Qué obtiene el cliente con tu trabajo, en su moneda: ingresos, ahorro, riesgo evitado, tiempo.
4. Cartera actual: cuántos clientes, cuánto pesa el mayor.
5. Cuánto puedes perder si un cliente se va.

## Paso 1 — El razonamiento que hay que tener claro

El cliente no compra tus horas: compra un resultado y la garantía de que estará bien. Las horas eran una forma de medir, y ha dejado de funcionar. Ayúdame a articularlo sin sonar a excusa, y dime cuál es el argumento honesto en mi caso concreto: qué le sigue costando lo mismo al cliente aunque yo tarde menos (criterio, responsabilidad, experiencia acumulada, garantía de revisión).

## Paso 2 — Poner precio al valor

Para cada servicio:

1. Resultado que produce, en términos del cliente.
2. Valor estimado para él: cuánto le vale ese resultado o cuánto le cuesta no tenerlo.
3. Alternativas que tiene y su coste: otro profesional, hacerlo dentro, no hacerlo.
4. Rango de precio defendible y su justificación.
5. Qué información necesitas del cliente para poder proponerlo (sin esos datos, el precio por valor no se puede sostener).

## Paso 3 — Formatos de cobro

| Formato | Cuándo funciona | Riesgo |
|---|---|---|
| Precio por proyecto | Alcance definible | Ampliaciones no pactadas |
| Paquete de resultado | Entregable repetible | Hay que acotar revisiones |
| Retenido mensual | Necesidad continua | Que se convierta en disponibilidad infinita |
| Precio por tramos | Cliente indeciso | Complejidad |
| Variable ligado a resultado | Resultado medible y atribuible | Difícil de medir, cobro tardío |

Recomiéndame el formato por tipo de servicio y por tipo de cliente.

## Paso 4 — La transición sin perder la cartera

- Clientes nuevos: precio nuevo desde el primer día. Aquí no hay conversación difícil.
- Clientes actuales: cambio en la renovación o en el siguiente proyecto, avisado con antelación, con el motivo dicho en positivo (paquetes con alcance claro, sin sorpresas de factura).
- El cliente que pregunta si ahora tardas menos: respuesta honesta y sin disculparse. Sí, y el resultado es igual o mejor; el precio refleja el resultado.
- El cliente que exige el descuento: decide si es un cliente que quieres conservar. A veces la respuesta correcta es dejarlo ir, y conviene tenerlo pensado antes de la conversación, no durante.

## Paso 5 — Guion y números

Prepara el guion de la conversación de subida o de cambio de modelo, y el cálculo de mi umbral: cuántos clientes puedo perder con el precio nuevo antes de estar peor que ahora. Con ese número, la conversación se afronta de otra manera.

## Entregables

1. Argumento honesto de por qué el precio no baja, adaptado a mi servicio.
2. Análisis de valor por servicio con rango de precio defendible.
3. Formato de cobro recomendado por servicio y cliente.
4. Plan de transición para la cartera actual.
5. Guion de la conversación y cálculo del umbral de pérdida aceptable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Pasar de cobrar por horas a cobrar por resultado cuando la IA reduce el tiempo de trabajo, con plan de transición para la cartera actual',
                'vote_score'       => 37,
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
