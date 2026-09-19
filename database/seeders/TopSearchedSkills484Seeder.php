<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills484Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis de ROI y presupuesto de marketing con IA',
                'description'       => 'Aprende a usar Claude para analizar el retorno de inversión de tus campañas de marketing, optimizar la asignación de presupuesto y generar informes financieros que justifiquen cada euro gastado.',
                'prompt_content'    => <<<'EOT'
Eres un experto en análisis financiero de marketing. Necesito que me ayudes a evaluar el rendimiento económico de mis campañas y tomar decisiones de presupuesto más inteligentes usando IA.

**Contexto de mi situación:**
Trabajo en el departamento de marketing de una empresa mediana. Gestionamos un presupuesto mensual de publicidad digital distribuido entre Google Ads, Meta Ads, LinkedIn y email marketing. Cada fin de mes debo presentar un informe a dirección justificando cada partida del presupuesto.

**instrucción principal:**
Actúa como mi analista financiero de marketing. Voy a compartirte los datos de rendimiento de mis campañas del último trimestre y necesito que:

1. Calcules el ROI real de cada canal publicitario (ingresos atribuidos menos coste dividido entre coste).
2. Identifiques qué canales están por debajo del umbral de rentabilidad mínimo del 150% de ROI.
3. Generes una propuesta de reasignación presupuestaria para el próximo trimestre.
4. Crees un modelo de forecast basado en los datos históricos.
5. Redactes el resumen ejecutivo del informe financiero de marketing.

**Datos de entrada que te proporcionaré:**
- Coste total por canal (mensual)
- Leads generados por canal
- Tasa de conversión de lead a cliente
- Ticket medio por canal
- Coste de adquisición de cliente (CAC) histórico

**tarea de análisis financiero:**
Para cada canal, quiero que calcules:
- ROI = ((Ingresos generados - Inversión) / Inversión) × 100
- ROAS (Return on Ad Spend)
- CAC (Coste de Adquisición de Cliente)
- LTV/CAC ratio si me proporcionas el valor de vida del cliente
- Payback period (en meses)

**objetivo del forecast trimestral:**
Proyecta los resultados esperados para el próximo trimestre asumiendo tres escenarios:
- Escenario conservador: mismo presupuesto actual
- Escenario optimista: incremento del 20% focalizado en canales de mejor ROI
- Escenario eficiente: reducción del 10% eliminando canales deficitarios

**Formato del informe ejecutivo:**
Estructura el informe en estas secciones:
1. Resumen de KPIs financieros del trimestre
2. Análisis de rentabilidad por canal
3. Hallazgos clave y señales de alerta
4. Recomendaciones de reasignación presupuestaria
5. Proyecciones para el próximo trimestre
6. Próximos pasos prioritarios

**Criterios de decisión para la reasignación:**
- Priorizar canales con ROI > 200% y CAC decreciente
- Mantener inversión mínima en canales de brand awareness aunque el ROI inmediato sea menor
- Proponer experimentos de presupuesto pequeño en nuevos canales si hay margen
- Justificar cada recomendación con datos, no con intuición

**Preguntas adicionales que quiero que respondas:**
- ¿Qué métricas de marketing debería trackear mensualmente para detectar problemas financieros antes?
- ¿Cómo puedo mejorar la atribución de ingresos en un customer journey multicanal?
- ¿Qué herramientas complementan mejor a la IA para la gestión financiera de marketing?

Cuando tengas toda la información que necesites de mis datos, comienza el análisis de forma sistemática. Si falta algún dato crítico, indícame exactamente qué necesitas antes de empezar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis de ROI de campañas y optimización de presupuesto de marketing con soporte de IA',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de conciliación bancaria con IA',
                'description'       => 'Usa Claude para desarrollar scripts y lógica de negocio que automaticen la conciliación bancaria, detecten discrepancias y generen reportes de auditoría de forma programática.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador senior especializado en sistemas financieros y automatización de procesos contables. Necesito tu ayuda para construir un sistema de conciliación bancaria automatizada usando Python y la API de Claude.

**Contexto del proyecto:**
La empresa donde trabajo realiza más de 500 transacciones diarias. El proceso de conciliación bancaria actual es completamente manual: un contable descarga el extracto del banco en CSV, lo compara con el libro mayor del ERP (también exportado en CSV) y marca manualmente cada transacción como conciliada o discrepante. Este proceso toma 3-4 horas diarias y tiene una tasa de error del 8%.

**objetivo principal del sistema:**
Diseña la arquitectura y escribe el código base de un sistema de conciliación bancaria que:

1. Ingeste automáticamente los extractos bancarios en múltiples formatos (CSV, OFX, MT940).
2. Compare inteligentemente cada transacción del banco con las del libro mayor, tolerando diferencias de fechas y pequeñas variaciones de importes por redondeos.
3. Aplique reglas de negocio configurables para casos especiales (comisiones bancarias, retenciones, pagos fraccionados).
4. Genere un informe de discrepancias que categorice automáticamente cada diferencia.
5. Aprenda de las decisiones previas del contable para mejorar las sugerencias de conciliación.

**instrucción de arquitectura:**
Diseña el sistema con estos componentes:
- Parser de extractos bancarios (módulo Python con soporte multi-formato)
- Motor de matching basado en reglas configurables y similitud semántica
- API de Claude integrada para analizar discrepancias complejas y sugerir resoluciones
- Base de datos SQLite para almacenar el historial de conciliaciones
- Generador de informes en PDF y Excel
- Interfaz de línea de comandos simple

**tarea de matching inteligente:**
El algoritmo de conciliación debe considerar:
- Coincidencia exacta de importe y fecha (alta confianza)
- Coincidencia de importe con diferencia de hasta 3 días en fechas (confianza media)
- Coincidencia aproximada de importe (±0.01€ por redondeos) con misma fecha (alta confianza)
- Transacciones del banco sin contrapartida en libro mayor (discrepancia a investigar)
- Pagos fraccionados: una transacción del banco que corresponde a múltiples asientos del libro mayor
- Asientos del libro mayor sin movimiento bancario correspondiente en ±7 días

**Código base que necesito:**
Escribe el esqueleto completo del proyecto con:
- Estructura de carpetas y archivos
- Clase `BankStatement` con métodos de parsing
- Clase `LedgerEntry` para los asientos del ERP
- Clase `ReconciliationEngine` con el motor de matching
- Función `call_claude_for_analysis(discrepancies)` que use la API de Claude para analizar casos ambiguos
- Script principal `reconcile.py` con argumentos de CLI
- Archivo de configuración YAML para las reglas de negocio

**Formato de los informes:**
El informe de conciliación debe incluir:
- Resumen estadístico (total transacciones, porcentaje conciliado, importe total de discrepancias)
- Lista de transacciones conciliadas automáticamente con nivel de confianza
- Lista de discrepancias categorizadas por tipo
- Sugerencias de resolución generadas por Claude para cada discrepancia
- Log de auditoría con timestamp de cada decisión

**Preguntas técnicas adicionales:**
- ¿Qué biblioteca Python recomiendas para parsear el formato MT940?
- ¿Cómo implementar el fuzzy matching de descripciones de transacciones?
- ¿Cuál es la mejor estrategia para manejar transacciones en moneda extranjera?
- ¿Cómo hacer el sistema extensible para conectar con APIs bancarias en tiempo real?

Incluye ejemplos de datos de prueba y tests unitarios básicos para el motor de matching.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Desarrollo de sistema de conciliación bancaria automatizada con Python y Claude API',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de reportes financieros visuales con IA',
                'description'       => 'Aprende a usar Claude para crear dashboards y reportes financieros visualmente efectivos, eligiendo los gráficos correctos para cada tipo de dato y comunicando información contable de forma clara.',
                'prompt_content'    => <<<'EOT'
Eres un experto en diseño de información y visualización de datos financieros. Necesito que me ayudes a crear reportes contables y dashboards que comuniquen la salud financiera de forma visualmente clara y profesional.

**Mi situación actual:**
Soy diseñador en una agencia que trabaja con clientes del sector financiero y contable. Me piden crear dashboards mensuales, reportes anuales y presentaciones para inversores. El problema es que los datos financieros son complejos y mis clientes quieren que sean comprensibles para personas sin formación contable.

**instrucción principal de diseño:**
Actúa como mi consultor de diseño de información financiera. Para cada tipo de reporte que te describa, ayúdame a:

1. Seleccionar el tipo de gráfico más adecuado para cada métrica financiera.
2. Definir la jerarquía visual del dashboard (qué va primero y por qué).
3. Elegir paletas de colores que transmitan el estado financiero (verde para positivo, rojo para alertas, neutros para contexto).
4. Diseñar la estructura de los KPIs más importantes en tarjetas de resumen.
5. Crear las especificaciones de diseño que pueda entregar al equipo de desarrollo.

**tarea de arquitectura visual de reportes:**
Para un reporte financiero mensual, necesito que definas:
- La página de portada con los 5-7 KPIs más críticos
- El módulo de ingresos y gastos (comparativa mes actual vs mes anterior vs presupuesto)
- El módulo de flujo de caja con proyección de 90 días
- El módulo de márgenes por línea de negocio
- La sección de alertas y semáforos financieros
- El pie de página con notas metodológicas

**objetivo de comunicación con diferentes audiencias:**
Diseña versiones del mismo reporte para:
- CEO / Dirección General: una sola página con los KPIs más estratégicos, sin detalles técnicos
- CFO / Director Financiero: versión completa con todos los detalles y comparativas
- Inversores externos: formato de presentación con narrativa visual clara y benchmarks del sector
- Equipos operativos: versión simplificada con solo las métricas relevantes para su área

**Convenciones de visualización financiera:**
Explícame las mejores prácticas para representar visualmente:
- La cuenta de resultados (P&L) de forma comprensible
- El balance de situación con waterfall charts
- El flujo de caja operativo, de inversión y financiero
- Las ratios financieras (liquidez, solvencia, rentabilidad) en gauges o semáforos
- La evolución del EBITDA a lo largo del tiempo con barras de waterfall
- La comparativa presupuesto vs real con varianzas destacadas

**Especificaciones técnicas para el equipo:**
Cuando me des recomendaciones de diseño, incluye:
- Tipo de gráfico específico (bar chart, line chart, waterfall, etc.)
- Dimensiones recomendadas para cada visualización
- Interactividad necesaria (filtros, tooltips, drill-down)
- Paleta de colores hexadecimal completa
- Tipografía recomendada para números financieros (monoespaciada para alineación)
- Accesibilidad: contraste mínimo y alternativas para daltonismo

**Pregunta de partida:**
Empecemos por el caso más común: un dashboard ejecutivo mensual para una empresa de 50 empleados del sector retail. ¿Cuáles son los 6 KPIs financieros que no pueden faltar y cómo los representarías visualmente para que el CEO entienda en 30 segundos el estado de la empresa?
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de dashboards y reportes financieros visualmente efectivos para distintas audiencias',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Previsión de ingresos y comisiones de ventas con IA',
                'description'       => 'Utiliza Claude para construir modelos de forecast de ventas, calcular comisiones de forma precisa y generar análisis de pipeline que ayuden al equipo comercial a alcanzar sus objetivos financieros.',
                'prompt_content'    => <<<'EOT'
Eres un experto en operaciones de ventas y análisis financiero comercial. Necesito que me ayudes a crear sistemas de previsión de ingresos y gestión de comisiones más precisos y transparentes para mi equipo de ventas.

**Contexto de mi equipo:**
Dirijo un equipo de 12 comerciales con territorios asignados. Vendemos software B2B con contratos anuales (ARR). El ciclo de ventas es de 45-90 días. Tenemos tres planes de comisiones diferentes según el perfil del vendedor. El problema principal es que los forecast mensuales tienen un margen de error del 30% y los vendedores no confían en los cálculos de comisiones porque el proceso es opaco.

**instrucción de forecast de ingresos:**
Actúa como mi analista de Revenue Operations. Necesito que me ayudes a:

1. Diseñar un modelo de forecast basado en el estado actual del pipeline con ponderación por etapa de ventas.
2. Calcular la probabilidad de cierre ponderada para cada oportunidad según datos históricos.
3. Generar tres escenarios de forecast: pesimista (50% confianza), base (70% confianza) y optimista (90% confianza).
4. Identificar qué oportunidades del pipeline tienen mayor riesgo de perderse este trimestre.
5. Detectar patrones en las ventas perdidas para mejorar las previsiones futuras.

**tarea de modelo de comisiones:**
Diseña un sistema de cálculo de comisiones que sea transparente y auditable:
- Base: 5% sobre ARR para contratos hasta 20.000€/año
- Acelerador: 8% para contratos entre 20.001€ y 50.000€/año
- Acelerador premium: 12% para contratos superiores a 50.000€/año
- Bonus trimestral: 15% adicional si se supera el 110% de la cuota trimestral
- Clawback: si el cliente cancela en los primeros 6 meses, se descuenta el 50% de la comisión pagada

**objetivo de transparencia del proceso:**
Para cada vendedor, genera un informe mensual que muestre:
- Comisiones ganadas en el mes por cada contrato
- Comisiones en riesgo (clawback pendiente)
- Proyección de comisiones del trimestre basada en pipeline actual
- Comparativa de rendimiento vs cuota (%)
- Posición en el ranking del equipo (percentil)

**Análisis de pipeline que necesito:**
Para el pipeline actual, quiero que analices:
- Oportunidades con más de 60 días en la misma etapa (estancadas)
- Deals sin actividad registrada en los últimos 14 días
- Contratos con descuento excesivo (>25%) que reducen el ARR real
- Oportunidades con fecha de cierre en el trimestre actual pero etapa < 50%
- Clientes con señales de churn que podrían cancelar antes del renewal

**Métricas financieras del equipo comercial:**
Ayúdame a calcular y analizar:
- ARR new business vs ARR expansion vs ARR churned
- Net Revenue Retention (NRR) del trimestre
- Average Contract Value (ACV) por vendedor y por segmento
- Win rate por etapa del funnel
- Sales Velocity = (Oportunidades × Win Rate × ACV) / Ciclo de ventas en días

**Formato del informe semanal de ventas:**
Estructura el informe ejecutivo semanal de ventas con:
1. Headline: cuánto hemos cerrado esta semana vs objetivo semanal
2. Pipeline health: estado del forecast para el cierre del trimestre
3. Top 5 oportunidades a cerrar esta semana
4. Alertas: oportunidades en riesgo que necesitan acción inmediata
5. Comisiones acumuladas del trimestre por comercial

Cuando tengas el modelo construido, ayúdame también a crear la presentación del forecast para el comité de dirección mensual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Forecast de ventas, cálculo de comisiones y análisis de pipeline para equipos comerciales B2B',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de presupuesto de producto con IA',
                'description'       => 'Aprende a usar Claude para gestionar el presupuesto de tu producto digital, priorizar la inversión en features según su impacto financiero y comunicar decisiones de gasto al equipo directivo.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión financiera de productos digitales y en toma de decisiones de inversión basadas en datos. Necesito que me ayudes a gestionar el presupuesto de desarrollo de mi producto de manera más estratégica y justificada.

**Mi situación como Product Manager:**
Gestiono un producto SaaS B2B con un presupuesto trimestral de desarrollo de 280.000€ (incluyendo salarios del equipo, infraestructura y licencias). Tengo un backlog de 47 funcionalidades pendientes y necesito priorizar cuáles construir este trimestre justificando el ROI esperado de cada una.

**instrucción de framework de priorización financiera:**
Actúa como mi analista financiero de producto. Ayúdame a crear un framework de priorización que combine:

1. Impacto en ingresos: ¿Esta feature permite subir precios, reducir churn o abrir nuevos segmentos?
2. Coste de desarrollo estimado: horas de ingeniería × coste horario del equipo
3. Tiempo de retorno de la inversión: cuántos meses hasta recuperar el coste de desarrollo
4. Coste de oportunidad: qué dejamos de construir si priorizamos esta feature
5. Riesgo técnico: probabilidad de que la estimación de desarrollo se dispare

**tarea de análisis de ROI por feature:**
Para cada funcionalidad del backlog, quiero calcular:
- Coste total de desarrollo (estimación en horas × €/hora)
- Incremento de ingresos esperado (clientes adicionales × ACV, o reducción de churn × ARR en riesgo)
- ROI a 12 meses = (Ingresos adicionales anuales - Coste desarrollo) / Coste desarrollo
- Payback period en meses
- Score de prioridad = ROI × (1 / Riesgo técnico) × Urgencia estratégica

**objetivo de gestión presupuestaria trimestral:**
Ayúdame a estructurar el presupuesto en estas categorías:
- Desarrollo de nuevas features (60% del presupuesto)
- Deuda técnica y refactoring (15% del presupuesto)
- Mejoras de performance e infraestructura (15% del presupuesto)
- Experimentación y spikes de investigación (10% del presupuesto)

Para cada categoría, necesito justificaciones financieras: el coste de NO invertir en deuda técnica, el impacto de la latencia en la retención de clientes, etc.

**Plantilla de propuesta de inversión en feature:**
Diseña una plantilla que yo pueda usar para cada propuesta de inversión importante:
- Descripción del problema que resuelve
- Solución propuesta y scope del MVP
- Estimación de esfuerzo de desarrollo (en puntos de historia o días)
- Coste total estimado (con rango optimista/pesimista)
- Ingresos esperados: clientes target × probabilidad de conversión × ACV
- Métricas de éxito y cómo medirlas
- Riesgos y plan de mitigación
- Recomendación: construir, comprar (SaaS de terceros) o esperar

**Análisis de build vs buy vs partner:**
Ayúdame a crear un árbol de decisión para saber cuándo construir internamente, cuándo comprar una solución SaaS y cuándo buscar un partner de integración. Considera:
- Complejidad técnica de la funcionalidad
- Diferenciación competitiva que aporta
- Coste de mantenimiento a largo plazo
- Velocidad al mercado (time-to-market)
- Dependencia estratégica del tercero

**Comunicación financiera a stakeholders:**
Dame las plantillas de comunicación para:
- Presentación trimestral de presupuesto al CEO (máximo 1 página)
- Justificación de sobrecostes cuando una feature se sale del presupuesto
- Informe mensual de inversión en producto vs resultados de negocio
- Propuesta de incremento de presupuesto para el próximo trimestre

Empieza con la plantilla de priorización financiera de backlog y luego construimos el resto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Priorización financiera del backlog de producto y justificación de inversión en desarrollo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de nóminas y compensaciones con IA',
                'description'       => 'Usa Claude para optimizar la gestión de nóminas, diseñar estructuras de compensación competitivas, analizar la equidad salarial y comunicar cambios retributivos de forma efectiva.',
                'prompt_content'    => <<<'EOT'
Eres un experto en compensación y beneficios (Compensation & Benefits) con profundo conocimiento de legislación laboral española y mejores prácticas de gestión de nóminas. Necesito tu ayuda para profesionalizar la gestión retributiva de nuestra empresa.

**Contexto de nuestra empresa:**
Empresa tecnológica de 85 empleados en España. Tenemos tres categorías: ingeniería (30 personas), ventas (25 personas) y operaciones/administración (30 personas). Actualmente los salarios se han negociado individualmente sin una estructura clara, lo que ha generado inequidades detectadas en la última encuesta de clima. El 23% de la plantilla considera que su retribución es injusta respecto a compañeros.

**instrucción de diseño de estructura salarial:**
Actúa como mi consultor de Compensation & Benefits. Ayúdame a:

1. Diseñar una estructura de bandas salariales por nivel y área (Junior, Mid, Senior, Lead, Manager, Director).
2. Definir los criterios de valoración de puestos para ubicar cada rol en la banda correcta.
3. Establecer el mix retributivo óptimo: salario fijo, variable, beneficios y equity.
4. Crear el proceso de revisión salarial anual basado en rendimiento y mercado.
5. Diseñar el plan de comunicación de la nueva estructura a toda la plantilla.

**tarea de análisis de equidad salarial:**
Para detectar y corregir inequidades, necesito que me ayudes a:
- Calcular el ratio de equidad salarial por género para cada banda y área
- Identificar empleados que están por debajo del percentil 25 de su banda (underpaid)
- Identificar empleados que superan el máximo de su banda (out-of-range)
- Calcular el coste de corrección de inequidades y priorizarlo
- Diseñar el plan de corrección salarial en 3 años con impacto presupuestario controlado

**objetivo de benchmarking de mercado:**
Ayúdame a construir el proceso de benchmarking retributivo:
- Fuentes de datos de mercado fiables para el sector tech en España (Glassdoor, LinkedIn Salary, Mercer, Hay Group)
- Metodología para comparar correctamente: empresa equivalente, rol equivalente, región equivalente
- Cómo interpretar los percentiles de mercado (P25, P50, P75, P90)
- Posición retributiva objetivo de la empresa (¿queremos pagar en P50 o P75 del mercado?)
- Frecuencia de actualización del benchmarking

**Estructura del paquete retributivo total:**
Diseña el Total Rewards Package recomendado para nuestra empresa:
- Salario fijo según banda y mercado
- Variable anual: % del salario fijo según nivel, ligado a OKRs individuales y empresa
- Beneficios: seguro médico, tickets restaurante, formación, flexibilidad horaria
- Opciones sobre acciones (stock options) para niveles Senior+
- Beneficios de bienestar: días extra de vacaciones, seguro de vida, plan de pensiones

**Comunicación de cambios retributivos:**
Dame plantillas de comunicación para:
- Email de anuncio de la nueva estructura de bandas a toda la empresa
- Carta individual de reposicionamiento salarial (para los que cambian de banda)
- Script para la conversación del manager con el empleado sobre su salario
- FAQ para empleados sobre las preguntas más frecuentes de la nueva política
- Presentación al comité de dirección del impacto presupuestario total

**Cumplimiento legal y auditoría:**
Qué aspectos legales debo considerar en España:
- Obligación de registro retributivo según la Ley de Igualdad
- Auditoría retributiva obligatoria para empresas de más de 50 personas
- Criterios del Plan de Igualdad en materia retributiva
- Documentación necesaria para una inspección de trabajo

Comienza con el diseño de las bandas salariales para ingeniería y dame la metodología que usarías.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de estructura salarial, análisis de equidad retributiva y gestión de compensaciones con IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Forecast de tesorería y flujo de caja con IA',
                'description'       => 'Aprende a usar Claude para construir modelos de previsión de tesorería, detectar riesgos de liquidez con antelación y optimizar la gestión del capital circulante de tu empresa.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de tesorería corporativa y planificación financiera. Necesito que me ayudes a construir un sistema de forecast de flujo de caja robusto que me permita anticipar problemas de liquidez y tomar decisiones de financiación con suficiente antelación.

**Situación actual de la empresa:**
Empresa industrial con facturación de 8 millones de euros anuales. Tenemos cobros con plazo medio de 60 días (algunos clientes nos pagan a 90 días) y pagos a proveedores a 30 días. La estacionalidad es marcada: el 40% de la facturación se concentra en el segundo semestre. Actualmente gestionamos la tesorería con una hoja de Excel que solo cubre los próximos 30 días y en dos ocasiones hemos tenido tensiones de liquidez imprevistas que nos obligaron a usar la línea de crédito de emergencia.

**instrucción del modelo de forecast:**
Actúa como mi director de tesorería virtual. Ayúdame a:

1. Diseñar un modelo de forecast de flujo de caja a 13 semanas (rolling forecast semanal).
2. Establecer las categorías de cobros y pagos más importantes a trackear.
3. Calcular el nivel mínimo de caja operativa necesario como colchón de seguridad.
4. Definir los indicadores de alerta temprana de tensión de liquidez.
5. Crear el proceso semanal de actualización y revisión del forecast.

**tarea de categorización de flujos:**
Organiza los flujos de caja en esta estructura:

Cobros operativos:
- Cobros de clientes nacionales (por vencimiento de facturas)
- Cobros de clientes internacionales
- Anticipos de clientes en proyectos grandes
- Cobros de devoluciones de IVA

Pagos operativos:
- Pagos a proveedores de materiales
- Nóminas y seguridad social (días 5 y 25 de cada mes)
- Alquileres e instalaciones
- Servicios recurrentes (seguros, mantenimiento, suministros)
- Impuestos trimestrales (IVA, retenciones IRPF, pagos fraccionados IS)

Flujos financieros:
- Cuotas de préstamos bancarios
- Disposiciones y devoluciones de líneas de crédito
- Cobros de intereses de inversiones de tesorería

**objetivo del análisis de liquidez:**
Para cada semana del forecast, quiero saber:
- Saldo de caja inicial
- Total cobros previstos (por categoría)
- Total pagos previstos (por categoría)
- Saldo de caja final
- Variación respecto al mínimo operativo
- Semáforo: verde (>30 días de cobertura), amarillo (15-30 días), rojo (<15 días)
- Acción recomendada si el semáforo está en amarillo o rojo

**Optimización del capital circulante:**
Ayúdame a analizar y mejorar:
- Días de cobro a clientes (DSO): ¿cómo reducirlos de 60 a 45 días?
- Días de pago a proveedores (DPO): ¿podemos negociar más plazo?
- Días de inventario (DIO): ¿qué nivel de stock es financieramente óptimo?
- Capital circulante neto = Clientes + Inventario - Proveedores
- Ciclo de conversión de efectivo = DSO + DIO - DPO

**Análisis de escenarios de tensión:**
Simula estos escenarios de estrés y su impacto en la liquidez:
- Un cliente grande (20% de la facturación) retrasa el pago 30 días adicionales
- Caída de ventas del 25% durante 2 meses
- Un proveedor clave exige pago anticipado del 50% de los pedidos
- Una avería importante en producción que requiere inversión urgente de 150.000€

**Plan de contingencia de liquidez:**
Para cada nivel de alerta, define las acciones de respuesta:
- Nivel amarillo: acciones preventivas (confirming a clientes, descuento pronto pago)
- Nivel rojo: acciones urgentes (disponer línea de crédito, negociar aplazamiento de pagos)
- Nivel crítico: plan de emergencia (factoring, préstamo puente, negociación con proveedores clave)

**Informe de tesorería para dirección:**
Diseña el informe semanal de tesorería de una sola página con:
- Saldo actual de caja y equivalentes
- Forecast a 4 semanas con gráfico
- Semáforo de liquidez actual
- 3 principales riesgos de liquidez identificados
- Acciones en curso y sus plazos

Empieza diseñando la estructura del modelo de forecast a 13 semanas con los campos exactos que necesito trackear.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construcción de modelo de forecast de tesorería y gestión de liquidez empresarial con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Optimización fiscal y cumplimiento tributario con IA',
                'description'       => 'Utiliza Claude para analizar obligaciones fiscales, identificar oportunidades de optimización tributaria dentro de la legalidad y automatizar la documentación de cumplimiento fiscal empresarial.',
                'prompt_content'    => <<<'EOT'
Eres un experto en derecho tributario español y en planificación fiscal empresarial. Necesito que me ayudes a asegurar el cumplimiento de todas las obligaciones fiscales de mi empresa y a identificar oportunidades de optimización fiscal dentro del marco legal vigente.

**Descripción de la empresa:**
Sociedad Limitada española, régimen general de Impuesto de Sociedades. Actividad: servicios de consultoría tecnológica. Facturación: 1,2 millones de euros. Dos socios al 50%. Empleados: 8 personas en nómina. IVA mensual. Operaciones intracomunitarias con clientes de la UE. Gastos importantes en I+D y formación de empleados.

**instrucción principal de análisis fiscal:**
Actúa como mi asesor fiscal virtual. Ayúdame a:

1. Crear el calendario fiscal completo del ejercicio con todas las obligaciones y sus plazos.
2. Identificar las deducciones fiscales a las que tenemos derecho en el Impuesto de Sociedades.
3. Revisar si la estructura societaria actual es fiscalmente eficiente.
4. Detectar riesgos de inspección fiscal por las características de nuestra actividad.
5. Diseñar el proceso de documentación fiscal que reduzca el riesgo ante una inspección.

**tarea de calendario fiscal completo:**
Genera el calendario fiscal mensual para una SL española con estas obligaciones:
- Obligaciones mensuales (IVA, retenciones IRPF, pagos a cuenta)
- Obligaciones trimestrales (modelo 115, 130, 303, 349, 111)
- Obligaciones anuales (modelo 200 IS, modelo 347 operaciones con terceros, declaraciones informativas)
- Obligaciones específicas para operaciones intracomunitarias (modelo 349 mensual o trimestral)

**objetivo de identificación de deducciones del IS:**
Analiza si podemos aplicar estas deducciones y qué documentación necesitamos:
- Deducción por actividades de I+D+i (artículo 35 LIS): ¿nuestros proyectos de desarrollo de software cumplen los requisitos?
- Deducción por creación de empleo
- Deducción por inversión en vehículos eléctricos y cargadores
- Reserva de capitalización: ¿nos conviene reducir la base imponible con esta reserva?
- Deducción por doble imposición internacional en los cobros de clientes de la UE
- Libertad de amortización para inversiones en activos tecnológicos

**Análisis de retribución de socios:**
Ayúdame a analizar la fórmula retributiva más eficiente fiscalmente para los dos socios:
- Salario vs dividendo: cuándo es mejor cada opción
- Cálculo del salario de mercado para evitar riesgos con Hacienda
- Tratamiento fiscal de los gastos de representación y gastos de empresa
- Posibilidad de utilizar una Sociedad de Holding para optimizar la tributación
- Seguridad Social de autónomos societarios: bases de cotización y optimización

**Documentación de cumplimiento fiscal:**
Diseña el expediente de documentación fiscal que debo mantener:
- Facturas con todos los requisitos legales del artículo 6 del Reglamento de Facturación
- Documentación de operaciones vinculadas (si los socios facturan a la empresa)
- Libro registro de IVA soportado y repercutido
- Documentación de los gastos deducibles más controvertidos (dietas, vehículos, teléfonos)
- Política de precios de transferencia si hay operaciones intragrupo

**Riesgos fiscales a gestionar:**
Identifica y ayúdame a documentar estos riesgos específicos de nuestra actividad:
- Calificación de gastos de formación como mayor retribución en especie
- Deducibilidad de los gastos de home office de los empleados en teletrabajo
- Tratamiento del IVA en servicios prestados a clientes de la UE (reglas de localización)
- Riesgo de simulación en contratos con socios o familiares de socios
- Retención del 7% en facturas si algún colaborador externo pudiera ser considerado empleado

**Proceso de cierre fiscal del ejercicio:**
Dame el checklist del cierre fiscal anual:
1. Revisión de ingresos: ¿todos los ingresos están correctamente contabilizados?
2. Revisión de gastos: ¿todos los gastos deducibles están documentados?
3. Ajustes fiscales sobre el resultado contable
4. Cálculo de la base imponible previa
5. Aplicación de deducciones y bonificaciones
6. Aplicación de bases imponibles negativas de ejercicios anteriores
7. Cálculo de la cuota íntegra y líquida
8. Provisión contable del IS

Empieza con el calendario fiscal mensual del próximo ejercicio y luego seguimos con el análisis de deducciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Cumplimiento fiscal empresarial, identificación de deducciones y optimización tributaria con IA',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de costes operativos de atención al cliente con IA',
                'description'       => 'Aprende a usar Claude para analizar y optimizar los costes del departamento de Customer Success, calcular el coste por ticket y justificar inversiones en automatización que mejoren la rentabilidad del soporte.',
                'prompt_content'    => <<<'EOT'
Eres un experto en operaciones de Customer Success y en análisis financiero de departamentos de servicio al cliente. Necesito que me ayudes a entender y optimizar los costes de mi equipo de soporte para mejorar la rentabilidad del servicio y justificar inversiones en automatización.

**Situación de mi departamento:**
Dirijo un equipo de CS de 15 personas en una empresa SaaS B2B con 2.800 clientes activos. Gestionamos una media de 3.200 tickets al mes a través de Zendesk. El coste total del departamento (salarios, herramientas, formación) es de 85.000€ al mes. La dirección nos pide reducir el coste por ticket un 30% en los próximos 12 meses sin reducir el CSAT (actualmente en 4.4/5).

**instrucción de análisis de costes:**
Actúa como mi analista financiero de operaciones de CS. Ayúdame a:

1. Calcular el coste real por ticket desglosado por canal (email, chat, teléfono, autoservicio).
2. Identificar las categorías de tickets con mayor coste de resolución y menor valor para el cliente.
3. Construir el caso de negocio para invertir en automatización (chatbot, base de conocimiento, deflexión de tickets).
4. Proyectar el ahorro de costes de cada iniciativa de automatización con el ROI esperado.
5. Diseñar el modelo de CS escalable que permita crecer sin aumentar proporcionalmente el equipo.

**tarea de cálculo de métricas financieras de CS:**
Para cada canal de soporte, calcula:
- Coste por ticket = Coste total del canal / Número de tickets del canal
- Tiempo medio de resolución × Coste/hora del agente = Coste de tiempo por ticket
- First Contact Resolution Rate: qué porcentaje resolvemos en el primer contacto
- Ticket reopening rate: cuántos tickets se reabren (coste extra)
- Escalations rate: cuántos tickets escalan a nivel 2 o 3 (coste mayor)
- Coste de la hora de un agente según banda salarial y overhead

**objetivo de análisis de deflexión de tickets:**
Analiza las oportunidades de reducir el volumen de tickets:
- ¿Cuántos tickets podrían resolverse con una mejor base de conocimiento?
- ¿Qué porcentaje de tickets son repetitivos y automatizables con un chatbot?
- ¿Qué mejoras en el producto UX reducirían las consultas de "¿cómo funciona X?"?
- ¿Cuántos tickets se generan por bugs conocidos que el equipo de producto podría priorizar?
- ¿Qué canales de autoservicio (portal, vídeos tutoriales) tendrían mayor impacto?

**Caso de negocio para automatización:**
Ayúdame a construir el ROI de estas inversiones:

Inversión en chatbot de IA (coste: 2.000€/mes de licencia):
- Deflexión esperada: 20-25% de los tickets de nivel 1
- Ahorro mensual: tickets deflectados × coste por ticket
- Payback period en meses

Inversión en base de conocimiento avanzada (coste: 800€/mes):
- Deflexión esperada: 10-15% adicional por autoservicio mejorado
- Reducción del tiempo de resolución de agentes: 15%

Inversión en automatización de tareas repetitivas (coste: 1.500€/mes):
- Automatizar el seguimiento de tickets sin respuesta
- Automatizar la categorización y enrutamiento inicial
- Automatizar los informes semanales de métricas

**Modelo de CS escalable:**
Diseña el modelo operativo objetivo:
- Ratio clientes/agente óptimo según el nivel de complejidad del producto
- Modelo de niveles de soporte (L1 autoservicio, L2 soporte general, L3 especialistas técnicos)
- Criterios de escalado entre niveles con coste asociado a cada escalado
- Programa de CS proactivo para reducir churn (y su impacto en retención de ARR)
- Expansión: cómo usar CS para identificar oportunidades de upsell

**Informe financiero mensual del departamento:**
Dame la estructura del informe mensual de CS para la dirección:
1. KPIs operativos: tickets, CSAT, tiempo de resolución, FCR
2. KPIs financieros: coste total, coste por ticket, evolución vs mes anterior
3. ROI de las iniciativas de automatización activas
4. Impacto en churn: clientes recuperados y ARR retenido gracias a CS
5. Inversiones planificadas y su justificación financiera

Comienza calculando el coste por ticket actual y la oportunidad de ahorro con la deflexión del 20% con chatbot.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Análisis de costes de CS, caso de negocio para automatización y modelo de soporte escalable con IA',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Planificación financiera personal para freelancers con IA',
                'description'       => 'Usa Claude para construir un sistema completo de gestión financiera como freelancer: control de ingresos irregulares, fiscalidad de autónomos, fondo de emergencia y planificación de la jubilación.',
                'prompt_content'    => <<<'EOT'
Eres un experto en planificación financiera personal para trabajadores autónomos y freelancers en España. Necesito que me ayudes a construir un sistema financiero completo que me permita gestionar la irregularidad de mis ingresos, cumplir con mis obligaciones fiscales y construir patrimonio a largo plazo.

**Mi situación como freelancer:**
Soy diseñador gráfico freelance en España. Ingresos brutos medios: 4.200€/mes, pero con mucha variabilidad (de 1.800€ a 7.500€ dependiendo del mes). Régimen de autónomos: cuota de 294€/mes. Tengo 34 años, vivo de alquiler (900€/mes) y actualmente no tengo ahorros significativos ni plan de pensiones. Quiero profesionalizar completamente mi gestión financiera este año.

**instrucción del sistema de gestión financiera:**
Actúa como mi planificador financiero personal especializado en autónomos. Ayúdame a:

1. Diseñar el sistema de cuentas bancarias para separar finanzas personales y profesionales.
2. Calcular exactamente cuánto apartar de cada cobro para impuestos (IRPF e IVA).
3. Construir el presupuesto mensual adaptado a ingresos variables.
4. Crear el fondo de emergencia específico para freelancers (diferente al de asalariado).
5. Diseñar el plan de ahorro e inversión mensual.

**tarea de fiscalidad de autónomos:**
Explícame y ayúdame a gestionar mis obligaciones fiscales trimestrales:

IVA (modelo 303, trimestral):
- IVA repercutido en facturas a clientes: 21%
- IVA soportado deducible: gastos profesionales con factura
- Cuánto apartar de cada cobro: ¿el IVA que cobro es del Estado, no es mi dinero?

IRPF (modelo 130, pago fraccionado trimestral):
- Base de cálculo del pago fraccionado
- Porcentaje a ingresar: 20% del beneficio neto trimestral menos pagos anteriores
- Retenciones del 15% en facturas a empresas: cómo afectan al cálculo

Cuotas de autónomos:
- Sistema de cotización por ingresos reales desde 2023
- Tramos de ingresos y cuotas correspondientes
- Posibilidad de ajustar la cuota según el tramo del año

**objetivo del sistema de cuentas:**
Diseña un sistema de tres cuentas bancarias:
- Cuenta profesional de operaciones: donde entran todos los cobros
- Cuenta de impuestos: donde apartas automáticamente el % de impuestos de cada cobro
- Cuenta personal: tu "sueldo" mensual fijo que te transfieres

Para la cuenta de impuestos, calcula el porcentaje exacto que debo apartar de cada cobro bruto considerando que soy freelance con IVA al 21% y IRPF estimado del 30%:
- Del total bruto cobrado: el 21/121 es IVA (no es mío)
- Del neto (sin IVA): aprovisionar X% para IRPF
- ¿Cuál es el porcentaje final exacto que debo guardar del bruto cobrado?

**Presupuesto con ingresos variables:**
Diseña el método del "sueldo fijo del freelance":
- Calcular el ingreso neto medio de los últimos 12 meses
- Definir un "sueldo" mensual fijo conservador (P25 de mis ingresos)
- En los meses buenos: el exceso va al fondo de nivelación
- En los meses malos: complementar el sueldo fijo con el fondo de nivelación
- Qué tamaño debe tener el fondo de nivelación (cuántos meses de diferencia entre P25 y P75 de ingresos)

**Fondo de emergencia para freelancers:**
A diferencia de un asalariado, como freelance necesito un fondo de emergencia mayor:
- Cobertura de gastos fijos mientras buscas nuevos clientes: mínimo 6 meses
- Cobertura de la cuota de autónomos durante la baja por enfermedad
- Cobertura de desfases de tesorería (clientes que pagan tarde)
- ¿En qué instrumento financiero guardar este fondo? (liquidez vs rentabilidad)

**Plan de inversión y jubilación:**
Con ingresos irregulares, diseña una estrategia de inversión:
- Porcentaje mensual a invertir del "sueldo" fijo
- Aportaciones variables al plan de pensiones en los meses buenos
- Ventajas fiscales del plan de pensiones para autónomos (deducción en IRPF)
- Fondo indexado vs plan de pensiones: cuándo usar cada uno
- Objetivo de capital en la jubilación a los 67 años

**Herramientas de gestión financiera:**
Recomiéndame las mejores herramientas para gestionar mi contabilidad como freelance:
- Aplicación de facturación con control de IVA e IRPF
- Aplicación de tracking de gastos deducibles
- Hoja de cálculo modelo para el control mensual de ingresos y gastos
- Cuándo vale la pena contratar a un gestor y qué funciones no debo externalizar nunca

Empieza calculando exactamente qué porcentaje de mis cobros brutos debo apartar para impuestos con mi situación específica.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema completo de gestión financiera personal para freelancers: impuestos, ahorro e inversión',
                'vote_score'        => 51,
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
