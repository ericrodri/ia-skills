<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills155Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Account-Based Marketing (ABM)',
                'description'       => 'Concentra el presupuesto en las cuentas que importan: ICP, señales de intención, coordinación con ventas y las métricas que demuestran el ROI del ABM.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en Account-Based Marketing con experiencia en programas ABM para empresas B2B de tecnología y servicios profesionales. Voy a compartirte información sobre mi empresa y mi objetivo de crecimiento, y necesito que me ayudes a diseñar una estrategia ABM que concentre el presupuesto en las cuentas de mayor potencial y demuestre ROI medible.

**Contexto que debes pedirme si no lo proporciono:**
- Sector y tamaño de tu empresa
- Ticket medio y ciclo de venta típico
- Número de cuentas objetivo potenciales y cuentas ya en pipeline
- Recursos de marketing disponibles: presupuesto, equipo, herramientas (6sense, Demandbase, LinkedIn, HubSpot)
- Relación actual entre marketing y ventas: alineada, en tensión, inexistente

**Parte 1 — Definición del Ideal Customer Profile (ICP)**

El ABM empieza y termina con la calidad del ICP. Sin un ICP preciso, el programa ABM es simplemente un programa de marketing caro dirigido a las cuentas equivocadas:
- Cómo analizar la cartera de clientes existente para identificar los patrones de los clientes con mayor LTV, menor churn y mayor velocidad de expansión
- Las variables firmográficas que predican el éxito: sector, tamaño, tecnologías usadas, estructura organizativa, presencia geográfica
- Las variables situacionales que predicen el momento de compra: crecimiento de plantilla en roles específicos, financiación reciente, cambio de liderazgo, lanzamientos de producto, expansión geográfica
- Cómo combinar datos firmográficos y señales de intención para construir una puntuación de fit de cuenta

Define el ICP para mi caso de uso en formato concreto: sector, tamaño en empleados y facturación, señales de intención clave y los roles que deben estar presentes en la cuenta.

**Parte 2 — Selección y priorización de cuentas**

El presupuesto de ABM siempre es limitado; la selección de cuentas determina el ROI del programa:
- Metodología de selección: cómo combinar el ICP score con el potencial de revenue y la probabilidad de éxito
- Segmentación de cuentas ABM en tiers: Tier 1 (one-to-one, máxima personalización, 10-20 cuentas), Tier 2 (one-to-few, personalización por segmento, 50-100 cuentas), Tier 3 (one-to-many, personalización por sector, 200+ cuentas)
- Las fuentes de datos para construir la lista: datos propios de CRM, datos de terceros (ZoomInfo, Apollo), señales de intención (G2, Bombora, búsquedas de LinkedIn)
- Cómo mantener la lista actualizada: criterios de entrada y salida de cuentas, frecuencia de revisión, quién tiene autoridad para modificar la lista

**Parte 3 — Estrategia de contenido y campañas por cuenta**

En ABM, el contenido personalizado no es un nice-to-have; es la diferencia entre ser ignorado y abrir conversaciones:
- Cómo investigar cada cuenta Tier 1 antes de crear el contenido: pila tecnológica, iniciativas estratégicas declaradas, problemas mencionados en prensa o LinkedIn, competidores que ya usan soluciones similares
- Formatos de contenido personalizado con mejor ROI por tier: microsites de cuenta (Tier 1), landing pages de sector con datos del cliente inyectados (Tier 2), contenido de sector de alta calidad (Tier 3)
- Cómo personalizar los anuncios de LinkedIn y display para que cada ejecutivo de la cuenta objetivo vea mensajes relevantes a su rol y a los retos de su empresa
- El error más común del ABM: personalizar el formato pero no el mensaje. Cómo asegurarse de que el mensaje resuena con el pain específico de cada cuenta

**Parte 4 — Coordinación entre marketing y ventas**

El ABM sin alineación con ventas es marketing caro sin impacto:
- El service level agreement (SLA) entre marketing y ventas para ABM: qué hace marketing, qué hace ventas, cuándo se pasa el testigo y cómo se mantiene la coordinación en cuentas activas
- El playbook de SDR/BDR para cuentas ABM: cómo aprovechar los activos de marketing en la outreach, qué señales de engagement de marketing deben disparar la acción de ventas
- Las reuniones de sincronización ABM: frecuencia, agenda, quién asiste y cómo se usan para ajustar el programa en tiempo real
- Cómo evitar que ventas ignore las cuentas ABM: los incentivos, las herramientas y los procesos que hacen que los AEs quieran trabajar las cuentas ABM

**Parte 5 — Métricas y demostración de ROI**

El ABM tiene un problema de atribución que debes resolver antes de lanzar el programa:
- Las métricas que importan en cada fase: cobertura (¿cuántos roles de la cuenta estamos alcanzando?), engagement (¿qué señales de interés estamos generando?), pipeline (¿cuántas cuentas objetivo han entrado en pipeline?), revenue (¿cuántas cuentas ABM han cerrado y a qué valor?)
- Cómo medir el impacto del ABM en la velocidad del ciclo de venta y en el tamaño del deal para las cuentas tratadas vs. no tratadas
- El dashboard de ABM que debo presentar a dirección mensualmente
- Cómo calcular el ROI del programa ABM y cuál es el benchmark razonable para el primer año

Termina con el plan de lanzamiento del programa ABM en doce semanas, desde la definición del ICP hasta los primeros resultados de pipeline.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar programa ABM con ICP, selección de cuentas, contenido personalizado y métricas de ROI',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'APIs y ecosistemas para developers',
                'description'       => 'Diseña APIs que otros developers quieran usar: developer experience, documentación, SDKs y la estrategia que convierte tu API en un canal de distribución.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en developer experience (DX) y diseño de APIs con experiencia en plataformas que han construido ecosistemas de desarrolladores exitosos. Voy a compartirte información sobre mi producto y mis objetivos, y necesito que me ayudes a diseñar una API y una estrategia de ecosistema que convierta a los desarrolladores en un canal de distribución.

**Contexto que debes pedirme si no lo proporciono:**
- Qué hace el producto o servicio que quieres exponer como API
- Quiénes son los developers que usarán la API: internos, partners, público general
- Si ya existe una API y cuáles son sus problemas actuales
- El objetivo del ecosistema: distribución, integración, marketplace de apps, ingresos por API
- Recursos disponibles para developer relations: equipo, presupuesto, tiempo de ingeniería

**Parte 1 — Principios de diseño de APIs que developers quieren usar**

La diferencia entre una API que se adopta y una que se abandona está en las decisiones de diseño:
- Diseño RESTful vs. GraphQL vs. gRPC: cuándo usar cada paradigma y cómo elegir según el tipo de dato y el perfil del desarrollador
- Consistencia y predictibilidad: naming conventions, estructura de URLs, formatos de request y response, manejo de errores. El desarrollador debe poder predecir cómo funciona un endpoint nuevo sin leer la documentación.
- Versionado de API: semver para APIs, cómo deprecar sin romper integrations existentes, la política de soporte de versiones antiguas
- Autenticación y autorización: OAuth 2.0, API keys, JWT; cuándo usar cada uno y cómo hacer el onboarding de autenticación lo más corto posible
- Rate limiting y cuotas: cómo comunicarlos claramente, cómo manejar el throttling de forma que no destruya la experiencia del developer

**Parte 2 — Developer Experience: el producto invisible que determina la adopción**

El DX es la suma de todas las fricciones que el developer encuentra desde que descubre la API hasta que tiene su primera integración en producción:
- Time-to-first-call: cuánto tiempo tarda un developer nuevo en hacer la primera llamada exitosa a la API. Cómo medir y optimizar este tiempo (el objetivo de clase mundial es menos de cinco minutos).
- Onboarding sin fricción: registro, obtención de credenciales, primer request. Cada paso que requiere intervención humana o formularios largos destruye la conversión.
- SDKs: cuándo construirlos (cuando el volumen de integraciones lo justifica), qué lenguajes priorizar, cómo mantenerlos actualizados sin morir en el intento
- Sandbox y entorno de pruebas: por qué un sandbox de calidad es la inversión de DX con mayor ROI
- Error messages que explican qué salió mal y cómo arreglarlo; no códigos de error crípticos

**Parte 3 — Documentación como producto**

La documentación de una API no es un coste; es el activo de marketing más importante para desarrolladores:
- La estructura de documentación que funciona: getting started (primeros 10 minutos), reference (completo y buscable), guías (casos de uso específicos), changelog (transparencia sobre cambios)
- Cómo escribir el getting started: el objetivo es que el developer haga algo útil en la primera sesión, no que entienda toda la API
- Interactive docs: Swagger UI, Redoc, Mintlify; cuándo el esfuerzo de mantenerlos actualizados se justifica
- Code examples en múltiples lenguajes: cómo generarlos y mantenerlos sin que se queden obsoletos
- Cómo recoger feedback sobre la documentación y medir qué secciones generan más dudas de soporte

**Parte 4 — Estrategia de ecosistema y distribución**

Una API exitosa se convierte en un canal de distribución cuando otros construyen sobre ella:
- El marketplace de integraciones: cómo construir el directorio de integraciones y qué incentivos dar a los partners para listarse
- Partner tiers: community partners (self-serve), technology partners (acuerdo formal), strategic partners (co-desarrollo). Qué ofreces y qué exiges en cada tier.
- Developer relations: el equipo que necesitas, qué hace un DevRel en el día a día, cómo medir su impacto
- Community: Discord, Slack, foros, GitHub Discussions; cuándo invertir en comunidad y cuándo es prematuro

**Parte 5 — Monetización y métricas del ecosistema**

- Modelos de monetización de APIs: freemium (límite de llamadas gratuitas), pay-per-use, suscripción por tier, enterprise custom pricing. Cuándo y por qué usar cada modelo.
- Las métricas del ecosistema: developers registrados, developers activos, llamadas por mes, tiempo hasta la primera integración en producción, NPS de developers
- Cómo usar los datos de uso de la API para mejorar el producto principal y para identificar oportunidades de nuevos productos

Termina con el roadmap de los primeros seis meses para lanzar una API pública con developer experience de clase mundial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar API con excelente DX, documentación y estrategia de ecosistema de developers',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de materiales de ventas',
                'description'       => 'Pitch decks, one-pagers, propuestas: el diseño que hace que los documentos de ventas transmitan profesionalidad y conviertan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador gráfico especializado en materiales de ventas y comunicación comercial B2B. Voy a compartirte información sobre mi empresa y el material que necesito crear, y quiero que me ayudes a diseñar un sistema visual de documentos de ventas que transmita profesionalidad, consistencia y convierta mejor que los materiales genéricos de PowerPoint.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de material: pitch deck, one-pager, propuesta comercial, case study, leave-behind
- Sector de la empresa y perfil del cliente objetivo
- Si existe una identidad de marca ya definida (logo, colores, tipografía) o hay que crearla
- Formato de presentación: en persona, envío por email, video call
- Nivel de sofisticación del comprador: técnico, ejecutivo, operacional

**Parte 1 — Principios de diseño para materiales de ventas que convierten**

El diseño de ventas no es arte; es comunicación al servicio de un objetivo concreto: avanzar el proceso de compra. Los principios son diferentes de los del diseño editorial o de marca:
- Jerarquía visual que guía al lector hacia la información más importante: el comprador escanea antes de leer; el diseño debe sobrevivir el escaneo de cinco segundos
- Densidad de información adecuada: el pitch deck para una reunión de 30 minutos tiene una densidad diferente al one-pager que el comprador lee solo en su despacho
- Consistencia que transmite organización: un deck donde cada slide parece diseñada por una persona diferente comunica que la empresa no tiene procesos
- El color y la tipografía como señales de posicionamiento: cómo los colores y las fuentes comunican valores de marca (confianza, innovación, premium) antes de que el comprador lea una sola palabra

**Parte 2 — El pitch deck que funciona**

Estructura y diseño del pitch deck para reuniones con decisores:

Slide de apertura: el primer slide debe responder en tres segundos quién eres y qué problema resuelves. No el logo grande, no el nombre de la empresa: el valor que aportas.

Slides de problema y solución: cómo diseñar el contraste visual entre el mundo con el problema (tensión, fricciones) y el mundo con tu solución (claridad, resultado).

Slides de prueba: casos de éxito, testimonios, métricas. Cómo diseñar las pruebas sociales para que sean creíbles y no parezcan inventadas (el error de los números redondos y las citas sin contexto).

Slide de propuesta de valor: el diseño de la tabla de diferenciación vs. competidores. Cómo hacerla sin que parezca propaganda.

Slide de cierre y siguientes pasos: el call to action del pitch deck no es "preguntas", es una acción concreta que el comprador puede tomar.

**Parte 3 — El one-pager que se comparte internamente**

El one-pager es el material más infravalorado del toolkit de ventas. Es el documento que el comprador usa para hacer la venta interna:
- La estructura del one-pager en cuatro zonas: el problema (arriba izquierda, primer lugar que lee el ojo), la solución (arriba derecha), la prueba (centro), el call to action (abajo)
- Cómo diseñar un one-pager que funcione en impresión A4, en pantalla y recortado como screenshot de WhatsApp
- La densidad de texto correcta: suficiente para convencer a quien no asistió a la reunión, suficientemente visual para no parecer un email
- Cuándo usar infografías vs. texto: la regla del proceso vs. comparativa vs. dato único

**Parte 4 — Propuestas comerciales que se leen**

La mayoría de propuestas comerciales son documentos legales que el comprador no lee:
- Cómo diseñar una propuesta que empiece con el resumen ejecutivo que el C-level lee en dos minutos antes de pasar el documento a su equipo
- La estructura visual de la propuesta: portada personalizada con el logo del cliente, resumen ejecutivo, problema-solución, alcance, inversión, siguientes pasos
- Cómo presentar el pricing de forma que el valor sea evidente antes de que el comprador vea el número
- El diseño del contrato de un solo click: cuándo la propuesta y el contrato pueden ser el mismo documento

**Parte 5 — Sistema de plantillas y eficiencia**

El material de ventas que no escala no es un activo; es un coste de tiempo:
- Cómo construir el sistema de plantillas en Figma, PowerPoint o Google Slides que el equipo de ventas pueda personalizar sin romper el diseño
- El kit de assets de ventas: iconografía, fotografías, gráficos de datos, bloques de texto reutilizables
- El proceso de actualización: quién actualiza las plantillas, con qué frecuencia y cómo se comunican los cambios al equipo
- Cómo medir si el material de ventas funciona: datos de apertura, tiempo de lectura, conversión de propuesta a contrato

Termina con las cinco decisiones de diseño más importantes que debo tomar antes de empezar a producir cualquier material de ventas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar pitch decks, one-pagers y propuestas comerciales que transmiten valor y convierten',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'MEDDIC y calificación enterprise',
                'description'       => 'La metodología de calificación que los mejores equipos de ventas enterprise usan: Metrics, Economic buyer, Decision criteria, Decision process, Identify pain, Champion.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas enterprise con experiencia implementando la metodología MEDDIC en equipos de ventas complejas B2B. Voy a compartirte información sobre un deal en el que estoy trabajando o sobre mi proceso de ventas, y necesito que me ayudes a aplicar MEDDIC para calificar mejor, avanzar más rápido y cerrar más deals enterprise.

**Contexto que debes pedirme si no lo proporciono:**
- Descripción del deal o del proceso de ventas en el que quieres aplicar MEDDIC
- Tamaño típico del deal y duración del ciclo de venta
- Perfil de los compradores habituales: sector, tamaño de empresa, roles involucrados
- Si es para un deal específico o para rediseñar el proceso de calificación del equipo

**Parte 1 — Fundamentos de MEDDIC: por qué funciona en ventas enterprise**

MEDDIC no es un checklist burocrático; es un framework para entender si el deal puede cerrarse y qué le falta para cerrarse. En ventas complejas con múltiples stakeholders, ciclos largos y presupuestos grandes, el vendedor que no tiene respuesta a cada componente de MEDDIC está vendiendo a ciegas:

Metrics: los números que demuestran el valor económico de la solución para el comprador. No "ahorrará tiempo"; sino "según vuestros datos, reducirá el tiempo de procesamiento de 8 horas a 45 minutos por semana por empleado, lo que supone un ahorro anual de X€ para un equipo de 50 personas". Cómo construir el business case cuantificado con datos del cliente.

Economic Buyer: la persona con autoridad real para liberar el presupuesto. No quien dice que tiene autoridad; quien puede decir sí cuando todos los demás dicen no. Cómo identificar al Economic Buyer real cuando el comprador declarado no tiene esa autoridad.

**Parte 2 — Decision Criteria y Decision Process**

Decision Criteria: los criterios formales e informales con los que el comprador evaluará las opciones. Los formales aparecen en el RFP; los informales son los que realmente deciden. Cómo descubrir los criterios no declarados preguntando sobre decisiones de compra previas similares. Cómo influir en los Decision Criteria antes de que el comprador los cierre.

Decision Process: el mapa de cómo se toma la decisión de compra. Quién valida técnicamente, quién aprueba el gasto, si hay comité de compras, si hay un proceso de seguridad o legal que puede vetar la decisión, los plazos internos del cliente y cómo se alinean con el cierre esperado. Cómo construir el mapa del proceso de decisión en una conversación natural sin que el comprador sienta que le estás interrogando.

**Parte 3 — Identify Pain y Champion**

Identify Pain: el dolor concreto que motiva la compra. No el dolor genérico del sector; el dolor específico de esta empresa en este momento. Cómo distinguir entre el dolor declarado (lo que el comprador dice que le duele) y el dolor real (lo que le impide alcanzar sus objetivos). Cómo cuantificar el coste del dolor para que no comprar tenga un coste explícito.

Champion: la persona dentro de la organización del comprador que quiere que ganes tú y tiene influencia para ayudarte. El Champion no es el sponsor; es el insider que comparte información, te abre puertas y trabaja internamente para tu solución. Cómo identificar a un Champion potencial, cómo desarrollarlo y cómo saber si tu Champion tiene suficiente influencia para ser útil. Las señales de que tu Champion se está enfriando y cómo recuperarlo.

**Parte 4 — MEDDIC aplicado a un deal real**

Guíame en el análisis MEDDIC de mi deal actual. Para cada componente, dame:
- Las preguntas concretas que debo hacer en la próxima conversación con el comprador
- Cómo interpretar las respuestas para evaluar la fortaleza del deal
- Las señales de alerta que indican que este componente es el que puede tirar el deal
- La acción específica que debo tomar esta semana para mejorar este componente

Al final del análisis, dame una evaluación de la probabilidad de cierre real del deal y los dos o tres puntos que más necesitan trabajo.

**Parte 5 — MEDDIC como proceso de equipo**

MEDDIC sin disciplina de equipo se convierte en un formulario que nadie usa:
- Cómo integrar MEDDIC en el CRM para que sea fácil de actualizar y útil en las revisiones de pipeline
- El formato del deal review semanal basado en MEDDIC: qué preguntas hace el manager, cuáles son las respuestas aceptables y cuáles son señales de alerta
- Cómo usar MEDDIC para hacer forecast más preciso: qué componentes de MEDDIC mejor predicen el cierre
- El onboarding de nuevos vendedores en MEDDIC: cómo enseñar el framework en contexto real, no en una formación abstracta

Termina con el scorecard de MEDDIC que debo usar en cada deal de pipeline para decidir en qué deals invertir el tiempo de este mes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicar metodología MEDDIC para calificar y avanzar deals enterprise complejos',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PLG (Product-Led Growth)',
                'description'       => 'El producto como principal canal de crecimiento: free tier, viral loops, in-product onboarding y las decisiones de producto que generan expansión orgánica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager especializado en estrategias de Product-Led Growth con experiencia en SaaS B2B y B2C. Voy a compartirte información sobre mi producto y mi situación actual de crecimiento, y necesito que me ayudes a diseñar o mejorar la estrategia PLG para que el producto se convierta en el principal canal de adquisición y expansión.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de producto y modelo de negocio actual
- Métricas actuales: usuarios activos, conversión de free a paid, NRR, tiempo hasta el primer valor
- Si ya existe un free tier o freemium, y cómo está funcionando
- El principal canal de adquisición actual y su coste
- Equipo de producto disponible y capacidad de desarrollo

**Parte 1 — Diagnóstico PLG: ¿está tu producto preparado para crecer solo?**

No todos los productos son candidatos naturales al PLG. Antes de diseñar la estrategia, evalúa si el producto tiene las condiciones necesarias:
- Time-to-value: ¿cuánto tarda el nuevo usuario en experimentar el valor central del producto? Si supera los 10 minutos, el PLG es difícil. ¿Qué está bloqueando la velocidad de llegada al primer "aha moment"?
- Viralidad inherente: ¿el producto tiene valor tanto para quien lo usa como para quien recibe algo de quien lo usa? (documentos compartidos, invitaciones, outputs enviados) Si el producto crea valor solo para el usuario aislado, la viralidad hay que diseñarla.
- Frictionless adoption: ¿puede un usuario empezar a usar el producto sin hablar con nadie de tu empresa? Identifica todos los gates que requieren intervención humana y evalúa cuáles pueden eliminarse.
- Momento de upgrade: ¿existe un momento natural en el que el usuario gratuito necesita más de lo que el free tier ofrece? Si el límite del free tier no coincide con el momento de mayor engagement, el upgrade nunca llega.

**Parte 2 — Diseño del modelo freemium**

El freemium mal diseñado es una fuente de costes sin conversión. El freemium bien diseñado es el motor de crecimiento:
- La regla del free tier: el usuario gratuito debe obtener suficiente valor como para volverse dependiente del producto, pero no tanto como para no necesitar nunca el plan de pago
- Qué poner en el free tier y qué reservar para el plan de pago: la decisión es estratégica (no poner en free lo que convierte) y no de coste (no poner en free lo que es caro de servir)
- Diseño de los límites de conversión: límites de uso (llamadas, storage, seats), límites de feature (funcionalidades avanzadas), límites de acceso (integraciones, exportación, API). Cuál convierte mejor según el tipo de producto.
- Cómo comunicar los límites sin frustrar: el usuario debe entender el límite como un incentivo, no como un castigo

**Parte 3 — In-product onboarding**

El onboarding es donde el PLG gana o pierde:
- El mapa del primer día: desde el momento en que el usuario se registra hasta que experimenta el aha moment. Cada paso en el que el usuario puede abandonar es una pérdida de CAC.
- Onboarding progresivo vs. onboarding upfront: cuándo dar toda la información al principio y cuándo introducirla cuando el usuario la necesita
- Personalización del onboarding: cómo usar las primeras preguntas (rol, caso de uso, objetivo) para personalizar la experiencia y llegar al aha moment más rápido
- Activation campaigns: los emails y notificaciones in-app que rescatan a los usuarios que no llegaron al aha moment en la primera sesión

**Parte 4 — Viral loops y mecanismos de expansión**

- Diseña los viral loops que generan adquisición sin presupuesto publicitario: invitación de equipo, compartir output, colisión de producto (el receptor descubre el producto a través de algo que el usuario le envía)
- Network effects: cómo diseñar el producto para que sea más valioso a medida que más personas lo usan
- Expansión within account: cómo diseñar el producto para que la adopción se extienda de forma natural desde el primer usuario hasta el equipo y después al departamento
- PLG como canal de enterprise: el movimiento product-led sales donde el equipo de ventas interviene solo cuando las señales de producto indican que hay una cuenta lista para un deal enterprise

**Parte 5 — Métricas PLG y experimentos**

- Las métricas que importan en PLG: time-to-activation, activation rate, virality coefficient (k-factor), PQL (product-qualified leads), expansión revenue vs. new logo revenue
- Cómo diseñar el funnel de métricas PLG y dónde están las mayores oportunidades de mejora en mi caso
- Los experimentos de PLG con mayor impacto histórico: reducción del onboarding, cambios en el diseño de los límites del free tier, nuevos mecanismos de sharing
- Cómo priorizar los experimentos PLG cuando tienes capacidad de desarrollo limitada

Termina con las tres hipótesis de PLG más importantes que debería probar en los próximos 60 días para mejorar la conversión de free a paid.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar estrategia PLG con freemium, viral loops, onboarding y métricas de crecimiento',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding para perfiles técnicos',
                'description'       => 'Los ingenieros y diseñadores no responden a las mismas palancas que otros perfiles: el employer branding que funciona en LinkedIn, GitHub y los foros técnicos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en employer branding para empresas tecnológicas con experiencia en atracción de perfiles técnicos: ingenieros de software, data scientists, diseñadores de producto y DevOps. Voy a compartirte información sobre mi empresa y mis dificultades para atraer talento técnico, y necesito que me ayudes a diseñar una estrategia de employer branding que funcione en los canales donde los técnicos realmente prestan atención.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de empresa: startup, scaleup, corporate, agencia, consultora
- Perfiles técnicos que más necesitas atraer y nivel de seniority
- Stack tecnológico y cultura de ingeniería actual
- Presencia actual en redes: LinkedIn, GitHub, Twitter/X, blogs técnicos
- Dificultades principales: salarios por debajo del mercado, marca desconocida, competencia con grandes tecnológicas, cultura poco atractiva

**Parte 1 — Por qué el employer branding genérico no funciona con perfiles técnicos**

Los ingenieros senior no buscan empleo leyendo ofertas de trabajo. Reciben ofertas constantemente y las ignoran porque son indistinguibles entre sí. El employer branding técnico efectivo no dice "únete a nuestro equipo dinámico"; muestra cómo se trabaja, con qué tecnologías, qué problemas se resuelven y cómo toman decisiones técnicas:
- Las señales que un ingeniero senior usa para evaluar una empresa antes de aceptar una entrevista: el estado del repositorio público, la calidad técnica del blog de ingeniería, las charlas de los empleados en conferencias, las reseñas de Glassdoor de perfiles técnicos
- Por qué "startup con ambiente joven y buenas vistas" repele a los perfiles que más necesitas
- El error más común: confundir employer branding con marketing de RRHH

**Parte 2 — El employer brand técnico en GitHub**

Para perfiles de ingeniería, la presencia en GitHub es más importante que cualquier campaña de LinkedIn:
- Cómo construir una presencia en GitHub que atraiga talento: repositorios open-source relevantes, calidad del código, frecuencia de commits, documentación, issues activos
- El perfil de empresa en GitHub: cómo usarlo para mostrar el stack, los proyectos y la cultura de ingeniería
- Contribuciones a proyectos open-source como señal de calidad técnica del equipo
- Cómo involucrar a los ingenieros actuales en la construcción del employer brand técnico en GitHub sin que lo vivan como una carga

**Parte 3 — Contenido técnico que genera atracción orgánica**

El contenido que más atrae a perfiles técnicos no habla de la empresa; habla de los problemas técnicos que la empresa resuelve:
- El blog de ingeniería: cómo arrancar uno, qué temas funcionan, cómo conseguir que los ingenieros escriban sin que se convierta en un proyecto de marketing
- Posts técnicos en Medium, Substack, Dev.to: cómo distribuirlos para llegar a la audiencia correcta
- Talks en conferencias y meetups: los formatos que más cred generan, cómo seleccionar los eventos y cómo apoyar a los empleados que quieren hablar en público
- Twitter/X y Mastodon: la comunidad técnica sigue activa en estas plataformas; cómo construir presencia sin que parezca corporativo

**Parte 4 — LinkedIn para perfiles técnicos**

LinkedIn funciona diferente para perfiles técnicos que para otros roles:
- Los tipos de contenido que los ingenieros consumen en LinkedIn vs. los que ignoran
- El perfil de empresa en LinkedIn que atrae técnicos: no fotos de team buildings, sino muestras de trabajo técnico real
- Las páginas de vida en LinkedIn: cómo mostrar la cultura de ingeniería de forma auténtica
- Cómo involucrar a los ingenieros en LinkedIn sin pedirles que compartan posts corporativos (que nunca comparten)

**Parte 5 — La propuesta de valor para técnicos**

Los perfiles técnicos senior no eligen empresa solo por salario; valoran:
- Calidad del trabajo técnico: ¿resolveré problemas interesantes o mantendré código legacy?
- Autonomía técnica: ¿puedo elegir la herramienta correcta o hay un stack impuesto?
- Aprendizaje: ¿trabajaré con personas de las que pueda aprender?
- Impacto: ¿mi trabajo afecta a usuarios reales o queda enterrado en un backlog?

Diseña la propuesta de valor técnica honesta para mi empresa: cómo comunicar lo que sí ofrecemos de forma auténtica y cómo no prometer lo que no podemos cumplir.

Termina con el plan de employer branding técnico para los primeros cuatro meses con los entregables concretos de cada mes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar estrategia de employer branding para atraer ingenieros y diseñadores senior',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de inversión en ventas',
                'description'       => 'Cuánto invertir en el equipo de ventas, en qué canales y cómo calcular el retorno esperado de cada contratación o inversión en marketing.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en empresas SaaS y B2B analizando el retorno de las inversiones en ventas y marketing. Voy a compartirte información sobre mi empresa y mis decisiones de inversión pendientes, y necesito que me ayudes a calcular el retorno esperado de cada opción y a tomar decisiones basadas en datos.

**Contexto que debes pedirme si no lo proporciono:**
- Modelo de negocio y métricas actuales: ARR, ACV, LTV, churn, ciclo de venta
- Decisión de inversión que necesitas analizar: contratación, canal de marketing, herramienta, evento
- Datos históricos disponibles sobre conversión y CAC por canal
- Presupuesto disponible y horizonte temporal del análisis
- Objetivos de crecimiento para los próximos 12 meses

**Parte 1 — El framework de decisión de inversión en ventas**

Antes de calcular el ROI de cualquier inversión en ventas, necesito entender el modelo económico completo:
- Customer Acquisition Cost (CAC) por canal: cómo calcularlo correctamente (no solo el coste de los anuncios, sino el coste total incluyendo salarios del equipo de ventas, herramientas, overhead)
- Customer Lifetime Value (LTV): cómo calcularlo según el modelo de negocio y por qué el LTV medio puede ser engañoso si la distribución de clientes es muy heterogénea
- Ratio LTV/CAC: por debajo de 3x, la inversión en el canal no es sostenible; por encima de 5x, probablemente estés invirtiendo poco. Cómo interpretar el ratio en el contexto de tu stage y sector.
- Payback period: cuántos meses tarda en recuperarse el coste de adquisición de un cliente. Por qué el payback period importa tanto como el LTV/CAC en empresas que necesitan gestionar el flujo de caja

**Parte 2 — ROI de la contratación de vendedores**

La contratación de un AE o BDR es una de las inversiones de mayor impacto y de mayor riesgo:
- Cómo calcular el retorno esperado de una contratación de ventas: coste total del vendedor (salario + variable + herramientas + overhead), pipeline esperado en el primer año (ajustado por la curva de ramping), conversión esperada, ARR generado
- La curva de ramping: cuánto tiempo tarda un AE nuevo en llegar a plena productividad (típicamente 4-9 meses según complejidad del producto), cómo estimar el coste del ramping period
- El umbral de contratación: cuándo tiene sentido contratar el siguiente vendedor. El error de contratar demasiado pronto (destruyes margen) y demasiado tarde (pierdes crecimiento)
- Cómo comparar el ROI de contratar un AE adicional vs. invertir el mismo presupuesto en marketing o en herramientas de sales enablement

**Parte 3 — ROI de los canales de marketing**

No todos los canales de marketing tienen el mismo CAC ni el mismo tiempo de retorno:
- Cómo calcular el CAC real por canal (paid search, content/SEO, LinkedIn ads, eventos, outbound, producto) incluyendo todos los costes asociados
- Cómo atribuir revenue a múltiples canales cuando el ciclo de venta es largo y el comprador tocó varios canales antes de cerrar: modelos de atribución first-touch, last-touch, linear, data-driven
- El análisis de eficiencia de canal: coste por MQL, coste por SQL, coste por oportunidad, coste por deal cerrado. Cómo identificar dónde se pierde la eficiencia en el funnel de cada canal.
- Cuándo tiene sentido continuar invirtiendo en un canal con CAC alto si el LTV de los clientes que trae es significativamente mayor

**Parte 4 — Modelización de escenarios**

Las decisiones de inversión en ventas se toman con incertidumbre; la modelización de escenarios hace explícita esa incertidumbre:
- Diseña el modelo de tres escenarios (pesimista, base, optimista) para la inversión que estoy evaluando
- Las variables que más impactan en el resultado y que deben monitorizarse de cerca en los primeros meses
- Cómo establecer los gates de decisión: si en el mes X el indicador Y no ha alcanzado el umbral Z, cortamos la inversión. Los gates predefinidos evitan el sesgo de confirmar la inversión pase lo que pase.
- Análisis de sensibilidad: qué variable, si se equivoca en un 20%, cambia más el resultado esperado

**Parte 5 — Dashboard de decisiones de inversión en ventas**

Diseña el dashboard mensual que me permite tomar decisiones de inversión con datos actualizados:
- Las cinco métricas que debo revisar antes de cualquier decisión de inversión en ventas
- Los umbrales de alerta que deben disparar una revisión de la estrategia
- El formato del informe mensual de eficiencia de ventas para el consejo o los inversores

Termina con el análisis específico de la inversión que me hayas descrito, con el ROI esperado, el payback period estimado y la recomendación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Calcular ROI de inversiones en ventas: contrataciones, canales de marketing y herramientas',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos de SaaS',
                'description'       => 'MSA, DPA, SLAs y las cláusulas de los contratos de software como servicio que el abogado de empresa debe conocer para negociar en favor del cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en contratos tecnológicos con experiencia en la negociación de acuerdos de software como servicio (SaaS) desde el lado del cliente. Voy a compartirte información sobre un contrato SaaS que necesito revisar o negociar, y necesito que me guíes en las cláusulas más importantes, los riesgos habituales y las posiciones de negociación que debo tomar.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de software SaaS: productividad, CRM, ERP, seguridad, datos, infraestructura, IA
- Si eres cliente negociando con un proveedor, o proveedor revisando vuestro contrato estándar
- Importe anual del contrato y duración del acuerdo
- Industria y si hay regulación sectorial aplicable (datos de salud, financieros, etc.)
- Jurisdicción del contrato

**Parte 1 — Estructura del ecosistema contractual SaaS**

Un acuerdo SaaS típico no es un contrato único; es un conjunto de documentos que deben leerse juntos:
- Master Services Agreement (MSA) o Master Subscription Agreement (MSA): el contrato marco que define las condiciones generales de la relación. Lo que no está en el MSA prevalece sobre lo que está en los documentos subordinados.
- Order Form o Statement of Work: el documento específico que define qué se compra, a qué precio y durante cuánto tiempo. La letra pequeña del Order Form puede modificar el MSA sin que te des cuenta.
- Data Processing Agreement (DPA): el contrato que regula el tratamiento de datos personales bajo el RGPD. Sin un DPA firmado, el uso del software puede ser ilegal si procesa datos de ciudadanos europeos.
- Service Level Agreement (SLA): los compromisos de disponibilidad y rendimiento, y las compensaciones cuando no se cumplen.
- Acceptable Use Policy (AUP) y Privacy Policy: los términos unilaterales del proveedor que en muchos contratos se incorporan por referencia y pueden cambiar sin negociación.

**Parte 2 — Las cláusulas más peligrosas del contrato SaaS**

Las cláusulas que debes negociar o rechazar antes de firmar:

Renovación automática: la cláusula que renueva el contrato automáticamente con aviso de cancelación de 60-90 días que caduca 6 meses antes del fin del período. El proveedor no te notifica; la renovación se activa sola. Cómo negociar un aviso activo del proveedor y ventanas de cancelación razonables.

Modificación unilateral de precio: la cláusula que permite al proveedor aumentar el precio en la renovación con un simple aviso. Cuánto es razonable limitar el aumento (típicamente CPI o un porcentaje fijo).

Modificación unilateral de servicio: el proveedor puede cambiar funcionalidades, eliminar módulos o modificar la API con aviso previo. Cómo negociar el derecho de terminación si los cambios son materialmente adversos.

Limitación de responsabilidad: la cláusula que limita la responsabilidad del proveedor al importe pagado en los últimos 12 meses. En contratos de seguridad o datos críticos, esta limitación puede ser insuficiente.

**Parte 3 — El DPA: lo que el abogado debe revisar**

El Data Processing Agreement es el contrato más ignorado y el más importante en la era del RGPD:
- Las cláusulas obligatorias del artículo 28 del RGPD que deben estar en cualquier DPA válido
- Las transferencias internacionales de datos: si el proveedor usa subprocesadores en EEUU u otros países fuera del EEE, cómo asegurarte de que existe la base legal adecuada (SCCs, BCRs, adecuación)
- El derecho de auditoría en el DPA: cómo negociar el derecho a auditar al proveedor sin que sea un derecho ilusorio
- Las obligaciones de notificación de brechas: los plazos que debe cumplir el proveedor para notificarte y los que tú debes cumplir con la autoridad de protección de datos

**Parte 4 — Negociación de SLAs**

El SLA que protege al cliente no es el que tiene el porcentaje de uptime más alto; es el que tiene compensaciones reales cuando hay incumplimiento:
- Cómo calcular qué porcentaje de uptime corresponde a qué tiempo de downtime anual (99.9% = 8.7 horas; 99.99% = 52 minutos)
- Service credits vs. derecho de terminación: cuándo los créditos son suficientes y cuándo necesitas el derecho a terminar el contrato si hay incumplimiento reiterado
- La exclusión de mantenimiento programado: cómo asegurarte de que el mantenimiento no se programa en los momentos críticos para tu negocio
- El SLA de soporte: tiempos de respuesta y resolución por nivel de severidad, y qué pasa cuando no se cumplen

**Parte 5 — Estrategia de negociación**

No todos los contratos SaaS son negociables; hay que saber cuándo y cómo negociar:
- Los proveedores con los que puedes negociar (deal significativo, mercado competitivo) y los que presentan términos no negociables (herramientas commodity, monopolios de facto)
- Las cinco cláusulas que siempre debes intentar negociar, ordenadas por importancia
- Cómo usar la competencia y los datos de mercado para respaldar tu posición en la negociación
- El momento en que la negociación del contrato debe involucrar al proveedor en una llamada vs. el intercambio de redlines por escrito

Termina con el checklist de revisión de contratos SaaS en 20 puntos que debes completar antes de aprobar cualquier acuerdo de software como servicio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Revisar y negociar contratos SaaS: MSA, DPA, SLAs y cláusulas de riesgo',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS-led growth',
                'description'       => 'El equipo de CS como motor de crecimiento: cómo los CSMs generan upsells, referidos y casos de éxito que se convierten en el mejor activo de marketing.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en transformar equipos de CS reactivos en motores de crecimiento activo. Voy a compartirte información sobre mi equipo y base de clientes, y necesito que me ayudes a diseñar la estrategia y los procesos para que CS genere revenue de expansión, referidos y activos de marketing que complementen al equipo de nuevos negocios.

**Contexto que debes pedirme si no lo proporciono:**
- Modelo de negocio y métricas actuales: NRR, GRR, expansión actual, número de clientes y ratio clientes/CSM
- Si el CSM tiene actualmente cuotas de expansión o solo objetivos de retención
- El producto y si tiene oportunidades naturales de expansión (más seats, más módulos, más volumen)
- La relación actual entre CS, ventas y marketing
- El perfil de los clientes con mayor potencial de expansión

**Parte 1 — Por qué CS-led growth no es CS haciendo ventas**

La diferencia entre un CSM que vende y un CSM que genera crecimiento:
- El CSM que vende pierde la confianza del cliente porque el cliente percibe que su asesor tiene un interés comercial en cada recomendación
- El CSM que genera crecimiento identifica el momento en que el cliente tiene un problema nuevo que el producto puede resolver y conecta ese problema con la solución, sin presión
- La alineación de incentivos: cómo estructurar los objetivos del CSM para que la expansión sea consecuencia de hacer bien el trabajo de success, no de hacer ventas adicionales
- Las métricas que diferencian el growth de CS: Net Revenue Retention (NRR) > 110% como norte, expansión generada por CS como porcentaje del total de new revenue

**Parte 2 — Identificación y cualificación de oportunidades de expansión**

Las oportunidades de expansión no aparecen; se identifican en los datos:
- Las señales de producto que predicen que un cliente está listo para un upsell: adopción del 80% de la capacidad del plan actual, uso intensivo de features que solo están en el plan superior, crecimiento del equipo que usa el producto
- Las conversaciones que abren la puerta a la expansión: el QBR como momento de revisión de objetivos donde el CSM puede identificar gaps que el producto puede cubrir con un upgrade
- El proceso de cualificación de la oportunidad de expansión: cómo el CSM determina si es una oportunidad real (presupuesto, autoridad, necesidad, timing) antes de involucrar a ventas
- El handoff CS-ventas para deals de expansión: cuándo el CSM puede cerrarlo directamente y cuándo necesita el apoyo de un AE

**Parte 3 — El programa de referidos gestionado por CS**

Los clientes satisfechos son la mejor fuente de nuevos negocios, pero rara vez refieren de forma espontánea:
- Cuándo pedir un referido: el momento de mayor satisfacción del cliente (después de un éxito medible, después de resolver un problema difícil, después de un NPS alto)
- Cómo pedir un referido de forma que no resulte incómodo: la diferencia entre "¿conoces a alguien que pueda necesitar nuestro producto?" y la conversación que realmente genera referencias de calidad
- El programa estructurado de referidos: incentivos para el cliente que refiere, proceso de seguimiento del referido, cómo medir la contribución de CS al pipeline de nuevos negocios
- Cómo convertir los referidos en casos de éxito que marketing puede usar como activos

**Parte 4 — Casos de éxito y activos de marketing generados por CS**

El caso de éxito bien construido es el activo de marketing con mayor ROI en B2B:
- Cómo identificar los clientes con mejor historia de éxito: impacto medible, willingness to participate, perfil similar al ICP de nuevas cuentas objetivo
- El proceso de creación del caso de éxito: entrevista, validación de datos, aprobación del cliente, distribución
- Los formatos de caso de éxito que generan mayor impacto: PDF para ventas, video para marketing, quote para la web, webinar para audiencias amplias
- Cómo involucrar al cliente en el caso de éxito sin que lo viva como una carga: los incentivos, el proceso de aprobación ágil y cómo hacer que el cliente se sienta protagonista, no instrumento

**Parte 5 — Estructura, métricas e incentivos del CS-led growth**

- El modelo de compensación del CSM que alinea incentivos: cómo incorporar una variable de expansión sin que el CSM deje de ser un asesor de confianza
- Las métricas de CS-led growth que debo reportar a dirección: NRR, expansion revenue generada por CS, pipeline de referidos, casos de éxito publicados
- La colaboración entre CS, marketing y ventas para maximizar el impacto: el proceso de traspaso de casos de éxito a marketing, de referidos a ventas, de oportunidades de expansión cualificadas al AE adecuado
- Cómo evolucionar el equipo de CS desde defensores de cuentas hacia asesores estratégicos que generan crecimiento medible

Termina con el plan de transformación del equipo de CS hacia CS-led growth en tres fases de dos meses cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Transformar el equipo de CS en motor de expansión, referidos y activos de marketing',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Nicho de consultoría de ventas freelance',
                'description'       => 'El consultor de ventas freelance que ayuda a startups a construir su proceso comercial: los servicios más demandados, la propuesta de valor y las tarifas del mercado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de ventas freelance senior con experiencia trabajando con startups y scaleups B2B en la construcción y optimización de sus procesos comerciales. Voy a compartirte mi perfil y mis objetivos, y necesito que me ayudes a posicionarme como consultor de ventas freelance, a definir mis servicios y a construir un negocio rentable y escalable.

**Contexto que debes pedirme si no lo proporciono:**
- Experiencia previa en ventas y en qué tipo de empresas y sectores
- Si has sido AE, SDR, VP de ventas, Sales Ops o combinación de varios roles
- Objetivos de ingresos y tipo de trabajo preferido (proyectos cortos vs. retainer mensual)
- Si tienes clientes actuales o estás empezando desde cero
- Mercado objetivo: startups early-stage, series A/B, empresas medianas en transformación digital

**Parte 1 — El mercado de consultoría de ventas para startups**

Las startups tienen un problema de ventas específico que los consultores de ventas pueden resolver mejor que nadie: el founder que vende sabe que el producto es bueno, pero no sabe cómo construir un proceso repetible que funcione sin él. Ese es el gap más valioso que el consultor puede cubrir:
- El ciclo de vida de las necesidades de ventas en una startup: pre-PMF (no contratar consultores de ventas; validar el ICP primero), post-PMF pre-series A (construir el proceso con el founder), series A (contratar el primer Head of Sales, el consultor puede ayudar a encontrarlo y a estructurar el equipo), series B+ (scaling, metodologías, enablement)
- Los momentos más rentables para el consultor freelance: la startup post-PMF que acaba de cerrar la primera ronda y no sabe cómo escalar las ventas; la empresa que ha contratado AEs pero no tienen proceso ni pipeline
- Por qué muchas startups prefieren un consultor freelance a un VP de ventas a tiempo completo en early stage: coste, velocidad y la opción de cambiar de enfoque

**Parte 2 — Servicios de consultoría de ventas más demandados**

Define el catálogo de servicios con claridad: el consultor que hace "todo lo de ventas" es tan contratado como el que no hace nada claro. La especialización genera confianza y precios más altos:

Fractional Head of Sales (retainer mensual): actúas como el VP de ventas de la startup a tiempo parcial. Defines la estrategia, contratas el equipo, diseñas el proceso y lo implementas. El servicio más rentable y el que más compromiso requiere.

Sales Process Design (proyecto de duración fija): defines el ICP, el value proposition, el playbook de outbound, las secuencias de nurturing, el proceso de calificación y el pipeline stages del CRM. Entregable concreto, plazo concreto.

Sales Audit (diagnóstico inicial): revisas el proceso actual, el CRM, las métricas, los playbooks y el equipo. Entregas un informe con las tres prioridades que más impactarán en los resultados. Puerta de entrada a proyectos más grandes.

Sales Enablement y Training: formas al equipo de ventas en metodología (MEDDIC, SPIN, Challenger), en el producto, en el manejo de objeciones. Formato taller o coaching individual.

**Parte 3 — Tarifas y modelo de negocio**

La trampa del consultor de ventas que cobra por hora:
- Por qué el precio por hora te pone en desventaja: incentiva al cliente a limitar las horas, no el resultado; y te impide capturar el valor de tu experiencia (un consultor que sabe exactamente qué hacer tarda menos horas pero genera más valor)
- El modelo de retainer mensual: cómo estructurarlo (alcance claro, disponibilidad semanal definida, entregables mensuales) y cuánto cobrar según el nivel de seniority y el tamaño del cliente
- El modelo de proyecto de precio fijo: cómo calcular el precio basándote en el valor que generas, no en las horas. Un Sales Process Design que genera 500k€ de pipeline en el primer año justifica un honorario muy diferente al coste de tus horas.
- Los rangos de tarifas del mercado en España y LATAM: desde los 2.000€/mes de un consultor junior en early stage hasta los 8.000-15.000€/mes de un Fractional CRO con track record probado

**Parte 4 — Conseguir los primeros clientes y construir el pipeline**

El consultor freelance tiene el mismo problema que sus clientes: necesita un proceso de ventas:
- Cómo construir el primer caso de éxito cuando no tienes clientes actuales: proyectos pro-bono o a precio reducido para startups de tu red que cambias por un testimonial y el derecho a usar los datos de resultado
- Los canales de adquisición de clientes que funcionan para consultores de ventas: LinkedIn con contenido de tu proceso (no consejos genéricos, sino muestras de trabajo real), referidos de inversores y aceleradoras, comunidades de founders
- El pitch del consultor de ventas a un founder: cómo presentar el valor de tu servicio a alguien que ha estado vendiendo sin proceso y está empezando a ver los límites de ese enfoque
- Cómo convertir un proyecto único en una relación de largo plazo: el momento de proponer el retainer después de un primer proyecto exitoso

**Parte 5 — Escalar la consultoría sin perder calidad**

- Cuándo tiene sentido subcontratar o asociarse con otros consultores para tomar proyectos más grandes
- Cómo productizar la consultoría: transformar el trabajo de diagnóstico o de proceso en un entregable estándar que puedes vender sin tanto tiempo de personalización
- El límite de clientes que puedes gestionar en paralelo como consultor individual: entre cuatro y seis clientes en retainer es el máximo habitual antes de que la calidad se resienta
- El modelo de boutique: cuándo y cómo crecer de consultor individual a una pequeña firma con dos o tres consultores sin perder el posicionamiento de calidad

Termina con el plan de los primeros 90 días para lanzar la consultoría de ventas freelance con los primeros dos clientes pagando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Lanzar y posicionar consultoría de ventas freelance para startups B2B',
                'vote_score'        => 46,
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
