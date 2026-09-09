<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills92Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en WhatsApp',
                'description'      => 'Canales de difusión, chatbots y automatización para mercados donde WhatsApp es el canal de comunicación principal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing conversacional con experiencia en construir estrategias de WhatsApp para empresas en mercados hispanohablantes donde este canal tiene tasas de apertura del 95% y es el principal medio de comunicación con el cliente. Tu misión es ayudarme a construir una estrategia de WhatsApp que genere engagement real, conversiones y retención.

## Contexto de mi negocio

- Tipo de negocio: [ecommerce / SaaS / retail / servicios profesionales / otro]
- Mercado principal: [España / México / Colombia / Argentina / otro]
- Tamaño de la base de contactos en WhatsApp: [0 / < 500 / 500-5000 / > 5000]
- Herramientas actuales de WhatsApp: [ninguna / WhatsApp Business (gratuito) / WhatsApp Business API / Twilio / 360dialog / otro]
- Objetivo principal: [captar nuevos clientes / retener los actuales / soporte / ventas]
- Mayor reto ahora mismo: [construir la base de contactos / automatizar respuestas / no quedarme en spam / integrar con el CRM]

---

## 1. La diferencia entre WhatsApp Business, WhatsApp Business API y WhatsApp Channels

Explica claramente las tres opciones con sus ventajas, limitaciones y coste:

**WhatsApp Business (gratis)**
- Para quién es: negocios pequeños con poco volumen.
- Límites: un dispositivo, sin automatización real, sin integración con CRM.
- Cuándo tiene sentido quedarse aquí.

**WhatsApp Business API (via BSP)**
- Para quién es: negocios con volumen medio-alto que necesitan automatización.
- Ventajas: múltiples agentes, chatbots, integración con CRM, plantillas aprobadas.
- Costes reales: por conversación de servicio vs. por conversación de marketing.
- Los mejores BSPs (Business Solution Providers) para mercados hispanohablantes.

**WhatsApp Channels (Difusión)**
- El canal de broadcast de Meta: diferencias con un grupo y con la lista de difusión clásica.
- Cuándo usar Channels vs. mensajes directos.
- Limitaciones de interacción.

---

## 2. Construir la base de contactos de forma ética y legal

El mayor activo de WhatsApp es el opt-in: el cliente decide recibir tus mensajes. Diseña la estrategia:

**Puntos de captura del opt-in**
- Click-to-WhatsApp desde anuncios de Meta: configuración y copy del anuncio.
- Widget de WhatsApp en la web: dónde ponerlo y qué mensaje de bienvenida enviar.
- QR en packaging, tienda física o materiales offline.
- CTA en email marketing: cómo migrar suscriptores de email a WhatsApp.
- Incentivo para el opt-in: descuento, contenido exclusivo, acceso anticipado.

**Gestión del opt-out**
- Cómo facilitar la baja sin fricciones para no acumular contactos inactivos.
- La frecuencia de mensajes que maximiza engagement sin aumentar las bajas.

---

## 3. Automatizaciones que generan valor real

**Chatbot de primera respuesta**
Diseña el flujo del chatbot para los 5 casos de uso más frecuentes:
1. Consulta de disponibilidad / precio.
2. Estado del pedido.
3. Reclamación o queja.
4. Solicitud de información sobre un producto/servicio.
5. Derivación a un agente humano.

Para cada flujo: mensaje de bienvenida, árbol de decisión, condiciones de escalado al humano y mensaje de cierre.

**Secuencias de nurturing**
- Secuencia de bienvenida para nuevos contactos: 3 mensajes en 7 días que generan confianza.
- Secuencia de recuperación de carrito abandonado: timing, copy y oferta óptimos.
- Secuencia post-compra: confirmación, tracking, upsell y solicitud de reseña.

---

## 4. Plantillas de mensaje de alta conversión

Crea plantillas para los mensajes transaccionales y de marketing más importantes:

**Mensaje de bienvenida tras opt-in**
Ejemplo: "Hola [NOMBRE], gracias por suscribirte a nuestros mensajes de WhatsApp. Recibirás [PROMESA]. Si en algún momento no quieres recibir más mensajes, responde STOP. ¿En qué puedo ayudarte hoy?"

**Mensaje de oferta semanal**
Estructura: gancho / oferta / urgencia / CTA directo. Máximo 3 párrafos. Sin spam ni signos de exclamación repetidos.

**Mensaje de reactivación para contactos inactivos**
Cómo recuperar contactos que llevan más de 30 días sin abrir tus mensajes sin que los bloqueen.

---

## 5. Métricas de WhatsApp Marketing

Define el dashboard de métricas específicas de WhatsApp:
- Tasa de apertura (el benchmark es > 85% — si estás por debajo, hay un problema de frecuencia o relevancia).
- Tasa de respuesta (engagement real, no solo lectura).
- Tasa de conversión por tipo de mensaje.
- Coste por conversación (en API) vs. revenue generado.
- Tasa de opt-out (señal de alarma si supera el 2%).

---

## 6. Compliance y GDPR / LFPDPPP

Lo que no puedes ignorar:
- Requisitos de opt-in explícito para WhatsApp Business API.
- Cómo gestionar la política de privacidad incluyendo WhatsApp como canal.
- Qué datos de WhatsApp puedes almacenar y por cuánto tiempo.
- La política de Meta sobre mensajes comerciales: qué te puede hacer suspender la cuenta.

---

Empieza con mi contexto. Luego dame la arquitectura del chatbot para mis 3 casos de uso más frecuentes y las 5 plantillas de mensaje más importantes para mi tipo de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una estrategia de WhatsApp Marketing con automatizaciones, chatbots y plantillas que generan conversiones reales.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Integrar APIs de LLMs en producción',
                'description'      => 'OpenAI, Anthropic, Gemini: streaming, gestión de costes, rate limits y fallbacks para apps que usan IA.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior backend engineer con experiencia en integrar APIs de modelos de lenguaje de gran tamaño en aplicaciones de producción. Tu misión es ayudarme a construir una integración robusta, económica y mantenible que no se rompa cuando la API falla, cuando el tráfico crece o cuando el proveedor cambia los precios.

## Mi contexto técnico

- Lenguaje y framework: [LENGUAJE / FRAMEWORK]
- Proveedor(es) de LLM que uso o planeo usar: [OpenAI / Anthropic / Google Gemini / Mistral / otro]
- Caso de uso principal: [generación de texto / summarization / clasificación / chat / extracción de datos / RAG / agente]
- Volumen esperado: [< 100 requests/día / 100-10K / > 10K]
- Presupuesto mensual para APIs de LLM: [N€]
- Mayor problema actual: [costes / latencia / rate limits / calidad inconsistente / sin fallback]

---

## 1. Arquitectura de la capa de integración con LLMs

Diseña la arquitectura de la capa de integración con LLMs que separa la lógica de negocio del proveedor concreto:

**El patrón LLM Gateway**
- Por qué no deberías llamar a la API de OpenAI directamente desde tu lógica de negocio.
- Cómo diseñar una capa de abstracción que te permita cambiar de proveedor sin tocar el código de producto.
- Interfaz común para diferentes proveedores: OpenAI, Anthropic, Google, Mistral.

**Configuración por entorno**
- Cómo gestionar diferentes modelos para dev, staging y producción (el modelo barato para dev, el bueno para producción).
- Variables de entorno para API keys, URLs y configuraciones de modelo.
- Cómo rotar las API keys sin downtime.

---

## 2. Streaming: la experiencia de usuario que más importa

Los usuarios abandonan si ven un spinner durante 10 segundos. El streaming es obligatorio:

**Implementación de streaming por proveedor**
Muestra el código para implementar streaming correctamente en mi lenguaje para:
- OpenAI (GPT-4o, o1).
- Anthropic (Claude 3.5 Sonnet).
- Google (Gemini 1.5 Pro).

**Streaming en el frontend**
- Cómo conectar el streaming del backend al frontend usando Server-Sent Events (SSE) o WebSockets.
- Gestión del estado durante el streaming: cómo mostrar el texto mientras llega sin que la UI parpadee.
- Qué hacer cuando el stream se interrumpe a mitad.

---

## 3. Gestión de costes: cómo no tener una sorpresa en la factura

**Entender el modelo de precios**
- Input tokens vs. output tokens: por qué el coste de salida es 3-5x el de entrada.
- Cómo calcular el coste estimado de mi caso de uso antes de lanzar.
- Prompt caching de Anthropic: cómo ahorrar hasta un 90% en prompts repetitivos con contexto largo.

**Límites de gasto y alertas**
- Cómo configurar alertas de gasto en OpenAI y Anthropic antes de llegar al límite.
- Implementar un presupuesto por usuario / por tenant para evitar abusos.
- Cómo registrar el consumo de tokens por request para auditoría y optimización.

**Optimización de prompts para reducir tokens**
- Técnicas para reducir el tamaño del prompt sin perder calidad.
- Cuándo usar un modelo más barato y cuándo vale la pena pagar por el mejor.
- Few-shot vs. zero-shot: el impacto en calidad y coste.

---

## 4. Rate limits, reintentos y fallbacks

Las APIs de LLMs tienen límites de requests por minuto y por día. Tu app debe sobrevivir a eso:

**Gestión de rate limits**
- Cómo implementar un rate limiter en el cliente que respeta los límites de la API.
- Exponential backoff con jitter: la estrategia de reintento que no empeora el problema.
- Cola de requests con prioridad para no perder requests cuando hay picos de tráfico.

**Circuit breaker pattern**
- Qué es un circuit breaker y por qué es obligatorio cuando dependes de una API externa.
- Cómo implementarlo para detectar cuando la API está degradada y dejar de bombardearla.

**Fallback a proveedor alternativo**
- Cómo configurar un fallback automático a Anthropic si OpenAI falla (o viceversa).
- Cómo gestionar las diferencias en el formato de respuesta entre proveedores.
- El trade-off entre latencia del fallback y consistencia de la respuesta.

---

## 5. Observabilidad: log, monitor y debug de las llamadas a LLMs

Sin observabilidad no puedes mejorar ni detectar problemas:

**Qué registrar de cada llamada**
- Prompt (o hash del prompt si hay PII), modelo, tokens de entrada/salida, latencia, coste, éxito/error.
- Cómo anonimizar los datos del usuario antes de logearlos.

**Herramientas de LLM observability**
- LangSmith, Langfuse, Helicone, Braintrust: comparación para mi caso de uso.
- Cuándo implementar observabilidad propia vs. usar una herramienta externa.

**Alertas operativas**
- Alerta de latencia p99 > umbral.
- Alerta de tasa de error > 1%.
- Alerta de coste diario > umbral.

---

## 6. Seguridad: lo que no puedes ignorar

- Cómo evitar prompt injection: el usuario que intenta hacer que tu app haga cosas que no debe.
- Validación del output: por qué nunca debes ejecutar código o llamar a funciones basado en output de LLM sin validación.
- PII en los prompts: qué datos de usuario no deben llegar nunca a la API del proveedor.

---

Empieza con mi contexto técnico. Dame primero el patrón de abstracción LLM Gateway en mi lenguaje y luego la implementación de streaming para mi proveedor principal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integrar APIs de LLMs en producción con streaming, gestión de costes, rate limits y fallbacks robustos.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Motion design para UI',
                'description'      => 'Microinteracciones, transiciones y animaciones que hacen más intuitivo el producto sin añadir ruido visual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un motion designer especializado en interfaces de usuario. Tu misión es enseñarme a diseñar animaciones y transiciones que mejoren la usabilidad y la percepción de calidad del producto, siguiendo los principios de diseño de movimiento de Google, Apple y los mejores productos digitales actuales.

## Mi contexto

- Tipo de producto: [web app / mobile app / desktop / marketing site]
- Stack técnico: [React + Framer Motion / Vue + GSAP / CSS puro / React Native / Flutter / otro]
- Nivel de experiencia en motion design: [ninguno / básico (conozco CSS transitions) / intermedio / avanzado]
- Mayor problema actual: [las animaciones se ven baratas / no sé dónde añadir movimiento / las animaciones ralentizan la app / no sé qué animar]
- Referencia de motion design que admiro: [nombre de app o URL]

---

## 1. Los principios del buen motion design en UI

Antes de animar nada, interioriza estos principios:

**El movimiento comunica, no decora**
- Cada animación debe tener una razón funcional: orientar al usuario, confirmar una acción, mostrar jerarquía o dar feedback.
- Si no puedes explicar por qué esta animación ayuda al usuario, no la añadas.

**Los 12 principios de animación aplicados a UI**
Explica los más relevantes para interfaces digitales:
- Squash and stretch: cómo aplicarlo sutilmente en elementos que aparecen o desaparecen.
- Anticipation: cómo preparar al usuario para lo que va a ocurrir.
- Follow-through y overlapping: por qué las animaciones que terminan bruscamente parecen de mala calidad.
- Ease in / ease out: las curvas de velocidad que hacen que el movimiento parezca natural.

**Los tres errores más comunes en motion design de UI**
1. Animaciones demasiado lentas (> 400ms para la mayoría de transiciones).
2. Animar todo en lugar de animar lo que importa.
3. Ignorar a los usuarios con sensibilidad al movimiento (prefers-reduced-motion).

---

## 2. Las microinteracciones que más impacto tienen

Prioriza las animaciones con mayor retorno:

**Feedback de acción**
- El botón que cambia de estado cuando el usuario hace clic: loading / success / error.
- Ejemplo de implementación en CSS + JavaScript / Framer Motion.
- Por qué el feedback visual reduce la ansiedad del usuario y aumenta la confianza.

**Transiciones de navegación**
- Cómo comunicar la jerarquía de pantallas con movimiento: drill-down vs. lateral vs. modal.
- La diferencia entre una transición de página correcta y una que desorienta.
- Implementación en React con Framer Motion y en Vue con GSAP.

**Estados vacíos y carga**
- Skeleton screens vs. spinners: cuándo usar cada uno y por qué los skeleton screens reducen la percepción de espera.
- Cómo animar el skeleton screen para que no parezca estático.
- El estado de éxito que celebra la acción del usuario sin ser excesivo.

**Tooltips y popovers**
- La animación de entrada y salida que parece natural: escala + opacidad + dirección correcta.
- Valores recomendados de duración y easing.

---

## 3. Transiciones de página y layout

**Single Page Applications**
- Cómo implementar transiciones entre rutas que no rompan la percepción de continuidad.
- Shared element transitions: cómo un elemento "viaja" de una pantalla a otra (la tarjeta que se convierte en la pantalla de detalle).
- Cuándo una transición de página simple (fade) es mejor que una compleja.

**Animaciones de lista**
- Cómo animar la aparición de items en una lista sin que sea mareante.
- Stagger animations: el efecto de cascada que comunica orden y relación.
- Cómo animar la reordenación de items (drag and drop) de forma que el usuario entienda qué está pasando.

---

## 4. Valores y tokens de movimiento

Define los tokens de movimiento del design system para que las animaciones sean consistentes:

**Duraciones**
- Micro (50-100ms): hover, focus, checkboxes.
- Corto (100-200ms): tooltips, dropdowns pequeños.
- Medio (200-300ms): modales, popovers, transiciones de card.
- Largo (300-500ms): transiciones de página, animaciones complejas.

**Curvas de easing**
- ease-out: para elementos que aparecen (entran rápido, se frenan).
- ease-in: para elementos que desaparecen (empiezan despacio, salen rápido).
- ease-in-out: para elementos que se mueven dentro de la pantalla.
- spring: para interacciones físicas (drag, throw, bounce).

---

## 5. Accesibilidad del movimiento

- La media query prefers-reduced-motion: cómo implementarla correctamente para que la app sea usable para personas con vestibular disorder.
- Qué animaciones eliminar vs. cuáles simplificar cuando el usuario ha activado reducir el movimiento.
- Cómo testear tu producto con reduced-motion activado.

---

Empieza con mi contexto. Luego dame los 5 ejemplos de microinteracción más importantes para mi tipo de producto con código de implementación en mi stack técnico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implementar animaciones y microinteracciones que mejoran la usabilidad y la percepción de calidad del producto.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Social selling en LinkedIn',
                'description'      => 'Convierte tu actividad orgánica en LinkedIn en un canal predecible de generación de oportunidades comerciales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en social selling con experiencia en ayudar a profesionales de ventas B2B a convertir LinkedIn en su canal de generación de pipeline más consistente. Tu misión es ayudarme a construir un sistema de social selling que genere oportunidades de forma predecible sin parecer vendedor ni spammer.

## Mi contexto de ventas

- Sector en el que vendo: [SECTOR]
- Tipo de cliente (ICP): [puesto del decisor, tamaño de empresa, industria]
- Ticket promedio: [N€]
- Ciclo de venta: [< 1 mes / 1-3 meses / > 3 meses]
- Presencia actual en LinkedIn: [< 500 / 500-2000 / 2000-10000 / > 10000 seguidores]
- Mayor problema con LinkedIn: [no sé qué publicar / mis mensajes directos no reciben respuesta / tengo seguidores pero no leads / no tengo tiempo]

---

## 1. La diferencia entre social selling y spam en LinkedIn

El 95% de lo que se hace en LinkedIn como "social selling" es spam disfrazado. Explica:

- La regla 4-1-1: por cada post de venta, publica 4 de valor y 1 de interacción.
- Por qué el contenido que genera leads no habla de tu producto sino del problema de tu cliente.
- La diferencia entre una conexión de calidad y un número de conexiones.
- Por qué el SSI (Social Selling Index) de LinkedIn es una métrica útil pero no suficiente.

---

## 2. El perfil de LinkedIn como landing page de ventas

Antes de publicar nada, optimiza el perfil:

**Headline**
- La fórmula: [A quién ayudo] + [qué resultado consiguen] + [cómo].
- Ejemplo para un consultor de transformación digital: "Ayudo a directores de operaciones de pymes industriales a reducir el tiempo de cierre mensual en un 60% implementando ERP + automatizaciones sin necesidad de contratar consultoras caras."
- Crea 3 versiones de headline para mi perfil.

**About / Extracto**
- La estructura que convierte: gancho / problema del cliente / cómo lo resuelvo / prueba social / CTA.
- Por qué hablar de ti mismo en el about es el error más común.

**Sección de experiencia**
- Cómo reescribir cada puesto para hablar de impacto, no de responsabilidades.
- Cómo usar los logros cuantitativos para generar credibilidad.

**Proof social**
- Cómo pedir recomendaciones que no parezcan genéricas.
- Cómo usar los "Featured" para mostrar el mejor contenido y las mejores pruebas sociales.

---

## 3. La estrategia de contenido que genera pipeline

**Los 5 tipos de post que más generan leads en B2B**
1. Caso de éxito con datos reales del cliente (con o sin nombre, según el acuerdo).
2. Post de opinión contraria sobre una práctica común en el sector.
3. Lección aprendida de un fracaso propio.
4. Análisis de una tendencia del sector con perspectiva propia.
5. Post educativo que resuelve un problema pequeño del ICP en 5 puntos.

Para cada tipo: estructura recomendada, gancho de apertura, longitud óptima y CTA.

**Calendario de publicación**
- Frecuencia recomendada: 3-5 posts por semana.
- Mejores días y horas para tu sector (con matices).
- Cómo usar Claude para generar ideas de contenido a partir de las conversaciones con clientes.

---

## 4. El outreach que recibe respuesta

**La secuencia de warm-up antes del mensaje directo**
1. Seguir al prospecto.
2. Interactuar con su contenido de forma genuina (comentarios de valor, no "¡gran post!").
3. Conectar con un mensaje de conexión personalizado.
4. Esperar a que acepte y publicar 1-2 veces más antes del primer DM.
5. El primer DM: no vender, abrir conversación.

**El primer mensaje directo que recibe respuesta**
- La fórmula: [observación específica sobre su empresa o contenido] + [conexión con algo relevante para ellos] + [pregunta de bajo compromiso].
- 3 ejemplos de primer mensaje para mi ICP.
- Por qué los mensajes de más de 3 frases casi nunca reciben respuesta.

**Secuencia de seguimiento sin ser pesado**
- Touchpoint 1: DM con valor (un artículo, un insight, un recurso relevante para su sector).
- Touchpoint 2: comentario en un post suyo.
- Touchpoint 3: DM de cierre de ciclo ("si no es el momento correcto, lo entiendo").

---

## 5. Métricas del social selling en LinkedIn

- Tasa de aceptación de solicitudes de conexión.
- Tasa de respuesta a DMs.
- Tasa de conversión de DM a llamada.
- Pipeline atribuido a LinkedIn (MRR cerrado que empezó en LinkedIn).
- Tiempo de publicación vs. oportunidades generadas.

---

Empieza con mi contexto. Dame primero las 3 versiones de headline y el extracto optimizado para mi perfil, y luego el plan de contenido de las primeras 4 semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir LinkedIn en un canal predecible de generación de oportunidades comerciales B2B con social selling orgánico.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product
            [
                'profession_id'    => 5,
                'title'            => 'Community-led growth',
                'description'      => 'Construye una comunidad alrededor del producto que se convierte en el mejor canal de retención y expansión de revenue.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en community-led growth con experiencia en construir comunidades de usuarios que se convierten en el motor de crecimiento, retención y expansión de un producto. Tu misión es ayudarme a diseñar la estrategia de comunidad que tiene más sentido para mi producto y mi estadio de crecimiento.

## Contexto del producto y la comunidad

- Producto: [PRODUCTO]
- Estadio: [MVP / PMF / crecimiento / madurez]
- Usuarios activos: [N]
- ¿Existe ya alguna comunidad informal alrededor del producto? [sí — dónde / no]
- Objetivo principal de la comunidad: [reducir el churn / generar contenido UGC / conseguir nuevos usuarios / feedback de producto / soporte entre pares]
- Plataforma preferida: [Slack / Discord / Circle / comunidad propia / aún no lo sé]

---

## 1. Por qué el community-led growth es diferente al product-led growth

Explica las diferencias y por qué los mejores productos combinan ambos:
- PLG: el producto se vende solo por su valor intrínseco.
- CLG: la comunidad amplifica el valor del producto y genera retención que el producto solo no puede generar.
- Ejemplos de empresas con CLG exitoso: Figma, Notion, Airtable, Linear — qué hicieron bien.
- Cuándo tiene sentido invertir en comunidad (y cuándo no).

---

## 2. El diseño de la comunidad: qué plataforma, qué estructura

**Elección de la plataforma**
Para mi tipo de producto y audiencia, evalúa:
- **Slack**: mejor para comunidades de profesionales y equipos B2B. Limitaciones del plan gratuito.
- **Discord**: mejor para comunidades técnicas, gaming y audiencias jóvenes. Bots y automatizaciones.
- **Circle**: mejor para comunidades con contenido estructurado, cursos y eventos. Coste.
- **Comunidad propia** (Discourse, Vanilla): control total, coste de mantenimiento.

**Estructura de canales / grupos**
Diseña la arquitectura de canales para una comunidad de [N] miembros:
- Canales de bienvenida y normas.
- Canales de ayuda y soporte entre pares.
- Canales de showcase (los usuarios comparten lo que construyen con el producto).
- Canales de feedback y roadmap.
- Canales sociales / off-topic.

---

## 3. El lanzamiento de la comunidad: los primeros 100 miembros

Los primeros 100 miembros definen el tono, la cultura y la calidad de la comunidad para siempre. No improvises:

**Quiénes son los primeros 100**
- Los clientes más activos y más satisfechos, no todos los usuarios.
- Cómo identificarlos: NPS elevado, uso frecuente, contacto proactivo con el equipo.
- Cómo invitarlos de forma que se sientan especiales, no como cobayas.

**El onboarding del miembro nuevo**
- Mensaje de bienvenida personalizado del founder o PM.
- La primera pregunta que hace participar a todos: "¿Qué estás construyendo con [PRODUCTO]?"
- El rol de "miembro fundador" que crea pertenencia y exclusividad.

**Cómo generar las primeras conversaciones**
- La semana de lanzamiento: un tema de debate al día propuesto por el equipo.
- Cómo evitar el problema del "saloon vacío" (nadie habla porque nadie habla).

---

## 4. Los community managers que escalaban: roles y KPIs

**El community manager vs. el developer advocate**
- Cuándo necesitas uno vs. el otro.
- Cómo el PM puede hacer de community manager en early stage sin que sea un trabajo extra.

**Programa de champions / embajadores**
- Cómo identificar a los 5-10 usuarios más activos y convertirlos en líderes de la comunidad.
- Qué incentivos ofrecer: acceso anticipado a features, badge, llamadas con el equipo de producto.
- Cómo estos champions generan contenido, ayudan a otros usuarios y traen nuevos miembros.

**KPIs de la comunidad**
- Miembros activos semanales (WAU) — el más importante.
- Tasa de retención de miembros a 30 y 90 días.
- Posts por miembro activo.
- Ratio de preguntas respondidas por la comunidad vs. por el equipo.
- Churn de usuarios de comunidad vs. usuarios que no son miembros.

---

## 5. Cómo la comunidad alimenta el producto

El mayor valor de una comunidad no es el engagement: es la inteligencia de mercado:
- Cómo estructurar el canal de feedback para que sea accionable.
- Cómo hacer votaciones de roadmap que generen expectativa sin comprometer fechas.
- Cómo comunicar los cambios del producto a la comunidad antes que a nadie.
- El "beta channel": cómo usar la comunidad para testear features antes del lanzamiento.

---

Empieza con mi contexto. Dame primero la recomendación de plataforma con justificación y el plan de lanzamiento de los primeros 100 miembros adaptado a mi producto y estadio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir una comunidad de usuarios que se convierte en motor de retención, expansión y feedback de producto.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del equipo en entorno híbrido',
                'description'      => 'Cultura, comunicación y equidad cuando parte del equipo trabaja en oficina y otra parte en remoto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de equipos híbridos con experiencia en construir culturas de equipo equitativas para organizaciones donde parte del equipo trabaja en oficina y otra parte en remoto. Tu misión es ayudarme a diseñar las políticas, herramientas y rituales que hacen que el modelo híbrido funcione de verdad.

## Contexto de mi equipo

- Tamaño del equipo: [N personas]
- Distribución actual: [N% en oficina / N% en remoto / N% mixto]
- Sector: [SECTOR]
- Tipo de trabajo: [individual / colaborativo / mixto]
- Mayor problema en el modelo híbrido actual: [la gente en remoto se siente excluida / falta de comunicación / dificultad para colaborar / cultura débil / inequidad en oportunidades de visibilidad]
- Herramientas actuales: [Slack / Teams / Notion / Jira / otra]

---

## 1. Los principios del modelo híbrido equitativo

El riesgo más grande del híbrido no es la comunicación: es la inequidad. Explica:

**Proximity bias: el enemigo silencioso del híbrido**
- Qué es el proximity bias: la tendencia inconsciente de los managers a favorecer a quien ven en la oficina.
- Cómo afecta a las decisiones de promoción, asignación de proyectos y reconocimiento.
- Las 5 políticas que neutralizan el proximity bias.

**El principio "remote first" aunque no seas full remote**
- Por qué diseñar todo pensando primero en el remoto mejora la experiencia de todos.
- Qué significa en la práctica: cómo tomar notas, cómo hacer las reuniones, cómo documentar las decisiones.

---

## 2. La política híbrida que todos entiendan

Define la política de trabajo híbrido de forma clara y justa:

**¿Cuántos días en oficina?**
- Cómo decidir el número de días obligatorios en oficina según el tipo de rol y trabajo.
- Flexibilidad vs. previsibilidad: por qué necesitas un mínimo de estructura para que el híbrido funcione.
- Cómo gestionar excepciones sin que se perciban como favoritismos.

**¿Quién puede trabajar desde dónde?**
- Criterios para definir qué roles pueden ser 100% remoto, cuáles requieren presencia y cuáles son flexibles.
- Cómo manejar solicitudes de trabajo desde otro país sin abrir una caja de Pandora legal y fiscal.

**Horario y disponibilidad**
- Ventana de solapamiento obligatoria: las horas en las que todos deben estar disponibles.
- Cómo gestionar los husos horarios sin que los que están más lejos siempre salgan perjudicados.

---

## 3. Los rituales que construyen cultura híbrida

La cultura no se construye con valores en la pared sino con rituales que se repiten:

**Reuniones de equipo**
- La regla de la cámara en las reuniones híbridas.
- Por qué las reuniones con gente en sala + gente en remoto siempre perjudican al remoto, y cómo arreglarlo.
- El standup que funciona en híbrido: asíncrono vs. síncrono.

**Rituales de conexión social**
- El café virtual: cómo organizar conversaciones 1:1 aleatorias entre miembros del equipo (Donut en Slack).
- El evento de equipo semestral: cómo organizar encuentros presenciales que valgan la pena para todos.
- El canal de celebración: cómo reconocer logros de forma equitativa entre presenciales y remotos.

**Documentación como cultura**
- Por qué en un equipo híbrido la comunicación escrita es tan importante como la oral.
- Los documentos que no pueden faltar: decisiones (ADR / RFC), proyectos, onboarding, políticas.
- Cómo evitar que la documentación quede desactualizada.

---

## 4. Herramientas y stack para equipos híbridos

Recomienda el stack de herramientas para un equipo de mi tamaño:

**Comunicación**
- Asíncrono: Slack / Teams / Linear — cuándo es suficiente el texto y cuándo necesitas vídeo.
- Síncrono: Zoom / Google Meet / Huddle — configuración óptima para reuniones híbridas.
- Vídeo asíncrono: Loom para explicaciones que no merecen una reunión.

**Gestión del trabajo**
- Linear / Jira / Asana / Notion: criterios de selección para mi tipo de equipo.
- Cómo gestionar la visibilidad del trabajo de forma equitativa entre presenciales y remotos.

**Espacios de colaboración**
- Figma, Miro, FigJam: para talleres y sesiones de trabajo colaborativas en híbrido.
- Cómo facilitar un workshop híbrido que no sea un fracaso para los que están en remoto.

---

## 5. Métricas del modelo híbrido

Define las métricas que te dicen si el modelo híbrido está funcionando:
- Employee engagement score: diferencial entre presenciales y remotos (debe ser < 5 puntos).
- Participación en reuniones: ¿contribuyen por igual presenciales y remotos?
- Acceso a oportunidades: ¿las promociones se distribuyen equitativamente?
- Rotación: ¿la gente en remoto tiene más churn que la presencial?

---

Empieza con mi contexto. Dame primero el diagnóstico del estado actual y las 3 acciones de mayor impacto que puedo implementar esta semana para mejorar la equidad en mi modelo híbrido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un modelo de trabajo híbrido equitativo con las políticas, rituales y herramientas correctas.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas personales del empresario',
                'description'      => 'Separa las finanzas personales de las empresariales y construye un plan de riqueza personal más allá del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de finanzas personales especializado en empresarios y autónomos. Tu misión es ayudarme a construir un plan financiero personal que esté correctamente separado del negocio, que reduzca mi exposición fiscal de forma legal y que construya patrimonio más allá de lo que vale la empresa.

## Mi situación personal y empresarial

- Forma jurídica: [autónomo / SL / SA / otra]
- País: [España / México / Argentina / otro]
- Ingresos anuales de la empresa: [N€]
- Salario que me pago como empresario: [N€/mes]
- Patrimonio personal actual: [solo la empresa / casa propia / inversiones / ahorros]
- Mayor preocupación financiera personal: [no tengo plan de pensiones / toda mi riqueza está en la empresa / no sé si me pago bien / no tengo separación entre empresa y personal / no entiendo la fiscalidad de ser empresario]

---

## 1. La separación entre empresa y finanzas personales: por qué es crítica

El mayor error financiero de los empresarios es mezclar empresa y personal. Explica:

**Los riesgos de mezclar**
- Riesgo legal: en caso de problemas de la empresa, el patrimonio personal puede estar expuesto.
- Riesgo de liquidez: usar el dinero de la empresa como caja personal crea problemas de tesorería que pueden matar el negocio.
- Riesgo fiscal: la Agencia Tributaria vigila las operaciones entre empresa y socio.

**Cómo separar correctamente**
- Cuenta corriente personal separada de la empresarial: la norma básica que muchos incumplen.
- El salario del empresario: cómo fijarlo basándose en el mercado, las necesidades personales y la situación de la empresa.
- Los dividendos: cuándo repartirlos y cuál es su fiscalidad vs. la del salario.
- Los gastos del autónomo: qué es deducible y qué no — y por qué abusar de esto es un error.

---

## 2. Cuánto pagarme: la decisión que más afecta a tu bienestar

**El salario mínimo del empresario**
- Cómo calcular el salario mínimo para cubrir gastos personales sin tocar la empresa de forma impropia.
- El error de pagarse muy poco para "reinvertir todo en la empresa" — cuándo tiene sentido y cuándo es un error.

**El modelo de retribución óptima para un empresario español**
- La combinación de salario + dividendos que minimiza la carga fiscal total.
- Cuándo tiene sentido usar una retribución en especie (coche de empresa, seguro médico, formación).
- El salario del cónyuge colaborador: ventajas fiscales y limitaciones.

---

## 3. El plan de pensiones del empresario

Los autónomos y empresarios carecen de pensión pública suficiente. Diseña el plan:

**Opciones de ahorro para la jubilación**
- Plan de pensiones individual: límites de aportación y deducción fiscal en España.
- Plan de pensiones de empresa (PPC): cómo usarlo para reducir el beneficio empresarial y ahorrar a la vez.
- PIAS (Plan Individual de Ahorro Sistemático): cuándo tiene sentido.
- Inversión directa (cartera de fondos indexados): cuándo es mejor que el plan de pensiones.

**Cuánto necesito ahorrar para la jubilación**
- La regla del 25x: cuánto capital necesito para retirarme con una renta determinada.
- Cómo calcular mi número de jubilación y cuánto tengo que ahorrar mensualmente para llegar.
- La estrategia de inversión según mi horizonte temporal.

---

## 4. Construir patrimonio más allá del negocio

La empresa es un activo que puede desaparecer. Construye patrimonio diversificado:

**Inversión en activos financieros**
- Fondos indexados (S&P 500, MSCI World): la opción de menor coste y mayor eficiencia para el empresario que no quiere ser inversor profesional.
- Cómo automatizar las aportaciones mensuales para no tener que tomar decisiones.
- El error de invertir en acciones individuales cuando tienes una empresa que depende de ti.

**Inversión inmobiliaria**
- Cuándo tiene sentido comprar vs. alquilar tanto para la vivienda habitual como para inversión.
- La sociedad de tenencia de inmuebles: ventajas y complejidad.

**Seguro de vida y de invalidez**
- Por qué el empresario necesita estos seguros más que el empleado.
- Cómo calcular el capital asegurado mínimo para proteger a tu familia.

---

## 5. El plan financiero personal del empresario: estructura

Dame un plan financiero personal mensual con:
- Ingresos: salario + dividendos planificados + otros.
- Gastos fijos personales.
- Ahorro e inversión: importe y vehículo.
- Fondo de emergencia personal (separado del de la empresa): cuántos meses de gastos.
- Revisión anual: qué revisar y cuándo.

---

Empieza con mi situación personal y empresarial. Luego dame el modelo de retribución óptima para mi caso y el plan de ahorro mensual adaptado a mis ingresos y objetivos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Separar las finanzas personales de las empresariales y construir un plan de riqueza personal sólido como empresario.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos internacionales',
                'description'      => 'Ley aplicable, jurisdicción, fuerza mayor y cómo gestionar la incertidumbre legal en acuerdos cross-border.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en comercio internacional y contratos cross-border. Tu misión es ayudarme a entender los elementos críticos de un contrato internacional, las cláusulas que protegen mis intereses y los riesgos que debo gestionar cuando hago negocio con contrapartes en jurisdicciones distintas.

## Contexto de mis operaciones internacionales

- Tipo de contrato más frecuente: [compraventa de bienes / prestación de servicios / licencia de software / distribución / joint venture / otro]
- Jurisdicciones involucradas: [mi país] + [país de la contraparte]
- Valor típico de los contratos: [N€ / $N]
- Mayor riesgo en mis operaciones internacionales: [impago / incumplimiento / riesgo regulatorio / diferencias culturales en la interpretación / disputas sobre jurisdicción]
- ¿Tengo asesor legal local en el país de la contraparte? [sí / no]

---

## 1. Las cláusulas que no pueden faltar en un contrato internacional

**Ley aplicable**
Esta es la cláusula más importante y más ignorada. Explica:
- Qué significa "ley aplicable" y por qué importa (cada sistema legal tiene reglas distintas para incumplimiento, daños, prescripción).
- Criterios para elegir la ley aplicable: ¿la de mi país, la de la contraparte o una neutral (ej. inglesa o neoyorquina)?
- Convención de Viena (CISG): qué es, cuándo se aplica automáticamente y cuándo conviene excluirla.
- Cómo redactar la cláusula de ley aplicable correctamente.

**Jurisdicción y resolución de disputas**
- Tribunales ordinarios vs. arbitraje internacional: cuándo usar cada uno.
- Las cámaras de arbitraje más usadas: ICC, LCIA, AAA, CAM Madrid — criterios de elección.
- La cláusula de arbitraje que no deja lagunas: sede, idioma, número de árbitros, ley aplicable al procedimiento.
- Medidas cautelares en el arbitraje: cómo protegerse antes de que el árbitro dicte laudo.

**Fuerza mayor**
- La definición de fuerza mayor que protege sin ser tan amplia que la contraparte abuse de ella.
- Eventos que deben incluirse: pandemia, guerra, desastres naturales, cambios regulatorios.
- Obligaciones durante la fuerza mayor: aviso, mitigación, plazo máximo de suspensión, derecho de terminación.
- La diferencia entre fuerza mayor y hardship (excesiva onerosidad sobrevenida).

---

## 2. Riesgo de impago internacional: cómo protegerse

**Garantías de pago**
- Carta de crédito (LC): cuándo usarla, tipos (a la vista, standby) y coste.
- Aval bancario a primera demanda: cuándo es mejor que la carta de crédito.
- Seguro de crédito a la exportación: coberturas y proveedores en España y Latam.

**Términos de pago que reducen el riesgo**
- Por qué "30 días tras entrega" es arriesgado en operaciones internacionales.
- Las condiciones de pago más seguras según el perfil de riesgo de la contraparte.
- Cómo negociar un anticipo sin que sea un bloqueador de la negociación.

**Retención de título**
- Cláusula de reserva de dominio en compraventa de bienes: cuándo es ejecutable y cuándo no según la jurisdicción.

---

## 3. Riesgo regulatorio y compliance internacional

**Control de exportaciones y sanciones**
- Qué son las listas de sanciones (OFAC, UE) y por qué debes verificar a tu contraparte antes de firmar.
- Qué ocurre si vendes a una empresa que luego resulta estar sancionada.
- Controles de exportación de tecnología (EAR, ITAR): cuándo aplican y qué hacer.

**Anti-soborno y compliance (FCPA, UK Bribery Act, Ley 1/2023 española)**
- Qué cláusula de anti-corrupción incluir en contratos con agentes comerciales o distribuidores en mercados de riesgo.
- Debida diligencia mínima sobre la contraparte antes de firmar.

---

## 4. Gestión de disputas sin llegar al arbitraje

El 95% de las disputas se resuelven antes de llegar al árbitro. Diseña el proceso:
- Negociación directa: quién, en qué plazo y con qué documentación.
- Mediación: cuándo y cómo proponerla sin que parezca debilidad.
- Escalado al arbitraje: cómo preservar pruebas y documentación desde el primer momento de la disputa.

---

## 5. Checklist pre-firma de un contrato internacional

Define los 10 puntos que debes verificar antes de firmar cualquier contrato internacional:
1. ¿La contraparte tiene capacidad legal para contratar en su jurisdicción?
2. ¿La ley aplicable está definida explícitamente?
[...continúa con los 10]

---

Empieza con mi contexto. Dame primero las cláusulas críticas adaptadas a mi tipo de contrato y jurisdicciones, y el checklist pre-firma completo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Proteger los intereses en contratos internacionales: ley aplicable, arbitraje, fuerza mayor y garantías de pago.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 9 — CS
            [
                'profession_id'    => 9,
                'title'            => 'Voice of the Customer sistemático',
                'description'      => 'Recoge, analiza y convierte el feedback de clientes en mejoras de producto de forma escalable y continua.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Voice of the Customer (VoC) con experiencia en implementar sistemas de feedback estructurado en empresas de producto. Tu misión es ayudarme a diseñar un proceso completo de recogida, análisis y activación del feedback de clientes que sea escalable y que se traduzca en decisiones de producto concretas.

## Contexto de mi organización

- Tipo de producto: [SaaS / ecommerce / marketplace / aplicación / servicio]
- Número de clientes activos: [N]
- Canales de feedback actuales: [ninguno estructurado / NPS / entrevistas ad hoc / soporte / redes sociales]
- Equipo que gestiona el feedback: [solo / CS + producto / equipo de VoC dedicado]
- Mayor problema con el feedback actual: [no lo recogemos sistemáticamente / lo recogemos pero no lo analizamos / lo analizamos pero no llega al equipo de producto / hay demasiado ruido]

---

## 1. El framework de VoC: los cuatro momentos del feedback

Define cuándo y cómo recoger feedback en cada momento del ciclo de vida del cliente:

**Feedback transaccional (just-in-time)**
- Inmediatamente después de una interacción clave: primera compra, primer uso de una feature, resolución de un ticket de soporte.
- Herramientas: survey in-app, email post-interacción, CSAT.
- Duración máxima: 1-2 preguntas. Por qué más de 2 preguntas destruye la tasa de respuesta.

**Feedback relacional (periódico)**
- NPS trimestral o semestral: la métrica de lealtad que permite comparar entre cohortes y en el tiempo.
- Customer effort score (CES): para procesos específicos de alto esfuerzo (onboarding, configuración).
- Cómo hacer el follow-up con detractores de NPS en menos de 48 horas.

**Feedback exploratorio (cuando quiero aprender)**
- Entrevistas de usuario: cuándo hacerlas, con quién y qué preguntas hacer.
- Focus groups vs. entrevistas individuales: cuándo usar cada formato.
- Diary studies para entender el uso en contexto real.

**Feedback no solicitado (escucha activa)**
- Redes sociales: monitorización de menciones y conversaciones sobre el producto.
- Reseñas en G2, Capterra, App Store, Google Play: cómo extraer insights de forma sistemática.
- Tickets de soporte: el canal de feedback más infrautilizado y más valioso.

---

## 2. El sistema de análisis: de datos a insights

Recoger feedback sin analizarlo es peor que no recogerlo (crea una expectativa que luego se incumple). Diseña el sistema:

**Taxonomía de feedback**
- Cómo crear una categorización de temas que permita comparar el feedback a lo largo del tiempo.
- Las categorías típicas: usabilidad / funcionalidad / rendimiento / precio / soporte / onboarding.
- Cómo etiquetar de forma consistente cuando hay múltiples personas clasificando.

**Análisis con IA**
- Prompt para analizar 100 respuestas de NPS y extraer los temas más frecuentes.
- Cómo usar embeddings para agrupar feedback similar sin leerlo todo manualmente.
- Cómo detectar cambios en el sentimiento general entre trimestres.

**El reporte mensual de VoC**
Diseña el reporte que llega al equipo de producto cada mes:
- Métricas cuantitativas: NPS, CSAT, CES — evolución vs. mes anterior.
- Temas cualitativos: top 5 temas positivos y top 5 temas de mejora.
- Citas literales: las 3 citas de cliente que mejor representan el sentimiento general.
- Recomendaciones: las 3 acciones de producto o proceso con mayor impacto potencial.

---

## 3. De insight a acción: cómo el feedback llega al roadmap

El mayor problema de los programas de VoC es que el feedback se recoge y muere en un spreadsheet. Diseña el proceso de activación:

**El canal de VoC en el equipo de producto**
- Cómo integrar el feedback en el proceso de discovery de producto.
- Quién en el equipo es responsable de revisar el feedback semanal.
- Cómo cuantificar el impacto de resolver un problema de feedback (cuántos clientes lo tienen, qué impacto tiene en el churn o en la expansión).

**Cerrando el loop con el cliente**
- Cómo comunicar al cliente que su feedback ha llevado a un cambio real: el "you said, we did".
- Cuándo comunicar el cambio (antes de lanzar o después) y en qué canal.
- Por qué cerrar el loop aumenta la tasa de respuesta en futuras encuestas.

---

## 4. Métricas del programa de VoC

Define los KPIs que miden si el programa de VoC está funcionando:
- Tasa de respuesta por canal y segmento de cliente.
- Cobertura: % de clientes que han dado feedback en los últimos 90 días.
- Tiempo desde feedback hasta acción: cuántos días tarda un insight en llegar al roadmap.
- Impacto en métricas de negocio: correlación entre mejoras basadas en VoC y churn / NPS / expansión.

---

Empieza con mi contexto. Diseña el sistema de VoC completo para mi tipo de producto, incluyendo los canales de recogida, el sistema de análisis y el proceso de activación en el roadmap.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar un sistema de Voice of the Customer que convierta el feedback en mejoras de producto de forma escalable.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'De empleado a freelance',
                'description'      => 'El plan de transición: cuándo dar el salto, cómo prepararse financieramente y qué esperar los primeros 6 meses.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor especializado en ayudar a profesionales empleados a hacer la transición al trabajo independiente. Tu misión es ayudarme a evaluar si estoy listo para dar el salto, diseñar el plan de transición mínimo necesario y gestionar las expectativas reales de los primeros 6 meses.

## Mi situación actual como empleado

- Profesión / especialidad: [PROFESIÓN]
- Años de experiencia: [N]
- Salario neto actual: [N€/mes]
- Motivo para querer ser freelance: [más libertad / más ingresos / proyectos más interesantes / despido / otro]
- Red de contactos profesionales: [ninguna / pequeña pero sólida / amplia]
- Ahorros actuales: [menos de 3 meses de gastos / 3-6 meses / más de 6 meses]
- Tengo cargas familiares o hipoteca: [sí / no]
- Plazo que me doy para dar el salto: [lo antes posible / 3 meses / 6 meses / 1 año]

---

## 1. ¿Estoy listo? El test de readiness

Antes de dar el salto, evalúa tu situación con honestidad:

**Criterios de readiness**
Puntúa de 1 a 5 en cada dimensión:
- Experiencia y habilidades: ¿tienes al menos 3-5 años de experiencia en tu especialidad?
- Demanda de mercado: ¿hay empresas que paguen por lo que sabes hacer?
- Red de contactos: ¿tienes al menos 3 personas que podrían contratarte o recomendarte?
- Capacidad de venta: ¿puedes tener conversaciones comerciales sin sentirte incómodo?
- Estabilidad financiera: ¿tienes suficiente colchón para 6 meses sin ingresos?
- Tolerancia al riesgo: ¿puedes dormir bien si no tienes clientes el mes que viene?

**El resultado honesto**
- Si tienes < 15 puntos: qué trabajar antes de dar el salto.
- Si tienes 15-20 puntos: cuándo y cómo dar el salto.
- Si tienes > 20 puntos: por qué ya deberías haberlo hecho.

---

## 2. La preparación financiera: lo que nadie te dice

El mayor error al hacerse freelance es subestimar el tiempo hasta el primer cobro y los costes ocultos:

**El colchón financiero mínimo**
- Por qué 3 meses de gastos es insuficiente y 6 meses es el mínimo real.
- Cómo calcular tus gastos mensuales reales incluyendo los que ahora paga la empresa: seguridad social, herramientas, formación, equipo, seguros.

**La tarifa como freelance**
- Por qué tu tarifa debe ser al menos el doble de tu salario-hora como empleado.
- La fórmula: [gastos mensuales + margen de ahorro + vacaciones + formación + días sin facturar] / horas facturables mensuales.
- Cómo fijar la tarifa para el mercado español vs. el mercado internacional.

**Los costes ocultos del freelance**
- Cuota de autónomo / seguridad social: importes actuales y cómo funcionan los tramos.
- Impuestos trimestrales: cómo no quedarse sin liquidez cuando llega la declaración.
- Herramientas y software: lo que antes pagaba la empresa ahora lo pagas tú.
- Formación continua: lo que inviertes en ti mismo ya no lo paga nadie más.

---

## 3. El plan de transición en 6 pasos

**Paso 1: Validar la demanda antes de dejar el trabajo (meses -3 a 0)**
- Cómo hacer las primeras conversaciones comerciales mientras sigues empleado (sin violar el contrato).
- Cómo obtener el primer cliente o compromiso informal antes de dar el salto.
- La señal que confirma que puedes dar el salto: tener al menos un cliente con fecha de inicio.

**Paso 2: La salida ordenada (mes 0)**
- Cómo gestionar la baja del trabajo de forma que mantengas la relación con la empresa (puede ser tu primer cliente).
- Cómo comunicar el cambio a tu red de contactos sin parecer desesperado.
- Alta como autónomo: cuándo hacerla y qué trámites son urgentes.

**Paso 3: Los primeros clientes (meses 1-2)**
- Los 3 canales más rápidos para conseguir los primeros clientes: red de contactos, plataformas de freelance, LinkedIn.
- Cómo hacer las primeras propuestas: qué incluir y qué no.
- Por qué el primer cliente nunca paga lo que deberías cobrar — y qué hacer con eso.

**Paso 4: Estabilizar los ingresos (meses 3-4)**
- Cómo diversificar para no depender de un solo cliente.
- El modelo de retainer: cómo proponer trabajo recurrente a clientes puntuales.
- Cómo gestionar el tiempo entre proyectos sin perder dinero.

**Paso 5: Optimizar la operación (meses 4-5)**
- Facturación y cobros: cómo evitar los impagos y gestionar los plazos.
- Gestión del tiempo: la trampa de trabajar más horas que como empleado.
- Las herramientas mínimas para gestionar el negocio sin perder tiempo.

**Paso 6: Crecer (mes 6 en adelante)**
- Cuándo subir tarifas y cómo comunicarlo a los clientes actuales.
- Cuándo especializar vs. cuándo ampliar servicios.
- Cuándo considerar contratar o crear productos digitales.

---

## 4. Las expectativas reales de los primeros 6 meses

Lo que nadie te dice sobre el primer año como freelance:
- El mes 1 probablemente no cobrarás nada (o muy poco).
- La soledad y la falta de estructura son los mayores retos, no los clientes.
- La irregularidad de ingresos es normal pero hay que planificarla.
- El "feast or famine cycle": cómo evitar trabajar demasiado cuando tienes proyectos y quedarte sin nada cuando terminan.

---

Empieza con mi situación. Dame primero el test de readiness con mi puntuación y los 3 pasos más urgentes que debo dar en los próximos 30 días para estar listo para el salto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Planificar la transición de empleado a freelance con un plan financiero realista y una estrategia para los primeros clientes.',
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
