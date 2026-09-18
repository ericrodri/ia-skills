<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills358Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Plan de gestión del cambio para transformación digital en marketing',
                'description'      => 'Aprende a diseñar un plan estructurado de gestión del cambio para liderar la transformación digital de un equipo de marketing. Este skill cubre comunicación interna, formación y métricas de adopción para garantizar que los nuevos procesos y herramientas digitales se integren con éxito.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión del cambio organizacional con más de 15 años de experiencia liderando transformaciones digitales en departamentos de marketing de empresas medianas y grandes.

Tu tarea es ayudarme a crear un plan completo de gestión del cambio para la transformación digital de mi equipo de marketing. A continuación te doy el contexto de mi situación:

CONTEXTO DEL PROYECTO:
- Empresa: [describe el tamaño y sector]
- Equipo de marketing: [número de personas y perfiles]
- Cambios que se van a implementar: [nuevas herramientas, procesos o modelos de trabajo]
- Plazo estimado de la transformación: [meses o trimestres]
- Nivel de resistencia anticipada: [alto / medio / bajo]

FASES DEL PLAN QUE DEBES DESARROLLAR:

1. DIAGNÓSTICO INICIAL
Analiza el punto de partida del equipo: madurez digital actual, competencias existentes, brechas de habilidades y posibles focos de resistencia. Propón una encuesta o entrevista de diagnóstico con al menos 8 preguntas clave.

2. MAPA DE STAKEHOLDERS
Identifica a los actores clave: patrocinadores ejecutivos, líderes de equipo, usuarios finales y departamentos afectados. Para cada grupo, define su nivel de influencia, su posición ante el cambio y la estrategia de comunicación recomendada.

3. PLAN DE COMUNICACIÓN
Diseña una estrategia de comunicación interna en tres oleadas: antes del lanzamiento, durante la implementación y después de la estabilización. Incluye mensajes clave, canales, frecuencia y responsables.

4. PLAN DE FORMACIÓN Y CAPACITACIÓN
Desarrolla un itinerario de aprendizaje adaptado a los diferentes perfiles del equipo (directivos, ejecutivos de marketing, analistas, creadores de contenido). Incluye formatos recomendados (talleres, microlearning, mentorías) y criterios de evaluación de competencia.

5. GESTIÓN DE LA RESISTENCIA
Proporciona un catálogo de las 5 objeciones más comunes en transformaciones digitales de marketing y las respuestas argumentadas para cada una. Añade técnicas para convertir a los escépticos en defensores del cambio.

6. MÉTRICAS DE ADOPCIÓN
Define un cuadro de mando con KPIs de adopción tecnológica: porcentaje de usuarios activos en nuevas herramientas, reducción de procesos manuales, tiempo medio de onboarding, satisfacción del equipo (eNPS). Indica la frecuencia de medición y los umbrales de alerta.

7. PLAN DE SOSTENIBILIDAD
Explica cómo anclar los cambios en la cultura del equipo una vez terminada la fase de implementación: rituales de equipo, roles de champions digitales, revisiones periódicas y ciclos de mejora continua.

FORMATO DE ENTREGA:
- Estructura el plan como un documento ejecutivo con secciones claramente etiquetadas.
- Usa tablas para el mapa de stakeholders, el plan de comunicación y las métricas.
- Añade un cronograma de alto nivel en formato visual (semanas o meses).
- Cierra con una sección de riesgos y mitigaciones (mínimo 5 riesgos con probabilidad e impacto).

Sé específico, práctico y orientado a resultados. Evita generalidades y adapta cada recomendación al contexto que te he proporcionado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Liderar la adopción de nuevas herramientas y procesos digitales en el equipo de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Estrategia de adopción tecnológica para proyectos de transformación en equipos de desarrollo',
                'description'      => 'Diseña un plan técnico y humano para introducir nuevas tecnologías, frameworks o metodologías en un equipo de desarrollo de software. Incluye evaluación de impacto, migración gradual y formación técnica estructurada.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software y líder técnico con experiencia en transformaciones tecnológicas de equipos de ingeniería de software en empresas en crecimiento.

Tu misión es ayudarme a diseñar una estrategia completa de adopción tecnológica para introducir [nueva tecnología / framework / metodología] en mi equipo de desarrollo. Dame un plan detallado que cubra los siguientes aspectos:

CONTEXTO QUE DEBES CONSIDERAR:
- Stack tecnológico actual: [describe el stack existente]
- Tecnología a adoptar: [nombre y versión]
- Tamaño del equipo: [número de desarrolladores y seniority]
- Plazo disponible: [tiempo estimado]
- Riesgo de interrupción del servicio: [alto / medio / bajo]

SECCIONES DEL PLAN:

1. EVALUACIÓN DE IMPACTO TÉCNICO
Analiza cómo la nueva tecnología afecta al código existente, las dependencias, la infraestructura y los procesos de CI/CD. Genera una lista de los componentes más afectados y su nivel de riesgo.

2. ESTRATEGIA DE MIGRACIÓN GRADUAL
Propón un enfoque de adopción incremental: prueba piloto en un módulo o servicio, validación de resultados, expansión controlada al resto de la base de código. Define los criterios de éxito para avanzar de una fase a la siguiente.

3. PLAN DE FORMACIÓN TÉCNICA
Diseña un programa de upskilling para el equipo según niveles de seniority: juniors, mid-levels y seniors. Incluye recursos recomendados (documentación oficial, cursos, katas, pair programming) y una timeline realista de ramp-up.

4. GESTIÓN DE LA DEUDA TÉCNICA DURANTE LA TRANSICIÓN
Explica cómo priorizar y gestionar la deuda técnica que inevitablemente surge durante una migración tecnológica. Propón un backlog de refactoring y criterios de priorización.

5. PROTOCOLO DE ROLLBACK
Define un plan de contingencia claro: señales de alarma que disparan un rollback, pasos técnicos para revertir cambios de forma segura y criterios para decidir entre un rollback total o parcial.

6. MÉTRICAS DE ÉXITO DE LA ADOPCIÓN
Establece KPIs técnicos y de equipo: velocidad de entrega antes y después, tasa de errores en producción, cobertura de tests, satisfacción del desarrollador y tiempo de onboarding de nuevos miembros con la nueva tecnología.

7. COMUNICACIÓN CON STAKEHOLDERS NO TÉCNICOS
Redacta plantillas de comunicación para mantener informados a product managers, directivos y clientes sobre el progreso de la adopción sin entrar en tecnicismos innecesarios.

ENTREGABLES ESPERADOS:
- Documento de plan técnico estructurado por fases.
- Tabla de riesgos con probabilidad, impacto y mitigación.
- Checklist de validación para cada fase del rollout.
- Plantillas de comunicación listas para usar.

Sé pragmático: prioriza la estabilidad del sistema productivo y el bienestar del equipo sobre la velocidad de adopción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Introducir nuevas tecnologías en el equipo de desarrollo minimizando riesgos y fricción',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de usuario para facilitar la adopción de herramientas digitales',
                'description'      => 'Aplica principios de UX y diseño centrado en el usuario para crear experiencias que reduzcan la fricción en la adopción de nuevas herramientas digitales dentro de una organización. Incluye onboarding, tooltips contextuales y flujos de ayuda progresiva.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de UX especializado en change design y experiencias de adopción tecnológica dentro de organizaciones. Tienes experiencia diseñando los flujos de incorporación de herramientas internas y SaaS para empresas con más de 200 empleados.

Necesito tu ayuda para diseñar la experiencia de usuario que facilite la adopción de [nombre de la nueva herramienta o sistema] en mi organización. El objetivo es minimizar la resistencia, reducir los errores de uso y acelerar el tiempo hasta que los usuarios alcancen competencia plena.

CONTEXTO DEL PROYECTO:
- Herramienta o sistema a adoptar: [describe brevemente]
- Perfil de los usuarios finales: [nivel técnico, edad media, idioma principal]
- Canal de acceso principal: [web / escritorio / móvil]
- Puntos de dolor anticipados: [describe las tareas que generarán más fricción]

ÁREAS DE DISEÑO QUE DEBES CUBRIR:

1. ONBOARDING PROGRESIVO
Diseña un flujo de primera experiencia que introduzca las funcionalidades de mayor valor en el menor tiempo posible. Usa el modelo "empezar pequeño, ganar confianza, expandir". Incluye: pantalla de bienvenida, tour interactivo de máximo 5 pasos, primera acción significativa y momento de celebración (aha moment).

2. AYUDA CONTEXTUAL Y TOOLTIPS
Propón un sistema de ayuda en contexto: tooltips activados por hover, mensajes de orientación en campos de formulario, banners de sugerencia y paneles de ayuda lateral. Define cuándo mostrarlos y cómo no resultar intrusivos.

3. DISEÑO DE ESTADOS DE ERROR Y VACÍO
Crea guías de diseño para los estados más críticos: error de carga, formulario con campos incorrectos, pantallas vacías en el primer uso y estados de procesamiento largo. Cada estado debe incluir un mensaje amigable, una ilustración sugerida y una acción de recuperación clara.

4. PATRONES DE PROGRESSIVE DISCLOSURE
Explica cómo aplicar la revelación progresiva para no abrumar a usuarios nuevos con funciones avanzadas. Define qué funcionalidades se muestran en el nivel básico, intermedio y avanzado, y cómo se activan las transiciones entre niveles.

5. SISTEMA DE FEEDBACK Y MICROCOPY
Redacta el microcopy para los 10 momentos de mayor tensión en el uso de la herramienta: confirmaciones de acciones destructivas, mensajes de éxito, avisos de límite, estados de carga, etc. Sigue principios de claridad, brevedad y tono humano.

6. MÉTRICAS DE UX PARA MEDIR LA ADOPCIÓN
Define un conjunto de métricas de experiencia de usuario orientadas a adopción: tiempo hasta primera acción completada, tasa de finalización del onboarding, abandono en cada paso del flujo, Net Promoter Score interno. Sugiere herramientas de medición adecuadas.

7. PLAN DE ITERACIÓN
Propón un calendario de revisión del diseño de adopción: primera revisión a las 2 semanas, ajuste a los 30 días y evaluación completa a los 90 días. Incluye métodos de investigación (entrevistas de usuario, análisis de grabaciones de sesión, encuestas in-app).

ENTREGABLES ESPERADOS:
- Descripción detallada de cada flujo y componente de diseño.
- Lista de pantallas y estados a diseñar (wireframe list).
- Guía de microcopy lista para implementar.
- Dashboard de métricas de adopción desde el punto de vista de UX.

Orienta todas las recomendaciones hacia la reducción de fricción y el aumento de la confianza del usuario. Prioriza la claridad sobre la estética.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la experiencia de onboarding y adopción de herramientas digitales internas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Alineación de stakeholders en proyectos de transformación digital B2B',
                'description'      => 'Desarrolla un plan para identificar, comunicar y alinear a todos los grupos de interés clave en un proyecto de transformación digital enfocado en ventas B2B. Aprende a gestionar expectativas, resolver conflictos de prioridades y construir consenso ejecutivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de transformación digital especializado en proyectos B2B, con experiencia gestionando stakeholders en organizaciones complejas con múltiples unidades de negocio y tomadores de decisión.

Necesito que me ayudes a diseñar una estrategia completa de alineación de stakeholders para un proyecto de transformación digital que afecta directamente al proceso de ventas B2B de mi empresa.

CONTEXTO DE MI PROYECTO:
- Sector de la empresa: [describe el sector]
- Transformación que se va a implementar: [nuevo CRM, automatización de ventas, portal de cliente, etc.]
- Stakeholders principales identificados: [lista inicial de roles]
- Conflictos de interés conocidos: [describe si los hay]
- Plazo del proyecto: [duración estimada]

COMPONENTES DEL PLAN DE ALINEACIÓN:

1. MAPEO COMPLETO DE STAKEHOLDERS
Crea una matriz de stakeholders que incluya: nombre del rol, área funcional, nivel de autoridad (decisor / influenciador / afectado), posición inicial ante el proyecto (favorable / neutral / resistente) y su principal preocupación. Organiza la matriz por cuadrante de poder e interés.

2. ANÁLISIS DE INTERESES Y MOTIVACIONES
Para cada grupo de stakeholders clave, analiza qué ganan y qué pueden perder con la transformación. Identifica los "WIIFM" (What's In It For Me) y úsalos como base para la estrategia de comunicación y persuasión.

3. ESTRATEGIA DE COMUNICACIÓN DIFERENCIADA
Diseña un plan de comunicación específico para cada segmento de stakeholders: dirección ejecutiva, mandos intermedios, equipo de ventas y clientes clave afectados. Incluye mensajes, tono, frecuencia y canal para cada grupo.

4. GESTIÓN DE CONFLICTOS DE PRIORIDADES
Propón un protocolo para resolver conflictos cuando diferentes stakeholders tienen prioridades incompatibles. Incluye un proceso de escalación, criterios de desempate y técnicas de facilitación para reuniones de consenso.

5. CONSTRUCCIÓN DE COALICIÓN DE APOYO
Explica cómo identificar y activar a los champions del proyecto dentro de la organización. Define el perfil ideal de un champion, su rol, los recursos que necesitan y cómo mantener su motivación durante todo el proyecto.

6. PLAN DE SESIONES DE ALINEACIÓN
Diseña la cadencia de reuniones de stakeholders: reunión de lanzamiento, check-ins periódicos, revisiones de hitos y sesión de cierre. Para cada reunión, incluye agenda tipo, participantes recomendados y outputs esperados.

7. MEDICIÓN DE ALINEACIÓN
Define métricas para evaluar el grado de alineación a lo largo del proyecto: encuesta de pulso mensual, tracking de decisiones bloqueadas, porcentaje de stakeholders en posición favorable. Incluye un semáforo de alineación sencillo de comunicar a dirección.

ENTREGABLES ESPERADOS:
- Plantilla de matriz de stakeholders lista para completar.
- Guías de comunicación por perfil.
- Agenda tipo para cada tipo de sesión de alineación.
- Dashboard de seguimiento de alineación.

Adopta un enfoque pragmático: en entornos B2B la política interna es tan importante como la tecnología. Ayúdame a navegar la complejidad humana del proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar la política interna y alinear a todos los decisores en proyectos de transformación digital',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Framework de medición del ROI en iniciativas de transformación digital',
                'description'      => 'Construye un modelo riguroso para calcular y comunicar el retorno sobre la inversión de proyectos de transformación digital desde la perspectiva de producto. Aprende a vincular métricas de producto con resultados financieros del negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior con especialización en economía de producto y medición de valor en iniciativas de transformación digital. Tienes experiencia presentando business cases y reporting de ROI a comités ejecutivos y juntas directivas.

Necesito que me ayudes a construir un framework completo para medir el ROI de nuestra iniciativa de transformación digital. El objetivo es poder demostrar con datos el valor generado y tomar decisiones de inversión informadas.

CONTEXTO DE MI INICIATIVA:
- Descripción de la transformación: [digitalización de procesos, nueva plataforma, automatización, etc.]
- Inversión total estimada: [coste del proyecto]
- Horizonte temporal de retorno esperado: [meses o años]
- Métricas de negocio que se espera impactar: [lista de KPIs del negocio]

COMPONENTES DEL FRAMEWORK DE MEDICIÓN:

1. CATEGORIZACIÓN DE BENEFICIOS
Clasifica los beneficios esperados en tres categorías: beneficios financieros directos (ahorro de costes, incremento de ingresos), beneficios financieros indirectos (mejora de productividad, reducción de riesgo) y beneficios intangibles (satisfacción de cliente, capacidad de innovación). Para cada categoría, define cómo se cuantifica.

2. MODELO DE COSTES COMPLETO
Detalla todos los costes del proyecto: licencias de software, desarrollo e implementación, formación, coste de oportunidad del equipo interno, mantenimiento y operación post-lanzamiento. Incluye costes ocultos frecuentemente olvidados en transformaciones digitales.

3. MÉTRICAS DE PRODUCTO VINCULADAS A ROI
Define las métricas de producto (NPS, tiempo de tarea, tasa de adopción, defect rate) que actúan como leading indicators de los beneficios financieros. Explica la cadena causal que conecta cada métrica de producto con un impacto económico medible.

4. LÍNEA BASE Y MEDICIÓN PRE/POST
Diseña un protocolo para establecer la línea base antes del lanzamiento y los puntos de medición post-implementación. Define con qué frecuencia medir, quién es responsable de cada métrica y cómo garantizar la comparabilidad de los datos.

5. MODELO DE CÁLCULO DE ROI
Construye la fórmula de ROI adaptada al contexto de transformación digital, considerando el valor temporal del dinero (NPV/VAN) y la incertidumbre de los beneficios proyectados. Incluye escenarios pesimista, base y optimista.

6. DASHBOARD EJECUTIVO DE ROI
Diseña un cuadro de mando de una sola página para comunicar el ROI a dirección: inversión acumulada, beneficios realizados, ROI actual, proyección a 12 meses y semáforo de desviación frente al plan.

7. REVISIÓN PERIÓDICA Y AJUSTE DE PROYECCIONES
Establece un calendario de revisión del modelo de ROI: mensual para métricas operativas y trimestral para la revisión del modelo financiero completo. Define los umbrales de desviación que justifican una revisión del alcance o la inversión.

ENTREGABLES ESPERADOS:
- Hoja de cálculo de ROI con los tres escenarios (puedes describirla en detalle).
- Plantilla de dashboard ejecutivo.
- Protocolo de medición de línea base.
- Guía para presentar el ROI a dirección de forma convincente.

Sé riguroso con los números pero también pragmático: en transformaciones digitales algunos beneficios son reales aunque difíciles de cuantificar. Ayúdame a hacer visible ese valor de forma honesta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Demostrar el valor financiero de proyectos de transformación digital a dirección y consejo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Plan de gestión del cambio organizacional para transformación digital desde RRHH',
                'description'      => 'Diseña la estrategia de gestión del cambio desde el departamento de RRHH para acompañar una transformación digital organizacional. Cubre comunicación, formación, gestión del talento y cultura digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos con especialización en gestión del cambio y transformación cultural en organizaciones que atraviesan procesos de digitalización profunda. Tu enfoque combina la psicología organizacional con metodologías ágiles de cambio.

Necesito que me ayudes a diseñar el plan de gestión del cambio que liderará RRHH para acompañar la transformación digital de nuestra organización. Queremos asegurarnos de que las personas estén en el centro de esta transformación y no sean un obstáculo sino el motor del éxito.

CONTEXTO ORGANIZACIONAL:
- Tamaño de la organización: [número de empleados]
- Sectores o áreas más afectadas por la transformación: [lista]
- Cultura organizacional actual: [describe el tipo de cultura]
- Principales retos de talento identificados: [describe]
- Presupuesto disponible para gestión del cambio: [orientativo]

PILARES DEL PLAN DE RRHH PARA LA TRANSFORMACIÓN:

1. DIAGNÓSTICO DE CULTURA Y PREPARACIÓN PARA EL CAMBIO
Diseña una auditoría de cultura digital: encuesta de madurez digital por departamento, entrevistas en profundidad con líderes clave y grupos focales con empleados de base. Define los perfiles de adoptante (innovadores, primeros adoptantes, mayoría temprana, rezagados) y su distribución estimada en la organización.

2. ESTRATEGIA DE COMUNICACIÓN INTERNA
Crea un plan de comunicación interna en tres horizontes: comunicación de visión (por qué cambiamos), comunicación de proceso (qué va a pasar y cuándo) y comunicación de apoyo (cómo os vamos a ayudar). Define mensajes clave, responsables y canales.

3. PROGRAMA DE UPSKILLING Y RESKILLING
Diseña un programa de desarrollo de competencias digitales adaptado a los diferentes niveles organizativos: alfabetización digital para todos los empleados, competencias específicas por rol y liderazgo digital para mandos. Incluye formatos, proveedores recomendados y criterios de certificación interna.

4. GESTIÓN DEL TALENTO DURANTE LA TRANSFORMACIÓN
Explica cómo identificar al talento clave que hay que retener durante la transformación, cómo manejar los roles que van a cambiar o desaparecer y cómo atraer nuevo talento digital. Incluye un protocolo de conversaciones difíciles sobre cambios de rol.

5. RED DE CHAMPIONS DEL CAMBIO
Define cómo construir y gestionar una red de embajadores del cambio en toda la organización: criterios de selección, formación de champions, incentivos, agenda de actividades y métricas de impacto de la red.

6. APOYO EMOCIONAL Y BIENESTAR DURANTE EL CAMBIO
Propón un programa de apoyo psicológico y bienestar para acompañar a los empleados en los momentos de incertidumbre. Incluye recursos de apoyo, señales de alarma de burnout o resistencia activa y protocolos de intervención.

7. MÉTRICAS DE ÉXITO DESDE RRHH
Define el cuadro de mando de RRHH para la transformación: índice de preparación para el cambio, tasa de adopción por colectivo, rotación no deseada durante el proceso, eNPS mensual, porcentaje de formación completada y número de champions activos.

ENTREGABLES ESPERADOS:
- Plan de gestión del cambio de RRHH estructurado por fases y trimestres.
- Encuesta de diagnóstico de madurez digital lista para usar.
- Plantilla de plan de comunicación interna.
- Cuadro de mando de seguimiento para el CHRO.

Recuerda que la velocidad de la transformación la marca la capacidad de las personas para cambiar, no la velocidad de implantación de la tecnología.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Liderar desde RRHH la dimensión humana de la transformación digital organizacional',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Evaluación financiera y business case de proyectos de transformación digital',
                'description'      => 'Construye un business case financiero sólido para justificar la inversión en transformación digital ante el CFO y el consejo de administración. Aprende a modelar costes, beneficios y riesgos financieros con rigor analítico.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en la evaluación financiera de proyectos de transformación digital en empresas de mediano tamaño. Combinas el rigor del análisis financiero con un profundo entendimiento de cómo la tecnología crea valor empresarial.

Necesito que me guíes en la construcción de un business case financiero completo para presentar a nuestro comité de inversiones o consejo de administración un proyecto de transformación digital.

DATOS DEL PROYECTO:
- Descripción del proyecto: [digitalización de procesos, nueva plataforma tecnológica, etc.]
- Inversión inicial requerida: [importe estimado]
- Período de análisis: [normalmente 3-5 años]
- Principales palancas de valor esperadas: [reducción de costes, crecimiento de ingresos, mejora de margen, reducción de riesgo]

ESTRUCTURA DEL BUSINESS CASE FINANCIERO:

1. RESUMEN EJECUTIVO FINANCIERO
Redacta un resumen de máximo una página con los números clave: inversión total, VAN (Valor Actual Neto), TIR (Tasa Interna de Retorno), período de recuperación (payback) y principales supuestos. Debe ser autosuficiente para un lector ejecutivo.

2. MODELO DE INVERSIÓN Y COSTES
Detalla todos los costes del proyecto en tres categorías: CAPEX (inversiones de capital en software, hardware, licencias), OPEX incremental (costes operativos adicionales) y costes de transición (formación, consultoría, interrupción del negocio). Estructura los costes por año de despliegue.

3. MODELO DE BENEFICIOS CUANTIFICADOS
Para cada beneficio esperado, define: descripción del beneficio, palanca de valor (ahorro de coste, incremento de ingreso, mejora de productividad), cuantificación año a año, nivel de certeza (alto/medio/bajo) y supuestos clave. Incluye un análisis de sensibilidad para los beneficios con mayor incertidumbre.

4. ANÁLISIS FINANCIERO COMPLETO
Construye el modelo financiero: flujo de caja del proyecto año a año, cálculo del VAN con la tasa de descuento corporativa, TIR del proyecto y período de recuperación simple y descontado. Incluye los tres escenarios: conservador, base y optimista.

5. ANÁLISIS DE RIESGOS FINANCIEROS
Identifica los 5-7 riesgos financieros más relevantes del proyecto (sobrecoste, retraso, beneficios inferiores a los esperados, riesgo tecnológico). Para cada riesgo, cuantifica el impacto potencial sobre el VAN y define la estrategia de mitigación.

6. COMPARATIVA CON ALTERNATIVAS
Presenta al menos dos alternativas al proyecto propuesto: la opción de no hacer nada (status quo) y una alternativa más conservadora o de menor escala. Compara las tres opciones con las mismas métricas financieras para facilitar la decisión.

7. HOJA DE RUTA FINANCIERA
Diseña el calendario de compromisos financieros: cuándo se realizan los desembolsos, cuándo se empiezan a materializar los beneficios y cuáles son los hitos financieros clave del proyecto.

ENTREGABLES ESPERADOS:
- Estructura completa del business case con todas las secciones.
- Plantilla del modelo financiero descrita en detalle (cuadros de cálculo).
- Guía para presentar el business case al comité de inversiones.
- Lista de preguntas difíciles que hará el CFO y cómo responderlas.

El análisis debe ser honesto sobre la incertidumbre: un business case creíble es más valioso que uno optimista que luego no se cumple.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Presentar al CFO o consejo el caso financiero de una inversión en transformación digital',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo y gestión de riesgos legales en proyectos de transformación digital',
                'description'      => 'Analiza el marco regulatorio aplicable a un proyecto de transformación digital y diseña un plan de cumplimiento legal que cubra protección de datos, contratos tecnológicos y responsabilidad digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico y cumplimiento normativo (compliance) con experiencia asesorando a empresas en proyectos de transformación digital en el entorno regulatorio europeo y español.

Necesito que me ayudes a diseñar un plan de cumplimiento legal y gestión de riesgos jurídicos para nuestro proyecto de transformación digital.

CONTEXTO DEL PROYECTO:
- Tipo de transformación: [digitalización de procesos, nueva plataforma, automatización, adopción de IA, etc.]
- Sector de la empresa: [salud, finanzas, educación, retail, etc.]
- Tipos de datos que se manejarán: [datos de clientes, empleados, proveedores, datos sensibles, etc.]
- Países o jurisdicciones afectadas: [España, UE, EEUU, etc.]
- Proveedores tecnológicos implicados: [número y tipo]

ÁREAS DE ANÁLISIS LEGAL:

1. MAPA REGULATORIO APLICABLE
Identifica todas las normativas relevantes para el proyecto: RGPD y LOPDGDD (protección de datos), Directiva NIS2 (ciberseguridad), Reglamento de IA de la UE, normativa sectorial específica (HIPAA para salud, PSD2 para finanzas, etc.) y legislación laboral aplicable a la automatización. Para cada norma, indica el nivel de impacto sobre el proyecto.

2. ANÁLISIS DE IMPACTO EN PROTECCIÓN DE DATOS (DPIA)
Evalúa si el proyecto requiere una Evaluación de Impacto relativa a la Protección de Datos. Si es así, diseña la estructura de la DPIA: descripción del tratamiento, evaluación de necesidad y proporcionalidad, identificación de riesgos para los interesados y medidas de mitigación.

3. REVISIÓN Y NEGOCIACIÓN DE CONTRATOS TECNOLÓGICOS
Define los puntos clave a revisar y negociar en los contratos con proveedores tecnológicos: cláusulas de propiedad intelectual, SLAs y penalizaciones, responsabilidad en caso de brecha de seguridad, portabilidad de datos y condiciones de terminación. Incluye las 5 cláusulas más peligrosas a evitar.

4. MARCO DE CIBERSEGURIDAD Y RESPONSABILIDAD
Establece los requisitos de ciberseguridad mínimos que deben cumplir el proyecto y sus proveedores: gestión de identidades y accesos, cifrado de datos, gestión de incidentes y notificación de brechas. Define los protocolos de respuesta ante un incidente de seguridad.

5. DERECHOS DE LOS EMPLEADOS Y AUTOMATIZACIÓN
Analiza las implicaciones laborales del proyecto: obligación de informar y consultar a la representación de los trabajadores, derechos ante el uso de sistemas de monitorización digital y automatización de tareas. Define el protocolo de comunicación con el comité de empresa.

6. PLAN DE CUMPLIMIENTO Y REVISIÓN CONTINUA
Diseña un calendario de revisión del cumplimiento normativo durante y después del proyecto: auditorías legales por fase, revisión de contratos, actualización de políticas de privacidad y formación legal al equipo. Define el rol del DPO (Delegado de Protección de Datos) en el proyecto.

7. REGISTRO DE RIESGOS LEGALES
Crea un registro de los principales riesgos legales del proyecto: descripción del riesgo, normativa infringida, probabilidad, impacto económico potencial (multas, responsabilidades) y medida de mitigación. Prioriza los riesgos por exposición económica.

ENTREGABLES ESPERADOS:
- Mapa regulatorio completo para el proyecto.
- Checklist de cumplimiento normativo por fase.
- Plantilla de cláusulas contractuales clave a incluir.
- Registro de riesgos legales priorizado.

El objetivo es que el equipo legal sea un facilitador de la transformación y no un bloqueador: propón soluciones prácticas, no solo identificación de problemas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Garantizar el cumplimiento legal y gestionar riesgos normativos en proyectos de transformación digital',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de la experiencia del cliente durante transformaciones digitales',
                'description'      => 'Diseña una estrategia de customer success para acompañar a los clientes durante la adopción de nuevas plataformas digitales. Aprende a gestionar la resistencia del cliente, acelerar el time-to-value y proteger la satisfacción durante el cambio.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success con experiencia en proyectos de migración y transformación digital para clientes empresariales. Tu especialidad es proteger la satisfacción y retención del cliente en los momentos de mayor fricción del ciclo de vida.

Necesito que me ayudes a diseñar una estrategia de customer success para acompañar a nuestros clientes durante la adopción de nuestra nueva plataforma digital o durante un cambio significativo en nuestro servicio.

CONTEXTO DE LA TRANSFORMACIÓN:
- Cambio que experimentarán los clientes: [describe el cambio desde la perspectiva del cliente]
- Segmentos de clientes afectados: [enterprise, mid-market, SMB, etc.]
- Número estimado de cuentas afectadas: [cantidad]
- Riesgo de churn durante la transición: [alto / medio / bajo]
- Plazo de la migración o cambio: [tiempo estimado]

COMPONENTES DE LA ESTRATEGIA DE CS:

1. SEGMENTACIÓN DE CLIENTES PARA LA MIGRACIÓN
Clasifica a los clientes según su nivel de riesgo durante la transición: clientes de alto riesgo (uso crítico del producto, baja madurez digital, relación frágil), clientes de riesgo medio y clientes seguros. Para cada segmento, define la intensidad del acompañamiento requerida.

2. PLAN DE COMUNICACIÓN CON EL CLIENTE
Diseña la secuencia de comunicaciones con el cliente: anuncio del cambio, guía de preparación, recordatorio previo a la migración, soporte durante el cambio y seguimiento post-migración. Para cada comunicación, define canal, mensaje, tono y llamada a la acción.

3. PROGRAMA DE ONBOARDING A LA NUEVA EXPERIENCIA
Crea un programa de adopción para clientes existentes (diferente al onboarding de nuevos clientes): sesiones de formación personalizadas, guías de migración, vídeos de transición y sesiones de Q&A grupales. Define el modelo de entrega según el segmento (high-touch, mid-touch, low-touch).

4. PROTOCOLO DE GESTIÓN DE ESCALACIONES
Establece un proceso claro para gestionar las escalaciones durante la transición: niveles de escalación, tiempos de respuesta comprometidos, roles responsables y criterios para involucrar a producto o ingeniería. Incluye plantillas de respuesta para las incidencias más frecuentes.

5. MÉTRICAS DE EXPERIENCIA DURANTE LA TRANSICIÓN
Define el cuadro de mando de CS para el período de transición: NPS de transición, CSAT post-migración, tasa de adopción de la nueva plataforma por segmento, tiempo hasta primer valor en la nueva experiencia y número de escalaciones por cuenta. Define la frecuencia de medición y umbrales de alerta.

6. ESTRATEGIA DE RETENCIÓN PROACTIVA
Diseña un playbook de retención para cuentas en riesgo durante la transición: señales de alarma tempranas, acciones de intervención proactiva, oferta de compensación si aplica y proceso de QBR (revisión trimestral de negocio) acelerado.

7. CIERRE Y CELEBRACIÓN DEL ÉXITO
Diseña el momento de cierre de la transición con el cliente: comunicación de finalización exitosa, celebración del milestone, captura de caso de éxito o testimonial y definición de los próximos objetivos de valor. Convierte la transición en una oportunidad de fortalecimiento de la relación.

ENTREGABLES ESPERADOS:
- Plan de CS para la transición estructurado por fases.
- Plantillas de comunicación con el cliente listas para usar.
- Playbook de retención para cuentas en riesgo.
- Dashboard de métricas de la transición.

Recuerda que cada cliente que sobrevive bien una transición difícil se convierte en un cliente más leal que si nunca hubiera vivido el cambio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Acompañar a los clientes durante migraciones y cambios de plataforma digital protegiendo la retención',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de transformación digital como freelancer: propuesta y entrega',
                'description'      => 'Aprende a posicionarte como consultor freelance de transformación digital, diseñar propuestas de valor diferenciadas y estructurar proyectos de consultoría que generen resultados medibles para tus clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de transformación digital con experiencia trabajando como freelancer con empresas medianas en distintos sectores. Combinas el rigor metodológico de la consultoría estratégica con la agilidad y el trato personal del trabajo independiente.

Necesito que me ayudes a estructurar mi práctica de consultoría freelance especializada en transformación digital. Quiero diferenciarse de consultoras grandes y ofrecer un servicio de alto valor a empresas que no pueden permitirse contratar a McKinsey pero necesitan ayuda real para digitalizarse.

CONTEXTO DE MI PRÁCTICA FREELANCE:
- Especialización o sector preferido: [describe tu nicho]
- Años de experiencia relevante: [número]
- Servicios actuales o que quieres ofrecer: [lista]
- Ticket medio deseado por proyecto: [importe]
- Tipo de cliente objetivo: [tamaño, sector, rol del decisor]

ÁREAS QUE DEBES DESARROLLAR:

1. PROPUESTA DE VALOR Y POSICIONAMIENTO
Define un posicionamiento claro y diferenciado como consultor de transformación digital freelance. ¿Por qué un cliente debería contratarte a ti en lugar de a una consultora grande o a otro freelancer? Diseña tu propuesta de valor en formato "para [cliente], soy el consultor que [qué haces] porque [por qué eres diferente]".

2. CATÁLOGO DE SERVICIOS Y PACKAGING
Diseña tres paquetes de servicio con nombres, alcance, duración, precio orientativo y entregables claros: un paquete de diagnóstico (entrada), un paquete de implementación (core) y un paquete de acompañamiento continuo (retención). Define qué incluye y qué excluye cada paquete.

3. PROCESO DE CAPTACIÓN Y CUALIFICACIÓN DE CLIENTES
Crea un proceso de ventas consultivo: cómo atraer leads (content marketing, referidos, LinkedIn), cómo cualificar oportunidades (preguntas de descubrimiento), cómo estructurar la reunión de diagnóstico y cómo presentar y defender la propuesta económica.

4. METODOLOGÍA DE ENTREGA DE PROYECTOS
Define tu metodología propia de consultoría de transformación digital: fases del proyecto, entregables por fase, dinámicas de trabajo con el cliente (workshops, revisiones, reporting) y herramientas que usas. Tener una metodología propia aumenta tu credibilidad y facilita la venta.

5. GESTIÓN DE RIESGOS EN PROYECTOS DE CONSULTORÍA
Identifica los 5 riesgos más comunes en proyectos de consultoría de transformación digital: scope creep, cliente no disponible, resistencia interna, cambios de sponsor y expectativas desalineadas. Para cada riesgo, propón medidas contractuales y operativas de mitigación.

6. FIJACIÓN DE PRECIOS Y NEGOCIACIÓN
Explica cómo fijar precios como consultor freelance de transformación digital: pricing por proyecto vs. por día vs. por resultado. Define tu tarifa mínima, cómo justificarla ante el cliente y cómo negociar sin bajarte siempre el precio. Incluye las condiciones contractuales mínimas que debes incluir en todo proyecto.

7. CONSTRUCCIÓN DE REPUTACIÓN Y CASOS DE ÉXITO
Diseña un sistema para documentar y comunicar tus casos de éxito: estructura de un caso de éxito convincente, canales de publicación (LinkedIn, web propia, propuestas) y estrategia de referidos para que cada cliente satisfecho te genere el siguiente.

ENTREGABLES ESPERADOS:
- Propuesta de valor y posicionamiento listos para usar en tu web y LinkedIn.
- Catálogo de servicios con los tres paquetes definidos.
- Guión de la reunión de diagnóstico con el cliente.
- Plantilla de contrato de consultoría con las cláusulas esenciales.

Tu ventaja como freelancer es la cercanía, la velocidad y la implicación personal. Ayúdame a convertir eso en un argumento de venta irresistible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar y vender servicios de consultoría de transformación digital como freelancer',
                'vote_score'       => 33,
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
