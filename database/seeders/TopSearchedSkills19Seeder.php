<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills19Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de comunidad online: cómo construir y activar una comunidad que impulsa el negocio',
                'description'       => 'Diseña la estrategia de comunidad que convierte a los usuarios más comprometidos en evangelizadores de tu marca. Con la plataforma correcta para tu audiencia, los rituales que mantienen viva la comunidad, los roles y moderación y cómo monetizar o usar la comunidad para el crecimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un Community Builder con experiencia construyendo y escalando comunidades online de 500 a 50.000 miembros para marcas B2B y B2C que han generado crecimiento orgánico y reducción del churn.

Contexto:
- Tipo de negocio: [SaaS / ecommerce / marca personal / media / otro]
- Audiencia objetivo: [perfil detallado]
- Estado actual: [sin comunidad / grupo de Slack/Discord pequeño / comunidad existente sin estrategia / otro]
- Objetivo de la comunidad: [retención de clientes / growth y adquisición / soporte peer-to-peer / product feedback / monetización directa / otro]
- Recursos disponibles: [community manager dedicado / parte del tiempo de alguien / solo yo]

## Estrategia de Comunidad — [Marca/Producto]

### 🎯 Antes de elegir la plataforma: define el "por qué" de la comunidad

**La pregunta más importante:**
¿Por qué un miembro debería dedicar tiempo a tu comunidad en lugar de a Reddit, LinkedIn o su grupo de WhatsApp?

La respuesta debe ser específica:
- "Porque aquí están los mejores [profesionales de X sector] con los que puedo aprender y hacer networking"
- "Porque aquí resuelvo problemas de [producto] 10x más rápido que con soporte"
- "Porque accedo a contenido exclusivo que no existe en otro lugar"

**Si no puedes responder esto con precisión, la comunidad morirá de indiferencia.**

### 🏗️ Elegir la plataforma correcta

| Plataforma | Para qué tipo de comunidad | Ventajas | Limitaciones |
|-----------|--------------------------|---------|-------------|
| Discord | Tech, gaming, jóvenes, async activo | Canales por tema, bots, integración | Curva de aprendizaje, ruido |
| Slack | Profesionales B2B | Familiaridad empresarial | Plan gratuito limita historial |
| Circle | Comunidades de pago, cursos | Membresías, contenido estructurado | Coste mensual |
| Mighty Networks | Comunidades de pago + cursos | Todo en uno | Más caro, UI menos pulida |
| WhatsApp/Telegram | Audiencias masivas en España/LATAM | Fácil acceso, móvil primero | Sin organización, sin historia |
| Foro/Discourse | Conocimiento archivable | SEO, búsqueda, threads | Requiere más esfuerzo de UX |

**La regla del canal de la audiencia:**
Ve donde ya está tu audiencia. Si tu audiencia está en WhatsApp, Discord no funcionará aunque sea "mejor".

### 🌱 Las 3 fases de crecimiento de una comunidad

**Fase 1 — Fundación (0-100 miembros):**
El objetivo NO es crecer. Es crear la experiencia correcta con los primeros miembros.
- Invita personalmente a los 20-30 primeros (tus mejores clientes, fans, colaboradores)
- Facilita las primeras conversaciones activamente: haz preguntas, presenta miembros entre sí
- Define las normas y el tono con esos primeros miembros — serán el modelo para los siguientes

**Fase 2 — Crecimiento controlado (100-1.000 miembros):**
- Activa el growth desde fuera: newsletter, redes, referidos de miembros actuales
- Establece los rituales de la comunidad (ver abajo)
- Identifica y activa a los primeros "supermiembros" — los que ayudan sin que se lo pidas

**Fase 3 — Escala (>1.000 miembros):**
- El equipo de moderación (internos o supermiembros reconocidos)
- La comunidad necesita que los miembros se ayuden entre sí — ya no puedes ser tú el centro
- Eventos regulares que crean momentum

### 🔁 Los rituales que mantienen viva la comunidad

Un ritual es un evento recurrente y predecible que da a los miembros una razón para volver.

**Rituales semanales:**
- Hilo de "¿en qué estás trabajando esta semana?" (lunes)
- Hilo de logros y celebraciones (viernes)
- Pregunta de la semana (cualquier día, la responde el equipo o un experto invitado)

**Rituales mensuales:**
- AMA (Ask Me Anything) con el CEO, experto del sector o miembro destacado
- Showcase de proyectos de miembros
- Resumen de lo más destacado del mes

### 📊 Las métricas de una comunidad sana

| Métrica | Objetivo | Por qué |
|---------|---------|---------|
| DAU/MAU ratio | >15% | % de activos diarios vs. mensuales |
| Posts/miembro activo/mes | >2 | Engagement real, no lurking |
| Retention (miembros que vuelven al mes siguiente) | >60% | Señal de valor recurrente |
| % de conversaciones iniciadas por NO-staff | >70% | La comunidad funciona sola |
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Community building, Discord, Slack, comunidad online, estrategia',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'TypeScript avanzado: tipos, generics y Zod para validación de datos en tiempo de compilación y ejecución',
                'description'       => 'Domina los patrones de TypeScript avanzado que hacen que tu código sea más seguro y más expresivo. Con los tipos condicionales, los generics bien usados, la validación de datos en runtime con Zod y los patrones que evitan los any que destrozan la seguridad de tipos.',
                'prompt_content'    => <<<'PROMPT'
Eres un TypeScript Engineer con experiencia en proyectos de 100k+ líneas de código donde la seguridad de tipos ha prevenido bugs en producción y hecho los refactors 10x más seguros.

Mi nivel actual:
- TypeScript actual: [básico — tipado de funciones y objetos / medio — interfaces, union types, generics simples / avanzado — quiero llevar los tipos al siguiente nivel]
- Proyecto: [API backend / frontend React/Vue / librería / monorepo / otro]
- Mayor problema: [demasiados `any` en el código / la validación de datos de APIs externas no es segura / los tipos se vuelven ilegibles / no sé cómo tipar correctamente los casos complejos]

## TypeScript Avanzado — Patrones Prácticos

### 🔧 Los tipos de utilidad que cambian cómo escribes TypeScript

**Los más valiosos del día a día:**
```typescript
// Partial — todos los campos opcionales
type UserUpdate = Partial<User>

// Required — todos los campos obligatorios
type CompleteUser = Required<Partial<User>>

// Pick — solo algunos campos
type UserPreview = Pick<User, 'id' | 'name' | 'avatar'>

// Omit — todos excepto algunos
type UserWithoutPassword = Omit<User, 'password' | 'salt'>

// Record — objeto con claves y valores tipados
type UsersByRole = Record<'admin' | 'user' | 'guest', User[]>

// Readonly — inmutable
type ImmutableConfig = Readonly<AppConfig>
```

### 🧬 Generics que de verdad añaden valor (sin sobre-ingeniería)

**El generic más útil: el fetch tipado:**
```typescript
async function fetchTyped<T>(url: string): Promise<T> {
  const res = await fetch(url)
  if (!res.ok) throw new Error(`HTTP ${res.status}`)
  return res.json() as Promise<T>
}

// Uso — el tipo viene del caller:
const user = await fetchTyped<User>('/api/users/1')
// user.name está tipado ✅
```

**Generic con constraint (el tipo debe tener ciertas propiedades):**
```typescript
function getById<T extends { id: string | number }>(
  items: T[],
  id: T['id']
): T | undefined {
  return items.find(item => item.id === id)
}

// Funciona con cualquier array de objetos que tengan id:
getById(users, '123')       // ✅
getById(products, 456)      // ✅
getById(['a', 'b'], 'a')    // ❌ Error — string[] no tiene .id
```

### 🏗️ Tipos condicionales (para los casos complejos)

```typescript
// Si T es string devuelve StringProcessor, si es number devuelve NumberProcessor
type Processor<T> = T extends string
  ? StringProcessor
  : T extends number
  ? NumberProcessor
  : never

// Extraer el tipo de retorno de una función:
type ReturnType<T extends (...args: any) => any> =
  T extends (...args: any) => infer R ? R : never

// Extraer el tipo de los items de un array:
type ArrayElement<T extends unknown[]> = T extends (infer E)[] ? E : never

type UserArray = User[]
type SingleUser = ArrayElement<UserArray>  // → User
```

### ✅ Zod: validación en runtime + tipos automáticos

**El problema sin Zod:**
```typescript
// Confías en que la API devuelve exactamente esto — pero no hay garantía
const user = await fetch('/api/user').then(r => r.json()) as User
```

**Con Zod:**
```typescript
import { z } from 'zod'

// Define el schema una vez → genera el tipo TypeScript automáticamente
const UserSchema = z.object({
  id: z.string().uuid(),
  name: z.string().min(1).max(100),
  email: z.string().email(),
  role: z.enum(['admin', 'user', 'guest']),
  createdAt: z.string().datetime(),
  age: z.number().int().min(0).max(150).optional(),
})

// El tipo se infiere del schema — no lo defines dos veces
type User = z.infer<typeof UserSchema>

// Validación en runtime:
async function getUser(id: string): Promise<User> {
  const data = await fetch(`/api/users/${id}`).then(r => r.json())
  return UserSchema.parse(data)  // lanza ZodError si los datos no coinciden
}

// Validación segura (sin lanzar):
const result = UserSchema.safeParse(data)
if (result.success) {
  console.log(result.data.email)  // tipado correctamente
} else {
  console.error(result.error.issues)  // errores de validación detallados
}
```

**Zod para variables de entorno (el uso más valioso):**
```typescript
const EnvSchema = z.object({
  DATABASE_URL: z.string().url(),
  JWT_SECRET: z.string().min(32),
  NODE_ENV: z.enum(['development', 'production', 'test']),
  PORT: z.coerce.number().default(3000),
})

// Al arrancar la app — falla rápido si la config está incompleta
export const env = EnvSchema.parse(process.env)
```

### 🚫 Los `any` que debes eliminar y cómo reemplazarlos
Los 5 patrones de `any` más comunes y el tipo correcto para cada situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'TypeScript avanzado, generics, Zod, validación de tipos, seguridad de tipos',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design sprint acelerado: valida una idea de producto en 4 días antes de escribir una línea de código',
                'description'       => 'Facilita un Design Sprint de 4 días que pasa de problema a prototipo validado con usuarios reales. Con la agenda detallada de cada día, las técnicas de facilitación clave, los materiales necesarios y cómo adaptar el sprint cuando no tienes una semana completa.',
                'prompt_content'    => <<<'PROMPT'
Eres un Design Sprint Facilitator con experiencia ejecutando más de 50 sprints con equipos de 4 a 8 personas en startups y empresas establecidas que han usado el proceso para validar ideas, rediseñar productos y resolver problemas complejos.

Contexto:
- El problema o pregunta de sprint: [describe]
- Equipo disponible: [N personas — roles]
- Tiempo disponible: [4 días completos / versión comprimida de 2 días / versión de 1 semana]
- Experiencia previa con Design Sprints: [ninguna / uno anterior / varios]
- Recursos: [sala física + pizarra / remoto con Miro / híbrido]

## Design Sprint — [Nombre del sprint]

### 🧠 Los principios del Design Sprint

**Lo que hace especial al Design Sprint:**
1. Decide en horas lo que normalmente llevaría semanas de debate
2. Crea un prototipo realista en 1 día
3. Obtiene feedback de usuarios reales antes de construir nada
4. Alinea a todo el equipo alrededor de una visión compartida

**El equipo ideal:**
- Decider: la persona con autoridad para tomar decisiones (CEO, Product Lead)
- Facilitator: quien conduce el proceso (puede ser externo al producto)
- 3-5 personas más: diseño, desarrollo, negocio, customer success

**La regla más importante:**
El Decider tiene la última palabra en los momentos de decisión. Sin esa persona o con esa persona ausente, el sprint pierde efectividad.

### 📅 La agenda de 4 días

---

#### DÍA 1 — ENTENDER (9h-17h)

**Objetivo:** alinear al equipo en el problema y definir el objetivo del sprint.

**9:00-10:30 — El mapa del problema:**
En una pizarra: dibuja el mapa del journey del usuario con el problema central en el centro.
- ¿Quiénes son los actores clave?
- ¿Qué quieren conseguir?
- ¿Dónde ocurre el problema en ese viaje?

**10:30-12:30 — Entrevistas a expertos (HMW notes):**
Cada experto del equipo comparte lo que sabe sobre el problema en 15-20 minutos.
Mientras escuchan, todos toman notas en post-its con formato "¿Cómo podríamos...?" (HMW — How Might We).

**13:30-15:00 — Organizar las HMW notes:**
Agrupa las HMW notes por tema. Vota las más prometedoras.

**15:00-16:30 — El objetivo a largo plazo y las preguntas del sprint:**
¿Cuál es el objetivo en 2 años? ¿Qué preguntas debemos responder esta semana para avanzar hacia ese objetivo?

**16:30-17:00 — Elegir el objetivo del sprint:**
El Decider elige el foco: una persona específica en un momento específico del viaje.

---

#### DÍA 2 — BOCETAR (9h-17h)

**Objetivo:** generar múltiples soluciones individualmente.

**9:00-10:30 — Lightning Demos:**
Cada persona presenta en 3 minutos productos o ideas de referencia (no necesariamente del mismo sector) que inspiran soluciones posibles.

**10:30-12:30 — Sketching individual (4 pasos):**
1. Notas (20 min): cada uno anota ideas libremente mirando el mapa del día 1
2. Ideas (20 min): 8 bocetos rápidos en papel (1 min/boceto)
3. Boceto loco de 8 (8 min): 8 variaciones de la idea favorita
4. Solución detallada (60 min): 3 pantallas o pasos en detalle con texto que se entiende

**13:30-17:00 — Revisión de soluciones:**
Cada boceto se pega en la pared. El equipo revisa en silencio y vota con puntos adhesivos las partes más interesantes.

---

#### DÍA 3 — DECIDIR Y PROTOTIPAR (9h-17h)

**Mañana — Decidir:**
Debate de las soluciones más votadas. El Decider elige la dirección del prototipo.
Si hay dos ideas fuertes: se prueban ambas (dos versiones del prototipo).

**Tarde — Storyboard:**
Dibuja el prototipo panel a panel en la pizarra: 12-15 escenas que muestran la experiencia completa.

---

#### DÍA 4 — PROTOTIPO + TESTS (9h-17h)

**9:00-13:00 — Prototipo:**
Construir el prototipo con Figma, Marvel, InVision o incluso diapositivas.
Objetivo: realista, no perfecto. Suficientemente creíble para que el usuario lo reaccione como si fuera real.

**13:00-17:00 — Tests con 5 usuarios:**
5 sesiones de 30-45 minutos de entrevista y test con usuarios reales.
El facilitador conduce. El equipo observa y toma notas desde otra sala.

### 📊 Qué hacer con los resultados del sprint
El análisis de los 5 tests en 1 hora y las decisiones que tomar inmediatamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Design sprint, validación de producto, facilitación, prototipo, UX',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Seguimiento post-demo: el proceso que convierte una buena reunión en un deal cerrado',
                'description'       => 'Diseña el proceso de seguimiento después de una demo o reunión de ventas que mantiene el momentum sin ser pesado. Con el email de follow-up que se envía en la hora siguiente, la cadencia de seguimiento y cómo manejar el silencio del prospecto sin perder el deal.',
                'prompt_content'    => <<<'PROMPT'
Eres un Account Executive B2B con experiencia convirtiendo demos en deals cerrados con tasas de conversión del 30-40% en mercados competitivos de SaaS y servicios B2B.

Contexto:
- Tipo de venta: [SaaS / servicios profesionales / consultoría / otro]
- Ciclo de venta: [días / semanas / meses]
- Lo que pasó en la reunión: [fue bien / hubo interés pero pocas preguntas / el decisor no estaba / hay otros evaluadores / otro]
- Próximo paso acordado en la reunión: [si lo hubo]
- Mayor problema: [el prospecto "desaparece" después de la demo / no sé cuándo hacer follow-up / siempre digo "quedo a tu disposición" / el deal se alarga demasiado]

## Proceso de Seguimiento Post-Demo — [Tu proceso de ventas]

### ⚡ El email en la primera hora (el más importante de todo el proceso)

**Por qué en la primera hora:**
Enviar el follow-up 3 días después es tarde. El prospecto aún tiene la conversación fresca, el valor del producto en la cabeza y está en el modo mental correcto. Cada hora que pasa enfría ese momentum.

**La estructura del email:**

```
Asunto: Próximos pasos tras nuestra reunión de hoy — [Empresa del prospecto]

Hola [nombre],

Gracias por el tiempo de hoy. Me ha gustado especialmente [algo específico
que mencionaron — el problema de X, el proyecto de Y, la situación de Z].

Para recapitular lo que vimos:
→ [El problema principal que tienen]
→ [Cómo [tu producto/servicio] lo resuelve para ellos]
→ [El resultado específico que pueden esperar]

El próximo paso que acordamos:
[Lo que se dijo en la reunión — demo técnica, presentar a X persona,
propuesta formal, prueba gratuita, etc.] — ¿te va bien el [fecha/hora]?

Adjunto: [propuesta, deck de la demo, caso de éxito relevante]

Cualquier pregunta que surja antes de entonces, aquí estoy.

[Tu nombre]
```

**Si no hubo próximo paso acordado en la reunión:**
"Para ayudarte a evaluar si tiene sentido seguir avanzando, ¿qué información adicional sería más útil para vosotros en este momento?"

### 📅 La cadencia de seguimiento (los siguientes 21 días)

**Día 0 (en la primera hora):** email de follow-up con resumen y próximo paso
**Día 2-3:** si no hay respuesta al próximo paso acordado → recordatorio gentil
**Día 7:** aporte de valor (caso de éxito similar, dato relevante, respuesta a pregunta que surgió)
**Día 14:** "¿Cómo ha evolucionado la conversación interna?"
**Día 21:** email de cierre de ciclo (si no hay respuesta — el break-up)

**La regla del valor primero:**
Cada contacto después del primero debe aportar algo (un dato, un caso de éxito, una respuesta a una objeción potencial). Un follow-up de "¿qué tal?" no funciona.

### 🤫 Cómo manejar el silencio del prospecto

**El silencio tiene 4 causas posibles:**
1. Siguen interesados pero no es prioridad ahora
2. Hay un obstáculo interno que no te contaron
3. Prefieren no decirte que no
4. Han decidido no seguir pero no quieren darte el no

**El email que rompe el silencio (día 14 sin respuesta):**

```
Asunto: ¿Sigo haciendo seguimiento?

Hola [nombre],

No quiero ser pesado, así que voy directo:
¿Sigue siendo relevante para vosotros lo que vimos el [fecha]?

Si es que sí, dime cuándo tiene sentido retomarlo.
Si es que no, sin problema — me lo dices y no te escribo más.

Si hay algo que os ha generado dudas o que puedo aclarar,
encantado de hacerlo.

[Nombre]
```

**Este email tiene las tasas de respuesta más altas de toda la secuencia:**
La gente responde cuando les das permiso para decir que no.

### 📊 Cómo registrar el seguimiento sin perder el hilo
El uso correcto de las tareas del CRM para que ningún deal caiga en el olvido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Follow-up ventas, post-demo, seguimiento, sales process, B2B',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de beta testers: el programa que convierte a los primeros usuarios en co-creadores del producto',
                'description'       => 'Diseña el programa de beta testing que recluta a los usuarios correctos, recoge feedback estructurado y convierte a los beta testers en embajadores del producto. Con el proceso de selección, la comunicación durante el beta y cómo cerrar el programa con una conversión alta a usuarios de pago.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia ejecutando programas de beta testing que han convertido al 60-70% de los beta testers en usuarios de pago y han generado el feedback que ha definido las features más importantes del producto.

Contexto:
- Producto: [describe]
- Estado: [pre-lanzamiento / nueva feature importante / rediseño / nuevo mercado]
- Beta testers objetivo: [N usuarios]
- Duración del beta: [N semanas]
- Objetivo principal: [validar el producto antes del lanzamiento / recoger feedback de calidad / generar early adopters / obtener testimonios / otro]

## Programa de Beta Testing — [Producto]

### 🎯 El perfil del beta tester ideal (no cualquier usuario sirve)

**Los malos beta testers:**
- Tus amigos y familiares (demasiado indulgentes)
- Usuarios sin el problema que tu producto resuelve
- Personas que no darán feedback si algo no funciona

**Los buenos beta testers:**
- Tienen el problema que resuelves y lo sienten como urgente
- Ya buscan soluciones activamente (están en foros, grupos de LinkedIn, usando competidores)
- Son comunicativos: han comentado en posts del sector, participan en comunidades
- Son representativos del cliente ideal (ICP) que quieres conquistar

### 📋 El proceso de reclutamiento

**Paso 1 — La lista de fuentes:**
- Tu lista de email (waitlist, newsletter)
- LinkedIn: búsqueda por cargo + sector + actividad en el tema
- Comunidades de nicho (Slack, Discord, grupos de LinkedIn)
- Clientes actuales o pasados que encajan con el perfil

**Paso 2 — El formulario de aplicación (no acepta a todo el mundo):**
El formulario tiene un propósito doble: filtrar y generar compromiso.

Preguntas clave:
- ¿Cómo resuelves actualmente [el problema que tú resuelves]?
- ¿Con qué frecuencia te encuentras con [el problema]?
- ¿Cuánto tiempo podrías dedicar a dar feedback en las próximas [N semanas]?
- ¿Estarías dispuesto a participar en una llamada de 30 minutos para compartir tu feedback?

**La selección:**
Elige los que tienen el problema más urgente + la mayor disposición a colaborar.
Mejor 20 beta testers comprometidos que 200 pasivos.

### 📞 La comunicación durante el beta

**Email de bienvenida:**
```
Asunto: Bienvenido/a al beta de [producto] — aquí está todo lo que necesitas

Hola [nombre],

Eres uno de los [N] usuarios seleccionados para el beta de [producto]. Gracias por tu tiempo y compromiso — tu feedback va a definir el producto que lanzaremos.

Aquí tienes acceso: [link]

Lo que esperamos de ti en las próximas [N semanas]:
→ Usa [producto] para [caso de uso principal] al menos [N] veces
→ Rellena el check-in semanal de 5 minutos que te enviaremos cada [día]
→ Si algo no funciona o no tiene sentido, escríbenos directamente (aquí, no lo reportes solo en la app)

Nuestro compromiso:
→ Respondemos a todos los mensajes en <24h
→ Si construimos algo gracias a tu feedback, te lo hacemos saber
→ Al terminar el beta, acceso a [producto] con descuento especial / gratuito por [N meses]

Si tienes dudas, responde a este email.

[Tu nombre]
```

**Check-in semanal (5 preguntas, máximo 3 minutos):**
1. ¿Has podido usar [producto] esta semana? (Sí / No — si no, ¿por qué?)
2. ¿Qué funcionó mejor? (texto libre)
3. ¿Qué te frustró o confundió? (texto libre)
4. ¿Qué echas de menos para que te sea realmente útil? (texto libre)
5. Si tuvieras que describirle [producto] a un colega en 1 frase, ¿cómo lo harías?

### 🚀 Cómo cerrar el beta y convertir a usuarios de pago

**La oferta de cierre:**
```
Asunto: El beta termina en 7 días — tu oferta especial

Hola [nombre],

El período de beta termina el [fecha]. Ha sido increíble trabajar contigo.

Gracias a tu feedback, hemos [2-3 mejoras concretas que vinieron del beta].

Como beta tester, tienes acceso a [producto] con [X% de descuento / N meses gratis / precio bloqueado para siempre] si decides continuar.

→ [CTA: Continuar con [producto]]

Si decides no continuar, no pasa nada — cualquier feedback que aún quieras compartir es bienvenido.

[Tu nombre]
```

### 📊 Cómo medir el éxito del programa de beta
NPS del beta, tasa de conversión a pago, features validadas y feedback que cambió el roadmap.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Beta testing, early adopters, product launch, feedback de producto',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Política de teletrabajo: el documento que establece las reglas sin destruir la confianza',
                'description'       => 'Redacta la política de teletrabajo de tu empresa que establece expectativas claras sobre disponibilidad, comunicación y resultados sin convertirse en un manual de microgestión. Con el marco legal en España, las cláusulas del acuerdo de teletrabajo y las reglas que equilibran flexibilidad y rendimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Consultant con experiencia redactando políticas de teletrabajo y acuerdos individuales de trabajo a distancia en España que cumplen con la Ley 10/2021 y que los empleados perciben como justos y claros.

Contexto:
- Número de empleados: [N]
- Modalidad actual: [100% remoto / híbrido / queremos implementar teletrabajo por primera vez]
- Tipo de roles: [todos iguales / mixto — algunos pueden teletrabajar, otros no]
- Problemas que quieres resolver: [sin reglas claras / cada manager interpreta las normas de forma distinta / exceso de presencialidad obligatoria sin justificación / problemas con la disponibilidad en remoto / otro]
- País: [España — la Ley 10/2021 es aplicable]

## Política de Teletrabajo — [Empresa]

### ⚖️ El marco legal obligatorio en España (Ley 10/2021)

**Requisitos legales que no puedes ignorar:**

1. **El acuerdo de teletrabajo es obligatorio y por escrito** — para los empleados que trabajen a distancia de forma regular (>30% de la jornada en un período de 3 meses)

2. **El acuerdo debe incluir obligatoriamente:**
   - Inventario de medios y equipos que proporciona la empresa
   - Gastos que asume la empresa (y cuantía o compensación)
   - Horario y reglas de disponibilidad
   - Centro de trabajo al que queda adscrito el empleado
   - Duración del acuerdo (puede ser indefinido o temporal)
   - Reversibilidad — el empleado puede pedir volver a presencial

3. **Los derechos del trabajador en remoto deben ser iguales** a los que trabajan presencialmente: formación, promoción, conciliación, prevención de riesgos.

4. **La empresa debe compensar los gastos de teletrabajo** — electricidad, internet y los materiales necesarios.

### 📄 Estructura de la Política de Teletrabajo (documento de empresa)

**Artículo 1 — Ámbito de aplicación:**
Qué puestos pueden acogerse al teletrabajo y en qué condiciones.

**Artículo 2 — Modalidades:**
```
Modalidad A — Remoto total: 100% desde el domicilio u otro lugar aprobado.
Modalidad B — Híbrido: [N días/semana en oficina + [N días en remoto].
  Los días de presencia pueden ser: fijos (especificar) o flexibles (con preaviso de X días).
Modalidad C — Ocasional: hasta [N días/mes] en teletrabajo sin acuerdo formal.
  Solo aplicable a empleados con >1 año de antigüedad y rendimiento adecuado.
```

**Artículo 3 — Lugar de trabajo y condiciones:**
- El teletrabajo se realiza desde el domicilio declarado o lugar aprobado por la empresa
- El empleado es responsable de que el espacio cumpla con las condiciones de prevención de riesgos básicas
- No está permitido el teletrabajo desde espacios públicos sin conexión segura (cafeterías, aeropuertos) para proyectos con datos confidenciales

**Artículo 4 — Disponibilidad y comunicación:**
- Horario de disponibilidad: [franjas horarias en que se debe estar accesible]
- Respuesta a mensajes: [plazo de respuesta máximo en horario laboral]
- Reuniones de equipo: [política sobre participación en reuniones en remoto vs. presencial]
- El trabajo en remoto no implica disponibilidad 24/7

**Artículo 5 — Medios y compensación de gastos:**
- La empresa proporciona: [ordenador / pantalla / auriculares / silla ergonómica / otro]
- Compensación de gastos: [€X/mes por internet y electricidad, o justificación por gastos reales]
- El empleado es responsable del mantenimiento básico de los equipos

**Artículo 6 — Privacidad y seguridad:**
- Los datos y archivos de empresa se almacenan en sistemas corporativos (no en dispositivos personales)
- Uso de VPN obligatorio para acceder a sistemas internos
- El empleado no puede usar el ordenador corporativo para uso personal de forma habitual

**Artículo 7 — Reversibilidad:**
Tanto el empleado como la empresa pueden solicitar la vuelta a presencial con [X días de preaviso], salvo acuerdo específico.

### 📋 Los errores más comunes en políticas de teletrabajo
Las cláusulas que generan conflictos y cómo redactarlas para que sean claras y ejecutables.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Teletrabajo, política de trabajo a distancia, Ley 10/2021, HR España',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Reporting financiero para inversores: el pack mensual que genera confianza y evita preguntas incómodas',
                'description'       => 'Diseña el investor update mensual que da a tus inversores la información que necesitan de forma clara y honesta. Con la estructura del informe, las métricas que los inversores esperan ver según la etapa, cómo comunicar los problemas antes de que los descubran y el tono que construye la relación a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO y Board Advisor con experiencia preparando investor updates para startups en etapas pre-seed a Series B que han construido relaciones sólidas con sus inversores gracias a la transparencia y claridad de la comunicación.

Contexto:
- Etapa de la empresa: [pre-seed / seed / Series A / Series B / bootstrapped con inversores]
- Inversores actuales: [N business angels / fondo de VC / mixto]
- Facturación mensual (MRR si es SaaS o ventas si es otro modelo): [€]
- Frecuencia del report actual: [ninguno / irregular / mensual / trimestral]
- Mayor dificultad: [no sé qué incluir / hay malas noticias que no sé cómo comunicar / los inversores me preguntan cosas que no tengo preparadas / no tengo tiempo / otro]

## Investor Update Mensual — [Empresa]

### 🧠 Por qué el investor update es una de las mejores inversiones de tiempo del CEO

**Los founders que no envían updates regularmente:**
- Cuando necesitan apoyo (intro, referencia, nuevo capital), los inversores no tienen contexto y la respuesta es más lenta
- Las malas noticias llegan de sorpresa → el inversor pierde confianza
- En el próximo fundraise, la falta de updates se interpreta como falta de organización

**Los founders que envían updates de calidad:**
- Los inversores son proactivos en ofrecer ayuda (intros, candidatos, clientes)
- Cuando hay un problema, ya tienen el contexto para ayudar rápidamente
- El siguiente fundraise es mucho más fácil

### 📄 La estructura del investor update (máximo 1 página o scroll)

**Sección 1 — El titular del mes (1-2 frases):**
La noticia más importante del mes, en positivo o en negativo.
"Cerramos nuestro primer cliente enterprise de €80k ARR" o "El MRR creció un 12% pero el churn fue más alto de lo esperado".

**Sección 2 — Métricas clave:**

Para SaaS:
| Métrica | Mes actual | Mes anterior | Objetivo del mes | YTD |
|---------|-----------|-------------|-----------------|-----|
| MRR | €X | €X | €X | €X |
| MRR Growth MoM | X% | X% | X% | — |
| Churn MRR | €X | €X | <€X | — |
| NRR | X% | X% | >100% | — |
| Nuevos clientes | N | N | N | N |
| Runway | X meses | — | — | — |

Para empresa no-SaaS:
| Ventas del mes | Pipeline | Nuevos clientes | Gross Margin | Caja |

**Sección 3 — Lo que fue bien este mes:**
2-3 logros concretos y por qué son relevantes.

**Sección 4 — Los desafíos y cómo los estamos abordando:**
**Esta es la sección más importante y la que más se evita.**
Los inversores esperan problemas — lo que quieren saber es si eres consciente de ellos y si tienes un plan.

Formato: "El problema → La causa que creemos que está detrás → Lo que estamos haciendo"

**Sección 5 — Dónde necesitamos ayuda:**
1-3 pedidos específicos y accionables.
```
❌ "Si conoces a alguien que pueda ayudarnos, genial"
✅ "Buscamos un Head of Sales con experiencia en SaaS B2B en el mercado alemán —
   ¿conoces a alguien que encaje o a alguien que pueda conocer a alguien?"
```

**Sección 6 — Lo que viene el próximo mes:**
Los 2-3 objetivos principales del próximo mes. (El mes siguiente, lo primero es revisar si se cumplieron.)

### 💬 Cómo comunicar las malas noticias antes de que el inversor las descubra

**La regla de oro:** el inversor nunca debe enterarse de un problema grave por alguien que no seas tú.

**El formato de la mala noticia:**
1. La situación sin eufemismos
2. Por qué ocurrió
3. Qué impacto tiene en los planes
4. Qué estás haciendo para resolverlo
5. Cuándo esperas tener más información
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Investor update, reporting, inversores, startup, CFO',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual del empleado vs la empresa: qué pertenece a quién y cómo protegerlo',
                'description'       => 'Clarifica quién es titular de las creaciones, inventos y código generados por los empleados en España. Con el marco legal del Estatuto de los Trabajadores y la Ley de Patentes, las cláusulas que deben incluir los contratos y cómo proteger el IP de la empresa cuando contrata desarrolladores y creativos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en propiedad intelectual e industrial con experiencia asesorando a startups y empresas tecnológicas en España sobre la titularidad de creaciones de sus empleados y contratistas.

Contexto:
- Tipo de empresa: [startup tech / agencia creativa / consultora / empresa industrial / otro]
- Tipo de creaciones en juego: [código software / diseños / patentes / contenido creativo / algoritmos / modelos de IA / otro]
- Situación: [contratando desarrolladores por primera vez / duda sobre creación de un empleado actual / ex-empleado que reclama derechos / autónomos y freelancers que trabajan para nosotros / otro]
- País: [España]

## Propiedad Intelectual del Empleado vs. la Empresa — Marco Legal España

### ⚖️ El principio general: lo que dice la ley

**En España, la regla general es que el autor de una creación es su titular.**
Pero hay excepciones importantes cuando la creación se produce en el marco de una relación laboral.

### 💻 Software desarrollado por empleados (la situación más frecuente en tech)

**Lo que dice el TRLPI (Texto Refundido de la Ley de Propiedad Intelectual), art. 97.4:**
"Los derechos de explotación de los programas de ordenador creados por un trabajador asalariado en el ejercicio de las funciones que le han sido confiadas o siguiendo las instrucciones de su empresario corresponden, exclusivamente, a éste."

**En español llano:**
Si el empleado desarrolla software como parte de su trabajo (su función principal es programar), la empresa es la titular automáticamente. No hace falta cesión expresa.

**¿Cuándo hay ambigüedad?**
- El empleado desarrolla algo en su tiempo libre, con sus propios recursos, en un área distinta a su trabajo → probablemente es del empleado
- El empleado desarrolla algo que usa herramientas de la empresa o conocimiento adquirido en el trabajo → zona gris → es donde el contrato marca la diferencia

### 🎨 Creaciones artísticas y contenido (diseñadores, redactores, fotógrafos)

**Para los empleados por cuenta ajena:**
El art. 51 TRLPI establece que los derechos de explotación de obras creadas en el marco de un contrato de trabajo se presumen cedidos al empleador, pero solo para las obras específicas para las que fue contratado y solo para los usos previstos en el contrato.

**Lo que esto significa en la práctica:**
Si contratas a un diseñador para diseñar tu web, la empresa tiene los derechos de uso de ese diseño. Pero si el diseñador hace una ilustración personal en su tiempo libre, es suya.

### 🔬 Inventos y patentes de empleados (Ley de Patentes, art. 15-17)

**3 categorías con reglas distintas:**

1. **Invención de servicio:** realizada en ejecución del contrato de trabajo para realizar actividades inventivas → pertenece a la empresa
2. **Invención mixta:** realizada en el ámbito de la empresa pero usando sus recursos o conocimientos adquiridos → la empresa puede asumir la titularidad pagando compensación justa
3. **Invención libre:** sin relación con la empresa → pertenece al empleado

### 📄 Las cláusulas que necesitas en el contrato de trabajo

**Cláusula de cesión de derechos (para evitar ambigüedades):**
```
"El TRABAJADOR cede a la EMPRESA, con carácter exclusivo y para todo el mundo,
todos los derechos de explotación sobre las obras, creaciones, diseños, programas
informáticos, invenciones y cualquier resultado intelectual generado en el marco
de su relación laboral con la EMPRESA, incluyendo los realizados durante el
período de adaptación y formación, y aquellos que usen medios, conocimientos
o recursos de la EMPRESA, aunque fueran realizados parcialmente fuera del
horario de trabajo."
```

**Cláusula para el trabajo de freelancers (fundamental — sin esta, el freelance retiene los derechos):**
```
"El PRESTADOR DE SERVICIOS cede a la EMPRESA todos los derechos de propiedad
intelectual e industrial sobre los materiales entregados a la recepción del pago
acordado. La cesión incluye todos los derechos de explotación: reproducción,
distribución, comunicación pública y transformación, para todos los territorios
y por el tiempo máximo permitido por la ley."
```

### 🚨 El riesgo del open source en código de empleados
Qué ocurre cuando un empleado usa su tiempo libre para contribuir a proyectos open source relacionados con su trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 15,
                'use_case'          => 'Propiedad intelectual empleados, software laboral, IP derecho español, contratos',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Métricas de soporte: los KPIs que revelan si el equipo es eficiente y si los clientes están satisfechos',
                'description'       => 'Define, implementa y actúa sobre las métricas de soporte que importan. Con los KPIs de eficiencia operativa, los indicadores de satisfacción del cliente, los umbrales correctos para tu tipo de negocio y el dashboard que el equipo revisa para mejorar continuamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director of Support Operations con experiencia construyendo sistemas de métricas en equipos de soporte de 5 a 100 agentes que han usado los datos para pasar de soporte reactivo a soporte que genera retención y expansión.

Contexto:
- Tamaño del equipo de soporte: [N agentes]
- Canales: [chat / email / teléfono / todos]
- Herramienta: [Zendesk / Intercom / Freshdesk / Help Scout / otro]
- Volumen: [N tickets/mes]
- Problema actual: [no medimos nada / medimos CSAT pero nada más / los datos no nos llevan a decisiones / el equipo no ve el sentido de las métricas / otro]

## Dashboard de Métricas de Soporte — [Empresa]

### 📊 Los 3 grupos de métricas (y por qué necesitas los 3)

**Grupo 1 — Eficiencia operativa:** mide si el equipo funciona bien
**Grupo 2 — Satisfacción del cliente:** mide si el cliente está bien
**Grupo 3 — Impacto en el negocio:** mide si el soporte contribuye a los resultados

Un equipo que solo mide CSAT puede ser adorable con los clientes pero ineficiente.
Un equipo que solo mide eficiencia puede resolver tickets rápido pero dejar al cliente frustrado.

### ⚡ Grupo 1: Métricas de eficiencia operativa

**First Response Time (FRT) — Tiempo hasta la primera respuesta:**
El tiempo que pasa desde que el ticket entra hasta que el agente da la primera respuesta.

Benchmarks por canal:
| Canal | Bueno | Excelente |
|-------|-------|-----------|
| Chat en vivo | <2 min | <30 seg |
| Email | <4h | <1h |
| Teléfono | <30 seg (tiempo en cola) | <10 seg |

**First Contact Resolution (FCR) — Resolución en el primer contacto:**
% de tickets resueltos sin que el cliente tenga que volver a escribir.
Objetivo: >70% para soporte general, >80% para soporte técnico bien documentado.

**Average Handle Time (AHT) — Tiempo medio de gestión:**
Tiempo desde que el agente abre el ticket hasta que lo cierra.
No optimizar solo AHT — un AHT muy bajo puede significar que los tickets no se resuelven bien.

**Backlog:** tickets abiertos sin responder más de [X horas].
Objetivo: 0 tickets en backlog al final del día.

**Ticket volume trend:** evolución del volumen de tickets semana a semana.
Si el volumen sube sin crecer en clientes, hay un problema de producto o de documentación.

### 😊 Grupo 2: Satisfacción del cliente

**CSAT (Customer Satisfaction Score):**
Encuesta post-cierre de ticket: "¿Cómo valorarías nuestra atención?" (1-5 o 1-10)
- Objetivo: >4.0/5.0 o >80/100
- Tasa de respuesta objetivo: >20% (si es muy baja, el feedback no es representativo)

**NPS de soporte:**
"¿Con qué probabilidad recomendarías [empresa] basándote en tu última experiencia con el soporte?" (0-10)
Diferencia del NPS de producto: mide específicamente la percepción del soporte.

**Sentiment analysis:**
Si tu herramienta lo permite (Zendesk, Intercom): análisis automático del tono de los mensajes del cliente. Detecta escalada de frustración antes de que llegue al CSAT.

### 💼 Grupo 3: Impacto en el negocio

**Ticket deflection rate:**
% de usuarios que resuelven su duda en la base de conocimiento sin abrir ticket.
Objetivo: >35% de las búsquedas en la KB no generan ticket.

**Churn prevention:**
% de clientes en riesgo (bajas CSAT, muchos tickets) que NO churnearon tras la intervención del equipo de CS.

**Expansion influenced by support:**
Clientes que pasaron a un plan superior después de una interacción positiva de soporte.

### 📅 El ritmo de revisión de métricas
Daily standup (FCR + FRT + backlog), revisión semanal (CSAT + tendencias), revisión mensual (impacto en negocio).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Métricas de soporte, CSAT, FCR, FRT, dashboard de soporte',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Diversificación de ingresos freelance: de cliente único a múltiples fuentes sin dispersarte',
                'description'       => 'Diseña la estrategia de diversificación de ingresos que reduce tu dependencia de un solo cliente o tipo de proyecto. Con los modelos de ingresos que complementan al trabajo de cliente, el plan para añadir una fuente nueva sin que afecte a tu trabajo actual y el ritmo para llegar a 30% de ingresos pasivos en 12 meses.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Strategist para freelancers con experiencia ayudando a profesionales independientes a construir múltiples fuentes de ingresos que reducen el estrés de la dependencia del cliente y aumentan los ingresos totales en un 40-80%.

Mi situación:
- Servicio freelance principal: [describe]
- Ingresos mensuales actuales: [€ — de clientes]
- % que representa el cliente más grande: [X%]
- Tiempo libre disponible fuera del trabajo de cliente: [N horas/semana]
- Habilidades adicionales o conocimientos que podría monetizar: [describe]
- Mayor miedo: [dispersarme / no tener tiempo / no sé cómo empezar / miedo al fracaso del producto / otro]

## Diversificación de Ingresos Freelance — [Tu negocio]

### 🧠 Por qué depender de un solo cliente es el mayor riesgo del freelance

**El riesgo real:**
Si un cliente supone >40% de tus ingresos, un cambio en su situación (recortes de presupuesto, cambio de prioridades, nuevo equipo) puede destruir tus ingresos de un mes para otro.

**El objetivo de diversificación:**
- Ningún cliente > 30% de los ingresos totales
- Al menos 2-3 fuentes de ingresos distintas
- Al menos una fuente que no requiere tiempo activo (pasiva o semi-pasiva)

### 💼 Los modelos de ingresos que complementan el trabajo de cliente

**Modelo 1 — Más clientes del mismo tipo (baja inversión de tiempo para activar):**
Añadir 1-2 clientes más del mismo perfil con el mismo servicio.
Requiere: mejorar el sistema de ventas y onboarding para no multiplicar el tiempo de gestión.

**Modelo 2 — Retainers mensuales (estabilidad con el mismo tipo de cliente):**
En lugar de proyectos únicos, ofrece un servicio de mantenimiento mensual.
Ejemplo: "Diseñé tu web → ahora te ofrezco el mantenimiento y mejoras por €X/mes"
Requiere: definir exactamente qué incluye el retainer para que sea rentable.

**Modelo 3 — Digitalizar el conocimiento (semi-pasivo, requiere inversión inicial):**
- Curso online sobre tu especialidad
- Plantillas o recursos descargables
- E-book o guía práctica
- Newsletter de pago (Substack)

El truco: ya tienes el conocimiento. La inversión es tiempo de producción, no dinero.

**Modelo 4 — Subcontratación y agencia (más escala, más gestión):**
Actúas como "agencia de uno": consigues más proyectos de los que puedes asumir y subcontratas el exceso.
Requiere: sistema de gestión de proyectos y colaboradores de confianza.

**Modelo 5 — Consultoría en lugar de ejecución (mejor margen por hora):**
Pasar de ejecutar (hacer el trabajo) a asesorar (decir cómo hacerlo).
Requiere: reposicionamiento como experto senior + ejemplos de resultados.

### 📅 El plan de 12 meses para diversificar sin dispersarte

**Mes 1-3 — Estabiliza la fuente principal:**
Antes de añadir nada, asegúrate de que tu servicio principal genera suficientes ingresos consistentes y que tienes tiempo libre real (no "teórico").

**Mes 3-6 — Añade la segunda fuente:**
Elige UNO de los modelos anteriores. Solo uno. El que requiere menos inversión para tu perfil.
Dedícale máximo 5-7 horas/semana. Si no tienes ese tiempo, primero elimina trabajo de cliente antes de añadir algo nuevo.

**Mes 6-12 — Optimiza y añade la tercera fuente:**
Una vez la segunda fuente genera ingresos consistentes (aunque pequeños), añade la tercera.

**La regla del 20%:**
Cuando una fuente de ingresos llega al 20% de tus ingresos totales, puede sostenerse sola mientras añades la siguiente.

### 🎯 Cuánto tiempo dedica cada tipo de ingreso vs. cuánto genera
La tabla de eficiencia por hora de cada modelo de ingreso y cómo priorizar según tu situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Diversificación de ingresos, freelance, múltiples fuentes, ingresos pasivos',
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
