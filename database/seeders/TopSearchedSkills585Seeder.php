<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills585Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing educativo para centros de infantil y primaria: captación de familias con IA',
                'description'      => 'Diseña la estrategia de marketing digital para colegios, escuelas infantiles y centros educativos de primaria que necesitan captar nuevas familias, mejorar su reputación online y diferenciarse en un mercado cada vez más competitivo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing educativo especializado en centros de educación infantil y primaria, con experiencia ayudando a colegios concertados, privados, escuelas infantiles y centros de educación especial a desarrollar estrategias de comunicación que conectan emocionalmente con las familias y les ayudan a tomar la decisión de matricular a sus hijos.

Contexto de mi centro educativo:
- Tipo de centro: [escuela infantil (0-3) / escuela infantil y primaria / colegio concertado / colegio privado / centro de educación especial / otro]
- Ubicación y zona de influencia: [ciudad o barrio, zona rural, zona urbana, área de captación habitual]
- Número de alumnos actual y capacidad: [cuántos hay y cuántos podrían estar]
- Propuesta pedagógica diferencial: [método Montessori, bilingüe, educación emocional, proyecto de innovación, currículo específico, otra]
- Situación actual de marketing: [sin presencia digital / Instagram básico / web desactualizada / boca a boca como único canal]
- Principal reto de captación: [competencia de otros centros en la zona, imagen desactualizada, poca visibilidad online, proceso de matriculación complicado]

---

## Estrategia de marketing para centros de educación infantil y primaria

### El contexto único del marketing educativo

El marketing educativo tiene características que lo hacen completamente diferente a cualquier otro sector:

La decisión más emocional de la vida de una familia:
Elegir el colegio de un hijo no es como elegir un coche o un seguro. Es la decisión que moldea la infancia y el desarrollo de la persona más importante en la vida de esos padres. El marketing educativo debe reconocer esta carga emocional y respetarla.

El producto es intangible y de evaluación diferida:
Las familias no pueden "probar" el colegio antes de matricular. Confían en señales de calidad: el proyecto pedagógico, las referencias de otras familias, la comunicación del centro, el estado de las instalaciones, cómo les atienden en la primera visita.

El boca a boca sigue siendo el canal más poderoso:
En educación infantil y primaria, la mayoría de las matrículas nuevas llegan por recomendación de familias satisfechas. El marketing digital amplifica el boca a boca, pero no lo reemplaza.

### Los momentos clave del proceso de decisión familiar

Entender cuándo y cómo deciden las familias determina dónde debes estar presente:

Momento 1 — Inicio de la búsqueda (6-12 meses antes de la matrícula):
La familia empieza a buscar opciones, generalmente cuando el bebé tiene 6-12 meses (para escuelas infantiles) o cuando el niño está en el año anterior al inicio de etapa (3 años para infantil, 6 para primaria). Buscan en Google, preguntan en grupos de WhatsApp del barrio, miran Instagram de los centros.

Marketing en este momento: visibilidad SEO local ("escuela infantil en [barrio]"), presencia en redes con contenido educativo de valor.

Momento 2 — Evaluación de opciones (3-6 meses antes):
La familia tiene una lista corta de centros. Los visita, pide información, compara. Las instalaciones, el proyecto pedagógico y cómo les tratan en la visita son decisivos.

Marketing en este momento: web completa y actualizada, testimonios de familias, proceso de visita de centros impecable.

Momento 3 — Decisión y matrícula (el proceso oficial):
La familia decide y formaliza. Los plazos de matrícula oficial crean urgencia. Los centros privados tienen más flexibilidad en los plazos.

Marketing en este momento: comunicación clara del proceso, facilidad de matriculación, seguimiento post-visita.

Momento 4 — Fidelización de familias existentes:
Las familias satisfechas son el mejor canal de captación. Un padre que lleva 3 años en el centro y lo recomienda activamente vale más que cualquier campaña de publicidad.

Marketing en este momento: comunicación excelente con familias actuales, eventos de comunidad, espacios de participación.

### Contenidos que conectan con las familias

Tipos de contenido que generan confianza y captación en educación infantil y primaria:

Contenido pedagógico (40% del mix):
- Artículos sobre el desarrollo infantil: "Qué aprende tu hijo en la etapa de 2-3 años", "Cómo fomentar la autonomía desde pequeños"
- Explicaciones del método pedagógico del centro: cómo funciona, qué beneficios tiene, en qué se diferencia
- Respuestas a las dudas más frecuentes de los padres: adaptación al colegio, aprendizaje de la lectura, gestión de las rabietas, etc.
- Este contenido posiciona al centro como experto y genera tráfico orgánico de familias que buscan información

Contenido de vida del centro (35% del mix):
- Fotos y vídeos del día a día en las aulas (con autorización de las familias): los niños aprendiendo, jugando, creando
- Proyectos especiales: salidas, talleres, festividades, visitas de personajes especiales
- El equipo: presentación de los maestros, su formación, su pasión por la educación
- Las instalaciones: cómo están organizadas, qué tienen de especial, cómo contribuyen al aprendizaje

Testimonios de familias (15% del mix):
- Vídeo-testimonios de familias que explican por qué eligieron el centro y cómo ha sido la experiencia
- Reseñas en Google bien gestionadas: respuesta a todas, agradecimiento a las positivas, gestión cuidadosa de las negativas
- Casos de éxito: historias de niños que llegaron con dificultades y han florecido

Captación directa (10% del mix):
- Invitaciones a jornadas de puertas abiertas
- Información sobre el proceso de matrícula y plazos
- Respuesta a preguntas frecuentes sobre precios, becas, comedor, transporte

### SEO local para centros educativos

Las búsquedas en educación infantil y primaria son altamente locales:
- "Escuela infantil en [barrio o ciudad]"
- "Colegio Montessori [ciudad]"
- "Mejor colegio concertado en [zona]"
- "Escuela infantil 0-3 años [nombre del barrio]"

Acciones de SEO local prioritarias:

Google My Business perfectamente optimizado:
- Nombre oficial del centro, dirección exacta, teléfono actualizado
- Horario de atención completo (incluyendo periodo de vacaciones)
- Fotos de las instalaciones, el equipo y las actividades (al menos 20 fotos de calidad)
- Categorías correctas: "Escuela de educación infantil", "Colegio privado", etc.
- Respuesta a todas las reseñas en menos de 48h

Contenido de la web optimizado para búsquedas locales:
- Título de la home: "[Nombre del centro] — Escuela infantil y primaria en [Ciudad/Barrio]"
- Página específica para cada etapa educativa con contenido detallado
- Blog con artículos sobre educación infantil que generen tráfico orgánico
- Testimonios con menciones a la ciudad o barrio

### Instrucciones para generar

Con el contexto de mi centro educativo, genera:

1. Calendario de contenidos para redes sociales durante 8 semanas: 40 publicaciones distribuidas entre Instagram, Facebook y (si aplica) TikTok, con tema, formato (foto, vídeo, carrusel, stories), copy de apoyo y objetivo de cada publicación (visibilidad, engagement o captación).

2. Plan de SEO local: análisis de las búsquedas más relevantes para mi zona y tipo de centro, acciones prioritarias en Google My Business, estructura de contenidos web recomendada y 10 títulos de artículos de blog que generarán tráfico de familias en fase de búsqueda.

3. Proceso de visita de centros: guión completo para la jornada de puertas abiertas o la visita individualizada de una familia interesada, desde la bienvenida hasta el seguimiento posterior, con los puntos clave que más influyen en la decisión final.

4. Sistema de gestión de reputación online: protocolo mensual para gestionar las reseñas en Google, cómo solicitar reseñas a familias satisfechas de forma natural y ética, y plantillas de respuesta para los 5 tipos de comentarios más frecuentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing digital para centros de educación infantil y primaria',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas educativas para infantil y primaria: diseño técnico de apps de aprendizaje con IA',
                'description'      => 'Diseña la arquitectura técnica de una aplicación educativa para niños de 3 a 12 años: gamificación adaptativa, seguridad y privacidad infantil (COPPA/RGPD menores), progresión de aprendizaje y seguimiento por maestros y padres.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en aplicaciones educativas para niños, con experiencia diseñando plataformas EdTech que cumplen con las regulaciones de protección de datos de menores (COPPA en EEUU, RGPD y LOPDGDD en Europa), implementan mecánicas de gamificación pedagógicamente fundamentadas y escalan desde decenas hasta millones de alumnos sin comprometer la experiencia.

Contexto del proyecto:
- Tipo de aplicación: [app de lectoescritura / app de matemáticas / plataforma multiasignatura / app de idiomas / plataforma de gestión del aula / otra]
- Rango de edad objetivo: [3-6 años (infantil) / 6-9 años (primaria baja) / 9-12 años (primaria alta) / todo el rango 3-12]
- Plataforma de distribución: [iOS y Android / web / tablets en el aula / todos]
- Stack tecnológico preferido: [React Native / Flutter / web (React/Vue) / nativo iOS+Android / no definido]
- Backend: [Node.js / Python / Java / PHP / no definido]
- Modelo de negocio: [B2C familias / B2B colegios / freemium / suscripción / otro]
- Funcionalidades prioritarias: [ejercicios adaptativos / progresión gamificada / reporting para maestros / comunicación con familias / generación de contenido con IA / otro]

---

## Arquitectura de aplicación educativa para niños de 3-12 años

### Consideraciones únicas del diseño para público infantil

Antes de cualquier decisión técnica, las aplicaciones para niños requieren decisiones de diseño y arquitectura que no existen en apps para adultos:

**UX para distintos rangos de edad — no es lo mismo diseñar para 4 que para 11 años:**

Infantil (3-6 años):
- Interfaz completamente visual: iconos grandes, sin texto o con texto mínimo
- Audio como canal principal: instrucciones siempre habladas, no leídas
- Motor de tolerancia a errores alto: el niño puede tocar en cualquier parte, la app debe sobrevivir sin crashear ni frustrarlo
- Sin menús: navegación lineal y guiada, el niño no decide adónde ir
- Sesiones cortas: máximo 10-15 minutos de actividad continua
- Supervisión parental asumida: la app no asume que el niño opera solo

Primaria baja (6-9 años):
- Primeras letras y números, la app puede usarlos pero con apoyo visual siempre
- Algo más de autonomía: el niño puede elegir entre 2-3 opciones, pero el flujo es guiado
- Feedback inmediato y positivo es crítico: los niños de esta edad necesitan refuerzo constante
- Gamificación simple: estrellas, insignias, progresión visual clara
- Sesiones de 20-30 minutos

Primaria alta (9-12 años):
- El niño ya lee con fluidez, puede navegar menús simples
- Gamificación más sofisticada: rankings, retos, competición amistosa
- Mayor autonomía en el flujo de aprendizaje
- Sesiones de hasta 45 minutos
- Inicio de conciencia social: quiere ver su progreso comparado con amigos o compañeros de clase

### Cumplimiento legal: RGPD para menores en España

Las aplicaciones para menores de 14 años en España (16 en el RGPD base, 14 en la LOPDGDD española) tienen requisitos legales estrictos:

**Consentimiento parental:**
- Toda recogida de datos de menores de 14 años requiere consentimiento de padre o tutor legal
- El consentimiento debe ser explícito, informado y verificable (no basta con un checkbox)
- Mecanismos de verificación de edad parental: email de confirmación, verificación por tarjeta (de pago o de identificación), pregunta control a padre vs hijo

**Datos mínimos necesarios:**
- Principio de minimización: recoger solo los datos estrictamente necesarios para el funcionamiento del servicio
- Sin publicidad comportamental para menores bajo ningún concepto
- Sin compartir datos con terceros salvo cumplimiento legal
- Datos de rendimiento académico: especialmente sensibles, acceso restringido a maestros autorizados y padres del menor

**Modelo de cuentas para menores:**
- Cuenta padre/tutor: con email real, datos de contacto, acceso al panel de seguimiento del menor
- Cuenta menor: vinculada a la cuenta del padre, con datos mínimos (nombre/alias, edad, curso), sin email propio si es menor de 14
- El menor no puede crear su propia cuenta sin que el padre lo apruebe

**Retención de datos:**
- Datos de menores: política de retención más conservadora que adultos
- Al cumplir 14 años: notificación al usuario para que confirme sus datos bajo su propio consentimiento
- Borrado efectivo cuando el padre lo solicita: en plazo máximo de 30 días, incluyendo backups

### Modelo de datos para aplicación educativa

**Entidades principales:**

User (padre/tutor):
- id, email, name, gdpr_consent_at, gdpr_consent_version
- country, language, subscription_plan, subscription_expires_at
- email_verified_at, parental_verification_method, parental_verified_at

Student (alumno menor):
- id, parent_user_id (FK, obligatorio para menores de 14)
- display_name (puede ser pseudónimo, no nombre real)
- birth_year (año, no fecha exacta — minimización de datos)
- grade_level, school_id (opcional si es B2B)
- avatar_id, total_xp, streak_days_current, streak_days_max
- created_at, last_active_at

LearningPath (Ruta de aprendizaje):
- id, subject (math/reading/science/language), curriculum_code (currículo LOMCE/LOMLOE España)
- grade_range_min, grade_range_max
- total_units, estimated_hours

Exercise (Ejercicio):
- id, unit_id, exercise_type (multiple_choice/drag_drop/fill_blank/voice_input/matching)
- difficulty_level (1-5), estimated_seconds
- content (JSON estructurado por tipo de ejercicio)
- media_assets (JSON: audio, imagen, vídeo)
- correct_feedback_text, wrong_feedback_text
- accessibility_audio_url (narración de audio del ejercicio para pre-lectores)

StudentProgress (Progreso del alumno):
- id, student_id, exercise_id
- attempt_number, started_at, completed_at, time_spent_seconds
- score (0-100), is_correct, answers_given (JSON)
- hint_used (boolean), audio_played (boolean)

Reward (Recompensa):
- id, student_id, reward_type (badge/star/xp/streak_bonus)
- reason, awarded_at, exercise_id (si aplica)
- is_displayed (si el alumno ya vio la recompensa en pantalla)

ClassRoom (Aula — para modelo B2B):
- id, school_id, teacher_user_id, name, academic_year
- grade_level, subject_areas (JSON array)
- join_code (para que alumnos se unan al aula)

### Arquitectura de aprendizaje adaptativo

El sistema adaptativo es lo que diferencia una app educativa de calidad de un simple libro digital:

**Modelo de competencia por estándar de aprendizaje:**
- Cada alumno tiene un nivel estimado (0-100) para cada concepto del currículo
- El nivel se actualiza con cada ejercicio completado usando el algoritmo IRT (Item Response Theory) o un modelo simplificado bayesiano
- La selección del siguiente ejercicio se basa en el nivel actual: ejercicios ligeramente por encima del nivel actual maximizan el aprendizaje (zona de desarrollo próximo)

**Algoritmo de selección de ejercicio:**
1. Obtener el nivel actual del alumno para el concepto objetivo
2. Filtrar ejercicios: dificultad ≈ nivel_alumno ± 0,5 puntos
3. Excluir ejercicios ya completados recientemente (ventana de 7 días)
4. Priorizar ejercicios que el alumno ha fallado anteriormente (espaciado)
5. Dentro del filtro, variedad de tipos de ejercicio (no solo el mismo formato)

**Spaced Repetition para retención:**
- Implementar el algoritmo SM-2 o similar para programar revisiones de conceptos aprendidos
- Los conceptos dominados no desaparecen: se revisan periódicamente en sesiones más cortas
- El intervalo entre revisiones aumenta según el rendimiento en cada revisión

### Gamificación pedagógicamente fundamentada

La gamificación mal implementada puede dañar la motivación intrínseca del alumno (el niño aprende por la recompensa externa, no por el placer de aprender). Principios de gamificación educativa:

**Recompensas vinculadas al esfuerzo, no solo al éxito:**
- El XP (puntos de experiencia) se gana por intentarlo, no solo por acertar
- Bonus por perseverar tras errores: "¡Seguiste intentándolo!"
- Reconocimiento explícito del progreso propio, no solo de la posición en ranking

**Progresión visible y significativa:**
- El alumno puede ver claramente cuánto ha aprendido (mapa de progreso visual)
- Las insignias tienen significado pedagógico claro: "Maestro de las sumas de doble dígito"
- La narrativa de la app (si existe) refleja el progreso del aprendizaje, no solo la acumulación de puntos

**Opciones para reducir el uso del ranking:**
- El ranking entre compañeros puede ser motivador para algunos y desmotivador para otros
- Ofrecer al maestro la opción de desactivar el ranking competitivo para su aula
- Siempre ofrecer el progreso personal como alternativa al ranking

### Panel de seguimiento para maestros y familias

**Panel de maestro:**
- Vista de clase: progreso medio del grupo en cada unidad, identificación de alumnos rezagados y avanzados
- Vista individual: historial de un alumno, tiempo dedicado por sesión, tipos de errores más frecuentes, conceptos con dificultad
- Asignación de tareas: el maestro puede asignar ejercicios específicos a todo el grupo o a alumnos individuales
- Informes exportables: PDF con el progreso de cada alumno para comunicación con familias

**Panel de familia:**
- Resumen semanal de actividad: tiempo dedicado, ejercicios completados, recompensas obtenidas
- Progreso en el currículo: en qué punto de la ruta de aprendizaje está el niño
- Alertas opcionales: si el niño no ha practicado en X días, si ha tenido dificultades en un área
- Sin datos de rendimiento comparado con otros alumnos (solo su propio progreso)

### Instrucciones para generar

Con el contexto de mi proyecto, genera:

1. Diagrama de arquitectura del sistema: descripción de todos los componentes (frontend, API, base de datos, sistema de medios, motor adaptativo, sistema de notificaciones), sus tecnologías recomendadas, cómo se comunican y las decisiones de arquitectura más importantes para mi escala y modelo de negocio.

2. Modelo de datos completo: todas las entidades del dominio adaptadas a mi rango de edad y funcionalidades prioritarias, con los campos principales, relaciones y los índices necesarios para las consultas más frecuentes (progreso del alumno, selección de ejercicio siguiente, panel de maestro).

3. Plan de compliance RGPD/LOPDGDD: flujo completo de registro y verificación parental para mi modelo de negocio (B2C o B2B), qué datos recojo y su base legal, política de retención recomendada, y lista de funcionalidades que debo revisar con un DPO antes del lanzamiento.

4. Especificación del motor adaptativo: nivel de sofisticación recomendado para mi etapa de producto (MVP vs producto maduro), algoritmo específico a implementar con pseudocódigo, datos que necesita para funcionar desde el primer día y cómo mejora con el tiempo a medida que acumula datos de comportamiento de los alumnos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Arquitectura técnica de aplicaciones educativas para niños de infantil y primaria',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de materiales educativos para infantil y primaria: guía de estilo visual con IA',
                'description'      => 'Crea sistemas de diseño visual para materiales educativos dirigidos a niños de 3 a 12 años: paletas cromáticas por edad, tipografía accesible, ilustración pedagógica y diseño de fichas, libros y recursos digitales.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico especializado en materiales educativos para niños y educación infantil y primaria, con experiencia creando sistemas visuales para editoriales educativas, aplicaciones EdTech, centros escolares y empresas de juguetes educativos, donde las decisiones de color, tipografía e ilustración tienen impacto directo en la comprensión, la motivación y la inclusión de los alumnos.

Contexto del proyecto:
- Tipo de material: [fichas de trabajo / libro de texto / app educativa / material manipulativo / cartelería de aula / juego de mesa educativo / recursos para maestros / otro]
- Rango de edad del público: [3-6 años (infantil) / 6-9 años (primaria baja) / 9-12 años (primaria alta) / todo el rango]
- Asignatura o área: [lectoescritura / matemáticas / inglés / ciencias / educación emocional / todo el currículo]
- Identidad de marca existente: [editorial establecida con guía de estilo / centro escolar con logo / proyecto nuevo sin identidad / quiero proponer una nueva identidad]
- Soporte principal: [impresión en papel (blanco/negro o color) / digital screen / mixto]
- Presupuesto de producción: [bajo: solo tipografía e iconos / medio: ilustraciones vectoriales / alto: ilustraciones originales y fotografía]

---

## Sistema de diseño visual para materiales educativos infantiles

### Por qué el diseño para niños es una disciplina especial

Diseñar para niños no es diseñar "de forma más simple". Es diseñar con una comprensión profunda del desarrollo cognitivo, la percepción visual y la motivación de cada etapa:

**El diseño que funciona para adultos fracasa con niños:**
- La sobriedad y el minimalismo que un adulto lee como "profesional" un niño de 5 años lo lee como "aburrido" o "difícil"
- El exceso de información que en un contexto adulto parece completo, en un material infantil crea sobrecarga cognitiva
- Los colores neutros que en diseño editorial para adultos son sofisticados, en infantil reducen la motivación

**El diseño para niños debe:**
- Guiar la atención a través del espacio visual de forma clara (qué debe mirar primero, después, dónde escribir)
- Usar la jerarquía visual para estructurar el aprendizaje (instrucción → espacio de trabajo → feedback visual)
- Motivar mediante el estímulo visual positivo sin crear dependencia de la recompensa externa
- Ser inclusivo: funcionar para niños con dislexia, baja visión, daltonismo o dificultades de procesamiento visual

### Psicología del color en materiales educativos infantiles

El color en materiales educativos infantiles no es decoración: es herramienta pedagógica.

**Funciones del color en materiales educativos:**

Color como código de asignatura o área:
- Matemáticas: azul (lógica, orden, exactitud — asociación cultural universal)
- Lengua: rojo/naranja (calidez, comunicación, expresión)
- Ciencias naturales: verde (naturaleza, crecimiento, exploración)
- Inglés u otras lenguas: amarillo/dorado (internacional, abierto, diferente)
- Educación emocional: morado/lavanda (introspección, calma, creatividad)
Esta codificación debe mantenerse consistentemente a lo largo de toda la colección.

Color como guía de dificultad o tipo de actividad:
- Actividad de introducción: tonos más cálidos, acogedores
- Actividad de consolidación: el color base de la asignatura
- Actividad de ampliación o reto: tonos más saturados o con acento de un color de contraste
- Actividad de evaluación: color neutro o diferenciado claramente

Color como feedback visual:
- Correcto / logrado: verde (universalmente asociado con éxito)
- Error / pendiente: nunca rojo puro para niños pequeños (connotación negativa fuerte) → naranja o amarillo
- Neutral / sin evaluar: gris claro o el color base de la página

**Paletas por rango de edad:**

Infantil 3-6 años:
- Colores primarios y secundarios puros con saturación media-alta (no excesivamente chillones)
- Alta luminosidad: el papel blanco y los fondos blancos con color como acento funcionan mejor que los fondos de color pleno
- Máximo 4-5 colores por página, sin degradados complejos
- El contraste de color es más importante que la sofisticación de la paleta

Primaria baja 6-9 años:
- Se puede introducir una paleta un poco más matizada
- Tonos tierra, verdes salvia, azules acero pueden coexistir con colores más vivos
- Los niños de esta edad ya responden bien a paletas coordinadas y coherentes

Primaria alta 9-12 años:
- Paleta más sofisticada: se pueden usar tonos más oscuros, más neutros, más matizados
- El "aspecto infantil" puede ser desmotivador para los más mayores
- Estética más próxima al diseño juvenil: tipografía más actual, menos ilustración caricaturesca

**Consideraciones de accesibilidad cromática:**

Daltonismo (afecta al 8% de los niños varones):
- Nunca usar rojo y verde como únicos diferenciadores de información
- Añadir forma o patrón junto al color: una flecha verde vs una X roja + forma de aspa
- Herramienta de verificación recomendada: Coblis o Colour Blindness Simulator

Baja visión:
- Contraste mínimo WCAG AA: 4,5:1 para texto normal, 3:1 para texto grande
- El texto nunca sobre fondos de color saturado sin suficiente contraste
- Tamaños de letra siempre por encima del mínimo recomendado para la edad

### Tipografía en materiales educativos

La tipografía en materiales educativos tiene requisitos únicos porque el texto no es solo para leer: es modelo de la letra que el niño debe aprender o está aprendiendo a leer.

**Para materiales de lectoescritura inicial (5-7 años):**

La letra de palo seco con proporciones claras es el estándar:
- La letra "a" en fuente de palo seco tiene forma de "d" invertida → coincide con cómo se enseña a escribir a mano
- Evitar fuentes con "a" de doble piso (como en la mayoría de fuentes serif y muchas sans) en materiales de iniciación lectora
- La "g" de un solo piso vs la "g" de dos pisos: usar la de un piso en materiales de iniciación

Fuentes específicamente diseñadas para educación:
- Andika (SIL International): diseñada específicamente para educación literaria, forma de "a" didáctica, libre y gratuita
- Atkinson Hyperlegible: alta legibilidad para personas con baja visión
- Dyslexie Font: diseñada para personas con dislexia (de pago)
- OpenDyslexic: alternativa gratuita similar a Dyslexie

Tamaños mínimos por edad:
- Infantil 3-5 años: 18-24pt en documentos impresos, interlineado 200%
- Primaria baja 6-8 años: 14-18pt en documentos impresos, interlineado 160%
- Primaria alta 9-12 años: 12-14pt en documentos impresos, interlineado 140%

**Para materiales de primaria (8-12 años):**
- Mayor libertad de elección tipográfica
- La forma de la "a" ya no es un requisito pedagógico
- Se pueden usar fuentes con más personalidad para los títulos
- Humanist sans-serif (Gill Sans, Myriad, Frutiger) son buenas opciones: legibles y con calidez

### Ilustración en materiales educativos

La ilustración cumple funciones pedagógicas específicas en cada material:

Función 1 — Contextualización (la ilustración explica la situación del ejercicio):
- Estilo: representativo, reconocible, sin ambigüedad
- Ejemplos: imagen de una familia comprando en el mercado para problema de matemáticas, imagen de un bosque para texto de comprensión lectora
- Error a evitar: ilustraciones decorativas que no aportan información adicional al ejercicio

Función 2 — Instrucción visual (la ilustración muestra qué tiene que hacer el alumno):
- Estilo: esquemático, con flechas o indicadores visuales claros, coherente con la instrucción verbal
- Ejemplos: manitas señalando dónde escribir, flecha circular para indicar que hay que rodear
- Error a evitar: instrucciones visuales ambiguas que generan confusión sobre qué se espera

Función 3 — Motivación y emoción (la ilustración crea vínculo emocional con el personaje o la historia):
- Estilo: expresivo, simpático, con personajes que el niño quiera seguir
- Los personajes deben ser diversos e inclusivos: distintas etnias, capacidades, contextos familiares
- Error a evitar: ilustraciones estereotipadas o que representan solo un tipo de familia o contexto

**Estilos de ilustración por contexto:**

Para infantil 3-6 años:
- Formas redondeadas, sin ángulos agudos (transmiten peligro)
- Expresiones faciales muy marcadas y reconocibles
- Paleta de colores limitada y clara
- Personajes reconocibles (animales con rasgos humanizados funcionan muy bien en esta etapa)

Para primaria baja 6-9 años:
- Estilo cartoon: reconocible, expresivo, con algo más de detalle
- Los personajes humanos funcionan bien si son diversos e inclusivos
- Humor amable y visual es bien recibido

Para primaria alta 9-12 años:
- Estilo más actual: cómic limpio, semi-realista, o ilustración digital más sofisticada
- El estilo "infantilizado" puede ser rechazado por los más mayores
- Las infografías y el diseño de información son especialmente efectivos en esta etapa

### Instrucciones para generar

Con el contexto de mi proyecto, genera:

1. Guía de estilo cromática completa: paleta principal adaptada a mi rango de edad y tipo de material (con códigos hexadecimales y CMYK para impresión), función de cada color en el sistema, verificación de accesibilidad para daltonismo y baja visión, y paleta secundaria de apoyo.

2. Especificaciones tipográficas: fuentes recomendadas para mi contexto (una para cuerpo de texto, una para títulos), con tamaños mínimos por elemento (H1, H2, cuerpo, pie de imagen, instrucción), interlineado, y justificación pedagógica de las decisiones.

3. Guía de ilustración y estilo visual: estilo de ilustración recomendado para mi proyecto (con referencias de estilo o descripciones detalladas), criterios de diversidad e inclusión a aplicar, cómo usar la ilustración con función pedagógica vs decorativa, y checklist de revisión antes de aprobar cualquier ilustración.

4. Sistema de layout para mi tipo de material: estructura de página o pantalla recomendada para mi soporte (impreso o digital), jerarquía visual de los elementos del ejercicio (instrucción, espacio de trabajo, feedback), márgenes y espaciado mínimos, y errores de layout más comunes que debo evitar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de diseño visual para materiales educativos de infantil y primaria',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B para el sector educativo: cómo vender recursos y servicios a colegios de infantil y primaria',
                'description'      => 'Diseña la estrategia comercial para vender productos o servicios educativos a colegios de infantil y primaria: identificación de decisores, ciclo de ventas en educación, gestión de licitaciones públicas y venta a colegios privados.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B para el sector educativo, con experiencia vendiendo recursos educativos, software, formación, equipamiento y servicios a colegios de educación infantil y primaria tanto públicos como privados y concertados en España, donde el proceso de toma de decisión es lento, los presupuestos son ajustados y los decisores son múltiples y con motivaciones muy distintas.

Contexto de mi empresa:
- Tipo de producto o servicio: [libros de texto / app educativa / material manipulativo / software de gestión / formación para maestros / servicio de extraescolares / equipamiento tecnológico / otro]
- Precio por centro o por alumno: [rango de precio o modelo de facturación]
- Segmento objetivo: [centros públicos / concertados / privados / todos]
- Ciclo de compra del cliente: [decisión del director / decisión del claustro / proceso de licitación pública / combinación]
- Estado comercial actual: [sin clientes / primeros clientes / buscando escalar / perdiendo cuota frente a competidores]
- Principal obstáculo: [acceder a los directores / el precio es una barrera / el proceso de adopción tecnológica es lento / competencia de grandes editoriales / proceso largo de convencimiento del claustro]

---

## Estrategia comercial B2B para el sector educativo

### La realidad del proceso de compra en colegios

Vender a colegios es uno de los procesos comerciales más lentos y complejos del B2B español. Antes de diseñar la estrategia, es crítico entender cómo funciona la toma de decisión:

**En colegios públicos:**
El presupuesto viene de la administración (Consejería de Educación de la Comunidad Autónoma). El director tiene autonomía limitada para decisiones de compra: por encima de ciertos importes necesita proceso administrativo. La adopción de nuevos recursos muchas veces depende de proyectos de innovación o planes de digitalización de la consejería. Las decisiones grandes se toman en plazos de un año o más.

**En colegios concertados:**
El titular del concierto (normalmente una congregación religiosa o fundación) tiene control sobre la política educativa general. El director tiene más autonomía operativa. Las decisiones de compra de recursos para el aula generalmente pasan por el director con validación del titular para importes relevantes. Ciclo de decisión: 3-9 meses para nuevas adopciones.

**En colegios privados:**
El director (o director pedagógico) suele tener mayor autonomía de decisión. Los proyectos educativos diferenciadores son una ventaja competitiva que los directores valoran y están dispuestos a invertir en ellos. Ciclo de decisión: 2-6 meses.

### El mapa de decisores en un colegio

Entender quién influye en la decisión es tan importante como saber a quién llamar:

Director del centro:
- Rol: decisor final en la mayoría de compras operativas y pedagógicas
- Motivaciones: mejorar los resultados académicos, satisfacer a las familias, hacer felices a los maestros, cumplir con las directrices de la administración, diferenciarse de otros centros
- Qué le hace perder tiempo: vendedores que no entienden el sistema educativo, propuestas que no tienen en cuenta la realidad del aula, promesas que no se pueden cumplir

Jefe de estudios:
- Rol: influenciador técnico y coordinador del claustro
- Motivaciones: que los recursos sean buenos pedagógicamente, que los maestros los adopten bien, que el cambio no genere caos
- Lo que valora: respaldo de investigación pedagógica, facilidad de adopción, formación incluida

Coordinador de ciclo o de área:
- Rol: influenciador clave si el producto es de su área
- Motivaciones: mejores resultados de sus alumnos, herramientas que faciliten su trabajo
- Lo que valora: funcionalidad real en el aula, no complejidad innecesaria

Maestro de aula:
- Rol: usuario final, influenciador poderoso si es resistente al cambio
- Motivaciones: que funcione en el aula real, que no suponga más trabajo, que los niños respondan bien
- Lo que valora: simplicidad, resultados visibles, soporte cuando tiene dudas
- Resistencia al cambio: es el mayor enemigo de cualquier venta educativa. Si el maestro no lo quiere usar, no lo usará aunque el director lo haya comprado.

Encargado de compras o secretaría:
- Rol: gestiona el proceso administrativo
- Lo que valora: facturación correcta, tiempos de entrega cumplidos, documentación en regla

### Canales de captación en el sector educativo

**Canal 1 — Congresos y jornadas educativas:**
Los directores y maestros innovadores asisten a congresos de su comunidad autónoma y a eventos nacionales (Educafórum, Simo Educación, jornadas de asociaciones pedagógicas). Estar presente como expositor o ponente genera visibilidad y credibilidad.

Cómo aprovechar estos eventos:
- Stand con demostración activa: el director debe poder ver el producto en acción en 5 minutos
- Programar demos privadas de 20-30 minutos con los contactos más interesados
- Captación de leads cualificados: nombre, centro, rol, email y nota de cuál es su necesidad principal

**Canal 2 — Red de inspectores y asesores de formación:**
Los Centros de Profesorado (CEIP) y los equipos de asesoramiento y orientación (EAP, EOEP) tienen acceso privilegiado a los colegios. Un asesor de formación que recomienda tu recurso en sus sesiones formativas tiene un alcance enorme y una credibilidad que ningún comercial puede igualar.

Cómo construir esta red:
- Contacta con centros de profesorado de las comunidades autónomas donde operas
- Ofrece formaciones gratuitas para maestros con acreditación
- Comparte recursos de calidad gratuitos a través de estos canales
- El proceso es lento pero el impacto es sostenido

**Canal 3 — Prescriptores del claustro (el maestro evangelizador):**
El mecanismo más potente en educación: un maestro que usa tu recurso y lo adora lo recomendará a sus compañeros de centro, a los centros de su red y en los grupos de WhatsApp y redes sociales de docentes.

Cómo cultivar prescriptores:
- Identifica a los maestros innovadores en redes sociales (Twitter/X educativo, Instagram docente)
- Ofréceles acceso anticipado o gratuito a cambio de feedback y difusión
- Crea una comunidad de usuarios embajadores
- Un maestro embajador convence a su director mejor que cualquier comercial

**Canal 4 — Marketing digital orientado a maestros:**
Los maestros consumen mucho contenido educativo online: Pinterest (recursos de aula), Instagram, YouTube, grupos de Facebook de docentes. Estar presente con contenido de valor en estos canales genera conocimiento de marca y genera demanda pull (el maestro llega al director pidiendo el recurso, no al revés).

**Canal 5 — Venta directa a través de comerciales:**
Para escalar, necesitas una red comercial que visite centros. Claves para que funcione:
- Los comerciales de educación deben hablar el lenguaje del sector: LOMLOE, competencias clave, evaluación formativa, aprendizaje basado en proyectos
- El primer contacto debe ser de escucha y diagnóstico, nunca de pitch de producto
- Ofrece siempre demostración con recursos reales del centro antes de cualquier propuesta económica

### Gestión de las objeciones más comunes en educación

Objeción: "Ya tenemos recursos que funcionan, no queremos cambiar"
Respuesta: "Entiendo perfectamente. No proponemos cambiar lo que ya funciona. ¿Podría contarme cuáles son las áreas donde los resultados son más difíciles de mejorar? Podríamos ver si encajamos como complemento en esas áreas específicas."

Objeción: "No tenemos presupuesto"
Respuesta: "Muchos centros con los que trabajamos pensaban lo mismo. ¿Puedo preguntarte en qué periodo se define el presupuesto del próximo curso? Así podemos hablar en el momento adecuado. Y entretanto, le propongo una prueba piloto con un grupo de alumnos sin coste, para que el claustro pueda ver los resultados antes de decidir."

Objeción: "Los maestros no van a querer cambiar"
Respuesta: "Es la preocupación más frecuente y la más válida. Por eso no le propongo que lo decida usted solo: lo que funciona en la práctica es hacer una sesión de formación para el claustro donde los propios maestros pueden ver el recurso y hacerse sus propias preguntas. Usted no tiene que convencer a nadie, la herramienta se presenta sola."

Objeción: "Necesito aprobación del claustro" (o del Consejo Escolar, o del titular)
Respuesta: "Perfecto, es el proceso correcto. ¿Podría ayudarle preparando la presentación que llevaría al claustro? Yo puedo preparar el dosier pedagógico, los datos de resultados de otros centros y responder a las preguntas técnicas si me dejara estar presente en la sesión."

### Instrucciones para generar

Con el contexto de mi empresa y producto, genera:

1. Mapa de decisores para mi tipo de centro y producto: quién toma la decisión final, quién influye más en esa decisión, cómo llegar a cada uno, qué argumentos usa con cada perfil y cómo gestionar cuando el decisor es diferente del usuario final.

2. Guión de primera visita a un director de centro: estructura de la reunión de 30-45 minutos, cómo abrir la conversación para entender las necesidades antes de presentar el producto, las 5-7 preguntas de discovery más eficaces para mi tipo de solución, y cómo cerrar la visita con un siguiente paso concreto.

3. Proceso de prueba piloto: diseño de un piloto de 4-8 semanas que convierte dudas en convicción, qué incluye (recursos, formación, seguimiento, medición de resultados), cómo presentarlo al centro y cómo convertir un piloto exitoso en contrato.

4. Plan de escalada a 12 meses: si tengo X centros hoy, cuántos podría tener en un año, cuántos comerciales o canales necesito, qué actividades de marketing me dan el mayor ROI en mi segmento, y cómo medir si la estrategia está funcionando.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia comercial para vender recursos y servicios educativos a colegios de infantil y primaria',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en EdTech de infantil y primaria: cómo construir productos que maestros y niños amen',
                'description'      => 'Aplica metodologías de product management adaptadas a EdTech para educación infantil y primaria: discovery con maestros y niños, priorización de features en ciclos escolares y métricas de aprendizaje como éxito del producto.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en EdTech para educación infantil y primaria, con conocimiento profundo de los ciclos del año escolar, las dinámicas de adopción de tecnología en el aula, los procesos de toma de decisión en colegios y la complejidad de diseñar para usuarios que van desde los 3 años (los niños) hasta los 50 (los maestros veteranos que resistían la digitalización).

Contexto de mi producto:
- Tipo de producto: [app para alumnos / plataforma para maestros / herramienta de gestión del aula / plataforma de comunicación familia-escuela / app de lectoescritura / app de matemáticas / otro]
- Etapa del producto: [idea pre-MVP / MVP con primeros centros / producto con base instalada / scaling]
- Usuarios del producto: [solo alumnos / solo maestros / maestros y alumnos / maestros, alumnos y familias]
- Número de centros o alumnos actuales: [cifra]
- Principal reto de producto: [los maestros lo prueban pero no lo adoptan / los niños lo usan pero no aprenden / los centros lo compran pero no lo integran en el aula / no sé qué construir primero]
- Métrica de éxito más importante: [frecuencia de uso semanal / resultados de aprendizaje medibles / renovación de licencias / NPS de maestros]

---

## Product management para EdTech de infantil y primaria

### El calendario escolar como marco del product management

En EdTech educativo, el calendario escolar condiciona absolutamente todo: cuándo puedes hacer discovery, cuándo lanzar nuevas features, cuándo cobrar, cuándo perder clientes.

**Ciclo anual del año escolar (España):**

Septiembre — Inicio de curso:
- Los maestros arrancan con nuevas clases, nueva organización. Muy ocupados.
- Peor momento para lanzar features complejas que requieran aprendizaje
- Mejor momento: features de configuración y setup que el maestro puede hacer en 15 minutos
- Comercialmente: muchos centros confirman la renovación o la nueva contratación en este mes

Octubre-Noviembre — Estabilización:
- El maestro ya conoce a sus alumnos, la rutina está establecida
- Mejor momento para discovery: el maestro tiene tiempo para una conversación de 30 minutos
- Mejor momento para lanzar features que mejoran el día a día del aula
- Las sesiones de formación de maestros funcionan bien en este periodo

Diciembre — Evaluación del primer trimestre:
- El maestro evalúa si los recursos que usa están funcionando
- Periodo clave para mostrar métricas de progreso de los alumnos
- Momento ideal para enviar el informe de uso a los directores (apoyo a la renovación)
- Los maestros tienen menos tiempo para discovery y adopción de nuevas features

Enero-Febrero — El mejor momento del año para el producto:
- Inicio del segundo trimestre, el maestro descansa tras las navidades
- Mayor apertura a aprender cosas nuevas y adoptar nuevas herramientas
- Mejor momento para lanzar features ambiciosas y para hacer discovery
- Los maestros más innovadores comparten recursos en redes sociales: viralidad potencial

Marzo-Abril — Primavera educativa:
- Tercero y últimos estertores del curso. Muy variable según el centro.
- Semana Santa: parada total. No lanzar nada importante.
- Momento clave para empezar las conversaciones de renovación del curso siguiente

Mayo-Junio — Evaluaciones finales:
- Los maestros están en modo evaluación y cierre de curso. Muy poco tiempo.
- Último momento para capturar datos de uso del año completo para el informe anual
- Comercialmente: las decisiones del curso siguiente se cierran en junio

Julio-Agosto — Vacaciones:
- Cero actividad en colegios. Los maestros no existen.
- Mejor momento para trabajo técnico y preparación de features del curso siguiente
- Algunos directores y jefes de estudios trabajan en julio para planificación del curso

### Discovery con maestros: cómo hacer entrevistas sin interrumpir el aula

El principal reto de discovery en EdTech: el usuario más importante (el maestro) tiene disponibilidad casi nula durante el horario escolar.

**Cómo conseguir tiempo del maestro para discovery:**

No pidas "una reunión" o "una entrevista de usuario":
- "¿Podrías dedicarme 20 minutos para contarme cómo funciona una semana de trabajo típica en tu clase? Me ayudaría mucho a mejorar la herramienta"
- El maestro siente que está ayudando a mejorar algo que usa, no siendo evaluado

Horarios que funcionan:
- Las reuniones de claustro terminan y hay 15-20 minutos antes de la salida de alumnos
- Las horas de tutoría sin alumnos (martes o miércoles tarde en muchos centros españoles)
- Pausa del comedor para maestros de jornada partida
- Por videollamada fuera del horario escolar: nunca pidas a un maestro que use su tiempo de descanso a menos que la relación sea muy buena

**Preguntas de discovery específicas para maestros de primaria:**

Sobre su día a día:
- "Cuéntame cómo es un día normal de clase contigo. ¿Cuándo usáis tecnología?"
- "¿Cuándo sientes que los alumnos están más enganchados y cuándo pierdes su atención?"
- "¿Qué parte de tu trabajo te lleva más tiempo del que debería?"

Sobre el producto (si ya lo usan):
- "Cuando introduces [nombre del producto] en clase, ¿cómo lo haces? ¿Qué funciona bien y qué no?"
- "¿Qué harías diferente si pudieras cambiar una sola cosa?"
- "¿Hay algún momento del día o de la semana donde usas [nombre del producto] más? ¿Por qué ese momento?"

Sobre el aprendizaje:
- "¿Cómo sabes que los alumnos están aprendiendo con [nombre del producto]?"
- "¿Has visto casos donde la herramienta haya ayudado a un alumno que tenía dificultades? ¿Qué pasó?"

### Discovery con niños: investigación con usuarios menores

Hacer discovery con niños requiere técnicas radicalmente distintas a las entrevistas con adultos:

**Consideraciones éticas y legales:**
- Consentimiento informado de padres o tutores: obligatorio
- Consentimiento del propio niño explicado en su lenguaje: "¿Te parece bien que te haga algunas preguntas sobre cómo usas la app?"
- El maestro o un adulto de confianza debe estar presente
- Nunca sesión individual investigador-niño sin adulto presente

**Técnicas que funcionan con niños de distintas edades:**

Con niños de 4-6 años — Observación y "thinking aloud":
- Las entrevistas no funcionan: los niños de 4 años no saben introspección
- Observar al niño usando la app sin intervenir es la técnica más valiosa
- "Thinking aloud" facilitado: "Cuéntame qué estás haciendo ahora" mientras usa la app
- Preguntas directas muy simples: "¿Te gusta esto? ¿Por qué?" (respuestas de 1-3 palabras son válidas)

Con niños de 7-9 años — Entrevista breve y actividades:
- Entrevista de máximo 15 minutos con preguntas concretas
- Técnicas proyectivas: "Si la app fuese un animal, ¿qué animal sería? ¿Por qué?"
- Que el niño muestre: "¿Puedes enseñarme tu parte favorita?" y "¿Y la que menos te gusta?"
- Actividad de clasificación: tarjetas con features que el niño ordena de "más chulo" a "menos chulo"

Con niños de 10-12 años — Cerca de la entrevista adulta:
- Ya pueden hacer algo de introspección y articular preferencias
- Técnica del "día en su vida": que cuente cómo usaron la app en clase esa semana
- Comparación: "¿Qué te gusta más, X o Y? ¿Por qué?"
- Preguntas abiertas sobre su experiencia de aprendizaje: "¿Sientes que aprendes con la app?"

### Métricas de éxito en EdTech para primaria

Las métricas estándar de SaaS no funcionan directamente en EdTech escolar. Las adaptaciones necesarias:

**Métricas de uso adaptadas al contexto escolar:**

En lugar de DAU/MAU → Uso por sesión de clase:
- ¿Cuántas veces por semana el maestro introduce el producto en clase?
- ¿Qué % de los centros con licencia usan el producto al menos 2 veces por semana?
- El uso irregular por vacaciones distorsiona los ratios típicos de DAU/MAU

Streak escolar en lugar de streak de calendario:
- La racha de días consecutivos no funciona en educación: hay fines de semana, vacaciones
- Metric relevante: semanas de uso continuo durante el trimestre (o la semana escolar como unidad)

Profundidad de uso por maestro:
- ¿El maestro usa 1 feature o 5? → más features usadas = menor riesgo de churn
- ¿Qué % de la cobertura curricular disponible en el producto usa cada maestro?

**Métricas de aprendizaje — el diferenciador de EdTech:**

Progreso en habilidad medible:
- Velocidad lectora medida antes y después de N semanas de uso
- Tasa de acierto en cada concepto matemático al inicio vs al final
- Tiempo medio para completar ejercicios de una dificultad dada (proxy de automatización)

Estas métricas son más difíciles de medir pero son las que justifican el precio ante directores y familias, y las que diferencian a las EdTech de calidad de las que solo ofrecen "gamificación sin aprendizaje".

### Instrucciones para generar

Con el contexto de mi producto, genera:

1. Calendario de product management para el año escolar: qué actividades de discovery, lanzamientos, formación a maestros, reportes de uso y acciones de renovación deben ocurrir en cada periodo del año escolar, adaptado a mi tipo de producto y usuarios.

2. Plan de discovery para el próximo trimestre: con quién hablar (maestros, directores, alumnos según mi producto), cómo conseguir acceso, cuántas sesiones hacer para llegar a saturación de insights, guión específico para cada tipo de usuario, y cómo sintetizar los hallazgos en oportunidades de producto.

3. Sistema de métricas: definición de las 5-7 métricas más relevantes para mi producto adaptadas al contexto escolar, cómo medirlas con los datos que ya tengo, cuáles son mis targets actuales y qué target debería fijarme para la renovación del próximo año escolar.

4. Plan de adopción por centro: el mayor reto de EdTech no es que compren sino que usen. Diseña un plan de 8 semanas post-venta para garantizar que un nuevo centro integre el producto en su práctica docente habitual, con acciones por semana, quién las ejecuta, qué mides y qué haces si la adopción no avanza.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Product management para aplicaciones EdTech de educación infantil y primaria',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en centros de educación infantil y primaria: selección y retención de maestros con IA',
                'description'      => 'Diseña los procesos de recursos humanos para centros educativos de infantil y primaria: selección de maestros, acogida de nuevos docentes, evaluación del desempeño y retención en un sector con alta rotación y mercado laboral complejo.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos para el sector educativo, con experiencia ayudando a directores de colegios, escuelas infantiles y centros educativos a construir equipos docentes estables, atraer maestros vocacionales y crear culturas de centro donde los profesionales quieren desarrollar su carrera a largo plazo, a pesar de las condiciones particulares del sector educativo español.

Contexto de mi centro:
- Tipo de centro: [escuela infantil 0-3 / escuela infantil 0-6 / colegio concertado / colegio privado / centro de educación especial]
- Número de docentes y personal: [menos de 10 / 10-30 / más de 30]
- Principal reto de RRHH: [dificultad para encontrar maestros cualificados / alta rotación / conflictos en el claustro / maestros acomodados sin motivación de mejora / directora que también enseña y no tiene tiempo para gestionar personas]
- Situación particular: [centro en expansión / centro estable pero con desmotivación / centro en crisis de cambio de dirección / otro]
- Tipo de proyecto pedagógico: [tradicional / innovador (Montessori, bilingüe, etc.) / en transición hacia mayor innovación]

---

## Gestión de personas en centros de educación infantil y primaria

### El contexto único de los RRHH en educación

Gestionar personas en un centro educativo es radicalmente distinto a gestionar personas en una empresa convencional:

**La vocación como motivador central (y doble filo):**
La mayoría de los maestros eligieron la educación por vocación, no por dinero. Esto es una fortaleza enorme: la motivación intrínseca es más poderosa y duradera que la económica. Pero también crea riesgos:
- Un maestro vocacional puede aguantar condiciones muy malas durante mucho tiempo y quemarse en silencio
- La crítica al trabajo docente puede sentirse como crítica a la identidad personal
- La resistencia a la evaluación del desempeño es especialmente alta porque "enseñar es un arte, no se puede medir"

**La doble subordinación del maestro:**
Un maestro en un colegio concertado o privado tiene dos "jefes" distintos:
- El director del centro: responsable de la gestión pedagógica y de personal
- El titular del colegio (congregación, fundación, empresa): responsable de la política estratégica y las condiciones laborales
Esta doble estructura puede crear inconsistencias que el maestro experimenta como incoherencia institucional.

**El aula como reino propio:**
Una vez que el maestro cierra la puerta del aula, tiene una autonomía enorme sobre cómo enseña. Esto hace que los cambios pedagógicos sean muy difíciles de implementar sin conseguir la adhesión genuina del maestro. No puedes "imponer" un método de enseñanza: puedes proponerlo, formarlo, acompañarlo, y esperar que el maestro lo haga propio.

### Selección de maestros: cómo encontrar a los mejores en un mercado difícil

**El mercado laboral docente en España:**

La situación varía mucho según la etapa:

Escuelas infantiles 0-3:
- Alta demanda de tituladas en Educación Infantil con experiencia
- Salarios bajos y condiciones difíciles han generado rotación alta en el sector
- El reto no es solo encontrar candidatas: es retenerlas

Primaria en concertada y privada:
- Los mejores maestros prefieren plaza en la pública (estabilidad)
- La concertada y la privada compiten con otros factores: proyecto pedagógico, ambiente de trabajo, reconocimiento, formación continua
- El maestro que elige la concertada/privada suele hacerlo por identidad con el proyecto del centro: esto es un activo de selección

**Proceso de selección que encuentra buenos maestros:**

Descripción del puesto honesta:
- No describas el puesto ideal: describe el puesto real, con sus dificultades y sus oportunidades
- Los mejores candidatos prefieren saber con qué se van a encontrar antes de aceptar
- Incluye información sobre el proyecto pedagógico del centro: atraerá a los maestros que comparten esa visión

Canales de captación específicos del sector:
- Bolsa de empleo del colegio mayor o facultad de Educación de la zona
- Redes de ex-alumnos del centro (si el colegio tiene historia)
- Instagram y LinkedIn de educación: los maestros innovadores están en redes
- Contacto con el departamento de Educación de la congregación o fundación titular (tienen bolsas de trabajo propias)
- Headhunting respetuoso en centros de la zona con proyectos similares

**El proceso de selección en 3 fases:**

Fase 1 — Revisión de candidaturas y carta de motivación:
La carta de motivación es más reveladora que el currículum en educación. Busca:
- ¿Por qué quiere trabajar en este centro en particular? (si es genérica, no está motivado para tu centro)
- ¿Qué visión tiene de la enseñanza? ¿Coincide con tu proyecto pedagógico?
- ¿Hay evidencias de formación continua y actualización voluntaria?

Fase 2 — Entrevista de conocimiento y valores:
- Preguntas de situación: "Cuéntame una situación difícil en el aula y cómo la resolviste"
- Preguntas sobre metodología: "¿Cómo enseñarías [concepto concreto] a niños de [edad]?"
- Preguntas sobre trabajo en equipo: "¿Cómo has gestionado el desacuerdo con otro compañero del claustro?"
- Red flags: respuestas muy centradas en el conocimiento teórico sin ejemplos prácticos, incapacidad de admitir errores, poca curiosidad por el proyecto del centro

Fase 3 — Clase de prueba o sesión práctica:
El maestro imparte una sesión real (o simulada con adultos) de 20-30 minutos sobre un tema que el centro propone. Permite observar:
- Gestión del aula y del tiempo
- Calidad de las explicaciones
- Adaptación al nivel del grupo
- Relación con los alumnos

### Acogida y onboarding de nuevos maestros

El primer año de un maestro en el centro es determinante para su permanencia y su desarrollo:

**Programa de acogida de 12 meses:**

Antes de empezar (verano):
- Bienvenida personalizada: email o llamada de la directora antes de septiembre
- Acceso anticipado a los materiales del centro, el proyecto pedagógico, el reglamento
- Si es posible, una visita informal al centro para conocer las instalaciones sin presión
- Asignación del mentor: un maestro veterano del centro que será su referente el primer año

Septiembre — Primera semana:
- Presentación al claustro completo: nombre, etapa, origen, algo personal
- Acompañamiento en las primeras rutinas: cómo funciona la entrada, el comedor, las tutorías
- Explicación clara de los procedimientos administrativos: partes de incidencias, comunicación con familias, registro de asistencia
- Primera reunión de tutoría con la directora: expectativas, apoyo disponible, canales de comunicación

Octubre-Diciembre — Primer trimestre:
- Observación del mentor en su aula y del nuevo maestro en la suya (bidireccional): no evaluativa, de apoyo
- Reunión mensual con la directora: ¿cómo está? ¿qué necesita? ¿qué está funcionando bien?
- Inclusión en los proyectos del centro: no como espectador, sino como participante activo

Enero-Junio — Segundo semestre:
- El maestro ya tiene autonomía en el aula
- La relación con el mentor se vuelve más entre iguales
- Participación en la planificación del curso siguiente: que sienta que construye algo, no que solo ejecuta

Final de curso — Evaluación y renovación:
- Conversación honesta de 60-90 minutos: qué ha funcionado, qué mejorar, qué se espera del siguiente año
- Si la renovación es afirmativa: celebrarla explícitamente, dar señales de estabilidad
- Si hay dudas sobre la renovación: comunicarlo con suficiente antelación para que el maestro pueda planificar

### Instrucciones para generar

Con el contexto de mi centro, genera:

1. Descripción de puesto de maestro: modelo de anuncio de empleo para la etapa y especialidad más habitual en mi centro, con descripción honesta del puesto, del proyecto pedagógico del centro, de las condiciones reales de trabajo y del perfil que buscamos, adaptado para publicar en LinkedIn, webs de empleo educativo y bolsas de universidades.

2. Protocolo de entrevista: guión completo de entrevista de selección para maestros de mi etapa educativa, con las preguntas en el orden correcto, indicaciones sobre qué buscar en las respuestas, red flags claros y una rúbrica de evaluación sencilla con los 5-6 criterios más importantes.

3. Plan de onboarding de 12 meses: cronograma mensual del primer año de un maestro nuevo en mi centro, con acciones concretas en cada mes, quién las realiza (directora, jefa de estudios, mentor), qué documentos o materiales se entregan, y cómo evaluar si el onboarding está funcionando.

4. Sistema de evaluación del desempeño docente: cómo hacer una evaluación que el maestro viva como desarrollo profesional y no como control, frecuencia recomendada de las conversaciones, estructura de la conversación anual de desempeño con preguntas concretas, y cómo documentar el proceso sin crear burocracia innecesaria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de personas y maestros en centros de educación infantil y primaria',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas de centros educativos de infantil y primaria: gestión económica y sostenibilidad',
                'description'      => 'Diseña el sistema de control financiero para centros de educación infantil y primaria: presupuesto anual, control de costes, gestión del concierto educativo, optimización de ingresos y planificación financiera a largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un consultor financiero especializado en el sector educativo, con experiencia ayudando a directores, titulares de centros concertados y propietarios de colegios privados e infantiles a construir sistemas de gestión financiera que garanticen la sostenibilidad económica del centro sin comprometer la calidad del proyecto educativo.

Contexto financiero de mi centro:
- Tipo de centro: [escuela infantil privada / escuela infantil subvencionada / colegio concertado / colegio privado / centro de educación especial concertado]
- Número de alumnos: [cifra actual y capacidad máxima]
- Fuentes de ingresos principales: [concierto educativo / cuotas de familias / subvenciones / combinación]
- Principal problema financiero: [no llego a fin de mes / no sé si gano o pierdo dinero / los costes de personal se disparan / no tengo visibilidad a largo plazo / dependencia total del concierto]
- Herramientas de gestión financiera: [Excel / software de gestión escolar / ERP / nada formal]
- Situación actual: [déficit / equilibrio justo / superávit pequeño / buena situación pero sin planificación]

---

## Control financiero para centros de educación infantil y primaria

### La estructura financiera particular de los centros educativos

Los centros de educación infantil y primaria tienen una estructura de ingresos y costes con características únicas:

**Ingresos con alta predictibilidad pero baja flexibilidad:**

Centros con concierto educativo:
- El módulo económico del concierto (pago por unidad concertada) es predecible pero muy rígido: lo fija la administración
- El concierto financia personal docente (módulo de personal) y gastos de funcionamiento (módulo de gastos)
- El módulo de personal raramente cubre el 100% del coste real de la plantilla cuando hay antigüedad o complementos salariales
- El módulo de gastos típicamente financia entre el 40% y el 70% de los gastos reales de funcionamiento

Centros infantiles privados y colegios privados:
- Los ingresos dependen de las cuotas de familias: más predictibles pero con riesgo de bajas
- La ocupación del centro es la variable crítica: cada plaza vacía es ingresos perdidos con coste fijo mantenido
- La lista de espera es un indicador financiero crítico: si no tienes lista de espera, estás en equilibrio frágil

**Costes con alta rigidez:**

Personal docente (60-75% de los costes totales):
- Es el coste más grande y el menos flexible: no puedes reducir plantilla de un día para otro
- Está muy regulado: convenio colectivo del sector, complementos de antigüedad que crecen solos cada año
- La ocupación mínima para mantener cada aula tiene un umbral: si bajas de X alumnos, necesitas redistribuir o reducir ratio con impacto en calidad percibida

Instalaciones (10-15% de los costes):
- Alquiler o hipoteca: fijo mensual independientemente de la ocupación
- Mantenimiento de instalaciones: muy variable, con picos en verano (obras aprovechando el cierre escolar)
- Suministros: agua, luz, gas — crecen con la ocupación y tienen estacionalidad (más calefacción en invierno)

Materiales y recursos didácticos (3-8%):
- Libros de texto (si no son del concierto)
- Material fungible por alumno
- Recursos digitales y licencias de software

Administración y servicios generales (5-10%):
- Personal administrativo, seguro de responsabilidad civil, gestoría, limpieza, seguridad
- Comedor y transporte (si los gestiona directamente el centro)

### El P&L de un centro educativo: cómo leerlo correctamente

**El error más común en la gestión financiera de centros:**
Mirar solo la cuenta bancaria para saber si se gana o se pierde dinero. Un centro puede tener liquidez positiva en septiembre (cobro de matrículas) y estar en déficit económico real si los costes anuales superan los ingresos anuales.

**Estructura del P&L anual de un centro educativo:**

Ingresos:
+ Módulo económico del concierto (si aplica): importe anual del concierto
+ Cuotas de familias: cuota mensual × alumnos × meses × tasa de cobro efectiva
+ Servicios complementarios: comedor, transporte, extraescolares (si los gestiona el centro)
+ Subvenciones y ayudas específicas (becas comedor, proyectos de innovación)
+ Donaciones y patrocinios (si aplica)
= Ingresos totales

Costes:
− Personal docente: salarios brutos + Seguridad Social empleador + formación
− Personal no docente: administración, limpieza, comedor, monitores extraescolares
− Instalaciones: alquiler/hipoteca + mantenimiento + suministros
− Materiales y recursos: libros, fungible, tecnología, licencias
− Administración: gestoría, seguros, comunicaciones, publicidad
= EBITDA del centro

− Amortización de inversiones (si hay préstamos para obra o equipamiento)
= Resultado neto

**Ratio de referencia para centros educativos sanos:**
- Personal sobre ingresos: máximo 70% (por encima de este umbral, el margen para otros costes es insuficiente)
- Tasa de ocupación mínima para equilibrio: depende del tamaño, pero típicamente entre el 80% y el 90% de la capacidad

### Control de tesorería con estacionalidad educativa

Los centros educativos tienen una estacionalidad financiera muy marcada:

**Meses de mayor entrada de caja:**
- Septiembre: matrícula del curso nuevo, primer mes de cuotas del nuevo año
- Enero: cuotas enero + posible subvención del primer semestre
- Los primeros días de cada mes: cobro de cuotas mensuales domiciliadas

**Meses de mayor salida de caja:**
- Junio: nómina mensual + extra de verano + liquidación de posibles finiquitos
- Julio-Agosto: personal de guardia o de atención en verano, mantenimiento y obras de verano
- Diciembre: nómina mensual + extra de Navidad

**Provisiones obligatorias que muchos centros olvidan:**
- Extras de junio y diciembre: provisionar 1/6 mensualmente (dividir el coste del extra entre 6 meses)
- Vacaciones estivales del personal: provisionar mensualmente el coste de las vacaciones
- Reparaciones y mantenimiento: reservar un porcentaje de los ingresos mensuales para imprevistos
- Reposición de equipamiento y mobiliario: los muebles del aula tienen vida útil

### Optimización de ingresos en centros educativos

**Gestión de la lista de espera y la ocupación:**
Cada plaza vacía tiene un coste de oportunidad enorme: tienes todos los costes fijos pero no el ingreso.

Herramientas para maximizar la ocupación:
- Lista de espera gestionada activamente: contacto trimestral con las familias en lista de espera
- Protocolo de bajas: cuando una familia comunica una baja, tener un proceso para cubrirla rápido
- Análisis de los motivos de baja: qué se puede mejorar para reducir las no renovaciones
- Marketing proactivo antes del periodo de matrícula: no esperar a que las familias lleguen, ir a buscarlas

**Servicios complementarios como palanca de ingresos:**
El comedor, el transporte, las actividades extraescolares y el servicio de madrugadores pueden ser gestionados directamente por el centro o externalizados. Si se gestionan directamente, son una palanca de ingresos adicionales. Si se externalizan, el proveedor se lleva el margen.

Análisis de la decisión gestión directa vs externalización:
- ¿Tienes capacidad de gestión para añadir este servicio?
- ¿El margen de gestión directa justifica la complejidad adicional?
- ¿La calidad del servicio impacta en la satisfacción de las familias y en la renovación?

**Gestión de impagos:**
Los impagos de cuotas son un problema real en muchos centros. Protocolo efectivo:
- Domiciliación bancaria para la gran mayoría de familias
- Proceso claro de gestión de cuotas pendientes: recordatorio a los 5 días, llamada a los 10 días, reunión a los 20 días
- Política clara y comunicada de consecuencias: dónde está el límite de deuda antes de que haya consecuencias para la plaza del alumno
- Separar la gestión económica de la gestión pedagógica: nunca que el maestro sea quien hable de cuotas con las familias

### Instrucciones para generar

Con el contexto financiero de mi centro, genera:

1. Plantilla de P&L anual: estructura completa de la cuenta de resultados adaptada a mi tipo de centro, con las líneas de ingresos y costes más relevantes, fórmulas para calcular los ratios de referencia y alertas: qué ratio, si se supera, requiere acción inmediata.

2. Presupuesto mensual de tesorería: proyección de entradas y salidas mes a mes para un año escolar completo, identificando los meses de mayor tensión de liquidez y las provisiones obligatorias que debo constituir mensualmente para los picos de gasto.

3. Plan de optimización de la ocupación: diagnóstico de mi situación actual, acciones prioritarias para llegar a la ocupación objetivo (ordenadas por impacto y facilidad), protocolo de gestión de la lista de espera y de las bajas, y métricas para saber si estoy en la tendencia correcta.

4. Sistema de control mensual: tablero de las 8-10 métricas financieras que debo revisar el primer día hábil de cada mes, cómo obtenerlas de mi sistema de gestión, qué umbrales de alerta deben activar una acción, y quién en el centro es responsable de este seguimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Control financiero y sostenibilidad económica de centros de educación infantil y primaria',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para centros de educación infantil y primaria: normativa, contratos y RGPD de menores',
                'description'      => 'Diseña el marco legal y documental para centros de educación infantil y primaria: autorización de centros, contratos con familias, protección de datos de menores, responsabilidad civil y gestión de incidencias.',
                'prompt_content'   => <<<'EOT'
Eres un asesor legal especializado en el sector educativo español, con experiencia asesorando a colegios concertados, privados y escuelas infantiles en el cumplimiento normativo, la redacción de contratos con familias, la gestión de la protección de datos de menores (RGPD + LOPDGDD) y la gestión de la responsabilidad civil derivada de incidentes en centros educativos.

Contexto de mi centro:
- Tipo de centro: [escuela infantil privada / escuela infantil subvencionada / colegio concertado / colegio privado]
- Comunidad autónoma: [indicar, ya que la normativa autonómica varía significativamente]
- Situación de autorización: [centro autorizado / en proceso de autorización / quiero abrir un nuevo centro]
- Principal preocupación legal: [protección de datos de menores / contrato con familias / accidentes de alumnos / normativa de autorización / despidos y conflictos laborales / otro]
- Herramientas digitales que usa el centro: [software de gestión escolar, apps de comunicación con familias, plataformas educativas online, cámaras de seguridad]

---

## Marco legal para centros de educación infantil y primaria en España

### El sistema normativo del sector educativo español

La educación en España es una competencia autonómica con marco estatal. Esto significa que la normativa varía según la comunidad autónoma donde opere el centro.

**Normativa estatal aplicable:**

Ley Orgánica de Educación (LOMLOE, Ley 3/2020):
- Marco general del sistema educativo, estructura de etapas, currículo básico
- Regulación del régimen de conciertos educativos
- Derechos y deberes de los alumnos y las familias

Real Decreto 332/1992 (y normativas autonómicas derivadas):
- Requisitos mínimos de los centros educativos
- Ratios alumnos/docente por etapa
- Condiciones de las instalaciones

Ley 26/2015 de Protección a la Infancia:
- Obligación del personal del centro de comunicar a las autoridades cualquier sospecha de maltrato
- Requisito de certificado de no agresiones sexuales para todo el personal (Ley del Solo Sí es Sí)

**Normativa específica de Escuelas Infantiles (primer ciclo 0-3 años):**
- No está regulada por la LOMLOE en el primer ciclo: es competencia autonómica al 100%
- Cada comunidad tiene su propio decreto de autorización de escuelas infantiles de primer ciclo
- Las condiciones de instalaciones, ratios y requisitos de personal varían significativamente entre comunidades

### Autorización de centros educativos

**Para abrir o gestionar un nuevo centro educativo:**

El proceso de autorización varía por etapa y comunidad, pero los requisitos generales incluyen:

Instalaciones:
- Superficie mínima por alumno (varía por etapa y comunidad)
- Espacios obligatorios: aulas, aseos adaptados a edad, patio o zona de recreo, comedor si hay servicio
- Condiciones de seguridad: salidas de emergencia, sistemas contra incendios, accesibilidad para personas con discapacidad
- Inspección técnica y licencia de actividad municipal antes de la apertura

Personal mínimo:
- Dirección del centro: requisitos de titulación y experiencia del director/a
- Docentes: titulación requerida por etapa (Grado en Educación Infantil, Primaria, etc.)
- Ratios mínimos de personal por número de alumnos

Proyecto educativo:
- Proyecto educativo del centro: descripción del modelo pedagógico, valores, objetivos
- Reglamento de régimen interior (RRI): normas de funcionamiento interno
- Programa de formación del profesorado

**Errores frecuentes en la autorización:**
- Iniciar obras sin consultar previamente con la administración educativa: el diseño de los espacios debe cumplir requisitos específicos que no siempre coinciden con lo que permite el urbanismo
- No verificar si el local donde se abre el centro está en zona adecuada según el plan de ordenación urbana
- Abrir al público antes de obtener la autorización definitiva (puede generar sanciones graves)

### RGPD y protección de datos en centros educativos

Los centros educativos manejan datos especialmente sensibles: datos de menores, datos de salud (alergias, medicaciones, necesidades especiales), datos de situaciones familiares (custodias, divorcios, situaciones de riesgo).

**Principios aplicables al tratamiento de datos de menores:**

En España, el artículo 7 de la LOPDGDD fija la edad de consentimiento en 14 años. Por debajo de 14 años, el consentimiento para el tratamiento de datos debe prestarse por el padre, madre o tutor legal.

Bases legales para el tratamiento de datos en un colegio:

Contrato (ejecución del servicio educativo):
- Datos de identificación del alumno y de los progenitores
- Datos académicos (calificaciones, evaluaciones)
- Datos de asistencia
- Datos de comunicación habitual con las familias

Obligación legal:
- Datos obligatorios por normativa educativa (matriculación, libro de escolaridad)
- Comunicación de datos a la administración educativa
- Registro de accidentes e incidencias

Interés legítimo:
- Fotografías de uso interno (no publicadas) para identificación en el comedor o en excursiones
- Datos de salud básicos necesarios para la prestación del servicio (alergias, medicaciones habituales)

Consentimiento (siempre de padre/madre para menores de 14 años):
- Publicación de fotografías del alumno en la web del centro, redes sociales o publicaciones
- Comunicaciones de marketing a las familias
- Uso de plataformas digitales opcionales que impliquen tratamiento de datos del menor

**Documentos RGPD obligatorios para el centro:**

1. Registro de Actividades de Tratamiento (RAT):
Documento interno (no se publica) que lista todos los tratamientos de datos del centro: qué datos, para qué, con qué base legal, cuánto tiempo se conservan, quién tiene acceso, si se ceden a terceros.

2. Política de Privacidad:
Información que se entrega a las familias al inicio de la relación, explicando cómo se tratarán los datos de sus hijos. Debe ser comprensible, no solo legalmente correcta.

3. Cláusulas en los contratos con proveedores digitales:
Cada proveedor de software que trate datos de alumnos (plataforma de comunicación, software de gestión, herramienta educativa online) debe firmar un contrato de encargo del tratamiento. Muchos proveedores tienen este contrato disponible, pero el centro debe verificar que cumple con el RGPD.

4. Protocolo de gestión de brechas de seguridad:
Si hay una brecha de seguridad (pérdida de datos, acceso no autorizado), el centro tiene 72 horas para notificarla a la AEPD si es de alto riesgo. Debe haber un protocolo que defina quién decide si es notificable y quién hace la notificación.

5. Gestión de los derechos de los interesados:
Protocolo de respuesta a solicitudes de acceso, rectificación, supresión, limitación del tratamiento y portabilidad, con plazos (30 días para responder) y formulario de solicitud.

### Contrato con familias: elementos esenciales

El contrato con las familias es el documento más importante de la relación jurídica entre el centro y la familia. Debe regular:

**Objeto del contrato:**
- Descripción exacta de los servicios incluidos: educación, comedor, transporte, actividades extraescolares (qué incluye la cuota y qué se factura aparte)
- Etapa educativa y curso o aula en la que se escolariza el alumno
- Horario del servicio: entrada, salida, ampliación de horario

**Precio y condiciones de pago:**
- Cuota mensual y otros conceptos (matrícula anual, material, actividades)
- Día de cobro y método (domiciliación bancaria)
- Política de cuotas impagadas: plazo de tolerancia, consecuencias del impago
- Revisión anual del precio: cómo y cuándo se comunica la actualización de tarifas

**Derechos y obligaciones de las familias:**
- Obligación de informar sobre alergias, medicaciones o condiciones de salud del alumno
- Obligación de cumplir los protocolos del centro (recogida, comunicación, participación)
- Derecho a recibir información académica del alumno
- Protocolo de comunicación: cómo y cuándo pueden contactar con el maestro

**Normas de recogida y custodia:**
- Quién puede recoger al alumno: esta cláusula es crítica, especialmente en situaciones de separación o divorcio con desacuerdo entre progenitores
- Protocolo si el adulto autorizado no aparece a la hora de salida
- Política de menores no recogidos a tiempo

**Cláusulas de baja:**
- Preaviso mínimo para causar baja: generalmente 30-60 días, por escrito
- Si la baja no se comunica con el preaviso, se mantiene la obligación de pago
- Devolución de la matrícula en caso de baja anticipada (sí o no, y en qué condiciones)

### Gestión de accidentes e incidentes en el centro

**Responsabilidad civil del centro:**

El colegio tiene el deber de custodia de los alumnos durante el horario escolar. Si un alumno sufre un accidente, el centro puede ser responsable civil si hay negligencia en la supervisión o en el mantenimiento de las instalaciones.

Seguro de responsabilidad civil: obligatorio para centros educativos. Debe cubrir:
- Accidentes de alumnos en el centro y en actividades extraescolares
- Daños a terceros causados por alumnos bajo supervisión del centro
- Responsabilidad del personal docente en el ejercicio de sus funciones

**Protocolo de gestión de accidentes:**

Inmediatamente:
1. Atención al alumno: primeros auxilios, llamada a servicios de emergencia si es necesario
2. Contacto con los progenitores: inmediatamente para accidentes de cualquier gravedad
3. Registro del accidente: parte interno con descripción del accidente, testigos, medidas adoptadas

En las 24 horas siguientes:
4. Comunicación a la aseguradora si hay lesión que requiere atención médica
5. Revisión del protocolo: ¿qué ha fallado? ¿qué medida preventiva se puede implementar?
6. Comunicación a la administración educativa si es un accidente grave (requisito legal en muchas comunidades)

### Instrucciones para generar

Con el contexto de mi centro, genera:

1. Contrato con familias: borrador completo del contrato de prestación de servicios educativos para mi tipo de centro, con todos los apartados esenciales, en lenguaje claro y accesible para las familias, con las cláusulas más críticas para la protección del centro destacadas con comentarios explicativos.

2. Formulario de consentimiento RGPD: documento de información y consentimiento en materia de protección de datos a entregar a las familias, adaptado a los tratamientos específicos de mi centro (datos básicos, fotografías, plataformas digitales, comunicaciones) y redactado en lenguaje comprensible, no solo legalmente correcto.

3. Protocolo de recogida de alumnos: documento que regula quién puede recoger al alumno, cómo se gestiona la autorización a terceros, el protocolo cuando el alumno no es recogido a tiempo, y el procedimiento en situaciones de conflicto entre progenitores (separación, restricciones de custodia).

4. Checklist de compliance legal anual: lista de todas las obligaciones legales del centro que deben revisarse cada año (renovación de seguros, actualización de documentos RGPD, revisión del contrato, actualización del proyecto educativo, certificados del personal) con el mes en que deben revisarse y quién es el responsable.

Nota: todos los documentos son borradores orientativos. La normativa varía por comunidad autónoma y cambia con frecuencia. Consulta siempre con un abogado especializado antes de usar cualquier documento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Marco legal, contratos y RGPD para centros de educación infantil y primaria',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunicación con familias en colegios de infantil y primaria: protocolos de atención y gestión de conflictos',
                'description'      => 'Diseña los protocolos de comunicación y atención a familias para centros de educación infantil y primaria: gestión de tutorías difíciles, comunicación de incidencias, manejo de padres exigentes y respuesta a quejas.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en comunicación y atención a familias en el sector educativo, con experiencia formando a equipos de maestros y directivos de colegios de infantil y primaria en cómo gestionar las situaciones de comunicación más difíciles: dar malas noticias sobre el rendimiento o la conducta de un alumno, manejar padres que cuestionan al maestro, gestionar conflictos entre familias, y comunicar decisiones impopulares del centro sin perder la confianza de las familias.

Contexto de mi centro:
- Tipo de centro y etapa: [escuela infantil / primaria / ambas]
- Perfil de las familias: [familias con alta implicación y expectativas exigentes / familias con baja implicación / mezcla / familias con diversidad cultural y de idioma]
- Principal reto de comunicación: [padres que cuestionan constantemente las decisiones del maestro / falta de respuesta de familias poco implicadas / conflictos entre familias / gestión de redes sociales de padres / comunicación de situaciones de acoso / otro]
- Canales de comunicación actuales: [agenda de papel / app de comunicación escolar / WhatsApp / email / sin sistema formal]
- Estado de la comunicación: [funciona bien / hay tensión frecuente / comunicación reactiva solo cuando hay problemas]

---

## Protocolos de comunicación con familias en educación infantil y primaria

### El contexto único de la comunicación escuela-familia

La comunicación con familias en educación infantil y primaria tiene características que la hacen especialmente exigente:

**La familia es copropietaria del proceso educativo:**
En educación infantil y primaria, la ley y la pedagogía reconocen que la familia es la principal educadora del niño. El colegio colabora y complementa, no sustituye. Esta concepción compartida del rol educativo crea un terreno de diálogo que puede ser enriquecedor... o conflictivo cuando las familias tienen expectativas muy diferentes de las del centro.

**El niño como intermediario:**
El niño no siempre transmite fielmente lo que ocurre en el cole. Un niño de 5 años que llega a casa diciendo "la seño me ha gritado" puede significar que la maestra levantó la voz en clase, que la llamó la atención, o simplemente que tuvo un mal día y está procesando frustraciones. Los padres que reaccionan a estas versiones sin consultar al centro crean conflictos innecesarios.

**La alta carga emocional de los padres:**
Hablar con un padre sobre su hijo no es lo mismo que hablar con un cliente sobre un producto. Es hablar sobre la persona más amada e importante de su vida. Cualquier crítica, por constructiva que sea, puede activar la defensividad más profunda. La gestión emocional del maestro y del director en estas conversaciones es tan importante como el contenido.

**Las redes sociales de padres:**
El grupo de WhatsApp de padres de la clase es una de las mayores fuentes de conflictos en educación contemporánea. Una queja de un padre a las 11 de la noche puede haber dado 50 respuestas y escalado hasta un conflicto grave antes de que el maestro llegue al colegio al día siguiente.

### Canales de comunicación: qué usar y para qué

**Agenda física o digital:**
- Para qué: comunicaciones de rutina, deberes, notas breves de comportamiento o logros
- Tono: positivo o neutro, nunca agresivo ni cargado emocionalmente
- Lo que no debe ir en la agenda: noticias importantes sobre el rendimiento del alumno, situaciones de conflicto

**Email:**
- Para qué: comunicaciones formales del centro, circulares, convocatorias de reuniones
- Tono: formal pero cercano
- Lo que no debe ir en email: conversaciones de doble sentido, situaciones emocionales que requieran diálogo

**Aplicación escolar (ClassDojo, Seesaw, Tokapp, etc.):**
- Para qué: comunicación bidireccional de contenido y logros, convocatorias, noticias del centro
- Ventaja sobre WhatsApp: el contenido permanece en el canal oficial, hay registro
- Importante: establecer horario de respuesta del maestro para no crear expectativa de disponibilidad 24/7

**WhatsApp (entre maestro y familia individual):**
- Para qué: situaciones urgentes que no pueden esperar a la tutoría
- Lo que NO debe usarse para WhatsApp: conversaciones largas sobre el rendimiento del alumno, comunicación de situaciones difíciles
- Problema: no hay registro formal, puede malinterpretarse, borra la frontera profesional-personal

**Grupos de WhatsApp de padres (no del maestro):**
- El maestro nunca debe estar en el grupo de padres de la clase
- El centro debe establecer una política clara: los grupos de padres son privados y el maestro no tiene acceso ni obligación de responder a lo que ahí se discute
- Si una situación en el grupo de padres escala y llega al centro, el director debe intervenir por canal oficial

**Tutoría presencial:**
- Para qué: situaciones que requieren diálogo profundo (rendimiento, conducta, dificultades de aprendizaje, situaciones familiares que afectan al alumno)
- Siempre que haya que dar información importante que pueda impactar emocionalmente a la familia: en persona, nunca por escrito
- Tiempo mínimo garantizado: 20-30 minutos, no tutoría de pasillo de 5 minutos

### Protocolo de tutoría difícil: cómo dar malas noticias a una familia

**Tipos de conversaciones difíciles en el ámbito escolar:**

Tipo 1 — Rendimiento académico significativamente por debajo de lo esperado:
Preparación: tener datos concretos (calificaciones, trabajos de muestra, resultados de evaluación), no valoraciones subjetivas. "Tu hijo tiene dificultades en la lectoescritura: aquí puedes ver que en estas actividades ha conseguido X, mientras que el nivel esperado para su edad es Y"

Tipo 2 — Problemas de conducta que afectan a la dinámica del aula:
Preparación: hechos concretos con fechas y descripción objetiva, no "es un niño difícil". "En estas tres situaciones concretas de esta semana, esto es lo que ha ocurrido y esto es lo que hemos hecho"

Tipo 3 — Sospecha de dificultad de aprendizaje o de desarrollo:
Requiere la máxima delicadeza. La familia puede no haber contemplado esta posibilidad. El maestro no diagnostica: observa y propone derivación a los profesionales adecuados. "Hemos observado algunas características en el aprendizaje de [nombre] que nos gustaría comentar contigo. No queremos alarmarte, pero creemos que puede beneficiarse de una evaluación más detallada."

**Estructura de la tutoría difícil:**

Apertura de seguridad (2-3 minutos):
Empieza siempre por algo positivo y real sobre el niño. No es falso: hay algo positivo en todos los alumnos. Esto establece que el maestro conoce al niño como persona completa, no solo como problema.

Presentación de lo que se ha observado (10-15 minutos):
Hechos concretos y objetivos. Sin valoraciones ni etiquetas. "He observado que..." "En estas situaciones concretas..."

Escucha activa de la perspectiva familiar (5-10 minutos):
"¿Habéis notado algo similar en casa? ¿Cómo es [nombre] con los deberes?" Deja que la familia dé su perspectiva antes de proponer soluciones.

Plan de acción conjunto (5-10 minutos):
Qué va a hacer el centro, qué puede hacer la familia, cuándo se vuelven a ver para valorar si está funcionando.

**Gestión de padres defensivos o agresivos:**

Si el padre se pone a la defensiva o agresivo:
- No elevar el tono ni el ritmo de la conversación: mantén calma y habla más despacio
- No defenderse de forma personal: "Entiendo que te genera preocupación lo que te estoy contando"
- Redirigir al niño como centro: "Los dos queremos lo mejor para [nombre]. Veamos cómo podemos ayudarle juntos"
- Si la situación se descontrola: proponer otra cita con la directora presente

### Comunicación de situaciones de acoso o conflicto entre alumnos

Esta es la comunicación más sensible en el ámbito escolar:

**Principios de comunicación en casos de acoso:**

Si eres el maestro o director del alumno que puede estar siendo víctima:
- Primero hablar con el alumno con calma y sin dramatizar: "¿Me puedes contar qué ha pasado?"
- Luego hablar con la familia de la víctima: informar de lo observado, de lo que está haciendo el centro y del protocolo que sigue
- No dar el nombre del posible agresor a la familia de la víctima: es función del centro gestionar el conflicto, no de las familias entre sí

Si eres el maestro o director del alumno que puede ser agresor:
- Hablar primero con el alumno: sin acusación, explorando lo que ha ocurrido desde su perspectiva
- Luego hablar con la familia: informar de lo observado y de lo que ha dicho el alumno, del protocolo del centro y de las medidas que se van a tomar
- No minimizar ni magnificar: presentar los hechos con objetividad

**Lo que nunca debe hacerse en situaciones de acoso:**
- Juntar a las familias de víctima y agresor en la misma reunión: es una escalada que beneficia a nadie
- Resolver por WhatsApp: estas situaciones requieren conversación presencial
- Dar el nombre del denunciante a la familia del acusado sin el consentimiento de la primera

### Instrucciones para generar

Con el contexto de mi centro, genera:

1. Protocolo de comunicación con familias del centro: documento que establece los canales de comunicación para cada tipo de situación, el horario de disponibilidad del maestro, cómo solicitar una tutoría urgente, y la política del centro sobre los grupos de WhatsApp de padres.

2. Guión de tutoría difícil: script completo para el tipo de conversación difícil más frecuente en mi centro (rendimiento / conducta / sospecha de dificultad de aprendizaje), con apertura, presentación de la situación, preguntas de escucha activa, y plan de acción conjunto.

3. Protocolo de comunicación de incidencias graves: flujo de comunicación cuando ocurre un accidente del alumno, un incidente de acoso, o una situación de riesgo o sospecha de maltrato, con quién hace qué comunicación, en qué canal, en qué plazo, y cómo registrarlo.

4. Plantillas de comunicación habitual: 6 modelos de mensajes tipo para las situaciones más frecuentes en mi centro (convocatoria de tutoría, comunicado de incidencia menor, invitación a reunión de padres, respuesta a queja de familia, comunicación de resultado de evaluación trimestral, comunicación de cambio de norma o protocolo del centro).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Protocolos de comunicación y atención a familias en centros de educación infantil y primaria',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en educación infantil y primaria: cómo monetizar tu experiencia docente con IA',
                'description'      => 'Construye un negocio independiente como docente, pedagogo o especialista en educación infantil y primaria: creación de recursos educativos, formación de maestros, consultoría pedagógica y clases particulares con una estrategia clara de posicionamiento y precios.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de estrategia para docentes y profesionales de la educación que quieren crear ingresos independientes fuera de la estructura escolar, con experiencia ayudando a maestros, pedagogos, logopedas, psicólogos educativos y especialistas en educación a diseñar propuestas de valor claras, encontrar sus primeros clientes y construir negocios independientes sostenibles en el sector educativo español.

Contexto de mi situación:
- Perfil profesional: [maestra de infantil o primaria / pedagoga / logopeda / psicóloga educativa / orientadora / especialista en PT o AL / educadora social / terapeuta ocupacional / otro]
- Años de experiencia: [menos de 3 / 3-8 / más de 8 / más de 15]
- Especialización o área de interés: [lectoescritura / matemáticas / educación emocional / necesidades educativas especiales / metodologías activas (Montessori, Waldorf, ABP) / idiomas / otro]
- Situación laboral actual: [docente en activo en colegio público/concertado/privado / excedencia o baja / desempleada / ya tengo alguna actividad independiente]
- Objetivo: [ingresos complementarios mientras sigo en el colegio / independizarme completamente del sistema / construir un negocio a largo plazo / vender recursos online]
- Mayor inseguridad: [cómo poner precio a mi trabajo / cómo encontrar clientes / aspectos fiscales y legales de ser autónoma / si realmente hay mercado para lo que sé]

---

## Hoja de ruta para docentes y especialistas en educación que quieren trabajar de forma independiente

### Por qué ahora es un buen momento para el freelance educativo

El sector del freelance educativo ha experimentado un crecimiento sostenido en España en los últimos años por varios factores convergentes:

**Digitalización del aprendizaje:**
Los marketplace de recursos educativos (Teachers Pay Teachers, Materiales Creativos, Genially) han creado mercados donde los maestros pueden vender sus recursos a otros maestros y a familias. Una unidad didáctica bien diseñada puede venderse miles de veces sin trabajo adicional.

**Auge de las clases particulares:**
La demanda de apoyo escolar complementario sigue creciendo. Las familias buscan cada vez más especialistas específicos (logopeda, especialista en dislexia, apoyo en matemáticas) más que profesores particulares generalistas.

**Demanda de formación entre docentes:**
Los maestros en activo buscan formación en metodologías innovadoras, gestión del aula, educación emocional, neurodidáctica. Un docente con experiencia y buenas habilidades de comunicación puede ofrecer talleres de formación a centros y a otros maestros.

**Consultoría pedagógica para centros:**
Los colegios privados e infantiles que quieren implantar nuevos métodos (Montessori, bilingüismo, aprendizaje basado en proyectos) necesitan asesoramiento externo de especialistas que ya lo han implementado.

### Los 7 modelos de negocio para docentes independientes

**Modelo 1 — Creación y venta de recursos educativos digitales:**
- Qué ofreces: fichas, unidades didácticas, materiales de clase descargables
- Plataformas: Materiales Creativos (España), Teachers Pay Teachers (internacional), Tu propio store en Shopify o Gumroad, TPT
- Tarifa media: 2-15€ por recurso, paquetes de 30-80€
- Ingresos potenciales: escala bien (puedes vender el mismo recurso 1.000 veces), pero requiere tiempo para crear catálogo inicial y para hacer crecer la audiencia
- Tiempo para primeros ingresos: 3-6 meses

**Modelo 2 — Clases particulares especializadas:**
- Qué ofreces: apoyo escolar en tu área de especialización (lectoescritura, matemáticas, atención a la diversidad)
- Plataformas: Superprof, Classgap, Wuolah, tu propia web, boca a boca
- Tarifa media: 25-60€/hora según especialización y modalidad (online más barato que presencial)
- Ingresos potenciales: limitados por las horas disponibles (techo de ingresos)
- Tiempo para primeros ingresos: 2-4 semanas con la estrategia correcta

**Modelo 3 — Talleres y formación para maestros:**
- Qué ofreces: talleres presenciales u online sobre metodologías, gestión del aula, educación emocional, etc.
- Clientes: centros de profesorado (CPR/CEP), colegios privados, asociaciones de maestros
- Tarifa media: 300-800€ por taller de un día, 150-300€ por webinar de 2 horas
- Ingresos potenciales: buenos por sesión, pero requiere red de contactos y reputación
- Tiempo para primeros ingresos: 2-6 meses (necesitas referencias primero)

**Modelo 4 — Consultoría pedagógica para centros:**
- Qué ofreces: asesoramiento en implantación de metodologías, rediseño del proyecto educativo, formación del claustro, acompañamiento en procesos de innovación
- Clientes: colegios privados e infantiles, empresas de EdTech, editoriales educativas
- Tarifa media: 80-150€/hora de consultoría, proyectos de 3.000-15.000€
- Ingresos potenciales: los más altos por hora pero los más difíciles de conseguir al principio
- Tiempo para primeros ingresos: 4-12 meses (necesitas credibilidad demostrable)

**Modelo 5 — Cursos online para familias:**
- Qué ofreces: cursos dirigidos a padres sobre cómo apoyar el aprendizaje de sus hijos (lectoescritura, matemáticas, gestión emocional, pantallas, etc.)
- Plataformas: Teachable, Thinkific, Hotmart, Udemy
- Tarifa media: 30-150€ por curso grabado, 150-400€ por programa con acompañamiento
- Ingresos potenciales: escalan bien si tienes audiencia online, requieren inversión inicial en creación del curso
- Tiempo para primeros ingresos: 3-9 meses

**Modelo 6 — Programa de apoyo terapéutico o especializado:**
- Qué ofreces: intervención especializada en dificultades de aprendizaje (dislexia, TDAH, TEA, discalculia) si tienes formación específica
- Clientes: familias con niños con necesidades educativas especiales o específicas de aprendizaje
- Tarifa media: 40-90€/sesión según especialización
- Ingresos potenciales: buenos y estables (los clientes suelen tener continuidad larga)
- Tiempo para primeros ingresos: 2-4 semanas con derivaciones de colegios y pediatras

**Modelo 7 — Creación de contenido educativo para redes sociales:**
- Qué ofreces: contenido educativo para Instagram, TikTok, YouTube sobre educación infantil y primaria
- Monetización: colaboraciones con marcas educativas, venta de recursos propios a la audiencia, consultoría para EdTech que quieren tu audiencia
- Tarifa media de colaboración con marca: 200-2.000€ según tamaño de audiencia
- Tiempo para primeros ingresos: 6-18 meses (construir audiencia es lento)
- Pero: es el canal que más visibilidad da a todos los demás modelos

### Estrategia de posicionamiento y precios

**El error más común: cobrar por debajo del valor que aportas:**

Los docentes tienden a infravalorar su experiencia por dos razones:
1. En el sistema educativo, el sueldo es bajo independientemente de la calidad del trabajo
2. "Enseñar es una vocación" → la vocación no debería pagarse

La realidad del mercado: una logopeda en clínica privada cobra 50-80€/sesión. Un psicólogo educativo cobra 60-100€/sesión. Una maestra de apoyo en clases particulares especializadas puede cobrar 40-60€/hora. Estos precios son de mercado y el cliente los paga porque percibe el valor.

**Cómo fijar tu precio:**

Paso 1 — Calcula tu tarifa mínima:
¿Cuánto necesitas ganar al mes para que el freelance tenga sentido? Divide entre las horas que puedes dedicar de forma realista (considerando que no todo es "horas facturables": parte del tiempo es marketing, admin, formación).

Paso 2 — Investiga el mercado:
Mira Superprof, Classgap o lo que cobran otros profesionales con tu perfil en tu zona. No copies los precios más bajos: posiciónate en el rango medio-alto de tu segmento.

Paso 3 — Diferencia por especialización:
Una maestra general de primaria cobra menos que una especialista en dislexia. Una especialista en dislexia con formación acreditada cobra más que una sin acreditación. Cuanto más específica y difícil de reemplazar sea tu especialización, más puedes cobrar.

**Aspectos fiscales del freelance educativo en España:**

Como autónoma:
- Alta en el RETA (Régimen Especial de Trabajadores Autónomos): cuota mínima actual (~290€/mes en tramo inicial, reducida los primeros meses con la tarifa plana)
- Facturación con IVA: la enseñanza reglada está exenta de IVA. Las clases particulares de materia curricular impartidas por personas físicas también están exentas. Consultar con un gestor para tu caso específico.
- IRPF: retención del 15% (7% los primeros 3 años de actividad) si facturas a empresas

Si mantienes el empleo en el colegio y quieres actividad complementaria:
- Verificar si el contrato laboral o el convenio permite actividad por cuenta propia (compatibilidad)
- En la función pública: necesitas solicitar compatibilidad ante la administración

### Instrucciones para generar

Con mi contexto y perfil, genera:

1. Propuesta de valor y nicho: cuál de los 7 modelos de negocio (o combinación de ellos) es más adecuado para mi perfil, experiencia y objetivos, con argumentación de por qué ese modelo tiene mercado y qué me diferencia de otros profesionales con perfil similar.

2. Plan de primeros ingresos en 60 días: qué hacer exactamente en las primeras 8 semanas para conseguir mis primeros clientes o ventas, con acciones concretas semana a semana, recursos necesarios (tiempo, dinero, herramientas), y expectativas realistas de ingresos al final de ese periodo.

3. Estructura de precios completa: tarifas para mis 2-3 servicios principales, con justificación del precio, descripción de qué incluye cada servicio, cómo presentar el precio al cliente (cuándo y cómo hablar de dinero) y cómo gestionar la negociación si el cliente pide un descuento.

4. Presencia digital mínima viable: qué necesito tener en marcha como mínimo para ser encontrada y generar confianza (perfil en qué plataformas, web básica o sin web, contenido en redes sociales o sin redes), con un plan de implementación de 2 semanas para tener lo esencial operativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia para construir un negocio independiente como docente o especialista en educación infantil',
                'vote_score'       => 35,
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
