<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills616Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para estrategia de contenido visual y fotografía de marca',
                'description'      => 'Desarrolla una estrategia integral de contenido visual para tu marca usando IA, desde la planificación editorial hasta la selección de imágenes y fotografías que comuniquen los valores de tu empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de contenido visual y director creativo especializado en fotografía de marca con más de 15 años de experiencia en marketing visual para empresas de todos los sectores.

Tu objetivo es ayudarme a desarrollar una estrategia completa de contenido visual y fotografía corporativa que comunique de forma auténtica y efectiva los valores, personalidad y propuesta de valor de mi marca.

Contexto del proyecto:
Necesito construir una identidad visual coherente que se aplique en todos los canales de comunicación de la empresa: redes sociales, web corporativa, materiales impresos, campañas publicitarias y eventos. El contenido fotográfico debe ser diferenciador y memorable.

Fase 1 — Diagnóstico visual de marca
Comienza realizando un análisis exhaustivo del estado actual de mi comunicación visual. Explórame los siguientes aspectos:
- Evaluación de la coherencia visual actual entre todos los canales
- Análisis de la brecha entre lo que la marca proyecta visualmente y lo que quiere proyectar
- Identificación de los arquetipos visuales más resonantes para mi audiencia objetivo
- Benchmarking de referentes visuales del sector y de sectores adyacentes

Fase 2 — Definición de identidad visual fotográfica
Desarrolla los pilares del estilo fotográfico de marca:
- Paleta cromática y tratamiento de color en fotografías
- Estilo de iluminación característico (natural, artificial, dramático, suave)
- Composición y encuadres preferidos que refuercen el mensaje de marca
- Tipología de sujetos, modelos y escenarios que mejor representan la marca
- Elementos visuales recurrentes y motivos gráficos reconocibles
- Tratamiento de postproducción y edición coherente

Fase 3 — Calendario editorial visual
Diseña un plan de contenido fotográfico para tres meses que incluya:
- Categorías temáticas de contenido y su peso en la estrategia
- Frecuencia de publicación por canal y tipo de imagen
- Fechas clave, temporadas y momentos de alta demanda de contenido
- Tipos de fotografía necesarios: producto, lifestyle, corporativa, behind the scenes, user-generated
- Relación entre contenido original producido internamente y fotografía stock complementaria

Fase 4 — Briefing para sesiones fotográficas
Crea un modelo de briefing fotográfico profesional que incluya:
- Objetivos de comunicación de la sesión
- Guion visual detallado y lista de tomas imprescindibles
- Referencias visuales y moodboard estructurado
- Instrucciones técnicas para el fotógrafo (óptica, iluminación, formato de entrega)
- Checklist de postproducción y criterios de selección y descarte

Fase 5 — Estrategia de contenido stock complementario
Explica cómo integrar fotografía de banco de imágenes de forma que no rompa la coherencia de marca:
- Criterios de selección de imágenes stock que encajen en el estilo de marca
- Técnicas de edición para unificar imágenes stock con fotografía propia
- Bancos de imágenes recomendados por sector y presupuesto
- Cómo evitar las imágenes cliché que dañan la credibilidad de marca

Fase 6 — Métricas y optimización
Define los indicadores de rendimiento del contenido visual:
- KPIs de engagement por tipo de imagen en cada red social
- Análisis A/B de estilos visuales para landing pages
- Métricas de reconocimiento de marca asociadas a la coherencia visual
- Proceso de iteración y mejora continua basado en datos

Adapta todas las recomendaciones al sector de [INDICAR SECTOR] y al presupuesto disponible para producción fotográfica de [INDICAR PRESUPUESTO MENSUAL]. Prioriza acciones de alto impacto que puedan implementarse sin grandes inversiones iniciales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear una estrategia de contenido visual y fotografía de marca coherente y diferenciadora',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para automatización de flujos de trabajo en fotografía digital',
                'description'      => 'Diseña sistemas de automatización para gestión de archivos fotográficos, procesamiento por lotes, catalogación con metadatos y entrega de imágenes usando scripts e integraciones con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un desarrollador de software especializado en automatización de flujos de trabajo para fotografía digital y gestión de activos multimedia con amplia experiencia en sistemas DAM (Digital Asset Management).

Tu objetivo es ayudarme a diseñar e implementar un sistema completo de automatización que optimice cada etapa del flujo de trabajo fotográfico, desde la ingesta de archivos hasta la entrega final al cliente o la publicación en plataformas.

Contexto técnico:
Trabajo con grandes volúmenes de imágenes en formatos RAW (CR3, ARW, NEF, DNG) y JPEG. Necesito automatizar tareas repetitivas que actualmente consumen horas de trabajo manual y generan errores humanos en la catalogación y nomenclatura.

Módulo 1 — Ingesta y organización automática de archivos
Diseña un sistema de ingesta que:
- Importe automáticamente archivos desde tarjetas de memoria con estructura de carpetas inteligente (año/mes/proyecto/cliente)
- Detecte y elimine duplicados basándose en hash de archivo y metadatos EXIF
- Renombre archivos siguiendo convenciones configurables por tipo de proyecto
- Genere copias de seguridad automáticas en múltiples destinos (NAS, nube)
- Cree miniaturas y previsualizaciones optimizadas para la selección rápida

Módulo 2 — Catalogación automatizada con metadatos
Desarrolla un sistema de catalogación que:
- Extraiga y normalice metadatos EXIF/IPTC/XMP de forma automática
- Use reconocimiento de imagen por IA para generar tags descriptivos automáticamente
- Detecte caras y permita asociarlas a perfiles de personas con consentimiento
- Clasifique imágenes por calidad técnica (exposición, foco, composición) usando modelos de visión
- Genere descripciones textuales automáticas para accesibilidad y SEO

Módulo 3 — Procesamiento por lotes y edición automatizada
Crea flujos de procesamiento que incluyan:
- Aplicación de perfiles de color y correcciones básicas según el cuerpo de cámara
- Exportación en múltiples formatos y resoluciones según el destino (web, impresión, redes sociales)
- Generación automática de versiones en diferentes relaciones de aspecto
- Aplicación de marcas de agua configurables según cliente o tipo de uso
- Optimización de peso de archivo para web sin pérdida perceptible de calidad

Módulo 4 — Gestión de entregas al cliente
Implementa un sistema de entrega que:
- Genere galerías online protegidas por contraseña automáticamente
- Envíe notificaciones al cliente cuando la galería esté lista con enlace de descarga
- Registre qué imágenes ha descargado el cliente y cuándo
- Gestione caducidad de enlaces y archivos de entrega
- Integre con sistemas de facturación para el cobro automático antes de la descarga

Módulo 5 — Integración con plataformas de stock
Configura automatizaciones para la venta de imágenes stock:
- Subida automática a múltiples plataformas (Shutterstock, Adobe Stock, Getty) desde una sola acción
- Traducción automática de títulos y descripciones a varios idiomas
- Seguimiento centralizado de ventas y royalties por plataforma
- Análisis de tendencias de búsqueda para orientar futuras sesiones fotográficas

Módulo 6 — Monitorización y alertas
Diseña un dashboard de control que muestre:
- Estado en tiempo real de todos los procesos automatizados
- Alertas de error con diagnóstico y acciones de recuperación sugeridas
- Estadísticas de rendimiento: tiempos de procesamiento, tasas de error, volumen procesado
- Logs detallados para auditoría y resolución de problemas

Para cada módulo, proporciona el código de ejemplo en Python (preferiblemente) o shell script, las dependencias necesarias (bibliotecas, servicios externos, APIs), y las instrucciones de instalación y configuración en un entorno [INDICAR SO: Windows/macOS/Linux].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatizar flujos de trabajo fotográficos completos con scripts e integraciones de IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para edición y retoque fotográfico con criterio artístico',
                'description'      => 'Desarrolla un sistema de criterios de edición fotográfica y aprende a usar IA para potenciar el retoque artístico manteniendo la autenticidad y el estilo personal del fotógrafo.',
                'prompt_content'   => <<<'EOT'
Actúa como un fotógrafo artístico y retocador profesional con especialización en fotografía de retrato, moda y editorial, con amplia experiencia en el uso de herramientas de IA para la edición fotográfica.

Tu objetivo es ayudarme a desarrollar un flujo de edición fotográfica sofisticado que combine técnicas tradicionales de retoque con las capacidades actuales de la inteligencia artificial, preservando siempre la autenticidad artística y evitando resultados artificiales o plastificados.

Parte 1 — Filosofía y criterios de edición
Establece un marco filosófico para mi proceso de edición:
- Diferencia entre corrección técnica (eliminar errores) y edición artística (construir un punto de vista)
- Cómo definir y documentar mi estilo personal de edición para aplicarlo consistentemente
- El equilibrio entre la perfección técnica y la naturalidad que genera conexión emocional
- Cuándo y cómo el retoque excesivo daña la credibilidad fotográfica
- Ética del retoque en diferentes géneros: periodismo, retrato, moda, publicidad

Parte 2 — Flujo de trabajo de color y tono
Desarrolla un proceso sistemático de corrección de color:
- Calibración de la visión de color y control del entorno de edición (pantalla, luz ambiente)
- Flujo de trabajo en espacio de color amplio para preservar la máxima información
- Técnicas de graduación de color que crean atmósfera sin destruir información de sombras o luces
- Creación de LUTs personalizadas que definan el estilo cromático de mi trabajo
- Uso de IA para la corrección automática de balance de blancos en situaciones difíciles

Parte 3 — Retoque de piel y textura con IA
Explica técnicas avanzadas de retoque que conserven la naturalidad:
- Frecuencia dividida avanzada con apoyo de IA para preservar la textura real de la piel
- Uso de herramientas de IA para eliminar imperfecciones temporales sin alterar rasgos permanentes
- Técnicas de luminosidad y contouring digital que modelen sin distorsionar la anatomía
- Cómo usar la IA para recuperar textura en zonas sobreexpuestas o suavizadas en exceso
- Proceso de revisión de retoque para detectar excesos antes de la entrega

Parte 4 — Composición y encuadre en postproducción
Aborda la edición compositiva con apoyo de IA:
- Recorte inteligente basado en reglas de composición y análisis de la escena
- Corrección de perspectiva y distorsión de objetivos de forma automática
- Técnicas de extensión de fondo con IA generativa para cambiar el encuadre
- Eliminación y reemplazo de elementos distorsionantes del fondo
- Montaje fotográfico creíble que respete la física de la luz

Parte 5 — Flujo de trabajo con herramientas de IA actuales
Revisa las herramientas de IA más útiles para la edición:
- Lightroom AI (máscara de sujeto, fondo, cielo) y sus limitaciones reales
- Photoshop Generative Fill: usos legítimos y trampas creativas
- Topaz Photo AI para reducción de ruido y aumento de resolución
- Luminar Neo y sus módulos de IA para retratos y paisajes
- Flujo de trabajo entre aplicaciones para aprovechar las fortalezas de cada herramienta

Parte 6 — Creación de presets y automatización inteligente
Diseña un sistema de edición escalable:
- Estructura de presets modulares que se combinan para diferentes situaciones
- Sincronización inteligente de ajustes entre imágenes de la misma serie
- Cuándo automatizar y cuándo editar manualmente cada imagen
- Sistema de aprendizaje continuo para mejorar los presets con cada proyecto

Dame ejemplos visuales describiendo paso a paso cómo resolverías situaciones concretas de edición para [INDICAR TIPO DE FOTOGRAFÍA: retrato/moda/producto/paisaje] en [INDICAR SOFTWARE PRINCIPAL: Lightroom/Capture One/otro].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar un sistema de edición fotográfica con IA que preserve el estilo artístico personal',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para venta de fotografía stock y estrategia de licenciamiento',
                'description'      => 'Optimiza tu negocio de fotografía stock con IA: análisis de tendencias de mercado, estrategias de pricing, gestión de portfolios en múltiples plataformas y maximización de ingresos por royalties.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en el mercado de fotografía stock y licenciamiento de imágenes con amplia experiencia ayudando a fotógrafos a construir ingresos pasivos significativos.

Tu objetivo es ayudarme a desarrollar una estrategia de negocio completa y sostenible para vender fotografía stock, desde la planificación de contenido hasta la maximización de ingresos en múltiples plataformas.

Análisis del mercado de fotografía stock con IA
Comienza con un análisis profundo del mercado actual:
- Estado del mercado de stock fotográfico: crecimiento, fragmentación y nuevos actores
- Impacto de la IA generativa en la demanda de fotografía stock auténtica
- Segmentos de mayor crecimiento y mayor rentabilidad en 2024-2025
- Análisis de la demanda por categorías: corporativa, lifestyle, tecnología, salud, sostenibilidad
- Geografías con mayor demanda insatisfecha donde mi contenido puede destacar

Estrategia de portfolio y planificación de contenido
Desarrolla un plan estratégico de producción:
- Análisis de mis imágenes actuales: categorías, coverage de temas y gaps a cubrir
- Identificación de los 10 temas con mejor relación producción/ingresos esperados
- Cómo usar las herramientas de búsqueda de tendencias de las propias plataformas (Shutterstock Trends, Adobe Stock Insights)
- Planificación de sesiones fotográficas orientadas al mercado, no a la creatividad pura
- Balance entre contenido evergreen (vende siempre) y contenido de tendencia (vende mucho y rápido)

Optimización de metadatos y SEO para stock
Explica cómo maximizar la visibilidad de mis imágenes:
- Investigación de palabras clave con herramientas de IA para fotografía stock
- Estructura óptima de títulos: longitud, uso de palabras clave principales y secundarias
- Descripción efectiva que incluye contexto, uso previsto y palabras clave long-tail
- Selección de keywording: cuántas palabras clave, cómo priorizarlas y cómo evitar el spam
- Uso de IA para generar metadatos en varios idiomas y multiplicar la visibilidad internacional

Estrategia multi-plataforma y exclusividad
Diseña una estrategia de distribución inteligente:
- Análisis comparativo de plataformas: Shutterstock, Adobe Stock, Getty/iStock, Alamy, 500px, Pond5
- Cuándo conviene la exclusividad (mayor royalty) vs. distribución amplia (mayor volumen)
- Estrategia de lanzamiento escalonado para maximizar el momentum inicial de cada imagen
- Gestión eficiente de la subida simultánea a múltiples plataformas
- Cómo construir un porfolio directo para ventas sin comisión a través de tu propia web

Análisis de rendimiento y optimización continua
Establece un sistema de análisis de datos:
- Métricas clave a seguir: descargas por imagen, ingresos por categoría, tasa de conversión por plataforma
- Análisis de las imágenes de mayor rendimiento para replicar sus características
- Identificación de imágenes de bajo rendimiento para retirar o actualizar sus metadatos
- Dashboard de seguimiento de royalties consolidado de todas las plataformas
- Proyecciones de ingresos basadas en el crecimiento del portfolio

Diversificación de ingresos en fotografía
Explora fuentes de ingreso complementarias:
- Venta de prints y arte digital en plataformas como Fine Art America o Society6
- Licencias editoriales directas a medios de comunicación y editoriales
- Venta de packs temáticos y colecciones curadas a precios premium
- Workshops online y cursos sobre fotografía stock para monetizar el conocimiento
- Consultoría y producción de fotografía stock por encargo para empresas

Crea un plan de acción para los próximos 90 días con objetivos concretos de portfolio y ingresos, adaptado a mi situación actual como [INDICAR NIVEL: principiante/con portfolio inicial/fotógrafo establecido] con [INDICAR VOLUMEN: número de imágenes actuales en stock].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un negocio rentable de fotografía stock con estrategia de ventas y licenciamiento optimizada',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de catálogos fotográficos y arquitectura de metadatos',
                'description'      => 'Diseña una arquitectura completa de gestión de activos fotográficos (DAM) con IA, incluyendo taxonomías de metadatos, flujos de aprobación y sistemas de búsqueda semántica para equipos creativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas de gestión de activos digitales (DAM) con especialización en activos fotográficos y amplia experiencia implementando sistemas para equipos creativos de empresas medianas y grandes.

Tu objetivo es ayudarme a diseñar e implementar un sistema robusto de gestión de catálogos fotográficos que escale con el crecimiento del equipo y del volumen de activos, con búsqueda inteligente y flujos de trabajo colaborativos.

Diagnóstico y requisitos del sistema
Comienza con un análisis de necesidades:
- Evaluación del volumen actual y proyección de crecimiento de activos fotográficos
- Identificación de los perfiles de usuario y sus necesidades específicas (fotógrafos, diseñadores, marketing, legal)
- Análisis de los puntos de dolor del flujo de trabajo actual: dónde se pierde tiempo y calidad
- Requisitos de integración con herramientas existentes (Adobe Creative Suite, CMS, redes sociales)
- Restricciones técnicas y presupuestarias para la solución

Arquitectura de metadatos y taxonomía
Diseña la estructura de información:
- Esquema de metadatos en tres capas: técnicos (EXIF), descriptivos (IPTC) y de negocio (campos personalizados)
- Taxonomía jerárquica de categorías adaptada al negocio (sector, tipo de contenido, geografía, uso previsto)
- Sistema de tags controlados vs. tags libres: cuándo usar cada uno
- Gestión de los derechos y licencias: campos para el control del uso permitido, fechas de caducidad y restricciones geográficas
- Estrategia de metadatos multilingüe para organizaciones internacionales

Flujos de aprobación y control de calidad
Desarrolla los procesos de gestión editorial:
- Flujo de ingesta: desde la tarjeta de memoria hasta el archivo aprobado y publicado
- Criterios de selección técnica: exposición, foco, composición, uso de marca correcta
- Proceso de retoque y edición con versionado de archivos
- Flujo de aprobación legal: verificación de model releases, property releases y licencias de ubicación
- Sistema de archivado y gestión del ciclo de vida de los activos

Búsqueda semántica e inteligencia artificial
Implementa capacidades de búsqueda avanzada:
- Configuración de IA para el etiquetado automático de contenido visual (escenas, objetos, emociones, colores dominantes)
- Búsqueda por similitud visual: encontrar imágenes parecidas a una imagen de referencia
- Búsqueda en lenguaje natural: "mujer sonriendo en entorno de trabajo moderno, iluminación natural"
- Detección automática de duplicados y variantes de la misma toma
- Alertas automáticas cuando una imagen con licencia caducada sigue usándose

Gestión de derechos y compliance
Crea un sistema de control legal:
- Registro digital de model releases y property releases vinculados a cada imagen
- Alertas de caducidad de licencias y contratos con proveedores de stock
- Control de uso por imagen: seguimiento de en qué piezas se ha utilizado cada activo
- Proceso de auditoría de derechos para detectar usos no autorizados
- Integración con sistemas de facturación para el seguimiento de costes de licencias

Implementación y gestión del cambio
Planifica el despliegue del sistema:
- Evaluación de soluciones DAM: Bynder, Canto, Brandfolder, Extensis Portfolio, solución open source
- Plan de migración de activos existentes con preservación de metadatos
- Estrategia de formación para los diferentes perfiles de usuario
- Plan de adopción y gobernanza: roles, responsabilidades y procesos de mantenimiento
- KPIs del sistema: tasa de adopción, tiempo de búsqueda, reutilización de activos

Adapta las recomendaciones a una organización de [INDICAR TAMAÑO: pequeña/mediana/grande] con [INDICAR VOLUMEN: número aproximado de activos actuales] y un equipo de [INDICAR NÚMERO] personas que gestionan activos fotográficos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un sistema DAM con IA para gestionar catálogos fotográficos corporativos a escala',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para evaluación de portfolios fotográficos y gestión del talento creativo',
                'description'      => 'Crea un sistema estructurado con IA para evaluar portfolios de fotógrafos, definir criterios de selección de talento creativo y gestionar equipos fotográficos para proyectos empresariales.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo y gestor de talento especializado en fotografía profesional con amplia experiencia seleccionando, evaluando y desarrollando equipos fotográficos para agencias, medios de comunicación y departamentos de marketing.

Tu objetivo es ayudarme a crear un sistema completo y objetivo para la evaluación de portfolios fotográficos, la selección de fotógrafos profesionales y la gestión del talento creativo en proyectos de fotografía empresarial.

Marco de evaluación de portfolios fotográficos
Desarrolla una metodología estructurada de evaluación:

Criterios técnicos (peso: 30% de la evaluación):
- Dominio de la exposición en situaciones difíciles: contraluz, escenas de alto contraste, baja luz
- Control del enfoque y la profundidad de campo de forma intencional
- Comprensión de la óptica y uso creativo de diferentes distancias focales
- Consistencia técnica a lo largo del portfolio
- Manejo de la postproducción: edición limpia sin artificios evidentes

Criterios artísticos (peso: 40%):
- Coherencia de visión y desarrollo de un estilo personal reconocible
- Capacidad de narración visual: cada imagen cuenta una historia
- Uso de la luz como elemento compositivo y expresivo
- Originalidad: diferenciación de los tópicos visuales del sector
- Progresión artística visible a lo largo del tiempo

Criterios profesionales y comerciales (peso: 30%):
- Alineación del estilo con las necesidades de la empresa o proyecto
- Versatilidad para adaptar el estilo propio a diferentes briefings
- Diversidad de géneros fotográficos abordados con solvencia
- Evidencia de proyectos comerciales completados con éxito
- Testimonios y referencias de clientes anteriores

Proceso de selección y entrevista de fotógrafos
Diseña el proceso completo de selección:
- Preselección eficiente de portfolios en grandes volúmenes usando criterios objetivos
- Preguntas clave para la entrevista técnica y creativa
- Ejercicio práctico de briefing: dar un encargo real y evaluar la propuesta
- Evaluación de las capacidades de comunicación y gestión del cliente
- Negociación de tarifas: estructura de precios, derechos y condiciones habituales en el sector

Gestión del equipo creativo fotográfico
Crea un sistema de gestión de fotógrafos:
- Onboarding del fotógrafo: transmisión de valores de marca y guías de estilo
- Comunicación del briefing: cómo dar instrucciones claras que produzcan resultados predecibles
- Sistema de feedback constructivo durante y después de cada proyecto
- Gestión de la relación freelance: contratos, confidencialidad y protección de la propiedad intelectual
- Desarrollo del talento: cómo invertir en el crecimiento artístico del equipo

Banco de talento y gestión de la red de fotógrafos
Construye una base de datos de talento:
- Estructura de datos para catalogar fotógrafos por especialidad, estilo, geografía y disponibilidad
- Sistema de evaluación continua basado en el desempeño en proyectos reales
- Proceso de mantenimiento del banco: actualización de portfolios y nuevos ingresos
- Gestión de la exclusividad y de los conflictos de interés con competidores
- Construcción de relaciones de largo plazo con los mejores talentos

Métricas y evaluación del proceso de selección
Define indicadores de éxito:
- Tasa de satisfacción con los fotógrafos seleccionados en proyectos completados
- Tiempo medio de selección del fotógrafo adecuado para un proyecto
- Porcentaje de fotografías seleccionadas del total entregado (tasa de acierto del briefing)
- Tasa de repetición: fotógrafos que son contratados en más de un proyecto
- Evolución de la calidad media del contenido fotográfico producido

Genera una rúbrica de evaluación en formato tabla con puntuaciones del 1 al 5 para cada criterio, y un modelo de briefing fotográfico estándar, adaptados para una empresa de [INDICAR SECTOR] que produce [INDICAR VOLUMEN: número] sesiones fotográficas al año.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear un sistema objetivo para seleccionar y gestionar fotógrafos profesionales en proyectos empresariales',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero del negocio de fotografía profesional',
                'description'      => 'Construye un modelo financiero completo para un negocio de fotografía profesional: pricing, análisis de rentabilidad por tipo de servicio, gestión de costes y estrategia de crecimiento sostenible.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor financiero especializado en empresas creativas y negocios de fotografía profesional con amplia experiencia ayudando a fotógrafos a transformar su pasión en negocios financieramente sólidos y escalables.

Tu objetivo es ayudarme a construir un modelo financiero completo para mi negocio de fotografía, desde el análisis de costes hasta la estrategia de pricing y la planificación del crecimiento.

Análisis de la estructura de costes
Identifica y clasifica todos los costes del negocio:

Costes fijos mensuales:
- Amortización del equipo fotográfico (cámaras, objetivos, flash, trípodes) calculada sobre la vida útil real
- Suscripciones de software: Adobe Creative Cloud, Lightroom, Capture One, herramientas de gestión
- Almacenamiento y backup: discos duros, NAS, servicios en la nube
- Seguro del equipo y responsabilidad civil profesional
- Alquiler de estudio o coste de estudio por días si se alquila por proyecto
- Marketing y presencia online: web, portfolio, publicidad

Costes variables por proyecto:
- Tiempo de producción: horas de sesión de campo o estudio
- Tiempo de postproducción: selección, edición, retoque, exportación
- Asistentes y segundo fotógrafo cuando se requieren
- Alquiler de equipo adicional o especializado
- Desplazamientos y dietas para sesiones fuera de la base
- Elementos de producción: accesorios, flores, vestuario, catering

Modelo de pricing estratégico
Desarrolla una estrategia de precios robusta:
- Cálculo del coste hora real (incluyendo tiempo de administración, marketing y desarrollo)
- Tarifa mínima viable por debajo de la cual no es rentable aceptar el proyecto
- Estrategia de pricing por paquetes vs. pricing por hora vs. pricing basado en valor
- Análisis comparativo de tarifas del mercado por tipo de fotografía y geografía
- Cómo presentar el precio para minimizar la resistencia del cliente
- Política de descuentos: cuándo sí, cuándo no, y qué pedir a cambio

Análisis de rentabilidad por línea de servicio
Evalúa la rentabilidad diferencial de cada tipo de trabajo:
- Fotografía de bodas: análisis de margen, temporalidad y esfuerzo total por proyecto
- Fotografía corporativa y de empresa: recurrencia, tarifa media y potencial de cliente
- Fotografía de producto y e-commerce: volumen, estandarización y escalabilidad
- Retrato personal y familiar: ticket medio, fidelización y referidos
- Fotografía de stock: ingresos pasivos, tiempo de producción y curva de crecimiento
- Educación y talleres: escalabilidad digital y posicionamiento como experto

Planificación financiera y flujo de caja
Construye un modelo de planificación:
- Proyección de ingresos por tipo de servicio para los próximos 12 meses
- Análisis de la estacionalidad y cómo suavizar los picos y valles de ingresos
- Punto de equilibrio mensual: cuántos proyectos necesito para cubrir costes fijos
- Reserva de emergencia necesaria para un negocio unipersonal de fotografía
- Plan de inversión en equipo: cuándo y cómo renovar sin descapitalizarse

Estrategia de crecimiento y escalabilidad
Define el camino hacia un negocio más grande:
- Estrategias para aumentar el ticket medio sin aumentar el volumen de trabajo
- Cuándo contratar asistentes, cuándo subcontratar y cuándo construir equipo propio
- Modelo de agencia: cómo pasar de fotógrafo autónomo a director creativo con equipo
- Diversificación de ingresos: stock, educación, licencias y productos derivados
- Valoración del negocio y opciones de salida o asociación

Genera una hoja de cálculo conceptual con las fórmulas clave y los rangos de valores típicos para un fotógrafo de [INDICAR ESPECIALIDAD] en [INDICAR CIUDAD/REGIÓN] que actualmente factura [INDICAR FACTURACIÓN ANUAL APROXIMADA].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un modelo financiero completo y estrategia de pricing para un negocio de fotografía profesional',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para gestión de derechos de autor y contratos en fotografía profesional',
                'description'      => 'Comprende y gestiona los aspectos legales de la fotografía profesional: derechos de imagen, contratos de cesión, model releases, licencias de uso y protección de la propiedad intelectual.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual y derecho de imagen aplicado a la fotografía profesional con amplia experiencia asesorando a fotógrafos, agencias y empresas en el marco de la legislación española y europea.

Tu objetivo es ayudarme a comprender y gestionar correctamente todos los aspectos legales de mi actividad fotográfica, protegiéndome como autor y respetando los derechos de las personas y lugares fotografiados.

Fundamentos del derecho de autor en fotografía
Establece las bases legales:
- Qué tipo de obras fotográficas están protegidas por el derecho de autor y cuáles no
- Duración de la protección: cuándo una fotografía pasa al dominio público
- Diferencia entre autoría y titularidad: cuándo el fotógrafo es el titular y cuándo no
- Derechos morales irrenunciables del fotógrafo como autor
- Derechos patrimoniales transferibles: reproducción, distribución, comunicación pública, transformación
- Marco legal aplicable: Ley de Propiedad Intelectual española (Real Decreto Legislativo 1/1996) y Directiva europea

Derechos de imagen y modelo de release
Comprende el derecho a la propia imagen:
- Marco legal del derecho a la propia imagen (Ley Orgánica 1/1982)
- En qué situaciones necesitas el consentimiento explícito del fotografiado
- Fotografía en espacios públicos: reglas sobre personas, manifestaciones, eventos
- Fotografía editorial vs. fotografía comercial: diferencias en los requerimientos de consentimiento
- Model release para uso comercial: elementos obligatorios del documento
- Situaciones especiales: menores de edad, personas fallecidas, personajes públicos

Contratos fotográficos
Desarrolla modelos de contratos para diferentes situaciones:
- Contrato de encargo fotográfico: servicio + cesión de derechos al cliente
- Licencia de uso de imágenes: tipos de licencia, exclusividad, territorios, duración
- Contrato para fotografía de bodas y eventos sociales: responsabilidades y limitaciones
- Acuerdo de confidencialidad (NDA) para proyectos corporativos sensibles
- Contrato con colaboradores y asistentes: derechos sobre el trabajo realizado en equipo
- Property release: autorización para fotografiar propiedades privadas con fines comerciales

Protección contra el plagio y uso no autorizado
Crea un sistema de protección de tu trabajo:
- Registro de obras fotográficas en el Registro de la Propiedad Intelectual
- Uso de metadatos IPTC para vincular la imagen al autor de forma permanente
- Marcas de agua: ventajas, desventajas y cuándo utilizarlas
- Herramientas de monitorización de uso no autorizado en internet: Google Image Search, TinEye, Pixsy
- Proceso de reclamación extrajudicial por uso no autorizado
- Cuándo y cómo iniciar acciones legales por infracción de derechos de autor

Fotografía y propiedad ajena en la imagen
Aborda situaciones complejas:
- Fotografía de arquitectura y obras de arte en espacios públicos: doctrina de la libertad de panorama
- Obras de arte en interiores: cuándo necesitas autorización del artista o del propietario
- Logotipos y marcas registradas visibles en fotografías: uso incidental vs. uso prominente
- Fotografía de vehículos, aeronaves y embarcaciones: consideraciones específicas
- Implicaciones de los vuelos de dron: regulación AESA, zonas restringidas y privacidad

Fiscalidad y facturación en fotografía
Añade el contexto fiscal:
- Diferencia entre IRPF de actividades profesionales y rentas del capital para ingresos de stock
- IVA en servicios fotográficos y en licencias de imágenes
- Retenciones aplicables cuando el cliente es una empresa
- Gastos deducibles específicos de la actividad fotográfica
- Registro de contratos y facturas para la justificación de ingresos ante Hacienda

Nota importante: esta información tiene carácter orientativo. Para situaciones concretas que puedan tener consecuencias legales significativas, consulta siempre con un abogado especializado en propiedad intelectual en tu jurisdicción. La legislación puede cambiar y cada caso tiene sus particularidades.

Genera un checklist legal para [INDICAR TIPO DE PROYECTO: boda/fotografía corporativa/stock/editorial] que pueda usar antes de cada proyecto para asegurarme de que tengo todos los documentos y autorizaciones necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar correctamente los derechos de autor, contratos y aspectos legales de la fotografía profesional',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para atención al cliente en estudios y agencias fotográficas',
                'description'      => 'Optimiza la experiencia del cliente en un negocio de fotografía: desde la primera consulta hasta la entrega y el seguimiento postventa, usando IA para automatizar comunicaciones y mejorar la satisfacción.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia del cliente (CX) con profundo conocimiento del sector de fotografía profesional y amplia experiencia mejorando la satisfacción del cliente en estudios fotográficos, agencias creativas y fotógrafos independientes.

Tu objetivo es ayudarme a diseñar un sistema completo de atención al cliente para mi negocio de fotografía que automatice las comunicaciones rutinarias, eleve la experiencia del cliente y genere referidos y ventas repetidas.

Mapeo del viaje del cliente en fotografía
Analiza cada punto de contacto:

Etapa 1 — Descubrimiento y primera consulta:
- Respuesta rápida a consultas por web, redes sociales y teléfono
- Guión para la llamada o reunión de briefing inicial
- Cómo recopilar toda la información necesaria en la primera conversación
- Presentación de servicios y paquetes adaptada a las necesidades detectadas
- Manejo de objeciones de precio más frecuentes en fotografía

Etapa 2 — Contratación y preparación:
- Proceso de firma digital de contrato y cobro de señal
- Correo de confirmación con toda la información del proyecto
- Guía de preparación para el cliente (qué llevar, cómo prepararse para la sesión)
- Recordatorio automático 48 horas antes de la sesión
- Protocolo de cancelación y reprogramación

Etapa 3 — Sesión fotográfica:
- Recibimiento del cliente y explicación del proceso durante la sesión
- Cómo dirigir a no-modelos para conseguir expresiones naturales
- Gestión de expectativas en tiempo real si surgen imprevistos
- Comunicación durante la sesión que genere confianza y comodidad

Etapa 4 — Entrega y selección:
- Galería de preselección online: cómo presentar las imágenes al cliente
- Plazo de entrega realista y comunicación proactiva si se retrasa
- Proceso de feedback y ajustes en la edición final
- Entrega de archivos finales: formatos, resoluciones y acceso digital

Etapa 5 — Postventa y fidelización:
- Email de seguimiento para verificar satisfacción
- Solicitud de reseña en Google, Trustpilot o plataformas relevantes
- Programa de referidos: incentivos para que el cliente recomiende el negocio
- Calendario de contactos para conversiones de clientes ocasionales en recurrentes

Automatización de comunicaciones con IA
Diseña el sistema de comunicación automática:
- Plantillas de respuesta para las 10 preguntas más frecuentes de clientes potenciales
- Secuencia de emails automáticos desde la reserva hasta la entrega (triggers y contenidos)
- Mensajes de WhatsApp Business para cada etapa del proyecto
- Respuestas automáticas para reseñas positivas y negativas en Google My Business
- Sistema de seguimiento de clientes que no han respondido a presupuesto

Gestión de situaciones difíciles
Crea protocolos para situaciones complejas:
- Cliente insatisfecho con los resultados: proceso de mediación y resolución
- Solicitud de retoque excesivo o no incluido en el presupuesto
- Retraso en la entrega por enfermedad o causa de fuerza mayor
- Disputas sobre derechos de uso o reproducción no autorizada de imágenes
- Cliente que pide devolución del dinero después de la sesión

Sistema de feedback y mejora continua
Implementa un ciclo de aprendizaje:
- Encuesta de satisfacción post-entrega con preguntas específicas y accionables
- Análisis mensual de feedback para identificar patrones de mejora
- Protocolo de seguimiento de clientes que no repiten para entender el motivo
- Benchmarking de satisfacción contra estándares del sector

Genera las plantillas de email y mensajes de WhatsApp para cada etapa del viaje del cliente adaptadas a un [INDICAR TIPO DE NEGOCIO: estudio de retrato/fotógrafo de bodas/fotografía corporativa] con [INDICAR TONO: profesional y cálido/cercano e informal/premium y exclusivo].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de atención al cliente que automatice comunicaciones y mejore la experiencia en negocios fotográficos',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para fotógrafos freelance: construir un negocio sostenible y diferenciado',
                'description'      => 'Guía completa para fotógrafos freelance que quieren profesionalizar su negocio con IA: posicionamiento de marca personal, captación de clientes, gestión de proyectos y escalado del negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios creativos con especialización en fotografía freelance y amplia experiencia ayudando a fotógrafos independientes a transformar su actividad en un negocio próspero, sostenible y diferenciado.

Tu objetivo es ayudarme a construir o profesionalizar mi negocio de fotografía freelance de forma estratégica, usando las herramientas de IA disponibles para competir eficazmente en un mercado cada vez más saturado.

Posicionamiento y marca personal del fotógrafo freelance
Define tu propuesta de valor única:
- Cómo identificar tu nicho fotográfico ideal: intersección entre lo que sabes hacer, lo que el mercado paga y lo que te apasiona
- Desarrollo de tu historia de marca: por qué fotografías, qué te diferencia, para quién trabajas
- Construcción de un portfolio enfocado que comunica especialización en lugar de generalismo
- Nombre artístico vs. nombre de empresa: cómo elegir y las implicaciones legales
- Identidad visual de tu marca: logo, paleta, tipografía que refuercen tu estilo fotográfico

Estrategia de captación de clientes con IA
Desarrolla canales de adquisición:

Canal digital:
- Web de portfolio optimizada para SEO local y de nicho: estructura, contenido y keywords
- Instagram y TikTok como herramientas de captación: estrategia de contenido y consistencia
- LinkedIn para fotografía corporativa y B2B: cómo posicionarte ante empresas y responsables de marketing
- Google My Business: optimización para búsquedas locales como "fotógrafo de bodas Madrid"
- Uso de IA para crear contenido de marketing, copy de web y descripciones de servicios

Canal de referidos y red profesional:
- Sistema de referidos activo: cómo pedir referencias sin incomodar
- Red de alianzas con profesionales complementarios: organizadores de eventos, diseñadores, agencias
- Cómo aparecer en guías de bodas, revistas especializadas y plataformas de profesionales
- Colaboraciones con otros fotógrafos para proyectos que superan tu capacidad

Gestión eficiente de proyectos con IA
Optimiza tu operativa diaria:
- Herramientas de gestión de clientes y proyectos para freelancers (HoneyBook, Studio Ninja, 17hats)
- Uso de IA para automatizar la respuesta a consultas y el envío de presupuestos
- Gestión del tiempo: cómo equilibrar producción, postproducción, administración y marketing
- Sistema de archivo y backup infalible para proteger el trabajo del cliente
- Facturación, cobros y gestión de la tesorería para freelancers con ingresos irregulares

Escalado del negocio freelance
Crece sin perder la calidad ni tu vida personal:
- Cuándo y cómo subir tarifas: señales del mercado y conversaciones con el cliente
- Diversificación de servicios: add-ons, productos físicos (álbumes, prints) y servicios digitales
- Educación y talleres: enseñar fotografía como fuente de ingresos y posicionamiento de experto
- Presets, plantillas y productos digitales: ingreso pasivo escalable para fotógrafos
- Transición de freelance a estudio: cuándo tiene sentido y cómo hacerlo con cabeza

Bienestar y sostenibilidad del negocio creativo
Mantén la motivación y evita el burnout:
- Cómo establecer límites saludables con los clientes
- Gestión de la crítica y el rechazo creativo
- Periodos de baja actividad: cómo usar la temporada baja para crecer
- Comunidad de fotógrafos: importancia del networking entre pares para el desarrollo profesional
- Medición del éxito más allá de los ingresos: satisfacción personal, reconocimiento y legado creativo

Crea un plan de acción personalizado para los próximos 6 meses con hitos semanales, adaptado a mi situación actual como fotógrafo freelance de [INDICAR ESPECIALIDAD] con [INDICAR TIEMPO EN EL SECTOR] de experiencia y un objetivo de facturación de [INDICAR OBJETIVO ANUAL].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Profesionalizar y escalar un negocio de fotografía freelance con estrategia de marca y captación de clientes',
                'vote_score'       => 47,
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
