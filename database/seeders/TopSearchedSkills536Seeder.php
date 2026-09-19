<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills536Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Organización automática de assets de campaña con IA y DAM',
                'description'      => 'Usa IA para etiquetar, categorizar y organizar automáticamente los activos digitales de tus campañas, reduciendo el tiempo de búsqueda y reutilización de recursos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de activos digitales (DAM) y operaciones de marketing. Necesito tu ayuda para diseñar un sistema de organización automática de assets de campaña usando inteligencia artificial.

objetivo: Crear un proceso sistematizado para etiquetar, categorizar y estructurar automáticamente todos los activos digitales de mis campañas (imágenes, videos, copys, plantillas, documentos) de modo que cualquier miembro del equipo pueda encontrarlos en segundos.

instrucción detallada:

Parte 1 - Auditoría y diagnóstico del estado actual:
Antes de implementar cualquier sistema, ayúdame a auditar mi situación actual. Genera las preguntas clave que debo responder para entender el volumen de assets existentes, los problemas de organización actuales, cómo encuentra actualmente el equipo los recursos que necesita, qué herramientas de almacenamiento uso hoy y cuáles son los principales cuellos de botella.

Parte 2 - Taxonomía de etiquetado con IA:
Diseña una taxonomía de etiquetado multicapa para assets de marketing. Las dimensiones mínimas que debe cubrir son:
- Campaña de origen y período.
- Canal de destino (redes sociales, email, display, impresos, web).
- Tipo de asset (imagen estática, carrusel, video, GIF, copy, brief, plantilla).
- Formato y dimensiones.
- Fase del funnel (awareness, consideración, conversión, retención).
- Tema o categoría de contenido.
- Estado (borrador, aprobado, publicado, archivado).
- Marca y versión de identidad.

Para cada dimensión, explica cómo la IA puede inferir automáticamente el valor correcto a partir del análisis visual del asset o de su nombre de archivo.

Parte 3 - Implementación del etiquetado automático:
Genera las instrucciones para configurar el análisis automático de assets usando IA. Para imágenes y videos, ¿qué capacidades de visión computarizada necesito? Para documentos y copys, ¿qué análisis de texto aplico? ¿Cómo combino ambos tipos de análisis para un asset multimedia?

Parte 4 - Estructura de carpetas y naming conventions:
Diseña la estructura de carpetas ideal y las convenciones de nombre de archivo para mi DAM. El sistema debe ser lógico para humanos y eficiente para búsqueda automática. Incluye ejemplos concretos de cómo se llamaría un asset en tu sistema.

Parte 5 - Flujo de aprobación y actualización:
Define el proceso para que los assets pasen por las etapas del flujo sin perder sus metadatos. ¿Cómo se actualiza el estado automáticamente? ¿Cómo se notifica al equipo cuando un asset está listo para usar?

Parte 6 - Búsqueda semántica:
Explica cómo implementar búsqueda semántica para que el equipo pueda encontrar assets describiendo lo que necesitan en lenguaje natural, sin necesidad de conocer los tags exactos. ¿Qué herramientas o APIs facilitan esto?

Parte 7 - Métricas de uso y reutilización:
¿Cómo mido el retorno de la inversión en el sistema DAM? Define las métricas clave: tiempo promedio de búsqueda de assets, tasa de reutilización, número de assets duplicados eliminados, y reducción de producción redundante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de sistema DAM con etiquetado automático por IA para equipos de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de sistemas DAM con IA en aplicaciones web y móviles',
                'description'      => 'Aprende a conectar plataformas de gestión de activos digitales con IA a tus aplicaciones, implementando búsqueda semántica de imágenes y distribución inteligente de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en integraciones de sistemas de contenido y APIs de inteligencia artificial. Necesito tu ayuda para integrar un sistema de gestión de activos digitales (DAM) con capacidades de IA en mi aplicación.

objetivo: Diseñar e implementar la integración técnica entre mi aplicación y un sistema DAM potenciado con IA, habilitando funcionalidades como búsqueda semántica de imágenes, etiquetado automático y distribución inteligente de assets.

instrucción técnica completa:

Evaluación de arquitectura y selección de herramientas:
Ayúdame a evaluar las opciones disponibles para construir o integrar un DAM con IA. Compara las siguientes aproximaciones:
- DAM comercial con API (Cloudinary, Bynder, Canto) vs construcción propia.
- Modelos de visión computarizada para etiquetado (APIs de cloud vs modelos open source).
- Bases de datos vectoriales para búsqueda semántica (Pinecone, Weaviate, pgvector).
Para cada opción, indica el trade-off entre facilidad de implementación, costo y control.

Diseño de la capa de API:
Genera el diseño de los endpoints REST que necesito exponer en mi aplicación para las operaciones principales del DAM: subida de assets con análisis automático, búsqueda semántica por descripción textual, búsqueda por similitud visual, recuperación de assets con filtros de metadatos, y actualización de metadatos y estado.

Incluye los esquemas de request y response para cada endpoint.

Pipeline de procesamiento de assets:
Diseña el pipeline que ejecuta cuando se sube un nuevo asset:
1. Recepción y validación del archivo.
2. Generación de thumbnails y formatos optimizados.
3. Análisis con IA para extracción de metadatos visuales.
4. Generación del embedding vectorial para búsqueda semántica.
5. Almacenamiento en base de datos con metadatos estructurados.
6. Indexación en el motor de búsqueda.

Para cada paso, indica la tecnología recomendada y el posible punto de fallo.

Implementación de búsqueda semántica:
Genera el código en Python o Node.js para:
- Convertir una consulta textual en un embedding vectorial.
- Buscar en la base de datos vectorial los assets más similares.
- Combinar resultados semánticos con filtros de metadatos estructurados.
- Devolver resultados ordenados por relevancia con sus URLs de acceso optimizado.

Optimización de entrega de assets:
Diseña la estrategia de CDN y transformación dinámica de imágenes. ¿Cómo sirvo el asset en el formato, tamaño y calidad correctos según el dispositivo y contexto de uso? Incluye consideraciones de caché y versionado.

Seguridad y control de acceso:
¿Cómo implemento permisos granulares sobre los assets? Define el modelo de autorización para diferentes roles: administrador, editor, visualizador y usuario externo.

Plan de migración:
Si ya tengo assets existentes en un almacenamiento no estructurado, ¿cuál es el proceso para migrarlos al nuevo sistema sin interrumpir el servicio? Genera un plan de migración por lotes con rollback.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integración técnica de DAM con IA para búsqueda semántica y distribución de assets',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Búsqueda semántica de recursos visuales con IA para diseñadores',
                'description'      => 'Implementa un sistema de búsqueda inteligente en tu biblioteca de recursos de diseño que entiende descripciones visuales en lenguaje natural para encontrar assets al instante.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador senior con expertise en gestión de recursos visuales y herramientas de diseño potenciadas por IA. Necesito tu ayuda para organizar mi biblioteca de recursos y habilitar búsqueda semántica en ella.

objetivo: Crear un sistema que me permita encontrar cualquier recurso visual (imágenes, ilustraciones, iconos, mockups, fuentes, paletas) describiendo lo que necesito en lenguaje natural, sin depender de nombres de archivo o etiquetas rígidas.

instrucción detallada:

Diagnóstico de la biblioteca actual:
Ayúdame a hacer un inventario estructurado de mi biblioteca de recursos. Genera las preguntas clave para entender: qué tipos de assets tengo, cómo están organizados actualmente, qué volumen aproximado tengo, con qué frecuencia los reutilizo y cuáles son los principales problemas al buscarlos.

Sistema de descripción semántica de assets visuales:
Para habilitar la búsqueda semántica, cada asset necesita una descripción rica. Diseña un protocolo de descripción que cubra:
- Elementos visuales presentes (objetos, personas, escenas, formas geométricas).
- Paleta de colores predominante y estilo de color (vibrante, neutro, monocromático).
- Estilo visual (minimalista, ilustrativo, fotorrealista, flat, retro, futurista).
- Emoción o atmósfera transmitida.
- Contexto de uso adecuado (presentación, web, redes sociales, impresión).
- Palabras clave adicionales no inferibles visualmente.

Flujo de etiquetado con IA:
Define el proceso para generar automáticamente estas descripciones usando IA de visión. Para cada asset nuevo, ¿qué pasos sigo? ¿Cómo reviso y corrijo los resultados del etiquetado automático antes de incorporarlos a la biblioteca?

Implementación práctica de la búsqueda:
Muéstrame cómo configurar la búsqueda semántica usando herramientas accesibles para un diseñador individual o un equipo pequeño. Explora opciones como: extensiones de Figma con búsqueda por IA, integraciones con Notion o Airtable, herramientas como Eagle o Brandfolder, o una solución ligera con embeddings locales.

Uso de la búsqueda en el flujo de trabajo diario:
Dame ejemplos concretos de búsquedas semánticas que puedo hacer y cómo el sistema debería interpretarlas. Por ejemplo: "imagen de persona trabajando en entorno tranquilo con tonos tierra", "icono líneal de tecnología para fondo oscuro", o "paleta de colores que transmita confianza y modernidad".

Organización de favoritos y colecciones:
¿Cómo organizo colecciones dinámicas que se actualicen automáticamente cuando agrego nuevos assets? ¿Cómo comparto colecciones específicas con clientes o colaboradores de forma controlada?

Métricas de productividad:
¿Cómo mido el impacto del sistema en mi flujo de trabajo? Sugiere métricas simples como tiempo promedio de búsqueda antes y después, tasa de reutilización de assets existentes y número de assets descartados por no encontrarlos a tiempo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de búsqueda semántica en biblioteca de recursos visuales para diseñadores',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión inteligente de materiales de ventas con DAM potenciado por IA',
                'description'      => 'Organiza y distribuye los materiales de ventas usando un sistema DAM con IA que garantiza que cada vendedor tenga siempre la versión correcta del contenido adecuado para cada cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en habilitación de ventas (sales enablement) y gestión de contenido comercial. Necesito tu ayuda para implementar un sistema que garantice que mi equipo de ventas siempre tenga el material correcto, actualizado y relevante para cada situación.

objetivo: Diseñar un sistema de gestión de materiales de ventas con IA que elimine el problema del contenido desactualizado, facilite la búsqueda de recursos relevantes para cada oportunidad y mida qué materiales generan más cierres.

instrucción detallada:

Auditoría del contenido de ventas existente:
Primero, ayúdame a inventariar todo el contenido comercial disponible. Genera una plantilla de categorización para: presentaciones de empresa y producto, casos de éxito y testimonios, comparativas con competencia, hojas de producto y especificaciones técnicas, materiales de seguimiento post-reunión, y contratos y propuestas tipo. Para cada categoría, define qué metadatos son necesarios para que los vendedores encuentren el material correcto.

Sistema de etiquetado inteligente:
Diseña el esquema de metadatos que la IA aplicará automáticamente a cada pieza de contenido. Las dimensiones clave son: industria o sector del cliente objetivo, tamaño de empresa (pyme, midmarket, enterprise), fase del proceso de venta (prospección, descubrimiento, propuesta, negociación, cierre), objeción que aborda, producto o servicio al que aplica, y idioma y mercado geográfico.

Recomendación contextual de contenido:
Define la lógica de recomendación automática de materiales. Cuando un vendedor accede al sistema indicando el perfil del prospect, la etapa de la oportunidad y el tema de la próxima reunión, ¿qué algoritmo de recomendación uso para sugerirle los tres materiales más relevantes?

Alerta de contenido desactualizado:
¿Cómo detecto automáticamente materiales que ya no son válidos (precios desactualizados, productos descontinuados, casos de éxito de clientes que ya no son referencia)? Define el proceso de revisión periódica y el flujo de actualización.

Análisis de efectividad del contenido:
Para medir qué materiales contribuyen más al cierre de oportunidades, diseña el sistema de tracking. ¿Cómo registro qué material se usó en qué oportunidad y cuál fue el resultado? ¿Qué reportes genero para el equipo de marketing?

Personalización rápida de materiales:
¿Cómo uso IA para personalizar rápidamente una presentación genérica con el nombre del cliente, su industria y sus puntos de dolor específicos sin que el vendedor tenga que editar manualmente slide por slide?

Implementación y adopción del equipo:
¿Cuál es el plan de implementación y adopción para que el equipo de ventas use el sistema diariamente? Incluye el proceso de onboarding, las integraciones con el CRM y las primeras métricas de adopción que debo monitorear.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión y distribución inteligente de materiales de ventas con DAM y IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Workflows de aprobación de assets digitales con IA para equipos de producto',
                'description'      => 'Diseña flujos de trabajo inteligentes para la creación, revisión y aprobación de assets de producto que reducen los ciclos de feedback y aceleran la publicación.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en operaciones de contenido y coordinación de equipos creativos. Necesito tu ayuda para diseñar un sistema de workflows de aprobación de assets digitales que incorpore IA para hacerlo más eficiente.

objetivo: Crear un proceso de gestión de assets que reduzca los ciclos de revisión, elimine las versiones duplicadas, garantice que solo los assets aprobados lleguen a producción y proporcione visibilidad total del estado de cada recurso.

instrucción para el diseño del sistema:

Mapeo del proceso actual:
Ayúdame a identificar los cuellos de botella en mi proceso actual de gestión de assets. Genera las preguntas para diagnosticar: cuántas rondas de revisión tarda un asset típicamente, quiénes participan en cada etapa de aprobación, dónde se pierde más tiempo, qué tipos de feedback se dan con más frecuencia y qué porcentaje de assets requiere más de tres revisiones.

Diseño del workflow ideal:
Basado en el diagnóstico, diseña el workflow de aprobación con las siguientes etapas: creación y briefing, revisión interna del equipo de diseño, revisión de producto y negocio, aprobación legal si aplica, aprobación final, publicación y archivo. Para cada etapa define: responsable, criterios de entrada y salida, tiempo máximo permitido y acción si se supera el tiempo.

Uso de IA para acelerar las revisiones:
Identifica qué parte del proceso de revisión puede automatizarse con IA. Por ejemplo: verificación automática de que el asset cumple las especificaciones técnicas (tamaño, formato, resolución), detección de inconsistencias de marca (fuentes, colores, logo en versión incorrecta), análisis de accesibilidad del contenido visual, y verificación de que el copy no contiene palabras prohibidas o sensibles.

Sistema de feedback estructurado:
Para eliminar el feedback ambiguo que genera múltiples rondas de revisión, diseña una plantilla de feedback estructurado para cada tipo de asset. El feedback debe ser específico, localizable (referenciando una zona del asset) y accionable. ¿Cómo implemento esto en las herramientas que ya usa mi equipo?

Gestión de versiones:
¿Cómo controlo el versionado de assets a lo largo del proceso de revisión? Define las convenciones de nomenclatura, el proceso de archivado de versiones anteriores y cómo garantizo que nadie trabaje sobre una versión desactualizada.

Panel de control y visibilidad:
¿Qué dashboard necesito para tener visibilidad en tiempo real del estado de todos los assets en proceso? Define las métricas clave: assets bloqueados en revisión, tiempo promedio por etapa, tasa de aprobación en primera revisión, y capacidad del equipo.

Integración con herramientas existentes:
¿Cómo integro este workflow con las herramientas que ya usamos (Figma, Jira, Notion, Slack, o las que tengo)? Genera el mapa de integraciones y los puntos de automatización con herramientas como Zapier o Make.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de workflows de aprobación de assets eficientes para equipos de producto',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de recursos de formación y onboarding con DAM e IA en RRHH',
                'description'      => 'Organiza y distribuye inteligentemente todos los materiales de capacitación y onboarding usando un DAM con IA que personaliza el contenido según el perfil de cada empleado.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en aprendizaje y desarrollo organizacional con experiencia en tecnología educativa y gestión de contenido. Necesito tu ayuda para diseñar un sistema de gestión de recursos de formación y onboarding potenciado con IA.

objetivo: Crear un repositorio centralizado de materiales de formación y onboarding que use IA para organizar el contenido, personalizar la experiencia de aprendizaje de cada empleado y medir la efectividad de los recursos.

instrucción completa:

Auditoría del inventario de formación:
Ayúdame a catalogar todos los recursos de formación existentes. Genera la plantilla de inventario que incluya: tipo de material (video, presentación, manual, quiz, checklist, plantilla de trabajo), tema o competencia que desarrolla, rol o perfil al que aplica, duración estimada, fecha de creación y última actualización, y métricas de uso si están disponibles. Identifica también los vacíos de contenido: competencias que no tienen recursos asociados.

Taxonomía de aprendizaje con IA:
Diseña el esquema de clasificación para que la IA pueda recomendar el material correcto a cada persona. Las dimensiones clave son: área o departamento, nivel de seniority, modalidad de aprendizaje (video, lectura, práctica), fase (pre-onboarding, primeros 30 días, desarrollo continuo, preparación para promoción), y competencia específica que desarrolla.

Sistema de recomendación personalizada:
Define la lógica de recomendación de contenido según el perfil del empleado. Para un nuevo empleado que ingresa al equipo de ventas en posición junior, ¿qué secuencia de materiales recomienda el sistema? ¿Cómo se adapta la ruta de aprendizaje si el empleado ya tiene experiencia previa en ciertos temas?

Onboarding inteligente:
Diseña el proceso de onboarding personalizado con DAM e IA. ¿Cómo el sistema detecta el estado de avance de cada nuevo empleado? ¿Cómo envía automáticamente el siguiente recurso cuando completa el anterior? ¿Cómo alerta al manager sobre retrasos o dificultades?

Mantenimiento y actualización del contenido:
¿Cómo identifico qué materiales están desactualizados y necesitan revisión? Define el proceso de actualización: quién es responsable de cada material, con qué frecuencia se revisa, y cómo se notifica a los empleados que tengan ese material en su ruta de aprendizaje cuando cambia.

Medición de efectividad:
Define las métricas para evaluar si los materiales de formación están cumpliendo su objetivo: tasa de completación, puntuación en evaluaciones posteriores al aprendizaje, aplicación en el trabajo (measurable por desempeño), y satisfacción de los empleados con los recursos. ¿Cómo usa la IA estas métricas para mejorar las recomendaciones?

Democratización del conocimiento:
¿Cómo facilito que expertos internos creen y compartan contenido de formación sin necesidad de conocimientos técnicos avanzados? Define el proceso de contribución de conocimiento y cómo la IA ayuda a estructurar y publicar ese contenido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de gestión de recursos de formación personalizada para empleados con DAM e IA',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Organización inteligente de documentos financieros digitales con IA y DAM',
                'description'      => 'Implementa un sistema de gestión documental financiero con IA que clasifica, indexa y recupera automáticamente estados financieros, facturas, contratos y reportes regulatorios.',
                'prompt_content'   => <<<'EOT'
Eres un controller financiero con experiencia en transformación digital de procesos contables y gestión documental. Necesito tu ayuda para diseñar un sistema de gestión de documentos financieros digitales con inteligencia artificial.

objetivo: Crear un sistema que centralice todos los documentos financieros de la empresa, los clasifique automáticamente, garantice su integridad y los ponga disponibles de forma inmediata para auditorías, cierres contables y análisis financiero.

instrucción detallada:

Mapeo del ecosistema documental financiero:
Ayúdame a identificar todos los tipos de documentos que genera y recibe el área financiera. Categorías principales: documentos de origen (facturas de proveedores, recibos, órdenes de compra), documentos de registro (asientos contables, conciliaciones), reportes periódicos (estados financieros, reportes de gestión), documentos regulatorios (declaraciones fiscales, informes a reguladores), y documentos contractuales (contratos con proveedores, acuerdos de financiamiento). Para cada categoría, define el volumen típico mensual y el período de retención legal requerido.

Clasificación automática con IA:
Define el esquema de metadatos que la IA extraerá automáticamente de cada documento. Para facturas: emisor, receptor, fecha, monto, impuestos, número de documento, centro de costo. Para estados financieros: período, entidad, tipo de reporte, moneda, norma contable aplicable. Para contratos: partes, objeto, vigencia, valor, índice de revisión.

Control de versiones y trazabilidad:
¿Cómo garantizo que cada documento tenga una cadena de custodia clara? Define el sistema de versionado que registre: quién subió el documento, cuándo, qué cambios se realizaron y quién los autorizó. Esto es especialmente crítico para documentos que pasan por múltiples revisiones antes del cierre.

Búsqueda y recuperación para auditorías:
Diseña el sistema de búsqueda que permita localizar cualquier documento en segundos durante una auditoría. Los escenarios de búsqueda críticos son: todos los documentos relacionados con una transacción específica, todos los documentos de un proveedor en un período, todos los documentos que respaldan una línea específica del estado financiero.

Flujos de aprobación y firma digital:
¿Cómo integro el flujo de aprobación de documentos financieros con firma digital? Define los niveles de autorización por tipo de documento y monto, y los mecanismos de autenticación requeridos para documentos con valor legal.

Cumplimiento regulatorio y retención:
¿Cómo el sistema garantiza el cumplimiento con los períodos de retención legal por tipo de documento y jurisdicción? ¿Cómo gestiona la destrucción segura de documentos al vencimiento del período de retención?

Integración con el ERP:
¿Cómo integro el DAM financiero con el ERP para que los documentos se vinculen automáticamente a las transacciones contables correspondientes? Define los puntos de integración y el flujo de datos bidireccional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de gestión documental financiero con clasificación automática para auditorías y cumplimiento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de documentos legales con DAM e IA para despachos y áreas jurídicas',
                'description'      => 'Organiza y recupera contratos, precedentes jurídicos y documentos de caso usando un sistema de gestión documental con IA que facilita la búsqueda y reutilización de conocimiento legal.',
                'prompt_content'   => <<<'EOT'
Eres un abogado con experiencia en gestión del conocimiento jurídico y tecnología legal. Necesito tu ayuda para diseñar un sistema de gestión de documentos legales con IA que mejore la eficiencia de mi despacho o área jurídica.

objetivo: Implementar un sistema DAM especializado en documentos legales que permita organizar contratos, escritos, precedentes y expedientes de forma inteligente, facilitando la búsqueda rápida, la reutilización de conocimiento y el cumplimiento de plazos.

instrucción detallada:

Tipología de documentos legales:
Ayúdame a definir la taxonomía completa de documentos que maneja mi práctica. Las categorías principales son: documentos de cliente (contratos, poderes, escrituras), documentos procesales (demandas, contestaciones, escritos), documentos de investigación (precedentes, jurisprudencia, doctrina), documentos internos (memorandos, dictámenes, informes) y documentos administrativos (facturas, propuestas, engagement letters). Para cada categoría, define los metadatos clave para la gestión y búsqueda.

Extracción automática de metadatos legales:
¿Qué información puede extraer la IA automáticamente de cada tipo de documento? Para contratos: partes, objeto, plazo, monto, cláusulas especiales, fecha de vencimiento. Para escritos procesales: número de expediente, juzgado, tipo de procedimiento, fecha de presentación y plazo de respuesta. Para jurisprudencia: tribunal, fecha, número de resolución, materia y doctrina principal.

Gestión de plazos y alertas:
Define el sistema de gestión de plazos procesales y contractuales integrado con el DAM. ¿Cómo el sistema detecta automáticamente las fechas clave en los documentos y genera alertas preventivas? ¿Con cuánta anticipación y a quién notifica?

Biblioteca de cláusulas y precedentes:
¿Cómo construyo una biblioteca de cláusulas tipo y precedentes reutilizables? Define el proceso para: extraer cláusulas de contratos existentes, clasificarlas por tipo y materia, calificarlas por favorabilidad (a favor del cliente o estándar de mercado), y recuperarlas cuando redacto un nuevo contrato similar.

Búsqueda jurídica inteligente:
Diseña el sistema de búsqueda que permita encontrar precedentes relevantes para un caso nuevo. ¿Cómo describo el problema jurídico en lenguaje natural y el sistema localiza los documentos más relevantes de mi base de conocimiento? ¿Cómo combino la búsqueda semántica con filtros por jurisdicción, fecha y tipo de procedimiento?

Confidencialidad y control de acceso:
En el ámbito legal, el control de acceso es crítico. Define el modelo de permisos que garantice que cada abogado accede solo a los asuntos de sus clientes y que el acceso a documentos especialmente sensibles requiera autorización explícita. ¿Cómo audito quién accedió a qué documento y cuándo?

Flujo de revisión y aprobación de documentos:
Para documentos que requieren revisión de un socio antes de enviarse al cliente o al juzgado, diseña el workflow con las etapas de redacción, revisión, aprobación y entrega, incluyendo el registro de los cambios en cada versión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de gestión documental jurídica con búsqueda semántica y gestión de plazos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Biblioteca de recursos de soporte al cliente con DAM e IA',
                'description'      => 'Construye una base de conocimiento inteligente para tu equipo de soporte que usa IA para recomendar automáticamente los recursos correctos y mantener el contenido actualizado.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success con experiencia en gestión del conocimiento para equipos de soporte. Necesito tu ayuda para diseñar un sistema de biblioteca de recursos de soporte potenciado con IA que mejore la velocidad y calidad de respuesta del equipo.

objetivo: Crear un repositorio centralizado de recursos de soporte (guías, tutoriales, scripts de respuesta, casos documentados, videos explicativos) con búsqueda inteligente por IA que permita a los agentes encontrar la respuesta correcta en segundos.

instrucción completa:

Inventario de recursos de soporte:
Ayúdame a catalogar todos los recursos que tiene actualmente el equipo de soporte. Categorías: artículos de ayuda y guías paso a paso, scripts de respuesta para situaciones frecuentes, videos tutoriales y capturas de pantalla, casos documentados con solución (knowledge base histórica), procedimientos de escalado, y materiales de formación interna. Para cada recurso existente, define los metadatos necesarios para que la IA los recomiende correctamente.

Sistema de recomendación contextual:
Define la lógica de recomendación de recursos en tiempo real. Cuando un agente está atendiendo un ticket y el sistema detecta el tema y el tipo de problema, ¿cómo presenta automáticamente los tres recursos más relevantes? ¿Qué señales del ticket usa para la recomendación: palabras clave, categoría, producto afectado, historial del cliente?

Creación de contenido asistida por IA:
¿Cómo uso IA para crear nuevos artículos de ayuda a partir de tickets resueltos? Diseña el proceso: el agente marca un ticket como "candidato a artículo", la IA extrae el problema y la solución, genera un borrador del artículo, y lo envía para revisión. Define también cómo se estructura el artículo resultante.

Detección de vacíos de conocimiento:
¿Cómo identifico automáticamente los temas sobre los que no tengo recursos suficientes? Define el análisis que detecta: preguntas frecuentes sin artículo asociado, tickets con tiempo de resolución alto por falta de recursos, y temas donde los agentes escalan frecuentemente sin encontrar una solución documentada.

Mantenimiento y calidad del contenido:
¿Cómo garantizo que el contenido de la biblioteca esté actualizado y sea confiable? Define el proceso de revisión periódica: quién revisa qué artículos, con qué frecuencia, cómo detecta el sistema artículos que pueden estar desactualizados por cambios en el producto, y cómo recopila feedback de los agentes sobre la utilidad de cada recurso.

Integración con la plataforma de soporte:
¿Cómo integro la biblioteca con mi plataforma de ticketing (Zendesk, Freshdesk, Intercom)? Define los puntos de integración: recomendación automática dentro del ticket, inserción de contenido en la respuesta al cliente, y linkeo de recursos usados para métricas de efectividad.

Métricas de efectividad de la base de conocimiento:
Define las métricas que indican si la base de conocimiento está mejorando la productividad del equipo: tasa de resolución en primer contacto, tiempo promedio de manejo de tickets, porcentaje de tickets donde el agente usó un recurso recomendado, y deflexión de tickets por autoservicio del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Base de conocimiento inteligente para equipos de soporte con recomendación automática de recursos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de portafolio y assets para clientes freelance con DAM e IA',
                'description'      => 'Organiza, presenta y entrega los activos digitales de tus proyectos freelance de forma profesional usando un sistema DAM con IA que impresiona a los clientes y ahorra tiempo.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance senior con experiencia en gestión de proyectos creativos y entrega de activos digitales a clientes. Necesito tu ayuda para diseñar un sistema profesional de gestión de portafolio y assets para mi práctica freelance.

objetivo: Crear un sistema que me permita organizar todos los assets de mis proyectos, presentar mi trabajo de forma profesional a clientes potenciales, entregar assets de manera ordenada y eficiente, y reutilizar trabajo previo para acelerar nuevos proyectos.

instrucción detallada:

Arquitectura de organización por proyecto:
Diseña la estructura de organización de assets que funcione para múltiples clientes y proyectos simultáneos. La estructura debe permitir: acceso rápido a cualquier proyecto histórico, separación clara entre proyectos de diferentes clientes, control de versiones de cada entregable, y fácil búsqueda de recursos reutilizables.

Define las convenciones de nomenclatura para carpetas y archivos que sea consistente, descriptiva y fácil de seguir aunque trabajen colaboradores externos.

Portafolio dinámico con IA:
¿Cómo uso IA para generar automáticamente un portafolio personalizado para cada propuesta? Cuando un cliente potencial solicita ver trabajos similares a lo que necesita, el sistema debería seleccionar automáticamente los proyectos más relevantes de mi biblioteca, generar una presentación personalizada con los casos más afines a su industria y necesidad, e incluir métricas de impacto de cada proyecto.

Entrega profesional de assets a clientes:
Diseña el proceso de entrega final de activos digitales al cliente. ¿Cómo organizo el paquete de entrega para que sea fácil de usar por el cliente? ¿Qué formatos exporto por defecto para cada tipo de asset? ¿Cómo incluyo instrucciones de uso o licencias? ¿Cómo garantizo que el cliente no tenga que preguntarme nada después de la entrega?

Control de versiones y aprobaciones con clientes:
Define el flujo de revisión con clientes. ¿Cómo comparto versiones para revisión sin enviar archivos enormes por correo? ¿Cómo registro el feedback del cliente de forma estructurada? ¿Cómo garantizo que el cliente aprueba formalmente la versión final antes del cierre del proyecto?

Reutilización de assets entre proyectos:
¿Cómo encuentro rápidamente elementos que creé en proyectos anteriores y que puedo adaptar para un nuevo cliente (ilustraciones, componentes de UI, plantillas, textos base)? Define el sistema de etiquetado que me permite buscar "iconos de tecnología con estilo minimalista" o "paleta de colores para sector salud" en mi biblioteca histórica.

Protección de la propiedad intelectual:
¿Cómo gestiono los derechos sobre los assets según el tipo de contrato? Define cómo etiqueto cada asset con el tipo de licencia aplicable: propiedad del cliente, licencia de uso limitado, asset de mi portafolio reutilizable. ¿Cómo evito usar accidentalmente en un proyecto un asset que es propiedad exclusiva de otro cliente?

Automatización de procesos repetitivos:
¿Qué partes del proceso de gestión de assets puedo automatizar con IA para ahorrar tiempo? Identifica las tareas más frecuentes y tediosas (renombrado de archivos, exportación en múltiples formatos, compresión para web, generación de thumbnails) y propone la automatización correspondiente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de portafolio y entrega de assets para freelancers con organización inteligente',
                'vote_score'       => 32,
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
