<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills565Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing estratégico para consultoras de negocio con IA',
                'description'      => 'Diseña la estrategia de marketing y posicionamiento de una firma de consultoría usando IA para atraer clientes corporativos de alto valor y diferenciarte en un mercado saturado.',
                'prompt_content'   => <<<'EOT'
Eres un director de marketing especializado en servicios profesionales B2B con profunda experiencia en el sector de la consultoría de negocio y estrategia empresarial. Conoces los ciclos de venta largos, la importancia del thought leadership, el papel de las relaciones personales en la captación de clientes corporativos y cómo las firmas de consultoría construyen su reputación y su marca en mercados donde la confianza lo es todo.

Contexto de la firma:
- Boutique de consultoría estratégica fundada hace 6 años en España
- Equipo de 18 consultores especializados en transformación digital, estrategia de crecimiento y operaciones
- Clientes actuales: medianas y grandes empresas en sectores de industria, retail y servicios financieros
- Facturación: 2,8 millones de euros, objetivo de alcanzar 5 millones en 3 años
- Problema: el 85% de los nuevos proyectos llegan por referidos, sin estrategia de marketing activa
- Diferencial real: metodología propia de diagnóstico estratégico con resultados documentados en 40+ proyectos

Desarrolla la estrategia de marketing completa para la firma:

1. Posicionamiento y propuesta de valor: Define el posicionamiento estratégico de la boutique frente a las Big Four y las consultoras independientes más pequeñas. Incluye: el espacio de mercado que debe ocupar la firma (qué tipo de problemas resuelve mejor, para qué tipo de empresa), la propuesta de valor diferencial basada en la metodología propia y el tamaño de equipo (más ágil que las grandes, más especializada que las pequeñas), el perfil del cliente ideal (sector, tamaño, momento de transformación en el que necesita la consultoría) y cómo comunicar ese posicionamiento en todos los puntos de contacto de la firma.

2. Thought leadership como motor de crecimiento: En consultoría estratégica, la autoridad intelectual es el principal imán de clientes. Diseña el programa de thought leadership. Incluye: los 4-5 temas en los que la firma puede liderar la conversación en España basándose en su experiencia real con clientes, el formato de publicación de ese conocimiento (artículos de opinión en medios de empresa, informes de investigación anuales, webinars sectoriales, ponencias en congresos), el proceso editorial para producir contenido de calidad con el tiempo limitado de los consultores, cómo usar LinkedIn como canal principal de distribución del thought leadership y cómo medir el impacto del contenido en la generación de oportunidades comerciales.

3. Estrategia de LinkedIn para firmas de consultoría: LinkedIn es el canal de marketing más efectivo para servicios profesionales B2B. Diseña la estrategia completa. Incluye: estrategia de la página de empresa (qué publicar, con qué frecuencia, qué formatos), estrategia de marca personal para los socios y directores (cómo posicionarlos como referentes en sus especialidades), plan de contenido de 12 semanas con temas concretos para la firma, cómo amplificar el alcance de las publicaciones a través de los perfiles personales del equipo y cómo usar LinkedIn Sales Navigator para identificar y conectar con los decisores de las empresas objetivo.

4. Gestión de referencias y red de contactos: El 85% de los proyectos llegan por referencias. Diseña el sistema para multiplicar y sistematizar este canal. Incluye: mapa del ecosistema de influencia (quiénes son los prescriptores naturales de la firma: otros asesores, bancos de inversión, despachos de abogados, inversores), programa formal de relaciones con prescriptores (reuniones periódicas, contenido compartido, co-organización de eventos), cómo pedir referencias de forma natural y efectiva a los clientes satisfechos, sistema de seguimiento de las oportunidades que llegan por referencia y cómo retribuir o reconocer a los mejores prescriptores.

5. Marketing de eventos y presencia sectorial: Los eventos son clave en consultoría para generar visibilidad y relaciones. Diseña la estrategia de eventos. Incluye: selección de los 3-4 congresos y foros sectoriales donde la firma debe estar presente anualmente, cómo preparar la participación en eventos para maximizar el retorno (agenda de reuniones previas, ponencias si es posible, materiales de la firma), organización de eventos propios de la firma (desayunos de trabajo para 15-20 directivos sobre temas de tendencia), estrategia de seguimiento post-evento y cómo integrar los eventos en la estrategia digital.

6. Generación de demanda con contenido: La firma necesita atraer empresas que aún no saben que necesitan una consultoría. Diseña el sistema de inbound marketing adaptado a servicios profesionales. Incluye: auditoría o diagnóstico gratuito como lead magnet (qué tipo de diagnóstico ofreces, cómo lo entregas, cómo convierte a proyecto de consultoría), secuencia de nurturing para empresas que descargaron el diagnóstico, estrategia de SEO para posicionarse en búsquedas de directivos con problemas que la firma resuelve y cómo integrar el CRM en el proceso de marketing para hacer seguimiento de cada contacto.

7. Métricas y ROI del marketing en consultoría: Define el sistema de medición del marketing para una firma de consultoría. Incluye: los 8 indicadores clave (pipeline generado por marketing, tasa de conversión de contacto a reunión, reunión a propuesta, propuesta a proyecto, coste por oportunidad cualificada, ciclo de ventas medio, valor medio del proyecto, NPS de clientes), cómo distinguir el impacto del marketing del impacto de las relaciones comerciales directas y el presupuesto de marketing recomendado como porcentaje de la facturación para una firma de este tamaño.

Incluye ejemplos de firmas de consultoría españolas que están haciendo bien el marketing de servicios profesionales, plantillas de contenido y un plan de acción para los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Crecimiento de una boutique de consultoría estratégica mediante marketing de contenidos y thought leadership',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de herramientas de análisis estratégico empresarial con IA',
                'description'      => 'Crea aplicaciones y dashboards de análisis estratégico que ayuden a consultores y directivos a tomar mejores decisiones usando inteligencia artificial y visualización de datos.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en herramientas de inteligencia de negocio y análisis estratégico para el entorno corporativo. Tu experiencia abarca el diseño de sistemas de apoyo a la decisión, dashboards ejecutivos, modelos de simulación de escenarios y la integración de IA en los procesos de planificación estratégica de grandes organizaciones.

Contexto del proyecto de desarrollo:
- Firma de consultoría estratégica que quiere digitalizar su metodología propia de diagnóstico empresarial
- El proceso actual es manual: entrevistas, hojas de cálculo, presentaciones en PowerPoint
- Objetivo: crear una plataforma SaaS que automatice partes del diagnóstico y permita a los consultores trabajar con más clientes en paralelo
- Usuarios finales: consultores (power users) y clientes (vista limitada de sus propios datos)
- Restricciones: presupuesto de desarrollo de 150.000 euros en 12 meses, stack flexible

Desarrolla la arquitectura completa de la plataforma de análisis estratégico:

1. Arquitectura del sistema de diagnóstico estratégico: Diseña la arquitectura técnica de la plataforma. Incluye: módulos principales del sistema (recopilación de datos del cliente, modelos de análisis, generación de informes, visualización ejecutiva), decisión de stack tecnológico con justificación (frontend React/Vue, backend Python/Node, base de datos, servicio de IA), diseño de la estructura de datos para almacenar los inputs del diagnóstico (financieros, operativos, de mercado), arquitectura multi-tenant para gestionar múltiples clientes de forma segura y aislada y diseño de la API para que el consultor pueda alimentar el sistema durante el proceso de diagnóstico.

2. Módulo de análisis competitivo automatizado: El análisis competitivo es la parte más laboriosa del diagnóstico estratégico. Diseña el módulo que lo automatiza. Incluye: integración con fuentes de datos públicas para recopilar información de competidores (SABI para datos financieros de empresas españolas, LinkedIn para datos de personal, webs corporativas, Google News), pipeline de procesamiento con LLM para extraer y estructurar la información relevante de cada competidor, modelo de datos del mapa competitivo (dimensiones de análisis: precio, cuota, propuesta de valor, canales, fortalezas y debilidades) y visualización del mapa competitivo en el dashboard.

3. Motor de modelización financiera con IA: Diseña el módulo de modelización financiera que convierte datos históricos en proyecciones y escenarios. Incluye: proceso de ingesta de datos financieros (estados financieros en PDF o Excel, normalización automática a un formato estándar), modelos de proyección financiera (bottom-up por línea de negocio, top-down por market share, escenarios conservador/base/optimista), integración de LLM para generar la narrativa que explica las asunciones de cada escenario en lenguaje natural, sensibilidades automáticas para identificar qué variables tienen mayor impacto en el resultado y exportación del modelo a Excel para revisión del cliente.

4. Sistema de generación de informes con IA: El informe de consultoría es el principal entregable. Diseña el sistema de generación semi-automatizada de informes. Incluye: estructura del informe de diagnóstico estratégico (resumen ejecutivo, análisis situacional, diagnóstico de problemas, alternativas estratégicas, recomendaciones, plan de implementación), flujo de trabajo del consultor para alimentar el sistema con sus hallazgos durante el proyecto, integración de LLM para generar los textos de cada sección a partir de los datos estructurados introducidos, sistema de revisión y edición colaborativa del informe antes de enviarlo al cliente y generación automática de la presentación en PowerPoint o Google Slides.

5. Dashboard ejecutivo para el cliente: El cliente necesita una vista de su situación y del progreso del proyecto. Diseña el dashboard. Incluye: KPIs estratégicos que el cliente ve en tiempo real (indicadores del negocio que el consultor ha configurado al inicio del proyecto), visualización del avance del diagnóstico y las recomendaciones validadas, módulo de comentarios y feedback del cliente sobre los hallazgos intermedios, notificaciones automáticas cuando el consultor sube nuevos análisis y control de acceso granular (el cliente solo ve lo que el consultor decide compartir).

6. Código Python para análisis estratégico: Proporciona implementaciones concretas de: (a) parser de estados financieros en PDF usando PyMuPDF para extraer las líneas de la cuenta de resultados y el balance, (b) función que llama a la API de Claude para analizar el texto de un informe de competidor y extraer precio, propuesta de valor y canales en formato JSON estructurado, (c) modelo de simulación de escenarios financieros usando NumPy con distribuciones de probabilidad para los parámetros clave y (d) generación de gráficos de análisis estratégico usando Plotly (matriz BCG, lienzo de modelo de negocio, radar de competencias).

7. Roadmap de desarrollo y monetización: Diseña el plan de desarrollo de 12 meses con modelo de negocio SaaS. Incluye: fases de desarrollo con funcionalidades prioritarias en cada fase, criterios de validación con clientes reales antes de pasar a la siguiente fase, modelo de pricing para el SaaS de consultoría (por proyecto, por número de clientes activos, por usuario consultor), estimación de costes de infraestructura cloud y de llamadas a la API de IA según el volumen de uso y estrategia de go-to-market para otras firmas de consultoría que podrían usar la plataforma.

Incluye diagramas de arquitectura en texto, fragmentos de código funcionales y referencias a herramientas del ecosistema de consultoría estratégica que ya están digitalizando sus metodologías.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Digitalización de la metodología de consultoría estratégica en una plataforma SaaS',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de informes y presentaciones de consultoría estratégica con IA',
                'description'      => 'Crea informes ejecutivos y presentaciones de alto impacto para proyectos de consultoría estratégica usando IA para estructurar el pensamiento, visualizar datos y comunicar con claridad.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de comunicación estratégica y visual con especialización en el sector de la consultoría de negocio. Conoces el estándar McKinsey de presentaciones (pirámide Minto, SCQA, visualización de datos), el diseño de informes ejecutivos y cómo transformar análisis complejos en narrativas visuales que los directivos entienden y actúan sobre ellas.

Contexto del encargo:
- Firma de consultoría estratégica que necesita elevar la calidad visual y narrativa de sus entregables
- Situación actual: los consultores crean sus propias presentaciones sin guía de estilo, resultado muy heterogéneo
- Clientes: directivos de empresas medianas y grandes que reciben muchas presentaciones y valoran la claridad
- Necesidad: sistema de plantillas y guía de diseño para que todos los consultores produzcan materiales de la misma calidad
- Herramientas disponibles: PowerPoint, Google Slides, Figma, Canva Pro

Desarrolla el sistema completo de diseño de comunicación para la firma:

1. Guía de estilo visual para la firma de consultoría: Diseña el sistema visual completo de la firma. Incluye: paleta de colores corporativos con usos y combinaciones permitidas (colores primarios para énfasis, colores secundarios para gráficos, colores de fondo), tipografía (fuente para títulos, cuerpo de texto y datos, tamaños mínimos para legibilidad en proyección), sistema de iconografía coherente para los conceptos recurrentes en consultoría (estrategia, organización, procesos, tecnología, personas), estilo de fotografía e ilustración y rejilla de diseño para las diapositivas (márgenes, áreas seguras, zonas de texto y datos).

2. Estructura narrativa de las presentaciones de consultoría: La pirámide Minto y el modelo SCQA son los estándares de la consultoría estratégica. Explica y adapta estas metodologías. Incluye: cómo aplicar la pirámide Minto a una presentación de recomendaciones estratégicas (conclusión primero, luego argumentos, luego evidencias), el modelo SCQA para construir el relato de un proyecto (Situación, Complicación, pregunta, respuesta), cómo estructurar los 5 tipos de presentación más comunes en consultoría (diagnóstico inicial, revisión de avance, presentación de recomendaciones, presentación ejecutiva al consejo, propuesta comercial para un nuevo proyecto), cuántas diapositivas son las adecuadas para cada tipo y cómo estructurar el apéndice técnico con los análisis detallados.

3. Diseño de gráficos y visualizaciones de datos: Los gráficos son el lenguaje de la consultoría estratégica. Diseña el sistema de visualización. Incluye: guía de selección del tipo de gráfico correcto para cada tipo de dato (comparación de períodos, composición de una categoría, distribución, correlación, análisis geográfico), estilo visual coherente para todos los gráficos de la firma (colores, etiquetas, ejes, fuentes de datos), cómo diseñar la matriz 2x2 de posicionamiento estratégico de forma que impacte visualmente, diseño del gráfico de cascada para análisis de variaciones financieras y cómo crear diagramas de proceso y flujo organizativo claros.

4. Plantillas de diapositivas para los entregables clave: Diseña las plantillas para los 10 tipos de diapositiva más usados en consultoría. Para cada plantilla incluye: estructura del layout, qué zona es para el título, qué zona para el dato principal, cómo disponer los bullets o los gráficos, cuándo usar una diapositiva solo de texto vs. solo visual y el mensaje clave (takeaway) en el pie de cada diapositiva. Tipos de diapositiva: portada, agenda, executive summary, análisis de situación, diagnóstico de problemas, alternativas estratégicas, recomendación con argumentos, plan de implementación (roadmap), próximos pasos y agradecimiento/preguntas.

5. Proceso de producción de entregables con IA: Integra las herramientas de IA en el flujo de producción de presentaciones. Incluye: cómo usar Claude para estructurar el argumento de una diapositiva a partir de los análisis en bruto del consultor, prompt para que la IA genere el Executive Summary de una presentación de 40 diapositivas en 5 bullets, cómo usar herramientas de IA de presentaciones (Gamma, Beautiful.ai, Canva IA) para generar un borrador rápido que el consultor refina, proceso de revisión de calidad antes de entregar al cliente (checklist de consistencia visual, narrativa y de datos) y estimación del ahorro de tiempo en la producción de entregables con IA vs. el proceso manual.

6. Diseño del informe escrito de consultoría: Algunos entregables son documentos Word o PDF, no presentaciones. Diseña el sistema de informes escritos. Incluye: estructura del informe de consultoría escrito (portada, tabla de contenidos, resumen ejecutivo, cuerpo del análisis, recomendaciones, apéndices), sistema de estilos de Word para mantener la coherencia visual del documento, cómo integrar gráficos y tablas de PowerPoint en el documento de Word de forma que queden con la misma calidad visual, uso de IA para revisar la claridad y la estructura de los textos antes de entregar al cliente y diseño de la portada y las páginas de capítulo para dar impacto visual al documento.

7. Gestión de la marca visual en proyectos con clientes: Algunos clientes tienen sus propias marcas visuales y piden que los entregables estén en su branding. Diseña el protocolo. Incluye: cómo adaptar las plantillas de la firma al branding del cliente manteniendo la calidad narrativa y visual, qué adaptar (colores, tipografía, logo) y qué no cambiar (estructura narrativa, calidad de los gráficos, formato del executive summary), sistema de versionado de los entregables a lo largo del proyecto para evitar confusiones y protocolo de propiedad intelectual: qué pertenece a la firma y qué pertenece al cliente al finalizar el proyecto.

Incluye ejemplos visuales descritos en detalle, referencias al estilo visual de las consultoras top globales y una guía de inicio rápido para que un consultor junior pueda aplicar el sistema desde su primer proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estandarización de la calidad visual y narrativa de los entregables de consultoría',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Desarrollo de negocio y captación de clientes en consultoría con IA',
                'description'      => 'Diseña un sistema de desarrollo de negocio para firmas de consultoría que permita identificar oportunidades, acortar los ciclos de venta y aumentar la tasa de conversión de propuestas.',
                'prompt_content'   => <<<'EOT'
Eres un director de desarrollo de negocio en una firma de consultoría estratégica con más de 12 años de experiencia cerrando proyectos de gran envergadura con empresas del IBEX 35, medianas empresas en transformación y grupos familiares en procesos de profesionalización. Conoces el ciclo de venta largo de la consultoría, la importancia de las relaciones personales y cómo estructurar una propuesta que convence al comité de dirección.

Contexto de la firma:
- Boutique de consultoría estratégica con 18 consultores especializados
- Tasa de conversión de propuestas actual: 35% (el objetivo del sector es 50%)
- Ciclo de ventas medio: 6 meses desde el primer contacto hasta la firma del contrato
- Ticket medio por proyecto: 85.000 euros, proyectos de 3 a 9 meses de duración
- Canal actual de captación: referencias y eventos, sin proceso estructurado de desarrollo de negocio
- Problema: la firma depende demasiado de 2-3 socios para toda la captación de negocio

Desarrolla el sistema completo de desarrollo de negocio para la firma:

1. Definición del mercado objetivo y priorización: El primer paso es ser muy selectivos sobre a qué empresas dirigirse. Diseña el modelo de segmentación. Incluye: criterios de empresa ideal (sector, tamaño, fase de desarrollo, momento de transformación), señales de que una empresa está a punto de necesitar una consultoría estratégica (cambio de CEO, entrada de fondo de capital, expansión internacional, pérdida de cuota de mercado), sectores y geografías a priorizar basándose en las capacidades y el track record de la firma, construcción del universo de empresas objetivo (lista de 200-300 empresas que cumplen el perfil) y criterios para descartar oportunidades que no encajan aunque parezcan atractivas.

2. Sistema de identificación y cualificación de oportunidades: Diseña el proceso de pipeline de desarrollo de negocio. Incluye: fuentes de información para identificar señales de compra en las empresas objetivo (LinkedIn, prensa económica, CNMV, registro mercantil, eventos sectoriales), proceso de cualificación BANT adaptado a consultoría estratégica (Budget: ¿tienen presupuesto para consultoría?, Authority: ¿hemos llegado al decisor?, Need: ¿hay un problema estratégico urgente?, Timing: ¿cuándo necesitan resolver el problema?), criterios para pasar una oportunidad de "identificada" a "cualificada" y gestión del pipeline en CRM con las etapas específicas de la venta de consultoría.

3. Construcción de relaciones con decisores: En consultoría estratégica, la venta es una venta de relaciones. Diseña el proceso de construcción de relaciones. Incluye: mapeo de los decisores en cada empresa objetivo (CEO, CFO, director de Estrategia, consejero independiente), estrategia de contacto inicial personalizada para cada perfil (LinkedIn, evento compartido, introducción por referido, artículo de thought leadership relevante), plan de nurturing de la relación antes de que haya un proyecto (reuniones de intercambio de conocimiento, invitación a eventos, sharing de contenido relevante), gestión del largo plazo cuando el decisor dice "ahora no es el momento" y cómo involucrar a varios consultores de la firma en la construcción de relaciones con la misma empresa.

4. Diseño de la propuesta comercial ganadora: La propuesta es el momento de la verdad. Diseña la estructura y el proceso de elaboración de propuestas. Incluye: proceso de discovery previo a la propuesta (preguntas que debes hacer en las reuniones previas para entender el problema en profundidad), estructura de la propuesta ganadora (comprensión del problema del cliente, enfoque metodológico, equipo propuesto, plan de trabajo, entregables, inversión, referencias de proyectos similares), cómo personalizar la propuesta para el sector y el problema específico del cliente sin partir de cero en cada propuesta, la reunión de defensa de la propuesta (cómo preparar la presentación oral, cómo manejar las objeciones de precio y plazo) y proceso de seguimiento post-propuesta para aumentar la tasa de conversión.

5. Gestión de las objeciones más frecuentes: Los directivos tienen objeciones recurrentes para no contratar una consultoría. Diseña las respuestas. Para cada objeción proporciona: la comprensión del motivo real detrás de la objeción, la respuesta inmediata, los argumentos de apoyo con ejemplos concretos y el cierre. Objeciones a cubrir: precio demasiado alto, los consultores no conocen nuestro sector, ya tenemos equipo interno que puede hacer esto, necesitamos más tiempo para decidir, hemos tenido malas experiencias con consultoras anteriores y el presupuesto no está aprobado aún.

6. Expansión de proyectos con clientes existentes: El cliente más fácil de conseguir es el que ya tienes. Diseña el sistema de account management y venta adicional. Incluye: protocolo de revisión trimestral con el cliente para identificar nuevas necesidades, mapa de las iniciativas estratégicas del cliente donde la firma podría aportar valor adicional, cómo hacer una propuesta de extensión del proyecto actual o de nuevo proyecto sin que parezca oportunismo comercial, criterios para decidir qué proyectos con clientes existentes priorizar frente a proyectos con clientes nuevos y cómo gestionar la relación cuando un proyecto termina para mantener el contacto hasta el siguiente.

7. Métricas y gestión del pipeline de consultoría: Define el sistema de seguimiento del desarrollo de negocio. Incluye: los 10 KPIs del pipeline de consultoría (número de oportunidades por etapa, tasa de conversión entre etapas, ciclo de ventas medio por tipo de proyecto, valor del pipeline ponderado por probabilidad, tasa de éxito de propuestas por tipo de cliente y por servicio), reunión semanal de revisión de pipeline (quién participa, qué se revisa, qué decisiones se toman), sistema de forecast de ventas para los próximos 3 meses y criterios para cerrar oportunidades que llevan demasiado tiempo sin avanzar.

Proporciona scripts de conversación, plantillas de propuesta y un plan de acción para los primeros 60 días de implantación del sistema de desarrollo de negocio. Todo debe ser aplicable a una firma boutique donde los propios consultores hacen la venta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Sistematización del desarrollo de negocio en firmas de consultoría boutique',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de proyectos de consultoría estratégica con IA',
                'description'      => 'Planifica, ejecuta y entrega proyectos de consultoría estratégica con mayor eficiencia usando IA para estructurar el análisis, gestionar los equipos y asegurar la calidad de los entregables.',
                'prompt_content'   => <<<'EOT'
Eres un director de proyecto de consultoría estratégica con experiencia gestionando equipos de 3 a 8 consultores en proyectos de 3 a 9 meses de duración para grandes empresas. Tu especialidad es la gestión de proyectos de diagnóstico estratégico, transformación organizativa y definición de planes de negocio en entornos de alta complejidad y con clientes exigentes.

Contexto del proyecto a gestionar:
- Proyecto de diagnóstico estratégico y plan de crecimiento para una empresa industrial española
- Cliente: fabricante de componentes industriales con 350 empleados y 45 millones de euros de facturación
- Objetivo del proyecto: definir la estrategia de crecimiento para los próximos 5 años en un contexto de transformación del sector (electrificación de la automoción, nearshoring)
- Equipo de la firma: director de proyecto + 3 consultores (1 senior, 2 junior) + soporte de análisis de datos
- Duración: 4 meses, 22 jornadas de trabajo en cliente, presupuesto de 180.000 euros
- Reto: el cliente tiene expectativas muy altas y el equipo tiene experiencia limitada en el sector industrial

Desarrolla el sistema completo de gestión del proyecto de consultoría:

1. Planificación del proyecto: Diseña el plan de trabajo completo del proyecto. Incluye: estructura de fases del proyecto (diagnóstico inicial, análisis estratégico, desarrollo de alternativas, recomendaciones y plan de implementación), hitos y entregables en cada fase con fechas concretas, plan de entrevistas con los directivos del cliente (quién entrevistar, qué preguntar en cada entrevista, cómo sintetizar los resultados), gestión de la carga de trabajo del equipo semana a semana para evitar picos y cuellos de botella, y qué análisis cuantitativos y cualitativos hay que completar en cada fase.

2. Estructuración del análisis estratégico: Define el framework de análisis que guiará el proyecto. Incluye: los marcos estratégicos más adecuados para este proyecto (análisis de cadena de valor, análisis de las 5 fuerzas de Porter, análisis de tendencias de industria, benchmarking con competidores europeos), cómo estructurar la hypothesis tree para organizar el análisis (cuáles son las preguntas clave que el proyecto debe responder), proceso de validación de hipótesis con datos del cliente y del mercado, cómo gestionar las sorpresas durante el análisis cuando los datos contradicen las hipótesis iniciales y estructura del issue tree que guía el trabajo del equipo durante todo el proyecto.

3. Gestión del equipo de consultores: Diseña el sistema de gestión del equipo durante el proyecto. Incluye: reunión diaria de equipo durante las semanas de trabajo intenso en cliente (estructura, duración, qué se revisa), proceso de asignación de análisis a los consultores (quién hace qué, en qué plazo, con qué criterios de calidad), sistema de revisión del trabajo de los consultores junior por el senior y por el director de proyecto, cómo gestionar los conflictos dentro del equipo cuando hay discrepancias sobre el enfoque del análisis, plan de desarrollo para los consultores junior durante el proyecto (qué aprenderán, cómo les das feedback) y gestión del bienestar del equipo en proyectos intensos con viajes frecuentes.

4. Gestión de la relación con el cliente: La relación con el cliente durante el proyecto es tan importante como el análisis. Diseña el sistema de gestión. Incluye: cadencia de reuniones de seguimiento con el cliente (kick-off, reuniones de avance semanales o quincenales, steering committee con el comité de dirección), cómo gestionar la comunicación cuando los hallazgos intermedios son incómodos para el cliente, protocolo para manejar las peticiones de cambio de alcance durante el proyecto (nuevos análisis, cambios de enfoque, extensión del plazo), cómo involucrar al equipo interno del cliente en el análisis sin que esto desvíe el proyecto y gestión de las expectativas del cliente sobre el contenido y el timing de los entregables.

5. Control de calidad de los entregables: La calidad de los entregables determina la satisfacción del cliente y las referencias futuras. Diseña el proceso de control de calidad. Incluye: checklist de calidad para cada tipo de entregable (diagnóstico, análisis de mercado, modelo financiero, presentación de recomendaciones), proceso de revisión por pares (el consultor senior revisa el trabajo del junior, el director revisa el trabajo del senior), criterios para decidir cuándo un análisis está listo para mostrarse al cliente, gestión de los errores cuando se detectan en el entregable antes de la reunión con el cliente y proceso de incorporación del feedback del cliente para mejorar los entregables.

6. Uso de IA en la ejecución del proyecto: Integra las herramientas de IA en el flujo de trabajo de consultoría. Incluye: uso de Claude para analizar grandes volúmenes de documentación del cliente (informes anuales, planes estratégicos, actas de comité de dirección) y extraer los insights relevantes, automatización del análisis de competidores con IA (búsqueda, síntesis y estructuración de información pública), generación del primer borrador de las secciones del informe a partir de las notas del consultor, uso de IA para la traducción y localización de benchmarks internacionales y cómo mantener la confidencialidad del cliente cuando se usan herramientas de IA externas.

7. Cierre del proyecto y gestión del conocimiento: El cierre del proyecto es una oportunidad para aprender y para generar negocio futuro. Diseña el proceso. Incluye: reunión de retrospectiva interna del equipo (qué salió bien, qué mejoraríamos, qué aprendimos del sector), proceso de documentación del caso de éxito del proyecto para el repositorio interno de la firma, encuesta de satisfacción del cliente y gestión de los resultados, cómo convertir el proyecto cerrado en una referencia para nuevos proyectos similares y protocolo de seguimiento del cliente durante los 12 meses posteriores al proyecto para identificar oportunidades de continuación.

Proporciona plantillas de plan de trabajo, issue tree tipo para proyectos de estrategia industrial y checklist de gestión de proyectos de consultoría. Todo debe ser aplicable desde el primer día del proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestión eficiente de proyectos de consultoría estratégica con equipos pequeños y clientes exigentes',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento y cultura en firmas de consultoría con IA',
                'description'      => 'Atrae, desarrolla y retiene a los mejores consultores usando IA para diseñar programas de carrera, gestionar el desempeño y construir una cultura de alto rendimiento.',
                'prompt_content'   => <<<'EOT'
Eres un director de Recursos Humanos con especialización en firmas de servicios profesionales: consultoría de negocio, auditoría y asesoramiento legal. Conoces las particularidades de gestionar el talento en entornos de alta exigencia intelectual, con estructuras muy jerarquizadas (analyst, associate, manager, director, socio), alta rotación voluntaria y una cultura donde el conocimiento y el cliente son el centro de todo.

Contexto de la firma:
- Boutique de consultoría estratégica con 18 consultores y 4 socios
- Rotación anual: 28% (el promedio del sector en España es 22%)
- Perfil del equipo: mayoritariamente jóvenes de 25-33 años con MBA o doble grado
- Problema: los consultores más brillantes se van a los 2-3 años para emprender, para cliente interno o para Big Four
- Cultura actual: muy orientada a la entrega de proyectos, poco enfoque en el desarrollo de las personas
- Compensación: por encima del mercado en salario base, sin sistema de bonus claro ni plan de carrera estructurado

Desarrolla la estrategia completa de gestión del talento para la firma:

1. Diagnóstico de la rotación y las causas profundas: Diseña el proceso de diagnóstico. Incluye: análisis de las entrevistas de salida de los últimos 12 meses para identificar patrones (qué dicen los consultores que se van, qué no dicen pero se puede inferir), encuesta de clima laboral específica para consultoras (qué preguntas medir: autonomía, desarrollo, mentoría, relación con socios, compensación, trabajo interesante, cultura de feedback), benchmarking de las condiciones laborales de la firma frente a competidores directos y consultoras independientes y mapa de los momentos críticos de la carrera en los que se decide quedarse o irse.

2. Propuesta de valor al consultor: ¿Por qué un consultor brillante debería elegir esta firma frente a McKinsey, un unicornio o una empresa cliente? Diseña la Employee Value Proposition específica para consultores. Incluye: los elementos de la propuesta de valor que la firma puede ofrecer y McKinsey no puede (proximidad al socio, participación en el desarrollo de negocio, variedad de proyectos, posibilidad de convertirte en socio), cómo comunicar la propuesta de valor en el proceso de selección, en LinkedIn y en las universidades de referencia, plan de experiencia del consultor en los primeros 90 días que materializa la propuesta de valor y diferencias en la propuesta de valor según el nivel del consultor (junior, senior, manager).

3. Plan de carrera y desarrollo profesional: La falta de plan de carrera claro es una de las principales causas de rotación en consultoría. Diseña el sistema. Incluye: mapa de carrera con los niveles de la firma (analista → consultor → consultor senior → manager → director → socio), competencias requeridas en cada nivel con criterios objetivos de evaluación, criterios de promoción transparentes (tiempo mínimo en cada nivel, proyectos liderados, evaluaciones de socios y clientes, aportación al desarrollo de negocio), proceso de evaluación semestral de desempeño adaptado al entorno de consultoría y qué pasa cuando alguien no está en el camino de convertirse en socio pero es un excelente consultor (track de especialista).

4. Programa de mentoría y desarrollo: El desarrollo de los consultores junior es la inversión más rentable de la firma. Diseña el programa. Incluye: asignación de mentor (uno de los socios o directores) para cada consultor desde el primer día, estructura de las sesiones de mentoría (frecuencia, agenda tipo, qué cubre el mentor y qué no), programa de formación técnica interna (metodologías de análisis, modelización financiera, presentación ejecutiva, gestión de clientes), acceso a formación externa (certificaciones, cursos ejecutivos, MBA part-time parcialmente financiado por la firma) y cómo el mentor ayuda al consultado a navegar las decisiones de carrera en momentos críticos.

5. Sistema de compensación y reconocimiento: El sistema de bonus actual no es claro ni motivador. Diseña el nuevo sistema. Incluye: estructura de compensación total (salario base + bonus + beneficios) con bandas salariales por nivel benchmarkadas con el mercado, sistema de bonus basado en criterios transparentes (desempeño individual evaluado por socios y clientes, aportación al desarrollo de negocio, mentoría a junior, contribución a la cultura), beneficios no monetarios que valoran los consultores jóvenes (flexibilidad de localización, semanas de trabajo remoto, budget de formación propio, tiempo libre para proyectos personales en períodos de menor carga), sistema de reconocimiento público (en reuniones de equipo, en LinkedIn de la firma) y modelo de participación en el equity de la firma para los perfiles que quieren convertirse en socio.

6. Cultura de feedback y aprendizaje continuo: La cultura de una firma de consultoría se construye proyecto a proyecto. Diseña el sistema de cultura y feedback. Incluye: feedback tras cada proyecto (entre todos los miembros del equipo, en ambas direcciones), cultura de feedback radical y directo donde se puede mejorar sin que eso sea negativo para la carrera, retrospectivas de equipo post-proyecto que capturan aprendizajes para la firma, sistema de gestión del conocimiento donde los consultores comparten sus aprendizajes de cada sector y tipo de proyecto y cómo los socios modelan la cultura de feedback siendo los primeros en pedirlo y recibirlo.

7. Reclutamiento de talento diferencial: Para bajar la rotación, también hay que contratar mejor. Diseña el proceso de selección. Incluye: perfil del consultor ideal para esta boutique (no solo capacidades técnicas, sino también valores, actitud y ambición que encajan con la cultura), proceso de selección específico para consultoría (caso de negocio, entrevista de fit cultural, referencia de proyectos previos), cómo encontrar a los candidatos antes de que estén buscando activamente (presencia en universidades, LinkedIn, comunidades de alumni), cómo evaluar el potencial de convertirse en socio desde el proceso de selección y gestión de la oferta cuando el candidato tiene contraofertas.

Incluye plantillas de evaluación de desempeño, guión de conversación de feedback y plan de onboarding para los primeros 90 días. Todo adaptado a la realidad de una boutique de consultoría española.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Reducción de la rotación y construcción de una cultura de alto rendimiento en firmas de consultoría',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelización financiera y valoración de empresas para consultores con IA',
                'description'      => 'Desarrolla modelos financieros sólidos y valoraciones de empresas de alta calidad usando IA para acelerar el análisis cuantitativo en proyectos de consultoría estratégica.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero y consultor de valoración de empresas con amplia experiencia en proyectos de M&A, due diligence financiera, planificación estratégica y reestructuración financiera. Tu metodología combina el rigor cuantitativo de los modelos financieros con la comprensión profunda del negocio que hace que los números cuenten una historia.

Contexto del proyecto financiero:
- Proyecto de valoración para una empresa industrial española en proceso de venta
- Empresa: fabricante de componentes metálicos para automoción, 280 empleados, 38 millones de facturación
- Situación: los propietarios familiares quieren vender a un fondo de capital privado
- Posición financiera: empresa muy sana, EBITDA del 14%, deuda neta cero, pero con alta dependencia de 3 clientes (70% de la facturación)
- Objetivo: preparar el Information Memorandum y el modelo financiero de valoración para el proceso de venta
- Compradores potenciales: 3-4 fondos de capital privado con experiencia en el sector industrial

Desarrolla el sistema completo de análisis financiero y valoración:

1. Análisis financiero histórico y normalización: Antes de valorar, hay que entender y limpiar los números. Diseña el proceso de análisis. Incluye: metodología de análisis de los estados financieros de los últimos 5 años (cuenta de resultados, balance, flujo de caja), identificación y cuantificación de los ajustes de normalización típicos en empresas familiares (salarios de familia fuera de mercado, gastos personales como gastos de empresa, alquiler de inmuebles del propietario a precio no de mercado), reconstrucción del EBITDA normalizado que es la base de la valoración, análisis de la evolución de los márgenes y de los ratios financieros clave y construcción del track record financiero normalizado para presentar a los compradores.

2. Modelo de proyecciones financieras: El modelo de proyecciones a 5 años es el corazón del proceso de venta. Diseña el modelo. Incluye: estructura del modelo financiero (cuenta de resultados proyectada, balance, flujo de caja libre) con las fórmulas clave, hipótesis de ingresos (crecimiento de volumen por cliente, evolución de precios, posibles nuevos clientes) y cómo justificarlas con datos de mercado, hipótesis de costes (estructura de costes fija vs. variable, evolución del coste de los materiales, impacto de la automatización prevista), inversiones en capex previstas y su impacto en la capacidad productiva y construcción de los 3 escenarios (conservador, base y optimista) con los rangos de EBITDA y free cash flow resultantes.

3. Metodología de valoración por múltiplos y DCF: Diseña el proceso de valoración completo. Incluye: selección y análisis del panel de comparables cotizados europeos en el sector de componentes industriales (múltiplos de EBITDA, EV/Ventas, PER), análisis de transacciones comparables en M&A de componentes industriales en los últimos 3 años (múltiplos de compra pagados), construcción del modelo DCF (descuento de flujos de caja libres): tasa de descuento (WACC), valor terminal y sensibilidades, rango de valoración resultante de combinar los distintos métodos y cómo argumentar ante el comprador el múltiplo de EBITDA que corresponde a esta empresa considerando su tamaño, concentración de clientes y perspectivas de crecimiento.

4. Análisis de los factores de riesgo y mitigantes: El principal problema de esta empresa es la concentración de clientes. Diseña el análisis de riesgos para el Information Memorandum. Incluye: cuantificación del riesgo de concentración (escenario de pérdida de cada cliente principal y su impacto en el EBITDA), análisis de la solidez de las relaciones con los clientes principales (contratos, duración, índice de renovación, barreras de cambio), factores mitigantes del riesgo (know-how difícil de replicar, certificaciones de calidad, dependencia del cliente respecto al proveedor) y plan de diversificación de clientes que el equipo directivo puede presentar al comprador para reducir el descuento por riesgo de concentración.

5. Estructura del Information Memorandum: El Information Memorandum es el documento de marketing del proceso de venta. Diseña su estructura completa. Incluye: las 8-10 secciones del IM (resumen ejecutivo, descripción del negocio, mercado y competencia, modelo operativo, equipo directivo, histórico financiero, proyecciones financieras, proceso de venta), el executive summary de 2 páginas que captura la tesis de inversión del comprador, cómo presentar la concentración de clientes de forma honesta pero minimizando el impacto en la percepción del comprador y los materiales complementarios del IM (modelo financiero en Excel, data room con documentación legal y financiera).

6. Código Python para análisis financiero: Proporciona implementaciones de: (a) función que lee los estados financieros de varios años desde un Excel y calcula automáticamente los ratios financieros clave (márgenes, ROE, ROCE, conversión de EBITDA a FCF), (b) modelo de valoración por DCF con sensibilidades: tabla que muestra el valor enterprise en función de la tasa de crecimiento en el valor terminal (eje X) y el WACC (eje Y), (c) visualización del análisis de sensibilidad del EBITDA ante cambios en el volumen de ventas y el precio de los materiales y (d) gráfico de football field que resume el rango de valoración resultante de cada metodología.

7. Gestión del proceso de venta con el comprador: Una vez que el IM está listo, comienza la fase de negociación. Diseña el proceso. Incluye: cómo preparar al equipo directivo del cliente para las reuniones con los fondos de capital privado (qué preguntas hacen los fondos, cómo responder a las preguntas difíciles), proceso de due diligence financiera por parte del comprador (qué documentación preparar en el data room, cómo gestionar las peticiones de información adicional), negociación del precio y las condiciones (precio, earn-out, garantías, cláusulas de no competencia) y cómo defender la valoración cuando el comprador quiere ajustar el EBITDA normalizado a la baja.

Proporciona fórmulas de Excel comentadas, estructura del data room y plantillas de análisis financiero. Todo con referencias al mercado de M&A industrial en España y Europa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 80,
                'use_case'         => 'Preparación del proceso de venta de una empresa industrial con IM y modelo de valoración',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Asesoramiento legal en reestructuración y reorganización empresarial con IA',
                'description'      => 'Navega el marco legal de las reestructuraciones empresariales, reorganizaciones societarias y procesos de M&A en España usando IA como asistente jurídico especializado.',
                'prompt_content'   => <<<'EOT'
Eres un abogado mercantilista con especialización en derecho de sociedades, M&A, reestructuraciones empresariales y procesos concursales. Tienes amplia experiencia asesorando a empresas medianas y grandes en operaciones de compraventa, fusiones, escisiones, restructuraciones de deuda y pre-concursales en el marco del derecho español y europeo.

Contexto de la operación legal:
- Grupo industrial familiar con 4 sociedades operativas y una holding
- Facturación consolidada: 65 millones de euros, 420 empleados
- Situación: los propietarios quieren preparar el grupo para una venta parcial a un fondo de capital privado (el fondo entraría con un 40% del capital)
- Estructura actual: compleja y heredada de la historia del grupo, con solapamientos entre sociedades, activos inmobiliarios mezclados con actividad operativa y participaciones cruzadas
- Necesidad legal: simplificar la estructura antes de la entrada del fondo y estructurar la operación de M&A

Desarrolla el asesoramiento legal completo:

1. Auditoría de la estructura societaria actual: Diseña el proceso de due diligence legal interna. Incluye: inventario completo de las sociedades del grupo (objeto social, participaciones, administradores, pactos de socios existentes), identificación de los activos y pasivos en cada sociedad y dónde deberían estar estratégicamente, análisis de los riesgos legales de la estructura actual (responsabilidades cruzadas, garantías personales de los propietarios, litigios pendientes o latentes), revisión de los contratos comerciales clave de cada sociedad para identificar cláusulas de cambio de control y cómo documentar los hallazgos de la auditoría en un informe que sirva de base para la reestructuración.

2. Diseño de la nueva estructura societaria: Basándose en la auditoría, diseña la estructura simplificada para la entrada del fondo. Incluye: estructura holding óptima para la entrada de un fondo de capital privado (una holding limpia por encima de las operativas, sin activos inmobiliarios mezclados), separación de los activos inmobiliarios en una sociedad patrimonial independiente (para que queden en el patrimonio familiar y no entren en la venta), consolidación de las sociedades operativas que tienen objetos solapados mediante fusión o absorción y cronograma de las operaciones de reestructuración (orden en que deben ejecutarse para minimizar riesgos fiscales y legales).

3. Operaciones de reorganización societaria: Diseña el proceso legal de cada operación de reestructuración. Incluye: proceso de fusión por absorción entre dos sociedades del grupo (documentación, plazos, acuerdos de socios, inscripción registral, plazo para el derecho de oposición de acreedores), proceso de escisión de los activos inmobiliarios a la sociedad patrimonial (tipo de escisión más adecuado: parcial o total, tratamiento fiscal de la operación, requisitos de valoración), proceso de aportación de activos o de participaciones sociales entre sociedades del grupo y implicaciones laborales de las reorganizaciones (subrogación de contratos laborales en caso de transmisión de empresa).

4. Estructuración de la entrada del fondo de capital privado: El acuerdo con el fondo es la operación principal. Diseña la estructura jurídica. Incluye: opciones de estructura de la operación (compraventa de acciones de la holding, ampliación de capital con entrada del fondo, combinación de compraventa + ampliación), ventajas e inconvenientes de cada estructura para el vendedor familiar y para el fondo, cláusulas esenciales del pacto de socios entre la familia y el fondo (gobierno corporativo: quórums, vetos, representación en el consejo; derechos económicos: preferencia en dividendos, anti-dilución; derechos de salida: tag-along, drag-along, derecho de primera oferta, plazo y mecanismo de salida del fondo), declaraciones y garantías que la familia vendedora da al fondo sobre el estado de la empresa y régimen de indemnización.

5. Due diligence legal por parte del comprador: El fondo realizará su propia due diligence legal. Diseña el proceso desde el lado del vendedor. Incluye: preparación del data room legal (qué documentos incluir: estatutos, libros de actas, contratos clave, litigios, propiedad intelectual, inmuebles, licencias), cómo gestionar las peticiones de información del comprador (qué facilitar sin restricciones, qué dar con acuerdo de confidencialidad reforzado), cómo responder al legal due diligence report del comprador que identificará riesgos que quiere reflejar en precio o en garantías, negociación de las garantías y el régimen de indemnización y preparación de los cierres notariales.

6. Implicaciones fiscales de la reestructuración: Las operaciones de reorganización tienen impacto fiscal significativo. Explica: régimen fiscal de neutralidad en operaciones de reorganización empresarial (fusiones, escisiones, aportaciones de activos) y los requisitos para acogerse a él, tributación de la ganancia patrimonial de la familia vendedora en la transmisión del 40% al fondo y estructuras para diferir o reducir esa tributación, implicaciones del IVA o ITP en la transmisión de inmuebles dentro del grupo, deducibilidad de los gastos de asesoramiento de la operación de M&A y posibles comprobaciones de la Agencia Tributaria sobre las operaciones de reorganización y cómo anticiparlas.

7. Contratos e instrumentos legales de la operación: Lista y describe los documentos legales que se firmarán en la operación. Incluye: NDA (Acuerdo de confidencialidad) al inicio del proceso, LOI o Term Sheet no vinculante donde se acuerdan los términos principales, SPA (Share Purchase Agreement): contrato principal de compraventa de acciones, SHA (Shareholders Agreement): pacto de socios post-cierre, protocolo de cierre de la operación y documentos de cierre (certificados de registro, poderes, actas de cambio de administradores) y documentos de la reestructuración previa (escrituras de fusión, escisión, modificación de estatutos).

Incluye modelos de cláusulas contractuales, cronograma tipo de una operación de M&A de 6 meses y referencias al marco legal español aplicable (LSC, Ley 3/2009 de modificaciones estructurales, Ley 27/2014 del IS). Todo debe ser comprensible para el empresario no especialista en derecho.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Reestructuración y preparación de un grupo familiar para la entrada de capital privado',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de relaciones con clientes corporativos en consultoría con IA',
                'description'      => 'Diseña el sistema de gestión de cuentas y satisfacción del cliente en firmas de consultoría para fidelizar a los clientes estratégicos y multiplicar el negocio recurrente.',
                'prompt_content'   => <<<'EOT'
Eres un director de cuenta y gestión de relaciones con clientes corporativos en una firma de consultoría estratégica. Tu especialidad es construir relaciones a largo plazo con los clientes más importantes de la firma, asegurar su satisfacción y convertir cada proyecto finalizado en la base de la siguiente oportunidad de negocio.

Contexto de la firma:
- Boutique de consultoría estratégica con 18 consultores y 4 socios
- Base de clientes: 35 empresas activas, de las cuales 8 representan el 65% de la facturación
- Problema: la relación con los clientes se gestiona de forma ad hoc, dependiendo de la iniciativa personal de cada socio
- Tasa de repetición: solo el 40% de los clientes contrata un segundo proyecto (el objetivo del sector es 70%)
- NPS de clientes: no se mide sistemáticamente
- Oportunidad: la firma tiene un conocimiento profundo de sus clientes pero no lo aprovecha para generar negocio adicional

Desarrolla el sistema completo de gestión de relaciones con clientes:

1. Segmentación y priorización de la cartera de clientes: No todos los clientes merecen la misma atención. Diseña el sistema de segmentación. Incluye: criterios de segmentación de la cartera (facturación histórica, potencial de crecimiento de la cuenta, alineación estratégica con las capacidades de la firma, calidad de la relación con el decisor, probabilidad de repetición), clasificación de los clientes en 3 segmentos (cuentas estratégicas: inversión máxima en la relación; cuentas de crecimiento: potencial alto sin desarrollar; cuentas transaccionales: proyectos puntuales sin perspectiva de recurrencia), recursos y atención asignados a cada segmento y protocolo para reclasificar cuentas cuando cambia su situación.

2. Plan de cuenta para clientes estratégicos: Diseña la metodología de gestión de cuentas estratégicas. Incluye: estructura del plan de cuenta anual (situación actual de la relación, mapa de contactos clave, análisis de las necesidades estratégicas del cliente para los próximos 12 meses, oportunidades de proyecto identificadas, acciones de relación planificadas, objetivo de facturación), proceso de revisión trimestral del plan de cuenta, cómo involucrar a varios consultores de la firma en la relación con el cliente para reducir la dependencia de un único socio y cómo usar el conocimiento acumulado en proyectos anteriores para demostrar comprensión del negocio del cliente en cada interacción.

3. Medición de la satisfacción del cliente: La firma no mide sistemáticamente la satisfacción. Diseña el sistema. Incluye: encuesta de satisfacción post-proyecto (qué preguntar, cómo plantear las preguntas para obtener respuestas honestas, cómo distinguir la satisfacción con el consultor de la satisfacción con los resultados), NPS transaccional y relacional (cómo calcularlo, con qué frecuencia medirlo, cómo actuar según el score), conversación de satisfacción cara a cara con el decisor 4-6 semanas después de finalizar el proyecto, sistema de gestión de detractores (protocolo cuando un cliente da un NPS bajo) y cómo usar los datos de satisfacción para mejorar la metodología de la firma.

4. Generación de negocio adicional en cuentas existentes: El cliente que ya confía en la firma es el más fácil de expandir. Diseña el sistema de cross-selling y up-selling. Incluye: proceso de identificación de nuevas necesidades durante la ejecución del proyecto (señales de nuevas oportunidades: conversaciones del cliente, problemas que aparecen durante el diagnóstico, cambios en el entorno del cliente), cómo hacer una propuesta de extensión del proyecto o de nuevo proyecto sin que parezca comercial, timing óptimo para plantear la siguiente propuesta después de terminar un proyecto, cómo involucrar a otros socios de la firma para ampliar el alcance de los servicios y gestión de las objeciones cuando el cliente dice que no tiene presupuesto para otro proyecto.

5. Gestión de los momentos críticos de la relación: Algunos momentos en la relación con el cliente son determinantes para la fidelización. Diseña el protocolo para cada momento. Momentos clave: inicio del proyecto (kick-off que establece expectativas claras), primeras semanas (gestión de las dudas iniciales del cliente sobre el enfoque), entrega de resultados incómodos (cuando el diagnóstico revela problemas que el cliente no quería ver), cierre del proyecto (celebración del éxito y próximos pasos), post-proyecto (seguimiento de la implementación de las recomendaciones), renovación o extensión del contrato y situación de crisis (si algo sale mal en el proyecto).

6. Comunicación proactiva con el cliente durante el proyecto: La falta de comunicación es la principal causa de insatisfacción en consultoría. Diseña el sistema de comunicación. Incluye: cadencia y formato de las reuniones de seguimiento (semanal, quincenal, mensual según la fase del proyecto), estructura del informe de avance quincenal (qué hemos hecho, qué hemos encontrado, qué haremos en las próximas semanas, problemas o riesgos identificados), protocolo de escalación cuando hay problemas (cómo comunicar malas noticias de forma constructiva), gestión de las expectativas cuando el proyecto va a tardar más o a costar más de lo previsto y documentación de los acuerdos verbales con el cliente para evitar malentendidos.

7. Sistema de gestión de la información del cliente: La firma acumula conocimiento del cliente en cada proyecto pero no lo gestiona bien. Diseña el sistema. Incluye: CRM para la gestión de cuentas de consultoría (qué información registrar: contactos, proyectos, conversaciones, oportunidades, documentos), proceso de transferencia de conocimiento cuando cambia el equipo de proyecto o el socio responsable de la cuenta, repositorio de documentación de cada cliente (informes previos, datos financieros, acuerdos específicos de la relación) y cómo usar la IA para sintetizar el historial de un cliente antes de una reunión importante y llegar bien preparado.

Proporciona plantillas de plan de cuenta, encuesta de satisfacción y guión de la reunión de seguimiento. Todo debe ser aplicable con los recursos de una boutique de consultoría donde los propios consultores gestionan las relaciones con los clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Fidelización de clientes corporativos y crecimiento del negocio recurrente en consultoría',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor independiente de estrategia empresarial con IA como socio de trabajo',
                'description'      => 'Construye y escala tu práctica independiente de consultoría estratégica usando IA para entregar proyectos de calidad de gran firma siendo un profesional en solitario.',
                'prompt_content'   => <<<'EOT'
Eres un consultor independiente de estrategia y negocio con más de 10 años de experiencia en firmas de consultoría de primera línea que has decidido lanzar tu propia práctica independiente. Conoces la metodología, los estándares de calidad y los tipos de proyectos de las grandes firmas, y ahora quieres replicar esa calidad trabajando de forma autónoma con clientes medianos que no pueden permitirse una Big Four pero merecen un asesoramiento estratégico de primer nivel.

Situación de tu práctica:
- Consultor independiente con 2 años de práctica propia después de 8 años en una firma de consultoría de primer nivel
- Servicios: proyectos de estrategia corporativa, planificación de negocios, análisis de mercado y preparación de empresas para operaciones de M&A
- Clientes actuales: 6 empresas medianas en sectores industriales y de servicios
- Ingresos: 120.000 euros anuales, objetivo de 200.000 en 2 años trabajando las mismas horas
- Mayor limitación: siendo solo, no puedes hacer proyectos grandes ni complejos que requieran equipo multidisciplinar
- Mayor ventaja: relación directa con el CEO y el consejo, sin la burocracia de la firma

Desarrolla el sistema completo para escalar tu práctica de consultoría independiente:

1. Posicionamiento y especialización de la práctica: Para cobrar más sin trabajar más horas, necesitas especializarte más. Diseña tu posicionamiento estratégico. Incluye: los 2-3 tipos de proyecto en los que eres el mejor opción para las empresas medianas (dónde tu experiencia en gran firma te da una ventaja irreemplazable), el perfil del cliente ideal que puede pagar tus tarifas y valora lo que ofreces (tamaño, sector, momento de transformación, tipo de decisor), cómo comunicar tu propuesta de valor diferencial frente a las Big Four (más ágil, más barato, acceso directo al experto) y frente a los consultores junior que se hacen independientes (más experiencia, más rigor, resultados comprobados) y cómo posicionar tu práctica en LinkedIn como referente en tu especialidad.

2. IA como multiplicador de capacidad: La IA te permite hacer el trabajo de un equipo de 3 personas siendo solo. Diseña tu sistema de trabajo con IA. Incluye: uso de Claude para el análisis de documentación del cliente (informes anuales, planes estratégicos, actas de reuniones) y extracción de insights en minutos en lugar de días, automatización del análisis de competidores y del sector (búsqueda, síntesis y estructuración de información con LLM), generación del primer borrador de secciones del informe a partir de tus notas de entrevistas, proceso de revisión y mejora de los textos generados por IA para que suenen con tu voz y criterio y límites del uso de IA en consultoría: qué puedes delegar en la IA y qué requiere tu juicio estratégico irremplazable.

3. Diseño de servicios y tarifas para escalar: Para llegar a 200.000 euros sin multiplicar las horas, necesitas rediseñar tus servicios. Diseña el portfolio de servicios. Incluye: servicio de diagnóstico estratégico en 6 semanas (alcance, entregables, precio: 25.000-40.000 euros), servicio de acompañamiento estratégico mensual para CEOs (retainer: 3.000-5.000 euros/mes, qué incluye, cómo limitarlo para que sea sostenible), pack de preparación para M&A (alcance, duración, precio y cuándo ofrecerlo), productos digitales derivados de tu conocimiento (curso online, plantillas, informes sectoriales) y cómo escalar incrementando el precio de los servicios existentes en lugar de añadir más horas.

4. Captación de clientes siendo un consultor independiente: Sin el respaldo de una marca conocida, la captación es tu mayor reto. Diseña el sistema de desarrollo de negocio. Incluye: estrategia de LinkedIn para posicionarte como referente en tu especialidad (qué publicar, con qué frecuencia, cómo medir el impacto en la captación), red de prescriptores que te recomiendan clientes (despachos de abogados, asesores fiscales, banqueros, inversores) y cómo cultivar esa red, uso de podcasts, ponencias y artículos de opinión para generar visibilidad antes de que el cliente te busque, proceso de seguimiento de los contactos que muestran interés pero no están listos para contratar y cómo convertir cada proyecto finalizado en 2-3 referencias para nuevos clientes.

5. Gestión de proyectos siendo consultor en solitario: Sin equipo, la gestión del tiempo y de los proyectos simultáneos es crítica. Diseña el sistema. Incluye: cuántos proyectos puedes llevar en paralelo sin perder calidad (según la intensidad de cada tipo de proyecto), sistema de planificación semanal para equilibrar el trabajo en proyectos activos, el desarrollo de negocio y el desarrollo de contenido, proceso de onboarding de nuevos proyectos que establece expectativas claras y reduce la carga de gestión durante el proyecto, protocolo para manejar los picos de trabajo cuando varios proyectos exigen lo máximo al mismo tiempo y cómo manejar los meses de menor carga para avanzar en el desarrollo de negocio y en los servicios digitales.

6. Colaboración con otros profesionales independientes: Para abordar proyectos más grandes, necesitas una red de colaboradores. Diseña el ecosistema de colaboración. Incluye: perfiles de profesionales independientes que complementan tu especialidad (analistas financieros, expertos en operaciones, especialistas en RRHH, diseñadores de presentaciones), cómo estructurar las colaboraciones (subcontratación por proyecto, colaboración en partes específicas del proyecto, alianza para presentar propuestas conjuntas), modelo de reparto de honorarios en proyectos colaborativos, cómo gestionar la calidad cuando hay partes del proyecto que no haces tú directamente y cómo construir una red de colaboradores de confianza antes de que los necesites.

7. Gestión financiera y administrativa de la práctica: La gestión de la práctica independiente tiene sus propias complejidades. Diseña el sistema. Incluye: estructura de facturación y cobro recomendada para proyectos de consultoría (anticipo al inicio, pagos mensuales durante el proyecto, liquidación final), gestión del IVA y el IRPF trimestral con previsión de los pagos a Hacienda, política de anticipos y gestión de impagados, estructura de costes fijos de la práctica y margen neto objetivo, provisión para los meses sin proyecto y para la formación continua y cuándo tiene sentido crear una sociedad limitada en lugar de facturar como autónomo.

Proporciona plantillas de propuesta de proyecto, system prompt para Claude como asistente de consultoría estratégica y plan de acción para los primeros 6 meses de la práctica ampliada. Todo adaptado a la realidad del consultor independiente en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Escalar una práctica de consultoría independiente usando IA para multiplicar la capacidad de trabajo',
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
