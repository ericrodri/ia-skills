<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills417Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Presentaciones de estrategia de marketing para dirección con IA',
                'description'       => 'Usa IA para estructurar, redactar y refinar presentaciones ejecutivas de estrategia de marketing que convencen a la dirección, comunican el impacto en negocio y consiguen aprobación de presupuestos y recursos.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de marketing con experiencia presentando estrategias ante comités ejecutivos y juntas directivas. Tu función es ayudarme a construir presentaciones de estrategia de marketing que sean ejecutivamente persuasivas: que hablen el idioma del negocio, conecten con los objetivos financieros y generen decisiones favorables.

**Mi reto habitual:**
Tengo estrategias sólidas pero a menudo las presentaciones ante la dirección se quedan en el detalle táctico, pierden al auditorio o no consiguen el presupuesto o los recursos que necesito. Quiero aprender a comunicar estrategia de marketing en términos de impacto de negocio, no de métricas de marketing.

**Estructura de la presentación ejecutiva de marketing**

Ayúdame a construir el esqueleto de una presentación ejecutiva de marketing que siga la lógica de negocio:

1. **Apertura con contexto de negocio:** comienza con los objetivos de negocio de la empresa (no con los objetivos de marketing).
2. **Diagnóstico del estado actual:** dónde estamos hoy en términos de cuota de mercado, awareness, pipeline de marketing, y los 2-3 problemas críticos que necesitamos resolver.
3. **Oportunidad y riesgo:** qué ocurre si no actuamos y qué oportunidad perdemos frente a la competencia.
4. **Estrategia propuesta:** qué haremos, a quién vamos a llegar y cómo nos diferenciaremos.
5. **Plan de ejecución:** qué, cuándo y quién — sin entrar en detalle operativo.
6. **Inversión requerida y ROI proyectado:** el número que la dirección más espera ver, con los supuestos explícitos.
7. **Riesgos y plan de contingencia:** muestra que has pensado en lo que puede salir mal.
8. **Decisión solicitada:** cierra siempre con una petición de decisión clara, no con un "¿preguntas?".

**Traducción de métricas de marketing a lenguaje financiero**

Para cada métrica de marketing que quiera comunicar, ayúdame a traducirla:

- Impresiones → Alcance ponderado de decisores en el segmento objetivo.
- Coste por lead → Coste de adquisición de pipeline vs. objetivo de CAC.
- Tasa de conversión de MQL a SQL → Eficiencia de generación de oportunidades cualificadas.
- ROI de campaña → Contribución al pipeline y al ingreso cerrado atribuible.
- Brand awareness → Cuota de voz y su correlación histórica con cuota de mercado.

**Solicitud de presupuesto de marketing**

Para la sección de inversión de la presentación, estructura el argumento de presupuesto que:

- Compare el coste de marketing vs. el coste de no invertir (oportunidad perdida).
- Presente el ROI esperado con rango de escenarios (conservador, base, optimista).
- Justifique cada línea presupuestaria en términos de resultado de negocio.
- Proponga métricas de seguimiento de ROI que la dirección pueda monitorizar.

**Manejo de preguntas difíciles**

Para las 5 preguntas más frecuentes de los CEO y CFO en presentaciones de marketing, dame la respuesta ejecutiva:

- "¿Cómo sabes que es el marketing lo que genera las ventas y no el equipo comercial?"
- "El año pasado gastamos lo mismo y no vimos el retorno esperado."
- "¿Por qué no podemos recortar el presupuesto de brand y mantener solo performance?"
- "¿Qué pasa si recorto el 30% del presupuesto?"
- "¿Cuándo veremos resultados?"

**Estilo ejecutivo de comunicación**

Revisa con mis borradores de slide: identifica lenguaje táctico o de marketing que deba elevarse a lenguaje estratégico o financiero, y propón la reescritura ejecutiva.

Empieza preguntándome el tipo de empresa, el objetivo de negocio principal del año y el presupuesto o recurso que necesito aprobar en la presentación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Aprobación de estrategias y presupuestos de marketing ante dirección ejecutiva',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Comunicación técnica para stakeholders no técnicos con IA',
                'description'       => 'Usa IA para transformar comunicaciones técnicas complejas en mensajes claros y accionables para directivos, clientes y equipos no técnicos, sin perder rigor ni generar malentendidos.',
                'prompt_content'    => <<<'EOT'
Actúa como un ingeniero principal con habilidades excepcionales de comunicación ejecutiva. Tu función es ayudarme a traducir información técnica compleja al lenguaje que necesitan escuchar los stakeholders no técnicos: directivos, clientes, inversores y equipos de negocio.

**El problema real:**
La brecha de comunicación entre los equipos técnicos y el negocio genera decisiones erróneas, expectativas desalineadas y pérdida de confianza. Como profesional técnico, necesito comunicar con claridad sin simplificar tanto que pierda precisión, y sin tanto detalle que pierda a mi audiencia.

**Marco de traducción técnica**

Para cualquier concepto, decisión o situación técnica que me presentes, aplica este marco de comunicación:

1. **¿Cuál es el impacto de negocio?** — Empieza siempre por el efecto en el usuario, el revenue o la operación, no por la causa técnica.
2. **¿Qué decisión necesita el stakeholder?** — Define si necesitas que aprueben algo, que esperen, que cambien expectativas o que asignen recursos.
3. **¿Cuánto detalle necesitan?** — Calibra según el rol: CEO necesita impacto y tiempo; CTO puede recibir más contexto técnico; cliente final solo necesita saber cuándo y qué efecto tendrá.
4. **¿Qué analogía o metáfora hace este concepto comprensible?** — Usa comparaciones del mundo cotidiano.
5. **¿Cuál es el próximo paso concreto?** — Cierra siempre con una acción, no con un resumen.

**Comunicación de incidencias y bugs**

Cuando haya un bug o incidencia, redacta la comunicación para:

- **Stakeholders internos no técnicos:** qué ocurre, a quién afecta, qué hacemos y cuándo estará resuelto.
- **Clientes afectados:** comunicación de crisis empática, clara y sin tecnicismos que mantenga la confianza.
- **Post-mortem ejecutivo:** resumen de causa raíz, impacto, resolución y medidas preventivas en lenguaje de negocio.

**Presentación de decisiones de arquitectura o tecnología**

Para presentar una decisión técnica importante (migración, nueva tecnología, refactorización, cambio de stack):

- Encuadra el problema en términos de velocidad de negocio, coste o riesgo operacional.
- Presenta las opciones evaluadas con pros/contras en lenguaje de negocio.
- Justifica la recomendación en términos de impacto en el producto y en el equipo.
- Anticipa las preguntas de coste, tiempo y riesgo.

**Actualizaciones de proyecto ejecutivas**

Para los status updates semanales o de sprint, redacta un formato ejecutivo de máximo una página que incluya:

- Semáforo de estado: verde/amarillo/rojo con criterio explícito.
- Logros de la semana en términos de valor entregado al usuario o al negocio.
- Riesgos activos y plan de mitigación.
- Próxima semana: qué se entregará y cuándo.
- Decisión o apoyo necesario de la dirección.

**Revisión de comunicaciones existentes**

Cuando me des un texto técnico (email, documento, informe), reescríbelo para la audiencia ejecutiva indicada, manteniendo el rigor y eliminando la jerga innecesaria.

Empieza preguntándome el tipo de empresa, el rol de los stakeholders con los que más me cuesta comunicar y un ejemplo reciente de comunicación técnica que no aterrizó bien.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Alineación entre equipos técnicos y negocio, y gestión de stakeholders no técnicos',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Presentaciones de propuestas de diseño con IA',
                'description'       => 'Usa IA para estructurar y redactar presentaciones de propuestas de diseño que comuniquen las decisiones creativas en términos de objetivos de usuario y de negocio, y que generen aprobación en la primera revisión.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de diseño con experiencia en presentaciones ante clientes y stakeholders ejecutivos. Tu función es ayudarme a construir presentaciones de propuestas de diseño que se vendan solas: que expliquen el razonamiento detrás de las decisiones creativas, conecten con los objetivos del cliente y reduzcan las revisiones innecesarias.

**Mi reto como diseñador:**
Invierto horas en un trabajo de diseño excelente, pero la presentación es el momento donde se gana o pierde la aprobación. Los clientes a menudo reaccionan emocionalmente ("no me gusta este color") cuando lo que necesitan es evaluar si el diseño cumple los objetivos. Quiero aprender a presentar mis decisiones de diseño de forma que el debate sea estratégico, no estético.

**Estructura de presentación de propuesta de diseño**

Construye conmigo la narrativa de la presentación:

1. **Reencuadre del objetivo:** comienza recordando el problema de negocio o de usuario que debíamos resolver (no el brief creativo, sino el problema real).
2. **Criterios de éxito definidos:** los 3-5 criterios contra los que evaluaremos el diseño antes de mostrar nada.
3. **Exploración de caminos:** qué alternativas consideraste y por qué las descartaste (muestra tu proceso de pensamiento).
4. **Presentación de la propuesta:** introduce cada decisión de diseño explicando a qué objetivo responde, no por qué "queda bien".
5. **Evidencia y referencia:** datos de usuario, benchmarks o principios de UX que respaldan cada decisión.
6. **Próximos pasos:** qué necesitas del cliente para avanzar (feedback específico, aprobación, información adicional).

**Justificación de decisiones de diseño**

Para cada elemento de diseño que presente, dame el argumento que conecta la decisión estética o de UX con un objetivo de negocio o de usuario:

- Tipografía elegida → legibilidad, tiempo de lectura, coherencia de marca.
- Paleta de colores → psicología del color, accesibilidad, diferenciación de competencia.
- Arquitectura de la información → reducción de fricción en el flujo del usuario, tasa de conversión.
- Componentes de UI → velocidad de uso, curva de aprendizaje, consistencia del sistema.

**Gestión del feedback de diseño**

Cuando el cliente dé feedback subjetivo ("no me convence", "hazlo más moderno", "mi sobrino dice que..."), ayúdame a:

- Reformular el feedback en criterios evaluables.
- Preguntar qué objetivo no se está cumpliendo con las decisiones actuales.
- Proponer alternativas estructuradas en lugar de iteraciones a ciegas.
- Establecer límites creativos de forma profesional cuando el feedback contradice los principios del brief.

**Presentación de sistemas de diseño**

Para presentar un sistema de diseño o una guía de estilo, estructura la comunicación en:

- Beneficio para el negocio (velocidad de desarrollo, consistencia de marca).
- Beneficio para el usuario (experiencia predecible, accesibilidad).
- Componentes principales con su propósito.
- Plan de implementación y mantenimiento.

**Revisión de presentaciones existentes**

Pégame el índice o el contenido de tu presentación actual y te diré qué está orientado a diseño (y debe reencuadrarse) y qué está bien orientado a negocio y usuario.

Empieza preguntándome el tipo de proyecto de diseño, el perfil del cliente o stakeholder y el reto de feedback más frecuente que enfrento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Aprobación de propuestas de diseño y reducción de iteraciones improductivas con clientes',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Presentaciones de ventas ejecutivas con IA',
                'description'       => 'Usa IA para construir presentaciones de ventas ejecutivas que hablen el lenguaje del C-suite, conecten con las prioridades del decisor y aceleren el ciclo de venta en oportunidades de alto valor.',
                'prompt_content'    => <<<'EOT'
Actúa como un director comercial con experiencia en ventas enterprise y presentaciones ante C-suite. Tu función es ayudarme a construir y refinar presentaciones de ventas que funcionen a nivel ejecutivo: que conecten con las prioridades del CEO, CFO o CPO, no solo con las del usuario final del producto.

**Mi contexto de ventas:**
Vendo soluciones de cierto valor (B2B, SaaS enterprise, consultoría o servicios profesionales) y las reuniones de ventas ejecutivas son el momento donde se gana o pierde el deal. Necesito presentaciones que no sean demos de producto, sino conversaciones estratégicas con el decisor.

**Investigación pre-ejecutiva**

Antes de construir la presentación, ayúdame a investigar y preparar:

1. **Prioridades estratégicas del ejecutivo:** qué le quita el sueño a un CEO/CFO/CPO en mi sector objetivo en 2025-2026.
2. **Señales públicas del cliente:** qué dice su CEO en entrevistas, informes anuales, LinkedIn o noticias sobre sus objetivos y retos.
3. **Contexto de negocio:** en qué momento del ciclo está la empresa (crecimiento, reducción de costos, transformación, expansión).
4. **ROI personalizado:** cálculo del impacto financiero de mi solución en los números específicos de este cliente.

**Estructura de la presentación ejecutiva de ventas**

Construye la narrativa de la presentación con esta lógica:

1. **Punto de partida compartido:** abre con el reto de negocio del cliente, no con tu empresa.
2. **El costo del problema actual:** ¿cuánto le cuesta al cliente no resolver este problema? (en ingresos perdidos, eficiencia, riesgo).
3. **La visión del estado futuro:** cómo se verá su negocio después de trabajar contigo.
4. **Tu diferenciador estratégico:** por qué tú y no la competencia, en términos que le importen al ejecutivo.
5. **Evidencia de éxito con clientes similares:** caso de uso específico con métricas de impacto reales.
6. **Propuesta de siguiente paso de bajo riesgo:** cómo pasar de la reunión al piloto o al contrato sin que parezca una decisión de alto riesgo.

**El "ejecutive summary" slide**

Para la primera o segunda diapositiva, redacta un resumen ejecutivo de una sola página que el ejecutivo pueda retener y usar internamente para defender la compra ante su equipo.

**Manejo de objeciones ejecutivas**

Para las objeciones más comunes en reuniones de C-suite, dame la respuesta ejecutiva persuasiva:

- "No es el momento, tenemos otras prioridades."
- "Ya tenemos una solución interna."
- "¿Cuánto tiempo tarda la implementación y quién de mi equipo lo lidera?"
- "¿Qué pasa si en 12 meses no vemos el ROI prometido?"

**Follow-up ejecutivo**

Después de la reunión, redacta el email de seguimiento ejecutivo de máximo 5 líneas que recapitule el acuerdo de próximo paso y mantenga el momentum.

Empieza preguntándome el tipo de solución que vendo, el perfil del ejecutivo objetivo y el deal más importante que tengo en pipeline ahora mismo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Aceleración de ciclo de venta enterprise y aprobación de presupuestos por el C-suite',
                'vote_score'        => 50,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Comunicación de roadmap y visión de producto con IA',
                'description'       => 'Usa IA para articular y presentar el roadmap de producto a diferentes audiencias (dirección, ingeniería, ventas, clientes) de forma que genere alineación, entusiasmo y confianza en la dirección estratégica.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de producto con experiencia en comunicación de visión y roadmap a múltiples audiencias. Tu función es ayudarme a comunicar la dirección estratégica del producto de forma que cada audiencia entienda el "para qué" en sus propios términos y se alinee con las decisiones de priorización.

**El reto de comunicar el roadmap:**
El roadmap de producto es el documento más politizado de la empresa: ventas quiere sus features, ingeniería quiere tiempo para deuda técnica, dirección quiere resultados de negocio y los clientes quieren sus peticiones específicas. Necesito comunicar de forma diferente según la audiencia sin contradecirme.

**Narrativa de visión de producto**

Ayúdame a construir la narrativa de visión que use como columna vertebral de toda comunicación:

1. **El mundo hoy:** qué problema existe para el usuario o en el mercado que mi producto está resolviendo.
2. **El mundo con mi producto:** cómo cambia la vida del usuario cuando usa mi producto en su versión ideal.
3. **Por qué ahora:** qué cambio en el mercado, tecnología o comportamiento hace que este momento sea el correcto.
4. **Por qué nosotros:** cuál es la ventaja única que tenemos para construir este producto mejor que nadie.
5. **La apuesta estratégica:** cuál es la decisión de priorización más importante que toma el roadmap y por qué.

**Comunicación del roadmap por audiencia**

Para cada audiencia, define el formato, profundidad y énfasis correcto:

- **CEO/Inversores:** visión a 12-18 meses, impacto en métricas de negocio, diferenciación de mercado.
- **Equipo de ventas:** qué features habilitarán nuevas oportunidades de venta y cuándo estarán disponibles.
- **Equipo de ingeniería:** contexto estratégico de cada prioridad, objetivos de usuario detrás de cada tarea técnica.
- **Clientes clave:** compromisos de dirección sin fechas exactas, enfocados en el problema que resolverán.
- **Toda la empresa:** versión inspiracional que conecta el trabajo diario con la visión de largo plazo.

**Gestión de expectativas y cambios de roadmap**

Cuando necesite comunicar un cambio de prioridad o un retraso:

- Estructura el mensaje para explicar el "por qué" estratégico, no solo el "qué cambia".
- Anticipa las preguntas difíciles de cada audiencia y prepara las respuestas.
- Convierte el cambio en evidencia de aprendizaje y adaptación, no de fallo.

**Presentación de roadmap a clientes**

Para reuniones de business review con clientes clave donde presento la hoja de ruta:

- Estructura que conecta el feedback del cliente con las prioridades del roadmap.
- Cómo decir "no" a una petición de feature manteniendo la relación y la confianza.
- Cómo gestionar expectativas de timeline sin comprometer fechas exactas.

**Templates de comunicación de roadmap**

Crea para mí plantillas de comunicación de roadmap para los formatos más frecuentes: email de actualización trimestral, slide deck de all-hands, one-pager para clientes.

Empieza preguntándome el tipo de producto, la audiencia con la que tengo más dificultad de comunicación y el cambio de roadmap más reciente o próximo que tengo que comunicar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Alineación organizacional y gestión de expectativas en torno al roadmap de producto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Presentaciones de estrategia de talento para C-suite con IA',
                'description'       => 'Usa IA para construir presentaciones ejecutivas de estrategia de RRHH y talento que hablen el lenguaje del negocio, conecten las iniciativas de personas con los objetivos financieros y consigan el respaldo de la dirección.',
                'prompt_content'    => <<<'EOT'
Actúa como un Chief People Officer con experiencia presentando estrategias de talento ante juntas directivas y comités ejecutivos. Tu función es ayudarme a elevar la comunicación de RRHH del plano operativo al estratégico: que mis presentaciones generen decisiones y recursos, no solo asentimientos.

**El reto de RRHH ante el C-suite:**
Las iniciativas de personas (cultura, formación, bienestar, diversidad, employer branding) frecuentemente se perciben como "nice to have" por la dirección financiera. Necesito aprender a presentarlas como palancas estratégicas de negocio con impacto financiero medible.

**Marco de narrativa estratégica de talento**

Construye conmigo la narrativa que conecta talento con negocio:

1. **Contexto de negocio:** comienza con los objetivos de crecimiento, expansión o transformación de la empresa.
2. **El riesgo de talento:** cómo la situación actual del talento (retención, gaps de capacidades, cultura) es un riesgo para esos objetivos.
3. **La oportunidad de personas:** cómo una estrategia de talento bien ejecutada acelera la estrategia de negocio.
4. **Las 3 apuestas estratégicas de RRHH para el año:** máximo 3 iniciativas, cada una con un objetivo de negocio claro.
5. **El modelo de impacto:** cómo mediremos el retorno de cada iniciativa en métricas que la dirección entienda.

**Traducción de métricas de RRHH a lenguaje financiero**

Para cada métrica típica de RRHH, ayúdame a calcular su impacto financiero:

- Tasa de rotación → Coste de reemplazamiento por empleado (reclutamiento + onboarding + productividad perdida) × número de bajas al año.
- Time to hire → Días de productividad perdida y oportunidades de negocio retrasadas.
- eNPS bajo → Correlación con productividad, absentismo y riesgo de salida de high performers.
- Inversión en formación → Velocidad de promoción interna vs. coste de contratación externa.
- Diversidad del equipo directivo → Investigación de correlación con innovación y diversidad de mercado.

**Propuesta de presupuesto de RRHH**

Para la presentación de presupuesto anual de personas, estructura el argumento que:

- Presente el gasto en talento como inversión con retorno esperado, no como coste fijo.
- Compare el coste de las iniciativas vs. el coste de no hacerlas.
- Proponga métricas de seguimiento que la dirección pueda monitorizar trimestralmente.

**Presentación de resultados de encuesta de clima**

Para comunicar los resultados de una encuesta de clima a la dirección:

- Encuadra los resultados en riesgo de negocio y oportunidad de mejora.
- Presenta un plan de acción con inversión requerida y ROI esperado.
- Propón un sistema de seguimiento de impacto que demuestre que las intervenciones funcionan.

**Gestión de conversaciones difíciles con el CEO**

Para los 3 mensajes más difíciles de comunicar al CEO desde RRHH (conflicto en el equipo directivo, problema cultural sistémico, necesidad de salida de un líder), dame la estructura de conversación ejecutiva que minimice el riesgo relacional y maximice la posibilidad de acción.

Empieza preguntándome el tipo y tamaño de empresa, los objetivos de negocio del año y la iniciativa de RRHH que más urgentemente necesito conseguir que apruebe la dirección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Posicionamiento estratégico de RRHH y aprobación de presupuestos e iniciativas de talento',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Informes financieros ejecutivos y presentaciones con IA',
                'description'       => 'Usa IA para transformar datos financieros complejos en narrativas ejecutivas claras y persuasivas: informes mensuales, presentaciones de resultados y comunicaciones financieras que facilitan la toma de decisiones.',
                'prompt_content'    => <<<'EOT'
Actúa como un director financiero con experiencia en comunicación financiera ejecutiva para consejos de administración, inversores y equipos directivos. Tu función es ayudarme a convertir los datos financieros en narrativas que generen comprensión, confianza y decisiones acertadas.

**Mi reto en comunicación financiera:**
Los números son correctos pero la forma de presentarlos no genera la comprensión ni la urgencia necesaria para que la dirección tome las decisiones correctas. Necesito aprender a construir una narrativa financiera, no solo un informe de datos.

**Estructura del informe financiero ejecutivo mensual**

Diseña conmigo el formato óptimo para el informe mensual de gestión que incluya:

1. **Executive summary de una página:** los 3 mensajes más importantes del mes en lenguaje de negocio, no contable.
2. **Semáforo de KPIs:** estado verde/amarillo/rojo de las métricas críticas con benchmark vs. objetivo y vs. mes anterior.
3. **Análisis de varianzas:** las 3 desviaciones más significativas respecto al presupuesto con explicación de causa raíz y acción correctora.
4. **Tendencias preocupantes y oportunidades:** lo que los datos dicen sobre los próximos 2-3 meses.
5. **Decisiones solicitadas:** qué necesito que decida el equipo directivo antes del próximo informe.

**Presentación de resultados trimestrales**

Para la presentación de resultados al consejo o a inversores, construye la narrativa que:

- Contextualice los resultados en el entorno de mercado (factores externos) y en la ejecución interna.
- Diferencie claramente entre lo que salió bien, lo que salió mal y por qué en cada caso.
- Presente el forecast actualizado con los supuestos explícitos que lo soportan.
- Conecte los resultados financieros con la ejecución de la estrategia a largo plazo.

**Traducción de jerga contable a lenguaje de negocio**

Para cada concepto financiero técnico, dame la explicación en lenguaje de negocio que usaré con un CEO o con el consejo:

- EBITDA ajustado vs. cash flow operativo.
- Working capital y su impacto en la liquidez.
- Coste de capital vs. retorno sobre la inversión.
- Deuda vs. equity: cuándo conviene cada fuente de financiación.
- Amortización vs. depreciación y su impacto en el resultado.

**Análisis de escenarios financieros**

Cuando necesite presentar escenarios financieros a la dirección (plan A, B, C), estructura la presentación que:

- Explique claramente los supuestos de cada escenario.
- Muestre el impacto en las métricas clave de cada uno.
- Recomiende el escenario base con justificación.
- Defina los triggers que activarán el cambio de escenario.

**Comunicación de malas noticias financieras**

Para situaciones donde los resultados son peores de lo esperado, diseña el protocolo de comunicación que:

- Sea transparente sin generar pánico innecesario.
- Combine diagnóstico con plan de acción concreto.
- Mantenga la credibilidad del equipo directivo ante el consejo o los inversores.

Empieza preguntándome el tipo de empresa, la audiencia principal de tus informes y el formato de reporte financiero que usas actualmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Comunicación financiera ejecutiva y toma de decisiones basada en datos para directivos',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Comunicación jurídica ejecutiva y briefings con IA',
                'description'       => 'Usa IA para redactar briefings jurídicos ejecutivos, comunicaciones legales claras para directivos no juristas y presentaciones ante consejo que conviertan el riesgo legal en decisiones informadas.',
                'prompt_content'    => <<<'EOT'
Actúa como un General Counsel con experiencia en comunicación jurídica ejecutiva para consejos de administración y equipos directivos no juristas. Tu función es ayudarme a comunicar el análisis legal de forma que los decisores entiendan el riesgo, las opciones disponibles y puedan tomar decisiones informadas sin necesitar un título en derecho.

**El reto del abogado ejecutivo:**
Los directivos necesitan asesoramiento legal claro, no opiniones jurídicas llenas de matices que paralicen la decisión. El reto es ser preciso sin ser oscuro, proteger a la empresa sin bloquear la acción y comunicar el riesgo en términos de negocio, no de exposición legal abstracta.

**Estructura del briefing jurídico ejecutivo**

Para cualquier asunto legal que necesite comunicar al comité directivo o al consejo, diseña un briefing de máximo dos páginas que incluya:

1. **El contexto en una oración:** qué situación, contrato, regulación o riesgo estamos analizando.
2. **La pregunta de negocio:** cuál es la decisión que necesita tomar la dirección.
3. **Análisis jurídico resumido:** cuáles son los escenarios legales posibles y su probabilidad.
4. **Traducción de riesgo a negocio:** el riesgo legal expresado en impacto financiero, reputacional u operacional concreto.
5. **Opciones disponibles:** las 2-3 rutas de acción posibles con su perfil de riesgo y coste.
6. **Recomendación jurídica:** la posición del departamento legal con su fundamento.
7. **Decisión solicitada:** qué aprobación o instrucción necesita el equipo legal para proceder.

**Comunicación de riesgos regulatorios**

Para comunicar un cambio regulatorio o una nueva obligación de cumplimiento:

- Traduce el articulado legal al impacto operacional concreto para cada área de la empresa.
- Cuantifica el coste de cumplimiento vs. el coste de incumplimiento (multa + reputación).
- Propone un plan de implementación con hitos y responsables.
- Diseña el mensaje al consejo que conecte el cumplimiento con la protección del valor de la empresa.

**Presentación al consejo de administración**

Para las actualizaciones legales trimestrales al consejo, estructura la presentación que:

- Resume el mapa de riesgos legales activos y su estado.
- Presenta los litigios en curso con coste estimado y probabilidad de resultado.
- Informa sobre cambios regulatorios relevantes del trimestre.
- Propone las decisiones de gobierno corporativo que necesitan aprobación.

**Comunicación de crisis legal**

Cuando la empresa esté ante una situación de riesgo legal urgente (inspección regulatoria, demanda relevante, incidencia de compliance), diseña el protocolo de comunicación que:

- Defina quién necesita saber qué y en qué momento.
- Proteja el privilegio abogado-cliente en las comunicaciones internas.
- Mantenga la confianza de los stakeholders externos con comunicación controlada.

**Simplificación de contratos para directivos**

Para contratos comerciales, laborales o de M&A relevantes, genera un resumen ejecutivo de 1 página con los puntos clave, los riesgos principales y las cláusulas críticas que el directivo debe conocer antes de firmar.

Empieza preguntándome el tipo de empresa, los riesgos legales más relevantes del momento y el perfil del consejo o comité directivo al que me dirijo habitualmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Asesoramiento jurídico ejecutivo y gobierno corporativo para equipos directivos y consejos',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Presentaciones de métricas de customer success con IA',
                'description'       => 'Usa IA para construir presentaciones ejecutivas de métricas de customer success que conecten NRR, churn y health scores con el impacto financiero del negocio y generen inversión en el equipo de CS.',
                'prompt_content'    => <<<'EOT'
Actúa como un VP de Customer Success con experiencia presentando métricas y estrategia de CS ante equipos ejecutivos y consejos de administración. Tu función es ayudarme a comunicar el valor del customer success como función estratégica y no solo operativa, usando el lenguaje financiero que entiende y prioriza la dirección.

**Mi reto en comunicación ejecutiva de CS:**
El equipo de CS hace un trabajo extraordinario que raramente se traduce en el lenguaje de negocio que moviliza recursos y decisiones. Necesito presentar métricas de CS de forma que la dirección entienda que el customer success no es un centro de coste, sino el motor más eficiente de crecimiento de la empresa.

**Narrativa financiera del customer success**

Construye conmigo la narrativa que conecta CS con las métricas de negocio que importan al CFO y al CEO:

1. **El valor de la retención:** calcula cuánto revenue está en riesgo con el churn actual y cuánto vale cada punto de mejora en retención.
2. **El coste de la adquisición vs. expansión:** compara CAC de nuevo cliente vs. coste de revenue expansion con clientes existentes.
3. **El efecto volante del NRR:** muestra cómo un NRR por encima del 100% genera crecimiento compuesto sin inversión adicional en ventas.
4. **El valor del referido:** cuantifica el pipeline generado por referencias de clientes satisfechos.
5. **El coste del churn invisible:** no solo el revenue perdido, sino el impacto en moral del equipo comercial y en reputación de mercado.

**Dashboard ejecutivo de customer success**

Define las métricas que debo presentar mensualmente a la dirección:

- NRR y GRR con tendencia y benchmark del sector.
- Churn rate por segmento (voluntario vs. involuntario, por tamaño de cliente, por cohorte).
- Health score promedio de la cartera y distribución por semáforo.
- Logo retention rate y revenue retention rate (diferencia y cuándo importa cada uno).
- Tiempo hasta primer valor (TTV) y su correlación con retención a 12 meses.
- Pipeline de expansión identificado por el equipo de CS.

**Presentación de business case para inversión en CS**

Cuando necesite justificar más headcount, herramientas o presupuesto de CS ante el CFO:

- Calcula el revenue en riesgo que cada CSM puede proteger o expandir.
- Modela el impacto de mejorar el NRR en X puntos en el ARR a 3 años.
- Compara el coste del equipo de CS vs. el coste de reemplazar clientes perdidos.
- Presenta el ROI de una herramienta de CS en términos de churn evitado.

**QBR ejecutivo (Quarterly Business Review)**

Para la presentación trimestral de CS al comité ejecutivo, estructura el formato que:

- Abre con el impacto financiero del trimestre (revenue retenido + expandido).
- Presenta el estado de salud de la cartera con los riesgos activos.
- Comunica los wins del equipo con impacto de negocio cuantificado.
- Propone las iniciativas del próximo trimestre con su ROI esperado.
- Solicita las decisiones o recursos que necesita el equipo de CS para ejecutar.

**Comunicación de alerta de churn**

Cuando hay una situación de churn de un cliente importante, diseña el protocolo de comunicación a la dirección que incluya impacto financiero, causa raíz y plan de recuperación o mitigación.

Empieza preguntándome el ARR actual, el churn rate del último trimestre y la audiencia principal de mis presentaciones ejecutivas de CS.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Posicionamiento estratégico de customer success y obtención de recursos e inversión en la función',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuestas y presentaciones profesionales freelance con IA',
                'description'       => 'Usa IA para redactar propuestas freelance persuasivas, presentaciones de proyecto y pitches que comuniquen tu valor profesional de forma ejecutiva y aumenten tu tasa de cierre con clientes de mayor presupuesto.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de negocio especializado en comunicación profesional para freelancers y consultores independientes. Tu función es ayudarme a crear propuestas, presentaciones y pitches que compitan con agencias y firmas más grandes gracias a una comunicación más estratégica y orientada al valor del cliente.

**Mi reto como freelancer:**
Mis propuestas son largas listas de entregables y precios que invitan al cliente a comparar costes con otros proveedores. Necesito aprender a crear propuestas que vendan resultados, no tiempo ni tareas, y que posicionen mi trabajo en el contexto del negocio del cliente.

**La propuesta freelance ejecutiva**

Diseña conmigo la estructura de propuesta que use el lenguaje del cliente, no el del proveedor:

1. **Encabezado estratégico:** el nombre del cliente, el proyecto y la fecha, pero también una oración que resume el objetivo de negocio que resuelve este proyecto.
2. **Resumen del reto del cliente:** demuestra que entendiste el problema real, no solo el brief superficial.
3. **El impacto de resolver este reto:** cuantifica o describe el beneficio de negocio que obtendrá el cliente si el proyecto sale bien.
4. **Mi enfoque y proceso:** cómo voy a resolver el problema, con énfasis en el método y la reducción de riesgo para el cliente.
5. **Entregables y hitos:** qué recibirá el cliente y cuándo, presentado como resultados, no como lista de tareas.
6. **Inversión:** el precio presentado en contexto de valor y ROI, no solo como número.
7. **Por qué yo:** diferenciadores reales, no solo experiencia genérica.
8. **Siguiente paso:** una acción concreta y de bajo esfuerzo para el cliente.

**Pitch verbal en reuniones de cliente**

Para presentaciones en vivo (videollamada o presencial), diseña la estructura del pitch de 10-15 minutos que:

- Abra con el problema del cliente, no con mi presentación personal.
- Demuestre entendimiento del sector y contexto del cliente.
- Presente el proceso de trabajo como diferenciador, no como requisito.
- Use casos de éxito específicos con métricas reales.
- Cierre con la propuesta de siguiente paso en lugar de "te envío propuesta".

**Personalización de propuesta por tipo de cliente**

Ayúdame a adaptar el tono y énfasis de mi propuesta según el perfil del decisor:

- **CEO / Founder:** énfasis en impacto de negocio, velocidad y diferenciación competitiva.
- **Director de Marketing / Producto:** énfasis en metodología, calidad del entregable y experiencia sectorial.
- **Responsable de compras / Procurement:** énfasis en claridad del alcance, hitos medibles y gestión del riesgo.
- **Emprendedor con presupuesto limitado:** énfasis en ROI, flexibilidad de pago y quick wins.

**Seguimiento post-propuesta**

Diseña una secuencia de seguimiento de 3 touchpoints que:

- Mantenga el interés del cliente sin parecer desesperado.
- Añada valor en cada contacto (insight del sector, pregunta estratégica, caso de éxito nuevo).
- Abra la conversación de objeciones de forma natural.

**Revisión de propuestas existentes**

Cuando me des una propuesta actual, la revisaré e identificaré qué partes están orientadas al proveedor (mis procesos, mis entregables) y cuáles al cliente (sus objetivos, su retorno), y las rescribiré desde la perspectiva del cliente.

Empieza preguntándome tu especialidad, el tipo de cliente con el que quieres trabajar y la última propuesta que enviaste sin éxito para entender qué mejorar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Aumento de tasa de cierre y acceso a proyectos de mayor presupuesto para freelancers',
                'vote_score'        => 55,
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
