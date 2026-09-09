<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills285Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Executive communication del CMO: cómo habla el marketing al C-suite',
                'description'      => 'Aprende a comunicar la estrategia y los resultados de marketing al C-suite con el lenguaje, el nivel de detalle y el enfoque que los ejecutivos necesitan.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en comunicación para CMOs y directores de marketing. Has preparado a docenas de responsables de marketing para presentar ante CEOs, CFOs y consejos de administración. Necesito mejorar la forma en que comunico el marketing al C-suite.

**Mi situación:**
Soy el CMO / responsable de marketing de [empresa]. Presento regularmente ante el CEO, el CFO y el resto del C-suite. El problema: siento que mis presentaciones no conectan con la audiencia ejecutiva, que el CFO cuestiona el ROI y que el CEO no ve el marketing como una función estratégica sino como un coste.

**Ayúdame a mejorar:**

1. **El cambio de mentalidad fundamental**: ¿Cuál es la diferencia entre hablar como marketero y hablar como ejecutivo? ¿Por qué las métricas de marketing (impresiones, clics, engagement) no resuenan con el CEO y el CFO? ¿Qué lenguaje debo usar en su lugar?

2. **Conectar el marketing con el negocio**: ¿Cómo traduzco los resultados de marketing a métricas de negocio que le importan al C-suite? Dame el mapa de traducción: de CPL a coste de adquisición, de share of voice a cuota de mercado, de brand awareness a pricing power.

3. **La estructura de una presentación ejecutiva de marketing**: ¿Cuál es el formato correcto para una actualización mensual o trimestral de marketing al C-suite? Dame la estructura, la longitud correcta y los principios de simplificación que debo aplicar.

4. **Cómo presentar malos resultados sin perder credibilidad**: Cuando los resultados no son los esperados, ¿cómo comunico la situación con honestidad, sin excusas y con un plan claro? ¿Cuál es la diferencia entre explicar y excusarse?

5. **La conversación sobre el presupuesto de marketing**: ¿Cómo defiendo el presupuesto de marketing ante un CFO escéptico? ¿Qué modelos de atribución y argumentos de ROI son más convincentes? ¿Cómo enmarco la inversión en marca cuando los resultados son a largo plazo?

6. **Storytelling ejecutivo con datos**: Los ejecutivos se aburren con tablas llenas de números. ¿Cómo construyo una narrativa con datos que sea clara, memorable y lleve a una conclusión de negocio? Dame principios y ejemplos de visualización ejecutiva.

7. **Gestionar las preguntas difíciles del C-suite**: "¿Por qué gastamos tanto en brand?", "¿Qué hubiera pasado sin esta campaña?", "¿No podemos hacer esto más barato?". Dame respuestas preparadas para las preguntas más incómodas del C-suite al marketing.

8. **La relación con el CEO: marketing como función estratégica**: ¿Cómo posiciono el marketing como partner estratégico del CEO en lugar de como función de soporte? ¿Qué tipo de inputs estratégicos debería estar aportando que todavía no doy?

9. **Comunicación informal y visibilidad ejecutiva**: Las grandes decisiones no se toman en las presentaciones formales. ¿Cómo gestiono la comunicación informal con el C-suite para mantener visibilidad, alinear expectativas y detectar problemas antes de que escalen?

10. **Construir credibilidad a largo plazo con el C-suite**: La confianza del C-suite en el marketing se construye en años. ¿Cuáles son los comportamientos, los compromisos y los resultados que construyen credibilidad duradera como CMO?

Empieza por el cambio de mentalidad y la traducción de métricas de marketing a lenguaje de negocio. Quiero frameworks y ejemplos concretos de cómo reformular los mensajes típicos de marketing para una audiencia ejecutiva.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar presentaciones y comunicaciones ejecutivas que conecten la estrategia de marketing con los objetivos de negocio del C-suite.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering updates para no técnicos: el arte de traducir sin perder la verdad',
                'description'      => 'Aprende a comunicar el trabajo de ingeniería a stakeholders no técnicos de forma clara, honesta y útil para la toma de decisiones.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en comunicación técnica y liderazgo de ingeniería con experiencia como CTO y Director de Ingeniería en empresas de software. Has tenido que comunicar decisiones técnicas complejas a CEOs, inversores y equipos de negocio que no conocen la tecnología. Necesito mejorar cómo comunico el trabajo de ingeniería a audiencias no técnicas.

**Mi situación:**
Soy [CTO / Engineering Manager / Tech Lead] en [empresa]. Tengo que comunicar regularmente el estado del equipo, las decisiones técnicas y los problemas a [CEO, inversores, equipos de producto, ventas, clientes]. El desafío: cuando simplifico demasiado, pierdo matices críticos; cuando voy al detalle, pierdo a la audiencia.

**Ayúdame con:**

1. **El principio de la traducción honesta**: ¿Cómo simplifico conceptos técnicos sin mentir ni crear malentendidos que luego tendrán consecuencias? ¿Dónde está el límite entre simplificar y desinformar?

2. **La deuda técnica explicada al CEO**: La deuda técnica es invisible pero crítica. ¿Cómo la comunico de forma que el CEO entienda el riesgo real y esté dispuesto a invertir en reducirla? ¿Cuál es la analogía correcta? ¿Cómo la cuantifico en términos de negocio?

3. **Comunicar retrasos sin perder credibilidad**: Los retrasos son inevitables. ¿Cuándo comunico un riesgo de retraso, qué digo exactamente y qué no debo decir? ¿Cómo presento las opciones (reducir alcance, ampliar el plazo, añadir recursos) para que el stakeholder pueda decidir con información real?

4. **Los incidentes de producción para audiencias no técnicas**: Cuando el sistema se cae o hay un bug grave, ¿cómo comunico la situación al CEO o a los clientes en tiempo real y en el postmortem? ¿Qué incluyo y qué omito para no alarmar sin razón?

5. **El roadmap técnico para el consejo de administración**: ¿Cómo presento el plan de ingeniería a un consejo o a inversores que no entienden la tecnología? ¿Qué nivel de detalle es el adecuado? ¿Cómo conecto las decisiones técnicas con la estrategia de negocio?

6. **Explicar decisiones de arquitectura sin PowerPoints de diagramas**: Cuando tomamos una decisión de arquitectura importante (cambiar de base de datos, migrar a microservicios, adoptar cloud), ¿cómo explico el "por qué" a un CEO sin diagramas técnicos? ¿Qué analogías funcionan?

7. **La comunicación de seguridad a ejecutivos no técnicos**: Las vulnerabilidades de seguridad son difíciles de comunicar: demasiado técnicas y generan desinformación, demasiado simplificadas y generan alarma injustificada o complacencia peligrosa. ¿Cuál es el equilibrio correcto?

8. **Actualizaciones de sprint y progreso para stakeholders de negocio**: ¿Cuál es el formato correcto para una actualización semanal o quincenal de ingeniería dirigida a un equipo de negocio? ¿Qué debo incluir y qué no?

9. **La conversación sobre recursos y contratación**: ¿Cómo justifico la necesidad de contratar más ingenieros o de invertir en infraestructura a un CEO o CFO que ve el coste pero no el retorno? ¿Qué argumentos funcionan y en qué orden los presento?

10. **Construir confianza a largo plazo con stakeholders no técnicos**: La credibilidad de ingeniería con el negocio se construye con consistencia. ¿Cuáles son los comportamientos comunicativos que más impactan en la percepción que el C-suite tiene de la función de ingeniería?

Empieza por el principio de la traducción honesta y la comunicación de la deuda técnica. Quiero frameworks aplicables y ejemplos concretos de cómo reformular mensajes técnicos para audiencias de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Comunicar el estado, las decisiones y los problemas de ingeniería a stakeholders no técnicos de forma clara, honesta y útil para la toma de decisiones.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design communication hacia arriba: cómo el diseñador habla el lenguaje del negocio',
                'description'      => 'Aprende a defender decisiones de diseño, presentar tu trabajo y conseguir buy-in ejecutivo hablando el lenguaje del impacto de negocio, no del criterio estético.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de liderazgo para diseñadores y directores de diseño con experiencia en cómo los profesionales del diseño consiguen influencia y credibilidad en organizaciones donde el diseño no es el core business. Has preparado a diseñadores para presentar ante C-suites y consejos de administración. Necesito mejorar mi capacidad de comunicar hacia arriba.

**Mi situación:**
Soy [diseñador senior / design lead / Head of Design] en [empresa]. El reto: cuando presento mi trabajo o defiendo decisiones de diseño a stakeholders ejecutivos, a menudo siento que no conectan, que cuestionan el criterio estético o que el presupuesto de diseño siempre es el primero en recortarse.

**Ayúdame a mejorar:**

1. **El cambio de lenguaje: de "se ve mejor" a "funciona mejor"**: ¿Cómo elimino el lenguaje estético de mis presentaciones ejecutivas y lo reemplazo por lenguaje de impacto? Dame el mapa de traducción: de "tipografía más legible" a "tasa de completado de formulario", de "jerarquía visual clara" a "tiempo hasta la acción".

2. **Conectar las decisiones de diseño con métricas de negocio**: ¿Cómo justifico una decisión de rediseño con datos de conversión, retención o NPS? ¿Qué tipo de evidencia debo construir antes de presentar una propuesta grande?

3. **La estructura de una presentación de diseño ejecutiva**: ¿Cuál es el formato correcto para presentar un proyecto de diseño o una propuesta de rediseño al C-suite? Dame la estructura, la longitud y los principios de comunicación que aplican a una audiencia ejecutiva.

4. **Cómo presentar conceptos sin que te los redesignen en la sala**: Los ejecutivos tienen opiniones sobre el diseño aunque no tengan formación. ¿Cómo presento los conceptos de forma que guíe la conversación hacia criterios relevantes y evite el "a mí me gusta más el azul"?

5. **Defender el tiempo de diseño y la investigación con usuarios**: La investigación con usuarios es la base del buen diseño pero es cara y lenta a ojos de los ejecutivos. ¿Cómo justifico la inversión en research? ¿Qué argumentos funcionan con un CEO y cuáles con un CFO?

6. **El presupuesto de diseño**: ¿Cómo defiendo el presupuesto de diseño ante recortes? ¿Qué ROI del diseño puedo argumentar con datos reales? ¿Cuáles son los estudios y benchmarks de impacto del diseño en negocio que más impresionan a los ejecutivos?

7. **Conseguir buy-in para el design system**: El design system tiene retorno a largo plazo pero coste a corto. ¿Cómo presento la inversión en un design system de forma que el C-suite apruebe el tiempo y los recursos necesarios?

8. **Comunicar el proceso de diseño sin aburrirles**: Los ejecutivos no quieren ver cómo has llegado al resultado, quieren el resultado y por qué es correcto. ¿Cómo calibro cuánto proceso muestro y cuánto omito según la audiencia?

9. **Gestionar el feedback de "el CEO quiere que sea más..."**: El feedback subjetivo de los ejecutivos puede destruir semanas de trabajo. ¿Cómo recibo, proceso y respondo al feedback ejecutivo de forma que proteja las decisiones fundamentadas sin sonar arrogante?

10. **Construir credibilidad como función de diseño**: ¿Cuáles son los comportamientos a largo plazo que construyen la reputación del diseño como función estratégica dentro de la empresa, no solo como un equipo de ejecutores?

Empieza por el cambio de lenguaje y la estructura de presentación ejecutiva. Quiero frameworks concretos y ejemplos de cómo reformular argumentos de diseño en lenguaje de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Defender decisiones de diseño y conseguir buy-in ejecutivo comunicando el impacto de negocio del diseño en lugar de criterios estéticos.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales updates ejecutivos: el forecast, el pipeline y lo que nadie quiere decir',
                'description'      => 'Aprende a comunicar el estado real de ventas al C-suite con honestidad, precisión en el forecast y el contexto que convierte los números en decisiones.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de liderazgo comercial con experiencia preparando a directores de ventas y CROs para comunicar ante CEOs, CFOs y consejos de administración. Has visto cómo la comunicación honesta del pipeline puede ser la diferencia entre salvar un trimestre o perder la confianza del board. Necesito mejorar mis actualizaciones de ventas al C-suite.

**Mi situación:**
Soy [Director de Ventas / VP Sales / CRO] en [empresa]. Presento el estado del pipeline, el forecast y el cierre de período al CEO y al CFO regularmente. El problema: hay una tensión constante entre ser optimista para mantener la moral y ser honesto sobre los riesgos reales. Y el CFO siempre quiere más detalle del que yo tengo.

**Ayúdame con:**

1. **El forecast honesto: ciencia y arte**: ¿Cuál es el método correcto para construir un forecast de ventas que sea creíble para el CFO y el CEO? ¿Cómo distingo entre deals comprometidos, probables y posibles? ¿Qué datos del CRM debo usar y cuáles son un espejismo?

2. **La comunicación del riesgo en el pipeline**: ¿Cuándo y cómo comunico que el trimestre está en riesgo? ¿Cuál es el momento correcto para dar la alarma, antes de que sea obvio pero no tan pronto que parezca excusa? ¿Qué lenguaje uso?

3. **La estructura de una actualización de ventas ejecutiva**: ¿Cuál es el formato de una actualización semanal o mensual de ventas al C-suite? ¿Qué incluyo, en qué orden y con qué nivel de detalle? Dame una plantilla que funcione tanto para buenas como para malas noticias.

4. **Presentar un mal trimestre sin perder credibilidad**: Cuando las cifras no van a llegar, ¿cómo lo comunico de forma que muestre comprensión de las causas, un plan de acción y la credibilidad necesaria para que me sigan creyendo el siguiente forecast?

5. **La conversación sobre el forecast con el CFO**: El CFO quiere certeza en algo que por naturaleza es incierto. ¿Cómo gestiono esta conversación? ¿Qué rangos de confianza son honestos? ¿Cómo explico la diferencia entre pipeline lagging y leading indicators?

6. **Wins y pérdidas como información estratégica**: Los deals cerrados y los deals perdidos contienen información estratégica valiosa. ¿Cómo presento los win/loss al C-suite de forma que sea material de decisión, no solo un marcador?

7. **La comunicación sobre los comerciales**: Cuando hay problemas de desempeño en el equipo que afectan a los resultados, ¿cómo comunico al CEO la situación sin hablar mal de personas y con un plan concreto?

8. **Gestionar las expectativas del board en empresas con inversores**: En startups con inversores, las expectativas de crecimiento pueden estar desconectadas de la realidad del mercado. ¿Cómo gestiono esa conversación sin perder credibilidad ni la confianza del board?

9. **El pipeline como conversación estratégica**: Más allá de los números, el pipeline refleja la salud del go-to-market. ¿Cómo elevo la conversación de ventas con el CEO de "¿cuánto vamos a cerrar?" a "¿qué nos dice el pipeline sobre nuestra estrategia comercial"?

10. **Construir credibilidad como líder comercial a largo plazo**: ¿Cuáles son los patrones de comunicación que hacen que un director de ventas sea visto como un socio estratégico por el CEO en lugar de como un generador de excusas?

Empieza por la metodología de forecast honesto y la estructura de la actualización ejecutiva. Quiero frameworks concretos, no solo principios de comunicación. Incluye ejemplos de cómo formular mensajes difíciles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y comunicar forecasts de ventas creíbles al C-suite, presentando el pipeline con honestidad y el contexto estratégico necesario.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product communication al CEO: roadmap, decisiones y el contexto que falta',
                'description'      => 'Aprende a comunicar la estrategia de producto, las decisiones de priorización y el roadmap al CEO con el nivel de detalle y el contexto que le permitan confiar en el equipo de producto.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de liderazgo de producto con experiencia preparando a CPOs y directores de producto para comunicar con CEOs y boards en empresas de distintos tamaños. Has visto cómo una buena comunicación de producto puede dar autonomía al equipo y cómo una mala comunicación genera microgestión. Necesito mejorar cómo comunico con el CEO.

**Mi situación:**
Soy [CPO / VP Product / Head of Product] en [empresa]. Mi relación con el CEO sobre el roadmap y las decisiones de producto es complicada: a veces siento que el CEO no entiende por qué priorizamos lo que priorizamos, que interviene en las decisiones a nivel de feature y que no tenemos un lenguaje compartido sobre la estrategia de producto.

**Ayúdame a mejorar:**

1. **El contrato de comunicación entre el CPO y el CEO**: ¿Cuál es el acuerdo explícito que debería tener con el CEO sobre qué decisiones son mías, cuáles compartidas y cuáles suyas? ¿Cómo tengo esa conversación para establecer el marco correcto?

2. **Comunicar la estrategia de producto en lenguaje del CEO**: ¿Cómo presento la estrategia de producto de forma que un CEO entienda el razonamiento, confíe en la dirección y no sienta que se lo estoy ocultando? ¿Qué nivel de detalle estratégico vs táctico es adecuado?

3. **El roadmap para el CEO: qué mostrar y qué no**: El CEO quiere saber qué vamos a lanzar y cuándo. El roadmap real es incierto por definición. ¿Cómo presento un roadmap honesto que no genere compromisos imposibles pero que dé al CEO la visibilidad que necesita?

4. **Comunicar las decisiones de priorización**: Cada vez que depriorizo algo que el CEO quería, necesito explicarlo bien. ¿Cómo presento las decisiones de priorización mostrando que he considerado su perspectiva y explicando el trade-off en términos de impacto de negocio?

5. **La conversación sobre features del CEO**: El CEO siempre tiene ideas de features. ¿Cómo las recibo, las proceso y las respondo de forma que el CEO se sienta escuchado sin que el equipo de producto pierda el control de la priorización?

6. **Comunicar los descubrimientos del research de usuarios**: Los insights de usuario son la base de las decisiones de producto pero son difíciles de comunicar a un CEO que no ha hecho la investigación. ¿Cómo presento los hallazgos de forma que sean creíbles y accionables?

7. **Los retrasos de producto al CEO**: Cuando un lanzamiento se retrasa, ¿cuándo y cómo lo comunico? ¿Cuál es la diferencia entre dar la alarma temprano y crear alarma innecesaria? ¿Qué opciones presento y cómo estructuro la conversación?

8. **Métricas de producto para el C-suite**: ¿Qué métricas de producto son relevantes para el CEO y cuáles son ruido? ¿Cómo selecciono los 3-5 KPIs de producto que cuentan la historia completa del estado del negocio?

9. **La alineación entre producto y negocio en las OKRs**: ¿Cómo aseguro que los objetivos de producto están genuinamente alineados con los objetivos de negocio y que el CEO lo ve claramente? ¿Cuál es el proceso de alineación de OKRs que recomendarías?

10. **Construir la confianza para operar con autonomía**: La autonomía del equipo de producto se gana con comunicación consistente y resultados. ¿Cuáles son los comportamientos de comunicación que construyen la confianza que necesito para tomar decisiones sin aprobación constante?

Empieza por el contrato de comunicación CPO-CEO y la presentación del roadmap. Quiero frameworks concretos y ejemplos de cómo formular conversaciones difíciles, no solo principios de liderazgo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar la estrategia de producto, el roadmap y las decisiones de priorización al CEO de forma que genere confianza y autonomía para el equipo de producto.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR communication ejecutiva: los temas de personas que llegan al board',
                'description'      => 'Aprende a comunicar los temas de personas más sensibles al C-suite y al consejo de administración con el rigor, la discreción y el impacto estratégico que requieren.',
                'prompt_content'   => <<<'PROMPT'
Eres un Chief People Officer con experiencia comunicando con CEOs, CFOs y consejos de administración en empresas de distintos tamaños y sectores. Has gestionado la comunicación de reestructuraciones, incidentes de cultura, cambios de liderazgo y estrategias de talento con audiencias ejecutivas. Necesito mejorar mi comunicación hacia arriba como responsable de RRHH.

**Mi situación:**
Soy [CHRO / CPO / Director de RRHH] en [empresa]. Tengo que comunicar regularmente al CEO y, en ocasiones, al board sobre temas de personas: cultura, talento, compensación, relaciones laborales e incidentes sensibles. El reto: los temas de personas son a la vez estratégicos y delicados, y encontrar el tono correcto es difícil.

**Ayúdame con:**

1. **El lenguaje de personas para el C-suite**: ¿Cómo traduzco los temas de RRHH al lenguaje que importa al CEO y al CFO? Dame el mapa de traducción: de "cultura" a "retención y productividad", de "employer brand" a "coste de adquisición de talento", de "bienestar" a "absentismo y rendimiento".

2. **Los temas de personas que deben llegar al board**: ¿Cuáles son los temas de personas que tienen relevancia a nivel de consejo de administración? Habla de sucesión del equipo directivo, cultura y riesgo reputacional, compensación de C-suite, diversidad como factor de gobernanza y riesgo laboral.

3. **Comunicar una reestructuración al C-suite antes del anuncio**: Las reestructuraciones son los momentos de mayor riesgo comunicativo. ¿Cómo presento la propuesta de reestructuración al CEO y al CFO? ¿Qué información incluyo, en qué orden y cómo gestiono la confidencialidad?

4. **Incidentes de cultura y casos sensibles**: Cuando hay un caso de acoso, discriminación o comportamiento inapropiado en la organización, ¿cómo comunico la situación al CEO? ¿Qué digo, qué no digo y cómo gestiono la tensión entre transparencia y confidencialidad?

5. **La estrategia de talento para el board**: ¿Cómo presento la estrategia de talento en un board meeting? ¿Qué métricas de talento son relevantes para los consejeros? ¿Cuánto tiempo y detalle es adecuado en una presentación al board?

6. **La negociación de presupuesto de RRHH con el CFO**: ¿Cómo justifico inversiones en personas (formación, beneficios, herramientas de RRHH) ante un CFO escéptico? ¿Qué ROI puedo argumentar con datos? ¿Cuáles son los argumentos que más resuenan?

7. **Comunicar los resultados de la encuesta de clima**: La encuesta de clima a veces revela problemas que el CEO no quiere ver. ¿Cómo presento los resultados de forma honesta, incluyendo las partes incómodas, con un plan de acción concreto?

8. **La sucesión y el bench de liderazgo**: ¿Cómo presento al board el estado de la sucesión del equipo directivo? ¿Con qué frecuencia? ¿Qué nivel de detalle sobre los candidatos internos es adecuado? ¿Cómo gestiono la sensibilidad de hablar sobre personas concretas?

9. **Comunicar cambios de compensación al C-suite**: Las decisiones de compensación son las más sensibles de RRHH. ¿Cómo presento una propuesta de revisión salarial, cambios en la política de incentivos o el paquete de compensación del C-suite con el rigor y la discreción necesarios?

10. **Construir credibilidad estratégica como función de RRHH**: RRHH a menudo se percibe como función operativa, no estratégica. ¿Cuáles son los comportamientos comunicativos que elevan la función de personas a partner estratégico del C-suite?

Empieza por el lenguaje de personas para el C-suite y la comunicación de incidentes sensibles. Quiero frameworks concretos y ejemplos de cómo formular mensajes difíciles con el tono correcto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar los temas de personas más estratégicos y sensibles al C-suite y al board con el rigor, la discreción y el enfoque estratégico que requieren.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'CFO communication: cómo el financiero comunica complejidad con claridad',
                'description'      => 'Desarrolla la capacidad de comunicar información financiera compleja al CEO, al board y a los inversores de forma clara, accionable y estratégicamente relevante.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de comunicación ejecutiva especializado en CFOs y directores financieros. Has preparado a cientos de financieros para presentar ante CEOs, consejos de administración e inversores. El reto del financiero: tiene más datos que nadie pero a menudo comunica de forma que pierde a su audiencia. Necesito mejorar mi comunicación como CFO.

**Mi situación:**
Soy el [CFO / Director Financiero / Financial Controller] de [empresa]. Presento regularmente los resultados, el presupuesto y la situación financiera al CEO, al board y, en ocasiones, a inversores. El problema: siento que mis presentaciones son demasiado técnicas, que el CEO quiere más narrativa y menos tablas, y que el board a veces no toma las decisiones que espero porque no ha entendido completamente la implicación financiera.

**Ayúdame a mejorar:**

1. **Del dato a la decisión: el framework del CFO comunicador**: ¿Cuál es la diferencia entre reportar cifras y comunicar información financiera? ¿Cómo estructura el CFO su comunicación para que cada pieza de información lleve a una conclusión o una decisión?

2. **La narrativa financiera del trimestre**: ¿Cómo construyo la historia de los resultados trimestrales que vaya más allá de los números? ¿Cuál es la estructura: contexto del mercado → resultados vs plan → causas → implicaciones → próximos pasos?

3. **Simplificar sin mentir**: ¿Cómo simplifico la información financiera para el CEO y el board sin crear malentendidos? ¿Cuáles son los conceptos financieros que más se malinterpretan cuando se simplifican y cómo los trato?

4. **Las malas noticias financieras**: Cuando los números son malos, ¿cuándo y cómo comunico la situación? ¿Cuál es la diferencia entre una alerta temprana útil y crear alarma innecesaria? ¿Qué información debo tener antes de comunicar un problema?

5. **El presupuesto para el board**: La aprobación del presupuesto anual es uno de los momentos de mayor exposición del CFO. ¿Cómo presento el presupuesto de forma que el board entienda las decisiones de asignación de recursos y confíe en el proceso?

6. **Comunicar con inversores y accionistas**: ¿Cuáles son las diferencias entre comunicar con el board interno y con inversores externos? ¿Qué lenguaje, qué métricas y qué nivel de detalle son adecuados para cada audiencia?

7. **El dashboard financiero ejecutivo**: ¿Qué incluyo en el dashboard financiero que envío semanalmente o mensualmente al CEO? ¿Cuáles son los 5-7 KPIs financieros que cuentan la historia completa? ¿Cómo lo diseño para que se entienda en 2 minutos?

8. **La conversación sobre runway y liquidez**: Para startups o empresas en crecimiento, la conversación sobre runway es la más crítica. ¿Cómo comunico la situación de liquidez de forma que el CEO y el board tomen decisiones a tiempo sin entrar en pánico prematuro?

9. **Visualización de datos financieros**: Los CFOs trabajan con tablas y los ejecutivos procesan visualmente. ¿Qué tipos de gráficos y visualizaciones funcionan mejor para datos financieros? ¿Cuáles son los errores de visualización más frecuentes en presentaciones financieras?

10. **Construir la reputación de CFO estratégico**: El CFO que solo reporta números es prescindible. ¿Cuáles son los comportamientos comunicativos que construyen la reputación del CFO como socio estratégico del CEO y del board?

Empieza por el framework del CFO comunicador y la narrativa financiera del trimestre. Quiero técnicas concretas y ejemplos de cómo reformular la comunicación financiera para distintas audiencias ejecutivas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar información financiera compleja al CEO, board e inversores de forma clara, narrativa y orientada a la toma de decisiones.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación jurídica al consejo: riesgo, cumplimiento y el lenguaje del board',
                'description'      => 'Aprende a comunicar los riesgos legales, las obligaciones de cumplimiento y las decisiones jurídicas al consejo de administración con claridad y relevancia estratégica.',
                'prompt_content'   => <<<'PROMPT'
Eres un General Counsel y abogado interno con experiencia comunicando con consejos de administración y CEOs en empresas cotizadas y no cotizadas de distintos sectores. Has aprendido a traducir la complejidad jurídica en decisiones ejecutivas. Necesito mejorar mi comunicación como responsable jurídico hacia el C-suite y el board.

**Mi situación:**
Soy el [General Counsel / Director Jurídico / Asesor Legal Interno] de [empresa]. Tengo que comunicar regularmente al CEO, al CFO y, en ocasiones, al board sobre riesgos legales, procesos judiciales, cambios regulatorios y decisiones que requieren aprobación. El problema: soy demasiado técnico y largo, el board quiere síntesis y los ejecutivos no siempre entienden el riesgo real.

**Ayúdame a mejorar:**

1. **La comunicación del riesgo jurídico en lenguaje ejecutivo**: ¿Cómo explico un riesgo legal de forma que el CEO o el consejero entienda la magnitud real, la probabilidad y las opciones disponibles? ¿Cómo cuantifico el riesgo jurídico sin crear alarma ni falsas certezas?

2. **El informe jurídico al board**: ¿Qué estructura tiene un informe jurídico efectivo para el consejo de administración? ¿Qué incluyo (litigios en curso, cambios regulatorios, riesgos relevantes, obligaciones de cumplimiento) y qué omito? ¿Cuál es la longitud adecuada?

3. **Comunicar procesos judiciales en curso**: Los procesos judiciales son información sensible que el board necesita conocer pero que puede generar reacciones desproporcionadas. ¿Cómo comunico el estado de un litigio con honestidad sin entrar en detalles técnicos que confundan?

4. **La comunicación de cambios regulatorios**: Cuando hay un cambio regulatorio relevante para el negocio (nueva normativa, directiva europea, cambio fiscal), ¿cómo comunico el impacto al CEO y al board de forma que tomen las decisiones necesarias a tiempo?

5. **Compliance y gobierno corporativo para el board**: ¿Cómo presento el estado del programa de compliance al consejo? ¿Qué métricas, qué incidentes y qué mejoras son relevantes para los consejeros? ¿Cuánto detalle es suficiente para cumplir con la obligación de supervisión del board?

6. **Incidentes de cumplimiento y crisis legales**: Cuando ocurre un incidente grave (denuncia de un empleado, inspección regulatoria, violación de datos, fraude interno), ¿cómo comunico la situación al CEO de forma inmediata y al board de forma estructurada?

7. **Las opiniones jurídicas que facilitan decisiones**: El abogado que solo describe riesgos sin facilitar la decisión no es útil. ¿Cómo estructura mis opiniones jurídicas para que incluyan análisis del riesgo, opciones disponibles y mi recomendación clara?

8. **La relación con los abogados externos y cómo comunicarla**: Cuando trabajo con despachos externos, ¿cómo comunico al CEO y al CFO el coste, el progreso y los resultados esperados? ¿Cómo gestiono la expectativa de los honorarios legales?

9. **Privacidad de datos y GDPR al C-suite**: La normativa de protección de datos tiene implicaciones de negocio que el C-suite necesita entender. ¿Cómo comunico las obligaciones GDPR, los incidentes de seguridad y el estado del programa de privacidad a una audiencia no técnica y no jurídica?

10. **Construir la credibilidad del área jurídica como función estratégica**: El departamento jurídico a menudo es visto como un freno o como un coste. ¿Cuáles son los comportamientos comunicativos que construyen la percepción del área jurídica como habilitadora de negocio?

Empieza por la comunicación del riesgo jurídico y la estructura del informe al board. Quiero frameworks concretos y ejemplos de cómo reformular la información jurídica para audiencias ejecutivas que no son abogados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicar riesgos legales, procesos judiciales y cambios regulatorios al C-suite y al consejo de administración con claridad estratégica y orientación a la decisión.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS executive communication: los números de clientes que convencen a dirección',
                'description'      => 'Aprende a comunicar la salud del cliente, el NPS, el churn y el NRR al C-suite de forma que customer success sea vista como función estratégica generadora de ingresos.',
                'prompt_content'   => <<<'PROMPT'
Eres un VP de Customer Success con experiencia comunicando con CEOs, CFOs y boards en empresas SaaS. Has conseguido que la función de CS sea vista como motor de crecimiento, no solo como coste operativo. Necesito mejorar cómo comunico el customer success al C-suite.

**Mi situación:**
Soy [VP de CS / Head of Customer Success / Director de Éxito de Cliente] en [empresa SaaS]. El problema: cuando presento métricas de clientes al CEO y al CFO, siento que no entienden el impacto estratégico. El CFO ve el coste de CS pero no el ingreso que protegemos. El CEO quiere más detalle sobre cuentas individuales pero no tenemos el tiempo para ir account by account.

**Ayúdame a mejorar:**

1. **Las métricas de CS que le importan al CFO**: ¿Cómo traduzco el NPS, el health score y el churn en el lenguaje del CFO? Dame el mapa: de "customer health" a "ARR en riesgo", de "churn rate" a "ARR perdido y coste de reposición", de "NPS" a "impacto en crecimiento orgánico".

2. **El NRR como métrica norte de CS**: ¿Cómo explico el Net Revenue Retention al CEO de forma que sea el número que define el éxito de CS? ¿Cuál es el modelo de cálculo y cómo lo descompongo en sus componentes (churn, contracción, expansión)?

3. **La presentación de la salud del cliente al C-suite**: ¿Qué formato tiene una actualización mensual de CS para el C-suite? ¿Cuántas cuentas menciono, con qué nivel de detalle y cómo presento los riesgos sin generar alarma innecesaria?

4. **Comunicar el riesgo de churn con tiempo suficiente**: ¿Cuándo y cómo comunico al CEO que una cuenta importante está en riesgo? ¿Cuál es la información que necesito tener antes de escalar? ¿Qué plan de acción debo presentar junto al riesgo?

5. **El business case del equipo de CS**: ¿Cómo justifico contratar más CSMs o invertir en herramientas de CS ante el CFO? ¿Qué modelo de ROI funciona? ¿Cómo demuestro que un CSM más cubre su propio coste en retención y expansión?

6. **Las QBRs con clientes y su impacto en la narrativa de CS**: Cuando tengo QBRs con grandes clientes, ¿cómo uso esos insights para construir la narrativa de CS al C-suite? ¿Qué aprendo de las QBRs que el CEO necesita saber?

7. **Churn análisis como información estratégica**: Cada cliente que se va contiene información sobre el producto, el pricing, la competencia o el proceso de ventas. ¿Cómo presento el análisis de churn al C-suite de forma que sea material de decisión, no solo un conteo de bajas?

8. **CS en la conversación de producto**: ¿Cómo uso los datos de éxito del cliente para influir en el roadmap de producto? ¿Cómo presento al CEO la tensión entre las peticiones de clientes actuales y la visión de producto a largo plazo?

9. **El impact report de CS**: ¿Cómo construyo un informe semestral o anual de impacto de CS que demuestre el valor de la función? ¿Qué casos de éxito, qué métricas y qué historias de clientes incluyo?

10. **Construir la credibilidad de CS como función estratégica**: ¿Cuáles son los comportamientos comunicativos y los resultados que convierten a CS de función de soporte a motor de crecimiento en la percepción del C-suite?

Empieza por la traducción de métricas de CS al lenguaje del CFO y la presentación del riesgo de churn. Quiero frameworks concretos, ejemplos de cómo formular las comunicaciones difíciles y los benchmarks de NRR que debo conocer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Comunicar la salud del cliente, el churn y el NRR al C-suite de forma que customer success sea percibida como función estratégica generadora de ingresos.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Comunicación con el cliente ejecutivo: hablar el lenguaje del CEO del cliente',
                'description'      => 'Aprende a comunicar con los CEOs y C-suite de tus clientes para elevar la relación, ampliar el alcance del proyecto y posicionarte como socio estratégico.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor y coach de comunicación para freelancers y consultores independientes de alto nivel. Has ayudado a cientos de profesionales independientes a transformar su relación con los CEOs y ejecutivos de sus clientes de una relación transaccional a una relación de asesoría estratégica. Necesito mejorar mi comunicación con los clientes ejecutivos.

**Mi situación:**
Soy freelance / consultor independiente de [especialidad]. Trabajo con [tipo de empresa] y a menudo mi interlocutor es un CEO, director o C-suite. El problema: siento que me ven como un proveedor de horas, no como un socio estratégico. Consigo buenos resultados pero el cliente no siempre lo percibe. Y cuando hay que renovar o ampliar el proyecto, tengo que empezar la conversación de valor desde cero.

**Ayúdame con:**

1. **Entender qué le preocupa realmente al CEO del cliente**: ¿Cuáles son los temas que ocupan la mente de un CEO? No los problemas tácticos que me contratan para resolver, sino las preocupaciones estratégicas: crecimiento, competencia, talento, inversores, ejecución. ¿Cómo los descubro y los uso para posicionarme mejor?

2. **El lenguaje del CEO: lo que funciona y lo que no**: ¿Cuáles son las diferencias entre hablar con un director funcional y hablar con el CEO? ¿Qué vocabulario, qué nivel de abstracción y qué tipo de argumentos resuenan con un CEO?

3. **Elevar la conversación de táctico a estratégico**: Mi trabajo es táctico pero el CEO piensa en estrategia. ¿Cómo conecto regularmente mi trabajo con los objetivos estratégicos del cliente para que el CEO vea el impacto más allá de las entregables?

4. **Las reuniones de seguimiento con el cliente ejecutivo**: ¿Cuál es el formato correcto de una reunión de seguimiento con el CEO del cliente? ¿Qué incluyo, cuánto dura y cómo la preparo para que sea un intercambio estratégico, no solo un informe de estado?

5. **El informe de progreso que impresiona a un CEO**: ¿Cómo escribo el informe de progreso quincenal o mensual que el CEO del cliente quiere leer en 5 minutos y que le muestra que el proyecto avanza? ¿Qué incluyo y qué omito?

6. **Dar malas noticias al CEO cliente**: Cuando hay un problema, un retraso o un resultado inesperado, ¿cómo lo comunico al CEO del cliente de forma que mantenga la confianza y demuestre liderazgo? ¿Qué estructura uso y qué actitud adopto?

7. **La conversación de expansión de proyecto**: ¿Cuándo y cómo planteo al CEO cliente la ampliación del proyecto o el inicio de un nuevo trabajo? ¿Cuál es el momento correcto, qué argumentos uso y cómo evito sonar como si solo quisiera facturar más?

8. **Diferenciarse de otros proveedores ante el CEO**: ¿Cómo comunico mi propuesta de valor única a un CEO que ha trabajado con muchos consultores? ¿Qué me hace diferente más allá de la calidad técnica? ¿Cómo lo verbalizo sin sonar arrogante?

9. **Las referencias y el boca a boca entre CEOs**: Los CEOs hablan entre sí. ¿Cómo construyo una reputación que me preceda? ¿Cómo pido referencias a un CEO cliente de forma natural sin incomodarle?

10. **Construir una relación a largo plazo con el CEO cliente**: La relación con un CEO cliente que dura años es la fuente más valiosa de negocio para un consultor independiente. ¿Cuáles son los comportamientos, la comunicación y los gestos que construyen esa relación a largo plazo?

Empieza por entender qué preocupa al CEO y el lenguaje ejecutivo correcto. Quiero frameworks concretos y ejemplos de cómo reformular mis comunicaciones habituales para elevar la relación de proveedor a socio estratégico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Mejorar la comunicación con los CEOs y C-suite de los clientes para posicionarse como socio estratégico, ampliar proyectos y construir relaciones a largo plazo.',
                'vote_score'       => 39,
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
