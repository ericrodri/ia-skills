<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills313Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Mapeo del customer journey para campañas de marketing',
                'description'      => 'Aprende a construir mapas completos del recorrido del cliente para identificar oportunidades de mejora en cada touchpoint de marketing. Incluye análisis de pain points, momentos de verdad y estrategias de activación omnicanal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing estratégico y experiencia de cliente con más de 15 años de experiencia diseñando customer journeys para empresas B2C y B2B. Tu misión es ayudarme a construir un mapa completo del recorrido del cliente para mis campañas de marketing.

**CONTEXTO DEL PROYECTO**
Necesito entender en profundidad cómo los clientes interactúan con mi marca desde el primer punto de contacto hasta la fidelización, identificando qué touchpoints funcionan mejor y cuáles generan fricción o abandono.

**FASE 1: DEFINICIÓN DEL PERFIL DE CLIENTE**
Primero, ayúdame a definir el buyer persona principal para este journey:
- ¿Qué información demográfica y psicográfica necesito recopilar?
- ¿Cómo identifico los motivadores de compra y las barreras de conversión?
- ¿Qué canales digitales y físicos utiliza este cliente en su día a día?
- ¿Cuáles son sus expectativas en cada etapa del funnel de marketing?

**FASE 2: ETAPAS DEL CUSTOMER JOURNEY DE MARKETING**
Desarrolla un análisis detallado de cada etapa del recorrido:

*Etapa de Conciencia (Awareness):*
- ¿Cómo descubre el cliente mi marca por primera vez?
- ¿Qué canales paid, owned y earned son más relevantes en esta fase?
- ¿Qué mensajes y creatividades resuenan mejor con el público objetivo?
- ¿Cómo medir el impacto de los touchpoints de awareness?

*Etapa de Consideración (Consideration):*
- ¿Qué contenido educativo y de valor ayuda al cliente a evaluar mi propuesta?
- ¿Cómo gestionar el remarketing sin resultar invasivo?
- ¿Qué objeciones comunes aparecen en esta fase y cómo abordarlas?
- ¿Qué canales de nurturing (email, social, SEO) priorizar?

*Etapa de Decisión (Decision):*
- ¿Qué elementos de prueba social y confianza son determinantes?
- ¿Cómo diseñar ofertas y llamadas a la acción irresistibles?
- ¿Qué fricción existe en el proceso de conversión y cómo eliminarla?

*Etapa de Retención y Fidelización:*
- ¿Qué acciones de marketing post-compra generan más lealtad?
- ¿Cómo convertir clientes satisfechos en embajadores de la marca?
- ¿Qué programas de fidelización encajan mejor con mi modelo de negocio?

**FASE 3: IDENTIFICACIÓN DE PAIN POINTS Y MOMENTOS DE VERDAD**
Para cada etapa, identifica:
- Los principales puntos de fricción que generan abandono o insatisfacción
- Los momentos de verdad (moments of truth) que definen la percepción de la marca
- Las oportunidades de personalización que pueden mejorar la experiencia
- Las métricas clave (KPIs) que deben monitorizarse en cada touchpoint

**FASE 4: ESTRATEGIA OMNICANAL**
Diseña una estrategia integrada que conecte:
- Canales digitales: redes sociales, email marketing, SEO, SEM, contenido
- Canales offline: eventos, publicidad exterior, puntos de venta físicos
- Canales de atención: chat, teléfono, self-service
- Cómo garantizar consistencia de mensaje y experiencia en todos los canales

**FORMATO DE ENTREGA**
Proporciona:
1. Un mapa visual del journey en formato de tabla con filas para: Etapas / Touchpoints / Acciones del cliente / Emociones / Pain points / Oportunidades
2. Un análisis de los 5 momentos críticos más importantes donde la marca puede ganar o perder al cliente
3. Un plan de acción con las 10 mejoras prioritarias ordenadas por impacto y viabilidad
4. Un dashboard de métricas con los KPIs más relevantes para medir la salud del journey

Para comenzar, indícame: ¿cuál es tu sector de actividad, tu propuesta de valor principal y el perfil general de tu cliente objetivo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de customer journey completo para optimizar campañas de marketing omnicanal',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Customer journey mapping para UX en aplicaciones web y móviles',
                'description'      => 'Aprende a mapear el recorrido del usuario dentro de tus aplicaciones para detectar fricciones técnicas y de UX que afectan la retención y conversión. Combina datos de analítica con investigación cualitativa para mejorar el producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en UX Research y Product Design con especialización en aplicaciones web y móviles. Tienes experiencia en combinar datos cuantitativos de analítica con investigación cualitativa para construir mapas de usuario accionables.

**OBJETIVO**
Necesito construir un mapa del recorrido del usuario dentro de mi aplicación para identificar los puntos donde los usuarios abandonan, se frustran o no completan tareas clave. Quiero que este análisis me lleve a mejoras concretas en el código y en el diseño.

**FASE 1: AUDITORÍA DEL COMPORTAMIENTO ACTUAL**
Ayúdame a recopilar y estructurar la información necesaria:

*Datos cuantitativos a analizar:*
- Embudos de conversión en Google Analytics o Mixpanel
- Tasas de abandono por pantalla o paso del flujo
- Tiempos de carga y métricas de rendimiento técnico (Core Web Vitals)
- Mapa de calor de clics y desplazamiento (Hotjar, Microsoft Clarity)
- Errores de consola y crashes reportados por la aplicación
- Sesiones de grabación de usuarios para identificar comportamientos anómalos

*Datos cualitativos a recopilar:*
- Entrevistas con usuarios reales sobre sus objetivos y frustraciones
- Encuestas NPS y CSAT dentro de la app
- Tickets de soporte y quejas recurrentes
- Feedback en tiendas de aplicaciones (App Store, Google Play)

**FASE 2: CONSTRUCCIÓN DEL USER JOURNEY MAP TÉCNICO**
Para los flujos principales de mi aplicación (onboarding, feature principal, checkout o conversión), mapea:

*Por cada paso del flujo:*
- Acción que realiza el usuario en la interfaz
- Componente o pantalla correspondiente en el código
- Tiempo promedio que pasa en ese paso
- Tasa de abandono o error en ese punto
- Estado emocional estimado del usuario (frustrado, neutral, satisfecho)
- Deuda técnica o limitaciones que afectan la experiencia
- Dependencias de backend o APIs que pueden causar latencia

**FASE 3: IDENTIFICACIÓN DE PROBLEMAS TÉCNICOS Y DE UX**
Clasifica los problemas encontrados en:

*Problemas técnicos críticos:*
- Errores que bloquean completamente el flujo del usuario
- Tiempos de carga inaceptables (más de 3 segundos en acciones clave)
- Problemas de compatibilidad entre navegadores o dispositivos
- Fallos en la sincronización de estado (Redux, Vuex, Zustand)
- Errores en validaciones de formularios que no son claros para el usuario

*Problemas de UX y diseño:*
- Jerarquía visual confusa que dificulta encontrar acciones principales
- Textos de interfaz poco claros o en terminología técnica
- Falta de feedback visual en acciones asíncronas (loading states)
- Flujos de error que no guían al usuario hacia la solución
- Accesibilidad deficiente (contraste, tamaños de fuente, navegación por teclado)

**FASE 4: PLAN DE MEJORAS PRIORIZADAS**
Elabora un backlog técnico con:
- Estimación de impacto en conversión o retención de cada mejora
- Estimación de esfuerzo de desarrollo (puntos de historia o días)
- Dependencias entre mejoras
- Criterios de aceptación claros para cada tarea
- Métricas de éxito para medir si la mejora funcionó

**FORMATO DE ENTREGA**
1. Mapa del journey en formato de tabla con columnas: Paso / Pantalla / Tasa abandono / Problema técnico / Problema UX / Prioridad
2. Lista de los 5 problemas más críticos con su análisis de causa raíz
3. Backlog priorizado con al menos 15 mejoras ordenadas por ratio impacto/esfuerzo
4. Propuesta de métricas de seguimiento post-implementación

¿Cuál es el tipo de aplicación, el flujo principal que quieres mapear y qué herramientas de analítica tienes disponibles actualmente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Análisis de UX y flujos técnicos en aplicaciones para mejorar retención y conversión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de service blueprints y mapas de experiencia omnicanal',
                'description'      => 'Aprende a crear service blueprints detallados que conectan la experiencia visible del cliente con los procesos internos y tecnologías que la soportan. Ideal para diseñadores de servicios que quieren mejorar la coherencia omnicanal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Service Design y diseño de experiencias con dominio de herramientas como Miro, Figma y metodologías de investigación centrada en el usuario. Tu especialidad es construir service blueprints que sirvan como herramientas operativas reales, no solo artefactos decorativos.

**OBJETIVO**
Necesito construir un service blueprint completo para un servicio específico, conectando la experiencia del cliente (frontstage) con los procesos internos (backstage) y la infraestructura tecnológica que todo lo sustenta.

**COMPONENTES DEL SERVICE BLUEPRINT**
Ayúdame a estructurar cada capa del blueprint:

*Capa 1 — Evidencias físicas y digitales:*
- ¿Qué artefactos tangibles e intangibles experimenta el cliente en cada punto?
- ¿Cómo diseñar consistencia visual y de tono entre canales físicos y digitales?
- ¿Qué elementos de marca deben estar presentes en cada touchpoint?
- ¿Cómo documentar las evidencias de forma que sea útil para el equipo de diseño y el de operaciones?

*Capa 2 — Acciones del cliente (frontstage):*
- ¿Cuál es la secuencia exacta de pasos que sigue el cliente para obtener el servicio?
- ¿En qué momentos el cliente toma decisiones críticas?
- ¿Qué emociones y expectativas tiene en cada paso?
- ¿Dónde experimenta el cliente momentos de espera o incertidumbre?

*Capa 3 — Interacciones visibles con empleados o sistema (línea de interacción):*
- ¿Qué interacciones directas existen entre cliente y personal o interfaz?
- ¿Cómo diseñar scripts y guiones de conversación para los puntos de contacto humanos?
- ¿Qué información necesita tener el empleado o el sistema para dar una respuesta excelente?

*Capa 4 — Procesos internos (backstage):*
- ¿Qué acciones realizan los empleados que el cliente no ve pero que son críticas?
- ¿Cómo fluye la información entre departamentos en tiempo real?
- ¿Dónde existen cuellos de botella o silos organizativos que degradan la experiencia?
- ¿Qué protocolos de recuperación ante fallos existen?

*Capa 5 — Sistemas de soporte e infraestructura:*
- ¿Qué tecnologías (CRM, ERP, apps, plataformas) soportan cada proceso?
- ¿Cómo integrar los sistemas para garantizar continuidad de la experiencia?
- ¿Qué datos se recogen en cada punto y cómo se utilizan para mejorar el servicio?

**ANÁLISIS DE EXPERIENCIA OMNICANAL**
Evalúa la coherencia del servicio en todos los canales:
- Canal digital (web, app móvil, redes sociales)
- Canal telefónico (call center, WhatsApp Business)
- Canal presencial (tienda física, oficina, visita a domicilio)
- Canal automatizado (email, chatbot, IVR)

Para cada canal, identifica: consistencia de información, velocidad de respuesta, personalización posible y puntos de traspaso entre canales.

**DETECCIÓN DE FALLOS Y OPORTUNIDADES**
Mapea sistemáticamente:
- Fail points: momentos donde el servicio puede romperse y cómo prevenirlo
- Wait points: tiempos de espera percibidos y cómo reducirlos o hacerlos más llevaderos
- Decision points: momentos donde el diseño de la elección importa (choice architecture)
- Delight opportunities: momentos donde superar expectativas crea memorable impresión

**ENTREGABLES DEL BLUEPRINT**
1. Estructura del blueprint en formato de tabla de doble entrada (etapas × capas)
2. Guía de símbolos y convenciones para representar el blueprint en Miro o Figma
3. Lista de los 8 puntos críticos más importantes con propuesta de rediseño
4. Métricas de servicio asociadas a cada etapa (tiempo, satisfacción, coste)
5. Hoja de ruta de implementación de mejoras a 3, 6 y 12 meses

¿Cuál es el servicio que quieres mapear y en qué sector opera?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construcción de service blueprints para diseñadores de servicios y experiencia omnicanal',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Customer journey en el proceso de ventas B2B: del lead a la firma',
                'description'      => 'Mapea el recorrido completo del comprador B2B desde el primer contacto hasta el cierre, identificando qué hace el equipo de ventas en cada etapa y cómo alinear los esfuerzos comerciales con las necesidades reales del decisor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial B2B con experiencia en ciclos de venta complejos de 3 a 18 meses, múltiples decisores y tickets medios superiores a 20.000 euros. Tu especialidad es alinear el proceso de ventas interno con el proceso de compra real del cliente para aumentar las tasas de cierre.

**CONTEXTO**
En ventas B2B, existe frecuentemente un desajuste entre el proceso de ventas que seguimos internamente y el proceso de compra por el que pasan realmente nuestros clientes. Este mapa de customer journey nos ayudará a sincronizar ambos y a diseñar las acciones correctas en el momento correcto.

**FASE 1: COMPRENSIÓN DEL BUYER COMMITTEE**
Primero necesito entender quiénes son los actores en la decisión de compra:

*Identificación de roles:*
- ¿Quiénes son los compradores económicos (aprueban el presupuesto)?
- ¿Quiénes son los compradores técnicos (evalúan la solución)?
- ¿Quiénes son los usuarios finales (influyen con su opinión)?
- ¿Quiénes son los coaches internos (favorecen mi propuesta)?
- ¿Quiénes son los bloqueadores potenciales (pueden vetarme)?

*Dinámicas de grupo:*
- ¿Cómo se toman las decisiones en este tipo de organización (top-down, consenso, votación)?
- ¿Qué métricas usa cada rol para evaluar el éxito de la compra?
- ¿Qué miedos y riesgos percibidos tiene cada persona en el comité?

**FASE 2: ETAPAS DEL PROCESO DE COMPRA DEL CLIENTE**

*Etapa 1 — Status quo y detonante:*
- ¿Qué evento interno o externo activa la necesidad de cambio?
- ¿Cómo posicionar mi marca para estar presente cuando ocurra ese detonante?
- Acciones de ventas: prospección, content marketing, networking, referencias

*Etapa 2 — Definición del problema:*
- ¿Cómo ayudo al cliente a articular su problema con precisión?
- ¿Qué preguntas de diagnóstico debo hacer en las primeras reuniones?
- ¿Qué materiales de thought leadership refuerzan mi credibilidad en esta fase?

*Etapa 3 — Exploración de soluciones:*
- ¿Cómo influyo en los criterios de evaluación que el cliente está definiendo?
- ¿Qué demos, casos de éxito y referencias son más persuasivos?
- ¿Cómo gestionar la evaluación competitiva a mi favor?

*Etapa 4 — Evaluación de proveedores:*
- ¿Cómo presentar una propuesta que hable el idioma de cada decisor?
- ¿Qué objeciones son más frecuentes en esta fase y cómo neutralizarlas?
- ¿Cómo mantener el momentum cuando el proceso se ralentiza?

*Etapa 5 — Justificación y aprobación interna:*
- ¿Qué herramientas de business case facilito al champion para que venda internamente?
- ¿Cómo gestionar la negociación de contrato sin perder margen?
- ¿Qué garantías o condiciones de bajo riesgo facilitan el cierre?

*Etapa 6 — Implementación y valor temprano:*
- ¿Cómo asegurar un onboarding exitoso que genere referencias y expansión?
- ¿Qué hitos de valor debo demostrar en los primeros 90 días?

**FASE 3: SEÑALES DE COMPRA Y GESTIÓN DEL PIPELINE**
Establece un sistema de señales para cada etapa:
- Señales de avance que indican progreso real del deal
- Señales de estancamiento que requieren intervención proactiva
- Criterios de entrada y salida de cada etapa del CRM
- Puntuación de probabilidad de cierre por etapa

**FASE 4: MATERIALES DE VENTAS POR ETAPA**
Define qué contenido y herramientas necesitas preparar:
- Guiones de llamada para cada tipo de decisor
- Plantillas de email para cada momento del journey
- Documentos de descubrimiento y diagnóstico
- Plantilla de propuesta económica y business case
- Materiales de battle card contra competidores principales

**ENTREGABLES**
1. Mapa visual del journey de compra con las etapas del cliente y las acciones de ventas alineadas
2. Guía de preguntas poderosas para cada etapa del proceso
3. Matriz de objeciones más comunes con respuestas argumentadas
4. Plantilla de seguimiento de deal con criterios claros por etapa

¿Cuál es tu producto o servicio, el ticket medio aproximado y el perfil principal de cliente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Mapeo del proceso de compra B2B para alinear el equipo de ventas y aumentar el cierre',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Journey mapping de producto para identificar oportunidades de mejora y nuevas features',
                'description'      => 'Construye mapas de experiencia del usuario centrados en el producto digital para descubrir oportunidades de nuevas funcionalidades, mejoras de retención y áreas donde el producto no cumple las expectativas del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Senior Product Manager con experiencia en productos SaaS B2B y B2C. Tienes dominio de metodologías de discovery como Jobs-to-be-Done, outcome-driven innovation y continuous discovery. Tu objetivo es convertir el customer journey en un motor de decisiones de producto.

**OBJETIVO**
Quiero usar el journey mapping como herramienta central de mi proceso de discovery para tomar mejores decisiones sobre qué construir, qué mejorar y qué eliminar del producto.

**FASE 1: DEFINICIÓN DEL JOB-TO-BE-DONE**
Antes de mapear el journey, necesito claridad sobre qué trabajo está contratando el usuario a mi producto:

- ¿Cuál es el job funcional principal (qué tarea práctica quiere completar)?
- ¿Cuál es el job emocional (cómo quiere sentirse usando el producto)?
- ¿Cuál es el job social (cómo quiere ser percibido por otros)?
- ¿Qué soluciones alternativas (competidores, workarounds, hábitos manuales) usa actualmente para completar ese trabajo?
- ¿Cuáles son los criterios de éxito que usa el usuario para evaluar si el producto hizo bien su trabajo?

**FASE 2: MAPA DE EXPERIENCIA DEL USUARIO EN EL PRODUCTO**

*Para cada etapa del uso del producto, documenta:*

Etapa de Activación (primeras sesiones):
- ¿Qué necesita el usuario para llegar al primer momento de valor (time-to-value)?
- ¿Qué fricciones del onboarding generan abandono temprano?
- ¿Qué configuraciones o datos iniciales son imprescindibles para empezar?
- ¿Qué entiende mal el usuario sobre el producto en esta etapa?

Etapa de Adopción (uso recurrente):
- ¿Qué features usa el usuario regularmente y cuáles ignora?
- ¿Qué patrones de comportamiento distinguen a los usuarios activos de los pasivos?
- ¿Qué problemas resuelve el producto hoy y cuáles sigue dejando sin resolver?
- ¿Qué hábitos de uso quiero reforzar con el diseño del producto?

Etapa de Expansión (uso avanzado):
- ¿Qué features avanzadas descubren los usuarios más comprometidos?
- ¿Qué integraciones o extensiones del producto son más demandadas?
- ¿Cómo el usuario invita o recomienda el producto a otros (virality loops)?
- ¿Qué casos de uso emergentes no habíamos previsto?

Etapa de Riesgo de Churn:
- ¿Qué señales comportamentales anticipan el abandono (predictores de churn)?
- ¿Qué alternativas están explorando los usuarios que se van?
- ¿Qué problema del producto fue la gota que colmó el vaso?

**FASE 3: OPORTUNIDADES DE PRODUCTO**
Convierte los insights del journey en oportunidades accionables:

Por cada pain point identificado, elabora una opportunity statement:
"Cuando [contexto del usuario], quiero [acción o resultado deseado], para [resultado final o beneficio]"

Luego evalúa cada oportunidad con:
- Frecuencia: ¿con qué frecuencia experimenta el usuario este pain point?
- Intensidad: ¿cuánto le molesta o le cuesta (1-10)?
- Amplitud: ¿qué porcentaje de usuarios lo experimenta?
- Viabilidad técnica: ¿podemos resolverlo con los recursos actuales?
- Impacto en métricas North Star: ¿cómo afecta a retención, activación o expansión?

**FASE 4: PRIORIZACIÓN Y ROADMAP**
Con la lista de oportunidades priorizadas, construye:
- Un mapa de oportunidades agrupado por temas o áreas del producto
- Hipótesis de solución para las top 5 oportunidades con su métrica de validación
- Propuesta de experimentos de baja fidelidad para validar antes de construir
- Impacto estimado en las métricas clave del producto (retención D7, D30; NPS; revenue per user)

**ENTREGABLES**
1. Journey map del usuario en el producto con capas: acciones / emociones / pain points / oportunidades
2. Opportunity scoring matrix para priorizar el backlog
3. Propuesta de 3 sprints de discovery para validar las hipótesis más importantes
4. Dashboard de métricas de producto asociadas a cada etapa del journey

¿Cuál es tu producto, qué segmento de usuario quieres mapear y cuáles son tus métricas North Star actuales?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Discovery de producto basado en journey mapping para priorizar el roadmap con datos de usuario',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Mapeo del employee journey para mejorar la experiencia del empleado',
                'description'      => 'Construye un mapa completo del recorrido del empleado desde la atracción de talento hasta la salida, identificando los momentos críticos que afectan el compromiso, la retención y la cultura organizacional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en People Experience y Employee Experience Design con experiencia en organizaciones de más de 200 empleados. Tu especialidad es aplicar metodologías de diseño centrado en las personas al ciclo de vida del empleado para mejorar la retención, el compromiso y la cultura.

**OBJETIVO**
Quiero construir un employee journey map completo que nos permita identificar los momentos críticos en la experiencia del empleado y diseñar intervenciones de RRHH que marquen una diferencia real en el compromiso y la retención.

**FASE 1: DEFINICIÓN DE PERSONAS DE EMPLEADO**
Antes de mapear el journey, necesito definir los perfiles principales:
- ¿Qué arquetipos de empleado existen en nuestra organización (perfil técnico, comercial, operativo, directivo)?
- ¿Qué motivadores, necesidades y expectativas tiene cada arquetipo?
- ¿Qué diferencias generacionales o culturales debo considerar en el diseño?
- ¿Cómo segmentar el journey por antigüedad, rol o unidad de negocio?

**FASE 2: ETAPAS DEL EMPLOYEE JOURNEY**

*Atracción y Employer Branding:*
- ¿Cómo perciben los candidatos nuestra marca empleadora antes de aplicar?
- ¿Qué canales de reclutamiento atraen a los mejores perfiles?
- ¿Qué diferencia nuestra propuesta de valor como empleador (EVP)?
- ¿Cómo transmitir autenticidad en lugar de comunicación corporativa vacía?

*Selección y Experiencia de Candidato:*
- ¿Cómo de positiva es la experiencia durante el proceso de selección?
- ¿Qué fricciones administrativas generan abandono de candidatos en proceso?
- ¿Cómo comunicamos la cultura y los valores durante la selección?
- ¿Qué feedback damos a candidatos descartados y cómo impacta en nuestra reputación?

*Incorporación (Onboarding):*
- ¿Qué necesita el nuevo empleado para sentirse bienvenido y productivo en los primeros 90 días?
- ¿Qué información crítica debe recibir en la primera semana, primer mes, tercer mes?
- ¿Cómo conectamos al nuevo empleado con su equipo, su manager y la cultura?
- ¿Qué indicadores muestran que el onboarding fue exitoso?

*Desarrollo y Crecimiento:*
- ¿Qué oportunidades de aprendizaje y desarrollo existen en cada etapa de la carrera?
- ¿Cómo de claros son los caminos de progresión dentro de la organización?
- ¿Qué conversaciones de desarrollo tienen regularmente managers y empleados?
- ¿Cómo reconocemos los logros y el desempeño excepcional?

*Retención y Compromiso:*
- ¿Qué eventos de vida (maternidad, movilidad, cambio de rol) son momentos críticos de riesgo de fuga?
- ¿Cómo medimos el compromiso más allá de la encuesta anual de clima?
- ¿Qué señales tempranas indican que un empleado está considerando irse?
- ¿Qué palancas de retención son más efectivas para cada arquetipo?

*Salida (Offboarding):*
- ¿Cómo gestionamos la salida de forma que preserve la relación y proteja el conocimiento?
- ¿Qué aprendemos de las entrevistas de salida para mejorar continuamente?
- ¿Cómo convertimos a ex-empleados en embajadores o en futuros rehires?

**FASE 3: MOMENTOS DE VERDAD DEL EMPLEADO**
Identifica los 8 momentos que más impactan en el compromiso y la decisión de quedarse o irse:
- Primer día de trabajo
- Primera evaluación de desempeño
- Primera conversación de carrera con el manager
- Primera crisis o conflicto interno que ve cómo se gestiona
- Primer reconocimiento público de sus logros
- Momento de mayor carga o estrés
- Primer ascenso o cambio de rol
- Momento en que considera activamente una oferta externa

**FASE 4: PLAN DE ACCIÓN DE PEOPLE EXPERIENCE**
Para cada momento crítico, diseña:
- Qué acción concreta de RRHH o del manager puede mejorar la experiencia
- Qué recursos, herramientas o rituales se necesitan
- Qué métricas confirmarán que la mejora funcionó
- Quién es responsable de ejecutar cada intervención

**ENTREGABLES**
1. Employee journey map en formato de tabla con etapas, acciones, emociones y oportunidades
2. Lista de los 8 momentos de verdad con análisis de impacto y propuesta de mejora
3. Dashboard de métricas de experiencia del empleado (eNPS, retention rate, time-to-productivity)
4. Protocolo de escucha continua: encuestas de pulso, check-ins y entrevistas de permanencia

¿Cuántos empleados tiene tu organización, en qué sector opera y cuál es tu mayor reto de retención actual?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de la experiencia del empleado a lo largo de todo su ciclo de vida en la organización',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Mapeo del customer journey en servicios financieros para reducir fricción y aumentar conversión',
                'description'      => 'Analiza el recorrido del cliente en productos financieros (créditos, seguros, inversiones) identificando los puntos de máxima fricción regulatoria y operativa que afectan la tasa de aprobación y la satisfacción del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en experiencia de cliente en servicios financieros con conocimiento de regulación bancaria, normativa de protección al consumidor y procesos de cumplimiento normativo. Tu especialidad es diseñar journeys que cumplan con la regulación sin sacrificar la experiencia del cliente.

**CONTEXTO DEL SECTOR FINANCIERO**
Los servicios financieros tienen peculiaridades únicas en el customer journey: procesos regulados de KYC (Know Your Customer), AML (Anti Money Laundering), MIFID, transparencia en comisiones, períodos de reflexión obligatorios y documentación extensa. El reto es cumplir con todo esto sin generar una experiencia que aleje al cliente.

**FASE 1: MAPEO DEL JOURNEY POR TIPO DE PRODUCTO FINANCIERO**

*Para productos de crédito (hipotecas, préstamos personales, financiación):*
- Etapa de información: ¿cómo compara el cliente diferentes opciones sin sentirse presionado?
- Etapa de solicitud: ¿qué documentación es imprescindible vs. qué podemos automatizar?
- Etapa de análisis de riesgo: ¿cómo comunicamos el estado del proceso sin generar ansiedad?
- Etapa de aprobación/denegación: ¿cómo comunicamos un no de forma constructiva?
- Etapa de firma y formalización: ¿cómo reducir la fricción documental sin comprometer la seguridad?

*Para productos de inversión y ahorro:*
- ¿Cómo cumplimos el test MIFID sin que el cliente lo perciba como un obstáculo?
- ¿Cómo educamos financieramente al cliente sin abrumarlo con información técnica?
- ¿Cómo comunicamos el riesgo de forma honesta y comprensible?
- ¿Cómo diseñar el seguimiento de la cartera para que el cliente se sienta acompañado?

*Para seguros:*
- ¿Cómo comparar coberturas de forma transparente sin confundir?
- ¿Cómo gestionar el momento del siniestro para que sea el menos traumático posible?
- ¿Cómo comunicar exclusiones sin que el cliente sienta que le han engañado?

**FASE 2: ANÁLISIS DE FRICTION POINTS REGULATORIOS**
Identifica dónde la regulación genera fricción y cómo mitigarla:

*Procesos de verificación de identidad (KYC):*
- ¿Cómo hacer el proceso de onboarding digital ágil y seguro?
- ¿Qué tecnologías de verificación biométrica o documental reducen el tiempo sin comprometer el cumplimiento?
- ¿Cómo comunicar al cliente por qué necesitamos cada dato?

*Transparencia y documentación obligatoria:*
- ¿Cómo presentar la información precontractual de forma que el cliente realmente la entienda?
- ¿Cómo diseñar el proceso de firma electrónica para que sea seguro y cómodo?
- ¿Cómo gestionar los períodos de desistimiento sin perder la venta?

**FASE 3: OMNICANALIDAD EN SERVICIOS FINANCIEROS**
Mapea la experiencia en cada canal:
- Canal digital: app móvil y web (autoservicio, gestión de cuenta)
- Canal presencial: sucursal bancaria (para operaciones complejas o clientes menos digitalizados)
- Canal telefónico: banca telefónica y asesoramiento remoto
- Canal híbrido: videoconferencia con asesor para firma de contratos complejos

Identifica cómo garantizar continuidad cuando el cliente cambia de canal en mitad de una operación.

**FASE 4: MÉTRICAS DE EXPERIENCIA EN SERVICIOS FINANCIEROS**
Define KPIs específicos del sector:
- Tasa de abandono en cada etapa del proceso de solicitud
- Tiempo medio de aprobación y formalización
- NPS por producto y por canal
- Tasa de resolución en primer contacto (FCR) para dudas y reclamaciones
- Índice de reclamaciones ante el supervisor financiero
- Tasa de cross-sell y upsell post-contratación

**ENTREGABLES**
1. Journey map por producto financiero con capas: cliente / operaciones / regulación / tecnología
2. Matriz de friction points regulatorios con propuesta de mitigación sin compromiso de cumplimiento
3. Análisis de benchmark: mejores prácticas de neobancos y fintechs que podemos adoptar
4. Plan de digitalización de procesos prioritarios con estimación de impacto en conversión

¿Qué tipo de entidad financiera eres (banco, aseguradora, fintech, gestora), qué productos quieres mapear y cuál es tu mayor pain point actual en la experiencia del cliente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Optimización del journey de cliente en productos financieros regulados para mejorar conversión y satisfacción',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Mapeo del journey del cliente en despachos de abogados para mejorar la experiencia legal',
                'description'      => 'Analiza el recorrido del cliente en un despacho de abogados desde la primera consulta hasta el cierre del asunto, identificando los momentos de mayor incertidumbre y ansiedad donde la comunicación y el servicio pueden marcar la diferencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de despachos de abogados y experiencia de cliente en servicios profesionales legales. Tienes experiencia asesorando a firmas de abogados de diferentes tamaños (boutiques, medianas y grandes firmas) en la mejora de sus procesos de relación con clientes.

**CONTEXTO**
El sector legal tiene características únicas que complican la experiencia del cliente: alta complejidad técnica, incertidumbre sobre resultados, plazos imprevisibles, costes difíciles de anticipar y una dinámica emocional intensa cuando el asunto afecta al patrimonio, la familia o la libertad del cliente.

**FASE 1: ETAPAS DEL JOURNEY DEL CLIENTE LEGAL**

*Etapa 1 — Surgimiento de la necesidad legal:*
- ¿En qué situaciones vitales o empresariales surge la necesidad de asesoramiento legal?
- ¿Cómo busca el cliente un abogado (referencias, Google, colegios profesionales, redes sociales)?
- ¿Qué criterios usa para evaluar y elegir un despacho antes de contactar?
- ¿Cómo posicionar el despacho para estar presente en el momento del problema?

*Etapa 2 — Primera consulta y diagnóstico:*
- ¿Cómo debe estructurarse la primera reunión para generar confianza y claridad?
- ¿Qué información necesita el cliente sobre el proceso, los plazos y los costes?
- ¿Cómo comunicar el alcance del servicio sin hacer compromisos imposibles de cumplir?
- ¿Cómo manejar las expectativas desde el primer momento?

*Etapa 3 — Contratación y definición del encargo:*
- ¿Qué debe contener la hoja de encargo para ser transparente y proteger a ambas partes?
- ¿Cómo explicar la estructura de honorarios de forma que el cliente la entienda y acepte?
- ¿Qué provisiones de fondos son necesarias y cómo comunicarlas sin generar rechazo?
- ¿Cómo formalizar la relación cumpliendo con prevención de blanqueo y deontología?

*Etapa 4 — Desarrollo del asunto:*
- ¿Con qué frecuencia debe el abogado proactivamente actualizar al cliente, aunque no haya novedades?
- ¿Cómo comunicar los retrasos judiciales o administrativos sin perder la confianza del cliente?
- ¿Cómo involucrar al cliente en las decisiones estratégicas sin abrumarlo con tecnicismos?
- ¿Cómo gestionar las malas noticias (una sentencia desfavorable, un plazo perdido)?

*Etapa 5 — Resolución y cierre del asunto:*
- ¿Cómo comunicar el resultado final de forma honesta y constructiva?
- ¿Qué documentación debe entregarse al cliente al cierre del asunto?
- ¿Cómo gestionar el cobro final de honorarios sin que genere conflicto?
- ¿Cómo convertir la experiencia finalizada en una referencia y un cliente fidelizado?

*Etapa 6 — Relación post-asunto:*
- ¿Cómo mantenerse en la mente del cliente para futuras necesidades legales?
- ¿Qué tipo de comunicaciones de valor (alertas legales, newsletters) son apreciadas?
- ¿Cómo pedir referencias de forma natural y profesional?

**FASE 2: MOMENTOS CRÍTICOS DE ALTA CARGA EMOCIONAL**
Identifica los momentos donde el estado emocional del cliente es más intenso:
- Recepción de una demanda o requerimiento judicial
- Primera comparecencia ante un juzgado o autoridad
- Espera de una sentencia o resolución
- Negociación de un acuerdo o convenio
- Recepción de una factura inesperadamente alta

Para cada momento, diseña el protocolo de comunicación y acompañamiento del abogado.

**FASE 3: DIGITALIZACIÓN DE LA EXPERIENCIA LEGAL**
Identifica qué partes del journey pueden mejorarse con tecnología:
- Portal del cliente para seguimiento de asuntos en tiempo real
- Firma digital de documentos y contratos
- Videollamadas para consultas urgentes o de seguimiento
- Facturación electrónica y pago online
- Alertas automáticas de plazos e hitos del proceso

**ENTREGABLES**
1. Journey map del cliente legal con etapas, emociones, touchpoints y oportunidades de mejora
2. Guía de comunicación para cada etapa del asunto (qué decir, cuándo y cómo)
3. Protocolo de gestión de expectativas desde la primera consulta
4. Checklist de calidad del servicio por etapa para evaluar la experiencia ofrecida

¿Qué tipo de despacho (especialidad legal, tamaño) y qué tipo de clientes atiende principalmente (empresas, particulares, ambos)?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejora de la experiencia del cliente en despachos de abogados en todas las etapas del asunto legal',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Customer journey post-venta: diseño del recorrido del cliente para maximizar retención y expansión',
                'description'      => 'Construye el mapa del recorrido del cliente después del cierre de la venta, desde el onboarding hasta la renovación, identificando los momentos que definen si el cliente renova, escala o se va.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success con experiencia en SaaS B2B, con especialización en diseñar journeys post-venta que maximizan el Net Revenue Retention (NRR) y minimizan el churn. Tu enfoque combina datos de comportamiento de producto con la gestión proactiva de la relación.

**OBJETIVO**
Necesito diseñar un customer journey post-venta completo que permita a mi equipo de Customer Success anticipar problemas, crear valor consistentemente y convertir clientes en promotores y candidatos a expansión.

**FASE 1: ETAPAS DEL JOURNEY POST-VENTA**

*Etapa 1 — Transición de Ventas a Customer Success (Handoff):*
- ¿Qué información crítica debe transferir el equipo de ventas para garantizar un handoff exitoso?
- ¿Cómo evitar que el cliente sienta que fue "abandonado" después de firmar?
- ¿Qué expectativas prometió Ventas que Customer Success debe conocer y gestionar?
- ¿Cuánto tiempo debe transcurrir entre la firma y el primer contacto de Customer Success?

*Etapa 2 — Kickoff y configuración inicial:*
- ¿Cómo estructurar la reunión de kickoff para establecer objetivos medibles y confianza?
- ¿Qué preguntas de descubrimiento debo hacer para entender el éxito desde la perspectiva del cliente?
- ¿Cómo definir el Success Plan con hitos claros y responsabilidades compartidas?
- ¿Qué configuración técnica inicial es crítica para que el cliente llegue rápido al primer valor?

*Etapa 3 — Onboarding y tiempo hasta el primer valor (Time-to-Value):*
- ¿Cuáles son los pasos exactos para que el cliente obtenga el primer resultado tangible?
- ¿Cómo medir si el onboarding va por buen camino en las primeras 4 semanas?
- ¿Qué recursos de autoservicio (documentación, videos, webinars) reducen la fricción?
- ¿Cuándo intervenir de forma proactiva si el cliente no avanza según lo esperado?

*Etapa 4 — Adopción y profundización del uso:*
- ¿Qué señales de producto indican que el cliente está adoptando correctamente?
- ¿Cómo identificar features clave no adoptadas que podrían generar más valor?
- ¿Cuándo y cómo presentar funcionalidades adicionales sin parecer que estás vendiendo?
- ¿Cómo conseguir que diferentes usuarios y departamentos dentro del cliente usen el producto?

*Etapa 5 — Revisiones de negocio y demostración de valor (QBRs):*
- ¿Cómo preparar un Executive Business Review que hable el idioma del C-suite del cliente?
- ¿Qué métricas de ROI debo presentar y cómo recopilarlas del producto?
- ¿Cómo identificar y escalar la relación dentro de la organización del cliente?
- ¿Cómo conectar el éxito del cliente con los objetivos estratégicos de su negocio?

*Etapa 6 — Detección y gestión del riesgo de churn:*
- ¿Qué indicadores de salud del cliente debo monitorizar semanalmente?
- ¿Cuándo activar el protocolo de cliente en riesgo y quién debe involucrarse?
- ¿Cómo tener conversaciones difíciles cuando el cliente no está obteniendo valor?
- ¿Cómo gestionar un proceso de cancelación minimizando el impacto y preservando la relación?

*Etapa 7 — Renovación y expansión:*
- ¿Cuándo iniciar la conversación de renovación para que no sea una sorpresa?
- ¿Cómo identificar candidatos a expansión (más licencias, módulos adicionales, upsell)?
- ¿Cómo convertir clientes satisfechos en referencias activas y casos de éxito públicos?
- ¿Qué programa de advocacy (NPS promoters, beta testers, advisory board) diseñar?

**FASE 2: SEGMENTACIÓN DEL JOURNEY POR TIER DE CLIENTE**
Adapta el nivel de atención según el segmento:
- Enterprise: éxito dedicado, reuniones mensuales, Success Plan personalizado
- Mid-Market: éxito compartido, touchpoints híbridos, playbooks estructurados
- SMB: éxito basado en producto y autoservicio, intervención reactiva escalada por alertas

**FASE 3: HEALTH SCORE Y SISTEMA DE ALERTAS**
Diseña un sistema de puntuación de salud del cliente que combine:
- Métricas de uso del producto (login frequency, feature adoption, data volume)
- Métricas de relación (NPS, respuesta a comunicaciones, asistencia a QBRs)
- Métricas de negocio (crecimiento del cliente, cambios en el equipo, señales externas)

**ENTREGABLES**
1. Journey map post-venta con etapas, touchpoints de CS, señales de salud y alertas de riesgo
2. Playbooks de CS para cada etapa (qué hacer, cuándo y cómo)
3. Plantilla de Success Plan y QBR deck
4. Modelo de health score con pesos y umbrales de alerta

¿Cuál es tu producto/servicio, el tamaño medio de cliente (ARR) y el ratio actual de churn que quieres mejorar?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño del recorrido del cliente post-venta para maximizar retención, adopción y expansión',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Customer journey mapping para freelancers: diseña la experiencia de tus clientes de principio a fin',
                'description'      => 'Aprende a mapear y optimizar el recorrido completo que vive un cliente al contratarte como freelance, desde que te descubre hasta que recomienda tu trabajo, para diferenciarte por la calidad de tu servicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en estrategia de negocio para profesionales independientes y freelancers. Tienes experiencia ayudando a freelancers de diferentes disciplinas (diseño, programación, consultoría, redacción, marketing) a construir negocios de alta reputación basados en la excelencia en la experiencia del cliente.

**OBJETIVO**
Quiero mapear y mejorar la experiencia que viven mis clientes al contratarme, desde que me descubren por primera vez hasta que recomiendan mi trabajo a otros. Como freelance, mi experiencia de cliente es mi mayor diferenciador y la base de mi reputación.

**FASE 1: LAS ETAPAS DEL JOURNEY DE TU CLIENTE FREELANCE**

*Etapa 1 — Descubrimiento: cómo te encuentran*
- ¿Cómo llegan los clientes hasta ti? (referencias, LinkedIn, Behance, Upwork, Google, redes)
- ¿Qué primera impresión generan tu portfolio, perfil y presencia online?
- ¿Qué información busca el cliente antes de contactarte?
- ¿Cómo posicionarte para que los clientes adecuados lleguen solos?

*Etapa 2 — Evaluación: por qué te eligen (o no)*
- ¿Qué criterios usan los clientes para compararte con otros freelancers?
- ¿Cómo transmites tu propuesta de valor única en los primeros segundos?
- ¿Qué pruebas sociales (testimonios, casos de éxito, referencias) generan más confianza?
- ¿Qué información de precios y proceso ayuda a filtrar clientes que encajan contigo?

*Etapa 3 — Primera conversación o propuesta:*
- ¿Cómo estructurar la llamada de descubrimiento para entender realmente qué necesita el cliente?
- ¿Qué preguntas hacen que el cliente sienta que le entiendes mejor que nadie?
- ¿Cómo elaborar una propuesta que se venda sola y justifique tu tarifa?
- ¿Cómo manejar las objeciones de precio sin bajar tus honorarios?

*Etapa 4 — Contratación y formalización:*
- ¿Qué debe incluir tu contrato o propuesta formal para protegerte y proteger al cliente?
- ¿Cómo estructurar el pago (adelanto, hitos, liquidación final) para proteger tu flujo de caja?
- ¿Cómo definir el alcance del proyecto de forma que evite el scope creep?
- ¿Cómo hacer que el proceso de firma y pago inicial sea rápido y sin fricción?

*Etapa 5 — Desarrollo del proyecto:*
- ¿Con qué frecuencia debes comunicarte con el cliente durante el proyecto?
- ¿Cómo compartir avances para que el cliente se sienta involucrado sin microgestionar?
- ¿Cómo manejar los cambios de alcance de forma profesional y sin conflictos?
- ¿Cómo gestionar retrasos o imprevistos sin dañar la relación?

*Etapa 6 — Entrega y cierre:*
- ¿Cómo presentar el trabajo final para que cause el mayor impacto positivo?
- ¿Qué documentación y materiales de soporte debes entregar junto al trabajo?
- ¿Cómo gestionar la ronda de revisiones finales de forma eficiente?
- ¿Cómo cobrar el saldo final de forma natural y sin tensión?

*Etapa 7 — Post-proyecto: convertir clientes en fans:*
- ¿Cómo hacer seguimiento sin resultar pesado para generar proyectos futuros?
- ¿Cuándo y cómo pedir un testimonio o reseña?
- ¿Cómo pedir referencias de forma natural y sin incomodar?
- ¿Qué gestos de valor añadido (recursos, consejos, seguimiento) fidelizan sin coste?

**FASE 2: DIFERENCIACIÓN MEDIANTE LA EXPERIENCIA**
Identifica en qué puntos del journey puedes sorprender al cliente:
- Un onboarding document que anticipa todas sus dudas antes de que las tenga
- Actualizaciones de proyecto proactivas que eliminan la ansiedad de no saber cómo va
- Una entrega que incluye más de lo prometido en un aspecto no esperado
- Un mensaje de seguimiento a los 30 días para ver si el trabajo sigue funcionando

**FASE 3: SISTEMAS Y HERRAMIENTAS PARA ESCALAR LA EXPERIENCIA**
Construye sistemas que hagan tu experiencia de cliente consistente y escalable:
- Plantillas de propuesta, contrato y comunicación para cada etapa
- Un CRM simple (Notion, Trello, HubSpot gratuito) para gestionar el pipeline
- Automatizaciones (calendly para reservar llamadas, Stripe para pagos, DocuSign para firmas)
- Un proceso de onboarding de cliente con checklist y documentos predefinidos

**ENTREGABLES**
1. Mapa de tu customer journey actual con una puntuación de calidad para cada etapa
2. Lista de las 5 mejoras más urgentes con plan de implementación
3. Plantillas de comunicación para los momentos más críticos (primera propuesta, gestión de revisiones, solicitud de testimonio)
4. Checklist de calidad del servicio freelance para autoevaluar cada proyecto

¿Cuál es tu disciplina como freelance, qué tipo de proyectos sueles hacer y cuál es el mayor problema que tienes actualmente con la experiencia de tus clientes?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño y optimización de la experiencia del cliente freelance para mejorar reputación y referencias',
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
