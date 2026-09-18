<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills384Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Diseño de incentivos y compensación variable para equipos de marketing',
                'description'      => 'Aprende a diseñar estructuras de compensación variable que alineen los incentivos del equipo de marketing con los objetivos del negocio. Desde bonos por leads generados hasta comisiones por revenue atribuido, la compensación variable bien diseñada convierte a los marketers en socios del crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en compensación y diseño de incentivos con especialización en equipos de marketing, con experiencia construyendo estructuras de retribución variable en empresas de crecimiento rápido donde el marketing tiene responsabilidad directa sobre métricas de negocio.

Quiero diseñar un sistema de compensación variable para mi equipo de marketing que alinee sus incentivos con los objetivos comerciales de la empresa y motive la ambición sin crear comportamientos disfuncionales.

**Contexto de mi equipo y empresa:**
- Tamaño del equipo de marketing: [número y roles principales]
- Modelo de negocio: [B2B SaaS / B2C / marketplace / e-commerce / servicios / otro]
- Métricas de marketing que controla el equipo: [leads / MQLs / SQLs / revenue atribuido / CAC / LTV / brand awareness]
- Estructura de compensación actual: [solo salario fijo / bonus discrecional / otro sistema variable]
- Problemas con el sistema actual: [falta de alineación / poca motivación / dificultad para retener talento / desconexión del negocio]
- Salario base promedio del equipo: [rango] y porcentaje de variable deseado: [porcentaje]

**Bloque 1 — Principios de diseño de incentivos para marketing:**
Explica los fundamentos del diseño de incentivos en equipos de marketing:
- Por qué los incentivos en marketing son más complejos que en ventas: la distancia entre actividad y resultado
- Principio de controlabilidad: solo incentiva aquello sobre lo que el equipo tiene influencia real
- El problema de la atribución en marketing: cómo evitar que el sistema de incentivos premie lo fácil de medir en lugar de lo importante
- Diseño para la colaboración vs. competencia: cómo evitar que los incentivos individuales destruyan el trabajo en equipo
- La diferencia entre incentivar actividades (lo que hacen), resultados (lo que logran) y comportamientos (cómo lo hacen)

**Bloque 2 — Métricas correctas para incentivar en marketing:**
Diseña mi framework de métricas incentivables:
- Para cada rol de marketing (responsable de demanda, content, SEO, paid, brand, product marketing), qué métricas son las más adecuadas para incentivar
- Pirámide de métricas: cuáles son de leading indicator (predicen el resultado) vs. lagging indicator (lo reflejan tarde)
- Cómo combinar métricas de marketing con métricas de negocio (revenue, retención, NPS) en la compensación
- Métricas a evitar en los incentivos: cuáles parecen buenas pero crean comportamientos perjudiciales
- Gestión de métricas que el equipo no puede controlar del todo: cómo construir mecanismos de ajuste justos

**Bloque 3 — Estructuras de compensación variable:**
Diseña las opciones de estructura para mi equipo:
- Modelo de bonus anual basado en OKRs: cómo diseñar escalas de pago por nivel de consecución
- Modelo de bonus trimestral por resultados: ventajas, desventajas y cómo evitar el efecto sandbagging
- Modelo de comisión por revenue atribuido: cuándo tiene sentido, cómo calcular la atribución y qué conflictos genera
- Modelo de MBO (Management by Objectives): cómo establecer objetivos que no sean ni demasiado fáciles ni imposibles
- Incentivos no económicos que complementan la compensación variable: reconocimiento, desarrollo, autonomía, visibilidad

**Bloque 4 — Implementación y comunicación del plan:**
Explica cómo lanzar un nuevo sistema de compensación variable:
- Proceso de diseño participativo: cómo involucrar al equipo en el diseño de sus propios incentivos para aumentar buy-in
- Cómo comunicar el nuevo sistema de forma transparente y motivadora
- Período de transición: cómo gestionar el cambio desde un sistema de solo salario fijo a uno con variable
- Documentación del plan de incentivos: qué debe incluir el documento oficial
- Gestión de expectativas sobre la parte variable: cómo evitar que se perciba como salario garantizado

**Bloque 5 — Revisión y evolución del sistema:**
Diseña el proceso de mejora continua:
- Cadencia de revisión del plan de incentivos: cuándo y cómo revisarlo sin crear incertidumbre
- Señales de que el sistema de incentivos no funciona: qué comportamientos o resultados indican que el diseño es deficiente
- Cómo ajustar métricas e incentivos cuando cambia la estrategia de marketing de la empresa
- Gestión de disputas sobre el cálculo de la variable: protocolo de resolución

**Entregable:**
Propuesta de sistema de compensación variable para mi equipo de marketing con: métricas incentivables por rol, estructura de pago (escalas y porcentajes), proceso de cálculo y liquidación, protocolo de comunicación, y calendario de revisión anual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar compensación variable para equipos de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Estructuras de compensación para equipos de ingeniería de software',
                'description'      => 'Diseña sistemas de retribución competitivos para ingenieros de software que combinen salario base, bonus por rendimiento, opciones sobre acciones y beneficios no monetarios. Aprende a crear bandas salariales, estructurar el equity y retener talento técnico escaso sin arruinar la empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en compensación para perfiles técnicos, con experiencia diseñando estructuras de retribución para equipos de ingeniería en startups, scale-ups y empresas tecnológicas de tamaño medio que compiten por talento con grandes corporaciones y FAANG.

Necesito diseñar un sistema de compensación completo para mi equipo de ingeniería que sea competitivo en el mercado, justo internamente, y que retenga a los mejores ingenieros sin destruir mi estructura de costes.

**Contexto de mi empresa y equipo:**
- Etapa de la empresa: [bootstrapped / seed / Series A / Series B+ / consolidada]
- Tamaño del equipo de ingeniería: [número] y roles: [frontend / backend / fullstack / data / DevOps / etc.]
- Mercados donde compito por talento: [España / Europa / remoto global]
- Estructura actual: [solo salario / salario + bonus / salario + equity / otro]
- Problemas actuales: [rotación alta / dificultad para atraer senior / inequidad interna percibida / falta de transparencia]
- Presupuesto aproximado de personal de ingeniería: [rango mensual/anual]

**Módulo 1 — Bandas salariales para ingeniería:**
Diseña mi estructura de bandas salariales:
- Framework para definir niveles de ingeniería: Junior / Mid / Senior / Staff / Principal / Distinguished y qué diferencia a cada nivel en términos de impacto, autonomía y alcance
- Cómo hacer benchmarking salarial: fuentes de datos (Radford, Levels.fyi, Stack Overflow Survey, GitLab Transparency Report) y cómo interpretarlas
- Diseño de bandas salariales con mínimo, midpoint y máximo: cómo establecer el rango correcto
- Gestión de casos que no encajan en las bandas: ingenieros muy especializados, perfiles híbridos, negociaciones fuera de rango
- Transparencia salarial: cuándo compartir las bandas con el equipo y cómo gestionar las conversaciones que genera

**Módulo 2 — Bonus y compensación variable en ingeniería:**
Explica cómo estructurar la parte variable para ingenieros:
- Por qué el bonus basado en OKRs individuales es problemático en ingeniería y alternativas más efectivas
- Bonus de equipo vs. bonus individual: cuándo usar cada uno y cómo calcularlo
- Bonus de retención (retention bonuses): cuándo tienen sentido, cómo estructurarlos y qué riscos llevan
- Bonus de firma (sign-on bonus): cómo usarlo para cerrar contrataciones sin distorsionar la banda salarial
- Incentivos por rendimiento excepcional: spot bonuses y reconocimientos monetarios puntuales

**Módulo 3 — Compensación en equity (opciones y acciones):**
Diseña la estructura de equity para el equipo técnico:
- Diferencia entre stock options, RSUs, phantom shares y participaciones reales: cuándo usar cada uno
- Cómo calcular el pool de opciones para el equipo: qué porcentaje es razonable en cada fase
- Cliff, vesting schedule y aceleración en salida: cómo estructurar el vesting de forma competitiva
- Comunicación del valor del equity: cómo explicar el upside potencial de forma honesta sin vender humo
- Gestión del equity cuando hay rondas de inversión y dilución: comunicación con el equipo

**Módulo 4 — Beneficios y compensación no monetaria:**
Diseña el paquete de beneficios para ingenieros:
- Beneficios que realmente valoran los ingenieros senior (vs. los que suenan bien pero no retienen): datos y evidencias
- Formación y desarrollo técnico como parte de la compensación: presupuesto de aprendizaje, tiempo para proyectos propios, conferencias
- Flexibilidad horaria y trabajo remoto como componente de compensación: cómo valorarlo y comunicarlo
- Hardware y setup de trabajo: política de empresa y cómo diferenciarte en esta área
- Beneficios de salud y bienestar: qué nivel es competitivo en el mercado de talento tech

**Módulo 5 — Conversaciones salariales y gestión de la equidad:**
Explica cómo gestionar las conversaciones de compensación:
- Protocolo para las revisiones salariales anuales: proceso, criterios y comunicación
- Cómo manejar una petición de aumento fuera del ciclo de revisión
- Gestión de inequidades salariales descubiertas: cómo corregirlas sin crear más problemas
- Retención de ingenieros con ofertas externas: cuándo y cómo hacer contraoferta
- Documentación de las decisiones de compensación para proteger la equidad y la legalidad

**Entregable:**
Sistema completo de compensación para el equipo de ingeniería con: bandas salariales por nivel, estructura de bonus y condiciones, plan de equity con vesting schedule, paquete de beneficios por nivel, y protocolo de revisiones salariales anuales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar compensación competitiva para equipos de ingeniería',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Fijación de tarifas y modelo de compensación para estudios de diseño',
                'description'      => 'Aprende a estructurar tu modelo de tarifas como estudio o freelancer de diseño: desde la tarifa por hora hasta los modelos de retainer, licencia de obra y participación en resultados. Cobra lo que vales y diseña un modelo que premie el impacto, no las horas.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en estudios de diseño, agencias creativas y profesionales del diseño independientes, con experiencia ayudando a creativos a estructurar modelos de tarifas que reflejen el valor real de su trabajo y les permitan construir negocios sostenibles y rentables.

Necesito revisar y rediseñar completamente mi modelo de fijación de precios y compensación como profesional del diseño, pasando de cobrar por tiempo a cobrar por valor generado.

**Mi contexto como profesional del diseño:**
- Especialidad: [UX/UI / branding / gráfico / motion / ilustración / diseño de producto / interiorismo]
- Tipo de práctica: [freelancer individual / estudio con equipo / agencia boutique]
- Tarifa actual: [por hora / proyecto cerrado / retainer / combinación]
- Tipo de clientes habituales: [pymes / startups / agencias / corporaciones / particulares]
- Ticket promedio actual: [rango] y objetivo: [rango]
- Principal problema con el modelo actual: [dificultad de pricing / clientes que piden descuento / incertidumbre de ingresos / ingresos no escalan con calidad]

**Bloque 1 — Fundamentos del pricing basado en valor en diseño:**
Explica el cambio de paradigma del tiempo al valor:
- Por qué cobrar por hora es el mayor error estructural de los diseñadores: cómo te castiga por ser más rápido y experto
- El concepto de valor percibido vs. valor real en diseño: cómo cuantificar el impacto de un buen diseño en el negocio del cliente
- Técnica de anclaje de precio: cómo hacer que tu tarifa parezca obvia comparada con el valor que entregas
- Cómo tener la conversación de valor con el cliente antes de hablar de precio: preguntas que revelan el ROI de tu trabajo
- El pricing como señal de posicionamiento: por qué subir precios a menudo aumenta la demanda en diseño

**Bloque 2 — Modelos de tarificación para diseño:**
Diseña los modelos de precio disponibles y cuándo usar cada uno:
- Tarifa por proyecto cerrado: ventajas, cómo calcularla con margen, gestión del scope creep y revisiones ilimitadas
- Modelo de retainer mensual: cómo estructurarlo para que sea justo para ti y valioso para el cliente, qué incluye y qué no
- Tarifa day rate: cuándo usarla, cómo fijarla y cómo negociarla con agencias y empresas
- Licencia de obra: cuándo cobrar por los derechos de uso además del trabajo creativo y cómo calcularlo
- Participación en resultados: modelos de fee + éxito para proyectos donde el diseño tiene impacto measurable en ventas o crecimiento
- Productización del servicio: cómo empaquetar servicios repetibles en productos de precio fijo

**Bloque 3 — Fijación de precios concreta:**
Ayúdame a calcular mis tarifas:
- Cómo calcular mi coste real por hora (incluyendo overhead, tiempo no facturable, beneficio objetivo, formación)
- Metodología para pasar de coste real a precio de mercado: el margen que necesitas para crecer
- Benchmarks de tarifas para diseñadores según especialidad, mercado y nivel: qué cobran los referentes
- Escalas de precio por tipo de cliente: por qué cobrar lo mismo a una startup y a una corporación es un error
- Cómo presentar el precio al cliente: estructura de propuestas económicas que maximizan la aceptación

**Bloque 4 — Gestión de la negociación y los descuentos:**
Explica cómo manejar las conversaciones de precio:
- Protocolo cuando un cliente pide descuento: qué decir, qué ceder y qué nunca ceder
- Cómo reducir precio sin reducir margen: reducción de scope, no de tarifa
- El poder del silencio en la negociación de precio: cómo aguantar la incomodidad que cierra el trato
- Clientes que "no tienen presupuesto": cómo identificar cuándo es verdad y cuándo es negociación
- Cuándo rechazar un proyecto por precio: el coste de oportunidad del trabajo mal pagado

**Bloque 5 — Estructuración de contratos e incentivos:**
Diseña la estructura contractual que protege tu compensación:
- Pagos y hitos: cómo estructurar los cobros para no asumir el riesgo financiero tú solo
- Cláusulas de revisiones: cómo limitar contractualmente el alcance sin dañar la relación
- Derechos de autor y propiedad intelectual: cuándo y cómo cobrar por la cesión de derechos
- Incentivos por entrega temprana o resultados excepcionales: cómo incluirlos en el contrato
- Cláusulas de confidencialidad y exclusividad: cuándo cobrar por ellas

**Entregable:**
Sistema de pricing completo para mi práctica de diseño con: estructura de tarifas por tipo de proyecto y cliente, plantilla de propuesta económica, protocolo de negociación, modelo de contrato con cláusulas clave, y hoja de ruta para subir tarifas progresivamente en 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar modelo de tarifas y compensación para profesionales del diseño',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Diseño de planes de comisiones y compensación variable para equipos de ventas',
                'description'      => 'Construye un plan de compensación variable para tu equipo comercial que motive la ambición, recompense los comportamientos correctos y escale con el crecimiento de la empresa. Aprende a estructurar comisiones, aceleradores, bonos de equipo y protecciones que retengan a tus mejores vendedores.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en compensación de ventas (Sales Compensation) con experiencia diseñando planes de comisiones para equipos comerciales en empresas SaaS, servicios B2B y empresas de crecimiento rápido, donde la motivación del equipo de ventas tiene impacto directo en los ingresos.

Necesito diseñar un plan de compensación variable completo para mi equipo de ventas que maximice la motivación, alinee los incentivos con los objetivos de la empresa y sea competitivo en el mercado para retener a los mejores vendedores.

**Contexto de mi equipo comercial:**
- Tipo de ventas: [B2B SaaS / servicios profesionales / e-commerce B2B / sector industrial / otro]
- Roles del equipo: [SDRs / Account Executives / Account Managers / Sales Managers / Sales Engineers]
- Ciclo de venta promedio: [días / semanas / meses]
- Ticket promedio: [rango]
- Estructura actual de compensación: [solo salario / comisión simple / otro sistema]
- Problemas con el sistema actual: [desmotivación / fuga de talento / falta de foco en productos clave / comportamientos de fin de trimestre]
- OTE (On-Target Earnings) objetivo: [rango o % sobre salario base]

**Módulo 1 — Principios de diseño de planes de ventas:**
Establece los fundamentos del diseño correcto de compensación en ventas:
- Los 5 principios de un buen plan de comisiones: simplicidad, controlabilidad, competitividad, alineación con negocio y equidad
- Por qué los planes complejos destruyen la motivación: el efecto del "no entiendo cómo se calcula mi comisión"
- La diferencia entre motivar actividades de ventas vs. resultados de ventas: cuándo usar cada enfoque
- Diseño para comportamiento en el margen: cómo el vendedor que está al 95% del objetivo decide qué hacer
- Alineación entre los incentivos del vendedor y los objetivos estratégicos de la empresa (vender lo que hay que vender, no lo que es más fácil)

**Módulo 2 — Estructura del plan de comisiones por rol:**
Diseña la compensación específica para cada rol:
Para SDRs / BDRs (generación de demanda):
- Métricas incentivables: conversaciones calificadas, demos agendadas, pipeline generado
- Estructura: salario alto / variable bajo vs. salario medio / variable medio
- Protección durante la curva de aprendizaje inicial

Para Account Executives (cierre):
- Estructura de comisión sobre revenue nuevo: porcentaje estándar del mercado y cuándo alejarse de él
- Aceleradores: cómo estructurar un multiplicador de comisión para los vendedores que superan el objetivo
- Desaceleradores: por qué suelen ser un error y alternativas
- Clawbacks: cuándo recuperar comisión pagada sobre contratos perdidos y cómo diseñarlos con justicia

Para Account Managers / Customer Success con responsabilidad de renovación:
- Incentivos para renovaciones y expansión: cómo diferenciar el esfuerzo de renovar vs. vender nuevo
- Comisión por upsell y cross-sell: cómo evitar que se sacrifique la satisfacción del cliente por la comisión a corto plazo

Para Sales Managers:
- Comisión de equipo vs. individual: cuánto variable debe basarse en la performance del equipo gestionado
- Métricas de gestión incentivables: tiempo de rampa de nuevos vendedores, rotación del equipo, cobertura de pipeline

**Módulo 3 — Cuotas y objetivos:**
Explica cómo fijar cuotas que motiven sin destruir la moral:
- Metodología para fijar cuotas individuales: top-down vs. bottom-up y sus implicaciones
- El problema de las cuotas imposibles: cómo saber si tu cuota es realista antes de lanzarla
- Gestión de territorios y cuentas: cómo garantizar que las cuotas sean equitativas entre vendedores con territorios diferentes
- Ajuste de cuotas a mitad de año: cuándo hacerlo, cómo comunicarlo y cómo evitar el efecto desmoralizador
- Protección de cuota (quota relief) en situaciones especiales: incorporación tardía, cambio de territorio, crisis de producto

**Módulo 4 — Bonos adicionales e incentivos especiales:**
Diseña incentivos complementarios:
- Bonus de aceleración de trimestre: cómo diseñar sprints de fin de trimestre que no sacrifiquen el largo plazo
- SPIFs (Sales Performance Incentive Funds): incentivos puntuales para lanzar productos o atacar mercados
- Concursos de ventas: cuándo organizarlos, cómo diseñarlos para que no desmotiven a los que no ganan
- Reconocimiento no monetario que complementa la compensación: Presidents Club, visibilidad, desarrollo

**Módulo 5 — Implementación y gobernanza del plan:**
Diseña el proceso de lanzamiento y gestión:
- Comunicación del plan de comisiones: cómo explicarlo de forma que cada vendedor entienda su potencial de ganancia
- Herramientas para calcular y pagar comisiones: desde Excel hasta plataformas dedicadas (Spiff, CaptivateIQ, Xactly)
- Frecuencia de pago de comisiones: mensual vs. trimestral y su impacto en la motivación
- Proceso de disputas: cómo gestionar los casos donde el vendedor no está de acuerdo con el cálculo
- Revisión anual del plan: cuándo y cómo modificarlo sin perder la confianza del equipo

**Entregable:**
Plan de compensación variable completo para el equipo de ventas con: estructura de comisiones por rol, metodología de fijación de cuotas, sistema de aceleradores, protocolo de pago y disputas, y comunicado de lanzamiento del plan para el equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar plan de comisiones y compensación variable para ventas',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'OKRs como base de la compensación variable en equipos de producto',
                'description'      => 'Diseña un sistema de compensación variable para equipos de producto que use OKRs como base de evaluación sin caer en las trampas habituales: gaming del sistema, aversión al riesgo en los objetivos y destrucción del trabajo en equipo. Incentivos que premian el impacto real.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión de producto y diseño de sistemas de incentivos, con experiencia construyendo marcos de compensación variable para equipos de producto (PMs, diseñadores de producto, product analysts) donde medir el rendimiento individual es complejo y los resultados dependen de múltiples factores.

Necesito diseñar un sistema de compensación variable para mi equipo de producto que sea justo, motive la ambición y el impacto, y no destruya la cultura de experimentación y colaboración que necesitamos para construir un gran producto.

**Contexto de mi equipo de producto:**
- Composición del equipo: [PMs / Diseño de producto / Product Analytics / Growth / otro]
- Tamaño del equipo: [número]
- Metodología: [squads / feature teams / shape up / SAFe / otro]
- Métricas de producto principales: [engagement / retención / activation / revenue / NPS / DAU/MAU]
- Sistema de OKRs actual: [no existe / en proceso de implementación / consolidado]
- Problemas actuales con la compensación: [subjetividad en las evaluaciones / falta de alineación con impacto / dificultad para premiar diferencial de rendimiento / todo el mundo recibe lo mismo]

**Bloque 1 — El problema de incentivar en producto:**
Explica por qué los incentivos en producto son diferentes y más complejos:
- Por qué los sistemas de comisiones de ventas no funcionan en producto: la distancia entre acción y resultado
- El problema del largo plazo en producto: cómo evitar que la compensación variable incentive soluciones rápidas sobre impacto sostenible
- Atribución en equipos: cuando el éxito es colectivo, ¿cómo premias diferencial individual sin destruir la colaboración?
- El efecto de la compensación variable sobre la toma de riesgos en producto: cómo evitar que los PMs solo persigan apuestas seguras
- La trampa del sandbagging: cómo diseñar el sistema para que sea más inteligente fijar objetivos ambiciosos que conservadores

**Bloque 2 — OKRs como base de la evaluación de rendimiento:**
Diseña el vínculo entre OKRs y compensación:
- Qué porcentaje de la compensación variable debe vincularse a OKRs de equipo vs. OKRs individuales vs. OKRs de empresa
- Cómo evaluar el rendimiento en OKRs para compensación sin incentivar la manipulación de los datos
- Calibración de la ambición en los objetivos: cómo distinguir OKRs ambiciosos no conseguidos de OKRs mal diseñados o ejecución pobre
- El rol del juicio cualitativo en la evaluación: cómo complementar los OKRs con evaluación de proceso y comportamientos
- Ciclo de OKRs y ciclo de compensación: cómo alinear los períodos sin crear demasiada incertidumbre

**Bloque 3 — Estructura del plan de compensación variable:**
Diseña la arquitectura del sistema de incentivos:
- Distribución de la compensación variable: qué porcentaje del OTE (On-Target Earnings) es variable en producto
- Niveles de OKR a incentivar: empresa / área de producto / squad / individual y cómo ponderar cada uno
- Cómo estructurar la escala de pago según el nivel de consecución de OKRs: lineal, escalonada, con umbral mínimo
- Bonus discrecional del manager: cuándo incluirlo y cómo limitarlo para evitar favoritismos
- Incentivos para comportamientos específicos: experimentación, colaboración cross-equipo, mentoría, documentación

**Bloque 4 — Evaluación de impacto cualitativo:**
Explica cómo evaluar lo que no se puede medir fácilmente:
- Frameworks de evaluación de product managers: cómo evaluar juicio de producto, estrategia y liderazgo de equipo
- Proceso de calibración entre managers para garantizar equidad en las evaluaciones
- Feedback 360 como input para la evaluación: cómo integrarlo sin que se convierta en política de oficina
- Documentación del impacto a lo largo del año: cómo pedir a los PMs que construyan su propio caso de rendimiento

**Bloque 5 — Retención e incentivos a largo plazo:**
Diseña la parte de compensación orientada a retención:
- Equity y RSUs para perfiles de producto: cómo estructurarlo para retener a los mejores PMs senior
- Bonus de retención para momentos clave del producto (post-lanzamiento, post-Serie B, etc.)
- Planes de carrera vinculados a compensación: cómo las bandas salariales y los criterios de promoción se conectan con el sistema de incentivos
- Compensación no monetaria para PMs: autonomía, visibilidad, desarrollo, influencia en la estrategia

**Entregable:**
Sistema de compensación variable para el equipo de producto con: estructura de OKRs por nivel, escala de pago por nivel de consecución, proceso de evaluación cualitativa, protocolo de calibración entre managers, y plan de comunicación del sistema al equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar compensación variable ligada a OKRs para equipos de producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de sistemas de compensación total y retención de talento',
                'description'      => 'Construye una estrategia de compensación total que vaya más allá del salario: equity, beneficios, desarrollo, bienestar y reconocimiento. Aprende a diseñar paquetes competitivos que retengan el talento clave sin depender únicamente del salario más alto del mercado.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Compensación y Beneficios (C&B) con experiencia diseñando estrategias de compensación total en empresas en crecimiento que compiten por talento escaso en mercados europeos y latinoamericanos.

Necesito diseñar una estrategia de compensación total que nos posicione de forma competitiva en el mercado de talento y nos permita retener a los empleados clave sin competir exclusivamente por salario con empresas que tienen bolsillos más profundos.

**Contexto de mi empresa:**
- Sector y tamaño: [sector, número de empleados]
- Etapa: [startup / scale-up / empresa establecida]
- Perfil de talento crítico: [roles que más difícil resulta contratar y retener]
- Posicionamiento salarial actual: [por debajo de mercado / en mercado / por encima]
- Rotación actual y objetivo: [% anual]
- Presupuesto total de personal: [rango o % de revenue]
- Mayor reto de retención: [salario / cultura / desarrollo / falta de flexibilidad / competencia de grandes corporaciones]

**Pilar 1 — Diagnóstico y estrategia de compensación:**
Establece la estrategia base de compensación:
- Cómo definir la filosofía de compensación de la empresa: qué posicionamiento queremos tener (percentil 50, 75, 90) y para qué roles
- Benchmarking salarial: metodología, fuentes de datos y frecuencia de actualización
- Segmentación de roles: no todos los empleados necesitan la misma estrategia de compensación
- Cómo balancear equidad interna y competitividad externa cuando entran en conflicto
- Transparencia salarial: qué nivel de transparencia es adecuado para mi empresa y cómo implementarlo

**Pilar 2 — Compensación variable y bonus:**
Diseña la parte variable de la compensación:
- Tipos de bonus: anual basado en empresa, trimestral por rendimiento individual, discrecional del manager, spot bonus
- Para cada tipo: diseño, criterios, cuantía máxima, proceso de evaluación y comunicación
- Bonus de retención (retention bonus): cuándo usarlos, cuánto ofrecer, período de permanencia exigido y condiciones de devolución
- Participación en beneficios: cuándo tiene sentido y cómo estructurarla legalmente en España/LATAM
- Cómo vincular el bonus con los objetivos de empresa sin crear incentivos perversos

**Pilar 3 — Equity y participación en el crecimiento:**
Explica cómo diseñar la compensación en acciones u opciones:
- Opciones sobre acciones (stock options): cuándo usarlas, cómo calcular el pool, estructura de vesting
- Phantom shares / acciones virtuales: alternativa para empresas que no quieren dar equity real
- RSUs para empresas más consolidadas: diferencias con las opciones y cuándo son más adecuadas
- Cómo comunicar el valor potencial del equity de forma honesta: ni exceso de promesas ni infravalorar
- Equity para empleados no técnicos: cómo extender la participación en el crecimiento más allá de la ingeniería

**Pilar 4 — Beneficios y compensación no dineraria:**
Diseña el paquete de beneficios estratégico:
- Beneficios con mayor impacto en retención según evidencia: flexibilidad, salud, desarrollo, conciliación
- Beneficios personalizables (cafeteria plans): cómo dar al empleado elección sin perder eficiencia de coste
- Seguro médico y bienestar: niveles de cobertura competitivos y cómo gestionarlos eficientemente
- Beneficios de desarrollo profesional: presupuesto de formación, tiempo para aprender, conferencias, certificaciones
- Beneficios de conciliación: teletrabajo, flexibilidad horaria, días adicionales de vacaciones, permisos ampliados
- Beneficios únicos de cultura: qué beneficios reflejan los valores de la empresa y crean comunidad

**Pilar 5 — Retención selectiva de talento crítico:**
Diseña estrategias específicas para retener a los empleados más valiosos:
- Identificación de los empleados con mayor riesgo de abandono y mayor impacto en la empresa
- Planes de retención individualizados: cómo diseñar paquetes personalizados para empleados clave
- Conversaciones de retención preventivas: cuándo tenerlas, qué preguntar y cómo actuar sobre la información
- Contraoferta: cuándo hacerla y cuándo no tiene sentido, y cómo manejarla si decides no hacerla
- El coste real de la rotación: cómo calcularlo para justificar la inversión en retención ante el CFO

**Entregable:**
Estrategia de compensación total con: filosofía de compensación documentada, bandas salariales por nivel y familia de puestos, diseño del paquete de bonus anual, estructura de equity para empleados clave, catálogo de beneficios por segmento de empleado, y protocolo de revisión salarial anual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar estrategia de compensación total y retención de talento',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de compensación variable basados en KPIs financieros',
                'description'      => 'Diseña sistemas de incentivos para equipos financieros vinculados a KPIs de negocio: reducción de costes, mejora de márgenes, eficiencia del capital y cumplimiento de presupuesto. Aprende a estructurar bonus que alineen al equipo de finanzas con los objetivos estratégicos de la empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO y experto en diseño de sistemas de incentivos para funciones financieras, con experiencia construyendo planes de compensación variable para equipos de finanzas, controlling y FP&A que equilibran el rigor técnico con los objetivos estratégicos del negocio.

Necesito diseñar un sistema de compensación variable para mi equipo financiero que incentive los comportamientos correctos, alinee al equipo con los objetivos de la empresa y sea percibido como justo y transparente.

**Contexto de mi función financiera:**
- Composición del equipo: [CFO / Controllers / FP&A / Tesorería / Contabilidad / Auditoría interna]
- Tipo de empresa: [pyme / corporación / empresa cotizada / startup en crecimiento]
- Principales responsabilidades del equipo: [reporting / presupuesto / control de costes / fundraising / auditoría / tesorería]
- Estructura de compensación actual: [fijo / bonus discrecional / MBO estructurado / otro]
- Problemas identificados: [falta de alineación con negocio / subjetividad en evaluaciones / poca diferenciación entre rendimientos / difícil de medir la aportación individual]

**Módulo 1 — Selección de KPIs financieros incentivables:**
Diseña el mapa de métricas para incentivar al equipo financiero:
- KPIs de desempeño financiero de la empresa que el equipo de finanzas influye directamente: EBITDA, margen operativo, FCF, ROIC, ratio de cobertura de deuda
- KPIs de calidad y eficiencia de la función financiera: precisión del forecast (forecast accuracy), días para cerrar el mes (days to close), cobertura de auditoría interna, cumplimiento regulatorio
- KPIs de reducción de costes: ahorro de costes identificado y ejecutado, eficiencia del proceso de compras, optimización de la estructura de capital
- KPIs de gestión de riesgo: cobertura de exposición a divisa, calidad de la cartera de cobros (DSO), ratio de impagados
- Cómo distinguir entre métricas de las que el equipo es responsable vs. métricas que solo observa

**Módulo 2 — Estructura del plan de bonus para finanzas:**
Diseña la arquitectura del plan de incentivos:
- Distribución óptima de la variable: empresa (resultados financieros globales) / equipo (performance de la función) / individual (objetivos personales)
- Escala de pago según nivel de consecución: umbral mínimo, objetivo base, nivel excelente
- Frecuencia de medición y pago: anual vs. semestral vs. trimestral para diferentes métricas
- Gestión del riesgo de pagar bonus cuando la empresa va mal: cláusulas de condición mínima de empresa
- Diferenciación por nivel jerárquico: el CFO vs. un analista financiero tienen estructuras de variable muy diferentes

**Módulo 3 — Objetivos de mejora de proceso y calidad:**
Explica cómo incentivar la mejora continua de la función financiera:
- Cómo establecer objetivos de mejora de proceso (reducción del tiempo de cierre, automatización, mejora de la precisión del forecast) y conectarlos con compensación
- Incentivos para la digitalización y automatización: cómo premiar al equipo que mejora la eficiencia incluso si eso reduce la carga de trabajo futura
- Calidad de la información financiera: cómo incentivar la precisión y la transparencia sin incentivar el embellecimiento de los datos
- Mejora en la relación con stakeholders internos: cómo medir y premiar el servicio que finanzas presta al resto de la organización

**Módulo 4 — Alineación con los objetivos estratégicos:**
Diseña la conexión entre compensación financiera y estrategia:
- Cómo vincular los OKRs estratégicos de la empresa con los objetivos de compensación del equipo financiero
- Integración con el proceso de planificación anual: cómo el presupuesto y el plan financiero se convierten en la base de los objetivos de compensación
- Ajuste de objetivos a mitad de año: cuándo está justificado y cómo hacerlo sin perder credibilidad
- Coordinación con el Comité de Compensación o Consejo de Administración en empresas más grandes

**Módulo 5 — Gobernanza y comunicación del plan:**
Explica cómo implementar y gestionar el sistema:
- Documentación del plan de compensación variable: qué debe incluir para ser legalmente sólido y transparente
- Proceso de evaluación y calibración: cómo garantizar que las evaluaciones sean consistentes entre diferentes managers
- Comunicación del plan al equipo: cómo explicar los objetivos de forma motivadora y comprensible
- Gestión de disputas: protocolo cuando un miembro del equipo no está de acuerdo con su evaluación
- Revisión anual del plan: cómo mejorarlo sin crear incertidumbre en el equipo

**Entregable:**
Sistema de compensación variable para el equipo financiero con: mapa de KPIs por rol, estructura de bonus con escalas y ponderaciones, proceso de evaluación y calibración, plantilla de contrato de objetivos individual, y protocolo de comunicación y revisión anual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar compensación variable para equipos financieros basada en KPIs',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estructura de honorarios variables y modelos de éxito en servicios legales',
                'description'      => 'Diseña modelos de honorarios innovadores que alineen los intereses del despacho con los del cliente: honorarios de éxito, cuota litis, honorarios planos y modelos de suscripción. Aprende a estructurar estos acuerdos para maximizar el valor para ambas partes y protegerte legalmente.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión de despachos de abogados y modelos de negocio legal, con experiencia asesorando firmas de abogados en la transición desde modelos de honorarios por hora hacia estructuras de precios más competitivas y alineadas con el cliente.

Necesito diseñar modelos alternativos de honorarios que sean competitivos en el mercado actual, alineen mis intereses con los del cliente y sean legal y éticamente correctos según la normativa colegial.

**Mi contexto profesional:**
- Tipo de práctica: [despacho individual / boutique / mediana firma / departamento legal interno que asesora a clientes externos]
- Áreas de práctica: [mercantil / laboral / contencioso / M&A / propiedad intelectual / fiscal / otro]
- Tipo de clientes: [pymes / startups / individuos de alto patrimonio / corporaciones]
- Modelo de honorarios actual: [por hora / cuota fija / retainer / combinación]
- Problema principal: [clientes que cuestionan el precio / presión de competencia de precios / dificultad para presupuestar / falta de alineación de incentivos]
- Colegio de abogados al que perteneces: [especifica para considerar restricciones deontológicas específicas]

**Bloque 1 — Panorama de modelos alternativos de honorarios:**
Describe los principales modelos y cuándo usar cada uno:
- Tarifa plana (fixed fee): para qué tipos de servicios es adecuada, cómo calcularla con margen y gestionar el scope creep
- Retainer mensual: estructura para servicios legales recurrentes, qué incluir y qué facturar aparte, gestión de los meses de baja actividad
- Modelo de suscripción legal: para pymes que necesitan acceso continuo a consejo legal, cómo estructurar los niveles de servicio
- Honorarios por tramos (milestone billing): vincular los honorarios a hitos del proyecto, cuándo es ventajoso
- Honorarios de éxito (contingency fees): estructura, riesgos, cuándo aceptar y cuándo rechazar, implicaciones financieras para el despacho
- Cuota litis (participación en resultado): diferencias con honorarios de éxito, regulación en España y LATAM, cómo estructurarla

**Bloque 2 — Estructura de honorarios de éxito:**
Diseña un sistema de honorarios vinculados al resultado:
- Tipos de resultados sobre los que vincular honorarios: recuperación económica, acuerdo favorable, reducción de condena, obtención de licencia, cierre de operación
- Cómo calcular el porcentaje de éxito justo según el tipo de asunto y el riesgo asumido
- Estructura mixta: honorarios base reducidos + porcentaje de éxito (el modelo más equilibrado)
- Cláusulas esenciales en el contrato de honorarios de éxito: definición clara del éxito, cálculo de la base, momentos de pago
- Restricciones deontológicas en España: qué está permitido por el Estatuto General de la Abogacía y qué prohíben algunos colegios
- Gestión del riesgo financiero del despacho: cómo evaluar si un asunto justifica el riesgo de honorarios contingentes

**Bloque 3 — Modelos de pricing para distintas áreas de práctica:**
Diseña modelos específicos para cada tipo de asunto legal:
- Contencioso civil y mercantil: combinación de fijo inicial + éxito, gestión de asuntos de largo plazo
- M&A y operaciones corporativas: honorarios por tramos vinculados a hitos del deal (LOI, due diligence, cierre)
- Reestructuraciones y concursal: modelos que equilibran riesgo del despacho y capacidad de pago del cliente en dificultades
- Propiedad intelectual y registro de marcas: paquetes de precio plano para servicios estandarizados
- Asesoría laboral: retainer mensual para empresas, precio fijo para despidos y conflictos individuales

**Bloque 4 — Comunicación del valor y negociación de honorarios:**
Explica cómo vender modelos alternativos de honorarios:
- Cómo presentar honorarios de éxito como una propuesta de valor, no como un descuento
- Técnica de comparación de opciones: cómo presentar tres alternativas de honorarios para guiar al cliente hacia la más beneficiosa para ambos
- Gestión de clientes que siempre negocian el precio: cuándo ceder y cuándo no, y cómo justificar tus tarifas con el valor generado
- Documentación del valor entregado: cómo construir el caso de ROI de tus servicios legales para conversaciones de renovación

**Bloque 5 — Aspectos legales y éticos:**
Establece los límites y protecciones necesarias:
- Contratos de honorarios que protejan al despacho: cláusulas imprescindibles
- Obligaciones de información al cliente sobre los honorarios según la normativa vigente
- Gestión de conflictos cuando el incentivo de honorarios podría sesgar el consejo legal
- Registros y documentación de las opciones presentadas al cliente para protección ante reclamaciones

**Entregable:**
Guía de modelos alternativos de honorarios para mi práctica con: descripción de cada modelo con ventajas y riesgos, criterios de selección del modelo por tipo de asunto, plantillas de contrato de honorarios para los modelos más usados, y protocolo de presentación de opciones de honorarios al cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar modelos alternativos de honorarios y cuota litis en servicios legales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Diseño de incentivos para equipos de Customer Success orientados a retención y expansión',
                'description'      => 'Construye un sistema de compensación variable para tu equipo de Customer Success que alinee los incentivos con la retención de clientes, la expansión de cuentas y la satisfacción real del cliente. Evita las trampas habituales: churn oculto, expansión forzada y métricas de vanidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success y experto en compensación de equipos de post-venta, con experiencia diseñando sistemas de incentivos para CSMs en empresas SaaS B2B donde la retención y la expansión son los motores clave del crecimiento.

Necesito diseñar un sistema de compensación variable para mi equipo de Customer Success que incentive los comportamientos correctos para maximizar la retención y el crecimiento de cuentas, sin crear incentivos perversos que dañen la relación con el cliente.

**Contexto de mi equipo de CS:**
- Modelo de negocio: [SaaS / plataforma / servicios recurrentes]
- Segmento de clientes: [enterprise / mid-market / SMB]
- Métricas actuales de CS: [GRR / NRR / NPS / CSAT / churn rate / expansion ARR]
- Estructura de compensación actual: [solo salario / bonus discrecional / comisión sobre renovación / otro]
- Problemas identificados: [los CSMs no priorizan la expansión / no hay claridad en qué se premia / los incentivos crean comportamientos que dañan la confianza del cliente / difícil medir el impacto individual]
- Cartera promedio por CSM: [número de cuentas] y ARR total gestionado: [rango]

**Módulo 1 — Principios de diseño de incentivos en Customer Success:**
Establece los fundamentos del diseño correcto:
- La diferencia fundamental entre incentivar en ventas vs. en CS: por qué las comisiones de ventas no funcionan trasladadas directamente a CS
- El riesgo del CSM transaccional: cómo los malos sistemas de incentivos convierten a los CSMs en vendedores disfrazados y destruyen la confianza del cliente
- La tensión entre retención y expansión: cómo diseñar incentivos que equilibren ambos objetivos sin sacrificar uno por el otro
- Controlabilidad en CS: los CSMs no controlan todo el churn, ni toda la expansión; cómo construir un sistema justo que reconozca esto
- El plazo temporal del impacto en CS: cómo incentivar acciones cuyo resultado se ve en 6-12 meses, no en el próximo trimestre

**Módulo 2 — Métricas incentivables en Customer Success:**
Diseña el mapa de métricas para cada tipo de CSM:
Para CSMs con responsabilidad principalmente de retención:
- GRR (Gross Revenue Retention): cómo calcularlo, benchmarks del sector y cómo ponderarlo en la compensación
- Churn rate por cartera: gestión de los factores que el CSM no puede controlar (fusiones, presupuestos del cliente, cambios de dirección)
- NPS o CSAT del portafolio gestionado: cómo usarlo como métrica de incentivo sin incentivar el gaming de las encuestas
- Tiempo hasta la primera adopción significativa en cuentas nuevas (time to value)

Para CSMs con responsabilidad de retención y expansión:
- NRR (Net Revenue Retention): la métrica más completa para CSMs con responsabilidad de expansión
- Expansion ARR generada: comisión por upsell y cross-sell identificados y cerrados (con o sin apoyo de ventas)
- Tasa de adopción de nuevas features: cómo medir y premiar la adopción que previene el churn futuro

Para CS Managers:
- Métricas de equipo: GRR y NRR del equipo completo, satisfacción del equipo, tiempo de rampa de nuevos CSMs

**Módulo 3 — Estructura del plan de compensación:**
Diseña la arquitectura del sistema de incentivos:
- Ratio base/variable óptimo para CS: diferencias por segmento (enterprise vs. SMB) y responsabilidades (retención vs. expansión)
- Distribución del bonus: qué porcentaje va vinculado a métricas de empresa / equipo / cartera individual
- Escala de pago según rendimiento: cómo diseñar una curva que premie el rendimiento excelente sin penalizar el rendimiento medio de forma desproporcionada
- Frecuencia de pago de la variable: trimestral para motivación a corto plazo vs. anual para evitar el gaming
- Protecciones para churns no controlables: cláusulas de exclusión y ajuste para situaciones excepcionales

**Módulo 4 — Incentivos para comportamientos estratégicos:**
Diseña incentivos complementarios que refuercen la cultura de CS:
- Bonus por QBRs ejecutivos completados y calificados: cómo incentivar la relación senior con el cliente
- Incentivos por generación de casos de éxito y referencias: cómo premiar al CSM que convierte clientes en embajadores
- Bonus por identificación proactiva de riesgo: incentivar al CSM que detecta señales de churn temprano aunque luego no pueda evitarlo
- Incentivos por colaboración con producto: cómo premiar al CSM que trae feedback de cliente que mejora el producto

**Módulo 5 — Implementación y gestión del plan:**
Explica cómo lanzar y mantener el sistema:
- Comunicación del plan al equipo: cómo explicar la lógica de los incentivos y crear buy-in
- Herramientas para calcular y hacer seguimiento de la compensación variable en CS (Gainsight, ChurnZero, Salesforce)
- Gestión de disputas sobre el cálculo de la variable: protocolo claro y transparente
- Revisión semestral del plan: cómo ajustarlo cuando cambian las prioridades de negocio
- Benchmarking: qué porcentaje del total de compensación es variable en CS según el mercado y el segmento

**Entregable:**
Plan de compensación variable para el equipo de CS con: métricas incentivables por rol, estructura de bonus con escalas y ponderaciones, protecciones ante churns no controlables, protocolo de comunicación y disputas, y dashboard de seguimiento de la compensación variable por CSM.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar incentivos de compensación variable para equipos de Customer Success',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Modelos de pricing y compensación para freelancers de alto valor',
                'description'      => 'Aprende a construir un modelo de pricing como freelancer que te permita cobrar por valor generado, no por horas invertidas. Diseña paquetes de servicios, modelos de retainer, tarifas de éxito y paquetes de membresía que estabilicen tus ingresos y justifiquen tarifas premium.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para profesionales independientes con experiencia ayudando a freelancers de alto valor a transformar su modelo de precios: pasando del cobro por hora a estructuras basadas en valor que multiplican sus ingresos sin multiplicar sus horas de trabajo.

Quiero diseñar un sistema completo de pricing y modelos de compensación para mi práctica freelance que me permita cobrar lo que realmente valgo, generar ingresos más predecibles y posicionarme en el segmento premium del mercado.

**Mi perfil actual como freelancer:**
- Especialidad: [consultoría / desarrollo / diseño / marketing / finanzas / legal / formación / otro]
- Experiencia: [años trabajando en esta especialidad]
- Clientes actuales: [número, tipo y sector]
- Modelo de precio actual: [por hora / proyecto cerrado / retainer / combinación]
- Tarifa actual: [rango por hora o por proyecto]
- Objetivo de ingresos mensual: [cantidad]
- Horas disponibles para trabajo facturable por semana: [horas]
- Mayor obstáculo para subir precios: [miedo a perder clientes / no sé cómo justificarlo / competencia de precios bajos / síndrome del impostor]

**Bloque 1 — Diagnóstico del modelo de precios actual:**
Analiza las limitaciones de tu sistema actual de pricing:
- Calcula tu tarifa horaria real: incluyendo tiempo de prospección, administración, formación y tiempo no facturable
- El techo de ingresos del modelo por hora: cuánto puedes ganar máximo trabajando X horas y qué significa eso para tu vida
- Identifica qué parte de tu trabajo genera más valor para el cliente con menor esfuerzo tuyo: la oportunidad de pricing basado en valor
- Análisis de tus clientes actuales: cuáles son más rentables por hora real dedicada, cuáles menos
- El costo de clientes de bajo precio: no solo en dinero sino en energía, tiempo y posicionamiento

**Bloque 2 — Modelos de pricing para freelancers:**
Diseña tu menú de opciones de pricing:

Modelo 1 — Paquetes de servicio (productización):
- Cómo empaquetar un servicio recurrente y complejo en un producto de precio fijo y alcance definido
- Ejemplos de productización según mi especialidad
- Cómo gestionar el scope creep en paquetes de precio fijo
- Ventajas para el cliente (claridad y previsibilidad) y para ti (eficiencia y margen)

Modelo 2 — Retainer mensual:
- Qué tipos de retainer existen: horas comprometidas, disponibilidad garantizada, entregables recurrentes
- Cómo calcular el precio de un retainer: más que multiplicar horas por tarifa
- Qué incluir y qué excluir explícitamente del retainer
- Cómo convertir clientes de proyecto en clientes de retainer

Modelo 3 — Pricing basado en valor:
- Técnica de descubrimiento del valor: las preguntas que revelan cuánto vale tu trabajo para el cliente
- Cómo pasar de "cuánto cobras" a "cuánto vale este proyecto para ti": el cambio de conversación que cambia el precio
- Cómo cuantificar el ROI de tu trabajo para justificar precios 3-5x superiores a la tarifa por hora
- El poder del anclaje: cómo presentar opciones de precio para guiar al cliente hacia el que quieres

Modelo 4 — Honorarios de éxito o participación en resultados:
- En qué servicios tiene sentido vincular parte de los honorarios al resultado: marketing de performance, ventas, consultoría de reducción de costes
- Cómo estructurar la participación en resultados: porcentaje, base de cálculo, período de medición
- Protecciones legales necesarias en contratos de honorarios de éxito

**Bloque 3 — Proceso de subida de precios:**
Diseña un plan para aumentar tus tarifas:
- Cómo comunicar una subida de precios a clientes existentes sin perderlos
- Qué clientes subir primero y cómo secuenciar el proceso
- Técnica del "precio de nuevos clientes": sube para clientes nuevos primero, migra los actuales progresivamente
- Posicionamiento que justifica precios más altos: especialización, resultados demostrados, escasez artificial
- Cómo rechazar clientes de bajo precio de forma que no dañe la relación ni tu reputación

**Bloque 4 — Estabilización de ingresos:**
Diseña un modelo que genere ingresos predecibles:
- La pirámide de ingresos freelance: cómo combinar retainers (base estable), proyectos (crecimiento) y servicios de alto margen (multiplicadores)
- Cuántos clientes de retainer necesitas para cubrir tus gastos fijos y qué ingresos variables te dan libertad
- Gestión del pipeline de proyectos para evitar los ciclos de fiesta-hambruna
- Creación de productos de información o membresías como ingresos pasivos complementarios

**Bloque 5 — Contratos y protección legal:**
Diseña contratos que protejan tu modelo de pricing:
- Cláusulas imprescindibles en contratos de precio fijo: definición de alcance, número de revisiones, proceso de aprobación
- Contratos de retainer: condiciones de terminación, qué pasa con las horas no usadas, incremento anual
- Gestión de impagados: estructura de pagos, penalizaciones, protocolo de morosidad
- Protección de propiedad intelectual: cuándo y cómo cobrar por los derechos de uso de tu trabajo

**Entregable:**
Sistema completo de pricing para mi práctica freelance con: menú de 3-4 modelos de precio con estructura y condiciones, proceso de subida de precios con comunicaciones tipo, plantilla de contrato para el modelo más usado, y proyección financiera de ingresos según el nuevo modelo durante 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar modelos de pricing y compensación para freelancers',
                'vote_score'       => 46,
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
