<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills20Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'TikTok y Reels para B2B: el formato corto que convierte atención en pipeline sin bailar',
                'description'       => 'Aprovecha el video corto para posicionarte como referente en tu sector B2B y atraer leads cualificados. Con los formatos que funcionan para profesionales, la estructura del video de 30-60 segundos que retiene y convierte, y cómo sistematizar la producción sin estudio ni equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Social Media Strategist con experiencia usando TikTok e Instagram Reels para marcas y profesionales B2B que han generado pipeline de ventas con video de formato corto sin recursos de producción profesionales.

Contexto:
- Tu sector B2B: [describe]
- Audiencia objetivo: [cargo / sector / tamaño de empresa]
- Experiencia con video: [nunca lo he hecho / algún intento sin estrategia / tengo canal pero no convierte]
- Recursos: [solo yo con el teléfono / tenemos equipo / presupuesto para producción básica]
- Objetivo: [brand awareness / leads / comunidad / posicionamiento como experto]

## Video Corto B2B — TikTok y Reels

### 🧠 Por qué el video corto sí funciona en B2B (aunque lo dudes)

**El mito:** "Mi audiencia son directivos y no están en TikTok"
**La realidad:** LinkedIn Reels, Instagram Reels y TikTok tienen audiencias B2B crecientes. El decisor de compra también consume contenido en estas plataformas — fuera del contexto laboral, con la guardia más baja.

**La diferencia del video corto B2B vs. B2C:**
No necesitas bailar ni hacer challenges. Tu formato es:
- La opinión directa sobre un tema del sector (talking head de 30-45 segundos)
- El error que comete tu cliente ideal (hook de curiosidad)
- El proceso que haces visible de algo que normalmente es invisible
- El antes y después de un caso real

### 🎬 Los 5 formatos que funcionan para B2B

**Formato 1 — La opinión directa:**
```
[Hook 0-3s]: "Esto que todos hacen en [área] está mal."
[Desarrollo 3-25s]: explica por qué y cuál es la alternativa correcta
[CTA 25-30s]: "Si quieres saber más, sígueme / comenta X"
```
Ejemplo: "El 90% de las empresas que hacen cold email están cometiendo este error..."

**Formato 2 — El proceso revelado:**
Graba cómo haces algo que tu audiencia quiere saber hacer.
No el resultado — el proceso. La gente consume procesos porque le dan control.
Ejemplo: "Cómo analizo una campaña de Google Ads en 5 minutos"

**Formato 3 — El error frecuente:**
"3 errores que comete [tu cliente ideal] al [hacer algo que tú resuelves]"
Funciona porque tu audiencia se reconoce en los errores y el video les da valor inmediato.

**Formato 4 — La reacción o comentario:**
Reacciona a una tendencia, noticia o contenido del sector con tu perspectiva.
Alta viralidad porque engancha con algo que ya es tendencia.

**Formato 5 — El caso de éxito (sin revelar al cliente):**
"Un cliente llegó con [problema]. Lo que hicimos fue [proceso]. El resultado: [métricas]."
Sin nombrar al cliente pero con números reales.

### 📐 La estructura de los primeros 3 segundos (donde se decide todo)

El 70% de los usuarios hace scroll en los primeros 3 segundos si el hook no engancha.

**Hooks que funcionan:**
```
"Esto te va a sorprender..."
"Nadie te cuenta esto sobre [tema]..."
"El error que le cuesta dinero a [tu cliente ideal]"
"[Número] cosas que hacen los mejores [tu sector]"
"Así es cómo [resultado sorprendente] en [tiempo]"
```

**Lo que no funciona como hook:**
"Hola, soy [nombre] y hoy os voy a hablar de..." → scroll garantizado.

### 📱 La producción mínima viable (sin estudio)

**El setup de €0:**
- Teléfono en vertical (resolución 1080×1920)
- Luz natural de frente (ventana detrás de la cámara, nunca detrás tuyo)
- Micrófono de solapa (~€15-25 en Amazon): la mejor inversión de producción
- Subtítulos siempre (el 80% ve sin sonido en móvil)

**El proceso de grabación en 30 minutos:**
1. Escribe el script en 3 puntos (no leas, habla con el script en mente)
2. Graba 3 tomas (la primera siempre es de calentamiento)
3. Edita con CapCut o InShot: añade subtítulos automáticos + música de fondo baja
4. Publica en Instagram Reels + TikTok + LinkedIn (con pequeñas adaptaciones)

### 📊 Cómo convertir las visualizaciones en leads
El CTA que lleva al viewer de la plataforma a tu email list, DM o llamada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'TikTok B2B, Reels, video corto, contenido, marketing digital',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'GraphQL vs REST: cuándo usar cada uno y cómo implementar GraphQL en tu API sin over-engineering',
                'description'       => 'Toma la decisión correcta entre GraphQL y REST para tu proyecto y aprende a implementar GraphQL cuando es la elección adecuada. Con el análisis de cuándo GraphQL gana claramente a REST, la implementación básica con Apollo o Pothos y los errores más comunes al pasarse a GraphQL.',
                'prompt_content'    => <<<'PROMPT'
Eres un API Architect con experiencia diseñando e implementando APIs con REST y GraphQL en proyectos de 10k a 10M usuarios activos.

Mi contexto:
- Stack backend: [Node.js / Python / PHP / Go / Ruby / otro]
- Stack frontend: [React / Vue / Next.js / móvil nativo / otro]
- API actual: [sin API / REST existente / considerando el cambio / GraphQL sin problemas / ambas]
- Número de clientes de la API: [solo el frontend propio / múltiples frontends / APIs públicas / partners]
- Problema actual: [overfetching — el frontend recibe más datos de los que necesita / underfetching — necesito N requests para un flujo / endpoints que nadie sabe qué devuelven / otro]

## GraphQL vs REST — Cuándo Usar Cada Uno

### ⚖️ La decisión honesta: la mayoría de proyectos no necesita GraphQL

**REST es la elección correcta cuando:**
- Tienes un solo cliente (tu frontend) y puedes diseñar los endpoints a medida
- Los datos son relativamente simples y los endpoints son estables
- Necesitas caché HTTP nativa (CDN, proxies) sin configuración extra
- Tu equipo no tiene experiencia con GraphQL (la curva de aprendizaje es real)
- Tienes requisitos de streaming, uploads de archivos o webhooks como casos principales

**GraphQL gana claramente cuando:**
- Tienes múltiples clientes con necesidades de datos diferentes (web + móvil + app de terceros)
- Los clientes necesitan datos altamente variables en cada vista (el frontend sabe qué necesita, el backend no)
- Tienes un grafo de datos complejo con muchas relaciones entre entidades
- El overfetching y underfetching son problemas reales, no hipotéticos

### 🏗️ Implementación de GraphQL con Node.js (Apollo Server)

**Schema básico:**
```javascript
import { ApolloServer } from '@apollo/server'
import { startStandaloneServer } from '@apollo/server/standalone'

const typeDefs = `#graphql
  type User {
    id: ID!
    name: String!
    email: String!
    posts: [Post!]!
  }

  type Post {
    id: ID!
    title: String!
    content: String
    author: User!
    createdAt: String!
  }

  type Query {
    user(id: ID!): User
    users: [User!]!
    post(id: ID!): Post
  }

  type Mutation {
    createPost(title: String!, content: String, authorId: ID!): Post!
  }
`

const resolvers = {
  Query: {
    user: async (_, { id }, { db }) => db.user.findUnique({ where: { id } }),
    users: async (_, __, { db }) => db.user.findMany(),
  },
  User: {
    posts: async (parent, _, { db }) =>
      db.post.findMany({ where: { authorId: parent.id } }),
  },
  Mutation: {
    createPost: async (_, { title, content, authorId }, { db }) =>
      db.post.create({ data: { title, content, authorId } }),
  },
}

const server = new ApolloServer({ typeDefs, resolvers })
const { url } = await startStandaloneServer(server, {
  context: async () => ({ db: prismaClient }),
  listen: { port: 4000 },
})
```

**Query desde el cliente:**
```javascript
// El cliente pide exactamente lo que necesita
const GET_USER_POSTS = gql`
  query GetUserPosts($userId: ID!) {
    user(id: $userId) {
      name
      posts {
        id
        title
        createdAt
      }
    }
  }
`
// Una sola request — sin overfetching
const { data } = useQuery(GET_USER_POSTS, { variables: { userId: '1' } })
```

### 🐌 El problema N+1 en GraphQL (el más importante a resolver)

```javascript
// ❌ El resolver ingenuo genera N+1 queries:
User: {
  posts: async (parent, _, { db }) =>
    db.post.findMany({ where: { authorId: parent.id } })
  // Para 100 users → 100 queries a la base de datos
}

// ✅ Con DataLoader (batching + caching):
import DataLoader from 'dataloader'

const postsByAuthorLoader = new DataLoader(async (authorIds) => {
  const posts = await db.post.findMany({
    where: { authorId: { in: authorIds } },
  })
  // Agrupar por authorId
  return authorIds.map(id => posts.filter(p => p.authorId === id))
})

User: {
  posts: (parent, _, { loaders }) =>
    loaders.postsByAuthor.load(parent.id)
  // Para 100 users → 1 query total
}
```

### 🔐 Autorización en GraphQL
La diferencia entre autenticación (quién eres) y autorización (qué puedes ver) en el contexto de GraphQL, y cómo implementarla sin repetir la lógica en cada resolver.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'GraphQL, REST API, Apollo Server, DataLoader, diseño de API',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Investigación de usuarios: el proceso de entrevistas que revela lo que las analíticas no muestran',
                'description'       => 'Ejecuta el proceso de investigación cualitativa con usuarios que descubre las motivaciones, frustraciones y comportamientos reales que hay detrás de los datos de analytics. Con la guía de entrevista, las técnicas para que el usuario hable de verdad y el proceso de síntesis que convierte conversaciones en insights accionables.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Researcher con experiencia ejecutando más de 500 entrevistas de usuario que han generado insights que cambiaron decisiones de producto, rediseño de interfaces y estrategias de go-to-market.

Contexto:
- Pregunta de investigación: [qué quieres entender — por qué los usuarios no completan X / qué les frustra de Y / qué necesitan que aún no tienen]
- Tipo de usuario a entrevistar: [usuarios actuales / ex-clientes / potenciales clientes / non-users]
- Número de entrevistas planificadas: [N — mínimo recomendado: 5-8]
- Experiencia previa con entrevistas: [ninguna / alguna pero informal / tengo estructura pero quiero mejorar]
- Tiempo disponible: [N horas en total]

## Proceso de Entrevistas de Usuario — [Proyecto]

### 🧠 La diferencia entre encuesta y entrevista (y cuándo usar cada una)

**Encuesta:** te dice QUÉ hacen o piensan los usuarios (cuantificable).
**Entrevista:** te dice POR QUÉ lo hacen o piensan (cualitativo, contexto y motivación).

**Las encuestas no revelan:**
- Por qué el usuario tomó esa decisión
- Qué alternativas consideró
- Qué emoción tuvo en ese momento
- Qué hará diferente la próxima vez

**Las entrevistas sí revelan eso** — y es esa información la que cambia el producto.

### 🔭 Paso 1: Reclutar a los usuarios correctos

**El error más frecuente:** entrevistar a los que son fáciles de contactar (el equipo, amigos, etc.)

**Los criterios de reclutamiento:**
Define con precisión quién es relevante para tu pregunta de investigación:
- ¿Han tenido el problema que quieres entender?
- ¿Son representativos del perfil de usuario que te importa?
- ¿Son suficientemente comunicativos para una entrevista? (no todo el mundo lo es)

**Fuentes de reclutamiento:**
- Tus usuarios actuales (email de invitación con incentivo)
- Redes sociales (post en LinkedIn, Twitter, grupos de nicho)
- UserTesting.com / Respondent.io (plataformas de reclutamiento de participantes)
- Clientes que hayan dado feedback positivo o negativo reciente

**El incentivo:** €25-75 en Amazon/PayPal por 45-60 minutos. En B2B, a veces basta con el reconocimiento.

### 📋 La guía de entrevista (el script que nunca sigues al pie de la letra)

**La guía no es un cuestionario.** Es un mapa de los temas que quieres explorar, con preguntas de ejemplo.

**Estructura de 60 minutos:**

**5 min — Calentamiento:**
"Cuéntame un poco sobre ti y sobre cómo usas [producto/herramienta/servicio] en tu día a día."
Objetivo: crear comodidad, entender el contexto del usuario.

**45 min — Exploración profunda:**
Las preguntas que responden tu pregunta de investigación.

**Las preguntas que funcionan:**
```
"¿Puedes contarme la última vez que [hiciste X]? ¿Qué pasó exactamente?"
"¿Qué estabas intentando conseguir en ese momento?"
"¿Qué fue lo más difícil de ese proceso?"
"¿Cómo lo resolviste al final?"
"Si pudieras cambiar una sola cosa de [producto/proceso], ¿cuál sería?"
```

**Las preguntas que no funcionan:**
```
"¿Te gustaría que [producto] tuviera X?" → siempre dicen sí
"¿Crees que X sería útil?" → responde lo que cree que quieres escuchar
"¿Qué debería hacer [producto]?" → el usuario no es el diseñador
```

**10 min — Cierre:**
"¿Hay algo que crees que debería preguntarte y no te he preguntado?"
"¿Hay alguien más que crees que debería hablar conmigo?"

### 🏷️ Síntesis: de conversaciones a insights accionables

**El método de affinity mapping:**
1. Transcribe o anota las observaciones clave de cada entrevista en post-its (1 observación por post-it)
2. Agrupa los post-its por tema (sin forzar categorías predefinidas — deja que los grupos emerjan)
3. Nombra cada grupo con una frase que capture el patrón: "Los usuarios no saben que existe la función X" / "La primera experiencia genera confusión porque..."
4. Prioriza los grupos por frecuencia (cuántas entrevistas lo mencionaron) e impacto

**El insight accionable:**
No es "los usuarios están frustrados con la navegación".
Es "los usuarios no encuentran [función X] en la primera semana porque asumen que está en [sección Y], cuando en realidad está en [sección Z]."

El segundo insight tiene un "cómo resolverlo" obvio. El primero no.

### 📊 Cuántas entrevistas necesitas
La curva de saturación — por qué 5-8 entrevistas suelen ser suficientes para un problema bien definido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'User research, entrevistas de usuario, UX research, qualitative research',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Propuesta comercial ganadora: la estructura que conecta con el problema real y cierra sin negociar precio',
                'description'       => 'Redacta propuestas comerciales que el cliente lee de principio a fin porque hablan de su problema, no de tu empresa. Con la estructura de la propuesta que vende, el pricing presentado para reducir el escrutinio y cómo presentar la propuesta en persona para multiplicar la tasa de cierre.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Consultant con experiencia escribiendo y presentando propuestas comerciales en sectores B2B con tasas de cierre del 45-60% en propuestas presentadas en persona.

Contexto:
- Tu servicio o producto: [describe]
- El cliente de esta propuesta: [sector, tamaño, cargo del decisor]
- Lo que sabes de su problema: [describe lo que descubriste en las reuniones previas]
- Precio que vas a proponer: [€ — rango o cifra]
- Formato habitual de propuesta: [email con PDF / presentación en persona / herramienta como PandaDoc / otro]

## Propuesta Comercial — [Cliente / Proyecto]

### 🧠 El error fundamental de la mayoría de propuestas

**La propuesta típica:**
1. Quiénes somos (página entera)
2. Nuestros servicios (catálogo)
3. El precio
4. Por qué somos los mejores
5. Casos de éxito genéricos

**El problema:**
Esta propuesta habla del vendedor. El cliente solo quiere saber una cosa: "¿Me van a resolver MI problema?"

**La propuesta que cierra:**
Empieza por el problema del cliente. El vendedor aparece al final, cuando ya ha demostrado que entiende la situación.

### 📐 La estructura de la propuesta ganadora

**Sección 1 — El contexto: el problema tal como lo vivís (1 página):**
Describe la situación del cliente con sus propias palabras (las que usó en las reuniones previas).
Si el cliente reconoce su problema en tu propuesta, ya confía en que le has escuchado.

```
"Cuando hablamos el [fecha], nos compartisteis que [su situación]:
• [Pain point 1 con sus palabras]
• [Pain point 2 con sus palabras]
• El impacto de esta situación en vuestro negocio es [coste o riesgo específico]"
```

**Sección 2 — Los objetivos: lo que queréis conseguir:**
Las métricas de éxito que el cliente mencionó en las conversaciones previas.
No los tuyos — los suyos.

**Sección 3 — Nuestra propuesta: cómo lo vamos a resolver:**
Tu solución, presentada como el camino de A (su situación actual) a B (el objetivo que describieron).
Sin features ni funcionalidades técnicas sin contexto — cada elemento conectado con un pain point o un objetivo.

**Sección 4 — El proceso y el timing:**
Qué pasará, en qué orden y en qué fechas. El cliente quiere saber que tienes un plan.

**Sección 5 — Inversión:**
El precio, con contexto.
Nunca pongas el precio en la primera página.
El precio tiene sentido cuando ya has establecido el valor.

**Presentación del precio:**
```
Inversión: €[precio]

Incluye: [lista de lo que cubre]
No incluye: [lo que queda fuera y cuándo se presupuesta aparte]

Forma de pago: [estructura de pagos — hitos o mensualidades]
Validez de la propuesta: [fecha] (para no tener propuestas zombies abiertas)
```

**Sección 6 — Nosotros (breve):**
2-3 credenciales relevantes para ESTE cliente.
No tu historia completa — el caso más parecido a su situación, la experiencia en su sector.

**Sección 7 — Próximos pasos:**
Qué ocurre si dicen sí. Un paso claro y concreto, no "esperamos tu respuesta".

### 🎤 Presentar la propuesta en persona (multiplica la tasa de cierre x2)

**Por qué en persona (o en videollamada) es mejor que solo el PDF:**
Puedes ajustar el pitch en tiempo real al ver las reacciones.
Puedes responder objeciones antes de que el cliente las rumine solo.
Puedes cerrar en la misma reunión.

**El formato de la presentación:**
10 min: "Quiero asegurarme de que entendí bien vuestra situación antes de presentar la propuesta" — revisas el contexto con ellos.
20 min: presentas la solución y el proceso
10 min: presentas el precio con contexto de ROI
20 min: preguntas y siguientes pasos

### 💰 Cómo presentar el precio para reducir el escrutinio
La técnica del "ROI primero" que hace que el precio parezca pequeño comparado con el valor.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Propuesta comercial, cierre de ventas, pitch, B2B, propuesta de valor',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de la deuda técnica: cómo cuantificarla, priorizarla y negociar el tiempo para reducirla',
                'description'       => 'Convierte la deuda técnica de una queja del equipo de desarrollo en una conversación de negocio con datos. Con el proceso de inventario, la cuantificación en términos de negocio, la priorización por impacto y cómo negociar con stakeholders el tiempo necesario para reducirla.',
                'prompt_content'    => <<<'PROMPT'
Eres un Engineering Manager y Staff Engineer con experiencia transformando la conversación de deuda técnica de "queja de los devs" a "decisión de negocio con ROI" en empresas de 20 a 200 ingenieros.

Contexto:
- Tamaño del equipo: [N ingenieros]
- Situación actual de la deuda técnica: [hay mucha pero nadie sabe cuánta / la velocidad ha caído / releases cada vez más lentos / el equipo está frustrado / otro]
- Stakeholders a convencer: [CTO / CEO / Product / inversores]
- El mayor bloqueador: [nadie da tiempo para resolverla / no tenemos un inventario / el argumento técnico no convierte / otro]

## Gestión de la Deuda Técnica — [Empresa]

### 🧠 Por qué "hay mucha deuda técnica" no convierte a los stakeholders

**Lo que escucha el stakeholder:**
"Queremos tiempo para hacer cosas que los clientes no ven y que no generan ingresos."

**Lo que debes comunicar:**
"Tenemos [X horas/semana] de velocidad perdida por [problema específico], lo que nos cuesta [€ calculado] en salarios y [Y features que no podemos entregar en plazo]."

La deuda técnica es un argumento de negocio cuando está cuantificada en términos de negocio.

### 📋 Paso 1: El inventario de deuda técnica

**Las 5 categorías de deuda técnica:**

| Categoría | Ejemplo | Impacto en negocio |
|-----------|---------|-------------------|
| Arquitectura | Monolito acoplado que tarda horas en deployar | Velocidad de entrega, coste de infraestructura |
| Código | Módulos sin tests que nadie toca por miedo | Bugs en producción, tiempo de debug |
| Dependencias | Librerías desactualizadas con vulnerabilidades | Riesgo de seguridad, incompatibilidades |
| Documentación | Sistemas sin documentación → solo el autor lo entiende | Bus factor, onboarding |
| Infraestructura | Deployments manuales, sin CI/CD completo | Errores humanos, tiempo perdido |

**El inventario práctico:**
Una sesión de 2 horas con el equipo técnico completo:
1. Cada persona anota en post-its los problemas técnicos que le quitan tiempo o le generan estrés
2. Clasificación por categoría
3. Estimación de impacto: ¿cuántas horas/semana pierde el equipo por este problema?

### 💰 Paso 2: Cuantificación en términos de negocio

**El cálculo del coste de la deuda:**

```
Problema: los tests tardan 45 minutos en ejecutarse localmente
Frecuencia: los 8 ingenieros los ejecutan 3 veces/día
Coste: 45 min × 3 × 8 = 18 horas/día de ingeniería esperando tests
Coste en salario: 18h × €50/h (coste empresa) = €900/día = €4.500/semana

Si reducimos el tiempo de tests a 5 minutos:
Ahorro: 8 horas/día × €50 = €400/día = €2.000/semana
Coste de la mejora: [N días de ingeniería para implementar el cache de CI]
ROI: en [N semanas] se amortiza la inversión
```

**El coste de la velocidad perdida:**
Si el equipo podría entregar 3 features/sprint pero entrega 2 por la deuda:
1 feature de diferencia × valor medio de una feature en ingresos → coste de oportunidad mensual.

### 🏆 Paso 3: Priorización de la deuda

**Matriz de priorización:**

| Ítem de deuda | Coste actual | Esfuerzo de resolución | Prioridad |
|---------------|-------------|----------------------|----------|
| Tests lentos | €2.000/semana | 2 sprints | Alta |
| Módulo sin documentación | €500/mes | 1 sprint | Media |
| Librería desactualizada (riesgo seg.) | Bajo ahora, alto si hay breach | 1 semana | Urgente |

### 📅 Paso 4: Cómo negociar el tiempo (la regla del 20%)

**La propuesta estándar:**
Dedicar el 20% de la capacidad del equipo a deuda técnica de forma consistente.

**Cómo presentarlo:**
"En lugar de pedir un sprint completo cada 6 meses para deuda, propongo dedicar 1 día/sprint de forma permanente. El resultado es una reducción gradual sin impacto en el roadmap de producto."

**Por qué funciona mejor:**
Un sprint completo de "mantenimiento" parece un coste. El 20% integrado parece higiene de ingeniería.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Deuda técnica, engineering management, velocidad del equipo, ROI técnico',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compensación variable y bonus: diseña el sistema que incentiva el rendimiento sin crear disfunciones',
                'description'       => 'Diseña el modelo de compensación variable para tu equipo que alinea los incentivos con los objetivos de la empresa, es percibido como justo y no genera los comportamientos disfuncionales que destrozan la cultura. Con la estructura del bonus, los indicadores correctos y las reglas que evitan los atajos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Total Rewards Specialist con experiencia diseñando sistemas de compensación variable para equipos de ventas, operaciones y management que han mejorado el rendimiento sin destruir la colaboración ni generar comportamientos disfuncionales.

Contexto:
- Roles a incluir en el sistema variable: [ventas / marketing / operaciones / management / toda la empresa]
- Salario fijo actual del equipo: [rango €]
- Variable objetivo: [X% del salario fijo / €X fijo / otro]
- Objetivo del sistema: [aumentar ventas / mejorar retención / alinear con OKRs / otro]
- Problema que quieres evitar: [que el equipo solo haga lo que tiene bonus / que se deteriore la colaboración / que los bonus se perciban como injustos / que no muevan la aguja / otro]

## Sistema de Compensación Variable — [Empresa]

### 🧠 Los errores de diseño que crean disfunciones

**Error 1 — Todo variable basado en una sola métrica:**
Si el vendedor solo cobra bonus por ventas nuevas, ignorará la retención, la calidad de los leads y la satisfacción del cliente. La métrica que mides es la que maximizan — para bien y para mal.

**Error 2 — Variable demasiado pequeño:**
Si el variable es <10% del salario, el esfuerzo adicional para conseguirlo no es percibido como proporcional al incentivo.

**Error 3 — Variable basado en métricas fuera del control del empleado:**
Un bonus basado en el beneficio de la empresa para un empleado de soporte no tiene sentido — no puede influir en esa métrica.

**Error 4 — Reglas que se perciben como injustas:**
Si el equipo siente que el bonus depende de decisiones arbitrarias de la dirección, el sistema pierde credibilidad.

### 🏗️ La estructura correcta por tipo de rol

**Para equipos de ventas:**

| Componente | Peso | Métrica |
|-----------|------|---------|
| Ventas nuevas (ARR o revenue) | 60-70% | MRR/ARR cerrado en el período |
| Retención / NRR | 15-20% | No revenue expansion + no churn |
| Pipeline building | 10-15% | Oportunidades cualificadas generadas |

**Para roles de management:**

| Componente | Peso | Métrica |
|-----------|------|---------|
| OKR del área | 40-50% | % de consecución de objetivos del equipo |
| Rendimiento del equipo | 25-30% | Métricas operativas del equipo (velocidad, calidad) |
| Satisfacción del equipo | 15-20% | eNPS del equipo |
| Contribución a la empresa | 10-15% | Resultado financiero global |

**Para todos los empleados (bonus de empresa):**
Un componente ligado a resultados globales (beneficio, MRR) que refuerza el sentido de equipo.
Normalmente pequeño (5-10% del bonus total) pero simbólicamente importante.

### 💰 El diseño del pago del bonus

**Frecuencia:**
- Mensual: alta motivación, pero mucha gestión administrativa
- Trimestral: el más frecuente en ventas — suficientemente próximo para motivar
- Anual: adecuado para management y empleados no-ventas

**Estructura de tramos (para ventas):**
```
< 70% del objetivo: sin bonus
70-85% del objetivo: 50% del bonus target
85-100%: 80% del bonus target
100%: 100% del bonus target
100-120%: acelerador — 130% del bonus target
>120%: acelerador máximo — 150% del bonus target
```

**El acelerador:** premia el over-achievement y crea el "¿qué más puedo conseguir?"

### 📋 Cómo comunicar el sistema para que se perciba como justo

**El principio de transparencia:**
El empleado debe saber exactamente:
- Cuánto puede ganar si cumple su objetivo
- Cuánto puede ganar si lo supera
- Cómo se calcula cada componente
- Cuándo y cómo se pagará

**El documento de compensación individual:**
Una hoja con la fórmula exacta de su bonus, los objetivos del trimestre/año y el cálculo ejemplo.

### 🔄 Revisión anual del sistema
Por qué el sistema variable debe revisarse cada año y cómo evitar que quede obsoleto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Compensación variable, bonus, incentivos, sales compensation, HR',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de la tesorería en startups: mantén la caja bajo control cuando el crecimiento consume el efectivo',
                'description'       => 'Diseña el sistema de gestión de tesorería que evita que una startup en crecimiento se quede sin caja de forma sorpresiva. Con el modelo de cash flow semanal, el dashboard de runway, las señales de alerta y las acciones que alargan la pista de vuelo cuando el dinero escasea.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO de startups con experiencia gestionando la tesorería de empresas pre-revenue a Series A en momentos de alto crecimiento donde el consumo de caja es el principal riesgo operativo.

Contexto:
- Etapa: [pre-revenue / post-revenue / pre-profitable / profitable]
- MRR actual: [€ o N/A]
- Burn rate mensual: [€/mes] — si no lo sabes: (Gastos fijos + Variables) / mes
- Cash en banco: [€]
- Runway actual: [X meses = Cash / Burn rate]
- Principal salida de caja: [nóminas / AWS/infraestructura / marketing / otro]
- Mayor problema: [no sé cuánta caja tenemos realmente / el runway baja más rápido de lo esperado / los inversores preguntan por el runway y no tengo respuesta clara / otro]

## Gestión de Tesorería para Startups — [Empresa]

### 📊 El modelo de cash flow semanal (la herramienta más importante)

**Por qué semanal y no mensual:**
Las startups pueden quedarse sin caja en 4-6 semanas si no tienen visibilidad. El forecast mensual no da suficiente preaviso.

**El modelo de 13 semanas:**
El horizonte estándar en gestión de tesorería: suficientemente largo para tomar decisiones, suficientemente corto para ser preciso.

**Estructura del modelo:**

```
SEMANA 1: [fecha inicio] - [fecha fin]
─────────────────────────────────────
ENTRADAS
  + Cobros de clientes previstos:    €X
  + Inversión/deuda prevista:        €X
  + Otros ingresos:                  €X
  TOTAL ENTRADAS:                    €X

SALIDAS
  - Nóminas y SS:                   -€X  (fecha de pago: día X del mes)
  - AWS/Infraestructura:            -€X
  - Marketing / Publicidad:         -€X
  - Proveedores y software:         -€X
  - Alquiler y suministros:         -€X
  - Otros gastos fijos:             -€X
  TOTAL SALIDAS:                    -€X

FLUJO NETO DE LA SEMANA:            €X (o -€X)
SALDO INICIAL DE LA SEMANA:         €X
SALDO FINAL DE LA SEMANA:           €X
```

**Colores para el saldo:**
🟢 >3 meses de runway
🟡 1.5-3 meses de runway → activa el plan B
🔴 <6 semanas de runway → emergencia

### 🚦 Las señales de alerta (antes de que sea un problema)

**Señal 1 — El burn rate sube más rápido que los ingresos:**
Si cada mes gastas 20% más pero los ingresos solo crecen un 10%, el runway se acorta rápidamente.
Revisión semanal: burn rate actual vs. burn rate del mes pasado.

**Señal 2 — Los cobros llegan más tarde de lo previsto:**
Si tus clientes pagan a 60 días pero tus gastos son a 30, hay un gap que consume caja.
Acción: acelerar cobros (facturar antes, ofrecer descuento por pago anticipado).

**Señal 3 — El runway cae por debajo de 6 meses:**
Es el momento de empezar el fundraise, no cuando llegas a 3 meses (el proceso tarda 3-6 meses).

### 🛡️ Las acciones para alargar el runway cuando la caja escasea

**Nivel 1 — Sin impacto en el equipo (hacer primero):**
- Renegociar suscripciones de software: muchos proveedores ofrecen descuentos si preguntas
- Pasar a facturación anual anticipada con clientes a cambio de descuento (más caja ahora)
- Revisar AWS/infra: muchas startups gastan 2-3x más de lo necesario en la nube
- Retrasar gastos no comprometidos (marketing, eventos, contrataciones)

**Nivel 2 — Impacto moderado:**
- Congelar contrataciones previstas
- Renegociar fechas de pago con proveedores grandes

**Nivel 3 — Impacto alto (solo en emergencia real):**
- Reducción de salarios temporales (con acuerdo del equipo y compensación futura)
- Lay-offs (la decisión más difícil y la que más tiempo tarda en impactar)

### 📅 El ritual semanal de tesorería (20 minutos)
El proceso de actualización del modelo cada semana y la revisión que hace que el CEO nunca sea sorprendido por la caja.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Tesorería startup, cash flow, runway, burn rate, finanzas startup',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos de software a medida: las cláusulas que protegen al desarrollador y satisfacen al cliente',
                'description'       => 'Redacta el contrato de desarrollo de software a medida que establece expectativas realistas, protege la propiedad intelectual, regula los cambios de alcance y te protege si el cliente no paga o si el proyecto se alarga indefinidamente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en contratos tecnológicos y desarrollo de software con experiencia protegiendo a agencias de desarrollo, freelancers técnicos y empresas de software en España y la UE.

Contexto:
- Posición: [desarrollador / agencia de desarrollo / cliente que encarga el desarrollo]
- Tipo de proyecto: [aplicación web / app móvil / desarrollo a medida de ERP/CRM / integración de sistemas / otro]
- Importe del proyecto: [€]
- Duración estimada: [N meses]
- Problema más frecuente: [el cliente pide cambios infinitos / el cliente no paga al finalizar / la especificación era vaga y ahora hay disputas / los derechos de autor quedan ambiguos / otro]

## Contrato de Desarrollo de Software a Medida — [Proyecto]

### 📐 La cláusula de alcance y cambios: la más importante

**Por qué el scope creep destruye proyectos:**
"¿Puedes añadir este pequeño detalle?" repetido 50 veces = proyecto que dobla en tiempo y no en precio.

**Cláusula de control de cambios:**
```
"Artículo X — Gestión de cambios de alcance

El presente contrato cubre el desarrollo de las funcionalidades descritas en el
Anexo de Especificaciones. Cualquier funcionalidad o modificación que no esté
contemplada en dicho Anexo se considerará un cambio de alcance.

Los cambios de alcance se tramitarán mediante el siguiente proceso:
1. El Cliente solicita el cambio por escrito (email suficiente)
2. El Desarrollador emite una Orden de Cambio con el impacto en tiempo y precio
3. El Cliente aprueba o rechaza la Orden de Cambio por escrito
4. El trabajo adicional no comienza hasta la aprobación firmada

Los cambios de alcance no aprobados por escrito no generan obligación de
implementación por parte del Desarrollador."
```

### 💰 La estructura de pagos que protege al desarrollador

**El error:** cobrar todo al final. Si el cliente no paga o hay disputa, has trabajado gratis.

**La estructura correcta para proyectos de 3+ meses:**
```
30% a la firma del contrato (condición para iniciar el trabajo)
20% al completar el diseño UX/UI aprobado por el cliente
20% al entregar la versión beta funcional
20% a la aceptación final del proyecto (ver cláusula de aceptación)
10% al finalizar el período de garantía
```

**Cláusula de interrupción por falta de pago:**
```
"El incumplimiento de cualquier pago en la fecha acordada otorga al Desarrollador
el derecho a suspender el trabajo sin que ello constituya incumplimiento del
contrato, hasta la regularización del pago. Los plazos de entrega se ampliarán
en el mismo número de días de suspensión."
```

### ✅ La cláusula de aceptación (para evitar "no es lo que quería")

**Sin cláusula de aceptación:**
El cliente puede rechazar el entregable final indefinidamente o sin causa objetiva.

**Con cláusula de aceptación:**
```
"Artículo X — Aceptación del software

Tras la entrega de cada hito, el Cliente dispondrá de [10] días hábiles para
revisar el entregable y comunicar por escrito las no-conformidades con las
especificaciones del Anexo.

Transcurrido dicho plazo sin comunicación escrita por parte del Cliente, el
entregable se considerará aceptado tácitamente.

Las no-conformidades comunicadas dentro del plazo serán corregidas sin coste
adicional siempre que correspondan a desviaciones respecto a las especificaciones
acordadas. Las peticiones de cambio respecto a las especificaciones se tramitarán
como cambios de alcance."
```

### 🔐 La titularidad del código (quién es dueño del software)

**Las 3 opciones y sus implicaciones:**

**Opción A — Cesión total al cliente (al pago completo):**
El más habitual. Al recibir el pago final, el cliente es titular del código.

**Opción B — Licencia de uso (el desarrollador retiene el código base):**
El desarrollador mantiene el código base/framework y el cliente tiene licencia de uso.
Útil cuando el desarrollador reutiliza componentes en otros proyectos.

**Opción C — Licencia de uso hasta el pago completo:**
Mientras no se paga el total, el cliente solo tiene licencia. Si no paga, el desarrollador puede revocar el acceso.

```
"La titularidad del software desarrollado a medida se transferirá al Cliente
en el momento en que se acredite el pago íntegro de todas las cantidades
pactadas en el presente contrato. Hasta ese momento, el Cliente dispondrá
de una licencia de uso revocable para los fines del proyecto."
```

### 📋 El período de garantía y el mantenimiento post-entrega
La diferencia entre garantía (bugs del desarrollo, gratuita) y mantenimiento (nuevas features, de pago), y cómo delimitar claramente los dos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Contrato software a medida, desarrollo web, propiedad intelectual, scope creep',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte multicanal: cómo ofrecer una experiencia consistente en chat, email y teléfono sin duplicar el trabajo',
                'description'       => 'Diseña la operación de soporte multicanal que da al cliente una experiencia coherente independientemente del canal que use, sin que el equipo haga el doble de trabajo. Con la estrategia de canales, el SLA por canal, el routing correcto y cómo manejar la omnicanalidad con herramientas asequibles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director of Customer Support con experiencia diseñando operaciones multicanal para empresas de 500 a 50.000 clientes que han mejorado la consistencia del servicio mientras reducían el coste por contacto.

Contexto:
- Canales actuales: [email / chat en vivo / teléfono / WhatsApp / redes sociales / ticket portal]
- Canales que quieres añadir o integrar: [describe]
- Herramienta actual: [Zendesk / Intercom / Freshdesk / Help Scout / otro / sin herramienta unificada]
- Tamaño del equipo: [N agentes]
- Mayor problema: [el cliente repite su problema en cada canal / distintos agentes responden distinto / no sabemos por qué canal entra cada tipo de contacto / otro]

## Operación de Soporte Multicanal — [Empresa]

### 🗺️ La estrategia de canales: no todos los canales para todos los problemas

**El error más frecuente:** estar en todos los canales solo porque el cliente "podría estar ahí".

**La decisión de canales correcta:**
¿Qué canales usa realmente tu cliente para contactar con soporte? (revisa los datos actuales)
¿Qué tipo de problema resuelve mejor cada canal?

**La matriz de canales por tipo de problema:**

| Tipo de contacto | Canal óptimo | Por qué |
|-----------------|-------------|---------|
| Pregunta rápida, respuesta inmediata | Chat en vivo | Conversación en tiempo real |
| Problema complejo que requiere archivos / screenshots | Email o ticket | Permite adjuntar, no hay presión de tiempo |
| Problema urgente, cliente muy frustrado | Teléfono | La voz reduce la escalada emocional |
| Seguimiento de un caso | Email | Registro escrito, asíncrono |
| Pregunta pública sobre el producto | Twitter / LinkedIn | Visibilidad pública del soporte |

### 🔄 El routing correcto (el ticket llega al agente adecuado)

**El routing basado en reglas:**
```
Si canal = chat → asignar a equipo de chat (horario 9-18h)
Si canal = email AND etiqueta = "billing" → asignar a equipo de facturación
Si canal = email AND etiqueta = "técnico" → asignar a L2 técnico
Si canal = teléfono AND plan = "enterprise" → asignar a customer success dedicado
```

**El routing basado en habilidades:**
Para equipos de 10+ agentes: asignar tickets según la especialidad del agente, no solo el turno.
- Agentes de idiomas: español, inglés, francés
- Agentes de área: billing, técnico, onboarding

### 📋 SLAs diferenciados por canal (las expectativas del cliente son distintas)

| Canal | First Response Time | Resolución | Por qué |
|-------|--------------------|-----------|----|
| Chat en vivo | <2 minutos | En la sesión | Expectativa de tiempo real |
| Email | <4 horas (hábiles) | <24h hábiles | Canal asíncrono |
| Teléfono | <30 segundos de espera | En la llamada | Urgencia implícita |
| WhatsApp | <1 hora (hábiles) | <4h hábiles | Expectativa de mensajería |
| Redes sociales | <2 horas | <24h | Visibilidad pública |

### 🧠 La consistencia: el mismo contexto en cada canal

**El problema de la inconsistencia:**
El cliente escribe por chat, explica su problema, el agente no resuelve y le dice "escríbenos por email". El cliente escribe por email y tiene que explicar todo de nuevo.

**La solución: el perfil de cliente unificado:**
Toda la herramienta de soporte debe mostrar al agente:
- Todos los contactos previos del cliente, por cualquier canal
- El resumen del último contacto
- El plan del cliente, la fecha de registro y los detalles relevantes

**Cómo conseguirlo:**
Integrar el CRM o la herramienta de CS (HubSpot, Salesforce) con la herramienta de soporte (Zendesk, Intercom) para que el agente vea el contexto completo antes de responder.

### 📊 Las métricas que revelan si la operación multicanal funciona
El mix de canales, el coste por contacto por canal y cómo optimizar hacia los canales más eficientes sin deteriorar la experiencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Soporte multicanal, omnicanalidad, routing, SLA, customer support',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuesta de honorarios para proyectos grandes: cómo presentar el precio sin que el cliente sufra un infarto',
                'description'       => 'Presenta presupuestos de proyectos de alto valor que el cliente acepta sin regatear porque el precio va precedido del valor. Con la estructura de la propuesta por opciones, la presentación del ROI que hace que el precio parezca pequeño y cómo manejar el silencio después de dar el número.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach y Pricing Consultant para freelancers y agencias con experiencia ayudando a profesionales a presentar proyectos de €5.000 a €100.000 con tasas de aceptación del 60-70% sin negociar el precio a la baja.

Mi contexto:
- Tipo de proyecto: [describe]
- Precio que quiero presentar: [€]
- Precio que normalmente cobro por este tipo de proyecto: [€]
- Cómo presentas el precio actualmente: [en el email / en un PDF / en una reunión / de forma verbal / otro]
- Mayor problema: [el cliente siempre negocia a la baja / me da miedo decir el número / cuando doy el precio, el cliente desaparece / no sé cómo justificarlo]

## Presentación de Honorarios para Proyectos Grandes — [Tu servicio]

### 🧠 El principio: el precio es la última cosa que dices, no la primera

**La secuencia que genera aceptación:**
1. El cliente entiende el problema que tiene (tus palabras, su realidad)
2. El cliente ve el valor del resultado (el después)
3. El cliente ve que tienes el proceso para llegar de A a B
4. El cliente calcula el ROI o el coste de no hacerlo
5. El cliente escucha el precio — en este punto, el precio tiene contexto

**Si dices el precio en el primer email sin contexto:** el cliente lo compara con otros precios en el vacío. Pierde.

### 🎯 La estructura por opciones (evita el sí/no, crea el "cuál")

En lugar de presentar un único precio, presenta 3 opciones:

**La opción Básica (60-70% del precio de la opción Media):**
El alcance mínimo que resuelve el problema principal.
Es el "control" — hace que la opción del medio parezca razonable.

**La opción Recomendada (tu precio objetivo):**
El alcance completo con todas las features importantes.
Señalada como "Recomendada" — el anclaje psicológico hace que el cliente se oriente aquí.

**La opción Premium (130-150% del precio de la opción Media):**
El alcance ampliado con extras significativos.
Hace que la opción del medio parezca el "punto dulce" entre lo básico y lo caro.

**El resultado:**
El cliente ya no decide "sí o no" — decide "cuál". Y en el 60-70% de los casos elige la opción Media.

### 💰 Cómo presentar el ROI (el precio deja de ser un gasto)

**La fórmula del ROI en la propuesta:**

```
"Si este proyecto genera [resultado medible]:
• Ahorro de [N horas/mes] del equipo a [€/hora] = €X/mes
• Conversión de [X%] adicional en [proceso] = €Y adicional/mes
• Reducción de [coste actual de no resolverlo] = €Z/mes

Total valor anual estimado: €[X+Y+Z × 12]

Nuestra inversión: €[precio]
ROI estimado: [precio / valor anual × 12] meses para amortizar"
```

No siempre puedes cuantificar el ROI exactamente. Pero incluso una estimación aproximada ancla el precio en el valor, no en el coste.

### 🤫 Cómo manejar el silencio después de dar el precio (la parte que más asusta)

**La regla del silencio:**
Después de decir el precio, cierra la boca. No justifiques, no añadas alternativas, no reduzcas el precio sin que lo pidan.

El silencio no significa que el cliente está rechazando. Significa que está pensando.

**Si el cliente dice "es caro":**
Responde con una pregunta, no con una defensa: "¿Caro respecto a qué?" o "¿Qué presupuesto tenéis para este proyecto?"

**Si el cliente dice "tengo otras propuestas más baratas":**
"¿Puedes compartirme qué incluyen? Quiero asegurarme de que estamos comparando lo mismo."

**Si el cliente dice que necesita pensarlo:**
"Claro. ¿Cuándo tomaréis la decisión? ¿Hay alguna información adicional que te ayude a decidir?"

### 📧 El formato de la propuesta: reunión en vivo > email con PDF
Por qué las propuestas grandes siempre deben presentarse en vivo y nunca enviarse sin previo aviso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Honorarios freelance, propuesta de precio, pricing, negociación, ventas',
                'vote_score'        => 52,
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
