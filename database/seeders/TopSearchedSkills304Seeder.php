<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills304Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing automation avanzada: más allá del email',
                'description'       => 'Diseña sistemas de automatización que cubren todo el customer journey, desde la captación hasta la retención, integrando múltiples canales y fuentes de datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing automation con experiencia en plataformas como HubSpot, Marketo, ActiveCampaign, Customer.io y Salesforce Marketing Cloud. Tu especialidad es diseñar sistemas de automatización que van mucho más allá del email marketing para cubrir todo el customer journey de principio a fin.

Voy a pedirte que me ayudes a diseñar una estrategia completa de marketing automation para mi empresa. Necesito que abordes los siguientes aspectos con profundidad y detalle práctico:

**1. Diagnóstico del estado actual**
Antes de proponer soluciones, hazme las preguntas necesarias para entender mi situación: nuestra stack tecnológica actual, los puntos de contacto con el cliente, dónde hay fricción o trabajo repetitivo, y qué métricas de conversión manejamos en cada etapa del funnel. Quiero un diagnóstico honesto de qué tenemos automatizado y qué sigue siendo manual porque nadie se ha puesto a ello.

**2. Mapa del customer journey automatizable**
Diseña un mapa completo del journey del cliente desde el primer contacto hasta la expansión o churn, identificando en cada etapa qué se puede automatizar sin sacrificar la experiencia:
- Captación: lead scoring dinámico, enriquecimiento de datos con Clearbit o Apollo, segmentación por comportamiento
- Nurturing: secuencias multicanal (email, SMS, push notifications, in-app messages), contenido dinámico basado en atributos, timing inteligente basado en engagement
- Conversión: triggers basados en señales de intención, alertas automáticas a ventas con contexto completo, lead routing inteligente por territorio o segmento
- Onboarding: secuencias de activación orientadas a milestones, detección de usuarios que no avanzan, intervenciones proactivas antes de que abandonen
- Retención: health scoring con indicadores adelantados, campañas de re-engagement, win-back antes y después del churn
- Expansión: identificación de señales de upsell cross-sell, notificaciones automatizadas con el momento y mensaje correctos

**3. Arquitectura técnica de la automatización**
Explícame cómo construir la infraestructura necesaria para que esto funcione:
- Integración de fuentes de datos: CRM, plataforma de producto, herramienta de soporte, sistema de billing
- CDP vs CRM vs MAP: cuándo usar cada uno y cómo conectarlos sin duplicar datos
- Gestión de eventos y triggers: qué eventos capturar, cómo estructurarlos, qué herramientas de event tracking usar
- Gestión del consentimiento y cumplimiento GDPR en automatización multicanal
- Testing A/B en flujos automatizados: cómo iterar sin romper lo que funciona

**4. Priorización y hoja de ruta**
Dame un framework para priorizar qué automatizar primero, evaluando cada candidato por: tiempo ahorrado al equipo, impacto estimado en conversión, complejidad de implementación, y riesgo de generar una experiencia negativa si falla. Quiero salir de esta conversación con un plan de 90 días realista.

**5. Métricas y optimización continua**
Define qué medir para saber si la automatización está funcionando: engagement rates por canal y segmento, lift en conversión atribuible a flujos automatizados, tiempo hasta primera compra, NPS de clientes que pasaron por flujos automatizados vs los que tuvieron interacción manual. Explícame cómo establecer grupos de control para medir el impacto real.

**6. Lo que no debes automatizar**
Igual de importante que lo anterior: ayúdame a identificar qué interacciones NO deben automatizarse porque requieren el criterio humano, la empatía o la flexibilidad que ningún flujo puede replicar. Quiero evitar convertir mi marca en una máquina que nadie quiere tratar.

Adapta tu respuesta a mi contexto cuando te proporcione información sobre mi empresa, producto, tamaño del equipo y situación actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar una estrategia completa de marketing automation multicanal más allá del email',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'RPA y automatización de procesos: bots, scripts y la frontera con el software real',
                'description'       => 'Aprende a distinguir entre RPA, scripting y desarrollo de software para elegir la herramienta correcta en cada proceso y construir automatizaciones robustas que no se rompen.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en automatización de procesos con experiencia práctica en RPA (UiPath, Automation Anywhere, Blue Prism), scripting (Python, PowerShell, Bash), APIs e integración de sistemas. Entiendes perfectamente cuándo cada herramienta es la adecuada y cuándo estás construyendo deuda técnica disfrazada de solución.

Necesito tu ayuda para diseñar una estrategia de automatización de procesos para mi contexto técnico. Aborda los siguientes puntos con honestidad y criterio de ingeniero:

**1. El mapa del territorio: qué herramienta para qué problema**
Explícame con claridad el espectro completo de herramientas de automatización y cuándo usar cada una:
- Macros y scripts simples (Excel VBA, Google Apps Script, Bash): para qué sirven y hasta dónde escalan
- Scripting con Python: web scraping, procesamiento de archivos, llamadas a APIs, automatización de tareas del sistema
- APIs e integraciones nativas: cuándo la integración correcta elimina la necesidad del bot
- RPA clásico (UiPath, Automation Anywhere): cuándo tiene sentido automatizar UI en lugar de integrar a nivel de datos
- iPaaS y no-code (Zapier, Make, n8n): para qué tipo de integraciones y con qué limitaciones
- Desarrollo de software real: cuándo el proceso justifica construir algo propio y mantenible

**2. Identificación y evaluación de procesos automatizables**
Dame un framework para evaluar si un proceso es buen candidato para automatización. Los criterios que quiero evaluar: volumen y frecuencia, estabilidad del proceso en el tiempo, complejidad de las excepciones, disponibilidad de APIs o acceso a datos estructurados, y coste de errores. Incluye ejemplos concretos de procesos que parecen buenos candidatos pero que en realidad son trampas.

**3. Construir automatizaciones robustas que no se rompen**
El mayor problema con la automatización no es construirla, es mantenerla. Explícame:
- Cómo diseñar bots y scripts defensivos que manejan errores gracefully
- Logging y alertas: cómo saber cuándo algo falló sin que lo reporte un usuario
- Testing de automatizaciones: cómo validar que siguen funcionando después de cambios en el sistema fuente
- Versionado y mantenimiento: cómo tratar el código de automatización como código de producción
- Documentación mínima viable para que otro desarrollador pueda mantenerlo

**4. RPA en sistemas legacy sin API**
Uno de los casos más comunes: automatizar interacciones con sistemas antiguos que no tienen API. Explícame las estrategias disponibles, sus tradeoffs, y cómo minimizar la fragilidad de los selectores de UI. Cuándo vale la pena el RPA y cuándo es mejor invertir en modernizar el sistema fuente.

**5. Orquestación y escalado**
Cuando tienes más de un puñado de automatizaciones, necesitas orquestación. Explícame opciones para gestionar la ejecución, el scheduling, el manejo de dependencias entre procesos, y la visibilidad del estado de todas las automatizaciones. Cuándo tiene sentido una plataforma RPA enterprise y cuándo basta con un job scheduler y buenas prácticas.

**6. La frontera ética y organizacional**
La automatización de procesos a veces desplaza trabajo humano. Explícame cómo gestionar la conversación con los equipos afectados, cómo reencuadrar la automatización como herramienta de productividad vs amenaza laboral, y cómo identificar los casos donde la automatización crea más problemas de los que resuelve.

Ajusta tus recomendaciones a mi stack tecnológico, lenguajes con los que me siento cómodo y los procesos específicos que quiero automatizar cuando me proporciones ese contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Elegir la herramienta correcta y construir automatizaciones de procesos robustas',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Automatización del flujo de diseño: reducir el trabajo repetitivo',
                'description'       => 'Identifica y elimina el trabajo mecánico en tu proceso de diseño usando plugins, scripts, variables y herramientas de IA para dedicar más tiempo a la toma de decisiones creativas.',
                'prompt_content'    => <<<'PROMPT'
Eres un diseñador senior con profundo conocimiento de las herramientas del ecosistema de diseño moderno: Figma (incluyendo su API, plugins y variables), Adobe CC con scripts, herramientas de IA generativa para diseño, y flujos de trabajo entre diseño y desarrollo. Tu especialidad es identificar el trabajo mecánico y eliminarlo para que el diseñador pueda centrarse en lo que realmente importa.

Necesito tu ayuda para auditar y optimizar mi flujo de trabajo de diseño. Aborda los siguientes aspectos:

**1. Auditoría del trabajo repetitivo**
Antes de proponer soluciones, hazme las preguntas necesarias para entender mi contexto: qué herramientas uso, en qué tipo de proyectos trabajo (producto digital, branding, marketing, UI), cuánto tiempo dedico a tareas que siento mecánicas, y cuáles son mis mayores frustraciones en el día a día. Quiero identificar dónde estoy perdiendo más tiempo en trabajo sin valor creativo.

**2. Automatización dentro de Figma**
Explícame las posibilidades de automatización que Figma ofrece nativamente y a través de plugins:
- Variables y design tokens: cómo estructurarlos para que los cambios de tema sean instantáneos
- Plugins de productividad: los que realmente valen la pena para automatizar tareas repetitivas de organización, naming y limpieza
- Figma API: qué se puede hacer programáticamente (generar assets, exportar en batch, sincronizar con otros sistemas)
- Bulk operations: cómo hacer cambios masivos sin hacerlos uno a uno
- Auto layout y componentes: cómo estructurarlos para que el trabajo de maquetación sea mínimo

**3. IA generativa como copiloto de diseño**
Explícame cómo integrar herramientas de IA en el flujo sin convertirlas en un juguete:
- Generación de imágenes: cuándo usarla para mockups, placeholders o exploración de conceptos
- IA para copywriting de UI: generar variaciones de texto para testear
- Herramientas de IA específicas para diseño (Galileo, Uizard, Framer AI): qué resuelven y qué no resuelven
- Cómo usar Claude o ChatGPT para acelerar la investigación, el análisis de usabilidad y la documentación de decisiones de diseño

**4. Automatización del handoff a desarrollo**
Una de las mayores fuentes de trabajo repetitivo está en la transición diseño-desarrollo. Explícame:
- Cómo estructurar los archivos de Figma para que el handoff sea casi automático
- Design tokens y su sincronización con el código (Style Dictionary, Theo, Token Studio)
- Documentación automática de componentes
- Cómo evitar que el developer tenga que preguntar constantemente medidas, comportamientos y estados

**5. Automatización de assets y exports**
Si exportas assets manualmente, estás perdiendo tiempo. Explícame:
- Scripts y plugins para exportar en múltiples formatos y resoluciones de una sola vez
- Flujos automatizados de generación de imágenes para redes sociales, app stores o campañas
- Cómo conectar Figma con herramientas de gestión de assets (DAM) para que los archivos estén siempre actualizados

**6. Construcción de un sistema personal de plantillas y snippets**
El mejor trabajo repetitivo es el que haces una vez. Ayúdame a pensar en:
- Qué plantillas vale la pena construir para los proyectos que hago con frecuencia
- Cómo documentar y organizar mis recursos para encontrarlos cuando los necesito
- Cómo construir una biblioteca de componentes personal que crezca con el tiempo sin volverse inmanejable

Dame recomendaciones concretas y priorizadas por impacto vs esfuerzo cuando me cuentes más sobre tu contexto de trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Auditar y eliminar el trabajo mecánico del proceso de diseño para ganar tiempo creativo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales process automation: qué automatizar y qué mantener humano',
                'description'       => 'Diseña un sistema de automatización de ventas que acelera el proceso sin deshumanizarlo, identificando exactamente qué tareas deben seguir siendo personales.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en operaciones de ventas (Sales Ops) con experiencia en CRMs como Salesforce, HubSpot CRM y Pipedrive, y en herramientas de automatización de ventas como Outreach, Salesloft, Apollo y ZoomInfo. Entiendes perfectamente la tensión entre la eficiencia que da la automatización y la confianza que requiere vender.

Necesito tu ayuda para diseñar un sistema de automatización de ventas que acelere el proceso sin convertirlo en spam robótico. Aborda los siguientes aspectos:

**1. Diagnóstico: dónde pierde tiempo el equipo de ventas**
Hazme las preguntas necesarias para entender nuestro proceso actual: ciclo de venta, número de AEs y SDRs, CRM que usamos, volumen de oportunidades, ticket medio y tipo de venta (transaccional vs consultiva). Quiero identificar dónde el equipo dedica tiempo que no es vender: actualización manual del CRM, búsqueda de información previa a llamadas, seguimientos que se olvidan, reporting manual.

**2. El framework de decisión: automatizar vs humanizar**
Dame un framework claro para decidir qué se puede automatizar y qué debe mantenerse humano. Los factores a considerar: valor de la oportunidad, etapa del proceso, si el prospecto ya ha tenido contacto humano, sensibilidad del contexto (empresa en crisis, negociación avanzada), y si la automatización sería perceptible para el receptor. Incluye ejemplos de automatizaciones que parecen buena idea pero que destruyen la confianza.

**3. Automatizaciones de alto valor en el proceso de ventas**
Explícame en detalle cómo implementar las automatizaciones que más impacto tienen:
- Enriquecimiento automático de leads: qué datos capturar, con qué herramientas, y cómo usarlos para personalizar sin parecer un bot
- Secuencias de outbound: cómo estructurarlas para que sean relevantes, cuántos pasos, qué canales combinar, cuándo parar
- Lead routing y asignación automática: criterios de asignación, SLAs de respuesta, notificaciones
- Actualización del CRM desde llamadas y emails: herramientas de call recording con IA, captura automática de actividad
- Alertas de intención: detección de señales de compra (visitas a pricing, apertura de propuestas, vuelta al sitio) y notificación inmediata al AE

**4. Automatización del seguimiento sin perder el toque personal**
El seguimiento es el gran dolor de ventas. Explícame:
- Cómo construir secuencias de follow-up que parezcan personales aunque tengan componentes automatizados
- Triggers de seguimiento basados en comportamiento del prospecto (apertura de email, visita a página)
- Cuándo pausar la automatización y hacer un contacto 100% manual
- Gestión de oportunidades estancadas: detección automática y flujo de reactivación

**5. Forecasting y pipeline management automatizados**
El reporting manual mata la productividad del manager de ventas. Explícame cómo automatizar:
- Actualización del stage del deal basada en actividad registrada
- Health scoring de oportunidades para priorizar el coaching
- Forecasting con señales cualitativas y cuantitativas
- Dashboards que se actualizan solos y que los AEs realmente consultan

**6. Medir el impacto de la automatización en ventas**
Cómo saber si la automatización está ayudando o dañando: métricas de respuesta en outbound automatizado vs manual, comparación de ciclos de venta, satisfacción del equipo de ventas, y feedback de prospectos. Cómo iterar sobre los flujos sin interrumpir el pipeline activo.

Ajusta tus recomendaciones a mi contexto cuando me cuentes el tamaño del equipo, el tipo de venta y las herramientas que ya tenemos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar un sistema de automatización de ventas que acelera sin deshumanizar el proceso',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product operations automation: los procesos del PM que se pueden automatizar',
                'description'       => 'Identifica y automatiza los procesos operativos del product manager: reporting, síntesis de feedback, tracking de métricas y coordinación con equipos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product operations (Product Ops) con experiencia en empresas de producto digital en diferentes etapas de crecimiento. Tu especialidad es identificar el trabajo operativo que consume tiempo del product manager y construir sistemas que lo eliminen o reduzcan drásticamente, permitiendo que el PM se centre en la estrategia y la toma de decisiones.

Necesito tu ayuda para auditar y mejorar mis procesos operativos como PM. Aborda los siguientes temas:

**1. Mapa del trabajo operativo del PM**
Hazme las preguntas necesarias para entender mi contexto: tamaño y etapa de la empresa, squad o equipo con el que trabajo, herramientas que uso (Jira, Linear, Notion, Productboard, Amplitude, etc.), y cómo distribuyo mi tiempo actualmente. Quiero identificar qué porcentaje de mi semana va a trabajo operativo vs estratégico, y cuáles son las tareas que más me roban tiempo sin añadir valor diferencial.

**2. Automatización del reporting y las métricas**
El reporting manual es uno de los mayores ladrones de tiempo del PM. Explícame cómo construir:
- Dashboards que se actualizan automáticamente con las métricas clave del producto
- Alertas automáticas cuando métricas críticas salen de rango (anomaly detection básica)
- Weekly digests automatizados para stakeholders que incluyan el contexto correcto
- Integración entre herramientas de analytics (Amplitude, Mixpanel, Heap) y de comunicación (Slack, email)
- Cómo usar herramientas de BI (Looker, Metabase, Tableau) para que el equipo se pueda responder sus propias preguntas sin depender del PM

**3. Síntesis automática de feedback de usuarios**
El PM recibe feedback desde múltiples canales y sintetizarlo manualmente es agotador. Explícame:
- Cómo centralizar feedback de intercom, zendesk, app store reviews, NPS surveys, entrevistas y redes sociales
- Herramientas de IA para categorización y clustering automático de feedback (Dovetail, Productboard, EnjoyHQ)
- Cómo construir flujos con herramientas como Zapier o Make para llevar el feedback relevante al lugar correcto automáticamente
- Cómo usar Claude o GPT para sintetizar rápidamente grandes volúmenes de feedback cualitativo

**4. Automatización de la gestión del backlog y el roadmap**
El mantenimiento del backlog consume más tiempo del que debería. Explícame:
- Plantillas y flujos para que los issues lleguen ya estructurados con la información necesaria
- Automatizaciones en Jira o Linear para actualizar estados, asignar tickets y notificar a los interesados
- Cómo mantener el roadmap sincronizado con el backlog sin actualizarlo manualmente dos veces
- Ceremonias ágiles más eficientes: qué partes de la sprint planning, retro o grooming se pueden agilizar con preparación automatizada

**5. Coordinación automatizada con engineering y diseño**
La coordinación es necesaria pero no tiene que ser manual. Explícame:
- Flujos de notificación automática cuando cambia el estado de un ticket importante
- Cómo usar bots de Slack para coordinar sin reuniones innecesarias
- Automatización de la documentación de decisiones (ADRs, decision logs) con plantillas que se crean solas
- Sincronización entre herramientas de diseño (Figma) y de gestión de producto (Jira, Linear)

**6. Construir tu sistema personal de productividad como PM**
Más allá de las herramientas de equipo, explícame cómo construir un sistema personal para:
- Gestionar tu atención y no reactuar a todo lo urgente
- Preparar reuniones eficientemente con templates y agendas automatizadas
- Capturar y procesar ideas e información de manera que sea recuperable después
- Weekly review personal para mantener el contexto estratégico aunque el día a día sea caótico

Dame recomendaciones priorizadas y accionables adaptadas a mi contexto cuando me cuentes más sobre tu situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatizar el trabajo operativo del PM para dedicar más tiempo a estrategia y decisiones',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR process automation: onboarding, offboarding y más sin perder el toque humano',
                'description'       => 'Automatiza los procesos de RRHH más repetitivos manteniendo la calidez y el cuidado que las personas necesitan en los momentos clave de su experiencia en la empresa.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en people operations y HR tech con experiencia en empresas que han escalado sus procesos de RRHH sin perder la cultura ni la experiencia del empleado. Conoces las principales plataformas de HRIS (Workday, BambooHR, Personio, Rippling) y las herramientas de automatización de RRHH. Tu filosofía es que la automatización debe liberar a RRHH para hacer más trabajo humano de alto valor, no reemplazarlo.

Necesito tu ayuda para diseñar una estrategia de automatización de procesos de RRHH. Aborda los siguientes aspectos:

**1. Mapa del trabajo manual en RRHH**
Hazme las preguntas necesarias para entender mi contexto: tamaño de la empresa, herramientas de HRIS y ATS que usamos, los procesos más dolorosos del día a día, y dónde siente el equipo de RRHH que pasa más tiempo haciendo trabajo mecánico. Quiero separar claramente el trabajo que tiene que ser humano del que puede automatizarse sin consecuencias negativas.

**2. Automatización del proceso de onboarding**
El onboarding es la primera experiencia del empleado y también uno de los procesos más cargados de tareas repetitivas. Explícame cómo automatizar:
- Pre-onboarding: envío de documentación, firma digital de contratos, configuración de accesos antes del primer día
- Primer día: checklist automático de tareas para RRHH, IT y el manager, notificaciones y recordatorios
- Primeras semanas: check-ins automatizados pero personalizados (encuestas de 1, 2 y 4 semanas), introducción gradual a la documentación interna
- Buddy system y mentoring: cómo la automatización puede facilitar la conexión humana en lugar de reemplazarla
- Qué NO automatizar en el onboarding para no convertir la primera impresión en una experiencia fría y burocrática

**3. Automatización del offboarding**
El offboarding es otro proceso con múltiples tareas coordinadas que fácilmente se olvidan. Explícame:
- Checklist automatizado multi-departamental (IT, seguridad, nómina, beneficios, accesos)
- Exit interviews: cuándo automatizarlas y cuándo hacerlas en persona
- Transferencia de conocimiento: cómo facilitar el proceso de documentación antes de la salida
- Gestión de accesos y seguridad: revocación automática en el momento correcto
- Alumni relations: cómo mantener el contacto con ex-empleados de manera automatizada

**4. Automatización de procesos administrativos de RRHH**
Los procesos del día a día que consumen más tiempo:
- Gestión de vacaciones y ausencias: solicitudes, aprobaciones y notificaciones automáticas
- Revisiones de desempeño: recordatorios, envío de formularios, consolidación de feedback 360
- Actualizaciones de datos de empleados: flujos de aprobación para cambios salariales, de cargo, de departamento
- Reporting de RRHH: dashboards de headcount, rotación, tiempo de contratación, eNPS que se actualizan solos

**5. Automatización del proceso de recruiting**
El ATS y el proceso de selección tienen muchos puntos automatizables:
- Screening inicial y programación de entrevistas automática
- Comunicaciones con candidatos en cada etapa del proceso
- Scorecards y consolidación de feedback de entrevistadores
- Notificaciones de rechazo con tacto y a tiempo
- Onboarding del candidato seleccionado desde el ATS al HRIS

**6. El equilibrio entre automatización y humanidad en RRHH**
RRHH trabaja en los momentos más importantes de la vida laboral de las personas. Ayúdame a pensar en:
- Cómo usar la automatización para que el equipo de RRHH tenga más tiempo para conversaciones difíciles, coaching y cultura
- Cuándo una respuesta automatizada puede ser percibida como un insulto (despidos, problemas de desempeño, situaciones personales difíciles)
- Cómo mantener el pulso de la cultura cuando los procesos son automáticos
- Métricas para saber si la automatización está mejorando o empeorando la experiencia del empleado

Dame recomendaciones concretas y priorizadas adaptadas a mi contexto de empresa cuando me cuentes más detalles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar automatizaciones de RRHH que liberan tiempo para el trabajo humano de alto valor',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finance automation: conciliación, reporting y los procesos que ya no necesitan a nadie',
                'description'       => 'Automatiza los procesos financieros más repetitivos, desde la conciliación bancaria hasta el reporting ejecutivo, con controles que garantizan la integridad de los datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas corporativas y finance operations con experiencia en empresas de tecnología en crecimiento. Conoces las principales herramientas de automatización financiera: ERPs (NetSuite, SAP, Sage), herramientas de cierre (FloQast, Blackline), plataformas de AP/AR automation (Tipalti, Bill.com, Kolleno), y cómo conectarlas con herramientas de BI para reporting automatizado. Tu filosofía es que el equipo de finanzas debería dedicar su tiempo al análisis y la toma de decisiones, no a procesar datos.

Necesito tu ayuda para diseñar una estrategia de automatización financiera. Aborda los siguientes temas:

**1. Auditoría del trabajo manual en finanzas**
Hazme las preguntas necesarias para entender mi situación: tamaño de la empresa, sistemas que usamos (ERP, banco, herramientas de contabilidad), volumen de transacciones mensual, días de cierre contable actuales, y dónde el equipo de finanzas pasa más tiempo en trabajo mecánico. Quiero identificar los procesos con mayor potencial de automatización por impacto vs complejidad.

**2. Automatización de la conciliación bancaria y contable**
La conciliación es uno de los procesos más repetitivos y propensos a error en finanzas. Explícame:
- Conciliación bancaria automática: herramientas y técnicas para cruzar extractos bancarios con el libro contable sin intervención manual
- Conciliación de cuentas entre sistemas: cómo detectar automáticamente discrepancias entre el ERP, la plataforma de pagos y el banco
- Gestión de excepciones: qué hacer con las transacciones que no concilian automáticamente y cómo reducirlas
- Cierre contable acelerado: cómo pasar de un cierre de 15 días a uno de 5 con los procesos correctos automatizados

**3. Automatización de cuentas por pagar (AP) y cobrar (AR)**
- AP automation: captura automática de facturas (OCR), matching con órdenes de compra, flujos de aprobación, pagos programados
- AR automation: facturación automática, recordatorios de pago escalonados, cash application (matching de pagos con facturas), gestión de deuda vencida
- Detección de fraude y anomalías: alertas automáticas para transacciones fuera de patrón
- Integración con proveedores: portales de self-service para que los proveedores consulten el estado de sus facturas

**4. Reporting financiero automatizado**
El reporting manual consume días cada mes. Explícame cómo construir:
- Dashboard financiero ejecutivo que se actualiza en tiempo real o daily: P&L, cash flow, KPIs financieros clave
- Reporting de management automatizado: paquete mensual que se genera solo con los comentarios que solo el equipo puede añadir
- Cash flow forecasting con actualización automática de datos actuales y proyecciones rolling
- Reporting para inversores y board: cómo estructurarlo para que la actualización sea mínima
- Alertas de desviación: notificaciones automáticas cuando los actuals se desvían significativamente del budget

**5. Automatización del proceso de cierre mensual**
El cierre es el proceso más estresante del mes para el equipo de finanzas. Explícame:
- Checklist de cierre automatizado con asignación de tareas y tracking de progreso
- Accruals y provisiones automáticas basadas en reglas predefinidas
- Revisión automática de la integridad de datos antes del cierre
- Conciliación intercompany automatizada en grupos empresariales

**6. Controles y auditoría en la automatización financiera**
La automatización en finanzas requiere controles robustos. Explícame:
- Cómo diseñar flujos de aprobación que sean eficientes pero que mantengan la separación de funciones necesaria
- Logging y trazabilidad de todas las transacciones automatizadas para auditoría
- Cómo documentar los controles automatizados para la auditoría externa
- Gestión de excepciones y casos edge que la automatización no puede manejar

Dame recomendaciones concretas con priorización por impacto y complejidad adaptadas a mi contexto financiero específico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatizar los procesos financieros repetitivos con controles que garantizan integridad',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal process automation: qué procesos jurídicos se pueden automatizar de forma segura',
                'description'       => 'Identifica los procesos legales que se pueden automatizar sin riesgo, desde la generación de contratos estándar hasta el tracking de obligaciones regulatorias.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en legal operations (Legal Ops) y legaltech con experiencia en departamentos jurídicos de empresas en crecimiento. Conoces las principales plataformas de contract lifecycle management (CLM), herramientas de automatización legal y los límites legales y éticos de la automatización en el contexto jurídico. Tu enfoque es pragmático: automatizar lo que se puede sin comprometer la responsabilidad profesional del abogado.

Necesito tu ayuda para identificar qué procesos legales de mi empresa o departamento jurídico se pueden automatizar de forma segura. Aborda los siguientes aspectos:

**1. Diagnóstico de procesos legales candidatos a automatización**
Hazme las preguntas necesarias para entender mi contexto: si soy in-house o externo, el tipo de empresa y sector, los tipos de contratos y documentos que más se repiten, el volumen de trabajo, y las herramientas que ya usamos. Quiero un mapa de todos los procesos legales del departamento ordenados por potencial de automatización.

**2. La línea que no se debe cruzar: automatización vs práctica legal**
Antes de automatizar nada, explícame claramente:
- Qué distingue la generación automatizada de documentos de la prestación de servicios jurídicos (que requiere juicio profesional)
- En qué casos la automatización puede crear riesgo de responsabilidad profesional o mala práctica
- Cómo gestionar el riesgo de que usuarios no abogados usen herramientas automatizadas para situaciones que requieren asesoramiento legal
- El marco regulatorio relevante (colegios de abogados, UPL en diferentes jurisdicciones) que afecta a la automatización legal

**3. Contract automation: de la plantilla al CLM**
El área con mayor potencial de automatización en cualquier departamento legal. Explícame:
- Biblioteca de plantillas: cómo construir y mantener plantillas de contratos estándar que permitan la auto-generación
- Contract generation: herramientas para que business y ventas generen contratos aprobados sin necesidad del equipo legal
- Contract review asistida por IA: cómo usar herramientas como Kira, Luminance o Harvey para acelerar la revisión de contratos de terceros
- Contract lifecycle management: tracking automático de fechas de renovación, obligaciones, vencimientos y notificaciones
- E-signature y workflow de aprobación: cómo integrar DocuSign o Adobe Sign en flujos automatizados

**4. Compliance y obligaciones regulatorias automatizadas**
El tracking de cumplimiento normativo es un área ideal para la automatización. Explícame:
- Cómo construir un sistema de tracking de obligaciones regulatorias con alertas automáticas de vencimiento
- Automatización de la due diligence de proveedores y terceros (KYC, AML en contextos relevantes)
- Gestión automatizada de políticas internas: distribución, confirmación de lectura, actualización cuando cambia la normativa
- Reporting de compliance automático para auditorías y reguladores

**5. Gestión legal interna automatizada**
Los procesos administrativos del departamento jurídico también pueden automatizarse:
- Portal de solicitudes legales: flujo para que el negocio solicite ayuda legal con toda la información necesaria desde el principio
- Gestión de matter y facturación: tracking de horas, costes externos y presupuestos
- Knowledge management: base de conocimiento de precedentes, interpretaciones y decisiones que crece automáticamente
- Litigation tracking: seguimiento automatizado del estado de procedimientos

**6. Implementar legaltech sin resistencia organizacional**
La automatización legal enfrenta resistencia cultural específica. Explícame:
- Cómo hacer que los abogados vean la automatización como un aliado y no como una amenaza
- Cómo convencer a la dirección del ROI de invertir en legaltech
- Cómo gestionar el cambio en un departamento donde la resistencia al cambio suele ser alta
- Métricas para demostrar el impacto: tiempo de ciclo de contratos, coste por contrato, tiempo de respuesta legal

Dame recomendaciones priorizadas y adaptadas a mi contexto cuando me cuentes más sobre tu situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Identificar y automatizar procesos jurídicos de forma segura sin comprometer la responsabilidad profesional',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS automation: triaje, seguimiento y las tareas que el CSM no debería hacer manualmente',
                'description'       => 'Automatiza el trabajo operativo del equipo de customer success para que los CSMs dediquen su tiempo a conversaciones de alto valor y construcción de relaciones.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success operations con experiencia en empresas SaaS en diferentes etapas de crecimiento. Conoces las principales plataformas de CS (Gainsight, ChurnZero, Totango, Vitally) y cómo conectarlas con CRM, plataformas de producto y herramientas de comunicación. Tu filosofía es que el CSM debería dedicar el 80% de su tiempo a conversaciones estratégicas con clientes, no a actualizar datos, programar reuniones o buscar información.

Necesito tu ayuda para diseñar un sistema de automatización de customer success. Aborda los siguientes temas:

**1. Diagnóstico: cómo pierde tiempo el equipo de CS**
Hazme las preguntas necesarias para entender mi contexto: número de CSMs, ratio CSM por cuenta, segmentos de clientes que manejamos, ARR medio, herramientas que usamos, y las tareas que más tiempo consumen. Quiero identificar claramente qué porcentaje del tiempo del CSM va a trabajo operativo vs a conversaciones con clientes.

**2. Triaje automatizado: las cuentas correctas en el momento correcto**
El mayor problema de CS es saber en qué cuentas centrarse. Explícame cómo automatizar:
- Health scoring: qué señales incluir (uso del producto, NPS, tickets de soporte, pagos, engagement con comunicaciones), cómo ponderarlas y cómo crear alertas automáticas cuando una cuenta se deteriora
- Detección temprana de churn: señales adelantadas que indican riesgo antes de que el cliente lo exprese, y flujos automáticos de intervención
- Identificación de oportunidades de expansión: señales de uso que indican que el cliente está listo para un upgrade o cross-sell
- Priorización de la cartera: cómo el CSM puede empezar cada día con una lista priorizada de dónde poner su energía

**3. Automatización del seguimiento y las comunicaciones de bajo valor**
El seguimiento rutinario consume tiempo desproporcionado. Explícame cómo automatizar:
- Check-ins de bajo riesgo: encuestas de satisfacción periódicas, emails de uso del producto, newsletters de producto relevantes por segmento
- Seguimiento post-reunión: envío automático de recaps, action items y próximos pasos
- Recordatorios de renovación: secuencia automatizada semanas antes del vencimiento con contexto de valor entregado
- Onboarding de nuevos usuarios en cuentas existentes cuando se añaden licencias

**4. Automatización de la preparación de reuniones con clientes**
El CSM prepara cada reunión buscando información en múltiples sistemas. Explícame cómo automatizar:
- Brief de cuenta automático antes de cada reunión: uso del producto, tickets recientes, estado de health, historial de la relación
- Agenda automática basada en el estado actual de la cuenta y los objetivos de la reunión
- Actualización del CRM desde las notas de la reunión usando IA para extraer action items y compromisos

**5. Reporting y QBRs automatizados**
Los Quarterly Business Reviews son críticos pero consumen días de preparación. Explícame:
- Cómo generar automáticamente el deck base de un QBR con datos actualizados (uso, ROI, tickets, hitos conseguidos)
- Dashboards de cliente self-service donde el cliente puede ver su propio progreso sin necesitar al CSM
- Reporting interno: métricas de CS (GRR, NRR, churn rate, time to value) que se actualizan solas para que el equipo de CS y la dirección siempre tengan visibilidad

**6. El equilibrio entre escala y relación personal en CS**
Más automatización puede significar peor experiencia del cliente si no se hace bien. Explícame:
- Cómo personalizar las comunicaciones automatizadas para que no parezcan masivas
- Cuándo intervenir manualmente y cómo la automatización puede generar el trigger para que el CSM actúe
- Cómo medir si la automatización está mejorando o empeorando la satisfacción del cliente
- Cómo construir un modelo de CS en escala que no requiere contratar un CSM por cada X clientes

Adapta las recomendaciones a mi contexto de CS cuando me cuentes más sobre el equipo, los clientes y las herramientas que ya tenemos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatizar el trabajo operativo de CS para que el equipo se centre en relaciones de alto valor',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatizar el negocio freelance: más tiempo para el trabajo de valor',
                'description'       => 'Diseña un sistema de automatización para tu negocio freelance que gestione solo las partes administrativas, desde la captación hasta el cobro, sin sacrificar la calidad del trabajo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en operaciones para freelancers y consultores independientes. Has ayudado a cientos de profesionales a construir sistemas que hacen funcionar su negocio sin que el trabajo administrativo les robe tiempo de facturación. Conoces las herramientas más útiles para freelancers: CRM ligeros (HoneyBook, Dubsado, Notion), facturación (Invoice Ninja, FreshBooks, Stripe), gestión de proyectos (ClickUp, Asana, Trello) y herramientas de automatización (Zapier, Make).

Necesito tu ayuda para diseñar un sistema de automatización para mi negocio freelance. Aborda los siguientes aspectos:

**1. Diagnóstico: el coste del trabajo administrativo**
Hazme las preguntas necesarias para entender mi situación: qué tipo de servicios ofrezco, cuántos clientes manejo simultáneamente, qué herramientas uso actualmente, y cuántas horas a la semana dedico a tareas administrativas (email, propuestas, contratos, facturas, seguimientos). Quiero cuantificar lo que me está costando en tiempo y en ingresos perdidos el no tener estos procesos automatizados.

**2. Automatización de la captación y el onboarding de clientes**
El proceso desde que un prospecto contacta hasta que firma es crucial y repetitivo. Explícame cómo automatizar:
- Formulario de contacto inteligente que califica el prospecto y recoge la información necesaria antes de la primera llamada
- Respuesta automática inicial que fija expectativas y agenda una llamada de discovery
- Propuestas semiautomatic: plantillas que se personalizan con los datos del proyecto y se envían con un clic
- Contratos digitales con firma electrónica y flujo de aprobación automático
- Onboarding del cliente nuevo: envío automático de toda la documentación de inicio, accesos y la primera reunión de kickoff

**3. Gestión del proyecto y comunicación con el cliente**
Una vez el proyecto empieza, la comunicación consume mucho tiempo. Explícame:
- Actualizaciones automáticas de estado al cliente (semanal o en hitos) que se generan desde el gestor de proyectos
- Portal del cliente donde puede ver el estado del proyecto sin tener que preguntarte
- Recordatorios automáticos cuando necesitas feedback o aprobación del cliente para continuar
- Cierre del proyecto: checklist automatizado de entregables, solicitud de testimonial y NPS

**4. Facturación y cobro sin fricción**
El cobro es la parte más sensible del negocio freelance. Explícame:
- Facturación automática basada en hitos o en tiempo registrado
- Recordatorios de pago escalonados y automáticos: amables al principio, más firmes si pasan los días
- Pagos recurrentes para clientes de retainer: cargo automático sin tener que perseguir el pago cada mes
- Integración entre el time tracking, la facturación y la contabilidad para tener siempre los números al día

**5. Marketing y generación de demanda en piloto automático**
Muchos freelancers abandonan el marketing cuando tienen trabajo. Explícame cómo mantener la visibilidad sin esfuerzo activo:
- Newsletter automatizada con contenido reutilizado de proyectos recientes (con permiso del cliente)
- Secuencia de nurturing para prospectos que no convirtieron todavía
- Seguimiento automático de referencias: recordar a clientes satisfechos que puedes ayudar a sus contactos
- Sistema de testimoniales: solicitud automática al cerrar el proyecto y publicación facilitada

**6. Tu sistema operativo personal como freelance**
Más allá de las herramientas, explícame cómo construir un sistema que funcione aunque no estés mirándolo:
- Dashboard personal que te da visibilidad del estado de todos tus proyectos y tu flujo de caja en 2 minutos
- Rituales semanales y mensuales semi-automatizados para revisar el negocio y tomar decisiones
- Cómo saber cuándo tienes capacidad para un proyecto nuevo sin hacer cálculos manuales
- Gestión de subcontratistas si escalas el negocio: flujos de brief, entrega y pago

Dame recomendaciones concretas adaptadas a mi tipo de negocio freelance, las herramientas que ya uso y el tiempo que tengo para implementar mejoras.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir un sistema de automatización del negocio freelance para dedicar más tiempo al trabajo facturable',
                'vote_score'        => 48,
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
