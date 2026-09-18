<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills314Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'P&L y ROI para directores de marketing: cómo justificar la inversión publicitaria',
                'description'      => 'Aprende a leer e interpretar la cuenta de resultados desde la perspectiva del marketing, a calcular el ROI real de tus campañas y a construir argumentos financieros sólidos para defender tu presupuesto ante la dirección.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO que lleva 20 años trabajando codo a codo con equipos de marketing y que domina tanto las finanzas como el lenguaje del marketing. Tu objetivo es enseñarme a pensar en términos financieros para que pueda tomar mejores decisiones de inversión en marketing y comunicarlas de forma convincente a la dirección.

**MÓDULO 1: CÓMO LEER LA CUENTA DE RESULTADOS (P&L) DESDE MARKETING**

Explícame los conceptos clave del P&L que más afectan a las decisiones de marketing:

*Ingresos:*
- ¿Cómo se desglosan los ingresos y qué parte puede atribuirse directamente a las acciones de marketing?
- ¿Qué es el CAC (Customer Acquisition Cost) y cómo se refleja en el P&L?
- ¿Cómo influye el mix de canales en el margen bruto?

*Costes de marketing y su clasificación:*
- ¿Cuáles son los costes fijos de marketing (equipo, herramientas, agencias retainer) y los variables (campañas, producción)?
- ¿Cómo distinguir entre gasto en marketing y inversión en marketing desde el punto de vista contable?
- ¿Qué es el OPEX vs. CAPEX en marketing y por qué importa para el presupuesto?

*Márgenes y rentabilidad:*
- ¿Cómo calculo el margen bruto y el margen neto de mis acciones de marketing?
- ¿Qué es el EBITDA y por qué la dirección lo menciona tanto en las reuniones?
- ¿Cómo afecta el gasto en marketing al EBITDA y qué argumentos puedo usar para justificar inversiones que lo reducen a corto plazo?

**MÓDULO 2: CÁLCULO DE ROI EN MARKETING**

*Métodos de cálculo del ROI:*
- Fórmula básica: ROI = (Beneficio generado - Inversión) / Inversión × 100
- ¿Cómo atribuir ingresos a campañas específicas en un entorno multicanal?
- ¿Qué modelos de atribución existen (último clic, primer clic, lineal, data-driven) y cuál es más adecuado para cada tipo de campaña?
- ¿Cómo calcular el ROI cuando los efectos de las campañas se materializan meses después (brand awareness, content marketing, SEO)?

*Métricas financieras que debes dominar:*
- ROAS (Return on Ad Spend): cuándo usarlo y cuándo es insuficiente
- LTV (Lifetime Value del cliente): cómo calcularlo y usarlo para justificar un CAC más alto
- Payback period: en cuántos meses recupero la inversión en adquisición de un cliente
- MER (Marketing Efficiency Ratio): ingresos totales / gasto total en marketing

*Caso práctico de ROI:*
Guíame en el cálculo del ROI de una campaña de captación con los siguientes parámetros:
- Inversión en medios: 50.000 €
- Coste de equipo y agencia: 15.000 €
- Leads generados: 500
- Tasa de conversión lead-a-cliente: 10%
- Ticket medio: 3.000 €
- Margen bruto del producto: 40%
- LTV estimado: 9.000 €

Calcula el ROI inmediato (primer mes) y el ROI basado en LTV.

**MÓDULO 3: GESTIÓN DEL PRESUPUESTO DE MARKETING**

*Cómo estructurar el presupuesto anual:*
- ¿Qué porcentaje de los ingresos se debe destinar a marketing según el sector y el estadio de crecimiento de la empresa?
- ¿Cómo dividir el presupuesto entre brand marketing (largo plazo) y performance marketing (corto plazo)?
- ¿Cómo crear una reserva de contingencia para oportunidades o crisis?
- ¿Cómo gestionar un presupuesto trimestral con flexibilidad para reasignar según resultados?

*Cómo defender el presupuesto ante la dirección:*
- ¿Qué argumentos financieros son más persuasivos para un CFO?
- ¿Cómo responder a la pregunta "¿qué pasa si recortamos el presupuesto de marketing un 20%?"
- ¿Cómo presentar el marketing como inversión y no como gasto?
- ¿Qué escenarios (optimista, base, pesimista) debo presentar en el budget planning?

**MÓDULO 4: DASHBOARD FINANCIERO DE MARKETING**

Diseña un dashboard mensual con las métricas financieras que todo director de marketing debe monitorizar:
- CAC por canal y por segmento
- LTV:CAC ratio (saludable > 3:1)
- Payback period (objetivo < 12 meses)
- MER total y por canal
- Porcentaje de ingresos atribuidos a marketing
- Proyección de pipeline generado por marketing

**ENTREGABLES**
1. Glosario financiero esencial para directores de marketing con 20 términos clave
2. Plantilla de cálculo de ROI para campañas de captación, retención y brand
3. Modelo de presupuesto de marketing con justificación financiera
4. Guía para presentar el presupuesto de marketing ante el CFO y el CEO

¿Cuál es tu sector, el tamaño de tu empresa y el presupuesto anual de marketing con el que trabajas?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión financiera del presupuesto de marketing y justificación del ROI ante la dirección',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Presupuestación y métricas financieras para líderes técnicos y CTOs',
                'description'      => 'Aprende los fundamentos financieros que necesita todo líder técnico: cómo gestionar el presupuesto de ingeniería, calcular el coste real de una feature, justificar inversiones en infraestructura y hablar el idioma del CFO.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO que también tiene formación financiera y experiencia gestionando presupuestos de ingeniería de entre 500.000 y 10 millones de euros. Tu objetivo es enseñarme a tomar decisiones técnicas con conciencia financiera y a comunicar el valor de la inversión en tecnología a los stakeholders de negocio.

**MÓDULO 1: ANATOMÍA DEL PRESUPUESTO DE INGENIERÍA**

*Categorías principales del gasto en tecnología:*
- Personal (headcount): salarios, cargas sociales, beneficios, freelancers y agencias
- Infraestructura y cloud: AWS, GCP, Azure, servidores, CDN, bases de datos
- Herramientas y licencias de software: IDEs, CI/CD, monitorización, seguridad, comunicación
- Formación y desarrollo del equipo
- Costes de soporte y mantenimiento de sistemas legados

*Coste real de un ingeniero:*
- ¿Cómo calcular el coste total de un ingeniero incluyendo todos los conceptos?
- Regla del 1,5x: por qué el coste real suele ser 1,5 veces el salario bruto
- ¿Cómo distribuir el tiempo productivo de un ingeniero entre desarrollo, reuniones, mantenimiento y overhead?

*Coste real de una feature:*
- Estimación de tiempo de un equipo de 3 personas (1 backend, 1 frontend, 1 QA) durante 2 sprints
- Cálculo del coste directo de desarrollo
- Adición de costes indirectos: reuniones de planificación, code review, despliegue, documentación
- Adición del coste de oportunidad: ¿qué no se construye mientras se construye esto?
- Coste de mantenimiento futuro: estimación del 20-30% del coste inicial por año

**MÓDULO 2: DECISIONES DE BUILD VS. BUY VS. OPEN SOURCE**

Cuando se plantea una nueva necesidad tecnológica, enseñame a evaluarla financieramente:

*Framework de decisión:*
- Coste de construirlo internamente (desarrollo + mantenimiento)
- Coste de comprarlo (licencia + integración + dependencia del proveedor)
- Coste de usar open source (integración + soporte + riesgo de mantenimiento comunitario)
- Tiempo hasta la primera versión productiva en cada opción

*Análisis de TCO (Total Cost of Ownership):*
- ¿Qué es el TCO y por qué el precio de compra es solo una parte del coste?
- ¿Cómo calcular el TCO a 3 y 5 años para comparar opciones?
- ¿Qué costes ocultos debe considerar: migración de datos, formación del equipo, dependencia tecnológica?

**MÓDULO 3: COSTES DE INFRAESTRUCTURA Y OPTIMIZACIÓN CLOUD**

*FinOps: gestión financiera de la infraestructura cloud:*
- ¿Cómo monitorizar y optimizar el gasto en AWS/GCP/Azure?
- ¿Cuándo usar instancias reservadas vs. on-demand vs. spot instances?
- ¿Cómo detectar recursos infrautilizados o mal dimensionados?
- ¿Cómo establecer alertas de gasto y presupuestos por equipo o servicio?

*Escalabilidad y coste:*
- ¿Cómo modelar el crecimiento del coste de infraestructura frente al crecimiento de usuarios?
- ¿Cuándo es el momento de invertir en optimización de costes técnicos (caché, compresión, arquitectura)?
- ¿Cómo calcular el punto de rentabilidad de migrar de monolito a microservicios?

**MÓDULO 4: DEUDA TÉCNICA COMO PASIVO FINANCIERO**

- ¿Cómo cuantificar la deuda técnica en términos económicos?
- ¿Cómo comunicar el impacto de la deuda técnica a directivos no técnicos?
- Modelo de deuda técnica: coste de corrección ahora vs. coste compuesto si se posterga
- ¿Cómo justificar sprints de refactoring en el presupuesto anual?

**MÓDULO 5: ROI DE LAS INVERSIONES TECNOLÓGICAS**

Para cada inversión técnica importante (nuevo sistema, migración, herramienta), calcula:
- Coste total de implementación
- Ahorro esperado en tiempo de ingeniería o en costes operativos
- Reducción de riesgo (incidents, downtime, brechas de seguridad)
- Tiempo de recuperación de la inversión (payback period)
- NPV (Net Present Value) para inversiones a largo plazo

**ENTREGABLES**
1. Plantilla de presupuesto de ingeniería con todas las categorías de gasto
2. Calculadora de coste real de features con inputs de estimación de tiempo
3. Framework de decisión build/buy/open source con análisis de TCO
4. Guía para presentar inversiones técnicas al board en términos financieros

¿Cuántas personas tiene tu equipo de ingeniería, qué stack tecnológico usas y cuál es tu mayor reto financiero actual como líder técnico?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión del presupuesto de ingeniería y justificación financiera de decisiones técnicas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Finanzas básicas para diseñadores: de freelance a estudio rentable',
                'description'      => 'Aprende los conceptos financieros esenciales para gestionar tu carrera como diseñador: cómo fijar precios, entender tu margen real, llevar un flujo de caja básico y planificar el crecimiento de tu estudio de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en profesionales creativos y estudios de diseño pequeños. Tienes experiencia ayudando a diseñadores gráficos, de producto, UX y de interiores a transformar su talento creativo en un negocio financieramente saludable y sostenible.

**MÓDULO 1: FIJACIÓN DE PRECIOS CON CRITERIO FINANCIERO**

El mayor error financiero de los diseñadores es cobrar sin saber realmente cuánto les cuesta trabajar:

*Calcula tu coste por hora real:*
- ¿Cuántas horas facturables tienes al mes? (descuenta reuniones, gestión, formación, prospección)
- ¿Cuáles son tus gastos fijos mensuales? (alquiler, herramientas, seguros, cuota autónomo)
- ¿Qué ingresos necesitas para cubrir gastos y tener un sueldo digno?
- Fórmula: tarifa mínima = (gastos fijos + sueldo objetivo) / horas facturables mensuales

*Estrategias de pricing para diseñadores:*
- Tarifa por hora: ventajas e inconvenientes, cuándo usar
- Precio por proyecto (fijo): cómo estimar sin quedarte corto
- Precio por valor: cómo cobrar según el valor que aportas al cliente, no el tiempo invertido
- Retainer mensual: ventajas de la recurrencia y cómo estructurar el acuerdo
- ¿Cómo subir precios sin perder clientes existentes?

*Márgenes en diseño:*
- ¿Qué margen bruto debería tener un proyecto de diseño?
- ¿Cómo calcular el margen real de un proyecto después de todos los costes?
- ¿Qué servicios son más rentables y cuáles deberías dejar de ofrecer?

**MÓDULO 2: FLUJO DE CAJA PARA CREATIVOS**

El cash flow es el mayor problema de los diseñadores freelance y de los estudios pequeños:

*Fundamentos del flujo de caja:*
- ¿Qué es el cash flow y por qué es diferente al beneficio?
- ¿Cómo puedo tener beneficio contable pero quedarme sin efectivo?
- ¿Cómo construir una previsión de tesorería sencilla a 3 meses?

*Gestión de cobros:*
- ¿Cómo estructurar los pagos de los proyectos para proteger tu cash flow? (50% adelanto, 25% a mitad, 25% al cierre)
- ¿Qué condiciones de pago son razonables y cómo negociarlas?
- ¿Cómo gestionar los retrasos en el pago sin dañar la relación con el cliente?
- ¿Cuándo y cómo aplicar intereses de demora?

*Reserva de emergencia:*
- ¿Qué cantidad de reserva necesita un freelance de diseño?
- ¿Cómo construir esa reserva sin dejar de invertir en el negocio?

**MÓDULO 3: CUENTA DE RESULTADOS SIMPLIFICADA PARA DISEÑADORES**

Construye tu P&L mensual en 10 minutos:
- Ingresos: suma de todos los proyectos facturados en el mes
- Coste de los servicios: subcontrataciones, ilustraciones compradas, impresión
- Margen bruto: ingresos - coste de servicios
- Gastos fijos: herramientas (Adobe, Figma, etc.), hosting, contable, seguros, cuota autónomo
- Resultado: margen bruto - gastos fijos

¿Qué conclusiones puedes sacar de este análisis mensual?

**MÓDULO 4: PLANIFICACIÓN FINANCIERA DEL CRECIMIENTO**

Si quieres pasar de freelance a estudio o agencia:

*¿Cuándo es el momento de contratar?*
- ¿Qué nivel de ingresos recurrentes justifica la primera contratación?
- ¿Cuánto cuesta realmente un empleado a jornada completa?
- ¿Cuándo es mejor un colaborador freelance que un empleado propio?

*Inversiones en crecimiento:*
- ¿Cuánto invertir en marketing y presencia online como diseñador?
- ¿Cuándo justifica la inversión en herramientas premium o hardware nuevo?
- ¿Cómo evaluar si un curso o formación es una inversión rentable?

*Ahorro e impuestos:*
- ¿Qué porcentaje de los ingresos reservar para impuestos (IVA, IRPF, IS)?
- ¿Qué gastos son deducibles para un diseñador autónomo?
- ¿Cuándo es mejor operar como autónomo vs. como SL?

**ENTREGABLES**
1. Calculadora de tarifa mínima rentable personalizada para tu situación
2. Plantilla de P&L mensual para diseñadores con categorías adaptadas al sector creativo
3. Previsión de cash flow a 3 meses con escenarios de ingresos
4. Checklist financiero de inicio de proyecto para proteger tu rentabilidad

¿Cuántos años llevas como diseñador, cuál es tu especialidad y cuál es tu mayor reto financiero hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Fundamentos financieros para diseñadores freelance y estudios creativos pequeños',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Análisis financiero para vendedores: cómo usar el ROI para cerrar más ventas',
                'description'      => 'Aprende a construir business cases financieros sólidos que hablen el idioma del comprador y justifiquen el precio de tu solución. Convierte tus argumentos de ventas en cálculos de retorno sobre la inversión irrefutables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con formación financiera que ha cerrado contratos B2B de más de 500.000 euros. Tu especialidad es convertir conversaciones de ventas en análisis financieros que hacen obvia la decisión de compra para el cliente. Enséñame a usar el lenguaje del dinero para vender más.

**MÓDULO 1: EL BUSINESS CASE COMO HERRAMIENTA DE VENTA**

El business case es la herramienta más poderosa en ventas complejas porque convierte la decisión de compra en una decisión financiera objetiva:

*¿Qué es un business case de ventas?*
- Un documento que cuantifica el valor económico de tu solución para el cliente específico
- La diferencia entre un argumento de ventas y una justificación financiera
- Por qué los compradores necesitan un business case para obtener aprobación interna
- Cómo el business case te convierte en aliado del cliente y no en vendedor

*Los tres tipos de valor que debes cuantificar:*
- Ahorro de costes: ¿cuánto dinero deja de gastar el cliente con tu solución?
- Incremento de ingresos: ¿cuánto más puede ganar el cliente gracias a ti?
- Reducción de riesgo: ¿qué pérdidas potenciales evita el cliente contigo?

**MÓDULO 2: CÓMO CONSTRUIR UN BUSINESS CASE CONVINCENTE**

*Paso 1: Descubrimiento financiero en la reunión de ventas*
Preguntas que debo hacer para obtener los datos necesarios:
- "¿Cuántas horas semanales dedica tu equipo a [problema que resolvemos]?"
- "¿Cuál es el coste por hora de las personas involucradas?"
- "¿Cuántos clientes perdéis al mes por [problema específico]?"
- "¿Cuál es el ticket medio de un cliente que se pierde?"
- "¿Cuánto os cuesta un error o retraso en [proceso específico]?"

*Paso 2: Cuantificación del problema actual (baseline)*
- Coste del status quo: ¿cuánto cuesta el problema hoy?
- Coste de la inacción: ¿qué pasa si no cambian nada en los próximos 12 meses?
- Coste de oportunidad: ¿qué oportunidades están perdiendo por no tener tu solución?

*Paso 3: Proyección del valor con tu solución*
- Ahorro de tiempo: (horas ahorradas × coste hora × semanas al año)
- Mejora de conversión: (incremento % × pipeline actual × ticket medio × margen)
- Reducción de errores: (errores actuales × coste por error × % reducción esperada)
- Ejemplo de cálculo completo para un software de gestión de proyectos

*Paso 4: Cálculo del ROI y payback period*
- ROI = (Beneficio total obtenido - Inversión) / Inversión × 100
- Payback period = Inversión / Beneficio mensual
- NPV para contratos plurianuales
- ¿Cómo presentar el ROI de forma conservadora para que sea creíble?

**MÓDULO 3: CÓMO PRESENTAR EL BUSINESS CASE AL DECISOR FINANCIERO**

*Estructura de la presentación financiera:*
1. Situación actual: el problema y su coste cuantificado
2. Situación futura: los beneficios proyectados con tu solución
3. Inversión requerida: precio y coste total de implementación
4. ROI y payback period: cuándo empieza a ganar dinero el cliente
5. Riesgos de no actuar: qué pasa si no compran y lo cuantificas

*Cómo manejar objeciones financieras:*
- "Es muy caro" → "¿Podemos ver el coste como porcentaje del beneficio que genera?"
- "No tenemos presupuesto" → "¿Qué pasa si lo planteamos como inversión autofinanciable?"
- "Necesitamos que el CFO lo apruebe" → "¿Puedo acompañarte en esa reunión o prepararte el material?"

*Negociación financiera sin bajar el precio:*
- Cómo ofrecer alternativas de pago (mensualidad vs. anualidad con descuento)
- Cómo usar el ROI para defender tu precio y resistir la presión de descuento
- Cuándo y cómo ofrecer un piloto o prueba de concepto con métricas financieras claras

**MÓDULO 4: HERRAMIENTAS Y PLANTILLAS**

Ayúdame a crear:
- Una calculadora de ROI en formato Excel o Google Sheets que pueda personalizar para cada cliente
- Una plantilla de business case de 1 página para decisores ocupados
- Una guía de preguntas de descubrimiento financiero para mi sector

**ENTREGABLES**
1. Plantilla completa de business case con secciones de situación actual, beneficios, ROI y payback
2. Lista de 20 preguntas de descubrimiento financiero para mi sector
3. Guía de manejo de objeciones de precio con argumentos financieros
4. Calculadora de ROI con las fórmulas más comunes en ventas B2B

¿Cuál es tu producto o servicio, tu ticket medio y el perfil del decisor financiero de tus clientes?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de business cases financieros para cerrar ventas B2B y justificar el precio',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Finanzas para product managers: cómo construir el business case de tu roadmap',
                'description'      => 'Aprende a traducir las decisiones de roadmap en términos financieros: cálculo de impacto en ingresos, análisis de coste-beneficio de features y construcción de modelos de negocio que respalden tus apuestas de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con formación en finanzas corporativas y experiencia en productos SaaS, marketplaces y productos de consumo. Tu objetivo es enseñarme a tomar decisiones de producto con mentalidad financiera y a presentar mi roadmap en términos que el CFO y el CEO comprendan y respalden.

**MÓDULO 1: MÉTRICAS FINANCIERAS CLAVE PARA PRODUCT MANAGERS**

*Métricas de ingresos que todo PM debe dominar:*
- ARR (Annual Recurring Revenue): la métrica estrella del SaaS y cómo se construye
- MRR (Monthly Recurring Revenue): su relación con ARR y cómo impactan tus decisiones
- ARPU/ARPA (Average Revenue Per User/Account): por qué importa más que el volumen de usuarios
- Churn de ingresos (Revenue Churn): ¿cuántos ingresos pierdes cada mes?
- Net Revenue Retention (NRR): el indicador más importante de la salud de un SaaS

*Métricas de rentabilidad:*
- Unit Economics: ¿cada cliente que consigues es rentable?
- LTV:CAC ratio: qué significa y cuál es el umbral saludable (>3:1)
- Gross Margin: cómo tus decisiones de producto afectan al margen
- Contribution Margin por feature o línea de producto

*Métricas de eficiencia de capital:*
- Burn Rate: cuánto dinero gasta la empresa por mes
- Runway: cuántos meses de vida tiene la empresa con el cash actual
- Magic Number: eficiencia de la inversión en ventas y marketing

**MÓDULO 2: CÓMO CONSTRUIR EL BUSINESS CASE DE UNA FEATURE**

Antes de incluir una feature en el roadmap, necesito justificarla financieramente:

*Paso 1: Estimación del impacto en ingresos*
- ¿A cuántos usuarios o clientes afecta esta feature?
- ¿Cuánto puede aumentar la retención? (si churn cae un 2%, ¿cuántos ARR extra?)
- ¿Puede generar upsell o expansión de ingresos?
- ¿Permite captar un segmento de clientes nuevo y cuánto vale ese segmento?
- ¿Cómo modelar la incertidumbre con escenarios conservador, base y optimista?

*Paso 2: Estimación del coste de desarrollo*
- Horas de ingeniería × coste por hora del equipo
- Coste de diseño UX y QA
- Coste de infraestructura adicional si aplica
- Coste de mantenimiento futuro (estimación del 20% anual del coste de desarrollo)

*Paso 3: Análisis coste-beneficio*
- Beneficio total proyectado a 12 meses
- Coste total de implementación
- ROI simple: (beneficio - coste) / coste × 100
- Payback period: en cuántos meses se recupera la inversión
- Decisión: ¿justifica este ROI la prioridad en el roadmap?

**MÓDULO 3: MODELOS DE NEGOCIO Y PRICING DE PRODUCTO**

*Estrategias de monetización y sus implicaciones financieras:*
- Freemium: ¿cuántos usuarios gratuitos necesito para sostener el modelo?
- Suscripción mensual vs. anual: impacto en cash flow y retención
- Modelo por uso (usage-based pricing): ¿cómo predecir ingresos con este modelo?
- Modelo enterprise: por qué el ACV (Annual Contract Value) importa más que el precio mensual

*Experimentos de pricing:*
- ¿Cómo diseñar un experimento de precio sin dañar la base de clientes existente?
- ¿Qué métricas monitorizar en un cambio de precios?
- ¿Cuándo subir precios y cómo comunicarlo?

**MÓDULO 4: COMUNICAR EL ROADMAP EN TÉRMINOS FINANCIEROS**

*Cómo presentar el roadmap al CEO y CFO:*
- Traducir cada iniciativa a impacto en ARR, NRR o reducción de costes
- Mostrar el portfolio del roadmap como una cartera de inversiones con diferente perfil de riesgo/retorno
- Explicar las decisiones de no hacer con argumentos de coste de oportunidad
- Conectar el roadmap con los objetivos financieros anuales de la empresa

*Cómo manejar la pregunta "¿por qué esto y no aquello?"*
- Matriz de priorización con impacto financiero vs. esfuerzo
- Framework de decisión basado en expected value (valor esperado × probabilidad)

**ENTREGABLES**
1. Plantilla de business case de feature con campos de impacto en ingresos, coste y ROI
2. Dashboard de métricas financieras clave de producto para revisar semanalmente
3. Guía para presentar el roadmap en términos de impacto financiero al leadership team
4. Modelo de simulación de pricing con escenarios de ingresos proyectados

¿Cuál es el modelo de negocio de tu producto, en qué etapa está (early stage, growth, mature) y cuál es tu North Star Metric actual?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Justificación financiera de decisiones de roadmap y comunicación del producto en términos de negocio',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del presupuesto de RRHH: cómo justificar la inversión en personas ante la dirección',
                'description'      => 'Aprende a construir y defender el presupuesto de recursos humanos con argumentos financieros: coste de rotación, ROI de la formación, análisis de compensación y métricas de productividad del talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con formación en finanzas corporativas y experiencia en empresas de entre 100 y 2.000 empleados. Tu especialidad es traducir las decisiones de talento a términos financieros que convencen a CFOs y CEOs de invertir en las personas como activo estratégico.

**MÓDULO 1: EL COSTE REAL DEL TALENTO**

*Coste total de un empleado:*
- Salario bruto + cargas sociales + beneficios (seguro médico, tickets restaurante, etc.)
- Equipamiento y herramientas de trabajo
- Formación y onboarding
- Espacio de oficina y overhead
- Coste de manager: qué porcentaje del tiempo de los managers se dedica a gestionar a ese empleado
- Fórmula habitual: el coste total de un empleado es 1,6 a 2,2 veces su salario bruto

*Coste de la rotación de personal:*
- Coste de salida: finiquito, entrevistas de salida, gestión administrativa
- Coste de vacante: horas extras del equipo, proyectos retrasados, clientes desatendidos
- Coste de selección: agencia de reclutamiento (típicamente 15-25% del salario) o tiempo interno del equipo de RRHH
- Coste de onboarding: tiempo del nuevo empleado y del equipo que le forma hasta alcanzar plena productividad
- Coste de curva de aprendizaje: los primeros 3-6 meses de productividad reducida
- Estimación total: la rotación de un empleado cuesta entre 50% y 200% de su salario anual según el rol

¿Cómo usar este dato para justificar inversiones en retención?

*Modelo de ROI de retención:*
Si mejoro la retención y reduzco la rotación un 10%, ¿cuánto dinero ahorra la empresa?
Guíame en el cálculo paso a paso.

**MÓDULO 2: PRESUPUESTO DE FORMACIÓN Y DESARROLLO**

*El ROI de la formación:*
- ¿Cómo medir el impacto financiero de un programa de formación?
- Modelo de Kirkpatrick aplicado a ROI: de la reacción al impacto en negocio
- Ejemplos de ROI de formación en ventas, liderazgo y habilidades técnicas
- ¿Cómo calcular el coste de la brecha de habilidades (skills gap)?

*Cómo estructurar el presupuesto de L&D:*
- ¿Qué porcentaje de los ingresos o del coste de personal debe destinarse a formación?
- ¿Cómo priorizar inversiones en formación según el impacto estratégico?
- ¿Cómo medir si el presupuesto de formación está bien invertido?

**MÓDULO 3: ANÁLISIS DE COMPENSACIÓN Y COMPETITIVIDAD SALARIAL**

*Benchmarking salarial:*
- ¿Cómo acceder a datos de mercado salarial fiables?
- ¿Qué percentil de mercado debe aspirar a ofrecer mi empresa según su propuesta de valor?
- ¿Cómo diseñar bandas salariales que sean equitativas internamente y competitivas externamente?

*Total Compensation vs. solo salario:*
- ¿Cómo comunicar el valor total del paquete retributivo más allá del salario?
- ¿Qué beneficios tienen mayor impacto en retención con menor coste para la empresa?
- ¿Cómo diseñar un sistema de variable y bonus alineado con los resultados de negocio?

*Equidad salarial:*
- ¿Cómo auditar la equidad salarial de género o colectivo de forma rigurosa?
- ¿Cuáles son los riesgos legales y reputacionales de las brechas salariales?

**MÓDULO 4: MÉTRICAS FINANCIERAS DE RRHH (HR ANALYTICS)**

Define el dashboard financiero de RRHH que debes presentar mensualmente a la dirección:
- Coste de personal como porcentaje de ingresos (benchmark por sector)
- Revenue per employee: productividad del talento
- Coste de rotación acumulado en el año
- Inversión en formación per capita
- ROI de selección: tiempo hasta productividad plena del nuevo empleado
- Coste de nómina por departamento y por unidad de negocio

**MÓDULO 5: CÓMO PRESENTAR EL PRESUPUESTO DE RRHH AL CFO**

- ¿Cómo estructurar el presupuesto anual de RRHH con categorías claras?
- ¿Qué argumentos financieros funcionan mejor para justificar inversiones en bienestar, cultura o formación?
- ¿Cómo responder a "¿qué pasa si recortamos el presupuesto de RRHH un 15%?"
- ¿Cómo usar el coste de la rotación para defender programas de retención?

**ENTREGABLES**
1. Calculadora de coste total de rotación personalizable para tu empresa
2. Plantilla de presupuesto anual de RRHH con todas las categorías
3. Dashboard de métricas financieras de RRHH con benchmark del sector
4. Guía de presentación del presupuesto de RRHH al comité de dirección

¿Cuántos empleados tiene tu empresa, en qué sector opera y cuál es tu mayor reto presupuestario actual en RRHH?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión financiera del departamento de RRHH y justificación de inversiones en talento ante la dirección',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación financiera efectiva: cómo explicar el P&L a directivos no financieros',
                'description'      => 'Aprende a traducir la información financiera compleja a un lenguaje accesible para directivos de otras áreas, convirtiendo los números en historias de negocio que generan mejores decisiones en toda la organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con vocación pedagógica que ha pasado años enseñando a directivos de marketing, ventas, operaciones y RRHH a leer e interpretar la información financiera. Tu objetivo es ayudarme a diseñar sesiones de formación financiera y comunicaciones claras que empoderen a los líderes no financieros de mi organización.

**MÓDULO 1: POR QUÉ LA FORMACIÓN FINANCIERA DE NO FINANCIEROS IMPORTA**

- ¿Qué decisiones de negocio mejoran cuando los managers no financieros entienden las finanzas?
- ¿Cuáles son los errores más costosos que cometen los directivos sin formación financiera?
- ¿Cómo cambiar la percepción de las finanzas: de departamento de "policía" a socio estratégico?
- ¿Qué nivel de conocimiento financiero necesita un director de marketing, de ventas o de RRHH?

**MÓDULO 2: CÓMO EXPLICAR LA CUENTA DE RESULTADOS (P&L)**

*Explicación con analogías y casos prácticos:*
- El P&L como la historia financiera de la empresa en un período: no es un juicio, es un diagnóstico
- Analogía del P&L con el presupuesto familiar: ingresos, gastos fijos, gastos variables y ahorro
- La diferencia entre ingresos y cash: por qué puedo tener mucho beneficio y quedarme sin efectivo
- ¿Por qué el EBITDA es tan popular en las reuniones de directivos y qué mide realmente?

*Cómo leer el P&L sin ser contable:*
- Línea 1: Ingresos (ventas brutas) → ¿estamos vendiendo más o menos que el año pasado?
- Coste de ventas / COGS → ¿cuánto nos cuesta producir lo que vendemos?
- Margen bruto → ¿somos eficientes en la entrega de nuestro producto o servicio?
- Gastos operativos (OPEX) → ¿controlamos nuestros gastos de estructura?
- EBITDA → ¿es rentable el negocio antes de efectos contables?
- Resultado neto → ¿lo que queda al final, de verdad ganamos dinero?

*Las 5 preguntas que un directivo no financiero debería hacer al leer el P&L:*
1. ¿Estamos creciendo en ingresos? ¿Por qué sí o por qué no?
2. ¿Está mejorando o empeorando nuestro margen bruto? ¿Qué lo explica?
3. ¿Están bajo control los gastos de estructura? ¿Crecen más rápido que los ingresos?
4. ¿Estamos siendo más o menos rentables que el año pasado? ¿Que el presupuesto?
5. ¿Cuáles son los 3 factores que más han impactado el resultado?

**MÓDULO 3: CÓMO EXPLICAR EL CASH FLOW Y LA TESORERÍA**

- La diferencia entre beneficio y cash: el gran misterio que desconcierta a los no financieros
- Analogía del embudo: ¿por qué una empresa rentable puede quedarse sin dinero?
- Ciclo de conversión de efectivo: de cuándo compramos a cuándo cobramos
- ¿Por qué el crecimiento rápido puede matar a una empresa rentable? (capital circulante)
- ¿Qué decisiones operativas tienen mayor impacto en el cash flow? (plazos de cobro, de pago, inventario)

**MÓDULO 4: EL BALANCE GENERAL EXPLICADO A NON-FINANCIEROS**

- ¿Qué es el balance y para qué sirve? (fotografía de lo que tenemos y lo que debemos)
- Activo: lo que tiene la empresa (lo que posee + lo que le deben)
- Pasivo: lo que debe la empresa (a bancos, proveedores, empleados, Hacienda)
- Patrimonio neto: lo que queda para los dueños
- ¿Cómo leer si una empresa está bien o mal financieramente con el balance? (ratios clave)

**MÓDULO 5: DISEÑO DE SESIONES DE FORMACIÓN FINANCIERA**

Ayúdame a diseñar un programa de formación financiera para directivos no financieros:
- Estructura de una sesión de 2 horas para un equipo directivo
- Ejercicios prácticos con datos reales de la empresa
- Casos de negocio para practicar la interpretación de cifras
- Métricas del dashboard financiero mensual que cada área debe entender

**ENTREGABLES**
1. Glosario financiero con 30 términos explicados en lenguaje sencillo y sin jerga
2. Guía de lectura del P&L en una página con las 5 preguntas clave
3. Programa de formación financiera para directivos: agenda, ejercicios y materiales
4. Plantilla de dashboard financiero mensual diseñada para directivos no financieros

¿Cuál es el perfil de los directivos a los que quieres formar y cuáles son los conceptos financieros que más les cuesta entender?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Formación financiera para directivos no financieros y comunicación efectiva de resultados económicos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Gestión financiera en despachos de abogados: honorarios, rentabilidad y presupuesto',
                'description'      => 'Aprende a gestionar la economía de un despacho de abogados: fijación de honorarios rentables, análisis de rentabilidad por asunto y cliente, gestión del trabajo en curso (WIP) y construcción del presupuesto anual del despacho.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en gestión económica y financiera de despachos de abogados con experiencia en firmas de todos los tamaños, desde boutiques hasta firmas de 50 socios. Conoces la realidad de la práctica legal y los retos únicos de gestionar un negocio profesional de servicios legales.

**MÓDULO 1: FIJACIÓN DE HONORARIOS CON CRITERIO FINANCIERO**

*El gran problema de la fijación de precios en derecho:*
- Por qué muchos abogados cobran menos de lo que deberían y cómo solucionarlo
- La diferencia entre valor para el cliente y coste para el despacho
- Por qué la hora como unidad de facturación tiene limitaciones estructurales

*Cálculo del coste hora real del abogado:*
- Coste total del abogado: salario + cargas + formación + overhead del despacho
- Horas disponibles al año vs. horas facturables reales (típicamente 1.500-1.700 h/año)
- Tarifa mínima de equilibrio: coste total / horas facturables
- Margen objetivo del despacho sobre la tarifa de equilibrio

*Modelos de facturación y su impacto financiero:*
- Por horas (time billing): control exacto pero incentivos perversos
- Tarifa fija por asunto: previsibilidad para el cliente, riesgo para el despacho
- Cuota de éxito (contingency fee): altísimo riesgo, potencialmente muy rentable
- Retainer mensual: ingresos recurrentes predecibles, ideal para asesoría preventiva
- Value billing: cobrar por el valor generado, no por el tiempo invertido
- Modelo híbrido: combinaciones que optimizan el flujo de caja y la rentabilidad

*¿Cómo subir honorarios sin perder clientes?*
- Cuándo y cómo comunicar una subida de tarifas a clientes existentes
- Cómo posicionarse para no competir por precio
- La segmentación de clientes por rentabilidad y cómo priorizar

**MÓDULO 2: RENTABILIDAD POR ASUNTO Y POR CLIENTE**

*Análisis de rentabilidad por asunto:*
- ¿Qué asuntos son más rentables en mi despacho y por qué?
- Cómo calcular la rentabilidad real de un asunto: honorarios cobrados vs. coste de las horas invertidas
- ¿Qué ratio honorarios/coste indica que un asunto fue rentable?
- ¿Cómo identificar los asuntos que consumen recursos sin generar suficiente retorno?

*Análisis de rentabilidad por cliente:*
- ¿Cuáles son mis 20 clientes más rentables y qué tienen en común?
- ¿Tengo clientes que generan pérdidas y no lo sé?
- ¿Cómo medir el valor de un cliente a lo largo del tiempo (LTV del cliente legal)?
- ¿Qué clientes debo priorizar y cuáles dejar ir?

**MÓDULO 3: GESTIÓN DEL TRABAJO EN CURSO (WIP) Y COBROS**

*El problema del WIP en los despachos:*
- ¿Qué es el Work in Progress y por qué acumularlo es peligroso para el cash flow?
- Tiempo promedio entre realización del trabajo y facturación en el sector
- Tiempo promedio entre facturación y cobro efectivo
- ¿Cómo reducir el ciclo de conversión de trabajo a efectivo?

*Gestión proactiva de cobros:*
- ¿Cuándo y cómo facturar para maximizar el cobro puntual?
- Uso de provisiones de fondos y pagos a cuenta para reducir el riesgo
- ¿Cómo gestionar impagados sin dañar la relación con el cliente?
- ¿Cuándo y cómo aplicar intereses de demora?

**MÓDULO 4: PRESUPUESTO ANUAL DEL DESPACHO**

*Construcción del presupuesto:*
- Proyección de ingresos por línea de práctica y por socio responsable
- Presupuesto de gastos fijos: alquiler, personal, seguros, sistemas
- Presupuesto de inversión: tecnología, formación, marketing
- Distribución de beneficios entre socios: modelos de reparto

*KPIs financieros del despacho que debes monitorizar:*
- Tasa de realización: honorarios cobrados / horas registradas
- Tasa de facturación: horas facturadas / horas trabajadas
- Tasa de recaudación: cobros / facturas emitidas
- Días de pendiente de cobro (DSO)
- Beneficio por socio (PEP: Profit per Equity Partner)
- Revenue por abogado

**ENTREGABLES**
1. Calculadora de tarifa hora mínima y rentable para tu despacho
2. Plantilla de análisis de rentabilidad por asunto y por cliente
3. Dashboard de KPIs financieros del despacho para revisión mensual
4. Guía de gestión de cobros con protocolo para cada etapa del retraso

¿Cuántos abogados tiene tu despacho, qué especialidades práctica y cuál es tu principal reto financiero hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión económica integral de despachos de abogados: honorarios, rentabilidad y presupuesto',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Métricas financieras en Customer Success: cómo demostrar el ROI de tu equipo',
                'description'      => 'Aprende a cuantificar el impacto financiero del equipo de Customer Success, calcular el ROI de tus iniciativas de retención y expansión, y presentar resultados económicos que justifiquen la inversión en el departamento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con formación en finanzas corporativas y experiencia liderando equipos de CS en empresas SaaS B2B con ARR de entre 5 y 50 millones de dólares. Tu objetivo es ayudarme a demostrar el valor económico del equipo de Customer Success y a tomar decisiones basadas en datos financieros.

**MÓDULO 1: LAS MÉTRICAS FINANCIERAS CLAVE DE CUSTOMER SUCCESS**

*Métricas de retención:*
- Gross Revenue Retention (GRR): porcentaje de ingresos que retenemos excluyendo expansión
- Net Revenue Retention (NRR): porcentaje de ingresos retenidos incluyendo upsell y churn
- ¿Por qué un NRR > 100% es la señal más poderosa de un negocio SaaS saludable?
- Logo Churn Rate vs. Revenue Churn Rate: cuál usar y cuándo
- Cohort analysis: cómo analizar la retención por cohortes para identificar tendencias

*Métricas de expansión:*
- Expansion MRR: ingresos adicionales de clientes existentes (upsell + cross-sell)
- Net Expansion Rate: cuánto crecen los clientes existentes
- Expansion como porcentaje del ARR total: qué es saludable por etapa de empresa
- ¿Cómo construir un pipeline de expansión con criterios financieros?

*Métricas de eficiencia del equipo de CS:*
- ARR gestionado por CSM: cuánto portfolio puede gestionar un CSM de forma efectiva
- Ratio CS headcount / ARR total: benchmark por tipo de empresa
- Coste de CS como porcentaje del ARR: qué es eficiente en cada fase de crecimiento

**MÓDULO 2: EL ROI DEL EQUIPO DE CUSTOMER SUCCESS**

*¿Cuánto vale un punto de retención?*
Ejercicio: si mi GRR mejora del 85% al 90%:
- ¿Cuántos ARR recupero?
- ¿Cuánto dinero en nuevo ARR equivale ese punto de retención extra?
- ¿Cuánto habría que invertir en nuevas ventas para compensar ese churn?
- Conclusión: por qué retener es generalmente más barato que adquirir

*Cálculo del ROI del equipo de CS:*
- Valor del churn evitado: clientes en riesgo rescatados × ARR promedio por cliente
- Valor de la expansión generada: MRR de upsell y cross-sell atribuido al equipo de CS
- Valor de las referencias generadas: nuevos clientes provenientes de referencias de clientes satisfechos × ACV
- Valor de la reducción del coste de soporte: clientes que aprenden a usar el producto solos
- Total de valor generado vs. coste del equipo de CS

*Modelo de business case para aumentar el equipo de CS:*
- Inversión requerida: salario + overhead de un CSM adicional
- Retorno esperado: aumento de ARR bajo gestión × mejora estimada de retención
- Payback period de contratar un CSM adicional

**MÓDULO 3: ANÁLISIS FINANCIERO POR SEGMENTO DE CLIENTE**

*Segmentación financiera de la base de clientes:*
- ¿Qué segmento de clientes tiene mayor NRR y por qué?
- ¿Cuáles son los clientes más rentables para el negocio teniendo en cuenta el coste de atenderles?
- ¿Cuánto cuesta atender a los clientes del tier más bajo y genera ese coste más retorno del que consume?
- ¿Debería migrar clientes pequeños a un modelo de CS tech-touch o self-serve?

*LTV por segmento:*
- Cómo calcular el LTV ajustado al coste de atención por segmento
- ¿Cómo cambiar el mix de clientes para mejorar la rentabilidad del portfolio?

**MÓDULO 4: CÓMO PRESENTAR LOS RESULTADOS DE CS A LA DIRECCIÓN**

*Construcción del reporte financiero mensual de CS:*
- ARR en riesgo rescatado en el mes
- Expansion MRR generado por el equipo
- NRR actual vs. objetivo vs. período anterior
- Forecast de renovaciones del próximo trimestre con probabilidad ponderada
- Top 5 cuentas en riesgo con plan de acción

*Cómo responder a "¿cuánto genera tu equipo?"*
- Metodología para atribuir valor financiero a las acciones de CS
- Cómo manejar la conversación de "CS no genera revenue, solo gasta"
- Presentación del ROI del equipo al CFO y al CEO

**ENTREGABLES**
1. Calculadora de NRR y GRR con análisis de impacto en ARR anual
2. Modelo de business case para contratar CSMs adicionales con ROI proyectado
3. Dashboard financiero de Customer Success para presentar a la dirección mensualmente
4. Metodología de atribución de valor económico a las iniciativas del equipo de CS

¿Cuál es el ARR de tu empresa, tu NRR actual y cuántas personas tiene el equipo de CS?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cuantificación del impacto financiero del equipo de Customer Success y defensa del presupuesto del departamento',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Gestión financiera para freelancers: de los ingresos caóticos al negocio rentable',
                'description'      => 'Aprende a gestionar las finanzas de tu negocio freelance de forma profesional: presupuesto personal y del negocio, planificación fiscal, reservas de emergencia y cómo pasar de cobrar por hora a construir un negocio escalable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en autónomos y freelancers con experiencia asesorando a profesionales independientes en España y Latinoamérica. Conoces los retos únicos de las finanzas freelance: ingresos irregulares, ausencia de colchón laboral, gestión de impuestos y la dificultad de separar finanzas personales y profesionales.

**MÓDULO 1: LOS FUNDAMENTOS FINANCIEROS DEL FREELANCE**

*El gran error de los freelancers con las finanzas:*
- Por qué mezclar finanzas personales y profesionales es el primer error fatal
- Cómo abrir una cuenta bancaria separada para el negocio desde el primer día
- Qué es una cuenta de resultados simplificada y por qué debes tenerla actualizada mensualmente
- Por qué el dinero en cuenta NO es todo tuyo (Hacienda quiere su parte)

*Ingresos irregulares: cómo vivir con ellos sin estrés:*
- Cómo calcular tu "sueldo" mensual sostenible basado en los ingresos reales de los últimos 12 meses
- El método del sueldo fijo: transferirte a tu cuenta personal una cantidad fija cada mes
- Cómo gestionar los meses de vacas gordas (ahorrar en lugar de gastar)
- Cómo sobrevivir los meses de vacas flacas sin deudas

**MÓDULO 2: FISCALIDAD PARA FREELANCERS**

*Cómo funciona la fiscalidad del autónomo (España):*
- IVA: cuándo cobrar IVA, cuándo no, cómo y cuándo liquidarlo (trimestral)
- IRPF: retenciones en facturas, pagos fraccionados trimestrales, declaración anual
- Cuota de autónomo a la Seguridad Social: cálculo por base de cotización
- ¿Qué gastos son deducibles para un freelance? (lista completa y criterios)

*Planificación fiscal inteligente:*
- ¿Cuánto dinero reservar para impuestos cada vez que cobro una factura? (regla del 30-35%)
- Cuenta separada de impuestos: el método que evita sorpresas en las liquidaciones trimestrales
- ¿Cuándo es rentable pasar de autónomo a SL?
- ¿Cómo planificar gastos deducibles a final de año para reducir la base imponible?

*Gastos deducibles más habituales en freelance:*
- Material de oficina, hardware, software y suscripciones profesionales
- Gastos de formación y desarrollo profesional
- Cuota de teléfono e internet (parcialmente)
- Gastos de marketing y publicidad del negocio
- Asesor fiscal y contable
- Viajes y dietas relacionados con el negocio

**MÓDULO 3: ESTRUCTURA FINANCIERA DEL NEGOCIO FREELANCE**

*La cuenta de resultados del freelance:*
- Ingresos del mes: suma de todas las facturas emitidas y cobradas
- Gastos deducibles del mes: todos los costes del negocio
- Beneficio antes de impuestos: ingresos - gastos
- Provisión para impuestos: 30-35% del beneficio
- Sueldo disponible: lo que puedes transferirte a tu cuenta personal

*Las cinco cuentas que todo freelance debería tener:*
1. Cuenta del negocio: donde cobras facturas y pagas gastos de empresa
2. Cuenta de impuestos: donde acumulas el 30-35% de cada cobro
3. Cuenta de emergencia: 3-6 meses de gastos fijos como colchón
4. Cuenta de inversión: donde guardas para tu jubilación o para crecer
5. Cuenta personal: donde te "pagas" tu sueldo mensual

**MÓDULO 4: PRICING Y RENTABILIDAD**

*Cómo saber si cobras suficiente:*
- Calcula tus gastos fijos mensuales totales (personales + profesionales)
- Define el sueldo neto que quieres llevarte a casa
- Estima tus impuestos mensuales esperados
- Calcula cuántos ingresos brutos necesitas generar para cubrir todo lo anterior
- Divide entre tus horas facturables mensuales: esta es tu tarifa mínima de supervivencia

*El problema de cobrar por hora y cómo salir de él:*
- Por qué el modelo por hora crea un techo de ingresos insuperable
- Alternativas: precio por proyecto, por valor, retainer mensual, productos digitales
- Cómo calcular el precio de un proyecto fijo sin quedarte corto
- Cómo construir ingresos recurrentes como freelance

**MÓDULO 5: PLANIFICACIÓN FINANCIERA A LARGO PLAZO**

- Jubilación: por qué el autónomo debe ahorrar para su retiro más que nadie y cómo hacerlo
- Seguro de incapacidad: el seguro que más necesitas y que pocos contratan
- ¿Cuándo es el momento de contratar a alguien y cómo afecta a tus finanzas?
- ¿Cómo escalar ingresos más allá del tiempo que puedes trabajar?

**ENTREGABLES**
1. Plantilla de cuenta de resultados mensual para freelancers en Google Sheets
2. Calculadora de tarifa mínima sostenible basada en tu situación personal
3. Guía de gastos deducibles para freelancers con ejemplos prácticos
4. Plan de acción financiero a 90 días para ordenar tus finanzas como freelance

¿Cuál es tu disciplina profesional, cuánto tiempo llevas como freelance y cuál es tu mayor dolor financiero hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión financiera integral del negocio freelance: impuestos, presupuesto, precios y planificación',
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
