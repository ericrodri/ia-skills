<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills621Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de productos del mar y acuicultura con IA',
                'description'      => 'Crea estrategias de marketing y comunicación para empresas del sector pesquero y acuícola que quieren diferenciarse en mercados de alta competencia y baja digitalización.',
                'prompt_content'   => <<<'EOT'
Actúa como especialista en marketing agroalimentario con experiencia en el sector pesquero y la acuicultura. Conoces las particularidades del mercado de productos del mar: la alta perecedibilidad, la dependencia de la temporada y las cuotas de pesca, la complejidad de la cadena de valor desde el barco o la granja acuícola hasta el consumidor final, y la creciente demanda de trazabilidad y sostenibilidad por parte de los distribuidores y los consumidores.

Contexto del proyecto:
Debo desarrollar una estrategia de marketing para [INSERTAR EMPRESA: ej. una empresa de acuicultura de lubina y dorada en Galicia / una lonja que quiere digitalizar su relación con chefs y restaurantes / una marca de conservas de atún sostenible certificada MSC]. El objetivo principal es [INSERTAR OBJETIVO: ej. aumentar la venta directa a restaurantes de alta cocina / posicionar la marca entre consumidores que priorizan la sostenibilidad / abrir canal de exportación a mercados del norte de Europa].

Tarea:
Desarrolla una estrategia de marketing completa con los siguientes componentes:

1. Análisis del consumidor de productos del mar: describe los tres perfiles de consumidor más relevantes para el sector (el consumidor tradicional de pescado fresco en mercado, el consumidor foodie que valora el origen y la trazabilidad, y el comprador B2B de restauración) con sus motivaciones de compra, barreras y canales de información preferidos.

2. Propuesta de valor diferencial: define la propuesta de valor de la empresa para cada segmento de cliente, articulando cómo los atributos del producto (origen certificado, método de pesca o cría, frescura, sostenibilidad) se traducen en beneficios tangibles para cada perfil.

3. Estrategia de contenidos para el sector pesquero: diseña un calendario editorial de seis meses que combine contenidos de origen y trazabilidad (vídeos en barco o en granja), recetas y usos culinarios, información sobre sostenibilidad y certificaciones, y testimonios de chefs o distribuidores, adaptado a Instagram, TikTok y LinkedIn según el canal.

4. Estrategia de distribución y canal: analiza los canales de distribución disponibles (venta directa online, mercados gourmet, distribuidores HORECA, plataformas de e-commerce de alimentación) y recomienda la combinación óptima según el perfil de empresa, con los requisitos logísticos de cada canal para productos perecederos.

5. Certificaciones y sellos como herramienta de marketing: describe cómo utilizar las principales certificaciones del sector (MSC para pesca sostenible, ASC para acuicultura responsable, AQUACULTURE STEWARDSHIP COUNCIL, denominaciones de origen) como activos de marketing y qué canales y formatos son más efectivos para comunicarlas.

6. Estrategia de marketing para exportación: si el objetivo incluye la exportación, diseña las adaptaciones necesarias del mensaje, el packaging y la comunicación para tres mercados europeos objetivo (ej. Francia, Alemania, Países Nórdicos), considerando las diferencias culturales en el consumo de productos del mar.

7. Plan de métricas y ROI de marketing: define los indicadores de éxito de la estrategia adaptados al ciclo de venta del sector pesquero (donde la demanda puede variar drásticamente según la estación o la disponibilidad de capturas), incluyendo métricas de marca, de generación de leads B2B y de ventas directas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Marketing de productos pesqueros y acuícolas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma de monitorización de acuicultura con IoT e IA',
                'description'      => 'Diseña la arquitectura técnica de un sistema de monitorización en tiempo real de parámetros de calidad del agua y salud de peces en instalaciones de acuicultura marina y continental.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software e ingeniero de sistemas IoT con experiencia en el sector de la acuicultura y la biotecnología marina. Has diseñado sistemas de monitorización para instalaciones de cultivo de especies marinas (lubina, dorada, salmón, rodaballo) y de agua dulce (trucha, esturión, tilapia) que permiten detectar de forma temprana problemas de calidad del agua, estrés en los peces y condiciones adversas que afecten al crecimiento y la supervivencia de los stocks.

Contexto del proyecto:
Debo diseñar un sistema completo de monitorización inteligente para una instalación de acuicultura de [INSERTAR TIPO: ej. jaulas marinas flotantes para lubina en el Mediterráneo / tanques de recirculación (RAS) para salmón en tierra / estanques de agua dulce para trucha arco iris en Asturias]. La instalación tiene [INSERTAR ESCALA: ej. 8 jaulas de 20 metros de diámetro / 12 tanques RAS de 200 m³ / 25 estanques de producción].

Tarea:
Diseña la arquitectura técnica completa con los siguientes entregables:

1. Red de sensores y parámetros críticos: define qué parámetros de calidad del agua deben monitorizarse en tiempo real (oxígeno disuelto, temperatura, pH, salinidad, turbidez, amonio, nitrito, nitrato, CO₂), qué sensores son más adecuados para entornos marinos corrosivos y cómo se organiza la red de sensores en la instalación.

2. Arquitectura de conectividad en entornos marinos: dado que las instalaciones de acuicultura marina pueden estar a varios kilómetros de la costa, diseña la arquitectura de conectividad (LoRaWAN, 4G/LTE, WiFi mesh, comunicación por satélite como Starlink) para garantizar la transmisión de datos de sensores críticos incluso en condiciones de temporal.

3. Edge computing para procesamiento local: describe la capa de procesamiento en borde (edge computing) que permita tomar decisiones críticas de forma autónoma sin depender de la conectividad a la nube (ej. activación automática de aireadores si el oxígeno baja del umbral crítico, corte de alimentación automático si hay anomalía de temperatura).

4. Plataforma de datos en nube para análisis histórico: diseña la arquitectura del backend en nube para el almacenamiento, procesamiento y análisis de series temporales de datos de sensores, incluyendo el modelo de datos optimizado para consultas de series temporales (ej. usando TimescaleDB, InfluxDB o Apache IoTDB).

5. Motor de IA para detección temprana de anomalías: describe el pipeline de machine learning para detectar patrones anómalos en los parámetros de calidad del agua que puedan indicar inicio de una enfermedad, bloom de algas, avería de un equipo o condición climática adversa, antes de que afecten visiblemente a los peces.

6. Integración con sistemas de gestión de la explotación: explica cómo el sistema de monitorización se integra con los datos de producción (biomasa, tasa de crecimiento, mortalidad, consumo de pienso) y los registros sanitarios para ofrecer una visión completa del estado de la explotación.

7. Dashboard de gestión para el responsable de la instalación: describe las pantallas principales del dashboard web y app móvil para el técnico de acuicultura de guardia (incluyendo el modo de alerta para emergencias nocturnas que requieren acción inmediata) y para el director de producción que necesita una visión de la evolución de todos los lotes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Sistema de monitorización IoT para acuicultura',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad visual y packaging para marcas pesqueras con IA',
                'description'      => 'Crea la identidad de marca y el diseño de packaging para productos del mar que comuniquen autenticidad, sostenibilidad y calidad en un mercado saturado.',
                'prompt_content'   => <<<'EOT'
Actúa como director de arte especializado en branding y packaging para marcas del sector agroalimentario, con experiencia específica en productos del mar (pescados frescos, conservas, mariscos, productos de acuicultura). Conoces las convenciones visuales del sector, los elementos que transmiten frescura, autenticidad marítima y sostenibilidad, y sabes cómo diferenciarse en lineales de supermercado donde el packaging debe funcionar en tres segundos a distancia de un metro.

Contexto del proyecto:
Debo desarrollar la identidad visual y el packaging para [INSERTAR MARCA: ej. una nueva línea de conservas de atún de pesca sostenible certificada MSC / una marca de salmón de acuicultura ecológica noruega que llega al mercado español / una cooperativa de mariscadores de las Rías Gallegas que quiere vender online bajo marca propia].

El posicionamiento deseado es [INSERTAR POSICIONAMIENTO: ej. premium sostenible para consumidores urbanos de 30-45 años / artesanal y de origen para el canal gourmet / natural y saludable para familias que buscan proteína de calidad].

Tarea:
Desarrolla el brief creativo completo con los siguientes entregables:

1. Análisis del panorama visual del sector: describe los patrones visuales dominantes en el packaging de productos del mar (azules marinos, tipografías serif marineras, ilustraciones de peces, mapas náuticos, fotografías de barcos) e identifica los espacios de diferenciación donde una nueva marca puede destacar con un lenguaje visual más contemporáneo.

2. Concepto de identidad de marca: define el concepto creativo central de la identidad (no solo el logo, sino la idea que lo genera y que debe impregnar todos los touchpoints), la paleta de colores con justificación semántica y emocional, la tipografía principal y de apoyo, y los elementos gráficos secundarios.

3. Sistema de packaging por línea de producto: describe cómo el sistema visual se adapta a los diferentes formatos de packaging (lata de conserva, bolsa de marisco fresco refrigerado, caja de regalo para navidad, etiqueta de botella de salsa) manteniendo coherencia de marca pero optimizando para cada formato y canal de venta.

4. Comunicación de sostenibilidad en el packaging: dado que las certificaciones de pesca sostenible (MSC, ASC) son cada vez más determinantes en la decisión de compra, diseña cómo integrar estos sellos y los mensajes de sostenibilidad en el packaging sin que rompan la estética de la marca y sin que se perciban como greenwashing.

5. Packaging para e-commerce y venta directa: describe cómo adaptar el packaging para el envío a domicilio (resistencia al frío, presentación al abrir la caja, packaging secundario de protección) convirtiendo la apertura del paquete en una experiencia de marca memorable que motive la repetición de compra y el contenido generado por el usuario (unboxing).

6. Adaptación multicultural para exportación: si la marca tiene vocación exportadora, describe cómo adaptar el packaging para tres mercados europeos con diferentes convenciones visuales y normas de etiquetado (Francia, Alemania, Reino Unido), manteniendo la identidad central.

7. Guía de uso de la identidad para la cooperativa o empresa: define los elementos del manual de marca que necesita una empresa del sector pesquero de tamaño medio (que no tiene departamento de marketing interno) para aplicar la identidad con coherencia en sus comunicaciones cotidianas: papelería, vehículos, ropa de trabajo, redes sociales y feria sectorial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Branding y packaging para marcas de productos del mar',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para tecnología de trazabilidad pesquera con IA',
                'description'      => 'Desarrolla el proceso de venta de soluciones de trazabilidad y gestión de cadena de frío para empresas del sector pesquero y distribuidoras de productos del mar.',
                'prompt_content'   => <<<'EOT'
Actúa como director de ventas con experiencia en la comercialización de soluciones tecnológicas para el sector pesquero y la industria de alimentos del mar: sistemas de trazabilidad blockchain, plataformas de gestión de cadena de frío, software de lonja y primera venta, y herramientas de gestión de flota pesquera. Conoces la cultura del sector (tradicional, relacional, desconfiada de la tecnología), los decisores clave en cada segmento (patrón de pesca, gerente de empresa conservera, responsable de calidad de cadena de supermercado) y cómo traducir el valor regulatorio de la trazabilidad en beneficio económico tangible para el comprador.

Contexto del proyecto:
Vendo [INSERTAR SOLUCIÓN: ej. un sistema de trazabilidad de producto pesquero desde la captura hasta el punto de venta usando blockchain / una plataforma de gestión de temperatura en tiempo real para el transporte de productos del mar / software de gestión de lonja y primera venta]. Los clientes objetivo son [INSERTAR SEGMENTO: ej. empresas conserveras con facturación entre 5M y 50M / distribuidoras de pescado fresco con flota de camiones frigoríficos / lonjas pesqueras y organizaciones de productores].

Tarea:
Diseña el proceso de venta completo con los siguientes componentes:

1. Mapa de decisores y compradores en el sector pesquero: identifica los decisores, influenciadores y bloqueadores del proceso de compra en cada tipo de empresa del sector (conservera, distribuidora HORECA, supermercado, lonja, empresa de acuicultura), describiendo qué le importa a cada rol y quién tiene la última palabra.

2. Propuesta de valor adaptada al cumplimiento regulatorio: dado que gran parte de la demanda de trazabilidad en el sector pesquero está impulsada por regulación (Reglamento de la UE sobre trazabilidad pesquera, requisitos de supermercados y grandes cadenas), explica cómo convertir el cumplimiento obligatorio en una palanca de venta y diferenciación competitiva para el cliente.

3. Proceso de venta en un sector relacional: el sector pesquero es muy relacional y la confianza se construye lentamente. Diseña un proceso de venta que comience por la construcción de credibilidad (presencia en ferias sectoriales como Conxemar, referencias de empresas conocidas del sector, demostración en instalaciones reales) antes de entrar en la propuesta comercial.

4. Demostración de ROI para la conservera o distribuidora: construye el argumento de ROI económico para la inversión en trazabilidad, incluyendo: reducción del coste de recalls (retiradas de producto del mercado), acceso a nuevos clientes que exigen certificación de trazabilidad, reducción de reclamaciones por temperaturas fuera de rango y mejora de la negociación con aseguradoras.

5. Superación de objeciones culturales del sector: el sector pesquero tiene resistencia cultural a la tecnología y a compartir datos. Para cada objeción típica ("los datos de mis capturas son confidenciales", "ya cumplimos con la normativa sin necesidad de esto", "no tenemos a nadie que gestione esto", "prefiero esperar a que lo tenga la competencia") elabora la respuesta empática y basada en evidencias del sector.

6. Estrategia de canales indirectos: dado que es difícil cubrir toda la geografía pesquera española (Galicia, País Vasco, Andalucía, Mediterráneo, Canarias) con un equipo comercial propio, diseña una estrategia de canal con distribuidores o integradores del sector (empresas de frío industrial, instaladores de cámaras frigoríficas, consultores de calidad alimentaria) que puedan actuar como agentes de venta.

7. Plan de expansión por el sector: describe cómo crecer dentro de un cliente inicial (ej. empezar con trazabilidad de un producto y expandir a toda la gama, empezar con una empresa del grupo y expandir a otras filiales) y cómo usar ese cliente como referencia para la captación de nuevos clientes del mismo segmento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Ventas de tecnología de trazabilidad en el sector pesquero',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para software de gestión de explotaciones acuícolas con IA',
                'description'      => 'Define la estrategia de producto y el roadmap de una plataforma SaaS de gestión integral de explotaciones acuícolas, desde el control de producción hasta la comercialización.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager especializado en software vertical para el sector primario, con experiencia específica en herramientas de gestión para empresas de acuicultura y pesca. Conoces los flujos de trabajo operativos de una explotación acuícola (control de biomasa, gestión de lotes, registro de mortalidad, trazabilidad de piensos, gestión sanitaria, comercialización), las diferencias entre sistemas de cultivo (jaulas marinas, tanques en tierra RAS, estanques de agua dulce, líneas de mejillón) y los requisitos regulatorios europeos del sector.

Contexto del proyecto:
Gestiono el producto de una plataforma SaaS de gestión integral para empresas de acuicultura. La plataforma actual tiene [INSERTAR ESTADO: ej. 40 clientes activos entre España y Portugal / funcionalidades de control de producción, trazabilidad y reporting regulatorio / una app móvil para técnicos de campo que registran datos en las instalaciones]. Necesito definir la estrategia de producto para los próximos doce meses.

Tarea:
Desarrolla la estrategia de producto completa con los siguientes entregables:

1. Mapa de flujos de trabajo del acuicultor: describe los procesos operativos clave que el software debe cubrir para cada perfil de usuario (técnico de producción, veterinario de la empresa, director de producción, responsable comercial, gerente general), identificando los puntos de dolor actuales no resueltos por las soluciones existentes en el mercado.

2. Análisis de oportunidades de IA en acuicultura: identifica los cinco casos de uso de IA con mayor impacto en la gestión de una explotación acuícola (ej. predicción de la tasa de crecimiento de los peces por lote y condiciones de cultivo, detección de anomalías en parámetros de calidad del agua, optimización automática de la alimentación según temperatura y oxígeno, predicción de mortalidad por enfermedad, optimización del momento de cosecha según precio de mercado y peso objetivo).

3. Priorización del roadmap con framework ICE: aplica el framework ICE (Impact, Confidence, Ease) para priorizar las diez iniciativas de producto más relevantes para los próximos doce meses, justificando la puntuación de cada dimensión con datos o hipótesis concretas del sector acuícola.

4. Estrategia de expansión geográfica: el mercado de acuicultura en España es pequeño pero hay mercados relevantes en Portugal, Grecia, Turquía, Chile y Noruega. Define una estrategia de internacionalización del producto (localización, adaptación a normativas locales, modelos de go-to-market) para los dos mercados de expansión más viables.

5. Modelo de integraciones del ecosistema acuícola: describe las integraciones prioritarias para maximizar el valor de la plataforma: con analizadores automáticos de calidad del agua, con sistemas de alimentación automatizada, con plataformas de venta online (primera venta de pescado, marketplace B2B) y con sistemas de trazabilidad para certificación.

6. Gestión de la retroalimentación del cliente acuicultor: los clientes de software de acuicultura son expertos en sus procesos pero no en tecnología. Diseña un sistema de recogida de feedback que funcione en el contexto de una empresa donde el usuario principal trabaja en instalaciones remotas con conectividad limitada y no tiene tiempo de rellenar formularios.

7. Métricas de producto para software de acuicultura: define los KPI de producto más relevantes para una plataforma de gestión acuícola, considerando la estacionalidad del sector (el uso del software puede variar mucho entre la temporada de siembra y la temporada de cosecha) y la diversidad de tipos de cultivo de los clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Producto y roadmap para software de gestión acuícola',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en empresas pesqueras y acuícolas con IA',
                'description'      => 'Diseña procesos de selección, formación y retención de personal para empresas del sector pesquero, desde tripulantes de flota hasta técnicos acuícolas y personal de planta.',
                'prompt_content'   => <<<'EOT'
Actúa como director de Recursos Humanos especializado en el sector pesquero y la acuicultura. Conoces los desafíos únicos de gestión de personas en este sector: el trabajo en condiciones difíciles y peligrosas (tripulaciones pesqueras, trabajo en instalaciones marinas en cualquier clima), los larguísimos períodos de ausencia para la pesca de altura, las dificultades de atracción de talento joven a profesiones percibidas como duras y poco tecnológicas, y la creciente necesidad de perfiles técnicos cualificados (biólogos marinos, ingenieros de acuicultura, técnicos en calidad de aguas) en un mercado donde escasean.

Contexto del proyecto:
Necesito estructurar la gestión de personas de [INSERTAR EMPRESA: ej. una empresa de acuicultura con 80 empleados entre técnicos de producción, personal de planta y equipo comercial / una empresa armadora de pesca de altura con 3 barcos y 45 tripulantes / una conservera con 120 operarios de producción y 15 técnicos de calidad].

Tarea:
Desarrolla un plan integral de gestión del talento con los siguientes componentes:

1. Mapa de roles críticos y escasez de talento: identifica los perfiles más difíciles de cubrir en el sector (técnicos de acuicultura con experiencia en RAS, maquinistas navales titulados, biólogos marinos especialistas en patología piscícola) y describe las estrategias de atracción específicas para cada perfil, incluyendo acuerdos con universidades, programas de prácticas y presencia en ferias de empleo especializadas.

2. Proceso de selección para perfiles técnicos acuícolas: diseña el proceso de selección para un técnico de acuicultura (desde la definición del perfil hasta la oferta), incluyendo la evaluación de competencias técnicas (manejo de parámetros de calidad del agua, gestión sanitaria, uso de software de gestión) y competencias de campo (trabajo en entornos húmedos y al aire libre, tolerancia a horarios partidos y guardias nocturnas).

3. Plan de onboarding en entornos marinos: diseña un programa de incorporación para un técnico nuevo en una explotación acuícola marina que incluya la formación en seguridad específica del entorno marino, los procedimientos de emergencia, el conocimiento de las especies cultivadas y la formación en las herramientas digitales de gestión de la explotación.

4. Gestión de la seguridad y salud laboral en el sector pesquero: dado que el sector pesquero es uno de los más peligrosos (riesgo de caídas al agua, riesgo de accidente con maquinaria, enfermedades por exposición a humedad y frío), define el plan de prevención de riesgos laborales específico del sector, incluyendo la formación obligatoria, los equipos de protección y los protocolos de emergencia en mar.

5. Retención de tripulaciones pesqueras: la pesca de altura implica ausencias largas que dificultan la vida personal. Define las palancas de retención específicas para tripulaciones (turnos y rotaciones que permitan conciliar vida familiar, primas de productividad ligadas a la captura, beneficios sociales para las familias durante la ausencia, programas de bienestar a bordo).

6. Plan de digitalización de RRHH para el sector pesquero: describe cómo implementar herramientas digitales de gestión de RRHH (registro de jornada, gestión de nóminas con convenio pesquero, formación online) en un sector donde parte del personal trabaja sin conexión a internet durante semanas o en instalaciones con conectividad limitada.

7. Estrategia de relevo generacional: el sector pesquero envejece y tiene dificultades para atraer jóvenes. Diseña una estrategia de renovación generacional que incluya programas de FP dual con ciclos de acuicultura y pesca, becas universitarias vinculadas a compromiso de incorporación a la empresa y campañas de comunicación para mejorar la percepción de las profesiones del mar entre jóvenes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'RRHH y gestión del talento en el sector pesquero',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de inversiones en acuicultura con IA',
                'description'      => 'Evalúa la viabilidad económica y financiera de proyectos de acuicultura, considerando los riesgos biológicos, los ciclos de producción y las subvenciones del FEAMPA.',
                'prompt_content'   => <<<'EOT'
Actúa como analista financiero especializado en el sector primario con experiencia en la evaluación de proyectos de acuicultura e inversiones en el sector pesquero. Conoces los modelos de negocio de los distintos sistemas de cultivo (jaulas marinas, recirculación RAS, estanques de agua dulce, bancos marisqueros), los ciclos de producción de las especies más cultivadas en España (lubina, dorada, mejillón, trucha, rodaballo), los riesgos específicos del sector (mortalidad masiva por enfermedad, episodios de algas tóxicas, variabilidad de precios en lonja) y el marco de subvenciones europeas para la acuicultura.

Contexto del proyecto:
Debo evaluar la viabilidad financiera de [INSERTAR PROYECTO: ej. una nueva explotación de salmónidos en tierra usando tecnología RAS en Galicia / la ampliación de una empresa de dorada en jaulas marinas en el Mediterráneo / la modernización de una planta de depuración de moluscos en las Rías Baixas].

Tarea:
Desarrolla el análisis financiero completo con los siguientes componentes:

1. Modelo de producción y ciclo económico: describe el ciclo completo de producción de la especie objetivo (duración del ciclo, densidades de cultivo, tasa de crecimiento esperada, índice de conversión del alimento, tasa de mortalidad esperada en condiciones normales) y cómo estos parámetros biológicos se traducen en el modelo económico de la explotación.

2. Estructura de inversión inicial: detalla los componentes de la inversión en infraestructura (jaulas, sistemas de alimentación, equipos de monitorización, instalaciones en tierra), equipamiento tecnológico (sensores IoT, software de gestión, sistemas de filtración), permisos y licencias, y capital circulante para el primer ciclo de producción antes de las primeras ventas.

3. Modelo de costes operativos por tonelada producida: construye el desglose de costes operativos unitarios (coste de alevines, pienso y FCR, mano de obra directa, energía, medicamentos veterinarios, amortizaciones, seguros marítimos, transporte y comercialización) y analiza qué palancas tienen mayor impacto en el coste por kilogramo producido.

4. Modelo de ingresos y precio de referencia: analiza la formación del precio de la especie en el mercado (precio de lonja, precio para distribuidor HORECA, precio en tienda y online), la estacionalidad de los precios y cómo la escala de producción y la estrategia comercial afectan al precio medio realizado.

5. Análisis de riesgos financieros específicos de la acuicultura: evalúa los riesgos principales que pueden impactar el modelo financiero (episodio de enfermedad con mortalidad masiva, evento climático extremo que dañe las instalaciones, caída del precio de mercado por sobreoferta, cambio regulatorio en concesiones de dominio público marítimo) y cuantifica el impacto financiero de cada escenario adverso.

6. Mapa de subvenciones FEAMPA y autonómicas: describe las principales líneas de financiación pública disponibles para la acuicultura en España (Fondo Europeo Marítimo de Pesca y Acuicultura, programas autonómicos de modernización de la acuicultura, líneas de financiación del ICO y ENISA para empresas del sector primario), con los criterios de elegibilidad y el impacto en el TIR y el VAN del proyecto.

7. Dashboard de seguimiento financiero de la explotación acuícola: define los indicadores financieros y operativos que el gerente de la explotación debe monitorizar mensualmente para detectar desviaciones respecto al plan de negocio (coste de pienso por kilogramo de ganancia, precio medio de venta, margen por tonelada, deuda sobre EBITDA, días de stock valorado a coste de producción).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Viabilidad financiera de proyectos de acuicultura',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y regulatorio del sector pesquero y acuícola con IA',
                'description'      => 'Analiza la normativa europea y española aplicable a la pesca extractiva, la acuicultura y la comercialización de productos pesqueros, incluyendo el impacto de la regulación de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho pesquero y regulación del sector marítimo, con experiencia asesorando a empresas armadoras, organizaciones de productores, empresas de acuicultura y empresas de comercialización de productos del mar en el cumplimiento del marco normativo europeo y español.

Contexto del proyecto:
Una empresa del sector pesquero o acuícola necesita revisar su marco de cumplimiento legal para operar en España y, potencialmente, exportar a mercados de la UE y terceros países. Las actividades incluyen: captura o producción de especies marinas o continentales, primera venta en lonja o venta directa, procesamiento y transformación, y comercialización con trazabilidad certificada.

Tarea:
Elabora un análisis jurídico completo con los siguientes apartados:

1. Marco regulatorio de la pesca y la acuicultura en la UE: describe los pilares de la Política Pesquera Común (PPC), las principales regulaciones europeas aplicables (Reglamento de Control de la Pesca, Reglamento de la Organización Común de Mercados en el sector de los productos pesqueros y de la acuicultura) y cómo se trasladan al derecho español.

2. Sistema de cuotas de pesca y gestión de acceso al recurso: explica el sistema de cuotas de capturas por especie, la asignación de posibilidades de pesca entre los estados miembros, el funcionamiento de las licencias pesqueras en España y las implicaciones legales del traspaso de licencias y cuotas entre empresas.

3. Trazabilidad obligatoria de productos pesqueros: detalla los requisitos del Reglamento europeo de etiquetado y trazabilidad de productos pesqueros (denominación comercial y científica, zona de captura o país de producción, método de producción, información del operador), las sanciones por incumplimiento y cómo la tecnología blockchain puede facilitar el cumplimiento de estos requisitos.

4. Requisitos de sanidad y seguridad alimentaria para productos del mar: describe las principales normas de higiene aplicables a la producción, transformación y distribución de productos pesqueros (Reglamento CE 853/2004, APPCC, requisitos de temperatura en la cadena de frío), los controles oficiales y el papel de las cofradías de pescadores y las lonjas en el sistema de control sanitario.

5. Uso de IA y automatización en el sector pesquero: analiza las implicaciones legales del uso de sistemas de inteligencia artificial en la gestión de explotaciones acuícolas (sistemas de alimentación automática basados en IA, cámaras de detección de enfermedades, plataformas de predicción de cuotas y precios), incluyendo la clasificación de riesgo bajo el AI Act europeo y los requisitos aplicables.

6. Régimen de concesiones en dominio público marítimo-terrestre: describe el procedimiento de obtención de concesiones y autorizaciones en el dominio público marítimo-terrestre (DPMT) para instalaciones de acuicultura marina en España, los plazos habituales, las condiciones de renovación y los riesgos jurídicos asociados a las concesiones temporales.

7. Exportación de productos pesqueros a terceros países: describe los requisitos sanitarios, documentales y de certificación para exportar productos pesqueros desde España a los mercados más relevantes para el sector (Estados Unidos, Japón, China, mercados del norte de Europa), incluyendo los acuerdos sanitarios bilaterales y los requisitos de certificación de origen.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Cumplimiento legal en el sector pesquero y acuícola',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en plataformas de comercio pesquero online con IA',
                'description'      => 'Diseña procesos de soporte y experiencia de cliente para marketplaces y plataformas B2B y B2C de venta de productos del mar frescos y congelados.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de Customer Experience especializado en plataformas de e-commerce de alimentos perecederos, con experiencia específica en el sector pesquero. Conoces los desafíos únicos de la venta online de productos del mar: la altísima perecedibilidad que hace que cualquier retraso logístico sea crítico, la variabilidad natural del producto (el peso y la calidad pueden variar respecto a lo esperado), las altas expectativas del consumidor de pescado fresco en cuanto a calidad y frescura, y la dificultad de gestionar devoluciones de productos alimenticios perecederos.

Contexto del proyecto:
Gestiono el equipo de Customer Support de [INSERTAR PLATAFORMA: ej. un marketplace B2C de pescado fresco y marisco entregado en 24 horas / una plataforma B2B de compra de producto pesquero para restaurantes y hostelería / una lonja online de primera venta que conecta barcos con compradores en tiempo real].

Tarea:
Diseña el sistema de soporte y experiencia de cliente completo con los siguientes componentes:

1. Mapa de momentos críticos de la experiencia del cliente pesquero: identifica los momentos del customer journey donde la experiencia puede romperse de forma crítica y con mayor impacto en la retención (retraso en la entrega que afecta al servicio del restaurante, producto recibido con temperatura fuera de rango, peso o talla diferente a lo esperado, especie incorrecta, disponibilidad de la especie pedida dependiente de la captura del día).

2. Protocolo de gestión de incidencias de calidad de producto: dado que el producto pesquero perecedero no se puede devolver físicamente de forma eficiente, diseña el protocolo de resolución de incidencias de calidad (foto como evidencia, criterios de compensación, velocidad de respuesta requerida) que sea económicamente sostenible para la empresa y percibido como justo por el cliente.

3. Comunicación proactiva sobre disponibilidad y sustituciones: en el sector pesquero, la disponibilidad de producto depende de las capturas del día. Diseña el sistema de comunicación proactiva al cliente cuando el producto pedido no está disponible, incluyendo las sustituciones recomendadas y el protocolo de confirmación antes del envío.

4. Soporte multicanal para perfiles muy distintos: un marketplace pesquero puede tener clientes que van desde un consumidor particular de 65 años que compra merluza por teléfono hasta el jefe de compras de una cadena de restaurantes que gestiona pedidos por API. Define el sistema de soporte multicanal (teléfono, WhatsApp, email, chat en web, API para B2B) con los SLA y el nivel de personalización adecuado para cada perfil.

5. Gestión de las expectativas sobre variabilidad natural del producto: el pescado fresco tiene variabilidad natural en peso, talla y aspecto que puede generar insatisfacción del cliente si no se gestiona desde el principio. Diseña la estrategia de comunicación en el proceso de compra y en el soporte para educar al cliente sobre esta variabilidad sin que afecte a la percepción de calidad de la marca.

6. Programa de fidelización para compradores frecuentes de pescado: diseña un programa de fidelización adaptado al comportamiento de compra de productos del mar (compra frecuente pero con alta variabilidad estacional, sensibilidad al precio en especies de consumo habitual pero disposición a pagar más por calidad premium) que incentive la repetición de compra y el aumento del ticket medio.

7. Métricas de soporte para e-commerce de perecederos: define los KPI de soporte específicos para una plataforma de venta online de productos del mar, donde métricas estándar como el tiempo de resolución se vuelven menos relevantes que indicadores como la tasa de incidencias por pedido, el coste de compensación por pérdida de calidad, o el NPS diferenciado por temperatura de entrega del producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Customer experience en e-commerce de productos del mar',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance para modernización de empresas pesqueras con IA',
                'description'      => 'Desarrolla una metodología de consultoría para ayudar a empresas pesqueras y acuícolas a modernizar sus procesos de gestión, digitalización y comercialización con apoyo de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor freelance especializado en la transformación digital y la modernización de empresas del sector pesquero y acuícola. Tu perfil combina conocimiento técnico del sector (entiendes los procesos de producción, la normativa, los mercados de primera venta y la logística del producto fresco) con experiencia en gestión empresarial, digitalización y uso de herramientas de inteligencia artificial para mejorar la eficiencia operativa y la competitividad de estas empresas, que en su mayoría son pymes familiares con escasa digitalización.

Contexto del proyecto:
Quiero estructurar mi oferta de consultoría freelance para el sector pesquero y acuícola. Mi experiencia incluye [INSERTAR EXPERIENCIA: ej. haber trabajado diez años en una empresa de acuicultura como director de producción / haber sido técnico de la administración pesquera y conocer la normativa en profundidad / haber consultado para cooperativas del sector agroalimentario]. Quiero llegar a empresas del sector que necesitan modernizarse pero no tienen ni los recursos ni el conocimiento para hacerlo solas.

Tarea:
Ayúdame a construir mi práctica de consultoría especializada con los siguientes componentes:

1. Diagnóstico de la madurez digital del sector pesquero: describe el estado de digitalización típico de las empresas del sector (desde las más rezagadas —gestión en papel, sin trazabilidad digital, contabilidad básica— hasta las más avanzadas —monitorización automatizada, trazabilidad blockchain, venta online—) y cómo posicionar mi servicio en cada segmento de madurez.

2. Catálogo de servicios adaptado al sector pesquero: define cinco servicios de consultoría específicos para empresas del sector pesquero y acuícola (con nombre, descripción, entregables, duración y precio orientativo): diagnóstico de modernización, diseño del plan de digitalización, selección e implementación de software de gestión, desarrollo de nuevos canales de comercialización, y preparación para certificaciones de sostenibilidad.

3. Metodología de diagnóstico rápido para la empresa pesquera: diseña el proceso de diagnóstico de dos a tres semanas que sirva de proyecto de entrada y permita identificar las áreas de mejora con mayor impacto económico, usando una metodología de entrevistas con el gerente y el equipo de producción, análisis de datos básicos de la empresa (costes, precios de venta, márgenes) y observación directa del proceso productivo.

4. Cómo usar IA en la práctica de consultoría pesquera: describe concretamente cómo usarías herramientas de IA (Claude u otras) para mejorar la calidad y velocidad de tus entregables (análisis de precios de lonja para una explotación acuícola, redacción de políticas de calidad y procedimientos APPCC, análisis de viabilidad de nuevos canales de comercialización, preparación de solicitudes de subvención FEAMPA), siendo específico sobre qué aporta la IA y qué requiere tu conocimiento experto del sector.

5. Construcción de autoridad en el sector pesquero: el sector pesquero es muy cerrado y la confianza se construye por reputación y relaciones. Define la estrategia de visibilidad para un consultor nuevo en el sector, incluyendo presencia en ferias (Conxemar, Eurofish Forum, AquaFarm), publicación en medios especializados (Industrias Pesqueras, Mar, Pesca2), colaboración con cofradías y organizaciones de productores, y cómo usar casos de éxito de los primeros clientes como palanca de captación.

6. Gestión de la relación con el cliente pesquero: el empresario pesquero es pragmático, desconfía de los consultores que no conocen el sector y valora los resultados económicos concretos por encima de los marcos conceptuales. Define cómo estructurar la relación con el cliente (reuniones de seguimiento, reporting de resultados, gestión de expectativas cuando los cambios son más lentos de lo previsto) para construir confianza y maximizar las posibilidades de recomendación.

7. Plan de primeros doce meses: diseña el plan de arranque del negocio de consultoría en el sector pesquero, desde la identificación de los primeros tres clientes piloto hasta el objetivo de facturación sostenible a doce meses, con los hitos clave, las acciones prioritarias de cada trimestre y las principales palancas de crecimiento del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Consultoría freelance para modernización del sector pesquero',
                'vote_score'       => 38,
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
