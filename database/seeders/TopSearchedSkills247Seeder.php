<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills247Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Agile marketing: sprints, retrospectivas y backlog de campañas',
                'description'       => 'Aplica las metodologías ágiles al equipo de marketing: organiza el trabajo en sprints de dos semanas, prioriza el backlog de campañas y extrae aprendizajes en cada retrospectiva para mejorar continuamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en agile marketing con amplia experiencia aplicando metodologías ágiles a equipos de marketing de empresas en crecimiento. Necesito que me ayudes a transformar la forma en que mi equipo de marketing planifica, ejecuta y mejora sus campañas usando principios ágiles.

Mi contexto:
- Tamaño del equipo de marketing: [número de personas y roles principales]
- Tipo de campañas que gestiona el equipo: [email marketing, redes sociales, eventos, contenido, paid, etc.]
- Proceso de planificación actual: [cómo se planifica ahora: trimestral, mensual, ad hoc]
- Mayor problema con el proceso actual: [cambios de prioridad constantes, falta de visibilidad, trabajo en silos, etc.]
- Herramientas que ya usáis: [Notion, Asana, Jira, Trello, hojas de cálculo, etc.]

Con ese contexto, dame:

1. CÓMO ESTRUCTURAR EL BACKLOG DE CAMPAÑAS DE MARKETING
Explícame qué es un backlog de marketing y cómo diferenciarlo del backlog de producto. Dame la estructura de una épica y una historia de usuario adaptadas al marketing: cómo redactar cada ítem del backlog con su criterio de aceptación, su impacto esperado (métrica que mueve) y su estimación de esfuerzo. Muéstrame un ejemplo real con tres ítems del backlog para una campaña de lanzamiento de producto.

2. EL SPRINT DE MARKETING: DISEÑO Y CADENCIA
¿Qué duración de sprint funciona mejor en marketing y por qué? Guíame en el diseño del primer sprint de marketing del equipo: la sprint planning (cómo seleccionar ítems del backlog, cómo distribuir la capacidad del equipo, cómo definir el sprint goal de marketing), las ceremonias diarias adaptadas a marketing (un standup que no dure 45 minutos) y la sprint review (cómo presentar resultados al negocio en términos de impacto, no de tareas completadas).

3. LA RETROSPECTIVA DE MARKETING QUE FUNCIONA DE VERDAD
Dame el formato de retrospectiva más efectivo para equipos de marketing: cómo estructurar los 60 minutos, qué preguntas hacer para identificar los bloqueos reales (no los síntomas), cómo priorizar los action items y cómo hacer seguimiento para que los acuerdos se implementen. Incluye tres dinámicas de retrospectiva adaptadas a equipos creativos que no vienen de entornos técnicos.

4. PRIORIZACIÓN DEL BACKLOG: CÓMO DECIDIR QUÉ ENTRA EN EL SPRINT
¿Cómo priorizar cuando todo parece urgente? Explícame los marcos de priorización más útiles para marketing: el ICE score (Impact, Confidence, Ease), el RICE score y cómo combinarlos con el juicio estratégico. Dame el proceso de backlog refinement para equipos de marketing: con qué frecuencia hacerlo, quién debe participar y cómo conseguir que las solicitudes del negocio entren por el backlog en lugar de interrumpir los sprints.

5. MÉTRICAS DE VELOCIDAD Y CAPACIDAD EN MARKETING ÁGIL
¿Cómo medir la velocidad del equipo de marketing sin usar puntos de historia de la forma habitual? Dame métricas alternativas adaptadas a marketing: el throughput (ítems completados por sprint), el cycle time (tiempo desde que un ítem empieza hasta que se publica), la tasa de cambios de prioridad dentro del sprint y cómo usar esos datos para hacer predicciones de capacidad más fiables.

6. AGILE MARKETING EN UN EQUIPO MIXTO O DISTRIBUIDO
¿Cómo funciona el agile marketing cuando el equipo mezcla empleados internos, freelancers y agencias externas? Dame las adaptaciones necesarias para gestionar el backlog, los sprints y las ceremonias en un equipo distribuido geográficamente o con proveedores externos con dinámicas de trabajo distintas.

7. ERRORES FRECUENTES AL IMPLEMENTAR AGILE EN MARKETING
Lista los seis errores más habituales que cometen los equipos de marketing al adoptar metodologías ágiles: el scrumfall (agile en la forma pero waterfall en la mentalidad), los sprints que se convierten en to-do lists semanales, la ausencia de un product owner claro en marketing, la resistencia del equipo creativo a la estimación y los rituales que consumen más tiempo del que ahorran. Para cada error, dame la solución práctica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Implementar metodologías ágiles en el equipo de marketing con sprints, backlog de campañas y retrospectivas efectivas.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Scrum avanzado: cómo un equipo de ingeniería sale del caos',
                'description'       => 'Diagnóstica y corrige los problemas más habituales en equipos de desarrollo que usan Scrum mal: sprints que no cierran, deuda técnica acumulada y estimaciones que nunca se cumplen.',
                'prompt_content'    => <<<'PROMPT'
Eres un Scrum Master y agile coach con experiencia en equipos de ingeniería de software de empresas en fase de crecimiento. Necesito tu ayuda para diagnosticar los problemas de nuestro proceso Scrum actual y construir un plan de mejora concreto.

Mi contexto:
- Tamaño del equipo de desarrollo: [número de personas y roles: devs, QA, diseño, etc.]
- Tiempo que lleváis usando Scrum: [meses o años]
- Duración actual de los sprints: [1, 2 o 3 semanas]
- Principales síntomas del problema: [sprints que no cierran, estimaciones siempre mal, deuda técnica creciente, retrospectivas que no cambian nada, conflictos con el product owner, etc.]
- Velocidad media actual si la conocéis: [story points o ítems por sprint]
- Stakeholders principales fuera del equipo: [CEO, CPO, clientes directos, etc.]

Con ese contexto, dame:

1. DIAGNÓSTICO DE LOS DISFUNCIONALES DE SCRUM MÁS HABITUALES
Explícame los diez antipatrones de Scrum más frecuentes en equipos de ingeniería en crecimiento y cómo reconocerlos: el sprint que siempre arrastra trabajo al siguiente, el refinement que no refina nada, el daily que se convierte en reporte de estado, la velocidad que varía un 40% entre sprints, el product owner que no está disponible y el backlog que nadie mira. Para cada antipatrón dame la señal de alarma temprana y la intervención que funciona.

2. ESTIMACIÓN Y PLANIFICACIÓN: CÓMO HACERLO BIEN
¿Por qué fallan las estimaciones en la mayoría de los equipos? Dame el proceso correcto de estimación relativa con story points: la importancia de tener una historia de referencia (anchor story), cómo hacer planning poker de forma eficiente (sin que se convierta en debate interminable), cómo manejar los ítems que el equipo no sabe estimar y cómo usar la velocidad histórica para hacer predicciones creíbles de entrega.

3. GESTIÓN DE LA DEUDA TÉCNICA EN EL CONTEXTO ÁGIL
¿Cómo incorporar la gestión de la deuda técnica en el proceso Scrum sin que el negocio sienta que el equipo no está entregando valor? Dame el marco para cuantificar la deuda técnica (en términos de impacto en velocidad o en riesgo), cómo incluirla en el backlog con criterios de priorización comparables a las historias de negocio, y cuál es el porcentaje de capacidad del sprint que debería destinarse a deuda técnica en diferentes fases del producto.

4. EL DEFINITION OF DONE QUE REALMENTE FUNCIONA
¿Cómo diseñar un DoD que sea exigente pero alcanzable y que el equipo respete? Dame los criterios mínimos que debería incluir un DoD para un equipo de desarrollo web o de producto SaaS, cómo involucrar al equipo en su diseño para que se apropie de él, y cómo evolucionar el DoD a medida que el equipo madura sin que se convierta en un documento que nadie lee.

5. LA RELACIÓN ENTRE EL EQUIPO DE INGENIERÍA Y EL PRODUCT OWNER
¿Cómo mejorar la colaboración entre el equipo de desarrollo y el product owner cuando hay fricción? Dame el protocolo de refinement efectivo: la cadencia ideal, quién debe participar, cómo preparar las historias antes de la sesión para no perder el tiempo del equipo y cómo gestionar los cambios de prioridad que llegan a mitad del sprint sin romper el proceso.

6. MÉTRICAS ÁGILES QUE EL EQUIPO Y EL NEGOCIO DEBEN MONITORIZAR
Dame las seis métricas clave para un equipo de ingeniería que usa Scrum: velocity, predictability rate (% de ítems completados respecto a los comprometidos), cycle time, lead time, deuda técnica como % del backlog y tasa de bugs en producción por sprint. Para cada métrica explícame cómo calcularla, qué valor es saludable y qué acción tomar cuando está fuera de rango.

7. EL PLAN DE MEJORA DE 90 DÍAS
Dame un plan de mejora de 90 días para un equipo de ingeniería con el proceso Scrum disfuncional: qué cambiar en las primeras dos semanas (wins rápidos que generen confianza), qué trabajar en el mes dos (cambios estructurales que requieren más tiempo) y qué evaluar al final de los 90 días para saber si la mejora es sostenible. Incluye cómo comunicar el plan al equipo y a los stakeholders para conseguir su compromiso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diagnosticar y corregir las disfunciones de Scrum en un equipo de ingeniería para mejorar la predictabilidad y la calidad de las entregas.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design sprints: resolver problemas de UX en 5 días',
                'description'       => 'Facilita un design sprint completo para validar ideas de producto antes de construirlas: el proceso de 5 días de Google Ventures adaptado a equipos pequeños y startups.',
                'prompt_content'    => <<<'PROMPT'
Eres un facilitador experto en design sprints con experiencia en equipos de producto y diseño de startups y empresas de tecnología. Necesito que me ayudes a planificar y facilitar un design sprint para resolver un problema de UX o validar una idea de producto.

Mi contexto:
- El problema o pregunta que quiero resolver con el sprint: [describe el reto de diseño o la hipótesis a validar]
- Equipo disponible para el sprint: [roles que pueden participar: diseño, producto, desarrollo, negocio, etc.]
- Disponibilidad real del equipo: [5 días completos / 5 tardes / formato condensado de 3 días]
- Recursos para el prototipo y el test: [presupuesto para reclutamiento de usuarios, herramientas de prototipado disponibles]
- Restricciones importantes: [plazos de desarrollo, decisiones ya tomadas, partes del problema que no están en juego]

Con ese contexto, dame:

1. DÍA 1: COMPRENDER Y MAPEAR EL PROBLEMA
Guíame en el diseño del día 1 del design sprint: cómo estructurar la sesión de entendimiento del problema (las entrevistas con expertos internos, el customer journey map, el mapa del sprint), cómo definir el objetivo a largo plazo y las preguntas sprint usando el formato "¿Podríamos... para que...?", y cómo elegir el foco del sprint (el momento crítico del journey donde testear). Dame la agenda hora a hora con los ejercicios, materiales y tiempos de cada actividad.

2. DÍA 2: DIVERGIR Y BUSCAR SOLUCIONES
¿Cómo facilitar la sesión de ideación del día 2 para que sea productiva y no derive en sesión de brainstorming caótica? Dame la secuencia de ejercicios: el lightning demos (búsqueda de soluciones existentes en otras industrias), el sketch de cuatro pasos (notas, ideas, crazy 8s, solución detallada) y cómo crear el ambiente que permita al equipo técnico y al de negocio contribuir en igualdad de condiciones.

3. DÍA 3: DECIDIR Y PLANIFICAR EL PROTOTIPO
¿Cómo tomar la mejor decisión sobre qué solución prototipar cuando hay varias propuestas sobre la mesa? Dame el proceso de decisión del día 3: el museo de arte (sticky decisions), el mapa de calor, la votación supervisada y cómo el decider toma la decisión final sin que el equipo sienta que ha sido ignorado. Incluye cómo crear el storyboard del prototipo: cuántos pasos necesita, qué nivel de fidelidad es suficiente y cómo dividir el trabajo de construcción entre los miembros del equipo.

4. DÍA 4: CONSTRUIR EL PROTOTIPO REALISTA EN UN DÍA
¿Cómo construir un prototipo suficientemente realista para el test de usuario en un solo día? Dame las herramientas y el proceso: cómo usar Figma, Keynote o incluso herramientas no digitales para construir un prototipo de alta percepción con bajo esfuerzo real, cómo dividir los roles del equipo durante la construcción y qué calidad mínima necesita el prototipo para generar aprendizaje válido en el test del día 5.

5. DÍA 5: EL TEST CON USUARIOS REALES
Guíame en el diseño del test de usuario del día 5: cómo reclutar cinco usuarios representativos en 48 horas, el guión de la sesión de test (introducción, tareas, preguntas de seguimiento sin leading), cómo observar y tomar notas de forma sistemática con el equipo y cómo hacer el análisis de resultados en tiempo real usando el método de patrones. Dame las señales que indican que la solución funciona y las que indican que hay que volver a iterar.

6. DESIGN SPRINT ADAPTADO A EQUIPOS PEQUEÑOS
¿Cómo adaptar el design sprint cuando el equipo tiene 2 o 3 personas en lugar de 7? Dame el formato condensado para equipos pequeños: qué ejercicios eliminar, cuáles comprimir, cómo compensar la falta de diversidad de perspectivas (invitar a stakeholders puntuales, entrevistas rápidas a usuarios al inicio) y qué nivel de fidelidad del prototipo es razonable con recursos limitados.

7. ERRORES QUE HACEN FRACASAR UN DESIGN SPRINT
Lista los seis errores más frecuentes que hacen que un design sprint no genere aprendizaje útil: elegir un problema demasiado grande o demasiado pequeño, no tener el decider en la sala, un prototipo que el equipo construyó con cariño pero que no responde a la pregunta del sprint, reclutar usuarios que no representan al cliente real y no saber qué hacer con los resultados cuando el test muestra que la solución no funciona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Planificar y facilitar un design sprint de 5 días para validar soluciones de UX antes de construirlas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Pipeline management ágil: priorizar oportunidades como un PM',
                'description'       => 'Aplica la mentalidad ágil a la gestión del pipeline de ventas: priorización por probabilidad de cierre, sprints de prospección y retrospectivas semanales del equipo comercial.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de ventas y metodologías ágiles aplicadas a equipos comerciales. Necesito que me ayudes a organizar mi pipeline de ventas con una mentalidad ágil: priorizar mejor las oportunidades, hacer un seguimiento más efectivo y mejorar el proceso de venta sprint a sprint.

Mi contexto:
- Tipo de ventas: [B2B / B2C / enterprise / SMB / mix]
- Ciclo de venta medio: [días, semanas o meses]
- Número de oportunidades activas en pipeline: [aproximado]
- CRM que usas: [Salesforce, HubSpot, Pipedrive, otro, o ninguno]
- Mayor problema con el pipeline actual: [oportunidades que no avanzan, falta de visibilidad del equipo, dificultad para priorizar en qué trabajar cada semana, etc.]
- Tamaño del equipo comercial: [solo / equipo pequeño / equipo mediano]

Con ese contexto, dame:

1. CÓMO PRIORIZAR EL PIPELINE COMO UN PRODUCT MANAGER
¿Cómo aplicar la mentalidad de priorización de un PM al pipeline de ventas? Dame el marco para puntuar cada oportunidad según: probabilidad de cierre (con criterios objetivos, no intuición), urgencia para el cliente (¿tiene fecha límite de decisión?), tamaño del ticket y coste de atención (¿cuánto tiempo del equipo consume esta cuenta por euro de ingreso potencial?). Crea una fórmula de puntuación práctica que pueda aplicar en un CRM o en una hoja de cálculo.

2. EL SPRINT SEMANAL DE VENTAS
¿Cómo estructurar la semana comercial como un sprint de una semana? Dame el ritual semanal del equipo comercial ágil: el lunes de planificación (selección de las oportunidades a trabajar esa semana, definición del objetivo de la semana), el standup diario de ventas (3 preguntas, máximo 10 minutos), el viernes de revisión y retrospectiva (qué avanzó, qué se bloqueó, qué aprendemos del proceso). Incluye la agenda exacta de cada ceremonia y cómo adaptarla a un vendedor individual que trabaja solo.

3. CRITERIOS DE AVANCE DE ETAPA EN EL PIPELINE
¿Cómo definir criterios objetivos de avance de etapa que no dependan de la percepción subjetiva del vendedor? Dame el proceso para redefinir cada etapa del pipeline con criterios de salida claros (qué debe haber ocurrido para pasar a la siguiente etapa), los signos de compra que indican progreso real y cómo identificar las oportunidades que llevan demasiado tiempo en una etapa sin avanzar (los zombies del pipeline).

4. RETROSPECTIVA DE VENTAS: APRENDER DE LOS CIERRES Y LAS PÉRDIDAS
¿Cómo hacer una retrospectiva de ventas efectiva a nivel de oportunidad individual y a nivel de proceso? Dame el formato de win/loss review: las preguntas que hay que hacerle al cliente que dijo sí y al que dijo no, cómo sistematizar esos aprendizajes en el proceso de venta y cómo llevar los insights al equipo sin que se conviertan en reuniones de post-mortem desmotivadoras.

5. GESTIÓN DEL BACKLOG DE PROSPECCIÓN
¿Cómo organizar el backlog de prospección de forma ágil? Dame el sistema para gestionar la lista de cuentas a prospectar: cómo priorizarlas (criterios de ICP, señales de intención de compra, referencia de un cliente existente), cómo asignar capacidad de prospección por sprint y cómo medir el ratio de conversión de prospecto a primera reunión para optimizar el top del funnel.

6. FORECASTING ÁGIL: PREDECIR SIN ENGAÑARSE
¿Cómo hacer un forecast de ventas creíble usando la puntuación del pipeline en lugar de la intuición del vendedor? Dame el método de forecasting basado en datos: cómo calcular el valor esperado ponderado del pipeline, cómo ajustar los porcentajes de cierre basándote en datos históricos reales y cómo presentar el forecast al equipo directivo de forma que genere confianza sin prometer lo que no se puede cumplir.

7. HERRAMIENTAS Y CONFIGURACIÓN DEL CRM PARA PIPELINE ÁGIL
¿Cómo configurar un CRM para soportar la gestión ágil del pipeline? Dame las vistas, los campos personalizados y los informes que necesito configurar en HubSpot o Pipedrive para que el sistema apoye el proceso descrito: la vista de sprint semanal, el tablero de priorización, el informe de velocity del pipeline y las alertas de oportunidades en riesgo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Aplicar metodologías ágiles a la gestión del pipeline de ventas para priorizar mejor y mejorar la tasa de cierre.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap ágil: planificar sin comprometerse en exceso',
                'description'       => 'Diseña un roadmap de producto que sea honesto con la incertidumbre, útil para los stakeholders y flexible para adaptarse a los aprendizajes del equipo sin romper la confianza del negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management con especialización en estrategia de producto y comunicación de roadmaps. Necesito que me ayudes a diseñar un roadmap de producto que sea ágil de verdad: que no sea una lista de features con fechas que siempre se incumplen, sino una herramienta estratégica que genere confianza sin comprometer en exceso al equipo.

Mi contexto:
- Tipo de producto: [SaaS, app móvil, plataforma, producto físico con software, etc.]
- Estado del producto: [MVP / producto en crecimiento / producto maduro]
- Audiencia principal del roadmap: [CEO, inversores, equipo de ventas, equipo de desarrollo, clientes, o combinación]
- Mayor problema con el roadmap actual: [se convierte en contrato con fechas que no se cumplen / nadie lo sigue / conflictos con ventas que prometen features / el equipo no entiende el por qué detrás de las iniciativas]
- Horizonte de planificación que necesitas comunicar: [trimestral, semestral, anual]

Con ese contexto, dame:

1. POR QUÉ LOS ROADMAPS TRADICIONALES FALLAN Y QUÉ CONSTRUIR EN SU LUGAR
Explícame los problemas estructurales del roadmap de features con fechas: por qué convierte al equipo de producto en una fábrica de funcionalidades, cómo destruye la capacidad de aprender y adaptar, y por qué genera desconfianza cuando (inevitablemente) las fechas no se cumplen. Dame las alternativas: el roadmap basado en outcomes, el now/next/later y el roadmap de horizontes temporales con niveles de confianza. Para cada formato, cuándo usarlo y con qué audiencia.

2. EL ROADMAP NOW/NEXT/LATER: DISEÑO PRÁCTICO
Dame el proceso para construir un roadmap now/next/later desde cero: cómo definir los criterios de qué entra en "now" (en curso y comprometido), "next" (probablemente el siguiente trimestre, validado pero no comprometido) y "later" (ideas estratégicas sin fecha ni compromiso). Incluye cómo comunicar la diferencia entre los tres horizontes a los stakeholders que están acostumbrados a fechas exactas y cómo manejar la pregunta "¿cuándo estará X?".

3. OUTCOMES EN EL ROADMAP: CÓMO LIGAR INICIATIVAS A RESULTADOS DE NEGOCIO
¿Cómo pasar de un roadmap de features ("construir sistema de notificaciones push") a un roadmap de outcomes ("aumentar la retención de usuarios en los primeros 30 días un 20%")? Dame el proceso para definir los outcomes del roadmap: cómo ligar cada iniciativa a un resultado de negocio medible, cómo usar el OKR o el opportunity solution tree para estructurar el roadmap y cómo comunicar esta lógica a ventas y a los stakeholders del negocio que piensan en features, no en métricas.

4. CÓMO MANEJAR LAS PETICIONES DE VENTAS Y LOS CLIENTES
¿Cómo gestionar la presión de ventas que quiere que el roadmap incluya las features que les están pidiendo los clientes? Dame el proceso para evaluar peticiones de clientes: cómo distinguir la feature que pide un cliente de la necesidad subyacente que hay que resolver, cómo agregar peticiones similares en una iniciativa más grande y cómo decir no (o no todavía) de forma que ventas pueda comunicarlo al cliente sin perder la venta.

5. LA REVISIÓN TRIMESTRAL DEL ROADMAP
¿Cómo hacer la revisión trimestral del roadmap sin que se convierta en una renegociación de compromisos con gritos? Dame la estructura de la quarterly roadmap review: cómo presentar lo que se logró frente a lo que se planificó (con honestidad sobre las causas de la desviación), cómo actualizar los tres horizontes a la luz de lo aprendido y cómo comunicar los cambios a los distintos stakeholders (el CEO quiere cosas distintas que el equipo de ventas o el de desarrollo).

6. HERRAMIENTAS PARA CONSTRUIR Y COMUNICAR EL ROADMAP
¿Qué herramientas son más efectivas para construir y comunicar el roadmap ágil? Dame una comparativa de las opciones más habituales: Productboard, Linear, Notion, Aha!, Jira Product Discovery y la hoja de cálculo bien hecha. Para cada una, cuándo tiene sentido usarla y qué problema resuelve que las demás no. Incluye cómo exportar el roadmap en distintos formatos para distintas audiencias (la presentación ejecutiva vs el tablero del equipo).

7. INDICADORES DE QUE EL ROADMAP ESTÁ FUNCIONANDO
¿Cómo sé si el roadmap está cumpliendo su función? Dame los seis indicadores de un roadmap saludable: la tasa de predictability (% de outcomes del trimestre logrados), el número de cambios de prioridad dentro del trimestre, la satisfacción de los stakeholders con la comunicación, la confianza del equipo de desarrollo en la planificación, y cómo medir si el roadmap está alineado con la estrategia de negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un roadmap ágil basado en outcomes que genere confianza a los stakeholders sin comprometer fechas que el equipo no puede cumplir.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR agile: aplicar metodologías ágiles en recursos humanos',
                'description'       => 'Transforma los procesos de RRHH con principios ágiles: desde la selección de personal hasta la gestión del desempeño, pasando por la formación y el onboarding iterativo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en transformación ágil de equipos de Recursos Humanos con experiencia en empresas de tecnología y organizaciones en proceso de digitalización. Necesito tu ayuda para aplicar principios y metodologías ágiles a los procesos de RRHH de mi organización.

Mi contexto:
- Tamaño de la organización: [número de empleados aproximado]
- Tamaño del equipo de RRHH: [número de personas en el equipo]
- Estado de madurez ágil de la empresa: [la empresa ya usa ágil en tecnología / está empezando / RRHH es el primer equipo en adoptarlo]
- Procesos de RRHH que quiero transformar primero: [selección, onboarding, desempeño, formación, comunicación interna, etc.]
- Mayor reto actual: [procesos lentos, falta de datos para tomar decisiones, empleados insatisfechos con los procesos, etc.]

Con ese contexto, dame:

1. QUÉ SIGNIFICA APLICAR ÁGIL A RRHH (Y QUÉ NO SIGNIFICA)
Explícame la diferencia entre adoptar ceremonias ágiles (tener un kanban de RRHH) y transformar verdaderamente los procesos de RRHH con mentalidad ágil. ¿Qué principios del Manifiesto Ágil son directamente aplicables a RRHH y cuáles necesitan adaptación? Dame tres ejemplos concretos de cómo un proceso de RRHH tradicional se transforma con mentalidad ágil: el proceso de selección, la evaluación de desempeño anual y el plan de formación.

2. SELECCIÓN ÁGIL: CONTRATAR MEJOR Y MÁS RÁPIDO
¿Cómo aplicar principios ágiles al proceso de selección de talento? Dame el diseño del proceso de selección iterativo: cómo definir el perfil como un conjunto de criterios evaluables (no como una lista de requisitos), cómo estructurar las entrevistas en rondas cortas con feedback inmediato entre los evaluadores, cómo tomar decisiones de avance en 24 horas y cómo medir el time-to-hire, la calidad de la contratación y la experiencia del candidato como métricas del proceso.

3. ONBOARDING ITERATIVO: LOS PRIMEROS 90 DÍAS COMO PROYECTO ÁGIL
¿Cómo diseñar un onboarding que mejore sprint a sprint? Dame la estructura del onboarding ágil: los entregables esperados al final del día 1, la semana 1, el mes 1 y los 90 días (desde la perspectiva del nuevo empleado, no de la empresa), cómo recoger feedback del nuevo empleado durante el proceso (retrospectiva de onboarding a los 30 días) y cómo usar ese feedback para mejorar el proceso para la siguiente incorporación.

4. GESTIÓN DEL DESEMPEÑO CONTINUA: ADIÓS A LA EVALUACIÓN ANUAL
¿Cómo sustituir la evaluación de desempeño anual por un proceso de feedback continuo? Dame el diseño del sistema de desempeño ágil: la cadencia de los check-ins 1:1 (qué frecuencia y qué preguntas), el OKR trimestral a nivel individual como herramienta de alineación, el feedback 360 ligero que no consume dos semanas del equipo y cómo ligar el desempeño continuo con las decisiones de compensación y promoción de forma transparente.

5. FORMACIÓN ÁGIL: APRENDER EN SPRINTS
¿Cómo diseñar el plan de formación de la organización con metodología ágil? Dame el proceso para identificar las necesidades de aprendizaje como un backlog de competencias, priorizar qué aprender primero según el impacto en el negocio, diseñar píldoras formativas cortas y aplicables (no cursos de 20 horas que nadie termina) y medir si la formación está generando el cambio de comportamiento esperado.

6. EL EQUIPO DE RRHH COMO EQUIPO ÁGIL
¿Cómo organizar el propio equipo de RRHH para trabajar de forma ágil? Dame el diseño del kanban de RRHH: las columnas del tablero (por tipo de proceso o por estado), la cadencia de las revisiones del backlog, cómo priorizar los proyectos de RRHH usando impacto en el negocio como criterio y cómo hacer la retrospectiva del equipo de RRHH para mejorar los propios procesos de forma continua.

7. MÉTRICAS ÁGILES PARA RRHH
¿Cuáles son las métricas que un equipo de RRHH ágil debe monitorizar? Dame los indicadores clave: time-to-hire, quality of hire a 90 días, NPS del proceso de onboarding, tasa de completitud de check-ins 1:1, engagement score trimestral y tasa de retención por manager. Para cada métrica, explícame cómo calcularla, qué valor indica un proceso saludable y qué acción tomar cuando está fuera del rango esperado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformar los procesos de Recursos Humanos con metodologías ágiles para ser más rápidos, iterativos y orientados al impacto.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas ágiles: budgeting dinámico en entornos de incertidumbre',
                'description'       => 'Abandona el presupuesto anual rígido y adopta el rolling forecast y el beyond budgeting para tomar decisiones financieras más rápidas en un entorno que cambia constantemente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en planificación financiera ágil y beyond budgeting con experiencia en empresas de tecnología y organizaciones en entornos de alta incertidumbre. Necesito tu ayuda para transformar el proceso de presupuestación de mi organización hacia un modelo más dinámico y adaptable.

Mi contexto:
- Tipo de organización: [startup / empresa en crecimiento / empresa consolidada / unidad de negocio dentro de un grupo]
- Proceso de presupuestación actual: [presupuesto anual fijo / rolling forecast / sin proceso formal]
- Principales problemas con el proceso actual: [el presupuesto queda obsoleto en Q2, las decisiones de inversión tardan demasiado, los equipos optimizan para el presupuesto en lugar de para el resultado, etc.]
- Herramientas financieras que usáis: [Excel, Pigment, Adaptive Insights, Anaplan, otra]
- Horizonte de planificación que necesitáis mantener: [trimestral, semestral, 12 meses rolling, etc.]

Con ese contexto, dame:

1. POR QUÉ EL PRESUPUESTO ANUAL FIJO ES UN PROBLEMA EN ENTORNOS ÁGILES
Explícame los problemas estructurales del proceso de presupuestación anual tradicional en un entorno de negocio que cambia rápidamente: el juego político que genera (inflar el presupuesto pedido para que te recorten menos), la parálisis de decisión que causa (esperar al ciclo presupuestario para aprobar una inversión evidente), la desconexión con la estrategia real y el incentivo perverso de gastar el presupuesto en diciembre para no perderlo el año siguiente. Dame datos o ejemplos de empresas que han abandonado el presupuesto anual y los resultados que obtuvieron.

2. ROLLING FORECAST: EL PRIMER PASO HACIA LAS FINANZAS ÁGILES
¿Qué es el rolling forecast y cómo implementarlo? Dame el diseño del proceso de rolling forecast de 12 meses: la cadencia de actualización (mensual o trimestral), qué variables incluir (ingresos, costes variables, headcount, inversiones), qué nivel de granularidad es útil vs qué nivel es burocracia disfrazada, y cómo ligar el forecast a los OKRs del negocio para que tenga sentido estratégico más allá de los números.

3. BEYOND BUDGETING: LOS DOCE PRINCIPIOS Y CÓMO APLICARLOS
Explícame el marco Beyond Budgeting: sus doce principios (seis de liderazgo y seis de gestión) y cuáles son más relevantes para mi tipo de organización. ¿Cuáles pueden implementarse sin transformar toda la estructura organizativa y cuáles requieren un cambio cultural más profundo? Dame un plan de implementación por fases: qué adoptar en los primeros seis meses, qué en el primer año y qué es un objetivo a dos o tres años.

4. ASIGNACIÓN DINÁMICA DE RECURSOS
¿Cómo pasar de asignar el presupuesto una vez al año a asignarlo de forma dinámica según las necesidades del negocio? Dame el modelo de asignación dinámica: los criterios para liberar recursos adicionales a un equipo o proyecto en el trimestre (impacto esperado, probabilidad de éxito, alineación estratégica), el proceso de aprobación que sea rápido sin perder el control del gasto y cómo documentar las decisiones de reasignación para que sean auditables.

5. KPIs RELATIVOS EN LUGAR DE OBJETIVOS FIJOS
¿Cómo medir el desempeño financiero de los equipos con KPIs relativos (benchmarks internos y externos) en lugar de objetivos fijos presupuestados? Dame ejemplos de KPIs relativos para equipos de ventas, marketing y operaciones: cómo definir el benchmark relevante, cómo comunicarlo al equipo de forma motivadora y cómo evitar que el equipo optimice para el KPI en lugar de para el resultado de negocio.

6. CÓMO CONVENCER A LA DIRECCIÓN Y AL CONSEJO
¿Cómo presentar la propuesta de finanzas ágiles a una dirección o a un consejo acostumbrado al presupuesto anual? Dame los argumentos del caso de negocio: los riesgos del presupuesto fijo en el contexto competitivo actual, los beneficios cuantificables del rolling forecast (velocidad de decisión, calidad del forecast, horas de equipo ahorradas en el proceso presupuestario) y cómo gestionar los miedos legítimos sobre la pérdida de control financiero.

7. HERRAMIENTAS Y TECNOLOGÍA PARA FINANZAS ÁGILES
¿Qué herramientas soportan mejor un proceso de finanzas ágiles? Dame una comparativa de las opciones según el tamaño de la empresa: desde Excel bien estructurado para startups hasta herramientas como Pigment, Mosaic o Workday Adaptive para empresas medianas y grandes. Para cada opción, qué capacidades aporta para el rolling forecast, la simulación de escenarios y la visualización de datos financieros en tiempo real para los líderes de equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Transformar el proceso de presupuestación hacia un modelo de rolling forecast y beyond budgeting para tomar decisiones financieras más rápidas.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal agile: metodologías ágiles en el departamento jurídico',
                'description'       => 'Aplica principios ágiles a la gestión del trabajo legal: priorización del backlog jurídico, sprints de contratos y métricas de eficiencia para un departamento legal moderno.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en legal operations y transformación ágil de departamentos jurídicos. Necesito tu ayuda para aplicar metodologías ágiles al departamento legal de mi organización: gestionar mejor el volumen de trabajo, priorizar los asuntos según el riesgo y el impacto en el negocio y medir la eficiencia del equipo jurídico.

Mi contexto:
- Tipo de organización: [empresa tecnológica, empresa industrial, startup, etc.]
- Tamaño del departamento jurídico: [número de abogados y paralegales]
- Principales tipos de trabajo jurídico: [contratos comerciales, M&A, litigios, compliance, propiedad intelectual, laboral, etc.]
- Mayor problema de gestión actual: [volumen incontrolable de solicitudes, falta de visibilidad de lo que está en curso, dificultad para priorizar, sensación de ser un cuello de botella para el negocio]
- Nivel de digitalización actual: [sin herramientas / usando email y hojas de cálculo / con algún sistema de gestión de contratos]

Con ese contexto, dame:

1. EL BACKLOG JURÍDICO: CÓMO GESTIONAR LAS SOLICITUDES AL DEPARTAMENTO LEGAL
¿Cómo crear y gestionar un backlog de trabajo jurídico que sea visible, priorizado y gestionable? Dame el sistema para recibir, clasificar y priorizar las solicitudes al departamento legal: los criterios de priorización (riesgo legal, impacto económico, urgencia para el negocio, recursos necesarios), el proceso de intake estandarizado (qué información debe proporcionar el cliente interno al solicitar trabajo jurídico) y cómo comunicar el estado de cada asunto al negocio sin que el departamento se convierta en una caja negra.

2. SPRINTS JURÍDICOS: ¿TIENE SENTIDO EN EL DERECHO?
¿Puede el trabajo jurídico organizarse en sprints? Dame una respuesta honesta: qué tipos de trabajo jurídico son compatibles con la cadencia de un sprint (revisión de contratos estandarizados, actualización de políticas, proyectos de compliance con entregables definidos) y cuáles no (litigios, negociaciones largas, asuntos regulatorios sin fecha de fin previsible). Para los que sí son compatibles, dame el diseño del sprint jurídico: duración, planificación, revisión y retrospectiva adaptadas al contexto legal.

3. CONTRATOS: ESTANDARIZACIÓN Y AUTOMATIZACIÓN COMO BASE DE LA AGILIDAD
¿Cómo reducir el tiempo que el departamento legal dedica a contratos de bajo riesgo para liberar capacidad para el trabajo de alto valor? Dame el proceso para crear una biblioteca de contratos estándar: cómo identificar los contratos más frecuentes y de menor riesgo, cómo construir plantillas con variables claramente marcadas, cómo implementar un sistema de autoservicio para el negocio con guardrails legales y en qué momento el contrato debe volver al abogado para revisión.

4. MÉTRICAS DE EFICIENCIA DEL DEPARTAMENTO LEGAL
¿Cómo medir la eficiencia y el impacto de un departamento jurídico? Dame las métricas que un departamento legal ágil debe monitorizar: el tiempo medio de respuesta por tipo de asunto, el tiempo de ciclo del proceso de firma de contratos (desde la solicitud hasta la firma), el número de contratos revisados por abogado por trimestre, la tasa de contratos estándar vs negociados y el NPS interno del departamento (¿el negocio nos percibe como aliados o como obstáculos?).

5. LA RELACIÓN CON EL NEGOCIO: DE CUELLO DE BOTELLA A SOCIO ESTRATÉGICO
¿Cómo cambiar la percepción del departamento legal dentro de la organización? Dame el proceso para transformar la relación entre el departamento jurídico y el negocio: cómo hacer que los abogados se involucren en las decisiones de negocio antes de que se conviertan en problemas legales, cómo establecer SLAs internos que el negocio valore y el departamento pueda cumplir, y cómo comunicar el valor del trabajo jurídico en términos que el CEO y el CFO entiendan (riesgo evitado, deals acelerados, costes externos reducidos).

6. HERRAMIENTAS DE LEGAL OPS PARA UN EQUIPO ÁGIL
¿Qué herramientas de legal operations facilitan la gestión ágil del departamento jurídico? Dame una comparativa de las opciones según el tamaño del departamento: desde herramientas de gestión de contratos básicas (DocuSign, PandaDoc) hasta plataformas de legal ops más completas (Ironclad, ContractPodAi, Juro). Para cada una, qué problema resuelve y cuándo tiene sentido la inversión.

7. ERRORES AL IMPLEMENTAR ÁGIL EN EL DEPARTAMENTO LEGAL
Lista los seis errores más frecuentes cuando un departamento jurídico intenta adoptar metodologías ágiles: confundir urgencia con prioridad, implementar herramientas sin cambiar el proceso, aplicar la misma cadencia a todos los tipos de trabajo jurídico, no involucrar al negocio en la definición de prioridades y intentar medir el trabajo jurídico con métricas de cantidad en lugar de métricas de impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Aplicar metodologías ágiles al departamento jurídico para gestionar mejor el volumen de trabajo y mejorar la relación con el negocio.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS sprints: mejora continua en el equipo de customer success',
                'description'       => 'Aplica metodologías ágiles al equipo de Customer Success: sprints de mejora de la adopción, retrospectivas de churn y backlog de iniciativas de retención priorizadas por impacto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success con experiencia en la aplicación de metodologías ágiles a equipos de CS en empresas SaaS y de servicios recurrentes. Necesito tu ayuda para organizar el trabajo del equipo de Customer Success con principios ágiles: priorizar mejor las iniciativas, aprender de cada churn y mejorar continuamente la experiencia del cliente.

Mi contexto:
- Tipo de producto o servicio: [SaaS / plataforma / servicio profesional recurrente]
- Tamaño del equipo de CS: [número de CSMs y roles]
- Número de clientes en cartera: [aproximado, y si hay segmentación por tamaño]
- Principales métricas actuales: [churn rate, NRR, NPS, CSAT, time-to-value]
- Mayor reto del equipo ahora mismo: [demasiado reactivo, sin tiempo para iniciativas proactivas, dificultad para priorizar qué clientes atender primero, falta de proceso de mejora continua]

Con ese contexto, dame:

1. EL BACKLOG DE INICIATIVAS DE CS: PRIORIZAR LO QUE MUEVE LA AGUJA
¿Cómo crear y gestionar un backlog de iniciativas de Customer Success priorizadas por impacto? Dame el sistema para identificar, documentar y priorizar las iniciativas de CS: la diferencia entre trabajo reactivo (tickets, escalaciones, renovaciones urgentes) y trabajo proactivo (programas de adopción, onboarding mejorado, iniciativas de expansión), y cómo reservar capacidad del sprint para iniciativas proactivas aunque la presión del trabajo reactivo sea constante.

2. EL SPRINT DE CS: CÓMO ESTRUCTURARLO
¿Cómo diseñar el sprint del equipo de Customer Success? Dame la cadencia y la estructura: la sprint planning (cómo dividir la capacidad entre trabajo reactivo y proactivo, cómo asignar iniciativas de mejora al sprint), el standup diario de CS (qué preguntas hacerse para detectar riesgos de churn antes de que escalen), y la sprint review (cómo mostrar al negocio el impacto de las iniciativas proactivas en las métricas de retención).

3. RETROSPECTIVA DE CHURN: APRENDER DE CADA CLIENTE PERDIDO
¿Cómo hacer una retrospectiva de churn efectiva que genere aprendizajes accionables? Dame el proceso de win/loss review aplicado al churn: las preguntas que hay que hacerle al cliente que cancela (cómo conseguir que responda), cómo clasificar las causas del churn (deseado vs involuntario, por precio vs por valor vs por alternativa vs por cambio interno del cliente) y cómo convertir esos aprendizajes en items del backlog de CS que el equipo trabaje en el siguiente sprint.

4. SALUD DEL CLIENTE COMO BACKLOG PRIORIZADO
¿Cómo usar los datos de salud del cliente (health scores) para priorizar el trabajo del equipo de CS de forma ágil? Dame el proceso para convertir el health score en un backlog de intervenciones: cómo segmentar la cartera por riesgo y por oportunidad de expansión, cómo asignar el tiempo del CSM según la urgencia y el impacto potencial de cada intervención, y cómo hacer el seguimiento de las intervenciones para medir su efectividad en el health score a 30 y 60 días.

5. PROGRAMAS DE ADOPCIÓN ITERATIVOS
¿Cómo diseñar y mejorar iterativamente los programas de adopción del producto? Dame el proceso ágil para el diseño de programas de onboarding y adopción: cómo definir el success milestone del cliente (el momento en que el cliente ha obtenido su primer valor), cómo medir el time-to-value, cómo identificar los puntos de abandono en el journey de adopción y cómo diseñar intervenciones (emails automáticos, llamadas proactivas, webinars de adopción) que se testean y mejoran sprint a sprint.

6. MÉTRICAS DE VELOCIDAD DEL EQUIPO DE CS
¿Cómo medir la velocidad y el impacto del equipo de CS de forma ágil? Dame las métricas del equipo: el número de iniciativas proactivas completadas por sprint, la tasa de mejora del health score en clientes intervenidos, la reducción del churn en el segmento trabajado en el trimestre, el NRR generado por iniciativas de expansión y el NPS a 90 días de los clientes que pasaron por el nuevo proceso de onboarding.

7. LA COLABORACIÓN ENTRE CS Y PRODUCTO EN EL PROCESO ÁGIL
¿Cómo mejorar la colaboración entre el equipo de Customer Success y el equipo de Producto usando metodologías ágiles? Dame el proceso para que los insights del cliente lleguen al backlog de producto de forma sistemática: cómo documentar el feedback del cliente en formato de oportunidad (no de feature request), cómo priorizar ese feedback usando los datos de impacto del CS, y cómo establecer un canal de comunicación regular entre CS y Producto que no sea una reunión de queja semanal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Aplicar metodologías ágiles al equipo de Customer Success para mejorar la retención, la adopción y la gestión proactiva de la cartera de clientes.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión ágil de proyectos freelance: entregar sin agobios',
                'description'       => 'Aplica principios ágiles a tu práctica freelance: gestiona tus proyectos en sprints cortos, comunica el avance al cliente y evita el scope creep con un proceso claro de priorización.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de productividad y gestión de proyectos especializado en profesionales freelance e independientes. Necesito tu ayuda para aplicar metodologías ágiles a la gestión de mis proyectos freelance: entregar con más predecibilidad, gestionar mejor las expectativas del cliente y evitar el agobio que genera trabajar en varios proyectos simultáneamente sin un sistema claro.

Mi contexto:
- Tipo de trabajo freelance: [desarrollo, diseño, consultoría, copywriting, marketing, etc.]
- Número de proyectos simultáneos habituales: [cuántos proyectos llevo a la vez]
- Duración media de los proyectos: [días, semanas, meses]
- Mayor problema de gestión actual: [scope creep sin control, cliente que cambia de opinión constantemente, dificultad para estimar los plazos, agobio por falta de estructura, comunicación reactiva con el cliente]
- Herramientas que ya usas: [Notion, Trello, Asana, hojas de cálculo, papel, etc.]

Con ese contexto, dame:

1. EL PROYECTO FREELANCE COMO SPRINTS: LA ESTRUCTURA BÁSICA
¿Cómo organizar un proyecto freelance en sprints cortos en lugar de como un bloque de trabajo único con entrega al final? Dame la estructura del proyecto ágil para freelance: cómo dividir el proyecto en sprints de una o dos semanas con entregables concretos al final de cada uno, cómo definir el criterio de aceptación de cada entregable con el cliente antes de empezar y cómo usar esa estructura para protegerme del scope creep y de los cambios de última hora que no estaban en el acuerdo original.

2. CÓMO GESTIONAR LA RELACIÓN CON EL CLIENTE CON METODOLOGÍA ÁGIL
¿Cómo involucrar al cliente en el proceso ágil sin que se convierta en una reunión constante? Dame el protocolo de comunicación ágil con el cliente freelance: la reunión de kick-off (cómo alinear expectativas desde el primer día), la revisión de sprint (cómo presentar los entregables al final de cada sprint para obtener feedback accionable), la comunicación asíncrona durante el sprint (qué actualizar, con qué frecuencia y en qué formato) y cómo manejar al cliente que quiere hablar por WhatsApp a las 11 de la noche.

3. EL BACKLOG DEL PROYECTO: PRIORIZACIÓN CON EL CLIENTE
¿Cómo crear y gestionar el backlog de un proyecto freelance de forma colaborativa con el cliente? Dame el proceso para documentar todos los entregables y tareas del proyecto como items del backlog, cómo priorizarlos con el cliente usando el criterio de valor vs esfuerzo, cómo negociar los cambios de prioridad dentro del sprint (si entra algo nuevo, qué sale) y cómo usar el backlog como contrato vivo que documenta las decisiones de alcance tomadas con el cliente.

4. GESTIÓN DEL SCOPE CREEP CON METODOLOGÍA ÁGIL
¿Cómo usar el proceso ágil para protegerme del scope creep de forma profesional y sin conflicto? Dame las frases exactas y el proceso para gestionar una solicitud de cambio que no estaba en el acuerdo original: cómo documentarla como un nuevo ítem del backlog, cómo estimar el esfuerzo adicional, cómo presentar al cliente las opciones (añadir al backlog para el próximo sprint, sustituir otro ítem de igual esfuerzo, o aprobar como trabajo adicional con presupuesto extra) y cómo hacer todo esto sin que el cliente sienta que le estoy poniendo trabas.

5. GESTIÓN DE VARIOS PROYECTOS SIMULTÁNEOS
¿Cómo aplicar la metodología ágil cuando llevo tres o cuatro proyectos al mismo tiempo? Dame el sistema para gestionar múltiples proyectos: cómo planificar mi semana distribuyendo la capacidad entre proyectos (bloques de tiempo dedicado por proyecto, no multitarea constante), cómo sincronizar los sprints de distintos clientes para que no todos terminen el mismo día, y cómo comunicar a cada cliente cuándo recibirá atención sin que sientan que no son la prioridad.

6. ESTIMACIÓN Y PLANIFICACIÓN REALISTA PARA FREELANCERS
¿Cómo hacer estimaciones de tiempo más precisas para evitar entregar tarde o malvender mi tiempo? Dame el método de estimación para freelancers: cómo usar los datos históricos de proyectos anteriores para calibrar las estimaciones, el buffer que debo incluir para revisiones e imprevistos del cliente, cómo comunicar las estimaciones al cliente como rangos (no como fechas exactas) y cómo renegociar un plazo cuando el proyecto se complica sin dañar la relación.

7. RETROSPECTIVA DEL PROYECTO: APRENDER PARA MEJORAR
¿Cómo hacer la retrospectiva de cada proyecto terminado para mejorar el proceso en el siguiente? Dame el formato de la retrospectiva freelance: las preguntas que debo hacerme al terminar cada proyecto (qué estimé bien, qué me sorprendió, qué haría diferente desde el kick-off), cómo documentar esos aprendizajes de forma que sean útiles seis meses después y cómo usar los datos acumulados de varios proyectos para mejorar mis propuestas, mis estimaciones y mi proceso de gestión de clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Aplicar metodologías ágiles a la gestión de proyectos freelance para entregar con más predecibilidad y gestionar mejor las expectativas del cliente.',
                'vote_score'        => 40,
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
