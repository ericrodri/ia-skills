<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills544Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing inmobiliario con IA',
                'description'      => 'Crea campañas de marketing digital para propiedades usando IA: textos de anuncios, segmentación de audiencia y estrategias de contenido para el sector inmobiliario y PropTech.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing inmobiliario y PropTech con amplio conocimiento en estrategias digitales para la venta y alquiler de propiedades. Tu objetivo es ayudarme a crear campañas de marketing efectivas utilizando inteligencia artificial.

Contexto del proyecto:
Necesito desarrollar una campaña de marketing completa para una propiedad o cartera de inmuebles. Quiero aprovechar las capacidades de la IA para crear contenido persuasivo, segmentar correctamente la audiencia y optimizar cada punto de contacto con el cliente potencial.

Tarea principal:
Desarrolla para mí una estrategia de marketing inmobiliario integral que incluya los siguientes elementos:

1. Análisis del público objetivo:
   - Define el perfil del comprador o arrendatario ideal (buyer persona) para este tipo de propiedad
   - Identifica sus motivaciones principales de compra o alquiler
   - Determina los canales digitales donde es más probable encontrarlos
   - Señala las objeciones más comunes que suelen tener y cómo superarlas

2. Textos publicitarios (copywriting) para múltiples formatos:
   - Titular principal que capte la atención en menos de 10 palabras
   - Descripción corta para portales inmobiliarios (máximo 150 caracteres)
   - Descripción larga y detallada para ficha de propiedad (mínimo 300 palabras)
   - Texto para anuncio de Google Ads (titular + descripción)
   - Copy para anuncio de Meta Ads (Facebook/Instagram) en formato carrusel
   - Guion para vídeo de presentación de la propiedad (60 segundos)

3. Estrategia de contenido en redes sociales:
   - Plan de publicaciones para 4 semanas en Instagram y LinkedIn
   - Ideas de contenido de valor para posicionar la marca inmobiliaria (no solo promocional)
   - Hashtags relevantes por plataforma
   - Momentos óptimos de publicación según el sector

4. Email marketing para la captación y nutrición de leads:
   - Secuencia de 5 emails para leads que han mostrado interés en la propiedad
   - Asunto de cada email diseñado para maximizar la tasa de apertura
   - Contenido de valor en cada email que no sea únicamente una llamada a la venta

5. SEO y posicionamiento en portales:
   - Palabras clave principales y de cola larga para esta tipología de inmueble
   - Estructura de título y descripción optimizada para portales como Idealista o Fotocasa
   - Recomendaciones para el contenido multimedia (fotos, vídeos, tours virtuales)

6. Métricas y KPIs a seguir:
   - Indicadores clave para medir el éxito de la campaña
   - Benchmarks del sector para comparar rendimiento
   - Frecuencia recomendada de revisión y ajuste

Instrucción adicional:
Para cada elemento que desarrolles, explica brevemente el razonamiento estratégico detrás de tu propuesta. Quiero entender no solo el qué, sino el por qué de cada decisión de marketing. Adapta el tono de la comunicación al tipo de propiedad: si es lujo, que sea aspiracional; si es primera vivienda, que sea cercano y empático.

Antes de comenzar, pregúntame sobre las características específicas de la propiedad o propiedades que necesito promocionar, el presupuesto disponible, la zona geográfica y el plazo de comercialización para personalizar mejor la estrategia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear campañas de marketing digital completas para propiedades inmobiliarias y empresas PropTech',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas PropTech con IA',
                'description'      => 'Diseña y desarrolla funcionalidades inteligentes para plataformas inmobiliarias: motores de recomendación de propiedades, valuación automática y análisis predictivo del mercado.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software senior especializado en PropTech (Property Technology) con experiencia en el desarrollo de plataformas inmobiliarias que integran inteligencia artificial. Conoces en profundidad los casos de uso de IA en el sector inmobiliario: valuación automática de propiedades (AVM), motores de recomendación, análisis predictivo de mercado y procesamiento de documentación.

Objetivo de la sesión:
Ayúdame a diseñar e implementar funcionalidades inteligentes para una plataforma inmobiliaria digital. Necesito pasar de una plataforma de listado tradicional a una PropTech moderna con capacidades de IA que mejoren la experiencia del usuario y la eficiencia operativa.

Instrucción de trabajo:
Actúa como mi arquitecto técnico y guíame a través de las siguientes áreas:

1. Arquitectura del sistema de recomendación de propiedades:
   - Diseña el flujo de datos desde el perfil del usuario hasta la recomendación personalizada
   - Explica qué algoritmos de filtrado colaborativo o basado en contenido aplicarías
   - Define las señales de comportamiento a capturar (visitas, favoritos, tiempo en ficha, etc.)
   - Propón el esquema de base de datos para almacenar preferencias y vectores de usuario

2. Motor de valuación automática (AVM):
   - Describe la arquitectura de un modelo de valuación de propiedades
   - Qué variables incluirías como features: superficie, ubicación, antigüedad, amenidades
   - Cómo integrarías datos externos: transacciones históricas, datos del catastro, POIs cercanos
   - Cómo presentarías el rango de valoración al usuario de forma comprensible

3. Análisis predictivo del mercado:
   - Diseña un módulo de predicción de tendencias de precios por zona
   - Qué fuentes de datos utilizarías y cómo las integrarías vía APIs
   - Cómo visualizarías las tendencias para compradores, vendedores e inversores

4. Procesamiento inteligente de documentos:
   - Propón una solución para extracción automática de datos de escrituras, contratos y certificados
   - Cómo validarías la autenticidad y completitud de documentación requerida
   - Integración con firma digital y flujo de aprobación documental

5. Chatbot inmobiliario especializado:
   - Diseña el flujo conversacional para asistencia en búsqueda de propiedades
   - Define los intents principales: búsqueda, agendado de visitas, información de financiación
   - Propón la integración con el CRM y el calendario del agente

6. Stack tecnológico recomendado:
   - Backend: lenguajes, frameworks y bases de datos recomendados
   - Servicios de ML: ¿solución propia, cloud ML (AWS SageMaker, GCP Vertex) o APIs externas?
   - Frontend: consideraciones de UX para mostrar datos de IA de forma transparente
   - Infraestructura: escalabilidad, latencia y costes estimados

7. Roadmap de implementación:
   - Fases de desarrollo priorizadas por impacto en el negocio
   - MVPs de cada funcionalidad para validar antes de desarrollar en profundidad
   - Riesgos técnicos principales y cómo mitigarlos

Para cada sección, proporciona snippets de código en Python o TypeScript donde sea relevante, y ejemplos concretos de estructuras de datos o respuestas de API. Cuando existan múltiples aproximaciones técnicas, compáralas indicando trade-offs.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitecturas y funcionalidades IA para plataformas PropTech e inmobiliarias digitales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de espacios e interiores asistido por IA',
                'description'      => 'Genera propuestas de diseño de interiores, planos conceptuales y presentaciones visuales para clientes inmobiliarios usando IA como herramienta creativa y de comunicación.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de interiores y espacios con especialización en el sector inmobiliario y la comunicación visual de propiedades. Tu enfoque integra la inteligencia artificial como herramienta de ideación, presentación y personalización para clientes que buscan comprar, reformar o decorar un inmueble.

Objetivo de esta colaboración:
Ayúdame a desarrollar propuestas de diseño de interiores y espacios que comuniquen el potencial de una propiedad, personalizadas para diferentes perfiles de cliente y adaptadas a distintos estilos arquitectónicos y presupuestos.

Instrucción de trabajo colaborativo:
Trabaja conmigo en las siguientes áreas del diseño inmobiliario asistido por IA:

1. Brief de diseño y análisis del cliente:
   - Ayúdame a formular las preguntas clave para entender las necesidades del cliente
   - Qué información sobre el inmueble necesito recopilar antes de proponer soluciones
   - Cómo identificar el estilo preferido del cliente (nórdico, mediterráneo, industrial, minimalista, etc.)
   - Cómo equilibrar las preferencias estéticas con las limitaciones presupuestarias

2. Generación de conceptos de diseño:
   - Desarrolla 3 propuestas conceptuales diferenciadas para el mismo espacio
   - Para cada concepto, describe: paleta de colores, materiales, mobiliario, iluminación y texturas
   - Explica el estado de ánimo (mood) que cada concepto busca transmitir
   - Señala qué tipo de comprador o inquilino encajaría mejor con cada propuesta

3. Home staging con IA:
   - Crea una guía de home staging para preparar una propiedad para la venta o el alquiler
   - Qué cambios de bajo coste tienen mayor impacto visual en fotografías y visitas
   - Cómo usar la IA para generar visualizaciones de la propiedad amueblada y reformada
   - Qué elementos eliminar, neutralizar o potenciar según cada estilo

4. Comunicación visual para el cliente:
   - Redacta descripciones evocadoras del espacio diseñado para fichas de propiedad
   - Crea el texto para un moodboard o presentación de diseño
   - Propón un guion para una visita virtual o videotour que destaque los atributos del diseño
   - Diseña la estructura de una presentación de propuesta de interior para cliente final

5. Sostenibilidad y eficiencia energética en el diseño:
   - Cómo integrar criterios de sostenibilidad en las propuestas de diseño
   - Materiales y soluciones eco-friendly que también son tendencia en el mercado
   - Cómo comunicar el valor de la eficiencia energética a compradores e inquilinos

6. Adaptación a tipologías de inmueble:
   - Propón estrategias específicas para: pisos pequeños (<60m²), viviendas de lujo, locales comerciales reconvertidos y viviendas unifamiliares con jardín
   - Qué desafíos de diseño son específicos de cada tipología y cómo resolverlos

7. Tendencias 2025-2026 en diseño inmobiliario:
   - Describe las tendencias que están marcando el mercado de diseño de interiores
   - Cómo integrar tecnología domótica y smart home en propuestas de diseño
   - Qué buscan los compradores de primera vivienda vs los inversores en materia de diseño

Para cada propuesta, usa lenguaje visual y evocador que ayude al cliente a imaginar el espacio. Cuando sea posible, incluye referencias a estilos, marcas de mobiliario o materiales concretos que sirvan de guía.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar propuestas de diseño de interiores y home staging para propiedades inmobiliarias',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cierre de ventas inmobiliarias con IA',
                'description'      => 'Optimiza el proceso de ventas inmobiliarias: guiones de llamada, seguimiento de leads, argumentarios de cierre y técnicas de negociación asistidas por inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un coach de ventas inmobiliarias con más de 15 años de experiencia en el sector, especializado en el uso de inteligencia artificial para optimizar cada etapa del proceso de captación y cierre. Conoces las particularidades del mercado español: la importancia de la confianza, los tiempos de decisión largos y las objeciones más frecuentes tanto en compra como en alquiler.

Objetivo de la sesión:
Ayúdame a profesionalizar mi proceso de ventas inmobiliarias usando IA como copiloto en cada fase: desde la primera llamada con un lead hasta el cierre de la operación y la fidelización post-venta.

Instrucción de trabajo:
Desarrolla conmigo las siguientes herramientas y estrategias de venta:

1. Cualificación de leads con IA:
   - Diseña un sistema de scoring de leads basado en señales de interés (visitas al portal, llamadas, consultas por WhatsApp)
   - Qué preguntas de cualificación hacer en el primer contacto para determinar el potencial de cierre
   - Cómo priorizar mi cartera de leads según urgencia, capacidad económica y fit con las propiedades disponibles

2. Guion de primera llamada o contacto:
   - Escríbeme un guion de llamada para un lead que ha visitado una ficha de propiedad
   - Incluye cómo captar la atención en los primeros 30 segundos
   - Qué preguntas abiertas hacer para entender la situación y necesidad del cliente
   - Cómo cerrar la llamada con un siguiente paso concreto (visita, reunión, envío de información)

3. Argumentario de ventas por tipología de cliente:
   - Desarrolla argumentarios específicos para: primera vivienda, inversión para alquiler, cambio de residencia y compra de vivienda de lujo
   - Qué aspectos de la propiedad destacar según el perfil del comprador
   - Cómo presentar el precio como inversión y no como gasto

4. Manejo de objeciones frecuentes:
   - "El precio está muy alto" — cómo responder sin ceder inmediatamente
   - "Necesito consultarlo con mi pareja/familia" — cómo mantener el momentum
   - "Voy a esperar a que bajen los precios" — cómo rebatir con datos del mercado
   - "Estoy viendo otras propiedades" — cómo crear urgencia sin presionar

5. Seguimiento automatizado de leads:
   - Diseña una secuencia de seguimiento de 6 puntos de contacto post-visita
   - Qué contenido de valor enviar en cada touchpoint (no solo "¿qué te pareció la propiedad?")
   - Cómo usar WhatsApp Business de forma profesional para el seguimiento inmobiliario

6. Técnicas de cierre adaptadas al sector:
   - Las 5 técnicas de cierre más efectivas en el mercado inmobiliario español
   - Cómo reconocer las señales de compra del cliente y cuándo es el momento de pedir el cierre
   - Qué hacer cuando el cliente dice "sí pero..." y cómo convertirlo en un sí definitivo

7. Post-venta y generación de referidos:
   - Estrategia para mantener la relación con el cliente tras la firma
   - Cómo solicitar reseñas y referencias de forma natural y sin incomodar
   - Programa de referidos para antiguos clientes satisfechos

Para cada sección, incluye ejemplos de frases y diálogos reales que pueda usar o adaptar directamente en mi trabajo diario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar el proceso comercial inmobiliario desde la captación hasta el cierre con soporte de IA',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para apps PropTech con IA',
                'description'      => 'Define roadmaps, prioriza funcionalidades y gestiona el desarrollo de productos digitales para el sector inmobiliario aplicando inteligencia artificial en la toma de decisiones de producto.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager senior con experiencia en startups PropTech y plataformas digitales del sector inmobiliario. Dominas metodologías ágiles, frameworks de priorización de producto y el uso de IA para acelerar la toma de decisiones basada en datos. Has trabajado en productos como portales de búsqueda de propiedades, plataformas de gestión de alquileres y herramientas de inversión inmobiliaria.

Objetivo de la sesión:
Ayúdame a definir, priorizar y gestionar el desarrollo de un producto digital inmobiliario (PropTech) usando IA como herramienta de aceleración en el proceso de product management.

Instrucción de trabajo:
Guíame a través de las siguientes áreas del product management en PropTech:

1. Descubrimiento de producto y validación de hipótesis:
   - Cómo usar IA para analizar reseñas de competidores y extraer pain points no resueltos
   - Diseña una guía de entrevistas de usuario para el sector inmobiliario (compradores, vendedores, agentes, inversores)
   - Cómo sintetizar hallazgos cualitativos de entrevistas en insights accionables con ayuda de IA

2. Definición de la propuesta de valor y posicionamiento:
   - Ayúdame a redactar una propuesta de valor diferenciada para un producto PropTech
   - Cómo posicionarme frente a los grandes portales (Idealista, Fotocasa) como startup
   - Qué nichos del mercado inmobiliario están menos servidos por la tecnología actual

3. Roadmap de producto y priorización:
   - Aplica el framework RICE (Reach, Impact, Confidence, Effort) a un listado de funcionalidades PropTech
   - Cómo equilibrar la deuda técnica con las nuevas funcionalidades en un roadmap trimestral
   - Diseña un roadmap de 12 meses para una PropTech en fase seed con equipo reducido

4. Definición de historias de usuario y criterios de aceptación:
   - Escribe user stories para las 5 funcionalidades más críticas de una plataforma de búsqueda de propiedades
   - Cómo usar IA para generar criterios de aceptación exhaustivos a partir de una descripción de funcionalidad
   - Qué nivel de detalle debe tener la documentación de producto para un equipo de desarrollo de 3-5 personas

5. Métricas de producto y OKRs:
   - Define los KPIs clave para una plataforma inmobiliaria: adquisición, activación, retención, referidos e ingresos
   - Propón OKRs para los próximos dos trimestres enfocados en el crecimiento de usuarios activos
   - Cómo diseñar un dashboard de métricas de producto que el equipo revise semanalmente

6. Gestión de stakeholders y comunicación:
   - Cómo presentar el roadmap a inversores de forma que transmita visión y tracción
   - Template para la actualización semanal del equipo de producto
   - Cómo manejar peticiones de funcionalidades de clientes enterprise sin desviar el roadmap

7. Experimentación y cultura de datos:
   - Diseña un framework de A/B testing para una plataforma inmobiliaria
   - Qué experimentos de crecimiento son más comunes en PropTech exitosas
   - Cómo usar IA para analizar resultados de experimentos y sacar conclusiones más rápido

Para cada área, proporciona templates, frameworks y ejemplos concretos del sector inmobiliario que pueda usar o adaptar directamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el desarrollo de productos digitales inmobiliarios aplicando IA en decisiones de producto',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH y gestión de talento en empresas inmobiliarias con IA',
                'description'      => 'Optimiza la selección, onboarding y desarrollo de agentes inmobiliarios y equipos PropTech usando inteligencia artificial en los procesos de recursos humanos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Recursos Humanos con experiencia en el sector inmobiliario y empresas PropTech. Conoces las particularidades de gestionar equipos de agentes inmobiliarios, las altas tasas de rotación del sector, los modelos de compensación basados en comisiones y los perfiles técnicos que demandan las startups de tecnología inmobiliaria.

Objetivo de la sesión:
Ayúdame a modernizar los procesos de RRHH de una empresa inmobiliaria o PropTech usando inteligencia artificial para atraer mejor talento, reducir la rotación y desarrollar las capacidades del equipo.

Instrucción de trabajo:
Desarrolla conmigo las siguientes áreas de gestión de personas en el sector inmobiliario:

1. Atracción y selección de talento:
   - Redacta ofertas de empleo atractivas para perfiles clave: agente inmobiliario junior, agente senior, property manager y desarrollador de software para PropTech
   - Qué canales de captación funcionan mejor en el sector inmobiliario (portales de empleo, LinkedIn, comunidades profesionales)
   - Diseña un proceso de selección de 3 fases para agentes inmobiliarios que evalúe habilidades comerciales, resiliencia y fit cultural
   - Cómo usar IA para cribar CVs sin introducir sesgos en el proceso

2. Onboarding de agentes inmobiliarios:
   - Diseña un plan de onboarding de 90 días para un agente inmobiliario nuevo
   - Qué conocimientos deben adquirir en los primeros 30 días (producto, mercado, herramientas, procesos)
   - Cómo acelerar la curva de aprendizaje de un agente nuevo con recursos digitales y mentoring
   - Define los hitos y métricas que deben alcanzar en el primer trimestre

3. Sistemas de compensación e incentivos:
   - Analiza los modelos de comisión más comunes en el mercado inmobiliario español
   - Propón un esquema de incentivos que equilibre la motivación individual con los objetivos de equipo
   - Cómo diseñar un sistema de reconocimiento no monetario para el sector
   - Qué beneficios sociales valoran más los agentes inmobiliarios para reducir la rotación

4. Desarrollo de habilidades y formación continua:
   - Diseña un plan de formación anual para un equipo de agentes inmobiliarios
   - Qué competencias digitales son imprescindibles para un agente moderno (CRM, portales, herramientas IA)
   - Cómo crear un programa de mentoría entre agentes senior y junior
   - Métricas para evaluar el retorno de la inversión en formación

5. Gestión del rendimiento y feedback:
   - Diseña un sistema de evaluación del desempeño adaptado a las métricas del sector inmobiliario
   - Cómo tener conversaciones de feedback constructivas con agentes que no alcanzan sus objetivos
   - Cuándo y cómo intervenir ante un agente con bajo rendimiento antes de tomar decisiones más drásticas

6. Cultura de empresa y retención:
   - Qué elementos definen una cultura de empresa sana en una agencia inmobiliaria
   - Cómo reducir la alta rotación típica del sector inmobiliario
   - Estrategias para construir un employer branding atractivo en el mercado inmobiliario

7. RRHH para startups PropTech:
   - Qué perfiles técnicos son prioritarios en una PropTech en crecimiento
   - Cómo competir en talento tecnológico sin los recursos de una gran empresa
   - Estructura organizativa recomendada para una PropTech en fase de escala

Para cada área, proporciona plantillas, checklists y ejemplos concretos que pueda implementar directamente en mi empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar selección, onboarding y desarrollo de talento en empresas inmobiliarias y PropTech',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de inversiones inmobiliarias con IA',
                'description'      => 'Evalúa la rentabilidad de inversiones inmobiliarias, calcula métricas clave como yield, TIR y VAN, y modela escenarios de mercado usando inteligencia artificial como apoyo analítico.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en inversión inmobiliaria con experiencia en la evaluación de activos residenciales, comerciales y de uso mixto. Dominas las métricas estándar del sector (yield, cap rate, TIR, VAN, DSCR), el análisis de flujos de caja y la modelización de escenarios en el mercado inmobiliario español y europeo.

Objetivo de la sesión:
Ayúdame a analizar financieramente una inversión inmobiliaria de forma rigurosa, usar IA para acelerar el análisis y presentar las conclusiones de manera clara tanto para decisiones propias como para presentaciones a inversores.

Instrucción de trabajo:
Guíame a través del análisis financiero completo de una inversión inmobiliaria:

1. Métricas fundamentales de inversión inmobiliaria:
   - Explica y calcula: yield bruto, yield neto, cap rate, cash-on-cash return y ROI
   - Cuándo usar cada métrica según el tipo de inversión (alquiler residencial, comercial, SOCIMI)
   - Cuáles son los benchmarks del mercado español para cada tipología de activo
   - Qué errores cometen los inversores principiantes al calcular estas métricas

2. Modelo de flujos de caja (DCF):
   - Diseña una plantilla de modelo de flujos de caja para una inversión de alquiler residencial a 10 años
   - Qué supuestos incluir: inflación, revisión de rentas, vacancia, gastos de mantenimiento, impuestos
   - Cómo calcular la TIR y el VAN con diferentes escenarios de salida (venta al año 5, 7 o 10)
   - Cómo tratar fiscalmente los ingresos por alquiler en el modelo financiero

3. Análisis de sensibilidad y escenarios:
   - Desarrolla 3 escenarios (optimista, base y pesimista) para la misma inversión
   - Qué variables tienen mayor impacto en la rentabilidad final (precio de compra, renta, tasa de vacancia, coste de financiación)
   - Cómo presentar el análisis de sensibilidad de forma visual y comprensible para un inversor no técnico

4. Evaluación del apalancamiento financiero:
   - Cómo calcular el efecto del apalancamiento en la rentabilidad de la inversión
   - Qué ratio de LTV (loan-to-value) es prudente según el tipo de activo y el ciclo de mercado
   - Cómo evaluar el DSCR (Debt Service Coverage Ratio) y qué umbral mínimo exigen los bancos
   - Escenarios de estrés con subidas de tipos de interés

5. Due diligence financiera de una propiedad:
   - Qué documentación financiera revisar antes de adquirir un activo inmobiliario
   - Cómo verificar la veracidad de los ingresos declarados por el vendedor
   - Red flags financieros que deben hacer desistir de una inversión
   - Checklist de due diligence financiera en 20 puntos

6. Comparativa de mercados y localización:
   - Cómo comparar rentabilidades entre diferentes ciudades o zonas geográficas
   - Qué fuentes de datos usar para el análisis de mercado inmobiliario en España
   - Cómo identificar zonas con potencial de revalorización antes de que el mercado lo descuente

7. Presentación a inversores:
   - Estructura de un investment memo para una inversión inmobiliaria
   - Qué métricas presentar en el resumen ejecutivo y en qué orden
   - Cómo anticipar y responder las preguntas financieras más difíciles de los inversores

Para cada cálculo, muéstrame la fórmula, un ejemplo numérico con datos ficticios pero realistas del mercado español, y la interpretación del resultado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar la rentabilidad de inversiones inmobiliarias y presentar resultados a inversores',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y documentación legal inmobiliaria con IA',
                'description'      => 'Revisa, redacta y analiza contratos de compraventa, arrendamiento y documentación inmobiliaria usando IA como asistente legal especializado en el sector.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho inmobiliario con amplia experiencia en la redacción y revisión de contratos de compraventa, arrendamiento urbano, contratos de obra y documentación hipotecaria en España. Conoces en profundidad la Ley de Arrendamientos Urbanos (LAU), la normativa sobre compraventa de viviendas, la legislación hipotecaria y las últimas reformas legislativas del sector.

Objetivo de la sesión:
Ayúdame a revisar, redactar y entender contratos e documentación legal inmobiliaria usando IA como asistente especializado, garantizando que mis intereses estén protegidos y que la documentación cumpla con la normativa vigente.

Instrucción de trabajo:
Actúa como mi asesor legal inmobiliario y guíame en las siguientes áreas:

1. Contrato de arrendamiento de vivienda:
   - Qué cláusulas son obligatorias en un contrato de alquiler según la LAU vigente
   - Qué cláusulas pueden acordarse libremente entre las partes y cuáles son nulas de pleno derecho
   - Cláusulas de protección para el propietario arrendador más habituales en la práctica
   - Cláusulas de protección para el inquilino arrendatario que debe revisar antes de firmar
   - Qué estipular sobre la fianza, las garantías adicionales y el aval bancario
   - Cómo regular correctamente los suministros, las obras de mejora y la renovación del contrato

2. Contrato de compraventa de vivienda:
   - Diferencias entre contrato de arras penitenciales (art. 1454 CC) y arras confirmatorias
   - Qué cláusulas protegen al comprador en caso de vicios ocultos o cargas no declaradas
   - Qué debe incluir el contrato sobre la entrega de llaves, el estado del inmueble y los deslindes
   - Cómo regular los gastos de compraventa y quién asume cada concepto (notaría, registro, ITP/IVA)
   - Qué verificar en el registro de la propiedad antes de firmar cualquier contrato

3. Revisión de cláusulas problemáticas:
   - Identifica y explica las cláusulas más peligrosas que aparecen en contratos inmobiliarios
   - Cómo detectar cláusulas abusivas según la normativa de protección al consumidor
   - Qué hacer cuando el vendedor o arrendador se niega a modificar una cláusula problemática
   - Cuándo es imprescindible contar con un abogado propio y no confiar solo en la notaría

4. Documentación hipotecaria:
   - Qué documentos entrega el banco antes de la firma (FEIN, FIAE) y cómo revisarlos
   - Qué preguntar al notario en la acta de transparencia material previa
   - Cláusulas hipotecarias que han generado litigios masivos (suelo, IRPH, gastos, vencimiento anticipado)
   - Cómo negociar las condiciones hipotecarias con la entidad financiera

5. Contratos con agencias inmobiliarias:
   - Qué tipos de exclusiva existen y cuáles son sus implicaciones para el propietario
   - Qué cláusulas de la hoja de encargo son negociables
   - Cuándo se genera el derecho al cobro de honorarios de la agencia y en qué circunstancias puede discutirse

6. Resolución de conflictos inmobiliarios:
   - Qué vías existen para resolver un conflicto entre propietario e inquilino antes del juicio
   - Plazos y proceso del desahucio por impago y por expiración del contrato
   - Mediación inmobiliaria: cuándo es una opción válida y cómo funciona

Para cada área, señala la legislación aplicable, proporciona ejemplos de redacción de cláusulas y advierte sobre los errores más frecuentes que cometen particulares y empresas sin asesoramiento legal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Revisar y redactar contratos inmobiliarios con asistencia de IA para proteger los intereses del cliente',
                'vote_score'       => 61,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente inmobiliario con IA',
                'description'      => 'Mejora la experiencia del cliente en el proceso de compra, venta o alquiler de propiedades usando IA para personalizar la comunicación, resolver dudas y gestionar incidencias de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia de cliente (CX) con profundo conocimiento del sector inmobiliario. Entiendes que la compra de una vivienda es una de las decisiones más importantes y emocionalmente cargadas en la vida de una persona, y que la calidad del servicio al cliente puede determinar no solo el cierre de una operación sino también la reputación a largo plazo de una agencia o empresa PropTech.

Objetivo de la sesión:
Ayúdame a diseñar y mejorar la experiencia de cliente en cada fase del proceso inmobiliario, usando inteligencia artificial para personalizar la comunicación, anticipar necesidades y resolver incidencias de forma ágil y empática.

Instrucción de trabajo:
Desarrolla conmigo las siguientes áreas de atención al cliente inmobiliario:

1. Mapeo del journey del cliente inmobiliario:
   - Dibuja el customer journey completo desde que el cliente empieza a buscar hasta después de la firma
   - Identifica los momentos de la verdad (moments of truth) donde el servicio puede diferenciarse
   - Señala los pain points más frecuentes en cada fase y cómo la IA puede aliviarlos
   - Qué emociones experimenta el cliente en cada etapa y cómo adaptar la comunicación

2. Comunicación multicanal personalizada:
   - Diseña una estrategia de comunicación para los canales: WhatsApp, email, teléfono y portal web
   - Cómo usar IA para personalizar los mensajes según el perfil y comportamiento del cliente
   - Templates de mensajes para los momentos clave: primera respuesta a consulta, confirmación de visita, seguimiento post-visita, oferta, contraoferta y cierre
   - Cómo mantener una comunicación cálida y humana incluso usando herramientas automatizadas

3. Chatbot inmobiliario para atención 24/7:
   - Diseña el árbol de conversación para un chatbot de atención al cliente inmobiliario
   - Qué consultas puede resolver de forma autónoma (horarios, información de propiedades, solicitud de visita) y cuándo escalar al agente humano
   - Cómo gestionar la transición del chatbot al agente sin que el cliente tenga que repetir información
   - Cómo medir la efectividad del chatbot y mejorarlo iterativamente

4. Gestión de incidencias y reclamaciones:
   - Protocolo de respuesta ante una reclamación de cliente en 5 pasos
   - Cómo responder a reseñas negativas en Google Maps o portales inmobiliarios
   - Qué herramientas de ticketing y CRM funcionan mejor en el sector inmobiliario
   - Cómo convertir una experiencia negativa en una oportunidad de fidelización

5. Atención al cliente en el alquiler (property management):
   - Proceso eficiente para la recepción y gestión de incidencias en propiedades de alquiler
   - Cómo comunicar reparaciones y obras a los inquilinos de forma profesional
   - Gestión de la renovación y finalización de contratos de alquiler de forma proactiva
   - Cómo gestionar conflictos entre propietario e inquilino sin que escale a vía legal

6. Métricas de satisfacción del cliente:
   - Qué KPIs de CX son relevantes en el sector inmobiliario (NPS, CSAT, tiempo de respuesta, tasa de resolución en primer contacto)
   - Cómo implementar encuestas de satisfacción en momentos estratégicos del proceso
   - Cómo analizar el feedback cualitativo del cliente con ayuda de IA para identificar patrones

7. Fidelización y generación de prescriptores:
   - Estrategia post-cierre para mantener la relación con el cliente
   - Programa de referidos: cómo estructurarlo y comunicarlo de forma natural
   - Cómo convertir a clientes satisfechos en embajadores de la marca inmobiliaria

Para cada área, proporciona ejemplos de mensajes, scripts de conversación y métricas concretas que pueda implementar de inmediato.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar experiencias de cliente inmobiliario personalizadas y eficientes con soporte de IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría PropTech freelance con IA',
                'description'      => 'Ofrece servicios de consultoría especializada en tecnología inmobiliaria como freelance: diagnóstico digital, implementación de herramientas PropTech y estrategia de transformación digital para agencias.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en PropTech y transformación digital del sector inmobiliario. Tu propuesta de valor es ayudar a agencias inmobiliarias tradicionales, promotoras y gestoras de activos a adoptar tecnología que mejore su eficiencia operativa, aumente su captación de clientes y los haga más competitivos frente a los portales y las nuevas PropTech. Usas la IA como acelerador de tu propio trabajo de consultoría y como herramienta que implementas en los proyectos de tus clientes.

Objetivo de la sesión:
Ayúdame a estructurar mi servicio de consultoría PropTech freelance: desde la definición de mi propuesta de valor hasta la entrega de proyectos, pasando por la captación de clientes y la fijación de precios.

Instrucción de trabajo:
Desarrolla conmigo los siguientes aspectos de mi negocio de consultoría PropTech:

1. Definición de la propuesta de valor y nicho:
   - Ayúdame a definir mi especialización dentro del ecosistema PropTech (automatización de agencias, implementación de CRM, marketing digital inmobiliario, análisis de datos, etc.)
   - Cómo posicionarme como experto reconocible en un mercado donde hay pocas referencias claras
   - Qué problemas concretos de las agencias inmobiliarias tradicionales puedo resolver mejor que nadie
   - Cómo articular mi propuesta de valor en un elevator pitch de 30 segundos

2. Definición de servicios y paquetes:
   - Diseña 3 paquetes de servicio (básico, avanzado y premium) para una agencia inmobiliaria
   - Qué entregables debe incluir cada paquete (auditoría, informe, implementación, formación, seguimiento)
   - Cómo estructurar proyectos por fases para reducir el riesgo percibido por el cliente
   - Servicios recurrentes que generan ingresos estables mes a mes (retainer)

3. Fijación de precios y negociación:
   - Cómo fijar mis honorarios según el valor entregado y no solo el tiempo invertido
   - Rangos de precio habituales en consultoría tecnológica para pymes del sector inmobiliario
   - Cómo presentar un presupuesto que justifique el precio sin necesidad de defenderlo en exceso
   - Estrategia de precios para mis primeros 3 proyectos como freelance novel en el sector

4. Captación de clientes:
   - Estrategia de contenido en LinkedIn para posicionarme como referente en PropTech
   - Cómo usar casos de éxito propios y de terceros para generar credibilidad sin experiencia previa larga
   - Alianzas estratégicas con proveedores de software (CRM, portales, herramientas IA) para conseguir referidos
   - Networking: qué eventos y comunidades inmobiliarias son relevantes en España

5. Proceso de consultoría y entrega de proyectos:
   - Diseña un proceso estándar de consultoría en 5 fases (diagnóstico, propuesta, implementación, formación, seguimiento)
   - Qué herramientas usar en cada fase para ser más eficiente como freelance individual
   - Cómo documentar y entregar el trabajo de forma profesional con recursos limitados
   - Cómo gestionar proyectos simultáneos sin comprometer la calidad

6. Uso de IA en mi propia consultoría:
   - Qué tareas de mi trabajo como consultor puedo acelerar con IA (análisis de mercado, redacción de informes, creación de presentaciones, etc.)
   - Cómo usar IA para hacer diagnósticos más rápidos y precisos de una agencia inmobiliaria
   - Automatizaciones que puedo implementar en mis propios procesos administrativos

7. Escalabilidad del negocio:
   - Cómo pasar de proyectos puntuales a contratos de mantenimiento o consultoría continua
   - Cuándo y cómo subcontratar para crecer sin perder calidad
   - Opciones para escalar más allá del modelo de tiempo por dinero (cursos, infoproductos, comunidad)

Para cada área, proporciona ejemplos concretos, plantillas de documentos y recomendaciones de herramientas específicas que pueda implementar como freelance individual con presupuesto limitado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar y hacer crecer un negocio de consultoría PropTech freelance con apoyo de IA',
                'vote_score'       => 33,
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
