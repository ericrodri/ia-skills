<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills559Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenidos para empresas constructoras con IA',
                'description'      => 'Crea una estrategia de contenidos orientada a captar clientes para proyectos de construcción e ingeniería civil usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de contenidos especializado en el sector de la construcción e ingeniería civil. Tu misión es ayudarme a diseñar una estrategia de contenidos completa y efectiva que posicione a mi empresa constructora como referente del sector, atraiga a clientes potenciales y genere leads cualificados.

Contexto de la empresa:
- Empresa constructora mediana con 15 años de experiencia en el mercado español
- Especializada en obra civil, edificación residencial y proyectos de infraestructura
- Cartera de clientes: promotores inmobiliarios, administraciones públicas y particulares
- Equipo técnico de 80 personas entre ingenieros, arquitectos y operarios
- Presencia digital limitada actualmente

Tarea principal que necesito que realices:

1. Análisis del público objetivo: Define con detalle los tres perfiles de cliente ideal (buyer personas) para una empresa constructora. Para cada perfil incluye: cargo, responsabilidades, puntos de dolor, objetivos profesionales, canales digitales que utiliza y tipo de contenido que consume. Añade también qué preguntas se hace cada perfil antes de contratar una constructora.

2. Calendario editorial trimestral: Diseña un calendario de contenidos para 12 semanas con al menos 3 publicaciones semanales en diferentes formatos. Para cada semana especifica: tema principal alineado con el ciclo de ventas de la construcción, formato recomendado (artículo de blog, vídeo, infografía, caso de estudio, webinar), red social o canal de distribución, y objetivo de conversión esperado.

3. Temas de contenido estrella: Propón 20 temas de contenido de alto valor para el sector de la construcción. Clasifícalos por etapa del funnel (conciencia, consideración, decisión) e incluye para cada uno el título SEO optimizado, la intención de búsqueda del usuario y el formato de contenido más adecuado.

4. Estrategia para LinkedIn: La mayoría de los decisores en construcción están en LinkedIn. Diseña una estrategia específica para esta plataforma que incluya: frecuencia de publicación óptima, tipos de post que generan más engagement en el sector (casos de éxito, avances de obra, opinión técnica, datos del sector), estructura de los posts para máximo alcance orgánico y cómo usar los artículos nativos de LinkedIn para posicionamiento de autoridad.

5. Contenido para etapa de decisión: Crea plantillas para tres tipos de contenido que ayuden a cerrar ventas: (a) caso de estudio de proyecto completado exitosamente, (b) guía comparativa para elegir constructora, (c) lista de verificación para evaluar ofertas de construcción.

6. Métricas y KPIs: Define los indicadores clave de rendimiento para cada tipo de contenido y canal. Incluye objetivos realistas para los primeros 6 meses considerando que partimos de cero.

7. Plan de distribución y amplificación: Explica cómo distribuir cada pieza de contenido en múltiples canales para maximizar su alcance sin generar contenido adicional. Incluye estrategia de email marketing, colaboraciones con medios del sector y sindicación de contenido.

Formato de respuesta: Organiza todo de forma clara con secciones numeradas, tablas donde corresponda y ejemplos concretos adaptados al sector de la construcción en España. El tono debe ser profesional pero accesible, orientado a resultados de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de contenidos para atraer clientes a empresa constructora',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de documentación técnica de obras con IA',
                'description'      => 'Genera y estructura documentación técnica de proyectos de construcción de forma automatizada usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software experto en automatización de procesos para el sector de la construcción e ingeniería civil. Necesito que me ayudes a diseñar e implementar un sistema de automatización para la generación de documentación técnica de obras.

Contexto del proyecto:
- Empresa constructora con más de 50 proyectos activos simultáneamente
- Actualmente la documentación técnica se genera manualmente, lo que consume entre 20 y 30 horas por proyecto
- Documentación necesaria: memorias de proyecto, informes de avance semanal, actas de reunión, certificaciones de obra, informes de calidad e informes de seguridad
- El equipo técnico usa herramientas como AutoCAD, Revit, Microsoft Project y hojas Excel para seguimiento
- Se necesita integración con el sistema ERP existente

Objetivo: Crear un sistema de automatización que reduzca el tiempo de generación de documentación en un 70%, mantenga los estándares de calidad técnica exigidos y garantice la trazabilidad de toda la información.

Tareas que debes completar:

1. Arquitectura del sistema de automatización: Diseña la arquitectura técnica del sistema. Incluye: (a) Diagrama de flujo del proceso actual vs. proceso automatizado, (b) Stack tecnológico recomendado con justificación de cada elección, (c) APIs e integraciones necesarias con herramientas existentes de construcción, (d) Estructura de base de datos para almacenar plantillas y documentos generados, (e) Sistema de control de versiones específico para documentación técnica.

2. Plantillas inteligentes: Diseña el sistema de plantillas dinámicas para los cinco tipos de documento más críticos. Para cada plantilla especifica: variables dinámicas que se alimentan automáticamente desde el ERP, secciones condicionales que aparecen según el tipo de obra, validaciones automáticas de datos técnicos, formato de exportación (Word, PDF, BIM) y flujo de aprobación digital.

3. Integración con BIM: Explica cómo extraer automáticamente datos desde modelos BIM (Revit/IFC) para alimentar la documentación. Incluye código de ejemplo en Python o C# para parsear archivos IFC y extraer metadatos relevantes como materiales, mediciones, especificaciones técnicas y modelo 3D embebido.

4. Pipeline de generación con IA: Describe el flujo técnico completo desde que el jefe de obra introduce datos básicos hasta que se genera el documento final. Incluye: procesamiento de lenguaje natural para generar textos descriptivos técnicos, validación automática de coherencia entre datos, generación de gráficos y tablas desde datos estructurados y sistema de revisión asistida por IA.

5. Código de implementación: Proporciona código funcional en Python para: (a) parser de datos desde Excel de seguimiento de obras, (b) generador de informe de avance semanal usando plantilla Jinja2, (c) función de validación de datos técnicos, (d) exportador a PDF con firma digital integrada.

6. Testing y control de calidad: Define la estrategia de pruebas para garantizar que los documentos generados cumplen con la normativa técnica española (CTE, EHE, etc.). Incluye casos de prueba específicos y criterios de aceptación.

7. Plan de implementación por fases: Propón un roadmap de implementación en 4 fases durante 6 meses, con hitos medibles y criterios de éxito para cada fase.

Responde con código comentado, diagramas en texto (ASCII o Mermaid) y explicaciones técnicas detalladas. Todos los ejemplos deben ser aplicables directamente al sector de la construcción en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Sistema de automatización de documentación técnica para obras de construcción',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de presentaciones de proyectos de arquitectura con IA',
                'description'      => 'Crea presentaciones visuales impactantes para proyectos de construcción y arquitectura usando inteligencia artificial como asistente creativo.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador experto en comunicación visual para el sector de la arquitectura y la construcción. Tu especialidad es crear presentaciones que transmiten la esencia de un proyecto arquitectónico de forma clara, impactante y convincente para diferentes audiencias: clientes promotores, comités de licitación, inversores inmobiliarios y organismos públicos.

Contexto del proyecto a presentar:
- Tipo de proyecto: Complejo residencial de 120 viviendas de uso mixto con local comercial en planta baja
- Ubicación: Periferia urbana de una ciudad mediana española
- Superficie total construida: 18.000 m²
- Características destacadas: certificación energética A, zonas comunes bioclimáticas, huerta comunitaria y parking subterráneo con puntos de recarga eléctrica
- Audiencia de la presentación: Comité de licitación de un ayuntamiento
- Duración de la presentación: 20 minutos más 10 de preguntas

Tarea completa que debes desarrollar:

1. Estructura narrativa de la presentación: Diseña el guión completo de la presentación dividido en diapositivas. Para cada diapositiva especifica: número y título, contenido principal, tipo de visual recomendado (render, infografía, tabla, foto), mensaje clave que debe quedarse el jurado y tiempo estimado de exposición. La narrativa debe seguir la estructura: problema del municipio → solución propuesta → beneficios concretos → prueba de capacidad → llamada a la acción.

2. Diseño visual y paleta: Propón un sistema visual coherente para toda la presentación. Incluye: paleta de colores primaria y secundaria con códigos hexadecimales que transmitan profesionalidad y sostenibilidad, tipografías recomendadas para títulos y cuerpo de texto, sistema de iconografía para el sector de la construcción, grid layout para las diapositivas y guía de uso de renders e imágenes.

3. Infografías técnicas: Describe con detalle 5 infografías clave que deberían incluirse: (a) comparativa de eficiencia energética versus estándar del mercado, (b) cronograma visual del proyecto por fases, (c) distribución de usos del edificio en sección, (d) impacto económico en la zona con datos cuantificados, (e) ficha técnica del proyecto con los datos más relevantes. Para cada una indica los datos que debe mostrar y cómo visualizarlos.

4. Copywriting de las diapositivas: Redacta el texto exacto que aparecería en las 15 diapositivas principales. Para cada una: título llamativo de máximo 8 palabras, subtítulo de apoyo, cuerpo de texto de 2-3 puntos concisos y pie de nota para el orador. Los textos deben usar lenguaje técnico preciso pero comprensible para perfiles no técnicos del jurado.

5. Materiales complementarios: Diseña el índice y estructura de los documentos que se entregarán junto con la presentación: (a) dossier técnico de 8 páginas, (b) ficha resumen de 1 página para el expediente, (c) presentación ejecutiva de 5 diapositivas para decisores que no asistirán a la presentación.

6. Preparación para preguntas difíciles: Anticipa las 10 preguntas más probables del comité y proporciona respuestas concisas, acompañadas de la diapositiva de respaldo que se mostraría en cada caso.

7. Versión digital interactiva: Describe cómo transformar esta presentación en un documento digital interactivo (PDF navegable o web) para el seguimiento posterior a la presentación.

Adapta todo el contenido al contexto español de licitaciones públicas, citando normativa relevante (LCSP, CTE) cuando corresponda. El estilo debe ser austero, técnico y convincente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Presentaciones impactantes para licitaciones y clientes en arquitectura',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Propuestas comerciales para licitaciones de construcción con IA',
                'description'      => 'Redacta propuestas comerciales persuasivas y completas para licitaciones públicas y privadas en el sector de la construcción.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B y redacción de propuestas comerciales para el sector de la construcción e ingeniería civil. Tu especialidad es crear propuestas que ganan licitaciones tanto públicas como privadas, combinando rigor técnico con argumentación comercial convincente.

Información del contexto comercial:
- Mi empresa: constructora con 20 años de experiencia, facturación anual de 15 millones de euros
- Licitación objetivo: rehabilitación integral de un edificio de oficinas de 5.000 m² para una empresa del IBEX 35
- Presupuesto estimado del cliente: entre 2 y 3 millones de euros
- Competidores conocidos: otras dos constructoras medianas y una grande de ámbito nacional
- Fortaleza diferencial: especialización en rehabilitación con mínima afectación a la actividad del edificio
- Fecha de entrega de la propuesta: en 10 días laborables

Desarrolla completamente los siguientes elementos:

1. Análisis estratégico previo: Antes de redactar, analiza la situación competitiva. Identifica: los criterios de evaluación más probables en una licitación privada de este tipo, los argumentos de compra que más pesan para el director de operaciones de una gran empresa (que es quien toma la decisión), los puntos de dolor que tiene al contratar una rehabilitación con el edificio en uso, y cómo posicionar mi empresa para ganar frente a una constructora grande que compite con precio.

2. Estructura de la propuesta ganadora: Diseña el índice completo de la propuesta con justificación de cada sección. La propuesta debe tener entre 30 y 40 páginas e incluir: carta de presentación personalizada, resumen ejecutivo de 2 páginas, comprensión del proyecto y necesidades del cliente, metodología de trabajo con el edificio en uso, propuesta técnica detallada por fases, gestión de riesgos y plan de contingencias, equipo de proyecto con currículums abreviados, casos de éxito similares, propuesta económica con desgloses, condiciones comerciales y anexos técnicos.

3. Carta de presentación: Redacta la carta de presentación completa. Debe ser personal, mostrar conocimiento del cliente, destacar el diferencial más relevante y generar urgencia por reunirse. Extensión: una página. Tono: profesional pero cálido.

4. Resumen ejecutivo: Escribe el resumen ejecutivo de dos páginas que capture la esencia de la propuesta. Debe poder leerse independientemente y convencer por sí solo a un directivo que no leerá el resto del documento. Incluye: comprensión del reto, solución propuesta, tres beneficios cuantificados, garantías ofrecidas y siguiente paso recomendado.

5. Sección de metodología: Desarrolla la sección más diferenciadora: la metodología de trabajo con el edificio en uso. Detalla el plan de fases que minimiza las interrupciones, el protocolo de comunicación semanal con el cliente, las medidas de seguridad específicas para entornos de oficina activa, el sistema de control de calidad en tiempo real y las garantías de cumplimiento de plazos.

6. Argumentario de objeciones: Prepara respuestas a las 8 objeciones más frecuentes que planteará el cliente: precio más alto que la competencia, tiempo de obra más largo de lo esperado, preocupación por el ruido y suciedad, dudas sobre la experiencia en edificios similares, riesgo de incumplimiento de plazos, solicitud de mayor descuento, preferencia por la constructora grande conocida y preguntas sobre solvencia financiera.

7. Seguimiento post-entrega: Diseña el plan de seguimiento comercial para los 15 días tras entregar la propuesta: qué contactos hacer, cuándo hacerlos, qué materiales adicionales ofrecer y cómo manejar el silencio del cliente.

Todo el contenido debe estar listo para copiar y adaptar. Usa un tono profesional, orientado a resultados económicos y operativos del cliente, no a características técnicas de la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Redacción de propuestas ganadoras para licitaciones de construcción',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de proyectos de construcción con IA como asistente de obra',
                'description'      => 'Usa IA para planificar, hacer seguimiento y resolver problemas en la gestión de proyectos complejos de construcción e ingeniería civil.',
                'prompt_content'   => <<<'EOT'
Eres un director de proyectos de construcción con certificación PMP y 15 años de experiencia en obras complejas. Tu rol es actuar como mi asistente ejecutivo de obra, ayudándome a tomar decisiones informadas, anticipar problemas y optimizar la gestión de proyectos de construcción e ingeniería civil.

Descripción del proyecto bajo gestión:
- Tipo: Construcción de nuevo hospital comarcal de 25.000 m²
- Plazo total: 30 meses
- Presupuesto: 45 millones de euros
- Situación actual: Mes 8 de obra, fase de estructura completada al 85%
- Problema crítico: Retraso de 3 semanas por huelga de gruistas que afecta a la ruta crítica
- Equipo directo: 2 jefes de obra, 4 encargados, 180 operarios de diferentes subcontratas
- Retos actuales: Coordinación de 12 subcontratas, incremento de costes de materiales del 12% y requisitos sanitarios adicionales del cliente

Necesito que me ayudes con las siguientes tareas de gestión:

1. Análisis de impacto del retraso: Analiza el impacto completo de las 3 semanas de retraso en: ruta crítica del proyecto, hitos contractuales con penalizaciones, cadena de subcontratas afectadas y coste adicional estimado. Proporciona una matriz de impacto por actividades y el nuevo planning de recuperación más realista.

2. Plan de recuperación del plazo: Diseña un plan de recuperación que permita absorber el retraso. Considera: solapamiento de actividades que normalmente son secuenciales, incremento de turnos en actividades críticas, reorganización de recursos entre frentes de obra, actividades que pueden adelantarse y potencial de recuperación realista en semanas. Incluye los riesgos de cada medida.

3. Gestión del incremento de costes: El precio del acero y el hormigón ha subido un 12% desde la firma del contrato. Ayúdame a: identificar las cláusulas de revisión de precios aplicables según LCSP, calcular el impacto económico por partidas, preparar la solicitud formal de revisión al promotor y explorar alternativas de optimización de costes sin afectar calidad.

4. Protocolo de coordinación de subcontratas: Diseña un sistema de coordinación semanal para las 12 subcontratas. Incluye: formato del informe semanal de subcontrata, agenda tipo de la reunión de coordinación, sistema de alertas tempranas de desviaciones, protocolo de resolución de conflictos entre subcontratas y sistema de evaluación mensual de rendimiento.

5. Gestión de requisitos adicionales: El cliente ha solicitado 15 requisitos adicionales no previstos en el proyecto inicial (relacionados con equipamiento hospitalario). Crea el proceso formal para gestionarlos: formulario de solicitud de cambio, análisis de impacto en plazo y coste, proceso de aprobación y gestión contractual de los adicionales.

6. Informe de situación ejecutivo: Redacta el informe mensual de situación del proyecto para el director general del promotor. Debe ser de 2 páginas máximo, incluir: resumen ejecutivo del estado, semáforo de hitos principales, desviaciones en plazo y coste con causa y acción correctiva, fotografías de avance (describe qué fotos incluirías), riesgos actuales y próximos hitos del mes.

7. Dashboard de control: Diseña el cuadro de mando semanal que yo como jefe de proyecto debo revisar cada lunes. Lista los 15 indicadores clave con su frecuencia de actualización, fuente de datos, umbral de alerta y responsable de actualizarlos.

Responde con herramientas prácticas: plantillas rellenables, listas de verificación, formatos de comunicación y procedimientos paso a paso. Todo debe ser aplicable directamente a la realidad de la construcción en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Resolución de problemas complejos y gestión ejecutiva de obras de construcción',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personal en obras de construcción con IA',
                'description'      => 'Optimiza la selección, formación y gestión del equipo humano en proyectos de construcción usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos especializado en el sector de la construcción e ingeniería civil. Tu experiencia abarca la gestión de personal en obras desde pequeñas rehabilitaciones hasta grandes infraestructuras, con profundo conocimiento del convenio colectivo del sector y las particularidades de gestionar equipos en entornos de obra.

Contexto de la empresa y situación actual:
- Constructora mediana con 120 trabajadores en plantilla y hasta 200 con subcontratas
- Proyectos activos: 8 obras simultáneas en diferentes provincias de España
- Problema principal: alta rotación del personal cualificado (jefes de obra y encargados), que llega al 35% anual
- Necesidad urgente: incorporar 3 jefes de obra y 6 encargados en los próximos 2 meses
- Reto adicional: implementar plan de formación en nuevas tecnologías (BIM, drones, digitalización)
- Presupuesto de RRHH: limitado, empresa familiar en proceso de profesionalización

Desarrolla las siguientes acciones de RRHH:

1. Diagnóstico de la rotación: Analiza las causas más probables de la alta rotación del 35% en perfiles técnicos de construcción. Diseña un proceso de entrevistas de salida para identificar las causas reales en mi empresa. Proporciona el cuestionario completo de salida y el método de análisis de resultados para identificar patrones.

2. Proceso de selección acelerado para perfiles técnicos: Diseña un proceso de selección de 3 semanas para contratar 3 jefes de obra con urgencia. Incluye: perfil del puesto detallado con competencias técnicas y blandas, canales de búsqueda más efectivos para el sector (portales especializados, colegios profesionales, LinkedIn, redes de contactos), guión de la entrevista técnica con preguntas situacionales específicas de obra, prueba práctica de evaluación y sistema de scoring para comparar candidatos.

3. Plan de onboarding para obra: Crea el proceso de incorporación para los nuevos jefes de obra. Considera las particularidades de incorporarse en plena obra activa. Diseña: checklist del primer día, plan de las primeras 4 semanas, mentoring con jefe de obra veterano, formación en sistemas y procesos internos y criterios de evaluación del período de prueba.

4. Plan de retención y desarrollo: Diseña un plan de retención para los perfiles técnicos clave que no implique solo subir salarios. Incluye: mapa de carrera dentro de la empresa, sistema de reconocimiento por proyectos completados con éxito, beneficios no económicos valorados en el sector (vehículo de empresa, flexibilidad entre proyectos, teletrabajo en fases de planificación), plan de formación personalizado y sistema de revisión salarial anual transparente.

5. Plan de formación en digitalización: Diseña el itinerario formativo para que el equipo técnico adopte las nuevas herramientas digitales. Para cada herramienta (BIM/Revit básico, drones topográficos, software de gestión de obra, tablet para informes digitales) especifica: nivel de formación requerido por rol, modalidad de formación recomendada, duración, coste estimado y cómo medir la transferencia al puesto.

6. Gestión de equipos multiculturales en obra: El 40% de los operarios son de origen extranjero (principalmente Marruecos y Rumanía). Proporciona guías prácticas para: comunicación efectiva en obra con barreras idiomáticas, gestión de diferencias culturales en la organización del trabajo, integración y respeto entre grupos y resolución de conflictos interculturales.

7. Cumplimiento laboral y prevención: Diseña el sistema de control del cumplimiento del convenio colectivo de la construcción y la normativa de prevención. Incluye el calendario de obligaciones anuales (formación preventiva, revisiones médicas, renovación de tarjetas profesionales) y el sistema de registro de jornada en obra cumpliendo la normativa vigente.

Todo debe ser práctico, listo para implementar y adaptado a la realidad del sector de la construcción en España, incluyendo referencias al convenio colectivo general del sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Selección, retención y desarrollo de personal técnico en empresas constructoras',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de costes y presupuestos de construcción con IA',
                'description'      => 'Optimiza el control de costes y la elaboración de presupuestos en proyectos de construcción e ingeniería civil usando IA como asistente financiero.',
                'prompt_content'   => <<<'EOT'
Eres un controller financiero especializado en empresas constructoras con amplio conocimiento del Plan General Contable adaptado al sector de la construcción, sistemas de control de costes por obra y elaboración de presupuestos de licitación. Tu misión es ayudarme a implementar un sistema robusto de control económico de proyectos.

Situación de la empresa:
- Constructora con facturación anual de 25 millones de euros
- Cartera actual: 10 obras abiertas con presupuestos entre 500.000 y 8 millones de euros
- Problema crítico: los márgenes reales de las obras son sistemáticamente un 4-6% peores que los presupuestados
- Causas identificadas superficialmente: desviaciones en mano de obra, cambios no controlados y materiales
- Sistema actual: Excel básico por obra, sin consolidación ni alertas automáticas
- Necesidad: implementar control de costes profesional y mejorar la precisión de los presupuestos de licitación

Desarrolla el siguiente sistema de control:

1. Diagnóstico de las desviaciones: Diseña un proceso de auditoría económica para identificar exactamente dónde se pierden los márgenes. Proporciona: checklist de revisión económica de obra, metodología para comparar presupuesto vs. coste real por partidas, análisis de causas raíz más comunes en construcción (precios unitarios incorrectos, rendimientos de mano de obra, gestión de subcontratas, cambios sin coste) y template del informe de diagnóstico por obra.

2. Sistema de imputación de costes: Diseña la estructura del plan de costes por obra que permita un seguimiento preciso. Define: códigos de coste por tipo (mano de obra directa, materiales, subcontratas, maquinaria, gastos generales de obra, costes financieros), criterios de imputación de costes indirectos entre obras, sistema de albaranes y partes de trabajo digitales y proceso de cierre contable mensual por obra.

3. Control presupuestario mensual: Crea el proceso y los informes para el control mensual de cada obra. Incluye: el informe mensual de obra con estructura detallada, el cálculo del resultado a la terminación (RAT) por el método del porcentaje de avance, el análisis de desviaciones con clasificación por tipo y responsable y el sistema de alertas cuando una obra supera umbrales de desviación.

4. Mejora de la precisión presupuestaria: Diseña el proceso de elaboración de presupuestos de licitación para mejorar su precisión. Incluye: base de datos de rendimientos de mano de obra por tipo de trabajo y zona geográfica, histórico de precios de materiales con índices de actualización, metodología de análisis de riesgos y provisiones en el presupuesto, proceso de revisión interna antes de presentar la oferta y análisis de sensibilidad del margen frente a variaciones de costes.

5. Gestión de cambios y adicionales: El mayor leakage de margen suelen ser los trabajos adicionales no cobrados. Diseña el proceso completo: protocolo de identificación y documentación de cambios en obra, proceso de aprobación y valoración económica, seguimiento de órdenes de cambio pendientes de cobro y sistema de reporting de adicionales al director financiero.

6. Planificación de tesorería de obras: Las obras de construcción tienen tesorería muy irregular por las certificaciones mensuales. Diseña el modelo de planificación de tesorería por obra: forecast mensual de cobros (certificaciones previstas) y pagos (nóminas, materiales, subcontratas), identificación de puntos de tensión de liquidez, estrategias de financiación del circulante en construcción y dashboard de tesorería consolidada de todas las obras.

7. KPIs financieros del sector: Define los 12 indicadores financieros clave para una constructora. Para cada uno incluye: fórmula de cálculo, benchmark del sector, frecuencia de seguimiento y acción a tomar si está fuera de rango.

Proporciona plantillas en formato tabla, fórmulas de cálculo y referencias a la normativa contable española aplicable al sector de la construcción (NRV 15 de contratos de construcción). Todo debe ser implementable en Excel o en un ERP estándar de construcción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Control de costes y mejora de márgenes en obras de construcción',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisión de contratos de obra y compliance legal en construcción con IA',
                'description'      => 'Analiza contratos de construcción, identifica riesgos legales y asegura el cumplimiento normativo en proyectos de obra civil e ingeniería.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de la construcción con más de 12 años de experiencia en contratos de obra, reclamaciones, responsabilidades y normativa técnica del sector. Tu rol es actuar como mi asesor legal experto para revisar contratos y gestionar el compliance legal de proyectos de construcción.

Contexto del proyecto legal:
- Empresa: constructora que actúa como contratista principal en un proyecto de centro logístico de 12.000 m²
- Promotor: empresa multinacional del sector del comercio electrónico
- Contrato recibido: contrato de obra a precio cerrado por 6,8 millones de euros con plazo de 14 meses
- Situación: el contrato está redactado íntegramente por los abogados del promotor y es muy favorable para él
- Necesidad: identificar riesgos, negociar condiciones y establecer el sistema de gestión legal durante la obra

Desarrolla el análisis legal completo:

1. Revisión del contrato: Aunque no tengo el contrato real, dame el protocolo completo de revisión que aplicarías. Lista las 25 cláusulas más críticas que debes revisar en un contrato de obra a precio cerrado en España. Para cada cláusula explica: qué buscar, los riesgos típicos para el contratista, la redacción habitual favorable al promotor y la contra-propuesta de redacción equilibrada.

2. Cláusulas de riesgo más frecuentes: Desarrolla en detalle las 8 cláusulas más peligrosas para el contratista: (a) penalizaciones por retraso desproporcionadas, (b) cláusulas de precio cerrado sin revisión por cambios del promotor, (c) retenciones de garantía abusivas, (d) plazos de pago excesivos incumpliendo la Ley de Morosidad, (e) responsabilidad extensiva por defectos de proyecto, (f) cesión de derechos de propiedad intelectual del proyecto, (g) limitación del derecho a reclamar adicionales, (h) cláusulas de rescisión unilateral sin compensación justa.

3. Estrategia de negociación: Diseña la estrategia de negociación del contrato con el promotor. Incluye: priorización de cláusulas a negociar (batallas importantes vs. concesiones estratégicas), argumentarios para cada punto de negociación, líneas rojas que no deben cruzarse, BATNA (mejor alternativa) si no hay acuerdo y cómo documentar los acuerdos alcanzados en negociación.

4. Gestión legal durante la ejecución: Diseña el sistema de gestión legal durante los 14 meses de obra. Incluye: protocolo de documentación de todas las comunicaciones con el promotor (libro de órdenes, correos electrónicos, actas), sistema de reclamación de adicionales con plazos y formatos, procedimiento ante instrucciones verbales del promotor o dirección facultativa y protocolo de reserva de derechos ante situaciones conflictivas.

5. Responsabilidades por vicios y defectos: Explica el régimen de responsabilidades del contratista según la Ley de Ordenación de la Edificación (LOE). Detalla: plazos de garantía por tipo de defecto (1, 3 y 10 años), coordinación de responsabilidades con proyectista y director de obra, cobertura del seguro decenal y cómo documentar durante la obra para minimizar responsabilidad futura.

6. Cumplimiento normativo de la obra: Elabora el mapa de compliance legal de una obra de construcción en España. Categoriza por áreas: normativa urbanística y licencias, prevención de riesgos laborales (Ley 31/1995 y RD 1627/1997), gestión de residuos de construcción (RD 105/2008), protección de datos de trabajadores, subcontratación y responsabilidad solidaria, y acceso a sistemas de Seguridad Social. Para cada área incluye las obligaciones principales, los plazos y la documentación a conservar.

7. Protocolo de resolución de conflictos: Diseña el protocolo a seguir cuando surge un conflicto económico con el promotor. Define: proceso interno de escalado, cuándo acudir a mediación vs. arbitraje vs. jurisdicción ordinaria, documentación necesaria para sostener una reclamación y criterios para evaluar el coste-beneficio de litigar.

Incluye referencias a la normativa española aplicable: Código Civil, LOE, LCSP, Ley de Morosidad y convenios de arbitraje del sector. Todo debe ser práctico y orientado a proteger los intereses económicos del contratista.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Protección legal del contratista en contratos de obra civil y edificación',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en proyectos inmobiliarios y de construcción con IA',
                'description'      => 'Gestiona las comunicaciones con clientes durante proyectos de construcción, resuelve incidencias y mejora la experiencia del comprador de obra nueva con IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia del cliente (Customer Experience) especializado en el sector inmobiliario y de la construcción. Tu experiencia abarca la gestión de comunicaciones con compradores de vivienda de obra nueva desde la firma del contrato hasta la postventa, pasando por todas las fases de construcción.

Contexto de la empresa:
- Promotora inmobiliaria con 3 promociones activas (180 viviendas en total en diferentes fases de construcción)
- Perfil de clientes: compradores de primera vivienda y segunda residencia, mayoritariamente entre 30 y 55 años
- Problemas frecuentes: quejas por falta de información del avance de obra, reclamaciones por retrasos en la entrega, conflictos en la entrega de llaves por deficiencias y mala gestión de la postventa en el primer año
- Equipo de atención: 2 personas para 180 clientes activos (sobrecargadas)
- Objetivo: mejorar la satisfacción del cliente y reducir reclamaciones formales en un 50%

Desarrolla el sistema completo de atención al cliente:

1. Mapa del journey del comprador: Diseña el mapa completo de la experiencia del comprador de obra nueva desde la firma del contrato hasta el fin de la garantía. Para cada etapa identifica: duración típica, necesidades de información del cliente, puntos de dolor más frecuentes, momentos de la verdad críticos para la satisfacción y touchpoints de comunicación recomendados.

2. Sistema de comunicación proactiva: Diseña el plan de comunicaciones proactivas durante la construcción que elimine la incertidumbre del comprador. Incluye: frecuencia y formato de las actualizaciones (mensual, por hitos de obra), contenido de cada comunicación (fotos, porcentaje de avance, próximos hitos, información útil sobre la promoción), canales (email, WhatsApp, app, portal web) y plantillas redactadas de los 8 comunicados tipo durante la obra.

3. Protocolo de gestión de quejas: Diseña el proceso completo de gestión de quejas y reclamaciones. Diferencia por tipo: (a) quejas por retraso en la entrega, (b) incidencias en la entrega de llaves, (c) deficiencias de calidad en los primeros 6 meses, (d) reclamaciones formales con amenaza legal. Para cada tipo define: protocolo de respuesta en tiempos, responsable de gestión, script de comunicación con el cliente, escalado interno y solución compensatoria estándar.

4. Proceso de entrega de llaves: La entrega de llaves es el momento más crítico y fuente principal de conflictos. Diseña el proceso completo: comunicación previa de preparación del cliente, agenda del acto de entrega, checklist de recepción de la vivienda que revisa el cliente junto al equipo, gestión de las deficiencias detectadas en el momento (leve, grave, que impide la entrega), documentación a firmar y seguimiento de la resolución de incidencias post-entrega.

5. Gestión de la postventa: Los primeros 12 meses tras la entrega son los más intensos en reclamaciones. Diseña el sistema de postventa: portal del cliente para registrar incidencias, proceso de evaluación y priorización de deficiencias, gestión con los industriales para la reparación, comunicación de estado al cliente y cierre formal de cada incidencia. Incluye los plazos de respuesta comprometidos para cada tipo de incidencia.

6. Scripts de comunicación difícil: Redacta los scripts completos para las conversaciones más difíciles: (a) comunicar un retraso de 3 meses en la entrega, (b) explicar que una mejora solicitada no es posible por motivos técnicos, (c) responder a un cliente agresivo en la entrega de llaves por deficiencias, (d) gestionar la amenaza de denuncia ante el Banco de España por el aval bancario, (e) comunicar una subida de costes que afecta a los acabados pactados.

7. Métricas de satisfacción del cliente: Define el sistema de medición de la experiencia del cliente. Incluye: encuesta de satisfacción tras la entrega de llaves (diseña las 10 preguntas), NPS de la promotora a los 6 meses de la entrega, proceso de gestión de reseñas online (Google, Trustpilot) y dashboard de satisfacción para el equipo directivo.

Todo debe ser práctico, adaptado al sector inmobiliario español y listo para implementar. Los scripts deben ser empáticos pero profesionales, orientados a resolver, no a excusar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejora de la experiencia del comprador de obra nueva y reducción de reclamaciones',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de ingeniería civil con IA como asistente técnico',
                'description'      => 'Potencia tu práctica de consultoría freelance en ingeniería civil y construcción usando IA para entregar informes técnicos, ofertas y asesoramiento de mayor valor.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero civil freelance con más de 10 años de experiencia en consultoría. Tu especialidad incluye proyectos de infraestructura, estructuras, geotecnia e inspección de edificios. Necesito que actúes como mi socio estratégico y asistente técnico para hacer crecer mi práctica de consultoría independiente y mejorar la calidad y eficiencia de mis entregables.

Situación actual de mi práctica freelance:
- Trabajo como ingeniero civil autónomo desde hace 3 años
- Ingresos actuales: 48.000 euros anuales, objetivo: llegar a 80.000 en 2 años
- Clientes actuales: 2 constructoras medianas, 1 promotora y particulares para informes periciales
- Servicios que ofrezco: dirección facultativa, informes técnicos, peritajes, consultorías de estructura y supervisión de obras
- Tiempo perdido en: burocracia administrativa, redacción de informes y búsqueda de nuevos clientes
- Fortaleza diferencial: especialización en patología de edificios y rehabilitación estructural

Necesito que me ayudes con todo lo siguiente:

1. Estrategia de posicionamiento y crecimiento: Analiza mi situación y diseña la estrategia para llegar de 48.000 a 80.000 euros anuales. Incluye: los servicios de mayor valor y margen en los que debería especializarme más, los segmentos de cliente más rentables para un ingeniero civil freelance en España, cómo construir autoridad técnica en mi especialidad (patología y rehabilitación), estrategia de LinkedIn para generar clientes de forma orgánica y cuántos clientes y proyectos necesito para alcanzar el objetivo de ingresos.

2. Sistema de gestión del negocio: Diseña el sistema completo de gestión administrativa de mi práctica freelance. Incluye: proceso de cualificación de nuevos clientes y proyectos, plantilla de propuesta de servicios profesionales, modelo de contrato de consultoría técnica adaptado a ingeniero autónomo en España, sistema de seguimiento de proyectos activos y flujo de facturación y cobro que minimice la morosidad.

3. Plantillas de informes técnicos: Diseña la estructura tipo para los 4 informes técnicos que más frecuentemente emito como perito e inspector: (a) informe de inspección técnica de edificio (ITE), (b) informe pericial de daños estructurales, (c) estudio de patologías con propuesta de reparación, (d) informe de idoneidad estructural para cambio de uso. Para cada uno: estructura de secciones, datos mínimos a incluir, conclusiones tipo y advertencias legales estándar.

4. Eficiencia en la generación de informes: Diseño del flujo de trabajo con IA para reducir a la mitad el tiempo de redacción de informes técnicos. Incluye: cómo usar IA para transformar notas de campo en borradores estructurados, plantillas de descripción de patologías por tipo (humedades, fisuras, asentamientos, corrosión), base de datos de normativa de referencia frecuente (CTE DB-SE, EHE-08, NTE) y sistema de revisión de calidad antes de entregar el informe.

5. Posicionamiento como perito judicial: El trabajo pericial judicial es de los más valorados y mejor pagados. Diseña el plan para posicionarme como perito de confianza para juzgados y abogados. Incluye: cómo acreditarse como perito en el Colegio de Ingenieros, marketing específico hacia despachos de abogados especializados en construcción, estructura del informe pericial judicial cumpliendo los requisitos de la LEC y cómo comportarse en el juicio oral como testigo experto.

6. Red de colaboradores: Como freelance, a veces necesito ampliar equipo para proyectos grandes. Diseña el sistema de colaboración con otros profesionales: perfiles complementarios que necesito en mi red (arquitectos, geólogos, instaladores), modelo de acuerdo de colaboración entre autónomos, cómo repartir honorarios y responsabilidades y cómo gestionar la imagen de marca cuando trabajas en equipo.

7. Productividad y conciliación: El mayor reto del freelance técnico es la gestión del tiempo. Diseña mi sistema de productividad: estructura semanal tipo con bloques de trabajo en proyectos vs. desarrollo del negocio, sistema de priorización de proyectos cuando todo es urgente, cómo gestionar clientes que abusan del acceso directo al freelance y estrategias para desconectar y evitar el burnout del autónomo.

Todo debe ser práctico, orientado a la realidad del mercado español de la ingeniería civil freelance, con referencias a colegios profesionales, normativa fiscal de autónomos y herramientas digitales accesibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crecimiento y eficiencia de la práctica freelance en ingeniería civil y construcción',
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
