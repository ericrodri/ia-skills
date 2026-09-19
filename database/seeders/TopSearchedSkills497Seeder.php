<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills497Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para marketing agrícola y agrotech',
                'description'      => 'Diseña campañas de marketing para productos agrícolas, comunica la trazabilidad alimentaria y posiciona soluciones agrotech usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing agroalimentario con experiencia en comunicar propuestas de valor complejas del sector agrícola a audiencias técnicas (agricultores, cooperativas, distribuidores) y audiencias de consumo final (supermercados, consumidores conscientes).

Necesito que me ayudes a construir la estrategia de marketing para mi empresa/producto del sector agrícola. El contexto: [describe el producto o servicio, si es agrotech (software, sensores, drones) o producto alimentario, el cliente objetivo y el principal diferenciador competitivo].

**Posicionamiento y propuesta de valor para el sector agrícola**

El marketing agrícola tiene particularidades: los agricultores son escépticos ante las promesas de tecnología, valoran la prueba práctica sobre la publicidad, y toman decisiones en ciclos lentos vinculados a las temporadas de cultivo. Teniendo esto en cuenta:
- Define la propuesta de valor en una frase que un agricultor de cincuenta años entendería sin conocimientos tecnológicos
- Identifica los tres principales miedos o fricciones de tu cliente objetivo ante la adopción de tu producto
- Diseña los mensajes clave para superar cada frieción con evidencia: datos de ROI, casos de éxito de agricultores similares, garantías de soporte
- Propón el positioning statement completo: para [segmento de cliente], [nombre del producto] es el [categoría] que [beneficio principal] a diferencia de [alternativa actual] porque [razón de peso]

**Estrategia de contenido para agrotech**

El contenido educativo es el canal de marketing más efectivo en el sector agrícola. Diseña:
- Un plan de contenido semestral organizado por temporada de cultivo: qué publicar antes de la siembra, durante el cultivo y en la cosecha
- Los cinco formatos de contenido con mayor tracción en el sector: fichas técnicas de producto, casos de éxito de agricultores, vídeos de campo demostrando resultados, guías de buenas prácticas y webinars técnicos
- La estrategia de distribución: WhatsApp de cooperativas, ferias agrícolas, YouTube agrario, revistas del sector
- Cómo comunicar la trazabilidad alimentaria como argumento de venta tanto al agricultor como al consumidor final

**Marketing de trazabilidad y sostenibilidad**

La trazabilidad alimentaria es una ventaja competitiva creciente. Propón:
- Cómo comunicar visualmente la cadena de trazabilidad de un producto (desde el campo hasta el plato) en packaging, web y redes sociales
- El argumentario de ventas para distribuidores y supermercados: cómo la trazabilidad reduce su riesgo reputacional y cumple con regulaciones europeas
- Una campaña de marketing digital orientada al consumidor final que convierta la trazabilidad en un atributo de compra emocional (confianza, salud, apoyo al agricultor local)
- Cómo medir el impacto de la comunicación de trazabilidad en el precio de venta y la fidelidad del consumidor

**Estrategia de ferias y presencia en el sector**

Las ferias agrícolas (Fruit Attraction, Agrilevante, FIMA) son el canal de ventas más importante. Diseña:
- El pitch de stand para captar la atención de un agricultor en treinta segundos
- Los materiales de marketing para feria: ficha de producto, caso de éxito, demo en directo y propuesta de prueba piloto
- El proceso de seguimiento post-feria: cómo convertir los contactos recogidos en el stand en clientes en los siguientes noventa días

Cierra con un plan de marketing de doce meses adaptado al calendario agrícola, con los momentos clave de comunicación antes, durante y después de cada campaña de cultivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear estrategia de marketing para productos agrícolas y soluciones agrotech',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para desarrollo de software agrícola y agrotech',
                'description'      => 'Desarrolla plataformas de agricultura de precisión, sistemas de predicción de cosechas y APIs de datos agronómicos usando IA como asistente técnico.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas agrotech. Tu experiencia abarca el diseño de sistemas de agricultura de precisión, la integración de datos de sensores IoT de campo, el procesamiento de imágenes satelitales y la construcción de modelos predictivos aplicados a la gestión agrícola.

Necesito que me ayudes a diseñar y desarrollar una plataforma de software para el sector agrícola. El contexto: [describe el tipo de plataforma, el usuario final —agricultor, agrónomo, cooperativa—, los datos que manejará y el stack tecnológico preferido].

**Arquitectura de una plataforma de agricultura de precisión**

Diseña la arquitectura técnica de una plataforma agrotech escalable:
- Capa de ingesta de datos: cómo recibir datos de estaciones meteorológicas, sensores de humedad del suelo, drones de imagen NDVI y satélites (Sentinel-2, Landsat). Define los formatos (GeoJSON, NetCDF, CSV) y los protocolos de comunicación (MQTT para IoT, REST/webhook para APIs externas)
- Capa de procesamiento: pipeline de transformación de datos agronómicos (normalización, interpolación espacial, detección de anomalías) usando Python con GeoPandas, Rasterio y Scikit-learn
- Capa de almacenamiento: esquema de base de datos para parcelas, cultivos, sensores, lecturas temporales y predicciones. Evalúa PostgreSQL con PostGIS vs. TimescaleDB para series temporales de sensores
- Capa de presentación: mapa interactivo de parcelas con capas de datos superpuestas, usando Leaflet.js o Mapbox GL JS

**Modelo predictivo de cosechas**

Construye un pipeline de predicción de rendimiento de cosecha:
- Variables de entrada: datos históricos de rendimiento por parcela, series temporales de temperatura, precipitación, humedad del suelo, índice NDVI durante el ciclo del cultivo, tipo de suelo y prácticas de fertilización
- Modelo recomendado: Random Forest o XGBoost para regresión de rendimiento, con validación cruzada temporal (no aleatoria, para evitar data leakage)
- Métricas de evaluación: MAE, RMSE y el porcentaje de error sobre el rendimiento medio histórico
- Cómo presentar la predicción al agricultor: rango de rendimiento esperado (percentil 25-75), comparativa con el año anterior y recomendaciones accionables basadas en la predicción

**Sistema de detección de plagas y enfermedades**

Diseña un sistema de detección temprana usando visión artificial:
- Pipeline de clasificación de imágenes de campo: captura con smartphone o dron, preprocesamiento, modelo de clasificación (ResNet-50 fine-tuned sobre dataset de enfermedades del cultivo específico) e inferencia en tiempo real o batch
- Cómo construir el dataset de entrenamiento: fuentes de datos abiertas (PlantVillage, iNaturalist), protocolo de anotación y data augmentation para equilibrar clases de enfermedades poco frecuentes
- Sistema de alertas: cuándo notificar al agricultor, cómo priorizar las alertas por severidad y cómo integrar con el sistema de gestión de tratamientos

**API de datos agronómicos para terceros**

Diseña una API REST que terceros (seguros agrarios, traders, cooperativas) puedan consumir:
- Endpoints principales: GET /parcelas/{id}/ndvi-histórico, GET /cultivos/{id}/predicción-cosecha, POST /alertas/plagas
- Autenticación: OAuth 2.0 con scopes por tipo de dato (datos públicos vs. datos privados del agricultor)
- Rate limiting y modelo de precios: cómo estructurar planes de acceso a la API según el volumen de llamadas y el tipo de dato

Cierra con un roadmap técnico de doce meses: MVP en el primer trimestre, integración de datos satelitales en el segundo, modelos predictivos en el tercero y apertura de API a terceros en el cuarto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar plataformas de agricultura de precisión con modelos predictivos de cosecha',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseño de interfaces agrotech',
                'description'      => 'Diseña interfaces usables para agricultores, mapas de parcelas interactivos y dashboards de gestión agrícola que funcionen en campo con conectividad limitada.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX/UI especializado en interfaces para usuarios de sectores primarios. Tu experiencia abarca el diseño de aplicaciones agrícolas usadas en campo, en condiciones de luz solar intensa, con guantes, en dispositivos Android de gama media y con conectividad 3G o sin conexión.

Necesito que me ayudes a diseñar la experiencia de usuario de una aplicación agrotech. El contexto: [describe el usuario principal —agricultor, técnico agrónomo, gestor de cooperativa—, las tareas principales que realizará en campo y el dispositivo principal que usará].

**Principios de diseño para usuarios agrícolas**

El agricultor tiene restricciones de uso muy específicas que determinan las decisiones de diseño:
- Diseño para uso en exterior: alto contraste, tamaño de fuente mínimo de 16px, paleta de colores visible bajo luz solar directa (evita los colores muy saturados y el fondo blanco puro)
- Diseño para uso con guantes: targets táctiles mínimos de 48x48px, espaciado generoso entre elementos interactivos, gestos simples (sin pinch-to-zoom en acciones críticas)
- Diseño para conectividad limitada: arquitectura offline-first con sincronización en segundo plano, indicadores claros del estado de conexión y del último dato sincronizado
- Diseño para usuarios con baja alfabetización digital: iconografía descriptiva, flujos de máximo tres pasos para las tareas más frecuentes, confirmación visual de cada acción completada

**Diseño del mapa de parcelas**

El mapa de parcelas es el elemento central de cualquier app agrícola. Propón:
- La estructura de capas de información: capa base (satélite/OSM), capa de parcelas del agricultor, capas de datos agronómicos (NDVI, humedad, alertas de plagas) con activación individual
- Los controles del mapa optimizados para campo: zoom con botones en lugar de gestos, selector de fecha para comparar el estado de la parcela en diferentes momentos, modo offline con tiles precargados
- El panel de detalle de parcela al seleccionarla: qué información mostrar en los primeros tres segundos (cultivo actual, fase fenológica, última acción registrada, alertas activas)
- Cómo representar visualmente los datos de NDVI: escala de color, leyenda simplificada y traducción del valor técnico a una recomendación accionable ("la zona norte de la parcela necesita riego")

**Dashboard de gestión agrícola**

Diseña el dashboard principal de la aplicación para el gestor de explotación:
- La jerarquía de información: qué datos son urgentes (alertas de plagas, necesidades de riego hoy), qué datos son importantes (predicción de cosecha, estado de cultivos) y qué datos son de consulta ocasional (histórico de tratamientos, análisis de suelo)
- El diseño del widget de alerta: cómo comunicar una alerta de plaga de forma que el agricultor entienda la urgencia, la parcela afectada y la acción recomendada sin abrir ningún menú adicional
- El resumen de la explotación en una pantalla: hectáreas totales, cultivos activos, próximas tareas programadas y comparativa de rendimiento respecto al año anterior

**Sistema de registro de operaciones en campo**

El agricultor necesita registrar tratamientos, riegos y observaciones sin interrumpir su trabajo:
- Diseña el flujo de registro de una operación de campo: tipo de operación (riego, tratamiento fitosanitario, cosecha, observación), parcela afectada, fecha, producto aplicado y dosis
- Propón un sistema de voz-a-texto para el registro de observaciones, con confirmación visual del texto reconocido antes de guardar
- Cómo diseñar formularios con valores por defecto inteligentes basados en el historial del agricultor para reducir el tiempo de registro

Cierra con un plan de investigación de usuarios para validar el diseño: qué tipo de pruebas de usabilidad realizar en campo, cómo reclutar agricultores participantes y qué métricas usar para medir la usabilidad de la aplicación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar interfaces usables para aplicaciones agrícolas en condiciones de campo',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para ventas de tecnología agrícola',
                'description'      => 'Construye argumentarios de venta para soluciones agrotech, supera las objeciones del agricultor tradicional y diseña demostraciones de producto efectivas en campo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con diez años de experiencia en ventas de tecnología al sector agrícola. Tu especialidad es vender soluciones innovadoras (drones, sensores, software de gestión, plataformas de trazabilidad) a agricultores y cooperativas que históricamente son resistentes al cambio tecnológico.

Necesito que me ayudes a construir el sistema de ventas para mi solución agrotech. El contexto: [describe el producto, el precio, el perfil del agricultor objetivo —tamaño de explotación, cultivo, comunidad autónoma— y el principal obstáculo de ventas que encuentras].

**El perfil del comprador agrícola**

El agricultor es un comprador particular que requiere un enfoque de ventas adaptado:
- Perfil psicológico: desconfianza ante las promesas de tecnología, valor de la prueba práctica y el boca a boca, respeto por quién conoce el campo de verdad, sensibilidad al precio y al ROI tangible
- Ciclo de compra: vinculado al ciclo agrícola. Las decisiones de inversión se toman en invierno, antes de la siembra. Las demos en campo deben realizarse durante el cultivo activo
- Red de influencia: el técnico de la cooperativa, el veterinario de zona y el agricultor referente del pueblo tienen más influencia que cualquier campaña publicitaria
- Cómo adaptar tu lenguaje de ventas: usa términos agronómicos correctos, habla de costes y rendimientos por hectárea, no de funcionalidades de software

**Argumentario de ventas basado en ROI**

El agricultor solo compra tecnología si ve el retorno claro. Construye el argumentario:
- Calcula el ROI de tu producto en términos que el agricultor entiende: reducción de coste por hectárea, aumento de rendimiento en kilos, ahorro de agua o insumos, reducción de pérdidas por plaga
- Diseña tres casos de éxito con agricultores reales: nombre de la explotación (o iniciales), cultivo, problema que tenía, solución implementada y resultado medido en euros o kilos
- El argumento de la temporada perdida: "cada temporada sin [producto] le cuesta a usted [X euros] en [problema concreto]"
- Cómo comparar el precio de tu solución con el coste de un problema que ya sufre el agricultor

**Manejo de objeciones del agricultor**

Las objeciones en ventas agrotech son predecibles. Prepara los scripts de respuesta:
- "Ya lo hago a ojo y me va bien": cómo presentar datos de que la gestión basada en datos mejora el rendimiento medio en un porcentaje específico
- "Es muy caro": cómo reencuadrar el precio como inversión con payback en X temporadas
- "No entiendo la tecnología": cómo proponer un periodo de prueba con soporte total incluido
- "Necesito consultarlo con mi hijo/yerno": cómo involucrar al influencer técnico de la familia en el proceso de venta
- "El año que viene lo veo": cómo crear urgencia legítima vinculada al calendario agrícola

**Demostración de producto en campo**

La demo en campo es el cierre de ventas más efectivo en agrotech. Diseña:
- El protocolo de la demo de campo: preparación previa (qué saber de la parcela del agricultor), guión de la visita (máximo cuarenta y cinco minutos), los tres momentos "wow" que quieres que el agricultor experimente
- Cómo organizar demostraciones colectivas con la cooperativa: invitación, logística, presentación del caso de éxito y cierre grupal con oferta de adopción temprana
- El seguimiento post-demo: correo a las veinticuatro horas con el informe de la visita, la propuesta económica y el caso de éxito más relevante para ese perfil de agricultor

Cierra con el plan de ventas para la próxima temporada: objetivos por zona geográfica, número de demos planificadas, canal de distribución (venta directa vs. a través de cooperativas) y previsión de cierre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Vender tecnología agrícola a agricultores con argumentarios de ROI y demos en campo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de producto en agrotech',
                'description'      => 'Define la hoja de ruta de tu plataforma agrícola, prioriza features por impacto en el agricultor y diseña el MVP de una solución de agricultura de precisión.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en startups agrotech y en la digitalización del sector primario. Tu especialidad es construir productos que resuelvan problemas reales del agricultor, navegando la complejidad de un sector con usuarios poco digitalizados, ciclos de adopción lentos y estacionalidad marcada.

Necesito que me ayudes a definir la estrategia de producto para mi plataforma agrotech. El contexto: [describe el tipo de plataforma, el usuario principal, las funcionalidades actuales o previstas y el problema central que quieres resolver].

**Descubrimiento del problema del agricultor**

Antes de construir, necesitas entender profundamente al usuario. Diseña el proceso de investigación:
- Guía de entrevista con agricultores: las quince preguntas abiertas que debes hacer para entender sus flujos de trabajo actuales, sus frustraciones con las herramientas existentes y su disposición a pagar por una solución
- Cómo organizar una jornada de campo con cinco agricultores: logística, protocolo de observación, qué observar mientras trabajan (no solo qué dicen)
- Cómo sintetizar los hallazgos en un mapa de empatía y en un job-to-be-done principal: "cuando [situación], quiero [motivación] para poder [resultado esperado]"
- Las señales de un problema real vs. un problema que el agricultor menciona pero no pagaría por resolver

**Definición del MVP de agricultura de precisión**

El MVP de una plataforma agrotech debe ser radical en su simplicidad. Propón:
- El conjunto mínimo de funcionalidades que permiten al agricultor completar su tarea principal sin formación previa
- La decisión de build vs. buy para las funcionalidades de datos (¿integrar API de satélite comercial o procesar imágenes propias?, ¿construir el mapa o usar Leaflet sobre OSM?)
- El criterio de éxito del MVP: qué comportamiento del usuario indica que ha encontrado valor (no solo que se ha registrado, sino que ha completado su primera temporada activa en la plataforma)
- El plan de piloto con los primeros diez agricultores: selección de perfiles, protocolo de onboarding, soporte durante la primera temporada y cómo recoger feedback estructurado

**Roadmap de producto adaptado a la estacionalidad**

La agricultura tiene un calendario que determina cuándo los agricultores prueban nuevas herramientas y cuándo no. Diseña:
- El roadmap anual alineado con el ciclo agrícola: qué funcionalidades lanzar antes de la siembra, cuáles durante el cultivo y cuáles durante la cosecha
- Cómo gestionar el "tiempo muerto" de invierno como oportunidad de onboarding y formación, no de adopción de features
- El proceso de priorización de features considerando que el feedback del agricultor llega con el retraso de la temporada

**Métricas de producto para agrotech**

Las métricas de retención en agrotech son muy diferentes a las de SaaS tradicional. Define:
- La métrica norte de tu plataforma agrícola (no puede ser DAU; considera "hectáreas gestionadas activamente" o "decisiones de tratamiento tomadas basadas en datos de la plataforma")
- Cómo medir la retención considerando que el uso del producto es estacional: la retención anual es la métrica correcta, no la mensual
- Las señales de abandono específicas de agrotech: ¿qué comportamiento predice que el agricultor no renovará el próximo año?

Cierra con el plan de lanzamiento de la plataforma en la próxima temporada: hitos, número de agricultores piloto, criterio de go/no-go para el lanzamiento general y la estrategia de expansión a nuevas zonas geográficas o cultivos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir MVP y roadmap de plataforma agrotech adaptados al ciclo agrícola',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para gestión de personas en el sector agrícola',
                'description'      => 'Gestiona equipos de trabajo estacionales, diseña programas de formación para operarios agrícolas y optimiza la planificación de recursos humanos en la explotación.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos especializado en el sector agrícola y agroalimentario. Tu experiencia cubre la gestión de trabajadores fijos y temporeros, el cumplimiento de la normativa laboral del campo, y el diseño de programas de formación para perfiles operativos con baja cualificación formal.

Necesito que me ayudes a optimizar la gestión de personas en mi explotación agrícola o empresa agroalimentaria. El contexto: [describe el tamaño de la explotación, el tipo de cultivo, el número de trabajadores fijos y temporales, y el principal reto de RRHH que enfrenta: reclutamiento, retención, formación o cumplimiento normativo].

**Planificación de la mano de obra estacional**

La gestión de personal en el sector agrícola tiene la complejidad de la estacionalidad. Diseña:
- El calendario de necesidades de personal por semana durante todo el año, basado en las fases del cultivo: preparación del terreno, siembra, tratamientos, recolección y post-cosecha
- Cómo calcular el número exacto de operarios necesarios por hectárea y por tipo de tarea (manual, mecanizada, supervisión)
- El plan de contratación de temporeros: cuándo publicar la oferta, qué perfiles buscar, qué proceso de selección mínimo realizar y cómo gestionar los contratos de temporada
- Las fuentes de reclutamiento específicas del sector: ETTs agrícolas, comunidades de inmigrantes de temporada, convenios con municipios de la zona

**Formación y seguridad en el trabajo agrícola**

La formación en el sector agrícola tiene particularidades: los trabajadores hablan distintos idiomas, la rotación es alta y las tareas cambian con la temporada. Diseña:
- Un plan de formación de acogida de cuatro horas para un trabajador nuevo: seguridad en el manejo de maquinaria, uso de EPIs, normas de higiene alimentaria y primeros auxilios básicos
- Materiales de formación visuales y multilingüe: cómo crear fichas de instrucciones con iconografía que un trabajador que no habla español pueda entender
- El protocolo de prevención de riesgos laborales específico para el trabajo en campo: golpe de calor, exposición a fitosanitarios, manejo de maquinaria y riesgo eléctrico en invernaderos
- Cómo registrar digitalmente las formaciones realizadas para cumplir con las auditorías de certificaciones (GlobalGAP, BRC, IFS)

**Gestión del rendimiento de equipos agrícolas**

Medir la productividad en el campo sin desmotivar al equipo es un arte. Propón:
- Indicadores de rendimiento por tipo de tarea: kilos recolectados por hora y trabajador, metros cuadrados preparados por jornada, porcentaje de producto rechazado por mala manipulación
- Cómo comunicar los objetivos de rendimiento a un equipo multicultural sin generar presión excesiva
- Un sistema de reconocimiento sencillo para trabajadores de alto rendimiento que funcione en el contexto de un equipo de temporada

**Cumplimiento laboral y documental**

El sector agrícola está sujeto a inspecciones frecuentes. Diseña:
- El checklist documental que debe estar preparado ante una inspección de trabajo: contratos, registros de jornada, nóminas, formaciones de seguridad y seguros sociales al día
- Cómo implementar el registro de jornada digital en campo para trabajadores sin smartphone propio
- Los derechos específicos de los trabajadores temporeros que debes garantizar: alojamiento digno en caso de desplazamiento, transporte, descansos y acceso a agua potable en campo

Cierra con un plan de mejora de las condiciones laborales que al mismo tiempo reduzca la rotación y mejore la productividad: las tres acciones de mayor impacto que puedes implementar antes de la próxima temporada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar equipos estacionales y diseñar formación para trabajadores agrícolas',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero de explotaciones agrícolas',
                'description'      => 'Construye modelos financieros para explotaciones agrícolas, analiza la rentabilidad por cultivo y optimiza la gestión de las subvenciones de la PAC con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero especializado en el sector primario y en la economía de las explotaciones agrícolas. Tu experiencia cubre la contabilidad analítica por cultivo, la gestión de subvenciones de la Política Agraria Común (PAC), la planificación financiera ante la volatilidad de precios de los commodities y el análisis de inversiones en maquinaria y tecnología agrícola.

Necesito que me ayudes a construir el modelo financiero de mi explotación agrícola. El contexto: [describe el tamaño de la explotación en hectáreas, los cultivos principales, si es en propiedad o arrendada, la situación financiera actual y el principal reto: rentabilidad, liquidez, inversión o subvenciones].

**Contabilidad analítica por cultivo**

La rentabilidad real de una explotación solo se entiende analizando cada cultivo por separado. Diseña:
- El modelo de contabilidad analítica: cómo imputar los costes directos (semillas, fitosanitarios, fertilizantes, riego, mano de obra de recolección) y los costes indirectos (maquinaria, seguros, gestoría, amortizaciones) a cada cultivo y cada parcela
- La cuenta de resultados por cultivo: ingresos por venta (precio x kg x rendimiento por hectárea) menos costes totales, igual al margen de contribución por hectárea
- La comparativa de rentabilidad entre cultivos: cuál tiene el mayor margen por hectárea, cuál tiene el menor riesgo de precio, y cómo optimizar la superficie dedicada a cada uno
- Un simulador de escenarios de precio: ¿qué pasa con el margen de un cultivo si el precio cae un veinte por ciento? ¿Cuál es el precio mínimo de equilibrio?

**Gestión financiera de las ayudas de la PAC**

Las subvenciones de la PAC pueden representar entre el veinte y el cuarenta por ciento de los ingresos de una explotación. Optimiza su gestión:
- El calendario financiero de la PAC: cuándo se solicitan los derechos de pago básico, cuándo llegan los pagos anticipados y cuándo el pago final, y cómo planificar la tesorería en función de estos plazos
- Cómo maximizar el importe recibido: qué condicionalidades y ecorregímenes generan mayor prima por hectárea en mi tipo de explotación
- El impacto financiero de las ayudas agroambientales: cómo comparar el sobrecoste de adoptar prácticas sostenibles con la prima adicional recibida
- Gestión del riesgo de devolución de ayudas: qué controles documentales debes tener para resistir una inspección del FEGA

**Análisis de inversión en tecnología agrícola**

La inversión en maquinaria, riego o tecnología de precisión es la decisión financiera más importante de un agricultor. Diseña:
- El modelo de análisis de inversión agrícola: flujos de caja esperados de la inversión (ahorro en costes, aumento de rendimiento, reducción de pérdidas), VAN (Valor Actual Neto) y TIR (Tasa Interna de Retorno)
- Cómo evaluar la decisión de compra vs. alquiler vs. cooperativa de maquinaria compartida
- El impacto de las ayudas a la modernización agrícola (fondos FEADER, líneas ICO verdes) en la viabilidad financiera de la inversión
- Un modelo de payback para la inversión en riego por goteo o en drones de fumigación: en cuántos años se recupera la inversión con los datos reales de tu explotación

**Gestión de la volatilidad de precios y seguros agrarios**

Los precios de los commodities agrícolas son altamente volátiles. Diseña un sistema de gestión del riesgo financiero:
- Cómo construir un presupuesto conservador usando el precio mínimo histórico de los últimos diez años como referencia
- El catálogo de seguros agrarios disponibles: seguro de cosecha, seguro de ingresos, seguro multirriesgo. Para cada uno analiza el coste de la prima, la cobertura y el umbral de rentabilidad
- Cómo usar contratos forward o acuerdos de precio a futuro con el comprador para reducir la incertidumbre de ingresos

Cierra con el plan financiero anual de la explotación: presupuesto de ingresos y gastos por trimestre, previsión de tesorería mes a mes y los tres indicadores financieros que debes revisar mensualmente para detectar desviaciones a tiempo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir modelo financiero de explotación agrícola y optimizar subvenciones PAC',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para cumplimiento legal en el sector agrícola',
                'description'      => 'Gestiona el marco regulatorio de la actividad agrícola: normativa fitosanitaria, bienestar animal, trazabilidad alimentaria y cumplimiento de la PAC con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho agrario y regulación agroalimentaria con experiencia en asesoría a explotaciones agrícolas, cooperativas y empresas de la cadena alimentaria. Tu conocimiento abarca la normativa europea de la PAC, la legislación fitosanitaria, la normativa de trazabilidad alimentaria y el derecho de aguas.

Necesito que me ayudes a navegar el marco legal de mi actividad agrícola. El contexto: [describe el tipo de explotación, tamaño, cultivos o producción, y el principal problema legal o de cumplimiento que enfrentas].

**Cumplimiento normativo de la Política Agraria Común (PAC)**

La PAC impone condiciones de cumplimiento (condicionalidad) a los beneficiarios de ayudas. Explícame:
- Los Requisitos Legales de Gestión (RLG) que aplican a mi tipo de explotación: normas de agua, suelo, protección de aves y hábitats, bienestar animal si procede, y sanidad vegetal
- Las Buenas Condiciones Agrarias y Medioambientales (BCAM): qué prácticas debo mantener obligatoriamente para no perder las ayudas (cubiertas vegetales, barbechos, rotación de cultivos)
- Las sanciones por incumplimiento: reducción proporcional de las ayudas según la gravedad, extensión e intencionalidad del incumplimiento
- El proceso de inspección de la PAC: cómo se seleccionan las explotaciones, qué documentación piden los inspectores y qué plazo tienes para responder a una notificación de incumplimiento

**Normativa fitosanitaria y uso de plaguicidas**

El uso de productos fitosanitarios está fuertemente regulado. Explica:
- La obligación del carnet de aplicador de fitosanitarios: quién lo necesita, cómo obtenerlo y qué consecuencias tiene aplicar productos sin él
- El Registro de Tratamientos Fitosanitarios: qué información debe contener, durante cuántos años debe conservarse y cuándo puede solicitarlo una inspección
- El listado de productos autorizados: cómo verificar que un producto está autorizado para el cultivo que quiero tratar en la base de datos del MAPA
- Las restricciones de uso cerca de zonas de agua, zonas urbanas y períodos de prohibición de aplicación

**Trazabilidad alimentaria: obligaciones legales**

El Reglamento (CE) 178/2002 impone la trazabilidad a todos los operadores de la cadena alimentaria. Define:
- Las obligaciones de trazabilidad del productor agrícola: qué información debe registrar (origen de semillas, tratamientos aplicados, fecha de cosecha, destino del producto)
- Cómo documentar la trazabilidad de forma que cumpla con la normativa y sea auditable por los compradores (supermercados, exportadores) o por las autoridades sanitarias
- Las sanciones por incumplimiento de la trazabilidad en el marco de una alerta alimentaria
- Las certificaciones voluntarias (GlobalGAP, BRC, IFS) que van más allá de la normativa básica y que algunos compradores exigen

**Derecho de aguas y gestión de recursos hídricos**

El uso del agua para riego está regulado por la Ley de Aguas. Explica:
- Los tipos de concesión de agua: concesión administrativa, aprovechamiento privativo, comunidad de regantes. Cómo saber cuál aplica a mi caso
- El proceso de solicitud de concesión de agua: documentación necesaria, plazo de tramitación y el principio de prioridad por uso (abastecimiento > riego > industria)
- Las infracciones más comunes: extracción sin concesión, superar el volumen concesionado y captación en períodos de restricción por sequía
- Cómo actuar ante un expediente sancionador de la Confederación Hidrográfica: plazos de alegación, documentación probatoria y posibilidad de recurso

Cierra con un checklist de cumplimiento legal anual para la explotación: qué renovar, qué registrar y qué inspecciones pueden ocurrir en cada trimestre del año.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el cumplimiento legal de explotaciones agrícolas: PAC, fitosanitarios y trazabilidad',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para atención al cliente en agrotech',
                'description'      => 'Diseña el soporte técnico para agricultores, crea bases de conocimiento de problemas agronómicos y gestiona incidencias de plataformas de agricultura de precisión.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success especializado en empresas agrotech. Tu experiencia cubre el soporte técnico a agricultores y agrónomos, el diseño de programas de adopción de plataformas de agricultura de precisión y la creación de documentación técnica accesible para usuarios con baja alfabetización digital.

Necesito que me ayudes a construir el sistema de soporte y éxito del cliente para mi plataforma agrotech. El contexto: [describe el tipo de plataforma, el perfil del usuario agricultor, el tamaño del equipo de soporte y el principal tipo de incidencia que recibes].

**Diseño del soporte técnico para agricultores**

El soporte a agricultores tiene particularidades que no se encuentran en otros sectores:
- El agricultor llama cuando tiene un problema urgente en campo, con conectividad limitada y sin tiempo para esperar
- Las incidencias tienen estacionalidad: durante la cosecha el volumen de soporte se multiplica por cinco
- El agricultor no puede describir el problema en términos técnicos de software; describe lo que ve en campo
- El soporte por WhatsApp es el canal preferido por la mayoría de los agricultores españoles

Teniendo esto en cuenta, diseña:
- El flujo de atención de una incidencia crítica en campo: cómo el primer agente de soporte diagnostica el problema con cuatro preguntas clave, escala si es necesario y resuelve en menos de veinte minutos
- Los canales de soporte por orden de preferencia del agricultor y los SLAs para cada uno: WhatsApp (respuesta en dos horas), teléfono (atención inmediata en temporada alta), email (respuesta en veinticuatro horas)
- Cómo preparar el equipo de soporte para la temporada alta: guía de las cincuenta incidencias más frecuentes con la solución paso a paso

**Base de conocimiento agronómica y técnica**

Una buena base de conocimiento reduce el volumen de soporte y empodera al agricultor. Diseña:
- La estructura de la base de conocimiento: sección de primeros pasos, sección de preguntas frecuentes por tipo de cultivo, sección de interpretación de datos (¿qué significa este valor de NDVI?), sección de resolución de problemas técnicos
- El formato de los artículos: texto simple con máximo tres pasos por instrucción, capturas de pantalla de la aplicación en campo, vídeos cortos de menos de dos minutos filmados en campo real
- Cómo crear contenido multilingüe: los artículos más críticos deben existir en castellano, catalán y los idiomas principales de los trabajadores migrantes que usan la plataforma
- Un sistema de feedback en cada artículo: pulgar arriba/abajo y pregunta "¿resolvió tu problema?" para identificar qué artículos necesitan mejora

**Programa de onboarding para nuevos agricultores**

El onboarding en agrotech debe hacerse en campo, no en una oficina. Diseña:
- El protocolo de la visita de onboarding en campo: duración (máximo dos horas), agenda (configuración de la cuenta, carga de parcelas, primera medición o registro), y qué resultado tangible debe tener el agricultor al finalizar
- Los recursos de onboarding en remoto para agricultores que no pueden recibir una visita: vídeos de configuración inicial, checklist de primeros pasos y sesión de grupo por WhatsApp
- Cómo medir el éxito del onboarding: el agricultor ha cargado todas sus parcelas, ha registrado al menos una operación y ha consultado los datos de su cultivo antes del día treinta

**Gestión de incidencias de datos agronómicos**

Las incidencias de datos son las más delicadas en agrotech: si el agricultor toma una decisión equivocada basada en datos incorrectos de la plataforma, las consecuencias son graves. Define:
- El protocolo de gestión de incidencias de datos: cómo confirmar que el error es de la plataforma y no de la fuente externa (satélite, sensor), cómo comunicar la incidencia al agricultor y qué compensación ofrecer si el error ha afectado a su toma de decisiones
- El proceso de validación de datos agronómicos: qué controles automáticos deben existir para detectar valores anómalos antes de que lleguen al agricultor

Cierra con el plan de formación continua del equipo de soporte: cómo mantener al equipo actualizado sobre el ciclo agronómico, los problemas de cada temporada y las nuevas funcionalidades de la plataforma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar soporte técnico y onboarding para agricultores en plataformas agrotech',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para freelancers especializados en el sector agrícola',
                'description'      => 'Construye tu negocio freelance como consultor agronómico, técnico agrotech o copywriter del sector alimentario usando IA para diferenciarte y escalar.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocio especializado en profesionales independientes del sector agrícola y agroalimentario. Tu experiencia cubre a agrónomos freelance, técnicos de drones agrícolas autónomos, consultores de certificación (GlobalGAP, ecológico), copywriters de marcas alimentarias y fotógrafos de producto agrícola.

Necesito que me ayudes a construir un negocio freelance rentable en el sector agrícola o agroalimentario. El contexto: [describe tu especialidad, años de experiencia en el sector, tipo de clientes actuales (agricultores, cooperativas, empresas agrotech, marcas alimentarias) y el mayor obstáculo para crecer].

**Posicionamiento del freelance agrícola**

El sector agrícola valora la especialización extrema. Posicionarte como el mejor en un nicho concreto es más rentable que ser un generalista:
- Define tu nicho con precisión: ¿consultor agronómico de cultivo de almendro en regadío?, ¿técnico de drones para inspección de viñedo en Ribera del Duero?, ¿copywriter de marcas de aceite de oliva virgen extra del segmento premium?
- Construye tu propuesta de valor en una frase: "Ayudo a [tipo de cliente] a [resultado concreto] mediante [tu método específico]"
- Identifica los cinco clientes objetivo más accesibles en tu nicho y cómo llegar a ellos sin intermediarios
- El argumento de por qué contratar a un freelance especializado sale más barato que contratar a una consultoría generalista

**Servicios y packaging para el sector agrícola**

El sector agrícola tiene necesidades muy específicas de servicio. Diseña tu oferta:
- El servicio estrella: el que puedes entregar en menos de una semana, que el cliente repite cada temporada y que tiene el mayor margen
- El servicio de retainer: un acuerdo de asesoría mensual con el agricultor o la cooperativa que te da ingresos recurrentes estables
- El servicio premium: un proyecto de transformación completo (certificación ecológica, implementación de agricultura de precisión, rediseño de marca alimentaria) con un ticket de cinco a diez veces el servicio base
- Cómo empaquetar los tres en una página de servicios clara que el gerente de una cooperativa pueda entender sin conocimientos técnicos

**Captación de clientes en el sector agrícola**

Los canales de captación en el sector agrícola son específicos del nicho. Diseña tu estrategia:
- El canal de los eventos sectoriales: qué ferias y congresos visitar (Fruit Attraction, Agrilevante, Biocultura, Alimentaria), cómo preparar el networking y cómo hacer seguimiento de los contactos
- El canal de las cooperativas: cómo entrar como proveedor de servicios a una cooperativa y usar esa relación para acceder a sus socios agricultores
- El canal del contenido técnico: cómo publicar artículos técnicos en revistas del sector, LinkedIn o YouTube que demuestren tu expertise y atraigan clientes inbound sin publicidad de pago
- El canal de referidos entre profesionales del sector: veterinarios, técnicos de seguros agrarios, asesores de PAC que pueden derivarte clientes de su red

**Gestión del negocio freelance en un sector estacional**

La estacionalidad del sector agrícola exige una planificación financiera especial:
- Cómo construir un modelo de ingresos que compense los meses de baja demanda (invierno) con los picos de demanda (siembra y cosecha)
- El plan de ahorro para los meses de vacas flacas: qué porcentaje de los ingresos de temporada alta debes reservar
- Cómo usar los meses tranquilos para crear activos que generen ingresos pasivos: guías descargables, cursos online para agricultores, plantillas de gestión de parcelas

Cierra con el plan de negocio de tu primer año como freelance agrícola: ingresos objetivo por trimestre, número de clientes necesarios, precio de tus servicios y las tres acciones de captación más importantes que debes ejecutar en los próximos treinta días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir negocio freelance rentable y diferenciado en el sector agrícola y agroalimentario',
                'vote_score'       => 31,
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
