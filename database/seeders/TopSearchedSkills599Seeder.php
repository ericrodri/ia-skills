<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills599Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital con IA para estudios de arquitectura y diseño',
                'description'      => 'Diseña estrategias de marketing digital con IA para atraer clientes a estudios de arquitectura e interiorismo, posicionarte como referente del sector y convertir seguidores en proyectos reales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital para el sector creativo, con especialización en estudios de arquitectura, diseño de interiores y promoción de servicios de alto valor para el mercado residencial y comercial. Necesito tu ayuda para diseñar una estrategia de marketing digital completa impulsada por inteligencia artificial para un estudio de arquitectura de tamaño mediano que quiere posicionarse en el segmento de vivienda de lujo y reformas de oficinas premium en Madrid.

Contexto del estudio:
El estudio tiene 8 arquitectos, fundado hace 12 años, con proyectos de referencia en el segmento residencial de alto standing y reformas de espacios corporativos. El portfolio incluye 3 proyectos publicados en revistas especializadas. El problema es que el 90% de los clientes llegan por referencias directas y el estudio no tiene estrategia digital estructurada. El sitio web está desactualizado, el Instagram tiene 2.400 seguidores con publicaciones irregulares y no hay presencia en Pinterest ni Houzz.

Estrategia de contenidos con IA para arquitectura de lujo:
Diseña el plan editorial de 12 meses. La IA debe ayudar a: identificar los temas que más buscan los clientes potenciales del segmento lujo en Google (reformas de vivienda de lujo Madrid, interiorismo para pisos en barrios premium, arquitectura sostenible, etc.), crear una biblioteca de contenidos que incluya los behind-the-scenes del proceso de diseño (desde la primera reunión hasta la entrega de llaves), los vídeos de visita virtual a proyectos terminados, los artículos de blog sobre tendencias en arquitectura de interiores y las infografías sobre procesos de reforma que generan confianza en los clientes. Define la frecuencia de publicación por plataforma: Instagram (stories diarias, posts 4 veces por semana), Pinterest (tableros por estilo y tipo de proyecto), Houzz (ficha completa con todos los proyectos), LinkedIn (artículos de opinión del director del estudio sobre tendencias del sector) y YouTube (vídeos de proceso de diseño de 5 a 10 minutos).

SEO local y captación de clientes con intención de contratar:
Describe la estrategia de posicionamiento en buscadores. La IA debe identificar las palabras clave con mayor intención de compra para el segmento objetivo (arquitecto para reforma de chalet en La Moraleja, estudio de interiorismo para apartamento en Salamanca, diseño de oficinas corporativas en Madrid), optimizar el Google Business Profile del estudio con fotos de proyectos, reseñas de clientes y servicios detallados, y crear una estrategia de contenidos del blog orientada a captar tráfico de propietarios en fase de investigación previa a la contratación. Define el sistema de seguimiento de leads que determina qué contenidos y canales generan los contactos de mayor calidad.

Estrategia de Instagram para estudios de arquitectura de lujo:
Diseña el sistema de creación de contenido visual de alto impacto. La IA debe ayudar a: planificar el feed de Instagram con una coherencia visual que transmita el estilo del estudio, generar los textos de cada publicación que cuentan la historia del proyecto y añaden valor educativo para el seguidor, identificar los hashtags más efectivos para el segmento de lujo en España, definir la estrategia de colaboraciones con otros profesionales del sector (fotógrafos de arquitectura, proveedores de materiales premium, promotores inmobiliarios), y optimizar las Instagram Stories para captar solicitudes de información de forma natural. Define las métricas de éxito: seguidores ganados por mes, tasa de engagement, número de solicitudes de información procedentes de Instagram.

Sistema de nutrición de leads y cierre de proyectos:
Propón el sistema de seguimiento de prospectos que convierte los contactos en contratos. Describe el flujo automatizado que la IA gestiona cuando un prospecto rellena el formulario de contacto del sitio web: la respuesta personalizada en menos de dos horas, la propuesta de reunión de consulta inicial gratuita con el director del estudio, la presentación de casos de uso similares al proyecto del prospecto, y el seguimiento a las 48 horas y 7 días para los prospectos que no han confirmado la reunión. Define también el dossier de presentación del estudio que la IA personaliza para cada tipo de proyecto (reforma residencial, oficinas corporativas, locales comerciales) con los proyectos de portfolio más relevantes para cada perfil.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de marketing digital con IA para estudios de arquitectura y diseño de interiores',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de flujos BIM con IA para estudios de arquitectura',
                'description'      => 'Usa la IA para automatizar tareas repetitivas en flujos de trabajo BIM, generar documentación técnica, detectar interferencias y optimizar el proceso de diseño arquitectónico.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto especializado en tecnología BIM (Building Information Modeling) y automatización de procesos de diseño arquitectónico con experiencia en la implementación de flujos de trabajo digitales avanzados en estudios de arquitectura. Necesito tu ayuda para diseñar un sistema de automatización de los procesos técnicos del estudio usando inteligencia artificial integrada con las herramientas BIM existentes.

Contexto técnico del estudio:
El estudio usa Revit como plataforma BIM principal, AutoCAD para detalles constructivos, SketchUp para visualizaciones conceptuales y Enscape para renders en tiempo real. El equipo de 8 técnicos dedica una parte importante de su tiempo a tareas repetitivas: actualización de tablas de cuantificación, generación de planos de ejecución, coordinación de modelos entre disciplinas y preparación de documentación para licencias de obras.

Automatización de documentación técnica con IA:
Diseña el sistema de generación automatizada de documentación. La IA debe integrarse con los modelos de Revit para: generar automáticamente las memorias descriptivas de los proyectos a partir de los parámetros del modelo BIM (superficies por estancia, materiales definidos, sistemas constructivos), actualizar las tablas de cuantificación de mediciones cuando el modelo se modifica, crear los planos de ejecución según los estándares del estudio con las capas, escalas y leyendas correctas de forma automatizada, y preparar los índices documentales para los expedientes de licencia de obras según los requisitos de cada ayuntamiento. Define cuántas horas semanales puede ahorrar cada automatización según el tipo y tamaño del proyecto.

Detección de interferencias y coordinación de modelos:
Describe cómo usar la IA para mejorar la coordinación entre disciplinas en proyectos complejos. El sistema debe procesar los modelos federados de arquitectura, estructura e instalaciones para: identificar automáticamente las interferencias entre sistemas (instalaciones que colisionan con la estructura, equipos de climatización sin espacio de mantenimiento), clasificar las interferencias por nivel de criticidad y generar informes estructurados para las reuniones de coordinación, proponer soluciones alternativas para las interferencias más comunes basándose en soluciones de proyectos anteriores del estudio, y actualizar el estado de cada interferencia en el sistema de seguimiento del proyecto. Define la integración con Navisworks o Revit Coordination para este proceso.

Generación de variantes de diseño con IA generativa:
Explica cómo incorporar la IA generativa en las fases conceptuales del diseño. Describe el uso de herramientas como Midjourney, Stable Diffusion o DALL-E para generar referencias visuales de acabados, disposiciones espaciales y conceptos de fachada, cómo usar modelos de IA específicos para arquitectura (como los basados en difusión entrenados con imágenes de arquitectura premiada) para explorar variantes de diseño de forma rápida, y cómo integrar el feedback del cliente sobre los renders conceptuales generados con IA para guiar las decisiones de diseño antes de invertir tiempo en el modelo BIM detallado. Define el flujo de trabajo que combina la exploración rápida con IA y el desarrollo técnico riguroso en BIM.

Optimización energética y de sostenibilidad con IA:
Describe cómo usar la IA para optimizar el comportamiento energético de los edificios en fase de diseño. La IA debe procesar los parámetros del modelo BIM (orientación, dimensiones de huecos, materiales de la envolvente, sistemas de climatización) para: simular el comportamiento energético del edificio antes de finalizar el proyecto, identificar las modificaciones de diseño que mayor impacto tienen en la eficiencia energética con el menor coste adicional de construcción, generar el certificado de eficiencia energética preliminar para incluir en la documentación del proyecto, y proponer alternativas de materiales sostenibles con sus respectivas huellas de carbono para las decisiones de especificación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatización de flujos BIM y documentación técnica con IA para arquitectos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interiores asistido por IA: del concepto al proyecto ejecutivo',
                'description'      => 'Usa la IA para acelerar todas las fases del proceso de diseño de interiores: generación de conceptos, selección de materiales, creación de mood boards, visualización 3D y presentación al cliente.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de interiores con experiencia en el uso de herramientas de IA generativa y software de diseño digital para acelerar el proceso creativo y mejorar la presentación de proyectos residenciales y comerciales. Necesito tu ayuda para diseñar un flujo de trabajo completo que integre la inteligencia artificial en todas las fases del proceso de diseño de interiores.

Contexto del proyecto:
Estamos diseñando el interiorismo de un apartamento de 95 metros cuadrados en Barcelona para una pareja joven de profesionales sin hijos. El cliente quiere un estilo contemporáneo con influencias escandinavas y mediterráneas, paleta de colores neutros con acentos en verde y terracota, materiales naturales (madera, piedra, lino), y un espacio de trabajo en casa integrado de forma discreta en el salón. El presupuesto de mobiliario y decoración es de 35.000 euros.

Fase 1 – Generación de concepto con IA:
Describe el proceso de creación del concepto de diseño. Usa Claude para desarrollar la narrativa conceptual del proyecto (la historia del espacio, las referencias culturales y estéticas, la experiencia que debe generar en sus habitantes) a partir del briefing del cliente. Describe cómo usar herramientas de IA de imagen como Midjourney con prompts específicos de arquitectura de interiores para generar las primeras referencias visuales del concepto, cómo usar Pinterest con búsquedas asistidas por IA para construir la biblioteca de referencias organizada por espacio (salón, cocina, dormitorio, baño, zona de trabajo), y cómo estructurar la presentación de concepto que el cliente aprueba antes de avanzar a las fases técnicas.

Fase 2 – Selección de materiales y paleta con IA:
Diseña el proceso de definición de la paleta de materiales. Describe cómo usar la IA para: generar combinaciones de materiales coherentes con el concepto aprobado (maderas, revestimientos, tejidos, metales, piedras) y visualizarlas juntas en un moodboard digital, analizar las fichas técnicas de los materiales preseleccionados para identificar posibles problemas de durabilidad, mantenimiento o compatibilidad con el uso previsto, comparar precios de los materiales preseleccionados entre distintos proveedores y ajustar la selección al presupuesto disponible, y generar las especificaciones técnicas de cada material (referencia exacta del proveedor, formato, acabado, cantidad necesaria) de forma automatizada a partir del modelo del proyecto.

Fase 3 – Visualización 3D y renders con IA:
Explica cómo integrar la IA en el proceso de visualización. Describe el flujo que va desde el modelo 3D en SketchUp o Blender hasta los renders fotorrealistas usando herramientas de IA como Stable Diffusion con img2img para mejorar los renders base, los plugins de renderizado con IA (Veras para Revit/SketchUp, DiffusionBee) para generar variantes de iluminación y acabados en minutos, y cómo usar estos renders generados con IA para obtener validación rápida del cliente antes de producir los renders finales de alta calidad. Define los prompts específicos más efectivos para arquitectura de interiores mediterráneo-escandinava en herramientas de imagen generativa.

Fase 4 – Documentación del proyecto ejecutivo con IA:
Describe cómo acelerar la producción del proyecto ejecutivo. La IA debe ayudar a generar: las memorias descriptivas de cada espacio con las especificaciones técnicas de todos los materiales y mobiliario, los planos de distribución de mobiliario y electricidad con las cotas necesarias para el instalador, las listas de compra ordenadas por proveedor con referencias exactas y cantidades, y los dossiers de presentación final al cliente con los renders, planos simplificados y el plan de obra. Define el tiempo estimado que cada automatización ahorra respecto al proceso manual anterior.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Flujo de trabajo de diseño de interiores asistido por IA desde el concepto al proyecto ejecutivo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de proyectos de arquitectura y reforma con IA: del lead al contrato',
                'description'      => 'Usa la IA para optimizar el proceso comercial de un estudio de arquitectura, desde la captación de clientes potenciales hasta el cierre del contrato de proyecto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de negocio y ventas para el sector de la arquitectura, el interiorismo y la construcción, con experiencia en la conversión de prospectos en clientes en un entorno de servicios de alto valor donde el proceso de decisión es largo y emocional. Necesito tu ayuda para diseñar el proceso de ventas completo de un estudio de arquitectura usando inteligencia artificial para mejorar la conversión en cada etapa del funnel.

Contexto comercial:
El estudio de arquitectura tiene una tasa de cierre del 15% (1 de cada 6 o 7 prospectos que hacen consulta inicial acaban contratando). Las razones de no cierre más frecuentes son: el precio percibido como alto sin una justificación clara del valor, la falta de referencias de proyectos similares al del prospecto, el proceso de contratación que se percibe como complicado o poco claro, y la competencia de estudios con precios más bajos aunque menor calidad.

Cualificación de prospectos con IA:
Diseña el sistema de cualificación inicial de los contactos entrantes. La IA debe analizar la información que el prospecto comparte en el primer contacto (tipo de proyecto, localización, plazo de ejecución, presupuesto indicado, cómo nos conoció) para asignarle una puntuación de cualificación y determinar el protocolo de seguimiento adecuado. Los prospectos de alta cualificación (presupuesto suficiente, proyecto dentro del expertise del estudio, urgencia real, cliente que llega por referencia directa) reciben una respuesta personalizada del director en menos de 2 horas. Los de cualificación media reciben una respuesta automatizada personalizada con información relevante para su tipo de proyecto y propuesta de reunión en los próximos 5 días. Define los criterios de descalificación que evitan invertir tiempo comercial en proyectos que el estudio no puede o no quiere ejecutar.

Preparación de presentaciones personalizadas con IA:
Describe cómo preparar la reunión de presentación del estudio usando la IA. Antes de cada reunión con un prospecto cualificado, la IA debe: preparar un dossier personalizado que selecciona automáticamente los 3 o 4 proyectos del portfolio más similares al del prospecto (por tipología, estilo, superficie y presupuesto), generar una propuesta de honorarios preliminar basada en el tipo y tamaño del proyecto con una explicación clara del valor entregado en cada fase, preparar las respuestas a las objeciones más comunes que el perfil de cliente suele plantear, y crear un plan preliminar de proceso de trabajo que desmitifica la complejidad del proceso de contratación de un arquitecto. Define el guión de la reunión de presentación que maximiza la probabilidad de cierre.

Seguimiento postreunión y cierre con IA:
Define el proceso de seguimiento hasta el cierre del contrato. Tras la reunión de presentación, la IA debe gestionar: el envío de la propuesta formal de honorarios en las 24 horas siguientes a la reunión con los materiales adicionales que el prospecto solicitó, el recordatorio personalizado a los 3 días si no hay respuesta, la llamada de seguimiento a los 7 días con la preparación de los argumentos específicos para los puntos de duda del prospecto, y la propuesta alternativa (reducción de alcance, pago fraccionado) para los prospectos que dudan por el precio. Define también el sistema de seguimiento de prospectos que no contratan en el momento pero pueden ser clientes en el futuro: el newsletter trimestral con proyectos terminados y artículos de valor, el contacto en momentos clave (el día que se anuncian ayudas a la rehabilitación, cuando salen noticias sobre el sector inmobiliario de su zona).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proceso comercial con IA para estudios de arquitectura: de la consulta al contrato',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de proyectos arquitectónicos con IA: planificación y control de obra',
                'description'      => 'Usa la IA para planificar, supervisar y controlar proyectos de arquitectura y obra: cronogramas, presupuestos, gestión de subcontratas y comunicación con clientes.',
                'prompt_content'   => <<<'EOT'
Eres un jefe de proyectos de arquitectura con experiencia en la gestión de obras de reforma residencial y construcción de obra nueva, especializado en el uso de tecnología para optimizar la planificación, el seguimiento y la comunicación en proyectos complejos con múltiples agentes involucrados. Necesito tu ayuda para diseñar el sistema de gestión de proyectos arquitectónicos usando inteligencia artificial para un estudio que gestiona simultáneamente 8 a 12 proyectos de diferentes tamaños y complejidades.

Contexto de gestión de proyectos:
El estudio ejecuta proyectos de reforma residencial (50.000 a 300.000 euros), diseño de oficinas (100.000 a 500.000 euros) y obra nueva de vivienda unifamiliar (300.000 a 1.500.000 euros). Los principales problemas actuales son: los retrasos en obra por falta de coordinación de subcontratas, los desvíos de presupuesto que no se detectan hasta que ya son difíciles de recuperar, y la comunicación con los clientes que requiere mucho tiempo y genera malentendidos.

Planificación de proyectos con IA:
Diseña el sistema de planificación inicial de proyectos. Al inicio de cada proyecto, la IA debe: generar el cronograma de obra completo basándose en el tipo y tamaño del proyecto (con los hitos clave para cada fase: derribo, estructura, instalaciones, cerramientos, acabados, equipamiento), identificar las dependencias críticas entre tareas (qué trabajos no pueden empezar hasta que otros estén terminados), estimar los períodos de mayor riesgo de retraso según el historial de proyectos similares del estudio, y proponer los colchones de tiempo recomendados en cada fase según la complejidad del proyecto. Define cómo integrar este cronograma con herramientas como Asana, Monday.com o Microsoft Project.

Control económico con IA:
Describe el sistema de seguimiento del presupuesto de obra. La IA debe: procesar las facturas de los proveedores y subcontratas para actualizar automáticamente el estado del presupuesto por partida, detectar las partidas donde el gasto real se desvía de lo presupuestado más de un umbral definido (por ejemplo, 10%) y generar alertas para el jefe de proyecto, analizar las causas más frecuentes de desviación económica en los proyectos del estudio para proponer mejoras en la elaboración de futuros presupuestos, y generar el informe económico mensual por proyecto que el cliente puede consultar (si se ha acordado esa transparencia) o que el director del estudio revisa internamente.

Coordinación de subcontratas con IA:
Define el sistema de gestión de los gremios y subcontratistas. La IA debe ayudar a: planificar las visitas de obra de cada gremio para evitar solapamientos ineficientes, generar los partes de trabajo diarios que los encargados de obra cumplimentan en la obra y que la IA procesa para actualizar el avance del proyecto, identificar los proveedores con mejor historial de cumplimiento de plazos y calidad para los proyectos futuros, y gestionar las incidencias de obra (materiales no conformes, imprevistos estructurales, problemas de acceso) con un registro documentado y el análisis del impacto en el cronograma y el presupuesto.

Comunicación con clientes durante la obra:
Diseña el sistema de informes periódicos a los clientes. La IA debe generar semanalmente un informe de avance de obra adaptado al perfil del cliente (más técnico para los clientes con experiencia en construcción, más visual y narrativo para los que no tienen conocimientos técnicos) con fotografías del progreso, estado del cronograma y del presupuesto, próximas decisiones que el cliente debe tomar y cualquier incidencia relevante. Define el sistema de validación de decisiones de cliente que documenta por escrito cada cambio sobre el proyecto original, con el impacto en coste y plazo claramente especificado, para evitar malentendidos y disputas al final de la obra.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de gestión y control de proyectos de arquitectura con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento creativo en estudios de arquitectura con IA',
                'description'      => 'Usa la IA para reclutar, desarrollar y retener talento en estudios de arquitectura e interiorismo, gestionando las particularidades de los equipos creativos y técnicos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos para el sector creativo con experiencia en la gestión de talento en estudios de arquitectura, empresas de diseño y consultoras creativas, donde la combinación de habilidades técnicas, sensibilidad estética y capacidad de gestión de clientes es especialmente compleja de encontrar y retener. Necesito tu ayuda para diseñar el sistema de gestión del talento de un estudio de arquitectura en crecimiento usando inteligencia artificial.

Contexto del estudio:
El estudio tiene 8 profesionales (4 arquitectos, 2 aparejadores, 1 diseñador de interiores y 1 administrativo), está en proceso de crecimiento para alcanzar los 15 profesionales en los próximos dos años. Los principales desafíos de RRHH son: la dificultad para encontrar candidatos con la combinación correcta de habilidades técnicas BIM y sensibilidad estética, la retención de los arquitectos junior que se van a estudios internacionales tras 2 a 3 años de formación, y la gestión de la carga de trabajo irregular que caracteriza la profesión.

Reclutamiento de talento creativo-técnico con IA:
Diseña el proceso de selección para el sector de la arquitectura. La IA debe: analizar los portfolios de los candidatos para evaluar la calidad del trabajo presentado, la coherencia estética, la complejidad técnica de los proyectos y la evolución del candidato, generar preguntas de entrevista personalizadas basadas en el portfolio de cada candidato que exploran sus decisiones de diseño y su proceso creativo, comparar los portfolios de los candidatos finalistas con el estilo y las tipologías de proyectos del estudio para identificar el mejor encaje cultural, y redactar las ofertas de empleo para plataformas especializadas como Infojobs Arquitectura, Archilovers Jobs o LinkedIn con el tono y los requisitos que atraen a los perfiles más cualificados del mercado.

Evaluación del desempeño en entornos creativos:
Describe el sistema de evaluación adaptado al sector de la arquitectura. La IA debe diseñar un sistema de evaluación que equilibre: la calidad técnica (rigor en la documentación, dominio de las herramientas BIM, cumplimiento de los estándares del estudio), la contribución creativa (aportación de ideas en las fases conceptuales, capacidad de evolucionar el diseño en respuesta al feedback del cliente), las habilidades relacionales (comunicación con clientes, coordinación con subcontratas, trabajo en equipo), y la autonomía y gestión del tiempo (capacidad para gestionar varios proyectos simultáneamente sin supervisión constante). Define las conversaciones de feedback trimestral que el director del estudio tiene con cada profesional para reforzar el desarrollo individual.

Desarrollo profesional y retención con IA:
Propón el programa de desarrollo que reduce la rotación en el estudio. La IA debe ayudar a: identificar las aspiraciones profesionales de cada miembro del equipo (especialización en tipologías concretas, desarrollo de habilidades de gestión, internacionalización) y alinearlas con los proyectos del estudio, crear planes de desarrollo individual con formaciones específicas (cursos BIM avanzado, formación en materiales sostenibles, habilidades de presentación a clientes), diseñar el sistema de carrera interno que ofrece un camino claro de progresión desde arquitecto junior hasta responsable de proyecto y socio, y proponer el paquete de retención (salario, beneficios, flexibilidad, participación en proyectos de referencia) ajustado al mercado del sector en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de talento y RRHH en estudios de arquitectura con IA',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control de costes y presupuestación de obras con IA para arquitectos',
                'description'      => 'Usa la IA para elaborar presupuestos de obra precisos, controlar las desviaciones económicas durante la ejecución y optimizar la rentabilidad de los proyectos arquitectónicos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en economía de la construcción y gestión económica de proyectos arquitectónicos con experiencia en la elaboración de presupuestos de obra, control de costes durante la ejecución y análisis de rentabilidad de proyectos para estudios de arquitectura y promotoras inmobiliarias. Necesito tu ayuda para diseñar el sistema de gestión económica de proyectos usando inteligencia artificial.

Contexto económico del estudio:
El estudio factura 1,2 millones de euros anuales con proyectos de un coste de obra que van desde los 80.000 hasta los 1.500.000 euros. El margen bruto objetivo es del 35% sobre honorarios. Los principales problemas financieros son: los presupuestos de honorarios que se quedan cortos en los proyectos más complejos porque se subestima el tiempo de trabajo, los proyectos donde el cliente pide cambios constantes que no están siendo cobrados correctamente, y la dificultad para estimar los honorarios de fases futuras en proyectos cuyo alcance no está bien definido al inicio.

Elaboración de presupuestos de obra con IA:
Diseña el proceso de presupuestación asistida por IA. La IA debe ayudar a: generar mediciones automáticas a partir del modelo BIM para las partidas de mayor peso económico (estructura, cerramientos, instalaciones, acabados), consultar las bases de datos de precios unitarios actualizadas (BEDEC, generadores de precios de Cype, precios de mercado de proveedores habituales) para componer el presupuesto por partidas, identificar las partidas donde la variabilidad de precios es mayor y recomendar los márgenes de contingencia adecuados, y comparar el presupuesto elaborado con los costes reales de proyectos similares del estudio para detectar partidas que habitualmente se quedan cortas. Define el tiempo que cada componente de automatización ahorra respecto al proceso manual.

Control de honorarios y rentabilidad del estudio:
Describe el sistema de seguimiento de la rentabilidad de cada proyecto. La IA debe: registrar automáticamente las horas dedicadas por cada miembro del equipo a cada proyecto (integrado con la herramienta de control horario del estudio), calcular el coste interno de cada hora según el salario del profesional y los costes indirectos del estudio, comparar el coste interno acumulado con los honorarios facturados para mostrar el margen real en tiempo real, e identificar los proyectos que están consumiendo más horas de las previstas y los motivos (cambios del cliente, complejidad inesperada, ineficiencias del equipo). Define las alertas que notifican al director cuando un proyecto supera el 80% de las horas presupuestadas sin haber facturado el porcentaje equivalente.

Gestión de cambios y servicios adicionales:
Propón el sistema de gestión económica de los cambios durante la obra. La IA debe ayudar a: identificar qué solicitudes del cliente representan cambios sobre el proyecto original contratado que generan honorarios adicionales, generar de forma automatizada los presupuestos adicionales de cada cambio con el desglose de horas y costes de proyecto adicionales, hacer seguimiento de los cambios pendientes de aprobación económica que bloquean la ejecución, y calcular el impacto acumulado de todos los cambios aprobados sobre el presupuesto y los honorarios totales del proyecto. Define la comunicación con el cliente que acompaña cada propuesta de cambio para minimizar la resistencia al coste adicional.

Análisis de rentabilidad y mejora continua:
Define el sistema de análisis económico anual del estudio. La IA debe generar el informe anual de rentabilidad que analiza: los proyectos más y menos rentables del año con las razones de la variación respecto al presupuesto, los tipos de proyecto donde el estudio es más eficiente y donde consistentemente pierde margen, la evolución de la productividad por profesional, y las propuestas de mejora para el siguiente año (tipos de proyecto donde especializar el estudio, tarifas que ajustar, procesos que automatizar para reducir costes internos).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Presupuestación y control económico de proyectos de arquitectura con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal de proyectos arquitectónicos con IA: contratos y licencias',
                'description'      => 'Usa la IA para gestionar los aspectos legales de los proyectos arquitectónicos: contratos con clientes, tramitación de licencias, responsabilidad profesional y gestión de reclamaciones.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de la construcción y ordenación del territorio con experiencia en la asesoría legal de estudios de arquitectura, promotoras inmobiliarias y constructoras en España. Necesito tu ayuda para diseñar el sistema de gestión legal de los proyectos arquitectónicos usando inteligencia artificial para un estudio que quiere reducir su exposición a riesgos legales y mejorar la gestión de sus contratos y licencias.

Contexto legal del estudio:
El estudio tiene una media de 3 a 4 litigios activos por año, principalmente relacionados con reclamaciones de honorarios impagados y disputas con clientes sobre el alcance de los servicios contratados. El proceso de tramitación de licencias es lento y genera retrasos en los proyectos que los clientes atribuyen al estudio. Los contratos de encargo profesional son documentos genéricos que no están suficientemente adaptados a cada tipo de proyecto.

Contratos de encargo profesional con IA:
Diseña el sistema de redacción y gestión de contratos. La IA debe ayudar a: generar contratos de encargo profesional adaptados a cada tipo de proyecto (reforma residencial, diseño de interiores, obra nueva, supervisión de obra), con las cláusulas específicas que protegen al estudio en los escenarios de mayor riesgo (cambios de alcance, paralizaciones del cliente, impagos, vicios ocultos que aparecen durante la obra), revisar los contratos propuestos por los clientes corporativos para identificar las cláusulas desfavorables para el estudio (limitaciones de responsabilidad excesivas, penalizaciones por retrasos sobre los que el estudio no tiene control, cesión de derechos de propiedad intelectual sobre el proyecto), y adaptar el lenguaje de los contratos según el perfil del cliente (más técnico y detallado para los clientes corporativos, más claro y explicado para los particulares).

Tramitación de licencias y gestión de plazos:
Describe el sistema de seguimiento de expedientes administrativos. La IA debe: mapear los requisitos documentales de cada tipo de licencia en los ayuntamientos donde el estudio trabaja habitualmente (licencias de obra mayor y menor en Madrid, Barcelona, Valencia y otras ciudades), generar las listas de verificación de documentación para cada solicitud de licencia y detectar las carencias antes de presentar el expediente, hacer seguimiento automatizado del estado de cada expediente en tramitación con alertas cuando se acercan los plazos de respuesta de la administración o cuando la administración requiere documentación adicional, y generar las comunicaciones con los ayuntamientos para las subsanaciones de deficiencias de forma estandarizada y eficiente.

Gestión de la responsabilidad profesional con IA:
Define el sistema de documentación que protege al estudio ante posibles reclamaciones. La IA debe ayudar a: mantener un registro completo de todas las decisiones técnicas relevantes con su justificación, los cambios solicitados por el cliente con su aprobación escrita, y las advertencias formales sobre riesgos que el cliente decidió asumir, generar automáticamente los informes de visita de obra con las observaciones del director de obra, los defectos detectados y las instrucciones dadas a la constructora, y preparar el expediente completo de cada proyecto terminado (proyecto técnico visado, certificado final de obra, garantías de los materiales y equipos instalados) que minimiza el riesgo de reclamaciones futuras.

Gestión de reclamaciones y honorarios impagados:
Describe el protocolo de gestión de conflictos con clientes. La IA debe: detectar los clientes con riesgo de impago basándose en el historial de retrasos en los pagos parciales, generar las reclamaciones de honorarios por las vías extrajudiciales progresivas (burofax de reclamación, mediación, requerimiento notarial) con la documentación de soporte necesaria, preparar el expediente para la reclamación judicial de honorarios cuando las vías extrajudiciales fracasan, y analizar las reclamaciones recibidas de clientes para identificar si tienen fundamento técnico o jurídico y preparar la respuesta más adecuada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestión legal de contratos y licencias en arquitectura con IA',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en proyectos de arquitectura con IA: comunicación y gestión de expectativas',
                'description'      => 'Usa la IA para diseñar el sistema de comunicación con clientes durante proyectos de arquitectura y reforma, gestionando expectativas, resolviendo dudas y evitando conflictos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del cliente y gestión de la comunicación en proyectos de arquitectura y reforma, con experiencia en el diseño de sistemas de atención al cliente para estudios de arquitectura que mejoran la satisfacción del cliente, reducen los conflictos y generan referencias activas. Necesito tu ayuda para diseñar el sistema completo de comunicación con clientes usando inteligencia artificial para un estudio de interiorismo y reforma.

Contexto del estudio de interiorismo:
El estudio gestiona 15 a 20 proyectos de reforma residencial simultáneamente. Los clientes son particulares que están reformando su vivienda habitual (proceso muy estresante para ellos). Los principales problemas de comunicación son: los clientes que llaman o escriben con mucha frecuencia buscando actualizaciones que el equipo no puede dar en tiempo real, las expectativas mal calibradas sobre plazos y sobre el nivel de acabado, y los malentendidos sobre qué cambios son de coste cero y cuáles tienen un coste adicional.

Onboarding del cliente con IA:
Diseña el proceso de bienvenida e introducción al proyecto. Al firmar el contrato, la IA debe generar: el dossier de bienvenida personalizado para cada cliente con el cronograma visual de su proyecto, los hitos principales con las fechas previstas, la explicación del proceso de toma de decisiones y los momentos en que el cliente necesitará estar disponible, los canales de comunicación del estudio (quién es el interlocutor principal del cliente, a través de qué canal, en qué horarios y con qué tiempos de respuesta esperados), y el glosario de términos del proyecto (qué es un cambio de alcance, qué es una partida de imprevistos, qué significa que una partida está en garantía). Define cómo la IA personaliza cada elemento según el perfil del cliente y las características específicas de su proyecto.

Informes semanales automáticos con IA:
Describe el sistema de comunicación proactiva durante la obra. Cada viernes, la IA debe generar para cada proyecto activo: un informe de avance con fotografías del estado actual de la obra organizadas por espacio, el porcentaje de avance respecto al cronograma previsto, el estado actualizado del presupuesto, las próximas tareas de la semana siguiente, y las decisiones que el cliente debe tomar antes de una fecha concreta. El informe debe estar redactado en un lenguaje claro y positivo, adaptado al nivel técnico de cada cliente, y enviarse por el canal preferido del cliente (email, WhatsApp Business, app del estudio). Define cómo el cliente puede hacer preguntas sobre el informe directamente en el sistema y cómo la IA gestiona las respuestas rutinarias sin necesitar intervención del equipo técnico.

Gestión de incidencias y cambios con IA:
Define el protocolo de comunicación cuando surgen problemas en la obra. La IA debe ayudar al equipo a: describir la incidencia al cliente de forma clara sin generar alarma innecesaria (explicando qué ha pasado, por qué, cuál es la solución propuesta y cuál es el impacto en el plazo y el presupuesto), generar la propuesta de cambio con el desglose económico y temporal de la modificación solicitada por el cliente para que la aprobación quede documentada por escrito, y enviar el resumen mensual de todos los cambios aprobados sobre el proyecto original con el impacto acumulado en el presupuesto y el plazo para evitar sorpresas al final de la obra.

Encuestas de satisfacción y generación de referencias:
Diseña el sistema de medición de satisfacción y captación de recomendaciones. Al finalizar cada proyecto, la IA debe: enviar la encuesta de satisfacción personalizada con preguntas adaptadas al tipo de proyecto y a las incidencias que se produjeron durante la obra, analizar los resultados y generar un informe interno para el equipo con los puntos de mejora identificados, y para los clientes con alta satisfacción, enviar la invitación a dejar una reseña en Google o Houzz y la solicitud de referencia activa (si conoces a alguien que esté pensando en reformar, nos encantaría que nos lo presentaras). Define el protocolo para los clientes que expresan insatisfacción en la encuesta: la llamada personal del director del estudio en las 48 horas siguientes para entender el problema y ofrecer una solución antes de que el cliente publique una reseña negativa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de comunicación y gestión de expectativas de clientes en proyectos de arquitectura con IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Arquitecto y diseñador freelance con IA: gestión de negocio y proyectos',
                'description'      => 'Usa la IA para gestionar todos los aspectos del negocio como arquitecto o diseñador de interiores independiente: captación de clientes, presupuestos, gestión de proyectos y administración.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocio especializado en profesionales independientes del sector creativo, con experiencia ayudando a arquitectos, diseñadores de interiores e interioristas freelance a construir negocios sostenibles y rentables sin los recursos de un estudio grande. Necesito tu ayuda para diseñar el sistema de gestión completa del negocio freelance de un arquitecto usando inteligencia artificial para automatizar las tareas administrativas y comerciales y enfocarse en el trabajo creativo.

Contexto del arquitecto freelance:
Arquitecto con 8 años de experiencia en estudios de reconocido prestigio, acaba de lanzarse como freelance. Tiene experiencia técnica excelente pero nunca ha gestionado su propio negocio. Sus desafíos inmediatos son: definir su propuesta de valor y posicionamiento en el mercado, establecer sus tarifas, crear los contratos y documentos necesarios para operar de forma profesional, y construir una cartera de clientes desde cero. Tiene ahorros para cubrir 8 meses sin ingresos.

Posicionamiento y propuesta de valor con IA:
Diseña el proceso de definición del nicho de especialización. La IA debe ayudar a: analizar las tipologías de proyectos en que el arquitecto tiene mayor experiencia y pasión, identificar los segmentos del mercado donde esa especialización tiene mayor demanda y menor competencia (reformas de locales gastronómicos, diseño de espacios de coworking, rehabilitación de edificios históricos para uso residencial, interiorismo para hoteles boutique), definir la propuesta de valor diferencial respecto a los estudios de arquitectura generalistas (mayor agilidad, precio ajustado al no tener estructura, especialización profunda en la tipología, acceso directo al responsable del proyecto), y crear el posicionamiento de marca personal que se reflejará en el portfolio, el sitio web y las redes sociales.

Sistema de presupuestación y tarifas con IA:
Describe cómo establecer y gestionar las tarifas. La IA debe ayudar a: calcular el coste por hora necesario para alcanzar los objetivos de ingresos del primer año (teniendo en cuenta las horas facturables reales, los impuestos como autónomo, los gastos de software y seguros de responsabilidad profesional), definir la estructura de honorarios más adecuada según el tipo de proyecto (porcentaje sobre el coste de obra, tarifa por fase, retainer mensual para servicios de consultoría recurrente), crear las plantillas de presupuesto que generan propuestas económicas profesionales en menos de una hora, y generar argumentarios de valor que justifiquen las tarifas ante clientes que comparan precio con alternativas más baratas.

Captación de primeros clientes con IA:
Define la estrategia de construcción de cartera de clientes desde cero. La IA debe ayudar a: reactivar el contacto con los 50 contactos profesionales más relevantes del network actual con mensajes personalizados que explican el nuevo proyecto profesional y solicitan reuniones o referencias, crear la estrategia de contenidos en LinkedIn que posiciona al freelance como experto en su especialidad en los primeros 90 días, identificar las comunidades online y eventos presenciales donde se encuentran los clientes objetivo para tener presencia activa, y preparar el portfolio digital en Behance o con un sitio web propio que transmite la propuesta de valor de forma convincente con los mejores proyectos de la etapa en estudios (con el permiso adecuado para publicarlos).

Administración y gestión del negocio con IA:
Propón el sistema de gestión administrativa del negocio freelance. La IA debe ayudar a: gestionar el control de tiempos por proyecto para asegurar que las horas dedicadas corresponden a los honorarios facturados, generar automáticamente las facturas a partir de los presupuestos aprobados y hacer seguimiento de los pagos pendientes, preparar los documentos de seguimiento de cada proyecto (actas de reunión, aprobaciones de fase, registro de cambios), y generar los informes trimestrales de rentabilidad por proyecto que permiten identificar qué tipos de cliente y proyecto son más rentables para concentrar el esfuerzo comercial en el segundo año del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestión integral del negocio freelance de arquitectura y diseño con IA',
                'vote_score'       => 43,
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
