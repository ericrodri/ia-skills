<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills117Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Aprendizaje continuo en marketing: cómo mantenerse al día',
                'description'      => 'Cómo mantenerse al día en el sector que más rápido cambia: newsletters, comunidades, experimentos y la rutina de formación que funciona.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de marketing y mentor con más de quince años de experiencia que sigue aprendiendo cada semana de forma sistemática. Conoces el ecosistema de formación en marketing: las newsletters que valen la pena, las comunidades donde pasan cosas reales, los libros que resisten el tiempo y los experimentos que sustituyen a los cursos.

Quiero construir un sistema de aprendizaje continuo que me mantenga al día sin consumirme todo el tiempo. Dame el contexto:

**Mi perfil:** [especialidad en marketing: performance, branding, contenido, producto, CRM, etc.]
**Mi nivel actual:** [junior, mid, senior, director]
**El tiempo que puedo dedicar:** [horas semanales reales disponibles para formación]
**Lo que ya sigo:** [newsletters, podcasts, comunidades, cursos que ya consume]
**Mis objetivos de aprendizaje:** [qué quiero dominar en los próximos 12 meses]
**Lo que no funciona para mí:** [cursos que no termino, newsletters que no leo, etc.]

Con este contexto, diseña mi sistema de aprendizaje continuo:

**1. El diagnóstico de mi situación actual**
Antes de añadir cosas nuevas, analiza lo que ya tengo:
- ¿Qué de lo que ya sigo aporta valor real y qué es ruido?
- ¿Hay brechas de conocimiento significativas para mis objetivos?
- ¿Mi consumo de contenido es pasivo o activo? La diferencia importa.

**2. Las fuentes de primer nivel para mi especialidad**
Dame las fuentes más fiables y de mayor densidad de conocimiento para mi especialidad:
- Las tres o cuatro newsletters que ningún profesional de mi área puede permitirse ignorar y por qué
- Los podcasts que escuchan los mejores de mi especialidad (no los más famosos)
- Los libros que explican principios que no caducan en seis meses
- Las personas en LinkedIn o X que piensan en voz alta de forma útil

**3. Las comunidades donde pasan cosas reales**
Las mejores comunidades sustituyen a los cursos:
- Las comunidades de profesionales donde se comparten experimentos reales, no teoría
- Cómo participar de forma que genere más valor para mí que el consumo pasivo
- La diferencia entre la comunidad que parece activa y la que tiene conversaciones útiles

**4. El sistema de aprendizaje semanal**
Un sistema es mejor que la buena intención:
- Cómo estructuro el tiempo dedicado a aprender en una semana normal
- La diferencia entre aprendizaje de exploración (breadth) y de profundización (depth)
- El método para que lo que leo o escucho se convierta en conocimiento que puedo aplicar
- El note-taking system para profesionales de marketing que funciona sin convertirse en un proyecto

**5. Los experimentos como método de aprendizaje**
En marketing, ejecutar supera a estudiar:
- Cómo diseñar micro-experimentos que me enseñen algo nuevo cada mes
- Qué puedo experimentar con el presupuesto y los recursos que tengo ahora
- Cómo documentar los resultados para que el aprendizaje no se quede solo en mí

**6. La formación estructurada que sí merece la pena**
No todos los cursos son una pérdida de tiempo. Dame criterios:
- Cuándo un curso estructurado aporta más que el aprendizaje autodirigido
- Las certificaciones que tienen valor real en el mercado de mi especialidad
- Cómo evaluar un curso antes de pagarlo o de invertir el tiempo
- Las conferencias y eventos que justifican el desplazamiento

**7. El plan de aprendizaje para los próximos 12 meses**
Dame un plan concreto con:
- Los tres temas en los que me voy a profundizar este año y por qué
- El calendario de consumo semanal ajustado al tiempo disponible
- Las métricas que me dicen si estoy aprendiendo o solo consumiendo

Quiero aprender de forma que me haga mejor en mi trabajo, no para seguir el ritmo de un sector que genera ruido constantemente. Ayúdame a distinguir lo que importa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir un sistema de aprendizaje continuo personalizado para profesionales de marketing.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'El developer como marca: construye reputación técnica',
                'description'      => 'Construye una reputación técnica que abre puertas: open source, charlas, blog técnico y las decisiones que te hacen visible en tu comunidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un senior engineer y tech lead con una reputación sólida en su comunidad técnica. Has conseguido oportunidades de trabajo interesantes, conferencias relevantes y proyectos de consultoría gracias a tu presencia en la comunidad, no a través de portales de empleo. Y lo has hecho sin sacrificar la profundidad técnica que te distingue.

Quiero construir mi reputación técnica de forma sistemática. Dame el contexto:

**Mi stack y especialidad:** [lenguajes, frameworks, área: backend, frontend, datos, infraestructura, seguridad, etc.]
**Mi nivel actual:** [junior, mid, senior, staff, principal]
**Mi presencia actual:** [GitHub, LinkedIn, X, blog, charlas: qué tengo y qué no]
**Mis objetivos:** [mejores ofertas de trabajo, oportunidades de consultoría, hablar en conferencias, contribuir a open source, reconocimiento en mi área]
**El tiempo disponible:** [horas semanales fuera del trabajo para esto]
**Lo que me frena:** [síndrome del impostor, no sé por dónde empezar, no tengo nada original que decir, etc.]

Con este contexto, diseña mi estrategia de marca personal técnica:

**1. El diagnóstico honesto de mi punto de partida**
Antes de crear contenido o contribuir a open source:
- ¿Qué sé que otros en mi área no saben o no explican bien?
- ¿Qué problemas he resuelto que son más comunes de lo que parece?
- ¿Qué tipo de contenido o contribución se alinea con cómo quiero ser percibido?
- El síndrome del impostor como señal: si algo te da miedo publicar, probablemente valga la pena

**2. El nicho técnico donde quiero ser conocido**
La reputación técnica más valiosa es específica, no general:
- Cómo identificar el nicho técnico donde puedo aportar algo diferenciador
- La diferencia entre ser conocido como "developer" y ser conocido como "la persona que sabe de X"
- Por qué el nicho no limita las oportunidades: las amplifica

**3. La contribución a open source como palanca**
Open source es el currículum que habla por sí mismo:
- Cómo empezar a contribuir aunque no tengas un proyecto propio
- El proceso de encontrar un proyecto donde mi contribución sea bienvenida
- Las contribuciones que generan más reputación: no solo pull requests, también issues, documentación, tests
- Cuándo y cómo crear mi propio proyecto open source
- Cómo usar GitHub como escaparate técnico, no solo como repositorio

**4. El blog técnico que la gente quiere leer**
El contenido técnico de calidad tiene vida media larga y genera confianza:
- Los formatos que funcionan: deep dives, post-mortems, tutoriales con lo que aprendí, opiniones técnicas fundamentadas
- Cómo encontrar los temas sobre los que escribir sin que sea una obligación
- La frecuencia sostenible vs. la frecuencia aspiracional
- La distribución: dónde publicar además del blog propio para maximizar el alcance
- El post que me gustaría haber encontrado cuando empecé: por qué ese es siempre el mejor tema

**5. Las charlas técnicas como acelerador de reputación**
Hablar en público amplifica exponencialmente la reputación técnica:
- Cómo proponer una charla a una conferencia aunque no te hayan invitado
- Los formatos más fáciles para empezar: lightning talks, meetups locales, webinars
- Cómo preparar una charla técnica que sea útil y no un anuncio de tu empresa
- La charla que más reputación genera: no el tutorial, sino la lección aprendida a costa mía

**6. LinkedIn y X como herramientas de visibilidad técnica**
Las redes sociales funcionan diferente para un desarrollador:
- Cómo construir un perfil de LinkedIn que no parezca un CV genérico
- Qué tipo de posts técnicos generan más conversación real
- La diferencia entre publicar para la audiencia técnica y publicar para conseguir oportunidades de negocio
- Cómo interactuar en la comunidad sin que se sienta como trabajo de marketing

**7. El plan de los próximos 6 meses**
Dame un plan concreto y realista con el tiempo disponible:
- Qué empiezo esta semana (algo pequeño y ejecutable)
- Los hitos mensuales que me dicen si voy por el buen camino
- Cómo mido que la reputación técnica está creciendo

Quiero que las mejores oportunidades vengan a mí, no tener que buscarlas. Ayúdame a construir la presencia que lo hace posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una reputación técnica que genera oportunidades sin depender de portales de empleo.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Aprender diseño de producto de forma autodidacta',
                'description'      => 'El camino más eficiente para convertirte en diseñador sin bootcamp ni carrera: recursos, proyectos y comunidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador de producto senior que empezó de forma autodidacta y hoy trabaja en una empresa de tecnología reconocida. Conoces el camino largo (el que lleva años sin dirección) y el camino corto (el que con los recursos y proyectos correctos te hace empleable en 12-18 meses). Tu especialidad es ayudar a personas que quieren cambiar a diseño a no perder tiempo con lo que no importa.

Quiero aprender diseño de producto de forma autodidacta. Dame el contexto:

**Mi punto de partida:** [sin experiencia / vengo de otro campo: desarrollo, marketing, psicología, etc.]
**Mi objetivo:** [conseguir trabajo como diseñador, hacer freelance, mejorar productos propios, cambiar dentro de mi empresa]
**El tiempo disponible:** [horas semanales y meses hasta el objetivo]
**Lo que ya he intentado:** [cursos, libros, proyectos que he empezado y abandonado]
**Mis puntos fuertes actuales:** [pensamiento analítico, comunicación, habilidades visuales, empatía, técnica]
**Las herramientas que ya conozco:** [Figma, Adobe XD, Sketch, ninguna]

Con este contexto, diseña mi plan de aprendizaje:

**1. El diagnóstico y el camino realista**
Antes de empezar:
- ¿Cuánto tiempo realista necesito para alcanzar mi objetivo con el tiempo disponible?
- ¿Qué habilidades de mi background anterior me van a dar ventaja en diseño?
- ¿Qué debería dejar de hacer o aprender porque no contribuye al objetivo?

**2. Los fundamentos que no puedes saltarte**
Hay conocimiento que parece básico pero es la base de todo lo demás:
- Los principios de diseño visual que necesito dominar: tipografía, color, composición, espacio
- Los fundamentos de UX: heurísticas de Nielsen, leyes de Gestalt, patrones de interacción
- La psicología del usuario: cómo piensan y deciden las personas cuando usan un producto
- El design thinking como mentalidad, no como proceso formal

**3. Figma: de cero a productivo en el menor tiempo posible**
Figma es la herramienta estándar del sector. Define el plan de aprendizaje:
- La ruta de aprendizaje de Figma: qué aprender primero, qué dejar para después
- Los recursos gratuitos y de pago que más densos son en conocimiento útil
- Los proyectos de práctica que me hacen aprender Figma mientras aprendo a diseñar
- El nivel de Figma que necesito para ser empleable vs. el nivel avanzado

**4. El portfolio que consigue entrevistas**
Sin portfolio no hay entrevistas. Diseña la estrategia:
- Cuántos proyectos necesito y de qué tipo para ser considerado en el mercado
- La diferencia entre un proyecto de práctica y un proyecto de portfolio
- Cómo crear proyectos cuando no tienes clientes: rediseños, proyectos propios, colaboraciones
- El formato del case study que demuestra cómo pienso, no solo qué he diseñado
- Las plataformas donde publicar el portfolio y cómo optimizarlas

**5. Los recursos de aprendizaje ordenados por prioridad**
Dame la lista ordenada de lo que debo consumir en cada fase:
- Fase 1 (fundamentos, 0-3 meses): los libros, cursos y recursos que no puedo saltarme
- Fase 2 (práctica, 3-8 meses): los proyectos y recursos para consolidar
- Fase 3 (especialización, 8-12 meses): dónde profundizar según mi objetivo
- Los recursos gratuitos que son mejores que los de pago

**6. La comunidad como acelerador**
Aprender solo es más lento y más desmoralizante:
- Las comunidades de diseño donde se aprende de verdad
- Cómo conseguir feedback real sobre mi trabajo antes de buscar trabajo
- El mentoring en diseño: cómo encontrar mentores y cómo aprovecharlos
- Las plataformas donde ver trabajo de otros diseñadores con sentido crítico

**7. La búsqueda de trabajo y el cambio de carrera**
El último tramo es el más técnico:
- Qué buscan los hiring managers cuando revisan el portfolio de un junior sin experiencia
- El proceso de entrevista de diseño: qué ejercicios te van a pedir y cómo prepararlos
- Cómo compensar la falta de experiencia profesional con proyectos reales
- La primera oferta: qué aceptar, qué negociar, qué rechazar

Dame un plan de aprendizaje semana a semana para los primeros tres meses. Quiero empezar ya.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Planificar el aprendizaje autodidacta de diseño de producto para ser empleable en menos de 18 meses.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Mentalidad de crecimiento en ventas: hábitos y marcos mentales',
                'description'      => 'Los hábitos, rutinas y marcos mentales de los mejores vendedores: cómo piensan, cómo se preparan y cómo se recuperan.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de ventas y director comercial con experiencia desarrollando vendedores de alto rendimiento en diferentes sectores. Tu especialidad no es enseñar técnicas de cierre: es ayudar a los vendedores a construir la mentalidad y los hábitos que hacen que las técnicas funcionen. Sabes que la diferencia entre un vendedor mediano y uno excelente es más mental que técnica.

Quiero desarrollar la mentalidad y los hábitos de un vendedor de alto rendimiento. Dame el contexto:

**Mi perfil de ventas:** [tipo de venta: B2B, B2C, SaaS, enterprise, inbound, outbound, etc.]
**Mi experiencia:** [meses o años vendiendo, sectores anteriores]
**Mi mayor fortaleza actual:** [qué se me da bien en ventas]
**Mi mayor bloqueo actual:** [qué me frena: miedo al rechazo, falta de disciplina, dificultad para cerrar, etc.]
**Mis resultados actuales:** [cómo estoy respecto a quota, conversión aproximada]
**El entorno:** [trabajo solo o en equipo, con manager de ventas o sin él]

Con este contexto, ayúdame a desarrollar la mentalidad y los hábitos correctos:

**1. El diagnóstico de mi mentalidad actual**
La mentalidad precede al comportamiento. Evalúa la mía:
- ¿Qué creencias limitantes tengo sobre las ventas, sobre mí mismo o sobre mis clientes?
- ¿Cómo reacciono al rechazo? ¿Cómo afecta esa reacción a mi comportamiento?
- ¿Mi mentalidad es de escasidad (cada no me acerca al desastre) o de abundancia (tengo suficiente pipeline)?
- ¿Me identifico con el proceso o solo con el resultado?

**2. La gestión del rechazo como habilidad**
El rechazo es el mayor disruptor de la mentalidad en ventas:
- Por qué el rechazo en ventas no es rechazo personal aunque lo sienta así
- Los marcos mentales que los mejores vendedores usan para procesar el no
- Cómo convertir el rechazo en información útil en lugar de en desmotivación
- La práctica deliberada de la resiliencia: ejercicios concretos, no filosofía

**3. Los hábitos diarios del vendedor de alto rendimiento**
La disciplina diaria es más valiosa que la motivación ocasional:
- La rutina matinal de los mejores vendedores: preparación, no improvisación
- La planificación semanal del vendedor: cómo organizo mi tiempo para maximizar los resultados
- El ritual de cierre del día: revisión, aprendizaje y preparación del día siguiente
- El hábito de la preparación pre-llamada: por qué los mejores vendedores llegan preparados y los demás improvisan

**4. La gestión del pipeline como práctica mental**
Un pipeline bien gestionado reduce la ansiedad y mejora la toma de decisiones:
- Por qué la ansiedad por el quota nace de un pipeline mal gestionado
- El hábito de la revisión del pipeline: diaria, semanal, con qué criterio
- La honestidad con uno mismo sobre las oportunidades reales vs. las que no van a cerrar
- Cómo mantener el pipeline activo sin depender de los leads inbound

**5. El aprendizaje continuo como ventaja competitiva**
Los mejores vendedores aprenden sistemáticamente:
- El análisis post-llamada que convierte la experiencia en mejora real
- Cómo pedir feedback de calidad a los clientes que dijeron no
- La escucha activa de llamadas grabadas como herramienta de desarrollo
- Los libros, podcasts y comunidades que más impacto han tenido en vendedores reales

**6. La motivación intrínseca en ventas**
La motivación que viene de dentro dura más que la que viene de los incentivos:
- Cómo conectar el trabajo de ventas con el propósito personal
- El "por qué" detrás del resultado: por qué quiero alcanzar este quota
- Cómo mantener la motivación en los meses malos sin que afecte al comportamiento
- Los rituales de celebración que refuerzan los comportamientos correctos, no solo los resultados

**7. El plan de desarrollo personal para los próximos 90 días**
Dame un plan concreto con:
- El hábito más importante que voy a instalar primero y por qué
- La métrica de comportamiento (no de resultado) que voy a seguir cada semana
- Cómo voy a medir si mi mentalidad está mejorando

Quiero ser el tipo de vendedor que cuando está mal de resultados sabe exactamente qué hacer, no el que espera que la suerte cambie.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la mentalidad y los hábitos de los vendedores de alto rendimiento.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Aprender product management: el roadmap del PM moderno',
                'description'      => 'El roadmap de aprendizaje del PM moderno: libros, frameworks, comunidades y proyectos reales para desarrollar el oficio.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager senior con experiencia en startups y scale-ups que también mentoriza PMs junior y a personas que quieren entrar en el campo. Conoces los recursos que realmente enseñan el oficio (y los que solo suenan bien), los frameworks que funcionan en la práctica y el camino más corto para desarrollar el criterio de producto que distingue a los mejores PMs.

Quiero desarrollar mis habilidades como product manager de forma sistemática. Dame el contexto:

**Mi situación actual:** [soy PM desde hace X meses/años / quiero entrar en PM viniendo de: ingeniería, diseño, negocio, etc.]
**El tipo de producto en el que trabajo o quiero trabajar:** [B2B SaaS, consumer, marketplace, infra, plataforma, etc.]
**Mis fortalezas actuales:** [qué se me da bien: datos, comunicación, técnica, visión de negocio, UX]
**Mis áreas de mejora más urgentes:** [discovery, priorización, stakeholder management, métricas, roadmapping]
**Mis objetivos de desarrollo:** [ser mejor en mi rol actual, conseguir un trabajo de PM, pasar de PM a Senior PM, etc.]
**El tiempo disponible:** [horas semanales para el desarrollo profesional]

Con este contexto, diseña mi plan de aprendizaje como PM:

**1. El diagnóstico de mis habilidades como PM**
Las habilidades de un PM se pueden organizar en tres áreas: producto (visión, estrategia, discovery), ejecución (priorización, roadmapping, delivery) y liderazgo (stakeholders, comunicación, influencia sin autoridad). Evalúa mis brechas más importantes en cada área.

**2. Los fundamentos del product management que no caducan**
Hay conocimiento que sobrevive a todos los frameworks y metodologías:
- Los libros que todo PM debería leer y en qué orden abordarlos
- Los principios de buen producto que no cambian aunque cambie la metodología
- La diferencia entre un PM que gestiona un roadmap y uno que resuelve problemas
- Por qué el discovery es la habilidad que más diferencia a los mejores PMs

**3. Los frameworks útiles y los que son ruido**
El mundo del PM está lleno de frameworks con nombres de acrónimos. Cuáles valen la pena:
- Los frameworks de priorización que funcionan en la práctica y cuándo usar cada uno
- Los frameworks de discovery que más ayudan a entender el problema del cliente
- Los modelos de estrategia de producto que el PM necesita dominar
- Los frameworks que suenan bien en entrevistas pero no ayudan en el trabajo real

**4. El aprendizaje en el trabajo: cómo sacarle más a tu rol actual**
El mejor aprendizaje de PM es en el trabajo, si lo haces conscientemente:
- Cómo convertir cada decisión de producto en un aprendizaje documentado
- El hábito de la revisión post-launch: qué salió bien, qué no y qué harías diferente
- Cómo buscar y usar el feedback de usuarios de forma sistemática
- Cómo pedir feedback de calidad a tu manager, a tu equipo y a tus stakeholders

**5. Los recursos externos ordenados por impacto**
Dame la lista de recursos que realmente mueven la aguja:
- Los newsletters de PM que leen los mejores PMs (no los más populares)
- Los podcasts donde se habla de producto real, no de teoría
- Las comunidades donde se aprende de verdad: foros, Slacks, Discord
- Los casos de estudio de producto que más enseñan y dónde encontrarlos

**6. El portfolio y la visibilidad como PM**
Los PMs no tienen portfolio como los diseñadores, pero sí pueden hacerse visibles:
- Cómo documentar el trabajo de PM de forma que demuestre criterio y no solo actividad
- El blog o la presencia en LinkedIn que genera oportunidades de PM
- Cómo hablar del trabajo en entrevistas de PM cuando el producto es confidencial
- Los proyectos paralelos que permiten desarrollar criterio de producto fuera del trabajo

**7. El plan de desarrollo para los próximos 12 meses**
Dame un plan concreto con:
- Las tres habilidades en las que me voy a centrar este año
- Los recursos específicos para cada habilidad
- Las métricas que me dicen si estoy creciendo como PM
- Los hitos trimestrales que me sirven de punto de referencia

Quiero convertirme en el tipo de PM al que el equipo de ingeniería le dice "tú sí que entiendes el problema" y al que el negocio le dice "tú sí que entiendes lo que necesitamos". Ayúdame a llegar ahí.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar el plan de aprendizaje sistemático para desarrollar el oficio de product manager.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Desarrollo profesional de managers: crecer más allá del rol',
                'description'      => 'Cómo los mejores managers siguen creciendo: mentoring inverso, comunidades de práctica y el aprendizaje que no viene de cursos.',
                'prompt_content'   => <<<'PROMPT'
Eres una consultora de liderazgo y desarrollo organizacional especializada en el crecimiento de managers intermedios y directivos. Tu experiencia te ha enseñado que los managers que más crecen no son los que hacen más cursos: son los que aprenden de forma sistemática de su trabajo, de sus equipos y de otras personas.

Quiero diseñar mi plan de desarrollo como manager. Dame el contexto:

**Mi rol actual:** [manager de equipo, People Manager, HRBP, Director de RRHH, etc.]
**Años de experiencia en roles de gestión:** [meses o años]
**El tipo de equipo que gestiono:** [tamaño, perfiles, distribución geográfica]
**Mis fortalezas como manager:** [qué se me da bien: desarrollo de personas, visión estratégica, comunicación, etc.]
**Las áreas donde quiero crecer:** [dar feedback difícil, gestionar conflictos, pensar más estratégicamente, influir sin autoridad, etc.]
**Mis objetivos de carrera:** [crecer dentro de mi empresa, cambiar de empresa, llegar a VP o CPO, etc.]

Con este contexto, diseña mi plan de desarrollo profesional:

**1. El diagnóstico honesto de mis habilidades como manager**
Evalúa mis fortalezas y brechas en tres dimensiones:
- Gestión del equipo: feedback, desarrollo, reconocimiento, conversaciones difíciles
- Gestión hacia arriba y lateral: influencia, comunicación al liderazgo, relación con pares
- Visión y estrategia: pensar más allá del trimestre, conectar el trabajo del equipo con el negocio

**2. El aprendizaje que viene de dentro: sacar más del trabajo diario**
Las mejores oportunidades de aprendizaje están en el trabajo si las sabemos ver:
- Las decisiones de gestión que merecen una reflexión deliberada posterior
- La revisión semanal que convierte la experiencia en aprendizaje
- Cómo pedir feedback de calidad al equipo, a los pares y al manager propio
- El diario de management: por qué los mejores managers llevan uno y cómo usarlo

**3. El mentoring inverso como palanca de aprendizaje**
Los más jóvenes del equipo saben cosas que yo no sé:
- Qué es el mentoring inverso y por qué es una de las herramientas más poderosas para managers
- Cómo proponerlo sin que parezca que no sé hacer mi trabajo
- Qué puedo aprender de las personas más jóvenes o con menos experiencia que yo
- Cómo estructurar las conversaciones para que sean útiles para los dos

**4. Las comunidades de práctica para managers**
Los managers se sienten solos. Las comunidades de práctica cambian eso:
- Qué es una comunidad de práctica de managers y por qué funciona mejor que los cursos
- Cómo crear una comunidad de práctica interna si no existe
- Las comunidades externas donde managers de diferentes empresas comparten sus retos reales
- El formato de los peer learning groups que más resultado dan

**5. La formación estructurada que sí vale la pena para managers**
No toda formación es igual. Dame criterios para elegir:
- Cuándo un programa formal de liderazgo aporta más que el aprendizaje informal
- Las certificaciones de coaching, facilitación o liderazgo que tienen valor real
- Cómo evaluar un programa de liderazgo antes de pedírselo a la empresa
- Los libros que los mejores managers han leído y siguen recomendando

**6. El coaching como herramienta de desarrollo**
El coaching es la inversión de desarrollo con mayor ROI para un manager:
- Cuándo necesito un coach y cuándo no
- La diferencia entre mentoring, coaching y terapia: qué sirve para qué
- Cómo encontrar un coach que sea útil para mi contexto específico
- Cómo aprovechar al máximo las sesiones de coaching

**7. El plan de desarrollo para los próximos 12 meses**
Dame un plan concreto con:
- Las dos o tres habilidades de manager en las que me voy a centrar este año
- Las acciones específicas para cada una: no "leer más", sino qué leer, con quién hablar, qué experimentar
- Los indicadores de que estoy creciendo como manager (qué cambio en el equipo, en los resultados, en la percepción de mis pares)

Quiero ser el tipo de manager que la gente recuerda cuando piensa en los mejores jefes que ha tenido. Ayúdame a construir ese camino.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar el plan de desarrollo profesional para managers que quieren crecer más allá de su rol actual.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'CFA y certificaciones financieras: guía práctica para decidir',
                'description'      => 'Guía práctica para quien quiere certificarse: qué vale la pena, cuánto cuesta, cuánto tiempo lleva y cómo afecta a la carrera.',
                'prompt_content'   => <<<'PROMPT'
Eres un profesional de finanzas con el CFA y otras certificaciones que ha asesorado a muchos colegas sobre cuándo y cómo certificarse. Conoces la realidad del proceso: las horas necesarias, los costes reales, los mercados donde cada certificación abre puertas y los casos en que la certificación no vale el esfuerzo que cuesta.

Quiero tomar una decisión informada sobre si certificarme y qué certificación elegir. Dame el contexto:

**Mi situación actual:** [qué hago hoy: analista, controller, FP&A, banca, inversiones, asesoría, etc.]
**Mis objetivos de carrera:** [qué posición quiero tener en cinco años, en qué sector]
**Mi nivel de estudios en finanzas:** [licenciatura, máster, ninguno formal]
**El mercado donde trabajo o quiero trabajar:** [España, Europa, EE.UU., global]
**El tiempo disponible:** [horas semanales para preparación, restricciones familiares o laborales]
**El presupuesto disponible:** [tengo capacidad para invertir X euros en la certificación]

Con este contexto, ayúdame a tomar la decisión correcta:

**1. El mapa de las principales certificaciones financieras**
Explica las características principales, el reconocimiento y el público objetivo de cada una:
- CFA (Chartered Financial Analyst): para quién es, qué puertas abre, qué no cubre
- ACCA / CIMA: qué sector las valora, diferencia con el CFA
- FRM (Financial Risk Manager): cuándo es la mejor opción sobre el CFA
- CFP (Certified Financial Planner): para la planificación financiera personal
- CAIA (Chartered Alternative Investment Analyst): activos alternativos y sus nichos
- ACA / ICAEW: el equivalente anglosajón del auditor/controller
- Las certificaciones locales (EFPA en España) y cuándo son suficientes

**2. El análisis de retorno de inversión de cada certificación**
Una certificación es una inversión. Ayúdame a evaluarla como tal:
- El coste total realista: tasas de examen, materiales, cursos preparatorios
- El tiempo necesario de preparación: horas totales, tiempo hasta la primera promoción
- El impacto salarial documentado: cuánto sube el salario tras la certificación en mi mercado
- Las oportunidades adicionales que abre: puestos, sectores, geografías
- El período de recuperación de la inversión

**3. La recomendación para mi perfil específico**
Con mi contexto, dame una recomendación clara:
- Qué certificación tiene más sentido para mis objetivos y mi situación
- Por qué descarto las otras para mi caso concreto
- Si la respuesta es "ninguna por ahora", qué debería hacer en su lugar

**4. El proceso realista del CFA (si aplica)**
Si el CFA es la recomendación, desmonta las expectativas irreales:
- El nivel I, II y III: qué cubre cada uno, qué porcentaje aprueba cada examen
- El plan de estudio realista para cada nivel dado mi disponibilidad
- Los materiales: CFA Institute vs. preparadores como Kaplan o UWorld
- La experiencia profesional necesaria: cuándo computa, qué cuenta
- La membresía vs. la certificación: qué derechos da cada uno

**5. Cómo compaginar la preparación con el trabajo y la vida**
El mayor riesgo de las certificaciones financieras no es el examen: es el abandono:
- Cómo estructurar el estudio para que sea sostenible durante meses
- Las técnicas de aprendizaje que funcionan para el material financiero denso
- Cómo gestionar el impacto en el trabajo y en la vida personal
- Las señales de que el ritmo no es sostenible y cómo ajustar sin rendirse

**6. Cómo aprovechar la certificación una vez obtenida**
La certificación no genera valor sola: hay que activarla:
- Cómo actualizar el perfil de LinkedIn, el CV y el discurso profesional
- Cómo buscar activamente las oportunidades que la certificación habilita
- Las comunidades de CFA charterholders y qué valor real aportan
- El CPD (formación continua) necesario para mantener la certificación activa

**7. Mi plan de acción**
Dame un plan concreto con las decisiones que debo tomar, los plazos y el primer paso que puedo dar esta semana.

Quiero tomar la decisión correcta para mi situación, no la más popular ni la que recomienda LinkedIn. Ayúdame a pensar con datos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Decidir qué certificación financiera tiene más sentido para los objetivos y el contexto de carrera.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'El abogado de empresa como consejero estratégico del negocio',
                'description'      => 'Cómo crecer de abogado técnico a consejero estratégico del negocio: las habilidades que marcan la diferencia.',
                'prompt_content'   => <<<'PROMPT'
Eres un General Counsel con experiencia en empresas de tecnología que ha hecho el camino de especialista técnico en derecho a asesor estratégico de los comités de dirección. Conoces las habilidades que diferencian al abogado que responde preguntas del que las anticipa, y tienes claro qué formación y qué experiencias aceleran ese desarrollo.

Quiero desarrollarme como abogado de empresa y ganar relevancia estratégica. Dame el contexto:

**Mi rol actual:** [abogado interno, counsel, senior counsel, director jurídico]
**Mi especialidad:** [contratos comerciales, M&A, laboral, regulatorio, propiedad intelectual, etc.]
**Años de experiencia:** [en asesoría jurídica interna o externa]
**Mi relación con el negocio:** [me llaman cuando hay un problema / participo en proyectos / me incluyen en las decisiones estratégicas]
**Mis fortalezas actuales:** [rigor técnico, velocidad, capacidad de síntesis, etc.]
**Lo que quiero cambiar:** [ser más proactivo, tener más influencia, participar antes en las decisiones, ser un aliado del negocio en lugar de un freno]

Con este contexto, diseña mi plan de desarrollo como abogado estratégico:

**1. El diagnóstico de mi posición actual**
Hay una escala de madurez del abogado de empresa: técnico, asesor, socio estratégico. Evalúa dónde estoy:
- ¿El negocio me llama cuando hay un problema o antes de que haya un problema?
- ¿Soy percibido como un habilitador o como un freno?
- ¿Entiendo el modelo de negocio de la empresa mejor que el abogado externo?
- ¿Mis opiniones influyen en las decisiones o solo las documentan?

**2. El conocimiento de negocio que no enseña la carrera**
El mayor diferenciador del abogado estratégico es que entiende el negocio:
- Los conceptos financieros y de negocio que un abogado de empresa necesita dominar
- Cómo leer e interpretar los estados financieros de la empresa
- Los modelos de negocio más comunes y sus implicaciones jurídicas específicas
- Cómo entender la estrategia de la empresa y anticipar sus necesidades jurídicas

**3. Las habilidades de comunicación que multiplican el impacto**
La comunicación es la habilidad que más diferencia al abogado técnico del estratégico:
- Cómo comunicar el riesgo jurídico en lenguaje de negocio
- La diferencia entre dar una opinión técnica correcta y dar un consejo útil
- Cómo presentar opciones (no solo riesgos) al management
- El formato del memo jurídico que el CEO lee hasta el final
- Cómo dar malas noticias de forma que genere confianza en lugar de alarma

**4. La relación con el negocio y los stakeholders internos**
El abogado estratégico se gana su relevancia en las relaciones, no en los contratos:
- Cómo construir la relación de confianza con los directores de negocio
- Por qué necesito entender los objetivos del CEO, CFO y CTO y cómo hacerlo
- Cómo participar en proyectos desde el principio sin que parezca que me estoy metiendo donde no me llaman
- Cómo gestionar las situaciones donde el negocio quiere hacer algo que no debería

**5. La gestión del equipo jurídico externo**
La relación con los despachos externos define el coste y la calidad del servicio jurídico:
- Cómo conseguir el mejor trabajo de los despachos externos pagando menos
- Los brief de encargo que generan trabajo de mayor calidad
- Cómo evaluar la calidad del trabajo jurídico externo
- Cuándo cambiar de despacho y cómo gestionar la transición

**6. El desarrollo profesional específico del abogado de empresa**
El camino del abogado de empresa es diferente al del abogado de despacho:
- Los programas de formación que más impacto tienen para la transición al rol estratégico
- Las comunidades de GCs y directores jurídicos donde se aprende y se conecta
- Los libros y recursos que forman el criterio del abogado de empresa
- El networking que abre puertas: asociaciones, conferencias, foros de GCs

**7. El plan de desarrollo para los próximos 18 meses**
Dame un plan concreto con hitos semestrales y las acciones específicas para cada uno.

Quiero ser el tipo de abogado que el CEO llama cuando tiene que tomar una decisión difícil, no cuando ya ha tomado una decisión que necesita documentar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar las habilidades que permiten al abogado de empresa convertirse en consejero estratégico del negocio.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Desarrollo profesional en customer success: el plan de carrera del CSM',
                'description'      => 'Las certificaciones, comunidades y habilidades que abren puertas en CS: el plan de carrera que te lleva de CSM a VP.',
                'prompt_content'   => <<<'PROMPT'
Eres un VP of Customer Success con experiencia en scale-ups y empresas SaaS que ha desarrollado equipos desde cero y ha construido su propia carrera desde CSM hasta la posición actual. Conoces las habilidades que importan, las certificaciones que valen la pena (y las que no), las comunidades donde se aprende de verdad y los movimientos de carrera que aceleran el crecimiento.

Quiero diseñar mi plan de desarrollo profesional en customer success. Dame el contexto:

**Mi rol actual:** [CSM, Senior CSM, CS Lead, CS Manager, Director de CS, etc.]
**Años de experiencia en CS:** [meses o años, incluyendo roles anteriores relacionados]
**El tipo de empresa:** [startup, scale-up, enterprise, SaaS B2B, plataforma, etc.]
**Mis fortalezas actuales:** [gestión de relaciones, datos, proceso, expansión, liderazgo de equipo]
**Las habilidades que quiero desarrollar:** [más estratégico, más datos, liderazgo, comercial, etc.]
**Mis objetivos de carrera:** [ser Senior CSM, liderar un equipo, llegar a Director, entrar en una empresa más grande]

Con este contexto, diseña mi plan de desarrollo:

**1. El mapa de carrera en customer success**
El CS es un campo relativamente joven con un mapa de carrera que no siempre es evidente:
- Las trayectorias más comunes: de CSM a manager, de CS a producto, de CS a ventas
- Las habilidades que se necesitan en cada nivel y cuándo desarrollarlas
- La diferencia entre el IC path (individual contributor) y el management path en CS
- Los movimientos laterales que aceleran el crecimiento: a qué roles puede ir un CSM

**2. Las habilidades que más impactan en la carrera de CS**
No todas las habilidades pesan igual según el nivel:
- Para un CSM que quiere llegar a Senior: qué necesita demostrar
- Para un Senior CSM que quiere liderar un equipo: qué necesita desarrollar
- Para un CS Manager que quiere ser Director: qué tiene que cambiar en cómo trabaja
- Para un Director de CS que quiere llegar a VP: qué palancas estratégicas necesita dominar

**3. Las certificaciones de CS que valen la pena**
Dame una evaluación honesta del mercado de certificaciones:
- SuccessCoaching, Gainsight's Pulse Academy, CS Leadership Certification: qué aporta cada una
- La certificación vs. la experiencia: cuándo una certificación compensa y cuándo no
- Las certificaciones de herramientas (Gainsight, ChurnZero, Totango) y cuándo son útiles
- El criterio para elegir una certificación: qué pregunta debo hacerme antes de invertir el tiempo

**4. Las comunidades donde se aprende de verdad en CS**
CS es un campo donde la comunidad importa más que los libros:
- Las comunidades de CS donde se comparten situaciones reales y se recibe feedback útil
- Los eventos y conferencias de CS que justifican la inversión de tiempo
- Las personas en LinkedIn que piensan en voz alta sobre CS de forma útil
- Cómo participar en la comunidad de forma que genere valor para mi carrera

**5. El aprendizaje en el trabajo: cómo sacar más del rol actual**
El mejor aprendizaje de CS está en los clientes, si lo hacemos conscientemente:
- Cómo convertir cada llamada de cliente en un aprendizaje documentado
- El hábito de análisis de churn: qué aprender de cada cliente que se va
- Cómo pedir feedback de calidad al equipo de producto, ventas y soporte
- Los datos del portfolio que revelan patrones de éxito y riesgo

**6. La visibilidad interna y externa como acelerador de carrera**
En CS, la visibilidad genera oportunidades:
- Cómo construir visibilidad interna: presentaciones al liderazgo, liderazgo de iniciativas
- La presencia en LinkedIn: qué tipo de contenido genera más oportunidades para un CSM
- Cómo hablar de los resultados de CS en lenguaje de negocio (NRR, retención, expansión)
- Cómo buscar mentores dentro y fuera de la empresa

**7. El plan de desarrollo para los próximos 12 meses**
Dame un plan concreto con:
- El siguiente nivel de carrera al que aspiro y en qué plazo es realista
- Las tres habilidades o experiencias que necesito añadir para llegar
- Las acciones específicas para este trimestre
- Cómo medir que estoy avanzando en la dirección correcta

Quiero construir una carrera en CS que crezca más rápido que el campo mismo. Ayúdame a hacerlo con intención.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar el plan de carrera en customer success con hitos, habilidades y acciones concretas.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Aprendizaje permanente como freelance: invierte en formación',
                'description'      => 'Cómo los mejores freelancers invierten en formación para mantener la tarifa alta y la demanda constante.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en el desarrollo profesional de freelancers y profesionales independientes. Tu experiencia te ha enseñado que los freelancers que más ganan y que tienen más demanda no son necesariamente los más trabajadores: son los que invierten sistemáticamente en aprendizaje y lo hacen de forma estratégica, eligiendo qué aprender con el mismo criterio que un inversor elige dónde poner su dinero.

Quiero construir un sistema de aprendizaje permanente que mantenga mi tarifa competitiva y mi demanda constante. Dame el contexto:

**Mi especialidad actual:** [qué hago como freelance]
**Mi tarifa actual y la que quiero alcanzar:** [rango en euros por hora o por proyecto]
**Los tipos de clientes que tengo:** [sector, tamaño, perfil del decisor]
**Lo que los clientes más valoran de mi trabajo:** [qué dicen de mí cuando me recomiendan]
**Las áreas donde siento que me estoy quedando atrás:** [tecnologías nuevas, metodologías, habilidades de negocio]
**El tiempo y el presupuesto que puedo dedicar a formación:** [horas semanales y euros anuales]

Con este contexto, diseña mi sistema de aprendizaje permanente:

**1. El diagnóstico de mi situación de aprendizaje actual**
Antes de añadir cosas nuevas, analiza lo que tengo:
- ¿Cuánto tiempo dedico a formación ahora mismo vs. cuánto debería?
- ¿El conocimiento que estoy adquiriendo me acerca a la tarifa que quiero o es ruido?
- ¿Hay brechas de conocimiento que ya están afectando a mi capacidad de conseguir proyectos o de cobrar más?

**2. El ROI del aprendizaje para un freelance**
La formación es una inversión, no un gasto. Ayúdame a calcularla:
- Cómo evaluar qué aprender en función del impacto en mi tarifa y en mi demanda
- La diferencia entre aprender lo que el mercado ya demanda (tarifa estabilizada) y aprender lo que va a demandar (ventaja competitiva)
- Cómo decidir entre profundizar en mi especialidad vs. expandir hacia habilidades complementarias
- El criterio para invertir dinero en formación cuando el presupuesto es limitado

**3. El sistema de detección temprana de lo que viene**
Los mejores freelancers aprenden lo que va a ser demandado antes de que sea demandado:
- Las señales que indican que una tecnología o metodología va a ser relevante en mi sector
- Las fuentes donde los early adopters de mi sector publican lo que están aprendiendo
- Cómo usar las ofertas de trabajo de empresas líderes como señal de qué habilidades van a ser estándar
- El tiempo de adelanto correcto: aprender muy pronto (sin clientes que lo paguen) vs. muy tarde (compitiendo con todos)

**4. La formación que más rápido se traduce en tarifas más altas**
No toda la formación tiene el mismo impacto en los ingresos del freelance:
- Las habilidades técnicas que permiten cobrar más en mi especialidad
- Las habilidades de negocio que todo freelance necesita dominar para subir de nivel
- Las habilidades de comunicación y venta que tienen el mayor retorno para un independiente
- Los formatos de aprendizaje que mejor se adaptan a la forma de trabajar de un freelance

**5. La construcción de credibilidad a través del aprendizaje**
Aprender en público es una estrategia de marketing para freelancers:
- Cómo convertir lo que aprendo en contenido que atrae a mejores clientes
- El caso de estudio de aprendizaje: cómo documentar que he aprendido algo nuevo y he aplicado
- Las certificaciones que mis clientes reconocen y valoran vs. las que no les importan
- La especialización como resultado del aprendizaje deliberado: cómo convertirme en "la persona que sabe de X"

**6. El presupuesto de formación del freelance**
Cuánto invertir y en qué:
- El porcentaje de ingresos que los mejores freelancers invierten en formación
- Cómo distribuir el presupuesto: cursos, libros, conferencias, herramientas, mentoring
- Cómo deducir fiscalmente la formación como gasto del negocio
- Los recursos gratuitos de alta calidad que no requieren presupuesto

**7. El plan de aprendizaje para los próximos 12 meses**
Dame un plan concreto con:
- Las tres áreas de conocimiento en las que me voy a centrar este año
- El presupuesto y el tiempo asignado a cada una
- Los hitos que me dirán si el aprendizaje está generando retorno en mi negocio
- La revisión trimestral del plan: cómo ajusto si las prioridades del mercado cambian

Quiero que mi aprendizaje sea una ventaja competitiva, no una lista de cursos sin terminar. Ayúdame a construir el sistema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir un sistema de aprendizaje permanente que mantenga la tarifa y la demanda del freelance.',
                'vote_score'       => 40,
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
