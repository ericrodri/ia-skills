<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills517Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de restaurantes con IA: estrategias digitales para atraer más clientes',
                'description'      => 'Aprende a usar IA para crear campañas de marketing gastronómico, gestionar reseñas online y diseñar promociones personalizadas que aumenten las reservas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing gastronómico digital con amplia experiencia en el sector de la restauración y en el uso de inteligencia artificial para campañas de captación de clientes.

objetivo: Ayudarme a desarrollar una estrategia de marketing completa para mi restaurante usando herramientas de IA, desde la creación de contenido hasta la gestión de reseñas y la fidelización de clientes.

Contexto de mi negocio:
- Tipo de restaurante: [describe tu tipo de cocina, estilo y concepto]
- Ubicación y público objetivo: [ciudad, barrio, tipo de cliente al que te diriges]
- Canales digitales actuales: [redes sociales que usas, si tienes web, app de reservas, etc.]
- Presupuesto mensual para marketing: [indica tu rango de inversión]
- Principal reto de marketing: [poca visibilidad, pocas reservas, mala reputación online, etc.]

Solicita que Claude desarrolle un plan de acción en los siguientes bloques:

BLOQUE 1 — Análisis de posicionamiento y competencia
Analiza cómo debería posicionarse mi restaurante frente a la competencia local. Sugiere un ángulo diferencial basado en mi concepto gastronómico, identifica los 3 mensajes clave que debo comunicar a mis clientes potenciales y define el tono de voz adecuado para mis comunicaciones digitales.

BLOQUE 2 — Estrategia de contenido para redes sociales
Crea un calendario editorial mensual para Instagram y Google Business con al menos 12 ideas de publicaciones. Para cada idea, incluye: tema del post, gancho o copy de apertura, hashtags recomendados y mejor horario de publicación. Incorpora formatos variados: reels de recetas, behind-the-scenes, presentación del equipo, platos estrella y testimonios de clientes.

BLOQUE 3 — Optimización de Google Business y reseñas
Redacta una descripción optimizada para mi ficha de Google Business que incluya palabras clave relevantes para búsquedas gastronómicas locales. Genera 5 respuestas modelo para distintos tipos de reseñas negativas que pueda recibir (espera larga, precio, calidad, servicio, error en el pedido), manteniendo siempre un tono profesional y empático.

BLOQUE 4 — Campañas de email marketing y fidelización
Diseña una secuencia de 3 correos electrónicos para fidelizar a clientes que ya visitaron el restaurante: un correo de agradecimiento post-visita, una oferta de cumpleaños personalizada y un correo de reactivación para clientes que no han vuelto en 60 días. Incluye asunto, cuerpo del mensaje y llamada a la acción.

BLOQUE 5 — Estrategia de colaboraciones con influencers foodie
Define los criterios para seleccionar microinfluencers gastronómicos en mi zona. Redacta un mensaje de propuesta de colaboración, una guía de briefing para la visita y 3 ideas creativas de contenido colaborativo que generen impacto real en reservas.

BLOQUE 6 — Métricas y KPIs de marketing
Establece los indicadores clave que debo monitorizar mensualmente: alcance e impresiones en redes, tasa de conversión de seguidores a clientes, puntuación media en reseñas, coste por reserva obtenida digitalmente y retorno de la inversión en campañas de pago. Explica cómo interpretar cada métrica y cuándo debo ajustar la estrategia.

Al finalizar, entrega un resumen ejecutivo de una página que pueda presentar a socios o inversores mostrando el plan de marketing digital del restaurante para los próximos tres meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear un plan de marketing digital completo para restaurantes usando IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de apps foodtech con IA para pedidos inteligentes y personalización',
                'description'      => 'Guía para desarrolladores que quieren integrar IA en aplicaciones de delivery y restauración: recomendaciones personalizadas, predicción de demanda y optimización logística.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en aplicaciones foodtech con experiencia en machine learning aplicado a plataformas de pedidos online y sistemas de recomendación gastronómica.

tarea: Ayudarme a diseñar e implementar funcionalidades de inteligencia artificial en una aplicación de pedidos para restaurantes, cubriendo desde la arquitectura técnica hasta los casos de uso específicos del sector.

Contexto técnico del proyecto:
- Stack tecnológico actual: [describe tu stack: frontend, backend, base de datos]
- Fase del proyecto: [MVP inicial, producto en producción, rediseño de funcionalidades]
- Volumen de datos disponibles: [número de pedidos históricos, perfiles de usuario, productos en catálogo]
- Principales funcionalidades actuales: [qué ya funciona en la app]
- Objetivo prioritario de IA: [personalización, predicción de demanda, optimización de rutas, detección de fraude]

Desarrolla una guía técnica detallada en los siguientes módulos:

MÓDULO 1 — Sistema de recomendaciones personalizadas
Diseña la arquitectura de un motor de recomendaciones que sugiera platos a cada usuario según su historial de pedidos, preferencias dietéticas declaradas, hora del día y datos demográficos. Explica qué algoritmos son más adecuados (filtrado colaborativo, content-based, híbrido), qué datos necesitas recopilar desde el primer día y cómo manejar el problema del arranque en frío para usuarios nuevos.

MÓDULO 2 — Predicción de demanda y gestión de inventario
Desarrolla un modelo conceptual para predecir la demanda de platos según variables como día de la semana, festivos, clima, eventos locales y tendencias estacionales. Explica cómo estructurar el pipeline de datos, qué features ingeniería aplicar y cómo integrar las predicciones con el sistema de gestión de inventario del restaurante para reducir mermas.

MÓDULO 3 — Optimización de rutas de delivery con IA
Describe cómo implementar un algoritmo de optimización de rutas que minimice el tiempo de entrega considerando múltiples pedidos simultáneos, tráfico en tiempo real, capacidad de los repartidores y ventanas de tiempo de los clientes. Menciona las APIs y librerías open source más útiles para este caso.

MÓDULO 4 — Chatbot de atención al cliente integrado en la app
Diseña el flujo conversacional de un chatbot que gestione las consultas más frecuentes: estado del pedido, modificaciones, reclamaciones y sugerencias de platos. Incluye cómo conectarlo con el backend de pedidos para dar respuestas en tiempo real y cuándo escalar a un agente humano.

MÓDULO 5 — Detección de anomalías y fraude en pedidos
Explica cómo entrenar un modelo para detectar patrones sospechosos: pedidos duplicados, comportamiento anómalo de cuentas, reseñas falsas o abuso de promociones. Define las señales de alerta, el umbral de decisión y el proceso de revisión manual de casos dudosos.

MÓDULO 6 — Métricas de producto y evaluación del impacto de IA
Establece los KPIs técnicos y de negocio para medir el éxito de cada funcionalidad de IA: tasa de aceptación de recomendaciones, reducción del tiempo de entrega, precisión de la predicción de demanda y reducción de incidencias. Incluye cómo instrumentar los eventos en la app para capturar estas métricas desde el primer día.

Finaliza con una hoja de ruta de implementación de 6 meses que priorice las funcionalidades por impacto potencial y complejidad técnica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar arquitectura de IA para aplicaciones de pedidos y delivery gastronómico',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de menús y experiencias gastronómicas con IA: creatividad y coherencia visual',
                'description'      => 'Usa IA para diseñar menús atractivos, crear identidades visuales de restaurantes y desarrollar experiencias gastronómicas memorables alineadas con el concepto del negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador creativo especializado en identidad visual para el sector gastronómico, con experiencia en branding de restaurantes, diseño editorial de menús y creación de experiencias de usuario en espacios de restauración.

objetivo: Ayudarme a desarrollar el sistema visual y la experiencia de cliente de un concepto gastronómico, usando IA como herramienta de ideación, creación de contenido y validación estética.

Información del concepto gastronómico:
- Nombre del restaurante o concepto: [nombre actual o ideas de nombre]
- Tipo de cocina y precio medio: [cocina mediterránea, asiática fusion, alta cocina, informal, etc.]
- Público objetivo: [describe el cliente ideal: edad, estilo de vida, valores]
- Ambiente y decoración deseada: [minimalista, rústico, industrial, íntimo, etc.]
- Referencias visuales que te inspiran: [marcas, restaurantes o estilos que admiras]

Desarrolla el proyecto en las siguientes fases:

FASE 1 — Definición de identidad de marca gastronómica
Crea 3 propuestas de concepto de marca distintas para el restaurante. Para cada una, define: nombre o variante del nombre, tagline memorable, paleta de colores con códigos hexadecimales, tipografías recomendadas (titular y cuerpo), metáfora visual central y estado emocional que debe evocar en el cliente al entrar.

FASE 2 — Diseño del menú físico y digital
Diseña la arquitectura de información del menú: cómo organizar las secciones, qué jerarquía visual aplicar, cómo destacar los platos estrella sin saturar, qué papel y acabado recomendar para el menú físico y cómo adaptar el diseño para la versión digital en tablet o QR. Incluye recomendaciones de fotografía gastronómica: ángulos, iluminación y estilo de edición coherente con la identidad.

FASE 3 — Experiencia de cliente en el restaurante
Diseña el journey completo del cliente desde que ve el restaurante en redes hasta que deja una reseña positiva. Identifica los cinco momentos de mayor impacto emocional y propón para cada uno un elemento de diseño o detalle experiencial que lo haga memorable: la bienvenida, la presentación de la carta, el momento del plato principal, el cierre de la cuenta y el recuerdo que se lleva el cliente.

FASE 4 — Piezas gráficas para redes sociales
Genera un sistema de plantillas visuales para Instagram que incluya: posts de platos, stories de promociones, carruseles de recetas y reels de proceso en cocina. Define las reglas de composición, el uso del logo, los márgenes de seguridad y la coherencia entre piezas para que el feed tenga una estética reconocible.

FASE 5 — Señalética, packaging y detalles de marca
Diseña el sistema de señalética interior del restaurante: cartel de entrada, menú de pizarra, cartel de reservas, packaging para takeaway y etiquetas de productos propios (salsas, conservas, merchandising). Define cómo la marca se traslada a estos soportes manteniendo coherencia.

Entrega al final un manual de marca simplificado que cualquier proveedor o colaborador pueda usar para respetar la identidad visual del restaurante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar identidad visual y experiencia de cliente para conceptos gastronómicos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para aumentar el ticket medio y las ventas en restauración',
                'description'      => 'Estrategias de upselling y cross-selling con IA para restaurantes: entrena a tu equipo, optimiza la carta y diseña promociones que incrementen el gasto por cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de ventas especializado en el sector de la restauración con experiencia en técnicas de upselling, gestión de equipos de sala y optimización de la rentabilidad de restaurantes mediante el análisis de datos de ventas.

tarea: Desarrollar una estrategia completa para aumentar el ticket medio de mi restaurante usando inteligencia artificial como herramienta de análisis, formación del equipo y diseño de promociones.

Datos de mi negocio actual:
- Ticket medio actual por comensal: [indica el importe actual]
- Número de comensales diarios (media): [indica la media de cubiertos]
- Estructura de la carta: [número de entrantes, principales, postres, bebidas]
- Nivel de formación del equipo de sala en ventas: [bajo, medio, alto]
- Sistema de gestión del restaurante (TPV): [nombre del software si lo tienes]

Desarrolla la estrategia en los siguientes bloques:

BLOQUE 1 — Análisis de la carta y oportunidades de upselling
Analiza la estructura de mi carta e identifica los 5 platos o productos con mayor margen y potencial de recomendación. Para cada uno, genera un script de sugerencia natural que el personal de sala pueda usar sin que suene forzado. Explica qué momentos de la experiencia son ideales para introducir cada sugerencia.

BLOQUE 2 — Formación del equipo en técnicas de venta consultiva
Diseña un programa de formación de 4 horas para el equipo de sala en técnicas de venta adaptadas a la restauración: cómo leer las señales de un cliente receptivo, cómo presentar maridajes, cómo recomendar postres al final de la comida y cómo gestionar objeciones de precio. Incluye role-playing de situaciones reales.

BLOQUE 3 — Ingeniería de menú con IA
Explica cómo aplicar los principios de ingeniería de menú para maximizar las ventas de los platos más rentables: posicionamiento en la carta, uso de descripciones persuasivas, fijación psicológica de precios y eliminación de platos que generan ruido sin rentabilidad. Genera ejemplos de descripciones de platos antes y después de optimizarlas con IA.

BLOQUE 4 — Promociones y combos de alto valor percibido
Diseña 5 propuestas de menús degustación, combos o experiencias especiales que incrementen el ticket medio y que sean fáciles de comunicar en mesa y en redes sociales. Para cada propuesta incluye precio sugerido, margen estimado y argumento de venta principal.

BLOQUE 5 — Programa de fidelización orientado al gasto
Diseña un sistema de puntos o recompensas que incentive a los clientes frecuentes a gastar más en cada visita: estructura de niveles, beneficios exclusivos por nivel, mecanismo de comunicación y cómo evitar que el programa canibalice el margen.

BLOQUE 6 — Seguimiento y gamificación del equipo de ventas
Crea un sistema de incentivos para el personal de sala basado en resultados de venta: tablero de puntuaciones semanal, recompensas alcanzables y métricas de seguimiento que no generen presión excesiva sino motivación positiva.

Entrega un plan de acción con las 10 acciones prioritarias ordenadas por impacto esperado en el ticket medio durante los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Aumentar el ticket medio en restaurantes con estrategias de ventas asistidas por IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en plataformas foodtech con IA: de la idea al lanzamiento',
                'description'      => 'Framework para product managers del sector foodtech: define roadmaps, prioriza funcionalidades con IA y toma decisiones basadas en datos de comportamiento de usuarios gastronómicos.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en plataformas foodtech con experiencia en aplicaciones de delivery, reservas de restaurantes, gestión de inventario gastronómico y herramientas SaaS para el sector de la restauración.

objetivo: Ayudarme a estructurar la gestión de producto de mi plataforma foodtech usando inteligencia artificial para priorizar decisiones, analizar feedback de usuarios y definir una hoja de ruta coherente con los objetivos del negocio.

Contexto de la plataforma:
- Tipo de plataforma: [delivery, reservas, gestión de restaurante, marketplace de ingredientes, etc.]
- Fase actual: [pre-lanzamiento, MVP live, crecimiento, escala]
- Número de usuarios activos mensuales: [si aplica]
- Principales métricas de negocio: [GMV, tasa de retención, NPS, tiempo en app, etc.]
- Mayor reto actual de producto: [retención, monetización, expansión a nuevos mercados, calidad del servicio]

Desarrolla el framework de gestión de producto en los siguientes módulos:

MÓDULO 1 — Discovery y validación de oportunidades de producto
Diseña un proceso de discovery continuo para identificar oportunidades de mejora del producto. Incluye: cómo estructurar entrevistas con restaurantes y usuarios finales, qué preguntas hacer para descubrir puntos de dolor no expresados, cómo sintetizar el feedback cualitativo con IA y cómo convertirlo en hipótesis de producto priorizables.

MÓDULO 2 — Framework de priorización de funcionalidades con IA
Crea un sistema de priorización que combine el modelo RICE (Reach, Impact, Confidence, Effort) con análisis de datos de comportamiento de usuario. Explica cómo usar IA para estimar el impacto de cada funcionalidad a partir de datos históricos y cómo evitar los sesgos cognitivos más comunes en la priorización de producto.

MÓDULO 3 — Definición de OKRs para el equipo de producto foodtech
Diseña los OKRs de producto para un trimestre, alineados con los objetivos de crecimiento del negocio foodtech. Para cada objetivo, define 3 resultados clave medibles, el propietario dentro del equipo y la frecuencia de revisión. Incluye ejemplos específicos del sector: retención de restaurantes partners, tasa de conversión de pedidos, tiempo hasta primer pedido de nuevos usuarios.

MÓDULO 4 — Análisis de datos de comportamiento de usuario con IA
Explica cómo usar IA para analizar los datos de comportamiento de usuarios en la plataforma: patrones de abandono, flujos de conversión, segmentación de usuarios por valor y predicción de churn. Define qué eventos de tracking implementar desde el primer día y cómo estructurar los dashboards de producto para decisiones rápidas.

MÓDULO 5 — Gestión del roadmap y comunicación con stakeholders
Diseña un template de roadmap trimestral para una plataforma foodtech que comunique claramente las apuestas estratégicas, los entregables comprometidos y las áreas de exploración. Incluye cómo presentarlo al equipo de ingeniería, a los restaurantes partners y a inversores con el nivel de detalle adecuado para cada audiencia.

MÓDULO 6 — Experimentos y cultura de aprendizaje rápido
Diseña un framework de experimentación para el equipo de producto: cómo definir hipótesis, diseñar A/B tests válidos estadísticamente, decidir el tamaño de muestra necesario y documentar aprendizajes de forma que el conocimiento no se pierda. Incluye una plantilla de retrospectiva de experimentos fallidos.

Entrega una guía de arranque de 30 días para un product manager que acaba de incorporarse a una startup foodtech en fase de crecimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar la gestión de producto en plataformas foodtech con metodologías de IA',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personal en hostelería con IA: turnos, contratación y formación',
                'description'      => 'Optimiza la gestión de equipos en restaurantes y hoteles con IA: planificación de turnos inteligente, procesos de selección eficientes y programas de formación adaptados al sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos especializado en el sector de la hostelería y la restauración, con experiencia en la gestión de equipos de alta rotación, planificación de turnos en entornos de alta demanda y programas de formación para personal de sala, cocina y recepción.

tarea: Desarrollar un sistema integral de gestión de personas para un negocio de hostelería usando inteligencia artificial para optimizar la planificación, mejorar la selección y reducir la rotación de personal.

Información del negocio:
- Tipo de establecimiento: [restaurante, hotel, cadena, catering, etc.]
- Número de empleados: [plantilla actual]
- Principal problema de RRHH: [rotación alta, dificultad para contratar, gestión de turnos compleja, falta de formación]
- Convenio colectivo aplicable: [hostelería, si aplica en tu país]
- Sistema de gestión de turnos actual: [hoja de cálculo, app, software específico]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Planificación inteligente de turnos
Diseña un sistema de planificación de turnos que use IA para optimizar la cobertura según la demanda histórica del negocio. Explica cómo predecir las necesidades de personal por franja horaria, día de la semana y temporada. Incluye cómo gestionar las peticiones de cambio de turno, las bajas de última hora y los picos de demanda imprevistos sin generar horas extra innecesarias.

BLOQUE 2 — Proceso de selección de personal de hostelería con IA
Crea un proceso de selección en 4 fases para contratar camareros, cocineros y personal de recepción: definición del perfil ideal por puesto, redacción de ofertas de empleo que atraigan al candidato correcto, cuestionario de previsión con IA para filtrar CVs y guía de entrevista por competencias adaptada al sector hostelero. Incluye las competencias blandas más relevantes para cada puesto.

BLOQUE 3 — Onboarding acelerado para personal nuevo
Diseña un programa de incorporación de 7 días para personal de sala nuevo que cubra: conocimiento del producto (carta, alérgenos, maridajes), protocolos de servicio, uso de sistemas de gestión (TPV, reservas) y cultura del equipo. Incluye materiales de formación que puedan generarse con IA: guías visuales, quizzes de verificación y simulaciones de situaciones reales.

BLOQUE 4 — Formación continua y desarrollo profesional
Crea un plan de formación anual para el equipo de hostelería que incluya módulos de ventas (upselling, técnicas de recomendación), idiomas para la atención a turistas, gestión de conflictos con clientes y normas de higiene y seguridad alimentaria. Explica cómo usar IA para personalizar el itinerario formativo según el nivel y los objetivos de cada empleado.

BLOQUE 5 — Reducción de la rotación y fidelización del talento
Identifica las 5 principales causas de rotación en el sector hostelero y diseña para cada una una acción de retención concreta: mejoras en condiciones, reconocimiento, flexibilidad horaria, plan de carrera interno y clima de equipo. Incluye una encuesta de clima laboral breve que pueda realizarse mensualmente con análisis de resultados automatizado.

Entrega un modelo de política de RRHH de una página que cualquier jefe de sala o responsable de cocina pueda consultar para tomar decisiones cotidianas de gestión de personal de forma coherente con los valores del establecimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar la gestión de equipos en hostelería con planificación y formación asistida por IA',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control financiero y optimización de costes en restaurantes con IA',
                'description'      => 'Aplica IA al análisis financiero de tu restaurante: controla el food cost, optimiza precios de la carta, detecta desviaciones y mejora la rentabilidad de cada plato.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor financiero especializado en la restauración con experiencia en el análisis de rentabilidad de restaurantes, gestión del food cost, fijación de precios de carta y control de tesorería en negocios gastronómicos de distintos tamaños.

objetivo: Desarrollar un sistema de control financiero completo para mi restaurante usando inteligencia artificial para analizar datos, identificar desviaciones y tomar decisiones de precios y costes basadas en datos reales.

Datos financieros del negocio:
- Facturación mensual media: [indica el volumen aproximado]
- Food cost actual (% sobre ventas): [si lo conoces]
- Número de referencias en carta: [platos aproximados]
- Sistema de contabilidad o TPV: [software que usas actualmente]
- Principal preocupación financiera: [márgenes bajos, costes de personal, desperdicio de ingredientes, etc.]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Cálculo y optimización del food cost por plato
Explica cómo calcular el coste exacto de cada plato de la carta incluyendo ingredientes, mermas, desperdicios y porcentaje de personal. Diseña una plantilla de escandallo detallada para los 10 platos más vendidos. Establece el porcentaje máximo de food cost admisible por categoría (entrantes, principales, postres, bebidas) y define las alertas de desviación que deben activar una revisión.

BLOQUE 2 — Fijación de precios de carta con criterio de rentabilidad
Desarrolla un modelo de fijación de precios que equilibre el coste real del plato, el precio psicológico que el cliente acepta, el margen deseado y el posicionamiento competitivo del restaurante. Genera una matriz de análisis para cada plato: clasificación (estrella, vaca, interrogante, perro) y acción recomendada para cada categoría.

BLOQUE 3 — Control de inventario y reducción de desperdicios
Diseña un sistema de control de inventario semanal que permita detectar diferencias entre el consumo teórico (según ventas del TPV) y el consumo real (según pedidos a proveedores). Calcula el porcentaje de merma admisible por familia de producto y genera alertas automáticas cuando se supera. Incluye un protocolo de gestión de excedentes para reducir el desperdicio.

BLOQUE 4 — Análisis de rentabilidad por servicio y turno
Explica cómo desglosar la rentabilidad del restaurante por turno (mediodía vs noche), día de la semana y tipo de evento (carta libre, menú del día, eventos privados). Identifica cuáles son los servicios más rentables y propón acciones para potenciarlos o rediseñar los menos rentables.

BLOQUE 5 — Previsión de tesorería y planificación de temporada
Diseña un modelo de previsión de tesorería a 3 meses que anticipe los meses de baja demanda, los picos de gasto en aprovisionamiento y los períodos de mayor necesidad de liquidez. Incluye cómo usar datos históricos de ventas para proyectar escenarios optimista, realista y pesimista y qué decisiones tomar en cada escenario.

BLOQUE 6 — Cuadro de mando financiero para restaurantes
Diseña un dashboard financiero mensual con los 10 indicadores clave que todo restaurador debe revisar: ticket medio, rotación de mesas, ratio de ocupación, margen bruto, coste de personal sobre ventas, productividad por empleado, días de pago a proveedores, índice de desperdicio, evolución de reseñas y retorno de la inversión en marketing.

Entrega un informe ejecutivo de una página con el diagnóstico financiero de mi restaurante y las 5 acciones de mayor impacto para mejorar la rentabilidad en los próximos 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Controlar la rentabilidad y optimizar costes en restaurantes con análisis financiero con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance alimentario y trazabilidad con IA: normativa y gestión documental',
                'description'      => 'Gestiona el cumplimiento normativo en el sector alimentario con IA: trazabilidad de ingredientes, etiquetado, alérgenos, APPCC y auditorías sanitarias.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor legal y de calidad especializado en derecho alimentario y normativa sanitaria para el sector de la restauración y la industria agroalimentaria, con conocimiento profundo de la regulación europea, los sistemas APPCC y los requisitos de trazabilidad de alimentos.

tarea: Ayudarme a estructurar el sistema de compliance alimentario de mi negocio usando inteligencia artificial para gestionar la documentación, anticipar riesgos regulatorios y preparar auditorías sanitarias.

Contexto del negocio:
- Tipo de actividad: [restaurante, catering, producción alimentaria, distribución, etc.]
- Países donde opera: [España, UE, exportación fuera de la UE]
- Número de referencias de producto o platos: [indica la magnitud del catálogo]
- Estado actual del sistema APPCC: [no existe, básico, completo pero desactualizado]
- Principal riesgo de compliance detectado: [alérgenos, trazabilidad, etiquetado, temperatura, etc.]

Desarrolla el sistema de compliance en los siguientes módulos:

MÓDULO 1 — Marco normativo aplicable al negocio
Resume la legislación alimentaria esencial que debe cumplir mi negocio: Reglamento (CE) 178/2002 de principios generales de derecho alimentario, Reglamento (CE) 852/2004 de higiene, Reglamento (UE) 1169/2011 de información alimentaria, normativa de alérgenos y legislación nacional aplicable. Identifica las 5 áreas de mayor riesgo de incumplimiento en negocios similares al mío.

MÓDULO 2 — Sistema APPCC: diseño y documentación con IA
Explica cómo diseñar o actualizar el sistema de Análisis de Peligros y Puntos de Control Crítico (APPCC) para mi negocio. Genera una plantilla de diagrama de flujo del proceso productivo, identifica los puntos de control crítico más habituales en restauración (temperatura de conservación, cocción, descongelación, limpieza de superficies) y crea los registros de control necesarios para cumplir con los requisitos de la autoridad sanitaria.

MÓDULO 3 — Gestión de alérgenos: protocolo y comunicación
Diseña un protocolo integral de gestión de alérgenos que cubra: identificación de los 14 alérgenos de declaración obligatoria en todos los platos de la carta, procedimiento de comunicación al cliente (verbal, escrita, digital), protocolo de actuación ante una reacción alérgica y formación básica del personal en la materia. Genera la ficha técnica de alérgenos para 5 platos tipo.

MÓDULO 4 — Trazabilidad de ingredientes y gestión de proveedores
Explica cómo implementar un sistema de trazabilidad que permita rastrear cualquier ingrediente desde el proveedor hasta el plato servido. Define los registros mínimos necesarios, cómo auditar a los proveedores mediante cuestionarios de homologación generados con IA y qué hacer en caso de alerta alimentaria o retirada de producto del mercado.

MÓDULO 5 — Etiquetado de productos propios y packaging
Si el negocio comercializa productos envasados propios (conservas, salsas, platos para llevar), revisa los requisitos de etiquetado obligatorio: denominación del producto, lista de ingredientes, alérgenos en negrita, valor nutricional, fecha de duración mínima, condiciones de conservación, lote e identificación del operador. Genera una plantilla de etiqueta modelo para un producto tipo.

MÓDULO 6 — Preparación de auditorías sanitarias con IA
Diseña un checklist de autoauditoría basado en los criterios de inspección de la autoridad sanitaria: instalaciones, equipos, temperatura de almacenamiento, documentación APPCC, trazabilidad, formación del personal y control de plagas. Genera un plan de acción correctivo para las 10 deficiencias más frecuentes detectadas en inspecciones.

Entrega un informe de diagnóstico de cumplimiento normativo con semáforo de riesgo (verde, ámbar, rojo) para cada área y un plan de acción priorizado para alcanzar el cumplimiento pleno en 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar el compliance alimentario y la trazabilidad en negocios del sector gastronómico',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en restauración con IA: chatbots, reseñas y gestión de incidencias',
                'description'      => 'Implementa IA en la atención al cliente de restaurantes: gestiona reseñas online, diseña chatbots de reservas y crea protocolos de resolución de incidencias que conviertan quejas en fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia de cliente para el sector de la restauración con experiencia en la implementación de soluciones de atención al cliente omnicanal, gestión de la reputación online y diseño de protocolos de resolución de reclamaciones en restaurantes y cadenas gastronómicas.

objetivo: Diseñar un sistema completo de atención al cliente para mi restaurante que use IA para automatizar respuestas, gestionar la reputación online y convertir cada experiencia negativa en una oportunidad de fidelización.

Contexto del negocio:
- Tipo de restaurante y volumen de clientes: [describe el negocio y el número de comensales mensuales]
- Canales de atención actuales: [teléfono, WhatsApp, email, redes sociales, plataformas de reseñas]
- Problema principal de atención al cliente: [muchas reseñas negativas, tiempo de respuesta lento, falta de protocolos, etc.]
- Plataformas donde recibes reseñas: [Google, TripAdvisor, TheFork, Deliveroo, etc.]
- Nivel de digitalización del equipo: [bajo, medio, alto]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Chatbot de reservas y consultas frecuentes
Diseña el flujo conversacional completo de un chatbot para WhatsApp o web que gestione: solicitudes de reserva (fecha, hora, número de comensales, preferencias especiales), consultas sobre la carta y alérgenos, información sobre horarios y localización, y recepción de pedidos para takeaway. Incluye los mensajes de bienvenida, los nodos de decisión y los mensajes de error cuando el chatbot no puede resolver la consulta.

BLOQUE 2 — Gestión de reseñas online con IA
Crea un sistema de respuesta a reseñas que clasifique automáticamente el feedback por tipo (servicio, comida, precio, ambiente, tiempo de espera) y genere borradores de respuesta personalizados. Para reseñas de 5 estrellas, redacta 5 respuestas variadas que agradezcan sin ser repetitivas. Para reseñas de 1-2 estrellas, genera respuestas que reconozcan el problema, ofrezcan solución concreta e inviten a una segunda visita.

BLOQUE 3 — Protocolo de gestión de incidencias en sala
Diseña un árbol de decisión para que el equipo de sala gestione las incidencias más frecuentes: plato incorrecto, tiempo de espera excesivo, problema con la cuenta, cliente insatisfecho con la calidad, incidente de alérgenos. Para cada tipo, define la respuesta inmediata del camarero, cuándo escalar al responsable y qué compensación ofrecer dentro de los límites autorizados.

BLOQUE 4 — Sistema de feedback post-visita
Diseña una encuesta de satisfacción breve (máximo 5 preguntas) que pueda enviarse por WhatsApp o email 2 horas después de la visita. Define cómo analizar los resultados con IA para identificar patrones de insatisfacción, qué umbral de puntuación debe activar una llamada de seguimiento personalizada y cómo usar el feedback para mejorar los procesos internos.

BLOQUE 5 — Atención en redes sociales y gestión de crisis
Define un protocolo de atención en redes sociales con tiempos de respuesta comprometidos por canal, tono de comunicación según la red (Instagram, X/Twitter, Facebook) y un plan de gestión de crisis ante una publicación viral negativa. Incluye cómo coordinar la respuesta entre el community manager y la dirección del restaurante para garantizar coherencia.

BLOQUE 6 — Métricas de calidad de la atención al cliente
Establece los KPIs de atención al cliente que debo monitorizar mensualmente: puntuación media en plataformas de reseñas, tiempo medio de respuesta a reseñas, tasa de resolución de incidencias, NPS post-visita, porcentaje de clientes que repiten tras una queja gestionada correctamente y evolución del sentimiento en reseñas.

Entrega un manual de atención al cliente de una página que cualquier miembro del equipo pueda consultar para actuar correctamente ante cualquier situación con un cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar sistemas de atención al cliente con IA para restaurantes y negocios de restauración',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de IA para restaurantes y negocios de alimentación: servicios freelance',
                'description'      => 'Guía para freelancers que quieren ofrecer servicios de consultoría de IA al sector gastronómico: define tu propuesta de valor, estructura tus servicios y consigue tus primeros clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en el diseño de servicios freelance para el sector tecnológico y gastronómico, con experiencia en el posicionamiento de consultores independientes de IA y en la estructuración de propuestas de valor para clientes del sector de la alimentación y la restauración.

tarea: Ayudarme a lanzar o consolidar mi práctica de consultoría freelance de inteligencia artificial enfocada en el sector gastronómico: restaurantes, productores de alimentos, plataformas de delivery y negocios foodtech.

Mi perfil profesional:
- Experiencia técnica en IA: [describe tus competencias: prompt engineering, automatización, análisis de datos, etc.]
- Experiencia previa en el sector gastronómico: [si tienes experiencia directa o es un sector nuevo para ti]
- Servicios que ya ofreces o quieres ofrecer: [descripción general]
- Tipo de cliente objetivo: [restaurantes independientes, cadenas, startups foodtech, productores, distribuidores]
- Tarifa horaria o de proyecto actual: [si ya tienes precios definidos]

Desarrolla el plan de negocio freelance en los siguientes bloques:

BLOQUE 1 — Propuesta de valor y posicionamiento diferencial
Define mi propuesta de valor única como consultor de IA para el sector gastronómico. Identifica los 3 problemas más urgentes que los restaurantes y negocios alimentarios necesitan resolver con IA ahora mismo. Para cada problema, redacta un mensaje de posicionamiento claro que pueda usar en mi web, LinkedIn y materiales de captación de clientes.

BLOQUE 2 — Catálogo de servicios freelance de IA para el sector
Diseña un catálogo de 5 servicios concretos que puedo ofrecer: diagnóstico de oportunidades de IA (servicio de entrada), implementación de chatbots de atención al cliente, automatización de marketing de contenidos, análisis de datos de ventas y rentabilidad, y formación de equipos en herramientas de IA. Para cada servicio, define: descripción, entregables, duración, precio orientativo y perfil de cliente ideal.

BLOQUE 3 — Estrategia de captación de primeros clientes
Diseña una estrategia de captación de los primeros 5 clientes en el sector gastronómico sin depender de publicidad de pago: cómo usar LinkedIn para conectar con propietarios de restaurantes y directores de operaciones de cadenas, cómo aprovechar asociaciones del sector (Hostelería de España, Federaciones autonómicas), qué ofrecer como servicio gratuito de entrada para demostrar valor y cómo pedir referidos a clientes satisfechos.

BLOQUE 4 — Propuesta comercial y proceso de venta
Diseña una propuesta comercial tipo de 5 páginas que pueda personalizar para cada cliente: resumen ejecutivo, diagnóstico del problema del cliente, solución propuesta, metodología de trabajo, inversión y condiciones. Incluye un script de llamada de discovery de 20 minutos para entender las necesidades del cliente antes de enviar la propuesta.

BLOQUE 5 — Modelo de precios y gestión de proyectos
Define 3 modelos de precios que puedo usar según el tipo de proyecto: precio por hora para consultoría puntual, precio de proyecto cerrado para implementaciones concretas y retainer mensual para acompañamiento continuo. Para cada modelo, explica cuándo es el más adecuado, cómo protegerme de scope creep y qué hitos de entrega y pago establecer en el contrato.

BLOQUE 6 — Marca personal y contenido de autoridad
Diseña una estrategia de contenido para LinkedIn que me posicione como referente en IA para la restauración: frecuencia de publicación, tipos de contenido (casos de éxito, reflexiones sobre el sector, tutoriales, tendencias de foodtech), estructura de los posts y métricas de crecimiento de audiencia. Genera 10 ideas de posts concretos que pueda desarrollar en las próximas semanas.

Entrega un plan de acción de 90 días con los hitos semanales más importantes para lanzar o relanzar mi práctica de consultoría freelance de IA en el sector gastronómico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzar una práctica de consultoría freelance de IA especializada en el sector gastronómico',
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
