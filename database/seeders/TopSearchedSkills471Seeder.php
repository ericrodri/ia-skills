<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills471Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de apps de salud y bienestar con IA',
                'description'      => 'Estrategias de marketing con IA para apps de salud y bienestar: personalización de mensajes, segmentación por hábitos y campañas de adquisición y retención de usuarios.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en el sector de salud y bienestar digital. Tu objetivo es ayudarme a crear una estrategia de marketing con IA para una app de salud o bienestar, desde la adquisición de usuarios hasta su retención a largo plazo.

**Contexto del sector:**
Las apps de salud y bienestar tienen características únicas de marketing: los usuarios tienen alta motivación inicial pero baja retención, el journey de cambio de hábito es largo y requiere refuerzo constante, y la personalización es crítica para el engagement. La IA permite crear experiencias de marketing tan personalizadas como las del propio producto.

**Paso 1 — Definición del usuario y sus momentos de verdad:**
Para diseñar la estrategia, ayúdame a mapear:
- ¿Qué problema de salud o bienestar resuelve tu app? (sueño, nutrición, ejercicio, meditación, salud mental, etc.)
- ¿Cuál es el perfil del usuario ideal? (edad, motivación principal, barreras para cambiar hábitos)
- ¿Cuáles son los momentos de mayor motivación del usuario? (nuevo año, después de un diagnóstico médico, evento social próximo)
- ¿Cuándo suelen abandonar? (después del día 3, al final del mes de prueba gratuita, cuando pierden la racha)

**Paso 2 — Estrategia de adquisición personalizada con IA:**

Segmentación por intención y motivación:
- Segmento A: Motivación de salud (prevenir una enfermedad, recomendación médica)
- Segmento B: Motivación estética (cambio físico, evento especial)
- Segmento C: Motivación de rendimiento (atletas, biohackers, profesionales de alto rendimiento)
- Segmento D: Motivación emocional (estrés, ansiedad, calidad de vida)

Para cada segmento, diseña con IA:
- Mensaje principal y tono diferenciado
- Canal de adquisición prioritario
- Contenido de valor para captarles antes de la descarga
- Oferta de bienvenida personalizada

**Paso 3 — Onboarding y activación con IA:**
El onboarding es el momento más crítico en salud y bienestar. Diseña con IA:

Cuestionario de personalización inicial:
- Objetivo principal del usuario (qué quiere conseguir en 30 días)
- Barreras percibidas (qué le impidió lograrlo antes)
- Preferencias de formato (videos cortos, audio, texto, gamificación)
- Disponibilidad de tiempo por día

Con estas respuestas, el sistema genera:
- Plan personalizado de los primeros 7 días
- Mensaje de bienvenida que refleja los objetivos específicos del usuario
- Configuración de notificaciones adaptada a su horario
- Expectativas realistas calibradas a su perfil

**Paso 4 — Retención y prevención del abandono:**
Diseña el sistema de retención con IA:

Señales de riesgo de abandono:
- 2 días sin abrir la app
- Racha rota por primera vez
- Sesión anormalmente corta
- No completar el onboarding en el primer día

Para cada señal, diseña:
- Mensaje de reenganche personalizado (tono empático, no agresivo)
- Oferta de recuperación (bajar el nivel de dificultad, descanso intencional)
- Campaña de "segunda oportunidad" a los 7 y 30 días de inactividad

**Paso 5 — Campañas de contenido con IA:**
Genera un plan de contenido para redes sociales y email que:
- Educa al usuario sobre el área de salud de tu app (artículos, infografías, videos cortos)
- Celebra los logros de la comunidad (historias de transformación)
- Crea urgencia estacional (enero, verano, vuelta a la rutina)
- Combate las objeciones más frecuentes ("no tengo tiempo", "ya lo intenté antes")

Para cada tipo de contenido, genera con Claude:
- 5 titulares de alto engagement
- Estructura del contenido
- Call to action adaptado a la etapa del usuario (potencial cliente / usuario activo / usuario en riesgo)

**Paso 6 — Monetización y upsell:**
Diseña los mensajes de conversión de free a premium con IA:
- Momento óptimo para hacer el pitch de upgrade (después del primer logro, antes del vencimiento del trial)
- Mensajes personalizados según el uso del usuario en el free tier
- Estrategia de precio y oferta para cada segmento

**Entregables:**
Plan de marketing completo, 20 textos de comunicación listos para usar (ads, emails, notificaciones, posts) y un plan de contenido para 30 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear una estrategia de marketing personalizada con IA para apps de salud y bienestar, desde la adquisición hasta la retención a largo plazo.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de apps de bienestar con IA personalizada',
                'description'      => 'Guía técnica para integrar IA en apps de salud y bienestar: personalización de planes, análisis de datos de usuario, recomendaciones adaptativas y coaching inteligente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de aplicaciones móviles y web con integración de inteligencia artificial, especializado en el sector de salud y bienestar digital. Tu objetivo es guiarme en la arquitectura e implementación técnica de una app de bienestar con IA personalizada.

**Visión del producto:**
Quiero construir una app de bienestar que aprenda de cada usuario y adapte continuamente los planes, recomendaciones y coaching según su comportamiento, progreso y preferencias. La IA no es un chatbot genérico, sino el núcleo del producto.

**Paso 1 — Casos de uso de IA en apps de bienestar:**
Analiza y prioriza los siguientes casos de uso por impacto y complejidad de implementación:

Alta prioridad (impacto alto, implementación factible):
- Personalización del plan inicial según el perfil del usuario (objetivos, condición actual, historial)
- Ajuste adaptativo de la dificultad basado en el rendimiento del usuario
- Recomendaciones de contenido basadas en el comportamiento dentro de la app
- Análisis de patrones de uso para detectar usuarios en riesgo de abandono

Media prioridad (impacto alto, implementación compleja):
- Coaching conversacional con IA (responde preguntas, da feedback personalizado)
- Análisis de datos biométricos (sueño, frecuencia cardíaca, pasos desde wearables)
- Detección de patrones en el estado de ánimo y correlación con hábitos
- Generación de planes completamente personalizados con variabilidad

**Paso 2 — Arquitectura técnica del sistema de IA:**
Diseña la arquitectura para los tres componentes principales:

Motor de Personalización:
- Modelo de usuario: qué datos guardamos y cómo los estructuramos
- Pipeline de recomendación: collaborative filtering vs. content-based vs. híbrido
- Actualización del modelo: cómo aprende en tiempo real del comportamiento del usuario
- Herramientas: ¿construir con ML propio (scikit-learn, TensorFlow) o usar plataformas como AWS Personalize?

Sistema de Coaching con IA (LLM):
- Cuándo usar Claude API vs. un modelo fine-tuned propio
- System prompt para el coach de bienestar (límites de lo que puede recomendar médicamente)
- Gestión del contexto del usuario (historial, objetivos, progreso) en las conversaciones
- Latencia y coste: cómo mantener respuestas en menos de 2 segundos

Análisis de Datos de Salud:
- Integración con HealthKit (iOS) y Health Connect (Android)
- Procesamiento de datos de wearables (Fitbit, Garmin, Apple Watch)
- Detección de anomalías y alertas (sueño inusualmente corto, caída de pasos)
- Privacidad: procesamiento en el dispositivo vs. en el servidor

**Paso 3 — Implementación del motor de recomendación:**
Guíame paso a paso para implementar el sistema de recomendación de contenido:

Fase 1 — Reglas basadas en perfil (semanas 1-4):
- Definición de la taxonomía de contenido (categorías, dificultad, duración, formato)
- Reglas de filtrado por perfil inicial (objetivos, nivel, preferencias)
- A/B testing de las reglas iniciales

Fase 2 — Aprendizaje por comportamiento (semanas 5-12):
- Eventos a rastrear: visualizaciones completadas, abandono, valoraciones, repeticiones
- Modelo de colaboración: usuarios con comportamientos similares reciben recomendaciones similares
- Evaluación del modelo: métricas de calidad de las recomendaciones

Fase 3 — Personalización avanzada (mes 4+):
- Personalización del momento óptimo de notificación por usuario
- Predicción del contenido con mayor probabilidad de completar
- Detección proactiva de caída de engagement

**Paso 4 — Sistema de coaching conversacional:**
Implementa el chat de coaching con IA:

Arquitectura del coach:
- System prompt base con las capacidades y límites del coach (no es un médico)
- Contexto dinámico: cómo inyectar el perfil, historial y progreso del usuario en cada llamada
- Memoria de conversación: cómo recordar lo que el usuario compartió en sesiones anteriores
- Escalado a profesional: cuándo y cómo derivar a un profesional de salud real

Casos de uso del coach:
- Responder preguntas sobre nutrición, ejercicio, sueño
- Dar feedback motivacional después de completar un plan
- Ayudar a identificar barreras cuando el usuario expresa dificultades
- Generar variaciones de un plan cuando el usuario pide más o menos intensidad

**Paso 5 — Consideraciones de privacidad y seguridad:**
En salud digital, la privacidad es crítica:
- Datos que requieren consentimiento explícito vs. datos de uso estándar
- Anonimización y pseudonimización de datos de salud
- RGPD y HIPAA: qué aplica a tu app según la geografía y el tipo de datos
- Cifrado en reposo y en tránsito para datos biométricos
- Política de retención de datos de salud

**Entregables técnicos:**
Diagrama de arquitectura del sistema completo, stack tecnológico recomendado, código de ejemplo para la integración básica de Claude API como coach, y un plan de implementación en 16 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 80,
                'use_case'         => 'Diseñar e implementar la arquitectura de IA para una app de salud y bienestar con personalización adaptativa, coaching conversacional y análisis de datos biométricos.',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de bienestar digital con IA',
                'description'      => 'Diseña interfaces y experiencias de usuario para apps de salud y bienestar con IA: onboarding motivador, visualización de progreso, gamificación y diseño de hábitos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencias de usuario (UX/UI) especializado en aplicaciones de salud y bienestar digital. Tu objetivo es ayudarme a diseñar una experiencia que no solo sea visualmente atractiva, sino que use principios de diseño conductual e IA para ayudar a los usuarios a mantener hábitos saludables.

**El reto del diseño en bienestar:**
Las apps de salud tienen el problema del "efecto enero": alto engagement inicial que se desvanece rápidamente. El diseño debe combatir este efecto creando sistemas de hábito, motivación sostenida y experiencias tan personalizadas que el usuario sienta que la app le entiende de verdad. La IA es el habilitador de esa personalización.

**Paso 1 — Principios de diseño conductual para bienestar:**
Antes de diseñar pantallas, entiende los principios clave:

Teoría de formación de hábitos (Modelo de Hook):
- Detonante (trigger): ¿qué recuerda al usuario que use la app?
- Acción: ¿es el gesto de uso lo más simple posible?
- Recompensa variable: ¿hay sorpresa y variedad en los resultados?
- Inversión: ¿el usuario siente que ha invertido en la app (datos, contenido)?

Diseño para la motivación:
- Autonomía: el usuario siente que tiene control sobre su plan
- Competencia: el nivel de dificultad es el adecuado para sentirse capaz
- Relatedness: existe comunidad o referencia social

**Paso 2 — Diseño del onboarding:**
El onboarding es el momento de mayor abandono. Diseña con IA:

Pantallas de onboarding:
1. Bienvenida: foto de aspiración (el usuario que quiere ser), no del producto
2. Objetivo principal: selección visual y emocional del goal
3. Perfil inicial: mínimas preguntas imprescindibles (máximo 5)
4. Primera personalización visible: "Tu plan de los primeros 7 días está listo"
5. Quick win: una acción que completan en los primeros 3 minutos

Para cada pantalla, usa IA para generar:
- Los textos de microcopy que maximizan la completitud
- Las opciones de respuesta que generan más engagement
- El diseño emocional: colores, tipografía, imágenes por perfil de objetivo

**Paso 3 — Visualización del progreso con IA:**
El progreso visualizado es el mayor motivador de retención. Diseña:

Sistemas de progreso:
- Racha visual (streak): diseño que hace doler romperla
- Progreso hacia el objetivo: barra, anillo, árbol que crece, mapa que se completa
- Logros y badges: cuándo aparecen, cómo se animan, qué dicen
- Resumen semanal: la pantalla más poderosa para la retención (qué conseguiste esta semana)

Personalización del progreso con IA:
- La métrica principal que ve cada usuario es la más relevante para su objetivo
- Los mensajes de progreso son generados por IA con el nombre del usuario y sus logros específicos
- Las comparativas son con "el yo del pasado", nunca con otros usuarios (evita la comparación negativa)

**Paso 4 — Gamificación consciente:**
Diseña gamificación que no sea manipuladora sino que refuerce el hábito real:

Elementos de gamificación saludable:
- Puntos por consistencia (no solo por rendimiento): el hábito diario vale más que el logro puntual
- Desafíos opcionales: el usuario decide si quiere el extra de motivación
- Celebraciones de hitos reales: 7 días, 30 días, 100 sesiones (con animación especial)
- Comunidad: retos con amigos o grupos con objetivos similares

Lo que evitar (dark patterns en salud):
- Notificaciones de vergüenza ("¡Llevas 3 días sin entrenar!")
- Comparativas negativas con otros usuarios
- Urgencia artificial ("Tu racha termina en 2 horas")
- Gamificación que prima cantidad sobre calidad

**Paso 5 — Diseño del coach de IA:**
Diseña la interfaz del chat de coaching inteligente:

Interfaz del coach:
- Avatar del coach: ¿humano, abstracto o sin avatar?
- Tipología de mensajes: texto, respuestas rápidas, cards de acción
- Momentos de aparición del coach: proactivo vs. bajo demanda
- Tono y personalidad: cómo se comunica el coach según el perfil emocional del usuario

Flujos de conversación clave:
- Primer encuentro: presentación y definición del estilo de coaching preferido
- Check-in semanal: el coach pregunta cómo fue la semana y adapta el plan
- Momento de crisis: el usuario dice que quiere abandonar
- Celebración de logros: el coach celebra con el lenguaje y la intensidad correctos

**Paso 6 — Sistema de diseño para bienestar:**
Crea las bases del sistema de diseño:

Paleta de colores para bienestar:
- Cómo los colores afectan el estado emocional (verde para calma, naranja para energía)
- Paleta primaria, secundaria y semántica (éxito, alerta, error, información)
- Adaptación al modo oscuro (importante para apps de sueño)

Tipografía:
- Legibilidad en formatos de entrenamiento (texto grande, contraste alto)
- Tipografía emocional para mensajes motivacionales vs. informacionales

Iconografía y ilustración:
- Representación inclusiva del usuario (diversidad de cuerpos, edades, capacidades)
- Ilustraciones de estados emocionales

**Entregables:**
Mapa de flujos de usuario completo, sistema de diseño básico, wireframes de las 10 pantallas más críticas y 5 propuestas de microcopy para cada momento clave del journey.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar experiencias de usuario para apps de salud que usen principios conductuales e IA para mejorar la retención y el cambio de hábitos real.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de soluciones de salud digital con IA a empresas',
                'description'      => 'Estrategias y playbooks para vender programas de bienestar corporativo con IA a empresas: propuesta de valor, ROI demostrable y gestión de objeciones del área de RRHH.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B especializado en el sector de salud y bienestar corporativo. Tu objetivo es ayudarme a diseñar la estrategia y el playbook de ventas para vender soluciones de bienestar digital con IA a empresas, específicamente a los departamentos de RRHH y Bienestar.

**El mercado del bienestar corporativo:**
Las empresas invierten cada vez más en el bienestar de sus empleados, motivadas por reducir el absentismo, mejorar la productividad y atraer talento. Las soluciones de bienestar con IA ofrecen personalización masiva que las soluciones tradicionales (charlas, gimnasio corporativo) no pueden igualar. Pero vender a empresas requiere un playbook específico.

**Paso 1 — Definición del ICP (Ideal Customer Profile):**
Diseña el perfil del cliente ideal para tu solución de bienestar con IA:

Criterios de empresa:
- Tamaño: ¿empresas de qué tamaño tienen presupuesto y necesidad? (50-200 empleados, 200-1000, 1000+)
- Industria: ¿qué sectores tienen mayor índice de burnout o absentismo? (tecnología, consultoría, sanidad, manufactura)
- Situación: empresas que ya tienen un programa de bienestar existente vs. que están empezando

Criterios del comprador:
- Rol: RRHH Director, People Experience Manager, Head of Wellbeing, CEO en PYMEs
- Pain points: alta rotación, baja productividad, absentismo, resultados pobres de encuestas de clima
- Comportamiento de compra: ¿busca en Google, asiste a conferencias de RRHH, pide referidos?

**Paso 2 — Propuesta de valor diferenciada:**
Construye la narrativa de ventas con IA:

El problema:
- Los programas de bienestar genéricos tienen engagement medio del 12-15%
- No hay personalización: el mismo programa para el ejecutivo de 55 años y el desarrollador de 28
- El ROI es difícil de medir, lo que dificulta la renovación del presupuesto

Tu solución:
- Engagement del X% (tu dato) gracias a la personalización de IA
- ROI medible: reducción del absentismo, mejora de NPS de empleado, retención de talento
- Reporting para RRHH: dashboards de uso y bienestar a nivel equipo (sin datos individuales)

Para cada segmento del ICP, diseña con IA la propuesta de valor específica:
- Para empresas tech: "Reduce el burnout de tu equipo de ingeniería con planes personalizados según la carga de trabajo de cada desarrollador"
- Para manufactura: "Mejora la salud física de los equipos de turno con rutinas adaptadas a sus horarios rotativos"

**Paso 3 — Proceso de ventas B2B de bienestar:**
Diseña el proceso de venta completo:

Etapa 1 — Prospección:
- Canal principal: LinkedIn (RRHH directors), referidos de empresas cliente, eventos de RRHH
- Mensaje de outreach personalizado por sector y pain point
- Contenido de valor para generar confianza antes de la reunión (informe sobre burnout en su sector)

Etapa 2 — Discovery Call:
- Preguntas de diagnóstico: ¿cuál es su índice de absentismo actual? ¿Qué programas de bienestar tienen? ¿Cuál es el presupuesto per cápita de bienestar?
- Identificación del pain más urgente
- Mapeo de stakeholders: ¿quién influye en la decisión? (CEO, CFO, Comité de Dirección)

Etapa 3 — Demo y propuesta:
- Demo personalizada: muestra cómo usaría el producto un empleado de SU empresa (con su contexto)
- Propuesta económica: precio por empleado/mes, comparativa con ROI del absentismo reducido
- Piloto: propón un piloto de 3 meses con un equipo de 20-50 empleados para demostrar el valor

Etapa 4 — Cierre y negociación:
- Objeciones más frecuentes y respuestas validadas (ver paso 4)
- Comité de RRHH + Legal + Privacidad: cómo gestionar el proceso de due diligence
- Hitos de la implementación para darles seguridad

**Paso 4 — Manejo de objeciones de bienestar corporativo:**
Genera respuestas validadas para las 10 objeciones más frecuentes:
1. "Ya tenemos un programa de bienestar" → ¿cuál es el engagement actual?
2. "No podemos compartir datos de salud de empleados" → el sistema no requiere datos individuales identificables
3. "Es demasiado caro" → cálculo del coste del absentismo vs. precio de la solución
4. "Los empleados no lo usarán" → datos de engagement de clientes similares
5. "Necesitamos aprobación del comité de dirección" → kit de presentación al comité listo para usar
6. "Ya usamos una solución similar" → comparativa funcional y de resultados
7. "Preferimos soluciones locales / del sector" → casos de éxito en su sector y geografía
8. "Tenemos que consultarlo con el DPO" → documentación de RGPD lista para la revisión
9. "El presupuesto está cerrado para este año" → piloto de bajo coste para el Q4, implementación completa en enero
10. "No lo vemos como prioridad ahora mismo" → dato de impacto del burnout en productividad de su sector

**Paso 5 — Materiales de ventas generados con IA:**
Para cada etapa del proceso, crea con Claude:
- Email de prospección por sector (tech, salud, manufactura)
- Agenda de discovery call con las preguntas de diagnóstico
- Deck de presentación (estructura y narrativa de cada slide)
- Plantilla de propuesta comercial
- Kit de presentación al comité de dirección (para que tu champion lo use sin ti)
- Caso de éxito tipo: empresa, reto, solución, resultados en 1 página

**Entregables:**
Playbook de ventas completo, 5 emails de outreach por sector, plantilla de propuesta y guía de manejo de objeciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir el playbook de ventas B2B para cerrar contratos de bienestar corporativo con IA en empresas, desde la prospección hasta el cierre.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de apps de salud con IA',
                'description'      => 'Guía de product management para apps de salud con IA: definición de métricas de salud y bienestar, priorización ética de features y diseño de loops de retención.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Product Management especializado en aplicaciones de salud y bienestar digital. Tu objetivo es ayudarme a tomar las decisiones de producto más importantes para una app de bienestar con IA: qué construir, cómo medir el éxito real y cómo escalar sin comprometer la ética del producto.

**El dilema del PM en salud:**
Las apps de salud tienen un conflicto inherente: las métricas tradicionales de producto (DAU, tiempo en app, sesiones) pueden estar en conflicto con el bienestar real del usuario. Una app de meditación podría maximizar el tiempo en pantalla con contenido adictivo, pero eso sería lo contrario de su propósito. El PM de salud necesita un framework propio.

**Paso 1 — Framework de métricas de salud y bienestar:**
Diseña el sistema de métricas que distingue entre engagement superficial y valor real:

Métricas de vanidad (necesarias pero insuficientes):
- DAU/MAU, sesiones por usuario, tiempo en app, retención D7/D30

Métricas de resultado real (las que importan):
- Hábitos formados: usuarios que mantienen una frecuencia semanal sostenida durante 30+ días
- Progreso hacia el objetivo: % de usuarios que alcanzan hitos intermedios en sus metas
- Cambio de comportamiento medido: pasos, sueño, sesiones completadas con comparativa vs. baseline
- Health outcomes: autocuestionarios de bienestar subjetivo (cómo se siente el usuario) vs. baseline

Métricas de salud del negocio:
- Net Revenue Retention: ¿los usuarios renuevan y usan más?
- NPS: ¿recomiendan la app?
- Churn por cohort: ¿cuándo abandonan y por qué?

Para cada métrica, define:
- Cómo se mide técnicamente
- Cuál es el objetivo para considerarse "buena app"
- Cómo la IA puede mejorar esa métrica específica

**Paso 2 — Priorización de features en salud:**
Diseña el framework de priorización específico para salud:

Dimensiones de evaluación:
1. Impacto en resultado de salud (no en engagement): ¿cuánto ayuda al usuario a conseguir su objetivo?
2. Impacto en retención: ¿cuánto aumenta la probabilidad de que el usuario esté en la app en 90 días?
3. Viabilidad técnica: ¿podemos construirlo con calidad en el tiempo disponible?
4. Riesgo ético: ¿puede tener consecuencias negativas para la salud del usuario?
5. Diferenciación: ¿es una feature que el competidor no tiene?

Aplica el framework a estas features candidatas y priorízalas:
- Coach de IA que responde preguntas de salud en tiempo real
- Integración con wearables para adaptar el plan al sueño y ejercicio del día
- Sistema de racha y notificaciones de recordatorio
- Comunidad social para compartir logros con amigos
- Plan de nutrición personalizado con IA
- Análisis del estado de ánimo y correlación con hábitos

**Paso 3 — Diseño del loop de retención:**
El loop de retención en salud es diferente al de otras apps:

Loop de salud sostenible:
1. Acción: el usuario completa una sesión o registra un hábito
2. Recompensa inmediata: feedback positivo inmediato (animación, mensaje motivador, punto)
3. Progreso visible: el avance hacia el objetivo se hace visible
4. Personalización aprendida: la próxima sesión está adaptada al comportamiento anterior
5. Anticipación: el usuario sabe qué viene mañana y quiere volver

Cómo la IA refuerza el loop:
- Paso 2: el mensaje motivador está generado por IA con el nombre y logro específico del usuario
- Paso 4: el agente de recomendación ajusta la dificultad y el tipo de contenido
- Paso 5: la próxima sesión es generada dinámicamente, no seleccionada de un catálogo fijo

Señales de que el loop es saludable (no adictivo):
- Los usuarios usan la app la frecuencia que ellos eligieron, no más
- El engagement cae cuando el usuario ha conseguido su objetivo (lo cual es bueno)
- Los usuarios regresan después de pausas largas (la app los acepta de vuelta sin vergüenza)

**Paso 4 — Ética en el product management de salud:**
Define los principios éticos no negociables:

Qué nunca haríamos:
- Gamificación que explota el miedo a la pérdida (loss aversion) de forma manipuladora
- Datos de salud compartidos con terceros sin consentimiento explícito y granular
- Recomendaciones médicas sin el disclaimer de "esto no es consejo médico"
- Restricción de features importantes al tier de pago cuando afectan la salud básica

Qué sí haríamos:
- Pantallas de uso responsable que permiten al usuario autolimitarse
- Recordatorios de descanso para usuarios con uso excesivo
- Derivación a profesional cuando la IA detecta señales de alarma en las respuestas del usuario
- Transparencia sobre cómo funciona la IA de recomendación

**Paso 5 — Roadmap de los primeros 12 meses:**
Diseña el roadmap de producto con la filosofía de "construir menos, construir mejor":

Trimestre 1 (Core Foundation):
- Onboarding personalizado con IA
- Plan básico adaptativo
- Métricas de resultado configuradas y monitoreadas

Trimestre 2 (Engagement y Retención):
- Sistema de racha y logros
- Coach de IA en versión básica (FAQ inteligente)
- Integración con wearables (iOS Health / Android Health Connect)

Trimestre 3 (Personalización Avanzada):
- Coach de IA conversacional completo
- Planes dinámicos adaptados a datos biométricos en tiempo real
- Comunidad y retos sociales opcionales

Trimestre 4 (Escala y Monetización):
- Programa premium con features de IA avanzadas
- API para partners (seguros, empresas)
- Analítica avanzada de salud para el usuario

**Entregables:**
Framework de métricas completo, priorización razonada de las 6 features, diseño del loop de retención y roadmap de 12 meses con criterios de éxito por trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Tomar las decisiones de producto más importantes en una app de salud con IA: métricas de bienestar real, priorización ética y loops de retención sostenibles.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programas de bienestar laboral con IA para RRHH',
                'description'      => 'Diseña e implementa programas de bienestar laboral personalizados con IA: detección de burnout, planes de bienestar por perfil de empleado y medición del impacto en la organización.',
                'prompt_content'   => <<<'EOT'
Eres un experto en People Operations y bienestar laboral con especialización en el uso de inteligencia artificial para personalizar y medir programas de bienestar en las organizaciones. Tu objetivo es ayudarme a diseñar, implementar y medir un programa de bienestar laboral con IA.

**El estado del bienestar laboral:**
Las empresas invierten en bienestar pero los resultados son mediocres: el engagement con los programas ronda el 15%, el contenido es genérico y el impacto en el negocio es difícil de medir. La IA permite crear programas que se adaptan a cada persona, en lugar de ofrecer lo mismo a todos.

**Paso 1 — Diagnóstico de bienestar organizacional:**
Antes de diseñar el programa, necesito entender la situación actual. Ayúdame a crear:

Encuesta de diagnóstico de bienestar:
- Dimensiones a medir: bienestar físico, emocional, mental, social y financiero
- Preguntas de carga de trabajo y burnout (escala de Maslach adaptada)
- Identificación de factores de riesgo por departamento
- Baseline de métricas organizacionales (absentismo, rotación, días de baja)

Análisis con IA:
- Cómo usar Claude para sintetizar los resultados de la encuesta y detectar patrones
- Segmentación de empleados por perfil de riesgo y necesidad
- Identificación de equipos o departamentos que requieren intervención prioritaria
- Generación del informe de diagnóstico para la dirección (con privacidad garantizada)

**Paso 2 — Diseño del programa de bienestar personalizado:**
Con el diagnóstico, diseña un programa que tenga múltiples pistas según el perfil del empleado:

Pista A — Bienestar físico (empleados con sedentarismo o estrés físico):
- Retos de movimiento adaptados a la carga de trabajo del día
- Recordatorios de pausa activa integrados con el calendario
- Recursos de nutrición para trabajadores de turno o teletrabajadores

Pista B — Bienestar mental y emocional (empleados con señales de burnout):
- Técnicas de mindfulness y gestión del estrés (5-10 minutos por día)
- Check-ins de estado de ánimo con derivación a EAP si es necesario
- Recursos de gestión de la carga de trabajo y priorización

Pista C — Bienestar social (empleados con baja conexión o trabajo remoto):
- Actividades de team building virtual y presencial
- Sistemas de reconocimiento entre compañeros
- Comunidades de interés dentro de la empresa

Pista D — Bienestar financiero (empleados con estrés financiero):
- Recursos de educación financiera adaptados al nivel de ingresos
- Acceso a adelantos de nómina o beneficios financieros flexibles
- Planificación de beneficios fiscales y retiro

**Paso 3 — IA para la personalización del programa:**
Diseña el motor de personalización:

Motor de asignación inicial:
- Con las respuestas de la encuesta de diagnóstico, el sistema asigna automáticamente a cada empleado las pistas más relevantes
- Plantilla de email de bienvenida personalizado según el perfil del empleado

Adaptación continua:
- El programa se ajusta según el uso y el feedback del empleado
- Si un empleado completa consistentemente los retos de ejercicio, se aumenta la dificultad
- Si hay señales de deterioro emocional en los check-ins, se activa la derivación al EAP

Coach de bienestar con IA:
- Responde preguntas sobre los recursos del programa
- Propone actividades según el estado de ánimo reportado
- Conecta al empleado con el EAP o con el manager si hay señales de alarma

**Paso 4 — Comunicación del programa:**
Diseña la estrategia de comunicación para maximizar el engagement:

Lanzamiento:
- Email de lanzamiento del programa (genera la versión personalizada por departamento)
- Sesión de presentación con el equipo directivo (guión y deck)
- Kit para managers: cómo presentar el programa a su equipo

Comunicación continua:
- Newsletter mensual de bienestar con contenido relevante para cada perfil
- Notificaciones de recordatorio adaptadas al horario y preferencias del empleado
- Celebración de hitos del programa (primer mes, racha de 10 días, etc.)

**Paso 5 — Medición del impacto:**
Define el sistema de medición del ROI del programa:

Métricas de uso:
- Tasa de engagement con el programa (usuarios activos / empleados totales)
- Frecuencia de uso por módulo
- Satisfacción con el programa (NPS del programa)

Métricas de resultado:
- Reducción del absentismo (% de días de baja antes y después)
- Mejora del bienestar subjetivo (encuesta trimestral de bienestar)
- Rotación voluntaria antes y después del programa
- Resultados de encuesta de engagement (Gallup Q12 o similar)

Presentación del ROI a dirección:
- Fórmula del ROI de bienestar: coste del programa vs. coste del absentismo evitado
- Plantilla de presentación del impacto al comité de dirección

**Consideraciones éticas:**
- Todos los datos de bienestar son confidenciales y no llegan al manager directo
- La participación es siempre voluntaria
- El sistema no usa los datos de bienestar para decisiones de RRHH (evaluaciones, despidos)
- Transparencia sobre cómo funciona la IA de recomendación

**Entregables:**
Diseño completo del programa, encuesta de diagnóstico lista para usar, plantillas de comunicación para el lanzamiento, plan de medición de impacto y modelo de ROI de bienestar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar un programa de bienestar laboral personalizado con IA que detecte riesgos de burnout y mida el impacto real en la organización.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del mercado de salud digital con IA',
                'description'      => 'Aprende a analizar oportunidades de inversión y modelos de negocio en el sector de salud digital con IA: métricas del sector, due diligence y proyecciones financieras.',
                'prompt_content'   => <<<'EOT'
Eres un experto en análisis financiero y due diligence especializado en el sector de salud digital y healthtech. Tu objetivo es ayudarme a analizar las oportunidades financieras en el mercado de salud digital con IA: modelos de negocio, métricas de valoración, riesgos específicos del sector y proyecciones.

**El mercado de salud digital:**
El mercado global de salud digital supera los 200 mil millones de dólares y crece al 15-20% anual. La IA está siendo el principal catalizador de nuevos modelos de negocio: desde apps de bienestar personal hasta sistemas de diagnóstico asistido por IA para clínicas. Para un analista financiero, entender este mercado requiere métricas y frameworks específicos.

**Paso 1 — Taxonomía del mercado de salud digital:**
Analiza los subsegmentos del mercado para identificar oportunidades:

Por modelo de negocio:
- B2C — Apps de bienestar y salud para consumidores (fitness, nutrición, sueño, salud mental)
- B2B — Soluciones para empresas (bienestar corporativo, telemedicina empresarial)
- B2B2C — Soluciones para aseguradoras y seguros de salud que llegan al paciente
- B2B Healthcare — Soluciones para clínicas, hospitales y sistemas de salud

Por tipo de IA aplicada:
- IA de personalización (planes y recomendaciones adaptativas)
- IA de diagnóstico (análisis de imágenes, ECG, detección de enfermedades)
- IA conversacional (chatbots de salud mental, coaching, triaje)
- IA predictiva (predicción de riesgos de salud, readmisiones hospitalarias)

Análisis de cada segmento:
- Tamaño del mercado (TAM, SAM, SOM)
- Tasas de crecimiento y drivers
- Dinámica competitiva (fragmentado vs. consolidado)
- Barreras de entrada (regulación, datos, distribución)
- Márgenes típicos y modelos de monetización

**Paso 2 — Métricas financieras específicas de healthtech:**
Las métricas estándar de SaaS necesitan ajuste para salud digital:

Métricas de engagement (proxy de valor clínico):
- MAU/DAU ratio: en salud, el ratio óptimo es diferente (uso semanal puede ser ideal)
- Adherence rate: porcentaje de usuarios que siguen el plan recomendado (correlaciona con outcomes)
- Completion rate: porcentaje de programas o planes completados
- Health outcome improvement: cambio medible en la métrica de salud del usuario

Métricas económicas:
- ARPU (Average Revenue Per User): comparativa por segmento y modelo
- CAC en salud: el coste de adquisición es más alto (decisión de compra más reflexiva)
- LTV en salud: el LTV es más alto que en entretenimiento pero más bajo que en servicios financieros
- Churn en salud: patrones específicos (efecto enero, abandono después del primer mes)
- NRR (Net Revenue Retention): en B2B, el indicador más importante de la salud del negocio

Métricas de regulación y riesgo:
- Certificaciones obtenidas o en proceso (FDA clearance, CE marking, certificación HIPAA)
- Cobertura de seguros: ¿el producto está cubierto por seguro? (cambia radicalmente el modelo)
- Pipeline de I+D regulatorio: tiempo y coste estimado hasta la certificación

**Paso 3 — Due diligence financiero de una empresa de salud digital:**
Diseña el framework de due diligence para una inversión o adquisición:

Análisis de ingresos:
- Calidad de los ingresos: recurrentes vs. transaccionales, contratados vs. spot
- Concentración de clientes: ¿hay dependencia de pocos clientes grandes?
- Tasa de crecimiento: orgánica vs. inorgánica, comparada con el benchmark del sector
- Pipeline comercial: calidad y velocidad de cierre

Análisis de costes y márgenes:
- Estructura de costes: cloud, contenido, médicos asesores, I+D regulatorio
- Unit economics: margen de contribución por usuario, por contrato, por segmento
- Evolución de márgenes con escala: ¿hay economías de escala en el modelo?

Análisis de riesgos:
- Riesgo regulatorio: ¿podría una nueva normativa cambiar el modelo de negocio?
- Riesgo tecnológico: ¿hay dependencia de un proveedor de IA (OpenAI, Google)?
- Riesgo de privacidad: historial de brechas de datos o incidentes de seguridad
- Riesgo de reputación: ¿ha habido controversias sobre claims de salud no demostrados?

**Paso 4 — Modelos de valoración para healthtech:**
Aplica los modelos de valoración más adecuados:

Múltiplos de mercado:
- ARR multiple para SaaS de salud (diferencia entre B2C y B2B)
- EV/Revenue para empresas en fases tempranas sin EBITDA positivo
- Comparables recientes en el mercado de M&A de healthtech

DCF con ajuste de riesgo:
- Tasa de descuento ajustada a riesgos regulatorios y de adopción
- Escenarios: base, optimista (certificación obtenida, cobertura de seguro) y pesimista

Value drivers específicos de IA en salud:
- Propietariedad de los datos (un modelo entrenado con datos propios tiene una valoración prime)
- Barreras de switching derivadas de la personalización de la IA
- Expansibilidad del modelo a nuevas indicaciones o mercados geográficos

**Paso 5 — Proyecciones financieras para una startup de salud digital:**
Construye el modelo financiero base:
- Supuestos de crecimiento de usuarios por canal de adquisición
- Evolución del ARPU con el tiempo (freemium → premium, individual → enterprise)
- Curva de costes: cuándo llega el breakeven y bajo qué supuestos
- Proyecciones de Series A, B y C: qué hitos financieros justifican cada ronda

**Entregables:**
Mapa del mercado de salud digital con análisis de oportunidades, framework de due diligence adaptado al sector, plantilla de modelo financiero y análisis de valoración con múltiplos de mercado actualizados.

Nota: este análisis es de referencia. Las decisiones de inversión requieren due diligence profesional completo y asesoramiento financiero especializado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Analizar oportunidades financieras en el mercado de salud digital con IA: modelos de negocio, métricas del sector, due diligence y valoración.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para apps de salud y datos médicos con IA',
                'description'      => 'Guía legal para desarrollar apps de salud con IA: RGPD de datos de salud, responsabilidad médica de la IA, certificaciones regulatorias y términos de uso específicos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en derecho digital y regulación de tecnologías de la salud. Tu objetivo es guiarme a través del marco legal aplicable al desarrollo y operación de una app de salud o bienestar con inteligencia artificial en Europa.

**La importancia del marco legal en salud digital:**
Las apps de salud con IA operan en la intersección de varias de las normativas más estrictas: el RGPD (con su categoría especial de datos de salud), el Reglamento de IA de la UE, la regulación de productos sanitarios (MDR) y las normas de responsabilidad civil. Un error legal en este sector puede significar multas millonarias, retirada del mercado o responsabilidad por daños a la salud de los usuarios.

**Importante:** este documento es una guía de orientación. Toda decisión legal debe ser validada por un abogado especializado en salud digital y regulación tecnológica.

**Paso 1 — Clasificación de tu app: ¿producto sanitario o no?**
La primera pregunta legal crítica es si tu app es un producto sanitario (Medical Device):

Criterios del MDR (Medical Device Regulation - UE 2017/745):
- ¿La app tiene una función de diagnóstico, prevención, monitorización, predicción o tratamiento de una enfermedad?
- ¿Las recomendaciones de la app podrían influir en decisiones clínicas?
- ¿La app procesa datos biométricos para sacar conclusiones sobre el estado de salud?

Si la respuesta a cualquiera es sí, la app puede clasificarse como Software as Medical Device (SaMD):
- Clase I (riesgo bajo): apps de bienestar general, fitness, diario de síntomas sin diagnosis
- Clase IIa (riesgo medio): apps de monitorización de enfermedades crónicas
- Clase IIb/III (riesgo alto): apps de diagnóstico o apoyo a decisiones clínicas críticas

Implicaciones según la clasificación:
- Clase I: declaración de conformidad propia, marcado CE simplificado
- Clase IIa+: auditoría por organismo notificado, sistema de gestión de calidad (ISO 13485)
- Registro en EUDAMED (base de datos europea de productos sanitarios)

**Paso 2 — RGPD y datos de salud:**
Los datos de salud son una categoría especial del RGPD (Art. 9) con protección reforzada:

Datos de salud en apps de bienestar:
- Datos de salud explícitos: diagnósticos, medicamentos, condiciones médicas
- Datos de salud inferidos: frecuencia cardíaca, sueño, actividad física que permiten inferir el estado de salud
- Datos de comportamiento de salud: hábitos alimentarios, uso de la app en el contexto de salud

Bases legales para el tratamiento:
- Consentimiento explícito (Art. 9.2.a): la base más común, pero también la más frágil (revocable)
- Interés vital (Art. 9.2.c): solo en emergencias
- Fines de medicina preventiva (Art. 9.2.h): requiere supervisión de profesional de salud

Obligaciones específicas:
- Evaluación de Impacto en Protección de Datos (EIPD): obligatoria para datos de salud a escala
- Delegado de Protección de Datos (DPD): obligatorio si tratas datos de salud a gran escala
- Transparencia: los usuarios deben entender exactamente qué datos se tratan y para qué
- Pseudonimización de datos: separar la identidad del usuario de sus datos de salud

**Paso 3 — Reglamento de IA de la UE (AI Act):**
El AI Act clasifica los sistemas de IA por riesgo:

IA de alto riesgo en salud (Anexo III):
- IA para diagnóstico o apoyo a decisiones clínicas
- IA para predicción de riesgos de salud usada en seguros o crédito
- IA en dispositivos médicos regulados

Obligaciones para IA de alto riesgo:
- Sistema de gestión de riesgos documentado
- Calidad y representatividad de los datos de entrenamiento
- Supervisión humana significativa de las decisiones de IA
- Transparencia: el usuario debe saber que interactúa con IA
- Registro en la base de datos de la UE antes del lanzamiento

IA de riesgo limitado (apps de bienestar general):
- Obligación de transparencia: informar que el contenido es generado por IA
- Prohibición de manipulación subliminal

**Paso 4 — Responsabilidad civil y disclaimers:**
La responsabilidad por daños causados por la IA en salud es compleja:

Tipos de responsabilidad:
- Responsabilidad del producto: ¿la app es un producto defectuoso?
- Responsabilidad por negligencia: ¿la empresa fue negligente en el diseño o la supervisión?
- Responsabilidad directa vs. indirecta: ¿el usuario tomó la decisión final?

Estrategias de mitigación:
- Disclaimers claros: "Esta app no proporciona consejo médico. Consulta a un profesional de salud"
- Limitación de indicaciones: el sistema solo funciona para fines específicos declarados
- Supervisión profesional: vincular ciertas funciones a la supervisión de un profesional
- Auditoría continua del sistema de IA: documentar que se detectan y corrigen errores

Diseño de los términos de uso y política de privacidad:
- Secciones obligatorias para una app de salud con IA
- Lenguaje claro y accesible (no solo legalmente correcto, sino comprensible)
- Gestión del consentimiento: granular, revocable, documentado

**Paso 5 — Checklist legal de lanzamiento:**
Crea el checklist completo antes del lanzamiento:

Pre-lanzamiento:
- Clasificación de la app como SaMD o no (con soporte de asesor regulatorio)
- EIPD completada y documentada
- Política de privacidad específica para datos de salud
- Términos de uso con disclaimers médicos
- Contrato DPA con todos los proveedores que acceden a datos de usuarios
- Sistema de gestión de brechas de datos implementado

Si es SaMD:
- Sistema de gestión de calidad ISO 13485
- Documentación técnica del MDR
- Expediente de conformidad CE
- Registro en EUDAMED

Post-lanzamiento:
- Plan de vigilancia post-mercado (seguimiento de incidentes)
- Proceso de notificación de incidentes graves a las autoridades
- Revisión legal anual del marco regulatorio aplicable

Diseña este checklist con los puntos más críticos ordenados por prioridad y riesgo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Navegar el marco legal aplicable a una app de salud con IA en Europa: RGPD de datos de salud, AI Act, regulación de productos sanitarios y responsabilidad civil.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte especializado para apps de salud con IA',
                'description'      => 'Diseña el sistema de soporte para usuarios de apps de salud con IA: gestión de preguntas sensibles, protocolo de derivación a profesionales y comunicación empática en contextos de bienestar.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success especializado en el sector de salud y bienestar digital. Tu objetivo es ayudarme a diseñar el sistema de soporte al cliente para una app de salud con IA, teniendo en cuenta las particularidades de este sector: usuarios vulnerables, preguntas médicas sensibles y la necesidad de balancear la automatización con la empatía humana.

**Las particularidades del soporte en salud:**
El soporte de una app de salud es diferente al soporte estándar porque los usuarios pueden estar en situaciones vulnerables, hacer preguntas que requieren criterio médico, o presentar señales de alarma que necesitan derivación inmediata. La automatización con IA puede ser muy eficiente, pero requiere límites muy claros y protocolos de escalado bien definidos.

**Paso 1 — Clasificación de tickets en salud:**
Diseña la taxonomía de tickets específica para apps de salud:

Categoría A — Técnico (completamente automatizable):
- Problemas de acceso a la cuenta, contraseña, sincronización
- Preguntas sobre funcionalidades de la app
- Gestión de suscripción y facturación
- Problemas de conexión con wearables

Categoría B — Contenido y programa (automatizable con IA):
- Dudas sobre el plan o las recomendaciones de la app
- Peticiones de ajuste del nivel de dificultad
- Preguntas sobre nutrición, ejercicio o sueño de carácter general
- Feedback sobre el contenido

Categoría C — Médico o sensible (siempre requiere humano especializado):
- Preguntas que implican un diagnóstico o condición médica
- Usuario que reporta síntomas físicos preocupantes
- Preguntas sobre medicamentos o interacciones
- Usuarios en situaciones de crisis (estrés extremo, comentarios sobre no querer continuar)

Categoría D — Urgente (protocolo de crisis inmediata):
- Cualquier señal de riesgo para la vida del usuario o de terceros
- Referencias a autolesión o pensamientos suicidas
- Situaciones de emergencia médica

**Paso 2 — Protocolo de gestión de preguntas médicas:**
Define exactamente qué puede y no puede responder el equipo de soporte:

Lo que el soporte PUEDE hacer:
- Explicar cómo funciona el programa y qué hace la IA
- Recordar al usuario que la app no es un sustituto del consejo médico
- Derivar a recursos de salud pública o profesionales de referencia
- Ajustar el programa según las preferencias del usuario

Lo que el soporte NO PUEDE hacer:
- Interpretar síntomas o sugerir diagnósticos
- Recomendar o desaconsejar medicamentos
- Dar consejo médico aunque el usuario lo pida explícitamente
- Asegurar que el programa es adecuado para condiciones médicas específicas

Protocolo de respuesta a pregunta médica:
1. Agradecer la confianza del usuario
2. Explicar con empatía que la app no puede proporcionar asesoramiento médico
3. Ofrecer alternativas concretas (médico de cabecera, teléfono de salud pública, recurso específico)
4. Ofrecer lo que sí se puede hacer desde la app (ajustar el programa, proporcionar información general)

**Paso 3 — Protocolo de crisis:**
Diseña el protocolo para cuando un usuario presenta señales de alarma:

Señales de alerta en comunicaciones:
- Expresiones de desesperanza o falta de sentido
- Comentarios sobre no querer continuar (ambigüedades que requieren clarificación)
- Referencias a dolor físico severo o síntomas de alarma
- Mensajes de crisis explícitos

Protocolo de respuesta:
1. Respuesta humana inmediata (nunca automatizada en estas situaciones)
2. Respuesta empática y de validación (el agente no intenta resolver el problema, primero conecta)
3. Derivación a recursos específicos: teléfono de la esperanza (717 003 717), urgencias, profesional de referencia
4. Seguimiento: el agente monitoriza el ticket durante 48 horas
5. Reporte interno: notificación al equipo de bienestar de la empresa para revisar el caso

**Paso 4 — Comunicación empática en soporte de salud:**
El tono y el lenguaje son especialmente críticos en salud. Diseña guías de comunicación:

Principios de comunicación empática:
- Validar antes de resolver: "Entiendo que esto puede ser frustrante..."
- Lenguaje de bienestar: evitar términos que generen vergüenza o culpa
- Neutralidad sin frialdad: profesional pero cercano
- Reconocer el esfuerzo del usuario: los usuarios de apps de salud están intentando mejorar, merecer reconocimiento

Respuestas tipo para situaciones comunes:
- Usuario frustrado porque no ve resultados: validar, contextualizar el tiempo de cambio de hábitos, ofrecer ajuste del programa
- Usuario que quiere cancelar porque no le funciona: empatía, pregunta diagnóstica, oferta de alternativa antes de cancelar
- Usuario que pregunta si la app es buena para su condición médica: derivar a profesional con calidez
- Usuario que lleva semanas sin usar la app y reaparece: bienvenida sin culpa, reenganche amable

**Paso 5 — Diseño del sistema de soporte con IA:**
Configura el sistema de soporte respetando los límites:

Flujo de triage automático:
1. Ticket llega al sistema
2. IA clasifica en A, B, C o D
3. A y B van al agente de respuesta automática o al asistente de agente
4. C va directamente al agente humano especializado
5. D activa el protocolo de crisis inmediatamente

Entrenamiento del agente de IA:
- Qué respuestas puede dar el agente de IA (categoría A y B estricto)
- Palabras clave que deben siempre derivar al humano (lista de trigger words)
- Respuesta automática cuando detecta una situación de categoría C: "Gracias por compartir esto con nosotros. Vamos a conectarte con un miembro de nuestro equipo que puede ayudarte mejor..."

Métricas de calidad específicas para salud:
- Tasa de escalado correcto (¿el sistema detecta los casos sensibles?)
- Tiempo de respuesta en tickets de categoría C y D
- Satisfacción del usuario después de una interacción sensible (encuesta opcional)
- Zero tolerance: cualquier caso de crisis no detectado es un incidente crítico

**Entregables:**
Taxonomía de tickets con ejemplos, protocolo de gestión de preguntas médicas, protocolo de crisis completo, guía de comunicación empática con 20 respuestas tipo y configuración del sistema de soporte con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar el sistema de soporte para apps de salud con IA: gestión de preguntas médicas sensibles, protocolo de crisis y comunicación empática.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer especializado en salud digital con IA',
                'description'      => 'Guía para freelancers que quieren especializarse en el sector de salud digital con IA: cómo posicionarte, encontrar clientes, definir servicios y construir credibilidad en el sector.',
                'prompt_content'   => <<<'EOT'
Eres un experto en estrategia de carrera y posicionamiento para freelancers digitales. Tu objetivo es ayudarme a construir una carrera como freelancer especializado en el sector de salud digital con inteligencia artificial: cómo posicionarme, qué servicios ofrecer, cómo encontrar clientes y cómo construir credibilidad en un sector que requiere confianza.

**La oportunidad del freelancer en salud digital:**
El mercado de salud digital crece al 15-20% anual y las startups y scaleups del sector necesitan profesionales especializados: diseñadores de UX para apps de salud, desarrolladores con experiencia en datos médicos, marketers que entiendan el sector regulado, consultores de producto que conozcan las métricas específicas. La combinación de especialización en salud + IA es una de las más escasas y mejor remuneradas del mercado actual.

**Paso 1 — Análisis de tu punto de partida:**
Para diseñar tu posicionamiento, necesito entender tu situación actual:
- ¿Cuál es tu especialidad actual como freelancer? (diseño, desarrollo, marketing, consultoría de producto, legal, etc.)
- ¿Tienes alguna experiencia previa en el sector salud, aunque sea indirecta?
- ¿Has trabajado con datos o sistemas regulados (financiero, legal, sanitario)?
- ¿Qué herramientas de IA usas actualmente en tu trabajo?
- ¿Cuál es tu tarifa actual y cuál es tu objetivo de tarifa en 12 meses?

**Paso 2 — Definición de tu nicho de especialización:**
La especialización en salud digital puede tener múltiples ángulos:

Por tipo de cliente:
- Startups de healthtech (apps de consumo, wearables, telemedicina)
- Empresas de bienestar corporativo
- Clínicas y consultas médicas que digitalizan sus servicios
- Aseguradoras de salud que desarrollan productos digitales
- Farmacéuticas con iniciativas de salud digital

Por tipo de servicio:
- Diseño de UX/UI para apps de salud (alta demanda, alta tarifa)
- Desarrollo de integraciones de IA para salud (la especialidad más escasa)
- Estrategia de contenido y marketing para healthtech
- Consultoría de producto para apps de bienestar
- Asesoramiento legal en regulación de salud digital

Combinación ideal (tu sweet spot):
Con tu especialidad actual + conocimiento de salud digital + expertise en IA, tu nicho puede ser: "[tu especialidad] para startups de [subsegmento de salud] que quieren [resultado específico con IA]".

**Paso 3 — Plan de construcción de credibilidad:**
En salud, la credibilidad es más importante que en otros sectores. Diseña un plan de 6 meses:

Meses 1-2 — Formación y fundamentos:
- Cursos: regulación de salud digital (MDR, RGPD en salud), fundamentos de salud y bienestar, IA aplicada a salud
- Lectura: los 10 libros o recursos más importantes del sector
- Comunidades: grupos de LinkedIn, Slack y eventos de healthtech en tu país

Meses 3-4 — Primeros proyectos y casos de estudio:
- Proyecto pro-bono para una ONG de salud o un proyecto de salud pública
- Proyecto personal: crea una app o herramienta de bienestar con IA para demostrar tu know-how
- Contribución open source: participa en un proyecto de salud digital de código abierto

Meses 5-6 — Visibilidad y primeros clientes:
- Contenido: artículo mensual sobre IA aplicada a salud en tu especialidad (LinkedIn o Medium)
- Red: conecta con founders de healthtech en LinkedIn con mensajes de valor, no de venta
- Primer cliente: un proyecto pequeño en el sector para construir el caso de estudio

**Paso 4 — Definición de servicios y tarifas:**
Diseña tu catálogo de servicios para salud digital:

Servicio 1 — Auditoría o consultoría de entrada (tarifa fija, bajo riesgo para el cliente):
- Diagnóstico de [tu especialidad] para una app de salud existente
- Duración: 2-4 semanas
- Precio: 1.500-3.000€ (precio de entrada al sector)

Servicio 2 — Proyecto de implementación (tu servicio principal):
- [Tu especialidad] aplicada a una app de salud con IA
- Duración: 1-3 meses
- Precio: tarifa mensual de 4.000-8.000€ según la complejidad

Servicio 3 — Retainer de soporte continuo:
- Asesoramiento mensual como experto en [tu especialidad] para un equipo de salud digital
- Duración: retainer mensual renovable
- Precio: 2.000-4.000€/mes

Para cada servicio, diseña con IA:
- Descripción del servicio para el cliente (en lenguaje del cliente, no tuyo)
- Los 3 resultados concretos que el cliente obtiene
- Criterios para decidir si un prospecto es un cliente ideal

**Paso 5 — Estrategia de captación de clientes:**
Diseña el sistema de captación para el nicho de salud digital:

Canal 1 — LinkedIn (el más efectivo para healthtech):
- Optimización del perfil con keywords de salud digital e IA
- Estrategia de contenido: 2 posts semanales sobre tu perspectiva en el nicho
- Outreach: cómo contactar a founders de healthtech de forma que aporte valor

Canal 2 — Plataformas de freelancing especializadas:
- Toptal, Malt, Workmeli: cómo posicionarte en el nicho de salud

Canal 3 — Comunidad y eventos:
- Eventos de healthtech (Mobile Health Congress, HealthTech Hub)
- Grupos de Slack de healthtech founders
- Contribución a newsletters del sector como experto invitado

**Paso 6 — Operaciones del negocio freelance de salud:**
Diseña los procesos específicos para trabajar en salud:

Contratos y confidencialidad:
- Cláusula NDA reforzada para datos de salud
- Cláusula de propiedad intelectual de los sistemas de IA desarrollados
- Cláusula de responsabilidad limitada para recomendaciones de producto (no eres médico)

Flujo de trabajo con clientes de salud:
- Briefing inicial más profundo (entender el contexto regulatorio del cliente)
- Revisión legal de los entregables antes de la entrega final
- Post-entrega: documentación más exhaustiva que en otros sectores

**Entregables:**
Plan de posicionamiento en el nicho, catálogo de servicios con precios, plan de construcción de credibilidad de 6 meses, estrategia de captación por canal y plantillas de contrato adaptadas al sector de salud digital.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir una carrera como freelancer especializado en salud digital con IA: posicionamiento, servicios, captación de clientes y credibilidad en el sector.',
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
