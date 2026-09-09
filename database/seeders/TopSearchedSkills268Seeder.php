<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills268Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Change management en marketing: adoptar nuevas herramientas sin resistencia',
                'description'       => 'Diseña e implementa un plan de gestión del cambio para que tu equipo de marketing adopte nuevas plataformas, metodologías o procesos sin caer en la resistencia silenciosa que bloquea la transformación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión del cambio organizacional con especialización en equipos de marketing y transformación digital. Voy a implementar un cambio significativo en mi equipo de marketing, ya sea la adopción de una nueva herramienta, un cambio de metodología de trabajo o una reorganización de procesos, y necesito un plan estructurado para hacerlo sin generar resistencia ni perder productividad durante la transición.

**Preguntas iniciales para contextualizar el plan:**
1. ¿Qué cambio específico estás implementando? (nueva herramienta de automatización, CRM, plataforma de contenidos, metodología ágil, reorganización de roles...)
2. ¿De cuántas personas se compone el equipo afectado y cuál es su nivel de experiencia técnica?
3. ¿Cuál es el plazo para la implementación?
4. ¿Ha habido intentos previos de cambio que hayan fallado o generado fricción?
5. ¿Existe presión desde la dirección, o el cambio surge desde el propio equipo?

**DIAGNÓSTICO DE RESISTENCIA ANTES DEL LANZAMIENTO:**

La resistencia al cambio raramente se expresa de forma abierta en equipos de marketing. En cambio, aparece como falta de adopción silenciosa, uso parcial de las nuevas herramientas manteniendo los flujos antiguos en paralelo, o una productividad que no termina de recuperarse tras la implementación. Antes de lanzar cualquier cambio, ayúdame a hacer un diagnóstico honesto:

- ¿Cuáles son los beneficios reales del cambio para cada perfil del equipo, desde el content creator hasta el data analyst? El "qué hay para mí" debe ser concreto y creíble.
- ¿Qué pierden exactamente con el cambio? No en términos corporativos, sino en términos humanos: ¿pierden autonomía, comodidad, dominio experto, visibilidad, rutinas que funcionaban?
- ¿Quiénes serán los early adopters y quiénes los rezagados más probables? Identificar la curva de adopción antes de comenzar permite personalizar el plan.

**EL MODELO ADKAR APLICADO AL MARKETING:**

Utiliza el modelo ADKAR (Awareness, Desire, Knowledge, Ability, Reinforcement) para estructurar el plan de cambio adaptado al contexto específico del equipo de marketing:

Awareness (Conciencia): Cómo comunicar el cambio de manera que el equipo entienda por qué es necesario ahora y cuál es el costo de no cambiar. No una presentación de PowerPoint con beneficios abstractos, sino una narrativa honesta que reconozca las incomodidades de la transición.

Desire (Deseo): Cómo generar motivación intrínseca para adoptar el cambio. Qué palancas funcionan en equipos creativos versus equipos analíticos de marketing. Cómo involucrar a las personas en el diseño del proceso de adopción para que sientan ownership.

Knowledge (Conocimiento): Diseño del plan de formación: qué tipo de entrenamiento, en qué formato, con qué cadencia. Diferencia entre la formación mínima viable para empezar a funcionar y la formación avanzada para sacar el máximo partido.

Ability (Capacidad): Cómo crear un entorno seguro para practicar sin miedo al error durante los primeros 30 días. Sistemas de soporte entre pares, sesiones de práctica guiada, recursos just-in-time accesibles en el momento de necesidad.

Reinforcement (Refuerzo): Cómo consolidar el cambio una vez superada la curva inicial. Qué métricas de adopción seguir, cómo reconocer públicamente los avances y cómo evitar la regresión a los viejos hábitos cuando la presión aumenta.

**COMUNICACIÓN DEL CAMBIO:**

Dame un esquema de comunicación en tres fases: antes del lanzamiento (generar expectativa y reducir incertidumbre), durante la implementación (mantener el momentum y gestionar los baches) y después de los primeros hitos (celebrar avances y ajustar lo que no funciona). Para cada fase, dame los mensajes clave, los canales más efectivos y la frecuencia de comunicación.

**GESTIÓN DE LOS CASOS DIFÍCILES:**

¿Cómo gestionar a la persona con más experiencia del equipo que se convierte en el principal resistente? ¿Cómo manejar la situación en que la herramienta tiene problemas técnicos reales durante los primeros días, que refuerzan el escepticismo? ¿Cómo responder cuando la productividad cae antes de recuperarse y la dirección empieza a cuestionar el cambio?

Ayúdame a construir un plan de gestión del cambio que trate al equipo de marketing como adultos inteligentes, reconociendo las pérdidas reales de la transición y creando las condiciones para que la adopción sea genuina, no forzada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Planificación e implementación de cambios en equipos de marketing',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical migrations: gestionar el cambio técnico sin romper el negocio',
                'description'       => 'Planifica y ejecuta migraciones técnicas complejas (frameworks, arquitecturas, bases de datos) con una estrategia de gestión del cambio que minimice el riesgo operativo y alinee al negocio durante todo el proceso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software senior con amplia experiencia en migraciones técnicas de alto riesgo y en la gestión del cambio dentro de organizaciones de ingeniería. Voy a liderar una migración técnica significativa y necesito no solo el plan técnico, sino también la estrategia para gestionar el impacto organizacional, comunicar el progreso y asegurar que el negocio no sufra durante la transición.

**Contexto inicial que necesito que me ayudes a definir:**
1. ¿Qué tipo de migración es? (monolito a microservicios, migración de base de datos, cambio de framework, modernización de infraestructura, reescritura de módulos críticos...)
2. ¿Cuánto tiempo lleva el sistema actual en producción y qué tan bien se conoce su funcionamiento real versus el documentado?
3. ¿Cuál es el nivel de tolerancia al riesgo de la organización y cuál es la presión temporal para completar la migración?
4. ¿Existe deuda técnica acumulada que la migración debe resolver, o es una modernización proactiva?

**ESTRATEGIA DE MIGRACIÓN POR FASES:**

Las migraciones big bang rara vez funcionan en sistemas que sirven tráfico real. Ayúdame a diseñar una estrategia de migración incremental:

Strangler Fig Pattern: cómo reemplazar gradualmente el sistema antiguo construyendo el nuevo en paralelo, con un proxy o capa de enrutamiento que permita ir dirigiendo tráfico al nuevo sistema de manera controlada. Cuándo tiene sentido esta aproximación y cuándo no.

Feature flags para migración progresiva: cómo usar feature flags para controlar qué porcentaje de usuarios o qué funcionalidades corren sobre el sistema nuevo, con capacidad de rollback instantáneo si algo falla.

Dual write / dual read: en migraciones de bases de datos, cómo mantener sincronizados el sistema antiguo y el nuevo durante el período de coexistencia, y cómo verificar la consistencia de datos entre ambos.

**GESTIÓN DEL RIESGO TÉCNICO:**

El mayor riesgo de una migración no es el código, sino lo que no sabemos. Ayúdame a identificar y gestionar los riesgos técnicos ocultos:

- Comportamientos no documentados del sistema antiguo que el nuevo debe replicar aunque parezcan bugs (el famoso "comportamiento no documentado que resulta ser una feature").
- Dependencias ocultas entre sistemas que no aparecen en la documentación pero que se descubren en producción.
- Edge cases que solo ocurren con datos reales y que los tests no han capturado.
- Degradación de rendimiento que no es evidente hasta que se escala.

**ALINEACIÓN CON EL NEGOCIO DURANTE LA MIGRACIÓN:**

Una migración técnica bien ejecutada desde el punto de vista técnico puede ser un fracaso desde el punto de vista de negocio si no se gestiona adecuadamente la comunicación y las expectativas. Ayúdame a:

Crear un dashboard de progreso que sea comprensible para stakeholders no técnicos: qué métricas mostrar (porcentaje de tráfico migrado, disponibilidad, latencia, número de incidencias) y cómo presentarlas sin generar alarma innecesaria ni falsa tranquilidad.

Definir los criterios de éxito y los criterios de rollback antes de comenzar: qué umbrales de error, latencia o disponibilidad activan el rollback automático, y quién tiene la autoridad para tomar esa decisión.

Comunicar los períodos de mayor riesgo: cómo preparar a producto y a negocio para las ventanas de congelación de funcionalidades, los períodos de mayor atención necesaria y los posibles impactos en el rendimiento durante la migración.

**GESTIÓN DEL EQUIPO DURANTE LA MIGRACIÓN:**

Las migraciones largas generan fatiga en el equipo. Cómo mantener la moral y el foco cuando la migración dura meses, cómo gestionar la presión de seguir entregando features mientras se ejecuta la migración, y cómo reconocer el trabajo de migración que es invisible para el negocio pero crítico para la sostenibilidad técnica.

Ayúdame a construir un plan completo de migración técnica que sea tan sólido en la dimensión humana y organizacional como en la dimensión técnica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificación de migraciones técnicas con gestión del cambio organizacional',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design system adoption: conseguir que los equipos adopten el sistema de diseño',
                'description'       => 'Diseña una estrategia para que los equipos de producto, desarrollo y diseño adopten realmente el design system, pasando de la resistencia pasiva al uso genuino que multiplica la velocidad y la consistencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un líder de design systems con experiencia en organizaciones de producto que han atravesado el desafío de hacer que un design system sea adoptado genuinamente, no solo formalmente. Tengo un design system desarrollado (o en desarrollo) y necesito una estrategia para conseguir que diseñadores y desarrolladores lo usen de manera real, no solo en teoría.

**Preguntas para contextualizar la estrategia:**
1. ¿En qué estado está el design system actualmente: en construcción, recién lanzado, o existe desde hace tiempo pero tiene baja adopción?
2. ¿Qué tamaño tienen los equipos que deben adoptarlo: cuántos diseñadores, cuántos desarrolladores, cuántos equipos de producto distintos?
3. ¿Cuál es la principal resistencia que estás encontrando: falta de tiempo, el sistema no cubre las necesidades reales, desconfianza en su mantenimiento, o desconocimiento de los beneficios?
4. ¿Existe un equipo dedicado al design system, o es un proyecto mantenido a tiempo parcial por sus creadores?

**EL ERROR MÁS COMÚN: TRATARLO COMO UN PROYECTO DE ENTREGA, NO DE ADOPCIÓN:**

La mayoría de los design systems fracasan no porque sean técnicamente malos, sino porque sus creadores asumen que una vez que el sistema existe y está documentado, la adopción viene sola. Ayúdame a evitar ese error entendiendo la adopción como un problema de cambio organizacional:

¿Por qué no adoptan el sistema los diseñadores? Generalmente porque creen que es más lento que diseñar "desde cero" con sus componentes propios, porque los componentes del sistema no se adaptan a sus casos de uso específicos, o porque les quita la sensación de creatividad y propiedad del trabajo.

¿Por qué no adoptan el sistema los desarrolladores? Porque la migración de código existente tiene un coste real que no está en el backlog, porque la documentación técnica no está al nivel que necesitan para implementar rápidamente, o porque el sistema aún no cubre los componentes que más necesitan.

**ESTRATEGIA DE ADOPCIÓN EN TRES HORIZONTES:**

Horizonte 1 – Los primeros 90 días: cómo generar victorias tempranas que demuestren el valor del design system. Qué tipo de proyectos piloto elegir, cómo seleccionar a los early adopters que van a convertirse en embajadores del sistema, y cómo documentar y comunicar los resultados concretos (tiempo ahorrado, consistencia visual mejorada, bugs de UI reducidos).

Horizonte 2 – De 3 a 9 meses: cómo ampliar la adopción al resto de los equipos aprovechando el momentum generado. Cómo integrar el uso del design system en los procesos de trabajo existentes (revisiones de diseño, definición técnica, QA) sin añadir fricción adicional. Cómo gestionar la deuda de componentes no migrados al sistema.

Horizonte 3 – Sostenibilidad: cómo convertir el design system en la forma natural de trabajar, cómo crear mecanismos de contribución para que los equipos enriquezcan el sistema con sus necesidades específicas, y cómo medir la salud del sistema a lo largo del tiempo.

**GOBERNANZA Y CONTRIBUCIÓN:**

Uno de los factores que más determina el éxito a largo plazo de un design system es el modelo de gobernanza. Ayúdame a definir:

- Quién toma las decisiones sobre nuevos componentes y cuánto tiempo tarda el proceso de decisión (si tarda mucho, los equipos crean soluciones propias que fragmentan el sistema).
- Cómo gestionar las solicitudes de nuevos componentes o variantes sin que el sistema se convierta en un catálogo inmanejable.
- Cómo comunicar los cambios y deprecaciones de componentes existentes sin romper el trabajo de los equipos.

**MÉTRICAS DE ADOPCIÓN REAL:**

Las métricas superficiales (número de componentes publicados, número de páginas de documentación) no miden la adopción real. Ayúdame a definir métricas que indiquen si el sistema está siendo genuinamente utilizado: porcentaje de componentes de producto que usan componentes del sistema, tiempo de prototipado antes y después del sistema, número de inconsistencias visuales en los releases, y satisfacción de diseñadores y desarrolladores con el sistema.

Ayúdame a construir una estrategia de adopción que trate el design system como lo que realmente es: un producto interno cuyos usuarios son los propios equipos de diseño y desarrollo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de adopción de design systems en organizaciones de producto',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales transformation: cambiar el proceso comercial sin perder el pipeline',
                'description'       => 'Lidera la transformación del proceso de ventas, ya sea adoptando un nuevo CRM, cambiando la metodología comercial o reorganizando el equipo, sin que el cambio afecte a las oportunidades activas ni a los resultados del trimestre.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en transformaciones comerciales y en la gestión del cambio en equipos de alto rendimiento orientados a resultados. Voy a liderar una transformación en el proceso de ventas de mi organización y necesito hacerlo de manera que los resultados del pipeline activo no se vean afectados mientras implementamos los cambios.

**Contexto que necesito definir contigo:**
1. ¿Qué tipo de transformación es? (implementación de nuevo CRM, cambio de metodología como MEDDIC o Challenger Sale, reorganización de territorios o cuentas, cambio en el modelo de compensación, adopción de herramientas de sales intelligence...)
2. ¿Cuántas personas componen el equipo comercial y cuál es su antigüedad media?
3. ¿Qué tan lejos está el equipo de alcanzar el objetivo del trimestre cuando se inicia la transformación?
4. ¿Existe un historial de cambios fallidos que haya generado escepticismo en el equipo?

**EL RIESGO ESPECÍFICO DE LAS TRANSFORMACIONES COMERCIALES:**

A diferencia de otros equipos, los equipos de ventas son especialmente sensibles al cambio porque trabajan bajo presión de resultados a corto plazo. Cualquier fricción en el proceso genera una resistencia que se argumenta de manera perfectamente racional: "mientras me pidas resultados trimestrales, no puedes pedirme que cambie mis métodos". Ayúdame a navegar esta tensión:

Cómo separar la gestión del pipeline activo de la adopción de los nuevos procesos durante el período de transición. Qué elementos del proceso antiguo deben mantenerse operativos hasta que se cierre el trimestre y cuáles pueden transformarse de inmediato.

Cómo conseguir que los mejores vendedores sean aliados de la transformación en lugar de sus principales opositores. El top performer que se convierte en resistente activo puede paralizar la adopción de todo el equipo.

**EL PLAN DE TRANSFORMACIÓN COMERCIAL:**

Fase de preparación: antes de anunciar cualquier cambio al equipo, qué debe estar listo. La formación, la migración de datos históricos al nuevo sistema, la decisión sobre las oportunidades activas (se migran ahora o se completan en el sistema antiguo), y los recursos de soporte disponibles desde el primer día.

Fase de lanzamiento: cómo comunicar la transformación al equipo comercial. El mensaje debe responder honestamente a las preguntas que todos van a tener pero que nadie va a hacer en la reunión de lanzamiento: ¿esto afecta a mi comisión? ¿van a cambiar mis cuentas? ¿qué pasa si no cumplo mientras me formo?

Fase de adopción acelerada: cómo crear incentivos a corto plazo para la adopción del nuevo proceso. Qué métricas de proceso (no solo de resultado) monitorear durante los primeros 60 días. Cómo identificar tempranamente a quién necesita más soporte y a quién está listo para asumir un rol de referente interno.

**GESTIÓN DE LA PRODUCTIVIDAD DURANTE EL CAMBIO:**

La caída de productividad durante una transformación comercial es real e inevitable. La clave es dimensionarla correctamente antes de comenzar para no sorprenderse ni sobrerreaccionar. Ayúdame a:

Estimar de manera realista cuánto puede caer la productividad durante las primeras semanas y cómo comunicar esa estimación a la dirección para que no se interpreten los datos como un fracaso de la transformación.

Diseñar métricas de leading indicators que permitan distinguir entre la caída temporal de productividad por aprendizaje y los problemas reales de adopción que requieren intervención.

Establecer los criterios de éxito de la transformación: no solo la adopción del nuevo sistema o metodología, sino los resultados de negocio que se esperan conseguir como consecuencia del cambio.

Diseña conmigo una transformación comercial que proteja los resultados del trimestre mientras construye los cimientos de un equipo de ventas más efectivo y escalable.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformación de procesos comerciales con protección del pipeline activo',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product pivots: gestionar el cambio de dirección del producto',
                'description'       => 'Navega el proceso de un pivot de producto con claridad estratégica: cómo tomar la decisión, comunicarla al equipo y a los stakeholders, y ejecutar la transición sin perder el momentum del equipo ni la confianza del mercado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product leader con experiencia en startups y empresas de producto que han atravesado pivots, grandes y pequeños, y en la gestión de la incertidumbre que conlleva cambiar la dirección de un producto. Estoy considerando o ya he tomado la decisión de pivotar el producto, y necesito ayuda para gestionar todo lo que viene después de esa decisión.

**Preguntas para contextualizar la situación:**
1. ¿El pivot ya está decidido o estás en el proceso de evaluar si pivotar?
2. ¿Qué tipo de pivot es? (cambio de segmento de clientes, cambio de propuesta de valor, cambio de modelo de negocio, cambio de canal, cambio de tecnología subyacente...)
3. ¿Cuál fue la señal que hizo evidente la necesidad del pivot: datos de retención, feedback de clientes, cambio en el mercado, presión de inversores?
4. ¿Cuánto tiempo llevas en la dirección actual y cuánto trabajo se va a descartar?

**VALIDAR LA DECISIÓN DE PIVOTAR ANTES DE EJECUTAR:**

El mayor error de los pivots no es pivotar demasiado, sino pivotar sin validar suficientemente la nueva dirección. Ayúdame a responder honestamente las preguntas difíciles antes de comprometer al equipo con el cambio:

¿Estás huyendo de algo (la dificultad de la dirección actual) o yendo hacia algo (una oportunidad genuinamente mejor)? La diferencia es crucial porque define si el pivot resuelve el problema o lo desplaza.

¿Tienes evidencia suficiente de que la nueva dirección funciona, o es una hipótesis bien razonada? ¿Qué validaciones puedes hacer antes del pivot para reducir el riesgo de pivotar en la dirección equivocada?

¿El equipo actual tiene las habilidades para ejecutar la nueva dirección, o el pivot implica también un cambio en las capacidades necesarias?

**COMUNICAR EL PIVOT AL EQUIPO:**

Esta es la parte más difícil de un pivot. Las personas que han trabajado duramente en la dirección que se abandona pueden sentir que su trabajo fue inútil o que la dirección tomó una mala decisión. Ayúdame a:

Estructurar la comunicación del pivot de manera honesta: reconociendo lo que se ha aprendido, explicando por qué la nueva dirección es más prometedora, y siendo claro sobre qué se descarta y qué se conserva.

Responder a las preguntas incómodas que el equipo va a tener: ¿cambian los roles? ¿qué pasa con las features en las que estamos trabajando? ¿este pivot es una señal de que la empresa tiene problemas?

Gestionar la motivación después del anuncio: el período inmediatamente posterior al anuncio de un pivot es el de mayor riesgo de pérdida de talento, especialmente de las personas más comprometidas con la dirección anterior.

**COMUNICAR EL PIVOT A CLIENTES Y MERCADO:**

¿Qué les debes a los clientes actuales que están usando el producto en la dirección que estás abandonando? ¿Cuánto tiempo de soporte les debes antes de descontinuar la funcionalidad que usan? ¿Cómo gestionas su posible frustración o decepción sin que se convierta en ruido negativo en el mercado?

Si tienes inversores, ¿cómo comunicas el pivot? No como un fracaso sino como una decisión basada en aprendizajes reales, con la narrativa correcta que demuestre que el equipo es capaz de aprender y adaptarse.

**EJECUCIÓN DEL PIVOT:**

Cómo definir el roadmap de transición: qué se construye primero para validar rápidamente la nueva dirección, cómo balancear el mantenimiento de la versión actual con la inversión en la nueva, y cómo definir los hitos que confirman que el pivot va en la dirección correcta.

Ayúdame a gestionar el pivot como lo que realmente es: no un fracaso sino una actualización de hipótesis basada en evidencia real, ejecutada con respeto por el trabajo anterior y claridad sobre el camino siguiente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión estratégica y comunicación de pivots de producto',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Change management en RRHH: la metodología que realmente funciona',
                'description'       => 'Diseña e implementa procesos de gestión del cambio organizacional desde RRHH, combinando los marcos metodológicos más efectivos con las realidades culturales y políticas de tu organización.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de RRHH con especialización en gestión del cambio organizacional y experiencia en procesos de transformación en empresas medianas y grandes. Necesito diseñar e implementar un proceso de gestión del cambio en mi organización y quiero hacerlo con rigor metodológico pero también con pragmatismo sobre lo que realmente funciona en la práctica.

**Contexto de la organización y el cambio:**
1. ¿Qué tipo de cambio vas a gestionar? (reestructuración, cambio cultural, implementación de nuevo sistema de gestión del desempeño, transformación de la propuesta de valor al empleado, fusión o adquisición...)
2. ¿Cuántas personas se ven afectadas y en cuántos niveles jerárquicos?
3. ¿Cuál es la cultura organizacional actual con respecto al cambio: la organización tiene historial de cambios exitosos o de cambios que se anunciaron y nunca se completaron?
4. ¿Cuánto apoyo real tiene el cambio desde la alta dirección, más allá del apoyo declarado?

**LOS MODELOS DE GESTIÓN DEL CAMBIO Y SUS LIMITACIONES REALES:**

Ayúdame a entender los modelos más utilizados y cuándo aplicar cada uno en contextos reales:

Kotter 8 pasos: el modelo más conocido y más malinterpretado. En la práctica, los pasos se solapan y no son secuenciales. Cuáles son los pasos que más frecuentemente se saltan en las organizaciones y por qué esos son precisamente los que determinan el éxito o fracaso del cambio.

ADKAR: más útil para cambios que afectan a comportamientos individuales. Cómo usarlo en combinación con Kotter para cubrir tanto la dimensión organizacional como la individual.

Modelo de Prosci: cómo integrarlo en los procesos de gestión de proyectos existentes en la organización sin añadir una capa de burocracia que genere resistencia adicional.

**EL ROL REAL DE RRHH EN LA GESTIÓN DEL CAMBIO:**

Existe una tensión fundamental en el rol de RRHH en la gestión del cambio: somos a la vez diseñadores del proceso, facilitadores del mismo y afectados por él. Ayúdame a navegar esa tensión:

Cómo posicionarte como socio estratégico del cambio frente a la dirección, no como ejecutor de las comunicaciones y la formación una vez que la decisión está tomada. El momento en que RRHH debe estar en la mesa de decisión, no solo en la de implementación.

Cómo gestionar la situación en que el cambio que debes implementar te parece mal diseñado o con riesgos no reconocidos por la dirección. Cuándo y cómo expresar esas reservas de manera que sean escuchadas sin comprometer tu capacidad de ejecutar.

**IDENTIFICAR Y ACTIVAR A LOS AGENTES DE CAMBIO:**

Los agentes de cambio informales, personas sin título de liderazgo pero con credibilidad e influencia real en la organización, son con frecuencia más determinantes para el éxito del cambio que los líderes formales. Cómo identificarlos, cómo involucrarlos sin instrumentalizarlos y cómo apoyarlos para que jueguen su rol de manera efectiva.

Cómo gestionar a los líderes formales que declaran apoyo al cambio pero no lo modelan con su comportamiento, que es la forma más frecuente de sabotaje involuntario de cualquier iniciativa de cambio organizacional.

**MÉTRICAS Y EVALUACIÓN DEL CAMBIO:**

Más allá de las métricas de proceso (porcentaje de personas formadas, encuestas de satisfacción con la comunicación), cómo medir si el cambio realmente está ocurriendo en los comportamientos y en los resultados de negocio. Qué indicadores anticipados usar para saber si el cambio va bien antes de que los resultados finales estén disponibles.

Ayúdame a diseñar un proceso de gestión del cambio que sea metodológicamente sólido y, al mismo tiempo, adaptado a la realidad política y cultural de mi organización específica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño e implementación de procesos de gestión del cambio organizacional desde RRHH',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial transformation: modernizar el departamento financiero',
                'description'       => 'Lidera la transformación del departamento financiero desde los procesos manuales y el Excel hacia la automatización, los datos en tiempo real y el rol de socio estratégico del negocio, gestionando el cambio con rigor y realismo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia en transformaciones de la función financiera en empresas medianas, tanto en la dimensión técnica (herramientas, procesos, datos) como en la dimensión humana (cambio cultural, gestión de personas, redefinición de roles). Quiero modernizar el departamento financiero y necesito un plan integral que sea ambicioso en la visión y realista en la ejecución.

**Diagnóstico inicial de la situación actual:**
1. ¿Cuál es el principal dolor del departamento financiero actual: cierres lentos, exceso de Excel, falta de datos en tiempo real, dificultad para hacer forecast, o el equipo dedicando el 80% del tiempo a transacciones y el 20% al análisis?
2. ¿Cuántas personas componen el departamento y cuál es el perfil de habilidades dominante?
3. ¿Qué sistemas financieros existen actualmente: ERP, herramientas de BI, herramientas de consolidación?
4. ¿Cuál es el nivel de apoyo de la dirección general a la transformación del área financiera?

**LA VISIÓN DE LA FUNCIÓN FINANCIERA DEL FUTURO:**

El punto de llegada de la transformación financiera no es solo tener mejores herramientas, es redefinir el rol del departamento en la organización. Ayúdame a articular esa visión:

De registrador a anticipador: pasar del cierre histórico mensual al forecast rolling que permite tomar decisiones antes de que los problemas ocurran. Qué capacidades técnicas y de datos requiere ese cambio y cómo desarrollarlas.

De departamento de control a socio estratégico: cómo el equipo financiero puede aportar análisis de negocio que influyan en las decisiones estratégicas, no solo reportar los resultados de las decisiones que otros han tomado.

De proceso manual a arquitectura de datos: cómo construir un ecosistema de datos financieros que permita a cualquier miembro del equipo acceder a la información que necesita sin depender de un analista que prepare el informe.

**EL PLAN DE TRANSFORMACIÓN POR FASES:**

Fase fundacional: qué procesos estandarizar y documentar antes de automatizar. Uno de los errores más frecuentes en la transformación financiera es automatizar el caos, lo que multiplica los problemas en lugar de resolverlos.

Fase de automatización: qué automatizar primero para conseguir el mayor impacto. Los cierres contables, la conciliación de cuentas, la generación de reportes estándar, y el proceso de consolidación son habitualmente las áreas de mayor retorno.

Fase de inteligencia: cómo construir capacidades de análisis avanzado, modelos de forecast basados en datos, y visualizaciones que conviertan los datos financieros en insights accionables para el negocio.

**GESTIÓN DEL CAMBIO EN EL EQUIPO FINANCIERO:**

La transformación financiera implica a menudo un cambio en el perfil de habilidades del equipo. Personas con mucha experiencia en procesos manuales pueden sentir que la automatización amenaza su rol. Cómo gestionar esa transición con respeto por las personas y con claridad sobre cuáles son las habilidades del futuro que la organización necesita desarrollar.

Cómo crear un plan de desarrollo de habilidades que prepare al equipo para el rol analítico y estratégico que la transformación requiere: habilidades de datos, capacidad de narración con números, comprensión del modelo de negocio más allá de los asientos contables.

**MÉTRICAS DE ÉXITO DE LA TRANSFORMACIÓN:**

Qué indicadores usar para medir el progreso de la transformación: días de cierre, horas invertidas en procesos versus análisis, porcentaje de decisiones de negocio en las que el equipo financiero ha participado como socio, nivel de satisfacción del resto de la organización con el soporte del área financiera.

Ayúdame a diseñar una transformación financiera que convierta el departamento en el motor analítico y estratégico que la organización necesita para tomar mejores decisiones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Transformación integral de la función financiera hacia el rol de socio estratégico',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Transformación digital jurídica: adoptar tecnología en el despacho',
                'description'       => 'Lidera la adopción de herramientas tecnológicas en el despacho jurídico, desde la automatización de documentos hasta la inteligencia artificial legal, gestionando el cambio en un entorno con alta resistencia cultural a la innovación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado con experiencia en transformación digital de despachos jurídicos y en la gestión del cambio en organizaciones legales, que tienen una cultura profesional con características únicas que hacen que las metodologías estándar de change management deban adaptarse significativamente. Quiero modernizar las operaciones del despacho y necesito una estrategia realista para hacerlo.

**Contexto del despacho y la transformación:**
1. ¿De qué tamaño es el despacho: boutique, mediano o gran firma?
2. ¿Cuál es la práctica o área jurídica principal: corporativo, litigación, laboral, inmobiliario, IP, fiscal...?
3. ¿Qué tipo de tecnología quieres adoptar: gestión documental, automatización de contratos, herramientas de research legal con IA, gestión de asuntos y facturación, o comunicación y colaboración con clientes?
4. ¿Cuál es la composición del despacho en términos de seniority: socios, asociados senior, asociados junior, personal de administración?

**LA CULTURA JURÍDICA Y SU RELACIÓN CON EL CAMBIO TECNOLÓGICO:**

Los despachos jurídicos tienen características culturales únicas que hacen que la gestión del cambio tecnológico requiera un enfoque diferente al de otras organizaciones:

El precedente como principio: en derecho, el precedente es sagrado. Los abogados están entrenados para valorar lo que ha funcionado en el pasado sobre lo que podría funcionar en el futuro. Cómo usar ese principio a favor de la adopción tecnológica, argumentando con casos de éxito documentados en lugar de visiones del futuro.

La jerarquía del conocimiento experto: en un despacho, la credibilidad viene de la experiencia jurídica, no de la competencia tecnológica. Cómo gestionar la situación en que los asociados junior (más cómodos con la tecnología) deben convencer a socios con décadas de experiencia para adoptar nuevas herramientas.

La aversión al riesgo de responsabilidad: cualquier herramienta nueva plantea la pregunta de qué pasa si algo falla. Cómo abordar el riesgo de responsabilidad profesional asociado a la tecnología de manera que no se convierta en un veto permanente a cualquier innovación.

**EL CASO DE NEGOCIO DE LA TRANSFORMACIÓN DIGITAL JURÍDICA:**

En un despacho, la transformación tecnológica debe argumentarse en términos de rentabilidad, calidad del servicio y competitividad. Ayúdame a construir el caso de negocio correcto:

Eficiencia en horas facturables: cómo la automatización de documentos, la revisión de contratos con IA y la gestión de precedentes reduce el tiempo dedicado a tareas repetitivas y libera horas para trabajo de mayor valor.

Calidad y consistencia: cómo la tecnología reduce el error humano en documentación, garantiza la consistencia en los formatos y permite un control de calidad más riguroso.

Experiencia del cliente: cómo los portales de cliente, la comunicación digital y la visibilidad sobre el estado de los asuntos mejoran la percepción del servicio sin comprometer la confidencialidad.

**IMPLEMENTACIÓN POR FASES EN UN DESPACHO:**

Fase inicial de victorias rápidas: qué herramientas implementar primero para demostrar valor sin generar resistencia. Las herramientas de gestión de asuntos y facturación, que alivian la carga administrativa, suelen ser las que generan menor resistencia y mayor adopción temprana.

Fase de automatización de documentos: cómo implementar la automatización de contratos y documentos estándar. El argumento de que "cada asunto es único" es real en el trabajo de alta complejidad pero no en la documentación rutinaria.

Fase de inteligencia artificial jurídica: cómo introducir herramientas de IA para research legal, revisión de contratos y due diligence de manera que augmenten las capacidades del equipo sin que se perciban como una amenaza al conocimiento experto del abogado.

Ayúdame a diseñar una estrategia de transformación digital jurídica que respete la cultura del despacho y, al mismo tiempo, construya las capacidades tecnológicas que permitirán competir en el mercado legal del futuro.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia de transformación digital adaptada a la cultura y necesidades del despacho jurídico',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS transformation: pasar de soporte reactivo a éxito proactivo',
                'description'       => 'Transforma el equipo de Customer Service o Customer Support en un equipo de Customer Success genuinamente proactivo, redefiniendo procesos, métricas, herramientas y la mentalidad del equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en la transformación de equipos de soporte reactivo en equipos de éxito del cliente proactivos en empresas SaaS y de servicios. Esta transformación es una de las más significativas que puede atravesar una organización orientada al cliente, porque implica cambios en procesos, métricas, tecnología y, sobre todo, en la mentalidad del equipo. Necesito un plan para liderarla.

**Preguntas para personalizar el plan de transformación:**
1. ¿Cuál es el punto de partida: un equipo de soporte puro (gestión de tickets, resolución de problemas), un equipo mixto, o un equipo de CS que ya hace algunas cosas proactivas pero sin metodología?
2. ¿Cuántas personas componen el equipo y cuál es la ratio de clientes por CSM o agente actualmente?
3. ¿Cuál es el principal indicador que muestra la necesidad del cambio: churn alto, NPS bajo, tickets repetitivos sobre las mismas dudas, o expansión de cuentas que no ocurre?
4. ¿Existe apoyo de la dirección con recursos (headcount, herramientas) o la transformación debe hacerse con los recursos actuales?

**EL CAMBIO DE MENTALIDAD: DEL TICKET A LA RELACIÓN:**

La diferencia más profunda entre soporte reactivo y éxito del cliente no está en los procesos sino en la mentalidad. Ayúdame a articular ese cambio:

Del "el cliente tiene un problema" al "el cliente no está alcanzando su potencial": el equipo de soporte existe para resolver problemas cuando aparecen; el equipo de CS existe para asegurarse de que los problemas no aparezcan porque el cliente está usando el producto correctamente para lograr sus objetivos.

Del SLA como métrica de éxito al outcome del cliente como métrica de éxito: tiempo de respuesta y resolución son métricas de proceso; retención, expansión y éxito medible del cliente son métricas de resultado. Cómo hacer esa transición sin perder el control de la calidad del servicio durante el cambio.

Cómo el equipo puede desarrollar la mentalidad de asesor y consultor en lugar de la mentalidad de técnico de soporte, sin perder la competencia técnica que los hace valiosos.

**EL MODELO OPERATIVO DEL NUEVO EQUIPO:**

Segmentación de la base de clientes: cómo dividir la cartera en segmentos (enterprise, mid-market, small business) y asignar modelos de atención diferenciados. No todos los clientes necesitan ni justifican el mismo nivel de dedicación.

El customer health score: cómo construir un modelo de salud del cliente que combine señales de uso del producto, engagement con el equipo, indicadores de negocio del cliente y sentimiento (NPS, feedback), y que permita identificar clientes en riesgo antes de que manifiesten la intención de cancelar.

El playbook de Customer Success: los procesos repetibles que el equipo ejecuta en los momentos clave del ciclo de vida del cliente: onboarding, primer valor, revisiones periódicas de negocio, renovación, y expansión. Cómo documentarlos, implementarlos y medirlos.

**TECNOLOGÍA Y HERRAMIENTAS:**

Qué herramientas son necesarias para pasar de soporte reactivo a CS proactivo: plataforma de CS (Gainsight, ChurnZero, Planhat o similares), integración con el CRM, acceso a datos de uso del producto y cómo priorizar la inversión tecnológica si el presupuesto es limitado.

Cómo construir un stack de CS con herramientas más accesibles si no hay presupuesto para plataformas enterprise, combinando el CRM existente, datos del producto y herramientas de comunicación.

**GESTIÓN DEL CAMBIO INTERNO:**

Cómo gestionar la transición del equipo existente: no todas las personas de un equipo de soporte quieren o pueden ser CSMs. Cómo identificar quién tiene el perfil para el nuevo rol, cómo desarrollar las habilidades que faltan y cómo gestionar con respeto a quienes no encajan en el nuevo modelo.

Cómo gestionar la relación con ventas, que frecuentemente ve al equipo de CS como un recurso para las renovaciones pero no como un socio estratégico para el crecimiento de cuentas.

Ayúdame a diseñar una transformación de CS que convierta el soporte en éxito del cliente de manera genuina, con un plan realista sobre los tiempos y los recursos necesarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Transformación de equipos de soporte reactivo a Customer Success proactivo',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Reinventarse como freelance: pivotar de especialidad o mercado',
                'description'       => 'Gestiona el proceso de cambio de dirección de tu carrera freelance: cómo cambiar de especialidad, de sector o de mercado sin perder los ingresos actuales mientras construyes la nueva posición.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de carrera especializado en freelancers y profesionales independientes con experiencia en acompañar transiciones de especialidad, cambios de mercado objetivo y reposicionamientos de carrera. Quiero reinventarme como freelance: cambiar lo que ofrezco, a quién se lo ofrezco o cómo lo ofrezco, y necesito hacerlo de manera que no comprometa los ingresos actuales mientras construyo la nueva posición.

**Contexto de la situación actual y el cambio deseado:**
1. ¿Cuál es tu especialidad actual y qué tipo de clientes tienes?
2. ¿Hacia dónde quieres pivotar: nueva especialidad dentro de tu campo, nuevo sector o industria, nuevo mercado geográfico (como internacionalizarse), nuevo tipo de cliente (de pymes a enterprise), o un cambio de formato de trabajo (de proyectos a retainer, de retainer a productos)?
3. ¿Cuál es la motivación del pivot: saturación del mercado actual, mejores ingresos potenciales en la nueva dirección, mayor alineación con tus intereses, o agotamiento con el tipo de trabajo actual?
4. ¿Cuántos meses de runway tienes para que la nueva dirección empiece a generar ingresos?

**VALIDAR EL PIVOT ANTES DE COMPROMETERTE:**

El error más costoso en un pivot de carrera freelance es abandonar el mercado actual antes de haber validado que el nuevo funciona. Ayúdame a diseñar una estrategia de validación:

El cliente piloto: cómo conseguir el primer cliente en la nueva especialidad o mercado antes de anunciar públicamente el cambio. Puede ser a precio reducido a cambio de un testimonio o un caso de estudio, o puede ser un cliente actual al que ofrecer la nueva propuesta en primer lugar.

El proyecto puente: cómo identificar proyectos que estén en la intersección entre lo que haces ahora y lo que quieres hacer, que te permitan ganar experiencia y referencias en la nueva dirección sin abandonar completamente la antigua.

La validación de mercado: antes de invertir tiempo en reposicionar tu marca personal, redes sociales y portfolio, cómo validar que hay demanda real y pagadora en la nueva dirección.

**LA ESTRATEGIA DE TRANSICIÓN:**

Cómo gestionar la transición en paralelo con la actividad actual: qué porcentaje de tu tiempo dedicas a la nueva dirección, cómo gestionar la agenda para no sacrificar los ingresos actuales mientras construyes el nuevo posicionamiento.

Cuándo dejar de aceptar proyectos en la dirección antigua: cómo definir el criterio que te dice que es el momento de cerrar la puerta a los clientes del modelo anterior. El criterio no puede ser "cuando tenga suficientes clientes en la nueva dirección" porque ese momento nunca llega si sigues siendo igualmente accesible para los clientes actuales.

Cómo gestionar a los clientes actuales durante el pivot: los clientes que te tienen como su freelance de confianza en la especialidad antigua. Cómo comunicarles el cambio, cómo gestionar los proyectos en curso y cómo mantener la relación aunque ya no seas su proveedor habitual.

**EL REPOSICIONAMIENTO DE TU MARCA PERSONAL:**

Cómo actualizar tu posicionamiento, portfolio y presencia digital para reflejar la nueva dirección sin borrar completamente el pasado. Tu experiencia anterior es un activo, no una carga, aunque ya no sea el centro de tu propuesta.

Cómo construir credibilidad en la nueva dirección: qué contenido crear, a qué comunidades unirte, qué casos de éxito desarrollar y cómo hacer que tu red actual te ayude a hacer la transición.

La gestión de la identidad profesional durante el pivot: cómo manejar la incomodidad de estar en el "valle de la transición", donde ya no eres el experto de siempre pero todavía no eres el nuevo experto. Cómo comunicarte durante ese período sin proyectar inseguridad ni sobre-vender lo que todavía no tienes.

Ayúdame a diseñar un pivot de carrera freelance que sea financieramente sostenible, estratégicamente sólido y emocionalmente manejable durante la transición.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestión del cambio de especialidad o mercado en la carrera freelance',
                'vote_score'        => 38,
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
