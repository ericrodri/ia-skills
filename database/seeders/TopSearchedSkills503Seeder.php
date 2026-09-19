<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills503Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'IA para marketing en el sector energético y renovables',
                'description'       => 'Aplica inteligencia artificial para crear campañas de marketing efectivas en el sector energético, comunicando el valor de las energías renovables y captando leads cualificados.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing para el sector energético con profundo conocimiento de las energías renovables y la transición energética. Necesito crear una estrategia de marketing digital completa para una empresa del sector.

**Contexto de la empresa:**
- Tipo de empresa: [instaladora solar / comercializadora de energía verde / fabricante de baterías / consultoría energética]
- Mercado objetivo: [residencial / industrial / grandes empresas / administraciones públicas]
- Competidores principales: [menciona 2-3 competidores]
- Presupuesto de marketing mensual: [rango]

**tarea 1: Estrategia de contenido para educación energética**

Diseña un plan de contenido que posicione a la empresa como referente del sector:
- 20 ideas de artículos de blog SEO sobre energías renovables (con keyword principal y volumen estimado)
- Serie de infografías explicativas: "¿Cómo funciona una instalación solar?" / "Ahorro real con energía verde"
- 12 posts de LinkedIn para el mes que eduquen sobre la transición energética
- Vídeos cortos para Reels/TikTok explicando conceptos técnicos de forma simple
- Newsletter mensual para clientes y prospectos: estructura y temas sugeridos

**tarea 2: Campañas de captación de leads cualificados**

Crea el funnel de generación de leads:
- Lead magnet de alto valor: "Calculadora de ahorro energético" o "Guía de subvenciones 2024"
- Secuencia de emails de nurturing (6 emails en 3 semanas) para prospectos que descargan el lead magnet
- Landing page optimizada para solicitar auditoría energética gratuita (estructura completa con copy)
- Anuncios de Google para keywords de intención de compra alta ("instalación solar precio", "presupuesto placas solares")
- Segmentación en Meta Ads: audiencias para residencial vs industrial

**tarea 3: Posicionamiento de marca verde y ESG**

Desarrolla la narrativa de marca responsable:
- Declaración de posicionamiento: "Somos la empresa que [promesa única] para [cliente ideal] que [situación actual]"
- Historia de marca: por qué existimos, qué impacto tenemos, cómo medimos nuestra contribución ambiental
- Certificaciones y sellos de calidad que comunican credibilidad (ISO, certificado EMAS, sello verde)
- Informe de impacto anual: estructura y cómo comunicarlo a clientes y medios
- Storytelling de clientes: cómo contar casos de éxito cuantificando el CO2 ahorrado y el retorno económico

**tarea 4: Marketing local para instaladoras**

Si el modelo es instalación en zona geográfica:
- Estrategia de Google My Business: optimización, publicaciones semanales, gestión de reseñas
- SEO local: keywords geolocalizadas y cómo competir contra grandes instaladoras nacionales
- Alianzas locales: arquitectos, constructores, comunidades de vecinos, ayuntamientos
- Presencia en ferias y eventos locales de sostenibilidad y construcción

**tarea 5: Comunicación de subvenciones e incentivos**

El sector energético tiene un entorno normativo complejo:
- Cómo comunicar las subvenciones del Plan de Recuperación y fondos europeos sin generar confusión
- Calculadora de retorno de inversión (ROI) para clientes residenciales e industriales
- Guía de objeciones frecuentes: "Es muy caro" / "No sé si me saldrá rentable" / "Ya veremos si el gobierno cambia las reglas"
- Argumentario comercial basado en el coste de la energía actual vs coste amortizado de la instalación

Entrega el plan en formato de hoja de ruta trimestral con acciones, responsables y métricas de éxito para cada iniciativa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Estrategia de marketing digital para empresas del sector energético y renovables',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'IA para predicción de demanda energética y optimización de redes',
                'description'       => 'Desarrolla modelos de machine learning para predecir la demanda energética, optimizar redes eléctricas inteligentes y maximizar la integración de energías renovables en el grid.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de datos y machine learning especializado en el sector energético, con experiencia en sistemas de predicción de demanda y optimización de redes eléctricas. Necesito desarrollar un sistema de predicción y optimización energética.

**Contexto del proyecto:**
- Tipo de red/sistema: [distribución eléctrica regional / microgrid industrial / planta solar / red de carga de VE]
- Datos disponibles: [series temporales de consumo, datos meteorológicos, datos de generación]
- Horizonte de predicción: [next-hour / day-ahead / week-ahead]
- Stack tecnológico preferido: [Python/PyTorch, TensorFlow, scikit-learn, PySpark]

**tarea 1: Arquitectura del pipeline de datos energéticos**

Diseña la infraestructura completa de datos:
- Esquema de ingesta de datos: medidores inteligentes (SCADA), sensores IoT, APIs meteorológicas
- Proceso de limpieza y normalización de datos de series temporales energéticas
- Detección y manejo de outliers: cortes de suministro, picos anómalos, errores de medición
- Feature engineering específico para energía: hora del día, día de semana, temperatura, irradiancia, festividades
- Almacenamiento eficiente en time-series databases (InfluxDB, TimescaleDB)

**tarea 2: Modelos de predicción de demanda**

Implementa y compara los principales modelos:
- LSTM/GRU para series temporales de consumo eléctrico (código completo en Python)
- Transformer-based models (Temporal Fusion Transformer) para predicción multi-horizonte
- XGBoost con features de calendario y clima como baseline
- Ensemble de modelos con ponderación adaptativa según horizonte temporal
- Evaluación: RMSE, MAE, MAPE por horizonte y por segmento de consumidor

**tarea 3: Optimización de la integración de renovables**

Desarrolla el sistema de optimización:
- Modelo de previsión de generación solar con datos de irradiancia y temperatura
- Previsión de generación eólica usando NWP (Numerical Weather Prediction)
- Algoritmo de despacho óptimo: cómo distribuir generación renovable + convencional minimizando coste
- Detección de oportunidades de curtailment vs almacenamiento en batería
- Optimización de la carga de baterías (scheduling de carga/descarga basado en precio de mercado)

**tarea 4: Detección de anomalías y mantenimiento predictivo**

Implementa el sistema de monitorización inteligente:
- Autoencoder LSTM para detección de anomalías en la red eléctrica
- Predicción de fallos en transformadores y líneas de distribución
- Sistema de alertas con severidad graduada y tiempo estimado hasta el fallo
- Dashboard en tiempo real con métricas de calidad del suministro
- Integración con sistemas CMMS para generar órdenes de trabajo automáticas

**tarea 5: Trading de energía asistido por IA**

Si el sistema incluye participación en mercados eléctricos:
- Estrategia de oferta en el mercado diario (day-ahead) usando predicción de precio
- Optimización de las ofertas de balance (mercado intradiario) con modelos de precio en tiempo real
- Estrategia de almacenamiento en baterías para arbitraje de precio
- Backtesting de estrategias de trading con datos históricos
- Métricas de rendimiento: precio medio de venta vs precio de mercado, beneficio marginal del sistema de IA

**tarea 6: Despliegue y MLOps**

Industrializa el sistema:
- Pipeline de reentrenamiento automático con llegada de nuevos datos
- Monitorización de drift del modelo y alertas de degradación de performance
- API REST para consumo de predicciones por otros sistemas
- Infraestructura en cloud: instancias GPU para entrenamiento, CPU para inferencia
- Documentación técnica del sistema para el equipo de operaciones

Proporciona código Python funcional con comentarios explicativos y ejemplos de datos de prueba para cada componente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 120,
                'use_case'          => 'Desarrollo de modelos ML para predicción de demanda energética y optimización de redes eléctricas inteligentes',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA para diseño de interfaces de monitorización energética',
                'description'       => 'Diseña dashboards y aplicaciones de monitorización de consumo energético que sean intuitivos, informativos y que motiven cambios de comportamiento en usuarios residenciales e industriales.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX/UI especializado en energía y sostenibilidad, con experiencia en visualización de datos complejos y en el diseño de interfaces que generan cambios de comportamiento. Necesito diseñar una aplicación de monitorización energética.

**Contexto del proyecto:**
- Tipo de usuario: [residencial / industrial / comunidad de vecinos / gestor de edificio]
- Plataforma: [app móvil / dashboard web / pantalla en tiempo real en la planta]
- Datos disponibles: [consumo en tiempo real, generación solar, precio de la energía, temperatura]
- objetivo de comportamiento: [reducir el consumo / maximizar el autoconsumo / reducir la factura]

**tarea 1: Research de usuarios y definición de necesidades**

Diseña el proceso de research para entender al usuario energético:
- Perfil de los usuarios principales: sus motivaciones, miedos y contexto de uso de la app
- Preguntas clave para entrevistas con usuarios (guion de 45 minutos)
- Card sorting para la arquitectura de información: ¿qué datos son más importantes para el usuario?
- Análisis de competidores: evaluación UX de las apps de las principales comercializadoras
- Definición de los 3 jobs-to-be-done del usuario principal

**tarea 2: Arquitectura de información y navegación**

Estructura la aplicación:
- Mapa del sitio completo con todas las pantallas
- Flujo de onboarding: conexión del medidor, configuración de la instalación solar, preferencias de alertas
- Flujo principal: inicio → ver consumo actual → comparar con ayer/mes pasado → descubrir insights → actuar
- Flujo de alertas: notificación de pico de consumo → ver detalle → optimizar
- Estructura de informes mensuales: qué mostrar y en qué orden

**tarea 3: Visualización de datos energéticos**

Define las mejores visualizaciones para cada tipo de dato:
- Consumo en tiempo real: ¿gauge? ¿número grande? ¿gráfico de barras actualizado cada 15 min?
- Evolución histórica: comparativa semanal/mensual/anual con contexto ("consumiste un 12% menos que en octubre")
- Desglose por dispositivo (cuando hay sensores por circuito): treemap o gráfico de donut
- Balance solar: generación vs consumo vs exportación a red en tiempo real
- Precio de la energía: cómo mostrar la hora del día más barata para lanzar electrodomésticos

**tarea 4: Gamificación y motivación del cambio de comportamiento**

Diseña los elementos de engagement:
- Sistema de puntos/logros por reducción de consumo (sin ser condescendiente)
- Comparativa con vecinos similares (benchmarking anonimizado, estilo OPower)
- Retos semanales: "Esta semana, lava la ropa en frío y ahorra X€"
- Célula de CO2 evitado: visualización del impacto ambiental en términos tangibles (árboles, km en coche)
- Informe mensual gamificado que el usuario quiera compartir en redes sociales

**tarea 5: Diseño de alertas y notificaciones**

Crea el sistema de comunicación proactiva:
- Tipos de alerta: pico de consumo / precio muy alto en esta franja / batería lista para usar / tarifa óptima ahora
- Frecuencia y timing: cómo no saturar al usuario con notificaciones
- Copy de las notificaciones: claro, accionable y sin alarmismo
- Configuración de preferencias: el usuario decide cuándo y cómo recibir alertas

**tarea 6: Sistema de diseño para energía**

Define el design system de la aplicación:
- Paleta de colores: verde/azul para sostenibilidad, rojo/amarillo para alertas de consumo alto
- Iconografía específica del sector energético (rayo, sol, batería, red)
- Tipografía para números grandes y datos en tiempo real (que sea muy legible)
- Componentes reutilizables: KPI card, energy gauge, comparison bar, alert banner

Entrega las especificaciones como si fuera un Figma handoff, con anotaciones de comportamiento, estados y variantes de cada componente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseño UX de aplicaciones de monitorización de consumo energético y autoconsumo solar',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA para ventas de soluciones de energía renovable',
                'description'       => 'Domina el proceso de venta consultiva de soluciones de energía solar, almacenamiento y eficiencia energética usando IA para personalizar propuestas y superar objeciones técnicas y económicas.',
                'prompt_content'    => <<<'EOT'
Eres un experto en ventas consultivas del sector energético con amplia experiencia en soluciones de energía solar, almacenamiento en baterías y eficiencia energética. Necesito un sistema de ventas completo adaptado a mi mercado.

**Contexto del equipo de ventas:**
- Tipo de solución: [instalaciones fotovoltaicas / VPP / auditorías energéticas / contratos PPA]
                - Segmento de cliente: [PYME industrial / grandes superficies / comunidades de propietarios / cliente residencial]
- Ciclo de ventas actual: [semanas/meses]
- Principal objeción: [inversión inicial / complejidad técnica / incertidumbre regulatoria / alternativas del mercado]

**tarea 1: Proceso de cualificación de leads energéticos**

Diseña el sistema de cualificación BANT adaptado al sector:
- Budget: preguntas para descubrir si el cliente tiene capacidad de inversión o interés en financiación
- Authority: quién toma la decisión en una empresa industrial (CEO, gerente de mantenimiento, CFO)
- Need: calculadora de ahorro para estimar el potencial de ahorro antes de la visita
- Timeline: señales que indican urgencia real (factura eléctrica muy alta, renovación de contrato próxima)

Proporciona un formulario de cualificación de 10 preguntas para el primer contacto telefónico.

**tarea 2: Análisis de la factura eléctrica como herramienta de apertura**

El análisis de la factura es el mejor abridor de conversación:
- Guion para solicitar la factura al prospecto ("necesito verla para darte un presupuesto real")
- Qué datos extraer de la factura: potencia contratada, consumo en horas punta/valle, penalizaciones por reactiva
- Cómo presentar el análisis: los 3 hallazgos más impactantes que justifican la solución
- Calculadora de ROI a partir de los datos de la factura (fórmulas y supuestos)
- Cómo usar el análisis de la factura en el email de seguimiento post-primera reunión

**tarea 3: Manejo de objeciones técnicas y económicas**

Crea el banco de objeciones con respuestas probadas:
- "Es una inversión muy grande para nuestra empresa" → [respuesta con ROI, financiación, leasing]
- "No sé si me saldrá rentable con los cambios regulatorios" → [historia de estabilidad, PPAs, garantías]
- "Ya tenemos contrato con la comercializadora hasta 2026" → [análisis de costes de no actuar + opciones]
- "Necesito consultarlo con el consejo de administración" → [propuesta ejecutiva de una página para facilitar la aprobación]
- "He pedido presupuesto a otros y eran más baratos" → [cómo vender valor vs precio en un mercado comoditizado]

**tarea 4: Propuesta técnico-económica ganadora**

Diseña la estructura de la propuesta perfecta:
- Resumen ejecutivo: problema del cliente, solución propuesta, ROI esperado (1 página)
- Análisis de la situación energética actual del cliente
- Descripción de la solución técnica: componentes, garantías, vida útil
- Análisis financiero: inversión, ahorro anual, payback, VAN, TIR
- Opciones de financiación: compra directa, leasing, PPA, financiación bancaria
- Proceso de implementación: fases, plazos, impacto en la operativa del cliente
- Garantías y servicio post-venta: monitoring, mantenimiento, garantía de producción

**tarea 5: Estrategia de cierre y seguimiento**

Define el proceso de cierre adaptado al sector:
- Señales de compra en clientes del sector energético (técnicas y verbales)
- Técnica de cierre del "análisis de no hacer nada": cuánto les cuesta cada mes no instalar
- Secuencia de seguimiento post-propuesta: 5 touchpoints en 3 semanas con contenido de valor diferente cada vez
- Estrategia para cuando el cierre se alarga más de 3 meses: cómo mantener el interés vivo
- Cómo pedir referidos a clientes satisfechos en un sector donde la confianza es fundamental

Incluye scripts de conversación listos para usar y plantillas de email para cada etapa del proceso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Proceso de venta consultiva de soluciones de energía renovable con análisis financiero y manejo de objeciones',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA para product management de soluciones energéticas digitales',
                'description'       => 'Aplica metodologías de product management con IA para desarrollar plataformas de gestión energética, desde el discovery de necesidades hasta la medición del impacto en el consumo.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager senior con experiencia en energy tech y climatech, especializado en el desarrollo de plataformas digitales para la gestión y optimización energética. Necesito definir la estrategia de producto para una plataforma de gestión energética.

**Contexto del producto:**
- Tipo de plataforma: [SaaS de gestión energética para industrias / app de autoconsumo residencial / plataforma de trading de energía / gestión de flotas de VE]
- Estado actual: [idea / MVP / producto con primeros clientes / producto en crecimiento]
- Usuarios principales: [gestores energéticos / facility managers / propietarios de instalaciones solares]
- Métrica norte: [energía ahorrada / CO2 evitado / ahorro económico del usuario / tiempo de amortización reducido]

**tarea 1: Discovery de necesidades en el sector energético**

Diseña el proceso de product discovery:
- Plan de entrevistas con gestores energéticos (guion de 45 minutos con las preguntas clave)
- Framework de análisis de trabajos por hacer (JTBD) aplicado a la gestión energética
- Cómo extraer insights de las reseñas de competidores en G2 y Capterra
- Shadow sessions: cómo acompañar a un gestor energético para observar su flujo de trabajo real
- Síntesis de insights: de entrevistas a oportunidades de producto accionables

**tarea 2: Estrategia de producto y roadmap**

Define la dirección del producto:
- Visión de producto a 3 años: qué resolvemos y para quién, de forma que sea diferenciadora
- Temas estratégicos del roadmap: [monitorización → optimización → predicción → automatización]
- Priorización con framework ICE/RICE adaptado al contexto energético
- Balance entre features de reducción de consumo (valor directo al usuario) y features de plataforma (escalabilidad)
- Cómo incluir la regulación energética (Real Decreto de Autoconsumo, mercado eléctrico) como input del roadmap

**tarea 3: Métricas de producto para una plataforma energética**

Define el sistema de métricas:
- Métricas de activación: primer análisis energético completado, primera alerta configurada
- Métricas de retención: usuarios que consultan el dashboard semanalmente, alertas que generan acciones
- Métricas de impacto real: reducción de consumo medida, ahorro económico generado, CO2 evitado
- North Star Metric: define la métrica única que mejor captura el valor entregado
- Cómo correlacionar el engagement con la plataforma y el ahorro energético real del cliente

**tarea 4: Integración de IA en el producto energético**

Define la hoja de ruta de features de IA:
- Quick win (MVP): alertas de anomalías de consumo basadas en reglas simples
- Fase 2: predicción de consumo y recomendaciones de optimización personalizadas
- Fase 3: optimización automática (control del termostato, programación de cargas flexibles)
- Fase 4: participación automática en mercados de flexibilidad (demand response)
- Para cada fase: qué datos se necesitan, qué modelo aplica, cómo explicar la IA al usuario no técnico

**tarea 5: Go-to-market y crecimiento del producto energético**

Define la estrategia de crecimiento:
- Estrategia de precios: freemium con límite de puntos de medición / por kWh gestionados / licencia anual
- Canales de distribución: ¿directo? ¿a través de instaladoras solares? ¿integración con comercializadoras?
- Programa de partners: cómo construir un ecosistema de integradores certificados
- Modelo de expansión internacional: qué mercados europeos priorizar y por qué
- Estrategia de datos: cómo los datos de los clientes mejoran el producto para todos (flywheel de datos)

Entrega un Product Requirements Document (PRD) de 2 páginas para la feature de mayor impacto que hayas identificado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Definición de estrategia y roadmap de producto para plataformas de gestión energética y energy tech',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para gestión de talento en empresas del sector energético',
                'description'       => 'Atrae, desarrolla y retiene el talento especializado que necesita la revolución energética, usando IA para identificar perfiles escasos, diseñar planes de formación técnica y construir equipos de alto rendimiento.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Recursos Humanos con especialización en el sector de la energía y la tecnología climática. El sector está en plena transformación y la guerra por el talento técnico es intensa. Necesito una estrategia completa de gestión del talento para una empresa energética en crecimiento.

**Contexto de la empresa:**
- Tipo: [instaladora solar en crecimiento / startup de energy tech / comercializadora de energía verde / empresa de eficiencia energética]
- Tamaño actual y objetivo en 12 meses: [personas]
- Perfiles más difíciles de encontrar: [ingenieros de energía / data scientists / técnicos de instalación / comerciales especializados]
- Principal desafío de talento: [escasez de perfiles técnicos / alta rotación / falta de candidatos con experiencia en renovables]

**tarea 1: Mapa de talento crítico para la transición energética**

Define los perfiles estratégicos para tu empresa:
- Roles críticos en el corto plazo (0-6 meses) y largo plazo (1-3 años)
- Para cada rol crítico: descripción de competencias técnicas y blandas, fuentes de talento, tiempo medio de contratación
- Identificación de perfiles transferibles: ¿qué profesionales de otros sectores pueden convertirse en ingenieros energéticos con formación?
- Mapa de talento interno: ¿qué empleados actuales podrían evolucionar hacia roles críticos?

**tarea 2: Estrategia de atracción de talento técnico escaso**

Diseña la estrategia de recruiting para perfiles difíciles:
- Employer branding en comunidades técnicas: GitHub, LinkedIn, foros de ingeniería energética
- Programa de referidos técnicos: cómo hacer que los mejores ingenieros atraigan a sus colegas
- Alianzas con universidades: programas de prácticas, trabajos de fin de grado, proyectos de investigación
- Presencia en eventos del sector: qué conferencias de energía y tecnología merece la pena patrocinar
- Propuesta de valor para el candidato: más allá del salario, el impacto ambiental como motivador

**tarea 3: Plan de formación técnica acelerada**

Diseña el programa de upskilling en energías renovables:
- Onboarding técnico para nuevas incorporaciones: plan de 90 días con hitos de competencia
- Academia interna de energía: cursos online, talleres prácticos, certificaciones sectoriales
- Programa de mentoring técnico: cómo emparejar a senior engineers con perfiles junior o de otros sectores
- Budget de formación por perfil y cómo medir el retorno de la inversión en formación
- Certificaciones externas clave: NABCEP (solar), certificaciones de eficiencia energética, habilitaciones eléctricas

**tarea 4: Retención en un mercado de alta demanda**

Define la estrategia de retención para perfiles críticos:
- Análisis de por qué se van los técnicos energéticos (encuesta de salida y señales tempranas)
- Plan de compensación competitivo: salario base + variable + beneficios específicos del sector (coche eléctrico, instalación solar en casa)
- Career path técnico: escalera de carrera para el ingeniero que no quiere ser manager
- Proyectos de alto impacto: cómo asignar a los mejores a los proyectos más interesantes para retenerlos
- Programa de equity/participación para los perfiles más estratégicos

**tarea 5: Cultura de innovación y misión en una empresa energética**

Conecta la misión ambiental con la gestión del talento:
- Cómo articular la misión de impacto en la propuesta de valor al empleado
- Iniciativas de cultura verde: compensación de huella de carbono personal, voluntariado ambiental
- Comunicación interna del impacto: cuánto CO2 han ayudado a evitar los proyectos del equipo
- Cómo involucrar al equipo en la estrategia de sostenibilidad de la empresa (no solo ejecutores, también cocreadores)

Entrega un plan de talento para los próximos 12 meses con hitos trimestrales, KPIs y presupuesto estimado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Estrategia de atracción, formación y retención de talento técnico en el sector de energías renovables',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para modelización financiera de proyectos de energía renovable',
                'description'       => 'Construye modelos financieros robustos para proyectos de energía solar, eólica y almacenamiento, evaluando la viabilidad económica, el riesgo y la estructura de financiación óptima.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en project finance para energías renovables con experiencia en la estructuración y evaluación de proyectos de generación eléctrica. Necesito construir un modelo financiero completo para un proyecto de energía renovable.

**Descripción del proyecto:**
- Tipo de tecnología: [fotovoltaica / eólica terrestre / almacenamiento en baterías / hibridación solar+batería]
- Capacidad instalada: [MWp / MW]
- Ubicación: [país y región, para el marco regulatorio correcto]
- Modelo de ingresos: [mercado libre / PPA / subasta regulada / autoconsumo industrial]
- Inversión total estimada: [millones de euros/dólares]

**tarea 1: Estimación de ingresos y producción energética**

Construye la parte de ingresos del modelo:
- Curva de producción anual: P50, P90 basado en datos de irradiación (PVGIS, Meteonorm)
- Degradación anual de los paneles (típicamente 0.5% anual) y su impacto en los ingresos
- Estructura de precios: precio PPA fijo en € / MWh con escalación (IPC parcial)
- Ingresos de capacidad (mercado de servicios de ajuste, si aplica)
- Ingresos por certificados verdes o garantías de origen

**tarea 2: Estructura de costes del proyecto**

Detalla todos los costes a lo largo del ciclo de vida del proyecto:
- CAPEX: paneles, inversores, estructura, obra civil, conexión, ingeniería y permisos
- OPEX anual: O&M, seguro, arrendamiento de terreno, coste de monitoring
- Provisión para repowering de inversores (año 12-15) y paneles (año 25+)
- Costes de desmantelamiento al final de la vida útil (provisión anual)
- Impuestos y tasas específicas del sector (impuesto a la generación, tasa de acceso a red)

**tarea 3: Estructura de financiación (Project Finance)**

Diseña la estructura financiera óptima:
- Ratio deuda/equity óptimo para el perfil de riesgo del proyecto (típicamente 70-80% deuda)
- Características del préstamo: plazo (15-18 años), tipo de interés (fijo vs variable), periodo de carencia
- Covenants financieros: DSCR mínimo, ratio de reserva, triggers de distribución
- Account structure: cuenta de reserva de servicio de deuda (DSRA), cuenta de O&M, cascada de distribución
- Modelización de los flujos de caja del equity y cálculo de la TIR del accionista

**tarea 4: Análisis de sensibilidad y riesgo**

Evalúa la robustez financiera del proyecto:
- Variables críticas: precio de energía, producción, tipo de interés, CAPEX, plazo de construcción
- Análisis de sensibilidad: impacto en TIR y VAN de cada variable (±10%, ±20%)
- Análisis de escenarios: caso base, caso optimista, caso pesimista, caso de estrés
- Análisis de punto de equilibrio: precio mínimo de energía para que el proyecto sea viable
- Riesgos principales del proyecto y mitigaciones: riesgo de recurso, riesgo de contraparte, riesgo de construcción

**tarea 5: Métricas de inversión y criterios de decisión**

Calcula y presenta los indicadores clave:
- TIR del proyecto (unlevered) y TIR del equity (levered)
- VAN del proyecto y del equity (con tasa de descuento de mercado para renovables)
- Payback period del equity y del proyecto
- DSCR (Debt Service Coverage Ratio) mínimo y promedio durante la vida del préstamo
- LLCR (Loan Life Coverage Ratio) y PLCR (Project Life Coverage Ratio)
- Umbral mínimo de TIR para la aprobación de la inversión por el comité

Proporciona la estructura completa de un modelo Excel con las pestañas necesarias, fórmulas clave y notas metodológicas para cada sección del modelo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Modelización financiera y análisis de viabilidad económica de proyectos de energía renovable',
                'vote_score'        => 25,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA para navegación del marco regulatorio de energías renovables',
                'description'       => 'Domina el complejo entorno legal y regulatorio del sector energético usando IA para interpretar normativa, gestionar licencias, permisos y contratos de acceso a red en España y Latinoamérica.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho energético con amplia experiencia en la regulación de las energías renovables, el mercado eléctrico y los permisos administrativos en España y países latinoamericanos. Necesito orientación experta sobre el marco regulatorio aplicable a un proyecto de energía renovable.

**Descripción del proyecto:**
- Tipo de instalación: [fotovoltaica para autoconsumo / planta de generación en suelo / eólica / almacenamiento BESS]
- Potencia: [kW o MW]
- Ubicación: [comunidad autónoma en España o país en Latinoamérica]
- Modelo de negocio: [autoconsumo colectivo / venta a mercado / PPA con empresa / subasta]
- Promotor: [empresa / comunidad de propietarios / administración pública / cooperativa energética]

**tarea 1: Marco normativo aplicable**

Identifica la regulación vigente:
- En España: Real Decreto 244/2019 (autoconsumo), Real Decreto 1183/2020 (acceso y conexión), normativa autonómica
- Artículos específicos que aplican a la tipología del proyecto
- Legislación ambiental: Evaluación de Impacto Ambiental, cuando es obligatoria y cuando aplica la vía simplificada
- Normativa de suelo: clasificación del suelo necesaria para instalaciones en suelo en cada comunidad autónoma
- Para Latinoamérica: marco legal específico del país (Ley de Transición Energética en México, Ley RER en Perú, etc.)

**tarea 2: Proceso de obtención de permisos**

Detalla la hoja de ruta administrativa:
- Permisos de acceso y conexión a la red: solicitud en distribuidora/transportista, documentación, plazos
- Autorización administrativa previa: organismo competente (CC.AA. o Estado), documentación requerida
- Autorización de construcción: licencia de obras municipal, documentación técnica necesaria
- Autorización de explotación: puesta en servicio, inspección inicial, certificado de fin de obra
- Registro en el Registro Administrativo de Instalaciones de Producción de Energía Eléctrica (RAIPEE) en España
- Plazos realistas de cada permiso y cuellos de botella habituales

**tarea 3: Contrato de acceso y conexión**

Analiza los aspectos contractuales con la distribuidora:
- Puntos críticos a negociar en el contrato de acceso: garantías exigidas, plazo de conexión, penalizaciones
- Costes de conexión: quién paga qué (promotor vs distribuidora) según la normativa vigente
- Derechos de acceso: qué pasa si vendes el proyecto, ¿son transferibles los derechos de acceso?
- Gestión de incumplimientos de la distribuidora: mecanismos de reclamación y tiempos

**tarea 4: Estructura del PPA (Power Purchase Agreement)**

Diseña las cláusulas clave del contrato de compraventa de energía:
- Precio de la energía: fórmula de precio, indexación, suelo y techo de precio
- Volumen garantizado y penalizaciones por shortfall de producción
- Duración del contrato y condiciones de renovación o terminación anticipada
- Garantías financieras del comprador: cómo protegerse ante impago
- Resolución de disputas: árbitro vs tribunales, jurisdicción, plazo de resolución
- Caso de fuerza mayor: qué eventos excusan el incumplimiento y cuáles no

**tarea 5: Comunidades de energía y autoconsumo colectivo**

Si el modelo incluye comunidades de energía:
- Marco legal de las comunidades de energía renovable en la Directiva RED II y su transposición en España
- Estructura jurídica recomendada: sociedad cooperativa, asociación, SL de propósito especial
- Acuerdo de participación entre los miembros de la comunidad: qué debe incluir
- Gestión de la energía compartida: reparto de excedentes, mecanismos de compensación
- Fiscalidad de la comunidad de energía: IVA, IS, obligaciones de facturación a miembros

Proporciona un checklist de due diligence legal para un inversor que adquiere un proyecto de renovables en fase de desarrollo, incluyendo los red flags más habituales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Navegación del marco regulatorio y proceso de permisos para proyectos de energías renovables',
                'vote_score'        => 23,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para soporte técnico en soluciones de energía solar y autoconsumo',
                'description'       => 'Gestiona el soporte técnico de instalaciones de energía solar y sistemas de almacenamiento con IA, diagnosticando problemas de rendimiento, gestionando garantías y educando a los clientes sobre su instalación.',
                'prompt_content'    => <<<'EOT'
Eres un técnico de soporte especializado en instalaciones de energía solar fotovoltaica, sistemas de almacenamiento y gestión de energía. Necesito construir un sistema de soporte técnico eficiente para una empresa instaladora en crecimiento.

**Contexto del servicio:**
- Cartera de instalaciones: [número de sistemas instalados]
- Tipos de sistema: [residencial / industrial / autoconsumo con batería / instalaciones en red]
- Canales de soporte actuales: [teléfono / email / app / portal web]
- Tiempo de respuesta actual y objetivo: [horas]

**tarea 1: Base de conocimiento técnico de instalaciones solares**

Crea la base de conocimiento para el equipo de soporte:
- Top 20 incidencias más frecuentes en instalaciones fotovoltaicas (con causas raíz y soluciones paso a paso)
- Árbol de decisión de diagnóstico: cuando el cliente llama diciendo "mis paneles no generan lo esperado"
- Interpretación de los códigos de error de los inversores más comunes (Huawei, Fronius, SMA, Growatt)
- Guia de monitorización remota: cómo detectar una incidencia antes de que el cliente la reporte
- Procedimiento de análisis de sombreados: cuándo es normal y cuándo es un problema a resolver

**tarea 2: Protocolo de atención al cliente energético**

Define el flujo de soporte para cada tipo de incidencia:

- Rendimiento inferior al esperado: protocolo de investigación (datos de irradiación, datos del inversor, inspección visual remota)
- Inversor apagado o con error: diagnóstico remoto, reinicio guiado, escalado a técnico en campo
- Batería que no carga o descarga correctamente: diagnóstico del BMS, actualización de firmware, reemplazo
- Factura eléctrica que no bajó como se esperaba: análisis del sistema de monitorización vs consumos reales del cliente
- Solicitud de garantía de producción: cómo calcular si se cumple la garantía y qué compensación aplica

**tarea 3: Autoservicio y educación del cliente**

Diseña el programa de educación del usuario:
- Guia del propietario: qué debe revisar mensualmente, qué es normal y qué no en su instalación
- Tutoriales en vídeo de 2 minutos: cómo leer el dashboard de monitorización, cómo reiniciar el inversor, cómo maximizar el autoconsumo
- FAQ interactivo: las 30 preguntas más frecuentes de los clientes con respuestas claras y sin tecnicismos
- App de autodiagnóstico: árbol de decisión para que el cliente identifique si puede resolverlo solo o necesita llamar
- Comunicaciones proactivas: email mensual con el informe de producción y consejos de optimización

**tarea 4: Gestión de garantías y reclamaciones**

Establece el proceso de gestión de garantías:
- Mapa de garantías: quién garantiza qué (fabricante de paneles, fabricante de inversor, instaladora, seguro de producción)
- Proceso de activación de garantía de fabricante: documentación necesaria, plazos de respuesta, gestión del RMA
- Gestión de clientes insatisfechos: protocolo de escalado, compensaciones posibles, límites aceptables
- Documentación de incidencias: cómo registrar cada caso para defender la garantía o reclamar al fabricante
- KPIs del servicio de garantías: tasa de resolución en primera llamada, tiempo medio de resolución, satisfacción post-incidencia

**tarea 5: Mantenimiento preventivo y retención de clientes**

Construye el programa de mantenimiento:
- Plan de mantenimiento anual: qué se revisa, con qué frecuencia, precio y cómo comunicarlo al cliente
- Sistema de alertas predictivas: cuándo alertar al cliente de una pérdida de rendimiento gradual
- Campaña de upsell a través del soporte: cómo identificar clientes con potencial para añadir batería o ampliar la instalación
- Programa de fidelización: descuentos en mantenimiento por antigüedad, clientes embajadores, referidos

Define los SLAs de soporte con tiempos de respuesta y resolución por nivel de gravedad de la incidencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de soporte técnico para instalaciones de energía solar y gestión de garantías con IA',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para freelancers especializados en proyectos de energía renovable',
                'description'       => 'Construye una carrera freelance próspera en el sector de las energías renovables, desde la especialización técnica hasta la captación de proyectos de alto valor y la gestión de clientes en un sector en auge.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de desarrollo de negocio para profesionales independientes del sector energético. El sector de las energías renovables está en plena expansión y hay una demanda creciente de consultores freelance especializados. Necesito una hoja de ruta completa para construir mi negocio independiente en este sector.

**Perfil del freelancer:**
- Especialidad actual: [ingeniero eléctrico / consultor de eficiencia energética / analista financiero de proyectos / gestor de permisos / técnico solar / formador en energías renovables]
- Experiencia en el sector: [años]
- Tipo de proyectos que quiero hacer: [auditorías energéticas / ingeniería básica de proyectos / gestión de permisos / due diligence financiera / formación corporativa]
- Mercado objetivo: [instaladoras / fondos de inversión / empresas industriales / administraciones públicas / startups de energy tech]

**tarea 1: Definición de nicho y propuesta de valor**

Encuentra tu posicionamiento diferencial en el sector:
- Análisis de los sub-nichos más rentables y menos saturados en renovables actualmente
- Cómo combinar tu especialización técnica con habilidades transversales para crear un perfil único
- Declaración de posicionamiento: "Ayudo a [tipo de cliente] a [resultado específico] cuando [situación]"
- Precio por hora / por proyecto: benchmarking de tarifas freelance en energías renovables por especialidad
- Cartera mínima viable: qué proyectos y logros necesitas para justificar tus tarifas objetivo

**tarea 2: Construcción de autoridad en el sector energético**

Posiciónate como experto reconocido:
- Estrategia de LinkedIn para el especialista en renovables: tipo de contenido, frecuencia, hashtags
- Artículos técnicos de alto valor: cómo escribir análisis de proyectos o artículos de opinión sobre el sector
- Participación en congresos y eventos: Genera Solar, WindEurope, foros de eficiencia energética
- Certificaciones que aumentan tu credibilidad y tus tarifas: NABCEP, auditor energético certificado, PMP
- Red de contactos estratégica: cómo conectar con promotores, fondos y empresas que contratan freelance

**tarea 3: Captación de proyectos en un sector de alto valor**

Diseña tu sistema de ventas para proyectos energéticos:
- LinkedIn outreach: cómo contactar a promotores de proyectos y fondos de inversión en renovables
- Alianzas estratégicas: cómo colaborar con consultoras más grandes como subcontratista en grandes proyectos
- Plataformas especializadas: Upwork para consulting, plataformas de licitación pública, redes sectoriales
- Propuesta técnica ganadora: estructura de una propuesta de consultoría energética que comunica valor y no solo horas
- Cómo posicionarte para contratos de largo plazo: de proyecto puntual a retainer mensual

**tarea 4: Gestión y ejecución de proyectos energéticos**

Organiza tu operativa como consultor independiente:
- Contrato tipo para proyectos de consultoría energética (cláusulas clave que te protegen)
- Herramientas de trabajo: software de simulación energética (PVsyst, SAM, SketchUp), gestión de proyectos
- Proceso de entrega de calidad: revisión técnica, documentación estándar, gestión de cambios de alcance
- Subcontratación: cuándo y cómo subcontratar partes de los proyectos a otros freelancers especializados
- Gestión de la propiedad intelectual: a quién pertenecen los modelos y herramientas que desarrollas

**tarea 5: Escalar el negocio freelance en energía**

Define el plan de crecimiento:
- De consultor individual a micro-agencia: cuándo y cómo dar el salto
- Productización de servicios: auditoría energética en 5 días / análisis de viabilidad en 2 semanas (precio fijo)
- Formación como fuente de ingresos: cursos online sobre renovables, talleres para empresas
- Cómo diversificar ingresos: consultoría + contenido + formación + participación en proyectos como asesor
- Estrategia de salida: si algún día quieres vender la consultora o unirte a una empresa como socio

Proporciona un plan de 12 meses con hitos específicos, inversión requerida y métricas de éxito para cada trimestre.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Hoja de ruta para construir una consultoría freelance especializada en proyectos de energías renovables',
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
