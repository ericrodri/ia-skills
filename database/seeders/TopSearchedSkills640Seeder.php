<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills640Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'title'         => 'Diseñar campañas de marketing con mecánicas de gamificación',
                'description'   => 'Crea programas de fidelización, retos virales y experiencias interactivas que aumentan el engagement de la audiencia aplicando principios de diseño de juegos.',
                'profession_id' => 1,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar una campaña de marketing gamificada que aumente el engagement, la retención de clientes y la viralidad utilizando mecánicas de juego aplicadas a la experiencia de marca de manera auténtica y no manipuladora.

contexto: Eres un estratega de marketing con especialización en gamificación y psicología del consumidor. Conoces la diferencia entre gamificación efectiva (que crea valor real para el usuario) y gamificación superficial (que solo añade puntos vacíos que nadie aprecia). Entiendes que las mejores campañas gamificadas hacen que el usuario quiera participar, no que se sienta obligado por la pérdida de algo si no lo hace.

instrucción de contexto:
- Marca/producto: [NOMBRE]
- Objetivo de negocio principal: [adquirir nuevos clientes / retener existentes / aumentar ticket medio / viralidad / reactivar inactivos]
- Audiencia: [descripción de la audiencia y su relación actual con la marca]
- Canal principal: [app móvil / web / redes sociales / tienda física / email / combinación]
- Presupuesto aproximado: [bajo <10K / medio 10-50K / alto >50K]
- Duración de la campaña: [X semanas/meses]

tarea: Diseña el sistema completo de gamificación:

1. Análisis de motivadores de la audiencia:
   Basándote en la teoría de la autodeterminación y el modelo Octalysis de Yu-kai Chou, identifica:
   - Los 3 motivadores principales de tu audiencia (desarrollo épico, pertenencia social, escasez, imprevisibilidad, etc.)
   - Los 2 motivadores que NO funcionarán para esta audiencia específica
   - El "tipo de jugador" predominante (achiever, explorer, socializer, killer según Bartle)
   - Qué mecánicas de juego se alinean con cada motivador

2. Sistema de mecánicas principales:
   Diseña el núcleo del sistema gamificado:
   - Acción que el usuario debe realizar (qué comportamiento quieres incentivar)
   - Sistema de puntos: qué acciones dan puntos, cuántos y por qué esa cantidad
   - Niveles o rangos: cuántos, con qué nombres creativos y qué desbloquean
   - Insignias o logros: 10 insignias con sus condiciones y su diseño (descripción visual)
   - Tabla de clasificación: ¿semanal, mensual, por grupo? ¿Pública o privada?
   - Recompensas tangibles: qué se puede canjear y a qué coste de puntos

3. Loop de engagement principal:
   Dibuja (en texto) el ciclo de engagement de 24 horas, 7 días y 30 días:
   - Qué hace el usuario el primer día (onboarding gamificado)
   - Qué le trae de vuelta al día siguiente (variable reward)
   - Qué construye semana a semana (progresión)
   - Qué hace que no se vaya al mes (pertenencia, estatus, inversión)

4. Campaña de lanzamiento gamificada (8 semanas):
   Para cada semana: tema, mecánica protagonista, reto especial, comunicación y recompensa especial.
   Incluye:
   - Evento de "gran apertura" que genere FOMO y participación masiva inicial
   - Mecánica viral: cómo se comparte y cómo beneficia al que comparte
   - Boss challenge o reto comunitario al final del mes
   - Sistema de referidos con recompensa para ambas partes

5. Contenido de comunicación:
   - Email de invitación al programa (asunto + cuerpo)
   - Notificación push de subida de nivel
   - Post de anuncio en redes sociales
   - Email de reactivación para usuarios inactivos ("¡Te hemos echado de menos!")
   - Mensaje de felicitación por logro especial

6. KPIs y métricas de la campaña:
   - Tasa de participación (usuarios activos / usuarios invitados)
   - DAU/MAU del programa gamificado
   - Puntuación de progresión media
   - Tasa de canje de recompensas
   - Impacto en las métricas de negocio objetivo (retención, ticket medio, etc.)
   - Señales de alerta que indican que la gamificación no está funcionando

7. Riesgos y mitigación:
   - Riesgo de gaming el sistema (usuarios que explotan las reglas sin el comportamiento deseado)
   - Riesgo de pérdida de interés a las 3-4 semanas (el "valle de la gamificación")
   - Riesgo de que las recompensas salgan más caras de lo esperado
   - Cómo manejar a los usuarios que pierden interés sin que abandonen la marca

instrucción ética: Asegúrate de que ninguna mecánica diseñada explota vulnerabilidades psicológicas de manera manipuladora (dark patterns, pérdida compulsiva, etc.). La gamificación debe añadir valor al usuario, no solo extraérselo.
EOT,
            ],
            [
                'title'         => 'Desarrollar mecánicas de juego para e-learning con IA',
                'description'   => 'Implementa sistemas de puntos, retos, narrativas y recompensas en plataformas de formación online para aumentar la tasa de finalización y el aprendizaje real.',
                'profession_id' => 2,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar e implementar un sistema de gamificación técnicamente robusto para una plataforma de e-learning que mejore las métricas de engagement y, más importante, el aprendizaje real y la retención de conocimiento a largo plazo.

contexto: Eres un desarrollador full-stack con especialización en EdTech y gamificación. Conoces los errores más comunes en la implementación técnica de sistemas de gamificación: bases de datos mal diseñadas para consultas frecuentes de leaderboards, race conditions en la asignación de puntos, sistemas de notificaciones que se convierten en spam, y la confusión entre engagement superficial y aprendizaje real.

instrucción de contexto:
- Stack tecnológico: [STACK: React + Node.js / Laravel + Vue / Django + React / etc.]
- Base de datos: [PostgreSQL / MySQL / MongoDB]
- Usuarios simultáneos esperados: [X usuarios]
- Funcionalidades de gamificación a implementar: [puntos / insignias / rankings / desafíos / narrativa / todas]
- Integración con LMS existente: [sí / no / nombre del LMS]

tarea: Diseña la arquitectura técnica completa del sistema de gamificación:

1. Diseño de base de datos:
   Crea el esquema de base de datos completo (con diagramas en texto ASCII o descripción detallada) para:
   - Tabla de usuarios y su perfil gamificado
   - Tabla de puntos con historial de transacciones
   - Tabla de insignias y condiciones de desbloqueo
   - Tabla de niveles y requisitos
   - Tabla de desafíos y participaciones
   - Tabla de rankings (con estrategia de caché para consultas frecuentes)
   - Tabla de eventos de gamificación (log de todas las acciones)
   Para cada tabla: campos, tipos, índices necesarios y relaciones.

2. Sistema de puntos: lógica de negocio:
   Diseña el motor de puntuación:
   - Eventos que generan puntos (con código pseudocódigo o real)
   - Cómo manejar race conditions cuando dos acciones simultáneas dan puntos
   - Sistema de multiplicadores (racha de días, eventos especiales)
   - Caducidad de puntos (si aplica)
   - Auditoría: cómo detectar y prevenir trampas en el sistema
   - Reversal: cómo quitar puntos si una acción se deshace (ejercicio revertido, pago cancelado)

3. Motor de condiciones de insignias:
   Diseña un sistema flexible que evalúe si el usuario merece una insignia:
   - Patrón de diseño recomendado (observer, strategy, rules engine)
   - Cómo definir condiciones complejas sin modificar código (configuración en base de datos)
   - Evaluación síncrona vs. asíncrona (qué condiciones se evalúan en tiempo real vs. en background)
   - Notificación al usuario cuando se desbloquea una insignia
   - Manejo de insignias retroactivas (si defines una nueva insignia, ¿se asigna a usuarios que ya cumplían la condición?)

4. Sistema de rankings escalable:
   Uno de los mayores retos técnicos de la gamificación:
   - Estrategia de ranking en tiempo real vs. ranking pre-calculado
   - Uso de Redis Sorted Sets para rankings en tiempo real
   - Rankings personalizados (global / por curso / por región / entre amigos)
   - Paginación eficiente del ranking
   - Cómo mostrar la posición del usuario sin cargar todo el ranking

5. API de gamificación:
   Diseña los endpoints principales:
   - GET /users/{id}/gamification-profile
   - POST /events (para registrar acciones del usuario)
   - GET /leaderboard (con filtros y paginación)
   - GET /badges (del sistema y del usuario)
   - GET /challenges (activos, del usuario)
   Para cada endpoint: método, ruta, parámetros, respuesta JSON ejemplo, códigos de error.

6. Sistema de desafíos y misiones:
   Arquitectura para retos con duración limitada:
   - Desafío individual vs. grupal vs. todos contra todos
   - Cómo gestionar el inicio y fin automático de desafíos (cron jobs vs. event-driven)
   - Progreso en tiempo real durante el desafío
   - Distribución de recompensas al finalizar

7. Testing y prevención de trampas:
   - Unit tests para el motor de puntuación (casos edge críticos)
   - Rate limiting en acciones que generan puntos
   - Detección de bots y comportamiento anómalo
   - Cómo hacer el sistema auditable (el usuario puede ver de dónde vienen todos sus puntos)

instrucción de rendimiento: El sistema debe soportar que el 20% de los usuarios estén activos simultáneamente sin degradación. Identifica los 3 cuellos de botella más probables y propón su solución.
EOT,
            ],
            [
                'title'         => 'Diseñar sistemas de insignias y recompensas visuales con IA',
                'description'   => 'Crea el sistema visual completo de logros, insignias, avatares y recompensas para plataformas gamificadas que motiven sin resultar infantiles ni condescendientes.',
                'profession_id' => 3,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar el sistema visual completo de gamificación para una plataforma, incluyendo insignias, avatares, indicadores de progreso y recompensas, equilibrando el atractivo visual con la seriedad adecuada para la audiencia objetivo.

contexto: Eres un diseñador visual con experiencia en gamificación y psicología del diseño. Conoces el error más frecuente en el diseño de sistemas de gamificación corporativa: copiar la estética de videojuegos infantiles para una audiencia adulta profesional. Entiendes que la gamificación para adultos debe ser visualmente sofisticada, con capas de significado y progresión que se sienta merecida, no regalada.

instrucción de contexto:
- Plataforma: [NOMBRE]
- Audiencia: [adultos profesionales / universitarios / adolescentes / niños de X a Y años]
- Tono visual: [minimalista y premium / colorido y energético / corporativo moderno / ilustrativo y lúdico]
- Colores de marca existentes: [COLORES o "por definir"]
- Referentes visuales de la marca: [empresas o productos cuya estética admiras]

tarea: Desarrolla el sistema visual de gamificación completo:

1. Filosofía de diseño del sistema:
   - El concepto central que une visualmente todo el sistema (metáfora visual: exploración / construcción / montaña que escalar / astronomía / etc.)
   - Por qué esta metáfora funciona para esta audiencia y este producto
   - Lo que el diseño debe transmitir: [esfuerzo genuino / comunidad / expertise / diversión / seriedad]
   - Lo que el diseño debe evitar transmitir a toda costa

2. Sistema de insignias completo (20 insignias):
   Para cada insignia, describe con detalle suficiente para que un ilustrador pueda crearla:
   - Nombre de la insignia
   - Condición de desbloqueo (en una frase)
   - Descripción visual: forma base, icono principal, colores, detalles decorativos, efecto visual
   - Variantes: insignia locked (antes de obtenerla), unlocked (al obtenerla), highlight (en el perfil del usuario)
   - Breve texto de celebración al desbloquearla (máx. 2 frases)
   Categorías de insignias a incluir: inicio, constancia, dominio, comunidad, desafío especial, milestone de tiempo.

3. Sistema de niveles visual:
   - Número de niveles recomendado y justificación (el equilibrio entre demasiados y muy pocos)
   - Nombre de cada nivel (evita lo genérico: bronce/plata/oro; crea algo temático)
   - Elemento visual distintivo de cada nivel (color, forma, efecto)
   - Cómo se muestra la progresión hacia el siguiente nivel (barra, anillo, círculo que se llena)
   - Animación recomendada al subir de nivel (descripción)

4. Indicadores de progreso:
   Diseña estos componentes UI:
   - Barra de experiencia/progreso: estilo, colores de relleno, animación de avance
   - Contador de racha diaria: diseño para 1, 7, 30, 100 días (progresión visual de la racha)
   - Mapa de progreso del curso (alternativa a la barra de progreso linear)
   - Indicador de posición en el ranking (cómo mostrar el número de forma atractiva)
   - Widget de próximo logro ("a 3 días de conseguir la insignia X")

5. Sistema de avatares y personalización:
   - Qué elementos puede personalizar el usuario con sus puntos o niveles
   - Marco del avatar que cambia según el nivel
   - Accesorio desbloqueables (3 categorías)
   - Cómo mostrar el nivel/rango del usuario en su perfil y en comentarios/foros
   - Badges de rol especial (moderador, experto verificado, instructor)

6. Animaciones y micro-interacciones:
   Describe las animaciones para:
   - Ganar puntos (el número que vuela y desaparece)
   - Subir de nivel (efecto de celebración)
   - Desbloquear una insignia (secuencia de 3 segundos)
   - Completar un módulo
   - Posición en el ranking mejorada
   Especifica: duración, tipo de easing, si hay sonido asociado y cuándo es apropiado el sonido.

7. Guía de estilo del sistema gamificado:
   - Paleta de colores del sistema con sus valores y usos permitidos
   - Tipografía para: números de puntos grandes, nombres de insignias, descripciones
   - Tamaños de insignia para distintos contextos (perfil 80px, lista 40px, notificación 24px)
   - Espaciado y layout cuando se muestran múltiples insignias
   - Versión de los elementos para modo oscuro

instrucción de accesibilidad: El sistema visual debe funcionar para usuarios con daltonismo rojo-verde (el tipo más común). Indica específicamente cómo se diferencias los elementos que actualmente solo se diferencian por color.
EOT,
            ],
            [
                'title'         => 'Gamificar el proceso de ventas y la formación del equipo comercial',
                'description'   => 'Diseña competencias, rankings y sistemas de incentivos gamificados para equipos de ventas que aumenten la motivación, el aprendizaje y los resultados sin crear competencia tóxica.',
                'profession_id' => 4,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un sistema de gamificación para el equipo de ventas que aumente la motivación, acelere el onboarding de nuevos comerciales, mejore el aprendizaje continuo y genere competencia sana que eleve a todo el equipo sin crear dinámicas tóxicas.

contexto: Eres un director de ventas con experiencia en la gamificación de equipos comerciales. Has visto cómo los sistemas mal diseñados generan toxicidad (el número 1 siempre gana, los demás se desaniman), short-termism (vender lo que da puntos, no lo que necesita el cliente) y goodhart's law (cuando una métrica se convierte en objetivo, deja de ser una buena métrica). Tu enfoque diseña sistemas que hacen crecer a todo el equipo, no solo al top performer.

instrucción de contexto:
- Tamaño del equipo de ventas: [X personas]
- Tipo de venta: [B2B enterprise / B2B SMB / B2C / inside sales / field sales]
- Ciclo de venta: [días / semanas / meses]
- Métricas actuales de ventas: [revenue / unidades / contratos / renovaciones]
- Mayor problema del equipo: [desmotivación / falta de aprendizaje / competencia tóxica / onboarding lento / bajo pipeline]

tarea: Diseña el sistema gamificado de ventas:

1. Diagnóstico del equipo y sus motivadores:
   Basándote en los distintos perfiles de vendedor (el cazador, el agricultor, el consultor, el JBDI), diseña el sistema teniendo en cuenta:
   - Qué mueve a los top performers (generalmente no son solo los puntos)
   - Qué necesitan los mid-performers para dar el salto
   - Cómo evitar que los bottom performers se desconecten completamente
   - Los motivadores no monetarios más efectivos para equipos comerciales

2. Sistema de puntos para ventas:
   Diseña el sistema de puntuación que va más allá del revenue:
   - Puntos por actividades de pipeline (llamadas, demos, propuestas)
   - Puntos por hitos del ciclo de venta (first meeting, proposal sent, negotiation)
   - Puntos por cierre (con bonificadores por deal size, velocidad, cross-sell)
   - Puntos por formación y desarrollo (completar cursos, obtener certificaciones)
   - Puntos por comportamiento de equipo (mentoring, compartir best practices)
   - Cómo ponderar actividades vs. resultados (el equilibrio crítico)

3. Competiciones y retos:
   Diseña 4 tipos de competiciones para distintos momentos y objetivos:
   - Reto de arranque de mes (generar pipeline rápido)
   - Maratón mensual (consistencia a lo largo del mes)
   - Duelo por parejas (mezcla deliberada de niveles para mentoring)
   - Reto de equipo completo vs. objetivo colectivo (cuando la suma importa más que el individuo)
   Para cada competición: duración, mecánica, qué se mide, recompensa y cómo evitar efectos secundarios negativos.

4. Sistema de niveles para el desarrollo del vendedor:
   Define 5-6 niveles del vendedor con:
   - Nombre creativo (alineado con la cultura de la empresa)
   - Qué se necesita para subir (combinación de resultados, habilidades y tiempo)
   - Qué beneficios y responsabilidades tiene cada nivel
   - Cómo el sistema empuja el desarrollo, no solo el rendimiento

5. Programa de formación gamificada para el equipo:
   - Onboarding gamificado: los primeros 90 días con hitos y recompensas
   - Biblioteca de conocimiento con puntos por contribuir
   - Roleplay y simulaciones de ventas con puntuación
   - Certificaciones internas con insignias visibles en el CRM
   - "La academia de ventas": cómo convertir el aprendizaje en algo cool, no obligatorio

6. Dashboard y visibilidad:
   - Qué ve el vendedor en su dashboard personal (sin paralizarlo con datos)
   - Qué ve el manager (sin que se convierta en micromanagement)
   - Leaderboard: público vs. privado, por qué métricas y con qué frecuencia se actualiza
   - Cómo celebrar los logros en equipo (reunión semanal, canal de Slack, newsletter interna)

7. Integración con CRM:
   - Cómo integrar el sistema gamificado con Salesforce / HubSpot / Pipedrive
   - Acciones del CRM que automáticamente generan puntos
   - Dashboard de gamificación dentro del CRM
   - Alertas automáticas a managers cuando un vendedor logra un hito importante

instrucción anti-toxicidad: Incluye una sección específica de "cosas que este sistema deliberadamente NO hace" para evitar los efectos secundarios más comunes en la gamificación de ventas: presión excesiva, comportamientos antiéticos hacia clientes, sacrificio del trabajo en equipo.
EOT,
            ],
            [
                'title'         => 'Diseñar sistemas de puntos y niveles para productos digitales con IA',
                'description'   => 'Crea la arquitectura de gamificación para apps y plataformas: economía de puntos, sistema de niveles, recompensas y mecánicas de retención basadas en comportamiento del usuario.',
                'profession_id' => 5,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar el sistema completo de gamificación para un producto digital, desde la economía de puntos hasta los mecanismos de retención a largo plazo, con un framework de toma de decisiones que evite las trampas más comunes del producto gamificado.

contexto: Eres un Product Manager especializado en engagement y gamificación con experiencia en apps con millones de usuarios activos. Conoces los fracasos más sonados de la gamificación mal aplicada: sistemas que generan engagement artificial pero no mejoran la retención real, economías de puntos que generan inflación, rankings que desalientan a la mayoría o mechanics que funcionan los primeros 3 días y luego nadie usa. Tu enfoque es la gamificación centrada en el valor del usuario, no en el engagement como fin en sí mismo.

instrucción de contexto:
- Producto: [NOMBRE]
- Categoría: [app de fitness / plataforma de aprendizaje / app de productividad / red social / marketplace / app de salud]
- Comportamiento que quieres reforzar: [COMPORTAMIENTO: usar la app diariamente / completar tareas / crear contenido / hacer compras / compartir / etc.]
- Usuarios actuales: [X usuarios activos mensuales]
- Problema principal: [retención a 30 días / activación de nuevos usuarios / frecuencia de uso / monetización / viralidad]

tarea: Diseña el sistema de gamificación de producto:

1. Diagnóstico: ¿necesita este producto gamificación?
   Antes de diseñar, responde honestamente:
   - ¿Cuál es el problema real de engagement que se intenta resolver?
   - ¿Es la gamificación la solución correcta o hay otras alternativas?
   - ¿El core value del producto es suficientemente fuerte para que la gamificación lo amplifique?
   - Señales de que la gamificación será un parche y no una solución
   - El test de la "capa de gamificación": si quitaras todos los puntos y badges, ¿los usuarios seguirían usando el producto?

2. Economía de puntos (game economy):
   Diseña el sistema económico completo:
   - Fuentes de puntos: qué acciones generan puntos y cuántos
   - Sumideros: cómo se gastan los puntos (canjear recompensas, desbloquear features, etc.)
   - Inflación y deflación: cómo mantener el valor de los puntos estable en el tiempo
   - Curva de progresión: ¿lineal, exponencial o progresiva? Con justificación matemática
   - Puntos como moneda interna vs. puntos como indicador de estatus
   - Simulación de la economía: calcula cuántos puntos acumula un usuario activo en 30/90/365 días

3. Sistema de niveles y progresión:
   - Número óptimo de niveles (con la curva de XP entre cada uno)
   - El "muro de nivel": dónde ponerlo estratégicamente y por qué
   - Qué desbloquea cada nivel (features, permisos, cosmética, acceso anticipado)
   - Cómo manejar a los usuarios que llegan al nivel máximo (el "endgame problem")
   - Estatus vs. poder: qué debe dar la progresión a nivel de estatus social vs. ventajas funcionales

4. Mecánicas de retención por horizonte temporal:
   Diseña mecánicas específicas para:
   - Retención en las primeras 24 horas (el momento más crítico)
   - Retención en la primera semana (formación de hábito)
   - Retención a 30 días (el usuario decide si se queda)
   - Retención a 90+ días (usuario habituado que puede aburrirse)
   - Reactivación de usuarios caídos (cómo traerlos de vuelta sin spam)

5. Mecánicas sociales y virales:
   - Ranking: cómo diseñarlo para motivar al 80% del usuario, no solo al top 1%
   - Desafíos entre amigos vs. competición global
   - Gifting: regalar items a otros usuarios (cómo genera viralidad)
   - Cooperación: mecánicas de equipo que crean pertenencia
   - Social proof: cómo mostrar la actividad de otros sin ser invasivo

6. Framework de experimentación:
   Cómo testear si la gamificación está funcionando:
   - Métricas de gamificación que sí predicen retención real (vs. vanity metrics)
   - Diseño del A/B test para validar cada mecánica antes de implementarla
   - Qué significan los resultados del test (cómo interpretarlos sin sesgos)
   - Cuándo pivota una mecánica que no funciona vs. cuándo le das más tiempo

7. Monetización de la gamificación:
   - Cosmética de pago vs. ventaja de pago (y por qué la segunda es peligrosa)
   - Battle pass o pase de temporada: ¿aplica a este producto?
   - Loot boxes: regulación, ética y alternativas
   - Premium membership con beneficios de gamificación exclusivos

instrucción de calidad del producto: Para cada mecánica propuesta, indica el riesgo de abuso o efecto secundario negativo y cómo mitigarlo. La gamificación bien diseñada anticipa cómo los usuarios intentarán "jugar al sistema".
EOT,
            ],
            [
                'title'         => 'Gamificar el onboarding y la formación corporativa con IA',
                'description'   => 'Transforma el proceso de inducción de empleados y los programas de formación interna en experiencias motivadoras usando insignias, misiones y retos adaptados a la cultura organizacional.',
                'profession_id' => 6,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un programa de onboarding y formación corporativa gamificado que reduzca el tiempo hasta la productividad de los nuevos empleados, aumente las tasas de finalización de formaciones y mejore la retención del conocimiento a largo plazo, todo ello de manera apropiada para un entorno profesional.

contexto: Eres un especialista en Learning and Development (L&D) con experiencia en gamificación corporativa. Has aprendido que el mayor error en la gamificación del onboarding es el tono: muchas empresas crean sistemas que parecen infantiles o condescendientes para empleados adultos con carreras profesionales establecidas. Tu enfoque equilibra el diseño de juego con el respeto profesional y la cultura organizacional.

instrucción de contexto:
- Empresa: [TIPO DE EMPRESA: startup tech / consultora / empresa industrial / retail / banco]
- Tamaño: [X empleados]
- Cultura: [muy formal / mixta / informal / startup]
- Duración del onboarding actual: [X días/semanas]
- Principales problemas: [bajo engagement con el contenido / olvidan lo aprendido / no conocen a sus compañeros / tardan mucho en ser productivos]
- Plataforma de formación existente: [LMS: Moodle / Cornerstone / Workday Learning / sin LMS]

tarea: Diseña el programa gamificado completo:

1. Filosofía del programa:
   - Por qué la gamificación funcionará en ESTA cultura específica (y los ajustes necesarios si la cultura es conservadora)
   - Cómo presentar el programa a los nuevos empleados sin que parezca infantil
   - El nombre interno del programa (que no llame "juego" a algo que los empleados tomarán en serio)
   - Qué recompensas son apropiadas en un entorno profesional (evitar: juguetes, pegatinas; incluir: tiempo, visibilidad, acceso)

2. Mapa de onboarding gamificado (primeros 90 días):
   Divide en 3 fases con hitos claros:
   Fase 1 - Exploración (días 1-30):
   - Misiones de descubrimiento (conocer la empresa, los productos, los procesos)
   - 3 insignias desbloqueables con sus condiciones
   - El reto social: conectar con X personas de distintos departamentos
   - Hito de celebración al final de la fase

   Fase 2 - Integración (días 31-60):
   - Misiones de aplicación (primer proyecto real, primera contribución)
   - Desafío con el manager: qué hitos requieren validación del responsable directo
   - Peer learning: aprender algo de un compañero y enseñar algo que sé
   - Reconocimiento público del equipo

   Fase 3 - Contribución (días 61-90):
   - Misiones de impacto (contribución medible al equipo)
   - Transmisión del conocimiento: el nuevo empleado se convierte en guía del siguiente
   - Celebración de graduación y su significado en la cultura de empresa

3. Sistema de misiones formativas:
   Diseña 15 misiones para el catálogo de formación continua (más allá del onboarding):
   Para cada misión:
   - Nombre de la misión (evocador, no genérico)
   - Contenido de formación asociado
   - Acción que debe completar el empleado para ganarla
   - Recompensa específica
   - Tiempo estimado de finalización
   Áreas a cubrir: habilidades técnicas del puesto, habilidades transversales, cultura y valores, cumplimiento y compliance, liderazgo.

4. Sistema de insignias profesionales:
   20 insignias apropiadas para un entorno corporativo:
   - 5 de onboarding
   - 5 de formación técnica
   - 5 de comportamiento (mentoring, colaboración, innovación)
   - 3 de milestone temporal (3 meses, 1 año, 5 años)
   - 2 especiales (reconocimiento del manager, del equipo)
   Para cada insignia: nombre, descripción, cómo se obtiene y cómo se muestra (perfil de LinkedIn corporativo, firma de email, Slack).

5. Reconocimiento y celebración:
   - Cómo celebrar los logros sin interrumpir el trabajo (canales de Slack, newsletter semanal, wall of fame)
   - Programa de reconocimiento entre pares (peer-to-peer recognition gamificado)
   - Cómo involucrar a los managers en el reconocimiento sin que se convierta en burocracia
   - El momento de celebración presencial (qué hitos merecen reconocimiento en persona)

6. Métricas de éxito del programa:
   - Tiempo hasta la primera contribución significativa (vs. baseline sin gamificación)
   - Tasa de finalización de módulos de formación
   - Net Promoter Score del programa de onboarding
   - Retención a 6 y 12 meses de empleados que pasaron por el programa gamificado
   - Velocidad de integración cultural (cómo medirla)

7. Gestión del programa por RRHH:
   - Qué debe hacer el equipo de RRHH semanalmente para mantener vivo el programa
   - Cómo actualizar el contenido de las misiones cuando cambia la empresa
   - Cómo manejar a los empleados que no quieren participar (nunca obligatorio)
   - Revisión semestral del programa: qué métricas indican que necesita una renovación

instrucción de inclusión: El programa debe ser igualmente atractivo para empleados de distintas generaciones (Baby Boomers, Millennials, Gen Z), distintos niveles de familiaridad con la tecnología y distintas culturas. Señala los ajustes necesarios para cada caso.
EOT,
            ],
            [
                'title'         => 'Crear simulaciones financieras gamificadas para formación con IA',
                'description'   => 'Diseña juegos de simulación de negocios, mercados financieros y gestión de presupuestos para formar equipos financieros y directivos en entornos seguros de aprendizaje.',
                'profession_id' => 7,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar simulaciones financieras gamificadas que permitan a equipos de finanzas, directivos y responsables de negocio practicar toma de decisiones financieras complejas en un entorno seguro, aprendiendo de los errores sin consecuencias reales.

contexto: Eres un experto en learning by doing financiero, con experiencia diseñando business simulations para programas MBA y formación corporativa de alto nivel. Conoces la diferencia entre un juego financiero superficial (que solo entrena cálculos mecánicos) y una simulación auténtica que desarrolla el juicio financiero, la gestión de incertidumbre y el pensamiento sistémico.

instrucción de contexto:
- Audiencia: [CFOs y controllers / directivos no financieros / analistas junior / equipo de ventas / equipo de operaciones]
- Objetivo de aprendizaje principal: [gestión de cash flow / toma de decisiones de inversión / presupuestación / valoración / gestión de riesgo / finanzas para no financieros]
- Duración disponible para la simulación: [X horas en X sesiones]
- Formato: [individual / equipos / combinado]
- Nivel previo de conocimientos financieros: [ninguno / básico / intermedio / avanzado]

tarea: Diseña la simulación completa:

1. Narrativa y contexto de la simulación:
   Crea la empresa ficticia que servirá de escenario:
   - Nombre, sector e historia de la empresa
   - Situación financiera inicial (con sus retos y oportunidades)
   - Personajes clave del juego (CEO, clientes, competidores, inversores)
   - El reto principal que los participantes deben resolver
   - Los dilemas éticos integrados en la simulación (no todo es solo maximizar el profit)

2. Mecánicas de juego financiero:
   Para la simulación de [OBJETIVO_APRENDIZAJE]:
   - Los indicadores financieros que el participante debe gestionar (máx. 5-7 para no abrumar)
   - Las decisiones que puede tomar en cada ronda (3-5 opciones con distintas consecuencias)
   - Cómo se conectan las decisiones de una ronda con los resultados de la siguiente (causa-efecto financiero)
   - Los eventos aleatorios o de mercado que introducen incertidumbre
   - Las trampas más comunes que los participantes caen (y qué enseñan esas caídas)

3. Estructura de rondas:
   Diseña el flujo por rondas (cada ronda = 1 trimestre o período):
   Para cada ronda:
   - Información financiera disponible al inicio
   - Las 3-5 decisiones que el equipo debe tomar con su justificación
   - Eventos del mercado o empresa que ocurren
   - Resultados financieros de las decisiones tomadas
   - Indicadores actualizados
   - Puntuación de la ronda (qué se valora más allá del profit)

4. Sistema de puntuación multidimensional:
   La puntuación no puede ser solo "quien tiene más dinero gana":
   - Indicadores de salud financiera (liquidez, solvencia, rentabilidad)
   - Indicadores de gestión (cumplimiento de presupuesto, calidad de previsiones)
   - Indicadores de aprendizaje (calidad de las justificaciones de las decisiones)
   - Indicadores de ética y sostenibilidad
   - Cómo pondera cada indicador en la puntuación final

5. Debriefing y aprendizaje post-simulación:
   El momento más importante de toda la simulación:
   - Preguntas de reflexión individual (qué hiciste, por qué, qué cambiarías)
   - Comparativa de resultados entre equipos (sin convertirlo en vergüenza pública)
   - Los 5 conceptos financieros que la simulación debería haber solidificado
   - Conexión con situaciones reales de la empresa del participante
   - Plan de acción personal: cómo aplicar lo aprendido la próxima semana

6. Material del facilitador:
   Guía completa para quien dirige la simulación:
   - Cómo presentar la simulación sin revelar las trampas
   - Cómo gestionar al equipo que va perdiendo (para que no se desconecte)
   - Cómo gestionar al equipo que domina (para que siga aprendiendo)
   - Las preguntas que debería hacer en cada ronda para profundizar el aprendizaje
   - Señales de alerta de que la simulación está perdiendo engagement

7. Adaptación digital:
   Si la simulación se convierte en herramienta digital:
   - Flujo de usuario en pantalla
   - Datos que el sistema debe calcular automáticamente
   - Cómo generar los estados financieros de la empresa ficticia automáticamente
   - Posibilidad de guardar y continuar partidas
   - Modo multiplayer asíncrono vs. sesión en vivo

instrucción pedagógica: Asegúrate de que la simulación diseñada enseña el pensamiento financiero sistémico, no solo la aplicación mecánica de fórmulas. La diferencia está en si el participante puede transferir lo aprendido a situaciones nuevas.
EOT,
            ],
            [
                'title'         => 'Diseñar programas de cumplimiento normativo con gamificación',
                'description'   => 'Convierte la formación obligatoria en compliance, RGPD, prevención de riesgos y normativa legal en experiencias gamificadas que garanticen la retención real del conocimiento.',
                'profession_id' => 8,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Transformar los programas de formación en compliance y cumplimiento normativo (RGPD, prevención de riesgos laborales, antisoborno, blanqueo de capitales, etc.) en experiencias de aprendizaje gamificadas que garanticen la retención del conocimiento y el cambio de comportamiento real, cumpliendo al mismo tiempo con los requisitos regulatorios de documentación.

contexto: Eres un especialista en compliance y formación con experiencia en el diseño de programas formativos para entornos regulados. Conoces el problema central del compliance training: los empleados lo perciben como una obligación burocrática, hacen clic en "siguiente" lo más rápido posible, y no retienen nada. El resultado es que la empresa puede demostrar que hizo la formación, pero no que sus empleados saben comportarse de manera conforme. Tu enfoque gamificado busca cambiar el comportamiento real, no solo el checkbox.

instrucción de contexto:
- Tipo de compliance: [RGPD / Prevención de Riesgos Laborales / Antisoborno / AML-KYC / Protección de Datos / Código de Conducta]
- Sector: [financiero / sanidad / industria / tecnología / retail / todos]
- Audiencia: [todos los empleados / mandos intermedios / alta dirección / roles específicos]
- Formato actual de la formación: [vídeos aburridos / PowerPoint / test de 10 preguntas / nada estructurado]
- Requisito regulatorio de evidencia: [certificado / registro de finalización / tiempo mínimo / evaluación con nota mínima]

tarea: Diseña el programa gamificado de compliance:

1. Análisis del problema pedagógico real:
   - Por qué los programas tradicionales de compliance fallan en cambiar el comportamiento
   - La diferencia entre "saber las normas" y "actuar de manera conforme"
   - Qué comportamientos concretos quieres que cambien (no "que conozcan el RGPD" sino "que pidan consentimiento antes de añadir a alguien al CRM")
   - Los momentos de verdad: las 5 situaciones reales del día a día donde el empleado puede incumplir o cumplir

2. Estructura del programa gamificado:
   Divide la formación en módulos con temática narrativa:
   - Narrativa principal: crea un caso o historia que atraviesa todo el programa (el empleado que investiga una brecha de seguridad, el asesor que enfrenta dilemas éticos, etc.)
   - Episodios: cada módulo formativo es un "episodio" de la historia con su dilema
   - Cliffhanger: cómo terminar cada módulo dejando al empleado con ganas del siguiente
   - Resolución: el empleado como protagonista que toma las decisiones correctas (y ve las consecuencias de las incorrectas)

3. Mecánicas de compliance gamificado:
   Diseña estas mecánicas específicas para compliance:
   - Dilema del día: un escenario ético de 2 minutos diarios (push notification o email)
   - Simulación de incidente: el empleado debe responder a una situación de riesgo real (phishing, fuga de datos, solicitud sospechosa)
   - Quiz de refuerzo espaciado: preguntas enviadas días después de la formación para verificar retención
   - Reto del mes: un comportamiento específico a practicar durante 30 días
   - Certificación por capas: niveles de certificación para distintos perfiles de riesgo

4. Sistema de evaluación con validez regulatoria:
   El sistema debe poder demostrar a un auditor:
   - Que el empleado recibió la formación (registro de acceso y tiempo)
   - Que la entendió (evaluación con nota mínima, no solo hacer clic)
   - Que puede aplicarla (evaluación de escenarios, no solo preguntas de test)
   - Que se actualiza cuando cambia la normativa (log de versiones y re-certificaciones)
   Diseña el sistema de evidencia documental requerido.

5. Leaderboard de compliance sin nombres:
   La privacidad es crítica en compliance. Diseña:
   - Cómo mostrar el progreso colectivo del equipo sin identificar a individuos
   - Ranking anónimo por departamento (no por persona)
   - Cómo motivar al manager a reforzar el programa en su equipo
   - Alertas al manager sobre su equipo (sin nombrar quién incumple)

6. Comunicación y lanzamiento del programa:
   - Email de lanzamiento que cambie la percepción de "otra formación aburrida"
   - Cómo involucrar al Comité de Dirección para que sea un referente
   - Recordatorios que no sean spam
   - Celebración del equipo que mejor cumple (sin que parezca una delación de los que no)

7. Mejora continua:
   - Cómo actualizar el programa cuando cambia la normativa
   - Cómo identificar los temas donde el conocimiento es más débil
   - Revisión anual del programa: qué indicadores determinan si está funcionando
   - Integración con incidentes reales: si ocurre un incidente, cómo se incorpora como caso de aprendizaje anonimizado

instrucción legal: El programa debe cumplir con los requisitos de formación establecidos por [NORMATIVA ESPECÍFICA] y poder presentarse como evidencia en una auditoría regulatoria. Indica qué elementos del diseño son críticos para este cumplimiento.
EOT,
            ],
            [
                'title'         => 'Diseñar programas de fidelización gamificados para atención al cliente',
                'description'   => 'Crea sistemas de puntos, niveles VIP y retos de lealtad para aumentar la retención de clientes, el valor por cliente y la satisfacción en programas de fidelización.',
                'profession_id' => 9,
                'difficulty'    => 'beginner',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un programa de fidelización gamificado que aumente la retención de clientes, el valor promedio por cliente y la satisfacción, creando una experiencia de lealtad que los clientes realmente valoren y no perciban como manipulación.

contexto: Eres un especialista en Customer Experience y programas de fidelización con experiencia diseñando para marcas de retail, servicios y suscripción. Has analizado por qué la mayoría de los programas de puntos fracasan: los clientes no entienden cuánto vale un punto, las recompensas no son suficientemente atractivas, el sistema es demasiado complicado o la marca acumula una deuda de puntos que luego no puede pagar. Tu enfoque es la simplicidad radical y el valor real percibido.

instrucción de contexto:
- Empresa/marca: [NOMBRE]
- Tipo de negocio: [e-commerce / retail físico / servicios de suscripción / restauración / viajes / app]
- Ticket medio actual: [€X]
- Frecuencia de compra actual: [X veces al mes/año]
- Objetivo principal del programa: [aumentar frecuencia / aumentar ticket medio / reducir churn / reactivar clientes / NPS]
- Presupuesto para recompensas: [X% del revenue o €X al mes]

tarea: Diseña el programa de fidelización gamificado completo:

1. Auditoría del programa actual (si existe):
   O, si es nuevo, análisis de la oportunidad:
   - ¿Por qué los clientes compran más de una vez actualmente? (motivación real)
   - ¿Qué haría que un cliente leal hablase bien de tu marca a un amigo?
   - ¿Cuánto vale retener a un cliente vs. adquirir uno nuevo? (LTV vs. CAC)
   - Los 3 momentos en el journey del cliente donde la gamificación puede tener más impacto

2. Estructura del programa (máxima simplicidad):
   Regla de oro: si el cliente no puede explicar el programa en 15 segundos, es demasiado complicado.
   Define:
   - El nombre del programa (memorable, positivo, que no suene a "trampa")
   - El mecanismo central: ¿puntos por euro gastado? ¿Niveles por frecuencia? ¿Cashback directo? ¿Combinación?
   - La regla principal que el cliente debe recordar (una sola regla)
   - Cómo se accede (sin app obligatoria si es posible, o con app que tiene valor propio)

3. Niveles de membresía (VIP tiers):
   Define 3-4 niveles con nombres temáticos:
   Para cada nivel:
   - Nombre (sin usar bronce/plata/oro si es posible)
   - Requisito para acceder (en términos que el cliente entienda)
   - Beneficios concretos (no "acceso prioritario" sino "respuesta en menos de 2 horas")
   - El beneficio sorpresa de cada nivel (lo que no se anuncia y sorprende al cliente)
   - Cómo se comunica la subida de nivel (momento wow)
   - Consecuencia de bajar de nivel (cómo gestionarla sin que el cliente se sienta castigado)

4. Sistema de misiones y retos:
   10 retos o misiones que los clientes pueden completar para ganar puntos extra o desbloquear beneficios:
   - Reto de primera compra (para convertir trial en habitual)
   - Reto de frecuencia (comprar X veces en Y días)
   - Reto de categoría (probar algo que nunca han comprado)
   - Reto social (referir a un amigo, compartir en redes)
   - Reto de cumpleaños
   - Reto de temporada o campaña
   Para cada reto: nombre, mecánica, recompensa y duración.

5. Recompensas que generan valor real:
   Diseña el catálogo de recompensas con 3 categorías:
   - Recompensas monetarias (descuentos, cashback): valor, cuándo canjear
   - Recompensas de experiencia (acceso anticipado, eventos, atención VIP)
   - Recompensas de estatus (insignias, personalización, reconocimiento público)
   Para cada recompensa: coste en puntos, coste real para la empresa y valor percibido por el cliente.

6. Comunicación del programa:
   - Email de bienvenida al programa (asunto + cuerpo completo)
   - Email de "puntos a punto de caducar" (sin ser agresivo)
   - Notificación de subida de nivel (formato app y email)
   - Resumen mensual de puntos y progreso
   - Email de reactivación para clientes que no han interactuado en 60 días

7. Métricas de éxito del programa:
   - Tasa de inscripción (% de clientes que se unen)
   - Tasa de participación activa (% que acumula puntos regularmente)
   - Tasa de canje (% de puntos que se canjean vs. los acumulados)
   - Impacto en ticket medio (miembros vs. no miembros)
   - Impacto en frecuencia de compra
   - NPS del programa específicamente (no del producto)
   - Deuda de puntos pendiente y cómo gestionarla

instrucción de honestidad: El programa debe ser 100% transparente. El cliente siempre debe poder saber cuántos puntos tiene, cuánto valen en euros reales y cuándo caducan. La gamificación no puede usarse para esconder condiciones desfavorables.
EOT,
            ],
            [
                'title'         => 'Crear experiencias de aprendizaje gamificadas para clientes como freelancer',
                'description'   => 'Diseña, desarrolla y vende proyectos de gamificación educativa para empresas: cursos gamificados, academias de marca y programas de formación de clientes.',
                'profession_id' => 10,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Construir un negocio freelance de diseño e implementación de experiencias de aprendizaje gamificadas para empresas, con servicios claramente definidos, propuesta de valor diferenciada y proceso de entrega que permita escalar sin perder calidad.

contexto: Eres un consultor de negocio especializado en freelancers de la industria del aprendizaje y el diseño instruccional. Conoces el mercado de la gamificación corporativa: hay mucha demanda, pocas personas con expertise real, y la mayoría de las empresas no saben exactamente qué necesitan. Quien sepa hacer el diagnóstico correcto antes de proponer la solución se posiciona como consultor, no como proveedor.

instrucción de perfil del freelancer:
- Expertise principal: [diseño instruccional / desarrollo e-learning / UX/UI / gamificación teórica / todas]
- Herramientas dominadas: [Articulate 360 / Adobe Captivate / Lectora / Figma / código propio]
- Tipos de empresa objetivo: [corporaciones / startups / sector educativo / ONGs / gobierno]
- Año de experiencia: [X]
- Mayor diferenciador: [TU_DIFERENCIADOR]

tarea: Desarrolla el plan de negocio y operación del servicio:

1. Posicionamiento y nicho:
   - Por qué la gamificación educativa es una oportunidad de negocio ahora (con datos del mercado)
   - Los 3 nichos más rentables para un freelancer de gamificación en 2024-2025
   - Tu posicionamiento específico (no "hago gamificación para empresas" sino algo más preciso)
   - La propuesta de valor en 1 frase que explica qué haces y para quién
   - Por qué los clientes no pueden encontrar fácilmente a alguien como tú

2. Catálogo de servicios:
   Diseña 3-4 servicios productizados con precio fijo o rango claro:
   - Servicio de entrada (para clientes nuevos sin presupuesto grande): qué incluye, precio, duración, entregable
   - Servicio principal (tu core offering): qué incluye, precio, duración, entregable
   - Servicio premium o retainer: qué incluye, precio mensual, compromiso mínimo
   - Workshop o formación: para empresas que quieren capacidad interna, no outsourcing
   Para cada servicio: para quién es, para quién NO es, qué problema resuelve y cómo se mide el éxito.

3. Proceso de diseño y entrega:
   Documenta tu metodología de trabajo en fases:
   Fase 1 - Diagnóstico (gratis o de pago):
   - Las 10 preguntas que haces antes de proponer cualquier solución
   - Cómo evalúas si la gamificación es la solución correcta (o si hay otra alternativa)
   - Entregable: brief de proyecto o propuesta

   Fase 2 - Diseño:
   - Cómo creas el diseño instruccional gamificado
   - Qué documentos produces (guión, storyboard, mapa de mecánicas)
   - Proceso de validación con el cliente antes de producir

   Fase 3 - Producción:
   - Herramientas y tecnologías que usas
   - Control de calidad antes de la entrega
   - Revisiones incluidas y cómo gestionar cambios fuera de scope

   Fase 4 - Implementación y seguimiento:
   - Soporte post-lanzamiento
   - Cómo mides los resultados a las 4 y 12 semanas
   - Cómo conviertes el proyecto en una relación de largo plazo

4. Captación de clientes:
   - El perfil del cliente ideal (con 5 criterios de calificación)
   - Los canales donde ese cliente busca a alguien como tú
   - Contenido que demuestra tu expertise sin regalar todo (los temas donde crear contenido)
   - Cómo usar LinkedIn para generar leads de manera consistente (sin spam)
   - La estrategia de referencias: cómo convertir cada cliente en fuente de nuevos proyectos

5. Propuesta comercial tipo:
   Crea una estructura de propuesta para el servicio principal que incluya:
   - Comprensión del problema del cliente
   - Solución propuesta y justificación
   - Metodología de trabajo
   - Entregables específicos y timeline
   - Inversión con desglose de fases
   - Por qué trabajar contigo vs. una agencia o un freelancer más barato
   - Términos y condiciones básicos

6. Herramientas de productividad del negocio:
   - Stack de herramientas recomendadas para gestionar proyectos de gamificación
   - Plantillas que deberías tener preparadas para acelerar cada proyecto
   - Cómo crear activos reutilizables entre proyectos (componentes, mecánicas, templates)
   - Sistema de gestión del tiempo para proyectos creativos con deadlines

7. Escalabilidad del negocio:
   - Cuándo y cómo subir los precios
   - Cómo pasar de proyectos puntuales a retainers y contratos anuales
   - Cuándo tiene sentido asociarse con otro freelancer o contratar
   - Cómo crear productos propios (plantillas, cursos, software) que generen ingresos sin tiempo adicional

instrucción final: Genera un plan de acción de los primeros 60 días para establecer este negocio freelance, con hitos semanales medibles y el primer objetivo de facturación realista.
EOT,
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
