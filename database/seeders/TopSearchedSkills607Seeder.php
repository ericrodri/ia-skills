<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills607Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para campañas de employer branding basadas en psicología organizacional',
                'description'      => 'Diseña estrategias de employer branding que integren principios de psicología organizacional para atraer y retener talento con mensajes auténticos y motivadores.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de recursos humanos y psicología organizacional con más de 15 años de experiencia diseñando campañas de employer branding para empresas de distintos sectores.

Tu tarea es ayudarme a crear una estrategia completa de employer branding basada en principios de psicología organizacional para la empresa que te describa a continuación.

El resultado debe incluir:

1. DIAGNÓSTICO PSICOLÓGICO DE LA MARCA EMPLEADORA
Analiza los siguientes elementos desde una perspectiva psicológica:
- Necesidades motivacionales de los perfiles objetivo (modelo de Maslow adaptado al entorno laboral)
- Factores de higiene y motivadores intrínsecos según la teoría de Herzberg
- Valores organizacionales percibidos vs. valores reales
- Brechas entre la propuesta de valor al empleado (EVP) actual y las expectativas del mercado de talento

2. MENSAJES CLAVE PARA CADA ETAPA DEL CANDIDATO
Desarrolla mensajes específicos para:
- Atracción inicial: qué argumentos psicológicos activan el interés genuino
- Consideración: cómo reducir la incertidumbre y construir confianza
- Decisión: qué elementos eliminan las barreras psicológicas finales para aceptar una oferta
- Retención: mensajes de refuerzo positivo para empleados ya incorporados

3. CALENDARIO EDITORIAL DE CONTENIDOS
Diseña un plan de contenidos de 3 meses que incluya:
- Formatos por plataforma (LinkedIn, Instagram, web corporativa, portales de empleo)
- Tipos de contenido: testimonios, behind the scenes, datos de cultura, historias de crecimiento
- Frecuencia y distribución semanal
- KPIs de engagement para medir el impacto psicológico (no solo el alcance)

4. GUÍA DE TONO Y LENGUAJE
Define el tono comunicativo teniendo en cuenta:
- Cómo hablar de manera auténtica sin caer en el "washing" de marca empleadora
- Palabras que generan confianza vs. palabras que generan escepticismo en candidatos
- Cómo incorporar el lenguaje emocional sin perder credibilidad

5. MÉTRICAS DE IMPACTO PSICOLÓGICO
Propón indicadores concretos para medir:
- Percepción de autenticidad de la marca empleadora
- Net Promoter Score de candidatos y empleados (eNPS)
- Tiempo medio hasta la decisión de aplicar
- Tasa de abandono del proceso y en qué etapa se produce

Para que la respuesta sea precisa, necesito que me proporciones:
- Sector de la empresa y tamaño aproximado
- Perfiles de talento que buscas atraer
- Principales competidores en el mercado de talento
- Valores organizacionales que quieres proyectar
- Canales de comunicación que ya utilizas actualmente

Con esta información elaboraré una estrategia personalizada y lista para ejecutar que conecte con la dimensión psicológica de los candidatos y refuerce la cultura interna de forma coherente y sostenible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de employer branding con base psicológica para atraer y retener talento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para desarrollar apps de bienestar y salud mental en el trabajo',
                'description'      => 'Diseña la arquitectura y funcionalidades de aplicaciones digitales orientadas al bienestar psicológico de equipos de trabajo, integrando principios de psicología organizacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en aplicaciones de salud mental y bienestar organizacional, con conocimientos profundos en psicología positiva aplicada a entornos laborales y en diseño de experiencias digitales terapéuticas.

Tu objetivo es guiarme en el diseño técnico y conceptual de una aplicación de bienestar y salud mental para empleados de una organización.

Estructura tu respuesta en los siguientes bloques:

1. DEFINICIÓN DEL PROBLEMA Y ALCANCE
- Identifica los principales factores de riesgo psicosocial en entornos laborales modernos
- Define qué necesidades cubre la app vs. qué queda fuera de su alcance (límites con atención clínica)
- Propón el modelo de intervención: preventivo, de gestión del estrés o de apoyo en crisis
- Describe el perfil de usuario principal y secundario

2. ARQUITECTURA FUNCIONAL
Detalla las funcionalidades agrupadas por módulos:
- Módulo de autodiagnóstico: tests validados de burnout, estrés y satisfacción laboral
- Módulo de recursos: ejercicios de mindfulness, respiración y regulación emocional
- Módulo de seguimiento: diario emocional, registro de estados y alertas de tendencia
- Módulo social: foros anónimos, retos de equipo y celebración de logros
- Módulo para managers: panel de salud del equipo con datos agregados y privados

3. STACK TECNOLÓGICO RECOMENDADO
- Frontend: frameworks recomendados y justificación (React Native, Flutter, etc.)
- Backend: arquitectura de microservicios o monolítica, lenguaje y framework
- Base de datos: modelo de datos para garantizar privacidad y cumplimiento RGPD
- Integraciones: calendarios, Slack, Teams, sistemas de RRHH (SAP, Workday)
- IA integrada: modelos para detección de patrones emocionales y recomendaciones personalizadas

4. FLUJO DE USUARIO CRÍTICO
Diseña el journey completo de un usuario desde la primera vez que abre la app:
- Onboarding y configuración del perfil emocional
- Primera sesión de diagnóstico
- Recomendación de recursos personalizada
- Check-in diario y seguimiento semanal
- Alerta y derivación en caso de señal de crisis

5. ÉTICA Y PRIVACIDAD
- Principios de privacidad by design aplicados a datos de salud mental
- Consentimiento informado y control del usuario sobre sus datos
- Manejo ético de alertas de crisis: cuándo y cómo escalar a RRHH o servicios de salud
- Consideraciones sobre sesgos algorítmicos en el análisis emocional

6. MVP Y ROADMAP DE DESARROLLO
- Define las 5 funcionalidades imprescindibles para el MVP
- Propón un roadmap trimestral para las siguientes versiones
- Métricas de adopción y éxito que debería monitorizar el equipo de desarrollo

Necesito que me indiques el contexto de la empresa (sector, tamaño, cultura) y si hay sistemas de RRHH existentes con los que integrar la solución.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño técnico de apps de salud mental y bienestar para equipos laborales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseñar espacios de trabajo que potencien el bienestar psicológico',
                'description'      => 'Aplica principios de psicología ambiental y organizacional al diseño de espacios físicos y digitales de trabajo que mejoren el rendimiento, la creatividad y el bienestar de los equipos.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de espacios de trabajo especializado en psicología ambiental y bienestar organizacional, con experiencia en proyectos de workplace design para empresas de distintos tamaños y culturas.

Necesito tu ayuda para diseñar (o rediseñar) un espacio de trabajo que maximice el bienestar psicológico, la productividad y la colaboración de los equipos.

Desarrolla una propuesta completa que incluya:

1. DIAGNÓSTICO DEL ESPACIO ACTUAL
Analiza los siguientes factores ambientales y su impacto psicológico:
- Ergonomía y confort físico: cómo afecta la postura al estado mental
- Iluminación natural vs. artificial y su impacto en el ritmo circadiano
- Niveles de ruido y zonas de concentración vs. colaboración
- Temperatura, calidad del aire y su relación con el rendimiento cognitivo
- Presencia de elementos naturales (biofilia) y su efecto en la reducción del estrés

2. PRINCIPIOS PSICOLÓGICOS APLICADOS AL DISEÑO
Explica cómo aplicar en el diseño:
- Teoría de la restauración de la atención (ART) de Kaplan: espacios de recuperación mental
- Control y autonomía: cómo dar a las personas sensación de agencia sobre su entorno
- Territorialidad y pertenencia: zonas personalizables vs. espacios compartidos
- Privacidad acústica y visual para el trabajo de concentración profunda (deep work)
- Estimulación visual: paletas de color por función (creatividad, calma, energía)

3. ZONIFICACIÓN PROPUESTA
Define las zonas del espacio y su propósito psicológico:
- Zona de concentración individual: diseño minimalista y baja estimulación
- Zona de colaboración informal: elementos que facilitan la conversación espontánea
- Zona de colaboración formal: salas de reunión con configuraciones flexibles
- Zona de descanso y restauración: desconexión real del trabajo
- Zona de movimiento: espacios que invitan al movimiento y combaten el sedentarismo
- Zona de trabajo híbrido: integración de presencia física y remota sin fricción

4. DISEÑO DIGITAL DEL ESPACIO DE TRABAJO
Para equipos híbridos o remotos, diseña:
- Cómo estructurar el espacio de trabajo digital (Notion, Miro, Slack) para reducir la carga cognitiva
- Rituales digitales que reemplazan las interacciones informales del espacio físico
- Diseño del home office: recomendaciones para el espacio personal que promuevan la desconexión

5. PROPUESTA DE MATERIALES Y ELEMENTOS VISUALES
- Materiales: madera, textiles, plantas, luz natural
- Paleta cromática recomendada con justificación psicológica
- Referencias visuales e inspiración de proyectos similares

6. MÉTRICAS DE IMPACTO DEL REDISEÑO
- Indicadores de bienestar antes y después del rediseño
- Herramientas de medición (encuestas de satisfacción, productividad, absentismo)
- Plan de ajuste iterativo basado en feedback de los usuarios del espacio

Para personalizar la propuesta necesito que me indiques el tipo de empresa, número de personas, modelo de trabajo (presencial, híbrido o remoto) y el presupuesto aproximado disponible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de espacios físicos y digitales que mejoran el bienestar y la productividad',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para aplicar psicología del comportamiento en estrategias de ventas',
                'description'      => 'Integra principios de psicología conductual y ciencias del comportamiento en tus procesos de venta para aumentar la conversión y construir relaciones comerciales más sólidas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en psicología del comportamiento aplicada a ventas, con formación en economía conductual, persuasión ética y técnicas de venta consultiva basadas en la ciencia del comportamiento humano.

Tu tarea es ayudarme a diseñar una estrategia de ventas que integre de manera ética y eficaz los principios de la psicología conductual para mejorar mis tasas de conversión y la calidad de las relaciones con mis clientes.

Estructura la respuesta en los siguientes bloques:

1. PRINCIPIOS PSICOLÓGICOS CLAVE APLICABLES A VENTAS
Explica y da ejemplos prácticos de:
- Sesgos cognitivos del comprador: anclaje, escasez, reciprocidad, efecto de arrastre social
- Teoría de la prospección (Kahneman): cómo enmarcar propuestas para minimizar la aversión a la pérdida
- Principio de autoridad y credibilidad: cómo construirlos en cada interacción
- Efecto de dotación: cómo hacer que el cliente sienta que ya posee los beneficios del producto
- Principio de compromiso y coherencia: técnicas de micro-sí progresivos

2. PROCESO DE VENTA PSICOLÓGICAMENTE OPTIMIZADO
Rediseña el proceso de venta en cada etapa:
- Prospección: cómo generar curiosidad genuina sin presión
- Primer contacto: técnicas de rapport y espejo comunicativo
- Diagnóstico de necesidades: preguntas que activan la reflexión y crean urgencia interna
- Presentación de solución: narrativa de transformación vs. lista de características
- Manejo de objeciones: reencuadre psicológico de las resistencias más comunes
- Cierre: técnicas de decisión que reducen la parálisis del análisis

3. GUÍA DE COMUNICACIÓN VERBAL Y NO VERBAL
- Lenguaje que genera confianza vs. lenguaje que activa defensas
- Técnicas de escucha activa y validación emocional del cliente
- Comunicación no verbal en reuniones presenciales y en videollamadas
- Uso estratégico del silencio en negociaciones

4. MODELOS DE PROPUESTA PSICOLÓGICAMENTE DISEÑADOS
- Estructura de una propuesta comercial que sigue el recorrido emocional del comprador
- Uso del storytelling y casos de éxito como prueba social narrativa
- Presentación de precios: anclaje, comparación y estructuración de opciones
- Follow-up: frecuencia y mensajes que mantienen el interés sin generar rechazo

5. ÉTICA EN LA APLICACIÓN DE PSICOLOGÍA EN VENTAS
- Diferencia entre persuasión ética y manipulación
- Cómo construir relaciones de largo plazo basadas en la confianza
- Indicadores de que una técnica está cruzando la línea ética

Para personalizar la estrategia indícame tu sector, tipo de cliente (B2B o B2C), producto o servicio que vendes y cuál es tu principal desafío actual en el proceso de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de ventas basada en psicología del comportamiento y economía conductual',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestionar la dinámica psicológica de equipos de producto ágiles',
                'description'      => 'Aplica principios de psicología organizacional para optimizar la dinámica, comunicación y rendimiento de equipos de producto que trabajan con metodologías ágiles.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de equipos ágiles con especialización en psicología organizacional y dinámica de grupos, con experiencia trabajando con equipos de producto en entornos de alta velocidad de cambio y presión por resultados.

Mi objetivo es mejorar el funcionamiento psicológico de mi equipo de producto para que sea más cohesionado, creativo y resiliente frente a la presión de los sprints y las entregas.

Desarrolla una guía práctica que incluya:

1. DIAGNÓSTICO PSICOLÓGICO DEL EQUIPO
Herramientas y preguntas para evaluar:
- Nivel de seguridad psicológica (modelo de Amy Edmondson)
- Claridad de roles y expectativas: cómo la ambigüedad genera estrés y conflicto
- Dinámica de poder informal: cómo afecta a la participación y la innovación
- Factores de cohesión y confianza interpersonal en el equipo
- Indicadores de burnout colectivo y señales de alerta temprana

2. RITUALES ÁGILES PSICOLÓGICAMENTE OPTIMIZADOS
Rediseña los principales rituales del equipo:
- Daily stand-up: cómo hacerlo psicológicamente seguro y no un check-in de control
- Sprint planning: técnicas para comprometer sin sobrecargar y gestionar la incertidumbre
- Sprint review: cómo celebrar logros y procesar fracasos de manera constructiva
- Retrospectiva: facilitación para que aflore lo que normalmente se calla
- Refinement: cómo mantener la energía y la atención en sesiones largas de trabajo cognitivo

3. GESTIÓN DE CONFLICTOS EN ENTORNOS ÁGILES
- Tipos de conflicto más comunes en equipos de producto (técnico, de prioridades, de ego)
- Técnicas de mediación y resolución que no interrumpen el flujo del equipo
- Cómo transformar el conflicto cognitivo en innovación
- Protocolos de feedback dentro del equipo que no dañen las relaciones

4. LIDERAZGO PSICOLÓGICO DEL PRODUCT MANAGER
- Cómo equilibrar la presión de negocio con el bienestar del equipo
- Técnicas para dar feedback que motiva sin crear ansiedad
- Gestión de la incertidumbre: cómo comunicar cuando no se sabe la respuesta
- Construcción de autonomía y motivación intrínseca en el equipo

5. MODELO DE ALTO RENDIMIENTO SOSTENIBLE
- Ciclos de carga y recuperación para equipos de producto
- Indicadores de rendimiento que incluyan bienestar (no solo velocidad)
- Plan trimestral de desarrollo del equipo desde una perspectiva psicológica

Indícame el tamaño del equipo, la metodología ágil que utilizáis y cuáles son los principales puntos de fricción actuales que quieres resolver.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimización psicológica de la dinámica y rendimiento de equipos de producto ágiles',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para programas de coaching ejecutivo y desarrollo de liderazgo',
                'description'      => 'Diseña programas estructurados de coaching ejecutivo que combinen psicología organizacional, modelos de liderazgo y herramientas de desarrollo personal para directivos y mandos intermedios.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach ejecutivo certificado (ICF PCC o MCC) con especialización en psicología organizacional positiva y desarrollo de liderazgo para empresas en procesos de transformación o crecimiento acelerado.

Necesito tu ayuda para diseñar un programa completo de coaching ejecutivo y desarrollo de liderazgo para los directivos y mandos intermedios de mi organización.

Estructura el programa en los siguientes módulos:

1. DIAGNÓSTICO DE LIDERAZGO
Define las herramientas de evaluación inicial:
- Assessment de estilos de liderazgo (transformacional, transaccional, servant leadership)
- Evaluación 360º: diseño del cuestionario, proceso de recogida y comunicación de resultados
- Identificación de creencias limitantes y patrones de comportamiento disfuncionales
- Mapeo de fortalezas individuales (metodología VIA o Strengths Finder)
- Evaluación del impacto emocional del líder en su equipo (temperatura emocional del equipo)

2. COMPETENCIAS DE LIDERAZGO A DESARROLLAR
Diseña itinerarios de desarrollo para:
- Inteligencia emocional: autoconciencia, autorregulación, empatía y habilidades sociales
- Comunicación de alta influencia: escucha activa, feedback, comunicación difícil
- Toma de decisiones bajo presión e incertidumbre
- Delegación efectiva y desarrollo del potencial del equipo
- Gestión del cambio: cómo liderar a personas durante transformaciones organizacionales

3. ESTRUCTURA DEL PROGRAMA DE COACHING
Define el formato del programa:
- Número de sesiones individuales y duración (ej. 8 sesiones de 90 minutos)
- Sesiones grupales de co-desarrollo entre directivos
- Asignación de tareas de práctica y reflexión entre sesiones
- Herramientas de seguimiento del progreso y accountability
- Integración con el feedback del equipo durante el proceso

4. METODOLOGÍAS Y HERRAMIENTAS DE COACHING
Describe las técnicas utilizadas en sesiones:
- Modelo GROW adaptado a liderazgo organizacional
- Técnicas de indagación apreciativa para desbloquear potencial
- Trabajo con metáforas y narrativas para cambiar patrones mentales
- Visualización y técnicas de rehearsal mental para nuevas conductas
- Journaling estructurado y autoobservación entre sesiones

5. MEDICIÓN DEL IMPACTO DEL PROGRAMA
Define los KPIs del programa:
- Métricas de cambio de comportamiento del líder (observable por el equipo)
- Impacto en indicadores de negocio: rotación, productividad, clima laboral
- Satisfacción de participantes y ROI del programa
- Plan de mantenimiento y seguimiento a 6 y 12 meses

Necesito que me indiques el número de participantes, sus niveles jerárquicos, los desafíos de liderazgo más urgentes y si hay restricciones de tiempo o formato (presencial, online, mixto).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño de programas de coaching ejecutivo y desarrollo de liderazgo organizacional',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para gestionar el estrés financiero y la toma de decisiones bajo presión',
                'description'      => 'Aplica principios de psicología económica y gestión del estrés para mejorar la calidad de las decisiones financieras en situaciones de alta presión e incertidumbre.',
                'prompt_content'   => <<<'EOT'
Actúa como un psicólogo especializado en economía del comportamiento y gestión del estrés en profesionales financieros, con experiencia asesorando a analistas, directores financieros y traders en la optimización de sus procesos de toma de decisiones bajo presión.

Necesito una guía práctica que me ayude a gestionar el estrés financiero y a mejorar la calidad de mis decisiones en contextos de alta presión.

Desarrolla la siguiente estructura:

1. PSICOLOGÍA DEL ESTRÉS FINANCIERO
Explica los mecanismos psicológicos implicados:
- Cómo el estrés agudo y crónico deteriora la función ejecutiva y la toma de decisiones
- El papel de la amígdala y el cortisol en la toma de decisiones financieras irracionales
- Sesgos cognitivos que se amplifican bajo presión: aversión a la pérdida, exceso de confianza, efecto de disposición
- Diferencia entre estrés funcional (eustrés) y estrés disfuncional en contextos financieros

2. PROTOCOLO DE GESTIÓN DEL ESTRÉS EN TIEMPO REAL
Técnicas para aplicar en el momento de alta presión:
- Técnica de respiración 4-7-8 para la regulación del sistema nervioso autónomo
- Distanciamiento psicológico: cómo observar la situación desde una perspectiva de tercera persona
- Anclaje cognitivo: rituales mentales para volver al estado de calma antes de decidir
- Gestión de la urgencia percibida: cómo distinguir entre urgencia real y urgencia emocional
- Protocolo de pausa obligatoria antes de decisiones de alto impacto

3. PROCESO DE TOMA DE DECISIONES FINANCIERAS PSICOLÓGICAMENTE ROBUSTO
Define un proceso estructurado para decisiones complejas:
- Pre-mortem: imaginar el fracaso antes de decidir para identificar riesgos no vistos
- Lista de verificación de sesgos cognitivos antes de ejecutar una decisión
- Técnica del abogado del diablo: designar a alguien que argumente en contra
- Separación temporal entre el análisis y la decisión para reducir el impacto emocional
- Documentación de decisiones y registro de reasoning para aprendizaje iterativo

4. RUTINAS DE ALTO RENDIMIENTO PARA PROFESIONALES FINANCIEROS
- Rutina matutina para preparar el sistema nervioso para el trabajo de alta presión
- Técnicas de recuperación entre sesiones intensas de trabajo
- Gestión de la exposición a noticias financieras y redes sociales
- Estrategias de desconexión al cierre del mercado o al finalizar la jornada

5. PLAN DE DESARROLLO PERSONAL PARA LA RESILIENCIA FINANCIERA
- Programa de 8 semanas para construir resiliencia psicológica progresiva
- Métricas de seguimiento: calidad de las decisiones, nivel de estrés subjetivo, errores por sesgo
- Cuándo buscar apoyo profesional: señales de que el estrés ha superado la capacidad de autogestión

Indícame tu rol específico, el tipo de decisiones financieras que más te generan estrés y el contexto organizacional en el que trabajas para personalizar las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestión del estrés financiero y mejora de decisiones bajo presión para profesionales de finanzas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para el bienestar psicológico en equipos legales de alta presión',
                'description'      => 'Diseña programas y estrategias de bienestar psicológico específicamente adaptados a la cultura y demandas de los despachos de abogados y departamentos legales corporativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un psicólogo organizacional especializado en el sector jurídico, con experiencia diseñando programas de bienestar para despachos de abogados y departamentos legales corporativos, donde la presión, la exigencia y la cultura del presentismo son factores de riesgo críticos.

Necesito tu ayuda para diseñar un programa de bienestar psicológico adaptado a la realidad de los profesionales del derecho.

Desarrolla una propuesta que incluya:

1. DIAGNÓSTICO DE RIESGOS PSICOSOCIALES EN EL SECTOR LEGAL
Analiza los factores de riesgo específicos:
- Cultura de las horas facturables y su impacto en el equilibrio vida-trabajo
- Exposición vicaria al trauma en abogados penalistas, de familia o derecho laboral
- Síndrome del impostor en entornos de alta competencia intelectual
- Presión por resultados y consecuencias emocionales de perder un caso
- Estigma interno hacia la búsqueda de ayuda psicológica en culturas jurídicas tradicionales
- Burnout jurídico: síntomas específicos y diferencias con el burnout general

2. PROGRAMA DE BIENESTAR ADAPTADO A LA CULTURA JURÍDICA
Diseña intervenciones que funcionen en este entorno específico:
- Cómo presentar el programa para superar la resistencia cultural inicial
- Formatos que respetan la carga de trabajo: sesiones cortas, asíncronas, digitales
- Enfoque en rendimiento sostenible más que en bienestar como concepto abstracto
- Integración en momentos clave del año jurídico (cierres, juicios, due diligences)

3. HERRAMIENTAS DE AUTOCUIDADO PARA ABOGADOS
Proporciona técnicas prácticas:
- Gestión emocional durante y después de juicios o negociaciones difíciles
- Técnicas de desactivación mental para desconectar del pensamiento jurídico al final del día
- Gestión de la incertidumbre procesal: cómo tolerar la espera de resoluciones
- Rutinas de recuperación entre casos emocionalmente intensos

4. FORMACIÓN PARA SOCIOS Y DIRECTORES DE ÁREA
Diseña un módulo específico para líderes:
- Cómo identificar señales de deterioro psicológico en el equipo sin invadir la privacidad
- Comunicación de expectativas sin generar ansiedad tóxica
- Cómo crear una cultura donde pedir ayuda no sea percibido como debilidad
- Gestión de las conversaciones difíciles sobre carga de trabajo y límites

5. PROTOCOLO DE CRISIS Y DERIVACIÓN
Define los procedimientos para situaciones críticas:
- Señales de alerta que requieren intervención urgente
- Protocolo confidencial de derivación a apoyo psicológico especializado
- Gestión del retorno al trabajo tras una baja por motivos de salud mental
- Recursos externos recomendados para el sector jurídico

Indícame si se trata de un despacho o un departamento corporativo, el tamaño del equipo, y cuáles son los principales factores de estrés que has identificado hasta ahora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Programas de bienestar psicológico para despachos de abogados y departamentos legales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para la resiliencia emocional en equipos de atención al cliente',
                'description'      => 'Desarrolla programas y protocolos de resiliencia emocional para agentes de customer support que gestionan situaciones de conflicto, quejas y clientes difíciles de forma continuada.',
                'prompt_content'   => <<<'EOT'
Actúa como un psicólogo organizacional con especialización en equipos de atención al cliente y experiencia diseñando programas de resiliencia emocional para contact centers, equipos de soporte técnico y atención presencial en entornos de alta exposición emocional.

Necesito tu ayuda para desarrollar un programa completo de resiliencia emocional para mi equipo de customer support.

La propuesta debe cubrir los siguientes aspectos:

1. DIAGNÓSTICO DEL IMPACTO EMOCIONAL EN EQUIPOS DE SOPORTE
Analiza los factores de riesgo específicos del rol:
- Fatiga por compasión: qué es y cómo se diferencia del burnout clásico en este sector
- Efecto de contagio emocional con clientes enfadados o angustiados
- Presión entre la empatía con el cliente y el cumplimiento de procedimientos
- Monotonía y repetitividad como factores de deterioro psicológico
- Impacto de las métricas de rendimiento (AHT, CSAT, NPS) en el bienestar del agente

2. PROGRAMA DE FORMACIÓN EN RESILIENCIA EMOCIONAL
Diseña los módulos del programa:
- Módulo 1: Autoconciencia emocional — reconocer el impacto de las interacciones en el propio estado
- Módulo 2: Regulación emocional — técnicas para gestionar la activación en tiempo real
- Módulo 3: Distanciamiento funcional — cómo empatizar sin absorber el estado emocional del cliente
- Módulo 4: Recuperación tras interacciones difíciles — rituales de reset entre llamadas o tickets
- Módulo 5: Comunicación asertiva — cómo mantener límites profesionales sin perder la empatía

3. PROTOCOLOS PARA SITUACIONES DE ALTA INTENSIDAD EMOCIONAL
Define los procedimientos para:
- Clientes agresivos verbalmente: protocolo de desescalada y límites profesionales
- Situaciones de crisis del cliente (emergencias, fraudes, pérdidas)
- Quejas con componente emocional elevado (fallecimiento de un familiar, desahucios, etc.)
- Postintervención: cómo recuperarse tras una interacción traumática

4. ROL DE LOS TEAM LEADERS EN EL SOPORTE EMOCIONAL
Guía para los líderes de equipo:
- Cómo hacer check-ins emocionales de forma natural sin invadir la privacidad
- Técnicas de debriefing tras incidentes emocionalmente intensos
- Cómo ajustar la carga de trabajo de forma proactiva según el estado emocional del equipo
- Celebración de logros emocionales (no solo de métricas)

5. INDICADORES DE BIENESTAR Y PLAN DE MEJORA CONTINUA
Define las métricas de impacto del programa:
- Índice de bienestar subjetivo del equipo (encuestas periódicas breves)
- Rotación voluntaria y correlación con indicadores de bienestar
- Absentismo y su relación con la carga emocional acumulada
- Calidad de las interacciones con clientes como indicador indirecto de bienestar del agente

Cuéntame el canal principal de atención (teléfono, chat, email, presencial), el tipo de producto o servicio que soporte vuestro equipo y cuál es el principal desafío emocional que observas actualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Resiliencia emocional y bienestar para agentes de customer support y contact centers',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para el autocoaching y la gestión mental del trabajo independiente',
                'description'      => 'Aplica técnicas de psicología positiva y autocoaching para gestionar los desafíos psicológicos del trabajo freelance: soledad, incertidumbre económica, procrastinación y falta de estructura.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach especializado en el desarrollo personal de profesionales independientes y freelancers, con formación en psicología positiva, gestión del tiempo y productividad sostenible para personas que trabajan sin una estructura organizacional externa.

Necesito tu ayuda para desarrollar un sistema de autocoaching que me permita gestionar los desafíos psicológicos propios del trabajo independiente y mantener un alto rendimiento con bienestar sostenible.

Diseña un sistema completo que incluya:

1. MAPA DE DESAFÍOS PSICOLÓGICOS DEL FREELANCER
Identifica y analiza los principales retos:
- Soledad profesional y falta de pertenencia a un equipo
- Incertidumbre económica y ansiedad por la irregularidad de ingresos
- Síndrome del impostor: cómo se manifiesta sin jerarquías ni validación externa
- Procrastinación y dilación: causas psicológicas específicas en el trabajo autónomo
- Dificultad para establecer límites entre vida profesional y personal en el hogar
- Gestión de la crítica de clientes sin el filtro de un manager

2. SISTEMA DE AUTOCOACHING SEMANAL
Define una rutina semanal de reflexión y ajuste:
- Revisión del lunes: revisión de objetivos, energía disponible y prioridades de la semana
- Check-in de mitad de semana: ¿estoy en el camino o necesito ajustar el rumbo?
- Revisión del viernes: celebración de logros, aprendizajes de la semana y cierre emocional
- Journaling estructurado: preguntas de reflexión para cada revisión
- Indicadores de alerta que señalan que algo está fuera de equilibrio

3. GESTIÓN DE LA MOTIVACIÓN SIN ESTRUCTURA EXTERNA
Técnicas para mantener la motivación autogenerada:
- Diseño de un sistema de recompensas intrínsecas y extrínsecas
- Técnica de los porqués profundos: reconectar con el propósito del trabajo independiente
- Construcción de una comunidad profesional que reemplaze el equipo
- Rituales de inicio y cierre del día laboral para crear estructura psicológica
- Cómo gestionar los días de baja energía sin que se conviertan en espirales de culpa

4. PRODUCTIVIDAD PSICOLÓGICAMENTE SOSTENIBLE
Sistema de gestión del tiempo adaptado al perfil del freelancer:
- Identificación de picos de energía y asignación de tareas según el tipo cognitivo
- Técnica de bloques de trabajo profundo con recuperación planificada
- Gestión de la carga mental de ser empleado y empresario al mismo tiempo
- Cómo decir no a proyectos que no encajan sin que genere culpa o miedo
- Plan de contingencia emocional para los períodos de sequía de proyectos

5. PLAN DE DESARROLLO PERSONAL Y PROFESIONAL
- Mapa de competencias a desarrollar como freelancer (técnicas, de negocio y personales)
- Plan de formación trimestral que equilibre rentabilidad a corto plazo y crecimiento a largo plazo
- Red de apoyo: cómo construir relaciones de mentoría y comunidad siendo independiente
- Seguimiento del bienestar: indicadores semanales que avisen antes del burnout

Cuéntame tu especialidad como freelancer, cuánto tiempo llevas trabajando de forma independiente y cuál es el desafío psicológico que más te afecta en este momento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de autocoaching y gestión mental para freelancers y trabajadores independientes',
                'vote_score'       => 44,
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
