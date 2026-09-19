<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills526Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing ético de apps de salud mental con IA',
                'description'      => 'Aprende a diseñar campañas de marketing responsables para plataformas de salud mental y bienestar emocional apoyadas en inteligencia artificial, equilibrando eficacia comercial con sensibilidad hacia usuarios vulnerables.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en el sector de salud mental y bienestar emocional. Tu objetivo es ayudarme a desarrollar una estrategia de marketing ético y efectivo para una aplicación de salud mental que utiliza inteligencia artificial para ofrecer apoyo emocional, detección temprana de síntomas de ansiedad y depresión, y recursos de terapia digital.

**Contexto del proyecto:**
- Nombre provisional de la app: [NOMBRE_APP]
- Público objetivo: adultos de 25 a 45 años con estrés laboral moderado-alto
- Mercado: España y Latinoamérica hispanohablante
- Modelo de negocio: freemium con suscripción mensual de €9,99
- Diferencial: combina IA conversacional con seguimiento de bienestar diario

**instrucción principal:**
Desarrolla una estrategia completa de marketing ético para los próximos 6 meses. El marketing de salud mental requiere un enfoque especialmente cuidadoso para no estigmatizar, no crear falsas expectativas terapéuticas y no aprovecharse de la vulnerabilidad del usuario.

**Estructura que debes seguir:**

1. **Análisis de mensajes seguros vs. problemáticos**
   - Define qué lenguaje está permitido y cuál debe evitarse en comunicaciones de salud mental
   - Proporciona ejemplos concretos de titulares éticos vs. titulares que podrían causar daño
   - Explica cómo referirse a la IA sin que el usuario piense que sustituye a un profesional de salud mental

2. **Segmentación y buyer personas**
   - Crea 3 buyer personas detalladas para el público hispanohablante
   - Identifica sus canales digitales preferidos, sus barreras de adopción y sus motivaciones
   - Sugiere mensajes específicos para cada persona que respeten sus vulnerabilidades

3. **Estrategia de contenidos**
   - Diseña un calendario editorial de 30 días con temas, formatos y plataformas
   - Incluye contenido educativo sobre salud mental, desmitificación de la terapia digital y casos de uso de la IA
   - Propón formatos: artículos de blog, reels, podcasts, newsletters y webinars gratuitos

4. **Campañas de performance con sensibilidad**
   - Guía para crear anuncios en Meta e Instagram que no activen rechazo ni estigma
   - Recomendaciones sobre targeting: qué audiencias usar y cuáles evitar por razones éticas
   - Métricas clave y objetivos de conversión realistas para el sector

5. **Gestión de la comunidad y el boca a boca**
   - Estrategia de testimonios y reseñas que protejan la privacidad del usuario
   - Cómo construir una comunidad online de bienestar sin que se convierta en un foro de crisis
   - Plan de respuesta ante comentarios negativos o usuarios en situaciones de riesgo

6. **Cumplimiento legal y plataformas**
   - Resumen de restricciones de publicidad de salud mental en Meta, Google y TikTok
   - Requisitos de disclaimer que deben aparecer en toda comunicación
   - Cómo comunicar el papel de la IA respetando el Reglamento de IA de la UE

Al final, genera un documento de tono de comunicación (tone of voice) de una página que el equipo pueda usar como referencia diaria para mantener coherencia ética en todos los mensajes de la marca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing responsable para apps de salud mental con IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de chatbots de apoyo emocional con IA',
                'description'      => 'Guía técnica para construir chatbots conversacionales de apoyo emocional con IA, integrando modelos de lenguaje avanzados, salvaguardas de seguridad y flujos de escalada a profesionales humanos.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en inteligencia artificial aplicada a la salud mental. Necesito tu ayuda para diseñar e implementar un chatbot de apoyo emocional que sea técnicamente robusto, clínicamente seguro y éticamente responsable.

**Descripción del sistema a construir:**
- Plataforma: aplicación móvil (iOS/Android) con backend en la nube
- Stack tecnológico preferido: [TU_STACK, por ejemplo Python/FastAPI + React Native]
- Integración: API de Claude de Anthropic como motor de lenguaje
- Usuarios esperados: entre 500 y 5.000 usuarios activos diarios en la fase inicial

**objetivo del ejercicio:**
Diseña la arquitectura completa del chatbot y proporciona guía de implementación para cada capa del sistema, con especial énfasis en las salvaguardas de seguridad que diferencian un chatbot de bienestar de uno de propósito general.

**Secciones requeridas:**

1. **Arquitectura del sistema**
   - Diagrama en texto (ASCII o descripción estructurada) de los componentes principales
   - Flujo de datos desde el mensaje del usuario hasta la respuesta del chatbot
   - Componentes críticos: motor de IA, base de datos de sesiones, sistema de escalada y módulo de detección de crisis

2. **Diseño del system prompt y personalidad del chatbot**
   - Escribe un system prompt base de 300 palabras que defina la personalidad, límites y comportamientos del chatbot
   - Incluye instrucciones para que el bot nunca simule ser terapeuta, siempre valide las emociones y detecte señales de crisis
   - Define cómo el bot debe responder si el usuario menciona pensamientos de autolesión

3. **Sistema de detección de crisis y escalada**
   - Lista de palabras clave y patrones semánticos que deben activar el protocolo de crisis
   - Flujo de escalada: detección → mensaje de seguridad → oferta de recursos → notificación al equipo humano
   - Integración con líneas de crisis locales (Teléfono de la Esperanza, líneas de cada país)

4. **Gestión de contexto y memoria de sesión**
   - Cómo manejar el historial de conversación de forma eficiente sin almacenar datos sensibles innecesariamente
   - Estrategia de resumen de sesiones largas para optimizar tokens
   - Política de retención de datos conforme al RGPD

5. **Evaluación y métricas de calidad**
   - KPIs técnicos: latencia de respuesta, tasa de errores, tiempo de disponibilidad
   - KPIs de experiencia: satisfacción del usuario, tasa de abandono de sesión, tasa de retorno
   - Cómo hacer pruebas de calidad de las respuestas del chatbot sin exponer datos reales de usuarios

6. **Consideraciones de seguridad y privacidad**
   - Cifrado de mensajes en tránsito y en reposo
   - Anonimización de datos para análisis y mejora del modelo
   - Plan de respuesta ante brechas de seguridad en una plataforma de datos sensibles

Finaliza con un roadmap de desarrollo de 12 semanas, indicando qué funcionalidades deben priorizarse para el MVP y cuáles pueden esperar a versiones posteriores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Arquitectura y desarrollo de chatbot de apoyo emocional con IA segura',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño UX para apps de salud mental con IA',
                'description'      => 'Principios y metodología para diseñar interfaces de aplicaciones de salud mental que integran IA, priorizando la accesibilidad emocional, la reducción de fricción y la construcción de confianza con usuarios vulnerables.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en aplicaciones de salud y bienestar con experiencia en psicología del comportamiento digital. Necesito que me guíes en el proceso completo de diseño de experiencia de usuario para una aplicación de salud mental que incorpora inteligencia artificial como apoyo emocional.

**Contexto del proyecto:**
- App de bienestar emocional con chatbot de IA, diario de emociones y recursos de psicoeducación
- Usuarios objetivo: adultos con ansiedad leve o moderada, sin diagnóstico clínico previo
- Plataformas: iOS y Android, con posible versión web en el futuro
- El equipo necesita un sistema de diseño desde cero

**tarea principal:**
Desarrolla una guía completa de diseño UX para esta aplicación, desde los principios filosóficos hasta los patrones de interacción específicos, teniendo en cuenta que los usuarios pueden encontrarse en estados emocionales frágiles cuando usan la app.

**Áreas de diseño a desarrollar:**

1. **Principios de diseño compasivo**
   - Define 5 principios de diseño específicos para apps de salud mental (más allá de los genéricos de usabilidad)
   - Explica cómo el diseño puede reducir la vergüenza asociada a buscar ayuda
   - Cómo comunicar la presencia de IA de forma transparente sin generar rechazo

2. **Arquitectura de la información y flujos principales**
   - Estructura de navegación para los módulos principales: check-in diario, chat con IA, biblioteca de recursos y perfil
   - Flujo de onboarding que establezca expectativas realistas sobre el rol de la IA
   - Flujo de crisis: qué pantallas mostrar cuando el sistema detecta que el usuario puede estar en riesgo

3. **Sistema visual y tipografía**
   - Paleta de colores recomendada con justificación psicológica de cada elección
   - Tipografía y tamaños mínimos para garantizar legibilidad en estados de estrés
   - Iconografía: cómo representar emociones de forma inclusiva y culturalmente neutra

4. **Diseño de la interacción con el chatbot de IA**
   - Patrones de interfaz para la conversación: burbuja, tarjetas de respuesta rápida, indicadores de escritura
   - Cómo indicar visualmente los límites del chatbot (que no es un terapeuta)
   - Diseño de los mensajes de crisis: urgencia sin alarma, calidez sin falsedad

5. **Accesibilidad y diseño inclusivo**
   - Requisitos mínimos de accesibilidad (WCAG 2.1 nivel AA) aplicados a este contexto
   - Consideraciones para usuarios daltónicos, con baja visión o con dificultades motoras
   - Adaptaciones culturales para el mercado hispanohablante (España vs. México vs. Argentina)

6. **Métricas de UX y evaluación**
   - Cómo medir la experiencia emocional del usuario (más allá del NPS y las descargas)
   - Protocolo de pruebas de usabilidad con usuarios vulnerables sin causarles daño
   - Indicadores de que el diseño está fallando en términos de bienestar del usuario

Proporciona al final una lista de los 10 patrones de diseño más importantes (anti-patrones a evitar) en apps de salud mental con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de diseño UX compasivo para aplicaciones de salud mental con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategias de ventas para plataformas de bienestar con IA',
                'description'      => 'Metodología de ventas B2B y B2C para soluciones de bienestar emocional con IA, adaptada a las objeciones y sensibilidades específicas del sector de salud mental corporativa y consumidor.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas especializado en SaaS de salud corporativa y bienestar con inteligencia artificial. Me ayudarás a construir una metodología de ventas completa para una plataforma de bienestar emocional con IA que se vende tanto a empresas (B2B) como directamente a consumidores (B2C).

**Descripción del producto:**
- Plataforma SaaS de bienestar emocional con chatbot de IA, programas de mindfulness y métricas de bienestar laboral
- Precio B2B: desde €5 por empleado/mes (mínimo 50 empleados)
- Precio B2C: €9,99/mes o €79,99/año
- Ciclo de venta B2B: entre 4 y 12 semanas según el tamaño de la empresa
- Diferencial competitivo: precisión de detección temprana de burnout con IA

**instrucción central:**
Diseña una guía completa de ventas que cubra ambos canales (B2B y B2C), con especial atención a las objeciones específicas del sector de salud mental: privacidad de datos, escepticismo sobre la IA, y resistencia cultural a hablar de salud emocional en el trabajo.

**Bloques de contenido requeridos:**

1. **Perfil del comprador ideal y mapa de stakeholders B2B**
   - Identifica los 4 perfiles clave en una venta B2B de bienestar corporativo: sponsor, decisor, usuario y bloqueador
   - Define qué motiva a cada perfil y qué le genera rechazo
   - Cómo acceder a cada perfil y qué mensaje usar en el primer contacto

2. **Propuesta de valor diferenciada**
   - Escribe 3 versiones de la propuesta de valor: para el director de RRHH, para el CFO y para el empleado
   - Cómo cuantificar el ROI de reducir el absentismo y el presentismo con datos de sector
   - Argumentario para superar el escepticismo sobre "IA en salud mental"

3. **Gestión de objeciones críticas**
   - Top 10 objeciones más frecuentes y respuestas detalladas para cada una
   - Objeciones especiales del sector: "la IA no puede reemplazar a un psicólogo", "¿quién accede a los datos de mis empleados?", "¿qué pasa si alguien tiene una crisis?"
   - Técnica de reencuadre para convertir el miedo a la IA en ventaja competitiva

4. **Proceso de ventas B2B paso a paso**
   - Define las 6 etapas del ciclo de venta con criterios de avance entre etapas
   - Plantilla de correo para el primer contacto con el responsable de RRHH
   - Guion de la demo de producto de 30 minutos: qué mostrar, en qué orden y cómo cerrar

5. **Canal B2C: conversión y retención**
   - Funnel de conversión desde el primer contacto hasta la suscripción de pago
   - Estrategia de trial gratuito: duración óptima, qué funciones incluir y cómo convertir al pago
   - Táctica de recuperación de usuarios que cancelan la suscripción

6. **Métricas y pipeline**
   - KPIs del proceso de venta B2B: tasa de conversión por etapa, velocidad del pipeline, ticket medio
   - Cómo usar la IA para priorizar leads y predecir cierre
   - Plantilla de informe semanal de ventas para el equipo

Al final, redacta un email de prospección B2B de 150 palabras para un director de RRHH de una empresa de 200 empleados del sector tecnológico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Metodología de ventas B2B y B2C para plataformas de bienestar emocional con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para apps de salud mental con IA',
                'description'      => 'Marco de trabajo para product managers que desarrollan aplicaciones de salud mental con inteligencia artificial, cubriendo discovery ético, priorización con impacto clínico y métricas de bienestar como norte estrella.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior especializado en healthtech y aplicaciones de bienestar con inteligencia artificial. Tu experiencia combina metodologías ágiles con comprensión de los requisitos clínicos y éticos del sector de salud mental. Necesito que me guíes en la gestión completa de producto de una app de salud mental con IA.

**Situación del producto:**
- App de bienestar emocional con chatbot de IA, diario de emociones, seguimiento de hábitos y conexión con terapeutas
- Etapa actual: producto con 2.000 usuarios activos mensuales, buscando crecer a 20.000 en 12 meses
- Equipo: 2 desarrolladores, 1 diseñadora, 1 especialista en IA y yo como PM
- Principal desafío: equilibrar el crecimiento rápido con la responsabilidad clínica

**objetivo del ejercicio:**
Construye un framework de product management adaptado a las particularidades éticas y clínicas del sector de salud mental con IA, que me permita tomar mejores decisiones de producto sin comprometer la seguridad y el bienestar de los usuarios.

**Secciones del framework:**

1. **Discovery ético en salud mental**
   - Protocolo de entrevistas con usuarios que contemple su vulnerabilidad emocional
   - Cómo hacer research sin revictimizar ni explotar la experiencia de usuarios con problemas de salud mental
   - Qué señales cuantitativas y cualitativas indican que el producto está causando daño en lugar de ayudar

2. **Norte estrella y métricas de bienestar**
   - Propón una métrica de norte estrella que mida el impacto real en el bienestar del usuario (más allá del DAU o la retención)
   - Define el árbol de métricas completo: de la norte estrella a las métricas de equipo
   - Cómo medir si la IA está mejorando o empeorando los resultados de salud mental de los usuarios

3. **Priorización con lente de impacto clínico**
   - Marco de priorización que añade una dimensión de "riesgo de daño" a los frameworks clásicos (RICE, ICE)
   - Cómo involucrar a asesores clínicos en el proceso de priorización sin que paralicen el desarrollo
   - Criterios para decidir cuándo NO lanzar una feature aunque tenga alta demanda

4. **Gestión de la IA como parte del producto**
   - Proceso para evaluar y aprobar cambios en el comportamiento del chatbot de IA
   - Cómo detectar y responder a alucinaciones o respuestas dañinas de la IA en producción
   - Roadmap de mejora continua de la IA: evaluación, reentrenamiento y comunicación de cambios a usuarios

5. **Comunicación con stakeholders en un producto sensible**
   - Cómo presentar el roadmap a inversores sin simplificar en exceso los riesgos clínicos
   - Gestión de crisis cuando la prensa publica un caso negativo relacionado con el producto
   - Cómo comunicar a los usuarios los cambios de la IA que afectan a su experiencia

6. **Ética, regulación y gobernanza de producto**
   - Requisitos del Reglamento de IA de la UE aplicables a una app de salud mental de alto riesgo
   - Proceso de revisión ética de nuevas features antes de lanzarlas
   - Estructura de un comité de ética de producto para una startup de salud mental

Termina con una plantilla de OKRs trimestrales para un equipo de producto de salud mental con IA que equilibre crecimiento con impacto en el bienestar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Framework de product management ético para aplicaciones de salud mental con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programas de bienestar emocional para empleados con IA',
                'description'      => 'Diseña e implementa programas corporativos de bienestar emocional apoyados en inteligencia artificial, midiendo su impacto en el clima laboral, la retención de talento y la productividad.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Recursos Humanos y bienestar organizacional con experiencia en la implementación de programas de salud mental en empresas. Tu conocimiento incluye el uso de herramientas de inteligencia artificial para medir el bienestar emocional de los equipos y diseñar intervenciones preventivas. Necesito tu ayuda para diseñar un programa completo de bienestar emocional corporativo con IA.

**Contexto de la organización:**
- Empresa: [NOMBRE_EMPRESA], sector tecnológico, 250 empleados
- Situación actual: tasa de rotación del 22% anual, índice de absentismo por estrés del 8%, sin programa de bienestar estructurado
- Presupuesto disponible: €45.000 anuales para el programa
- Modalidad de trabajo: híbrida (3 días presencial, 2 remoto)

**tarea central:**
Diseña un programa de bienestar emocional corporativo de 12 meses que integre herramientas de IA, con un plan de implementación progresivo, mecanismos de medición del impacto y estrategias para superar la resistencia cultural a hablar de salud mental en el trabajo.

**Componentes del programa:**

1. **Diagnóstico inicial con IA**
   - Diseña una encuesta de pulso de bienestar emocional de 10 preguntas
   - Explica cómo usar IA para analizar los resultados e identificar patrones de riesgo por departamento
   - Métricas de línea base que debes medir antes de iniciar el programa

2. **Estructura del programa por trimestres**
   - Q1: Sensibilización y normalización de la salud mental (actividades, formaciones y comunicaciones)
   - Q2: Implementación de herramientas de IA de apoyo emocional accesibles para todos los empleados
   - Q3: Programas de prevención del burnout con seguimiento individual con IA
   - Q4: Evaluación de impacto y rediseño del programa para el año siguiente

3. **Selección e implementación de herramientas de IA**
   - Criterios para evaluar y seleccionar una plataforma de bienestar con IA (privacidad, evidencia clínica, usabilidad)
   - Plan de comunicación interna para el lanzamiento de la herramienta de IA
   - Protocolo para gestionar situaciones de crisis detectadas por la IA

4. **Formación de managers como agentes de bienestar**
   - Currículum de formación en salud mental para líderes de equipo (8 horas)
   - Cómo los managers pueden usar los datos de IA para detectar señales tempranas de burnout sin invadir la privacidad
   - Guion para que un manager tenga una conversación de apoyo con un empleado que muestra señales de estrés

5. **Medición del impacto y ROI**
   - KPIs del programa: tasa de adopción de la herramienta, índice de bienestar, absentismo, rotación y productividad
   - Cómo calcular el ROI del programa de bienestar en términos financieros para presentarlo a dirección
   - Metodología para el informe semestral de bienestar organizacional

6. **Gestión de la privacidad y la confianza**
   - Política de privacidad del programa que garantice que los datos individuales nunca llegan a los managers
   - Cómo comunicar las garantías de confidencialidad para aumentar la adopción
   - Qué datos se comparten con la empresa (solo agregados) y cómo presentarlos sin estigmatizar

Termina con un plan de comunicación interna de 4 semanas para el lanzamiento del programa, incluyendo mensajes para el correo electrónico, Slack e intranet.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño e implementación de programa corporativo de bienestar emocional con IA',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del mercado de mental health tech con IA',
                'description'      => 'Herramientas de análisis financiero y valoración para empresas del sector mental health tech, aplicando inteligencia artificial para modelar el crecimiento, evaluar inversiones y comparar competidores en este mercado emergente.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector healthtech y, más específicamente, en el mercado de mental health technology. Tienes experiencia en valoración de startups, análisis de tendencias de inversión y modelado financiero para empresas de SaaS de salud. Necesito tu ayuda para realizar un análisis financiero completo del sector de mental health tech con IA.

**objetivo del análisis:**
Necesito un análisis financiero exhaustivo que me permita tomar decisiones de inversión o de negocio en el sector de salud mental con inteligencia artificial. El análisis debe cubrir tanto el panorama macro del mercado como el microanálisis de un proyecto específico.

**Empresa o proyecto a analizar:**
- Nombre: [NOMBRE_EMPRESA]
- Modelo: SaaS B2B de bienestar emocional corporativo con IA
- ARR actual: €180.000
- Crecimiento mensual: 8%
- Churn mensual: 3,2%
- CAC: €1.200 (B2B, ciclo de venta medio de 8 semanas)
- LTV promedio: €4.800 (contrato medio de 24 meses)

**Estructura del análisis:**

1. **Panorama del mercado global de mental health tech**
   - Tamaño del mercado global en 2025 y proyecciones hasta 2030
   - Principales subcategorías: apps de consumidor, plataformas B2B, teleterapia y herramientas de IA
   - Tendencias de inversión: rondas de venture capital más relevantes de los últimos 12 meses
   - Impacto de la regulación (Reglamento de IA de la UE, FDA Digital Health) en las valoraciones

2. **Análisis competitivo y benchmarking financiero**
   - Identifica los 5 principales competidores globales y sus métricas públicas (ARR, valoración, múltiplos)
   - Compara los múltiplos de valoración del sector (ARR múltiple, EV/Revenue) con SaaS generalista
   - Análisis de las ventajas competitivas sostenibles en el sector: datos propios, efectos de red y switching costs

3. **Modelo financiero del proyecto**
   - Construye las proyecciones de P&G para 3 años basándote en los datos proporcionados
   - Calcula el punto de equilibrio y el runway necesario para alcanzarlo
   - Análisis de sensibilidad: ¿qué pasa si el churn sube al 5% o si el CAC aumenta un 30%?

4. **Valoración de la empresa**
   - Aplica 3 métodos de valoración: múltiplo de ARR, DCF simplificado y comparables de transacciones recientes
   - Rango de valoración resultante y justificación
   - Qué métricas debe mejorar la empresa para aumentar su valoración en la próxima ronda

5. **Análisis de inversión y retorno**
   - Si un inversor pusiera €500.000 hoy a cambio del 15% del equity, ¿cuál sería el retorno esperado en 5 años?
   - Escenarios: conservador, base y optimista con sus supuestos
   - Red flags financieros que deberían preocupar a cualquier inversor del sector

6. **Riesgos financieros específicos del sector**
   - Riesgo regulatorio: cómo los cambios en la normativa de IA pueden afectar a las valoraciones
   - Riesgo de responsabilidad civil: impacto de un incidente de salud mental en la valoración
   - Riesgo de concentración de clientes en el modelo B2B

Finaliza con un dashboard de métricas de 1 página con los 12 KPIs financieros más importantes para monitorizar mensualmente una empresa de mental health tech con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis financiero y valoración de empresas en el sector mental health tech con IA',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y ético para apps de salud mental con IA',
                'description'      => 'Análisis jurídico completo de los requisitos legales, responsabilidades y marcos éticos aplicables al desarrollo y comercialización de aplicaciones de salud mental que utilizan inteligencia artificial en España y la UE.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital, protección de datos y regulación de inteligencia artificial con expertise en el sector sanitario. Tu conocimiento abarca la normativa europea, española y las regulaciones emergentes específicas para mental health tech. Necesito un análisis legal completo para una startup que desarrolla una app de salud mental con IA.

**Descripción del producto a analizar legalmente:**
- App de bienestar emocional con chatbot de IA conversacional
- Funciones: seguimiento de emociones, apoyo psicoeducativo, detección de patrones de estrés
- Usuarios: consumidores adultos y empresas (para programas de bienestar laboral)
- Datos que recoge: conversaciones, estado de ánimo, hábitos de sueño y respuestas a cuestionarios validados
- País de operación principal: España; expansión prevista a México y Argentina

**instrucción principal:**
Elabora un análisis legal exhaustivo que cubra todos los riesgos jurídicos y obligaciones regulatorias de este tipo de producto, con recomendaciones concretas y accionables para minimizar la exposición legal sin comprometer la viabilidad del negocio.

**Bloques del análisis legal:**

1. **Clasificación regulatoria del producto**
   - ¿Es esta app un producto sanitario o un producto de bienestar general? Análisis bajo el Reglamento (UE) 2017/745 de productos sanitarios
   - Clasificación bajo el Reglamento de IA de la UE: ¿es un sistema de IA de alto riesgo?
   - Consecuencias de cada clasificación en términos de obligaciones y costes de cumplimiento

2. **Protección de datos y RGPD**
   - Análisis de los datos de salud mental como datos especialmente sensibles bajo el artículo 9 del RGPD
   - Base jurídica para el tratamiento: consentimiento explícito, interés legítimo o contrato
   - Obligaciones específicas: evaluación de impacto (DPIA), registro de actividades, delegado de protección de datos
   - Transferencias internacionales de datos a México y Argentina: mecanismos legales disponibles

3. **Responsabilidad civil y penal**
   - Responsabilidad del desarrollador si el chatbot de IA proporciona un consejo dañino a un usuario en crisis
   - Análisis de la Directiva de responsabilidad por IA (propuesta de la Comisión Europea)
   - Cláusulas de exención de responsabilidad: qué es legalmente válido y qué no
   - Seguro de responsabilidad civil profesional: coberturas necesarias para el sector

4. **Obligaciones específicas de salud mental**
   - Marco legal para la telepsicología en España: qué puede hacer una app y qué solo puede hacer un psicólogo colegiado
   - Regulación de la publicidad de productos de salud en España (Ley 34/1988 y normativa sanitaria)
   - Obligación de derivación a servicios de emergencias y responsabilidad legal asociada

5. **Términos y condiciones y políticas de privacidad**
   - Cláusulas imprescindibles en los T&C de una app de salud mental con IA
   - Cómo redactar la política de privacidad de forma que sea legalmente válida y comprensible para el usuario
   - Gestión del consentimiento: diseño de la pantalla de aceptación que resista una auditoría de la AEPD

6. **Estrategia legal para la expansión internacional**
   - Principales diferencias entre el marco legal español/europeo y el mexicano y argentino
   - Estructura societaria recomendada para operar en múltiples jurisdicciones
   - Hoja de ruta de cumplimiento regulatorio para los primeros 18 meses

Finaliza con una lista de verificación legal de 20 puntos que el fundador debe revisar antes de lanzar la app al mercado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Análisis legal completo para apps de salud mental con IA en España y la UE',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte empático con IA para plataformas de salud mental',
                'description'      => 'Guía para equipos de customer success que operan en plataformas de salud mental con IA, cubriendo protocolos de intervención en crisis, comunicación empática y métricas de satisfacción adaptadas al sector.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success con experiencia en plataformas digitales de salud mental y bienestar emocional. Tu trabajo implica entrenar a equipos de soporte para manejar situaciones sensibles con usuarios que pueden estar en estados emocionales vulnerables. Necesito tu ayuda para desarrollar un manual completo de customer success para una plataforma de salud mental con IA.

**Contexto de la plataforma:**
- App de bienestar emocional con chatbot de IA, diario de emociones y acceso a terapeutas
- Base de usuarios: 8.000 usuarios activos (70% B2C, 30% B2B corporativo)
- Equipo de CS: 3 agentes a tiempo completo y 1 responsable
- Canales de soporte: chat in-app, correo electrónico y WhatsApp para usuarios premium
- Principal desafío: gestionar usuarios en situaciones de crisis emocional que contactan al soporte

**objetivo:**
Desarrolla un manual operativo completo para el equipo de customer success, adaptado a las particularidades de trabajar con usuarios de salud mental, incluyendo protocolos de crisis, comunicación empática y métricas específicas del sector.

**Capítulos del manual:**

1. **Fundamentos de comunicación empática en salud mental**
   - Los 5 principios de la escucha activa aplicados al soporte digital
   - Diferencia entre empatía y simpatía en el contexto de soporte a usuarios vulnerables
   - Palabras y frases que debes usar y cuáles debes evitar absolutamente
   - Cómo mantener el equilibrio emocional del agente cuando atiende casos difíciles

2. **Protocolo de detección y manejo de crisis**
   - Señales de alarma en los mensajes de texto que indican que un usuario puede estar en riesgo
   - Árbol de decisión: cómo responder según el nivel de urgencia detectado
   - Guion de respuesta para usuario en crisis: qué decir, en qué orden y cómo derivar
   - Coordinación con el equipo de salud o terapeutas de la plataforma cuando es necesario
   - Registro del incidente y seguimiento posterior

3. **Gestión de quejas sobre el chatbot de IA**
   - Cómo responder cuando un usuario se queja de que la IA dijo algo inapropiado o dañino
   - Proceso interno de escalada para revisar el incidente con el equipo de producto
   - Comunicación con el usuario: cómo reconocer el fallo sin crear pánico ni aumentar la desconfianza
   - Cuándo y cómo ofrecer compensación o acceso a un terapeuta humano

4. **Onboarding y éxito temprano del usuario**
   - Secuencia de mensajes de bienvenida que establezcan expectativas realistas sobre la IA
   - Cómo identificar a los usuarios con mayor riesgo de churn en los primeros 7 días
   - Proceso de check-in proactivo con usuarios que no han interactuado con la app en más de 5 días
   - Métricas de activación: qué acciones debe completar el usuario para considerarse "activado"

5. **Soporte B2B: gestión de cuentas corporativas**
   - Diferencias en la atención al responsable de RRHH vs. al empleado usuario final
   - Informes de bienestar para el cliente corporativo: qué datos compartir y con qué nivel de agregación
   - Cómo manejar la solicitud de un responsable de RRHH de conocer el estado de salud de un empleado específico (respuesta negativa con alternativas)
   - Revisiones de cuenta trimestrales: agenda, métricas y cómo demostrar el valor del servicio

6. **Métricas y KPIs adaptados al sector de salud mental**
   - Definición de las métricas estándar de CS adaptadas: CSAT, NPS y CES en el contexto de salud mental
   - Métricas específicas del sector: tasa de usuarios que completan el programa de bienestar, frecuencia de uso del chatbot y tasa de derivación a terapeuta humano
   - Cómo reportar resultados al equipo de producto y a los clientes corporativos

Incluye al final 10 plantillas de respuesta para las situaciones más frecuentes, incluyendo la gestión de un usuario en crisis, quejas sobre la IA y solicitudes de reembolso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Manual de customer success empático para plataformas de salud mental con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en bienestar digital con IA',
                'description'      => 'Guía para profesionales independientes que quieren ofrecer servicios de consultoría en bienestar digital y salud mental con IA, desde la definición del servicio hasta la captación de clientes y la entrega de proyectos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocios especializado en ayudar a profesionales independientes a construir servicios de consultoría en mercados emergentes. Tu expertise incluye el posicionamiento de servicios de bienestar digital con IA, la definición de propuestas de valor diferenciadas y el desarrollo de un modelo de negocio sostenible para consultores freelance en salud mental tech.

**Mi situación:**
- Profesional con experiencia en: [TU EXPERIENCIA, por ejemplo psicología, RRHH, coaching o tecnología]
- Conocimiento de IA: nivel [básico/intermedio/avanzado]
- Red de contactos actual: [describe tu red, por ejemplo 200 contactos en LinkedIn del sector corporativo]
- Disponibilidad: [número de horas semanales disponibles]
- Objetivo de ingresos: €[OBJETIVO] mensuales en los próximos 12 meses

**instrucción principal:**
Ayúdame a construir un negocio de consultoría freelance en bienestar digital con IA desde cero. Quiero ofrecer servicios a empresas que quieren implementar programas de bienestar emocional para sus empleados usando herramientas de IA, o a startups de salud mental que necesitan expertise externo.

**Plan de negocio para desarrollar:**

1. **Definición del servicio y posicionamiento**
   - Identifica los 3 servicios de mayor demanda y menor competencia en consultoría de bienestar digital con IA para mi perfil
   - Escribe una propuesta de valor de 2 frases que me diferencie de los coaches de bienestar genéricos
   - Define mi nicho específico: sector industrial, tamaño de empresa, tipo de problema que resuelvo
   - Análisis de la competencia: quién más ofrece esto y cómo me diferencio

2. **Estructura de servicios y precios**
   - Diseña un portafolio de 3 productos: un servicio de entrada de bajo precio (menos de €500), uno principal (€2.000-€5.000) y uno premium (más de €8.000)
   - Justificación del pricing basada en el valor entregado, no en las horas trabajadas
   - Modelo de retainer mensual: qué incluye y cómo proponerlo a un cliente tras el primer proyecto

3. **Captación de primeros clientes**
   - Plan de 90 días para conseguir los primeros 3 clientes de pago
   - Estrategia de LinkedIn: contenido que debo publicar, frecuencia y formatos para posicionarme como experto
   - Cómo usar mi red actual para conseguir mis primeras reuniones de exploración
   - Qué decir en un correo de presentación a un director de RRHH que no me conoce

4. **Entrega del servicio con IA**
   - Cómo usar Claude y otras herramientas de IA para multiplicar mi capacidad de entrega sin perder calidad
   - Plantillas y frameworks reutilizables que puedo desarrollar una vez y usar en múltiples proyectos
   - Gestión del tiempo: cuántas horas por proyecto en cada fase (discovery, análisis, entrega, seguimiento)

5. **Credibilidad y autoridad en el sector**
   - Cómo construir un portafolio cuando no tengo proyectos previos de bienestar digital con IA
   - Estrategia de contenido para posicionarme como referente: artículos, casos de estudio y hablar en eventos
   - Cómo conseguir mis primeros testimonios y referencias que generen confianza

6. **Escalabilidad y modelo de negocio a largo plazo**
   - Cuándo y cómo contratar a un primer colaborador o subcontratar partes del servicio
   - Creación de productos digitales derivados de mi consultoría (cursos, guías, templates)
   - Hoja de ruta de 3 años: de consultor individual a pequeña agencia de bienestar digital con IA

Termina con un plan de acción semanal para los próximos 30 días con tareas concretas y medibles para arrancar el negocio de consultoría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construcción de negocio de consultoría freelance en bienestar digital con IA',
                'vote_score'       => 34,
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
