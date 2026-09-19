<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills619Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenidos para empresas AgriTech con IA',
                'description'      => 'Crea campañas de marketing de contenidos orientadas a compradores de tecnología agrícola usando IA para segmentar audiencias y generar mensajes de alto impacto.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de tecnología para el sector agrícola (AgriTech) con más de diez años de experiencia ayudando a empresas a comunicar el valor de soluciones de agricultura de precisión —sensores IoT, imágenes satelitales, software de gestión de cultivos, drones y plataformas de análisis de datos agronómicos— a agricultores, cooperativas y grandes explotaciones.

Contexto del proyecto:
Necesito desarrollar una estrategia completa de contenidos para los próximos tres meses. Mi empresa comercializa [INSERTAR PRODUCTO: ej. software de análisis de suelos basado en IA / drones de pulverización autónoma / plataforma de gestión de riegos por teledetección]. El público objetivo son [INSERTAR AUDIENCIA: ej. agricultores medianos de cultivos de cereales en Castilla / técnicos agrónomos de cooperativas andaluzas / gerentes de explotaciones frutícolas en Murcia].

Objetivo principal:
Generar contenidos que reduzcan la fricción de adopción tecnológica, aborden las objeciones más comunes (coste, curva de aprendizaje, conectividad rural, ROI incierto) y posicionen a mi empresa como aliada del agricultor moderno, no como vendedor de tecnología incomprensible.

Tarea:
Elabora un plan de contenidos para tres meses que incluya:

1. Mapa de audiencias y puntos de dolor: identifica tres perfiles de comprador típico en AgriTech (por tamaño de explotación, nivel de digitalización y motivación principal) y describe qué información busca cada uno antes de tomar una decisión de compra.

2. Calendario editorial mensual: propón ocho piezas de contenido por mes (blog, vídeo corto, caso de éxito, infografía, newsletter, webinar, post en LinkedIn, hilo en X/Twitter), especificando tema, formato, canal de distribución y objetivo de conversión para cada pieza.

3. Mensajes clave por etapa del funnel: para cada etapa (awareness, consideración, decisión) redacta el mensaje central que debe transmitir el contenido, el tono recomendado y el CTA apropiado.

4. SEO agronómico: lista quince palabras clave de cola larga relevantes para el producto (en español) con su intención de búsqueda, dificultad estimada y sugerencia de formato de contenido óptimo.

5. Estrategia de distribución en canales rurales: dado que muchos agricultores no están en LinkedIn pero sí en grupos de WhatsApp, ferias sectoriales y revistas especializadas, propón cómo adaptar y distribuir los contenidos en estos entornos.

6. Métricas de éxito: define cinco KPI específicos para medir el rendimiento de la estrategia a los 30, 60 y 90 días.

7. Plantilla de caso de éxito: redacta una estructura de cuatro párrafos para documentar el caso de un agricultor que ya usa el producto, con datos de ahorro de agua, reducción de fitosanitarios o incremento de rendimiento por hectárea.

Al finalizar, proporciona un resumen ejecutivo de una página que pueda presentarse al equipo comercial para alinear marketing y ventas en torno a esta estrategia de contenidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificación de contenidos B2B para tecnología agrícola',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de plataforma AgriTech con IA y sensores IoT',
                'description'      => 'Diseña la arquitectura técnica de una plataforma de agricultura de precisión que integre sensores IoT, imágenes satelitales y modelos de IA para recomendaciones agronómicas en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software senior especializado en sistemas IoT y plataformas de datos para el sector agrícola. Tienes experiencia en proyectos de agricultura de precisión que combinan sensores de campo, imágenes satelitales (Sentinel-2, Planet), estaciones meteorológicas y modelos de machine learning para generar recomendaciones agronómicas accionables.

Contexto del proyecto:
Debo diseñar la arquitectura técnica de una plataforma AgriTech que permita a agricultores y técnicos agrónomos monitorizar en tiempo real el estado de sus cultivos, recibir alertas tempranas de enfermedades o estrés hídrico y obtener recomendaciones de riego, fertilización y tratamientos fitosanitarios basadas en IA.

Requisitos funcionales clave:
- Ingesta de datos de sensores IoT de campo (humedad de suelo, temperatura, conductividad eléctrica) con conectividad LoRaWAN y 4G/5G
- Procesamiento de imágenes multiespectrales satelitales (NDVI, NDRE, NDWI) con actualización semanal
- Integración con APIs meteorológicas (AEMET, OpenWeatherMap) para predicciones a 7 días
- Motor de recomendaciones basado en modelos ML entrenados por tipo de cultivo y zona geográfica
- Dashboard web y app móvil para agricultores (conectividad intermitente en zonas rurales)
- API REST/GraphQL para integradores y ERPs agrícolas

Tarea:
Diseña la arquitectura completa de la plataforma con los siguientes entregables:

1. Diagrama de componentes: describe en texto estructurado (simulando un diagrama C4 nivel 2) los componentes principales: capa de dispositivos, capa de ingesta (edge computing), capa de procesamiento en nube, capa de IA/ML, capa de API y capa de presentación.

2. Stack tecnológico recomendado: justifica la elección de tecnologías para cada capa (ej. AWS IoT Core o Azure IoT Hub para ingesta, Apache Kafka para streaming, Python/FastAPI para el servicio ML, React Native para la app móvil).

3. Estrategia de conectividad rural: explica cómo manejar la latencia, la pérdida de conexión y la sincronización offline-first en zonas con cobertura limitada.

4. Pipeline de datos satelitales: describe el flujo desde la descarga de imágenes Sentinel-2 hasta el cálculo de índices de vegetación y su almacenamiento en una base de datos geoespacial (PostGIS o similar).

5. Arquitectura del motor de recomendaciones: explica cómo estructurar los modelos ML (clasificación de enfermedades, predicción de estrés hídrico, optimización de dosis de fertilizantes), su ciclo de reentrenamiento con nuevos datos y el sistema de validación por agrónomo antes de publicar recomendaciones.

6. Seguridad y privacidad: dado que los datos de explotación agrícola son sensibles (superficie, producción, localización), define las medidas de cifrado, autenticación y control de acceso por roles.

7. Plan de escalabilidad: describe cómo la plataforma puede crecer de 100 explotaciones piloto a 10.000 clientes sin rediseño arquitectónico.

8. Estimación de costes en la nube: proporciona un rango estimado mensual de infraestructura para 1.000 explotaciones activas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño de arquitectura de plataforma IoT agrícola',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño UX de app móvil para agricultores con IA',
                'description'      => 'Crea un sistema de diseño y flujos UX para una aplicación móvil de agricultura de precisión pensada para usuarios con baja alfabetización digital en entornos rurales.',
                'prompt_content'   => <<<'EOT'
Actúa como diseñador UX especializado en productos digitales para usuarios con baja alfabetización digital, con experiencia en aplicaciones para el sector primario (agricultura, ganadería, pesca). Conoces los patrones de uso en dispositivos móviles de gama media-baja, las limitaciones de conectividad en zonas rurales y la importancia de la iconografía clara cuando el usuario lee con dificultad o consulta la pantalla bajo luz solar directa.

Contexto del proyecto:
Debo diseñar los flujos UX y el sistema de diseño de una aplicación móvil (iOS y Android) para una plataforma de agricultura de precisión. Los usuarios principales son agricultores con edades entre 45 y 65 años, con experiencia limitada en tecnología, que necesitan consultar el estado de su cultivo, recibir alertas de riego o plagas y seguir recomendaciones paso a paso sin necesidad de formación previa.

Características clave de la app:
- Mapa interactivo de la explotación con zonas coloreadas según índice de vegetación
- Panel de alertas con acciones recomendadas priorizadas por urgencia
- Registro de actividades de campo (tratamientos, riegos, cosechas) con entrada por voz
- Chat con asistente IA agronómico para consultas en lenguaje natural
- Modo offline que funciona sin conexión y sincroniza cuando hay red

Tarea:
Diseña la experiencia de usuario completa con los siguientes entregables:

1. Principios de diseño específicos para este contexto: define cinco principios guía (ej. "visibilidad extrema bajo el sol", "acciones en un toque", "lenguaje del campo") y cómo se aplican a cada decisión de diseño.

2. Arquitectura de información: describe la estructura de navegación de la app (máximo tres niveles de profundidad) con las secciones principales y la jerarquía de contenidos en cada pantalla.

3. Flujos de usuario críticos: describe paso a paso (en formato de lista numerada con notas de diseño) los tres flujos más importantes: consultar alerta de plaga y ejecutar la acción recomendada; registrar un tratamiento fitosanitario por voz; consultar el mapa de la explotación e identificar la zona con estrés hídrico.

4. Sistema de iconografía y color: propón un sistema de iconos basado en elementos visuales reconocibles del campo (cultivos, agua, sol, insectos) y un código de color accesible (contraste mínimo WCAG AA) que funcione en pantallas con brillo máximo al aire libre.

5. Componentes de UI para entornos hostiles: define las especificaciones de los componentes principales (botones de al menos 56px de altura, tipografía mínima de 18sp, áreas táctiles amplias para uso con guantes) con justificación ergonómica.

6. Estrategia de onboarding: diseña un proceso de incorporación de cinco pasos que no requiera leer texto largo, usando iconos, animaciones cortas y mensajes de voz opcionales.

7. Microinteracciones de feedback: describe las animaciones y sonidos que confirman al usuario que su acción fue registrada (especialmente importante para registros de campo donde el agricultor no puede volver a mirar la pantalla).

8. Métricas de usabilidad objetivo: define los criterios de éxito para la app (ej. tasa de completado de tarea en primer intento, tiempo medio para ejecutar alerta de riego, NPS de usuarios mayores de 55 años).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'UX design para apps agrícolas con usuarios no digitales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Script de ventas consultivas para soluciones AgriTech con IA',
                'description'      => 'Desarrolla un proceso de venta consultiva y scripts de conversación para comerciales que venden tecnología de agricultura de precisión a explotaciones agrícolas de mediano tamaño.',
                'prompt_content'   => <<<'EOT'
Actúa como director de ventas con experiencia en venta consultiva B2B de tecnología al sector agrícola. Conoces las objeciones típicas de los agricultores ante la digitalización, los ciclos de compra largos del sector primario y cómo conectar el ROI de la tecnología con las preocupaciones reales del agricultor (reducción de costes de insumos, mejora del rendimiento por hectárea, adaptación a cambios regulatorios).

Contexto del proyecto:
Mi empresa vende [INSERTAR SOLUCIÓN: ej. un sistema de sensores de suelo con recomendaciones de riego por IA / una plataforma de gestión de fertilización variable / drones de inspección de cultivos]. El precio medio de contrato es [INSERTAR PRECIO: ej. 3.000-8.000 €/año según tamaño de explotación]. El perfil del comprador es un agricultor o gerente de cooperativa con explotaciones de entre 50 y 500 hectáreas.

Tarea:
Crea un proceso completo de venta consultiva con los siguientes componentes:

1. Perfil del comprador ideal (ICP): define con detalle el perfil del agricultor o decisor que más probabilidad tiene de comprar, incluyendo tamaño de explotación, cultivos principales, nivel de digitalización previo, motivaciones de compra y señales de compra tempranas.

2. Proceso de cualificación MEDDIC adaptado al sector agrícola: adapta el framework MEDDIC (Metrics, Economic Buyer, Decision Criteria, Decision Process, Identify Pain, Champion) al contexto de una venta AgriTech, con preguntas de cualificación específicas para cada dimensión.

3. Script de llamada de prospección en frío (5-7 minutos): redacta un script completo con apertura, gancho de valor específico para el tipo de cultivo del prospecto, dos preguntas de descubrimiento y cierre para segunda reunión.

4. Guía de reunión de descubrimiento (45 minutos): estructura la reunión con objetivos por fase, preguntas de diagnóstico para identificar el punto de dolor principal y técnica de conexión del dolor con el coste económico actual.

5. Manejo de las cinco objeciones más comunes: para cada objeción ("es muy caro", "ya llevo años así y me va bien", "no tengo tiempo de aprender esto", "la conexión en mi finca es mala", "prefiero esperar y ver cómo les va a otros") proporciona la respuesta estructurada con empatía, reencuadre y evidencia.

6. Demostración de producto de alto impacto: diseña una demo de 20 minutos basada en datos reales del prospecto (usando Google Maps de su finca y datos históricos de NDVI si están disponibles) que haga tangible el valor de la solución.

7. Propuesta de valor económica: crea una plantilla de cálculo de ROI simple que el comercial pueda completar con el agricultor durante la reunión, mostrando ahorro estimado en agua, fertilizantes y fitosanitarios versus el coste de la solución.

8. Secuencia de seguimiento post-reunión: define los toques de seguimiento (email, WhatsApp, llamada) durante los 30 días posteriores a la reunión si no hay decisión inmediata, con el contenido específico de cada mensaje.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proceso de venta consultiva para tecnología agrícola',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto AgriTech basado en datos de campo con IA',
                'description'      => 'Define la estrategia de producto y el roadmap de una plataforma de agricultura de precisión, priorizando funcionalidades según impacto agronómico y adopción por el usuario final.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager senior especializado en productos SaaS para el sector agrícola. Tienes experiencia combinando datos de uso de producto, feedback de campo de técnicos agrónomos y análisis de competencia para construir roadmaps que balancen la visión técnica con las necesidades reales del agricultor, que a menudo difieren significativamente de lo que los ingenieros imaginan en la oficina.

Contexto del proyecto:
Gestiono el producto de una plataforma de agricultura de precisión con [INSERTAR ESTADO: ej. 200 agricultores activos en fase beta / 1.500 clientes de pago en España / lanzamiento en tres meses]. Las funcionalidades actuales incluyen [INSERTAR FUNCIONALIDADES: ej. mapa de NDVI semanal, alertas de riego, registro de actividades]. Necesito construir el roadmap para los próximos doce meses con una estrategia de priorización rigurosa.

Tarea:
Desarrolla un proceso completo de definición de roadmap con los siguientes entregables:

1. Framework de descubrimiento de oportunidades en el campo: diseña un proceso de investigación de usuario adaptado al contexto agrícola (entrevistas en finca, acompañamiento durante faenas, análisis de tickets de soporte, datos de uso en app) con las preguntas clave y el protocolo de síntesis de hallazgos.

2. Mapa de oportunidades por segmento de cultivo: organiza las oportunidades de mejora detectadas en una matriz impacto-esfuerzo segmentada por tipo de cultivo (cereal, hortícola, frutícola, viñedo), identificando las funcionalidades con mayor potencial de retención por segmento.

3. Sistema de priorización RICE adaptado a AgriTech: adapta el framework RICE (Reach, Impact, Confidence, Effort) al contexto agrícola, donde "Reach" incluye la estacionalidad (una funcionalidad crítica en mayo para el olivar tiene un reach muy diferente en septiembre) y "Impact" considera el impacto agronómico medible (litros de agua ahorrados, kg de fertilizante reducido).

4. Roadmap trimestral de doce meses: presenta el roadmap en cuatro trimestres con los temas estratégicos de cada uno, las iniciativas principales, los hitos clave y las dependencias técnicas.

5. Gestión de stakeholders del sector agrícola: define cómo gestionar las expectativas y comunicar el roadmap a tres audiencias distintas: inversores (que quieren crecimiento rápido), técnicos agrónomos socios (que quieren funcionalidades muy específicas por cultivo) y agricultores usuarios (que quieren simplicidad y fiabilidad).

6. Estrategia de feedback continuo post-lanzamiento: diseña un sistema para recoger feedback de funcionalidades nuevas en contexto real de campo (muchos usuarios no completan formularios en app pero sí hablan por teléfono con el técnico agronómico de soporte).

7. Métricas de producto AgriTech: define los cinco KPI principales de producto para una plataforma agrícola, justificando por qué métricas habituales en SaaS (DAU, tiempo en app) son menos relevantes que métricas agronómicas (alertas actuadas, recomendaciones seguidas, datos registrados por semana de campaña).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de producto para plataformas AgriTech',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Plan de formación en AgriTech para equipos técnicos agrícolas con IA',
                'description'      => 'Diseña un programa de capacitación en tecnologías de agricultura de precisión para técnicos agrónomos y personal de campo de cooperativas y grandes explotaciones.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de formación y desarrollo especializado en capacitación tecnológica para el sector agrícola. Tienes experiencia diseñando programas de upskilling para técnicos agrónomos, jefes de explotación y personal de campo que necesitan adoptar herramientas digitales sin desconectarse de sus responsabilidades diarias.

Contexto del proyecto:
Necesito diseñar un programa de formación en agricultura de precisión y AgriTech para [INSERTAR ORGANIZACIÓN: ej. una cooperativa con 15 técnicos agrónomos y 80 socios agricultores / una empresa con 25 técnicos de campo que asesoran a 300 explotaciones]. El nivel de partida digital del equipo es [INSERTAR NIVEL: ej. básico - usan email y WhatsApp / intermedio - ya usan algún software de gestión agronómica].

Tarea:
Desarrolla un programa de formación completo con los siguientes componentes:

1. Diagnóstico de necesidades formativas: diseña una encuesta de 10 preguntas para mapear el nivel digital actual del equipo, las herramientas AgriTech que ya usan, las resistencias al cambio y las áreas donde perciben mayor necesidad de apoyo.

2. Estructura del programa en tres niveles: define los módulos formativos para nivel básico (fundamentos digitales y primeras herramientas), nivel intermedio (análisis de datos agronómicos e interpretación de índices de vegetación) y nivel avanzado (uso de IA para predicción de enfermedades y optimización de insumos).

3. Metodología adaptada al campo: propón una metodología formativa que combine sesiones presenciales en la explotación (aprendizaje en contexto real), microlearning en móvil para momentos de espera durante faenas y sesiones virtuales de resolución de dudas por campaña agrícola.

4. Itinerario por perfil: crea itinerarios formativos diferenciados para técnico agronómico de cooperativa, jefe de explotación de gran empresa agrícola y agricultor autónomo de mediana explotación.

5. Métricas de adopción tecnológica: define cómo medir no solo la formación recibida sino la adopción real de las herramientas en campo (ej. porcentaje de alertas actuadas, datos registrados en plataforma por semana de campaña, reducción de consultas de soporte básicas).

6. Plan de comunicación del programa: diseña cómo presentar el programa a directivos de cooperativa o empresa que necesitan justificar la inversión en formación, y cómo motivar a técnicos y agricultores que pueden percibir la formación como una carga adicional.

7. Gestión de la resistencia al cambio: identifica los tres patrones de resistencia más comunes en el sector agrícola ante la digitalización y propón estrategias de gestión del cambio específicas para cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación y adopción de AgriTech en equipos agrícolas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de viabilidad financiera de proyectos AgriTech con IA',
                'description'      => 'Evalúa la rentabilidad de inversiones en tecnología de agricultura de precisión considerando los ciclos agrícolas, la variabilidad climática y las subvenciones disponibles.',
                'prompt_content'   => <<<'EOT'
Actúa como analista financiero especializado en el sector agrícola y en la evaluación de proyectos de tecnología para el agro. Tienes experiencia calculando el ROI de inversiones en sensores IoT, drones, software de gestión de cultivos y sistemas de riego inteligente, considerando los factores de incertidumbre únicos del sector: variabilidad climática, precios de materias primas, subvenciones PAC y los largos periodos de retorno propios de la agricultura.

Contexto del proyecto:
Debo analizar la viabilidad financiera de implementar [INSERTAR TECNOLOGÍA: ej. un sistema de riego por goteo con sensores de humedad y control por IA / una plataforma de gestión de fertilización variable por zonas / un sistema de detección temprana de enfermedades por imagen satelital] en una explotación de [INSERTAR TAMAÑO: ej. 120 hectáreas de olivar en Jaén / 80 hectáreas de hortícolas bajo plástico en Almería].

Tarea:
Desarrolla un análisis financiero completo con los siguientes componentes:

1. Estructura de costes de implementación: detalla los costes directos (equipamiento, licencias de software, instalación, conectividad) e indirectos (formación del personal, tiempo de adaptación durante la primera campaña, coste de integración con sistemas existentes) de la inversión en tecnología.

2. Modelo de beneficios cuantificables: construye el modelo de beneficios con datos de referencia del sector, incluyendo ahorro en agua (litros/ha/año), reducción de fertilizantes (kg de unidades fertilizantes/ha), reducción de fitosanitarios (€/ha), reducción de mano de obra en tareas manuales de monitorización y mejora de rendimiento por hectárea.

3. Análisis de escenarios: calcula tres escenarios (pesimista, base, optimista) con diferentes hipótesis sobre la tasa de adopción de las recomendaciones de la IA, la variabilidad climática y el precio de los productos agrícolas en el mercado.

4. Mapa de subvenciones disponibles: identifica las principales líneas de financiación para digitalización agrícola en España (PERTE Agroalimentario, fondos FEADER, subvenciones autonómicas, Plan de Recuperación) con los criterios de elegibilidad y el impacto en el retorno neto de la inversión.

5. Análisis de riesgo financiero específico del sector: evalúa los riesgos de inversión propios de la agricultura (año de mala cosecha durante el periodo de retorno, cambio normativo de subvenciones, obsolescencia tecnológica rápida en AgriTech) y propón mitigaciones financieras.

6. Modelo de financiación alternativa: describe las opciones de financiación adaptadas al ciclo de caja agrícola (leasing tecnológico, pago por uso según hectáreas o campaña, financiación bancaria con período de carencia hasta la cosecha).

7. Dashboard financiero de seguimiento: define los indicadores financieros que la explotación debe monitorizar trimestralmente para evaluar si la inversión en tecnología está generando el retorno esperado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Evaluación financiera de inversiones AgriTech',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para el uso de IA y datos en agricultura de precisión',
                'description'      => 'Analiza el marco normativo aplicable al uso de inteligencia artificial, datos satelitales y sensores IoT en explotaciones agrícolas dentro de la Unión Europea.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho agrario, protección de datos y regulación de inteligencia artificial con experiencia asesorando a empresas AgriTech y cooperativas agrícolas en el cumplimiento del marco normativo europeo y español.

Contexto del proyecto:
Una empresa de agricultura de precisión necesita revisar su marco de cumplimiento legal para operar en España y potencialmente en otros países de la UE. La plataforma recopila datos de sensores IoT en fincas de terceros, procesa imágenes satelitales de explotaciones agrícolas, almacena datos de producción, uso de insumos y rendimientos por parcela, y utiliza modelos de IA para generar recomendaciones agronómicas.

Tarea:
Elabora un análisis jurídico completo con los siguientes apartados:

1. Clasificación de datos agrícolas según el RGPD: analiza qué datos de la plataforma constituyen datos personales (datos del agricultor como titular de la explotación), datos no personales (índices de vegetación, lecturas de sensores anónimos) y datos en zonas grises. Define el tratamiento jurídico requerido para cada categoría.

2. Cumplimiento del Reglamento de IA de la UE (AI Act): clasifica el sistema de recomendaciones agronómicas de la plataforma según el nivel de riesgo del AI Act (riesgo mínimo, limitado, alto o inaceptable), identifica los requisitos de conformidad aplicables y el calendario de implementación obligatorio.

3. Propiedad y licencia de datos de explotación: analiza quién es el propietario de los datos generados en la explotación agrícola (datos del suelo, de producción, de insumos), qué cláusulas debe incluir el contrato de servicio para usar esos datos para mejorar los modelos de IA y cómo debe regularse el derecho del agricultor a exportar o eliminar sus datos.

4. Marco regulatorio de datos espaciales y satelitales: describe las implicaciones legales del uso de imágenes satelitales de fincas de terceros, la aplicabilidad de la Directiva INSPIRE y los requisitos de las API de Copernicus.

5. Responsabilidad por recomendaciones de IA erróneas: analiza el régimen de responsabilidad cuando una recomendación de la IA causa un perjuicio económico al agricultor (ej. una dosis de fertilizante incorrecta que daña el cultivo), considerando la nueva Directiva de Responsabilidad por IA y la normativa de productos.

6. Checklist de cumplimiento para contratos con agricultores: elabora una lista de las cláusulas obligatorias y recomendadas que debe incluir el contrato de servicio de la plataforma AgriTech con el agricultor (consentimiento informado, derechos ARCO+, límites de uso de datos para IA, SLA, limitación de responsabilidad).

7. Hoja de ruta de cumplimiento: propón un plan de acción a doce meses para alcanzar el pleno cumplimiento del AI Act, el RGPD y la normativa sectorial agrícola, con los hitos clave y los recursos jurídicos necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Cumplimiento legal de plataformas AgriTech con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Sistema de soporte técnico para usuarios de plataformas AgriTech con IA',
                'description'      => 'Diseña procesos de atención al cliente y bases de conocimiento para dar soporte a agricultores y técnicos agrónomos que usan plataformas de agricultura de precisión.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de Customer Success especializado en plataformas SaaS para el sector agrícola. Tienes experiencia gestionando equipos de soporte que atienden a usuarios con baja alfabetización digital (agricultores de mediana edad), usuarios técnicos avanzados (ingenieros agrónomos) y gestores de cooperativas, todos con perfiles de uso muy distintos y necesidades de soporte radicalmente diferentes.

Contexto del proyecto:
Gestiono el equipo de soporte de una plataforma de agricultura de precisión con [INSERTAR BASE DE USUARIOS: ej. 500 agricultores activos y 30 técnicos agrónomos de cooperativas]. Los principales canales de soporte actuales son [INSERTAR CANALES: ej. teléfono, WhatsApp y email]. Los tickets más frecuentes son [INSERTAR PROBLEMAS COMUNES: ej. "no entiendo el mapa de colores", "la alerta no llegó a tiempo", "¿cómo registro el tratamiento que hice ayer?"].

Tarea:
Diseña un sistema de soporte completo con los siguientes componentes:

1. Segmentación de usuarios por perfil de soporte: define tres perfiles de usuario con sus características, canal preferido, tipos de problema más frecuentes y nivel de autoservicio esperado.

2. Base de conocimiento adaptada al usuario agrícola: diseña la estructura de una base de conocimiento que funcione para usuarios con baja literacidad digital, usando vídeos cortos grabados en campo, fotografías paso a paso y lenguaje del campo (no tecnicismos).

3. Protocolo de soporte por canales agrícolas: dado que muchos agricultores prefieren WhatsApp y el teléfono al portal de tickets, define un protocolo operativo para gestionar el soporte en canales informales manteniendo la trazabilidad y el SLA.

4. Chatbot de primer nivel para AgriTech: diseña el árbol de conversación de un chatbot de primer nivel que pueda resolver las 10 consultas más frecuentes sin intervención humana, con lenguaje apropiado para un agricultor de 55 años.

5. Escalado por urgencia agronómica: a diferencia de otros sectores, en agricultura una incidencia puede ser crítica en función del momento de la campaña (una alerta de helada que no llega la noche de una helada es urgentísima; la misma alerta en julio no importa). Define un sistema de priorización que considere el calendario agrícola y el tipo de cultivo.

6. Programa de éxito del cliente para la primera campaña: diseña un programa de onboarding y acompañamiento durante la primera campaña agrícola del nuevo cliente, con los touchpoints proactivos del equipo de CS para maximizar la adopción de la plataforma en el momento crítico.

7. Métricas de soporte adaptadas al sector agrícola: define los KPI de soporte más relevantes para una plataforma AgriTech, justificando por qué métricas estándar (tiempo medio de resolución) necesitan adaptarse al contexto estacional agrícola.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Customer success y soporte en plataformas AgriTech',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría AgriTech freelance: propuesta y metodología con IA',
                'description'      => 'Desarrolla una metodología de consultoría freelance para ayudar a explotaciones agrícolas y cooperativas a seleccionar e implementar tecnologías de agricultura de precisión con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor agronómico tecnológico freelance con experiencia asesorando a cooperativas, grandes explotaciones y empresas del agro en la selección, implementación y adopción de herramientas de agricultura de precisión. Tu valor diferencial es que combinas conocimiento agronómico profundo (entiendes los cultivos, los ciclos de producción y las necesidades reales del campo) con comprensión técnica de las plataformas AgriTech disponibles en el mercado.

Contexto del proyecto:
Soy consultor freelance y quiero estructurar mi servicio de consultoría AgriTech para ofrecerlo de manera sistemática y escalable. Necesito definir mi metodología, mis entregables tipo, mis tarifas y mi propuesta de valor diferencial respecto a los técnicos de las propias empresas AgriTech.

Tarea:
Ayúdame a construir mi negocio de consultoría AgriTech con los siguientes componentes:

1. Propuesta de valor diferencial: define qué aporta un consultor agronómico independiente que no puede aportar el equipo de ventas de la empresa AgriTech (independencia de proveedor, visión agronómica vs. visión tecnológica, acompañamiento en campo durante la implementación).

2. Metodología de diagnóstico de explotación: diseña un proceso de diagnóstico de necesidades tecnológicas de tres fases (auditoría de la situación actual, identificación de brechas de eficiencia y oportunidades de mejora, priorización de soluciones por ROI y facilidad de adopción) con las herramientas y plantillas de cada fase.

3. Proceso de selección de proveedor AgriTech: crea un marco de evaluación y selección de plataformas y proveedores AgriTech con criterios técnicos (funcionalidades, integración, soporte), criterios económicos (precio, modelo de licencia, ROI esperado) y criterios de adopción (usabilidad, formación incluida, referencias en el mismo tipo de cultivo).

4. Paquetes de servicios y tarifas: define tres paquetes de servicio (básico: diagnóstico y selección de herramienta; estándar: diagnóstico + selección + implementación acompañada; premium: servicio anual de consultoría agronómica digital) con la descripción de entregables y un rango de tarifa orientativo justificado.

5. Propuesta comercial tipo: redacta la estructura de una propuesta de consultoría de cuatro páginas para una cooperativa que quiere digitalizar su servicio de asesoramiento agronómico a socios, incluyendo resumen ejecutivo, diagnóstico de la situación actual, propuesta de solución, plan de trabajo, inversión y garantías.

6. Red de alianzas estratégicas: define qué alianzas debería construir el consultor freelance (con plataformas AgriTech que paguen comisión de referencia, con laboratorios de análisis de suelos, con empresas de drones) y cómo estructurar acuerdos que no comprometan la independencia de criterio ante el cliente.

7. Posicionamiento y captación de clientes: diseña una estrategia de posicionamiento y captación de clientes basada en la presencia en ferias agrícolas, publicaciones en revistas del sector, colaboración con cooperativas y diferenciación por cultivo o zona geográfica de especialización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar negocio de consultoría AgriTech freelance',
                'vote_score'       => 41,
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
