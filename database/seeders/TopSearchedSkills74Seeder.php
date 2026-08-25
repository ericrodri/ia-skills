<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills74Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Growth hacking para B2B: experimentos de crecimiento en ciclos de venta largos',
                'description'      => 'Adapta las técnicas de growth hacking al contexto B2B con ciclos de venta largos y audiencias pequeñas: experimentos de bajo coste con alto impacto medible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un growth manager con experiencia diseñando y ejecutando experimentos de crecimiento en empresas B2B con ciclos de venta de 1 a 12 meses. El growth hacking típico (virality loops, referral programs, product-led growth) no funciona igual en B2B — necesito estrategias adaptadas a mi contexto. Ayúdame a diseñar un sistema de experimentos de crecimiento para B2B.

**Mi contexto:**
- Producto o servicio: [describe brevemente]
- Ciclo de venta típico: [semanas / meses]
- Ticket promedio: [€X]
- Canal de adquisición actual: [ventas directas / inbound / referidos / eventos]
- Cuello de botella principal: [pocas oportunidades / pipeline que no avanza / bajo trial-to-paid / alto churn]
- Recursos de equipo: [solo yo / 1-2 personas / equipo pequeño]

---

## POR QUÉ EL GROWTH HACKING B2C NO FUNCIONA EN B2B

| Dimensión | B2C Growth | B2B Growth |
|-----------|-----------|-----------|
| Decisión de compra | Individual, emocional | Comité, racional |
| Ciclo | Horas o días | Semanas a meses |
| Audiencia total | Millones | Miles o decenas de miles |
| Efecto viral | Alta probabilidad | Muy limitado |
| Datos para iterar | Rápidos (días) | Lentos (semanas) |
| Palancas de growth | Virality, referral, freemium | Contenido, demos, relaciones, integraciones |

El growth en B2B es más lento pero igualmente sistemático. La diferencia es que los ciclos de feedback son más largos y el volumen de experimentos que puedes correr simultáneamente es menor.

---

## PARTE 1: EL FRAMEWORK DE GROWTH PARA B2B

### El funnel de crecimiento B2B:

```
AWARENESS        → ¿Saben que existo?
CONSIDERATION    → ¿Me están evaluando?
INTENT           → ¿Están listos para decidir?
PURCHASE         → ¿Han comprado?
EXPANSION        → ¿Están comprando más?
ADVOCACY         → ¿Me recomiendan?
```

**El error más común:** Hacer experimentos solo en la parte superior del funnel (awareness) cuando el mayor problema está en la conversión de consideration a intent, o de intent a purchase.

**Cómo identificar dónde está tu cuello de botella:**
```
Leads generados: X
→ Tasa de cualificación (MQL → SQL): X% → Cuello si < 20%
→ Tasa de propuesta enviada: X% → Cuello si < 60%
→ Tasa de cierre de propuesta: X% → Cuello si < 20-30%
→ Tasa de churn primer año: X% → Cuello si > 20%
→ Tasa de expansión: X% → Cuello si < 20%
```

---

## PARTE 2: EXPERIMENTOS DE GROWTH POR ETAPA DEL FUNNEL

### Etapa 1: Awareness — Llegar a los decisores correctos

**Experimento 1.A: LinkedIn Outbound Hiperpersonalizado**
El spam de LinkedIn no funciona. La hiperpersonalización sí.

Protocolo:
1. Identifica 50 empresas del ICP exacto (no 500 empresas genéricas)
2. Investiga cada una: ¿qué cambió recientemente? (nueva financiación, nuevo director, expansión, publicación reciente)
3. Escribe un mensaje de 3 líneas que referencia el evento específico
4. Mide: tasa de respuesta (objetivo > 10%), reuniones obtenidas

**Mensaje de ejemplo:**
```
Vi que [EMPRESA] acaba de lanzar [X] — felicidades.
Trabajo con [TIPO DE EMPRESA] que está creciendo así y les ayudo a [BENEFICIO ESPECÍFICO].
¿Vale la pena que hablemos 20 minutos?
```

**Experimento 1.B: Content Seeding en Comunidades**
En lugar de crear contenido propio (costoso y lento), participa donde ya están tus buyers:
- Grupos de Slack de tu sector
- Comunidades de LinkedIn
- Foros específicos del sector
- Newsletters de nicho

Protocolo: 1 contribución de valor genuina por semana en 3-5 comunidades. Mide: mentions de marca, inbound generado.

---

### Etapa 2: Consideration — Acelerar la evaluación

**Experimento 2.A: ROI Calculator interactivo**
El 70% de los compradores B2B quieren ver el ROI antes de agendar una demo. Dales esa información antes de que te la pidan.

Crea una calculadora de ROI simple (Google Sheets embebido o Webflow) donde el prospecto introduce sus datos y ve el resultado inmediato.

Mide: cuántos la usan, qué datos introducen (insights de segmentación), tasa de conversión a demo post-calculadora vs. sin calculadora.

**Experimento 2.B: Case Studies en Formato Específico**
Los genéricos no funcionan. El buyer quiere ver "alguien como yo".

Segmenta por:
- Tamaño de empresa (startup / pyme / enterprise)
- Sector
- Problema específico (no "mejoramos X" sino "reducimos X en 40%")

Un caso de éxito hiperespecífico vale 10 veces más que uno genérico.

---

### Etapa 3: Intent — Acelerar la decisión

**Experimento 3.A: The Champion Enablement Kit**
El comprador tiene un champion interno. Dale las armas para vender por ti hacia arriba.

Kit incluye:
- One-pager ejecutivo (para el C-suite que no lee tu web)
- Deck de 5 slides "Por qué [TU EMPRESA]" listo para presentar internamente
- FAQ de objeciones con respuestas
- Template de business case editable

Mide: tasa de avance del deal cuando se envía vs. cuando no se envía.

**Experimento 3.B: Prueba de Concepto Estructurada (POC)**
En lugar de un trial libre (que nadie usa), ofrece un POC de 2-4 semanas con:
- Objetivo específico acordado
- Criterios de éxito definidos antes de empezar
- Check-in a mitad del POC
- Presentación de resultados al final

Esto transforma una decisión de "¿me gusta?" a "¿cumplió los criterios que definimos juntos?"

---

### Etapa 4: Expansion y Advocacy

**Experimento 4.A: QBR (Quarterly Business Review) como herramienta de upsell**
La review trimestral no es solo de servicio al cliente — es el momento perfecto para identificar expansión natural.

Estructura de QBR orientado a crecimiento:
1. Resultados conseguidos vs. objetivos (prueba el valor)
2. Nuevos objetivos del cliente para el próximo trimestre
3. ¿Cómo podemos ayudar más? (apertura natural al upsell)

**Experimento 4.B: Programa de Referidos B2B**
El referido B2B no es "trae a un amigo y te damos €10". Es más sofisticado:
- Identifica a los 10-20 clientes más satisfechos (NPS promoters)
- Ofrece algo de valor real a cambio de introductions: acceso anticipado a features, descuento en renovación, créditos de servicio
- Hazlo personal: que el Account Manager pida la introducción en el contexto de una conversación de éxito

---

## PARTE 3: GESTIÓN DE EXPERIMENTOS EN B2B

### El Experimento Ideal en B2B (template):

```markdown
## Experimento: [Nombre]

**Hipótesis:**
Creemos que [acción] para [segmento] producirá [resultado medible]
porque [razonamiento basado en evidencia].

**Palanca de growth:**
¿A qué parte del funnel afecta? [Awareness / Consideration / Intent / Expansion]

**Método:**
¿Qué vamos a hacer exactamente? (máximo 5 pasos)

**Métricas:**
- Métrica primaria: [qué medimos y cuál es el baseline]
- Umbral de éxito: [qué resultado consideramos que el experimento funcionó]

**Recursos necesarios:**
- Tiempo: X horas
- Dinero: €X
- Personas: [lista]

**Duración:** [fechas de inicio y fin]
**Responsable:** [nombre]
```

### Cadencia de experimentos en B2B:
- No intentes correr más de 2-3 experimentos simultáneamente
- Los ciclos de feedback son largos — no cierres un experimento antes de tener datos suficientes
- Documenta todo (incluyendo los que no funcionan) — los experimentos fallidos son los más valiosos

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Diagnóstico del funnel:** Basándome en mi cuello de botella principal, ¿en qué etapa del funnel debo hacer experimentos primero y por qué?

2. **Portafolio de 5 experimentos priorizados:** Diseña 5 experimentos de growth concretos para mi caso, ordenados por impacto esperado y facilidad de implementación, con el template completo del más prioritario.

3. **Secuencia de LinkedIn para mi ICP:** Escribe la secuencia de 3 mensajes (con el gap de días entre cada uno) adaptada a mi tipo de buyer específico.

4. **ROI Calculator:** ¿Qué variables debería incluir en la calculadora de ROI de mi producto? Dame la estructura de la hoja de cálculo con las fórmulas.

5. **Dashboard de growth B2B:** ¿Qué 8 métricas debo seguir semanalmente para tener visibilidad del pipeline y el crecimiento? Dame el formato del dashboard con las fuentes de datos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar experimentos de crecimiento adaptados a empresas B2B con ciclos de venta largos y audiencias pequeñas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'WebSockets y tiempo real: Socket.io, Ably y arquitectura para tu caso de uso',
                'description'      => 'Implementa comunicación en tiempo real eligiendo la arquitectura correcta entre WebSockets, Server-Sent Events, Socket.io o servicios gestionados según tu escala y caso de uso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de backend especializado en sistemas de comunicación en tiempo real con experiencia escalando desde prototipos hasta millones de conexiones concurrentes. Necesito implementar funcionalidad en tiempo real en mi aplicación y quiero elegir la arquitectura correcta para mi caso de uso y escala.

**Mi contexto:**
- Tipo de aplicación: [chat / notificaciones / dashboard en tiempo real / colaboración / juego / streaming de datos]
- Stack backend: [Node.js / PHP / Python / Go / otro]
- Stack frontend: [React / Vue / vanilla JS / app móvil]
- Escala esperada: [< 1k / 1k-10k / 10k-100k / > 100k conexiones concurrentes]
- Infraestructura: [AWS / GCP / Azure / VPS / serverless]
- Presupuesto para servicios: [€0 self-hosted / < €100/mes / < €500/mes / flexible]

---

## COMPARATIVA DE TECNOLOGÍAS DE TIEMPO REAL

### Opción 1: WebSockets puros (protocolo RFC 6455)

**Qué es:** Protocolo de comunicación bidireccional de baja latencia sobre TCP. El cliente y el servidor pueden enviarse mensajes en cualquier momento sin que el otro tenga que solicitarlo.

**Cuándo usar WebSockets puros:**
- Control total sobre el protocolo y la lógica de mensajes
- Stack backend que tiene buen soporte nativo (Node.js, Go, Python asyncio)
- No necesitas broadcasting complejo o salas
- Escala con tu propia infraestructura

**Implementación básica en Node.js (ws library):**
```javascript
const WebSocket = require('ws');
const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', (ws, req) => {
    const userId = authenticateFromRequest(req);

    ws.on('message', (data) => {
        const message = JSON.parse(data);
        handleMessage(userId, message, ws);
    });

    ws.on('close', () => {
        cleanupConnection(userId);
    });

    // Enviar al cliente
    ws.send(JSON.stringify({ type: 'connected', userId }));
});

// Broadcasting a todos los clientes
function broadcast(data) {
    wss.clients.forEach(client => {
        if (client.readyState === WebSocket.OPEN) {
            client.send(JSON.stringify(data));
        }
    });
}
```

**Gotcha crítico:** Con WebSockets puros, escalar horizontalmente requiere sticky sessions o un broker de mensajes (Redis Pub/Sub, NATS) para que los mensajes lleguen al cliente conectado a cualquier instancia.

---

### Opción 2: Socket.io

**Qué es:** Librería que abstrae WebSockets añadiendo: salas (rooms), namespaces, reconexión automática, fallback a polling, y broadcasting simplificado.

**Cuándo usar Socket.io:**
- Chat, notificaciones, colaboración con múltiples salas
- Necesitas reconexión automática sin implementarla tú
- Quieres una API de alto nivel sin gestionar el protocolo

**Escenario de chat con salas:**
```javascript
// Server (Node.js)
const io = require('socket.io')(httpServer);

io.use(authMiddleware); // Autenticación JWT en el handshake

io.on('connection', (socket) => {
    const { userId, roomId } = socket.handshake.auth;

    // Unirse a una sala
    socket.join(`room:${roomId}`);

    // Recibir mensaje
    socket.on('message:send', async (data) => {
        const message = await saveMessage(userId, roomId, data.content);

        // Emitir a todos en la sala (incluyendo el emisor)
        io.to(`room:${roomId}`).emit('message:new', message);
    });

    socket.on('disconnect', () => {
        io.to(`room:${roomId}`).emit('user:left', { userId });
    });
});
```

**Escalado horizontal con Redis Adapter:**
```javascript
const { createAdapter } = require('@socket.io/redis-adapter');
const { createClient } = require('redis');

const pubClient = createClient({ url: process.env.REDIS_URL });
const subClient = pubClient.duplicate();

await Promise.all([pubClient.connect(), subClient.connect()]);
io.adapter(createAdapter(pubClient, subClient));
// Ahora múltiples instancias de Socket.io se sincronizan via Redis
```

---

### Opción 3: Server-Sent Events (SSE)

**Qué es:** Canal unidireccional del servidor al cliente sobre HTTP/2. Más simple que WebSockets para casos donde solo el servidor empuja datos.

**Cuándo usar SSE:**
- Notificaciones push, feeds de actividad, actualizaciones de estado
- NO necesitas que el cliente envíe datos en tiempo real (o si lo hace, usa HTTP normal para eso)
- Quieres simplicity y compatibilidad con proxies HTTP
- Serverless o edge computing (WebSockets tienen peor soporte en Lambda/Edge)

```javascript
// Server (Express)
app.get('/events/:userId', authMiddleware, (req, res) => {
    res.writeHead(200, {
        'Content-Type': 'text/event-stream',
        'Cache-Control': 'no-cache',
        'Connection': 'keep-alive',
    });

    // Mantener conexión viva
    const keepAlive = setInterval(() => {
        res.write(':keepalive\n\n');
    }, 30000);

    // Enviar evento
    const sendEvent = (event, data) => {
        res.write(`event: ${event}\ndata: ${JSON.stringify(data)}\n\n`);
    };

    // Registrar cliente
    addClientConnection(req.userId, sendEvent);

    req.on('close', () => {
        clearInterval(keepAlive);
        removeClientConnection(req.userId);
    });
});
```

---

### Opción 4: Servicios Gestionados (Ably, Pusher, PubNub)

**Cuándo usar un servicio gestionado:**
- No quieres operar infraestructura de real-time
- Necesitas escalar a > 10k conexiones sin invertir en DevOps
- Quieres SDKs para múltiples plataformas (web, iOS, Android)

**Comparativa de servicios:**

| Servicio | Free tier | Precio escala | Características únicas | Latencia |
|---------|-----------|--------------|----------------------|---------|
| Ably | 6M mensajes/mes | Desde $29/mes | Channels, Queues, Pub/Sub, presencia, historia | < 65ms global |
| Pusher | 200k mensajes/día | Desde $49/mes | Más simple, más limitado | < 100ms |
| PubNub | 1M mensajes/mes | Desde $98/mes | Functions en edge, storage | < 50ms global |
| Soketi | Gratis (self-hosted) | Coste infra | Compatible con Pusher API | Variable |

**Ejemplo con Ably en Node.js:**
```javascript
const Ably = require('ably');
const client = new Ably.Rest(process.env.ABLY_API_KEY);

// Publicar un mensaje
const channel = client.channels.get('notifications');
await channel.publish('update', { userId: 123, message: 'Tu pedido está listo' });
```

---

## ÁRBOL DE DECISIÓN: ¿QUÉ TECNOLOGÍA ELEGIR?

```
¿Necesitas que el cliente envíe datos al servidor en tiempo real?
├── No → SSE (más simple, mejor con proxies y serverless)
└── Sí → ¿Cuántas conexiones concurrentes esperas?
          ├── < 5.000 → Socket.io (self-hosted, simple)
          └── > 5.000 → ¿Quieres operar la infraestructura?
                         ├── No → Ably o Pusher (servicio gestionado)
                         └── Sí → WebSockets puros + Redis Pub/Sub + autoscaling
```

---

## PATRONES DE ESCALADO

### El problema de escalar WebSockets / Socket.io:

Un mensaje enviado a un usuario conectado a la instancia B no llega si está en la instancia A. Soluciones:

1. **Sticky sessions (el más simple):** El load balancer siempre envía al mismo cliente a la misma instancia. Fácil, pero no resiste fallos de instancia.

2. **Redis Pub/Sub (el más común):** Cada instancia suscribe a Redis. El mensaje se publica en Redis y llega a todas las instancias, que lo reenvían a sus clientes. Latencia añadida: ~1-2ms.

3. **NATS o Kafka (para alta escala):** Más robusto que Redis para millones de mensajes/segundo pero más complejo de operar.

---

## TAREA PARA CLAUDE

Con mi tipo de aplicación y escala:

1. **Recomendación de arquitectura:** ¿Cuál de las 4 opciones (WebSockets puros / Socket.io / SSE / servicio gestionado) es la correcta para mi caso? Justifica con mis parámetros específicos.

2. **Código de implementación:** Para mi stack (backend + frontend), dame el código de implementación completo del flujo más importante de mi caso de uso.

3. **Plan de escalado:** ¿Cómo escalo la solución cuando pase de X a 10X conexiones concurrentes? ¿Qué cambios de arquitectura son necesarios?

4. **Autenticación y seguridad:** ¿Cómo implemento autenticación JWT en las conexiones WebSocket de forma segura? Dame el patrón recomendado.

5. **Monitorización:** ¿Qué métricas debo monitorizar para detectar problemas en mi implementación de tiempo real? ¿Cómo las instrumentalizo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar comunicación en tiempo real eligiendo la arquitectura correcta entre WebSockets, SSE, Socket.io o servicios gestionados',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de productos de datos: dashboards y visualizaciones para usuarios no técnicos',
                'description'      => 'Diseña dashboards, visualizaciones y herramientas de análisis que los usuarios no técnicos entienden y usan de verdad, evitando los errores más comunes de los data products.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de productos de datos con experiencia creando dashboards y herramientas de análisis que los usuarios no técnicos realmente adoptan. El mayor problema de los data products es que los usuarios no los entienden o no los usan. Ayúdame a diseñar experiencias de datos que sean claras, accionables y adoptadas.

**Mi proyecto:**
- Tipo de producto de datos: [dashboard / reporte / herramienta de exploración / alertas / otro]
- Audiencia principal: [ejecutivos / managers / operaciones / ventas / marketing / mixto]
- Métricas o datos principales: [describe qué datos quieres mostrar]
- Contexto de uso: [diario / semanal / ante decisiones específicas]
- Problema actual: [los usuarios no lo usan / no entienden los datos / el dashboard tiene demasiada información / preguntan siempre lo mismo aunque el dashboard existe]

---

## EL PROBLEMA RAÍZ: LA BRECHA ENTRE DATOS Y DECISIONES

El error más común en el diseño de dashboards: mostrar datos en lugar de responder preguntas.

**Un dashboard orientado a datos:**
"Aquí tienes todas las métricas que hemos calculado."

**Un dashboard orientado a decisiones:**
"Aquí está la respuesta a las preguntas que necesitas responder para hacer tu trabajo."

La diferencia parece semántica. En la práctica, cambia completamente el diseño.

### El framework de las preguntas antes que las visualizaciones:

Antes de diseñar ninguna visualización, responde:
1. ¿Qué decisiones toma el usuario de este dashboard en su semana típica?
2. ¿Qué preguntas le ayudaría a responder un buen dashboard para tomar esas decisiones?
3. ¿Con qué frecuencia necesita esa información?
4. ¿Qué acción toma cuando la información indica que algo va mal?

Si no puedes responder estas 4 preguntas, no empieces a diseñar todavía.

---

## PARTE 1: PRINCIPIOS DE DISEÑO DE DATOS

### Principio 1: Una métrica principal por dashboard
El usuario debe poder responder la pregunta central del dashboard en menos de 5 segundos.

**El problema del "Christmas Tree Dashboard":**
Los dashboards con 30+ métricas en la pantalla principal son imposibles de procesar. El usuario mira, se agobia, y cierra.

**Solución — Jerarquía de información:**
```
Nivel 1 (arriba, grande): LA métrica que importa más
Nivel 2 (segunda línea): 3-5 métricas de contexto
Nivel 3 (debajo del fold): Desglose y detalle para quien quiere profundizar
```

### Principio 2: Contexto, no solo datos
Un número sin contexto no tiene significado. "Revenue: €127.340" no dice nada.
"Revenue: €127.340 (+12% vs. mes anterior, 87% del objetivo del mes)" sí dice algo.

**Template de tarjeta de métrica con contexto:**
```
[NOMBRE DE LA MÉTRICA]
€127.340
▲ +12% vs. mes anterior
▬ 87% del objetivo mensual (€146.000)
```

### Principio 3: Diseña para el estado normal Y el estado de alerta
La mayoría de los dashboards solo diseñan el estado "todo va bien". ¿Cómo se ve el dashboard cuando hay un problema?

Define estados visuales:
- ✅ Verde: en objetivo o por encima
- ⚠️ Amarillo: atención, tendencia preocupante
- 🔴 Rojo: fuera de objetivo, requiere acción

---

## PARTE 2: SELECCIÓN DE VISUALIZACIONES

### El principio de la visualización mínima efectiva:
La mejor visualización es la más simple que comunica el mensaje correctamente. No uses un gráfico de radar cuando una tabla funciona mejor.

### Guía de selección de chart type:

| Qué quieres comunicar | Visualización recomendada | Evitar |
|-----------------------|--------------------------|--------|
| Tendencia en el tiempo | Línea (line chart) | Barras para series largas |
| Comparación entre categorías | Barras horizontales | Pie charts |
| Composición (partes del todo) | Barras apiladas o treemap | Pie/donut charts (>4 segmentos) |
| Distribución | Histograma o boxplot | Pie charts |
| Correlación entre 2 variables | Scatter plot | Dos líneas superpuestas |
| Un valor vs. objetivo | Bullet chart o gauge (simple) | Gauge animado |
| Geografía | Mapa coropléticos | Mapas de burbujas (confusos) |
| Tabla de datos | Tabla con formato condicional | Ninguna visualización |

**¿Cuándo usar una tabla en lugar de un gráfico?**
Cuando el usuario necesita valores exactos, no tendencias. Los ejecutivos frecuentemente prefieren tablas sobre gráficos para datos financieros.

---

## PARTE 3: TEXTO Y NARRATIVA EN DASHBOARDS

### Los insights en lenguaje natural son más poderosos que los gráficos solos:

**Dashboard sin texto:** Muestra una línea de revenue que sube en marzo y baja en abril.
**Dashboard con insight:** "Revenue cayó un 23% en abril. La mayor caída viene del segmento Enterprise (-38%). El equipo de CS está investigando las 3 cancelaciones principales."

**Tipos de texto en dashboards:**
1. **Headline insight:** La observación más importante del período (1-2 frases)
2. **Contexto de métrica:** Por qué el número es relevante ahora
3. **Llamada a la acción:** Qué hacer con esta información
4. **Definición:** Cómo se calcula esta métrica (disponible en hover o tooltip)

---

## PARTE 4: DISEÑO PARA LA ADOPCIÓN

### Por qué los dashboards bien diseñados tampoco se usan:

Los dashboards fallan por 3 razones que no son de diseño visual:
1. **No responden las preguntas reales del usuario** (diseño incorrecto desde el inicio)
2. **Los datos no son de confianza** (el usuario ha visto errores antes)
3. **El acceso es difícil** (el usuario tiene que recordar una URL o abrir otra herramienta)

### El test de adopción de 5 usuarios:
Antes de lanzar, muestra el dashboard a 5 usuarios de tu audiencia objetivo sin explicar nada. Observa:
- ¿A qué miran primero?
- ¿Qué preguntan que el dashboard no responde?
- ¿Qué parte los confunde?
- ¿Qué harían diferente con esta información?

### Estrategia de lanzamiento gradual:
```
Semana 1-2:  Muestra a 3-5 early adopters, itera rápido
Semana 3-4:  Lanzamiento al equipo amplio con demo en vivo
Mes 2:       Check de adopción — ¿quién lo usa? ¿quién no? ¿por qué?
Mes 3:       Primera iteración basada en uso real
```

---

## PARTE 5: ACCESIBILIDAD EN VISUALIZACIONES DE DATOS

**El problema del daltonismo:**
El 8% de los hombres tienen algún tipo de daltonismo. El rojo/verde es la combinación más problemática — y la más usada en dashboards de negocio.

**Paleta accesible para estados:**
- ✅ Éxito/positivo: #0D9488 (teal) en lugar de verde
- ⚠️ Atención: #F59E0B (amber) — seguro para todos los tipos
- 🔴 Error/negativo: #EF4444 añadir siempre símbolo además del color

**Para gráficos de líneas con múltiples series:**
- Nunca diferenciar líneas solo por color
- Usar también: trazo discontinuo vs. continuo, forma del punto (círculo, cuadrado, triángulo), etiqueta directa al final de la línea

---

## TAREA PARA CLAUDE

Con mi proyecto:

1. **Diseño conceptual del dashboard:** Basándome en las métricas que quiero mostrar y la audiencia, propón la estructura del dashboard: qué va arriba, cuántas secciones, qué métricas son primarias y cuáles secundarias.

2. **Selección de visualizaciones:** Para cada métrica o dato que quiero mostrar, recomiéndame la visualización más efectiva y por qué, con alternativas que descartar y la razón.

3. **Las preguntas que el dashboard debe responder:** A partir de la audiencia que me describes, ¿cuáles son las 5-7 preguntas de negocio que el dashboard debe responder en menos de 30 segundos?

4. **Template de insight en lenguaje natural:** Escribe 3 ejemplos de cómo debería redactarse el insight principal del dashboard para mi audiencia (ejecutivos / managers operativos / equipo comercial).

5. **Plan de test con usuarios:** Diseña el protocolo de test de usabilidad de 30 minutos que haría con 3 usuarios antes del lanzamiento, con las tareas y preguntas concretas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar dashboards y visualizaciones de datos que los usuarios no técnicos entienden y adoptan en su trabajo diario',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas consultivas avanzadas: conviértete en el asesor de confianza del cliente',
                'description'      => 'Aplica el modelo de venta consultiva para dejar de ser "el de ventas" y convertirte en el asesor que el cliente llama antes de tomar cualquier decisión relevante.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con 20 años de experiencia en ventas consultivas B2B en sectores de alta complejidad. Quiero pasar de hacer ventas transaccionales a convertirme en el asesor de confianza de mis clientes, alguien que aporta valor más allá del producto que vende. Ayúdame a desarrollar este modelo.

**Mi contexto:**
- Qué vendo: [producto/servicio y sector]
- Ciclo de venta: [duración media del ciclo]
- Tipo de cliente: [perfil del comprador principal]
- Situación actual: [se perciben como transaccionales / ya hay algo de consultoría / quiero diferenciarte de la competencia]
- Principal obstáculo: [el cliente solo habla de precio / no me llaman para decisiones estratégicas / la relación se pierde entre compras]

---

## QUÉ ES LA VENTA CONSULTIVA (Y QUÉ NO ES)

### La diferencia entre vender y asesorar:

| Vendedor transaccional | Asesor de confianza |
|-----------------------|---------------------|
| Llama cuando tiene algo que vender | Llama cuando tiene algo valioso que compartir |
| Escucha para responder objeciones | Escucha para entender el negocio del cliente |
| Habla primero de su producto | Habla primero de los retos del cliente |
| Su red son "contactos" | Su red son relaciones genuinas |
| El cliente lo ve como "el de ventas" | El cliente lo llama antes de decidir |
| Mide el éxito por ventas cerradas | Mide el éxito por el éxito del cliente |

**El asesor de confianza no vende menos — vende más.** Pero no lo parece porque el cliente compra sin presión, vuelve a comprar sin competencia, y refiere sin que se lo piden.

---

## PARTE 1: EL MODELO DE LAS CONVERSACIONES VALIOSAS

### Los 3 tipos de conversación con un cliente:

**Tipo 1 — Transaccional:** "Hola, te llamo para ver si puedo enviarte nuestra nueva propuesta."
→ El cliente lo evita porque siempre le cuesta algo (tiempo o dinero)

**Tipo 2 — Relacional:** "Hola, ¿cómo estás? ¿Qué tal las vacaciones?"
→ Útil para mantener el vínculo pero sin aportar valor

**Tipo 3 — Consultivo/Valioso:** "Hola, vi que vuestra competencia acaba de lanzar X y quería compartir contigo cómo están respondiendo otras empresas del sector."
→ El cliente te recibe porque le aportas algo antes de pedir nada

**El ratio ideal para un asesor de confianza:**
Por cada 1 interacción donde pides algo (una reunión, una propuesta, una decisión), tienes que haber aportado valor 3-5 veces antes.

---

## PARTE 2: EL FRAMEWORK CONSULTIVO

### El modelo Challenger Sale adaptado a B2B complejo:

**Los 6 pasos del ciclo consultivo:**

#### Paso 1: Research profundo antes del primer contacto
No empieces con "¿cuáles son vuestros retos?". Haz el trabajo previo:
- ¿Qué ha cambiado en el sector del cliente en los últimos 6 meses?
- ¿Qué está haciendo su competencia que ellos no están haciendo?
- ¿Qué dicen los analistas del sector sobre los retos de empresas como la suya?
- ¿Qué publicaron en LinkedIn en el último mes?

**Con este research, tus primeras preguntas ya aportan valor:**
"He estado siguiendo el sector y he visto que la regulación X está cambiando cómo trabajan empresas como la tuya. ¿Cómo os está afectando eso internamente?"

#### Paso 2: Diagnóstico, no presentación
La reunión de discovery no es para que te cuenten sus problemas — es para que juntos diagnostiquen algo que el cliente no ha articulado todavía.

**Las 4 capas del diagnóstico:**
1. **Situación:** ¿Cómo está funcionando actualmente el proceso / área que nos interesa?
2. **Problema:** ¿Qué no funciona bien? ¿Qué cuesta más de lo que debería?
3. **Impacto:** ¿Qué le está costando ese problema al negocio? (en €, tiempo, riesgo)
4. **Visión:** ¿Cómo sería el estado ideal?

**Pregunta que cambia el nivel de la conversación:**
"Si resolvieras perfectamente este problema, ¿qué sería posible para tu empresa que ahora no lo es?"

#### Paso 3: Reencuadrar el problema (el diferencial del asesor)
Los mejores asesores no solo escuchan — aportan perspectiva que el cliente no tenía.

**Técnica del "pero también hay algo que quizás no has visto":**
"Lo que me describes es un problema de X. Pero desde lo que veo en otras empresas del sector, detrás de X suele haber Y, que es lo que realmente genera el coste. ¿Han analizado también esa dimensión?"

Esto distingue al asesor del vendedor — el asesor dice cosas que el cliente no sabe todavía.

#### Paso 4: Propuesta de valor co-creada
El cliente no rechaza propuestas que él mismo ha construido. Involúcrale en el diseño.

**Template de co-creación:**
```
"Basándome en lo que me has contado, veo 3 formas de abordar esto.
Antes de decirte cuál creo yo que es la mejor para vosotros,
¿cuáles son los criterios más importantes para ti en esta decisión?"
```

#### Paso 5: Gestión del proceso de decisión interno
El asesor ayuda al cliente a navegar su propia organización.

**Preguntas para entender el proceso interno:**
- "¿Quién más tiene que estar involucrado en esta decisión?"
- "¿Qué tiene que pasar internamente para que esto avance?"
- "¿Qué objeciones crees que vas a encontrar internamente?"
- "¿Cómo puedo ayudarte a preparar esa conversación?"

#### Paso 6: Post-venta como punto de partida, no de fin
La venta termina con el contrato para el vendedor. Para el asesor, empieza ahí.

**Los rituales del asesor post-venta:**
- Check-in a los 30 días: "¿Está yendo como esperabas?"
- Review trimestral de resultados vs. expectativas
- "Anticipo" de novedades relevantes del sector antes de que lleguen
- Introducción a contactos relevantes en su red (dar antes de pedir)

---

## PARTE 3: HABILIDADES CONVERSACIONALES

### La escucha activa de nivel 3:

**Nivel 1:** Escuchar las palabras
**Nivel 2:** Escuchar el significado (qué quiere decir lo que dice)
**Nivel 3:** Escuchar lo que no dice (qué está obviando, qué le preocupa pero no verbaliza)

**Técnica para acceder al nivel 3:**
Después de que el cliente termine de hablar, espera 3 segundos antes de responder. El silencio incómodo le invita a añadir lo que realmente le preocupa.

### Preguntas de asesor vs. preguntas de vendedor:

| Pregunta de vendedor | Pregunta de asesor |
|---------------------|-------------------|
| "¿Cuándo esperáis decidir?" | "¿Qué tiene que ocurrir para que estéis listos para decidir?" |
| "¿Cuál es vuestro presupuesto?" | "¿Cómo evaluáis el ROI de una inversión como esta?" |
| "¿Estáis hablando con más proveedores?" | "¿Qué criterios usaréis para comparar las opciones?" |
| "¿Os ha gustado la propuesta?" | "¿Qué partes resuenan más con lo que necesitáis?" |

---

## TAREA PARA CLAUDE

Con mi contexto de ventas:

1. **Diagnóstico de mi modelo actual:** Basándome en cómo describes tu relación con los clientes, ¿en qué nivel del espectro transaccional-consultivo estás? ¿Cuáles son los 3 cambios más impactantes que puedes hacer esta semana?

2. **Banco de preguntas consultivas:** Para mi tipo de producto y cliente, dame 15 preguntas consultivas que puedo usar en mi próxima reunión de discovery, organizadas por las 4 capas del diagnóstico.

3. **Template de email de valor:** Escribe 3 emails que puedo enviar a clientes existentes esta semana que aporten valor sin pedir nada a cambio, adaptados a mi sector.

4. **Roleplay de objeciones:** Juega el papel de mi cliente más difícil y ponme las 5 objeciones más duras. Luego dame la respuesta consultiva correcta para cada una.

5. **Plan de 90 días hacia el asesoramiento:** ¿Qué hago en los próximos 3 meses para transformar 3 de mis relaciones cliente actuales de transaccionales a consultivas? Dame el plan semana a semana para cada tipo de cliente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar el modelo de venta consultiva para convertirse en el asesor de confianza de los clientes en ventas B2B complejas',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Developer Experience (DX): diseña APIs y SDKs que los developers adoptan solos',
                'description'      => 'Diseña APIs, SDKs y herramientas para desarrolladores que se adoptan de forma orgánica aplicando los principios de Developer Experience que usan Stripe, Twilio y Vercel.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Developer Experience (DX) con experiencia diseñando APIs y SDKs para empresas que venden a desarrolladores. Quiero diseñar o mejorar la experiencia de desarrollador de mi producto para que la adopción sea orgánica, la integración sea rápida y los developers se conviertan en defensores de la plataforma.

**Mi contexto:**
- Tipo de producto: [API REST / SDK / CLI / plataforma de infraestructura / herramienta para devs]
- Audiencia de desarrolladores: [frontend / backend / fullstack / data engineers / DevOps]
- Estado actual: [diseñando desde cero / teniendo una API ya lanzada / reescribiendo la DX]
- Principal problema: [tiempo de integración alto / documentación pobre / errores confusos / abandono en el onboarding]
- Competencia de referencia en DX: [Stripe / Twilio / Vercel / AWS / otro]

---

## ¿QUÉ ES DEVELOPER EXPERIENCE Y POR QUÉ IMPORTA?

### La DX es el product-market fit para audiencias de desarrolladores.

Un developer elige tu API sobre la competencia por 3 razones (en este orden):
1. **Puede integrarse en menos de 15 minutos** (time-to-first-success)
2. **La documentación responde sus preguntas antes de que las tenga** (docs-first design)
3. **Los errores son comprensibles y le dicen qué hacer** (errores como conversaciones)

El precio, las features avanzadas y la escala importan DESPUÉS de superar estos 3 filtros.

---

## PARTE 1: DISEÑO DE API — LOS PRINCIPIOS DE STRIPE

Stripe es el benchmark de DX para APIs. Sus principios:

### Principio 1: Consistencia por encima de todo
El desarrollador aprende una vez cómo funciona tu API y espera que todo siga el mismo patrón.

**Convenciones a mantener absolutamente:**
- Mismo formato de fechas en todos los endpoints (ISO 8601: `2024-03-15T10:30:00Z`)
- Misma nomenclatura: `snake_case` para JSON (estándar APIs REST) o `camelCase` (elige uno)
- Paginación consistente: `cursor`, `limit`, `has_more` — mismo esquema en todos los endpoints de lista
- IDs con prefijo que indica el tipo: `cus_xxx` para Customer, `pay_xxx` para Payment (Stripe style)

### Principio 2: Errores como conversaciones
El error más frustrante para un developer es el que no explica qué hacer.

**Error malo:**
```json
{
    "error": "invalid_request",
    "code": 400
}
```

**Error bueno (estilo Stripe):**
```json
{
    "error": {
        "type": "invalid_request_error",
        "code": "card_declined",
        "message": "Your card was declined.",
        "param": "card",
        "doc_url": "https://docs.tuapi.com/errors/card_declined",
        "request_id": "req_abc123",
        "suggestion": "Try a different payment method or contact your card issuer."
    }
}
```

**Los 5 elementos de un error excelente:**
1. Tipo de error (para manejar programáticamente)
2. Mensaje en lenguaje humano (no un código HTTP genérico)
3. Campo o parámetro causante (si aplica)
4. Enlace a la documentación específica del error
5. Sugerencia de qué hacer para resolverlo

### Principio 3: Idempotencia en operaciones críticas
Las redes fallan. Los desarrolladores reintentan. Si tu API procesa dos veces el mismo pago porque el cliente reintentó, es un problema tuyo, no del developer.

**Implementación:**
```
POST /payments
Header: Idempotency-Key: uuid-generado-por-el-cliente

Si ya existe una request con esta clave, devuelve el resultado original
sin procesar la transacción de nuevo.
```

---

## PARTE 2: DOCUMENTACIÓN QUE CONVIERTE

### La documentación no es un manual — es la experiencia de onboarding.

**Estructura de documentación de alta DX:**

```
1. Quickstart (5 minutos hasta el "Hello World")
   └── Credenciales → Instalación → Primera llamada → Ver resultado

2. Guides (casos de uso completos)
   └── Por flujo, no por endpoint

3. API Reference (referencia exhaustiva)
   └── Cada endpoint con parámetros, tipos, ejemplos reales, errores posibles

4. SDKs y Libraries
   └── El developer prefiere usar su lenguaje, no copiar curl

5. Changelog
   └── Qué cambió, qué se depreca, cuánto tiempo tienen para migrar
```

### El Quickstart — la pantalla más importante de tu documentación:

El objetivo: el developer tiene su primera llamada exitosa en < 10 minutos.

**Template de Quickstart:**
```markdown
# Quickstart

## 1. Obtén tu API Key
[Enlace directo a la sección de API Keys del dashboard — no a la home]

## 2. Instala el SDK
\`\`\`bash
npm install @tuproducto/sdk
\`\`\`

## 3. Tu primera llamada
\`\`\`javascript
import { Client } from '@tuproducto/sdk';

const client = new Client({ apiKey: 'tu_api_key_aqui' });

const result = await client.payments.create({
    amount: 1000,
    currency: 'eur',
    description: 'Mi primer pago'
});

console.log('Pago creado:', result.id);
\`\`\`

## 4. Resultado esperado
\`\`\`json
{
    "id": "pay_abc123",
    "amount": 1000,
    "currency": "eur",
    "status": "succeeded"
}
\`\`\`
```

**Cada fragmento de código en tu documentación debe:**
- Ser ejecutable sin modificaciones (o con las mínimas claramente indicadas)
- Mostrar el resultado esperado inmediatamente debajo
- Estar en los lenguajes de tu audiencia (no solo curl)

---

## PARTE 3: SDK DESIGN

### Los principios del SDK que se adopta solo:

**Principio 1: Descubribilidad**
El developer debe poder descubrir cómo usar el SDK sin leer la documentación, usando solo el autocompletado del IDE.

Esto requiere:
- TypeScript types para todos los parámetros y respuestas
- JSDoc en todos los métodos públicos
- Nombres descriptivos que no requieren conocer la API de memoria

```typescript
// ❌ No descriptivo
await client.create({ t: 'payment', a: 1000, c: 'eur' });

// ✅ Autodescriptivo
await client.payments.create({
    amount: 1000,     // en centavos
    currency: 'eur',
    description: 'Descripción del pago'
});
```

**Principio 2: Patrones idiomáticos del lenguaje**
Un SDK de Node.js debe sentirse como Node.js. Un SDK de Python debe sentirse como Python.

No hagas que el developer piense en "cómo funciona tu API" — haz que piense en su lenguaje.

**Principio 3: Manejo de errores idiomático**
```javascript
// ❌ Antipatrón — el developer tiene que mirar el status de cada respuesta
const { data, error } = await client.payments.create({...});
if (error.code === 'card_declined') { ... }

// ✅ Excepciones tipadas — el developer puede hacer try/catch con tipos
try {
    const payment = await client.payments.create({...});
} catch (e) {
    if (e instanceof CardDeclinedError) {
        // Manejo específico
    }
}
```

---

## PARTE 4: EL TIME-TO-FIRST-SUCCESS (TTFS)

**La métrica más importante de DX:**
El tiempo desde que un developer llega a tu documentación hasta que ve la primera respuesta exitosa de tu API.

**Benchmarks de referencia:**
- Stripe: < 5 minutos (el mejor de la industria)
- Twilio: < 10 minutos
- AWS: 30-60 minutos (complejo pero documentado)
- APIs genéricas: > 1 hora (el developer abandona)

**Cómo medir tu TTFS:**
Haz un test con 5 developers que no conocen tu producto. Mide el tiempo desde que abren la documentación hasta que tienen su primera respuesta exitosa. El promedio es tu TTFS actual.

---

## TAREA PARA CLAUDE

Con mi tipo de producto y audiencia:

1. **Diseño de la API:** Para mi caso de uso principal, propón la estructura de endpoints con naming consistente, los parámetros necesarios y el esquema de respuesta siguiendo los principios de Stripe.

2. **Sistema de errores:** Diseña el sistema de errores para mi API: tipos de error, estructura del JSON de error y los 10 errores más frecuentes con sus mensajes y sugerencias.

3. **Quickstart en 5 minutos:** Escribe el Quickstart completo de mi API/SDK para el lenguaje principal de mi audiencia, con el código ejecutable y el resultado esperado.

4. **SDK interface design:** Propón la interface del SDK para mi caso de uso en JavaScript/TypeScript con TypeScript types, JSDoc y manejo de errores idiomático.

5. **Plan de mejora de DX:** Para mi estado actual (con problemas conocidos), ¿qué 3 cambios haría primero para reducir el TTFS a la mitad?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar APIs, SDKs y documentación con excelente Developer Experience para maximizar la adopción orgánica',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de la fatiga organizacional: cuando todo el equipo está quemado',
                'description'      => 'Identifica y aborda el agotamiento sistémico cuando el burnout no es de una persona sino de todo el equipo, con estrategias estructurales y no solo individuales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en psicología organizacional y liderazgo con experiencia ayudando a equipos y empresas a recuperarse del burnout colectivo. Mi equipo está mostrando señales de fatiga generalizada — no es una persona, es el sistema entero. Necesito ayuda para diagnosticar la causa raíz y diseñar intervenciones que funcionen.

**Mi situación:**
- Mi rol: [manager / director / fundador / CHRO]
- Tamaño del equipo: [X personas]
- Duración del período de alta carga: [X meses]
- Señales observadas: [describe qué ves — rotación alta, bajo rendimiento, silencio en reuniones, errores frecuentes, conflictos, etc.]
- Causa percibida (si tienes hipótesis): [crecimiento muy rápido / reestructuración / proyecto intensivo / cultura de siempre disponible / otro]

---

## FATIGA ORGANIZACIONAL VS. BURNOUT INDIVIDUAL

**El burnout individual** ocurre cuando una persona específica supera su capacidad de recuperación. La intervención es individual: baja médica, coaching, cambio de rol.

**La fatiga organizacional** ocurre cuando el sistema en el que trabajan las personas es estructuralmente agotador. Una persona descansa y vuelve — al sistema que la quemó. Resultado: vuelve a quemarse.

### Las 6 causas estructurales de la fatiga organizacional (Maslach & Leiter):

| Causa estructural | Señales concretas | Intervención estructural |
|-------------------|------------------|--------------------------|
| Sobrecarga de trabajo | Todo es urgente, nadie dice no | Eliminar trabajo, no solo redistribuirlo |
| Falta de control | Microgestión, decisiones centralizadas | Delegar autoridad real, no solo tareas |
| Reconocimiento insuficiente | Éxitos invisibles, errores amplificados | Sistema de reconocimiento explícito |
| Falta de comunidad | Equipos aislados, sin espacio informal | Crear rituales de conexión intencional |
| Percepción de injusticia | Trato inconsistente, reglas que no se aplican igual | Transparencia en decisiones y criterios |
| Conflicto de valores | Lo que se dice no coincide con lo que se hace | Alinear comportamientos con valores declarados |

**Clave:** Si no atacas la causa estructural, cualquier beneficio individual (clases de yoga, día libre extra) tiene efecto placebo. Los empleados los ven como parches — y tienen razón.

---

## PARTE 1: DIAGNÓSTICO — ANTES DE INTERVENIR

### El diagnóstico de fatiga organizacional en 3 niveles:

#### Nivel 1: Señales observables (lo que ves sin preguntar)
- Aumento de la rotación (especialmente voluntaria de personas buenas)
- Más errores que antes con la misma carga
- Reuniones con menos participación y energía
- Más conflictos interpersonales (la gente con poca reserva energética reacciona peor)
- Más absentismo (especialmente lunes y viernes)
- Silencio ante preguntas: "¿Cómo puedo ayudar?" → "Bien, gracias"

#### Nivel 2: Datos cuantitativos (lo que mides)
- eNPS (Employee Net Promoter Score): ¿recomendarías trabajar aquí?
- Tasa de rotación y su tendencia
- Absentismo por incapacidad temporal
- Horas trabajadas fuera de horario (si tienes acceso a datos de herramientas)
- % de OKRs cumplidos — si baja sin que baje el esfuerzo, hay fatiga de fondo

#### Nivel 3: Escucha directa (lo que te cuentan si preguntas bien)
**Las 5 preguntas del diagnóstico de fatiga (para Focus Groups o encuestas anónimas):**
1. "¿Hay algo en cómo trabajamos que te da más energía de la que te consume?"
2. "¿Qué es lo que más te drena en tu semana típica?"
3. "¿Sientes que tienes control sobre cómo organizas tu trabajo?"
4. "¿En algún momento de la semana desconectas completamente del trabajo?"
5. "Si pudieras cambiar una sola cosa de cómo funciona el equipo, ¿qué sería?"

---

## PARTE 2: INTERVENCIONES ESTRUCTURALES (LAS QUE FUNCIONAN)

### Intervención 1: La Auditoría de Trabajo
Antes de añadir recursos, elimina trabajo.

**Protocolo de auditoría de trabajo en 3 semanas:**
- Semana 1: Cada miembro del equipo registra TODAS las tareas que hace en una semana (incluyendo reuniones, emails, coordinación)
- Semana 2: El equipo clasifica cada tarea en: Esencial / Importante pero postponable / Debería existir / ¿Por qué existe esto?
- Semana 3: El manager decide qué para, qué delega, qué elimina

**Resultado típico:** El 20-30% de las tareas son eliminables sin impacto real en el negocio. Pero nadie las elimina porque nadie se ha tomado el tiempo de cuestionarlas.

### Intervención 2: Proteger el "Trabajo Profundo"
El equipo está agotado no solo por cuánto trabaja — sino por cómo trabaja. Las interrupciones constantes son más agotadoras que el trabajo sostenido.

**Medidas concretas:**
- Bloquear de 9:00 a 12:00 como "no meetings time" al menos 3 días a la semana
- Desactivar notificaciones de Slack/Teams fuera de horario acordado
- Reducir el número de reuniones recurrentes: auditar cada 3 meses qué reuniones recurrentes siguen siendo necesarias
- Política de respuesta a emails: no se espera respuesta inmediata salvo que se marque como urgente

### Intervención 3: El "No" Institucional
El equipo tiene fatiga porque no puede decir no. En muchas organizaciones, decir no se percibe como falta de compromiso.

**Cómo crear la cultura del "no" protegido:**
- Como manager, practica el no en público: "Eso es importante pero ahora mismo no podemos — te digo cuándo podemos revisarlo."
- Crea un proceso claro para añadir trabajo: cualquier nueva solicitud urgente requiere que el solicitante identifique qué se saca para meter esto
- Visibiliza el trabajo en curso (Kanban / lista pública de proyectos activos) para que sea obvio cuando el equipo está al límite

### Intervención 4: La Conversación Honesta
La más difícil. Muchas veces la fatiga viene de que el liderazgo no reconoce la situación o no la comunica.

**Template para la conversación del manager con el equipo:**
```
"Quiero ser honesto con vosotros. He visto las señales: [menciona las concretas].
Sé que este período ha sido muy intenso y no he gestionado bien [nombra qué específicamente].

He estado pensando en qué podemos cambiar. Mis propuestas son [lista].
Pero necesito que me ayudéis a entender qué más falta — ¿qué es lo que más necesitáis
que cambie en las próximas 4 semanas?"
```

**Lo más importante de esta conversación:** No hagas promesas que no puedas cumplir. La fatiga organizacional también viene de promesas de "esto mejorará" que nunca se materializan.

---

## PARTE 3: EL PLAN DE RECUPERACIÓN

### Los 3 horizontes de recuperación:

**Inmediato (próximas 2 semanas):**
- Comunicación honesta con el equipo sobre lo que ves y lo que vas a hacer
- Una medida concreta que mejora algo hoy (eliminar una reunión, reducir un report, dar un día libre)
- Señal de que el liderazgo también cambia algo de su comportamiento

**Corto plazo (1-3 meses):**
- Auditoría de trabajo y eliminación del 20% innecesario
- Protección del trabajo profundo
- Revisión de OKRs — ¿son realistas dado el nivel de energía real del equipo?

**Estructural (3-12 meses):**
- Cambio en la cultura de "urgencia perpetua"
- Sistema de reconocimiento
- Procesos que faciliten el no y la priorización

---

## TAREA PARA CLAUDE

Con mi situación descrita:

1. **Diagnóstico de causas raíz:** Basándome en las señales que describes, ¿cuáles son las 3 causas estructurales más probables de la fatiga de mi equipo? ¿Cuál es la más urgente de atacar?

2. **Plan de conversación con el equipo:** Dame el guión completo para la reunión de equipo donde reconozco el problema y propongo las primeras acciones. ¿Qué digo, cómo lo digo y qué NO decir?

3. **Auditoría de trabajo:** Diseña la auditoría de trabajo para mi equipo: el template de registro, cómo facilito la sesión de clasificación y los criterios para decidir qué para.

4. **Las 5 acciones de los próximos 14 días:** ¿Qué 5 cambios concretos y visibles puedo hacer en las próximas 2 semanas que demuestren al equipo que algo está cambiando de verdad?

5. **Cómo evitar que vuelva a ocurrir:** ¿Qué sistema de alertas tempranas debo implementar para detectar la fatiga colectiva antes de que llegue a un nivel crítico?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar y abordar el agotamiento sistémico del equipo con intervenciones estructurales que resuelven la causa raíz',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Factoring y confirming para PYMEs: mejora el ciclo de caja sin deuda bancaria',
                'description'      => 'Entiende cómo usar el factoring y el confirming para anticipar cobros, gestionar pagos a proveedores y optimizar el ciclo de caja de una PYME sin recurrir a crédito bancario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en financiación alternativa para PYMEs con experiencia en operaciones de factoring y confirming en el mercado español. Necesito entender cómo estas herramientas pueden mejorar la liquidez de mi empresa y cómo comparar las opciones disponibles.

**Mi situación:**
- Facturación anual: [€X]
- Período medio de cobro (PMC): [X días]
- Período medio de pago (PMP): [X días]
- Principal problema de caja: [clientes que pagan tarde / necesito pagar antes a proveedores / falta de liquidez para crecer / todo]
- ¿Tienes ya algún producto de financiación de circulante?: [Sí, descuento comercial / Póliza de crédito / No / Otro]
- Tipo de cliente: [grandes empresas / administración pública / PYMEs / mixto]

---

## EL CICLO DE CAJA Y POR QUÉ ES EL MAYOR RETO DE LA PYME

### El ciclo de conversión de caja:

```
Compras materias primas/servicio → Pagas al proveedor (DPP: días)
                                 ↓
                          Produces/prestas el servicio
                                 ↓
                          Facturas al cliente
                                 ↓
                          Cobras al cliente (PMC: días)
                                 ↓
                        BRECHA DE CAJA = PMC - DPP
```

**Si PMC > DPP:** La empresa financia a sus clientes de su propio bolsillo. Una empresa que factura €2M con PMC de 90 días y DPP de 30 días tiene €333k "atrapados" en el ciclo de caja permanentemente.

---

## FACTORING: ANTICIPAR EL COBRO DE TUS FACTURAS

### ¿Qué es el factoring?
El factoring es la venta de las facturas pendientes de cobro a una entidad financiera (factor) que te anticipa el importe a cambio de una comisión.

### Tipos de factoring:

| Tipo | Quién asume el riesgo de impago | Ventajas | Desventajas |
|------|--------------------------------|---------|-------------|
| **Con recurso** | La empresa (tú) | Más barato | Si el cliente no paga, tienes que devolver el anticipo |
| **Sin recurso** | El factor | El factor asume el riesgo de insolvencia del deudor | Más caro, pero proteges tu balance |
| **Confidencial** | El factor (o tú) | El cliente no sabe que has cedido la factura | Más difícil de gestionar |
| **Internacional (forfaiting)** | El factor | Exportaciones con cobertura de riesgo país | Muy específico para exportación |

### ¿Cómo funciona en la práctica?

```
1. Emites factura a cliente por €100.000 con vencimiento a 90 días
2. Cedes la factura al factor
3. El factor te adelanta €96.000-€98.000 (anticipa el 96-98% del nominal)
4. El cliente paga los €100.000 al vencimiento directamente al factor
5. El factor te liquida la diferencia menos sus comisiones
```

### Coste del factoring:

**Componentes del coste:**
- **Tipo de interés (cost of funds):** Sobre el importe anticipado y el número de días hasta vencimiento (Euribor + 1-3%)
- **Comisión de gestión:** 0.1-0.5% sobre el nominal cedido (por la gestión administrativa)
- **Comisión de riesgo** (solo en sin recurso): 0.2-1% adicional

**Fórmula simplificada del coste efectivo:**
```
Coste total = (Tipo interés × Días de anticipo × Nominal) / 360 + Comisión gestión

Ejemplo:
Nominal: €100.000
Días de anticipo: 90
Tipo interés: 5% anual
Comisión gestión: 0.3%

Coste = (5% × 90 × €100.000 / 360) + €300 = €1.250 + €300 = €1.550

TAE efectiva = €1.550 / €100.000 = 1.55% por esta operación
(equivalente a un TAE ~6.2% anual)
```

### ¿Cuándo usar factoring?
- PMC > 60 días con clientes solventes
- Necesitas liquidez para crecer sin esperar a cobrar
- Tu cliente es una gran empresa o administración (solvencia verificable, el factor acepta bien estos deudores)
- Quieres reducir el riesgo de impago sin un seguro de crédito separado (factoring sin recurso)

---

## CONFIRMING: GESTIONAR EL PAGO A TUS PROVEEDORES

### ¿Qué es el confirming?
El confirming es lo contrario del factoring: es un servicio donde un banco gestiona el pago a tus proveedores y les ofrece la posibilidad de cobrar anticipadamente (descuento de pronto pago).

### Cómo funciona:

```
1. Tú confirmas al banco que vas a pagar X facturas de tus proveedores
2. El banco notifica a cada proveedor que su pago está confirmado
3. El proveedor puede:
   a) Esperar al vencimiento normal
   b) Cobrar anticipadamente pagando una pequeña comisión
4. Tú pagas al banco en la fecha de vencimiento original (o la puedes ampliar)
```

**La ventaja para ti (el confirmador):**
- Mejora la relación con proveedores (les ofreces liquidez)
- Puedes negociar mejores condiciones a cambio del confirming
- Simplifica la gestión de pagos (un solo interlocutor)
- En algunos casos, puedes ampliar el plazo de pago a tus proveedores

**La ventaja para el proveedor:**
- Cobra antes de la fecha de vencimiento
- Sin riesgo de impago (el banco confirma el pago)
- Sin negociación con el cliente

### Costes del confirming:

| Quién paga el coste | Cuándo |
|--------------------|--------|
| El proveedor | Cuando cobra anticipadamente (descuento de la comisión del anticipo) |
| La empresa confirmadora (tú) | Comisión de gestión del banco (~0.1-0.3% sobre el nominal) |

---

## COMPARATIVA: FACTORING VS. CONFIRMING VS. PÓLIZA DE CRÉDITO

| Criterio | Factoring | Confirming | Póliza de crédito |
|----------|-----------|-----------|------------------|
| ¿Qué financia? | Tus cuentas a cobrar | Tus cuentas a pagar | Necesidades generales de caja |
| ¿Quién financia? | Una entidad factor | El banco de los proveedores | Tu banco |
| Flexibilidad | Alta (operación a operación) | Alta | Alta |
| Coste típico | 4-8% TAE | Bajo para ti, lo paga el proveedor | 3-7% + comisión apertura |
| Impacto en balance | Reduce cuentas a cobrar | No modifica tu balance (off-balance) | Aumenta deuda |
| Riesgo de impago del cliente | Cubierto (sin recurso) o tuyo (con recurso) | N/A | N/A |

---

## TAREA PARA CLAUDE

Con mi situación de caja:

1. **Diagnóstico de brecha de caja:** Con mis datos de PMC y DPP, ¿cuánto capital de trabajo está "atrapado" en el ciclo de caja? ¿Cuánto podría liberar con factoring o confirming?

2. **Recomendación de producto:** Para mi perfil de clientes y tipo de negocio, ¿factoring con o sin recurso? ¿Confirming? ¿Una combinación? Justifica.

3. **Simulación de coste:** Calcula el coste efectivo del factoring para mi situación específica con los tipos actuales de mercado, y compáralo con el coste de oportunidad de no tener esa liquidez.

4. **Proceso de contratación:** ¿Qué documentación necesito preparar para contratar factoring con un banco o una entidad especializada? ¿Cuáles son las entidades principales en España?

5. **Negociación con proveedores:** Si implemento confirming, ¿cómo lo uso como palanca para negociar mejores condiciones de precio o plazo con mis proveedores?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar factoring y confirming para optimizar el ciclo de caja de una PYME sin incrementar la deuda bancaria tradicional',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance para startups: regulaciones clave al lanzar y en qué orden abordarlas',
                'description'      => 'Navega el mapa regulatorio al lanzar una startup: RGPD, normativa sectorial, contratos básicos y el orden correcto para abordar el compliance sin paralizar el crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y startup legal con experiencia asesorando a empresas en fase early-stage. He lanzado o estoy a punto de lanzar una startup y necesito entender qué regulaciones son relevantes, cuáles son bloqueantes antes de lanzar y cuáles puedo abordar después, sin paralizar el crecimiento por exceso de compliance desde el primer día.

**Mi startup:**
- Tipo de producto: [describe tu producto brevemente]
- Modelo de negocio: [B2C / B2B / marketplace / SaaS / fintech / healthtech / otro]
- Mercado objetivo: [España / UE / global]
- Estado actual: [pre-lanzamiento / beta / ya lanzado con pocos usuarios / crecimiento]
- ¿Tienes asesor legal?: [Sí / No / Buscando]

---

## EL ENFOQUE CORRECTO: COMPLIANCE PROPORCIONAL AL RIESGO

El error de los emprendedores sin background legal: ignorar el compliance completamente hasta que hay un problema.

El error de los emprendedores con demasiado miedo legal: gastar €10k en legal antes de tener 10 usuarios.

**El enfoque correcto:** Compliance proporcional al riesgo — hace lo mínimo necesario para no incurrir en responsabilidad grave, y crece el compliance a medida que crece el negocio.

### La regla del semáforo para startups early-stage:

**🔴 Bloqueante antes de lanzar (no puedes operar sin esto):**
- Requisitos de licencia previa (fintech, healthtech, seguros, juego)
- Registro RGPD básico si recopilas datos personales
- Términos y condiciones + política de privacidad en la web
- Estructura jurídica básica (SL constituida)

**🟡 Importante, abordar en los primeros 3-6 meses:**
- DPA (Data Processing Agreements) con proveedores de cloud y SaaS
- Contratos de empleados y freelancers con cláusulas de PI
- Registro de marca en OEPM
- Cookie banner conforme a RGPD

**🟢 Puede esperar a mayor tracción (6-24 meses):**
- Auditoría de seguridad completa (SOC 2, ISO 27001)
- Política de privacidad avanzada (múltiples idiomas, derechos detallados)
- Gestión formal de riesgos
- Protocolos formales de brechas de seguridad

---

## REGULACIONES CLAVE POR TIPO DE STARTUP

### TODAS LAS STARTUPS — El mínimo universal:

#### 1. RGPD (Reglamento General de Protección de Datos)
Si recopilas cualquier dato personal de usuarios UE, el RGPD aplica — sin excepciones por tamaño.

**Minimum viable RGPD para startups:**

**Paso 1 — Inventario de datos:**
¿Qué datos personales recopilas? (email, nombre, IP, comportamiento en la app, datos de pago)

**Paso 2 — Base legal para cada tratamiento:**
| Dato recopilado | Base legal |
|----------------|-----------|
| Email para newsletter | Consentimiento explícito |
| Datos de contrato | Ejecución del contrato |
| IP y analytics | Interés legítimo (con balance test) |
| Datos de pago | Ejecución del contrato |
| Perfil de comportamiento | Consentimiento (si no es estrictamente necesario) |

**Paso 3 — Documentación básica:**
- Política de privacidad accesible y comprensible
- Cookie policy + banner de consentimiento
- Registro de actividades de tratamiento (RAT) — obligatorio si > 250 empleados, recomendable desde el inicio

**Paso 4 — Proveedores de datos:**
Todo proveedor que trate datos por tu cuenta (AWS, Intercom, Hubspot, Stripe) necesita un DPA firmado. La mayoría los tienen disponibles en sus webs — solo hay que aceptarlos.

---

### STARTUPS CON USUARIOS CONSUMIDORES (B2C)

**Ley General para la Defensa de los Consumidores y Usuarios (LGDCU):**
- Derecho de desistimiento: 14 días para devolución sin causa en compras online
- Información precontractual obligatoria: precio completo (con IVA), características, identidad del vendedor
- Términos y condiciones accesibles antes de la compra

**Ley de Servicios de la Información (LSSI):**
- Identificación del titular de la web (datos de empresa)
- Avisos de cookies conforme a la AEPD
- Comunicaciones comerciales: opt-in para email marketing

---

### FINTECH — Regulación adicional bloqueante:

| Servicio | Licencia necesaria | Organismo | Tiempo aproximado |
|----------|-------------------|-----------|------------------|
| Pagos y transferencias | Entidad de pago / EMD | Banco de España | 6-18 meses |
| Préstamos y crédito | EAFN o EFC | Banco de España | 6-12 meses |
| Inversión y fondos | ESI o SGIIC | CNMV | 12-24 meses |
| Compra/venta cripto | PSAN | Banco de España | 6-12 meses |

**Alternativas para fintech early-stage:**
- **Banking-as-a-Service:** Operar bajo licencia de un banco partner mientras obtienes la tuya (Swan, Railsr, Treezor)
- **Sandbox regulatorio:** Banco de España + CNMV tienen sandbox para probar con usuarios reales bajo supervisión reducida

---

### HEALTHTECH — Regulación crítica:

- **Dispositivos médicos:** El Reglamento MDR (EU 2017/745) clasifica los dispositivos por riesgo. Clase I (bajo riesgo) puede declarar conformidad sin auditoría externa. Clase II-III necesita organismo notificado.
- **Datos de salud:** Categoría especial bajo RGPD — consentimiento explícito obligatorio, medidas de seguridad reforzadas
- **Telemedicina:** La prescripción médica está reservada a médicos colegiados. Las apps de wellness sin diagnóstico ni prescripción tienen menos restricciones.
- **AI Act (2025):** Los sistemas de IA para diagnóstico médico son "alto riesgo" — requisitos de transparencia, auditoría y supervisión humana obligatorios.

---

## CHECKLIST DE COMPLIANCE PRE-LANZAMIENTO

**Semana -4 antes del lanzamiento:**
- [ ] SL constituida, NIF obtenido, cuenta bancaria abierta
- [ ] Contratos con cofundadores y primeros empleados firmados (con cesión de PI)
- [ ] Términos y condiciones + política de privacidad en la web
- [ ] Cookie banner implementado
- [ ] ¿Necesitas licencia previa? Si sí, ¿tienes estrategia para operar mientras la obtienes?

**Semana -1 antes del lanzamiento:**
- [ ] DPAs firmados con todos los proveedores que tratan datos de usuarios
- [ ] Formulario de consentimiento de email marketing con double opt-in
- [ ] Proceso de ejercicio de derechos RGPD (borrado, acceso, portabilidad)
- [ ] Información de contacto AEPD por si llega una reclamación

---

## ERRORES MÁS FRECUENTES DE STARTUPS EN COMPLIANCE

| Error | Consecuencia | Cuándo suele salir a la luz |
|-------|-------------|----------------------------|
| No tener DPA con AWS/GCP | Infracción RGPD sancionable | Auditoría de cliente enterprise o reclamación de usuario |
| T&Cs copiadas de otra empresa | Inservibles, posible responsabilidad | Litigio con usuario o cliente |
| Código de empleados sin cesión de PI | El code no es de la empresa, es del fundador/empleado | Due diligence de inversores o adquisición |
| Sin registro de marca | Pérdida del nombre si alguien lo registra antes | Cuando quieres expandirte o levantar ronda |
| Cookie banner decorativo | Multa AEPD (hasta €300k) | Denuncia de competidor o usuario |

---

## TAREA PARA CLAUDE

Con mi tipo de startup y estado actual:

1. **Mapa de regulaciones aplicables:** ¿Qué regulaciones específicas aplican a mi producto y mercado? Clasifícalas en bloqueante / importante / puede esperar.

2. **Plan de 90 días de compliance:** Dame un plan concreto de 90 días con las acciones legales en orden de prioridad y el coste estimado de cada una.

3. **Documentos que necesito ahora:** ¿Qué documentos legales son imprescindibles para mi lanzamiento? Dame el índice de lo que debe cubrir cada uno.

4. **Estrategia para sectores regulados:** Si mi producto requiere licencia previa, ¿cómo opero de forma legal mientras la obtengo? ¿Qué alternativas existen?

5. **Preguntas para el abogado:** Dame las 10 preguntas que debería hacerle a un abogado especializado en mi sector para optimizar las primeras horas de asesoramiento legal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Navegar el mapa regulatorio al lanzar una startup con enfoque en compliance proporcional al riesgo y al momento de crecimiento',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte proactivo: anticipa los problemas del cliente antes de que contacte',
                'description'      => 'Diseña un sistema de soporte proactivo usando health scores, alertas y outreach automatizado para resolver problemas del cliente antes de que se conviertan en tickets o churn.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en Customer Success con experiencia implementando sistemas de soporte proactivo en empresas SaaS y de suscripción. Quiero pasar de un modelo reactivo (esperar a que el cliente contacte) a uno proactivo (anticiparme a sus problemas). Ayúdame a diseñar el sistema.

**Mi contexto:**
- Tipo de producto: [SaaS / plataforma / app de suscripción]
- Número de clientes: [X]
- Tier de clientes: [todos igual / segmentados por tier / enterprise vs. SMB]
- Churn actual: [X% mensual / anual]
- Herramientas actuales de CS: [CRM, herramienta de soporte, si tienes analytics de producto]
- Principal señal de churn que conoces: [inactividad / quejas antes de irse / nada]

---

## POR QUÉ EL SOPORTE REACTIVO ES UNA TRAMPA DE CRECIMIENTO

En fases early con pocos clientes, esperar a que el cliente contacte puede parecer que funciona. A medida que escala el negocio, este modelo produce:

1. **Churn silencioso:** Clientes que se van sin quejarse nunca. Simplemente dejan de usar el producto y no renuevan.
2. **Problemas sistémicos no detectados:** El mismo bug o punto de fricción afecta a 50 clientes pero solo 3 contactan soporte.
3. **Carga desigual:** El 80% del trabajo de soporte se concentra en el 20% de los clientes más ruidosos, no los más valiosos.

**El soporte proactivo transforma CS de coste a ventaja competitiva.**

---

## PARTE 1: EL HEALTH SCORE — LA BASE DEL PROACTIVISMO

### ¿Qué es un health score?

Un número (típicamente 0-100) que indica cuán "sano" está el cliente en su relación con tu producto. No mide su satisfacción autodeclarada — mide su comportamiento real.

### Los componentes de un health score:

**Dimensión 1: Adopción del producto (40-50% del peso)**
¿Está usando el producto de forma que obtenga valor?

| Señal | Peso positivo | Señal de alerta |
|-------|--------------|-----------------|
| Login frecuente | Alto | Sin login en 7+ días |
| Uso de features clave | Alto | Solo usa features básicas |
| Número de usuarios activos vs. licencias | Medio | < 50% de licencias activas |
| Datos importados / configurados | Medio | Setup incompleto > 30 días |
| Workflows completados | Alto | Workflows iniciados pero no completados |

**Dimensión 2: Outcomes conseguidos (20-30% del peso)**
¿El cliente está logrando los resultados que esperaba?

- Si tienes acceso a los datos de resultado del cliente (exportaciones, informes generados, tareas completadas): úsalos
- Si no tienes acceso directo: usa proxies como tiempo ahorrado estimado o volumen procesado

**Dimensión 3: Engagement con el equipo (15-20% del peso)**
¿Mantiene la relación con vosotros?

- Responde a los emails del CSM: +puntos
- Asistió al último onboarding o training: +puntos
- No responde desde hace 30 días: -puntos
- Canceló 2 reuniones consecutivas: -puntos

**Dimensión 4: Señales de riesgo (factor multiplicador negativo)**
Eventos que, independientemente del resto, indican riesgo:
- Mencionó a un competidor en un ticket
- El sponsor principal dejó la empresa
- La empresa está pasando por una reestructuración conocida
- Reclamación de alto nivel no resuelta

### Fórmula simplificada:

```
Health Score = (Adopción × 0.45) + (Outcomes × 0.25) + (Engagement × 0.20) + (Riesgo × -0.10)
```

**Escala de interpretación:**
- 80-100: Verde — cliente sano, candidato a expansión
- 60-79: Amarillo — monitorizar, posible intervención preventiva
- < 60: Rojo — intervención inmediata necesaria

---

## PARTE 2: ALERTAS Y TRIGGERS DE OUTREACH PROACTIVO

### Los 10 triggers más importantes:

| Trigger | Tiempo de respuesta | Tipo de outreach |
|---------|-------------------|-----------------|
| Sin login en 7 días (cliente activo) | < 24h | Email automático de check-in |
| Sin login en 14 días | < 48h | Contacto personal del CSM |
| Sponsor principal fue a LinkedIn y actualiza trabajo | < 24h | CSM contacta, entiende cambio |
| Feature key no usada después de 21 días | 48h | Email de "¿has probado X?" con tutorial |
| Bajada de > 30% en uso vs. mes anterior | < 48h | Llamada de check-in |
| Ticket de soporte sin respuesta > 48h | Inmediato | Escalación a CSM y respuesta del soporte |
| Review negativa en G2/Capterra | < 4h | Respuesta pública + outreach privado |
| Fecha de renovación en 90 días | Inmediato | Inicio del proceso de renovación |
| Setup incompleto después de 14 días del onboarding | < 24h | Email de onboarding de rescate |
| Health score baja de 60 | < 24h | Outreach personalizado del CSM |

### Templates de outreach proactivo:

**Template 1 — Inactividad de 7 días:**
```
Asunto: ¿Todo bien por [EMPRESA]?

Hola [NOMBRE],

He visto que no has estado por [PRODUCTO] esta semana y quería asegurarme
de que todo va bien.

¿Hay algo en lo que te podamos ayudar? ¿O simplemente ha sido una semana
muy cargada? (Lo entendemos perfectamente)

Si hay algo que no funciona como esperabas o tienes dudas sobre alguna
funcionalidad, este es el momento perfecto para resolverlo.

Un saludo,
[NOMBRE CSM]
```

**Template 2 — Feature no usada (valor no capturado):**
```
Asunto: Una funcionalidad que creo que te ahorrará tiempo

Hola [NOMBRE],

He revisado cómo estás usando [PRODUCTO] y me he dado cuenta de que
todavía no has activado [FEATURE CLAVE] — que es exactamente lo que
vuestro equipo necesita para [BENEFICIO ESPECÍFICO].

En [EMPRESA SIMILAR] les ahorra [TIEMPO/RESULTADO CONCRETO] cada semana.

¿Tienes 15 minutos esta semana para que te lo enseñe? Puedo hacer
un mini-tutorial adaptado a vuestro caso.

[NOMBRE CSM]
```

---

## PARTE 3: SEGMENTACIÓN DEL MODELO PROACTIVO

No todos los clientes necesitan el mismo nivel de atención proactiva. Segmenta tu modelo:

| Tier | Criterio | Modelo de CS | Frecuencia de outreach |
|------|---------|-------------|----------------------|
| Enterprise | > €X ARR | High-touch: CSM dedicado | Mensual (o más frecuente) |
| Mid-market | €Y - €X ARR | Medium-touch: CSM compartido | Trimestral + triggers |
| SMB | < €Y ARR | Low-touch: automatizado + on demand | Solo triggers automáticos |

**El health score es especialmente crítico en el tier low-touch:** Es el único mecanismo que detecta problemas cuando no hay CSM asignado.

---

## PARTE 4: HERRAMIENTAS PARA SOPORTE PROACTIVO

| Herramienta | Función | Precio referencia |
|-------------|--------|-----------------|
| Gainsight | CS platform completa (health scores, playbooks, outreach) | Enterprise |
| ChurnZero | CS platform mid-market | Desde $1.000/mes |
| Intercom | In-app messaging + health signals básicos | Desde $74/mes |
| Totango | CS platform, plan freemium | Gratuito hasta 100 cuentas |
| HubSpot CRM + Sequences | CRM con automatización de outreach | Desde $45/mes |
| Mixpanel/Amplitude + Zapier | Analytics de producto → triggers de Slack/email | Variable |

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Diseño del health score:** Para mi tipo de producto, propón la fórmula del health score con las dimensiones, los indicadores concretos y los pesos recomendados.

2. **Los 5 triggers más importantes para mi caso:** Basándome en mi tipo de producto y lo que sé sobre mi churn actual, ¿qué 5 triggers de outreach debería implementar primero?

3. **Playbook de intervención por nivel de health:** Diseña el playbook de qué hace el CSM (o la automatización) cuando un cliente está en verde, amarillo y rojo.

4. **Templates de outreach personalizados:** Escribe 3 templates de outreach proactivo adaptados a mi producto y audiencia para los 3 triggers más frecuentes de mi caso.

5. **Plan de implementación en 8 semanas:** ¿Cómo implemento el sistema de soporte proactivo con mis herramientas actuales (sin necesariamente comprar una plataforma de CS enterprise)?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar un sistema de soporte proactivo con health scores y outreach automatizado para reducir el churn antes de que ocurra',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión del tiempo como freelance: sistemas de productividad y trabajo profundo',
                'description'      => 'Diseña tu sistema de productividad como freelance: calendario ideal, técnicas de trabajo profundo, gestión de las interrupciones y protección del tiempo de máximo rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en trabajo independiente y freelance con experiencia ayudando a profesionales autónomos a recuperar el control de su tiempo. El problema del freelance no es trabajar más — es trabajar mejor en las horas correctas. Ayúdame a diseñar mi sistema de productividad.

**Mi situación:**
- Tipo de trabajo: [creativo / técnico / consultivo / mixto]
- Horas de trabajo objetivo: [X horas/día / X horas/semana]
- Principal robo de tiempo: [interrupciones de clientes / reuniones no planificadas / redes sociales / tareas administrativas / cambios de contexto constantes]
- ¿Tienes horario fijo o flexible?: [teletrabajo + horario libre / oficina compartida / sin estructura]
- Situación de vida: [sin hijos / con hijos pequeños / pareja que también trabaja desde casa]
- Tu momento de máximo rendimiento: [mañana / tarde / noche / no lo sé]

---

## EL PROBLEMA ESPECÍFICO DEL TIEMPO EN FREELANCE

El empleado tiene una estructura impuesta: horario, reuniones, tareas del manager. El freelance tiene libertad total — que paradójicamente produce más ansiedad y menos productividad.

**Las 3 trampas de tiempo más comunes del freelance:**

**Trampa 1: La disponibilidad perpetua**
Los clientes saben que siempre estás disponible. Cada email espera respuesta en minutos. Cada notificación interrumpe. El trabajo real nunca tiene tiempo suficiente.

**Trampa 2: La mezcla del tiempo**
Sin separación entre "trabajo" y "no trabajo", el freelance trabaja todo el rato pero de forma ineficiente. 10 horas de trabajo fragmentado producen menos que 5 horas de trabajo sostenido.

**Trampa 3: La postergación de lo importante**
Las tareas que más importan (las que generan valor real al cliente o hacen crecer el negocio) son las más difíciles y abstractas. Las urgentes y pequeñas las desplazan constantemente.

---

## PARTE 1: CONOCE TU RITMO ULTRADIAN

### El ciclo ultradiano (90-120 minutos)
El cerebro trabaja en ciclos de alto rendimiento de 90-120 minutos seguidos de un período de menor energía de 20-30 minutos. Este es el patrón natural de productividad que la mayoría de las personas ignora.

**Implicación práctica:** No planifiques bloques de trabajo de más de 90 minutos sin un descanso real. Y no interrumpas un bloque de trabajo profundo antes de los 45-50 minutos — necesitas ese tiempo para entrar en estado de flujo.

### Cómo descubrir tu momento de pico cognitivo:
Durante 1 semana, anota cada 2 horas (en una escala 1-10):
- Energía subjetiva
- Claridad mental
- Motivación para empezar tareas difíciles

Después de 5-7 días, emergerá un patrón. La mayoría de las personas tienen su pico entre las 8-12h o las 16-19h.

---

## PARTE 2: EL CALENDARIO IDEAL DEL FREELANCE

### El principio del Time Blocking (bloqueo de tiempo)

No gestiones el tiempo con listas de tareas — gestiona el tiempo con bloques en el calendario.

**Categorías de bloques:**
1. **Trabajo profundo (Deep Work):** Tu momento de mayor rendimiento para el trabajo más importante. Sin reuniones, sin email, sin interrupciones.
2. **Trabajo administrativo:** Email, facturación, coordinación. Tu momento de menor rendimiento cognitivo.
3. **Reuniones y llamadas:** Agrúpalas en días o momentos concretos para proteger el resto.
4. **Buffer:** 20% del tiempo sin asignar para imprevistos y tiempo de transición.

### El calendario semanal del freelance de alto rendimiento:

**Opción A: Modelo asimétrico (para trabajo creativo/técnico profundo)**
```
Lunes:    Trabajo profundo 9-13h | Reuniones 15-18h
Martes:   Trabajo profundo 9-13h | Admin 14-16h | Buffer 16-18h
Miércoles: Reuniones 9-12h | Trabajo profundo 15-18h
Jueves:   Trabajo profundo 9-13h | Admin 14-16h
Viernes:  Trabajo profundo 9-11h | Review semanal + planificación 11-13h | Libre tarde
```

**Opción B: Modelo por bloques (para trabajo más variado)**
```
Cada día:
Bloque 1 (9-11h): Tarea más importante del día (no reuniones, no email)
Bloque 2 (11-13h): Reuniones o trabajo colaborativo
13-15h: Comida y desconexión real
Bloque 3 (15-17h): Admin, email, tareas de menor concentración
17h: Cierre del día (no trabajo después salvo emergencias planificadas)
```

---

## PARTE 3: TRABAJO PROFUNDO — LA HABILIDAD DIFERENCIAL

Cal Newport definió el trabajo profundo como "la capacidad de concentrarse sin distracciones en una tarea cognitivamente exigente". Para el freelance, es la habilidad que marca la diferencia entre facturar €30k y €100k con el mismo número de horas.

### El protocolo de sesión de trabajo profundo:

**Antes de empezar (10 minutos):**
1. Define LA tarea concreta que vas a hacer (no "trabajar en el proyecto X")
2. Cierra todas las pestañas no relacionadas
3. Silencia el móvil y activa el modo "no molestar"
4. Prepara agua, café o lo que necesites — sin ir a buscarlo durante la sesión
5. Pon un temporizador de 50-90 minutos

**Durante la sesión:**
- Si surge una idea para otra tarea, la apuntas en papel/notas y sigues
- Si sientes el impulso de revisar el email, esperas al final del bloque
- Si te atascas, miras la tarea 10 minutos más antes de pedir ayuda o cambiar

**Después de la sesión (5 minutos):**
- Anota dónde lo dejaste para retomarlo sin fricción
- 10-15 minutos de descanso real (no social media — paseo, café, estiramientos)

### Herramientas para proteger el trabajo profundo:

| Herramienta | Función | Precio |
|-------------|--------|--------|
| Forest App | Bloquea el móvil mientras el "árbol" crece | ~€2 |
| Freedom | Bloquea webs y apps en todos los dispositivos | ~€30/año |
| Focus@Will | Música diseñada para concentración | ~€7/mes |
| Notion / Roam Research | Captura rápida de ideas sin interrumpir el flujo | Gratuito/Pago |
| Status de "no molestar" en Slack | Señal visual a clientes que usas Slack | Incluido |

---

## PARTE 4: GESTIÓN DE LAS EXPECTATIVAS DE LOS CLIENTES

El mayor robo de tiempo del freelance no es interno — es externo: los clientes que esperan disponibilidad inmediata.

### La solución: establecer expectativas desde el inicio

**En el onboarding de cada cliente, comunica:**
- Tus horarios de trabajo y disponibilidad
- El tiempo de respuesta a emails que pueden esperar (< 24h hábiles es razonable)
- Cuándo y cómo contactarte para urgencias reales

**Template de comunicación de disponibilidad:**
```
Trabajo de lunes a jueves de 9:00 a 18:00.

Respondo emails en un plazo máximo de 24 horas laborables.
Para asuntos urgentes que no pueden esperar, mándame un WhatsApp
con "URGENTE" y lo atiendo antes de las 2 horas.

Las reuniones se agendan con al menos 48 horas de antelación a través
de [CALENDLY LINK].
```

### La regla del "batch processing" de emails:
Revisa el email a horas fijas (ejemplo: 9:00 y 16:00), no de forma continua. Responde en lotes — es mucho más eficiente que responder cada email en tiempo real.

**Importante:** Activa un auto-responder que comunique cuándo vas a responder:
```
Gracias por tu mensaje. Reviso el correo dos veces al día.
Te responderé antes de las [HORA] de hoy o mañana a primera hora.
Si es urgente, [ALTERNATIVA DE CONTACTO URGENTE].
```

---

## PARTE 5: LA REVISIÓN SEMANAL — EL RITUAL MÁS IMPORTANTE

David Allen (Getting Things Done) llamó a la revisión semanal "the backbone of GTD". Para el freelance, es el ritual que separa a los que van a la deriva de los que tienen control.

### El formato de revisión semanal (45-60 min, mejor viernes tarde):

**Parte 1 — Vaciar (10 min):**
Vacía tu bandeja de entrada, bloc de notas, email pendiente. Captura todo lo que está en tu cabeza.

**Parte 2 — Revisar (15 min):**
- ¿Qué he completado esta semana? (celebrar)
- ¿Qué no he completado y por qué?
- ¿Hay algo urgente para la semana que viene?

**Parte 3 — Planificar (20 min):**
- Elige las 3 tareas más importantes de la semana siguiente (MITs — Most Important Tasks)
- Bloquea en el calendario cuándo las vas a hacer
- Revisa compromisos con clientes y fechas de entrega

**Parte 4 — Preparar (10 min):**
- Deja el escritorio, digital y físico, listo para el lunes
- Prepara lo que necesitas para la primera tarea del lunes

---

## TAREA PARA CLAUDE

Con mi tipo de trabajo y situación:

1. **Mi calendario semanal ideal:** Diseña mi semana tipo con bloques de tiempo concretos, basándome en mi tipo de trabajo, las horas objetivo y mi momento de mayor rendimiento.

2. **Protocolo de trabajo profundo personalizado:** Adapta el protocolo de trabajo profundo a mi tipo de trabajo y las distracciones específicas que mencionas.

3. **Email a clientes sobre disponibilidad:** Escribe el email que puedo enviar esta semana a mis clientes actuales para establecer expectativas de comunicación sin que se sientan desatendidos.

4. **Sistema de captura y review semanal:** Diseña el sistema de captura de tareas e ideas durante la semana + el formato de mi revisión semanal adaptado a mi contexto.

5. **Plan de 30 días de cambio de hábitos:** ¿Cuál es el primer hábito de productividad que debería instalar esta semana? Dame el plan de 30 días para consolidarlo, empezando con lo mínimo viable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar el sistema de productividad y gestión del tiempo adaptado al trabajo freelance para maximizar el rendimiento y proteger el tiempo de calidad',
                'vote_score'       => 48,
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
