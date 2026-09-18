<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills303Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing problem solving: marcos para resolver problemas de crecimiento sin datos perfectos',
                'description'      => 'Metodología de resolución de problemas aplicada al marketing: cómo diagnosticar correctamente, generar hipótesis y tomar decisiones de crecimiento cuando los datos son incompletos o contradictorios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con experiencia en resolver problemas de crecimiento en startups y empresas establecidas, en entornos donde nunca hay datos perfectos y el tiempo apremia. Has trabajado en situaciones donde la intuición sin estructura lleva al equipo a perseguir síntomas en lugar de causas raíz.

Tengo un problema de marketing que necesito resolver y quiero hacerlo de forma estructurada.

**El problema:**
[Describe el problema de marketing que estás experimentando. Por ejemplo: las campañas de performance ya no funcionan como antes, el churn ha subido sin causa aparente, el CAC se ha disparado, o la tasa de conversión del funnel ha caído]

**Los datos que tienes:**
[¿Qué datos tienes disponibles? ¿Qué has medido y qué no puedes medir?]

**Lo que has intentado:**
[¿Qué has probado ya para resolver el problema y qué resultado ha tenido?]

---

**1. El diagnóstico antes de la solución**
El mayor error en marketing es saltar a la solución sin entender la causa raíz. Explica el proceso de diagnóstico estructurado:

*El árbol de causas posibles:*
- Cómo descomponer un problema de crecimiento en sus partes: adquisición, activación, retención, monetización, referencia
- La técnica de los cinco porqués aplicada al marketing: cómo llegar a la causa raíz en lugar de tratar síntomas
- Diferencia entre correlación y causalidad en análisis de marketing: por qué bajar el precio no siempre soluciona el problema de conversión

*Formulación de hipótesis:*
- Cómo formular hipótesis comprobables: "Creemos que X porque Y, y lo sabremos cuando Z"
- Cómo priorizar qué hipótesis testear primero: impacto esperado × facilidad de testeo
- El mínimo experimento válido: el test más pequeño que te dará suficiente información para decidir

**2. Marcos de resolución de problemas de marketing**

*El marco del funnel de adquisición:*
- Cómo identificar en qué etapa del funnel está el problema usando tasas de conversión por etapa
- Benchmarks de conversión por industria para saber si tu problema es real o esperado
- Los síntomas de cada tipo de fuga: qué indicadores apuntan a problemas de awareness, consideración o decisión

*El marco de los segmentos:*
- Cómo segmentar el problema: ¿afecta a todos los usuarios o a un segmento específico?
- Análisis de cohortes para identificar si el problema es reciente o viene de lejos
- Segmentación por canal, geografía, dispositivo o perfil de usuario para aislar la causa

*El marco competitivo:*
- Cuándo el problema es externo (el mercado cambió) vs. interno (tú hiciste algo diferente)
- Cómo usar el benchmarking competitivo para distinguir tendencias del sector de problemas propios
- El análisis de Share of Voice: cómo un cambio en la visibilidad competitiva puede explicar caídas en tu negocio

**3. Tomar decisiones con datos incompletos**
En marketing raramente tienes todos los datos que necesitas. Explica:
- La regla del 80/20 en la recopilación de datos: cuándo tienes suficiente para decidir y cuándo más datos no cambian la decisión
- Cómo usar datos cualitativos (entrevistas, reseñas, feedback) para complementar los cuantitativos
- El coste de la inacción: por qué esperar datos perfectos es también una decisión con consecuencias
- Cómo comunicar la incertidumbre al equipo directivo sin perder credibilidad

**4. Implementación y medición de la solución**
Una vez identificada la causa raíz y la hipótesis de solución, explica:
- Cómo diseñar un experimento que sea estadísticamente válido con el volumen de tráfico que tienes
- La alternativa al A/B test cuando no tienes suficiente tráfico: tests secuenciales, análisis de diferencias en diferencias
- Cómo documentar el experimento para que el conocimiento quede en la organización
- Cuándo declarar éxito y escalar vs. cuándo pivotar la hipótesis

**5. Resolución de mi problema**
Aplica el proceso a mi situación específica:
1. Árbol de causas posibles para el problema que te he descrito
2. Las tres hipótesis más probables ordenadas por probabilidad
3. El experimento mínimo para validar la hipótesis más probable
4. Qué métricas deberías ver mejorar en las próximas 2-4 semanas si la hipótesis es correcta
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diagnóstico y resolución estructurada de problemas de crecimiento y conversión en marketing con datos incompletos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Debugging sistemático: el proceso mental para resolver bugs complejos',
                'description'      => 'Marco de resolución de problemas técnicos para desarrolladores: cómo abordar bugs complejos, intermitentes o en sistemas distribuidos con un proceso estructurado que reduce el tiempo de resolución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software senior con más de 10 años resolviendo bugs difíciles en sistemas de producción. Has trabajado en sistemas distribuidos, aplicaciones de alto tráfico y codebases grandes donde los bugs más peligrosos son los intermitentes y los que aparecen solo en producción.

Tengo un bug que no consigo resolver y necesito un proceso estructurado para abordarlo.

**El bug:**
[Describe el comportamiento incorrecto que observas: qué pasa, cuándo pasa, con qué frecuencia, en qué entorno]

**Lo que has intentado:**
[¿Qué has intentado ya? ¿Qué hipótesis has descartado y cómo?]

**El contexto técnico:**
[Lenguaje, framework, tipo de sistema: web, móvil, microservicio, batch job, etc.]

---

**1. El mindset correcto antes de escribir código**
El debugging efectivo empieza por el proceso mental, no por el editor. Explica:
- La tentación de cambiar código antes de entender: por qué introducir cambios sin hipótesis claras alarga el debugging
- El principio de reproducibilidad: un bug que no puedes reproducir de forma consistente no puedes arreglar de forma confiable
- La diferencia entre el síntoma y la causa: el error que ves en el log raramente es donde está el problema
- El valor de la hipótesis explícita: escribir en papel "creo que el problema es X porque Y" antes de buscar

**2. El proceso de debugging por etapas**

*Etapa 1 – Reproducir el bug de forma consistente:*
- Cómo identificar las condiciones exactas que provocan el bug (datos de entrada, estado del sistema, secuencia de acciones)
- Técnicas para reproducir bugs intermitentes: load testing, fuzzing, simulación de condiciones de red inestable
- Reducción al mínimo caso reproducible: el caso más simple donde el bug aparece
- Entornos de debugging: cuándo necesitas reproducir en producción y cómo hacerlo de forma segura

*Etapa 2 – Formular y priorizar hipótesis:*
- Cómo generar hipótesis basadas en los síntomas observados
- Orden de investigación: empezar por lo más probable, no por lo más fácil
- El método de bisección: cómo dividir el espacio de búsqueda a la mitad con cada prueba
- Cuándo descartar una hipótesis y cuándo profundizar más

*Etapa 3 – Observar, no asumir:*
- Las herramientas de observabilidad que debes conocer: logs estructurados, trazas distribuidas, métricas
- Cómo leer un stack trace y por qué el error en la línea 1 rara vez es la causa raíz
- Técnicas de logging estratégico: añadir logs de diagnóstico sin modificar la lógica de negocio
- Debuggers interactivos: cuándo usarlos y cuándo son contraproducentes

*Etapa 4 – Confirmar la causa raíz antes de arreglarla:*
- La prueba de causa raíz: si puedo hacer que el bug aparezca o desaparezca a voluntad cambiando una sola cosa, encontré la causa
- Análisis de impacto: entender todo lo que puede verse afectado por el fix antes de aplicarlo
- El fix mínimo: la solución más pequeña que resuelve el problema sin introducir riesgo nuevo

**3. Tipos de bugs y cómo abordar cada uno**

*Bugs de condición de carrera (race conditions):*
- Síntomas: comportamiento intermitente, solo aparece bajo carga, reproduce con 1% de probabilidad
- Herramientas: thread sanitizers, análisis estático, pruebas de carga controladas
- El fix: sincronización, diseño sin estado compartido, mensajería asíncrona

*Bugs de memoria:*
- Síntomas: crashes aleatorios, degradación de rendimiento, comportamiento diferente en distintas plataformas
- Herramientas: Valgrind, AddressSanitizer, profilers de memoria
- Cuándo un leak de memoria es aceptable y cuándo es crítico

*Bugs de integración y APIs externas:*
- Síntomas: funciona en local, falla en producción; errores 500 sin causa aparente
- Cómo aislar si el problema es tuyo o del servicio externo
- Contract testing como prevención

**4. Documentación del bug y el fix**
Un bug resuelto sin documentar es una oportunidad perdida. Explica:
- Qué información debe quedar registrada: síntoma, causa raíz, cómo se reprodujo, cómo se arregló
- Post-mortem para bugs críticos: cómo hacer uno que sea útil y no busque culpables
- Cómo convertir un bug complejo en un test automatizado que evite la regresión

**5. Análisis de mi bug**
Aplica el proceso a mi situación:
1. Lista de hipótesis ordenadas por probabilidad basadas en lo que me has descrito
2. Los tres experimentos de diagnóstico que harías primero
3. Las herramientas específicas que usarías en mi contexto técnico
4. Las señales que confirmarían que has encontrado la causa raíz
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Proceso estructurado de debugging para resolver bugs complejos, intermitentes o en sistemas distribuidos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design problem framing: reformular el problema antes de diseñar la solución',
                'description'      => 'Metodología para diseñadores que necesitan reformular el problema de diseño antes de generar soluciones, evitando el error de diseñar la solución incorrecta de forma excelente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador estratégico y facilitador de design thinking con experiencia en proyectos donde el brief inicial del cliente describía el síntoma, no el problema real. Has trabajado en proyectos de diseño de producto, servicio y comunicación donde reformular el problema antes de empezar a diseñar cambió completamente el resultado.

Tengo un reto de diseño y quiero asegurarme de que estoy resolviendo el problema correcto antes de generar soluciones.

**El brief inicial:**
[Describe el encargo que has recibido: qué te han pedido que diseñes o resuelvas]

**El contexto:**
[¿Para quién es? ¿Qué tipo de organización o cliente? ¿Qué saben ellos del problema?]

**Mi intuición:**
[¿Tienes ya alguna sospecha de que el problema real es diferente al que te han descrito?]

---

**1. Por qué el problem framing es la habilidad de diseño más importante**
Contextualiza el valor de reformular el problema:
- La diferencia entre resolver el problema planteado y resolver el problema correcto: el famoso "escalera mal apoyada"
- Por qué los clientes describen soluciones cuando deberían describir problemas: sesgos cognitivos y la presión de parecer que ya saben lo que quieren
- El coste de diseñar la solución incorrecta: tiempo, dinero y credibilidad del equipo de diseño
- La tensión entre el cliente que quiere velocidad y el diseñador que necesita tiempo para entender

**2. Las técnicas de reformulación del problema**

*"How Might We" (¿Cómo podríamos...?):*
- Cómo transformar cualquier brief en una pregunta de diseño abierta
- Los tres niveles de abstracción: demasiado estrecho (solución predefinida), correcto (oportunidad de diseño), demasiado amplio (inabarcable)
- Ejemplos de reformulación: "diseñar un botón de suscripción más visible" → "¿cómo podríamos hacer que los usuarios perciban el valor de suscribirse antes de pedirles que lo hagan?"
- Cómo presentar el HMW al cliente sin que sienta que estás ignorando su petición

*Los cinco porqués aplicados al diseño:*
- Cómo usar la técnica de los cinco porqués en una conversación con el cliente o usuario
- Cómo navegar la resistencia del cliente cuando preguntar "por qué" parece cuestionar su autoridad
- Cuándo parar: el nivel de abstracción donde el diseño puede intervenir de forma útil

*Reencuadre de perspectiva:*
- Cómo ver el mismo problema desde la perspectiva del usuario, del negocio, de la tecnología y de la regulación
- La técnica de "la perspectiva del observador extremo": qué diría alguien que no conoce nada del sector
- Jobs to be Done aplicado al problem framing: ¿qué trabajo está contratando el usuario para que lo haga este diseño?

**3. Research para validar el encuadre del problema**
Antes de empezar a diseñar, hay que confirmar que el problema reencuadrado es real. Describe:
- Las entrevistas de problem framing: qué preguntas confirman o refutan tu hipótesis de problema
- Análisis de comportamiento existente: cómo usan el producto o servicio actual los usuarios (qué hacen realmente vs. lo que dicen que hacen)
- El mapa de stakeholders: quién tiene interés en la definición del problema y cómo sus perspectivas difieren
- El método del "día en la vida": cómo observar el contexto completo en el que ocurre el problema

**4. De la reformulación al brief de diseño**
Explica cómo formalizar el resultado del problem framing:
- El design brief reformulado: cómo documentar el problema real de forma que el equipo pueda trabajar sobre él
- Criterios de éxito del diseño: cómo definir métricas de éxito alineadas con el problema real (no solo con la petición inicial)
- Cómo presentar el brief reformulado al cliente y conseguir su alineamiento sin perder el proyecto
- La firma del brief: por qué es importante que el cliente confirme explícitamente el encuadre del problema antes de empezar a diseñar

**5. Cuando el cliente no acepta la reformulación**
A veces el cliente quiere lo que quiere. Explica:
- Cuándo tiene sentido insistir en el problem framing y cuándo es mejor entregar lo que piden
- Cómo entregar lo que el cliente pide mientras introduces insights del problem framing de forma gradual
- La estrategia del prototipo rápido: cómo usar un wireframe temprano para hacer visible el problema que el cliente no ve

**6. Reformulación de mi reto**
Aplica las técnicas a mi brief:
1. Tres reformulaciones del problema en formato "How Might We" en diferentes niveles de abstracción
2. Las dos preguntas de investigación más críticas que validan cuál es el encuadre correcto
3. Una hipótesis sobre cuál es el problema real detrás del brief que me has dado
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Reformulación del problema de diseño para asegurarse de resolver el reto correcto antes de generar soluciones',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Deal problem solving: desatascar oportunidades que llevan meses paradas',
                'description'      => 'Metodología de diagnóstico y reactivación de oportunidades de venta estancadas: cómo identificar la causa real del bloqueo y las acciones concretas para volver a mover el deal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en ciclos de venta complejos en B2B. Has visto cientos de oportunidades estancarse y has desarrollado un sistema para diagnosticar qué está pasando realmente cuando un deal deja de avanzar, más allá de los motivos superficiales que dan los prospectos.

Tengo una oportunidad de venta que lleva tiempo sin avanzar y necesito diagnóstico y un plan de acción.

**El deal:**
[Describe la oportunidad: qué vendes, a qué empresa, cuánto vale y en qué etapa está del proceso de venta]

**El historial:**
[¿Cuánto tiempo lleva parado? ¿Cuál fue el último avance real? ¿Qué te dice el contacto cuando preguntas?]

**Lo que has intentado:**
[¿Qué has hecho ya para reactivarlo? Follow-ups, nuevas propuestas, descuentos, reuniones adicionales?]

---

**1. Por qué los deals se estancan: las causas reales vs. las excusas**
El primer problema del deal parado es el diagnóstico incorrecto. Explica:
- Los motivos que dan los prospectos vs. los motivos reales: "estamos muy ocupados" raramente significa que están ocupados
- Las señales que distinguen un deal muerto de un deal dormido: cómo saber si el prospecto sigue interesado internamente aunque no responda
- La diferencia entre un obstáculo temporal (presupuesto congelado, cambio de prioridades, reorganización interna) y una señal de que el deal nunca avanzará
- Por qué los vendedores mantienen deals zombis en el pipeline: el sesgo del coste hundido y cómo superarlo

**2. El diagnóstico del deal parado**
Describe el proceso de diagnóstico antes de actuar:

*Análisis del interlocutor:*
- ¿Sigues hablando con la persona correcta? La recomendación de otra persona dentro de la empresa no es venta
- ¿Tu contacto tiene poder de decisión o influencia real en la compra?
- ¿Ha habido cambios en la empresa que afectan a tu contacto? (reorganización, cambio de jefe, salida de la empresa)
- Señales de que tu contacto está perdiendo interés o influencia internamente

*Análisis del proceso de compra del cliente:*
- ¿Conoces todos los participantes en la decisión? El comité de compra que no conoces es el que bloquea el deal
- ¿Has identificado a los influenciadores negativos (los que pueden hundir el deal internamente)?
- ¿Cuál es el proceso real de aprobación del presupuesto en esa empresa?
- ¿Qué tiene que pasar internamente en esa empresa para que el deal avance?

*Análisis de la propuesta de valor:*
- ¿El interlocutor principal tiene claro el ROI de comprar tu solución? ¿Puede defenderlo internamente?
- ¿La urgencia que percibías en las primeras reuniones sigue existiendo?
- ¿Han cambiado las prioridades del cliente desde que empezasteis la conversación?

**3. Las estrategias de reactivación según la causa del bloqueo**
Para cada tipo de bloqueo, describe la acción correcta:

*Bloqueo por falta de urgencia:*
- Cómo crear urgencia legítima sin presionar artificialmente (fechas de precio, cambio regulatorio, coste de la inacción)
- La pregunta que despierta la urgencia: "¿Qué pasa si no resuelves esto en los próximos 6 meses?"

*Bloqueo por falta de acceso al decisor:*
- Cómo conseguir acceso al decisor real sin saltarte a tu contacto de forma que lo quemes
- El "executive sponsorship": cómo usar a tu propio equipo directivo para crear relaciones al nivel correcto

*Bloqueo por presupuesto:*
- Cómo verificar si el problema de presupuesto es real o es una excusa para decir no
- Alternativas de estructura de la oferta que reducen la barrera de aprobación: pago mensual vs. anual, piloto pagado vs. contrato completo

*Bloqueo por competencia interna:*
- Cuando alguien dentro del cliente está promoviendo una solución alternativa (interna o competidora)
- Cómo identificar al detractor interno y cómo neutralizarlo sin confrontación directa

**4. El momento de cerrar o cerrar el deal**
Explica cuándo hay que tomar la decisión difícil:
- Cómo dar un ultimátum de forma profesional que no quema la relación
- El "deadline mutuo": cómo crear un punto de decisión que funciona para ambas partes
- Cuándo es más rentable cerrar el deal (descartarlo del pipeline) y liberar el tiempo del comercial
- Cómo mantener la relación con el prospecto después de cerrar el deal para futuras oportunidades

**5. Plan de acción para mi deal**
Basándote en lo que me has descrito:
1. Diagnóstico de la causa probable del bloqueo
2. Las tres acciones concretas que haría en los próximos 10 días hábiles
3. El criterio de decisión para cerrarlo definitivamente si no avanza después de ese plan
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diagnóstico y reactivación de oportunidades de venta estancadas con análisis de bloqueos y plan de acción concreto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product decision making: frameworks para decidir bajo incertidumbre',
                'description'      => 'Marco de toma de decisiones para product managers que deben decidir rápido con información incompleta: cómo estructurar el análisis, involucrar a los stakeholders y comprometerse con una decisión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Producto con experiencia en empresas de tecnología de alto crecimiento donde las decisiones de producto se toman con datos incompletos, presión de tiempo y múltiples stakeholders con opiniones diferentes. Has desarrollado un sistema para tomar decisiones de calidad de forma consistente, incluso cuando la información perfecta no existe.

Necesito orientación sobre cómo estructurar mis decisiones de producto de forma más efectiva.

**Mi contexto:**
[Describe el tipo de producto que gestionas y cuáles son las decisiones de producto más frecuentes a las que te enfrentas]

**La decisión concreta:**
[Describe la decisión específica que tienes que tomar ahora mismo, con qué información cuentas y cuál es el plazo]

---

**1. El problema con la toma de decisiones de producto**
Contextualiza los errores más comunes que cometen los PMs al decidir:
- Parálisis por análisis: buscar más datos cuando los que existen ya apuntan en una dirección clara
- Decisión por consenso: intentar que todo el mundo esté de acuerdo, terminando con una decisión mediocre que no contenta a nadie
- Hipótesis disfrazadas de datos: presentar suposiciones como si fueran hechos comprobados
- Reversibilidad ignorada: tratar decisiones reversibles como si fueran permanentes (y viceversa)
- Ausencia del marco temporal: no definir cuándo revisarás la decisión si los resultados no son los esperados

**2. El framework de decisión de producto**

*Paso 1 – Clasificar la decisión:*
- Decisiones de tipo 1 (irreversibles o muy costosas de revertir): merecen más análisis y consenso
- Decisiones de tipo 2 (reversibles con bajo coste): deben tomarse rápido y aprenderse sobre la marcha
- Cómo identificar correctamente el tipo: el error de tratar una decisión de tipo 2 como si fuera de tipo 1 paraliza el equipo

*Paso 2 – Definir el criterio de decisión antes de buscar datos:*
- La pregunta clave: "¿Qué datos o hechos me harían cambiar de opinión?"
- Cómo evitar que el análisis confirme lo que ya creías (confirmation bias)
- Los criterios que importan: impacto en el usuario, impacto en el negocio, esfuerzo técnico, riesgo estratégico

*Paso 3 – Generar las opciones reales:*
- Por qué la mayoría de las decisiones tienen más de dos opciones
- La opción "no hacer nada" como alternativa legítima que debe evaluarse
- Cómo combinar opciones para crear una solución híbrida que captura lo mejor de varias alternativas

*Paso 4 – Evaluar con los criterios definidos:*
- La matriz de decisión: cómo comparar opciones en múltiples criterios de forma visual
- Pre-mortem: antes de decidir, imaginar que la decisión fracasó y analizar por qué
- El test del periódico: ¿cómo quedaría esta decisión si apareciera mañana en las noticias?

*Paso 5 – Decidir, comunicar y comprometerse:*
- El formato de comunicación de decisiones de producto: el ADR (Architecture Decision Record) para producto
- Cómo comunicar una decisión impopular de forma que el equipo la entienda y pueda ejecutarla
- El punto de revisión: cuándo y cómo revisarás si la decisión fue correcta

**3. Cómo involucrar a los stakeholders sin que voten**
El PM toma la decisión, pero necesita los inputs correctos. Explica:
- Quién debe dar input vs. quién debe ser informado vs. quién debe dar aprobación
- Cómo hacer una sesión de decisión con múltiples stakeholders que dura menos de 90 minutos y termina con una decisión
- Cómo manejar el stakeholder que siempre tiene una opinión diferente y lo comunica tarde
- La diferencia entre alineamiento y consenso: por qué no necesitas que todos estén de acuerdo

**4. Decisiones bajo presión extrema de tiempo**
A veces no hay tiempo para el proceso completo. Explica:
- El proceso mínimo viable de decisión: qué pasos no puedes saltarte ni con el tiempo limitado
- La heurística del "buen juicio profesional": cuándo confiar en la experiencia acumulada sin más análisis
- Cómo documentar una decisión tomada con prisas de forma que sea aprendible después

**5. Análisis de mi decisión**
Aplica el framework a la decisión concreta que me has descrito:
1. Clasificación de la decisión: tipo 1 o tipo 2
2. El criterio de decisión que debería usar
3. Las opciones reales que existen (incluyendo "no hacer nada" y la opción híbrida)
4. La recomendación con los tres argumentos más fuertes a su favor
5. El punto de revisión: cuándo y cómo sabrás si fue la decisión correcta
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Framework estructurado para tomar decisiones de producto bajo incertidumbre con múltiples stakeholders y tiempo limitado',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People problem solving: diagnosticar y resolver los problemas de talento más complejos',
                'description'      => 'Marco de resolución de problemas de personas para responsables de RRHH y managers: cómo diagnosticar la causa raíz de los problemas de rendimiento, conflicto y cultura, y diseñar intervenciones que funcionan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas con experiencia en diagnóstico y resolución de los problemas de talento más complejos: empleados con bajo rendimiento crónico, conflictos entre equipos, culturas tóxicas heredadas y situaciones donde el problema de personas tiene múltiples causas entrelazadas.

Tengo un problema de personas que necesito resolver y quiero hacerlo de forma estructurada y efectiva.

**El problema:**
[Describe el problema que estás experimentando: un empleado específico, un equipo disfuncional, un patrón de comportamiento, un problema de cultura]

**El contexto:**
[¿Cuánto tiempo lleva el problema? ¿Qué ha pasado ya? ¿Qué impacto tiene en el negocio?]

**Lo que has intentado:**
[¿Qué acciones has tomado ya y qué resultado han tenido?]

---

**1. Por qué los problemas de personas son difíciles de resolver**
Contextualiza la complejidad de la resolución de problemas humanos en organizaciones:
- La multicausalidad: raramente hay una única causa. Un empleado con bajo rendimiento puede tener problemas de motivación, de habilidades, de claridad de rol, de relación con su manager, o de ajuste cultural
- La invisibilidad de las causas raíz: lo que ves (el comportamiento) raramente te dice por qué está pasando
- El sesgo de atribución fundamental: tendemos a atribuir los problemas de personas a características de la persona cuando con frecuencia son problemas del sistema o del contexto
- El coste de las intervenciones incorrectas: una conversación de rendimiento mal diseñada puede empeorar el problema

**2. El proceso de diagnóstico de problemas de personas**

*Nivel 1 – El individuo:*
- Habilidades vs. voluntad: ¿No puede o no quiere? La distinción determina completamente la intervención
- Historia del rendimiento: ¿Es un problema nuevo o lleva tiempo? Un cambio reciente sugiere un disparador externo
- Claridad de expectativas: ¿Sabe exactamente qué se espera de él? Muchos problemas de rendimiento son problemas de comunicación
- Factores externos al trabajo: burnout, situación personal, problemas de salud. Cuándo y cómo abordarlos

*Nivel 2 – La relación con el manager:*
- El estilo de gestión como causa del problema: ¿Hay micro-gestión, ausencia de feedback, favoritismo, comunicación deficiente?
- La relación de confianza: sin confianza mínima entre manager y empleado, ninguna intervención funciona
- El efecto espejo: por qué el comportamiento del empleado a menudo refleja el comportamiento del equipo directivo

*Nivel 3 – El equipo y la dinámica grupal:*
- Dinámicas de grupo que generan problemas individuales: el chivo expiatorio, la coalición dominante, la persona que asume todo el trabajo
- Conflictos estructurales: cuando el problema entre dos personas es en realidad un problema de diseño organizacional (objetivos contradictorios, recursos compartidos, roles ambiguos)
- La cultura del equipo como contexto del problema individual

**3. El diseño de intervenciones**
Para cada tipo de problema, describe la intervención correcta:

*Problemas de rendimiento por falta de habilidades:*
- Plan de desarrollo estructurado: objetivos concretos, recursos, plazos y checkpoints
- Diferencia entre coaching, mentoring y formación: cuándo usar cada uno
- Cuándo el plan de mejora formal (PIP) ayuda y cuándo perjudica

*Problemas de rendimiento por falta de motivación:*
- Las causas de la desmotivación: falta de propósito, falta de autonomía, falta de maestría, falta de reconocimiento
- Conversaciones de motivación: cómo abordarlas sin que parezcan una evaluación de desempeño
- Cuándo la persona simplemente no encaja en el rol o la organización y es mejor para todos reconocerlo

*Conflictos interpersonales:*
- Mediación entre dos personas: el proceso y cuándo usarlo
- Conflictos estructurales: cuándo la solución no es una conversación sino rediseñar roles o procesos
- La escalada: cuándo el conflicto ya no puede resolverse en el nivel donde está y necesita intervención de liderazgo superior

**4. La conversación difícil**
Muchos problemas de personas se alargan porque nadie tiene la conversación necesaria. Explica:
- Cómo preparar una conversación difícil: qué decir, cómo decirlo y qué no decir
- La estructura de la conversación de feedback difícil: situación, comportamiento, impacto, expectativa
- Cómo manejar las reacciones defensivas o emocionales
- La documentación: qué y cómo documentar después de una conversación de rendimiento

**5. Resolución de mi problema**
Aplica el proceso diagnóstico a mi situación:
1. Hipótesis de causa raíz (con nivel de confianza: alta/media/baja)
2. Las tres preguntas que deberías responder antes de actuar para confirmar el diagnóstico
3. La intervención recomendada con los pasos concretos
4. Los indicadores que te dirán en 4-8 semanas si la intervención está funcionando
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diagnóstico y resolución de problemas complejos de talento: rendimiento, conflicto y cultura organizacional',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial problem solving: analizar situaciones complejas con datos incompletos',
                'description'      => 'Marco de resolución de problemas financieros para CFOs y directores financieros que deben diagnosticar situaciones complejas y tomar decisiones cuando los datos no son perfectos ni completos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en situaciones financieras complejas: empresas con problemas de liquidez, crecimientos que no se reflejan en el flujo de caja, márgenes que se deterioran sin causa aparente, o estructuras financieras que esconden problemas operativos. Has aprendido a navegar la incertidumbre y a tomar decisiones financieras de calidad con datos imperfectos.

Tengo una situación financiera compleja que necesito diagnosticar y resolver.

**La situación:**
[Describe el problema financiero que estás experimentando: qué métrica está mal, qué síntomas ves, desde cuándo]

**Los datos disponibles:**
[¿Qué información financiera tienes? ¿Qué cuentas con detalle y qué solo a nivel agregado?]

**Lo que ya sabes:**
[¿Qué causas has descartado ya y por qué?]

---

**1. El proceso de diagnóstico financiero**
Explica cómo abordar un problema financiero de forma estructurada:
- La diferencia entre síntoma y causa en finanzas: el deterioro del margen es un síntoma, no una causa
- La descomposición del problema: cómo separar el efecto volumen, precio y mezcla (mix) para aislar la causa real
- El análisis de varianza: cómo comparar el resultado actual vs. el presupuesto o el período anterior para identificar las diferencias relevantes
- Por qué los problemas financieros tienen siempre una explicación operativa: el dinero es el resultado de decisiones de negocio

**2. Los problemas financieros más frecuentes y cómo diagnosticarlos**

*Problema de liquidez a pesar de rentabilidad:*
- La trampa del beneficio sin caja: una empresa puede ser rentable y quedarse sin dinero
- Análisis del ciclo de conversión de caja: días de cobro, días de pago, días de inventario
- Cómo identificar si el problema es de capital de trabajo, de inversión o de estructura de deuda
- Las señales tempranas de un problema de liquidez antes de que sea una crisis

*Problema de deterioro de margen:*
- Descomposición del margen bruto: volumen, precio medio, coste de ventas
- Cómo identificar si el problema es de pricing, de estructura de costes o de mezcla de producto
- El análisis de rentabilidad por cliente, producto o canal: dónde se destruye el margen
- La palanca de precio vs. la palanca de coste: cuál atacar primero y por qué

*Problema de crecimiento sin mejora del resultado:*
- El efecto escala negativo: cuando crecer cuesta más de lo que genera
- Análisis del incremento marginal de costes: qué costes crecen más rápido que los ingresos
- Modelos de negocio con economías de escala negativas y cómo identificarlos a tiempo
- El punto de inflexión: cuándo el crecimiento empieza a mejorar los márgenes

*Problema de forecast incorrecto de forma sistemática:*
- Por qué los presupuestos siempre se desvían en la misma dirección (siempre por encima o siempre por debajo)
- Sesgos en el proceso de presupuestación: optimismo, juego político, datos base incorrectos
- Cómo construir un forecast de mayor calidad: zero-based budgeting, driver-based forecasting

**3. Análisis financiero con datos incompletos**
El problema más frecuente: los datos que necesitas no existen o no son fiables. Explica:
- La técnica de triangulación financiera: cómo llegar al mismo número desde tres fuentes distintas para validarlo
- Cuándo los datos son suficientemente buenos para decidir: la regla del 80% de confianza
- Cómo comunicar la incertidumbre de los datos a los stakeholders sin perder credibilidad
- Los datos proxy: cuando no tienes el dato que necesitas, qué dato relacionado te da suficiente señal

**4. La decisión financiera bajo presión**
Describe cómo tomar decisiones financieras cuando el tiempo es limitado:
- El árbol de decisión financiero: cómo estructurar opciones con sus consecuencias probables
- La reversibilidad como criterio: las decisiones financieras irreversibles merecen más análisis
- El análisis de sensibilidad express: las dos variables más críticas y cómo el resultado cambia si se mueven
- Cuándo actuar sin datos perfectos es menos arriesgado que esperar tener más información

**5. Plan de diagnóstico y acción para mi situación**
Aplica el proceso a mi caso:
1. Hipótesis de causa raíz ordenadas por probabilidad
2. Los tres análisis que haría en los próximos 5 días para confirmar el diagnóstico
3. Las acciones financieras inmediatas (primeras 2 semanas) y a medio plazo (30-90 días)
4. Los indicadores que te dirán si las acciones están funcionando
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diagnóstico y resolución de problemas financieros complejos: liquidez, márgenes y crecimiento con datos incompletos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal problem solving: encontrar la solución cuando la ley no tiene respuesta clara',
                'description'      => 'Metodología de resolución de problemas jurídicos para abogados y asesores legales que se enfrentan a situaciones donde la norma no da una respuesta clara y hay que razonar para llegar a la mejor solución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado con 15 años de experiencia en derecho corporativo y resolución de situaciones jurídicas complejas donde la aplicación directa de la norma no es posible porque la ley es ambigua, hay conflicto entre normas, la situación no está prevista por el legislador, o la interpretación correcta es genuinamente disputada.

Tengo una situación jurídica compleja donde la respuesta legal no es obvia y necesito un proceso estructurado para llegar a la mejor posición.

**La situación:**
[Describe el problema jurídico: los hechos relevantes, qué quiere el cliente y cuál es la dificultad legal]

**El contexto:**
[Jurisdicción aplicable, plazos, si hay litigio activo o es una consulta preventiva]

**Lo que ya sabes:**
[¿Qué normas has identificado? ¿Qué interpretaciones conoces? ¿Qué posición tienes provisionalmente?]

---

**1. Los tipos de problemas legales sin respuesta clara**
Contextualiza las diferentes fuentes de incertidumbre jurídica:
- Lagunas legales: situaciones que el legislador no previó (tecnología, modelos de negocio nuevos, situaciones inéditas)
- Normas ambiguas: cuando el texto de la ley admite interpretaciones diferentes y legítimas
- Conflicto entre normas: normas del mismo rango o de rangos distintos que apuntan en direcciones opuestas
- Evolución jurisprudencial: cuando hay sentencias contradictorias o la doctrina está en transición
- Normas de otros sistemas jurídicos: cuando hay que aplicar derecho extranjero o derecho internacional

**2. El proceso de resolución del problema jurídico**

*Paso 1 – Identificación precisa del problema legal:*
- La formulación de la pregunta jurídica: qué pregunta exactamente necesita respuesta
- Separación de hechos y derecho: qué es un hecho probado, qué es una valoración jurídica, qué es una conclusión
- Los elementos constitutivos de la norma: descomponer la regla jurídica en sus requisitos para verificar cuáles están presentes y cuáles son dudosos

*Paso 2 – Mapeo de las fuentes:*
- Jerarquía de fuentes en el sistema jurídico aplicable: ley, reglamento, costumbre, principios generales
- Jurisprudencia como fuente de interpretación: cómo buscar y ponderar sentencias relevantes
- Doctrina científica: cuándo los autores académicos tienen peso en la argumentación
- Derecho comparado: cuándo mirar cómo resuelven el mismo problema otros sistemas jurídicos

*Paso 3 – Generación y evaluación de argumentos:*
- Los métodos de interpretación jurídica: literal, sistemática, histórica, teleológica
- Argumentos a contrario, por analogía, por mayoría de razón
- El test de coherencia interna: ¿la interpretación propuesta es coherente con el resto del sistema jurídico?
- La evaluación de la solidez de cada argumento: fuerte, moderado, débil, y por qué

**3. La construcción de la posición jurídica**
Explica cómo llegar a una posición defendible cuando la certeza absoluta no existe:
- La distinción entre la posición más segura y la posición más favorable para el cliente
- Cuándo recomendar la posición conservadora y cuándo la más agresiva: análisis coste-beneficio del riesgo legal
- La opinión jurídica como producto: cómo estructurar una posición legal con sus fundamentos y sus limitaciones
- La gestión de la incertidumbre: cómo comunicar al cliente un riesgo legal sin alarmarlo ni minimizarlo

**4. Estrategias cuando la incertidumbre legal es alta**
Describe las opciones cuando no hay una respuesta clara:
- Consulta a la administración: cuándo pedir un criterio interpretativo formal a la autoridad reguladora
- Petición de resolución vinculante (DGT, DGRN, etc.): costes, plazos y efectos
- Structuring: cómo reorganizar la operación para reducir la exposición legal
- Obtención de opinión de segundo abogado para gestionar el riesgo de un error de interpretación propio
- Cláusulas contractuales que asignan el riesgo de interpretación entre las partes

**5. Análisis de mi situación**
Aplica el proceso a la situación que me has descrito:
1. Formulación precisa de la pregunta jurídica
2. Las normas aplicables con indicación de cuáles son claras y cuáles son el foco de la incertidumbre
3. Los dos o tres argumentos más sólidos para cada posición posible
4. Mi recomendación provisional y los pasos de investigación adicionales que confirmarían o cambiarían esa posición
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Resolución estructurada de problemas jurídicos complejos con incertidumbre normativa, lagunas legales o interpretaciones disputadas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Complex customer problem solving: resolver los problemas que ningún manual cubre',
                'description'      => 'Marco de resolución de problemas para agentes y managers de Customer Support que se enfrentan a situaciones complejas, únicas o de alto riesgo que escapan a los protocolos estándar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia resolviendo las situaciones más complejas del servicio al cliente: casos que no tienen protocolo, clientes en situaciones extremas, errores de la empresa con consecuencias graves, y situaciones donde la solución correcta requiere creatividad, autonomía y criterio.

Tengo una situación de cliente compleja que necesito resolver correctamente y que va más allá de lo que cubre nuestro manual de soporte.

**La situación:**
[Describe el problema del cliente: qué pasó, qué impacto tuvo en él, cómo ha llegado al equipo de soporte y qué ha pasado hasta ahora]

**El contexto:**
[¿Es un cliente de alto valor, hay un error de la empresa implicado, hay riesgo legal o de reputación, o es una situación emocionalmente muy cargada?]

**Las limitaciones:**
[¿Qué puedes y no puedes ofrecer? ¿Tienes autonomía para tomar decisiones o necesitas aprobación?]

---

**1. La diferencia entre un problema de soporte estándar y uno complejo**
Contextualiza cuándo una situación de cliente requiere un enfoque diferente:
- El problema estándar sigue un protocolo; el problema complejo requiere criterio y creatividad
- Los indicadores de complejidad: situación única o infrecuente, cliente en estado emocional extremo, error grave de la empresa, riesgo legal o de reputación, solución que requiere exceder los límites de autorización habituales
- Por qué los protocolos ayudan en la mayoría de los casos pero perjudican en los casos extremos
- La autonomía como recurso: cuándo dar poder al agente para resolver y cuándo escalar

**2. El proceso de resolución de problemas complejos de cliente**

*Paso 1 – Diagnóstico antes de actuar:*
- Qué pasó realmente: separar los hechos de la interpretación del cliente y de la interpretación del agente
- Cuál es el daño real del cliente: daño económico, daño emocional, daño reputacional, pérdida de tiempo
- Qué espera el cliente: no siempre es una compensación económica; a veces es reconocimiento, explicación o simplemente que alguien lo escuche
- Qué responsabilidad tiene la empresa: error propio, error compartido, o situación externa que la empresa puede o no resolver

*Paso 2 – Gestión emocional antes de gestión del problema:*
- Por qué el cliente enojado no puede escuchar soluciones hasta que siente que ha sido escuchado
- La secuencia: escucha activa → validación de la emoción → reconocimiento del problema → búsqueda de solución
- Las palabras que escalan y las que desescalan: el microcopy de la crisis de cliente
- Cuándo es contraproducente disculparse y cuándo es imprescindible hacerlo

*Paso 3 – Diseño de la solución:*
- El inventario de opciones: qué puedes ofrecer dentro de tus límites de autorización
- La solución creativa: qué puedes hacer más allá del protocolo estándar que resuelve el problema sin crear precedentes problemáticos
- El coste de retener al cliente vs. el coste de perderlo: el análisis que justifica ir más allá del protocolo
- Cuándo la solución correcta para el cliente es también la correcta para la empresa y cuándo hay tensión entre ambas

*Paso 4 – Comunicación y cierre:*
- Cómo comunicar la solución de forma que el cliente sienta que se ha ido más allá de lo esperado
- El cierre emocional: asegurarse de que el cliente no solo está satisfecho con la solución sino con cómo fue tratado
- La documentación: cómo registrar el caso para que sirva de aprendizaje sin crear precedentes no deseados

**3. Situaciones específicas de alta complejidad**
Describe el enfoque para los tipos más complicados:

*Error grave de la empresa con consecuencias económicas para el cliente:*
- Reconocimiento, responsabilidad y compensación: la secuencia correcta y los errores que la empresa comete
- Cómo calibrar la compensación: ni demasiado poco (que el cliente se va igualmente) ni demasiado (que crea precedente)

*Cliente en crisis emocional o situación personal extrema:*
- Señales de que el cliente no está en condiciones de resolver el problema en este momento
- Protocolos de crisis: cuándo el servicio al cliente se convierte en atención a una persona en dificultad
- Los límites del rol del agente de soporte: qué hacer cuando la situación supera lo que el soporte puede manejar

*Situación con riesgo legal o de reputación pública:*
- Las primeras 24 horas de una crisis de cliente que puede escalar a medios o redes sociales
- Cuándo involucrar a legal o a comunicación y cómo coordinar sin perder tiempo
- Cómo documentar todo lo que pasa en una situación de alto riesgo

**4. Resolución de mi situación**
Aplica el proceso a la situación que me has descrito:
1. Diagnóstico: qué tipo de problema complejo es y cuál es la causa raíz del malestar del cliente
2. El estado emocional del cliente y cómo manejarlo en los próximos 5 minutos
3. La solución recomendada y cómo comunicarla
4. Si necesitas escalar, cómo preparar el caso para quien toma la decisión
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Resolución de situaciones de cliente complejas y de alto riesgo que van más allá de los protocolos estándar de soporte',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Problem solving del freelance: gestionar proyectos que salen mal sin perder el cliente',
                'description'      => 'Marco de resolución de problemas para freelancers que enfrentan proyectos en crisis: retrasos, desviaciones de scope, clientes insatisfechos y situaciones donde el proyecto se ha descarrilado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con 10 años de experiencia gestionando proyectos complejos para clientes de todo tipo. Has vivido situaciones donde el proyecto se descarrila, el cliente cambia de opinión en la mitad, los plazos se vuelven imposibles, o el resultado no está a la altura de las expectativas. Has aprendido a resolver estas situaciones sin perder el cliente y sin perder tu reputación.

Tengo un proyecto freelance que está en crisis y necesito orientación para gestionarlo correctamente.

**La situación:**
[Describe qué está pasando: ¿el proyecto va con retraso, el cliente está insatisfecho, el scope ha crecido desmesuradamente, o hay un conflicto abierto?]

**El contexto:**
[¿Qué tipo de proyecto es, cuánto tiempo lleva, qué acuerdos iniciales había y cuánto se ha pagado?]

**Tu posición:**
[¿Cuánta responsabilidad tienes tú en la situación? ¿Ha habido errores tuyos, del cliente, o es un factor externo?]

---

**1. Por qué los proyectos freelance se descarrilan**
Contextualiza las causas más frecuentes de crisis en proyectos independientes:
- Scope creep no gestionado: el proyecto que empieza siendo "pequeño" y termina siendo el doble de grande
- Expectativas no alineadas desde el inicio: el cliente imaginó algo diferente a lo que acordasteis
- Comunicación deficiente durante el proyecto: pequeños problemas que se acumulan hasta explotar
- Errores de estimación: el tiempo o el esfuerzo real supera con creces lo que cotizaste
- Factores externos: el cliente cambia de dirección, hay personas nuevas en el equipo del cliente, o el contexto del negocio cambia
- Calidad por debajo de las expectativas: el resultado entregado no cumple con lo que el cliente esperaba

**2. El diagnóstico de la crisis**
Antes de actuar, hay que entender qué está pasando realmente:
- ¿El problema es técnico (el trabajo no está bien hecho), de expectativas (está bien pero no es lo que querían), de proceso (la gestión del proyecto ha fallado) o de relación (hay un conflicto personal)?
- ¿Cuánta responsabilidad tienes tú, cuánta el cliente y cuánta es del contexto?
- ¿El cliente quiere resolver el problema o quiere escalar el conflicto?
- ¿La relación tiene futuro o es mejor gestionarla hacia una salida limpia?

**3. Estrategias de resolución según el tipo de crisis**

*Crisis de retraso:*
- La conversación proactiva: cómo comunicar un retraso antes de que el cliente lo detecte
- El plan de recuperación: cómo presentar un plan creíble que recupere la confianza
- Gestión de las consecuencias del retraso: cuándo ofrecer algo (descuento, trabajo adicional) y cuándo no
- Cuándo pedir extensión de plazo y cómo negociarla sin dañar la relación

*Crisis de scope descontrolado:*
- Cómo documentar el scope creep y presentarlo al cliente sin que parezca una acusación
- La conversación de renegociación: cómo pedir más dinero o más tiempo por trabajo adicional sin que el cliente sienta que le estás cobrando de más
- La regla del cambio documentado: cualquier modificación del scope inicial debe tener aprobación escrita

*Crisis de calidad:*
- Cómo recibir feedback negativo sin ponerse a la defensiva
- La distinción entre "esto no me gusta" (preferencia subjetiva) y "esto no cumple los requisitos acordados" (problema objetivo)
- El plan de corrección: cómo comprometerte a mejorar el resultado sin asumir que el cliente siempre tiene razón

*Crisis de relación abierta:*
- Cómo desescalar un conflicto cuando el tono de la comunicación ya es hostil
- La conversación de reset: cómo proponer volver a cero y reformular la relación
- Cuándo involucrar a un mediador y cómo proponer la mediación sin que parezca debilidad

**4. Protección del freelance**
Más allá de resolver la crisis del proyecto, hay que protegerte a ti:
- Documentación de todo: por qué cada decisión importante debe quedar por escrito
- Tu contrato como escudo: las cláusulas que te protegen en caso de disputa (alcance definido, condiciones de pago, causa de terminación)
- La retención de derechos: cuándo retener los entregables hasta el pago completo es legítimo y cuándo te perjudica
- Gestión de la reputación online: cómo responder a una reseña negativa de forma profesional
- Cuándo amenazar con acción legal y cuándo no (spoiler: casi nunca conviene amenazar)

**5. La salida limpia cuando el proyecto no tiene solución**
A veces el proyecto no se puede salvar. Explica:
- Cómo terminar un proyecto de forma profesional cuando no hay acuerdo
- Qué se puede y qué no se puede retener cuando el cliente no paga
- Cómo gestionar la comunicación posterior para minimizar el daño a tu reputación
- El aprendizaje del proyecto fallido: qué cambiarías en el próximo contrato para que esto no vuelva a pasar

**6. Plan para mi situación**
Basándote en lo que me has descrito:
1. Diagnóstico: tipo de crisis y distribución de responsabilidades
2. La conversación que necesitas tener con el cliente en las próximas 48 horas
3. La propuesta concreta de resolución que llevarás a esa conversación
4. El plan B si el cliente no acepta la propuesta
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestión de crisis en proyectos freelance: retrasos, scope creep, clientes insatisfechos y salida limpia cuando no hay solución',
                'vote_score'       => 38,
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
