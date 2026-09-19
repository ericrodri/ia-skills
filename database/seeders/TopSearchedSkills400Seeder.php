<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills400Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Agente de IA para campañas de marketing multicanal',
                'description'       => 'Diseña y orquesta un agente de IA que planifique, ejecute y optimice campañas de marketing en múltiples canales de forma autónoma.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un agente de IA autónomo que gestione el ciclo completo de una campaña de marketing multicanal, desde la estrategia inicial hasta el análisis de resultados.

contexto del rol:
Eres un estratega de marketing digital con 10 años de experiencia diseñando sistemas automatizados. Tu especialidad es crear flujos de trabajo que integren IA para reducir el trabajo manual sin perder el control creativo ni la voz de marca.

tarea principal:
Actúa como arquitecto de un agente de marketing autónomo. Necesito que diseñes el sistema completo, incluyendo los pasos que el agente debe ejecutar, las decisiones que puede tomar de forma autónoma y los puntos de control donde un humano debe revisar y aprobar.

estructura del agente a diseñar:

Paso 1 — Análisis de brief:
El agente recibe el brief de campaña y extrae: objetivo principal (awareness, conversión, retención), público objetivo, presupuesto total, canales disponibles (Meta, Google, Email, LinkedIn, TikTok), plazo y KPIs de éxito. Genera un resumen estructurado para aprobación humana.

Paso 2 — Investigación de mercado autónoma:
El agente analiza campañas previas del cliente, tendencias del sector en los últimos 90 días, mensajes de competidores y estacionalidad histórica. Produce un informe de oportunidades con puntuación de prioridad por canal.

Paso 3 — Generación de estrategia:
Basándose en el análisis, el agente propone: distribución de presupuesto por canal, calendario de publicación con horas óptimas, 3 líneas de mensajes alternativos con diferente tono (emocional, racional, urgencia), y criterios de pausa automática si el CPA supera el umbral definido.

Paso 4 — Creación de contenido:
El agente genera borradores para cada pieza: copies para Meta Ads (headlines, descripciones, CTAs en variantes A/B), asunto y cuerpo de emails, guiones para vídeos cortos de TikTok/Reels, y posts de LinkedIn. Cada pieza incluye metadatos: canal, formato, audiencia segmentada y variante de prueba.

Paso 5 — Punto de control humano (obligatorio):
El agente prepara un paquete de revisión con todos los copies, la justificación de cada decisión estratégica y un semáforo de riesgo (verde/amarillo/rojo) por pieza. El humano aprueba, modifica o rechaza antes de que el agente continúe.

Paso 6 — Lanzamiento y monitoreo:
Tras aprobación, el agente simula el lanzamiento escalonado (20% audiencia primero), establece alertas automáticas para anomalías de CTR, CPC y conversión, y programa reportes diarios en formato ejecutivo.

Paso 7 — Optimización iterativa:
Cada 48 horas el agente analiza resultados, pausa creatividades de bajo rendimiento (CTR < umbral), escala las ganadoras, propone ajustes de segmentación y genera un log de decisiones autónomas para auditoría.

instrucciones de output:
Genera el diseño completo del agente con:
- Diagrama de flujo en texto (usando ASCII o Mermaid)
- Plantilla de prompt para cada paso del agente
- Lista de herramientas necesarias (APIs, integraciones)
- Política de escalado humano: qué decisiones NUNCA puede tomar el agente solo
- Métricas de éxito del agente como sistema (no solo de la campaña)

restricciones importantes:
- El agente nunca debe publicar contenido sin aprobación humana previa
- Toda decisión de gasto superior al 15% del presupuesto diario requiere confirmación
- Los mensajes de la marca deben pasar por un filtro de tono antes de enviarse
- El agente debe registrar en log cada acción autónoma con timestamp y justificación

formato de entrega:
Estructura tu respuesta en secciones claramente separadas. Usa tablas para comparar opciones. Incluye ejemplos concretos de prompts para cada paso del agente. Añade una sección de "errores comunes" con las formas en que este tipo de agente falla y cómo prevenirlos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Automatización de campañas de marketing de extremo a extremo con supervisión humana',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Agente de IA para revisión y mejora de código en pull requests',
                'description'       => 'Configura un agente de IA que revise automáticamente pull requests, detecte bugs, sugiera mejoras y genere documentación técnica sin intervención manual.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un agente de IA especializado en revisión de código que actúe como revisor senior autónomo en el flujo de desarrollo de software, integrándose con GitHub o GitLab.

contexto del rol:
Eres un ingeniero de software senior con experiencia en DevOps y prácticas de código limpio. Has diseñado sistemas de revisión automatizada para equipos de 5 a 50 desarrolladores y conoces las fricciones más comunes del proceso de PR review manual.

tarea principal:
Diseña el agente completo de revisión de código, incluyendo su lógica de análisis, los criterios que evalúa, cómo prioriza sus comentarios y cómo aprende de las decisiones del equipo con el tiempo.

componentes del agente:

Módulo 1 — Análisis estático inteligente:
El agente va más allá del linting tradicional. Analiza el diff completo del PR buscando: antipatrones específicos del stack tecnológico del proyecto, código duplicado respecto a funciones ya existentes en el repositorio, violaciones de convenciones de naming del equipo, complejidad ciclomática excesiva en funciones nuevas, y dependencias añadidas sin justificación en el commit message.

Módulo 2 — Detección de vulnerabilidades de seguridad:
El agente revisa cada PR contra un checklist de seguridad contextual: exposición de secretos o credenciales hardcoded, validación de inputs en endpoints nuevos, manejo incorrecto de errores que exponga información sensible, uso de librerías con CVEs conocidos, y SQLi/XSS potencial en código de acceso a datos.

Módulo 3 — Evaluación de cobertura de tests:
Analiza si el código nuevo tiene tests correspondientes, si los tests existentes cubren los casos edge introducidos, si hay tests de integración necesarios que faltan, y si el coverage global del módulo afectado baja respecto al umbral del equipo.

Módulo 4 — Generación de comentarios contextuales:
El agente genera comentarios en línea con tres niveles de urgencia (bloqueante, sugerencia, nitpick). Cada comentario incluye: el problema detectado, el impacto potencial, el código de ejemplo corregido, y el enlace a la documentación o guía de estilo relevante.

Módulo 5 — Resumen ejecutivo del PR:
Antes de que el desarrollador humano revise, el agente genera un resumen: riesgo global del PR (alto/medio/bajo), lista de cambios agrupados por tipo, tiempo estimado de revisión manual, y elementos que requieren atención prioritaria.

Módulo 6 — Aprendizaje del equipo:
El agente registra qué comentarios automáticos fueron aceptados, modificados o descartados por los revisores humanos. Con esta data ajusta su calibración: reduce la frecuencia de comentarios ignorados y eleva la prioridad de patrones que el equipo siempre corrige.

instrucciones de output:
Genera el diseño completo incluyendo:
- Arquitectura del agente con herramientas necesarias (AST parsers, APIs de GitHub)
- Prompts específicos para cada módulo de análisis
- Ejemplo de comentario bien estructurado vs. mal estructurado
- Política de falsos positivos: cómo el agente debe manejar incertidumbre
- Configuración de umbrales por tipo de proyecto (startup vs. empresa regulada)
- Roadmap de implementación en 4 semanas para un equipo de 5 devs

restricciones:
- El agente nunca bloquea un merge sin que un humano confirme el bloqueo
- Los comentarios de nitpick no cuentan para el score de aprobación del PR
- Toda sugerencia de refactor que supere 50 líneas requiere issue separado

formato de entrega:
Responde con secciones numeradas, ejemplos de código reales (usa Python/TypeScript como referencia), tablas de criterios de evaluación y un FAQ de objeciones comunes del equipo de desarrollo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatización del proceso de code review con IA para equipos de desarrollo ágil',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Agente de IA para auditoría y feedback de sistemas de diseño',
                'description'       => 'Crea un agente que revise consistencia de diseño, accesibilidad y adherencia al design system de forma autónoma en cada entrega.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un agente de IA que audite entregas de diseño de forma autónoma, verificando consistencia con el design system, accesibilidad WCAG y coherencia visual antes de que lleguen al equipo de desarrollo.

contexto del rol:
Eres un design system lead con experiencia en Figma, tokens de diseño y accesibilidad digital. Has gestionado sistemas de diseño para productos con más de 100.000 usuarios y sabes que el 60% de los bugs de UI tienen origen en inconsistencias detectables antes del handoff.

tarea principal:
Diseña el agente de auditoría de diseño paso a paso, definiendo qué analiza, cómo estructura su feedback y cómo prioriza los problemas encontrados para que el diseñador pueda actuar eficientemente.

módulos del agente:

Módulo 1 — Verificación de tokens y variables:
El agente compara los valores usados en la entrega (colores, tipografías, espaciados, radios de borde) contra el inventario oficial de tokens del design system. Detecta: valores hardcoded que deberían ser tokens, tokens obsoletos de versiones anteriores, y variaciones mínimas (ej. #F5F5F5 vs #F4F4F4) que indican inconsistencia manual.

Módulo 2 — Auditoría de accesibilidad WCAG 2.2:
El agente evalúa automáticamente: contraste de color entre texto y fondo (AA mínimo, AAA recomendado), tamaño mínimo de targets táctiles (44x44px), jerarquía de encabezados coherente, alt text de imágenes funcionales, y estados de focus visibles en elementos interactivos.

Módulo 3 — Consistencia de componentes:
Compara los componentes usados en la entrega contra la biblioteca oficial. Identifica: componentes duplicados creados desde cero en lugar de usar los existentes, propiedades de componentes que no coinciden con las variantes documentadas, y composiciones que violan las reglas de espaciado del grid.

Módulo 4 — Revisión de motion y microinteracciones:
El agente verifica que las animaciones propuestas respetan: duraciones del sistema (no inventadas), curvas de easing estándar, y la preferencia reduce-motion para usuarios con sensibilidad vestibular.

Módulo 5 — Generación de informe de auditoría:
El agente produce un documento estructurado con: score de conformidad por categoría (0-100), lista priorizada de issues (crítico/mayor/menor), capturas anotadas de cada problema, código de corrección sugerido para cada issue de token, y estimación del tiempo necesario para aplicar las correcciones.

Módulo 6 — Comunicación con el equipo:
El agente redacta comentarios en Figma o en el canal de Slack configurado, con un tono constructivo y específico. No dice "esto está mal" sino "el componente Button usa #2563EB en lugar del token brand-primary-600. Actualizar al token reduce la deuda técnica y garantiza coherencia en modo oscuro."

instrucciones de output:
Diseña el sistema completo con:
- Checklist de auditoría en formato tabla (categoría, criterio, severidad, herramienta de verificación)
- Plantillas de comentarios para Figma por tipo de issue
- Reglas de priorización: qué bloquea el handoff y qué puede ir como deuda técnica
- Integración con el flujo de trabajo: cuándo se ejecuta el agente (al entregar, al hacer merge en Figma)
- Métricas de éxito del agente: tasa de issues bloqueantes en producción antes vs. después

restricciones del agente:
- No puede aprobar una entrega si hay issues de accesibilidad críticos (contraste < 3:1 en texto de cuerpo)
- Las sugerencias estéticas subjetivas quedan fuera del scope del agente
- El agente puede sugerir pero nunca modificar el diseño directamente

formato de entrega:
Responde con secciones claramente delimitadas, incluye ejemplos reales de feedback bien redactado, y añade una guía rápida de implementación para un equipo de 3 diseñadores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Control de calidad automatizado de entregas de diseño antes del handoff a desarrollo',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Agente de IA para prospección y seguimiento de ventas B2B',
                'description'       => 'Diseña un agente de IA que automatice la prospección de leads B2B, personalice los outreach y gestione el seguimiento sin perder el toque humano.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear un agente de ventas autónomo que gestione la prospección de leads B2B desde la identificación del perfil ideal hasta el primer contacto personalizado y los seguimientos posteriores.

contexto del rol:
Eres un director de ventas B2B con experiencia en sales tech (CRM, sequencing, data enrichment). Has construido equipos SDR de alto rendimiento y conoces la diferencia entre automatización que convierte y automatización que destruye la reputación de la empresa.

tarea principal:
Diseña el agente de prospección paso a paso, incluyendo sus fuentes de datos, lógica de personalización, cadencias de contacto y criterios de escalado a un vendedor humano.

flujo del agente:

Etapa 1 — Definición y búsqueda del ICP:
El agente recibe el Ideal Customer Profile (sector, tamaño de empresa, cargo del decisor, señales de compra) y busca en LinkedIn, Apollo, Crunchbase y noticias del sector. Construye una lista de prospectos con score de prioridad basado en: señales de intención (búsquedas recientes, contenido consumido), eventos desencadenantes (nueva financiación, expansión, cambio de liderazgo) y fit con el ICP.

Etapa 2 — Investigación profunda del prospecto:
Para cada lead de alta prioridad, el agente recopila: el problema específico que probablemente tiene según su rol y contexto, publicaciones recientes en LinkedIn del prospecto, noticias de su empresa en los últimos 30 días, y conexiones en común que puedan generar una introducción cálida.

Etapa 3 — Generación de mensajes hiperpersonalizados:
El agente redacta el primer mensaje de outreach integrando los datos recopilados. La estructura es: gancho basado en algo específico del prospecto (no genérico), conexión entre su contexto actual y el problema que resuelve nuestro producto, propuesta de valor en una frase sin jerga comercial, y CTA de bajo compromiso (una pregunta, no "¿tienes 30 minutos?").

Etapa 4 — Secuencia de seguimiento adaptativa:
Si no hay respuesta, el agente ejecuta una cadencia de 5 toques en 21 días, cambiando el ángulo en cada contacto: valor educativo (un recurso relevante), prueba social (caso de éxito del mismo sector), perspectiva diferente (abordar el problema desde otro ángulo), y un cierre de cortesía. El agente analiza las tasas de apertura y respuesta para optimizar horas y días de envío.

Etapa 5 — Calificación y transferencia al humano:
Cuando un prospecto responde positivamente, el agente recopila información de calificación MEDDIC básica (dolor confirmado, presupuesto aproximado, proceso de decisión) a través de la conversación. Cuando el lead está calificado, genera un briefing completo para el Account Executive con todo el contexto.

Etapa 6 — Manejo de objeciones iniciales:
El agente tiene respuestas entrenadas para las 5 objeciones más comunes ("no es el momento", "ya tenemos proveedor", "mándame información"), pero escala al humano si la conversación se vuelve compleja o si el prospecto hace preguntas técnicas específicas.

instrucciones de output:
Genera el diseño completo con:
- Plantillas de mensajes de outreach para 3 perfiles de prospecto diferentes
- Reglas de personalización: qué información cambia en cada mensaje y cuál es la estructura fija
- Criterios exactos de scoring de leads (tabla con puntuación por variable)
- Política de gestión de No-contactar y opt-outs
- Métricas de éxito: tasa de respuesta objetivo, conversión a reunión, tiempo promedio de calificación

restricciones del agente:
- Nunca enviar más de 3 mensajes a un mismo prospecto sin respuesta en la misma semana
- Verificar siempre que el contacto no esté en lista de no-contactar antes de cada envío
- El agente no puede comprometer pricing, plazos ni términos contractuales

formato de entrega:
Estructura la respuesta con ejemplos concretos de mensajes de outreach para un caso de uso específico (por ejemplo, venta de software de RRHH a directores de personas en empresas de 200-1000 empleados). Incluye un ejemplo completo de secuencia de 5 toques.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Automatización del proceso de prospección y outreach B2B manteniendo personalización real',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Agente de IA para análisis de feedback de producto y priorización',
                'description'       => 'Construye un agente que agregue feedback de usuarios de múltiples fuentes, detecte patrones y genere recomendaciones de priorización para el roadmap.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un agente de IA que procese de forma autónoma el feedback de producto de múltiples canales, identifique temas emergentes y genere recomendaciones accionables para el roadmap del equipo de producto.

contexto del rol:
Eres un Product Manager con experiencia en empresas SaaS de crecimiento acelerado. Has gestionado backlogs con cientos de solicitudes y sabes que el 70% del feedback de usuarios repite los mismos 10-15 problemas con distintas palabras. Tu desafío es tomar decisiones de roadmap respaldadas por datos sin ahogarte en el volumen de señales.

tarea principal:
Diseña el sistema completo del agente, desde la ingesta de datos hasta la generación del informe de priorización, incluyendo cómo maneja ambigüedad y cómo calibra el peso de distintas fuentes de feedback.

arquitectura del agente:

Módulo 1 — Ingesta multicanal:
El agente conecta con: encuestas NPS y CSAT (Typeform, SurveyMonkey), tickets de soporte (Zendesk, Intercom), reviews de app stores (Apple App Store, Google Play), menciones en redes sociales, sesiones de user research transcritas, y solicitudes de feature en el CRM de ventas. Normaliza el formato de cada fuente antes de procesar.

Módulo 2 — Categorización y clustering semántico:
El agente agrupa el feedback en temas usando embeddings semánticos (no solo keywords). Distingue entre: bugs reportados, solicitudes de feature, problemas de UX/usabilidad, y feedback positivo (para identificar qué no tocar). Cada cluster recibe un nombre descriptivo generado automáticamente y una muestra de verbatim representativos.

Módulo 3 — Scoring de impacto:
Para cada tema identificado, el agente calcula: frecuencia (cuántos usuarios lo mencionan), intensidad del sentimiento (del 1 al 10), segmentación por perfil de usuario (ICP vs. usuarios de bajo valor), correlación con métricas de negocio (los temas mencionados por usuarios con alta retención pesan más), y urgencia temporal (picos recientes vs. feedback constante de baja intensidad).

Módulo 4 — Detección de señales débiles:
El agente identifica temas emergentes que aún tienen bajo volumen pero muestran crecimiento acelerado en las últimas semanas. Estos son los candidatos a convertirse en el problema dominante del próximo trimestre si no se actúa.

Módulo 5 — Generación del informe de priorización:
El agente produce un documento ejecutivo con: top 5 temas por impacto ponderado, verbatim reales para cada tema (máximo 3 por tema, seleccionados por representatividad), relación de cada tema con los OKRs actuales del producto, esfuerzo estimado de resolución (bajo/medio/alto basado en complejidad técnica del cluster), y recomendación de prioridad con justificación.

Módulo 6 — Alertas proactivas:
El agente monitoriza en tiempo real y alerta al Product Manager cuando: un nuevo tema supera el umbral de menciones en 48 horas, el NPS de un segmento específico cae más de 10 puntos, o un bug reportado por un usuario enterprise no tiene ticket de soporte abierto.

instrucciones de output:
Diseña el sistema con:
- Diagrama de flujo del agente (texto o pseudocódigo)
- Fórmula de scoring ponderado para cada tema (con pesos configurables)
- Ejemplo de informe de priorización completo para un producto SaaS ficticio
- Guía de calibración: cómo ajustar los pesos según la etapa del producto (early stage vs. madurez)
- Política de privacidad: cómo el agente maneja datos personales en el feedback

restricciones del agente:
- No puede tomar decisiones de roadmap de forma autónoma, solo recomendar
- Toda recomendación debe incluir la data que la respalda (nunca solo la conclusión)
- Los verbatim compartidos en informes deben estar anonimizados

formato de entrega:
Responde con secciones claramente numeradas. Incluye un ejemplo real de cómo el agente procesaría 50 tickets de soporte hipotéticos y qué insights generaría. Añade una sección de "limitaciones conocidas" del sistema.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Agregación y análisis automático de feedback de usuarios para decisiones de roadmap basadas en datos',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Agente de IA para cribado y preselección de candidatos en RRHH',
                'description'       => 'Diseña un agente que procese CVs, evalúe candidatos contra los requisitos del puesto y genere shortlists justificadas reduciendo el sesgo en el proceso.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear un agente de IA que automatice la fase de cribado de candidatos en procesos de selección, evaluando CVs y perfiles de LinkedIn contra los requisitos del puesto con criterios transparentes y auditables.

contexto del rol:
Eres un HR Tech specialist con experiencia en diseño de procesos de selección equitativos. Conoces los riesgos de sesgo algorítmico en reclutamiento y sabes que el valor de la IA en selección está en aumentar la consistencia y la velocidad del cribado inicial, no en reemplazar el juicio humano en las fases decisivas.

tarea principal:
Diseña el agente de cribado completo, con énfasis en la transparencia de criterios, la mitigación de sesgo y la generación de shortlists que el equipo de selección pueda auditar y cuestionar.

componentes del sistema:

Módulo 1 — Definición de criterios con el hiring manager:
Antes de procesar candidatos, el agente guía al hiring manager para definir: requisitos eliminatorios (sin los cuales el candidato no puede avanzar), requisitos deseables con peso relativo (1-5), y señales de alerta que requieren verificación adicional. El agente también señala requisitos que podrían introducir sesgo indirecto (ej. "5 años de experiencia" como proxy de edad).

Módulo 2 — Procesamiento de CVs:
El agente extrae de cada CV: experiencia relevante (años, roles, sectores), habilidades técnicas con nivel de evidencia (mencionada, demostrada en proyectos, certificada), logros cuantificables, trayectoria de crecimiento, y señales de aprendizaje continuo. Normaliza la información para que candidatos con formatos de CV distintos sean comparables.

Módulo 3 — Evaluación anónima:
El agente evalúa cada candidato contra los criterios definidos sin considerar: nombre (eliminación de sesgo de género y etnia), universidad específica (solo relevancia del nivel formativo), año de graduación (como proxy de edad), y fotografía. Genera un score por criterio con la evidencia específica que lo respalda.

Módulo 4 — Generación de shortlist justificada:
El agente produce una lista priorizada donde cada candidato incluye: score total y desglose por criterio, citas textuales del CV que justifican cada puntuación, preguntas específicas para la entrevista basadas en gaps o puntos de interés detectados, y una comparación con el candidato más fuerte del pool para contextualizar.

Módulo 5 — Detección de sesgos en el proceso:
El agente analiza la distribución del shortlist por diversas dimensiones (sin datos personales identificables) y alerta si hay concentración estadísticamente inusual que sugiera que los criterios definidos producen sesgo sistémico.

Módulo 6 — Handoff al equipo de selección:
Genera un briefing para el recruiter con: contexto del puesto, resumen del pool total analizado, shortlist con justificaciones, y los candidatos borderline que merecen revisión manual por aspectos no capturados en el CV.

instrucciones de output:
Diseña el sistema completo con:
- Plantilla de definición de criterios con ejemplos por tipo de rol
- Rúbrica de evaluación configurable (tabla con criterios, pesos y descriptores)
- Ejemplo de ficha de candidato generada por el agente
- Protocolo de auditoría: cómo verificar que el agente no está sesgando los resultados
- Marco legal: qué información el agente nunca debe procesar según GDPR y normativa española

restricciones del agente:
- Nunca toma decisiones de rechazo definitivo de forma autónoma
- Toda evaluación negativa debe incluir la evidencia específica que la genera
- Los datos personales identificables se eliminan antes del scoring

formato de entrega:
Responde con secciones numeradas. Incluye una rúbrica de evaluación de ejemplo para un rol de Account Executive y una ficha de candidato modelo generada por el agente para ese rol.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Automatización del cribado de CVs con criterios transparentes y mitigación de sesgo en selección',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Agente de IA para análisis financiero automatizado y alertas',
                'description'       => 'Construye un agente que monitorice KPIs financieros, detecte anomalías y genere reportes ejecutivos automáticos para la toma de decisiones.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un agente de IA financiero que monitorice de forma continua los indicadores clave de negocio, detecte desviaciones respecto al plan y genere alertas e informes ejecutivos accionables sin intervención manual diaria.

contexto del rol:
Eres un CFO o controller financiero con experiencia en empresas de 10 a 200 empleados. Has vivido la transición de reportes manuales en Excel a dashboards automatizados, y conoces tanto el valor como los riesgos de automatizar el análisis financiero.

tarea principal:
Diseña el agente financiero completo, desde la conexión con fuentes de datos hasta la generación de alertas y el formato de los informes ejecutivos que produce de forma autónoma.

arquitectura del agente:

Módulo 1 — Conexión con fuentes de datos:
El agente integra: ERP o contabilidad (Holded, Sage, QuickBooks, Xero), extractos bancarios vía open banking, CRM para datos de pipeline y ARR, y herramientas de facturación. Establece un proceso de reconciliación diario para detectar discrepancias entre sistemas antes de analizar.

Módulo 2 — Cálculo y seguimiento de KPIs:
El agente calcula automáticamente y registra evolución histórica de: MRR/ARR y churn revenue, Burn Rate y Runway en escenarios (actual, conservador, optimista), CAC por canal y cohorte, LTV y ratio LTV/CAC, Gross Margin por línea de producto, DSO (días de cobro pendiente), y Cash Conversion Cycle.

Módulo 3 — Sistema de alertas inteligentes:
El agente distingue entre anomalías estadísticas (desviación > 2 sigma de la media histórica) y alertas de umbral (burn rate supera el 110% del plan). Para cada alerta genera: contexto (por qué es una alerta, no solo que lo es), posibles causas (lista priorizada), datos adicionales necesarios para confirmar la causa, y acciones recomendadas con urgencia.

Módulo 4 — Análisis de escenarios:
Cuando se detecta una desviación significativa, el agente genera automáticamente 3 proyecciones a 90 días: escenario base (continúa la tendencia actual), escenario correctivo (si se implementan las acciones recomendadas), y escenario adverso (si la desviación se acelera). Cada escenario incluye el impacto en runway y los hitos críticos.

Módulo 5 — Informe ejecutivo semanal:
El agente genera cada lunes un informe de 1 página con: semáforo de estado por KPI, variación vs. semana anterior y vs. plan anual, las 3 alertas más importantes con contexto, y las decisiones pendientes que requieren atención esta semana.

Módulo 6 — Informe mensual de cierre:
Al final de cada mes, el agente produce el cierre financiero preliminar con: P&L simplificado vs. budget, análisis de varianzas por línea, actualización de forecast anual, y comparativa con benchmarks del sector cuando estén disponibles.

instrucciones de output:
Genera el diseño completo con:
- Lista de KPIs por tipo de empresa (SaaS, ecommerce, servicios profesionales) con fórmulas
- Reglas de alertas configurables (tabla: KPI, umbral de alerta, umbral crítico, acción recomendada)
- Ejemplo de informe ejecutivo semanal para una empresa SaaS con 500k€ MRR
- Protocolo de manejo de datos sensibles: accesos, cifrado, auditoría
- Limitaciones del agente: qué análisis requiere siempre intervención humana

restricciones del agente:
- No puede autorizar pagos ni transferencias de ningún tipo
- Los informes con datos de empleados requieren anonimización
- Toda proyección debe incluir claramente sus supuestos y nivel de confianza

formato de entrega:
Responde con secciones claramente separadas, incluye un ejemplo completo de alerta bien formateada y un ejemplo de informe ejecutivo semanal de una página.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Monitorización continua de KPIs financieros y generación automática de alertas e informes ejecutivos',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Agente de IA para revisión inicial de contratos y detección de riesgos',
                'description'       => 'Diseña un agente que revise contratos de forma autónoma, identifique cláusulas de riesgo y genere un resumen ejecutivo para la revisión del abogado.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un agente de IA que realice la revisión inicial de contratos comerciales, identifique cláusulas potencialmente problemáticas y genere un informe estructurado que reduzca el tiempo de revisión del abogado en un 60% sin comprometer la calidad del análisis.

contexto del rol:
Eres un abogado mercantilista con experiencia en contratos de servicios, SaaS y distribución. Conoces las cláusulas que más frecuentemente generan disputas y sabes que el 80% del trabajo de revisión inicial es identificar y categorizar los mismos tipos de riesgo en diferentes formulaciones.

tarea principal:
Diseña el agente de revisión contractual completo, incluyendo su metodología de análisis, cómo categoriza riesgos, qué produce como output y cuáles son sus limitaciones explícitas para no generar falsa seguridad jurídica.

sistema de análisis:

Módulo 1 — Procesamiento y estructura del contrato:
El agente identifica y mapea la estructura del contrato: partes contratantes y su naturaleza jurídica, objeto del contrato, plazo y condiciones de renovación, precio y condiciones de pago, cláusulas de responsabilidad, y mecanismos de resolución de disputas. Genera un índice navegable del documento.

Módulo 2 — Detección de cláusulas de riesgo por categoría:
El agente analiza cada cláusula buscando patrones de riesgo en 8 categorías:
- Limitaciones de responsabilidad: ¿son recíprocas? ¿excluyen daños indirectos a nuestro favor también?
- Indemnizaciones: ¿son ilimitadas? ¿incluyen defensa legal?
- Propiedad intelectual: ¿quién es dueño de los entregables y derivados?
- Confidencialidad: ¿duración razonable? ¿excepciones adecuadas?
- Terminación: ¿causas de terminación unilateral por la otra parte?
- Cambios de control: ¿el contrato sobrevive a una M&A?
- Ley aplicable y jurisdicción: ¿favorable para nosotros?
- Exclusividad: ¿hay compromisos implícitos de exclusividad no deseada?

Módulo 3 — Scoring de riesgo por cláusula:
Para cada cláusula identificada como potencialmente problemática, el agente asigna: nivel de riesgo (alto/medio/bajo), tipo de impacto (económico, operacional, reputacional, legal), probabilidad de activación estimada, y una comparación con el estándar de mercado para ese tipo de cláusula.

Módulo 4 — Generación de alternativas:
Para las cláusulas de riesgo alto, el agente sugiere formulaciones alternativas más equilibradas, con la justificación de por qué la nueva redacción mejora la posición del cliente sin hacer inviable la negociación.

Módulo 5 — Resumen ejecutivo para el abogado:
El agente produce un documento de 2-3 páginas con: semáforo de riesgo global del contrato, top 5 issues críticos con cita textual de la cláusula, resumen de los puntos de negociación prioritarios, y preguntas específicas que el abogado debe resolver antes de firmar.

Módulo 6 — Checklist de elementos faltantes:
El agente también identifica qué cláusulas estándar están ausentes: SLA si es un contrato de servicios tecnológicos, plan de contingencia, auditoría de cuentas, protección de datos (RGPD), etc.

instrucciones de output:
Diseña el sistema con:
- Lista de los 20 patrones de riesgo más comunes con su descripción y cómo detectarlos
- Plantilla de informe de revisión contractual (estructura completa con secciones)
- Ejemplo de análisis de una cláusula de limitación de responsabilidad desequilibrada
- Advertencias legales que el agente debe incluir en todo informe (no soy tu abogado, etc.)
- Limitaciones explícitas del sistema: qué nunca puede hacer este agente

restricciones críticas del agente:
- El informe siempre debe aclarar que es un análisis preliminar, no asesoramiento legal
- El agente no puede recomendar firmar o no firmar ningún contrato
- Las sugerencias de redacción alternativa son orientativas, requieren revisión de abogado
- No procesa información bajo secreto profesional sin las salvaguardas adecuadas

formato de entrega:
Responde con secciones numeradas. Incluye un ejemplo real de análisis de una cláusula de indemnización desequilibrada: la cláusula original, el análisis del agente y la redacción alternativa propuesta.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Pre-revisión automatizada de contratos comerciales para identificar riesgos antes de la revisión del abogado',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Agente de IA para resolución autónoma de tickets de soporte nivel 1',
                'description'       => 'Construye un agente que gestione tickets de soporte de forma autónoma, resuelva los casos comunes sin intervención humana y escale los complejos con contexto completo.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un agente de soporte autónomo que resuelva el 70% de los tickets de nivel 1 sin intervención humana, con una satisfacción del cliente igual o superior a la del equipo humano en esa categoría de incidencias.

contexto del rol:
Eres un Customer Success Manager con experiencia en implementación de herramientas de soporte (Zendesk, Intercom, Freshdesk) y en diseño de sistemas de soporte escalables. Has medido que en la mayoría de SaaS el 60-75% de los tickets son variaciones de los mismos 20-30 problemas, lo que hace factible la automatización con alta calidad.

tarea principal:
Diseña el agente de soporte de nivel 1 completo, incluyendo cómo se entrena, cómo gestiona los casos, cómo mide su propia efectividad y cómo escala al equipo humano cuando es necesario.

arquitectura del sistema:

Módulo 1 — Base de conocimiento dinámica:
El agente se alimenta de: documentación del producto (FAQs, guías, changelogs), historial de tickets resueltos con las respuestas que generaron CSAT alto, políticas de soporte (tiempos de respuesta SLA, qué puede ofrecer como compensación), y errores conocidos del sistema con sus soluciones verificadas. La base de conocimiento se actualiza automáticamente cuando el equipo resuelve un tipo nuevo de incidencia.

Módulo 2 — Clasificación y enrutamiento:
Al recibir un ticket, el agente lo clasifica por: tipo de problema (bug, pregunta de uso, problema de facturación, solicitud de feature), urgencia (impacto en negocio del cliente, SLA del plan), complejidad (resolvible con información disponible vs. requiere investigación técnica), y sentimiento del cliente (frustrado, neutral, satisfecho en contacto previo).

Módulo 3 — Resolución autónoma de casos nivel 1:
Para tickets clasificados como resolvibles, el agente: busca en la base de conocimiento la solución más relevante, personaliza la respuesta con el nombre del cliente y el contexto específico de su caso, incluye pasos detallados con capturas o vídeos cuando estén disponibles, y verifica que la solución propuesta aplica a la versión del producto que usa el cliente.

Módulo 4 — Verificación de resolución:
El agente hace seguimiento automático: si el cliente no responde en 24h, pregunta si el problema quedó resuelto. Si el cliente dice que no funcionó, intenta una segunda solución alternativa. Si falla también, escala automáticamente con todo el contexto.

Módulo 5 — Escalado inteligente al equipo humano:
Cuando escala, el agente prepara un briefing completo para el agente humano con: resumen del problema en una frase, historial completo del cliente (plan, tiempo como cliente, tickets previos), soluciones ya intentadas en este ticket, nivel de frustración estimado del cliente, y la acción recomendada como primer paso del agente humano.

Módulo 6 — Métricas de calidad y mejora continua:
El agente registra: tasa de resolución en primer contacto, CSAT de tickets resueltos de forma autónoma vs. escalados, tiempo promedio de resolución, y tickets donde la solución propuesta no funcionó (para detectar gaps en la base de conocimiento).

instrucciones de output:
Diseña el sistema con:
- Flujo de decisión completo del agente (árbol de decisión en texto)
- Plantillas de respuesta para los 10 tipos de ticket más comunes (personalizable por producto)
- Criterios exactos de escalado: cuándo siempre escala al humano independientemente de la clasificación
- Sistema de gestión de clientes frustrados: cómo el agente detecta y prioriza estos casos
- Métricas de éxito del agente como sistema (no solo del equipo de soporte)

restricciones del agente:
- Nunca promete funcionalidades que no existen
- No puede ofrecer compensaciones económicas (créditos, reembolsos) sin aprobación humana
- Siempre identifica cuando es un agente de IA si el cliente pregunta directamente
- Escala inmediatamente si detecta riesgo de cancelación en el lenguaje del cliente

formato de entrega:
Responde con secciones claramente numeradas. Incluye un ejemplo de flujo completo para un ticket típico de "no puedo hacer login" y otro de un cliente frustrado que amenaza con cancelar. Incluye las respuestas que generaría el agente en cada paso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Automatización de soporte nivel 1 para resolver tickets comunes sin intervención humana manteniendo alta satisfacción',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Agente de IA para gestión autónoma del negocio freelance',
                'description'       => 'Diseña un agente personal que gestione propuestas, seguimiento de clientes, facturación y planificación de tiempo para freelancers de forma autónoma.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un agente de IA que actúe como chief of staff personal para freelancers, gestionando las operaciones del negocio (propuestas, contratos, facturación, seguimiento de clientes, planificación) para que el freelancer pueda dedicar el 90% de su tiempo al trabajo billable.

contexto del rol:
Eres un freelance senior con más de 5 años de experiencia gestionando tu propio negocio. Has aprendido que el 30-40% del tiempo de un freelancer se va en tareas administrativas que no generan ingreso directo: responder emails, preparar propuestas, perseguir pagos pendientes, actualizar el portfolio. Necesitas un sistema que gestione todo eso de forma autónoma.

tarea principal:
Diseña el agente personal de operaciones freelance completo, incluyendo todos los flujos de trabajo que debe gestionar, las plantillas que necesita y los criterios para tomar decisiones autónomas.

flujos de trabajo del agente:

Flujo 1 — Gestión de leads entrantes:
Cuando llega una consulta de proyecto, el agente: envía una respuesta inicial en menos de 2 horas (personalizada según el tipo de proyecto), hace preguntas de calificación para entender presupuesto, plazo y alcance, evalúa el fit con el ICP del freelancer (tipo de cliente con que trabaja mejor, ticket mínimo, sectores preferidos), y prepara un briefing antes de la llamada de descubrimiento.

Flujo 2 — Generación de propuestas:
El agente genera propuestas personalizadas basándose en: la información recopilada en la fase de calificación, el histórico de proyectos similares completados (scope, horas reales vs. estimadas, imprevistos), y las plantillas de propuesta del freelancer. La propuesta incluye alcance detallado, pricing con desglose, plazos realistas, y términos de pago.

Flujo 3 — Seguimiento y negociación:
Si el cliente no responde a la propuesta, el agente ejecuta una cadencia de seguimiento de 3 toques en 10 días. Si el cliente negocia precio, el agente presenta alternativas (reducir scope, pago adelantado, referral) dentro de los límites que el freelancer ha configurado.

Flujo 4 — Gestión de proyectos activos:
El agente monitoriza proyectos en curso: envía recordatorios de entregables, notifica al cliente cuando un entregable está listo para revisión, registra el tiempo billable automáticamente, y alerta al freelancer cuando un proyecto se acerca al límite de horas acordado.

Flujo 5 — Facturación y cobro:
El agente genera facturas automáticamente según los hitos acordados, las envía con recordatorios educados si no se paga en el plazo, escala a un recordatorio más firme si el retraso supera 15 días, y lleva un registro del estado de cobro de todos los proyectos.

Flujo 6 — Planificación de capacidad:
El agente monitoriza la carga de trabajo del freelancer, identifica ventanas de disponibilidad en las próximas 4-8 semanas, y alerta cuando hay riesgo de sobrecontratación o de gap de trabajo (para activar acciones de desarrollo de negocio proactivo).

instrucciones de output:
Diseña el sistema completo con:
- Lista de todas las plantillas necesarias (propuesta, contrato, factura, emails de seguimiento)
- Configuración de límites del agente: qué puede decidir solo y qué necesita confirmación
- Ejemplo completo de un ciclo de vida de proyecto gestionado por el agente (desde lead hasta cobro)
- Herramientas necesarias y cómo integrarlas (Notion, Calendly, Stripe, Gmail)
- Métricas del negocio freelance que el agente rastrea semanalmente

restricciones del agente:
- No puede comprometer plazos ni precios fuera de los rangos configurados por el freelancer
- No puede firmar contratos ni aceptar términos en nombre del freelancer
- Los emails que salen en nombre del freelancer deben tener aprobación previa para nuevos tipos de situaciones

formato de entrega:
Responde con secciones numeradas. Incluye un ejemplo de propuesta generada por el agente para un proyecto de diseño web de 3 meses, y el flujo completo de seguimiento hasta el cierre o descarte del lead.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatización de las operaciones del negocio freelance para maximizar el tiempo dedicado al trabajo billable',
                'vote_score'        => 47,
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
