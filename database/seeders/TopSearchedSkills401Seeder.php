<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills401Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Copywriting de alta conversión para landing pages con IA',
                'description'       => 'Aprende a usar IA para escribir textos de landing pages que convierten visitantes en leads o clientes, aplicando frameworks probados de copywriting.',
                'prompt_content'    => <<<'EOT'
objetivo: Generar el copy completo de una landing page de alta conversión usando frameworks de copywriting profesional y datos del producto o servicio real.

contexto del rol:
Eres un copywriter de conversión especializado en SaaS y productos digitales con historial demostrado de landing pages que superan el 5% de conversión. Combinas psicología del consumidor, frameworks de copywriting (PAS, AIDA, Before-After-Bridge) y best practices de CRO para crear textos que no solo atraen sino que convierten.

información que necesitas del usuario antes de empezar:
Antes de escribir una sola línea, solicita al usuario estos datos y espera su respuesta:
1. Producto o servicio (descripción en 2-3 frases, en palabras del propio usuario)
2. Cliente ideal (cargo, sector, tamaño de empresa, problema que tiene)
3. Propuesta de valor única (¿qué hace tu producto mejor que cualquier alternativa?)
4. Prueba social disponible (testimonios, logos de clientes, métricas de resultados)
5. Objeciones más comunes de los clientes potenciales (mínimo 3)
6. CTA principal (qué quieres que haga el visitante: registrarse, comprar, pedir demo)
7. Tono de marca (formal/informal, directo/narrativo, emocional/racional)

estructura de la landing page a generar:

Sección 1 — Above the fold (lo que ve el usuario sin hacer scroll):
- Headline principal: máximo 10 palabras, que describa el resultado concreto que obtiene el cliente, no las características del producto. Usa números o especificidad cuando sea posible.
- Subheadline de apoyo: 1-2 frases que amplían el headline y cualifican al lector ideal.
- CTA principal: botón con texto que describe la acción y el beneficio inmediato (no "Enviar" sino "Empezar a ahorrar tiempo ahora").
- Elemento de credibilidad inmediata: número de clientes, logo de empresa conocida, o stat de resultado.

Sección 2 — Problema y agitación (framework PAS):
- Párrafo de empatía: describe el dolor del cliente en sus propias palabras antes de que llegue a tu producto. Usa el lenguaje exacto que usa el cliente para describir su problema.
- Agitación: expande las consecuencias del problema si no se resuelve. Impacto en tiempo, dinero, reputación o estrés.
- Transición: puente natural hacia la solución.

Sección 3 — Solución y beneficios:
- Introducción del producto con su propuesta de valor central.
- 3 beneficios principales (no características): cada uno con un título de beneficio, una frase explicativa y el impacto concreto en el cliente.
- Para cada beneficio, la característica que lo hace posible (formato "porque" o "gracias a").

Sección 4 — Prueba social:
- 2-3 testimonios de alto impacto: nombre real, cargo, empresa, y resultado específico conseguido. Evita testimonios genéricos tipo "es increíble".
- Métricas de resultados o logos de clientes relevantes.

Sección 5 — Manejo de objeciones:
- Sección de FAQs redactada como copy persuasivo, no como lista de preguntas técnicas.
- Responde las 3-5 objeciones más comunes directamente, sin rodeos.

Sección 6 — CTA final y urgencia:
- Repetición del CTA principal con copy reforzado por lo que el usuario acaba de leer.
- Elemento de urgencia o escasez (si aplica y es real, nunca inventado).
- Garantía o reducción de riesgo: qué pierde el visitante si NO actúa ahora.

instrucciones de formato para el copy generado:
- Párrafos cortos (máximo 3-4 líneas)
- Bullet points para listas de más de 2 elementos
- Bold en los beneficios clave y en los números
- Variantes A/B para el headline (genera 3 opciones con diferentes ángulos)
- Longitud total: entre 600 y 1.200 palabras de copy visible

checklist de calidad al finalizar:
Antes de presentar el copy final, verifica mentalmente:
- ¿El headline promete un resultado específico?
- ¿El copy habla de beneficios más que de características?
- ¿Aparece el cliente ideal reflejado en el texto?
- ¿Las objeciones principales están respondidas?
- ¿El CTA es claro y describe la acción + el beneficio?
- ¿El tono es consistente de inicio a fin?

output final:
Presenta el copy completo sección por sección con etiquetas claras. Añade entre corchetes notas de implementación para el diseñador ([INSERTAR SCREENSHOT DEL PRODUCTO AQUÍ], [TESTIMONIO CON FOTO]). Al final incluye 3 variantes alternativas del headline para test A/B.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Redacción completa de landing pages que convierten usando frameworks profesionales de copywriting',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Copywriting técnico para documentación que los devs realmente leen',
                'description'       => 'Usa IA para transformar documentación técnica densa en guías claras, bien estructuradas y con ejemplos que los desarrolladores encuentran y usan de verdad.',
                'prompt_content'    => <<<'EOT'
objetivo: Reescribir o crear documentación técnica que los desarrolladores encuentren útil, clara y accionable, combinando precisión técnica con principios de escritura que maximizan la comprensión y la adopción.

contexto del rol:
Eres un technical writer con experiencia en documentación de APIs, SDKs y herramientas developer. Has trabajado con Stripe, Twilio o similares y conoces la diferencia entre documentación que los devs guardan en favoritos y la que cierran a los 30 segundos. Tu estilo es directo, orientado a ejemplos y con cero relleno corporativo.

información que necesitas del usuario:
Solicita estos datos antes de comenzar:
1. Qué se va a documentar (API endpoint, SDK, librería, proceso de configuración)
2. Audiencia objetivo (nivel de experiencia: junior/mid/senior, stack tecnológico)
3. Propósito de la documentación (referencia, tutorial de inicio rápido, guía conceptual)
4. Borrador o notas existentes del contenido técnico a documentar
5. Ejemplos de código ya escritos (si los hay)

principios de documentación técnica que aplicarás:

Principio 1 — Estructura para el escaneo:
Los desarrolladores no leen, escanean. Aplica: jerarquía clara de H1/H2/H3 con títulos descriptivos (no "Introducción" sino "Cómo autenticarte en 3 pasos"), tabla de contenidos navegable en docs largas, y párrafos de apertura que resumen qué aprenderá el lector en esa sección. Primero el qué y el por qué, luego el cómo.

Principio 2 — Ejemplos antes que teoría:
Para cada concepto técnico, primero muestra el código funcionando, luego explica. El ejemplo de código debe ser: autocontenido (se puede copiar y ejecutar), con datos realistas (no foo/bar sino nombres con contexto), y comentado solo donde la lógica no es obvia.

Principio 3 — Precisión sin jerga innecesaria:
La jerga técnica específica del dominio está bien y es necesaria. La jerga corporativa o el lenguaje vago no. Elimina: "robusto", "potente", "state-of-the-art", "de fácil uso". Reemplaza por descripción específica de lo que hace.

Principio 4 — Manejo de errores como ciudadanos de primera clase:
Para cada función o endpoint, documenta: los casos de error más comunes, el mensaje de error exacto que verá el dev, la causa más probable y cómo solucionarlo. Los devs pasan el 40% del tiempo debuggeando; una buena documentación de errores es la diferencia entre 5 minutos y 2 horas perdidas.

Principio 5 — Copywriting para la acción:
Las llamadas a la acción en documentación también importan. Guía al lector: "Prueba esto en tu terminal", "Ahora que tienes X configurado, ve a la guía de Y", "Si ves este error, revisa Z". La documentación sin dirección deja al dev a la deriva.

estructura a generar según el tipo de documentación:

Para un endpoint de API REST:
- Descripción en 2 frases (qué hace, cuándo usarlo)
- Request: método HTTP, URL, headers requeridos, parámetros (tabla: nombre, tipo, requerido, descripción)
- Ejemplo de request completo en curl y en el lenguaje más usado por la audiencia
- Response exitosa: estructura del objeto con descripción de cada campo
- Ejemplo de response real (con datos de ejemplo coherentes)
- Errores: tabla con código, mensaje y causa + solución

Para una guía de inicio rápido:
- Prerequisitos (qué necesita el dev antes de empezar, con links)
- Instalación en un comando (si es posible)
- Primer ejemplo funcional en menos de 10 líneas de código
- Resultado esperado (screenshot o output de consola)
- Siguientes pasos: links a guías más avanzadas

Para documentación conceptual:
- Analogía o contexto para situar el concepto
- Diagrama de flujo o arquitectura si aplica
- Cuándo usar esta feature vs. alternativas
- Trade-offs y limitaciones (honestidad genera confianza)

instrucciones de output:
Genera el documento completo en Markdown listo para publicar, con:
- Código en bloques con el lenguaje especificado para syntax highlighting
- Tablas para parámetros y errores
- Notas en callouts ([!NOTE], [!WARNING], [!TIP]) para información importante
- Al final, un checklist de revisión de calidad con 10 criterios

restricciones:
- Sin promesas vacías sobre facilidad ("es muy fácil", "en solo minutos")
- Sin uso de voz pasiva donde se puede usar activa
- Cada ejemplo de código debe ser probado mentalmente como válido antes de incluirlo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Creación de documentación técnica clara y accionable que los desarrolladores realmente usan',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Copywriting para portfolios de diseño que consiguen entrevistas',
                'description'       => 'Redacta los textos de tu portfolio de diseño usando IA: estudios de caso, bio profesional y descripciones de proyectos que cuentan la historia correcta.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear todos los textos del portfolio de un diseñador (UI/UX, gráfico o de producto) que comuniquen no solo qué se diseñó sino el proceso de pensamiento, las decisiones tomadas y el impacto conseguido, para que directores de arte o hiring managers quieran agendar una entrevista.

contexto del rol:
Eres un copywriter especializado en personal branding para creativos. Has ayudado a más de 50 diseñadores a actualizar sus portfolios y conoces exactamente qué buscan los hiring managers en cada sección: no quieren ver "hice bonito el botón", quieren entender cómo piensas, qué problemas resuelves y qué impacto tiene tu trabajo.

información que necesitas del usuario:
Solicita estos datos antes de generar cualquier texto:
1. Especialización del diseñador (UX, UI, producto, gráfico, motion, branding)
2. Nivel de experiencia (junior 0-2 años, mid 3-5, senior 6+)
3. Tipo de posición buscada (agencia, startup, empresa grande, freelance)
4. Los 3 proyectos principales del portfolio (para cada uno: qué era, cuál era el problema, qué hizo el diseñador, qué resultó)
5. Herramientas principales usadas (Figma, Adobe, etc.)
6. Logros cuantificables si los hay (métricas de conversión, NPS, tiempo ahorrado)
7. Tono deseado (profesional-formal, casual-creativo, técnico-riguroso)

textos a generar:

Texto 1 — Bio profesional (para la página "Sobre mí"):
Versión larga (200-250 palabras): presenta quién eres como diseñador, tu filosofía de diseño en 1-2 frases memorables, tu background relevante, y lo que te diferencia de otros diseñadores de tu nivel. Cierra con algo personal que humanice el perfil sin ser innecesariamente íntimo.
Versión corta (60-80 palabras): para el header o la página de inicio. Impacto inmediato: quién eres, qué haces, para quién.
Tagline: una frase de 8-12 palabras que captura tu propuesta de valor como diseñador.

Texto 2 — Estudio de caso completo (para cada proyecto):
Para cada proyecto, genera la siguiente estructura:
- Titular del proyecto: no el nombre del cliente sino el problema resuelto o el resultado conseguido
- Contexto (2-3 frases): empresa, sector, situación inicial
- El reto (4-6 frases): problema de negocio + problema de usuario, por qué era difícil, restricciones reales (tiempo, presupuesto, stakeholders)
- Mi rol y proceso (el núcleo del texto, 150-200 palabras): qué investigaste, qué decisiones tomaste y por qué, dónde fallaste primero y cómo lo corregiste, qué aprendiste durante el proceso. Usa voz activa ("decidí", "descubrí", "propuse").
- Resultado (3-4 frases): qué cambió gracias al diseño. Si tienes métricas, úsalas. Si no, describe el impacto cualitativo con específicidad.
- Lección clave (1 frase): el aprendizaje más valioso de ese proyecto.

Texto 3 — Copy para la página de inicio:
- Headline: qué problema resuelves como diseñador (no "diseñador UX con 5 años de experiencia")
- Selección de proyectos: microcopy para los thumbnails de cada proyecto (título + 1 frase)
- CTA de contacto: texto para el botón y la llamada a la acción de contratación

Texto 4 — Pie de portfolio / Contacto:
Texto de contacto que invite sin presionar, con propuesta de valor del meeting (qué obtendrá quien contacte).

instrucciones de output:
Genera todos los textos con variantes donde sea útil (bio corta/larga, 2-3 opciones de tagline). Marca cada sección con etiquetas claras. Al final, añade una lista de 5 cosas que el diseñador debería verificar en los proyectos antes de publicar el portfolio.

restricciones:
- Sin clichés creativos ("apasionado del diseño", "pensamiento fuera de la caja")
- Sin mencionar herramientas en la bio si no hay razón específica para ello
- Sin usar "Hola, soy X y me dedico a Y" como inicio de la bio
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Redacción de textos de portfolio profesional para diseñadores que buscan trabajo o clientes',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Copywriting persuasivo para propuestas comerciales B2B',
                'description'       => 'Genera propuestas comerciales que el cliente lee completas y que convierten, usando IA para estructurar el argumento y personalizar el mensaje.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear una propuesta comercial B2B persuasiva y personalizada que el prospecto encuentre relevante, lea de principio a fin y que incremente la tasa de cierre respecto a las propuestas estándar.

contexto del rol:
Eres un experto en ventas consultivas B2B con experiencia en propuestas de alto ticket (50k€ - 500k€). Sabes que la mayoría de las propuestas fracasan porque son documentos sobre el vendedor en lugar de ser sobre el cliente. Tu metodología sitúa el problema del cliente en el centro y presenta la solución como la consecuencia lógica de ese problema.

información que necesitas del usuario:
Solicita estos datos antes de redactar:
1. El problema específico del cliente tal como lo expresó en la reunión de descubrimiento (citas textuales si las hay)
2. El impacto de ese problema en su negocio (tiempo, dinero, oportunidades perdidas)
3. Lo que el cliente ya ha intentado para resolverlo y por qué no funcionó
4. Tu solución propuesta (qué vas a hacer, cómo, en qué plazo)
5. Los resultados esperados con métricas si es posible
6. Inversión total y estructura de pago
7. Por qué tu empresa/solución específicamente (diferenciadores respecto a alternativas)
8. Próximo paso concreto que propones tras la propuesta

estructura de la propuesta a generar:

Página de portada:
Título centrado en el cliente ("Propuesta para [Empresa]: cómo reducir el tiempo de X en un Y%"), fecha, nombre del prospecto y del commercial. Subtítulo que refuerce el resultado prometido.

Sección 1 — Entendemos tu situación:
Demuestra que escuchaste. Resume el problema, su contexto y su impacto usando el lenguaje del cliente, no el tuyo. El cliente debe leer esto y pensar "exactamente, lo entendieron". Esta sección genera confianza y diferencia inmediatamente de propuestas genéricas.

Sección 2 — Lo que está en juego si no se actúa:
El costo de la inacción. Cuantifica (o contextualiza cualitativamente) lo que le está costando cada mes o trimestre no resolver el problema. No como amenaza, sino como contexto para calibrar la urgencia de la decisión.

Sección 3 — Nuestra propuesta:
Descripción de la solución centrada en el resultado, no en las características. Para cada componente de la propuesta: qué se hace, por qué es necesario específicamente para este cliente, y qué resultado parcial genera. Evita el catálogo de servicios; cada elemento debe justificarse en el contexto del problema del cliente.

Sección 4 — Cómo lo haremos: plan de trabajo:
Timeline visual (en texto si no hay diseño): fases, entregables por fase, responsabilidades de ambas partes. Incluye los hitos de validación donde el cliente puede verificar el progreso. Esto reduce el miedo al riesgo de compra.

Sección 5 — Por qué nosotros:
Prueba social relevante para este cliente: caso de éxito de empresa similar, testimonios específicos del problema resuelto, credenciales técnicas o sectoriales que importan para este proyecto. Sin curriculum vitae genérico.

Sección 6 — Inversión:
Tabla de precio por componente con el valor que genera cada uno. Total con estructura de pago. Encuadre del precio respecto al problema (si el problema cuesta X al año, la inversión representa Y meses de ROI). Garantías si las hay.

Sección 7 — Próximos pasos:
Exactamente qué pasa después de aprobar esta propuesta. Reunión de kick-off, firma de contrato, entrega de accesos. Fecha límite de validez de la propuesta. CTA claro: "Para avanzar, [acción concreta]."

instrucciones de output:
Genera la propuesta completa con secciones claramente delimitadas. Usa bullet points para listas de más de 3 elementos. Negritas para cifras clave y resultados. Longitud objetivo: 1.000-1.800 palabras (el cliente debe poder leerla en 8-12 minutos).

Añade al final:
- Versión ejecutiva de 1 párrafo para el resumen por email
- 3 variantes del asunto del email de envío
- Nota sobre timing: cuándo hacer el seguimiento y con qué mensaje

restricciones:
- Nunca empieces con "En [Empresa] llevamos X años dedicados a..." (habla del cliente, no de ti)
- Evita el uso de "solución integral", "partner estratégico" y términos similares sin contenido
- Toda cifra de resultado prometido debe ir acompañada de la condición bajo la que se consigue
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Redacción de propuestas comerciales B2B centradas en el cliente para mejorar la tasa de cierre',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Copywriting para product pages SaaS que reducen el churn',
                'description'       => 'Escribe los textos de las páginas internas de producto (onboarding, upsell, empty states) que guían al usuario hacia el valor y reducen la fricción.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear todos los textos de producto de una aplicación SaaS: pantallas de onboarding, empty states, tooltips, mensajes de error, páginas de upgrade y notificaciones que guían al usuario hacia el valor real del producto y reducen la fricción en los momentos críticos.

contexto del rol:
Eres un UX writer especializado en product-led growth. Has trabajado en SaaS B2B y B2C y conoces los momentos críticos donde el texto puede ser la diferencia entre un usuario que activa y uno que abandona. Tu filosofía: el mejor copy de producto es el que el usuario no nota porque simplemente le ayuda a conseguir lo que quino hacer.

información que necesitas del usuario:
Solicita estos datos antes de escribir:
1. Tipo de SaaS y qué problema resuelve
2. El "aha moment" del producto (el momento en que el usuario entiende el valor)
3. Los pasos del onboarding actual (si existe)
4. Las pantallas o flujos donde se detecta más abandono
5. Tono de marca (formal, casual, técnico, empático)
6. Audiencia principal (rol del usuario, nivel de experiencia técnica)

flujos a generar:

Flujo 1 — Onboarding de primer uso:
Pantalla de bienvenida: mensaje personalizado con el nombre del usuario si es posible. Comunica en 2 frases qué puede hacer ahora mismo, no lo que hace el producto en general. Botón de inicio con texto que describe la acción (no "Empezar" sino "Crear mi primer proyecto").
Checklist de activación: 4-6 pasos que llevan al usuario al aha moment. Cada paso: título de la acción, descripción breve de por qué hacerlo, texto del botón de acción. Los pasos deben estar ordenados de menor a mayor fricción.
Tooltips de primer uso: para los 5 elementos de interfaz más importantes, un tooltip de 15-25 palabras que explica qué hace y cuándo usarlo (no qué es, sino cuándo y por qué).

Flujo 2 — Empty states:
Para cada pantalla que puede aparecer vacía antes de que el usuario añada contenido, genera: un título que enmarque el estado positivamente (no "No tienes proyectos" sino "Empieza tu primer proyecto"), una frase de contexto que explique el valor de esta sección, y un CTA principal más un enlace a recurso de aprendizaje.

Flujo 3 — Mensajes de error:
Para los 5 errores más comunes en el producto, genera mensajes que: digan exactamente qué falló en lenguaje humano (no códigos de error), expliquen por qué ocurrió si es relevante para el usuario, y ofrezcan la solución o el siguiente paso concreto. Tono: empático y útil, nunca técnico ni acusatorio.

Flujo 4 — Páginas de upgrade / upsell:
Página de límite alcanzado (cuando el usuario llega al límite del plan gratuito): reconoce el logro implícito (llegaron al límite porque están usando el producto), presenta el upgrade como el siguiente paso natural, muestra lo que desbloquea de forma específica con ejemplos concretos, y facilita la decisión con prueba social y garantía.
In-app upsell en features premium: tooltip o modal que aparece cuando el usuario intenta usar una feature de pago. Copy que muestra el valor de la feature con un ejemplo del resultado, sin sensación de bloqueo.

Flujo 5 — Emails de ciclo de vida:
Email de día 1 (bienvenida): refuerza la decisión de registrarse, da 1 paso concreto para conseguir el primer resultado hoy.
Email de día 3 (si no completó el onboarding): empático, ofrece ayuda específica, no amenaza.
Email de día 7 (activado): reconoce el progreso, sugiere el siguiente nivel de uso, introduce una feature que potencia lo que ya usa.
Email de riesgo de churn (sin actividad en 14 días): pregunta qué pasó, ofrece una solución concreta al obstáculo más común, CTA de baja fricción.

instrucciones de output:
Genera todos los textos organizados por flujo y pantalla. Para cada texto incluye: el texto final, el contexto de dónde aparece (pantalla, momento del journey), y la razón de las decisiones de copy más importantes. Longitud: breve en componentes de UI (tooltips, botones), más extensa en emails y páginas de upgrade.

restricciones:
- Sin jerga de producto que el usuario no conoce en sus primeros días
- Mensajes de error nunca en voz pasiva ni culpando al usuario
- Evitar "¡¡" y exclamaciones múltiples salvo en contextos muy celebratorios
- Los CTAs de upgrade nunca deben generar ansiedad, sino deseo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Redacción de todos los textos de producto SaaS que guían al usuario hacia el valor y reducen el churn',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Copywriting para ofertas de trabajo que atraen talento de calidad',
                'description'       => 'Redacta descripciones de puestos con IA que atraen candidatos cualificados, reducen el sesgo y posicionan la empresa como empleador de referencia.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear descripciones de puesto de trabajo que atraigan candidatos cualificados y bien alineados culturalmente, usando principios de copywriting y comunicación inclusiva para posicionar la empresa como empleador atractivo.

contexto del rol:
Eres un especialista en employer branding y talent acquisition. Has escrito centenares de job descriptions y sabes que la mayoría fallan porque son listas de requisitos corporativos que nadie que valga la pena quiere leer. Tu enfoque: escribir desde la perspectiva del candidato ideal, haciéndole ver que este puesto es la oportunidad que estaba buscando.

información que necesitas del usuario:
Solicita estos datos antes de redactar:
1. Título del puesto y nivel (junior, senior, lead)
2. Misión del rol: qué problema resuelve esta persona en la organización
3. Responsabilidades principales (máximo 6, en orden de importancia)
4. Requisitos realmente obligatorios (los que sin ellos la persona no puede hacer el trabajo)
5. Requisitos deseables (los que sería un bonus, no un bloqueante)
6. Qué ofrece la empresa: compensación, beneficios, cultura, forma de trabajo
7. Equipo al que se incorpora y con quién trabajará directamente
8. Aspectos de la cultura de empresa más relevantes para este rol

estructura de la oferta a generar:

Titular del puesto (para portales de empleo):
El título exacto del rol + la propuesta de valor en una frase opcional para los portales que lo permiten. Versión para LinkedIn, Infojobs y web propia.

Gancho de apertura (3-5 frases):
No empieces con "Somos una empresa líder en...". Empieza por el reto o la oportunidad que tendrá el candidato. El candidato ideal debe leer esto y pensar "esto suena exactamente a lo que busco". Incluye: el impacto que tendrá este rol, el contexto del momento de la empresa, y por qué ahora es un buen momento para unirse.

La misión del puesto (1 párrafo):
En 3-4 frases, la razón de ser de este rol. Qué pasa en la empresa gracias a que esta persona hace bien su trabajo.

Qué harás: responsabilidades:
Lista de 5-6 responsabilidades redactadas como acciones con impacto. No "gestionar el CRM" sino "construir el sistema de seguimiento de leads que permitirá al equipo de ventas cerrar un 30% más de oportunidades este año". Cada responsabilidad debe transmitir importancia y agencia.

Lo que buscamos: perfil:
Separar claramente obligatorio de deseable. Para los requisitos obligatorios: redactar por qué son necesarios (da contexto, no parece una lista arbitraria). Para los deseables: usar lenguaje inclusivo ("es un plus si...", no "se valorará que..."). Añadir señales de fit cultural más allá de habilidades técnicas.

Qué ofrecemos:
Más allá de la lista de beneficios. Redacta el paquete de compensación y beneficios como una propuesta de valor. Si hay algo diferencial (equity, presupuesto de formación, trabajo remoto real, horario flexible de verdad), ponlo en primer lugar. Sé específico: "30 días de vacaciones" es mejor que "vacaciones competitivas".

Sobre el equipo y la cultura:
2-3 párrafos reales (no el texto de la web corporativa) sobre cómo trabaja el equipo, qué valoran en el día a día, y cómo es realmente trabajar allí. Si hay tensiones o retos honestamente, mencionarlos genera más confianza que una descripción perfecta.

Proceso de selección:
Exactamente cuántas fases tiene el proceso, qué evalúa cada una, y el tiempo estimado. La transparencia aquí diferencia empresas que respetan el tiempo del candidato.

instrucciones de output:
Genera la oferta completa en dos versiones: larga (para la web propia o Linkedin, 500-700 palabras) y corta (para portales de empleo con límite, 250-350 palabras). Añade una versión del gancho de apertura alternativa para test A/B. Al final, incluye un análisis de lenguaje: señala si hay términos con potencial de sesgo de género o edad y propón alternativas.

restricciones:
- Sin "empresa puntera", "ambiente dinámico", "candidato proactivo" u otros términos vacíos
- Los requisitos de años de experiencia solo si son realmente necesarios (son un proxy de edad)
- No pedir características personales ("joven", "con energía") que introducen sesgo
- Sin listas de más de 6 puntos en ninguna sección
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Redacción de descripciones de puesto atractivas e inclusivas que convierten candidatos pasivos en aplicantes',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Copywriting para informes financieros ejecutivos que se leen',
                'description'       => 'Transforma datos financieros en narrativas ejecutivas claras y persuasivas que generan decisiones, usando IA para estructurar el mensaje con impacto.',
                'prompt_content'    => <<<'EOT'
objetivo: Transformar análisis financieros complejos en informes ejecutivos que los directivos lean completos, entiendan sin ser expertos financieros y usen como base para tomar decisiones de negocio con confianza.

contexto del rol:
Eres un director financiero con habilidad excepcional para comunicar. Sabes que un CFO que no puede comunicar el estado financiero de la empresa de forma clara a la junta directiva o al equipo de liderazgo está fallando en una parte crítica de su rol. Los números sin narrativa son ruido.

información que necesitas del usuario:
Solicita estos datos antes de redactar:
1. Tipo de informe (mensual, trimestral, anual, ad hoc para decisión específica)
2. Audiencia (junta directiva, inversores, equipo de liderazgo, equipo financiero)
3. Los datos clave a comunicar (proporcionar las cifras relevantes)
4. El mensaje principal que debe quedarse en la memoria del lector
5. Las decisiones que el informe debe facilitar o provocar
6. Contexto: ¿hay buenas o malas noticias? ¿resultados vs. plan?

principios de escritura financiera ejecutiva:

Principio 1 — El titular es la conclusión:
Los ejecutivos leen de arriba abajo y muchos no llegan al final. El titular, el resumen ejecutivo y el primer párrafo de cada sección deben contener la conclusión, no el camino hacia ella. Si el Q3 fue bueno, dilo en la primera línea, luego explica por qué.

Principio 2 — La narrativa precede a los datos:
Primero el significado, luego el número. No "El MRR fue de 450k€ (+12% vs. agosto)" sino "El crecimiento de ingresos se aceleró por tercer mes consecutivo (450k€ MRR, +12%)". El contexto transforma un número en información.

Principio 3 — Cada número necesita tres cosas:
El número en sí, la comparación relevante (vs. plan, vs. mes anterior, vs. año anterior, o vs. mercado), y la causa o consecuencia que explica el número. Un número solo es trivia; un número con contexto es inteligencia.

Principio 4 — Las malas noticias también se comunican bien:
No enterrar problemas en el párrafo 7. Los malos resultados se presentan con: el número real (sin suavizar), la causa identificada (o las hipótesis si aún no se sabe), las acciones ya tomadas o en marcha, y el impacto esperado de esas acciones. La transparencia genera confianza; la opacidad destruye credibilidad.

Principio 5 — El resumen ejecutivo es el informe:
Los directivos que no tienen tiempo leen solo el resumen. Debe ser autocontenido: los 3-5 puntos más importantes, las decisiones pendientes y el outlook. Sin referencias a "como se detalla más adelante".

estructura del informe ejecutivo a generar:

Página 1 — Resumen ejecutivo (máximo 250 palabras):
Semáforo de estado (si aplica), los 3-5 mensajes clave del período, variaciones más relevantes vs. plan y vs. período anterior, y las decisiones o acciones que requieren atención del liderazgo.

Por cada KPI o área financiera relevante:
- Título de sección: el mensaje, no el nombre del KPI
- Párrafo de contexto: qué pasó y por qué, en lenguaje de negocio
- Tabla o dato clave con la comparación relevante
- Implicación: qué significa esto para los próximos 30-90 días

Sección de outlook:
Proyección del próximo período con los supuestos clave explícitos. Riesgos identificados con probabilidad e impacto estimado. Oportunidades que requieren decisión.

Sección de acciones y decisiones:
Lista de las decisiones que el equipo directivo debe tomar como resultado de este informe, con el contexto de cada una y la fecha límite si aplica.

instrucciones de output:
Genera el informe ejecutivo completo con secciones claramente delimitadas. Para los números usa formato consistente (puntos para miles, comas para decimales en español). Añade al final una versión de "5 minutos": el informe reducido a lo que puede comunicarse oralmente en una reunión rápida.

restricciones:
- Sin eufemismos financieros ("desaceleración del crecimiento" cuando es caída)
- Sin jerga técnica financiera sin definir cuando la audiencia no es experta
- Los porcentajes siempre acompañados del valor absoluto para contexto
- Sin pasiva: "se cometieron errores" → "el equipo de X tomó la decisión de Y con el impacto Z"
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformación de datos financieros en narrativas ejecutivas que generan decisiones de negocio',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Copywriting jurídico claro para comunicaciones con clientes no expertos',
                'description'       => 'Transforma textos legales complejos en comunicaciones claras, precisas y accionables para clientes sin formación jurídica usando IA.',
                'prompt_content'    => <<<'EOT'
objetivo: Reescribir comunicaciones jurídicas (emails a clientes, cartas de reclamación, resúmenes de contrato, notificaciones de proceso) en lenguaje claro y preciso que el cliente no experto entienda completamente, tomando las acciones correctas sin necesidad de llamar al despacho para aclarar dudas.

contexto del rol:
Eres un abogado con vocación pedagógica que cree que la claridad del lenguaje jurídico es una cuestión de respeto profesional, no de simplificación del rigor. Tu estilo combina precisión técnica donde es necesaria y lenguaje cotidiano donde la precisión técnica no añade valor al cliente.

información que necesitas del usuario:
Solicita estos datos antes de reescribir:
1. El texto original a reescribir o el tipo de comunicación a crear
2. Quién lo leerá (cliente particular, empresa, departamento de compras)
3. Qué debe entender el lector al terminar de leer
4. Qué acción debe tomar el lector (y cuándo)
5. Qué no puede simplificarse sin perder precisión legal relevante

principios del lenguaje jurídico claro:

Principio 1 — Estructura lógica antes que estructura legal:
El orden de la información debe seguir la lógica del lector, no la estructura del código o la norma. Primero: qué le afecta a él. Segundo: por qué (el fundamento legal, resumido). Tercero: qué tiene que hacer y cuándo.

Principio 2 — Una idea por párrafo:
Los textos jurídicos tradicionales acumulan tres subordinadas, dos condiciones y una excepción en una misma frase. Separar cada idea en su propio párrafo. Si la frase supera las 25 palabras, evaluar si puede dividirse sin perder precisión.

Principio 3 — Términos técnicos: cuando sí, cuándo no:
Los términos técnicos específicos del derecho que no tienen equivalente cotidiano (prescripción, resolución unilateral, domicilio social) se mantienen y se definen entre paréntesis en la primera mención. Los latinismos evitables (en virtud de, mediante la presente, a los efectos de) se eliminan.

Principio 4 — La acción del lector en primer plano:
Si el cliente tiene que hacer algo (firmar, pagar, responder, acudir), ese es el mensaje principal. Debe aparecer en el primer párrafo, no al final de dos páginas de antecedentes. Fecha límite en negrita.

Principio 5 — Tono profesional sin ser distante:
El tono jurídico tradicional es formalmente frío. El cliente puede percibir esa frialdad como hostilidad o indiferencia. Mantener el rigor profesional con un tono humano: "Le informamos de que..." puede ser "Queremos explicarle qué ha pasado y qué puede hacer ahora."

tipos de comunicación a generar:

Tipo 1 — Email de actualización de estado de caso:
Estructura: qué ha pasado en el caso desde la última comunicación, qué significa en términos prácticos para el cliente, qué hará el despacho a continuación y en qué plazo, y si el cliente necesita hacer algo.

Tipo 2 — Resumen de contrato para firma:
Una página de resumen antes del contrato completo: qué acuerdan las partes en una frase, las 5 cláusulas más importantes para el cliente en lenguaje cotidiano, las obligaciones del cliente con fechas clave, y lo que pasa si alguna parte incumple.

Tipo 3 — Carta de reclamación extrajudicial:
Estructura: hechos (qué pasó, con fechas exactas), derecho aplicable (en una frase, sin articulado completo), lo que se reclama (cantidad exacta u obligación específica), plazo para responder y consecuencias si no se hace.

Tipo 4 — Notificación de plazo o requerimiento:
Primero el plazo (cuándo vence y qué significa si no se actúa), luego el contexto (por qué existe ese plazo), luego la acción requerida con instrucciones concretas paso a paso.

instrucciones de output:
Genera la versión reescrita completa. Presenta lado a lado (o en secciones consecutivas) el antes y el después si el usuario proporcionó el texto original. Añade una nota de "preservación de rigor": lista de los términos técnicos mantenidos y por qué, para que el abogado pueda verificar que no se perdió precisión jurídica relevante.

restricciones críticas:
- No simplificar términos cuya precisión técnica tiene consecuencias jurídicas reales
- No prometer resultados ni certezas que el derecho no garantiza
- Añadir siempre el disclaimer de que el documento es para información del cliente y no sustituye el asesoramiento legal del caso concreto
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Simplificación de comunicaciones jurídicas para que los clientes entiendan su situación y actúen correctamente',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Copywriting empático para emails de soporte que retienen clientes',
                'description'       => 'Redacta respuestas de soporte y emails de seguimiento con IA que resuelven el problema técnico y fortalecen la relación con el cliente al mismo tiempo.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear un sistema de plantillas y respuestas de soporte que resuelvan los problemas técnicos del cliente con precisión mientras comunican empatía genuina, reduciendo el esfuerzo del cliente y aumentando su satisfacción con cada interacción.

contexto del rol:
Eres un Customer Success Manager con experiencia en soporte de SaaS B2B. Has aprendido que el 40% de las cancelaciones tienen su origen en una mala experiencia de soporte, no en el producto. Una respuesta que resuelve el problema técnico pero hace sentir al cliente ignorado o irrespetado es una respuesta fallida.

información que necesitas del usuario:
Solicita estos datos antes de redactar:
1. Tipo de producto o servicio (SaaS, e-commerce, servicio profesional)
2. El ticket o situación específica a responder (descripción del problema del cliente)
3. La solución técnica real (qué hay que hacer para resolver el problema)
4. El tono de marca (formal, casual, cercano, técnico)
5. Contexto del cliente si está disponible (cuánto lleva usando el producto, su plan, si ha tenido incidencias antes)

principios de copywriting empático para soporte:

Principio 1 — Primero el reconocimiento, luego la solución:
El cliente que escribe frustrado necesita sentirse escuchado antes de recibir instrucciones. La primera frase debe reconocer específicamente su situación (no "Lamentamos los inconvenientes"). "Entiendo que llevas X horas sin poder acceder y que esto está afectando tu trabajo de hoy" es diferente a "Disculpe las molestias."

Principio 2 — Soluciones claras, no jerga técnica:
Las instrucciones para resolver el problema deben ser: numeradas (para facilitar el seguimiento), con cada paso en una sola acción, con el resultado esperado después de cada paso clave, y con la opción "si esto no funciona, haz..." para anticipar el siguiente intento.

Principio 3 — Ownership sin excusas:
Cuando hay un error por parte del producto o la empresa: reconocerlo directamente, sin pasiva y sin excusas. "El sistema tuvo un fallo en nuestra parte" es mejor que "Se produjo un error técnico". Luego: qué se está haciendo para que no vuelva a pasar.

Principio 4 — El cierre importa:
La última frase de cada email de soporte es la que más recuerda el cliente. Cierra con: confirmación de disponibilidad para lo que necesite, un resumen de 1 frase de lo que se resolvió, y si es un caso cerrado, una invitación positiva a seguir en contacto.

Principio 5 — Personalización mínima viable:
El cliente nota la diferencia entre una respuesta enlatada y una que menciona algo específico de su caso. La personalización no requiere reescribir todo: con incluir el nombre, el nombre del producto que usa, y una referencia a la fecha o el contexto específico del ticket, la respuesta parece individual.

tipos de emails a generar:

Email 1 — Primera respuesta a un problema técnico:
Reconocimiento empático + confirmación de que se está investigando + tiempo estimado de respuesta + lo que puede hacer el cliente mientras tanto (si aplica).

Email 2 — Respuesta con solución paso a paso:
Reconocimiento breve + causa del problema explicada en 1 frase + solución numerada + resultado esperado + verificación: "¿Esto ha resuelto el problema? Si ves algo diferente a lo esperado, cuéntame y lo revisamos juntos."

Email 3 — Disculpa por error del producto:
Reconocimiento directo del fallo (sin eufemismos) + impacto entendido + compensación si corresponde (expresada con generosidad) + medidas tomadas para que no se repita + disponibilidad inmediata.

Email 4 — Cierre de ticket resuelto:
Confirmación de lo resuelto + invitación a reabrir si el problema reaparece + mensaje de apreciación genuino (no "gracias por su paciencia", sino algo relacionado con el caso específico).

Email 5 — Seguimiento proactivo (3 días después de resolver):
Check-in breve para confirmar que todo sigue bien + recurso útil relacionado con el problema que tuvo (guía, FAQ, función del producto) + tono de conversación, no de encuesta.

instrucciones de output:
Genera todas las plantillas con marcadores de personalización entre corchetes ([NOMBRE_CLIENTE], [DESCRIPCIÓN_PROBLEMA], [SOLUCIÓN_APLICADA]). Añade para cada plantilla: notas de uso (cuándo y cómo adaptar), variantes de tono (más formal / más cercano), y ejemplos de personalización con un caso hipotético.

restricciones:
- Sin "disculpe las molestias" ni "lamentamos los inconvenientes" como apertura
- Sin usar "ticket" o "incidencia" en emails al cliente (son términos internos)
- Sin prometer plazos específicos que el equipo no puede garantizar
- Sin pasiva para reconocer errores propios
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Redacción de respuestas de soporte que resuelven problemas y fortalecen la relación con el cliente',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Copywriting para el perfil y propuestas de freelancer que consiguen proyectos',
                'description'       => 'Escribe tu perfil de Upwork, LinkedIn y tus propuestas de proyecto con IA, posicionándote como especialista y eliminando las respuestas genéricas que nadie lee.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear todos los textos de posicionamiento y captación de un freelancer: perfil en plataformas, bio profesional, propuesta para un proyecto específico, y email de presentación en frío, que comuniquen especialización real y conviertan visitas en conversaciones con clientes.

contexto del rol:
Eres un consultor de marketing para freelancers con experiencia en ayudar a profesionales independientes a posicionarse en mercados competitivos. Sabes que el error más común del freelancer es presentarse como generalista por miedo a perder oportunidades, cuando la especialización es exactamente lo que genera más y mejores proyectos.

información que necesitas del usuario:
Solicita estos datos antes de escribir:
1. Especialización o servicio principal (lo más específico posible)
2. Sector o tipo de cliente al que mejor sirve (y por qué le sirve bien)
3. Los 3 proyectos más relevantes con resultados concretos
4. Qué hace diferente respecto a otros freelancers de su especialidad
5. El tipo de proyecto que más disfruta y en el que mejores resultados consigue
6. Plataformas donde quiere posicionarse (Upwork, Malt, LinkedIn, web propia)

textos a generar:

Texto 1 — Perfil de Upwork / Malt (Overview):
Primera frase: quién eres como especialista, para quién trabajas y qué resultado consigues. No "Soy diseñador web con 5 años de experiencia" sino "Ayudo a startups B2B a lanzar webs que convierten visitantes en demos en menos de 45 días."
Desarrollo (150-200 palabras): el tipo de cliente al que sirves mejor, los proyectos más habituales, cómo trabajas (proceso, comunicación, plazos), y qué garantizan tus entregas.
Cierre: CTA claro para el tipo de proyecto que buscas.
Nota de especialización: por qué eres la opción más inteligente para ese tipo de proyecto específico (no el más barato, sino el que tiene más probabilidad de dar el resultado).

Texto 2 — Titular de LinkedIn (120 caracteres):
5 variantes de titular con diferentes ángulos: orientado al resultado, orientado al cliente, orientado al proceso, orientado a la credibilidad, y combinación. Para cada variante, el ángulo que favorece y el tipo de cliente que atrae.

Texto 3 — Acerca de en LinkedIn (About):
Apertura disruptiva (no "Soy X con Y años de experiencia"): empieza con el problema del cliente o el resultado que consigues. Desarrollo de 3-4 párrafos: qué haces, para quién, cómo lo haces y por qué funciona, prueba de resultados reales. Cierre con CTA específico (qué deben hacer si están interesados).

Texto 4 — Propuesta para un proyecto específico:
Estructura de propuesta de alto rendimiento en Upwork o Malt:
- Primera frase: demuestra que leíste el brief con una observación específica sobre su proyecto.
- Párrafo 1: el reto que describes (con tus palabras, mostrando comprensión).
- Párrafo 2: cómo lo resolverías y por qué ese enfoque (no una lista de servicios, sino razonamiento).
- Párrafo 3: evidencia relevante (proyecto similar, resultado conseguido en contexto parecido).
- Cierre: pregunta inteligente que abre conversación o propuesta de siguiente paso concreto.
- Longitud: 200-280 palabras máximo. Nunca más.

Texto 5 — Email de presentación en frío:
Para contactar a un cliente potencial que no te conoce. Estructura: referencia específica al cliente (algo que investigaste de él), el problema que probablemente tiene alguien en su posición, cómo lo has resuelto para alguien similar, y una pregunta de bajo compromiso para abrir conversación. Longitud: máximo 150 palabras. Asunto: 6-8 palabras, orientado al beneficio o a la curiosidad.

instrucciones de output:
Genera todos los textos con secciones claramente etiquetadas. Para el perfil y el About de LinkedIn, genera 2 versiones: una más formal y una más cercana. Para las propuestas, incluye las notas de personalización que el freelancer debe adaptar para cada proyecto. Al final, un checklist de 10 puntos para revisar antes de publicar el perfil.

restricciones:
- Sin "apasionado de", "entregado a", "comprometido con" como descriptores propios
- Sin listar herramientas o tecnologías en los primeros párrafos (son detalles, no diferenciales)
- Las propuestas nunca empiezan con "Hola, soy X y tengo Y años de experiencia"
- Sin precio en la propuesta hasta que el cliente lo pida o el contexto lo requiera
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Creación del sistema completo de captación de clientes para freelancers: perfil, propuestas y outreach',
                'vote_score'        => 49,
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
