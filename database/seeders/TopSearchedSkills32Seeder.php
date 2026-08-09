<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills32Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'SEO programático: crea miles de páginas optimizadas que ranquean con contenido generado a escala',
                'description'       => 'Diseña una estrategia de SEO programático que genera cientos o miles de páginas optimizadas automáticamente a partir de datos estructurados. Con la arquitectura de clusters temáticos, las plantillas de páginas que evitan el contenido duplicado y el proceso de producción de contenido a escala que mantiene la calidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un SEO Specialist con experiencia diseñando e implementando estrategias de SEO programático para marketplaces, directorios y SaaS donde la creación masiva de páginas ha generado crecimientos de tráfico orgánico del 300-1000% en 6-12 meses.

Contexto:
- Tipo de negocio: [marketplace / directorio / SaaS con datos estructurados / ecommerce con muchos productos]
- Base de datos disponible: [describe los datos que tienes: ciudades, profesionales, productos, categorías, comparativas]
- Objetivo de tráfico: [N visitas orgánicas al mes en 12 meses]
- Estado actual del SEO: [sin SEO programático / primeras páginas generadas / queremos escalar]

## Estrategia de SEO Programático — [Empresa]

### 🏗️ La arquitectura de páginas programáticas que ranquean

**Los 3 tipos de páginas programáticas con mayor potencial:**
```
TIPO 1 — Páginas de localización + servicio:
"[Servicio] en [Ciudad]" → "Fontaneros en Madrid", "Abogados laborales en Barcelona"
Requiere: lista de servicios × lista de ciudades/barrios
Potencial: cientos de páginas con intent transaccional alto

TIPO 2 — Páginas de comparación:
"[Producto A] vs [Producto B]" → "Notion vs Obsidian", "HubSpot vs Salesforce"
Requiere: datos de N productos + template de comparación
Potencial: tráfico de alta intención de compra (Bottom of Funnel)

TIPO 3 — Páginas de datos y estadísticas:
"[Estadísticas de X en Y]" → "Estadísticas de ecommerce en España 2024"
Requiere: datos propios o de terceros estructurados
Potencial: backlinks naturales por ser la fuente del dato
```

**La arquitectura de clusters temáticos para evitar la canibalización:**
```
CLUSTER PRINCIPAL (Pillar Page):
→ "Guía completa de [categoría]" — 3.000-5.000 palabras
→ Ranquea para keywords de alto volumen y baja intención específica
→ Enlaza a todas las páginas programáticas del cluster

PÁGINAS PROGRAMÁTICAS (Spoke Pages):
→ Cada una ranquea para keywords long-tail específicas
→ Enlazan de vuelta al pillar page
→ Pueden enlazarse entre sí (misma ciudad, diferentes servicios)

REGLA ANTI-CANIBALIZACIÓN:
→ Una página por intent específico. Si tienes "fontaneros en Madrid" y "fontaneros urgentes en Madrid",
  son páginas diferentes con intent diferente. Correcta.
→ Si tienes "fontaneros en Madrid" y "mejor fontanero Madrid" con el mismo template,
  estás canibalizado — Google no sabe cuál mostrar.
```

### 📝 La plantilla de página programática que no es contenido duplicado

**El error que penaliza Google: el template idéntico con la variable cambiada:**
```
MAL (contenido thin o duplicado):
"Encuentra fontaneros en [CIUDAD]. Los mejores fontaneros de [CIUDAD] están aquí.
Servicios de fontanería en [CIUDAD] disponibles 24h."
→ Solo cambia la variable. Google lo detecta y no ranquea estas páginas.

BIEN (contenido genuinamente diferente por página):
→ Datos únicos de esa ciudad (número de profesionales, precio medio, tiempo de respuesta)
→ Reseñas reales geolocalizadas en esa ciudad
→ Preguntas frecuentes específicas de esa ciudad (IVA local, normativa municipal)
→ Información de barrios o zonas dentro de la ciudad
```

**La estructura de una página programática de calidad:**
```
H1: [Servicio] en [Ciudad] — [Propuesta de valor diferenciadora]

BLOQUE 1 — Datos únicos de esta localización:
→ N profesionales disponibles en [Ciudad]
→ Precio medio en [Ciudad]: €X-€Y (vs media nacional: €Z)
→ Tiempo de respuesta medio: X horas

BLOQUE 2 — Listado de profesionales/productos (el core de la página):
→ Los X mejores [profesionales] en [Ciudad] con filtros y ordenación

BLOQUE 3 — Preguntas frecuentes geolocalizadas:
→ FAQ específicas de esa ciudad/categoría (schema FAQ para rich snippets)

BLOQUE 4 — Contenido editorial único:
→ 200-400 palabras escritas o generadas con IA + revisión humana sobre [servicio] en [ciudad]

FOOTER INTERNO — Navegación al cluster:
→ [Servicio] en ciudades cercanas
→ Otros servicios en [Ciudad]
```

### ⚙️ El proceso de producción de contenido a escala con IA

**La cadena de producción que mantiene calidad a volumen:**
```
PASO 1 — Preparación de datos (la base de todo):
→ CSV o base de datos con todas las variables (ciudad, población, datos específicos)
→ Cuantos más datos únicos por fila, mejor el contenido generado

PASO 2 — Prompt plantilla para generación de contenido:
→ Un prompt por sección de la página
→ Variables insertadas desde la base de datos
→ Instrucciones de longitud, tono y datos a incluir

PASO 3 — Generación en lote:
→ API de Claude/GPT para generar el contenido en batch
→ Revisión de muestra aleatoria (10%) por un editor humano
→ Filtro automático de alucinaciones o datos incorrectos

PASO 4 — Publicación progresiva:
→ No publiques 10.000 páginas el día 1 — Google lo interpreta como spam
→ Publica 50-100 páginas/semana y monitorea indexación y rankings
→ Escala cuando la indexación y los rankings confirman que el proceso funciona

PASO 5 — Monitoreo y mejora continua:
→ Google Search Console: ¿qué páginas indexan? ¿qué keywords generan impresiones?
→ Páginas con mucha impresión pero bajo CTR → mejora el title y meta description
→ Páginas indexadas pero sin posición → mejora el contenido y añade más datos únicos
```

### 🔗 La estrategia de enlazado interno que distribuye autoridad

El sistema de enlazado interno entre páginas programáticas (breadcrumbs, enlaces de navegación por localización, enlaces de páginas relacionadas) que distribuye la autoridad de dominio hacia las páginas programáticas de mayor potencial y evita que sean páginas huérfanas sin señales de enlazado interno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'SEO programático, content at scale, páginas SEO programáticas, clusters temáticos, SEO a escala',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura orientada a eventos: event sourcing, CQRS y colas de mensajes con RabbitMQ y Kafka',
                'description'       => 'Diseña e implementa una arquitectura orientada a eventos que desacopla servicios, garantiza la consistencia eventual y escala sin cuellos de botella. Con los patrones de event sourcing y CQRS, la elección entre RabbitMQ, Kafka y Bull según el caso de uso y los errores más frecuentes al implementar sistemas de eventos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Software Architect con experiencia diseñando sistemas distribuidos orientados a eventos en producción con 10M-100M eventos/día, donde la migración de arquitecturas monolíticas a event-driven ha eliminado cuellos de botella críticos y desacoplado servicios que antes eran interdependientes.

Contexto:
- Stack tecnológico: [Node.js / Python / Java / Go / otro]
- Tipo de sistema: [monolito en crecimiento / microservicios / nuevo sistema desde cero]
- Volumen esperado de eventos: [N eventos/segundo o N eventos/día]
- El problema que quieres resolver: [desacoplamiento / escalabilidad / auditoría / consistencia / todo]

## Arquitectura Orientada a Eventos — [Sistema]

### 🧠 Los conceptos clave que debes tener claros antes de empezar

**Event-driven architecture en una frase:**
En lugar de que el servicio A llame directamente al servicio B, A publica un evento ("OrderPlaced") y B (y C y D) se suscriben y reaccionan a ese evento de forma independiente.

**Event Sourcing vs. Event-Driven Architecture (son cosas diferentes):**
```
EVENT-DRIVEN ARCHITECTURE:
→ Los servicios se comunican mediante eventos (mensajes asíncronos)
→ El estado se sigue almacenando en bases de datos normales
→ Los eventos son el canal de comunicación, no el almacenamiento del estado

EVENT SOURCING:
→ El estado de la aplicación se deriva de la secuencia de eventos almacenados
→ En lugar de guardar "saldo actual = €500", guardas los eventos:
  Deposited(€1000) → Withdrawn(€300) → Withdrawn(€200) → Estado derivado: €500
→ La base de datos de eventos es la fuente de verdad — el estado actual se reconstruye
→ Tienes un audit log completo e inmutable de todo lo que ha ocurrido
→ Complejidad alta — úsalo solo cuando el historial de cambios es un requisito de negocio
```

**CQRS (Command Query Responsibility Segregation):**
```
La idea: separa el modelo que escribe (Commands) del modelo que lee (Queries).

SIN CQRS:
→ Un solo modelo para leer y escribir
→ Las queries de lectura complejas bloquean las escrituras
→ El schema está optimizado para ninguno de los dos

CON CQRS:
Write side (Commands):
→ OrderService.placeOrder(command) → valida → guarda en DB de escritura → publica evento

Read side (Queries):
→ OrderQueryService.getOrdersByUser(userId) → lee de una DB de lectura optimizada para esa query
→ La DB de lectura se actualiza mediante los eventos del write side

BENEFICIO: puedes optimizar el schema de lectura para cada query específica,
y el schema de escritura para garantizar consistencia e integridad.
```

### 🐰 RabbitMQ vs. 🦅 Kafka vs. 🐂 Bull: cuándo usar cada uno

```
RABBITMQ — El router de mensajes:
✅ Cuando necesitas routing sofisticado (exchanges: direct, topic, fanout, headers)
✅ Cuando el consumidor procesa y elimina el mensaje (no necesitas replay)
✅ Para jobs de background y tareas asíncronas en sistemas de tamaño medio
✅ Para RPC asíncrono entre servicios
❌ No es bueno para: replay de eventos históricos, event sourcing, streams de alta velocidad

KAFKA — El log de eventos distribuido:
✅ Cuando necesitas replay: los consumidores pueden leer eventos pasados
✅ Para event sourcing (Kafka como log de eventos permanente)
✅ Para streams de alta velocidad (millones de eventos/segundo)
✅ Para múltiples consumidores que necesitan el mismo evento de forma independiente
✅ Para pipelines de datos y analítica en tiempo real
❌ No es bueno para: routing complejo, RPC, sistemas pequeños donde la complejidad operacional no se justifica

BULL/BULLMQ (Redis) — La cola de jobs para Node.js:
✅ Para jobs de background en aplicaciones Node.js sin infraestructura adicional compleja
✅ Para procesamiento de jobs con reintentos, delays y prioridades
✅ Para sistemas donde ya tienes Redis y no quieres añadir Kafka/RabbitMQ
❌ No es bueno para: múltiples consumidores del mismo mensaje, event sourcing, alta disponibilidad sin Redis Cluster
```

### 💻 Implementación práctica: el patrón Outbox para garantizar consistencia

```javascript
// El problema: ¿qué pasa si guardas en DB pero falla la publicación del evento?
// Solución: el patrón Transactional Outbox

// PASO 1: Guarda el evento en la misma transacción que el estado
async function placeOrder(orderData) {
  await db.transaction(async (trx) => {
    // Guarda el pedido
    const order = await trx('orders').insert(orderData).returning('*');

    // Guarda el evento en la tabla outbox (misma transacción)
    await trx('outbox_events').insert({
      event_type: 'OrderPlaced',
      aggregate_id: order[0].id,
      payload: JSON.stringify(order[0]),
      status: 'pending',
      created_at: new Date(),
    });
  });
  // Si la transacción falla, ninguna operación se guarda
  // Si la transacción tiene éxito, ambas operaciones están garantizadas
}

// PASO 2: Un proceso separado (outbox processor) publica los eventos pendientes
async function processOutbox() {
  const pendingEvents = await db('outbox_events')
    .where('status', 'pending')
    .orderBy('created_at', 'asc')
    .limit(100);

  for (const event of pendingEvents) {
    await messageQueue.publish(event.event_type, event.payload);
    await db('outbox_events').where('id', event.id).update({ status: 'published' });
  }
}

// El outbox processor corre en un cron job o loop continuo
setInterval(processOutbox, 1000); // cada segundo
```

### ⚠️ Los errores más frecuentes en sistemas de eventos y cómo evitarlos

Los 5 errores que destruyen la consistencia y la escalabilidad: mensajes sin idempotencia (el consumidor procesa el mismo mensaje dos veces), eventos demasiado granulares (un evento por cada campo modificado), falta de schema registry (los consumidores no saben el formato del evento), sin dead letter queue (los mensajes fallidos se pierden) y la falta de observabilidad sobre el estado de las colas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Event sourcing, CQRS, event-driven architecture, RabbitMQ, Kafka, Bull, arquitectura eventos',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño del onboarding de producto: el flujo que engancha al usuario en los primeros 5 minutos',
                'description'       => 'Diseña el onboarding de tu producto que lleva al usuario al "aha moment" antes de que se aburra y cierre la app. Con el framework de diseño del onboarding en fases, los patrones de tutorial interactivo que funcionan, las métricas de onboarding que debes medir y los errores más frecuentes que alargan el time-to-value.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer especializado en onboarding con experiencia rediseñando los flujos de activación de productos SaaS y apps móviles donde la mejora del onboarding ha aumentado la tasa de activación un 40-80% y reducido el churn en las primeras 2 semanas.

Contexto:
- Tipo de producto: [SaaS B2B / app de productividad / ecommerce / app móvil / otro]
- El "aha moment" de tu producto: [el momento en que el usuario entiende el valor — descríbelo]
- Estado actual del onboarding: [sin onboarding / pantallas de bienvenida estáticas / tooltips / onboarding complejo y largo]
- La mayor fricción actual: [los usuarios no llegan al aha moment / se pierden en la configuración inicial / abandonan antes de completar el registro]

## Diseño del Onboarding de Producto — [App]

### 🎯 El principio fundamental: llevar al usuario al aha moment lo antes posible

**El error más frecuente: el onboarding educativo antes de la experiencia:**
```
MAL — El onboarding tipo "tour de features":
Pantalla 1: "Bienvenido a [Producto]" → siguiente
Pantalla 2: "Con [Producto] puedes hacer X" → siguiente
Pantalla 3: "También puedes hacer Y" → siguiente
Pantalla 4: "¡Estás listo!" → el usuario llega al dashboard sin entender nada

POR QUÉ FALLA: el usuario no aprende las features en abstracto.
Las aprende cuando las necesita para resolver un problema real.

BIEN — El onboarding que lleva al aha moment:
→ Pregunta lo mínimo indispensable para personalizar la experiencia
→ Lleva al usuario a su primera victoria en menos de 5 minutos
→ Enseña las features en el contexto de la tarea que el usuario quiere hacer
```

**Cómo identificar el aha moment de tu producto:**
```
Pregunta: ¿qué acción específica realizan los usuarios que se quedan vs. los que se van?

Método de análisis:
1. Toma los usuarios que llevan 90+ días activos (retenidos)
2. Toma los usuarios que se fueron en los primeros 14 días (churned early)
3. Busca la diferencia en comportamiento en los primeros 3 días

Ejemplo de aha moments por tipo de producto:
→ Slack: enviar el primer mensaje a un compañero de equipo
→ Notion: crear y compartir la primera página
→ Trello: mover la primera tarjeta de columna
→ Airbnb: hacer la primera reserva o publicar el primer alojamiento

Tu aha moment debe ser una acción, no un concepto.
```

### 📐 El framework de diseño del onboarding en 4 fases

**Fase 1 — Welcome / Setup mínimo (0-60 segundos):**
```
Objetivo: recoger solo los datos imprescindibles para personalizar la experiencia.
Regla: cada campo extra que pides reduce la tasa de completion un 5-10%.

Preguntas que SÍ tienen sentido en el setup inicial:
→ Las que cambian radicalmente la experiencia: "¿para qué usas [Producto]?" (personal / empresa)
→ Las que permiten personalizar el contenido inicial: "¿cuál es tu rol?" (diseñador / dev / PM)

Preguntas que NO debes pedir al inicio:
→ Los datos de facturación (pídelos cuando el usuario quiera actualizar a premium)
→ La foto de perfil (pídela cuando ya ha creado contenido que mostrar)
→ La integración con otras herramientas (pídela cuando el usuario esté en el contexto correcto)
```

**Fase 2 — El primer valor (1-5 minutos):**
```
Objetivo: llevar al usuario a su primera victoria antes de que cierre la pestaña.

Patrones que funcionan:
→ EMPTY STATE ACCIONABLE: en lugar de mostrar un dashboard vacío, guía al usuario a crear
  su primer [proyecto / documento / tarea / contacto]. El estado vacío es tu mejor oportunidad.

→ PLANTILLA DE INICIO: ofrece una plantilla pre-rellenada con datos de ejemplo.
  "¿Quieres empezar con un proyecto de ejemplo?" → el usuario puede modificarlo en lugar
  de empezar desde cero (la hoja en blanco es el mayor bloqueador de la creatividad).

→ CHECKLIST DE ACTIVACIÓN: una lista de 3-5 acciones que llevan al aha moment.
  Cada acción completada da un tick de satisfacción (dopamina de progreso).
  Ejemplo: ☑ Crea tu primer proyecto / ☐ Invita a un compañero / ☐ Conecta tu calendario
```

**Fase 3 — El tutorial contextual (días 1-7):**
```
Objetivo: enseñar las features avanzadas cuando el usuario las necesita, no antes.

TOOLTIP CONTEXTUAL vs. TOUR FORZADO:
→ TOUR FORZADO: el usuario tiene que completar un tour de 10 pasos antes de poder usar el producto.
  Resultado: el 60-80% lo salta o lo cierra.
→ TOOLTIP CONTEXTUAL: aparece cuando el usuario hace algo por primera vez.
  "Acabas de crear tu primera tarea. ¿Sabías que puedes añadir una fecha límite haciendo clic aquí?"
  Resultado: el usuario ve el tooltip en el momento en que es relevante.

PATRÓN DE TOOLTIP BIEN DISEÑADO:
→ Aparece una sola vez (no cada vez que el usuario pasa el cursor)
→ Es descartable (el usuario puede cerrarlo)
→ Tiene un CTA claro ("Probar ahora" en lugar de "Entendido")
→ No bloquea la acción que el usuario quería hacer
```

**Fase 4 — Reactivación de usuarios en riesgo (días 3-14):**
```
Objetivo: recuperar a los usuarios que completaron el setup pero no volvieron.

Señales de usuario en riesgo:
→ No ha vuelto en 3 días después del registro
→ Completó el setup pero no realizó el aha moment
→ Abrió el email de bienvenida pero no entró a la app

Emails de reactivación que funcionan:
→ "¿Qué te está frenando?" — pregunta directa, respuesta manual del equipo
→ "Esto es lo que te perdiste esta semana" — muestra actividad o valor del producto
→ "Un cliente como tú consiguió X en 30 días" — prueba social + caso de uso similar
```

### 📊 Las métricas de onboarding que debes medir semana a semana

Los 5 KPIs del onboarding (tasa de completion del setup, time-to-aha-moment, activación a 7 días, retención a 14 días y 30 días, y tasa de dropout por paso del funnel) y cómo configurar el funnel de activación en Mixpanel, Amplitude o PostHog para identificar el paso donde más usuarios se caen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Onboarding diseño, aha moment, user activation, tutorial interactivo, time-to-value, product onboarding',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sistema de referidos B2B: convierte a tus clientes en el canal de ventas más rentable',
                'description'       => 'Diseña e implementa un programa de referidos B2B que convierte a tus mejores clientes en prescriptores activos que generan oportunidades de venta cualificadas. Con la estructura de incentivos, el proceso de activación de referidores, las métricas del programa y los errores que hacen que los programas de referidos no arranquen.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth & Sales Consultant con experiencia diseñando programas de referidos B2B en empresas de SaaS y servicios profesionales donde el canal de referidos representa el 25-40% de los nuevos clientes con un coste de adquisición 3-5x menor que los canales paid y un LTV 20-30% mayor.

Contexto:
- Tipo de producto/servicio: [SaaS B2B / agencia / servicios profesionales / consultoría]
- Ticket medio del cliente: [€ al año]
- NPS actual aproximado: [0-6 / 7-8 / 9-10 / no lo medimos]
- Estado del programa de referidos: [no existe / informal (clientes refieren pero sin sistema) / queremos sistematizarlo]

## Sistema de Referidos B2B — [Empresa]

### 🧠 Por qué los referidos B2B funcionan diferente a los B2C

**La diferencia fundamental:**
```
B2C (Dropbox, Uber): incentivo monetario directo → "Te doy espacio/crédito gratis si invitas a alguien"
Funciona porque el coste de cambio es bajo y el decisor es el mismo usuario.

B2B: el decisor (comprador) y el usuario (beneficiario) pueden ser personas diferentes.
El incentivo monetario directo puede percibirse como soborno.
"¿Me estás refiriendo porque es bueno o porque te llevas una comisión?"

La referencia en B2B funciona mejor cuando:
→ El cliente refiere porque genuinamente cree que ayuda a su contacto
→ El incentivo existe pero no es el motivo principal de la referencia
→ El referidor tiene reputación que defender ante el referido
```

**El principio de los referidos B2B que no fallan:**
```
Los clientes refieren cuando:
1. Están muy satisfechos con el producto/servicio (NPS 9-10)
2. Su contacto tiene exactamente el mismo problema que ellos tenían
3. Referir les hace quedar bien (les hace parecer conectados y conocedores)
4. El proceso de referir es tan simple que no les cuesta nada

Los clientes NO refieren cuando:
1. No están seguros de que la experiencia de su contacto será buena
2. La referencia implica mucho trabajo de su parte (formularios, onboarding del referido)
3. El incentivo parece sospechoso o excesivo
4. No han tenido ningún momento de éxito claro que contar
```

### 📋 La estructura del programa de referidos B2B

**Paso 1 — Identifica a tus referidores potenciales (no todos los clientes refieren igual):**
```
PERFIL DEL REFERIDOR IDEAL:
→ NPS 9-10 (promotor activo)
→ Ha tenido un resultado claro y medible con tu producto
→ Tiene red activa de contactos en el mismo sector
→ Su empresa ya ha expandido el uso del producto (señal de alto valor percibido)

CÓMO IDENTIFICARLOS:
→ Filtra los clientes con NPS 9-10 de tu última encuesta
→ Cruza con los clientes que llevan 12+ meses y han renovado
→ Mira quién ya te ha mencionado en LinkedIn o ha dado testimonios
→ Revisa quién ha expandido la licencia o el volumen de uso

Empieza con los top 20 clientes más satisfechos, no con todos.
```

**Paso 2 — El incentivo correcto para B2B:**
```
OPCIONES POR TIPO DE RELACIÓN:

Para clientes empresa (la referencia va de empresa a empresa):
→ Descuento en la renovación (10-15% en la próxima factura)
→ Meses adicionales gratuitos
→ Acceso anticipado a nuevas features
→ Créditos de servicio (horas de consultoría, implementación, formación)
→ Donación a una causa que el cliente elija (CSR — cada vez más valorado)

Para contactos individuales (un empleado que refiere a su red personal):
→ Tarjeta regalo (Amazon, experiencias)
→ Formación o certificación gratuita
→ Dinero en efectivo solo si está permitido por la política de la empresa del referidor
   (muchas empresas prohíben a sus empleados aceptar comisiones — verifica antes)

REGLA DE ORO: el incentivo al referidor y al referido deben estar equilibrados.
Si solo incentivas al que refiere y no al que recibe la referencia, el referido llega
desconfiado ("¿te llevas algo por esto?").
```

**Paso 3 — El proceso de activación del referido:**
```
LO QUE NUNCA DEBE OCURRIR:
→ El referidor te da el contacto del referido y tú lo tratas como un lead frío
→ El referido recibe un email de ventas genérico que no menciona la referencia
→ El Account Executive no sabe que es una referencia y hace el proceso estándar

LO QUE DEBE OCURRIR:
1. El referidor presenta al referido directamente (intro email de 3 personas)
   "Hola [Referido], te presento a [AE de Empresa]. Nosotros llevamos 18 meses usando
   [Producto] y ha transformado cómo gestionamos [X]. Creo que tenéis el mismo problema
   que nosotros teníamos. [AE], te dejo con [Referido]."

2. El AE menciona la referencia en el primer contacto:
   "Hola [Referido], [Referidor] me ha hablado mucho de vosotros y de los retos que
   estáis afrontando en [área]. Me ha comentado que tenéis una situación similar a la
   que ellos tenían antes de empezar con nosotros..."

3. El proceso de ventas es más corto porque la confianza ya está transferida.
   Un lead de referido cierra en la mitad de tiempo que un lead outbound.
```

**Paso 4 — El sistema de seguimiento y agradecimiento:**
```
CRM: campo obligatorio en cada oportunidad: "¿De dónde viene este lead?"
→ Referido por [cliente] → el AE lo sabe desde el primer minuto

CUANDO EL REFERIDO SE CONVIERTE EN CLIENTE:
→ Notifica al referidor inmediatamente (no esperes a la siguiente factura)
→ Entrega el incentivo en 48 horas (la demora reduce el valor percibido del incentivo)
→ Agradece de forma personal, no con un email automático

AUNQUE EL REFERIDO NO CIERRE:
→ Agradece al referidor igualmente — la referencia tiene valor independientemente del resultado
→ Actualiza al referidor con el estado: "Hemos hablado con [empresa], vamos avanzando"
   Esto mantiene la confianza y genera más referencias en el futuro.
```

### 📊 Las métricas del programa de referidos que debes medir mensualmente

Los 5 KPIs del canal de referidos (número de referidos generados, tasa de conversión de referidos vs. otros canales, CAC del canal de referidos, LTV comparado de clientes referidos, y NPS de clientes adquiridos por referido) y cómo presentar el impacto del programa al equipo directivo para conseguir más recursos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Programa referidos B2B, referral program, clientes prescriptores, canal referidos, ventas B2B',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de dependencias entre equipos en organizaciones multi-producto',
                'description'       => 'Resuelve el mayor problema de escala en product management: coordinar dependencias entre equipos sin convertir cada semana en una reunión de alineación. Con el framework de gestión de dependencias, las herramientas de visibilidad entre equipos, los rituales que funcionan y cómo manejar las dependencias bloqueantes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director de Producto con experiencia liderando organizaciones de producto de 5-20 equipos donde la gestión de dependencias entre equipos es la principal causa de retrasos en la entrega y de fricción entre PMs y Engineers.

Contexto:
- Número de equipos de producto: [N equipos]
- Estructura organizativa: [squads autónomos / equipos funcionales / feature teams / plataforma + producto]
- El mayor problema actual: [dependencias no identificadas hasta el último momento / equipos bloqueados esperando a otros / falta de visibilidad entre roadmaps / todo]
- Herramientas actuales: [Jira / Linear / Notion / Productboard / ninguna estructurada]

## Gestión de Dependencias entre Equipos — [Organización]

### 🧠 Por qué las dependencias destruyen la predictibilidad del delivery

**El coste real de las dependencias no gestionadas:**
```
ESCENARIO TÍPICO:
→ El equipo A planifica la feature X para Q2
→ La feature X requiere una API del equipo B (plataforma)
→ El equipo B no sabe que tiene que desarrollar esa API hasta la semana del lanzamiento
→ El equipo A retrasa su feature 6 semanas
→ El retraso se propaga a los equipos C y D que dependían de la feature X

El coste: 6 semanas de retraso, relación dañada entre equipos, clientes decepcionados,
y un post-mortem que identifica "falta de comunicación" como causa raíz.
La solución real: no es comunicar más — es sistematizar la identificación temprana de dependencias.
```

**Los tipos de dependencias que debes gestionar:**
```
TIPO 1 — Dependencias técnicas de plataforma:
El equipo de producto necesita una API, infraestructura o capacidad del equipo de plataforma.
Son las más frecuentes y las más fáciles de gestionar con un proceso estructurado.

TIPO 2 — Dependencias entre equipos de producto:
La feature del equipo A requiere que el equipo B entregue una funcionalidad base antes.
Ejemplo: el equipo de checkout no puede lanzar sin que el equipo de catálogo entregue la API de precios.

TIPO 3 — Dependencias de datos o contenido:
Una feature necesita datos que otro equipo genera o gestiona.

TIPO 4 — Dependencias de decisión:
Una decisión de arquitectura o de producto afecta a múltiples equipos y no puede tomarla un solo equipo.
Requiere un proceso de decisión colectiva, no solo de coordinación.
```

### 📋 El framework de gestión de dependencias en 4 pasos

**Paso 1 — Identificación temprana (en la fase de planificación del trimestre):**
```
El artefacto: la matriz de dependencias del trimestre
Para cada iniciativa del roadmap, el PM responde:
□ ¿Qué necesito de otros equipos para entregar esto?
□ ¿Qué necesita de mí mi equipo que otros equipos van a necesitar?
□ ¿Hay decisiones de arquitectura compartida que debo tomar con otros PMs/Architects?

Formato: una tabla simple en Notion o Confluence:
| Iniciativa | Dependencia | Equipo proveedor | Fecha necesaria | Estado |
|-----------|-------------|-----------------|----------------|--------|
| Checkout v2 | API de precios actualizada | Equipo Catálogo | 1 marzo | ⚠️ Pendiente confirmación |
| Búsqueda ML | Indexador en tiempo real | Equipo Plataforma | 15 feb | ✅ Comprometido |

El truco: esta tabla se rellena en el PI Planning o en la sesión de planificación trimestral,
no cuando el equipo ya está en medio del desarrollo.
```

**Paso 2 — Visibilidad entre roadmaps (el ritual quincenal):**
```
EL RITUAL: Dependencies Review quincenal (30 minutos, todos los PMs)
→ Cada PM actualiza el estado de sus dependencias (3 minutos de prep)
→ Se identifican las dependencias en riesgo (semáforo rojo o amarillo)
→ Los afectados resuelven off-meeting — esta reunión es de visibilidad, no de resolución

HERRAMIENTAS DE VISIBILIDAD:
→ Linear: las dependencias se marcan con "blocked by" entre issues
→ Jira: las épicas de diferentes boards se enlazan con "is blocked by" / "blocks"
→ Notion: la tabla de dependencias compartida actualizada cada sprint

La regla: si una dependencia no está en el sistema, no existe.
Un acuerdo verbal entre dos PMs sin ticket no es una dependencia gestionada.
```

**Paso 3 — Escalación de dependencias bloqueantes:**
```
DEFINICIÓN DE DEPENDENCIA BLOQUEANTE:
→ El equipo A no puede continuar hasta que el equipo B entregue X
→ Y la fecha de entrega de X pone en riesgo el compromiso de A con stakeholders

PROCESO DE ESCALACIÓN:
1. El PM afectado (equipo A) contacta directamente al PM proveedor (equipo B)
   con datos concretos: "Necesito X antes del [fecha] o retraso mi lanzamiento N semanas"

2. Si no hay acuerdo en 48h, escala al Director de Producto o al Head of Engineering
   con la información: "Impacto si no se resuelve: [descripción], opciones exploradas: [lista]"

3. El Director decide: reordena prioridades del equipo B, acepta el retraso del equipo A,
   o busca una solución alternativa (workaround técnico, alcance reducido)

REGLA CLAVE: la escalación no es un fracaso — es el sistema funcionando correctamente.
La cultura que penaliza la escalación es la que acaba con lanzamientos retrasados en silencio.
```

**Paso 4 — La arquitectura organizativa que reduce dependencias estructuralmente:**
```
LA SOLUCIÓN DE RAÍZ: el equipo totalmente autónomo (Team Topologies)
Si un equipo necesita constantemente del mismo equipo proveedor,
la solución no es coordinar mejor — es cambiar la estructura.

Opciones:
→ Internalizar la capacidad: el equipo A incorpora la skill que necesita constantemente de B
→ API interna clara: el equipo de plataforma expone APIs con SLAs definidos para que otros equipos
  sean autónomos en el consumo
→ Rediseño de los límites del equipo (team boundaries): quizás A y B deberían ser un solo equipo

La pregunta que debes hacerte trimestralmente:
"¿Qué dependencias se repiten trimestre a trimestre? Esas son dependencias estructurales
que no se resuelven con mejor coordinación."
```

### 📊 Cómo medir la salud de las dependencias entre equipos

Las métricas de dependencias (número de dependencias no identificadas a tiempo, porcentaje de sprints con bloqueantes por dependencias externas, tiempo medio de resolución de dependencias bloqueantes) y cómo presentar el estado de las dependencias en la revisión trimestral de producto para que la dirección tenga visibilidad real.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión dependencias equipos, multi-team coordination, PI planning, team topologies, product management escala',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del cambio organizacional: lidera transformaciones sin destruir la cultura ni perder a las personas clave',
                'description'       => 'Lidera procesos de cambio organizacional (restructuraciones, nuevos modelos de trabajo, transformaciones digitales) con el marco metodológico que minimiza la resistencia, mantiene la confianza del equipo y preserva la cultura. Con el diagnóstico de resistencia al cambio, los rituales de comunicación y las palancas de activación.',
                'prompt_content'    => <<<'PROMPT'
Eres un Organizational Change Management (OCM) Specialist con experiencia liderando transformaciones organizacionales en empresas de 100-5.000 personas donde la diferencia entre el cambio que fracasa y el que se consolida está en la gestión de las personas, no en la calidad del plan de negocio.

Contexto:
- Tipo de cambio: [reestructuración organizativa / transformación digital / nuevo modelo de trabajo / fusión o adquisición / cambio de cultura / otro]
- Tamaño de la organización: [N personas afectadas]
- Urgencia del cambio: [cambio gradual en 12 meses / cambio acelerado en 3-6 meses / cambio de emergencia inmediato]
- El mayor reto anticipado: [resistencia de managers intermedios / falta de confianza de los empleados / cultura muy arraigada / comunicación deficiente / todo]

## Gestión del Cambio Organizacional — [Empresa]

### 🧠 Por qué el 70% de los cambios organizacionales fracasan

**Las causas reales (no las que aparecen en el post-mortem):**
```
1. El plan de cambio está perfecto en papel pero no incluye a las personas que deben ejecutarlo
   → El CEO y los consultores diseñan el cambio. Los empleados lo reciben hecho.
   → Resistencia garantizada: nadie abraza lo que no ha ayudado a crear.

2. Se comunica el QUÉ cambia pero no el POR QUÉ
   → "A partir del lunes, los equipos se reorganizan de la siguiente manera..."
   → Sin contexto, las personas inventan sus propias narrativas (y suelen ser negativas).

3. Los managers intermedios no están convencidos
   → La dirección anuncia el cambio. Los managers lo ejecutan.
   → Si los managers no creen en el cambio, lo boicotean pasivamente:
     "Sí, lo que diga arriba... pero aquí seguimos haciendo las cosas como siempre."

4. El cambio se lanza y se abandona
   → El anuncio recibe aplausos. Tres meses después, nadie hace seguimiento.
   → Las personas aprenden que los cambios anunciados no son permanentes — basta con esperar.
```

### 📋 El modelo de gestión del cambio en 5 fases (adaptado de Kotter + ADKAR)

**Fase 1 — Diagnóstico y construcción del caso para el cambio:**
```
Antes de comunicar cualquier cambio, responde:
□ ¿Por qué es necesario este cambio ahora? (la urgencia real, no la percibida)
□ ¿Qué pasa si NO cambiamos? (el coste de la inacción)
□ ¿Quiénes son los grupos más afectados? (mapa de stakeholders)
□ ¿Qué perderán las personas con este cambio? (siempre hay pérdidas reales — reconócelas)
□ ¿Cuál es el estado final al que queremos llegar? (descripción concreta, no abstracta)

HERRAMIENTA — La matriz de impacto:
| Grupo | Impacto del cambio | Nivel de influencia | Posición actual | Acción necesaria |
|-------|--------------------|---------------------|-----------------|-----------------|
| Managers | Alto | Alto | Resistente | Implicarlos en el diseño |
| Equipo operativo | Medio | Bajo | Neutral | Comunicar beneficios |
| Clientes | Bajo | Medio | Sin posición | Informar proactivamente |
```

**Fase 2 — La coalición de agentes del cambio:**
```
EL PRINCIPIO: el cambio nunca lo lidera solo el CEO o RRHH.
Se necesita una red de personas en diferentes niveles que lo impulsen desde dentro.

AGENTES DEL CAMBIO (Change Champions):
→ No son necesariamente los más senior — son los más influyentes culturalmente
→ Uno por cada equipo o departamento afectado
→ Se implican en el diseño del cambio antes del anuncio público
→ Son el canal de comunicación bidireccional: llevan el mensaje a su equipo
  y traen el feedback del equipo a la dirección

CÓMO ACTIVARLOS:
1. Identifica a las personas informalmente influyentes en cada área
2. Invítalas a una sesión de co-diseño del cambio (no de información)
3. Dales información antes que el resto del equipo (son los primeros en saber)
4. Dales respuestas a las preguntas más difíciles antes del anuncio
5. Haz seguimiento con ellas semanalmente durante los primeros 3 meses
```

**Fase 3 — La estrategia de comunicación del cambio:**
```
LA REGLA DE LAS 7 VECES:
El mensaje del cambio debe comunicarse al menos 7 veces, por canales distintos,
antes de que la mayoría de las personas lo interiorice. Una vez no es suficiente.

LOS 3 MENSAJES CLAVE QUE DEBEN ESTAR SIEMPRE PRESENTES:
1. POR QUÉ (el contexto y la urgencia): "El mercado ha cambiado / nuestra competencia ha crecido / hemos aprendido que..."
2. QUÉ (lo concreto, no la visión abstracta): "Esto significa que tu equipo / tu rol / tu forma de trabajar cambia en [aspectos específicos]"
3. CÓMO (el proceso y el apoyo): "Esto es lo que vamos a hacer para ayudarte a adaptarte"

CANALES POR FASE:
→ Antes del anuncio: 1-a-1 con managers y agentes del cambio
→ Anuncio principal: all-hands en directo (nunca un email para cambios importantes)
→ Primeras semanas: FAQs actualizadas, sesiones de preguntas abiertas, comunicaciones semanales
→ Meses 2-6: actualizaciones del progreso, celebración de victorias tempranas, corrección de problemas
```

**Fase 4 — La gestión de la resistencia:**
```
TIPOS DE RESISTENCIA Y CÓMO RESPONDER:

RESISTENCIA ACTIVA (expresan su oposición):
→ La resistencia activa es la menos peligrosa — al menos sabes que existe
→ Responde con escucha genuina, no con justificaciones
→ Busca los miedos detrás de la resistencia: "¿Qué es lo que más te preocupa de este cambio?"
→ Algunas objeciones son válidas — incorporarlas mejora el plan

RESISTENCIA PASIVA (aparentemente aceptan pero no cambian):
→ La más común y peligrosa — el cambio muere sin ruido
→ Señales: asistencia a las reuniones de cambio pero ninguna acción posterior,
  "sí, claro" en las reuniones y las viejas prácticas en el día a día
→ Respuesta: accountability clara + métricas de adopción + conversaciones 1-a-1

LOS QUE NUNCA SE SUMARÁN:
→ En todo cambio hay un 10-15% que no se adaptará
→ No dediques el 80% de tu energía a convencer al 15% más resistente
→ La energía va a los indecisos (el 60-70%) — esos son los que determinan el resultado
```

**Fase 5 — La consolidación y el anclaje del cambio:**
```
EL ERROR MÁS FRECUENTE: declarar victoria demasiado pronto
→ El cambio no está consolidado hasta que es "la forma en que hacemos las cosas aquí"
→ Los cambios que no se anclan se revierten en 6-18 meses

CÓMO ANCLAR EL CAMBIO:
→ Actualiza los procesos escritos, políticas y sistemas (si el sistema sigue el antiguo proceso, el cambio no está anclado)
→ Revisa los KPIs y las evaluaciones de desempeño para reflejar el nuevo comportamiento
→ Celebra públicamente a los que adoptan el cambio (no solo critiques a los que no)
→ Incorpora el cambio a la inducción de nuevas personas (si los nuevos no lo aprenden, se diluye)
```

### 📊 Cómo medir el progreso del cambio organizacional

Las métricas de adopción del cambio (el índice ADKAR por equipo: Awareness, Desire, Knowledge, Ability, Reinforcement), cómo diseñar pulsos de escucha durante la transformación y la cadencia de revisión que mantiene el momentum sin generar fatiga de cambio en la organización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestión cambio organizacional, change management, transformación cultural, resistencia al cambio, ADKAR',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financiación alternativa para PYME: crowdfunding, factoring, renting y business angels sin depender del banco',
                'description'       => 'Descubre y evalúa las fuentes de financiación alternativa que tienen las PYME más allá del préstamo bancario tradicional. Con los criterios de elección entre crowdfunding, factoring, renting, business angels y fondos de deuda, los costes reales de cada instrumento y cuándo tiene sentido cada opción.',
                'prompt_content'    => <<<'PROMPT'
Eres un Financial Advisor especializado en PYME con experiencia asesorando a empresas de 1-50M€ de facturación en la selección e implementación de las fuentes de financiación más adecuadas para su estadio de desarrollo y sus necesidades de liquidez, crecimiento o inversión.

Contexto:
- Facturación anual: [€]
- Necesidad de financiación: [liquidez a corto plazo / inversión en activos / capital de crecimiento / bridge hasta una ronda de inversión]
- Importe necesario: [€]
- Plazo en que necesitas el dinero: [inmediato / 1-3 meses / 6-12 meses]
- Relación con el banco actual: [buena y con límites disponibles / saturada / sin historial suficiente]

## Financiación Alternativa para PYME — [Empresa]

### 🗺️ El mapa de la financiación alternativa: qué existe y para qué sirve

```
NECESIDAD                    INSTRUMENTO MÁS ADECUADO
─────────────────────────────────────────────────────────
Liquidez inmediata           Factoring / Confirming
  (tengo facturas pendientes   (anticipo de cobros sin esperar 60-90 días)
  de cobro)

Circulante a corto plazo     Línea de crédito alternativa / Fintech
  (necesito capital para       (Circulantis, Gedesco, October, Iwoca)
  operaciones de 3-12 meses)

Inversión en activos         Renting / Leasing operativo
  (maquinaria, flota, IT)      (uso sin comprar, cuota fija mensual)

Crecimiento ambicioso        Business Angel / Venture Capital
  (necesito capital + mentor)  (entrada de capital + know-how)

Proyecto con impacto         Crowdfunding (equity o recompensa)
  o producto con comunidad     (valida y financia a la vez)

Empresa con historial        Fondos de deuda privada / Direct Lending
  y activos sólidos            (alternativa al banco, importes mayores)
```

### 🔄 Factoring: convierte tus facturas pendientes en liquidez inmediata

**Qué es el factoring:**
```
Vendes tus facturas a cobrar a una empresa de factoring (el factor) a cambio de cobrar
el 80-95% del importe de inmediato.
El factor cobra al deudor (tu cliente) al vencimiento y te paga el resto menos su comisión.

TIPOS PRINCIPALES:
→ Factoring con recurso: si tu cliente no paga, tú devuelves el anticipo. Más barato.
→ Factoring sin recurso: el factor asume el riesgo de impago del deudor. Más caro pero
  elimina el riesgo de crédito.

COSTE REAL:
→ Comisión de gestión: 0.5-2% sobre el nominal de la factura
→ Tipo de interés del anticipo: Euríbor + 2-5% anual
→ En la práctica: 1-3% del importe de la factura para plazos de 60-90 días

CUÁNDO TIENE SENTIDO:
✅ Tienes clientes que pagan a 60-90 días y necesitas liquidez antes
✅ Tu deudor principal es una empresa grande y solvente (mejora las condiciones)
✅ Tu negocio tiene estacionalidad y necesitas liquidez en picos de actividad
❌ No tiene sentido si tus clientes son particulares (B2C) — el factoring es para B2B
```

**El Confirming (para el lado del comprador):**
```
Es el inverso del factoring: tú (como empresa compradora) contratas el confirming
para que tus proveedores puedan anticipar el cobro de sus facturas.
Beneficio para ti: mejoras las relaciones con proveedores sin tocar tu caja.
Beneficio para el proveedor: cobra antes sin necesitar una línea de factoring propia.
```

### 🚗 Renting y Leasing: usa activos sin comprarlos

```
RENTING OPERATIVO:
→ Alquiler de largo plazo (36-60 meses) de activos: flota de vehículos, equipos IT, maquinaria
→ Cuota fija mensual que incluye mantenimiento, seguro, ITV, sustitución
→ Al final del contrato: devuelves el activo, renuevas o compras por valor residual
→ VENTAJA FISCAL: la cuota es gasto deducible al 100% (no hay amortización)
→ VENTAJA DE BALANCE: no aumenta el endeudamiento (no activa como deuda — según NIIF 16 hay matices)

LEASING FINANCIERO:
→ Similar al renting pero con opción de compra obligatoria al final
→ El activo aparece en el balance como inmovilizado
→ Intereses y amortización son deducibles
→ Para activos que quieres acabar siendo propietario

RENTING vs. COMPRA — El cálculo rápido:
Si el activo se deprecia rápido (tecnología, vehículos) → renting casi siempre mejor
Si el activo mantiene valor (inmuebles, maquinaria industrial) → la compra o leasing puede ser mejor
```

### 👼 Business Angels: capital + experiencia para startups y PYME en crecimiento

```
QUÉ APORTA UN BUSINESS ANGEL:
→ Capital: habitualmente tickets de 25k-500k€ (grupos de angels: hasta 2M€)
→ Experiencia en el sector o en la fase de desarrollo
→ Red de contactos (clientes, partners, futuros inversores)
→ Disponibilidad para mentoring (si la relación funciona)

QUÉ CEDE LA EMPRESA:
→ Equity (participaciones): típicamente 5-20% en la ronda seed/pre-seed
→ Un asiento en el consejo de administración o derechos de información
→ Tiempo en reporting y comunicación con el inversor

CÓMO ENCONTRAR BUSINESS ANGELS EN ESPAÑA:
→ ESBAN (red nacional de business angels): esban.com
→ Grupos de angels por sector: Conector, The Valley Talent, Demium
→ Redes de alumni de escuelas de negocio (IE, ESADE, IESE)
→ LinkedIn: busca "business angel" + tu sector

LO QUE BUSCAN LOS ANGELS:
→ Equipo fundador sólido (el factor más importante)
→ Mercado grande o en crecimiento
→ Tracción inicial (ventas, usuarios, LOIs)
→ Potencial de salida (exit) en 5-7 años: venta de la empresa o ronda mayor
```

### 🌐 Crowdfunding: financia y valida al mismo tiempo

```
TIPOS DE CROWDFUNDING PARA EMPRESAS:

CROWDFUNDING DE RECOMPENSA (Kickstarter, Verkami):
→ Los usuarios pre-compran tu producto antes de que exista
→ No cedes equity — es una preventa
→ Ideal para: productos físicos, proyectos creativos, primeras tiradas
→ Coste: 5-8% de comisión sobre lo recaudado

CROWDFUNDING DE EQUITY (Crowdcube, Startupxplore, Bolsa Social):
→ Los inversores reciben participaciones de la empresa
→ Financiaciones típicas: 200k-2M€
→ Ventaja: acceso a comunidad de inversores retail + visibilidad de marca
→ Inconveniente: cedes equity a muchos pequeños inversores (cap table complejo)
→ Coste: 6-10% de comisión + due diligence + preparación de la campaña

CROWDFUNDING DE DEUDA / PRÉSTAMOS P2P (October, Circulantis):
→ Financiación mediante préstamo de inversores particulares
→ Tipos más competitivos que el banco en algunos casos
→ Proceso: solicitas, la plataforma evalúa, los inversores deciden en 24-72h

CUÁNDO EL CROWDFUNDING TIENE SENTIDO:
✅ Tienes una comunidad o seguidores que quieren ser parte del proyecto
✅ El producto necesita ser validado (el crowdfunding es la validación)
✅ La visibilidad de la campaña tiene valor de marketing en sí misma
❌ No tiene sentido si necesitas el dinero urgentemente (las campañas duran 30-60 días)
```

### 📊 El cuadro comparativo final: qué instrumento elegir según tu situación

La tabla de decisión que cruza la necesidad de financiación (liquidez / inversión / crecimiento), el plazo disponible, el coste comparativo, el impacto en el cap table y en el endeudamiento, y la probabilidad de éxito según el perfil de la empresa — para que el decisor llegue rápidamente al instrumento más adecuado sin necesitar horas de investigación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Financiación alternativa PYME, factoring, renting, business angels, crowdfunding, fuentes financiación empresa',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contrato de servicios SaaS: redacta el MSA y el DPA que protegen tu negocio y cumplen el RGPD',
                'description'       => 'Redacta el Master Service Agreement (MSA) y el Data Processing Agreement (DPA) para tu negocio SaaS con las cláusulas que protegen frente a los riesgos más frecuentes. Con las cláusulas imprescindibles de cada documento, las cláusulas que los clientes enterprise exigen y el cumplimiento del RGPD en el DPA.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho tecnológico y contratos SaaS con experiencia redactando y negociando MSAs y DPAs para empresas SaaS europeas con clientes enterprise donde los contratos mal redactados han generado reclamaciones, penalizaciones por incumplimiento de SLA y conflictos de propiedad intelectual.

NOTA IMPORTANTE: Este prompt es una guía educativa para entender los elementos de los contratos SaaS. Los contratos definitivos deben ser revisados por un abogado colegiado especializado en tu jurisdicción.

Contexto:
- Tipo de SaaS: [B2B / B2C / marketplace / herramienta de desarrollo]
- Clientes objetivo: [PYME / mid-market / enterprise / sector público]
- Datos que procesas: [datos de empleados / datos de clientes del cliente / datos de salud / datos financieros / ningún dato personal especialmente sensible]
- Jurisdicción principal: [España / UE / global]

## MSA y DPA para SaaS — [Empresa]

### 📄 El Master Service Agreement (MSA): las cláusulas que no pueden faltar

**Estructura básica del MSA:**
```
1. OBJETO Y DESCRIPCIÓN DEL SERVICIO
2. LICENCIA DE USO
3. OBLIGACIONES DEL CLIENTE
4. NIVEL DE SERVICIO (SLA)
5. TARIFAS Y FORMA DE PAGO
6. PROPIEDAD INTELECTUAL
7. CONFIDENCIALIDAD
8. GARANTÍAS Y EXCLUSIONES
9. RESPONSABILIDAD Y LIMITACIÓN DE DAÑOS
10. VIGENCIA Y TERMINACIÓN
11. RESOLUCIÓN DE CONFLICTOS
```

**Cláusula 1 — Objeto y alcance del servicio:**
```
Define con precisión qué incluye y qué NO incluye el servicio.
Los conflictos más frecuentes vienen de la indefinición del alcance.

Incluir:
→ Descripción funcional del software (referencia al Order Form o Statement of Work)
→ Canales de soporte incluidos (email, chat, teléfono) y horario de atención
→ Límites de uso: número de usuarios, volumen de datos, llamadas a API
→ Lo que NO está incluido: implementación, formación, customizaciones,
  integración con sistemas externos (se contratan separado)

Ejemplo de redacción:
"El Servicio se prestará exclusivamente a través de la URL [URL] y comprende
el acceso a las funcionalidades descritas en el Anexo de Descripción del Servicio.
Quedan expresamente excluidos del presente contrato los servicios de implementación,
migración de datos, formación y desarrollo a medida, que podrán contratarse
mediante un Statement of Work adicional."
```

**Cláusula 3 — SLA (Service Level Agreement):**
```
LOS NIVELES DE SERVICIO QUE DEBES DEFINIR:
→ Disponibilidad comprometida: típico en SaaS: 99.5% - 99.9% mensual
  (99.9% mensual = máximo 43 minutos de downtime al mes)
→ Tiempo de resolución de incidencias por severidad:
  P1 (crítico, sistema caído): respuesta en 1h, resolución en 4h
  P2 (degradación significativa): respuesta en 4h, resolución en 24h
  P3 (funcionalidad menor): respuesta en 1 día hábil, resolución en 5 días hábiles

MANTENIMIENTOS PROGRAMADOS:
→ Define cuándo puedes hacer mantenimiento sin penalización (ej: domingos de 2h a 6h)
→ Define el preaviso mínimo requerido (48-72 horas para mantenimientos no urgentes)

COMPENSACIONES POR INCUMPLIMIENTO (SLA Credits):
→ Define los créditos en términos de extensión del servicio, no de devolución de dinero
→ Ejemplo: si la disponibilidad baja del 99% en un mes → 10% de crédito en la próxima factura
→ Limita los créditos: "Los créditos máximos no podrán exceder el 30% de la cuota mensual"

EXCLUSIONES DEL SLA:
→ Fuerza mayor (definirla expresamente)
→ Incidencias causadas por el cliente o sus integraciones
→ Periodos de mantenimiento programado comunicados con antelación
```

**Cláusula 6 — Propiedad intelectual:**
```
LAS DOS PARTES MÁS CRÍTICAS:

A) Propiedad del software:
"[Empresa SaaS] es y seguirá siendo el único propietario de todos los derechos
de propiedad intelectual sobre el Software y la Plataforma, incluyendo todos
los desarrollos, mejoras y modificaciones realizados durante la vigencia del contrato,
con independencia de las sugerencias o aportaciones del Cliente."
→ Protege contra reclamaciones del cliente de co-autoría de features desarrolladas
  a partir de sus peticiones.

B) Propiedad de los datos del cliente:
"Todos los datos introducidos por el Cliente en la Plataforma son y seguirán siendo
propiedad exclusiva del Cliente. [Empresa SaaS] no adquiere ningún derecho sobre dichos datos
más allá de los estrictamente necesarios para la prestación del Servicio."
→ Esta cláusula es imprescindible — los clientes enterprise la exigen siempre.
→ Complementa al DPA (que define cómo se tratan como datos personales bajo el RGPD).
```

**Cláusula 9 — Limitación de responsabilidad:**
```
LA CLÁUSULA MÁS IMPORTANTE PARA PROTEGER AL PROVEEDOR SaaS:

"En ningún caso [Empresa SaaS] será responsable de daños indirectos, lucro cesante,
pérdida de datos, pérdida de negocio o daños reputacionales derivados del uso
o de la imposibilidad de uso del Servicio, aún cuando hubiera sido advertida
de la posibilidad de dichos daños."

"La responsabilidad total acumulada de [Empresa SaaS] frente al Cliente,
bajo cualquier teoría legal, no excederá de las cuotas pagadas por el Cliente
en los 12 meses anteriores al evento que dio lugar a la reclamación."

NOTA: los clientes enterprise intentarán eliminar estas limitaciones.
Negocia mantener al menos la limitación de responsabilidad en 12 meses de cuotas.
```

### 🔒 El Data Processing Agreement (DPA): cumplimiento del RGPD

**Por qué el DPA es obligatorio (no opcional):**
```
El artículo 28 del RGPD obliga a que cuando un responsable del tratamiento (tu cliente)
contrata a un encargado del tratamiento (tú, como SaaS) que trata datos personales,
exista un contrato escrito que regule ese tratamiento.

Si procesas cualquier dato personal de los empleados, clientes o contactos de tu cliente,
necesitas un DPA. Y ese DPA debe cumplir los requisitos del artículo 28 del RGPD.
```

**Las cláusulas obligatorias del DPA según el artículo 28 RGPD:**
```
1. OBJETO, DURACIÓN Y NATURALEZA DEL TRATAMIENTO:
   → Qué datos personales tratas (categorías: nombres, emails, IP, datos de comportamiento...)
   → Con qué finalidad (prestación del servicio)
   → Durante cuánto tiempo (vigencia del contrato + período de retención post-contrato)

2. INSTRUCCIONES DOCUMENTADAS:
   → Solo tratas los datos según las instrucciones del cliente (responsable)
   → Si recibes una orden legal que contradice las instrucciones, lo comunicas al cliente

3. CONFIDENCIALIDAD DEL PERSONAL:
   → Las personas con acceso a los datos están sujetas a obligaciones de confidencialidad

4. MEDIDAS DE SEGURIDAD (artículo 32 RGPD):
   → Cifrado de datos en tránsito y en reposo
   → Control de acceso basado en roles
   → Logs de acceso y auditoría
   → Plan de respuesta a brechas de seguridad
   → Copias de seguridad y recuperación

5. SUBENCARGADOS:
   → Lista de los subencargados que usas (AWS, Google Cloud, Stripe, etc.)
   → Obligación de informar al cliente antes de añadir nuevos subencargados
   → Los subencargados deben estar sujetos a obligaciones equivalentes

6. ASISTENCIA AL RESPONSABLE:
   → Ayudas al cliente a responder solicitudes de derechos de interesados (acceso, supresión, portabilidad)
   → Le asistes en el cumplimiento de sus obligaciones del artículo 32-36 RGPD

7. SUPRESIÓN O DEVOLUCIÓN AL FINAL DEL CONTRATO:
   → Al finalizar el contrato, borras o devuelves los datos al cliente
   → Define el plazo y el formato de devolución o el certificado de destrucción

8. AUDITORÍAS:
   → Permites auditorías del cliente o pones a su disposición información que demuestre el cumplimiento
   → En la práctica: proporcionar el certificado ISO 27001 o SOC 2 suele satisfacer este requisito
```

### ⚠️ Las cláusulas que los clientes enterprise siempre intentan añadir (y cómo responder)

Las 5 cláusulas más frecuentes en las redlines de clientes enterprise (penalizaciones por SLA sin límite de crédito, audit rights presenciales en tus instalaciones, indemnización sin limitación de responsabilidad, exclusión de limitaciones en breaches de datos, y cláusula de nación más favorecida en precios) y la posición negociadora razonable para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Contrato SaaS, MSA, DPA, RGPD, acuerdo nivel servicio SLA, protección datos SaaS, contratos tecnológicos',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'SLA internos: los acuerdos de nivel de servicio entre soporte y el resto de la empresa',
                'description'       => 'Define los SLA internos entre el equipo de Customer Support y los equipos de Producto, Desarrollo y Ventas que establecen expectativas claras y eliminan los conflictos por prioridades. Con la metodología de definición de SLAs internos, los indicadores de cada tipo de acuerdo y el proceso de revisión trimestral.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Support Operations Manager con experiencia implementando sistemas de SLA internos en organizaciones donde la falta de acuerdos formales entre soporte y otros departamentos generaba conflictos constantes, clientes sin respuesta y la sensación de que soporte era el último en la cadena de decisiones.

Contexto:
- Tamaño del equipo de soporte: [N personas]
- Departamentos con los que tienes mayor fricción: [Producto / Desarrollo / Ventas / todos]
- El problema más frecuente: [bugs sin priorizar / features prometidas por ventas que soporte no conoce / escalaciones sin respuesta / SLAs externos que no puedes cumplir sin apoyo interno]
- Herramienta de tickets: [Zendesk / Freshdesk / Intercom / HubSpot Service / Jira Service Management]

## SLA Internos para Customer Support — [Empresa]

### 🧠 Por qué los SLA internos son más importantes que los externos

**El problema sin SLA internos:**
```
ESCENARIO TÍPICO:
→ Un cliente reporta un bug crítico
→ Soporte abre un ticket en Jira y lo marca como "urgente"
→ Desarrollo lo ve pero tiene su propio sprint lleno
→ Soporte pregunta en Slack: "¿Alguien puede mirar esto?"
→ Nadie sabe quién debe responder ni en qué plazo
→ El cliente espera 5 días
→ El SLA externo se incumple
→ El problema: no es que desarrollo no se preocupe — es que no hay un acuerdo claro

CON SLA INTERNOS:
→ El bug crítico tiene un nivel de severidad definido
→ Desarrollo tiene 4 horas para dar una primera respuesta y 24 horas para una estimación
→ Soporte puede comunicar al cliente un plazo real basado en el acuerdo interno
→ Si el SLA interno se incumple, hay un proceso de escalación definido
```

### 📋 Los 4 SLA internos que toda empresa debería tener

**SLA 1 — Soporte ↔ Desarrollo: gestión de bugs reportados por clientes**

```
CLASIFICACIÓN DE SEVERIDAD:

SEV-1 (Crítico — sistema caído o pérdida de datos):
→ Impacto: cliente no puede usar el producto en absoluto
→ SLA respuesta interna: 1 hora (en horario laboral) / 2 horas (fuera de horario si hay guardia)
→ SLA estimación de fix: 4 horas
→ SLA fix desplegado: 24 horas
→ Comunicación: update al cliente cada 2 horas hasta resolución
→ Escalación automática a: CTO + VP Support si supera las 4 horas sin fix

SEV-2 (Alto — funcionalidad importante degradada):
→ Impacto: el cliente puede trabajar pero con limitaciones significativas
→ SLA respuesta interna: 4 horas en horario laboral
→ SLA estimación de fix: 1 día laboral
→ SLA fix desplegado: 5 días laborables (dentro del sprint en curso)
→ Comunicación: update al cliente en 24 horas con estimación

SEV-3 (Medio — funcionalidad menor afectada):
→ Impacto: inconveniente pero no bloquea el trabajo del cliente
→ SLA respuesta interna: 1 día laboral
→ SLA estimación de fix: 5 días laborables
→ SLA fix desplegado: próximos 2 sprints (2-4 semanas)
→ Comunicación: confirmación de recepción, se informa cuando esté fijado en sprint

SEV-4 (Bajo — mejora menor o cosmético):
→ Entra en el backlog priorizado trimestralmente
→ No tiene SLA de respuesta urgente
```

**SLA 2 — Soporte ↔ Producto: solicitudes de feature provenientes de clientes**

```
EL PROBLEMA:
Soporte recibe solicitudes de features de clientes constantemente.
Sin un proceso, se pierden en Slack, se duplican, o se pasan sin contexto suficiente.

EL ACUERDO:

Obligaciones de Soporte:
→ Las solicitudes de feature se documentan en [herramienta: Productboard / Canny / Notion]
con el formato estándar:
  - Descripción de lo que el cliente quiere hacer (job to be done, no la feature específica)
  - Empresa del cliente + ARR (para priorización por impacto)
  - Número de clientes que han pedido lo mismo
  - Impacto en churn si no se implementa (alto / medio / bajo)

Obligaciones de Producto:
→ El PM asignado revisa las nuevas solicitudes cada lunes (30 minutos)
→ Cada solicitud recibe una respuesta al equipo de soporte en 5 días laborables:
  "Lo añadimos al roadmap Q3 / está en consideración / no es algo que vayamos a hacer porque [razón]"
→ El equipo de soporte necesita esta respuesta para dar una respuesta honesta al cliente

NUNCA: "Lo hemos trasladado al equipo de producto" sin una fecha o resolución.
```

**SLA 3 — Soporte ↔ Ventas: handoff de cliente nuevo y promesas de ventas**

```
EL PROBLEMA:
Ventas cierra un deal prometiendo features que no existen o plazos de implementación irreales.
El cliente llega a soporte con expectativas que soporte no puede cumplir.

EL ACUERDO:

Obligaciones de Ventas antes de cerrar un deal:
→ Verificar con soporte/producto cualquier feature prometida antes de incluirla en el contrato
→ Completar el "Sales-to-Support Handoff Form" antes de la fecha de inicio del cliente:
  - Features especiales prometidas o negociadas
  - Plazos de implementación acordados
  - Nivel de soporte contratado (standard / premium / dedicated)
  - Contactos del cliente y estructura de uso
  - Expectativas específicas comunicadas durante el proceso de venta

Obligaciones de Soporte:
→ Revisar el handoff form en 24 horas y confirmar que puede cumplir con lo prometido
→ Si hay algo que no puede cumplir: notificar a Ventas en 24h para resolverlo antes del onboarding
→ Participar en la llamada de kickoff del cliente nuevo (cuando el deal supera [umbral de ARR])
```

**SLA 4 — Soporte ↔ Soporte: gestión interna de escalaciones y cobertura**

```
LOS ACUERDOS INTERNOS DENTRO DEL EQUIPO DE SOPORTE:

Escalación de ticket a senior/especialista:
→ Un agente puede escalar si lleva más de [N] horas sin resolver
→ El especialista asignado tiene [N] horas para dar respuesta al agente que escala

Cobertura de horarios:
→ Define los turnos, la cobertura de festivos y el proceso de guardia para SEV-1
→ Sin esto, los SEV-1 en festivos se quedan sin atender porque "no era mi turno"

Knowledge base: el agente que resuelve un ticket que no está en la KB tiene la obligación
de añadir el artículo o actualizar el existente en 24 horas.
```

### 📊 La revisión trimestral de los SLA internos

```
FRECUENCIA: trimestral — los SLA que no se revisan se quedan obsoletos o nadie los sigue.

MÉTRICAS QUE REVISAR:
□ Tasa de cumplimiento de cada SLA interno (¿cuántos bugs SEV-2 se resolvieron en plazo?)
□ Número de escalaciones por incumplimiento
□ Tendencia: ¿estamos mejorando o empeorando?
□ SLA externos incumplidos que tuvieron como causa raíz el incumplimiento de un SLA interno

QUIÉN PARTICIPA:
→ Head of Support + representante de cada equipo con SLA
→ La reunión es de revisión y ajuste — no de reproches

OUTPUT:
→ Los SLA ajustados a la realidad actual (si el equipo ha crecido, los plazos pueden mejorar)
→ Los problemas sistémicos que requieren un cambio de proceso, no de SLA
→ Reconocimiento explícito de los equipos que han cumplido sus SLAs
```

### 🔧 Cómo implementar los SLA internos sin que sean papel mojado

La estrategia de implementación progresiva: cómo conseguir el buy-in de cada departamento, dónde documentar los SLAs para que sean accesibles, cómo hacer el tracking automático con las herramientas existentes (Jira, Zendesk) y cómo crear la cultura de accountability sin que la revisión de SLAs se convierta en una reunión de reproches.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'SLA internos, acuerdos nivel servicio interno, customer support operaciones, gestión bugs soporte, handoff ventas soporte',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Lanza tu producto digital como freelance: del concepto a los primeros 1.000€ en 90 días',
                'description'       => 'Crea y lanza tu primer producto digital como freelance (curso online, template, ebook, herramienta) con el proceso paso a paso que minimiza el tiempo de producción y maximiza las posibilidades de generar ingresos desde el primer mes. Con la validación previa al desarrollo, la estrategia de lanzamiento y los canales de distribución.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Creator y Business Coach especializado en freelancers con experiencia ayudando a profesionales independientes a lanzar su primer producto digital rentable — pasando de "tengo una idea" a "tengo clientes pagando" en menos de 90 días sin invertir dinero en publicidad.

Perfil:
- Especialidad: [describe tu servicio o expertise como freelance]
- Audiencia actual: [seguidores en redes / lista de email / comunidad / clientes actuales / sin audiencia todavía]
- Idea de producto: [curso online / template / ebook / herramienta / kit / membresía / ninguna todavía]
- El mayor bloqueo: [no sé qué vender / no tengo audiencia / miedo a que no se venda / no sé cómo construirlo / no tengo tiempo]

## Lanzamiento de Producto Digital — [Especialidad]

### 🧠 El error que hace que el 90% de los productos digitales no se vendan

**El error: construir primero, vender después:**
```
EL CAMINO EQUIVOCADO:
1. Tienes una idea → la llamas "Curso de [X]"
2. Grabas 20 horas de vídeo → 3 meses de trabajo
3. Montas la plataforma → 2 semanas más
4. La lanzas → 3 ventas (a familiares y amigos)
5. Conclusión: "Los productos digitales no funcionan para mí"

EL PROBLEMA: nunca validaste que alguien pagaría por eso antes de construirlo.

EL CAMINO CORRECTO:
1. Tienes una idea → hablas con 10 personas que podrían comprarlo
2. Si hay interés, vendes el acceso anticipado antes de que exista
3. Si se vende, lo construyes con clientes reales pagando (y pagándote por hacerlo)
4. Si no se vende, cambias la idea sin haber perdido 3 meses
```

### 📋 El proceso de 90 días para tu primer producto digital

**SEMANAS 1-2 — Identificación y validación del problema:**

```
PASO 1 — Encuentra el problema que vendes (no el producto):
Tu producto digital debe resolver un problema específico que tu audiencia ya tiene,
no el problema que tú crees que tienen.

Las 3 preguntas de descubrimiento:
□ ¿Qué me preguntan mis clientes o seguidores repetidamente?
□ ¿Qué les lleva más tiempo de su trabajo que podría hacerse más rápido?
□ ¿Cuál es el resultado que quieren conseguir y no saben cómo?

Las respuestas a estas preguntas son tus ideas de producto.

PASO 2 — La validación mínima (habla con personas reales):
→ Identifica 10-20 personas de tu audiencia que podrían ser compradores
→ Contacta a 10 de ellas directamente (DM en LinkedIn, email, Slack)
→ NO preguntes "¿comprarías mi curso de X?" — esa pregunta no valida nada
   La gente dice que sí para ser amable.
→ SÍ pregunta: "¿Cuánto tiempo dedicas a la semana a [el problema]?"
   "¿Cómo lo estás resolviendo ahora?" "¿Cuánto estarías dispuesto a pagar por resolver esto en la mitad de tiempo?"

SEÑALES DE VALIDACIÓN:
✅ 3 de 10 personas dicen "¿cuándo lo tienes? Quiero comprarlo"
✅ Alguien te ofrece pagar por anticipado
✅ Detectas que ya gastan dinero en soluciones alternativas (libros, cursos, consultores)

SEÑALES DE NO VALIDACIÓN:
❌ "Interesante, pero ahora mismo no es prioridad"
❌ "Depende del precio" (sin comprometerse a ningún rango)
❌ Silencio o respuestas genéricas
```

**SEMANAS 3-4 — Diseño del producto mínimo vendible:**

```
EL PRINCIPIO: el producto mínimo vendible no es el mínimo producto posible.
Es el producto más pequeño que resuelve completamente el problema para un segmento específico.

TIPOS DE PRODUCTO DIGITAL POR COMPLEJIDAD (de menor a mayor):

NIVEL 1 — Template o kit (1-5 días de trabajo):
→ Plantilla de Notion, Airtable, Figma, Excel, Google Sheets
→ Precio: €9-€49
→ Ventaja: rapidísimo de producir, fácil de actualizar
→ Ejemplo: "Kit de gestión de proyectos freelance en Notion"

NIVEL 2 — Guía o ebook (1-2 semanas):
→ PDF de 20-50 páginas con el framework que usas con tus clientes
→ Precio: €19-€79
→ Ventaja: bajo tiempo de producción, puedes actualizarlo fácilmente
→ Ejemplo: "La guía de presupuestación para diseñadores freelance"

NIVEL 3 — Workshop o mini-curso grabado (2-4 semanas):
→ 3-6 vídeos de 20-40 minutos + recursos descargables
→ Precio: €49-€197
→ Ventaja: mayor percepción de valor, más argumentos para el precio
→ Ejemplo: "Workshop: crea tu portafolio de diseño en 5 días"

NIVEL 4 — Curso completo (4-12 semanas):
→ 20-50 lecciones, comunidad, soporte
→ Precio: €197-€997
→ Desventaja: mucho tiempo de producción sin validación previa

RECOMENDACIÓN para el primer producto: empieza en el nivel 1 o 2.
Lanza rápido, aprende, itera. El nivel 4 viene después de tener tracción.
```

**SEMANAS 5-8 — Producción y pre-venta:**

```
LA PRE-VENTA: vende antes de terminar de construir
→ Anuncia que estás creando [Producto] y que abres plazas anticipadas con descuento
→ Precio de pre-venta: 30-50% de descuento sobre el precio final
→ Los primeros compradores obtienen acceso anticipado y pueden influir en el contenido
→ Si consigues 5-10 compradores de pre-venta: construye con confianza
→ Si no consigues nadie en 2 semanas: recalibra la propuesta antes de construir

PLATAFORMAS PARA VENDER (sin necesidad de desarrollo):
→ Gumroad: para templates, ebooks, recursos descargables. Comisión: 10% + €0.25
→ Lemon Squeezy: alternativa a Gumroad con más opciones. Comisión: 5% + €0.50
→ Podia / Teachable / Kajabi: para cursos online. Cuota mensual fija + comisión baja
→ Notion + Gumroad: el combo más simple para empezar (tu contenido en Notion,
  el pago en Gumroad, acceso con email del comprador)

PRODUCCIÓN MÍNIMA SUFICIENTE:
→ No necesitas producción de vídeo profesional para un primer producto
→ Screencast + voz clara > producción Hollywood con contenido mediocre
→ Herramientas: Loom (gratis), OBS (gratis), Descript (transcripción y edición automática)
```

**SEMANAS 9-12 — Lanzamiento y distribución:**

```
LA SECUENCIA DE LANZAMIENTO (sin audiencia masiva):

SEMANA 9 — Calentamiento:
→ Publica contenido relacionado con el problema que resuelve tu producto (no hablas del producto todavía)
→ "El mayor error que cometen los diseñadores freelance al presupuestar" (LinkedIn/Instagram)
→ Recoge emails de personas interesadas con un lead magnet relacionado

SEMANA 10 — Anuncio de apertura:
→ "He estado trabajando en algo para resolver [problema]. Abro plazas esta semana"
→ Email a tu lista (aunque sea pequeña — 50 personas es suficiente para empezar)
→ DM directo a las personas con las que validaste en las semanas 1-2

SEMANA 11 — Lanzamiento activo (72 horas):
→ Precio de lanzamiento (válido 72 horas): 20% de descuento sobre precio normal
→ 3 emails en 72 horas: apertura / recordatorio mitad / cierre en 12 horas
→ Actualización en redes con prueba social (primeros compradores, testimonios)

SEMANA 12 — Post-lanzamiento:
→ Recoge feedback de los primeros compradores
→ Responde rápidamente a las preguntas de soporte (los primeros compradores son los que más te enseñan)
→ Pide testimonios a los que han tenido un resultado positivo

CANALES DE DISTRIBUCIÓN SIN AUDIENCIA PROPIA:
→ Productores de newsletter de tu nicho: ofréceles una comisión de afiliado (20-30%)
→ Grupos de LinkedIn o Slack de tu sector: publica con contexto, no con spam
→ AppSumo (para herramientas): marketplace de software y herramientas con audiencia masiva
→ Product Hunt: para herramientas y productos digitales con ángulo tech
```

### 📊 Las métricas de los primeros 90 días que te dicen si vas por buen camino

Los 5 indicadores del éxito del lanzamiento (número de conversaciones de validación, tasa de conversión de pre-venta, coste de adquisición del primer cliente, NPS de los primeros compradores y revenue en el primer mes) y cómo usarlos para decidir si escalar el producto, iterarlo o pivotar a una idea diferente sin haber perdido meses de trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Producto digital freelance, curso online, lanzamiento producto, validación idea, ingresos pasivos freelance',
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
