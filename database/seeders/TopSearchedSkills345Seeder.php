<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills345Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'UX Research de audiencia para estrategia de contenidos de marketing',
                'description'      => 'Entender profundamente a la audiencia es el punto de partida de cualquier estrategia de marketing efectiva. Este prompt ayuda a diseñar y ejecutar un proceso de research de audiencia que va más allá de los datos demográficos. Obtendrás un sistema para descubrir los trabajos, frustraciones y motivaciones reales de tu audiencia y traducirlos en decisiones de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un experto en UX research y estrategia de marketing de contenidos. Necesito tu ayuda para diseñar un proceso de research de audiencia que me permita entender en profundidad a mis potenciales clientes y traducir ese conocimiento en una estrategia de contenidos más efectiva.

**Mi contexto:**
- Tipo de empresa/producto: [DESCRIPCIÓN]
- Audiencia objetivo actual: [DESCRIPCIÓN GENERAL]
- Canales de marketing activos: [SEO / Social Media / Email / Podcast / Otro]
- Recursos disponibles para research: [TIEMPO / PRESUPUESTO / ACCESO A USUARIOS]
- Mayor duda sobre la audiencia: [QUÉ NO SÉ QUE ME GUSTARÍA SABER]

**Lo que necesito:**

1. **Diseño del proceso de research de audiencia**
   - Qué métodos de research son más útiles para marketing de contenidos y por qué
   - Combinación de research cualitativo y cuantitativo: cómo equilibrarlos
   - Priorización de métodos según el presupuesto y tiempo disponibles
   - Cronograma realista para completar un ciclo de research de audiencia

2. **Entrevistas de audiencia para marketing**
   - Guía de entrevista para entender el journey de decisión de compra
   - Preguntas para descubrir los trabajos (Jobs to be Done) de la audiencia
   - Técnicas para evitar sesgos de cortesía en las respuestas
   - Cómo reclutar participantes para las entrevistas de audiencia
   - Síntesis de entrevistas: cómo extraer patrones de múltiples conversaciones

3. **Research de comportamiento digital**
   - Qué datos de comportamiento en web son más útiles para entender a la audiencia
   - Análisis de búsquedas: cómo interpretar la intención de búsqueda de la audiencia
   - Escucha social: herramientas y proceso para monitorizar conversaciones relevantes
   - Análisis de competidores: qué contenido consumen y cómo se relacionan con otras marcas

4. **Construcción de personas de audiencia basadas en research**
   - Diferencia entre personas demográficas y personas basadas en Jobs to be Done
   - Cómo construir una persona a partir de los datos de research
   - Número óptimo de personas para una estrategia de contenidos
   - Cómo mantener las personas actualizadas y validadas

5. **Traducir los insights en decisiones de contenido**
   - Mapeo de contenidos a etapas del journey: awareness, consideración, decisión
   - Cómo identificar los gaps de contenido a partir del research
   - Priorización de temas de contenido basada en frecuencia y urgencia de los Jobs to be Done
   - Plantilla de brief de contenido basada en insight de audiencia

6. **Validación continua de hipótesis de audiencia**
   - Cómo usar los datos de rendimiento de contenidos para validar o refutar hipótesis de audiencia
   - Ciclo de research continuo: cuándo repetir el research y con qué frecuencia
   - Señales de que la audiencia está cambiando y el research necesita actualizarse

**Formato de respuesta:**
Incluye una guía de entrevista de audiencia lista para usar. Proporciona plantillas para la síntesis de research y la construcción de personas. Señala los errores más comunes en el research de audiencia para marketing y cómo evitarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un proceso de research de audiencia que informe la estrategia de contenidos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Discovery técnico y research de usuario para equipos de desarrollo',
                'description'      => 'Los equipos de desarrollo que participan en el discovery de usuario construyen mejor software porque entienden el contexto real de uso. Este prompt ayuda a diseñar un proceso de discovery técnico y research de usuario adaptado a los ritmos y competencias de un equipo de ingeniería. Obtendrás un sistema para que los desarrolladores aporten al research sin necesitar convertirse en researchers.',
                'prompt_content'   => <<<'EOT'
Eres un experto en discovery de producto, UX research y desarrollo de software ágil. Necesito tu ayuda para diseñar un proceso de discovery técnico y research de usuario que integre al equipo de desarrollo desde las fases tempranas de comprensión del problema.

**Contexto del equipo:**
- Tamaño del equipo: [NÚMERO] devs + [PM/Diseñador/AMBOS/NINGUNO]
- Metodología: [SCRUM / KANBAN / DUAL-TRACK / OTRA]
- Fase del producto: [NUEVO PRODUCTO / FUNCIONALIDAD NUEVA / DEUDA TÉCNICA / MEJORA]
- Acceso a usuarios: [DIRECTO / A TRAVÉS DE CS / MUY LIMITADO]
- Mayor problema de calidad actual: [DESCRIBE]

**Lo que necesito:**

1. **Integración del equipo de desarrollo en el discovery**
   - Por qué el equipo de desarrollo debe participar en el research y no solo recibir specs
   - Cómo involucrar a los devs en el discovery sin bloquear el desarrollo
   - Técnicas de research que los desarrolladores pueden ejecutar sin formación especializada
   - Cómo estructurar el tiempo del equipo entre discovery y delivery

2. **Research técnico y de usuario combinado**
   - Exploración técnica: cómo investigar viabilidad técnica en paralelo al discovery de usuario
   - Entrevistas de usuario para devs: guía simplificada de preguntas técnicas relevantes
   - Cómo documentar los hallazgos de research en formato que sea útil para el equipo técnico
   - Spike técnico: cuándo hacerlo y cómo conectarlo con el discovery de usuario

3. **Definición del problema desde el equipo técnico**
   - Cómo traducir un problema de negocio en un problema técnico bien definido
   - Árbol de causas raíz (5 whys): cómo usarlo en el contexto técnico
   - Cómo identificar si un problema reportado es un síntoma o la causa real
   - Problem statement técnico: qué incluir y cómo validarlo con usuarios

4. **Prototipado y validación técnica temprana**
   - Tipos de prototipos técnicos: desde wireframes hasta POCs funcionales
   - Cuándo construir un POC vs. un prototipo de papel vs. un mockup
   - Criterios de éxito para validar una hipótesis técnica con usuarios
   - Cómo presentar un prototipo técnico a usuarios no técnicos para obtener feedback útil

5. **Síntesis de research para el equipo técnico**
   - Cómo transformar los insights de research en criterios de aceptación técnicos
   - User stories enriquecidas con contexto de research
   - Documentación de decisiones técnicas basadas en research de usuario
   - Cómo compartir los hallazgos de research con el equipo de una manera que genere empatía real

6. **Ciclo de discovery continuo**
   - Cómo integrar el discovery continuo en los sprints sin interrumpir el ritmo de entrega
   - Métricas de éxito del discovery: cómo saber si el proceso está funcionando
   - Señales de que el equipo está construyendo sin suficiente comprensión del usuario

**Formato de respuesta:**
Incluye una guía de entrevista de usuario simplificada para desarrolladores. Proporciona plantillas de síntesis de research adaptadas al lenguaje técnico. Señala cómo adaptar las recomendaciones según el acceso disponible a usuarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar el discovery de usuario en el proceso de desarrollo de software',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Métodos de UX Research para diseñadores: de la duda al insight',
                'description'      => 'Los diseñadores que investigan a sus usuarios diseñan soluciones más efectivas y toman decisiones con mayor confianza. Este prompt ayuda a diseñar y ejecutar procesos de UX research adaptados a los recursos y ritmos de un diseñador. Obtendrás un sistema completo para pasar de la pregunta de diseño al insight accionable de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en UX research y diseño de producto. Necesito tu ayuda para diseñar un proceso completo de UX research que me permita, como diseñador, responder las preguntas clave de diseño con evidencia de usuarios reales antes de tomar decisiones de diseño importantes.

**Mi contexto:**
- Tipo de proyecto: [APP MÓVIL / WEB APP / E-COMMERCE / PRODUCTO INTERNO / OTRO]
- Fase del proyecto: [DISCOVERY / IDEACIÓN / PROTOTIPADO / VALIDACIÓN / POST-LANZAMIENTO]
- Acceso a usuarios: [DIRECTO / A TRAVÉS DE INTERMEDIARIO / MUY LIMITADO]
- Tiempo disponible para research: [DÍAS/SEMANAS]
- Pregunta de diseño principal sin responder: [DESCRIBE]

**Lo que necesito:**

1. **Selección del método de research adecuado**
   - Mapa de métodos de research: cuándo usar entrevistas, tests de usabilidad, encuestas, card sorting, tree testing, diary studies, u otras técnicas
   - Research generativo vs. evaluativo: diferencias y cuándo usar cada uno
   - Research con y sin moderador: pros, contras y contexto óptimo
   - Cómo elegir el método correcto cuando hay poco tiempo y recursos limitados

2. **Entrevistas de usuario para diseñadores**
   - Guía de entrevista de usuario para discovery: preguntas de apertura, preguntas de exploración, preguntas de cierre
   - Técnicas para evitar preguntas que contaminan la respuesta
   - Cómo observar comportamiento y lenguaje corporal durante la entrevista
   - Número mínimo de entrevistas para obtener patrones significativos
   - Reclutamiento: cómo encontrar participantes cuando no tienes base de datos de usuarios

3. **Test de usabilidad**
   - Diseño de un test de usabilidad: tareas, escenarios y métricas
   - Test moderado vs. no moderado: cuándo usar cada uno
   - Cómo escribir tareas que no sesguen el comportamiento del participante
   - Análisis de los resultados de un test de usabilidad: qué capturar y cómo priorizar los problemas encontrados
   - Herramientas para tests de usabilidad remotos

4. **Síntesis e interpretación de datos de research**
   - Affinity mapping: cómo organizar y agrupar hallazgos de múltiples sesiones
   - Identificación de patrones vs. anécdotas: cómo distinguirlos
   - Cómo redactar un insight de research: qué es un insight y qué no lo es
   - Jerarquización de insights según su impacto en las decisiones de diseño
   - Cómo documentar el research para que sea consultable en el futuro

5. **Comunicación de los hallazgos de research**
   - Cómo presentar los resultados de research a stakeholders con poco tiempo
   - Formatos de reporte de research: desde el artefacto completo hasta el resumen ejecutivo
   - Cómo usar los insights para justificar decisiones de diseño ante objeciones
   - Storytelling con datos de research: cómo hacer que los hallazgos generen empatía

6. **Research continuo integrado en el proceso de diseño**
   - Cómo integrar el research en el flujo de trabajo de diseño sin que se convierta en un cuello de botella
   - Research en design sprints: cómo comprimir el proceso
   - Guerrilla research: técnicas rápidas cuando el tiempo es muy limitado
   - Señales de que se está diseñando sin suficiente evidencia de usuario

**Formato de respuesta:**
Incluye una guía de entrevista de usuario lista para usar. Proporciona un protocolo de test de usabilidad adaptable. Incluye una plantilla de síntesis de research. Señala los errores más comunes en UX research y cómo evitarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y ejecutar procesos de UX research para tomar decisiones de diseño basadas en evidencia',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Research de cliente para optimizar el proceso de ventas y la conversión',
                'description'      => 'Los mejores vendedores son también los mejores investigadores de sus clientes: entienden los trabajos, miedos y criterios de decisión mejor que nadie. Este prompt ayuda a diseñar un proceso de research de cliente que mejora la conversión y reduce el ciclo de ventas. Obtendrás un sistema para conocer a tu cliente ideal en profundidad y usar ese conocimiento en cada interacción comercial.',
                'prompt_content'   => <<<'EOT'
Eres un experto en investigación de clientes, psicología de ventas y optimización del proceso comercial. Necesito tu ayuda para diseñar un proceso de research de cliente que me permita entender en profundidad el proceso de decisión de compra de mis prospectos y usarlo para mejorar la conversión.

**Mi contexto:**
- Producto/servicio: [DESCRIPCIÓN]
- Ciclo de venta: [DURACIÓN MEDIA]
- Ticket medio: [CANTIDAD]
- ICP actual: [DESCRIPCIÓN DEL CLIENTE IDEAL]
- Mayor fricción en el proceso de ventas: [ETAPA DONDE SE PIERDEN MÁS OPORTUNIDADES]

**Lo que necesito:**

1. **Research del proceso de decisión de compra**
   - Cómo mapear el customer journey de decisión desde el problema hasta la compra
   - Preguntas para descubrir los triggers que activan la búsqueda de una solución
   - Cómo identificar a todos los stakeholders involucrados en la decisión (especialmente en B2B)
   - Criterios de decisión: cómo descubrir los reales vs. los que el comprador declara
   - Miedos y objeciones: cómo identificarlos antes de que emerjan en la conversación de ventas

2. **Entrevistas de win/loss analysis**
   - Protocolo de entrevista post-venta: qué preguntar a clientes ganados para entender qué funcionó
   - Protocolo de entrevista de oportunidad perdida: cómo abordarla y qué preguntar
   - Análisis de patrones: qué diferencia las oportunidades ganadas de las perdidas
   - Cómo usar los hallazgos para mejorar el proceso de ventas y el discurso comercial

3. **Research de la competencia desde la perspectiva del comprador**
   - Cómo descubrir contra quién compites realmente (no siempre es quien crees)
   - Qué valoran los compradores de la competencia y qué les genera dudas
   - Cómo posicionarte frente a alternativas basándote en research de cliente
   - Análisis de reviews de competidores: qué dicen los clientes de los competidores en foros y review sites

4. **Construcción del perfil de cliente ideal basado en research**
   - ICP basado en atributos firmográficos vs. ICP basado en comportamientos y triggers
   - Persona de comprador: cómo construirla a partir de entrevistas reales
   - Identificación de los segmentos con mayor tasa de conversión y menor ciclo de venta
   - Señales de comprador cualificado: qué comportamientos predicen la intención de compra

5. **Aplicación del research en el proceso de ventas**
   - Cómo incorporar los insights de research en el discovery con el prospecto
   - Personalización del discurso comercial usando lenguaje de los compradores
   - Cómo usar el research para anticipar objeciones y prepararlas
   - Materiales de ventas basados en research: qué funciona y qué no

6. **Research continuo como ventaja competitiva**
   - Cómo institucionalizar el research de cliente en el equipo de ventas
   - Frecuencia y formato de las sesiones de win/loss analysis
   - Cómo compartir los insights de research con marketing y producto
   - Señales de que el research de cliente está desactualizado y necesita renovarse

**Formato de respuesta:**
Incluye guías de entrevista listas para usar (win analysis y loss analysis). Proporciona una plantilla de perfil de cliente ideal basado en research. Señala cómo priorizar el research según la etapa de desarrollo comercial del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un proceso de research de cliente que mejore la conversión y reduzca el ciclo de ventas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Discovery de usuario y product research para Product Managers',
                'description'      => 'El discovery continuo de usuario es la práctica que distingue a los mejores equipos de producto de los que construyen funcionalidades sin validar. Este prompt ayuda a diseñar un sistema de discovery y research de producto que se integra en el ritmo del equipo. Obtendrás un proceso que reduce el riesgo de construir lo incorrecto y acorta el camino hacia el product-market fit.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product discovery, UX research y gestión de producto ágil. Necesito tu ayuda para diseñar un sistema de discovery continuo de usuario que me permita, como Product Manager, tomar decisiones de producto con mayor confianza y reducir el riesgo de construir funcionalidades que nadie usa.

**Contexto del producto:**
- Tipo de producto: [SaaS / App / Plataforma / Producto interno]
- Fase: [Pre-PMF / Post-PMF / Growth / Madurez]
- Equipo de discovery disponible: [Solo PM / PM + Diseñador / PM + Diseñador + Researcher]
- Acceso a usuarios: [Fácil / Moderado / Difícil]
- Mayor riesgo de producto actual: [DESCRIBE]

**Lo que necesito:**

1. **Sistema de discovery continuo**
   - Diferencia entre discovery y delivery: cómo equilibrar ambos en el sprint
   - Frecuencia óptima de sesiones de research de usuario para un PM
   - Cómo priorizar qué preguntas de producto investigar primero
   - Dual-track agile: cómo implementarlo en la práctica sin aumentar la carga del equipo

2. **Métodos de discovery para PMs**
   - Entrevistas de usuario: guía de preguntas para discovery de problema (no de solución)
   - Observación contextual: cómo observar a usuarios usando el producto o el proceso actual
   - Jobs to be Done: cómo aplicar el framework JTBD al discovery de producto
   - Diary studies y research longitudinal: cuándo usarlos y cómo simplificarlos
   - Discovery cuantitativo: cómo usar datos de uso para formular hipótesis de research

3. **Validación de hipótesis de producto**
   - Tipos de riesgo de producto: de valor, de usabilidad, de viabilidad y de factibilidad
   - Cómo diseñar experimentos para validar cada tipo de riesgo
   - Smoke tests y landing pages: cuándo son válidos para validar una hipótesis
   - Criterios de éxito de la validación: cuándo una hipótesis está suficientemente validada para construir

4. **Síntesis de research para decisiones de roadmap**
   - Cómo transformar insights de research en opciones de roadmap
   - Opportunity solution tree: cómo usarlo para conectar research y roadmap
   - Comunicación de los hallazgos de research al equipo y a los stakeholders
   - Cómo documentar el research de forma que sea recuperable y útil en el futuro

5. **Research de producto en fases tempranas vs. tardías**
   - Discovery para nuevos productos: qué preguntas son más urgentes y por qué
   - Discovery para productos maduros: cómo identificar oportunidades de mejora y crecimiento
   - Cuándo el research de usuario es más valioso y cuándo los datos cuantitativos son suficientes
   - Cómo adaptar la intensidad del research al ritmo y la fase del producto

6. **Construcción de una cultura de discovery en el equipo**
   - Cómo involucrar a desarrolladores y diseñadores en el research sin que lo perciban como una carga
   - Rituales de equipo para compartir y discutir los hallazgos de research
   - Cómo medir si el sistema de discovery está funcionando
   - Señales de que el equipo está construyendo sin suficiente discovery

**Formato de respuesta:**
Incluye una guía de entrevista de discovery de usuario lista para usar. Proporciona una plantilla de opportunity solution tree. Señala los errores más comunes en el discovery de producto y cómo evitarlos. Adapta las recomendaciones a la fase del producto y el tamaño del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un sistema de discovery continuo de usuario que reduzca el riesgo de construir funcionalidades incorrectas',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Research de experiencia del empleado para decisiones de RRHH',
                'description'      => 'Entender la experiencia real de los empleados requiere métodos de research rigurosos, no solo encuestas anuales de clima. Este prompt ayuda a diseñar un programa de research de experiencia del empleado que genera insights accionables. Obtendrás un sistema para descubrir qué impulsa el compromiso, la retención y la productividad en tu organización.',
                'prompt_content'   => <<<'EOT'
Eres un experto en employee experience research y gestión del talento. Necesito tu ayuda para diseñar un programa de research de experiencia del empleado que me proporcione insights profundos y accionables para mejorar el compromiso, la retención y la satisfacción en la organización.

**Contexto:**
- Tamaño de la organización: [NÚMERO] empleados
- Sector: [SECTOR]
- Distribución: [PRESENCIAL / HÍBRIDO / REMOTO]
- Reto principal de RRHH: [ROTACIÓN / COMPROMISO / CULTURA / ATRACCIÓN / OTRO]
- Research actual: [ENCUESTA ANUAL / PULSO MENSUAL / NINGUNO / OTRO]

**Lo que necesito:**

1. **Diseño del programa de research de experiencia del empleado**
   - Mixtura de métodos: qué combinación de research cualitativo y cuantitativo es más efectiva
   - Journey del empleado: cómo mapear los momentos que más impactan en la experiencia
   - Frecuencia y cadencia del research: qué hacer con qué frecuencia
   - Cómo diseñar el programa para que los empleados confíen en él y participen honestamente

2. **Encuestas de clima y engagement efectivas**
   - Diseño de encuesta de engagement: preguntas validadas y cómo adaptarlas
   - Encuestas de pulso: frecuencia, extensión y cómo analizarlas
   - Cómo aumentar la tasa de respuesta a las encuestas
   - Análisis de los resultados: qué métricas son más predictivas de rotación y compromiso
   - Cómo comunicar los resultados a la organización de forma transparente

3. **Entrevistas de experiencia del empleado**
   - Stay interviews: guía de preguntas para entender por qué los empleados se quedan
   - Exit interviews: cómo hacerlas para obtener información honesta y útil
   - Onboarding interviews: qué preguntar a los nuevos empleados en sus primeras semanas
   - Técnicas para crear un ambiente de confianza en la entrevista

4. **Research de momentos críticos del journey del empleado**
   - Cómo identificar los momentos del journey que más impactan en el compromiso
   - Research del proceso de onboarding: qué funciona y qué genera fricción
   - Research de la experiencia de promoción y desarrollo de carrera
   - Research del offboarding: qué aprende el empleado que se va y por qué importa

5. **Síntesis e interpretación de datos de experiencia del empleado**
   - Cómo cruzar datos cualitativos (entrevistas) con cuantitativos (encuestas y datos de HRIS)
   - Identificación de segmentos con diferente experiencia: por departamento, seniority, modalidad
   - Priorización de problemas: cómo identificar qué tiene mayor impacto en retención y compromiso
   - Cómo convertir los insights en un plan de acción concreto

6. **Comunicación y acción sobre los resultados**
   - Cómo presentar los hallazgos de research a dirección para que generen acción
   - Cómo comunicar los resultados a los empleados de forma transparente y responsable
   - Seguimiento de compromisos: cómo asegurar que las mejoras prometidas se implementan
   - Métricas de impacto: cómo medir si las acciones tomadas mejoran la experiencia

**Formato de respuesta:**
Incluye guías de entrevista listas para usar (stay interview, exit interview, onboarding interview). Proporciona un modelo de encuesta de pulso. Señala los errores más comunes en el research de experiencia del empleado y cómo evitarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un programa de research de experiencia del empleado que genere insights accionables',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Research de usuario para productos y servicios financieros',
                'description'      => 'Los productos financieros presentan retos únicos de research: los usuarios tienen dificultad para hablar de dinero con honestidad y los comportamientos financieros están cargados de sesgos cognitivos. Este prompt ayuda a diseñar procesos de research adaptados a la especificidad de los servicios financieros. Obtendrás un sistema para descubrir los verdaderos comportamientos y necesidades de los usuarios de productos financieros.',
                'prompt_content'   => <<<'EOT'
Eres un experto en UX research y diseño de servicios financieros. Necesito tu ayuda para diseñar un proceso de research de usuario adaptado a las especificidades de los productos y servicios financieros, donde los sesgos cognitivos y la sensibilidad del tema hacen que el research convencional no sea suficiente.

**Contexto:**
- Tipo de producto/servicio financiero: [BANCA / INVERSIÓN / SEGUROS / FINTECH / CONTABILIDAD / ASESORÍA]
- Usuario objetivo: [DESCRIPCIÓN]
- Fase del producto: [DISCOVERY / DISEÑO / VALIDACIÓN / POST-LANZAMIENTO]
- Pregunta de research principal: [DESCRIBE]
- Acceso a usuarios: [DIRECTO / A TRAVÉS DE INTERMEDIARIO / LIMITADO]

**Lo que necesito:**

1. **Particularidades del research en contexto financiero**
   - Por qué los usuarios mienten (o no dicen la verdad completa) sobre su comportamiento financiero
   - Sesgos cognitivos más relevantes en decisiones financieras: cómo diseñar el research para mitigarlos
   - Temas tabú en el research financiero y cómo abordarlos sin que el participante se cierre
   - Consideraciones éticas y legales del research con datos financieros

2. **Métodos de research adaptados a servicios financieros**
   - Entrevistas de comportamiento financiero: técnicas para obtener honestidad sin presión
   - Diary studies financieros: cómo pedir a los usuarios que registren comportamientos reales
   - Análisis de transacciones y datos de uso: qué revelan sobre los patrones de comportamiento
   - Research contextual: cómo observar a usuarios en el contexto real de decisión financiera
   - Test de usabilidad para interfaces financieras: qué medir y cómo interpretar los errores

3. **Comprensión de la toma de decisiones financieras**
   - Cómo descubrir el proceso real de toma de decisiones financieras (no el que los usuarios declaran)
   - Jobs to be Done en servicios financieros: qué trabajo real está contratando el usuario
   - Momentos de ansiedad financiera: cómo identificarlos y diseñar para reducirlos
   - Confianza en productos financieros: qué la construye y qué la destruye desde la perspectiva del usuario

4. **Research de onboarding y activación financiera**
   - Cómo investigar las barreras de adopción de un producto financiero
   - Research del proceso de contratación: dónde abandonan los usuarios y por qué
   - KYC y verificación de identidad: investigando los puntos de fricción
   - Research de la primera transacción: el momento de la verdad en productos financieros

5. **Síntesis e insights en contexto financiero**
   - Cómo distinguir entre el comportamiento declarado y el comportamiento real en finanzas
   - Priorización de problemas de UX en servicios financieros: criterios específicos del sector
   - Cómo comunicar los hallazgos de research a equipos de producto y cumplimiento normativo
   - Traducir insights de research en requisitos de diseño para interfaces financieras

6. **Cumplimiento normativo y research**
   - Cómo diseñar el research para cumplir con la normativa de protección de datos (GDPR)
   - Consentimiento informado en research financiero: qué incluir y cómo obtenerlo
   - Research con datos de usuarios reales: qué es posible y qué no en el marco normativo europeo

**Formato de respuesta:**
Incluye una guía de entrevista específica para comportamiento financiero. Señala las técnicas más efectivas para superar las barreras de honestidad en research financiero. Proporciona ejemplos concretos de preguntas de research y cómo adaptarlas al contexto financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar procesos de research de usuario adaptados a las especificidades de los servicios financieros',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Research de experiencia de cliente en servicios legales',
                'description'      => 'Los usuarios de servicios legales tienen necesidades, miedos y expectativas muy específicas que rara vez se investigan de forma sistemática. Este prompt ayuda a diseñar un proceso de research de experiencia de cliente para despachos y servicios jurídicos. Obtendrás un sistema para descubrir qué valoran realmente los clientes de los servicios legales y cómo mejorar su experiencia.',
                'prompt_content'   => <<<'EOT'
Eres un experto en UX research y diseño de servicios profesionales, con conocimiento específico del sector legal. Necesito tu ayuda para diseñar un proceso de research de experiencia de cliente para mi despacho o servicio jurídico, que me permita entender qué valoran realmente los clientes y dónde mejorar.

**Contexto:**
- Tipo de entidad: [DESPACHO DE ABOGADOS / DEPARTAMENTO LEGAL CORPORATIVO / LEGALTECH / ASESORÍA]
- Áreas de práctica: [CIVIL / MERCANTIL / LABORAL / FISCAL / OTRA]
- Tipo de clientes: [PARTICULARES / PYMES / CORPORACIONES / MIXTO]
- Acceso a clientes para research: [FÁCIL / MODERADO / DIFÍCIL]
- Principal problema de experiencia de cliente: [DESCRIBE]

**Lo que necesito:**

1. **Especificidades del research en servicios legales**
   - Por qué los clientes de servicios legales son especialmente difíciles de investigar con honestidad
   - La asimetría de información en los servicios legales: cómo afecta al research
   - Momentos de alta tensión emocional (litigios, divorcios, despidos): cómo investigar sin generar más estrés
   - Confidencialidad y research: cómo diseñar el proceso respetando el secreto profesional

2. **Métodos de research para servicios jurídicos**
   - Entrevistas de experiencia de cliente: guía de preguntas para servicios legales
   - Análisis del journey del cliente legal: desde la búsqueda del abogado hasta el cierre del asunto
   - Revisión de reseñas y feedback: qué revelan sobre la experiencia del cliente
   - Mystery shopping legal: cómo evaluarse desde la perspectiva del prospecto
   - Net Promoter Score en servicios legales: cómo implementarlo y qué hacer con los resultados

3. **Descubrimiento de las necesidades reales del cliente legal**
   - Jobs to be Done en servicios legales: qué trabajo real contrata el cliente (más allá del servicio técnico)
   - Miedos del cliente legal: identificarlos y diseñar la experiencia para reducirlos
   - Expectativas vs. realidad: dónde se genera la mayor brecha en la experiencia legal
   - El cliente B2B vs. el cliente particular: diferencias fundamentales en el research

4. **Research del proceso de captación de clientes**
   - Cómo investigan los potenciales clientes antes de elegir un abogado o despacho
   - Criterios de decisión reales: qué valoran los clientes más allá del precio y la reputación
   - Barreras de acceso a los servicios legales: qué impide a los potenciales clientes dar el primer paso
   - Primera impresión digital: cómo investigar la experiencia en la web y los primeros contactos

5. **Síntesis e insights para mejorar el servicio**
   - Cómo priorizar los problemas de experiencia de cliente en un contexto legal
   - Traducir insights de research en mejoras concretas del proceso de servicio
   - Comunicar los hallazgos de research al equipo de abogados sin generar resistencia
   - Cómo medir si las mejoras implementadas han tenido impacto en la satisfacción del cliente

6. **Programa continuo de feedback de cliente**
   - Diseño de un sistema de recogida de feedback en los momentos clave del servicio
   - Encuesta de satisfacción post-asunto: qué preguntar y cuándo enviarlo
   - Cómo usar el feedback de clientes para la mejora continua del servicio
   - Testimoniales y casos de éxito: cómo recopilarlos de forma sistemática

**Formato de respuesta:**
Incluye una guía de entrevista de experiencia de cliente para servicios legales. Proporciona un mapa de journey del cliente legal con los momentos clave. Señala los errores más comunes en el research de experiencia de cliente en el sector legal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un proceso de research de experiencia de cliente para despachos y servicios jurídicos',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Research de experiencia de cliente para equipos de Customer Success',
                'description'      => 'Los equipos de Customer Success que investigan sistemáticamente la experiencia de sus clientes retienen más y expanden más. Este prompt ayuda a diseñar un programa de research de experiencia de cliente integrado en el ciclo de trabajo del equipo de CS. Obtendrás un sistema para descubrir qué impulsa el valor percibido, el churn y la expansión en tu base de clientes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y research de experiencia de cliente. Necesito tu ayuda para diseñar un programa de research de experiencia de cliente que mi equipo de CS pueda ejecutar de forma sistemática para mejorar la retención, identificar oportunidades de expansión y detectar riesgos de churn antes de que ocurran.

**Contexto:**
- Tipo de producto/servicio: [SAAS / PLATAFORMA / SERVICIOS / OTRO]
- Tamaño del equipo de CS: [NÚMERO] CSMs
- Número de clientes: [NÚMERO]
- Tasa de churn actual: [PORCENTAJE]
- Mayor incógnita sobre los clientes: [QUÉ NO SÉ QUE ME GUSTARÍA SABER]

**Lo que necesito:**

1. **Programa de research de experiencia de cliente para CS**
   - Qué métodos de research son más valiosos para un equipo de CS y por qué
   - Integración del research en el flujo de trabajo del CSM sin que se convierta en una carga
   - Cadencia del research: qué hacer en cada etapa del ciclo de vida del cliente
   - Cómo distribuir la responsabilidad del research entre el equipo de CS

2. **Entrevistas de valor y experiencia**
   - Guía de entrevista para descubrir el valor real percibido por el cliente (no el que asumimos)
   - Preguntas para identificar los Jobs to be Done del cliente con nuestro producto
   - Cómo descubrir qué habría hecho el cliente si no hubiera tenido nuestro producto
   - Técnicas para explorar expectativas no cumplidas sin que el cliente lo perciba como una queja

3. **Research de churn y riesgo de abandono**
   - Protocolo de entrevista de churn: cómo hablar con clientes que se van para aprender sin defensas
   - Señales tempranas de churn: qué comportamientos y patrones predicen el abandono
   - Research de salud del cliente: cómo complementar los datos cuantitativos con insight cualitativo
   - Análisis de clientes en riesgo: qué preguntas hacer antes de que decidan irse

4. **Research de expansión y upsell**
   - Cómo identificar mediante research los triggers de expansión en los clientes
   - Momentos de expansión: cuándo el cliente está listo para escalar y cómo detectarlo
   - Investigación de necesidades no cubiertas: qué hace el cliente con otras herramientas que podríamos cubrir nosotros
   - Research de casos de uso emergentes: cómo identificar nuevas formas de uso del producto

5. **NPS, CSAT y encuestas de satisfacción efectivas**
   - Diseño de una encuesta NPS que genere feedback accionable (no solo un número)
   - CSAT en momentos clave del ciclo de vida del cliente
   - Cómo aumentar la tasa de respuesta a encuestas de satisfacción
   - Análisis e interpretación de los resultados: qué hacer con los detractores, neutros y promotores

6. **Síntesis de research para decisiones de CS y producto**
   - Cómo organizar y compartir los insights de research con el equipo de CS y con producto
   - Identificación de patrones comunes a través de múltiples clientes
   - Cómo usar el research de experiencia de cliente para mejorar el playbook de CS
   - Métricas de impacto: cómo saber si el research está mejorando la retención

**Formato de respuesta:**
Incluye guías de entrevista listas para usar (entrevista de valor, entrevista de churn). Proporciona una plantilla de programa de research de CS por etapa del ciclo de vida del cliente. Señala cómo priorizar el research según el tamaño del equipo y el número de cuentas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un programa de research de experiencia de cliente para mejorar la retención y detectar oportunidades de expansión',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'UX Research para proyectos freelance: validar antes de diseñar o desarrollar',
                'description'      => 'Los freelancers que investigan a los usuarios antes de ejecutar entregan proyectos más exitosos y reducen las revisiones costosas. Este prompt ayuda a diseñar un proceso de UX research ágil y económico para proyectos freelance. Obtendrás un sistema para validar hipótesis y entender a los usuarios sin los recursos de una empresa grande.',
                'prompt_content'   => <<<'EOT'
Eres un experto en UX research y gestión de proyectos freelance. Necesito tu ayuda para diseñar un proceso de UX research ágil y asequible que pueda integrar en mis proyectos freelance, de forma que valide hipótesis y entienda a los usuarios sin disponer de los recursos de una empresa grande.

**Mi situación:**
- Especialidad freelance: [DISEÑO UX/UI / DESARROLLO / CONSULTORÍA DIGITAL / OTRO]
- Tipos de proyectos habituales: [APPS MÓVILES / WEB APPS / E-COMMERCE / OTRO]
- Duración media de mis proyectos: [SEMANAS/MESES]
- Relación con el research actualmente: [NO LO HAGO / LO HAGO DE FORMA INFORMAL / QUIERO SISTEMATIZARLO]
- Mayor dificultad: [TIEMPO / ACCESO A USUARIOS / CÓMO COBRAR EL RESEARCH / CÓMO CONVENCER AL CLIENTE]

**Lo que necesito:**

1. **El caso de negocio del research para un freelancer**
   - Cómo convencer a los clientes de invertir en research antes de diseñar o desarrollar
   - Cómo incluir el research en la propuesta y cómo cobrarlo
   - El coste de NO hacer research: argumentos para el cliente escéptico
   - Ejemplos de cómo el research ha evitado rediseños costosos en proyectos reales

2. **Métodos de research ágiles para proyectos freelance**
   - Los 3-5 métodos de research con mejor ratio valor/tiempo para un freelancer
   - Guerrilla research: cómo hacer research rápido con pocos recursos
   - Entrevistas de usuario en 60 minutos totales: cómo maximizar el valor con 3-5 entrevistas cortas
   - Tests de usabilidad no moderados: herramientas gratuitas o baratas y cómo interpretar los resultados

3. **Diseño del proceso de research por tipo de proyecto**
   - Research para un rediseño de web o app: qué métodos y en qué orden
   - Research para un nuevo producto o funcionalidad: cómo validar la hipótesis antes de construir
   - Research para e-commerce: cómo investigar el proceso de compra y las barreras de conversión
   - Research express para proyectos de muy corta duración (menos de 4 semanas)

4. **Reclutamiento de participantes sin presupuesto**
   - Cómo encontrar participantes para entrevistas o tests sin base de datos de usuarios
   - Red personal, redes sociales y comunidades online: cómo usarlos para reclutar
   - Uso de los propios clientes del cliente como participantes: cómo coordinarlo
   - Incentivos mínimos pero efectivos para conseguir participación

5. **Síntesis rápida de research**
   - Cómo extraer los insights clave de 5 entrevistas en menos de 2 horas
   - Formato de reporte de research para clientes no técnicos
   - Cómo traducir los insights en recomendaciones de diseño concretas
   - Documentación mínima del research que protege al freelancer en caso de disputas

6. **Integración del research en el flujo de trabajo freelance**
   - Cuándo hacer research en el timeline de un proyecto típico
   - Cómo ajustar el alcance del research según el presupuesto del proyecto
   - Research continuo durante el proyecto: cómo hacer micro-validaciones a lo largo de la ejecución
   - Cómo posicionarte como freelancer que hace research: diferenciación de mercado

**Formato de respuesta:**
Incluye una guía de entrevista de usuario express (5 preguntas clave). Proporciona una plantilla de propuesta con el research incluido. Señala qué herramientas gratuitas o de bajo coste son más útiles para research freelance. Adapta las recomendaciones a mi especialidad cuando te la proporcione.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Integrar UX research ágil y económico en proyectos freelance para reducir revisiones y mejorar resultados',
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
