<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills405Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Optimización de presupuesto de marketing con IA y ROI predictivo por canal',
                'description'       => 'Usa IA para analizar el rendimiento de tus canales de marketing, redistribuir el presupuesto hacia los de mayor ROI y modelar el impacto de distintas asignaciones presupuestarias.',
                'prompt_content'    => <<<'EOT'
Eres un analista de marketing especializado en atribución de inversión y optimización de presupuesto. Tu tarea es ayudarme a usar IA para tomar decisiones de presupuesto de marketing más inteligentes, basadas en datos de rendimiento real de cada canal.

Contexto:
Soy responsable de marketing digital con un presupuesto mensual de 25.000€ distribuido entre Google Ads, Meta Ads, LinkedIn, SEO, email marketing y eventos. Tengo datos de conversión por canal pero no sé cómo reasignar el presupuesto para maximizar el retorno. Tomo decisiones basadas en intuición más que en datos.

Instrucción principal:
Guíame en el uso de IA para analizar el rendimiento actual de mis canales y tomar decisiones de presupuesto basadas en datos de ROI real y modelado predictivo.

Bloque 1 — Auditoría de rendimiento actual:
Crea el proceso para auditar el rendimiento actual de cada canal de marketing:
- Métricas que debo recopilar para cada canal (CPL, CPO, LTV por canal, tiempo de conversión)
- Prompt de IA para analizar una tabla de rendimiento por canal e identificar los más y menos eficientes
- Cómo calcular el ROI real de canales de largo plazo como SEO o relaciones públicas
- Diagnóstico de atribución: problemas comunes del last-click y cómo mitigarlos

Bloque 2 — Modelo de ROI predictivo con IA:
Diseña el modelo para predecir el ROI de distintas asignaciones presupuestarias:
- Variables que el modelo debe considerar (saturación de canal, estacionalidad, histórico)
- Prompt para simular 3 escenarios de redistribución del presupuesto y comparar el impacto esperado
- Cómo modelar la curva de saturación de un canal (cuándo más inversión deja de generar más retorno)
- Cómo presentar estos escenarios al CFO o al CEO para justificar cambios en el presupuesto

Bloque 3 — Optimización táctica con IA:
Crea los prompts para optimizar la inversión dentro de cada canal:
- Prompt para analizar el rendimiento de campañas de Google Ads e identificar palabras clave, grupos de anuncios y horarios a pausar o escalar
- Prompt para diagnosticar una campaña de Meta Ads con bajo ROAS y proponer las 5 mejoras más urgentes
- Prompt para priorizar los contenidos SEO en los que invertir tiempo basándose en volumen y conversión

Bloque 4 — Reporting mensual automatizado:
Diseña el sistema de reporting financiero de marketing:
- Estructura del informe mensual de marketing: qué métricas, en qué orden y con qué contexto
- Prompt para generar el comentario narrativo del informe: qué explica los resultados y qué se va a hacer
- Cómo automatizar la generación del informe usando datos de Google Sheets y una API de IA
- Formato del resumen ejecutivo para el comité de dirección (máximo 1 página)

Bloque 5 — Planificación anual del presupuesto:
Define el proceso de planificación anual del presupuesto de marketing con IA:
- Cómo usar el histórico de 12 meses para proyectar el presupuesto del próximo año por canal
- Prompt para modelar el impacto de un aumento del 20% en el presupuesto: ¿dónde invertirlo?
- Cómo definir OKRs de marketing alineados con los objetivos financieros de la empresa
- Proceso de revisión trimestral del presupuesto con ajuste basado en rendimiento real

Formato de entrega:
Framework de análisis, prompts de optimización y plantilla de reporting ejecutivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reasignar el presupuesto de marketing hacia los canales de mayor ROI usando IA y modelado predictivo',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Integración de APIs financieras con análisis de datos asistido por IA en aplicaciones',
                'description'       => 'Aprende a integrar APIs financieras como Plaid, Stripe o Open Banking en aplicaciones web, y a usar IA para analizar y presentar los datos financieros de forma significativa para el usuario.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador backend especializado en integraciones financieras y fintech. Tu tarea es ayudarme a integrar APIs financieras en una aplicación web y a usar modelos de IA para analizar y contextualizar los datos financieros de forma útil para el usuario final.

Contexto:
Estoy construyendo una aplicación de gestión financiera personal para pequeñas empresas. Necesito integrar fuentes de datos bancarios, categorizar transacciones automáticamente con IA, generar informes y detectar anomalías o patrones de gasto inusuales.

Instrucción principal:
Guíame en el diseño e implementación de la capa de integración financiera y el análisis con IA, con código funcional y arquitectura clara.

Parte 1 — Integración con APIs bancarias:
Proporciona una guía técnica para integrar las principales APIs financieras:
- Plaid (mercado americano): autenticación OAuth, endpoints de transacciones, categorías
- Open Banking / PSD2 (mercado europeo): flujo de consentimiento, agregadores disponibles
- Stripe (pagos propios): cómo extraer y analizar los datos de payments y subscriptions
- Comparativa: cuándo usar cada una y sus limitaciones para un MVP

Incluye ejemplos de código Python o Node.js para la llamada básica a cada API.

Parte 2 — Categorización de transacciones con IA:
Diseña el sistema de categorización automática de transacciones:
- Prompt de sistema para un modelo de IA que categorice transacciones basándose en el nombre del comercio, importe y descripción
- Categorías estándar que el modelo debe usar (con taxonomía clara)
- Cómo manejar transacciones ambiguas: solicitar confirmación del usuario vs. inferir con confianza
- Proceso de aprendizaje: cómo mejorar la categorización con las correcciones del usuario

Incluye el código de la función de categorización con manejo de errores y fallback.

Parte 3 — Detección de anomalías financieras:
Crea el sistema de detección de patrones inusuales:
- Algoritmo de detección de gastos anómalos (Z-score, IQR o modelo de IA — elige el más apropiado)
- Prompt para que la IA interprete una anomalía detectada y genere un mensaje de alerta comprensible
- Qué tipos de anomalías son más relevantes para pequeñas empresas (picos de gasto, suscripciones olvidadas, cargos duplicados)
- Sistema de notificaciones: cuándo alertar al usuario y con qué urgencia

Parte 4 — Generación de informes financieros con IA:
Diseña el sistema de informes automáticos:
- Estructura del informe mensual de tesorería: saldo, ingresos, gastos por categoría, variación
- Prompt para generar el comentario narrativo del informe en lenguaje natural
- Cómo generar proyecciones de flujo de caja a 30-60-90 días basadas en el histórico
- Visualizaciones recomendadas: qué gráficos mostrar para cada tipo de dato financiero

Parte 5 — Seguridad y cumplimiento:
Define los requisitos de seguridad para una aplicación con datos financieros:
- Cifrado de datos en reposo y en tránsito: qué estándares aplicar
- Gestión de tokens de acceso bancario: almacenamiento seguro y rotación
- Cumplimiento PCI DSS básico para una aplicación que maneja datos de tarjetas
- Auditoría de accesos: qué logs guardar y durante cuánto tiempo

Formato de entrega:
Código comentado, arquitectura en texto estructurado, prompts de IA listos para usar y checklist de seguridad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir una capa de análisis financiero inteligente con APIs bancarias y modelos de IA',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Estimación de proyectos y gestión financiera para diseñadores freelance con IA',
                'description'       => 'Aprende a usar IA para calcular presupuestos precisos, gestionar la rentabilidad de tus proyectos de diseño y tomar decisiones financieras informadas como profesional independiente.',
                'prompt_content'    => <<<'EOT'
Eres un consultor financiero especializado en ayudar a profesionales creativos freelance a gestionar sus finanzas de negocio de forma sostenible y rentable. Tu tarea es ayudarme a usar IA para mejorar mis estimaciones de proyectos, gestionar mi tesorería y tomar decisiones financieras más inteligentes.

Contexto:
Soy diseñadora UX/UI freelance con 3 años de experiencia. Facturo entre 4.000€ y 6.000€ al mes pero tengo meses muy irregulares. Mis presupuestos a menudo me quedan cortos y acabo trabajando más horas de las facturadas. No tengo un sistema claro de gestión financiera.

Instrucción principal:
Guíame en la construcción de un sistema de gestión financiera para freelancers de diseño usando IA como herramienta de cálculo y análisis.

Módulo 1 — Cálculo de tarifa mínima viable:
Ayúdame a calcular mi tarifa hora mínima de forma rigurosa:
- Lista de todos los costes que debo incluir: gastos fijos, variables, impuestos, seguro autónomo
- Cómo calcular las horas realmente facturables al mes (descontando vacaciones, formación, administración)
- Prompt de IA para calcular la tarifa hora mínima dado un objetivo de ingresos netos mensual
- Cómo ajustar la tarifa según el tipo de proyecto (estrategia UX vs. producción visual vs. consultoria)

Módulo 2 — Estimación precisa de proyectos:
Diseña el sistema de estimación de proyectos con IA:
- Prompt para descomponer cualquier proyecto de diseño en tareas y estimar las horas de cada una
- Factores de riesgo que debo añadir al presupuesto base (rondas de revisión, complejidad, cliente nuevo)
- Cómo calcular el buffer de imprevistos basándome en el histórico de mis proyectos anteriores
- Plantilla de propuesta económica: qué incluir, cómo presentar los precios y cómo estructurar los hitos de pago

Módulo 3 — Control de rentabilidad por proyecto:
Crea el sistema para medir si cada proyecto es realmente rentable:
- Cómo registrar las horas reales por proyecto para comparar con la estimación
- Prompt de IA para analizar el histórico de proyectos e identificar los tipos de trabajo más rentables
- Señales de alarma: cuándo un proyecto está yendo mal económicamente y qué hacer
- Proceso de cierre de proyecto: facturación final, lecciones aprendidas y actualización de tarifas

Módulo 4 — Gestión de tesorería y flujo de caja:
Define el sistema de gestión financiera mensual:
- Estructura del presupuesto mensual freelance: ingresos esperados, gastos fijos, ahorro, impuestos reservados
- Prompt para proyectar el flujo de caja de los próximos 3 meses basándome en los proyectos confirmados y en pipeline
- Estrategia de ahorro para los meses de baja actividad: cuánto reservar y cómo invertirlo
- Sistema de separación de cuentas: operativo, impuestos, ahorro, inversión

Módulo 5 — Optimización fiscal con IA:
Ayúdame a entender mis obligaciones fiscales y a optimizarlas legalmente:
- Gastos deducibles habituales para un diseñador freelance en España
- Prompt para analizar mis gastos del mes y clasificarlos en deducibles y no deducibles
- Cómo usar la IA para preparar la información para mi gestor de forma más eficiente
- Diferencia entre régimen de estimación directa simplificada y módulos para diseñadores

Formato de entrega:
Calculadoras, prompts, plantillas y sistema de seguimiento mensual completo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejorar la rentabilidad y la gestión financiera de proyectos de diseño freelance con IA',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Análisis de márgenes y estrategia de pricing B2B con IA para equipos de ventas',
                'description'       => 'Usa IA para analizar la rentabilidad de tus deals, optimizar la estrategia de pricing B2B y negociar descuentos con datos sólidos que protejan el margen del negocio.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en revenue operations y pricing estratégico para empresas B2B. Tu tarea es ayudarme a usar IA para entender la rentabilidad real de mis deals, tomar mejores decisiones de pricing en el proceso de venta y negociar desde una posición de datos en lugar de intuición.

Contexto:
Soy Account Executive en una empresa de software B2B. Tengo flexibilidad para ofrecer descuentos de hasta el 20%. Frecuentemente ofrezco descuentos máximos para cerrar deals sin saber si el cliente realmente los necesita o si habría cerrado sin descuento. Esto está afectando el ARR y los márgenes del negocio.

Instrucción principal:
Guíame en el uso de IA para tomar decisiones de pricing y descuento más inteligentes durante el proceso de venta B2B.

Área 1 — Comprensión del valor económico del cliente:
Diseña el proceso para calcular el valor económico que mi solución genera para cada cliente:
- Preguntas de discovery para identificar el impacto económico del problema que resuelvo
- Cómo calcular el ROI estimado de mi solución para una cuenta específica
- Prompt de IA para convertir los datos del cliente en una propuesta de valor económica cuantificada
- Cómo usar ese cálculo de ROI como ancla en la conversación de precio

Área 2 — Estrategia de pricing por segmento:
Define la estrategia de pricing diferenciada por tipo de cliente:
- Cómo segmentar mi cartera de clientes potenciales por disposición a pagar (willingness to pay)
- Señales que indican que un cliente pagaría el precio lista sin descuento
- Señales que indican que el precio es un obstáculo real vs. una objeción de negociación
- Prompt de IA para analizar el perfil de un cliente y recomendar el nivel de descuento óptimo

Área 3 — Gestión de descuentos con datos:
Crea el framework para gestionar los descuentos de forma estratégica:
- Cómo calcular el impacto real de un descuento del 10%, 15% y 20% en el LTV del cliente
- Alternativas al descuento que preservan el margen: condiciones de pago, servicios adicionales, garantías
- Cómo responder a la presión de precio sin ceder inmediatamente: tácticas y frases concretas
- Proceso de aprobación de descuentos: qué datos debe presentar el AE antes de escalar la petición

Área 4 — Análisis de rentabilidad por deal:
Diseña el sistema para analizar la rentabilidad de cada oportunidad antes de cerrarla:
- Variables que determinan la rentabilidad real de un deal (precio, coste de implementación, probabilidad de churn, expansión futura)
- Prompt de IA para evaluar si un deal con descuento es rentable a largo plazo o un bad deal
- Cómo usar el Customer Acquisition Cost (CAC) para evaluar el esfuerzo de venta invertido
- Criterios para rechazar un deal o redirigirlo a un plan de menor precio

Área 5 — Pricing en la renovación y la expansión:
Define la estrategia de pricing para clientes existentes:
- Cómo subir precios en renovación sin perder el cliente
- Timing y argumento para proponer upsells basados en el ROI demostrado durante el primer año
- Prompt de IA para preparar la conversación de renovación con datos de uso y valor generado
- Cómo manejar la amenaza de un competidor más barato durante la renovación

Formato de entrega:
Framework de pricing, prompts de análisis de deal y tácticas de negociación documentadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Tomar decisiones de pricing y descuento en ventas B2B basadas en datos de rentabilidad real con IA',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Modelado financiero de nuevas features con IA para justificar el ROI al negocio',
                'description'       => 'Aprende a usar IA para construir modelos financieros que cuantifiquen el impacto económico de nuevas funcionalidades de producto y comunicar el ROI de forma convincente al equipo ejecutivo.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con experiencia en modelado financiero y comunicación de valor de negocio para audiencias ejecutivas. Tu tarea es ayudarme a usar IA para construir modelos financieros sólidos que justifiquen el desarrollo de nuevas funcionalidades de producto ante el CFO y el CEO.

Contexto:
Soy PM en una empresa SaaS B2B. Frecuentemente tengo dificultades para priorizar features con el equipo de negocio porque no puedo cuantificar el impacto económico de cada una. Los ejecutivos quieren saber "cuánto nos genera esto" y yo solo tengo hipótesis cualitativas.

Instrucción principal:
Guíame en el uso de IA para construir modelos financieros de features de producto que sean rigurosos, defensibles y comprensibles para audiencias no técnicas.

Sección 1 — Framework de cuantificación de valor:
Define el framework para cuantificar el impacto económico de una feature:
- Tipos de impacto económico: aumento de ingresos, reducción de churn, reducción de costes operativos, aceleración del ciclo de venta
- Cómo identificar qué tipo de impacto tiene cada feature antes de modelarla
- Fuentes de datos para los inputs del modelo (métricas de producto actuales, benchmarks del sector, entrevistas a clientes)
- Cómo declarar los supuestos del modelo de forma transparente para ganar credibilidad

Sección 2 — Modelo de impacto en retención:
Crea el modelo financiero para features que reducen el churn:
- Variables del modelo: churn rate actual, ARR en riesgo, probabilidad de que la feature reduzca el churn y en cuánto
- Fórmula para calcular el ARR preservado por la feature en 12 meses
- Cómo incluir el coste de desarrollo en el cálculo del ROI y el tiempo de recuperación
- Prompt de IA para generar 3 escenarios (conservador, base, optimista) del impacto en retención

Sección 3 — Modelo de impacto en adquisición:
Diseña el modelo para features que aceleran la adquisición de nuevos clientes:
- Features que impactan el win rate: cómo estimarlo a partir de datos de win/loss
- Features que reducen el sales cycle: impacto en el CAC y en la capacidad del equipo de ventas
- Cómo cuantificar el impacto de una feature en el NPS y su efecto indirecto en el boca a boca
- Prompt de IA para simular el impacto en ARR de una mejora del win rate del 2%

Sección 4 — Modelo de impacto en eficiencia operativa:
Define el modelo para features que reducen costes internos:
- Features que reducen el volumen de soporte: cómo calcular el ahorro en horas del equipo de CS
- Features de automatización: coste actual del proceso manual vs. coste post-automatización
- Cómo convertir horas ahorradas en ahorro económico real para presentarlo al CFO
- Prompt de IA para estimar el ahorro anual de una feature de autoservicio dado el volumen de tickets actual

Sección 5 — Presentación ejecutiva del modelo:
Diseña la presentación del modelo financiero al comité de dirección:
- Estructura de la presentación: problema de negocio, solución propuesta, impacto económico, coste, ROI, recomendación
- Cómo visualizar el modelo financiero de forma simple (una sola tabla o gráfico clave)
- Cómo responder a las preguntas difíciles del CFO sobre los supuestos del modelo
- Prompt de IA para revisar tu modelo y detectar supuestos débiles o lógica inconsistente antes de presentarlo

Formato de entrega:
Modelos financieros en formato tabla, prompts de análisis y estructura de presentación ejecutiva.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Cuantificar el ROI de features de producto con IA para priorizar el roadmap con argumentos financieros',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de compensaciones y nóminas con IA para equipos de recursos humanos',
                'description'       => 'Usa IA para diseñar bandas salariales competitivas, analizar equidad de compensación interna, gestionar el proceso de revisión salarial y comunicar las decisiones de forma transparente.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en compensación y beneficios (Compensation & Benefits) con experiencia en diseño de estructuras salariales y gestión de revisiones de compensación. Tu tarea es ayudarme a usar IA para hacer el proceso de gestión de compensaciones más eficiente, justo y basado en datos.

Contexto:
Soy HR Manager en una empresa tecnológica de 120 empleados. Tenemos un proceso de revisión salarial anual caótico: no hay bandas salariales formales, cada manager negocia de forma diferente y hay sospecha de inequidades internas por género y antigüedad. Quiero profesionalizar todo esto.

Instrucción principal:
Guíame en el diseño de un sistema de compensación basado en datos con IA, desde el benchmarking salarial hasta la comunicación con empleados.

Etapa 1 — Benchmarking salarial con IA:
Diseña el proceso de benchmarking de salarios de mercado:
- Fuentes de datos salariales para el mercado tecnológico español (Glassdoor, LinkedIn Salary, Infojobs, Randstad)
- Prompt de IA para analizar los datos de mercado recopilados y calcular el percentil 25, 50 y 75 por rol y nivel
- Cómo ajustar los benchmarks por ubicación geográfica, tamaño de empresa y sector específico
- Proceso de actualización anual del benchmarking

Etapa 2 — Diseño de bandas salariales:
Crea la estructura de bandas salariales para la empresa:
- Cómo definir los niveles de carrera (Junior, Mid, Senior, Lead, Principal)
- Estructura de cada banda: mínimo, punto medio, máximo y cómo calcularlos
- Cómo posicionar a los empleados actuales dentro de las bandas y gestionar las fueras de banda
- Prompt de IA para proponer la estructura de bandas basándose en los datos de benchmarking y la estructura interna actual

Etapa 3 — Análisis de equidad de compensación:
Diseña el análisis de equidad salarial interna:
- Variables que analizar: género, antigüedad, departamento, nivel, rendimiento
- Prompt de IA para analizar un dataset de compensación e identificar brechas salariales significativas
- Cómo interpretar los resultados: diferencias estadísticas vs. diferencias explicadas por variables objetivas
- Plan de acción para corregir inequidades detectadas de forma progresiva y sostenible

Etapa 4 — Proceso de revisión salarial anual:
Define el proceso de revisión salarial con IA:
- Criterios objetivos para la revisión: rendimiento, posición en la banda, mercado, equidad interna
- Cómo calcular el presupuesto de revisión salarial y cómo distribuirlo entre los distintos criterios
- Prompt de IA para generar la propuesta de revisión de compensación para cada empleado
- Proceso de validación con managers: qué deben revisar y cómo justificar las decisiones

Etapa 5 — Comunicación de compensación:
Diseña el proceso de comunicación de las decisiones salariales:
- Cómo comunicar una revisión positiva de forma que refuerce la motivación
- Cómo comunicar una revisión nula o por debajo de las expectativas del empleado
- Guión de conversación para el manager: los momentos clave y las frases más efectivas
- Prompt de IA para preparar la conversación de compensación basándose en el historial del empleado

Formato de entrega:
Framework de compensación, plantillas de análisis, proceso de revisión y guiones de comunicación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Profesionalizar la gestión de compensaciones y reducir inequidades salariales con IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de estados financieros y forecasting con IA para equipos de finanzas',
                'description'       => 'Usa IA para analizar estados financieros, detectar tendencias relevantes, generar narrativa automática de los resultados y construir modelos de forecasting más precisos.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero senior con experiencia en análisis de estados financieros, modelado y forecasting para empresas en crecimiento. Tu tarea es ayudarme a usar IA para acelerar el análisis financiero, mejorar la calidad de los forecasts y comunicar los resultados de forma más efectiva a la dirección.

Contexto:
Soy analista financiero en una empresa con facturación de 8M€. Preparo los estados financieros mensuales y el forecast trimestral. El proceso actual me lleva 4-5 días al mes solo en Excel. La calidad del análisis sufre porque paso más tiempo produciendo datos que interpretándolos.

Instrucción principal:
Guíame en el uso de IA para automatizar partes del análisis financiero, mejorar la interpretación de los datos y construir modelos de forecasting más sólidos.

Bloque 1 — Análisis de la cuenta de resultados con IA:
Crea el proceso de análisis mensual de la P&L con IA:
- Prompt para analizar la cuenta de resultados del mes y extraer: variaciones significativas, ratios clave, comparativa con el mismo periodo del año anterior
- Prompt para identificar los 3 drivers más importantes de la variación de EBITDA respecto al mes anterior
- Cómo generar el comentario ejecutivo de la P&L: qué explica los resultados en 3 párrafos
- Señales de alarma: qué variaciones deben llegar al CFO de forma inmediata

Bloque 2 — Análisis del balance y la tesorería:
Diseña el análisis de la posición financiera con IA:
- Ratios de liquidez y solvencia: cómo calcularlos e interpretarlos con contexto sectorial
- Análisis del ciclo de conversión de caja: ¿qué palancas mejorarían nuestra posición de caja?
- Prompt para analizar la evolución de las cuentas por cobrar y detectar riesgos de morosidad
- Cómo proyectar el saldo de caja a 13 semanas y detectar posibles tensiones de liquidez

Bloque 3 — Modelo de forecasting con IA:
Construye el modelo de forecasting trimestral con IA:
- Tipos de forecasting: bottom-up (basado en operaciones) vs. top-down (basado en objetivos) — cuándo usar cada uno
- Variables macroeconómicas que debo incorporar en el forecast (inflación, tipos de interés, demanda sectorial)
- Prompt para generar 3 escenarios de forecast (conservador, base, optimista) con hipótesis explícitas
- Cómo medir la precisión del forecast histórico y mejorar el modelo con esos datos

Bloque 4 — Análisis de desviaciones presupuestarias:
Define el proceso de análisis de variaciones presupuestarias:
- Análisis de variaciones: cómo separar las variaciones de precio, volumen y mezcla
- Prompt para analizar una desviación presupuestaria y determinar si es estructural o puntual
- Cómo priorizar qué desviaciones requieren acción correctiva y cuáles son aceptables
- Formato del informe de desviaciones para el equipo directivo: lo que deben ver en 2 minutos

Bloque 5 — Automatización y eficiencia del proceso:
Define el plan de automatización del proceso de análisis financiero:
- Herramientas para conectar el ERP con el modelo de análisis (Power Query, Python, conectores nativos)
- Qué partes del análisis se pueden automatizar completamente y cuáles requieren juicio humano
- Prompt para que la IA revise un modelo financiero en Excel y detecte errores de fórmulas o lógica inconsistente
- Plan de reducción del tiempo de cierre: de 5 días a 2 días en 6 meses

Formato de entrega:
Framework de análisis, prompts por área financiera y plan de automatización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Reducir el tiempo de análisis financiero mensual de 5 días a 2 días usando IA',
                'vote_score'        => 53,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de facturación, costes legales y rentabilidad de asuntos con IA en despachos',
                'description'       => 'Usa IA para optimizar el control de tiempos y facturación en despachos de abogados, analizar la rentabilidad por asunto y cliente, y reducir las horas no facturables.',
                'prompt_content'    => <<<'EOT'
Eres un consultor especializado en gestión financiera y operativa de despachos de abogados. Tu tarea es ayudarme a usar IA para mejorar el control de tiempos, la facturación, el análisis de rentabilidad y la gestión financiera general del despacho.

Contexto:
Soy socio director de un despacho de abogados con 12 profesionales. Tenemos un problema grave de horas no registradas, facturas que se emiten tarde y escasa visibilidad de la rentabilidad por asunto y por cliente. El margen del despacho está bajo presión a pesar de tener un volumen de trabajo alto.

Instrucción principal:
Guíame en el uso de IA para transformar la gestión financiera del despacho, desde el control de tiempos hasta el análisis de rentabilidad.

Área 1 — Control de tiempos y registro de actividad:
Diseña el sistema de registro de tiempos asistido por IA:
- Cómo usar IA para recordar y facilitar el registro de actividades al final del día (prompt de registro diario)
- Prompt para convertir una descripción en lenguaje natural de las actividades del día en un desglose de tiempos por asunto
- Herramientas de integración: cómo conectar el registro de tiempos con el software de gestión del despacho
- Análisis semanal de horas: cuántas son facturables, no facturables y en qué categorías

Área 2 — Optimización de la facturación:
Define el proceso de facturación optimizado con IA:
- Ciclo de facturación óptimo para un despacho: cuándo facturar y cómo evitar retrasos
- Prompt de IA para revisar el detalle de horas de un asunto y sugerir una descripción de factura profesional, clara y defensible ante el cliente
- Cómo gestionar las objeciones de los clientes a las facturas: proceso y argumentos
- Sistema de alertas: asuntos con horas acumuladas sin facturar por encima del umbral acordado

Área 3 — Análisis de rentabilidad por asunto y cliente:
Diseña el modelo de rentabilidad del despacho:
- Variables que determinan la rentabilidad de un asunto: tarifa acordada, horas registradas, horas facturadas, ratio de cobranza
- Prompt de IA para analizar el portfolio de asuntos activos e identificar los más y menos rentables
- Cómo calcular el valor del cliente a largo plazo (CLTV legal) considerando la recurrencia de asuntos
- Criterios para renegociar tarifas con clientes no rentables o rechazar nuevos asuntos de bajo margen

Área 4 — Pricing y presupuestación de asuntos:
Crea el sistema de pricing para nuevos asuntos:
- Cómo construir un presupuesto por fases para un asunto complejo de forma que proteja al despacho
- Ventajas y riesgos del pricing por horas vs. honorarios fijos vs. quota litis
- Prompt de IA para estimar las horas y el coste de un asunto similar basándose en el histórico del despacho
- Cómo presentar el presupuesto al cliente y manejar la negociación de honorarios

Área 5 — Dashboard financiero del despacho:
Define el cuadro de mando financiero del despacho:
- KPIs esenciales para un despacho: realization rate, collection rate, horas por profesional, WIP (work in progress)
- Estructura del informe mensual para el comité de socios: rentabilidad global, por área y por profesional
- Prompt de IA para generar el análisis narrativo del informe mensual con las tendencias y alertas clave
- Objetivos de mejora a 12 meses: cómo usar estos datos para tomar decisiones de contratación y especialización

Formato de entrega:
Framework financiero para despachos, prompts de análisis y sistema de KPIs.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Mejorar la rentabilidad del despacho reduciendo horas no facturables y optimizando el pricing con IA',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de churn financiero y optimización del LTV con IA en customer success',
                'description'       => 'Usa IA para modelar el impacto financiero del churn, calcular y segmentar el LTV de tu cartera de clientes, y diseñar estrategias de retención con el mayor ROI.',
                'prompt_content'    => <<<'EOT'
Eres un experto en revenue operations y customer success con especialización en métricas financieras de retención. Tu tarea es ayudarme a usar IA para entender el impacto financiero real del churn, modelar el LTV de mi cartera y priorizar las estrategias de retención con el mayor retorno económico.

Contexto:
Soy Director de Customer Success en una empresa SaaS con 200 clientes y un ARR de 4M€. El churn mensual es del 2% (un 24% anual), que es demasiado alto. No tenemos claridad sobre qué segmentos generan más churn ni sobre el impacto financiero real de cada punto de churn que reducimos.

Instrucción principal:
Guíame en el uso de IA para modelar el churn financiero, calcular el LTV por segmento y diseñar un plan de retención basado en ROI.

Módulo 1 — Modelado del impacto financiero del churn:
Construye el modelo financiero del churn con IA:
- Cómo calcular el ARR perdido por churn en los últimos 12 meses
- Impacto del churn en el crecimiento del ARR: cómo el churn compensa o anula el crecimiento por nuevos clientes
- Prompt de IA para simular el impacto de reducir el churn mensual del 2% al 1,5% y al 1% en el ARR a 24 meses
- Coste de adquisición de un nuevo cliente para reemplazar al que se fue: por qué retener siempre es más barato

Módulo 2 — Segmentación del churn por perfil de cliente:
Diseña el análisis de churn por segmento:
- Variables de segmentación: tamaño del cliente, sector, plan contratado, antigüedad, NPS, uso del producto
- Prompt de IA para analizar el histórico de bajas y determinar qué segmentos tienen mayor probabilidad de churn
- Cómo calcular el "valor en riesgo" de cada segmento: ARR × probabilidad de churn
- Identificación de los early warning signs que predicen el churn 90 días antes

Módulo 3 — Cálculo y optimización del LTV:
Define el modelo de LTV por segmento con IA:
- Fórmula de LTV apropiada para SaaS: LTV = ARPU × Gross Margin / Churn Rate
- Cómo calcular el LTV por cohorte de entrada y comparar cohortes a lo largo del tiempo
- Prompt de IA para analizar el LTV de la cartera actual y detectar los segmentos con mayor y menor valor a largo plazo
- Estrategias para aumentar el LTV: reducir churn, aumentar ARPU via upsell, mejorar márgenes

Módulo 4 — Priorización de estrategias de retención por ROI:
Crea el framework de priorización de iniciativas de retención:
- Cómo estimar el ROI de cada iniciativa de retención (training, health checks, onboarding mejorado, CSM dedicado)
- Prompt de IA para comparar 5 iniciativas de retención y ordenarlas por ROI esperado dado el coste de implementación
- Criterio de inversión: hasta cuánto es rentable gastar en retener a un cliente según su LTV
- Cómo distribuir el presupuesto de CS entre prevención de churn y generación de expansión

Módulo 5 — Reporting financiero de CS al equipo directivo:
Define el informe mensual financiero de customer success:
- Métricas que el CFO y el CEO necesitan ver: ARR bruto, churn neto, expansión, NRR, LTV:CAC
- Prompt de IA para generar el análisis narrativo del informe mensual de CS
- Cómo presentar el impacto del equipo de CS en el ARR de forma que sea comprensible para el equipo financiero
- Objetivos de NRR a 12 meses y el plan para alcanzarlos

Formato de entrega:
Modelos financieros de churn y LTV, prompts de análisis y framework de priorización de retención.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Cuantificar el impacto financiero del churn y priorizar estrategias de retención por ROI con IA',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión financiera personal y fiscal para freelancers con IA como asesor económico',
                'description'       => 'Usa IA para organizar tus finanzas personales y de negocio como freelancer, planificar los pagos fiscales, optimizar tus deducciones y construir un sistema de ahorro e inversión sostenible.',
                'prompt_content'    => <<<'EOT'
Eres un asesor financiero y fiscal especializado en profesionales autónomos y freelancers. Tu tarea es ayudarme a usar IA para organizar mis finanzas personales y de negocio, planificar mis obligaciones fiscales y construir un sistema financiero sólido que me dé estabilidad a pesar de los ingresos irregulares.

Importante: la IA es una herramienta de apoyo y organización. Para decisiones fiscales específicas siempre consulta con un gestor o asesor fiscal habilitado.

Contexto:
Soy freelancer con 2 años de experiencia. Facturo entre 3.000€ y 7.000€ al mes según la temporada. Tengo el dinero mezclado en una sola cuenta, no sé cuánto debo reservar para impuestos, me llevo sustos en las declaraciones trimestrales y no tengo ningún plan de ahorro estructurado.

Instrucción principal:
Ayúdame a construir un sistema de gestión financiera completo para freelancer usando IA como apoyo en el análisis y la planificación.

Parte 1 — Sistema de cuentas y separación financiera:
Define la estructura de cuentas bancarias óptima para un freelancer:
- Cuántas cuentas necesito y para qué sirve cada una (operativa, impuestos, ahorro, emergencias)
- Qué porcentaje de cada ingreso va a cada cuenta (regla de separación automática)
- Cómo automatizar la separación para no tener que hacerlo manualmente
- Prompt de IA para calcular mis porcentajes de separación ideales dado mi nivel de ingresos y gastos fijos

Parte 2 — Planificación fiscal trimestral:
Diseña el sistema de planificación de obligaciones fiscales:
- Calendario fiscal del autónomo en España: IRPF, IVA, módulos (fechas clave del año)
- Cómo calcular cuánto reservar mensualmente para el pago del IRPF trimestral
- Cómo calcular el IVA neto a pagar en cada trimestre (IVA repercutido menos IVA soportado)
- Prompt de IA para estimar la carga fiscal anual dado un nivel de facturación e identificar oportunidades de optimización legal

Parte 3 — Gestión de gastos deducibles:
Crea el sistema de control de gastos deducibles:
- Lista completa de gastos deducibles habituales para freelancers en España (con porcentajes aplicables)
- Gastos deducibles del trabajo en casa: cómo aplicarlos correctamente
- Prompt de IA para revisar mi lista de gastos mensuales y clasificarlos en: totalmente deducibles, parcialmente deducibles y no deducibles
- Herramientas de ticketing digital: cómo digitalizar y organizar facturas para la declaración

Parte 4 — Gestión de la irregularidad de ingresos:
Define la estrategia financiera para los meses de baja facturación:
- Cómo calcular mi "número mínimo": los ingresos mínimos que necesito para cubrir todos los gastos y obligaciones
- Fondo de emergencias para freelancer: cuánto necesito y cómo construirlo
- Cómo nivelar los meses malos usando el fondo de operaciones
- Prompt de IA para proyectar mi flujo de caja de los próximos 3 meses basándome en mis proyectos confirmados y mis gastos fijos

Parte 5 — Plan de ahorro e inversión progresivo:
Diseña el plan de construcción de patrimonio para freelancer:
- Cuándo es el momento correcto de empezar a invertir (después de tener el fondo de emergencias)
- Vehículos de inversión accesibles para autónomos: planes de pensiones (deducibles), fondos indexados, cuentas de ahorro
- Prompt de IA para crear un plan de ahorro e inversión personalizado dado mi nivel de ingresos, gastos y horizonte temporal
- Cómo revisar y ajustar el plan financiero cada 6 meses a medida que el negocio crece

Formato de entrega:
Sistema de cuentas, calendario fiscal, checklist de gastos deducibles, plan de ahorro y prompts de análisis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un sistema financiero sólido como freelancer con IA para eliminar los sustos fiscales y el estrés económico',
                'vote_score'        => 58,
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
