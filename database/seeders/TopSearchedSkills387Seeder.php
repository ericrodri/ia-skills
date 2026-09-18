<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills387Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de expectativas con clientes de marketing y comunicación asertiva',
                'description'      => 'Aprende a establecer expectativas claras con clientes y stakeholders desde el inicio de cada proyecto de marketing, comunicar con asertividad los límites del servicio y gestionar situaciones difíciles sin perder la relación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación asertiva y gestión de relaciones con clientes en el sector del marketing y la comunicación. Ayúdame a desarrollar las habilidades y los sistemas necesarios para gestionar expectativas con clientes de forma profesional y mantener relaciones saludables a largo plazo.

**El reto de las expectativas en marketing**
En marketing, las expectativas desalineadas son la principal causa de conflictos con clientes. El cliente espera resultados concretos (más ventas, más seguidores, primera posición en Google) en plazos que con frecuencia no son realistas. El profesional de marketing sabe que los resultados dependen de múltiples factores. Sin una gestión proactiva de expectativas, esta brecha se convierte en frustración, conflictos y pérdida de clientes.

**Áreas de trabajo**

1. **Establecer expectativas claras desde el primer contacto**
   - Cómo estructurar la reunión de kick-off para alinear objetivos, métricas, plazos y responsabilidades.
   - Qué preguntar al cliente para entender sus expectativas reales (no solo las declaradas).
   - Cómo formular KPIs realistas que el cliente entienda y acepte desde el inicio.
   - La conversación de "lo que no hacemos": cómo delimitar el alcance del servicio sin perder al cliente.

2. **Documentación como herramienta de alineación**
   - Brief del proyecto: qué incluir para que sirva de referencia ante desacuerdos futuros.
   - Propuesta comercial como contrato de expectativas: cómo redactarla para que gestione expectativas por sí sola.
   - Actas de reunión: por qué son indispensables y cómo hacerlas sin que consuman tiempo.

3. **Comunicación asertiva en situaciones difíciles**
   - Cómo dar malas noticias (resultados por debajo de objetivos, cambios de estrategia, retrasos) de forma directa y profesional.
   - Estructura para conversaciones difíciles: contexto, hecho objetivo, impacto, propuesta de solución, siguientes pasos.
   - Cómo decir "no" a peticiones fuera de alcance sin dañar la relación.
   - Técnicas para gestionar clientes que cambian los requisitos constantemente.

4. **Gestión de la insatisfacción del cliente**
   - Protocolo de acción cuando un cliente expresa insatisfacción: primero escuchar, luego actuar.
   - Cómo distinguir entre una queja legítima y expectativas no realistas que nunca se pudieron cumplir.
   - Cómo negociar una solución que sea justa para ambas partes: compensaciones, ajustes de alcance, cambios de estrategia.
   - Cuándo y cómo finalizar una relación con un cliente de forma profesional.

5. **Cultura de feedback constructivo**
   - Cómo implementar revisiones periódicas (mensuales, trimestrales) para recalibrar expectativas antes de que se conviertan en problemas.
   - Técnicas para pedir feedback al cliente de forma que sea útil y no genere defensividad.
   - Cómo responder a feedback negativo de clientes sin ponerse a la defensiva.

6. **Comunicación con equipos internos y stakeholders**
   - Cómo alinear las expectativas del cliente con las capacidades reales del equipo de marketing.
   - Gestión de peticiones urgentes e irrealistas de stakeholders internos.
   - Comunicación de resultados a comités directivos: cómo presentar datos positivos y negativos con contexto.

**Entregables**
- Guión de reunión de kick-off con preguntas clave.
- Plantilla de propuesta comercial que gestiona expectativas.
- Scripts para las cinco conversaciones difíciles más comunes en marketing.
- Protocolo de gestión de quejas de clientes.

Adapta el contenido a un profesional de marketing (consultor, director de cuentas o responsable de marketing in-house) con clientes o stakeholders internos que tienen altas expectativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Establecer expectativas claras y comunicar asertivamente con clientes y stakeholders de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación asertiva para desarrolladores: del código a las personas',
                'description'      => 'Guía para que desarrolladores mejoren su comunicación con product managers, stakeholders no técnicos y su propio equipo: cómo explicar complejidad técnica, establecer límites razonables y dar feedback constructivo en code reviews.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación y habilidades interpersonales para profesionales técnicos. Conoces los retos específicos que enfrentan los desarrolladores de software cuando tienen que comunicarse con personas no técnicas, gestionar expectativas de entrega y mantener relaciones sanas dentro del equipo. Ayúdame a mejorar mis habilidades de comunicación asertiva en el contexto del desarrollo de software.

**Por qué la comunicación importa en el desarrollo**
Un desarrollador brillante técnicamente que no sabe comunicarse no llega a senior. La comunicación no es un añadido opcional al trabajo técnico: es la forma en que tu trabajo genera impacto real. Explicar las implicaciones técnicas de una decisión, negociar plazos realistas, dar feedback efectivo en una code review o decir "eso no es factible en ese plazo" son habilidades que marcan la diferencia entre un buen desarrollador y uno excelente.

**Bloques de trabajo**

1. **Explicar conceptos técnicos a stakeholders no técnicos**
   - El principio de la doble audiencia: cómo adaptar el mismo mensaje para un CEO, un PM y un QA.
   - Técnicas de simplificación sin pérdida de precisión: analogías, metáforas, visualizaciones.
   - Cómo responder a preguntas técnicas en reuniones sin entrar en detalles innecesarios que confunden.
   - Plantillas de comunicación para las situaciones más comunes: explicar deuda técnica, justificar una decisión de arquitectura, comunicar un bug crítico.

2. **Gestión de expectativas de entrega y plazos**
   - Cómo estimar con honestidad sin comprometerse a plazos que no se pueden cumplir.
   - La conversación de "scope, time, quality: elige dos" — cómo plantearla a un PM o a un cliente.
   - Cómo comunicar retrasos de forma proactiva antes de que se conviertan en crisis.
   - Cómo decir "no" o "no todavía" a peticiones de features urgentes sin dañar la relación con el producto.

3. **Feedback en code reviews: constructivo y directo**
   - Principios de code review efectivo: revisar el código, no a la persona.
   - Cómo formular comentarios que sean claros, accionables y respetuosos.
   - Cómo recibir feedback en una code review sin ponerse a la defensiva.
   - Cómo gestionar desacuerdos técnicos con un compañero durante el review.

4. **Comunicación en el equipo de desarrollo**
   - Cómo dar feedback a un compañero cuyo código o comportamiento está afectando al equipo.
   - Comunicación en stand-ups: cómo ser conciso y útil sin omitir información importante.
   - Cómo escalar un bloqueante o una dependencia de otro equipo de forma efectiva.
   - Cómo gestionar conflictos técnicos en el equipo: decisiones de arquitectura, elección de tecnologías.

5. **Establecer límites profesionales sanos**
   - Cómo comunicar que no estoy disponible fuera del horario laboral sin parecer poco comprometido.
   - Cómo gestionar la presión de "lo necesito para ayer" de forma asertiva.
   - Cómo comunicar que una tarea requiere investigación previa y no puede estimarse en 5 minutos.

6. **Presencia y visibilidad en la organización**
   - Cómo comunicar el impacto de tu trabajo a tu manager y al equipo directivo.
   - Cómo participar de forma efectiva en reuniones de dirección sin perder tiempo.
   - Cómo documentar y comunicar decisiones técnicas importantes de forma que perduren.

**Entregables**
- Scripts para las diez situaciones de comunicación más difíciles para un desarrollador.
- Plantilla de comunicación de retraso de entrega.
- Guía de feedback efectivo en code reviews con ejemplos.
- Framework para explicar deuda técnica a stakeholders no técnicos.

Adapta el contenido a un desarrollador con 3-8 años de experiencia que trabaja en equipo y tiene interacción regular con product managers, diseñadores y stakeholders de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Mejorar la comunicación asertiva de desarrolladores con stakeholders técnicos y no técnicos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión de expectativas del cliente en proyectos de diseño',
                'description'      => 'Aprende a establecer límites creativos claros, comunicar el valor de tus decisiones de diseño y gestionar las revisiones sin perder el control creativo ni la rentabilidad del proyecto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de proyectos creativos y comunicación con clientes para diseñadores. Conoces la tensión constante entre la visión del diseñador y las expectativas del cliente, y sabes cómo navegar esa tensión de forma que el resultado sea bueno para el diseño y la relación comercial. Ayúdame a mejorar mis habilidades de gestión de expectativas y comunicación asertiva con clientes de diseño.

**El conflicto eterno: visión creativa vs. expectativas del cliente**
Todo diseñador lo ha vivido: el cliente que quiere cambiar los colores, añadir más texto, pedir "algo más moderno" sin saber qué significa, o que pide la vigésima revisión de un logo. Sin las herramientas correctas de comunicación y gestión de expectativas, estos momentos se convierten en desgaste, pérdida de rentabilidad y frustración de ambas partes. Con las herramientas correctas, se convierten en oportunidades para reforzar la confianza y el valor del trabajo de diseño.

**Bloques de trabajo**

1. **El brief como contrato de expectativas**
   - Qué preguntar al cliente en el brief para entender sus expectativas reales, no solo las superficiales.
   - Cómo incluir en el brief los límites del proyecto: número de revisiones, proceso creativo, criterios de aprobación.
   - La pregunta más importante: "¿Cómo sabremos que este proyecto ha tenido éxito?"

2. **Presentación de diseño como acto de comunicación**
   - Cómo presentar un diseño explicando las decisiones (no pidiendo validación).
   - Estructura de presentación: briefing recordado → problema identificado → solución propuesta → decisiones clave justificadas.
   - Cómo guiar la atención del cliente hacia los elementos que importan y alejarla de los detalles secundarios.
   - Vocabulario para hablar de diseño con clientes no diseñadores.

3. **Gestión de revisiones y cambios de alcance**
   - Cómo establecer desde el contrato el número de rondas de revisión incluidas y qué implica superarlas.
   - Técnica para recibir feedback del cliente de forma estructurada: formulario de revisión, sesión de feedback guiada.
   - Cómo distinguir entre feedback válido que mejora el diseño y preferencia personal del cliente que lo empeora.
   - Cómo comunicar asertivamente que un cambio pedido perjudica el resultado y proponer una alternativa.

4. **Comunicación de límites creativos y profesionales**
   - Cómo decir "eso no es lo que necesitas" sin sonar arrogante.
   - Cómo manejar al cliente que pide algo éticamente cuestionable o técnicamente imposible.
   - Cuándo y cómo declinar un proyecto o un cliente.
   - Cómo comunicar que el proyecto ha salido del alcance original y presentar la opción de presupuesto adicional.

5. **Gestión de clientes difíciles**
   - El cliente indeciso: cómo estructurar el proceso de decisión para evitar el limbo eterno.
   - El cliente que sabe de diseño (o cree saberlo): cómo mantener la autoridad creativa con respeto.
   - El cliente urgente: cómo gestionar plazos irreales sin comprometer la calidad.
   - El cliente insatisfecho: protocolo de escalada y resolución.

6. **Comunicación post-entrega y relación a largo plazo**
   - Cómo cerrar un proyecto de forma que el cliente quede satisfecho y dispuesto a recomendar.
   - Pedir testimonios y casos de estudio de forma natural.
   - Cómo mantener la relación viva entre proyectos para generar trabajo recurrente.

**Entregables**
- Plantilla de brief de diseño con preguntas de gestión de expectativas integradas.
- Contrato-tipo con cláusulas de revisiones y alcance.
- Scripts para las situaciones difíciles más comunes con clientes de diseño.
- Formulario de feedback estructurado para revisiones de diseño.

Adapta el contenido a un diseñador freelance o de agencia con experiencia media que trabaja con clientes de empresa mediana o pequeña.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar expectativas de clientes de diseño y mantener el control creativo con comunicación asertiva',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Comunicación asertiva en ventas: cómo decir la verdad y cerrar más',
                'description'      => 'Aprende a ser un vendedor honesto y asertivo: cómo establecer expectativas realistas sobre tu producto, gestionar objeciones con integridad y construir relaciones de confianza que generan clientes para siempre.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas y ética comercial. Sabes que los mejores vendedores no son los que hacen promesas vacías, sino los que dicen la verdad con convicción, establecen expectativas realistas y construyen confianza duradera. Ayúdame a desarrollar un estilo de ventas asertivo, honesto y más efectivo a largo plazo.

**La paradoja de la honestidad en ventas**
Muchos vendedores creen que prometer más de lo que pueden dar cierra más deals a corto plazo. La realidad es la contraria: los clientes que compran con expectativas infladas generan churn, reclamaciones y mala reputación. Los clientes que compran con expectativas realistas se convierten en promotores, repiten y refieren. La honestidad asertiva no es solo ética: es el mejor modelo de negocio.

**Bloques de trabajo**

1. **Diagnóstico honesto: vender lo que el cliente necesita**
   - Cómo hacer un diagnóstico real de las necesidades del cliente antes de presentar la solución.
   - Técnica de "el cliente primero": cómo recomendar no comprar cuando el producto no es la solución adecuada (y por qué esto genera más ventas a largo plazo).
   - Preguntas de descubrimiento que revelan las expectativas reales del cliente.

2. **Establecer expectativas realistas durante el proceso de venta**
   - Cómo presentar los resultados esperados de forma honesta: rangos en lugar de promesas absolutas, condiciones necesarias, plazos reales.
   - Cómo hablar de las limitaciones del producto sin que parezca que lo estás desaconsejando.
   - La conversación de "lo que nuestro producto no hace": por qué es una herramienta de confianza, no de pérdida.

3. **Gestión de objeciones con asertividad**
   - Diferencia entre responder una objeción de forma manipuladora y hacerlo de forma asertiva y honesta.
   - Técnica de la objeción como información: cómo usar las dudas del cliente para mejorar la solución propuesta.
   - Cómo gestionar la objeción de precio sin bajar el valor: argumentación de ROI, comparación de coste de no actuar.
   - Cuándo aceptar que el cliente tiene razón y el producto no es para él.

4. **Comunicar malas noticias en el proceso de venta**
   - Cómo comunicar un retraso de entrega, un fallo del producto o un cambio de precio de forma directa y profesional.
   - Cómo mantener la confianza del cliente cuando algo sale mal durante el onboarding.
   - El protocolo de "mala noticia proactiva": comunicar antes de que el cliente pregunte.

5. **Negociación asertiva**
   - Cómo negociar condiciones sin ceder en lo que no se puede ceder y siendo transparente sobre las razones.
   - Técnicas de anclaje y concesión que son honestas y efectivas.
   - Cómo decir "no" a descuentos que arruinan el margen de forma que el cliente lo entienda y respete.

6. **Construcción de relaciones de confianza a largo plazo**
   - Por qué la transparencia post-venta es tan importante como la pre-venta.
   - Cómo hacer seguimiento sin resultar insistente: timing, canales, valor en cada contacto.
   - Cómo convertir un cliente satisfecho en un promotor activo: cuándo y cómo pedir referencias.

**Entregables**
- Framework de ventas consultivas con asertividad integrada.
- Scripts para las objeciones más comunes en mi sector.
- Protocolo de comunicación de malas noticias en ventas.
- Guión de cierre honesto que establece expectativas y genera compromiso.

Adapta el contenido a un account executive o business development manager con experiencia en ventas consultivas B2B que quiere construir una cartera de clientes leal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar un estilo de ventas asertivo y honesto que construye confianza y genera clientes para siempre',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de expectativas en product management: del roadmap a la realidad',
                'description'      => 'Aprende a alinear las expectativas de stakeholders, CEO, ventas y engineering sobre el roadmap de producto, comunicar cambios de prioridad con asertividad y gestionar la tensión entre lo que el negocio quiere y lo que el equipo puede entregar.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product management y comunicación organizacional. Conoces la tensión constante que vive un PM entre las demandas del negocio, las expectativas del CEO, las promesas de ventas a clientes y la capacidad real del equipo de desarrollo. Ayúdame a desarrollar las habilidades de gestión de expectativas y comunicación asertiva que necesito para navegar esa tensión de forma efectiva.

**El PM en el centro de la tormenta**
El Product Manager es el receptor de todas las expectativas: el CEO quiere más features, ventas prometió X al cliente, el equipo de ingeniería dice que eso no cabe en el sprint y los usuarios piden algo completamente diferente. Sin una comunicación asertiva y una gestión proactiva de expectativas, el PM se convierte en el mensajero de los disgustos de todos. Con las herramientas correctas, se convierte en el arquitecto de la alineación.

**Bloques de trabajo**

1. **Comunicación del roadmap: gestionar expectativas hacia arriba**
   - Cómo presentar el roadmap al CEO y al comité directivo de forma que entiendan por qué ciertas cosas no están incluidas.
   - Cómo comunicar cambios de prioridad sin perder credibilidad.
   - La conversación de "oportunidad de coste": cómo explicar que añadir X significa quitar Y.
   - Cómo gestionar las peticiones del CEO de "añadir esto urgentemente" de forma asertiva pero respetuosa.

2. **Gestión de expectativas con el equipo de ventas**
   - Cómo establecer un proceso claro para que ventas no prometa features que no existen.
   - Qué hacer cuando ventas ya prometió algo que el producto no puede entregar.
   - Cómo comunicar a ventas que una feature no estará lista en el plazo que prometieron sin crear un conflicto.
   - Protocolo de alineación entre producto y ventas para oportunidades estratégicas.

3. **Comunicación asertiva con el equipo de ingeniería**
   - Cómo presentar requisitos de forma clara para que el equipo pueda estimar con precisión.
   - Cómo gestionar la presión de entrega sin comprometer la calidad técnica.
   - Cómo recibir estimaciones que no son las que el negocio necesita y buscar soluciones conjuntas.
   - Cómo comunicar cambios de prioridad mid-sprint de forma que minimicen el impacto en el equipo.

4. **Feedback y comunicación con usuarios**
   - Cómo comunicar a usuarios que su petición de feature no va a estar en el próximo release (y mantenerlos igualmente comprometidos).
   - Cómo dar feedback a usuarios sobre sus sugerencias de forma honesta y agradecida.
   - Gestión de usuarios VIP que esperan trato preferencial en el roadmap.

5. **Gestión de la incertidumbre y los cambios**
   - Cómo comunicar que el roadmap es un plan con incertidumbre, no una promesa de entrega.
   - Protocolo de comunicación cuando hay que pivotar o cancelar una feature importante.
   - Cómo mantener la confianza de los stakeholders cuando el producto no cumple las expectativas.

6. **Construcción de una cultura de expectativas realistas**
   - Cómo instaurar rituales de alineación que prevengan malentendidos: demos, monthly updates, roadmap reviews.
   - Cómo educar a la organización sobre cómo funciona el proceso de producto.
   - Cómo documentar decisiones de producto de forma que reduzcan los conflictos futuros.

**Entregables**
- Framework de comunicación del roadmap por audiencia.
- Scripts para las diez conversaciones difíciles más comunes en product management.
- Plantilla de roadmap que gestiona expectativas por diseño.
- Protocolo de alineación producto-ventas.

Adapta el contenido a un Product Manager con 3-7 años de experiencia en empresa de producto digital que trabaja con múltiples stakeholders con expectativas diferentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Alinear expectativas de todos los stakeholders sobre el roadmap de producto con comunicación asertiva',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación asertiva en RRHH: conversaciones difíciles con líderes y empleados',
                'description'      => 'Desarrolla las habilidades para mantener conversaciones difíciles en RRHH: feedback de bajo rendimiento, comunicación de desvinculaciones, gestión de conflictos entre empleados y comunicación asertiva con líderes que resisten las políticas de personas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación organizacional y gestión de personas con amplia experiencia en las conversaciones más difíciles del mundo de los recursos humanos. Ayúdame a desarrollar la confianza y las habilidades para mantener conversaciones difíciles de forma directa, empática y profesional.

**Las conversaciones que nadie quiere tener pero todos necesitan**
Los profesionales de RRHH deben tener conversaciones que otras personas evitan: decirle a un manager que su equipo está desmotivado por su estilo de liderazgo, comunicar a un empleado que su rendimiento no es suficiente, gestionar un conflicto entre dos personas del mismo equipo, o defender una política de personas ante un CEO que no quiere implementarla. Estas conversaciones, bien llevadas, son la herramienta más poderosa de transformación organizacional.

**Bloques de trabajo**

1. **Framework para conversaciones difíciles en RRHH**
   - Modelo SBI (Situación-Comportamiento-Impacto) aplicado a RRHH: ejemplos prácticos.
   - Preparación mental y emocional antes de una conversación difícil: cómo gestionar la incomodidad propia.
   - Elección del momento y el espacio adecuado: privacidad, timing, duración.
   - Cómo documentar la conversación de forma que proteja a la empresa y al empleado.

2. **Feedback de bajo rendimiento y planes de mejora**
   - Cómo comunicar a un empleado que su rendimiento no cumple las expectativas de forma directa y sin crueldad.
   - Estructura del PIP (Performance Improvement Plan): objetivos, plazos, consecuencias, apoyo.
   - Cómo gestionar la reacción emocional del empleado: negación, enfado, tristeza.
   - Seguimiento del PIP: conversaciones de progreso, ajustes, decisión final.

3. **Comunicación de desvinculaciones**
   - Estructura de la conversación de despido: brevedad, claridad, respeto.
   - Qué decir y qué no decir en una desvinculación para evitar conflictos legales y preservar la dignidad de la persona.
   - Cómo gestionar despidos masivos o EREs: comunicación a afectados, a los que se quedan y a la opinión pública interna.
   - El offboarding como oportunidad de aprendizaje: entrevistas de salida efectivas.

4. **Gestión de conflictos entre empleados**
   - Protocolo de mediación en conflictos laborales: pasos, roles, documentación.
   - Cómo mantener neutralidad cuando ambas partes te presionan para que tomes partido.
   - Cuándo escalar un conflicto a instancias superiores o a procedimientos formales.
   - Cómo trabajar con dos personas que deben seguir colaborando después del conflicto.

5. **Comunicación asertiva con líderes y directivos**
   - Cómo dar feedback a un manager sobre su estilo de liderazgo cuando está afectando a su equipo.
   - Cómo defender una política de personas (diversidad, bienestar, compensación equitativa) ante un líder resistente.
   - Cómo escalar un problema de comportamiento de un directivo a la alta dirección.
   - La conversación de "esto no es legal o no es ético": cómo plantearla con firmeza y sin confrontación innecesaria.

6. **Comunicación organizacional sensible**
   - Cómo comunicar cambios organizacionales disruptivos (restructuraciones, cambios de beneficios) minimizando el impacto en el clima.
   - Gestión de rumores e información no oficial: cómo restablecer la narrativa.
   - Comunicación en situaciones de crisis de personas: accidente laboral, acoso denunciado, fallecimiento de un empleado.

**Entregables**
- Guía de preparación para las conversaciones difíciles más comunes en RRHH.
- Scripts detallados para feedback de bajo rendimiento, despido y gestión de conflictos.
- Plantilla de documentación post-conversación difícil.
- Framework de comunicación de cambios organizacionales.

Adapta el contenido a un HR Business Partner o HR Manager con experiencia que trabaja con directivos y empleados en una empresa mediana o grande.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mantener conversaciones difíciles en RRHH con asertividad, empatía y rigor profesional',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación asertiva para directores financieros: del dato a la decisión',
                'description'      => 'Aprende a comunicar información financiera compleja a audiencias no financieras, gestionar expectativas de inversores y accionistas, y mantener conversaciones difíciles sobre presupuesto, costes y rentabilidad con asertividad y claridad.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación financiera y liderazgo para directores financieros y Controllers. Conoces la dificultad de traducir datos financieros complejos en mensajes claros para audiencias no financieras, y la tensión de tener que comunicar noticias difíciles a accionistas, al CEO o a directivos de área. Ayúdame a desarrollar mis habilidades de comunicación asertiva en el contexto de las finanzas corporativas.

**La comunicación como competencia crítica del CFO**
El CFO moderno no es solo el guardián de los números: es el co-piloto estratégico del CEO y la voz de la disciplina financiera ante el board. Su efectividad depende en gran medida de su capacidad para comunicar con claridad, gestionar las expectativas de múltiples audiencias y mantener conversaciones difíciles con firmeza y respeto. Un CFO que no sabe comunicar es un CFO que no influye.

**Bloques de trabajo**

1. **Comunicación financiera para audiencias no financieras**
   - Cómo presentar el P&L, el balance y el cash flow a directivos de área sin conocimientos financieros.
   - Principio de "so what": cómo transformar cada dato en una implicación de negocio relevante para la audiencia.
   - Técnicas de visualización financiera: los mejores formatos de gráfico para cada tipo de mensaje.
   - Cómo simplificar sin perder precisión: vocabulario financiero adaptado a no financieros.

2. **Gestión de expectativas con accionistas e inversores**
   - Cómo comunicar resultados financieros positivos y negativos con la misma credibilidad.
   - Estructura del investor update: logros, desviaciones, contexto, outlook, preguntas y respuestas.
   - Cómo gestionar las expectativas de retorno de inversores cuando los resultados están por debajo del plan.
   - Cómo comunicar un profit warning de forma proactiva, clara y que preserve la confianza.

3. **Conversaciones difíciles sobre presupuesto y costes**
   - Cómo decir "no" a una inversión solicitada por otro directivo de forma que sea una decisión de negocio, no un veto financiero.
   - Cómo comunicar recortes presupuestarios de forma que el equipo afectado los entienda y acepte.
   - La conversación de "estamos quemando caja más rápido de lo previsto" con el CEO y el board.
   - Cómo presentar opciones de ahorro de costes manteniendo la credibilidad y el apoyo del equipo directivo.

4. **Comunicación asertiva en el comité de dirección**
   - Cómo mantener posiciones financieras con firmeza ante presiones del CEO o de otros directivos.
   - Cómo plantear una objeción financiera a una iniciativa estratégica sin bloquear la innovación.
   - Técnicas para ser más persuasivo en reuniones de dirección: brevedad, datos, implicaciones.

5. **Comunicación de auditorías y compliance**
   - Cómo comunicar los resultados de una auditoría externa al board y al comité de auditoría.
   - Gestión de comunicación en situaciones de irregularidad contable o fraude detectado.
   - Cómo comunicar cambios normativos y su impacto financiero a la organización.

6. **Comunicación de la estrategia financiera**
   - Cómo presentar el plan financiero a 3-5 años de forma que inspire confianza y alineación.
   - Comunicación de la estrategia de financiación, M&A o desinversiones a los diferentes stakeholders.
   - Cómo construir una narrativa financiera coherente que soporte la estrategia de negocio.

**Entregables**
- Framework de comunicación financiera por audiencia (board, CEO, directivos, accionistas, equipo).
- Scripts para las conversaciones financieras más difíciles.
- Plantilla de investor update con gestión de expectativas integrada.
- Guía de visualización financiera para no financieros.

Orienta el contenido a un CFO o Director Financiero de empresa mediana-grande con experiencia que quiere mejorar su influencia y su comunicación con stakeholders no financieros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Comunicar información financiera compleja con claridad y gestionar expectativas de accionistas y directivos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación asertiva para abogados: del asesoramiento a la negociación',
                'description'      => 'Desarrolla las habilidades de comunicación asertiva que todo abogado necesita: cómo dar opiniones jurídicas difíciles con firmeza, negociar con contrapartes de forma efectiva y gestionar las expectativas de clientes sobre resultados y plazos procesales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación para profesionales del derecho y conoces las particularidades de la comunicación jurídica: la tensión entre el deber de informar con honestidad y el deseo del cliente de escuchar lo que quiere, la presión de la negociación con contrapartes adversariales, y la responsabilidad de mantener relaciones de larga duración basadas en la confianza. Ayúdame a desarrollar mi comunicación asertiva como abogado.

**La comunicación como pilar de la práctica legal**
Un abogado excelente no solo domina el derecho: sabe comunicarlo. Sabe explicar una situación jurídica compleja con claridad, decirle a un cliente que tiene pocas posibilidades de ganar el juicio, negociar un acuerdo con una contraparte agresiva y defender su posición ante un juez. Todas estas situaciones requieren asertividad, precisión y una inteligencia emocional desarrollada.

**Bloques de trabajo**

1. **Comunicación de dictámenes y asesoramiento jurídico difícil**
   - Cómo comunicar al cliente que su posición jurídica es débil o que sus probabilidades de éxito son bajas.
   - La obligación de informar vs el deseo de no decepcionar: cómo equilibrar honestidad y empatía.
   - Estructura del dictamen jurídico oral: hechos, análisis, opciones, recomendación, riesgos.
   - Cómo gestionar la reacción emocional del cliente cuando la noticia no es la que esperaba.

2. **Gestión de expectativas sobre resultados y plazos**
   - Por qué los abogados tienden a sobre-prometer y cómo corregir ese patrón.
   - Cómo comunicar plazos procesales reales en un sistema judicial con retrasos estructurales.
   - Cómo gestionar al cliente que presiona constantemente para saber cuándo ganará el caso.
   - Protocolo de actualización periódica del cliente sobre el estado del asunto.

3. **Negociación asertiva con contrapartes**
   - Diferencia entre asertividad y agresividad en la negociación legal: cómo ser firme sin ser confrontacional.
   - Técnicas de negociación basada en principios aplicadas al contexto jurídico.
   - Cómo gestionar contrapartes que negocian de mala fe o con tácticas de presión.
   - Cuándo recomendar al cliente acudir a juicio y cuándo recomendar un acuerdo extrajudicial.

4. **Comunicación procesal: persuasión ante jueces y árbitros**
   - Técnicas de argumentación jurídica oral: estructura, evidencia, narrativa.
   - Cómo responder preguntas difíciles del tribunal de forma directa y sin evasivas.
   - Comunicación escrita forense: claridad, concisión, impacto.

5. **Gestión de conflictos con clientes**
   - Cómo manejar al cliente que culpa al abogado de un resultado adverso.
   - Qué hacer cuando el cliente quiere hacer algo que el abogado no puede aconsejar éticamente.
   - Cómo terminar la relación con un cliente de forma profesional y protegiendo la firma del despacho.

6. **Comunicación interna en el despacho**
   - Cómo dar feedback a un asociado junior sobre la calidad de su trabajo de forma constructiva.
   - Cómo comunicar discrepancias con un socio senior de forma respetuosa pero firme.
   - Gestión de conflictos entre socios: cuándo escalar y cuándo resolver internamente.

**Entregables**
- Framework de comunicación de asesoramiento jurídico difícil.
- Scripts para las situaciones de comunicación más delicadas en la práctica legal.
- Estructura del dictamen jurídico oral con ejemplos.
- Protocolo de gestión de expectativas de cliente desde el inicio hasta el cierre del asunto.

Adapta el contenido a un abogado con 5-15 años de experiencia en ejercicio privado que quiere mejorar su comunicación con clientes, contrapartes y tribunal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar comunicación asertiva para abogados: dictámenes difíciles, negociación y gestión de clientes',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de expectativas en Customer Success: conversaciones difíciles con clientes',
                'description'      => 'Aprende a gestionar expectativas de clientes en momentos críticos: cuando el producto no cumple lo prometido, cuando hay que comunicar un cambio de precio o de condiciones, y cuando el cliente está al borde del churn.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y comunicación con clientes en entornos SaaS y B2B. Conoces la presión de mantener la retención mientras mantienes conversaciones honestas sobre limitaciones del producto, cambios de precio y resultados que no llegan a las expectativas del cliente. Ayúdame a desarrollar las habilidades de gestión de expectativas y comunicación asertiva que necesito para navegar esas situaciones con profesionalidad.

**La honestidad como estrategia de retención**
En Customer Success, la tentación de "calmar al cliente" con promesas vagas o compromisos que no puedes garantizar es constante. La realidad es que los clientes que se van lo hacen porque las expectativas no se cumplieron, no porque la conversación difícil fuera demasiado directa. La comunicación honesta y asertiva no es el riesgo para la retención: es la protección más efectiva contra el churn.

**Bloques de trabajo**

1. **Gestión de expectativas en el onboarding**
   - Cómo establecer desde el primer día las expectativas correctas sobre time-to-value, capacitación requerida y resultados esperados.
   - La conversación de "qué necesitamos de vuestra parte para que esto funcione".
   - Cómo manejar al cliente que llega con expectativas infladas por ventas.
   - Protocolo de realineación de expectativas en las primeras semanas sin que el cliente sienta que le cambian las reglas.

2. **Comunicar cuando el producto falla o no cumple**
   - Protocolo de comunicación de incidencias críticas: quién contacta, en qué plazo, qué dice, qué no dice.
   - Cómo disculparse de forma efectiva: reconocimiento, responsabilidad, plan de acción, seguimiento.
   - Cómo manejar al cliente que pide compensación o descuento por un fallo del producto.
   - La diferencia entre una disculpa y una promesa que no puedes cumplir.

3. **Conversaciones de bajo rendimiento del cliente**
   - Qué hacer cuando el cliente no está usando el producto y está en riesgo de churn por baja adopción.
   - Cómo tener la conversación de "vuestro equipo no está adoptando la herramienta" sin culpar al cliente.
   - Cómo proponer un plan de acción conjunto cuando el cliente no está obteniendo el valor esperado.
   - Cuándo recomendar pausar o cancelar el servicio cuando genuinamente no es el momento adecuado para ese cliente.

4. **Comunicación de cambios de precio y condiciones**
   - Cómo comunicar un aumento de precio de forma que el cliente lo entienda y acepte.
   - Estructura del mensaje de cambio de precio: anticipación suficiente, justificación de valor, opciones.
   - Cómo gestionar la negociación post-comunicación de precio.
   - Qué hacer cuando el cliente amenaza con irse como reacción al cambio de precio.

5. **La conversación de riesgo de churn**
   - Cómo iniciar la conversación cuando sabes que el cliente está considerando irse.
   - Técnica de la pregunta directa: "¿qué necesitaría cambiar para que renovarais con nosotros?"
   - Cómo distinguir entre un cliente que puede salvarse y uno cuya decisión ya está tomada.
   - Protocolo de offboarding honesto: cómo despedirse bien para que la puerta quede abierta.

6. **Establecer límites con clientes que demandan demasiado**
   - Cómo comunicar asertivamente que una petición está fuera del alcance del servicio.
   - Gestión del cliente que pretende que el CSM sea su consultor personal sin coste adicional.
   - Cómo escalar internamente un cliente con comportamiento abusivo hacia el equipo de CS.

**Entregables**
- Framework de gestión de expectativas en cada etapa del customer journey.
- Scripts para las diez conversaciones difíciles más comunes en Customer Success.
- Plantilla de comunicación de incidencia crítica.
- Protocolo de conversación de riesgo de churn.

Adapta el contenido a un Customer Success Manager de empresa SaaS B2B con cartera de clientes mediana-grande que enfrenta presión constante de retención.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar expectativas y mantener conversaciones difíciles con clientes en momentos críticos de CS',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Comunicación asertiva para freelancers: protege tu tiempo y tu valor',
                'description'      => 'Aprende a poner límites con clientes, comunicar cambios de precio con seguridad, rechazar proyectos inadecuados y gestionar conflictos sin perder contratos ni tu bienestar como freelance.',
                'prompt_content'   => <<<'EOT'
Eres un experto en negocio freelance y comunicación asertiva para profesionales independientes. Conoces los patrones de pensamiento que llevan a los freelancers a decir que sí cuando quieren decir que no, a aceptar pagos por debajo de su valor y a aguantar clientes tóxicos por miedo a perder ingresos. Ayúdame a desarrollar una comunicación más asertiva que proteja mi negocio y mi bienestar.

**El síndrome del freelance complaciente**
Muchos freelancers son técnicamente excelentes pero tienen dificultades para cobrar lo que valen, poner límites con clientes que abusan de su tiempo o rechazar proyectos inadecuados. Esto no es un problema de autoestima sino de habilidades de comunicación: con las herramientas correctas, cualquier freelance puede aprender a ser directo, firme y amable al mismo tiempo, protegiendo su negocio sin dañar sus relaciones.

**Bloques de trabajo**

1. **Comunicación del valor y los precios con confianza**
   - Cómo comunicar mis tarifas sin disculparse ni sobreexplicar.
   - La regla de no negociar el precio, sino el alcance: cómo aplicarla en la práctica.
   - Cómo responder a "eso es muy caro" de forma asertiva y sin bajar el precio automáticamente.
   - Cuándo y cómo subir mis tarifas a clientes actuales: timing, mensaje, gestión de la reacción.

2. **Establecer límites con clientes desde el inicio**
   - Qué incluir en el contrato freelance para que gestione los límites por mí: horas de contacto, canales de comunicación, revisiones incluidas, tiempo de respuesta.
   - Cómo comunicar los límites en el onboarding del cliente de forma natural.
   - Cómo responder a mensajes fuera de horario o peticiones urgentes no justificadas.
   - El cliente que "solo son cinco minutitos": cómo gestionar las peticiones informales de trabajo gratuito.

3. **Comunicar cambios de alcance y cobrar por ellos**
   - Cómo identificar y comunicar que el proyecto ha salido del alcance original.
   - Estructura del mensaje de scope creep: reconocimiento, impacto, propuesta de presupuesto adicional.
   - Cómo gestionar al cliente que argumenta que "eso estaba incluido".
   - Cómo facturar trabajo adicional sin que el cliente se sienta sorprendido o estafado.

4. **Rechazar proyectos y clientes inadecuados**
   - Cómo declinar un proyecto de forma amable, firme y que deje la puerta abierta.
   - Señales de alerta de un cliente problemático y cómo actuar cuando las detectas antes de firmar.
   - Cómo terminar una relación con un cliente actual de forma profesional.
   - La lista de tipos de proyectos o clientes que nunca acepto: cómo definirla y mantenerla.

5. **Gestión de conflictos y disputas con clientes**
   - Cómo gestionar un cliente insatisfecho con el resultado del trabajo.
   - Qué hacer cuando un cliente no paga.
   - Cómo manejar una crítica negativa pública (Google, LinkedIn, foros de freelancers).
   - Cuándo y cómo escalar una disputa a mediación o vía legal.

6. **Comunicación de plazos y retrasos**
   - Cómo comunicar un retraso de forma proactiva antes de que el cliente pregunte.
   - Qué decir cuando el retraso es por causas del propio cliente (feedback tardío, materiales no entregados).
   - Cómo negociar una extensión de plazo sin que el cliente sienta que pierde el control del proyecto.

**Entregables**
- Scripts para las veinte situaciones de comunicación más difíciles para freelancers.
- Contrato freelance tipo con cláusulas de gestión de expectativas y límites.
- Email tipo para comunicar subida de tarifas a clientes actuales.
- Protocolo de gestión de scope creep con plantilla de mensaje.

Adapta todo el contenido a un freelance con 1-5 años de experiencia que tiene ingresos estables pero siente que a veces no cobra lo que merece o permite que algunos clientes abusen de su disponibilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar comunicación asertiva para que freelancers protejan su tiempo, valor y bienestar',
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
