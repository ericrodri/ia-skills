<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills349Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Narrativa de marca para pitch deck de inversión',
                'description'      => 'Aprende a construir la historia de tu startup dentro del pitch deck para que los inversores conecten emocionalmente con el problema y la solución. Una narrativa sólida diferencia tu deck de los cientos que ve un VC cada mes. Este prompt te guía para estructurar el storytelling desde el problema hasta la visión de largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación estratégica y narrativa de marca para startups en fase de captación de inversión. Tu especialidad es convertir modelos de negocio complejos en historias claras, emocionalmente resonantes y comercialmente convincentes para audiencias de inversores.

Voy a compartirte información sobre mi startup y necesito que me ayudes a construir la narrativa central de mi pitch deck. Esta narrativa debe funcionar como hilo conductor de todas las diapositivas: desde el problema hasta la visión de largo plazo.

**Información que necesito que me pidas:**
Antes de generar cualquier contenido, hazme las siguientes preguntas:
1. ¿Cuál es el problema que resuelves y a quién afecta?
2. ¿Cómo lo resuelves y qué te hace diferente?
3. ¿Cuál es tu tracción actual (usuarios, ingresos, hitos)?
4. ¿A qué tipo de inversores te diriges (ángeles, VCs, corporativos)?
5. ¿Cuál es la visión de 5-10 años de tu empresa?

**Una vez tengas la información, estructura la narrativa así:**

**1. El gancho (hook)**
Una frase de apertura que capture la magnitud del problema y provoque curiosidad. Debe funcionar en los primeros 15 segundos de una presentación oral.

**2. El problema con contexto emocional**
Describe el dolor del usuario ideal con datos y con una historia concreta. Los inversores financian personas y problemas, no solo tecnología. Usa la estructura: situación → complicación → consecuencia.

**3. La solución como revelación**
Presenta la solución como la respuesta inevitable al problema que acabas de describir. Evita el lenguaje técnico excesivo. El inversor debe entender el valor en 30 segundos.

**4. Por qué ahora (timing)**
Explica los factores del mercado, tecnológicos o regulatorios que hacen que este sea el momento exacto para que tu startup exista. Los VCs invierten en timing tanto como en equipos.

**5. La misión como llamada**
Una declaración de misión de 1-2 frases que exprese el cambio que quieres provocar en el mundo, más allá del negocio. Debe ser ambiciosa pero creíble.

**6. El arco narrativo del deck**
Proporciona un esquema de 10-12 diapositivas con el título sugerido para cada una y una frase que indique qué historia cuenta esa diapositiva dentro del relato global.

**Criterios de calidad:**
- La narrativa debe ser coherente: cada diapositiva debe fluir hacia la siguiente.
- Evita el uso de jerga de startup vacía (disruption, paradigm shift, game changer).
- El tono debe ser confiado sin ser arrogante.
- Incluye al menos un punto de datos por sección para anclar la narrativa en la realidad.

**Formato de entrega:**
Entrega primero el resumen narrativo en un párrafo de 150 palabras que pueda usarse como elevator pitch escrito. Luego desarrolla cada sección con el contenido completo. Al final, incluye tres variantes del gancho para que pueda testear cuál resuena mejor con diferentes perfiles de inversor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la narrativa central de un pitch deck para inversores',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Preparación de due diligence técnica para startups',
                'description'      => 'La due diligence técnica es el proceso por el que un inversor o adquirente revisa la arquitectura, la deuda técnica y la escalabilidad de tu producto antes de cerrar una ronda. Este prompt te ayuda a preparar toda la documentación y respuestas que un CTO externo o un inversor técnico necesitará. Reduce sorpresas desagradables y transmite madurez de ingeniería.',
                'prompt_content'   => <<<'EOT'
Eres un CTO experimentado con historial en startups de Serie A y B que ha pasado por múltiples procesos de due diligence técnica tanto como vendedor como comprador. Conoces exactamente qué buscan los inversores técnicos y qué señales de alerta pueden hundir una ronda.

Necesito que me ayudes a preparar mi startup para superar un proceso de due diligence técnica. Vamos a trabajar en tres fases.

**Fase 1: Diagnóstico inicial**
Hazme las siguientes preguntas para entender el estado actual de mi stack:
1. ¿Cuál es la arquitectura principal de tu producto (monolito, microservicios, serverless)?
2. ¿Qué lenguajes, frameworks y servicios en la nube usas?
3. ¿Tienes cobertura de tests? ¿Qué porcentaje aproximado?
4. ¿Cuál es tu proceso de deployment (CI/CD)?
5. ¿Tienes documentación técnica actualizada?
6. ¿Cuál es tu deuda técnica más significativa?
7. ¿Has tenido incidentes graves en producción en los últimos 12 meses?

**Fase 2: Mapa de áreas de revisión**
Una vez conozcas mi situación, genera un mapa completo de todas las áreas que un inversor técnico revisará, organizadas por nivel de riesgo (alto / medio / bajo):

- Seguridad y gestión de datos (GDPR, cifrado, control de acceso)
- Escalabilidad de la arquitectura
- Calidad del código y deuda técnica
- Propiedad intelectual y licencias de dependencias
- Procesos de ingeniería (revisiones de código, branching strategy)
- Observabilidad (logs, métricas, alertas)
- Continuidad del negocio (backups, disaster recovery)
- Dependencias de personas clave (bus factor)

**Fase 3: Plan de preparación**
Para cada área de riesgo alto que hayas identificado en mi situación específica, proporciona:
a) Una descripción del riesgo desde la perspectiva del inversor
b) La documentación o evidencia mínima que necesito preparar
c) Si hay algo que no puedo resolver antes de la due diligence, la narrativa honesta que debo usar para explicarlo

**Plantillas a generar:**
Al final, crea las siguientes plantillas adaptadas a mi contexto:
- Resumen ejecutivo técnico de 1 página (para que el inversor lo lea antes de la reunión)
- Lista de preguntas frecuentes en due diligence técnica con las respuestas recomendadas para mi caso
- Tabla de deuda técnica con columnas: descripción, impacto en negocio, esfuerzo estimado de resolución, plan de mitigación

**Criterios de presentación:**
Los ingenieros de los fondos de inversión valoran la honestidad sobre la perfección. Un equipo que conoce sus puntos débiles y tiene un plan para resolverlos genera más confianza que uno que pretende no tener problemas. Usa ese principio al ayudarme a redactar las narrativas difíciles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar la documentación técnica para un proceso de due diligence con inversores',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño visual efectivo de un pitch deck para inversores',
                'description'      => 'Un pitch deck no es solo contenido: la jerarquía visual, la paleta de colores y el uso del espacio comunican credibilidad antes de que el inversor lea una sola palabra. Este prompt te guía para tomar decisiones de diseño que refuercen la narrativa de tu startup y hagan que cada diapositiva transmita profesionalidad y confianza. Incluye criterios de evaluación y checklist de calidad.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de comunicación estratégica especializado en materiales de inversión para startups. Has trabajado en decenas de pitch decks que han levantado rondas de financiación, y conoces la diferencia entre un deck que se ve "hecho por el fundador" y uno que proyecta madurez empresarial.

Necesito ayuda para diseñar o mejorar el pitch deck de mi startup. Trabajaremos en los siguientes bloques:

**Bloque 1: Diagnóstico visual**
Antes de hacer recomendaciones, dime si tienes ya un deck (y en qué estado) o si empiezas desde cero. Con esa información, evalúa o define los siguientes elementos:

**Identidad visual aplicada al deck:**
- Paleta de colores: ¿cuántos colores usar? ¿Cuál es el rol de cada uno? (primario, acento, neutros). Los decks exitosos suelen usar no más de 3 colores activos. Proporciona criterios para elegirlos según el sector de la startup.
- Tipografía: ¿qué familias tipográficas transmiten tecnología, confianza, o modernidad según el sector? Recomienda una combinación de tipografía para títulos y para cuerpo de texto, justificando la elección.
- Iconografía y gráficos: cuándo usar iconos vs. imágenes vs. gráficos de datos. Principio de consistencia visual.

**Bloque 2: Estructura visual por tipo de diapositiva**
Para cada uno de estos tipos de diapositiva, describe el layout óptimo y los errores de diseño más comunes:

1. Portada / Title slide
2. Diapositiva del problema
3. Diapositiva de la solución
4. Diapositiva de tracción / métricas
5. Diapositiva del equipo
6. Diapositiva financiera (proyecciones o uso de fondos)

**Bloque 3: Principios de diseño para inversores**
Explica y aplica a mi caso los siguientes principios:
- La regla del 3 segundos: si no se entiende en 3 segundos, rediseña.
- Jerarquía de información: qué debe leerse primero, segundo y tercero en cada slide.
- Uso del espacio en blanco como herramienta de credibilidad.
- Consistencia vs. variedad: cómo mantener interés visual sin perder coherencia.
- Diseño para presentación presencial vs. deck enviado por email (diferencias críticas).

**Bloque 4: Checklist de calidad**
Genera un checklist de 20 ítems que pueda usar para revisar el deck antes de enviarlo a un inversor. Organízalo en tres categorías: contenido, diseño visual y experiencia de lectura.

**Bloque 5: Recursos recomendados**
Lista herramientas de diseño gratuitas o de bajo costo adecuadas para founders sin presupuesto de agencia, con una frase de para qué sirve cada una en el contexto del deck.

Adapta todas las recomendaciones al sector y etapa de mi startup una vez que te las haya compartido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear o revisar el diseño visual de un pitch deck para inversores',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de condiciones con inversores: del term sheet al cierre',
                'description'      => 'Recibir un term sheet es solo el inicio de la negociación. Las condiciones de liquidación preferente, el porcentaje de dilución, los derechos de voto y las cláusulas de anti-dilución pueden tener un impacto enorme en tu futuro como fundador. Este prompt te convierte en un negociador informado que sabe qué defender y dónde ceder.',
                'prompt_content'   => <<<'EOT'
Eres un asesor de M&A y venture capital con 15 años de experiencia en el ecosistema europeo y latinoamericano de startups. Has asesorado a fundadores en más de 80 rondas de inversión y conoces tanto la perspectiva del inversor como la del fundador.

Necesito tu ayuda para prepararme para la negociación de un term sheet con inversores. Trabajaremos en cuatro áreas.

**Área 1: Educación sobre los términos clave**
Explícame en lenguaje claro (sin jerga jurídica innecesaria) qué significa cada uno de estos términos y cuál es su impacto real para el fundador:

- Valoración pre-money vs. post-money
- Liquidación preferente (participating vs. non-participating) y multiplicadores
- Anti-dilución (ratchet de precio amplio vs. cliquet)
- Derechos de voto y cuándo importan
- Board seats: quién los ocupa y qué poder confieren
- Pro-rata rights y follow-on
- Vesting del equipo fundador y cliffs
- Drag-along y tag-along
- Acuerdos de no competencia y no solicitud

**Área 2: Diagnóstico de mi term sheet**
Una vez que me expliques los conceptos, dime qué información necesitas de mi term sheet real para hacer un análisis. Luego, cuando te la comparta, identifica:
- Los tres términos más favorables para el inversor que debería intentar modificar
- Los términos estándar del mercado que no vale la pena negociar
- Los términos que parecen neutros pero pueden tener consecuencias adversas en escenarios específicos (downturn, adquisición, ronda puente)

**Área 3: Estrategia de negociación**
Para cada punto que identifiques como negociable, proporciona:
a) Mi posición de apertura recomendada
b) El mínimo aceptable (walk-away point) típico para un fundador en mi etapa
c) El argumento que debo usar para justificar mi posición
d) La contraoferta que probablemente hará el inversor y cómo responder

**Área 4: Guión para la negociación**
Redacta plantillas de correo electrónico para:
1. Acusar recibo del term sheet y pedir tiempo para revisarlo con asesores
2. Presentar mis contrapropuestas en los puntos clave
3. Cerrar la negociación de manera positiva, independientemente de si he conseguido todo lo que quería

**Principios que debes transmitir:**
- La negociación no es adversarial: el inversor que entra hoy será tu socio durante años.
- Saber cuándo ceder es tan importante como saber qué defender.
- El término más importante en un term sheet a menudo no es la valoración, sino las condiciones de liquidación.
- Un buen abogado especializado en venture capital no es un gasto, es una inversión.

Dame también una lista de preguntas que debería hacer a mi abogado antes de firmar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Prepararse para negociar un term sheet con inversores de venture capital',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto para convencer a inversores en Series A',
                'description'      => 'Los inversores de Series A no compran solo tracción pasada: compran tu capacidad de construir el producto correcto en los próximos 18-24 meses. Este prompt te ayuda a articular tu estrategia de producto de forma que demuestre pensamiento estratégico, priorización rigurosa y comprensión profunda del mercado. Ideal para preparar la sección de producto del pitch.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en startups de alto crecimiento y asesor de fondos de inversión en la evaluación de la madurez de producto de compañías en etapa seed y Series A. Sabes exactamente qué hace que la estrategia de producto de una startup inspire confianza a los inversores más exigentes.

Voy a preparar la presentación de mi estrategia de producto para una ronda de inversión. Necesito tu guía estructurada.

**Paso 1: Contexto que necesitas de mí**
Antes de generar el contenido, hazme estas preguntas:
1. ¿En qué etapa estás (pre-product, MVP, product-market fit, scaling)?
2. ¿Cuántos usuarios activos tienes y cuál es tu métrica norte?
3. ¿Cuál es el principal problema de retención o activación que estás resolviendo?
4. ¿Cuál es tu roadmap actual para los próximos 6 meses?
5. ¿Qué te diferencia del competidor más directo a nivel de producto?

**Paso 2: Framework de estrategia de producto para inversores**
Con la información que me des, ayúdame a estructurar mi estrategia en estos bloques:

**Visión de producto (12-36 meses):**
- La imagen del producto en su estado ideal dentro de 3 años
- Los 2-3 apuestas estratégicas que te llevan ahí
- Por qué este camino y no otro

**Estado actual del producto:**
- Qué problema resuelve hoy con qué profundidad
- Métricas de producto que demuestran value delivery (retención, NPS, tiempo hasta valor)
- Las decisiones de producto más importantes que has tomado y por qué

**Roadmap para los próximos 18 meses post-inversión:**
- Organizado por fases, no por funcionalidades
- Para cada fase: el objetivo estratégico, las métricas de éxito y las hipótesis que estás probando
- Cómo el capital de la ronda habilita cada fase

**Proceso de decisión de producto:**
- Cómo priorizas (qué framework usas o cómo piensas)
- Cómo incorporas feedback de usuarios al roadmap
- Cómo mides si lo que construiste funcionó

**Paso 3: Preguntas difíciles de inversores**
Dame las 10 preguntas más duras que un inversor puede hacerme sobre mi estrategia de producto, y las respuestas recomendadas para cada una, incluyendo cómo manejar áreas donde mi estrategia aún tiene incertidumbre.

**Paso 4: Diapositiva de producto**
Redacta el contenido textual para una sola diapositiva de estrategia de producto que pueda incluir en el pitch deck: máximo 5 bullets y un titular que capture la apuesta estratégica central.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Articular la estrategia de producto ante inversores de Series A',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Presentación del equipo fundador ante inversores',
                'description'      => 'Los inversores dicen que invierten en el equipo antes que en la idea. Pero articular por qué tu equipo es el adecuado para resolver este problema es más difícil de lo que parece. Este prompt te ayuda a construir la narrativa del equipo fundador que destaca la combinación de habilidades, experiencias y motivaciones que os hacen únicos para este mercado.',
                'prompt_content'   => <<<'EOT'
Eres un reclutador ejecutivo especializado en equipos fundadores de startups y asesor de fondos de inversión en la evaluación del capital humano de las compañías en las que invierten. Has visto cómo el mismo producto puede convencer o no dependiendo de cómo se presenta el equipo.

Necesito construir la narrativa del equipo fundador de mi startup para incluirla en el pitch deck y en mis conversaciones con inversores.

**Información que necesitas de mí:**
Hazme estas preguntas sobre cada miembro del equipo fundador:
1. Nombre, rol actual en la startup y rol anterior más relevante
2. Logro profesional más relevante que se relacione directamente con el problema que resuelven
3. ¿Por qué esta persona y no otra para este rol?
4. ¿Cuánto tiempo llevan juntos trabajando y cómo se conocieron?
5. ¿Hay algún gap en el equipo que el capital de la ronda va a cubrir?

**Con esa información, desarrolla los siguientes entregables:**

**Narrativa del equipo para el deck (slide de equipo):**
- Una frase de apertura que capture por qué este equipo específico está destinado a resolver este problema
- Para cada fundador: 2-3 líneas que conecten su experiencia pasada con el reto actual (no un CV, sino una historia de causa y efecto)
- Una frase sobre la dinámica del equipo: cuánto tiempo llevan juntos y qué les une más allá de la startup

**Narrativa del equipo para conversaciones verbales:**
- Un párrafo de 90 segundos que cualquier fundador pueda memorizar para responder a "cuéntame sobre tu equipo"
- Versión de 30 segundos para cuando el tiempo es limitado

**Gestión de debilidades del equipo:**
- Identifica los dos o tres gaps más evidentes que un inversor verá (experiencia, habilidades, diversidad)
- Para cada gap, proporciona la respuesta honesta y constructiva que demuestre conciencia y plan

**Preguntas de inversores sobre el equipo:**
Lista las 8 preguntas más comunes sobre el equipo fundador en procesos de inversión y dame las estrategias de respuesta para cada una. Incluye preguntas incómodas como conflictos entre fundadores, vesting, o qué pasa si uno de ellos abandona.

**Consejo sobre gaps:**
Explícame qué perfiles son los más buscados para complementar un equipo fundador en etapa seed y qué señales de fortaleza del equipo valoran más los inversores de cada tipo (ángeles, seed VCs, VCs institucionales).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la narrativa del equipo fundador para inversores',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Modelo financiero para rondas de inversión: proyecciones creíbles',
                'description'      => 'Las proyecciones financieras de un pitch deck no son una predicción del futuro: son una demostración de cómo piensas sobre tu negocio. Un buen modelo muestra que entiendes tus drivers de crecimiento, tus costes estructurales y el camino hacia la rentabilidad. Este prompt te guía para construir proyecciones a 3-5 años que sean ambiciosas, defendibles y educativas para el inversor.',
                'prompt_content'   => <<<'EOT'
Eres un CFO con experiencia en startups de tecnología que ha pasado por múltiples rondas de financiación, desde pre-seed hasta Series B. Conoces la diferencia entre un modelo financiero que impresiona a los inversores y uno que les genera desconfianza.

Necesito tu ayuda para construir y presentar el modelo financiero de mi startup para una ronda de inversión.

**Paso 1: Entender mi negocio**
Hazme las siguientes preguntas antes de empezar:
1. ¿Cuál es tu modelo de negocio? (SaaS, marketplace, transaccional, e-commerce, otro)
2. ¿Cuáles son tus métricas actuales clave? (ARR/MRR, usuarios, ticket medio, churn, CAC, LTV si los tienes)
3. ¿Cuánto capital buscas y para cuántos meses de runway?
4. ¿Tienes ya un modelo en Excel o empiezas desde cero?
5. ¿En qué mercados operas o planeas operar?

**Paso 2: Estructura del modelo financiero**
Con esa información, guíame para construir un modelo con estas secciones:

**Supuestos (assumptions):**
- Los 5-8 drivers clave de ingresos y cómo los has calculado
- Los supuestos de costes más importantes
- Las tasas de crecimiento y de dónde vienen (datos históricos, comparables del mercado, estrategia de go-to-market)

**Cuenta de resultados a 3-5 años:**
- Ingresos por línea de negocio
- COGS y margen bruto
- Gastos operativos por categoría (S&M, R&D, G&A)
- EBITDA y cuándo se vuelve positivo

**Flujo de caja:**
- Burn rate mensual y cómo evoluciona
- Punto de breakeven operativo
- Necesidades de capital adicional y cuándo

**Uso de fondos:**
- Desglosa cómo se gastará el capital de esta ronda
- Justifica cada partida en términos de hitos que financia

**Paso 3: Cómo presentar las proyecciones**
Explícame:
- Qué escenarios debo presentar (base, optimista, pesimista) y cuánto deben diferir entre sí
- Cómo responder cuando el inversor cuestione las proyecciones
- Qué métricas no financieras complementan las proyecciones para hacerlas más creíbles
- Los errores más comunes en los modelos financieros de startups en fase seed/Serie A

**Paso 4: Plantilla de preguntas difíciles**
Dame las 10 preguntas más comunes de inversores sobre las proyecciones financieras y cómo estructurar respuestas defensibles pero honestas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir y presentar proyecciones financieras para inversores',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Guía legal para fundadores: documentos clave antes de cerrar una ronda',
                'description'      => 'Muchas rondas de inversión se retrasan o fracasan por problemas legales que podrían haberse anticipado: cap table desordenada, propiedad intelectual no asignada correctamente, o contratos de empleados sin cláusulas de cesión. Este prompt te ayuda a entender qué documentos legales debes tener en orden antes de abrir un proceso de due diligence jurídica.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho mercantil y venture capital con experiencia en startups en España, México y Estados Unidos. Tu enfoque es educativo: ayudas a los fundadores a entender sus opciones legales para que puedan tomar decisiones informadas con sus asesores.

Nota importante: este prompt genera orientación educativa general, no asesoramiento jurídico específico. Siempre consulta con un abogado especializado antes de tomar decisiones legales relevantes.

Necesito preparar la documentación legal de mi startup para un proceso de due diligence jurídica previo a una ronda de inversión.

**Bloque 1: Diagnóstico de situación**
Hazme las siguientes preguntas para entender el estado legal actual de mi empresa:
1. ¿En qué jurisdicción está constituida tu empresa y qué forma societaria tiene?
2. ¿Hay acuerdo de socios o pacto parasocial firmado entre los fundadores?
3. ¿Tienes empleados o colaboradores con contratos? ¿Incluyen cesión de propiedad intelectual?
4. ¿La propiedad intelectual (código, marca, diseños) está correctamente asignada a la empresa?
5. ¿Tienes la cap table documentada y actualizada?
6. ¿Has levantado capital previamente? ¿Con qué instrumentos (préstamos convertibles, equity directo, SAFE)?

**Bloque 2: Mapa de documentación legal necesaria**
Con base en mis respuestas, genera una lista priorizada de los documentos que debo tener listos antes de comenzar un proceso de inversión, explicando para cada uno:
- Qué es y para qué sirve
- Si es obligatorio o muy recomendable
- Los errores más comunes en su redacción o ausencia
- Una estimación del tiempo que tarda un abogado en prepararlo

Los documentos a revisar incluyen:
- Escritura de constitución y estatutos
- Pacto de socios / shareholders agreement
- Contratos de trabajo y de colaboración con cesión de PI
- Registro de marca y dominio
- Contratos con clientes (SaaS agreement, términos de servicio)
- Política de privacidad y cumplimiento GDPR
- Cap table y actas de acuerdos de socios anteriores
- Documentos de rondas previas (SAFEs, notas convertibles)

**Bloque 3: Errores legales más comunes en startups**
Lista los 10 errores legales más frecuentes que los inversores descubren en due diligence y que pueden poner en riesgo o retrasar el cierre de la ronda. Para cada uno, describe:
- Cómo se manifiesta
- Cuál es el impacto real para el inversor
- Cómo se resuelve (si tiene solución)

**Bloque 4: Glosario de términos legales en inversión**
Explica de forma simple los términos legales más usados en term sheets y contratos de inversión que todo fundador debe conocer: dilución, derechos de preferencia, drag-along, tag-along, vesting, cliff, representaciones y garantías, indemnización, gobierno corporativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar la documentación legal para una ronda de inversión',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Casos de éxito de clientes como argumento de inversión',
                'description'      => 'Los testimonios de clientes son una de las formas más poderosas de demostrar tracción real a los inversores. Pero no basta con decir que los clientes están contentos: hay que cuantificar el valor entregado y estructurar la historia del cliente de forma que resuene con el inversor. Este prompt te ayuda a convertir tus mejores historias de éxito en argumentos de inversión convincentes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y en la construcción de narrativas de valor para audiencias de inversión. Sabes cómo transformar anécdotas de clientes satisfechos en evidencias cuantificadas del product-market fit que convencen a los inversores más escépticos.

Necesito tu ayuda para documentar y presentar los casos de éxito de mis clientes como parte de mi proceso de captación de inversión.

**Fase 1: Identificar los casos correctos**
Hazme las siguientes preguntas para seleccionar qué clientes son los más poderosos para un pitch:
1. ¿Cuántos clientes tienes actualmente (pagando o activos)?
2. ¿Cuál es el cliente del que más orgulloso estás y por qué?
3. ¿Tienes clientes que sean reconocibles para el tipo de inversor al que te diriges?
4. ¿Puedes mencionar nombres de clientes en el pitch o necesitas usar referencias anónimas?
5. ¿Tienes datos cuantitativos de impacto para algún cliente? (tiempo ahorrado, ingresos generados, costes reducidos)

**Fase 2: Framework para documentar un caso de éxito**
Para cada caso de éxito relevante, guíame para estructurarlo con este formato:

**Contexto del cliente:**
- Quién es (sector, tamaño, rol de la persona que tomó la decisión)
- Qué problema tenía antes de usar tu producto

**La situación antes:**
- Cómo resolvía el problema sin tu solución
- Qué impacto negativo tenía ese problema (en tiempo, dinero, satisfacción)

**La adopción:**
- Cómo llegó a tu producto y cuánto tardó en ver el primer valor

**Los resultados:**
- Métricas concretas: porcentaje de mejora, tiempo ahorrado, costes reducidos, ingresos generados
- Cita directa del cliente si la tienes
- Comportamiento del cliente que demuestra satisfacción (renovación, expansión, referidos)

**Fase 3: Versiones para diferentes contextos**
Para cada caso de éxito, crea tres versiones:
1. Versión para el pitch deck (máximo 3 bullets en una diapositiva)
2. Versión para conversación verbal con inversor (60-90 segundos)
3. Versión para email de seguimiento post-reunión con inversor

**Fase 4: Construcción del argumento de tracción**
Con todos los casos de éxito documentados, ayúdame a construir el argumento de tracción para el pitch:
- Una frase que sintetice el patrón de éxito entre mis clientes
- Los tres datos más impactantes que demuestran product-market fit
- Cómo presentar el NPS o satisfacción si no tengo datos de impacto económico

**Fase 5: Obtener permiso de los clientes**
Proporciona una plantilla de email corta y no invasiva para pedir a mis mejores clientes permiso para citarlos en materiales de inversión, y otra para pedirles un testimonio breve.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir historias de clientes en argumentos de tracción para inversores',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Pitch para freelancers: captar clientes enterprise y de alto valor',
                'description'      => 'Los freelancers que trabajan con empresas grandes necesitan un pitch diferente al que funciona con startups o pymes. Las organizaciones enterprise buscan confiabilidad, procesos y resultados medibles. Este prompt te ayuda a construir tu propuesta de valor, tu metodología y tu pitch para escalar a clientes de mayor ticket y establecer relaciones duraderas.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de desarrollo de negocio especializado en ayudar a freelancers y consultores independientes a escalar hacia clientes enterprise. Has acompañado a decenas de profesionales independientes en la transición desde proyectos pequeños hacia contratos de alto valor con empresas medianas y grandes.

Necesito tu ayuda para construir mi pitch y estrategia de captación de clientes enterprise como freelancer.

**Paso 1: Diagnóstico de mi situación actual**
Hazme estas preguntas para entender desde dónde parto:
1. ¿Cuál es tu especialidad y en qué tipo de proyectos tienes más experiencia?
2. ¿Cuál es el ticket medio actual de tus proyectos?
3. ¿Qué tipo de empresas te gustaría captar (por sector, tamaño, geografía)?
4. ¿Tienes casos de éxito con empresas grandes que puedas mencionar?
5. ¿Cuál es tu diferenciador frente a otras alternativas (agencias, empleados internos, otros freelancers)?

**Paso 2: Propuesta de valor para clientes enterprise**
Con base en mi perfil, ayúdame a construir:

**Mi posicionamiento único:**
- Una frase de posicionamiento de 20 palabras que comunique qué hago, para quién y qué resultado consiguen
- Los tres problemas específicos de empresas enterprise que yo resuelvo mejor que nadie
- Por qué contratarme a mí vs. una agencia vs. un empleado interno

**Mi metodología de trabajo:**
- Cómo estructuro mis proyectos (fases, entregables, puntos de revisión)
- Cómo gestiono la comunicación con equipos internos
- Cómo mido y reporto el éxito de mi trabajo
- Mis estándares de calidad y confidencialidad

**Paso 3: El pitch para distintos contextos**
Desarrolla versiones de mi pitch para estos contextos:
1. Email frío a un Director o VP (máximo 150 palabras, con CTA específico)
2. LinkedIn InMail (máximo 300 caracteres para la solicitud de conexión + mensaje inicial)
3. Presentación en una reunión de descubrimiento (estructura de 30 minutos)
4. Propuesta económica: cómo estructurar el documento y qué incluir para que justifique un ticket alto

**Paso 4: Gestión de objeciones en enterprise**
Lista las 8 objeciones más comunes que reciben los freelancers cuando intentan captar clientes enterprise, y proporciona las respuestas más efectivas para cada una. Incluye objeciones como:
- "Preferimos trabajar con agencias que con freelancers"
- "No tenemos presupuesto ahora mismo"
- "Necesitamos alguien disponible a tiempo completo"
- "¿Cómo garantizas la confidencialidad?"

**Paso 5: Fijación de precios para proyectos enterprise**
Explícame las diferencias entre tarifa por hora, tarifa por proyecto, retainer mensual y fee por resultado. Para cada modelo, indica cuándo es más apropiado, cómo comunicarlo y cómo negociar sin bajar el precio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Captar clientes de alto valor como freelancer o consultor independiente',
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
