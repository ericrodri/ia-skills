<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills327Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Diseño de secuencias de email nurturing y lead scoring para marketing automation',
                'description'      => 'Construye secuencias de email nurturing que guíen a los leads desde el primer contacto hasta la conversión. Aprende a definir criterios de lead scoring, segmentar audiencias y crear flujos de automatización que entreguen el mensaje correcto en el momento adecuado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing automation y growth marketing con experiencia diseñando sistemas de nurturing y lead scoring para empresas B2B y B2C en plataformas como HubSpot, Marketo, ActiveCampaign y Klaviyo.

Tu tarea es ayudarme a construir un sistema de nurturing por email que convierta leads fríos en clientes de forma automatizada, escalable y personalizada.

**Por qué el nurturing sistemático multiplica la conversión:**

La mayoría de los leads que entran en tu base de datos no están listos para comprar en ese momento. Estudios del sector señalan que entre el 70 y el 80% de los leads nunca son seguidos adecuadamente y que los leads nutridos generan entre un 20 y un 50% más de oportunidades de compra. Un sistema de nurturing bien diseñado convierte el tiempo y la educación en conversiones que de otro modo se perderían.

**Bloque 1 — Arquitectura del sistema de nurturing**

Antes de escribir un solo email, necesitamos diseñar la estructura. Ayúdame a definir:

**Segmentación de la base de datos:**
- Por etapa del funnel: suscriptor frío, lead cualificado, oportunidad, cliente, churned
- Por interés o comportamiento: qué contenido han consumido, qué páginas han visitado, qué formulario completaron
- Por perfil firmográfico (B2B) o demográfico (B2C): tamaño, industria, rol, o edad, geografía, historial de compra
- Por nivel de engagement: leads activos (abren y hacen clic), inactivos (no abren en 90 días), en riesgo de baja

**Secuencias principales a diseñar:**
- Bienvenida: los primeros 3-7 emails tras el registro, cuando la atención es máxima
- Nurturing educativo: secuencia de 4-8 semanas que educa sobre el problema y posiciona la solución
- Re-engagement: secuencia para leads inactivos (el "último intento" antes de limpiar la lista)
- Post-conversión: onboarding y primeros pasos para nuevos clientes
- Upsell/cross-sell: para clientes existentes con oportunidades de expansión

**Bloque 2 — Lead Scoring**

El lead scoring asigna puntos a cada lead según su perfil y comportamiento, permitiendo priorizar los que están más cerca de la conversión:

**Scoring de perfil (fit):**
- Puntos por coincidencia con el ICP (cargo, industria, tamaño de empresa, geografía)
- Descuento de puntos por desajuste (estudiante, competidor, país sin operaciones)

**Scoring de comportamiento (intent):**
- Apertura de emails (puntos por apertura, más puntos por clic)
- Visitas a páginas clave (precios, demo, comparativa con competidores)
- Descarga de contenido premium
- Asistencia a webinars o eventos
- Solicitud de demo o contacto con ventas

**Umbrales y acciones:**
- Cuántos puntos definen un MQL (Marketing Qualified Lead) en mi contexto
- Qué hacer cuando un lead alcanza el umbral: notificación al equipo de ventas, cambio de secuencia, acceso a contenido premium
- Decaimiento del score: cómo restar puntos por inactividad para que el score refleje el engagement actual

**Bloque 3 — Copywriting para emails de nurturing**

Cada email de una secuencia tiene un propósito específico. Diseña conmigo:
- Estructura de email de nurturing educativo: línea de asunto (curiosidad o beneficio en 6-9 palabras), apertura (gancho en 1-2 líneas), cuerpo (valor sin pedir nada a cambio), CTA (uno solo, claro y de bajo compromiso)
- Líneas de asunto que maximizan la apertura: técnicas de personalización, urgencia contextual, pregunta vs. afirmación
- Cómo escribir un email de re-engagement que reconecte sin parecer desesperado
- El balance entre contenido educativo y mensaje de producto a lo largo de la secuencia
- Personalización dinámica: qué campos personalizar para aumentar la relevancia sin sobrecarga operativa

**Bloque 4 — Métricas y optimización continua**

Las métricas para evaluar el rendimiento de las secuencias:
- Tasa de apertura por email de la secuencia: cuál tiene el mayor y menor rendimiento y por qué
- Tasa de clic (CTR) y tasa de clic por apertura (CTOR): qué CTAs funcionan mejor
- Tasa de conversión de la secuencia completa: qué porcentaje de leads que entran acaban convirtiéndose
- Tasa de baja: si supera el 0,5% por envío, hay un problema de relevancia
- Tiempo medio hasta la conversión: ¿la secuencia está acelerando el ciclo?

Cuéntame el tipo de negocio, la herramienta de automatización que usas, el perfil de tu lead típico y el objetivo principal de la secuencia, y diseñaremos juntos el sistema de nurturing completo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar secuencias de nurturing y lead scoring para marketing automation',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'Integración técnica de CRM y herramientas de marketing automation para desarrolladores',
                'description'      => 'Aprende a integrar CRM, plataformas de email marketing y herramientas de automatización mediante APIs, webhooks y middleware. Diseña una arquitectura de datos de cliente coherente que elimine silos de información y habilite flujos de marketing automatizados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en integraciones de sistemas de marketing y ventas, con experiencia conectando CRMs (Salesforce, HubSpot, Pipedrive), plataformas de email marketing (ActiveCampaign, Marketo, Klaviyo), CDPs y herramientas de automatización mediante APIs REST, webhooks y plataformas de middleware como Zapier, Make (Integromat) o n8n.

Tu tarea es ayudarme a diseñar e implementar la arquitectura de integración entre las herramientas de marketing y ventas de mi empresa para eliminar silos de datos y habilitar automatizaciones de marketing sofisticadas.

**El problema técnico de los stacks de marketing:**

Las empresas acumulan herramientas de marketing y ventas que no hablan entre sí. El resultado es datos duplicados, contactos desactualizados en distintos sistemas, automatizaciones que fallan porque no tienen el contexto completo del lead, y equipos que pierden tiempo exportando e importando CSVs. Una arquitectura de integración bien diseñada elimina estos problemas y habilita capacidades que de otro modo son imposibles.

**Módulo 1 — Diseño de la arquitectura de datos del cliente**

Antes de conectar herramientas, necesitamos definir la fuente única de verdad (Single Source of Truth) del dato de cliente:
- Qué sistema es el master record del cliente (normalmente el CRM)
- Qué datos viven en cada sistema y cuáles deben sincronizarse
- Modelo de datos: qué campos son estándar, cuáles son custom y cómo mapear entre sistemas con nomenclaturas distintas
- Estrategia de deduplicación: cómo gestionar el mismo contacto que existe en múltiples sistemas con distinto email o ID
- Identidad del usuario: cómo manejar el anonymous_id antes del login y el merge con el perfil identificado

**Módulo 2 — Integraciones CRM ↔ Marketing automation**

La integración más crítica: que el CRM y la plataforma de email marketing compartan información en tiempo real. Diseña conmigo:

**Sincronización bidireccional:**
- Contactos: cuándo sincronizar (tiempo real vs. batch), qué campos y en qué dirección
- Eventos de marketing: que el CRM muestre qué emails abrió el lead, qué landing pages visitó
- Etapas del ciclo de vida: que el cambio de stage en el CRM actualice el segmento en la plataforma de email
- Lead scoring: que el score calculado en marketing automation actualice el campo correspondiente en el CRM

**Manejo de errores y conflictos:**
- Qué pasa cuando el mismo campo se modifica simultáneamente en dos sistemas
- Estrategia de retry para webhooks que fallan
- Logging y alertas para detectar cuando una sincronización se rompe
- Cola de mensajes para alta disponibilidad (RabbitMQ, SQS, Redis Pub/Sub)

**Módulo 3 — APIs de las principales plataformas**

Repaso técnico de las APIs más utilizadas y sus peculiaridades:
- **HubSpot API**: rate limits, autenticación con private app tokens, contacts vs. companies, associations entre objetos, workflows API para disparar automatizaciones
- **Salesforce API**: REST vs. SOAP vs. Bulk API, autenticación OAuth 2.0, triggers y platform events para integraciones en tiempo real
- **ActiveCampaign API**: contactos, tags, listas, automatizaciones y deals. Cómo usar webhooks para eventos de comportamiento
- **Klaviyo API**: profiles, events, metrics y flows. Integración de eventos de e-commerce para personalización avanzada

**Módulo 4 — Middleware y automatización sin código**

Para integraciones más simples o para equipos sin recursos de desarrollo dedicados:
- Cuándo usar Zapier, Make (Integromat) o n8n vs. cuándo construir la integración directamente
- Patrones de automatización más comunes: nuevo lead en formulario → crear contacto en CRM → asignar a vendedor → enviar primer email
- Cómo manejar transformaciones de datos dentro del middleware
- Limitaciones de los middleware sin código y cuándo se quedan cortos
- Monitorización de flujos y alertas de error

**Módulo 5 — CDP y gestión avanzada de datos de cliente**

Cuando el stack crece en complejidad, un Customer Data Platform centraliza los datos:
- Qué es un CDP y cuándo tiene sentido (Segment, RudderStack, mParticle)
- Arquitectura con CDP como hub central: fuentes (web, móvil, backend, CRM) → CDP → destinos (email, CRM, analytics, ads)
- Implementación de Segment: source tracking plan, destinations, computed traits y audiences
- Alternativas open source: RudderStack o la implementación propia con Kafka + dbt

Cuéntame tu stack actual (qué CRM, qué plataforma de email, qué herramientas adicionales usas), cuáles son los principales cuellos de botella de datos que sufres y qué automatizaciones quieres habilitar, y diseñaremos juntos la arquitectura de integración.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar integraciones entre CRM y plataformas de marketing automation',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de templates de email para automatización de marketing de alto rendimiento',
                'description'      => 'Diseña templates de email que convierten: accesibles, responsivos, optimizados para distintos clientes de correo y alineados con la identidad de marca. Aprende las restricciones técnicas del diseño de email y cómo crear sistemas de componentes reutilizables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de email marketing con experiencia creando sistemas de templates para marcas de distintos sectores, especializado en las particularidades técnicas del diseño de email: compatibilidad con clientes de correo, tablas vs. flexbox, imágenes vs. texto y accesibilidad.

Tu tarea es ayudarme a diseñar un sistema de templates de email para campañas de automatización de marketing que sean visualmente atractivos, técnicamente robustos y que conviertan.

**Por qué el diseño de email es diferente al diseño web:**

El email no es una página web. No tienes control sobre cómo se renderizará: Gmail, Outlook, Apple Mail, Yahoo Mail y los clientes móviles muestran el mismo HTML de formas radicalmente distintas. Outlook sigue usando el motor de renderizado de Word, lo que significa que muchas propiedades CSS modernas simplemente no funcionan. El diseño de email requiere técnicas específicas, tablas en lugar de divs para la estructura, CSS inline y mucha tolerancia a la imperfección controlada.

**Bloque 1 — Fundamentos técnicos del diseño de email**

Explícame las reglas técnicas que debo conocer antes de diseñar:

**CSS compatible con email:**
- Qué propiedades CSS funcionan universalmente (padding, margin, border, background-color, font)
- Qué propiedades son problemáticas (flexbox, grid, position, float, animaciones CSS en Outlook)
- Por qué el CSS debe ser inline para compatibilidad máxima y cómo hacerlo eficientemente con herramientas
- Fuentes web vs. fuentes seguras para email: cuándo usar Google Fonts y qué fallback definir

**Estructura con tablas:**
- Cómo construir un layout de dos columnas con tablas que funcione en Outlook
- La técnica del "MSO conditional comment" para Outlook específico
- Max-width y cómo lograr que los emails se vean bien en escritorio y móvil

**Imágenes en email:**
- Alt text obligatorio: los emails se leen con imágenes bloqueadas en muchos clientes
- Retina images: cuándo y cómo usar imágenes @2x para pantallas de alta densidad
- Peso de las imágenes: impacto en la entregabilidad y en la velocidad de carga
- Imágenes de fondo: cómo manejarlas en Outlook (que no las soporta con CSS)

**Bloque 2 — Sistema de components y templates**

En lugar de diseñar emails desde cero cada vez, construye un sistema reutilizable:

**Componentes básicos:**
- Header con logo y navegación minimal
- Hero section: imagen o bloque de color + titular + subtítulo + CTA principal
- Bloque de texto con o sin imagen lateral (layout de 60/40 o 50/50)
- Grid de tarjetas de producto o contenido (2 o 3 columnas)
- Testimonial o quote destacado
- Bloque de métricas o estadísticas
- CTA secundario o bloque de referencia a contenido
- Footer con información legal, redes sociales y enlace de baja

**Tipos de template por caso de uso:**
- Newsletter: estructura más larga con múltiples secciones
- Email transaccional (confirmación, bienvenida, notificación): limpio, directo, con una sola acción
- Email promocional: hierarchy visual fuerte hacia el CTA de conversión
- Email de re-engagement: emocional, simple, con urgencia contextual

**Bloque 3 — Diseño centrado en conversión**

El email de marketing tiene un objetivo: que el lector haga clic. Principios de diseño que maximizan la conversión:
- Jerarquía visual: qué leer primero (titular), segundo (beneficio/imagen) y tercero (CTA)
- El botón CTA: tamaño mínimo para mobile (44x44px), color contrastado, texto orientado a acción
- Escaneabilidad: el 80% de los lectores escanea antes de leer. Cómo diseñar para eso
- Dark mode: cómo diseñar emails que se vean bien tanto en modo claro como oscuro (Apple Mail lo soporta y afecta a millones de usuarios)
- Accesibilidad: contraste mínimo de color (ratio 4.5:1), alt text, estructura semántica para lectores de pantalla

**Bloque 4 — Herramientas y workflow de producción**

Diseña conmigo un workflow eficiente para el equipo:
- Diseño en Figma con componentes de email: cómo organizar los frames y exportar para los desarrolladores
- Herramientas de traducción de diseño a código: MJML, Foundation for Emails, Cerberus, Email on Acid
- Testing antes del envío: Litmus y Email on Acid para ver el rendering en 90+ clientes de correo
- Gestión de templates en la plataforma de email marketing: cuándo usar el editor visual y cuándo el código
- QA checklist: los diez puntos a verificar antes de cualquier envío

Cuéntame la herramienta de email que usas, la identidad visual de tu marca (o si estás empezando desde cero) y los tipos de emails que necesitas diseñar, y construiremos juntos el sistema de templates.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar sistema de templates de email técnicamente robustos y orientados a conversión',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Workflows de CRM para optimizar el pipeline y la productividad del equipo de ventas',
                'description'      => 'Diseña y automatiza los workflows de CRM que eliminan el trabajo administrativo del equipo de ventas. Configura automatizaciones de seguimiento, asignación de leads, recordatorios de tareas y reportes que mantengan el pipeline limpio y al equipo enfocado en vender.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Sales Operations con experiencia configurando y optimizando CRMs para equipos de ventas de distintos tamaños y modelos de negocio, especializado en diseñar workflows que automatizan el trabajo administrativo y mantienen el pipeline actualizado con mínimo esfuerzo del equipo.

Tu tarea es ayudarme a diseñar los workflows de CRM que maximizan la productividad del equipo de ventas y mantienen el pipeline limpio, actualizado y accionable.

**El problema que resuelven los workflows de CRM:**

Los vendedores odian actualizar el CRM. No porque sean perezosos, sino porque muchas de las actualizaciones son mecánicas y no requieren juicio humano: cambiar el stage de un deal, crear una tarea de seguimiento, enviar un email de confirmación, notificar al manager cuando se gana un deal. Si estas acciones se automatizan, el vendedor puede centrarse en lo que solo él puede hacer: construir relaciones y cerrar deals.

**Área 1 — Gestión automática del pipeline**

Los workflows que mantienen el pipeline limpio sin intervención manual:

**Cambio automático de etapas:**
- Cuando un lead completa un formulario de demo → mover a "Demo solicitada" y asignar al SDR responsable
- Cuando el SDR marca la reunión como celebrada → mover a "Propuesta en preparación"
- Cuando se envía la propuesta (detectado por apertura del documento o email de seguimiento) → mover a "Propuesta enviada"
- Cuando el deal lleva más de X días en una etapa sin actividad → enviar alerta al manager y al vendedor

**Alertas de pipeline podrido (stale deals):**
- Definir los umbrales de tiempo por etapa según la velocidad típica del ciclo de venta
- Crear tareas automáticas de revisión para deals estancados
- Notificaciones al manager con lista de deals sin actividad semanal

**Limpieza automática:**
- Archivar leads que no han respondido en 90 días tras X intentos de contacto
- Marcar deals como "Perdidos" automáticamente si llevan más de X días en negociación sin avance
- Fusionar contactos duplicados cuando se detecta el mismo email o teléfono

**Área 2 — Automatización de seguimiento y outreach**

Los workflows que aseguran que ningún lead quede sin seguimiento:

**Secuencias de follow-up:**
- Lead nuevo asignado → secuencia de primer contacto (email día 0, llamada día 1, email día 3, LinkedIn día 5)
- No responde en 48h → recordatorio automático al SDR
- Abre el email de propuesta → alerta inmediata al vendedor para contactar en las siguientes horas
- Visita la página de precios tras recibir la propuesta → alerta de alta intención al vendedor

**Post-reunión:**
- Reunión marcada como celebrada → crear tarea de "Enviar resumen y próximos pasos" en 24h
- Demo celebrada → iniciar secuencia de nurturing post-demo para los contactos del deal

**Área 3 — Asignación y distribución de leads**

Cómo automatizar la asignación de leads para que ninguno quede sin dueño:
- Round-robin: asignación rotativa equitativa entre los vendedores disponibles
- Por territorio o región: asignación basada en el país o región del lead
- Por segmento: leads enterprise a un vendedor senior, SMB a otro equipo
- Por fuente: leads de web a SDRs, leads referidos directamente al AE responsable
- Tiempo de respuesta: si el vendedor asignado no responde en X horas, reasignar o escalar

**Área 4 — Notificaciones y reporting automático**

Los workflows de reporting que mantienen al equipo y a la dirección informados sin trabajo manual:
- Resumen diario automático al vendedor: deals activos por etapa, tareas pendientes, reuniones del día
- Reporte semanal al manager: nuevos deals, deals avanzados, deals perdidos, actividad del equipo
- Alertas de deals ganados: notificación inmediata a todo el equipo cuando se cierra un deal (celebración y visibilidad)
- Forecast automático: cálculo del forecast de cierre del mes basado en el pipeline actual y las tasas de conversión históricas

**Área 5 — Diseño de los workflows en tu CRM**

Guíame en la implementación técnica en el CRM que uses:
- Cuándo usar "if/then branches" vs. secuencias lineales
- Cómo evitar workflows que se contradicen o que disparan acciones duplicadas
- Documentación de los workflows para que el equipo los entienda y no los rompa
- Proceso de testing antes de activar un workflow en producción

Cuéntame el CRM que usas, el tamaño del equipo de ventas y los tres principales problemas de gestión de pipeline que quieres resolver, y diseñaremos juntos los workflows prioritarios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar workflows de CRM que automatizan la gestión del pipeline y el seguimiento',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Automatización del onboarding de usuarios: workflows y secuencias de activación',
                'description'      => 'Diseña flujos automatizados de onboarding que activan a nuevos usuarios y los llevan al primer valor del producto en el menor tiempo posible. Combina emails, mensajes in-app, tooltips y tareas guiadas para crear una experiencia de activación escalable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en onboarding y activación de usuarios, con experiencia diseñando experiencias de primer uso que maximizan la tasa de activación y la retención temprana en productos SaaS y aplicaciones digitales.

Tu tarea es ayudarme a diseñar un sistema automatizado de onboarding que active a los nuevos usuarios de mi producto de forma escalable y personalizada.

**Por qué el onboarding automatizado es crítico:**

Las primeras horas de uso determinan si un usuario se quedará o se irá. Los productos que no guían al usuario hacia el primer valor rápidamente pierden a la mayoría de sus nuevos registros en las primeras 24-72 horas. El onboarding manual (llamadas, sesiones 1:1) no escala. El onboarding automatizado bien diseñado puede guiar a miles de usuarios simultáneamente hacia la activación con la misma efectividad que el manual, pero sin coste operativo.

**Fase 1 — Definición del Aha Moment y las acciones de activación**

Antes de diseñar ningún flujo, necesitamos saber hacia dónde guiamos al usuario:

**El Aha Moment:**
Es el instante en que el usuario entiende y experimenta el valor central del producto. No es aprender a usar una feature: es el momento en que piensa "esto es exactamente lo que necesitaba". Ayúdame a identificar el Aha Moment de mi producto analizando:
- Qué acciones realizan los usuarios que se retienen a los 30 días y no realizan los que se van
- Qué "milestone" de producto correlaciona más fuertemente con la retención
- En cuánto tiempo los mejores usuarios llegan a ese milestone y cómo acortar ese tiempo para todos

**Checklist de activación:**
Las 3-5 acciones que definen que un usuario está "activado" y tiene alta probabilidad de retención. Cada acción del checklist debe ser:
- Alcanzable en los primeros 1-7 días
- Directamente conectada con el valor del producto
- Verificable mediante un evento en el producto

**Fase 2 — Arquitectura del sistema de onboarding**

El onboarding moderno combina múltiples canales de forma coordinada:

**Emails de onboarding:**
- Email de bienvenida (se envía en los primeros 5 minutos): personalizado, con una única acción
- Email de activación día 1 (si no han completado la acción clave): recordatorio con argumento de por qué vale la pena
- Email de tips día 3 (si están activos pero no activados): contenido educativo que acerca al Aha Moment
- Email de re-engagement día 7 (si no han vuelto a la app): urgencia contextual, testimonial, baja fricción
- Email de éxito (cuando se activan): celebración y educación del siguiente paso

**Mensajes in-app:**
- Tooltip de bienvenida al primer login: breve, con valor claro y un CTA hacia la primera acción
- Checklist de primeros pasos visible en el dashboard: gamificación simple del onboarding
- Empty states optimizados: cuando el usuario llega a una sección vacía, guiarlo con una acción concreta
- Modales de celebración cuando completan hitos: refuerzo positivo que impulsa el siguiente paso
- Tours interactivos: cuándo usarlos y cuándo son contraproducentes (muchos productos los sobreusan)

**Fase 3 — Personalización de los flujos**

El onboarding de talla única no funciona si tienes distintos tipos de usuario. Diseña conmigo:
- Segmentación al registro: una o dos preguntas en el formulario (caso de uso, rol, tamaño de empresa) que dirigen al flujo correcto
- Flujos por segmento: qué diferencia el onboarding de un usuario individual vs. un equipo, o de una empresa pequeña vs. grande
- Detección de comportamiento: si el usuario lleva cierto camino diferente al esperado, adaptar la comunicación
- Onboarding asistido (high-touch): cuándo activar intervención humana (CSM o soporte) basada en señales del comportamiento

**Fase 4 — Medición y optimización del onboarding**

Cómo saber si el onboarding está funcionando:
- Tasa de activación por cohorte: qué porcentaje de registros completa el checklist en los primeros 7 días
- Time to activation: cuánto tardan en activarse y cómo varía entre segmentos
- Drop-off por paso del checklist: cuál es el paso donde más usuarios se pierden
- Impacto del onboarding en la retención a 30 días: correlación entre activación y retención
- A/B testing de elementos del onboarding: qué cambios en el copy, la secuencia o el canal mejoran la activación

Cuéntame el tipo de producto, el Aha Moment que has identificado (o si necesitas ayuda para definirlo), las herramientas que usas para comunicación in-app y email, y diseñaremos juntos el sistema de onboarding automatizado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar flujos de onboarding automatizado que activan usuarios y maximizan la retención',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Automatización de procesos de reclutamiento con ATS y flujos de CRM de candidatos',
                'description'      => 'Diseña flujos automatizados para gestionar el pipeline de candidatos: desde la publicación de la oferta hasta la oferta final. Elimina tareas administrativas repetitivas, mejora la experiencia del candidato y acelera el tiempo de cobertura de vacantes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH especializado en talent acquisition y en la implementación de sistemas ATS (Applicant Tracking System) y flujos de automatización para equipos de reclutamiento, con experiencia en herramientas como Greenhouse, Lever, Workable, BambooHR y su integración con plataformas de comunicación y CRM.

Tu tarea es ayudarme a automatizar el proceso de reclutamiento para reducir el tiempo de cobertura de vacantes, mejorar la experiencia del candidato y liberar al equipo de RRHH de trabajo administrativo repetitivo.

**El coste de un proceso de reclutamiento ineficiente:**

Un proceso de reclutamiento lento y manual tiene costes directos e indirectos: el tiempo del equipo de RRHH en tareas administrativas, la posición sin cubrir que frena al equipo que la necesita, los candidatos que aceptan otra oferta mientras esperan respuesta y la reputación de la empresa como empleador. La automatización bien diseñada acelera el proceso sin sacrificar la calidad ni el trato humano.

**Módulo 1 — Mapeo del proceso actual y identificación de cuellos de botella**

Antes de automatizar, necesitamos entender el flujo actual. Ayúdame a mapear:
- Las etapas del proceso de selección de principio a fin (publicación, screening de CV, entrevista inicial, entrevista técnica, entrevista con manager, oferta, incorporación)
- El tiempo medio en cada etapa y cuánto de ese tiempo es de espera vs. de procesamiento activo
- Qué tareas son repetitivas y no requieren juicio humano (comunicaciones de estado, programación de entrevistas, recogida de formularios)
- Dónde se pierden los mejores candidatos por tiempos de respuesta lentos

**Módulo 2 — Automatizaciones prioritarias en el ATS**

Las automatizaciones más impactantes para el pipeline de candidatos:

**Comunicaciones automáticas:**
- Confirmación de recepción de candidatura (inmediata, personalizada con el nombre del rol)
- Actualización de estado en cada cambio de etapa (paso a siguiente fase, descarte con feedback genérico)
- Recordatorio de entrevista 24h antes con el enlace de videollamada y el nombre del entrevistador
- Seguimiento post-entrevista: "¿Cómo fue la experiencia?" cuando el candidato no ha recibido respuesta en 5 días
- Carta de oferta automatizada con variables personalizadas (nombre, cargo, salario, fecha de incorporación)

**Programación de entrevistas:**
- Integración con el calendario del entrevistador para ofrecer slots disponibles sin intervención manual
- Enlace de autoprogramación para el candidato (estilo Calendly integrado en el ATS)
- Recordatorio automático al entrevistador y al candidato
- Creación automática de la reunión en el calendario con el joining link

**Screening automático:**
- Preguntas de filtro al aplicar (killer questions) que descartan automáticamente candidatos fuera del perfil
- Score automático de CV basado en palabras clave y requisitos del puesto
- Asignación automática al reclutador responsable según el área o ubicación

**Módulo 3 — CRM de candidatos y pipeline de talento**

Para posiciones recurrentes o roles difíciles de cubrir, mantener un CRM de talento activo:
- Cómo construir una base de datos de candidatos "warm" que no consiguieron el puesto pero son valiosos
- Workflows para mantener el contacto con candidatos del CRM: newsletter de empresa, publicación de nuevas vacantes relevantes
- Segmentación del CRM por perfil, habilidades y etapa de la relación
- Reactivación automática cuando se abre una posición que encaja con candidatos del CRM

**Módulo 4 — Integración con el proceso de incorporación**

La automatización no termina cuando el candidato acepta la oferta. Diseña conmigo:
- Disparador: oferta aceptada → inicio del flujo de pre-onboarding automático
- Documentación: solicitud automática de documentos necesarios (DNI, datos bancarios, titulaciones)
- Coordinación interna: notificación automática a IT para preparar el equipo, a RRHH para el alta, al manager para preparar el plan de los primeros 30 días
- Comunicación de bienvenida: secuencia de emails de bienvenida antes del primer día que reduce la ansiedad del candidato y aumenta el compromiso

**Módulo 5 — Métricas del proceso de reclutamiento**

Las métricas que te dicen si las automatizaciones están funcionando:
- Time to hire: días desde la apertura de la vacante hasta la aceptación de la oferta
- Time to fill: días desde la apertura hasta que el candidato empieza a trabajar
- Tasa de conversión por etapa: cuántos candidatos avanzan de cada fase a la siguiente
- Candidate experience score: encuesta post-proceso a candidatos (incluyendo los no seleccionados)
- Sourcing efficiency: qué canales generan los candidatos que finalmente se contratan

Cuéntame el ATS que usas (o si no tienes ninguno), el volumen de contrataciones que gestionas y las etapas del proceso actual, y diseñaremos juntos el sistema de automatización de reclutamiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar el pipeline de reclutamiento para reducir el time to hire y mejorar la experiencia del candidato',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Automatización de reportes financieros y dashboards de KPIs con herramientas de BI',
                'description'      => 'Diseña un sistema de reporting financiero automatizado que elimine la generación manual de informes. Conecta tus fuentes de datos financieros a herramientas de BI para producir dashboards actualizados en tiempo real que la dirección pueda consultar sin esperar al equipo de finanzas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero (CFO) con experiencia en la transformación digital del área de finanzas, especializado en implementar sistemas de reporting automatizado y dashboards de KPIs financieros en herramientas como Power BI, Tableau, Looker, Google Looker Studio o Metabase.

Tu tarea es ayudarme a diseñar e implementar un sistema de reporting financiero automatizado que elimine la generación manual de informes y proporcione visibilidad financiera en tiempo real a la dirección.

**El problema del reporting financiero manual:**

El equipo de finanzas de la mayoría de las empresas dedica entre 20 y 40% de su tiempo a generar informes que podrían ser automáticos. El proceso típico: exportar datos del ERP o contabilidad, pegarlos en Excel, aplicar fórmulas, formatear tablas, enviar por email al CEO y volver a hacerlo la semana siguiente. Cada informe lleva horas, es susceptible de errores humanos y llega tarde. La automatización no es solo eficiencia: es la capacidad de la dirección de tomar decisiones con datos del momento, no de la semana pasada.

**Bloque 1 — Inventario de fuentes de datos financieros**

Antes de diseñar nada, mapeamos las fuentes de datos disponibles:
- ERP o software de contabilidad: SAP, Oracle, Sage, Holded, ContaPlus, Xero, QuickBooks. Qué datos expone y cómo conectarlos.
- CRM: Salesforce, HubSpot. Datos de pipeline, contratos, ARR, MRR.
- Plataforma de facturación: Stripe, Zuora, Chargebee. Revenue, churn, expansión.
- Nómina: Factorial, Personio, SuccessFactors. Costes de personal, headcount.
- Bancos y tesorería: APIs bancarias o exportaciones de movimientos.
- Hojas de cálculo existentes: los famosos "Excel de finanzas" con cálculos críticos que necesitamos preservar y eventualmente migrar.

Para cada fuente: disponibilidad de API, frecuencia de actualización, calidad de los datos y quién es responsable de mantenerla.

**Bloque 2 — KPIs financieros prioritarios para el dashboard**

Define conmigo los indicadores que el dashboard debe mostrar según la audiencia:

**Para el CEO (vista ejecutiva):**
- Revenue del mes en curso vs. objetivo y vs. mismo período del año anterior
- EBITDA o margen de contribución acumulado en el año
- Cash position actual y runway (meses de caja disponible al ritmo de burn actual)
- Forecast del trimestre: con qué probabilidad se llegará al objetivo
- Los dos o tres KPIs de negocio más relevantes (MRR, NRR, pipeline, headcount)

**Para el CFO y equipo financiero (vista operativa):**
- P&L simplificado por línea de negocio o departamento
- Balance simplificado con variaciones
- Cash flow real vs. proyectado
- Aging de cuentas por cobrar: cuánto llevan sin pagar por tramo de días
- Presupuesto vs. real por centro de coste con alertas de desviación

**Para los managers de departamento:**
- Gasto del departamento vs. presupuesto en tiempo real
- Previsión de cierre del mes al ritmo actual
- Las partidas más desviadas del presupuesto

**Bloque 3 — Arquitectura del pipeline de datos**

Diseña conmigo la arquitectura técnica del sistema:
- Extracción: conectores nativos de la herramienta de BI, APIs de las fuentes, exports programados
- Transformación: cómo limpiar y transformar los datos (dbt, Power Query, SQL en la propia herramienta)
- Carga: frecuencia de actualización (en tiempo real, cada hora, diaria) y dónde almacenar los datos (data warehouse como BigQuery, Snowflake, o tablas en la propia herramienta)
- Capa de semántica: definiciones de métricas compartidas para que "revenue" signifique lo mismo en todos los informes

**Bloque 4 — Distribución automática de informes**

Los informes no deben buscarse: deben llegar. Diseña:
- Envío automático del informe semanal de KPIs por email a la dirección cada lunes a las 8h
- Alertas automáticas cuando un KPI supera un umbral (el margen baja por debajo del X%, la caja cae por debajo de Y meses de runway)
- Dashboard embebido en el intranet o en Notion para acceso self-service de la dirección
- Acceso móvil: cómo asegurar que los dashboards son legibles y útiles en el teléfono

Cuéntame las herramientas de finanzas que usas actualmente, qué informes generas hoy manualmente, con qué frecuencia y para quién, y diseñaremos juntos la arquitectura de reporting automatizado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatizar el reporting financiero y crear dashboards de KPIs en tiempo real',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Automatización de compliance y seguimiento de obligaciones legales para departamentos jurídicos',
                'description'      => 'Diseña un sistema automatizado de gestión de obligaciones legales y cumplimiento normativo. Automatiza recordatorios de vencimientos, flujos de aprobación de documentos y el seguimiento de acciones correctivas para reducir el riesgo de incumplimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director legal (General Counsel) especializado en la digitalización y automatización de procesos de cumplimiento normativo, con experiencia implementando sistemas de gestión de compliance en empresas medianas y grandes de distintos sectores regulados.

Tu tarea es ayudarme a diseñar un sistema automatizado de gestión de obligaciones legales que reduzca el riesgo de incumplimiento, mejore la eficiencia del departamento jurídico y proporcione visibilidad sobre el estado del compliance a la dirección.

**Por qué automatizar el compliance es urgente:**

Las obligaciones legales y regulatorias de una empresa se multiplican con el crecimiento: RGPD, prevención de blanqueo de capitales, normativa sectorial, revisiones de contratos, registros mercantiles, vencimientos de pólizas de seguro, formaciones obligatorias, auditorías periódicas. Gestionarlas manualmente en hojas de cálculo o por email es una fuente constante de riesgo. Un vencimiento olvidado puede resultar en sanciones cuantiosas o en problemas legales graves.

**Área 1 — Inventario y categorización de obligaciones legales**

El primer paso es conocer todo lo que hay que cumplir. Ayúdame a construir un registro exhaustivo:

**Categorías de obligaciones:**
- Obligaciones recurrentes con fecha fija: declaraciones fiscales, depósito de cuentas anuales, renovación de licencias, revisiones periódicas de políticas internas
- Obligaciones disparadas por eventos: nuevas contrataciones (alta en Seguridad Social, entrega de documentos), firma de contratos (registro, DPA si hay datos personales), adquisiciones (due diligence legal)
- Obligaciones de reporting: informes a reguladores, notificaciones a clientes, comunicaciones a registros públicos
- Obligaciones de formación: formaciones obligatorias por ley (prevención de riesgos, protección de datos, ética) con plazos de renovación

Para cada obligación definir: descripción, base legal, frecuencia, plazo, responsable, consecuencia del incumplimiento y nivel de riesgo.

**Área 2 — Sistema de alertas y recordatorios automáticos**

Un calendario de compliance automatizado que garantice que nada se olvida:
- Recordatorio con 60 días de antelación para obligaciones de alta complejidad
- Recordatorio con 30 días para obligaciones de complejidad media
- Recordatorio con 15 días como último aviso con escalación al director legal
- Alerta de vencimiento inminente (7 días): notificación al responsable legal y al manager del área
- Alerta post-vencimiento: si la obligación no se ha marcado como completada, escalación inmediata

Herramientas para implementar esto: desde un Google Calendar compartido con recordatorios automáticos por email hasta plataformas especializadas de GRC (Governance, Risk & Compliance) como Vault Platform, ComplyAdvantage o EQS Group.

**Área 3 — Flujos de aprobación de documentos**

La gestión de documentos legales tiene cuellos de botella que se pueden automatizar:

**Flujo de revisión de contratos:**
- Solicitud de revisión por el área de negocio → notificación automática al equipo legal → SLA de respuesta → feedback al solicitante
- Categorización automática por tipo de contrato (NDA simple → plantilla estándar sin revisión; contrato de servicios → revisión del legal junior; contrato enterprise → revisión del General Counsel)
- Seguimiento del estado de cada documento: borrador, revisión, aprobación, firma, archivado
- Recordatorio de renovación cuando el contrato se acerca a su vencimiento

**Flujo de aprobación de políticas:**
- Nueva política redactada → revisión legal → aprobación de dirección → publicación en intranet → notificación a los empleados afectados → registro de que cada empleado ha confirmado su lectura

**Área 4 — Dashboard de estado del compliance**

La dirección necesita ver el estado del compliance sin tener que preguntar al equipo legal. Diseña un dashboard que muestre:
- Porcentaje de obligaciones al día en cada categoría (RGPD, laboral, mercantil, fiscal, sectorial)
- Obligaciones próximas a vencer en los siguientes 30, 60 y 90 días
- Incidencias de incumplimiento abiertas y su estado de resolución
- Cobertura de formaciones obligatorias por departamento
- Contratos próximos a vencer que requieren revisión o renovación

**Área 5 — Herramientas y opciones de implementación**

Desde las más simples hasta las más sofisticadas:
- Solución mínima viable: Airtable o Notion con automatizaciones de recordatorio por email (para equipos pequeños o con bajo presupuesto)
- Solución intermedia: herramienta de gestión de proyectos como Monday.com o Asana con dashboards de compliance
- Solución avanzada: plataforma GRC especializada con workflows predefinidos, integración con el CLM y reporting regulatorio automatizado

Cuéntame el tipo de empresa, el sector regulatorio en el que operas, el tamaño del equipo legal y las principales obligaciones que gestionas actualmente, y diseñaremos juntos el sistema de automatización de compliance adecuado para tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar la gestión de obligaciones legales y compliance para reducir el riesgo de incumplimiento',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Automatización de seguimiento de clientes y health scores en Customer Success',
                'description'      => 'Diseña flujos automatizados de seguimiento de clientes, alertas de riesgo y campañas de retención proactiva. Construye un sistema de health scoring automatizado que permita al equipo de CS actuar sobre señales tempranas sin depender de revisiones manuales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success especializado en la implementación de sistemas de automatización y health scoring para equipos de CS que gestionan carteras grandes de clientes, con experiencia en plataformas como Gainsight, ChurnZero, Totango, HubSpot CS y combinaciones de CRM con herramientas de analytics.

Tu tarea es ayudarme a construir un sistema automatizado de seguimiento de clientes que alerte proactivamente sobre riesgos, automatice los touchpoints de bajo valor y libere al equipo de CS para concentrarse en las interacciones de alto impacto.

**El dilema de escala en Customer Success:**

Un CSM puede gestionar bien entre 20 y 50 cuentas en un modelo high-touch. Cuando la cartera crece a 100, 200 o 500 cuentas por CSM, la atención manual es imposible. La automatización permite escalar el modelo de CS sin sacrificar la calidad de la relación: los touchpoints de rutina se automatizan, las alertas de riesgo se generan sin intervención y el CSM solo interviene cuando su juicio y su relación personal marcan la diferencia.

**Módulo 1 — Health Score automatizado**

El health score es el indicador central de la salud de cada cliente. Para que sea útil, debe calcularse automáticamente con datos del producto y la relación. Diseña conmigo:

**Fuentes de datos para el cálculo automático:**
- Datos de uso del producto: frecuencia de login, usuarios activos / licencias, features utilizadas, volumen procesado
- Datos de soporte: tickets abiertos, tiempo de resolución, satisfacción post-ticket (CSAT)
- Datos de relación: días desde el último contacto con el CSM, asistencia a QBR, respuesta a encuestas
- Datos financieros: fecha de renovación, historial de pagos, upsell o downsell recientes
- Datos de onboarding: completitud del checklist de onboarding, time to value alcanzado

**Cálculo y actualización:**
- Cómo ponderar cada componente (ejemplo: 40% uso del producto, 25% salud del soporte, 25% relación, 10% financiero)
- Frecuencia de recálculo automático (diaria o semanal)
- Cómo clasificar el score en semáforo (verde > 70, amarillo 40-70, rojo < 40) y qué acción dispara cada nivel

**Módulo 2 — Alertas automáticas de riesgo**

El health score cambio no debe esperar a la revisión semanal. Configura alertas en tiempo real:
- Caída brusca del uso (más del 30% en 7 días): alerta inmediata al CSM para contactar
- Ticket de soporte crítico sin resolver en más de 48h: alerta al CSM y al manager
- Usuario principal que deja de hacer login por más de 14 días: alerta al CSM para investigar si hay riesgo de churn o cambio de contacto
- Renovación en menos de 90 días con health score rojo: alerta al CSM y creación automática de tarea de plan de acción
- Respuesta negativa en encuesta de NPS (detractor): alerta inmediata al CSM para gestión de la insatisfacción

**Módulo 3 — Automatización de touchpoints de bajo valor**

Los touchpoints que el CSM hace manualmente y que pueden automatizarse sin perder calidad:
- Email de bienvenida tras la firma del contrato (con información de onboarding y contactos clave)
- Recordatorio de reunión de onboarding 48h antes
- Check-in de 30 días: email automático preguntando cómo va el inicio, con recursos de ayuda
- Email de cumpleaños del aniversario de cliente (un año, dos años): refuerzo de la relación a escala
- Notificación de nuevas funcionalidades relevantes: email automático cuando se lanza algo que encaja con el perfil del cliente
- QBR reminder: solicitud automática de agenda y disponibilidad 4 semanas antes de la fecha habitual
- Encuesta de NPS automática cada 6 meses con análisis de resultados

**Módulo 4 — Playbooks automatizados de intervención**

Cuando el sistema detecta un riesgo, ¿qué hace automáticamente? Diseña playbooks con acciones secuenciales:

**Playbook de riesgo de churn (health score rojo):**
1. Día 0: alerta al CSM con resumen de métricas que han deteriorado y sugerencia de argumento de contacto
2. Día 1: tarea creada en el CRM para el CSM con deadline de contacto en 48h
3. Día 3: si no hay actividad registrada por el CSM, escalación al manager
4. Día 7: si el score no ha mejorado, solicitud de reunión de "success review" al cliente

**Playbook de oportunidad de expansión (múltiples señales positivas):**
1. Alerta al CSM de que la cuenta tiene señales de expansión
2. Creación de una tarea de revisión de oportunidades de upsell
3. Envío de materiales de expansión relevantes al CSM

**Módulo 5 — Métricas de eficiencia del sistema automatizado**

Cómo medir que la automatización está funcionando:
- Tiempo de reacción ante alertas de riesgo (objetivo: menos de 24h)
- Porcentaje de cuentas en riesgo (rojo) que mejoran su score en 30 días tras la intervención
- Cobertura de la cartera: qué porcentaje de clientes recibieron al menos un touchpoint significativo en el último mes
- Impacto en NRR: comparativa del NRR de cuentas gestionadas con el sistema vs. sin él
- Carga del CSM: reducción de horas en tareas administrativas vs. aumento en conversaciones de valor

Cuéntame el tamaño de tu cartera de clientes, la herramienta de CS que usas o que estás considerando, y cuáles son los principales riesgos de churn que quieres detectar antes, y diseñaremos juntos el sistema de automatización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar health scores y alertas de riesgo para escalar el modelo de Customer Success',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'CRM y automatización de marketing para freelancers y consultores independientes',
                'description'      => 'Implementa un sistema de CRM y automatización de marketing adaptado a las necesidades de un freelancer. Gestiona tu pipeline de clientes, automatiza el seguimiento de propuestas y mantén el contacto con tu red de contactos sin invertir horas en tareas administrativas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad y marketing digital especializado en ayudar a freelancers y profesionales independientes a gestionar su negocio de forma más eficiente, con experiencia implementando sistemas de CRM simplificados y automatizaciones de marketing accesibles para solopreneurs.

Tu tarea es ayudarme a implementar un sistema de CRM y automatización de marketing adaptado a mi realidad de freelancer: recursos limitados, sin equipo de soporte técnico y necesidad de centrarse en el trabajo real, no en las herramientas.

**El reto del freelancer con su gestión comercial:**

Los freelancers suelen oscilar entre dos extremos: no tienen tiempo para buscar clientes cuando están ocupados, y no tienen clientes cuando tienen tiempo. La causa es la ausencia de un sistema que mantenga el negocio activo de forma casi automática: que haga seguimiento de propuestas, que mantenga el contacto con leads fríos, que recuerde reactivar relaciones inactivas y que gestione el pipeline sin depender de la memoria o el excel.

**Parte 1 — El CRM mínimo viable para freelancers**

No necesitas Salesforce. Necesitas un sistema que uses de verdad. Ayúdame a diseñar:

**Qué registrar en el CRM:**
- Contactos: nombre, empresa, email, cómo nos conocemos, último contacto, qué necesita
- Oportunidades: propuesta enviada, monto estimado, probabilidad, fecha esperada de decisión, próximo paso
- Clientes activos: proyecto en curso, fecha de entrega, satisfacción, potencial de referido o repetición
- Alumni: clientes anteriores con los que mantener el contacto para futuras oportunidades
- Referentes: personas en tu red que te han enviado o podrían enviar clientes

**Herramientas adecuadas para freelancers:**
- Opción gratuita/económica: Notion (base de datos de contactos + tablero Kanban de oportunidades), Airtable o HubSpot CRM gratuito
- Opción más completa: Pipedrive (pensado para ciclos de venta), Folk (diseñado para negocios personales), Streak (CRM dentro de Gmail)
- Cuándo merece la pena pagar por un CRM y cuándo no

**Parte 2 — Automatización del seguimiento de propuestas**

El seguimiento de propuestas es la tarea más olvidada y más importante para el freelancer:
- Recordatorio automático a los 3 días de enviar una propuesta sin respuesta
- Recordatorio a los 7 días si aún no hay respuesta (con plantilla de seguimiento no invasiva)
- Alerta cuando se acerca la fecha de decisión que indicó el cliente
- Cierre automático de oportunidades inactivas después de 30 días y move al "archivo"

Herramientas para esto: workflows de HubSpot, secuencias de Pipedrive, automatizaciones de Notion o Airtable, o simplemente Calendly + email con recordatorios programados.

**Parte 3 — Mantenimiento automático de la red de contactos**

Tu red de contactos es tu principal activo como freelancer. Un sistema para mantenerla activa:
- Lista de los 20-30 contactos más valiosos con recordatorio trimestral de ponerse en contacto
- Email mensual de valor (newsletter, artículo, recurso útil) a toda la lista de contactos: cómo escribir uno en 1 hora y que no parezca spam
- Felicitación de cumpleaños o aniversario de trabajo: con LinkedIn o recordatorios del CRM
- Reactivación de contactos inactivos: cada 6 meses, revisión de los contactos con los que llevas más de 6 meses sin contactar y un mensaje personalizado

**Parte 4 — Email marketing simplificado para freelancers**

Una newsletter o lista de email es el activo de marketing más valioso para un freelancer. Diseña conmigo:
- Plataforma: MailerLite, Beehiiv o Substack (gratuitas hasta cierto número de suscriptores)
- Frecuencia realista: mensual es sostenible para un freelancer con trabajo
- Contenido: qué compartir que aporte valor a tu audiencia sin revelar el trabajo de los clientes
- Captación de suscriptores: cómo hacer crecer la lista de forma orgánica desde tu red actual
- Automatización de bienvenida: secuencia de 2-3 emails para nuevos suscriptores que te posicionen como experto

**Parte 5 — Métricas del sistema para freelancers**

Las únicas métricas que importan para un freelancer bien organizado:
- Pipeline: valor total de las propuestas en curso y probabilidad ponderada de ingresos del próximo mes
- Tasa de conversión de propuestas: cuántas propuestas se convierten en proyectos
- Tiempo de seguimiento: cuántos días tardas en hacer seguimiento de propuestas (objetivo: menos de 72h)
- Contactos "calientes" activos: cuántas personas en tu red tuvieron contacto contigo en los últimos 60 días
- Origen de los clientes: de dónde vienen para saber dónde invertir el tiempo de networking

Cuéntame tu especialidad, cuántos clientes activos gestionas típicamente, qué herramientas usas ahora (aunque sea solo email y notas) y cuál es el mayor problema de gestión comercial que tienes, y diseñaremos juntos el sistema adaptado a tu realidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar CRM y automatizaciones de marketing adaptadas a la realidad del freelancer',
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
