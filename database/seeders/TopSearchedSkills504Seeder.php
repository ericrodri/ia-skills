<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills504Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'IA para copywriting persuasivo en marketing digital',
                'description'       => 'Domina las principales fórmulas de copywriting (AIDA, PAS, FAB) con ayuda de IA para crear textos que convierten en landing pages, emails, anuncios y redes sociales.',
                'prompt_content'    => <<<'EOT'
Eres un copywriter senior con más de 10 años de experiencia en marketing de respuesta directa y marketing digital. Dominas las principales fórmulas de copywriting y sabes cuándo aplicar cada una. Necesito tu ayuda para crear textos altamente persuasivos para diferentes formatos y canales.

**Contexto del negocio:**
- Producto o servicio: [describe lo que vendes]
- Cliente ideal: [perfil detallado del buyer persona]
- Principal beneficio diferencial: [qué te hace diferente de la competencia]
- Tono de marca: [formal / cercano / audaz / experto / empático]
- Canal de comunicación: [landing page / email / anuncio / red social / catálogo]

**tarea 1: Aplicación de la fórmula AIDA**

Crea una pieza de copy completa usando la fórmula AIDA para [describe el canal]:

- Atención: Un titular que detenga el scroll. Genera 10 opciones usando estas técnicas:
  * Pregunta que provoca curiosidad o miedo a perder
  * Dato estadístico impactante y específico
  * Afirmación contraintuitiva que desafía la creencia del lector
  * Promesa de beneficio concreto y medible en tiempo definido
  * Historia o anécdota que abre un bucle narrativo

- Interés: 2-3 párrafos que desarrollen el problema del lector con empatía y conocimiento profundo. Usa el lenguaje exacto que usa tu cliente ideal para describir su dolor.

- Deseo: Transforma las características del producto en beneficios emocionales. Por cada característica, escribe: "Lo que significa para ti es que [beneficio emocional]..."

- Acción: 5 versiones de CTA con verbos de acción, urgencia real y reducción de fricción. No uses nunca "Haz clic aquí" ni "Más información".

**tarea 2: Aplicación de la fórmula PAS**

Escribe un email de ventas completo usando Problem-Agitate-Solution:

- Problema (2-3 líneas): Identifica el problema específico del lector con precisión quirúrgica. Úsalo como asunto del email para maximizar la apertura.

- Agitar (1 párrafo): No es suficiente mencionar el problema. Haz que el lector sienta la urgencia. ¿Qué pasa si no lo resuelve? ¿Cuánto le está costando cada mes que pasa? ¿Cómo afecta a su vida, su negocio, su familia?

- Solución (1-2 párrafos): Presenta tu producto/servicio como el camino claro y confiable hacia la resolución. No describas el producto todavía: describe el estado posterior al problema resuelto.

- Prueba social: Inserta un testimonio de cliente que valide exactamente el problema que acabas de agitar.

- Oferta y CTA: La oferta irresistible + llamada a la acción sin fricción.

**tarea 3: Copywriting para landing page de alta conversión**

Diseña la estructura completa del copy de una landing page:

- Hero section: Titular principal + subtítulo + CTA primario (above the fold)
- Bloque de dolor: 3-5 bullets que describen la situación actual del visitante con sus palabras exactas
- Bloque de beneficios (no características): 4-6 beneficios con iconos, usando la estructura "Tú [resultado] sin [sacrificio]"
- Cómo funciona: 3 pasos simples que eliminan la percepción de complejidad
- Prueba social: combinación de número de clientes + testimonios con foto + logos de clientes empresariales
- Módulo de objeciones: FAQ que responde las 5 objeciones más frecuentes antes de que el visitante las piense
- Oferta con urgencia: qué incluye, precio tachado si aplica, garantía, bono limitado
- CTA final: repite el beneficio más importante + acción con verbo de beneficio

**tarea 4: Email subject lines que disparan la tasa de apertura**

Genera 30 asuntos de email para [producto/campaña] usando estas técnicas:

- Curiosidad: "La razón por la que [dato inesperado]..."
- Urgencia legítima: "Último día:" / "Quedan X plazas"
- Personalización: "[Nombre], sobre tu [situación específica]"
- Beneficio directo: "Cómo [resultado deseado] en [tiempo concreto]"
- Pregunta provocadora: "¿Cometes este error al [acción relacionada]?"
- Re-engagement: "¿Sigues interesado en [beneficio]?"
- Historia: "Lo que me pasó cuando..."
- Número concreto: "7 de cada 10 [perfil] hacen esto mal"

Para cada asunto, indica la técnica usada y el tipo de audiencia al que mejor se adapta.

**tarea 5: Storytelling de marca que vende sin vender**

Escribe una historia de marca de 400 palabras que:
- Comience con un momento de conflicto real del fundador o primer cliente
- Muestre el camino de descubrimiento de la solución con detalles sensoriales
- Conecte la misión de la empresa con el beneficio del cliente
- Incluya un giro de perspectiva que reencuadre cómo el cliente ve su propio problema
- Cierre con una invitación a la acción que se sienta natural, no forzada

La historia debe poder usarse como "About" de la web, presentación corporativa y primer email de bienvenida.

Trabaja con un tono auténtico, evita los clichés del sector y prioriza siempre la especificidad sobre la generalidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Creación de copy persuasivo con fórmulas AIDA y PAS para landing pages, emails y anuncios',
                'vote_score'        => 52,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'IA para escribir documentación técnica persuasiva en desarrollo',
                'description'       => 'Aprende a escribir READMEs, documentación de APIs y changelogs que no solo informan sino que convencen a desarrolladores de adoptar tu herramienta, usando principios de copywriting técnico.',
                'prompt_content'    => <<<'EOT'
Eres un technical writer y developer advocate con experiencia en escribir documentación que convierte visitantes en usuarios activos. Combinas el rigor técnico con los principios del copywriting persuasivo para crear documentación que enamora a los desarrolladores.

**Contexto del proyecto:**
- Tipo de herramienta: [librería open source / API de pago / CLI tool / SDK / framework]
- Lenguaje/plataforma: [Python / JavaScript / Go / etc.]
- Audiencia principal: [desarrolladores junior / senior / devops / data scientists]
- Competidor principal: [herramienta más usada actualmente]
- Principal ventaja competitiva: [rendimiento / simplicidad / precio / integración]

**tarea 1: README que convierte en 10 segundos**

Diseña el README perfecto con enfoque de copywriting:

- Headline: Una frase que resume el beneficio diferencial en menos de 15 palabras. No es el nombre del proyecto, es lo que hace por el desarrollador.

- Badges section: Qué insignias son realmente útiles (cobertura de tests, versión, licencia, descargas) y cuáles son decorativas. Cómo ordenarlas para máxima credibilidad.

- Párrafo de problema: 2-3 líneas que articulan el dolor que resuelve la herramienta, usando el lenguaje exacto del desarrollador que la busca en Google.

- Quick install + Hello World: El desarrollador debe poder ejecutar algo en menos de 60 segundos. Diseña la secuencia mínima de comandos y código que muestre el valor inmediatamente.

- Por qué esta herramienta vs la alternativa más popular: Tabla comparativa honesta, sin hipérboles, con datos reales.

- Sección "Who uses it": Logos + testimonios de equipos técnicos conocidos que ya la usan.

**tarea 2: Documentación de API que reduce el time-to-first-call**

Estructura la referencia de API para máxima velocidad de adopción:

- Autenticación: mínima fricción, máximo soporte de métodos (clave API, OAuth, JWT)
- Guia de inicio rápido: de cero a primera llamada exitosa en menos de 5 minutos
- Para cada endpoint: descripción orientada al caso de uso (no a la implementación), parámetros con valores de ejemplo reales, respuesta de ejemplo con todos los campos comentados, errores frecuentes con solución incluida
- Playground interactivo: cómo diseñar un entorno donde el desarrollador pueda probar sin configurar nada
- Changelog de la API: cómo comunicar breaking changes sin perder la confianza de los usuarios

**tarea 3: Copy para la página de marketing del producto técnico**

Escribe el copy de la landing page para desarrolladores:

- Hero: Titular técnico + subtítulo que habla de velocidad/simplicidad/escala + CTA "Ver en GitHub" o "Leer los docs"
- Sección de código antes/después: muestra la diferencia entre resolver el problema con y sin tu herramienta (el código habla más que cualquier texto)
- Beneficios para el equipo (no solo para el desarrollador individual): velocidad de desarrollo, mantenibilidad, costes de infraestructura
- Social proof técnico: número de estrellas en GitHub, proyectos conocidos que la usan, contribuidores activos
- Sección de confianza: open source, mantenimiento activo, compatibilidad, soporte

**tarea 4: Changelogs y release notes que generan expectación**

Convierte los changelogs aburridos en comunicaciones que la gente espera:

- Estructura narrativa: no solo lista de cambios, sino la historia de por qué se hicieron y qué desbloquean
- Priorización: qué cambios merecen sección propia vs qué va al listado general
- Copy para nuevas features: beneficio primero, implementación técnica después
- Comunicación de deprecations: cómo anunciar cambios dolorosos sin perder la confianza de la comunidad
- Canal de distribución: GitHub releases, newsletter de developers, Twitter/X técnico, blog post

**tarea 5: Persuasión técnica en code reviews y propuestas arquitectónicas**

Aplica copywriting a la comunicación técnica interna:

- Cómo escribir una propuesta de cambio de arquitectura que consiga buy-in del equipo y de negocio
- Estructura de un RFC (Request for Comments) que facilita la toma de decisiones técnicas
- Cómo redactar comentarios de code review que sean recibidos constructivamente y no generen conflicto
- Emails técnicos a dirección no técnica: cómo traducir decisiones de ingeniería a impacto de negocio

Incluye ejemplos reales de buena y mala documentación técnica con análisis de por qué una funciona y la otra no.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Escritura de documentación técnica persuasiva que convierte desarrolladores en usuarios activos',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA para copywriting en diseño UX y microcopy que convierte',
                'description'       => 'Escribe microcopy, mensajes de error, onboarding y CTAs que guían al usuario, reducen la fricción y aumentan la conversión, aplicando principios de copywriting al diseño de interfaces.',
                'prompt_content'    => <<<'EOT'
Eres un UX writer y diseñador de contenido con especialización en microcopy y escritura de interfaces. Sabes que cada palabra en una interfaz es una micro-decisión de diseño que afecta a la conversión, la retención y la satisfacción del usuario.

**Contexto del producto:**
- Tipo de producto: [app móvil / SaaS web / ecommerce / aplicación bancaria / plataforma educativa]
- Flujo a optimizar: [onboarding / checkout / registro / activación de feature / offboarding]
- Tono de voz: [formal / cercano / juguetón / experto / motivador]
- Problema actual: [alta tasa de abandono en el paso X / mensajes de error que confunden / CTAs con baja tasa de clic]

**tarea 1: Auditoría de microcopy actual**

Analiza el texto de interfaz que te proporcionaré e identifica:
- Mensajes que generan confusión o ansiedad innecesaria en el usuario
- CTAs débiles o genéricos ("Enviar", "Aceptar", "Continuar") que no comunican el beneficio
- Mensajes de error que culpan al usuario en lugar de ayudarle a recuperarse
- Textos de placeholder que desaparecen cuando el usuario empieza a escribir (problema de UX)
- Onboarding que informa pero no motiva ni guía hacia la primera acción de valor

Texto a auditar: [pega aquí el copy de tu interfaz]

**tarea 2: Reescritura de CTAs de alta conversión**

Para cada CTA genérico que me proporciones, escribe 5 alternativas que:
- Usen el verbo en primera persona desde la perspectiva del usuario ("Quiero conseguir X" en lugar de "Haz clic aquí")
- Comuniquen el beneficio inmediato del clic, no la acción técnica
- Reduzcan la percepción de riesgo cuando aplica ("Prueba gratis", "Sin tarjeta de crédito")
- Sean específicos sobre qué ocurre después del clic (eliminan la incertidumbre)
- Tengan la longitud adecuada para el elemento UI (botón: 2-4 palabras / enlace de texto: hasta 8)

CTAs a reescribir: [lista aquí tus CTAs actuales]

**tarea 3: Mensajes de error que ayudan al usuario a recuperarse**

Reescribe los mensajes de error siguiendo el framework: Qué pasó + Por qué + Qué hacer ahora:

- Error de formulario: nunca uses "Campo inválido". Explica exactamente qué formato necesita.
- Error de conexión: distingue entre error del usuario y error del sistema. No te disculpes por errores del usuario.
- Error 404 / página no encontrada: convierte el punto de fricción en oportunidad de descubrimiento.
- Error de permiso: explica qué necesita el usuario para tener acceso, sin tecnicismos.
- Error de proceso fallido (pago, subida de archivo): da un paso siguiente claro y reduce el miedo a repetir.

Mensajes de error a reescribir: [lista aquí tus mensajes actuales]

**tarea 4: Flujo de onboarding que activa al usuario**

Diseña el copy completo del onboarding de un nuevo usuario:

- Pantalla de bienvenida: el titular no es "Bienvenido a [nombre]" sino el resultado que va a conseguir
- Paso 1 de configuración: explica por qué ese dato es necesario antes de pedirlo
- Primer logro del usuario (empty state vs first action): cómo el producto celebra la primera acción del usuario
- Tooltips contextuales: aparecen en el momento correcto, son breves y tienen un CTA claro
- Email de activación: si el usuario no ha completado el onboarding, cómo reactivarle sin presionar
- Progreso: cómo mostrar el avance del onboarding para aprovechar el sesgo de completitud

**tarea 5: Voice & Tone guide para el producto**

Crea la guía de voz y tono de la interfaz:

- Valores de voz: 3-4 adjetivos que describen la personalidad del producto en su comunicación
- Para cada valor: qué significa en la práctica + ejemplo de cómo lo hacemos + ejemplo de cómo NO lo hacemos
- Tono por situación: cómo adaptar el mismo valor de voz a celebraciones, errores, momentos de carga, estados vacíos
- Palabras prohibidas: lista de términos técnicos, jerga interna o palabras que generan ansiedad que nunca usamos
- Guia de puntuación y estilo: mayúsculas en CTAs, signos de exclamación (cuándo sí y cuándo no), uso de emojis

Proporciona al menos 3 ejemplos de antes/después de microcopy para ilustrar cada principio de la guía.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimización de microcopy, CTAs y mensajes de error en interfaces digitales para aumentar la conversión',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA para copywriting de ventas y propuestas comerciales persuasivas',
                'description'       => 'Escribe propuestas comerciales, emails de prospección y scripts de venta que generan respuesta, usando fórmulas de copywriting de respuesta directa adaptadas al entorno B2B.',
                'prompt_content'    => <<<'EOT'
Eres un experto en copywriting de ventas B2B y marketing de respuesta directa, con experiencia en la creación de propuestas comerciales que cierran deals y emails de prospección con altas tasas de respuesta. Necesito dominar el copywriting aplicado al proceso de ventas.

**Contexto comercial:**
- Tipo de producto/servicio: [describe lo que vendes]
- Ciclo de ventas típico: [días/semanas/meses]
- Ticket promedio: [precio]
- Persona a la que le escribes: [cargo, sector, tamaño de empresa del destinatario]
- Objetivo del texto: [conseguir una reunión / cerrar el deal / reactivar un lead frío]

**tarea 1: Email de prospección fría que consigue respuesta**

Escribe un email de prospección frío que siga la estructura BASHO (Briefing + Achievement + Story + Hook + Offer):

- Asunto: personalizado y específico al negocio del prospecto, máximo 7 palabras
- Primera línea: muestra que has investigado al destinatario (no genérica)
- Problema/hipótesis: "Empresas como [tipo de empresa] a menudo tienen dificultades con [problema específico]..."
- Credibilidad en una línea: prueba social relevante para el sector del prospecto
- Oferta de bajo compromiso: pide una conversación de 15 minutos para ver si tiene sentido, no pidas que compre
- CTA de una sola acción: pregunta de cierre simple (sí/no) que maximiza la tasa de respuesta

Genera 5 versiones con diferentes personalizaciones y analiza cuál funcionaría mejor para cada tipo de prospecto.

**tarea 2: Propuesta comercial que dice sí sola**

Diseña la estructura de una propuesta comercial de alto impacto:

- Portada: más allá del logo y el nombre, un titular que resume el beneficio esperado del proyecto
- Resumen ejecutivo (1 página): problema, solución, inversión, ROI esperado. Para el C-level que no leerá el resto.
- Comprensión del problema: demuestra que has escuchado al cliente repitiendo sus palabras, no las tuyas
- Propuesta de solución: qué haces, cómo lo haces, por qué así y no de otra manera
- Por qué nosotros: prueba social específica al sector del cliente (no genérica)
- Inversión: presenta el precio en el contexto del retorno, no de forma aislada
- Próximos pasos: elimina la fricción. Diles exactamente qué hacer si quieren seguir adelante.
- Fecha de vigencia: urgencia legítima que acelera la decisión

**tarea 3: Follow-up emails que reactivan oportunidades frías**

Diseña la secuencia de seguimiento para oportunidades que se han enfriado:

- Email 1 (una semana sin respuesta): valor añadido, no recordatorio de que no contestaron
- Email 2 (dos semanas): caso de éxito relevante para el sector del prospecto
- Email 3 (un mes): cambio de ángulo, pregunta diferente, recurso nuevo
- Email 4 (45 días): "romper el hielo" con humor sutil y CTA mínimo
- Email 5 (60 días): el email de ruptura que a veces genera más respuesta que los anteriores

Para cada email: asunto + primeras 2 líneas + CTA. Máximo 150 palabras por email.

**tarea 4: Script de presentación de ventas (el pitch de 5 minutos)**

Escribe el guion de una presentación de ventas de 5 minutos que:
- Abre con una pregunta que provoca reflexión en el prospecto (no con "somos X y hacemos Y")
- Muestra que entiendes el problema mejor que ellos mismos
- Presenta la solución como un relato, no como una lista de características
- Usa datos y testimonios en el momento exacto en que se necesita credibilidad
- Cierra con una invitación a dar el siguiente paso, no con "¿alguna pregunta?"

Incluye notas de entonación, pausas dramáticas y momentos para preguntar al prospecto.

**tarea 5: Argumentario de objeciones con copywriting persuasivo**

Para cada objeción frecuente, escribe una respuesta de copywriting que:
- Valide la objeción genuinamente (no la ignore ni la minimice)
- Reencuadre la perspectiva del prospecto con una historia o dato
- Cierre con una pregunta que vuelva a poner al prospecto en modo solución

Objeciones a trabajar:
- "Es demasiado caro"
- "Lo tengo que pensar"
- "Ahora no es el momento"
- "Ya trabajamos con alguien que hace esto"
- "Necesito aprobación de mi jefe / del comité"

Cada respuesta debe tener menos de 100 palabras y sonar natural en una conversación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Escritura de emails de prospección, propuestas comerciales y scripts de ventas con copywriting de respuesta directa',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA para copywriting de producto y feature announcements',
                'description'       => 'Escribe comunicaciones de producto que generan adopción: release notes, emails de nuevas features, in-app messages y changelogs usando copywriting orientado al beneficio del usuario.',
                'prompt_content'    => <<<'EOT'
Eres un product marketer con especialización en copywriting de producto. Sabes que el mayor riesgo de una nueva feature no es que sea mala, sino que nadie la use. Tu trabajo es escribir comunicaciones que generen adopción desde el primer día.

**Contexto del lanzamiento:**
- Feature o producto a comunicar: [describe la nueva funcionalidad]
- Problema que resuelve: [qué dolor del usuario elimina]
- Usuario objetivo: [quién debería adoptarla primero]
- Canal de comunicación: [email / in-app message / changelog / blog post / release notes]
- Métrica de éxito del lanzamiento: [activaciones / usuarios que usan la feature en 7 días / upsells]

**tarea 1: Email de anuncio de nueva feature que genera adopción**

Escribe el email completo de lanzamiento de la nueva funcionalidad:

- Asunto: el beneficio de la feature, no su nombre técnico. "Ahorra 3 horas a la semana en [tarea]" vs "Presentamos [nombre de la feature]"
- Hero: una frase que describe el estado anterior al problema + el estado nuevo con la solución
- El "aha moment": en 2-3 líneas, describe el momento concreto en que el usuario se da cuenta del valor
- Cómo funciona: 3 pasos máximo. No manual, no tutorial. Solo lo esencial para empezar.
- Prueba social temprana: si ya hay beta users, una cita real de un usuario satisfecho
- CTA: un botón, una acción, sin alternativas que paralicen

Genera una versión corta (150 palabras) y una versión larga (400 palabras) del mismo email.

**tarea 2: In-app messages que generan el primer uso**

Diseña la secuencia de mensajes dentro del producto para activar la nueva feature:

- Tooltip de descubrimiento: aparece cuando el usuario está cerca del punto de entrada de la feature (máximo 20 palabras)
- Modal de bienvenida a la feature: qué hace + beneficio principal + CTA de primer uso
- Empty state: qué ve el usuario antes de usar la feature por primera vez (no dejes el espacio en blanco)
- Primer uso completado: celebración proporcional, sin exceso. Qué sigue ahora.
- Recordatorio para usuarios que no activaron: cómo reactivar sin ser invasivo

**tarea 3: Changelog que la gente realmente lee**

Reescribe estos changelogs aburridos en comunicaciones que generan expectación:

Changelogs a reescribir: [pega aquí tus release notes actuales]

El changelog ideal:
- Agrupa los cambios por beneficio al usuario, no por tipo técnico (bugfixes, improvements, new features)
- Tiene un titular que resume el espíritu de la release, no una fecha y un número de versión
- Incluye contexto: "Muchos de vosotros nos habéis pedido X. Aquí está."
- Enlaza a documentación específica solo cuando la feature es compleja
- Cierra con anticipación de lo que viene después

**tarea 4: Blog post de lanzamiento de producto que posiciona**

Escribe el blog post de lanzamiento de la feature con estructura SEO y copywriting:

- Titular: keyword principal + beneficio diferencial (para posicionar en búsquedas relevantes)
- Introducción: el problema del usuario en sus propias palabras (para que el lector sienta "esto es para mí")
- Cuerpo: historia del por qué se construyó + cómo funciona + casos de uso concretos con screenshots
- Sección de resultados: datos de beta users si están disponibles, o proyección de beneficio
- Llamada a la acción: segmentada según si el lector es cliente actual o nuevo prospecto

**tarea 5: Segmentación del mensaje según el perfil del usuario**

La misma feature puede comunicarse de forma muy diferente según el usuario:

Para la feature [describe la feature], escribe 4 versiones del mensaje principal adaptadas a:
- Usuario nuevo (menos de 7 días en el producto): enfatiza la facilidad de uso
- Usuario activo que aún no la conoce: enfatiza el ahorro de tiempo sobre lo que ya hace
- Usuario avanzado o power user: enfatiza la profundidad técnica y la integración con su flujo actual
- Usuario en riesgo de churn: enfatiza cómo esta feature resuelve el problema que le llevó a considerar irse

Incluye el asunto de email, el titular del in-app message y las primeras dos líneas para cada segmento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Copywriting de lanzamientos de producto, feature announcements y changelogs que generan adopción',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para copywriting en comunicaciones internas y employer branding',
                'description'       => 'Aplica principios de copywriting persuasivo a las comunicaciones internas de RRHH, desde ofertas de empleo que atraen talento hasta comunicados internos que generan engagement en el equipo.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en comunicación interna y employer branding con conocimientos avanzados de copywriting. Saber escribir bien no es solo para el marketing externo: las comunicaciones internas que convencen, motivan y retienen talento son igual de importantes y a menudo igual de descuidadas.

**Contexto de la organización:**
- Tipo de empresa: [startup / PYME / corporación / ONG]
- Cultura organizacional: [describe 3 valores culturales reales]
- Reto de comunicación actual: [atraer talento / retener empleados / comunicar cambios / aumentar engagement]
- Tono de comunicación interna objetivo: [cercano y directo / formal y estructurado / inspirador / transparente]

**tarea 1: Ofertas de empleo que atraen al candidato ideal**

Reescribe esta oferta de empleo usando principios de copywriting:

Oferta actual: [pega aquí la oferta]

La oferta ideal:
- Titular: el puesto + la promesa de desarrollo, no solo el nombre del cargo
- Por qué este rol importa: conecta la posición con el impacto en clientes, en la empresa, en el mundo
- Qué harás de verdad: actividades concretas en las primeras 4 semanas, no responsabilidades abstractas
- Qué necesitas: máximo 5 requisitos imprescindibles. Elimina el "nice to have" que ahuyenta a candidatos que calificarían
- Qué ofrecemos: beneficios ordenados por lo que más valora el candidato ideal (no por lo que más le cuesta a la empresa)
- Por qué unirte ahora: el momento específico de crecimiento de la empresa que hace que esta posición sea especialmente emocionante

**tarea 2: Comunicados internos que la gente realmente lee**

Reescribe estos comunicados internos para que generen atención y acción:

Comunicados a reescribir: [pega aquí los comunicados actuales]

El comunicado interno ideal:
- Asunto de email: qué cambia para mí (el empleado), no qué ha decidido la dirección
- Apertura: la conclusión primero. No hagas que el empleado lea 3 párrafos para saber de qué va el email
- El por qué: las personas aceptan mejor los cambios cuando entienden el razonamiento detrás
- Qué significa para ti: sección explícita con el impacto concreto en el día a día del lector
- Próximos pasos: quién hace qué y cuándo. Sin ambigüedad.
- Canal de preguntas: cómo hacer preguntas y cuándo obtendrán respuesta

**tarea 3: Onboarding de nuevos empleados que acelera el engagement**

Diseña la secuencia de comunicaciones del primer mes:

- Email de bienvenida antes del primer día: qué esperar, qué preparar, un detalle humano inesperado
- Mensaje del manager el primer día: expectativas claras + oferta de apoyo + primera reunión de 1:1
- Newsletter del primer mes: cómo presentar la cultura real (no la declarada) a través de historias de empleados
- Check-in de 30 días: encuesta de 5 preguntas para identificar fricciones tempranamente
- Mensaje de celebración del primer mes: qué ha conseguido ya el nuevo empleado (específico, no genérico)

**tarea 4: Campañas de reconocimiento y motivación**

Crea un programa de reconocimiento comunicado de forma efectiva:

- Plantilla de reconocimiento público: cómo escribir un reconocimiento que no suene corporativo ni vacío
- Anuncio de logros del equipo: cómo comunicar un hito del equipo de forma que todos se sientan parte
- Mensaje de agradecimiento personal del CEO o directivo: cómo sonar genuino a escala
- Comunicación de ascensos: cómo anunciar promociones de forma que inspire a otros sin generar resentimiento

**tarea 5: Narrativa de employer branding para LinkedIn y redes**

Diseña la estrategia de contenido de employer branding:

- 10 ideas de posts de LinkedIn que muestran la cultura real de la empresa (con estructura completa de cada post)
- Cómo transformar el feedback de los empleados (encuestas de clima) en contenido auténtico de employer branding
- Guia para que los empleados compartan contenido de marca en sus perfiles personales (sin que parezca forzado)
- Formato de "un día en la empresa": cómo documentar y comunicar la experiencia del empleado de forma atractiva

Incluye ejemplos reales de copywriting para cada formato y las métricas de éxito específicas para cada tipo de comunicación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Aplicación de copywriting persuasivo a comunicaciones internas, ofertas de empleo y employer branding',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para copywriting financiero que genera confianza y conversión',
                'description'       => 'Escribe textos financieros que comunican valor y generan confianza sin inflar expectativas, aplicando copywriting ético a servicios de inversión, seguros, fintech y gestión patrimonial.',
                'prompt_content'    => <<<'EOT'
Eres un copywriter especializado en servicios financieros con conocimiento del marco regulatorio (MiFID II, normativa bancaria, requisitos de compliance) y de la psicología del inversor. El sector financiero es uno de los más difíciles para hacer copywriting: debe ser persuasivo y al mismo tiempo cumplir con las normativas de publicidad financiera.

**Contexto del servicio financiero:**
- Tipo de producto/servicio: [fondo de inversión / seguro de vida / hipoteca / cuenta de ahorro / plataforma de inversión / gestión patrimonial]
- Público objetivo: [perfil del inversor: conservador/moderado/agresivo; nivel de conocimiento financiero; segmento de patrimonio]
- Restricciones legales específicas: [requisitos de compliance, disclaimers obligatorios, prohibiciones de promesas de rentabilidad]
- Tono deseado: [confianza y solidez / accesible y cercano / premium y exclusivo]

**tarea 1: Headline financiero que atrae sin prometer lo imposible**

El gran reto del copywriting financiero es generar atención sin hacer promesas de rentabilidad que sean falsas o ilegales. Crea 10 titulares para [producto financiero] que:
- Apelen al beneficio emocional (seguridad, tranquilidad, control, independencia) en lugar de prometer rentabilidades específicas
- Generen curiosidad sin sensacionalismo
- Sean verídicos y puedan pasar un filtro de compliance
- Diferencien el producto de la competencia de forma honesta

Para cada titular, indica el beneficio emocional que activa y el tipo de perfil de inversor al que más apela.

**tarea 2: Explicación de productos complejos en lenguaje claro**

Traduce la jerga financiera a lenguaje que entiende cualquier persona:

Producto a explicar: [describe el producto financiero con su terminología técnica]

La explicación debe:
- Comenzar por el beneficio para el cliente, no por cómo funciona el producto
- Usar analogías del mundo cotidiano para explicar conceptos complejos (interés compuesto = "la bola de nieve")
- Responder las preguntas implícitas: ¿Es seguro mi dinero? ¿Cuándo puedo sacarlo? ¿Qué pasa si el mercado cae?
- Incluir el riesgo de forma honesta sin aterrorizar al lector
- Terminar con una invitación a dar el siguiente paso de bajo compromiso

**tarea 3: Email de nurturing financiero para prospects**

Diseña una secuencia de 5 emails para un lead que descargó una guía de inversión pero aún no se ha convertido:

- Email 1 (día 1): entrega el lead magnet + establece credibilidad + preview de lo que viene
- Email 2 (día 3): caso de éxito de cliente similar (sin prometer rentabilidades, focalizando en el proceso y la tranquilidad)
- Email 3 (día 7): responde la objeción más frecuente de tu perfil de cliente
- Email 4 (día 10): comparativa educativa: invertir vs no invertir (el coste de la inacción)
- Email 5 (día 14): CTA final con oferta de consulta sin compromiso + urgencia legítima

Cada email debe incluir: asunto + texto completo + nota de compliance con qué elementos hay que revisar legalmente.

**tarea 4: Disclaimers que protegen sin destruir la conversión**

Uno de los mayores problemas del copywriting financiero es el disclaimer que mata el mensaje. Escribe disclaimers que:
- Cumplan con la normativa vigente en España y la UE (MiFID II, Ley del Mercado de Valores)
- Estén escritos en lenguaje comprensible para el lector no experto
- Estén integrados en el copy de forma que no interrumpan el flujo de lectura
- Sean proporcionados al tipo de producto (no el mismo disclaimer para una cuenta de ahorro que para un fondo de alto riesgo)

**tarea 5: Páginas de producto financiero en web y app**

Escribe el copy completo de la página de producto para [tipo de producto]:

- Hero: beneficio principal + CTA de primer contacto de bajo compromiso
- Para quién es: descripción del perfil de cliente ideal que se reconozca en el texto
- Cómo funciona: proceso en 3-4 pasos que elimina la percepción de complejidad
- Por qué nosotros: credenciales regulatorias, años de experiencia, patrimonio gestionado, número de clientes
- Gestión del riesgo: sección honesta sobre el riesgo que genere confianza, no miedo
- Testimonios: cómo redactar los testimonios de clientes para que sean creíbles y no parezcan inventados
- Preguntas frecuentes: las 8 preguntas que paralizar al cliente potencial antes de dar el paso

Todos los textos deben poder superar una revisión de compliance antes de publicarse.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Copywriting para servicios financieros que genera confianza y conversión dentro del marco regulatorio',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA para copywriting legal que comunica sin perder clientes',
                'description'       => 'Aprende a comunicar servicios legales de forma clara y persuasiva, transformando el lenguaje jurídico en textos que atraen clientes, generan confianza y explican el valor del servicio legal.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing legal y copywriting para despachos de abogados y profesionales jurídicos. El sector legal tiene el reto de comunicar de forma que genere confianza y transmita expertise sin resultar inaccesible o intimidatorio para el cliente potencial.

**Contexto del despacho o profesional:**
- Especialidad: [derecho laboral / mercantil / fiscal / penal / familia / inmobiliario / startups]
- Tipo de cliente: [personas físicas / PYME / grandes empresas / startups]
- Principal diferenciador frente a otros despachos: [especialización / precio / trato personalizado / experiencia en el sector]
- Canales de comunicación: [web / LinkedIn / newsletter / guias / anuncios]

**tarea 1: Web del despacho que genera leads cualificados**

Reescribe la página principal del despacho con enfoque de copywriting:

- Titular: no es "Abogados expertos en X". Es el beneficio que obtiene el cliente: "Protege tu empresa de [riesgo] con asesoría legal que actúa antes de que el problema aparezca"
- Quiénes somos: en lugar de la historia del fundador, describe el tipo de cliente que mejor sirves y el tipo de resultado que consiguen
- Servicios: cada servicio explicado en términos de para qué sirve y qué problema del cliente resuelve, no en jerga jurídica
- Por qué nosotros: prueba social específica (número de casos, años de experiencia, sectores, resultados representativos con autorización del cliente)
- CTA: primera consulta sin compromiso (explica qué ocurre en esa consulta para eliminar la incertidumbre)

**tarea 2: Contenido educativo que posiciona al abogado como referente**

Diseña la estrategia de contenido del despacho:

- 15 ideas de artículos de blog que responden las preguntas exactas que busca tu cliente ideal en Google
- Estructura del artículo legal ideal: cómo ser comprensible sin perder rigor jurídico
- Guia descargable de alto valor: "Los 7 errores legales que cometen las startups en sus primeros 3 años" (estructura completa con copy)
- Newsletter mensual: tema, estructura y tono para que los clientes actuales y prospectos la esperen
- Contenido de LinkedIn: 10 posts que demuestren expertise sin ser condescendiente con el no-abogado

**tarea 3: Comunicación con el cliente durante el proceso**

Muchos despachos pierden clientes por mala comunicación durante el caso, no por mala calidad técnica. Diseña los textos de:

- Email de bienvenida cuando firma un nuevo cliente: qué esperar del proceso, quién es su interlocutor, cómo comunicarse
- Actualización de estado del caso: cómo explicar un avance jurídico técnico en términos que el cliente entienda y valore
- Comunicación de buenas noticias: cómo maximizar el impacto positivo en la relación con el cliente
- Comunicación de malas noticias o contratiempos: cómo gestionar las expectativas sin perder la confianza
- Email de cierre del caso: resumen de lo conseguido + propuesta de relación continua

**tarea 4: Propuesta de servicios que justifica los honorarios**

Escribe una propuesta de servicios legales que justifique los honorarios desde el valor, no desde el esfuerzo:

- Resumen ejecutivo: el problema del cliente + lo que perderá si no actúa + tu solución
- Alcance del servicio: qué haces + qué no haces (gestión de expectativas clara)
- Metodología: el proceso paso a paso que genera confianza de que sabes lo que haces
- Inversión: los honorarios en el contexto del riesgo que mitigan o el valor que crean
- Diferenciadores: por qué este despacho y no otro que cobra menos
- Garantías de servicio: tiempos de respuesta, canal de comunicación, interlocutor asignado

**tarea 5: Gestión de la reputación online del despacho**

Diseña la estrategia de reputación digital:

- Cómo solicitar testimonios a clientes satisfechos en un sector donde la confidencialidad es clave
- Plantillas de respuesta a reseñas en Google sin revelar información del cliente
- Cómo gestionar una reseña negativa o injusta de un ex-cliente descontento
- Casos de éxito anonimizados: cómo contar los logros del despacho respetando la confidencialidad
- Cómo aparecer en medios como experto: press releases, colaboraciones con medios jurídicos, presencia en debates públicos

Todos los textos deben respetar el Código Deontológico de la Abogacía y las normas de publicidad de servicios profesionales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Copywriting y comunicación para despachos de abogados y profesionales jurídicos que atrae clientes y genera confianza',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para copywriting en soporte al cliente y comunicaciones de servicio',
                'description'       => 'Escribe respuestas de soporte, emails transaccionales y comunicaciones de servicio que no solo resuelven el problema sino que convierten cada interacción en una oportunidad de fidelización.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en comunicación de servicio al cliente y copywriting de soporte, convencido de que cada mensaje de soporte es una oportunidad de marketing y de fidelización. La forma en que una empresa se comunica cuando algo sale mal dice más sobre su cultura que cualquier campaña publicitaria.

**Contexto del equipo:**
- Tipo de negocio: [ecommerce / SaaS / marketplace / empresa de servicios / fintech]
- Volumen de tickets mensual: [número]
- Canales de soporte: [email / chat en vivo / redes sociales / teléfono]
- Principal causa de contacto: [retrasos en entrega / problemas técnicos / facturación / cancelaciones / dudas de uso]

**tarea 1: Respuestas de soporte que fidelizan**

Reescribe estas respuestas de soporte usando el principio de "resolver + sorprender":

Respuestas a reescribir: [pega aquí tus respuestas actuales de plantilla]

La respuesta ideal de soporte:
- Comienza reconociendo la emoción del cliente, no el problema técnico
- Confirma que has entendido exactamente el problema (sin copiar y pegar la queja)
- Da la solución de forma clara, sin ambigüedades y sin jerga técnica
- Anticipa la siguiente pregunta que el cliente se haría y la responde antes de que la haga
- Cierra con un toque humano que rompe la sensación de estar hablando con un robot
- Nunca dice "sentimos los inconvenientes causados" (cliché que destruye la autenticidad)

**tarea 2: Emails transaccionales que sorprenden al cliente**

Los emails transaccionales (confirmación de pedido, envío, devolución, factura) son los más leídos pero los más descuidados. Reescríbelos con copywriting:

- Confirmación de pedido: más allá de "hemos recibido tu pedido", genera expectación por lo que viene
- Email de envío: más allá del número de seguimiento, crea anticipación
- Email de entrega: celebra junto al cliente que ya lo tiene, invítalo a compartir la experiencia
- Email de devolución iniciada: empatía genuina + proceso claro + reafirmación de que el cliente siempre gana
- Factura/recibo: el documento más aburrido del mundo puede tener un toque de personalidad

Para cada email: versión corta (<100 palabras) + asunto optimizado para tasa de apertura.

**tarea 3: Comunicaciones de crisis y problemas sistémicos**

Cuando el problema afecta a muchos clientes a la vez (caída del servicio, retraso masivo, breach de datos), la comunicación es crítica:

- Email de notificación de incidencia activa: rapidez, honestidad sobre qué sabemos y qué no sabemos aún
- Actualización de estado: cómo comunicar avances sin crear falsas expectativas
- Email de resolución: qué pasó + cómo lo hemos arreglado + qué medidas tomamos para que no vuelva a ocurrir
- Compensación proactiva: cuándo ofrecerla y cómo comunicarla para que sea percibida como gesto genuino y no como parche

**tarea 4: FAQs y base de conocimiento que reduce el volumen de tickets**

El mejor soporte es el que no necesita ser contactado. Escribe:

- Estructura de la FAQ ideal: cómo organizar las preguntas por intención del usuario, no por categoría interna
- Redacción de respuestas de base de conocimiento: cómo ser completo sin ser aburrido
- Títulos de artículos de ayuda optimizados para búsqueda interna: "¿Cómo puedo...?" (la pregunta que escribe el usuario)
- Videos tutoriales: guion de los primeros 30 segundos que definen si el usuario sigue viendo o busca otro recurso
- Chatbot responses: cómo escribir respuestas de bot que no suenen a bot

**tarea 5: Programas de recuperación de clientes en riesgo de churn**

Identifica y recupera a los clientes que están a punto de irse:

- Señales de churn en la comunicación: qué tipo de contactos indican que un cliente está insatisfecho y en riesgo
- Email de check-in proactivo: contactar antes de que el cliente se vaya, cuando detectas señales de desenganche
- Oferta de recuperación: cómo comunicar una compensación o mejora de condiciones sin que parezca desesperación
- La última conversación: si el cliente se va de todas formas, cómo cerrar la relación de forma que deje la puerta abierta a volver

Incluye métricas de impacto para medir si el copywriting mejorado está cambiando resultados: CSAT, tasa de resolución en primer contacto, tasa de respuesta a emails transaccionales, reducción de churn post-incidencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Copywriting de respuestas de soporte, emails transaccionales y comunicaciones de servicio que fidelizan al cliente',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para copywriting como servicio freelance de alta demanda',
                'description'       => 'Construye un negocio freelance de copywriting próspero y escalable, desde la especialización en un nicho rentable hasta la captación de clientes de alto valor y la productización de tus servicios de escritura.',
                'prompt_content'    => <<<'EOT'
Eres un copywriter freelance senior con experiencia construyendo y escalando un negocio de copywriting de alto valor. Saber escribir bien no es suficiente para tener éxito como freelancer: necesitas posicionarte, captar clientes y gestionar tu negocio como un profesional. Necesito un plan completo para construir mi práctica de copywriting.

**Perfil del freelancer:**
- Especialidad de copywriting actual o deseada: [email marketing / landing pages / SEO content / publicidad / copywriting B2B / finanzas / salud / tecnología]
- Experiencia: [años y tipo de proyectos realizados]
- Ingresos actuales y objetivo en 12 meses: [cifras]
- Principal problema: [no tengo suficientes clientes / los clientes pagan poco / no sé cómo posicionarme / no puedo escalar]

**tarea 1: Especialización y posicionamiento del copywriter freelance**

El mayor error del copywriter freelance es ser generalista. Define tu nicho:

- Análisis de los sub-nichos de copywriting más rentables en España y Latinoamérica actualmente
- Cómo elegir un nicho usando la intersección de: qué sabes escribir bien + qué sectores pagan más + donde hay menos competencia
- Declaración de posicionamiento: "Escribo [tipo de copy] para [sector específico] que [resultado medible]"
- Tarifa objetivo para tu nicho: investigación de tarifas de mercado por tipo de proyecto
- Cómo transicionar de generalista a especialista sin perder clientes actuales

**tarea 2: Portfolio y muestras de escritura que consiguen clientes**

El portfolio del copywriter es su mayor herramienta de ventas:

- Estructura del portfolio ideal: qué mostrar y en qué orden (resultados primero, proceso después)
- Cómo crear muestras de escritura en tu nicho sin haber tenido clientes en ese sector aún
- Copy de la página del portfolio que cuenta tu historia y convierte visitantes en prospectos
- Propuesta de valor personal en una frase: diferente a todos los demás copywriters del mercado
- Cómo usar los resultados de tus copys (tasas de conversión, ventas generadas) como prueba social cuantificada

**tarea 3: Sistema de captación de clientes de alto valor**

Diseña el sistema de marketing para conseguir proyectos bien pagados:

- LinkedIn outreach: proceso de 5 pasos para conectar con directores de marketing de empresas en tu nicho
- Lead magnet gratuito: qué tipo de contenido de copywriting te posiciona ante los clientes correctos
- Estrategia de contenido de LinkedIn: 8 tipos de post que atraen clientes sin hacer spam
- Alianzas estratégicas: cómo convertirte en el copywriter recomendado por agencias de diseño, consultoras de marketing y desarrolladores web
- Plataformas de freelancing: cómo usar Malt, Upwork o similares para conseguir primeros clientes en el nicho sin depender de ellas siempre

**tarea 4: Productización del servicio de copywriting**

Escala tus ingresos sin multiplicar tus horas:

- Cómo crear paquetes de copywriting con alcance y precio fijo (en lugar de tarifa por hora)
- El "Copy Starter Pack" para nuevas empresas: qué incluye, cómo se entrega, precio de referencia
- Servicio de retainer mensual: qué ofrecer en un retainer de copywriting que el cliente renueve mes a mes
- Curso o taller de copywriting para equipos de marketing: cómo convertir tu expertise en formación vendible
- Plantillas y sistemas de copywriting propios: cómo licenciar o vender tus frameworks como producto digital

**tarea 5: Gestión del negocio freelance de copywriting**

Los aspectos de negocio que los copywriters suelen descuidar:

- Contrato tipo para proyectos de copywriting: cláusulas que te protegen (alcance, revisiones, derechos de uso, pago)
- Proceso de briefing: las 15 preguntas que debes hacer a cada cliente antes de empezar a escribir
- Gestión de revisiones sin perder rentabilidad: cuántas revisiones incluir y cómo gestionar las adicionales
- Pricing y negociación: cómo responder a "¿cuánto cobras?" sin perder el cliente ni el margen
- Automatización del negocio: qué herramientas usar para propuestas, contratos, facturación y gestión de proyectos

Entrega un plan de acción de 6 meses con hitos mensuales específicos y métricas de progreso para cada área del negocio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de un negocio freelance de copywriting especializado con clientes de alto valor y servicios productizados',
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
