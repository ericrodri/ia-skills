<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills499Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para moderar comunidades de marca en redes sociales',
                'description'      => 'Usa Claude para automatizar la moderación de comentarios, detectar contenido inapropiado y mantener el tono positivo de tu comunidad online sin perder el toque humano.',
                'prompt_content'   => <<<'EOT'
Eres un experto en community management con profundo conocimiento en moderación automatizada de comunidades digitales. Tu misión es ayudarme a gestionar de forma eficiente los comentarios y publicaciones en las redes sociales de mi marca.

contexto de mi situación:
Mi marca tiene presencia activa en Instagram, Facebook y TikTok. Recibimos entre 200 y 500 comentarios diarios. El equipo de community management es pequeño (2 personas) y necesitamos escalar sin perder calidad en la moderación ni en las respuestas.

instrucción principal:
Actúa como mi asistente de moderación inteligente. Voy a compartirte tandas de comentarios de nuestras redes sociales. Para cada comentario, realiza las siguientes tareas:

1. CLASIFICACIÓN DE COMENTARIO
Clasifica cada comentario en una de estas categorías:
- Positivo/celebración: elogios, agradecimientos, experiencias buenas
- Pregunta comercial: dudas sobre productos, precios, disponibilidad
- Queja o problema: experiencias negativas, solicitudes de reembolso, fallos
- Contenido inapropiado: insultos, spam, lenguaje ofensivo, desinformación
- Neutro/conversacional: comentarios sin carga emocional clara

2. ANÁLISIS DE SENTIMIENTO
Para cada comentario, indica el sentimiento predominante en una escala:
- Muy positivo / Positivo / Neutro / Negativo / Muy negativo
Añade una justificación breve (máximo 2 líneas).

3. PRIORIDAD DE RESPUESTA
Asigna una prioridad: Alta (responder en menos de 2 horas), Media (responder en menos de 24 horas), Baja (responder en 48-72 horas). Explica el criterio.

4. RESPUESTA SUGERIDA
Para todos los comentarios que no sean contenido inapropiado, redacta una respuesta en el tono de nuestra marca (cercano, profesional, empático). La respuesta debe:
- Ser personalizada, no genérica
- Usar el nombre del usuario si está disponible
- Incluir un call to action cuando sea relevante (enlace de ayuda, DM para resolver, etc.)
- Tener entre 2 y 5 líneas

5. ACCIÓN RECOMENDADA
Indica si el comentario debe:
- Responderse públicamente
- Derivarse a DM/mensaje privado
- Escalarse al equipo de atención al cliente
- Ocultarse o eliminarse (con justificación)
- Marcarse para revisión humana

tarea adicional de análisis semanal:
Al final de cada tanda de comentarios, proporciona un resumen ejecutivo con:
- Porcentaje de sentimiento positivo, neutro y negativo
- Los 3 temas más recurrentes en los comentarios
- Alertas tempranas de posibles crisis de reputación
- Recomendaciones para mejorar el engagement basadas en los patrones detectados

objetivo final:
Quiero que este flujo de moderación me permita responder más rápido, mantener la coherencia de voz de marca, detectar crisis antes de que escalen y liberar tiempo del equipo para tareas creativas de alto valor.

Comienza procesando el siguiente lote de comentarios que te proporcionaré. Si tienes alguna duda sobre el tono de la marca o las políticas de moderación, pregúntame antes de proceder.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Moderación automatizada de comentarios en redes sociales con análisis de sentimiento y respuestas sugeridas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para construir sistemas de moderación de contenido con APIs',
                'description'      => 'Diseña e implementa pipelines de moderación automatizada con Claude API para plataformas con comunidades de usuarios, incluyendo detección de spam, toxicidad y contenido inapropiado.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de moderación de contenido a escala para plataformas digitales con comunidades de usuarios activos. Tienes experiencia integrando modelos de lenguaje en flujos de trabajo de trust & safety.

contexto del proyecto:
Estoy desarrollando una plataforma de comunidad online (foro, red social o app de nicho) que necesita un sistema robusto de moderación de contenido generado por usuarios. El volumen esperado es de 10.000 a 50.000 publicaciones y comentarios diarios. El equipo de moderación humana es limitado, por lo que necesito automatizar entre el 70% y el 85% de las decisiones de moderación.

instrucción principal:
Ayúdame a diseñar e implementar un sistema completo de moderación con las siguientes capas:

1. ARQUITECTURA DEL PIPELINE
Diseña una arquitectura en capas que combine:
- Primera capa: filtros de reglas deterministas (listas negras, regex, rate limiting)
- Segunda capa: clasificación con Claude API para contenido ambiguo
- Tercera capa: revisión humana para casos de alta incertidumbre
Proporciona un diagrama de flujo detallado en texto y explica las decisiones de diseño.

2. PROMPT DE CLASIFICACIÓN PARA LA API
Escribe el system prompt y el user prompt que usaré con Claude API para clasificar contenido. El prompt debe evaluar:
- Toxicidad (escala 0-1)
- Spam o contenido comercial no deseado
- Desinformación o contenido engañoso
- Contenido adulto o violento
- Violaciones de las normas de la comunidad
- Confianza en la clasificación (para enrutar a revisión humana)

3. IMPLEMENTACIÓN EN CÓDIGO
Escribe el código en Python (o Node.js, indícame cuál prefieres) para:
- Llamada a la API con manejo de errores y reintentos
- Estructura de respuesta JSON estandarizada
- Función de enrutamiento basada en el score de confianza
- Sistema de logging para auditoría
- Cola de mensajes para procesamiento asíncrono (pseudocódigo con Redis o SQS)

4. CALIBRACIÓN Y UMBRALES
Explica cómo establecer y ajustar los umbrales de decisión:
- ¿Qué score de toxicidad activa eliminación automática vs. revisión?
- ¿Cómo gestionar falsos positivos en comunidades con lenguaje coloquial?
- Estrategia de feedback loop para mejorar el modelo con el tiempo

5. MÉTRICAS Y MONITOREO
Define las métricas clave para evaluar el sistema:
- Tasa de falsos positivos y falsos negativos
- Tiempo medio de moderación
- Cobertura de automatización
- Dashoboard mínimo viable para el equipo de trust & safety

tarea de revisión de código:
Si ya tengo código de moderación existente, puedo compartirlo para que lo revises y sugieras mejoras específicas de rendimiento y precisión.

objetivo final:
Un sistema de moderación escalable, auditable y que mejore continuamente, reduciendo la carga del equipo humano sin comprometer la seguridad y la experiencia de la comunidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura e implementación de sistemas de moderación de contenido automatizados para plataformas online',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseñar la identidad visual de comunidades online',
                'description'      => 'Usa Claude para desarrollar guías de estilo visual, plantillas de contenido y sistemas de diseño coherentes para comunidades digitales en múltiples plataformas.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico y director creativo especializado en identidad visual de comunidades online y branding digital para plataformas sociales. Tienes experiencia creando sistemas de diseño coherentes que escalan en múltiples formatos y plataformas.

contexto del proyecto:
Estoy construyendo o rediseñando la identidad visual de una comunidad online. La comunidad tiene entre 500 y 50.000 miembros activos y necesita una presencia visual consistente en Instagram, Discord, newsletters, y potencialmente un foro o app propia. El objetivo es que cualquier pieza de contenido sea inmediatamente reconocible como perteneciente a esta comunidad.

instrucción principal:
Actúa como mi director creativo y ayúdame a desarrollar un sistema de identidad visual completo para la comunidad:

1. AUDITORÍA DE IDENTIDAD ACTUAL
Antes de crear, ayúdame a auditar lo que ya existe. Proporciona un cuestionario de 10 preguntas que me permita documentar los activos visuales actuales, los colores usados, las tipografías, el tono visual general y las inconsistencias detectadas.

2. DEFINICIÓN DE PERSONALIDAD VISUAL
Basándome en el brief que te proporcione sobre la comunidad (audiencia, valores, temática), ayúdame a definir:
- Dos o tres palabras que deben describir la estética visual
- Moodboard conceptual (describe 5-7 referencias visuales o estilos que encajan)
- Lo que la identidad visual debe EVITAR comunicar

3. SISTEMA DE DISEÑO BÁSICO
Proporciona las especificaciones detalladas para:
- Paleta de colores: primarios, secundarios y neutros con códigos HEX y rationale de cada elección
- Tipografías: fuente principal y secundaria (Google Fonts o Adobe), con usos recomendados para cada una
- Espaciado y proporciones generales
- Estilo de ilustración o fotografía recomendado

4. PLANTILLAS POR PLATAFORMA
Para cada plataforma relevante, describe la estructura de las plantillas:
- Post estándar de Instagram: proporciones, zonas de texto, uso del color
- Story/Reel: consideraciones de diseño para formato vertical
- Header de Discord o Slack: dimensiones y elementos clave
- Newsletter: estructura visual del header y footer
- Thumbnail de video o webinar

5. GUÍA DE USO Y ERRORES COMUNES
Redacta una mini guía de uso de la identidad (2-3 páginas conceptuales) que incluya:
- Ejemplos de uso correcto e incorrecto del logo y colores
- Reglas de accesibilidad (contraste mínimo, legibilidad)
- Cómo adaptar la identidad para contenido de invitados o colaboradores

tarea de feedback visual:
Si me compartes descripciones de diseños actuales o capturas de pantalla (puedo describírtelas), analízalos y dame retroalimentación específica con sugerencias de mejora alineadas con el sistema de diseño que estamos creando.

objetivo final:
Una identidad visual documentada, escalable y que cualquier colaborador de la comunidad (moderadores voluntarios, creadores de contenido invitados) pueda aplicar correctamente sin necesidad de ser diseñador profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollo de identidad visual y sistemas de diseño para comunidades digitales y plataformas sociales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para convertir comunidades online en canales de ventas',
                'description'      => 'Aprende a usar Claude para identificar oportunidades de venta dentro de comunidades, redactar mensajes que no parezcan spam y convertir miembros activos en clientes sin dañar la confianza.',
                'prompt_content'   => <<<'EOT'
Eres un experto en social selling y estrategias de monetización de comunidades digitales. Tienes experiencia ayudando a empresas y profesionales a convertir comunidades online en canales de adquisición de clientes de forma ética y sostenible, sin comprometer la confianza ni el espíritu de la comunidad.

contexto de mi situación:
Tengo (o gestiono) una comunidad online activa: puede ser un grupo de LinkedIn, un servidor de Discord, un grupo de Facebook, un foro temático o una newsletter con suscriptores comprometidos. El objetivo es monetizar la comunidad o usar el acceso a ella para generar oportunidades de venta, sin que los miembros sientan que están siendo vendidos de forma agresiva.

instrucción principal:
Actúa como mi estratega de social selling para comunidades. Ayúdame con las siguientes tareas:

1. MAPA DE OPORTUNIDADES DE VENTA
Analiza el tipo de comunidad que te describa y genera un mapa de oportunidades de venta no intrusivas:
- Momentos del journey del miembro donde surge una necesidad que mi producto o servicio resuelve
- Tipos de publicaciones o conversaciones que son señales de compra (intent signals)
- Cómo posicionarme como experto de referencia antes de hacer cualquier oferta

2. MENSAJES DIRECTOS SIN SPAM
Escribe plantillas de mensaje directo (DM) para contactar miembros interesados. Las plantillas deben:
- Hacer referencia a algo específico del miembro (comentario, publicación, pregunta)
- Ofrecer valor genuino antes de mencionar mi producto
- Tener un CTA claro pero sin presión
- Sonar completamente humanas, no automatizadas
Proporciona 3 variantes según el nivel de "calor" del lead: frío, templado y caliente.

3. PUBLICACIONES DE VALOR CON CALL TO ACTION SUAVE
Redacta 5 ejemplos de publicaciones para la comunidad que aporten valor real pero incluyan una referencia sutil a mi oferta. Cada publicación debe:
- Resolver un problema concreto del miembro
- Establecer autoridad sin ser pedante
- Incluir un CTA orgánico al final (no una venta dura)

4. SEGUIMIENTO Y NURTURING
Diseña una secuencia de seguimiento de 5 interacciones para un miembro que mostró interés pero no ha comprado. Incluye:
- Tipo de interacción (comentario, DM, reacción, mención)
- Contenido de cada touchpoint
- Tiempo entre interacciones recomendado

5. MÉTRICAS DE ÉXITO EN SOCIAL SELLING
Define las métricas que debo rastrear para medir si mi estrategia de venta en comunidades está funcionando, diferenciando entre métricas de relación (engagement, confianza) y métricas de conversión (leads, ventas atribuidas).

tarea de análisis de oportunidad:
Descríbeme tu comunidad (tamaño, plataforma, temática, audiencia) y tu producto o servicio, y te daré una estrategia de social selling personalizada con los mensajes concretos que puedes usar esta semana.

objetivo final:
Convertir tu comunidad en un activo de ventas predecible y ético, donde los miembros confíen en ti lo suficiente como para comprar y recomendar tus productos o servicios de forma orgánica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de social selling ético en comunidades online para generar leads y ventas sin alienar miembros',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestionar el ciclo de vida de una comunidad de producto',
                'description'      => 'Usa Claude para estructurar, hacer crecer y retener una comunidad de usuarios de tu producto, desde el onboarding hasta la conversión de usuarios en advocates de la marca.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product-led growth y community building para productos digitales. Tienes experiencia construyendo y gestionando comunidades de usuarios que actúan como motor de crecimiento, retención y feedback de producto.

contexto del producto:
Tengo un producto digital (SaaS, app móvil, plataforma o herramienta) con una base de usuarios activos. Quiero construir o profesionalizar una comunidad de usuarios que me ayude a reducir el churn, aumentar el engagement con el producto, recoger feedback cualitativo de alta calidad y generar crecimiento orgánico mediante el boca a boca.

instrucción principal:
Actúa como mi estratega de community-led growth. Ayúdame a diseñar y ejecutar la estrategia completa:

1. FRAMEWORK DE CICLO DE VIDA DE LA COMUNIDAD
Diseña un mapa del ciclo de vida de un miembro de la comunidad con las siguientes etapas:
- Descubrimiento: cómo llega el usuario a la comunidad
- Onboarding: primeras acciones que debe completar para sentirse bienvenido
- Activación: qué comportamientos convierten a un lurker en participante activo
- Retención: qué hace que un miembro siga activo después de 30, 90 y 180 días
- Advocacy: cómo identificar y nutrir a los power users y brand advocates

2. PROGRAMA DE ONBOARDING DE NUEVOS MIEMBROS
Crea una secuencia de bienvenida para nuevos miembros que incluya:
- Mensaje de bienvenida personalizado (plantilla adaptable)
- Primeras 3 acciones que debe realizar en la comunidad
- Cómo presentarse al grupo (plantilla de autopresentación)
- Recursos clave que debe conocer en su primera semana

3. CALENDARIO DE CONTENIDO COMUNITARIO
Diseña un calendario de actividades de comunidad mensual que incluya:
- Actividades recurrentes semanales (AMA, hilo de preguntas, showcase de usuarios)
- Eventos especiales mensuales (webinar, sesión de feedback de producto, challenge)
- Estrategia de contenido generado por usuarios (cómo fomentarlo y curarlo)

4. SISTEMA DE RECONOCIMIENTO Y GAMIFICACIÓN
Propón un sistema de reconocimiento para miembros activos:
- Roles o badges según nivel de participación
- Beneficios tangibles para power users (acceso anticipado, sesiones directas con el equipo de producto)
- Rituales de reconocimiento público dentro de la comunidad

5. FEEDBACK LOOP DE PRODUCTO
Diseña un proceso para extraer insights de producto de la comunidad:
- Cómo estructurar hilos de feedback que generen datos accionables
- Plantilla de encuesta mensual de NPS comunitario
- Cómo comunicar al equipo de producto los insights recogidos
- Cómo cerrar el loop comunicando a la comunidad qué mejoras se implementaron gracias a su feedback

tarea inmediata:
Cuéntame sobre tu producto y el estado actual de tu comunidad (si existe), y te daré un plan de acción para los próximos 30 días con acciones concretas y métricas de éxito.

objetivo final:
Una comunidad de producto viva, que actúe como ventaja competitiva difícil de replicar: fuente de feedback, canal de retención y motor de crecimiento orgánico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de estrategia community-led growth para productos digitales con framework de ciclo de vida de miembros',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para crear comunidades internas de empleados con IA',
                'description'      => 'Usa Claude para diseñar, lanzar y mantener comunidades de práctica internas, programas de embajadores culturales y espacios de colaboración que aumenten el engagement de los empleados.',
                'prompt_content'   => <<<'EOT'
Eres un experto en cultura organizacional, employee experience y construcción de comunidades internas de empleados. Tienes experiencia diseñando programas de communities of practice, redes de embajadores internos y espacios de colaboración que mejoran la retención, el engagement y la transferencia de conocimiento en organizaciones de todos los tamaños.

contexto organizacional:
Trabajo en (o asesoro a) una organización que tiene entre 50 y 5.000 empleados. Puede ser una empresa con trabajo presencial, híbrido o totalmente remoto. Quiero crear o mejorar comunidades internas de empleados que fortalezcan la cultura, reduzcan el aislamiento (especialmente en equipos remotos) y aceleren el aprendizaje organizacional.

instrucción principal:
Actúa como mi consultor de employee community building. Ayúdame con las siguientes tareas:

1. DIAGNÓSTICO DE COMUNIDAD INTERNA
Proporciona un cuestionario de diagnóstico de 15 preguntas que me permita evaluar:
- El nivel actual de conexión y colaboración entre empleados
- Las brechas de comunicación entre departamentos o ubicaciones
- Los intereses y necesidades comunes que podrían sostener una comunidad
- Las herramientas de comunicación interna ya disponibles (Slack, Teams, Workplace)

2. DISEÑO DE COMUNIDADES DE PRÁCTICA
Ayúdame a estructurar comunidades de práctica (CoP) internas:
- Cómo identificar los temas que justifican una CoP (señales de demanda orgánica)
- Estructura mínima viable: roles (líder, facilitador, miembros), cadencia de reuniones, formato de sesiones
- Cómo hacer que una CoP sea autosostenible sin depender excesivamente del departamento de RRHH
- Plantilla de carta fundacional de una CoP

3. PROGRAMA DE EMBAJADORES CULTURALES
Diseña un programa de empleados embajadores de la cultura organizacional:
- Criterios de selección de embajadores (actitud, influencia, diversidad)
- Responsabilidades y beneficios del rol
- Actividades que los embajadores lideran (onboarding de nuevos empleados, eventos de team building, feedback ascendente)
- Cómo reconocer y compensar (no necesariamente en dinero) la contribución de los embajadores

4. CALENDARIO DE ACTIVIDADES COMUNITARIAS
Diseña un calendario trimestral de actividades para mantener viva la comunidad interna:
- Rituales semanales (reconocimientos públicos, preguntas del día, hilos de celebración)
- Eventos mensuales (almuerzo virtual, sesión de aprendizaje entre pares, reto de equipo)
- Hitos trimestrales (presentación de proyectos internos, premios de comunidad, retrospectiva cultural)

5. MÉTRICAS DE ENGAGEMENT INTERNO
Define las métricas que me indicarán si la comunidad interna está funcionando:
- Métricas de participación (tasa de activación, frecuencia de contribución)
- Métricas de impacto en negocio (correlación con retención, eNPS, tiempo de onboarding)
- Cómo recoger feedback cualitativo de los miembros de la comunidad

tarea de diseño personalizado:
Descríbeme el tamaño de tu organización, el modelo de trabajo (presencial/remoto/híbrido) y el principal problema que quieres resolver con la comunidad interna, y te daré un plan de lanzamiento para los primeros 90 días.

objetivo final:
Una organización donde los empleados se sientan conectados, reconocidos y en crecimiento constante gracias a comunidades internas vivas que el departamento de RRHH no tiene que sostener con esfuerzo constante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de comunidades internas de empleados, programas de embajadores culturales y communities of practice',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para analizar el ROI de comunidades financieras y de inversores',
                'description'      => 'Usa Claude para medir el retorno económico de comunidades de inversores, fintech o educación financiera, y presentar métricas de valor a stakeholders y patrocinadores.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en la valoración económica de activos digitales y comunidades online. Tienes experiencia calculando el retorno sobre la inversión (ROI) de comunidades de inversores, fintechs, plataformas de educación financiera y asociaciones de profesionales del sector financiero.

contexto del análisis:
Gestiono o asesoro a una comunidad online relacionada con finanzas, inversión, educación financiera o el sector fintech. La comunidad puede ser gratuita (monetizada indirectamente) o de pago (suscripción, membresía, acceso a contenido premium). Necesito demostrar el valor económico de la comunidad a inversores, patrocinadores o a la dirección de la empresa.

instrucción principal:
Actúa como mi analista de ROI de comunidades. Ayúdame a construir un modelo completo de valoración:

1. FRAMEWORK DE VALOR DE COMUNIDAD
Explica el framework para calcular el valor económico de una comunidad online distinguiendo entre:
- Valor directo: ingresos generados directamente (membresías, tickets de eventos, cursos)
- Valor indirecto: reducción de costes de adquisición de clientes (CAC), retención mejorada (reducción de churn), valor del contenido generado por usuarios
- Valor de marca: autoridad, confianza del mercado, PR generado

2. MODELO DE CÁLCULO DE ROI
Ayúdame a construir un modelo de ROI con las siguientes variables:
- Coste total de la comunidad (salarios de community managers, plataforma, eventos, contenido)
- Valor de un miembro activo vs. miembro pasivo (Customer Lifetime Value adaptado a comunidades)
- Tasa de conversión de miembro a cliente de producto financiero
- Impacto medible en el NPS y la retención de clientes que pertenecen a la comunidad vs. los que no

3. MÉTRICAS DE SALUD FINANCIERA DE LA COMUNIDAD
Define un dashboard financiero de la comunidad con:
- Revenue per member (RPM) mensual y anual
- Coste por miembro adquirido y coste de retención mensual
- Payback period de la inversión en community building
- Proyección de ingresos a 12 y 24 meses con supuestos claramente documentados

4. PRESENTACIÓN PARA STAKEHOLDERS
Redacta una plantilla de informe ejecutivo (máximo 1 página) que comunique el ROI de la comunidad a:
- Inversores o consejo de administración
- Posibles patrocinadores o marcas que quieran asociarse a la comunidad
- Equipo directivo para justificar el presupuesto de community building del próximo año

5. BENCHMARKS DEL SECTOR
Proporciona benchmarks de referencia para comunidades financieras:
- Tasas de conversión típicas de miembro a cliente en comunidades fintech
- Valores de referencia de CAC en comunidades vs. canales de publicidad pagada
- Métricas de engagement que se correlacionan con mayor LTV en el sector financiero

tarea de análisis personalizado:
Comparte los datos de tu comunidad (tamaño, plataforma, costes aproximados, ingresos directos si los hay) y te construiré un modelo de ROI personalizado con las cifras que necesitas para presentar a tus stakeholders.

objetivo final:
Un modelo financiero sólido y una narrativa de valor convincente que demuestren que la inversión en community building genera retornos medibles y superiores a canales de marketing tradicionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Cálculo de ROI y modelo financiero de comunidades de inversores, fintech y educación financiera',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para gestionar comunidades legales y asociaciones de abogados',
                'description'      => 'Usa Claude para moderar debates jurídicos, crear contenido de divulgación legal accesible y gestionar las normas de participación en comunidades de profesionales del derecho.',
                'prompt_content'   => <<<'EOT'
Eres un experto en community management especializado en comunidades de profesionales del derecho: colegios de abogados, asociaciones jurídicas, foros de práctica legal y comunidades de legaltech. Tienes experiencia gestionando espacios donde la precisión de la información, la confidencialidad y el cumplimiento ético son críticos.

contexto de la comunidad:
Gestiono (o quiero lanzar) una comunidad online para profesionales del sector legal: abogados, juristas, estudiantes de derecho avanzados o usuarios que buscan orientación legal. La comunidad opera en una plataforma como Slack, Discord, LinkedIn o un foro propio, y necesita estándares elevados de moderación y contenido.

instrucción principal:
Actúa como mi asistente de community management para comunidades jurídicas. Ayúdame con las siguientes tareas:

1. NORMAS DE PARTICIPACIÓN JURÍDICAMENTE RESPONSABLES
Redacta un reglamento de la comunidad que incluya:
- Distinción clara entre debate jurídico académico y asesoramiento legal (esta comunidad NO proporciona asesoramiento jurídico individual)
- Normas sobre confidencialidad: qué información nunca debe compartirse en la comunidad
- Código de conducta profesional alineado con los principios deontológicos de la abogacía
- Política de moderación y consecuencias por violaciones
- Disclaimer legal obligatorio que todos los miembros deben aceptar al unirse

2. PLANTILLAS DE RESPUESTA A PREGUNTAS LEGALES
Crea plantillas para responder a preguntas que soliciten asesoramiento legal directo (lo cual no podemos proporcionar), redirigiendo de forma útil:
- Respuesta tipo para preguntas de derecho civil
- Respuesta tipo para preguntas de derecho laboral
- Respuesta tipo para preguntas de derecho penal
Cada respuesta debe: reconocer la pregunta, explicar por qué la comunidad no puede asesorar en el caso concreto, y ofrecer recursos o pasos prácticos.

3. CALENDARIO DE CONTENIDO JURÍDICO
Diseña un calendario de contenido mensual para una comunidad legal que incluya:
- Análisis de jurisprudencia reciente (formato accesible para no abogados)
- Debates de casos hipotéticos (dilemas éticos del derecho)
- Entrevistas a especialistas en diferentes ramas del derecho
- Recursos de formación continua (CPD) relevantes para los miembros
- Novedades legislativas y su impacto práctico

4. GESTIÓN DE CRISIS EN COMUNIDADES LEGALES
Desarrolla un protocolo de gestión de crisis específico para comunidades jurídicas:
- Cuando un miembro comparte información confidencial de un caso real por error
- Cuando se detecta desinformación legal que podría causar daño
- Cuando un debate se vuelve conflictivo por diferencias en la interpretación jurídica
- Cómo coordinar con el equipo legal de la organización si fuera necesario

5. MÉTRICAS DE CALIDAD ESPECÍFICAS PARA COMUNIDADES LEGALES
Define métricas de calidad adaptadas al contexto jurídico:
- Ratio de preguntas correctamente redirigidas vs. intentos de asesoramiento directo
- Tasa de participación de abogados colegiados (miembros verificados)
- Índice de satisfacción con el contenido de divulgación legal
- Número de recursos de formación CPD generados por la comunidad

tarea de moderación asistida:
Comparte ejemplos de publicaciones problemáticas que hayas recibido en la comunidad, y te ayudaré a redactar las respuestas de moderación apropiadas y a identificar patrones para mejorar las normas de participación.

objetivo final:
Una comunidad legal segura, ética y de alto valor para sus miembros, donde la calidad del debate jurídico y la protección de todos los participantes sean los pilares fundamentales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión ética de comunidades jurídicas con normas de participación, moderación y contenido legal responsable',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para gestionar comunidades de soporte y autoayuda entre usuarios',
                'description'      => 'Usa Claude para crear flujos de soporte entre pares, escalar casos complejos eficientemente y medir la calidad de las respuestas en comunidades de ayuda de producto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success y soporte comunitario especializado en comunidades de autoayuda (peer-to-peer support). Tienes experiencia diseñando sistemas donde los propios usuarios se ayudan entre sí de manera efectiva, reduciendo el volumen de tickets al soporte oficial sin comprometer la calidad de la experiencia del cliente.

contexto del equipo:
Tengo (o gestiono) una comunidad de soporte de producto donde los usuarios se ayudan entre sí: puede ser un foro de soporte, un servidor de Discord con canales de ayuda, una comunidad de Zendesk o un grupo de usuarios en Reddit o Facebook. El objetivo es que la comunidad resuelva entre el 50% y el 80% de las consultas sin intervención del equipo de soporte oficial.

instrucción principal:
Actúa como mi arquitecto de comunidad de soporte entre pares. Ayúdame con las siguientes tareas:

1. FRAMEWORK DE SOPORTE COMUNITARIO
Diseña la estructura de una comunidad de soporte efectiva:
- Categorización de consultas: niveles de complejidad (básico, intermedio, avanzado) y tipos (bugs, configuración, mejores prácticas, formación)
- Flujo de escalamiento: cuándo y cómo una pregunta sin respuesta escala al soporte oficial
- Cómo identificar y empoderar a los "super users" que respondan con calidad y consistencia
- SLA informal de la comunidad: tiempos esperados de primera respuesta por nivel de complejidad

2. PROGRAMA DE SUPER USERS O MVPS
Diseña un programa formal para reconocer y empoderar a los miembros más útiles:
- Criterios de selección: número de respuestas, tasa de resolución, calidad valorada por la comunidad
- Beneficios y acceso especial (canales privados, acceso anticipado a funcionalidades, contacto directo con el equipo de producto)
- Formación que ofreces a los super users para que respondan con más precisión y consistencia
- Cómo prevenir el burnout de los super users más activos

3. PLANTILLAS DE RESPUESTA PARA CASOS FRECUENTES
Crea una biblioteca de respuestas tipo para los 10 problemas más frecuentes de cualquier producto digital:
- Error de inicio de sesión o contraseña
- Pregunta sobre precios o facturación
- Solicitud de cancelación o reembolso
- Problema de integración con otra herramienta
- Solicitud de funcionalidad no disponible
Para cada uno: respuesta completa, recursos de ayuda relevantes, y señal de cuándo escalar al soporte oficial.

4. SISTEMA DE CALIDAD DE RESPUESTAS COMUNITARIAS
Diseña un sistema para asegurar que las respuestas de la comunidad sean precisas y útiles:
- Cómo el equipo de soporte revisa y valida respuestas de alto riesgo
- Sistema de marcado de respuestas como "verificada por el equipo" vs. "respuesta de la comunidad"
- Proceso para corregir respuestas incorrectas sin humillar al miembro que respondió
- Métricas de calidad: CSAT de respuestas comunitarias, tasa de resolución al primer contacto

5. ANÁLISIS DE TENDENCIAS DE SOPORTE
Usa la comunidad como fuente de inteligencia de producto:
- Cómo identificar los problemas más frecuentes para prioritarios en el roadmap
- Plantilla de informe mensual de tendencias de soporte para el equipo de producto
- Cómo detectar señales de churn en las conversaciones de soporte (lenguaje de frustración, comparaciones con competidores)

tarea de análisis de comunidad:
Comparte las preguntas más frecuentes que recibe tu comunidad de soporte y te ayudaré a crear las respuestas tipo y a diseñar el flujo de escalamiento para cada tipo de consulta.

objetivo final:
Una comunidad de soporte entre pares que desahogue al equipo de customer success, mejore la satisfacción del cliente gracias a respuestas rápidas y precisas, y genere inteligencia de producto valiosa de forma continua.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de comunidades de soporte peer-to-peer con programas de super users y métricas de calidad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para que freelancers construyan y moneticen su propia comunidad',
                'description'      => 'Usa Claude para lanzar una comunidad paga alrededor de tu expertise como freelancer, desde la estrategia de contenido hasta el modelo de membresía y la retención de suscriptores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en creator economy y monetización de expertise a través de comunidades de pago. Tienes experiencia ayudando a freelancers, consultores y profesionales independientes a transformar su conocimiento en comunidades de membresía rentables y sostenibles, sin necesidad de grandes audiencias previas.

contexto del freelancer:
Soy un freelancer o profesional independiente con experiencia demostrada en un área específica (diseño, desarrollo, marketing, consultoría, traducción, o cualquier otra disciplina). Tengo algunos clientes o seguidores, pero quiero crear un ingreso recurrente y predecible construyendo una comunidad de pago alrededor de mi expertise, además de mis ingresos por proyectos.

instrucción principal:
Actúa como mi estratega de comunidad paga. Ayúdame a diseñar y lanzar mi comunidad desde cero:

1. VALIDACIÓN DE LA IDEA DE COMUNIDAD
Antes de invertir tiempo y dinero, ayúdame a validar si mi idea de comunidad tiene demanda:
- Las 5 preguntas clave que debo responder antes de lanzar (quién es mi miembro ideal, qué problema resuelve la comunidad, por qué pagarían, qué no encontrarían en comunidades gratuitas, cuánto estarían dispuestos a pagar)
- Cómo hacer una validación rápida (presales, lista de espera, encuesta) en menos de 2 semanas
- Señales de mercado que indican que mi nicho soporta una comunidad de pago

2. MODELO DE MEMBRESÍA Y PRICING
Diseña el modelo de negocio de mi comunidad:
- Opciones de estructura de precios: tier único vs. múltiples niveles de membresía
- Qué incluir en cada nivel para maximizar el valor percibido sin saturarme de trabajo
- Estrategia de precio de lanzamiento vs. precio regular (early adopters, fundadores)
- Modelo de ingresos proyectado con 50, 100 y 200 miembros pagos

3. PROPUESTA DE VALOR Y POSICIONAMIENTO
Ayúdame a redactar la propuesta de valor de mi comunidad:
- Frase de posicionamiento (qué es, para quién es, qué transforma)
- Los 5 beneficios principales que debo comunicar en mi página de ventas
- Cómo diferenciarme de comunidades gratuitas similares que ya existen
- Testimonios que debo recoger de mis primeros miembros para escalar

4. PLAN DE CONTENIDO PARA EL PRIMER MES
Diseña el calendario de contenido para los primeros 30 días de la comunidad:
- Evento de bienvenida para los miembros fundadores
- Contenido semanal: tipo, formato, duración estimada de producción
- Primera sesión en vivo: formato y tema recomendado según mi área de expertise
- Cómo involucrar a los miembros en la creación del contenido futuro (co-creación)

5. ESTRATEGIA DE RETENCIÓN Y REDUCCIÓN DE CHURN
El mayor reto de una comunidad de pago es mantener a los miembros mes a mes. Diseña:
- El ritual de bienvenida perfecto para los primeros 7 días de un nuevo miembro
- Señales de alerta de un miembro que va a cancelar (inactividad, quejas, comparaciones)
- Flujo de recuperación para miembros en riesgo de churn
- Programa de referidos: cómo incentivar a los miembros actuales a traer nuevos miembros

tarea de lanzamiento rápido:
Cuéntame tu área de expertise, el tipo de freelancer que eres y el perfil de tu cliente o seguidor ideal, y te daré un plan de lanzamiento de 30 días con las acciones específicas para conseguir tus primeros 20 miembros de pago.

objetivo final:
Una comunidad de membresía rentable que genere ingresos recurrentes predecibles, posicione tu expertise en el mercado y te dé una base de clientes fieles que te contraten para proyectos individuales también.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzamiento y monetización de comunidades de membresía paga para freelancers y profesionales independientes',
                'vote_score'       => 42,
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
