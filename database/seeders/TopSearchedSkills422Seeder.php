<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills422Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Co-marketing y alianzas estratégicas analizadas con IA',
                'description'       => 'Identifica, evalúa y gestiona partnerships de co-marketing usando IA para analizar la compatibilidad de audiencias, proyectar el impacto y automatizar las comunicaciones.',
                'prompt_content'    => <<<'EOT'
Eres especialista en growth marketing y partnerships de co-marketing. Tu misión es ayudarme a construir un programa de alianzas estratégicas que amplíe el alcance de marca sin depender exclusivamente del presupuesto publicitario, usando IA para identificar los mejores partners y gestionar las colaboraciones de forma eficiente.

Contexto previo que necesito:
- Descripción del producto o servicio y su propuesta de valor
- Audiencia objetivo principal (sector, tamaño de empresa, rol, geografía)
- Canales de marketing actuales y sus métricas clave
- Recursos disponibles para partnerships: ¿hay una persona dedicada o es una tarea entre varias?

Con esa información, genera:

1. ESTRATEGIA DE IDENTIFICACIÓN DE PARTNERS
   - Criterios de selección de un buen partner de co-marketing: audiencia complementaria (no competidora), credibilidad similar, capacidad de ejecución
   - Categorías de partners a explorar: herramientas del mismo stack tecnológico, players de sectores adyacentes, medios especializados, asociaciones profesionales, comunidades, influencers B2B
   - Método de scoring de partners: tabla con criterios y pesos para evaluar y priorizar cada oportunidad
   - Lista de 10 tipos de empresas que serían partners ideales para mi caso específico

2. ANÁLISIS DE COMPATIBILIDAD CON IA
   - Cómo usar IA para analizar la audiencia de un partner potencial: qué buscar en su blog, redes sociales, newsletter y reviews de clientes
   - Plantilla de investigación de partner: datos a recopilar antes de hacer el primer contacto
   - Señales de un partner de alta calidad vs. uno que solo quiere acceso a tu lista sin aportar valor
   - Cómo estimar el tamaño y calidad de la audiencia de un partner sin acceso a sus datos internos

3. OUTREACH Y PROPUESTA DE COLABORACIÓN
   - Email de primer contacto: cómo presentar la propuesta de co-marketing en 150 palabras (plantilla con variables)
   - Deck de partnership de 8 diapositivas: qué incluir en cada una (problema, solución conjunta, audiencias, formatos, métricas, inversión)
   - Negociación de condiciones: qué es equitativo en un co-marketing (intercambio de audiencias, producción de contenido, atribución)
   - Objeciones frecuentes y cómo responderlas

4. FORMATOS DE CO-MARKETING
   - Webinar conjunto: cómo estructurarlo, dividir la preparación y maximizar el registro
   - Contenido co-creado: ebook, informe sectorial, estudio de caso conjunto
   - Bundle o paquete integrado: cómo presentar dos productos como solución conjunta
   - Cross-newsletter: intercambio de menciones, guest posts, entrevistas
   - Evento presencial o virtual co-patrocinado

5. GESTIÓN Y SEGUIMIENTO DEL PARTNERSHIP
   - Template de brief de partnership: objetivos, responsabilidades, plazos, activos a entregar
   - Calendario de ejecución tipo para un co-marketing de 6 semanas
   - Métricas de éxito: leads generados, alcance, tráfico referido, conversiones atribuidas
   - Informe post-campaña: qué analizar para decidir si repetir la colaboración

6. AUTOMATIZACIÓN CON IA
   - Cómo usar IA para redactar los assets del co-marketing (emails, posts, landing page) con la voz de ambas marcas
   - Automatización de seguimiento de performance: alertas cuando una métrica supera o no alcanza el objetivo
   - CRM de partnerships: cómo trackear el estado de cada conversación y colaboración activa

Entrega: programa de co-marketing completo con todos los templates y herramientas listo para lanzar en las próximas 4 semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar y gestionar partnerships de co-marketing que amplíen el alcance de marca sin depender solo de publicidad.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Gestión de APIs y partners tecnológicos con IA',
                'description'       => 'Diseña una estrategia de ecosistema de integraciones y APIs para atraer partners tecnológicos, documentar las integraciones y gestionar el ciclo de vida del partnership técnico.',
                'prompt_content'    => <<<'EOT'
Eres arquitecto de plataformas y ecosistemas tecnológicos. Tu objetivo es diseñar una estrategia completa para construir y gestionar un ecosistema de partners técnicos alrededor de un producto de software, incluyendo el programa de API, la documentación para partners y la gestión del ciclo de vida de las integraciones.

Información necesaria antes de comenzar:
- Descripción del producto y su arquitectura principal (SaaS, plataforma, API-first, monolito con módulos)
- APIs existentes: ¿hay API pública? ¿webhooks? ¿SDK disponible?
- Tipos de integraciones ya existentes o deseadas (CRM, ERP, BI, comunicación, pagos, etc.)
- Recursos de ingeniería disponibles para el programa de partners (¿hay un equipo de partnerships técnicos?)

Con esa información, genera:

1. ARQUITECTURA DEL ECOSISTEMA DE PARTNERS
   - Tipos de partners técnicos: integraciones nativas, conectores vía middleware (Zapier, Make), plugins, partners de implementación
   - Niveles del programa: Básico (acceso a API pública), Avanzado (sandbox dedicado + soporte técnico), Premier (co-desarrollo + go-to-market conjunto)
   - Criterios para subir de nivel: número de clientes en común, calidad de la integración, certificación técnica

2. PROGRAMA DE API PARA PARTNERS
   - Requisitos técnicos mínimos para publicar una integración: autenticación (OAuth 2.0), rate limiting, manejo de errores, versioning
   - Portal de desarrolladores: qué debe incluir (documentación, sandbox, API explorer, changelog, status page)
   - Proceso de certificación de integraciones: checklist de 20 criterios técnicos y de UX que debe cumplir una integración para ser "Partner Certified"
   - SLA de soporte para partners: tiempos de respuesta, canales, proceso de escalación

3. DOCUMENTACIÓN TÉCNICA DE REFERENCIA
   - Estructura de documentación ideal para una API de partners: guía de inicio rápido, referencia de endpoints, guías temáticas, ejemplos de código en 3 lenguajes
   - Cómo usar IA para mantener la documentación actualizada: generación automática de changelogs, detección de endpoints no documentados, sugerencias de mejora
   - Plantilla de guía de integración para un caso de uso específico

4. ONBOARDING TÉCNICO DE PARTNERS
   - Checklist de onboarding técnico: accesos a sandbox, credenciales de prueba, webhooks de test, datos de ejemplo
   - Guía de "primera integración en 30 minutos" para que el equipo técnico del partner llegue al primer success rápidamente
   - Canal de soporte técnico dedicado para partners: Slack Connect, foro, tickets prioritarios

5. GESTIÓN DEL CICLO DE VIDA
   - Proceso de deprecación de una versión de API: cuánto aviso, cómo notificar a partners activos, período de migración
   - Monitorización del uso de la API por partner: métricas a trackear, alertas de uso inusual o errores elevados
   - Proceso de renovación del partnership técnico: evaluación anual, actualización de certificaciones, nuevos scopes de integración

6. IA EN LA GESTIÓN DEL ECOSISTEMA
   - Análisis automático de logs de API para detectar integraciones con alta tasa de error
   - Generación automática de release notes para partners cuando hay cambios en la API
   - Chatbot técnico para partners que responde dudas usando la documentación del portal

7. MÉTRICAS DEL ECOSISTEMA
   - KPIs: número de integraciones activas, llamadas de API por mes, partners con integración certificada, revenue influenciado por el ecosistema
   - NPS de partners técnicos y cómo mejorarlo

Entrega: estrategia completa del ecosistema técnico con documentación de referencia, checklist de certificación y plan de implementación en 90 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir un ecosistema de integraciones y partners tecnológicos alrededor de un producto de software.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Ecosistemas de diseño y colaboración con agencias usando IA',
                'description'       => 'Gestiona relaciones con agencias, estudios de diseño y colaboradores externos creando flujos de trabajo compartidos potenciados por IA.',
                'prompt_content'    => <<<'EOT'
Eres director creativo o design lead en una empresa que trabaja con múltiples agencias y colaboradores de diseño externos. Tu objetivo es diseñar un ecosistema de trabajo compartido que mantenga la coherencia de marca, agilice la colaboración y use IA para mejorar la calidad y velocidad de entrega.

Datos necesarios para personalizar la solución:
- Contexto: ¿eres una agencia que subcontrata, una empresa que trabaja con agencias, o un freelancer con colaboradores?
- Número y tipo de partners de diseño habituales
- Herramientas de diseño y colaboración actuales: Figma, Adobe, Notion, etc.
- Principal punto de dolor en las colaboraciones actuales

Con esa información, genera:

1. ESTRUCTURA DEL ECOSISTEMA DE DISEÑO
   - Tipos de colaboradores y su rol: agencia creativa, estudio de motion, fotógrafo/a, ilustrador/a, partner de UX research
   - Niveles de acceso y responsabilidad: qué puede tocar cada partner y qué está bloqueado
   - Flujo de aprobación: quién aprueba qué y en qué plazo (design lead, brand manager, CEO)
   - Onboarding de un nuevo colaborador: checklist de 10 pasos para integrarlos en el ecosistema

2. SISTEMA DE DESIGN TOKENS Y ASSETS COMPARTIDOS
   - Estructura del design system compartido en Figma: librerías, componentes, tokens de color, tipografía, iconografía
   - Proceso de actualización del design system: quién puede hacer cambios, cómo se notifica a los partners
   - Brief de marca para colaboradores externos: documento de 1 página con lo esencial (paleta, tipografía, tono, ejemplos de uso correcto e incorrecto)
   - Control de versiones de assets: cómo evitar que un partner trabaje con una versión desactualizada

3. FLUJOS DE TRABAJO Y FEEDBACK
   - Proceso de briefing: cómo escribir un brief de diseño con IA que sea completo y accionable en 20 minutos
   - Ciclos de revisión: número máximo de rondas, cómo dar feedback constructivo y específico en texto
   - Entrega de activos: formatos requeridos, naming convention, estructura de carpetas, checklist de QA
   - Gestión de cambios de scope: cómo manejar peticiones fuera del brief sin conflictos

4. USO DE IA EN LA COLABORACIÓN
   - Cómo usar IA para generar moodboards y referencias visuales antes de briefear a la agencia
   - Generación de variantes conceptuales con IA para explorar direcciones antes de invertir tiempo en producción
   - Revisión de consistencia de marca con IA: detectar si una entrega cumple los guidelines de marca
   - Redacción de feedback de diseño con IA: cómo transformar una opinión subjetiva en feedback técnico y accionable

5. CONTRATOS Y GESTIÓN DE PROPIEDAD INTELECTUAL
   - Cláusulas esenciales en contratos con agencias de diseño: cesión de derechos, uso de activos de terceros, confidencialidad
   - Proceso de transferencia de archivos editables al final del proyecto
   - Gestión de licencias de fuentes, imágenes de stock y plugins de Figma en colaboraciones

6. MÉTRICAS Y EVALUACIÓN DE PARTNERS
   - KPIs de colaboración: puntualidad de entrega, número de rondas de revisión, satisfacción del equipo interno
   - Evaluación trimestral de partners: plantilla de scorecard con criterios objetivos y subjetivos
   - Proceso de offboarding cuando una colaboración termina: qué archivar, qué revocar

Entrega: sistema completo de gestión de ecosistema de diseño con todos los documentos y plantillas listos para usar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Organizar y optimizar la colaboración con agencias y partners de diseño usando IA para mantener la coherencia de marca.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Identificación y calificación de partners de canal con IA',
                'description'       => 'Construye un programa de canal (resellers, distribuidores, agentes) usando IA para identificar los partners correctos, diseñar los incentivos y gestionar el pipeline indirecto.',
                'prompt_content'    => <<<'EOT'
Eres director de ventas de canal o partnerships comerciales. Tu objetivo es diseñar un programa de canal que permita escalar las ventas a través de resellers, distribuidores, integradores o agentes, usando IA para identificar los mejores partners, calificarlos y gestionar su activación y rendimiento.

Información necesaria para personalizar el programa:
- Tipo de producto o servicio: software, hardware, servicios profesionales, SaaS
- Geografías objetivo para el canal
- Ticket medio del producto y margen disponible para el canal
- ¿Existe ya algún partner de canal activo? Si es así, ¿qué funciona y qué no?

Con esa información, genera:

1. DISEÑO DEL PROGRAMA DE CANAL
   - Estructura de niveles: Registrado, Silver, Gold, Platinum con criterios de acceso a cada nivel
   - Beneficios por nivel: descuento en producto, MDF (market development funds), leads registrados, soporte dedicado, co-branding
   - Requisitos por nivel: certificaciones, cuota de ventas mínima, número de ingenieros certificados
   - Protección del territorio o de deals registrados: cómo evitar conflictos entre partners o con el equipo directo

2. IDENTIFICACIÓN DE PARTNERS CON IA
   - Perfil ideal del partner de canal: sector, especialización, base de clientes, geografía, capacidad de ventas
   - Fuentes para encontrar partners potenciales: LinkedIn, directorios sectoriales, socios de tecnologías complementarias, eventos
   - Cómo usar IA para analizar el perfil de un partner potencial y evaluar su fit en 10 minutos
   - Scoring de partners: tabla de criterios con pesos para priorizar los prospects del canal

3. OUTREACH Y RECLUTAMIENTO
   - Secuencia de outreach para reclutar un nuevo partner: email 1 (presentación del programa), email 2 (caso de éxito), email 3 (llamada de descubrimiento)
   - Pitch del programa de canal en 5 minutos: propuesta de valor para el partner (no para el cliente final)
   - Objeciones frecuentes de un partner potencial y cómo responderlas (margen, exclusividad, soporte, competencia con ventas directas)
   - Contrato marco de distribución: cláusulas esenciales

4. ONBOARDING Y HABILITACIÓN DEL PARTNER
   - Programa de habilitación de 30 días: formación en producto, en ventas, en marketing, certificación
   - Kit de inicio del partner: materiales de marketing co-brandable, deck de ventas adaptable, demos, casos de éxito
   - Partner portal: qué funcionalidades debe tener (registro de deals, materiales, leads, soporte, comisiones)
   - Primer deal conjunto: cómo hacer hunting con el nuevo partner para cerrar el primer cliente en los primeros 60 días

5. GESTIÓN Y ACTIVACIÓN CON IA
   - Cadencia de revisión con partners: reunión mensual, QBR trimestral
   - Métricas de partner activo vs. inactivo: qué diferencia a un partner que vende de uno que no lo hace
   - Detección automática de partners en riesgo de inactividad y plan de reactivación
   - Cómo usar IA para generar informes de pipeline por partner y proyecciones de revenue de canal

6. MÉTRICAS DEL PROGRAMA DE CANAL
   - KPIs: número de partners reclutados, partners activos, revenue de canal, deal size medio canal vs. directo, tiempo de ciclo de venta por canal
   - Cómo calcular el ROI del programa de canal para justificar inversión en MDF y headcount
   - Dashboard de canal: qué ver cada semana para tomar decisiones de activación

Entrega: programa de canal completo con todos los materiales, plantillas y proceso de gestión listo para lanzar en 90 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar y lanzar un programa de canal de ventas con partners que escale el revenue de forma indirecta.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Integración de ecosistemas de producto con análisis IA',
                'description'       => 'Define la estrategia de integraciones del producto, prioriza el roadmap de partnerships de plataforma y usa IA para analizar la demanda y el impacto de cada integración.',
                'prompt_content'    => <<<'EOT'
Eres product manager responsable del ecosistema de integraciones de un producto SaaS. Tu objetivo es definir la estrategia de partnerships de producto, priorizar qué integraciones construir primero y crear el proceso para gestionar el ciclo de vida completo de cada integración.

Información necesaria antes de comenzar:
- Descripción del producto y su categoría (CRM, BI, HRIS, ERP, etc.)
- Integraciones existentes y su adopción aproximada
- Señales de demanda actuales: solicitudes de clientes, tickets de soporte, encuestas
- Recursos de ingeniería disponibles para integraciones: ¿equipo dedicado o comparte recursos con el producto principal?

Con esa información, genera:

1. ESTRATEGIA DE ECOSISTEMA DE INTEGRACIONES
   - Posicionamiento: ¿ser el hub central (todos se integran contigo) o ser el spoke (te integras con los hubs del sector)?
   - Categorías de integraciones por prioridad estratégica: integrations that expand the ICP, integrations that reduce churn, integrations that enable upsell
   - Mapa del ecosistema: representación visual en texto de las capas de integraciones (datos, workflows, identidad, pagos, comunicación)
   - Modelo de construcción: build (integración nativa), partner (el partner construye en tu API), buy (adquirir la integración)

2. ANÁLISIS DE DEMANDA CON IA
   - Cómo analizar solicitudes de clientes, tickets de soporte, reviews de G2/Capterra y comunidades para identificar demanda de integraciones
   - Plantilla de análisis: datos a recopilar de cada fuente para cuantificar la demanda
   - Cómo usar IA para procesar y categorizar cientos de solicitudes de integración en minutos
   - Señales indirectas de demanda: funcionalidades que los clientes construyen con la API porque no existe la integración oficial

3. FRAMEWORK DE PRIORIZACIÓN
   - Matriz de priorización de integraciones con criterios: demanda de clientes, impacto en retención, impacto en adquisición, complejidad técnica, posición estratégica del partner
   - Puntuación y ranking de las integraciones candidatas
   - Proceso de decisión: quién decide qué integraciones se construyen (producto, ventas, liderazgo)
   - Revisión trimestral del roadmap de integraciones: cómo incorporar nueva demanda sin desestabilizar el plan

4. GESTIÓN DE PARTNERSHIPS DE PRODUCTO
   - Proceso de evaluación de un partner potencial: API calidad, estabilidad, documentación, tamaño de base instalada compartida
   - Acuerdo de partnership de integración: qué cláusulas incluir (co-marketing, soporte mutuo, SLAs)
   - Proceso de co-desarrollo: cómo trabajar con el equipo de producto del partner para construir la integración ideal
   - Launch conjunto: plan de go-to-market para el lanzamiento de una nueva integración

5. CICLO DE VIDA DE LA INTEGRACIÓN
   - Phases: discovery, build, beta, launch, growth, maintenance, deprecation
   - Métricas de salud de una integración: adopción, DAU, errores, NPS de usuarios de la integración
   - Proceso de deprecación: cuándo retirar una integración, cómo comunicarlo a usuarios activos

6. USO DE IA EN PRODUCT PARTNERSHIPS
   - Análisis automático de reviews de competidores para identificar integraciones que ellos tienen y tú no
   - Generación de la especificación técnica de una integración a partir de los casos de uso del cliente
   - Redacción del announcement de una nueva integración para el blog, email y redes sociales

7. MÉTRICAS DEL ECOSISTEMA
   - KPIs: adopción de integraciones (% de cuentas con al menos 1 integración activa), correlación entre uso de integraciones y retención, revenue influenciado por el ecosistema
   - Dashboard del ecosistema de integraciones para revisión mensual del equipo de producto

Entrega: estrategia de ecosistema completa con framework de priorización, proceso de partnership y métricas, listo para presentar al equipo de liderazgo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir y priorizar la estrategia de integraciones de un producto SaaS para construir un ecosistema competitivo.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Redes de talento y partnerships de reclutamiento con IA',
                'description'       => 'Construye un ecosistema de partners de reclutamiento (agencias, universidades, comunidades) y usa IA para gestionar las relaciones, calificar candidatos y optimizar el pipeline de talento.',
                'prompt_content'    => <<<'EOT'
Eres director de Talent Acquisition o CHRO en una empresa en crecimiento. Tu objetivo es construir un ecosistema de partners de talento que diversifique las fuentes de candidatos, reduzca el tiempo de contratación y el coste por contratación, usando IA para gestionar y optimizar cada partnership.

Datos necesarios para personalizar la estrategia:
- Sector de la empresa y roles más difíciles de contratar
- Volumen anual de contrataciones y distribución por tipo de rol
- Herramientas de ATS y HRIS disponibles
- Presupuesto aproximado para agencias externas actualmente

Con esa información, genera:

1. MAPA DEL ECOSISTEMA DE TALENTO
   - Tipos de partners: agencias de reclutamiento especializadas, headhunters, empresas de trabajo temporal, universidades y escuelas técnicas, bootcamps, comunidades profesionales, plataformas de freelance
   - Rol de cada tipo de partner: quién es mejor para qué tipo de posición (senior, junior, técnico, comercial, temporal)
   - Criterios de selección de partners: tasa de cobertura de vacantes, calidad de candidatos presentados, tiempo de entrega, especialización sectorial
   - Mapa de partners actuales vs. deseados: gaps a cubrir

2. PROGRAMA DE PARTNERS DE RECLUTAMIENTO
   - Niveles del programa: Colaborador esporádico, Partner Preferente, Partner Estratégico
   - Beneficios por nivel: fee garantizado, exclusividad en ciertas posiciones, acceso anticipado a vacantes, feedback detallado de candidatos
   - SLA de colaboración: tiempos de respuesta de la empresa, criterios de briefing de vacantes, proceso de presentación de candidatos

3. GESTIÓN DE AGENCIAS CON IA
   - Briefing de vacante con IA: cómo generar un job brief detallado para agencias en 10 minutos
   - Scoring de candidatos presentados por agencia: criterios objetivos para evaluar la calidad de los perfiles
   - Tracking de performance por agencia: tasa de candidatos entrevistados, ofertados, contratados, retenidos a 6 meses
   - Detección automática de bias en los perfiles presentados por agencias

4. PARTNERSHIPS CON UNIVERSIDADES Y BOOTCAMPS
   - Programa de prácticas y becas: estructura, responsabilidades, criterios de selección, pipeline a contratación
   - Presencia en campus: charlas, hackathons, proyectos de fin de carrera en colaboración con la empresa
   - Programa de alumni: cómo mantener contacto con antiguos alumnos para futuras contrataciones
   - Acuerdo de colaboración con bootcamp: qué incluir, cómo evaluar candidatos del programa

5. COMUNIDADES Y REDES PROFESIONALES
   - Cómo identificar las comunidades donde está el talento objetivo (Slack, Discord, LinkedIn groups, foros)
   - Estrategia de employer branding en comunidades: qué aportar antes de publicar vacantes
   - Programa de referidos con multiplicador: cómo convertir a empleados y comunidades en fuentes de talento
   - Gestión de relaciones con influencers de talento (newsletter, podcasters, creadores de contenido del sector)

6. AUTOMATIZACIÓN E IA EN TALENT PARTNERSHIPS
   - Cómo usar IA para analizar el mercado de talento y detectar nuevas fuentes potenciales
   - Generación automática de informes de partnership para revisión mensual con cada agencia
   - Chatbot de pre-screening de candidatos referidos por partners
   - Predicción de qué fuente de talento tiene mayor probabilidad de éxito para cada tipo de rol

7. MÉTRICAS DEL ECOSISTEMA DE TALENTO
   - KPIs: coste por contratación por fuente, tiempo de cobertura por fuente, calidad de contratación a 6 meses por fuente, NPS del proceso para los candidatos
   - Dashboard de talent partnerships: revisión mensual con el equipo de TA

Entrega: estrategia completa de talent partnerships con programa, métricas y herramientas listas para implementar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un ecosistema de partners de talento para diversificar fuentes de candidatos y reducir el coste de contratación.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Due diligence de partnerships financieros con IA',
                'description'       => 'Realiza análisis de due diligence de potenciales partners financieros usando IA para procesar información financiera, detectar riesgos y emitir recomendaciones fundamentadas.',
                'prompt_content'    => <<<'EOT'
Eres analista financiero o CFO responsable de evaluar potenciales partnerships estratégicos, joint ventures o acuerdos de distribución que tienen implicaciones financieras significativas. Tu objetivo es diseñar un proceso de due diligence financiero riguroso que use IA para acelerar el análisis sin comprometer la calidad.

Información previa necesaria:
- Tipo de partnership a evaluar: proveedor estratégico, distribuidor, co-inversor, joint venture, partner de tecnología con implicaciones de coste
- Presupuesto o valor económico aproximado del acuerdo
- Plazos: ¿cuánto tiempo hay para completar el due diligence?
- Información disponible del partner: estados financieros, presentaciones públicas, informes de auditoría

Con esa información, genera:

1. FRAMEWORK DE DUE DILIGENCE FINANCIERO
   - Áreas de análisis: salud financiera, calidad de ingresos, estructura de costes, posición de tesorería, deuda y pasivos, contingencias, valoración implícita
   - Documentos a solicitar al partner: lista completa con justificación de cada uno
   - Red flags financieros que podrían bloquear el acuerdo: qué buscar primero
   - Alcance del due diligence según el tamaño del acuerdo: qué se puede omitir en un deal pequeño

2. ANÁLISIS DE SALUD FINANCIERA
   - Ratios clave a calcular: liquidez (corriente, ácido), solvencia (deuda/equity, cobertura de intereses), rentabilidad (ROE, ROA, EBITDA margin), eficiencia (rotación de activos, días de cobro y pago)
   - Interpretación de cada ratio: qué valores son aceptables en el sector del partner
   - Tendencias a 3 años: cómo identificar deterioro progresivo vs. fluctuación normal
   - Comparativa con competidores del partner: benchmarking sectorial

3. ANÁLISIS DE CALIDAD DE INGRESOS
   - Concentración de clientes: riesgo si el top 3 clientes representa más del 50% de los ingresos
   - Recurrencia: ¿son ingresos one-time, recurrentes contractuales o variables?
   - Reconocimiento de ingresos: señales de agresividad contable en el reconocimiento
   - Pipeline y backlog: cómo evaluar la visibilidad de ingresos futuros

4. USO DE IA EN EL ANÁLISIS
   - Cómo usar IA para extraer datos clave de estados financieros en PDF en minutos
   - Prompts específicos para analizar el MD&A (Management Discussion & Analysis) de un informe anual
   - Detección de inconsistencias entre la narrativa del management y los números
   - Generación automática del resumen ejecutivo del due diligence financiero

5. ANÁLISIS DE RIESGOS Y CONTINGENCIAS
   - Pasivos contingentes: litigios, garantías, compromisos fuera de balance
   - Riesgos regulatorios: multas pendientes, cambios regulatorios que afectan al modelo de negocio
   - Riesgos de concentración: dependencia de un proveedor, tecnología, geografía o equipo
   - Cómo cuantificar el impacto financiero de cada riesgo identificado

6. INFORME DE DUE DILIGENCE
   - Estructura del informe: resumen ejecutivo, metodología, hallazgos por área, cuantificación de riesgos, recomendación
   - Plantilla de semáforo de riesgos: verde (sin objeciones), amarillo (condicionado a clausulas), rojo (bloqueante)
   - Cómo presentar los hallazgos al comité de inversión o al CEO en 15 minutos

7. NEGOCIACIÓN POST-DUE DILIGENCE
   - Cómo usar los hallazgos del due diligence para negociar mejores condiciones (precio, garantías, cláusulas de ajuste)
   - Representaciones y garantías (R&W) esenciales a incluir en el contrato
   - Estructura de pago condicionado a performance post-cierre (earnout)

Entrega: framework completo de due diligence financiero con plantillas de análisis, checklist de documentos y template de informe ejecutivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Evaluar la solidez financiera de potenciales partners estratégicos mediante un due diligence acelerado con IA.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos y acuerdos de partnership analizados con IA',
                'description'       => 'Revisa, negocia y redacta contratos de partnership usando IA para identificar riesgos legales, cláusulas desfavorables y oportunidades de mejora en los términos.',
                'prompt_content'    => <<<'EOT'
Eres abogado especializado en derecho mercantil y contratos comerciales. Tu objetivo es crear un framework para revisar, negociar y redactar contratos de partnership de forma eficiente usando IA como herramienta de análisis, sin sustituir el criterio jurídico humano.

Información necesaria para personalizar el análisis:
- Tipo de acuerdo: distribución, licencia, joint venture, OEM, co-marketing, servicios profesionales
- Posición negociadora: ¿eres el que propone el contrato o el que lo recibe?
- Jurisdicción aplicable y sistema legal (civil law, common law)
- Valor económico del acuerdo y duración prevista

Con esa información, genera:

1. CHECKLIST DE REVISIÓN DE CONTRATOS DE PARTNERSHIP
   - Cláusulas esenciales que todo contrato de partnership debe tener: objeto, obligaciones de las partes, exclusividad, duración, precio y condiciones de pago, propiedad intelectual, confidencialidad, resolución de disputas, ley aplicable, causas de terminación
   - Red flags contractuales: cláusulas que deben generar alarma inmediata (indemnizaciones ilimitadas, cesión automática de IP, cláusulas de no competencia muy amplias, renovación automática con condiciones onerosas)
   - Cláusulas favorables a buscar: limitación de responsabilidad, terminación por conveniencia, resolución de disputas por arbitraje, período de cura de incumplimientos

2. USO DE IA PARA ANÁLISIS CONTRACTUAL
   - Estructura del prompt para pedir a IA que analice un contrato: qué instrucciones dar, qué limitaciones mencionar, cómo verificar el análisis
   - Checklist de verificación humana: qué aspectos del análisis de IA siempre hay que revisar manualmente
   - Cómo usar IA para comparar dos versiones de un contrato e identificar cambios material
   - Generación de un resumen ejecutivo de un contrato complejo en 1 página

3. NEGOCIACIÓN DE TÉRMINOS CLAVE
   - Proceso de negociación en 4 fases: análisis inicial, posición propia, intercambio de marcas (redlines), cierre
   - Cómo priorizar qué cláusulas negociar cuando el tiempo o el poder negociador son limitados
   - Alternativas de redacción para las cláusulas más conflictivas: propiedad intelectual, limitación de responsabilidad, exclusividad, no competencia
   - Tácticas de negociación contractual: paquetes de concesiones, anclar con una propuesta extrema, usar el silencio

4. PLANTILLAS DE CONTRATOS DE PARTNERSHIP
   - Estructura y cláusulas principales para: acuerdo de distribución, acuerdo de agencia comercial, acuerdo de co-marketing, acuerdo de licencia de software, MOU (Memorandum of Understanding)
   - Para cada tipo: las 5 cláusulas más críticas a personalizar y los errores más frecuentes
   - Cómo adaptar una plantilla internacional al derecho local

5. GESTIÓN DEL CICLO DE VIDA DEL CONTRATO
   - Calendario de vencimientos: renovaciones, hitos de revisión, notificaciones previas requeridas
   - Sistema de alerta para fechas críticas en los contratos de partnership activos
   - Proceso de modificación (amendment): cuándo usar un addendum vs. renegociar el contrato completo
   - Terminación del contrato: proceso, notificaciones, liquidación de obligaciones pendientes

6. AUTOMATIZACIÓN E IA EN GESTIÓN CONTRACTUAL
   - CLM (Contract Lifecycle Management): qué herramientas usar para gestionar el portafolio de contratos de partnership
   - Extracción automática de datos clave de contratos (partes, duración, valor, obligaciones) para la base de datos interna
   - Alertas automáticas de renovación y vencimiento integradas con el calendario del equipo legal

Entrega: framework completo de gestión contractual de partnerships con checklist, plantillas, guía de negociación y proceso de gestión del ciclo de vida.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Revisar, negociar y gestionar contratos de partnership de forma eficiente usando IA como herramienta de análisis legal.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Programas de partners de soporte y éxito del cliente con IA',
                'description'       => 'Diseña un programa de partners de servicio (agencias, integradores, soporte externalizado) que extienda la capacidad de CS sin perder calidad en la experiencia del cliente.',
                'prompt_content'    => <<<'EOT'
Eres VP de Customer Success o director de soporte en una empresa SaaS o de servicios con base de clientes en crecimiento. Tu objetivo es diseñar un programa de partners de servicio (agencias, consultoras, integradores) que te permita escalar la capacidad de atención y éxito del cliente sin contratar linealmente, usando IA para mantener la calidad y la coherencia.

Información necesaria para personalizar el programa:
- Modelo de servicio actual: in-house, externalizado, híbrido
- Tipos de partners de servicio que ya existen o se consideran
- Geografías o segmentos de cliente donde el equipo interno tiene limitaciones
- Herramientas de soporte y CS disponibles: Zendesk, Intercom, Gainsight, etc.

Con esa información, genera:

1. MODELO DE PARTNERS DE SERVICIO
   - Tipos de partners: agencias de implementación, integradores técnicos, partners de soporte nivel 1 (preguntas básicas), partners de CS regional (idioma o zona horaria)
   - Modelo de escalación: qué resuelve el partner y qué escala al equipo interno
   - Acuerdo de nivel de servicio (SLA) para partners: tiempos de respuesta, criterios de calidad, proceso de auditoría
   - Certificación de partners de servicio: programa de formación, examen, badge y renovación anual

2. PROGRAMA DE CERTIFICACIÓN
   - Módulos de formación para partners: producto, metodología de implementación, resolución de problemas frecuentes, estándares de comunicación con el cliente
   - Evaluación de certificación: formato (examen, caso práctico, role-play), criterio de aprobación, validez
   - Portal de partners: materiales de formación actualizados, base de conocimiento, escalación directa al equipo interno
   - Proceso de re-certificación cuando hay actualizaciones importantes del producto

3. CALIDAD Y CONSISTENCIA CON IA
   - Cómo usar IA para revisar tickets resueltos por partners y detectar problemas de calidad
   - Análisis automático de CSAT de clientes atendidos por partners vs. equipo interno
   - Detección de respuestas incorrectas o incompletas en tickets de partners antes de que lleguen al cliente
   - Generación de respuestas sugeridas para el partner basadas en la base de conocimiento oficial

4. GESTIÓN DEL RENDIMIENTO DEL PARTNER
   - KPIs de performance del partner de servicio: CSAT, FCR (First Contact Resolution), tiempo de resolución, escalaciones innecesarias, SLA compliance
   - Dashboard de rendimiento por partner: revisión mensual
   - Proceso de mejora de rendimiento: cómo comunicar problemas de calidad a un partner y dar seguimiento
   - Desvinculación de un partner de bajo rendimiento: proceso, comunicación al cliente, transición

5. COORDINACIÓN OPERATIVA
   - Proceso de handoff entre partner e interno: qué información debe incluir cada escalación
   - Reunión mensual con partners: agenda, métricas a revisar, feedback bidireccional
   - Gestión de conocimiento compartido: cómo asegurar que los partners tienen acceso a la última información del producto
   - Gestión de incidentes: cómo coordinar con el partner durante una caída o problema crítico

6. USO DE IA PARA ESCALAR
   - Chatbot de soporte nivel 0: qué preguntas puede responder la IA antes de llegar al partner
   - Transcripción y análisis automático de llamadas de soporte de partners
   - Predicción de carga de soporte: cómo anticipar picos de demanda y activar partners adicionales
   - Base de conocimiento auto-actualizada: cómo usar IA para mantener los artículos de ayuda al día

7. MÉTRICAS DEL PROGRAMA
   - KPIs globales: coste de atención por ticket (partner vs. interno), CSAT por canal de atención, escalaciones de partner al equipo interno, NPS de clientes atendidos por partners
   - ROI del programa: comparativa de coste de atención externalizado vs. contratación interna equivalente

Entrega: programa completo de partners de servicio con certificación, SLAs, proceso de gestión y métricas, listo para lanzar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Escalar la capacidad de CS y soporte a través de un programa de partners de servicio certificados.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Red de colaboración freelance y subcontratación con IA',
                'description'       => 'Construye y gestiona una red de freelancers y colaboradores especializados para subcontratar trabajo, escalar tu capacidad y ofrecer servicios más completos a tus clientes.',
                'prompt_content'    => <<<'EOT'
Eres freelancer senior o propietario de una pequeña agencia. Tu objetivo es construir una red de colaboradores y subcontratistas de confianza que te permita aceptar proyectos más grandes, cubrir especialidades que no dominas y escalar tu capacidad sin los costes fijos de contratar empleados, usando IA para gestionar la red de forma eficiente.

Información necesaria para personalizar la estrategia:
- Tu especialidad principal y los servicios que ofreces
- Tipos de proyectos donde necesitas apoyo externo (por especialidad o por volumen)
- Número de colaboradores que gestionas actualmente o que quieres gestionar
- Herramientas de gestión de proyectos y comunicación que usas

Con esa información, genera:

1. DISEÑO DE TU RED DE COLABORADORES
   - Perfiles de colaboradores que necesitas: especialidades, nivel de seniority, disponibilidad mínima requerida
   - Fuentes para encontrar colaboradores: plataformas (Toptal, Malt, Upwork), comunidades de Slack/Discord, LinkedIn, recomendaciones de clientes y colegas
   - Criterios de selección: portafolio, prueba técnica, referencias, compatibilidad de trabajo, puntualidad de comunicación
   - Proceso de onboarding de un nuevo colaborador: prueba de trabajo remunerada, primera colaboración en proyecto real de bajo riesgo

2. ESTRUCTURA DE PRECIOS Y MÁRGENES
   - Modelo de pricing en subcontratación: markup sobre el coste del colaborador vs. precio fijo al cliente
   - Cómo calcular el precio al cliente cuando parte del trabajo es subcontratado
   - Transparencia con el cliente: ¿revelar o no que hay subcontratistas? Consideraciones éticas y contractuales
   - Gestión de la tesorería: cómo manejar el timing entre cobrar al cliente y pagar al colaborador

3. CONTRATOS Y ASPECTOS LEGALES
   - Contrato de subcontratación: cláusulas esenciales (alcance, pago, plazos, propiedad intelectual, confidencialidad, no-solicitud de clientes)
   - Acuerdo de no-competencia y no-solicitud: cómo proteger tus relaciones con clientes
   - Facturación y fiscal: cómo gestionar los pagos a colaboradores en diferentes países, obligaciones fiscales
   - Seguro de responsabilidad civil profesional: si el colaborador comete un error, quién responde ante el cliente

4. GESTIÓN DE PROYECTOS CON COLABORADORES
   - Brief de proyecto para colaboradores: qué información darles para que empiecen sin necesidad de reuniones largas
   - Sistema de seguimiento: cómo hacer check-ins sin microgestionar
   - Control de calidad: cómo revisar el trabajo de un colaborador antes de entregarlo al cliente
   - Gestión de incidencias: qué hacer cuando un colaborador no entrega, entrega tarde o entrega con baja calidad

5. USO DE IA EN LA GESTIÓN DE LA RED
   - Cómo usar IA para analizar el portafolio de un candidato y evaluar si encaja con tu tipo de proyecto
   - Generación automática del brief de proyecto para el colaborador a partir del brief del cliente
   - Resumen semanal de estado de todos los proyectos activos con colaboradores
   - Detección de colaboradores sobrecargados: señales de que un colaborador tiene demasiado trabajo y puede fallar

6. CONSTRUCCIÓN DE UNA AGENCIA VIRTUAL
   - Cómo presentarte al cliente como una agencia (aunque seas un equipo distribuido de freelancers)
   - Especialización del equipo: qué roles conforman un equipo completo para tu tipo de proyectos
   - Procesos compartidos: plantillas, herramientas, comunicación interna, gestión del conocimiento
   - Plan de crecimiento: cómo pasar de colaboraciones puntuales a relaciones recurrentes con colaboradores clave

7. MÉTRICAS DE LA RED
   - KPIs de gestión de colaboradores: tasa de entrega a tiempo, calidad media de entregas, margen neto por proyecto con colaboradores, NPS interno de colaboradores
   - Evaluación trimestral: cómo decidir con quién seguir trabajando y con quién no

Entrega: sistema completo de gestión de red de colaboradores freelance con contratos, procesos y herramientas de IA listo para implementar esta semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir y gestionar una red de colaboradores freelance para escalar capacidad y ofrecer servicios más completos.',
                'vote_score'        => 38,
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
