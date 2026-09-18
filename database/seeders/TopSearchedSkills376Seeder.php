<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills376Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing que promuevan el bienestar del equipo',
                'description'      => 'Aprende a diseñar campañas internas y externas que comuniquen el compromiso de tu empresa con el bienestar organizacional. Descubre cómo el marketing puede ser un aliado estratégico en la cultura de salud mental.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing especializado en comunicación organizacional y bienestar corporativo. Voy a pedirte que me ayudes a diseñar una estrategia de campaña de marketing orientada a promover el bienestar del equipo, tanto a nivel interno (empleados) como externo (clientes y público general).

**Contexto del reto**

Muchas organizaciones invierten en programas de bienestar pero fallan en comunicarlos efectivamente. El resultado es que los empleados desconocen los recursos disponibles y la empresa pierde el retorno reputacional de sus iniciativas. Una campaña bien diseñada puede cambiar esto.

**Lo que necesito que hagas**

1. **Diagnóstico previo**: Ayúdame a identificar qué preguntas debo responder antes de lanzar la campaña. Incluye: ¿cuál es el estado actual del bienestar en el equipo?, ¿qué programas existen pero están infrautilizados?, ¿cuál es el tono adecuado para nuestra cultura?

2. **Mensajes clave**: Propón al menos cinco mensajes centrales que comuniquen autenticidad y no suenen a marketing vacío. Los mensajes deben hablar de seguridad psicológica, descanso real, apoyo emocional y sostenibilidad profesional.

3. **Canales y formatos**: Detalla qué canales usar (Slack, intranet, redes sociales, email, cartelería física) y qué formatos funcionan mejor para cada audiencia (infografías, testimonios en video, encuestas participativas, newsletters).

4. **Calendario de campaña**: Propón un calendario de 8 semanas con hitos concretos: lanzamiento, puntos de refuerzo, medición intermedia y cierre con celebración de logros.

5. **Métricas de éxito**: Define indicadores para medir el impacto de la campaña: tasa de participación en programas de bienestar, NPS interno, reducción de absentismo, nivel de conocimiento de los recursos disponibles.

6. **Errores frecuentes**: Lista los cinco errores más comunes que cometen las empresas al comunicar iniciativas de bienestar y cómo evitarlos.

**Formato de salida esperado**

Estructura tu respuesta con encabezados claros para cada sección. Usa listas cuando sea útil y proporciona ejemplos concretos de mensajes y piezas de comunicación. Al final, incluye un resumen ejecutivo de una página que pueda presentarse a dirección.

**Tono**: Empático, auténtico, estratégico. Evita el lenguaje corporativo vacío y las frases de moda sin sustancia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar campañas internas y externas de bienestar organizacional',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Bienestar sostenible para equipos de desarrollo de software',
                'description'      => 'Diseña prácticas y rutinas que combatan el burnout en equipos técnicos sin sacrificar la productividad. Aprende a identificar señales tempranas de agotamiento y a crear un entorno de trabajo sostenible a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach especializado en salud y rendimiento de equipos de ingeniería de software. Tu objetivo es ayudarme a construir un plan de bienestar sostenible para un equipo de desarrollo.

**Contexto del problema**

Los equipos de desarrollo de software son especialmente vulnerables al burnout debido a: trabajo cognitivo intensivo, sprints con fechas límite ajustadas, deuda técnica acumulada que genera frustración, cultura de "siempre disponible" y dificultad para desconectar del modo de resolución de problemas. El resultado es rotación alta, errores por fatiga y equipos que funcionan por debajo de su potencial.

**Lo que necesito que desarrolles**

1. **Diagnóstico del equipo**: Dame un framework de preguntas para evaluar el estado de bienestar actual del equipo. Incluye señales de alerta tempranas (código descuidado, menor participación en code reviews, ausencias frecuentes, silencio en retrospectivas).

2. **Rituales de equipo saludables**: Propón rituales concretos de bajo coste de implementación: check-ins emocionales en dailies, retrospectivas de bienestar mensuales, "no-meeting Fridays", política de pull requests sin urgencia artificial.

3. **Cultura de descanso técnico**: Explica cómo integrar tiempo para refactoring, aprendizaje y experimentos sin presión de entrega. Incluye cómo venderlo al management con argumentos de ROI.

4. **Gestión de la carga cognitiva**: Técnicas para reducir el cambio de contexto, limitar el trabajo en progreso (WIP limits en Kanban), y proteger el "deep work" de los desarrolladores.

5. **Señales de burnout individual vs. sistémico**: Cómo distinguir si el problema es un desarrollador específico o una disfunción del sistema, y qué intervenciones corresponden a cada caso.

6. **Plan de 90 días**: Un plan trimestral con acciones semanales para implementar estas prácticas de forma progresiva sin sobrecargar al equipo con el propio proceso de mejora.

**Formato de salida**

Usa secciones con encabezados claros. Incluye al menos tres ejemplos concretos de equipos que han implementado estas prácticas con resultados medibles. Cierra con una lista de recursos (libros, frameworks, herramientas) para profundizar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir prácticas de bienestar sostenible en equipos técnicos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de entornos de trabajo que favorecen la salud mental',
                'description'      => 'Aprende a aplicar principios de diseño biofílico, ergonomía emocional y psicología del espacio para crear entornos de trabajo que reduzcan el estrés y potencien el bienestar de los equipos.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de espacios e interiores especializado en psicología ambiental y bienestar laboral. Quiero que me guíes en el diseño o rediseño de un entorno de trabajo que favorezca activamente la salud mental de quienes trabajan en él.

**Contexto**

El entorno físico tiene un impacto profundo en el estado mental de los trabajadores. La iluminación, el ruido, los colores, la disposición del mobiliario y la presencia de naturaleza influyen directamente en niveles de cortisol, creatividad, concentración y satisfacción. Muchas empresas invierten en programas de bienestar e ignoran el entorno donde la gente pasa 8 horas diarias.

**Lo que necesito**

1. **Auditoría del espacio actual**: Dame una checklist de 20 puntos para evaluar un espacio de trabajo desde la perspectiva del bienestar. Incluye iluminación natural, acústica, temperatura, privacidad, zonas de descanso, vegetación y personalización.

2. **Principios de diseño biofílico aplicado**: Explica cómo incorporar elementos de la naturaleza (plantas, materiales naturales, vistas al exterior, fuentes de agua) de forma práctica y con distintos presupuestos (bajo, medio, alto).

3. **Zonificación para diferentes necesidades**: Propón una distribución de zonas: trabajo concentrado (silencio), colaboración (ruido controlado), descanso activo y descanso pasivo. Incluye criterios de diseño para cada zona.

4. **Paleta de colores y bienestar**: Explica la psicología del color aplicada al espacio de trabajo. Qué colores favorecen la concentración, cuáles la creatividad y cuáles la calma. Con referencias a estudios o evidencia.

5. **Diseño para trabajo híbrido**: Consideraciones específicas para equipos que alternan presencial y remoto. Cómo hacer que quienes trabajan desde casa no se sientan ciudadanos de segunda categoría en diseño e infraestructura.

6. **Quick wins vs. proyectos de largo plazo**: Separa las mejoras que pueden hacerse esta semana (coste cero o mínimo) de los proyectos que requieren inversión y tiempo.

**Formato de entrega**

Organiza la respuesta con secciones claras. Incluye referencias a ejemplos de empresas conocidas que han aplicado estos principios. Finaliza con una propuesta visual conceptual descrita en palabras: cómo debería verse, oírse y sentirse el espacio ideal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar espacios de trabajo para favorecer el bienestar mental',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión del estrés en equipos de ventas de alto rendimiento',
                'description'      => 'Aprende a manejar la presión inherente a los objetivos comerciales sin que afecte la salud del equipo. Desarrolla estrategias para mantener la motivación, prevenir el burnout y sostener el alto rendimiento a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de ventas y experto en psicología del rendimiento. Necesito ayuda para diseñar un sistema de gestión del estrés específicamente adaptado a los equipos comerciales, donde la presión por resultados es inherente al rol.

**El reto específico de ventas**

Los equipos de ventas enfrentan estresores únicos: objetivos mensuales y trimestrales con consecuencias directas sobre la compensación, rechazo constante como parte del día a día, comparación pública de rendimiento, volatilidad de los ingresos variables y cultura de alta exigencia. Esto crea un entorno donde el burnout es frecuente y la rotación altísima.

**Lo que necesito que desarrolles**

1. **Mapa de estresores del vendedor**: Ayúdame a categorizar los principales factores de estrés en ventas: estresores estructurales (cuotas, comisiones), relacionales (clientes difíciles, rechazo), culturales (ranking público, presión de pares) y personales (síndrome del impostor, miedo al fracaso).

2. **Técnicas de regulación emocional para vendedores**: Propón técnicas prácticas y breves (5-15 minutos) que los vendedores puedan usar antes de llamadas difíciles, tras un rechazo o al cierre del día. Incluye respiración, reencuadre cognitivo y mindfulness aplicado.

3. **Diseño de incentivos que no creen ansiedad**: Cómo reformular los sistemas de objetivos y reconocimiento para que sean motivadores en lugar de aterradores. Diferencia entre motivación intrínseca y extrínseca y cómo equilibrarlas.

4. **Cultura de equipo resiliente**: Prácticas de liderazgo que los managers de ventas pueden implementar: celebración del esfuerzo además del resultado, conversaciones uno a uno de calidad, espacios seguros para hablar de las dificultades.

5. **Señales de burnout en perfiles comerciales**: Cómo identificar el burnout en vendedores antes de que lleguen a la renuncia o al desempeño cero. Señales conductuales, relacionales y de rendimiento.

6. **Plan de recuperación post-mal trimestre**: Un protocolo de 30 días para ayudar a un vendedor a recuperar la confianza y el impulso tras un período de resultados bajos sin que el proceso se convierta en más presión.

**Formato de salida**

Estructura la respuesta en secciones. Incluye ejemplos concretos, frases que los managers pueden usar literalmente, y al menos un marco (framework) visual conceptual para gestionar la resiliencia en ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Prevenir el burnout y mantener la resiliencia en equipos comerciales',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Integrar métricas de bienestar en la gestión de product teams',
                'description'      => 'Descubre cómo incorporar el bienestar del equipo como una métrica estratégica en la gestión de producto, junto a velocity, NPS y otras métricas tradicionales. Aprende a medir lo que importa para sostener equipos saludables y productos excelentes.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en gestión de equipos de alto rendimiento y cultura organizacional. Quiero que me ayudes a diseñar un sistema para integrar el bienestar del equipo como una dimensión medible y accionable en la gestión de un product team.

**La hipótesis de partida**

Los equipos de producto que gozan de alta seguridad psicológica y bajo burnout producen mejores productos, con menos deuda técnica, más innovación y mayor retención de talento. Sin embargo, la mayoría de los OKRs y dashboards de producto ignoran completamente estas variables. El resultado: optimizamos para velocity y olvidamos la sostenibilidad.

**Lo que necesito que desarrolles**

1. **Framework de métricas de bienestar para product teams**: Propón un conjunto de 8-12 métricas cuantitativas y cualitativas que puedan integrarse en los rituales de equipo. Incluye: eNPS del equipo, índice de seguridad psicológica, carga de trabajo percibida, calidad del feedback, claridad de objetivos.

2. **Cómo medir sin crear más carga**: El riesgo de medir el bienestar es convertirlo en otra fuente de presión. Diseña un sistema de medición que sea ligero, frecuente y anónimo cuando sea necesario. Incluye herramientas (pulse surveys, retrospectivas, one-on-ones estructurados).

3. **Integración en los rituales de producto**: Cómo incorporar estas métricas en: planning de sprint, retrospectivas, quarterly reviews y conversaciones de performance. Qué preguntas hacer y en qué momento.

4. **Cómo presentarlo al liderazgo**: Traduce el bienestar del equipo en términos de negocio: impacto en retención, coste de rotación, velocidad de entrega, calidad del producto. Incluye un argumento de ROI concreto.

5. **Señales de alerta sistémica vs. individual**: Cómo distinguir cuando el problema de bienestar es estructural (proceso, cultura, objetivos) vs. individual, y qué tipo de intervención corresponde a cada caso.

6. **Plantilla de dashboard de equipo saludable**: Describe cómo sería un dashboard mensual que combine métricas de producto (velocity, calidad, NPS) con métricas de bienestar. Qué columnas, qué frecuencia, quién lo ve.

**Formato de salida**

Estructura la respuesta con encabezados claros. Incluye al menos dos ejemplos de empresas que han implementado enfoques similares. Termina con una propuesta de implementación en 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Medir y gestionar el bienestar como KPI estratégico en product teams',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programa integral de prevención del burnout organizacional',
                'description'      => 'Diseña un programa estructurado de prevención del burnout que vaya más allá del yoga y los snacks saludables. Aprende a atacar las causas raíz del agotamiento organizacional con intervenciones sistémicas y medibles.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en RRHH y salud organizacional con experiencia en el diseño de programas de bienestar corporativo. Necesito tu ayuda para diseñar un programa integral de prevención del burnout que sea auténtico, medible y que ataque las causas raíz del problema.

**El problema con los programas de bienestar actuales**

La mayoría de las iniciativas de bienestar corporativo se centran en síntomas (ofrecer clases de yoga, meditación, fruta en la oficina) sin abordar las causas estructurales del burnout: exceso de carga, falta de autonomía, ausencia de reconocimiento, conflicto de valores, pérdida de comunidad e injusticia percibida. Las seis dimensiones del burnout de Maslach siguen siendo el mejor mapa del problema.

**Lo que necesito que desarrolles**

1. **Diagnóstico organizacional profundo**: Un protocolo de diagnóstico que incluya encuestas anónimas, grupos focales y análisis de datos operativos (absentismo, rotación, productividad). Basado en el Maslach Burnout Inventory y el modelo de Areas of Worklife.

2. **Intervenciones por nivel**: Diseña intervenciones para tres niveles: individual (recursos y herramientas para el empleado), de equipo (cultura, dinámicas y liderazgo) y organizacional (políticas, procesos y estructuras). Cada nivel debe tener al menos tres iniciativas concretas.

3. **El papel del manager como agente de bienestar**: Los managers son el principal factor de bienestar o burnout de sus equipos. Diseña un programa de formación para managers que incluya: cómo tener conversaciones sobre carga de trabajo, cómo dar feedback que no genere ansiedad, cómo modelar el descanso.

4. **Políticas de trabajo sostenible**: Propón políticas concretas: desconexión digital, límites de reuniones, política de vacaciones obligatorias, flexibilidad horaria, gestión de urgencias falsas.

5. **Sistema de seguimiento y mejora continua**: Cómo medir el impacto del programa a lo largo del tiempo. Frecuencia de medición, responsables, umbrales de alerta y proceso de iteración.

6. **Cómo conseguir apoyo del liderazgo**: Un argumentario para convencer a la dirección de invertir en este programa. Incluye datos de ROI, coste de la rotación y casos de empresa referentes.

**Formato de salida**

Estructura la respuesta con secciones claras y numeradas. Incluye plantillas y checklists que puedan usarse directamente. Cierra con un plan de implementación de 6 meses con hitos mensuales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un programa sistemático de prevención del burnout',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis del impacto económico del bienestar laboral en la empresa',
                'description'      => 'Aprende a cuantificar el retorno de la inversión en programas de bienestar laboral. Desarrolla modelos financieros que traduzcan la salud organizacional en términos que el CFO y el consejo de administración puedan comprender y aprobar.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en capital humano y economía del comportamiento organizacional. Necesito tu ayuda para construir un modelo de análisis del impacto económico del bienestar laboral que sea riguroso y convincente para la dirección financiera.

**El reto de cuantificar el bienestar**

El bienestar organizacional tiene un impacto económico real pero difícil de medir directamente. Los CFOs necesitan números, no narrativas. Esto obliga a los departamentos de RRHH a construir casos de negocio sólidos que conecten inversión en bienestar con resultados financieros concretos: reducción de costes, mejora de productividad y reducción de riesgos.

**Lo que necesito que desarrolles**

1. **Modelo de costes del bienestar deficiente**: Ayúdame a construir un modelo que capture el coste total de la baja salud organizacional. Incluye: coste de rotación (reclutamiento, onboarding, curva de aprendizaje), absentismo, presentismo (productividad perdida por empleados presentes pero no funcionales), bajas por enfermedad y costes legales de conflictos laborales.

2. **Benchmark de mercado**: Qué dicen los estudios sobre el ROI de los programas de bienestar. Incluye referencias a investigaciones de Gallup, Harvard Business Review, CIPD u otras fuentes relevantes con cifras concretas.

3. **Modelo de ROI para propuesta de inversión**: Diseña una plantilla de modelo financiero a 3 años para evaluar la inversión en un programa de bienestar. Incluye: inversión inicial, costes operativos anuales, ahorros proyectados por reducción de rotación y absentismo, y VAN estimado.

4. **KPIs financieros del capital humano**: Qué métricas financieras relacionadas con el bienestar deberían incluirse en los reportes de gestión. Coste por empleado, ratio de absentismo, coste de rotación como % del salario medio, productividad por empleado.

5. **Análisis de sensibilidad**: Cómo presentar el modelo con diferentes escenarios (conservador, base, optimista) para dar confianza a la dirección y mostrar en qué supuestos se basa el caso de negocio.

6. **Presentación ejecutiva**: Una estructura de presentación de 10 slides para defender ante el comité de dirección la inversión en bienestar organizacional, con los argumentos financieros en primer plano.

**Formato de salida**

Responde con secciones claramente diferenciadas. Incluye fórmulas o expresiones matemáticas donde sea relevante. Proporciona ejemplos numéricos con datos ficticios pero realistas para ilustrar el modelo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Cuantificar el ROI de los programas de bienestar para la dirección financiera',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal de salud mental y bienestar en el trabajo',
                'description'      => 'Conoce las obligaciones legales de las empresas en materia de salud mental laboral en España y la UE. Aprende a diseñar políticas que cumplan con la normativa, protejan a la empresa y generen un entorno de trabajo seguro.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado laboralista especializado en prevención de riesgos psicosociales y salud mental en el trabajo. Necesito una guía completa del marco legal que regula el bienestar psicológico en el entorno laboral, con foco en España y el marco europeo.

**Contexto**

La salud mental en el trabajo ha pasado de ser una cuestión voluntaria a una obligación legal creciente. La Ley de Prevención de Riesgos Laborales, la Estrategia Española de Seguridad y Salud en el Trabajo 2023-2027, la Directiva Europea sobre trabajo de plataformas y las recientes sentencias sobre desconexión digital han configurado un marco normativo que muchas empresas desconocen o ignoran, exponiéndose a sanciones y responsabilidad civil.

**Lo que necesito que desarrolles**

1. **Inventario normativo completo**: Lista y explica las normas clave aplicables en España: LPRL (artículos relevantes sobre riesgos psicosociales), Real Decreto sobre riesgos psicosociales, ley de igualdad, ley de conciliación, derecho a la desconexión digital (art. 88 LOPDGDD), y referencias al marco europeo (Directiva Marco 89/391/CEE, Acuerdo Marco Europeo sobre estrés laboral).

2. **Obligaciones concretas del empleador**: Qué debe hacer exactamente la empresa: evaluación de riesgos psicosociales, plan de prevención con medidas específicas, designación de responsables, formación, protocolos de actuación ante acoso o burnout.

3. **Protocolos de actuación obligatorios**: Cómo debe ser el protocolo de prevención e intervención en casos de acoso laboral, acoso sexual y riesgo psicosocial grave. Qué debe incluir, quién lo gestiona, plazos de respuesta.

4. **Responsabilidad legal y casos judiciales recientes**: Qué responsabilidades (civil, penal, administrativa) puede afrontar la empresa si no cumple. Incluye ejemplos de sentencias recientes en España sobre burnout, acoso psicológico y desconexión digital.

5. **Auditoría de cumplimiento**: Una checklist de 25 puntos para evaluar si una empresa cumple con sus obligaciones legales en materia de salud mental y bienestar laboral.

6. **Tendencias regulatorias**: Qué cambios normativos están en camino a nivel europeo y español que afectarán al bienestar laboral en los próximos 2-3 años. Cómo prepararse anticipadamente.

**Formato de salida**

Estructura la respuesta con secciones y subsecciones. Cita artículos y normativas específicas. Incluye una tabla resumen de obligaciones y sus plazos. Nota: esta respuesta es orientativa y no sustituye al asesoramiento jurídico específico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Asegurar el cumplimiento legal en materia de salud mental laboral',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Resiliencia emocional en equipos de atención al cliente',
                'description'      => 'Aprende a construir la resiliencia emocional en los equipos de customer success y soporte, que trabajan con el estrés continuo de resolver problemas de clientes insatisfechos. Desarrolla herramientas para proteger la salud mental sin reducir la calidad del servicio.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en bienestar de equipos de servicio al cliente y gestión emocional del trabajo de cara al público. Necesito un sistema completo para construir resiliencia emocional en un equipo de customer success o soporte.

**La realidad del trabajo en atención al cliente**

Los profesionales de customer success y soporte viven en una constante montaña rusa emocional: clientes frustrados, problemas urgentes, expectativas difíciles de gestionar, y la presión de métricas como CSAT, tiempo de resolución y NPS. La fatiga por compasión y el burnout emocional son las principales causas de rotación en estos equipos. La alta rotación destruye la calidad del servicio y el conocimiento institucional acumulado.

**Lo que necesito que desarrolles**

1. **El coste emocional del trabajo de soporte**: Explica los mecanismos psicológicos del trabajo emocional (Arlie Hochschild), la fatiga por compasión y la sobrecarga emocional. Cómo afectan a la calidad del servicio y a la salud del agente.

2. **Técnicas de regulación emocional en tiempo real**: Herramientas que los agentes puedan usar durante o inmediatamente después de una interacción difícil: breathing reset, reencuadre cognitivo rápido, técnica de dejar la emoción del cliente "donde le corresponde".

3. **Diseño de turnos y carga de trabajo para la resiliencia**: Cómo estructurar los turnos, rotaciones de canales (chat vs. teléfono vs. email), períodos de recuperación y límites en el número de tickets difíciles consecutivos.

4. **Cultura de equipo que protege la salud mental**: Rituales de equipo: debriefing de casos difíciles, celebración de resoluciones exitosas, espacios seguros para expresar el impacto emocional. Cómo crear estos espacios sin que parezca terapia de empresa.

5. **El rol del manager como escudo emocional**: Cómo el manager de soporte puede proteger al equipo del cliente tóxico, defender al agente ante escalaciones injustas, y gestionar el feedback negativo de clientes sin cargarlo directamente sobre el agente.

6. **Métricas de bienestar específicas para equipos de soporte**: Qué indicadores seguir: tasa de rotación vs. benchmark del sector, encuestas de bienestar post-interacción, uso de recursos de apoyo, calidad de las interacciones como proxy de estado emocional.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye scripts concretos que los managers pueden usar, y una hoja de ruta de 60 días para implementar estas prácticas en un equipo existente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proteger la salud mental de los equipos de soporte y customer success',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Bienestar y sostenibilidad para el trabajador independiente',
                'description'      => 'Diseña un sistema de bienestar personal adaptado a la realidad del trabajo freelance: sin redes de seguridad corporativas, con la presión de conseguir clientes y la dificultad de desconectar cuando el despacho está en casa.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de bienestar y productividad especializado en trabajadores independientes y freelancers. Quiero que me ayudes a diseñar un sistema integral de bienestar sostenible adaptado a mi realidad como profesional independiente.

**La realidad del freelancer y el bienestar**

Los trabajadores independientes enfrentamos retos de bienestar únicos que los programas corporativos no contemplan: no tenemos vacaciones pagadas, la incertidumbre de ingresos genera ansiedad crónica, el aislamiento social es frecuente, la frontera entre trabajo y descanso se borra cuando la oficina está en casa, y no hay nadie que nos diga que podemos irnos a casa a las 6. La libertad que buscamos puede convertirse fácilmente en una trampa de sobreexigencia permanente.

**Lo que necesito que desarrolles**

1. **Diagnóstico de mi situación de bienestar actual**: Dame un framework de autodiagnóstico con 20 preguntas para evaluar mi estado actual de bienestar en cinco dimensiones: energía física, salud mental, finanzas emocionales, relaciones profesionales y satisfacción con el trabajo.

2. **Sistema de gestión del tiempo sostenible**: Cómo diseñar una jornada laboral que tenga inicio y fin claros, períodos de trabajo profundo, descansos protegidos y cierres de semana ritualizados. Incluye técnicas específicas para el contexto de trabajo en casa.

3. **Gestión de la ansiedad financiera**: La incertidumbre de ingresos es el principal estresor de los freelancers. Propón estrategias concretas: colchón financiero ideal, diversificación de clientes, psicología del dinero para independientes, y cómo tomar decisiones de negocio sin que el miedo las distorsione.

4. **Comunidad y conexión**: Cómo combatir el aislamiento profesional sin una empresa que te lo dé. Espacios de trabajo compartidos (coworking), comunidades online, masterminds, grupos de pares. Cómo construir intencionalmente tu red de apoyo.

5. **Límites con los clientes y contigo mismo**: Protocolos para gestionar la disponibilidad, responder a urgencias de clientes fuera de horario, decir no a proyectos que no te convienen, y poner precios que no te quemen.

6. **Rituales de recuperación y recarga**: Cómo garantizarte descanso real cuando nadie te lo da: política de vacaciones propia, días de recarga, sabbaticals entre proyectos grandes. Cómo gestionar la culpa de descansar.

**Formato de salida**

Estructura la respuesta con secciones numeradas. Incluye ejemplos concretos de cómo otros freelancers han implementado estas prácticas. Finaliza con un "contrato de bienestar" personal que pueda firmar conmigo mismo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de bienestar sostenible como profesional independiente',
                'vote_score'       => 46,
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
