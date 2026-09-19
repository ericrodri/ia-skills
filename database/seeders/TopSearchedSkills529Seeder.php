<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills529Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Roadmap de digitalización con IA para marketing tradicional',
                'description'       => 'Diseña un plan de transformación digital de tu departamento de marketing usando IA como palanca de cambio.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor experto en transformación digital y marketing con más de 15 años de experiencia ayudando a empresas tradicionales a modernizarse con inteligencia artificial.

Voy a darte información sobre mi empresa y necesito que me ayudes a construir un roadmap de digitalización del área de marketing.

**Contexto de mi empresa:**
- Sector: [indica el sector, ej: distribución, manufactura, retail físico]
- Tamaño: [número de empleados y facturación aproximada]
- Estado actual del marketing: [describe brevemente qué canales usas, qué herramientas tienes, cuántas personas hay en el equipo]
- Principales retos: [ej: dependencia de ferias, fuerza comercial sin CRM, sin presencia digital]
- Presupuesto estimado para transformación: [rango aproximado]

**Objetivo del ejercicio:**
Quiero que diseñes para mí un roadmap de transformación digital del área de marketing en tres fases (quick wins a 3 meses, consolidación a 12 meses, madurez a 24 meses), con acciones concretas, herramientas recomendadas con IA integrada y métricas de éxito por cada fase.

**Para cada fase necesito:**

1. **Diagnóstico de punto de partida:** Qué debe estar resuelto antes de pasar a esta fase.
2. **Iniciativas concretas:** Al menos 3 iniciativas por fase, con descripción de en qué consisten, qué problema resuelven y qué IA o automatización aplica.
3. **Herramientas recomendadas:** Menciona herramientas específicas con IA (CRM con IA, plataformas de contenido, analítica predictiva, automatización de campañas) adecuadas al tamaño de mi empresa.
4. **Gestión del cambio:** Qué acciones de adopción interna son necesarias para que el equipo abrace cada iniciativa sin resistencia.
5. **KPIs de seguimiento:** Métricas cuantitativas para saber si la fase va bien.

**Consideraciones adicionales:**
- Dame recomendaciones para gestionar la resistencia al cambio del equipo de marketing tradicional que lleva años haciendo las cosas de una manera.
- Incluye cómo priorizar entre modernizar sistemas legacy (ej: base de datos de clientes en Excel, CRM desactualizado) versus lanzar nuevas capacidades digitales.
- Sugiere cómo comunicar internamente el valor de la transformación para conseguir presupuesto y apoyo de dirección.
- Propón indicadores de cultura de innovación: cómo saber si el equipo realmente está adoptando la mentalidad digital y no solo usando las herramientas superficialmente.

Al final del roadmap, incluye una sección de "riesgos y mitigaciones" con los 5 principales riesgos de que la transformación fracase y cómo evitarlos.

Formatea la respuesta con encabezados claros, tablas cuando sea útil y un resumen ejecutivo de una página al principio que pueda presentar a dirección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Transformación digital del área de marketing en empresas tradicionales',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Modernización de sistemas legacy con IA para desarrolladores',
                'description'       => 'Planifica la migración de sistemas legados usando IA para análisis de código, refactorización y generación de tests.',
                'prompt_content'    => <<<'EOT'
Actúa como arquitecto de software senior especializado en modernización de sistemas legacy y transformación digital tecnológica en empresas con deuda técnica acumulada.

Necesito tu ayuda para planificar la modernización de un sistema heredado en mi organización.

**Descripción del sistema actual:**
- Tecnología actual: [ej: COBOL, VB6, PHP 5, Java EE legacy, monolito sin tests]
- Antigüedad del sistema: [años]
- Tamaño aproximado: [líneas de código, número de módulos, integraciones con otros sistemas]
- Equipo actual: [cuántos desarrolladores, niveles de experiencia, conocimiento del sistema]
- Criticidad del negocio: [qué procesos de negocio dependen de este sistema]
- Problemas actuales: [rendimiento, seguridad, escalabilidad, dificultad de mantenimiento]

**Lo que necesito que planifiques:**

1. **Estrategia de análisis con IA:**
   - Cómo usar herramientas de IA para analizar el código existente y generar documentación automática del sistema (diagramas de flujo, dependencias, casos de uso inferidos).
   - Qué herramientas de IA recomendarías para el análisis estático del código legacy y detección de patrones problemáticos.

2. **Estrategia de modernización:**
   - Evalúa las opciones: reescritura completa, refactorización incremental, strangler fig pattern, encapsulamiento con APIs. Dame una recomendación justificada para mi caso.
   - Cómo usar IA generativa para acelerar la refactorización: generación de código equivalente en lenguaje moderno, generación automática de tests unitarios para el código legacy, sugerencias de arquitectura.

3. **Plan de migración por fases:**
   - Divide la migración en fases de bajo riesgo con criterios de entrada y salida.
   - Cómo garantizar la paridad funcional entre el sistema viejo y el nuevo en cada fase.
   - Estrategia de rollback si algo falla.

4. **Gestión del conocimiento:**
   - Cómo capturar el conocimiento implícito de los desarrolladores que conocen el sistema legacy antes de que se vayan o se jubilen.
   - Uso de IA para extraer reglas de negocio del código e historiales de commits.

5. **Métricas de éxito de la modernización:**
   - KPIs técnicos: cobertura de tests, tiempo de despliegue, incidencias en producción, tiempo de resolución de bugs.
   - KPIs de negocio: disponibilidad del sistema, velocidad de entrega de nuevas funcionalidades, coste de mantenimiento.

Incluye también recomendaciones sobre cómo vender internamente el proyecto de modernización a dirección no técnica, enfatizando riesgo de negocio y retorno de inversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Planificación técnica de modernización de sistemas legacy en empresas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA para diseñar la experiencia digital de empresa tradicional',
                'description'       => 'Diseña la experiencia de usuario digital de una empresa que pasa de offline a online, usando IA para investigación y prototipado.',
                'prompt_content'    => <<<'EOT'
Actúa como diseñador UX/UI senior especializado en transformación digital de empresas tradicionales que están dando el salto al mundo digital.

Necesito tu ayuda para diseñar la experiencia digital de mi empresa, que hasta ahora ha operado de manera completamente offline o con presencia digital mínima.

**Contexto de la empresa:**
- Tipo de negocio: [ej: ferretería, distribuidora B2B, clínica médica, academia de idiomas, asesoría contable]
- Clientes actuales: [perfil demográfico y digital de los clientes]
- Principales puntos de contacto actuales con el cliente: [teléfono, visita física, fax, correo postal]
- Objetivo de la digitalización: [ej: vender online, autogestión de pedidos, citas online, portal del cliente]

**Lo que necesito:**

1. **Investigación de usuarios con IA:**
   - Ayúdame a formular preguntas para entrevistas con clientes actuales que revelan sus hábitos digitales, frustraciones con el proceso actual y disposición al cambio.
   - Diseña una encuesta corta (máximo 8 preguntas) para medir el nivel de madurez digital de mis clientes.
   - Cómo usar IA para analizar feedback de clientes existente (correos, quejas, notas del equipo comercial) e identificar patrones de necesidades digitales.

2. **Definición de la experiencia objetivo:**
   - Basándote en el contexto que te doy, propón los 3 journeys digitales más importantes que debo resolver primero (quick wins de experiencia).
   - Para cada journey, describe el estado actual (as-is) y el estado objetivo (to-be) con IA integrada.

3. **Principios de diseño para la transición:**
   - Qué principios de diseño son críticos cuando digitalizas una empresa con clientes de perfil no digital (mayores, poco acostumbrados a apps, etc.).
   - Cómo diseñar para la confianza: cuando los clientes están acostumbrados a tratar con personas, cómo el diseño digital puede replicar esa calidez.

4. **Sistema de diseño inicial:**
   - Qué componentes son prioritarios para construir primero en el sistema de diseño.
   - Cómo usar IA para generar variantes de interfaz y realizar pruebas rápidas de concepto antes de invertir en desarrollo.

5. **Métricas de experiencia:**
   - Qué métricas de UX debo monitorizar durante los primeros 6 meses de la plataforma digital.
   - Cómo usar IA para analizar comportamiento de usuarios (heatmaps, grabaciones, feedback) y priorizar mejoras.

Incluye ejemplos concretos de empresas tradicionales que han hecho bien esta transición digital y qué podemos aprender de ellas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de experiencia digital para empresas en proceso de transformación',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA para transformar el proceso de ventas tradicional en digital',
                'description'       => 'Moderniza tu proceso de ventas offline con IA: desde la prospección digital hasta el cierre automatizado.',
                'prompt_content'    => <<<'EOT'
Actúa como director de ventas con experiencia en transformación digital de equipos comerciales tradicionales hacia modelos de venta digital y social selling.

Mi equipo de ventas lleva años trabajando de manera tradicional (visitas físicas, llamadas en frío, ferias sectoriales) y necesito ayuda para modernizar el proceso sin perder lo que funciona.

**Situación actual del equipo:**
- Número de comerciales: [cantidad]
- Sector y tipo de venta: [B2B/B2C, ciclo de venta corto/largo]
- Herramientas actuales: [CRM si tienen, Excel, agenda papel, etc.]
- Ratio de conversión actual: [si lo conoces]
- Principal fuente de leads actual: [ferias, referencias, llamadas en frío, etc.]
- Mayor resistencia del equipo: [qué les preocupa de la digitalización]

**Lo que necesito que diseñes:**

1. **Diagnóstico del proceso actual:**
   - Ayúdame a mapear el proceso de venta actual identificando los cuellos de botella, los pasos manuales que más tiempo consumen y las etapas donde se pierde más oportunidades.
   - Qué datos debería recopilar durante las próximas 4 semanas para tener un diagnóstico objetivo del proceso.

2. **Plan de transformación del proceso de ventas:**
   - Diseña un proceso de ventas digital en etapas (prospección, cualificación, propuesta, cierre, fidelización) con IA integrada en cada etapa.
   - Qué herramientas de sales intelligence con IA recomendarías para prospección (búsqueda de leads, señales de compra, enriquecimiento de datos).
   - Cómo integrar LinkedIn Sales Navigator y herramientas de IA para el social selling sin que suene artificioso.

3. **Automatización inteligente:**
   - Qué tareas administrativas del comercial se pueden automatizar con IA (resúmenes de reuniones, actualización de CRM por voz, generación de propuestas).
   - Cómo usar IA para la cualificación automática de leads entrantes y la priorización de la agenda del comercial.

4. **Formación y adopción del equipo:**
   - Diseña un plan de formación de 8 semanas para que comerciales tradicionales adopten herramientas digitales sin resistencia.
   - Cómo involucrar a los mejores vendedores tradicionales como embajadores del cambio digital.

5. **Métricas del nuevo proceso:**
   - Qué KPIs de ventas debo añadir para medir el impacto de la digitalización (más allá de facturación).

Dame también un script de conversación para que yo, como director, presente este cambio al equipo comercial de manera positiva y motivadora.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformación digital del proceso comercial y adopción de herramientas de IA',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA para gestionar la hoja de ruta de digitalización como Product Manager',
                'description'       => 'Prioriza y gestiona el backlog de transformación digital de tu empresa usando frameworks de producto con IA.',
                'prompt_content'    => <<<'EOT'
Actúa como Product Manager senior especializado en digitalización de empresas tradicionales y gestión de transformación organizacional con herramientas de producto.

Soy el responsable de producto o transformación digital en mi empresa y necesito ayuda para estructurar y gestionar la hoja de ruta de digitalización.

**Contexto:**
- Tipo de empresa y sector: [descripción breve]
- Estado de digitalización actual: [qué sistemas digitales ya existen, cuáles están ausentes]
- Stakeholders clave: [quiénes toman decisiones, quiénes son los más resistentes, quiénes son aliados]
- Recursos disponibles: [equipo de tecnología interno o externo, presupuesto aproximado]
- Plazo objetivo: [cuándo debe estar completada la primera fase de digitalización]

**Lo que necesito:**

1. **Framework de descubrimiento de iniciativas:**
   - Diseña un proceso de discovery rápido (2-3 semanas) para identificar las iniciativas de digitalización de mayor impacto con el menor esfuerzo.
   - Qué técnicas de investigación interna (entrevistas con empleados, shadowing de procesos, análisis de datos de operaciones) revelan mejor las oportunidades de digitalización.
   - Cómo usar IA para analizar datos de la empresa (correos, tickets de soporte interno, quejas de empleados) e identificar patrones de ineficiencia.

2. **Framework de priorización:**
   - Adapta el framework RICE (Reach, Impact, Confidence, Effort) para iniciativas de transformación digital. ¿Qué significa "Reach" cuando digitalizamos procesos internos?
   - Cómo equilibrar quick wins (que generan confianza y momentum) con iniciativas estratégicas de largo plazo.
   - Cómo involucrar a los stakeholders en la priorización de manera que se sientan dueños del proceso.

3. **Gestión de la hoja de ruta:**
   - Propón una estructura de hoja de ruta a 12 meses con trimestres temáticos (ej: Q1 fundaciones digitales, Q2 automatización de procesos, Q3 experiencia de cliente, Q4 inteligencia de datos).
   - Cómo comunicar la hoja de ruta a diferentes audiencias: dirección (ROI y riesgo), equipo técnico (detalle y dependencias), empleados afectados (beneficios para ellos).

4. **Métricas de producto para la transformación:**
   - Qué métricas de adopción interna debo seguir para saber si las nuevas herramientas digitales realmente se están usando.
   - Cómo medir el retorno de la inversión de cada iniciativa de digitalización.

5. **Uso de IA en la gestión del roadmap:**
   - Qué herramientas de IA me ayudan a gestionar el backlog, detectar dependencias y generar reportes de progreso automáticos para la dirección.

Incluye una plantilla de OKRs para la transformación digital con ejemplos concretos de Objectives y Key Results para los primeros 6 meses.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión de hoja de ruta de transformación digital con enfoque de producto',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para gestionar el cambio organizacional en la transformación digital',
                'description'       => 'Diseña el plan de gestión del cambio y cultura de innovación para acompañar la transformación digital de tu empresa.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor de gestión del cambio organizacional especializado en transformación digital, con experiencia en empresas tradicionales donde la resistencia al cambio es el principal obstáculo.

Necesito tu ayuda para diseñar el plan de people y gestión del cambio que acompañe nuestra transformación digital.

**Situación de mi organización:**
- Número de empleados afectados: [total y por área]
- Cultura actual: [describe la cultura, ej: muy jerárquica, resistencia al cambio, empleados con muchos años en la empresa]
- Experiencias pasadas con cambios: [si hubo intentos anteriores de digitalización, cómo resultaron]
- Liderazgo: [si la dirección está alineada o hay resistencia también arriba]
- Sindicatos o representación laboral: [si existe y cuál es su postura]

**Lo que necesito:**

1. **Diagnóstico de preparación para el cambio:**
   - Diseña una encuesta de "change readiness" de máximo 10 preguntas para medir el nivel de resistencia y apertura de los empleados antes de lanzar la transformación.
   - Qué señales identifican a los "early adopters" internos que pueden ser embajadores del cambio.
   - Cómo segmentar a los empleados por su disposición al cambio y personalizar el enfoque de gestión para cada segmento.

2. **Plan de comunicación:**
   - Diseña una estrategia de comunicación interna por fases: antes del anuncio, durante la implementación, después de los primeros resultados.
   - Cómo usar IA para personalizar las comunicaciones internas según el perfil y preocupaciones de cada grupo de empleados.
   - Qué mensajes clave funcionan mejor para empleados que sienten que la IA puede reemplazarles.

3. **Plan de formación y upskilling:**
   - Diseña un plan de formación diferenciado por perfil (directivos, mandos intermedios, empleados operativos) para adoptar herramientas digitales con IA.
   - Cómo usar IA para personalizar los itinerarios de aprendizaje según las brechas de competencias de cada empleado.
   - Qué formato de formación funciona mejor para empleados con poca experiencia digital (microlearning, mentoring entre pares, gamificación).

4. **Gestión de la resistencia:**
   - Dame un protocolo para gestionar situaciones de resistencia activa: empleados que se niegan a usar nuevas herramientas, managers que sabotean el cambio.
   - Cómo convertir a los detractores más visibles en aliados del cambio.

5. **Cultura de innovación sostenida:**
   - Qué rituales organizativos (reuniones, hackathons, reconocimientos) generan una cultura de innovación continua más allá del proyecto de transformación.
   - Cómo medir la evolución de la cultura de innovación con indicadores cualitativos y cuantitativos.

Finaliza con un calendario de 6 meses del plan de gestión del cambio con hitos clave y responsables.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño del plan de gestión del cambio y cultura digital en la transformación organizacional',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para el análisis financiero de proyectos de transformación digital',
                'description'       => 'Construye el business case financiero de la digitalización de tu empresa con modelos de ROI, TCO y análisis de riesgo asistidos por IA.',
                'prompt_content'    => <<<'EOT'
Actúa como CFO o director financiero con experiencia en la evaluación y aprobación de proyectos de transformación digital en empresas tradicionales.

Necesito construir el business case financiero de nuestro proyecto de digitalización para presentarlo al comité de dirección y conseguir aprobación de presupuesto.

**Datos del proyecto:**
- Inversión estimada total: [importe aproximado, incluyendo tecnología, consultoría, formación]
- Horizonte temporal del proyecto: [meses o años]
- Áreas de la empresa afectadas: [operaciones, ventas, marketing, administración, etc.]
- Principales ineficiencias actuales a resolver: [procesos manuales, errores, duplicidades, retrasos]

**Lo que necesito construir:**

1. **Modelo de costes totales (TCO):**
   - Ayúdame a identificar todos los costes del proyecto de digitalización: licencias de software, infraestructura cloud, consultoría de implementación, formación de empleados, coste de horas internas dedicadas, mantenimiento post-implementación.
   - Qué costes ocultos suelen olvidarse en proyectos de digitalización (integración de sistemas, migración de datos, coste del downtime durante la implementación).
   - Cómo usar IA para modelar diferentes escenarios de coste (pesimista, base, optimista) con supuestos justificados.

2. **Modelo de beneficios y ROI:**
   - Ayúdame a cuantificar los beneficios financieros esperados: ahorro de horas de trabajo manual, reducción de errores y reprocesos, mejora del ciclo de cobro, incremento de ventas por mejor capacidad de análisis.
   - Cómo calcular el ROI de la transformación digital con un modelo de flujos de caja descontados (DCF) a 3 y 5 años.
   - Qué benchmarks del sector existen para justificar los supuestos de beneficios ante el comité de dirección.

3. **Análisis de riesgo financiero:**
   - Diseña una matriz de riesgos financieros del proyecto: qué puede salir mal y cuánto costaría.
   - Cómo calcular el impacto financiero de no digitalizarse (coste de oportunidad, pérdida de competitividad, riesgo regulatorio).
   - Qué métricas financieras de seguimiento del proyecto incluir para detectar desviaciones a tiempo.

4. **Priorización financiera de iniciativas:**
   - Cómo ordenar las iniciativas de digitalización por retorno financiero para invertir primero en las de mayor impacto.
   - Cuándo tiene sentido externalizar versus construir internamente desde una perspectiva de coste.

5. **Presentación al comité de dirección:**
   - Dame una estructura de presentación de 10 diapositivas del business case financiero con el contenido de cada slide.
   - Qué preguntas difíciles suele hacer el comité de dirección sobre proyectos de transformación digital y cómo responderlas con datos.

Incluye fórmulas de cálculo comentadas y ejemplos numéricos ilustrativos para cada sección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Business case financiero y análisis de ROI de proyectos de transformación digital',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA para gestionar el cumplimiento legal de la transformación digital',
                'description'       => 'Identifica los riesgos legales y obligaciones regulatorias de digitalizar tu empresa con herramientas de IA.',
                'prompt_content'    => <<<'EOT'
Actúa como abogado especialista en derecho digital, protección de datos y transformación tecnológica de empresas, con experiencia práctica en asesorar a empresas tradicionales en su proceso de digitalización.

Mi empresa está iniciando un proceso de transformación digital y necesito entender el marco legal que aplica y los riesgos que debo gestionar.

**Contexto de la digitalización:**
- Tipo de empresa y sector regulado: [ej: sector sanitario, financiero, educativo, retail, logística]
- Datos que se van a digitalizar o procesar: [datos de clientes, empleados, datos de salud, datos financieros]
- Herramientas de IA que se van a implementar: [ej: CRM con IA, chatbot de atención al cliente, análisis predictivo de comportamiento]
- Países donde opera: [España, UE, fuera de la UE]

**Lo que necesito que analices:**

1. **Marco regulatorio aplicable:**
   - Qué normativas aplican a mi digitalización: RGPD, Ley de IA de la UE (EU AI Act), directivas sectoriales específicas, Ley de Servicios Digitales.
   - Cuáles son las obligaciones principales del RGPD cuando implemento herramientas con IA que procesan datos personales de clientes o empleados.
   - Qué categorías de IA están consideradas de "alto riesgo" según el EU AI Act y qué obligaciones adicionales conllevan.

2. **Análisis de riesgos legales:**
   - Identifica los 5 principales riesgos legales de mi digitalización basándote en el contexto que te doy.
   - Qué sanciones económicas máximas enfrento si incumplo la normativa de protección de datos.
   - Cómo gestionar legalmente la decisión automatizada con IA (cuando un algoritmo toma decisiones que afectan a personas).

3. **Plan de cumplimiento:**
   - Qué documentos legales debo actualizar o crear: política de privacidad, registro de actividades de tratamiento, evaluaciones de impacto (DPIA), contratos con proveedores de IA.
   - Cómo realizar una DPIA (Data Protection Impact Assessment) para las herramientas de IA que voy a implementar.
   - Qué cláusulas contractuales debo exigir a mis proveedores de tecnología con IA.

4. **Gestión de derechos de empleados:**
   - Qué debo comunicar a los empleados cuando implemento herramientas de IA que monitorizan o analizan su trabajo.
   - Cómo gestionar legalmente la implementación de IA que puede afectar a las condiciones laborales.

5. **Gobernanza de IA:**
   - Qué políticas internas de uso ético de IA debo establecer.
   - Cómo documentar las decisiones de IA para garantizar la trazabilidad y auditoría.

Dame un checklist legal de transformación digital que pueda usar como guía de cumplimiento paso a paso.

Nota: Este análisis es orientativo. Consulta siempre con un abogado especialista para tu caso concreto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Análisis legal y de cumplimiento normativo en la transformación digital de empresas',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para transformar el servicio al cliente de empresa tradicional',
                'description'       => 'Diseña la estrategia de digitalización del customer service con IA manteniendo la calidez humana que valoran los clientes.',
                'prompt_content'    => <<<'EOT'
Actúa como director de Customer Success especializado en la digitalización de servicios de atención al cliente en empresas tradicionales que tienen como principal activo la relación personal con el cliente.

Mi empresa tiene un servicio al cliente tradicional (teléfono, visitas presenciales, correo postal) y quiero modernizarlo con IA sin perder la calidez y confianza que valoran nuestros clientes.

**Contexto actual:**
- Canales de atención actuales: [teléfono, presencial, email, etc.]
- Volumen de consultas diarias: [aproximado]
- Perfil de los clientes: [edad, nivel digital, tipo de consultas más frecuentes]
- Principales problemas actuales: [tiempos de espera, horarios limitados, coste del personal, inconsistencia en respuestas]
- Herramientas actuales: [si tienen CRM, ticketing, etc.]

**Lo que necesito diseñar:**

1. **Diagnóstico de la experiencia actual:**
   - Diseña un proceso para mapear los 10 tipos de consulta más frecuentes y clasificarlos por complejidad (automatizable vs. requiere humano).
   - Cómo analizar las grabaciones de llamadas o tickets de email con IA para extraer patrones de insatisfacción del cliente.
   - Qué métricas de servicio debo medir primero para tener una línea base antes de digitalizar (FCR, AHT, CSAT, NPS).

2. **Estrategia de digitalización del servicio:**
   - Diseña la arquitectura de un servicio de atención al cliente híbrido (IA + humano) con criterios claros de escalado.
   - Cuándo un chatbot con IA es adecuado y cuándo puede dañar la experiencia del cliente (situaciones donde el cliente necesita empatía humana).
   - Cómo implementar un chatbot de IA que suene natural y no robotizado, manteniendo el tono y valores de la marca.

3. **Implementación progresiva:**
   - Propón una hoja de ruta de 6 meses para digitalizar el servicio al cliente por fases de menor a mayor riesgo.
   - Cómo gestionar la transición para los agentes humanos: formación en nuevas herramientas, redefinición de roles (de responder FAQs a resolver casos complejos).
   - Cómo comunicar el cambio a los clientes de manera que lo perciban como una mejora y no como un recorte de servicio.

4. **Personalización con IA:**
   - Cómo usar el historial de interacciones del cliente con IA para personalizar cada contacto.
   - Qué datos del cliente son los más valiosos para predecir necesidades futuras y anticiparse con servicio proactivo.

5. **Métricas del nuevo modelo:**
   - Diseña un dashboard de métricas del nuevo servicio digital que combine indicadores de eficiencia (coste por interacción, tiempo de resolución) con indicadores de calidad de experiencia (CSAT, NPS, esfuerzo del cliente).

Incluye ejemplos de empresas tradicionales que han digitalizado con éxito su servicio al cliente sin perder la satisfacción del cliente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Digitalización del customer service con IA en empresas tradicionales',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para posicionarte como experto en transformación digital como freelance',
                'description'       => 'Construye tu propuesta de valor y estrategia de captación de clientes como consultor freelance de transformación digital con IA.',
                'prompt_content'    => <<<'EOT'
Actúa como coach de negocio para consultores freelance especializado en ayudar a profesionales a posicionarse en el mercado de la transformación digital y conseguir clientes de alto valor.

Soy un profesional freelance con experiencia en tecnología, gestión o consultoría y quiero especializarme en ayudar a empresas tradicionales a digitalizarse usando IA. Necesito construir mi posicionamiento y estrategia de negocio.

**Mi perfil actual:**
- Experiencia previa: [área de experiencia, años, tipo de proyectos]
- Sectores en los que tengo red: [sectores donde tienes contactos o credibilidad]
- Certificaciones o formación relevante: [si tienes]
- Objetivo de facturación: [mensual o anual]
- Tiempo disponible: [full-time o part-time como freelance]

**Lo que necesito construir:**

1. **Propuesta de valor diferenciada:**
   - Ayúdame a definir mi nicho dentro de la transformación digital con IA (hay mucha competencia genérica, necesito especialización).
   - Cómo combinar mi experiencia previa de sector con la IA para crear una propuesta única que los generalistas no puedan replicar.
   - Dame 3 opciones de posicionamiento con el argumento diferenciador de cada uno.

2. **Paquetes de servicios:**
   - Diseña 3 paquetes de consultoría de transformación digital con IA (starter, professional, enterprise) con descripción del servicio, entregables, duración y precio orientativo.
   - Cómo estructurar el diagnóstico inicial como servicio de entrada de bajo riesgo que lleva a proyectos más grandes.
   - Qué metodología de trabajo con IA puedo ofrecer como diferenciador (uso de IA para acelerar los entregables de consultoría).

3. **Estrategia de captación de clientes:**
   - Diseña mi estrategia de contenido en LinkedIn para los primeros 3 meses: qué tipo de publicaciones generan credibilidad con directivos de empresas tradicionales.
   - Cómo usar IA para generar contenido de thought leadership sobre transformación digital de manera eficiente.
   - Qué eventos, asociaciones y comunidades debo frecuentar para encontrar clientes potenciales en empresas tradicionales.

4. **Proceso de venta consultiva:**
   - Diseña el proceso de venta ideal para servicios de consultoría de transformación digital: desde el primer contacto hasta el cierre del contrato.
   - Qué preguntas debo hacer en la primera reunión para diagnosticar si la empresa está lista para trabajar conmigo y cuál es su problema más urgente.
   - Cómo usar IA para preparar propuestas comerciales personalizadas en poco tiempo.

5. **Operativa del negocio freelance con IA:**
   - Qué herramientas de IA debo usar para gestionar mi negocio de consultoría con eficiencia (CRM personal, gestión de proyectos, facturación, seguimiento de clientes).
   - Cómo usar IA para acelerar la entrega de mis proyectos de consultoría (análisis de datos del cliente, generación de informes, creación de materiales de formación).

Dame también un plan de acción para los primeros 90 días como consultor freelance de transformación digital con IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Posicionamiento y captación de clientes como consultor freelance de transformación digital',
                'vote_score'        => 41,
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
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
