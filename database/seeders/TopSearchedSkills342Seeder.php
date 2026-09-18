<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills342Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing inclusivo: comunicación que representa a toda la audiencia',
                'description'       => 'Guía para desarrollar campañas de marketing que reflejen la diversidad real de la audiencia. Cubre el lenguaje inclusivo, la representación visual, la revisión de sesgos en los mensajes y cómo medir el impacto del marketing inclusivo.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de marketing con especialización en comunicación inclusiva y estrategia de marca responsable. Necesito tu ayuda para revisar y transformar nuestra estrategia de comunicación hacia un enfoque más inclusivo que represente genuinamente a la diversidad de nuestra audiencia.

**Contexto de la marca:**
Somos una marca de productos de consumo con presencia en el mercado español e hispanohablante. Nuestro público objetivo abarca personas de 25 a 55 años con poder adquisitivo medio-alto. Históricamente, nuestra comunicación ha sido muy homogénea: modelos jóvenes, blancos, de complexión estándar y en entornos urbanos de clase media-alta. Hemos recibido críticas en redes sociales por falta de representación y queremos hacer un cambio genuino, no solo cosmético.

**Parte 1 – Auditoría de comunicación actual:**
Antes de cambiar nada, necesitamos entender el estado actual. Diseña el proceso de auditoría de inclusividad de la comunicación de la marca: revisión del banco de imágenes y vídeos de los últimos 2 años (¿qué perfiles están representados en términos de edad, etnia, cuerpo, capacidad, orientación sexual, estructura familiar?), análisis del lenguaje usado en copies, emails y redes sociales (¿hay expresiones que excluyen a determinados grupos de forma no intencionada?), revisión de los canales de comunicación (¿estamos llegando a audiencias diversas o solo a las mismas?), y benchmarking de cómo marcas similares en nuestro sector están abordando la inclusividad. Diseña la plantilla de análisis y los criterios de evaluación.

**Parte 2 – Lenguaje inclusivo en los copies de marketing:**
El lenguaje tiene el poder de incluir o excluir. Desarrolla las guías de lenguaje inclusivo para nuestros equipos de contenido: alternativas al masculino genérico en castellano (estrategias para evitar la duplicación "los/las" que interrumpe la lectura), lenguaje neutro para dirigirse a la audiencia ("tú" como opción neutral, evitar suposiciones de género, estado civil o estructura familiar), vocabulario a evitar y alternativas recomendadas (términos que tienen connotaciones negativas sobre grupos específicos), y cómo adaptar el lenguaje según el canal (la informalidad de redes sociales vs. la formalidad de un email transaccional). Incluye ejemplos concretos de before/after para los tipos de copy más frecuentes en nuestra marca.

**Parte 3 – Representación visual: más allá de la diversidad superficial:**
Incluir imágenes de personas diversas no es suficiente si la narrativa visual sigue siendo excluyente. Define las guías de representación visual para el equipo creativo y para los briefings a agencias: criterios de diversidad en la selección de modelos (edad, etnia, cuerpo, capacidad, expresión de género), cómo representar la diversidad en contextos positivos y no estereotipados (evitar el "tokenismo": una sola persona de un grupo subrepresentado en el fondo de la imagen), representación de diversas estructuras familiares y formas de vida, y accesibilidad visual en las creatividades (contraste suficiente, texto alternativo en imágenes digitales, subtítulos en vídeos). Incluye un checklist de revisión de creatividades antes de su publicación.

**Parte 4 – Proceso de revisión de campañas para detectar sesgos:**
Los sesgos inconscientes en los equipos creativos generan comunicación excluyente sin mala intención. Diseña el proceso de revisión de campañas desde la perspectiva de inclusividad: quién debe participar en la revisión (diversidad dentro del equipo de marketing + perspectivas externas), en qué fase del proceso creativo se hace la revisión de inclusividad (ideación, propuesta creativa, producción, pre-publicación), las preguntas que debe responder la revisión (¿a quién excluye esta campaña? ¿qué suposiciones hace sobre la audiencia? ¿el beneficio del producto se comunica de forma relevante para personas diversas?), y cómo gestionar el feedback de inclusividad sin bloquear la producción.

**Parte 5 – Métricas de impacto del marketing inclusivo:**
Cambiar hacia un marketing más inclusivo debe ser medible y vinculado a resultados de negocio. Define las métricas que demostrarán el impacto del cambio: diversificación de la audiencia alcanzada (seguimiento demográfico en redes sociales y analítica web), engagement comparativo entre campañas estándar y campañas con comunicación inclusiva, sentiment analysis en redes sociales hacia los cambios de comunicación, evolución de la percepción de marca en encuestas periódicas (¿los diferentes grupos se sienten representados por nuestra marca?), y correlación entre las mejoras de inclusividad y las métricas de negocio (conversión, fidelización, NPS de clientes).

**Formato de entrega:**
- Plantilla de auditoría de inclusividad de comunicación con criterios de puntuación
- Guía de lenguaje inclusivo en castellano con ejemplos before/after
- Checklist de representación visual para briefings y revisión de creatividades
- Proceso de revisión de campañas con preguntas guía y roles
- Dashboard de métricas de impacto del marketing inclusivo
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Transformación de la estrategia de comunicación de marca hacia un enfoque inclusivo y representativo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Contratación inclusiva en equipos de ingeniería de software',
                'description'       => 'Framework para reducir los sesgos inconscientes en el proceso de selección de ingenieros. Cubre la redacción de ofertas inclusivas, el diseño de pruebas técnicas equitativas, los paneles de entrevista diversos y las métricas de diversidad en el pipeline de contratación.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un especialista en diversidad e inclusión con experiencia específica en contratación técnica en empresas de tecnología. Necesito tu ayuda para rediseñar nuestro proceso de contratación de ingenieros de software para reducir los sesgos inconscientes que pueden estar afectando la diversidad de nuestro equipo técnico.

**Situación actual:**
Nuestro equipo de ingeniería tiene 45 personas, de las cuales el 87% son hombres, el 12% son mujeres y el 1% son personas no binarias. La diversidad étnica también es limitada. Cuando analizamos el pipeline de contratación, vemos que las mujeres y personas de grupos subrepresentados representan el 35% de las candidaturas iniciales, pero solo el 8% de las contrataciones finales. Esto indica que el problema no es solo la atracción de talento diverso, sino algo que ocurre durante el proceso de selección.

**Área 1 – Redacción de ofertas de empleo sin sesgos:**
Las ofertas de empleo filtran candidatos antes de que el proceso empiece. Analiza los sesgos más comunes en las descripciones de puestos de ingeniería: uso de lenguaje codificado masculino (palabras como "ninja", "rockstar", "agresivo" o "dominante" que disuaden a mujeres y personas no binarias), listas de requisitos excesivamente largas (las mujeres tienden a aplicar solo cuando cumplen el 100% de los requisitos, frente al 60% en hombres), requisitos excluyentes innecesarios (años de experiencia fija vs. nivel de competencia, titulación universitaria vs. demostración de habilidades), y ausencia de información sobre diversidad, flexibilidad y cultura inclusiva. Redacta la guía de redacción de ofertas inclusivas con reglas concretas y ejemplos de reformulación.

**Área 2 – Diseño de pruebas técnicas equitativas:**
Las pruebas técnicas son uno de los mayores focos de sesgo en la contratación de ingeniería. Identifica los problemas de equidad en los formatos más comunes: los ejercicios de programación en vivo (whiteboard coding) favorecen a quienes tienen experiencia en este formato específico y generan ansiedad que no refleja el trabajo real, los take-home tests largos discriminan a candidatos con responsabilidades familiares o trabajo a tiempo completo, y los problemas de algoritmos de alto nivel están desconectados del trabajo real del puesto. Diseña un proceso de evaluación técnica más equitativo: el formato del ejercicio técnico que mejor predice el rendimiento real, la duración máxima razonable, las instrucciones que garantizan condiciones equitativas para todos, y cómo evaluar los resultados con rúbricas objetivas que reducen el sesgo del evaluador.

**Área 3 – Formación en sesgos inconscientes para entrevistadores:**
Los entrevistadores tienen sesgos que afectan sus decisiones de contratación. Diseña la formación en sesgos inconscientes para el panel de entrevistas técnicas: los sesgos más relevantes en contratación técnica (efecto halo, sesgo de afinidad, sesgo de confirmación, sesgo de género en la evaluación de confianza), ejercicios prácticos para identificar sesgos propios, el protocolo de entrevista estructurada con preguntas predefinidas iguales para todos los candidatos, y cómo documentar las evaluaciones con evidencias concretas en lugar de impresiones subjetivas ("el candidato demostró X cuando explicó Y" vs. "me causó buena impresión"). Define también la política de panel diverso: al menos dos entrevistadores diferentes para cada etapa.

**Área 4 – Eliminación de sesgos en la revisión de currículums:**
La revisión de CVs es la fase donde más sesgos inconscientes actúan. Diseña el proceso de revisión ciega (blind review): cómo anonimizar los CVs antes de la revisión (eliminar nombre, foto, año de nacimiento, universidad, y en ciertos contextos el género), los criterios de evaluación objetivos que el revisor aplicará sobre cada CV, el sistema de puntuación que permite comparar candidatos de forma objetiva, y cómo combinar la revisión ciega con la valoración de portfolio o trabajos previos. Analiza también el impacto de las herramientas de ATS (Applicant Tracking System) y sus posibles sesgos algorítmicos en el filtrado automático de candidatos.

**Área 5 – Métricas de diversidad en el pipeline de contratación:**
No se puede mejorar lo que no se mide. Define el sistema de métricas de diversidad en el proceso de contratación: tasa de diversidad en cada etapa del funnel (candidaturas → preselección → entrevista técnica → oferta → aceptación), identificación de las etapas con mayor drop-off de candidatos de grupos subrepresentados, tiempo de proceso por grupo demográfico (detectar si hay sesgos en la velocidad de respuesta), tasa de aceptación de ofertas por grupo demográfico, y diversidad del equipo entrevistador como variable de control. Establece objetivos de representación para 12 meses y el proceso de revisión trimestral.

**Formato de entrega:**
- Guía de redacción de ofertas inclusivas con listado de palabras a evitar y alternativas
- Formato recomendado de prueba técnica equitativa con rúbrica de evaluación
- Módulo de formación en sesgos inconscientes para el panel entrevistador (60 min)
- Proceso de revisión ciega de CVs con criterios de evaluación objetivos
- Dashboard de métricas de diversidad del pipeline de contratación con objetivos
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Rediseño del proceso de contratación técnica para reducir sesgos y aumentar la diversidad del equipo',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño inclusivo: accesibilidad y representación en productos digitales',
                'description'       => 'Marco de trabajo para diseñar productos digitales que sean accesibles y representativos para todas las personas. Cubre los estándares WCAG, el diseño para diversidad funcional, la representación en interfaces y cómo integrar la accesibilidad en el proceso de diseño desde el inicio.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un diseñador UX especializado en diseño inclusivo y accesibilidad digital. Necesito tu ayuda para integrar los principios de diseño inclusivo en nuestro proceso de producto desde el principio, dejando de tratar la accesibilidad como un añadido final y convirtiéndola en una práctica central del equipo de diseño.

**Situación actual:**
Nuestro equipo de diseño crea productos digitales (web y app móvil) sin ningún proceso formal de revisión de accesibilidad. Cuando llega la fase de QA, se detectan problemas de contraste, componentes no navegables con teclado y falta de alternativas de texto para imágenes. Estos problemas se corrigen de forma reactiva, con alto coste de tiempo y generando deuda técnica. Además, la representación de personas con diversidad funcional, diferente etnia o edad avanzada es prácticamente nula en nuestras interfaces.

**Pilar 1 – Fundamentos de accesibilidad WCAG en diseño:**
Las Web Content Accessibility Guidelines (WCAG) 2.1 nivel AA son el estándar internacional de accesibilidad y son obligatorias para entidades públicas en España según el RD 1112/2018. Explica los 4 principios WCAG (Perceptible, Operable, Comprensible, Robusto) y tradúcelos a decisiones de diseño concretas: ratio de contraste mínimo entre texto y fondo (4.5:1 para texto normal, 3:1 para texto grande), tamaño mínimo de targets táctiles en móvil (44x44px recomendados por Apple y Google), gestión del foco de teclado (orden lógico, estilos de foco visibles nunca eliminados), alternativas de texto para elementos visuales (imágenes, iconos, gráficos), y diseño de formularios accesibles (labels vinculados, mensajes de error descriptivos, validación en tiempo real no agresiva). Define también las herramientas de verificación de accesibilidad que el diseñador debe usar antes de entregar a desarrollo (Figma A11y Annotation Kit, Color Contrast Checker, Stark plugin).

**Pilar 2 – Diseño para diversidad funcional más allá del estándar mínimo:**
El estándar mínimo de accesibilidad no es el objetivo; es el punto de partida. Diseña para la diversidad funcional real de la audiencia: usuarios con baja visión (tamaños de texto escalables sin pérdida de información, modo de alto contraste, zoom al 200% sin scroll horizontal), usuarios con daltonismo (no usar el color como único diferenciador, usar iconos o patrones adicionales), usuarios con movilidad reducida (navegación completa por teclado o switch access, áreas de clic generosas, no requerir gestos complejos), usuarios con dificultades cognitivas (lenguaje simple y claro, instrucciones paso a paso, tiempo suficiente para completar acciones), y usuarios con sordera (subtítulos en vídeos, no depender solo del audio para transmitir información). Para cada perfil proporciona 3 ejemplos de decisiones de diseño que mejoran la experiencia.

**Pilar 3 – Representación en interfaces digitales:**
Las interfaces de usuario transmiten valores culturales a través de las imágenes, ilustraciones e iconografía que utilizan. Define las guías de representación inclusiva para el sistema de diseño: ilustraciones de personas (diversidad de etnia, edad, cuerpo, capacidad y expresión de género en los personajes ilustrados), iconografía de personas y roles (evitar estereotipos de género en iconos de profesiones: médico, ingeniero, cuidador), avatares y placeholders (diseñar avatares neutros, no usar siluetas masculinas como genérico), y selección de fotografía de stock (criterios de diversidad en la búsqueda y selección de imágenes de personas). Diseña también el proceso de auditoría de representación del sistema de diseño existente.

**Pilar 4 – Integración de la accesibilidad en el proceso de diseño:**
La accesibilidad integrada desde el inicio cuesta entre 10 y 100 veces menos que corregirla al final del desarrollo. Diseña el proceso de diseño inclusivo por defecto: las revisiones de accesibilidad en cada etapa del diseño (diseño exploratório: ¿la solución es conceptualmente accesible? Diseño detallado: ¿cumplen los componentes los estándares WCAG? Entrega a desarrollo: ¿están documentadas todas las especificaciones de accesibilidad?), las anotaciones de accesibilidad en los ficheros de Figma que el diseñador debe incluir antes de la entrega (roles ARIA, orden de foco, texto alternativo, estados de componentes), y el proceso de testing de accesibilidad con usuarios reales con diversidad funcional.

**Pilar 5 – Comunicación del valor del diseño inclusivo en la organización:**
La accesibilidad y el diseño inclusivo con frecuencia se perciben como un costo adicional. Define la estrategia de comunicación interna para construir el caso de negocio: el argumento legal (obligaciones normativas y riesgo de sanción), el argumento de mercado (las personas con diversidad funcional representan el 15% de la población mundial con un poder adquisitivo estimado de 8 billones de dólares), el argumento de calidad (el diseño accesible mejora la experiencia para todos los usuarios: el "efecto bordillo"), y el argumento de reputación de marca. Diseña también la formación básica de accesibilidad de 2 horas para todo el equipo de producto.

**Formato de entrega:**
- Guía rápida de criterios WCAG 2.1 AA para diseñadores con ejemplos visuales
- Checklist de revisión de accesibilidad por etapa del proceso de diseño
- Guía de representación inclusiva para el sistema de diseño con ejemplos
- Plantilla de anotaciones de accesibilidad para ficheros de Figma
- Presentación de 10 diapositivas para construir el caso de negocio del diseño inclusivo
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integración de accesibilidad y representación inclusiva en el proceso de diseño de productos digitales',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Construcción de equipos de ventas diversos y de alto rendimiento',
                'description'       => 'Estrategia para directores de ventas que quieren construir equipos comerciales más diversos y demostrar que la diversidad es un driver de rendimiento, no un objetivo independiente. Cubre contratación, desarrollo y retención de talento diverso en ventas.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un director de ventas con experiencia en construcción de equipos comerciales de alto rendimiento y con un enfoque demostrado en diversidad e inclusión como palanca de resultados. Necesito tu ayuda para construir un equipo de ventas más diverso y demostrar a la dirección que la diversidad mejora los resultados comerciales.

**Contexto actual:**
Mi equipo de ventas tiene 20 personas: 16 hombres y 4 mujeres, todos con perfiles universitarios similares y experiencia previa en ventas B2B en el mismo sector. La homogeneidad del equipo se percibe como una fortaleza (todos hablan el mismo idioma comercial), pero sospecho que estamos dejando oportunidades sobre la mesa porque nuestro equipo no refleja la diversidad de nuestros clientes y prospectos.

**Capítulo 1 – El caso de negocio de la diversidad en ventas:**
Antes de cambiar nada, necesito convencer a la dirección. Construye el argumento de negocio de la diversidad en equipos de ventas con datos concretos: investigaciones sobre la correlación entre diversidad de equipos de ventas y rendimiento financiero, el efecto de la diversidad en la comprensión de clientes de diferentes perfiles, el impacto de los equipos de ventas homogéneos en la capacidad de penetrar mercados diversos, y los riesgos de concentración de talento (si todos vienen de los mismos 2-3 empresas del sector, el know-how colectivo es similar y hay puntos ciegos compartidos). Diseña la presentación de 5 diapositivas para la dirección que conecta diversidad con resultados de negocio.

**Capítulo 2 – Atracción de talento diverso para ventas:**
Las ventas B2B tienen fama de ser un entorno masculino y homogéneo, lo que dificulta atraer perfiles diversos. Define la estrategia de atracción: redacción de ofertas de empleo sin sesgos para perfiles de ventas (evitar términos como "cazador agresivo", "lobo solitario" o "competitivo hasta los huesos" que disuaden a mujeres y a perfiles con estilos de venta más colaborativos), diversificación de los canales de búsqueda de candidatos (no solo LinkedIn sino comunidades específicas, universidades con mayor diversidad, programas de reinserción laboral), y el mensaje de marca empleadora que comunica activamente el compromiso con la inclusión en ventas (testimoniales de personas diversas del equipo, programas de mentoring).

**Capítulo 3 – Proceso de selección sin sesgos en ventas:**
Las entrevistas de ventas tienen sesgos especialmente peligrosos porque muchos entrevistadores confunden "buen vendedor" con "alguien que se parece a mí". Diseña el proceso de selección: entrevistas estructuradas con preguntas predefinidas iguales para todos los candidatos (situacionales y conductuales sobre situaciones de ventas reales), rúbricas de evaluación objetivas para valorar competencias específicas (capacidad de escucha activa, gestión de objeciones, construcción de confianza, planificación de cuentas), role play de ventas estandarizado que simula una llamada real con un buyer persona definido, y un panel de entrevistas diverse (al menos 2 evaluadores de diferentes perfiles).

**Capítulo 4 – Desarrollo y retención de talento diverso en ventas:**
Contratar personas diversas sin un entorno inclusivo genera una "puerta giratoria" de talento diverso que entra y sale rápidamente. Define las iniciativas de desarrollo y retención: programa de mentoring formal para nuevos vendedores de grupos subrepresentados (mentor senior que conoce los atajos de la industria), flexibilidad de horarios y formatos de trabajo (especialmente relevante para vendedores con responsabilidades de cuidado), gestión de territorios y cuentas sin sesgos (asegurarse de que las cuentas premium no se asignan sistemáticamente al mismo perfil de vendedor), y calibración regular de las evaluaciones de desempeño para detectar sesgos en la valoración (¿se valoran igual las mismas conductas en hombres y mujeres del equipo?).

**Capítulo 5 – Métricas de diversidad del equipo de ventas:**
Define el sistema de seguimiento de diversidad en el equipo de ventas: composición demográfica del equipo por género, edad y etnia (con revisión semestral), diversidad en el pipeline de candidaturas vs. contrataciones (para detectar en qué fase se pierde la diversidad), análisis de rendimiento por segmento demográfico (para desmentir el mito de que ciertos perfiles rinden menos), tasa de rotación por perfil demográfico (si las mujeres abandonan más rápido, hay un problema de entorno, no de talento), y correlación entre diversidad del equipo de ventas y penetración en segmentos de clientes diversos.

**Formato de entrega:**
- Presentación de 5 diapositivas del caso de negocio de diversidad en ventas para la dirección
- Guía de redacción de ofertas de empleo para perfiles de ventas sin sesgos de género
- Proceso de selección estructurado con rúbricas de evaluación objetivas
- Plan de desarrollo y retención para talento diverso en ventas
- Dashboard de métricas de diversidad del equipo comercial con objetivos semestrales
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de equipos de ventas diversos con foco en resultados comerciales mejorados',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Desarrollo de producto para audiencias diversas e inclusivas',
                'description'       => 'Framework para que los Product Managers integren la perspectiva de la diversidad en el proceso de descubrimiento, definición y lanzamiento de producto. Cubre la investigación con usuarios de grupos subrepresentados, la detección de sesgos en el diseño de funcionalidades y las métricas de equidad en el uso del producto.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un Product Manager con especialización en product inclusivity y experiencia en integrar perspectivas diversas en el ciclo de desarrollo de producto. Necesito tu ayuda para incorporar la diversidad y la inclusión en nuestro proceso de producto de forma sistemática, no como un ejercicio puntual sino como una práctica integrada en cada etapa del ciclo de vida del producto.

**Problema de partida:**
Nuestro equipo de producto realiza user research con usuarios actuales del producto, que representan un perfil bastante homogéneo. Como consecuencia, diseñamos funcionalidades que funcionan bien para ese perfil pero que pueden tener fricciones no detectadas para personas de otros grupos. Recientemente recibimos feedback de usuarios con discapacidad visual que no podían usar una funcionalidad clave y de usuarios mayores de 60 años que encontraban la interfaz confusa. Ninguno de estos problemas se habría detectado con nuestra muestra habitual de research.

**Fase 1 – Investigación con usuarios de grupos subrepresentados:**
El user research es la base del producto inclusivo. Diseña el proceso para ampliar la muestra de investigación: metodología de reclutamiento que garantiza diversidad (criterios de inclusión en los paneles de usuarios, colaboración con organizaciones que trabajan con grupos subrepresentados, incentivos adecuados para facilitar la participación de grupos con menor disponibilidad), adaptaciones del protocolo de entrevista (entrevistas más cortas para personas mayores o con menor familiaridad tecnológica, opción de entrevista por teléfono en lugar de videollamada, lenguaje accesible sin jerga técnica), y cómo analizar e integrar el feedback de grupos diversos sin perder las conclusiones en la masa de datos del grupo mayoritario (affinity mapping segmentado por perfil).

**Fase 2 – Detección de sesgos en el proceso de definición de producto:**
Los sesgos no solo están en el research; están también en cómo el equipo de producto interpreta los datos y prioriza iniciativas. Define el proceso de revisión de sesgos en el backlog: sesión de "de-biasing" del backlog (revisar las user stories actuales preguntando: ¿a quién incluye implícitamente esta historia? ¿a quién excluye?), criterios de inclusividad en el scoring de priorización (añadir una dimensión de "impacto en grupos subrepresentados" junto a las dimensiones habituales de impacto y esfuerzo), y revisión de las asunciones en los documentos de definición de producto (los PRDs y product specs deben explicitar qué grupos de usuarios han sido considerados y cuáles podrían verse afectados negativamente por la funcionalidad).

**Fase 3 – Diseño de funcionalidades con perspectiva de equidad:**
La equidad en producto no significa que todos los usuarios tengan la misma experiencia, sino que todos pueden alcanzar el mismo resultado. Define las prácticas de diseño equitativo: personalización y flexibilidad (permitir al usuario ajustar la experiencia según sus necesidades en lugar de imponer un único flujo óptimo para el usuario promedio), diseño para el escenario de peor caso (si la funcionalidad funciona bien para un usuario con conectividad limitada, un dispositivo antiguo o una pantalla pequeña, funcionará bien para todos), y evaluación de consecuencias no intencionadas (¿podría esta funcionalidad ser usada de forma que perjudique a grupos vulnerables? ¿tiene la funcionalidad de moderación en cuenta los sesgos culturales?).

**Fase 4 – Métricas de equidad en el uso del producto:**
Los productos inclusivos se miden con métricas de equidad que van más allá del promedio. Define el sistema de métricas segmentadas: retención por segmento demográfico (si la retención a 30 días es significativamente menor para un grupo específico, hay un problema de producto para ese grupo), tasa de activación por perfil de usuario (si la activación es más baja para usuarios mayores, el onboarding tiene fricción para ese grupo), tasa de abandono en flujos críticos segmentada por tipo de dispositivo, sistema operativo y localización (detectar si ciertos segmentos técnicos tienen más problemas), y tasa de uso de funcionalidades de accesibilidad (indicador de que la base de usuarios incluye personas con necesidades de accesibilidad que hay que seguir atendiendo).

**Fase 5 – Cultura de producto inclusivo en el equipo:**
La inclusividad en el producto no puede depender de una sola persona; debe ser una responsabilidad compartida. Define cómo construir la cultura de producto inclusivo en el equipo: formación básica en inclusividad y sesgos inconscientes para todo el equipo de producto (2-3 horas), definición de criterios de "done" que incluyan validación de accesibilidad y revisión de impacto en grupos subrepresentados, rotación de la responsabilidad de inclusividad en las revisiones de producto (no siempre la misma persona), y reconocimiento y visibilidad de las iniciativas de inclusividad en los rituales del equipo (retrospectivas, all hands de producto).

**Formato de entrega:**
- Protocolo de reclutamiento para user research con criterios de diversidad
- Checklist de revisión de sesgos en el backlog y en los documentos de definición
- Guía de diseño equitativo con ejemplos de funcionalidades y sus alternativas inclusivas
- Dashboard de métricas de equidad en el uso del producto por segmento
- Plan de formación y rituales de cultura de producto inclusivo para el equipo
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Integración de perspectivas diversas en el proceso de descubrimiento y definición de producto',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Estrategia integral de DEI para organizaciones en crecimiento',
                'description'       => 'Framework completo para diseñar e implementar una estrategia de Diversidad, Equidad e Inclusión en empresas que están escalando. Cubre el diagnóstico inicial, la definición de objetivos medibles, las iniciativas prioritarias y el modelo de gobernanza del programa DEI.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como una consultora especializada en estrategia de Diversidad, Equidad e Inclusión (DEI) con experiencia en empresas tecnológicas y de servicios en crecimiento acelerado. Necesito tu ayuda para diseñar e implementar una estrategia de DEI sólida, que vaya más allá de las acciones puntuales y se convierta en un pilar estructural de nuestra cultura organizacional.

**Contexto de la organización:**
Somos una empresa de 180 empleados en pleno crecimiento (duplicamos la plantilla en los últimos 2 años). El equipo directivo es homogéneo (8 de 9 directivos son hombres blancos de entre 35 y 50 años). La brecha salarial de género no ha sido analizada formalmente. No tenemos ningún programa formal de DEI y las pocas iniciativas realizadas (un taller de sesgos inconscientes hace 2 años) no tuvieron seguimiento. Varios empleados de grupos subrepresentados han expresado en encuestas anónimas que no se sienten completamente incluidos.

**Bloque 1 – Diagnóstico: conocer el punto de partida:**
No se puede diseñar una estrategia de DEI sin entender el estado actual. Define el proceso de diagnóstico: análisis cuantitativo de la composición de la plantilla (desglose por género, edad, nacionalidad, discapacidad declarada y nivel de responsabilidad), análisis de la brecha salarial de género (metodología de comparación por nivel y función, no solo el promedio global), encuesta de clima de inclusión (diseño de la encuesta con preguntas sobre sentido de pertenencia, experiencia de discriminación o microagresiones, acceso equitativo a oportunidades de desarrollo), y entrevistas en profundidad con representantes de diferentes grupos (para entender las causas raíz de los problemas identificados en la encuesta). Define también cómo comunicar el proceso de diagnóstico al equipo para generar confianza y participación.

**Bloque 2 – Definición de la estrategia y objetivos medibles:**
Una estrategia de DEI sin objetivos medibles no es una estrategia; es una declaración de intenciones. Ayúdame a definir: la visión de DEI de la organización (qué queremos conseguir en 3-5 años en términos de representación, equidad y cultura de pertenencia), los objetivos específicos y medibles para los próximos 12 meses (con porcentajes concretos de representación objetivo en determinados niveles, métricas de equidad salarial, y puntuación objetivo en la encuesta de clima de inclusión), las dimensiones de diversidad prioritarias para nuestra organización (género, origen étnico, discapacidad, edad, orientación sexual), y la estrategia de comunicación del programa DEI al equipo.

**Bloque 3 – Iniciativas prioritarias del primer año:**
Con un diagnóstico y objetivos claros, es hora de definir las iniciativas. Diseña el portfolio de iniciativas DEI para el primer año, equilibrando acciones de alto impacto con recursos disponibles: en contratación (revisión de las ofertas de empleo, formación en sesgos para el equipo de selección, diversificación de canales de búsqueda), en desarrollo profesional (programa de mentoring para grupos subrepresentados, revisión del proceso de evaluación del desempeño para detectar sesgos, política de transparencia en las promociones), en cultura (formación en inclusión para managers, creación de grupos de afinidad o redes de empleados, política de lenguaje inclusivo), y en equidad estructural (análisis y corrección de brecha salarial, revisión de políticas de conciliación, accesibilidad de las instalaciones y herramientas). Para cada iniciativa define: objetivo, responsable, recursos necesarios, plazo y métrica de éxito.

**Bloque 4 – Modelo de gobernanza del programa DEI:**
Un programa DEI sin gobernanza clara fracasa. Define la estructura de gobernanza: el responsable de DEI interno (¿debe ser un rol a tiempo completo, parte de un rol existente en RRHH, o contratar un DEI Manager externo?), el Comité de DEI con representación de la dirección (sin sponsorship ejecutivo, los programas DEI carecen de recursos y prioridad), los grupos de afinidad o Employee Resource Groups (ERGs) como iniciativas bottom-up que complementan la estrategia top-down, el calendario de revisión de avances (reporting trimestral a dirección, comunicación anual al equipo sobre el progreso del programa), y cómo gestionar las situaciones de discriminación o acoso (protocolo de denuncia, investigación y resolución).

**Bloque 5 – Comunicación y rendición de cuentas:**
El programa DEI debe ser transparente para ser creíble. Define la estrategia de comunicación: qué datos de diversidad publicar internamente y cuáles externamente (muchas empresas publican su informe de diversidad anual), cómo comunicar el progreso (éxitos y también los objetivos que no se han alcanzado, con explicación de las causas y el plan de mejora), y cómo evitar el "performative DEI" (acciones de imagen sin cambio estructural real). Diseña también el informe anual de diversidad e inclusión que comunicará al equipo y, opcionalmente, a candidatos y clientes.

**Formato de entrega:**
- Metodología de diagnóstico DEI con encuesta de clima de inclusión
- Estrategia de DEI a 3 años con objetivos anuales medibles
- Portfolio de iniciativas del primer año con responsables, recursos y métricas
- Modelo de gobernanza del programa DEI con roles y calendario de revisión
- Plantilla de informe anual de diversidad e inclusión
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño e implementación de estrategia integral de DEI en empresas en crecimiento',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de equidad salarial y corrección de brechas de compensación',
                'description'       => 'Metodología financiera para realizar un análisis de equidad salarial riguroso, identificar brechas de compensación por género u otros factores, calcular el costo de corrección y diseñar el plan de ajuste salarial dentro del presupuesto de compensación.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de compensación y beneficios con especialización en análisis de equidad salarial. Necesito tu ayuda para diseñar y ejecutar un análisis riguroso de equidad salarial en nuestra organización, identificar brechas de compensación no justificadas, calcular el costo de corrección y diseñar el plan de ajuste dentro de nuestro presupuesto.

**Contexto regulatorio y de negocio:**
En España, la Ley Orgánica 3/2007 de Igualdad y el Real Decreto 902/2020 obligan a las empresas de más de 50 empleados a realizar un registro salarial y, si existe una brecha salarial de más del 25% entre hombres y mujeres, a elaborar un Plan de Igualdad. Más allá de la obligación legal, queremos asegurarnos de que la compensación en nuestra organización es equitativa y que no estamos perdiendo talento ni reputación por brechas no justificadas.

**Fase 1 – Preparación del análisis: datos necesarios y metodología:**
Un análisis de equidad salarial requiere datos de calidad. Define los datos que necesitamos recopilar: para cada empleado activo, el salario base bruto anual, los complementos variables (bonus, comisiones, beneficios en especie), el puesto y nivel dentro del sistema de clasificación profesional de la empresa, los años de experiencia en el puesto actual y en la empresa, la formación académica y las certificaciones relevantes, y el resultado de la última evaluación del desempeño. Define también la metodología estadística que usaremos: la diferencia bruta (sin controlar por factores) vs. la diferencia ajustada (controlando por puesto, experiencia y desempeño), y por qué la diferencia ajustada es la métrica correcta para identificar discriminación salarial.

**Fase 2 – Análisis cuantitativo de la brecha salarial:**
Con los datos recopilados, diseña el proceso de análisis: cálculo de la media y mediana salarial por género dentro de cada puesto o nivel de clasificación, análisis de regresión múltiple para determinar cuánto de la brecha se explica por factores legítimos (puesto, experiencia, desempeño) y cuánto permanece sin explicación, identificación de los grupos de puestos con mayor brecha salarial no justificada, análisis de la brecha en el acceso a compensación variable (¿hombres y mujeres del mismo nivel reciben el mismo bonus promedio?), y análisis de la brecha en beneficios no salariales (stock options, coche de empresa, seguros de salud). Proporciona las fórmulas Excel o las consultas SQL necesarias para este análisis.

**Fase 3 – Interpretación de resultados y comunicación:**
Los resultados de un análisis de equidad salarial requieren una interpretación cuidadosa. Define el proceso de interpretación: cómo distinguir entre una brecha salarial justificada (diferencias de mercado, experiencia o desempeño) y una no justificada (posible discriminación), cómo revisar los casos individuales de mayor desviación con RRHH para entender el contexto histórico (contrataciones reactivas, negociaciones individuales, herencia de estructuras salariales anteriores), y cómo comunicar los resultados al equipo directivo y al Comité de Empresa con transparencia y sin generar alarma innecesaria.

**Fase 4 – Diseño del plan de corrección salarial:**
Una vez identificadas las brechas no justificadas, es necesario corregirlas. Define el plan de corrección: priorización de los ajustes (primero las brechas más grandes y en puestos de mayor responsabilidad), metodología de cálculo del ajuste (subir hasta la mediana del rango salarial del puesto, o hasta el percentil 50 de los empleados del mismo perfil sin brecha), estimación del coste total de los ajustes necesarios, distribución del coste en el tiempo (ajuste completo en el próximo ciclo de compensación, o distribución en 2-3 años), y criterios para gestionar los casos donde el ajuste individual sería muy elevado (posible error de clasificación del puesto que debe revisarse).

**Fase 5 – Prevención de futuras brechas y marco de compensación equitativa:**
Un análisis puntual no es suficiente si el sistema de compensación sigue generando brechas. Diseña el marco de compensación equitativa: bandas salariales claras por nivel de responsabilidad con rangos mínimo, midpoint y máximo, proceso de oferta a nuevas contrataciones dentro de la banda (para evitar que negociaciones individuales generen desigualdad desde el día 1), política de revisión salarial anual con criterios objetivos y comunicados al equipo, y auditoría de equidad salarial anual con publicación de resultados agregados al equipo y al Comité de Empresa.

**Formato de entrega:**
- Plantilla de datos necesarios para el análisis con instrucciones de recopilación
- Metodología de análisis estadístico con fórmulas Excel y queries SQL
- Plantilla de informe de resultados del análisis de equidad salarial
- Calculadora de costo del plan de corrección salarial por escenarios
- Marco de compensación equitativa con bandas salariales y proceso de revisión anual
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis de brecha salarial de género y diseño del plan de corrección dentro del presupuesto',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal para políticas de DEI y cumplimiento normativo',
                'description'       => 'Guía jurídica para diseñar políticas de Diversidad, Equidad e Inclusión que cumplan con el marco normativo español y europeo. Cubre el Plan de Igualdad obligatorio, la protección contra la discriminación, el protocolo de acoso y las obligaciones de reporting.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un abogado laboralista especializado en igualdad y diversidad en el trabajo con experiencia en el marco normativo español y europeo. Necesito tu ayuda para diseñar el marco legal de las políticas de DEI de nuestra empresa, asegurándonos de que cumplimos con todas las obligaciones normativas y que nuestras políticas están correctamente documentadas y son jurídicamente robustas.

**Contexto legal aplicable:**
Somos una empresa española con 220 empleados. El marco normativo que nos aplica incluye: la Ley Orgánica 3/2007 para la igualdad efectiva de mujeres y hombres, el Real Decreto 901/2020 sobre planes de igualdad y su registro, el Real Decreto 902/2020 de igualdad retributiva, la Ley 15/2022 integral para la igualdad de trato y la no discriminación, y el Estatuto de los Trabajadores en lo relativo a la igualdad de trato y no discriminación. A nivel europeo, la Directiva 2023/970 sobre transparencia retributiva (pendiente de transposición) también afectará nuestras obligaciones.

**Bloque 1 – Plan de Igualdad: obligaciones y contenido mínimo:**
Las empresas de más de 50 empleados tienen obligación legal de elaborar y aplicar un Plan de Igualdad. Diseña la guía completa para cumplir con esta obligación: el proceso de diagnóstico previo que exige la normativa (análisis de la situación de mujeres y hombres en la empresa en las áreas de acceso al empleo, clasificación profesional, formación, promoción, retribución, conciliación y condiciones de trabajo), el contenido mínimo del Plan de Igualdad según el RD 901/2020, el proceso de negociación con la representación legal de los trabajadores (comité de empresa o delegados de personal), el registro del Plan de Igualdad en el REGCON (Registro de Planes de Igualdad de las Empresas), y las consecuencias de no tener un Plan de Igualdad registrado (infracciones graves de hasta 7.500€ y pérdida de acceso a contratos públicos).

**Bloque 2 – Protocolo de actuación frente al acoso sexual y por razón de sexo:**
El Plan de Igualdad debe incluir medidas específicas para prevenir el acoso sexual y por razón de sexo. Diseña el protocolo de actuación: definición legal de acoso sexual y acoso por razón de sexo diferenciados, mecanismos de denuncia (canal de denuncia, garantía de confidencialidad, protección frente a represalias), proceso de investigación (quién investiga, plazo máximo, derechos de la persona denunciada y la denunciante), posibles resoluciones y medidas disciplinarias, y seguimiento y prevención (formación obligatoria, revisión periódica del protocolo). Define también las responsabilidades de la empresa si no actúa ante una denuncia de acoso (responsabilidad civil, administrativa y penal).

**Bloque 3 – Protección frente a la discriminación: bases legales y acciones positivas:**
La Ley 15/2022 amplía las bases de discriminación protegidas más allá del género. Analiza el marco de protección: las causas de discriminación prohibidas por la ley (origen racial o étnico, sexo, orientación sexual, identidad de género, religión, discapacidad, edad y cualquier otra condición o circunstancia personal o social), la diferencia legal entre discriminación directa, indirecta y por asociación, cuándo son legales las medidas de acción positiva (que favorezcan a grupos subrepresentados sin llegar a ser discriminación positiva), y cómo documentar las decisiones de selección, promoción y compensación para poder demostrar que no son discriminatorias ante una reclamación.

**Bloque 4 – Transparencia retributiva y obligaciones de reporting:**
La Directiva europea 2023/970 sobre transparencia retributiva impone nuevas obligaciones. Analiza las obligaciones actuales y las que vendrán: el registro salarial obligatorio según el RD 902/2020 (información desglosada por sexo, grupo profesional, categoría y puesto de trabajo), el derecho de los trabajadores a solicitar información sobre la retribución media de su categoría profesional desagregada por sexo, las futuras obligaciones de la Directiva 2023/970 que los estados deben transponer antes de 2026 (publicación proactiva de información salarial, justificación de brechas superiores al 5%, derecho a acciones colectivas), y cómo preparar a la empresa para cumplir con estas obligaciones antes de que sean exigibles.

**Bloque 5 – Gestión de reclamaciones y litigios en materia de igualdad:**
A pesar de los mejores esfuerzos de la empresa, pueden surgir reclamaciones. Define la estrategia de prevención y gestión de litigios: documentación que la empresa debe conservar para poder defenderse ante una reclamación de discriminación (decisiones de selección con criterios documentados, evaluaciones de desempeño firmadas, historial de retribuciones y sus justificaciones), el proceso de respuesta a una denuncia ante la Inspección de Trabajo, la defensa ante una demanda judicial de discriminación (carga de la prueba invertida: cuando el demandante acredita indicios de discriminación, es la empresa quien debe probar que no discriminó), y el análisis de los riesgos económicos de un litigio de discriminación (indemnizaciones, sanciones administrativas y daño reputacional).

**Formato de entrega:**
- Guía paso a paso para elaborar y registrar el Plan de Igualdad obligatorio
- Plantilla de Protocolo de actuación frente al acoso sexual y por razón de sexo
- Marco de protección antidiscriminación con listado de causas protegidas y acciones permitidas
- Checklist de cumplimiento del RD 902/2020 sobre transparencia retributiva
- Guía de documentación preventiva para minimizar el riesgo de litigios de discriminación
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Marco jurídico para políticas de igualdad y cumplimiento normativo en materia de DEI',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al cliente inclusiva y culturalmente sensible',
                'description'       => 'Guía para equipos de Customer Success que atienden a clientes de perfiles culturales, lingüísticos y de capacidad diversos. Cubre la comunicación adaptada, la gestión de barreras de idioma, la accesibilidad en los canales de soporte y el entrenamiento en sensibilidad cultural.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un director de Customer Success con experiencia en la construcción de equipos de atención al cliente inclusivos que sirven a audiencias culturalmente diversas. Necesito tu ayuda para diseñar un framework de atención al cliente que sea genuinamente inclusivo y que se adapte a la diversidad de perfiles, culturas y capacidades de nuestra base de clientes.

**Contexto del equipo:**
Atendemos a clientes en España y Latinoamérica (principalmente México, Argentina y Colombia). Nuestro equipo de CS tiene 12 personas, todos hispanohablantes nativos pero con poca formación en diferencias culturales dentro del mundo hispanohablante. Hemos recibido quejas de clientes latinoamericanos que se sienten tratados con un tono demasiado "europeo" o distante, y de clientes de mayor edad que tienen dificultades con los canales digitales de soporte.

**Módulo 1 – Sensibilidad cultural en la atención al cliente hispanohablante:**
El español no es monolítico: hay diferencias culturales importantes entre el servicio al cliente esperado en España, México, Argentina o Colombia. Diseña la guía de sensibilidad cultural para el equipo: diferencias en las expectativas de formalidad vs. informalidad (el "tú" vs. "usted" varía por país y contexto), diferencias en el estilo de comunicación (la directness española puede percibirse como brusquedad en México, la calidez latinoamericana puede percibirse como exceso de confianza en España), diferencias en la gestión del tiempo y las expectativas de respuesta, y cómo adaptar el tono del servicio sin perder la consistencia de la marca. Incluye ejemplos concretos de respuestas a tickets adaptadas por región.

**Módulo 2 – Comunicación con clientes de mayor edad:**
Los clientes de mayor edad (65+) representan un segmento creciente con necesidades específicas de atención. Define las adaptaciones del servicio: canal de contacto preferido (el teléfono sigue siendo el canal favorito de este segmento, más que el chat o el email), estilo de comunicación (lenguaje más formal y explicativo, menor uso de acrónimos y términos técnicos, instrucciones paso a paso con confirmación de comprensión), gestión de la frustración tecnológica (paciencia activa, reconocimiento de que la dificultad es del producto y no del usuario, escalada rápida a canales con asistencia humana), y diseño del script para llamadas con usuarios de mayor edad que maximiza la resolución en el primer contacto.

**Módulo 3 – Accesibilidad en los canales de soporte:**
Un servicio de atención al cliente verdaderamente inclusivo es accesible para personas con diversidad funcional. Revisa y mejora la accesibilidad de nuestros canales: chat en vivo (¿es compatible con lectores de pantalla? ¿hay opción de fuente grande? ¿el tiempo de sesión es suficiente para usuarios más lentos?), email (¿las respuestas en HTML son legibles por lectores de pantalla? ¿el texto alternativo de las imágenes está correctamente redactado?), documentación de ayuda (¿sigue los estándares WCAG 2.1? ¿hay subtítulos en los vídeos tutoriales?), y teléfono (¿hay opción de atención en lenguaje de signos a través de videollamada para usuarios sordos?). Para cada canal define las mejoras prioritarias y el esfuerzo estimado de implementación.

**Módulo 4 – Protocolo para situaciones de clientes en situación vulnerable:**
Algunos clientes contactan al servicio de atención en situaciones de especial vulnerabilidad: dificultades económicas graves, situaciones de crisis personal, discapacidades cognitivas que dificultan la comprensión. Define el protocolo de atención a clientes en situación vulnerable: cómo identificar señales de vulnerabilidad en la comunicación del cliente, el tono y las palabras adecuadas para responder con empatía sin ser condescendiente, cuándo y cómo flexibilizar las políticas estándar para atender situaciones excepcionales (extensión de plazo de pago, devolución fuera de política, asignación de un CSM dedicado), y cuándo derivar a recursos externos (líneas de apoyo, servicios sociales) cuando el problema del cliente va más allá de lo que puede resolver el equipo de CS.

**Módulo 5 – Formación en inclusión y sensibilidad cultural para el equipo de CS:**
La inclusión en la atención al cliente no ocurre por buena voluntad; requiere formación y práctica. Diseña el programa de formación: módulo de sensibilidad cultural (2 horas, combinando contenido teórico con role plays de situaciones reales), módulo de accesibilidad en la comunicación (1 hora, con ejercicios de escritura en lenguaje claro), módulo de atención a personas mayores (1 hora, con simulaciones de llamadas), protocolo de atención a personas en situación vulnerable (1 hora, con casos de estudio), y seguimiento trimestral con métricas de satisfacción segmentadas por perfil de cliente para identificar áreas de mejora continua.

**Formato de entrega:**
- Guía de sensibilidad cultural por país hispanohablante con ejemplos de respuestas adaptadas
- Script de atención telefónica para usuarios de mayor edad con checklist de buenas prácticas
- Auditoría de accesibilidad de canales de soporte con priorización de mejoras
- Protocolo de atención a clientes en situación vulnerable con árbol de decisión
- Plan de formación en inclusión para equipos de Customer Success con materiales clave
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño de un framework de atención al cliente inclusivo para audiencias culturalmente diversas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'DEI como propuesta de valor para freelancers consultores',
                'description'       => 'Guía para que los freelancers especializados en diversidad, equidad e inclusión construyan una propuesta de valor sólida, posicionen sus servicios, definan sus tarifas y gestionen proyectos de consultoría DEI con rigor y resultados medibles.',
                'prompt_content'    => <<<'ENDOFPROMPT'
Actúa como un consultor de negocio especializado en el sector de la consultoría de Diversidad, Equidad e Inclusión (DEI) con experiencia en el mercado español e hispanohablante. Necesito tu ayuda para construir un negocio de consultoría DEI como freelance, desde la definición de mi propuesta de valor hasta la gestión de proyectos y el posicionamiento en el mercado.

**Mi perfil:**
Tengo 8 años de experiencia en Recursos Humanos en empresas medianas, con 3 años dedicados específicamente a iniciativas de diversidad e inclusión. He coordinado el primer Plan de Igualdad de una empresa de 300 empleados, diseñado programas de formación en sesgos inconscientes y facilitado grupos de trabajo de DEI con la dirección. Quiero dar el salto a la consultoría freelance para tener más impacto y flexibilidad.

**Parte 1 – Definición de la propuesta de valor y especialización:**
En consultoría de DEI, la especialización es una ventaja competitiva. Ayúdame a definir mi propuesta de valor diferenciada: las áreas de DEI donde tengo mayor expertise real y que tienen mayor demanda en el mercado (cumplimiento del Plan de Igualdad obligatorio, formación en sesgos inconscientes, análisis de equidad salarial, consultoría de cultura inclusiva, diseño de programas de mentoring para grupos subrepresentados), el tipo de cliente ideal para mis servicios (tamaño de empresa, sector, madurez en DEI, presupuesto), mi propuesta de valor en 2-3 frases que conecta mi expertise con el resultado concreto que consigue el cliente, y cómo diferenciarse de las grandes consultoras de RRHH que también ofrecen servicios de DEI.

**Parte 2 – Estructura de servicios y tarifas:**
Diseña la estructura de servicios de mi práctica de consultoría DEI: servicio de diagnóstico DEI (análisis de la situación actual, encuesta de clima de inclusión, informe de recomendaciones; precio estimado, duración y entregables), elaboración del Plan de Igualdad (servicio obligatorio y de alta demanda en España; precio estimado, duración y proceso de trabajo), formación en sesgos inconscientes (taller de medio día o día completo para directivos y/o equipos; precio por sesión y por participante), consultoría de cultura inclusiva (proyecto de 3-6 meses con acompañamiento continuo; precio mensual y entregables periódicos), y análisis de equidad salarial (proyecto puntual con informe de resultados y plan de corrección; precio estimado por tamaño de empresa). Para cada servicio incluye la tarifa recomendada para el mercado español en 2024.

**Parte 3 – Posicionamiento y captación de clientes:**
Un buen posicionamiento atrae al cliente ideal sin necesidad de competir por precio. Diseña la estrategia de posicionamiento y captación: el perfil de LinkedIn optimizado para ser encontrado por empresas que buscan consultoría DEI (palabras clave, resumen orientado al cliente, experiencia relevante destacada), la estrategia de contenido en LinkedIn para demostrar expertise (qué tipo de contenido publicar, con qué frecuencia y cuál es el objetivo de cada pieza), las alianzas estratégicas que me ayudan a llegar a clientes potenciales (despachos laboralistas que necesitan un experto DEI como socio para sus clientes, asociaciones de RRHH, cámaras de comercio), y cómo aprovechar el mandato regulatorio del Plan de Igualdad como puerta de entrada a proyectos más amplios de cultura inclusiva.

**Parte 4 – Gestión de proyectos de consultoría DEI:**
La consultoría DEI tiene características propias que la hacen diferente de otros proyectos de consultoría. Define el framework de gestión de proyectos: la fase de diagnóstico (cómo recopilar datos sensibles, garantizar confidencialidad a los empleados encuestados y construir confianza con la dirección simultáneamente), la gestión de la resistencia interna (cómo trabajar con directivos o managers que perciben el DEI como una amenaza a su posición), la entrega de recomendaciones difíciles (cómo comunicar resultados que muestran problemas sistémicos sin generar una crisis interna), y el seguimiento post-proyecto (cómo mantener la relación con el cliente para proyectos de seguimiento y referencias).

**Parte 5 – Crecimiento del negocio y sostenibilidad a largo plazo:**
Un negocio de consultoría DEI debe ser sostenible financieramente y personalmente. Define la estrategia de crecimiento: cuántos proyectos puedo gestionar simultáneamente sin comprometer la calidad, cómo construir un pipeline de proyectos recurrentes que proporcione ingresos predecibles (retainers mensuales, programas de formación con contratación anual), cuándo y cómo subcontratar a otros especialistas para proyectos más grandes, cómo mantenerse actualizado en un campo que evoluciona rápidamente (legislación cambiante, nuevas investigaciones, mejores prácticas emergentes), y cómo gestionar el impacto emocional de trabajar con temas que implican discriminación, injusticia y vulnerabilidad.

**Formato de entrega:**
- Propuesta de valor diferenciada en 2-3 frases con justificación
- Menú de servicios con descripción, precio estimado, duración y entregables
- Perfil de LinkedIn optimizado con palabras clave y resumen orientado al cliente
- Framework de gestión de proyectos DEI con fases y checklist de entregables
- Plan de negocio a 12 meses con proyección de ingresos por tipo de servicio
ENDOFPROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción de un negocio de consultoría DEI freelance con posicionamiento y gestión de proyectos',
                'vote_score'        => 34,
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
