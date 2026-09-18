<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills337Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Mapeo de stakeholders para lanzamientos de producto en marketing',
                'description'      => 'Aprende a identificar, clasificar y gestionar a todos los stakeholders involucrados en un lanzamiento de producto. Domina las técnicas de análisis de influencia y poder para priorizar tus esfuerzos de comunicación y maximizar el impacto del lanzamiento.',
                'prompt_content'   => <<<EOT
Actúa como un consultor senior de marketing con más de 15 años de experiencia en gestión de lanzamientos de producto en empresas de tecnología y consumo masivo. Tu especialidad es el mapeo y gestión estratégica de stakeholders para maximizar el éxito de los lanzamientos.

Voy a lanzar un nuevo producto y necesito desarrollar un mapa completo de stakeholders junto con una estrategia de comunicación y gestión para cada grupo.

**Contexto del lanzamiento:**
[Describe brevemente el producto, el mercado objetivo, la empresa y el cronograma del lanzamiento]

**Fase 1: Identificación de stakeholders**

Ayúdame a identificar exhaustivamente todos los stakeholders relevantes para este lanzamiento, organizados en las siguientes categorías:

1. Stakeholders internos: equipos de ventas, producto, operaciones, finanzas, dirección ejecutiva, soporte al cliente
2. Stakeholders externos directos: distribuidores, socios comerciales, agencias
3. Stakeholders externos indirectos: medios de comunicación, influencers del sector, analistas de la industria
4. Clientes clave: early adopters, cuentas estratégicas, líderes de opinión del sector

Para cada grupo, proporciona:
- Descripción del rol y responsabilidades en relación al lanzamiento
- Intereses y motivaciones principales
- Preocupaciones o posibles resistencias
- Nivel de influencia sobre el éxito del lanzamiento (alto, medio, bajo)

**Fase 2: Matriz poder-interés**

Construye una matriz de poder-interés con cuatro cuadrantes:
- Alto poder, alto interés: gestionar de cerca
- Alto poder, bajo interés: mantener satisfechos
- Bajo poder, alto interés: mantener informados
- Bajo poder, bajo interés: monitorear con esfuerzo mínimo

Clasifica a cada stakeholder identificado en el cuadrante correspondiente y justifica la clasificación.

**Fase 3: Plan de comunicación por stakeholder**

Para cada stakeholder en los cuadrantes de alta prioridad, diseña:
- Mensaje clave adaptado a sus intereses y preocupaciones
- Canal de comunicación preferido (reunión ejecutiva, email, demo, presentación formal)
- Frecuencia de comunicación recomendada
- Métricas para medir su nivel de engagement y satisfacción
- Tácticas para convertir resistencias en apoyo

**Fase 4: Estrategia de comunicación ejecutiva**

Elabora una guía para las comunicaciones hacia la alta dirección:
- Estructura recomendada para un briefing ejecutivo de 10 minutos
- Los tres mensajes más importantes que la dirección debe conocer y comunicar
- Cómo anticipar y responder preguntas difíciles de los ejecutivos
- Formato de reporte de avance semanal para el comité de lanzamiento

**Fase 5: Plan de activación de aliados**

Identifica a los stakeholders con mayor potencial para convertirse en defensores activos del lanzamiento y diseña un plan de activación que incluya:
- Acceso privilegiado a información o productos (beta, early access)
- Reconocimiento y visibilidad que puedes ofrecerles
- Co-creación de contenido o actividades conjuntas
- Mecanismos de retroalimentación que les hagan sentir escuchados

**Formato de entrega:**

Presenta los resultados en este orden:
1. Mapa visual de stakeholders (descrito textualmente con jerarquías claras)
2. Tabla de priorización con acciones concretas para las próximas 4 semanas
3. Plantillas de mensajes clave para los tres stakeholders más críticos
4. Calendario de comunicaciones para las primeras 6 semanas del lanzamiento
5. Lista de alertas tempranas: señales que indican que un stakeholder está perdiendo apoyo

Sé específico y orientado a la acción. Evita generalidades. Adapta todas las recomendaciones al contexto del lanzamiento que te he proporcionado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzamiento de producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación ejecutiva para líderes técnicos con stakeholders de negocio',
                'description'      => 'Domina el arte de comunicar conceptos técnicos complejos a audiencias ejecutivas no técnicas. Aprende a traducir decisiones de arquitectura, deuda técnica y roadmaps de desarrollo en lenguaje de negocio que resuene con directivos y stakeholders clave.',
                'prompt_content'   => <<<EOT
Actúa como un CTO con experiencia en empresas de alto crecimiento que también tiene formación en comunicación ejecutiva y gestión del cambio. Tu fortaleza es servir de puente entre los equipos técnicos y la dirección de negocio, traduciendo complejidad técnica en decisiones estratégicas comprensibles.

Necesito preparar una comunicación ejecutiva sobre un tema técnico importante y requiero tu guía completa para hacerlo de manera efectiva.

**Mi situación:**
[Describe el tema técnico que necesitas comunicar: migración de sistema, deuda técnica, nueva arquitectura, incidente de seguridad, cambio de tecnología, estimación de proyecto, etc. Incluye la audiencia y el objetivo de la comunicación]

**Parte 1: Diagnóstico de la audiencia ejecutiva**

Antes de construir el mensaje, ayúdame a entender a mi audiencia:
- Cómo piensan los ejecutivos (en términos de riesgo, costo, tiempo, ventaja competitiva)
- Qué información necesitan para tomar decisiones (no para entender la tecnología)
- Errores más comunes que cometen los líderes técnicos al comunicar con ejecutivos
- Cómo adaptar el nivel de detalle técnico según el rol ejecutivo (CEO, CFO, COO, CMO)

**Parte 2: Framework de traducción técnica**

Enséñame el framework para convertir conceptos técnicos en lenguaje de negocio:

1. De "deuda técnica" a "riesgo operacional y costo de oportunidad"
2. De "refactorización" a "inversión en productividad y reducción de riesgos"
3. De "arquitectura de microservicios" a "escalabilidad y agilidad del negocio"
4. De "tiempo de inactividad" a "impacto en ingresos y experiencia del cliente"
5. Reglas generales para cualquier concepto técnico

**Parte 3: Estructura de presentación ejecutiva**

Diseña la estructura óptima para mi comunicación:
- El principio de la pirámide invertida: conclusión primero
- Los tres bloques de cualquier briefing ejecutivo efectivo
- Cómo usar datos cuantitativos para respaldar decisiones técnicas
- El rol de las analogías y los casos de uso del mundo real
- Cuándo usar visuales y cuándo el texto es más efectivo

**Parte 4: Construcción del mensaje principal**

Ayúdame a construir el mensaje central de mi comunicación siguiendo este esquema:
- La situación actual (1 oración)
- El problema o la oportunidad identificada (2-3 oraciones)
- Las opciones disponibles con sus pros, contras y costos (en términos de negocio)
- La recomendación con justificación estratégica
- Los próximos pasos concretos con responsables y fechas

**Parte 5: Gestión de preguntas difíciles**

Prepárame para las preguntas más comunes y difíciles de los ejecutivos:
- "¿Por qué no lo hicieron bien desde el principio?"
- "¿Cuánto tiempo tomará? ¿Por qué tanto?"
- "¿Qué pasa si no hacemos nada?"
- "¿El equipo puede hacerlo mientras mantiene el ritmo actual?"
- "¿Cómo sé que esta es la mejor solución?"

Para cada pregunta: respuesta modelo, qué evitar decir y cómo redirigir si la conversación se desvía.

**Parte 6: Influencia ascendente (managing up)**

Estrategias para gestionar la relación continua con los stakeholders ejecutivos:
- Cómo establecer credibilidad técnica antes de necesitar apoyo
- Frecuencia y formato óptimos de actualizaciones proactivas
- Cómo dar malas noticias sin perder confianza
- Técnicas para obtener decisiones cuando los ejecutivos posponen
- Cómo documentar acuerdos y decisiones para proteger al equipo

**Entregables:**
1. Borrador completo de la comunicación ejecutiva para mi situación
2. Hoja de preparación con posibles preguntas y respuestas modelo
3. Email de seguimiento post-reunión con los puntos acordados
4. Plantilla reutilizable para futuras comunicaciones ejecutivas técnicas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicación con dirección',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Presentaciones de diseño ante stakeholders no diseñadores',
                'description'      => 'Aprende a presentar y defender decisiones de diseño ante directivos, clientes y equipos de negocio que no tienen formación en diseño. Domina las técnicas para conectar las decisiones de diseño con los objetivos de negocio y gestionar el feedback no constructivo.',
                'prompt_content'   => <<<EOT
Actúa como un Design Director con amplia experiencia presentando trabajo de diseño a equipos ejecutivos, juntas directivas y clientes corporativos. Eres conocido en la industria por tu habilidad para conectar las decisiones de diseño con resultados de negocio medibles y por gestionar sesiones de feedback de manera profesional y productiva.

Tengo una presentación de diseño próxima con stakeholders no diseñadores y necesito preparación completa.

**Mi contexto:**
[Describe el proyecto de diseño, la audiencia (quiénes son, su nivel de familiaridad con el diseño, sus prioridades de negocio), el objetivo de la presentación y los principales riesgos o controversias anticipadas]

**Módulo 1: Mentalidad del stakeholder no diseñador**

Ayúdame a entender cómo piensan y qué valoran los stakeholders sin formación en diseño:
- Qué preguntas se hacen internamente al ver un diseño
- Por qué el feedback "no me gusta" es una señal de que la presentación falló, no el diseño
- Cómo la presión de negocio distorsiona la percepción del diseño
- La diferencia entre feedback de gusto personal y feedback válido para la iteración

**Módulo 2: Narrativa de negocio para diseñadores**

Construye la narrativa de mi presentación conectando diseño con negocio:

1. Marco contextual: el problema de negocio que el diseño resuelve
2. Criterios de éxito: cómo se medirá el éxito (métricas, no estética)
3. Proceso de investigación: evidencia que sustenta las decisiones
4. Decisiones clave y su justificación en términos de usuario y negocio
5. Alternativas consideradas y por qué se descartaron
6. Próximos pasos y lo que se necesita de los stakeholders

**Módulo 3: Lenguaje de presentación efectivo**

Guíame en el lenguaje que debo usar y evitar:
- Términos de diseño que alejan a los stakeholders y sus equivalentes en lenguaje de negocio
- Frases para presentar decisiones como hipótesis basadas en evidencia, no como preferencias
- Cómo describir el pensamiento de diseño sin sonar defensivo
- Frases de transición para guiar la atención del stakeholder

**Módulo 4: Gestión del feedback en tiempo real**

Técnicas para manejar la sesión de feedback de manera productiva:
- Cómo escuchar activamente sin reaccionar defensivamente
- La técnica del "¿qué problema intenta resolver ese feedback?" para extraer la necesidad real
- Cómo separar el feedback de diseño válido del ruido de preferencia personal
- Cuándo comprometerse y cuándo mantener una decisión de diseño con argumentos
- Cómo documentar feedback de manera que sea accionable para el equipo

**Módulo 5: Gestión de stakeholders conflictivos**

Estrategias para tipos específicos de stakeholders difíciles:
- El ejecutivo que quiere cambiar todo en la reunión
- La persona que dice "hazlo como el competidor X"
- El stakeholder que no asistió a reuniones previas pero tiene muchas opiniones
- El cliente que cambia los requisitos después de ver el diseño
- El colega no diseñador que quiere participar en decisiones de diseño

**Módulo 6: Influencia sin autoridad en el proceso de diseño**

Cómo influir en las decisiones cuando no tienes autoridad final:
- Construir aliados internos antes de la presentación formal
- Usar datos de usuario para despersonalizar el debate
- Técnica del "co-diseño" para involucrar a stakeholders clave desde el inicio
- Cómo escalar decisiones de diseño que afectan la experiencia del usuario

**Entregables finales:**
1. Guión de apertura de presentación (primeros 3 minutos) adaptado a mi contexto
2. Estructura slide por slide con el punto clave de cada una
3. Respuestas preparadas para los 5 tipos de feedback más difíciles de gestionar
4. Email de pre-reunión para alinear expectativas con los stakeholders clave
5. Template de notas de reunión para capturar y procesar el feedback recibido
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Presentación a clientes y dirección',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de múltiples stakeholders en ventas enterprise complejas',
                'description'      => 'Aprende a identificar y gestionar todos los actores del proceso de compra enterprise, desde el usuario final hasta el comité ejecutivo. Domina las técnicas para avanzar oportunidades cuando hay múltiples tomadores de decisión con intereses distintos.',
                'prompt_content'   => <<<EOT
Actúa como un consultor de ventas enterprise con especialización en ciclos de venta complejos y procesos de compra corporativos. Has cerrado contratos multimillonarios en sectores como tecnología, servicios financieros y manufactura, y tu metodología de gestión de stakeholders ha sido adoptada por equipos de ventas en más de 50 empresas.

Tengo una oportunidad de venta enterprise en curso y necesito desarrollar una estrategia completa de gestión de stakeholders para avanzarla y cerrarla.

**Mi oportunidad:**
[Describe la empresa prospecto, el producto o servicio que vendes, el valor del contrato, la etapa actual del proceso, los contactos que ya tienes y los desafíos que has encontrado hasta ahora]

**Fase 1: Mapeo del comité de compra**

Ayúdame a identificar y entender a todos los actores del proceso de decisión:

1. Tipos de roles a identificar:
   - Iniciador: quien reconoció el problema y buscó soluciones
   - Influenciador técnico: quien evalúa la viabilidad técnica
   - Influenciador de negocio: quien evalúa el impacto en operaciones
   - Guardián: quien controla el acceso a tomadores de decisión
   - Tomador de decisión económica: quien aprueba el presupuesto
   - Campeón interno: quien defiende tu solución dentro de la empresa

2. Para cada rol identificado en mi oportunidad:
   - Cómo descubrirlos si no los conozco todavía
   - Sus motivaciones personales y profesionales
   - Sus criterios de evaluación prioritarios
   - El riesgo percibido de comprar vs. no comprar
   - Su nivel de influencia real vs. formal

**Fase 2: Análisis de poder e influencia**

Técnicas para entender la dinámica política interna del cliente:
- Cómo identificar quién tiene el poder real vs. el poder formal
- Cómo detectar alianzas y conflictos internos del prospecto
- Señales de que un contacto está perdiendo influencia o apoyo interno
- Cómo posicionarte cuando hay desacuerdo entre stakeholders

**Fase 3: Estrategia de acceso multi-nivel**

Plan para construir relaciones en todos los niveles de la organización:
- Cómo pedir referencias hacia arriba (acceso ejecutivo) de manera natural
- Cómo llegar a usuarios finales sin que los gerentes se sientan saltados
- Estrategia de contacto paralelo cuando un contacto bloquea el acceso
- Cadencia de comunicación apropiada para cada nivel

**Fase 4: Mensajes diferenciados por stakeholder**

Construye el mensaje de valor para cada tipo de stakeholder:
- Para el ejecutivo C-level: ROI, ventaja competitiva, reducción de riesgo estratégico
- Para el director de área: eficiencia operacional, facilidad de implementación, impacto en su equipo
- Para el equipo técnico: integración, seguridad, soporte técnico, facilidad de uso
- Para el CFO: análisis costo-beneficio, modelo de pago, costo total de propiedad

**Fase 5: Gestión de objeciones multi-stakeholder**

Cómo manejar cuando diferentes stakeholders tienen objeciones distintas o contradictorias:
- El técnico dice que es complicado de implementar, el CEO quiere seguir adelante
- El usuario dice que es perfecto, el CFO dice que es muy caro
- El campeón interno está perdiendo apoyo político
- Hay un competidor con una relación previa más fuerte

**Fase 6: Cierre con múltiples tomadores de decisión**

Estrategia para las etapas finales:
- Cómo orquestar la reunión de presentación ejecutiva final
- Técnicas de prueba de cierre para cada stakeholder
- Cómo gestionar el proceso de negociación cuando intervienen múltiples partes
- El "plan de éxito mutuo" como herramienta para comprometer a todos los stakeholders

**Entregables:**
1. Mapa de stakeholders completo para mi oportunidad con análisis de cada uno
2. Plan de contacto para las próximas 4 semanas con prioridades claras
3. Mensajes de valor personalizados para los tres stakeholders más críticos
4. Lista de señales de alerta que indican que la oportunidad está en riesgo
5. Guión para solicitar acceso ejecutivo a través de mi contacto actual
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Ventas enterprise B2B',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Análisis de stakeholders y priorización para Product Managers',
                'description'      => 'Desarrolla un sistema completo para identificar, priorizar y gestionar a los stakeholders del producto. Aprende a equilibrar las demandas contradictorias de distintos grupos de interés mientras mantienes el foco en la visión del producto y las necesidades del usuario.',
                'prompt_content'   => <<<EOT
Actúa como un VP of Product con experiencia en empresas de SaaS de alto crecimiento. Eres reconocido por tu habilidad para equilibrar las necesidades de múltiples stakeholders sin perder el foco en la visión del producto ni en el usuario final. Has creado metodologías de gestión de stakeholders que han sido adoptadas por equipos de producto en empresas líderes.

Necesito desarrollar un sistema robusto de gestión de stakeholders para mi producto, que me ayude a tomar mejores decisiones y a mantener el alineamiento organizacional.

**Mi contexto:**
[Describe tu producto, la empresa, los principales stakeholders que tienes que gestionar, los conflictos actuales o recurrentes entre ellos, y los mayores desafíos que enfrentas en este rol]

**Bloque 1: Inventario y clasificación de stakeholders de producto**

Guíame en la identificación exhaustiva de todos mis stakeholders:

Stakeholders internos:
- Dirección ejecutiva (CEO, C-suite): sus expectativas y las conversaciones que debes tener regularmente
- Ventas: cómo gestionar las solicitudes de features para cuentas específicas
- Marketing: alineamiento de roadmap con campañas y posicionamiento
- Ingeniería: colaboración en estimaciones, deuda técnica y priorización
- Customer Success: retroalimentación de clientes y churn relacionado con producto
- Finanzas: justificación de inversiones y métricas de negocio del producto

Stakeholders externos:
- Clientes clave (top accounts): cómo darles voz sin que dicten el roadmap
- Socios tecnológicos o de distribución: alineamiento de integración y go-to-market
- Analistas de la industria: cómo sus evaluaciones impactan en las decisiones de producto

**Bloque 2: Framework de priorización de demandas contradictorias**

Construye un sistema para tomar decisiones cuando hay conflicto entre stakeholders:

1. La jerarquía de decisiones de producto: cuándo el usuario manda, cuándo manda el negocio
2. Técnica de evaluación: impacto en usuario × impacto en negocio × esfuerzo de implementación
3. Cómo manejar el "feature request de ventas" sin ceder la estrategia
4. Cuándo decir que sí con condiciones, cuándo decir que no con alternativas, cuándo escalar
5. Proceso de documentación de decisiones para que los stakeholders entiendan el razonamiento

**Bloque 3: Comunicación del roadmap a diferentes audiencias**

Adapta la comunicación del roadmap para cada stakeholder:
- Para la dirección ejecutiva: visión, impacto estratégico y métricas de negocio
- Para ventas: qué pueden prometer y cuándo, sin comprometer fechas internas
- Para ingeniería: prioridades claras con contexto para que el equipo tome decisiones autónomas
- Para clientes: lenguaje de beneficios sin revelar la hoja de ruta completa
- Para el mercado general: comunicación de producto en notas de versión y anuncios

**Bloque 4: Reuniones de revisión de stakeholders**

Diseña el sistema de reuniones recurrentes para mantener el alineamiento:
- Revisión ejecutiva mensual: agenda tipo, métricas a presentar, cómo anticipar preguntas
- Comité de producto trimestral: cómo facilitar la priorización colectiva sin perder el control del roadmap
- Reuniones uno a uno con stakeholders clave: frecuencia, estructura y documentación
- Canales de comunicación asíncrona para reducir la carga de reuniones

**Bloque 5: Influencia sin autoridad**

Técnicas para influir en decisiones que afectan al producto cuando no tienes autoridad directa:
- Cómo construir credibilidad antes de necesitar apoyo político
- El rol de los datos de usuario para despersonalizar debates
- Cómo movilizar a tu campeón interno en cada área
- Técnicas de persuasión basadas en evidencia para tomadores de decisión escépticos

**Entregables:**
1. Plantilla de mapa de stakeholders para mi contexto específico
2. Proceso documentado de priorización de requests con criterios claros
3. Agenda tipo para la revisión ejecutiva mensual de producto
4. Template de "decision log" para comunicar decisiones a todos los stakeholders
5. Guía de respuestas para las 10 situaciones de conflicto más comunes entre stakeholders
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de roadmap y alineamiento organizacional',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de stakeholders en procesos de cambio organizacional',
                'description'      => 'Aprende a identificar y gestionar a todos los actores clave durante transformaciones organizacionales, fusiones, implementaciones de nuevas políticas y cambios culturales. Domina las técnicas para reducir la resistencia y construir coaliciones de apoyo.',
                'prompt_content'   => <<<EOT
Actúa como un consultor senior de gestión del cambio organizacional con certificación en metodologías como Prosci ADKAR y Kotter. Tienes experiencia liderando transformaciones en empresas de 200 a 5.000 empleados en sectores como manufactura, tecnología, servicios financieros y salud.

Estoy liderando un proceso de cambio organizacional y necesito una estrategia completa de gestión de stakeholders para asegurar su adopción exitosa.

**El cambio que estoy gestionando:**
[Describe el cambio: nueva política, implementación de sistema, reestructuración, fusión, cambio cultural, nuevo proceso, etc. Incluye el alcance, los empleados afectados, el cronograma y los objetivos]

**Capítulo 1: Análisis de impacto y mapeo inicial**

Guíame en el análisis completo del impacto del cambio:
- Grupos de empleados afectados y tipo de impacto (rol, proceso, tecnología, cultura)
- Niveles de impacto: alto, medio, bajo y cómo varía por grupo
- Stakeholders que deben liderar el cambio vs. los que serán cambiados
- Identificación de líderes informales de opinión en cada área afectada

**Capítulo 2: Evaluación de disposición al cambio**

Cómo evaluar el nivel de preparación y resistencia de cada grupo:
- Preguntas de diagnóstico para detectar resistencia latente
- Señales tempranas de resistencia que debería monitorear
- Diferencia entre resistencia legítima (el cambio tiene problemas reales) y resistencia emocional
- Cómo cuantificar el riesgo de resistencia por grupo

**Capítulo 3: Estrategia de coalición de apoyo**

Construye la coalición necesaria para liderar el cambio:
- Cómo identificar y activar a los agentes del cambio en cada área
- El rol de los líderes de línea media: por qué son críticos y cómo ganarlos
- Técnicas para involucrar a los escépticos constructivos antes del lanzamiento
- Cómo estructurar una red de campeones del cambio con roles y responsabilidades claras

**Capítulo 4: Plan de comunicación por stakeholder**

Diseña la estrategia de comunicación diferenciada:
- Para la alta dirección: cómo mantener su patrocinio activo durante todo el proceso
- Para los líderes de área: mensajes que conecten el cambio con sus objetivos de negocio
- Para los empleados afectados: comunicación empática que responda el "¿qué hay para mí?"
- Para los escépticos: escucha activa, validación de preocupaciones y respuestas honestas
- Momentos críticos de comunicación: antes del lanzamiento, durante y post-implementación

**Capítulo 5: Gestión de la resistencia**

Estrategias específicas para los tipos más comunes de resistencia:
- "No entiendo por qué este cambio es necesario" → técnicas de construcción de urgencia
- "Ya hemos intentado esto antes y no funcionó" → cómo trabajar con el bagaje histórico
- "Este cambio va a hacer mi trabajo más difícil" → co-diseño de soluciones con los afectados
- "La dirección no entiende la realidad operacional" → mecanismos de retroalimentación ascendente
- Resistencia silenciosa o pasiva: cómo detectarla y abordarla

**Capítulo 6: Métricas de adopción y ajuste del plan**

Sistema de seguimiento de la gestión de stakeholders:
- KPIs de adopción del cambio por grupo
- Pulsos de feedback durante la implementación
- Señales de que el plan de gestión de stakeholders necesita ajuste
- Cómo reportar el avance de la adopción a la dirección ejecutiva

**Entregables:**
1. Mapa de stakeholders con análisis de impacto y disposición para mi proceso de cambio
2. Plan de comunicación con mensajes clave y calendario para las primeras 8 semanas
3. Guía de activación para los agentes del cambio de cada área
4. Protocolo de respuesta rápida ante señales de resistencia crítica
5. Dashboard de seguimiento de adopción con métricas e indicadores clave
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión del cambio organizacional',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presentaciones al consejo directivo: comunicación financiera ejecutiva',
                'description'      => 'Domina el arte de presentar resultados financieros, proyecciones y recomendaciones estratégicas ante consejos de administración y comités ejecutivos. Aprende a construir narrativas financieras convincentes y a gestionar preguntas difíciles de consejeros experimentados.',
                'prompt_content'   => <<<EOT
Actúa como un CFO con experiencia presentando ante consejos de administración de empresas cotizadas y de capital privado. Has participado en más de 100 sesiones de consejo y conoces exactamente qué funciona y qué no cuando se presenta información financiera a consejeros experimentados e independientes.

Necesito preparar una presentación financiera para el consejo directivo y quiero hacerlo de manera impecable.

**Mi presentación:**
[Describe el contexto: qué vas a presentar (resultados trimestrales, presupuesto anual, solicitud de inversión, plan de reestructuración, análisis de adquisición, proyecciones a 3 años, etc.), el perfil del consejo (tamaño, perfil de los consejeros, nivel de detalle que suelen pedir) y cualquier tema sensible o punto de controversia anticipado]

**Sección 1: Entendiendo al consejo directivo como audiencia**

Guíame en la mentalidad y expectativas del consejo:
- Qué información necesitan para cumplir su función de supervisión y gobernanza
- La diferencia entre informar al consejo y pedir al consejo su aprobación
- Cómo los consejeros independientes piensan sobre el riesgo financiero
- Qué preguntas hacen los consejeros más experimentados y por qué
- Señales de que una presentación financiera no está cumpliendo su función

**Sección 2: Estructura narrativa de la presentación financiera**

Construye la estructura óptima para mi presentación:
1. Resumen ejecutivo: los mensajes más importantes en menos de 2 minutos
2. Desempeño del período: resultados vs. presupuesto vs. período anterior con narrativa
3. Análisis de variaciones: explicaciones claras de por qué los números son los que son
4. Riesgos y oportunidades: visión equilibrada sin maquillar la realidad
5. Perspectivas y recomendaciones: lo que el consejo debe aprobar o conocer
6. Preguntas y discusión: cómo facilitar sin perder el control

**Sección 3: Lenguaje y visualización financiera para el consejo**

Mejores prácticas para presentar datos financieros a consejeros:
- Principios de diseño de slides financieras para el consejo
- Cuándo usar tablas vs. gráficos vs. texto
- Cómo presentar tendencias sin maquillar resultados negativos
- El nivel de granularidad apropiado (evitar tanto el exceso como la superficialidad)
- Cómo manejar la comparativa entre presupuesto, real y pronóstico en una sola vista

**Sección 4: Narrativa de resultados difíciles**

Cómo comunicar malos resultados o situaciones complejas con honestidad y profesionalismo:
- La estructura del "semáforo" para transmitir urgencia sin crear pánico
- Cómo presentar resultados por debajo del presupuesto manteniendo la credibilidad
- Técnicas para comunicar riesgos sin sonar alarmista ni complaciente
- Cómo equilibrar transparencia con confidencialidad estratégica

**Sección 5: Gestión de preguntas del consejo**

Preparación para las preguntas más frecuentes y difíciles:
- Preguntas sobre proyecciones: "¿Qué tan confiados están en este pronóstico?"
- Preguntas de benchmarking: "¿Cómo se comparan con el sector?"
- Preguntas de riesgo: "¿Cuál es el escenario pesimista real?"
- Preguntas de gobernanza: "¿Tienen los controles internos adecuados?"
- Preguntas políticas: "¿Están alineados el equipo ejecutivo y la dirección?"

Para cada tipo: respuesta modelo, qué nunca decir y cómo redirigir.

**Sección 6: Materiales de apoyo y pre-lectura**

Diseña el paquete completo de información del consejo:
- Estructura del board pack ideal para financieros
- Qué incluir en el pre-read vs. qué presentar en vivo
- Cómo usar los anexos sin saturar al consejo
- Actas financieras: qué documentar de la sesión del consejo

**Entregables:**
1. Esquema completo de mi presentación adaptado a mi contexto específico
2. Borrador del resumen ejecutivo (los primeros 2 minutos)
3. 15 preguntas más probables del consejo con respuestas modelo
4. Checklist de preparación para los 5 días previos a la presentación
5. Template de email de seguimiento post-sesión de consejo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Presentación al consejo de administración',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de stakeholders en litigios y procesos legales complejos',
                'description'      => 'Aprende a gestionar las expectativas y comunicaciones con todos los actores involucrados en un litigio o proceso legal complejo: clientes, contraparte, tribunales, medios de comunicación y socios internos. Domina el equilibrio entre transparencia y confidencialidad estratégica.',
                'prompt_content'   => <<<EOT
Actúa como un socio de un despacho de abogados litigadores de primer nivel con más de 20 años de experiencia en litigios complejos, arbitrajes internacionales y procesos regulatorios. Eres conocido por tu habilidad para gestionar casos de alta visibilidad con múltiples stakeholders y por tu capacidad de traducir complejidad jurídica en comunicación clara y estratégica.

Tengo un asunto legal complejo con múltiples partes interesadas y necesito desarrollar una estrategia integral de gestión de stakeholders.

**Mi asunto:**
[Describe el tipo de proceso (litigio civil, arbitraje, proceso regulatorio, negociación de crisis, reestructuración), los actores involucrados, la etapa actual y los principales desafíos de gestión de partes]

**Parte 1: Mapeo de actores en el proceso legal**

Guíame en la identificación de todos los stakeholders del proceso:

Stakeholders internos del cliente:
- Tomadores de decisión (quién tiene autoridad para transigir o escalar)
- Stakeholders afectados operacionalmente por el proceso
- Equipo interno de legal o compliance y sus roles
- La junta directiva o comité ejecutivo y su nivel de involucración necesario

Stakeholders del proceso:
- Tribunal o árbitros: sus expectativas de forma, contenido y plazos
- Contraparte y sus abogados: estrategia de relación y negociación
- Peritos y testigos: gestión de su participación y preparación
- Mediadores o facilitadores en procesos alternativos

Stakeholders externos:
- Reguladores o autoridades: gestión de la relación y la comunicación obligatoria
- Medios de comunicación: estrategia de silencio vs. comunicación proactiva
- Socios comerciales o accionistas del cliente que pueden verse afectados

**Parte 2: Comunicación con el cliente durante el proceso**

Diseña el sistema de comunicación ideal con el cliente:
- Frecuencia y formato de actualizaciones según la etapa del proceso
- Cómo comunicar malas noticias procesales sin generar pánico
- La diferencia entre informar y pedir instrucciones: cuándo hacer cada cosa
- Gestión de las expectativas desde el principio: cómo prevenir conflictos sobre el resultado
- Documentación de instrucciones y decisiones del cliente para protección mutua

**Parte 3: Estrategia de comunicación hacia el exterior**

Gestión de comunicaciones externas sensibles:
- Reglas de comunicación con la contraparte y su abogado
- Cuándo comunicar proactivamente a reguladores vs. esperar requerimientos
- Estrategia de medios para casos de alta visibilidad pública
- Gestión de filtraciones de información y rumores del mercado
- Comunicados a socios, proveedores o acreedores afectados por el proceso

**Parte 4: Gestión de expectativas y toma de decisiones**

Cómo ayudar al cliente a tomar decisiones informadas en momentos críticos:
- Presentación de escenarios (mejor caso, caso esperado, peor caso) con probabilidades honestas
- La conversación de transacción: cuándo y cómo plantear la negociación de un acuerdo
- Gestión del cliente que quiere pelear aunque no sea lo más conveniente
- Gestión del cliente que quiere transigir prematuramente por presión de negocio
- Cómo documentar que el cliente recibió asesoramiento adecuado

**Parte 5: Coordinación de equipo multidisciplinario**

En procesos que involucran múltiples especialistas:
- Comunicación y coordinación entre abogados de distintas jurisdicciones o especialidades
- Gestión de peritos: briefing, preparación y alineamiento estratégico
- Coordinación con el equipo interno del cliente (finance, IT, RRHH) según el caso
- Gestión de la confidencialidad dentro del equipo ampliado

**Entregables:**
1. Mapa de stakeholders del proceso con análisis de intereses y estrategia para cada uno
2. Plan de comunicación con el cliente para las próximas 8 semanas
3. Protocolo de comunicaciones externas con reglas claras por tipo de stakeholder
4. Template de reporte de avance para el cliente con estructura estandarizada
5. Guía de las cinco conversaciones difíciles más comunes con el cliente y cómo abordarlas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de procesos legales complejos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de stakeholders en cuentas enterprise de Customer Success',
                'description'      => 'Aprende a identificar y gestionar a todos los actores dentro de una cuenta enterprise para maximizar la adopción, retención y expansión. Domina las técnicas para navegar la política interna del cliente y construir relaciones que protejan y hagan crecer la cuenta.',
                'prompt_content'   => <<<EOT
Actúa como un Director de Customer Success con experiencia en SaaS enterprise, especializado en la gestión de cuentas complejas con múltiples unidades de negocio, tomadores de decisión y usuarios en distintos niveles de la organización. Has gestionado carteras de cuentas con ARR de millones de dólares y has desarrollado metodologías propias para maximizar la retención y el crecimiento de cuentas enterprise.

Tengo una cuenta enterprise importante que necesita una estrategia de gestión de stakeholders más sofisticada para proteger la renovación y abrir oportunidades de expansión.

**Mi cuenta:**
[Describe la empresa cliente, el tamaño del contrato, el producto o servicio que usan, la etapa de la relación, los contactos que tienes actualmente y los principales desafíos: bajo uso, riesgo de churn, oportunidad de expansión, cambio de sponsor, etc.]

**Módulo 1: Auditoría de stakeholders de la cuenta**

Ayúdame a hacer un inventario completo de todos los actores relevantes:

Mapa de usuarios y compradores:
- Usuarios finales: quién usa el producto diariamente y cómo medir su satisfacción
- Power users o campeones internos: cómo identificarlos y activarlos
- Managers de los usuarios: sus expectativas sobre productividad y ROI del equipo
- Sponsor ejecutivo: quién aprobó la compra y qué necesita ver para renovar
- Influenciadores en la decisión de renovación o expansión
- Posibles bloqueadores: quién podría vetar la renovación o la expansión

Para cada tipo de stakeholder identificado:
- Frecuencia de contacto recomendada
- Qué métricas le importan y cómo presentarlas
- Riesgos específicos que representa y cómo mitigarlos

**Módulo 2: Diagnóstico de salud de la relación por stakeholder**

Cómo evaluar el estado actual de cada relación:
- Señales de que un usuario está satisfecho vs. en riesgo de abandonar el producto
- Cómo detectar cuando el sponsor ejecutivo está perdiendo interés o influencia
- Indicadores de que hay un competidor ganando terreno internamente
- La conversación de "chequeo de temperatura" y cómo hacerla sin sonar nervioso

**Módulo 3: Estrategia de acceso ejecutivo**

Cómo construir y mantener relaciones en los niveles más altos de la cuenta:
- Cómo solicitar una reunión con el C-suite sin que tu contacto actual se sienta saltado
- Preparación de la Business Review Ejecutiva (EBR): agenda, métricas, narrativa
- Cómo convertir una QBR técnica en una conversación estratégica de negocio
- Gestión del ejecutivo que nunca tiene tiempo para reunirse

**Módulo 4: Gestión de situaciones críticas**

Cómo manejar los momentos más difíciles en la relación con la cuenta:
- Cambio de sponsor ejecutivo: protocolo de transición y riesgo para la cuenta
- Fusión o adquisición del cliente: qué significa para tu contrato y relaciones
- Incidente de producto grave: gestión de la crisis con distintos niveles de la organización
- Renovación en riesgo: escalación interna y plan de rescate de la cuenta

**Módulo 5: Estrategia de expansión a través de stakeholders**

Cómo usar las relaciones existentes para crecer la cuenta:
- Identificación de nuevas unidades de negocio o departamentos con necesidades similares
- Técnica de referencia interna: cómo pedir a un campeón que te presente a otras áreas
- Construcción del caso de negocio para la expansión con múltiples stakeholders
- Coordinación entre CS y ventas para oportunidades de upsell y cross-sell

**Módulo 6: Sistema de gestión continua de la cuenta**

Diseña el sistema operativo para gestionar la cuenta de manera sostenible:
- Cadencia de contacto recomendada por tipo de stakeholder
- Estructura del Account Plan para cuentas enterprise
- Sistema de alertas tempranas de riesgo de churn
- Métricas de salud de la relación que debes reportar internamente

**Entregables:**
1. Mapa completo de stakeholders de mi cuenta con estrategia específica para cada uno
2. Plan de contacto para los próximos 60 días con prioridades claras
3. Agenda y guión para la próxima Business Review Ejecutiva
4. Protocolo de escalación para las 3 situaciones de riesgo más probables
5. Template de Account Plan para documentar y compartir con el equipo interno
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de cuentas enterprise',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Influencia sin autoridad: gestión de clientes y colaboradores como freelancer',
                'description'      => 'Como freelancer, tu éxito depende de tu capacidad para influir en clientes, colaboradores y subcontratistas sin tener autoridad formal sobre ellos. Aprende las técnicas de comunicación ejecutiva y gestión de stakeholders que te permitirán gestionar proyectos complejos y construir relaciones duraderas.',
                'prompt_content'   => <<<EOT
Actúa como un consultor independiente senior con más de 12 años de experiencia trabajando como freelancer en proyectos complejos de múltiples stakeholders. Has aprendido a navegar las dinámicas de poder en organizaciones cliente sin tener autoridad formal, y has construido una reputación sólida basada en tu capacidad de gestionar proyectos y relaciones de manera autónoma y profesional.

Necesito desarrollar mis habilidades de gestión de stakeholders como freelancer para manejar mejor mis proyectos actuales y construir relaciones que me lleven a más y mejores contratos.

**Mi situación:**
[Describe tu especialidad como freelancer, el tipo de proyectos que haces, tus clientes más comunes, los principales desafíos que tienes con clientes o colaboradores, y las situaciones específicas que quieres mejorar]

**Bloque 1: El freelancer como gestor de stakeholders sin autoridad**

Entendiendo tu posición única en la cadena de valor:
- Por qué la influencia sin autoridad es una ventaja competitiva del freelancer profesional
- La diferencia entre ser "el que ejecuta" y ser "el que lidera" aunque no seas empleado
- Cómo los clientes perciben a los freelancers que gestionan bien sus expectativas
- El error más común: confundir "yo solo soy freelancer" con no tener responsabilidades de liderazgo

**Bloque 2: Mapeo de stakeholders en proyectos de cliente**

Identifica a todos los actores que impactan tu trabajo:
- El contacto directo: quién te contrató y qué necesita de ti
- El sponsor invisible: quién aprobó el presupuesto y qué necesita para renovar
- Los usuarios de tu trabajo: quién usará lo que produces y cómo medir su satisfacción
- Los bloqueadores: quién puede ralentizar o cancelar el proyecto y cómo gestionarlos
- Los aliados potenciales: quién dentro del cliente puede ayudarte a tener éxito

Para cada tipo de actor: cómo identificarlo, cómo relacionarte y qué información necesitas de él.

**Bloque 3: Comunicación ejecutiva como freelancer**

Cómo elevar la calidad de tus comunicaciones con clientes:
- La diferencia entre actualizar y liderar la comunicación del proyecto
- Estructura de actualizaciones de proyecto que generan confianza
- Cómo comunicar problemas, retrasos o errores manteniendo la credibilidad
- Técnicas para hacer preguntas de alto impacto que demuestren tu expertise
- El arte del email de proyecto: claro, accionable y profesional

**Bloque 4: Gestión de expectativas desde el día uno**

Cómo construir una relación basada en expectativas realistas:
- La conversación de kick-off que previene el 80% de los conflictos
- Cómo documentar acuerdos de alcance, plazos y proceso de revisión
- Técnicas para manejar el "scope creep" sin arruinar la relación con el cliente
- Cuándo y cómo negociar cambios de alcance en mitad del proyecto
- El briefing de cliente ideal: qué debes saber antes de empezar a trabajar

**Bloque 5: Gestión de colaboradores y subcontratistas**

Cómo liderar a otros profesionales sin ser su jefe:
- Cómo briefing a colaboradores para que entreguen lo que necesitas
- Técnicas para hacer seguimiento sin microgestionar
- Cómo manejar entregas de mala calidad de subcontratistas
- Gestión de conflictos entre colaboradores en un proyecto tuyo
- Proteger tu reputación cuando un colaborador falla

**Bloque 6: Construcción de relaciones de largo plazo**

Estrategias para convertir clientes en fuentes recurrentes de trabajo:
- El proceso de cierre de proyecto que abre la puerta al siguiente
- Cómo mantenerte presente en la mente del cliente sin ser molesto
- Técnicas para pedir referencias y casos de estudio de manera natural
- Cómo manejar la transición cuando tu contacto principal cambia de empresa
- Estrategia de precios que refleje el valor de la relación, no solo el trabajo

**Entregables:**
1. Plantilla de mapa de stakeholders para mis proyectos de cliente actuales
2. Guía de la conversación de kick-off con las 10 preguntas que debo hacer siempre
3. Template de actualización de proyecto semanal profesional y conciso
4. Protocolo para gestionar el scope creep sin dañar la relación con el cliente
5. Sistema de seguimiento post-proyecto para mantener relaciones y generar referencias
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de proyectos y clientes como independiente',
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
