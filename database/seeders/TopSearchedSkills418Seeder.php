<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills418Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Planificación semanal de campañas de marketing con IA',
                'description'       => 'Usa IA para estructurar tu semana de marketing, priorizar tareas de campaña y eliminar cuellos de botella que reducen tu productividad.',
                'prompt_content'    => <<<'EOT'
Eres un consultor experto en productividad para equipos de marketing digital. Tu objetivo es ayudarme a planificar mi semana de trabajo de forma estratégica, aplicando técnicas de gestión del tiempo modernas combinadas con las capacidades de la inteligencia artificial.

**Contexto de mi situación:**
Soy un profesional de marketing que gestiona múltiples campañas simultáneamente. Mis responsabilidades incluyen: gestión de redes sociales, coordinación con diseño y copywriting, análisis de métricas, reuniones con clientes y creación de informes. Frecuentemente siento que el tiempo no alcanza y las tareas urgentes desplazan las importantes.

**tarea principal:**
Ayúdame a crear un sistema de planificación semanal personalizado para perfiles de marketing. Necesito:

1. **Auditoría de tiempo actual**: Analiza las categorías de tareas típicas de un marketero (creación de contenido, análisis, coordinación, reportes, reuniones) y ayúdame a identificar cuáles consumen más tiempo del necesario y cuáles generan mayor impacto en los resultados.

2. **Bloque de tiempo inteligente**: Diseña una estructura de semana laboral en bloques temáticos. Por ejemplo: lunes para planificación estratégica y revisión de métricas, martes y miércoles para creación de contenido y campañas, jueves para coordinación y reuniones, viernes para análisis y reportes. Explica el razonamiento detrás de cada bloque.

3. **Priorización por impacto**: Aplica la matriz de Eisenhower adaptada al marketing digital. Clasifica las tareas típicas de mi rol en: urgente-importante, importante-no urgente, urgente-no importante, ni urgente ni importante. Dame ejemplos concretos de cada cuadrante para mi profesión.

4. **Automatización con IA**: Identifica las 5 tareas de marketing que más se benefician de la automatización con IA. Para cada una, sugiere qué herramienta o enfoque usar (análisis de sentimiento automatizado, generación de variantes de copy, reportes automáticos, programación de publicaciones, etc.).

5. **Rituales de productividad**: Propón rituales matutinos y vespertinos de 15 minutos que me ayuden a arrancar y cerrar el día con claridad: revisión de KPIs, actualización del to-do, bloque de revisión de correos, etc.

6. **Gestión de interrupciones**: Dame estrategias específicas para el entorno de marketing (clientes que llaman, solicitudes urgentes de redes sociales, cambios de campaña de último minuto) que me permitan proteger mis bloques de trabajo profundo sin dejar de ser responsivo.

7. **Plantilla de revisión semanal**: Crea una checklist de revisión de fin de semana que cubra: ¿Qué campañas avanzaron?, ¿Qué métricas debo revisar?, ¿Qué tareas se quedaron pendientes y por qué?, ¿Qué aprendizaje me llevo para la próxima semana?

**Formato de respuesta esperado:**
- Estructura clara con secciones diferenciadas
- Plantillas reutilizables para copiar directamente a mi gestor de tareas
- Ejemplos concretos adaptados al contexto de marketing digital
- Recomendaciones de herramientas de IA específicas para cada área

**objetivo final:**
Quiero salir de esta conversación con un sistema de productividad que pueda implementar desde el lunes próximo, que me permita trabajar de forma más estratégica, reducir el estrés por sobrecarga y aumentar el impacto de mis campañas de marketing sin trabajar más horas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Planificación semanal y gestión del tiempo para equipos de marketing',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sistema de gestión del flujo de trabajo para desarrolladores con IA',
                'description'       => 'Optimiza tu productividad como desarrollador usando IA para priorizar tareas técnicas, gestionar interrupciones y mantener el estado de flujo.',
                'prompt_content'    => <<<'EOT'
Eres un coach especializado en productividad para ingenieros de software. Entiendes profundamente los desafíos únicos del trabajo de desarrollo: las interrupciones destruyen el estado de flujo, la deuda técnica compite con nuevas funcionalidades, y las estimaciones de tiempo raramente coinciden con la realidad.

**Mi contexto como desarrollador:**
Trabajo en un equipo de desarrollo de software. Mis tareas incluyen: programación de nuevas funcionalidades, revisión de código (code reviews), corrección de bugs, reuniones de planning y retrospectiva, documentación técnica, y soporte a incidencias de producción. El mayor problema es que las interrupciones constantes me impiden alcanzar estados de flujo productivos.

**objetivo de esta sesión:**
Diseña un sistema integral de gestión del tiempo y flujo de trabajo específico para desarrolladores que incluya:

1. **Gestión del contexto de programación**: Explica técnicas para preservar el contexto mental entre sesiones de trabajo. ¿Cómo documentar el estado de una tarea antes de una interrupción? ¿Cómo retomar el trabajo en el punto exacto donde lo dejé? Propón un formato de "notas de contexto" que pueda dejar en comentarios del código o en mi gestor de tareas.

2. **Bloques de trabajo profundo**: Diseña un horario que maximice las sesiones de programación ininterrumpida. Considera que los code reviews y las reuniones de Scrum deben coexistir con la programación. ¿Cuándo agrupar las reuniones? ¿Cómo negociar el tiempo de foco con mi equipo?

3. **Estimación técnica asistida por IA**: Enséñame a usar IA para mejorar mis estimaciones de tiempo en tareas de desarrollo. ¿Qué información debo proporcionar para obtener estimaciones más precisas? ¿Cómo descomponer user stories complejas en tareas estimables?

4. **Priorización de la deuda técnica vs. nuevas funcionalidades**: Dame un framework para decidir cuándo abordar deuda técnica frente a nuevas features. Incluye criterios objetivos como impacto en velocidad del equipo, riesgo de incidencias y tiempo necesario de refactorización.

5. **Automatización de tareas repetitivas con IA**: Identifica las tareas de desarrollo que puedo automatizar o acelerar con IA: generación de tests unitarios, documentación de funciones, revisión de estilo de código, búsqueda de patrones de bugs, generación de código boilerplate.

6. **Protocolo de gestión de incidencias sin perder el hilo**: ¿Cómo manejar un bug crítico en producción que interrumpe mi sprint sin perder el hilo de la tarea que estaba desarrollando? Dame un protocolo de 5 pasos.

7. **Revisión semanal técnica**: Crea una rutina de revisión semanal que incluya: revisión de velocity, análisis de bugs recurrentes, actualización del backlog técnico y planificación del próximo sprint con IA.

**Resultado esperado:**
Un sistema de productividad técnica documentado, listo para implementar, que respete la naturaleza cognitiva del trabajo de programación y que use IA como aliada para reducir el trabajo de baja calidad y maximizar el tiempo de programación creativa y de alto valor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestión del flujo de trabajo y productividad para ingenieros de software',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Optimización del proceso creativo de diseño con IA',
                'description'       => 'Estructura tu tiempo creativo como diseñador usando IA para gestionar proyectos, priorizar revisiones y mantener tu energía creativa durante toda la jornada.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de productividad especializado en profesionales creativos, con profundo conocimiento de los desafíos únicos del diseño: los ciclos de revisión interminables, la fatiga de decisión, la gestión de múltiples clientes con gustos diferentes y la necesidad de mantener fresco el criterio creativo durante toda la jornada.

**Mi realidad como diseñador:**
Trabajo como diseñador (UX/UI, gráfico o de producto) gestionando simultáneamente proyectos para varios clientes o áreas internas. Los problemas que más me afectan son: las revisiones que nunca terminan, los cambios de último minuto, la dificultad para estimar tiempos creativos, y la pérdida de energía creativa al final del día cuando más trabajo acumulado tengo.

**tarea: diseña mi sistema de productividad creativa**

1. **Mapa de energía creativa**: Explica el concepto de "energía creativa a lo largo del día" y cómo diseñar mi jornada laboral respetando mis picos de creatividad. ¿Cuándo hacer trabajo creativo exigente (diseño conceptual, propuestas nuevas)? ¿Cuándo hacer trabajo de ejecución (ajustes, exportaciones, organización de archivos)?

2. **Sistema de gestión de revisiones**: Crea un proceso estructurado para gestionar los ciclos de revisión de clientes que limite el número de rondas, fije expectativas claras desde el inicio del proyecto y use IA para anticipar comentarios frecuentes y preparar variantes preventivamente.

3. **Estimación de tiempos creativos**: Dame técnicas para estimar proyectos de diseño con mayor precisión. ¿Cómo descomponer un proyecto de diseño en fases medibles? ¿Qué buffers de tiempo debo incluir y por qué? ¿Cómo usar datos de proyectos anteriores para mejorar futuras estimaciones?

4. **IA como asistente de producción**: Identifica las tareas de diseño donde la IA puede ahorrarme tiempo sin comprometer la calidad creativa: generación de variantes para pruebas A/B, creación de mockups rápidos, redimensionado automático de assets, generación de paletas de color alternativas, escritura de textos de placeholder, etc.

5. **Gestión de múltiples clientes sin perder el contexto**: ¿Cómo cambiar mentalmente entre proyectos muy diferentes manteniendo la coherencia creativa de cada uno? Dame técnicas de transición entre proyectos y un sistema de documentación de "estado creativo" por proyecto.

6. **Protocolo anti-fatiga de decisión**: La fatiga de decisión afecta especialmente a los diseñadores. ¿Cómo estructurar el día para tomar las decisiones de diseño más importantes con la mente fresca? ¿Qué tipos de decisiones puedo delegar o automatizar?

7. **Revisión semanal de proyectos creativos**: Diseña una revisión semanal de 30 minutos que cubra el estado de todos los proyectos activos, el progreso hacia entregas, la salud de la relación con cada cliente y las prioridades de la semana siguiente.

El resultado debe ser un sistema práctico, visual y adaptado a la naturaleza no lineal del trabajo creativo, con herramientas concretas de IA integradas en cada paso del proceso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Productividad y gestión del tiempo para diseñadores creativos',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Automatización del tiempo de ventas y priorización de leads con IA',
                'description'       => 'Recupera horas de tu semana de ventas automatizando tareas administrativas con IA y enfocándote en las actividades que realmente cierran deals.',
                'prompt_content'    => <<<'EOT'
Eres un experto en productividad comercial y optimización de procesos de venta. Tu especialidad es ayudar a vendedores y equipos de ventas a maximizar el tiempo dedicado a actividades de alto valor (conversaciones con prospectos, presentaciones, cierres) y minimizar el tiempo en tareas administrativas que no generan ingresos directamente.

**Mi situación como profesional de ventas:**
Trabajo en ventas B2B o B2C y uno de mis mayores problemas es que paso demasiado tiempo en tareas que no son vender: actualizar el CRM, redactar emails de seguimiento, preparar propuestas, buscar información sobre prospectos y asistir a reuniones internas. Quiero recuperar ese tiempo y dedicarlo a más conversaciones de ventas.

**objetivo de esta sesión:**
Crea un sistema completo de productividad para ventas que incluya:

1. **Auditoría del tiempo de ventas**: Ayúdame a mapear todas las actividades que realizo en una semana típica y clasifícalas según su impacto directo en el pipeline de ventas. ¿Cuáles son actividades de "venta pura" de alto impacto? ¿Cuáles son necesarias pero pueden optimizarse? ¿Cuáles son pérdidas de tiempo que debo eliminar?

2. **Priorización de leads con IA**: Enséñame a usar IA para puntuar y priorizar mis leads según probabilidad de cierre. ¿Qué señales de comportamiento debo tener en cuenta? ¿Cómo describir un lead a la IA para obtener una evaluación de prioridad? Dame un framework de scoring que pueda aplicar manualmente con ayuda de IA.

3. **Automatización de comunicaciones**: Crea plantillas de prompts para que la IA me ayude a: redactar emails de seguimiento personalizados en 2 minutos, preparar agendas de reuniones con prospectos, escribir resúmenes de llamadas para el CRM y generar propuestas comerciales personalizadas.

4. **Bloque de tiempo comercial óptimo**: Diseña mi semana comercial ideal: ¿cuándo hacer prospección fría? ¿cuándo tener reuniones de descubrimiento? ¿cuándo hacer seguimiento? ¿cuándo actualizar el CRM? ¿cuándo preparar propuestas? Explica el razonamiento de productividad detrás de cada elección.

5. **Investigación de prospectos con IA en 10 minutos**: Dame un protocolo de investigación rápida de prospectos usando IA que me permita llegar a cada llamada bien preparado sin invertir más de 10 minutos de preparación. ¿Qué información buscar? ¿Cómo pedirle a la IA que sintetice los datos relevantes?

6. **Gestión del pipeline sin fricción**: ¿Cómo mantener el CRM actualizado de forma eficiente con ayuda de IA? ¿Qué información es realmente necesaria registrar y cuál es relleno burocrático? ¿Cómo usar IA para generar automáticamente notas de llamadas a partir de mis apuntes breves?

7. **Revisión semanal de pipeline con IA**: Diseña una revisión semanal de 20 minutos del pipeline que me ayude a identificar deals estancados, oportunidades que requieren acción urgente y prospectos que debo volver a contactar.

Quiero salir de esta sesión con un plan de productividad comercial que pueda implementar esta misma semana y que me permita aumentar el número de conversaciones de ventas sin trabajar más horas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Productividad y gestión del tiempo en ventas',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Priorización de roadmap y gestión del tiempo de Product Manager con IA',
                'description'       => 'Usa IA para estructurar tu semana como PM, priorizar el roadmap con datos y proteger tu tiempo de trabajo estratégico frente a las demandas del equipo.',
                'prompt_content'    => <<<'EOT'
Eres un coach especializado en productividad para Product Managers. Entiendes los desafíos únicos del rol: los PMs son el punto de convergencia de múltiples stakeholders, lo que los convierte en el cuello de botella de múltiples procesos simultáneamente. El trabajo estratégico de producto constantemente pierde terreno frente a las urgencias operativas.

**Mi contexto como Product Manager:**
Gestiono uno o varios productos digitales. Mis responsabilidades incluyen: definición de roadmap, escritura de historias de usuario, priorización del backlog, coordinación con ingeniería y diseño, gestión de stakeholders, análisis de métricas de producto y comunicación con clientes. El problema principal es que rara vez tengo tiempo para pensar estratégicamente porque siempre hay algo urgente.

**tarea: construye mi sistema de productividad para PM**

1. **El problema del PM como cuello de botella**: Explica por qué los PMs acaban siendo el punto de bloqueo de sus equipos y qué cambios de sistema (no de comportamiento personal) pueden resolver esto. ¿Qué procesos, documentos y decisiones debo "desacoplar" de mi disponibilidad?

2. **Priorización de roadmap asistida por IA**: Enséñame a usar IA para priorizar iniciativas del roadmap. Dame un framework de priorización (RICE, ICE, MoSCoW) explicado y un prompt que pueda usar para pedirle a la IA que me ayude a puntuar y comparar iniciativas según impacto, esfuerzo y alineación estratégica.

3. **Gestión del tiempo del PM**: Diseña mi semana ideal como PM: ¿cuándo hacer trabajo estratégico de producto (definición, roadmap, visión)? ¿cuándo hacer trabajo operativo (grooming, escritura de tickets, revisiones)? ¿cuándo estar disponible para el equipo? ¿cuándo hacer análisis de datos? ¿cuándo gestionar stakeholders?

4. **Escritura eficiente de specs con IA**: Dame un sistema para escribir PRDs (Product Requirements Documents) e historias de usuario de alta calidad en la mitad del tiempo usando IA. Incluye plantillas de prompts para generar el borrador inicial, anticipar casos edge y generar criterios de aceptación.

5. **Gestión de stakeholders eficiente**: ¿Cómo reducir el tiempo que dedico a actualizar stakeholders sin que pierdan visibilidad del estado del producto? ¿Qué formatos de comunicación puedo estandarizar y generar con IA (updates semanales, decisiones de producto, cambios en el roadmap)?

6. **Análisis de métricas de producto con IA**: Crea un ritual semanal de análisis de métricas de 30 minutos donde use IA para interpretar datos, identificar anomalías y extraer insights accionables. ¿Qué métricas debo revisar? ¿Cómo describirlas a la IA para obtener interpretaciones útiles?

7. **Revisión semanal del PM**: Diseña una revisión semanal de viernes que cubra: estado del roadmap, blockers del equipo, métricas clave, decisiones pendientes y prioridades de la semana siguiente. Incluye un prompt de IA para generar el resumen ejecutivo del estado del producto.

El resultado debe ser un sistema que me permita recuperar tiempo de trabajo estratégico sin descuidar las necesidades del equipo ni la comunicación con stakeholders.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Productividad estratégica y gestión del tiempo para Product Managers',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión eficiente de procesos de selección y RRHH con IA',
                'description'       => 'Reduce el tiempo administrativo en RRHH con IA, agiliza los procesos de selección y dedica más energía a las personas y la cultura organizacional.',
                'prompt_content'    => <<<'EOT'
Eres un experto en productividad para profesionales de Recursos Humanos. Entiendes que los profesionales de RRHH están atrapados entre el trabajo administrativo de alto volumen (contratos, nóminas, comunicaciones masivas) y el trabajo de alto impacto que realmente transforma organizaciones (cultura, desarrollo de talento, liderazgo). La IA puede ser el puente que libere tiempo para lo segundo.

**Mi situación en RRHH:**
Trabajo en recursos humanos gestionando procesos de selección, onboarding, formación, gestión del desempeño y comunicaciones internas. El mayor consumidor de mi tiempo son los procesos de selección: publicar ofertas, cribar CVs, coordinar entrevistas y comunicarse con candidatos. Quiero optimizar este tiempo sin perder la calidad humana del proceso.

**objetivo: construye mi sistema de productividad en RRHH**

1. **Auditoría del tiempo en RRHH**: Mapea las actividades típicas de un profesional de RRHH y clasifícalas según su impacto en la organización y su susceptibilidad de ser automatizadas o aceleradas con IA. ¿Qué debería delegar a la tecnología? ¿Qué requiere irremediablemente mi intervención humana?

2. **Proceso de selección acelerado con IA**: Diseña un proceso de selección end-to-end donde la IA acelera cada etapa:
   - Redacción de ofertas de empleo optimizadas y atractivas
   - Criterios de criba de CVs definidos con IA
   - Generación de preguntas de entrevista personalizadas por perfil
   - Comunicaciones con candidatos (convocatoria, rechazo, feedback)
   - Resumen de entrevistas para el hiring manager

3. **Gestión del tiempo de reclutamiento**: ¿Cuánto tiempo debería dedicar a cada etapa del funnel de selección? ¿Cómo organizar la semana para manejar múltiples procesos de selección abiertos simultáneamente? Dame un sistema de bloques de tiempo para reclutamiento.

4. **Onboarding eficiente con IA**: Crea un sistema de onboarding escalable donde la IA genere materiales personalizados por rol: emails de bienvenida, planes de los primeros 30/60/90 días, FAQs del nuevo empleado, listas de verificación de integración.

5. **Comunicaciones internas con IA**: ¿Cómo usar IA para agilizar las comunicaciones masivas de RRHH? Incluye plantillas de prompts para: anuncios de empresa, respuestas a consultas frecuentes de empleados, newsletters internas y comunicaciones de cambios de política.

6. **Análisis de datos de personas con IA**: Dame un ritual mensual para analizar métricas de RRHH con ayuda de IA: rotación, tiempo de cobertura de vacantes, NPS de candidatos, satisfacción en onboarding. ¿Cómo interpretar estos datos y extraer acciones?

7. **Revisión semanal de RRHH**: Diseña una revisión semanal de 20 minutos que cubra: estado de procesos de selección activos, pendientes de onboarding, acciones de formación en curso y necesidades del equipo directivo. Incluye un prompt de IA para generar el informe de estado semanal.

El sistema debe liberar suficiente tiempo para que pueda enfocarme en iniciativas de cultura, desarrollo de talento y bienestar de empleados, que son las áreas donde el factor humano es insustituible.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Productividad y gestión del tiempo en Recursos Humanos',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Automatización de reportes financieros y gestión del tiempo con IA',
                'description'       => 'Reduce el tiempo dedicado a reporting financiero rutinario con IA y libera horas para el análisis estratégico que realmente aporta valor a tu organización.',
                'prompt_content'    => <<<'EOT'
Eres un experto en productividad para profesionales de finanzas y contabilidad. Comprendes que los financieros pasan una proporción excesiva de su tiempo en reporting mecánico, consolidación de datos y preparación de presentaciones, cuando su valor real reside en el análisis estratégico, la identificación de riesgos y el asesoramiento a la dirección.

**Mi situación en finanzas:**
Trabajo en el área financiera de una empresa (finanzas corporativas, controlling, contabilidad o FP&A). Dedico mucho tiempo a: cierre mensual, preparación de informes para la dirección, consolidación de datos de múltiples fuentes, preparación de presupuestos y proyecciones, y respuesta a solicitudes ad-hoc de información financiera.

**objetivo: sistema de productividad financiera con IA**

1. **Mapa del ciclo financiero mensual**: Diseña un calendario tipo del mes financiero que distribuya inteligentemente las cargas de trabajo: cierre contable, conciliaciones, preparación de informes, presentación a dirección, análisis de desviaciones. Identifica los cuellos de botella típicos y cómo la IA puede aliviarlos.

2. **Automatización de reportes con IA**: Dame un sistema para acelerar la generación de los informes financieros más comunes:
   - Informe de P&L mensual: ¿cómo describir los datos a la IA para que genere el comentario ejecutivo?
   - Análisis de varianzas: prompts para explicar desviaciones presupuestarias en lenguaje de negocio
   - Dashboard de KPIs: cómo estructurar la narrativa financiera con IA
   - Presentaciones para el Comité de Dirección: plantillas de prompts para generar slides de análisis

3. **Gestión eficiente del cierre mensual**: ¿Cómo organizar los primeros días del mes (los más intensos del cierre) para maximizar la productividad? ¿Qué tareas pueden prepararse durante el mes anterior? ¿Qué verificaciones puede ayudar a realizar la IA?

4. **Análisis financiero acelerado con IA**: Enséñame a describir conjuntos de datos financieros a la IA para obtener insights de negocio, identificar tendencias, detectar anomalías y formular hipótesis sobre causas de desviaciones. Dame ejemplos concretos de prompts de análisis.

5. **Gestión de solicitudes ad-hoc**: ¿Cómo manejar las solicitudes urgentes de información financiera sin desorganizar mi planificación? Dame un protocolo de gestión de solicitudes ad-hoc que incluya: cómo priorizar, cómo comunicar plazos realistas y cómo usar IA para acelerar la respuesta.

6. **Presupuestación y forecasting con IA**: ¿Cómo usar IA para acelerar el proceso de elaboración de presupuestos? Dame técnicas para: analizar tendencias históricas, generar hipótesis de escenarios, comparar variantes presupuestarias y documentar los supuestos del presupuesto.

7. **Revisión semanal financiera**: Diseña una revisión semanal de 15 minutos para un profesional de finanzas que cubra: estado del pipeline de trabajo, indicadores de alerta temprana, hitos del calendario financiero próximos y tareas que requieren atención urgente.

El objetivo es reducir al menos un 30% el tiempo dedicado a reporting mecánico para poder dedicarlo a análisis de mayor valor y asesoramiento estratégico a la dirección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Productividad y automatización de reporting para profesionales de finanzas',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Optimización de la revisión documental legal con IA',
                'description'       => 'Acelera la revisión de documentos legales, contratos y expedientes con IA sin comprometer la precisión jurídica, liberando tiempo para el asesoramiento estratégico.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de productividad especializado en despachos de abogados y departamentos legales corporativos. Entiendes que los profesionales del derecho enfrentan una paradoja: su tiempo es el activo más valioso (muchos lo facturan por horas), pero una proporción elevada se consume en trabajo de revisión, redacción mecánica y búsqueda de información que podría realizarse más eficientemente con apoyo de IA.

**Mi situación en el ámbito legal:**
Soy abogado o profesional legal (en despacho o departamento jurídico interno). Mis actividades incluyen: revisión y redacción de contratos, análisis de expedientes, investigación jurídica, preparación de informes de due diligence, asesoramiento a clientes y gestión de procedimientos. El mayor consumidor de tiempo es la revisión documental.

**objetivo: sistema de productividad legal con IA**

1. **Mapa de actividades legales por valor y volumen**: Clasifica las tareas típicas de un abogado según su valor estratégico y su susceptibilidad de ser aceleradas por IA. ¿Qué tipo de trabajo legal genera más valor para el cliente y merece mi tiempo experto? ¿Qué trabajo es necesario pero de bajo valor añadido y puede acelerarse?

2. **Revisión de contratos acelerada con IA**: Diseña un protocolo de revisión de contratos con asistencia de IA:
   - Qué información proporcionar a la IA para obtener un primer análisis de riesgos
   - Cómo pedir a la IA que identifique cláusulas inusuales o potencialmente problemáticas
   - Cómo generar un resumen ejecutivo del contrato para el cliente
   - Cómo comparar versiones de un contrato e identificar cambios relevantes
   - Limitaciones de la IA en revisión legal y cómo mantener el control experto

3. **Investigación jurídica eficiente**: ¿Cómo usar IA para acelerar la investigación de jurisprudencia, doctrina y normativa? ¿Qué tipos de consultas de investigación legal son apropiadas para IA? ¿Cómo verificar y complementar los resultados de IA con fuentes jurídicas primarias?

4. **Redacción jurídica con IA**: Dame un sistema para generar primeros borradores de documentos legales comunes (contratos de prestación de servicios, acuerdos de confidencialidad, escritos procesales básicos) con IA que luego reviso y personalizo. Incluye consejos para darle instrucciones precisas sobre jurisdicción, legislación aplicable y estilo.

5. **Gestión del tiempo en asuntos múltiples**: ¿Cómo organizar la semana cuando se gestionan simultáneamente múltiples asuntos con diferentes clientes, plazos y urgencias? Dame un sistema de gestión de asuntos activos que permita mantener el hilo de cada expediente sin perder plazos procesales.

6. **Comunicación con clientes eficiente**: ¿Cómo usar IA para redactar comunicaciones con clientes que sean claras, precisas y en lenguaje no técnico? Dame plantillas de prompts para: actualización del estado de un asunto, explicación de una decisión jurídica relevante, solicitud de información o documentación al cliente.

7. **Revisión semanal de asuntos legales**: Diseña una revisión semanal de 20 minutos que cubra: plazos procesales próximos, asuntos que requieren acción urgente, comunicaciones pendientes con clientes y tareas de investigación o redacción en cola. Incluye un prompt para que la IA me ayude a priorizar.

El sistema debe respetar la responsabilidad deontológica del abogado y posicionar la IA como herramienta de apoyo, no como sustituto del criterio jurídico experto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Productividad y gestión del tiempo para profesionales legales',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión eficiente de tickets de soporte al cliente con IA',
                'description'       => 'Implementa un sistema de gestión de tickets con IA que reduzca tiempos de respuesta, mejore la coherencia de las respuestas y libere tiempo para soporte de alta complejidad.',
                'prompt_content'    => <<<'EOT'
Eres un experto en operaciones de Customer Success y gestión de equipos de soporte al cliente. Entiendes que los profesionales de CS enfrentan el desafío de manejar grandes volúmenes de consultas mientras mantienen la personalización y calidad que los clientes esperan. La IA puede transformar radicalmente la productividad de estos equipos.

**Mi situación en Customer Success:**
Trabajo en un equipo de soporte al cliente o Customer Success, gestionando un volumen elevado de tickets, emails y chats de clientes. Los problemas principales son: el volumen de consultas supera la capacidad del equipo, muchas consultas son repetitivas y podrían responderse más rápido, y el trabajo de alta complejidad (clientes estratégicos, problemas técnicos complejos, escalaciones) no recibe suficiente atención.

**objetivo: sistema de productividad para CS con IA**

1. **Clasificación inteligente de tickets**: Diseña un sistema de clasificación de tickets que use IA para:
   - Categorizar automáticamente los tipos de consulta más comunes
   - Asignar prioridad según urgencia e impacto en el cliente
   - Identificar tickets que pueden responderse con una plantilla vs. los que requieren respuesta personalizada
   - Detectar tickets que indican riesgo de churn o escalada

2. **Sistema de respuestas aceleradas**: Crea un banco de prompts para generar respuestas rápidas y personalizadas a las consultas más frecuentes:
   - Respuesta a preguntas sobre facturación y suscripciones
   - Resolución de problemas técnicos comunes
   - Gestión de quejas y clientes insatisfechos
   - Comunicación de tiempos de resolución cuando el problema es complejo
   Dame los prompts específicos para cada tipo de respuesta.

3. **Gestión del tiempo en turno de trabajo**: ¿Cómo organizar un turno de trabajo de soporte para maximizar la productividad? ¿Cuándo procesar tickets acumulados? ¿Cuándo atender chats en tiempo real? ¿Cuándo hacer seguimiento de casos abiertos? ¿Cuándo trabajar en mejoras de procesos?

4. **Documentación de base de conocimiento con IA**: ¿Cómo usar las consultas recurrentes de clientes para mejorar la base de conocimiento y los artículos de ayuda? Dame un proceso para: identificar gaps en la documentación existente, generar borradores de artículos de ayuda con IA y validarlos antes de publicarlos.

5. **Gestión de escalaciones y clientes difíciles**: ¿Cómo usar IA para prepararse para conversaciones difíciles con clientes insatisfechos? ¿Cómo redactar respuestas a situaciones de crisis que sean empáticas, claras y orientadas a soluciones? Dame un protocolo de gestión de escalaciones con apoyo de IA.

6. **Métricas de CS y revisión de productividad**: ¿Qué métricas debería revisar diariamente para gestionar mi productividad personal como agente de CS? (CSAT, tiempo de primera respuesta, tickets resueltos, backlog) ¿Cómo usar IA para identificar patrones en estas métricas?

7. **Revisión semanal de CS**: Diseña una revisión semanal de 20 minutos que cubra: volumen de tickets de la semana, CSAT medio, principales tipos de consulta, casos sin resolver y necesidades de mejora en la base de conocimiento. Incluye un prompt para que la IA genere el resumen semanal.

El resultado debe ser un sistema que permita manejar un mayor volumen de tickets con la misma calidad, liberando tiempo para iniciativas proactivas de Customer Success de mayor impacto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Productividad y gestión de tickets para equipos de Customer Success',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de planificación de proyectos freelance con IA',
                'description'       => 'Construye un sistema de gestión del tiempo freelance con IA que te permita gestionar múltiples clientes, cumplir plazos y proteger tu tiempo para el trabajo creativo.',
                'prompt_content'    => <<<'EOT'
Eres un coach especializado en productividad para freelancers y trabajadores independientes. Entiendes los desafíos únicos de trabajar por cuenta propia: la dificultad de separar el tiempo de trabajo del tiempo personal, la gestión simultánea de múltiples clientes con diferentes expectativas, la tendencia a aceptar más proyectos de los que se pueden gestionar bien y la falta de estructura que impone un empleo tradicional.

**Mi situación como freelancer:**
Trabajo como freelancer o consultor independiente en mi área de especialización. Mis mayores desafíos de productividad son: no saber cómo distribuir el tiempo entre múltiples proyectos activos, la dificultad de establecer límites con clientes que escriben fuera de horario, la subestimación del tiempo real que toman los proyectos y el tiempo que pierdo en tareas administrativas (propuestas, facturas, seguimiento de pagos).

**objetivo: sistema de productividad freelance completo con IA**

1. **Capacidad real de trabajo**: Ayúdame a calcular mi capacidad real de trabajo semanal. No son 40 horas billables: ¿cuánto tiempo dedico a administración, prospección de nuevos clientes, formación y descanso? Dame un modelo de capacidad realista y cómo planificar proyectos respetando esa capacidad.

2. **Sistema de estimación de proyectos**: ¿Cómo usar IA para mejorar mis estimaciones de tiempo en proyectos? Dame un proceso de descomposición de proyectos en tareas granulares, con prompts específicos para que la IA me ayude a anticipar tareas ocultas, revisiones del cliente y tiempo de comunicación que habitualmente no incluyo en mis presupuestos.

3. **Gestión de múltiples clientes simultáneos**: Diseña un sistema de gestión de proyectos paralelos que incluya: cómo asignar bloques de tiempo a cada cliente, cómo cambiar de contexto entre proyectos eficientemente, cómo comunicar el estado de avance a varios clientes sin que consuma demasiado tiempo y cómo gestionar cuando un cliente pide cambios urgentes que afectan a otros proyectos.

4. **Automatización administrativa con IA**: Identifica las tareas administrativas del freelancer que más tiempo consumen y crea prompts para acelerarlas:
   - Redacción de propuestas comerciales personalizadas
   - Contratos de prestación de servicios
   - Emails de seguimiento de pagos
   - Updates semanales de proyecto al cliente
   - Facturas y resúmenes de trabajo realizado

5. **Gestión de clientes y expectativas**: ¿Cómo usar IA para preparar conversaciones difíciles con clientes (retrasos en el proyecto, cambios en el alcance, aumento de precio)? Dame scripts y prompts para comunicar malas noticias de forma profesional y constructiva.

6. **Rutinas de productividad freelance**: Diseña mis rituales diarios de trabajo: ¿cómo arrancar el día sin redes sociales ni emails? ¿cómo planificar las tareas del día en 10 minutos? ¿cómo cerrar el día de trabajo con un ritual que separe lo profesional de lo personal?

7. **Revisión semanal freelance**: Diseña una revisión semanal de 30 minutos que cubra: estado de todos los proyectos activos, horas trabajadas vs. estimadas, cobros pendientes, nuevas oportunidades en pipeline y prioridades de la semana siguiente. Incluye un prompt de IA para generar el resumen semanal de negocio.

El objetivo es construir una práctica freelance sostenible donde pueda producir trabajo de alta calidad, cumplir plazos y aun así mantener tiempo para el desarrollo profesional y el equilibrio personal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Productividad y planificación de proyectos para freelancers',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
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
