<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills489Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Newsletter de marca y email marketing personalizado con IA',
                'description'      => 'Diseña y ejecuta una estrategia de newsletter que combine personalización dinámica, segmentación comportamental y A/B testing automatizado para maximizar el engagement y las conversiones.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en email marketing y estrategia de newsletters con más de ocho años de experiencia ayudando a marcas a construir audiencias de correo electrónico comprometidas que generan ingresos predecibles, combinando técnicas de copywriting de alto rendimiento con las posibilidades de personalización y automatización que ofrece la IA.

El email marketing sigue siendo el canal con mayor ROI en marketing digital: por cada euro invertido, devuelve entre 36 y 42 euros de media. Pero la mayoría de las newsletters son aburridas, genéricas y fácilmente ignorables. Voy a construir una newsletter que la gente espere con ganas cada semana.

**Contexto de mi newsletter:**
[Describe tu marca o proyecto, la audiencia objetivo, el objetivo principal de la newsletter (captación, retención, ventas directas, comunidad), la frecuencia de envío deseada y tu situación actual (base de suscriptores, plataforma de email, métricas actuales)]

**Fase 1: Estrategia editorial y posicionamiento de la newsletter**
Define el propósito único de tu newsletter:
- Propuesta de valor clara: qué obtiene el suscriptor que no puede obtener en ningún otro sitio
- Voz y tono: cómo suena tu newsletter, qué la hace reconocible y diferente
- Frecuencia óptima: cómo elegir la cadencia correcta según el tipo de contenido y la audiencia
- Estructura del contenido: secciones fijas, contenido variable, extensión ideal, formato
- Estrategia de subjects: líneas de asunto que aumentan la tasa de apertura sin clickbait vacío
- Preview text: el complemento perfecto del subject que dobla las oportunidades de apertura

**Fase 2: Segmentación comportamental avanzada**
Personaliza la experiencia de cada suscriptor:
- Criterios de segmentación: actividad reciente (aperturas, clics), intereses declarados, comportamiento de compra
- Segmentos prioritarios: suscriptores activos, inactivos en riesgo, compradores frecuentes, nuevos suscriptores
- Personalización dinámica de contenido: cómo mostrar bloques diferentes según el segmento
- Frecuencia diferenciada: ajustar el ritmo de envío según el nivel de engagement de cada grupo
- Estrategia de reactivación: secuencia de win-back para suscriptores que han dejado de interactuar
- Supresión inteligente: cuándo dejar de enviar en lugar de forzar la comunicación

**Fase 3: Secuencias de nurturing automatizadas**
Construye relaciones a lo largo del tiempo:
- Secuencia de bienvenida: los siete correos esenciales para convertir un nuevo suscriptor en fan
- Secuencia de onboarding de producto: cómo guiar al usuario hacia la primera compra o activación
- Nurturing educativo: cómo enseñar y crear necesidad al mismo tiempo de forma no forzada
- Secuencias basadas en comportamiento: correos que se disparan por acciones específicas (clic en un enlace, visita a una página, abandono de carrito)
- Secuencia post-compra: cómo convertir un comprador en cliente recurrente y en prescriptor

**Fase 4: A/B testing sistemático y optimización continua**
Mejora cada métrica con datos reales:
- Qué testear primero: jerarquía de impacto en las métricas clave
- Subjects: longitud, emojis, personalización, preguntas vs. afirmaciones, urgencia real vs. artificial
- Hora y día de envío: cómo encontrar el momento óptimo para tu audiencia específica
- Diseño: texto plano vs. HTML, imágenes vs. sin imágenes, un CTA vs. múltiples CTAs
- Contenido: longitud, tono, ratio de valor vs. promoción
- Cómo interpretar los resultados: significancia estadística, tamaño de muestra mínimo, iteración

**Fase 5: Métricas predictivas y análisis de rendimiento**
Toma decisiones basadas en datos de calidad:
- KPIs fundamentales: tasa de apertura, CTR, tasa de conversión, ingresos por correo enviado
- Más allá del open rate: por qué Apple Mail Privacy Protection cambió las reglas del juego
- Métricas de salud de lista: crecimiento neto, tasa de baja, tasa de rebote duro y blando
- Lifetime Value del suscriptor de email: cómo calcular lo que vale realmente cada persona en tu lista
- Análisis de cohortes: comparar el rendimiento de suscriptores captados en diferentes períodos
- Reportes mensuales: qué incluir, cómo presentarlos al equipo directivo

Para cada fase, incluye ejemplos de newsletters de referencia en distintos sectores y explica las decisiones específicas que las hacen efectivas. Añade también los errores más costosos de email marketing que debes evitar desde el principio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia completa de newsletter y email marketing personalizado con IA para marcas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de email marketing y flujos transaccionales con IA',
                'description'      => 'Diseña e implementa infraestructuras de email marketing automatizado, desde la arquitectura técnica de los flujos hasta la integración con CRMs y plataformas de datos de clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de marketing automation con especialización en arquitecturas de email marketing a escala, con experiencia diseñando e implementando sistemas de comunicación por correo electrónico para empresas con bases de datos de más de 100.000 suscriptores y múltiples flujos de automatización simultáneos.

La diferencia entre una estrategia de email amateur y una profesional está en la infraestructura técnica: entregabilidad perfecta, flujos lógicos sin errores, integración limpia con los datos del negocio y una arquitectura que escala sin romperse. Necesito construir esto correctamente desde el principio.

**Contexto de mi proyecto:**
[Describe el tamaño de la base de datos de email, la plataforma de email marketing que usas o evalúas, los sistemas con los que debes integrarte (CRM, e-commerce, app) y los flujos de automatización que necesitas con mayor urgencia]

**Módulo 1: Infraestructura técnica de email marketing**
Construye los cimientos correctos:
- Configuración DNS: SPF, DKIM, DMARC y cómo verificar que están correctos
- Calentamiento de dominio y dirección IP: protocolo para nuevas IPs dedicadas
- Gestión de la reputación del remitente: métricas de entregabilidad que debes monitorizar
- Arquitectura de subdominios: separación de emails transaccionales y de marketing
- Gestión de listas y supresiones: sincronización de bajas entre plataformas, limpieza periódica
- Herramientas de monitorización: Postmaster Tools, MXToolbox, herramientas de inbox testing

**Módulo 2: Arquitectura de flujos de automatización**
Diseña lógicas de envío robustas:
- Nomenclatura y documentación de flujos: cómo mantener el sistema comprensible para el equipo
- Gestión de prioridades entre flujos: qué pasa cuando un usuario cae en varios flujos simultáneamente
- Lógica de exclusiones: supresión de usuarios durante periodos específicos, ventanas de silencio
- Control de frecuencia global: cómo evitar saturar a un usuario aunque esté en múltiples flujos
- Gestión de errores: qué ocurre cuando un dato necesario falta o está corrupto
- Testing de flujos: cómo probar una automatización compleja antes de activarla en producción

**Módulo 3: Integración con CRM y plataformas de datos**
Conecta el email con el ecosistema de datos del negocio:
- Sincronización bidireccional CRM-ESP: qué datos fluyen en cada dirección y cuándo
- Event-driven email: cómo disparar emails basados en eventos del producto o del CRM en tiempo real
- Segmentación desde datos externos: usar datos del CRM para segmentar en la plataforma de email
- CDP y email marketing: cómo una Customer Data Platform amplía las posibilidades de personalización
- Trazabilidad de conversiones: attribution de ingresos generados por email de forma precisa

**Módulo 4: Personalización técnica avanzada**
Implementa personalización a escala:
- Liquid y Handlebars: lenguajes de plantilla para personalización dinámica de contenido
- Contenido dinámico basado en segmento: cómo renderizar bloques diferentes según condiciones
- Personalización de asunto y preheader: fusión de datos y lógica condicional
- Recomendaciones de producto por email: integración con motores de recomendación
- Localización y multilingüe: cómo gestionar email marketing en múltiples idiomas desde la misma plataforma

**Módulo 5: Testing, optimización y escalabilidad técnica**
Construye para el crecimiento:
- A/B testing automatizado con significancia estadística configurable
- Envíos programados con optimización de hora por usuario (Send Time Optimization)
- Gestión del volumen en campañas masivas: throttling, envíos por lotes, control de carga
- Monitorización en tiempo real de campañas: alertas de anomalías, dashboards operativos
- Disaster recovery: qué hacer cuando la plataforma de email cae durante un envío crítico

Incluye diagramas de arquitectura de referencia para los flujos de automatización más comunes (bienvenida, abandono de carrito, post-compra, reactivación) y una guía de los errores técnicos más frecuentes que destruyen la entregabilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura técnica de email marketing automatizado, entregabilidad e integración con CRM',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de emails de alta conversión y templates HTML con IA',
                'description'      => 'Crea plantillas de email que combinan diseño visual impactante con estructura de conversión probada, optimizadas para múltiples clientes de correo y modo oscuro.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador especializado en email marketing con experiencia creando templates HTML que funcionan en todos los clientes de correo, maximizan las tasas de conversión y mantienen la identidad de marca en un canal con restricciones técnicas únicas.

El email es el canal de diseño más restrictivo del marketing digital: tablas en lugar de divs, estilos inline, compatibilidad con Outlook 2007, rendimiento en móvil, modo oscuro. Pero cuando el diseño está bien ejecutado, el email convierte mejor que cualquier otro canal. Necesito dominar este campo.

**Contexto de mi situación:**
[Describe el tipo de empresa (B2C, B2B, e-commerce, SaaS), la guía de estilo de la marca, los tipos de emails que más necesitas (newsletters, promocionales, transaccionales, nurturing) y la plataforma de email que usas]

**Bloque 1: Fundamentos del diseño de email**
Entiende las restricciones y oportunidades únicas del canal:
- El modelo de caja en email: por qué las tablas siguen siendo necesarias y cuándo no
- Compatibilidad con clientes de correo: la lista de Outlook, Gmail, Apple Mail y sus peculiaridades
- Estilos inline vs. hojas de estilo en el head: qué funciona dónde
- Sistema de columnas responsivo: cómo crear layouts que colapsan correctamente en móvil
- Tipografía en email: fuentes web (con fallbacks seguros), tamaño mínimo para móvil, interlineado
- Imágenes en email: formatos, peso máximo, texto alternativo imprescindible, email sin imágenes

**Bloque 2: Diseño para la conversión**
Estructura los emails para guiar la acción:
- Jerarquía visual: cómo el ojo recorre un email y cómo aprovecharlo para el CTR
- El principio F y Z en email: patrones de lectura y cómo el diseño los refuerza o sabotea
- Diseño del botón CTA: color, tamaño, texto, posición, espacio en blanco alrededor
- Ratio de texto a imagen: el equilibrio que evita carpetas de spam y maximiza el engagement
- Scroll y longitud: cuándo un email largo convierte más y cuándo menos
- Plantilla de email de conversión: anatomía de un email que vende desde el asunto hasta el pie

**Bloque 3: Modo oscuro y accesibilidad**
Diseña para todos los contextos y usuarios:
- Detección y soporte de modo oscuro: metaquery `prefers-color-scheme` en email
- Variables de color que se adaptan automáticamente: esquema claro y oscuro simultáneo
- Imágenes y logos en modo oscuro: cuándo usar fondos transparentes y cuándo sólidos
- Accesibilidad en email: contraste de colores (WCAG AA mínimo), tamaño de texto, texto alternativo
- Emails accesibles para lectores de pantalla: estructura semántica, títulos, roles ARIA en email
- Testing de modo oscuro: herramientas y proceso de verificación multiplataforma

**Bloque 4: Sistema de componentes y design tokens**
Escala el diseño de email eficientemente:
- Librería de componentes de email: header, footer, hero, product card, testimonial, CTA section
- Design tokens para email: variables de color, espacio, tipografía aplicadas consistentemente
- Proceso de actualización de marca en email: cómo cambiar colores o fuentes en todos los templates
- Documentación del sistema de diseño para email: guía para que otros diseñadores o marketers lo usen
- Integración con herramientas de email builder: exportación desde Figma a HTML limpio de email

**Bloque 5: Testing y optimización de templates**
Asegura que el diseño funciona en todos los contextos:
- Proceso de QA de email: lista de verificación antes de cada envío
- Herramientas de previsualización: Litmus, Email on Acid, procesado en clientes reales
- Métricas de diseño: scroll depth, heat maps de clics, tasa de imagen cargada
- Iteración de diseño basada en datos: cómo usar el A/B testing para mejorar los templates
- Velocidad de carga: optimización del peso total del email para conexiones lentas

Incluye una biblioteca de recursos recomendados (componentes open source, frameworks de email, herramientas de testing) y una guía visual de los errores de diseño de email más frecuentes con sus soluciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de templates de email responsivos, modo oscuro y optimización de conversión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Secuencias de nurturing por email para ventas B2B con IA',
                'description'      => 'Diseña secuencias de email que acompañen a los prospectos a través del funnel de ventas B2B, desde el primer contacto hasta el cierre, con personalización por industria y rol.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas B2B y email marketing consultivo, con experiencia diseñando secuencias de nurturing que acortan los ciclos de venta complejos, mantienen el interés de prospectos durante meses y preparan el terreno para que el equipo comercial cierre con mayor facilidad.

En ventas B2B con ciclos largos, el email es el canal que mantiene viva la relación con prospectos que aún no están listos para comprar. El 80% de las ventas requieren cinco o más seguimientos, pero la mayoría de los vendedores se rinden después del segundo. Necesito un sistema de nurturing que trabaje mientras yo duermo.

**Contexto de mi proceso de ventas:**
[Describe tu producto o servicio B2B, el ciclo de venta típico (duración, etapas, interlocutores), el perfil de tus prospectos (sector, rol, tamaño de empresa) y las principales objeciones que enfrentas]

**Secuencia 1: Nurturing post-primera conversación**
Mantén el impulso tras el primer contacto:
- Email 1 (día 1): resumen de la conversación, próximos pasos acordados, recursos prometidos
- Email 2 (día 3): contenido de valor relacionado con el pain point identificado
- Email 3 (día 7): caso de éxito de cliente similar al prospecto
- Email 4 (día 14): pregunta estratégica para cualificar nivel de urgencia y autoridad
- Email 5 (día 21): invitación a evento, webinar o demostración específica
- Email 6 (día 30): oferta de reunión de seguimiento con agenda clara de valor

**Secuencia 2: Nurturing de largo plazo para prospectos no urgentes**
Mantén la presencia durante ciclos de 6 a 18 meses:
- Cadencia mensual de valor: qué tipo de contenido justifica un email mensual sin vender
- Alertas de intención: cómo detectar cuando el prospecto está más activo y acelerar la secuencia
- Nurturing basado en eventos del prospecto: expansión de empresa, nuevo cargo, cambio regulatorio
- Personalización por industria: adaptar los mensajes según el sector del prospecto
- Reactivación de prospectos fríos: secuencia de tres emails para revivir contactos de más de seis meses

**Secuencia 3: Nurturing multirol en el comité de compras**
Llega a todos los decisores:
- Mapeo de interlocutores: cómo identificar y contactar a los diferentes roles en el proceso
- Mensajes diferenciados por perfil: CEO (impacto en negocio), CTO (integración técnica), CFO (ROI y coste)
- Coordinación de mensajes: cómo asegurarte de que la historia es consistente entre todos los emails
- Gestión del campeón interno: cómo apoyar a tu contacto para que venda internamente por ti
- Nutrición del comité en silencio: cuando no tienes acceso directo a todos los decisores

**Secuencia 4: Nurturing en etapas finales del funnel**
Cierra sin presionar demasiado:
- Email de urgencia legítima: creación de urgencia real basada en beneficios de actuar ahora
- Resumen de valor personalizado: recapitulación del ROI calculado para su caso específico
- Gestión de la última objeción: secuencia específica para las tres objeciones más frecuentes de cierre
- El email del breakup: cuándo y cómo enviar el email de ruptura que reactiva el 20% de los inactivos
- Post-decisión negativa: cómo mantener la relación para reactivar en el futuro

**Análisis y optimización**
Mejora las secuencias con datos:
- Métricas de nurturing B2B: tasa de apertura, respuesta, avance de etapa, tiempo de cierre
- Qué email de la secuencia tiene mayor correlación con el cierre: cómo identificarlo
- Personalización escalable con IA: cómo usar variables dinámicas para personalizar sin escribir manualmente
- Test de mensajes: cómo probar diferentes ángulos de valor en la misma secuencia

Incluye los veinte asuntos de email de nurturing B2B con mayor tasa de apertura (sin clickbait), y un modelo de puntuación de prospectos basado en su comportamiento con los emails de la secuencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Secuencias de nurturing por email para ciclos de venta B2B complejos y multirol',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Emails de onboarding, activación y retención de usuarios con IA',
                'description'      => 'Diseña secuencias de email que guíen a los nuevos usuarios hacia la activación, reduzcan el churn temprano y maximicen el engagement durante el ciclo de vida del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en lifecycle email marketing con especialización en productos SaaS y aplicaciones digitales, con experiencia diseñando secuencias de email que han mejorado la activación de usuarios en más de un 30% y reducido el churn en los primeros 90 días en múltiples productos.

El email de ciclo de vida del usuario es uno de los activos más valiosos y menos aprovechados de cualquier producto digital. Las empresas que dominan este canal tienen tasas de retención significativamente superiores a las que dependen solo del producto para retener. Necesito construir este sistema completo.

**Contexto de mi producto:**
[Describe el tipo de producto (SaaS, app móvil, marketplace, plataforma), el proceso de onboarding actual, las métricas de activación y retención actuales, y los principales momentos de abandono identificados]

**Secuencia 1: Onboarding (días 1-14)**
Guía al usuario hacia el momento aha:
- Email de bienvenida (inmediato): bienvenida cálida, qué esperar, primer paso clarísimo
- Email de primeras acciones (día 1 si no hay actividad): el paso más importante, reducido a lo esencial
- Email de progreso (día 3): celebración del progreso realizado, siguiente paso natural
- Email de valor intermedio (día 7): caso de uso avanzado, inspiración de lo que pueden lograr
- Email de checkpoint (día 14): pregunta de feedback, oferta de ayuda, detección de bloqueos

**Secuencia 2: Activación basada en comportamiento**
Responde a las acciones del usuario en tiempo real:
- Email de feature no descubierta: cuándo y cómo mostrar una funcionalidad clave no usada aún
- Email de integración no configurada: recordatorio de que la integración con otra herramienta multiplica el valor
- Email de primer éxito: celebración del primer resultado real del usuario (primera venta, primer reporte, etc.)
- Email de usuario power: invitación a explorar funcionalidades avanzadas cuando el uso básico es sólido
- Email de bloqueo técnico: detección de errores repetidos y oferta de soporte proactivo

**Secuencia 3: Retención y prevención del churn**
Detecta y actúa ante señales de abandono:
- Modelo de propensión al churn: qué comportamientos predicen el abandono en las próximas cuatro semanas
- Email de reengagement temprano: intervención cuando el uso cae por debajo del umbral de riesgo
- Email del valor olvidado: recordatorio de resultados logrados y el costo de dejar de usar el producto
- Encuesta de satisfacción en momento de riesgo: por qué NPS y CSAT tienen más valor en usuarios en riesgo
- Oferta de retención: cuándo y cómo ofrecer un descuento o una extensión sin devaluar el producto

**Secuencia 4: Expansión y upsell por email**
Crece el MRR desde la base instalada:
- Email de upgrade basado en uso: cuándo el usuario ha alcanzado un límite o necesita más capacidad
- Email de funcionalidad premium: muestra de valor de un plan superior con prueba gratuita
- Email de expansión de equipo: cuando un usuario individual puede convertirse en una cuenta de equipo
- Renovación anual: secuencia de tres emails antes de la fecha de renovación de planes anuales

**Secuencia 5: Reactivación de usuarios inactivos**
Recupera usuarios que han dejado de usar el producto:
- Segmentación de inactivos: diferencia entre inactivos de 30, 60 y 90 días (estrategia distinta para cada grupo)
- Email de cambio: qué ha mejorado desde la última vez que lo usaron
- Email del coste de no usar: el valor que están perdiendo cada semana de inactividad
- Oferta de reactivación: incentivo para volver, con fricción reducida al mínimo
- Email de cancelación próxima: última oportunidad con oferta de pausa en lugar de cancelación

Incluye plantillas de email para los momentos más críticos del ciclo de vida (bienvenida, primer éxito, riesgo de churn, oferta de upgrade) y una guía de las métricas de lifecycle email más importantes y cómo mejorarlas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Secuencias de email para onboarding, activación, retención y reducción del churn en productos digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación interna por email y newsletters de empresa con IA',
                'description'      => 'Diseña una estrategia de comunicación interna por email que mantenga a los empleados informados, comprometidos y alineados con los objetivos de la organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Comunicación Interna con experiencia en el diseño de estrategias de comunicación corporativa que realmente llegan a los empleados, en un entorno donde las bandejas de entrada están saturadas y la competencia por la atención es feroz.

La comunicación interna ineficiente es uno de los mayores costes ocultos de las organizaciones: genera confusión, reduce el compromiso y destruye la cultura corporativa. El email sigue siendo el canal de comunicación interna más universal, pero la mayoría de las empresas lo usan mal. Necesito cambiarlo.

**Contexto de mi organización:**
[Describe el tamaño de la empresa, la estructura (sedes, equipos remotos, distintos países), el sistema de comunicación interna actual, los principales retos de comunicación y el perfil de empleados por perfil profesional]

**Pilar 1: Estrategia de comunicación interna por email**
Define el framework de comunicación:
- Tipos de comunicación interna: informativa, de alineación, de reconocimiento, de urgencia, de cultura
- Política de bandeja de entrada cero corporativa: quién puede enviar a toda la organización y cuándo
- Jerarquía de canales: qué va por email, qué va por Teams/Slack, qué va por SMS de urgencia
- Calendario de comunicaciones recurrentes: newsletter semanal, briefing de dirección mensual, hitos trimestrales
- Voz institucional: cómo suena la empresa cuando habla con sus empleados, qué tono usar y qué evitar

**Pilar 2: Newsletter interna de empresa**
Diseña la comunicación periódica principal:
- Estructura de la newsletter interna: secciones fijas, longitud óptima, formato texto vs. HTML
- Contenido que los empleados realmente leen: victorias de equipo, novedades de producto, historias de personas
- Ratio de contenido corporativo vs. contenido de equipo vs. contenido humano
- Firma y autoría: newsletter firmada por el CEO, por RRHH o por un comité editorial
- Métricas de comunicación interna: tasa de apertura, feedback de empleados, encuestas de pulso

**Pilar 3: Comunicaciones de cambio y momentos críticos**
Gestiona la comunicación en situaciones importantes:
- Anuncios de cambios organizativos: restructuraciones, cambios de liderazgo, nuevos proyectos
- Comunicación de crisis interna: cuándo comunicar, qué decir y qué no decir, tono en momentos difíciles
- Resultados financieros y objetivos: cómo presentar los números de forma que motiven y no generen ansiedad
- Cambios de política: cómo comunicar nuevas normas sin generar resistencia
- Onboarding de nuevos empleados por email: secuencia de bienvenida que acelera la integración cultural

**Pilar 4: Personalización y segmentación interna**
Llega al mensaje correcto a cada persona:
- Segmentación por departamento y rol: comunicaciones específicas para equipos concretos
- Comunicaciones por nivel jerárquico: información diferente para managers y para equipos
- Comunicaciones por sede y zona horaria: en empresas globales, gestión de la relevancia geográfica
- Email en el idioma del empleado: gestión de comunicaciones multilingüe
- Preferencias de comunicación: cómo respetar a los empleados que prefieren menos correos

**Pilar 5: Medición y mejora continua**
Evalúa la efectividad de la comunicación interna:
- Encuestas de pulso vinculadas a comunicaciones: ¿entendió el empleado el mensaje?
- Focus groups de comunicación: qué dicen los empleados en petit comité sobre cómo les comunicamos
- Análisis de comportamiento: qué comunicaciones generan más respuestas, preguntas o reacciones
- Comunicación bidireccional: cómo crear canales de respuesta y retroalimentación genuina
- ROI de la comunicación interna: cómo vincular la mejora de la comunicación con métricas de negocio

Incluye plantillas para las cinco comunicaciones internas más críticas (newsletter mensual, anuncio de cambio organizativo, comunicación de crisis, reconocimiento de logro de equipo, encuesta de pulso) y ejemplos de empresas con comunicación interna ejemplar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de comunicación interna por email y newsletters corporativas para equipos de RRHH',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Newsletter financiera y comunicación de inversores con IA',
                'description'      => 'Crea comunicaciones financieras periódicas de alta calidad para inversores, accionistas y stakeholders financieros que transmitan confianza, transparencia y visión estratégica.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación financiera e investor relations, con experiencia diseñando y redactando comunicaciones periódicas para inversores en empresas desde startups en fase de crecimiento hasta compañías cotizadas, que combinan rigor con narrativa y transparencia con confianza.

La comunicación con inversores es una de las habilidades más infravaloradas en el mundo financiero. Un inversor bien informado y confiado en la gestión es mucho más paciente en momentos difíciles y mucho más activo como prescriptor en momentos de crecimiento. Necesito elevar la calidad de nuestras comunicaciones.

**Contexto de mis comunicaciones:**
[Describe el tipo de empresa (startup, empresa familiar, cotizada, fondo), el perfil de los inversores (ángeles, VCs, family offices, accionistas retail), la frecuencia actual de comunicaciones y los principales retos de la relación con inversores]

**Formato 1: Newsletter mensual de inversores**
La comunicación periódica fundamental:
- Estructura del investor update mensual: qué secciones incluir siempre y cuáles son opcionales
- Métricas financieras: cuáles reportar, con qué nivel de detalle, cómo presentar comparativas YoY y MoM
- Narrativa de negocio: cómo contar la historia del mes sin que parezca un reporte burocrático
- Gestión de malas noticias: cómo comunicar un trimestre difícil sin perder la confianza del inversor
- Solicitudes y seguimiento: cuándo y cómo pedir ayuda a los inversores a través de la newsletter

**Formato 2: Carta trimestral de resultados**
La comunicación más analizada del trimestre:
- Estructura de la carta de resultados: resumen ejecutivo, resultados financieros, logros operativos, perspectivas
- Comparativa con guidance previo: cómo presentar las diferencias entre lo prometido y lo conseguido
- Métricas no financieras: KPIs operativos que complementan y explican los resultados financieros
- Outlook y guidance: cuánta información dar, cómo gestionar la incertidumbre honestamente
- Preguntas y respuestas: cómo anticipar las preguntas más frecuentes en la propia comunicación

**Formato 3: Carta anual del CEO o gestor**
La comunicación estratégica más importante del año:
- La tradición Buffett aplicada a tu empresa: qué hace especial a una carta anual memorable
- Rendición de cuentas de los objetivos del año anterior: honestidad radical vs. narrativa suavizada
- Visión estratégica: cómo comunicar la dirección a largo plazo con claridad y sin overpromising
- Reflexiones sobre el sector y el entorno: posicionar la empresa en el contexto macroeconómico
- Cultura y equipo: por qué las mejores cartas anuales hablan de las personas

**Formato 4: Comunicaciones de hitos y eventos especiales**
Momentos que requieren comunicación específica:
- Anuncio de ronda de financiación: cómo comunicarlo a los inversores existentes antes que al mercado
- Comunicación de adquisición o desinversión: qué, cómo y cuándo contar
- Comunicación de cambio de rumbo o pivote: cómo presentar un cambio de estrategia como decisión de fortaleza
- Alerta temprana de dificultades: cuándo y cómo comunicar proactivamente un periodo difícil

**Formato 5: Portal del inversor y comunicaciones digitales**
El ecosistema de comunicación de investor relations:
- Estructura de un portal de inversores efectivo: qué documentos y actualizaciones debe contener
- Uso de vídeo en comunicaciones de inversores: cuando un vídeo del CEO añade más valor que un email
- Modelo de preguntas frecuentes del inversor: cómo reducir el volumen de consultas individuales
- Gestión de la base de datos de inversores: segmentación, preferencias de comunicación, historial

Incluye ejemplos de las mejores investor newsletters del ecosistema emprendedor español e internacional, y plantillas comentadas para el investor update mensual y la carta anual del CEO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Comunicaciones de investor relations: newsletters para inversores, cartas de resultados y updates trimestrales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicaciones legales por email y alertas normativas con IA',
                'description'      => 'Diseña comunicaciones legales claras para clientes, equipos internos y organismos reguladores, y crea newsletters de actualización normativa que aporten valor real a tu audiencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado con especialización en comunicación jurídica, con experiencia traduciendo el lenguaje legal complejo a comunicaciones claras y accionables para clientes empresariales, diseñando newsletters de actualización normativa que aportan valor real y gestionando las comunicaciones formales con organismos reguladores.

La comunicación es una de las competencias más infravaloradas en la práctica legal. Los abogados que saben comunicar con claridad tienen clientes más satisfechos, menos malentendidos y una diferenciación real frente a la competencia. Necesito elevar la calidad de todas mis comunicaciones escritas.

**Contexto de mi práctica:**
[Describe tu área de práctica, el tipo de clientes que tienes (empresas, particulares, administraciones), los canales de comunicación que más usas y los principales problemas de comunicación que has identificado]

**Área 1: Comunicaciones legales con clientes por email**
Eleva la calidad de la comunicación cliente-abogado:
- Estructura del email legal efectivo: cómo organizar la información para que el cliente actúe
- Lenguaje llano en comunicaciones legales: cómo reescribir el lenguaje jurídico sin perder precisión
- Gestión de expectativas por email: cómo comunicar plazos, riesgos y probabilidades de éxito
- Comunicación de malas noticias: estructura para dar noticias difíciles de forma profesional y empática
- Seguimiento de asuntos: cómo mantener al cliente informado sin generar facturación innecesaria
- Email de cierre de asunto: resumen final, lecciones aprendidas, próximas recomendaciones

**Área 2: Newsletter jurídica de actualización normativa**
Posiciónate como referencia de autoridad:
- Modelo de newsletter jurídica exitosa: frecuencia, extensión, nivel de profundidad técnica
- Selección de contenido: cómo elegir qué novedades normativas merecen comentario y cuáles no
- Estructura del análisis jurídico en newsletter: novedad, impacto práctico, recomendación de acción
- Diferenciación: por qué tu newsletter debe ser diferente a las circulares genéricas de los grandes despachos
- Segmentación por área de práctica: newsletters diferentes para clientes de distintos sectores
- Llamada a acción: cómo convertir lectores de newsletter en consultas reales

**Área 3: Comunicaciones con organismos reguladores**
Gestiona las relaciones con la Administración:
- Escritos administrativos: estructura, tono y elementos formales que no pueden faltar
- Recursos y alegaciones: cómo presentar argumentos de forma clara y ordenada
- Comunicaciones con la AEAT, la CNMC, el Banco de España o la AEPD: particularidades por organismo
- Seguimiento de expedientes administrativos: cómo mantener comunicación efectiva con la Administración
- Documentación de comunicaciones: registro y archivo para futuras referencias y litigios

**Área 4: Comunicaciones internas en despachos**
Mejora la comunicación entre profesionales del despacho:
- Briefings de asuntos: cómo informar a compañeros de forma eficiente para colaboración
- Emails de escalado interno: cuándo y cómo pedir ayuda a un socio sin parecer inseguro
- Documentación de estrategia procesal: cómo registrar las decisiones clave para el expediente
- Informes de estado de asuntos para socios y gestión: contenido y frecuencia adecuados

**Área 5: Gestión de comunicaciones en situaciones de crisis legal**
Navega las comunicaciones más delicadas:
- Comunicación ante una demanda inesperada: primeras horas, primeros emails, coordinación interna
- Gestión de medios en asuntos de perfil público: qué comunicar, qué no comunicar y cuándo
- Coordinación con el departamento de comunicación del cliente durante litigios
- Post-resolución: cómo comunicar el resultado de un asunto a todas las partes involucradas

Incluye plantillas de email para las diez comunicaciones legales más frecuentes (confirmación de instrucciones, informe de estado de asunto, comunicación de resolución, respuesta a requerimiento administrativo) y un checklist de calidad para revisar cualquier comunicación legal antes de enviarla.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicaciones legales con clientes, newsletters jurídicas y escritos a organismos reguladores',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Emails de soporte proactivo y retención de clientes con IA',
                'description'      => 'Diseña secuencias de email que anticipen problemas de los clientes, reduzcan el volumen de tickets y conviertan cada interacción de soporte en una oportunidad de fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Success y Soporte con experiencia implementando estrategias de comunicación proactiva por email que reducen el volumen de tickets de soporte en un 30-40% y mejoran significativamente la satisfacción y retención de clientes.

El mejor soporte es el que nunca llega porque el cliente encontró la respuesta antes de tener el problema. El email proactivo es la herramienta más potente para reducir la fricción, mejorar la experiencia y liberar a tu equipo para trabajar en casos de alto valor. Necesito construir este sistema.

**Contexto de mi equipo:**
[Describe el tipo de producto o servicio, el tamaño del equipo de soporte, el volumen de tickets mensual, los problemas más frecuentes y las herramientas de ticketing y email que usas]

**Bloque 1: Soporte proactivo basado en comportamiento**
Anticipa los problemas antes de que lleguen:
- Identificación de los momentos de fricción más frecuentes: análisis de tickets por categoría y momento del ciclo de vida
- Emails de anticipación de problemas: enviar la solución antes de que el cliente tenga el problema
- Detección de señales de frustración: comportamientos que predicen un ticket inminente
- Email de check-in estratégico: cuándo contactar proactivamente y qué preguntar
- Comunicación de mantenimiento y cambios: cómo avisar con suficiente antelación y claridad

**Bloque 2: Emails de onboarding técnico**
Reduce la fricción en la fase de inicio:
- Secuencia de onboarding para clientes con configuración compleja: guías paso a paso por email
- Emails de verificación de configuración: comprobaciones automáticas y comunicación de estado
- Recursos de aprendizaje por email: cuándo enviar qué tipo de documentación para que sea útil
- Emails de primer uso: cómo acompañar las primeras acciones con comunicación de apoyo
- Escalado proactivo a soporte humano: cuándo el email automático debe ceder el paso a una persona

**Bloque 3: Gestión del cliente en momentos críticos**
Comunica bien en situaciones difíciles:
- Comunicación de incidentes y caídas del servicio: plantilla de email para diferentes niveles de gravedad
- Seguimiento post-incidente: email de resolución, análisis de causa raíz, medidas preventivas
- Gestión de clientes insatisfechos: secuencia de recuperación emocional y funcional
- Escalado de tickets por email: cómo comunicar internamente sin que el cliente sienta que cae en un hoyo
- Cierre de tickets con aprendizaje: cómo convertir la resolución en una oportunidad de fidelización

**Bloque 4: Emails de expansión desde soporte**
Convierte el soporte en crecimiento:
- Identificación de oportunidades de upsell en interacciones de soporte
- Email de sugerencia de funcionalidad no conocida: cuando la solución al problema del cliente es una función premium
- Encuesta de satisfacción post-resolución (CSAT): diseño, timing y cómo actuar sobre los resultados
- NPS en momentos de alta satisfacción: cuándo y cómo pedirlo por email para maximizar la tasa de respuesta
- Solicitud de reseña o testimonio: cuándo y cómo pedirlo de forma natural

**Bloque 5: Métricas y optimización del email de soporte**
Mide y mejora continuamente:
- KPIs de email proactivo: reducción de tickets evitados, CSAT de clientes que recibieron comunicación proactiva
- First Contact Resolution (FCR) mejorado por email: cómo el email reduce la necesidad de contactos múltiples
- Deflexión de tickets: cómo calcular los tickets evitados gracias a las comunicaciones proactivas
- A/B testing en emails de soporte: qué probar para mejorar la tasa de autoservicio
- Feedback loop: cómo las respuestas de los clientes a los emails de soporte mejoran la base de conocimiento

Incluye plantillas de email para los diez escenarios de soporte más frecuentes (comunicación de incidente, resolución de ticket complejo, respuesta a cliente insatisfecho, check-in de adopción, solicitud de CSAT) y un sistema de scoring de calidad de comunicación para el equipo de soporte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Emails de soporte proactivo, reducción de tickets y fidelización de clientes por email',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Newsletter de autoridad y captación de clientes para freelancers con IA',
                'description'      => 'Construye una newsletter que posicione tu expertise freelance, atraiga clientes de alta calidad y genere ingresos recurrentes a través de contenido de valor y ofertas bien calibradas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio para freelancers y solopreneurs con experiencia ayudando a profesionales independientes a construir newsletters que se convierten en su principal canal de adquisición de clientes, posicionamiento de autoridad e incluso en fuentes de ingresos directos a través de productos y servicios digitales.

Una newsletter bien construida es el activo más valioso que puede tener un freelance: es tu plataforma propia, independiente de algoritmos, donde construyes una relación directa y de confianza con personas que pueden contratarte o recomendarte. Necesito construir la mía de forma estratégica.

**Contexto de mi práctica freelance:**
[Describe tu especialidad profesional, el tipo de clientes que quieres atraer, tu nivel actual de presencia en línea, si tienes audiencia en otras plataformas y el objetivo principal de la newsletter: clientes directos, posicionamiento, ingresos de información]

**Módulo 1: Estrategia y posicionamiento de la newsletter**
Define el espacio único que vas a ocupar:
- La ecuación de la newsletter rentable: audiencia específica + problema concreto + perspectiva única
- Cómo elegir el nicho de contenido que atrae a tus clientes ideales sin excluir oportunidades
- Propuesta de valor de la newsletter: qué obtiene el suscriptor en cada edición que no puede obtener en otro sitio
- Nombre y posicionamiento: cómo llamar a tu newsletter para que sea memorable y descriptiva
- Página de suscripción: los elementos que convierten visitantes en suscriptores con tu propuesta de valor

**Módulo 2: Estructura de contenido que genera autoridad**
Crea ediciones que demuestren tu expertise:
- El formato de newsletter de autoridad para freelancers: estructura que educa, entretiene y vende sin vender
- Tipos de contenido que funcionan: análisis de casos reales, lecciones aprendidas en proyectos, errores comunes del sector, tendencias con perspectiva crítica
- Cuánto revelar: el equilibrio entre dar valor gratuito y reservar el expertise para clientes de pago
- Historia personal y vulnerabilidad controlada: cómo compartir experiencias propias sin sonar autocomplaciente
- Citas y referencias: cómo usar el trabajo de otros para enriquecer tu perspectiva sin parecer un curador

**Módulo 3: Crecimiento de la lista de suscriptores**
Construye una audiencia cualificada:
- Estrategias de crecimiento orgánico: LinkedIn, Twitter/X, comunidades del sector, colaboraciones
- Lead magnets para freelancers: qué tipo de recurso gratuito atrae a clientes potenciales reales
- Apariciones en otras newsletters: guest posts como estrategia de crecimiento de alta calidad
- Recomendaciones de otras newsletters (Sparkloop, Beehiiv Boosts): cuando tiene sentido comprar crecimiento
- Métricas de calidad vs. cantidad: por qué 500 suscriptores relevantes valen más que 5.000 genéricos

**Módulo 4: Monetización de la newsletter**
Convierte lectores en ingresos:
- Soft selling por email: cómo mencionar tus servicios sin parecer que solo escribes para vender
- Call to action de servicios: cuándo incluirlos y cómo escribirlos para que generen consultas
- Caso de estudio como venta encubierta: cómo contar un proyecto de cliente para demostrar valor
- Productos de información: cómo saber si tu audiencia está lista para un ebook, curso o workshop
- Patrocinios de newsletter: cuándo y cómo monetizar con sponsors sin dañar la confianza de tu audiencia

**Módulo 5: Sistemas y operación eficiente**
Mantén la consistencia sin agotarte:
- Proceso de producción de la newsletter en menos de dos horas semanales
- Sistema de captura de ideas: cómo no quedarte sin temas usando IA como asistente de ideación
- Reutilización de contenido: cómo un email se convierte en un post de LinkedIn y viceversa
- Batch writing: escribir varias ediciones de una vez para no depender de la inspiración semanal
- Plantilla de producción de newsletter con Claude: cómo usar IA para acelerar sin perder la voz propia

Incluye un plan de lanzamiento de 30 días para una newsletter de cero, con los hitos semanales y las acciones específicas de cada día, y una guía de los errores más frecuentes que cometen los freelancers al construir su newsletter.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Newsletter de autoridad para freelancers: posicionamiento, crecimiento y captación de clientes por email',
                'vote_score'       => 46,
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
