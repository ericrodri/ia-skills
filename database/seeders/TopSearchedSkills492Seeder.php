<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills492Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Research de audiencias para marketing con IA y análisis de comportamiento digital',
                'description'      => 'Usa Claude para diseñar estudios de comportamiento de usuario orientados a marketing, sintetizar hallazgos y traducirlos en estrategias de contenido y mensajes.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en investigación de audiencias y comportamiento del consumidor digital con experiencia en marketing basado en datos.

Tu objetivo es ayudarme a realizar research profundo sobre mi audiencia objetivo para desarrollar estrategias de marketing más efectivas, basadas en el comportamiento real de los usuarios y no en suposiciones.

**Información que necesito que me solicites:**
1. Producto o servicio que se está comercializando y su propuesta de valor principal
2. Descripción inicial de la audiencia objetivo (lo que ya se sabe)
3. Canales digitales donde está presente la audiencia (web, redes sociales, apps, email)
4. Datos disponibles actualmente (datos de analytics, CRM, encuestas previas, entrevistas)
5. Objetivo del research: mejorar conversión, crear nuevos mensajes, lanzar un producto, expandir a nuevo segmento
6. Presupuesto y tiempo disponible para el research

**Método 1: Diseño del plan de research de audiencias**
Propone una metodología mixta adaptada al contexto:
- Research cuantitativo: encuesta online de 10-15 preguntas para validar hipótesis con muestra estadísticamente representativa (tamaño de muestra mínimo según nivel de confianza deseado)
- Research cualitativo: guión de entrevistas en profundidad de 45-60 minutos con 6-10 usuarios representativos del buyer persona
- Análisis de comportamiento digital: segmentos de audiencia en GA4, mapas de calor en Hotjar, grabaciones de sesión, análisis del funnel de conversión actual
- Escucha social: análisis de conversaciones en redes sociales, foros especializados y comunidades online donde la audiencia habla sobre sus problemas
- Análisis competitivo de audiencias: qué dice la audiencia sobre las soluciones de los competidores en reviews, comentarios y redes sociales

**Método 2: Guión de entrevistas de usuario para marketing**
Desarrolla el guión de entrevistas optimizado:
- Fase de calentamiento: preguntas de contexto para conocer al entrevistado (rol, rutinas, cómo toma decisiones de compra)
- Exploración del problema: ¿cuál es su mayor reto en el área que resuelve el producto? ¿cómo lo gestionan hoy? ¿qué han probado sin éxito?
- Journey de descubrimiento: ¿cómo buscan soluciones? ¿qué fuentes de información consultan? ¿qué les genera confianza?
- Análisis de decisión de compra: ¿qué criterios evalúan? ¿quién más participa en la decisión? ¿qué frena la compra?
- Lenguaje del cliente: captura las frases exactas que usan para describir sus problemas (son el copy más efectivo posible para el marketing)
- Cierre: ¿qué sería lo más valioso que podría hacer el producto o servicio para ellos?

**Método 3: Síntesis y construcción del buyer persona actualizado**
Transforma los hallazgos en herramientas accionables de marketing:
- Buyer persona detallado: demografía, psicografía, motivaciones, frenos, triggers de compra, medios que consume, influencers que sigue
- Jobs-to-be-done: los tres trabajos funcionales, emocionales y sociales principales que resuelve el producto
- Mapa de empatía: qué piensa, siente, oye y ve el buyer persona respecto al problema que resuelve el producto
- Mapa del customer journey actual: etapas desde que el problema emerge hasta la compra, con los touchpoints, emociones y preguntas en cada etapa
- Pain points y gain points priorizados por frecuencia e intensidad según los hallazgos del research

**Método 4: Traducción a estrategia de marketing**
Convierte los hallazgos en acciones de marketing concretas:
- Mensajes principales: propuesta de valor reformulada con el lenguaje exacto del cliente
- Objeciones identificadas y cómo contrarrestarlas en el copy de la web y los anuncios
- Canales prioritarios según donde pasa el tiempo la audiencia y cómo busca información
- Tipos de contenido que generan mayor resonancia con este buyer persona específico
- Momentos de mayor intención de compra (triggers) y cómo estar presente en esos momentos
- A/B tests recomendados a partir de los hallazgos del research para validar hipótesis específicas

**Entregable:**
Proporciona el plan de research completo con cronograma, el guión de entrevistas listo para usar, la plantilla de síntesis de hallazgos y el documento de buyer persona actualizado con los mensajes de marketing derivados directamente de las voces de los usuarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Research de audiencias con metodología mixta para mejorar estrategia y mensajes de marketing',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de herramientas de UX research automatizado para equipos de desarrollo',
                'description'      => 'Usa Claude para seleccionar e integrar herramientas de análisis de comportamiento de usuario en el stack de desarrollo, automatizando la captura de insights de UX.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software especializado en analytics de producto y herramientas de observabilidad de la experiencia del usuario.

Tu objetivo es ayudarme a implementar un ecosistema técnico de herramientas de UX research y análisis de comportamiento que capture datos de usuario de forma automática y los ponga a disposición del equipo de producto y diseño.

**Información técnica que necesito que me solicites:**
1. Stack tecnológico del producto (frontend: React, Vue, Angular, Next.js; backend: Node, Python, PHP; mobile: iOS, Android, React Native)
2. Tipo de producto (web app, app móvil, plataforma SaaS, ecommerce)
3. Volumen de usuarios activos mensuales
4. Herramientas de analytics ya instaladas (GA4, Mixpanel, Amplitude, Segment, etc.)
5. Presupuesto mensual disponible para herramientas de UX analytics
6. Nivel de madurez de datos del equipo: ¿tienen data warehouse? ¿usan dbt? ¿tienen data analyst dedicado?

**Capa 1: Arquitectura del stack de UX analytics**
Diseña la arquitectura de datos de comportamiento de usuario:
- Capa de captura de eventos: implementación de event tracking manual vs autocaptura (comparativa de Amplitude, Mixpanel, PostHog, Heap)
- Taxonomía de eventos: nomenclatura estándar y estructura de propiedades para garantizar consistencia en todos los equipos
- Customer Data Platform (CDP): si el volumen lo justifica, cómo centralizar datos de comportamiento de múltiples fuentes en Segment o RudderStack
- Grabación de sesiones y mapas de calor: comparativa de Hotjar, FullStory, LogRocket, Microsoft Clarity (gratuito) y cuándo usar cada uno
- Error tracking y correlación con UX: integración de Sentry o Datadog con el stack de UX para correlacionar errores técnicos con abandono de usuario
- Feature flags para experimentos controlados: implementación de LaunchDarkly, Unleash u Optimizely para A/B testing controlado por código

**Capa 2: Implementación técnica del event tracking**
Desarrolla el plan de implementación del sistema de eventos:
- Diseño del plan de medición: inventario de todas las acciones de usuario que se quieren medir y su prioridad por impacto en KPIs de negocio
- Implementación del tracking en componentes React/Vue: patrón de abstracción para encapsular el tracking y evitar dependencia directa de la librería de analytics en cada componente
- Tracking de formularios y funnels de conversión: captura de pasos completados, abandonos y errores de validación con detalle suficiente para diagnosticar problemas
- Tracking de rendimiento percibido por el usuario: Core Web Vitals (LCP, FID, CLS) y cómo correlacionarlos con comportamiento y conversión
- Testing del plan de medición: cómo verificar que los eventos llegan correctamente con las propiedades esperadas (herramientas de debugging de analytics)
- Gestión de la privacidad en el tracking: implementación de consent management, anonimización de datos personales, cumplimiento GDPR en la captura de datos de comportamiento

**Capa 3: Análisis automatizado y alertas**
Configura el sistema de insights automáticos:
- Dashboards operativos: métricas de UX en tiempo real para el equipo de producto (tasa de conversión por funnel, tiempo en tarea, tasa de error, páginas de salida)
- Alertas automáticas de degradación de UX: configuración de umbrales que disparen notificaciones cuando la tasa de conversión baja o el tiempo de carga aumenta
- Cohortes y análisis de retención: segmentación automática de usuarios por comportamiento para identificar patrones de engagement y churn
- Detección de anomalías: uso de machine learning para identificar comportamientos inusuales que indiquen problemas de usabilidad o bugs
- Reportes automáticos semanales para el equipo: resumen de métricas clave de UX enviado por Slack o email con tendencias y alertas destacadas

**Capa 4: Pipeline de insights de UX para el equipo de producto**
Diseña el flujo de trabajo de uso de los datos:
- Ritual semanal de revisión de datos de UX: quién participa, qué dashboards se revisan, cómo se priorizan los hallazgos
- Proceso de hipótesis → experimento → validación: cómo pasar de un insight del analytics a un A/B test diseñado correctamente
- Documentación de hallazgos: repositorio centralizado de insights validados con sus evidencias y las decisiones de producto tomadas
- Integración con el backlog: cómo los insights de UX se convierten en tickets priorizados en Jira o Linear

**Entregable:**
Proporciona el plan de implementación técnica en 4 sprints, el esquema de taxonomía de eventos con ejemplos de código para React y Vue, y la arquitectura del dashboard de UX con las métricas más importantes para el equipo de producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Arquitectura técnica de herramientas de UX analytics y event tracking automatizado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX research con IA para diseñadores: entrevistas, síntesis y journey mapping',
                'description'      => 'Usa Claude para llevar a cabo todo el ciclo de UX research, desde el diseño de entrevistas hasta la síntesis de insights y la creación de customer journey maps accionables.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX researcher senior con experiencia en metodologías de investigación cualitativa y cuantitativa aplicadas al diseño centrado en el usuario.

Tu objetivo es guiarme a través de un proceso completo de UX research, desde la definición de las preguntas de investigación hasta la síntesis de hallazgos y la comunicación de insights al equipo de diseño y producto.

**Información que necesito que me pidas:**
1. Producto o servicio que se está investigando y su propuesta de valor
2. Pregunta de investigación principal: ¿qué queremos entender sobre el usuario?
3. Fase del proyecto: discovery (entender el problema), evaluación (validar un diseño existente) o generativa (inspirar nuevas soluciones)
4. Usuarios que se quieren investigar: descripción del perfil y criterios de reclutamiento
5. Restricciones de tiempo y recursos disponibles para el research
6. Qué decisiones de diseño se tomarán con los resultados del research

**Fase 1: Planificación del research**
Diseña el plan de investigación completo:
- Research question principal y las sub-preguntas derivadas que la descomponen en partes investigables
- Metodología recomendada según el objetivo: entrevistas contextuales, pruebas de usabilidad moderadas o no moderadas, card sorting, tree testing, diary study, encuesta, análisis de analytics
- Plan de reclutamiento de participantes: criterios de inclusión y exclusión, número de sesiones necesarias por segmento, canales de reclutamiento (base de usuarios, panel de investigación, redes sociales)
- Guión de screening: preguntas para seleccionar a los participantes que realmente representan al usuario objetivo
- Protocolo de consentimiento informado y gestión ética de los datos de los participantes
- Cronograma del research: planificación de sesiones, tiempo de análisis y fecha de presentación de hallazgos

**Fase 2: Diseño del guión de entrevista contextual**
Crea el guión de investigación optimizado para descubrimiento:
- Apertura: contextualización del propósito, permiso para grabar, establecimiento de que el usuario es el experto (no hay respuestas correctas ni incorrectas)
- Preguntas de contexto: quién es el usuario, cuál es su rutina relevante al área de investigación, cuáles son sus objetivos en ese contexto
- Preguntas de exploración del problema: cuéntame de la última vez que tuviste que hacer X, ¿qué fue lo más difícil? ¿cómo lo resolviste?
- Técnica de los cinco por qués: cómo profundizar en la causa raíz de comportamientos y motivaciones con seguimiento activo
- Preguntas de cierre: ¿hay algo más que quieras contarme? ¿si pudieras cambiar algo de cómo haces X hoy, qué sería?
- Guía de seguimiento de prototipos si es sesión de prueba de usabilidad: tareas a realizar, preguntas de pensar en voz alta y escala de valoración de dificultad

**Fase 3: Análisis y síntesis de hallazgos**
Desarrolla el proceso de análisis sistemático:
- Transcripción y anotación de sesiones: cómo procesar las grabaciones para extraer citas textuales relevantes e insights preliminares
- Affinity mapping (mapa de afinidad): proceso de clustering de observaciones en temas emergentes con el equipo en una sesión de síntesis colaborativa
- Identificación de patrones: qué comportamientos, actitudes o necesidades se repiten en múltiples participantes (convergencia = hallazgo sólido)
- Jerarquización de hallazgos: urgencia e importancia de cada insight para las decisiones de diseño que hay que tomar
- Citas textuales de usuarios: selección de las frases más representativas de cada hallazgo para dar voz al usuario en la presentación
- Evidencia cuantitativa de soporte: número de participantes que expresaron cada insight y severidad del problema de usabilidad (si aplica)

**Fase 4: Customer Journey Map accionable**
Construye el mapa de experiencia del usuario con los hallazgos:
- Estructura del journey map: etapas del proceso que atraviesa el usuario, acciones en cada etapa, pensamientos, emociones y puntos de dolor
- Momentos de la verdad: los 3-5 momentos críticos donde la experiencia hace o rompe la relación del usuario con el producto
- Oportunidades de diseño: por cada punto de dolor identificado, propone al menos una oportunidad de mejora concreta
- Diferenciación por segmento: si hay varios perfiles de usuario, muestra cómo difiere el journey de cada uno
- Métricas de la experiencia en cada etapa: qué dato de analytics o qué pregunta de encuesta permite monitorizar la calidad de cada etapa del journey
- Formato de presentación: cómo estructurar el journey map para que sea útil y comprensible para stakeholders no técnicos en producto y negocio

**Entregable:**
Genera el plan de research completo listo para ejecutar, el guión de entrevista con 20 preguntas y sus posibles seguimientos, la plantilla del mapa de afinidad y la estructura del journey map con las instrucciones para rellenarlo con los hallazgos del research.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Ciclo completo de UX research desde planificación hasta journey map y síntesis de insights',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis del customer journey de ventas con IA para optimizar conversión',
                'description'      => 'Usa Claude para mapear y optimizar el journey del cliente desde el primer contacto hasta el cierre, identificando fricciones y oportunidades de mejora en cada etapa del proceso de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de ventas especializado en optimización del proceso comercial y análisis de la experiencia del cliente en el ciclo de compra B2B y B2C.

Tu objetivo es ayudarme a mapear el journey completo del cliente a lo largo de mi proceso de ventas, identificar las fricciones que causan pérdida de oportunidades y diseñar mejoras concretas que aumenten la tasa de conversión.

**Contexto que necesito que me proporciones:**
1. Tipo de venta: B2B (empresa a empresa) o B2C (empresa a consumidor final)
2. Proceso de ventas actual: describir cada etapa desde que un lead entra hasta que firma o compra
3. Ticket promedio y ciclo de venta típico en días
4. Principales motivos de pérdida de oportunidades (por qué los leads no convierten)
5. Tamaño del equipo de ventas y herramientas de CRM disponibles
6. Métricas actuales de conversión por etapa del funnel si están disponibles

**Análisis 1: Mapeo del journey del comprador actual**
Reconstruye el proceso de decisión desde el punto de vista del cliente:
- Trigger de compra: qué situación o evento hace que el potencial cliente empiece a buscar una solución
- Etapa de awareness: cómo descubre que existen soluciones como la tuya (búsqueda online, recomendación, contenido, publicidad)
- Etapa de consideración: qué criterios evalúa, a quién consulta, qué información busca antes de contactar con un comercial
- Etapa de evaluación: cómo evalúa las opciones disponibles, qué demostraciones o pruebas solicita, cómo involucra a otros stakeholders
- Etapa de decisión: qué desencadena el sí o el no final, quién tiene la última palabra, qué frena el cierre
- Etapa post-compra: primeras expectativas del cliente nuevo, posibles remordimientos del comprador y cómo gestionarlos

**Análisis 2: Identificación de fricciones por etapa**
Diagnostica los problemas en cada punto del journey:
- Fricción en el primer contacto: ¿es difícil contactar con la empresa? ¿el formulario es largo? ¿el tiempo de respuesta es demasiado alto?
- Fricción en la demo o primera reunión: ¿el comercial entiende bien el problema del cliente antes de presentar? ¿la demo es relevante para el caso de uso específico?
- Fricción en la propuesta: ¿la propuesta llega a tiempo? ¿es clara y personalizada? ¿incluye el business case que el cliente necesita para justificar internamente?
- Fricción en la negociación: ¿los plazos de aprobación interna son bloqueantes? ¿el proceso de contratación es demasiado burocrático?
- Fricción en el onboarding: ¿el cliente siente que le han abandonado después de firmar? ¿el tiempo hasta el primer valor es demasiado largo?

**Análisis 3: Mejoras del proceso de ventas basadas en el journey**
Propone mejoras concretas para cada etapa identificada:
- Reducción del tiempo de primera respuesta a leads inbound: objetivo menos de 5 minutos con sistema de alertas y rotación de guardia
- Personalización de la demo según el rol y el sector del prospecto: biblioteca de casos de uso por industria y tamaño de empresa
- Plantilla de propuesta que incluya el business case pre-calculado con los datos del prospecto
- Proceso de seguimiento sistemático: cadencia de contacto en cada etapa sin ser invasivo, con valor real en cada touchpoint
- Qualification framework mejorado: criterios MEDDIC o BANT actualizados para cualificar mejor y no dedicar tiempo a oportunidades sin potencial
- Ritual de win/loss analysis: proceso de análisis de oportunidades ganadas y perdidas para aprender sistemáticamente

**Análisis 4: Medición de la experiencia del comprador**
Define cómo medir y mejorar continuamente la experiencia de venta:
- Encuesta de experiencia de compra: 3-5 preguntas enviadas después de cada cierre (ganado o perdido) para capturar feedback en caliente
- Sales cycle velocity por etapa: medir cuánto tiempo pasa cada oportunidad en cada etapa para detectar los cuellos de botella
- Conversion rate por etapa del funnel: dónde se pierden más oportunidades y cuál es el impacto económico de mejorar cada etapa en un 10%
- NPS de comprador (bNPS): medir si el proceso de compra en sí mismo ha sido una buena experiencia, no solo el producto

**Entregable:**
Proporciona el mapa visual del journey del comprador en formato de tabla estructurada, el diagnóstico de las 5 principales fricciones ordenadas por impacto estimado y el plan de mejora con acciones específicas, responsable y plazo para cada mejora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mapeo y optimización del journey del comprador para mejorar conversión en el proceso de ventas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product discovery con IA: síntesis de research de usuarios para decisiones de producto',
                'description'      => 'Usa Claude para sintetizar grandes volúmenes de feedback de usuarios, entrevistas y datos de uso en insights de producto accionables que guíen la hoja de ruta.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en product discovery y toma de decisiones basada en evidencia de usuario.

Tu objetivo es ayudarme a sintetizar y procesar grandes volúmenes de datos cualitativos y cuantitativos de usuarios para extraer insights de producto accionables que informen la hoja de ruta y las decisiones de priorización.

**Contexto que necesito que me proporciones:**
1. Tipo y estado del producto: etapa de desarrollo (pre-lanzamiento, crecimiento, madurez), tipo (SaaS, app móvil, ecommerce, plataforma)
2. Fuentes de datos de usuario disponibles: entrevistas grabadas, tickets de soporte, NPS con comentarios, reviews de app stores, grabaciones de sesión, datos de analytics
3. Preguntas de producto sin responder más urgentes
4. Proceso de discovery actual del equipo y sus limitaciones
5. Frecuencia con que se toman decisiones de roadmap y quiénes participan
6. Herramientas de gestión de conocimiento disponibles (Notion, Confluence, Dovetail, Airtable)

**Marco 1: Sistema de captura y organización de insights de usuario**
Diseña la infraestructura de conocimiento del usuario:
- Taxonomía de fuentes de feedback: entrevistas de usuario, tickets de soporte clasificados por tipo, encuestas de satisfacción, reviews externas, datos de analytics, sesiones de usabilidad
- Estructura de la base de datos de insights: campo de observación (qué dijo o hizo el usuario), campo de interpretación (qué significa para el producto), etiquetas por área de producto y por tipo de insight (dolor, necesidad, motivación, comportamiento)
- Proceso de captura en tiempo real: cómo asegurarse de que el conocimiento del usuario no se queda atrapado en el email o en la cabeza de una sola persona
- Proceso de importación de datos históricos: cómo organizar el feedback acumulado en el pasado y hacerlo consultable

**Marco 2: Síntesis de hallazgos cualitativos a escala**
Proporciona el método de análisis sistemático de grandes volúmenes de feedback:
- Análisis de tickets de soporte: técnica de codificación abierta para clasificar y cuantificar las categorías de problemas más frecuentes
- Síntesis de entrevistas: proceso de análisis temático para identificar patrones transversales en múltiples entrevistas
- Jobs-to-be-done framework: extracción de los trabajos funcionales, emocionales y sociales que los usuarios tratan de completar con el producto
- Severity y frequency matrix: cómo priorizar los problemas según con qué frecuencia aparecen y qué impacto tienen en la experiencia del usuario
- Técnica de triangulación: cómo validar un insight cruzando múltiples fuentes de evidencia antes de considerarlo sólido

**Marco 3: Conexión de insights con decisiones de producto**
Define el proceso de traducción de research a decisiones:
- Opportunity solution tree: herramienta para conectar oportunidades de usuario con soluciones potenciales y experimentos de validación
- Hipótesis de producto estructuradas: formato estándar para formular hipótesis que sean testeables (creemos que [solución] logrará [resultado] para [usuario] porque [evidencia])
- Criterios de priorización basados en evidencia de usuario: cómo incorporar los insights del research a los frameworks de priorización (RICE, ICE, Value vs Effort)
- Definition of ready para features: qué nivel de evidencia de usuario se requiere antes de mover una funcionalidad al backlog de desarrollo
- Proceso de invalidación de hipótesis: cómo actualizar la hoja de ruta cuando el research contradice suposiciones previas

**Marco 4: Comunicación de insights al equipo y stakeholders**
Diseña la estrategia de divulgación del conocimiento de usuario:
- Weekly user insight: resumen semanal de los insights más relevantes de la semana para todo el equipo de producto
- Repositorio de insights siempre actualizado: acceso libre para que cualquier miembro del equipo consulte lo que sabemos sobre el usuario
- Presentación de research a stakeholders: formato ejecutivo de 5 minutos que conecta los hallazgos con el impacto en negocio
- Cultura de curiosidad por el usuario: cómo involucrar a ingenieros, diseñadores y stakeholders de negocio en el proceso de research para que los insights sean de todos

**Marco 5: Métricas del programa de discovery**
Define cómo medir la efectividad del process de research:
- Velocidad de discovery: tiempo desde que surge una pregunta de producto hasta que tenemos evidencia suficiente para decidir
- Tasa de hipótesis validadas vs invalidadas: indicador de la calidad de las hipótesis iniciales del equipo
- Impacto de las decisiones basadas en research: seguimiento de resultados de features lanzadas con evidencia de usuario vs sin ella
- Cobertura de usuarios investigados: porcentaje de segmentos de usuario que han sido investigados en los últimos 90 días

**Entregable:**
Proporciona la plantilla del repositorio de insights en Notion o Airtable con todos los campos y la taxonomía definida, el proceso de síntesis semanal de feedback paso a paso y la plantilla de presentación de research para stakeholders.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de product discovery basado en síntesis de research de usuarios para informar el roadmap',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employee experience design con IA para mejorar el ciclo de vida del empleado',
                'description'      => 'Usa Claude para aplicar metodologías de UX research al diseño de experiencias del empleado, desde el onboarding hasta el offboarding, identificando momentos de la verdad.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en Employee Experience (EX) con formación en UX research y design thinking aplicados al ámbito de recursos humanos.

Tu objetivo es ayudarme a diseñar experiencias del empleado excepcionales aplicando las metodologías del diseño centrado en el usuario al ciclo de vida laboral, desde la atracción de talento hasta la salida de la organización.

**Información que necesito que me pidas:**
1. Tipo de organización: tamaño, sector, modelo de trabajo (presencial, híbrido, remoto)
2. Etapa del ciclo de vida del empleado en la que quiero enfocarme (atracción, selección, onboarding, desarrollo, retención, offboarding)
3. Principales problemas actuales en la experiencia del empleado (alta rotación, baja satisfacción, problemas en onboarding, etc.)
4. Datos disponibles: resultados de encuestas de clima, tasa de rotación, NPS de empleados, entrevistas de salida
5. Cultura organizacional y valores de la empresa
6. Recursos del equipo de RRHH disponibles para mejorar la experiencia

**Metodología 1: Research de la experiencia del empleado**
Diseña el proceso de investigación con el equipo:
- Entrevistas de employee journey: guión adaptado para explorar la experiencia del empleado en cada etapa del ciclo de vida laboral (qué fue bien, qué fue difícil, qué faltó)
- Encuestas de pulso: diseño de encuestas cortas (máximo 5 preguntas) para medir la experiencia en momentos clave del ciclo de vida
- Grupos focales: cómo facilitar sesiones de co-creación con empleados de diferentes perfiles para recoger feedback cualitativo
- Shadowing: cómo observar el primer día de trabajo de un nuevo empleado para identificar fricciones en el onboarding sin teorizar
- Entrevistas de permanencia: preguntas para empleados satisfechos para entender qué les hace quedarse y qué valoran más
- Entrevistas de salida mejoradas: cómo obtener feedback honesto y accionable de los empleados que se van más allá del formato estándar

**Metodología 2: Employee Journey Map**
Construye el mapa completo de la experiencia del empleado:
- Etapas del ciclo de vida: atracción → aplicación → selección → oferta → onboarding → incorporación → desarrollo → reconocimiento → posible salida
- Por cada etapa, mapea: acciones del empleado, touchpoints con la organización (personas, procesos, tecnología), pensamientos y emociones del empleado, puntos de dolor, momentos de alegría y oportunidades de mejora
- Momentos de la verdad del empleado: los 5-7 momentos que tienen mayor impacto en la percepción de la organización como empleador
- Diferenciación por perfil: cómo difiere el journey de un empleado senior vs júnior, de un remoto vs presencial, de una persona con familia vs sin responsabilidades de cuidado
- Análisis del gap: diferencia entre la experiencia prometida en el employer branding y la experiencia real vivida

**Metodología 3: Diseño de soluciones centradas en el empleado**
Aplica design thinking para mejorar la experiencia:
- Ideación: sesión de generación de ideas para mejorar los momentos de la verdad identificados con técnicas de creative problem solving
- Priorización: matriz de impacto en la experiencia del empleado vs esfuerzo de implementación para seleccionar qué mejorar primero
- Prototipado rápido de iniciativas: cómo probar cambios en la experiencia del empleado a pequeña escala antes de implementarlos para todos
- Co-diseño con empleados: cómo involucrar a los propios empleados en el diseño de las mejoras para garantizar la relevancia y la adopción

**Metodología 4: Rediseño del proceso de onboarding**
Diseña una experiencia de bienvenida excepcional:
- Pre-boarding: qué sucede entre la firma del contrato y el primer día (comunicaciones, accesos, materiales de preparación)
- Primer día: cómo diseñar un primer día memorable que transmita cultura y genere sentido de pertenencia desde el inicio
- Primeras semanas: plan de 30-60-90 días estructurado con hitos de aprendizaje, conexiones con el equipo y primeras victorias
- Buddy program: diseño del programa de acompañamiento por un empleado con experiencia durante los primeros 3 meses
- Checkpoint de onboarding: sesión de feedback a las 4 semanas para detectar dificultades y ajustar el programa

**Entregable:**
Proporciona el employee journey map completo en formato de tabla estructurada, el guión de entrevistas de research de experiencia del empleado y el plan de onboarding de 90 días con todas las acciones, responsables y recursos necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de experiencia del empleado con metodología UX para mejorar atracción y retención de talento',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'UX research de productos financieros con IA para mejorar la usabilidad',
                'description'      => 'Usa Claude para diseñar estudios de usabilidad de productos financieros digitales, identificar barreras de comprensión y proponer mejoras que aumenten la adopción y la confianza.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX researcher especializado en productos financieros digitales con experiencia en banca, fintech, seguros e inversión.

Tu objetivo es diseñar y ejecutar un proceso de UX research adaptado a las particularidades del sector financiero, donde la confianza, la comprensión de productos complejos y el cumplimiento regulatorio son factores críticos de la experiencia.

**Información que necesito que me pidas:**
1. Tipo de producto financiero digital: banca online, plataforma de inversión, seguro digital, préstamos, criptomonedas, finanzas personales
2. Problema específico de UX que se quiere investigar: baja conversión en el onboarding, abandono en el proceso de contratación, baja adopción de una funcionalidad, confusión en conceptos financieros
3. Perfil del usuario: edad, nivel de educación financiera, experiencia previa con productos digitales financieros
4. Regulaciones aplicables que afectan al diseño: MiFID II, PSD2, KYC, normativas de transparencia
5. Métricas actuales de la experiencia: tasa de abandono, tiempo hasta la primera transacción, NPS, tasa de errores en flujos clave

**Área 1: Particularidades del UX research en productos financieros**
Adapta la metodología al contexto específico:
- Gestión del estrés financiero en las sesiones de research: cómo crear un ambiente donde el participante se sienta cómodo hablando de dinero y de sus comportamientos financieros reales
- Reclutamiento representativo: importancia de incluir usuarios con baja alfabetización financiera, personas mayores y usuarios con distintos niveles de confianza en la tecnología
- Ética en el research financiero: cómo evitar que el participante sienta que se evalúa su inteligencia o sus decisiones financieras
- Protocolos de privacidad reforzados: qué precauciones adicionales hay que tomar al mostrar o discutir datos financieros reales durante las sesiones

**Área 2: Evaluación de comprensión de productos financieros complejos**
Diseña tests de comprensión adaptados:
- Think-aloud protocol adaptado: cómo pedir al usuario que verbalice sus pensamientos al enfrentarse a un contrato de seguro, un prospecto de inversión o los términos de un préstamo
- Test de comprensión de conceptos financieros: preguntas para evaluar si el usuario realmente entiende TAE, comisiones de gestión, coberturas de seguro, riesgo de inversión
- Análisis de confusion points: identificar los términos técnicos o las estructuras de información que sistemáticamente generan incomprensión
- Evaluación de la divulgación de riesgos: ¿están los usuarios leyendo y entendiendo las advertencias de riesgo requeridas por regulación?
- Test de decisiones bajo presión: cómo evaluar si el usuario toma decisiones informadas o impulsivas en flujos de contratación con urgencia percibida

**Área 3: Research de confianza y seguridad percibida**
Investiga los factores que generan o destruyen confianza:
- Evaluación de credibilidad de la interfaz: los elementos visuales que generan confianza (certificaciones, logos de seguridad, transparencia de información) y los que la destruyen
- Test de percepción de seguridad: cómo percibe el usuario los mecanismos de autenticación (biometría, doble factor) y qué impacto tiene en su decisión de usar el producto
- Investigación de barreras de confianza por segmento: diferencias generacionales en la confianza hacia productos financieros digitales vs entidades tradicionales
- Análisis de mensajes de error financiero: cómo reaccionan los usuarios a los errores en transacciones, rechazos de tarjeta o alertas de seguridad y qué impacto tiene en la relación con la entidad

**Área 4: Optimización de flujos de onboarding y contratación**
Diseña el research específico para los flujos más críticos:
- Test de usabilidad del proceso KYC: evaluación del proceso de verificación de identidad (subida de documentos, selfie, validación) y sus puntos de abandono
- Análisis del flujo de primera transacción: el momento más crítico para la retención, dónde falla y cómo mejorarlo
- Evaluación de los textos legales y de compliance: ¿son comprensibles? ¿el usuario lee o simplemente acepta sin entender?
- Benchmark de experiencias de onboarding financiero: comparativa de mejores prácticas del sector para identificar el estándar de referencia

**Entregable:**
Proporciona el protocolo completo de sesiones de usabilidad para productos financieros, el guión de entrevistas adaptado al sector financiero con preguntas de comprensión y confianza, y el informe de hallazgos tipo con las secciones estándar para presentar resultados al equipo de producto y al comité de cumplimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'UX research especializado en productos financieros digitales para mejorar comprensión y confianza',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'UX research para servicios legales digitales: barreras de acceso a la justicia',
                'description'      => 'Usa Claude para investigar la experiencia de usuario de plataformas legales digitales, identificar barreras de comprensión del lenguaje jurídico y proponer mejoras de accesibilidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX researcher especializado en servicios legales digitales y diseño de servicios públicos y privados de acceso a la justicia.

Tu objetivo es diseñar un proceso de investigación de usuarios para entender las barreras que impiden a ciudadanos y empresas acceder y usar eficazmente los servicios legales digitales, y proponer mejoras que democraticen el acceso a la información y asesoría jurídica.

**Información que necesito que me solicites:**
1. Tipo de servicio legal digital: plataforma de asesoría jurídica online, generador de contratos, legaltech de gestión de expedientes, portal de justicia digital, comparador de abogados
2. Público objetivo: ciudadanos sin formación jurídica, pymes, startups, profesionales del derecho
3. Principales barreras identificadas a priori: lenguaje técnico incomprensible, proceso complejo, desconfianza, precio percibido elevado
4. Regulaciones que afectan al diseño del servicio: secreto profesional, publicidad de servicios jurídicos, verificación de la identidad del cliente
5. Métricas actuales: tasa de abandono en el proceso de consulta, tasa de conversión a cliente de pago, NPS del servicio

**Investigación 1: Comprensión del lenguaje jurídico por usuarios no expertos**
Diseña el research sobre la barrera del lenguaje:
- Test de comprensión de términos jurídicos habituales: selección de 20 términos frecuentes en servicios legales digitales y evaluación del porcentaje de usuarios que los comprenden correctamente
- Evaluación del nivel de legibilidad de los textos del servicio: análisis con índices de legibilidad (Flesch-Kincaid adaptado al español) de los textos clave del servicio
- Sesiones de lectura en voz alta: el usuario lee las explicaciones del servicio en voz alta y verbaliza lo que entiende y lo que no; método muy revelador para detectar confusion points
- Propuesta de simplificación de lenguaje: para cada término o construcción compleja identificada, proporciona 3 alternativas de redacción más accesible sin perder precisión jurídica
- Test de comprensión post-mejora: cómo medir si las mejoras de lenguaje han aumentado la comprensión real del servicio

**Investigación 2: Confianza en servicios legales digitales**
Investiga los factores de confianza específicos del sector:
- Señales de credibilidad profesional esperadas por el usuario: ¿qué información sobre el abogado necesita ver para confiar? (formación, colegiación, especialización, reseñas verificadas)
- Gestión de la confidencialidad percibida: ¿cómo percibe el usuario la seguridad de compartir información sensible por medios digitales?
- Expectativas de la relación abogado-cliente online: ¿qué canal de comunicación esperan (chat, videollamada, email)? ¿qué tiempos de respuesta consideran aceptables?
- Test de credibilidad de contratos y documentos generados por IA: ¿confía el usuario en un contrato generado automáticamente? ¿qué validación humana necesita para confiar?

**Investigación 3: Accesibilidad del proceso jurídico digital**
Evalúa la complejidad del proceso desde el punto de vista del usuario:
- Test del primer uso sin instrucciones: el usuario accede al servicio por primera vez sin guía; se mide cuánto tarda en completar la tarea principal y en qué pasos se atasca
- Evaluación de la arquitectura de información: ¿el usuario encuentra fácilmente el servicio que necesita entre toda la oferta? Test de tree testing o card sorting con la taxonomía de servicios
- Evaluación del proceso de consulta: número de pasos, información requerida, tiempo estimado y percepción de dificultad por parte del usuario
- Accesibilidad WCAG para usuarios con diversidad funcional: evaluación del cumplimiento de las directrices de accesibilidad web mínimas, especialmente importante en servicios de acceso a la justicia

**Investigación 4: Diseño de mejoras centradas en el usuario no experto**
Propone rediseños basados en los hallazgos:
- Simplificación del proceso de consulta: cuántos pasos se pueden eliminar o combinar sin perder información necesaria
- Glosario jurídico contextual: definiciones emergentes de los términos técnicos en el momento en que aparecen, sin necesidad de salir del flujo
- Guía paso a paso personalizada: proceso de asistencia que adapta las preguntas y la información al caso específico del usuario
- Testimonio y transparencia de proceso: qué casos de éxito e información del proceso generan la mayor reducción de incertidumbre

**Entregable:**
Proporciona el protocolo de evaluación de comprensión del lenguaje jurídico con los términos a evaluar, el guión de sesiones de usabilidad del servicio legal y las recomendaciones de rediseño priorizadas por impacto en la accesibilidad y la confianza del usuario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'UX research en legaltech para eliminar barreras de lenguaje y confianza en servicios jurídicos digitales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Análisis de feedback de clientes con IA para mejorar el soporte y el producto',
                'description'      => 'Usa Claude para analizar y sintetizar grandes volúmenes de feedback de clientes de soporte, identificar patrones de insatisfacción y traducirlos en mejoras de producto y proceso.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en voz del cliente (VoC) y experiencia del cliente con experiencia en análisis de datos cualitativos de soporte y feedback.

Tu objetivo es diseñar un sistema sistemático para analizar el feedback que llega a través de los canales de soporte al cliente, identificar patrones de insatisfacción y problemas de usabilidad, y comunicar los hallazgos al equipo de producto de forma que generen mejoras reales.

**Información que necesito que me solicites:**
1. Volumen mensual de tickets de soporte y canales principales (email, chat, teléfono, redes sociales)
2. Herramientas de helpdesk utilizadas (Zendesk, Freshdesk, Intercom, Hubspot Service)
3. Categorías de tickets actuales y si existen con suficiente granularidad
4. Datos de satisfacción disponibles: CSAT, NPS, CES y su frecuencia de medición
5. Proceso actual de escalado de feedback al equipo de producto
6. Perfil del cliente que más contacta con soporte (segmento, plan, antigüedad)

**Sistema 1: Taxonomía y clasificación de feedback**
Diseña el sistema de categorización del feedback:
- Árbol de categorías de motivos de contacto: nivel 1 (tipo de problema: funcionalidad, facturación, onboarding, bug, pregunta de uso) y nivel 2 (área específica del producto o proceso)
- Clasificación por tipo de feedback: problema técnico, solicitud de funcionalidad, queja de proceso, confusión de interfaz, pregunta de uso, elogio
- Clasificación por impacto en el cliente: crítico (bloquea el uso del producto), alto (dificulta significativamente el uso), medio (genera fricción), bajo (consulta informativa)
- Tags de producto: etiquetas que mapean el ticket a un área específica del producto para que el equipo de ingeniería y diseño pueda filtrar los tickets relevantes para su área
- Automatización de la clasificación: reglas de etiquetado automático basadas en palabras clave más frecuentes para escalar el análisis sin incrementar el tiempo manual

**Sistema 2: Análisis cuantitativo de patrones de feedback**
Convierte el feedback en datos accionables:
- Análisis de frecuencia: ranking de los motivos de contacto más frecuentes por volumen y por impacto en el cliente
- Análisis de tendencias temporales: qué categorías de problemas aumentan o disminuyen en el tiempo y su correlación con lanzamientos de producto o cambios de proceso
- Segmentación por tipo de cliente: qué problemas afectan más a clientes nuevos vs clientes maduros, a clientes de plan básico vs premium, a clientes enterprise vs pymes
- Correlación con métricas de retención: qué categorías de problemas correlacionan con mayor churn o con menor renovación del contrato
- Análisis de recontacto: clientes que contactan múltiples veces por el mismo problema, indicador claro de que la solución de primera línea no está resolviendo la causa raíz

**Sistema 3: Extracción de insights cualitativos de las conversaciones**
Profundiza más allá de los números:
- Selección de muestra representativa: cómo elegir los tickets más ricos en información cualitativa de cada categoría para análisis en profundidad
- Análisis de las palabras textuales del cliente: identificar el lenguaje que usa el cliente para describir sus problemas (oportunidad de mejorar la documentación y el onboarding)
- Identificación de la causa raíz: técnica de los 5 por qués aplicada al análisis de tickets para ir más allá del síntoma presentado
- Captura de la emoción del cliente: qué nivel de frustración, urgencia o satisfacción transmiten los tickets y cómo evoluciona a lo largo de la conversación
- Extracción de solicitudes de funcionalidad implícitas: muchos tickets de soporte esconden peticiones de producto disfrazadas de preguntas de uso

**Sistema 4: Comunicación de insights al equipo de producto**
Diseña el proceso de escalado de voz del cliente:
- Informe mensual de voz del cliente para el equipo de producto: estructura, métricas clave, top 5 problemas del mes con evidencia de tickets reales
- Ritual de revisión conjunta CS-Producto: sesión mensual de 60 minutos donde el equipo de CS comparte los hallazgos del feedback y producto explica las soluciones previstas
- Bug report enriquecido con contexto de cliente: formato de reporte de bug que incluye el impacto en clientes (cuántos afectados, severidad, citas de tickets) para que ingeniería pueda priorizar con mejor información
- Cierre del loop con el cliente: proceso para notificar a los clientes que reportaron un problema cuando se ha resuelto, convirtiendo una experiencia negativa en una de lealtad

**Entregable:**
Proporciona el árbol de taxonomía de categorías de feedback completo con 2 niveles, la plantilla del informe mensual de voz del cliente para el equipo de producto y el protocolo de la sesión mensual de revisión conjunta CS-Producto con la agenda y los materiales necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de análisis de feedback de clientes para extraer insights de producto desde el soporte',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'UX research freelance con IA: servicio completo de investigación de usuarios',
                'description'      => 'Usa Claude para construir y escalar un servicio freelance de UX research, desde la propuesta al cliente hasta la entrega de informes de hallazgos y recomendaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en el diseño y crecimiento de prácticas freelance de investigación de experiencia de usuario.

Tu objetivo es ayudarme a construir un servicio profesional y escalable de UX research como freelancer, con procesos replicables, propuestas ganadoras y entregables de alta calidad que justifiquen honorarios premium.

**Información que necesito que me solicites:**
1. Especialización en UX research: métodos en los que tengo mayor experiencia (entrevistas, pruebas de usabilidad, encuestas, research generativo vs evaluativo)
2. Sectores o tipos de producto con experiencia previa (fintech, ecommerce, SaaS, productos de consumo, apps móviles)
3. Tipo de cliente objetivo: startups, empresas de tamaño medio, agencias de diseño, consultoras de transformación digital
4. Portfolio actual y casos de éxito documentados
5. Objetivos de facturación a 12 meses y modelo de trabajo preferido (proyectos puntuales, retainers, colaboración con agencias)
6. Herramientas de research disponibles (Maze, UserTesting, Lookback, Hotjar, herramientas de encuesta)

**Área 1: Posicionamiento y propuesta de valor del servicio de UX research**
Define tu nicho y tu diferenciación:
- Especialización por tipo de research o por sector: qué combinación genera mayor demanda y permite tarifas más altas
- Propuesta de valor diferencial frente a agencias de UX y a investigadores internos: velocidad de arranque, flexibilidad, perspectiva externa independiente, coste-beneficio
- Tarifas de mercado por tipo de proyecto: rango de honorarios para proyectos de discovery, pruebas de usabilidad, encuestas y journey mapping según experiencia y mercado
- Posicionamiento como experto: estrategia de contenido y visibilidad para construir autoridad en UX research (artículos en LinkedIn, participación en comunidades de diseño, ponencias en meetups)

**Área 2: Catálogo de servicios de UX research**
Diseña el portafolio de servicios con estructura de precios:

Research de descubrimiento (proyecto 3.000-8.000€): 6-8 entrevistas de usuario + análisis + informe de hallazgos + buyer persona actualizado. Duración: 3-4 semanas.

Evaluación de usabilidad (proyecto 2.500-6.000€): 5-8 sesiones de prueba moderada o no moderada + análisis de severity + recomendaciones de rediseño priorizadas. Duración: 2-3 semanas.

Research estratégico completo (proyecto 8.000-20.000€): metodología mixta con múltiples rondas de research, journey mapping completo, estrategia de mejoras y presentación ejecutiva. Duración: 6-8 semanas.

Retainer de research continuo (2.000-4.000€/mes): 2 rondas de research al mes, acceso continuo a insights de usuario, revisión mensual con el equipo de producto. Mínimo 3 meses.

**Área 3: Proceso de captación y venta**
Define el sistema de desarrollo de negocio:
- Canales de captación: referidos de otros profesionales del sector, LinkedIn como canal de posicionamiento, Upwork y Toptal para proyectos internacionales, colaboración con estudios de diseño que no tienen research interno
- Proceso de cualificación de clientes: preguntas para determinar si el cliente tiene presupuesto, urgencia real y comprensión del valor del research antes de invertir tiempo en una propuesta
- Propuesta de UX research: estructura de una propuesta ganadora con contexto del problema, metodología propuesta, entregables, cronograma, honorarios y forma de pago
- Discovery call de 30 minutos: qué preguntas hacer y cómo gestionar la reunión para entender el problema real del cliente y conectarlo con la propuesta de servicio correcta

**Área 4: Proceso de entrega de proyectos de research**
Diseña el proceso operativo replicable:
- Inicio de proyecto: sesión de alineación de expectativas, validación del plan de research, configuración de herramientas y firma del acuerdo de confidencialidad
- Gestión de participantes: reclutamiento, coordinación de sesiones, comunicaciones y compensación de los participantes del research
- Análisis y síntesis: proceso de análisis sistemático de los datos recogidos, con plantillas de mapa de afinidad y plantilla de informe de hallazgos
- Presentación de hallazgos: cómo estructurar y presentar los resultados para que sean comprensibles y accionables para stakeholders no familiarizados con UX research
- Cierre del proyecto y apertura de continuidad: encuesta de satisfacción, solicitud de referencia y propuesta de siguiente paso de research

**Área 5: Herramientas y automatización para el freelancer de UX research**
Define el stack de herramientas para ser eficiente:
- Plantillas reutilizables: guiones de entrevista por tipo de investigación, plantilla de informe de hallazgos, plantilla de journey map, plantilla de propuesta
- Herramientas de reclutamiento de participantes: User Interviews, Respondent.io, paneles de tu propia base de datos de participantes
- Herramientas de análisis cualitativo: Dovetail, Aurelius, Notion con sistema de codificación o análisis manual con Miro

**Entregable:**
Proporciona la propuesta de UX research tipo lista para personalizar, la plantilla del informe de hallazgos con todas las secciones estándar y el plan de desarrollo de negocio a 12 meses con objetivos mensuales de clientes nuevos y facturación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negocio freelance de UX research con metodología, propuestas y proceso de entrega profesional',
                'vote_score'       => 43,
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
