<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills227Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Contratar al equipo de marketing correcto',
                'description'       => 'Construye el equipo de marketing que ejecuta la estrategia: los perfiles que necesitas en cada etapa de crecimiento, el proceso de evaluación de candidatos de marketing y las señales que diferencian al marketer que produce resultados del que produce contenido.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en construcción de equipos de marketing con experiencia en la contratación y gestión de profesionales del marketing en startups, scale-ups y empresas medianas. Necesito tu ayuda para diseñar el proceso de contratación del equipo de marketing y evaluar candidatos correctamente.

Mi contexto:
- Etapa de la empresa: [pre-product market fit / growth / escala]
- Tamaño actual del equipo de marketing: [solo / 1-3 personas / equipo pequeño]
- Rol o roles que necesito contratar: [primer marketer, growth, content, performance, brand, marketing manager, CMO, etc.]
- Presupuesto de contratación aproximado: [rango salarial disponible]
- Modelo de go-to-market: [PLG / SLG / outbound / inbound / community-led]
- Principal problema con la contratación de marketing hasta ahora: [candidatos que inflan el CV / no sé qué preguntar / contrataciones que no duraron / dificultad para distinguir el talento real]

Con ese contexto, dame:

1. EL PERFIL DE MARKETING QUE NECESITAS SEGÚN LA ETAPA
¿Qué tipo de marketer necesito según la etapa de crecimiento de mi empresa? Explícame las diferencias entre el marketer del 0 al 1 (el que construye canales desde cero, es cómodo con la incertidumbre y no necesita un equipo grande para producir resultados), el marketer del 1 al 10 (el que escala lo que funciona, construye procesos y gestiona personas) y el marketer del 10 al 100 (el que ejecuta a escala con disciplina). Para mi etapa, ¿cuál es el perfil que necesito y cuáles son las señales de alerta de un candidato que no encaja?

2. LA OFERTA DE TRABAJO QUE ATRAE AL CANDIDATO CORRECTO
¿Cómo redacto la oferta de trabajo de marketing que atrae a los candidatos que quiero y filtra a los que no encajan? Dame la estructura de la job description ideal: el hook inicial que engancha al candidato bueno, la descripción del problema que va a resolver (no una lista de responsabilidades genéricas), las métricas de éxito del rol en los primeros noventa días, el stack de herramientas relevante y lo que hace especial trabajar en esta empresa. ¿Qué frases de las job descriptions de marketing generan rechazo en los mejores candidatos?

3. EVALUACIÓN DEL CANDIDATO: MÁS ALLÁ DEL CV
¿Cómo evalúo si un candidato de marketing va a dar resultados y no solo va a parecer que los da? Dame el proceso de evaluación en tres fases: la revisión del portfolio y los resultados concretos (cómo diferenciar al que tuvo suerte del que tiene sistema), la entrevista de competencias que revela el pensamiento estratégico y la capacidad de ejecución, y el ejercicio práctico que reproduce una situación real del rol. Para cada fase, dame las preguntas o ejercicios concretos y qué respuestas me indican un candidato excelente versus uno mediocre.

4. PREGUNTAS DE ENTREVISTA QUE REVELAN EL TALENTO REAL
Dame las diez preguntas de entrevista más efectivas para evaluar candidatos de marketing, incluyendo: preguntas que revelan si el candidato entiende de negocio y no solo de marketing, preguntas que muestran si puede conectar sus acciones con métricas de resultado, preguntas que revelan cómo gestiona la ambigüedad y el cambio de prioridades, y preguntas que identifican al candidato que aprende rápido frente al que repite lo que ya sabe. Para cada pregunta, dame el tipo de respuesta que estoy buscando.

5. EL EJERCICIO PRÁCTICO DE MARKETING: CÓMO HACERLO BIEN
¿Cómo diseño el ejercicio práctico de la entrevista de marketing para que sea justo, revelador y no consuma demasiado tiempo del candidato? Dame el diseño del ejercicio ideal: el formato (take-home de cuatro horas versus presentación de caso en una hora), el brief que le doy al candidato, qué estoy evaluando realmente (el pensamiento estructurado, la capacidad de priorización, el sentido del negocio o la ejecución táctica) y cómo calibro la calidad de la respuesta con criterios objetivos. ¿Cuáles son los errores más frecuentes en los ejercicios de marketing que diseñan las empresas?

6. SEÑALES DE ALERTA: EL CANDIDATO QUE PARECE BUENO PERO NO LO ES
¿Cuáles son las señales de alerta que debo detectar en los candidatos de marketing antes de contratar? Dame la lista de red flags: el candidato que tiene grandes resultados pero no puede explicar su contribución específica, el que atribuye todos los éxitos al equipo y ninguno de los fracasos a sí mismo, el que habla de herramientas y canales pero no de impacto en el negocio, el que no tiene curiosidad sobre el cliente y el que nunca ha estado en una etapa de growth parecida a la tuya.

7. LOS PRIMEROS NOVENTA DÍAS: CÓMO CONFIGURAR EL ÉXITO
¿Cómo diseño el plan de incorporación del nuevo miembro del equipo de marketing para que empiece a generar impacto cuanto antes? Dame el plan de los primeros noventa días: qué debe aprender en el primer mes (el cliente, el producto, los canales actuales), qué debe producir en el segundo mes (el diagnóstico del estado actual y las primeras hipótesis), y qué debe ejecutar y medir en el tercer mes. ¿Cuáles son los errores del manager que sabotean el éxito del nuevo marketer en los primeros noventa días?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de contratación del equipo de marketing y evaluar candidatos correctamente para cada etapa de crecimiento.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical hiring: evaluar a los developers correctamente',
                'description'       => 'Diseña el proceso de selección técnica que identifica a los mejores sin hacerles pasar por hazing: el take-home vs. la entrevista técnica en vivo, los criterios de evaluación y el proceso que atrae a candidatos A cuando los candidatos B están dispuestos a pasar por cualquier proceso.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en engineering hiring con experiencia diseñando procesos de selección técnica en startups y empresas de tecnología. Necesito tu ayuda para diseñar el proceso de evaluación de developers que identifica al mejor talento sin ahuyentarlos con procesos de selección que parecen hazing o que consumen demasiado de su tiempo.

Mi contexto:
- Tipo de roles que necesito contratar: [backend, frontend, full-stack, mobile, data, DevOps, etc.]
- Etapa de la empresa: [startup early-stage / scale-up / empresa consolidada]
- Seniority buscado: [junior / mid / senior / staff / principal]
- Número de contrataciones previstas: [para calibrar la carga del proceso]
- Proceso actual si existe: [screening / entrevista técnica / take-home / entrevista de sistema / onsite / etc.]
- Principal problema con el proceso actual: [pierdo candidatos en el proceso / no sé cómo calibrar la dificultad / el take-home tarda demasiado / las entrevistas en vivo generan ansiedad / no tenemos criterios objetivos]

Con ese contexto, dame:

1. EL DEBATE TAKE-HOME VS ENTREVISTA TÉCNICA EN VIVO
¿Cuándo es mejor usar un take-home assignment y cuándo una entrevista técnica en vivo? Dame el análisis honesto de las ventajas y desventajas de cada formato: el take-home que da más tiempo para pensar pero que puede ser hecho por otro o que consume demasiado tiempo del candidato senior, y la entrevista en vivo que evalúa el pensamiento en tiempo real pero que puede penalizar a las personas con ansiedad. ¿Existe un tercer formato híbrido que capture lo mejor de ambos? Para mi caso específico, ¿qué recomiendas?

2. CRITERIOS DE EVALUACIÓN OBJETIVOS: EL PROBLEMA DEL "LO SÉ CUANDO LO VEO"
¿Cómo defino criterios de evaluación técnica que sean objetivos y consistentes entre diferentes entrevistadores? Dame el proceso de construcción de la scorecard técnica: las dimensiones a evaluar (resolución de problemas, calidad del código, comunicación técnica, manejo de la ambigüedad, conocimiento del dominio), cómo anclar cada dimensión con ejemplos concretos de respuestas de nivel 1, 3 y 5, y cómo calibrar a los entrevistadores para que usen la rúbrica de forma consistente.

3. EL TAKE-HOME QUE NO ESPANTA A LOS SENIORS
¿Cómo diseño un take-home que sea revelador sin consumir más de cuatro horas del candidato? Dame el diseño del take-home ideal: el tipo de problema (un problema real de la empresa vs un ejercicio artificial), la instrucción que da libertad de decisión para ver cómo piensa el candidato, el tiempo límite y cómo comunicarlo, qué evalúas en el código entregado (no solo si funciona, sino la legibilidad, las decisiones de diseño y lo que el candidato dice sobre lo que haría diferente si tuviera más tiempo). ¿Qué hace que un take-home resulte poco respetuoso para un developer senior?

4. LA ENTREVISTA DE SISTEMA: CÓMO EVALUARLA BIEN
¿Cómo estructuro la entrevista de system design para que evalúe el pensamiento de ingeniería real y no la memorización de patrones? Dame el guión de la entrevista de system design: el tipo de problema que proponer según el seniority del candidato, cómo guiar al candidato sin darle las respuestas, qué señales indican un pensamiento de ingeniería maduro (manejo de trade-offs, clarificación de requisitos antes de diseñar, consideración de la escala y el fallo), y las señales de alerta que indican a un candidato que memoriza soluciones pero no entiende los principios.

5. EL PROCESO COMPLETO: ESTRUCTURA Y TIEMPOS
¿Cuántas etapas debe tener el proceso de selección técnica y cuánto tiempo debe durar desde el primer contacto hasta la oferta? Dame la estructura óptima del proceso: el screening inicial (CV + llamada de quince minutos), la evaluación técnica (take-home o entrevista técnica), la entrevista de sistema para seniors, la entrevista cultural y la oferta. Para cada etapa, dame el tiempo máximo que debería tomar, quién debería estar involucrado y qué criterio de avance use para pasar a la siguiente. ¿Cuántos candidatos sueles perder en cada etapa y cómo reducir ese drop-off?

6. CÓMO ATRAER A LOS MEJORES CUANDO HAY COMPETENCIA
¿Cómo compito por el talento técnico de nivel A cuando no puedo pagar los salarios de las grandes tecnológicas? Dame las estrategias no salariales para atraer a buenos developers: el impacto real del trabajo (responsabilidad, alcance del rol, autonomía técnica), la cultura de ingeniería (cómo explico que los developers tienen voz en las decisiones técnicas), el stack tecnológico honesto y los proyectos de ingeniería interesantes. ¿Cómo comunico estas ventajas durante el proceso de selección para que el candidato las valore antes de recibir la oferta?

7. SESGOS EN LA SELECCIÓN TÉCNICA: CÓMO REDUCIRLOS
¿Qué sesgos afectan más a los procesos de technical hiring y cómo los mitigó? Dame el análisis de los sesgos más frecuentes: el sesgo de similaridad (contratar a alguien que se parece al entrevistador), el sesgo de la primera impresión, el sesgo de género y diversidad en las entrevistas de código en vivo, el halo effect de las empresas donde trabajó el candidato anteriormente y el sesgo hacia el candidato que habla bien pero no produce bien. Para cada sesgo, dame una técnica concreta de mitigación que pueda implementar sin cambiar todo el proceso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de technical hiring que identifica a los mejores developers con criterios objetivos y sin ahuyentarlos con procesos excesivos.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Hiring de diseñadores: qué buscar más allá del portfolio',
                'description'       => 'Evalúa a los candidatos de diseño correctamente: el portfolio review que va más allá de lo estético, la prueba de proceso que revela cómo piensa el diseñador y la entrevista que identifica al diseñador que encaja en la cultura del equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la contratación de diseñadores con experiencia en equipos de producto y agencias creativas. Necesito tu ayuda para diseñar el proceso de evaluación de candidatos de diseño que va más allá de si el portfolio es bonito, y que identifica al diseñador que va a generar impacto en el equipo.

Mi contexto:
- Tipo de diseñador que quiero contratar: [UX/UI, producto, gráfico, motion, brand, design system, etc.]
- Contexto del equipo: [startup / agencia / in-house en empresa grande / equipo de uno]
- Seniority buscado: [junior / mid / senior / lead / director]
- Stack de herramientas principal: [Figma, Sketch, Adobe, etc.]
- Principal reto en contrataciones anteriores de diseño: [portfolio bonito pero no sabe defender sus decisiones / buen estilo pero no sabe de UX / diseñador lento / mala comunicación con producto y desarrollo / no encajó en la cultura]

Con ese contexto, dame:

1. EL PORTFOLIO REVIEW QUE VA MÁS ALLÁ DE LO ESTÉTICO
¿Cómo reviso el portfolio de un diseñador para evaluar el pensamiento de diseño y no solo la calidad visual? Dame el proceso de revisión del portfolio: las preguntas que hago para entender cuál fue la contribución específica del diseñador en proyectos de equipo, cómo evalúo si el diseño está motivado por decisiones estratégicas o solo por preferencias estéticas, las señales que revelan si el diseñador entiende los constraints de implementación, y cómo identifico la progresión de pensamiento en los proyectos más recientes frente a los más antiguos.

2. CASE STUDY REVIEW: LA ENTREVISTA DE PROCESO
¿Cómo conduzco la revisión de un case study para revelar cómo piensa el diseñador más allá de lo que entregó? Dame las preguntas de la sesión de case study review: cómo pedir que me lleve por las decisiones de diseño (no por las pantallas), cómo explorar las alternativas que descartó y por qué, cómo evaluar si utilizó investigación de usuarios real o supuestos, cómo explorar los fracasos en el proceso y qué aprendió de ellos, y cómo entender la relación que tuvo con producto y desarrollo durante el proyecto.

3. EL EJERCICIO DE DISEÑO: QUÉ PEDIR Y QUÉ EVALUAR
¿Cómo diseño el ejercicio práctico de la entrevista de diseño para que sea justo y revelador? Dame el diseño del ejercicio ideal según el seniority: para junior el ejercicio de resolución de un problema específico, para senior el brief más abierto que evalúa la capacidad de estructurar el problema antes de resolverlo. ¿Cuánto tiempo debo pedir al candidato que invierta? ¿Evalúo la entrega o el proceso? ¿Cómo evito que el ejercicio sea tan genérico que no me diga nada sobre el candidato?

4. ENTREVISTA DE COMPETENCIAS PARA DISEÑADORES
Dame las diez preguntas de entrevista más reveladoras para candidatos de diseño, incluyendo: preguntas que evalúan la capacidad de defender decisiones de diseño ante stakeholders no diseñadores, preguntas que revelan cómo gestiona el feedback negativo o los cambios de dirección, preguntas que muestran si entiende los objetivos de negocio detrás del diseño, preguntas que identifican al diseñador que aprende de la investigación de usuarios versus el que diseña desde sus propias preferencias, y preguntas que revelan cómo gestiona la relación con desarrollo cuando hay conflicto entre diseño ideal e implementación posible.

5. SEÑALES DE ALERTA EN CANDIDATOS DE DISEÑO
¿Cuáles son las señales de alerta más frecuentes en los candidatos de diseño que no detecté hasta que fue demasiado tarde? Dame la lista de red flags: el diseñador que no puede explicar por qué tomó una decisión de diseño, el que defiende todas sus decisiones como si fueran hechos en lugar de hipótesis, el que no muestra ninguna iteración en su portfolio (el diseño perfecto desde el primer intento es sospechoso), el que habla solo de herramientas y no de procesos, y el que tiene portfolio impresionante pero no puede diseñar en sesión en vivo con soltura.

6. EVALUACIÓN DEL ENCAJE CULTURAL EN DISEÑO
¿Cómo evalúo si el diseñador va a encajar en la cultura del equipo y en la dinámica con producto y desarrollo? Dame las preguntas y situaciones que revelan el encaje cultural: cómo trabaja cuando no tiene todas las respuestas, cómo reacciona cuando el producto o el negocio cambian los requisitos después de que ya ha diseñado la solución, cómo comparte su trabajo en proceso con el equipo (si lo hace o si espera tenerlo perfecto), y cómo entiende su rol en relación con el PM y el engineering lead.

7. ONBOARDING DEL DISEÑADOR: LOS PRIMEROS NOVENTA DÍAS
¿Cómo diseño el plan de incorporación del diseñador para que empiece a generar impacto cuanto antes y sin perder el primer mes navegando sin rumbo? Dame el plan de los primeros noventa días de un diseñador nuevo: qué debe conocer en el primer mes (el producto, los usuarios, el design system existente, los procesos del equipo), qué debe producir en el segundo mes (su primer proyecto de baja complejidad con todos los pasos del proceso documentados) y qué nivel de autonomía debería tener al final del tercer mes. ¿Cuáles son los errores del manager que retrasan la integración del diseñador?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el proceso de evaluación de candidatos de diseño que va más allá del portfolio estético e identifica el pensamiento de diseño real.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales hiring: contratar a los comerciales que venden',
                'description'       => 'Contrata a los vendedores que van a dar resultados: el perfil que buscar según el tipo de ventas, el proceso de evaluación que identifica la actitud correcta y los primeros 90 días que determinan si el comercial va a triunfar o a fracasar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la contratación y desarrollo de equipos de ventas con experiencia en sales hiring en empresas B2B de distintos tamaños. Necesito tu ayuda para diseñar el proceso de contratación de comerciales que realmente venden y no solo tienen buen aspecto en la entrevista.

Mi contexto:
- Tipo de ventas que requiere el rol: [inbound / outbound / enterprise / SMB / inside sales / field sales / SDR / AE / AM, etc.]
- Ticket medio y ciclo de venta: [importa para calibrar el perfil necesario]
- Etapa de la empresa: [startup early-stage / scale-up / empresa madura]
- Seniority buscado: [SDR / AE junior / AE senior / AM / Sales Manager]
- Principales problemas con contrataciones anteriores de ventas: [arrancaron pero no cumplieron cuota / buen entrevistador pero mal vendedor / churn del equipo de ventas alto / contrataciones que tardaron demasiado en rampar]

Con ese contexto, dame:

1. EL PERFIL DEL VENDEDOR QUE ENCAJA CON MI TIPO DE VENTA
¿Qué perfil de vendedor necesito según mi ciclo de venta, ticket y modelo de negocio? Explícame las diferencias entre el hunter (orientado al outbound, cómodo con el rechazo, genera pipeline desde cero), el farmer (retención y expansión, relación a largo plazo, menor tolerancia al rechazo), el consultor técnico (ventas complejas con ciclos largos, necesita dominar el producto), y el inside sales de alto volumen (muchas llamadas, cierre rápido, poco desarrollo de relación). Para mi caso específico, ¿cuál es el perfil correcto y cuáles son las señales de alerta de un candidato que no encaja?

2. LA JOB DESCRIPTION QUE ATRAE AL VENDEDOR CORRECTO
¿Cómo redacto la oferta de trabajo de ventas que atrae a comerciales orientados a resultados y filtra a los que prefieren el proceso sin el resultado? Dame la estructura de la job description de ventas: cómo comunicar las métricas de éxito del rol (cuota, OTE esperado, ramp period), las herramientas y el proceso de venta, las razones genuinas por las que un buen vendedor debería querer este rol y las señales que envía la oferta sobre la cultura del equipo de ventas. ¿Qué frases de las job descriptions de ventas generan rechazo en los buenos candidatos?

3. EL PROCESO DE EVALUACIÓN: CÓMO SABER SI SABE VENDER
¿Cómo evalúo si un candidato de ventas va a vender de verdad y no solo a parecer que puede hacerlo? Dame el proceso de evaluación en cuatro fases: el screening de motivación y resultados pasados (cómo verificar los números que declara en el CV), la entrevista de competencias orientada a ejemplos de ventas reales, el roleplay de venta que simula una situación del proceso comercial de mi empresa, y la evaluación de las referencias de managers anteriores. Para cada fase, dame los criterios concretos de evaluación y las respuestas que diferencian al candidato excelente.

4. EL ROLEPLAY DE VENTAS: CÓMO DISEÑARLO Y EVALUARLO
¿Cómo diseño el roleplay de ventas que revela el talento comercial real del candidato sin que parezca una trampa? Dame el diseño del roleplay ideal: el brief que le doy al candidato antes (con cuánto tiempo de preparación), qué rol juego yo como entrevistador (comprador con objeciones realistas pero no absurdas), qué evalúo durante el roleplay (la calificación del lead, la gestión de objeciones, el intento de cierre, la capacidad de escucha activa) y cómo diferencio entre el candidato que tiene un buen script memorizado y el que tiene genuina habilidad de venta.

5. SEÑALES DE ALERTA EN CANDIDATOS DE VENTAS
¿Cuáles son las señales de alerta más frecuentes en candidatos de ventas que resultan en malas contrataciones? Dame la lista completa de red flags: el candidato que culpa siempre al producto, al mercado o al equipo de marketing cuando las cifras no se dieron, el que no puede explicar con precisión cómo consiguió sus mejores resultados, el que tiene el mejor trimestre siempre pero la cuota anual nunca se cerró, el que en el roleplay habla más de lo que escucha y el que pide ver el listado de clientes antes de hablar de qué va a aportar.

6. EL PERÍODO DE RAMP: CONFIGURAR EL ÉXITO EN LOS PRIMEROS NOVENTA DÍAS
¿Cómo diseño los primeros noventa días del nuevo comercial para que rampe lo antes posible? Dame el plan de ramp estructurado: el primer mes centrado en el conocimiento del producto, el cliente y el proceso de venta (sin presión de cuota), el segundo mes con actividad de prospección con objetivos de actividad (no de cierre), y el tercer mes con cuota prorrateada y revisiones semanales de pipeline. ¿Cuál es el ramp period razonable según el tipo de venta y el seniority, y cuándo debo reconocer que el nuevo comercial no va a funcionar?

7. RETENCIÓN DEL TALENTO COMERCIAL: NO CONTRATAR BIEN PARA LUEGO PERDERLOS
¿Cómo retengo a los buenos comerciales una vez que los he contratado? Dame las palancas de retención del equipo de ventas más allá del salario: la estructura de comisiones que recompensa el esfuerzo sostenido (no el golpe de suerte puntual), la carrera dentro del equipo comercial, el territorio de ventas justo, el reconocimiento del desempeño y el manager de ventas que es coach y no solo jefe de seguimiento de KPIs. ¿Cuáles son las razones más frecuentes por las que los buenos vendedores abandonan una empresa y cómo prevenirlas?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de contratación de comerciales que realmente venden: evaluación del perfil, roleplay y onboarding efectivo.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM hiring: contratar al product manager correcto',
                'description'       => 'Construye el equipo de producto con los PMs correctos: el perfil del PM que encaja según la etapa y el tipo de producto, el proceso de evaluación y las preguntas de entrevista que revelan el pensamiento de producto real detrás del CV.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management y en la contratación de PMs con experiencia en equipos de producto de distinto tamaño y madurez. Necesito tu ayuda para diseñar el proceso de evaluación de product managers que identifica al PM que va a generar impacto y no al que tiene el CV más impresionante.

Mi contexto:
- Tipo de producto que gestiona el rol: [B2B SaaS, consumer app, plataforma, marketplace, herramienta de productividad, etc.]
- Etapa del producto: [0-1 / 1-10 / producto maduro a optimizar]
- Seniority buscado: [APM / PM / senior PM / principal PM / GPM / head of product / CPO]
- Tamaño actual del equipo de producto: [cuántos PMs hay ya]
- Principal problema con contrataciones anteriores de PM: [muy estratégico sin capacidad de ejecución / muy ejecutor sin visión / no conectaba con el equipo de ingeniería / no sabía priorizar / demasiado orientado a features y poco a outcomes]

Con ese contexto, dame:

1. EL PERFIL DEL PM QUE NECESITO SEGÚN LA ETAPA
¿Qué tipo de PM necesito según la etapa de mi producto y empresa? Explícame las diferencias entre el PM del 0 al 1 (que se siente cómodo con la incertidumbre, hace discovery rápido sin proceso formal, tiene alta tolerancia al fracaso), el PM del 1 al 10 (que escala lo que funciona, construye procesos de discovery y delivery, gestiona múltiples stakeholders) y el PM senior de producto maduro (que optimiza con datos, gestiona equipos grandes y equilibra deuda técnica con nuevas features). Para mi etapa, ¿cuál es el perfil correcto y cuáles son las señales de que un candidato no encaja aunque parezca bueno?

2. REVISIÓN DEL CV Y PORTFOLIO DE PM: QUÉ MIRAR
¿Qué busco en el CV y el portfolio de producto de un PM antes de la primera entrevista? Dame el proceso de revisión: cómo evaluar si los resultados que describe son outcomes de negocio (usuarios activos, retención, conversión, revenue) o solo outputs (features lanzadas, sprints completados), cómo identificar si el PM tuvo autonomía real o solo ejecutó la hoja de ruta de otra persona, y las señales del portfolio que indican que el PM entiende el proceso de discovery y no solo el de delivery.

3. PREGUNTAS DE ENTREVISTA QUE REVELAN EL PENSAMIENTO DE PRODUCTO
Dame las doce preguntas de entrevista más reveladoras para PMs, incluyendo: preguntas de estrategia de producto que revelan si entiende de mercado y competencia, preguntas de priorización que muestran si puede tomar decisiones difíciles con información incompleta, preguntas de discovery que revelan si trabaja con datos e investigación de usuarios reales o con intuición, preguntas de influencia sin autoridad que muestran cómo trabaja con ingeniería y diseño, y preguntas de gestión de stakeholders que revelan cómo maneja la presión de ejecutivos que piden features específicas. Para cada pregunta, dame qué tipo de respuesta indica un PM excelente.

4. EL EJERCICIO PRÁCTICO DE PRODUCT CASE
¿Cómo diseño el product case study de la entrevista de PM para que sea revelador y no se convierta en un ejercicio de memorización de frameworks? Dame el diseño del ejercicio ideal: el tipo de pregunta (diseña un producto para X / diagnostica por qué la métrica Y está cayendo / prioriza estas tres opciones estratégicas), cómo evalúo la clarificación del problema antes de proponer soluciones, cómo evalúo el pensamiento estructurado sin penalizar al candidato que no usa el framework exacto que yo uso, y cómo diferencio al PM que piensa como propietario del producto del que piensa como coordinador de proyectos.

5. LA EVALUACIÓN TÉCNICA DEL PM: CUÁNTO SABER DE TECH
¿Cuánto conocimiento técnico debe tener un PM para trabajar bien con ingeniería? Dame el marco de evaluación técnica para PMs: la diferencia entre el PM que sabe suficiente para hablar con credibilidad con el equipo de ingeniería y el que intenta microgestionar las decisiones técnicas, las preguntas que evalúan si el PM entiende los trade-offs técnicos sin necesidad de saber programar, y cómo evalúo si el PM ha trabajado bien con equipos técnicos en el pasado.

6. SEÑALES DE ALERTA EN CANDIDATOS DE PM
¿Cuáles son las señales de alerta más frecuentes en candidatos de PM que resultan en contrataciones fallidas? Dame la lista de red flags: el PM que atribuye todos los éxitos al producto y no al trabajo del equipo, el que habla de features en lugar de outcomes, el que no puede decir qué hipótesis tenía antes del lanzamiento y si se cumplió, el que nunca ha matado un proyecto aunque no funcionara, el que tiene opiniones muy fuertes sobre el diseño visual pero no sobre el modelo de negocio, y el que no ha hablado con usuarios en los últimos tres meses.

7. LOS PRIMEROS NOVENTA DÍAS DEL NUEVO PM
¿Cómo diseño el plan de incorporación del PM nuevo para que empiece a generar impacto cuanto antes? Dame el plan de los primeros noventa días: el primer mes de escucha y comprensión (el producto, los usuarios, el equipo, la deuda técnica existente), el segundo mes con el primer mini-proyecto gestionado de principio a fin, y el tercer mes con la presentación de la visión del área que va a gestionar. ¿Cuáles son los errores del CPO o del manager del PM que retrasan su integración y generan fricción innecesaria con el equipo de ingeniería?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de contratación de product managers que identifica el pensamiento de producto real detrás del CV.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Structured interviewing y reducción de sesgos en la selección',
                'description'       => 'Diseña el proceso de entrevista que selecciona mejor y sesga menos: las entrevistas estructuradas, las rúbricas de evaluación y las técnicas de debriefing que aseguran que la decisión de contratación se basa en criterios relevantes para el trabajo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en psicología organizacional y diseño de procesos de selección con experiencia en la implementación de entrevistas estructuradas y la reducción de sesgos en organizaciones de distintos tamaños. Necesito tu ayuda para mejorar el proceso de entrevistas de mi organización para que seleccione mejor y con menos sesgo.

Mi contexto:
- Tamaño de la organización: [número de empleados aproximado]
- Volumen de contrataciones anual: [número aproximado de procesos de selección]
- Situación actual del proceso de entrevistas: [informal y no estructurado / semiestructurado / estructurado pero no calibrado / con rúbricas pero sin seguimiento]
- Tipos de roles que más contratas: [técnicos / comerciales / operaciones / liderazgo / etc.]
- Principal problema que quieres resolver: [sesgos en la decisión final / inconsistencia entre entrevistadores / candidatos que pasan el proceso pero fallan en el trabajo / demasiado tiempo de decisión / poca diversidad en contrataciones]

Con ese contexto, dame:

1. POR QUÉ LAS ENTREVISTAS NO ESTRUCTURADAS FALLAN
Explícame la evidencia empírica sobre la validez predictiva de las entrevistas de selección: por qué la entrevista conversacional no estructurada tiene tan baja correlación con el desempeño laboral real, los sesgos que se activan en los primeros minutos (primacía, similitud, halo effect, atractivo físico, accent bias) y por qué los entrevistadores creen que son mejores jueces del talento de lo que realmente son. Dame los datos de los estudios clave de Schmidt y Hunter sobre la validez de distintos métodos de selección.

2. LA ENTREVISTA ESTRUCTURADA: CÓMO DISEÑARLA
¿Cómo diseño una entrevista estructurada que prediga mejor el desempeño? Dame el proceso de construcción paso a paso: el job analysis que define las competencias críticas del rol, la construcción de preguntas ancladas en comportamientos pasados (STAR), la construcción de preguntas situacionales (qué harías si...), la escala de valoración anclada conductualmente (BARS) para cada pregunta, y la asignación de preguntas a distintos entrevistadores para cubrir todas las competencias sin duplicar.

3. RÚBRICAS DE EVALUACIÓN: DEL MARCO TEÓRICO A LA PRÁCTICA
¿Cómo construyo rúbricas de evaluación que los entrevistadores puedan usar de forma consistente sin necesitar un doctorado en psicología? Dame el proceso de construcción de rúbricas de tres o cinco niveles para cada competencia: qué hace que una respuesta sea de nivel 1 (no cumple), de nivel 3 (cumple expectativas) y de nivel 5 (supera expectativas). Dame un ejemplo completo para una competencia habitual como la resolución de problemas o la comunicación, e indica cómo calibrar a los entrevistadores para que usen la escala de forma homogénea.

4. EL DEBRIEFING: LA DECISIÓN DE CONTRATACIÓN QUE SESGA MENOS
¿Cómo estructuro el proceso de debriefing después de las entrevistas para que la decisión final sea más objetiva y menos susceptible al sesgo de conformidad? Dame el proceso de debriefing estructurado: el formulario de evaluación individual que cada entrevistador completa antes de la reunión de debriefing (para evitar la influencia de las opiniones de los demás), la dinámica de la reunión de debriefing (quién habla primero, cómo se gestiona el consenso, cómo se documenta el desacuerdo) y el criterio de toma de decisión cuando hay discrepancia entre evaluadores.

5. REDUCCIÓN DE SESGOS EN CADA FASE DEL PROCESO
¿Cómo identifico y reduzco los sesgos en cada fase del proceso de selección, no solo en la entrevista? Dame las técnicas de reducción de sesgos en: el screening del CV (blind screening, uso de criterios objetivos de filtrado), el diseño del anuncio de trabajo (lenguaje neutral en género, foco en competencias y no en atributos), la panel interview (diversidad del panel de entrevistadores), la evaluación del ejercicio práctico (criterios de corrección ciegos al candidato cuando sea posible) y la negociación de la oferta (bandas salariales transparentes para evitar el sesgo de negociación).

6. FORMACIÓN DE ENTREVISTADORES: CÓMO HACERLO SIN CONSUMIR TODO EL DÍA
¿Cómo formo a los entrevistadores de la organización para que usen bien el proceso estructurado sin que suponga un programa de formación de dos días? Dame el programa mínimo de formación de entrevistadores: el contenido esencial (tipos de sesgos, cómo hacer preguntas STAR, cómo usar la rúbrica), el formato más efectivo (un taller de dos horas con roleplay de entrevista y calibración en grupo), la práctica supervisada (las primeras dos entrevistas con un entrevistador experimentado), y el proceso de actualización de competencias con el tiempo.

7. MÉTRICAS DEL PROCESO DE SELECCIÓN: CÓMO SABER SI ESTÁ FUNCIONANDO
¿Cómo sé si el nuevo proceso de entrevistas estructuradas está mejorando la calidad de las contrataciones? Dame las métricas que debo monitorizar: la correlación entre la valoración de la entrevista y el desempeño a los doce meses (la métrica de validez predictiva real), la varianza entre evaluadores para la misma competencia (la métrica de fiabilidad inter-rater), el tiempo medio hasta la decisión de contratación, el porcentaje de candidatos de primer trimestre que no pasan el período de prueba y la diversidad de las contrataciones antes y después de implementar el proceso estructurado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar entrevistas estructuradas con rúbricas y debriefing que seleccionan mejor y sesgan menos.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Hiring en finanzas: los perfiles del equipo financiero moderno',
                'description'       => 'Contrata al equipo financiero del siglo XXI: los perfiles emergentes (FP&A business partner, data analyst financiero), el proceso de evaluación técnica y las señales que distinguen al analista financiero que va a ser un business partner del que va a quedarse en Excel.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la construcción de equipos financieros modernos con experiencia como CFO y director financiero en empresas en crecimiento. Necesito tu ayuda para contratar al equipo financiero que necesita mi organización en este momento: los perfiles correctos, el proceso de evaluación y los criterios que separan al analista financiero que añade valor estratégico del que solo produce informes.

Mi contexto:
- Tamaño de la organización: [número de empleados y facturación aproximada]
- Estado actual del equipo financiero: [sin equipo estructurado / equipo básico de contabilidad / equipo con FP&A pero sin capacidades de datos / buscando escalar]
- Roles que necesito contratar: [analista financiero, FP&A manager, controller, CFO, data analyst financiero, treasury, etc.]
- Sector: [tecnología, retail, manufactura, servicios profesionales, etc.]
- Principal problema de las contrataciones financieras anteriores: [demasiado técnico sin visión de negocio / no sabe comunicar con no financieros / vive en Excel sin pensar en automatización / no tiene criterio para priorizar análisis]

Con ese contexto, dame:

1. EL MAPA DE PERFILES DEL EQUIPO FINANCIERO MODERNO
¿Qué perfiles componen el equipo financiero del siglo XXI y en qué orden los construyo? Dame el mapa de perfiles: el controller (guardián de la integridad contable y fiscal), el FP&A analyst (que conecta las operaciones con el modelo financiero), el FP&A business partner (que trabaja codo a codo con los líderes de área como asesor financiero), el data analyst financiero (que construye los dashboards y automatiza los informes), el treasury analyst y el CFO que lidera la función. Para mi etapa y tamaño, ¿cuál es la secuencia de contratación correcta y cuál es el error más frecuente en el orden de construcción del equipo?

2. EL PERFIL DEL FP&A BUSINESS PARTNER: QUÉ BUSCAR
¿Cómo evalúo si un candidato tiene el perfil de FP&A business partner y no solo de analista financiero técnico? Dame el perfil completo: las competencias técnicas (modelos financieros, análisis de varianza, forecasting, unit economics), las competencias de negocio (entiende cómo funciona el negocio, puede hablar con el VP de ventas o de producto sin usar jerga financiera) y las competencias relacionales (influencia sin autoridad, capacidad de retar a los stakeholders con datos). ¿Cuáles son las preguntas de entrevista que mejor distinguen al analista que va a quedarse en el modelo de Excel del que va a convertirse en consejero de los líderes de área?

3. EVALUACIÓN TÉCNICA FINANCIERA: QUÉ PEDIR Y CÓMO EVALUARLO
¿Cómo diseño la evaluación técnica de un candidato de finanzas que sea reveladora y no solo una prueba de Excel? Dame el diseño del ejercicio técnico para candidatos de FP&A: el tipo de caso (análisis de varianza de un P&L con datos reales o simulados, construcción de un modelo de tres estados, análisis de unit economics de un negocio digital), cómo evalúo las asunciones que el candidato toma cuando los datos no están completos, cómo evalúo la claridad de la comunicación del análisis (no solo si los números son correctos) y qué señales revelan a un candidato que domina el análisis versus el que sabe usar Excel pero no sabe qué preguntas hacerse.

4. EVALUACIÓN DE LA CAPACIDAD DE COMUNICACIÓN FINANCIERA
¿Cómo evalúo si el candidato de finanzas puede comunicar con claridad a no financieros? Dame las preguntas y ejercicios que revelan la capacidad de comunicación financiera: pedir al candidato que explique un concepto financiero complejo (el EBITDA ajustado, el working capital, la dilución en una ronda) en términos que entendería el director de ventas, pedir que presente el análisis que hizo en el ejercicio técnico como si se lo estuviera explicando al CEO en una reunión de diez minutos, o preguntar cómo explicó un resultado financiero negativo a un equipo que no era financiero.

5. SEÑALES DE ALERTA EN CANDIDATOS DE FINANZAS
¿Cuáles son las señales de alerta en candidatos de finanzas que indican que no van a funcionar como business partners? Dame la lista de red flags: el candidato que solo habla de precisión técnica y no de impacto en las decisiones de negocio, el que no puede explicar cómo su análisis cambió una decisión importante, el que no ha tenido exposición directa a los líderes de área en sus roles anteriores, el que no tiene curiosidad por entender el modelo de negocio más allá de los números y el que piensa que su trabajo termina cuando publica el informe mensual.

6. EL DATA ANALYST FINANCIERO: UN PERFIL EMERGENTE
¿Cómo distingo al data analyst que puede trabajar en finanzas del analista financiero que sabe algo de datos? Dame el perfil del data analyst financiero: las competencias técnicas (SQL, Python o R básico, visualización de datos con Power BI o Tableau, automatización de informes), las competencias financieras (entiende el P&L, el balance y el flujo de caja, puede traducir el dato operativo en métrica financiera) y cómo evalúo en la entrevista si el candidato tiene ambos mundos o solo uno de los dos. ¿Cuándo tiene sentido contratar este perfil frente a formar a un analista financiero existente en herramientas de datos?

7. LOS PRIMEROS NOVENTA DÍAS DEL NUEVO PERFIL FINANCIERO
¿Cómo diseño el plan de incorporación del nuevo miembro del equipo financiero para que empiece a generar valor cuanto antes? Dame el plan de los primeros noventa días: el primer mes centrado en entender el negocio y los datos (los sistemas contables, las fuentes de datos, el proceso de cierre mensual y los stakeholders clave), el segundo mes con el primer proyecto de análisis de impacto real (no el informe de rutina), y el tercer mes con la presentación del primer insight propio al equipo directivo. ¿Cuáles son los errores del CFO que retrasan la integración del nuevo analista y lo convierten en un simple generador de informes?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Contratar los perfiles correctos del equipo financiero moderno y evaluar candidatos de FP&A que sean business partners reales.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Lateral hiring y construcción del equipo jurídico',
                'description'       => 'Contrata abogados con experiencia: el proceso de evaluación lateral en despachos e internos, la evaluación de la cartera de clientes en el caso del counsel y las señales que indican que el candidato encaja con la cultura y los valores del equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la contratación de abogados con experiencia tanto en la selección lateral en despachos de abogados como en la construcción de departamentos jurídicos internos. Necesito tu ayuda para diseñar el proceso de evaluación de candidatos abogados con experiencia y construir el equipo jurídico correcto.

Mi contexto:
- Tipo de organización: [despacho de abogados / departamento jurídico interno de empresa]
- Área de práctica o especialidad que busco cubrir: [M&A, laboral, fiscal, litigación, tecnología, propiedad intelectual, cumplimiento, etc.]
- Seniority buscado: [abogado junior con dos a cuatro años / senior asociado / counsel / socio / general counsel]
- Situación actual del equipo jurídico: [creando el departamento desde cero / reforzando área específica / sustituyendo a alguien / expansión]
- Principal problema con contrataciones jurídicas anteriores: [técnicamente correcto pero sin criterio de negocio / muy bueno en papel pero no conectó con los clientes / la cartera de clientes que decía tener no se materializó / no encajó en la cultura]

Con ese contexto, dame:

1. EL PERFIL JURÍDICO QUE NECESITO SEGÚN EL CONTEXTO
¿Qué tipo de abogado necesito según si soy un despacho o un departamento interno? Explícame las diferencias de perfil: el abogado que triunfa en un despacho (orientación al cliente, capacidad de generar negocio, trabajo bajo presión de deadlines) frente al abogado que triunfa en un in-house (orientación al negocio, tolerancia a la ambigüedad, capacidad de dar respuestas rápidas con información incompleta, rol de partner del equipo directivo). Para mi contexto específico, ¿cuál es el perfil correcto y las señales de alerta de un candidato que no va a adaptarse?

2. LA EVALUACIÓN TÉCNICA DE UN ABOGADO CON EXPERIENCIA
¿Cómo evalúo la calidad técnica de un abogado con experiencia sin hacerle un examen de opositor? Dame el proceso de evaluación técnica de un abogado lateral: el caso práctico escrito que simula una situación real del área de práctica, la revisión de documentos reales (con datos anonimizados) que el candidato haya redactado o revisado, la discusión técnica sobre una operación o situación compleja reciente en el área y las preguntas que revelan cómo el candidato gestiona la incertidumbre jurídica cuando no hay una respuesta clara.

3. EVALUACIÓN DE LA CARTERA DE CLIENTES (COUNSEL Y SOCIOS)
¿Cómo evalúo de forma realista la cartera de clientes que dice traer un counsel o un socio candidato? Dame el proceso de due diligence de la cartera: cómo pedir la información de la cartera (facturación por cliente, antigüedad de la relación, si el cliente es relación personal o del despacho anterior, el estado actual de la relación), cómo valorar el grado de portabilidad real de cada cliente, las preguntas que revelan si el candidato es el abogado de referencia del cliente o uno más del equipo, y cómo gestionar la conversación sin parecer desconfiado. ¿Cuáles son los errores más frecuentes al evaluar la portabilidad de una cartera?

4. ENTREVISTA DE COMPETENCIAS PARA ABOGADOS
Dame las diez preguntas de entrevista más reveladoras para candidatos abogados, incluyendo: preguntas que evalúan la orientación al cliente (cómo gestiona clientes difíciles, cómo da malas noticias), preguntas que evalúan el criterio jurídico (cómo gestiona la incertidumbre legal, cómo aconseja cuando no hay respuesta clara), preguntas que revelan el trabajo en equipo y la capacidad de desarrollo de abogados junior, preguntas que muestran cómo entiende el negocio del cliente más allá del problema jurídico y preguntas que revelan cómo gestiona los conflictos de interés o las situaciones éticamente complejas.

5. SEÑALES DE ALERTA EN CANDIDATOS ABOGADOS
¿Cuáles son las señales de alerta más frecuentes en candidatos abogados que resultan en contrataciones problemáticas? Dame la lista de red flags: el abogado que habla de la cartera de clientes en términos muy vagos cuando se le pide que concrete, el que ha cambiado de tres despachos en cinco años sin una razón clara, el que tiene excelentes referencias técnicas pero ninguna del cliente final, el que en la entrevista da opiniones jurídicas categóricas sobre cuestiones controvertidas sin reconocer la incertidumbre, y el que no ha traído ni un solo cliente nuevo en toda su carrera.

6. ENCAJE CULTURAL EN EL EQUIPO JURÍDICO
¿Cómo evalúo si el candidato va a encajar en la cultura del despacho o del departamento jurídico? Dame las técnicas de evaluación del encaje cultural sin que se convierta en un filtro de homogeneidad que daña la diversidad: cómo explorar los valores del candidato sobre la ética profesional, la relación con el cliente y el desarrollo del equipo, cómo evaluar si el estilo de trabajo encaja con el equipo actual (nivel de autonomía esperado, comunicación, disponibilidad), y cómo usar el proceso de referencias para obtener información sobre la cultura y el carácter del candidato más allá de sus competencias técnicas.

7. REFERENCIAS JURÍDICAS: CÓMO OBTENER INFORMACIÓN REAL
¿Cómo obtengo información útil en las referencias de candidatos abogados cuando todos saben que la referencia va a ser positiva o neutra? Dame el proceso de referencia que obtiene información real: las preguntas abiertas que generan información concreta (cuál fue el mayor reto de trabajar con este abogado, en qué área necesitaría crecer, cómo gestionaba la relación con los clientes en los momentos difíciles), cómo leer el lenguaje no verbal y las pausas en una referencia telefónica, y el proceso de referencias off-the-record para candidatos de alto nivel cuando las referencias formales no son suficientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de contratación lateral de abogados con experiencia: evaluación técnica, due diligence de cartera de clientes y encaje cultural.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS hiring: contratar al Customer Success Manager que retiene',
                'description'       => 'El proceso de selección de CSMs: el perfil que buscar según el modelo de negocio, la evaluación de la inteligencia emocional y las habilidades de relación y el proceso de incorporación que acorta el tiempo hasta que el nuevo CSM añade valor.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la contratación y desarrollo de equipos de Customer Success con experiencia en la selección de CSMs para empresas SaaS B2B y plataformas digitales. Necesito tu ayuda para diseñar el proceso de contratación de Customer Success Managers que realmente retienen y expanden las cuentas, y no solo gestionan las relaciones superficialmente.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B, plataforma, servicios profesionales con componente recurrente, etc.]
- Segmento de clientes que gestiona el CSM: [enterprise / mid-market / SMB / self-serve con intervención humana]
- ARR por cuenta que gestiona el CSM: [importante para calibrar el perfil de relación]
- Número de cuentas por CSM previsto: [indica la ratio de cobertura esperada]
- Seniority buscado: [CSM junior / CSM / senior CSM / CS Manager / VP of CS]
- Principal problema con contrataciones anteriores de CS: [buena relación con el cliente pero no detecta el riesgo de churn / demasiado reactivo y nunca proactivo / no sabe hablar de expansión sin que parezca que vende / churn de CSMs alto]

Con ese contexto, dame:

1. EL PERFIL DEL CSM SEGÚN EL MODELO DE NEGOCIO
¿Qué tipo de CSM necesito según mi segmento de clientes y mi modelo de CS? Explícame las diferencias de perfil entre el CSM de enterprise (pocos clientes de alto valor, mucha profundidad de relación, negociación de renovación compleja), el CSM de mid-market (balance entre escala y profundidad, procesos más estructurados, gestión de múltiples stakeholders) y el CSM de SMB high-touch (muchas cuentas, foco en onboarding rápido y adopción de producto, señales de producto para identificar riesgo). Para mi segmento, ¿cuál es el perfil correcto y qué señales de alerta debo buscar en los candidatos que no encajan?

2. EVALUACIÓN DE LA INTELIGENCIA EMOCIONAL Y LAS HABILIDADES DE RELACIÓN
¿Cómo evalúo la inteligencia emocional y las habilidades de gestión de relaciones de un candidato de CS en una entrevista de cuarenta y cinco minutos? Dame las técnicas de evaluación: las preguntas situacionales que revelan cómo gestiona un cliente enfadado o frustrado, cómo evalúo la capacidad de escucha activa durante la propia entrevista, las preguntas que revelan si el candidato tiene orientación genuina al éxito del cliente o solo orientación a la gestión de la queja, y el roleplay de una conversación difícil con un cliente en riesgo de churn.

3. EVALUACIÓN DE LA ORIENTACIÓN AL NEGOCIO DEL CSM
¿Cómo evalúo si el CSM entiende el negocio del cliente y no solo el producto que vende? Dame las preguntas que revelan la orientación de negocio: cómo pide al candidato que describa cómo entendía los objetivos de negocio de uno de sus clientes más importantes, cómo evalúo si ha conectado el uso del producto con los resultados de negocio del cliente, y las preguntas que revelan si ha sido capaz de identificar oportunidades de expansión basadas en el crecimiento del negocio del cliente y no solo en el push del equipo comercial.

4. EL ROLEPLAY DE CS: ESCENARIOS QUE REVELAN EL TALENTO REAL
¿Cómo diseño el roleplay de la entrevista de CS para que sea revelador y no se convierta en una prueba de improvisación actoral? Dame los tres escenarios de roleplay más útiles para evaluar a un candidato de CS: el cliente que amenaza con cancelar y da razones vagas, la llamada de revisión trimestral con un cliente que no está adoptando el producto correctamente, y la conversación de expansión con un cliente que está satisfecho pero no está pensando en crecer. Para cada escenario, dame qué evalúo y qué señales me indican un candidato excelente.

5. SEÑALES DE ALERTA EN CANDIDATOS DE CS
¿Cuáles son las señales de alerta más frecuentes en candidatos de CS que resultan en contrataciones problemáticas? Dame la lista de red flags: el candidato que mide su éxito solo por el NPS del cliente y no por el churn o el expansion revenue, el que no puede nombrar una situación en la que detectó el riesgo de churn antes de que el cliente lo dijera, el que confunde la gestión de la relación con ser amigo del cliente, el que nunca ha tenido una conversación de expansión proactiva y el que tiene churn de sus cuentas consistentemente por encima de la media del equipo aunque nunca haya recibido feedback negativo.

6. REFERENCIAS DE CSMs: QUÉ PREGUNTAR AL MANAGER ANTERIOR
¿Qué preguntas de referencia obtengo más información útil sobre un candidato de CS? Dame el proceso de referencia para CSMs: las preguntas al manager anterior sobre el ratio de retención de las cuentas del candidato, su nivel de proactividad versus reactividad, su capacidad de gestionar simultáneamente el riesgo de churn y las oportunidades de expansión y su reacción ante el feedback del cliente que no es positivo. ¿Cómo calibro si las referencias son genuinamente positivas o cortésmente neutrales?

7. ONBOARDING DEL NUEVO CSM: EL PLAN QUE ACORTA EL TIEMPO HASTA EL VALOR
¿Cómo diseño el plan de incorporación del nuevo CSM para que empiece a gestionar cuentas con confianza cuanto antes? Dame el plan de los primeros noventa días de un CSM: el primer mes de shadowing y aprendizaje del producto y el proceso (sin cuentas propias o con cuentas de muy bajo riesgo), el segundo mes con la transferencia progresiva de cuentas y el soporte del manager en las primeras conversaciones difíciles, y el tercer mes con autonomía plena y revisión mensual del health score de la cartera. ¿Cuál es el error más frecuente en el onboarding de CSMs que retrasa su rampa y genera churn en los clientes transferidos?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el proceso de contratación de CSMs que retienen y expanden: evaluación de inteligencia emocional, orientación de negocio y roleplay de situaciones reales.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Subcontratar y construir el equipo del freelance',
                'description'       => 'El freelance que delega para crecer: el proceso de encontrar y evaluar a los colaboradores, la incorporación del subcontratista y el modelo de gestión que asegura la calidad sin microgestionar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en la construcción de negocios freelance escalables con experiencia ayudando a profesionales independientes a delegar trabajo y construir equipos de colaboradores. Necesito tu ayuda para diseñar el modelo de subcontratación que me permita crecer sin que la calidad del trabajo se resienta y sin que el overhead de gestión me consuma más tiempo del que delego.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [describe qué haces]
- Por qué quiero subcontratar ahora: [más trabajo del que puedo asumir / quiero hacer solo la parte estratégica / quiero escalar sin contratar empleados / quiero cubrir capacidades que yo no tengo]
- Experiencia previa delegando: [ninguna / he tenido algún colaborador pero con resultados mixtos / tengo experiencia pero quiero mejorar el proceso]
- Presupuesto disponible para subcontratistas: [rango aproximado]
- Principal miedo ante la subcontratación: [que la calidad baje / que el cliente se entere y no le guste / que el colaborador se quede con el cliente / que gestionar sea más trabajo que hacer]

Con ese contexto, dame:

1. QUÉ DELEGAR Y QUÉ NO: EL MAPA DE TAREAS
¿Qué tareas de mi negocio freelance tiene sentido delegar y cuáles debo mantener siempre? Dame el framework de decisión de delegación: la matriz de valor versus repetitividad (las tareas de bajo valor y alta repetitividad son las primeras en delegar, las de alto valor y alta especialización las últimas), cómo identificar mis tareas de mayor palanca (las que solo yo puedo hacer bien y que el cliente paga más por ellas), y cómo construir progresivamente la capacidad de delegar sin perder el control de la calidad desde el primer día.

2. DÓNDE ENCONTRAR A LOS COLABORADORES CORRECTOS
¿Dónde encuentro a los colaboradores o subcontratistas que van a trabajar bien con mi forma de trabajar? Dame el mapa de canales para encontrar colaboradores: las plataformas especializadas (Upwork, Malt, Fiverr Business, LinkedIn), las comunidades profesionales del sector (Slack groups, Discord servers, foros especializados), las referencias de otros freelancers de mi red y las colaboraciones con freelancers de disciplinas complementarias que ya tienen su propia cartera de clientes. Para cada canal, dame el tipo de perfil que suele encontrarse y el proceso de acercamiento que funciona mejor.

3. EVALUACIÓN DEL SUBCONTRATISTA: EL PROCESO ANTES DEL PRIMER PROYECTO
¿Cómo evalúo a un colaborador potencial antes de darle trabajo real de cliente? Dame el proceso de evaluación: la revisión del portfolio y los trabajos anteriores (qué busco y qué señales de alerta veo), el proyecto de prueba de bajo riesgo (cómo diseñarlo para que sea revelador sin explotar al candidato), la conversación de alineación de expectativas (cómo comunicar mis estándares, mis plazos y mi forma de trabajar) y las señales que me indican que el colaborador va a ser un buen fit versus las que me dicen que va a generar más problemas que soluciones.

4. INCORPORACIÓN DEL SUBCONTRATISTA: EL BRIEF QUE LO CAMBIA TODO
¿Cómo diseño el proceso de incorporación de un nuevo colaborador para que entienda mis estándares desde el primer día? Dame el sistema de incorporación: el documento de contexto del cliente (información sobre el cliente, sus objetivos, su tono y sus preferencias que el colaborador necesita para trabajar sin preguntarme cada detalle), el brief del proyecto (instrucciones claras sobre el entregable, el formato, los criterios de aceptación y el plazo), el proceso de feedback del primer entregable (cómo darlo de forma que calibre al colaborador sin desanimarle) y el proceso de mejora progresiva de los siguientes proyectos.

5. GESTIÓN DE LA CALIDAD SIN MICROGESTIONAR
¿Cómo mantengo la calidad del trabajo delegado sin convertirme en el cuello de botella que revisa y corrige cada entregable? Dame el sistema de gestión de calidad para el freelance que subcontrata: el checklist de revisión que el propio colaborador completa antes de enviarme el entregable, los criterios de aceptación que permiten al colaborador autoevaluarse, el proceso de revisión estructurada que me dice en quince minutos si el entregable está listo o necesita revisión, y el modelo de feedback iterativo que mejora la calidad con cada proyecto sin necesidad de empezar desde cero con cada encargo.

6. EL CLIENTE Y EL SUBCONTRATISTA: TRANSPARENCIA Y PROTECCIÓN
¿Le digo a mis clientes que subcontrato parte del trabajo? ¿Cómo protejo la relación con el cliente y la propiedad intelectual? Dame el análisis de las tres posturas posibles: transparencia total (el cliente sabe que trabaja con tu equipo), transparencia selectiva (el cliente sabe que tienes colaboradores pero no en qué proyectos específicos) y sin transparencia (el cliente contrata solo contigo). Para cada postura, dame los pros, los contras y el contrato o el acuerdo de confidencialidad que debo tener firmado con el colaborador para proteger la información del cliente y evitar que el colaborador contacte directamente al cliente.

7. EL MODELO ECONÓMICO DE LA SUBCONTRATACIÓN
¿Cómo estructuro el modelo económico para que la subcontratación sea rentable y no solo me quite el trabajo a cambio de un margen? Dame el modelo de cálculo de la rentabilidad de la subcontratación: cuánto cobro al cliente, cuánto pago al colaborador, el margen que me queda por la coordinación y la responsabilidad, y en qué punto el margen es suficiente para justificar el overhead de gestión. ¿Cuándo tiene sentido bajar el margen para liberar más de mi tiempo para proyectos de mayor valor, y cuándo el margen es tan bajo que es mejor rechazar el proyecto o subirle el precio al cliente?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir el sistema de subcontratación del freelance que escala la capacidad sin perder calidad ni microgestionar a los colaboradores.',
                'vote_score'        => 43,
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
