<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills214Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización de marketing con no-code',
                'description'       => 'Construye flujos de automatización de marketing sin escribir código: Zapier, Make y las integraciones que conectan CRM, email marketing y redes sociales en un sistema que trabaja solo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en automatización de marketing y herramientas no-code con experiencia implementando stacks de automatización para equipos de marketing de empresas B2B y B2C. Quiero construir un sistema de automatización de marketing sin depender de un desarrollador y necesito tu ayuda para diseñarlo e implementarlo.

**Preguntas iniciales:**
1. ¿Qué herramientas de marketing usas actualmente: CRM, email marketing, redes sociales, formularios, ecommerce?
2. ¿Cuál es el proceso de marketing que más tiempo te consume manualmente hoy?
3. ¿Has usado Zapier, Make (Integromat) u otras herramientas de automatización antes?
4. ¿Cuál es el volumen de leads o contactos que gestionas mensualmente?

**EL MAPA DE AUTOMATIZACIONES DE MARKETING:**

AUTOMATIZACIONES DE CAPTACIÓN DE LEADS
El primer bloque de automatización de marketing conecta los puntos de captación con el CRM y las secuencias de nurturing. Ayúdame a diseñar los flujos que automatizan: la captura de leads desde formularios web al CRM, la asignación automática de leads al comercial correcto según criterios de segmentación, el disparo de la secuencia de bienvenida en el momento exacto en que el lead entra en el sistema y la notificación al equipo cuando un lead cumple los criterios de MQL.

AUTOMATIZACIONES DE NURTURING Y SEGMENTACIÓN
El nurturing manual no escala. Diseña conmigo los flujos de automatización que mueven a los contactos por el funnel según su comportamiento: la secuencia de emails que se activa cuando alguien descarga un recurso, el cambio automático de etiqueta o lista cuando un contacto abre N emails o visita la página de precios, y la notificación a ventas cuando un lead en nurturing realiza una acción de alta intención.

AUTOMATIZACIONES DE REDES SOCIALES
Las redes sociales consumen tiempo operativo que puede automatizarse. Dame los flujos para: la publicación cross-plataforma desde un único lugar (Buffer, Hootsuite o Zapier conectado al calendario de contenido en Notion o Airtable), la captura de menciones y comentarios relevantes para respuesta proactiva y el reporting automático semanal de métricas de redes sociales entregado en Slack o email.

**SELECCIÓN DE HERRAMIENTAS:**

ZAPIER VS MAKE VS ALTERNATIVAS
Ayúdame a elegir la herramienta de automatización correcta para mi caso: Zapier es ideal para automatizaciones simples y equipos sin experiencia técnica, Make (Integromat) permite flujos más complejos con transformación de datos y es más económico a escala, n8n es la opción self-hosted para equipos técnicos que quieren control total. Dame los criterios de decisión para elegir entre ellas según mi contexto.

INTEGRACIONES CRÍTICAS DEL STACK DE MARKETING
El stack de marketing no-code que funciona como uno solo requiere las integraciones correctas. Dame la guía de las integraciones más importantes para mi stack: cómo conectar el CRM (HubSpot, Pipedrive, Salesforce) con el email marketing (Mailchimp, ActiveCampaign, Brevo), cómo sincronizar los datos de formularios (Typeform, Tally) con el CRM y cómo conectar el ecommerce (Shopify, WooCommerce) con las herramientas de marketing para las automatizaciones post-compra.

**IMPLEMENTACIÓN PASO A PASO:**

ORDEN DE IMPLEMENTACIÓN
Las automatizaciones de marketing deben implementarse en el orden correcto para generar valor rápido sin crear complejidad innecesaria. Dame el plan de implementación por fases: primero las automatizaciones que ahorran más tiempo o que tienen mayor impacto en el pipeline, luego las que mejoran la experiencia del lead y finalmente las de optimización y reporting.

TESTING Y MANTENIMIENTO
Las automatizaciones rotas son peor que los procesos manuales porque fallan en silencio. Dame el sistema para testear cada automatización antes de activarla, monitorizar que sigue funcionando una vez en producción y actualizar los flujos cuando cambien las herramientas o los procesos de negocio.

Dame el plan completo para construir un sistema de automatización de marketing no-code que trabaje mientras el equipo duerme y que escale con el crecimiento del negocio sin añadir complejidad técnica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño e implementación de automatizaciones de marketing con herramientas no-code',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Low-code para developers: cuándo usarlo y cuándo no',
                'description'       => 'El developer que sabe cuándo el low-code acelera el trabajo: los casos donde Bubble, Webflow o Retool ahorran semanas y los casos donde introduce más problemas de los que resuelve.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior software engineer y arquitecto de soluciones con experiencia combinando desarrollo tradicional con herramientas low-code y no-code en proyectos reales. Quiero entender cuándo el low-code es la decisión correcta como developer y cuándo es una trampa que genera deuda técnica y dependencias problemáticas.

**Preguntas iniciales:**
1. ¿Cuál es tu stack principal como developer y el tipo de proyectos en los que trabajas?
2. ¿Has tenido experiencias con herramientas low-code o no-code antes, positivas o negativas?
3. ¿El contexto es una startup donde la velocidad es crítica, una empresa con procesos establecidos o trabajo freelance?
4. ¿El proyecto que tienes en mente es un producto principal, una herramienta interna o un prototipo?

**CUÁNDO EL LOW-CODE ACELERA DE VERDAD:**

INTERNAL TOOLS: EL CASO MÁS CLARO
Las herramientas internas son el caso de uso donde el low-code tiene el mejor ratio de valor entregado sobre tiempo invertido. Un dashboard de operaciones en Retool que habría tardado semanas de desarrollo custom puede construirse en horas conectando directamente a la base de datos PostgreSQL o MySQL. Un formulario de gestión de casos en Airtable con automatizaciones puede reemplazar un backlog de product de tres meses. Ayúdame a identificar los criterios que hacen que una internal tool sea candidata ideal al low-code: audiencia interna, no es diferenciadora del producto, requiere iteración rápida y el equipo de ingeniería tiene backlog saturado.

PROTOTIPOS Y VALIDACIÓN
Antes de construir algo con código, el low-code puede validar si vale la pena construirlo. Diseña conmigo el flujo de validación: cuándo usar Bubble o Webflow para construir un prototipo funcional que usuarios reales puedan usar, cómo estructurar el prototipo para que los aprendizajes sean transferibles al desarrollo real y en qué momento el prototipo debe convertirse en código propio.

AUTOMATIZACIONES DE PROCESOS
Los flujos de automatización de procesos internos (notificaciones, sincronización de datos entre sistemas, generación de documentos) son ideales para Zapier o Make. Un developer que los construye en código está subóptimizando su tiempo. Ayúdame a establecer la línea entre la automatización que pertenece a Zapier y la que pertenece a un microservicio propio.

**CUÁNDO EL LOW-CODE ES UNA TRAMPA:**

PRODUCTO PRINCIPAL CON LÓGICA DE NEGOCIO COMPLEJA
Construir el producto principal en Bubble o Webflow es una decisión que muchos founders no-tech toman por las razones equivocadas. Desde la perspectiva del developer, ayúdame a articular los límites reales del low-code en productos que escalan: los problemas de rendimiento cuando la base de datos supera cierto volumen, las limitaciones de personalización cuando el producto necesita diferenciación real y el riesgo de vendor lock-in cuando toda la lógica de negocio vive en una plataforma que no controlas.

SEGURIDAD Y COMPLIANCE
Los entornos regulados (fintech, healthtech, legaltech) tienen requisitos de seguridad que las plataformas low-code dificultan o hacen imposibles. Dame el análisis de los aspectos de seguridad que debo revisar antes de usar una herramienta low-code en un contexto sensible: dónde viven los datos, quién tiene acceso a ellos, qué auditoría existe y qué ocurre si la plataforma cierra o cambia sus términos.

**EL MODELO DE DECISIÓN:**

EL ÁRBOL DE DECISIÓN DEL DEVELOPER
Dame el árbol de decisión que uso cuando evalúo si un requisito debe construirse con código propio o con una herramienta low-code: las preguntas que hago, los factores que peso (velocidad, control, escalabilidad, mantenimiento, coste) y los criterios que inclinan la balanza en cada dirección.

INTEGRAR LO LOW-CODE CON EL STACK EXISTENTE
Cuando la decisión es usar low-code para una parte del sistema, la integración con el código existente es crítica. Dame las mejores prácticas para integrar herramientas como Retool, Bubble o Zapier con tu API REST o GraphQL existente de manera que no cree acoplamiento problemático ni puntos de fallo opacos.

Dame el framework de decisión completo para que como developer pueda usar el low-code como una herramienta estratégica sin caer en las trampas que he visto hundir proyectos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Framework de decisión para developers sobre cuándo usar low-code',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño y prototipado con herramientas no-code',
                'description'       => 'Crea prototipos funcionales sin código: Webflow para webs de alta fidelidad, Framer para prototipos interactivos y las herramientas que permiten al diseñador entregar un producto que el cliente puede usar antes del código.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX designer y diseñador web con experiencia usando herramientas no-code como Webflow, Framer, Figma y otras para crear prototipos funcionales y productos finales sin depender de un developer para cada iteración. Quiero aprender a usar estas herramientas estratégicamente para entregar trabajo de mayor impacto más rápido.

**Preguntas iniciales:**
1. ¿Cuál es tu herramienta principal de diseño actualmente (Figma, Sketch, Adobe XD)?
2. ¿Has usado Webflow, Framer u otras herramientas no-code de diseño antes?
3. ¿El objetivo principal es crear prototipos para testear con usuarios, entregar al cliente un producto funcional o construir sitios web reales?
4. ¿Trabajas con un equipo de desarrollo o eres responsable de entregar el producto final?

**EL ESPECTRO DEL PROTOTIPADO NO-CODE:**

FIGMA PARA PROTOTIPOS INTERACTIVOS
Figma no es solo una herramienta de diseño estático; con sus funcionalidades de prototyping y el uso avanzado de variables y componentes interactivos, se pueden crear prototipos de alta fidelidad que simulan la experiencia real del producto. Ayúdame a dominar el prototipado avanzado en Figma: el uso de variables para estados dinámicos, los overlays para modales y menús, las smart animations que hacen que el prototipo se sienta como un producto real y cómo preparar un prototipo de Figma para un test de usuario que genera insights accionables.

FRAMER PARA PROTOTIPOS FUNCIONALES
Framer lleva el prototipado al siguiente nivel permitiendo añadir lógica real y datos dinámicos a los diseños. Dame una guía de los casos de uso donde Framer es superior a Figma: cuándo necesitas interacciones complejas que Figma no puede simular, cómo conectar el prototipo a datos reales a través de APIs y cómo usar Framer para crear micro-interacciones y animaciones que demuestran la visión del producto de manera que ningún documento puede.

WEBFLOW PARA DISEÑO WEB DE ALTA FIDELIDAD
Webflow cierra la brecha entre el diseño y el desarrollo para sitios web. Ayúdame a entender qué tipo de proyectos son ideales para Webflow: los sites de marketing de alta calidad que requieren animaciones y diseño custom, los portfolios profesionales que necesitan actualización frecuente sin developer y los proyectos de cliente donde el diseñador entrega el site completo. Dame también los límites reales de Webflow para que sepa cuándo necesito un developer de todas formas.

**EL PROCESO DE PROTOTIPADO ESTRATÉGICO:**

ELEGIR LA FIDELIDAD CORRECTA
El error más común en el prototipado es usar la herramienta equivocada para el propósito equivocado. Ayúdame a definir el nivel de fidelidad correcto para cada momento del proceso de diseño: cuándo usar wireframes en papel o en Figma baja fidelidad para explorar estructuras, cuándo subir a alta fidelidad para testear la experiencia visual y cuándo usar un prototipo funcional en Framer o Webflow para validar flujos completos con usuarios reales.

PRESENTACIÓN DEL PROTOTIPO AL CLIENTE
Un prototipo funcional en lugar de un PDF de diseño transforma la conversación con el cliente. Dame las estrategias para presentar prototipos no-code a clientes y stakeholders: cómo guiar la sesión de revisión para que el feedback sea útil y no se convierta en rediseño del color del botón, cómo usar el prototipo para facilitar decisiones y cómo gestionar las expectativas sobre qué es el prototipo y qué es el producto final.

HANDOFF AL DESARROLLO
Cuando existe un equipo de desarrollo, el prototipo no-code debe ser una ayuda y no un obstáculo. Ayúdame a establecer el proceso de handoff: cómo documentar las interacciones y los estados en el prototipo para que el developer los implemente correctamente, cómo usar Figma Dev Mode para extraer las especificaciones técnicas y cuándo es más eficiente que el developer implemente directamente desde el prototipo de Webflow.

Dame el sistema completo para usar las herramientas no-code de diseño estratégicamente y entregar prototipos que generan valor real en cada etapa del proceso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Prototipado funcional con herramientas no-code para diseñadores',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'No-code para ventas: automatizar sin depender del IT',
                'description'       => 'El equipo de ventas que se automatiza solo: los workflows de Zapier que actualizan el CRM, envían los follow-ups y notifican al equipo sin escribir una sola línea de código ni esperar a IT.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en operaciones de ventas y automatización no-code con experiencia implementando stacks de automatización para equipos comerciales B2B. Quiero que mi equipo de ventas deje de hacer trabajo manual repetitivo y empiece a operar con un sistema que automatiza las tareas administrativas para que los comerciales puedan dedicar su tiempo a vender.

**Preguntas iniciales:**
1. ¿Qué CRM usa el equipo actualmente (Salesforce, HubSpot, Pipedrive, otro)?
2. ¿Cuáles son las tres tareas manuales que más tiempo consumen al equipo de ventas?
3. ¿El equipo ha usado Zapier, Make u otras herramientas de automatización o empezamos desde cero?
4. ¿Hay un equipo de IT o el equipo de ventas es responsable de sus propias herramientas?

**LAS AUTOMATIZACIONES QUE MÁS IMPACTO TIENEN EN VENTAS:**

ACTUALIZACIÓN AUTOMÁTICA DEL CRM
El CRM sin datos frescos no sirve de nada, pero actualizar el CRM manualmente consume entre 30 y 60 minutos al día por comercial. Diseña conmigo las automatizaciones que mantienen el CRM actualizado sin esfuerzo manual: el enriquecimiento automático de los leads con datos de LinkedIn o Clearbit cuando entran en el CRM, la actualización de etapa del deal basada en las acciones del prospecto (abrió el email de propuesta, visitó la página de precios), el registro automático de las llamadas y reuniones desde el calendario al CRM y la sincronización bidireccional entre el CRM y las herramientas de email.

FOLLOW-UPS AUTOMÁTICOS
El seguimiento es donde la mayoría de los deals se pierden por olvido o por falta de tiempo. Dame el sistema de follow-ups automáticos que asegura que ningún prospecto se quede sin respuesta: las secuencias de email de seguimiento que se disparan automáticamente si el prospecto no responde en N días, la tarea automática en el CRM que recuerda al comercial hacer seguimiento en los casos que requieren toque personal y la alerta cuando un prospecto que estaba inactivo vuelve a visitar la web o abre un email.

NOTIFICACIONES AL EQUIPO
Las notificaciones correctas en el momento correcto hacen que el equipo de ventas reaccione más rápido. Diseña los flujos de notificación que mantienen al equipo informado sin saturarlo de alertas: la notificación en Slack cuando un lead de alto valor entra en el CRM, el aviso cuando un deal lleva demasiado tiempo en una etapa sin avanzar y el resumen diario automático del pipeline para el manager.

**AUTOMATIZACIONES DE PROSPECCIÓN:**

CAPTURA Y ENRIQUECIMIENTO DE LEADS
El proceso de captura y enriquecimiento de leads es uno de los que más tiempo consumen en equipos de ventas outbound. Ayúdame a automatizar: la captura de leads desde LinkedIn Sales Navigator o Apollo a HubSpot via Zapier, el enriquecimiento automático con datos de empresa (tamaño, sector, tecnologías que usan) y la deduplicación automática para evitar que dos comerciales trabajen el mismo contacto.

PROPUESTAS Y DOCUMENTOS
La generación de propuestas y contratos personalizados puede automatizarse en gran medida. Dame el flujo para generar propuestas comerciales personalizadas a partir de los datos del CRM usando herramientas como PandaDoc, Docupilot o incluso Google Docs con scripts simples, sin que el comercial tenga que copiar y pegar datos manualmente.

**MEDICIÓN DE LA AUTOMATIZACIÓN:**

MÉTRICAS DE TIEMPO RECUPERADO
Las automatizaciones de ventas deben medirse en términos de tiempo recuperado y su impacto en la productividad comercial. Ayúdame a establecer las métricas correctas: cuánto tiempo se ahorra por comercial a la semana, cómo ha cambiado la velocidad del ciclo de venta y si la tasa de seguimiento ha mejorado desde que se implementaron las automatizaciones.

Dame el plan de implementación por fases para que el equipo de ventas opere con un sistema automatizado que multiplique la capacidad de cada comercial sin aumentar el headcount.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Automatización de operaciones de ventas con herramientas no-code',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Internal tools con no-code/low-code',
                'description'       => 'Construye las herramientas internas que el equipo necesita sin esperar a ingeniería: dashboards en Retool, formularios en Notion y las automatizaciones que resuelven los problemas del día a día.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager con experiencia construyendo herramientas internas para equipos de operaciones, producto y negocio usando plataformas no-code y low-code como Retool, Airtable, Notion y Zapier. Quiero dejar de esperar a que ingeniería tenga capacidad para construir las herramientas que el equipo necesita y aprender a construirlas yo mismo.

**Preguntas iniciales:**
1. ¿Cuál es la herramienta interna que el equipo más necesita y no tiene?
2. ¿Cuál es tu nivel de comodidad técnica: cero código, algo de SQL, o puedes escribir scripts simples?
3. ¿Las herramientas necesitan conectarse a bases de datos existentes o solo a APIs y herramientas SaaS?
4. ¿Cuántos usuarios internos usarán las herramientas y cuál es su nivel técnico?

**EL CATÁLOGO DE INTERNAL TOOLS POR CASO DE USO:**

DASHBOARDS OPERATIVOS EN RETOOL
Retool es la herramienta líder para construir dashboards y herramientas de administración que se conectan directamente a bases de datos (PostgreSQL, MySQL, MongoDB) o APIs. Ayúdame a diseñar el dashboard operativo que el equipo más necesita: la definición de las métricas y acciones que debe mostrar, el diseño de la UI con los componentes de Retool (tablas, filtros, formularios de edición inline) y la configuración de los permisos para que cada rol vea solo lo que necesita.

BASES DE DATOS Y GESTIÓN DE PROCESOS EN AIRTABLE
Airtable combina la flexibilidad de una base de datos con la usabilidad de una hoja de cálculo y es ideal para gestionar procesos que tienen múltiples estados y responsables. Dame el diseño de una base de Airtable para el proceso interno más complejo del equipo: la estructura de tablas y campos, los views para cada rol del equipo, las automatizaciones nativas de Airtable y cómo conectar la base con Zapier para integraciones externas.

WIKIS Y BASES DE CONOCIMIENTO EN NOTION
Notion es la plataforma ideal para la base de conocimiento interna del equipo de producto. Ayúdame a diseñar la arquitectura de la base de conocimiento del equipo: cómo estructurar las páginas para que sean encontrables, cómo usar las bases de datos de Notion para gestionar el roadmap, las decisiones de diseño (ADRs) y los procesos del equipo, y cómo mantener la base de conocimiento actualizada sin que se convierta en un proyecto en sí mismo.

**EL PROCESO DE CONSTRUCCIÓN:**

DESCUBRIMIENTO: ENTENDER EL PROBLEMA ANTES DE LA HERRAMIENTA
El error más común en la construcción de internal tools es empezar por la herramienta en lugar del problema. Ayúdame a hacer el discovery correcto antes de construir: las preguntas que hago al equipo para entender el flujo actual, los puntos de dolor reales y los criterios de éxito de la herramienta nueva.

CONSTRUIR EN ITERACIONES
Las internal tools deben construirse en iteraciones cortas con feedback del equipo que las usará. Dame el proceso de construcción iterativa: cómo construir la versión mínima viable de la herramienta en un día, cómo estructurar las sesiones de feedback con el equipo para mejorar rápido y cómo gestionar las peticiones de nuevas funcionalidades para que la herramienta no crezca sin control.

MANTENIMIENTO Y DOCUMENTACIÓN
Las internal tools sin mantenimiento se convierten en deuda técnica no-code. Ayúdame a establecer el sistema de mantenimiento: cómo documentar la herramienta para que cualquier miembro del equipo pueda entenderla y modificarla, cómo gestionar los cambios en las fuentes de datos cuando la base de datos cambia de esquema y cuándo es el momento de reescribir la herramienta en código propio porque ha superado las capacidades del no-code.

Dame el framework completo para que el equipo de producto pueda construir las herramientas internas que necesita sin depender de la capacidad de ingeniería y sin crear deuda técnica que sea un problema más adelante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción de herramientas internas con plataformas no-code y low-code',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'No-code para RRHH: automatizar los procesos de personas',
                'description'       => 'Automatiza los procesos de RRHH sin código: el onboarding en Typeform que alimenta el HRIS, el flujo de aprobación de vacaciones en Slack y las automatizaciones que convierten semanas en minutos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en HR Operations y automatización de procesos con experiencia implementando sistemas no-code para equipos de RRHH de empresas en crecimiento. Quiero automatizar los procesos de personas más repetitivos y manuales sin necesidad de un equipo técnico y sin presupuesto para un HRIS de enterprise.

**Preguntas iniciales:**
1. ¿Qué herramientas usa el equipo de RRHH actualmente: HRIS, hojas de cálculo, papel?
2. ¿Cuáles son los procesos que más tiempo manual consumen: onboarding, gestión de vacaciones, evaluaciones de rendimiento u otros?
3. ¿Cuál es el tamaño de la empresa y el equipo de RRHH?
4. ¿Hay presupuesto para herramientas SaaS o necesitamos aprovechar las herramientas que ya están contratadas?

**LAS AUTOMATIZACIONES DE RRHH DE MAYOR IMPACTO:**

ONBOARDING AUTOMATIZADO
El onboarding manual es uno de los procesos que más tiempo consume en RRHH y donde la experiencia del nuevo empleado puede mejorarse radicalmente con automatización. Ayúdame a diseñar el flujo de onboarding automatizado de principio a fin: el formulario de datos del nuevo empleado en Typeform o Google Forms que alimenta automáticamente la hoja de cálculo o el HRIS, la checklist de onboarding en Notion o Asana que se crea automáticamente con las tareas asignadas a los responsables correctos, los emails de bienvenida automatizados con la información que el nuevo empleado necesita en el día 1, la semana 1 y el mes 1, y la solicitud automática de accesos a los sistemas al equipo de IT.

GESTIÓN DE VACACIONES Y AUSENCIAS
La gestión manual de las solicitudes de vacaciones con hojas de cálculo compartidas es una fuente de errores y frustraciones. Dame el diseño del flujo de aprobación de vacaciones no-code: el formulario de solicitud en Typeform o un formulario de Slack, el flujo de aprobación automático que notifica al manager y registra la respuesta, la actualización automática del calendario compartido cuando se aprueba la solicitud y el resumen mensual de ausencias para el equipo de nóminas.

EVALUACIONES DE RENDIMIENTO
Las evaluaciones de rendimiento con formularios manuales y consolidación en hojas de cálculo son ineficientes y propensas a errores. Diseña conmigo el proceso de evaluación de rendimiento no-code: el formulario de autoevaluación y evaluación del manager en Typeform, la consolidación automática de las respuestas en Airtable o Google Sheets, las notificaciones automáticas a los participantes según el calendario del proceso y el dashboard de progreso del proceso de evaluación para el equipo de RRHH.

**AUTOMATIZACIONES DE ADMINISTRACIÓN DE PERSONAS:**

COMUNICACIONES INTERNAS AUTOMATIZADAS
RRHH envía muchas comunicaciones repetitivas que pueden automatizarse: los recordatorios de fechas importantes (aniversarios, fin del período de prueba, renovación de contratos temporales), los cumpleaños automatizados en Slack, las encuestas de pulso mensuales y los comunicados programados sobre procesos o cambios de política. Ayúdame a diseñar el sistema de comunicaciones internas automatizadas con las herramientas que el equipo ya tiene contratadas.

OFFBOARDING
El offboarding tiene tantas tareas como el onboarding y también puede automatizarse. Dame el flujo de offboarding no-code: la checklist automática de tareas para RRHH, IT y el manager cuando se registra la baja de un empleado, la notificación a los sistemas para revocar accesos y la documentación automática del proceso para compliance.

**STACK RECOMENDADO:**

HERRAMIENTAS PARA EL EQUIPO DE RRHH SIN CÓDIGO
Dame la recomendación del stack no-code para un equipo de RRHH de empresa mediana: las herramientas para los formularios (Typeform, Tally, Google Forms), para la base de datos de empleados (Airtable, Notion), para las automatizaciones (Zapier, Make), para la comunicación interna (Slack con Workflow Builder) y para la gestión documental (Notion, Google Workspace). Incluye el coste estimado y los criterios para elegir entre las alternativas.

Dame el plan de implementación por fases para automatizar los procesos de RRHH de mayor impacto primero y construir el sistema de personas que escala con el crecimiento de la empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Automatización de procesos de RRHH con herramientas no-code',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas con no-code: dashboards y automatizaciones',
                'description'       => 'El equipo de finanzas que construye sus propias herramientas: dashboards de tesorería en Rows o Grist, automatizaciones de reporting y flujos de aprobación sin presupuesto de IT.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en Finance Operations y herramientas de productividad financiera con experiencia implementando soluciones no-code para equipos de finanzas de empresas medianas que no tienen presupuesto para herramientas de enterprise ni acceso a recursos de IT. Quiero modernizar las operaciones del equipo de finanzas con herramientas no-code que podemos implementar nosotros mismos.

**Preguntas iniciales:**
1. ¿Cuáles son los procesos financieros que más tiempo manual consumen actualmente: reporting, cierre mensual, conciliaciones, aprobaciones?
2. ¿El equipo opera principalmente con Excel/Google Sheets o ya usa alguna herramienta especializada?
3. ¿Cuál es el ERP o software de contabilidad que usa la empresa?
4. ¿El objetivo es mejorar la visibilidad para la dirección, reducir el tiempo del cierre mensual o ambos?

**DASHBOARDS FINANCIEROS NO-CODE:**

ROWS Y GRIST: HOJAS DE CÁLCULO CON SUPERPODERES
Rows y Grist son las alternativas modernas a Excel y Google Sheets que permiten conectar datos en tiempo real desde múltiples fuentes y construir dashboards financieros sin código. Ayúdame a diseñar el dashboard financiero principal del negocio: las métricas que debe mostrar (P&L en tiempo real, cash flow, runway, ARR y sus componentes para empresas SaaS), cómo conectar los datos desde el banco, el ERP o las hojas de cálculo existentes y cómo estructurar el dashboard para que la dirección entienda el estado financiero de la empresa en menos de cinco minutos.

GOOGLE LOOKER STUDIO O POWER BI PARA REPORTING
Para el reporting de management que se presenta mensualmente o trimestralmente, Google Looker Studio (gratuito) o Power BI son las herramientas no-code de BI que transforman los datos financieros en visualizaciones que cuentan una historia. Dame el diseño del reporting mensual de management: los gráficos y tablas que incluye, cómo se actualiza de manera semi-automática a partir de las fuentes de datos y cómo se estructura la narrativa que acompaña a los números.

TESORERÍA Y CASH FLOW EN TIEMPO REAL
El dashboard de tesorería es una de las herramientas más valiosas que un equipo de finanzas puede construir sin código. Ayúdame a diseñar el dashboard de tesorería no-code: la visión de la posición de caja por banco y divisa actualizada diariamente, la previsión de cash flow a 13 semanas alimentada desde el CRM (ingresos previstos) y el ERP (pagos previstos) y las alertas automáticas cuando la posición de caja cae por debajo de un umbral crítico.

**AUTOMATIZACIONES DE PROCESOS FINANCIEROS:**

CIERRE MENSUAL AUTOMATIZADO
El cierre mensual es el proceso que más tiempo consume en muchos equipos de finanzas. Diseña conmigo el sistema de automatización del cierre mensual: la checklist automática en Notion o Asana con las tareas asignadas a cada miembro del equipo, los recordatorios automáticos de las tareas pendientes, la validación automática de que las conciliaciones están completas antes de cerrar el período y el envío automático del pack de reporting al equipo directivo una vez completado el cierre.

FLUJOS DE APROBACIÓN DE GASTOS
Los flujos de aprobación manual de gastos por email son lentos, opacos y difíciles de auditar. Ayúdame a diseñar el flujo de aprobación de gastos no-code: el formulario de solicitud en Typeform o Google Forms con la carga del justificante, el flujo de aprobación automatizado en Slack o email con la firma digital del aprobador y el registro automático en la hoja de gastos o el ERP para el procesamiento en nómina o contabilidad.

**INTEGRACIÓN CON EL STACK EXISTENTE:**

CONECTAR LAS HERRAMIENTAS CON ZAPIER O MAKE
La clave de las automatizaciones financieras es la integración entre herramientas: el banco, el ERP, el CRM, las herramientas de gastos y las hojas de cálculo. Dame el mapa de integraciones del stack financiero no-code: cómo conectar las principales herramientas financieras (QuickBooks, Xero, Holded, Sage) con las herramientas de automatización y qué datos vale la pena sincronizar automáticamente versus los que deben revisarse manualmente.

Dame el plan para que el equipo de finanzas opere con herramientas propias que dan visibilidad en tiempo real y automatizan el trabajo repetitivo, liberando tiempo para el análisis estratégico que realmente añade valor al negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Dashboards financieros y automatizaciones de procesos con herramientas no-code',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal tech no-code: contratos y gestión documental',
                'description'       => 'Usa herramientas no-code para gestionar contratos y documentos legales: templates en Docupilot, flujos de firma con DocuSign y el lifecycle de contratos sin un CLM de enterprise.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en operaciones legales y legal tech con experiencia implementando soluciones no-code para departamentos legales internos y despachos de abogados que quieren modernizar su gestión documental y de contratos sin invertir en sistemas de enterprise. Quiero mejorar la eficiencia del equipo legal con herramientas no-code que podemos implementar sin IT.

**Preguntas iniciales:**
1. ¿Cuáles son los tipos de contratos que el equipo gestiona con mayor volumen (NDAs, contratos de servicio, acuerdos comerciales, contratos laborales)?
2. ¿Cuál es el mayor cuello de botella del proceso de contratos actual: la redacción, la revisión, las negociaciones o la firma?
3. ¿El equipo usa plantillas de contratos o cada contrato se redacta desde cero?
4. ¿Hay un sistema de gestión de contratos actualmente o se gestionan en carpetas compartidas y hojas de cálculo?

**AUTOMATIZACIÓN DE LA GENERACIÓN DE CONTRATOS:**

TEMPLATES INTELIGENTES CON DOCUPILOT O PANDADOC
La generación manual de contratos a partir de plantillas de Word es lenta, propensa a errores y difícil de mantener actualizada. Ayúdame a diseñar el sistema de generación automática de contratos con herramientas no-code: la creación de plantillas inteligentes en Docupilot o PandaDoc con variables que se rellenan automáticamente desde un formulario o el CRM, el flujo de generación del contrato a partir de los datos del cliente sin intervención manual del abogado para contratos estándar y el sistema de versionado de plantillas para asegurar que todos los contratos usan siempre la versión más actualizada.

CONTRATOS ESTÁNDAR DE ALTO VOLUMEN
Los NDAs, los contratos de servicio estándar y los términos y condiciones son candidatos perfectos para la automatización completa. Dame el diseño del flujo completo para contratos estándar: el formulario de solicitud donde el cliente o el equipo introduce los datos variables, la generación automática del contrato personalizado, el envío para revisión y firma y el archivo automático en el repositorio de contratos.

**FLUJOS DE FIRMA DIGITAL:**

DOCUSIGN, SIGNATURIT O ADOBE SIGN
La firma digital no solo acelera el cierre del contrato; también crea un registro de auditoría que es superior al proceso en papel. Ayúdame a implementar el flujo de firma digital integrado con el proceso de generación de contratos: la configuración del orden de firma cuando hay múltiples firmantes, las notificaciones automáticas a los firmantes pendientes, los recordatorios automáticos para contratos sin firmar y el archivo automático del contrato firmado en el repositorio.

INTEGRACIÓN CON EL CRM Y LOS SISTEMAS DE NEGOCIO
La firma del contrato es un evento de negocio que debe desencadenar acciones en otros sistemas. Dame el diseño de las automatizaciones post-firma: la actualización del estado del deal en el CRM cuando el contrato se firma, la creación de la tarea de onboarding del cliente en el sistema de proyectos y la notificación al equipo de facturación para iniciar el proceso de cobro.

**GESTIÓN DEL CICLO DE VIDA DE CONTRATOS:**

REPOSITORIO DE CONTRATOS SIN CLM DE ENTERPRISE
Un sistema de gestión del ciclo de vida de contratos (CLM) de enterprise cuesta decenas de miles de euros al año. Un repositorio de contratos funcional puede construirse en Airtable, Notion o Google Sheets con las automatizaciones correctas. Ayúdame a diseñar el repositorio de contratos no-code: la estructura de datos que captura la información clave de cada contrato (partes, fecha de inicio, fecha de vencimiento, valor, estado, responsable), las alertas automáticas de renovación y vencimiento y el sistema de búsqueda que permite encontrar cualquier contrato en segundos.

RENOVACIONES Y VENCIMIENTOS
Los contratos que vencen sin renovar son un riesgo legal y de negocio. Diseña el sistema de gestión de renovaciones: la alerta automática al responsable del contrato con N días de antelación al vencimiento, el flujo de aprobación interna de la renovación y la generación automática del contrato de renovación cuando se decide continuar.

Dame el sistema completo de gestión de contratos no-code que reduce el tiempo de ciclo de los contratos, elimina los errores manuales y da visibilidad sobre el estado del portfolio de contratos sin necesitar un sistema de CLM de enterprise.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestión de contratos y documentación legal con herramientas no-code',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success con no-code: automatiza sin IT',
                'description'       => 'El equipo de CS que construye sus propias herramientas: dashboards de health score en Airtable, flujos de onboarding en Customer.io y automatizaciones que escalan las operaciones sin aumentar el equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en Customer Success Operations y automatización no-code con experiencia construyendo sistemas de CS escalables para empresas SaaS B2B sin depender de un equipo de ingeniería. Quiero que el equipo de CS pueda construir sus propias herramientas y automatizaciones para escalar las operaciones sin necesitar más headcount.

**Preguntas iniciales:**
1. ¿Cuántos clientes gestiona el equipo de CS actualmente y cuál es el modelo de servicio (high touch, tech touch o mixto)?
2. ¿Qué herramientas usa el equipo: CRM, plataforma de email, herramienta de CS (Gainsight, ChurnZero, Totango)?
3. ¿Cuáles son los procesos de CS que más tiempo manual consumen?
4. ¿El mayor reto es la detección temprana del churn, el onboarding de nuevos clientes o la expansión de cuentas existentes?

**HEALTH SCORING SIN GAINSIGHT:**

HEALTH SCORE EN AIRTABLE O GOOGLE SHEETS
Las plataformas de CS de enterprise como Gainsight o ChurnZero cuestan decenas de miles de euros al año. Un health score funcional puede construirse en Airtable o Google Sheets con las integraciones correctas. Ayúdame a diseñar el health score no-code: las señales de uso del producto que indico como positivas o negativas (logins recientes, features usadas, volumen de uso), las señales de relación (NPS reciente, respuesta a los últimos emails, asistencia a las QBRs), la fórmula de cálculo del score y la actualización automática de los datos desde las fuentes conectadas.

ALERTAS PROACTIVAS DE RIESGO
El valor del health score está en la acción que genera. Diseña conmigo el sistema de alertas automáticas basadas en el health score: la notificación en Slack al CS Manager cuando el score de un cliente cae por debajo del umbral de riesgo, el correo automático de revisión cuando el score no mejora tras N días y el escalado automático al manager de CS cuando el cliente tiene un score crítico durante demasiado tiempo.

**AUTOMATIZACIONES DE ONBOARDING:**

FLUJO DE ONBOARDING AUTOMATIZADO
El onboarding de nuevos clientes es el proceso que más impacta en la retención a largo plazo y también el que más puede beneficiarse de la automatización. Ayúdame a diseñar el flujo de onboarding automatizado: los emails de bienvenida y activación con Customer.io, Intercom o ActiveCampaign que se disparan según el comportamiento del cliente en el producto, las tareas automáticas en el sistema de gestión de proyectos para el CS Manager en cada hito del onboarding y el check-in automático a los 30, 60 y 90 días con el formulario de satisfacción.

SEGUIMIENTO DE MILESTONES DE ADOPCIÓN
El onboarding exitoso se mide en la adopción de las features clave del producto. Dame el sistema de seguimiento automático de los milestones de adopción: la detección automática de cuándo el cliente ha completado los pasos clave del onboarding, la felicitación automática cuando alcanza un hito importante y la intervención proactiva cuando lleva demasiado tiempo sin alcanzar el siguiente milestone.

**AUTOMATIZACIONES DE EXPANSIÓN:**

IDENTIFICACIÓN DE OPORTUNIDADES DE UPSELL
Las mejores oportunidades de expansión las señala el comportamiento del producto. Diseña el sistema de identificación automática de señales de upsell: la alerta al CS Manager cuando el cliente se acerca al límite del plan actual, la notificación cuando el cliente adopta las features del plan superior en un plan inferior y el trigger del email de nurturing de expansión cuando el cliente alcanza un nivel de uso que históricamente predice la conversión.

QBR AUTOMATION
La preparación de las QBRs consume tiempo del CS Manager que podría dedicarse al cliente. Ayúdame a automatizar la preparación de la QBR: la generación automática de la agenda con los datos clave del cliente (métricas de uso, evolución del health score, tickets de soporte del período), el envío automático de la invitación de calendario con el documento adjunto y el registro automático de los acuerdos y próximos pasos de la QBR en el CRM.

Dame el sistema completo de CS Operations no-code que permite al equipo gestionar más cuentas con mayor calidad sin aumentar el headcount.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatización de operaciones de customer success con herramientas no-code',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'El stack no-code del freelance productivo',
                'description'       => 'El freelance que usa herramientas no-code para operar como una empresa: la propuesta en Notion, la firma en DocuSign, la factura en Invoice Ninja y los flujos de Zapier que conectan todo en un sistema.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de productividad especializado en freelancers y profesionales independientes con experiencia diseñando stacks de herramientas no-code para que los freelancers operen como una empresa sin el coste ni la complejidad de las herramientas de enterprise. Quiero construir el stack de herramientas que me permite operar de manera profesional, eficiente y escalable sin dedicar tiempo a tareas administrativas.

**Preguntas iniciales:**
1. ¿Cuál es tu tipo de servicio freelance (diseño, desarrollo, consultoría, copywriting, marketing)?
2. ¿Cuáles son las tareas administrativas que más tiempo te consumen actualmente?
3. ¿Cuántos clientes activos tienes en paralelo y cuál es el volumen de proyectos por mes?
4. ¿Cuál es tu mayor punto de dolor: encontrar clientes, gestionar proyectos, cobrar a tiempo o gestionar la carga de trabajo?

**EL STACK NO-CODE DEL FREELANCE POR ÁREA:**

CAPTACIÓN Y PROPUESTAS
La primera impresión con un cliente potencial empieza antes de la primera reunión. Ayúdame a diseñar el stack de captación y propuestas: el portfolio en Notion o una web en Webflow que presenta el trabajo y el proceso de manera profesional, la propuesta comercial en Notion o PandaDoc con los bloques predefinidos que personalizo para cada cliente (sobre mí, el problema que resuelvo, el enfoque, el entregable, el precio y el proceso de trabajo), el formulario de intake en Typeform o Tally que califica al lead antes de la primera llamada y el calendly o Cal.com integrado para que el cliente reserve la llamada de discovery sin ir y venir de emails.

CONTRATOS Y ONBOARDING DE CLIENTES
Empezar el proyecto sin un contrato firmado es el error más caro del freelance. Diseña conmigo el flujo de contratación y onboarding del cliente: el contrato estándar en HelloSign, Signaturit o DocuSign que incluye los términos de pago, los entregables, el proceso de revisiones y la propiedad intelectual del trabajo, el invoice de anticipo que se genera automáticamente cuando se firma el contrato y el kit de onboarding del cliente que establece las expectativas del proceso desde el primer día.

GESTIÓN DE PROYECTOS
El freelance que trabaja con múltiples clientes necesita un sistema de gestión de proyectos que le dé visibilidad sobre todo sin consumir horas de administración. Dame el diseño del sistema de gestión de proyectos no-code para el freelance: Notion o Linear para el tracking de tareas y entregables por proyecto, el tablero kanban que refleja el estado de cada proyecto de un vistazo y las plantillas de proyecto que aceleran el setup de cada nuevo cliente.

**FACTURACIÓN Y COBRO:**

FACTURACIÓN AUTOMATIZADA
La facturación manual es una de las tareas que más tiempo consume y más estrés genera al freelance. Ayúdame a diseñar el sistema de facturación automatizada: Invoice Ninja, Wave o Holded para la generación y envío de facturas, la configuración de facturas recurrentes para clientes de retainer, los recordatorios automáticos de pago para facturas vencidas y el registro automático de los pagos recibidos.

GESTIÓN DE TESORERÍA Y PREVISIÓN DE INGRESOS
El freelance que no sabe cuánto va a ingresar el próximo mes vive con estrés financiero innecesario. Dame el diseño del dashboard de tesorería del freelance no-code: la hoja de cálculo o la base de Airtable que muestra los ingresos confirmados, los proyectos en pipeline y la previsión de ingresos a 90 días, y el sistema de alertas que avisa cuando el pipeline se está vaciando para activar la búsqueda de nuevos clientes a tiempo.

**AUTOMATIZACIONES DEL STACK:**

LOS FLUJOS DE ZAPIER QUE CONECTAN TODO
El stack no-code del freelance genera valor exponencial cuando las herramientas están conectadas. Dame los flujos de Zapier o Make que automatizan los pasos entre herramientas: el flujo que crea el proyecto en Notion cuando se firma el contrato en DocuSign, el que genera la factura en Invoice Ninja cuando se aprueba el entregable final y el que archiva el proyecto y envía la encuesta de satisfacción cuando se registra el pago del saldo final.

COSTE Y PRIORIDAD DE IMPLEMENTACIÓN
El stack no-code tiene un coste mensual que debe estar justificado por el tiempo que ahorra. Ayúdame a calcular el coste total del stack recomendado, a priorizar la implementación empezando por las herramientas de mayor impacto en mi situación concreta y a establecer el criterio para añadir nuevas herramientas cuando el negocio crece.

Dame el stack no-code completo y el plan de implementación para que opere como una empresa profesional, cobre a tiempo y dedique la mayoría de mi tiempo al trabajo que me gusta y que mis clientes pagan, no a la administración.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Stack de herramientas no-code para freelancers que operan como una empresa',
                'vote_score'        => 46,
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
