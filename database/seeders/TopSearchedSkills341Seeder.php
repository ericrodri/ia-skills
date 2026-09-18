<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills341Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Secuencias de email para onboarding de nuevos usuarios',
                'description'       => 'Diseño de flujos de email automatizados para guiar a los nuevos usuarios hacia la activación y el primer valor en el producto. Cubre la segmentación por perfil, el timing óptimo de cada email y las métricas de activación que debes monitorear.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un experto en email marketing y lifecycle marketing con experiencia en secuencias de onboarding para productos SaaS y plataformas digitales. Necesito tu ayuda para diseñar una secuencia de onboarding por email que lleve a los nuevos usuarios registrados hasta su primer momento de valor real con el producto.

**Contexto del producto y métricas actuales:**
Tenemos un producto SaaS de gestión de proyectos. El registro es gratuito y sin tarjeta de crédito. Actualmente, el 70% de los usuarios que se registran no vuelven después del primer día. Solo el 15% llega a crear su primer proyecto en los primeros 7 días, que es nuestro evento de activación principal. La tasa de conversión a plan de pago al final de los 14 días de prueba es del 8%, y sabemos que los usuarios que crean al menos 2 proyectos y añaden a un colaborador en los primeros 7 días convierten al 40%.

**Fase 1 – Definición de los momentos clave del onboarding:**
Antes de escribir los emails, necesito mapear el journey del nuevo usuario. Identifica los 5 momentos más críticos de los primeros 14 días: el evento de activación principal (crear el primer proyecto), los eventos de activación secundarios que predicen la retención (añadir colaboradores, completar el perfil, integrar con otras herramientas), el momento en que el usuario experimenta el primer valor real ("aha moment"), los puntos de abandono más frecuentes y las acciones que diferencian a usuarios que convierten de los que no. Usa esta información para diseñar los triggers de la secuencia.

**Fase 2 – Segmentación de la secuencia por perfil de usuario:**
No todos los nuevos usuarios son iguales. Define los segmentos principales basados en los datos del registro: por rol (manager, colaborador, freelancer), por tamaño de equipo, y por fuente de adquisición (orgánico, paid, recomendación). Para cada segmento, ajusta el ángulo del email y los casos de uso mostrados. Diseña la lógica de segmentación que se puede implementar en una herramienta como ActiveCampaign, Klaviyo o Customer.io.

**Fase 3 – Estructura de la secuencia de onboarding:**
Diseña la secuencia completa de 14 emails distribuidos en los primeros 14 días. Para cada email especifica: el día y la hora de envío, el trigger que lo activa (temporal o basado en comportamiento), el asunto del email (con A/B test de variante), la estructura del cuerpo (apertura, cuerpo principal, CTA principal y secundario), y la condición de parada (si el usuario ya realizó la acción, el email no se envía). Asegúrate de incluir: email de bienvenida inmediato tras el registro, email de configuración inicial (día 1), recordatorio de completar el perfil si no lo ha hecho (día 2), demostración del valor principal con caso de uso real (día 3), social proof (testimonios de usuarios similares, día 5), email de rescate para usuarios que no han activado (día 7), presentación de funcionalidades avanzadas para usuarios que sí activaron (día 7), y secuencia de conversión hacia el plan de pago (días 10, 12 y 14).

**Fase 4 – Copywriting de los emails más críticos:**
Redacta el copy completo de los 3 emails más importantes de la secuencia: el email de bienvenida inmediato (objetivo: que el usuario haga login y complete la configuración inicial en las próximas 2 horas), el email de rescate del día 7 para usuarios que no activaron (objetivo: recuperar a los usuarios perdidos con una propuesta de valor clara y una fricción mínima), y el email de conversión principal del día 12 (objetivo: convencer al usuario de iniciar el plan de pago antes de que termine la prueba). Para cada email incluye: asunto, preview text, saludo personalizado, cuerpo en texto plano adaptable a HTML, CTA con botón y URL de destino.

**Fase 5 – Métricas y optimización continua:**
Define el dashboard de métricas de la secuencia de onboarding que revisarás semanalmente: tasa de apertura por email, tasa de clic por email, tasa de conversión al evento de activación (crear primer proyecto) desglosada por segmento, tasa de conversión a plan de pago por cohorte de registro, y correlación entre apertura de emails y retención a 30 días. Establece también el calendario de A/B tests prioritarios: asuntos, longitud del email, tipo de CTA y timing de envío.

**Formato de entrega:**
- Mapa del journey del usuario con momentos clave y triggers
- Diagrama de la secuencia de 14 emails con lógica de ramificación por comportamiento
- Copy completo de los 3 emails críticos (bienvenida, rescate y conversión)
- Especificaciones de segmentación para implementar en la herramienta de email
- Dashboard de métricas con objetivos de referencia por email
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de secuencias de email automatizadas para activar a nuevos usuarios registrados',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementación de flujos de onboarding in-app para nuevos usuarios',
                'description'       => 'Guía técnica para diseñar e implementar flujos de onboarding dentro del producto que guíen al usuario hacia la activación. Cubre la arquitectura de los tooltips progresivos, checklists de inicio y gates de funcionalidades para optimizar el time-to-value.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un ingeniero de software senior especializado en product-led growth y experiencias de onboarding in-app. Necesito tu ayuda para diseñar e implementar un sistema de onboarding dentro del producto que guíe a los nuevos usuarios hacia su primera acción de valor sin necesidad de intervención humana.

**Contexto técnico:**
Tenemos una aplicación web SPA construida con React en el frontend y una API REST en Node.js en el backend. Usamos PostgreSQL como base de datos principal. Actualmente no tenemos ningún sistema de onboarding in-app: los usuarios llegan al dashboard vacío y no saben qué hacer. La tasa de activación (definida como crear el primer elemento en la plataforma) es del 18% en los primeros 7 días.

**Parte 1 – Arquitectura del sistema de onboarding:**
Define la arquitectura técnica del sistema de onboarding in-app. Evalúa las dos opciones principales: construirlo desde cero con componentes propios (más flexible, mayor esfuerzo de mantenimiento) o integrar una herramienta de onboarding de terceros como Intercom Product Tours, Appcues, Pendo o Userflow (menor esfuerzo de desarrollo, costo mensual adicional). Para cada opción, detalla: tiempo de implementación estimado, complejidad técnica, capacidades de personalización, analítica incluida y costo. Emite una recomendación según el tamaño del equipo de ingeniería y la urgencia.

**Parte 2 – Modelo de datos para el estado de onboarding:**
Si optamos por construirlo internamente, define el modelo de datos necesario. Diseña el esquema de base de datos para almacenar: el progreso de onboarding de cada usuario (pasos completados, pasos pendientes, fecha de inicio, fecha de completado de cada paso), los segmentos de onboarding (según el perfil del usuario en el registro), y los eventos de onboarding (qué acción realizó el usuario, cuándo, desde qué pantalla). Incluye las migraciones de PostgreSQL necesarias y los índices recomendados.

**Parte 3 – Componentes de onboarding a implementar:**
Define los componentes de interfaz necesarios para el onboarding in-app. Para cada componente proporciona la especificación técnica de implementación en React: checklist de inicio (lista de tareas de configuración visible en el dashboard con progreso visual, que desaparece al completar todas las tareas), tooltips progresivos (globos de ayuda contextuales que aparecen la primera vez que el usuario visita una sección, con botón para ir al siguiente paso), modales de bienvenida (diálogo de primer login con selección de caso de uso que personaliza el onboarding), empty states accionables (cuando una sección está vacía, mostrar un CTA claro con texto motivacional) y barra de progreso de configuración (indicador de % de completado de la configuración inicial en el header).

**Parte 4 – Lógica de progresión y triggers:**
Define la lógica de progresión del onboarding. Implementa el sistema de tracking de eventos: qué eventos del usuario disparan el avance en el onboarding (crear un elemento, invitar a un colaborador, completar el perfil), cómo se propagan estos eventos desde el frontend hasta el backend, cómo el backend actualiza el estado de onboarding y notifica al frontend del avance, y cuándo y cómo se ocultan definitivamente los elementos de onboarding una vez completado. Diseña también el mecanismo de re-activación del onboarding cuando el usuario accede a una funcionalidad nueva o cuando el admin activa funcionalidades adicionales.

**Parte 5 – Analítica y optimización del onboarding:**
El onboarding in-app debe ser medible y optimizable. Define la implementación de la analítica: qué eventos trackear (paso visto, paso completado, paso saltado, onboarding completado, onboarding abandonado en paso X), cómo implementar el tracking sin acoplar la lógica de negocio (event bus interno o llamadas explícitas al servicio de analítica), y cómo visualizar los datos en un funnel de onboarding que muestre el drop-off en cada paso. Incluye las consultas SQL para calcular las métricas de conversión por paso y por segmento de usuario.

**Formato de entrega:**
- Diagrama de arquitectura del sistema de onboarding (componentes, flujo de datos, API endpoints)
- Esquema de base de datos con migraciones de PostgreSQL
- Especificación de componentes React (props, estado, comportamiento)
- Diagrama de flujo de la lógica de progresión y triggers
- Queries SQL para el funnel de analítica de onboarding
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño e implementación técnica de flujos de onboarding in-app en React',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencia de primer uso para reducir el abandono',
                'description'       => 'Framework de diseño UX para crear experiencias de primer uso memorables y efectivas. Cubre el diseño de pantallas vacías, la progresión de complejidad y los principios de onboarding progresivo para maximizar la retención temprana.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un UX designer especializado en experiencias de onboarding y retención temprana de usuarios. Necesito tu ayuda para rediseñar completamente la experiencia de primer uso de nuestra aplicación, que actualmente tiene una tasa de abandono del 75% en el primer día.

**Diagnóstico del problema actual:**
Cuando un nuevo usuario se registra en nuestra aplicación (una herramienta de gestión de proyectos), llega a un dashboard completamente vacío con un menú complejo de 15 opciones en el sidebar. No hay ninguna guía sobre qué hacer primero. Los usuarios que realizan tests de usabilidad describen sensaciones de confusión, abrumamiento y falta de dirección. El mensaje implícito es "ya sabes cómo funciona esto", cuando en realidad no tienen ningún contexto.

**Principio 1 – Diseño de pantallas vacías (empty states) efectivas:**
Las pantallas vacías son la primera impresión del producto para un nuevo usuario. Diseña el sistema de empty states para cada sección principal de la aplicación. Para cada empty state define: la ilustración o icono que comunica el propósito de la sección (sin palabras ambiguas), el headline que explica qué se puede hacer aquí (orientado al beneficio, no a la funcionalidad), el microcopy de apoyo que da contexto adicional, el CTA principal para comenzar, y si aplica, un ejemplo de contenido de muestra que demuestre el valor antes de que el usuario haga nada. Sigue el patrón "Muestra, no cuentes": un proyecto de ejemplo pre-poblado puede ser más efectivo que explicar qué es un proyecto.

**Principio 2 – Onboarding progresivo y revelación progresiva de complejidad:**
No mostres todas las funcionalidades al usuario nuevo. Diseña la estrategia de revelación progresiva: qué funcionalidades se muestran en el día 1 (solo las esenciales para la activación), qué se desbloquea en la semana 1 (funcionalidades de colaboración), qué se presenta en el mes 1 (funcionalidades avanzadas y de personalización), y cómo se comunica visualmente al usuario que hay más funcionalidades por descubrir sin generar ansiedad. Define también los criterios para considerar que un usuario está listo para avanzar al siguiente nivel de complejidad.

**Principio 3 – Diseño del flujo de configuración inicial:**
Los primeros 5 minutos en el producto son críticos. Diseña el flujo de configuración inicial (setup wizard) que aparece solo la primera vez: número máximo de pasos (recomendado: 3-5), información mínima imprescindible que necesitamos del usuario para personalizar la experiencia, cómo mostrar el progreso del wizard de forma motivadora, opción de saltar pasos sin bloquear el acceso al producto, y cómo aprovechar la información recopilada para personalizar el onboarding posterior. Diseña también el estado de la aplicación al finalizar el wizard: el usuario debe ver inmediatamente el valor de los datos que acaba de introducir.

**Principio 4 – Microinteracciones y refuerzo positivo:**
El onboarding debe ser emocionalmente satisfactorio. Define las microinteracciones que reforzarán positivamente las acciones del usuario: animación de celebración al completar el primer elemento, mensaje de felicitación al invitar al primer colaborador, confeti o efecto visual al completar el checklist de configuración, y barra de progreso que avanza visiblemente al completar pasos. Diseña también el tono del copywriting de onboarding: cálido, alentador y concreto, evitando el tecnicismo y la jerga del sector.

**Principio 5 – Test y validación del diseño de onboarding:**
Un diseño de onboarding que no se ha testeado con usuarios reales es una hipótesis, no una solución. Define el plan de validación: guión de test de usabilidad con usuarios nuevos (5-8 participantes), métricas a observar durante el test (tiempo hasta completar el primer elemento, momentos de confusión o duda, expresiones verbales de frustración o satisfacción), hipótesis a validar y criterios de éxito para cada una. Define también las métricas cuantitativas que confirmarán que el rediseño funciona en producción: tasa de activación en día 1, día 7 y día 30.

**Formato de entrega:**
- Sistema de empty states con especificaciones de diseño para cada sección
- Flujo del setup wizard con pantallas, microcopy y lógica de ramificación
- Mapa de revelación progresiva de funcionalidades por etapa del usuario
- Inventario de microinteracciones de refuerzo positivo con especificaciones de animación
- Guión de test de usabilidad y checklist de métricas a observar
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Rediseño de la experiencia de primer uso para reducir el abandono temprano',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Onboarding comercial: acortar el tiempo hasta la primera compra',
                'description'       => 'Metodología de ventas para reducir la fricción en el proceso de compra y acortar el ciclo de ventas. Cubre el diseño del primer contacto, la demostración de valor temprana y las técnicas para mover al prospecto desde el interés hasta el cierre en menos tiempo.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un director de ventas con experiencia en optimización de procesos comerciales B2B y en la reducción del tiempo de ciclo de ventas. Necesito tu ayuda para rediseñar nuestro proceso de onboarding comercial: el periodo entre que un prospecto muestra interés y realiza su primera compra o firma el primer contrato.

**Situación actual:**
Nuestro ciclo de ventas promedio es de 47 días desde el primer contacto hasta el cierre. Durante ese tiempo, los prospectos suelen pedir 2-3 demos, múltiples rondas de preguntas por email, una prueba gratuita de 14 días y una negociación de precios. El 68% de los deals se pierden por "ya no podemos por el momento" o simplemente dejan de responder. Sospechamos que la fricción acumulada y la falta de urgencia son los principales problemas.

**Fase 1 – Rediseño del primer contacto:**
Los primeros 5 minutos de interacción con un prospecto definen el tono de toda la relación comercial. Rediseña el script del primer contacto (ya sea por email frío, LinkedIn o llamada de descubrimiento): cómo abrir la conversación orientado al problema del prospecto (no a nuestro producto), las 3 preguntas de descubrimiento que mejor califican la urgencia y el presupuesto, cómo presentar la propuesta de valor en 2-3 frases sin mencionar funcionalidades, y cómo terminar el primer contacto con un siguiente paso concreto y comprometido (no un "te mando más información").

**Fase 2 – Demostración de valor en la primera reunión:**
La primera demo es el momento donde más deals se ganan o se pierden. Rediseña la estructura de la demo: los primeros 5 minutos de preguntas de contexto antes de mostrar el producto (para personalizar lo que mostramos), el flujo de la demo orientado a los casos de uso específicos del prospecto (no un tour completo del producto), la técnica de "demo del futuro" (mostrar cómo será la vida del prospecto con el producto, no cómo funciona el producto), cómo terminar la demo con un commitment claro del prospecto (¿qué pasaría si no resuelven este problema en los próximos 3 meses?), y el proceso de envío del resumen post-demo en las siguientes 2 horas.

**Fase 3 – Optimización de la prueba gratuita:**
La prueba gratuita es un arma de doble filo: si el prospecto no llega al valor rápido, la abandona y el deal se enfría. Rediseña la experiencia de prueba gratuita para equipos de ventas: el email de activación del trial con una tarea concreta a completar en las primeras 24 horas, la secuencia de touchpoints durante el trial (llamada de check-in en el día 3, email de caso de uso en el día 7, llamada de evaluación en el día 12), cómo usar los datos de uso del trial para personalizar la conversación comercial (el prospecto que usó la funcionalidad X está más cerca del cierre que el que no), y el proceso de extensión del trial vs. conversión a la conversación de precio.

**Fase 4 – Manejo de objeciones en el onboarding comercial:**
Las objeciones durante el proceso de onboarding comercial son información, no barreras. Define el playbook de manejo de las 5 objeciones más frecuentes en nuestro ciclo de ventas: "no tenemos presupuesto ahora" (cómo explorar si es real o es una excusa), "necesitamos evaluar otras opciones" (cómo crear urgencia sin presionar), "el precio es muy alto" (cómo defender el precio con ROI, no con descuentos), "necesitamos consultar con el equipo técnico" (cómo facilitar la evaluación técnica sin perder el hilo comercial), y "no es el momento" (cómo mantener la relación para reactivar en 60-90 días). Para cada objeción proporciona la respuesta con el framework Feel-Felt-Found adaptado al contexto B2B.

**Fase 5 – Métricas y optimización del funnel comercial:**
Define las métricas que miden la eficiencia del onboarding comercial: tasa de conversión de cada etapa del funnel (primer contacto → demo → trial → propuesta → cierre), tiempo promedio en cada etapa, tasa de respuesta al primer contacto, porcentaje de demos que generan un trial, y porcentaje de trials que generan una propuesta. Establece objetivos de mejora para los próximos 90 días y el plan de revisión semanal del funnel con el equipo de ventas.

**Formato de entrega:**
- Script del primer contacto con variantes para email, LinkedIn y llamada
- Estructura de demo en 45 minutos con guión por sección
- Secuencia de touchpoints durante el trial con mensajes tipo
- Playbook de manejo de objeciones con respuestas detalladas
- Dashboard de métricas del funnel comercial con objetivos trimestrales
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimización del proceso comercial para reducir el ciclo de ventas B2B',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Definición y optimización de métricas de activación de usuarios',
                'description'       => 'Framework para identificar el evento de activación más predictivo de la retención y construir un sistema de medición que permita optimizar el onboarding de forma continua. Incluye análisis de cohortes y experimentos de activación.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un Product Manager senior con especialización en product-led growth y analítica de comportamiento de usuarios. Necesito tu ayuda para identificar el evento de activación correcto para nuestro producto y construir el sistema de métricas que nos permita optimizarlo de forma sistemática.

**Problema de partida:**
En este momento no tenemos una definición clara de "usuario activado". Medimos registros, DAU y tasa de conversión a plan de pago, pero no sabemos cuál es el comportamiento en el producto que mejor predice la retención a 30 días y la conversión. Como consecuencia, no sabemos qué mejorar en el onboarding ni cómo priorizar las iniciativas de activación.

**Parte 1 – Metodología para identificar el evento de activación:**
El evento de activación correcto es aquel que, cuando ocurre en los primeros N días, predice la retención a largo plazo. Diseña la metodología de análisis para encontrarlo: análisis de retención por cohorte segmentada por comportamiento en los primeros 7 días (usuarios que hicieron X vs. los que no), análisis de correlación entre eventos específicos del producto y la retención a 30 días, análisis de los usuarios que retienen para identificar el patrón de comportamiento común en su primera semana, y "magic number" analysis (¿cuántas veces debe realizar la acción X para que la retención sea significativamente mayor?). Incluye las queries de SQL o las consultas de Amplitude/Mixpanel necesarias para este análisis.

**Parte 2 – Definición del evento de activación principal y secundarios:**
Una vez identificado el evento de activación, es necesario definirlo con precisión. Para el evento de activación principal define: la acción específica (verbo + objeto en el producto), el plazo en que debe ocurrir (primeras 24h, 7 días o 14 días), el threshold de uso si aplica (crear al menos 1 elemento, no solo visitar la pantalla), y cómo se diferencia de un "engagement pasivo" (visitar la pantalla vs. crear contenido). Define también 2-3 eventos de activación secundarios que sirvan como señales de progresión hacia la activación principal.

**Parte 3 – Construcción del funnel de activación:**
El funnel de activación es la visualización del journey del usuario desde el registro hasta el evento de activación. Diseña el funnel: las etapas del funnel (registro → primer login → completar perfil → primera acción clave → evento de activación), las métricas a medir en cada etapa (tasa de conversión entre etapas, tiempo entre etapas, drop-off por etapa), la segmentación del funnel por fuente de adquisición, por plan de registro y por rol del usuario, y la frecuencia de revisión del funnel (semanal para el equipo de producto, mensual para la dirección). Incluye la especificación de instrumentación de eventos que el equipo de ingeniería deberá implementar.

**Parte 4 – Diseño de experimentos de activación:**
Una vez que tienes el funnel medido, el siguiente paso es mejorarlo mediante experimentos controlados. Diseña el programa de experimentos de activación para los próximos 90 días: cómo priorizar qué pasos del funnel mejorar primero (por volumen de drop-off y por facilidad de experimentación), el formato de las hipótesis de experimento (Si hacemos X, esperamos que Y usuarios lleguen a Z, porque A), el diseño del A/B test mínimo viable para cada hipótesis (tamaño de muestra necesario, duración mínima del experimento, métricas primaria y de guardia), y el proceso de decisión al finalizar el experimento (¿cuándo implementar el ganador, cuándo seguir experimentando?).

**Parte 5 – Dashboard de activación y reporting:**
Define el dashboard de activación que el equipo de producto revisará semanalmente: tasa de activación general y por segmento (últimas 4 semanas vs. 4 semanas anteriores), funnel de activación con tasas de conversión por etapa, distribución del tiempo hasta la activación (P25, P50, P75), cohortes de activación por semana de registro y evolución de la tasa de activación por cohorte, y lista de experimentos activos con estado y métricas actuales. Define también el proceso de reporting mensual a dirección con el resumen de hallazgos y acciones tomadas.

**Formato de entrega:**
- Metodología de análisis para identificar el evento de activación con queries incluidas
- Definición formal del evento de activación principal y secundarios
- Especificación del funnel de activación con eventos a instrumentar
- Backlog de experimentos de activación para los próximos 90 días con priorización
- Especificación del dashboard de activación con métricas y visualizaciones
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Identificación del evento de activación y construcción del sistema de métricas de onboarding',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programa de onboarding de empleados que acelera la productividad',
                'description'       => 'Diseño de un programa estructurado de incorporación de nuevos empleados que reduzca el tiempo hasta la plena productividad. Cubre el plan de los primeros 90 días, la asignación de buddy, la integración cultural y las métricas de éxito del onboarding.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un especialista en People Operations y desarrollo organizacional con experiencia en diseño de programas de onboarding en empresas tecnológicas de crecimiento acelerado. Necesito tu ayuda para diseñar un programa de onboarding de empleados que reduzca el tiempo hasta la plena productividad y mejore la retención en el primer año.

**Situación actual:**
Contratamos entre 2 y 5 personas al mes. El onboarding actual consiste en 1 día de papeleo administrativo y una reunión de introducción al equipo. No hay un plan estructurado para los primeros 30, 60 o 90 días. El 23% de los empleados abandona la empresa en el primer año y la encuesta de salida refleja que muchos se sintieron "perdidos" o "sin dirección clara" en sus primeros meses.

**Módulo 1 – Preonboarding: el periodo antes del primer día:**
El onboarding empieza antes de que el empleado aparezca por la puerta (o se conecte remotamente). Diseña el proceso de preonboarding: email de bienvenida la semana anterior al inicio con información práctica (horario del primer día, dress code, a quién dirigirse), preparación del espacio de trabajo físico o accesos digitales antes del primer día (ordenador configurado, cuentas de email y herramientas activas, acceso al handbook de la empresa), asignación del buddy antes del inicio para que contacte al nuevo empleado la semana anterior, y paquete de bienvenida (guía de la empresa, organigrama, glosario de términos internos, canales de comunicación y sus propósitos). Define también el checklist del manager para garantizar que todo esté listo antes del primer día.

**Módulo 2 – Primera semana: orientación e integración:**
La primera semana tiene un único objetivo: que el nuevo empleado se sienta bienvenido, orientado y con claridad suficiente para empezar a contribuir. Diseña el plan hora a hora de los primeros 3 días: reuniones de bienvenida con el equipo directo e interdisciplinares, sesiones de contexto del negocio (misión, visión, producto, clientes, métricas clave), presentación de las herramientas de trabajo y procesos principales, tiempo libre no estructurado para explorar el handbook y el código o los materiales del rol, y reunión de check-in del viernes con el manager para recoger primeras impresiones y resolver dudas. Define qué NO hacer en la primera semana (sobrecarga de reuniones, asignar tareas críticas sin contexto suficiente).

**Módulo 3 – Plan de 30-60-90 días con hitos claros:**
El mayor error del onboarding es no definir expectativas claras para los primeros meses. Diseña la plantilla del plan de 30-60-90 días que el manager y el nuevo empleado construirán juntos en la primera semana. Para cada periodo define: el objetivo principal (aprender vs. contribuir vs. liderar), las áreas de conocimiento a dominar, los primeros entregables concretos, las personas clave con las que debe reunirse y por qué, y la métrica de éxito que indicará que el empleado ha superado esa fase del onboarding.

**Módulo 4 – Sistema de buddy y mentoring:**
El buddy es el acelerador más efectivo del onboarding. Diseña el programa de buddies: criterios de selección del buddy (mismo departamento pero diferente equipo, al menos 1 año en la empresa, reconocido por su disposición a ayudar), responsabilidades del buddy (reunión semanal de 30 min durante los primeros 60 días, disponibilidad para preguntas informales, presentaciones a personas clave), formación del buddy (cómo escuchar activamente, cómo transmitir la cultura sin agobiar, cómo detectar señales de desconexión), y compensación o reconocimiento del buddy por su dedicación.

**Módulo 5 – Medición del éxito del onboarding:**
Define el sistema de métricas del programa de onboarding: encuesta de satisfacción con el onboarding al día 30 y al día 90 (NPS del onboarding + preguntas abiertas), tiempo hasta el primer entregable valorado por el manager, tasa de retención a 6 y 12 meses de empleados que pasaron por el nuevo programa vs. los que no, y evaluación del manager sobre la velocidad de productividad del nuevo empleado en comparación con el promedio del equipo. Establece el proceso de mejora continua: revisión trimestral de los resultados y actualización del programa.

**Formato de entrega:**
- Checklist de preonboarding para el equipo de RRHH y para el manager
- Agenda detallada de la primera semana con propósito de cada reunión
- Plantilla de plan de 30-60-90 días personalizable por rol
- Guía del buddy con responsabilidades, preguntas de conversación sugeridas y señales de alerta
- Dashboard de métricas del programa de onboarding con objetivos de referencia
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de programa estructurado de incorporación de empleados para acelerar su productividad',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Onboarding de clientes en productos financieros digitales',
                'description'       => 'Framework para diseñar el proceso de alta de nuevos clientes en productos financieros digitales, equilibrando los requisitos regulatorios de KYC/AML con una experiencia de usuario que minimice el abandono durante el proceso de verificación.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un especialista en fintech y experiencia de cliente en servicios financieros regulados. Necesito tu ayuda para diseñar el proceso de onboarding de nuevos clientes para nuestro producto financiero digital, equilibrando el cumplimiento normativo con una experiencia que minimice el abandono durante el proceso de verificación de identidad.

**Contexto del producto:**
Somos una fintech española que ofrece una cuenta de negocio digital para autónomos y pequeñas empresas. Estamos regulados como entidad de dinero electrónico (EDE) por el Banco de España. Para dar de alta a un nuevo cliente debemos realizar el proceso de KYC (Know Your Customer) y cumplir con la normativa AML (Anti Money Laundering) según la Ley 10/2010 de prevención del blanqueo de capitales. Actualmente, el 58% de los usuarios que inician el proceso de alta lo abandonan antes de completarlo.

**Bloque 1 – Análisis de la fricción en el proceso de KYC:**
Identifica los puntos de mayor abandono en un proceso de KYC típico para cuentas de negocio: solicitud de documentación de identidad del titular (DNI/pasaporte por ambas caras), verificación biométrica (selfie con liveness check), documentación de la empresa (escritura de constitución, modelo 036/037, justificante de domicilio), información sobre el propósito de uso de la cuenta y origen de fondos, y confirmación de beneficiario efectivo último (UBO) si el titular no es el único dueño. Para cada paso, identifica la causa de abandono más probable y propone una mejora de diseño que mantenga el cumplimiento normativo.

**Bloque 2 – Diseño del flujo de onboarding por niveles de riesgo:**
La normativa AML permite aplicar medidas simplificadas de diligencia debida a clientes de bajo riesgo y medidas reforzadas a clientes de alto riesgo. Diseña el flujo de onboarding diferenciado: para autónomos de bajo riesgo (facturación estimada < 100.000€/año, actividad no regulada), el flujo mínimo viable con la documentación estrictamente necesaria; para pymes de riesgo medio, el flujo estándar con documentación completa; y para empresas de mayor complejidad (múltiples socios, actividad internacional, sectores de mayor riesgo), el flujo de medidas reforzadas con entrevista humana. Define los criterios de clasificación automática de riesgo al inicio del onboarding.

**Bloque 3 – Optimización de la UX dentro de los límites regulatorios:**
Muchas fintechs asumen que el cumplimiento normativo obliga a una mala experiencia. Diseña las mejoras de UX que son compatibles con el cumplimiento: progreso visual claro con número de pasos y tiempo estimado de cada uno, posibilidad de guardar el progreso y retomar el proceso desde el punto donde se dejó (con fecha límite visible), instrucciones contextuales para la captura de documentos (imagen de ejemplo, lista de errores comunes a evitar), feedback inmediato sobre la calidad de la foto antes de enviar (sin esperar a la revisión manual), y comunicación proactiva durante el tiempo de revisión (correos de estado: "estamos revisando tu documentación, tiempo estimado: 2-4 horas").

**Bloque 4 – Gestión de rechazos y casos problemáticos:**
Una parte inevitable del onboarding en servicios financieros es el rechazo de solicitudes. Diseña el proceso para estos casos: criterios de rechazo automático (documentación ilegible, falta de coincidencia entre selfie y DNI, empresa en lista de sanciones) y derivación a revisión manual, comunicación al cliente en caso de rechazo con indicación del motivo y posibilidad de subsanación, proceso de escalada a un agente humano para casos complejos con tiempo máximo de respuesta garantizado, y gestión del cliente que no puede completar el KYC online (alternativa de oficina o notaría).

**Bloque 5 – Métricas de onboarding regulatorio y objetivos de mejora:**
Define el sistema de métricas del proceso de onboarding financiero: tasa de inicio del proceso, tasa de completion por etapa del KYC, tasa de aprobación automática vs. revisión manual vs. rechazo, tiempo promedio hasta la aprobación de la cuenta, y coste de adquisición ajustado por la tasa de completion. Establece objetivos de mejora para los próximos 6 meses y define qué experimentos de UX son posibles sin necesitar validación del equipo de cumplimiento y cuáles requieren revisión legal.

**Formato de entrega:**
- Diagrama de flujo del proceso de onboarding con bifurcaciones por nivel de riesgo
- Inventario de fricción por paso con propuestas de mejora dentro del marco normativo
- Especificación de las comunicaciones durante el proceso (emails, notificaciones push, mensajes en app)
- Criterios de clasificación automática de riesgo del cliente
- Dashboard de métricas del proceso de KYC con objetivos trimestrales
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño del proceso de alta de clientes en productos financieros regulados con KYC/AML',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Onboarding legal y compliance para nuevos usuarios de plataformas SaaS',
                'description'       => 'Framework legal para diseñar el proceso de aceptación de términos, verificación de identidad y gestión de consentimientos en plataformas digitales. Cubre los requisitos del RGPD, la validez del consentimiento electrónico y la gestión de menores de edad.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un abogado especializado en derecho digital y protección de datos con experiencia en el diseño de procesos de registro y onboarding para plataformas SaaS europeas. Necesito tu ayuda para revisar y mejorar el proceso legal de onboarding de nuestra plataforma, asegurándonos de que cumplimos con la normativa aplicable sin crear una experiencia de usuario frustrante.

**Contexto de la plataforma:**
Somos una plataforma SaaS B2B y B2C con usuarios en España y el resto de la UE. Durante el registro de nuevos usuarios recogemos: nombre completo, email, contraseña, país de residencia, y opcionalmente número de teléfono y datos de facturación. Presentamos los Términos y Condiciones (T&C) y la Política de Privacidad como un único checkbox "He leído y acepto los T&C y la Política de Privacidad". Recientemente hemos añadido un checkbox opcional para el envío de newsletters. Sospechamos que esta configuración tiene riesgos legales.

**Área 1 – Validez del consentimiento en el proceso de registro:**
Analiza los problemas legales del checkbox combinado de T&C y Política de Privacidad. Según el RGPD, el consentimiento para el tratamiento de datos personales debe ser específico, informado, libre e inequívoco. Explica: por qué combinar la aceptación de T&C con el consentimiento de privacidad en un único checkbox es problemático, cómo separar correctamente la aceptación contractual (T&C, que es una obligación para usar el servicio) del consentimiento para tratamientos de datos que no son estrictamente necesarios para la prestación del servicio, y qué información mínima debe estar visible en el momento del registro sin necesidad de abrir los documentos completos.

**Área 2 – Gestión del consentimiento para comunicaciones comerciales:**
El marketing directo requiere consentimiento previo y explícito. Diseña el proceso correcto para el opt-in de newsletter: redacción del texto del checkbox que cumpla con los requisitos del RGPD y la LSSI-CE, el proceso de double opt-in (confirmación por email) recomendado para reducir disputas y mejorar la calidad de la lista, la información sobre el tratamiento de datos con fines de marketing que debe estar accesible en el momento del consentimiento, y el sistema de registro del consentimiento (quién consintió, cuándo, qué versión del texto vio, desde qué IP) que deberá almacenar la plataforma para poder demostrar el consentimiento ante la AEPD.

**Área 3 – Verificación de edad y tratamiento de menores:**
Las plataformas que pueden ser usadas por menores de edad tienen obligaciones adicionales. Analiza: a partir de qué edad es válido el consentimiento del propio usuario en España (14 años según la LOPDGDD), qué medidas de verificación de edad razonables y proporcionadas puede implementar una plataforma SaaS sin ser excesivamente intrusivo, qué ocurre si un menor de 14 años se registra sin el consentimiento parental y la plataforma lo descubre, y qué información adicional debe incluir la Política de Privacidad si la plataforma está dirigida o puede ser usada por menores.

**Área 4 – Actualización de T&C y re-consentimiento:**
Las plataformas actualizan sus T&C y Políticas de Privacidad con frecuencia. Define el proceso legalmente correcto para gestionar las actualizaciones: cuándo es necesario obtener un nuevo consentimiento del usuario (cambios materiales en la Política de Privacidad que afectan a los derechos del usuario) vs. cuándo basta con una notificación (cambios menores en los T&C), cómo notificar la actualización (email, banner en la app, modal al iniciar sesión), el plazo de preaviso recomendado antes de que la nueva versión entre en vigor, y qué hacer con los usuarios que no aceptan los nuevos T&C (bloqueo del servicio vs. continuación bajo términos anteriores).

**Área 5 – Registro de actividades de tratamiento y documentación de consentimientos:**
El cumplimiento del RGPD requiere documentar no solo los consentimientos sino también los tratamientos de datos. Define los registros que la plataforma debe mantener: Registro de Actividades de Tratamiento (RAT) actualizado con los tratamientos realizados durante el onboarding, logs de consentimiento con los campos mínimos necesarios (user_id, timestamp, versión del texto aceptado, tipo de consentimiento, mecanismo de obtención), proceso de atención a solicitudes de ejercicio de derechos (acceso, rectificación, supresión, portabilidad, oposición) con plazos de respuesta, y política de retención de logs de consentimiento (cuánto tiempo conservarlos y por qué).

**Formato de entrega:**
- Rediseño del flujo de checkboxes en el registro con redacción legal correcta
- Plantilla de texto para el checkbox de newsletter que cumple con RGPD y LSSI-CE
- Proceso de doble opt-in con los emails modelo
- Política de gestión de actualizaciones de T&C con comunicaciones tipo
- Estructura del registro de consentimientos con campos mínimos obligatorios
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño del proceso de registro y consentimientos en plataformas SaaS conforme al RGPD',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Playbook de onboarding para reducir el churn en los primeros 90 días',
                'description'       => 'Guía completa para que los equipos de Customer Success diseñen e implementen un programa de onboarding de clientes que maximice la activación, la adopción de funcionalidades clave y la retención en el periodo crítico de los primeros 90 días.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un VP of Customer Success con experiencia en reducción de churn temprano en plataformas SaaS B2B. Necesito tu ayuda para diseñar el playbook completo de onboarding de clientes que ejecutará mi equipo de CSMs durante los primeros 90 días de vida de cada nueva cuenta.

**Problema a resolver:**
El 40% de nuestro churn ocurre en los primeros 90 días. Los clientes que cancelan en este periodo declaran: "no llegamos a implementarlo correctamente", "no teníamos tiempo para aprender la herramienta" o "no vimos el valor que esperábamos". Paradójicamente, los clientes que llegan al día 91 tienen una tasa de renovación del 94%. Esto indica claramente que el problema es el onboarding, no el producto.

**Capítulo 1 – Segmentación de clientes para onboarding diferenciado:**
No todos los clientes merecen el mismo nivel de inversión en onboarding. Define los segmentos y el nivel de servicio de onboarding para cada uno: clientes high-touch (ARR > 20.000€/año, equipos de más de 50 usuarios o sectores regulados): un CSM dedicado con reuniones semanales, implementación guiada y formación presencial; clientes mid-touch (ARR entre 5.000€ y 20.000€): un CSM compartido con reuniones quincenales y materiales de formación personalizados; y clientes low-touch (ARR < 5.000€): onboarding principalmente digital con webinars grupales y documentación de autoservicio, con acceso a CSM solo en caso de riesgo de churn. Define los criterios de escalada de segmento si un cliente low-touch muestra señales de riesgo.

**Capítulo 2 – Kickoff call: la reunión más importante de la relación:**
La kickoff call establece el tono, las expectativas y el plan de trabajo de los próximos 90 días. Diseña el formato de la kickoff call ideal: preparación previa del CSM (investigar el sector del cliente, revisar el contrato firmado, preparar el plan de implementación preliminar), la agenda de la reunión (15 min de conocimiento mutuo y contexto del negocio del cliente, 20 min de definición de objetivos de éxito medibles para los próximos 90 días, 15 min de revisión del plan de implementación y ajuste con el cliente, 10 min de acuerdo sobre cadencia de reuniones y canales de comunicación), y el resumen post-kickoff que el CSM enviará dentro de las 24 horas siguientes con los acuerdos por escrito.

**Capítulo 3 – Plan de implementación de 90 días por tipo de cliente:**
Define la plantilla del plan de implementación de 90 días para cada segmento. Para un cliente mid-touch típico, estructura el plan en tres fases: Mes 1 (Configuración y primeros pasos): configuración técnica completa, formación básica a los usuarios principales, primer caso de uso live; Mes 2 (Adopción y expansión): formación a usuarios secundarios, activación de integraciones con herramientas externas, segunda revisión de objetivos; Mes 3 (Optimización y escalado): identificación de funcionalidades subutilizadas, propuesta de expansión si corresponde, preparación de la primera Business Review. Para cada hito define: actividades concretas, responsable (CSM vs. cliente), criterio de éxito medible y riesgo si no se cumple.

**Capítulo 4 – Sistema de early warning para churn en onboarding:**
Define las señales de riesgo durante el onboarding que activarán una intervención proactiva del CSM: señales de baja adopción (menos del 30% de usuarios del contrato han hecho login en las primeras 2 semanas), señales de baja configuración (el setup inicial no está completado tras 10 días del kickoff), señales de ticket de soporte de alta criticidad (problema técnico de bloqueo no resuelto en 48 horas), señales relacionales (el cliente no responde en 5 días hábiles o cancela 2 reuniones consecutivas), y señales de desalineación de expectativas (el cliente menciona que esperaba una funcionalidad que no existe). Para cada señal define el protocolo de respuesta del CSM (qué hacer, en qué plazo, qué decir).

**Capítulo 5 – Métricas de éxito del onboarding y cierre del periodo:**
Define cómo medir el éxito del programa de onboarding de 90 días: tasa de clientes que llegan al día 91 con el setup completo, tasa de adopción del producto (usuarios activos mensuales vs. licencias contratadas) al día 30, 60 y 90, NPS del cliente al finalizar el onboarding, tasa de expansión en los primeros 90 días (upsell de licencias o funcionalidades adicionales), y tiempo promedio hasta el primer valor declarado por el cliente. Define también el ritual de cierre del onboarding: la Business Review del día 90 como transición del onboarding al modo de gestión continua.

**Formato de entrega:**
- Matriz de segmentación de clientes con nivel de servicio y criterios
- Agenda y guión de la kickoff call con plantilla de resumen post-call
- Plantilla del plan de implementación de 90 días por segmento
- Catálogo de señales de riesgo con protocolos de respuesta del CSM
- Dashboard de métricas de onboarding con objetivos por segmento
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño del playbook de onboarding de clientes B2B para reducir el churn temprano',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de onboarding de clientes para freelancers profesionales',
                'description'       => 'Proceso estructurado para que los freelancers incorporen a nuevos clientes de forma profesional y eficiente. Incluye el contrato de servicios, la recogida de información inicial, la definición de expectativas y la configuración del espacio de trabajo colaborativo.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de productividad especializado en operaciones de negocio para freelancers y profesionales independientes. Necesito tu ayuda para crear un sistema de onboarding de clientes completo y profesional que me permita comenzar cada proyecto con el pie derecho, evitar malentendidos y sentar las bases de una relación de trabajo eficiente desde el primer momento.

**Problema actual:**
Cada vez que empiezo a trabajar con un cliente nuevo, dedico demasiado tiempo a intercambios de emails caóticos para recopilar información básica, los briefings que recibo son incompletos y me obligan a pedir aclaraciones varias veces, el alcance del proyecto suele no estar claro al inicio y genera revisiones no previstas, y cada cliente tiene una forma diferente de comunicarse que me obliga a adaptarme constantemente en lugar de seguir un proceso propio.

**Fase 1 – Propuesta y contrato: antes de empezar a trabajar:**
El onboarding de un cliente empieza antes de firmar el contrato. Diseña el proceso pre-contrato: plantilla de propuesta comercial que incluye alcance detallado del trabajo, entregables concretos, plazos por fase, precio y condiciones de pago, y lo que explícitamente NO está incluido (para gestionar expectativas desde el principio); plantilla de contrato de servicios freelance con las cláusulas esenciales: descripción del servicio, precio y forma de pago (señal inicial, pagos por hitos, pago final), política de revisiones (número de rondas incluidas y coste de las adicionales), propiedad intelectual (cuándo el cliente recibe los derechos), cláusula de confidencialidad, proceso de cancelación y qué ocurre con el trabajo realizado; y proceso de firma electrónica con herramienta recomendada (HelloSign, DocuSign o equivalente europeo) para tener un registro legal del acuerdo.

**Fase 2 – Cuestionario de inicio de proyecto:**
Una vez firmado el contrato, la recogida de información es crítica para empezar con el contexto necesario. Diseña el cuestionario de inicio de proyecto para el tipo de servicio que ofreces. Para un diseñador freelance, incluye preguntas sobre: la empresa (descripción en 3 frases, público objetivo, competidores principales, propuesta de valor única), el proyecto (objetivo principal medible, restricciones de formato o plataforma, referentes visuales que le gusten y que le desagraden), el proceso de trabajo (quién será el interlocutor principal, quién tiene la última palabra en aprobaciones, cómo prefiere dar feedback) y los plazos (fecha límite no negociable, hitos intermedios si los hay, eventos importantes relacionados con el proyecto). Adapta las preguntas según el tipo de servicio (diseño, desarrollo, consultoría, redacción).

**Fase 3 – Reunión de kickoff y definición de expectativas:**
La reunión de kickoff es el momento para alinear expectativas y establecer las reglas del juego. Diseña la agenda de la reunión de kickoff de 60 minutos: revisión del briefing y aclaración de dudas (20 min), definición del proceso de trabajo y comunicación (15 min: canal principal de comunicación, tiempo máximo de respuesta de cada parte, frecuencia de updates de progreso, formato de presentación de entregables), definición de la primera entrega y su fecha (10 min), y preguntas abiertas del cliente (15 min). Define también el documento de resumen post-kickoff que enviarás al cliente dentro de las 24 horas con los acuerdos por escrito.

**Fase 4 – Configuración del espacio de trabajo colaborativo:**
Un espacio de trabajo bien organizado reduce la fricción durante todo el proyecto. Diseña la estructura del espacio de trabajo que configurarás para cada cliente nuevo: carpeta compartida en Google Drive o Dropbox (estructura de subcarpetas: briefing y referencias, entregas en progreso, versiones aprobadas, activos del cliente), espacio de proyecto en Notion o ClickUp (timeline del proyecto, log de decisiones tomadas, registro de feedback de cada revisión, lista de pendientes con responsable), y canal de comunicación preferido (cuándo usar email vs. mensajería instantánea vs. videollamada según el tipo de comunicación). Define el proceso de archivo del proyecto al finalizar: entrega de archivos finales, factura final, testimonial y referencia.

**Fase 5 – Seguimiento post-proyecto y gestión de la relación a largo plazo:**
El onboarding es también el inicio de una relación a largo plazo. Diseña el proceso post-proyecto: encuesta de satisfacción 1 semana después de la entrega final (3-5 preguntas cortas + pregunta de testimonial), seguimiento a los 3 meses para preguntar cómo va el trabajo entregado y si hay nuevas necesidades, sistema de referral (cómo pedir referencias de forma natural y no incómoda), y proceso de reactivación de clientes inactivos (template de email para volver a conectar con clientes con los que no has trabajado en más de 6 meses).

**Formato de entrega:**
- Plantilla de propuesta comercial adaptable a distintos tipos de proyecto
- Cláusulas esenciales del contrato de servicios freelance
- Cuestionario de inicio de proyecto con preguntas por categoría
- Agenda de kickoff con plantilla de resumen post-reunión
- Estructura del espacio de trabajo colaborativo y checklist de configuración
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Proceso estructurado de incorporación de nuevos clientes para trabajadores freelance',
                'vote_score'        => 36,
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
