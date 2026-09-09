<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills167Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Investigación de mercado con IA',
                'description'       => 'Combina datos cualitativos y cuantitativos para entender al mercado: encuestas, entrevistas, análisis de tendencias y las herramientas de IA que aceleran el proceso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como investigador de mercado con experiencia combinando metodología clásica (encuestas, entrevistas, grupos focales, análisis competitivo) con las herramientas de IA que han acelerado el proceso sin eliminar el juicio humano necesario para interpretar los datos correctamente.

Contexto de mi investigación:
- Producto o servicio a investigar: [describe qué estás lanzando, rediseñando o evaluando]
- Mercado objetivo: [define el segmento geográfico, demográfico o de comportamiento]
- Pregunta central de investigación: [qué decisión de negocio quieres tomar con los resultados]
- Presupuesto y plazo disponibles: [rango de presupuesto y cuándo necesitas los resultados]
- Acceso a clientes actuales: [tienes base de datos, comunidad, o necesitas recrutar desde cero]
- Tipo de empresa: [startup sin datos históricos, empresa establecida con datos propios, agencia que investiga para un cliente]

**Parte 1 — El diseño de la investigación**
Antes de lanzar encuestas o hacer entrevistas, el diseño de la investigación determina si los resultados serán útiles o confusos. Explica:
- La diferencia entre investigación exploratoria (entender el problema) e investigación concluyente (validar hipótesis) y cuál necesito primero
- Cuándo los datos cualitativos son suficientes y cuándo necesito validación cuantitativa
- El tamaño muestral mínimo para que los resultados cuantitativos sean estadísticamente significativos en mi contexto
- Los sesgos más frecuentes en investigación de mercado y cómo el diseño puede minimizarlos

**Parte 2 — Encuestas con IA: diseño y análisis**
Cómo usar IA para acelerar el proceso de encuestas sin perder rigor:
- La construcción del cuestionario: cómo pedirle a la IA que genere preguntas sin sesgo de confirmación, las escalas Likert vs. preguntas abiertas y cuándo usar cada una
- Los canales de distribución y sus tasas de respuesta típicas: email, LinkedIn, intercepción web, paneles de investigación
- El análisis de resultados abiertos con IA: cómo usar clustering semántico y análisis de sentimiento para extraer patrones de cientos de respuestas abiertas en minutos
- Las visualizaciones que comunican los hallazgos a stakeholders que no son investigadores

**Parte 3 — Entrevistas cualitativas aceleradas con IA**
El proceso de entrevistas de descubrimiento cuando el tiempo es limitado:
- El script de entrevista: las preguntas de apertura, las de profundización y las de cierre que generan información accionable
- Cómo usar transcripción automática (Otter.ai, Fireflies, Whisper) y luego IA para extraer los temas recurrentes entre múltiples entrevistas
- El análisis de afinidad digital: organizar los insights de 15-20 entrevistas en un mapa de afinidad usando IA para el clustering inicial y el investigador para la interpretación
- Cuántas entrevistas necesitas antes de que los nuevos hallazgos dejen de sorprenderte (la saturación teórica)

**Parte 4 — Análisis de tendencias y datos secundarios**
Las fuentes de datos secundarios que no requieren trabajo de campo y cómo la IA acelera su análisis:
- Google Trends y las búsquedas como proxy de la demanda latente
- Reddit, foros y comunidades como fuente de voz del cliente no mediada
- Reviews de competidores (App Store, G2, Trustpilot) como investigación cualitativa gratuita sobre lo que funciona y lo que no en el mercado
- Los informes de industria y cómo usar IA para sintetizar múltiples documentos extensos

**Parte 5 — El informe de investigación que mueve decisiones**
La estructura del informe que convierte datos en decisiones: el executive summary de una página con la respuesta a la pregunta central, los tres hallazgos principales con evidencia cuantitativa y citas cualitativas, las implicaciones para el producto o la estrategia y las preguntas que quedan abiertas para una siguiente ronda de investigación.

**Entregable**
Para mi investigación específica, diseña: el plan de investigación completo (métodos, muestra, timeline), el cuestionario o script de entrevista principal y la plantilla del informe de hallazgos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar y ejecutar investigación de mercado combinando metodología clásica con herramientas de IA',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Investigación técnica y RFC',
                'description'       => 'Cómo investigar y documentar decisiones técnicas: spike solutions, proof of concept, RFCs y el proceso que transforma la incertidumbre técnica en una decisión documentada y razonada.',
                'prompt_content'    => <<<'PROMPT'
Actúa como engineering lead con experiencia en el proceso de investigación técnica formal: los spikes de XP, los RFCs de Rust y la cultura de decisiones documentadas que permite a los equipos avanzar con confianza y aprender de sus decisiones pasadas.

Contexto de mi situación:
- El problema técnico o decisión a investigar: [describe la incertidumbre o la pregunta técnica que necesitas responder]
- El impacto estimado de la decisión: [qué sistemas, equipos o usuarios afecta]
- El plazo disponible para la investigación: [tiempo que puedes dedicar antes de que la decisión bloquee el trabajo]
- El equipo involucrado: [quiénes necesitan estar alineados con la decisión]
- Decisiones técnicas similares que el equipo ya ha tomado: [referencias para calibrar el proceso]
- El riesgo principal de equivocarse: [coste de reversión, impacto en usuarios, deuda técnica acumulada]

**Parte 1 — Cuándo investigar formalmente y cuándo simplemente decidir**
No toda decisión técnica requiere un spike o un RFC. Explica los criterios para determinar cuándo la incertidumbre justifica una investigación formal:
- El criterio de reversibilidad: decisiones fáciles de revertir requieren menos proceso que las irreversibles
- El criterio de impacto: cuántos equipos o sistemas se ven afectados
- El criterio de incertidumbre: si el equipo ya sabe la respuesta, el RFC es burocracia innecesaria
- Los tipos de incertidumbre: técnica (¿puede funcionar?), de diseño (¿cómo debe funcionar?) y de adopción (¿el equipo puede implementarlo?)

**Parte 2 — El spike como herramienta de investigación**
El spike (término de Extreme Programming) es una tarea de investigación time-boxed cuyo objetivo es reducir la incertidumbre, no entregar código de producción. Explica:
- Cómo definir el objetivo del spike con precisión: la pregunta que el spike debe responder, no el código que debe producir
- El time-box: por qué limitar el tiempo es tan importante como el objetivo (sin límite, el spike se convierte en la implementación)
- Los entregables del spike: un documento con los hallazgos, las opciones evaluadas y la recomendación, no código de producción
- Cuándo el spike revela que se necesita otro spike antes de decidir

**Parte 3 — El Proof of Concept**
La diferencia entre un spike (investigación de una pregunta específica) y un PoC (demostración de que una solución funciona end-to-end en un contexto simplificado). Cuándo tiene sentido construir un PoC:
- Para convencer a stakeholders no técnicos de que algo es viable
- Para validar que la integración de múltiples componentes funciona antes de comprometerse
- Para descubrir los problemas de implementación que no son evidentes en el diseño

Cómo evitar que el PoC se convierta en código de producción por presión de tiempo: la regla del PoC descartable y cuándo incumplirla conscientemente.

**Parte 4 — El RFC: Request for Comments**
La anatomía del RFC técnico que funciona realmente:
- **Context**: el problema que se está resolviendo y por qué es un problema ahora
- **Goals y non-goals**: qué debe y qué no debe resolver esta propuesta
- **Proposal**: la solución propuesta con suficiente detalle para que los revisores puedan evaluar su viabilidad
- **Alternatives considered**: las opciones que se evaluaron y por qué se descartaron (esta sección es la más valiosa a largo plazo)
- **Open questions**: lo que todavía no se sabe en el momento de escribir el RFC
- **Implementation plan**: los pasos de implementación y las fases si el cambio es grande

El proceso de revisión: quién debe revisar, cuánto tiempo tiene el equipo para comentar, cómo se toman las decisiones cuando hay desacuerdo.

**Parte 5 — El archivo de decisiones técnicas (ADR)**
Los Architecture Decision Records como práctica de documentación ligera para decisiones que ya están tomadas: el formato de un ADR (título, estado, contexto, decisión, consecuencias), dónde almacenarlos (junto al código, en el wiki), cómo superar la resistencia a documentar cuando el equipo tiene presión de entrega.

**Entregable**
Para mi decisión técnica específica, produce: el plan del spike o PoC con el objetivo, el time-box y los criterios de éxito, y la estructura del RFC completo con cada sección desarrollada para mi caso concreto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Estructurar la investigación técnica y documentar decisiones de arquitectura de forma que el equipo aprenda',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Research de diseño para decisiones',
                'description'       => 'El UX research que mueve decisiones reales: cuándo hacer qué método, cómo presentar los hallazgos y el proceso que convierte la investigación en cambios en el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como UX researcher senior con experiencia en empresas de producto donde el research debe competir con la velocidad del equipo y justificar su existencia con decisiones que cambian el producto, no con informes que acaban en una carpeta compartida sin leer.

Contexto de mi situación:
- Tipo de empresa y producto: [startup, scale-up, corporación; tipo de producto digital]
- Pregunta de diseño que necesito responder: [qué decisión de diseño o de producto está en juego]
- Recursos disponibles: [tiempo, budget, acceso a usuarios, herramientas de research]
- Estado del producto: [fase de descubrimiento, iteración sobre algo existente, rediseño, nueva feature]
- Stakeholders que necesitan convencerse: [PM, CEO, engineering, marketing]
- Research anterior disponible: [si hay datos de uso, entrevistas previas, analytics, heatmaps]

**Parte 1 — El problema del research que no mueve decisiones**
Explica con honestidad por qué el UX research fracasa en muchas organizaciones: el research llega tarde (cuando la decisión ya está tomada), los informes son demasiado largos y académicos, los hallazgos son demasiado ambiguos para ser accionables, o el equipo de producto ya tenía una hipótesis y el research solo sirve para confirmarlo.

El cambio de mentalidad: el research no es un paso del proceso, es la herramienta para reducir el riesgo de decisiones equivocadas. Empieza con la decisión, no con el método.

**Parte 2 — El mapa de métodos y cuándo usar cada uno**
Los métodos más útiles organizados por cuándo aplicarlos:

**Para descubrimiento (qué problema resolver):**
- Entrevistas contextuales y shadowing
- Diary studies para comportamientos que ocurren a lo largo del tiempo
- Análisis de datos cualitativos de soporte y reviews

**Para ideación (qué solución explorar):**
- Card sorting para arquitectura de información
- Co-creation workshops con usuarios
- Competitive analysis como proxy de preferencias

**Para validación (si la solución funciona):**
- Usability testing (moderated y unmoderated)
- First click testing para navigation
- A/B testing cuando tienes volumen suficiente

Para cada método, explica cuándo es la elección correcta para mi pregunta de investigación, cuánto tiempo requiere mínimamente y qué sesgo introduce.

**Parte 3 — El research rápido que el equipo acepta**
Cuando el equipo va demasiado rápido para un proceso de research formal, las técnicas de research ligero que generan evidencia suficiente para decisiones de diseño:
- Las entrevistas de 20 minutos con 5 usuarios y por qué 5 usuarios descubren el 85% de los problemas de usabilidad
- Los tests de guerrilla (parar a alguien en una cafetería o usar Maze/UserTesting para tests remotos en 48 horas)
- Los five-second tests para validar que el valor de una pantalla se comunica en el primer vistazo
- El análisis de comportamiento con datos existentes (Hotjar, FullStory, analytics) como punto de partida antes de cualquier investigación primaria

**Parte 4 — Cómo presentar los hallazgos para que muevan decisiones**
La diferencia entre un informe de research y una presentación de insights:
- El insight accionable: no "los usuarios tienen dificultades con el onboarding" sino "el 60% de los usuarios abandona en el paso 3 porque no entienden qué valor obtienen antes de dar sus datos de pago"
- Las citas textuales de usuarios como evidencia más poderosa que cualquier estadística
- El formato de presentación: la decisión que hay que tomar primero, los hallazgos que la fundamentan después
- Cómo manejar los hallazgos que contradicen la hipótesis favorita del CEO o del PM

**Parte 5 — Institucionalizar el research sin burocracia**
Las prácticas que crean una cultura de research sin convertirlo en un departamento lento:
- El repositorio de insights: cómo centralizar los hallazgos para que futuras investigaciones partan de lo que ya se sabe
- El research sprint: un sprint dedicado exclusivamente a investigación, con su propia cadencia y entregables
- La democratización del research: enseñar a los PMs y diseñadores a hacer research básico sin necesitar al researcher para cada pregunta

**Entregable**
Para mi pregunta de investigación, diseña: el plan de research con el método más adecuado, el script o guía de investigación, el formato de presentación de hallazgos y los tres insights que cambiarán la decisión de diseño si la investigación confirma las hipótesis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar investigación de UX que genera hallazgos accionables y mueve decisiones de producto reales',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Investigación previa a la reunión de ventas',
                'description'       => 'Prepara la reunión con el nivel de investigación que te diferencia: cuenta, interlocutor, competidores del cliente y los datos que permiten tener la conversación que el cliente no esperaba.',
                'prompt_content'    => <<<'PROMPT'
Actúa como Account Executive senior con un ratio de conversión de primera reunión a oportunidad calificada muy por encima de la media, que ha construido ese ratio principalmente a través de la investigación previa que hace que los clientes sientan que ya te conocen antes de que la reunión empiece.

Contexto de la reunión:
- Empresa del cliente: [nombre de la empresa]
- Sector y modelo de negocio: [en qué sector opera y cómo gana dinero]
- Tamaño aproximado: [número de empleados, facturación si es pública]
- Interlocutor con quien me reúno: [nombre, cargo]
- Tipo de reunión: [primera llamada de discovery, demo, reunión de propuesta, revisión de negocio]
- Tu producto o servicio: [qué vendes y a qué tipo de empresa se lo vendes habitualmente]
- Fuente del lead: [inbound, prospección saliente, referido, evento]
- Lo que sabes de por qué te han aceptado la reunión: [si lo sabes]

**Parte 1 — La investigación de la empresa**
El nivel de investigación sobre la empresa que diferencia al vendedor preparado del que improvisa:

**Negocio y estrategia:**
- La web corporativa como fuente de la propuesta de valor, los productos/servicios y los mensajes al mercado
- Las noticias recientes (Google News, LinkedIn company page): financiaciones, adquisiciones, lanzamientos, cambios de liderazgo, problemas públicos
- Los informes anuales o las presentaciones a inversores si la empresa es pública (CNMV, SEC, Companies House)
- Las ofertas de trabajo activas como señal de prioridades estratégicas (si están contratando 5 ingenieros de datos, los datos son una prioridad)

**Competidores y posicionamiento:**
- Cómo se posiciona la empresa frente a sus competidores
- Los reviews de sus productos/servicios en Trustpilot, G2, App Store si aplica
- Las campañas publicitarias activas (Meta Ad Library, Google Ads transparency)

**Parte 2 — La investigación del interlocutor**
La investigación sobre la persona con quien te vas a reunir:
- Su perfil de LinkedIn: trayectoria, cuánto tiempo lleva en la empresa, posts recientes, artículos publicados, comentarios en posts de otros
- Sus intervenciones públicas: podcasts, conferencias, webinars, citas en medios del sector
- Sus conexiones en común: quién de tu red os conecta y si tiene sentido mencionarlo
- Su probable agenda: qué presiones tiene alguien con su cargo y en esa empresa en este momento

Lo que buscas no es información para impresionar con que la conoces, sino contexto para hacer las preguntas correctas y conectar tu propuesta con lo que realmente le importa.

**Parte 3 — El análisis de fit previo a la reunión**
Antes de entrar en la reunión, el análisis honesto de si esta empresa es un buen cliente para ti:
- Los criterios de tu Ideal Customer Profile y cómo encaja esta empresa
- Las señales de que podrían tener el problema que tu producto resuelve
- Los posibles obstáculos (¿ya usan un competidor? ¿el tamaño encaja con tu ACV típico? ¿el sector es uno donde tienes casos de éxito?)
- La hipótesis de valor: cuál es el problema más probable que tienes que verificar en la reunión

**Parte 4 — La preparación de la reunión**
Con toda la investigación hecha, la preparación concreta de la reunión:
- Las tres preguntas más importantes de discovery que necesitas responder para saber si hay oportunidad
- El insight o dato de su negocio que vas a compartir para demostrar que has hecho los deberes y que conoces su mundo
- La hipótesis de negocio que vas a validar o refutar: "Empresas como la tuya en este momento suelen estar priorizando X, ¿es ese también tu caso?"
- El objetivo concreto de la reunión: qué tiene que ocurrir para que sea un éxito y cuál es el siguiente paso ideal

**Parte 5 — La nota de resumen post-reunión**
Después de la reunión, el resumen en el CRM que es útil para ti y para tu equipo:
- Lo que descubriste sobre el problema y la urgencia
- Los stakeholders identificados y el mapa de influencia
- Las objeciones planteadas y cómo las abordaste
- El siguiente paso acordado con fecha y responsable

**Entregable**
Para la reunión que tengo, dame: el briefing de investigación completo con los datos más relevantes de la empresa y del interlocutor, las cinco preguntas de discovery prioritarias y el opening statement de dos minutos que demuestra investigación y conecta con sus prioridades probables.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Preparar una reunión de ventas con el nivel de investigación que genera credibilidad inmediata',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Jobs to be Done research',
                'description'       => 'Aplica la metodología JTBD para entender qué progreso busca el cliente: las entrevistas de switch, el mapa de fuerzas y cómo los hallazgos rediseñan el producto desde las motivaciones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como product manager que ha aplicado Jobs to be Done no como un framework académico sino como la herramienta práctica que transforma la forma en que el equipo habla sobre los clientes: de segmentos demográficos y features solicitadas a progresos que los clientes intentan conseguir y los obstáculos que se los impiden.

Contexto de mi investigación JTBD:
- Mi producto o servicio: [describe qué hace tu producto]
- El cliente objetivo que quiero investigar: [perfil del cliente ideal]
- La decisión de producto que quiero tomar con estos hallazgos: [qué quieres cambiar, priorizar o crear]
- Acceso a clientes recientes: [puedes contactar a clientes que compraron recientemente o cambiaron de solución]
- Experiencia previa con JTBD: [primera vez, algo he leído, he hecho alguna entrevista]
- Principal hipótesis sobre el job que mi producto resuelve: [tu teoría actual sobre por qué los clientes te compran]

**Parte 1 — La teoría JTBD explicada sin jerga**
Explica Jobs to be Done desde la perspectiva de Clayton Christensen y Tony Ulwick con ejemplos concretos:
- Los clientes no compran productos, los contratan para conseguir un progreso en su vida
- El milkshake de McDonald's como ejemplo fundacional: los clientes de la mañana no compran un milkshake, contratan una solución para el aburrimiento del trayecto al trabajo que además no mancha y dura todo el viaje
- La diferencia entre el Job funcional (lo que el cliente quiere hacer), el Job emocional (cómo quiere sentirse) y el Job social (cómo quiere que los demás lo perciban)
- Por qué los competidores reales de tu producto muchas veces no son otros productos similares sino soluciones radicalmente distintas que resuelven el mismo Job

**Parte 2 — La entrevista de switch**
La entrevista más valiosa del JTBD: la conversación con alguien que recientemente tomó la decisión de cambiar de solución (contratar tu producto o dejar tu producto por otro). La estructura de la entrevista de switch de Bob Moesta:

- **El momento de la primera idea**: cuándo surgió por primera vez la idea de cambiar y qué estaba pasando en su vida en ese momento
- **Los eventos pasivos**: las experiencias frustrantes que fueron acumulando el deseo de cambio sin llegar a generar acción
- **El momento de la decisión activa**: qué evento específico precipitó la búsqueda activa de una alternativa
- **El proceso de búsqueda**: cómo buscó alternativas, qué criterios usó y qué descartó
- **El momento de la compra**: qué acabó siendo decisivo y qué dudas tuvo antes de comprometerse
- **Las ansiedades post-compra**: qué sigue preocupándole después de haber tomado la decisión

**Parte 3 — El mapa de fuerzas**
Las cuatro fuerzas que explican cualquier decisión de cambio:
- **Push de la situación actual**: las frustraciones con la solución actual que empujan hacia el cambio
- **Pull de la solución nueva**: la atracción de la nueva solución y el progreso que promete
- **Inercia de los hábitos**: el coste de aprender algo nuevo, cambiar los flujos de trabajo y abandonar lo familiar
- **Ansiedad ante el cambio**: el miedo a que la nueva solución no cumpla lo prometido o cree nuevos problemas

Para que alguien compre, el push + pull debe superar la inercia + ansiedad. Explica cómo mapear estas fuerzas a partir de las entrevistas y cómo usarlas para diseñar tanto el producto como el proceso de ventas y marketing.

**Parte 4 — Del insight al diseño del producto**
Cómo transformar los hallazgos de las entrevistas JTBD en decisiones de producto:
- El Job Statement como guía de diseño: "Cuando [situación], ayúdame a [motivación] para que pueda [resultado esperado]"
- Las Outcome Statements de Tony Ulwick: las métricas que el cliente usa para evaluar si el Job está bien resuelto
- Cómo priorizar features según si aceleran el resultado deseado o reducen los obstáculos identificados
- Los errores de producto que el JTBD revela: features que el cliente no valoró, problemas de onboarding que crean ansiedad post-compra, mensajes de marketing que hablan de funcionalidades en lugar de progreso

**Parte 5 — JTBD en el messaging y el posicionamiento**
Cómo las entrevistas JTBD transforman la forma en que hablas de tu producto:
- Las palabras exactas que los clientes usan para describir su problema (que son mejores que cualquier copy que el equipo de marketing invente)
- El cambio del messaging de features a progreso: de "software de gestión de proyectos con 200 integraciones" a "termina el trabajo del equipo sin las reuniones de seguimiento"
- El diseño del customer journey desde el Job: cada touchpoint debe reducir la ansiedad y reforzar el pull hacia el progreso

**Entregable**
Para mi producto, diseña: el script completo de la entrevista de switch adaptado a mi contexto, el template del mapa de fuerzas para registrar los hallazgos de cada entrevista y tres Job Statements hipotéticos que quiero validar o refutar con las primeras cinco entrevistas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicar Jobs to be Done para entender las motivaciones reales de compra y rediseñar el producto y el messaging',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People research',
                'description'       => 'Investiga el estado de las personas en tu organización: encuestas de clima, focus groups, exit interviews y el proceso que convierte datos cualitativos en iniciativas con impacto medible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como HR Business Partner o responsable de People con experiencia diseñando programas de escucha organizacional que van más allá de las encuestas de clima anuales que nadie lee: investigación cualitativa y cuantitativa que revela los problemas reales antes de que se conviertan en rotación.

Contexto de mi organización:
- Tamaño de la empresa y estructura del equipo de People: [número de empleados y de cuántas personas dispones para hacer research]
- Sector y modelo de trabajo: [sector, remoto/híbrido/presencial]
- Situación actual: [rotación alta, clima deteriorado, crecimiento rápido, cambio organizativo, integración post-M&A, sin señales específicas pero quieres tomar el pulso]
- Último eNPS o encuesta de clima: [si tienes datos recientes, compártelos; si no, desde cuándo no lo mides]
- Grupos de empleados que más te preocupan: [perfil de los empleados en mayor riesgo o con más señales de malestar]
- Decisiones que quieres tomar con los hallazgos: [qué cambio organizativo, beneficio o iniciativa estás evaluando]

**Parte 1 — El ecosistema de escucha organizacional**
Explica los distintos mecanismos de escucha y su complementariedad:
- **Encuesta de clima anual**: mide el estado general, comparativa año a año, útil para tendencias
- **Pulse surveys**: encuestas cortas frecuentes (mensuales o trimestrales) sobre temas específicos, más ágiles pero con riesgo de fatiga si se abusa
- **eNPS (Employee Net Promoter Score)**: una pregunta, rápida de medir, correlaciona con retención pero no explica causas
- **Focus groups**: investigación cualitativa en profundidad, revela el "por qué" que los números no explican
- **Exit interviews y stay interviews**: la investigación más honesta (las de salida) y la más preventiva (las de retención)
- **Manager check-ins y 1:1s**: el mecanismo de escucha más continuo y con más contexto, si los managers tienen las habilidades para aprovecharlo

**Parte 2 — El diseño de la encuesta de clima**
Las encuestas de clima que generan datos accionables (no las que miden el bienestar general sin conexión con las causas):
- Las dimensiones que predicen retención y rendimiento: claridad del rol, calidad del manager, oportunidades de desarrollo, relación con los compañeros, alineación con los valores de la empresa, carga de trabajo sostenible
- El equilibrio entre preguntas cerradas (para benchmarking) y abiertas (para descubrir lo inesperado)
- El anonimato y la confianza: cómo garantizarlos para que las respuestas sean honestas, y cuándo la empresa no puede garantizarlos realmente
- La cadencia y el tamaño: por qué una encuesta de 10 preguntas tiene mejor tasa de respuesta y datos más honestos que una de 60

**Parte 3 — Focus groups con empleados**
El focus group como herramienta de investigación cualitativa que complementa los datos de la encuesta:
- El diseño del grupo: tamaño (6-8 personas), diversidad de perfiles, si deben ser del mismo equipo o cross-functional
- Las preguntas que generan conversación honesta vs. las que generan respuestas políticamente correctas
- El rol del facilitador: cómo mantener la neutralidad cuando el tema es sensible y cómo manejar a los participantes que monopolizan la conversación
- El análisis del material: cómo organizar los temas emergentes de múltiples grupos y triangularlos con los datos cuantitativos

**Parte 4 — Exit interviews y stay interviews**
Las dos investigaciones más valiosas y más infrautilizadas:
- **Exit interview**: las preguntas que revelan la causa real de la salida (no "¿por qué te vas?" sino "¿cuándo empezaste a pensar en buscar otras opciones?"), quién la debe hacer (no el manager directo), y cómo convertir los hallazgos en datos comparables
- **Stay interview**: la conversación con los empleados que quieres retener para saber qué les hace quedarse y qué podría hacerles marchar, antes de que lo decidan

**Parte 5 — El proceso de cerrar el loop**
El error más frecuente del people research: publicar los resultados sin comprometerse con acciones concretas. El proceso de cierre del loop:
- Cómo compartir los resultados con toda la organización con honestidad (los datos buenos y los malos)
- El plan de acción: priorizar los dos o tres problemas más urgentes, con dueños claros y plazos
- El seguimiento: cómo medir si las iniciativas lanzadas han mejorado los indicadores que se identificaron

**Entregable**
Para mi situación, diseña: el plan de investigación completo con los métodos prioritarios, la encuesta de clima de 12 preguntas adaptada a mi contexto, el script del focus group y la plantilla del informe de resultados con la sección de plan de acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar programas de escucha organizacional que revelan problemas antes de que se conviertan en rotación',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Investigación financiera y due diligence',
                'description'       => 'El proceso de due diligence financiera: qué analizar, en qué orden, las señales de alerta y el informe que permite tomar una decisión de inversión o adquisición con confianza.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director financiero o CFO con experiencia en procesos de due diligence tanto como comprador (adquisiciones) como vendedor (preparando la empresa para ser adquirida), que conoce la diferencia entre la due diligence que da confianza real y la que solo crea una apariencia de rigor.

Nota importante: Este análisis tiene carácter educativo. Los procesos de due diligence en operaciones reales requieren el concurso de asesores financieros, legales y fiscales especializados.

Contexto de mi due diligence:
- Tipo de operación: [adquisición total, compra de participación mayoritaria/minoritaria, inversión de capital riesgo, fusión, análisis de partnership estratégico]
- Tipo de empresa objetivo: [sector, modelo de negocio, tamaño aproximado, antigüedad]
- Información disponible hasta ahora: [qué documentación tienes ya, qué acceso tienes a la empresa]
- Plazo del proceso: [cuánto tiempo tienes para completar la DD]
- Recursos del equipo: [si lo haces internamente, con apoyo de asesor externo, con una firma especializada]
- Principal riesgo que te preocupa: [liquidez, calidad del resultado, deuda contingente, concentración de cliente, dependencia de personas clave, litigios]

**Parte 1 — Las áreas de due diligence y su priorización**
La due diligence financiera no empieza analizando los estados financieros línea a línea: empieza identificando qué áreas concentran el mayor riesgo en función del tipo de empresa y el tipo de operación. Explica:
- Por qué el orden importa: empezar por los asuntos que pueden ser deal-breakers antes de invertir tiempo en los detalles
- Las áreas estándar de due diligence financiera: calidad del ingreso, calidad del resultado, estructura de capital y deuda, capital de trabajo, capex y activos, proyecciones y plan de negocio, riesgos contingentes
- Las áreas adicionales por tipo de empresa: para SaaS (métricas de cohort, churn, CAC/LTV), para negocios de servicios profesionales (dependencia de personal clave, contratos de clientes), para empresas industriales (capex de mantenimiento vs. crecimiento)

**Parte 2 — La calidad del ingreso (Quality of Revenue)**
El análisis más importante en cualquier due diligence: separar el ingreso estructural del ingreso excepcional o no recurrente:
- Los ajustes EBITDA más frecuentes y cuáles son genuinos vs. cuáles son agresivos
- La concentración de clientes: el riesgo de un cliente que representa más del 20% de los ingresos
- La recurrencia: contratos de larga duración vs. ingresos transaccionales, y la diferencia entre revenue contractual y behavioral
- Los ingresos diferidos: cómo distinguir si el balance refleja ingresos ya ganados o anticipos de trabajo todavía no entregado
- Los cambios de política contable en los últimos tres ejercicios y por qué son una señal de alerta

**Parte 3 — El análisis del capital de trabajo**
El capital de trabajo normalizado es frecuentemente el punto de mayor conflicto en las negociaciones de M&A:
- El cálculo del capital de trabajo estructural vs. el pico o valle estacional
- Los ajustes habituales: el stock obsoleto, los deudores de dudoso cobro, los acreedores extendidos artificialmente antes del cierre
- El working capital target y cómo se negocia en los SPA (Share Purchase Agreements)
- Los mecanismos de ajuste de precio post-closing y los errores más frecuentes en su diseño

**Parte 4 — Las señales de alerta (red flags)**
Las señales que indican que algo no cuadra en los estados financieros o en el comportamiento de la empresa durante el proceso:
- La resistencia a proporcionar documentación o los retrasos injustificados
- Los estados financieros que no han sido auditados o que han tenido cambios de auditor frecuentes
- Las transacciones con partes vinculadas en condiciones no de mercado
- El crecimiento de los ingresos que no va acompañado de crecimiento del cash flow operativo
- La diferencia significativa entre el beneficio contable y el cash generado
- Los litigios no declarados o declarados de forma ambigua

**Parte 5 — El informe de due diligence**
La estructura del informe que permite a los decisores entender el riesgo real de la operación:
- El executive summary con la valoración del riesgo global y los tres asuntos más críticos
- Los hallazgos organizados por área con el impacto en precio o en las condiciones de la operación
- Los ajustes al EBITDA normalizado con el razonamiento de cada ajuste
- Las condiciones precedentes y las garantías que debe incorporar el contrato
- Las recomendaciones sobre el precio, la estructura de la operación y los mecanismos de protección

**Entregable**
Para mi operación, diseña: el plan de trabajo de la due diligence con las áreas prioritarias y los documentos a solicitar, el checklist de información requerida para las primeras dos semanas y la estructura del informe de hallazgos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificar y ejecutar una due diligence financiera que revela los riesgos reales de una operación',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Investigación jurídica efectiva',
                'description'       => 'Usa bases de datos jurídicas, IA legal y las fuentes de derecho para resolver cuestiones legales de forma eficiente: el método que separa al abogado que pierde el tiempo del que llega a la respuesta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado senior con experiencia en investigación jurídica, que ha trabajado tanto en despachos de gran tamaño (con acceso a bases de datos premium) como en práctica propia o boutique (donde el tiempo de investigación se paga del propio bolsillo), y que ha adaptado el proceso a la disponibilidad de herramientas de IA que han cambiado la velocidad de la investigación sin eliminar la necesidad del juicio jurídico.

Nota importante: Este análisis tiene carácter metodológico y educativo. Cualquier cuestión jurídica específica debe ser resuelta por un abogado colegiado con conocimiento del caso concreto y la jurisdicción aplicable.

Contexto de mi investigación jurídica:
- La cuestión jurídica que necesito resolver: [describe el problema legal o la pregunta que necesitas responder]
- Jurisdicción aplicable: [España, México, Argentina, UE, internacional, o múltiple]
- Urgencia: [cuánto tiempo tienes para encontrar la respuesta]
- Recursos de investigación disponibles: [Westlaw, Aranzadi/Thomson Reuters, CENDOJ, bases de datos gratuitas, solo web + IA]
- Experiencia en el área de derecho: [si es tu especialidad, una incursión puntual o un área completamente nueva]

**Parte 1 — El método de investigación jurídica**
La investigación jurídica no empieza buscando en bases de datos: empieza identificando las fuentes del derecho aplicables y su jerarquía. Explica:
- La jerarquía de fuentes: ley, jurisprudencia, doctrina y cómo su peso varía según el sistema jurídico (civil law vs. common law)
- El punto de partida correcto: cuándo empezar por la ley, cuándo por la jurisprudencia del Tribunal Supremo y cuándo por la doctrina académica
- La diferencia entre investigar para conocer el estado del derecho y investigar para construir un argumento procesal
- El mapa de la investigación: antes de buscar, definir qué tipo de fuente resuelve la cuestión más rápido

**Parte 2 — Las fuentes de derecho en España y Latinoamérica**
Las fuentes principales por jurisdicción:

**España:**
- BOE (boe.es): legislación vigente consolidada, gratuita
- CENDOJ (poderjudicial.es): jurisprudencia del Tribunal Supremo y audiencias provinciales, gratuita
- Aranzadi, La Ley, Francis Lefebvre: bases de datos de pago con doctrina y jurisprudencia anotada
- EUR-Lex: derecho de la Unión Europea

**Latinoamérica:**
- Sistemas de publicación oficial de cada país (Diario Oficial, Gaceta)
- Bases de datos de los Poderes Judiciales nacionales para jurisprudencia
- Vlex y Legis como plataformas regionales de pago

**Parte 3 — IA legal en la investigación jurídica**
Las herramientas de IA que han cambiado la velocidad de la investigación sin reemplazar el juicio jurídico:
- **Para síntesis de documentos extensos**: cómo usar IA para extraer la ratio decidendi de una sentencia larga o los puntos clave de una norma compleja
- **Para identificar jurisprudencia relevante**: herramientas como Harvey, Casetext, o GPT-4 sobre documentos propios para encontrar casos similares
- **Para drafting de primer borrador**: los memorandos, las consultas y los análisis de riesgo que la IA puede borradorear para que el abogado revise y complete
- **Los límites críticos**: las alucinaciones en citas de jurisprudencia, la desactualización del modelo, la necesidad de verificar siempre la fuente primaria

**Parte 4 — El proceso de construcción del análisis jurídico**
Una vez encontradas las fuentes relevantes, el proceso de construcción del análisis:
- La estructura IRAC (Issue, Rule, Application, Conclusion) como framework para organizar el razonamiento
- Cómo manejar la contradicción entre fuentes: jurisprudencia contradictoria, doctrina divergente
- La distinción entre el estado actual del derecho y la tendencia: cuándo la evolución jurisprudencial hace que una respuesta conservadora sea arriesgada
- Cómo presentar la incertidumbre jurídica al cliente: la diferencia entre "la respuesta es X" y "la respuesta más probable es X con las siguientes matizaciones"

**Parte 5 — El memorando de investigación jurídica**
La estructura del memorando que comunica los hallazgos de forma que el cliente o el socio pueda tomar una decisión:
- La cuestión planteada (una frase)
- La respuesta breve (dos o tres frases que el cliente puede leer en 30 segundos)
- El análisis detallado con las fuentes
- El riesgo residual y las recomendaciones
- Los límites del análisis (qué queda fuera del alcance y por qué)

**Entregable**
Para mi cuestión jurídica, diseña: el plan de investigación con las fuentes prioritarias y el orden de búsqueda, las cinco preguntas de investigación que necesito responder antes de llegar a la conclusión, y la estructura del memorando de respuesta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Realizar investigación jurídica eficiente combinando bases de datos jurídicas con herramientas de IA',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Investigación de causa raíz de problemas de clientes',
                'description'       => 'Cuando el cliente tiene un problema recurrente, el análisis de causa raíz que identifica el problema real (no el síntoma) y genera una solución definitiva.',
                'prompt_content'    => <<<'PROMPT'
Actúa como Customer Success Manager o líder de soporte técnico con experiencia en el análisis de causa raíz de problemas de clientes, que ha aprendido la diferencia entre resolver el ticket (el síntoma) y resolver el problema (la causa) y cómo construir el proceso que hace que el mismo problema no vuelva a llegar nunca más.

Contexto del problema que analizo:
- Descripción del problema que reporta el cliente: [qué dice el cliente que está pasando]
- Frecuencia con la que aparece: [primera vez, recurrente, sistemático en todos los clientes de un tipo]
- Tipo de cliente y su caso de uso: [perfil del cliente y cómo usa el producto]
- Lo que ya se ha intentado resolver: [soluciones que se han probado y que no han funcionado de forma duradera]
- Impacto en el cliente: [cómo afecta a su operación, si hay riesgo de churn]
- Equipos involucrados: [solo CS, CS + producto, CS + desarrollo, CS + operaciones]

**Parte 1 — Por qué los problemas de clientes son recurrentes**
Explica las razones sistémicas por las que los mismos problemas aparecen una y otra vez:
- La resolución de síntomas en lugar de causas: cerrar el ticket sin entender qué lo generó
- La desconexión entre soporte/CS y el equipo de producto: los problemas se resuelven en el cliente sin que el producto cambie para que no ocurran
- La ausencia de un proceso de análisis de causa raíz sistemático: cuando cada ticket se trata como único aunque el patrón es claro
- El incentivo equivocado: medir el tiempo de resolución del ticket en lugar de la reducción de tickets del mismo tipo

**Parte 2 — Los métodos de análisis de causa raíz**
Los frameworks de causa raíz aplicados a problemas de clientes:

**Los 5 Por Qués:**
El método más simple y más poderoso para problemas causados por procesos o comportamientos. Guía el proceso con un ejemplo concreto de cómo aplicarlo a un problema de cliente típico (onboarding incompleto, error de integración, mal uso de una feature) hasta llegar a la causa sistémica.

**Diagrama de Ishikawa (Espina de pescado):**
Para problemas con múltiples causas potenciales simultáneas. Las categorías relevantes para problemas de clientes: producto (bugs, UX deficiente), proceso (onboarding insuficiente, documentación obsoleta), personas (formación del CSM, conocimiento del cliente), entorno (integraciones de terceros, infraestructura del cliente).

**Análisis de Pareto:**
Cuando tienes un volumen de tickets suficiente para ver patrones, cómo identificar el 20% de causas que generan el 80% de los problemas y priorizar su resolución.

**Parte 3 — El proceso de investigación del problema**
El proceso paso a paso para investigar un problema de cliente con rigor:
1. Documentar exactamente lo que el cliente reporta, con capturas, logs, pasos para reproducir
2. Replicar el problema en un entorno controlado antes de asumir que la causa es la que parece
3. Aplicar el método de análisis elegido con los stakeholders correctos (no solo CS, también producto o técnico si el problema lo requiere)
4. Validar la causa raíz: ¿cómo sabemos que esta es la causa y no otra?
5. Identificar la solución en el producto, el proceso o la comunicación que elimina la causa (no el síntoma)

**Parte 4 — El feedback loop con producto**
El proceso que transforma el análisis de causa raíz en mejoras del producto:
- Cómo documentar el problema para que el equipo de producto lo pueda evaluar: el impacto (cuántos clientes, qué ARR en riesgo), la frecuencia, la causa identificada y la solución propuesta
- El bug report vs. el feature request: la diferencia entre un comportamiento del producto que no es el esperado y una limitación de diseño
- Cómo priorizar los problemas de clientes en el backlog de producto sin que CS se convierta en un canal de demanda ilimitada
- El cierre del loop con el cliente: cómo comunicar cuándo se resolverá definitivamente el problema

**Parte 5 — El conocimiento base y la reducción de tickets**
Una causa raíz resuelta debe traducirse en menos tickets del mismo tipo:
- La actualización de la documentación para cubrir el caso que generó el problema
- La mejora del onboarding para prevenir que el cliente llegue a la situación problemática
- El artículo de la knowledge base que permite que el cliente resuelva el problema por sí mismo en el futuro
- Las alertas proactivas: si el problema tiene señales previas en los datos de uso, configurar alertas que permitan intervenir antes de que el cliente lo reporte

**Entregable**
Para el problema que me has descrito, aplica el análisis de los 5 Por Qués hasta la causa raíz, identifica si la solución está en el producto, el proceso o la comunicación, y produce la ficha de escalado a producto con todos los datos necesarios para que el equipo pueda tomar una decisión de priorización informada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Identificar la causa raíz de problemas recurrentes de clientes y generar soluciones definitivas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Pensamiento crítico como ventaja competitiva',
                'description'       => 'El freelance que piensa mejor que el cliente sobre su propio problema: cómo desarrollar el pensamiento crítico que justifica tarifas de consultor, no de ejecutor.',
                'prompt_content'    => <<<'PROMPT'
Actúa como consultor freelance senior que ha hecho la transición de vender tiempo y expertise técnico a vender pensamiento: la capacidad de analizar un problema del cliente con más rigor, más contexto y menos sesgo que el propio cliente, y llegar a conclusiones que el cliente no habría alcanzado solo.

Contexto de mi situación:
- Mi especialidad y tipo de trabajo actual: [diseñador, desarrollador, copywriter, consultant de marketing, otro]
- Tipo de clientes con los que trabajo: [startups, pymes, corporaciones, agencias]
- Tarifa actual y tarifa a la que aspiro: [rango actual y objetivo]
- El tipo de encargos que me llegan más frecuentemente: [describe los proyectos tipo que recibes]
- La mayor frustración con cómo los clientes te contratan: [te piden ejecutar sin pensar, te dan specs muy cerrados, te comparan con opciones más baratas, etc.]
- Ejemplo de una situación reciente donde tu análisis aportó más valor que tu ejecución: [si lo tienes]

**Parte 1 — Por qué el pensamiento crítico tiene más valor que la ejecución**
Explica la economía del conocimiento desde la perspectiva del freelance: la ejecución técnica se comoditiza (hay cada vez más personas que pueden hacer lo mismo que tú y herramientas de IA que aceleran la producción), pero el diagnóstico del problema real, la identificación de la solución correcta y la capacidad de cambiar de opinión ante nueva evidencia son capacidades que no se automatizan y que los clientes pagan cada vez más.

La paradoja del cliente: el cliente tiene más información sobre su negocio que tú, pero menos capacidad de pensar sobre él con distancia. El valor del consultor externo es precisamente que no tiene los sesgos del insider, no tiene miedo de decir lo que el equipo interno no puede decir, y puede aplicar patrones de otros contextos que el cliente no conoce.

**Parte 2 — Los componentes del pensamiento crítico aplicado a la consultoría**
Las habilidades específicas que componen el pensamiento crítico de un consultor:

**Cuestionar el brief:**
La habilidad de distinguir el problema que el cliente describe (el síntoma o la solución que ya tiene en mente) del problema real que necesita resolver. El cliente que pide "rediseña nuestra web" cuando su problema real es que el proceso de ventas no convierte. El cliente que pide "escribe nuestra estrategia de contenidos" cuando su problema real es que no saben a quién le venden.

**Pensamiento estructurado:**
Los frameworks que organizan el análisis antes de buscar soluciones: el árbol de problemas, el MECE (Mutuamente Excluyente, Colectivamente Exhaustivo) de McKinsey, el Issue Tree para descomponer problemas complejos en sus partes.

**Razonamiento con datos incompletos:**
Cómo llegar a conclusiones útiles cuando la información no es perfecta, cómo comunicar el nivel de confianza en una recomendación y cuándo hacer más investigación vs. cuándo la información disponible es suficiente para decidir.

**Gestión del sesgo de confirmación:**
Cómo evitar que el cliente te contrate para confirmar lo que ya piensa, cómo presentar hallazgos que contradicen la hipótesis del cliente y cómo construir la relación de confianza que permite decir "creo que estás mirando el problema equivocado".

**Parte 3 — Cómo posicionarte como alguien que piensa, no que ejecuta**
Los cambios concretos en cómo te presentas, cómo haces las propuestas y cómo ejecutas el trabajo:
- El diagnóstico previo al proposal: dedicar tiempo antes de presentar precio a entender el problema real, y hacerlo visible para el cliente
- La pregunta que diferencia: "Antes de que te proponga nada, ¿me puedes contar qué ha fallado con las soluciones que has intentado antes?"
- El caso de estudio reescrito: de "diseñé la web de X" a "X tenía un problema de conversión y yo identifiqué que el problema estaba en la propuesta de valor, rediseñé la propuesta de valor primero y luego la web, y la conversión aumentó un 40%"
- Las reuniones de kick-off como sesiones de diagnóstico: las preguntas que revelan el problema real antes de empezar a trabajar

**Parte 4 — Los entregables del consultor que piensa**
Los formatos de entrega que comunican que el valor está en el análisis, no en la producción:
- El memo de diagnóstico: un documento de 2-3 páginas antes de empezar el proyecto que documenta el problema identificado, las hipótesis y el plan de trabajo
- La recomendación con alternativas descartadas: explicar por qué elegiste la solución A y descartaste B y C es la prueba de que has pensado, no solo ejecutado
- El plan de implementación con riesgos: anticipar los obstáculos que el cliente no ha considerado y tener un plan para ellos
- El seguimiento post-entrega: los consultores que vuelven a medir si su solución funcionó son los que generan referencias y repetición de negocio

**Entregable**
Para mi especialidad y tipo de clientes, diseña: el proceso de diagnóstico que aplicaré en las primeras conversaciones con un nuevo cliente, las tres preguntas que más frecuentemente revelan que el cliente está pidiendo la solución equivocada, y el formato del memo de diagnóstico que presentaré antes de cada propuesta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollar el pensamiento crítico que transforma un freelance ejecutor en un consultor que cobra por pensar',
                'vote_score'        => 46,
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
