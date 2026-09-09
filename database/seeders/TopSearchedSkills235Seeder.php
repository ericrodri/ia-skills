<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills235Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Programas de lealtad y fidelización',
                'description'       => 'Diseña el programa de fidelización que hace que los clientes vuelvan: los modelos (puntos, cashback, membership), los mecanismos de engagement y las métricas que demuestran que el programa genera más valor del que cuesta.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing de retención y programas de fidelización de clientes. Necesito que me ayudes a diseñar o mejorar el programa de lealtad de mi empresa para maximizar la retención y el valor del cliente a largo plazo.

Mi contexto:
- Tipo de negocio: [describe tu modelo de negocio, sector y si es B2C o B2B]
- Frecuencia de compra media de tus clientes: [diaria, semanal, mensual, anual]
- Ticket medio por transacción: [indica un rango aproximado]
- Estado actual: [sin programa / con programa básico / programa existente que quieres mejorar]
- Principal problema de retención ahora mismo: [los clientes compran una vez y no vuelven / la competencia se lleva a tus mejores clientes / tienes clientes activos pero no frecuentes]

Con ese contexto, dame:

1. ELECCIÓN DEL MODELO DE FIDELIZACIÓN
Analiza los tres grandes modelos de programas de lealtad aplicados a mi negocio:
- Programas de puntos: cómo funciona la mecánica de acumulación y canje, cuándo tiene sentido, los errores que hacen que los puntos no generen comportamiento
- Cashback y recompensas económicas: la diferencia entre cashback real y descuentos disfrazados, cuándo el cashback gana al programa de puntos
- Membresía y programas de suscripción (loyalty premium): el modelo Amazon Prime / Costco, cómo funciona el efecto sunk cost y cuándo tiene sentido cobrar por pertenecer al programa

Para mi caso concreto, recomienda el modelo o la combinación que mejor encaja y justifica la elección.

2. DISEÑO DE LA MECÁNICA DE ENGAGEMENT
Más allá de la recompensa económica, ¿cómo diseño los mecanismos que generan comportamiento habitual? Dame el diseño de:
- La estructura de niveles (tiers): cuántos niveles, qué nombre darles, qué beneficios exclusivos tiene cada nivel y cuál es el umbral de actividad para acceder a cada uno
- Los bonus de comportamiento: las acciones que se recompensan además de la compra (referidos, reviews, cumpleaños, primeras compras en categorías nuevas)
- La mecánica de progreso visible: cómo mostrar al cliente cuánto le falta para el siguiente nivel o recompensa y por qué la barra de progreso es uno de los elementos más poderosos del diseño de fidelización

3. EL CATÁLOGO DE RECOMPENSAS
¿Qué canjear por los puntos o cómo estructurar los beneficios? Dame:
- Las categorías de recompensas con mayor percepción de valor para mi tipo de cliente
- Cómo equilibrar las recompensas transaccionales (descuentos) con las experienciales (acceso, servicio preferente, experiencias exclusivas)
- El ratio de canje: cómo calibrar cuánto tiene que gastar el cliente para obtener una recompensa que le importe sin que el programa me cueste más de lo que genera
- Las recompensas simbólicas y de reconocimiento que tienen coste casi cero pero alto valor percibido

4. ANTI-PATRONES: LO QUE DESTRUYE UN PROGRAMA DE FIDELIZACIÓN
Lista los ocho errores más comunes que hacen que un programa de lealtad no funcione o incluso dañe la marca: los puntos que caducan antes de que el cliente pueda canjearlos, las restricciones de canje que frustran al cliente, el programa demasiado complejo que nadie entiende, las recompensas que nadie quiere, la comunicación insuficiente y la falta de personalización. Para cada error dame la solución correcta.

5. TECNOLOGÍA Y OPERACIONES
¿Qué necesito desde el punto de vista tecnológico y operativo para lanzar y gestionar el programa? Explícame:
- Las opciones desde construir en casa hasta usar plataformas especializadas (menciona tres o cuatro opciones relevantes para mi tipo de negocio)
- Los datos mínimos que necesito recopilar y cómo integrarlos con mi CRM y mi plataforma de email
- El proceso de onboarding al programa: cómo enrolar al cliente, cuándo comunicarle los beneficios y cómo activar al cliente que se registra pero no usa el programa

6. MÉTRICAS DE ÉXITO DEL PROGRAMA
¿Cómo sé si el programa está funcionando o si está costando más de lo que genera? Dame las seis métricas clave:
- Tasa de enrolamiento y de activación
- Frecuencia de compra de miembros vs no miembros
- Gasto medio por transacción de miembros vs no miembros
- Tasa de canje (señal de engagement real)
- Coste del programa como porcentaje de los ingresos generados por miembros
- LTV comparado entre clientes en el programa y fuera de él

7. PLAN DE LANZAMIENTO EN 90 DÍAS
Dame un roadmap de lanzamiento del programa en tres fases de 30 días: qué construir o configurar el primer mes, cómo hacer el lanzamiento suave con los clientes más activos el segundo mes y cómo escalar al total de la base de clientes el tercer mes. Incluye los mensajes clave de comunicación para cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un programa de fidelización que incremente la frecuencia de compra y el LTV de los clientes.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Retención de usuarios en productos digitales: las funcionalidades que enganchan',
                'description'       => 'Construye las features que generan retención: los loops de hábito, las notificaciones que se abren y los mecanismos de engagement que hacen que los usuarios vuelvan sin que el producto los manipule.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product engineering con especialización en retención de usuarios y diseño de comportamiento en productos digitales. Necesito que me ayudes a identificar y construir las funcionalidades que generan retención real en mi producto.

Mi contexto:
- Descripción del producto: [qué hace, para quién, qué problema resuelve]
- Plataforma: [web app, iOS, Android, o combinación]
- Métricas de retención actuales: [D1, D7, D30 si las tienes, o descripción cualitativa del problema]
- Principal punto de abandono: [los usuarios se van justo después del onboarding / al cabo de unas semanas / tras un incidente concreto]
- Tipo de uso esperado: [uso diario / semanal / cuando surge la necesidad]
- Stack tecnológico principal: [tecnologías que usas, sin entrar en detalle]

Con ese contexto, dame:

1. DIAGNÓSTICO: POR QUÉ SE VAN LOS USUARIOS
Antes de construir nada, ayúdame a diagnosticar el problema de retención. Dame el framework de análisis:
- Cómo identificar el "aha moment" del producto: el punto en el que el usuario entiende el valor real y que correlaciona con la retención a largo plazo
- Las señales de los datos que indican dónde está el problema (qué eventos trackear, qué cohortes analizar, qué ratio señala que el onboarding está roto vs que el producto tiene un problema de valor)
- Las tres causas más frecuentes de retención baja y cómo distinguirlas en los datos

2. EL HABIT LOOP: DISEÑAR EL HÁBITO DE USO
Explícame el modelo del habit loop de Nir Eyal (trigger, action, variable reward, investment) y cómo aplicarlo al diseño de funcionalidades en mi tipo de producto:
- Qué tipos de triggers internos y externos funcionan en mi categoría
- Cómo simplificar la acción para reducir la fricción al mínimo
- Cómo diseñar la recompensa variable que mantiene el engagement sin volverse predecible
- Qué inversión del usuario aumenta el coste de cambio de forma legítima (datos propios, contenido generado, red de contactos)

Dame dos o tres ejemplos concretos de habit loops implementables en mi producto.

3. NOTIFICACIONES QUE SE ABREN
Las notificaciones son la palanca de retención más potente y la más abusada. Dame el framework para diseñar notificaciones que el usuario quiera recibir:
- Los criterios para decidir qué merece una notificación y qué no
- La jerarquía de canales: push, email, in-app, SMS — cuándo usar cada uno
- El timing inteligente: cómo usar el comportamiento del usuario para enviar la notificación en el momento de mayor receptividad
- El copywriting de la notificación: la fórmula para el asunto/título que genera apertura en mi tipo de producto
- Cómo medir si las notificaciones están reteniendo o ahuyentando (el ratio de opt-out como señal de alerta)

4. FEATURES DE RETENCIÓN QUE DEBO CONSTRUIR
Basándome en mi contexto, dame una lista priorizada de las funcionalidades con mayor impacto esperado en retención, con para cada una:
- Descripción de la feature y su mecanismo de retención
- Esfuerzo estimado de implementación (bajo/medio/alto)
- Impacto esperado en qué métrica de retención (D1/D7/D30/mensual)
- Qué señal de datos me indica que la feature está funcionando

5. RETENCIÓN ÉTICA VS DARK PATTERNS
¿Cuál es la línea entre diseñar para el hábito y manipular al usuario contra su propio interés? Dame el framework para evaluar si una decisión de diseño de retención es ética:
- Los principios que distinguen el engagement valioso del enganche artificioso
- Los dark patterns de retención más comunes (notificaciones de ansiedad, FOMO fabricado, dificultad para darse de baja, pérdida de progreso artificial) y por qué, además de ser éticamente cuestionables, dañan la retención a largo plazo
- Cómo construir la retención sobre el valor real entregado y no sobre la fricción de salida

6. EL ONBOARDING QUE RETIENE
El mayor problema de retención suele estar en los primeros minutos y días. Dame el diseño del onboarding que lleva al usuario al valor lo antes posible:
- La secuencia de pasos ideal para mi tipo de producto
- El número máximo de pasos antes de que el usuario experimente el valor
- Cómo medir si el onboarding está funcionando y cuándo intervenir con un usuario que no ha llegado al aha moment
- El primer email o notificación post-registro que más impacto tiene en la activación

7. ROADMAP DE RETENCIÓN: LOS PRÓXIMOS 3 SPRINTS
Dame un plan de acción concreto para los próximos tres sprints (asumiendo sprints de dos semanas):
- Sprint 1: lo que puedo implementar rápido para ver impacto en D1/D7
- Sprint 2: la feature de mayor palanca en retención a medio plazo
- Sprint 3: la inversión estructural que mejora la retención de forma sostenida
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Identificar y construir las funcionalidades que generan retención real de usuarios en productos digitales.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para la retención: diseñar para el largo plazo',
                'description'       => 'Diseña la experiencia que hace que el usuario quiera volver: los momentos de deleite, el onboarding que lleva al valor real y los patrones de diseño que generan el hábito de uso sin atrapar al usuario contra su voluntad.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño de experiencia de usuario con especialización en diseño de comportamiento y retención a largo plazo. Necesito que me ayudes a diseñar la experiencia de mi producto para maximizar el retorno voluntario del usuario.

Mi contexto:
- Tipo de producto: [app móvil / web app / plataforma / herramienta de productividad / red social / e-commerce / otro]
- Usuario objetivo: [perfil, contexto de uso, frecuencia esperada]
- Estado actual del diseño: [MVP recién lanzado / producto con años de vida / rediseño en marcha]
- Principal problema de UX que identificas con la retención: [los usuarios no vuelven después del primer uso / el onboarding es confuso / la experiencia diaria es aburrida o frustrante / los usuarios se quejan de que no entienden el valor]
- ¿Tienes datos de comportamiento? [heatmaps, grabaciones de sesión, analytics de flujo — indica qué tienes]

Con ese contexto, dame:

1. MAPA DE MOMENTOS DE LA EXPERIENCIA DEL USUARIO
Ayúdame a identificar los momentos críticos de la experiencia que más impactan en la retención:
- El primer minuto: qué debe ver, sentir y lograr el usuario en los primeros 60 segundos para decidir que vale la pena seguir
- El aha moment: cómo reconocerlo en mi tipo de producto y cómo diseñar el flujo para llevar al usuario ahí lo antes posible
- El final de sesión: cómo termina el usuario la sesión y qué le hace querer volver (o no)
- Los momentos de frustración: los puntos donde el usuario abandona y cómo identificarlos en los datos de comportamiento

2. DISEÑO DEL ONBOARDING QUE ACTIVA
Dame el diseño del onboarding orientado a la retención, no solo a la activación:
- La filosofía correcta: por qué un onboarding más corto suele retener más que uno completo
- La secuencia de pantallas ideal para mi tipo de producto: qué mostrar en cada paso, qué posponer
- El balance entre enseñar y dejar hacer: cuándo el usuario aprende mejor en contexto vs con instrucciones explícitas
- Los micro-logros del onboarding: qué victorias pequeñas debo diseñar en los primeros minutos para generar la sensación de progreso
- Cómo medir si el onboarding está funcionando: la tasa de completado, el tiempo hasta el primer valor y la correlación con la retención a 7 días

3. PATRONES DE DISEÑO QUE GENERAN HÁBITO
¿Qué patrones de diseño de interfaz generan uso habitual de forma legítima? Dame el catálogo de patrones aplicables a mi producto:
- Streaks y rachas: cómo diseñar el indicador de racha para que motive sin generar ansiedad
- Progreso visible: barras, porcentajes, insignias — cuándo funcionan y cuándo son ruido visual
- El estado vacío como motivador: cómo diseñar el estado vacío inicial para que invite a la acción
- La personalización que aumenta el coste de cambio: qué elementos del producto deben ser personalizables para que el usuario sienta que el producto "es suyo"
- La notificación in-app: cómo diseñar los tooltips y mensajes contextuales que guían sin interrumpir

4. MOMENTOS DE DELEITE
Los momentos de deleite son interacciones inesperadamente satisfactorias que generan recuerdo emocional y ganas de volver. Dame el diseño de tres o cuatro momentos de deleite concretos para mi tipo de producto:
- Qué tipo de deleite encaja con mi producto (visual, funcional, humorístico, de reconocimiento)
- Dónde insertar el deleite sin que parezca forzado
- Cómo medir si un momento de deleite está funcionando o es ruido
- Ejemplos de momentos de deleite en productos similares o referentes que puedo adaptar

5. DISEÑO ÉTICO PARA LA RETENCIÓN
¿Cuál es la frontera entre diseño que retiene por valor y diseño que atrapa al usuario? Dame el marco ético para evaluar mis decisiones de diseño:
- Los dark patterns de UX más frecuentes en retención (confirmshaming, roach motel, notificaciones de culpa) y por qué dañan la confianza a largo plazo
- Los principios del diseño centrado en el bienestar del usuario que son también buena estrategia de retención
- Cómo evaluar cada decisión de diseño con la pregunta "¿esto retiene por valor o por fricción de salida?"

6. REVISIÓN DEL FLUJO ACTUAL
Si me describes el flujo actual o los pantallazos principales del producto, haré una auditoría de UX orientada a la retención. Sin esa información, dame el checklist de evaluación que debo aplicar yo mismo a cada pantalla del flujo principal: las preguntas que debo hacerme sobre la claridad del valor, la reducción de fricción, la guía hacia la siguiente acción y la sensación de progreso.

7. SISTEMA DE DISEÑO PARA LA CONSISTENCIA
La consistencia visual y de interacción es un factor de retención subestimado: el usuario que no necesita reaprender el producto cada vez que lo usa vuelve más. Dame las recomendaciones para el sistema de diseño orientado a la retención:
- Los patrones de interacción que deben ser absolutamente consistentes en toda la app
- Cómo gestionar el rediseño sin romper los modelos mentales de los usuarios actuales
- El papel de la consistencia con los patrones del sistema operativo (iOS HIG / Material Design) en la retención
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la experiencia de usuario orientada a la retención a largo plazo con momentos de deleite y patrones de hábito éticos.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Customer retention como responsabilidad de ventas',
                'description'       => 'El equipo de ventas que es dueño de la renovación: el proceso de early renewal, las conversaciones de QBR que construyen la relación y la coordinación con CS que hace que el cliente renueve antes de que alguien le llame la competencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas B2B y estrategia de renovaciones con amplia experiencia en empresas de software y servicios recurrentes. Necesito que me ayudes a construir el proceso por el cual el equipo de ventas se convierte en el dueño activo de la retención y las renovaciones.

Mi contexto:
- Tipo de producto o servicio: [SaaS / servicios profesionales recurrentes / plataforma enterprise / otro]
- Ciclo de contrato típico: [mensual / anual / plurianual]
- ARR o ingresos recurrentes aproximados: [opcional, para calibrar el esfuerzo]
- Modelo de go-to-market actual: [¿quién gestiona la renovación ahora? ¿ventas, CS, o nadie de forma proactiva?]
- Principal problema de retención desde ventas: [el equipo de ventas solo piensa en nuevos logos / las renovaciones se gestionan a última hora / hay fricción con CS sobre quién es el dueño de la cuenta]

Con ese contexto, dame:

1. EL MODELO DE OWNERSHIP DE LA RENOVACIÓN
¿Quién debe ser el dueño de la renovación en una organización de ventas B2B? Dame el framework para definir el modelo de propiedad:
- Los tres modelos posibles (ventas dueñas de todo, CS dueño de retención, modelo híbrido con handoff) y cuándo aplica cada uno
- Cómo definir las responsabilidades claras entre ventas y CS sin fricción ni caídas entre las grietas
- El momento del ciclo de vida del cliente en que ventas debe tomar protagonismo para la renovación (la regla del primer contacto a 120, 90 y 60 días del vencimiento)
- Cómo incentivar económicamente al equipo de ventas para que cuide la retención con la misma energía que pone en la captación

2. EL PROCESO DE EARLY RENEWAL
El early renewal es la renovación que se cierra antes de que el cliente empiece a evaluar alternativas. Dame el proceso completo:
- Cuándo iniciar la conversación de renovación según el tipo de cliente y el tamaño del contrato
- Los argumentos para hacer el early renewal atractivo para el cliente: descuento por firma anticipada, lock-in de precio actual, features incluidas en la renovación
- El proceso de aprobación interna en el cliente: a quién involucrar, cómo ayudar al champion a vender la renovación internamente
- Los disparadores que deben acelerar el proceso de early renewal: competidor sniffing, cambio de sponsor, señales de descontento

3. EL QBR QUE CONSTRUYE LA RELACIÓN
El Quarterly Business Review es la herramienta más potente de retención cuando se hace bien, y la más aburrida cuando se hace mal. Dame el diseño del QBR que el cliente quiere asistir:
- La agenda ideal: el balance entre datos de uso, value delivered, feedback y visión futura
- Cómo preparar el QBR: qué datos recopilar, cómo construir el deck y cuánto debe durar la preparación vs la reunión
- Las preguntas que debes hacer en el QBR para detectar riesgo de churn antes de que sea una crisis
- El formato de la presentación: quién presenta, qué nivel del cliente debe estar en la sala y por qué los QBRs sin C-level del lado del cliente suelen ser señal de problema
- Cómo cerrar el QBR con compromisos concretos de ambas partes

4. COORDINACIÓN VENTAS-CS PARA LA RETENCIÓN
La mayor fuente de churn evitable es la falta de coordinación entre el equipo que vende y el equipo que sirve. Dame el modelo operativo de coordinación:
- El proceso de handoff de ventas a CS: qué información debe pasar, en qué formato y cuándo
- El mecanismo de alerta temprana: cómo CS debe notificar a ventas cuando una cuenta está en riesgo y qué debe hacer ventas al recibirla
- Las reuniones de sincronización que deben existir entre ventas y CS sobre la cartera de cuentas
- Cómo gestionar el conflicto cuando ventas promete algo que CS no puede cumplir

5. SEÑALES DE RIESGO QUE VENTAS DEBE MONITORIZAR
¿Qué señales debe vigilar el equipo de ventas para detectar el riesgo de no renovación antes de que sea demasiado tarde? Dame el sistema de señales de alerta:
- Las señales de uso del producto que indican desenganche
- Las señales relacionales: cambio de interlocutor, silencio del champion, solicitud de reunión sin agenda clara
- Las señales externas: cambio de CEO, fusión, recorte presupuestario, funding round que cambia las prioridades
- El proceso de escalación: cuándo involucrar al manager de ventas y cuándo al ejecutivo de la empresa

6. EL PLAYBOOK DE LA CONVERSACIÓN DE RETENCIÓN
Cuando el cliente dice que está pensando en no renovar, ¿cómo responde el equipo de ventas? Dame el playbook completo:
- Las preguntas de diagnóstico que deben hacerse antes de entrar en modo "defensa"
- Cómo distinguir al cliente que tiene un problema real de producto del que está negociando precio
- El proceso de recuperación: a quién involucrar, qué concesiones son razonables y cuáles sientan precedente peligroso
- Cuándo aceptar el churn con gracia y cómo convertir una cancelación en una referencia futura

7. MÉTRICAS DE RETENCIÓN QUE DEBE TENER VENTAS EN SU DASHBOARD
¿Qué métricas de retención debe ver el equipo de ventas cada semana? Dame el dashboard de retención de ventas:
- GRR (Gross Revenue Retention) y NRR (Net Revenue Retention): la diferencia y cuándo usar cada uno
- Tasa de renovación a tiempo vs tardía: por qué una renovación que cierra el mes del vencimiento es una señal de proceso roto
- Pipeline de renovaciones por quarter: cómo gestionar el forecast de renovaciones con el mismo rigor que el de nuevos logos
- Churn por razón: cómo categorizar los churns para extraer aprendizajes que mejoren tanto el proceso de ventas como el de retención
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el proceso por el cual el equipo de ventas gestiona activamente la retención y las renovaciones.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Retention engineering: construir el producto que la gente usa de forma habitual',
                'description'       => 'El framework de retención del producto: las cohortes de retención, los puntos de abandono y el proceso de iteración que mejora el D7, D30 y D90 de forma sistemática.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management con especialización en métricas de retención y growth engineering. Necesito que me ayudes a construir el framework sistemático para medir, entender y mejorar la retención de mi producto de forma estructurada.

Mi contexto:
- Tipo de producto: [app móvil / web app / SaaS B2B / plataforma / marketplace]
- Métricas de retención actuales si las tienes: [D1, D7, D30 o DAU/MAU ratio]
- Stack de analytics: [Mixpanel / Amplitude / Google Analytics / PostHog / custom / ninguno]
- Tamaño del equipo de producto: [solo / pequeño equipo / equipo con ingenieros dedicados]
- Mayor problema de retención identificado: [no tenemos datos suficientes / sabemos que la retención es baja pero no sabemos por qué / tenemos datos pero no sabemos cómo actuar sobre ellos]

Con ese contexto, dame:

1. EL FRAMEWORK DE MÉTRICAS DE RETENCIÓN
Explícame el framework completo de métricas de retención que debo implementar:
- La diferencia entre retención clásica (N-day retention), retention por rolling window y retention por rango de fechas, y cuándo usar cada una
- Los benchmarks de retención por categoría de producto: qué es bueno y qué es malo en D1, D7, D30 para mi tipo de app
- La diferencia entre DAU/MAU ratio y las curvas de retención: cuándo una buena DAU/MAU puede esconder un problema de retención
- El concepto de retention floor: cómo saber si tu producto ha encontrado su base de usuarios realmente fieles

2. ANÁLISIS DE COHORTES: LEERLAS CORRECTAMENTE
El análisis de cohortes es la herramienta central de retención, pero se lee mal con frecuencia. Dame el tutorial de lectura de cohortes:
- Cómo construir una tabla de cohortes correctamente: el eje de tiempo de adquisición, el eje de periodos de retención y cómo interpretar cada celda
- Los patrones que debes reconocer: la curva que se aplana (usuarios fieles encontrados), la curva que sigue cayendo (problema de valor), el pico en D7 sin D30 (usuario que no ha encontrado el hábito)
- Cómo segmentar cohortes para extraer insights: por canal de adquisición, por segmento de usuario, por feature usada en el onboarding

3. IDENTIFICAR LOS PUNTOS DE ABANDONO
Dame el proceso sistemático para identificar dónde y cuándo se van los usuarios:
- El análisis de funnel de retención: cómo construir el funnel desde registro hasta uso habitual y encontrar el mayor punto de caída
- El análisis de las acciones predictoras de retención: cómo encontrar la "magic action" que correlaciona con quedarse (el equivalente de "7 amigos en 10 días" de Facebook)
- Las técnicas de análisis cualitativo complementarias: encuestas de salida, entrevistas con churned users, sesiones de observación con usuarios que no vuelven

4. EL PROCESO DE ITERACIÓN DE RETENCIÓN
Una vez identificado el problema, ¿cómo itera el equipo para mejorar la retención de forma sistemática? Dame el proceso:
- Cómo priorizar las iniciativas de retención: el framework de impacto esperado en la métrica de retención vs esfuerzo de implementación
- El diseño de experimentos de retención: cómo diseñar un test A/B que mide impacto en retención (el reto del tiempo de espera para ver resultados)
- El ciclo de iteración: de datos a hipótesis, de hipótesis a experimento, de experimento a decisión
- Cómo evitar el trap de optimizar la retención de D1 y descuidar D30

5. FEATURES DE RETENCIÓN SEGÚN LA ETAPA DEL USUARIO
Las iniciativas de retención tienen diferente impacto según el momento del ciclo de vida del usuario. Dame el mapa de iniciativas por etapa:
- Retención de nuevos usuarios (D0-D7): qué palancas tienen mayor impacto en las primeras horas y días
- Retención de usuarios en activación (D7-D30): cómo construir el hábito durante el primer mes
- Retención de usuarios establecidos (D30+): cómo evitar el churn de usuarios que ya encontraron valor pero empiezan a distanciarse
- Resurrección de usuarios perdidos: cuándo y cómo intentar recuperar a usuarios que dejaron de usar el producto

6. NOTIFICACIONES Y COMUNICACIÓN COMO PALANCA DE RETENCIÓN
Dame el framework de comunicación orientada a retención:
- La jerarquía de canales y cuándo usar cada uno (push, email, in-app, SMS)
- El diseño de la secuencia de onboarding por email: los primeros 7 emails, qué enviar, cuándo y qué objetivo tiene cada uno
- Las notificaciones push que retienen vs las que generan opt-out: el framework de decisión
- Cómo personalizar la comunicación según el comportamiento del usuario en el producto

7. DASHBOARD DE RETENCIÓN PARA EL EQUIPO DE PRODUCTO
¿Qué métricas de retención debe revisar el equipo de producto cada semana? Dame el diseño del dashboard:
- Las cinco métricas semanales de retención que no pueden faltar
- Los alertas automáticos que deben dispararse cuando una métrica de retención cae por debajo del umbral
- El ritual de la retención: cómo integrar el review de retención en el proceso de planificación del sprint
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir el framework sistemático de métricas, análisis e iteración para mejorar la retención del producto.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Retención de talento: más allá del salario',
                'description'       => 'Retiene a los empleados que la empresa no puede permitirse perder: los factores de retención más allá del salario, las conversaciones de stay interview y el plan de acción que aborda las causas raíz de la fuga de talento antes de que el empleado empiece a buscar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de talento y retención de empleados con amplia experiencia en empresas en crecimiento. Necesito que me ayudes a construir una estrategia de retención que vaya más allá de los ajustes salariales y aborde las causas reales de la fuga de talento.

Mi contexto:
- Tipo de empresa: [startup / empresa en crecimiento / empresa consolidada / sector público]
- Tamaño del equipo: [número aproximado de personas]
- Tasa de rotación actual: [si la conoces, o descripción cualitativa del problema]
- Perfiles más difíciles de retener: [desarrolladores / comerciales / mandos intermedios / perfiles técnicos específicos]
- Principales causas de salida que conoces: [si has hecho exit interviews o tienes feedback informal]
- Presupuesto para retención: [limitado / moderado / sin restricción especial]

Con ese contexto, dame:

1. LOS FACTORES REALES DE RETENCIÓN
¿Qué hace que un empleado decida quedarse o irse? Dame el mapa de los factores de retención basado en la evidencia:
- El modelo de Herzberg y la diferencia entre factores higiénicos (cuya ausencia genera insatisfacción) y motivadores (que generan compromiso activo): cuáles son en el contexto actual del mercado de trabajo
- Los factores de retención que más peso tienen según el perfil: por qué lo que retiene a un developer senior es diferente de lo que retiene a un perfil comercial o a un mando intermedio
- El papel del manager directo: por qué el 70% del compromiso del empleado depende de su manager y qué significa eso en práctica
- Los factores que la empresa puede controlar y los que no: cómo centrar el esfuerzo donde hay impacto real

2. LA STAY INTERVIEW: CÓMO HACERLA BIEN
La stay interview es la herramienta más poderosa y menos usada de retención. Dame el framework completo:
- Quién debe hacer la stay interview: el manager directo vs RRHH y cuándo cada uno es más apropiado
- Con quién hacerla: todos los empleados vs los de mayor riesgo de fuga vs los más críticos para el negocio
- Las preguntas exactas de una stay interview efectiva: las que generan honestidad real y no respuestas diplomáticas
- Cómo manejar la información: qué hacer con lo que se descubre, cómo actuar sin romper la confianza
- La frecuencia: cuándo hacerlas y cómo integrarlas en el ciclo de gestión del talento
- El error más frecuente: por qué las stay interviews que no van seguidas de acción son peores que no hacerlas

3. EL PLAN DE ACCIÓN SOBRE CAUSAS RAÍZ
Una vez identificadas las causas de la fuga de talento, ¿cómo actuar de forma sistemática? Dame el proceso:
- Cómo priorizar las causas: el framework de impacto en retención vs esfuerzo de resolución
- Las intervenciones para cada causa frecuente: falta de desarrollo profesional, manager tóxico, falta de autonomía, carga de trabajo insostenible, falta de reconocimiento, desconexión con el propósito de la empresa
- Cómo involucrar a los managers en el plan de retención sin que se conviertan en un obstáculo
- El seguimiento: cómo medir si las intervenciones están funcionando antes de que los empleados se vayan

4. EL DESARROLLO PROFESIONAL COMO RETENCIÓN
La falta de crecimiento percibido es una de las causas principales de salida. Dame el framework de desarrollo profesional orientado a la retención:
- Cómo diseñar los career paths que los empleados entienden y en los que creen
- Las conversaciones de desarrollo: la diferencia entre la revisión de desempeño anual y las conversaciones de crecimiento continuas
- Los proyectos de stretch y las asignaciones especiales como herramienta de retención
- El upskilling y la formación: cómo hacer que la inversión en formación sea un imán de retención y no un factor de riesgo (el miedo a formar para que se vayan)

5. RETENCIÓN EN LOS MOMENTOS CRÍTICOS
Hay momentos en el ciclo de vida del empleado en que el riesgo de salida se dispara. Dame el playbook para cada uno:
- El primer año: por qué el mayor riesgo de churn es en los primeros seis meses y qué hacer en ese período
- El momento de la no promoción: cómo gestionar al empleado que esperaba ascender y no ascendió
- El contraoferta: cuándo y cómo hacer una contraoferta, cuándo no tiene sentido hacerla y el problema de las contaofertas como política sistemática
- El momento post-fusión o reorganización: cómo retener el talento clave en los períodos de incertidumbre organizacional

6. RETENCIÓN DE LOS EMPLEADOS DE MAYOR IMPACTO
No todos los empleados tienen el mismo valor estratégico. Dame el marco para gestionar la retención de los empleados críticos:
- Cómo identificar a los empleados de mayor impacto más allá del desempeño: el concepto de "regrettable turnover" y cómo calcularlo
- Los programas de retención diferencial: equity, bonos de permanencia, proyectos especiales — cuándo y para quién
- El plan de sucesión como herramienta de retención: cómo involucrar a los empleados clave en la construcción del futuro de la empresa

7. MEDICIÓN Y REPORTE DE LA RETENCIÓN
¿Cómo mide y comunica RRHH la retención de forma que el liderazgo entienda el coste del problema y la efectividad de las soluciones? Dame el framework de métricas:
- Las métricas de retención que deben reportarse: tasa de rotación voluntaria por segmento, tiempo de permanencia medio, rotación de los primeros 90 días, índice de regrettable turnover
- Cómo calcular el coste del turnover para hacer el caso de inversión en retención
- El dashboard de retención para el comité de dirección: qué mostrar y qué no mostrar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una estrategia de retención de talento que aborde las causas reales de la fuga de empleados clave.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valor del cliente a largo plazo: el LTV como métrica de decisión',
                'description'       => 'Usa el LTV para tomar mejores decisiones de inversión en clientes: el cálculo correcto del lifetime value, los segmentos con mayor LTV y las decisiones de inversión en retención que el análisis de LTV justifica.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas de clientes y unit economics con especialización en el cálculo e interpretación del Customer Lifetime Value (LTV/CLV). Necesito que me ayudes a calcular correctamente el LTV de mis clientes y a usarlo como base para tomar mejores decisiones de inversión en adquisición y retención.

Mi contexto:
- Modelo de negocio: [suscripción / transaccional recurrente / marketplace / venta única con posible recompra / servicios profesionales]
- Ingresos medios por cliente al mes o al año: [indica el dato que tengas]
- Margen bruto aproximado: [en porcentaje o descripción si no lo tienes exacto]
- Tasa de churn mensual o anual: [si la conoces, o descripción cualitativa]
- Coste de adquisición de clientes (CAC): [si lo tienes, o los canales principales de adquisición]
- Número de clientes activos aproximado: [para calibrar la escala]

Con ese contexto, dame:

1. LOS MODELOS DE CÁLCULO DEL LTV
Explícame los diferentes modelos de cálculo del LTV y cuándo usar cada uno:
- El LTV simple: la fórmula básica (ARPU × margen bruto / churn rate) y sus limitaciones
- El LTV con descuento temporal: por qué el dinero futuro vale menos que el dinero de hoy y cómo incorporar el coste de capital al cálculo del LTV
- El LTV probabilístico: los modelos BG/NBD y Pareto/NBD para negocios transaccionales no recurrentes y cuándo son necesarios
- El LTV por cohorte: por qué el LTV calculado sobre cohortes históricas es más fiable que el LTV calculado con promedios

Dame la fórmula que debo usar en mi caso concreto y cómo interpretar el resultado.

2. LOS ERRORES MÁS FRECUENTES EN EL CÁLCULO DEL LTV
Lista los errores que hacen que el LTV calculado sea una ficción peligrosa:
- Usar el margen bruto en lugar del margen de contribución o viceversa según el contexto
- Asumir un churn constante cuando el churn real varía con la antigüedad del cliente
- Ignorar el revenue expansion (upsell y cross-sell) que aumenta el LTV de los clientes que se quedan
- Confundir el LTV medio con el LTV mediano cuando hay clientes que distorsionan la media
- No separar el LTV por segmento y tomar decisiones sobre el promedio que no representa a ningún segmento real

3. SEGMENTACIÓN POR LTV: ENCONTRAR LOS MEJORES CLIENTES
Dame el proceso para segmentar la base de clientes por LTV y extraer insights accionables:
- El análisis RFM (Recency, Frequency, Monetary) como proxy del LTV cuando no tienes datos suficientes
- Cómo identificar los segmentos con mayor LTV: las características demográficas, de comportamiento y de canal de adquisición que predicen un LTV alto
- Cómo usar el LTV de los mejores clientes para mejorar el targeting de adquisición: los lookalike audiences y la optimización del CAC hacia los segmentos de mayor valor
- El segmento de clientes con LTV negativo: cómo identificarlos y qué hacer con ellos

4. EL RATIO LTV/CAC: LA MÉTRICA CENTRAL DE LA ECONOMICS
Explícame el ratio LTV/CAC: qué dice sobre la salud del negocio, cuál es el benchmark por tipo de empresa y qué decisiones de inversión permite justificar:
- ¿Qué ratio LTV/CAC es saludable para mi tipo de negocio?
- ¿Cuánto debería invertir en retención vs adquisición dado mi ratio actual?
- ¿Cuándo tiene sentido aumentar el CAC porque el LTV lo justifica?
- El payback period como complemento del ratio LTV/CAC: por qué una empresa puede tener un ratio excelente y tener un problema de caja

5. LTV COMO HERRAMIENTA DE DECISIÓN DE RETENCIÓN
¿Cómo uso el LTV para justificar y dimensionar la inversión en retención? Dame el framework:
- El cálculo del valor de reducir el churn: ¿cuánto vale en LTV adicional bajar el churn un punto porcentual?
- El presupuesto máximo de retención por cliente: cuánto tiene sentido gastar para retener a un cliente dado su LTV esperado
- La priorización de la cartera de retención: cómo ordenar los clientes en riesgo según el valor que se pierde si se van
- El ROI de los programas de retención: cómo calcular si una inversión en retención tiene sentido financieramente

6. LTV EN LAS DECISIONES FINANCIERAS Y DE INVERSIÓN
¿Cómo usan el LTV los inversores y los equipos financieros para evaluar la salud del negocio? Dame la perspectiva financiera:
- Cómo presentar el LTV a inversores de forma creíble: los supuestos que hay que explicar y los que generan escepticismo
- El LTV como base para el valor de la empresa: la relación entre el LTV de la base de clientes y la valoración del negocio
- Cómo evoluciona el LTV con la escala y qué cambios en el modelo de negocio lo mejoran estructuralmente

7. IMPLEMENTACIÓN PRÁCTICA: DE LOS DATOS AL MODELO
Dame el plan de implementación para construir el modelo de LTV en mi empresa:
- Los datos mínimos que necesito tener bien capturados antes de empezar
- Las herramientas y el stack de datos para calcular el LTV (desde una hoja de cálculo hasta modelos más sofisticados)
- La cadencia de actualización del modelo y los eventos que deben disparar una revisión del cálculo
- Cómo democratizar el acceso al LTV dentro de la empresa: qué equipos lo necesitan y en qué formato
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Calcular el LTV correctamente y usarlo como base para tomar decisiones de inversión en adquisición y retención de clientes.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Fidelización en servicios jurídicos: el cliente recurrente',
                'description'       => 'Construye la relación con clientes que te contratan de forma habitual: los modelos de retainer, el servicio proactivo que genera lealtad y el proceso de convertir a un cliente de un asunto en un cliente de toda la vida.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en despachos de abogados y profesionales jurídicos independientes. Necesito que me ayudes a construir la estrategia de fidelización que transforma a los clientes ocasionales en clientes recurrentes y de largo plazo.

Mi contexto:
- Tipo de práctica jurídica: [despacho generalista / especializado en una o dos áreas / abogado independiente]
- Áreas de práctica principales: [mercantil, laboral, fiscal, civil, inmobiliario, penal, familia, etc.]
- Tipo de cliente predominante: [empresas / particulares / mezcla]
- Modelo de negocio actual: [asunto a asunto / ya tienes algunos retainers / mix]
- Principal reto de fidelización: [los clientes solo me llaman cuando hay un problema / los clientes comparan precios entre asuntos / no tengo visibilidad sobre los clientes que están pensando en cambiar de abogado]

Con ese contexto, dame:

1. EL MODELO DE RETAINER JURÍDICO
¿Cómo funciona el modelo de retainer en servicios jurídicos y cuándo tiene sentido para mi práctica? Dame el diseño completo:
- Los diferentes tipos de retainer: el retainer de disponibilidad (acceso garantizado sin trabajo definido), el retainer de servicios incluidos (un volumen de trabajo predefinido al mes) y el retainer de asesoría continua (consultas ilimitadas dentro de un scope acordado)
- Cómo definir el precio del retainer: el método de fijación de precio, qué incluir, qué queda fuera del retainer y cómo gestionar el exceso
- Los clientes ideales para proponer un retainer: los criterios para identificar qué clientes tienen suficiente volumen o potencial para que el modelo retainer tenga sentido para ambas partes
- El proceso de propuesta: cómo presentar el retainer a un cliente que solo te ha contratado por asuntos, cuándo hacerlo y cómo justificar el valor

2. EL SERVICIO PROACTIVO QUE GENERA LEALTAD
El cliente que recibe alertas y avisos antes de tener el problema percibe un valor completamente diferente del abogado que solo responde cuando le llaman. Dame el sistema de servicio proactivo:
- Qué tipo de proactividad tiene más valor percibido en mi área de práctica: alertas legales y regulatorias, recordatorios de obligaciones, revisiones preventivas
- Cómo construir el sistema: las fuentes de información que debo monitorizar, con qué frecuencia comunicar y a través de qué canal
- El newsletter jurídico como herramienta de fidelización: cómo hacerlo útil en lugar de genérico, a qué segmento de clientes enviarlo y qué frecuencia es la adecuada
- Cómo convertir la proactividad en conversaciones facturables: el servicio proactivo como entrada a nuevos asuntos

3. LA REUNIÓN ANUAL DE REVISIÓN JURÍDICA
El equivalente jurídico del QBR: la revisión anual con el cliente que sirve para revisar lo hecho, anticipar los retos del año siguiente y reforzar la relación. Dame el diseño:
- La agenda de la reunión anual: qué revisar, qué preguntar, qué presentar
- Las preguntas que debes hacer para identificar nuevas necesidades jurídicas que el cliente no ha pensado en traerte
- Cómo preparar la reunión: qué información recopilar sobre el cliente y su negocio antes de la reunión
- Cómo cerrar la reunión con compromisos concretos que generen trabajo adicional y refuercen la percepción de valor

4. DE UN ASUNTO A UN CLIENTE DE TODA LA VIDA
¿Cómo se convierte un cliente de asunto único en un cliente recurrente? Dame el proceso:
- El mapa de las necesidades jurídicas de mi tipo de cliente: las áreas del derecho que suelen aparecer en paralelo o en secuencia con mi área principal de práctica
- El cross-selling ético: cómo identificar y presentar servicios adicionales sin que el cliente sienta que le estás vendiendo lo que no necesita
- El momento adecuado para hablar de otros servicios: cuándo en el ciclo del asunto es natural expandir la conversación
- Cómo involucrar a colegas del despacho o a colaboradores externos para ofrecer al cliente un servicio más completo sin perder la relación principal

5. LA GESTIÓN DE LA RELACIÓN ENTRE ASUNTOS
¿Qué hacer con el cliente cuando no hay un asunto activo? El silencio entre asuntos es el mayor riesgo de pérdida de cliente. Dame el sistema de mantenimiento de la relación:
- La cadencia de contacto mínima para mantener el top of mind sin ser intrusivo
- Los motivos legítimos y valiosos para contactar al cliente cuando no hay un asunto: cumpleaños de la empresa, cambios legales relevantes, artículos de interés, felicitaciones de inicio de año
- Cómo usar LinkedIn y otras redes profesionales para mantener presencia sin saturar
- El CRM del despacho: qué información gestionar sobre cada cliente y qué recordatorios configurar para que ninguna relación importante quede sin atención

6. CÓMO GESTIONAR LA INSATISFACCIÓN Y RECUPERAR LA CONFIANZA
Los clientes que se pierden suelen haberse ido con una queja no expresada. Dame el proceso de gestión de la insatisfacción:
- Las señales de que un cliente está insatisfecho antes de que deje de llamar: los indicadores de enfriamiento de la relación
- El proceso de conversación difícil: cómo abordar la queja de un cliente, qué decir y qué no decir, cómo manejar el error propio y el del cliente
- La recuperación de la confianza: qué gestos concretos ayudan a reconstruir la relación después de un problema
- Cuándo aceptar que un cliente se va y cómo mantener la puerta abierta para el futuro

7. MÉTRICAS DE FIDELIZACIÓN PARA UN DESPACHO
¿Cómo saber si la estrategia de fidelización está funcionando? Dame las métricas que debe monitorizar un despacho:
- Tasa de repetición: porcentaje de clientes que generan más de un asunto en el año
- Ingresos por cliente recurrente vs nuevo cliente: la distribución saludable
- Net Promoter Score simplificado para despachos: cómo medir la satisfacción y la recomendación
- Tiempo medio de relación con el cliente: el indicador de fidelización a largo plazo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir la estrategia de fidelización de un despacho jurídico para convertir clientes de asunto único en clientes recurrentes.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Playbooks de retención: intervenir antes del churn',
                'description'       => 'Diseña los playbooks que salvan los contratos en riesgo: las señales de alerta temprana, el proceso de intervención y los scripts de las conversaciones difíciles que recuperan cuentas que estaban a punto de cancelar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success con especialización en estrategias de retención proactiva y recuperación de cuentas en riesgo. Necesito que me ayudes a diseñar los playbooks que mi equipo de CS usará para detectar e intervenir antes de que el cliente cancele.

Mi contexto:
- Tipo de producto o servicio: [SaaS / plataforma / servicio recurrente / otro]
- Ciclo de facturación y contrato típico: [mensual / anual / multi-año]
- Tamaño del equipo de CS: [número de CSMs y ratio de cuentas por CSM]
- Sistema de health scoring: [¿tienes uno? ¿qué señales incluye?]
- Principal problema de churn ahora mismo: [el churn nos sorprende / detectamos el riesgo tarde / sabemos quién está en riesgo pero no sabemos qué hacer]
- ARR en riesgo mensual aproximado: [para calibrar la prioridad]

Con ese contexto, dame:

1. EL SISTEMA DE SEÑALES DE ALERTA TEMPRANA
¿Cómo construir el sistema que detecta el riesgo de churn antes de que el cliente lo haya decidido? Dame el diseño del sistema de señales:
- Las señales de comportamiento en el producto: los indicadores de uso que predicen el churn con mayor fiabilidad (caída en la frecuencia de login, reducción del número de usuarios activos, abandono de features clave, descenso en el volumen de datos procesados)
- Las señales relacionales: cambio de interlocutor, silencio prolongado, tickets de soporte sin resolver, NPS bajo, queja no resuelta
- Las señales externas: noticias sobre el cliente (recorte de plantilla, cambio de CEO, pérdida de financiación), comportamiento en LinkedIn
- Cómo construir el health score: qué señales incluir, cómo ponderarlas y cómo automatizar la alerta cuando un cliente cruza el umbral de riesgo

2. LOS TRES PLAYBOOKS DE RETENCIÓN
Dame el diseño detallado de los tres playbooks principales según el nivel de riesgo:

PLAYBOOK 1: Riesgo bajo (cliente que muestra señales de enfriamiento)
- El disparador: qué evento activa este playbook
- Las acciones del CSM en los primeros 3 días
- El objetivo de la intervención y cómo medirlo
- El escalado: cuándo pasa al playbook de riesgo medio

PLAYBOOK 2: Riesgo medio (cliente que ha expresado insatisfacción o que tiene problemas sin resolver)
- El disparador: qué evento activa este playbook
- Las acciones del CSM y del manager en los primeros 7 días
- El executive sponsor: cuándo involucrar al liderazgo del proveedor
- El plan de acción conjunto con el cliente: cómo diseñarlo y documentarlo

PLAYBOOK 3: Riesgo alto (cliente que ha solicitado información de cancelación o ha dado señales claras de salida)
- El disparador: qué evento activa este playbook
- El equipo de respuesta: quién se involucra y en qué orden
- La negociación de retención: qué concesiones son razonables y cuáles sientan precedente peligroso
- El criterio de rendición: cuándo aceptar el churn y cómo gestionarlo con gracia

3. SCRIPTS DE CONVERSACIÓN PARA CADA SITUACIÓN
Dame los scripts de las conversaciones más difíciles de retención:

Script 1: La llamada de check-in cuando el uso ha caído sin que el cliente haya dicho nada
- Cómo abrir la conversación sin que el cliente se sienta vigilado
- Las preguntas de diagnóstico que revelan la causa real del enfriamiento
- Cómo cerrar con un compromiso de acción concreto

Script 2: La conversación cuando el cliente dice que está evaluando alternativas
- Cómo responder sin entrar en pánico ni en modo defensa
- Las preguntas que revelan si el cliente está negociando precio o tiene un problema real de valor
- Cómo posicionarte frente a la competencia sin denigrarla

Script 3: La conversación cuando el cliente anuncia que va a cancelar
- Cómo mantener la compostura y hacer las preguntas correctas
- El proceso de "last chance" sin ser desesperado
- Cómo terminar la conversación si no hay vuelta atrás, dejando la puerta abierta

4. LA INTERVENCIÓN EJECUTIVA
Cuando el churn es de alto valor, hay que involucrar al liderazgo. Dame el proceso:
- El criterio de umbral de ARR para escalar a liderazgo ejecutivo
- Cómo preparar al ejecutivo para la llamada: el briefing, los mensajes clave y lo que no debe decir
- El papel del executive sponsor del cliente: cómo conseguir que el contacto de nivel C del cliente esté en la conversación
- El proceso post-intervención: cómo hacer el seguimiento sin que el cliente sienta que lo tienen monitorizado

5. CONCESIONES Y CONTRA-OFERTAS
¿Qué puedes ofrecer para retener a un cliente sin destruir el margen ni crear precedentes peligrosos? Dame el menú de concesiones:
- Las concesiones de precio: descuentos de renovación, créditos, plan downgrade temporal — cuándo y cuántas
- Las concesiones de servicio: CSM dedicado, SLA mejorado, acceso prioritario al equipo de producto
- Las concesiones de producto: acceso anticipado a features, personalización, integración dedicada
- Lo que nunca debes ofrecer: las concesiones que destruyen el margen o que el resto de la base de clientes pedirá cuando se entere

6. MÉTRICAS DE LOS PLAYBOOKS DE RETENCIÓN
¿Cómo saber si los playbooks están funcionando? Dame las métricas de efectividad:
- Tasa de rescate por playbook: el porcentaje de cuentas en riesgo que retienen tras la intervención
- Tiempo de intervención: cuánto tarda el CSM en actuar desde la alerta
- ARR salvado mensual: el impacto financiero de los playbooks
- Costo de retención: cuánto cuesta en concesiones cada euro de ARR retenido
- Recidiva: porcentaje de cuentas "rescatadas" que churnan en los siguientes 90 días (señal de que el problema no se resolvió de verdad)

7. AUTOMATIZACIÓN Y HERRAMIENTAS
¿Qué parte de los playbooks puede automatizarse y qué debe ser siempre humano? Dame el diseño del stack de herramientas:
- Las plataformas de CS que permiten automatizar la detección de señales y la asignación de playbooks (Gainsight, ChurnZero, Totango, HubSpot CS)
- Las alertas automáticas que deben llegar al CSM y al manager sin necesitar revisión manual
- La automatización de la comunicación: los emails de check-in que se pueden automatizar vs los que deben ser siempre personales
- El dashboard de retención: qué debe ver el equipo de CS cada mañana para empezar el día con el foco en las cuentas correctas
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar los playbooks de retención que permiten al equipo de CS detectar e intervenir antes de que el cliente cancele.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Clientes recurrentes: el modelo de retainer del freelance',
                'description'       => 'Construye una base de clientes que te contrata de forma habitual: el modelo de retainer, la propuesta de valor de la relación continua y el proceso de convertir un proyecto puntual en una relación de largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en freelancers y profesionales independientes. Necesito que me ayudes a construir un modelo de negocio basado en clientes recurrentes que me permita tener ingresos predecibles en lugar de depender de proyectos puntuales.

Mi contexto:
- Tipo de servicio freelance: [diseño, desarrollo, copywriting, marketing, consultoría, fotografía, etc.]
- Mercado objetivo: [tipo de clientes que tienes o que quieres tener]
- Modelo actual: [proyecto a proyecto / algunos clientes recurrentes informales / empezando desde cero]
- Ingresos mensuales actuales aproximados y variabilidad: [para entender el nivel de estabilidad actual]
- Mayor frustración con el modelo actual: [la incertidumbre de ingresos / el tiempo perdido en buscar nuevos clientes / los meses buenos y malos / no poder planificar]

Con ese contexto, dame:

1. POR QUÉ EL MODELO DE PROYECTO A PROYECTO ES UN TECHO
Explícame los problemas estructurales del modelo puramente transaccional para un freelance:
- El ciclo de fiesta y hambre: por qué el freelance exitoso suele estar ocupado O buscando clientes, nunca en equilibrio
- El coste oculto de la adquisición de clientes: cuánto tiempo y energía consume cada nuevo proyecto frente al trabajo real
- La imposibilidad de planificar: por qué sin ingresos predecibles no puedes invertir en herramientas, formación o delegación
- El efecto del pipeline vacío en la negociación: cómo la necesidad de trabajo reduce el poder de negociación y lleva a aceptar proyectos por debajo de tu precio ideal

2. EL MODELO DE RETAINER: DISEÑO Y VARIANTES
¿Qué es exactamente un retainer y qué variantes existen para mi tipo de servicio? Dame el diseño de los modelos:
- Retainer de disponibilidad: el cliente paga por tener acceso garantizado a ti, no por un entregable definido. Cuándo tiene sentido, cómo fijar el precio y cuáles son los riesgos
- Retainer de capacidad: el cliente compra un número de horas o días al mes. Cómo gestionar la variabilidad del uso, qué hacer con las horas no usadas y cómo evitar que se convierta en una tarifa por hora disfrazada
- Retainer de resultado: el cliente paga un precio fijo mensual por un resultado o conjunto de entregables recurrentes. El modelo más escalable y el que más protege al freelance. Cómo definir el scope, qué incluir y qué queda fuera
- Suscripción de servicio (productized retainer): el paquete estandarizado que se vende igual a todos los clientes. Las ventajas de la estandarización y los límites de la personalización

3. LA PROPUESTA DE VALOR DE LA RELACIÓN CONTINUA
¿Cómo le explico al cliente por qué un retainer le conviene a él, no solo a mí? Dame los argumentos:
- La ventaja del contexto acumulado: el freelance recurrente que conoce el negocio, el tono de voz, los procesos y el equipo necesita la mitad del tiempo para hacer el doble de trabajo que uno nuevo
- La disponibilidad garantizada: el cliente que tiene un retainer no compite por tu tiempo con otros proyectos urgentes
- La estabilidad presupuestaria para el cliente: un gasto mensual predecible es más fácil de justificar internamente que un proyecto grande y variable
- La velocidad de respuesta: cómo el cliente con retainer tiene acceso prioritario y respuesta más rápida

4. CÓMO CONVERTIR UN PROYECTO EN UN RETAINER
El momento ideal para proponer el retainer es al final de un proyecto exitoso. Dame el proceso:
- El timing perfecto: cuándo en el ciclo del proyecto es el momento de plantear la conversación de retainer
- Las señales de que el cliente está listo para escuchar la propuesta: los indicadores de satisfacción y de necesidad continua
- El script de la propuesta de retainer: las frases exactas para abrir la conversación, cómo presentar las opciones y cómo cerrar
- Cómo manejar el "tenemos que pensarlo": el proceso de seguimiento que no presiona pero mantiene la conversación viva

5. EL CONTRATO Y LOS LÍMITES DEL RETAINER
Un retainer mal definido se convierte en un dolor de cabeza para el freelance. Dame el diseño del contrato:
- Qué debe estar siempre en el contrato de retainer: el scope exacto, lo que no está incluido, el proceso de solicitud de trabajo adicional y el precio del trabajo fuera del scope
- La duración mínima: por qué los retainers mensuales sin compromiso son trampa y cuándo tiene sentido pedir un compromiso de tres o seis meses
- La cláusula de revisión de precio: cómo construir en el contrato el mecanismo para actualizar el precio sin tener que renegociar desde cero
- El proceso de off-boarding: cómo terminar un retainer con gracia si el cliente decide no renovar o tú decides no continuar

6. GESTIONAR VARIOS RETAINERS A LA VEZ
¿Cuántos retainers puede gestionar un freelance sin perder calidad? Dame el framework de gestión de la capacidad:
- Cómo calcular la capacidad máxima de retainers según tu tipo de servicio y el volumen de trabajo de cada cliente
- El sistema de priorización cuando todos los clientes de retainer piden trabajo al mismo tiempo
- Cómo comunicar los límites de capacidad al cliente de retainer sin perder la confianza
- El proceso para crecer: cuándo y cómo empezar a delegar trabajo de retainer en colaboradores o en un equipo pequeño

7. MÉTRICAS DE UN NEGOCIO FREELANCE SALUDABLE CON RETAINERS
¿Cómo saber si el modelo de retainer está funcionando? Dame las métricas que debo monitorizar:
- MRR (Monthly Recurring Revenue) del freelance: cómo calcularlo y qué porcentaje del ingreso total debería venir de retainers
- Churn de retainers: con qué frecuencia cancela un cliente y cuáles son las causas
- LTV del cliente de retainer vs del cliente de proyecto: el argumento numérico para dedicar energía a convertir clientes de proyecto en retainer
- Tiempo de adquisición de retainer vs tiempo de adquisición de proyecto: por qué escalar un negocio de retainers es más eficiente que escalar uno de proyectos
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir un modelo de negocio freelance basado en retainers que genere ingresos predecibles y clientes de largo plazo.',
                'vote_score'        => 44,
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
