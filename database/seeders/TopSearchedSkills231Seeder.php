<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills231Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Aprendizaje continuo en marketing: mantenerse al día',
                'description'       => 'El marketing cambia más rápido que cualquier otra disciplina: las fuentes de información, los procesos de aprendizaje y las comunidades que mantienen al profesional de marketing actualizado sin consumir todas las horas del día.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en aprendizaje continuo y desarrollo profesional para marketers con experiencia ayudando a profesionales del marketing a mantenerse actualizados en una disciplina que cambia constantemente sin que el proceso de aprendizaje se convierta en un trabajo adicional. Necesito tu ayuda para diseñar mi sistema de aprendizaje continuo como profesional de marketing.

Mi contexto:
- Especialidad de marketing en la que trabajo: [SEO, performance, brand, contenidos, growth, CRM, producto, etc.]
- Años de experiencia y nivel actual: [junior / mid / senior / manager / director]
- Tiempo disponible para el aprendizaje continuo cada semana: [menos de dos horas / dos a cinco horas / más de cinco horas]
- Método de aprendizaje que mejor me funciona: [leer artículos / ver vídeos / escuchar podcasts / cursos estructurados / aprender haciendo / comunidades de práctica]
- Principal reto del aprendizaje continuo ahora mismo: [no sé qué fuentes son realmente buenas / me pierdo en demasiado contenido / aprendo pero no aplico / no tengo tiempo estructurado para aprender / el sector cambia tan rápido que cuando termino un curso ya está desactualizado]

Con ese contexto, dame:

1. POR QUÉ EL MARKETING REQUIERE UN APRENDIZAJE MÁS ACTIVO QUE OTRAS DISCIPLINAS
¿Por qué el profesional de marketing necesita un sistema activo de aprendizaje continuo cuando en otras profesiones el conocimiento base dura más? Explícame las razones específicas del marketing: el cambio constante de las plataformas de publicidad y sus algoritmos (lo que funcionaba en Meta Ads hace un año puede ser una práctica penalizada hoy), la aparición de nuevos canales y formatos que redistribuyen el presupuesto y la atención del usuario (el ciclo de vida del canal que pasa de early adopter advantage a commodity), la evolución de los datos y la medición (el mundo post-cookies, la IA en la atribución, los nuevos modelos de medición), y la IA que está cambiando el stack de herramientas del marketer más rápido de lo que ninguna tecnología anterior lo había hecho. ¿Cuál es el coste real de no actualizarse en marketing?

2. LAS FUENTES DE INFORMACIÓN DE REFERENCIA: EL FILTRO CORRECTO
¿Cuáles son las fuentes de información sobre marketing que realmente merecen el tiempo de atención y cómo diferencio las que tienen valor real de las que producen ruido? Dame el mapa de fuentes de información para el marketer: los newsletters de marketing que tienen más señal y menos ruido según la especialidad (los que escriben profesionales con experiencia práctica real versus los que agregan contenido de terceros sin perspectiva propia), los blogs y publicaciones de referencia según la especialidad (SEO, performance, brand, growth, CRM), los podcasts de marketing que van más allá de las entrevistas de éxito y entran en los mecanismos reales, las cuentas de Twitter y LinkedIn que publican análisis de alta calidad, y los informes de la industria que son referencia real (los que uso para benchmarking y para argumentar decisiones estratégicas). ¿Cómo evalúo la calidad de una nueva fuente antes de invertir tiempo en seguirla?

3. EL SISTEMA DE CONSUMO DE INFORMACIÓN: CÓMO PROCESAR SIN AHOGARSE
¿Cómo diseño el proceso de consumo de información sobre marketing que me mantiene actualizado sin que consuma más tiempo del que tengo disponible? Dame el sistema de gestión de información del marketer: la curación proactiva de fuentes (por qué suscribirme a menos fuentes de mejor calidad es más efectivo que seguir a muchas), el procesamiento por lotes en lugar de consumo continuo (los momentos del día o de la semana dedicados a leer y escuchar, sin revisar el email de newsletters en medio del trabajo de producción), el sistema de captura de lo que vale la pena recordar (el gestor de notas o el segundo cerebro que hace que la información que leo se pueda recuperar cuando la necesito), y el proceso de síntesis regular (la reunión mental semanal donde convierto lo que leí en conclusiones aplicables a mi trabajo actual).

4. EL APRENDIZAJE ESTRUCTURADO: CURSOS Y CERTIFICACIONES QUE VALEN LA PENA
¿Qué cursos y certificaciones de marketing merecen la inversión de tiempo y a veces de dinero para el profesional en distintas etapas de su carrera? Dame el mapa de aprendizaje estructurado en marketing: las certificaciones gratuitas de las plataformas que tienen valor real (Google Ads, Meta Blueprint, HubSpot Academy, Semrush Academy) versus las que son principalmente un ejercicio de marketing del proveedor, los cursos de pago que tienen mejor ratio entre precio y calidad en distintas especialidades, las formaciones universitarias y de posgrado que vale la pena considerar en qué momento de la carrera, y cuándo tiene sentido la formación in-company versus el curso externo. ¿Cómo evalúo si un curso de marketing está actualizado antes de empezarlo?

5. LAS COMUNIDADES DE PRÁCTICA: APRENDER CON Y DE OTROS MARKETERS
¿Qué comunidades de marketers generan el aprendizaje más valioso y cómo participo en ellas para aprender más que observando? Dame el mapa de comunidades de aprendizaje para marketers: las comunidades online de referencia según la especialidad (los grupos de Slack, Discord y LinkedIn de SEO, performance, growth, CRM, brand), la diferencia entre las comunidades grandes y ruidosas y las pequeñas y de alta calidad donde el aprendizaje real ocurre en las conversaciones, cómo participo de forma activa en lugar de pasiva (la pregunta que genera conversación de calidad, el aporte de perspectiva propia que construye reputación mientras aprendo), los eventos y conferencias de marketing que son los más valiosos para el networking y el aprendizaje según la especialidad, y cómo creo un grupo de pares (mastermind, grupo de benchmarking) que sea más valioso que cualquier comunidad abierta.

6. APRENDER HACIENDO: LA PRÁCTICA COMO ACELERADOR DEL APRENDIZAJE
¿Cómo diseño el aprendizaje experimental en marketing que convierte el conocimiento teórico en habilidad práctica más rápido que cualquier curso? Dame el framework de aprendizaje experimental para marketers: el proyecto personal o el side project donde puedo experimentar sin las restricciones del presupuesto y los procesos de aprobación de la empresa (el blog propio donde practico SEO, la newsletter propia donde aprendo email marketing, la cuenta de publicidad propia donde pruebo nuevas funcionalidades), cómo diseño los experimentos en el trabajo diario de forma que cada campaña o iniciativa sea una oportunidad de aprendizaje estructurado (el test, la hipótesis, la medición y la conclusión documentada), y cómo el repositorio de experimentos y aprendizajes que construyo a lo largo del tiempo se convierte en el activo profesional más valioso de mi carrera.

7. MANTENERSE AL DÍA CON LA IA EN MARKETING: EL CAPÍTULO URGENTE
¿Cómo aprendo a usar la inteligencia artificial en el trabajo de marketing de forma que no me quede atrás en la transformación más rápida que ha vivido el sector? Dame el plan de aprendizaje de IA aplicada a marketing: cómo evalúo qué herramientas de IA para marketing vale la pena aprender ahora versus cuáles son demasiado tempranas para adoptar (el criterio de la herramienta que ya tiene suficiente madurez para generar valor real en mi flujo de trabajo), las aplicaciones de IA en mi especialidad de marketing que más impacto tienen ahora mismo (la generación y optimización de contenido, la automatización de la personalización, el análisis de datos con IA, la generación de imágenes y vídeo), cómo aprendo IA de forma práctica sin necesitar un fondo técnico (los recursos de aprendizaje de IA para no-técnicos que son honestos sobre lo que la IA puede y no puede hacer), y cómo desarrollo el criterio para evaluar cuándo la IA mejora mi trabajo y cuándo simplemente lo complica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el sistema de aprendizaje continuo del marketer: fuentes de calidad, procesamiento de información, aprendizaje estructurado y práctica experimental.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Aprendizaje técnico acelerado: aprender nuevos lenguajes y frameworks',
                'description'       => 'El developer que aprende un nuevo lenguaje en semanas: los principios del aprendizaje acelerado aplicados a la programación, el proyecto como herramienta de aprendizaje y las comunidades que aceleran el proceso.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en aprendizaje acelerado de habilidades técnicas con experiencia ayudando a developers a aprender nuevos lenguajes, frameworks y tecnologías de forma eficiente. Necesito tu ayuda para diseñar mi proceso de aprendizaje técnico cuando tengo que dominar una nueva tecnología.

Mi contexto:
- Nivel actual como developer: [junior / mid / senior / staff / principal]
- Lenguajes y frameworks que ya domino: [lista los principales]
- Tecnología o habilidad técnica que quiero aprender ahora: [lenguaje, framework, paradigma, área técnica como ML, infra, mobile, etc.]
- Razón por la que quiero aprenderla: [requisito del trabajo actual / cambio de rol / proyecto personal / mantenerse actualizado / cambio de stack de la empresa]
- Tiempo disponible para el aprendizaje: [unas pocas horas a la semana / tiempo completo durante un período / aprendizaje integrado en el trabajo]

Con ese contexto, dame:

1. CÓMO LOS DEVELOPERS APRENDEN MÁS RÁPIDO: LOS PRINCIPIOS DEL APRENDIZAJE TÉCNICO
¿Cuáles son los principios del aprendizaje acelerado que funcionan específicamente para habilidades técnicas de programación? Explícame los principios con evidencia empírica: el aprendizaje activo versus pasivo (por qué leer documentación y ver tutoriales es mucho menos efectivo que escribir código desde el primer día), la importancia del proyecto concreto como motor de aprendizaje (la diferencia entre aprender una serie de capítulos sobre el lenguaje y construir algo que funcione con ese lenguaje), el principio de la dificultad deseable (la zona de aprendizaje donde el problema es suficientemente difícil para que aprender de él sea necesario pero no tan difícil que el bloqueo sea permanente), la repetición espaciada aplicada a los conceptos técnicos (cómo revisar los conceptos en el momento justo antes de que se olvidan), y por qué el developer con más experiencia previa aprende más rápido un nuevo lenguaje (y cómo explotar ese efecto de transferencia).

2. LA ESTRATEGIA DE LAS PRIMERAS HORAS: CÓMO ARRANCAR CON UN NUEVO LENGUAJE
¿Cómo estructuro las primeras ocho a diez horas de aprendizaje de un nuevo lenguaje para maximizar lo que aprendo y minimizar el tiempo perdido? Dame el proceso de arranque de un nuevo lenguaje: la primera hora donde instalo el entorno y escribo el primer programa que funciona (por qué el Hello World y los primeros ejemplos sencillos son importantes para establecer el ciclo de feedback rápido), la diferencia entre las particularidades sintácticas del lenguaje que debo aprender desde el inicio (el sistema de tipos, el manejo de errores, las estructuras de datos nativas) versus los conceptos que puedo aprender después (las librerías avanzadas, los patrones específicos del ecosistema), el primer proyecto mínimo que me permite aplicar lo aprendido de forma que produzca algo visible, y cómo uso mi conocimiento de otros lenguajes para acelerar el aprendizaje (la transferencia de conceptos y la identificación de las diferencias que importan).

3. EL PROYECTO COMO MOTOR DE APRENDIZAJE: CÓMO ELEGIRLO Y EJECUTARLO
¿Qué tipo de proyecto acelera más el aprendizaje de una nueva tecnología y cómo lo ejecuto para extraer el máximo aprendizaje? Dame el framework del proyecto de aprendizaje técnico: los criterios para elegir el proyecto correcto (suficientemente complejo para que requiera aprender conceptos no triviales, suficientemente acotado para poder terminarlo en el tiempo disponible, idealmente algo que quiero o necesito para mí mismo), las fases del proyecto de aprendizaje (el MVP que funciona aunque sea feo, la refactorización que aplica las mejores prácticas del lenguaje, la extensión que añade complejidad real), cómo uso las dificultades del proyecto como guía de aprendizaje (el problema que no sé resolver me dice exactamente qué tengo que aprender a continuación), y cómo documento el proceso de aprendizaje para que el conocimiento se consolide y sea recuperable.

4. LOS RECURSOS DE APRENDIZAJE TÉCNICO: CÓMO ELEGIRLOS Y CUÁNDO USARLOS
¿Cómo elijo entre los cientos de recursos disponibles para aprender una tecnología y cuándo usar cada tipo? Dame el mapa de recursos técnicos y su momento ideal: la documentación oficial (cuándo es el mejor recurso y cuándo es demasiado densa para empezar), los libros técnicos de referencia (cuáles son los de referencia para las tecnologías principales y cuándo tiene sentido leer un libro versus buscar en la documentación), los tutoriales en vídeo y los cursos online (cuándo aceleran el arranque y cuándo generan aprendizaje pasivo que no se traduce en habilidad), los proyectos de código abierto como recurso de aprendizaje (cómo leer código de producción de calidad para aprender los patrones del ecosistema), y Stack Overflow, GitHub Copilot y los LLMs como aceleradores del aprendizaje (cómo los uso sin que sustituyan el proceso de comprensión).

5. LAS COMUNIDADES TÉCNICAS: DÓNDE APRENDO MÁS RÁPIDO CON OTROS
¿Qué comunidades de developers generan más aprendizaje y cómo participo para aprender más que observando? Dame el mapa de comunidades técnicas según la tecnología: las comunidades de Discord y Slack de los lenguajes y frameworks más importantes, los foros técnicos donde la calidad de las respuestas es alta (Stack Overflow para dudas concretas, el subreddit del lenguaje para conversaciones más generales, el GitHub Discussions del proyecto para cuestiones específicas del ecosistema), los meetups y conferencias de la tecnología que aprendo (cómo uso el evento como motivador y como fuente de networking con developers más avanzados), y cómo participo de forma que aprendo más (la pregunta bien formulada que genera una respuesta de calidad, la contribución pequeña a un proyecto open source que me obliga a entender el código de producción).

6. APRENDER CON LA IA: CÓMO CLAUDE Y GITHUB COPILOT ACELERAN EL APRENDIZAJE TÉCNICO
¿Cómo uso los asistentes de IA de programación para aprender más rápido sin que sustituyan el proceso de comprensión que es el objetivo real? Dame el protocolo de uso de IA para el aprendizaje técnico: cómo uso un LLM como tutor interactivo que explica conceptos en el nivel de profundidad que necesito (la ventaja sobre la documentación que no adapta el nivel de explicación), cómo uso GitHub Copilot como par de programación que me muestra el patrón correcto sin escribirme el código que debería escribir yo (la diferencia entre usar Copilot para aprender y usarlo para evitar aprender), cómo diseño los ejercicios de comprensión cuando uso IA (el código que genera la IA que debo ser capaz de explicar línea por línea antes de aceptar que lo he aprendido), y los riesgos del uso de IA en el aprendizaje técnico (la ilusión de competencia cuando haces funcionar el código sin entender por qué funciona).

7. DE LA HABILIDAD NUEVA AL NIVEL PRODUCTIVO: LAS ETAPAS DEL APRENDIZAJE TÉCNICO
¿Cuánto tiempo tarda realísticamente un developer en pasar de cero a productivo en una nueva tecnología y qué hitos marcan el progreso? Dame el mapa de etapas del aprendizaje técnico: la etapa de arranque (los primeros dos o tres días: comprendo la sintaxis básica y puedo escribir código simple que funciona), la etapa de comprensión (la primera semana a dos semanas: entiendo las construcciones fundamentales del lenguaje y los patrones básicos del ecosistema), la etapa de productividad básica (el primer mes: puedo completar tareas concretas sin necesitar buscar la sintaxis básica constantemente), la etapa de fluidez (los tres a seis meses: escribo código idiomático en el lenguaje y empiezo a entender sus convenciones y su filosofía), y la etapa de dominio (el primer o segundo año: contribuyo con insights propios sobre el lenguaje y puedo ayudar a otros). ¿Cómo acelero el paso entre etapas con práctica deliberada?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el proceso de aprendizaje acelerado de nuevas tecnologías: estrategia de arranque, proyecto de aprendizaje, recursos y comunidades técnicas.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Desarrollo de criterio estético y educación visual',
                'description'       => 'El diseñador que entrena su ojo: las prácticas de observación, el análisis de referentes y el proceso de desarrollo del gusto estético que distingue a los diseñadores con más de diez años de experiencia de los que empiezan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en educación del diseño y en el desarrollo del criterio estético con experiencia ayudando a diseñadores de distintos niveles a desarrollar el ojo que diferencia el trabajo bueno del trabajo excelente. Necesito tu ayuda para diseñar mi proceso de educación visual y desarrollo del criterio estético.

Mi contexto:
- Especialidad de diseño: [diseño gráfico, UX/UI, diseño de producto, branding, motion, ilustración, tipografía, etc.]
- Años de experiencia y nivel actual: [estudiante / junior / mid / senior]
- Autopercepción del criterio estético actual: [sé que algo está mal pero no puedo articular por qué / tengo criterio claro pero me cuesta comunicarlo / mi criterio es sólido en algunos aspectos pero débil en otros]
- Influencias estéticas actuales: [describe de dónde viene la mayor parte de tu inspiración visual actual]
- Principal bloqueo en el desarrollo del criterio: [no sé cómo analizar el trabajo de otros de forma estructurada / consumo mucho pero no sé si estoy absorbiendo bien / mi trabajo se parece demasiado a las tendencias del momento / quiero ampliar mis referencias más allá del design de tech]

Con ese contexto, dame:

1. QUÉ ES EL CRITERIO ESTÉTICO Y POR QUÉ SE DESARROLLA MÁS LENTO QUE LA HABILIDAD TÉCNICA
¿Por qué el criterio estético tarda años en desarrollarse y qué lo distingue del conocimiento técnico del diseño? Explícame la naturaleza del criterio estético: la diferencia entre saber las reglas del diseño (que se aprende rápido) y saber cuándo romperlas con intención (que requiere miles de horas de observación y análisis), por qué el diseñador junior que copia los referentes del momento tiene buen gusto temporal pero frágil (el criterio atado a las tendencias se queda obsoleto cuando las tendencias cambian), la relación entre el criterio estético y la velocidad de toma de decisiones de diseño (el diseñador senior toma decisiones más rápido porque el criterio hace que las opciones se reduzcan antes de empezar), y por qué el desarrollo del criterio requiere exposición deliberada y reflexiva a trabajos de calidad en lugar de consumo pasivo de inspiración en Dribbble o Behance.

2. EL ARCHIVO DE REFERENCIAS: CÓMO CONSTRUIR UNA BIBLIOTECA VISUAL ÚTIL
¿Cómo construyo un archivo de referencias visuales que me hace mejor diseñador versus uno que es solo un coleccionismo de imágenes que no uso? Dame el sistema del archivo de referencias del diseñador: la diferencia entre el guardado pasivo (el Pinterest con miles de imágenes que nunca consulto) y el archivo activo (las referencias que entiendo por qué las guardo y que consulto cuando diseño), los criterios para seleccionar qué entra en el archivo (no lo que me gusta instintivamente sino lo que me enseña algo que quiero aprender a hacer), la organización del archivo por categorías que reflejen cómo pienso sobre el diseño (no por estética sino por problema resuelto, por técnica, por concepto), y las plataformas y herramientas de curación de referencias que funcionan mejor según el tipo de trabajo.

3. EL ANÁLISIS DE OBRA: CÓMO APRENDER MIRANDO CON INTENCIÓN
¿Cómo analizo el trabajo de diseñadores que admiro de forma que el análisis se convierte en aprendizaje aplicable? Dame el proceso de análisis de obra del diseñador: las preguntas que hago sobre cada pieza que estudio (qué problema resolvía el diseño, qué decisiones tomó el diseñador y por qué, qué habría hecho yo diferente, qué técnica o principio puedo extraer para aplicar en mi trabajo), la práctica del análisis comparativo (la comparación entre dos soluciones distintas al mismo problema que revela las decisiones que hacen que una sea mejor), el análisis histórico que pone el trabajo en su contexto (por qué el diseño de una época tiene sentido dentro de las condiciones culturales y tecnológicas de ese momento), y la práctica de reproducción analítica (el ejercicio de recrear el trabajo de un diseñador que admiro para entender sus decisiones desde dentro).

4. AMPLIAR LAS REFERENCIAS: MÁS ALLÁ DEL DESIGN DE TECH Y LAS TENDENCIAS
¿Cómo amplío mis referencias visuales más allá de las tendencias del diseño de tecnología para desarrollar un criterio más profundo y original? Dame el mapa de referencias visuales que los diseñadores con criterio amplio conocen: la tipografía del siglo XX y los sistemas gráficos que siguen siendo referencia (la escuela suiza, el modernismo, la Bauhaus y sus principios), el cartelismo y la ilustración de las décadas de 1950 a 1980 que resuelven los mismos problemas de comunicación con menos recursos, la fotografía y las artes visuales que nutren el ojo del diseñador más allá de lo gráfico, el diseño industrial y de producto que enseña a pensar en la forma desde la función, la arquitectura y el espacio que desarrolla la sensibilidad por la proporción y la escala, y las culturas visuales no occidentales que amplían el vocabulario gráfico más allá de la tradición europea y norteamericana.

5. LAS PRÁCTICAS DELIBERADAS PARA DESARROLLAR EL OJO: LOS EJERCICIOS
¿Qué ejercicios concretos desarrollan el criterio estético de forma más efectiva que el consumo pasivo de inspiración? Dame el programa de práctica deliberada del diseñador: la práctica del daily sketch o del análisis diario de una pieza (el hábito de cinco a diez minutos que acumula miles de observaciones a lo largo del año), el ejercicio de redesign crítico (tomo un diseño que creo que podría mejorarse y lo rediseño explicando cada decisión), el proyecto de estudio de un maestro (un mes dedicado a analizar en profundidad el trabajo de un diseñador que admiro: sus principios, sus decisiones recurrentes, su evolución), el ejercicio de diseñar con restricciones que obligan a solucionar el problema de formas que no haría por defecto (la restricción de paleta, de tipografía única, de elementos básicos), y la práctica de articular en palabras por qué un diseño funciona o no funciona.

6. RECIBIR Y DAR FEEDBACK DE DISEÑO: LA PRÁCTICA QUE MÁS DESARROLLA EL CRITERIO
¿Por qué recibir y dar feedback de diseño de calidad es una de las prácticas más poderosas para desarrollar el criterio estético? Dame el proceso del feedback de diseño como herramienta de desarrollo: cómo recibo el feedback que desarrolla el criterio (la diferencia entre el feedback que me dice qué cambiar y el que me explica por qué el diseño no está funcionando y me da criterios para mejorar), cómo doy feedback de diseño que es constructivo y específico (el vocabulario del feedback de diseño que va más allá de "me gusta" o "no me gusta"), las comunidades de crítica de diseño donde puedo obtener feedback de profesionales con más experiencia, y cómo diseño las sesiones de crítica de diseño dentro del equipo que desarrollan el criterio colectivo y no solo el individual.

7. EL CRITERIO ESTÉTICO EN ACCIÓN: CÓMO LO APLICO EN EL TRABAJO DIARIO
¿Cómo traduzco el criterio estético que estoy desarrollando en decisiones de diseño más rápidas y más justificadas en el trabajo? Dame el proceso de aplicación del criterio en el trabajo diario: cómo uso el archivo de referencias en el proceso de diseño (cuándo consulto referencias para inspirarme versus cuándo las consulto para validar una decisión), cómo articulo el criterio estético en las presentaciones a clientes y stakeholders (la diferencia entre "prefiero este diseño" y "este diseño resuelve mejor el problema porque"), cómo el criterio estético acelera el proceso de diseño (por qué el diseñador con criterio sólido genera menos versiones antes de llegar a la solución correcta), y cómo sigo desarrollando el criterio una vez que ya tengo un nivel de seniority establecido (el riesgo del criterio que se congela y el proceso para seguir ampliándolo).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollar el criterio estético del diseñador: archivo de referencias, análisis de obra, prácticas deliberadas y traducción del criterio en decisiones de diseño más rápidas.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Aprendizaje de ventas: la academia del comercial',
                'description'       => 'El vendedor que mejora constantemente su habilidad: los libros, los podcasts y las comunidades de ventas que marcan la diferencia, y el proceso de práctica deliberada que convierte el conocimiento teórico en habilidad práctica.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en el desarrollo de habilidades de ventas con experiencia ayudando a profesionales del área comercial a mejorar su desempeño a través del aprendizaje estructurado y la práctica deliberada. Necesito tu ayuda para diseñar mi plan de desarrollo como profesional de ventas.

Mi contexto:
- Rol actual en ventas: [SDR / BDR / AE / senior AE / account manager / sales manager / director de ventas]
- Tipo de ventas que hago: [transaccional / ciclo corto / ciclo largo enterprise / SaaS / servicios / consultoría]
- Años de experiencia en ventas: [menos de dos / dos a cinco / más de cinco / más de diez]
- Área de ventas donde siento que tengo más margen de mejora: [prospección y outreach / discovery / presentaciones y demos / negociación / cierre / gestión de pipeline / liderazgo del equipo]
- Recursos de aprendizaje que uso actualmente: [ninguno / leo algunos libros / escucho podcasts / tengo un manager que me hace coaching / hago roll plays]

Con ese contexto, dame:

1. POR QUÉ LAS VENTAS SON UNA HABILIDAD QUE SE PUEDE APRENDER Y PRACTICAR
¿Por qué las ventas son una habilidad que mejora con el aprendizaje estructurado y la práctica deliberada, y no solo con la experiencia acumulada de hacer llamadas? Explícame la naturaleza del aprendizaje en ventas: la diferencia entre el vendedor que lleva diez años haciendo el mismo proceso sin reflexionarlo (cuya experiencia real es un año repetido diez veces) y el vendedor que lleva dos años con un sistema de mejora deliberada (que ha comprimido en dos años el aprendizaje que otro tardaría una década), el papel del feedback en el desarrollo del vendedor (por qué el vendedor sin feedback aprende mucho más lento que el que graba sus llamadas y las analiza), y los elementos de la habilidad de ventas que se pueden descomponer y practicar de forma aislada (el tonomy del discovery, la gestión de objeciones, el lenguaje corporal en las presentaciones).

2. LOS LIBROS DE VENTAS QUE MERECEN LEERSE: LA LISTA CURADA
¿Qué libros de ventas tienen el mayor ratio entre tiempo invertido y habilidad adquirida para el profesional en distintas etapas de su carrera? Dame la lista curada de libros de ventas por categoría: los libros fundamentales que todo vendedor debería leer (Spin Selling, The Challenger Sale, Fanatical Prospecting, Never Split the Difference para la negociación) con una línea de por qué cada uno importa y qué habilidad específica desarrolla, los libros para vendedores senior y líderes de ventas (los que van más allá de la táctica y abordan la estrategia comercial y la dirección de equipos), y los libros de psicología y comportamiento humano que mejoran la comprensión del proceso de compra (Influence de Cialdini, Thinking Fast and Slow de Kahneman y lo que enseñan al vendedor sobre los sesgos del comprador).

3. LOS PODCASTS Y CONTENIDO DE VENTAS QUE AÑADEN VALOR REAL
¿Qué podcasts y creadores de contenido de ventas ofrecen formación práctica de alta calidad versus los que son solo motivación superficial? Dame el mapa de contenido de ventas de calidad: los podcasts de ventas donde los entrevistados explican cómo construyeron sistemas y procesos reales en lugar de contar historias de éxito sin el mecanismo, los newsletters de ventas escritos por practitioners con resultados demostrables, las cuentas de LinkedIn de vendedores que publican perspectiva propia basada en experiencia real (no los que agregan listicles de otros), y los canales de YouTube con análisis de técnicas de ventas y ejemplos de llamadas y demostraciones reales. ¿Cómo evalúo si un recurso de ventas tiene calidad real antes de invertir tiempo en él?

4. EL ROLE PLAY Y LA GRABACIÓN DE LLAMADAS: LAS PRÁCTICAS QUE MÁS DESARROLLAN
¿Por qué el role play y la grabación y análisis de llamadas desarrollan la habilidad de ventas más rápido que cualquier otro recurso? Dame el proceso de práctica deliberada para vendedores: el role play estructurado que desarrolla habilidades específicas (cómo diseño el escenario del role play para practicar el manejo de una objeción concreta versus el role play genérico que no enseña nada nuevo), el protocolo de grabación y análisis de llamadas (qué busco cuando escucho mis propias llamadas, las preguntas que me hago sobre cada parte de la conversación, cómo uso herramientas de análisis de conversaciones como Gong o Chorus para aprender más rápido), y cómo creo el hábito de práctica deliberada en el equipo de ventas (el programa de role play semanal, las sesiones de escucha de llamadas, el peer coaching entre vendedores del mismo equipo).

5. EL COACHING Y LA MENTORÍA EN VENTAS: CÓMO ACCEDER A ELLOS
¿Cómo accedo a coaching y mentoría de ventas de calidad sin tener un manager que sea un buen coach? Dame el mapa de acceso al coaching y la mentoría en ventas: cómo extraigo el máximo del manager actual aunque no sea un coach excepcional (las preguntas que hago en el one-on-one que convierten la reunión en una sesión de desarrollo), cómo accedo a coaching externo de ventas de forma coste-eficiente (los programas de grupo versus el coaching individual, los coaches de ventas con track record demostrable versus los que solo tienen credibilidad teórica), los programas de mentoría en comunidades de ventas donde vendedores senior hacen mentoring a vendedores más junior, y cómo creo una red de pares de ventas con los que compartir llamadas, hacer role plays y benchmarking de forma regular.

6. LAS METODOLOGÍAS DE VENTAS: CUÁL APRENDER Y CUÁNDO
¿Cuáles son las principales metodologías de ventas y cuándo tiene sentido invertir en aprender una de forma profunda? Dame el análisis de las metodologías de ventas principales: MEDDIC y MEDDPICC (para ventas enterprise complejas donde la cualificación rigurosa del deal es crítica), Challenger Sale (para ventas donde el vendedor aporta perspectiva y educa al comprador), Solution Selling (para ventas consultivas centradas en el diagnóstico del problema del cliente), SPIN Selling (para el desarrollo del discovery con preguntas de situación, problema, implicación y necesidad-pago), y el Inbound Sales de HubSpot (para entornos de inbound donde el comprador ya investigó antes de contactar). ¿Cuándo es mejor aprender una metodología profunda versus conocer los principios de varias?

7. EL PLAN DE DESARROLLO DEL VENDEDOR: LOS NOVENTA DÍAS SIGUIENTES
¿Cómo estructuro un plan de desarrollo de ventas para los próximos noventa días que genere mejora real y medible? Dame el plan de desarrollo comercial: la evaluación honesta de las habilidades de ventas que más impactan en mis resultados (el área donde si mejoro un veinte por ciento tendré el mayor impacto en los números), el recurso de aprendizaje principal para ese área en los próximos noventa días (un libro, un curso, un coach), la práctica deliberada semanal que convierte ese aprendizaje en habilidad (el role play específico, las llamadas grabadas que analizo, el cambio concreto en mi proceso de ventas que estoy experimentando), y las métricas que me dicen si el aprendizaje está generando mejora real (el ratio de conversión de discovery a propuesta, el porcentaje de deals que avanzan a la siguiente etapa, el deal size promedio).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el plan de desarrollo de habilidades del vendedor: libros, podcasts, role play, metodologías y los noventa días de práctica deliberada que generan mejora medible.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Desarrollo del criterio de producto: cómo se educa el product sense',
                'description'       => 'El product sense no se aprende en un curso: las prácticas de análisis de productos, los ejercicios de product critique y el proceso de desarrollar el juicio que permite tomar buenas decisiones de producto con información incompleta.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en el desarrollo del criterio de producto con experiencia ayudando a product managers a desarrollar el product sense que los distingue de los PMs que solo ejecutan procesos. Necesito tu ayuda para diseñar mi proceso de desarrollo del criterio de producto.

Mi contexto:
- Nivel actual como PM: [APM / PM / senior PM / principal PM / pasando de otra área a producto]
- Tipo de producto en el que trabajo: [B2B SaaS, consumer, marketplace, plataforma, etc.]
- Autopercepción del product sense actual: [sé ejecutar el proceso de PM pero me cuesta la intuición de producto / tengo criterio en algunos tipos de producto pero no en otros / en general creo que mi product sense es débil / soy bueno con datos pero no con la intuición cualitativa]
- Principales productos que usas y analizas actualmente: [describe los dos o tres productos que más admiras y cuáles te resultan decepcionantes]
- Principal objetivo: [aprobar la entrevista de product sense / mejorar la calidad de mis decisiones de producto / desarrollar el criterio que me permita avanzar a roles más senior]

Con ese contexto, dame:

1. QUÉ ES EL PRODUCT SENSE Y POR QUÉ ES TAN DIFÍCIL DE DESARROLLAR
¿Qué es exactamente el product sense y por qué es la habilidad más difícil de enseñar y de aprender para un product manager? Explícame la naturaleza del product sense: la diferencia entre el conocimiento de producto (las metodologías, los frameworks, los procesos de PM) y el juicio de producto (saber cuándo aplicarlas y cuándo ignorarlas), por qué el product sense no es un conjunto de reglas sino la capacidad de tener una perspectiva fundamentada sobre lo que los usuarios necesitan y lo que hará que el producto tenga éxito, la relación entre el product sense y la empatía con el usuario (el PM que genuinamente entiende los problemas del usuario desarrolla mejor product sense que el que los infiere de datos), y por qué el product sense que funciona en un tipo de producto puede no transferirse a otro (el PM con excelente product sense para consumer puede ser mediocre en enterprise).

2. EL PRODUCT CRITIQUE: LA PRÁCTICA QUE MÁS DESARROLLA EL CRITERIO
¿Cómo analizo productos de forma que desarrolla el criterio de producto en lugar de ser una observación superficial? Dame el proceso del product critique estructurado: las preguntas que hago sobre cada producto que analizo (cuál es el usuario objetivo y qué problema resuelve, cuáles son las decisiones de diseño que me llaman la atención, por qué el equipo de producto tomó esas decisiones en lugar de otras, qué haría yo diferente y por qué, cómo este producto refleja la estrategia de la empresa), cómo analizo los flujos de onboarding (la primera experiencia del usuario como el lugar donde el PM puede demostrar o destruir el product sense con cada micro-decisión), cómo analizo las estrategias de monetización y los modelos de negocio que los productos reflejan en su diseño, y cómo documento los análisis de forma que el aprendizaje sea acumulable.

3. COPIAR LOS MEJORES: EL ESTUDIO EN PROFUNDIDAD DE PRODUCTOS DE REFERENCIA
¿Cómo analizo en profundidad los productos que más admiro para entender los principios de decisión que los hacen excelentes? Dame el proceso de estudio en profundidad de un producto de referencia: cómo selecciono el producto que voy a estudiar (el producto que resuelve un problema similar al mío, el producto famoso por su excelencia de producto en mi tipo de mercado), cómo executo el análisis completo (el onboarding completo como usuario nuevo, el análisis de cada feature principal desde la perspectiva del PM que la diseñó, el análisis de las decisiones de qué no está en el producto), cómo reconstruyo las decisiones de producto que no puedo ver desde fuera (las entrevistas de PM del equipo en podcasts, los blog posts del equipo de producto, los documentos de estrategia que se han hecho públicos), y cómo sintetizo los principios aprendidos de forma que los puedo aplicar en mi trabajo.

4. LEER SOBRE PRODUCTO: LOS RECURSOS QUE DESARROLLAN EL CRITERIO
¿Qué lecturas y recursos de producto desarrollan el criterio de forma más efectiva que los libros de metodología de PM? Dame el mapa de recursos de producto para desarrollar el criterio: los PMs que escriben sobre sus decisiones de producto de forma que revela el proceso de pensamiento (los blogs de PMs de empresas como Stripe, Linear, Figma, Notion que comparten cómo piensan el producto), los libros sobre la historia de productos y empresas que revelan los principios de decisión detrás del éxito (Working Backwards sobre Amazon, Insanely Great sobre el Mac, Inspired de Marty Cagan), los podcasts donde PMs senior explican sus decisiones de producto con el mecanismo real (no solo el resultado), y los estudios de caso de product failures que son tan educativos como los de éxito (los productos que fracasaron y por qué el product sense falló).

5. EL USUARIO COMO MAESTRO: CÓMO CONVERTIR LA EMPATÍA EN CRITERIO
¿Cómo desarrollo la empatía con el usuario de forma que mejora mi criterio de producto en lugar de solo acumular datos cualitativos? Dame el proceso de desarrollo de la empatía como herramienta de product sense: la diferencia entre la investigación de usuario que produce insights y la que produce datos sin insight (el PM que sabe qué preguntar versus el que registra respuestas sin entender las implicaciones), el hábito de observación de usuarios reales usando el producto (no en entornos de test sino en su contexto real de uso), la práctica de ser el propio usuario del producto que diseño (el PM de Stripe que usa Stripe para procesar sus propios pagos entiende el producto de forma que ninguna cantidad de datos reemplaza), y cómo sintetizo la empatía cualitativa con los datos cuantitativos para llegar a conclusiones que ninguno de los dos por sí solos generaría.

6. LAS ENTREVISTAS DE PRODUCT SENSE: CÓMO PREPARARLAS Y DEMOSTRAR CRITERIO
¿Cómo me preparo para las entrevistas de product sense que los mejores equipos de producto usan para evaluar a los candidatos? Dame el proceso de preparación para entrevistas de product sense: la estructura de respuesta que demuestra criterio en lugar de proceso (la diferencia entre el candidato que dice "haría una investigación de usuario" y el que dice "los usuarios de esta aplicación tienen este problema específico porque, y por eso diseñaría en esta dirección"), las preguntas más frecuentes de product sense en entrevistas (el diseño de producto para un nuevo contexto, el rediseño de un producto existente, la evaluación de una decisión de producto real de la empresa entrevistadora), cómo demuestro un punto de vista propio sin que parezca arrogante (la opinión fundamentada que es diferente de la opinión sin argumento), y cómo usar los análisis de productos que he hecho como práctica de entrevista.

7. EL PLAN DE DESARROLLO DEL PRODUCT SENSE: CÓMO ESTRUCTURARLO
¿Cómo diseño un plan de desarrollo del product sense a noventa días que genere mejora real y no solo consumo de contenido? Dame el plan de desarrollo del criterio de producto: el compromiso de un producto analizado en profundidad por semana durante noventa días (el sistema de análisis que aplico de forma consistente), el libro o recurso de producto que estudio durante el período (y el proceso de síntesis que convierte la lectura en aprendizaje aplicable), la práctica de product critique compartido con otro PM (cómo el debate sobre las decisiones de un producto desarrolla el criterio más rápido que el análisis individual), y cómo mido si el product sense está mejorando (los indicadores cualitativos como la calidad del debate en el planning de producto, la aceptación de mis propuestas de producto, la confianza en las decisiones sin datos perfectos).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar el product sense del PM: product critique, estudio en profundidad de referentes, empatía con el usuario y preparación para entrevistas de criterio de producto.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Learning & development: diseñar programas de formación que funcionan',
                'description'       => 'Diseña los programas de formación que realmente cambian comportamientos y mejoran el rendimiento: el instructional design, los modelos de aprendizaje adulto y la diferencia entre la formación que produce resultados y la que solo produce horas de eLearning.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Learning and Development y en instructional design con experiencia diseñando programas de formación que generan cambios de comportamiento medibles en organizaciones de distintos tamaños. Necesito tu ayuda para diseñar un programa de formación que realmente funcione.

Mi contexto:
- Tipo de empresa y sector: [startup, empresa mediana, corporación, sector específico]
- Audiencia objetivo de la formación: [managers, individual contributors, equipo comercial, equipo técnico, toda la empresa, etc.]
- Necesidad de formación que quiero abordar: [describe el comportamiento o la habilidad que quieres desarrollar]
- Estado actual de L&D en la empresa: [sin función de L&D / función pequeña con recursos limitados / función establecida que quiere mejorar el impacto]
- Principal problema con la formación actual: [las personas completan el curso pero no cambian el comportamiento / no medimos el impacto de la formación / el contenido está desactualizado / nadie completa los cursos / la formación es un tick-the-box corporativo]

Con ese contexto, dame:

1. POR QUÉ LA MAYORÍA DE LA FORMACIÓN CORPORATIVA NO FUNCIONA: LAS CAUSAS RAÍZ
¿Por qué la mayor parte de la inversión en formación corporativa produce muy poco cambio real de comportamiento y cómo lo evito en mi programa? Explícame las causas raíz del fracaso de la formación: el diseño basado en contenido en lugar de basado en comportamiento (la formación que define qué van a aprender en lugar de qué van a hacer diferente después), la brecha entre el aprendizaje en el aula o el eLearning y la aplicación en el contexto de trabajo real (el conocimiento declarativo que no se transfiere a la habilidad procedimental), la falta de práctica deliberada con feedback (la formación que informa pero que no da oportunidad de practicar con corrección), el problema del olvido (la curva de Ebbinghaus y por qué sin repetición espaciada el ochenta por ciento del contenido se olvida en una semana), y la falta de soporte del manager después de la formación (por qué la formación sin refuerzo del contexto laboral raramente produce cambio sostenido).

2. DISEÑO INSTRUCCIONAL: EL PROCESO CORRECTO PARA DISEÑAR FORMACIÓN
¿Cuál es el proceso correcto para diseñar un programa de formación que produce cambio real de comportamiento? Dame el proceso de instructional design: el análisis de necesidades que identifica el gap de rendimiento real (la diferencia entre lo que hacen ahora y lo que deberían hacer, y si ese gap es de conocimiento, de habilidad o de motivación, porque la solución es distinta en cada caso), la definición de los objetivos de aprendizaje en términos de comportamientos observables (no "entenderán los principios del liderazgo" sino "serán capaces de dar feedback constructivo en situaciones de baja performance"), el diseño de las actividades de aprendizaje que desarrollan exactamente esa habilidad (el caso práctico, el role play, la simulación, el proyecto real), la secuencia de aprendizaje que va de los conceptos simples a los complejos, y la evaluación que mide si el objetivo se ha alcanzado.

3. EL MODELO KIRKPATRICK: CÓMO MEDIR EL IMPACTO REAL DE LA FORMACIÓN
¿Cómo mido si un programa de formación está generando el impacto de negocio que justifica la inversión? Dame el framework de medición del impacto de la formación: el modelo de cuatro niveles de Kirkpatrick (la reacción del participante, el aprendizaje, el comportamiento y los resultados de negocio) con el proceso de medición de cada nivel, por qué la mayoría de las empresas solo mide el nivel uno (la satisfacción del participante al terminar el curso) aunque es el que menos predice el impacto real, cómo diseño las evaluaciones de los niveles dos y tres (las pruebas de conocimiento y las observaciones del comportamiento en el trabajo), y cómo establezco el link entre la formación y los indicadores de negocio en el nivel cuatro (si el programa de formación comercial funcionó debería verse en los ratios de conversión, si el programa de liderazgo funcionó debería verse en el engagement del equipo).

4. FORMACIÓN EN HABILIDADES BLANDAS: LO QUE FUNCIONA Y LO QUE NO
¿Cómo diseño programas de formación en habilidades como liderazgo, comunicación, feedback o trabajo en equipo que generan cambio real? Dame el análisis del aprendizaje de soft skills: por qué un taller de un día de comunicación efectiva raramente cambia los hábitos de comunicación de nadie (el cambio de comportamiento en habilidades relacionales requiere práctica repetida en el contexto real), el modelo de formación en soft skills que funciona (una dosis de conocimiento, mucha práctica con feedback, reflexión sobre la práctica, más práctica, refuerzo del contexto laboral), cómo diseño el role play y la práctica estructurada de habilidades relacionales de forma que sea psicológicamente seguro para el participante, y cómo involucro a los managers como agentes de refuerzo del comportamiento aprendido en la formación.

5. EL ELEARNING: CUÁNDO FUNCIONA Y CUÁNDO ES UN DESPERDICIO
¿En qué casos el eLearning es efectivo y en cuáles es una solución de menor coste que no produce los resultados necesarios? Dame el análisis del eLearning como herramienta de formación: los casos donde el eLearning funciona bien (formación de cumplimiento que necesita llegar a toda la empresa con consistencia, formación de conocimiento declarativo que el participante puede aprender de forma autónoma, formación de procedimientos que puede practicarse en un simulador), los casos donde el eLearning es insuficiente (el desarrollo de habilidades relacionales, el liderazgo, la toma de decisiones complejas donde la práctica con feedback es imprescindible), cómo diseño el eLearning que sí funciona (la diferencia entre el eLearning que informa con texto y el que practica con simulaciones y feedback inmediato), y el modelo blended learning que combina eLearning para el contenido con presencial o virtual síncrono para la práctica.

6. FOMENTAR EL APRENDIZAJE CONTINUO: MÁS ALLÁ DE LOS CURSOS FORMALES
¿Cómo diseño una cultura de aprendizaje continuo en la organización que vaya más allá de los programas de formación formales? Dame el sistema de aprendizaje continuo organizacional: el 70-20-10 en la práctica (el setenta por ciento del aprendizaje ocurre en el trabajo, el veinte por ciento en la relación con otros, el diez por ciento en la formación formal: cómo diseño los tres contextos para que el aprendizaje ocurra), los programas de mentoring y buddy que aceleran el aprendizaje en el trabajo (cómo los diseño para que generen aprendizaje real y no solo sensación de apoyo), las comunidades de práctica internas donde los profesionales comparten lo que aprenden en su trabajo diario, la biblioteca de recursos de aprendizaje que las personas usan cuando tienen una necesidad concreta (en lugar de esperar el próximo curso programado), y cómo mido si la cultura de aprendizaje continuo está funcionando.

7. EL L&D CON RECURSOS LIMITADOS: CÓMO GENERAR IMPACTO SIN PRESUPUESTO GRANDE
¿Cómo diseño programas de L&D efectivos cuando el presupuesto es limitado y el equipo de formación es pequeño o inexistente? Dame el modelo de L&D eficiente: la priorización brutal de las necesidades de formación (las dos o tres áreas donde el desarrollo de habilidades tiene mayor impacto en los resultados de negocio, en lugar de querer formar a todos en todo), el aprendizaje entre pares estructurado (los lunch-and-learn, las sesiones de conocimiento compartido, el sistema de teach-back donde quien aprende algo lo enseña al equipo), cómo uso los recursos de aprendizaje externos de calidad sin construir todo el contenido desde cero (los libros, los MOOCs, los podcasts como base de programas de formación internos), y cómo demuestro el impacto del L&D al equipo directivo con los recursos limitados disponibles para justificar una mayor inversión futura.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar programas de formación que generan cambio real: instructional design, medición del impacto con Kirkpatrick y cultura de aprendizaje continuo con recursos limitados.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Formación financiera continua: certificaciones y conocimiento avanzado',
                'description'       => 'El profesional de finanzas que invierte en su propio desarrollo: las certificaciones que abren puertas (CFA, ACCA, CPA), los programas de actualización y la estrategia de formación continua que mantiene la relevancia en un sector en transformación.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en desarrollo profesional para profesionales de finanzas con experiencia ayudando a analistas, controllers y directores financieros a diseñar su estrategia de formación continua y a elegir las certificaciones que maximizan el retorno en su carrera. Necesito tu ayuda para diseñar mi plan de desarrollo profesional en finanzas.

Mi contexto:
- Rol actual y nivel de carrera: [analista financiero / controller / finance manager / director financiero / CFO / asesor de inversiones / banca / consultoría]
- Sector de actividad: [banca, fintech, empresa industrial, startup, consultoría, fondos de inversión, etc.]
- Certificaciones o formación académica que ya tengo: [grado, máster, certificaciones actuales]
- Objetivo de carrera a cinco años: [ser CFO de empresa / pasar a sector de inversión / emprender / especializarme en área financiera específica / mejorar el salario en el rol actual]
- Principal brecha de conocimiento que quieres cubrir: [finanzas corporativas avanzadas, análisis de inversiones, contabilidad internacional, finanzas cuantitativas, normativa financiera, fiscalidad, IA y datos en finanzas]

Con ese contexto, dame:

1. EL MAPA DE CERTIFICACIONES FINANCIERAS: CUÁL ELIGE SEGÚN EL OBJETIVO
¿Cuáles son las principales certificaciones financieras del mercado y cuál tiene más valor según el objetivo de carrera? Dame el análisis completo de las certificaciones financieras: el CFA (Chartered Financial Analyst) con su estructura de tres niveles, el perfil de profesional para el que es más relevante (análisis de inversiones, gestión de activos, sell-side y buy-side), el tiempo de preparación realista y la tasa de aprobado, y el impacto real en el salario y en las oportunidades; la ACCA y el ICAEW (para roles de contabilidad y auditoría internacional); el CPA (más relevante para el mercado estadounidense); el CAIA para alternativas y private equity; el FRM (Financial Risk Manager) y el PRM para perfiles de riesgo; el CMA (Certified Management Accountant) para finanzas corporativas; el CIMA para finanzas de empresa; y el CFP para planificación financiera personal. ¿Cuál es más relevante para mi objetivo específico?

2. EL CFA: LA DECISIÓN MÁS IMPORTANTE PARA EL FINANCIERO ORIENTADO A INVERSIONES
¿Cuándo tiene sentido hacer el CFA y cuándo es un sacrificio de tiempo y dinero que no abre las puertas que esperaba? Dame el análisis profundo del CFA: el perfil del profesional para el que el CFA aporta máximo valor (el analista que quiere hacer carrera en gestión de activos, hedge funds, sell-side o private equity), los perfiles para los que el CFA es menos diferencial (el director financiero de empresa industrial, el CFO de startup, el asesor de M&A en boutique española), el proceso de preparación de los tres niveles con expectativas realistas de tiempo (la preparación de trescientas horas por nivel que los candidatos exitosos reportan), cómo compatibilizo la preparación con el trabajo a tiempo completo, y los países y tipos de empresa donde el CFA es reconocido como credencial significativa versus donde es menos relevante.

3. LAS FORMACIONES DE POSGRADO: MÁSTER Y MBA PARA EL FINANCIERO
¿Cuándo añade valor hacer un máster en finanzas o un MBA y cuándo el tiempo y el dinero se pueden invertir de forma más rentable? Dame el análisis de la formación de posgrado para el profesional de finanzas: el Máster en Finanzas (cuándo es útil, las diferencias entre el MFin de escuelas europeas y americanas, y el perfil para el que aporta más valor: el recién graduado que quiere entrar al sector financiero o el mid-career que quiere hacer el cambio), el MBA generalista (cuándo el MBA abre puertas que el Máster en Finanzas no abre: el paso al management general, el cambio de carrera desde finanzas a management, la red de alumni), y las alternativas al MBA que generan valor similar con menos tiempo y dinero para perfiles específicos (el executive program, los programas de desarrollo directivo, las certificaciones sectoriales).

4. EL APRENDIZAJE CONTINUO SIN CERTIFICACIÓN: LO QUE EL FINANCIERO DEBE SABER SIEMPRE
¿Qué áreas de conocimiento financiero necesitan actualización continua aunque ya tenga las certificaciones? Dame el mapa de aprendizaje continuo para el profesional de finanzas: la actualización normativa y regulatoria que no puede ignorarse (los cambios en IFRS, la normativa fiscal en evolución, la regulación de los mercados financieros, la normativa ESG en finanzas), el conocimiento de fintech y tecnología financiera que cambia la función de finanzas (los sistemas de FP&A modernos, la automatización de la contabilidad, los modelos de IA en el análisis financiero), las tendencias de las finanzas corporativas que definen las mejores prácticas (los nuevos modelos de valoración, las estructuras de M&A en evolución, el reporting ESG), y cómo me mantengo actualizado sin leer todo (las fuentes de referencia que curan el conocimiento financiero relevante).

5. LA IA Y LOS DATOS EN FINANZAS: LA FORMACIÓN URGENTE
¿Qué conocimientos de inteligencia artificial y análisis de datos necesita el profesional de finanzas en los próximos años para seguir siendo relevante? Dame el plan de formación en IA y datos para el financiero: las habilidades de datos que el financiero moderno debe tener (el manejo avanzado de Excel y la transición a herramientas más potentes como Python para el análisis financiero, el uso de Power BI o Tableau para el reporting, SQL para el acceso a datos), las aplicaciones de IA en finanzas que el financiero debe entender aunque no las construya (los modelos de forecasting con ML, la automatización de los procesos contables con IA, el análisis de contratos con NLP), y los recursos de formación en IA y datos diseñados para no-técnicos con perfil financiero. ¿Cuánto puede el financiero ignorar la IA antes de que sea un problema de carrera?

6. NETWORKING Y COMUNIDADES FINANCIERAS: LA FORMACIÓN INFORMAL QUE MÁS VALE
¿Qué comunidades y redes profesionales generan más valor para el desarrollo del profesional de finanzas? Dame el mapa de comunidades financieras: las asociaciones profesionales de finanzas según el perfil (ACODI para directores financieros en España, CFA Society para los charterholder, la asociación española de tesoreros de empresa, el ICAC para auditores), los eventos de finanzas donde la calidad del networking supera al contenido formal (las conferencias de CFOs organizadas por bancos y consultoras, los eventos de private equity y venture capital), las comunidades online de financieros donde se comparte conocimiento práctico (los grupos de LinkedIn de CFOs, los grupos de WhatsApp de alumni de másters financieros, los grupos de Slack de finanzas), y cómo construyo una red de pares financieros que sea una fuente de benchmarking, de oportunidades y de conocimiento práctico.

7. EL PLAN DE DESARROLLO FINANCIERO A CINCO AÑOS: CÓMO ESTRUCTURARLO
¿Cómo estructuro mi plan de desarrollo profesional en finanzas a cinco años de forma que sea ambicioso pero realista? Dame el proceso de diseño del plan de desarrollo: cómo defino el objetivo de carrera con suficiente especificidad para que oriente las decisiones de formación (no "quiero ser CFO" sino "quiero ser CFO de una empresa de tecnología de mediano tamaño en cinco años"), cómo identifico el gap entre dónde estoy y ese objetivo (las habilidades y el conocimiento que tengo y los que necesito desarrollar), cómo priorizo las inversiones de formación con mayor retorno esperado para ese objetivo específico (la certificación versus el máster versus la experiencia en un rol diferente), y cómo creo el sistema de revisión anual del plan de desarrollo que lo mantiene actualizado cuando el mercado laboral o mis circunstancias cambian.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la estrategia de formación continua del profesional de finanzas: certificaciones, posgrado, IA y datos, y el plan de desarrollo a cinco años.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Formación jurídica continua y especialización',
                'description'       => 'El abogado que se mantiene al día y profundiza en su especialidad: el CPD, las fuentes de actualización jurídica y la estrategia de especialización que construye una ventaja diferencial en un mercado legal saturado.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en desarrollo profesional para abogados con experiencia ayudando a profesionales del derecho a diseñar su estrategia de especialización y de formación continua. Necesito tu ayuda para diseñar mi plan de desarrollo como abogado.

Mi contexto:
- Tipo de práctica jurídica: [abogado en despacho / abogado de empresa / notario / registrador / funcionario / académico / recién colegiado]
- Especialidad jurídica actual o que quiero desarrollar: [mercantil, laboral, tributario, penal, civil, tecnología, propiedad intelectual, etc.]
- Años de experiencia y nivel actual: [recién licenciado / hasta cinco años / cinco a diez años / más de diez años]
- Objetivo de desarrollo: [profundizar en la especialidad actual / cambiar de especialidad / desarrollar una sub-especialidad dentro de mi área / abrirme al mercado internacional / abrir mi propio despacho]
- Principal brecha de conocimiento: [actualizarme en la normativa reciente / desarrollar el conocimiento de una sub-área específica / adquirir formación en un área complementaria como tecnología o finanzas / mejorar las habilidades de negocio más allá del conocimiento jurídico puro]

Con ese contexto, dame:

1. LA ESPECIALIZACIÓN JURÍDICA: POR QUÉ ES NECESARIA Y CÓMO ELEGIRLA
¿Por qué la especialización es la estrategia correcta para la mayoría de los abogados y cómo elijo la especialidad que maximiza mi ventaja diferencial? Explícame el mercado legal y la lógica de la especialización: el abogado generalista que compite por precio en un mercado saturado versus el especialista que compite por expertise en un nicho con menos competencia directa, por qué los clientes de mayor valor buscan al mejor en su problema específico y no al abogado correcto en todo, cómo la especialización protege del reemplazo por IA y por despachos de menor coste (la expertise profunda en un área compleja es más difícil de replicar), y el proceso de elección de la especialidad: la combinación de dónde tienes más experiencia y aptitud natural, dónde hay demanda de mercado creciente, y qué te interesa genuinamente practicar durante décadas.

2. EL CPD (CONTINUING PROFESSIONAL DEVELOPMENT): EL MARCO FORMAL DE LA FORMACIÓN CONTINUA
¿Qué obliga al abogado a hacer en materia de formación continua y cómo lo utilizo para algo más que cumplir el expediente? Dame el análisis del CPD para abogados: los requisitos formales de formación continua que impone el Colegio de Abogados en España (el número de horas, los tipos de actividades que computan, las excepciones y los plazos), por qué el CPD mínimo requerido es insuficiente para mantenerse al nivel de un especialista en un área jurídica que evoluciona rápido, cómo diseño un programa de CPD que va más allá del cumplimiento y que realmente desarrolla mi competencia (la diferencia entre acumular horas de formación y construir una curva de aprendizaje coherente), y las mejores fuentes de formación jurídica continua de alta calidad según la especialidad.

3. FUENTES DE ACTUALIZACIÓN JURÍDICA: CÓMO MANTENERSE AL DÍA SIN AHOGARSE
¿Cuáles son las fuentes de actualización jurídica que realmente merecen el tiempo de atención del abogado especialista? Dame el mapa de fuentes de actualización jurídica por tipo: los boletines oficiales y la legislación (el BOE diario, los diarios oficiales autonómicos, los boletines de la UE para áreas comunitarias) y cómo los monitorizo eficientemente sin leerlos íntegros, las publicaciones de jurisprudencia que son referencia en mi especialidad (la selección de sentencias del Tribunal Supremo, del TJUE, del TC y de las audiencias provinciales según la especialidad), los comentarios y análisis doctrinales de calidad (las revistas jurídicas de referencia, los blog jurídicos de especialistas con criterio propio, las alertas de los grandes despachos que analizan cambios normativos relevantes), y los newsletters de actualización jurídica curados que filtran el ruido. ¿Cómo proceso la información jurídica recibida de forma que la retenga y la recupere cuando la necesito?

4. LAS PUBLICACIONES ACADÉMICAS Y DOCTRINALES: CUÁNDO IMPORTAN
¿Qué papel tiene la doctrina académica en la práctica del abogado especialista y cuándo merece la pena leerla? Dame el análisis de las publicaciones jurídicas académicas para el practicante: las revistas jurídicas especializadas que son referencia en mi área (y la diferencia entre las que publican análisis de utilidad práctica y las que son principalmente académicas), los comentarios de legislación y jurisprudencia en los manuales de actualización (el tratado jurídico como inversión de conocimiento profundo en el área), los congresos y jornadas académico-profesionales donde la práctica y la academia se cruzan con utilidad real, y cómo el abogado practicante usa la doctrina académica como argumento en los escritos y en las negociaciones sin convertirse en un académico.

5. LA FORMACIÓN COMPLEMENTARIA: MÁS ALLÁ DEL DERECHO PURO
¿Qué conocimientos no estrictamente jurídicos debería adquirir el abogado para ser más efectivo en su especialidad? Dame el mapa de formación complementaria por especialidad: el abogado mercantil y de M&A que se beneficia del conocimiento de finanzas corporativas y valoración de empresas, el abogado de tecnología y datos que necesita entender los fundamentos técnicos de los sistemas que asesora, el abogado laboral que se beneficia del conocimiento de psicología organizacional y negociación avanzada, el abogado tributario que se beneficia del conocimiento contable profundo más allá del nivel básico, y el abogado de cualquier especialidad que se beneficia de las habilidades de gestión y desarrollo de negocio (el marketing jurídico, la gestión de proyectos, el liderazgo de equipos).

6. LA ESPECIALIZACIÓN INTERNACIONAL: CUÁNDO Y CÓMO
¿Cuándo tiene sentido para un abogado desarrollar una especialización con dimensión internacional y cómo lo hace? Dame el análisis de la especialización jurídica internacional: las especialidades donde la dimensión internacional añade más valor (el derecho mercantil con transacciones transfronterizas, el derecho de la competencia europeo, el arbitraje internacional, la regulación financiera global), los programas de formación en derecho internacional de mayor calidad y reconocimiento (los LLM en universidades extranjeras, los programas de especialización en instituciones internacionales), cómo accedo a la práctica del derecho internacional desde España sin tener que hacer carrera en otro país (los despachos internacionales con presencia en España, los equipos de cross-border en despachos españoles, el arbitraje internacional), y el nivel de inglés jurídico que necesito y cómo lo desarrollo.

7. EL PLAN DE ESPECIALIZACIÓN A DIEZ AÑOS: CÓMO CONVERTIRSE EN REFERENTE
¿Cómo construyo la estrategia de especialización a largo plazo que me convierte en uno de los abogados de referencia en mi nicho? Dame el plan de construcción de autoridad en la especialidad: la profundización sistemática del conocimiento (el libro o tratado que leo en profundidad cada año, el área de la especialidad que domino este año y la que dominaré el siguiente), la construcción de reputación que acompaña al conocimiento (el artículo de opinión que publico, la ponencia en la que participo, los casos relevantes que me ponen en el mapa), la red de referentes en la especialidad con los que construyo relaciones de reciprocidad (los otros abogados especializados con los que comparto conocimiento y me refieren asuntos que no son su especialidad exacta), y cómo el reconocimiento en los rankings jurídicos como Legal 500 o Chambers se consigue y qué impacto tiene en el negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la estrategia de formación continua y especialización del abogado: CPD, fuentes de actualización, formación complementaria y plan de construcción de autoridad en el nicho.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Desarrollo profesional en customer success: de CSM a VP',
                'description'       => 'El camino de carrera en customer success: las habilidades que hay que desarrollar en cada etapa, las certificaciones que añaden credibilidad y el plan de desarrollo que lleva del CSM individual contributor al liderazgo de la función.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en desarrollo de carrera en customer success con experiencia ayudando a profesionales de CS a escalar desde roles de individual contributor hasta posiciones de liderazgo. Necesito tu ayuda para diseñar mi plan de carrera en customer success.

Mi contexto:
- Rol actual: [CSM junior / CSM / senior CSM / CS lead / CS manager / director de CS / VP de CS]
- Tipo de empresa y producto: [SaaS B2B, plataforma, enterprise, mid-market, SMB, etc.]
- Años en customer success: [menos de dos / dos a cinco / más de cinco]
- Objetivo de carrera a tres a cinco años: [ser VP de CS / Head of CS / pasar a roles de liderazgo general como COO / especializarme en CS operations / cambiar a otra función como producto o ventas / emprender]
- Principal brecha de desarrollo: [habilidades de gestión de personas / conocimiento estratégico de la función / métricas y datos de CS / impacto en revenue y en el negocio / presencia ejecutiva]

Con ese contexto, dame:

1. EL MAPA DE CARRERA EN CUSTOMER SUCCESS: LAS ETAPAS Y LO QUE SE ESPERA EN CADA UNA
¿Cuáles son las etapas de la carrera en customer success y qué habilidades y logros se esperan en cada una para avanzar? Explícame el mapa de carrera completo: el CSM junior que está aprendiendo el proceso de gestión de cuentas y desarrollando el conocimiento del producto y del sector, el CSM que gestiona su cartera de forma autónoma y empieza a demostrar impacto en las métricas de retención y expansión, el senior CSM que gestiona las cuentas más complejas o estratégicas y empieza a mentorizar a los más junior, el CS team lead que combina la gestión de cuentas con la coordinación del equipo, el CS manager que ya no gestiona cuentas propias y lidera un equipo de CSMs, el director de CS que lidera la función y responde por los resultados ante el CPO o el CRO, y el VP o CCO que lidera CS como parte del equipo ejecutivo. ¿Cuánto tiempo razonable tarda cada transición?

2. LAS HABILIDADES QUE DISTINGUEN AL SENIOR CSM: QUÉ DESARROLLAR PARA DAR EL SALTO
¿Qué habilidades y comportamientos distinguen al CSM senior del CSM mid-level y cómo las desarrollo de forma intencional? Dame el análisis de las habilidades que marcan la diferencia en el salto a senior: la profundidad del conocimiento del negocio del cliente (el senior CSM entiende el contexto competitivo del cliente, sus objetivos de negocio y cómo el producto impacta en ellos, no solo si están usando las features), la habilidad de anticipar el riesgo de churn antes de que el cliente lo manifieste (los indicadores tempranos, el proceso de intervención proactiva), la gestión de las cuentas estratégicas con interlocutores ejecutivos (la conversación con el VP o el C-level del cliente que es distinta de la conversación operativa con el usuario del producto), y la capacidad de liderar el equipo de cuentas sin autoridad formal (el senior CSM que es el referente del equipo).

3. LA TRANSICIÓN AL MANAGEMENT: DE GESTIONAR CUENTAS A GESTIONAR PERSONAS
¿Cómo navego la transición del rol de CSM individual contributor al primer rol de gestión de un equipo de CS? Dame el análisis de la transición al management en CS: las habilidades que tenía como CSM que se transfieren directamente al management (el conocimiento del proceso de CS, la empatía con los clientes, el conocimiento del producto) versus las habilidades nuevas que necesito desarrollar (el coaching de CSMs, la gestión del rendimiento, la delegación, la comunicación al siguiente nivel jerárquico), los errores más frecuentes del primer manager de CS que viene de ser el mejor CSM del equipo (el manager que sigue gestionando cuentas en lugar de capacitar a su equipo para que las gestione, el manager que no da feedback de rendimiento difícil), y cómo demuestro al equipo directivo que estoy listo para el rol de management antes de que esté disponible.

4. LAS MÉTRICAS Y LOS DATOS DE CS: LA HABILIDAD QUE DIFERENCIA A LOS LÍDERES
¿Por qué el dominio de las métricas y los datos de CS es la habilidad que más diferencia a los líderes de CS que avanzan rápidamente y cómo la desarrollo? Dame el plan de desarrollo de la habilidad analítica en CS: las métricas de CS que todo líder debe dominar completamente (el NRR y el GRR, el análisis de cohortes de retención, el health scoring y su calibración, el análisis del churn por segmento y por razón, y la contribución de CS al pipeline de expansion revenue), cómo desarrollo la capacidad de contar la historia de los datos de CS a la dirección (traducir el NRR del 105% en impacto de negocio que el CEO y el CFO entienden), cómo uso los datos para tomar decisiones sobre la estrategia y el proceso de CS (el cambio de segmentación de cuentas, la modificación del proceso de onboarding, la decisión de cuántos CSMs necesito), y las herramientas de CS operations que necesito dominar.

5. LAS CERTIFICACIONES EN CS: CUÁLES TIENEN VALOR REAL
¿Qué certificaciones de customer success tienen valor real en el mercado laboral y cuáles son principalmente un ejercicio de marketing del proveedor? Dame el análisis de las certificaciones de CS: las certificaciones de las plataformas de CS (la Gainsight Certification, la ChurnZero Certification, la Totango Certification) y su valor en términos de conocimiento real versus credencial externa, las certificaciones de customer success agnósticas de plataforma (el CCSM de SuccessCoach, los programas de CS Academy), los cursos online de CS que tienen reconocimiento en la comunidad (los programas de Darius Lahoutifard, de CSC, de Success Hacker), y cuándo tiene más sentido invertir el tiempo en una certificación versus en contribuir a la comunidad de CS (que a menudo tiene mayor impacto en la visibilidad y en las oportunidades).

6. VISIBILIDAD Y NETWORKING EN LA CARRERA DE CS: CÓMO ACELERAR EL AVANCE
¿Cómo construyo la visibilidad y la red profesional en la comunidad de CS que acelera las oportunidades de avance en la carrera? Dame el mapa de visibilidad para el profesional de CS: las comunidades de CS donde la presencia activa genera reconocimiento y oportunidades (los grupos de Slack de CS, las comunidades de Gain Grow Retain y de Customer Success Collective), cómo la participación como ponente en conferencias de CS (Gainsight Pulse, SaaStr, CS Summit) abre puertas a roles de mayor nivel, cómo el contenido publicado en LinkedIn sobre CS construye reputación que hace que los reclutadores me contacten sin que tenga que hacer outbound activo de búsqueda de empleo, y la red de otros líderes de CS con quienes hago benchmarking y de los que aprendo (los grupos de CPOs y VP de CS donde se comparten las prácticas más avanzadas).

7. EL PLAN DE DESARROLLO A TRES AÑOS: CÓMO CONSTRUIRLO Y EJECUTARLO
¿Cómo diseño el plan de desarrollo de carrera en CS a tres años que sea específico y ejecutable? Dame el proceso de construcción del plan de desarrollo: cómo defino el objetivo de carrera con suficiente especificidad (no "quiero ser VP de CS" sino "quiero ser VP of Customer Success de una empresa de SaaS B2B de serie B o posterior en tres años"), cómo identifico el gap entre dónde estoy y ese objetivo (las habilidades, la experiencia, el conocimiento, la visibilidad, la red que necesito desarrollar), cómo priorizo las actividades de desarrollo que tienen mayor impacto en ese objetivo específico (la habilidad que más frena mi avance versus la que ya tengo bien desarrollada), cómo incorporo el desarrollo en el trabajo diario (el proyecto adicional que desarrolla la habilidad que necesito, la conversación con mi manager sobre el plan de desarrollo, la búsqueda activa de oportunidades de exposición al siguiente nivel), y cómo reviso el plan anualmente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el plan de carrera en customer success: etapas, habilidades por nivel, transición al management, métricas y visibilidad que aceleran el avance.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Inversión en el propio desarrollo como freelance',
                'description'       => 'El freelance que invierte en sí mismo: los cursos que generan retorno, los mentores que aceleran el aprendizaje y la estrategia de desarrollo profesional que aumenta las tarifas y la calidad de los proyectos año a año.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en desarrollo profesional para freelancers con experiencia ayudando a profesionales independientes a diseñar la estrategia de inversión en su propio desarrollo que maximiza el retorno en forma de mejores tarifas y mejores proyectos. Necesito tu ayuda para diseñar mi plan de inversión en mi desarrollo como freelance.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [diseño, desarrollo, marketing, consultoría, fotografía, redacción, asesoría, etc.]
- Años como freelance y nivel de ingresos actual: [empezando / establecido con ingresos moderados / consolidado con buenos ingresos]
- Inversión actual en formación y desarrollo: [ninguna / cursos ocasionales / sistema de desarrollo continuo]
- Principal objetivo del desarrollo profesional: [subir las tarifas / acceder a mejores clientes / ampliar los servicios que ofrezco / especializarme más / cambiar de nicho]
- Recursos disponibles para la inversión en desarrollo: [tiempo limitado y poco presupuesto / tiempo moderado y algo de presupuesto / estoy dispuesto a invertir significativamente si el retorno es claro]

Con ese contexto, dame:

1. POR QUÉ EL FREELANCE DEBE INVERTIR EN SU DESARROLLO MÁS QUE UN EMPLEADO
¿Por qué el freelance tiene más necesidad de invertir en su desarrollo profesional que el empleado por cuenta ajena y qué pasa si no lo hace? Explícame la diferencia estructural: el empleado tiene a la empresa invirtiendo en su formación (aunque sea de forma limitada), mientras que el freelance es la empresa y es el empleado al mismo tiempo (si no invierte en su propio desarrollo, nadie lo hará), la depreciación del conocimiento técnico del freelance que trabaja en campos que evolucionan rápido (el desarrollador que no aprende nuevas tecnologías, el diseñador que no actualiza su conocimiento de herramientas, el consultor de marketing que no se adapta a los cambios del sector se vuelve obsoleto en dos o tres años), y el efecto compuesto del desarrollo continuo (el freelance que mejora su habilidad un diez por ciento al año tiene después de cinco años una ventaja del sesenta por ciento sobre el que se estancó).

2. EL ROI DEL DESARROLLO PROFESIONAL DEL FREELANCE: CÓMO LO CALCULO
¿Cómo calculo el retorno esperado de una inversión en formación o desarrollo como freelance para decidir si vale la pena? Dame el framework de evaluación del ROI del desarrollo para freelancers: cómo cuantifico el impacto de una formación o certificación en las tarifas que puedo cobrar (la formación que me permite subir la tarifa de sesenta a ochenta euros la hora genera trescientos sesenta euros adicionales por semana trabajada, que amortiza rápidamente cualquier coste de formación), cómo evalúo si una formación me abre a un mercado de mayor valor (el nicho con tarifas más altas que requiere conocimiento que aún no tengo), cómo valoro el tiempo del aprendizaje como coste de oportunidad (las horas que dedico a formarme versus las que podría dedicar a facturar, y cuándo el trade-off vale la pena), y cómo mido ex-post si la inversión en desarrollo generó el retorno esperado.

3. QUÉ CURSOS Y FORMACIONES GENERAN RETORNO REAL PARA EL FREELANCE
¿Qué tipos de formación tienen el mayor retorno para un freelance en términos de tarifas o calidad de proyectos? Dame el análisis de inversiones en formación por tipo: la formación técnica en habilidades que los clientes pagan más (la especialización avanzada en el área técnica del servicio, las certificaciones que los clientes reconocen y que justifican una tarifa superior, las habilidades complementarias que me permiten ofrecer servicios adicionales a los mismos clientes), la formación en habilidades de negocio del freelance (la negociación de tarifas, el marketing de servicios profesionales, la escritura de propuestas que convierten, la gestión financiera del negocio propio), y la formación en habilidades relacionales que mejoran la calidad de la relación con el cliente (la comunicación, la gestión de expectativas, el manejo de situaciones difíciles). ¿Cómo evalúo la calidad de un curso antes de comprarlo?

4. LA MENTORÍA Y EL COACHING: LOS ACELERADORES MÁS PODEROSOS
¿Por qué la mentoría y el coaching son inversiones con mayor ROI que la mayoría de los cursos para el freelance y cómo accedo a ellos? Dame el análisis de la mentoría como herramienta de desarrollo del freelance: la diferencia entre aprender de forma autodidacta (que requiere explorar el espacio de posibilidades de error por uno mismo) y aprender de alguien que ya recorrió el camino (que comprime años de error y aprendizaje en meses de conversación), los tipos de mentoría a los que puedo acceder como freelance (el mentor informal que es un profesional senior de mi sector dispuesto a dar tiempo, el grupo de mastermind de freelancers al mismo nivel que intercambian perspectivas, el coach de negocio freelance contratado), cómo encuentro y accedo a mentores de calidad (la red profesional, las comunidades de freelancers, los alumni de programas de formación), y qué preguntas y qué trabajo me llevo a las sesiones de mentoría para maximizar el valor de cada hora.

5. LAS COMUNIDADES DE FREELANCERS: EL APRENDIZAJE COLATERAL
¿Qué comunidades de freelancers y profesionales independientes generan más valor de desarrollo y cómo participo en ellas? Dame el mapa de comunidades de aprendizaje para freelancers: las comunidades de freelancers de mi especialidad (los grupos de diseñadores freelance, de desarrolladores independientes, de consultores de marketing) donde el aprendizaje compartido supera al que puedo hacer solo, las comunidades de freelancers generalistas donde aprendo los aspectos de negocio del trabajo independiente (el pricing, los contratos, la fiscalidad, el marketing de servicios), los grupos de mastermind cerrados de profesionales al mismo nivel (el peer learning que es más honesto que el aprendizaje con mentores, porque entre pares se comparten los problemas reales sin miedo al juicio), y los eventos para freelancers y profesionales independientes donde el networking genera colaboraciones y referencias.

6. EL TIEMPO PARA EL DESARROLLO: CÓMO LO PROTEJO CUANDO EL TRABAJO CLIENTE PRESIONA
¿Cómo protejo el tiempo de desarrollo profesional cuando la presión de los proyectos cliente tiende a consumir todas las horas disponibles? Dame el sistema de gestión del tiempo de desarrollo del freelance: el porcentaje de tiempo que debería dedicar al desarrollo profesional según el nivel de ingresos y el objetivo (la regla del diez al veinte por ciento del tiempo de trabajo como inversión en el negocio propio, que incluye el desarrollo pero también el marketing y la administración), cómo bloqueo el tiempo de desarrollo en la agenda antes de que se llene con trabajo cliente (la reunión consigo mismo que no cancelo), cómo aprovecho los períodos de menor carga de proyectos para el aprendizaje más intensivo (en lugar de usarlos solo para hacer outbound comercial), y cómo integro el aprendizaje continuo en el trabajo diario (el proyecto cliente que es también una oportunidad de aprender algo nuevo que me abre a un mercado más interesante).

7. EL PLAN DE DESARROLLO DEL FREELANCE A UN AÑO: LO CONCRETO
¿Cómo estructuro el plan de desarrollo profesional para el año próximo que sea ejecutable y que genere resultados medibles? Dame el proceso de diseño del plan de desarrollo anual del freelance: cómo defino el objetivo de desarrollo con métricas concretas (no "mejorar mis habilidades de diseño" sino "dominar el diseño de sistemas antes de junio para poder ofrecer el servicio a empresas medianas con tarifas de dos mil euros por proyecto"), la inversión de tiempo y dinero que estoy dispuesto a hacer para ese objetivo (el curso, el mentor, el libro, el proyecto de práctica), el hito de los tres meses donde reviso si el plan está funcionando o necesita ajuste, y cómo el plan de desarrollo se conecta con el plan de negocio freelance (el desarrollo profesional que persigo este año debería traducirse en tarifas más altas o en mejores proyectos dentro de seis a doce meses, si no, necesito revisar el plan).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la estrategia de inversión en el desarrollo profesional del freelance: ROI de la formación, mentoría, comunidades y el plan anual que aumenta tarifas y calidad de proyectos.',
                'vote_score'        => 44,
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
