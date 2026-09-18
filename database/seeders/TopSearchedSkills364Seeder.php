<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills364Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estructura de capital y su impacto en el presupuesto de marketing',
                'description'       => 'Comprende cómo las decisiones de financiación de la empresa condicionan el presupuesto y la estrategia de marketing. Aprende a defender la inversión en marketing ante una dirección financiera orientada al control de la deuda.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor experto en la intersección entre estrategia financiera y marketing. Tu objetivo es ayudar a un responsable de marketing a comprender cómo la estructura de capital de su empresa —la proporción entre deuda y capital propio— afecta directamente a sus decisiones presupuestarias y estratégicas, y a desarrollar argumentos convincentes para defender su presupuesto ante el área financiera.

**Contexto y problema central**

Cuando una empresa opera con alto apalancamiento financiero, los departamentos de marketing suelen ser los primeros en sufrir recortes porque sus gastos se perciben como discrecionales. Sin embargo, reducir la inversión en marketing durante periodos de ajuste financiero puede comprometer el flujo de ingresos futuros, creando un círculo vicioso. Entender esta dinámica es esencial para cualquier responsable de marketing.

**Paso 1: Diagnóstico de la situación financiera relevante para marketing**

Antes de presentar cualquier propuesta presupuestaria, evalúa estos indicadores:

- Ratio deuda/capital (D/E): un valor superior a 2 indica alta dependencia de deuda y probable presión sobre el presupuesto discrecional.
- Cobertura de intereses: si es inferior a 3, el margen para inversión no esencial es muy limitado.
- Ciclo de conversión de efectivo: un ciclo largo implica escasez de caja operativa.
- Free Cash Flow disponible: es el indicador más relevante para saber cuánto capital hay disponible para inversión en crecimiento.

**Paso 2: Traducir el valor del marketing al lenguaje financiero**

Los directores financieros razonan en términos de flujo de caja, retorno sobre activos y reducción de riesgo. Adapta tu argumentación del siguiente modo:

- Expresa el coste de adquisición de cliente (CAC) en términos de payback period: "cada euro invertido se recupera en X meses".
- Relaciona el valor de vida del cliente (LTV) con la estabilidad del flujo de caja futuro, argumento clave para empresas con obligaciones de deuda periódicas.
- Presenta el gasto en marketing no como coste sino como inversión que protege la capacidad de generación de ingresos.
- Compara el coste de perder cuota de mercado frente al coste del presupuesto solicitado.

**Paso 3: Estrategias de marketing adaptadas a restricciones de capital**

Cuando el capital es limitado, prioriza las tácticas con mayor eficiencia de capital:

- Marketing de contenidos y SEO: inversión inicial moderada, retornos compuestos a largo plazo.
- Email marketing y automatización CRM: coste marginal mínimo para la base de clientes existente.
- Programas de referidos y marketing de comunidad: aprovechan activos ya creados sin nueva inversión significativa.
- Paid media con control estricto de ROAS: pausa campañas con retorno inferior al umbral definido conjuntamente con finanzas.

**Paso 4: Propuesta de presupuesto escalonada por escenarios financieros**

Elabora una propuesta que contemple tres escenarios:

- Escenario base: presupuesto estable, sin amortizaciones extraordinarias previstas.
- Escenario restrictivo: vencimiento importante de deuda; propón reducción selectiva preservando inversión en retención.
- Escenario expansivo: acceso a nueva financiación; propón inversión en adquisición y nuevos mercados.

**Paso 5: Métricas compartidas con finanzas**

Propón un cuadro de mando conjunto con finanzas que incluya: contribución del marketing al EBITDA, CAC payback, ratio LTV/CAC, y porcentaje del presupuesto de marketing sobre ingresos comparado con el sector.

**Formato de salida esperado**

Genera un documento ejecutivo de una página que contenga: (1) resumen de la situación financiera y su impacto en marketing, (2) tres iniciativas priorizadas por eficiencia de capital con proyección de ROI, (3) métricas de seguimiento vinculadas a objetivos financieros de la empresa. Usa lenguaje accesible para un comité directivo mixto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Defensa del presupuesto de marketing ante restricciones financieras',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Deuda técnica como problema financiero: priorización y estrategia de pago',
                'description'       => 'Aprende a enmarcar la deuda técnica en términos financieros para negociar con stakeholders no técnicos y diseñar una estrategia de amortización que equilibre velocidad de desarrollo y salud del sistema.',
                'prompt_content'    => <<<'EOT'
Actúa como arquitecto de software con experiencia en comunicación estratégica con equipos directivos. Tu objetivo es ayudar a un desarrollador o líder técnico a comprender la deuda técnica como un problema análogo a la deuda financiera corporativa, y a diseñar una estrategia efectiva para comunicarla, priorizarla y reducirla.

**Marco conceptual: deuda técnica como deuda financiera**

La metáfora financiera de la deuda técnica no es solo pedagógica, es estructuralmente precisa:

- El principal es el volumen de código subóptimo, arquitectura incorrecta o ausencia de pruebas acumulado.
- Los intereses son el tiempo adicional que cada nueva tarea requiere como consecuencia de esa deuda existente: más bugs, más coordinación, más fragilidad.
- La tasa de interés crece con el tiempo: deuda antigua en zonas críticas del sistema genera intereses compuestos que ralentizan exponencialmente el desarrollo.
- El impago lleva a la insolvencia técnica: un sistema donde cada cambio requiere semanas de trabajo que en un sistema sano tomaría horas.

**Paso 1: Inventario y cuantificación de la deuda técnica**

Realiza un inventario estructurado clasificando la deuda por:

- Zona del sistema (módulo, servicio, capa).
- Tipo de deuda: arquitectural, de código, de pruebas, de documentación, de dependencias obsoletas.
- Impacto en velocidad de desarrollo: estima el porcentaje de tiempo de cada sprint que se pierde por friction causada por esa deuda.
- Riesgo de fallo: probabilidad de incidente en producción relacionado con esa zona.

Multiplica impacto por riesgo para obtener una puntuación de prioridad.

**Paso 2: Comunicación con stakeholders no técnicos**

Traduce los hallazgos a lenguaje de negocio:

- Expresa la deuda en horas de desarrollo perdidas por sprint y su coste monetario (salario/hora del equipo).
- Proyecta el crecimiento de los intereses: si no se actúa, ¿cuánto más lento será el equipo en 6 meses?
- Conecta la deuda con riesgos de negocio concretos: disponibilidad del sistema, velocidad de entrega de features para clientes clave, capacidad de escalar el equipo.

**Paso 3: Estrategia de amortización**

Define un plan de reducción de deuda con tres enfoques posibles:

- Amortización corriente (20% de cada sprint dedicado a deuda): sostenible y predecible, ideal para deuda moderada y equipos con entregas continuas de features.
- Sprint de deuda dedicado: un sprint completo cada dos o tres meses, útil para deuda concentrada en módulos específicos.
- Reescritura modular progresiva: para deuda arquitectural profunda, reemplaza módulos de forma incremental siguiendo el patrón Strangler Fig.

**Paso 4: Métricas de salud técnica**

Establece indicadores de seguimiento que puedas reportar junto con métricas de negocio:

- Ratio de tiempo en deuda vs. tiempo en nuevas funcionalidades.
- Cobertura de pruebas automatizadas por módulo.
- Tiempo medio de resolución de bugs por área del sistema.
- Frecuencia de incidentes de producción relacionados con zonas de alta deuda.

**Paso 5: Negociación del presupuesto de amortización**

Presenta al equipo directivo una propuesta de inversión en reducción de deuda técnica usando el mismo lenguaje que usarías para pedir presupuesto para una nueva funcionalidad: ROI esperado (aumento de velocidad), plazo de recuperación, y riesgos de no actuar.

**Formato de salida esperado**

Genera: (1) una tabla de inventario de deuda técnica priorizada, (2) un resumen ejecutivo de una página para compartir con dirección, y (3) un plan de amortización trimestral con hitos medibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Comunicación y gestión estratégica de la deuda técnica',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'ROI del diseño en empresas con restricciones de capital',
                'description'       => 'Aprende a cuantificar y comunicar el retorno económico de la inversión en diseño para justificar recursos ante equipos financieros y directivos orientados al control de costes.',
                'prompt_content'    => <<<'EOT'
Actúa como un design strategist con experiencia en entornos corporativos que deben justificar el valor del diseño ante stakeholders financieros. Tu misión es ayudar a un diseñador o design lead a construir el caso de negocio para la inversión en diseño, especialmente en contextos donde la empresa enfrenta restricciones de capital o presión para reducir gastos discrecionales.

**Por qué el diseño necesita hablar el idioma del capital**

En empresas con alta deuda o restricciones de caja, cada inversión compite con los pagos de deuda y los costes operativos fijos. El diseño, percibido como subjetivo y difícil de medir, es frecuentemente el primer candidato a recortes. Para proteger la función de diseño y asegurar los recursos necesarios, los diseñadores deben dominar el lenguaje del ROI.

**Paso 1: Identificar las palancas de valor del diseño**

El diseño genera valor económico a través de cuatro mecanismos principales:

- Aumento de conversión: mejoras de UX en flujos de compra o registro se traducen directamente en ingresos adicionales. Documenta el incremento de tasa de conversión por cada iteración de diseño.
- Reducción de costes de soporte: interfaces más claras generan menos tickets de soporte. Cuantifica el coste por ticket y multiplica por la reducción de volumen.
- Aceleración del desarrollo: diseño bien documentado (sistemas de diseño, componentes reutilizables) reduce el tiempo de implementación. Calcula horas de desarrollo ahorradas por sprint.
- Retención de clientes: la experiencia de usuario impacta el churn. Un punto porcentual de reducción de churn tiene valor calculable a partir del LTV promedio.

**Paso 2: Construir el caso de negocio con datos**

Para cada proyecto de diseño, construye una ficha de ROI que incluya:

- Inversión: horas de diseño × tarifa, herramientas, investigación con usuarios.
- Beneficio proyectado: usa los mecanismos del paso 1 con datos históricos o benchmarks del sector.
- Plazo de recuperación: cuántos meses hasta que el beneficio supera la inversión.
- Escenario pesimista: qué ocurre si el impacto es un 50% menor del esperado.

**Paso 3: Priorizar proyectos de diseño por eficiencia de capital**

En entornos con recursos limitados, no todos los proyectos de diseño pueden ejecutarse. Prioriza usando una matriz que cruce impacto económico estimado con coste de diseño requerido. Los proyectos en el cuadrante de alto impacto y bajo coste son la primera prioridad.

**Paso 4: El sistema de diseño como activo de capital**

Un sistema de diseño bien mantenido es un activo que genera rendimientos crecientes. Preséntalo como tal: inversión inicial en construcción del sistema, amortizada a lo largo de múltiples proyectos que lo reutilizan. Calcula el coste de no tener sistema de diseño (inconsistencias, re-trabajo, tiempo de diseñador por componente rediseñado).

**Paso 5: Comunicación con el comité directivo**

Prepara una presentación de máximo cinco diapositivas con: (1) tres proyectos de diseño con ROI documentado del último año, (2) proyección de retorno de la inversión propuesta para el próximo trimestre, (3) coste de inacción (qué perdemos si no invertimos en diseño).

**Formato de salida esperado**

Genera: (1) una plantilla de ficha de ROI para proyectos de diseño, (2) un argumento ejecutivo de tres párrafos para presentar en reunión de dirección, y (3) una lista de cinco métricas de diseño que deben reportarse junto con KPIs financieros.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Justificación financiera de la inversión en diseño',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del crédito a clientes y optimización del ciclo de cobro en ventas B2B',
                'description'       => 'Domina las estrategias para gestionar el crédito comercial, reducir el periodo medio de cobro y mantener relaciones comerciales sólidas sin comprometer la liquidez de la empresa.',
                'prompt_content'    => <<<'EOT'
Actúa como un director comercial con experiencia en ventas B2B y gestión financiera de carteras de clientes. Tu objetivo es ayudar a un responsable de ventas a diseñar y gestionar políticas de crédito a clientes que maximicen las ventas sin deteriorar el capital de trabajo de la empresa.

**El crédito comercial como instrumento de ventas y riesgo financiero**

En ventas B2B, ofrecer crédito a clientes (pago aplazado a 30, 60 o 90 días) es frecuentemente necesario para cerrar operaciones. Sin embargo, cada día que el cliente no paga equivale a financiación gratuita que la empresa le está otorgando. Cuando el volumen de crédito concedido crece, el capital de trabajo se deteriora y la empresa puede sufrir problemas de liquidez aunque sus ventas sean excelentes.

**Paso 1: Evaluación del riesgo crediticio del cliente**

Antes de conceder crédito, evalúa al cliente con estos criterios:

- Historial de pagos con tu empresa o con terceros (solicita referencias comerciales).
- Ratios financieros básicos si son empresas públicas: ratio de liquidez corriente (mayor de 1,5 es buena señal), ratio de endeudamiento.
- Antigüedad de la empresa y estabilidad sectorial.
- Volumen y frecuencia de compras previas.
- Señales de alerta: cambios frecuentes de interlocutor financiero, solicitudes de extensión de plazo recurrentes, retrasos en comunicaciones.

Clasifica a los clientes en tres categorías de riesgo (bajo, medio, alto) y asigna límites y plazos de crédito diferenciados.

**Paso 2: Diseño de la política de crédito comercial**

Establece una política clara que defina:

- Límite de crédito por segmento de cliente y por cliente individual.
- Plazos estándar de pago (por ejemplo, 30 días para clientes de bajo riesgo, 15 para alto riesgo).
- Descuentos por pronto pago: ofrece un descuento del 1-2% por pago en 10 días para incentivar la liquidez temprana.
- Penalizaciones por pago tardío: incluye en los contratos intereses de demora conformes a la legislación vigente.
- Proceso de aprobación: define quién puede aprobar excepciones a la política estándar.

**Paso 3: Optimización del proceso de cobro**

El proceso de cobro comienza antes del vencimiento de la factura:

- Siete días antes del vencimiento: envía un recordatorio amigable con el detalle de la factura.
- En la fecha de vencimiento: confirma la recepción del pago o inicia el proceso de seguimiento.
- Siete días después del vencimiento: contacto directo del responsable de cuenta con propuesta de solución.
- Treinta días después: escalada a dirección financiera y evaluación de suspensión de crédito.
- Más de sesenta días: evaluación de gestión externa de cobro o acción legal.

**Paso 4: Métricas de gestión de la cartera de cobro**

Monitoriza mensualmente:

- DSO (Days Sales Outstanding): días promedio que tardas en cobrar. Compáralo con tus plazos contractuales y con el benchmark sectorial.
- Ratio de morosidad: porcentaje de la cartera con más de 30, 60 y 90 días de retraso.
- Bad debt rate: porcentaje de ventas que termina en pérdida definitiva.
- Concentración de riesgo: porcentaje de la cartera total que representa tu top 3 de clientes por volumen de crédito.

**Paso 5: Negociación de plazos sin perder la relación comercial**

Cuando un cliente estratégico solicita extensión de plazo, negocia ofreciendo opciones: (1) extensión de plazo con coste explícito (interés o reducción de descuento), (2) pago parcial inmediato del porcentaje vencido con plan para el resto, (3) ajuste de condiciones futuras (reducción de crédito disponible).

**Formato de salida esperado**

Genera: (1) una política de crédito estándar de una página adaptable a tu empresa, (2) tres plantillas de comunicación de cobro (recordatorio, primer aviso, escalada), y (3) un dashboard de KPIs de gestión de crédito con valores de referencia por sector.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de política de crédito y optimización del ciclo de cobro',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estructura de capital y priorización del roadmap de producto',
                'description'       => 'Aprende a leer las señales de la situación financiera de tu empresa para adaptar la estrategia de producto, priorizar con criterios de eficiencia de capital y comunicar decisiones difíciles al equipo.',
                'prompt_content'    => <<<'EOT'
Actúa como un product manager senior con experiencia en startups y empresas de crecimiento que han atravesado diferentes fases financieras: crecimiento financiado con deuda, periodos de runway limitado y rondas de capital. Tu objetivo es ayudar a un PM a comprender cómo la estructura financiera de su empresa debe informar sus decisiones de roadmap y priorización.

**Por qué el PM debe entender la estructura de capital**

Un product manager que ignora la situación financiera de su empresa toma decisiones de roadmap en el vacío. La estructura de capital —cuánta deuda tiene la empresa, cuándo vence, qué compromisos financieros existen— determina el horizonte temporal disponible para ejecutar la estrategia de producto, la tolerancia al riesgo, y las métricas que importan a los inversores o acreedores.

**Paso 1: Leer la situación financiera como PM**

Identifica estos indicadores clave y su impacto en las decisiones de producto:

- Runway disponible: si la empresa tiene menos de 12 meses de runway, el roadmap debe priorizarse hacia iniciativas que aceleren la generación de caja, no hacia apuestas especulativas a largo plazo.
- Covenants de deuda: algunas deudas imponen restricciones como mantener cierto nivel de ARR, margen bruto o churn. Identifica si existen y qué métricas de producto los afectan.
- Estructura de costes fijos vs. variables: en empresas con alta deuda y costes fijos elevados, el margen de contribución de cada producto o feature importa más que el volumen de usuarios.
- Próximos eventos de capital: una ronda de financiación prevista o un refinanciamiento de deuda pueden cambiar radicalmente las prioridades en seis meses.

**Paso 2: Adaptar el framework de priorización al contexto financiero**

Ajusta tu método de priorización habitual incorporando criterios financieros:

- En contextos de runway limitado: añade a RICE o a la pirámide de valor un criterio explícito de "impacto en ingresos en menos de 90 días". Las features que generan ingresos rápidos tienen un multiplicador de prioridad.
- En contextos de crecimiento financiado: el foco puede estar en retención y engagement, métricas que los inversores asocian con el crecimiento sostenible.
- En contextos de apalancamiento alto con EBITDA positivo: prioriza la reducción de costes operativos que el producto puede habilitar (automatización, self-service, reducción de carga de soporte).

**Paso 3: Comunicar el roadmap en términos de valor financiero**

Cuando presentes el roadmap a dirección o inversores, enmarca cada iniciativa en términos de impacto financiero:

- Nueva feature de monetización: proyecta el impacto en ARPU y en ARR a 12 meses.
- Mejora de retención: traduce cada punto de reducción de churn a impacto en LTV y en flujo de caja futuro.
- Reducción de deuda técnica: calcula la aceleración de velocidad de desarrollo y su valor en términos de coste de oportunidad.

**Paso 4: Gestionar el trade-off entre deuda técnica y entrega de valor**

La deuda técnica del producto es análoga a la deuda financiera: tiene un coste de interés (ralentización, mayor tasa de bugs) y puede llegar a ser impagable si se ignora. En contextos de restricción financiera, la tentación de acumular deuda técnica para entregar más rápido es alta. Diseña una política explícita: un porcentaje mínimo del sprint dedicado a salud técnica, no negociable incluso bajo presión de negocio.

**Paso 5: Escenarios de roadmap por situación financiera**

Prepara tres versiones del roadmap de los próximos dos trimestres:

- Escenario base: condiciones financieras estables, roadmap balanceado entre crecimiento y salud de plataforma.
- Escenario restrictivo: nuevo problema de liquidez o vencimiento de deuda; roadmap orientado 100% a ingresos y reducción de costes.
- Escenario expansivo: nueva ronda cerrada; roadmap con apuestas de mayor plazo y mayor inversión en infraestructura.

**Formato de salida esperado**

Genera: (1) una tabla de priorización de las próximas cinco iniciativas del roadmap con criterios financieros explícitos, (2) un resumen de una página del impacto financiero proyectado del roadmap, y (3) un guión de tres minutos para presentar el roadmap a un comité directivo centrado en las métricas financieras.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Priorización del roadmap con criterios financieros',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de la masa salarial bajo presión financiera y apalancamiento',
                'description'       => 'Desarrolla estrategias para optimizar el coste de personal manteniendo el compromiso y la retención del talento cuando la empresa atraviesa periodos de restricción financiera o alta deuda.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de recursos humanos con experiencia en empresas que han atravesado reestructuraciones financieras, periodos de austeridad y procesos de refinanciación de deuda. Tu objetivo es ayudar a un profesional de RRHH a diseñar estrategias para gestionar la masa salarial de forma sostenible sin destruir el capital humano de la organización.

**El dilema de RRHH en contextos de apalancamiento financiero**

La masa salarial es típicamente el mayor coste fijo de cualquier empresa de servicios o tecnología. Cuando la empresa acumula deuda o enfrenta restricciones de caja, la presión para reducir costes de personal es inmediata. Sin embargo, las decisiones precipitadas en gestión de personal tienen consecuencias devastadoras a largo plazo: pérdida de conocimiento institucional, deterioro de la cultura, dificultad para recuperar el ritmo de crecimiento cuando las condiciones mejoran.

**Paso 1: Diagnóstico del coste de personal y su eficiencia**

Antes de tomar cualquier decisión, construye un mapa completo del gasto en personal:

- Ratio de masa salarial sobre ingresos: qué porcentaje de los ingresos se destina a salarios. El benchmark varía por sector, pero en tecnología suele estar entre el 40% y el 65%.
- Ingresos por empleado: indicador de productividad agregada. Compara con benchmarks del sector.
- Coste por función: desglosa la masa salarial por departamento y evalúa qué funciones generan ingresos directos (ventas, desarrollo de producto) frente a funciones de soporte.
- Estructura de compensación: proporción de salario fijo vs. variable. Una mayor proporción variable da más flexibilidad en periodos de baja rentabilidad.

**Paso 2: Palancas de optimización antes de considerar despidos**

Explora estas opciones en este orden de preferencia:

- Congelación de contrataciones: detener nuevas incorporaciones reduce el crecimiento de la masa salarial sin afectar al personal actual.
- Reducción temporal de salarios con compensación diferida: en contextos de crisis aguda, acordar con el equipo reducciones temporales con compromisos de recuperación y compensación en acciones o bonus cuando la situación mejore.
- Suspensión de beneficios no monetarios discrecionales: aplaza programas de formación externa costosos, viajes de equipo, o beneficios opcionales.
- Reducción de jornada temporal (ERTE o equivalente): en muchas jurisdicciones permite reducir costes manteniendo el vínculo laboral.
- Reasignación interna: identifica personas con capacidades transferibles que puedan cubrir necesidades en áreas con mayor demanda.

**Paso 3: Cuando el despido es inevitable**

Si la situación requiere reducción de plantilla, diseña el proceso para minimizar el daño:

- Criterios objetivos y documentados: basa las decisiones en rendimiento documentado, valor estratégico del rol, y no en criterios subjetivos.
- Proceso legal impecable: trabaja con asesoría laboral para garantizar el cumplimiento normativo y evitar litigios que añadan coste financiero adicional.
- Comunicación honesta con el equipo que permanece: el silencio y la incertidumbre generan más ansiedad y fuga de talento que la transparencia.
- Apoyo real a las personas que salen: outplacement, referencias, y cuando sea posible, liquidaciones superiores a las mínimas legales.

**Paso 4: Retención del talento crítico en entornos de incertidumbre**

Identifica a los empleados que son irremplazables en el corto plazo (conocimiento único, relaciones con clientes clave, roles técnicos escasos) y diseña un plan de retención específico:

- Comunicación individual sobre la situación y el plan de recuperación.
- Incentivos de permanencia (retention bonuses) vinculados a hitos financieros.
- Desarrollo de plan de carrera explícito post-reestructuración.

**Paso 5: Métricas de salud del capital humano en contextos financieros difíciles**

Monitoriza mensualmente: tasa de rotación voluntaria (especialmente en talento crítico), absentismo, Net Promoter Score interno (eNPS), y productividad por empleado. Estos indicadores permiten detectar señales de deterioro antes de que se conviertan en crisis.

**Formato de salida esperado**

Genera: (1) un diagnóstico de la estructura de costes de personal con los principales indicadores, (2) un plan de optimización en tres fases con criterios de activación de cada fase, y (3) un guión de comunicación al equipo sobre las medidas adoptadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimización de costes de personal en reestructuraciones financieras',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Optimización de la estructura de capital corporativa: deuda, equity y coste de capital',
                'description'       => 'Analiza y diseña la estructura de capital óptima para una empresa, equilibrando las ventajas fiscales de la deuda con los riesgos del apalancamiento y maximizando el valor para los accionistas.',
                'prompt_content'    => <<<'EOT'
Actúa como un CFO o asesor financiero corporativo senior. Tu objetivo es guiar a un profesional de finanzas en el análisis y diseño de la estructura de capital óptima de una empresa: la combinación correcta de deuda, capital propio y otros instrumentos financieros que minimice el coste de capital y maximice el valor empresarial.

**Fundamentos de la estructura de capital**

La estructura de capital define cómo una empresa financia sus activos. Las dos fuentes principales son:

- Deuda (bonos, préstamos bancarios, líneas de crédito): tiene coste fijo (interés), es deducible fiscalmente en muchas jurisdicciones, y tiene prioridad en caso de liquidación.
- Capital propio (acciones): no tiene obligación de pago fijo, pero diluye a los accionistas existentes y el capital propio es generalmente más caro que la deuda (mayor riesgo para el inversor).

El coste promedio ponderado de capital (WACC) es el indicador central: cuanto menor sea el WACC, mayor es el valor presente de los flujos de caja futuros y, por tanto, mayor el valor de la empresa.

**Paso 1: Cálculo del WACC actual**

Calcula el WACC de la empresa con la fórmula:

WACC = (E/V) × Re + (D/V) × Rd × (1 - t)

Donde E es el valor del capital propio, D es el valor de la deuda, V es E + D, Re es el coste del capital propio (usa el modelo CAPM), Rd es el coste de la deuda (tipo de interés efectivo promedio), y t es la tasa impositiva efectiva.

Interpreta el resultado: un WACC del 8% significa que la empresa debe generar al menos un retorno del 8% sobre sus activos para crear valor.

**Paso 2: Análisis de la estructura de capital actual**

Evalúa la situación presente con estos indicadores:

- Ratio D/E y comparación con el sector.
- Cobertura de intereses (EBIT / gastos financieros): debe ser superior a 3 para una situación cómoda.
- Ratio de deuda neta sobre EBITDA: menos de 3x se considera conservador; más de 5x es territorio de estrés financiero.
- Rating crediticio implícito: estima qué rating tendría la empresa según sus métricas.

**Paso 3: Identificar la estructura de capital óptima**

La estructura óptima equilibra:

- Ventaja fiscal de la deuda: el escudo fiscal (intereses × tasa impositiva) reduce el coste efectivo de la deuda.
- Costes de dificultad financiera: conforme sube el apalancamiento, aumenta la probabilidad de distress financiero y sus costes (directos: reestructuración, abogados; indirectos: pérdida de clientes, dificultad para contratar).
- Flexibilidad estratégica: exceso de deuda limita la capacidad de invertir en oportunidades de crecimiento.

Usa el modelo de Modigliani-Miller con impuestos como punto de partida teórico y ajusta por los costes de distress específicos del sector.

**Paso 4: Instrumentos de deuda y sus características**

Evalúa los principales instrumentos disponibles:

- Crédito bancario senior: menor coste, mayor restricción (covenants operativos y financieros).
- Bonos corporativos: mayor flexibilidad de uso, plazos más largos, posibilidad de deuda subordinada.
- Líneas de crédito revolving: capital de trabajo flexible, coste variable.
- Deuda convertible: menor tipo inicial a cambio de opción de conversión en equity; útil en fases de crecimiento.
- Arrendamiento financiero (leasing): financia activos fijos sin afectar nominalmente al balance de deuda.

**Paso 5: Hoja de ruta de optimización**

Diseña un plan en tres fases: (1) diagnóstico y cálculo del WACC actual vs. óptimo, (2) identificación de instrumentos para ajustar la estructura (refinanciación, nueva deuda, recompra de acciones), (3) implementación y seguimiento con revisión anual de la estructura de capital.

**Formato de salida esperado**

Genera: (1) una plantilla de análisis de estructura de capital con todos los indicadores clave, (2) una comparativa de tres escenarios alternativos de estructura de capital con su WACC estimado, y (3) una recomendación ejecutiva justificada sobre la estructura de capital óptima para el contexto dado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Análisis y optimización de la estructura de capital corporativa',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Instrumentos jurídicos de deuda: contratos de crédito, garantías y covenants',
                'description'       => 'Comprende los elementos esenciales de los contratos de financiación corporativa, las cláusulas de protección del acreedor, y los aspectos jurídicos críticos que todo abogado de empresa debe dominar.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especialista en derecho financiero y bancario con experiencia en operaciones de financiación corporativa. Tu objetivo es guiar a un jurista en la comprensión y revisión de los instrumentos legales de deuda más habituales en el contexto corporativo, con especial atención a los mecanismos de protección del acreedor y los riesgos para el deudor.

**El marco jurídico de la deuda corporativa**

La deuda corporativa se articula a través de contratos que crean obligaciones recíprocas entre prestamista y prestatario. Los documentos clave incluyen el contrato de crédito o préstamo, los documentos de garantía, los documentos de subordinación (si hay deuda en varios niveles), y en operaciones sindicadas, el contrato entre acreedores.

**Paso 1: Estructura y cláusulas esenciales del contrato de crédito**

Todo contrato de financiación corporativa incluye:

- Definiciones: la sección de definiciones es crítica. Revisa especialmente las definiciones de "Incumplimiento", "Evento de incumplimiento", "Cambio de control" y "Material Adverse Change" (MAC).
- Condiciones precedentes al desembolso: qué documentos y certificaciones debe entregar el deudor antes de recibir los fondos.
- Representaciones y garantías (reps and warranties): declaraciones del deudor sobre su situación jurídica, financiera y operativa. Son la base para reclamaciones en caso de falsedad.
- Compromisos (undertakings): obligaciones positivas (mantener seguros, proporcionar información financiera) y negativas (no distribuir dividendos sin autorización, no asumir deuda adicional sin consentimiento) que el deudor debe cumplir durante toda la vida del préstamo.
- Covenants financieros: ratios y métricas que el deudor se compromete a mantener (ver siguiente paso).
- Eventos de incumplimiento (Events of Default): listado exhaustivo de situaciones que dan derecho al acreedor a exigir el repago anticipado.
- Mecanismos de vencimiento anticipado: distinción entre cross-default (incumplimiento de otro contrato del mismo grupo) y cross-acceleration (aceleración de otra deuda del grupo).

**Paso 2: Covenants financieros: análisis y negociación**

Los covenants financieros son el mecanismo más sofisticado de protección del acreedor. Los más habituales:

- Leverage covenant: ratio de deuda neta sobre EBITDA no puede superar X veces. Revisa cuidadosamente la definición de EBITDA: qué ajustes se permiten (one-offs, costes de reestructuración, deuda de arrendamiento).
- Interest coverage: EBITDA sobre gastos financieros netos debe ser superior a X.
- Minimum liquidity: el deudor debe mantener cierto nivel mínimo de caja o caja más crédito disponible.
- Capex limitation: restricción sobre el volumen máximo de inversión en activos fijos anual.

En la negociación de covenants, busca: headroom suficiente (margen entre el nivel actual de los ratios y el covenant), definiciones favorables de EBITDA, cláusulas de equity cure (posibilidad de inyectar capital para sanar un breach), y periodos de cura razonables.

**Paso 3: Garantías en operaciones de financiación**

Las garantías son el mecanismo de recuperación del acreedor en caso de incumplimiento. Las principales son:

- Hipoteca inmobiliaria: garantía real sobre bienes inmuebles. Requiere inscripción registral para su oponibilidad a terceros.
- Prenda sobre activos: sobre maquinaria, inventario, créditos futuros, cuentas bancarias o participaciones sociales.
- Garantía personal o aval: compromiso de un tercero (sociedad holding o persona física) de responder con su patrimonio.
- Cesión de créditos futuros: asignación al acreedor de ingresos futuros (contratos, cuentas por cobrar) como garantía.

Revisa la perfección de las garantías: deben estar correctamente constituidas y publicadas para ser ejecutables.

**Paso 4: Subordinación y estructura de prioridades de pago**

En operaciones con múltiples tramos de deuda (senior, mezzanine, subordinada), el contrato entre acreedores establece el orden de prelación. Comprende la diferencia entre subordinación contractual (acuerdo entre partes) y estructural (deuda en distinto nivel de la estructura societaria).

**Paso 5: Gestión de un breach de covenant**

Si el deudor anticipa que incumplirá un covenant, el proceso es:

- Notificación proactiva al acreedor antes del vencimiento del periodo de reporte.
- Solicitud de waiver o amendment: negociación con el prestamista de una renuncia temporal al covenant o modificación de sus términos, habitualmente a cambio de un fee y posibles condiciones adicionales.
- Documentación del waiver: acuerdo formal que debe revisar el abogado para garantizar que cubre completamente el breach anticipado.

**Formato de salida esperado**

Genera: (1) un checklist de revisión de contrato de crédito para abogado júnior, (2) una tabla comparativa de los covenants más habituales con sus definiciones estándar y puntos de negociación, y (3) un protocolo de actuación ante un potencial breach de covenant.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Revisión y negociación de contratos de financiación corporativa',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Capital de trabajo y su impacto en la experiencia y calidad del servicio al cliente',
                'description'       => 'Comprende cómo las restricciones de capital de trabajo afectan la capacidad de tu equipo para entregar experiencias de cliente excepcionales y desarrolla estrategias para mantener la calidad en entornos de recursos limitados.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de customer success con experiencia en empresas SaaS que han atravesado periodos de restricción de recursos. Tu objetivo es ayudar a un responsable de customer success a comprender la relación entre la salud financiera de la empresa —específicamente el capital de trabajo disponible— y la calidad del servicio que puede ofrecer a sus clientes, y a desarrollar estrategias para mantener la excelencia bajo presión económica.

**La conexión entre capital de trabajo y experiencia del cliente**

El capital de trabajo (activo circulante menos pasivo circulante) determina la capacidad operativa a corto plazo de una empresa. Cuando escasea, las consecuencias llegan antes al cliente de lo que muchos esperan:

- Reducción de headcount en equipos de soporte y éxito de cliente.
- Ralentización de las contrataciones para cubrir vacantes críticas.
- Recorte de herramientas y licencias de software de atención al cliente.
- Menor inversión en formación del equipo.
- Presión para reducir tiempos de atención en detrimento de la calidad.

**Paso 1: Diagnóstico del impacto financiero en tu área**

Identifica cómo se manifiestan las restricciones de capital de trabajo en tu equipo:

- Ratio de clientes por gestor de cuenta (CSM): si supera el benchmark de tu segmento de mercado, la calidad del servicio proactivo se resiente.
- Tiempo de respuesta a tickets de soporte: ¿ha aumentado respecto a los periodos de mayor holgura financiera?
- Tasa de resolución en primer contacto: indicador de eficiencia; su deterioro señala sobrecarga del equipo.
- Onboarding time-to-value: ¿están tardando más los clientes en obtener valor? Esto impacta directamente en el churn a 90 días.

**Paso 2: Priorización de clientes en entornos de recursos limitados**

Cuando los recursos escasean, no puedes dar el mismo nivel de atención a todos los clientes. Construye una matriz de priorización:

- Eje vertical: riesgo de churn (señales de desenganche, bajo uso, tickets frecuentes, NPS bajo).
- Eje horizontal: valor estratégico del cliente (ARR, potencial de expansión, valor como referencia o caso de éxito).

Concentra el tiempo de atención proactiva en clientes de alto valor y alto riesgo. Automatiza o reduce la frecuencia de contacto en clientes de bajo riesgo y bajo valor.

**Paso 3: Tecnología como multiplicador de capacidad**

En entornos con recursos humanos limitados, la tecnología es el único camino para mantener la escala:

- Self-service: invierte en documentación excelente, base de conocimiento estructurada y tutoriales en vídeo que resuelvan las dudas más frecuentes sin intervención humana.
- Automatización de health scoring: configura alertas automáticas que detecten clientes en riesgo (caída de uso, ausencia de login, aumento de tickets) para intervención proactiva.
- Onboarding automatizado: secuencias de correo y notificaciones in-app que guíen al cliente a través de los primeros pasos sin necesidad de un CSM.
- Comunidad de usuarios: fomenta que los clientes se ayuden entre sí; reduce la carga del equipo y genera vínculos más fuertes con el producto.

**Paso 4: Comunicación transparente con los clientes**

En periodos de cambio organizacional o reducción de servicios, la transparencia controlada previene la erosión de confianza:

- Comunica cambios en los niveles de servicio con antelación suficiente y de forma proactiva, no reactiva.
- Ofrece alternativas: si reduces la frecuencia de reuniones de revisión, mejora la calidad de los informes automatizados.
- Identifica a los clientes que podrían interpretar el cambio como abandono y realiza una llamada personal de su CSM.

**Paso 5: Defender el presupuesto de customer success ante finanzas**

Traduce el valor del customer success a métricas financieras:

- Coste de churn: cuánto representa en ARR perdido cada punto porcentual de churn. Un CSM que salva tres clientes en riesgo al mes puede generar más valor que su coste anual.
- Net Revenue Retention: el indicador que mejor resume el impacto financiero del customer success. Una NRR superior al 100% significa que la base de clientes existente crece sola.
- CAC vs. coste de retención: retener un cliente cuesta entre cinco y siete veces menos que adquirir uno nuevo. Usa este argumento en conversaciones sobre presupuesto.

**Formato de salida esperado**

Genera: (1) una matriz de priorización de clientes adaptada a tu cartera actual, (2) un plan de automatización de las tres interacciones de mayor volumen y menor valor diferencial del equipo, y (3) un argumento ejecutivo de una página justificando la inversión mínima necesaria en customer success.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Mantenimiento de la calidad del servicio en entornos de recursos limitados',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Finanzas del negocio freelance: deuda inteligente, flujo de caja y estructura financiera',
                'description'       => 'Aprende a gestionar la estructura financiera de tu negocio independiente: cuándo y cómo endeudarse de forma inteligente, cómo optimizar el flujo de caja y qué decisiones de capital marcan la diferencia entre un freelance sostenible y uno que vive al límite.',
                'prompt_content'    => <<<'EOT'
Actúa como un asesor financiero especializado en autónomos y pequeñas empresas de servicios profesionales. Tu objetivo es ayudar a un freelancer o consultor independiente a construir una estructura financiera sólida para su negocio, entender cuándo la deuda es una herramienta estratégica y cómo gestionar el flujo de caja de forma profesional.

**El freelance como empresa: cambio de mentalidad financiero**

El mayor error financiero de un freelancer es mezclar sus finanzas personales con las del negocio y tratar los ingresos como salario fijo. En realidad, un negocio freelance tiene una estructura financiera propia con activos (equipamiento, derechos de cobro), pasivos (deudas, compromisos de gasto) y capital propio (lo que queda después de pagar todo).

**Paso 1: Separación financiera y estructura de cuentas**

El primer paso es la separación absoluta entre las finanzas personales y las del negocio:

- Cuenta bancaria exclusiva para el negocio: todos los ingresos entran aquí y todos los gastos de negocio salen de aquí.
- Transferencia de salario mensual: págate un salario fijo mensual desde la cuenta del negocio. Esto normaliza tus ingresos personales y mantiene un colchón en el negocio.
- Fondo de reserva para impuestos: aparta automáticamente el 25-35% de cada cobro para cubrir impuestos trimestrales y anuales. Este error no se comete dos veces.
- Fondo de emergencia del negocio: mantén tres a seis meses de gastos fijos del negocio en liquidez disponible.

**Paso 2: Gestión del flujo de caja en negocios con ingresos irregulares**

El mayor riesgo financiero del freelance no es la falta de ingresos sino la mala gestión del timing de cobros:

- Negocia condiciones de pago favorables: el estándar del sector puede ser 30 días, pero puedes negociar plazos más cortos para clientes nuevos.
- Factura inmediatamente al entregar: cada día que tardas en facturar es un día adicional de plazo de cobro efectivo.
- Anticipo del 30-50% en proyectos grandes: protege tu liquidez y filtra clientes no comprometidos.
- Diversifica tu cartera de clientes: nunca dependas de un solo cliente para más del 40% de tus ingresos. La concentración es el mayor riesgo de liquidez.
- Crea una proyección de caja a 90 días: actualízala semanalmente con los cobros esperados y compromisos de pago. Detecta problemas de liquidez antes de que ocurran.

**Paso 3: Cuándo la deuda es una herramienta estratégica para el freelancer**

La deuda no es necesariamente mala: es una herramienta que, bien usada, puede acelerar el crecimiento de tu negocio:

- Financiar equipamiento productivo: un ordenador, cámara o software que te permita trabajar con mayor calidad o velocidad tiene un ROI claro. Fináncialo si el coste mensual de la deuda es inferior al incremento de ingresos que genera.
- Inversión en formación de alto impacto: una certificación o curso que te permita acceder a proyectos de mayor valor se puede financiar si el retorno esperado supera ampliamente el coste.
- Capital de trabajo en momentos de crecimiento: si tienes varios proyectos confirmados pero necesitas invertir antes de cobrar (subcontratistas, herramientas), un crédito de circulante tiene sentido.
- Nunca financies gastos de vida personal con deuda del negocio.

**Paso 4: Evaluación de deuda para el freelancer**

Antes de asumir cualquier deuda, responde estas preguntas:

- ¿El activo financiado genera ingresos superiores al coste de la deuda en menos de 12 meses?
- ¿Puedo pagar la cuota mensual incluso en un mes de ingresos bajos?
- ¿Tengo clientes y proyectos confirmados que garantizan el flujo de caja necesario?
- ¿He explorado alternativas sin deuda (pago aplazado del proveedor, renting, leasing)?

**Paso 5: Planificación fiscal y estructura jurídica óptima**

La estructura jurídica que elijas (autónomo, SL, cooperativa) tiene implicaciones directas en tu estructura financiera:

- Autónomo individual: máxima simplicidad, menor coste de gestión, pero responsabilidad ilimitada con patrimonio personal.
- Sociedad limitada: separa el patrimonio personal del empresarial, permite optimización fiscal a partir de ciertos niveles de facturación, requiere mayor gestión contable.
- Consulta con un asesor fiscal el umbral de facturación a partir del cual la constitución de sociedad es ventajosa en tu jurisdicción.

**Formato de salida esperado**

Genera: (1) un modelo de proyección de caja a 90 días adaptado a freelancers con ingresos variables, (2) una checklist de criterios para evaluar si asumir una deuda tiene sentido en tu negocio, y (3) un plan de estructura de cuentas bancarias y distribución de ingresos para un freelancer con facturación mensual entre 3.000 y 10.000 euros.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estructura financiera y gestión de deuda en negocios freelance',
                'vote_score'        => 45,
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
