<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills168Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión del cambio en rebranding',
                'description'       => 'Lidera el cambio de marca dentro de la organización: la comunicación interna, la transición de activos y la gestión de la resistencia cuando el equipo tiene apego a la marca anterior.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director de marketing o consultor de marca con experiencia liderando procesos de rebranding en organizaciones donde el cambio de marca no es solo un ejercicio de diseño sino un proceso de gestión del cambio que involucra a personas con apego emocional a la marca anterior, clientes que conocen la marca actual y stakeholders con agendas distintas.

Contexto de mi rebranding:
- Empresa y sector: [describe la empresa y su sector]
- Razón del rebranding: [fusión o adquisición, cambio de posicionamiento estratégico, marca desactualizada, expansión internacional, cambio de nombre, rediseño de identidad visual]
- Alcance del cambio: [cambio de nombre completo, rediseño visual manteniendo el nombre, cambio de identidad visual manteniendo el posicionamiento, rebranding total]
- Antigüedad de la marca actual y reconocimiento: [cuántos años tiene la marca y cuánto la conocen clientes y mercado]
- Recursos del equipo interno: [si tienes equipo de diseño interno, si trabajas con agencia, si el proceso ya está en marcha]
- Principal resistencia interna identificada: [quiénes se resisten y por qué]
- Timeline para el lanzamiento externo: [cuánto tiempo tienes]

**Parte 1 — Por qué el rebranding fracasa más por gestión interna que por calidad del diseño**
Explica las razones sistémicas por las que los rebrandings bien ejecutados desde el punto de vista creativo fracasan en la implementación:
- El equipo que no adopta la nueva marca porque nadie le explicó por qué cambiaba
- Los materiales de marketing que no se actualizan por falta de proceso claro
- El servicio de atención al cliente que sigue mencionando la marca antigua seis meses después del lanzamiento
- La resistencia del equipo fundador o de los empleados con mayor antigüedad que sienten que la marca antigua era "suya"
- Los clientes que se confunden o se sienten traicionados cuando la comunicación del cambio es deficiente

**Parte 2 — La comunicación interna antes del lanzamiento**
El proceso de comunicación interna que genera adopción antes de que la marca nueva sea pública:
- Quién debe saber primero: el equipo de liderazgo, los managers, el equipo de cara al cliente, todos simultáneamente o en cascada
- La narrativa del "por qué": explicar el cambio de marca en términos de estrategia y futuro, no de estética. Los empleados que entienden el "por qué" se convierten en embajadores; los que solo ven el nuevo logo se convierten en escépticos
- El proceso de co-creación controlada: cómo involucrar a partes del equipo en el proceso para generar ownership sin perder el control del proceso creativo
- La gestión de las filtraciones: cómo manejar el riesgo de que el rebranding se filtre antes del lanzamiento oficial

**Parte 3 — La transición de activos: el proceso más complejo**
El inventario de todos los activos que deben actualizarse y el proceso para gestionarlos:
- **Activos digitales**: web, perfiles de redes sociales, email signatures, plantillas de email, app stores, metadatos SEO, dominios
- **Activos físicos**: tarjetas de visita, papelería, señalética, packaging, uniformes, vehículos de empresa
- **Activos legales**: marcas registradas, contratos con el nombre anterior, dominios
- **Activos de contenido**: el archivo de piezas de contenido con el antiguo branding que siguen circulando

El plan de transición priorizado: qué activos actualizar el día del lanzamiento, cuáles en los primeros 30 días, cuáles pueden esperar. La regla del 80/20: identificar los activos de mayor visibilidad y actualizarlos primero.

**Parte 4 — La comunicación externa del cambio**
La estrategia de comunicación a clientes, partners y medios:
- El timing: cuándo comunicar a los clientes más estratégicos antes del lanzamiento general
- El mensaje central: cómo explicar el cambio sin generar confusión sobre si es la misma empresa y sin crear incertidumbre sobre el futuro
- Los canales: email directo a clientes, comunicado de prensa, redes sociales, web con landing de transición
- Las FAQ: las preguntas que los clientes van a hacer y las respuestas preparadas antes de que pregunten
- La gestión de las respuestas negativas: cómo manejar los comentarios de clientes o comunidad que sienten nostalgia por la marca anterior

**Parte 5 — Los KPIs del rebranding**
Cómo medir si el rebranding ha tenido éxito más allá de si el diseño gusta:
- La coherencia de implementación: porcentaje de activos actualizados en cada fase
- El reconocimiento de marca: si el nuevo nombre/logo genera el mismo o mayor reconocimiento que el anterior (encuestas de marca)
- El impacto en el negocio: si el rebranding afecta a la conversión, a la retención o a la capacidad de contratar talento
- El Net Promoter Score del propio rebranding con clientes y empleados

**Entregable**
Para mi rebranding específico, diseña: el plan de comunicación interna por fases, el inventario priorizado de activos a actualizar con el timeline, el mensaje central para la comunicación externa y el plan de gestión de las tres principales resistencias que anticipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Liderar la gestión del cambio en un proceso de rebranding garantizando la adopción interna y la coherencia externa',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Migración de sistemas legacy',
                'description'       => 'Lidera la migración de sistemas antiguos a tecnología moderna: las estrategias (big bang vs. strangler fig), los riesgos y el plan de rollback que permite dormir tranquilo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como engineering manager o architect con experiencia liderando migraciones de sistemas legacy en producción, que ha aprendido que la mayor parte del riesgo en estos proyectos no está en la tecnología nueva sino en la complejidad del sistema existente, la dependencia de comportamientos no documentados y la presión de los stakeholders por fechas de entrega que ignoran la deuda técnica acumulada.

Contexto de mi migración:
- Sistema a migrar: [describe el sistema legacy: lenguaje, framework, base de datos, antigüedad aproximada]
- Sistema destino: [tecnología objetivo, si ya está definida]
- Razón de la migración: [soporte EOL, rendimiento, escalabilidad, coste de mantenimiento, deuda técnica, integración con otros sistemas]
- Criticidad del sistema: [si es crítico para el negocio, cuántos usuarios afecta, si puede tener downtime]
- Estado de la documentación: [bien documentado, documentación parcial, sin documentación pero con personas que lo conocen, sin documentación y sin personas que lo recuerden]
- Tamaño del equipo y experiencia: [cuántas personas, si el equipo conoce el sistema legacy, si tiene experiencia con el sistema destino]
- Timeline que tienen los stakeholders en mente: [el plazo que han comunicado, si es realista según tu criterio]

**Parte 1 — El diagnóstico del sistema legacy**
Antes de diseñar la estrategia de migración, el trabajo de comprensión del sistema existente que determina si la migración es viable con el timeline y los recursos disponibles:
- El mapa de dependencias: identificar todos los sistemas que dependen del legacy y todos los sistemas de los que el legacy depende
- El inventario de comportamientos no documentados: los casos esquina, las lógicas de negocio enterradas en el código, los efectos secundarios que nadie esperaría encontrar en el nombre de la función
- La cobertura de tests: si no hay tests, la migración sin tests es una reescritura que cambia el comportamiento sin saberlo
- Las integraciones externas: las APIs externas, los webhooks, los sistemas de terceros que dependen del comportamiento actual del sistema

**Parte 2 — Las estrategias de migración**
Las principales estrategias y cuándo elegir cada una:

**Big Bang:**
Reemplazar el sistema completo en un evento único. Cuándo tiene sentido (sistemas pequeños, downtime aceptable, equipo con control completo del sistema), los riesgos (si falla, no hay vuelta atrás fácil) y cómo mitigarlos (entorno de prueba que replica producción, rollback plan, migración en horario de baja actividad).

**Strangler Fig Pattern:**
Migrar el sistema por partes, desviando progresivamente el tráfico del sistema antiguo al nuevo hasta que el legacy quede vacío y se pueda retirar. La metáfora de la higuera estranguladora de Martin Fowler. Cuándo tiene sentido (sistemas grandes, downtime inaceptable, migración de largo plazo) y cómo implementarlo (el API Gateway o proxy que enruta el tráfico, la convivencia de ambos sistemas durante la transición).

**Branch by Abstraction:**
Introducir una capa de abstracción que oculta el sistema legacy, implementar el nuevo sistema detrás de la abstracción y luego eliminar el legacy. Cuándo es la opción correcta frente al Strangler Fig.

**Database-first vs. Application-first:**
Si migrar la base de datos antes de la aplicación o al revés, y los problemas de cada enfoque (schemas duales, sincronización bidireccional, doble escritura).

**Parte 3 — El plan de rollback**
El plan de rollback es lo que permite tomar riesgos calculados: si sabes exactamente cómo volver atrás, puedes avanzar con confianza. Explica:
- Los checkpoints de rollback: en qué momentos del proceso tienes la capacidad de volver al estado anterior sin pérdida de datos
- El runbook de rollback: los pasos exactos, en el orden exacto, para revertir la migración en cada checkpoint
- Los datos: cómo garantizar que los datos escritos en el nuevo sistema durante la migración se preservan o se migran de vuelta al legacy si hay rollback
- Las pruebas del rollback: por qué el plan de rollback debe probarse antes de la migración, no después

**Parte 4 — La gestión de los datos**
La migración de datos es frecuentemente el componente más complejo y más arriesgado:
- La estrategia de migración de datos: big bang de datos vs. migración incremental con sincronización
- La validación de los datos migrados: cómo verificar que los datos en el nuevo sistema son equivalentes a los del legacy (conteos, checksums, validaciones de negocio)
- La doble escritura: cuándo escribir simultáneamente en el sistema legacy y en el nuevo y los problemas de consistencia que genera
- Los datos que no migran limpiamente: los formatos obsoletos, los datos corruptos, las relaciones inconsistentes que llevan años en el legacy

**Parte 5 — La comunicación con stakeholders**
La migración de un sistema legacy es un proyecto de ingeniería que los stakeholders no técnicos tienden a infravalorar. Explica:
- Cómo comunicar el riesgo real sin alarmar innecesariamente
- Por qué los timelines de migración legacy casi siempre se alargan y cómo comunicarlo proactivamente
- Las métricas de progreso que tienen sentido para un stakeholder no técnico: porcentaje de endpoints migrados, porcentaje de tráfico en el nuevo sistema, reducción de incidencias en producción

**Entregable**
Para mi migración específica, diseña: la estrategia de migración recomendada con la justificación, el plan de fases con los hitos principales, el plan de rollback para la primera fase crítica y las tres señales de alerta que deben pausar la migración inmediatamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificar y ejecutar la migración de sistemas legacy con riesgo controlado y plan de rollback sólido',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión del cambio en rediseño de producto',
                'description'       => 'Lidera el rediseño de un producto existente sin perder a los usuarios actuales: la comunicación del cambio, el beta testing y la transición que minimiza el churn por cambio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como product designer o design lead con experiencia en el rediseño de productos con bases de usuarios establecidas, que ha aprendido que el rediseño técnicamente brillante que genera churn masivo por no gestionar correctamente la transición no es un éxito de diseño sino un fracaso de producto.

Contexto de mi rediseño:
- Producto que se va a rediseñar: [tipo de producto digital, qué hace, en qué plataforma]
- Alcance del rediseño: [rediseño visual manteniendo la UX, rediseño completo de flujos, nueva arquitectura de información, cambio de paradigma de interacción]
- Base de usuarios actual: [número de usuarios activos, si son de pago, perfil general]
- Razón del rediseño: [deuda de UX acumulada, cambio de posicionamiento, nueva funcionalidad que requiere reestructurar, cambio tecnológico]
- Señales de resistencia al cambio que anticipo: [usuarios que llevan años con el producto, flujos muy memorizados, community vocal en redes sociales o foros]
- Timeline del proyecto: [cuánto tiempo tienes para diseñar, testear y lanzar]

**Parte 1 — Por qué los rediseños de producto generan resistencia aunque sean mejores**
Explica la psicología del cambio en productos digitales:
- El efecto de dotación (endowment effect): los usuarios valoran más lo que ya tienen aunque sea objetivamente peor que la alternativa
- El coste del reaprendizaje: incluso una mejora tiene un coste de transición (reaprender dónde está todo, cambiar los flujos memorizados) que los usuarios sienten como una pérdida
- El cambio como señal de incertidumbre: si el producto que uso cambia mucho, ¿seguirá siendo el producto que necesito?
- Los usuarios vocales vs. los usuarios silenciosos: los que más protestan en Twitter son frecuentemente los menos representativos de la mayoría de usuarios

**Parte 2 — El proceso de rediseño que minimiza el riesgo**
El proceso de diseño que incorpora la gestión del cambio desde el principio:
- La investigación de los flujos críticos: identificar los tres o cuatro flujos que los usuarios realizan con más frecuencia y que deben perturbarse lo mínimo posible
- El principio de continuidad: mantener las metáforas, el lenguaje y los patrones de interacción siempre que sea posible, cambiando solo lo que tiene razón de ser
- Los flujos de navegación alternativos: cuando un flujo cambia radicalmente, ofrecer durante un periodo de transición el acceso tanto por el camino nuevo como por el anterior
- El diseño de la onboarding de cambio: tratar a los usuarios existentes como usuarios que necesitan ser re-onboardeados en la nueva versión, no como usuarios que ya saben cómo funciona el producto

**Parte 3 — El beta testing como herramienta de gestión del cambio**
El beta testing que sirve tanto para validar el diseño como para gestionar el cambio:
- La selección de los beta users: usuarios con distintos niveles de experiencia con el producto, distintos casos de uso y distinto nivel de engagement con la comunidad
- El feedback estructurado: la diferencia entre el beta user que dice "no me gusta" y el que dice "no encuentro la función X que antes estaba en Y" son datos completamente distintos
- Los evangelizadores tempranos: cómo convertir a los beta users que lo adoptan bien en embajadores del cambio ante la comunidad
- El NPS del rediseño: medir la aceptación del cambio, no solo la usabilidad del nuevo diseño

**Parte 4 — La comunicación del cambio**
La comunicación que prepara a los usuarios para el cambio antes de que lo encuentren sin avisar:
- El anuncio previo: cuándo comunicar que viene un rediseño y qué nivel de detalle compartir
- El changelog visual: un recurso que muestra qué ha cambiado, dónde está ahora lo que antes estaba en otro sitio y qué hay de nuevo
- Los tooltips de transición: elementos en la propia interfaz que guían al usuario en los primeros usos de la nueva versión
- Las sesiones de Q&A: webinars o posts en la comunidad donde el equipo responde preguntas sobre el rediseño

**Parte 5 — La gestión del churn por cambio**
Los usuarios que abandonan el producto a causa del rediseño son el indicador más claro de que la gestión del cambio ha fallado:
- El monitoreo de los indicadores de riesgo durante los primeros 30 días: la caída en la frecuencia de uso, el aumento del tiempo en soporte, la caída en las funciones que antes usaban más
- El proceso de outreach proactivo a usuarios en riesgo: identificarlos por comportamiento y contactarlos antes de que cancelen
- La opción de la versión anterior: en qué casos tiene sentido ofrecer acceso temporal a la versión anterior y por qué esto reduce el churn sin detener la adopción del nuevo diseño

**Entregable**
Para mi rediseño, diseña: el plan de comunicación del cambio (qué comunicar, cuándo y por qué canal), el proceso de beta testing con los criterios de selección de beta users y las métricas de aceptación que determinan si estamos listos para el lanzamiento general, y el plan de contingencia para los primeros 30 días post-lanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar la transición de un rediseño de producto para minimizar el churn y maximizar la adopción',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Transformación del equipo de ventas',
                'description'       => 'Lidera el cambio cuando el equipo de ventas debe adoptar nuevos procesos, herramientas o estrategias: la resistencia al cambio en ventas y las técnicas que aceleran la adopción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director de ventas o VP of Sales con experiencia liderando transformaciones del equipo de ventas: desde la implantación de un CRM que el equipo evita hasta el cambio de metodología de venta que los top performers sienten como una amenaza a su forma de operar.

Contexto de mi transformación:
- El cambio que quiero implementar: [nuevo CRM, nueva metodología de venta (SPIN, Challenger, MEDDIC), nueva estrategia de segmento, nueva estructura de territories, cambio de compensación, adopción de herramientas de IA para ventas]
- Tamaño y perfil del equipo: [número de vendedores, ratio de seniority, cuánto tiempo llevan en la empresa]
- La resistencia principal que anticipo o ya estás viviendo: [los top performers que no quieren cambiar su método, los vendedores que no actualizan el CRM, el equipo que dice que el nuevo proceso les quita tiempo de venta]
- La razón del cambio: [resultado de negocio que justifica la transformación]
- Tu posición: [nuevo VP que entra a hacer el cambio, director interno que ya conoce el equipo, otro]
- El plazo en que los stakeholders esperan ver resultados: [timeline de la transformación]

**Parte 1 — Por qué la resistencia al cambio en ventas es diferente**
Explica las razones específicas por las que los equipos de ventas son particularmente resistentes al cambio:
- La identidad profesional ligada al método: el vendedor senior que lleva diez años haciendo las cosas de una forma y siente que el nuevo proceso cuestiona por qué ha tenido éxito
- El miedo a perder lo que funciona: si el equipo ya cumple el cuota, ¿por qué cambiar? El riesgo percibido del cambio supera el beneficio prometido
- La cultura de la autonomía: los mejores vendedores son personas con alta autonomía que han desarrollado su propio sistema y resisten la estandarización
- El cinismo acumulado: si el equipo ha vivido antes cambios de metodología o herramienta que no duraron, la credibilidad del nuevo cambio empieza en negativo

**Parte 2 — La estrategia de adopción del cambio**
El proceso que maximiza la adopción sin sacrificar el rendimiento durante la transición:

**Involucrar antes de imponer:**
Los vendedores que participan en el diseño del nuevo proceso lo adoptan mucho más que los que lo reciben como una orden. Cómo incorporar la voz del equipo en el diseño del cambio sin perder el control de la dirección.

**Los early adopters como agentes de cambio:**
Identificar los dos o tres vendedores influyentes que están abiertos al cambio, darles soporte extra y convertirlos en referentes. Un colega que dice "yo lo he probado y funciona" convence más que el director que dice "esto es lo nuevo".

**El piloto antes del rollout:**
Implementar el cambio con un subgrupo pequeño, medir resultados, ajustar y luego escalar. El piloto también sirve para generar los casos de éxito que necesitas para convencer al resto del equipo.

**Parte 3 — La formación que genera adopción real**
La diferencia entre la formación que el equipo olvida al salir de la sala y la que cambia los comportamientos:
- El training just-in-time: formar en el momento en que el vendedor necesita la habilidad, no meses antes
- El role-playing y la práctica deliberada: los vendedores aprenden haciendo, no escuchando
- El coaching de adopción: el manager que refuerza el nuevo comportamiento en cada 1:1 durante los primeros 90 días
- Las métricas de adopción del proceso: medir si el equipo está siguiendo el proceso, no solo si está cumpliendo los resultados (porque en el corto plazo puede seguir cumpliendo sin adoptar)

**Parte 4 — Los top performers: el reto más delicado**
Los top performers son los más resistentes al cambio y los que más se deben gestionar con cuidado:
- Por qué imponer el mismo proceso a un top performer que al resto puede ser contraproducente (y cuándo hay que hacerlo de todas formas)
- La conversación honesta: "Tu forma de vender funciona, y esta transformación va a hacer que funcione todavía mejor, y aquí está la evidencia"
- El caso en que el top performer genuinamente no necesita el cambio vs. el caso en que está saboteando el proceso del equipo por razones personales
- El coste de perder a un top performer por una mala gestión del cambio y cómo calcular si el riesgo justifica la presión

**Parte 5 — Las métricas de la transformación**
Cómo medir si la transformación está funcionando antes de que los resultados de ventas lo confirmen (porque los resultados de ventas tienen un lag):
- La adopción del proceso: porcentaje del equipo que completa cada etapa del proceso correctamente en el CRM
- La calidad del pipeline: mejora en la tasa de conversión por etapa como señal de que la metodología está funcionando
- El tiempo de rampa de los nuevos vendedores: si el nuevo proceso acelera la rampa, es una señal clara de que el cambio aporta valor

**Entregable**
Para mi transformación específica, diseña: el plan de adopción en 90 días (con hitos y métricas), el script de la conversación con los top performers más resistentes y el dashboard de métricas de adopción que usaré para hacer seguimiento semanal con los managers.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Liderar la adopción de nuevos procesos o herramientas en un equipo de ventas con resistencia al cambio',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión del cambio desde producto',
                'description'       => 'El PM que lidera la adopción de cambios significativos en el producto: la comunicación de deprecaciones, los periodos de transición y la gestión del feedback negativo al cambio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como product manager senior con experiencia en la gestión de cambios significativos en productos con bases de usuarios establecidas, que ha aprendido que la mayor parte del trabajo de un PM en un cambio grande no está en la decisión de qué cambiar sino en cómo gestionarlo para que los usuarios lo adopten y el negocio no sufra en la transición.

Contexto de mi cambio de producto:
- El cambio que voy a implementar: [deprecación de una funcionalidad, cambio de modelo de precios, reestructuración de la navegación, cambio de API, eliminación de un producto dentro del portafolio, migración forzada a una nueva versión]
- El impacto estimado en los usuarios: [número de usuarios afectados, tipo de usuario, si son de pago o freemium]
- La razón del cambio: [por qué es necesario desde la perspectiva del producto o del negocio]
- El timeline disponible: [cuánto tiempo tienes antes de que el cambio sea irreversible o necesario]
- La resistencia anticipada: [si ya hay señales de que usuarios o stakeholders internos van a resistir]
- Los canales de comunicación disponibles: [email, in-app notifications, blog, redes sociales, soporte, comunidad]

**Parte 1 — Los tipos de cambio de producto y su complejidad de gestión**
No todos los cambios de producto requieren el mismo nivel de gestión del cambio. Explica el mapa de complejidad:
- Los cambios invisibles (que el usuario no percibe aunque sean grandes): refactorings, cambios de infraestructura, optimizaciones de rendimiento. Gestión mínima.
- Los cambios visibles pero esperados: nueva funcionalidad añadida que no cambia lo existente. Comunicación de lanzamiento estándar.
- Los cambios que alteran comportamientos existentes: la funcionalidad que cambia de lugar, el flujo que se reorganiza, el naming que cambia. Gestión activa de la transición.
- Los cambios disruptivos: deprecaciones, cambios de modelo de negocio, migraciones forzadas. Gestión del cambio completa con plan detallado.

**Parte 2 — La gestión de deprecaciones**
La deprecación de una funcionalidad o producto es el cambio más delicado porque pide a los usuarios que abandonen algo que ya tienen:
- El principio de Chesterton's Gate aplicado a las deprecaciones: antes de deprecar, entender por qué la funcionalidad existe y quién depende de ella genuinamente
- La deprecación progresiva: cómo estructurar un periodo de aviso largo suficiente para que los usuarios puedan adaptarse (la regla general: cuanto más crítica la funcionalidad, más largo el periodo de transición)
- La alternativa clara: nunca deprecar sin proporcionar una alternativa documentada. Si no hay alternativa equivalente, el problema no es de comunicación sino de decisión de producto.
- El outreach a los usuarios más afectados: identificar quiénes usan más la funcionalidad que se depreca y contactarlos antes del anuncio general

**Parte 3 — Los periodos de transición y su diseño**
El periodo de transición es el tiempo entre el anuncio del cambio y su implementación definitiva. Su diseño determina cuánto churn genera el cambio:
- El doble acceso temporal: mientras dure la transición, ofrecer acceso tanto al método antiguo como al nuevo para que los usuarios puedan adoptarlo sin presión de tiempo
- Los incentivos a la adopción temprana: por qué los usuarios que adoptan el cambio antes del deadline merecen reconocimiento (acceso a funcionalidades beta, soporte prioritario, comunicación personalizada)
- Los recordatorios progresivos: la cadencia de comunicación que mantiene la urgencia sin generar fatiga (anuncio inicial, recordatorio a los 30 días, recordatorio a los 14 días, recordatorio final)
- El deadline real vs. el deadline comunicado: cuándo tiene sentido dar más tiempo del anunciado y cómo comunicarlo sin entrenar a los usuarios a ignorar los deadlines futuros

**Parte 4 — La gestión del feedback negativo**
Cuando el cambio se anuncia y la respuesta de los usuarios es negativa, el proceso para gestionarlo sin revertir un cambio estratégicamente correcto:
- La diferencia entre el feedback de usuarios vocales (que protestan en Twitter) y el feedback de la mayoría silenciosa (que adopta el cambio sin quejarse)
- Cuándo el feedback negativo indica que el cambio estaba mal diseñado y cuándo indica que la comunicación fue deficiente
- La respuesta que reconoce la molestia sin comprometer la dirección estratégica
- Cuándo revertir o modificar el cambio: los criterios objetivos (churn real, caída de adopción, volumen de soporte) vs. los subjetivos (número de tweets negativos, petición de un cliente grande)

**Parte 5 — La comunicación interna del cambio**
Antes de comunicar el cambio a los usuarios, el proceso de alineación interna:
- El brief de producto para el equipo de CS y soporte: las preguntas que van a recibir y las respuestas preparadas
- El briefing a ventas: cómo el cambio afecta a los clientes en proceso de compra y qué argumentos tienen para manejarlo
- El proceso de feedback loop: cómo el equipo de soporte y CS reporta al equipo de producto el volumen e impacto real del cambio en los usuarios

**Entregable**
Para mi cambio de producto, diseña: el plan de comunicación completo (fases, mensajes, canales y timing), el proceso de gestión de los usuarios más afectados, la respuesta para los tres tipos de feedback negativo más probables y las métricas que determinarán si la transición está siendo exitosa o necesita ajustes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar cambios significativos en el producto minimizando el churn y maximizando la adopción',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Change management como disciplina',
                'description'       => 'El marco metodológico de la gestión del cambio: Kotter, ADKAR, Prosci y las herramientas que usan los profesionales de RRHH para llevar organizaciones de donde están a donde deben estar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como especialista en gestión del cambio organizacional con certificación Prosci y experiencia aplicando múltiples frameworks en organizaciones de distinto tamaño y sector, que sabe qué partes de cada metodología son valiosas y qué partes son terminología académica que en la práctica se adapta o se descarta.

Contexto de mi iniciativa de cambio:
- La organización: [tamaño, sector, cultura organizacional general]
- El cambio que lideraré: [nueva tecnología, reestructuración organizativa, cambio de cultura o valores, nuevo proceso de trabajo, fusión o adquisición]
- El alcance: [qué parte de la organización se ve afectada, número de personas]
- La situación actual de la resistencia: [hay resistencia abierta, resistencia pasiva, indiferencia, o el cambio todavía no se ha comunicado]
- Mi rol en el proceso: [HR director, change manager externo, project manager con responsabilidad de change, CEO]
- El plazo en que el cambio debe estar implementado: [timeline]

**Parte 1 — Los frameworks de gestión del cambio: comparativa honesta**

**Kotter's 8-Step Model:**
El framework más conocido, diseñado para transformaciones a gran escala. Los ocho pasos: crear sentido de urgencia, formar una coalición guía, desarrollar una visión y estrategia, comunicar la visión, empoderar la acción, generar victorias tempranas, consolidar ganancias y anclar el cambio en la cultura. Las fortalezas (la secuencia lógica, el énfasis en el liderazgo) y las limitaciones (lineal en un proceso que es iterativo, da poco detalle sobre cómo hacer cada paso).

**ADKAR:**
El modelo de Prosci centrado en el individuo. Awareness (el empleado sabe por qué cambia), Desire (quiere cambiar), Knowledge (sabe cómo cambiar), Ability (puede cambiar en la práctica), Reinforcement (el cambio se mantiene con el tiempo). La fortaleza clave: te dice exactamente en qué punto del proceso está cada persona y qué intervención necesita. La limitación: requiere un trabajo de diagnóstico individual que es caro de hacer en organizaciones grandes.

**Lewin's Change Model:**
El framework más simple y más duradero: Unfreeze (crear la disposición al cambio descongelando los comportamientos actuales), Change (implementar el nuevo comportamiento) y Refreeze (anclar el nuevo comportamiento para que no reviertan). Útil como modelo mental, demasiado simplificado para planificación detallada.

**Parte 2 — El diagnóstico del estado de disposición al cambio**
Antes de planificar la gestión del cambio, entender el punto de partida:
- La evaluación de la cultura organizacional frente al cambio: historia de cambios anteriores, nivel de confianza en el liderazgo, capacidad de absorción de cambio (si hay muchos cambios simultáneos, la capacidad se agota)
- El mapa de stakeholders: quién tiene poder de influencia sobre el éxito del cambio, quién tiene razones para resistirlo, quién son los aliados naturales
- El análisis del impacto del cambio por grupo: quién se ve más afectado, de qué forma y con qué intensidad

**Parte 3 — El plan de gestión del cambio**
La estructura del plan de gestión del cambio que va más allá de "comunicar el cambio":
- **La estrategia de patrocinio**: el sponsor ejecutivo del cambio, por qué debe ser el CEO o el director de área y no el equipo de RRHH, y qué comportamientos específicos debe mostrar el sponsor para que sea creíble
- **La red de agentes de cambio**: los managers de nivel medio como palanca crítica (o como obstáculo crítico), cómo activarlos como agentes del cambio en lugar de administradores de resistencia
- **El plan de comunicación**: los mensajes por audiencia, la cadencia, los canales y el principio de repetición (los mensajes de cambio necesitan repetirse muchas más veces de lo que cree el equipo de liderazgo)
- **El plan de formación**: qué habilidades o conocimientos necesita el equipo para operar en el nuevo estado y cómo se desarrollan
- **El plan de refuerzo**: cómo se sostiene el cambio después del lanzamiento para que no revierta (los KPIs del nuevo comportamiento, el reconocimiento de los que adoptan, las consecuencias de no adoptar)

**Parte 4 — La gestión de la resistencia**
La resistencia al cambio no es un problema a eliminar sino información sobre el cambio que hay que procesar:
- Los tipos de resistencia: técnica (no creo que funcione), política (el cambio amenaza mi posición o mis recursos), cultural (el cambio contradice cómo hacemos las cosas aquí)
- Las intervenciones por tipo: la resistencia técnica se resuelve con evidencia, la política con negociación, la cultural con tiempo y liderazgo visible
- Los resistentes como señal de alerta: cuándo la resistencia indica que el cambio está mal diseñado o mal comunicado, no que las personas son el problema

**Parte 5 — La medición del cambio**
Cómo saber si el cambio está funcionando antes de que sea demasiado tarde para ajustar:
- Las métricas de proceso: tasas de adopción de nuevos comportamientos, participación en formaciones, uso de nuevas herramientas
- Las métricas de resultado: los KPIs de negocio que el cambio debería mejorar
- Las métricas de resistencia: volumen de quejas, escalaciones a RRHH, intención de abandono en encuestas de clima
- Los checkpoints de revisión: cuándo hacer un assessment formal del progreso y qué decisiones pueden derivar de él

**Entregable**
Para mi iniciativa de cambio, produce: el análisis del estado de disposición al cambio, el plan de gestión del cambio resumido en una página (estrategia de patrocinio, agentes de cambio, comunicación, formación, refuerzo) y las tres intervenciones prioritarias de los primeros 30 días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Aplicar marcos metodológicos de change management para liderar transformaciones organizacionales con impacto medible',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión del cambio en transformación financiera',
                'description'       => 'Lidera la implantación de un nuevo ERP, un proceso de consolidación o un cambio de modelo de reporte: los riesgos y los factores de éxito de los proyectos de transformación financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como CFO o director financiero con experiencia liderando proyectos de transformación financiera: implantaciones de ERP, implementaciones de nuevos sistemas de consolidación, cambios del modelo de reporting y rediseños del proceso de cierre mensual. Sabes que estos proyectos tienen una tasa de fracaso altísima no por problemas técnicos sino por subestimar la complejidad del cambio humano y organizacional que acompaña al cambio técnico.

Contexto de mi transformación financiera:
- Tipo de transformación: [implantación de ERP (SAP, Oracle, NetSuite, Dynamics), nuevo sistema de consolidación, cambio de modelo de reporte, automatización del cierre mensual, implementación de FP&A software, otro]
- Tamaño del equipo financiero afectado: [número de personas y sus roles]
- Estado actual: [procesos manuales en Excel, sistema legacy, múltiples herramientas no integradas, otro]
- Razón del cambio: [crecimiento que supera las capacidades actuales, M&A que requiere integración, requisitos de inversores o auditores, eficiencia de coste]
- Experiencia del equipo con transformaciones tecnológicas: [sin experiencia, alguna experiencia con proyectos pequeños, han vivido una implantación grande]
- El mayor riesgo que identificas: [resistencia del equipo, pérdida de datos históricos, el proceso de cierre durante la transición, el equipo clave que abandona durante el proyecto]

**Parte 1 — Por qué las transformaciones financieras tienen tasas de fracaso tan altas**
Explica las razones sistémicas del fracaso en proyectos de transformación financiera:
- La subestimación de la complejidad del proceso actual: los equipos financieros han desarrollado durante años workarounds y procesos informales que no están documentados en ningún sitio y que el nuevo sistema debe replicar o reemplazar
- La "dictadura del Excel": el equipo financiero es experto en Excel y tiene sus propios modelos que confía y controla. El nuevo sistema, por mejor que sea, genera desconfianza porque no pueden verlo completamente
- El proyecto dentro del proyecto: además de implantar el sistema, hay que transformar los procesos, formar al equipo y gestionar la resistencia, que son proyectos en sí mismos que frecuentemente no tienen dueño claro
- El cierre mensual durante la transición: la presión de seguir cerrando en tiempo con el sistema antiguo mientras se implanta el nuevo es uno de los mayores riesgos del proyecto

**Parte 2 — El diseño del proyecto de transformación**
Las decisiones de diseño del proyecto que determinan si la transformación va a funcionar:
- **Big bang vs. roll-out por módulos**: implantarlo todo a la vez o fase a fase (primero el GL, luego AR/AP, luego consolidación). Las ventajas de cada enfoque y los riesgos específicos.
- **El modelo de datos**: la decisión más crítica y más difícil de revertir. La estructura de centros de coste, dimensiones analíticas y el plan de cuentas que debe servir tanto para el reporting externo como para el interno.
- **La gestión de datos históricos**: qué datos migrar, hasta cuántos años de histórico y en qué nivel de detalle. La tentación de migrar todo y el riesgo de no poder.
- **El entorno de prueba**: por qué el testing con datos reales en un entorno separado es no negociable y cuánto tiempo debe dedicársele antes del go-live.

**Parte 3 — La gestión del cambio con el equipo financiero**
El equipo financiero tiene características que hacen especialmente difícil la gestión del cambio:
- La alta aversión al riesgo: el equipo financiero sabe que un error en el cierre tiene consecuencias graves y esto les hace muy resistentes a cambiar lo que funciona
- La dependencia del conocimiento tribal: las personas que saben cómo funciona el sistema actual son frecuentemente las más difíciles de convencer de que el nuevo es mejor
- El super-user model: cómo seleccionar y formar a los miembros del equipo que serán los expertos del nuevo sistema y actuarán como primer nivel de soporte interno
- La formación técnica vs. la formación en proceso: el equipo no solo necesita saber usar el nuevo sistema sino entender por qué los procesos cambian

**Parte 4 — El plan de contingencia para el cierre mensual**
El mayor riesgo operacional de una transformación financiera es el cierre mensual inmediatamente posterior al go-live:
- El parallel run: operar durante uno o dos meses con el sistema antiguo y el nuevo en paralelo para validar que los resultados cuadran
- El rollback plan: qué hacer si el sistema nuevo falla durante el primer cierre (el plan B que debe existir aunque esperemos no necesitarlo)
- El refuerzo temporal del equipo: el número de personas adicionales (internas o externas) que se necesitan durante los primeros cierres con el nuevo sistema
- Los criterios de go/no-go del go-live: las condiciones que deben cumplirse antes de activar el nuevo sistema en producción, incluyendo cuándo está justificado retrasar el go-live

**Parte 5 — Los factores críticos de éxito**
Los elementos que separan las transformaciones financieras que funcionan de las que se quedan a medias:
- El patrocinio ejecutivo real: el CFO que dedica tiempo al proyecto semanalmente, no el que delega completamente y aparece en el go-live
- La claridad del ownership: quién es el dueño del proyecto en el equipo financiero (no solo el equipo de IT) y qué autoridad tiene para tomar decisiones
- El presupuesto de change management: los proyectos que recortan el presupuesto de formación y comunicación para cubrir desfases en el desarrollo técnico son los que fracasan más frecuentemente
- Los quick wins: los resultados tempranos visibles que demuestran al equipo que el esfuerzo del cambio vale la pena

**Entregable**
Para mi transformación, diseña: el plan de proyecto resumido con las fases y los hitos más críticos, el plan de gestión del cambio para el equipo financiero y el plan de contingencia para el primer cierre mensual post-go-live.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Planificar y ejecutar una transformación financiera (ERP, consolidación, reporting) con gestión del cambio integrada',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión del cambio regulatorio',
                'description'       => 'Cuando llega una nueva regulación, el proceso de análisis de impacto, adaptación y comunicación que asegura el cumplimiento sin paralizar el negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como director legal o compliance officer con experiencia gestionando la adaptación de empresas a nuevas regulaciones: desde el RGPD hasta la Directiva de Servicios de Pago, desde regulaciones sectoriales específicas hasta cambios fiscales de calado. Sabes que el cumplimiento normativo no es solo un problema legal sino un proyecto de cambio organizacional que afecta a procesos, tecnología y comportamientos de personas en toda la empresa.

Nota importante: Este análisis tiene carácter metodológico y educativo. El análisis específico de cualquier regulación concreta requiere asesoramiento jurídico especializado.

Contexto de mi cambio regulatorio:
- Regulación o cambio normativo al que debo adaptarme: [nombre de la regulación, directiva o cambio normativo]
- Sector y jurisdicción: [tu sector y los países donde operas]
- Plazo de entrada en vigor o de adaptación obligatoria: [fecha límite]
- Estado actual de cumplimiento: [sin ninguna adaptación, adaptación parcial, ya cumples en algunos aspectos]
- Áreas de la empresa más afectadas: [operaciones, tecnología, RRHH, producto, atención al cliente, finanzas]
- Tamaño del equipo legal/compliance: [si tienes equipo interno, si dependes de asesoría externa]

**Parte 1 — El análisis de impacto como primer paso**
Antes de planificar la adaptación, entender exactamente qué cambia y en qué partes de la empresa:
- La lectura estructurada de la regulación: cómo descomponer una norma compleja en sus requisitos concretos y evitar la trampa de interpretar los requisitos de forma más restrictiva o más laxa de lo necesario
- El gap analysis: la diferencia entre lo que la regulación exige y lo que la empresa hace actualmente, por área y por requisito
- La priorización del gap: qué brechas tienen mayor riesgo de sanción, cuáles son más fáciles de cerrar y cuáles requieren mayor inversión de tiempo o recursos
- Los terceros en la cadena: qué proveedores, partners o clientes deben adaptarse también y cómo afecta su adaptación a la tuya

**Parte 2 — El proyecto de adaptación**
La estructura del proyecto que lleva del análisis al cumplimiento:
- El equipo de proyecto cross-funcional: por qué el proyecto de cumplimiento normativo no puede ser solo del equipo legal, y quién debe estar (Operations, IT, RRHH, Producto, Marketing según los requisitos)
- El plan de trabajo por área: las medidas a implementar en cada departamento, los responsables y los plazos
- Las decisiones de diseño normativas: cuando la regulación da margen de interpretación, cómo elegir la interpretación que maximiza el cumplimiento con el menor coste operacional
- Los proyectos técnicos asociados: los cambios de sistemas, procesos o interfaces que muchas regulaciones requieren y que tienen su propio ciclo de proyecto

**Parte 3 — La comunicación interna del cambio regulatorio**
Cómo comunicar a la organización qué cambia, por qué y qué deben hacer diferente:
- La diferenciación de audiencias: el CEO necesita entender el riesgo y las inversiones requeridas, los managers necesitan entender qué deben cambiar en sus equipos, los empleados necesitan saber exactamente qué deben hacer diferente en su día a día
- La formación obligatoria: cómo diseñar la formación de compliance que el equipo realmente completa y retiene, en lugar de el e-learning que hace clic hasta el final sin leer
- La actualización de políticas internas: el proceso de revisar y actualizar las políticas, procedimientos y documentación interna afectada por la regulación
- La cultura de cumplimiento: por qué la comunicación puntual no es suficiente y qué hace que el cumplimiento se convierta en un comportamiento habitual del equipo

**Parte 4 — La comunicación externa**
Los cambios que la regulación requiere en la comunicación con clientes, usuarios o terceros:
- Los textos legales: políticas de privacidad, términos y condiciones, avisos legales que deben actualizarse y el proceso para hacerlo sin crear confusión
- Los consentimientos y autorizaciones: si la regulación requiere recabar nuevos consentimientos o actualizar los existentes, el proceso para hacerlo sin perder la base de datos
- La notificación a clientes de los cambios: cuándo la regulación obliga a comunicar cambios a los clientes y cómo hacerlo de forma clara sin generar alarma innecesaria
- Los reportes a autoridades: si la regulación requiere reportes periódicos o notificaciones de incidencias a organismos reguladores

**Parte 5 — El modelo de cumplimiento continuo**
El cumplimiento normativo no es un proyecto puntual sino un estado continuo que requiere mantenimiento:
- El monitoring regulatorio: cómo seguir la evolución de la regulación (actualizaciones, criterios de las autoridades, jurisprudencia) para anticipar nuevos requisitos
- Las auditorías internas: la revisión periódica del nivel de cumplimiento para detectar desviaciones antes de que llegue una inspección
- El registro de actividades y la documentación de cumplimiento: qué evidencia debes mantener de que cumples la regulación, durante cuánto tiempo y en qué formato

**Entregable**
Para mi cambio regulatorio, diseña: el gap analysis simplificado con las brechas más críticas y su priorización, el plan de proyecto de adaptación con las fases y los hitos principales, y el plan de comunicación interna y externa del cambio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar la adaptación de la empresa a nuevas regulaciones combinando análisis jurídico con gestión del cambio organizacional',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión del cambio con clientes',
                'description'       => 'Cuando el producto cambia significativamente, el proceso de comunicación, formación y acompañamiento que minimiza el churn por cambio y convierte la resistencia en aceptación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como Customer Success Manager senior o VP of Customer Success con experiencia guiando a clientes a través de cambios significativos en el producto: migraciones a nuevas versiones, cambios de modelo de precios, deprecaciones de funcionalidades clave y rediseños de interfaz que afectan a los flujos de trabajo que el cliente tenía automatizados.

Contexto del cambio con mis clientes:
- El cambio que debo comunicar y gestionar: [nueva versión del producto, cambio de precios, deprecación de funcionalidad, migración forzada, rediseño de UX]
- Tipo de clientes afectados: [todos los clientes, un segmento específico, los clientes en planes legacy]
- Impacto estimado en los flujos de trabajo del cliente: [bajo, medio, alto; describe el tipo de impacto]
- Plazo: [cuándo entra en vigor el cambio]
- Historial de cambios recientes: [si han habido otros cambios recientes que ya hayan generado fricción]
- Segmento de mayor riesgo de churn: [qué tipo de cliente o perfil de uso es más vulnerable al cambio]
- Recursos del equipo de CS: [número de CSMs, si hay herramientas de customer success como Gainsight]

**Parte 1 — La psicología del cliente ante el cambio del producto**
Explica por qué los clientes de SaaS son especialmente sensibles a los cambios del producto:
- El cliente ha integrado el producto en sus procesos internos: un cambio en el producto significa un cambio en su proceso, que no estaba en el presupuesto ni en el plan
- El churn por esfuerzo: el cliente no cancela necesariamente porque el producto sea peor tras el cambio, sino porque el esfuerzo de adaptarse supera su tolerancia al momento
- El efecto de acumulación: si el cliente ha vivido varios cambios recientes, la tolerancia al cambio adicional disminuye aunque cada cambio individual sea razonable
- Los clientes enterprise vs. los clientes SMB: el enterprise tiene un proceso de change management interno que el CSM debe navegar; el SMB tiene menos recursos para adaptarse pero también menos burocracia interna

**Parte 2 — La segmentación del riesgo de churn por cambio**
No todos los clientes tienen el mismo riesgo de churnar a causa del cambio:
- Los indicadores de alto riesgo: uso intensivo de la funcionalidad que cambia, baja frecuencia de uso del producto en general (menor adopción = menor ROI percibido = menor tolerancia al cambio), renovación próxima (el cambio llega en el peor momento del ciclo de vida), historial de quejas o tickets relacionados
- Los indicadores de bajo riesgo: alta adopción del producto en general, múltiples usuarios en la cuenta (la empresa está comprometida con el producto), NPS alto previo al cambio
- El scoring de riesgo: cómo construir un modelo simple de riesgo con los datos disponibles en Gainsight, Totango o el CRM para priorizar a quién contactar proactivamente

**Parte 3 — El plan de comunicación por segmento**
La comunicación del cambio que diferencia entre el cliente que necesita soporte intensivo y el que simplemente necesita una notificación:

**Clientes de alto riesgo:**
- Llamada proactiva del CSM antes del anuncio general para preparar el terreno
- Sesión de formación 1:1 adaptada a sus flujos de trabajo específicos
- Plan de migración personalizado con fechas y responsables
- Check-in posterior a la adopción

**Clientes de riesgo medio:**
- Email personalizado del CSM con las implicaciones específicas para su caso de uso
- Webinar grupal de formación sobre el cambio
- Acceso prioritario al soporte durante el periodo de transición

**Clientes de bajo riesgo:**
- Comunicación automatizada bien diseñada con los recursos de self-service
- In-app notifications contextual durante los primeros usos post-cambio

**Parte 4 — La formación y habilitación del cliente**
Los recursos que facilitan la adopción del cambio sin saturar al equipo de CS:
- Los materiales de formación: guías de usuario, vídeos de walkthrough, comparativas de "antes y después" que muestran exactamente qué cambió
- El acceso anticipado: ofrecer acceso al cambio antes del lanzamiento general a los clientes más afectados para que tengan tiempo de adaptarse sin presión
- Los office hours: sesiones abiertas de preguntas donde cualquier cliente puede participar, que son más eficientes que las preguntas 1:1 para los casos comunes
- El cliente como co-formador: los clientes que adoptan bien el cambio pueden convertirse en referentes para otros clientes que dudan

**Parte 5 — Las métricas de gestión del cambio con clientes**
Cómo medir si la gestión del cambio está funcionando antes de que el impacto se refleje en las cifras de retención:
- La tasa de adopción del cambio: porcentaje de clientes que han migrado o adoptado el nuevo estado en cada semana del periodo de transición
- El volumen de soporte relacionado: si la gestión del cambio es efectiva, el volumen de tickets relacionados con el cambio debe ser bajo y decaer rápidamente
- El sentiment durante la transición: las respuestas a los emails de comunicación, las menciones en la comunidad, el NPS durante el periodo de cambio
- El churn atribuible al cambio: identificar en los churns del periodo qué porcentaje mencionan el cambio como razón principal

**Entregable**
Para mi cambio con clientes, diseña: el modelo de scoring de riesgo de churn para segmentar la cartera, el plan de comunicación diferenciado por segmento con los mensajes y timings, y los materiales de formación que necesito preparar antes del lanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar cambios significativos en el producto con los clientes para minimizar el churn y maximizar la retención',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestionar la transición de carrera',
                'description'       => 'El cambio de empleo a freelance, de sector o de especialidad: el proceso de transición que minimiza el riesgo financiero y acelera el establecimiento en el nuevo rol.',
                'prompt_content'    => <<<'PROMPT'
Actúa como coach de carrera con experiencia acompañando profesionales en transiciones significativas: de empleado a freelance, de un sector a otro, de un rol generalista a uno especializado o de una especialidad técnica a un rol más estratégico. Has visto transiciones que funcionaron bien porque estaban bien planificadas y transiciones que generaron años de incertidumbre porque se lanzaron sin estructura.

Contexto de mi transición:
- Mi situación actual: [empleado en empresa, freelance que quiere cambiar de especialidad, autónomo que quiere volver al empleo, otro]
- La transición que quiero hacer: [a freelance, a otro sector, a otra especialidad, a un rol más senior, a otro país]
- Mi especialidad actual y los años de experiencia: [qué hago y cuánto llevas]
- Mi situación financiera: [si tienes ahorros suficientes para X meses sin ingresos, si necesitas que la transición genere ingresos desde el mes 1]
- Las razones de la transición: [agotamiento, techo profesional, más autonomía, mejor remuneración, alineación con intereses]
- El mayor miedo que tienes: [no encontrar clientes, perder el nivel de ingresos, no ser suficientemente bueno en lo nuevo, el tiempo de transición]
- El plazo en que quieres haber completado la transición: [meses]

**Parte 1 — El diagnóstico de la transición**
Antes de planificar, entender exactamente qué tipo de transición estás haciendo y cuáles son las implicaciones específicas:
- La transición de empleado a freelance: el cambio más común pero el que más subestima el cambio de identidad. De tener un empleador que define el trabajo a tener que generar el trabajo. Las habilidades de negocio que el empleado no necesitaba (ventas, finanzas, gestión de clientes) y que el freelance debe desarrollar.
- La transición de sector: la parte de tu expertise que es transferible y la parte que es específica del sector. Por qué los profesionales sobreestiman cuánto de su valor es específico del sector y subestiman cuánto es transferible.
- La transición de especialidad: el riesgo de empezar desde cero en experiencia y reputación cuando ya tienes un nivel de ingresos que refleja años de expertise. Cómo usar la especialidad actual como puente hacia la nueva.
- La transición geográfica: los mercados que se abren, los que se cierran, y por qué la transición geográfica y la de rol simultáneamente es el escenario de mayor riesgo.

**Parte 2 — El mapa de transferibilidad de tu expertise**
Lo más valioso antes de lanzarse es entender qué llevas contigo en la transición:
- Las habilidades técnicas transferibles: qué del expertise técnico actual tiene valor en el destino
- Las habilidades blandas y de negocio: la capacidad de comunicar, gestionar proyectos, entender al cliente, pensar de forma estructurada. Estas son frecuentemente más valiosas en el destino que las habilidades técnicas.
- La red de contactos: qué parte de tu red actual tiene conexión con el destino y puede acelerar la llegada
- La reputación y el portfolio: qué trabajo anterior puedes mostrar que sea relevante para el destino, aunque no sea exactamente lo que harás

**Parte 3 — El plan de transición financiero**
La transición de carrera es también una transición financiera y gestionarla mal genera presión que sabotea las decisiones:
- El runway: cuántos meses de gastos tienes cubiertos sin ingresos nuevos y cómo calcularlo honestamente (no el escenario optimista sino el conservador)
- El modelo de ingresos durante la transición: en la mayoría de transiciones es posible generar ingresos en la especialidad actual mientras se construye la nueva posición, en lugar de una transición total inmediata
- El punto de inflexión: cuándo habrá suficiente tracción en el nuevo rol para que el riesgo financiero sea aceptable
- El plan de contingencia: qué harás si en seis meses la tracción no es la esperada (volver al rol anterior, ajustar la especialidad destino, ajustar el timeline)

**Parte 4 — La construcción del nuevo posicionamiento**
El proceso de posicionarte en el nuevo rol o sector antes de tener el título o la experiencia formal:
- El portfolio de transición: cómo construir evidencia de competencia en el nuevo rol aunque no tengas clientes todavía (proyectos propios, colaboraciones, pro bono estratégico, content creation sobre el tema)
- La red en el nuevo sector: cómo construir conexiones donde no las tienes, empezando por los puntos de cruce entre tu red actual y el destino
- El positioning statement para la transición: cómo presentarte a alguien en el nuevo sector sin sonar como alguien que no tiene experiencia, usando el expertise anterior como contexto, no como lastre
- Los primeros clientes o empleadores: por qué los primeros en el nuevo rol suelen ser los más difíciles de convencer y las estrategias para conseguirlos

**Parte 5 — La gestión de la identidad profesional durante el cambio**
La transición de carrera es también una transición de identidad y no gestionarla genera bloqueos que no son técnicos ni financieros:
- El duelo por el rol anterior: es legítimo sentir pérdida cuando dejas un rol donde eras experto para empezar a construir en otro donde eres principiante
- El síndrome del impostor en la transición: es inevitable sentirse menos capaz en la nueva especialidad que en la anterior. Cómo distinguir entre el impostor temporal (que desaparece con la práctica) y la señal real de que la dirección elegida no es la correcta
- El ritmo sostenible: las transiciones que se hacen en modo de emergencia queman al profesional antes de que tenga tracción. Cómo mantener el ritmo sin sacrificar la salud o las relaciones.

**Entregable**
Para mi transición específica, diseña: el mapa de transferibilidad de mi expertise, el plan de transición en 90 días con los hitos concretos, el modelo de ingresos durante la transición y el primer paso que debo dar en los próximos siete días para que la transición deje de ser un proyecto futuro y se convierta en uno presente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Planificar una transición de carrera con riesgo financiero controlado y estrategia de posicionamiento clara',
                'vote_score'        => 48,
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
