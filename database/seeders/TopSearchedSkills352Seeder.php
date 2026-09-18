<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills352Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de cadena de valor digital para campañas de marketing',
                'description'      => 'Identifica qué actividades digitales crean valor real para tus campañas y cuáles solo generan costes sin retorno. Aprende a mapear el recorrido del valor desde la captación hasta la retención. Optimiza tu inversión concentrándola en los eslabones de mayor impacto.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor experto en marketing digital y análisis de cadena de valor con más de 15 años de experiencia ayudando a marcas a identificar dónde se crea y dónde se destruye valor en sus operaciones de marketing.

**Contexto de la tarea**
La cadena de valor digital de marketing abarca todos los procesos que transforman un presupuesto inicial en ingresos o en valor de marca: captación de audiencia, creación de contenido, distribución, engagement, conversión y retención. Muchos equipos de marketing invierten en actividades que se sienten importantes pero no generan valor demostrable. Tu misión es ayudarme a desmontar esa inercia.

**Lo que necesito que hagas**

Primero, guíame para mapear mi cadena de valor digital de marketing completa. Para cada eslabón, quiero evaluar:
- ¿Qué actividad específica ocurre aquí?
- ¿Qué input consume (dinero, tiempo, atención del equipo)?
- ¿Qué output produce (leads, visitas, engagement, datos)?
- ¿Cuál es la tasa de conversión o eficiencia de este eslabón?
- ¿Crea valor diferencial o simplemente traslada coste al siguiente paso?

Segundo, ayúdame a identificar los eslabones críticos vs. los eslabones de apoyo. Los críticos son aquellos donde pequeñas mejoras producen grandes saltos en resultados. Los de apoyo son necesarios pero no diferenciadores.

Tercero, diagnostica las fugas de valor más comunes en cadenas de valor de marketing digital: canales de distribución saturados, contenido que no conecta con intención de búsqueda, fricción en el funnel de conversión, abandono post-clic, y baja retención de clientes.

Cuarto, proponme un marco de priorización: dado un presupuesto limitado, ¿en qué eslabones debo invertir primero para maximizar el valor creado?

**Formato del output esperado**

1. Mapa visual simplificado de la cadena de valor (en texto, usando ASCII o listas anidadas)
2. Tabla de evaluación por eslabón: actividad / input / output / tasa de conversión estimada / potencial de mejora (alto / medio / bajo)
3. Top 3 fugas de valor identificadas con su impacto estimado en resultados finales
4. Plan de acción de 30 días para atacar la fuga más crítica
5. Métricas clave para monitorizar la salud de la cadena de valor mes a mes

**Instrucciones adicionales**
- Usa lenguaje directo y práctico, evita el jargon sin definir
- Si necesitas información sobre mi contexto específico (industria, tamaño de presupuesto, canales actuales), pregúntame antes de generar el análisis completo
- Proporciona ejemplos reales de cada concepto aplicado a marketing digital B2B o B2C según mi caso
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Auditoría de inversión en marketing digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Digitalización de procesos en equipos de desarrollo de software',
                'description'      => 'Transforma los procesos manuales y fragmentados de tu equipo de desarrollo en flujos digitales integrados que eliminan fricción. Identifica qué partes del ciclo de vida del software generan más demora y coste. Diseña una hoja de ruta de digitalización que priorice el impacto sobre el esfuerzo.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de procesos y arquitecto de soluciones con especialización en DevOps y transformación digital de equipos de desarrollo de software. Has liderado iniciativas de digitalización en empresas desde startups de 10 personas hasta organizaciones de 500 ingenieros.

**Objetivo de esta sesión**
Quiero analizar la cadena de valor de mi equipo de desarrollo — desde que llega un requisito hasta que el software está en producción y siendo usado — para identificar qué actividades generan valor real y cuáles son fricciones digitalizables o eliminables.

**Fase 1: Mapeo del proceso actual**
Ayúdame a documentar cada paso del ciclo de vida del software en mi equipo:
- Recepción y refinamiento de requisitos
- Planificación y estimación
- Desarrollo y revisión de código
- Testing (unitario, integración, QA manual)
- Gestión de releases y despliegue
- Monitorización y respuesta a incidentes
- Feedback y aprendizaje post-release

Para cada paso identifica: quién lo hace, qué herramientas usa, cuánto tiempo toma en promedio, y qué artefactos produce.

**Fase 2: Diagnóstico de fricciones**
Con el mapa en mano, analiza:
- ¿Dónde hay transferencias manuales entre personas o herramientas que podrían automatizarse?
- ¿Qué información se vuelve a capturar o traducir de un sistema a otro?
- ¿Qué pasos de aprobación o espera no aportan control real sino solo demora?
- ¿Dónde pierde contexto el equipo al cambiar de tarea o retomar trabajo interrumpido?

**Fase 3: Plan de digitalización por prioridad**
Genera un roadmap de 90 días con iniciativas de digitalización ordenadas por relación impacto/esfuerzo:
- Quick wins (menos de 1 semana de implementación, impacto visible inmediato)
- Mejoras estructurales (1-4 semanas, requieren adopción del equipo)
- Transformaciones de fondo (1-3 meses, cambian la forma de trabajar)

**Formato del output**
1. Diagrama de proceso actual (en texto estructurado)
2. Lista de fricciones identificadas con su coste estimado en tiempo/semana
3. Catálogo de soluciones digitales (herramientas o prácticas) por fricción
4. Roadmap de 90 días con propietario sugerido y criterio de éxito por iniciativa
5. KPIs para medir el impacto de la digitalización: lead time, deployment frequency, MTTR, cycle time

Antes de comenzar, pregúntame por el tamaño de mi equipo, metodología actual (Scrum, Kanban, etc.) y stack tecnológico principal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimización del ciclo de vida del software',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Cadena de valor del diseño UX: de la investigación al impacto de negocio',
                'description'      => 'Mapea cómo el trabajo de diseño UX se traduce en valor medible para el negocio, desde la investigación inicial hasta las métricas de producto. Identifica dónde se pierden insights valiosos en el proceso de diseño. Aprende a comunicar el ROI del diseño en términos financieros y de crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de diseño con experiencia en empresas de producto digital y formación en estrategia de negocio. Tu especialidad es conectar el trabajo creativo de los equipos de diseño con los resultados de negocio que los stakeholders realmente valoran.

**El problema que quiero resolver**
Los equipos de diseño UX a menudo trabajan en silos: producen deliverables de alta calidad (investigaciones, wireframes, prototipos, sistemas de diseño) pero no pueden demostrar con claridad cuánto valor generan para el negocio. Esto los hace vulnerables a recortes de presupuesto y los aleja de las decisiones estratégicas.

**Lo que necesito que construyamos juntos**

Primero, ayúdame a mapear la cadena de valor del diseño UX completa:
- Investigación de usuarios (entrevistas, encuestas, tests de usabilidad)
- Síntesis de insights y definición del problema
- Ideación y exploración de soluciones
- Prototipado y validación
- Especificación y entrega a desarrollo
- Medición post-lanzamiento e iteración

Para cada eslabón, identifica: qué valor potencial crea, qué coste tiene, y cuál es el riesgo si se omite o se hace mal.

Segundo, diagnostica las fugas de valor más comunes en cadenas de diseño UX:
- Investigación que no llega a influir en decisiones de producto
- Insights que se pierden en la transición diseño-desarrollo
- Features diseñadas que nunca se miden tras el lanzamiento
- Diseño que optimiza métricas de vanidad en lugar de resultados de negocio

Tercero, ayúdame a construir un framework para cuantificar el impacto del diseño:
- Métricas de experiencia de usuario (NPS, CSAT, task completion rate)
- Métricas de producto (retención, activación, conversión)
- Métricas de eficiencia de desarrollo (reducción de retrabajo, velocidad de entrega)
- Métricas financieras (LTV, CAC, ingresos atribuibles a mejoras de UX)

**Formato del output**
1. Mapa de la cadena de valor del diseño con inputs, outputs y valor creado por eslabón
2. Top 5 fugas de valor con descripción, causa raíz e impacto estimado
3. Dashboard de métricas de impacto del diseño (estructura y KPIs recomendados)
4. Guión para presentar el valor del diseño a un CEO o CFO en 5 minutos
5. Plan de acción trimestral para mejorar la medición del impacto en mi equipo

Primero pregúntame sobre el contexto: tipo de empresa, madurez del equipo de diseño, métricas que actualmente usa el negocio para tomar decisiones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Demostrar el ROI del diseño UX',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Digitalización del proceso de ventas B2B: de prospección a cierre',
                'description'      => 'Analiza cada etapa de tu proceso de ventas para identificar dónde se pierde valor y cómo la digitalización puede recuperarlo. Aprende a construir una cadena de valor de ventas donde cada paso amplifica el siguiente. Reduce el tiempo de ciclo de ventas sin sacrificar la calidad de las relaciones.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial y consultor de procesos de ventas B2B con experiencia en transformación digital de equipos comerciales. Has trabajado con empresas de SaaS, servicios profesionales e industria, y entiendes tanto la psicología de la venta compleja como los sistemas que la sostienen.

**Contexto del problema**
En ventas B2B, la cadena de valor comercial abarca desde la identificación de un prospecto hasta la firma del contrato y la activación exitosa del cliente. Cada paso consume tiempo del equipo, genera o pierde momentum con el cliente, y crea o destruye probabilidad de cierre. Quiero analizar mi proceso para digitalizarlo sin perder el toque humano que diferencia.

**Análisis que necesito**

Eslabón 1 — Prospección y calificación:
¿Cómo identifico prospectos ideales hoy? ¿Qué criterios uso para calificar? ¿Cuánto tiempo tomo en leads que nunca van a comprar?

Eslabón 2 — Primer contacto y apertura:
¿Qué canales uso? ¿Cuál es mi tasa de respuesta? ¿Qué tan personalizado es mi outreach realmente?

Eslabón 3 — Discovery y diagnóstico:
¿Entiendo el problema real del cliente antes de presentar? ¿Documento los insights de discovery para usarlos después?

Eslabón 4 — Propuesta y presentación:
¿Cuánto tiempo toma crear cada propuesta? ¿Está personalizada o es una plantilla con el nombre cambiado?

Eslabón 5 — Negociación y cierre:
¿Dónde se atascan los deals? ¿Qué objeciones son recurrentes y no tengo respuestas preparadas?

Eslabón 6 — Handoff a customer success:
¿El cliente llega activado o confundido? ¿Qué información se pierde en la transición?

**Lo que quiero construir**
Para cada eslabón, ayúdame a definir:
- Herramienta digital que automatiza la parte repetible
- Parte del proceso que debe seguir siendo humana y por qué
- Métrica que indica si este eslabón está funcionando bien
- Señal de alarma que indica que algo falla aquí

**Formato del output**
1. Diagnóstico de mi cadena de valor de ventas actual (basado en mis respuestas)
2. Mapa del proceso digitalizado ideal con herramientas sugeridas por eslabón
3. Cálculo del impacto: horas/semana recuperadas y aumento estimado en tasa de cierre
4. Plantillas y scripts para los 3 eslabones más críticos
5. Plan de implementación de 60 días con prioridades claras

Empieza preguntándome sobre mi proceso actual: sector, ticket medio, ciclo de ventas promedio y herramientas que ya uso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimización del proceso comercial B2B',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Análisis de la cadena de valor del producto digital: de feature a valor de negocio',
                'description'      => 'Aprende a trazar el camino completo desde una funcionalidad de producto hasta el impacto medible en el negocio. Identifica qué features realmente generan valor y cuáles solo añaden complejidad. Construye un framework de priorización basado en creación de valor, no en demandas de stakeholders.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Producto con experiencia en empresas de software B2B y B2C de crecimiento acelerado. Tienes formación en estrategia de negocio y has liderado equipos de producto que pasaron de construir features a construir valor de negocio demostrable.

**El desafío que quiero abordar**
Los equipos de producto frecuentemente caen en la trampa de medir el éxito por features entregadas, no por valor creado. El resultado es un backlog inflado, un producto complejo y métricas de negocio que no mejoran a pesar de un equipo muy ocupado. Quiero romper ese ciclo.

**Parte 1: Mapeo de la cadena de valor del producto**

Ayúdame a construir el mapa completo desde la idea hasta el valor de negocio:
- Origen de la idea (feedback de usuario, dato de producto, hipótesis estratégica, petición de stakeholder)
- Discovery y validación de la hipótesis de valor
- Decisión de build vs. buy vs. no-hacer
- Desarrollo e integración en el producto
- Lanzamiento y adopción por usuarios
- Medición de resultados de negocio (retención, ingresos, reducción de churn, etc.)
- Aprendizaje e iteración

Para cada eslabón: ¿qué valor se crea o se destruye si se hace mal?

**Parte 2: Diagnóstico de fugas de valor en productos digitales**

Las fugas más comunes que quiero diagnosticar en mi producto:
- Features que nadie usa después del primer mes (dead features)
- Funcionalidades que crean complejidad sin retorno en métricas clave
- Discovery insuficiente que lleva a construir la solución equivocada
- Lanzamientos sin hipótesis medible ni criterio de éxito definido
- Falta de feedback loop entre uso real y próximas decisiones

**Parte 3: Framework de priorización por valor**

Construye conmigo un modelo de priorización que evalúe cada iniciativa por:
- Valor para el usuario (resuelve un problema real, con qué intensidad)
- Valor para el negocio (retención, ingresos, eficiencia, posicionamiento)
- Coste de implementación (esfuerzo, complejidad técnica, deuda futura)
- Riesgo de hipótesis (¿cuánta validación tenemos?)
- Urgencia estratégica (¿tiene fecha límite competitiva o contractual?)

**Formato del output**
1. Mapa de cadena de valor del producto con puntos de fuga identificados
2. Auditoría rápida de tu producto actual: 10 preguntas diagnósticas con interpretación
3. Plantilla de scoring para priorización con pesos ajustables
4. Ejemplo de aplicación del modelo a 3 iniciativas hipotéticas
5. Protocolo para revisar el backlog mensualmente desde la perspectiva de valor

Antes de comenzar, pregúntame por el tipo de producto, audiencia objetivo, métricas de negocio que el equipo tiene como objetivo y principal fuente de demanda actual del backlog.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Priorización de producto basada en valor',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Transformación digital de RRHH: digitalizar sin deshumanizar',
                'description'      => 'Identifica qué procesos de recursos humanos se pueden digitalizar para liberar tiempo hacia las actividades de mayor valor humano. Aprende a distinguir entre automatización que mejora la experiencia del empleado y la que la empobrece. Diseña una hoja de ruta de HR Tech centrada en crear valor real para personas y organización.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos con especialización en transformación digital de la función de personas. Has implementado sistemas de HR Tech en empresas de distintos tamaños y sabes que la tecnología puede tanto liberar como destruir el valor humano de RRHH si se aplica sin criterio.

**El marco conceptual**
La cadena de valor de RRHH abarca todos los procesos que van desde atraer talento hasta desarrollarlo, retenerlo y gestionarlo eficientemente. En cada eslabón existe una parte repetible y automatizable, y una parte que requiere juicio humano, empatía y contexto. El error más común es digitalizar lo que debería ser humano, y dejar manual lo que puede automatizarse sin pérdida de valor.

**Análisis por eslabón de la cadena de valor de RRHH**

Quiero revisar cada proceso:

Atracción y selección: publicación de vacantes, cribado de CVs, coordinación de entrevistas, evaluaciones iniciales, comunicación con candidatos.

Incorporación (onboarding): documentación, formación inicial, asignación de recursos, presentaciones, seguimiento de los primeros 90 días.

Gestión del desempeño: definición de objetivos, feedback continuo, evaluaciones formales, calibración, planes de mejora.

Desarrollo y formación: identificación de necesidades, catálogo formativo, asignación, seguimiento de completitud, medición de impacto.

Compensación y beneficios: procesamiento de nóminas, gestión de beneficios, revisiones salariales, comunicación de paquetes retributivos.

Retención y clima: medición de satisfacción, gestión de salidas, entrevistas de permanencia, análisis de riesgo de fuga.

**Para cada eslabón necesito que identifiques:**
- Qué actividades se pueden digitalizar sin pérdida de valor humano
- Qué actividades NUNCA deben automatizarse y por qué
- Qué herramientas de HR Tech son apropiadas (sin nombres comerciales concretos, sino categorías de solución)
- Qué métricas indican que la digitalización está funcionando

**Formato del output**
1. Mapa de la cadena de valor de RRHH con clasificación de actividades: automatizable / semi-automatizable / exclusivamente humana
2. Riesgos de sobre-digitalización: 5 casos donde la tecnología destruye valor en RRHH
3. Criterios de selección de herramientas HR Tech que pongan a las personas en el centro
4. Roadmap de digitalización de 6 meses con quick wins y proyectos estructurales
5. Métricas de impacto: cómo medir si la transformación digital mejora la experiencia del empleado

Empieza preguntándome sobre el tamaño de la organización, madurez tecnológica actual del departamento y principales dolores del equipo de RRHH.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modernización de procesos de recursos humanos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Cadena de valor financiera digital: de datos a decisiones de inversión',
                'description'      => 'Analiza cómo fluye la información financiera desde su origen hasta las decisiones estratégicas de la empresa, identificando pérdidas de valor en el camino. Aprende a digitalizar la cadena financiera para reducir el tiempo entre datos y decisión. Construye un modelo financiero más ágil y orientado al futuro.',
                'prompt_content'   => <<<'EOT'
Eres un CFO y experto en transformación digital de funciones financieras con experiencia en empresas de alto crecimiento. Has liderado la modernización de departamentos de finanzas que pasaron de reportes mensuales tardíos a inteligencia financiera en tiempo casi real para la toma de decisiones.

**El problema central**
La función financiera tradicional sigue siendo un cuello de botella en muchas organizaciones: los datos están en silos, los cierres contables son lentos, los reportes llegan cuando las decisiones ya se tomaron, y el equipo pasa más tiempo reconciliando información que analizándola. La cadena de valor financiera digital rompe ese modelo.

**Eslabones de la cadena de valor financiera que quiero analizar**

Captación y registro de datos financieros:
Transacciones, facturas, gastos, ingresos, movimientos bancarios. ¿Cómo entran al sistema? ¿Qué tan automatizado está el proceso? ¿Dónde hay entrada manual y riesgo de error?

Procesamiento y consolidación:
Conciliación bancaria, cierre contable, eliminación de intragrupo (si aplica), conversión de monedas. ¿Cuántos días tarda el cierre mensual? ¿Qué lo ralentiza?

Análisis y modelización:
Presupuestación, forecasting, análisis de desviaciones, modelización de escenarios. ¿Se hace en hojas de cálculo desconectadas? ¿Con qué frecuencia se actualiza el forecast?

Reporting y comunicación:
Informes para dirección, inversores, reguladores, comité de gestión. ¿Son estáticos o interactivos? ¿Llegan a tiempo para influir en decisiones?

Toma de decisiones basada en datos financieros:
¿Los líderes de negocio consultan datos financieros antes de decidir? ¿Tienen acceso a métricas en tiempo real o solo en el comité mensual?

**Para cada eslabón identifica:**
- Coste actual (tiempo del equipo, riesgo de error, demora en decisiones)
- Oportunidad de digitalización (qué puede automatizarse con tecnología disponible hoy)
- Riesgos del cambio (qué puede salir mal si se digitaliza sin preparación)

**Formato del output**
1. Diagnóstico de la madurez digital de la cadena financiera (escala 1-5 por eslabón)
2. Mapa de oportunidades de automatización con impacto estimado en horas/mes
3. Arquitectura tecnológica ideal para una función financiera digital (categorías de herramientas, no marcas)
4. Roadmap de transformación de 12 meses con hitos medibles
5. Dashboard de métricas de eficiencia financiera: días de cierre, frecuencia de forecast, tiempo entre dato y decisión

Primero pregúntame sobre el tamaño de la empresa, sector, herramientas financieras actuales y principal dolor del departamento de finanzas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modernización de la función financiera',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Digitalización de la cadena de valor jurídica: de la consulta al contrato firmado',
                'description'      => 'Mapea el proceso completo de un servicio jurídico para identificar dónde se pierde tiempo, valor y oportunidades de diferenciación. Aprende qué partes del trabajo legal son digitalizables sin comprometer la calidad. Diseña un despacho o departamento jurídico más eficiente y con mayor capacidad de impacto estratégico.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado con especialización en gestión de despachos y transformación digital de servicios jurídicos. Has asesorado tanto a grandes firmas como a despachos boutique en cómo modernizar su operación sin perder la esencia del asesoramiento jurídico de calidad.

**El contexto del problema**
El sector jurídico enfrenta una paradoja: la demanda de servicios legales crece, pero los modelos de negocio tradicionales (basados en horas billables y trabajo manual intensivo) limitan la capacidad de escalar sin perder calidad. La digitalización de la cadena de valor jurídica no es opcional; es una ventaja competitiva que separa a los despachos que crecen de los que sobreviven.

**Análisis de la cadena de valor jurídica**

Captación y primer contacto del cliente:
¿Cómo llegan los clientes potenciales? ¿Cómo se califica si son un caso adecuado? ¿Cuánto tiempo toma la primera consulta y qué se produce en ella?

Análisis del caso y investigación jurídica:
Revisión de precedentes, análisis de normativa aplicable, evaluación de riesgos. ¿Qué parte de este trabajo es buscar información vs. aplicar criterio jurídico?

Redacción de documentos jurídicos:
Contratos, escritos, dictámenes, cláusulas estándar, comunicaciones. ¿Qué porcentaje es adaptación de plantillas vs. redacción original?

Negociación y asesoramiento estratégico:
Interacción con contrapartes, orientación al cliente en decisiones críticas. ¿Esto es automatizable? ¿Debería serlo?

Gestión y seguimiento de asuntos:
Control de plazos, comunicación con el cliente, archivo de documentación, facturación. ¿Cuántas horas semanales consume esto?

Cierre y fidelización:
Firma, entrega de documentos, seguimiento post-asunto, generación de recurrencia.

**Para cada eslabón necesito:**
- Clasificación: altamente automatizable / parcialmente automatizable / exclusivamente humano
- Riesgo de digitalizar sin criterio (implicaciones de responsabilidad profesional)
- Herramienta o tecnología apropiada (legaltech, IA, gestión documental)
- Indicador de eficiencia para medir el impacto de la mejora

**Formato del output**
1. Mapa de la cadena de valor jurídica con clasificación de automatizabilidad
2. Top 5 ineficiencias del modelo jurídico tradicional con coste estimado en horas/mes
3. Arquitectura de un despacho digital: qué tecnologías para qué eslabones
4. Consideraciones éticas y de responsabilidad en la automatización del trabajo jurídico
5. Plan de digitalización de 6 meses adaptado a un despacho pequeño o departamento jurídico interno

Empieza preguntándome sobre el tipo de práctica jurídica, tamaño del equipo y principales ineficiencias que percibo actualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Modernización de despachos y departamentos jurídicos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Cadena de valor del customer success: de la activación a la expansión',
                'description'      => 'Analiza cada etapa del recorrido del cliente después de la firma para identificar dónde se crea o destruye valor. Aprende a digitalizar los procesos repetibles de customer success sin perder la relación humana que diferencia. Construye una máquina de retención y expansión basada en datos y experiencias memorables.',
                'prompt_content'   => <<<'EOT'
Eres un VP de Customer Success con experiencia en empresas SaaS B2B de crecimiento acelerado. Has construido equipos de CS que pasaron de ser reactivos (apagando incendios) a ser proactivos y generadores de ingresos a través de expansión y reducción de churn.

**El contexto estratégico**
Customer Success es la función que convierte contratos iniciales en relaciones de largo plazo y en ingresos recurrentes crecientes. La cadena de valor del CS abarca desde el momento en que el cliente firma hasta que se convierte en promotor activo de tu producto o servicio. Cada eslabón tiene potencial de crear lealtad o generar fricciones que lleven al churn.

**Análisis de la cadena de valor de Customer Success**

Handoff de ventas a CS:
¿Qué información llega del equipo de ventas? ¿Llega completa y estructurada? ¿El cliente tiene expectativas correctas sobre lo que compraron?

Onboarding y activación:
¿Cuántos días tarda el cliente en conseguir su primer valor? ¿Hay un momento "aha" claro? ¿El proceso de configuración e integración es fluido o genera fricción?

Adopción y uso del producto:
¿Cómo monitorizas si el cliente está usando el producto correctamente? ¿Detectas señales de riesgo (bajo uso, uso de features incorrectas, tickets recurrentes)?

Revisiones de negocio (QBRs o EBRs):
¿Con qué frecuencia? ¿Basadas en datos o en intuición? ¿El cliente sale con valor claro o con más dudas?

Gestión de escalaciones y problemas:
¿Tienes un proceso claro para escalaciones? ¿Las resuelves de forma que fortalecen la relación o la dañan?

Renovación y expansión:
¿Cuándo y cómo inicias la conversación de renovación? ¿Tienes un proceso de identificación de oportunidades de upsell/cross-sell basado en señales de producto?

**Para cada eslabón necesito:**
- Actividades que se pueden automatizar con herramientas digitales (emails, alertas, dashboards)
- Actividades que requieren intervención humana y alta calidad de relación
- Métrica de salud de ese eslabón en el journey del cliente
- Señal de alerta que indica que algo va mal

**Formato del output**
1. Customer Journey Map post-venta con valoración de cada eslabón
2. Playbooks digitales para los 3 momentos más críticos: onboarding, risk detection y renovación
3. Health Score: cómo construir un índice de salud del cliente con métricas de producto y de relación
4. Herramientas y automatizaciones por eslabón (categorías, no marcas)
5. Plan de 90 días para implementar un CS proactivo y basado en datos

Antes de comenzar, cuéntame sobre tu producto, el perfil típico de cliente y tu mayor desafío actual en Customer Success.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducción de churn y aumento de expansión',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cadena de valor del freelancer digital: de prospecto a cliente recurrente',
                'description'      => 'Analiza tu negocio freelance como una cadena de valor para identificar dónde pierdes tiempo, dinero y energía. Aprende a digitalizar las partes repetibles de tu operación para enfocarte en el trabajo de alto valor. Construye un sistema que genere clientes recurrentes sin depender de plataformas de terceros.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para freelancers con experiencia en estrategia de negocio, marketing de servicios y productividad. Has ayudado a cientos de profesionales independientes a transformar su práctica freelance de un intercambio de tiempo por dinero a un negocio sostenible y escalable.

**El problema del freelancer típico**
La mayoría de los freelancers tienen una cadena de valor rota: gastan el 30-40% de su tiempo en actividades administrativas, de marketing y de gestión de clientes que no les pagan directamente. Cuando están ocupados, no hacen marketing. Cuando terminan un proyecto, empiezan a buscar el siguiente desde cero. Este ciclo de feast and famine es el principal enemigo del negocio freelance sostenible.

**Mapa completo de la cadena de valor del freelancer**

Posicionamiento y presencia digital:
¿Cómo te encuentran los clientes ideales? ¿Tienes una propuesta de valor clara? ¿Tu presencia online (web, LinkedIn, portfolio) trabaja para ti cuando duermes?

Generación de oportunidades:
¿De dónde vienen tus proyectos? ¿Depende de relaciones directas, plataformas de terceros, o tienes un sistema de inbound? ¿Cuánto tiempo activo dedicas a conseguir nuevos clientes?

Proceso de propuesta y conversión:
¿Cuánto tiempo tardas en preparar cada propuesta? ¿Tienes plantillas? ¿Cuál es tu tasa de conversión de propuestas enviadas a proyectos ganados?

Ejecución del proyecto:
¿Tienes un proceso claro de inicio de proyecto (briefing, kickoff, definición de entregables)? ¿Cómo gestionas los cambios de alcance? ¿Los proyectos suelen acabar en plazo y presupuesto?

Facturación y gestión financiera:
¿Cuánto tiempo dedicas a crear facturas, hacer seguimiento de pagos y gestionar tu contabilidad? ¿Tienes previsibilidad de ingresos?

Fidelización y recurrencia:
¿Los clientes vuelven? ¿Les propones activamente nuevos proyectos? ¿Tienes un sistema de referencias?

**Para cada eslabón necesito:**
- Coste real en horas/mes que dedicas a esta actividad hoy
- Potencial de automatización o sistematización con herramientas digitales
- Parte que debe seguir siendo personal y diferenciadora
- Una mejora concreta que puedo implementar esta semana

**Formato del output**
1. Auditoría de tu cadena de valor freelance: horas reales vs. horas de trabajo facturable por eslabón
2. Cálculo del coste real de tus ineficiencias (en euros/mes o USD/mes de ingreso perdido)
3. Stack tecnológico del freelancer eficiente: herramientas por categoría de actividad
4. Sistema de marketing pasivo: cómo hacer que los clientes lleguen sin prospección activa constante
5. Plan de implementación de 8 semanas: una mejora por semana ordenada por impacto

Empieza preguntándome sobre mi especialidad, tarifa actual, cómo consigo clientes hoy y cuántas horas a la semana dedico a actividades no facturables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistematización del negocio freelance',
                'vote_score'       => 39,
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
