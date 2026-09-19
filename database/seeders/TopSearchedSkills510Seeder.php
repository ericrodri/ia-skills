<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills510Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de constructoras e ingeniería civil con IA',
                'description'      => 'Usa Claude para crear estrategias de marketing B2B para empresas constructoras e ingenierías, posicionando capacidades tecnológicas como BIM, drones y IA como ventaja competitiva en licitaciones y captación de clientes.',
                'prompt_content'   => <<<'EOT'
Eres el director de marketing de una constructora mediana (facturación de 45 millones de euros anuales) especializada en obra civil e infraestructuras. La empresa ha invertido en tecnología: usa BIM en todos sus proyectos, implementa drones para control de obra y está adoptando IA para estimación de costes y detección de defectos. El problema es que los clientes (administraciones públicas, promotores privados y empresas industriales) no perciben esta diferenciación tecnológica porque el marketing de la empresa es el estándar del sector: web corporativa con fotos de obras y dossier de empresa en PDF.

instrucción 1 — Posicionamiento tecnológico diferencial:
Define el posicionamiento de la empresa como "constructora digital" frente a competidores tradicionales. Desarrolla: (a) los 3 mensajes de valor core que conectan la tecnología de la empresa con los resultados que importan al cliente (no hablar de BIM, hablar de cómo BIM reduce incidencias en obra y mejora el control de costes), (b) cómo se adapta el mensaje a los diferentes tipos de cliente (ayuntamiento que licita obra pública, promotor inmobiliario privado, empresa industrial que construye una planta), (c) la narrativa para el discurso de ventas en visitas y presentaciones.

instrucción 2 — Estrategia de contenidos para el sector construcción:
El sector de la construcción consume contenido muy específico: casos de obra, informes técnicos, comparativas de métodos constructivos. Diseña un plan de contenidos de 3 meses para LinkedIn y el blog corporativo que demuestre expertise tecnológico real. Para cada pieza de contenido: tema, ángulo específico de la empresa, formato (post, artículo, vídeo, infografía), quién lo firma (empresa, director técnico, director de obra) y objetivo. Incluye al menos 2 piezas de case study de proyecto real por mes.

instrucción 3 — Dossier de empresa potenciado por IA:
El dossier de empresa es la herramienta de marketing más usada en el sector. Diseña la estructura de un dossier de empresa moderno que use datos e historias para diferenciarse del estándar. Incluye: secciones principales, cómo presentar el portfolio de obras con métricas de resultado (no solo fotos), cómo comunicar la capacidad tecnológica de forma que la entienda un director de infraestructuras de una administración pública, y el tono de voz que equilibra rigor técnico con claridad comunicativa.

instrucción 4 — Estrategia para licitaciones públicas:
Las empresas constructoras compiten por contratos públicos donde el precio tiene mucho peso pero la valoración técnica es creciente. Diseña una estrategia de marketing que mejore la valoración técnica en pliegos de licitación. ¿Cómo usas el historial de proyectos y la tecnología de la empresa para puntuar más en los criterios técnicos? ¿Qué materiales de apoyo prepara el equipo de marketing para el equipo técnico que redacta las ofertas? ¿Cómo documenta la empresa sus proyectos durante la obra para tener el material necesario en futuras licitaciones?

instrucción 5 — Presencia digital y reputación en el sector:
El sector de la construcción funciona mucho por reputación y referencias. Diseña la estrategia digital de la empresa para el próximo año: (a) cómo optimizar la web para captar leads de promotores y empresas industriales (SEO y contenido), (b) estrategia de LinkedIn para el equipo directivo (no solo la empresa), (c) cómo conseguir y presentar testimonios de clientes en un sector donde la confidencialidad es alta, (d) presencia en asociaciones sectoriales, premios de innovación y eventos de construcción que aporten credibilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Posicionar constructora como empresa tecnológica y diferenciarse en el mercado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de IA con BIM para detección de defectos y control de calidad en obra',
                'description'      => 'Implementa con Claude sistemas de visión artificial integrados con modelos BIM para detectar automáticamente defectos constructivos, desviaciones del proyecto y problemas de seguridad en obras de construcción.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador de software especializado en construcción digital (ConTech). Tu cliente es una constructora que quiere automatizar el control de calidad en obras usando cámaras de seguridad, drones y visión artificial integrada con su modelo BIM en formato IFC. El objetivo es detectar en tiempo real desviaciones del proyecto, defectos constructivos (grietas, humedades, armado deficiente visible) y situaciones de riesgo de seguridad laboral.

instrucción 1 — Arquitectura del sistema de detección de defectos:
Diseña la arquitectura completa del sistema. Componentes requeridos: (a) módulo de captura de imágenes (cámaras fijas en obra + drones con vuelos programados), (b) pipeline de procesamiento de imágenes con modelos de visión artificial, (c) módulo de comparación con el modelo BIM (detección de desviaciones geométricas), (d) sistema de alertas y notificaciones al director de obra y jefe de calidad, (e) dashboard de seguimiento de incidencias, (f) integración con el software de gestión de obra (Autodesk Construction Cloud o similar). Dibuja el diagrama de componentes en Mermaid o ASCII y describe el flujo de datos.

instrucción 2 — Modelo de visión artificial para defectos constructivos:
Diseña el pipeline de machine learning para detección de defectos. Incluye: (a) qué tipos de defectos puede detectar visión artificial de forma fiable (grietas en hormigón, segregación de áridos, deformaciones en encofrado, EPIs ausentes en trabajadores) y cuáles no, (b) cómo abordarías la recopilación y etiquetado del dataset de entrenamiento (¿datos propios de obra, datasets públicos como CODEBRIM para grietas en concreto?), (c) arquitectura del modelo recomendada (YOLO v8, detectores basados en transformers como DETR) con justificación, (d) métricas de evaluación del modelo y los umbrales mínimos aceptables para uso en producción (precisión, recall, falsos positivos tolerables), (e) el código Python para el pipeline de inferencia sobre imágenes de drone en tiempo real.

instrucción 3 — Integración con modelos BIM (IFC):
El sistema debe comparar lo construido (detectado por las cámaras) con lo proyectado (modelo BIM en IFC). Describe: (a) cómo se extrae información geométrica y de elementos constructivos de un archivo IFC con la librería ifcopenshell en Python, (b) cómo se georeferencian las imágenes de las cámaras y los drones para mapearlas al espacio del modelo BIM, (c) cómo se detecta y cuantifica una desviación (p.ej. una pared construida 8 cm fuera de posición o un forjado con cota incorrecta), (d) cómo se crea automáticamente un BCF (BIM Collaboration Format) issue con la desviación detectada para enviarlo al equipo de proyecto. Incluye fragmentos de código relevantes.

instrucción 4 — Sistema de alertas de seguridad laboral:
El módulo de seguridad laboral detecta en tiempo real trabajadores sin casco o arnés en zonas de riesgo. Implementa: (a) el modelo de detección de EPIs (casco, chaleco, arnés) usando YOLO sobre el flujo de vídeo de las cámaras, (b) el sistema de alertas escalonadas (notificación al encargado de zona en 30 segundos, escalado al jefe de obra si no se resuelve en 2 minutos, registro automático del incidente), (c) cómo manejas los falsos positivos (un trabajador con casco que el modelo clasifica sin casco) sin crear fatiga de alertas, (d) cómo cumples con el RGPD al grabar y analizar imágenes de trabajadores en su lugar de trabajo.

instrucción 5 — Dashboard e informes de calidad automatizados:
El director de obra necesita un informe diario de control de calidad sin dedicar tiempo a generarlo. Diseña: (a) la estructura del dashboard de obra con métricas de calidad en tiempo real (número de incidencias abiertas y cerradas, tiempo medio de resolución, zonas con más incidencias, evolución temporal), (b) el informe automatizado semanal que genera el sistema (usa Claude para redactar el resumen ejecutivo a partir de los datos de la semana), (c) cómo se integra este sistema de datos con la documentación de calidad requerida por la normativa (ISO 9001, control de calidad en obra según el Código Técnico de la Edificación). Escribe el prompt de Claude para generar el resumen ejecutivo semanal a partir de los datos del sistema.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar visión artificial integrada con BIM para control de calidad en obra',
                'vote_score'       => 56,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias digitales para proyectos de construcción e ingeniería',
                'description'      => 'Aplica principios UX/UI con Claude para diseñar plataformas de gestión y visualización de proyectos de construcción, desde dashboards de obra hasta aplicaciones de realidad aumentada para inspección de calidad.',
                'prompt_content'   => <<<'EOT'
Eres diseñador UX/UI especializado en herramientas para la industria de la construcción y la ingeniería. Tu cliente es una constructora que quiere digitalizar la experiencia de tres tipos de usuarios: el director de obra en campo con tablet, el director de proyecto en oficina con ordenador y el cliente promotor con acceso a información del proyecto. Cada uno necesita interfaces radicalmente distintas para el mismo sistema de datos.

tarea 1 — Investigación de usuarios en contexto de obra:
El contexto de uso de una tablet en obra es extremo: sol directo, guantes, polvo, interrupciones constantes. Diseña el plan de investigación de usuarios para entender las necesidades reales del director de obra. ¿Qué técnicas de investigación usarías (observación contextual, entrevistas en campo, shadowing)? ¿Qué preguntas son críticas para entender sus flujos de trabajo actuales, sus frustraciones con las herramientas digitales existentes y sus necesidades de información en tiempo real? ¿Cómo adaptas la metodología UX a un entorno tan diferente de la oficina?

tarea 2 — Interfaz de campo para tablet en condiciones extremas:
Diseña los principios de diseño y los componentes UI para la interfaz de tablet del director de obra. El diseño debe: (a) funcionar con luz solar directa (contraste, tamaño de elementos táctiles de al menos 48x48px), (b) ser operable con guantes (áreas táctiles grandes, gestos simples), (c) funcionar offline con sincronización cuando hay conectividad, (d) priorizar las 3 acciones más frecuentes (registrar incidencia, consultar planos, firmar parte de trabajo) en máximo 2 taps desde la pantalla de inicio. Dibuja en texto (ASCII o descripción detallada) los wireframes de las pantallas principales.

tarea 3 — Dashboard ejecutivo para director de proyecto:
El director de proyecto necesita ver el estado de múltiples obras simultáneas desde su ordenador. Diseña el dashboard ejecutivo con: (a) la jerarquía de información (qué debe verse sin scroll, qué es secundario), (b) cómo visualizar el estado de avance de obra vs planificación (semáforo de hitos, curva S de avance), (c) cómo representar las desviaciones de costes y las alertas de calidad o seguridad de forma que se puedan priorizar de un vistazo, (d) cómo integrar datos de diferentes fuentes (planning, control de costes, incidencias de calidad, predicciones de IA sobre riesgo de retraso). Describe el layout y los componentes de visualización de datos más adecuados para cada métrica.

tarea 4 — Portal del cliente promotor:
El cliente promotor quiere acceso transparente al estado de su obra sin necesidad de visitar el proyecto constantemente. Diseña el portal del cliente que: (a) muestra el avance real vs planificado de forma comprensible para alguien sin conocimientos técnicos de construcción, (b) incluye un feed de hitos completados con fotos y videos de obra, (c) permite ver las desviaciones de coste aprobadas y el presupuesto restante, (d) tiene una sección de documentación del proyecto (planos aprobados, certificaciones, actas de reunión) con búsqueda. ¿Qué información del sistema interno es apropiado mostrar al cliente y qué debe quedarse interno?

tarea 5 — Prototipado y validación con usuarios de construcción:
Los usuarios de la industria de la construcción no están habituados a participar en sesiones de usabilidad tradicionales. Diseña el plan de validación del prototipo adaptado al contexto: (a) cómo reclutas a directores de obra para sesiones de test (son difíciles de reunir y tienen poco tiempo), (b) qué métodos de evaluación son más efectivos con este perfil (test de usabilidad en obra real, guerrilla testing en office, walkthrough de escenario), (c) cómo priorizas los hallazgos de usabilidad cuando hay limitaciones técnicas del sistema de fondo (BIM viewer que limita el diseño), (d) métricas de usabilidad específicas para este contexto (tiempo en completar tarea con guantes, tasa de error en condiciones de obra).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar interfaces UX para obra y gestión de proyectos de construcción',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de tecnología BIM e IA a constructoras y promotoras',
                'description'      => 'Construye con Claude un argumentario de ventas especializado para comercializar soluciones tecnológicas (BIM, IA, plataformas de gestión de obra) a un sector tan tradicional como la construcción y la ingeniería civil.',
                'prompt_content'   => <<<'EOT'
Eres director comercial de una empresa de software para la construcción (ConTech) que vende una plataforma de gestión de proyectos con BIM integrado y módulos de IA para estimación de costes, control de calidad y predicción de riesgos. Tu mercado objetivo son constructoras y promotoras medianas y grandes en España. El sector de la construcción es conocido por su resistencia a la digitalización, pero la presión regulatoria (BIM obligatorio en licitaciones europeas) y la escasez de mano de obra están acelerando el cambio.

instrucción 1 — Perfil del comprador en el sector construcción:
Identifica los perfiles de decisión de compra en una constructora mediana (50-300 empleados). Para cada perfil define: su cargo, sus responsabilidades, su relación con la tecnología, su principal KPI y cómo nuestra solución afecta a ese KPI, su principal preocupación ante la adopción tecnológica, y el mensaje que conecta con él. Perfiles: Director General, Director Técnico, Director de Obra, Jefe de Compras, Director Financiero. ¿Quién bloquea la compra y quién la impulsa en organizaciones de construcción típicas?

instrucción 2 — Argumentario para superar la resistencia al cambio:
La principal objeción en el sector de la construcción no es el precio ni la tecnología, es "hemos trabajado siempre así y funciona". Diseña el argumentario para superar las 6 objeciones más frecuentes en este sector:
(a) "Mis jefes de obra llevan 20 años y no van a aprender software nuevo"
(b) "Ya usamos AutoCAD y tenemos nuestros Excel, no necesitamos más"
(c) "BIM es para obra nueva grande, yo hago rehabilitación y obra civil"
(d) "Tenemos un proyecto piloto con otro software que no terminó bien"
(e) "El margen en construcción es muy ajustado para invertir en software"
(f) "¿Para qué necesito IA en la obra? Lo importante es la experiencia del director de obra"
Para cada objeción: valida, reformula, responde con ejemplo del sector, pregunta de avance.

instrucción 3 — ROI y business case para el director financiero:
El director financiero de una constructora no habla de BIM, habla de margen. Diseña el business case de nuestra plataforma para una constructora con 80 empleados y 25 millones de facturación. Cuantifica el impacto en: (a) reducción de no conformidades y retrabajos (benchmark: el 5-10% del coste de construcción son costes de calidad), (b) reducción de desviaciones de presupuesto gracias a la estimación con IA, (c) ahorro en tiempo de coordinación entre oficina técnica y obra, (d) ventaja competitiva en licitaciones con criterios de valoración técnica de BIM. Calcula el payback period de una inversión de 30.000 euros anuales.

instrucción 4 — Estrategia de piloto y expansión en la cuenta:
La mejor forma de vender en construcción es demostrar en un proyecto real. Diseña la estrategia de proyecto piloto para cerrar el primer contrato con una constructora nueva. ¿Qué obra elegir para el piloto (tipo, tamaño, fase)? ¿Qué métricas de éxito defines con el cliente antes de empezar? ¿Cómo garantizas que el piloto tiene éxito visible en 60 días? ¿Cómo conviertes el piloto en un contrato de toda la empresa y en una referencia para otras cuentas del sector?

instrucción 5 — Networking y generación de demanda en el sector:
El sector de la construcción funciona por relaciones y reputación. Diseña la estrategia de generación de demanda para los próximos 6 meses. ¿En qué asociaciones sectoriales (SEOPAN, Tecniberia, asociaciones de promotores) debe estar presente la empresa? ¿Qué eventos del sector (BIM World, Construtec, Smart Building) son prioritarios y con qué formato de participación? ¿Cómo usas los casos de éxito de clientes actuales para generar referencias? ¿Cómo estructuras un programa de partners con estudios de arquitectura e ingeniería que diseñan en BIM y recomiendan nuestra plataforma de obra?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comercializar soluciones ConTech y BIM a constructoras tradicionales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de software para la industria de la construcción (ConTech)',
                'description'      => 'Aplica frameworks de product management con Claude a los desafíos específicos del sector ConTech: usuarios con baja alfabetización digital, ciclos de adopción largos, integración con sistemas legacy BIM y gestión de roadmaps con múltiples segmentos.',
                'prompt_content'   => <<<'EOT'
Eres Senior Product Manager en una startup ConTech (Construction Technology) con 3 años de vida, 90 clientes constructoras y promotoras, 2 millones de euros de ARR y un equipo de 6 desarrolladores. Tu producto es una plataforma SaaS de gestión de obra con módulos de control de calidad, seguimiento de plazos y recientemente un módulo de predicción de riesgos con IA. El mercado de la construcción tiene unas particularidades únicas que hacen el product management especialmente desafiante.

tarea 1 — Estrategia de producto para un mercado resistente a la digitalización:
El sector de la construcción tiene tasas de adopción tecnológica mucho más bajas que otros sectores. Analiza: (a) cuáles son las barreras de adopción específicas del sector (usuarios de campo con baja afinidad digital, ciclos de proyecto como unidad de adopción en lugar de usuarios individuales, resistencia de perfiles senior muy valorados), (b) qué estrategia de onboarding funciona en este contexto (¿self-service vs asistido? ¿adopción por proyecto piloto?), (c) cómo defines el "time to value" para un director de obra que nunca ha usado software de gestión y necesita ver resultados en su primera semana.

tarea 2 — Gestión del roadmap con múltiples segmentos:
Tus clientes son muy heterogéneos: constructoras de obra civil, promotoras residenciales, empresas de rehabilitación y constructoras industriales. Cada uno pide funcionalidades distintas. Diseña el framework de priorización del roadmap que uses para tomar decisiones con información de segmentos tan distintos. Incluye: (a) cómo agregas el feedback de clientes de distintos segmentos sin dejar que los clientes más grandes dominen el roadmap, (b) cómo decides cuándo construir algo específico para un segmento vs una solución genérica, (c) cómo comunicas las decisiones de roadmap a clientes que pidieron algo y no lo van a ver en los próximos 6 meses.

tarea 3 — Discovery del módulo de predicción de riesgos con IA:
Has lanzado hace 3 meses un módulo de predicción de riesgos con IA que analiza el estado del proyecto y predice probabilidades de retraso y desviación de costes. La adopción es baja: solo el 30% de los clientes con acceso lo usan activamente. Diseña el plan de discovery para entender por qué. ¿Con quién hablarías (usuarios activos, usuarios que probaron y abandonaron, usuarios que nunca lo usaron)? ¿Qué preguntas harías? ¿Qué hipótesis tienes sobre las causas (interfaz confusa, predicciones poco fiables, no encaja en el flujo de trabajo del director de proyecto)? ¿Cómo priorizas las acciones según los hallazgos?

tarea 4 — Métricas de producto en el contexto de la construcción:
Las métricas de SaaS estándar (DAU, MAU, feature adoption) no capturan bien la realidad de un software de gestión de obra donde el uso es intenso durante un proyecto y baja entre proyectos. Define el sistema de métricas adaptado a tu producto. ¿Cuál es tu North Star Metric? ¿Cómo distingues entre churn real y clientes entre proyectos? ¿Cómo mides el valor entregado durante un proyecto (desviación de costes evitada, horas de coordinación ahorradas)? ¿Qué métricas de uso predicen la renovación del contrato anual?

tarea 5 — Expansión internacional: Portugal y Latinoamérica:
El board quiere explorar expansión a Portugal y México. Diseña el análisis de mercado y la estrategia de go-to-market para uno de los dos mercados. Considera: (a) diferencias regulatorias en requisitos de BIM y digitalización de la construcción respecto a España, (b) adaptaciones del producto necesarias (localización, integración con herramientas locales, cumplimiento normativo), (c) estrategia de entrada (ventas directas, partners locales, adquisición de un jugador pequeño), (d) métricas de éxito del lanzamiento a 12 meses y criterios para decidir si escalar o pivotar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el roadmap y la estrategia de producto de una plataforma ConTech',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personas en obras de construcción con IA: seguridad y productividad',
                'description'      => 'Usa Claude para diseñar políticas de RRHH adaptadas al entorno de obra: gestión de equipos multiculturales, formación en seguridad con IA, planificación de recursos humanos en proyectos y reducción de accidentalidad.',
                'prompt_content'   => <<<'EOT'
Eres directora de RRHH de una constructora con 220 empleados fijos y una media de 180 subcontratados en obra. La empresa opera simultáneamente 8 obras en 4 provincias distintas. Los principales retos de RRHH son: alta rotación de operarios (35% anual), tasa de accidentalidad por encima de la media del sector, dificultad para atraer perfiles técnicos jóvenes y gestión de equipos multiculturales (el 40% de los operarios son de otros países). Quieres usar IA para mejorar la gestión de personas en este entorno tan específico.

instrucción 1 — Formación en seguridad laboral con IA:
La formación en PRL (Prevención de Riesgos Laborales) actual consiste en cursos genéricos de 6 horas que los trabajadores hacen una vez al año y que tienen poco impacto en el comportamiento en obra. Diseña un sistema de formación en seguridad potenciado por IA que: (a) adapte el contenido al puesto de trabajo específico de cada operario y a los riesgos reales de la obra en la que trabaja, (b) use microlearning móvil de 3-5 minutos diarios con contenido en el idioma materno del trabajador (español, árabe, rumano, marroquí dariya), (c) incluya simulaciones de situaciones de riesgo para evaluar la reacción del trabajador antes de que se encuentre en esa situación real, (d) genere automáticamente el registro de formación requerido por la normativa. ¿Cómo usarías IA para personalizar el contenido y para generar los materiales en múltiples idiomas?

instrucción 2 — Planificación de recursos humanos por proyecto:
Cada obra tiene necesidades distintas de perfiles, y la planificación actual es reactiva (se contrata cuando falta gente). Diseña un sistema de planificación de RRHH por proyecto con IA que: (a) analice el plan de obra (fases, hitos, actividades) y prediga las necesidades de perfiles y número de personas semana a semana, (b) identifique con antelación suficiente cuándo hay que reclutar, cuándo se puede reasignar personal de otras obras y cuándo hay picos que requieren subcontratación, (c) genere alertas cuando la planificación de RRHH está en riesgo por bajas, retrasos de obra o dificultades de reclutamiento. ¿Qué datos del proyecto y de RRHH necesitas para construir este sistema?

instrucción 3 — Reducción de la rotación con análisis predictivo:
La rotación del 35% tiene un coste enorme (reclutamiento, formación, pérdida de productividad). Diseña un sistema de retención con IA que identifique trabajadores en riesgo de abandono antes de que comuniquen su baja. ¿Qué señales predicen la rotación en el sector de la construcción (tipo de obra, distancia al domicilio, número de supervisores distintos, historial de accidentes, evolución del salario)? ¿Qué intervenciones puedes diseñar para cada perfil de riesgo? ¿Cómo mides si el sistema de retención está funcionando? Ten en cuenta las limitaciones legales y éticas del monitoreo de empleados.

instrucción 4 — Gestión de equipos multiculturales en obra:
Con trabajadores de 8 nacionalidades distintas, los conflictos culturales y la barrera del idioma generan tensiones en obra que afectan la productividad y la seguridad. Diseña las políticas y herramientas para la gestión de equipos multiculturales: (a) programa de acogida para nuevos trabajadores de distintas culturas (qué información necesitan, en qué idioma, en qué formato), (b) protocolo de comunicación en obra cuando el español no es el idioma común (señalética multilingüe, aplicación de comunicación con traducción automática, figuras de mediadores culturales), (c) formación para encargados de obra en gestión de diversidad cultural, (d) sistema de resolución de conflictos interculturales antes de que escalen.

instrucción 5 — Política de bienestar y salud mental en obra:
El sector de la construcción tiene una de las tasas más altas de problemas de salud mental entre sus trabajadores (estrés, soledad por desplazamientos, presión de plazos). Diseña una política de bienestar que sea realista para el entorno de obra: (a) qué beneficios de salud mental son viables para trabajadores de obra (no es lo mismo que para trabajadores de oficina), (b) cómo detectas señales de crisis en trabajadores desplazados que llevan semanas lejos de su familia, (c) qué recursos de apoyo psicológico puedes ofrecer accesibles desde el móvil y con confidencialidad garantizada, (d) cómo abordarías la estigmatización de los problemas de salud mental en una cultura laboral tan masculina y de resistencia como la de la construcción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejorar seguridad, formación y retención de personas en obra con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestación automática y control de costes de obra con IA',
                'description'      => 'Utiliza Claude para construir modelos de estimación de costes de construcción con IA, automatizar el control presupuestario de proyectos y predecir desviaciones antes de que se produzcan.',
                'prompt_content'   => <<<'EOT'
Eres el director financiero de una constructora con 35 millones de euros de facturación. La empresa lleva 3 obras grandes simultáneas (un edificio de oficinas de 8 millones, una rehabilitación de 4 millones y una obra civil de 12 millones). El control de costes actual es manual: cada director de obra envía una hoja Excel semanal y el equipo financiero consolida. Las desviaciones de coste se detectan tarde y a veces superan el 15% del presupuesto inicial, que en márgenes del sector construcción (3-6%) es catastrófico.

tarea 1 — Modelo de estimación de costes con IA:
Diseña el modelo de estimación de costes para proyectos de construcción apoyado en IA. El modelo debe: (a) tomar como inputs las partidas del presupuesto de licitación (en formato FIEBDC o Excel), el plan de obra, los precios de mano de obra y materiales actualizados, y los datos históricos de desviación de proyectos anteriores por tipo de partida, (b) generar una estimación de coste final con intervalo de confianza, (c) identificar las partidas de mayor riesgo de desviación basándose en el histórico de la empresa, (d) actualizarse automáticamente cuando cambian los precios de materiales o cuando se registran certificaciones de obra reales. ¿Qué técnicas de ML son más adecuadas para este problema: regresión con features históricas, series temporales, gradient boosting?

tarea 2 — Dashboard de control de costes en tiempo real:
Diseña el sistema de control de costes integrado que sustituye a los Excel manuales. Define: (a) qué datos registra cada director de obra y con qué frecuencia (costes comprometidos, costes reales, avance físico de obra), (b) cómo se calcula el Earned Value Management (EVM) para cada proyecto: Planned Value, Earned Value, Actual Cost, CPI (índice de rendimiento de costes) y SPI (índice de rendimiento de plazos), (c) qué alertas automáticas genera el sistema cuando el CPI baja de 0,95 (el proyecto va a desviarse más de un 5%), (d) cómo visualizas la curva S prevista vs real para que el director general entienda de un vistazo la situación de cada obra.

tarea 3 — Predicción de desviaciones con IA:
El objetivo no es detectar las desviaciones cuando ya han ocurrido, sino predecirlas con 4-6 semanas de antelación para poder actuar. Diseña el modelo predictivo de desviaciones de coste. ¿Qué variables de entrada predicen mejor las desviaciones en las últimas fases de un proyecto de construcción (velocidad de ejecución de las últimas 4 semanas, ratio de subcontratistas activos vs planificados, condiciones climáticas, índice de accidentes, presión de plazo)? ¿Cómo entrenas el modelo con el histórico de proyectos de la empresa? ¿Cómo presentas la predicción al director de obra de forma que tome acciones correctoras (no que la ignore porque "es solo una predicción")?

tarea 4 — Gestión de certificaciones y flujo de caja:
El flujo de caja en construcción es crítico: se cobra por certificaciones mensuales que deben presentarse y aprobarse, mientras se paga a proveedores y subcontratistas con plazos distintos. Diseña el sistema de gestión de certificaciones y previsión de flujo de caja. Incluye: (a) cómo se genera automáticamente la certificación mensual a partir de los datos de avance de obra, (b) cómo se hace el seguimiento del cobro (días desde certificación hasta pago, alertas de retraso de pago del cliente), (c) cómo se construye la previsión de flujo de caja a 3 meses para las 3 obras simultáneas consolidadas, (d) qué alertas de tensión de liquidez debe generar el sistema.

tarea 5 — Reporting financiero de obra para el consejo:
El consejo de administración quiere un informe mensual de las 3 obras con máximo 2 páginas que sea comprensible para perfiles no técnicos. Diseña la estructura del informe y genera el prompt de Claude que tomará los datos del sistema (costes reales, previsión de cierre, CPI de cada obra, principales riesgos identificados) y redactará automáticamente el resumen ejecutivo mensual. El informe debe: destacar las obras con mayor riesgo de desviación, cuantificar el impacto en el resultado de la empresa, y proponer las 2-3 decisiones que necesita tomar el consejo este mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar control de costes y predicción de desviaciones en proyectos de construcción',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y contractual de proyectos de construcción con IA y BIM',
                'description'      => 'Navega con Claude la complejidad legal de los proyectos de construcción que incorporan IA y BIM: responsabilidades contractuales, propiedad intelectual del modelo BIM, compliance en licitaciones públicas y gestión de reclamaciones.',
                'prompt_content'   => <<<'EOT'
Eres abogado especialista en derecho de la construcción y contratos de ingeniería. Tu despacho asesora a constructoras, promotoras y estudios de ingeniería en proyectos que incorporan tecnologías BIM, IA y digitalización avanzada. Estos proyectos generan nuevas situaciones legales para las que la legislación española aún no tiene respuestas claras.

instrucción 1 — Propiedad intelectual del modelo BIM:
En un proyecto típico, el modelo BIM es creado por el estudio de arquitectura, enriquecido por las ingenierías de instalaciones y estructura, y actualizado durante la obra por la constructora. Al final del proyecto, ¿quién es propietario del modelo BIM? Analiza: (a) qué dice la Ley de Propiedad Intelectual española sobre las obras colectivas y los programas de ordenador respecto a los modelos BIM, (b) cómo deben regularse los derechos sobre el modelo BIM en el contrato de proyecto (¿propiedad del promotor? ¿licencia de uso?), (c) qué ocurre con el modelo BIM as-built que incorpora el trabajo de la constructora: ¿es una obra derivada con derechos propios?, (d) cómo gestionar la propiedad del modelo cuando el proyecto usa IA para generar alternativas de diseño.

instrucción 2 — Responsabilidad cuando la IA causa un defecto constructivo:
Un sistema de IA de control de calidad de la constructora no detecta un defecto en el armado de un forjado que posteriormente causa daños. Analiza la cadena de responsabilidades: (a) responsabilidad de la constructora por el defecto constructivo (Ley de Ordenación de la Edificación), (b) responsabilidad del proveedor del software de IA por el fallo del sistema, (c) cómo afecta al seguro decenal la existencia de un sistema de IA en el control de calidad (¿reduce la prima? ¿genera nuevas exclusiones?), (d) cómo debe quedar documentado el uso del sistema de IA para que la constructora pueda defenderse en un litigio, (e) qué cláusulas debe incluir el contrato entre constructora y proveedor de IA de control de calidad.

instrucción 3 — BIM en licitaciones públicas: obligaciones y riesgos:
La UE está impulsando el BIM obligatorio en contratos de obra pública. Analiza el marco legal actual en España: (a) qué normativa regula el uso de BIM en licitaciones públicas en España (real decreto, instrucciones de contratación de ministerios y CCAA), (b) qué nivel de madurez BIM (LOD, niveles de información) se exige en distintos tipos de licitaciones, (c) qué riesgos legales tiene una constructora si el modelo BIM entregado no cumple con las especificaciones del pliego de condiciones técnicas, (d) cómo se regula la propiedad del modelo BIM en contratos de Administración Pública, (e) qué obligaciones de actualización del modelo durante la obra y entrega del as-built se incluyen habitualmente en los pliegos.

instrucción 4 — Reclamaciones en proyectos con IA: nuevos escenarios:
La introducción de IA en proyectos de construcción genera nuevos escenarios de reclamación que no existían antes. Analiza y desarrolla el protocolo de gestión para estos 3 escenarios: (a) el sistema de predicción de costes de la constructora predijo un sobrecoste del 8% que no se materializó: ¿puede el promotor reclamar los costes de las medidas preventivas que tomó basándose en una predicción incorrecta?, (b) el sistema de optimización de rutas de maquinaria causó daños en una propiedad colindante: ¿responsabilidad de la IA o de quien tomó la decisión basándose en ella?, (c) los datos del modelo BIM de un proyecto confidencial fueron accedidos por un competidor a través de una vulnerabilidad del proveedor cloud: ¿quién responde y ante quién?

instrucción 5 — Cláusulas contractuales para proyectos digitalizados:
Redacta las cláusulas específicas que deben añadirse a los contratos de obra que usan tecnologías digitales avanzadas. Cubre: (a) cláusula de gestión y propiedad del modelo BIM con definición de niveles de información requeridos por fase, (b) cláusula de uso de IA en la ejecución de la obra (qué sistemas pueden usarse, obligación de supervisión humana, documentación requerida), (c) cláusula de ciberseguridad para plataformas de gestión de proyecto (estándares mínimos, protocolo de brecha de seguridad, responsabilidad), (d) cláusula de resolución de disputas relacionadas con decisiones de sistemas de IA. Usa lenguaje jurídico apropiado pero que no sea rechazado por el departamento técnico de la constructora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar la complejidad legal de proyectos de construcción con BIM e IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico y atención al cliente en software de construcción con IA',
                'description'      => 'Diseña con Claude un sistema de soporte técnico inteligente para plataformas de software de construcción y BIM, que gestione usuarios con baja alfabetización digital y problemas técnicos complejos de integración.',
                'prompt_content'   => <<<'EOT'
Eres el responsable de Customer Success de una empresa de software para la construcción con 150 clientes (constructoras, promotoras y estudios de ingeniería). El equipo de soporte tiene 4 personas y gestiona una media de 80 tickets semanales. Los principales problemas son: usuarios de obra con poca experiencia digital que necesitan mucha asistencia básica, problemas de integración entre la plataforma y software BIM de terceros (Revit, AutoCAD, Presto), y un alto índice de churn en los primeros 6 meses por dificultades de onboarding.

tarea 1 — Categorización y priorización de tickets con IA:
El volumen de tickets es manejable pero la varianza es enorme: desde "no sé cómo exportar un PDF" hasta "el modelo BIM de 500MB tarda 8 minutos en cargar en la plataforma". Diseña el sistema de clasificación automática de tickets con IA. El sistema debe: (a) categorizar el ticket por tipo (error técnico, duda de uso, solicitud de funcionalidad, queja de rendimiento), urgencia (bloqueante, importante, cosmético) y perfil de usuario (director de obra, administrativo, director técnico), (b) asignar automáticamente al agente más adecuado según su especialización técnica, (c) sugerir la respuesta más probable basándose en el histórico de tickets resueltos, (d) detectar tickets que indican riesgo de churn (palabras clave: "demasiado complicado", "volvemos a Excel", "cancelar suscripción"). Diseña el prompt de clasificación y los criterios de cada categoría.

tarea 2 — Base de conocimiento y autoservicio para usuarios de construcción:
Los usuarios del sector de la construcción no buscan en el centro de ayuda de la misma forma que usuarios tech: usan términos del sector (no "exportar IFC" sino "sacar el modelo para mandarlo al aparejador"). Diseña la estrategia de base de conocimiento para este perfil de usuario. Incluye: (a) cómo estructuras el contenido (por rol de usuario, por tarea de obra, por función del software), (b) qué formatos funcionan mejor para este perfil (vídeos cortos de 2 minutos, guías paso a paso con capturas, FAQ en lenguaje de obra), (c) cómo creas un chatbot de soporte que entienda el vocabulario del sector de la construcción, (d) cómo mides qué contenido del centro de ayuda está resolviendo problemas realmente (reducción de tickets sobre ese tema).

tarea 3 — Onboarding de clientes nuevos con alta tasa de abandono:
El 35% de los clientes que cancelan lo hacen en los primeros 3 meses, antes de que la plataforma esté completamente integrada en su forma de trabajar. Diseña el programa de onboarding de 90 días que reduzca este churn temprano. Incluye: (a) los hitos críticos que el cliente debe alcanzar en los días 7, 30, 60 y 90 para estar "en el camino correcto", (b) las intervenciones proactivas del equipo de CS cuando el cliente no está alcanzando los hitos (qué hace la plataforma automáticamente vs qué hace un agente humano), (c) el programa de formación adaptado al contexto de obra (sesiones cortas, horarios compatibles con jornada de obra, contenido en móvil), (d) cómo defines el "primer valor" que el cliente obtiene de la plataforma y cómo te aseguras de que lo experimenta antes del día 14.

tarea 4 — Gestión de problemas de integración BIM:
Los problemas de integración con Revit, AutoCAD y Presto son técnicamente complejos y consumen el 40% del tiempo del equipo de soporte. Diseña el protocolo de gestión de estos tickets. Incluye: (a) el árbol de diagnosis para los 5 problemas de integración más frecuentes (modelo IFC que no importa correctamente, sincronización que falla, elementos que se duplican), (b) los scripts de comandos y configuraciones que los agentes de soporte pueden ejecutar con el cliente para resolver los casos más comunes, (c) cómo escalas los casos que requieren desarrollo (bug vs configuración vs problema del software de terceros), (d) cómo documentas las soluciones para construir la base de conocimiento técnico del equipo.

tarea 5 — Métricas de CS y argumentario de renovación:
Define las métricas de Customer Success para este perfil de cliente. ¿Cuáles son las métricas de salud del cliente que predicen la renovación (frecuencia de acceso al sistema, número de obras activas en la plataforma, tickets de soporte por tipología, NPS)? Diseña el proceso de revisión de negocio trimestral (QBR) con el cliente: ¿qué datos presentas? ¿Cómo demuestras el valor entregado en términos de obra (no de features usadas)? ¿Cuál es el argumentario de renovación cuando el cliente dice "este año tenemos menos obra y queremos revisar el contrato"?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar soporte técnico y onboarding de plataformas ConTech con IA',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de digitalización BIM e IA para el sector construcción',
                'description'      => 'Usa Claude para estructurar tu práctica de consultoría independiente en transformación digital para constructoras e ingenierías, desde la implementación de BIM hasta la adopción de IA en la gestión de proyectos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor independiente con formación en ingeniería civil y 12 años de experiencia en obra, de los cuales los últimos 4 has dedicado a implementar BIM y soluciones digitales en constructoras. Ahora trabajas como freelance y quieres posicionarte como referente en digitalización del sector construcción en España, combinando tu credibilidad técnica con el uso de IA para entregar proyectos de más valor en menos tiempo.

instrucción 1 — Posicionamiento y nicho de especialización:
El mercado de consultoría en construcción es amplio pero disperso. Define tu posicionamiento competitivo como consultor freelance de digitalización en construcción. Responde: (a) ¿en qué subsector de la construcción te especializas (obra civil, edificación, rehabilitación, industrial) y por qué esa es la mejor elección dado tu perfil?, (b) ¿qué problema específico y urgente resuelves para ese cliente (no "digitalización", sino el problema concreto: "la constructora pierde un 12% del margen por desviaciones de coste que detecta demasiado tarde"), (c) ¿cómo te diferencias de las grandes consultoras de digitalización (Accenture, IBM) y de los vendedores de software que también hacen consultoría?, (d) formula tu posicionamiento en una frase de máximo 20 palabras.

instrucción 2 — Catálogo de servicios con escalera de valor:
Diseña tu catálogo de servicios con escalera de valor, desde servicios de entrada fácil hasta proyectos de transformación de alto valor. Para cada servicio define: nombre comercial, descripción orientada al resultado del cliente (no a las actividades), duración, precio orientativo y entregables. La escalera debe tener al menos: (a) un servicio de diagnóstico rápido (1-2 semanas) que sea la puerta de entrada, (b) un servicio de implementación de proyecto (2-4 meses) que genere el mayor margen, (c) un servicio de acompañamiento recurrente (retainer mensual) para generar ingresos recurrentes.

instrucción 3 — Metodología de implementación BIM con IA:
Diseña la metodología propia que distingue tu forma de trabajar. Para un proyecto de implementación BIM en una constructora de obra civil con 60 empleados que no ha usado BIM antes, define: (a) las 5 fases del proyecto desde el diagnóstico hasta la consolidación, (b) los entregables de cada fase, (c) cómo usas Claude en cada fase para acelerar el trabajo (generación de documentación BIM, análisis de procesos actuales, formación personalizada, control de adopción), (d) cómo mides el éxito del proyecto con métricas de obra reales (no de adopción de software).

instrucción 4 — Captación de clientes en un sector de relaciones:
En el sector de la construcción, los contratos se consiguen por recomendación y confianza, no por posicionamiento en Google. Diseña tu estrategia de captación de los próximos 12 meses. Incluye: (a) las 5 actividades de networking más efectivas para acceder a directivos de constructoras (¿asociaciones sectoriales, comités de BIM, eventos de obra, contacto con estudios de arquitectura que te recomiendan?), (b) tu estrategia de contenidos en LinkedIn para demostrar expertise sin revelar secretos de tus clientes, (c) cómo construyes un programa de partners con proveedores de software BIM (Autodesk, Bentley, Nemetschek) que te refieran clientes, (d) la estrategia de primer proyecto a precio reducido para conseguir referencias del sector.

instrucción 5 — Productividad y escalabilidad como freelance de construcción:
El sector de la construcción tiene un ritmo intenso: los proyectos son urgentes, los clientes llaman fuera de horario y el trabajo de campo interrumpe la producción de informes y propuestas. Diseña tu sistema de trabajo como consultor freelance que: (a) te permita facturar 10.000-15.000 euros mensuales trabajando máximo 40 horas semanales, (b) proteja tu tiempo de producción (propuestas, metodología, contenidos) de las interrupciones del trabajo en obra, (c) use IA para generar más rápido los entregables típicos del proyecto (informes de diagnóstico, planes de implementación, materiales de formación, actas de reunión), (d) te permita gestionar 2-3 proyectos simultáneos sin perder calidad ni quemar el cliente. ¿Qué límites y procesos son no negociables para que el negocio sea sostenible?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzar y escalar práctica de consultoría freelance en digitalización de construcción',
                'vote_score'       => 33,
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
