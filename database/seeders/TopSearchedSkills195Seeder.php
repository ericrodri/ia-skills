<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills195Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de crisis de comunicación',
                'description'      => 'Cuando la marca está bajo ataque: el protocolo de respuesta, los mensajes que defienden la reputación sin empeorar la situación y la estrategia post-crisis que reconstruye la confianza.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en comunicación de crisis con experiencia en marcas que han atravesado situaciones de reputación crítica. Necesito ayuda para gestionar una crisis de comunicación o para preparar a mi empresa para cuando ocurra.

**Mi situación:**
[DESCRIBE EL CONTEXTO: si es una crisis activa —qué ocurrió, cuándo, cómo se está propagando— o si es un ejercicio de preparación. Incluye el tipo de empresa, el sector, el alcance de la audiencia y los canales donde se está desarrollando la crisis]

---

Ayúdame a gestionar la crisis o a prepararme para ella:

**1. Las primeras horas: el protocolo de respuesta inmediata**

Las primeras horas definen la percepción durante semanas:
- La regla de las primeras 24 horas: por qué el silencio prolongado es interpretado como culpa y cuándo es la única opción
- El equipo de gestión de crisis: quién debe estar en la sala de crisis — el CEO, el director de comunicación, el legal y por qué el marketing sola no puede gestionarla
- El monitoreo de la situación: las herramientas (Brandwatch, Mention, Talkwalker) y los procesos para entender en tiempo real cómo se está desarrollando la narrativa
- La evaluación de la gravedad: el framework que ayuda a clasificar la crisis en niveles para calibrar la intensidad de la respuesta sin sobrerreaccionar ni infrarreaccionar

**2. La estrategia de mensajes**

Lo que dices y lo que no dices importa igual:
- Los mensajes que dañan más que el silencio: las respuestas defensivas, la negación cuando hay evidencia, el "sin comentarios" en el momento equivocado
- La estructura del mensaje de crisis: reconocimiento, empatía, hechos verificados, acción concreta y cómo se mantiene informada la audiencia — los cinco elementos que no pueden faltar
- La segmentación de mensajes: qué le dices a los empleados, a los clientes, a los medios y a las redes sociales — los mensajes son distintos porque las preguntas son distintas
- Cómo comunicar incertidumbre sin parecer incompetente: cuando no tienes toda la información, qué dices y qué no dices mientras la investigas

**3. Los canales de respuesta**

Dónde y cómo comunicar durante la crisis:
- El comunicado oficial: la estructura, el tono y la longitud apropiados según el tipo de crisis y la audiencia
- Social media en crisis: la gestión de comentarios, cuándo apagar los comentarios, cuándo no y cómo responder individualmente a la escala que permite el equipo
- Los medios de comunicación: cómo relacionarte con los periodistas durante la crisis — quién da declaraciones, en qué formato y cómo evitar que una entrevista empeore la situación
- La comunicación interna durante la crisis: los empleados son embajadores o amplificadores del problema — cómo mantenerlos informados y alineados

**4. La narrativa y el control de la historia**

Pasar de reaccionar a comunicar:
- Cómo identificar la narrativa dominante que está construyendo la opinión pública y cómo introducir contrapesos sin parecer defensivo
- El poder de los hechos verificados: cómo construir la credibilidad de la respuesta sobre datos y acciones concretas, no sobre declaraciones de intención
- Los errores que amplifican la crisis: las respuestas que se convierten en la noticia, los portavoces equivocados y los mensajes que generan más preguntas de las que responden
- Cuándo pedir disculpas y cómo hacerlo: la diferencia entre una disculpa que cierra la crisis y una que la reabre

**5. La gestión del escalado**

Cuando la crisis supera el control del equipo de comunicación:
- Los signos de que la crisis está escalando: cobertura mediática nacional, presión regulatoria, reacciones de clientes grandes o inversores, viralizaciones con hashtags propios
- La crisis dentro de la crisis: cuando el intento de gestión genera una nueva controversia — cómo detectarlo y detenerlo a tiempo
- La coordinación con legal: cuándo la gestión de la comunicación debe supeditarse a la estrategia legal y cómo los dos equipos trabajan juntos sin que ninguno bloquee al otro
- El plan de contingencia: las decisiones preautorizadas que el equipo puede tomar sin escalar cuando hay que actuar en minutos

**6. La estrategia post-crisis**

El trabajo que define si la crisis deja una cicatriz o una lección:
- El análisis post-mortem: qué ocurrió realmente, por qué no se detectó antes y qué habría que haber hecho diferente — sin buscar culpables, buscando sistemas mejores
- La reconstrucción de confianza: el plan de comunicación de los 90 días posteriores que demuestra con hechos que los compromisos adquiridos durante la crisis se están cumpliendo
- El seguimiento de la reputación: cómo medir si la percepción de la marca está recuperándose — el sentiment tracking, los cambios en las búsquedas y los indicadores de negocio
- Cómo convertir la crisis en un argumento de confianza: las marcas que gestionan bien una crisis a veces salen con más credibilidad de la que tenían antes

**7. La preparación preventiva**

Construir la resiliencia antes de necesitarla:
- El manual de crisis: el documento que define los roles, los protocolos y los mensajes preaprobados para los escenarios de mayor probabilidad
- Los simulacros de crisis: cómo practicar la respuesta en condiciones controladas para que cuando llegue la real el equipo no la enfrente por primera vez
- El mapa de vulnerabilidades: los riesgos reputacionales específicos de mi negocio que tengo que monitorear y anticipar

Termina con el borrador del primer mensaje público para la situación que describí: el comunicado, el post de redes sociales o la respuesta a medios que publicaría en las próximas horas si la crisis fuera real.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar una crisis de comunicación con el protocolo de respuesta, los mensajes correctos y la estrategia post-crisis que reconstruye la confianza de la marca.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Incident response y gestión de incidentes técnicos',
                'description'      => 'Cuando el sistema se cae en producción: el runbook, la comunicación durante el incidente y el postmortem que convierte el error en aprendizaje sin buscar culpables.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en site reliability engineering y en la gestión de incidentes técnicos con experiencia en sistemas de alta disponibilidad. Necesito diseñar el proceso completo de incident response que minimice el impacto de los fallos y convierta cada incidente en aprendizaje organizacional.

**Mi contexto técnico:**
[DESCRIBE TU SISTEMA: tipo de aplicación, stack tecnológico, tamaño del equipo de ingeniería, herramientas de monitorización y alerting que ya usas, SLA comprometidos con los clientes, incidentes recientes que hayas tenido]

---

Diseña el sistema completo de gestión de incidentes para mi caso:

**1. Detección y alerting**

La infraestructura que te avisa antes de que lo haga el cliente:
- La estrategia de monitorización: los cuatro golden signals de SRE —latencia, tráfico, errores y saturación— y cómo implementarlos en mi stack
- El alerting que no genera fatiga: la diferencia entre alertas accionables y ruido, los umbrales dinámicos y cómo evitar que el equipo deje de responder a las alertas porque hay demasiadas
- Synthetic monitoring: las pruebas proactivas que detectan la degradación del servicio desde la perspectiva del usuario antes de que el sistema empiece a generar errores internos
- On-call rotations: cómo organizar la guardia para que sea sostenible — la rotación, el escalado y el compensation que hace que la guardia no destruya el equipo

**2. La clasificación del incidente**

No todos los problemas son P1:
- Los niveles de severidad: P1/P2/P3/P4 — cómo definirlos según el impacto en los usuarios y el negocio, con ejemplos concretos de qué califica como qué
- El incident commander: el rol que lidera la gestión del incidente, sus responsabilidades y por qué es un rol distinto al de quien está resolviendo el problema técnico
- La declaración del incidente: cuándo declara formalmente un incidente, quién lo hace y qué activa esa declaración en el proceso

**3. El runbook de respuesta**

El manual que el equipo sigue bajo presión:
- La estructura del runbook: diagnóstico, mitigación, resolución y verificación — los pasos que alguien que no conoce el sistema puede seguir
- Los runbooks específicos por tipo de incidente: los escenarios más frecuentes en mi stack y las acciones documentadas para cada uno
- Cómo mantener los runbooks actualizados: el proceso que hace que la documentación refleje cómo funciona el sistema hoy, no como funcionaba hace un año
- Automated runbooks: cuándo tiene sentido automatizar la respuesta y cómo hacerlo sin que la automatización genere más problemas de los que resuelve

**4. La comunicación durante el incidente**

El proceso que mantiene informados a todos sin interrumpir la resolución:
- El war room y los canales de comunicación: cómo estructurar el canal de Slack o el bridge de voz durante el incidente para que sea útil y no caótico
- Los updates de estado: la cadencia, el formato y el tono de los updates internos al equipo de management y los externos a los clientes
- La status page: cuándo publicar el incidente, qué nivel de detalle dar y cómo comunicar que el servicio está degradado sin generar más alarma de la necesaria
- Cómo hablar con clientes durante un incidente: los mensajes que tranquilizan sin mentir sobre el impacto o el tiempo de resolución

**5. La mitigación y resolución**

Las decisiones técnicas bajo presión:
- La distinción entre mitigación y resolución: restaurar el servicio primero, arreglar la causa raíz después — y por qué confundirlos alarga los incidentes
- Los runbooks de rollback: cómo deshacer un deployment que ha provocado el incidente de forma rápida y segura
- Feature flags y circuit breakers: las herramientas de mitigación que permiten degradar el servicio de forma controlada mientras se resuelve el problema
- Cómo tomar decisiones bajo presión: el framework para elegir entre opciones de mitigación cuando hay información incompleta y el tiempo apremia

**6. El postmortem sin culpables**

El aprendizaje que justifica haber pasado por el incidente:
- La cultura del postmortem blameless: por qué buscar culpables destruye la capacidad de aprendizaje y cómo crear un entorno donde se puede hablar con honestidad
- La estructura del postmortem: timeline del incidente, impacto, causa raíz, factores contribuyentes, acciones correctivas y seguimiento
- El análisis de causa raíz con los 5 porqués: cómo ir más allá del síntoma y encontrar el fallo sistémico que permitió que el incidente ocurriera
- Las action items del postmortem: cómo asegurar que las mejoras identificadas se implementan y no quedan en el backlog indefinidamente

**7. La madurez del proceso de incident management**

Cómo mejorar el sistema con el tiempo:
- Las métricas del incident management: MTTD (mean time to detect), MTTR (mean time to resolve), incident frequency por severidad y % de action items completados
- Las revisiones periódicas del proceso: la cadencia para evaluar si el proceso está funcionando y qué ajustar
- Chaos engineering: cómo practicar la resiliencia induciendo fallos controlados — los primeros pasos para un equipo que nunca ha hecho gamedays

Termina con el template de postmortem para el último incidente que tuvimos o para el escenario de incidente más probable en mi sistema, con todos los campos que el equipo necesita rellenar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el proceso completo de incident response: detección, respuesta, comunicación, resolución y el postmortem blameless que convierte cada incidente en aprendizaje.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de sistemas resilientes',
                'description'      => 'El diseño que funciona incluso cuando algo falla: los estados de error, los flujos de recuperación y la experiencia de usuario en los momentos de mayor fricción que define la percepción de la marca.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de experiencias de usuario con un enfoque especial en los estados de error, los flujos de recuperación y la resiliencia de los sistemas digitales. Necesito diseñar una experiencia que funcione bien incluso cuando algo falla, porque esos son los momentos que más definen la percepción del producto.

**Mi producto:**
[DESCRIBE TU PRODUCTO: tipo de aplicación, flujos críticos para el usuario, tipos de errores más frecuentes que ya conoces —errores de red, timeouts, validación, permisos, datos no disponibles—, estado actual del diseño de errores]

---

Ayúdame a diseñar la experiencia de usuario en los momentos de fallo:

**1. La filosofía del diseño resiliente**

El cambio de mentalidad antes de los componentes:
- Por qué los estados de error son los más importantes del diseño: el usuario que experimenta un error frustrado y tiene una buena experiencia es más fiel que el usuario que nunca ha tenido problemas
- El diseño para la realidad: los flujos de usuario feliz son el caso ideal, pero el diseño real es el que anticipa todos los momentos donde las cosas van mal
- La empatía en el error: el usuario que ve un mensaje de error está frustrado, confundido o preocupado — el tono, el lenguaje y la acción ofrecida deben responder a ese estado emocional
- Los errores como oportunidad de marca: cómo las páginas 404, los mensajes de error y los estados vacíos pueden ser momentos de expresión de la personalidad del producto

**2. La taxonomía de los estados de error**

Diseñar de forma diferente según el tipo de fallo:
- **Errores de usuario**: cuando el usuario ha hecho algo mal — validación de formularios, inputs inválidos, acciones no permitidas — cómo guiarle a la solución sin hacerle sentir estúpido
- **Errores del sistema**: cuando el fallo es de la aplicación — 500 errors, timeouts, servicios caídos — cómo comunicarlo con honestidad sin perder la confianza
- **Errores de conectividad**: cuando el problema es la red del usuario — los offline states, los estados de carga parcial y cómo mantener la funcionalidad cuando no hay internet
- **Estados vacíos**: cuando no hay datos que mostrar — el primer uso, las búsquedas sin resultados, las listas vacías — que son errores de diseño disfrazados de funcionalidad
- **Errores de permisos**: cuando el usuario intenta acceder a algo que no puede — los upgrade prompts, los permission gates y cómo convertir un bloqueo en una oportunidad

**3. Los principios de diseño de mensajes de error**

El copy que transforma la frustración en acción:
- Las cuatro partes de un buen mensaje de error: qué pasó, por qué pasó —cuando es útil—, qué puede hacer el usuario ahora mismo y cómo prevenir que vuelva a ocurrir
- El lenguaje humano: cómo eliminar los códigos de error técnicos, las frases en voz pasiva y el lenguaje que culpa al usuario — los ejemplos de antes y después que mejoran el tono
- La especificidad vs. la genericidad: cuándo vale la pena dar un mensaje específico sobre el error y cuándo el mensaje genérico es suficiente — el coste de mantener mensajes muy específicos
- Error prevention: el diseño que evita el error antes de que ocurra — las validaciones inline, las confirmaciones antes de acciones destructivas y los constraints visuales

**4. Los patrones de UI para estados de error**

Los componentes que el equipo de diseño necesita:
- Toast notifications vs. inline errors vs. full-page errors: cuándo usar cada uno y los criterios de decisión
- El diseño de los empty states: los componentes visuales, el copy y la llamada a la acción que convierten una lista vacía en una oportunidad de engagement
- Loading states y skeleton screens: cómo gestionar la espera percibida y por qué el skeleton screen reduce la frustración del usuario incluso si el tiempo de carga es el mismo
- Error boundaries en la interfaz: cómo contener el error para que no afecte a todo el interfaz — el diseño modular que mantiene funcional lo que no está roto

**5. Los flujos de recuperación**

El camino de vuelta cuando algo sale mal:
- El flujo de recuperación de sesión: cuando el usuario pierde la sesión a mitad de un flujo crítico, cómo recuperar su contexto y no hacerle empezar desde cero
- La recuperación de formularios: cómo preservar el input del usuario cuando ocurre un error para que no tenga que reescribir todo
- Los retry automáticos y manuales: cuándo el sistema debe intentar la operación de nuevo automáticamente y cuándo debe pedir al usuario que lo haga él con un botón claro
- El diseño para la degradación graciosa: cuando una parte del sistema falla, cómo mostrar la experiencia reducida que sigue siendo útil

**6. El testing de los estados de error**

Validar que la experiencia de error funciona antes de que ocurra en producción:
- Cómo incluir los estados de error en el design review: el checklist que asegura que todos los estados posibles están diseñados antes del handoff
- User testing de errores: cómo evaluar si los mensajes de error son comprensibles y las acciones propuestas son seguidas por usuarios reales
- Error analytics: cómo rastrear qué errores están viendo los usuarios, cuántos abandonan el flujo en cada estado de error y cuáles generan más contactos de soporte

**7. El sistema de diseño de errores**

La infraestructura para escalar:
- Los componentes de error en el design system: cómo documentar los patterns de error para que el equipo los use de forma consistente
- Las guías de copy de error: el tono, el vocabulario prohibido y los templates para los mensajes más frecuentes
- Cómo actualizar el sistema de errores cuando el producto evoluciona

Termina con el diseño de los 5 estados de error más críticos de mi producto: el mockup conceptual, el copy exacto y el flujo de recuperación para cada uno.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar los estados de error, los flujos de recuperación y la experiencia en los momentos de fallo que definen la percepción de calidad del producto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en tiempos de crisis',
                'description'      => 'Cuando el cliente quiere cancelar o congelar el proyecto: las técnicas de retención en momentos de incertidumbre económica, los repricing y las concesiones que salvan el contrato sin hundir el margen.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas y retención de clientes con experiencia en entornos de incertidumbre económica. Necesito las estrategias y las técnicas concretas para mantener los contratos, recuperar a los clientes que están a punto de cancelar y seguir generando negocio cuando el mercado es adverso.

**Mi situación:**
[DESCRIBE EL CONTEXTO: tipo de producto o servicio, tickets medios, modelo de contratación —suscripción, proyectos, retainer—, señales que estás viendo en el pipeline o en la cartera de clientes, si hay un contexto macro específico —recesión, crisis sectorial, competencia de precio]

---

Ayúdame a vender y retener en tiempos de crisis:

**1. La mentalidad del comercial en tiempos difíciles**

El ajuste cognitivo antes de las técnicas:
- Por qué las crisis son momentos de oportunidad para los mejores vendedores: los clientes más necesitados de soluciones son los más receptivos a proveedores que entienden su situación
- La tentación del pánico y sus consecuencias: los descuentos preventivos, la sobre-concesión y la comunicación de desesperación que erosiona la credibilidad y el margen
- El diagnóstico honesto del pipeline: cómo evaluar qué oportunidades son realmente viables en el entorno actual y cuáles son wishful thinking — la claridad que permite enfocar la energía
- Cómo reformular el value proposition en términos de retorno y ahorro cuando el cliente está en modo de reducción de costes

**2. La conversación de retención**

Cuando el cliente dice que quiere cancelar o congelar:
- El protocolo de la llamada de retención: quién hace la llamada, cuándo y cómo abrirla para que no sea una negociación de precio sino una conversación sobre valor
- La escucha activa en crisis: las preguntas que revelan la causa real de la cancelación — presupuesto, prioridades cambiadas, resultado insuficiente o insatisfacción con la relación
- Cómo responder a cada causa real: la respuesta a "no tenemos presupuesto" es diferente a la respuesta a "no estamos viendo el ROI" — los scripts para cada escenario
- Las concesiones que salvan el contrato sin destruir el margen: reducciones temporales, pausas de contrato, downgrades de plan, diferimientos de pago — cuándo ofrecer cada una y en qué orden

**3. El repricing en crisis**

Cómo ajustar el precio sin abandonar el posicionamiento:
- Los modelos de repricing que funcionan: descuento temporal con compromiso de plazo, reducción de scope en lugar de precio, pago diferido, success-based pricing
- Cómo presentar el repricing: el framing que mantiene la percepción de valor aunque el precio baje — la diferencia entre un descuento y un ajuste estratégico
- Las guardrails del descuento: el floor por debajo del cual no deberías bajar y cómo mantenerlo cuando el cliente presiona más
- Cómo salir del descuento cuando la crisis pasa: el contrato que incluye la cláusula de recuperación del precio cuando se cumplen ciertas condiciones de negocio

**4. La generación de pipeline en entornos adversos**

Cómo seguir llenando el embudo cuando el mercado se contrae:
- Los segmentos que crecen durante las crisis: qué tipos de clientes tienen más necesidad de tu solución en el entorno actual y cómo enfocar el outreach ahí
- El messaging en crisis: cómo adaptar el pitch para que resuene con un comprador que está bajo presión — foco en ROI, velocidad de retorno y reducción de riesgo
- Las fuentes de referidos: en crisis, los referidos de clientes actuales son el canal más eficiente — cómo activarlos de forma sistemática
- El upsell dentro de la cartera: los clientes actuales que tienen más problemas del que ya resuelves y cómo identificarlos y abordarlos

**5. La negociación bajo presión**

Cuando la conversación de venta se convierte en una negociación dura:
- Cómo anclar la conversación en el valor antes de hablar de precio — el orden que determina el resultado
- Las técnicas de negociación para entornos adversos: el principled negotiation, el good cop/bad cop del comprador, las deadlines artificiales y cómo detectarlas
- Los intercambios que mantienen el margen: qué puedes dar que tenga valor percibido alto para el cliente pero coste real bajo para ti — el acceso anticipado a features, el soporte premium, los casos de éxito
- Cuándo es el momento de no cerrar: los clientes cuyas condiciones harían que el contrato fuera perjudicial incluso en crisis — el valor de saber cuándo rendirse

**6. La comunicación proactiva con la cartera**

El mejor momento para hablar con los clientes en riesgo es antes de que te llamen:
- El check-in de crisis: la llamada proactiva que demuestra que te importa el negocio del cliente más allá del contrato — el tono, el timing y el contenido que diferencia al socio del vendedor
- Los recursos que puedes ofrecer: contenido, comunidad, acceso a tu red, benchmarks del sector — los activos que añaden valor sin coste adicional
- La comunicación sobre tu propia empresa durante la crisis: cómo comunicar que tu empresa es estable y que el cliente puede confiar en que seguirás siendo su proveedor

Termina con los tres conversaciones de retención más difíciles que puedo encontrar en mi situación actual, con el script completo de cómo abrirlas, las objeciones más probables y cómo responderlas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retener clientes que quieren cancelar, generar nuevo negocio en entornos adversos y negociar ajustes de precio que salvan el contrato sin destruir el margen.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product en crisis: decisiones bajo presión',
                'description'      => 'Cuando hay que tomar decisiones de producto rápidas con información incompleta: el framework de crisis, la comunicación con los stakeholders y el playbook que evita que la urgencia destruya la calidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en product management con experiencia en situaciones de alta presión donde hay que tomar decisiones de producto rápidas sin la información perfecta. Necesito el framework y los procesos que me permitan navegar las crisis de producto sin que la urgencia destruya la calidad de las decisiones.

**Mi contexto:**
[DESCRIBE LA SITUACIÓN: el tipo de crisis de producto que estás afrontando o que quieres preparar — un bug crítico que afecta a usuarios, una feature que está generando churn inesperado, una decisión de roadmap urgente por presión competitiva, una crisis de datos o privacidad, etc.]

---

Ayúdame a gestionar la crisis de producto con rigor y rapidez:

**1. El framework de toma de decisiones en crisis**

Cuando no puedes esperar al proceso normal:
- La distinción entre urgencia e importancia en las crisis de producto: qué merece respuesta inmediata, qué puede esperar 24 horas y qué parece urgente pero no lo es
- El sistema de decisiones de crisis: quién decide qué, con qué información mínima y en qué plazo — el framework que evita el caos sin añadir burocracia
- El reversibility test: clasifica cada decisión según si es fácil de revertir o no, y ajusta el nivel de deliberación requerido en consecuencia — las decisiones irreversibles merecen más cuidado aunque haya prisa
- Los sesgos cognitivos que peor funcionan bajo presión: el availability bias, el confirmation bias y el groupthink — cómo mitigarlos cuando el tiempo apremia

**2. El diagnóstico rápido**

Entender el problema antes de actuar:
- El data triage de producto: cómo identificar rápidamente qué datos son relevantes para entender la crisis y cuáles son ruido — las queries que el PM debería poder lanzar en los primeros 30 minutos
- Las hipótesis rápidas: cómo generar 3-5 hipótesis sobre qué está causando el problema y cómo descartarlas rápidamente con datos mínimos
- El mapa de impacto: quién está afectado, cuántos usuarios, en qué magnitude y cuánto tiempo llevan experimentando el problema — las cuatro preguntas que calibran la urgencia real
- Cómo comunicar incertidumbre al equipo: cuando no sabes exactamente qué pasó, qué dices y cómo lo dices para no generar pánico innecesario

**3. Las opciones de respuesta**

Del diagnóstico a las alternativas:
- El menú de intervenciones de producto en crisis: rollback del feature, hotfix, feature flag para desactivar sin deploy, comunicación a usuarios afectados, compensación — cuándo usar cada una
- El árbol de decisión de rollback: los criterios objetivos que determinan si hacer rollback vale la pena considerando el coste técnico, los usuarios que perderían la funcionalidad y el riesgo de volver al estado anterior
- Las soluciones temporales vs. las soluciones permanentes: cuándo una workaround rápida es la respuesta correcta y cómo asegurarse de que no se convierte en arquitectura permanente
- El mínimo viable de fix: cuál es la solución más pequeña que detiene la hemorragia y cuándo es suficiente vs. cuándo necesitas la solución completa

**4. La comunicación durante la crisis de producto**

El PM como eje de coordinación:
- La comunicación con el equipo de ingeniería: cómo facilitar la resolución sin microgestionar — las preguntas correctas, la frecuencia de updates y cómo crear el entorno donde el equipo puede trabajar rápido
- La comunicación con los stakeholders internos: el update ejecutivo que da la información necesaria sin crear alarma adicional, y la cadencia que mantiene informado al liderazgo sin que te interrumpa cada diez minutos
- La comunicación con los usuarios afectados: cuándo comunicar externamente, qué decir, en qué tono y a través de qué canales — las decisiones que el PM tiene que tomar en coordinación con CS y comunicación
- La gestión de las expectativas de tiempo de resolución: cómo dar estimaciones honestas cuando la resolución es incierta

**5. La coordinación multidisciplinar**

El PM como orquestador de la respuesta:
- El war room de producto: cómo organizar el espacio de trabajo —físico o virtual— durante la crisis para que la comunicación sea eficiente sin ser caótica
- Los roles durante la crisis: quién investiga, quién decide, quién comunica y quién coordina — la asignación que evita el solapamiento y los huecos
- Cómo gestionar los diferentes ritmos: el engineering que necesita concentración, el CS que necesita updates frecuentes y el liderazgo que quiere saber cuándo estará resuelto
- La toma de decisiones cuando el equipo no está de acuerdo: el proceso que permite avanzar cuando hay desacuerdo sobre la mejor solución sin crear un conflicto que ralentice más la respuesta

**6. El postmortem de producto**

El aprendizaje que justifica haber pasado por la crisis:
- Cómo organizar el postmortem de producto: la diferencia con el postmortem técnico y qué preguntas adicionales responde el PM
- Las lecciones de proceso: qué podría haberse detectado antes, qué decisión de roadmap o de deuda técnica contribuyó a la crisis y cómo evitar el siguiente
- Las mejoras de resiliencia: los cambios en el producto, en el proceso y en el sistema de alertas que reducen la probabilidad y el impacto de la siguiente crisis
- Cómo comunicar los aprendizajes al equipo de producto de forma que cambien comportamientos, no solo llenen el backlog

**7. La preparación preventiva**

Construir la resiliencia antes de necesitarla:
- El playbook de crisis de producto: el documento que define los escenarios más probables, los roles, los procesos y los canales de comunicación antes de necesitarlos
- Los feature flags y las kill switches: cómo diseñar el producto para que sea posible desactivar features rápidamente sin un deploy de emergencia
- Los runbooks de PM: las guías paso a paso para los tipos de crisis más comunes — degradación de la experiencia, fuga de datos, bug de privacidad, caída de métricas clave

Termina con el plan de las próximas 4 horas para la crisis que describí: qué datos recopilar primero, qué decisiones tomar en qué orden y cómo comunicar el estado al equipo y a los stakeholders.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar las crisis de producto con el framework de decisión, la coordinación del equipo y la comunicación que permiten resolver rápido sin que la urgencia destruya la calidad.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personas en crisis organizacionales',
                'description'      => 'Reestructuraciones, EREs y cambios traumáticos: cómo gestionar el proceso con el máximo respeto por las personas y el mínimo daño a la cultura y a la reputación como empleador.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de personas en situaciones de crisis organizacional con experiencia en reestructuraciones, procesos de reducción de plantilla y transformaciones que generan incertidumbre y dolor en los equipos. Necesito gestionar una situación difícil con el máximo respeto por las personas afectadas y la menor ruptura posible en la cultura y el negocio.

**Mi situación:**
[DESCRIBE EL CONTEXTO: el tipo de proceso —reestructuración, ERE, reorientación estratégica, fusión, cierre de una línea de negocio— el tamaño de la población afectada, el timing, si ya hay información pública o sigue siendo confidencial, qué ha pasado antes de este momento]

---

Ayúdame a gestionar la crisis de personas con integridad y efectividad:

**1. Los principios que no puedes abandonar**

La brújula ética en los momentos más difíciles:
- La dignidad como mínimo irrenunciable: cómo la forma en que tratas a las personas que salen de la organización define para siempre cómo perciben su trabajo allí las que se quedan
- La transparencia apropiada: la diferencia entre la transparencia que genera confianza y la sobreinformación prematura que genera más incertidumbre de la que resuelve
- La equidad del proceso: los criterios de selección objetivos que resisten el escrutinio legal y el moral, y cómo documentarlos de forma que sean defensibles
- El equilibrio entre la velocidad y el cuidado: por qué los procesos que se hacen deprisa a menudo generan más daño a largo plazo, y dónde están los límites reales

**2. La preparación del proceso**

El trabajo previo que determina la calidad de la ejecución:
- El diseño del proceso: el timeline, los hitos legales, los roles y responsabilidades del equipo de RRHH, legal, comunicación y liderazgo durante el proceso
- Los criterios de selección: cómo definir criterios objetivos —roles afectados, perfiles, antigüedad según el caso— que reduzcan la percepción de arbitrariedad y el riesgo legal
- La preparación de los managers: los líderes que van a dar las malas noticias necesitan formación, soporte y un script que les permita hacerlo con dignidad — el briefing que RRHH debe hacer antes del día D
- El simulacro de preguntas difíciles: las preguntas que la persona afectada va a hacer —"¿por qué yo?", "¿qué pasa con mi pensión?", "¿cuándo podré recoger mis cosas?"— y las respuestas preparadas

**3. La conversación de desvinculación**

El momento más difícil del proceso:
- El protocolo de la conversación: el quién, el dónde, el cuándo y el cómo que minimiza el trauma de la persona y del manager que tiene que darle la noticia
- El script de apertura: las primeras palabras que no generan confusión sobre lo que está pasando — por qué la claridad inmediata es más compasiva que el rodeo
- Las reacciones emocionales que el manager puede encontrar: el llanto, la rabia, el silencio, la negación — y cómo estar presente sin ponerse a la defensiva o a prometer lo que no se puede
- Lo que no se puede decir y lo que no se puede omitir: las restricciones legales y las obligaciones de información que el manager debe conocer antes de entrar en la sala

**4. El paquete de salida y el apoyo post-desvinculación**

El tratamiento que define la reputación como empleador:
- Los componentes del paquete: la indemnización legal y la negociada, los beneficios post-salida, las referencias y el outplacement — cómo diseñar un paquete que sea percibido como justo
- El outplacement: qué incluir, qué proveedores tienen más calidad y cómo hacer que las personas realmente lo usen en lugar de olvidarse de él
- El apoyo emocional: los programas de employee assistance que pueden ayudar a las personas afectadas y a los managers que han tenido que dar las malas noticias
- La gestión de la salida operativa: los accesos, los equipos, la transición del conocimiento — cómo gestionar la logística con dignidad y sin que parezca un desalojo

**5. La comunicación con los que se quedan**

Los "survivors" son el activo más valioso y el más ignorado:
- El anuncio interno: el timing, el canal y el mensaje que informa a los que se quedan de forma honesta sin generar pánico adicional
- Las preguntas que los survivors van a hacerse: "¿seré el siguiente?", "¿tiene sentido seguir aquí?", "¿la empresa va bien?" — y cómo responderlas con honestidad aunque no tengas todas las respuestas
- La carga adicional sobre los que se quedan: el trabajo que antes hacían los que se fueron — cómo gestionarlo, compensarlo y comunicarlo
- La reconstrucción del equipo: los rituales de cohesión post-reestructuración que ayudan al equipo a procesar lo que ha pasado y a volver a funcionar con confianza

**6. La gestión legal del proceso**

El marco que protege a la empresa y a las personas:
- Los requisitos legales en España del ERE, el ERTE y los despidos objetivos: los plazos, las notificaciones, la negociación con los representantes de los trabajadores
- La documentación que debe existir: los criterios de selección, las actas de las reuniones, las notificaciones y los acuerdos — la trazabilidad que protege en una posible impugnación
- La confidencialidad antes del anuncio: cómo gestionar el secreto de sumario interno cuando hay personas que necesitan saber pero el círculo no puede ampliarse

**7. El aprendizaje organizacional**

Para que la crisis no se repita:
- La auditoría de las causas: por qué la empresa llegó a este punto — los errores de planificación, las señales que no se leyeron o las circunstancias externas — y qué cambiar para no repetirlo
- La reconstrucción de la confianza: el plan de comunicación post-reestructuración que demuestra que la empresa tiene un camino claro y que las personas que se quedaron hicieron bien en quedarse

Termina con el plan de comunicación para el día en que se anuncie el proceso: el mensaje al equipo directivo, el mensaje a los managers antes de las conversaciones individuales y el comunicado a toda la organización.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar reestructuraciones, EREs y crisis organizacionales con el proceso, la comunicación y el cuidado por las personas que minimizan el daño a la cultura y a la reputación.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de crisis',
                'description'      => 'Cuando el flujo de caja se agota o el negocio entra en territorio peligroso: las palancas de emergencia, la negociación con bancos y proveedores y el plan de viabilidad que recupera la confianza de los stakeholders.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en finanzas corporativas de situaciones especiales y en la gestión financiera de empresas en dificultad. Necesito ayuda para navegar una situación financiera crítica — ya sea que ya estemos en ella o que quiera preparar un protocolo de crisis financiera antes de necesitarlo.

**Mi situación:**
[DESCRIBE EL CONTEXTO: si es una situación activa —runway limitado, covenant breach, problemas de caja, deuda vencida— o si es una planificación preventiva. Incluye el modelo de negocio, el tamaño de la empresa, las fuentes de financiación actuales y los stakeholders financieros principales]

---

Ayúdame a gestionar la crisis financiera:

**1. El diagnóstico de la situación financiera**

Entender exactamente en qué posición se está:
- El cash runway: cómo calcular exactamente cuántos meses de caja quedan considerando el burn rate actual, los cobros previstos y los compromisos de pago ya contraídos
- El análisis de liquidez a 13 semanas: la herramienta que los turnaround professionals usan siempre primero — cómo construirla y leerla para identificar los cuellos de botella de tesorería
- El mapa de obligaciones financieras: los vencimientos de deuda, los pagos de intereses, los covenants y las obligaciones contractuales que no pueden incumplirse sin consecuencias graves
- La distinción entre problema de liquidez y problema de solvencia: si el negocio es fundamentalmente viable pero tiene un problema de timing o si el problema es estructural — las soluciones son completamente diferentes

**2. Las palancas de emergencia de caja**

Las acciones que dan tiempo para ejecutar el plan:
- La gestión agresiva del working capital: acelerar cobros —factoring, confirming inverso, descuento pronto pago—, alargar pagos con la negociación correcta y liberar el stock que se puede convertir en caja
- Las desinversiones de activos: qué activos no estratégicos pueden convertirse en caja rápidamente — vehículos, inmuebles propios, participaciones no core, activos tecnológicos bajo licencia
- La reducción de costes de emergencia: las categorías de coste que pueden cortarse inmediatamente sin destruir la capacidad de generar ingresos — el análisis que diferencia lo esencial de lo prescindible
- Los aplazamientos de pago a la administración: los aplazamientos de IVA, Seguridad Social y IRPF que la AEAT puede conceder y el proceso para solicitarlos antes de que sea demasiado tarde

**3. La negociación con bancos y acreedores**

La conversación más difícil de las finanzas corporativas:
- Cuándo iniciar la conversación: la regla de hierro de hablar con los bancos antes de incumplir un pago o un covenant — el margen de maniobra que te da la proactividad
- El mensaje a los bancos: cómo presentar la situación con honestidad y con un plan — los bancos pueden gestionar problemas, no pueden gestionar sorpresas
- Las herramientas de restructuración de deuda: la ampliación de plazos (extension), la reducción del servicio de deuda (restructuración), el standstill y cuándo cada una es apropiada
- Los covenant waiver y amendment: cómo negociar la dispensa de un covenant incumplido o el ajuste de los términos antes de que el breach sea técnico y el banco tenga opciones que tú no controlas

**4. El plan de viabilidad**

El documento que convierte a los stakeholders de amenaza en aliados:
- La estructura del plan de viabilidad: el diagnóstico, las causas de la crisis, las medidas de estabilización, el plan de recuperación y las proyecciones financieras — lo que bancos y acreedores esperan ver
- La credibilidad del plan: por qué los supuestos conservadores y el escenario de estrés son más persuasivos que el escenario optimista — el plan que los stakeholders financieros creerán
- Los quick wins del plan: las acciones de los primeros 90 días que demuestran que el management es capaz de ejecutar y que el plan no es solo papel
- El modelo financiero integrado: el P&L, el balance y el cashflow que muestra el camino de la situación actual a la viabilidad con los hitos intermedios que permiten hacer seguimiento

**5. Las opciones de financiación de emergencia**

Las fuentes de capital cuando las fuentes habituales no están disponibles:
- Deuda puente: el financiamiento de corto plazo que da tiempo para ejecutar la reestructuración — las fuentes, las condiciones típicas y el coste real
- Ampliación de capital de emergencia: cuándo tiene sentido diluir a los accionistas actuales y cómo estructurar la ronda de rescate
- Los fondos de situaciones especiales: los fondos de distressed debt y los turnaround investors — qué buscan, qué ofrecen y qué piden a cambio
- Las ayudas públicas: los instrumentos de apoyo a empresas en dificultad del ICO, los fondos autonómicos y las líneas europeas — los criterios de elegibilidad y los tiempos de gestión

**6. El marco legal de la insolvencia**

Cuando el problema no puede resolverse solo con caja:
- El preconcurso y el artículo 583 TRLC: cómo usar el escudo de protección de los 3-4 meses para negociar sin presión de ejecución
- El concurso de acreedores: qué es, qué no es y cuándo es la herramienta correcta — el proceso, los plazos y lo que puedes esperar
- Los acuerdos extrajudiciales de pagos: la alternativa para las empresas más pequeñas que el concurso formal
- El papel del administrador concursal y cómo mantener el control de la empresa durante el proceso

**7. La comunicación en la crisis financiera**

El silencio que agrava la situación:
- Qué decirle a los empleados: la información mínima que merecen saber y cómo darla sin destruir la productividad y retener al talento que necesitas para ejecutar el plan
- La comunicación con clientes y proveedores clave: cómo gestionar su confianza durante la incertidumbre para que no aceleren la crisis retirando pedidos o exigiendo pago adelantado
- Los inversores y el consejo: la comunicación de situaciones difíciles a los órganos de gobierno de la empresa — la transparencia que genera confianza aunque las noticias sean malas

Termina con el plan de las próximas 72 horas: las tres acciones concretas que tomaría hoy para estabilizar la situación y ganar tiempo para ejecutar el plan completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Gestionar una crisis de liquidez o solvencia con las palancas de emergencia, la negociación con acreedores y el plan de viabilidad que recupera la confianza de los stakeholders financieros.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal de crisis corporativas',
                'description'      => 'Cuando la empresa enfrenta una demanda colectiva, una investigación regulatoria o un escándalo: la estrategia legal de crisis y la coordinación entre el equipo jurídico y la comunicación corporativa.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho corporativo y gestión de crisis legales con experiencia en situaciones de alta exposición para empresas. Necesito diseñar la estrategia legal para una situación de crisis corporativa que combina exposición legal, regulatoria y reputacional.

**Mi situación:**
[DESCRIBE EL CONTEXTO: el tipo de crisis —demanda colectiva, investigación regulatoria, filtración de datos, escándalo de conducta interna, incumplimiento contractual masivo, accidente con víctimas, irregularidades contables— los hechos conocidos hasta ahora, las partes implicadas y el estado actual del proceso]

---

Ayúdame a gestionar la crisis legal con la estrategia correcta:

**1. La evaluación inicial de la exposición**

El diagnóstico legal que informa todas las decisiones:
- El mapa de responsabilidades: las diferentes teorías de responsabilidad —civil, administrativa, penal— que pueden derivarse de los hechos, quiénes son los sujetos potencialmente responsables y cuál es la exposición máxima en cada escenario
- La investigación interna preliminar: los hechos que necesitas verificar internamente antes de poder diseñar la estrategia — qué documentos revisar, con quién hablar y en qué orden sin contaminar pruebas
- El privilegio legal: qué comunicaciones están protegidas por el secreto profesional en este contexto y cómo asegurar que la investigación interna no genere evidencias que después puedan usarse en contra
- La evaluación del riesgo penal: cuándo involucrar a un penalista desde el principio aunque el asunto parezca civil — las señales de que hay exposición criminal que no se pueden ignorar

**2. La estructura del equipo legal de crisis**

Quién necesitas a tu lado:
- El equipo interno: el papel del general counsel, los límites de su independencia cuando hay riesgo personal para la empresa y cuándo el conflicto de interés requiere externalizar la dirección de la defensa
- Los despachos externos: la selección del despacho especialista según el tipo de crisis — no todos los buenos litigantes son buenos en gestión de crisis regulatorias, y viceversa
- Los expertos independientes: cuándo necesitas un experto forense, un perito de parte, un crisis advisor externo o un former regulator que entienda cómo piensa la autoridad
- La coordinación del equipo: cómo organizar a múltiples despachos con diferentes roles sin que la información se fragmente o las estrategias entren en conflicto

**3. La estrategia con las autoridades regulatorias**

La diferencia entre cooperar y confesar:
- La decisión de cooperar: los factores que determinan si la cooperación activa con el regulador es la estrategia correcta — los beneficios de la reducción de sanción, el riesgo de producir evidencia y los mensajes que envías al mercado
- La gestión del proceso de investigación: cómo responder a los requerimientos de información, cómo gestionar las inspecciones y entrevistas, y cómo mantener el control de la narrativa sin obstruir
- La autodenuncia: cuándo presentarse voluntariamente ante el regulador antes de que llegue la investigación — el cálculo estratégico que en algunos contextos regulatorios puede cambiar completamente el resultado
- La negociación de la sanción: cómo negociar el importe, la tipificación y las medidas de compliance asociadas cuando la infracción está confirmada

**4. La gestión del litigio**

Cuando la crisis se judicializa:
- La estrategia frente a las demandas colectivas: las acciones de clase y los litigios masivos — cómo evaluar si defender caso a caso, si buscar un acuerdo global y cómo gestionar los fondos de litigación que financian a los demandantes
- Las medidas cautelares: cómo defenderse de las medidas urgentes que pueden paralizar operaciones, congelar activos o dañar la reputación antes de que haya sentencia
- El discovery y la producción documental: las obligaciones de conservación de evidencias desde el primer momento en que hay indicio de litigio — el litigation hold que evita responsabilidades adicionales por destrucción de pruebas
- Los acuerdos extrajudiciales: cuándo tiene sentido negociar y cómo estructurar los acuerdos con confidencialidad, sin admisión de responsabilidad y con protección frente a reclamaciones futuras

**5. La coordinación legal-comunicación**

La tensión más difícil de las crisis corporativas:
- El conflicto entre la estrategia legal y la estrategia de comunicación: por qué lo que es bueno legalmente puede ser desastroso para la reputación y cómo encontrar mensajes que sirvan a los dos objetivos
- El privilege vs. transparency: cuándo el silencio recomendado por el abogado destruye más valor reputacional del que protege legalmente — la conversación que hay que tener con el board
- El portavoz en crisis: quién habla, qué puede decir y qué no — el briefing del abogado al portavoz antes de cada aparición pública
- Los comunicados legalmente revisados: cómo hacer que un comunicado de crisis pase por el filtro legal sin que pierda toda su efectividad comunicacional

**6. La protección de las personas**

La crisis que afecta a individuos, no solo a la empresa:
- La separación de intereses: cuándo los intereses de la empresa y los de los directivos o empleados implicados divergen y cómo gestionarlo — el directivo que necesita su propio abogado
- Los whistleblowers y la protección de los testigos internos: las obligaciones legales, los riesgos de represalia y cómo gestionar la crisis interna que genera la denuncia
- El D&O insurance: cómo activarlo, sus límites de cobertura y cuándo la aseguradora puede tener intereses propios que no coinciden con los de la empresa

**7. El cierre de la crisis y el aprendizaje**

Salir del lado correcto:
- Los compliance remediation plans: las medidas que las autoridades suelen exigir como condición del acuerdo — cómo implementarlas con credibilidad y no como teatro de cumplimiento
- La reconstrucción de la reputación legal: cómo trabajar con asociaciones del sector, reguladores y medios especializados para que la empresa sea percibida como un actor responsable post-crisis
- El aprendizaje sistémico: qué cambios en los procesos, en los controles internos y en la cultura de cumplimiento hubieran prevenido la crisis

Termina con el plan de acción para las próximas 48 horas: las decisiones legales que no pueden esperar, los documentos que hay que preservar inmediatamente y las personas que necesitan hablar con un abogado antes de hablar con nadie más.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar la estrategia legal en una crisis corporativa con investigaciones regulatorias, demandas masivas o escándalos, coordinando la defensa legal con la comunicación corporativa.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de crisis con clientes',
                'description'      => 'Cuando un cliente amenaza con cancelar o escalar públicamente: el protocolo de escalación, la conversación de salvamento y el plan de recuperación que convierte una crisis en una relación más sólida.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success y en la gestión de crisis con clientes con experiencia en situaciones donde la relación está en riesgo de ruptura. Necesito el framework y los scripts concretos para gestionar clientes en crisis — los que están a punto de cancelar, los que han sufrido un fallo grave de producto o servicio, o los que amenazan con escalar públicamente.

**Mi situación:**
[DESCRIBE LA CRISIS: el tipo de problema —fallo técnico grave, promesas incumplidas, mal resultado del proyecto, conflicto con el equipo de servicio, cancelación inminente— quién es el cliente, cuánto ARR está en juego y cuál es el estado actual de la relación]

---

Ayúdame a gestionar la crisis con el cliente:

**1. El protocolo de escalación**

El proceso que activa la respuesta correcta antes de que sea demasiado tarde:
- Los niveles de escalación: las señales que determinan si el problema lo puede gestionar el CSM, si necesita al manager, si necesita al VP de CS o si requiere un executive sponsor
- El tiempo de respuesta según la severidad: las SLAs internas de escalación que el equipo debe respetar para que el cliente no sienta que su problema no es prioritario
- La notificación interna: cómo alertar al equipo correcto sin generar alarma innecesaria — el canal, el formato y la información mínima que necesita cada nivel
- El caso de cliente en riesgo: el registro que asegura que todos los que van a participar en la gestión de la crisis tienen el contexto necesario para actuar coordinados

**2. La primera respuesta**

Las primeras horas después de que el cliente escala:
- El acuse de recibo: la comunicación que confirma que el problema ha sido recibido, que se está tomando en serio y que hay un responsable — sin prometer soluciones que no puedes garantizar
- La toma de contacto del executive sponsor: cuándo y cómo el liderazgo de la empresa debe contactar directamente con el cliente — el gesto que cambia el tono de la conversación
- La investigación urgente: qué necesitas saber en las primeras horas para entender el problema antes de proponer una solución — las preguntas que el cliente no está esperando y que demuestran que entiendes su negocio
- Lo que no debes hacer: los errores más comunes en la primera respuesta —la defensividad, la justificación excesiva, las promesas no realistas— y cómo evitarlos

**3. La conversación de salvamento**

El diálogo más importante de la relación:
- La apertura: cómo comenzar la conversación de recuperación — el reconocimiento del impacto sin entrar en la discusión de culpas antes de entender completamente la situación del cliente
- La escucha activa en modo crisis: las preguntas que revelan el impacto real en el negocio del cliente, más allá del problema técnico o de servicio — cuánto les ha costado el fallo en términos de negocio
- La propuesta de recuperación: qué ofrecer y en qué orden — primero la solución al problema, luego la compensación por el daño, y finalmente el plan para que no vuelva a ocurrir
- El manejo de la rabia: cómo mantenerse tranquilo y productivo cuando el cliente está furioso — las técnicas que desescalan sin ceder en lo que no se puede ceder

**4. El plan de recuperación**

La hoja de ruta que reconstruye la confianza:
- Los quick wins: las acciones que puedes completar en las primeras 48-72 horas para demostrar que el compromiso es real — las victorias tempranas que cambian el tono
- El plan de seguimiento estructurado: la cadencia de check-ins, los hitos de mejora verificables y el proceso de reporting que mantiene al cliente informado del progreso
- Los KPIs de recuperación: cómo saber si la relación se está estabilizando — el NPS, el engagement con el producto, la frecuencia de contacto y las señales relacionales
- El executive business review post-crisis: la reunión de cierre del plan de recuperación que convierte el episodio en un punto de inflexión positivo en la relación

**5. La compensación y las concesiones**

Lo que ofreces y lo que no debes ofrecer:
- Los tipos de compensación que funcionan: el crédito de servicio, la extensión del contrato, el descuento en la renovación, el acceso a features premium — cómo elegir según el impacto real del fallo
- El framing de la compensación: cómo presentarla como un gesto de responsabilidad y no como una admisión de culpa que abre la puerta a reclamaciones adicionales
- Los límites de la compensación: cuánto es apropiado según el impacto real del fallo y el valor del cliente, y cómo mantener el límite cuando el cliente pide más
- Las concesiones que crean precedente: las que otros clientes van a conocer y van a pedir también — cómo ser generoso con este cliente sin crear expectativas que no puedes sostener

**6. La amenaza de escalación pública**

Cuando el cliente amenaza con redes sociales, prensa o reseñas negativas:
- Cómo responder a la amenaza sin capitular ni escalar: el mensaje que reconoce la frustración sin ceder a la extorsión reputacional
- El protocolo de monitorización: las alertas que detectan si el cliente ha publicado algo y permiten responder rápidamente
- La respuesta pública a reseñas negativas: el tono, la información y la llamada a la acción que convierten una reseña negativa en una demostración de que la empresa cuida a sus clientes
- Cuándo involucrar al equipo legal: las amenazas que superan la gestión de CS y requieren asesoramiento sobre difamación, competencia desleal o incumplimiento de NDA

**7. El aprendizaje y la mejora sistémica**

Para que la próxima crisis sea menos probable:
- El análisis de causa raíz de la crisis del cliente: qué falló en el producto, en el proceso, en la comunicación o en la gestión de expectativas — el postmortem de CS
- Las mejoras del proceso: los cambios en el onboarding, en la comunicación proactiva y en el health scoring que deberían haber detectado la crisis antes
- El caso de estudio interno: cómo documentar y compartir los aprendizajes con el equipo de CS para que mejore la capacidad colectiva de gestionar situaciones similares

Termina con el plan de las próximas 24 horas para la crisis que describí: los mensajes que enviaría hoy, las conversaciones que necesito tener y la propuesta de recuperación que presentaría en la primera reunión con el cliente.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar crisis con clientes en riesgo de cancelación o escalación pública con el protocolo, los mensajes y el plan de recuperación que convierte la crisis en una relación más sólida.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Resiliencia del negocio freelance',
                'description'      => 'Cuando el proyecto principal se cancela o el cliente no paga: el fondo de emergencia, la diversificación de clientes y las estrategias de recuperación que los freelancers más resilientes practican antes de necesitarlas.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor de negocio especializado en ayudar a freelancers y consultores independientes a construir negocios resilientes que sobreviven a los shocks inevitables del trabajo por cuenta propia. Necesito diseñar la infraestructura de resiliencia de mi negocio freelance antes —o durante— una crisis.

**Mi situación:**
[DESCRIBE TU CONTEXTO: si es una crisis activa —cancelación repentina, impago, pérdida del cliente principal— o si es planificación preventiva. Incluye tu tipo de servicio, tu nivel de ingresos habitual, tu situación financiera actual y tus dependencias más críticas]

---

Ayúdame a construir la resiliencia de mi negocio freelance:

**1. El diagnóstico de vulnerabilidad**

Conocer los puntos débiles antes de que fallen:
- La concentración de ingresos: si un solo cliente representa más del 30-40% de tus ingresos, tienes un riesgo de concentración que puede ser fatal si ese cliente cancela o reduce el encargo
- La dependencia de canal: si todo tu negocio viene de un solo canal —una plataforma, un tipo de referido, una red— la vulnerabilidad es alta porque los cambios en ese canal te afectan desproporcionadamente
- El fondo de emergencia: cuántos meses de gastos cubre tu fondo de reserva actualmente y cuántos deberías tener para sentirte seguro según tu volatilidad histórica de ingresos
- Los compromisos financieros fijos: los gastos que tienes que pagar independientemente de si tienes ingresos — el alquiler, los préstamos, los seguros — y cuánto tiempo puedes cubrirlos con tus ahorros actuales

**2. La gestión de la crisis inmediata**

Si ya estás en una crisis, las acciones de las primeras 72 horas:
- El triage financiero: con los ingresos que tienes hoy, cuánto tiempo tienes antes de que la situación se vuelva crítica — el cálculo honesto que informa todas las decisiones
- La activación del pipeline latente: los contactos, los proyectos en conversación y los clientes pasados que podrían tener trabajo ahora — la lista que priorizas para el outreach de los próximos días
- La reducción de gastos de emergencia: los gastos no esenciales que puedes eliminar inmediatamente sin afectar la capacidad de generar ingresos
- La comunicación con los acreedores: si tienes compromisos financieros que no puedes cubrir, cuándo y cómo comunicarlo —antes de fallar el pago— para mantener la credibilidad

**3. El fondo de emergencia del freelancer**

La base de la resiliencia financiera:
- Cuánto es suficiente: la regla general de 3-6 meses de gastos y por qué para el freelancer la cifra correcta depende de la volatilidad histórica de sus ingresos — cómo calcular el número correcto para tu caso
- Dónde guardar el fondo: las cuentas remuneradas o los fondos monetarios que generan algo de rentabilidad sin sacrificar la liquidez inmediata
- La separación entre el fondo de emergencia y el dinero para impuestos: el error que cometen muchos freelancers de mezclar reservas — el sistema de cuentas que evita la confusión
- Cómo reconstruir el fondo después de usarlo: el plan de ahorro sistemático que repone las reservas sin que el proceso sea doloroso

**4. La diversificación de clientes e ingresos**

El antídoto contra la concentración:
- El objetivo de diversificación: cuántos clientes activos y qué distribución máxima de ingresos por cliente — la regla del 20% que muchos freelancers expertos siguen
- Cómo construir el pipeline diversificado sin sacrificar la especialización: la diferencia entre diversificar clientes y diluir el posicionamiento — puedes servir a muchos clientes del mismo perfil sin depender de ninguno
- Los ingresos pasivos o semi-pasivos para el freelancer: los productos digitales, los cursos, las licencias de templates o los contenidos de pago que generan ingresos cuando no estás trabajando activamente
- Los retainers y los contratos de largo plazo: cómo conseguir más trabajo de tipo retainer que reduce la volatilidad de los ingresos mensuales

**5. El seguro del freelancer**

La protección que la mayoría ignora hasta que la necesita:
- El seguro de responsabilidad civil profesional: por qué es esencial si das asesoramiento o produces trabajo que el cliente usa en su negocio, cómo elegirlo y cuánto cuesta
- El seguro de enfermedad e incapacidad: la cobertura que sustituye los ingresos si no puedes trabajar temporalmente — la laguna más grande en la protección del freelancer español
- El seguro de impago: si trabajas con clientes grandes o en proyectos de ticket alto, las soluciones de factoring con seguro de crédito que protegen contra los impagos
- La cotización como autónomo y la cobertura de la Seguridad Social: lo que cubre y lo que no, y cómo complementarla con productos privados

**6. Los contratos que protegen el negocio**

La prevención legal de las crisis más comunes:
- La cláusula de cancelación: cómo redactar el kill fee que te compensa si el cliente cancela el proyecto a mitad — el porcentaje y el preaviso que son razonables y ejecutables
- Los plazos de pago y los intereses de demora: las condiciones que reducen el riesgo de impago y aceleran el cobro cuando el cliente retrasa
- El pago anticipado: cómo normalizar el cobro de un porcentaje antes de empezar el trabajo — la práctica que protege contra la cancelación y el impago y que la mayoría de clientes aceptan sin problemas
- La propiedad intelectual condicionada al pago: cómo redactar la cláusula que mantiene los derechos de autor hasta que el cliente ha pagado el 100% del proyecto

**7. La recuperación y el rebote**

Después de la crisis, volver más fuerte:
- El análisis de la crisis: qué vulnerabilidad explotó la crisis y qué habrías necesitado tener en su lugar — el aprendizaje que convierte el golpe en protección futura
- El reposicionamiento post-crisis: si la crisis ha revelado que tu modelo de negocio tiene un problema estructural, cómo aprovechar el momento de reinvención para cambiar lo que necesitas cambiar
- La red de apoyo entre freelancers: las comunidades y los grupos de pares que te dan acceso a trabajo en momentos de escasez, a consejos prácticos en crisis y a la perspectiva que es difícil mantener cuando trabajas solo

Termina con el plan de los próximos 30 días: las tres acciones concretas que voy a tomar para mejorar la resiliencia de mi negocio, con los plazos y los criterios de éxito de cada una.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la resiliencia financiera y operativa del negocio freelance para sobrevivir a los shocks inevitables: impagos, cancelaciones y sequías de proyectos.',
                'vote_score'       => 41,
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
