<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills278Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Upskilling en marketing: cómo mantenerse relevante cuando todo cambia',
                'description'      => 'Sistema para identificar las habilidades de marketing que realmente importan, aprender de forma eficiente y mantenerse actualizado sin agotarse.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con quince años de experiencia que ha sobrevivido a múltiples cambios disruptivos en el sector: el paso de la publicidad tradicional al digital, el auge del inbound, el marketing de contenidos, las redes sociales, la automatización y ahora la IA. Sabes distinguir las tendencias que duran de las que son moda de seis meses, y tienes un sistema personal para aprender de forma eficiente sin dejar de hacer tu trabajo.

Necesito que me ayudes a diseñar mi estrategia de aprendizaje y desarrollo profesional en marketing.

Mi situación actual:
- Rol y especialidad: [tu posición actual y área de marketing en la que te mueves]
- Años de experiencia: [y en qué áreas has trabajado]
- Habilidades que sientes más sólidas: [qué sabes hacer bien]
- Áreas donde sientes que te quedas atrás: [qué te genera inseguridad o que evitas]
- Tiempo disponible para aprender: [horas semanales realistas]
- Objetivo profesional en 2 años: [hacia dónde quieres moverte]
- Tipo de empresa donde trabajas o quieres trabajar: [startup, corporación, agencia, independiente]

Con este contexto, ayúdame a diseñar una estrategia de upskilling concreta:

**1. Diagnóstico de habilidades de marketing relevantes**
Analiza qué habilidades de marketing tienen mayor valor en los próximos tres años diferenciando tres niveles: habilidades que serán imprescindibles para cualquier marketero (debes dominar), habilidades que diferenciarán a los mejores del resto (deberías desarrollar) y habilidades que la IA está automatizando y donde invertir tiempo tiene menos sentido. Relaciona este análisis con mi perfil específico y objetivo profesional.

**2. Mapa de brechas personalizado**
Con base en mi situación actual, identifica las brechas más críticas entre mis habilidades actuales y las que necesito para mi objetivo profesional. Prioriza las brechas por impacto y urgencia, y distingue entre brechas que debo cerrar yo y brechas que puedo cubrir colaborando con otros.

**3. Plan de aprendizaje por trimestre**
Diseña un plan de aprendizaje para los próximos 12 meses organizado en trimestres, con una prioridad clara por período. Para cada trimestre especifica: qué habilidad o conocimiento desarrollar, qué recursos usar (cursos, libros, proyectos, mentores), cómo practicarlo en el trabajo actual y cómo saber si has alcanzado el nivel necesario.

**4. Sistema de aprendizaje continuo**
El mayor problema del upskilling no es encontrar recursos sino mantener el hábito. Diseña un sistema sostenible que incluya: una rutina semanal de aprendizaje compatible con el trabajo, cómo filtrar el ruido informativo del sector (newsletters, podcasts, redes) para quedarte solo con lo que importa, cómo convertir el trabajo del día a día en aprendizaje y cómo crear proyectos de práctica que generen portfolio además de conocimiento.

**5. Aprendizaje sobre IA en marketing**
La IA está cambiando el marketing de forma rápida y desigual. Diseña un plan específico para aprender sobre IA en marketing: qué necesitas entender conceptualmente (no tienes que ser técnico), qué herramientas de IA probar primero y con qué objetivos, cómo incorporar la IA a tu flujo de trabajo actual sin disrumpir tu productividad y cómo usar la IA para aprender más rápido en otras áreas.

**6. Estrategia de visibilidad y reputación**
Aprender sin que nadie lo sepa limita el impacto en tu carrera. Diseña una estrategia para hacer visible tu desarrollo profesional: cómo documentar y compartir lo que aprendes (sin que sea forzado o autopromotivo), qué comunidades de marketing vale la pena cultivar y dónde, cómo construir credibilidad en tu área de especialización y cómo usar tu aprendizaje para generar conversaciones con personas que te interesen profesionalmente.

**7. Métricas de progreso y ajuste del plan**
Define cómo medir si tu estrategia de upskilling está funcionando: indicadores de aprendizaje real (no solo horas invertidas), señales de que estás ganando relevancia en el mercado, cómo revisar y ajustar el plan cada trimestre y cuándo tiene sentido pivotar hacia una especialidad diferente a la que tenías planificada.

Quiero un plan realista que pueda ejecutar compatibilizándolo con un trabajo a tiempo completo, no un plan ideal que requiere veinte horas semanales adicionales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar una estrategia de aprendizaje continuo en marketing que sea sostenible y esté alineada con los objetivos profesionales.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Learning path del developer: cómo aprender nuevas tecnologías sin perder el foco',
                'description'      => 'Sistema para que un desarrollador aprenda de forma eficiente y estratégica sin caer en el tutorial hell ni en el síndrome del objeto brillante.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un desarrollador senior con doce años de experiencia que ha aprendido a aprender de forma eficiente. Conoces el ciclo vicioso del tutorial hell, el síndrome del objeto brillante y la parálisis por análisis que afectan a tantos developers. Has desarrollado un sistema personal de aprendizaje que te permite adoptar nuevas tecnologías de forma rápida y profunda sin perder el foco en lo que realmente importa para tu carrera.

Necesito tu ayuda para diseñar mi estrategia de aprendizaje técnico.

Mi perfil actual:
- Stack actual: [lenguajes, frameworks y herramientas que dominas]
- Años de experiencia: [y en qué tipo de proyectos has trabajado]
- Tecnología o área que quiero aprender: [qué es lo siguiente en tu agenda]
- Razón para aprenderlo: [proyecto concreto, cambio de rol, curiosidad, demanda del mercado]
- Tiempo disponible: [horas reales por semana, distinguiendo días laborables y fin de semana]
- Objetivo en 6 meses: [qué quieres poder hacer con esta tecnología]
- Debilidades en cómo aprendes: [tutorial hell, abandono a mitad, no practicar suficiente, etc.]

Con este contexto, ayúdame a diseñar un learning path eficiente:

**1. Diagnóstico del aprendizaje actual**
Analiza los patrones de aprendizaje ineficientes más comunes en developers y cuáles probablemente me afectan a mí basándote en mi perfil. Explica por qué: los tutoriales dan sensación de aprendizaje sin conocimiento real transferible, completar cursos no es lo mismo que saber hacer algo, aprender sin un proyecto concreto reduce drásticamente la retención y por qué la frustración temprana no es señal de que algo es demasiado difícil.

**2. Marco de aprendizaje por fases**
Diseña un learning path estructurado en fases para la tecnología que quiero aprender: fase de orientación (entender el mapa sin profundizar en todo), fase de fundamentos (lo mínimo imprescindible para empezar a construir algo real), fase de proyecto (aprender construyendo algo concreto con un objetivo claro), fase de profundización (cubrir los gaps identificados durante el proyecto) y fase de consolidación (enseñar, escribir o contribuir para solidificar el conocimiento). Define la duración aproximada y el output esperado de cada fase.

**3. Proyecto de aprendizaje como eje**
El mejor aprendizaje ocurre cuando construyes algo que te importa. Ayúdame a definir un proyecto de práctica: qué características debe tener para ser suficientemente ambicioso (que cubra los conceptos importantes) pero suficientemente acotado (que pueda terminarlo), cómo estructurarlo en milestones semanales para mantener el momentum, cómo gestionar los momentos de bloqueo sin tirar la toalla y cómo documentarlo para que sea útil como portfolio.

**4. Gestión del tiempo y la energía de aprendizaje**
Aprender con trabajo a tiempo completo requiere una gestión muy diferente que hacerlo en un bootcamp. Diseña un sistema que incluya: cuándo en el día aprender (cuándo tienes más capacidad cognitiva), cómo hacer sesiones cortas pero densas (técnicas de aprendizaje activo), cómo mantener el contexto entre sesiones cortas y cómo gestionar las semanas donde la carga de trabajo hace imposible mantener el ritmo.

**5. Recursos de calidad y filtrado de ruido**
El exceso de recursos es un problema tanto como la escasez. Para la tecnología específica que quiero aprender, recomienda: documentación oficial que sí vale la pena leer de principio a fin versus la que es solo referencia, recursos de pago que justifican su precio y cuáles son los mejores de forma gratuita, comunidades donde resolver dudas reales y cómo filtrar el ruido de Twitter/YouTube de tecnología para quedarte solo con lo que aporta valor real.

**6. Aprender a aprender con IA**
La IA está cambiando cómo los developers aprendemos. Diseña un sistema para usar la IA como herramienta de aprendizaje de forma efectiva: cómo usar Claude o Copilot sin que sea un sustituto del aprendizaje real, cómo hacer preguntas a la IA que generen comprensión profunda (no solo soluciones), cómo usar la IA para diseñar retos y ejercicios personalizados y cuándo es correcto pedirle ayuda y cuándo hacerlo impide el aprendizaje.

**7. Gestión del portfolio y visibilidad técnica**
Aprender sin dejar rastro limita las oportunidades profesionales. Diseña una estrategia para hacer visible tu aprendizaje: qué publicar en GitHub para que el portfolio cuente una historia coherente, cómo documentar el proceso de aprendizaje de forma que sea útil para otros y para ti, cuándo tiene sentido escribir sobre lo que estás aprendiendo y cómo conectar tu aprendizaje con oportunidades laborales concretas.

Dame un plan concreto y realista. No quiero un roadmap de 500 horas que nunca voy a completar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar un learning path eficiente para aprender nuevas tecnologías sin caer en el tutorial hell ni en el síndrome del objeto brillante.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design upskilling: las habilidades que el diseñador necesita en los próximos 5 años',
                'description'      => 'Mapa de las habilidades emergentes más relevantes para diseñadores y un sistema para desarrollarlas de forma sostenible sin dejar de ejercer el oficio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con quince años de experiencia que ha visto evolucionar la profesión desde el diseño gráfico tradicional hasta el UX, el diseño de sistemas, el diseño orientado a datos y ahora la IA. Tienes una perspectiva clara sobre qué habilidades perduran, cuáles están emergiendo con fuerza y cuáles están siendo parcialmente automatizadas. Sabes cómo aprender de forma eficiente compatibilizándolo con el trabajo del día a día.

Necesito tu ayuda para diseñar mi estrategia de desarrollo profesional como diseñador.

Mi perfil:
- Especialidad actual: [UX, UI, gráfico, producto, motion, etc.]
- Años de experiencia y contexto: [agencia, empresa de producto, freelance]
- Habilidades donde te sientes fuerte: [qué sabes hacer muy bien]
- Áreas donde sientes que tienes brechas: [qué evitas o donde te sientes inseguro]
- Herramientas que dominas: [tu stack actual de herramientas de diseño]
- Objetivo profesional en 3 años: [dirección en la que quieres moverte]
- Tiempo disponible para aprendizaje: [horas semanales realistas]

Con este contexto, ayúdame a diseñar una estrategia de upskilling concreta:

**1. Panorama de habilidades del diseñador en los próximos 5 años**
Analiza el ecosistema de habilidades de diseño diferenciando tres categorías: habilidades de diseño clásico que siguen siendo fundamentales y no hay que descuidar, habilidades emergentes con alta demanda que marcarán la diferencia, y áreas que la IA está automatizando donde tiene menos sentido invertir tiempo. Dentro de las emergentes, prioriza las más relevantes para mi especialidad y objetivo profesional.

**2. Diseño y datos: la habilidad más subestimada**
Cada vez más, las mejores decisiones de diseño requieren capacidad de trabajar con datos. Diseña un camino de aprendizaje para: entender las métricas de producto y cómo el diseño las impacta, saber leer y cuestionar dashboards de analytics, diseñar experimentos para validar hipótesis de diseño, comunicar el impacto del diseño en lenguaje de negocio y trabajar con datos cualitativos y cuantitativos de forma integrada.

**3. Diseño de sistemas: de skill técnica a ventaja estratégica**
Los design systems son cada vez más una competencia central del diseñador senior. Para mi nivel actual, ayúdame a entender qué aspectos de los sistemas de diseño desarrollar: si soy junior (cómo contribuir y usar un sistema existente), si soy mid (cómo mantener y evolucionar el sistema), si soy senior (cómo diseñar el sistema como infraestructura estratégica y conectarlo con el código).

**4. IA como herramienta y como objeto de diseño**
La IA afecta al diseño en dos dimensiones. Como herramienta, diseña un plan para aprender a usar herramientas de generación de imágenes, copilots de diseño y automatización de tareas repetitivas de forma que amplíen tu capacidad sin sustituir tu criterio. Como objeto de diseño, explica qué necesitas aprender sobre diseño de interfaces de IA (flujos conversacionales, gestión de incertidumbre, diseño de feedback) que son radicalmente diferentes del diseño de software tradicional.

**5. Habilidades de comunicación y liderazgo de diseño**
El diseñador que más crece profesionalmente suele ser el que mejor comunica y lidera, no el que mejor ejecuta. Diseña un plan para desarrollar: cómo presentar trabajo de diseño a stakeholders no técnicos, cómo defender decisiones de diseño con argumentos de negocio, cómo facilitar workshops de discovery y co-diseño, cómo mentorizar a diseñadores junior y cómo influir en la estrategia del producto desde el diseño.

**6. Sistema de aprendizaje sostenible para diseñadores**
Los diseñadores aprenden especialmente bien haciendo. Diseña un sistema de aprendizaje que incluya: cómo hacer side projects que desarrollen las habilidades que necesitas, cómo aprender de los proyectos del trabajo actual extrayendo aprendizajes de forma consciente, qué comunidades y referentes de diseño seguir para mantenerte al día sin agotarte y cómo documentar tu proceso de diseño para construir un portfolio que muestre evolución.

**7. Plan de visibilidad y posicionamiento**
El diseñador que aprende y no comparte tiene la mitad del impacto en su carrera. Diseña una estrategia de visibilidad coherente con tu personalidad: qué plataformas tienen sentido para tu tipo de trabajo y objetivos, qué formato te resulta más natural para compartir (casos de estudio, proceso, reflexiones, tutoriales), cómo construir una audiencia relevante sin convertirte en influencer a tiempo completo y cómo usar tu visibilidad para atraer proyectos o empleadores que encajen con tu dirección.

Quiero un plan que se integre en mi vida profesional actual, no uno que requiera reinventarme completamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Identificar las habilidades de diseño más relevantes para los próximos años y construir un plan de desarrollo profesional sostenible.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Aprendizaje continuo en ventas: los mejores recursos para el comercial moderno',
                'description'      => 'Sistema para que un profesional de ventas mejore continuamente sus habilidades comerciales en un entorno donde el comprador y las herramientas cambian rápidamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas que ha formado a cientos de comerciales a lo largo de su carrera y tiene una perspectiva muy clara sobre qué funciona para mejorar en ventas y qué es una pérdida de tiempo. Conoces la diferencia entre la formación en ventas que genera cambio de comportamiento real y la que solo produce buenas sensaciones en el momento. Sabes que los mejores vendedores aprenden continuamente pero de forma muy selectiva.

Necesito tu ayuda para diseñar mi estrategia de desarrollo profesional en ventas.

Mi contexto:
- Tipo de venta: [B2B/B2C, ciclo largo/corto, producto/servicio, sector]
- Experiencia en ventas: [años y tipo de roles que has tenido]
- Mayor fortaleza actual: [qué se te da especialmente bien]
- Mayor brecha: [qué habilidad o área sabes que necesitas mejorar]
- Objetivo en 12 meses: [qué quieres lograr profesionalmente]
- Tiempo disponible para formación: [horas semanales]
- Contexto de aprendizaje: [si tienes equipo de enablement, si pagas de tu bolsillo, etc.]

Con este contexto, ayúdame a diseñar una estrategia de aprendizaje en ventas:

**1. Las habilidades comerciales que más impactan en los resultados**
Analiza qué habilidades de ventas tienen mayor impacto en el rendimiento real, distinguiendo: habilidades técnicas de venta (metodologías, gestión del proceso, negociación), habilidades de relación (construcción de rapport, confianza, escucha activa), habilidades de conocimiento (producto, sector, competencia, cliente) y habilidades de gestión personal (planificación, resiliencia, disciplina). Para mi perfil específico, identifica las que más impactan en mi situación concreta.

**2. Metodologías de venta: cuál aprender y cuándo**
Hay docenas de metodologías de venta —SPIN, Challenger, MEDDIC, Solution Selling, Gap Selling— y es fácil perderse. Explícame: qué metodologías son más relevantes para mi tipo de venta específica, cuál debería aprender primero y por qué, qué tienen en común las mejores metodologías que debería integrar independientemente de cuál elija y cómo aplicar los principios de una metodología sin seguirla de forma rígida.

**3. Aprender de los mejores vendedores**
El mejor aprendizaje en ventas viene de observar a vendedores excelentes. Diseña una estrategia para aprender de los mejores: cómo identificar a los top performers en mi entorno y qué observar exactamente, cómo solicitar acompañamiento en llamadas y reuniones de forma que no sea incómodo, cómo extraer aprendizajes de mis propias llamadas grabadas, cómo hacer retroalimentación entre pares que sea honesta y útil y cómo aprender de las pérdidas de forma sistemática.

**4. Recursos de aprendizaje en ventas que valen la pena**
Hay muchísimo contenido de ventas de baja calidad. Filtra por mí: qué libros de ventas son realmente imprescindibles y cuáles son los más sobreestimados, qué podcasts aportan valor real versus los que son marketing disfrazado de formación, qué cursos o certificaciones tienen retorno real en el mercado, qué comunidades de ventas son lugares de aprendizaje genuino y cómo distinguir el consejo de ventas que funciona del que solo suena bien en teoría.

**5. Adaptarse al comprador moderno**
El perfil del comprador ha cambiado radicalmente. Diseña un plan para actualizar mis habilidades de adaptación al comprador actual: cómo vender a un comprador que ya ha investigado más que tú antes de la primera reunión, cómo gestionar comités de compra con múltiples stakeholders con intereses distintos, cómo añadir valor real en cada interacción cuando el comprador tiene acceso a toda la información y cómo usar la IA para preparar reuniones y personalizar propuestas de forma eficiente.

**6. Habilidades de comunicación y persuasión**
La comunicación es el núcleo del trabajo de ventas. Diseña un plan para mejorar: escucha activa y formulación de preguntas de alto valor, narrativa y storytelling aplicado a la venta, comunicación escrita en emails y propuestas que destacan, presentaciones que convierten y manejo de objeciones con integridad (sin manipulación). Para cada área, indica qué práctica deliberada tiene más impacto.

**7. Sistema de mejora continua del rendimiento**
Los mejores vendedores se comportan como atletas profesionales: tienen un sistema de mejora continua. Diseña ese sistema: cómo revisar cada venta ganada y perdida para extraer aprendizajes, cómo llevar métricas de tu propio rendimiento que te ayuden a identificar patrones, cómo establecer objetivos de mejora mensualmente y cómo crear un entorno de aprendizaje si tu empresa no lo facilita.

Quiero estrategias que mejoren mis resultados reales, no formación que me haga sentir bien pero no cambia nada en mi pipeline.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir un sistema de desarrollo profesional continuo en ventas que mejore resultados reales y no solo conocimiento teórico.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PM upskilling: las habilidades que distinguen al PM del futuro',
                'description'      => 'Mapa de habilidades para product managers que quieren diferenciarse en un mercado donde el rol está evolucionando con la IA y el enfoque en resultados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product con experiencia en empresas de alto crecimiento que ha contratado, desarrollado y evaluado a decenas de product managers. Tienes una perspectiva clara sobre qué distingue a los PMs que más impacto generan de los que se quedan en el nivel medio, y cómo las habilidades más valoradas en el rol están cambiando con la IA y la mayor exigencia de orientación a resultados de negocio.

Necesito tu ayuda para diseñar mi estrategia de desarrollo profesional como product manager.

Mi contexto:
- Nivel actual: [junior PM, PM, senior PM, principal PM, Head of Product]
- Tipo de producto y empresa: [B2B/B2C, etapa de la empresa, sector]
- Habilidades donde me siento fuerte: [qué reconoces como puntos fuertes]
- Áreas donde siento que me quedo corto: [qué evitas o donde tienes menos confianza]
- Objetivo en 2 años: [dirección de carrera: más seniority, especialización, cambio de contexto]
- Tiempo disponible: [horas semanales para aprendizaje]
- Estilo de aprendizaje: [leer, hacer, escuchar, mentoring, etc.]

Con este contexto, ayúdame a diseñar una estrategia de upskilling concreta:

**1. Habilidades del PM del futuro**
Analiza cómo está evolucionando el rol de PM y qué habilidades tendrán mayor valor en los próximos tres años, diferenciando: habilidades clásicas que siguen siendo imprescindibles (y cómo el estándar de excelencia en ellas está subiendo), habilidades emergentes que pocos PMs tienen y que se están volviendo diferenciales, y áreas que la IA está automatizando donde conviene invertir menos tiempo en ejecución y más en dirección estratégica.

**2. Capacidad de impacto en negocio: la brecha más crítica**
El PM que pasa de bueno a excelente es el que habla el lenguaje del negocio, no solo el del producto. Diseña un plan para desarrollar: cómo conectar las métricas de producto con los objetivos de negocio de forma que dirección lo entienda, cómo calcular el impacto económico de las decisiones de producto, cómo influir en la estrategia de la empresa desde el producto y cómo comunicar el trabajo de producto a stakeholders financieros y ejecutivos.

**3. Product discovery y toma de decisiones con incertidumbre**
El discovery es la habilidad que más diferencia a los PMs senior. Diseña un plan para mejorar en: cómo diseñar research que realmente reduce la incertidumbre antes de comprometer recursos, cómo combinar datos cualitativos y cuantitativos para tomar mejores decisiones de priorización, cómo desarrollar el juicio de producto (la intuición basada en conocimiento profundo del usuario y del mercado) y cómo comunicar decisiones con incertidumbre a un equipo que quiere certeza.

**4. Liderazgo sin autoridad**
El PM no tiene autoridad jerárquica pero debe hacer que ocurran cosas a través de otros. Diseña un plan para mejorar en: cómo construir credibilidad técnica con el equipo de desarrollo sin ser un experto técnico, cómo alinear a stakeholders con intereses contrapuestos, cómo gestionar conflictos de priorización sin quemar relaciones, cómo dar feedback efectivo a diseñadores y developers y cómo liderar un equipo hacia un objetivo ambiguo.

**5. IA aplicada al trabajo del PM**
La IA está cambiando el trabajo de producto de formas concretas. Diseña un plan de aprendizaje para: qué tareas de PM se pueden delegar a la IA ahora mismo (síntesis de investigación, análisis de feedback, redacción de especificaciones), cómo usar la IA para mejorar la calidad de tus decisiones (análisis de escenarios, identificación de sesgos), qué necesitas entender sobre el diseño de productos de IA para trabajar en ese espacio y cómo mantenerte actualizado sin perder foco en el trabajo del día a día.

**6. Recursos y comunidad de producto**
El aprendizaje en producto es especialmente social. Recomienda: libros que realmente cambian cómo se hace producto (no los populares sino los que tienen impacto real), comunidades donde los mejores PMs comparten aprendizajes genuinos, cómo encontrar mentores en el mundo del producto y qué pedirles, qué conferencias o eventos merecen la pena y cómo aprender de PMs de otras empresas a través de casos de estudio y conversaciones.

**7. Portfolio y visibilidad como PM**
El trabajo del PM es difícil de mostrar porque es mayormente invisible. Diseña una estrategia para hacer visible tu desarrollo: cómo documentar decisiones de producto de forma que construyan un portfolio de pensamiento, en qué plataformas tiene sentido tener presencia como PM, cómo escribir sobre producto de forma que demuestre criterio real (no solo teoría) y cómo usar tu visibilidad para atraer las oportunidades que buscas.

Dame un plan adaptado a mi nivel y objetivos específicos, no un genérico para todos los PMs.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Identificar las habilidades diferenciales del PM del futuro y construir un plan de desarrollo profesional orientado al impacto.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'L&D estratégico: aprendizaje organizacional que impacta en el negocio',
                'description'      => 'Cómo diseñar una función de learning and development que genere impacto real en el negocio y no solo actividad formativa bien valorada en las encuestas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Learning and Development con experiencia transformando funciones de formación que eran centros de coste en palancas estratégicas del negocio. Sabes diseñar programas que generan cambio de comportamiento real, medir el impacto de la formación más allá de la satisfacción de los participantes y conectar el aprendizaje organizacional con los resultados de negocio.

Necesito tu ayuda para diseñar o mejorar la estrategia de learning and development de mi organización.

Mi contexto:
- Tamaño de la organización: [número de empleados y estructura]
- Equipo de L&D: [número de personas o si es una función unipersonal]
- Situación actual de la formación: [qué se hace ahora, cómo se percibe, presupuesto]
- Principales retos de negocio que podrían abordarse con formación: [estrategia, cambio, nuevas habilidades]
- Mayor crítica que recibes sobre la función de L&D: [lo que dicen que no funciona]
- Herramientas de aprendizaje actuales: [LMS, plataformas, etc.]
- Objetivo de L&D en los próximos 12 meses: [qué quieres lograr como función]

Con este contexto, ayúdame a diseñar una estrategia de L&D estratégico:

**1. De orden de catálogo a palanca estratégica**
La función de L&D suele estar orientada a la oferta (ofrezco cursos, la gente se apunta) en lugar de a la demanda estratégica (identifico las brechas que impiden lograr los objetivos de negocio y las cierro). Diseña el cambio de modelo: cómo identificar las brechas de habilidades que más impactan en los resultados de negocio, cómo conectar el plan de formación con la estrategia de la empresa, cómo dejar de responder a cada petición de formación por separado y comenzar a trabajar por capacidades y cómo conseguir que el equipo directivo vea L&D como una inversión estratégica.

**2. Diagnóstico de necesidades de aprendizaje**
El error más común en L&D es resolver el problema equivocado. Diseña un proceso de diagnóstico que incluya: cómo distinguir las brechas de habilidades de los problemas de motivación, proceso o contexto que no se resuelven con formación, cómo hacer un análisis de necesidades de aprendizaje que sea rápido pero fiable, cómo priorizar qué brechas cerrar primero y cómo involucrar a los managers en la identificación de necesidades sin que sea un proceso burocrático.

**3. Diseño de experiencias de aprendizaje efectivas**
Hay mucha diferencia entre un curso y una experiencia de aprendizaje que genera cambio de comportamiento. Diseña un modelo de diseño instruccional que incluya: cómo definir los comportamientos objetivo (no los conocimientos sino las acciones que debe generar el aprendizaje), cómo crear actividades de práctica y aplicación, cómo diseñar el soporte post-formación para que el aprendizaje se transfiera al trabajo y cómo combinar formación formal, aprendizaje en el trabajo y aprendizaje entre pares.

**4. Ecosistema de aprendizaje continuo**
La formación formal es solo una parte del aprendizaje organizacional. Diseña un ecosistema completo que incluya: cómo estructurar el aprendizaje informal y en el trabajo, cómo facilitar el intercambio de conocimiento entre pares, cómo crear comunidades de práctica que funcionen de verdad, cómo usar la tecnología para escalar el aprendizaje sin perder la calidad de la experiencia y cómo gestionar el conocimiento organizacional para que no se vaya con las personas.

**5. Medición del impacto de L&D**
Medir solo la satisfacción de los participantes es la trampa más común de L&D. Diseña un sistema de medición en múltiples niveles: reacción e implicación (¿les gustó y participaron?), aprendizaje (¿adquirieron los conocimientos y habilidades objetivo?), aplicación (¿están usando lo que aprendieron en el trabajo?), impacto (¿está mejorando el rendimiento del equipo?). Para cada nivel, indica qué medir, cómo medirlo con un esfuerzo razonable y cómo presentarlo al equipo directivo.

**6. IA en L&D: personalización a escala**
La IA está abriendo posibilidades nuevas en el aprendizaje organizacional. Diseña una estrategia para incorporar la IA de forma pragmática: personalización de rutas de aprendizaje basada en datos de rendimiento, generación de contenido formativo con asistencia de IA, asistentes de aprendizaje conversacionales para el día a día, análisis de datos de aprendizaje para identificar patrones y brechas y cómo evaluar las herramientas de IA para L&D distinguiendo las que tienen impacto real de las que son marketing.

**7. Posicionamiento de L&D como socio estratégico**
La función de L&D debe ganarse un asiento en la mesa de la estrategia. Diseña cómo: establecer las conversaciones correctas con el equipo directivo, comunicar el impacto de L&D en lenguaje de negocio (no en horas de formación sino en resultados), construir alianzas con los managers de línea para que sean socios del aprendizaje y no solo clientes y cómo gestionar la reputación de la función cuando los resultados tarden en ser visibles.

Quiero estrategias concretas, no el marco teórico de Kirkpatrick que todos conocemos pero pocos aplican bien.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar una función de L&D estratégica que genere impacto en el negocio y no solo actividad formativa bien valorada en encuestas.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Upskilling financiero: del Excel al análisis avanzado y la IA',
                'description'      => 'Plan de desarrollo para profesionales de finanzas que quieren evolucionar más allá del Excel hacia el análisis avanzado, la visualización de datos y la IA financiera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO moderno que ha liderado la transformación digital de su propio departamento financiero. Has pasado personalmente del Excel como herramienta central a un stack más moderno de análisis financiero, y sabes qué habilidades son realmente necesarias para ese salto y cuáles son ruido. Tienes una perspectiva realista sobre cuánto tiempo lleva desarrollar cada habilidad y qué nivel de profundidad técnica necesita realmente un profesional de finanzas.

Necesito tu ayuda para diseñar mi plan de desarrollo profesional como financiero.

Mi perfil:
- Rol actual: [controller, analista financiero, CFO, tesorero, etc.]
- Sector y tamaño de empresa: [contexto donde trabajas]
- Habilidades técnicas actuales: [Excel avanzado, Power BI, SQL, Python, etc.]
- Mayor limitación actual: [qué análisis no puedes hacer, qué procesos son demasiado lentos]
- Objetivo en 2 años: [qué quieres poder hacer que ahora no puedes]
- Tiempo disponible: [horas semanales realistas para aprendizaje]
- Motivación para el cambio: [eficiencia personal, cambio de rol, demanda del mercado]

Con este contexto, diseña mi plan de upskilling:

**1. Mapa de habilidades del financiero moderno**
Analiza el mapa de habilidades del profesional de finanzas diferenciando: habilidades técnicas financieras clásicas que siguen siendo imprescindibles, habilidades de datos y tecnología que están volviéndose necesarias, habilidades de comunicación e influencia que distinguen al CFO del analista y habilidades de IA financiera que están emergiendo. Para mi perfil específico, identifica cuáles son más críticas y cuáles puedo prescindir por ahora.

**2. Evolución más allá del Excel**
El Excel seguirá siendo útil, pero depender exclusivamente de él tiene limitaciones serias. Diseña un plan de evolución que responda: cuándo tiene sentido seguir en Excel versus mover el análisis a otra herramienta, qué aprender primero —Power BI, SQL o Python— y en función de qué criterio, cómo aprender SQL para análisis financiero sin convertirse en ingeniero de datos y cuándo Python tiene sentido para un financiero y cuándo es excesivo para las necesidades reales del puesto.

**3. Business intelligence y visualización financiera**
El reporting financiero está evolucionando del PDF estático al dashboard interactivo. Diseña un plan para: aprender las herramientas de BI más relevantes para finanzas (Power BI, Tableau, Looker), cómo diseñar dashboards financieros que dirección realmente use, cómo conectar las fuentes de datos del ERP con las herramientas de visualización y cómo pasar de producir informes a habilitar el acceso a datos de forma autónoma para los equipos.

**4. Modelización financiera avanzada**
El modelo financiero es el artefacto central del trabajo de análisis. Diseña un plan para mejorar en: mejores prácticas de construcción de modelos (flexibilidad, auditabilidad, velocidad), modelización de escenarios y análisis de sensibilidad, modelos de valoración específicos para mi sector, cómo conectar los modelos financieros con datos operativos en tiempo real y cómo usar la IA para acelerar la construcción y el análisis de modelos.

**5. IA aplicada a las finanzas**
La IA está transformando el trabajo financiero de formas concretas. Diseña un plan para aprender sobre: qué tareas financieras se pueden automatizar con IA ahora mismo (reconciliaciones, categorización, detección de anomalías), cómo usar modelos de lenguaje para análisis de contratos, informes anuales y documentación financiera, qué necesitas entender sobre IA para evaluar y supervisar las herramientas que implementa tu empresa y qué nivel de comprensión técnica es suficiente para un CFO o controller sin ser ingeniero.

**6. Habilidades de comunicación e influencia**
El financiero que más valor aporta es el que puede traducir los números en decisiones. Diseña un plan para desarrollar: cómo presentar análisis financiero complejo de forma clara para no financieros, cómo contar historias con datos que lleven a la acción, cómo influir en decisiones de negocio con análisis financiero (no solo reportar lo que pasó) y cómo construir credibilidad como socio estratégico del negocio.

**7. Plan de aprendizaje realista por etapas**
Con todo lo anterior, diseña un plan de aprendizaje por trimestres para los próximos 12 meses, priorizando lo que más impacto tiene en mi situación específica. Para cada trimestre, indica qué aprender, cómo practicarlo en mi trabajo actual y cómo saber si he alcanzado el nivel suficiente para pasar al siguiente. Incluye recursos concretos para cada etapa y cómo compaginar el aprendizaje con un trabajo a tiempo completo.

Quiero un plan que tenga impacto en mi carrera real, no una lista interminable de tecnologías que aprender.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar un plan de upskilling para profesionales de finanzas que quieren evolucionar hacia el análisis avanzado y la IA financiera.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Formación continua en derecho: cómo mantenerse al día en un sector que cambia',
                'description'      => 'Sistema para que el abogado se mantenga actualizado en un entorno legal en constante cambio legislativo, jurisprudencial y tecnológico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior con veinte años de experiencia que ha desarrollado un sistema eficiente para mantenerse al día en su especialidad sin consumir todo su tiempo en formación. Conoces la diferencia entre la formación jurídica que realmente actualiza el conocimiento práctico y la que solo cuenta para el expediente del colegio profesional. Sabes cómo aprender de la práctica, de los colegas y de las fuentes más relevantes de cada área del derecho.

Necesito tu ayuda para diseñar mi estrategia de formación continua como abogado.

Mi contexto:
- Especialidad jurídica: [área del derecho en la que trabajas principalmente]
- Tipo de práctica: [despacho, empresa, administración pública, docencia]
- Años de experiencia: [y en qué áreas has trabajado]
- Mayor reto de actualización actual: [qué cambios legales o tecnológicos te generan más urgencia]
- Obligaciones de formación colegial: [créditos o horas requeridas por tu colegio profesional]
- Tiempo disponible para formación: [horas semanales]
- Objetivo: [mantenerte actualizado, especializarte más, cambiar de área, añadir competencias tecnológicas]

Con este contexto, diseña mi estrategia de formación continua:

**1. El paisaje de cambio jurídico que debes seguir**
Analiza las fuentes de cambio más relevantes para mi especialidad: legislación nueva y en tramitación, jurisprudencia del Tribunal Supremo y de los tribunales relevantes para mi área, normativa europea con impacto en el derecho nacional, cambios en la práctica procesal y en los criterios de los organismos reguladores. Para cada fuente, indica qué nivel de seguimiento necesitas (diario, semanal, mensual) y qué herramientas usar para ese seguimiento.

**2. Sistema de seguimiento jurisprudencial**
La jurisprudencia es la fuente que más impacta en la práctica diaria. Diseña un sistema de seguimiento que sea sostenible: cómo usar los servicios de alertas jurisprudenciales de forma eficiente, cómo leer sentencias para extraer lo que importa en el menor tiempo posible, cómo gestionar una base de conocimiento jurisprudencial que sea útil para ti y para tu equipo y cómo compartir jurisprudencia relevante con clientes de forma que aporte valor diferencial.

**3. Formación jurídica de calidad versus cumplimiento de expediente**
Hay mucha diferencia entre la formación que actualiza el conocimiento real y la que solo cumple con los requisitos colegiales. Diseña un sistema que optimice ambas: qué tipos de formación tienen mayor impacto en la práctica real (no solo en el expediente), cómo elegir cursos y seminarios que aporten valor genuino, cuándo vale la pena una formación larga (máster, especialización) y cuándo es excesivo para el objetivo que tengo y cómo combinar la formación formal con el aprendizaje informal del día a día.

**4. Derecho y tecnología: lo que el abogado necesita saber**
La tecnología está cambiando el derecho de forma profunda y desigual. Diseña un plan para mantenerse al día: qué necesitas entender sobre legaltech para evaluar las herramientas que impactan en tu práctica, qué conocimiento jurídico sobre nuevas tecnologías es urgente desarrollar (IA, datos personales, criptoactivos, según mi especialidad), cómo usar herramientas de IA de forma segura y responsable en la práctica jurídica y qué cursos o recursos de calidad existen en la intersección de derecho y tecnología.

**5. Red de conocimiento y aprendizaje entre pares**
El conocimiento jurídico más valioso a menudo circula entre profesionales, no en los libros. Diseña una estrategia de aprendizaje entre pares: qué comunidades o grupos de práctica vale la pena cultivar para tu especialidad, cómo mantener contacto con jueces, registradores o funcionarios relevantes para tu área de forma que genere conocimiento de calidad, cómo aprender de los colegas más especializados y cómo contribuir al intercambio de conocimiento de forma que construya tu reputación.

**6. Habilidades no jurídicas que el abogado necesita**
La práctica jurídica requiere cada vez más habilidades que no se aprenden en la facultad. Diseña un plan para desarrollar: habilidades de comunicación con clientes no juristas (explicar el derecho sin jerga), habilidades de negociación y gestión de conflictos, comprensión del negocio del cliente (para dar asesoramiento jurídico relevante para su realidad), gestión del tiempo y eficiencia (para ser rentable en la práctica) y uso de la tecnología en el trabajo jurídico cotidiano.

**7. Plan de formación sostenible por trimestre**
Diseña un plan de formación para los próximos 12 meses que sea compatible con la carga de trabajo real de un abogado en activo. Para cada trimestre, indica: qué área de conocimiento priorizar, qué formato de formación usar (curso, seminario, lectura, práctica), cómo cumplir con los requisitos colegiales de forma eficiente y cómo medir si el plan está teniendo impacto en la calidad del asesoramiento que prestas.

Quiero un sistema de formación que se integre en la práctica real, no un plan de estudios que requiere volver a ser estudiante.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar un sistema de formación continua jurídica que mantenga al abogado actualizado sin consumir todo su tiempo facturable.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS upskilling: las habilidades que el CSM necesita para evolucionar su carrera',
                'description'      => 'Plan de desarrollo para customer success managers que quieren avanzar hacia roles de mayor impacto y responsabilidad en organizaciones SaaS.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success que ha construido y desarrollado equipos de CS en empresas SaaS en diferentes etapas de crecimiento. Tienes una perspectiva clara sobre qué habilidades distinguen a los CSMs que más crecen en su carrera y qué caminos existen para evolucionar más allá del rol de gestión de cartera de clientes. Conoces los sesgos más comunes en el desarrollo de CSMs y cómo evitarlos.

Necesito tu ayuda para diseñar mi estrategia de desarrollo profesional como customer success manager.

Mi contexto:
- Nivel actual: [CSM junior, CSM, senior CSM, lead CSM, manager de CS]
- Tipo de clientes que gestiono: [enterprise, mid-market, SMB, y cuántos clientes]
- Años de experiencia en CS: [y en qué industrias o tipos de producto]
- Habilidades que reconoces como fortalezas: [qué se te da especialmente bien]
- Habilidades donde sientes brechas: [qué evitas o donde tienes menos confianza]
- Objetivo de carrera en 2 años: [dirección que quieres tomar]
- Mayor frustración en el rol actual: [qué limitaciones sientes]

Con este contexto, diseña mi estrategia de upskilling:

**1. Mapa de habilidades del CSM de alto impacto**
Analiza qué habilidades distinguen a los CSMs que generan mayor impacto y crecen más rápido, diferenciando: habilidades de relación y gestión del cliente (el núcleo del rol), habilidades de negocio y análisis (para tener conversaciones de valor con ejecutivos), habilidades de datos y tecnología (para escalar sin perder calidad), habilidades de liderazgo e influencia (para evolucionar más allá del rol individual) y habilidades de comunicación y storytelling (para vender internamente el valor del CS). Para mi nivel y objetivo, prioriza las más críticas.

**2. Evolución de gestión de cuentas a socio estratégico**
El mayor salto de carrera en CS es el que va de CSM que gestiona cuentas a CS que es un socio estratégico del cliente. Diseña un plan para hacer ese salto: cómo pasar de conversaciones operativas a conversaciones estratégicas con los ejecutivos del cliente, cómo construir credibilidad más allá del conocimiento del producto, cómo conectar el uso del producto con los objetivos de negocio del cliente, cómo anticipar problemas antes de que el cliente los detecte y cómo añadir valor en cada interacción sin necesidad de que haya un problema que resolver.

**3. Datos y análisis aplicados al trabajo del CSM**
Los mejores CSMs toman decisiones basadas en datos, no solo en intuición. Diseña un plan para mejorar en: cómo interpretar los datos de uso del producto para tener conversaciones informadas con el cliente, cómo construir y presentar business reviews con impacto, cómo usar los datos de health scoring para priorizar el tiempo de atención y cómo medir y comunicar el ROI que genera el CSM a sus cuentas y a la empresa.

**4. Habilidades de expansión y revenue**
El CS que aporta más valor al negocio es el que contribuye al crecimiento de los ingresos. Diseña un plan para desarrollar habilidades de expansión: cómo identificar oportunidades de upsell y cross-sell de forma orgánica (sin parecer un vendedor), cómo gestionar el proceso de renovación de forma proactiva, cómo involucrar al equipo de ventas en la expansión de cuentas de forma colaborativa y cómo medir y comunicar el impacto del CS en el net revenue retention.

**5. Caminos de carrera desde el CS**
El CS es una plataforma para muchos caminos de carrera. Explora las opciones más comunes y lo que se necesita para cada una: CS senior y lead (gestión de cuentas de mayor complejidad), management de CS (liderar un equipo de CSMs), revenue operations (diseño de procesos y sistemas de CS), product (llevar el conocimiento del cliente al producto), sales o account management (mover al lado de ventas) y consultoría o advisory. Para mi objetivo específico, indica qué habilidades desarrollar con mayor urgencia.

**6. Recursos y comunidad de CS**
El aprendizaje en customer success tiene una comunidad activa. Recomienda: libros y recursos que realmente impactan en la práctica (no solo los más populares), comunidades donde los mejores CSMs comparten aprendizajes genuinos, cómo encontrar mentores en el mundo del CS y qué preguntarles, cómo aprender de los mejores CSMs de tu empresa y de otras y qué certificaciones tienen valor real en el mercado versus las que son solo marketing.

**7. Plan de visibilidad y posicionamiento profesional**
El CSM que construye visibilidad abre más y mejores oportunidades. Diseña una estrategia para: cómo compartir aprendizajes de CS de forma que demuestre expertise real, en qué plataformas tiene sentido tener presencia para el perfil de CS, cómo construir una reputación en la comunidad de customer success y cómo usar la visibilidad para atraer oportunidades de carrera alineadas con tu objetivo.

Quiero un plan que tenga impacto real en mi carrera, no una lista de cursos de certificación que no abren puertas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar una estrategia de desarrollo profesional para CSMs que quieren evolucionar hacia roles de mayor impacto y responsabilidad.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Aprendizaje del freelance: invertir en conocimiento para cobrar más',
                'description'      => 'Cómo un profesional independiente decide en qué aprender, cuánto tiempo y dinero invertir en formación y cómo convertir el aprendizaje en tarifas más altas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con doce años de experiencia que ha pasado de cobrar tarifas de mercado a convertirse en un referente de su especialidad con tarifas premium. Has aprendido a seleccionar muy bien en qué invertir tiempo y dinero para aprender, porque como freelance el tiempo de formación compite directamente con el tiempo facturable. Tienes un sistema claro para decidir qué aprender, cómo aprenderlo eficientemente y cómo convertir ese aprendizaje en más y mejores proyectos.

Necesito tu ayuda para diseñar mi estrategia de aprendizaje y desarrollo profesional como freelance.

Mi contexto:
- Tipo de servicio: [diseño, desarrollo, consultoría, redacción, formación, etc.]
- Años de experiencia freelance: [y en qué sector o tipo de clientes]
- Tarifa actual: [rango aproximado por hora o por proyecto]
- Habilidades que son tu diferenciador actual: [qué te hace diferente de otros freelances]
- Objetivo de tarifa o posicionamiento en 18 meses: [hacia dónde quieres ir]
- Tiempo que puedes dedicar al aprendizaje: [horas semanales sin afectar los ingresos]
- Presupuesto para formación: [lo que puedes invertir anualmente]

Con este contexto, diseña mi estrategia de aprendizaje freelance:

**1. El dilema del tiempo del freelance**
El tiempo que dedicas a aprender es tiempo que no facturas. Pero no aprender es arriesgarse a quedarse obsoleto. Diseña un marco para tomar estas decisiones: cómo calcular el coste de oportunidad real de cada hora de formación, cuándo tiene sentido invertir tiempo en aprender algo aunque no lo necesites ahora mismo, cuándo es más eficiente subcontratar o colaborar en lugar de aprender y cómo encontrar el equilibrio entre carga de trabajo y formación continua.

**2. Aprender para subir tarifas, no para saber más**
Como freelance, el aprendizaje debe traducirse en mejores proyectos o tarifas más altas. Diseña un sistema de decisión basado en el retorno: qué habilidades justifican una subida de tarifa inmediata, qué conocimiento añade valor percibido aunque no sea técnicamente necesario, cómo posicionar el aprendizaje nuevo frente a clientes actuales y potenciales y cuándo es mejor profundizar en la especialidad versus diversificarse hacia áreas adyacentes.

**3. Especialización versus generalismo**
El debate generalista versus especialista es especialmente relevante para freelances. Analiza mi situación y recomienda: si debería especializarme más en una niche concreta y cuál, si tiene sentido desarrollar una segunda especialidad y con cuál, cómo posicionarme en el mercado de forma que la especialización justifique tarifas premium y cómo comunicar mi diferenciación de forma que los clientes la entiendan y paguen por ella.

**4. Aprender de los proyectos actuales**
Los mejores freelances aprenden constantemente de su propio trabajo. Diseña un sistema para aprender de los proyectos del día a día: cómo extraer aprendizajes sistemáticos de cada proyecto que terminas, cómo usar los proyectos retadores como formación práctica, cómo documentar el conocimiento que generas para que sea útil en el futuro y cómo convertir los errores y problemas en aprendizaje que no se repita.

**5. Formación de alto retorno para freelances**
No toda la formación tiene el mismo retorno para un profesional independiente. Evalúa qué tipos de formación tienen mayor retorno: cursos técnicos versus habilidades de negocio y comunicación, certificaciones que tienen valor real en el mercado versus las decorativas, libros y recursos gratuitos que compiten en calidad con los cursos de pago, mentoring y coaching para freelances y la formación que genera red de contactos además de conocimiento. Para mi especialidad, recomienda la inversión de mayor retorno.

**6. Construcción de autoridad a través del aprendizaje**
Compartir lo que aprendes es una de las mejores estrategias de marketing para freelances. Diseña un sistema para: cómo documentar y compartir el proceso de aprendizaje de forma que genere visibilidad, qué formato encaja con tu personalidad y tipo de trabajo (artículos, tutoriales, proyectos públicos, hablar en eventos, newsletter), cómo construir una audiencia que sea fuente de proyectos y referencias y cómo monetizar el conocimiento más allá del trabajo por proyectos (cursos, consultoría, talleres).

**7. Plan de aprendizaje anual con ROI estimado**
Diseña un plan de aprendizaje para los próximos 12 meses que incluya: qué aprender en cada trimestre y por qué es prioritario, cuánto tiempo y dinero invertir en cada área, cuándo debería empezar a ver el retorno en forma de nuevos proyectos o tarifas más altas y cómo ajustar el plan si los clientes no valoran lo que estás aprendiendo de la forma esperada.

Quiero un plan que tenga un retorno económico claro y medible, no solo enriquecimiento personal. El aprendizaje debe pagar la inversión de tiempo y dinero que requiere.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar una estrategia de aprendizaje como freelance que tenga retorno económico directo en forma de tarifas más altas y mejores proyectos.',
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
