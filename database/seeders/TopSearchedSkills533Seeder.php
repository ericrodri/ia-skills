<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills533Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing internacional con IA para expansión global',
                'description'      => 'Usa IA para diseñar estrategias de marketing adaptadas a nuevos mercados internacionales, localizar campañas con sensibilidad cultural y analizar la competencia en cada geografía.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing internacional con experiencia en expansión a mercados emergentes y maduros de Europa, Latinoamérica, Asia-Pacífico y Norteamérica. Tu especialidad es ayudar a empresas a localizar sus estrategias de marketing sin perder la coherencia de marca global, adaptando mensajes, canales y creatividades a las particularidades culturales de cada mercado.

**Contexto de la empresa:**
Trabajo en [EMPRESA: startup / PYME / multinacional] del sector [SECTOR: SaaS / e-commerce / servicios profesionales / productos físicos]. Queremos expandirnos al mercado de [MERCADO OBJETIVO: país o región]. Nuestro producto o servicio principal es [PRODUCTO/SERVICIO: descripción breve]. El presupuesto de marketing para esta expansión es [PRESUPUESTO: orden de magnitud: bajo / medio / alto].

**instrucción principal:**
Actúa como mi director de marketing internacional para la expansión a este nuevo mercado. Guíame desde el análisis hasta la ejecución de la estrategia de go-to-market.

**tarea 1 — Análisis de mercado y audiencia local:**
Para el mercado objetivo indicado, proporciona un análisis de: perfil del consumidor o comprador típico (demografía, comportamiento de compra, canales preferidos), principales diferencias culturales que afectan a la comunicación de marketing (valores, humor, tabúes, formalidad), competidores locales y regionales relevantes y las plataformas digitales dominantes en ese mercado (redes sociales, buscadores, marketplaces).

**tarea 2 — Estrategia de localización de marca:**
Evalúa si nuestra propuesta de valor, naming y mensajes actuales funcionan en el mercado objetivo. Identifica posibles fricciones culturales, lingüísticas o regulatorias. Propón ajustes específicos de: mensaje principal, tono de comunicación, elementos visuales que podrían necesitar adaptación y argumentos de venta que resuenan en esa cultura específica.

**tarea 3 — Plan de canales por mercado:**
Diseña una estrategia de canales para los primeros 6 meses en el mercado objetivo. Indica qué canales priorizar (búsqueda de pago, social ads, influencer marketing local, relaciones públicas, eventos) con una asignación aproximada de presupuesto y justificación cultural. Incluye también canales orgánicos relevantes: SEO local, comunidades online, medios especializados.

**tarea 4 — Calendario de campaña de lanzamiento:**
Crea un calendario de campaña de lanzamiento para los primeros 90 días en el nuevo mercado. Incluye: fase de pre-lanzamiento (generación de expectativa), lanzamiento oficial (campaña principal) y fase de consolidación (retención y referidos). Para cada fase indica las acciones principales, los mensajes clave y las métricas de seguimiento.

**tarea 5 — KPIs y sistema de medición:**
Define los KPIs principales para medir el éxito del marketing internacional en este mercado, diferenciando entre métricas de awareness (alcance, reconocimiento de marca), consideración (tráfico, engagement, leads) y conversión (clientes adquiridos, coste de adquisición, LTV). Propón la cadencia de reporting y los umbrales de decisión para escalar o pivotar la estrategia.

**objetivo final:**
Tener una estrategia de marketing internacional completa, culturalmente sensible y operativamente ejecutable, que maximice las posibilidades de éxito en el nuevo mercado dentro del presupuesto disponible y con recursos de equipo razonables para una empresa en expansión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar estrategias de marketing localizado para entrar en nuevos mercados internacionales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Internacionalización de software con IA: i18n y localización técnica',
                'description'      => 'Usa IA para planificar la internacionalización de productos digitales, gestionar flujos de traducción técnica y adaptar software a requisitos locales de diferentes mercados.',
                'prompt_content'   => <<<'EOT'
Eres un experto en internacionalización (i18n) y localización (l10n) de software, con experiencia en frameworks como React, Vue, Angular, Laravel, Django y plataformas móviles iOS y Android. Conoces los estándares ICU, Unicode, CLDR y las mejores prácticas para hacer que un producto digital funcione correctamente en cualquier idioma, región y mercado.

**Contexto del proyecto:**
Trabajo en un equipo de desarrollo que necesita internacionalizar [PRODUCTO: aplicación web / app móvil / API / plataforma SaaS]. El producto actualmente está disponible solo en [IDIOMA ACTUAL: español / inglés]. Queremos añadir soporte para [IDIOMAS OBJETIVO: lista de idiomas y regiones]. El stack tecnológico es [STACK: especifica las tecnologías principales].

**instrucción principal:**
Actúa como mi consultor técnico de internacionalización. Necesito un plan completo para hacer que nuestro producto sea verdaderamente global, no solo traducido.

**tarea 1 — Auditoría de preparación para i18n:**
Revisa los siguientes aspectos de nuestro código y arquitectura para identificar deudas técnicas de internacionalización: strings hardcodeados en el código, manejo de fechas y zonas horarias, formatos de números y divisas, ordenación y comparación de texto (collation), manejo de plurales y géneros gramaticales, soporte para idiomas RTL (árabe, hebreo), y manejo de conjuntos de caracteres. Para cada área, indica el nivel de riesgo y el esfuerzo estimado de corrección.

**tarea 2 — Arquitectura de i18n:**
Propón la arquitectura técnica para implementar i18n en nuestro stack. Incluye: la librería o framework de i18n recomendado con justificación, la estructura de archivos de traducción (JSON, PO, YAML), el flujo de trabajo para añadir nuevas claves de traducción, la estrategia de carga de traducciones (eager vs lazy loading), y cómo gestionar las variantes por región dentro del mismo idioma (es-ES vs es-MX, pt-BR vs pt-PT).

**tarea 3 — Flujo de gestión de traducciones:**
Diseña el proceso completo de gestión de traducciones para el equipo. Cubre: cómo extraer strings nuevos del código, qué plataforma de gestión de traducciones (TMS) recomiendas (Crowdin, Lokalise, Phrase, Weblate), cómo integrar el TMS con el pipeline de CI/CD, cómo gestionar la colaboración con traductores externos o agencias, y cómo asegurar la calidad de las traducciones antes de publicarlas.

**tarea 4 — Adaptaciones de negocio por mercado:**
Más allá del idioma, identifica las adaptaciones técnicas necesarias para los mercados objetivo: formatos de dirección postal y número de teléfono, métodos de pago locales (SEPA, Pix, Alipay, Oxxo), requisitos de cumplimiento legal (GDPR en Europa, LGPD en Brasil, PIPL en China), monedas y conversión, y adaptaciones de UX para convenciones locales (flujo de formularios, estructura de navegación).

**tarea 5 — Plan de implementación y testing:**
Crea un plan de implementación por fases con estimaciones de esfuerzo. Incluye también una estrategia de testing de i18n: cómo automatizar la detección de strings sin traducir, cómo hacer pruebas de pseudo-localización, cómo verificar el layout con idiomas de texto largo (alemán) o RTL, y qué herramientas usar para el testing manual con nativos del idioma.

**objetivo final:**
Tener un producto digital que funcione de forma nativa en todos los mercados objetivo, con una arquitectura técnica escalable que permita añadir nuevos idiomas y regiones con esfuerzo mínimo, y un flujo de trabajo de localización eficiente que no bloquee los ciclos de desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificar e implementar la internacionalización técnica de productos digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño culturalmente adaptado para mercados internacionales con IA',
                'description'      => 'Usa IA para adaptar sistemas de diseño a diferentes culturas, analizar la sensibilidad cultural de elementos visuales y crear guías de localización de UX para nuevos mercados.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño intercultural y UX internacional, con experiencia en la adaptación de sistemas de diseño para mercados de Asia, Oriente Medio, Latinoamérica, África y Europa. Conoces las implicaciones culturales del color, la tipografía, la disposición de la información, los patrones de interacción y los símbolos visuales en diferentes contextos culturales.

**Contexto del proyecto:**
Trabajo en un equipo de diseño que necesita adaptar nuestro producto digital para el mercado de [MERCADO: país o región cultural]. Nuestro producto actual fue diseñado principalmente para [MERCADO ORIGINAL: describe el contexto cultural original]. El tipo de producto es [TIPO: aplicación móvil / plataforma web / e-commerce / app empresarial].

**instrucción principal:**
Actúa como mi consultor de diseño intercultural. Ayúdame a identificar los elementos de diseño que necesitan adaptación y a crear una guía de localización de UX para el mercado objetivo.

**tarea 1 — Auditoría cultural del diseño actual:**
Analiza los siguientes elementos de nuestro diseño actual desde la perspectiva del mercado objetivo: paleta de colores (significados y connotaciones culturales), iconografía y símbolos (elementos que pueden ser malinterpretados), fotografías e ilustraciones de personas (representación, diversidad, contexto cultural), tipografía y espacio para texto (el texto en otros idiomas suele ser un 30-40% más largo), flujos de usuario y jerarquía de información (culturas de alta vs baja contexto), y gesturas y patrones de interacción en móvil.

**tarea 2 — Guía de adaptación visual:**
Crea una guía de adaptación visual específica para el mercado objetivo que cubra: recomendaciones de paleta de colores culturalmente apropiada, tipografía local recomendada (incluyendo fuentes que soporten el sistema de escritura local), iconos que deben ser reemplazados y sus alternativas, estilo de fotografía e ilustración más apropiado, y directrices de espaciado y layout para soportar texto en el idioma local (incluyendo RTL si aplica).

**tarea 3 — Adaptación de patrones de UX:**
Para el mercado objetivo, propón adaptaciones en los siguientes patrones de UX: flujo de registro y onboarding (qué información se pide y en qué orden), checkout o formularios de conversión (campos específicos del mercado), navegación y arquitectura de la información (preferencias culturales de organización), feedback y comunicación de errores (tono apropiado en esa cultura), y elementos de prueba social (qué tipo de social proof funciona mejor).

**tarea 4 — Kit de localización para el equipo:**
Crea un kit de localización que el equipo de diseño pueda usar como referencia al crear nuevos componentes o flujos para este mercado. El kit debe incluir: checklist de revisión cultural para cada nuevo diseño, ejemplos de lo que funciona y no funciona en ese mercado con capturas de referencia, glosario de términos de UX con sus equivalentes culturales, y proceso de revisión con nativos del mercado antes de publicar.

**tarea 5 — Métricas de éxito del diseño localizado:**
Define cómo medir si la adaptación de diseño está funcionando en el mercado objetivo. Propón métricas cualitativas (test de usabilidad con usuarios locales, encuestas de satisfacción cultural) y cuantitativas (tasas de conversión, tiempo en tarea, tasas de abandono en puntos críticos del flujo) y un plan para iterar basado en el feedback de usuarios reales del mercado.

**objetivo final:**
Crear una experiencia de usuario que se sienta nativa para el mercado objetivo, no simplemente traducida, aumentando la aceptación del producto, la retención de usuarios y las tasas de conversión al respetar las expectativas culturales locales en cada aspecto del diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Adaptar sistemas de diseño y UX a diferentes mercados y contextos culturales',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas internacionales con IA para nuevos mercados',
                'description'      => 'Usa IA para diseñar estrategias de entrada comercial en mercados internacionales, adaptar argumentarios de ventas a contextos culturales y seleccionar el modelo de go-to-market adecuado.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas internacionales y estrategia de go-to-market global, con experiencia ayudando a empresas a entrar en nuevos mercados a través de ventas directas, canales de distribución, alianzas estratégicas y modelos híbridos. Conoces las diferencias en el proceso de venta entre culturas: desde los ciclos de negociación en Asia hasta la toma de decisiones en Latinoamérica o los requisitos de compliance en Europa.

**Contexto comercial:**
Trabajo en [EMPRESA: startup / PYME / empresa en crecimiento] del sector [SECTOR]. Queremos expandir nuestras ventas al mercado de [MERCADO OBJETIVO: país o región]. Nuestro producto o servicio es [PRODUCTO/SERVICIO: descripción]. Actualmente vendemos en [MERCADOS ACTUALES] con el modelo [MODELO ACTUAL: ventas directas / SaaS PLG / canal de distribución].

**instrucción principal:**
Actúa como mi director de ventas internacionales para esta expansión. Ayúdame a diseñar la estrategia comercial completa para entrar en este nuevo mercado de forma eficiente y culturalmente apropiada.

**tarea 1 — Análisis del mercado y modelo de entrada:**
Para el mercado objetivo, evalúa y recomienda el modelo de entrada comercial más adecuado entre: ventas directas (propio equipo local), canal de distribuidores o resellers locales, alianzas con empresas complementarias del mercado, modelo freemium o PLG adaptado, o un enfoque híbrido. Justifica la recomendación en función del tipo de producto, tamaño típico de deal, complejidad del ciclo de venta y recursos disponibles.

**tarea 2 — Adaptación cultural del proceso de ventas:**
Describe las diferencias clave en el proceso de venta en el mercado objetivo respecto al mercado actual. Cubre: cómo se construyen las relaciones comerciales (velocidad, canales, formalidad), qué papel juega la confianza y las referencias personales en la decisión de compra, cómo se negocia (margen esperado de negociación, importancia del precio vs valor), quiénes participan en el proceso de decisión y cómo gestionar comités de compra, y qué errores culturales cometen habitualmente las empresas extranjeras al entrar en este mercado.

**tarea 3 — Argumentario de ventas localizado:**
Adapta nuestro argumentario de ventas para el mercado objetivo. Incluye: propuesta de valor reformulada con los beneficios que más resuenan en esa cultura o mercado, casos de uso y ejemplos de empresas del sector local o región, objeciones típicas de compradores de este mercado y respuestas adaptadas culturalmente, y el lenguaje y tono apropiado para comunicaciones comerciales en este mercado.

**tarea 4 — Plan de ramp-up comercial para los primeros 6 meses:**
Crea un plan detallado para los primeros 6 meses de ventas en el nuevo mercado. Incluye: acciones del mes 1 (configuración, red de contactos inicial, primeras reuniones), meses 2-3 (generación de pipeline, primeras demos y propuestas), meses 4-6 (cierre de primeros clientes, aprendizajes y ajustes). Define los hitos de éxito para cada fase y las señales de alerta que indicarían que la estrategia necesita un pivote.

**tarea 5 — Selección y gestión de socios locales:**
Si el modelo incluye canal o partnerships, crea un proceso para identificar, evaluar y gestionar socios comerciales locales. Incluye: criterios de selección del socio ideal, proceso de due diligence comercial, estructura del acuerdo de partnership (exclusividad, territorios, comisiones, obligaciones), programa de habilitación del socio (formación, materiales, soporte) y métricas para evaluar el rendimiento del socio y tomar decisiones de continuidad.

**objetivo final:**
Entrar en el nuevo mercado con una estrategia comercial culturalmente sólida, un proceso de ventas adaptado a las expectativas locales y un plan de ejecución realista que permita generar los primeros ingresos en los primeros 6 meses mientras construye una base para el crecimiento a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar estrategias de ventas y go-to-market adaptadas a mercados internacionales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para expansión global con IA',
                'description'      => 'Usa IA para adaptar el roadmap de producto a múltiples mercados, priorizar funcionalidades de internacionalización y gestionar el backlog de localización de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior con experiencia en productos globales que sirven a múltiples mercados simultáneamente. Tu especialidad es equilibrar las necesidades globales del producto con los requisitos locales de cada mercado, tomar decisiones de priorización difíciles cuando los mercados tienen necesidades contradictorias, y construir frameworks que escalen sin fragmentar el producto.

**Contexto del producto:**
Soy PM de [PRODUCTO: describe el producto y su mercado actual]. Estamos expandiéndonos a [NUEVOS MERCADOS: lista de países o regiones]. Los principales desafíos de expansión que hemos identificado son [DESAFÍOS: ej. requisitos regulatorios diferentes, expectativas de UX distintas, necesidades de integración con sistemas locales, precios y modelos de monetización diferentes].

**instrucción principal:**
Actúa como mi consultor de product management para expansión global. Ayúdame a estructurar el enfoque de producto para servir a múltiples mercados de forma sostenible.

**tarea 1 — Framework de decisión: global vs local:**
Crea un framework para decidir qué funcionalidades deben ser globales (core del producto, idénticas en todos los mercados) y cuáles pueden ser locales (adaptaciones específicas por mercado). El framework debe incluir: criterios de clasificación, proceso de decisión cuando hay tensión entre mercados, gobernanza para evitar que el producto se fragmente, y cómo documentar y comunicar estas decisiones al equipo de ingeniería.

**tarea 2 — Priorización del backlog de localización:**
Tenemos las siguientes peticiones de adaptación local pendientes de diferentes mercados: [LISTA TUS PETICIONES O PIDE AL MODELO QUE GENERE EJEMPLOS REPRESENTATIVOS]. Ayúdame a priorizar este backlog usando un framework que considere: impacto en ingresos por mercado, obligatoriedad regulatoria, esfuerzo de implementación, número de usuarios afectados y riesgo de perder clientes si no se implementa.

**tarea 3 — Roadmap multi-mercado:**
Diseña la estructura de un roadmap que comunique claramente los planes de producto para múltiples mercados sin crear confusión. El roadmap debe mostrar: iniciativas globales (aplican a todos los mercados), iniciativas locales (específicas de un mercado o región), dependencias entre iniciativas globales y locales, y la secuencia de lanzamientos por mercado con sus respectivos hitos.

**tarea 4 — Proceso de discovery internacional:**
Crea un proceso de product discovery adaptado a la expansión internacional. Incluye: cómo hacer investigación de usuarios en mercados donde no tienes presencia física, cómo incorporar feedback de equipos locales de ventas y CS, cómo validar hipótesis de producto en un nuevo mercado antes de invertir en desarrollo, y cómo evitar el sesgo del mercado doméstico al tomar decisiones de producto globales.

**tarea 5 — Métricas de producto por mercado:**
Define el framework de métricas para medir el éxito del producto en cada mercado. Incluye: métricas de adopción y engagement (con benchmarks locales cuando sea posible), métricas de retención y churn desagregadas por mercado, métricas de valor para el cliente adaptadas al contexto local, y cómo presentar un dashboard consolidado que muestre el rendimiento global sin ocultar diferencias importantes por mercado.

**objetivo final:**
Tener un enfoque de product management que permita servir a múltiples mercados con un equipo razonablemente pequeño, sin construir productos completamente separados por mercado ni forzar soluciones globales que no funcionen localmente, y con un proceso claro para tomar decisiones de priorización difíciles cuando los mercados compiten por recursos de desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el roadmap y la priorización de producto para múltiples mercados internacionales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos globales y talento internacional con IA',
                'description'      => 'Usa IA para gestionar equipos distribuidos en múltiples países, diseñar políticas de compensación internacional y crear programas de integración cultural para empleados globales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de recursos humanos internacionales, con experiencia en empresas con equipos distribuidos en múltiples países y culturas. Tu especialidad es diseñar estructuras organizativas, políticas de compensación y programas de cultura que funcionen tanto para empleados locales como para trabajadores remotos en diferentes contextos culturales y legales.

**Contexto organizacional:**
Trabajo en RRHH de [EMPRESA: startup global / empresa en proceso de internacionalización]. Actualmente tenemos equipos en [PAÍSES ACTUALES] y estamos incorporando personas en [NUEVOS PAÍSES]. Los principales desafíos son [DESAFÍOS: ej. diferencias legales y laborales, brechas culturales en comunicación, compensación equitativa entre países, integración de equipos remotos en la cultura corporativa].

**instrucción principal:**
Actúa como mi consultor de RRHH internacional. Ayúdame a construir las bases para gestionar un equipo verdaderamente global de forma justa, eficiente y culturalmente inteligente.

**tarea 1 — Marco legal y laboral por país:**
Para los nuevos países de incorporación de empleados, proporciona un resumen de los aspectos legales clave que RRHH debe conocer: modalidades de contratación disponibles (empleado local, contractor, employer of record), elementos obligatorios del contrato laboral, beneficios mínimos legales (vacaciones, baja por enfermedad, pensión), costes de seguridad social para el empleador, y consideraciones de terminación de relación laboral. Señala claramente que este resumen es orientativo y que se requiere asesoría legal local.

**tarea 2 — Framework de compensación internacional equitativa:**
Diseña un framework para estructurar la compensación de empleados en diferentes países de forma transparente y percibida como justa. El framework debe cubrir: metodología para ajustar salarios según coste de vida o mercado local, cómo comunicar las diferencias salariales entre países al equipo, estructura de beneficios globales (qué es igual para todos) vs beneficios locales (adaptados al mercado), y política de equity y opciones sobre acciones para equipos internacionales.

**tarea 3 — Programa de integración cultural para equipos globales:**
Crea un programa de integración cultural para nuevas incorporaciones en países diferentes al país sede de la empresa. El programa debe incluir: onboarding cultural (historia, valores y formas de trabajo de la empresa), conexión con el equipo global (buddy system, presentaciones, canales de comunicación), gestión de expectativas sobre comunicación asíncrona y reuniones en diferentes zonas horarias, y celebración de diversidad cultural dentro del equipo.

**tarea 4 — Guía de comunicación intercultural para managers:**
Desarrolla una guía práctica para managers que supervisan equipos en múltiples culturas. Incluye: diferencias en estilos de comunicación directa vs indirecta, cómo dar feedback crítico de forma culturalmente apropiada, cómo liderar reuniones con participantes de diferentes culturas, señales de alerta de malentendidos culturales y cómo resolverlos, y recursos de formación en inteligencia cultural (CQ) recomendados.

**tarea 5 — Política de trabajo remoto internacional:**
Redacta una política de trabajo remoto para empleados internacionales que cubra: requisitos de disponibilidad y solapamiento de horarios, gestión de viajes de trabajo y visados, provisión de equipamiento y espacio de trabajo en el país del empleado, política de movilidad temporal (trabajar desde otro país por periodos cortos), y proceso de gestión de desempeño a distancia con criterios objetivos y culturalmente neutros.

**objetivo final:**
Construir una organización global donde los empleados en todos los países se sientan igualmente valorados e integrados, con políticas claras, justas y legalmente sólidas, y una cultura que celebre la diversidad como ventaja competitiva en lugar de tratarla como un problema de gestión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar equipos distribuidos internacionalmente con políticas de compensación y cultura global',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero para internacionalización de empresas con IA',
                'description'      => 'Usa IA para modelizar el impacto financiero de la expansión internacional, gestionar el riesgo de divisa y elaborar proyecciones financieras para inversores en contextos de crecimiento global.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con experiencia en la internacionalización de empresas de mediano tamaño, especializado en estructuración financiera de expansiones internacionales, gestión del riesgo de tipo de cambio, optimización fiscal internacional y reporting financiero consolidado para grupos con filiales en múltiples países.

**Contexto financiero:**
Trabajo en el área de finanzas de [EMPRESA: startup / PYME / empresa en crecimiento]. Estamos planificando expandirnos a [MERCADOS OBJETIVO: lista de países o regiones]. La facturación actual es de [FACTURACIÓN: orden de magnitud] y el presupuesto asignado a la expansión es de [PRESUPUESTO: especifica]. Los principales riesgos financieros identificados son [RIESGOS: riesgo de divisa / incertidumbre de la demanda / costes de estructura local / cumplimiento fiscal].

**instrucción principal:**
Actúa como mi CFO para la internacionalización. Ayúdame a construir el modelo financiero y el marco de gestión de riesgos para tomar la decisión de expansión con información completa.

**tarea 1 — Modelo financiero de expansión por país:**
Construye la estructura de un modelo financiero para evaluar la expansión a cada mercado objetivo. El modelo debe incluir: inversión inicial (legal, infraestructura, contratación, marketing de lanzamiento), costes operativos recurrentes (equipo local, oficina, compliance, herramientas), proyección de ingresos por año (3 escenarios: conservador / base / optimista) con supuestos explícitos, y métricas clave: punto de equilibrio, payback period, VAN y contribución marginal al grupo.

**tarea 2 — Gestión del riesgo de tipo de cambio:**
Para empresas que facturarán en divisas distintas al euro o dólar (moneda funcional del grupo), propón una estrategia de gestión del riesgo de tipo de cambio. Incluye: análisis de la exposición al riesgo (transaccional, traslacional y económica), instrumentos de cobertura disponibles según el tamaño de la empresa (forwards, opciones, coberturas naturales), política de coberturas recomendada y su impacto en el presupuesto, y cómo reportar el resultado ajustado por tipo de cambio a la dirección.

**tarea 3 — Estructura fiscal internacional:**
Proporciona orientación sobre las consideraciones fiscales clave en la expansión internacional: modelos de estructura corporativa disponibles (sucursal, filial, empresa conjunta, distribuidor independiente) y sus implicaciones fiscales, precios de transferencia entre entidades del grupo (normativa OCDE y principio de plena competencia), tratados de doble imposición relevantes para los mercados objetivo, y riesgos fiscales a evitar (establecimiento permanente no deseado, thin capitalization). Señala que se requiere asesoría fiscal especializada para cada jurisdicción.

**tarea 4 — Presupuesto de internacionalización:**
Crea una plantilla de presupuesto detallada para los 18 primeros meses de expansión internacional. Organiza el presupuesto en categorías: costes legales y de constitución, personal (contratación, formación, relocalización si aplica), marketing y ventas de lanzamiento, infraestructura tecnológica, cumplimiento y certificaciones, y fondo de contingencia. Para cada categoría, proporciona rangos orientativos según el tipo de mercado (desarrollado vs emergente) y el modelo de entrada.

**tarea 5 — Dashboard financiero para seguimiento de la expansión:**
Diseña un dashboard financiero mensual para monitorizar el rendimiento de cada mercado internacional. Incluye: ingresos y margen por mercado con comparativa vs presupuesto, velocidad de llegada al punto de equilibrio, eficiencia de la inversión en adquisición de clientes por mercado, posición de caja consolidada y por filial, y señales de alerta (triggers) que activen una revisión de la estrategia de expansión en un mercado específico.

**objetivo final:**
Tomar la decisión de internacionalización con un análisis financiero robusto que cuantifique tanto el potencial de valor creado como los riesgos reales, y contar con las herramientas de seguimiento necesarias para gestionar la expansión de forma financieramente disciplinada una vez en marcha.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelizar el impacto financiero de la expansión internacional y gestionar riesgo de divisa',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal global para expansión internacional con IA',
                'description'      => 'Usa IA para analizar los requisitos legales de entrada en nuevos mercados, identificar riesgos de compliance internacional y estructurar contratos para operaciones globales.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho internacional de negocios, con experiencia en la estructuración legal de expansiones internacionales para empresas tecnológicas y de servicios. Tu práctica incluye contratos internacionales, protección de datos transfronteriza, propiedad intelectual global, derecho laboral comparado y gestión de riesgos regulatorios en múltiples jurisdicciones.

**Contexto legal:**
Trabajo en el departamento legal de [EMPRESA: tipo de empresa] que está expandiéndose a [MERCADOS OBJETIVO: lista de países]. Nuestra actividad principal es [ACTIVIDAD: describe el negocio y cómo opera]. Los principales riesgos legales que hemos identificado son [RIESGOS: protección de datos / regulación sectorial / contratos con clientes locales / protección de IP / empleo local].

**instrucción principal:**
Actúa como mi asesor legal para la expansión internacional. Ayúdame a mapear los requisitos legales clave y construir el marco de compliance necesario para operar en los nuevos mercados.

**tarea 1 — Mapa de requisitos legales por mercado:**
Para cada mercado objetivo, proporciona un mapa de los requisitos legales clave que la empresa debe cumplir antes y durante la operación: forma jurídica de presencia local recomendada, licencias o autorizaciones sectoriales necesarias, obligaciones de registro de datos y privacidad (GDPR en Europa, LGPD en Brasil, PIPL en China, CCPA en California), requisitos de contenido local o restricciones a la actividad de empresas extranjeras, y obligaciones laborales locales para contratación de personal.

**tarea 2 — Estructura contractual para operaciones internacionales:**
Diseña la arquitectura contractual necesaria para las operaciones internacionales. Incluye: tipos de contratos necesarios con clientes, distribuidores y partners locales, cláusulas clave a incluir en contratos internacionales (ley aplicable, jurisdicción, fuerza mayor, protección de datos, propiedad intelectual, resolución de disputas), y adaptaciones necesarias para que los contratos sean ejecutables en cada jurisdicción objetivo. Señala qué cláusulas requieren revisión por abogado local.

**tarea 3 — Estrategia de protección de propiedad intelectual global:**
Para una empresa que expande su tecnología, marca o contenido a nuevos mercados, diseña una estrategia de protección de IP que incluya: registro de marcas por mercado (priorización y estrategia de registro internacional: Madrid Protocol, EUTM, marcas nacionales), protección de patentes o secretos comerciales en cada jurisdicción, estrategia de derechos de autor para software y contenido, y protección contractual de know-how con empleados, partners y distribuidores locales.

**tarea 4 — Programa de compliance anti-corrupción y FCPA/UK Bribery Act:**
Para empresas que operan en mercados con alto riesgo de corrupción, crea un programa básico de compliance anti-corrupción. Incluye: evaluación de riesgos por mercado (índice de percepción de corrupción y sectores de riesgo), política de regalos y hospitalidad adaptada a las normas locales sin violar legislación extraterritorial, due diligence de terceros (agentes, distribuidores, partners), formación del equipo local y mecanismos de denuncia, y documentación de due diligence para demostrar compliance proactivo.

**tarea 5 — Protocolo de gestión de incidentes legales internacionales:**
Crea un protocolo para gestionar incidentes legales en mercados internacionales donde la empresa no tiene experiencia previa. El protocolo debe cubrir: cómo identificar y escalar rápidamente un incidente legal local, proceso de selección de asesoría legal local de emergencia, comunicación interna y externa durante el incidente, preservación de evidencias y documentación, y proceso de revisión post-incidente para actualizar el programa de compliance.

**objetivo final:**
Operar en los nuevos mercados internacionales dentro del marco legal aplicable, minimizando el riesgo de sanciones regulatorias, litigios y daño reputacional, con una estructura contractual sólida y un programa de compliance proporcional al tamaño y riesgo de la empresa.

Todas las orientaciones tienen carácter informativo. Las decisiones legales finales deben ser tomadas con el asesoramiento de abogados cualificados en cada jurisdicción relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Mapear requisitos legales y construir el marco de compliance para operaciones internacionales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente global con IA: equipos multilingüe y multiculturales',
                'description'      => 'Usa IA para gestionar equipos de soporte en múltiples idiomas, crear procesos de atención culturalmente adaptados y diseñar programas de formación para agentes internacionales.',
                'prompt_content'   => <<<'EOT'
Eres un director de Customer Success con experiencia en la construcción y gestión de equipos de soporte multilingüe para empresas con clientes en más de 10 países. Tu especialidad es diseñar procesos de atención al cliente que escalen globalmente sin perder calidad, construir equipos distribuidos de soporte y adaptar la experiencia del cliente a las expectativas culturales de cada mercado.

**Contexto del equipo:**
Dirijo el equipo de soporte de [EMPRESA: startup / empresa en crecimiento] con clientes en [MERCADOS: lista de países o regiones]. Actualmente el equipo es [TAMAÑO Y ESTRUCTURA: tamaño, idiomas que cubrimos, modelo de trabajo]. Los principales desafíos son [DESAFÍOS: cobertura horaria global, calidad consistente entre regiones, formación de agentes en idiomas distintos al corporativo, expectativas culturales diferentes].

**instrucción principal:**
Actúa como mi consultor de operaciones de soporte global. Ayúdame a diseñar la estructura y los procesos para escalar el soporte internacional de forma eficiente y con alta satisfacción del cliente en todos los mercados.

**tarea 1 — Estrategia de cobertura global:**
Diseña una estrategia de cobertura horaria para atender clientes en [ZONAS HORARIAS: especifica los principales mercados]. Evalúa los modelos: "follow the sun" (equipos regionales que se pasan el trabajo), equipo central con horario extendido, soporte asíncrono con SLA adaptados, y combinación con IA para primera línea fuera del horario de oficina. Para cada modelo, indica los requisitos de equipo, el coste aproximado y la calidad de experiencia esperada.

**tarea 2 — Adaptación cultural del soporte por mercado:**
Para los principales mercados que atendemos, describe las expectativas culturales clave que afectan a la experiencia de soporte: nivel de formalidad esperado en la comunicación (tuteo vs usted, fórmulas de saludo), tolerancia a los tiempos de respuesta y manejo de la impaciencia, preferencia por soluciones rápidas vs explicaciones detalladas, canales de soporte preferidos (email, chat, teléfono, WhatsApp, redes sociales) y cómo comunicar malas noticias o limitaciones del producto de forma culturalmente apropiada.

**tarea 3 — Programa de formación para agentes internacionales:**
Diseña un programa de formación de 4 semanas para nuevos agentes de soporte en un mercado internacional. El programa debe cubrir: semana 1 (producto, herramientas y procesos internos), semana 2 (técnicas de comunicación escrita y oral en el idioma del mercado), semana 3 (resolución de casos reales con supervisión), semana 4 (autonomía con revisión de calidad). Incluye también un plan de certificación continua y desarrollo de habilidades a 6 y 12 meses.

**tarea 4 — Métricas de soporte por mercado:**
Define el framework de métricas para medir y comparar la calidad del soporte entre mercados de forma justa. Incluye: métricas operativas (tiempo de primera respuesta, tiempo de resolución, contactos por cliente por mes), métricas de satisfacción (CSAT, NPS por mercado con interpretación cultural), métricas de calidad (puntuación de QA por agente), y cómo normalizar las métricas para comparar equipos en culturas donde las puntuaciones tienden a ser más bajas o más altas por razones culturales.

**tarea 5 — Base de conocimiento multilingüe:**
Crea una estrategia para construir y mantener una base de conocimiento de soporte en múltiples idiomas. Incluye: proceso de creación de contenido (¿se crea en el idioma original o se traduce desde el idioma corporativo?), herramientas de gestión de conocimiento recomendadas con soporte multilingüe, proceso de actualización cuando cambia el producto (evitar que las versiones en diferentes idiomas queden desincronizadas), y cómo medir la efectividad de la base de conocimiento por idioma (tasa de deflexión de tickets, satisfacción con los artículos).

**objetivo final:**
Construir una operación de soporte global que ofrezca una experiencia de cliente consistentemente excelente en todos los mercados, con un equipo eficiente, culturalmente competente y con procesos que escalen sin necesidad de multiplicar linealmente el tamaño del equipo con cada nuevo mercado que se añade.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar operaciones de soporte multilingüe y culturalmente adaptado para clientes globales',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancing global con IA: clientes internacionales y gestión cross-cultural',
                'description'      => 'Usa IA para posicionarte en mercados internacionales como freelance, gestionar clientes de diferentes culturas y optimizar tu propuesta de valor para cada geografía.',
                'prompt_content'   => <<<'EOT'
Eres un consultor experto en estrategia para freelancers y profesionales independientes que quieren trabajar con clientes internacionales. Tu especialidad es ayudar a profesionales a posicionarse globalmente, gestionar la complejidad cultural y operativa de trabajar con clientes de diferentes países, y construir un negocio de servicios freelance sostenible y escalable.

**Contexto del freelance:**
Soy freelance especializado en [ESPECIALIDAD: diseño / desarrollo / marketing / consultoría / redacción / traducción / otro]. Actualmente trabajo principalmente con clientes de [MERCADOS ACTUALES: país o región]. Quiero expandirme a clientes de [MERCADOS OBJETIVO: países o regiones donde quieres trabajar]. Mi principal propuesta de valor es [PROPUESTA DE VALOR: qué te diferencia como profesional].

**instrucción principal:**
Actúa como mi mentor de negocio freelance internacional. Ayúdame a construir la estrategia para atraer y gestionar clientes de los mercados objetivo de forma rentable y sostenible.

**tarea 1 — Posicionamiento en mercados internacionales:**
Analiza cómo debo adaptar mi posicionamiento para los mercados objetivo. Incluye: qué aspectos de mi experiencia o especialización tienen más valor en esos mercados (y por qué pueden valorarme más que a un freelance local), cómo comunicar mi propuesta de valor de forma culturalmente apropiada, qué plataformas de freelance o canales de captación funcionan mejor en esos mercados, y cómo usar mi condición de profesional de otro país como ventaja (perspectiva externa, especialización en el mercado de origen, etc.).

**tarea 2 — Estrategia de tarifas internacionales:**
Ayúdame a diseñar mi estructura de tarifas para clientes internacionales. Cubre: cómo investigar las tarifas de mercado en los países objetivo para mi especialidad, cuándo tiene sentido cobrar más que un profesional local y cómo justificarlo, estrategia de precios por tipo de cliente (startup, PYME, corporación), monedas en las que cobrar y cómo manejar el riesgo de tipo de cambio, y métodos de pago internacional más eficientes por mercado (Wise, Stripe, PayPal, SWIFT, criptomonedas).

**tarea 3 — Gestión de clientes de diferentes culturas:**
Crea una guía práctica para gestionar la relación con clientes de los mercados objetivo. Para cada mercado o cultura relevante, describe: estilo de comunicación preferido (frecuencia, formalidad, canales), expectativas sobre plazos y puntualidad, cómo negociar el scope y los cambios de alcance, cómo manejar los desacuerdos o el feedback negativo de forma culturalmente apropiada, y señales de alerta de que un cliente puede ser problemático en ese contexto cultural.

**tarea 4 — Propuesta e incorporación de clientes internacionales:**
Redacta una propuesta comercial adaptada para clientes del mercado objetivo. La propuesta debe incluir: presentación personal que resuene en esa cultura, descripción del servicio con el lenguaje de valor apropiado para ese mercado, proceso de trabajo claro con hitos y entregables, condiciones comerciales (tarifas, forma de pago, plazos), términos y condiciones básicos que protejan a ambas partes, y cómo hacer el onboarding del cliente para establecer la relación con el pie derecho.

**tarea 5 — Construcción de reputación y red internacional:**
Diseña una estrategia de 6 meses para construir reputación y red de contactos en los mercados objetivo. Incluye: presencia digital optimizada para esos mercados (LinkedIn internacional, portfolio en inglés u otro idioma, casos de estudio relevantes), estrategia de contenido que demuestre expertise para la audiencia internacional, participación en comunidades online y eventos donde se encuentran clientes potenciales de esos mercados, y cómo conseguir los primeros clientes de referencia en cada nuevo mercado (incluso si es con tarifas reducidas al inicio).

**objetivo final:**
Construir un negocio freelance verdaderamente internacional, con clientes de alto valor en múltiples mercados, tarifas superiores a las del mercado local, relaciones profesionales sólidas y sostenibles con clientes de diferentes culturas, y la capacidad de gestionar toda la operativa internacional (pagos, contratos, impuestos) de forma eficiente como profesional independiente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse y gestionar clientes internacionales como freelance o consultor independiente',
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
