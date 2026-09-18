<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills370Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'   => 1,
                'title'           => 'Diseño de estrategia go-to-market para lanzamiento de producto',
                'description'     => 'Define el plan completo de salida al mercado para un nuevo producto o servicio, desde la segmentación hasta los canales de distribución. Incluye la articulación del ICP, el mensaje central y la secuencia de activación de demanda. Permite ejecutar lanzamientos coordinados con menor riesgo de fracaso.',
                'prompt_content'  => <<<'EOT'
Eres un estratega de go-to-market con más de 15 años de experiencia en lanzamientos B2B y B2C en mercados hispanohablantes. Tu especialidad es convertir la ambigüedad de un producto nuevo en un plan de entrada al mercado claro, ejecutable y medible.

**Contexto del ejercicio**
Voy a pedirte que diseñes una estrategia GTM completa. Antes de empezar, necesito que proceses la siguiente información sobre mi producto:

- Nombre o descripción breve del producto: [INTRODUCE AQUÍ]
- Mercado objetivo (geografía, industria, tamaño de empresa): [INTRODUCE AQUÍ]
- Modelo de negocio (SaaS, marketplace, producto físico, servicio, etc.): [INTRODUCE AQUÍ]
- Precio aproximado y modelo de precios: [INTRODUCE AQUÍ]
- Competidores principales que ya conozco: [INTRODUCE AQUÍ]
- Recursos de marketing disponibles (presupuesto aproximado, equipo): [INTRODUCE AQUÍ]

**Lo que debes producir**

**1. Definición del ICP (Ideal Customer Profile)**
Describe con precisión al cliente ideal: cargo, sector, tamaño de empresa, dolores principales, métricas con las que le evalúan en su empresa, objeciones frecuentes a soluciones como la mía y criterios de decisión de compra. No generes un ICP genérico; anclalo a los datos que te he dado.

**2. Posicionamiento competitivo**
Elabora un statement de posicionamiento en el formato clásico: "Para [segmento], [mi producto] es el único [categoría] que [beneficio diferencial] porque [prueba de esa diferenciación]." Justifica por qué este posicionamiento es sostenible frente a los competidores mencionados.

**3. Selección del GTM motion**
Elige entre estos modelos de movimiento GTM y justifica la elección:
- Product-led growth (PLG)
- Sales-led growth (SLG)
- Marketing-led growth (MLG)
- Community-led growth
- Partner/channel-led growth
- Combinación híbrida

Explica qué señales del contexto del producto hacen que ese motion sea el más adecuado y qué riesgos tiene.

**4. Canales de adquisición prioritarios**
Lista los 3-5 canales que recomiendas activar en los primeros 90 días, ordenados por prioridad. Para cada canal indica: coste estimado, tiempo hasta resultados, tipo de contenido o acción requerida y métricas clave.

**5. Plan de lanzamiento en tres fases**
- Fase 1 - Preparación (semanas 1-4): activos, mensajes, audiencias, early adopters
- Fase 2 - Activación (semanas 5-8): campañas, PR, outreach, eventos
- Fase 3 - Escalado (semanas 9-12): optimización, expansión de canal, retención temprana

Para cada fase proporciona entregables concretos y KPIs de éxito.

**6. Métricas GTM y dashboard mínimo**
Define los 5-7 indicadores clave que debes monitorizar en los primeros 90 días. Incluye cómo calcularlos y qué umbrales indicarían que la estrategia está funcionando o que hay que pivotar.

**7. Riesgos y planes de contingencia**
Identifica los 3 riesgos más probables en este GTM y para cada uno propón una acción de mitigación y un indicador de alerta temprana.

**Formato de entrega**
Usa encabezados claros y listas numeradas. Donde existan tablas comparativas, utiliza markdown. Sé específico y evita consejos genéricos; cada recomendación debe poder convertirse en una tarea real de Trello o Notion.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Planificación de lanzamiento de producto al mercado',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 2,
                'title'           => 'GTM técnico: estrategia de entrada al mercado para herramientas de desarrollo',
                'description'     => 'Define el go-to-market para productos developer-first, donde el usuario técnico es también el comprador o el influenciador clave. Abarca community building, documentación como canal de adquisición y developer relations. Ideal para startups con productos de infraestructura o APIs.',
                'prompt_content'  => <<<'EOT'
Eres un experto en go-to-market para productos técnicos orientados a desarrolladores. Has lanzado herramientas de infraestructura, APIs y plataformas developer-first en múltiples compañías de software. Conoces en profundidad el ciclo de adopción bottom-up: el desarrollador individual prueba, adopta y luego lleva el producto a la empresa.

**Contexto de mi herramienta**
Antes de diseñar la estrategia GTM, necesito que analices:

- Descripción de la herramienta: [INTRODUCE AQUÍ]
- Tipo de usuario técnico objetivo (frontend, backend, DevOps, data engineer, etc.): [INTRODUCE AQUÍ]
- Modelo de precios (freemium, open source + enterprise, pago por uso, etc.): [INTRODUCE AQUÍ]
- Estado actual de la documentación y el repositorio: [INTRODUCE AQUÍ]
- Comunidades técnicas donde ya tenemos presencia (GitHub stars, Discord, etc.): [INTRODUCE AQUÍ]

**Entregables esperados**

**1. Developer Journey Mapping**
Traza el recorrido completo del desarrollador desde el primer contacto hasta la adopción en producción y la expansión a todo el equipo. Identifica los momentos de fricción más comunes y propón cómo eliminarlos. Incluye: descubrimiento, evaluación, onboarding, primer valor (aha moment), uso recurrente, evangelización interna.

**2. Documentación como canal de adquisición**
Diseña una estrategia de documentación técnica pensada para SEO y conversión, no solo para soporte. Incluye: estructura ideal, tipos de contenido (quickstarts, tutoriales, referencia, guías de migración), estrategia de keywords técnicas y métricas para medir el impacto de la documentación en la adquisición.

**3. Developer Relations y community building**
Define el programa de DevRel para los primeros 6 meses: perfil del developer advocate, actividades de comunidad (Discord, GitHub Discussions, foros, meetups), programa de beta testers y early adopters, y estrategia de contribuciones open source si aplica.

**4. Canales de distribución técnicos**
Prioriza los canales específicos del ecosistema developer: Product Hunt, Hacker News, GitHub Trending, newsletters técnicas (referencias del sector), podcasts de desarrollo, conferencias. Para cada uno indica: qué preparar, cuándo lanzar y cómo medir el resultado.

**5. PLG (Product-Led Growth) para herramientas técnicas**
Si el modelo lo permite, diseña el loop PLG: cómo el producto se vende solo a través del uso. Incluye: versión gratuita o de prueba óptima, límites que incentiven la conversión, mecanismos de viralidad (badges, atribución en código, CLI con branding) y secuencia de onboarding automatizado por email.

**6. Métricas de adopción técnica**
Define los KPIs específicos para GTM developer: tiempo hasta primer éxito (time to value), tasa de activación tras el registro, retención a 30/60/90 días, NPS de desarrolladores, ratio de conversión freemium a pago, expansión de seats por cuenta.

**Formato**
Responde con secciones claramente diferenciadas. Incluye ejemplos de empresas reales que hayan ejecutado bien cada táctica (Stripe, Vercel, Supabase, etc.) para contextualizar las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de lanzamiento para herramientas developer-first',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 3,
                'title'           => 'Posicionamiento visual y narrativa de marca para entrada a nuevo mercado',
                'description'     => 'Define la identidad visual y la narrativa de marca adaptada al momento de entrada al mercado, diferenciándola de competidores establecidos. Incluye el tono visual, el sistema de mensajes y las piezas clave de lanzamiento. Pensado para diseñadores que lideran el branding de un GTM.',
                'prompt_content'  => <<<'EOT'
Eres un director de diseño estratégico con especialización en branding de lanzamiento. Has definido la identidad visual de marcas en sus primeras etapas de entrada al mercado, entendiendo que el diseño no es solo estética sino el vehículo del posicionamiento competitivo.

**Contexto de la marca**
Para diseñar la narrativa visual y el sistema de mensajes, necesito que proceses:

- Nombre de la empresa o producto: [INTRODUCE AQUÍ]
- Sector o industria: [INTRODUCE AQUÍ]
- Tres competidores visuales de referencia (pueden ser aspiracionales): [INTRODUCE AQUÍ]
- Valores de marca que deben transmitirse (máximo 4): [INTRODUCE AQUÍ]
- Audiencia objetivo (perfil demográfico y psicográfico): [INTRODUCE AQUÍ]

**Entregables del ejercicio**

**1. Análisis del paisaje visual competitivo**
Examina los competidores indicados desde el punto de vista del diseño: paleta de colores dominante, tipografías elegidas, estilo fotográfico, tono visual general y emociones que evocan. Identifica los clichés visuales del sector y los espacios en blanco donde nuestra marca puede diferenciarse.

**2. Definición del territorio visual**
Basándote en el análisis anterior y en los valores de la marca, define el territorio visual que ocuparemos: palabras que describen la sensación visual (por ejemplo: "cálido pero preciso", "disruptivo pero accesible"), dirección de color, tipografía y fotografía. No seas abstracto; describe qué se vería exactamente en una portada de presentación.

**3. Sistema de mensajes para el GTM**
Diseña la jerarquía de mensajes de lanzamiento:
- Tagline de marca (máximo 6 palabras)
- Headline de hero section de la web
- Subheadline que amplía el beneficio principal
- 3 pillars de mensaje para los segmentos de audiencia principales
- Mensajes de diferenciación frente a cada competidor

**4. Kit de lanzamiento mínimo**
Lista los activos de diseño imprescindibles para el lanzamiento y para cada uno especifica el objetivo comunicativo, el canal de uso y las consideraciones de diseño clave:
- Web (hero, sección de producto, social proof)
- Redes sociales (templates, story, carrusel)
- Email de lanzamiento
- Presentación de ventas (pitch deck)
- Materiales de PR (press kit visual)

**5. Guía de tono visual para contenido ongoing**
Una vez lanzada la marca, el equipo necesita mantener la coherencia sin el diseñador en cada pieza. Escribe una guía breve (máximo 1 página) de tono visual: qué hacer y qué evitar en fotografía, ilustración, composición y uso del color.

**6. Métricas de efectividad del diseño en el GTM**
Define cómo medirás si el sistema de diseño está cumpliendo su función en el lanzamiento: reconocimiento de marca, coherencia visual en redes, tasas de clic en creatividades de pago, feedback cualitativo en entrevistas de usuarios.

**Formato**
Estructura la respuesta con encabezados numerados. Usa lenguaje preciso y visual. Donde puedas, incluye ejemplos de marcas reales que ilustren cada concepto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Branding y narrativa visual para lanzamiento de marca',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 4,
                'title'           => 'Plan de ventas para el lanzamiento GTM: primeros 90 días',
                'description'     => 'Estructura el playbook de ventas para la etapa de entrada al mercado, desde la prospección inicial hasta el cierre de los primeros clientes referenciales. Define ICP, secuencias de outreach, manejo de objeciones y métricas de éxito. Diseñado para equipos de ventas que ejecutan un GTM sin infraestructura previa.',
                'prompt_content'  => <<<'EOT'
Eres un director de ventas con experiencia en el arranque comercial de productos nuevos. Has construido equipos y playbooks de ventas en fase early-stage y sabes que los primeros 10 clientes son los más difíciles y los más importantes: definen el ICP real, validan el precio y generan los casos de éxito que escalan el negocio.

**Contexto del producto y el equipo de ventas**
Para construir el playbook de ventas GTM necesito que proceses:

- Descripción del producto y problema que resuelve: [INTRODUCE AQUÍ]
- Precio y modelo de ingresos: [INTRODUCE AQUÍ]
- ICP hipotético (cargo, sector, tamaño de empresa): [INTRODUCE AQUÍ]
- Tamaño del equipo de ventas disponible: [INTRODUCE AQUÍ]
- Ciclo de venta estimado (días/semanas): [INTRODUCE AQUÍ]
- Canal principal de prospección que quiero usar (outbound, inbound, referidos, eventos): [INTRODUCE AQUÍ]

**Entregables del playbook**

**1. Refinamiento del ICP de ventas**
Basándote en el ICP hipotético, añade las capas que lo hacen accionable para ventas: señales de compra (eventos que indican que el prospecto está buscando una solución ahora), señales de exclusión (quién no debería ser cliente), stack tecnológico que usan habitualmente, fuentes de información que consultan y stakeholders involucrados en la decisión.

**2. Lista de cuentas target y criterios de priorización**
Define cómo construir la lista de las primeras 50-100 cuentas target. Incluye: fuentes de datos (LinkedIn Sales Navigator, bases de datos del sector, eventos), criterios de scoring (fit, timing, accesibilidad) y cómo segmentarlas en tiers A/B/C.

**3. Secuencia de outreach (cadencia)**
Diseña una cadencia de contacto de 10-14 pasos para 30 días. Para cada paso especifica: canal (email, LinkedIn, llamada), día del ciclo, objetivo del mensaje y plantilla o guion breve. Incluye al menos 3 variaciones de asunto de email con tasas de apertura esperadas.

**4. Script de discovery call**
Escribe un guion estructurado para la primera llamada de 30 minutos: preguntas de calificación (BANT o MEDDIC adaptado), preguntas de descubrimiento de dolor, técnica de presentación del valor y cierre de siguiente paso. Incluye las 5 objeciones más frecuentes y cómo responderlas.

**5. Estrategia de cierre de primeros clientes referenciales**
Los primeros clientes necesitan condiciones especiales. Define: qué concesiones puedes hacer (precio, implementación, SLA) a cambio de qué compromisos (caso de éxito, referido, acceso para ventas). Diseña la propuesta de "early adopter" que maximiza el aprendizaje y el valor para ambas partes.

**6. KPIs de ventas en los primeros 90 días**
Define los indicadores que medirás semanalmente: volumen de prospección, tasas de conversión en cada etapa del funnel, velocidad del pipeline, coste de adquisición estimado y cuándo el modelo está funcionando vs. cuándo hay que pivotar.

**Formato**
Entrega el playbook con secciones claramente delimitadas. Incluye plantillas y ejemplos concretos, no solo marcos teóricos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construcción del playbook de ventas para un GTM',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 5,
                'title'           => 'Framework de decisión para seleccionar el GTM motion de un producto',
                'description'     => 'Evalúa sistemáticamente qué modelo de go-to-market es el más adecuado para un producto según sus características, mercado y recursos disponibles. Permite al Product Manager argumentar la decisión de GTM ante stakeholders con datos y criterios claros. Evita el error de copiar el GTM de competidores sin validar si aplica a la realidad del producto.',
                'prompt_content'  => <<<'EOT'
Eres un product strategist con experiencia en el diseño de go-to-market para productos digitales en diferentes estadios de madurez. Has visto cómo el mismo producto puede fracasar con un GTM motion equivocado y triunfar con el correcto, y sabes que la elección del motion es una de las decisiones más importantes que toma un equipo de producto en sus primeros años.

**Contexto del producto**
Para aplicar el framework de decisión necesito que analices:

- Descripción del producto y propuesta de valor: [INTRODUCE AQUÍ]
- Precio medio esperado por cliente/año: [INTRODUCE AQUÍ]
- Complejidad del onboarding (puede usarse solo el usuario o necesita ayuda): [INTRODUCE AQUÍ]
- ¿El producto genera efectos de red o viralidad natural? (sí/no/parcialmente): [INTRODUCE AQUÍ]
- Tamaño del mercado addressable (TAM estimado): [INTRODUCE AQUÍ]
- Recursos disponibles (equipo, presupuesto mensual de marketing y ventas): [INTRODUCE AQUÍ]
- Etapa actual (idea, MVP, producto con primeros clientes, escala): [INTRODUCE AQUÍ]

**Framework de evaluación**

**1. Matriz de selección de GTM motion**
Evalúa el producto en las siguientes dimensiones y puntúalo del 1 al 5:
- Complejidad del producto (¿puede el usuario adoptar sin ayuda humana?)
- ACV (Annual Contract Value) medio esperado
- Ciclo de venta natural (viral/corto/medio/largo)
- Capacidad de distribución autónoma (el producto se distribuye solo)
- Recursos de ventas y marketing disponibles
- Sofisticación técnica del comprador

Basándote en estas puntuaciones, recomienda el motion principal (PLG, SLG, MLG, community-led, partner-led) y justifica la elección con datos.

**2. Análisis de riesgos por motion**
Para los dos motions más puntuados, describe los 3 riesgos principales de cada uno en el contexto específico de este producto. Incluye: señales de alarma tempranas y umbrales de abandono del motion.

**3. Diseño del motor de crecimiento**
Independientemente del motion elegido, diseña el loop de crecimiento del producto: ¿cómo un nuevo cliente genera más clientes? Puede ser viral, de red, de contenido, de referidos o de expansión. Dibuja el loop en formato texto (A → B → C → D → vuelve a A) y explica cada paso.

**4. Roadmap de evolución del GTM**
El GTM motion no es permanente. Describe cómo debería evolucionar el motion en estas etapas: 0-100 clientes, 100-1.000 clientes, 1.000+ clientes. Define el momento en que tiene sentido añadir un segundo motion (por ejemplo, empezar PLG y añadir ventas enterprise cuando el ACV suba).

**5. Decisiones de producto que habilitan el GTM**
Lista las 5-7 decisiones de roadmap de producto que tienen mayor impacto en el GTM: qué features son necesarias para que el motion funcione (por ejemplo, un flujo de onboarding self-serve para PLG, integraciones para el ecosistema partner, etc.). Priorízalas.

**6. Template de presentación a stakeholders**
Diseña un esquema de 5 slides para presentar la decisión de GTM motion a inversores o dirección: problema de entrada, opciones evaluadas, criterios de decisión, motion recomendado y próximos pasos con OKRs.

**Formato**
Usa tablas comparativas donde sea útil. Sé preciso y evita generalidades. Cita ejemplos de empresas reales que ilustren cada motion.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Selección y justificación del GTM motion para un producto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 6,
                'title'           => 'GTM interno: estrategia de lanzamiento de nuevas políticas de RRHH',
                'description'     => 'Aplica el pensamiento go-to-market al lanzamiento de iniciativas internas de Recursos Humanos, como nuevas políticas, beneficios o procesos. Define la segmentación de empleados, el mensaje por segmento, los canales de comunicación y la gestión del cambio. Reduce la resistencia y aumenta la adopción real de las iniciativas.',
                'prompt_content'  => <<<'EOT'
Eres un experto en comunicación interna y gestión del cambio organizacional. Aplicas la mentalidad de marketing y go-to-market al lanzamiento de iniciativas internas de RRHH, entendiendo que los empleados son clientes internos con sus propios dolores, objeciones y criterios de adopción. Sabes que una política excelente que nadie adopta es un fracaso.

**Contexto de la iniciativa de RRHH**
Para diseñar la estrategia de lanzamiento interno necesito que analices:

- Iniciativa a lanzar (nueva política, beneficio, proceso, herramienta): [INTRODUCE AQUÍ]
- Número de empleados afectados y ubicación (presencial, remoto, híbrido): [INTRODUCE AQUÍ]
- Segmentos de empleados con perfiles distintos (por departamento, seniority, etc.): [INTRODUCE AQUÍ]
- Principales resistencias anticipadas: [INTRODUCE AQUÍ]
- Canales de comunicación interna disponibles (Slack, email, intranet, reuniones, etc.): [INTRODUCE AQUÍ]
- Plazo para la implementación completa: [INTRODUCE AQUÍ]

**Entregables de la estrategia GTM interna**

**1. Segmentación de empleados y análisis de stakeholders**
Identifica los segmentos de empleados relevantes para este lanzamiento y para cada segmento describe: beneficios que obtendrán, cambios que supondrá en su día a día, objeciones más probables y nivel de influencia en la adopción del resto. Identifica también a los sponsors ejecutivos necesarios y a los champions informales de cada equipo.

**2. Propuesta de valor por segmento**
Para cada segmento de empleados, elabora un mensaje central que responda a "¿qué gano yo con esto?" de forma honesta y específica. Evita el lenguaje corporativo genérico. Si hay un trade-off (la iniciativa implica algún cambio que no es inmediatamente cómodo), cómpralo con honestidad.

**3. Plan de comunicación por fases**
Diseña la secuencia de comunicación en tres fases:
- Pre-lanzamiento: preparar el terreno, involucrar a managers y champions
- Lanzamiento: comunicación oficial, formación, FAQs, primer contacto con la iniciativa
- Post-lanzamiento: seguimiento, celebración de primeros resultados, gestión de problemas

Para cada fase incluye: mensajes clave, canales, responsables y materiales necesarios.

**4. Gestión de objeciones y resistencias**
Elabora un mapa de objeciones anticipadas y para cada una define: cómo detectarla, cómo responderla en conversación directa y cómo anticiparla en los materiales de comunicación. Incluye al menos 6 objeciones reales que suelen surgir en cambios organizacionales.

**5. Kit de lanzamiento para managers**
Los managers son el canal de comunicación más importante para los empleados. Diseña el kit que recibirán: guion para la conversación de equipo, FAQ con respuestas preparadas, señales de que hay resistencia y cómo manejarla, y acceso a soporte de RRHH.

**6. Métricas de adopción interna**
Define cómo medirás el éxito del lanzamiento: tasa de adopción a 30/60/90 días, NPS de empleados (eNPS específico de la iniciativa), tasa de uso si hay una herramienta, número de incidencias o dudas recibidas y reducción de las mismas en el tiempo.

**Formato**
Entrega el plan con secciones claras. Incluye plantillas de comunicación que puedan usarse directamente (asunto de email, mensaje de Slack, agenda de reunión de equipo).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzamiento de políticas e iniciativas de RRHH con enfoque GTM',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 7,
                'title'           => 'Análisis financiero de la viabilidad de un GTM: unit economics y runway',
                'description'     => 'Evalúa la sostenibilidad financiera de una estrategia go-to-market antes de ejecutarla, proyectando unit economics, CAC, LTV y runway en distintos escenarios. Permite al CFO o al fundador tomar decisiones de inversión en GTM con datos en lugar de intuición. Evita quemar caja en un motion que no es financieramente viable.',
                'prompt_content'  => <<<'EOT'
Eres un CFO y estratega financiero con experiencia en startups y scale-ups en fase de go-to-market. Sabes que el error más común en el lanzamiento de un producto es subestimar el coste de adquisición y sobreestimar la velocidad de los ingresos. Tu misión es modelar la realidad financiera del GTM antes de comprometer el presupuesto.

**Datos de entrada para el modelo**
Antes de calcular nada, necesito que solicites o uses los siguientes datos:

- Precio mensual o anual por cliente: [INTRODUCE AQUÍ]
- Tasa de churn mensual estimada: [INTRODUCE AQUÍ]
- Coste estimado por lead generado (según el canal elegido): [INTRODUCE AQUÍ]
- Tasas de conversión estimadas en cada etapa del funnel: [INTRODUCE AQUÍ]
- Coste del equipo de ventas y marketing (salarios + herramientas + agencias): [INTRODUCE AQUÍ]
- Runway actual disponible (meses): [INTRODUCE AQUÍ]
- Meta de clientes al final del año: [INTRODUCE AQUÍ]

**Análisis financiero requerido**

**1. Cálculo del CAC (Customer Acquisition Cost)**
Calcula el CAC total (blended) y el CAC por canal principal. Desglosando: coste de marketing, coste de ventas, coste de herramientas y overhead atribuible. Compara el CAC obtenido con los benchmarks del sector para validar si es razonable.

**2. Cálculo del LTV (Lifetime Value)**
Calcula el LTV con la fórmula: LTV = ARPU / Churn Rate. Ajusta por margen bruto si aplica. Proyecta el LTV a 12, 24 y 36 meses. Analiza la sensibilidad del LTV ante variaciones del churn del ±20%.

**3. Ratio LTV:CAC y payback period**
Calcula el ratio LTV:CAC y el periodo de recuperación del CAC (payback period en meses). Interpreta los resultados: ¿el GTM es financieramente sostenible? ¿Cuándo empieza a generar caja por cliente?

**4. Proyección de revenue y burn en tres escenarios**
Construye tres escenarios para los próximos 12 meses: pesimista (50% de la meta), base (100% de la meta) y optimista (150% de la meta). Para cada escenario muestra: nuevos clientes por mes, MRR acumulado, burn mensual, runway restante y mes en que se alcanza el break-even operativo (si aplica).

**5. Análisis de sensibilidad de las variables clave**
Identifica las 3-4 variables que más impactan el modelo financiero (probablemente churn, CAC y precio) y muestra cómo varía el runway ante cambios del ±20% en cada una. Esto ayuda a saber en qué métricas hay que enfocarse operativamente.

**6. Recomendaciones financieras para el GTM**
Basándote en el análisis, proporciona recomendaciones concretas: ¿debería el equipo priorizar la reducción del CAC o la mejora del churn? ¿Qué canal tiene mejor ratio de eficiencia? ¿Hay que ajustar el precio? ¿Cuándo tiene sentido contratar el primer vendedor dedicado?

**Formato**
Presenta los cálculos en formato tabular cuando sea posible. Usa cifras concretas, no rangos amplios. Señala claramente los supuestos detrás de cada número para que el lector pueda ajustarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelado financiero de la viabilidad de un GTM',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 8,
                'title'           => 'Due diligence legal de un GTM: riesgos regulatorios en la entrada a nuevos mercados',
                'description'     => 'Identifica los riesgos legales y regulatorios asociados a entrar en un nuevo mercado con un producto o servicio, desde licencias y normativa sectorial hasta protección de datos y derecho de la competencia. Permite al equipo legal anticipar bloqueos antes de que el GTM esté en ejecución y proponer alternativas viables.',
                'prompt_content'  => <<<'EOT'
Eres un abogado especializado en derecho mercantil, regulación digital y expansión internacional. Has asesorado a startups y empresas medianas en su entrada a mercados europeos y latinoamericanos, identificando los riesgos legales que pueden paralizar un go-to-market o generar responsabilidades inesperadas.

**Contexto del GTM a analizar**
Para realizar el due diligence legal necesito que proceses:

- Descripción del producto o servicio: [INTRODUCE AQUÍ]
- Mercados de entrada (países o regiones): [INTRODUCE AQUÍ]
- Modelo de negocio (marketplace, SaaS, distribución, servicios, etc.): [INTRODUCE AQUÍ]
- Sector o industria (salud, fintech, educación, retail, etc.): [INTRODUCE AQUÍ]
- Tipos de datos de usuarios que se procesarán: [INTRODUCE AQUÍ]
- Estructura societaria actual de la empresa: [INTRODUCE AQUÍ]

**Análisis de riesgos legales**

**1. Requisitos de licencias y habilitaciones**
Para cada mercado de entrada, identifica si el producto requiere algún tipo de licencia, autorización o habilitación regulatoria antes de operar. Incluye: organismos reguladores relevantes, plazos típicos de obtención, coste aproximado y riesgo de operar sin licencia (multas, cierre, responsabilidad personal).

**2. Cumplimiento de protección de datos**
Analiza las obligaciones de protección de datos en cada mercado: RGPD en Europa, LGPD en Brasil, CCPA en California, u otras normativas aplicables. Para cada una: qué datos están afectados, qué medidas técnicas y organizativas son necesarias, si aplica la figura del DPO y cuáles son las sanciones máximas.

**3. Normativa sectorial específica**
Si el producto opera en un sector regulado (fintech, salud, educación, alimentación, etc.), identifica la normativa específica: qué está prohibido, qué requiere comunicación previa y qué puede hacerse libremente. Advierte sobre los errores más comunes de empresas que entran sin conocer la regulación sectorial.

**4. Derecho de la competencia y prácticas comerciales**
Evalúa si el GTM incluye prácticas que podrían ser problemáticas bajo la ley de competencia o de consumidores: precios predatorios, cláusulas de exclusividad, prácticas de datos que concentran mercado, comparativas publicitarias. Advierte sobre los límites legales en cada mercado.

**5. Contratos y términos de uso adaptados al mercado**
Lista los documentos contractuales que deben estar adaptados antes del lanzamiento en cada mercado: términos y condiciones, política de privacidad, términos de servicio para B2B, contratos con distribuidores o partners. Indica las cláusulas críticas que deben revisarse para cada jurisdicción.

**6. Mapa de riesgos legales priorizado**
Presenta un resumen ejecutivo con los riesgos identificados ordenados por: probabilidad de materialización × impacto potencial. Para los tres riesgos más críticos, propón la acción legal concreta que debe tomarse antes del lanzamiento y el coste estimado de esa acción.

**Nota legal**
Este análisis es orientativo y no reemplaza el asesoramiento de un abogado local en cada jurisdicción. Identifica los puntos que requieren consulta especializada.

**Formato**
Usa una tabla resumen de riesgos al final. Organiza el análisis por mercado cuando los mercados sean múltiples con regulaciones distintas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identificación de riesgos legales en la entrada a nuevos mercados',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 9,
                'title'           => 'Onboarding de clientes en un GTM: diseño del primer contacto post-venta',
                'description'     => 'Diseña el proceso de onboarding para los primeros clientes de un producto nuevo, donde aún no hay infraestructura de Customer Success consolidada. Define los hitos de valor temprano, las comunicaciones automatizadas y las intervenciones humanas necesarias. Reduce la tasa de churn temprano y convierte a los primeros clientes en casos de éxito.',
                'prompt_content'  => <<<'EOT'
Eres un experto en Customer Success con experiencia en el diseño de procesos de onboarding para productos en su fase inicial de go-to-market. Sabes que los primeros 30-90 días determinan si un cliente se convierte en un promotor o en una pérdida, y que en la fase GTM el onboarding tiene que ser a la vez personalizado (porque cada cliente importa) y lo suficientemente sistemático para escalar.

**Contexto del producto y los primeros clientes**
Para diseñar el proceso de onboarding GTM necesito que analices:

- Descripción del producto y su propuesta de valor: [INTRODUCE AQUÍ]
- Tipo de cliente (B2B o B2C, tamaño de empresa si es B2B): [INTRODUCE AQUÍ]
- Definición del "primer valor" o aha moment del producto: [INTRODUCE AQUÍ]
- Complejidad de la implementación (plug & play, integración técnica, cambio de proceso): [INTRODUCE AQUÍ]
- Recursos de CS disponibles (personas dedicadas, horas por cliente): [INTRODUCE AQUÍ]
- Métricas de éxito del cliente que el producto ayuda a mover: [INTRODUCE AQUÍ]

**Entregables del diseño de onboarding**

**1. Mapa de la experiencia de onboarding**
Traza el recorrido completo del cliente desde que firma el contrato hasta que alcanza el primer valor real. Define los hitos del onboarding: qué debe haber pasado al día 1, al día 7, al día 30 y al día 90. Para cada hito, especifica: acción del cliente, acción del equipo de CS, indicador de que el hito se ha alcanzado.

**2. Kickoff de cliente: agenda y objetivos**
Diseña la reunión de kickoff perfecta para los primeros clientes. Incluye: agenda detallada de 60 minutos, preguntas de descubrimiento para entender el contexto específico de ese cliente, cómo alinear expectativas, cómo definir el éxito conjunto y qué documentar en el CRM.

**3. Secuencia de comunicaciones en los primeros 30 días**
Diseña la cadencia de comunicaciones (email + video + reunión) para los primeros 30 días. Para cada comunicación: día del ciclo, canal, objetivo, plantilla o guion breve y acción que queremos que tome el cliente. Diferencia entre lo que es automatizable y lo que requiere personalización humana.

**4. Identificación y gestión de señales de riesgo temprano**
Lista las señales que indican que un cliente está en riesgo durante el onboarding: falta de uso, falta de respuesta, problemas técnicos sin resolver, cambio del champion. Para cada señal define: cómo detectarla, tiempo máximo para intervenir y protocolo de escalada.

**5. Documentación del caso de éxito**
Los primeros clientes son el activo más valioso del GTM. Diseña el proceso para documentar su caso de éxito: cuándo pedirlo (hito de valor alcanzado), qué preguntas hacerles, qué métricas incluir y en qué formato (testimonial, caso de estudio, vídeo, G2/Capterra). Incluye un template de caso de éxito de una página.

**6. Métricas de onboarding y salud del cliente**
Define el dashboard de salud del cliente para los primeros 90 días: tasa de activación, time-to-value, completion rate del onboarding, NPS a los 30 días, churn en los primeros 90 días. Establece los umbrales de alerta y los umbrales de éxito.

**Formato**
Entrega el diseño con secciones claras. Incluye plantillas de email y agendas que puedan usarse directamente. Sé específico en los tiempos y responsabilidades.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño del proceso de onboarding para los primeros clientes GTM',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 10,
                'title'           => 'GTM personal: estrategia de entrada al mercado para freelancers que lanzan un servicio nuevo',
                'description'     => 'Aplica los principios del go-to-market al lanzamiento de un servicio freelance nuevo, desde la definición del nicho y el posicionamiento hasta la estrategia de captación de los primeros clientes. Ayuda a los freelancers a evitar el error de ser generalistas y a construir una propuesta de valor diferenciada que justifique precios premium.',
                'prompt_content'  => <<<'EOT'
Eres un consultor de negocio freelance con experiencia ayudando a profesionales independientes a lanzar nuevos servicios. Entiendes que el freelancer que quiere lanzar algo nuevo enfrenta el mismo desafío que una startup: tiene que encontrar su mercado, diferenciarse y conseguir los primeros clientes sin infraestructura de marketing. Aplicas el pensamiento GTM a escala de un profesional individual.

**Contexto del servicio freelance**
Para diseñar la estrategia de entrada al mercado necesito que analices:

- Servicio que quiero lanzar (descripción concreta): [INTRODUCE AQUÍ]
- Mi experiencia y credenciales en este servicio: [INTRODUCE AQUÍ]
- Tipo de cliente ideal (sector, tamaño de empresa, cargo del decisor): [INTRODUCE AQUÍ]
- Precio que quiero cobrar (por proyecto, por hora o por retainer): [INTRODUCE AQUÍ]
- Competidores o sustitutos que tiene el cliente (otras agencias, freelancers, soluciones internas): [INTRODUCE AQUÍ]
- Canales donde tengo presencia actual (LinkedIn, web, red de contactos, etc.): [INTRODUCE AQUÍ]

**Estrategia GTM para freelancers**

**1. Definición del nicho y posicionamiento**
El mayor error de un freelancer es ser demasiado genérico. Ayúdame a definir un nicho específico que combine: el tipo de cliente (sector + tamaño + cargo), el problema concreto que resuelvo y el resultado tangible que obtendrá. Elabora mi statement de posicionamiento en una frase que pueda usar en LinkedIn y en mi web.

**2. Propuesta de valor diferenciada**
Analiza qué me hace diferente de otras opciones que tiene el cliente (agencia, freelancer genérico, solución interna). Elabora los 3 argumentos de diferenciación más fuertes y cómo comunicarlos sin sonar arrogante. Incluye cómo el precio que quiero cobrar se justifica con esta propuesta de valor.

**3. Estrategia de captación de los primeros 3-5 clientes**
Los primeros clientes de un freelance vienen siempre de sitios específicos. Define una estrategia de captación para los próximos 60 días basada en mi contexto: cuántos contactos de primer grado pueden convertirse en clientes o referidores, qué hacer en LinkedIn esta semana, si tiene sentido contactar a antiguos empleadores o clientes, y cómo hacer outreach sin resultar desesperado.

**4. Precio, propuesta y cierre**
Diseña la estructura de mi primera propuesta comercial: qué incluir, cómo presentar el precio (proyecto vs. retainer vs. valoración por hora), cómo manejar el descuento para los primeros clientes a cambio de caso de éxito y cómo cerrar sin presionar. Incluye las objeciones más comunes sobre precio y cómo responderlas.

**5. Presencia digital mínima viable**
Para un freelance en lanzamiento, la presencia digital debe ser funcional antes de ser perfecta. Define qué activos necesito antes de empezar a prospectar: perfil de LinkedIn optimizado (estructura y palabras clave), web mínima (qué secciones son imprescindibles) y muestra de trabajo o portfolio si no tengo clientes previos en este servicio.

**6. Plan de los primeros 90 días**
Diseña un plan semana a semana para los primeros 90 días: qué hacer cada semana en términos de prospección, contenido, conversaciones y cierre. Incluye métricas para evaluar si la estrategia está funcionando: número de conversaciones, propuestas enviadas, tasa de cierre y revenue objetivo.

**Formato**
Usa un tono directo y práctico. Evita los marcos teóricos abstractos y céntrate en acciones concretas que pueda ejecutar mañana por la mañana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzamiento de un servicio freelance nuevo al mercado',
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
