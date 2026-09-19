<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills620Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación financiera de tesorería a clientes con IA',
                'description'      => 'Genera contenidos de marketing y comunicación para posicionar servicios de gestión de tesorería y cash management ante CFOs y directores financieros.',
                'prompt_content'   => <<<'EOT'
Actúa como especialista en marketing de servicios financieros B2B con experiencia en la comercialización de soluciones de tesorería, gestión de liquidez y cash management dirigidas a medianas y grandes empresas. Conoces el lenguaje técnico del CFO, las preocupaciones del director de tesorería y cómo traducir funcionalidades complejas de gestión de efectivo en mensajes de valor tangible y medible.

Contexto del proyecto:
Debo desarrollar una estrategia de comunicación y contenidos para [INSERTAR PRODUCTO O SERVICIO: ej. una plataforma SaaS de gestión de tesorería / un servicio de notional pooling multimoneda / una solución de previsión de cash flow basada en IA]. El público objetivo principal son [INSERTAR AUDIENCIA: ej. CFOs de empresas medianas con facturación entre 20 y 200 millones de euros / directores de tesorería de grupos empresariales con operaciones en múltiples países].

Tarea:
Desarrolla una estrategia de marketing de contenidos completa con los siguientes componentes:

1. Mapa de mensajes por perfil: crea mensajes de valor específicos para tres perfiles de decisor (CFO centrado en reducción de costes financieros, director de tesorería preocupado por la visibilidad del cash en tiempo real, CIO responsable de la integración técnica con el ERP) explicando qué le importa a cada uno y cómo articularle el valor de la solución.

2. Calendario editorial de seis meses para LinkedIn: propón un plan de publicación en LinkedIn que combine artículos de liderazgo de pensamiento sobre tendencias en tesorería, casos de éxito cuantificados, preguntas de engagement sobre retos del CFO y contenidos educativos sobre mejores prácticas de cash management.

3. White paper de captación: propón la estructura completa de un white paper de doce páginas titulado "Los cinco errores más costosos en la gestión de tesorería que cometen las empresas medianas en España", con el argumento de cada sección y los datos de referencia que reforzarían cada punto.

4. Estrategia de eventos y webinars: diseña un calendario anual de cuatro webinars temáticos para directores financieros, con títulos, ponentes recomendados (internos y externos), estructura de 60 minutos y mecánica de conversión de asistente a lead cualificado.

5. Mensajes de email marketing para nurturing: redacta una secuencia de cinco emails para nutrir a un lead que descargó el white paper pero no solicitó demo, con asunto, preview text y contenido completo de cada email, espaciados a lo largo de seis semanas.

6. Posicionamiento en buscadores financieros: identifica diez términos de búsqueda de alta intención usados por directores de tesorería en España (ej. "software tesorería empresas", "gestión liquidez multinacional", "previsión cash flow automatizada") y propón el tipo de contenido más adecuado para posicionar cada uno.

7. Medición de ROI de marketing financiero: define cómo medir la eficacia del marketing de contenidos en un mercado de ciclos de venta largos (seis a dieciocho meses) donde el contacto de marketing raramente es el decisor final de la compra.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marketing B2B para servicios de tesorería y cash management',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de sistema de cash management y previsión de liquidez con IA',
                'description'      => 'Diseña la arquitectura técnica de una plataforma de gestión de tesorería con previsión de cash flow mediante machine learning e integración con bancos y ERPs.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software senior especializado en sistemas financieros y plataformas de tesorería corporativa. Tienes experiencia en el diseño de sistemas que integran datos de múltiples bancos vía APIs bancarias (SWIFT, SEPA, open banking PSD2), ERPs (SAP, Oracle, Sage) y fuentes externas (tipos de cambio, tipos de interés) para ofrecer visibilidad de liquidez en tiempo real y previsiones de cash flow basadas en machine learning.

Contexto del proyecto:
Debo diseñar la arquitectura técnica de una plataforma de tesorería corporativa SaaS que permita a medianas y grandes empresas centralizar la visibilidad de efectivo, automatizar la conciliación bancaria, generar previsiones de cash flow a 13 semanas con IA y optimizar la gestión de excedentes de liquidez.

Funcionalidades principales del sistema:
- Conexión con múltiples bancos vía open banking (PSD2) y SWIFT
- Importación automática de extractos bancarios en formato MT940, CAMT.053 e ISO 20022
- Motor de conciliación automática de movimientos contra asientos contables del ERP
- Modelo de previsión de cash flow con ML entrenado sobre histórico de movimientos por categoría
- Gestión de posición de tesorería en tiempo real con alertas de umbral de liquidez
- Módulo de inversión de excedentes con integración con brokers y mercados monetarios

Tarea:
Diseña la arquitectura completa con los siguientes entregables:

1. Arquitectura de microservicios: describe los microservicios principales de la plataforma (servicio de conectividad bancaria, servicio de importación y parsing de formatos bancarios, servicio de conciliación, motor de previsión ML, servicio de reporting) con sus responsabilidades, tecnologías y dependencias.

2. Integración con open banking PSD2: explica la arquitectura del módulo de conectividad bancaria, incluyendo gestión de tokens OAuth2, manejo de consentimientos PSD2, gestión de errores y caducidad de conexiones, y estrategia de normalización de datos entre formatos bancarios heterogéneos.

3. Pipeline del motor de previsión de cash flow: describe el pipeline de datos desde la ingesta de movimientos históricos hasta la generación de previsiones a 13 semanas, incluyendo el preprocesamiento de series temporales, la elección del modelo ML (Prophet, LSTM, XGBoost para series temporales irregulares de tesorería), la estrategia de reentrenamiento y la evaluación de precisión del modelo.

4. Modelo de datos financiero: diseña el esquema de datos principal para entidades como Cuenta Bancaria, Movimiento, Posición de Tesorería, Previsión, Categoría de Cash Flow, asegurando la integridad referencial y el soporte multimoneda con gestión de tipos de cambio históricos.

5. Seguridad y cumplimiento financiero: dado el carácter altamente sensible de los datos de tesorería, define las medidas de seguridad específicas (cifrado en tránsito y en reposo, gestión de secretos bancarios, segregación de entornos, auditoría completa de accesos, cumplimiento PCI-DSS si aplica).

6. Estrategia de integración con ERPs: describe los patrones de integración con SAP S/4HANA, Oracle Fusion y Microsoft Dynamics 365 Finance para la sincronización bidireccional de asientos contables, facturas y previsiones de cobros y pagos.

7. Alta disponibilidad y recuperación ante desastres: para un sistema financiero crítico donde la indisponibilidad a las 9:00 de la mañana puede bloquear las operaciones de tesorería de cientos de clientes, define los requisitos de SLA (RTO, RPO), la arquitectura multi-zona y la estrategia de failover.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseño técnico de plataforma de tesorería corporativa',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de dashboard de tesorería para directores financieros con IA',
                'description'      => 'Crea el diseño visual y la experiencia de usuario de un dashboard de gestión de liquidez y cash flow orientado a perfiles financieros exigentes con alta carga de trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como diseñador de producto especializado en aplicaciones fintech y herramientas para usuarios financieros profesionales. Tienes experiencia diseñando dashboards de tesorería, plataformas de gestión de liquidez y herramientas de reporting financiero para CFOs y directores de tesorería que deben tomar decisiones críticas de alto impacto en condiciones de alta presión y con datos complejos.

Contexto del proyecto:
Debo diseñar el dashboard principal de una plataforma de cash management corporativo. El usuario primario es un director de tesorería o CFO que llega a la aplicación cada mañana entre las 8:00 y las 9:30, necesita en menos de dos minutos entender la posición de liquidez del día, identificar alertas críticas, aprobar pagos pendientes y tener una visión del cash flow de las próximas cuatro semanas. Maneja múltiples empresas del grupo y decenas de cuentas bancarias en varias monedas.

Tarea:
Diseña la experiencia de usuario del dashboard con los siguientes entregables:

1. Principios de diseño para herramientas financieras de alta densidad: define cinco principios de diseño específicos para dashboards financieros donde la densidad de información es alta pero la claridad debe ser máxima (ej. "dato correcto a primer golpe de vista", "sin ambigüedad en signos y monedas", "alerta antes de sorpresa").

2. Arquitectura de información del dashboard: describe la jerarquía visual del dashboard principal, qué KPI ocupa el espacio primario (above the fold), cómo se organiza la información por urgencia (alertas críticas, acciones pendientes, visión estratégica) y cómo se estructura la navegación entre empresas del grupo y cuentas.

3. Anatomía de la tarjeta de posición de tesorería: describe con detalle el diseño de la tarjeta que muestra la posición de cash de una cuenta o grupo de cuentas (qué datos muestra, en qué orden, cómo indica el signo positivo/negativo, cómo compara con el día anterior o el presupuesto, qué micrográfico incluye).

4. Sistema de alertas financieras: diseña el sistema de alertas visuales para situaciones críticas (saldo por debajo del umbral mínimo, pago con fecha de vencimiento hoy sin fondos suficientes, previsión de descubierto en los próximos tres días) con niveles de criticidad, posición en el dashboard y acciones directas desde la alerta.

5. Flujo de aprobación de pagos desde el dashboard: describe el flujo completo de aprobación de una transferencia de alto importe (que requiere doble firma) directamente desde el dashboard, con los pasos de confirmación, la información de riesgo mostrada antes de aprobar y el feedback visual de confirmación.

6. Visualización del cash flow forecast: diseña la representación visual de la previsión de cash flow a 13 semanas, distinguiendo visualmente entre datos reales, previsiones basadas en IA y previsiones ajustadas manualmente por el tesorero, con intervalos de confianza representados.

7. Modo oscuro para sesiones nocturnas y viajes: define las especificaciones de color para el modo oscuro del dashboard, considerando que muchos tesoreros trabajan en entornos de poca luz o en pantallas de aeropuerto, con especial atención a la legibilidad de cifras financieras positivas (verde) y negativas (rojo) en fondos oscuros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'UX y diseño visual para dashboards de tesorería',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de soluciones de tesorería a directores financieros con IA',
                'description'      => 'Domina el proceso de venta consultiva de plataformas de cash management a CFOs y directores de tesorería en empresas medianas y grandes con ciclos de compra complejos.',
                'prompt_content'   => <<<'EOT'
Actúa como director de ventas con amplia experiencia en la venta de soluciones financieras enterprise (software de tesorería, gestión de liquidez, plataformas de pagos, cash management bancario) a decisores financieros de alto nivel: CFOs, directores de tesorería y directores financieros de empresas medianas y grandes.

Conoces los procesos de compra de tecnología financiera (comités de dirección, ciclos de 6 a 18 meses, procesos de RFP, participación de IT y Auditoría Interna en la decisión), las presiones típicas del CFO (reducción de costes financieros, mejora del control interno, cumplimiento normativo) y cómo diferenciar una solución SaaS moderna de los módulos de tesorería de los grandes ERPs.

Contexto del proyecto:
Soy comercial o account executive de una empresa que vende [INSERTAR SOLUCIÓN: ej. una plataforma SaaS de gestión de tesorería multiempresa y multimoneda / un sistema de previsión de cash flow con IA / un servicio de pooling de tesorería para grupos empresariales]. El precio medio de contrato es [INSERTAR ACV: ej. 30.000-150.000 €/año según número de empresas y cuentas bancarias].

Tarea:
Crea un proceso de venta completo con los siguientes componentes:

1. Estrategia de entrada a cuentas objetivo: describe cómo identificar y acceder a un director de tesorería o CFO de una empresa mediana (entre 50M y 500M de facturación) que actualmente gestiona la tesorería con hojas de Excel y el módulo básico del banco, y cuáles son las señales de que está listo para evaluar una solución.

2. Cualificación de oportunidades financieras: adapta el framework de cualificación (MEDDPICC o similar) al contexto de la venta de tesorería, con las preguntas específicas para descubrir el impacto económico del problema actual (¿cuánto pierden por no tener visibilidad del cash en tiempo real? ¿cuántas horas-persona se dedican a conciliación manual?).

3. Demostración de impacto económico: diseña una metodología para cuantificar con el propio prospecto el coste de su situación actual (tiempo en conciliaciones manuales multiplicado por coste hora, costes de descubierto por falta de visibilidad, coste de oportunidad de excedentes no invertidos) y presentarlo como el valor económico de tu solución.

4. Manejo de las objeciones del CFO: para cada una de las cinco objeciones más frecuentes en la venta de tesorería ("ya lo hacemos con Excel y nos va bien", "el banco ya nos da herramientas gratuitas", "IT tiene la agenda llena y no puede gestionar una integración", "¿cómo sé que mis datos bancarios están seguros en tu nube?", "necesito aprobación del consejo para este gasto") proporciona la respuesta estructurada con datos y argumentos concretos.

5. Proceso de gestión de RFP de tesorería: describe cómo gestionar un proceso formal de RFP (Request for Proposal) lanzado por el departamento de compras, asegurando que los criterios de evaluación reflejen los puntos fuertes de tu solución y que el director de tesorería (tu champion) pueda defender tu propuesta internamente.

6. Estrategia de cierre y negociación: define las palancas de negociación típicas en la venta de software de tesorería (precio, número de cuentas incluidas, módulos activados, plazo de contrato, SLA garantizados) y cómo usarlas para cerrar sin destruir margen.

7. Plan de expansión post-venta: diseña cómo hacer crecer la cuenta una vez que el cliente está activo, incluyendo la venta de módulos adicionales (previsión avanzada, gestión de riesgos de tipo de cambio, integración con mercados monetarios) y la expansión a más empresas del grupo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Venta consultiva enterprise de software de tesorería',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy para plataforma fintech de tesorería corporativa con IA',
                'description'      => 'Define la visión de producto, el roadmap y la estrategia de diferenciación de una plataforma SaaS de gestión de tesorería para empresas medianas y grandes.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager senior con experiencia en productos fintech B2B para el segmento enterprise, específicamente en soluciones de tesorería corporativa, gestión de liquidez y pagos. Conoces el mercado de software de tesorería (TMS - Treasury Management Systems), los competidores clave (Kyriba, TIS, ION Treasury, Nomentia), las tendencias del sector (open banking, IA para previsión de cash flow, embedded finance) y los factores de decisión de compra de los directores de tesorería.

Contexto del proyecto:
Gestiono el producto de una startup fintech que compite en el mercado de software de tesorería para empresas medianas (entre 20M y 500M de facturación). Necesito definir la estrategia de producto para los próximos dieciocho meses para diferenciarme de los incumbentes y crecer en el segmento mid-market europeo.

Tarea:
Desarrolla la estrategia de producto completa con los siguientes entregables:

1. Análisis competitivo del mercado TMS: describe el mapa competitivo del mercado de software de tesorería segmentado por tamaño de empresa objetivo, precio, funcionalidades clave y debilidades explotables por un challenger mid-market, identificando el espacio de oportunidad para un nuevo entrante.

2. Jobs-to-be-done del director de tesorería: identifica los cinco trabajos principales que un director de tesorería necesita que su software haga, ordenados por urgencia e insatisfacción actual con las soluciones existentes, con evidencias de investigación de usuario.

3. Estrategia de diferenciación por IA: dado que la IA es el diferenciador más relevante frente a sistemas legacy, define tres casos de uso de IA para tesorería que sean difíciles de replicar rápidamente por los grandes incumbentes (ej. previsión de cash flow con explicabilidad por categoría, detección de anomalías en pagos, optimización automática de excedentes de liquidez).

4. Roadmap de dieciocho meses: presenta el roadmap en cuatro fases (fundaciones sólidas, diferenciación por IA, expansión internacional, plataforma de ecosistema) con los temas estratégicos de cada fase, las iniciativas principales y los criterios de éxito medibles.

5. Estrategia de lanzamiento al mercado por segmento: define cómo entrar al mercado mid-market europeo de forma secuencial (ej. empezar por empresas de un solo país y facturación entre 20M y 100M, luego expandir a grupos con filiales en múltiples países) con la propuesta de valor específica para cada segmento.

6. Métricas de producto para tesorería: define los KPI de producto más relevantes para una plataforma de tesorería, incluyendo métricas de adopción (porcentaje de cuentas bancarias conectadas vs. total del cliente), calidad de datos (precisión del forecast de cash flow vs. real), y valor generado (ahorro en costes financieros rastreable a la plataforma).

7. Estrategia de integraciones como moat competitivo: describe cómo construir un ecosistema de integraciones (con los 20 bancos más importantes de Europa, los ERPs más comunes en el mid-market, plataformas de factoring y supply chain finance) que genere switching costs y haga difícil que el cliente se vaya a un competidor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estrategia de producto fintech para tesorería corporativa',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Selección y desarrollo de talento para equipos de tesorería corporativa con IA',
                'description'      => 'Diseña el proceso de selección, onboarding y desarrollo profesional para equipos de tesorería que integran herramientas de IA y automatización en sus operaciones diarias.',
                'prompt_content'   => <<<'EOT'
Actúa como director de Recursos Humanos especializado en la selección y desarrollo de perfiles financieros, con experiencia en equipos de tesorería corporativa de medianas y grandes empresas. Conoces la evolución del rol del tesorero corporativo (de gestor manual de cuentas bancarias a analista estratégico apoyado por IA) y los nuevos perfiles híbridos que combinen conocimiento financiero con competencias digitales y analíticas.

Contexto del proyecto:
Debo estructurar el equipo de tesorería de [INSERTAR EMPRESA: ej. un grupo industrial de 800M de facturación con operaciones en cinco países / una empresa tecnológica en crecimiento que acaba de llegar a 150M de ARR] y diseñar el proceso de selección de los perfiles clave, así como el plan de desarrollo del equipo existente ante la implementación de un nuevo sistema de gestión de tesorería con IA.

Tarea:
Desarrolla un plan de gestión del talento en tesorería con los siguientes componentes:

1. Mapa de roles para el equipo de tesorería moderno: define los perfiles clave de un equipo de tesorería digital (tesorero senior, analista de cash management, especialista en pagos y sistemas, analista de riesgos financieros) con sus responsabilidades actualizadas para incluir el trabajo con herramientas de IA y datos.

2. Perfil competencial para el tesorero del futuro: describe las competencias técnicas (conocimiento de mercados monetarios, instrumentos de cobertura, regulación bancaria, herramientas TMS) y transversales (análisis de datos, pensamiento crítico ante recomendaciones de IA, comunicación con el CFO y el consejo) del tesorero corporativo moderno.

3. Proceso de selección para perfiles de tesorería digital: diseña el proceso completo de selección (búsqueda, criba curricular, entrevistas, prueba técnica, oferta) con las preguntas de entrevista específicas para evaluar tanto el conocimiento financiero como la capacidad de trabajar con herramientas digitales y gestionar la incertidumbre de las previsiones de IA.

4. Plan de onboarding para el nuevo tesorero: diseña un plan de incorporación de noventa días que combine el aprendizaje del contexto financiero de la empresa (estructura de deuda, covenants, política de inversión de excedentes, bancos principales y condiciones negociadas) con la formación en las herramientas digitales de tesorería.

5. Plan de reskilling para el equipo existente: dado que la automatización reducirá el trabajo manual de conciliación y reporting, define cómo reconvertir a los miembros actuales del equipo hacia roles de mayor valor añadido (análisis de escenarios, gestión de relaciones bancarias, optimización de estructuras financieras).

6. Evaluación del desempeño en tesorería: diseña un sistema de evaluación de desempeño para el equipo de tesorería que mida tanto los resultados financieros (coste de financiación, rendimiento de excedentes, gestión de riesgo de tipo de cambio) como las competencias de trabajo con IA y mejora continua de procesos.

7. Retención de talento financiero escaso: define las palancas de retención específicas para perfiles de tesorería corporativa de alto valor (que son muy demandados por bancos y fondos), incluyendo plan de carrera, exposición a proyectos estratégicos y política de retribución variable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión del talento en equipos de tesorería modernos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo de previsión de cash flow con IA para optimización de liquidez',
                'description'      => 'Diseña y documenta un modelo de previsión de tesorería a 13 semanas basado en inteligencia artificial para optimizar la gestión de excedentes e identificar necesidades de financiación anticipadamente.',
                'prompt_content'   => <<<'EOT'
Actúa como director de tesorería con experiencia en la implementación de modelos de previsión de cash flow en empresas medianas y grandes, con conocimiento de técnicas de machine learning aplicadas a series temporales financieras. Has implementado modelos de forecasting de tesorería que mejoran la precisión de las previsiones manuales basadas en Excel en más de un 40% y has presentado estos modelos al CFO y al comité de dirección.

Contexto del proyecto:
Debo implementar un modelo de previsión de cash flow a 13 semanas para [INSERTAR EMPRESA: ej. una empresa industrial con 300M de facturación, cobros a 60-90 días y pagos a proveedores a 45 días / un grupo de distribución con alta estacionalidad y flujos de caja muy variables por campaña]. El modelo debe integrarse con [INSERTAR SISTEMAS: ej. SAP S/4HANA para datos de facturas y pedidos pendientes, extractos bancarios MT940 diarios, y el sistema de planificación presupuestaria].

Tarea:
Desarrolla la metodología completa del modelo de previsión con los siguientes componentes:

1. Taxonomía de flujos de tesorería para el modelo: define la estructura de categorías de cash flow (cobros de clientes por segmento y días de cobro, pagos a proveedores por categoría, impuestos y pagos fiscales, nóminas y costes de personal, inversiones y desinversiones, financiación) con el nivel de predictibilidad esperado para cada categoría.

2. Metodología de recopilación y calidad de datos: describe qué datos de entrada necesita el modelo (saldo bancario actual, cartera de cobros pendientes con fecha estimada, órdenes de compra pendientes de pago, previsiones del equipo comercial de nuevos cobros), cómo validar la calidad de estos datos y cómo gestionar los datos faltantes o inconsistentes.

3. Selección y justificación del modelo ML: compara tres enfoques para la previsión de tesorería (modelo de reglas basado en días de cobro/pago promedio, modelo estadístico de series temporales tipo ARIMA/Prophet, y modelo de ML supervisado tipo gradient boosting con features macroeconómicas) y justifica cuál es más adecuado para el contexto de la empresa, o cómo combinarlos en un modelo ensemble.

4. Modelo de validación y medición de precisión: define la metodología de backtesting del modelo (validación cruzada en series temporales, métricas de error como MAPE y RMSE por horizonte temporal y categoría de flujo) y el proceso de validación continua mes a mes comparando previsión vs. real.

5. Integración del juicio experto del tesorero: dado que el modelo cuantitativo no puede capturar eventos no históricos (un cliente importante que retrasa un pago grande, una inversión extraordinaria aprobada por el consejo), diseña la interfaz de ajuste manual del forecast por parte del tesorero y cómo el sistema aprende de estos ajustes.

6. Generación de escenarios y análisis de sensibilidad: describe cómo el modelo debe generar escenarios alternativos (optimista, base, pesimista) con intervalos de confianza, y cómo presentar el análisis de sensibilidad ante cambios en variables clave (retraso de cobros de cinco días, caída del 20% en ventas de un mes).

7. Reporting al CFO y al comité de dirección: diseña el formato del informe semanal de posición de tesorería y previsión a 13 semanas para el CFO, con el nivel de detalle adecuado para la toma de decisiones de inversión de excedentes y planificación de necesidades de financiación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Previsión de cash flow con IA para directores de tesorería',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en operaciones de tesorería corporativa con IA',
                'description'      => 'Analiza el marco regulatorio aplicable a las operaciones de tesorería de grandes empresas, incluyendo gestión de riesgos financieros, reporting regulatorio y uso de IA en decisiones financieras.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho financiero corporativo y regulación de mercados de capitales, con experiencia asesorando a directores de tesorería y CFOs de empresas medianas y grandes en el cumplimiento de las obligaciones regulatorias aplicables a sus operaciones de gestión de liquidez, cobertura de riesgos financieros e inversión de excedentes.

Contexto del proyecto:
Una empresa con facturación superior a 100 millones de euros necesita revisar el marco de cumplimiento de su departamento de tesorería. Las operaciones incluyen: gestión de tesorería en múltiples divisas y países, instrumentos de cobertura de riesgo de tipo de cambio e interés (forwards, swaps), inversión de excedentes en fondos monetarios y depósitos bancarios, y uso de una plataforma de IA para la previsión de cash flow y recomendaciones de inversión de excedentes.

Tarea:
Elabora un análisis de cumplimiento regulatorio completo con los siguientes apartados:

1. Marco regulatorio aplicable a la tesorería corporativa: describe las principales normativas europeas y españolas que afectan a las operaciones de tesorería de una empresa no financiera (EMIR para derivados OTC, MiFID II en la medida en que aplica a empresas no financieras, DORA para la resiliencia operativa digital, directivas contables para la contabilización de coberturas bajo NIIF 9).

2. Obligaciones de reporting de derivados bajo EMIR: detalla las obligaciones de comunicación de contratos de derivados OTC al repositorio de operaciones (trade repository), quién asume la responsabilidad de la comunicación cuando la contraparte es un banco, y las implicaciones del régimen de margen para contratos no centralizados.

3. Política de inversión de excedentes y límites regulatorios: define los criterios legales y de gobierno corporativo que debe cumplir una política de inversión de excedentes de tesorería (límites de concentración por contraparte, rating mínimo de instrumentos, plazos máximos, aprobación por el consejo de administración) y cómo documentarla para una auditoría externa.

4. Uso de IA en decisiones de tesorería y responsabilidad: analiza las implicaciones del Reglamento de IA de la UE para el uso de sistemas de IA en la previsión de cash flow y la recomendación de inversión de excedentes, incluyendo la clasificación del riesgo del sistema, los requisitos de transparencia y la responsabilidad por decisiones basadas en las recomendaciones de la IA.

5. Prevención del blanqueo de capitales en tesorería corporativa: describe las obligaciones AML/KYC aplicables a las relaciones bancarias del departamento de tesorería, el procedimiento para apertura de nuevas cuentas bancarias y los controles internos requeridos para detectar operaciones inusuales en los flujos de tesorería.

6. Política de poderes de firma y límites de autorización: diseña el marco de gobierno interno de tesorería (poderes notariales para disposición de cuentas, límites de autorización por importe y tipo de operación, segregación de funciones entre quien autoriza y quien ejecuta pagos, control dual para pagos de alto importe).

7. Checklist de auditoría interna del departamento de tesorería: elabora una lista de verificación de los controles que la auditoría interna debe revisar anualmente en el departamento de tesorería, incluyendo controles de acceso al sistema TMS, conciliación de posiciones, validación del modelo de previsión y cumplimiento de la política de inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Cumplimiento legal y regulatorio en tesorería corporativa',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a usuarios de plataformas de tesorería con IA',
                'description'      => 'Diseña procesos de atención al cliente especializados para usuarios de software de gestión de tesorería, combinando soporte técnico financiero y gestión de incidencias críticas.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de Customer Success especializado en plataformas SaaS fintech para tesorería corporativa. Tienes experiencia gestionando equipos de soporte que atienden a usuarios financieros de alto nivel (directores de tesorería, analistas financieros, controllers) que tienen tolerancia casi cero a los errores del sistema, trabajan bajo presión en ventanas de tiempo muy estrechas y esperan que el soporte entienda tanto los aspectos técnicos de la plataforma como el contexto financiero de su problema.

Contexto del proyecto:
Gestiono el equipo de soporte de una plataforma SaaS de gestión de tesorería corporativa con [INSERTAR BASE DE CLIENTES: ej. 150 empresas clientes con un total de 400 usuarios activos, principalmente directores de tesorería y analistas financieros]. Los problemas más frecuentes incluyen [INSERTAR PROBLEMAS: ej. fallos en la importación de extractos bancarios MT940, discrepancias en la conciliación automática, previsiones de cash flow que no incluyen correctamente las facturas del ERP].

Tarea:
Diseña el sistema de soporte especializado con los siguientes componentes:

1. Clasificación de incidencias por impacto financiero: dado que en tesorería una incidencia puede tener impacto directo en los pagos del día (una transferencia que no se puede lanzar porque el sistema está caído es crítica a las 9:00 AM), define un sistema de priorización que combine urgencia técnica con impacto financiero real para el cliente.

2. Protocolo de gestión de incidencias críticas de tesorería: diseña el protocolo de respuesta para incidencias P0/P1 (sistema caído en horario de cierre de pagos, error en conciliación que afecta al balance presentado al consejo, fallo en la integración bancaria que impide conocer el saldo disponible) con los escalados, tiempos de respuesta y comunicación al cliente.

3. Base de conocimiento financiero-técnica: diseña la estructura de la base de conocimiento del equipo de soporte, que debe combinar documentación técnica de la plataforma con conocimiento financiero de los procesos de tesorería (cómo funciona una conciliación bancaria, qué es un formato MT940, por qué puede diferir el saldo contable del bancario).

4. Formación del equipo de soporte en tesorería: dado que los agentes de soporte deben entender el contexto financiero para dar soporte de calidad, diseña un plan de formación en finanzas corporativas básicas y procesos de tesorería para el equipo de soporte técnico.

5. Gestión de la relación con el tesorero durante una crisis: cuando hay una incidencia crítica que afecta al cierre diario de tesorería, el director de tesorería está bajo máxima presión. Define el protocolo de comunicación durante la crisis (frecuencia de actualizaciones, nivel de detalle técnico adecuado, gestión de expectativas de resolución) para mantener la confianza del cliente en el momento más crítico.

6. Programa de éxito del cliente para la temporada de cierre de año: el cierre contable de diciembre es el momento de máxima presión para los equipos de tesorería. Diseña un programa proactivo de acompañamiento del cliente durante el mes de diciembre (revisión de configuraciones, pruebas de carga, canal de soporte prioritario) para prevenir incidencias en el peor momento posible.

7. Métricas de calidad de soporte para fintech de tesorería: define los KPI de soporte específicos para una plataforma de tesorería, justificando por qué métricas estándar (CSAT, tiempo de primera respuesta) deben complementarse con métricas de impacto financiero (número de incidencias que afectaron a pagos del día, tiempo de resolución de incidencias en ventanas críticas de tesorería).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Customer success y soporte en plataformas de tesorería',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de tesorería y cash management con IA',
                'description'      => 'Estructura un servicio de consultoría freelance en tesorería corporativa y cash management, aprovechando herramientas de IA para ofrecer análisis avanzados a empresas medianas.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor financiero freelance especializado en tesorería corporativa y gestión de liquidez, con experiencia asesorando a empresas medianas y grandes en la optimización de su gestión de cash, la implementación de sistemas de tesorería y la estructuración de la función de tesorería desde cero o en procesos de transformación.

Contexto del proyecto:
Soy un profesional con experiencia en tesorería corporativa que quiere establecerse como consultor freelance. Mi diferencial es la combinación de conocimiento profundo de tesorería (he sido director de tesorería o analista senior en al menos dos empresas medianas) con capacidad de usar herramientas de IA para entregar análisis y modelos más rápido y con más profundidad que un consultor tradicional.

Tarea:
Ayúdame a construir mi negocio de consultoría de tesorería freelance con los siguientes componentes:

1. Posicionamiento y nicho de especialización: analiza los posibles nichos de especialización para un consultor de tesorería freelance (por sector —retail, industrial, tecnológico—; por tipo de problema —implantación de TMS, optimización de estructura de financiación, gestión de riesgo de divisa—; por tamaño de empresa —mid-market español, filiales de multinacionales—) y recomienda la combinación de nicho más rentable y diferencial.

2. Catálogo de servicios de consultoría de tesorería: define cinco servicios específicos con nombre, descripción, entregables, duración y precio orientativo (en rango), incluyendo: diagnóstico de la función de tesorería, diseño de la política de tesorería, selección e implementación de TMS, modelo de previsión de cash flow y optimización de la estructura de financiación.

3. Metodología de diagnóstico de tesorería: diseña el proceso de diagnóstico rápido de tesorería (en dos a cuatro semanas) que sirva como proyecto de entrada y permita identificar las áreas de mejora que justifiquen un proyecto de transformación mayor, con las herramientas de análisis (cuestionario, análisis de datos bancarios, benchmarks del sector) que usarías.

4. Uso de IA para acelerar la entrega de consultoría: describe cómo usarías herramientas de IA (Claude u otras) para mejorar la calidad y velocidad de tus entregables como consultor de tesorería (análisis de extractos bancarios, generación de modelos financieros, redacción de políticas de tesorería, benchmarking de condiciones bancarias), siendo específico sobre qué haces con IA y qué requiere tu criterio experto irremplazable.

5. Construcción de autoridad en el mercado de tesorería: define una estrategia de visibilidad para posicionarte como referente en el nicho elegido, incluyendo publicación de contenidos técnicos en LinkedIn sobre tesorería, participación como ponente en eventos financieros (AFP España, ASSET, CFO Summit), y construcción de una red de referidos con CFOs y directores financieros.

6. Gestión del negocio freelance de tesorería: describe cómo estructurar el negocio desde el punto de vista operativo (forma jurídica óptima para consultoría, facturación y gestión de IVA, contratos de confidencialidad para datos financieros sensibles, gestión de la carga de trabajo entre proyectos solapados, política de tarifas y revisión anual).

7. Plan de primeros doce meses: diseña un plan de acción para los primeros doce meses como consultor freelance de tesorería, desde la captación del primer cliente piloto hasta el objetivo de facturación sostenible, con los hitos clave y las acciones prioritarias de cada trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negocio de consultoría freelance en tesorería corporativa',
                'vote_score'       => 40,
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
