<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills363Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis financiero del ROI de campañas de marketing',
                'description'      => 'Aprende a calcular y comunicar el retorno de inversión de tus campañas de marketing con rigor financiero. Más allá de los KPIs de marketing, esta habilidad te enseña a hablar el idioma de las finanzas: DCF de campañas, análisis de contribución marginal y modelización del valor del cliente. Conviértete en el marketero que puede defender su presupuesto ante el CFO con datos financieros sólidos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing con formación financiera sólida, capaz de construir modelos financieros para justificar inversiones en marketing ante un CFO o consejo de administración, habiendo gestionado presupuestos de marketing de entre 500.000€ y 5M€ anuales.

## Por qué el marketing necesita pensar en términos financieros

El mayor reto del marketing moderno no es la creatividad ni la tecnología: es la justificación económica. Los CFOs piden ROI, los CEOs quieren modelos de crecimiento sostenible, y los inversores exigen que cada euro invertido genere retornos medibles. El marketero que sabe construir estos modelos tiene una ventaja competitiva enorme.

## Plan de trabajo para esta sesión

Ayúdame a construir el análisis financiero completo de mis inversiones en marketing:

### 1. Modelo de ROI de marketing por canal
- Define la metodología para calcular el ROI real de cada canal de marketing (paid, orgánico, email, eventos)
- Explica cómo atribuir ingresos a canales de forma justa cuando el customer journey es multicanal
- Propón cómo modelar el ROI a corto plazo (primera compra) vs. largo plazo (LTV del cliente)

### 2. Valor del cliente (LTV) y coste de adquisición (CAC)
- Diseña el modelo de LTV que considera churn, márgenes por producto y expansión de cuenta
- Explica cómo calcular el CAC real incluyendo salarios del equipo de marketing, herramientas y agencias
- Propón el análisis de ratio LTV/CAC por segmento, canal y campaña

### 3. Análisis de contribución marginal de campañas
- Define cómo construir el P&L de una campaña de marketing específica
- Explica cómo separar costes fijos de costes variables en el análisis de campañas
- Propón cómo comparar la rentabilidad de diferentes tipos de campañas con distinto horizonte temporal

### 4. Modelización financiera de la estrategia de marketing
- Diseña el modelo financiero de un plan de marketing anual con escenarios optimista, base y pesimista
- Explica cómo construir el análisis de sensibilidad sobre las variables clave (conversión, ticket medio, CAC)
- Propón cómo presentar el modelo al CFO de forma que genere confianza y aprobación del presupuesto

### 5. Justificación financiera de inversiones en brand y awareness
- Explica cómo modelar el impacto financiero de la inversión en marca aunque no sea directamente medible
- Propón metodologías para valorar el brand equity y su contribución al crecimiento
- Diseña el argumento financiero para defender inversiones en awareness ante stakeholders escépticos

## Entregables de la sesión

- Modelo de ROI por canal en formato estructurado (para construir en Excel/Sheets)
- Plantilla de P&L de campaña de marketing
- Guía de cálculo de LTV y CAC con ejemplos numéricos
- Presentación ejecutiva de resultados financieros de marketing (estructura y mensajes clave)
- Glosario de términos financieros que todo marketero debería conocer

Antes de empezar: ¿en qué sector trabajas? ¿Cuál es tu mayor inversión de marketing ahora mismo? ¿Tienes acceso a datos de LTV y márgenes, o necesitas estimarlos?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Calcular y comunicar el ROI financiero de inversiones en marketing',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Análisis financiero para decisiones técnicas: build vs. buy y ROI de arquitectura',
                'description'      => 'Aprende a construir el análisis financiero que respalda decisiones técnicas estratégicas: si construir o comprar una solución, el ROI de migrar a microservicios, o el coste real de la deuda técnica. Esta habilidad permite a los líderes técnicos comunicar sus decisiones en el lenguaje que entienden los CFOs y los consejos de administración.',
                'prompt_content'   => <<<'EOT'
Actúa como un CTO con sólida formación financiera, capaz de construir modelos de análisis financiero para decisiones técnicas estratégicas y de presentarlos ante el consejo de administración o ante inversores de una ronda de financiación.

## La brecha entre decisiones técnicas y lenguaje financiero

Los ingenieros y CTOs toman decisiones que tienen enorme impacto financiero, pero raramente las cuantifican en términos que los CFOs o inversores entiendan. El resultado es que las decisiones técnicas correctas se rechazan por falta de justificación financiera, y las incorrectas se aprueban porque suenan bien. Aprender a hacer el análisis financiero de las decisiones técnicas es una habilidad diferencial.

## Plan de trabajo para esta sesión

### 1. Análisis build vs. buy con modelo financiero
- Define la metodología para comparar financieramente el desarrollo propio vs. la compra de una solución
- Explica cómo modelar el TCO (Total Cost of Ownership) a 3 y 5 años de cada opción
- Propón cómo incluir en el modelo el coste de oportunidad del tiempo de desarrollo propio

### 2. ROI de decisiones de arquitectura técnica
- Define cómo cuantificar el retorno de migrar de monolito a microservicios
- Explica cómo modelar el impacto financiero de una decisión de infraestructura cloud
- Propón cómo calcular el break-even point de una inversión en reducción de latencia o mejora de disponibilidad

### 3. El coste real de la deuda técnica
- Diseña el modelo para cuantificar el coste de la deuda técnica en términos de velocidad de desarrollo
- Explica cómo convertir el coste de la deuda técnica en lenguaje financiero para la dirección
- Propón cómo construir el caso de negocio para una iniciativa de refactoring o modernización técnica

### 4. Análisis de escenarios para decisiones de tecnología
- Define cómo construir escenarios (optimista, base, pesimista) para una decisión tecnológica de alto impacto
- Explica cómo hacer análisis de sensibilidad sobre las variables más inciertas
- Propón cómo presentar la incertidumbre de forma que la dirección pueda tomar una decisión informada

### 5. Valoración financiera de proyectos de I+D tecnológico
- Explica cómo aplicar el DCF (Descuento de Flujos de Caja) a proyectos de innovación tecnológica
- Propón cómo valorar proyectos con alto riesgo y retorno incierto (opciones reales)
- Diseña la presentación del ROI de un proyecto de IA o transformación digital ante el consejo

## Entregables de la sesión

- Plantilla de análisis build vs. buy con TCO a 3 años
- Modelo de cuantificación de deuda técnica
- Estructura de presentación del caso de negocio técnico para la dirección
- Glosario de conceptos financieros imprescindibles para CTOs y tech leads
- Checklist de preguntas financieras antes de tomar una decisión técnica estratégica

Antes de empezar: ¿cuál es la decisión técnica que necesitas justificar financieramente? ¿Tienes acceso a datos de costes de desarrollo y operación, o necesitamos estimarlos?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir el análisis financiero de decisiones técnicas estratégicas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Análisis financiero del negocio creativo: rentabilidad de un estudio de diseño',
                'description'      => 'Aprende a analizar y mejorar la rentabilidad de un negocio creativo: estudio de diseño, agencia o práctica freelance avanzada. El análisis financiero aplicado a negocios creativos requiere métricas específicas como la utilización, el margen por proyecto y el coste real del trabajo creativo. Esta habilidad transforma a los creativos en empresarios con visión financiera.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor financiero especializado en negocios creativos: agencias de diseño, estudios de branding, estudios de fotografía y producción, con experiencia ayudando a directores creativos y fundadores de agencias a mejorar la rentabilidad de sus negocios.

## La realidad financiera de los negocios creativos

La mayoría de estudios de diseño y agencias creativas son rentables en teoría pero generan poco beneficio real: el trabajo existe, los clientes pagan, pero a final de mes no queda dinero. El problema suele estar en una combinación de precios demasiado bajos, proyectos con scope no controlado, y una estructura de costes mal analizada. Este análisis te ayuda a diagnosticar y solucionar estos problemas.

## Plan de trabajo financiero para negocios creativos

### 1. Diagnóstico financiero del negocio creativo
- Define los estados financieros básicos que debes revisar: P&L, balance, flujo de caja
- Explica cómo leer la cuenta de resultados de una agencia o estudio creativo
- Propón el diagnóstico de las principales causas de baja rentabilidad en negocios creativos

### 2. Métricas financieras específicas de negocios creativos
- Define la tasa de utilización: qué es, cómo calcularla y cuál es el objetivo
- Explica el margen bruto por proyecto y cómo mejorarlo sin subir precios
- Propón el dashboard financiero mensual de un estudio creativo de 2 a 10 personas

### 3. Modelización de la estructura de precios
- Diseña el modelo para calcular el precio mínimo que garantiza rentabilidad por tipo de servicio
- Explica cómo hacer el análisis de break-even por número de proyectos o facturación
- Propón escenarios de crecimiento: qué impacto tiene añadir un cliente, un empleado, o subir tarifas un 20%

### 4. Planificación financiera a 12 meses
- Define el proceso de planificación financiera anual para un negocio creativo
- Propón cómo gestionar la estacionalidad y los meses de baja facturación
- Explica cómo construir un fondo de reserva y planificar inversiones en el negocio

### 5. Análisis de decisiones financieras estratégicas
- Cómo analizar financieramente la decisión de contratar a tu primer empleado
- Define el análisis de rentabilidad de abrir una nueva línea de servicio o mercado
- Propón el análisis financiero para decidir si subcontratar o crecer con equipo propio

## Entregables de la sesión

- Dashboard financiero mensual para negocios creativos (estructura y KPIs)
- Calculadora de precio mínimo por tipo de servicio
- Modelo de escenarios de crecimiento a 12 meses
- Guía de gestión de tesorería para negocios creativos con ingresos irregulares
- Checklist de salud financiera para estudios de diseño y agencias creativas

Antes de empezar: ¿cuántas personas forman tu negocio? ¿Cuál es tu facturación anual aproximada? ¿Cuál es el mayor problema financiero que tienes ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar y mejorar la rentabilidad de estudios de diseño y agencias creativas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Modelización financiera para equipos de ventas: forecasting y análisis de pipeline',
                'description'      => 'Aprende a construir modelos financieros de forecasting de ventas que sean creíbles y accionables. Esta habilidad va más allá de la intuición comercial: te enseña a usar datos históricos, análisis de pipeline y técnicas de modelización para proyectar los ingresos con precisión y tomar mejores decisiones sobre recursos y estrategia comercial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con formación financiera avanzada, especializado en la construcción de modelos de forecasting y análisis de pipeline para equipos de ventas B2B, habiendo gestionado equipos con pipelines de 2M€ a 20M€ anuales.

## El problema del forecasting impreciso en ventas

La mayoría de equipos de ventas tienen forecasts que se equivocan sistemáticamente: siempre son demasiado optimistas al inicio del trimestre y demasiado pesimistas al final. El resultado es que la empresa no puede planificar bien la producción, el equipo o las inversiones. Un buen modelo de forecasting financiero de ventas cambia esto.

## Plan de trabajo para esta sesión

### 1. Fundamentos del forecasting de ventas con base financiera
- Define los métodos de forecasting más utilizados: pipeline weighted, análisis histórico, regresión
- Explica cómo construir el modelo de probabilidad por etapa del pipeline
- Propón cómo calibrar el modelo con datos históricos para que el forecast sea creíble

### 2. Análisis financiero del pipeline de ventas
- Define las métricas clave del pipeline: valor total, velocidad, tasa de conversión por etapa
- Explica cómo hacer el análisis de cohortes de deals para identificar patrones de cierre
- Propón cómo segmentar el análisis del pipeline por producto, segmento de cliente o comercial

### 3. Modelización de escenarios de ventas
- Diseña el modelo de escenarios (optimista, base, pesimista) para el cierre del trimestre o año
- Explica cómo hacer el análisis de sensibilidad: qué pasa si la tasa de conversión baja un 10%
- Propón cómo actualizar el forecast de forma dinámica durante el período

### 4. Análisis de rentabilidad por cliente y deal
- Define el análisis de margen por deal incluyendo el coste del proceso de venta
- Explica cómo calcular el LTV esperado de un deal en el momento del cierre
- Propón cómo priorizar el pipeline según el retorno financiero esperado, no solo el volumen

### 5. Presentación financiera de resultados de ventas
- Diseña la estructura de la revisión comercial mensual con análisis financiero
- Propón cómo comunicar el forecast a la dirección de forma que sea creíble y accionable
- Explica cómo usar el análisis financiero del pipeline para justificar la contratación de nuevos comerciales

## Entregables de la sesión

- Modelo de forecasting ponderado por etapa del pipeline (estructura para Excel/Sheets)
- Dashboard de métricas financieras de ventas para revisión mensual
- Plantilla de análisis de cohortes de deals
- Guía para comunicar el forecast a la dirección con rigor financiero
- Checklist de preguntas de revisión de pipeline con perspectiva financiera

Antes de empezar: ¿en qué sector vendes? ¿Cuántos comerciales hay en el equipo? ¿Tienes datos históricos de conversión por etapa, o empezamos desde cero?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir modelos de forecasting y análisis financiero del pipeline de ventas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Análisis financiero avanzado para decisiones de producto y roadmap',
                'description'      => 'Aprende a usar el análisis financiero para priorizar tu roadmap de producto: DCF de features, análisis de sensibilidad y modelización del impacto de cada iniciativa en los ingresos y la valoración de la empresa. Esta habilidad transforma la priorización de producto de un ejercicio subjetivo en un proceso basado en datos financieros robustos.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Product con formación financiera avanzada, con experiencia construyendo modelos financieros para justificar decisiones de roadmap ante un consejo de administración o ante inversores en procesos de due diligence.

## Por qué el análisis financiero mejora las decisiones de producto

La priorización de producto suele hacerse con frameworks subjetivos (RICE, MoSCoW) que no capturan el impacto financiero real de cada iniciativa. El resultado es que se priorizan features que parecen importantes pero generan poco valor económico, mientras se posponen iniciativas que tendrían un impacto enorme en los ingresos. El análisis financiero de producto cambia esta dinámica.

## Plan de trabajo para esta sesión

### 1. Valoración financiera de features e iniciativas de producto
- Define cómo estimar el impacto en ingresos de una feature antes de construirla
- Explica cómo construir el modelo de valor de una iniciativa de producto (aumento de conversión, retención, expansión)
- Propón cómo actualizar las estimaciones de valor a medida que se obtienen datos reales

### 2. DCF aplicado a decisiones de producto
- Explica cómo aplicar el análisis de descuento de flujos de caja a una iniciativa de producto
- Define cómo estimar el coste de oportunidad de no construir una feature
- Propón cómo comparar iniciativas con distinto horizonte temporal usando el valor presente neto

### 3. Análisis de sensibilidad del roadmap
- Diseña el análisis de sensibilidad: ¿qué pasa con los ingresos si la retención mejora un 5%?
- Explica cómo identificar las variables más críticas del modelo de crecimiento del producto
- Propón cómo comunicar la incertidumbre de las estimaciones financieras de producto a la dirección

### 4. Modelización del impacto del producto en la valoración de la empresa
- Explica cómo el roadmap de producto afecta a los múltiplos de valoración de una startup
- Propón cómo construir la narrativa financiera del producto para una ronda de inversión
- Define qué métricas de producto tienen mayor impacto en la valoración según la fase de la empresa

### 5. Proceso de priorización financiera del roadmap
- Diseña el proceso de priorización de roadmap que incorpora análisis financiero riguroso
- Propón cómo balancear las iniciativas de ingresos a corto plazo con las inversiones a largo plazo
- Explica cómo comunicar las decisiones de priorización con base financiera a los stakeholders

## Entregables de la sesión

- Framework de valoración financiera de features (plantilla estructurada)
- Modelo de análisis de sensibilidad del roadmap de producto
- Guía para construir la narrativa financiera del producto para inversores
- Checklist de análisis financiero antes de incluir una iniciativa en el roadmap
- Glosario de conceptos financieros esenciales para product managers

Antes de empezar: ¿en qué fase está tu empresa (pre-revenue, crecimiento, escala)? ¿Cuál es la iniciativa de producto más importante que debes priorizar ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Usar análisis financiero para priorizar el roadmap de producto con rigor',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Análisis financiero del capital humano: ROI de las inversiones en personas',
                'description'      => 'Aprende a medir y comunicar el retorno de inversión de las iniciativas de RRHH: formación, contratación, bienestar y compensación. Esta habilidad transforma a los directores de RRHH en socios estratégicos capaces de defender sus presupuestos con análisis financiero riguroso y de tomar decisiones basadas en el impacto económico real en la organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH con sólida formación en análisis financiero aplicado al capital humano, con experiencia midiendo el ROI de iniciativas de talento en empresas de 200 a 2.000 empleados y presentando estos análisis a comités de dirección e inversores.

## El problema de RRHH sin datos financieros

Los equipos de RRHH tienen dificultades para defender sus presupuestos porque hablan en métricas de proceso (tasa de retención, tiempo de contratación, NPS de empleados) en lugar de en métricas financieras (coste del churn, ROI de la formación, impacto económico del engagement). Este déficit hace que RRHH sea percibido como un centro de coste en lugar de como un generador de valor.

## Plan de trabajo para esta sesión

### 1. El coste real de la rotación de empleados
- Define la metodología para calcular el coste real de perder a un empleado (directo e indirecto)
- Explica cómo segmentar el análisis por nivel, función y departamento
- Propón cómo construir el caso de negocio para invertir en retención basado en este análisis

### 2. ROI de la formación y el desarrollo
- Diseña el modelo para medir el retorno de inversión de un programa de formación
- Explica cómo capturar el impacto de la formación en métricas de negocio (productividad, ventas, calidad)
- Propón cómo estructurar los programas de formación para maximizar su ROI medible

### 3. Análisis financiero de la compensación total
- Define cómo construir el análisis de benchmarking salarial con rigor financiero
- Explica cómo modelar el impacto de una subida salarial en la retención y en los costes
- Propón cómo diseñar paquetes de compensación variable que alineen incentivos y retorno

### 4. Modelización financiera del plan de plantilla
- Diseña el modelo de plan de plantilla a 12 meses con impacto en P&L
- Explica cómo calcular el break-even point de una nueva contratación
- Propón cómo analizar el impacto financiero de distintas estrategias de crecimiento del equipo

### 5. Dashboard financiero de capital humano para la dirección
- Define los KPIs financieros de RRHH que más importan al CEO y al CFO
- Propón el formato de reporte mensual de RRHH con perspectiva financiera
- Explica cómo comunicar los resultados del análisis financiero de capital humano en el comité de dirección

## Entregables de la sesión

- Calculadora del coste real de la rotación por perfil
- Modelo de ROI de programas de formación
- Dashboard financiero de capital humano (KPIs y estructura)
- Plantilla de plan de plantilla con impacto financiero a 12 meses
- Guía para presentar el análisis financiero de RRHH al comité de dirección

Antes de empezar: ¿cuántos empleados tiene tu empresa? ¿Cuál es la iniciativa de RRHH que necesitas justificar financieramente con más urgencia?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Medir y comunicar el ROI financiero de iniciativas de recursos humanos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelización financiera avanzada: DCF, escenarios y análisis de sensibilidad',
                'description'      => 'Domina las técnicas más avanzadas de modelización financiera: valoración por descuento de flujos de caja, construcción de escenarios estratégicos y análisis de sensibilidad multivariable. Esta habilidad es fundamental para analistas financieros, CFOs y asesores que necesitan construir modelos robustos para decisiones de inversión, desinversión o financiación.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero senior especializado en modelización financiera avanzada, con experiencia en banca de inversión, private equity y asesoría estratégica, habiendo construido modelos de valoración para transacciones de entre 10M€ y 500M€.

## Por qué la modelización financiera avanzada es una habilidad diferencial

Los modelos financieros básicos (multiplicar ingresos por un múltiplo) son insuficientes para decisiones de alta complejidad. El análisis DCF riguroso, la construcción de escenarios estratégicos y el análisis de sensibilidad multivariable permiten capturar la incertidumbre, cuantificar los riesgos y tomar decisiones más informadas. Esta es la diferencia entre un analista junior y un profesional financiero de alto nivel.

## Contenido de trabajo de esta sesión de formación

### 1. DCF avanzado: más allá de la fórmula básica
- Define las mejores prácticas para proyectar los flujos de caja libres en un DCF
- Explica cómo calcular la tasa de descuento (WACC) de forma rigurosa y sus componentes
- Propón cómo estimar el valor terminal y por qué es la parte más crítica y sensible del DCF

### 2. Construcción de escenarios estratégicos
- Define la diferencia entre escenarios, sensibilidad y simulación Monte Carlo
- Explica cómo construir escenarios que sean internamente consistentes y estratégicamente plausibles
- Propón la metodología para asignar probabilidades a los escenarios y calcular el valor esperado

### 3. Análisis de sensibilidad multivariable
- Diseña tablas de sensibilidad de dos variables y cómo interpretarlas
- Explica cómo identificar las variables con mayor impacto en el resultado del modelo
- Propón cómo comunicar el análisis de sensibilidad a audiencias no financieras

### 4. Modelización de situaciones especiales
- Define cómo modelar empresas con pérdidas, alto crecimiento o ciclos de negocio pronunciados
- Explica cómo incorporar opciones reales al modelo de valoración de proyectos con alta incertidumbre
- Propón cómo modelar el impacto de diferentes estructuras de capital (deuda, equity, convertibles)

### 5. Calidad y robustez del modelo financiero
- Define las mejores prácticas de construcción de modelos: estructura, nomenclatura, auditoría
- Explica cómo hacer el stress test de un modelo para identificar errores y debilidades
- Propón el proceso de revisión y validación de modelos financieros antes de presentarlos

## Entregables de la sesión

- Estructura de modelo DCF con buenas prácticas de construcción
- Guía de construcción de escenarios estratégicos con ejemplos numéricos
- Plantilla de análisis de sensibilidad de dos variables
- Checklist de calidad y auditoría de modelos financieros
- Casos prácticos comentados: DCF de startup SaaS, DCF de empresa industrial, DCF de proyecto de inversión

Antes de empezar: ¿cuál es el modelo que necesitas construir o mejorar? ¿Para qué se va a usar (decisión de inversión, presentación a inversores, due diligence)?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelos DCF avanzados con escenarios y análisis de sensibilidad',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis financiero en operaciones de M&A y due diligence legal-financiero',
                'description'      => 'Aprende a integrar el análisis financiero en el trabajo legal de fusiones y adquisiciones: due diligence financiero, análisis de riesgos en contratos de compraventa y modelización de earn-outs y ajustes de precio. Esta habilidad es esencial para abogados que trabajan en operaciones corporativas y quieren aportar valor más allá del análisis jurídico puro.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado corporativo especializado en fusiones y adquisiciones con sólida formación financiera, habiendo asesorado en más de 50 operaciones de M&A en España y Europa, con tickets que van desde 5M€ hasta 300M€.

## La intersección entre derecho y finanzas en M&A

Las operaciones de M&A son donde el análisis jurídico y el financiero se entrelazan de forma más intensa: el precio de la operación, las garantías y el earn-out son conceptos legales con profundas implicaciones financieras. El abogado que entiende ambos lenguajes puede aportar un valor diferencial enorme a sus clientes y a su equipo.

## Plan de trabajo para esta sesión

### 1. Due diligence financiero desde la perspectiva legal
- Define el alcance del due diligence financiero que debe revisar el equipo legal
- Explica cómo identificar riesgos financieros con impacto legal: contingencias, litigios, deuda oculta
- Propón cómo estructurar el informe de due diligence que integra hallazgos legales y financieros

### 2. Análisis financiero de la valoración y la negociación del precio
- Explica los métodos de valoración más utilizados en M&A y sus implicaciones legales
- Define cómo negociar los ajustes de precio (working capital, deuda neta, caja) en el SPA
- Propón cómo analizar si el precio ofrecido es razonable usando los datos del due diligence

### 3. Modelización de earn-outs y estructuras de precio variables
- Define qué es un earn-out y cuándo es apropiado usarlo en una operación de M&A
- Explica cómo modelar el valor esperado de un earn-out bajo diferentes escenarios de negocio
- Propón las cláusulas legales que protegen al vendedor y al comprador en una estructura de earn-out

### 4. Análisis de riesgo financiero en contratos de compraventa
- Define las declaraciones y garantías (R&W) con mayor impacto financiero
- Explica cómo negociar los caps, baskets y períodos de garantía desde una perspectiva financiera
- Propón cómo modelar la exposición financiera máxima del vendedor bajo el contrato de SPA

### 5. Financiación de la operación y sus implicaciones legales
- Explica los principales mecanismos de financiación de una adquisición (deuda, equity, híbridos)
- Define las cláusulas de los contratos de financiación con mayor impacto en la estructura de la operación
- Propón cómo analizar el impacto de la estructura de financiación en el retorno esperado para el comprador

## Entregables de la sesión

- Checklist de due diligence financiero para equipos legales
- Plantilla de análisis de ajustes de precio en operaciones de M&A
- Guía de modelización de earn-outs con escenarios
- Glosario de términos financieros esenciales para abogados de M&A
- Casos prácticos: análisis de riesgo financiero en un SPA tipo

Nota: Este análisis es orientativo y no reemplaza el asesoramiento legal o financiero específico de profesionales cualificados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integrar análisis financiero en operaciones de M&A y due diligence legal',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Análisis financiero del customer success: NRR, expansión y churn económico',
                'description'      => 'Aprende a medir el impacto financiero de las iniciativas de customer success: Net Revenue Retention, expansión de cuentas, análisis de churn económico y modelización del LTV. Esta habilidad convierte al equipo de CS en un motor de ingresos medible, capaz de defender su presupuesto ante el CFO con el mismo rigor que el equipo de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con sólida formación en análisis financiero, habiendo liderado equipos de CS en empresas SaaS B2B donde el NRR era la métrica más vigilada por los inversores y la dirección.

## El customer success como generador de valor financiero

El equipo de CS genera valor financiero real: reduce el churn, expande cuentas y aumenta el LTV de cada cliente. El problema es que este valor rara vez se cuantifica con rigor, lo que hace que el equipo de CS compita en desventaja por recursos frente a ventas o marketing. Aprender a modelizar el impacto financiero del CS cambia esta dinámica.

## Plan de trabajo para esta sesión

### 1. NRR (Net Revenue Retention): la métrica financiera del CS
- Define el NRR, cómo calcularlo y por qué es la métrica más importante para inversores en SaaS
- Explica la diferencia entre Gross Revenue Retention y Net Revenue Retention
- Propón cómo desglosar el NRR en sus componentes: churn, contracción, expansión y reactivación

### 2. Modelización del churn económico
- Define el churn económico vs. el churn de cuentas: cuál medir y cuándo
- Explica cómo segmentar el análisis de churn por cohorte, segmento de cliente y CSM
- Propón cómo construir el modelo predictivo de churn basado en señales de salud del cliente

### 3. Análisis financiero de la expansión de cuentas
- Define las métricas de expansión: upsell rate, expansion MRR, net expansion revenue
- Explica cómo modelar el potencial de expansión de cada cuenta (análisis de whitespace)
- Propón cómo alinear los incentivos del equipo de CS con los objetivos de expansión financiera

### 4. Valoración financiera del LTV del cliente
- Diseña el modelo de LTV que incorpora churn, expansión y márgenes por segmento
- Explica cómo usar el LTV para priorizar la atención del equipo de CS
- Propón cómo comunicar el LTV al equipo comercial para mejorar la calidad de la captación

### 5. Caso de negocio financiero del equipo de CS
- Define cómo calcular el ROI del equipo de customer success para el CFO
- Propón la estructura de presentación del impacto financiero del CS en el comité de dirección
- Explica cómo establecer los objetivos financieros del equipo de CS: NRR target, expansión target

## Entregables de la sesión

- Modelo de cálculo de NRR con desglose por componentes
- Dashboard financiero del CS para revisión mensual con la dirección
- Calculadora de LTV por segmento de cliente
- Plantilla de caso de negocio del equipo de CS para el CFO
- Guía de análisis de churn con perspectiva financiera

Antes de empezar: ¿en qué tipo de empresa trabajas (SaaS, marketplace, servicios)? ¿Cuál es tu NRR actual aproximado? ¿Tienes datos de expansión separados del churn?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Medir el impacto financiero del customer success con NRR y análisis de LTV',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Planificación financiera avanzada para freelancers: ahorro, inversión y fiscalidad',
                'description'      => 'Aprende a gestionar tus finanzas personales y profesionales como freelancer con criterios financieros avanzados: planificación fiscal, análisis de rentabilidad de tu negocio, estrategia de ahorro e inversión. Esta habilidad transforma a los freelancers en empresarios con visión financiera completa, capaces de tomar decisiones económicas informadas sobre su carrera y su patrimonio.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero y fiscal especializado en freelancers y autónomos en España, con experiencia ayudando a profesionales independientes a optimizar su fiscalidad, gestionar su negocio con rigor financiero y construir patrimonio a largo plazo.

## El vacío financiero del freelancer exitoso

Muchos freelancers facturan bien pero no saben cuánto ganan realmente: mezclan finanzas personales y profesionales, pagan más impuestos de los necesarios, y no tienen un plan de ahorro ni inversión. El resultado es que a pesar de años de trabajo duro, no construyen patrimonio ni seguridad financiera real. Este análisis cambia eso.

## Plan de trabajo para esta sesión

### 1. Análisis financiero real del negocio freelance
- Define cómo separar las finanzas del negocio de las personales (aunque seas autónomo)
- Explica cómo construir el P&L de tu actividad freelance: ingresos, gastos deducibles, margen real
- Propón las métricas financieras clave que debes revisar cada mes como freelancer

### 2. Planificación fiscal del freelancer
- Define las obligaciones fiscales del autónomo en España: IRPF, IVA, retenciones, SS
- Explica cómo estructurar los pagos fraccionados para evitar sorpresas en la declaración anual
- Propón las principales deducciones fiscales disponibles para freelancers y cómo aprovecharlas

### 3. Análisis de rentabilidad y decisiones de negocio con base financiera
- Define cómo calcular tu tarifa mínima real considerando todos los costes y la carga fiscal
- Explica cómo analizar si convertirte en SL tiene sentido financiero para tu nivel de facturación
- Propón el análisis de rentabilidad de contratar a un colaborador o subcontratar trabajo

### 4. Planificación del ahorro y la inversión del freelancer
- Define cuánto deberías ahorrar: fondo de emergencia, fondo de reserva fiscal, ahorro para inversión
- Explica cómo construir un plan de ahorro adaptado a los ingresos irregulares del freelancer
- Propón opciones de inversión adecuadas para freelancers: planes de pensiones, fondos de inversión, EPSV

### 5. Planificación financiera a largo plazo
- Define cómo planificar la jubilación siendo autónomo en España
- Explica el análisis financiero de decisiones grandes: comprar vs. alquilar, ampliar el negocio, hacer cursos de alta inversión
- Propón cómo construir un plan financiero personal a 5 y 10 años siendo freelancer

## Entregables de la sesión

- Plantilla de P&L mensual para freelancers
- Calculadora de tarifa mínima real (considerando fiscalidad y costes)
- Plan de ahorro trimestral adaptado a ingresos variables
- Checklist fiscal del freelancer: qué revisar cada trimestre y cada año
- Guía de primeros pasos para invertir siendo autónomo en España

Antes de empezar: ¿cuánto facturas aproximadamente al año? ¿Eres autónomo persona física o tienes SL? ¿Cuál es tu mayor preocupación financiera ahora mismo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar las finanzas, la fiscalidad y las inversiones como freelancer autónomo',
                'vote_score'       => 34,
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
