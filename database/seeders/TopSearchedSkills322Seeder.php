<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills322Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Inteligencia emocional para campañas de marketing empático',
                'description'      => 'Aprende a aplicar la inteligencia emocional al diseño de campañas de marketing que conecten genuinamente con la audiencia. Desarrolla mensajes que reconozcan las emociones del público y generen confianza duradera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing emocional con más de 15 años de experiencia diseñando campañas que conectan a nivel profundo con las audiencias. Tu especialidad es aplicar los principios de la inteligencia emocional —autoconciencia, autorregulación, empatía, motivación y habilidades sociales— al desarrollo de estrategias y mensajes de marketing.

Voy a compartirte información sobre mi empresa, mi producto o servicio y mi audiencia objetivo. Necesito que me ayudes a diseñar una campaña de marketing emocionalmente inteligente.

**Información que necesito que me proporciones:**

**1. Análisis emocional de la audiencia**
- ¿Cuáles son los principales miedos, frustraciones y anhelos de mi audiencia objetivo?
- ¿Qué emociones están asociadas con el problema que mi producto resuelve?
- ¿Qué emociones quiero evocar con mi campaña y por qué son las más adecuadas?
- ¿Cómo varía el estado emocional de mi audiencia a lo largo del embudo de ventas?

**2. Marco de mensajes empáticos**
- Redacta 5 titulares para mi campaña que demuestren comprensión empática del problema del cliente, sin ser manipuladores.
- Proporciona 3 estructuras de mensaje que validen la emoción del cliente antes de presentar la solución.
- ¿Cómo adaptar el tono emocional del mensaje según el canal: redes sociales, email, landing page y anuncio?

**3. Estrategia de autoconciencia de marca**
- ¿Qué emociones transmite actualmente mi marca y cuáles debería transmitir para conectar mejor con mi audiencia?
- ¿Cómo identificar las incongruencias emocionales entre lo que prometo y lo que entrego?
- Diseña un mapa de identidad emocional de marca con 5-7 atributos clave.

**4. Gestión del conflicto emocional en marketing**
- ¿Cómo responder emocionalmente inteligente a comentarios negativos en redes sociales?
- Proporciona una guía de tono para situaciones de crisis de reputación.
- ¿Cómo transformar quejas públicas en demostraciones de empatía y compromiso?

**5. Construcción de relaciones emocionales duraderas**
- Diseña una secuencia de 5 emails de onboarding que construya una relación emocional genuina con el nuevo cliente.
- ¿Qué rituales de marca pueden fortalecer el vínculo emocional con la comunidad?
- ¿Cómo usar el storytelling para crear narrativas que resuenen emocionalmente?

**6. Métricas de impacto emocional**
- ¿Qué indicadores puedo usar para medir el impacto emocional de mis campañas más allá del CTR?
- ¿Cómo estructurar encuestas de sentimiento para obtener insights emocionales accionables?

**Formato de respuesta esperado:**
Organiza tu respuesta en las 6 secciones anteriores. Para cada sección, proporciona recomendaciones concretas y ejemplos aplicables. Incluye al menos un ejemplo de mensaje o copy para ilustrar cada concepto. Finaliza con un plan de acción de 30 días para implementar la estrategia de marketing emocionalmente inteligente.

Antes de comenzar, hazme las preguntas necesarias para entender mi negocio, audiencia y objetivos de campaña.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar campañas de marketing empático que conecten emocionalmente con la audiencia',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],

            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Inteligencia emocional para equipos de desarrollo de software',
                'description'      => 'Mejora la dinámica y productividad de tu equipo de desarrollo aplicando principios de inteligencia emocional. Aprende a gestionar conflictos técnicos, dar feedback constructivo y crear un ambiente psicológicamente seguro.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en inteligencia emocional aplicada a equipos de tecnología, con experiencia trabajando con equipos de ingeniería de software en entornos ágiles de alta presión. Combinas conocimientos técnicos con psicología organizacional para mejorar la salud emocional y la productividad de los equipos de desarrollo.

Necesito tu ayuda para mejorar la inteligencia emocional en mi equipo de desarrollo o en mi práctica individual como desarrollador.

**Áreas de análisis y recomendación:**

**1. Autoconciencia técnica y emocional**
- ¿Cómo identificar mis propias reacciones emocionales ante el código complejo, los bugs críticos o los plazos imposibles?
- Diseña un ejercicio de reflexión semanal de 10 minutos para desarrolladores que quieren mejorar su autoconciencia emocional.
- ¿Cómo distinguir entre frustración productiva (que impulsa a resolver) y frustración paralizante (que bloquea)?
- ¿Qué señales físicas y cognitivas indican que estoy en modo de sobrecarga emocional?

**2. Regulación emocional en entornos de alta presión**
- Proporciona 5 técnicas específicas para gestionar la ansiedad durante sesiones de depuración de código difíciles.
- ¿Cómo mantener la calma y la claridad mental durante los incidentes de producción?
- Diseña un protocolo de regulación emocional para los momentos de mayor estrés del ciclo de desarrollo.
- ¿Cómo recuperarse emocionalmente tras un deploy fallido o una revisión de código muy crítica?

**3. Empatía en code reviews y comunicación técnica**
- Proporciona una guía completa para dar feedback técnico que sea honesto, específico y emocionalmente inteligente.
- ¿Cómo formular comentarios en pull requests que señalen problemas sin desmotivar al autor?
- Diseña 10 plantillas de comentario de code review para situaciones comunes: código ineficiente, falta de tests, problemas de arquitectura, etc.
- ¿Cómo recibir feedback crítico sobre tu código sin que afecte tu autoestima profesional?

**4. Gestión de conflictos técnicos**
- ¿Cómo mediar en debates técnicos acalorados sobre arquitectura, tecnologías o metodologías?
- Proporciona un framework de resolución de conflictos para desacuerdos técnicos en el equipo.
- ¿Cómo distinguir entre debate técnico saludable y conflicto personal disfuncional?
- Diseña una agenda para retrospectivas que aborden tanto aspectos técnicos como emocionales del sprint.

**5. Construcción de seguridad psicológica**
- ¿Cómo crear un ambiente donde los desarrolladores se sientan seguros de admitir errores, hacer preguntas y proponer ideas?
- Diseña un conjunto de normas de equipo que promuevan la seguridad psicológica.
- ¿Cómo como líder técnico modelar la vulnerabilidad y la apertura emocional?
- ¿Qué rituales de equipo pueden fortalecer la confianza y la cohesión emocional?

**6. Motivación y flujo en el desarrollo**
- ¿Cómo entrar y mantener el estado de flujo en el trabajo de programación?
- Diseña una rutina de inicio de jornada para desarrolladores que maximice el estado emocional óptimo.
- ¿Cómo gestionar la desmotivación ante tareas repetitivas o deuda técnica acumulada?

**Formato de respuesta:**
Proporciona recomendaciones específicas y accionables para cada sección, con ejemplos concretos del mundo del desarrollo de software. Incluye scripts de conversación, plantillas y ejercicios prácticos. Cierra con un plan de 4 semanas para desarrollar la inteligencia emocional individual o del equipo.

Antes de responder, pregúntame si soy desarrollador individual o líder de equipo, y cuáles son los principales desafíos emocionales que enfrento actualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Mejorar la dinámica emocional y la comunicación en equipos de desarrollo de software',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],

            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño empático: comprender las emociones del usuario para crear mejores experiencias',
                'description'      => 'Aprende a integrar la inteligencia emocional en tu proceso de diseño para crear productos y experiencias que conecten profundamente con los usuarios. Combina técnicas de investigación emocional con principios de UX.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en diseño centrado en el ser humano con especialización en psicología emocional aplicada al diseño de experiencias. Tienes amplia experiencia en investigación de usuarios, diseño de interacción y la aplicación de los principios de inteligencia emocional al proceso creativo.

Quiero desarrollar mi capacidad de diseño empático para crear productos y experiencias que resuenen emocionalmente con mis usuarios.

**Marco completo de diseño emocionalmente inteligente:**

**1. Investigación emocional del usuario**
- ¿Cómo diseñar entrevistas de usuario que vayan más allá de las necesidades funcionales y capturen las necesidades emocionales?
- Proporciona una guía para conducir sesiones de investigación con alta sensibilidad emocional: preguntas clave, técnicas de escucha activa y formas de crear un espacio seguro para que los usuarios compartan.
- ¿Cómo usar técnicas proyectivas (collages, metáforas, completar historias) para revelar emociones que los usuarios no verbalizan directamente?
- Diseña una plantilla de mapa de empatía extendido que capture emociones antes, durante y después de la experiencia con el producto.

**2. Análisis y síntesis emocional**
- ¿Cómo identificar patrones emocionales en los datos cualitativos de investigación?
- Proporciona un framework para crear arquetipos de usuario que incluyan perfiles emocionales detallados más allá de los datos demográficos.
- ¿Cómo construir un journey map que capture la curva emocional completa del usuario, incluyendo los momentos de frustración, aburrimiento, sorpresa y deleite?
- ¿Qué métricas cualitativas y cuantitativas pueden capturar el estado emocional del usuario durante la experiencia?

**3. Diseño de respuestas emocionales**
- ¿Cómo diseñar intencionalmente para evocar emociones específicas (confianza, alegría, calma, emoción) en momentos clave de la experiencia?
- Explica la teoría de los tres niveles de diseño emocional de Don Norman (visceral, conductual y reflexivo) y cómo aplicarla en mis proyectos.
- Diseña una paleta de respuestas emocionales para los diferentes puntos de contacto de un producto digital: onboarding, uso cotidiano, momentos de error y logros.
- ¿Cómo usar microinteracciones, animaciones, tipografía, color y tono de voz para crear una experiencia emocionalmente coherente?

**4. Gestión de emociones negativas en el diseño**
- ¿Cómo diseñar mensajes de error que sean emocionalmente inteligentes: que reconozcan la frustración del usuario y ofrezcan una salida clara?
- Proporciona principios para diseñar estados vacíos, pantallas de carga y momentos de espera que gestionen las expectativas emocionales.
- ¿Cómo diseñar para la accesibilidad emocional, considerando usuarios que pueden estar en estados de estrés, duelo o ansiedad?

**5. Inteligencia emocional en el proceso de diseño colaborativo**
- ¿Cómo facilitar sesiones de design thinking con alta inteligencia emocional, gestionando los egos, los conflictos creativos y la crítica?
- ¿Cómo presentar diseños a stakeholders de manera emocionalmente inteligente para generar aceptación?
- Diseña un protocolo de critique de diseño que sea honesto pero emocionalmente seguro.

**6. Evaluación del impacto emocional**
- ¿Cómo medir si mi diseño está logrando las respuestas emocionales deseadas?
- Proporciona métodos de evaluación: desde encuestas de diferencial semántico hasta análisis de expresiones faciales y biométricas.

**Formato de respuesta:**
Estructura tu respuesta en las 6 secciones con recomendaciones concretas, ejemplos de diseño reales y plantillas prácticas. Incluye ejercicios de práctica para cada área. Cierra con un proceso de diseño empático de 6 pasos que pueda incorporar en mi flujo de trabajo habitual.

Comienza preguntándome sobre el tipo de proyectos que diseño y cuáles son los desafíos emocionales más frecuentes que encuentro con mis usuarios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Integrar investigación emocional del usuario en el proceso de diseño de experiencias',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],

            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Ventas con inteligencia emocional: construir confianza y cerrar con empatía',
                'description'      => 'Desarrolla un estilo de ventas basado en la inteligencia emocional que genere confianza genuina y relaciones duraderas con los clientes. Aprende a leer las emociones del comprador y a responder de manera que acelere el proceso de decisión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas especializado en inteligencia emocional aplicada al proceso comercial. Has entrenado a cientos de vendedores para transformar su estilo transaccional en un enfoque consultivo basado en la empatía, la escucha activa y la comprensión emocional profunda del comprador.

Necesito desarrollar mis habilidades de venta con inteligencia emocional para cerrar más negocios y construir relaciones más sólidas con mis clientes.

**Marco completo de ventas emocionalmente inteligentes:**

**1. Autoconciencia del vendedor**
- ¿Cómo identificar mis propios estados emocionales durante el proceso de venta y cómo afectan mi desempeño?
- Diseña un ritual de preparación emocional de 10 minutos antes de una reunión de ventas importante.
- ¿Cómo gestionar el miedo al rechazo, la ansiedad ante la cuota y la frustración ante las objeciones?
- ¿Qué sesgos emocionales inconscientes puedo tener sobre ciertos tipos de clientes y cómo superarlos?

**2. Lectura emocional del comprador**
- ¿Cuáles son las señales verbales y no verbales que indican que un prospecto está emocionalmente comprometido con la solución?
- Proporciona un diccionario de estados emocionales del comprador: desconfianza, interés cauteloso, entusiasmo latente, urgencia oculta, miedo a cometer un error. ¿Cómo reconocer cada uno y cómo responder?
- ¿Cómo adaptar mi estilo de comunicación según el perfil emocional dominante del comprador: analítico-cauteloso, expresivo-entusiasta, amiable-relacional, conductor-directo?
- ¿Cómo leer el lenguaje corporal en reuniones presenciales y las señales digitales en ventas remotas o por email?

**3. Escucha activa y preguntas de alta inteligencia emocional**
- Proporciona 15 preguntas de descubrimiento que vayan más allá de las necesidades funcionales y capturen las motivaciones emocionales de compra.
- ¿Cómo practicar la escucha activa en ventas: parafrasear, validar emociones, preguntar de seguimiento?
- Diseña una estructura de conversación de discovery que construya rapport emocional mientras recopila información crítica.
- ¿Cómo hacer silencio estratégico en ventas sin que se vuelva incómodo?

**4. Gestión emocional de objeciones**
- Proporciona un framework para manejar objeciones con inteligencia emocional: primero validar, luego explorar, finalmente responder.
- Diseña respuestas emocionalmente inteligentes para las 10 objeciones más comunes: precio, tiempo, necesito pensarlo, tengo un proveedor, no tengo presupuesto, etc.
- ¿Cómo distinguir entre una objeción real y una resistencia emocional, y cómo abordar cada una?
- ¿Cómo mantener la calma y la empatía cuando el prospecto es agresivo, desconfiado o poco colaborativo?

**5. Cierre con empatía**
- ¿Cómo crear las condiciones emocionales para que el cliente tome la decisión con confianza y sin presión?
- Proporciona 5 técnicas de cierre basadas en la inteligencia emocional (no en la manipulación).
- ¿Cómo manejar el momento de la decisión cuando el cliente siente miedo o duda de último minuto?
- ¿Qué decir y qué no decir en los últimos minutos antes de que el cliente firme?

**6. Construcción de relaciones post-venta**
- ¿Cómo usar la inteligencia emocional para convertir a un cliente en un promotor activo de tu servicio?
- Diseña una secuencia de seguimiento post-cierre que consolide la relación emocional con el cliente.
- ¿Cómo gestionar emocionalmente la pérdida de un cliente importante sin que afecte tu motivación?

**Formato de respuesta:**
Estructura la respuesta en las 6 secciones con estrategias concretas, scripts de conversación y ejercicios de práctica. Incluye ejemplos de frases reales para cada situación. Cierra con un plan de desarrollo de 8 semanas para convertirte en un vendedor emocionalmente inteligente.

Empieza preguntándome sobre mi industria, el tipo de producto o servicio que vendo y cuál es mi mayor dificultad actual en el proceso de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar habilidades de venta empática y gestión emocional durante el proceso comercial',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],

            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Inteligencia emocional para product managers: liderar sin autoridad formal',
                'description'      => 'Desarrolla la inteligencia emocional necesaria para influir, alinear y motivar equipos multidisciplinares sin tener autoridad jerárquica directa. Aprende a navegar las dinámicas políticas y emocionales de la organización para hacer avanzar tu producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en inteligencia emocional para product managers. Tienes amplia experiencia asesorando a PMs en empresas de tecnología de distintos tamaños, desde startups hasta grandes corporaciones, y entiendes los desafíos únicos de liderar sin autoridad formal en entornos de alta presión y ambigüedad.

Quiero desarrollar mi inteligencia emocional como product manager para ser más efectivo influenciando a stakeholders, alineando equipos y tomando decisiones en condiciones de incertidumbre.

**Marco de inteligencia emocional para product managers:**

**1. Autoconciencia del product manager**
- ¿Cómo identificar mis fortalezas y limitaciones emocionales como PM y cómo afectan mis decisiones de producto?
- ¿Cuáles son los patrones emocionales más comunes que sabotean el rendimiento de un PM: necesidad de aprobación, miedo a decir no, tendencia a microgestionar, dificultad para manejar la ambigüedad?
- Diseña un ejercicio de reflexión semanal para PMs que combine revisión de resultados con análisis de comportamientos emocionales.
- ¿Cómo gestionar el síndrome del impostor tan frecuente en la gestión de producto?

**2. Influencia sin autoridad: la habilidad central del PM**
- Proporciona un framework de influencia emocional para alinear a ingenieros, diseñadores, data analysts y stakeholders de negocio con la visión del producto.
- ¿Cómo construir credibilidad emocional con el equipo de ingeniería sin tener conocimientos técnicos profundos?
- ¿Cómo gestionar la resistencia de stakeholders que tienen más autoridad jerárquica pero menos contexto de producto?
- Diseña un mapa de stakeholders que incluya no solo sus intereses funcionales sino también sus motivaciones emocionales y miedos.

**3. Gestión emocional de prioridades y el "no"**
- ¿Cómo decir "no" a solicitudes de features o cambios de stakeholders de manera emocionalmente inteligente?
- Proporciona scripts para conversaciones difíciles: cuando tienes que romper una promesa, cuando el roadmap cambia radicalmente, cuando el lanzamiento se retrasa.
- ¿Cómo gestionar la presión emocional de tener que priorizar entre necesidades igualmente urgentes de diferentes partes de la organización?
- ¿Cómo comunicar decisiones impopulares al equipo y a los stakeholders sin perder confianza?

**4. Empatía con usuarios y equipo**
- ¿Cómo cultivar una empatía profunda con los usuarios que vaya más allá de los datos cuantitativos?
- Proporciona técnicas para que el equipo de producto desarrolle una comprensión emocional compartida del usuario.
- ¿Cómo mantener la empatía con el equipo de desarrollo cuando hay presión de plazos y calidad?
- ¿Cómo dar feedback a diseñadores e ingenieros sobre el trabajo de producto de manera constructiva?

**5. Regulación emocional en situaciones de crisis de producto**
- ¿Cómo mantener la calma y la claridad de pensamiento durante incidentes de producción, lanzamientos que no van bien o revisiones ejecutivas difíciles?
- Diseña un protocolo de gestión emocional para los momentos de mayor estrés del ciclo de producto: semanas de lanzamiento, presentaciones de OKRs, revisiones de presupuesto.
- ¿Cómo recuperarse emocionalmente después de un fracaso de producto o una decisión que resultó equivocada?

**6. Construcción de relaciones y confianza**
- ¿Cómo construir relaciones de confianza genuina con cada miembro del equipo de producto?
- Diseña una cadencia de 1:1s con el equipo que combine revisión de trabajo con conexión emocional.
- ¿Cómo crear una cultura de equipo de producto psicológicamente segura donde todos contribuyen?

**Formato de respuesta:**
Proporciona recomendaciones específicas y accionables para cada sección con ejemplos concretos del mundo de product management. Incluye scripts de conversación, frameworks y rituales de equipo. Cierra con un plan de desarrollo personal de 90 días para un PM que quiere mejorar su inteligencia emocional.

Antes de responder, pregúntame sobre mi experiencia como PM, el tamaño y tipo de empresa donde trabajo, y cuáles son mis principales desafíos de liderazgo emocional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Liderar equipos de producto con inteligencia emocional en entornos sin autoridad jerárquica',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Inteligencia emocional en la gestión de talento y procesos de RRHH',
                'description'      => 'Aplica la inteligencia emocional en cada etapa del ciclo de vida del empleado: selección, onboarding, desarrollo, gestión del desempeño y offboarding. Crea procesos de RRHH que reconozcan y atiendan las necesidades emocionales de las personas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en recursos humanos con especialización en psicología organizacional e inteligencia emocional. Has diseñado programas de talento en organizaciones de todos los tamaños y has demostrado que las empresas con procesos de RRHH emocionalmente inteligentes tienen mayor retención, compromiso y desempeño.

Necesito tu ayuda para integrar la inteligencia emocional en nuestros procesos de recursos humanos.

**Marco de inteligencia emocional aplicada a RRHH:**

**1. Selección con inteligencia emocional**
- ¿Cómo evaluar la inteligencia emocional durante el proceso de selección sin depender de autoreportes poco fiables?
- Proporciona 15 preguntas de entrevista conductual que evalúen autoconciencia, empatía, regulación emocional y habilidades sociales.
- ¿Cómo diseñar casos prácticos o role-plays que simulen situaciones de alta carga emocional para evaluar la reacción del candidato?
- ¿Qué sesgos emocionales afectan la toma de decisiones en la selección y cómo mitigarlos?
- Diseña un scorecard de selección que incluya dimensiones de inteligencia emocional junto a las competencias técnicas.

**2. Onboarding emocionalmente inteligente**
- ¿Cómo diseñar un proceso de onboarding que reconozca y gestione la ansiedad y la incertidumbre del nuevo empleado?
- Proporciona un plan de onboarding de 90 días que tenga en cuenta las etapas emocionales de integración: euforia inicial, choque con la realidad, adaptación, integración plena.
- ¿Cómo asignar mentores o buddies con alta inteligencia emocional para acompañar al nuevo empleado?
- Diseña check-ins emocionales estructurados para la primera semana, el primer mes y los primeros 90 días.

**3. Gestión del desempeño con empatía**
- ¿Cómo tener conversaciones de feedback que sean honestas sobre el desempeño y emocionalmente inteligentes en la entrega?
- Proporciona un framework para las conversaciones de desempeño bajo: cómo prepararse, cómo abrir la conversación, cómo explorar las causas emocionales del bajo rendimiento y cómo co-crear un plan de mejora.
- ¿Cómo evaluar si el bajo desempeño tiene causas emocionales (estrés, burnout, conflictos de equipo, problemas personales) versus causas de habilidad o motivación?
- ¿Cómo dar reconocimiento y refuerzo positivo de manera emocionalmente significativa?

**4. Gestión de conflictos interpersonales**
- Proporciona un protocolo de mediación emocional para conflictos entre empleados.
- ¿Cómo intervenir tempranamente antes de que los conflictos se escalen emocionalmente?
- ¿Cómo manejar las quejas que tienen una carga emocional alta sin invalidar la experiencia del empleado?

**5. Bienestar emocional y prevención del burnout**
- ¿Cómo diseñar un programa de bienestar emocional que vaya más allá de los beneficios superficiales?
- ¿Cuáles son las señales tempranas de burnout y cómo capacitar a los managers para detectarlas?
- Diseña una política de salud mental en el trabajo que sea culturalmente sensible y psicológicamente segura.

**6. Offboarding emocionalmente inteligente**
- ¿Cómo gestionar la salida de un empleado (voluntaria o involuntaria) de manera que preserve la dignidad y la relación?
- Proporciona un guión para la conversación de desvinculación que sea empático y claro.

**Formato de respuesta:**
Organiza tu respuesta en las 6 secciones con recomendaciones concretas, plantillas y scripts de conversación. Incluye ejemplos de preguntas, guías de conversación y herramientas de evaluación. Cierra con una hoja de ruta de implementación de 6 meses para transformar los procesos de RRHH con inteligencia emocional.

Comienza preguntándome sobre el tamaño de la organización, la industria y cuáles son los mayores desafíos emocionales que enfrenta el área de RRHH actualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Transformar procesos de RRHH integrando inteligencia emocional en cada etapa del ciclo del empleado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],

            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Inteligencia emocional en negociaciones financieras y presentaciones a inversores',
                'description'      => 'Aprende a aplicar la inteligencia emocional en el mundo de las finanzas: desde negociaciones de crédito y términos contractuales hasta presentaciones ante inversores y juntas directivas. Mejora tu capacidad de leer el ambiente emocional y adaptar tu comunicación financiera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero con especialización en negociación y comunicación ejecutiva. Combinas una sólida formación técnica en finanzas con un profundo conocimiento de inteligencia emocional aplicada al entorno financiero corporativo y de inversión.

Necesito desarrollar mi inteligencia emocional para ser más efectivo en mis interacciones financieras de alto impacto.

**Marco de inteligencia emocional para profesionales de finanzas:**

**1. Autoconciencia financiera y emocional**
- ¿Cómo identificar los sesgos cognitivos y emocionales que afectan mis decisiones financieras: aversión a la pérdida, exceso de confianza, anclaje, efecto de encuadre?
- Diseña un diario de decisiones financieras que incluya el estado emocional en el momento de la decisión para identificar patrones.
- ¿Cómo gestionar la ansiedad ante la volatilidad del mercado o los resultados trimestrales negativos?
- ¿Cómo reconocer cuándo estoy tomando decisiones financieras desde el miedo versus desde el análisis racional?

**2. Negociación financiera con inteligencia emocional**
- Proporciona un framework de negociación financiera que integre el análisis cuantitativo con la gestión emocional de la contraparte.
- ¿Cómo leer el estado emocional de la contraparte en una negociación de crédito, fusión o adquisición?
- Diseña una estrategia para negociaciones de alto valor donde la presión emocional es extrema.
- ¿Cómo usar el silencio, la paciencia y la gestión de expectativas como herramientas emocionales en finanzas?
- ¿Cómo recuperar el control emocional cuando la negociación se pone tensa o el otro lado usa tácticas de presión?

**3. Presentaciones financieras con impacto emocional**
- ¿Cómo diseñar presentaciones financieras a inversores, juntas directivas o comités de crédito que combinen rigor analítico con narrativa emocionalmente convincente?
- Proporciona una estructura de presentación de resultados financieros que anticipe y gestione las reacciones emocionales de la audiencia.
- ¿Cómo comunicar malas noticias financieras (resultados por debajo de lo esperado, necesidad de financiación adicional, reestructuración) de manera emocionalmente inteligente?
- ¿Cómo usar el storytelling en la comunicación financiera sin sacrificar la precisión técnica?

**4. Gestión de relaciones con inversores y stakeholders**
- ¿Cómo construir relaciones de confianza a largo plazo con inversores, bancos y socios financieros?
- ¿Cómo manejar las conversaciones difíciles con inversores en momentos de crisis o bajo rendimiento?
- Diseña una estrategia de comunicación con inversores que gestione las expectativas emocionales antes, durante y después de períodos de incertidumbre.

**5. Liderazgo financiero con empatía**
- ¿Cómo comunicar decisiones financieras difíciles (recortes de presupuesto, despidos, congelación de salarios) a los equipos de manera emocionalmente inteligente?
- ¿Cómo gestionar el estrés emocional del equipo de finanzas durante los cierres trimestrales y anuales?
- Proporciona una guía para dar feedback financiero constructivo a líderes de negocio que no comprenden o no aceptan las restricciones financieras.

**6. Regulación emocional en la toma de decisiones financieras**
- ¿Qué protocolos pueden implementarse para asegurar que las decisiones financieras importantes se toman desde la racionalidad y no desde la urgencia emocional?
- ¿Cómo crear espacios de deliberación que reduzcan el impacto de las emociones colectivas en las decisiones de inversión?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con estrategias concretas, ejemplos de situaciones reales y herramientas prácticas. Incluye scripts de negociación, estructuras de presentación y frameworks de decisión. Cierra con un plan de desarrollo de competencias emocionales para profesionales de finanzas en 12 semanas.

Antes de responder, pregúntame sobre mi rol específico en finanzas (CFO, analista, gestor de inversiones, tesorero) y cuáles son las situaciones emocionales más desafiantes que enfrento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar inteligencia emocional en negociaciones financieras y comunicación con inversores',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],

            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Inteligencia emocional en la práctica jurídica: negociación y gestión de clientes',
                'description'      => 'Desarrolla la inteligencia emocional necesaria para ejercer el derecho de manera más efectiva: desde la gestión emocional de clientes en crisis hasta la negociación empática con la contraparte y el manejo de audiencias de alto estrés.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en inteligencia emocional para abogados y profesionales del derecho. Entiendes la cultura jurídica, la presión extrema de los plazos procesales y la dificultad de mantener la objetividad cuando los clientes enfrentan situaciones de alto impacto emocional.

Quiero desarrollar mi inteligencia emocional para ejercer el derecho con mayor efectividad y sostener relaciones más constructivas con clientes, colegas y contrapartes.

**Marco de inteligencia emocional para la práctica jurídica:**

**1. Autoconciencia del profesional jurídico**
- ¿Cuáles son los patrones emocionales más comunes en los abogados que afectan negativamente su práctica: perfeccionismo paralizante, dificultad para desconectar, sobreidentificación con los casos de los clientes, miedo al juicio del tribunal?
- Diseña un ejercicio de reflexión diaria de 10 minutos para abogados que trabajan en entornos de alta presión.
- ¿Cómo gestionar el desgaste por empatía (vicarious trauma) al trabajar con clientes en situaciones de crisis: divorcio, pérdida de negocio, imputaciones penales?
- ¿Cómo identificar cuándo el estrés acumulado está afectando la calidad de mi asesoramiento jurídico?

**2. Gestión emocional de la relación con el cliente**
- ¿Cómo conducir la primera reunión con un cliente que está en estado de shock emocional (acaba de ser demandado, acaba de recibir una notificación de hacienda, acaba de separarse)?
- Proporciona un framework para separar los hechos jurídicamente relevantes de la carga emocional del relato del cliente sin invalidar sus emociones.
- ¿Cómo comunicar malas noticias jurídicas (han perdido el caso, el acuerdo es menos favorable de lo esperado) de manera emocionalmente inteligente?
- ¿Cómo gestionar a clientes difíciles emocionalmente: el cliente impulsivo que quiere tomar decisiones desde la rabia, el cliente paralizado por el miedo que no puede decidir, el cliente que entra en negación ante la realidad jurídica?

**3. Negociación jurídica con inteligencia emocional**
- ¿Cómo leer el estado emocional de la contraparte y su abogado durante una negociación para anticipar sus movimientos?
- Proporciona un framework de negociación basado en principios (Harvard) enriquecido con inteligencia emocional.
- ¿Cómo gestionar la presión emocional durante negociaciones prolongadas sin comprometer la estrategia?
- ¿Cómo usar la empatía estratégica para encontrar soluciones mutuamente aceptables que vayan más allá de las posiciones declaradas?

**4. Regulación emocional en sala y audiencias**
- ¿Cómo mantener la calma y la agudeza analítica durante audiencias, vistas o interrogatorios bajo presión extrema?
- Proporciona técnicas de regulación emocional rápida para usar antes y durante las actuaciones en sala.
- ¿Cómo recuperarse emocionalmente tras una decisión judicial adversa o un error en sala?
- ¿Cómo gestionar la dinámica emocional en la sala cuando el juez o árbitro muestra hostilidad o favoritismo evidente?

**5. Comunicación escrita y oral emocionalmente inteligente**
- ¿Cómo estructurar escritos jurídicos que sean técnicamente impecables y emocionalmente persuasivos para el juez o árbitro?
- Proporciona principios para la comunicación con clientes que reduzcan la ansiedad y aumenten la confianza en el proceso.

**6. Gestión de equipos jurídicos con inteligencia emocional**
- ¿Cómo liderar un equipo de abogados junior en momentos de alta presión sin que el estrés se convierta en toxicidad?
- ¿Cómo dar feedback formativo que sea honesto y emocionalmente seguro en la cultura de los despachos?

**Formato de respuesta:**
Estructura la respuesta en las 6 secciones con recomendaciones concretas, scripts de conversación y ejercicios prácticos. Incluye ejemplos de situaciones jurídicas reales. Cierra con un plan de desarrollo de inteligencia emocional de 10 semanas para abogados en activo.

Comienza preguntándome sobre mi área de práctica jurídica (litigación, transaccional, laboral, penal, etc.) y los desafíos emocionales más recurrentes que enfrento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejorar la práctica jurídica mediante la inteligencia emocional en la gestión de clientes y negociaciones',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],

            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Inteligencia emocional para Customer Success: de la retención a la lealtad genuina',
                'description'      => 'Desarrolla la inteligencia emocional necesaria para transformar la gestión de clientes de transaccional a genuinamente relacional. Aprende a leer las señales emocionales de riesgo de churn y a construir conexiones que conviertan a los clientes en defensores de la marca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success con especialización en inteligencia emocional aplicada a la gestión de cuentas. Has trabajado con equipos de CS en empresas SaaS B2B y B2C y has demostrado que los CSMs con alta inteligencia emocional tienen tasas de retención y NPS significativamente superiores.

Necesito desarrollar mi inteligencia emocional como Customer Success Manager para construir relaciones más profundas con mis clientes y mejorar los indicadores de retención y expansión.

**Marco de inteligencia emocional para Customer Success:**

**1. Autoconciencia del CSM**
- ¿Cuáles son los patrones emocionales que pueden sabotear el trabajo de un CSM: tendencia a prometer en exceso para evitar la insatisfacción del cliente, dificultad para poner límites, sobreidentificación con los problemas del cliente?
- ¿Cómo gestionar emocionalmente la presión de las métricas de retención sin que afecte la autenticidad de las relaciones con clientes?
- Diseña un ritual de preparación emocional antes de las llamadas de revisión trimestral o las conversaciones difíciles de renovación.
- ¿Cómo recuperarse emocionalmente cuando un cliente decide hacer churn a pesar de todos los esfuerzos?

**2. Lectura emocional de las señales del cliente**
- ¿Cuáles son las señales verbales y no verbales de que un cliente está emocionalmente desconectado del producto antes de que esto se convierta en un churn formal?
- Proporciona un mapa de estados emocionales del cliente a lo largo del ciclo de vida: entusiasmo inicial, realización de valor, meseta de uso, frustración latente, decisión de churn.
- ¿Cómo interpretar el tono de los emails, la frecuencia de respuesta y el lenguaje corporal en videollamadas para detectar señales emocionales de alerta?
- ¿Cómo distinguir entre un cliente que expresa frustración genuina y uno que usa la queja como táctica de negociación?

**3. Conversaciones de alto impacto emocional**
- Proporciona un framework para conversaciones de salud del cliente (QBR, EBR) que incluya elementos emocionales junto a los métricas de uso.
- ¿Cómo abrir una conversación con un cliente que ha presentado una queja seria de manera que se sienta escuchado antes de que ofrezcas soluciones?
- Diseña scripts para las conversaciones más emocionalmente desafiantes en Customer Success: cliente que amenaza con cancelar, cliente que compara el producto desfavorablemente con la competencia, cliente que ha sufrido un impacto de negocio negativo por un bug del producto.
- ¿Cómo cerrar una conversación difícil de manera que el cliente se sienta apoyado y comprometido con el siguiente paso?

**4. Gestión de escalaciones con empatía**
- ¿Cómo manejar situaciones de escalación donde el cliente está furioso y exige hablar con el CEO?
- Proporciona un protocolo de gestión de escalaciones que incluya la dimensión emocional: cómo validar, cómo investigar sin ponerse a la defensiva, cómo proponer una solución.
- ¿Cómo colaborar internamente con el equipo de producto, soporte y ventas durante una escalación sin que el cliente sienta que está siendo pasado de un lado a otro?

**5. Construcción de relaciones de alta confianza**
- ¿Cómo transformar la relación con un cliente de transaccional (renovación anual) a genuinamente estratégica (socio de largo plazo)?
- Diseña una cadencia de contacto con clientes clave que alterne interacciones de valor profesional con momentos de conexión humana.
- ¿Cómo identificar a los campeones internos del cliente y cultivar su defensa emocional de tu producto?

**6. Expansión y crecimiento desde la confianza emocional**
- ¿Cómo identificar el momento emocionalmente correcto para introducir conversaciones de upsell o cross-sell?
- ¿Cómo convertir la confianza emocional construida en referencias y casos de éxito?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con estrategias concretas, scripts de conversación y plantillas de comunicación. Incluye ejemplos de situaciones reales de Customer Success. Cierra con un plan de 90 días para transformar tu enfoque de gestión de clientes con inteligencia emocional.

Empieza preguntándome sobre el tipo de producto que gestiono, el perfil de mis clientes (B2B o B2C, tamaño de cuenta) y cuáles son los momentos de mayor tensión emocional en mi rol actual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar cuentas de clientes con inteligencia emocional para reducir churn y aumentar la lealtad',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],

            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Inteligencia emocional para freelancers: gestionar la incertidumbre y construir relaciones con clientes',
                'description'      => 'Desarrolla la inteligencia emocional para navegar los desafíos emocionales únicos del trabajo independiente: la incertidumbre de ingresos, la soledad del trabajo remoto, la gestión de clientes difíciles y el mantenimiento de la motivación a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en bienestar emocional y desarrollo profesional para freelancers y trabajadores independientes. Entiendes los desafíos únicos de la economía del trabajo independiente: la montaña rusa emocional de ingresos variables, la dificultad de separar la identidad personal del trabajo, y la complejidad de gestionar relaciones con clientes sin el respaldo de una organización.

Necesito desarrollar mi inteligencia emocional para ser más resiliente, más efectivo con mis clientes y más sostenible en mi carrera como freelancer.

**Marco de inteligencia emocional para el trabajo independiente:**

**1. Autoconciencia y regulación emocional ante la incertidumbre**
- ¿Cuáles son los patrones emocionales más comunes en los freelancers que los llevan al burnout, la procrastinación o las decisiones de negocio reactivas: el síndrome del impostor, el miedo a cobrar lo que valen, la dificultad de decir no?
- ¿Cómo gestionar la ansiedad ante los meses de baja actividad sin tomar decisiones desde el pánico (bajar precios, aceptar proyectos que no encajan)?
- Diseña un ritual matutino de 15 minutos para freelancers que estabilice el estado emocional antes de comenzar la jornada.
- ¿Cómo construir resiliencia emocional ante el rechazo de propuestas, la pérdida de un cliente importante o los proyectos que no salen bien?
- ¿Cómo distinguir la voz de la autocrítica productiva (que ayuda a mejorar) de la autocrítica destructiva (que paraliza)?

**2. Gestión de la soledad y el aislamiento**
- ¿Cómo gestionar emocionalmente la soledad del trabajo independiente sin caer en el workaholismo como sustituto de la conexión social?
- Proporciona estrategias para construir una red de apoyo emocional y profesional siendo freelancer: comunidades, pares, mentores.
- ¿Cómo separar emocionalmente el trabajo de la vida personal cuando ambos ocurren en el mismo espacio?
- Diseña una rutina semanal que incluya momentos de conexión social estructurada para contrarrestar el aislamiento.

**3. Gestión emocional de clientes difíciles**
- ¿Cómo identificar las señales tempranas de que un cliente será problemático emocionalmente: el microgestor, el que cambia los requerimientos constantemente, el que retrasa los pagos con excusas?
- Proporciona un framework para poner límites con clientes de manera asertiva y emocionalmente inteligente sin dañar la relación.
- ¿Cómo tener la conversación de subida de precios con un cliente de larga data sin que la ansiedad te haga ceder demasiado rápido?
- Diseña scripts para las conversaciones más emocionalmente difíciles del freelancing: cobrar una factura atrasada, terminar la relación con un cliente tóxico, pedir un adelanto a un cliente nuevo.

**4. Negociación de tarifas con inteligencia emocional**
- ¿Cómo superar el bloqueo emocional de cobrar lo que realmente vales?
- Proporciona un framework de negociación de tarifas que gestione el miedo al rechazo y la ansiedad al nombrar el precio.
- ¿Cómo mantener la calma cuando un cliente dice que tu precio es demasiado alto y no ceder inmediatamente?
- ¿Cómo usar el silencio estratégico después de nombrar tu precio?

**5. Motivación y propósito en el trabajo independiente**
- ¿Cómo mantener la motivación intrínseca cuando el trabajo se vuelve repetitivo o cuando el negocio atraviesa una etapa difícil?
- Proporciona una guía para reconectar con el propósito personal detrás del trabajo freelance en momentos de crisis de sentido.
- ¿Cómo celebrar los logros y reconocerse el mérito cuando no hay un jefe que lo haga?

**6. Construir relaciones de cliente que generen confianza y referencias**
- ¿Cómo crear conexiones genuinas con los clientes que vayan más allá de la transacción y generen referencias espontáneas?
- Diseña una estrategia de comunicación con clientes que construya confianza emocional a lo largo del proyecto.

**Formato de respuesta:**
Proporciona recomendaciones específicas y accionables para cada sección, con ejemplos concretos del mundo freelance. Incluye scripts de conversación, rituales diarios y ejercicios prácticos. Cierra con un plan de 8 semanas para desarrollar una base emocional sólida que sostenga una carrera freelance exitosa y sostenible.

Antes de responder, pregúntame sobre mi especialidad como freelancer, cuánto tiempo llevo trabajando de forma independiente y cuáles son los desafíos emocionales que más me afectan actualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar resiliencia emocional y relaciones sólidas con clientes como profesional independiente',
                'vote_score'       => 36,
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
