<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills496Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Growth hacking con IA para Marketing',
                'description'      => 'Diseña experimentos de crecimiento rápidos, optimiza funnels y construye growth loops virales usando IA para escalar tu base de usuarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en growth hacking con más de diez años de experiencia en startups de alto crecimiento. Tu especialidad es diseñar experimentos de crecimiento rápidos, identificar palancas de activación y construir sistemas de retención escalables usando inteligencia artificial.

Necesito que me ayudes a construir una estrategia completa de growth hacking para mi producto/servicio. El contexto de mi negocio es el siguiente: [describe aquí tu producto, mercado objetivo, métricas actuales como CAC, LTV, tasa de activación, y principal cuello de botella de crecimiento].

**Fase 1: Diagnóstico del funnel actual**

Analiza el funnel de adquisición, activación y retención de mi negocio. Para cada etapa, identifica:
- Las métricas clave que debo medir (define las fórmulas exactas)
- Los síntomas de fricción más comunes en productos similares al mío
- Las hipótesis de mejora priorizadas por impacto potencial vs. esfuerzo de implementación
- El experimento mínimo viable para testear cada hipótesis en menos de dos semanas

**Fase 2: Diseño de experimentos de crecimiento**

Propón un backlog de diez experimentos de growth ordenados por el framework ICE (Impact, Confidence, Ease). Para cada experimento incluye:
- Hipótesis clara en formato "Si hacemos X, entonces Y mejorará en Z%"
- Métrica primaria y métrica de guardia (para detectar efectos negativos)
- Tamaño de muestra mínimo para obtener significancia estadística
- Duración recomendada del experimento
- Criterio de éxito vs. criterio de fallo

**Fase 3: Construcción de growth loops virales**

Diseña dos growth loops virales específicos para mi modelo de negocio:
- Loop de referidos: mecánica, incentivos, punto de activación y tasa de viralidad objetivo (K-factor > 0.3)
- Loop de contenido generado por usuarios: cómo el uso del producto crea activos que atraen nuevos usuarios

Para cada loop describe el ciclo completo paso a paso, los puntos de palanca donde la IA puede automatizar o personalizar la experiencia, y las métricas de seguimiento semanales.

**Fase 4: Optimización de métricas de activación**

El momento "aha" es el evento que predice con mayor precisión la retención a largo plazo. Ayúdame a:
- Identificar qué eventos de comportamiento en los primeros siete días correlacionan con retención a 30 días
- Diseñar un flujo de onboarding que lleve al usuario al momento "aha" en menos de diez minutos
- Crear una secuencia de correos de activación (días 1, 3, 7, 14) personalizados según el comportamiento del usuario
- Definir segmentos de riesgo de churn y triggers de reactivación automática

**Fase 5: Dashboard de growth y cadencia de revisión**

Propón la estructura del weekly growth meeting:
- Las cinco métricas que deben revisarse cada lunes
- El formato de presentación de resultados de experimentos (con plantilla)
- El proceso de decisión: pivotar, perseverar o abandonar un experimento
- Cómo documentar los aprendizajes para construir un knowledge base de growth

Al finalizar, genera un roadmap de noventa días con los hitos de crecimiento esperados, los recursos necesarios (herramientas, personas) y los riesgos principales a mitigar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategia de growth hacking con experimentos rápidos y growth loops virales',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Growth hacking con IA para Desarrollo de software',
                'description'      => 'Implementa loops de retención técnicos, optimiza métricas de activación en el producto y diseña experimentos A/B en el código usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software especializado en product-led growth y experimentación técnica. Tu experiencia abarca feature flags, A/B testing a nivel de código, instrumentación de métricas y optimización de rendimiento orientada a retención de usuarios.

Necesito tu ayuda para convertir mi aplicación [describe la tecnología: stack, tipo de app, base de usuarios actual] en un motor de crecimiento impulsado por datos.

**Arquitectura de experimentación técnica**

Diseña la infraestructura técnica necesaria para ejecutar experimentos de growth a escala:
- Implementación de un sistema de feature flags: evalúa LaunchDarkly vs. Unleash vs. solución propia. Para cada opción describe la complejidad de integración, el coste por usuario y las capacidades de targeting (por userId, país, plan, porcentaje de rollout)
- Diseño del SDK de tracking de eventos: define el esquema de eventos (eventName, userId, properties, timestamp, sessionId), las convenciones de nomenclatura y la librería recomendada para tu stack
- Pipeline de datos para experimentos: cómo enviar eventos a un data warehouse, calcular métricas en tiempo real y detectar anomalías automáticamente

**Instrumentación del momento de activación**

El evento de activación ("aha moment") es el que mejor predice la retención. Para mi aplicación:
- Identifica los cinco eventos candidatos a ser el momento "aha" basándote en patrones comunes de productos similares
- Escribe el código de instrumentación para capturar estos eventos con las propiedades correctas
- Diseña una consulta SQL o dbt model para calcular la tasa de activación semanal y su cohort breakdown
- Crea un alert automático en Slack cuando la tasa de activación cae más del cinco por ciento semana a semana

**Implementación de growth loops técnicos**

Propón la implementación técnica de dos growth loops:
- Loop de referidos: diseño de la tabla de referidos en la base de datos, lógica de atribución multi-touch, endpoint de API para tracking de conversiones y sistema anti-fraude básico
- Loop de notificaciones inteligentes: cómo usar el historial de comportamiento del usuario para personalizar el timing y contenido de notificaciones push/email, con un modelo simple de propensión al churn

**Optimización de rendimiento para retención**

El rendimiento técnico impacta directamente en la retención. Genera un plan de optimización:
- Identifica los tres cuellos de botella de rendimiento más comunes en aplicaciones del tipo de la mía
- Para cada uno proporciona el comando de diagnóstico, el fix técnico y el impacto esperado en Core Web Vitals o tiempo de respuesta de API
- Diseña un benchmark automatizado que se ejecute en cada PR para detectar regresiones de rendimiento antes de llegar a producción

Al final, proporciona un checklist de "growth readiness" técnico: qué debe tener implementado el equipo de ingeniería antes de que el equipo de growth pueda ejecutar experimentos de forma autónoma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar infraestructura técnica de experimentación y growth loops en el producto',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Growth hacking con IA para Diseño de producto',
                'description'      => 'Optimiza el diseño de onboarding, reduce la fricción en el funnel y diseña experimentos visuales de activación usando IA como co-diseñador.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de producto especializado en growth design y psicología del comportamiento aplicada a interfaces digitales. Tu enfoque combina el rigor del diseño centrado en el usuario con la mentalidad experimental del growth hacking.

Necesito rediseñar el flujo de onboarding y activación de mi producto [describe el tipo de producto, plataforma, y el principal problema de activación que enfrentas] para maximizar la tasa de usuarios que alcanzan el momento "aha" en los primeros siete días.

**Auditoría del flujo de onboarding actual**

Analiza el onboarding desde la perspectiva del diseño de comportamiento:
- Mapea cada pantalla o paso del onboarding actual y asigna una puntuación de fricción (1-10) justificada
- Identifica los patrones de abandono más comunes según el tipo de producto (¿qué preguntan los formularios que no deberían?, ¿dónde hay pasos que podrían eliminarse o diferirse?)
- Evalúa la carga cognitiva de cada pantalla usando el principio de Miller (7±2 elementos) y el principio de Hick
- Propón un ranking de los cinco cambios de diseño con mayor impacto potencial en la tasa de activación

**Diseño del onboarding orientado al valor**

Crea el wireframe conceptual de un onboarding rediseñado que siga estos principios:
- Value-first: el usuario experimenta el valor central del producto antes de completar el registro
- Progressive disclosure: solicita información mínima al inicio y recoge el resto contextualmente
- Social proof contextual: integra testimonios y métricas de éxito en los momentos de duda
- Personalización por caso de uso: propón un máximo de tres "paths" de onboarding según el tipo de usuario o necesidad principal

Para cada pantalla describe el objetivo de comportamiento, los elementos visuales clave y el microcopy de acción.

**Experimentos de diseño A/B para activación**

Diseña un backlog de ocho experimentos A/B de diseño priorizados:
- Variación del headline principal de la pantalla de bienvenida
- Orden y cantidad de pasos en el wizard de configuración
- Diseño del empty state (estado vacío) para incitar la primera acción
- Posicionamiento y copy del CTA principal en el dashboard
- Uso de progress bars vs. checklists de onboarding
- Diseño del correo de bienvenida (texto plano vs. HTML con imagen)
- Tooltip guiado vs. onboarding modal vs. video tutorial
- Personalización del primer dashboard según el rol del usuario

Para cada experimento especifica la hipótesis, la métrica primaria, el segmento de usuarios y la duración mínima del test.

**Sistema de diseño para el crecimiento**

Define los componentes de diseño que todo equipo de growth necesita tener estandarizados:
- Biblioteca de notificaciones y toasts de éxito (con copy que celebre los logros del usuario)
- Sistema de gamificación ligera: badges, progress indicators y milestones
- Plantillas de correos de ciclo de vida: activación, engagement, reactivación y win-back
- Guía de microcopy para momentos críticos del funnel (errores, confirmaciones, upsell)

Finaliza con un framework de decisión: cómo el equipo de diseño debe priorizar qué experimentos de UX ejecutar primero basándose en el impacto en retención y el esfuerzo de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Rediseñar onboarding y flujos de activación con mentalidad de growth design',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Growth hacking con IA para Ventas',
                'description'      => 'Diseña experimentos de crecimiento en el pipeline de ventas, optimiza la conversión por etapa y construye loops de referidos B2B usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con experiencia en revenue operations y growth hacking aplicado a equipos comerciales B2B y B2C. Tu especialidad es combinar la cadencia de ventas tradicional con experimentos de crecimiento rápidos y automatización inteligente.

Necesito que me ayudes a construir un sistema de growth hacking para mi equipo de ventas. El contexto: [describe el ciclo de ventas, ticket promedio, número de representantes, CRM actual y principal cuello de botella en el pipeline].

**Diagnóstico del pipeline de ventas**

Analiza mi pipeline de ventas como si fuera un funnel de growth:
- Define las tasas de conversión esperadas para cada etapa (MQL→SQL, SQL→Oportunidad, Oportunidad→Propuesta, Propuesta→Cierre) para mi tipo de negocio
- Identifica las señales de intención de compra más predictivas que debería rastrear
- Propón cinco experimentos de ventas que pueda testear en las próximas cuatro semanas para mejorar la conversión en la etapa de mayor fricción
- Diseña el formato de un "sales experiment card": cómo documentar hipótesis, grupo de control, grupo de tratamiento y criterio de éxito

**Construcción de loops de referidos B2B**

Los referidos de clientes actuales tienen una tasa de cierre hasta cinco veces mayor. Diseña un programa de referidos para mi negocio:
- Estructura del incentivo: ¿cuándo y cómo recompensar al cliente que refiere? (descuento, crédito, comisión, reconocimiento público)
- Guión de conversación para pedir el referido en el momento óptimo del customer journey
- Flujo automatizado: correo de solicitud de referido, seguimiento si no hay respuesta en siete días, y agradecimiento tras el cierre
- Métricas del programa: tasa de referidos por cliente, tasa de conversión de referidos y coste de adquisición por este canal

**Optimización de la prospección con IA**

Diseña un flujo de prospección outbound impulsado por IA:
- Señales de intención que debo monitorizar (financiaciones recientes, publicaciones de empleo, cambios de liderazgo, menciones en prensa)
- Secuencia de contacto: cantidad de toques, canales (email, LinkedIn, llamada), intervalos de tiempo y personalización por señal detectada
- Plantillas de correo para cada escenario de contacto (primera toma, seguimiento sin respuesta, reactivación de lead frío)
- Cómo usar IA para personalizar el subject line y el primer párrafo de cada correo a escala

**Experimentos de pricing y packaging**

El precio es la palanca de crecimiento más infrautilizada. Propón:
- Tres experimentos de pricing que puedo testear sin cambiar el precio base (anchoring, decoy pricing, bundling)
- Cómo diseñar una propuesta de valor por escrito que minimice el precio-shock y maximice la percepción de ROI
- Guión para manejar objeciones de precio con datos y comparativas de valor

Cierra con un calendario de treinta días de experimentos de ventas: qué testear cada semana, quién es el responsable y qué decisión se tomará según el resultado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar pipeline de ventas con experimentos de growth y loops de referidos B2B',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Growth hacking con IA para Product Management',
                'description'      => 'Diseña una cultura de experimentación en el equipo de producto, prioriza features por impacto en crecimiento y construye métricas norte para escalar.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en empresas de alto crecimiento como Spotify, Duolingo o Notion. Tu especialidad es construir sistemas de experimentación, definir métricas norte y tomar decisiones de producto basadas en datos de comportamiento de usuarios reales.

Necesito que me ayudes a transformar cómo mi equipo de producto toma decisiones de crecimiento. El contexto: [describe el producto, etapa de la empresa, tamaño del equipo de producto y la métrica norte actual si la tienes].

**Definición de la métrica norte (North Star Metric)**

La métrica norte es el único número que captura el valor que el producto entrega a los usuarios y que predice el crecimiento a largo plazo. Ayúdame a:
- Evaluar mis candidatos a métrica norte usando los tres criterios: refleja valor para el usuario, es accionable por el equipo, y predice los ingresos futuros
- Descomponer la métrica norte en tres a cinco métricas de entrada que el equipo puede influenciar directamente
- Diseñar el dashboard semanal de métricas con el formato correcto para el planning de sprint
- Crear el ritual de revisión de métricas: quién asiste, qué se revisa, cómo se toman decisiones

**Framework de priorización de features por impacto en growth**

No todas las features contribuyen igual al crecimiento. Propón un sistema de priorización que:
- Clasifique cada feature propuesta por su impacto esperado en adquisición, activación, retención o monetización
- Use el framework RICE (Reach, Impact, Confidence, Effort) adaptado a mi contexto
- Incluya una heurística para detectar features que parecen valiosas pero son "pet projects" sin impacto real
- Genere un template de one-pager de feature con sección obligatoria de hipótesis de growth

**Cultura de experimentación en el equipo de producto**

Describe cómo construir una cultura donde experimentar sea la norma:
- El formato de la "experiment card" que cada PM debe completar antes de lanzar cualquier experimento
- Cómo calcular el tamaño de muestra mínimo para un A/B test con significancia estadística del 95%
- Qué hacer cuando un experimento falla: el proceso de post-mortem y cómo documentar el aprendizaje
- Cómo gestionar el portfolio de experimentos: qué porcentaje del sprint debería dedicarse a experimentos vs. features de roadmap

**Loops de retención y engagement**

Los mejores productos tienen loops de engagement que traen a los usuarios de vuelta sin necesidad de publicidad. Diseña:
- Dos loops de retención para mi tipo de producto (notificaciones de valor, contenido generado por el usuario, gamificación, social features)
- Las métricas de salud de cada loop: cómo saber si el loop está funcionando o degradándose
- Un experimento de reactivación de usuarios dormidos: segmentación, mensaje y secuencia de contacto

Finaliza con un plan de noventa días para implementar una cultura de growth en el equipo de producto: hitos por mes, recursos necesarios y definición de éxito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir sistema de experimentación y métricas norte para equipos de producto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Growth hacking con IA para Recursos Humanos',
                'description'      => 'Aplica mentalidad de growth hacking al reclutamiento y la retención de talento: experimentos de employer branding, optimización de funnel de candidatos y loops de referidos internos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos especializado en talent acquisition y employee experience con mentalidad de growth hacker. Tu enfoque trata el funnel de reclutamiento como un funnel de producto: mide, experimenta y optimiza cada etapa.

Necesito que me ayudes a aplicar principios de growth hacking a los procesos de atracción y retención de talento. El contexto: [describe el tamaño de la empresa, sectores donde recluta, principales cargos a cubrir y el mayor cuello de botella en el proceso actual].

**Funnel de reclutamiento como growth funnel**

Mapea el proceso de reclutamiento como un funnel de crecimiento con métricas claras:
- Define las etapas del funnel: Awareness (conocen la empresa), Consideration (visitan la página de empleo), Application (aplican), Screening (pasan al filtro), Interview (llegan a entrevista), Offer (reciben oferta), Hire (aceptan)
- Para cada etapa define la tasa de conversión benchmark por sector y tipo de cargo
- Identifica la etapa de mayor fuga en un proceso típico y propón tres experimentos para mejorarla
- Diseña el dashboard de recruiting metrics que debería revisar el equipo cada dos semanas

**Employer branding con mentalidad de growth**

El employer branding es el canal de adquisición de talento más escalable. Propón:
- Una estrategia de contenido en LinkedIn y otras plataformas que genere candidatos inbound de forma orgánica
- Cinco formatos de contenido de alto rendimiento para employer branding (cultura, behind-the-scenes, testimonios de empleados, impacto del trabajo)
- Cómo medir el impacto del employer branding en el funnel: qué métricas conectan el contenido publicado con los candidatos recibidos
- Un calendario editorial de cuatro semanas para el equipo de RRHH

**Loop de referidos internos**

Los referidos de empleados tienen el menor coste por contratación y la mayor tasa de retención. Diseña un programa de referidos que:
- Estructure el incentivo económico y no económico de forma que sea atractivo pero sostenible
- Automatice el seguimiento del referido: notificaciones al empleado sobre el estado del candidato que refirió
- Gamifique el proceso: ranking de empleados con más referidos exitosos, reconocimiento público
- Mida el ROI del programa: comparativa de coste por contratación, tiempo de cobertura y retención a 12 meses entre referidos vs. otros canales

**Experimentos de retención**

Retener talento es más barato que reemplazarlo. Diseña cinco experimentos de retención:
- Experimento de onboarding estructurado: ¿mejora la retención a 6 meses un programa de onboarding de 90 días?
- Experimento de conversaciones de carrera trimestrales vs. anuales
- Experimento de reconocimiento peer-to-peer
- Experimento de flexibilidad horaria o de ubicación
- Experimento de micro-learning y desarrollo de habilidades

Para cada experimento define el grupo de control, el grupo de tratamiento, la duración y la métrica de éxito (retención, engagement score, NPS de empleados).

Cierra con un modelo de "RRHH como función de growth": cómo el equipo de Recursos Humanos debe reportar sus métricas con la misma rigurosidad que el equipo de marketing reporta sus KPIs de adquisición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar reclutamiento y retención de talento con experimentos de growth',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Growth hacking con IA para Finanzas',
                'description'      => 'Aplica modelos de growth hacking al análisis financiero: optimiza el CAC/LTV, diseña experimentos de monetización y construye modelos de cohortes de ingresos.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en SaaS metrics y unit economics de empresas en crecimiento. Tu especialidad es traducir los experimentos de growth en impacto financiero medible y construir modelos que ayuden al equipo a tomar decisiones de inversión en crecimiento con datos sólidos.

Necesito que me ayudes a construir el framework financiero para las iniciativas de growth hacking de mi empresa. El contexto: [describe el modelo de negocio, ingresos actuales, margen bruto, y las principales métricas de unit economics que ya mides].

**Modelo de unit economics para growth**

Las decisiones de growth sin unit economics son apuestas a ciegas. Construye el modelo financiero base:
- Cálculo del CAC real: todos los costes de marketing y ventas divididos por los clientes nuevos, segmentado por canal de adquisición
- Cálculo del LTV: ingreso medio por usuario, margen de contribución, tasa de churn mensual y el múltiplo LTV/CAC objetivo (mínimo 3x para ser sostenible)
- Payback period por canal: cuántos meses tarda en recuperarse la inversión de adquisición por canal
- Análisis de cohortes de ingresos: cómo evolucionan los ingresos de cada cohorte mensual a lo largo de 12 meses

**Modelo financiero de experimentos de growth**

Cada experimento de growth tiene un coste y un retorno esperado. Diseña:
- Una plantilla de business case para experimentos de growth: inversión necesaria, impacto esperado en métricas norte, traducción a ingresos incrementales y período de recuperación
- Un modelo de sensibilidad: qué pasa con los ingresos anuales si la tasa de activación mejora un cinco por ciento, un diez por ciento o un veinte por ciento
- El umbral mínimo de impacto para que un experimento valga la pena: dado el coste de oportunidad del equipo, ¿qué mejora mínima en conversión justifica tres semanas de trabajo?

**Análisis financiero de la retención**

La retención es el multiplicador financiero más poderoso. Modela:
- Impacto en valoración de reducir el churn mensual del dos por ciento al uno por ciento
- El "expansion revenue" como motor de crecimiento: cómo el Net Revenue Retention (NRR) superior al 100% puede hacer crecer el negocio sin adquirir un solo cliente nuevo
- Modelo de reactivación: cuánto vale recuperar a un usuario perdido vs. adquirir uno nuevo
- Proyección de ingresos a 24 meses bajo tres escenarios de retención: pesimista, base y optimista

**Experimentos de monetización con visión financiera**

Propón cinco experimentos de monetización con su análisis financiero:
- Experimento de pricing anual vs. mensual: impacto en cash flow y churn
- Experimento de tier de producto (freemium, starter, pro): modelado de conversión y canibalización
- Experimento de add-ons y upsell en el momento de mayor engagement del usuario
- Experimento de descuento temporal para reactivar usuarios en riesgo de churn
- Experimento de paquetes de créditos vs. suscripción ilimitada

Para cada experimento proporciona las fórmulas de cálculo de impacto y el break-even de la inversión.

Cierra con un "growth finance dashboard": las cinco métricas financieras que el CFO debe revisar mensualmente para entender la salud del motor de crecimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir modelo financiero de unit economics y evaluar ROI de experimentos de growth',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Growth hacking con IA para Legal',
                'description'      => 'Diseña experimentos de crecimiento para bufetes de abogados: optimiza el funnel de captación de clientes, construye loops de referidos y mide el CLV del cliente legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing legal especializado en crecimiento de despachos de abogados y empresas de servicios profesionales. Tu especialidad es aplicar metodologías de growth hacking al entorno regulado de los servicios legales, respetando siempre las normas deontológicas de la abogacía.

Necesito que me ayudes a construir un sistema de crecimiento para mi despacho/empresa legal. El contexto: [describe el tipo de práctica legal, tamaño del despacho, principales áreas de práctica y el mayor cuello de botella en la captación de clientes nuevos].

**Funnel de captación de clientes legales**

El servicio legal tiene un funnel de captación específico. Mapea y optimiza cada etapa:
- Etapa 1 (Conciencia): ¿cómo encuentran los clientes potenciales a tu despacho? (Google, referidos, eventos, LinkedIn)
- Etapa 2 (Consideración): ¿qué revisan antes de contactar? (web, reseñas, artículos publicados, perfil del abogado)
- Etapa 3 (Consulta inicial): ¿cuántos contactos se convierten en consultas? Diseña el flujo de respuesta en menos de dos horas
- Etapa 4 (Propuesta y cierre): ¿cuál es la tasa de conversión de consultas a clientes? ¿qué objeciones son más frecuentes?
- Define la métrica de conversión en cada etapa y propón un experimento para mejorar la etapa más débil

**Loop de referidos legales**

Los referidos son el canal de adquisición más poderoso y menos explotado en servicios legales. Diseña:
- El programa formal de referidos: cómo y cuándo pedir el referido a un cliente satisfecho sin violar la deontología
- El guión de conversación para solicitar referidos a otros profesionales (notarios, asesores fiscales, bancos)
- Un sistema de seguimiento de referidos en el CRM: cómo registrar quién refirió a quién y el valor generado
- El ritual de agradecimiento: qué hacer cuando un referido se convierte en cliente (nota personalizada, regalo simbólico, informe de progreso)

**Contenido de autoridad como motor de captación**

El contenido técnico posiciona al abogado como referente y genera clientes inbound de alta calidad:
- Diseña una estrategia de contenido basada en las preguntas más frecuentes que hacen los clientes en consulta
- Propón diez temas de artículos o guías descargables con alto potencial de búsqueda en Google
- Define el formato de contenido más efectivo para servicios legales: ¿artículo de blog?, ¿guía PDF descargable?, ¿video explicativo?, ¿newsletter?
- Diseña el flujo de captación de correo electrónico a través del contenido: landing page, lead magnet, secuencia de bienvenida

**Métricas de growth para despachos legales**

Propón el dashboard de crecimiento para un despacho de abogados:
- Customer Lifetime Value (CLV) legal: valor del cliente en su primera causa, probabilidad de nuevos encargos y referidos generados
- Coste de adquisición por canal (referidos vs. Google vs. LinkedIn vs. networking)
- Tasa de retención de clientes: ¿qué porcentaje de clientes vuelve para un segundo asunto?
- Net Promoter Score (NPS) del despacho: cómo medirlo sin comprometer la confidencialidad del cliente

Cierra con un plan de crecimiento de seis meses para el despacho: acciones por mes, responsable de cada acción y la métrica de éxito que determina si continuar o ajustar la estrategia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar captación de clientes y loops de referidos en despachos de abogados',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Growth hacking con IA para Customer Success',
                'description'      => 'Diseña experimentos de retención proactiva, construye playbooks de expansión de ingresos y optimiza el Net Revenue Retention usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success especializado en growth y revenue expansion. Tu mentalidad es la de un growth hacker aplicada a la retención: cada cliente es un funnel de expansión y retención que se puede medir, experimentar y optimizar.

Necesito que me ayudes a transformar mi equipo de Customer Success en un motor de crecimiento. El contexto: [describe el producto, número de clientes, tamaño del equipo de CS, y las métricas actuales de churn, NRR y CSAT].

**Health score predictivo de churn**

El equipo de CS no puede gestionar proactivamente a todos los clientes con la misma intensidad. Diseña:
- Un modelo de customer health score con cinco a ocho señales de comportamiento ponderadas (uso del producto, tickets de soporte, engagement con comunicaciones, NPS, cambios en el equipo del cliente)
- Cómo calcular el score para cada cliente de forma automática desde los datos del CRM y la plataforma de producto
- Los tres segmentos de riesgo: verde (sano), amarillo (en riesgo), rojo (churn inminente)
- Los playbooks de intervención para cada segmento: qué hace el CSM cuando un cliente pasa de verde a amarillo

**Experimentos de retención proactiva**

Diseña cinco experimentos de retención que el equipo de CS puede ejecutar este trimestre:
- Experimento de QBR (Quarterly Business Review) simplificado vs. completo: ¿cuál tiene mayor impacto en retención?
- Experimento de check-in proactivo a los 30 días de onboarding vs. sin check-in
- Experimento de compartir un informe de ROI personalizado al cliente vs. no compartirlo
- Experimento de comunidad de usuarios: ¿los clientes activos en la comunidad tienen menor churn?
- Experimento de formación avanzada en la plataforma: ¿los clientes que completan el training certificado tienen mayor NRR?

Para cada experimento define el grupo de control (clientes similares sin intervención), la duración del experimento y la métrica de éxito.

**Playbook de expansión de ingresos**

El mejor crecimiento viene de los clientes actuales. Diseña un sistema de expansión:
- Señales de expansión: qué comportamientos en el producto indican que el cliente está listo para un upsell (uso al 80% del límite, nuevos usuarios añadidos, peticiones de funcionalidades de tier superior)
- El momento correcto para la conversación de expansión: cuándo y cómo abordarla sin que parezca una venta forzada
- El guión de la conversación de expansión: cómo presentar el upsell en términos de valor para el cliente, no de ingresos para la empresa
- Cómo medir el Net Revenue Retention (NRR) mensualmente y qué acciones tomar si baja del 100%

**Loop de referidos desde Customer Success**

Los clientes satisfechos son el mejor canal de adquisición. Diseña:
- El momento óptimo en el customer journey para pedir un referido o un caso de éxito
- El proceso para convertir a un cliente feliz en un caso de estudio público que genere leads
- Un programa de "Customer Advisory Board" de los diez clientes más estratégicos: cómo organizarlo y qué valor aporta a la retención y al product development

Cierra con el "CS Growth Report" mensual: el formato de reporte que el equipo de CS debe presentar a liderazgo, conectando las acciones de retención y expansión con el impacto en ARR y valoración de la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar Customer Success en motor de retención y expansión de ingresos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Growth hacking con IA para Freelancers',
                'description'      => 'Diseña experimentos de crecimiento para tu negocio freelance: optimiza tu funnel de captación, construye loops de referidos de clientes y escala sin perder calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocio especializado en crecimiento sostenible para profesionales independientes y freelancers. Tu experiencia combina el marketing de contenidos, la gestión de relaciones con clientes y los principios de growth hacking adaptados a la escala de un negocio unipersonal.

Necesito que me ayudes a aplicar mentalidad de growth hacking a mi negocio freelance. El contexto: [describe tu especialidad, años de experiencia, tipo de clientes actuales, tarifa promedio por proyecto y el mayor obstáculo para crecer: encontrar clientes, subir tarifas o escalar el tiempo].

**Diagnóstico del funnel de captación freelance**

Tu negocio tiene un funnel de captación aunque no lo hayas formalizado. Ayúdame a mapearlo:
- Etapa de visibilidad: ¿cómo te encuentran los clientes potenciales? Lista todos los canales actuales y su peso relativo
- Etapa de consideración: ¿qué revisan antes de contactarte? (portfolio, LinkedIn, referencias, artículos publicados)
- Etapa de consulta: ¿cuántos contactos se convierten en reuniones o llamadas de discovery?
- Etapa de propuesta y cierre: ¿cuál es tu tasa de conversión de propuestas enviadas a proyectos cerrados?
- Identifica la etapa con mayor fuga y propón dos experimentos concretos para mejorarla en los próximos treinta días

**Loop de referidos de clientes**

Los referidos son el canal más rentable para un freelancer. Diseña tu sistema de referidos:
- El momento exacto para pedir el referido: justo después de entregar un resultado que ha generado satisfacción visible, no al final del proyecto
- El guión de solicitud de referido: cómo pedirlo de forma natural sin que parezca desesperado
- El sistema de seguimiento: cómo registrar quién refirió a quién en un documento simple
- El ritual de agradecimiento: qué hacer cuando un referido se convierte en cliente (mensaje personalizado, descuento en próximo proyecto, regalo pequeño)
- Cómo convertir a los mejores clientes en evangelizadores activos que te recomienden sin que tengas que pedirlo

**Experimentos de pricing para freelancers**

El precio es la palanca más impactante y la más temida. Diseña:
- Un experimento de subida de tarifas: cómo subir el precio en el próximo proyecto sin perder el cliente
- Un experimento de pricing basado en valor vs. por horas: cómo presentar un precio por resultado que sea superior al precio por horas
- Un experimento de paquetes de servicios: cómo empaquetar tu oferta en tres niveles (básico, estándar, premium) para anclar el precio y vender el nivel medio
- Un experimento de retainer mensual: cómo proponer a un cliente existente un acuerdo de disponibilidad mensual que estabilice tus ingresos

**Contenido y posicionamiento como motor de captación**

Un freelancer con autoridad temática cobra más y trabaja menos para conseguir clientes:
- Diseña una estrategia de contenido minimalista: un formato (newsletter, LinkedIn, YouTube), una frecuencia (semanal) y un tema central donde eres la referencia indiscutible
- Los cinco temas de contenido con mayor potencial para atraer a tu cliente ideal
- Cómo un solo artículo o post viral puede generar suficientes consultas para el mes
- El funnel de contenido a cliente: cómo convertir a un lector en lead y a un lead en cliente

Cierra con un plan de noventa días para el freelancer: qué experimento probar en el primer mes, qué ajustar en el segundo según los resultados, y cómo el tercer mes debe ser significativamente más rentable que el primero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Aplicar growth hacking al negocio freelance para escalar ingresos con menos esfuerzo',
                'vote_score'       => 39,
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
