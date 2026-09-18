<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills319Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Design thinking para campañas de marketing centradas en el usuario',
                'description'      => 'Aplica la metodología de design thinking para diseñar campañas de marketing que resuelvan problemas reales de tu audiencia. Aprende a empatizar, definir retos, idear soluciones creativas y testearlas antes del lanzamiento. Transforma el proceso creativo en un sistema iterativo y orientado a datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing estratégico y metodologías de innovación centradas en el usuario. Tu misión es guiarme para aplicar design thinking a la creación de una campaña de marketing, siguiendo las cinco fases clásicas: empatizar, definir, idear, prototipar y testear.

**CONTEXTO Y OBJETIVO**
Quiero desarrollar una campaña de marketing que no parta de suposiciones internas, sino de una comprensión profunda de los problemas, deseos y frustraciones reales de mi audiencia objetivo. El design thinking me permitirá reducir el riesgo de lanzar mensajes irrelevantes y aumentar la resonancia emocional de la campaña.

**FASE 1 — EMPATIZAR**
Ayúdame a construir un mapa de empatía del segmento de audiencia que quiero impactar. Quiero conocer:
- ¿Qué piensa y siente esta persona en relación con mi categoría de producto o servicio?
- ¿Qué ve en su entorno (competidores, influencers, medios) que moldea sus percepciones?
- ¿Qué dice y hace públicamente cuando interactúa con marcas similares?
- ¿Qué oye de su círculo cercano, colegas o comunidades digitales?
- ¿Cuáles son sus mayores dolores (frustraciones, miedos, obstáculos) y sus ganancias esperadas (aspiraciones, deseos)?

Proporciona un formato de mapa de empatía completado con ejemplos reales y ficticios para el segmento que yo defina.

**FASE 2 — DEFINIR**
Con base en el mapa de empatía, ayúdame a formular un "point of view" (PDV) claro: una declaración que capture el insight central del usuario, su necesidad subyacente y el "por qué" detrás de esa necesidad. El formato es: "[Persona] necesita [necesidad] porque [insight sorprendente]."

Luego, transforma ese PDV en "How Might We" (¿Cómo podríamos...?), preguntas abiertas que enmarquen el reto creativo de la campaña.

**FASE 3 — IDEAR**
Facilita una sesión de ideación estructurada. Aplica las siguientes técnicas:
1. Brainstorming de cantidad: genera al menos 15 ideas de concepto de campaña sin filtrar.
2. Método SCAMPER: aplícalo al concepto de campaña más prometedor para encontrar variaciones.
3. Analogías: ¿qué haría esta campaña si fuera un movimiento social, un videojuego, una receta de cocina?

Selecciona las 3 ideas más potentes y justifica por qué conectan con el insight del usuario.

**FASE 4 — PROTOTIPAR**
Para cada una de las 3 ideas finalistas, ayúdame a definir un "prototipo de campaña mínimo" que pueda testar rápido y barato:
- Formato del prototipo (landing page, anuncio en redes, email, video corto, etc.)
- Mensaje central y llamada a la acción
- Métricas de éxito para el test (CTR, tiempo en página, conversiones, respuestas cualitativas)

**FASE 5 — TESTEAR**
Diseña un plan de testeo para los prototipos. Incluye:
- Método de reclutamiento de usuarios o audiencia de test
- Preguntas de entrevista o encuesta post-exposición
- Criterios de decisión: ¿qué resultado me indica que debo iterar, pivotar o escalar?

**FORMATO DE ENTREGA**
Presenta el resultado en secciones claramente diferenciadas con encabezados para cada fase. Usa tablas cuando ayuden a la comprensión. Al final, incluye un resumen ejecutivo de una página que muestre el insight central, el concepto ganador de campaña y los próximos pasos recomendados.

Comienza preguntándome: ¿cuál es tu producto o servicio, y cuál es el segmento de audiencia que quieres impactar?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar campañas de marketing con metodología de design thinking',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo de Software
            [
                'profession_id'    => 2,
                'title'            => 'Design thinking para definir requisitos de producto digital centrados en el usuario',
                'description'      => 'Aplica las fases del design thinking para traducir problemas de negocio en requisitos técnicos que realmente resuelvan necesidades del usuario. Este enfoque evita el desarrollo de funcionalidades que nadie usa. Produce historias de usuario más precisas y soluciones técnicas con mayor impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un líder técnico con formación en design thinking y experiencia en product discovery. Tu objetivo es ayudarme a usar la metodología de design thinking para definir requisitos de un producto o funcionalidad digital, asegurando que lo que se construye resuelve problemas reales.

**CONTEXTO**
En el desarrollo de software, es común construir funcionalidades basadas en suposiciones del equipo interno en lugar de evidencia real de los usuarios. El design thinking aporta un proceso estructurado para investigar primero, idear después y validar antes de escribir una sola línea de código.

**PASO 1 — EMPATIZAR CON LOS USUARIOS REALES**
Ayúdame a planificar una investigación de usuario ligera pero rigurosa:
- ¿Qué técnicas de investigación son adecuadas para el tiempo y presupuesto disponible (entrevistas, encuestas, shadowing, análisis de soporte)?
- Dame un guión de entrevista de 8-10 preguntas para descubrir los dolores del usuario con el flujo o funcionalidad existente.
- ¿Cómo analizo y agrupo los hallazgos para encontrar patrones (affinity mapping, clustering)?

**PASO 2 — DEFINIR EL PROBLEMA CORRECTO**
Con los insights de la investigación, ayúdame a:
- Escribir un Problem Statement técnico que incluya: usuario afectado, problema observado, impacto medible y contexto de uso.
- Identificar las restricciones técnicas y de negocio que delimitan el espacio de soluciones.
- Formular preguntas "¿Cómo podríamos...?" orientadas a la arquitectura y la experiencia de usuario.

**PASO 3 — IDEAR SOLUCIONES TÉCNICAS**
Facilita una sesión de ideación técnica:
- Genera 10 posibles enfoques de implementación, desde los más simples (MVP mínimo) hasta los más sofisticados.
- Para cada enfoque, estima el esfuerzo relativo (S/M/L/XL) y el valor para el usuario (bajo/medio/alto).
- Aplica la matriz de impacto vs. esfuerzo para seleccionar las 2-3 mejores opciones.

**PASO 4 — PROTOTIPAR ANTES DE CODIFICAR**
Define la estrategia de prototipado técnico:
- ¿Qué nivel de fidelidad es adecuado para validar la hipótesis central (paper prototype, wireframe, mockup interactivo, spike técnico, feature flag)?
- ¿Qué partes de la solución tienen mayor incertidumbre técnica y requieren un spike primero?
- Escribe los criterios de aceptación en formato BDD (Given/When/Then) para el prototipo.

**PASO 5 — TESTEAR Y APRENDER**
Diseña el plan de validación técnica y de usuario:
- ¿Cómo monto un test de usabilidad técnico con usuarios reales o internos?
- ¿Qué métricas de producto y de ingeniería me indican si la solución funciona?
- ¿Cuál es el proceso para iterar: cómo incorporo el feedback sin descarrilar el sprint?

**ENTREGABLE FINAL**
Quiero que al final generes:
1. Un Problem Statement completo y validado.
2. Las 3 historias de usuario más críticas en formato "Como [usuario], quiero [acción], para [valor]".
3. Una lista de criterios de aceptación técnicos.
4. Un plan de sprint de discovery de dos semanas con tareas concretas.

Empieza preguntándome por el contexto: ¿cuál es el producto o funcionalidad que quieres diseñar, y quiénes son los usuarios afectados?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Definir requisitos técnicos con metodología de design thinking',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Design thinking como proceso creativo para diseñadores: del insight al concepto',
                'description'      => 'Integra design thinking en tu flujo de trabajo creativo para ir más allá de la estética y diseñar soluciones que resuelvan problemas reales. Aprende a documentar insights de usuario y convertirlos en conceptos visuales sólidos. Fortalece la argumentación de tus propuestas ante clientes y equipos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior designer con experiencia en design thinking, service design y diseño centrado en el usuario. Quiero usar este proceso para reforzar mi práctica de diseño y producir soluciones que tengan tanto rigor metodológico como impacto estético y funcional.

**POR QUÉ DESIGN THINKING PARA DISEÑADORES**
Los diseñadores tendemos a saltar directamente a soluciones visuales. El design thinking nos obliga a ralentizar la fase inicial para entender el problema real, lo que reduce las revisiones tardías y aumenta la satisfacción del cliente. También nos da un lenguaje común con equipos de negocio y tecnología.

**EMPATIZAR — INVESTIGACIÓN VISUAL Y CONTEXTUAL**
Ayúdame a planificar la fase de investigación desde una perspectiva de diseño:
- ¿Cómo conduzco un "safari del contexto" (observación en el entorno real del usuario)?
- ¿Cómo documento hallazgos visuales con fotos, bocetos y notas etnográficas?
- ¿Qué preguntas de entrevista exploran las motivaciones emocionales y estéticas del usuario?
- Genera una plantilla de diario de investigación visual que pueda usar durante el trabajo de campo.

**DEFINIR — DEL INSIGHT AL BRIEF CREATIVO**
Transforma los hallazgos en un brief creativo basado en evidencia:
- Ayúdame a sintetizar los insights en un mapa de afinidad (clustering temático).
- Escribe un brief creativo que incluya: público objetivo, tensión central del usuario, territorio emocional, referentes visuales y restricciones de diseño.
- Define los principios de diseño que guiarán todas las decisiones del proyecto.

**IDEAR — TÉCNICAS DE GENERACIÓN VISUAL**
Facilita una sesión de ideación específica para diseñadores:
- Warm-up creativo: ejercicio de bocetado rápido de 5 minutos (crazy 8s adaptados).
- Generación de conceptos: 10 territorios visuales distintos para el reto de diseño.
- Moodboards de referencia: ayúdame a construir la estructura de 3 moodboards que exploren direcciones opuestas.
- Votación y selección: ¿cómo evalúo los conceptos con criterios tanto creativos como funcionales?

**PROTOTIPAR — DEL CONCEPTO A LO TANGIBLE**
Define la estrategia de prototipado progresivo:
- Nivel 1: bocetos en papel para comunicar la idea central sin inversión técnica.
- Nivel 2: wireframes de baja fidelidad para validar la estructura y flujo.
- Nivel 3: mockup de alta fidelidad para testear la respuesta emocional y estética.
- ¿Qué herramientas recomiendas para cada nivel y por qué?

**TESTEAR — VALIDACIÓN CON USUARIOS Y PRESENTACIÓN AL CLIENTE**
- Diseña un protocolo de test de usabilidad de 30 minutos.
- ¿Cómo presento los resultados del testeo al cliente de forma visual y convincente?
- ¿Cómo documento las iteraciones para mostrar la evolución del diseño como argumento de valor?

**ENTREGABLE**
Al finalizar el proceso, genera un documento de presentación del concepto que incluya: brief creativo, insights clave, concepto seleccionado con justificación metodológica, prototipo y resultados del testeo. Este documento debe poder entregarse al cliente como prueba del proceso riguroso seguido.

Comienza preguntándome: ¿cuál es el proyecto de diseño que quieres abordar y para qué tipo de cliente o usuario?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar design thinking al proceso creativo de diseño',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Design thinking para rediseñar la experiencia de compra y reducir fricción en ventas',
                'description'      => 'Usa design thinking para identificar los puntos de fricción en el journey del comprador y diseñar soluciones que aceleren el ciclo de ventas. Empatiza con el cliente potencial, define sus bloqueos reales y prototipa nuevos procesos de venta. Convierte insights del cliente en mejoras concretas del embudo comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas consultivas y diseño de procesos comerciales con experiencia en design thinking. Tu misión es ayudarme a aplicar esta metodología para rediseñar la experiencia de compra de mi producto o servicio, eliminando la fricción que frena las conversiones.

**CONTEXTO**
En ventas, solemos obsesionarnos con las técnicas de cierre cuando el problema real está antes: el proceso de compra genera confusión, duda o desconfianza en el cliente potencial. El design thinking nos permite ponernos en los zapatos del comprador y rediseñar el proceso desde su perspectiva.

**FASE 1 — EMPATIZAR CON EL COMPRADOR**
Ayúdame a construir el mapa de empatía del comprador tipo:
- ¿Qué piensa y siente cuando evalúa comprar mi tipo de solución?
- ¿Qué presiones externas (jefe, presupuesto, equipo) e internas (miedo a equivocarse, ego) influyen en su decisión?
- ¿Qué información busca antes de hablar con un vendedor, y dónde la busca?
- ¿Cuáles son sus principales objeciones y de dónde vienen realmente?

Genera preguntas de entrevista para mis mejores clientes actuales que me permitan obtener esta información de manera natural.

**FASE 2 — MAPEAR Y DEFINIR EL CUSTOMER JOURNEY DE COMPRA**
Construye un mapa del journey de compra con los siguientes momentos clave:
- Reconocimiento del problema
- Búsqueda de información y evaluación de opciones
- Primera interacción con mi empresa (web, referido, anuncio)
- Conversación comercial inicial
- Evaluación y comparación con competidores
- Decisión de compra o abandono

Para cada momento, identifica los puntos de fricción, las emociones predominantes y las preguntas sin responder del comprador.

**FASE 3 — IDEAR MEJORAS AL PROCESO COMERCIAL**
Con base en los puntos de fricción identificados, genera ideas para:
- Materiales de ventas que reduzcan incertidumbre (calculadoras de ROI, casos de estudio, garantías).
- Cambios en el proceso de cualificación que hagan la conversación más relevante para el cliente.
- Experiencias de "prueba antes de comprar" que reduzcan el riesgo percibido.
- Automatizaciones o touchpoints que mantengan el interés sin ser invasivos.

**FASE 4 — PROTOTIPAR NUEVAS EXPERIENCIAS DE VENTA**
Define 3 mejoras concretas que puedas implementar en menos de 2 semanas:
- Describe el prototipo (qué cambias exactamente: guión, email, propuesta, demostración).
- Qué fricción específica elimina cada mejora.
- Cómo vas a medir si la mejora funciona (tasa de avance en el embudo, tiempo de ciclo, tasa de conversión).

**FASE 5 — TESTEAR Y OPTIMIZAR**
Diseña un plan de experimentación comercial:
- ¿Cómo testeo las mejoras con una muestra de prospectos sin comprometer el negocio actual?
- ¿Qué métricas de ventas y de experiencia del cliente indican que la mejora es efectiva?
- ¿Cómo documento y comparto los aprendizajes con el equipo comercial?

**ENTREGABLE**
Al finalizar, quiero: un mapa del journey de compra con puntos de fricción identificados, las 3 mejoras priorizadas con su plan de implementación, y un dashboard de métricas para seguir el impacto.

Empieza preguntándome: ¿qué vendes, cuánto dura tu ciclo de ventas promedio y cuál es tu principal reto de conversión hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Rediseñar el proceso de ventas con design thinking',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Design thinking para construir un roadmap de producto orientado a valor real',
                'description'      => 'Aplica design thinking para priorizar tu roadmap de producto con base en insights reales de usuarios en lugar de opiniones internas. Desarrolla la habilidad de convertir hallazgos cualitativos en decisiones de producto defendibles. Alinea a stakeholders alrededor de problemas reales antes de comprometerte con soluciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en design thinking y product discovery. Tu misión es ayudarme a usar esta metodología para construir un roadmap de producto que priorice valor real para el usuario sobre funcionalidades solicitadas internamente.

**EL PROBLEMA DE LOS ROADMAPS TRADICIONALES**
La mayoría de los roadmaps son listas de funcionalidades priorizadas por la urgencia del CEO, las peticiones del equipo de ventas o las intuiciones del equipo de producto. El design thinking cambia el punto de partida: primero entendemos los problemas del usuario, luego decidimos qué construir.

**FASE 1 — EMPATIZAR: INVESTIGACIÓN DE USUARIO PARA PRODUCT MANAGERS**
Planifica un sprint de discovery de dos semanas:
- ¿Cuántas entrevistas de usuario son suficientes para saturar los insights (principio de saturación cualitativa)?
- Dame un guión de entrevista de 45 minutos para descubrir jobs-to-be-done, frustraciones actuales y comportamientos reales (no declarados) de los usuarios.
- ¿Cómo analizo el comportamiento en el producto (datos de analytics) combinado con los hallazgos cualitativos?
- ¿Cómo involucro al equipo de ingeniería y diseño en la investigación para generar alineación temprana?

**FASE 2 — DEFINIR: DEL INSIGHT AL OPPORTUNITY SPACE**
Con los hallazgos de la investigación:
- Crea un mapa de oportunidades (opportunity solution tree): jerarquía de outcomes deseados → oportunidades identificadas → posibles soluciones.
- Ayúdame a escribir problem statements claros para las 5 oportunidades más importantes.
- ¿Cómo evalúo y priorizo las oportunidades usando el framework de frecuencia, importancia y satisfacción actual?

**FASE 3 — IDEAR: TÉCNICAS DE IDEACIÓN PARA EQUIPOS DE PRODUCTO**
Facilita una sesión de ideación de equipo:
- Cómo estructuro un design sprint de 5 días para el reto más importante.
- ¿Qué técnicas de ideación son más efectivas para equipos de producto multidisciplinarios?
- ¿Cómo evito el groupthink y aseguro que las ideas más disruptivas no se descarten demasiado pronto?
- Genera una agenda de taller de ideación de 4 horas con ejercicios concretos.

**FASE 4 — PROTOTIPAR: EXPERIMENTOS ANTES DE DESARROLLO**
Define la estrategia de prototipado y experimentación:
- ¿Cuándo es suficiente un prototipo de papel versus un MVP técnico?
- ¿Cómo uso feature flags para testear hipótesis en producción con un subconjunto de usuarios?
- ¿Cómo defino el criterio de éxito de un experimento antes de ejecutarlo (hipótesis falsificable)?

**FASE 5 — TESTEAR: MÉTRICAS DE PRODUCTO Y APRENDIZAJE ITERATIVO**
- ¿Cómo diseño un test de usabilidad que diferencie problemas de diseño de problemas de propuesta de valor?
- ¿Qué métricas de producto (activation, retention, NPS, task success rate) elijo para cada tipo de hipótesis?
- ¿Cómo comunico los resultados de los experimentos a la junta directiva y al equipo de ventas?

**ENTREGABLE**
Al finalizar, quiero: un opportunity solution tree completo, el roadmap priorizado por valor de usuario para el próximo trimestre, y una plantilla de experimento para las 3 hipótesis más críticas.

Empieza preguntándome: ¿cuál es tu producto, en qué etapa está (pre-PMF, crecimiento, madurez) y cuál es el mayor reto de usuario que quieres resolver?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir roadmap de producto con design thinking y discovery',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Design thinking para rediseñar la experiencia del empleado (employee experience)',
                'description'      => 'Aplica design thinking para identificar los momentos críticos en el ciclo de vida del empleado y rediseñarlos para aumentar el compromiso y la retención. Empatiza con los colaboradores como usuarios internos y define soluciones basadas en evidencia. Convierte insights de clima laboral en iniciativas de RRHH con impacto medible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en people analytics y diseño de experiencia del empleado con formación en design thinking. Tu misión es ayudarme a aplicar esta metodología para mejorar los momentos más críticos del ciclo de vida del colaborador en mi organización.

**POR QUÉ DESIGN THINKING EN RRHH**
Los procesos de RRHH se diseñan frecuentemente desde la perspectiva de la empresa (cumplimiento, eficiencia, control) en lugar de desde la perspectiva del empleado como usuario. El design thinking nos permite invertir esta lógica: primero entender qué vive el colaborador, luego diseñar procesos que funcionen para ambas partes.

**FASE 1 — EMPATIZAR: INVESTIGAR LA EXPERIENCIA DEL EMPLEADO**
Planifica la investigación cualitativa con empleados:
- Identifica los 5 momentos que importan (moments that matter) en el ciclo de vida: incorporación, primer año, ascenso, cambio de equipo, salida voluntaria.
- Dame un guión de entrevista de salida y de permanencia para descubrir los dolores reales (no los que el empleado comparte en encuestas anónimas).
- ¿Cómo aplico la técnica de shadowing o "un día en la vida de" para observar la experiencia real de trabajo?
- ¿Cómo cruzo datos cualitativos (entrevistas) con datos cuantitativos (encuestas de clima, absentismo, rotación) para validar patrones?

**FASE 2 — DEFINIR: MAPA DE EXPERIENCIA DEL EMPLEADO**
Con los insights recopilados:
- Construye un mapa de experiencia del empleado (employee journey map) para el momento más crítico que yo defina.
- Identifica los "pain points" emocionales y funcionales en cada etapa del journey.
- Escribe un problem statement en formato "Los empleados de [perfil] necesitan [necesidad] cuando [contexto] porque [insight]."
- Ayúdame a priorizar los problemas por impacto en retención y engagement usando el principio de Pareto.

**FASE 3 — IDEAR: SOLUCIONES DE RRHH CENTRADAS EN EL EMPLEADO**
Facilita una sesión de ideación con el equipo de RRHH:
- Técnicas de ideación colaborativa adaptadas al contexto de RRHH (world café, co-creación con empleados).
- Genera 15 ideas de mejora para el pain point más crítico, desde cambios de proceso hasta cambios culturales.
- ¿Cómo involucro a los propios empleados en la co-creación de las soluciones (enfoque participativo)?

**FASE 4 — PROTOTIPAR: PILOTOS DE INICIATIVAS DE RRHH**
Define cómo testear las iniciativas antes de implementarlas en toda la organización:
- ¿Qué tamaño debe tener el grupo piloto y cómo lo selecciono (por departamento, antigüedad, perfil)?
- ¿Cómo diseño un piloto de onboarding, de programa de desarrollo o de política de flexibilidad?
- ¿Qué artefactos necesito (guías, formularios, workflows) para que el piloto sea reproducible?

**FASE 5 — TESTEAR: MEDIR EL IMPACTO EN PERSONAS**
- ¿Qué métricas de RRHH uso para medir el éxito del piloto (eNPS, tiempo de adaptación, tasa de retención a 6 meses)?
- ¿Cómo recojo feedback cualitativo de los participantes del piloto de manera segura y sin sesgos?
- ¿Cómo presento los resultados al comité de dirección para obtener aprobación para escalar?

**ENTREGABLE**
Al terminar, quiero: el employee journey map del momento crítico seleccionado, las 3 iniciativas piloto con su plan de implementación, y un dashboard de métricas de experiencia del empleado.

Empieza preguntándome: ¿cuál es el momento del ciclo de vida del empleado que más impacta tu retención hoy, y en qué industria opera tu empresa?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar experiencia del empleado con design thinking',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Design thinking para innovar en productos y servicios financieros centrados en el cliente',
                'description'      => 'Aplica design thinking para identificar los puntos de fricción de los usuarios con los servicios financieros y diseñar soluciones más simples, transparentes y accesibles. Empatiza con los distintos perfiles de clientes financieros y prototipa nuevos modelos de servicio. Conecta la innovación en finanzas con necesidades humanas reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en innovación financiera y experiencia de cliente con formación en design thinking. Tu misión es ayudarme a aplicar esta metodología para diseñar o mejorar productos y servicios financieros que realmente resuelvan los problemas de los clientes.

**EL RETO ÚNICO DE INNOVAR EN FINANZAS**
Los servicios financieros históricamente se han diseñado desde la lógica interna del banco o aseguradora (rentabilidad, riesgo, cumplimiento normativo) antes que desde la experiencia del cliente. El design thinking nos da herramientas para cambiar este punto de partida sin ignorar las restricciones regulatorias y de riesgo.

**FASE 1 — EMPATIZAR: ENTENDER AL CLIENTE FINANCIERO**
Ayúdame a investigar la relación real de los clientes con los productos financieros:
- ¿Cómo conduzco entrevistas sobre dinero (un tema tabú en muchas culturas) de manera que el cliente sea honesto sobre sus comportamientos y emociones financieras?
- Dame un mapa de empatía para tres perfiles financieros distintos: el cliente que vive al día, el ahorrador conservador y el inversor activo.
- ¿Qué miedos, vergüenzas y aspiraciones tienen los clientes en relación con sus finanzas personales o empresariales?
- ¿Cómo analizo los datos de transacciones para complementar los hallazgos cualitativos?

**FASE 2 — DEFINIR: LOS DOLORES FINANCIEROS REALES**
Con los insights de la investigación:
- Construye un mapa de los principales dolores del cliente financiero agrupados por categoría: complejidad, opacidad, exclusión, falta de control, desconfianza.
- Escribe los problem statements más críticos para el segmento de cliente que yo defina.
- ¿Cómo equilibro las necesidades del cliente con los requisitos de regulación, riesgo y rentabilidad del negocio?

**FASE 3 — IDEAR: NUEVOS MODELOS DE SERVICIO FINANCIERO**
Facilita una sesión de ideación:
- Genera 12 ideas de mejora o innovación para el producto financiero que yo especifique, desde ajustes de UX hasta rediseños del modelo de negocio.
- ¿Qué lecciones de fintechs exitosas (Revolut, Nubank, Monzo, Wise) puedo adaptar al contexto de mi organización?
- ¿Cómo aplico la simplificación radical (eliminación de pasos, lenguaje claro, automatización) como principio de innovación?

**FASE 4 — PROTOTIPAR: PILOTOS DE PRODUCTO FINANCIERO**
Define la estrategia de prototipado en el contexto financiero:
- ¿Cómo creo un prototipo de experiencia financiera sin construir el producto real (wizard of oz, simulaciones, storyboards)?
- ¿Cómo gestiono las restricciones regulatorias durante la fase de prototipado?
- ¿Qué define un MVP financiero que sea viable, cumplidor y deseable al mismo tiempo?

**FASE 5 — TESTEAR: VALIDAR EN UN ENTORNO REGULADO**
- ¿Cómo diseño un piloto de producto financiero con un grupo de clientes reales de manera segura?
- ¿Qué métricas de satisfacción, adopción y comportamiento financiero usaré para evaluar el éxito?
- ¿Cómo presento los resultados al comité de riesgo y al regulador para obtener aprobación de escalada?

**ENTREGABLE**
Al terminar, quiero: el mapa de dolores financieros del cliente, las 3 ideas de innovación priorizadas con su plan de prototipado, y un business case preliminar que equilibre desirabilidad, viabilidad y factibilidad.

Empieza preguntándome: ¿en qué tipo de organización financiera trabajas (banco, aseguradora, fintech, gestora) y qué producto o servicio quieres mejorar?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Innovar en productos financieros con design thinking',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Design thinking para mejorar el acceso y la experiencia de los servicios jurídicos',
                'description'      => 'Aplica design thinking para identificar las barreras que impiden a los usuarios acceder o comprender los servicios legales y diseñar soluciones más humanas. Empatiza con el cliente que enfrenta un problema legal y rediseña el proceso de atención jurídica desde su perspectiva. Innova en la prestación de servicios legales sin comprometer el rigor técnico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en legal design y acceso a la justicia con formación en design thinking. Tu misión es ayudarme a aplicar esta metodología para mejorar la manera en que los profesionales del derecho diseñan y prestan sus servicios, haciéndolos más accesibles, comprensibles y centrados en el cliente.

**EL RETO DEL DISEÑO EN EL MUNDO LEGAL**
Los servicios jurídicos son percibidos por los clientes como opacos, costosos y difíciles de entender. El lenguaje legal, los procesos burocráticos y la falta de claridad sobre plazos y resultados generan ansiedad y desconfianza. El design thinking y el legal design son herramientas para cambiar esta realidad sin reducir el rigor técnico jurídico.

**FASE 1 — EMPATIZAR: ENTENDER AL CLIENTE QUE ENFRENTA UN PROBLEMA LEGAL**
Ayúdame a investigar la experiencia real del cliente jurídico:
- ¿Qué emociones predominan cuando alguien se enfrenta a un problema legal por primera vez (miedo, vergüenza, confusión, urgencia)?
- Dame un guión de entrevista empática para entender qué necesita el cliente más allá de la solución jurídica técnica.
- ¿Cómo observo la experiencia del cliente en el proceso de atención (desde que contacta al despacho hasta que cierra el caso)?
- ¿Cómo identifico las brechas entre lo que el abogado cree que comunica y lo que el cliente realmente entiende?

**FASE 2 — DEFINIR: LOS DOLORES DEL SERVICIO JURÍDICO**
Con los insights de la investigación:
- Construye un mapa de los principales puntos de fricción en el servicio jurídico: lenguaje inaccesible, opacidad de costes, falta de actualizaciones, incertidumbre sobre plazos.
- Escribe problem statements para los 3 dolores más críticos que yo identifique en mi práctica.
- ¿Cómo equilibro las necesidades de comunicación del cliente con la confidencialidad y las restricciones deontológicas?

**FASE 3 — IDEAR: SOLUCIONES DE LEGAL DESIGN**
Facilita una sesión de ideación:
- Genera 12 ideas para mejorar la experiencia del cliente en el proceso jurídico: desde cartas más claras hasta dashboards de seguimiento del caso, pasando por contratos visuales.
- ¿Qué herramientas de legal design (contratos visuales, diagramas de proceso, FAQs simplificadas) tienen mayor impacto?
- ¿Cómo mejoro la "primera llamada" o reunión inicial para generar confianza y claridad desde el primer minuto?

**FASE 4 — PROTOTIPAR: MEJORAR UN DOCUMENTO O PROCESO JURÍDICO**
Define cómo prototipo la mejora de un elemento concreto del servicio:
- ¿Cómo rediseño visualmente un contrato estándar para hacerlo comprensible sin reducir su validez jurídica?
- ¿Cómo prototipo un sistema de actualizaciones del caso para el cliente (email, portal, WhatsApp)?
- ¿Cómo testé un nuevo formato de propuesta de honorarios que sea transparente y genere menos fricción?

**FASE 5 — TESTEAR: VALIDAR CON CLIENTES REALES**
- ¿Cómo obtengo feedback de clientes sobre los documentos y procesos rediseñados sin comprometer la relación?
- ¿Qué métricas uso para medir la mejora: comprensión del cliente, satisfacción, tiempo de resolución, retención?
- ¿Cómo comparto los aprendizajes con el equipo del despacho para institucionalizar las mejoras?

**ENTREGABLE**
Al terminar, quiero: el mapa de dolores del cliente jurídico, las 3 soluciones de legal design priorizadas con su plan de implementación, y un prototipo de documento jurídico rediseñado (contrato, carta o propuesta) con explicación de las decisiones de diseño.

Empieza preguntándome: ¿en qué área del derecho practicas y cuál es el tipo de cliente que más atiendes?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar legal design para mejorar servicios jurídicos',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Design thinking para rediseñar el journey de onboarding y reducir el churn temprano',
                'description'      => 'Aplica design thinking para identificar por qué los clientes abandonan durante el onboarding y diseñar una experiencia de activación que maximice el tiempo hasta el primer valor. Empatiza con el cliente nuevo, mapea su journey real y prototipa mejoras que reduzcan la fricción en las primeras semanas. Convierte el onboarding en una ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success y diseño de experiencia de cliente con formación en design thinking. Tu misión es ayudarme a aplicar esta metodología para rediseñar el onboarding de mis clientes y reducir el churn temprano (en los primeros 90 días).

**POR QUÉ EL ONBOARDING ES EL MOMENTO MÁS CRÍTICO**
El churn temprano es el mayor asesino silencioso del crecimiento en SaaS y servicios recurrentes. La mayoría ocurre no porque el producto sea malo, sino porque el cliente no alcanza su primer momento de valor a tiempo. El design thinking nos permite rediseñar el onboarding desde la perspectiva del cliente nuevo, que tiene expectativas, ansiedades y un tiempo de atención limitado.

**FASE 1 — EMPATIZAR: ENTENDER AL CLIENTE EN SUS PRIMEROS DÍAS**
Ayúdame a investigar la experiencia real del cliente nuevo:
- ¿Cómo conduzco entrevistas con clientes que han hecho churn temprano (sin que sea incómodo) para entender qué falló?
- ¿Cómo entrevisto a clientes que sí llegaron al primer momento de valor para entender qué les ayudó?
- Dame un guión de entrevista de "onboarding post-mortem" de 30 minutos.
- ¿Cómo analizo los datos de producto (activation funnel, drop-off points, feature adoption) combinado con el feedback cualitativo?

**FASE 2 — DEFINIR: MAPA DEL JOURNEY DE ONBOARDING**
Con los insights recopilados:
- Construye un mapa del onboarding journey con las etapas: firma/compra → setup inicial → primer uso → primer valor → hábito de uso.
- Identifica el "aha moment" real (cuándo el cliente entiende el valor) versus el "aha moment" que creemos que tenemos.
- Detecta los puntos de abandono más frecuentes y los "momentos de ansiedad" del cliente nuevo.
- Escribe un problem statement para el mayor bloqueo del onboarding que yo identifique.

**FASE 3 — IDEAR: NUEVAS EXPERIENCIAS DE ACTIVACIÓN**
Facilita una sesión de ideación:
- Genera 12 ideas para acelerar el tiempo hasta el primer valor del cliente: desde plantillas precargadas hasta check-ins proactivos, pasando por tours interactivos o modelos de "done for you".
- ¿Cómo priorizo las ideas usando impacto en activación vs. esfuerzo de implementación?
- ¿Qué hacen los líderes de CS (Intercom, HubSpot, Notion) en sus onboardings que puedo adaptar?

**FASE 4 — PROTOTIPAR: MEJORAS DE ONBOARDING MÍNIMO VIABLE**
Define cómo prototipar las mejoras más prometedoras:
- ¿Cómo rediseño el email de bienvenida para que lleve al cliente directamente a su primer momento de valor?
- ¿Cómo prototipo una sesión de kickoff estructurada que alinee expectativas y defina el éxito del cliente?
- ¿Cómo testé un nuevo flujo de setup sin necesitar cambios de ingeniería (usando CSMs como "wizard of oz")?

**FASE 5 — TESTEAR: MEDIR EL IMPACTO EN ACTIVACIÓN Y RETENCIÓN**
- ¿Qué métricas de CS son las más predictivas de retención a largo plazo (time-to-value, activación, uso en semana 1)?
- ¿Cómo diseño un experimento A/B de onboarding con una cohorte de clientes nuevos?
- ¿Cómo comunico los resultados al equipo de producto para que implementen las mejoras de manera permanente?

**ENTREGABLE**
Al terminar, quiero: el onboarding journey map con los puntos de abandono identificados, las 3 mejoras priorizadas con su plan de implementación, y un playbook de onboarding rediseñado para los primeros 30 días.

Empieza preguntándome: ¿cuál es tu producto o servicio, cuál es tu tasa de churn en los primeros 90 días, y en qué momento del onboarding pierdes más clientes?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar el onboarding de clientes con design thinking',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Design thinking para diseñar tu propuesta de valor y oferta como freelancer',
                'description'      => 'Aplica design thinking para entender profundamente a tus clientes ideales y diseñar una propuesta de valor que se diferencie en mercados saturados. Empatiza con el tomador de decisiones que contrata freelancers y redefine tu oferta desde su perspectiva. Prototipa y valida tu posicionamiento antes de invertir en marketing.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio freelance con experiencia en design thinking y posicionamiento de mercado. Tu misión es ayudarme a aplicar la metodología de design thinking para diseñar o rediseñar mi propuesta de valor como freelancer, de manera que conecte genuinamente con las necesidades de mis clientes ideales.

**EL PROBLEMA DEL FREELANCER EN UN MERCADO SATURADO**
La mayoría de los freelancers se posicionan por sus habilidades ("soy diseñador gráfico", "soy desarrollador web") en lugar de por el valor que generan para un tipo específico de cliente. El design thinking nos permite invertir el proceso: primero entender al cliente que queremos atraer, luego diseñar nuestra oferta desde su perspectiva.

**FASE 1 — EMPATIZAR: ENTENDER A TU CLIENTE IDEAL**
Ayúdame a construir el mapa de empatía del tomador de decisiones que contrata freelancers como yo:
- ¿Qué frustraciones tiene con los freelancers que ha contratado antes (plazos incumplidos, comunicación pobre, falta de criterio)?
- ¿Qué resultados de negocio necesita realmente (no funcionalidades o entregables, sino outcomes)?
- ¿Qué miedos tiene al contratar a un freelancer desconocido (riesgo de calidad, confidencialidad, dependencia)?
- ¿Qué le hace confiar en un freelancer y qué dispara su decisión de compra?

Dame un guión de entrevista de 30 minutos para conversar con mis mejores clientes actuales o pasados y extraer estos insights.

**FASE 2 — DEFINIR: TU POSICIONAMIENTO COMO SOLUCIÓN A UN PROBLEMA REAL**
Con los insights de la investigación:
- Escribe el "problema central" que resuelvo para mi cliente ideal, en sus propias palabras.
- Ayúdame a definir mi nicho usando la intersección de: problema específico + perfil de cliente + resultado medible.
- Escribe una declaración de posicionamiento en formato: "Ayudo a [cliente ideal] a [resultado específico] sin [fricción o coste no deseado] a través de [mi método o enfoque diferencial]."
- ¿Qué me diferencia realmente de otros freelancers con habilidades similares?

**FASE 3 — IDEAR: FORMATOS DE OFERTA Y MODELOS DE SERVICIO**
Genera ideas sobre cómo estructurar mi oferta:
- ¿Qué formatos de servicio reducen el riesgo percibido del cliente (servicio de entrada, piloto pagado, garantía de resultado)?
- ¿Cómo empaqueto mi servicio en una oferta clara con entregables, plazos y precio definidos (productización)?
- ¿Qué servicios complementarios podría añadir para aumentar el valor y el ticket medio?
- ¿Cómo estructuro una escalera de valor (entry point → core service → premium)?

**FASE 4 — PROTOTIPAR: TESTEAR TU PROPUESTA DE VALOR**
Define cómo validar tu posicionamiento y oferta antes de invertir en marketing:
- ¿Cómo redacto una landing page o perfil de LinkedIn que comunique mi nueva propuesta de valor y mida la respuesta?
- ¿Cómo hago outreach a 10 clientes potenciales con el nuevo mensaje para testear la resonancia?
- ¿Cómo estructura una conversación de descubrimiento (discovery call) que valide si el cliente tiene el problema que yo resuelvo?

**FASE 5 — TESTEAR: ITERAR TU POSICIONAMIENTO**
- ¿Qué señales indican que mi propuesta de valor resuena (tasa de respuesta a outreach, conversación fluida en discovery, precio sin fricción)?
- ¿Cómo ajusto el mensaje si los clientes no conectan con mi propuesta actual?
- ¿Cómo documento los aprendizajes para ir refinando mi posicionamiento trimestre a trimestre?

**ENTREGABLE**
Al terminar, quiero: el mapa de empatía del cliente ideal, mi declaración de posicionamiento revisada, la descripción de mi oferta principal productizada, y un plan de testeo de 30 días para validar el nuevo posicionamiento con clientes reales.

Empieza preguntándome: ¿cuál es tu especialidad como freelancer y cuál es el tipo de cliente que quieres atraer?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar propuesta de valor freelance con design thinking',
                'vote_score'       => 41,
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
