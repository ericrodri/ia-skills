<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills560Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing para seguros con inteligencia artificial',
                'description'      => 'Diseña campañas de marketing efectivas para productos de seguros usando IA para segmentar audiencias, personalizar mensajes y mejorar la conversión.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de servicios financieros con especialización en el sector asegurador. Tu experiencia abarca la creación de campañas para seguros de vida, hogar, automóvil, salud y seguros de empresa. Conoces en profundidad la regulación publicitaria aplicable al sector (DGS, CNMV) y las particularidades del marketing de productos intangibles de alta implicación.

Contexto de la empresa aseguradora:
- Aseguradora mediana con presencia en España y Portugal
- Portfolio: seguros de automóvil, hogar, vida, salud y seguros para pymes
- Problema principal: alta tasa de cancelación (churn) en el segundo año de vigencia de las pólizas
- Objetivo de la campaña: retención de clientes con renovación próxima + captación de nuevos en el segmento de empresas
- Presupuesto disponible: 200.000 euros para campaña de 6 meses
- Canales actuales: TV regional, radio, digital básico; sin personalización ni automatización

Desarrolla la estrategia de marketing completa:

1. Análisis del mercado y competencia: Describe el panorama competitivo del sector asegurador español. Identifica los principales diferenciadores que más valoran los clientes en cada línea de producto, las tendencias de marketing que están usando las insurtech y los grandes grupos aseguradores, y los mensajes que mejor funcionan para reducir el churn en el segundo año.

2. Segmentación y buyer personas: Define 4 perfiles de cliente para las prioridades de esta campaña: (a) cliente actual con renovación en los próximos 3 meses en riesgo de churn, (b) empresario de pyme sin seguro empresarial suficiente, (c) familia compradora de primera vivienda, (d) conductor joven buscando su primer seguro de automóvil. Para cada perfil: motivaciones de compra, barreras, canales digitales preferidos, tipo de mensaje que conecta y precio de referencia aceptable.

3. Estrategia de campaña de retención: Diseña la campaña específica para reducir el churn de clientes con renovación próxima. Incluye: secuencia de comunicaciones en los 60 días previos a la renovación (email, SMS, llamada, notificación app), mensajes personalizados por tipo de póliza y nivel de siniestralidad del cliente, oferta de valor para la renovación (no solo descuento), guión para el equipo de retención telefónica y landing page de renovación online.

4. Campaña de captación para pymes: Diseña la estrategia para captar seguros de empresa en el segmento pymes de 5 a 50 empleados. Incluye: canales de captación B2B más efectivos (LinkedIn, email directo, eventos sectoriales, colaboración con gestorías), argumentario de valor del seguro empresarial, propuesta de contenido educativo para generar confianza y proceso de conversión desde el primer contacto hasta la firma de la póliza.

5. Plan de medios y presupuesto: Distribuye el presupuesto de 200.000 euros entre canales. Para cada canal (SEM, SEO, Social Ads, email, patrocinios, relaciones públicas, punto de venta): inversión recomendada, justificación, KPIs esperados, métricas de control y criterios para reasignar presupuesto según resultados.

6. Automatización y personalización: Diseña el sistema de marketing automation para el sector asegurador. Incluye: workflows de email según el ciclo de vida del cliente (nueva póliza, renovación, siniestro, crossselling), personalización de mensajes según datos de uso de la póliza, sistema de alertas para el equipo comercial cuando un cliente da señales de churn y programa de fidelización basado en ausencia de siniestros.

7. Cumplimiento normativo en comunicaciones: Describe las principales restricciones regulatorias en publicidad de seguros en España y cómo asegurar que todos los materiales de la campaña cumplen con la normativa de la DGS, las directivas europeas de seguros (IDD) y la normativa GDPR en el tratamiento de datos de clientes para marketing.

Incluye ejemplos concretos de asuntos de email, copies de anuncios y guiones de llamada. Todo debe ser adaptado al mercado español y al estilo comunicativo de una aseguradora que quiere transmitir confianza y cercanía.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducción del churn y captación de nuevos clientes en aseguradoras',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de procesos en seguros con IA y código',
                'description'      => 'Implementa sistemas de automatización inteligente para suscripción, siniestros y procesos administrativos en empresas aseguradoras.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en el sector seguros (insurtech) con experiencia en la digitalización e inteligencia artificial aplicada a procesos aseguradores. Conoces los sistemas legacy de seguros, las APIs del sector (Open Insurance) y las normativas tecnológicas aplicables (Solvencia II, GDPR).

Contexto del proyecto de automatización:
- Aseguradora mediana con sistemas core legacy de los años 2000
- Procesos más costosos actualmente: tramitación de siniestros de hogar (5 días de media), emisión manual de pólizas (2 horas por póliza) y atención de reclamaciones (72 horas de primera respuesta)
- Volumen: 50.000 pólizas activas, 8.000 siniestros al año, 200 nuevas pólizas semanales
- Objetivo: automatizar al menos el 60% de siniestros simples sin intervención humana
- Tecnología disponible: capacidad de desarrollar APIs REST, base de datos Oracle, posibilidad de integrar servicios cloud

Desarrolla el sistema de automatización completo:

1. Arquitectura del sistema de automatización de siniestros: Diseña la arquitectura técnica para automatizar la tramitación de siniestros de hogar simples (daños por agua, cristales, robo sin violencia). Incluye: diagrama de flujo del proceso automatizado, componentes tecnológicos necesarios (OCR, NLP, reglas de negocio, integración con peritos), criterios de decisión para derivar al tramitador humano vs. resolución automática, stack tecnológico recomendado con justificación y estimación de coste de implementación vs. ahorro operativo.

2. Motor de suscripción inteligente: Diseña el sistema de suscripción automática para seguros de hogar y automóvil. Incluye: modelo de datos para la captura de información del riesgo, algoritmo de scoring de riesgo con variables predictivas, reglas de aceptación automática, derivación a suscriptor humano y rechazo automático, integración con fuentes de datos externas (catastro, DGT, historial de siniestros de UNESPA) y flujo de cotización y emisión en tiempo real.

3. Procesamiento de documentos con IA: Describe la implementación del sistema OCR e IA para procesar automáticamente los documentos recibidos en siniestros: partes de accidente, facturas de reparación, informes médicos, fotos de daños. Proporciona código Python de ejemplo para: extracción de datos de un parte de siniestro en PDF, clasificación automática del tipo de siniestro, validación de coherencia entre el siniestro declarado y la cobertura de la póliza y generación automática del expediente digitalizado.

4. Chatbot de notificación y seguimiento de siniestros: Diseña e implementa el chatbot conversacional que permite a los asegurados notificar un siniestro y hacer seguimiento del expediente. Incluye: flujo de conversación para los 5 tipos de siniestro más frecuentes, integración con el sistema core para consultar el estado del expediente, sistema de notificaciones proactivas al asegurado en cada cambio de estado y escalado a agente humano cuando el chatbot no puede resolver. Proporciona el diseño de los diálogos tipo.

5. Detección de fraude: Diseña el sistema de detección de fraude para el proceso de tramitación. Incluye: señales de alerta más predictivas en siniestros de hogar y automóvil, modelo de machine learning para scoring de fraude (features, algoritmo recomendado, threshold de alerta), proceso de investigación cuando se detecta alerta y documentación del sistema para cumplir con la normativa de no discriminación algorítmica.

6. Integración con el ecosistema Open Insurance: Describe cómo preparar la arquitectura para el modelo Open Insurance (APIs abiertas del sector seguros). Incluye: qué APIs exponer y consumir, cómo gestionar la identidad y consentimiento del asegurado para compartir datos, oportunidades de negocio que abre el Open Insurance para esta aseguradora y roadmap de implementación en 18 meses.

7. Métricas y gobierno del sistema: Define el sistema de medición y control del sistema automatizado. Incluye: KPIs de eficiencia operativa (tiempo de tramitación, tasa de automatización, satisfacción del cliente), métricas de calidad de las decisiones automáticas, sistema de auditoría de las decisiones de IA para cumplimiento regulatorio y proceso de mejora continua del modelo.

Proporciona código funcional, diagramas en Mermaid y referencias a estándares del sector (ACORD, Open Insurance). Todo debe ser implementable en el contexto tecnológico descrito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Digitalización y automatización de la operación en compañías de seguros',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de usuario para apps de seguros con IA',
                'description'      => 'Crea interfaces y experiencias digitales para aplicaciones de seguros que aumentan la satisfacción del asegurado y mejoran la conversión.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI senior especializado en aplicaciones de servicios financieros y seguros. Tu experiencia incluye el diseño de apps para aseguradoras donde el mayor reto es convertir un producto percibido como obligación en una experiencia digital que el usuario aprecia y usa activamente. Conoces la psicología del usuario en el sector seguros: alto estrés en el momento del siniestro, baja implicación en momentos de calma y desconfianza latente hacia las aseguradoras.

Proyecto a diseñar:
- App móvil de nueva generación para una aseguradora mediana española
- Funcionalidades core: gestión de pólizas, notificación y seguimiento de siniestros, contacto con el agente, contratación de nuevas pólizas y asistencia en viaje
- Target: asegurados entre 25 y 60 años con smartphone; nivel digital medio-alto
- Diferencial de la app: acompañamiento activo en el momento del siniestro (el momento más crítico de la relación con el asegurado)
- Plataformas: iOS y Android (diseño con React Native)

Desarrolla el diseño UX/UI completo:

1. Investigación de usuario y arquetipos: Define los 3 perfiles de usuario de la app. Para cada uno: características demográficas y conductuales, nivel de digitalización, frecuencia de uso esperada de la app, tareas principales que realizará y frustraciones más comunes con las apps de seguros actuales. Diseña también el mapa de empatía para el momento de mayor tensión: el asegurado que acaba de tener un accidente de tráfico.

2. Arquitectura de información: Diseña la estructura de navegación completa de la app. Proporciona el mapa del sitio con todas las secciones y subsecciones, la jerarquía de contenidos en la pantalla de inicio según la frecuencia de uso y el momento del ciclo de vida, el sistema de nomenclatura de las secciones en lenguaje ciudadano (no jerga aseguradora) y la lógica de navegación entre secciones (bottom navigation, cajón lateral, tabs).

3. Flujo crítico del siniestro: El flujo de notificación de siniestro es el más importante de la app. Diseña el flujo completo paso a paso para un siniestro de automóvil. Para cada pantalla describe: propósito, información que se solicita al usuario, componentes de UI a usar, microinteracciones que reducen la fricción (escaneo de documentos, geolocalización automática, fotos guiadas), mensajes de estado tranquilizadores y siguiente paso. El flujo debe poder completarse en menos de 5 minutos.

4. Sistema de diseño: Define el sistema de diseño específico para esta app aseguradora. Incluye: paleta de colores con justificación psicológica (transmitir confianza, no miedo), escala tipográfica para iOS y Android, sistema de iconografía para los conceptos del sector seguros (póliza, siniestro, cobertura, prima, franquicia), componentes de UI reutilizables (cards de póliza, progress indicators de siniestro, formularios de alta) y guía de tono de voz para los microcopy de la app.

5. Onboarding y primera experiencia: Diseña el flujo de onboarding para un nuevo usuario que descarga la app. El objetivo es que en menos de 3 minutos el usuario vea el valor de la app y tenga configuradas sus pólizas principales. Describe cada pantalla del onboarding: mensaje, ilustración recomendada, acción solicitada y por qué esta secuencia genera confianza y no abandono.

6. Accesibilidad y casos extremos: En el momento del siniestro, el usuario puede estar en shock, con poca batería, sin cobertura intermitente o ser mayor con poca habilidad digital. Diseña las soluciones de accesibilidad y resiliencia: modo de bajo ancho de banda, guardado automático de progreso en formularios, accesibilidad para personas mayores (tamaño mínimo de tipografía, contraste, botones grandes), modo de pantalla reducida y alternativa de llamada directa desde cualquier punto del siniestro.

7. Métricas de diseño y testing: Define el plan de validación del diseño. Incluye: las 5 preguntas de investigación que guiarán el test de usabilidad, el protocolo de prueba con usuarios reales para el flujo del siniestro, métricas de éxito del diseño (task completion rate, time on task, error rate, SUS score) y criterios de aceptación para considerar el diseño listo para desarrollo.

Describe todo en detalle suficiente para que un desarrollador pueda implementarlo. Incluye wireframes en texto (ASCII o descripción estructurada) para las pantallas más críticas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de app de seguros centrada en el momento crítico del siniestro',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de venta consultiva de seguros con IA como asistente',
                'description'      => 'Mejora tu rendimiento como agente o corredor de seguros usando IA para preparar visitas, personalizar propuestas y cerrar más pólizas.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial de seguros con 20 años de experiencia formando a agentes y corredores. Tu especialidad es la venta consultiva de seguros: identificar las necesidades reales del cliente, construir confianza en un sector de desconfianza histórica y cerrar operaciones de alto valor (seguros de vida, seguros de empresa, planes de pensiones). Conoces en profundidad la IDD (directiva de distribución de seguros) y los requisitos de asesoramiento documentado.

Mi situación como agente de seguros:
- Agente mediador con 4 años de experiencia, cartera de 350 clientes activos
- Productos que vendo: automóvil, hogar, vida riesgo, salud y seguros de empresa para pymes
- Objetivo comercial: incrementar la ratio de pólizas por cliente de 1,8 a 2,5 en 12 meses
- Reto principal: la venta cruzada; mis clientes compran el primer seguro pero no amplían la cobertura
- Fortaleza: alta tasa de renovación (92%), buena relación con mi cartera
- Debilidad: pocas visitas nuevas, dependencia de referidos

Desarrolla el sistema de ventas consultivas:

1. Análisis de la cartera para oportunidades de crossselling: Diseña el método para identificar oportunidades de venta cruzada en mi cartera actual. Incluye: matriz de seguros que debería tener cada perfil de cliente según su ciclo de vida (soltero, pareja sin hijos, familia con hijos, empresario, jubilado), sistema de priorización de clientes para contactar primero según potencial, criterios para identificar el momento ideal para proponer cada producto adicional y cómo usar los datos de renovación, siniestros y cambios vitales como disparadores comerciales.

2. Metodología de la visita consultiva: Describe paso a paso la metodología de la visita de revisión anual que convierte a clientes de póliza única en clientes multiproducto. Incluye: cómo plantear la cita de revisión (que no suene a que vas a venderles algo), la agenda tipo de la visita de 45 minutos, las preguntas de diagnóstico de necesidades para descubrir huecos de cobertura, cómo presentar la recomendación sin que parezca venta agresiva y el cierre consultivo que da al cliente el control de la decisión.

3. Scripts de venta para los 5 productos principales: Proporciona el guión completo de presentación para cada producto: (a) seguro de vida riesgo para padre de familia, (b) seguro de salud para empresario autónomo, (c) plan de pensiones para persona de 45 años, (d) seguro multirriesgo de negocio para pyme del comercio, (e) seguro de responsabilidad civil profesional para freelance. Cada guión debe incluir la apertura, las preguntas de exploración, la presentación de la solución vinculada a las necesidades descubiertas, el manejo de objeciones más frecuentes y el cierre.

4. Manejo de las objeciones más difíciles: Desarrolla respuestas completas para las 10 objeciones más comunes en la venta de seguros: (a) "ya tengo seguro en el banco", (b) "es muy caro", (c) "no lo necesito, soy joven y sano", (d) "lo voy a pensar", (e) "prefiero hacerlo todo online", (f) "mi empresa ya tiene seguro colectivo de salud", (g) "el seguro de vida es para cuando te mueres, no lo necesito", (h) "tengo ya una hipoteca con seguro de vida del banco", (i) "los seguros nunca pagan cuando los necesitas", (j) "prefiero el plan de pensiones del banco".

5. Estrategia de prospección de nuevos clientes: Diseña el plan para generar nuevos clientes más allá de los referidos. Incluye: colaboración con inmobiliarias y gestorías (modelo de acuerdo win-win), estrategia de LinkedIn para el mercado de pymes y autónomos, plan de charlas informativas en asociaciones empresariales y colegios profesionales, programa de referidos estructurado para convertir clientes satisfechos en prescriptores y cómo usar las redes sociales sin vulnerar la normativa de comunicación de seguros.

6. Cumplimiento IDD en el asesoramiento: La normativa de distribución de seguros exige documentar el asesoramiento. Diseña el proceso de cumplimiento que no ralentice la venta: cuestionario de conveniencia e idoneidad ágil, documento de análisis de necesidades simplificado, proceso de firma digital del cliente y archivo de la documentación de asesoramiento. Todo cumpliendo IDD sin que la burocracia arruine la experiencia del cliente.

7. Sistema de seguimiento de oportunidades: Diseña el CRM básico para un agente individual que gestiona 350 clientes y 50 oportunidades activas. Define: la información clave a registrar de cada oportunidad, el sistema de seguimiento de visitas y llamadas pendientes, las alertas automáticas por fechas de renovación y eventos vitales del cliente y el informe mensual de actividad comercial para autoevaluación.

Proporciona guiones listos para usar, plantillas de documentos y ejemplos reales del sector seguros en España. El tono debe ser cercano, consultivo y orientado a construir relaciones de largo plazo, no a la venta transaccional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Incremento de la productividad comercial de agentes y corredores de seguros',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de productos de seguros innovadores con análisis de datos e IA',
                'description'      => 'Usa IA para identificar oportunidades de nuevos productos aseguradores, diseñar coberturas diferenciales y validar su viabilidad técnica y comercial.',
                'prompt_content'   => <<<'EOT'
Eres un director de innovación y desarrollo de producto en el sector asegurador con experiencia en insurtech, análisis actuarial y diseño de nuevas coberturas. Tu misión es transformar necesidades no atendidas del mercado en productos de seguros viables, rentables y diferenciadores.

Contexto de la aseguradora y el reto de innovación:
- Aseguradora generalista con portfolio tradicional (auto, hogar, vida, salud)
- Presión competitiva de insurtechs con modelos de negocio disruptivos (seguros por uso, microseguros, parametric insurance)
- Tendencias identificadas por la dirección: economía gig (autónomos y freelancers), movilidad compartida, teletrabajo permanente y cambio climático
- Objetivo: lanzar 2 nuevos productos en 18 meses que capture segmentos no atendidos
- Recursos disponibles: equipo actuarial de 3 personas, datos internos de 200.000 pólizas y acceso a datos externos del sector

Desarrolla el proceso completo de innovación de producto:

1. Identificación de oportunidades: Analiza las tendencias socioeconómicas y tecnológicas para identificar necesidades aseguradoras no cubiertas. Para cada tendencia (economía gig, teletrabajo, movilidad electrónica, climatización de hogares, salud digital) describe: el segmento de población afectado y su tamaño estimado en España, la necesidad de cobertura específica no atendida por los productos actuales, el grado de disposición a pagar por esa cobertura y los competidores que ya están actuando en ese espacio. Prioriza las 3 oportunidades más atractivas.

2. Diseño de producto para trabajadores de la economía gig: El segmento de freelancers y trabajadores de plataformas (Glovo, Uber, consultores, diseñadores) tiene necesidades específicas no cubiertas. Diseña un producto de seguro para este colectivo que incluya: cobertura de baja por enfermedad y accidente adaptada a ingresos variables, seguro de responsabilidad civil profesional modular según actividad, cobertura de equipo de trabajo (portátil, cámara, herramientas), protección ante impago de clientes e incapacidad de trabajar. Define las coberturas, exclusiones, suma asegurada tipo y modelo de tarificación adaptado a ingresos variables.

3. Seguro paramétrico por eventos climáticos: Diseña un seguro paramétrico de hogar ante eventos climáticos extremos (granizo, inundación, sequía para jardín/huerta). Explica: qué es el seguro paramétrico y por qué es disruptivo, los parámetros objetivos que activarían el pago (mm de lluvia, temperatura, velocidad del viento), fuentes de datos meteorológicos para la liquidación automática, modelo de pricing paramétrico simplificado, ventajas para el asegurado y retos regulatorios en España para este tipo de producto.

4. Análisis de viabilidad técnica y actuarial: Diseña el proceso de análisis de viabilidad para un nuevo producto antes de su lanzamiento. Incluye: metodología de estimación de la siniestralidad esperada cuando no hay histórico propio, análisis de sensibilidad del resultado técnico ante diferentes escenarios de siniestralidad, requerimientos de capital según Solvencia II para el nuevo riesgo, análisis del punto de equilibrio y rentabilidad esperada y mapa de riesgos del nuevo producto (riesgo de selección adversa, riesgo de pricing incorrecto, riesgo regulatorio).

5. Validación con clientes antes del lanzamiento: Diseña el proceso de investigación de mercado y validación con usuarios reales. Incluye: diseño del estudio de willingness to pay (cuánto pagarían realmente), metodología del concepto test para evaluar la aceptación del producto, diseño del piloto con un grupo reducido antes del lanzamiento masivo y cómo interpretar los resultados para decidir si continuar, pivotar o abandonar el concepto.

6. Go-to-market strategy: Diseña la estrategia de lanzamiento del nuevo producto. Para el seguro de trabajadores gig incluye: canales de distribución más efectivos para llegar a freelancers (plataformas digitales, colegios profesionales, asociaciones de autónomos), estrategia de pricing de lanzamiento (freemium básico + premium, mensual vs. anual), partners estratégicos para la distribución (plataformas de facturación, bancos neodigitales, comunidades de freelancers) y plan de contenidos para educar al mercado sobre la necesidad de cobertura.

7. Métricas de éxito del nuevo producto: Define los indicadores para evaluar el éxito del producto en los primeros 12 meses. Incluye: KPIs comerciales (pólizas emitidas, prima media, tasa de conversión), KPIs técnicos (ratio de siniestralidad, ratio combinado, ratio de persistencia) y KPIs de satisfacción del cliente (NPS, tasa de renovación, reclamaciones sobre total de pólizas).

Proporciona marcos de análisis estructurados, plantillas de estudio de viabilidad y referencias a productos similares que ya existen en mercados más maduros (UK, Países Bajos, EEUU) que puedan servir de benchmarking.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Innovación de productos aseguradores para segmentos emergentes y no atendidos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en el sector asegurador con IA',
                'description'      => 'Atrae, desarrolla y retiene a los mejores profesionales del sector seguros en un entorno de transformación digital y competencia por el talento tecnológico.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos especializado en el sector asegurador con experiencia en la gestión del talento en empresas en transformación digital. Conoces las particularidades del mercado laboral del sector seguros: envejecimiento de la plantilla, escasez de perfiles digitales y la competencia de las insurtechs y bancos por los mismos perfiles.

Situación de la empresa:
- Aseguradora con 500 empleados en España
- Estructura: red comercial (200 agentes), área técnica y actuarial (80 personas), tecnología (60 personas), operaciones y siniestros (160 personas)
- Problema crítico: el 35% de la plantilla tiene más de 55 años, con jubilaciones masivas previstas en los próximos 5 años
- Dificultad para captar: data scientists, desarrolladores Python, especialistas en ciberseguridad y UX designers
- Tasa de rotación de perfiles digitales: 28% anual (el doble de la media del sector)
- Cultura: tradicional, jerarquizada, con procesos rígidos que chocan con las expectativas de los perfiles jóvenes y digitales

Desarrolla la estrategia completa de gestión del talento:

1. Plan de sucesión ante la oleada de jubilaciones: Diseña el plan de sucesión para los roles críticos que quedarán vacantes en los próximos 5 años. Incluye: metodología para identificar los roles críticos cuya vacante comprometería la operación, proceso de identificación de sucesores internos con potencial, programa de mentoring inverso (jóvenes digitales formando a mayores y viceversa), plan de transferencia de conocimiento tácito antes de las jubilaciones y criterios para decidir cuándo cubrir externamente vs. promoción interna.

2. Employer branding para atraer talento digital: Las insurtechs y startups de finanzas atraen a los mismos perfiles que esta aseguradora necesita. Diseña la estrategia de employer branding. Incluye: propuesta de valor al empleado diferencial para perfiles tecnológicos en una aseguradora tradicional, presencia en LinkedIn y plataformas de empleo tecnológico (GitHub, Stack Overflow Jobs), programa de embajadores internos entre los empleados más jóvenes y digitales, participación en eventos de tecnología y seguros y cómo comunicar la transformación digital en curso para que resulte atractiva al talento.

3. Proceso de selección para perfiles digitales: Diseña el proceso de selección específico para data scientists y desarrolladores Python. Incluye: descripción del puesto en lenguaje que conecte con el perfil técnico (no lenguaje corporativo de seguros), fuentes de búsqueda más efectivas para este perfil, prueba técnica de selección adaptada al contexto asegurador (proporciona un enunciado de prueba técnica concreto), guión de la entrevista técnica y de cultura y proceso de decisión y oferta ágil (en menos de 2 semanas desde el primer contacto).

4. Programa de desarrollo y retención para perfiles digitales: Diseña el programa para retener a los perfiles tecnológicos los primeros 3 años, que es cuando mayor es el riesgo de fuga. Incluye: plan de carrera técnica con al menos 3 niveles claramente definidos, presupuesto de formación individual y libertad de elección de cursos, política de trabajo en remoto y horario flexible, participación en proyectos de innovación de la empresa como parte del trabajo regular y acceso a tecnología y herramientas de última generación.

5. Gestión del cambio cultural: La transformación digital requiere un cambio cultural profundo. Diseña el programa de change management para los 500 empleados. Incluye: diagnóstico del estado cultural actual, los comportamientos y creencias que necesitan cambiar (jerarquía vs. autonomía, proceso vs. agilidad, experiencia vs. experimentación), plan de comunicación interna del proceso de transformación, formación en metodologías ágiles y mentalidad digital para managers y protocolo de gestión de la resistencia al cambio.

6. Reskilling de la red comercial: Los 200 agentes de la red comercial necesitan adaptar sus habilidades al entorno digital sin perder su ventaja relacional. Diseña el programa de reskilling. Incluye: diagnóstico de las competencias digitales actuales de la red, itinerario de formación digital (uso del CRM, herramientas de videollamada, firma digital, redes sociales profesionales, cotizadores online), modelo de acompañamiento por parte de los más digitales de la red y cómo medir la adopción y el impacto en los resultados comerciales.

7. Métricas de capital humano para el sector seguros: Define el cuadro de mando de RRHH específico para una aseguradora en transformación. Incluye los 15 indicadores más relevantes con sus fórmulas, benchmarks del sector seguros y frecuencia de revisión. Presta especial atención a indicadores predictivos de rotación temprana y a métricas de adopción digital de la plantilla.

Todo debe ser práctico y adaptado a la realidad del sector seguros español, con referencias al convenio colectivo de seguros y a las recomendaciones de UNESPA en materia de gestión de talento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Retención de talento digital y gestión del relevo generacional en aseguradoras',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelado actuarial y análisis de riesgos con IA en el sector seguros',
                'description'      => 'Aplica inteligencia artificial y modelos predictivos para mejorar la tarificación, el análisis de riesgos y la gestión del resultado técnico en seguros.',
                'prompt_content'   => <<<'EOT'
Eres un actuario senior con especialización en machine learning aplicado al sector asegurador. Tu experiencia abarca modelos de tarificación predictiva, análisis de siniestralidad, reservas técnicas bajo Solvencia II y detección de fraude. Tienes conocimiento profundo de los modelos estadísticos clásicos (GLM, credibilidad) y de las técnicas modernas de ML aplicadas al negocio asegurador.

Contexto del proyecto actuarial:
- Aseguradora que quiere modernizar su modelo de tarificación del seguro de automóvil
- Modelo actual: GLM clásico con 8 variables tarifarias (edad, sexo, tipo de vehículo, potencia, zona, uso, antigüedad del carné, historial de siniestros)
- Problema: pérdida de negocio en segmentos de buen riesgo (mejor precio en competidores) y pérdidas técnicas en segmentos de mal riesgo no identificados
- Datos disponibles: 500.000 pólizas con 3 años de histórico, datos telemáticos de 50.000 vehículos equipados, datos de siniestros con descripción textual
- Objetivo: reducir el ratio combinado en 3 puntos en 24 meses mediante mejor tarificación

Desarrolla el modelo actuarial avanzado:

1. Diagnóstico del modelo actual: Diseña el proceso de diagnóstico del modelo de tarificación actual para identificar dónde está perdiendo precisión. Incluye: análisis de la distribución del ratio de siniestralidad por celda tarifaria, identificación de celdas con selección adversa (los buenos riesgos se van, los malos se quedan), análisis de la estabilidad temporal del modelo, test de backtesting del modelo en los últimos 3 años y benchmarking de las variables utilizadas frente a las mejores prácticas del mercado.

2. Modelo de tarificación con machine learning: Diseña el modelo de ML para mejorar la tarificación. Incluye: proceso de feature engineering para extraer nuevas variables predictivas de los datos disponibles (telemetría, texto de siniestros, datos externos), comparativa de algoritmos (Gradient Boosting vs. Random Forest vs. Redes Neuronales vs. GLM) con criterios de selección para el contexto asegurador, técnica de validación cruzada adecuada para datos temporales de seguros, métricas de evaluación específicas del negocio asegurador (no solo AUC) y cómo convertir la predicción del modelo en una tarifa comercialmente aplicable.

3. Incorporación de datos telemáticos: Los datos telemáticos (UBI - Usage Based Insurance) son un diferencial competitivo. Diseña el modelo de incorporación de la telemetría a la tarificación. Incluye: las variables telemáticas más predictivas de la siniestralidad (km recorridos, conducción nocturna, frenadas bruscas, velocidad media, mañana vs. noche), modelo de scoring de conducción, proceso de integración del score telemático en la tarifa base y cómo diseñar el producto UBI (descuento vs. prima base según conducción) que sea comercialmente atractivo sin selección adversa.

4. Modelo de reservas con ML: Diseña la mejora del proceso de cálculo de reservas de siniestros usando ML. Incluye: limitaciones del método chain-ladder clásico y por qué ML puede mejorar la estimación, modelo de predicción del coste final de siniestros individuales, incorporación de características textuales de los expedientes para mejorar la estimación, calibración del modelo para cumplir con los requerimientos de prudencia de Solvencia II y proceso de validación back-testing de las reservas.

5. Código Python para el análisis actuarial: Proporciona código funcional en Python para los siguientes análisis: (a) análisis exploratorio de una cartera de automóvil con visualizaciones de la distribución de siniestralidad, (b) entrenamiento y validación de un modelo XGBoost de tarificación de severidad, (c) curva de lift y análisis de ganancia para evaluar el poder discriminante del modelo, (d) cálculo del ratio combinado proyectado con el nuevo modelo frente al actual.

6. Cumplimiento regulatorio del modelo: El uso de ML en tarificación está sujeto a restricciones regulatorias crecientes. Diseña el marco de gobernanza del modelo que asegure el cumplimiento. Incluye: documentación requerida del modelo (Model Risk Management), proceso de validación independiente, análisis de equidad (fairness) para garantizar que el modelo no discrimina por variables protegidas, explicabilidad del modelo para justificar tarifas ante el asegurado o el regulador y proceso de monitorización del drift del modelo en producción.

7. Reporting de resultado técnico: Diseña el informe mensual de resultado técnico para la dirección. Incluye: estructura del informe de siniestralidad por ramo y segmento, análisis de las desviaciones vs. tarifa esperada, alerta temprana de deterioro del resultado técnico y recomendaciones de acción (actualización de tarifa, cierre de segmentos, revisión de suscripción).

Proporciona código Python comentado, referencias a literatura actuarial relevante (CAS, IAA) y ejemplos numéricos aplicados al seguro de automóvil en España. Todo debe ser técnicamente riguroso y directamente aplicable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Mejora del resultado técnico mediante tarificación predictiva con machine learning',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal de reclamaciones y compliance en seguros con IA',
                'description'      => 'Gestiona reclamaciones de asegurados, litiga con eficiencia y asegura el cumplimiento normativo del sector seguros usando IA como asistente legal.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de seguros con amplia experiencia en la defensa de compañías aseguradoras, el asesoramiento a corredores y la representación de asegurados en reclamaciones. Conoces en profundidad la Ley de Contrato de Seguro (LCS), la normativa de ordenación y supervisión (LOSSEAR), la normativa europea (Solvencia II, IDD) y la jurisprudencia del Tribunal Supremo en materia de seguros.

Contexto de la consulta legal:
- Aseguradora mediana que gestiona 8.000 siniestros al año
- De estos, aproximadamente 400 derivan en reclamación formal del asegurado (5%)
- De las reclamaciones formales, 80 acaban en procedimiento judicial (1% del total)
- Equipo legal: 2 abogados internos y red de abogados externos en 10 provincias
- Problemas actuales: falta de criterios uniformes para la gestión de reclamaciones, exceso de asuntos en el Servicio de Atención al Cliente (SAC) y elevado coste de los procedimientos judiciales

Desarrolla el sistema legal completo de gestión de reclamaciones y compliance:

1. Marco legal de la reclamación en seguros: Explica el proceso legal completo de reclamación de un asegurado en España. Detalla: vías extrajudiciales disponibles (SAC interno, mediador de seguros, Servicio de Reclamaciones de la DGSFP), plazos y requisitos de cada vía, cuándo es obligatorio haber agotado la vía administrativa antes de acudir a los tribunales, cómo la ley 7/2017 de resolución alternativa de litigios ha cambiado el panorama y el papel del Defensor del Asegurado.

2. Protocolo del Servicio de Atención al Cliente (SAC): Diseña el protocolo completo de gestión de reclamaciones en el SAC cumpliendo la normativa. Incluye: proceso de recepción y registro de la reclamación, plazos máximos de resolución por tipo (1 mes general, plazos especiales), estructura del informe de resolución al reclamante, criterios para aceptar vs. rechazar la reclamación, proceso de escalado a dirección cuando la reclamación supera determinados umbrales y documentación que debe conservarse para el informe anual a la DGSFP.

3. Gestión de los tipos de reclamación más frecuentes: Para cada uno de los 5 tipos de siniestro más reclamados, describe la estrategia legal de gestión: (a) denegación de cobertura por supuesta exclusión en hogar, (b) discrepancia en la valoración de daños en automóvil, (c) impago de indemnización de vida por declaración inexacta de salud, (d) retraso en la tramitación de siniestro de salud, (e) denegación de cobertura en seguro de decesos por causa no natural. Para cada caso: fundamento legal de la posición de la aseguradora, argumentos del asegurado, jurisprudencia relevante y estrategia de resolución que minimice el riesgo judicial.

4. Estrategia de litigación: Para los 80 asuntos que llegan a procedimiento judicial, diseña la estrategia de litigación eficiente. Incluye: criterios para decidir entre allanamiento, transacción o litigio hasta sentencia, proceso de instrucción del abogado externo con información mínima necesaria, sistema de seguimiento de procedimientos activos con alertas de plazos procesales, protocolo de autorización de acuerdos extrajudiciales según cuantía y análisis del coste total del litigio (honorarios, costas, capital reclamado) para valorar acuerdos.

5. Compliance integral de la normativa aseguradora: Diseña el mapa de compliance legal de una aseguradora española. Para cada área normativa especifica las obligaciones principales, el responsable interno de cumplimiento y las consecuencias del incumplimiento: (a) Solvencia II (capital, gobernanza, reporting), (b) IDD y distribución de seguros, (c) LOSSEAR (autorización, supervisión, sanciones), (d) GDPR en el tratamiento de datos de asegurados y siniestros, (e) Ley de blanqueo de capitales (PBC/AML en seguros de vida), (f) Ley de resolución de litigios de consumo (reclamaciones).

6. Gestión de los conflictos de cobertura más litigiosos: Describe cómo gestionar los supuestos que más jurisprudencia generan: (a) la doctrina del enriquecimiento injusto en el cobro del seguro, (b) la nulidad de cláusulas limitativas no destacadas, (c) los intereses moratorios del artículo 20 LCS, (d) el suicidio en el seguro de vida y los plazos de exclusión, (e) la agravación del riesgo y su impacto en la cobertura.

7. Tecnología legal en el sector seguros: Describe cómo implementar legal tech para mejorar la eficiencia del departamento jurídico. Incluye: uso de IA para revisar contratos de seguro y detectar cláusulas potencialmente nulas, automatización del análisis de jurisprudencia para expedientes similares, sistema de predicción de resultado judicial para valorar transacciones y gestión documental del expediente judicial digital.

Incluye referencias a artículos concretos de la LCS, jurisprudencia del Tribunal Supremo y circulares de la DGSFP. Todo debe ser aplicable directamente al departamento legal de una aseguradora española.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Reducción de litigiosidad y cumplimiento normativo en el sector asegurador',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en siniestros de seguros con IA conversacional',
                'description'      => 'Diseña y gestiona la experiencia de atención al cliente durante la tramitación de siniestros usando IA para aumentar la satisfacción y reducir los tiempos de resolución.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del cliente (CX) especializado en el sector asegurador con experiencia en el diseño de procesos de atención para momentos de alta tensión emocional: el siniestro. Sabes que el momento del siniestro es el que define la relación del asegurado con su aseguradora para los siguientes años y que una mala experiencia en este momento es la principal causa de no renovación.

Contexto de la empresa aseguradora:
- Centro de atención al cliente con 80 agentes gestionando 600 llamadas diarias
- Tipos de contacto: 40% notificación de nuevo siniestro, 30% seguimiento de expediente activo, 20% consultas de cobertura, 10% quejas y reclamaciones
- Tiempo medio de atención: 12 minutos (objetivo: reducir a 8 sin bajar la satisfacción)
- NPS actual: 22 (objetivo: superar 45 en 12 meses)
- Mayor queja recibida: "no sé en qué estado está mi siniestro" y "nadie me avisa de nada"
- Herramientas actuales: CRM básico, sin chatbot, sin automatización de comunicaciones

Desarrolla el sistema completo de atención al cliente en siniestros:

1. Diagnóstico de la experiencia actual: Diseña el proceso de diagnóstico de la experiencia del cliente en la tramitación de siniestros. Incluye: mapa del journey del asegurado desde el siniestro hasta el cobro de la indemnización con todos los puntos de contacto, identificación de los momentos de mayor frustración y sus causas raíz, análisis de las llamadas de seguimiento (por qué llaman si no deberían necesitar hacerlo) y recomendaciones de mejora prioritarias basadas en el diagnóstico.

2. Protocolo de atención en la notificación del siniestro: El primer contacto tras el siniestro es el más crítico. Diseña el protocolo completo de atención en la llamada de notificación. Incluye: script de apertura que transmite calma y control en situaciones de estrés (accidente de tráfico, incendio en el hogar, fallecimiento), proceso de recogida de datos mínimos necesarios con validación en tiempo real contra la póliza, información clara sobre los pasos siguientes y plazos esperados, compromisos concretos que el agente puede y debe hacer al asegurado y cierre de la llamada que deja al cliente con sensación de control.

3. Sistema de comunicación proactiva durante la tramitación: Diseña el sistema de notificaciones automáticas que elimine la incertidumbre del asegurado durante la tramitación. Incluye: los hitos del proceso de siniestro que deben comunicarse automáticamente (apertura, asignación de perito, visita del perito, valoración, resolución, pago), canal de comunicación por tipo de cliente y urgencia (SMS, email, notificación push, llamada), contenido de cada comunicación (qué decir, qué no decir, qué esperar a continuación) y cómo gestionar los retrasos sin generar más frustración.

4. Chatbot de seguimiento de siniestros: Diseña el chatbot conversacional para que los asegurados consulten el estado de su siniestro sin llamar. Incluye: árbol de conversación para las 10 consultas más frecuentes sobre el estado del expediente, integración con el sistema de tramitación para mostrar información en tiempo real, manejo de situaciones donde el estado no se puede revelar (investigación de fraude, documentación pendiente del asegurado), escalado natural al agente humano cuando el chatbot no puede resolver y métricas de éxito del chatbot (tasa de resolución, tasa de escalado, satisfacción).

5. Gestión de clientes en situación de estrés extremo: Algunas situaciones requieren un protocolo especial de atención emocional: fallecimiento de familiar con seguro de vida, pérdida total del hogar por incendio, accidente con víctimas. Diseña el protocolo de atención emocional para estas situaciones. Incluye: formación en comunicación en crisis para los agentes, identificación de cuándo el cliente está en shock y necesita un trato diferente, qué promesas se pueden hacer y cuáles no en estas situaciones y cómo hacer seguimiento con estas familias más allá de la tramitación del expediente.

6. Gestión de quejas y escalado: Diseña el proceso de gestión de quejas y escalado cuando el cliente está insatisfecho con la tramitación. Incluye: cómo identificar en la llamada que el cliente está en riesgo de queja formal, protocolo de manejo de la queja en primera línea (empowerment del agente para resolver), criterios de escalado a supervisor y cuándo involucrar al SAC formal, script de gestión de clientes agresivos o amenazantes y proceso de recuperación de la confianza de un cliente cuya queja se ha resuelto.

7. Métricas de experiencia del cliente en siniestros: Define el sistema completo de medición de la experiencia. Incluye: encuesta de satisfacción tras la resolución del siniestro (diseña las 8 preguntas), análisis de sentimiento de las llamadas grabadas, NPS transaccional vs. relacional en el segmento de siniestros, métricas operativas (tiempo de primera resolución, FCR, número de contactos por siniestro) y proceso de mejora continua basado en los datos de satisfacción.

Todos los scripts deben ser empáticos, claros y adaptados a la realidad del cliente español en momentos de tensión. Incluye ejemplos de frases que funcionan y frases que destruyen la confianza del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mejora del NPS y reducción del tiempo de resolución en siniestros de seguros',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en gestión de riesgos corporativos con IA',
                'description'      => 'Potencia tu práctica de consultoría independiente en gestión de riesgos y seguros empresariales usando IA para entregar análisis de mayor valor a tus clientes.',
                'prompt_content'   => <<<'EOT'
Eres un consultor independiente especializado en gestión de riesgos corporativos (ERM) y seguros empresariales. Tu práctica asesora a empresas medianas en la identificación, valoración y transferencia de sus riesgos al mercado asegurador. Actúas como corredor de seguros independiente o como risk manager externo para empresas que no pueden permitirse un departamento propio.

Situación de tu práctica freelance:
- Consultor independiente con 8 años de experiencia como risk manager en el sector financiero
- Clientes actuales: 12 empresas medianas de diferentes sectores con facturación entre 5 y 50 millones de euros
- Servicios que ofreces: análisis de riesgos, optimización de la cartera de seguros, gestión de siniestros complejos, due diligence de seguros en operaciones M&A
- Facturación actual: 65.000 euros anuales, quieres llegar a 100.000 en 18 meses
- Mayor oportunidad no explotada: el mercado de empresas familiares entre 10 y 50 millones que no tienen risk manager propio y están sobrepagando en seguros o infraaseguradas

Desarrolla el sistema completo de consultoría de riesgos:

1. Metodología de análisis de riesgos empresariales: Diseña la metodología de análisis de riesgos que usas con cada nuevo cliente. Incluye: proceso de inventario de activos y exposiciones a riesgo (físicos, financieros, responsabilidad, personas, cibernéticos, reputacionales), metodología de valoración cualitativa y cuantitativa del riesgo (probabilidad x impacto), mapa de calor de riesgos y cómo priorizarlos y análisis de las coberturas actuales del cliente frente a sus exposiciones reales (gap analysis de seguros).

2. Diagnóstico de la cartera de seguros del cliente: Diseña el proceso de auditoría de seguros para un nuevo cliente. Incluye: listado de documentación a solicitar al cliente (pólizas, siniestros de los últimos 5 años, contratos con terceros, activos asegurados), checklist de revisión de cada póliza (coberturas, exclusiones, sumas aseguradas, franquicias, condiciones especiales), metodología para detectar infraaseguramientos (suma asegurada inferior al valor real) y sobraseguramientos (coberturas duplicadas o innecesarias) y cómo presentar los hallazgos al cliente de forma clara y accionable.

3. Optimización del programa de seguros: Diseña el proceso de optimización y renovación del programa de seguros del cliente. Incluye: cómo preparar el pliego de condiciones para el mercado asegurador, proceso de comparación de ofertas de diferentes aseguradoras (no solo por precio sino por calidad de cobertura), negociación de condiciones especiales (franquicias más bajas, coberturas adicionales, retroactividad en seguros de responsabilidad), gestión de la renovación con el cliente y seguimiento de los ahorros conseguidos para demostrar el valor de la consultoría.

4. Due diligence de seguros en operaciones M&A: Una de las líneas de mayor valor añadido es el análisis de riesgos en operaciones de compraventa de empresas. Describe el proceso completo de due diligence de seguros: qué documentación solicitar en la data room, qué buscar en cada tipo de póliza, cómo evaluar los siniestros abiertos y su impacto en la valoración, cómo identificar riesgos ocultos no cubiertos que afectan al precio de la operación y cómo estructurar el informe de due diligence para el comprador o el fondo de inversión.

5. Gestión de siniestros complejos: Cuando un cliente sufre un siniestro de gran cuantía, el consultor de riesgos tiene un papel crucial. Diseña tu protocolo de actuación en la gestión de un siniestro complejo (incendio de nave industrial, siniestro de responsabilidad civil con reclamación de tercero, ciberataque). Incluye: actuaciones inmediatas en las primeras 24 horas, cómo coordinar con la aseguradora y el perito de la aseguradora, cuándo y cómo recomendar contratar un perito independiente del asegurado, documentación a preparar para apoyar la reclamación y cómo gestionar la relación con el cliente durante el proceso.

6. Estrategia de crecimiento de la práctica freelance: Diseña el plan para crecer de 65.000 a 100.000 euros en 18 meses. Incluye: servicios de mayor valor y margen que deberías ofrecer (y cuáles abandonar), los segmentos de cliente más rentables para un risk manager freelance, estrategia de marketing de contenidos para posicionarte como experto (artículos técnicos, participación en foros empresariales, LinkedIn), sistema de referidos entre clientes actuales, alianzas con corredores de seguros que no tienen capacidad de análisis técnico y cómo fijar y comunicar tus honorarios (por proyecto, retainer mensual, éxito en ahorro conseguido).

7. Herramientas digitales para el risk manager freelance: Diseña tu stack de herramientas para ser más eficiente y entregar más valor. Incluye: software de gestión de riesgos que puedes implementar con clientes sin grandes presupuestos, herramientas de análisis y visualización de datos de siniestralidad, plataformas de comparación de seguros en el mercado español, herramientas de colaboración remota con clientes y sistema de documentación y gestión de expedientes para cumplir con la normativa como mediador de seguros.

Proporciona plantillas de informes, checklists de auditoría y marcos de análisis de riesgos reutilizables con diferentes clientes. El tono debe ser el de un asesor de confianza que habla claro, no el de un vendedor de seguros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Crecimiento de la práctica freelance en gestión de riesgos y seguros empresariales',
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
