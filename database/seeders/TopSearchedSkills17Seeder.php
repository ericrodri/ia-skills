<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills17Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Lanzamiento de producto en Product Hunt: la estrategia para llegar al top 5 el día del launch',
                'description'       => 'Ejecuta el lanzamiento en Product Hunt que maximiza los votos y la visibilidad. Con la preparación de los 30 días previos, la estrategia del día del lanzamiento, cómo construir la comunidad de apoyo y qué hacer las 48 horas posteriores para capitalizar el momentum.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth Marketer con experiencia ejecutando más de 20 lanzamientos en Product Hunt, incluyendo 5 productos que llegaron al #1 del día y 12 que entraron en el top 5.

Mi contexto:
- Producto: [describe]
- Público objetivo: [perfil]
- Comunidad actual: [tamaño de lista de email / seguidores en redes / usuarios beta]
- Fecha objetivo de lanzamiento: [si ya la tienes]
- Mayor preocupación: [no tengo suficiente audiencia / no sé cómo preparar el listing / el día del launch me paralizo / otro]

## Plan de Lanzamiento en Product Hunt — [Producto]

### 🎯 Lo primero: entender cómo funciona Product Hunt

**Las reglas no escritas:**
- El ranking se basa en votos + engagement (comentarios), pero el algoritmo también pondera la velocidad: los votos de las primeras horas valen más
- El día empieza a las 00:01 hora del Pacífico (PST) — 09:01h en España
- El mejor momento para lanzar: martes o miércoles (menos competencia que lunes, más tráfico que jueves/viernes)
- Los votos de nuevas cuentas creadas el día del lanzamiento valen menos (el algoritmo los filtra)

**Lo que no funciona:**
- Pedir votos de forma masiva a personas que no conocen tu producto → votos de poca calidad
- Listings con screenshots de baja calidad o descripción vaga
- Lanzar un martes sin haber construido nada de comunidad en las semanas previas

### 📅 Los 30 días previos al lanzamiento

**Semana -4:**
- Crea o recarga tu perfil de Product Hunt con actividad genuina (comenta, vota, interactúa)
- Identifica a 5-10 personas con historia en PH (makers con buenos launches) que podrían ser tu Hunter o apoyarte
- Empieza a teaser el lanzamiento en tu newsletter y redes: "estamos preparando algo"

**Semana -3:**
- Prepara todos los assets del listing:
  - Thumbnail (240×240px): icono del producto, legible en pequeño
  - Tagline: <60 caracteres, claro y orientado al beneficio
  - Gallery: 4-6 screenshots o GIFs que muestran el producto en acción
  - Description: el problema que resuelves, cómo lo resuelves, para quién
  - First Comment del maker: la historia detrás del producto (esto es lo que más se lee)

**Semana -2:**
- Envía un teaser a tu lista de email: "lanzamos en Product Hunt el [fecha] — ¿nos apoyas?"
- Comparte en comunidades afines (Slack de [tu nicho], Discord, foros) el upcoming
- Contacta personalmente a tus primeros clientes o beta users: "el día X en Product Hunt, ¿nos dejas un comentario?"

**Semana -1:**
- Publica en tus canales: "lanzamos el [día] en Product Hunt"
- Prepara el email de lanzamiento para enviar el día D a las 9h España
- Prepara el post de LinkedIn y Twitter/X del día D
- Duerme bien — el día del launch es largo

### 🚀 El día del lanzamiento (00:01 PST / 09:01 España)

**9:00h — Envía el email a tu lista:**
```
Asunto: Hoy lanzamos en Product Hunt 🚀

Hola [nombre],

Hoy es el día. [Producto] está en Product Hunt.

Si te parece útil lo que hacemos, un voto y un comentario en Product Hunt
es la mejor forma de ayudarnos a llegar a más personas como tú.

→ Ver [Producto] en Product Hunt: [link]

El equipo de [empresa]
```

**9:00h — Publica en LinkedIn, Twitter, comunidades:**
Los posts con el link al listing.

**Durante el día (cada 2h):**
- Responde TODOS los comentarios del listing — el engagement es parte del ranking
- Comparte actualizaciones en tus redes ("ya somos #X del día, gracias")
- Activa a tu red personal: mensajes directos (no masivos — personalizados)

**Las gracias que generan más comentarios:**
"Hemos llegado al top 10, gracias a todos — aquí está [cosa que no contamos antes sobre el producto]"

### 📊 Las 48h después del lanzamiento
Cómo capitalizar el tráfico, convertir visitantes en usuarios y qué hacer con la credibilidad de "Product Hunt #X del día".
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Product Hunt, lanzamiento de producto, growth, marketing viral',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'WebSockets y tiempo real: implementa notificaciones y actualizaciones en vivo en tu aplicación web',
                'description'       => 'Añade funcionalidad en tiempo real a tu aplicación web: notificaciones push, chat, actualizaciones de dashboard y colaboración en vivo. Con la implementación de WebSockets, el manejo de reconexiones y los patrones de arquitectura para escalar sin servidor de estado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Backend Engineer con experiencia implementando sistemas de tiempo real en aplicaciones web con 10k-1M usuarios concurrentes.

Mi contexto:
- Stack: [Node.js / Python / PHP Laravel / Go / otro]
- Framework frontend: [React / Vue / Svelte / vanilla JS / otro]
- Funcionalidad de tiempo real que necesito: [notificaciones / chat / dashboard en vivo / colaboración / actualizaciones de estado / otro]
- Escala: [<1.000 usuarios concurrentes / 1k-100k / >100k]
- Infraestructura: [VPS único / múltiples servidores / Kubernetes / serverless]

## Tiempo Real en Aplicaciones Web — [Tu caso]

### 🧠 Elegir la tecnología correcta

**WebSockets vs. Server-Sent Events (SSE) vs. Long Polling:**

| Tecnología | Dirección | Cuándo usarla |
|-----------|----------|---------------|
| WebSockets | Bidireccional | Chat, colaboración en vivo, juegos |
| SSE (Server-Sent Events) | Solo servidor→cliente | Notificaciones, dashboards, feeds |
| Long Polling | Pseudo-tiempo real | Fallback o sistemas legacy |

**La regla:**
Si solo necesitas que el servidor avise al cliente → SSE (más simple, reconexión automática).
Si el cliente también envía datos en tiempo real → WebSockets.

### 📡 Implementación con WebSockets

**Backend — Node.js con ws:**
```javascript
import { WebSocketServer } from 'ws'
import http from 'http'

const server = http.createServer()
const wss = new WebSocketServer({ server })

// Mapa de conexiones activas: userId → ws
const clients = new Map()

wss.on('connection', (ws, req) => {
  const userId = getUserIdFromRequest(req) // desde JWT o cookie

  clients.set(userId, ws)

  ws.on('message', (data) => {
    const message = JSON.parse(data.toString())
    handleMessage(userId, message)
  })

  ws.on('close', () => {
    clients.delete(userId)
  })

  ws.on('error', (err) => {
    console.error('WebSocket error:', err)
    clients.delete(userId)
  })

  // Enviar estado inicial al conectar
  ws.send(JSON.stringify({ type: 'connected', userId }))
})

// Función para enviar a un usuario específico
function sendToUser(userId, data) {
  const client = clients.get(userId)
  if (client?.readyState === 1) { // 1 = OPEN
    client.send(JSON.stringify(data))
  }
}

// Función para broadcast a todos
function broadcast(data) {
  clients.forEach(client => {
    if (client.readyState === 1) {
      client.send(JSON.stringify(data))
    }
  })
}
```

**Frontend — con reconexión automática:**
```javascript
class RealtimeClient {
  constructor(url) {
    this.url = url
    this.ws = null
    this.reconnectDelay = 1000
    this.maxDelay = 30000
    this.listeners = new Map()
    this.connect()
  }

  connect() {
    this.ws = new WebSocket(this.url)

    this.ws.onopen = () => {
      console.log('Conectado')
      this.reconnectDelay = 1000 // reset delay
    }

    this.ws.onmessage = (event) => {
      const data = JSON.parse(event.data)
      const handler = this.listeners.get(data.type)
      handler?.(data)
    }

    this.ws.onclose = () => {
      // Reconexión exponencial con jitter
      setTimeout(() => this.connect(), this.reconnectDelay + Math.random() * 1000)
      this.reconnectDelay = Math.min(this.reconnectDelay * 2, this.maxDelay)
    }
  }

  on(type, handler) {
    this.listeners.set(type, handler)
  }

  send(data) {
    if (this.ws?.readyState === WebSocket.OPEN) {
      this.ws.send(JSON.stringify(data))
    }
  }
}

// Uso:
const rt = new RealtimeClient('wss://api.tuapp.com/ws')
rt.on('notification', (data) => showNotification(data))
rt.on('dashboard_update', (data) => updateChart(data))
```

### 🔧 El problema de escalar WebSockets con múltiples servidores

**El problema:**
Si tienes 3 servidores y el usuario A está en el servidor 1, y el usuario B en el servidor 3, el servidor 1 no puede enviarle un mensaje al servidor 3 directamente.

**La solución — Redis Pub/Sub:**
```javascript
import Redis from 'ioredis'

const pub = new Redis()
const sub = new Redis()

// Cada servidor se suscribe al canal
sub.subscribe('realtime')
sub.on('message', (channel, message) => {
  const { userId, data } = JSON.parse(message)
  // Si este servidor tiene la conexión de ese userId, envía
  const client = clients.get(userId)
  if (client?.readyState === 1) {
    client.send(JSON.stringify(data))
  }
})

// Para enviar desde cualquier servidor:
function sendToUser(userId, data) {
  pub.publish('realtime', JSON.stringify({ userId, data }))
}
```

### 🚀 Alternativas gestionadas (cuando no quieres implementarlo tú)
Ably, Pusher, Soketi (self-hosted Pusher) y cuándo tiene sentido usar uno en lugar de implementar WebSockets propios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'WebSockets, tiempo real, notificaciones, chat, Redis',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de UX: encuentra los problemas de usabilidad que están costando conversiones antes de gastar en anuncios',
                'description'       => 'Ejecuta una auditoría de UX sistemática de tu producto o web para identificar los puntos de fricción que hacen que los usuarios abandonen antes de convertir. Con el método heurístico, el análisis de grabaciones de sesión y el plan de acción priorizado.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Researcher especializado en auditorías de usabilidad con experiencia identificando los problemas de UX que impactan directamente en las métricas de conversión y retención.

Contexto:
- Tipo de producto: [web de negocio / SaaS / ecommerce / app móvil / landing page / otro]
- Herramientas de análisis disponibles: [Google Analytics / Hotjar / FullStory / Clarity / Mixpanel / otro]
- Flujos principales a auditar: [registro / checkout / onboarding / flujo de compra / otro]
- Conversión actual: [X%]
- Mayor dolor: [gente que abandona el carrito / que no completa el registro / que llega a la home y se va / que usa solo el 20% de las features / otro]

## Auditoría de UX — [Producto/Flujo]

### 🔍 Los 3 métodos de auditoría (por coste y profundidad)

**Método 1 — Auditoría heurística (tú o el equipo, sin usuarios):**
Revisión experta basada en los 10 principios de Nielsen. Rápida (1-2 días), no requiere usuarios.
Detecta: problemas evidentes de usabilidad, inconsistencias, violaciones de estándares.

**Método 2 — Análisis de grabaciones de sesión (Hotjar / Clarity):**
Revisar 20-30 grabaciones de sesión en los flujos más importantes.
Detecta: dónde hacen clic los usuarios, dónde se quedan parados, dónde abandonan.

**Método 3 — Tests de usabilidad con usuarios reales:**
5 usuarios en un flujo específico bastan para detectar el 85% de los problemas.
Más lento pero más preciso — los usuarios revelan lo que los analytics no muestran.

**La auditoría completa combina los tres. Si tienes un día, empieza con el método 1 + método 2.**

### 🏛️ Los 10 heurísticos de Nielsen (la checklist experta)

Para cada heurístico, revisa tu producto y anota los problemas encontrados:

**1. Visibilidad del estado del sistema:**
¿Siempre sabe el usuario qué está pasando? (loaders, confirmaciones, estados de error)
Señal de problema: botón que se puede hacer clic varias veces sin feedback visual.

**2. Correspondencia entre sistema y mundo real:**
¿El lenguaje es el del usuario o el de los desarrolladores?
Señal de problema: mensajes de error técnicos ("Error 403") en lugar de explicativos.

**3. Control y libertad del usuario:**
¿Puede el usuario deshacer acciones? ¿Tiene salida clara de cualquier flujo?
Señal de problema: formulario sin botón "cancelar" o sin posibilidad de volver al paso anterior.

**4. Consistencia y estándares:**
¿Los elementos similares se comportan de forma similar?
Señal de problema: botones que parecen iguales pero hacen cosas distintas.

**5. Prevención de errores:**
¿Se previenen los errores antes de que ocurran?
Señal de problema: confirmación de email sin validación de formato en tiempo real.

**6. Reconocimiento sobre recuerdo:**
¿El usuario tiene que recordar información de una pantalla a otra?
Señal de problema: checkout que no muestra el resumen del pedido mientras rellenas el pago.

**7. Flexibilidad y eficiencia de uso:**
¿Los usuarios expertos pueden moverse más rápido? (atajos, bulk actions)

**8. Diseño estético y minimalista:**
¿Cada elemento en pantalla es necesario?
Señal de problema: sidebar lleno de opciones que el 80% de usuarios nunca usa.

**9. Reconocer, diagnosticar y recuperarse de errores:**
¿Los mensajes de error dicen qué pasó Y qué hacer?
```
❌ "Algo salió mal"
✅ "Tu tarjeta fue rechazada. Comprueba el número de tarjeta o intenta con otra."
```

**10. Ayuda y documentación:**
¿La ayuda es accesible justo donde el usuario la necesita?

### 📊 El análisis de grabaciones de sesión (Hotjar / Clarity)

**Las 5 señales de fricción que debes buscar:**
1. Clicks de rabia (rage clicks): el usuario hace clic muchas veces en el mismo lugar → algo no funciona o no parece clicable
2. Scroll que baja y sube repetidamente → el usuario busca algo que no encuentra
3. Abandono en formulario en el mismo campo → ese campo tiene un problema
4. Heatmap con clicks en elementos no interactivos → confusión sobre qué es clicable
5. Sesiones cortas (<30 segundos en páginas que deberían tener >2 minutos de tiempo) → el usuario no encontró lo que buscaba

### 📋 El plan de acción priorizado
Clasificación de los hallazgos por impacto en conversión y esfuerzo de implementación, con los quick wins del primer sprint.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Auditoría UX, usabilidad, heurísticos Nielsen, Hotjar, conversión',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Negociación de contratos enterprise: cómo conseguir el sí sin hacer concesiones que destruyen el margen',
                'description'       => 'Negocia contratos enterprise con compras, legal y el área de negocio al mismo tiempo sin perder el control del deal. Con el mapa de stakeholders, las concesiones que puedes hacer y las que nunca, la estrategia de anclaje y cómo manejar el "necesitamos un descuento del 30%".',
                'prompt_content'    => <<<'PROMPT'
Eres un Enterprise Account Executive con experiencia cerrando contratos de 100k a 3M€ con compañías del Fortune 500 y el IBEX 35, manteniendo márgenes sanos y ciclos de venta predecibles.

Contexto del deal:
- Importe del deal: [€]
- Empresa compradora: [tamaño / sector]
- Stakeholders involucrados: [quién está en la negociación]
- Estado actual: [en negociación de precio / revisión legal / pendiente de aprobación del comité / otro]
- Mayor presión que estás recibiendo: [descuento de X% / condiciones de pago / SLA más agresivos / personalización fuera del estándar / otro]

## Negociación de Contratos Enterprise — [Deal]

### 🗺️ El mapa de stakeholders (antes de negociar nada)

**Los 4 roles que siempre existen en una compra enterprise:**

| Rol | Motivación | Qué necesita para decir sí |
|-----|-----------|--------------------------|
| Sponsor / Champion | El éxito del proyecto | Que la solución funcione y lo haga quedar bien |
| Decisor económico | ROI y presupuesto | Justificación financiera del gasto |
| Compras / Procurement | Conseguir el mejor precio | Sentir que consiguió algo |
| Legal | Minimizar riesgo contractual | Cláusulas estándar, sin riesgo ilimitado |

**Error frecuente:** negociar solo con Compras sin tener a tu Champion activo.
Compras nunca dice sí solo — el Champion interno es quien mueve el deal.

**Cómo mantener al Champion activo:**
"¿Puedes ayudarme a entender qué necesita Compras para terminar su proceso? Quiero que esto no se bloquee en procedimientos."

### ⚓ La estrategia de anclaje (cómo el primer número marca el campo de juego)

**Quien pone el primer número, define el campo de negociación.**

Si el cliente pide el precio y tú dices €100.000, la negociación empieza desde €100.000.
Si el cliente dice "lo queremos por €60.000" antes de que tú des precio, la negociación empieza desde €60.000.

**Cómo gestionar si el cliente ancla primero:**
No reacciones inmediatamente. No digas "no podemos". Haz preguntas:
"¿Cómo habéis llegado a esa cifra?"
"¿Eso incluye X y Y, o solo el componente Z?"

Al hacer preguntas, reencuadras el anchor antes de responder.

### 💰 El menú de concesiones (lo que puedes dar y lo que no)

**La regla de oro de las concesiones:**
Cada concesión que haces debe venir con algo a cambio. Las concesiones unilaterales destruyen el margen y señalan que el precio inicial no era serio.

"Puedo considerar un descuento si firmamos un contrato de 2 años en lugar de 1."
"Podría ajustar el precio si incluís más licencias o adelantáis el pago."

**Lo que puedes conceder (menor impacto en margen):**
- Pago anual anticipado vs. mensual
- Extensión del contrato (2-3 años)
- Fase de implementación más corta
- Training adicional incluido
- Referencia o caso de éxito público

**Lo que nunca debes conceder (destruye el margen o el futuro):**
- Reducir el precio sin justificación (el próximo año pedirán más)
- SLA de uptime del 99.99% si tu arquitectura no lo soporta
- Penalizaciones por incumplimiento sin límite máximo
- Cláusula de Most Favored Nation (si das este precio a este cliente, lo das a todos)

### 💬 Cómo manejar "necesitamos un descuento del 30%"

**Nunca respondas directamente sí o no.**

La respuesta que funciona:
"Entiendo que el presupuesto es importante. Para poder explorar si hay alguna forma de ajustar las condiciones, necesito entender mejor vuestras restricciones. ¿El presupuesto total está fijo, o es el desembolso inicial lo que preocupa? ¿Hay flexibilidad si ajustamos el alcance del primer año?"

Esta respuesta abre tres líneas de exploración sin comprometerte con nada.

### 📋 El cierre cuando el deal lleva semanas estancado
La conversación de "decision date" que crea urgencia sin presión artificial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Negociación enterprise, contratos, procurement, ventas B2B',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de cohortes para productos digitales: entiende la retención real y dónde se está fugando el valor',
                'description'       => 'Implementa el análisis de cohortes que revela cómo retienen tus usuarios a lo largo del tiempo, identifica las cohortes que mejor funcionan y toma decisiones de producto basadas en retención real en lugar de métricas de vanidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Analyst con experiencia implementando análisis de cohortes en productos SaaS y apps móviles que han usado estos insights para pasar de retención Day-30 del 8% al 25%.

Contexto:
- Tipo de producto: [SaaS / app / ecommerce / contenido / otro]
- Herramienta de analytics: [Mixpanel / Amplitude / Google Analytics 4 / BigQuery / Redash / otro]
- Periodo de datos disponibles: [N meses]
- Retención actual (si la conoces): [D1: X% / D7: X% / D30: X%]
- Mayor pregunta que quieres responder: [por qué los usuarios se van / qué hace que los que se quedan sean diferentes / cómo afectó el cambio de onboarding de hace 3 meses / otro]

## Análisis de Cohortes — [Producto]

### 🧠 Qué es una cohorte y por qué importa más que el usuario promedio

**El problema con las métricas de promedio:**
Si tienes 1.000 usuarios y mides "usuarios activos esta semana", el número te dice poco.
Un producto puede tener 300 usuarios activos y estar muriendo (si perdió 700 en el mes) o creciendo explosivamente (si ganó 900 nuevos este mes).

**La cohorte:**
Un grupo de usuarios que comparten una característica temporal — generalmente, la semana o el mes en que se registraron.

**La tabla de cohortes:**
| Cohorte | Usuarios | Semana 0 | Semana 1 | Semana 2 | Semana 4 | Semana 8 |
|---------|---------|---------|---------|---------|---------|---------|
| Enero   | 500     | 100%    | 40%     | 25%     | 18%     | 12%     |
| Febrero | 600     | 100%    | 45%     | 30%     | 22%     | 15%     |
| Marzo   | 450     | 100%    | 38%     | 20%     | 14%     | 8%      |

**Lo que te dice esta tabla:**
- La cohorte de Marzo retuvo peor que Enero y Febrero → ¿qué cambió en Marzo? (feature, canal de adquisición, precio)
- La cohorte de Febrero retiene mejor → ¿qué hacía diferente ese mes?

### 📊 Cómo construir el análisis de cohortes

**Con SQL (si tienes acceso a la base de datos):**

```sql
-- Cohortes de usuarios por semana de registro y retención semanal
WITH cohorts AS (
  SELECT
    user_id,
    DATE_TRUNC('week', created_at) AS cohort_week
  FROM users
),
activity AS (
  SELECT
    user_id,
    DATE_TRUNC('week', event_at) AS activity_week
  FROM events
  WHERE event_name = 'session_start'  -- o el evento de retención que defines
),
cohort_activity AS (
  SELECT
    c.cohort_week,
    a.activity_week,
    COUNT(DISTINCT c.user_id) AS active_users,
    DATEDIFF('week', c.cohort_week, a.activity_week) AS week_number
  FROM cohorts c
  JOIN activity a ON c.user_id = a.user_id
  GROUP BY 1, 2, 4
),
cohort_sizes AS (
  SELECT cohort_week, COUNT(DISTINCT user_id) AS cohort_size
  FROM cohorts
  GROUP BY 1
)
SELECT
  ca.cohort_week,
  ca.week_number,
  ca.active_users,
  cs.cohort_size,
  ROUND(100.0 * ca.active_users / cs.cohort_size, 1) AS retention_pct
FROM cohort_activity ca
JOIN cohort_sizes cs ON ca.cohort_week = cs.cohort_week
ORDER BY 1, 2;
```

**Con Mixpanel o Amplitude:**
Ambas tienen reportes de cohortes nativos — selecciona evento de entrada (registro) y evento de retención (sesión, acción core).

### 🔍 Cómo interpretar los patrones de retención

**El patrón de "smiley" (optimista):**
La retención cae fuerte en la primera semana y luego se estabiliza.
Esto es normal — los que se quedan, se quedan. La oportunidad está en reducir el drop inicial.

**El patrón de "bajada continua" (preocupante):**
La retención sigue cayendo semana tras semana sin estabilizarse.
Señal: el producto no tiene suficiente valor para crear hábito.

**El patrón de "mejora por cohorte" (señal positiva):**
Las cohortes más recientes retienen mejor que las más antiguas.
Señal: las mejoras de producto están funcionando.

### 🎯 Las preguntas de cohorte que revelan insights accionables

1. **Cohorte por canal de adquisición:** ¿los usuarios de SEO retienen mejor que los de SEM?
2. **Cohorte por plan:** ¿los usuarios del plan anual retienen más que el mensual?
3. **Cohorte por feature usada en onboarding:** ¿los que completaron X en el día 1 retienen más?
4. **Cohorte por tamaño de empresa (B2B):** ¿las empresas de >50 empleados retienen mejor?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Análisis de cohortes, retención, product analytics, SQL, Mixpanel',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Entrevistas de selección estructuradas: el proceso que predice el desempeño real y evita los sesgos',
                'description'       => 'Diseña el proceso de entrevistas estructuradas que evalúa a los candidatos con evidencias reales de comportamiento pasado en lugar de respuestas ensayadas. Con el scorecard de competencias, las preguntas STAR por rol y el proceso de calibración que evita que el candidato más simpático siempre gane.',
                'prompt_content'    => <<<'PROMPT'
Eres un Talent Director con experiencia diseñando procesos de selección estructurados en empresas de 50 a 1.000 empleados que han mejorado la calidad de contratación y reducido el tiempo para cubrir vacantes.

Contexto:
- Posición a cubrir: [cargo]
- Nivel de la posición: [junior / mid / senior / lead / manager / director]
- Número de entrevistadores en el proceso: [N]
- Proceso actual: [sin estructura / solo entrevistas abiertas / tests pero sin entrevista estructurada / otro]
- Mayor problema: [no sabemos cómo comparar candidatos / el proceso dura demasiado / siempre elegimos al más simpático / las contrataciones no duran / otro]

## Proceso de Entrevistas Estructuradas — [Posición]

### 🧠 Por qué las entrevistas no estructuradas no predicen el desempeño

**La evidencia:**
Las entrevistas sin estructura tienen una validez predictiva de 0.20 (donde 1.0 sería predicción perfecta).
Las entrevistas estructuradas con preguntas de comportamiento pasado tienen validez de 0.51 — más del doble.

**Por qué:**
Las preguntas abiertas como "¿cuáles son tus puntos fuertes?" evalúan la capacidad del candidato de hablar bien de sí mismo, no su desempeño real.
Las preguntas de comportamiento pasado ("cuéntame una vez que...") son mucho más difíciles de fabular.

### 🏗️ El scorecard de competencias

**Paso 1:** Define las 4-6 competencias críticas para el éxito en este rol.

**Para un [cargo] las competencias típicas son:**
[Para cada rol, identifica las específicas — ejemplo para Product Manager:]
1. Definición de prioridades con criterio
2. Comunicación con stakeholders técnicos y no técnicos
3. Orientación a datos y análisis
4. Liderazgo sin autoridad
5. Gestión de la ambigüedad

**Paso 2:** Define qué significa cada nivel (1-4) para cada competencia:

```
Competencia: Comunicación con stakeholders

1 — No cumple: Le cuesta adaptar el mensaje a la audiencia. Da info técnica a negocio o viceversa.
2 — Básico: Comunica de forma adecuada pero no estructura el mensaje para generar impacto.
3 — Sólido: Adapta el mensaje a la audiencia, usa datos para convencer, gestiona expectativas.
4 — Excepcional: Comunica de forma que no solo informa sino que genera alineación y acción.
```

### 🎤 Las preguntas STAR por competencia

**El formato STAR:**
**S**ituación: el contexto en que ocurrió
**T**area: qué debía hacer el candidato
**A**cción: qué hizo específicamente (no el equipo — el candidato)
**R**esultado: qué pasó, medible si es posible

**Ejemplo de preguntas STAR:**

**Para evaluar Priorización:**
"Cuéntame una vez que tenías más trabajo del que podías asumir. ¿Cómo decidiste qué abordar primero y qué dejaste de lado?"

*Follow-ups:* "¿Cómo lo decidiste?" / "¿Qué dejaste sin hacer?" / "¿Cuál fue el resultado?"

**Para evaluar Gestión del conflicto:**
"Cuéntame un momento en que tuviste un desacuerdo significativo con un colega o manager sobre cómo hacer algo. ¿Qué pasó y cómo lo resolviste?"

**Para evaluar Orientación a datos:**
"Dame un ejemplo de una decisión importante que tomaste basándote en datos. ¿Qué datos miraste, qué decidiste y qué pasó?"

### ⚖️ El proceso de calibración (para evitar que cada entrevistador evalúe distinto)

**El briefing pre-entrevista:**
Antes de empezar el proceso con un candidato, todos los entrevistadores se alinean en:
- Las 4-6 competencias a evaluar
- Qué entrevistador evalúa qué competencia (sin solapamiento)
- El umbral de "contratación" en el scorecard

**El debrief post-entrevista:**
1. Cada entrevistador da su puntuación en silencio antes de la discusión
2. El facilitador recoge los scores
3. Discusión de las divergencias >1 punto (¿qué vio cada uno?)
4. Decisión basada en el scorecard, no en "feeling"

### 📋 Cómo calibrar al candidato excelente vs. el muy bueno
La diferencia entre un 3 y un 4 en cada competencia, con ejemplos de respuestas reales de candidatos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Entrevistas estructuradas, selección de personal, STAR, scorecard, recruiting',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Negociación con entidades financieras: consigue mejores condiciones en créditos, líneas ICO y confirming',
                'description'       => 'Negocia con tu banco las condiciones de financiación desde una posición de fuerza. Con la preparación antes de la reunión, los argumentos que funcionan, cómo comparar ofertas de distintas entidades y las cláusulas que debes negociar siempre.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO advisor con experiencia negociando financiación empresarial para PYMEs de 1M a 30M€ con entidades bancarias, consiguiendo mejoras de 0.5 a 2 puntos porcentuales en el tipo de interés y condiciones más favorables en las garantías.

Contexto de la empresa:
- Facturación anual: [€]
- EBITDA (si lo conoces): [€ o margen %]
- Deuda financiera actual: [€]
- Entidades bancarias con las que trabajas: [N entidades]
- Producto financiero que quieres negociar: [préstamo / línea de crédito / línea ICO / confirming / descuento comercial / leasing / otro]
- Importe que necesitas: [€]
- Mayor dificultad: [el banco dice que el tipo no es negociable / no sé qué documentación llevar / siempre acepto lo primero que me ofrecen / no sé si el tipo que me dan es bueno / otro]

## Negociación con Entidades Financieras — [Empresa]

### 🧠 El poder real del empresario ante el banco (que muchos no conocen)

**La relación correcta con el banco:**
El banco no te hace un favor. Te vende un producto financiero. Eres un cliente, no un solicitante de gracia.

**Tu poder de negociación depende de:**
1. La salud financiera de la empresa (el riesgo que representas para el banco)
2. El número de entidades con las que trabajas (o podrías trabajar)
3. La relación integral (¿cuánto negocio das al banco más allá del préstamo?)

**La palanca más poderosa:** tener más de una oferta sobre la mesa.
Un banco que sabe que tienes una oferta del Banco X al 4.5% moverá su tipo del 5.5% al 4.8%.

### 📋 La documentación que te pone en posición de fuerza

**Lo que debes llevar (sin que te lo pidan):**

Dossier financiero completo:
- Balance y cuenta de pérdidas y ganancias de los últimos 3 años
- Previsión de cuenta de resultados del año actual (con el actual a mitad de año comparado)
- Declaración de IVA del último trimestre (prueba de actividad real)
- Declaración del IS del último ejercicio
- Listado de clientes principales (top 5 por facturación, sin datos confidenciales)
- Posición de deuda financiera actual (qué debes a quién y en qué condiciones)

**Por qué llevar esto sin que te lo pidan:**
Reduces el tiempo del proceso, proyectas profesionalidad y controlas la narrativa de tu situación financiera.

### 💬 Los argumentos que funcionan en la negociación

**El argumento de la relación integral:**
"Actualmente domicilio las nóminas, el seguro del coche y el seguro de empresa en vuestra entidad. Si la operación sale adelante, me plantearía también centralizar aquí el confirming de proveedores."

**El argumento de la competencia:**
"He recibido otra propuesta de [entidad X] al [tipo X]%. Para quedarme con vosotros, necesito que os acerquéis a esas condiciones."

**El argumento del riesgo bajo:**
"Llevamos 5 años trabajando juntos, sin impagos. El ratio de deuda/EBITDA es de X, por debajo del sector. El riesgo de esta operación es muy contenido."

### 🔍 Las cláusulas que debes negociar siempre

**En préstamos:**
- **Tipo de interés:** diferencial sobre Euribor. En el mercado actual (2025): <1.5% para PYMEs sanas
- **Comisión de apertura:** negociable. Objetivo: 0% o <0.5%
- **Comisión de amortización anticipada:** que sea 0% — preserva tu flexibilidad
- **Garantías:** que sean solo las necesarias (no avales personales si la empresa tiene suficiente capacidad de pago)
- **Covenants financieros:** si los piden (ratio de deuda, EBITDA mínimo), negocia el umbral y las consecuencias del incumplimiento

**En líneas de crédito:**
- **Coste de disponibilidad:** lo que pagas por la parte no dispuesta (negociable a 0 o mínimo)
- **Período de vigencia:** mínimo 1 año con renovación automática
- **Tipo de interés sobre dispuesto:** objetivo: Euribor + <1.5%

### 📊 Cómo comparar ofertas de distintas entidades (la hoja de cálculo del coste real)
El cálculo de la TAE real incluyendo todas las comisiones y la hoja de comparación entre entidades.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Financiación bancaria, negociación, crédito empresarial, PYME, ICO',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cláusulas de resolución de conflictos en contratos: arbitraje, mediación y jurisdicción en contratos B2B',
                'description'       => 'Diseña las cláusulas de resolución de conflictos que dan a tu contrato la vía de resolución más ágil, menos costosa y más favorable para tu posición. Con el análisis de arbitraje vs. mediación vs. jurisdicción ordinaria y las cláusulas modelo para contratos nacionales e internacionales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en resolución de conflictos y litigación comercial con experiencia redactando cláusulas de resolución de disputas en contratos B2B de 50k€ a 10M€ en España y contextos internacionales.

Contexto:
- Tipo de contrato: [prestación de servicios / compraventa / distribución / software / joint venture / otro]
- Partes del contrato: [dos empresas españolas / empresa española y empresa extranjera / otro]
- Importe típico de los contratos: [€]
- Tu posición: [proveedor / cliente / redactor del contrato]
- Preocupación principal: [que el conflicto sea lento y caro / que la otra parte tenga más recursos para litigar / contratos con partes extranjeras / otro]

## Cláusulas de Resolución de Conflictos — [Tipo de contrato]

### ⚖️ Las 3 vías de resolución y cuándo usar cada una

**1. Jurisdicción ordinaria (Juzgados y Tribunales):**
- **Ventajas:** bajo coste inicial, sentencia ejecutable fácilmente en España, proceso familiar
- **Desventajas:** lenta (1-4 años), pública, poca predictibilidad, jueces generalistas en materias técnicas
- **Cuándo:** contratos nacionales de bajo importe, cuando quieres disuadir reclamaciones por el coste del proceso

**2. Arbitraje:**
- **Ventajas:** más rápido (6-18 meses), confidencial, árbitros especializados en la materia, laudo ejecutable internacionalmente (Convenio de Nueva York)
- **Desventajas:** coste inicial más alto (coste del árbitro y la institución arbitral), no adecuado para contratos pequeños
- **Cuándo:** contratos de alto valor, contratos internacionales, cuando la confidencialidad importa, sectores técnicos (tech, construcción, finanzas)

**3. Mediación (previa al arbitraje o litigación):**
- **Ventajas:** rapidísima (semanas), bajo coste, preserva la relación comercial, el resultado es acordado por las partes
- **Desventajas:** no vinculante si no hay acuerdo, no sirve si la otra parte no colabora
- **Cuándo:** como paso previo obligatorio antes de escalar, cuando la relación comercial importa

### 📄 Cláusulas modelo

**Opción 1 — Jurisdicción ordinaria (contratos nacionales simples):**
```
"Para la resolución de cualesquiera controversias derivadas del presente contrato,
las partes se someten, con renuncia expresa a su propio fuero si fuere diferente,
a la jurisdicción y competencia de los Juzgados y Tribunales de [ciudad],
sin perjuicio de la competencia de otros tribunales en caso de que así lo
determinara una norma imperativa aplicable."
```

**Opción 2 — Mediación previa + arbitraje (contratos de alto valor):**
```
"Cualquier controversia, conflicto o reclamación derivada de o relacionada
con el presente contrato, incluyendo su validez, incumplimiento, terminación
o nulidad, se resolverá del siguiente modo:

(a) Las partes se comprometen a intentar resolver la controversia mediante
mediación administrada por [Centro de Mediación] en el plazo máximo de 30 días
desde que cualquiera de las partes lo solicite por escrito.

(b) Si la mediación no resuelve la controversia en dicho plazo, o si alguna
de las partes no participa en la mediación, la controversia se resolverá
definitivamente mediante arbitraje administrado por la Corte de Arbitraje
de [institución — CEDR / CAM / CIMA / ICC], de conformidad con su reglamento
vigente al momento de la solicitud.

El arbitraje será de [1/3] árbitros, el idioma será el [español/inglés],
y el lugar del arbitraje será [ciudad].

El laudo arbitral será definitivo y obligatorio para las partes."
```

**Opción 3 — Para contratos internacionales:**
```
"El presente contrato se regirá e interpretará de conformidad con la ley española.

Cualquier controversia se someterá a arbitraje internacional administrado
por la Cámara de Comercio Internacional (ICC) de conformidad con su Reglamento
de Arbitraje. El lugar del arbitraje será Madrid. El procedimiento se
desarrollará en idioma [español/inglés]. El número de árbitros será [1/3]."
```

### 🎯 Cómo elegir la institución arbitral en España

| Institución | Coste | Para qué |
|------------|-------|---------|
| CAM (Cámara de Madrid) | Medio | Contratos nacionales >€100k |
| CIMA | Medio | Contratos nacionales y con Iberoamérica |
| CEDR | Alto | Mediación profesional |
| ICC | Alto | Contratos internacionales grandes |

### 📋 La cláusula que muchos olvidan: el fuero aplicable para la ejecución de medidas cautelares
Aunque haya arbitraje, el fuero ordinario puede ser necesario para medidas urgentes como el embargo preventivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Resolución de conflictos, arbitraje, mediación, contratos B2B, derecho mercantil',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer feedback loop: cómo recoger, analizar y actuar en los comentarios de los clientes de forma sistemática',
                'description'       => 'Implementa el sistema de feedback de clientes que transforma los comentarios en decisiones de producto y acciones de soporte sin morir en un océano de datos cualitativos. Con los canales de recogida, el proceso de análisis y el cierre del loop que hace que el cliente sepa que fue escuchado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Experience con experiencia implementando sistemas de feedback en empresas de 100 a 5.000 clientes que han usado el feedback para reducir el churn y aumentar el NPS en 15-30 puntos.

Contexto:
- Tipo de producto: [SaaS / plataforma / servicio / app]
- Número de clientes: [N]
- Feedback actual: [ninguno / encuestas ad hoc / NPS sin seguimiento / comentarios en el chat sin procesar / otro]
- Herramientas: [Intercom / Zendesk / HubSpot / Typeform / otro]
- Mayor problema: [mucho feedback pero no sabemos qué hacer con él / no recogemos suficiente / el feedback va a soporte pero no llega a producto / otro]

## Sistema de Customer Feedback Loop — [Empresa]

### 🔄 El feedback loop completo (las 4 fases)

**Fase 1 — Recoger:** crear puntos de contacto en los momentos de mayor señal
**Fase 2 — Analizar:** identificar patrones, priorizar y etiquetar
**Fase 3 — Actuar:** llevar los insights a las personas que pueden hacer algo con ellos
**Fase 4 — Cerrar el loop:** decirle al cliente que fue escuchado (y qué se hizo)

La mayoría de empresas hace bien la fase 1 y mal las fases 2, 3 y 4.

### 📡 Fase 1: Los canales de recogida por tipo de feedback

**NPS (Net Promoter Score) — para medir lealtad y detectar promotores/detractores:**
- Cuándo: tras 30-90 días de uso (cuando el usuario ya tiene criterio)
- Qué preguntar: "¿Con qué probabilidad recomendarías [producto] a un colega?" (0-10)
- Follow-up abierto: "¿Cuál es la razón principal de tu puntuación?"
- Frecuencia: trimestral o semestral (no mensual — fatiga de encuesta)

**CSAT (Customer Satisfaction) — para medir satisfacción post-interacción:**
- Cuándo: tras resolver un ticket de soporte (dentro de las 24h del cierre)
- Qué preguntar: "¿Qué tal fue tu experiencia con nuestro soporte?" (1-5 estrellas)
- Follow-up: "¿Qué podríamos haber hecho mejor?"

**In-app feedback — para feedback sobre features específicas:**
- Cuándo: tras que el usuario completa (o abandona) una feature nueva
- Qué preguntar: "¿Cómo valorarías [feature X]?" + caja de texto
- Herramientas: Intercom, Productboard, Canny

**Entrevistas de usuario — el feedback más rico:**
- Cuándo: al detectar patrones en el feedback cuantitativo o al diseñar features
- Frecuencia objetivo: 2-3 entrevistas por semana (cualquier miembro del equipo de producto)
- Selección: mix de mejores clientes, clientes en riesgo y ex-clientes (churned)

### 🏷️ Fase 2: Cómo analizar y etiquetar el feedback

**El sistema de etiquetado:**
Cada pieza de feedback recibe:
- **Tipo:** bug / feature request / UX / precios / soporte / otro
- **Impacto:** alto / medio / bajo (según el % de clientes que lo mencionan)
- **Segmento:** plan / industria / tamaño de empresa

**Herramientas para análisis:**
- Notion o Airtable para centralizar y etiquetar feedback manualmente (<100 piezas/mes)
- Dovetail o Condens para análisis cualitativo de entrevistas
- Productboard o Canny para feature requests con voting

**El ritual mensual de revisión del feedback:**
1 hora con los equipos de producto y CS: "¿qué nos están diciendo los clientes este mes?"
Output: 3-5 insights accionables con datos de frecuencia.

### 📣 Fase 4: Cerrar el loop (lo que hace que el cliente confíe en que le escuchas)

**Para feedback individual (NPS detractor, queja de soporte):**
```
"Hola [nombre],

Gracias por compartir tu experiencia con [problema]. Tu feedback llegó al equipo de producto y [descripción de la acción tomada o timeline para resolverlo].

Si tienes más comentarios, puedes escribirme directamente aquí.

[Nombre]
Customer Experience"
```

**Para feedback agregado (feature requests con muchos votos):**
Changelog público o email "lo construimos gracias a tu feedback" cuando la feature se lanza.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Feedback de clientes, NPS, CSAT, feedback loop, customer experience',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Marca personal digital para profesionales: de invisible a referente en tu sector en 12 meses',
                'description'       => 'Construye la marca personal digital que te convierte en referente en tu nicho y hace que los mejores clientes vengan a ti en lugar de competir por precio. Con la estrategia de posicionamiento, los canales correctos para tu perfil y el sistema de contenido que es sostenible a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Personal Branding Strategist con experiencia ayudando a profesionales de distintos sectores a pasar de "desconocido" a "referente" en su nicho en 12-18 meses, atrayendo mejores clientes y aumentando sus tarifas un 50-200%.

Mi perfil:
- Profesión / especialidad: [describe]
- Experiencia: [N años]
- Logros más relevantes: [describe los 2-3 más importantes]
- Audiencia objetivo: [empresas / profesionales / particulares — sector y tamaño]
- Canales actuales: [ninguno / LinkedIn / Twitter / newsletter / blog / otro]
- Objetivo: [más clientes / mejores clientes / aumentar tarifas / empleo / conferencias / otro]

## Estrategia de Marca Personal — [Tu nombre o alias]

### 🎯 El posicionamiento: la decisión más importante

**El error más frecuente:** intentar ser relevante para todos.
"Soy consultor de marketing" → invisible en un mar de consultores de marketing.
"Soy la persona que ayuda a clínicas dentales a llenar su agenda con el sistema de Google Ads que diseñé específicamente para el sector dental" → referente para clínicas dentales.

**Las 3 dimensiones del posicionamiento:**
1. **Quién eres:** tu expertise más diferenciador (no lo que sabes, sino lo que solo tú o pocos hacen a tu nivel)
2. **Para quién:** el perfil más específico al que sirves mejor
3. **Con qué resultado:** el outcome medible que produces

**El ejercicio del posicionamiento:**
Responde las 3 preguntas:
- ¿Para qué tipo de cliente eres la mejor opción disponible?
- ¿Cuál es el problema específico que resuelves mejor que nadie?
- ¿Cuál es el resultado que un cliente puede esperar razonablemente?

La intersección es tu posicionamiento.

### 📡 El canal correcto para tu perfil (no todos los canales)

**LinkedIn:** para profesionales B2B, consultores, recruiters, directivos.
Ventaja: el decision-maker está aquí. Desventaja: requiere constancia de 3+ posts/semana.

**Twitter/X:** para tech, startups, inversores, early adopters de ideas.
Ventaja: la conversación intelectual llega lejos. Desventaja: audiencia más pequeña en España.

**Newsletter:** para construir una audiencia propia (sin depender de algoritmos).
Ventaja: la más valiosa a largo plazo. Desventaja: lenta de construir.

**YouTube/Podcast:** para posicionarse como experto con contenido de profundidad.
Ventaja: la autoridad que genera es difícil de alcanzar con texto. Desventaja: más inversión de tiempo.

**La regla del canal principal:**
Domina uno antes de empezar el segundo. La mediocridad en 3 canales vale menos que la excelencia en 1.

### 📝 El sistema de contenido sostenible

**El problema con la mayoría de estrategias de contenido:**
Requieren crear algo nuevo cada día → agotamiento → abandono.

**El sistema pillar + repurposing:**
1. Cada semana, crea 1 pieza de contenido "pilar" (post largo, artículo, hilo, video)
2. De esa pieza, extrae 3-5 piezas más cortas (quotes, datos, preguntas, versiones cortas)
3. Distribuyes la pieza pilar + las derivadas a lo largo de la semana

**Las categorías de contenido que posicionan (y las que entretienen pero no convierten):**
- Posiciona: tu punto de vista sobre algo del sector / errores que comete tu cliente ideal / casos de éxito / tu proceso / contradicciones del sector
- Entretiene pero no posiciona: humor sin relación con tu expertise / contenido demasiado amplio sin opinión

### 🤝 Las conversaciones que aceleran el crecimiento
Cómo construir relaciones con otros referentes del sector sin parecer oportunista y sin gastar tiempo que no tienes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Marca personal, personal branding, LinkedIn, posicionamiento, freelance',
                'vote_score'        => 45,
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
