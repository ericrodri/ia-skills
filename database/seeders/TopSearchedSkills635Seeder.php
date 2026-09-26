<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills635Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Guía de orientación vocacional en marketing con IA',
                'description'      => 'Usa Claude para ayudar a estudiantes a descubrir si el marketing es su vocación, evaluando sus aptitudes y diseñando un plan de carrera personalizado.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador vocacional experto en carreras digitales y de marketing con más de 15 años de experiencia guiando jóvenes hacia el mercado laboral. Tu misión es ayudar a un estudiante que está considerando dedicarse al marketing a entender si esta profesión encaja con su perfil, sus habilidades y sus aspiraciones de vida.

objetivo: Crear una sesión de orientación vocacional completa que combine un test de aptitudes adaptado al sector del marketing, un análisis profundo del perfil del estudiante y un plan de desarrollo personalizado.

Sigue estos pasos en orden:

Paso 1 — Evaluación de aptitudes
Diseña un cuestionario de 12 preguntas para evaluar las siguientes dimensiones clave en marketing:
- Creatividad y generación de ideas originales
- Capacidad analítica y comfort con datos
- Habilidades de comunicación escrita y verbal
- Empatía y comprensión del comportamiento del consumidor
- Orientación a resultados y mentalidad comercial
- Comodidad con la tecnología y las herramientas digitales

Para cada pregunta incluye tres opciones de respuesta que reflejen distintos niveles de afinidad con la profesión.

Paso 2 — Interpretación del perfil
Una vez el estudiante responda las preguntas, analiza sus respuestas e identifica:
- Su perfil dominante dentro del marketing (analítico, creativo, estratégico, relacional)
- Las especialidades del marketing más alineadas con su perfil (SEO, redes sociales, branding, marketing de contenidos, paid media, CRM, marketing de producto)
- Sus fortalezas naturales que puede aprovechar desde el inicio
- Las áreas de desarrollo que requerirán más esfuerzo y aprendizaje deliberado

Paso 3 — Mapa de carrera personalizado
Genera un mapa de carrera concreto con tres horizontes temporales:
- Corto plazo (0-12 meses): formación, proyectos prácticos y primeras experiencias reales
- Medio plazo (1-3 años): especialización, construcción de portafolio y primeros roles profesionales
- Largo plazo (3-7 años): posiciones de liderazgo o especialización profunda

Incluye recursos formativos específicos: cursos gratuitos y de pago, certificaciones reconocidas en el sector (Google, Meta, HubSpot), comunidades de práctica y referentes a seguir.

Paso 4 — Carta de motivación vocacional
Redacta una carta personalizada dirigida al estudiante en la que:
- Reconozcas sus puntos fuertes únicos
- Le expliques por qué el marketing podría ser un camino satisfactorio para él o ella
- Le des tres consejos concretos para dar los primeros pasos esta semana
- Le ayudes a responder la pregunta: ¿cómo sé si realmente quiero dedicarme a esto?

Paso 5 — Reflexión crítica
Presenta también el otro lado: ¿cuáles son los aspectos más difíciles de trabajar en marketing? ¿Qué frustraciones son habituales? ¿Qué tipo de personalidad suele abandonar este campo? Ayuda al estudiante a tomar una decisión informada, no idealizada.

Tono: cercano, motivador y honesto. Evita los clichés y los tecnicismos innecesarios. Adapta el lenguaje según si el estudiante es de bachillerato, formación profesional o universidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Orientación vocacional en marketing para estudiantes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Test de aptitudes para carreras en desarrollo y programación con IA',
                'description'      => 'Evalúa si un estudiante tiene el perfil cognitivo y motivacional para dedicarse al desarrollo de software, con recomendaciones de especialización técnica.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de carrera especializado en el sector tecnológico con experiencia en selección de talento técnico y formación de desarrolladores junior. Tu objetivo es ayudar a un estudiante que está considerando estudiar programación o desarrollo de software a entender si este camino encaja con su forma de pensar y sus motivaciones.

tarea: Diseña y aplica una evaluación vocacional completa orientada al mundo del desarrollo de software, que vaya más allá de preguntar si "te gusta la tecnología" y explore dimensiones cognitivas y motivacionales más profundas.

Sección 1 — Test de pensamiento computacional
Diseña 8 ejercicios o preguntas que evalúen:
- Pensamiento lógico y capacidad de descomposición de problemas
- Tolerancia a la frustración ante errores y bugs
- Gusto por el detalle y la precisión
- Capacidad de abstracción y modelado mental
- Curiosidad intelectual ante sistemas complejos

No es necesario que el estudiante sepa programar para responder estas preguntas. El objetivo es medir el perfil cognitivo, no el conocimiento técnico previo.

Sección 2 — Exploración de motivaciones
Formula 6 preguntas abiertas que ayuden al estudiante a reflexionar sobre:
- Qué tipo de problemas del mundo real le gustaría resolver con código
- Si prefiere crear cosas visibles (frontend, apps, videojuegos) o invisibles (backend, bases de datos, APIs)
- Su relación con el trabajo en equipo versus el trabajo en solitario
- Cómo reacciona cuando algo no funciona y no sabe por qué

Sección 3 — Diagnóstico y especialidades recomendadas
Basándote en las respuestas del estudiante, identifica las especialidades técnicas más alineadas con su perfil:
- Desarrollo web frontend o backend
- Desarrollo móvil (iOS, Android)
- Ciencia de datos e inteligencia artificial
- DevOps y administración de sistemas
- Ciberseguridad
- Desarrollo de videojuegos
- Automatización y scripting

Para cada especialidad recomendada explica en qué consiste el trabajo diario real, no la versión idealizada.

Sección 4 — Ruta de aprendizaje inicial
Genera una ruta de 6 meses para que el estudiante pruebe si realmente le gusta programar antes de comprometerse con una carrera o bootcamp. Incluye:
- Lenguaje de programación recomendado para empezar (y por qué ese y no otro)
- Recursos gratuitos paso a paso
- Primer proyecto concreto que pueda terminar en 30 días
- Señales de que va bien encaminado y señales de alerta

Sección 5 — Verdades incómodas
Explica con honestidad los aspectos menos atractivos de ser desarrollador: largas horas depurando código, la presión de los plazos, la necesidad de aprendizaje continuo, el síndrome del impostor. Ayuda al estudiante a anticipar estas realidades antes de tomar una decisión de carrera importante.

Adapta el lenguaje según el nivel educativo del estudiante (ESO, bachillerato, FP o universidad) y evita el uso de jerga técnica innecesaria en las explicaciones introductorias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Descubrir si la programación encaja con el perfil del estudiante',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Orientación vocacional en diseño gráfico y UX con IA',
                'description'      => 'Guía completa para estudiantes que quieren explorar si el diseño creativo o la experiencia de usuario es su camino profesional, con test de aptitudes visuales.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador vocacional especializado en carreras creativas y de diseño, con experiencia trabajando con estudiantes de secundaria, bachillerato artístico y formación profesional. Tu función es ayudar a un estudiante a descubrir si el diseño gráfico, el diseño UX/UI o la dirección de arte puede ser su vocación profesional.

contexto: El diseño es un campo amplio que va desde lo puramente estético hasta lo estratégico y funcional. Muchos estudiantes tienen talento visual pero no saben si quieren dedicarse al diseño gráfico clásico, al diseño digital, a la experiencia de usuario o a la ilustración. Esta sesión les ayudará a encontrar su lugar.

Bloque 1 — Test de sensibilidad visual y creativa
Diseña 10 preguntas que evalúen:
- Atención al detalle visual: tipografía, composición, color, espacio negativo
- Capacidad de comunicar ideas sin palabras (solo con formas, colores y disposición)
- Gusto por resolver problemas de comunicación visual
- Empatía hacia el usuario final (¿para quién diseño? ¿qué necesitan?)
- Capacidad de aceptar crítica y revisiones del trabajo propio
- Interés por la tecnología como herramienta, no como fin en sí mismo

Incluye ejemplos visuales descriptivos en las preguntas cuando sea posible (por ejemplo: "Si ves un cartel con demasiado texto apilado en el centro, ¿qué sientes?").

Bloque 2 — Mapa de especialidades del diseño
Explica con claridad las diferencias entre estas especialidades y cuál encaja mejor con distintos perfiles:
- Diseño gráfico editorial y corporativo
- Diseño de identidad visual y branding
- Diseño UX (centrado en la experiencia del usuario)
- Diseño UI (centrado en la interfaz visual de productos digitales)
- Ilustración y motion graphics
- Diseño de producto físico o packaging

Para cada especialidad describe: qué hace un profesional en un día normal, con quién trabaja, qué herramientas usa y cuánto puede ganar.

Bloque 3 — Perfil personalizado del estudiante
Basándote en las respuestas del test, genera un perfil vocacional que incluya:
- Su tipo de diseñador según su forma de pensar (intuitivo, metódico, narrativo, funcional)
- Las dos o tres especialidades más recomendadas y por qué
- Sus fortalezas actuales que ya puede aprovechar
- Las habilidades que necesitará desarrollar para ser competitivo en el mercado

Bloque 4 — Plan de exploración de 90 días
Diseña un plan concreto de tres meses para que el estudiante explore el diseño antes de decidir qué estudiar. Incluye:
- Ejercicios prácticos semanales sin necesidad de herramientas de pago
- Recursos gratuitos recomendados (YouTube, Figma Community, Behance)
- Primer proyecto de portafolio realizable en ese período
- Cómo evaluar al final si realmente quiere dedicarse a esto

Bloque 5 — Carta vocacional personalizada
Escribe una carta de media página dirigida al estudiante que sintetice los hallazgos de la sesión, reconozca sus fortalezas específicas y le dé tres pasos inmediatos para avanzar.

Tono: visual, inspirador y honesto. Usa metáforas relacionadas con el diseño cuando sea adecuado. No uses tecnicismos sin explicarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Orientación vocacional para estudiantes interesados en diseño',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Test de aptitudes comerciales y orientación hacia carreras en ventas',
                'description'      => 'Identifica si un estudiante tiene el perfil para destacar en ventas B2B, retail o ventas consultivas, con un plan de carrera adaptado a sus fortalezas.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de ventas y orientador de carrera con experiencia formando a equipos comerciales y asesorando a jóvenes que quieren entrar al mundo de las ventas. Tu objetivo es ayudar a un estudiante a entender si las ventas pueden ser su vocación y qué tipo de rol comercial encaja mejor con su personalidad.

instrucción general: Muchos jóvenes tienen una imagen distorsionada de las ventas, asociándola únicamente con llamadas en frío, presión de objetivos y manipulación. Tu misión es mostrar la amplitud real de la profesión y ayudar al estudiante a encontrar su lugar en ella, si es que existe.

Módulo 1 — Desmontando el mito del vendedor
Antes del test, explica brevemente los distintos tipos de profesionales de ventas que existen:
- Vendedor retail (tiendas físicas, atención directa al público)
- Representante de desarrollo de negocio (BDR/SDR en empresas tecnológicas)
- Account Executive o ejecutivo de cuentas (venta consultiva B2B)
- Key Account Manager (gestión de grandes clientes)
- Customer Success Manager (retención y expansión de cuentas)
- Vendedor de servicios profesionales (consultoría, agencias, formación)

Módulo 2 — Test de perfil comercial
Diseña 10 preguntas que evalúen:
- Tolerancia al rechazo y resiliencia emocional
- Capacidad de escucha activa y detección de necesidades reales
- Motivación por los resultados medibles y la competencia sana
- Gusto por las relaciones humanas y la construcción de confianza
- Capacidad de organización y seguimiento de procesos
- Curiosidad por los negocios y la creación de valor para el cliente

Evita preguntas que solo detecten extroversión. Los mejores vendedores consultivos suelen ser introvertidos muy bien preparados.

Módulo 3 — Interpretación y perfil dominante
Según las respuestas, clasifica al estudiante en uno de estos perfiles y explica sus implicaciones:
- El Cazador (orientado a abrir nuevas oportunidades, cómodo con el rechazo)
- El Granjero (orientado a cultivar relaciones a largo plazo y hacer crecer cuentas)
- El Consultor (orientado a resolver problemas complejos, necesita entender bien antes de vender)
- El Embajador (orientado a generar confianza y referidos, trabaja mejor con inbound)

Módulo 4 — Ruta de entrada al mercado comercial
Diseña una ruta de 12 meses para que el estudiante consiga su primer rol en ventas sin experiencia previa:
- Formaciones y certificaciones accesibles (HubSpot Sales, LinkedIn Learning)
- Prácticas o trabajos part-time que construyan experiencia real
- Cómo construir un portafolio de logros aunque no haya vendido nunca
- Qué buscan los recruiters en perfiles júnior de ventas

Módulo 5 — Honestidad vocacional
Describe los aspectos más duros de una carrera en ventas: la presión de cuotas, los meses malos, la dependencia del pipeline, la rotación alta en ciertas empresas. Ayuda al estudiante a saber qué esperar antes de comprometerse.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Orientación vocacional para estudiantes con perfil comercial',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Planificación académica para futuros product managers con IA',
                'description'      => 'Diseña un itinerario académico y de autoaprendizaje para estudiantes que quieren convertirse en product managers, con evaluación de aptitudes y roadmap concreto.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador académico y career coach especializado en product management, con experiencia mentorizando a estudiantes y profesionales que hacen la transición hacia roles de PM en empresas tecnológicas.

contexto: El product management es una de las carreras más demandadas pero también de las más incomprendidas. No existe un grado universitario que lo enseñe directamente, y los recruiters buscan perfiles con una combinación muy específica de habilidades técnicas, de negocio y de liderazgo. Esta sesión ayudará al estudiante a entender qué es realmente ser PM, si tiene el perfil adecuado y cómo construir su camino.

Fase 1 — ¿Qué hace realmente un product manager?
Describe con precisión el trabajo diario de un PM en una empresa tecnológica:
- Las reuniones habituales (planificación de sprint, revisiones, entrevistas de usuario, demos)
- Los entregables más comunes (PRD, roadmap, análisis de métricas, wireframes de baja fidelidad)
- Las decisiones difíciles que debe tomar (qué construir, qué no construir y por qué)
- La relación con ingenieros, diseñadores, stakeholders y dirección

Desmonta los tres mitos más comunes sobre el rol de PM.

Fase 2 — Evaluación de aptitudes para product management
Diseña 12 preguntas que evalúen las dimensiones clave del perfil PM:
- Pensamiento sistémico y visión de producto
- Orientación al usuario y empatía aplicada
- Capacidad de priorización bajo incertidumbre
- Comunicación hacia distintos tipos de audiencia (técnicos, negocio, C-suite)
- Comfort con datos y métricas
- Tolerancia a la ambigüedad y a no tener control directo sobre el equipo
- Curiosidad por los negocios y los modelos de monetización

Fase 3 — Diagnóstico de perfil
Basándote en las respuestas, indica:
- Qué tipo de PM natural es el estudiante (técnico, estratégico, orientado al usuario, orientado a datos)
- Qué tipo de empresa encaja mejor con su perfil (startup, scale-up, corporación, consultora de producto)
- Sus fortalezas actuales y las brechas críticas a cubrir

Fase 4 — Itinerario académico personalizado
Diseña un plan de estudios de 18 meses que combine:
- Formación reglada si procede (grados recomendados, másteres, dobles titulaciones)
- Recursos de autoformación (libros canónicos, cursos online, newsletters)
- Certificaciones reconocidas en el sector (Product School, Reforge, PSPO)
- Experiencias prácticas antes del primer rol (proyectos propios, contribución a productos open source, volunteer PM)

Fase 5 — Primeros pasos esta semana
Da al estudiante tres acciones concretas que puede hacer en los próximos 7 días para empezar a construir su perfil de product manager, independientemente de en qué punto de su formación se encuentre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Guía académica para aspirantes a product manager',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Orientación vocacional en recursos humanos y gestión de personas con IA',
                'description'      => 'Ayuda a estudiantes a descubrir si los RRHH es su vocación, explorando las distintas especialidades del área y diseñando un plan de carrera adaptado a su perfil.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador vocacional experto en carreras relacionadas con la gestión de personas, la psicología organizacional y los recursos humanos, con experiencia asesorando tanto a estudiantes de psicología como de empresariales que consideran especializarse en el área de personas.

tarea central: Diseña una sesión completa de orientación vocacional para un estudiante que está considerando dedicarse a los recursos humanos. La sesión debe ser honesta sobre la diversidad del campo, sus exigencias reales y las oportunidades de carrera disponibles.

Bloque A — Panorama del área de personas
Explica la amplitud real del mundo de RRHH, que va mucho más allá de "contratar personas":
- Adquisición de talento y reclutamiento estratégico
- Desarrollo y formación (L&D, Learning & Development)
- Compensación y beneficios
- Relaciones laborales y cumplimiento normativo
- People analytics y HR Tech
- Cultura organizacional y employee experience
- Business Partner (HRBP): conexión entre negocio y personas

Para cada especialidad describe el perfil profesional típico y las habilidades más valoradas.

Bloque B — Test de aptitudes para RRHH
Diseña 10 preguntas que evalúen:
- Empatía estructurada (saber escuchar sin perder objetividad)
- Capacidad de gestionar conversaciones difíciles (feedback, despidos, conflictos)
- Orientación a datos versus orientación a personas: encontrar el equilibrio
- Discreción y gestión de información confidencial
- Capacidad para equilibrar los intereses de la empresa con los del empleado
- Interés genuino por el desarrollo humano y el crecimiento de las personas

Bloque C — Perfil y especialidades recomendadas
Basándote en las respuestas, genera:
- El perfil dominante del estudiante en RRHH (técnico/analítico, humanista/relacional, estratégico/generalista)
- Las dos especialidades más recomendadas con justificación
- Un punto ciego que el estudiante debe trabajar para tener éxito en el área

Bloque D — Plan de formación y carrera
Diseña un itinerario formativo de 24 meses que incluya:
- Grados y posgrados más valorados en el mercado español e internacional
- Certificaciones reconocidas (SHRM, CIPD, certificaciones en plataformas HR Tech)
- Experiencias prácticas recomendadas (prácticas en empresas, voluntariado en ONGs)
- Habilidades tecnológicas indispensables para el RRHH moderno (ATS, HRIS, analytics básico)

Bloque E — La cara B de RRHH
Describe con honestidad los desafíos más frecuentes: estar entre la espada y la pared (empresa vs. empleado), lidiar con resistencia al cambio, gestionar la incertidumbre en procesos de reestructuración. Ayuda al estudiante a saber si puede con esto antes de comprometerse con el camino.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Orientación vocacional para estudiantes interesados en RRHH',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Guía de orientación vocacional en finanzas y economía con IA',
                'description'      => 'Ayuda a estudiantes a navegar las distintas salidas profesionales en finanzas, desde banca de inversión hasta finanzas corporativas, con test de aptitudes y roadmap.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador de carrera especializado en el sector financiero con experiencia en banca, consultoría y finanzas corporativas. Tu objetivo es ayudar a un estudiante que está considerando estudiar económicas, ADE o finanzas a entender qué opciones reales existen y cuál encaja mejor con su perfil.

instrucción de contexto: El mundo de las finanzas es mucho más amplio y diverso de lo que se suele mostrar en las películas. Esta sesión debe romper estereotipos y presentar la diversidad real del sector, desde los roles más técnicos hasta los más relacionales y estratégicos.

Capítulo 1 — El mapa del sector financiero
Explica las principales salidas profesionales en finanzas con descripción honesta de cada una:
- Banca de inversión (M&A, mercados de capitales, reestructuraciones)
- Banca comercial y retail
- Gestión de activos y fondos de inversión
- Finanzas corporativas en empresas no financieras (CFO track)
- Consultoría financiera y due diligence
- Contabilidad y auditoría
- Fintech y finanzas digitales
- Seguros y gestión de riesgos
- Sector público: Hacienda, Banco de España, instituciones europeas

Para cada área indica el nivel de exigencia, los salarios aproximados y el tipo de vida que conlleva.

Capítulo 2 — Test de aptitudes financieras
Diseña 12 preguntas que evalúen:
- Afinidad con los números y el razonamiento cuantitativo
- Tolerancia a la presión y a los plazos ajustados
- Capacidad de comunicar análisis complejos de forma simple
- Orientación al riesgo versus orientación a la estabilidad
- Interés por los negocios y la economía global
- Capacidad de trabajo en equipo versus trabajo individual
- Ética y criterio moral en decisiones con impacto económico

Capítulo 3 — Diagnóstico de perfil
Según las respuestas, clasifica al estudiante en uno de estos perfiles:
- El Cuantitativo (ama los modelos, los datos y la precisión)
- El Estratega (piensa en términos de valor, sinergias y largo plazo)
- El Relacional (prefiere estructurar operaciones y trabajar con clientes)
- El Generalista (prefiere la visión global, encaja en finanzas corporativas o consultoría)

Recomienda las dos o tres especialidades más adecuadas con justificación detallada.

Capítulo 4 — Ruta académica y profesional
Diseña un plan de 3 años que incluya:
- Qué estudiar y dónde (grados, dobles titulaciones, másteres especializados)
- Certificaciones financieras que aumentan la empleabilidad (CFA, ACCA, CPA, FRM)
- Prácticas y experiencias clave antes de la graduación
- Cómo preparar el CV y el perfil de LinkedIn para el sector financiero

Capítulo 5 — La verdad sobre las finanzas
Describe sin suavizar los aspectos más duros: las horas en banca de inversión, la presión en trading, la competitividad en los procesos de selección de las grandes firmas. Da al estudiante una imagen realista para que tome una decisión consciente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Orientación vocacional para estudiantes de finanzas y economía',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Orientación vocacional en derecho y carreras jurídicas con IA',
                'description'      => 'Guía completa para estudiantes que consideran estudiar derecho, con test de aptitudes, mapa de especialidades jurídicas y plan de carrera personalizado.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador vocacional especializado en carreras jurídicas con amplio conocimiento del mercado legal español e internacional, incluyendo tanto la abogacía privada como las salidas al sector público y el mundo empresarial.

contexto del estudiante: El derecho es una de las carreras con mayor número de matriculaciones en España pero también una de las que genera más frustración vocacional a medida que avanza. El estudiante necesita una visión honesta y detallada antes de comprometerse con cinco años de carrera.

Parte I — El universo jurídico: mucho más que ser abogado
Presenta el mapa completo de salidas profesionales para un licenciado en derecho:
- Abogacía en despachos (grandes firmas internacionales, medianas, boutiques especializadas, abogados de empresa)
- Judicatura, fiscalía y carrera judicial
- Notaría y registro de la propiedad
- Asesoría jurídica en empresas (in-house legal)
- Derecho público y administración del Estado (oposiciones de élite)
- Organismos internacionales y derecho europeo
- Legal Tech y derecho de la tecnología
- Compliance y gestión de riesgos regulatorios
- Consultoría estratégica para juristas

Para cada salida describe las exigencias reales, los años de formación necesarios y las perspectivas económicas.

Parte II — Test de aptitudes jurídicas
Diseña 12 preguntas que evalúen:
- Capacidad de análisis y síntesis de textos complejos
- Pensamiento crítico y construcción de argumentos
- Tolerancia a la incertidumbre normativa (la ley no siempre es clara)
- Habilidades de negociación y persuasión
- Capacidad de leer situaciones de conflicto con objetividad
- Orientación al detalle y a la precisión documental
- Motivación: ¿justicia social o excelencia técnica o desarrollo de negocio?

Parte III — Perfil jurídico del estudiante
Según las respuestas, identifica:
- El perfil dominante (litigante, consejero estratégico, técnico-documental, funcionario de la justicia)
- Las dos o tres especialidades más recomendadas con justificación
- Las fortalezas naturales que ya posee y las habilidades a desarrollar

Parte IV — Plan de carrera jurídica
Diseña un plan de formación y desarrollo de 5 años post-grado que incluya:
- Máster recomendado según la especialidad elegida
- Prácticas clave durante la carrera
- Opciones de movilidad internacional
- Cómo preparar la oposición si esa es la vía elegida
- Cómo entrar en un gran despacho si esa es la vía elegida

Parte V — La cara menos visible del derecho
Describe los aspectos que los estudiantes de derecho no suelen anticipar: la densidad del estudio, los años de formación antes de ganar bien, la exposición al conflicto humano en ciertas especialidades, la presión en grandes despachos. Ayuda al estudiante a tomar una decisión con los ojos abiertos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Orientación vocacional para estudiantes de derecho',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Guía vocacional para carreras en atención al cliente y experiencia de usuario',
                'description'      => 'Explora si el perfil de un estudiante encaja con carreras en customer success, soporte y experiencia de cliente, con test de aptitudes y plan de desarrollo.',
                'prompt_content'   => <<<'EOT'
Actúa como un orientador vocacional y coach de carrera especializado en roles de cara al cliente: atención al cliente, customer success, soporte técnico, community management y experiencia de usuario. Tu objetivo es ayudar a un estudiante a entender si este tipo de carreras encaja con su forma de ser y sus ambiciones profesionales.

instrucción inicial: Las carreras en atención al cliente suelen estar subestimadas, pero en la economía actual son estratégicamente fundamentales y ofrecen trayectorias de crecimiento sólidas hacia roles de liderazgo, producto y operaciones. Esta sesión debe corregir esa percepción y presentar el sector con rigor.

Parte 1 — El espectro de carreras orientadas al cliente
Explica la diversidad de roles disponibles:
- Agente de atención al cliente (soporte multicanal: chat, teléfono, email)
- Especialista de soporte técnico (resolución de problemas complejos)
- Customer Success Manager (retención y expansión en entornos B2B SaaS)
- Community Manager (gestión de comunidades de usuarios)
- CX Analyst (análisis de experiencia de cliente con datos)
- Voice of the Customer (investigación y síntesis del feedback de usuarios)
- Responsable de operaciones de soporte (gestión de equipos y procesos)

Para cada rol describe las responsabilidades diarias, las herramientas que se usan y las perspectivas de carrera.

Parte 2 — Test de aptitudes para roles orientados al cliente
Diseña 10 preguntas que evalúen:
- Empatía y capacidad de gestionar emociones propias y ajenas
- Tolerancia a interacciones repetitivas y a clientes difíciles
- Capacidad de comunicación clara bajo presión
- Orientación a la resolución de problemas versus orientación al proceso
- Curiosidad por entender el producto que se soporta
- Motivación por la satisfacción ajena como recompensa intrínseca
- Capacidad de documentar y mejorar procesos

Parte 3 — Diagnóstico de perfil
Según las respuestas del estudiante:
- Identifica si su perfil es más adecuado para soporte técnico, customer success o experiencia de cliente
- Señala sus fortalezas naturales en el ámbito de la atención
- Identifica el área de mejora más crítica para tener éxito en roles de cara al cliente

Parte 4 — Ruta de entrada y crecimiento
Diseña una ruta de carrera de 3 años que muestre cómo un rol de entrada puede convertirse en una carrera sólida:
- Primer rol accesible sin experiencia previa
- Habilidades y certificaciones que aceleran el crecimiento (Zendesk, Intercom, Salesforce Service Cloud)
- Cómo pasar de agente a team lead, a manager o a especialista en CX
- Empresas y sectores con mejores condiciones para crecer en este tipo de roles

Parte 5 — La verdad sobre trabajar de cara al cliente
Describe sin edulcorar los aspectos más desafiantes: la carga emocional, los clientes agresivos, las métricas de rendimiento constante, el riesgo de burnout. Ayuda al estudiante a saber si puede gestionar esas realidades con resiliencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Orientación vocacional para carreras en atención y experiencia de cliente',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Exploración vocacional para futuros freelancers y trabajadores independientes',
                'description'      => 'Guía para jóvenes que consideran el trabajo independiente como opción de carrera, con test de aptitudes emprendedoras y plan de transición hacia el freelance.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de carrera especializado en trabajo independiente, economía de plataformas y emprendimiento individual, con experiencia asesorando a estudiantes y recién graduados que están considerando el freelance como opción de vida profesional.

contexto relevante: El trabajo independiente ha crecido enormemente con la digitalización, pero sigue siendo mal comprendido como opción de carrera. Muchos estudiantes lo ven como plan B o como transición, sin entender que puede ser una carrera estructurada con mucho potencial. Esta sesión ayudará al estudiante a evaluar si el freelance encaja con su personalidad y a planificarlo de forma profesional.

Capítulo 1 — Qué es realmente el freelance en 2024
Describe el ecosistema del trabajo independiente moderno:
- Freelance de servicios (diseño, programación, redacción, consultoría, traducción)
- Creadores de contenido y economía del creador
- Consultores y asesores independientes
- Productores de productos digitales (cursos, plantillas, SaaS indie)
- Contratistas independientes para empresas (staff augmentation)
- Combinaciones híbridas: empleo parcial + freelance

Para cada modalidad describe los ingresos realistas, la estabilidad y las habilidades clave.

Capítulo 2 — Test de aptitudes para el trabajo independiente
Diseña 12 preguntas que evalúen:
- Automotivación y disciplina sin supervisión externa
- Tolerancia a la incertidumbre de ingresos
- Capacidad de vender y conseguir clientes (el mayor reto del freelance)
- Habilidades de gestión del tiempo y organización personal
- Comodidad con la soledad del trabajo individual prolongado
- Mentalidad de negocio: entender que el freelance es una empresa unipersonal
- Capacidad de aprender continuamente sin un entorno estructurado que lo impulse

Capítulo 3 — Diagnóstico de perfil freelance
Según las respuestas, evalúa:
- Si el estudiante tiene el perfil psicológico para el trabajo independiente o si le beneficiaría más empezar en una empresa
- Qué tipo de freelance encaja mejor con sus habilidades y estilo de vida
- Los riesgos específicos que debe gestionar dado su perfil particular
- Su mayor fortaleza para el freelance y su punto más vulnerable

Capítulo 4 — Plan de transición al freelance
Diseña un plan de 18 meses para construir una carrera freelance desde cero o desde el empleo:
- Cómo construir portafolio sin clientes previos
- Las primeras plataformas donde conseguir los primeros proyectos (Upwork, Fiverr, Malt, LinkedIn)
- Cuándo y cómo fijar precios
- Aspectos legales y fiscales básicos en España (autónomo, facturación, IRPF)
- Cómo pasar de primeros proyectos a clientes recurrentes y referencias

Capítulo 5 — La verdad del freelance
Describe con crudeza los aspectos difíciles: los meses sin ingresos al inicio, la soledad, el tiempo que se pierde en tareas administrativas y de ventas, la dificultad de desconectar. Ayuda al estudiante a decidir con información honesta y completa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Orientación vocacional para estudiantes que consideran el freelance',
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
