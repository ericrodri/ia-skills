<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills12Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Growth hacking: diseña y ejecuta experimentos de crecimiento con metodología AARRR',
                'description'       => 'Implementa el proceso de growth hacking sistemático con el funnel AARRR (Adquisición, Activación, Retención, Revenue, Referral). Con el backlog de experimentos, la priorización ICE y la cadencia de testing que genera aprendizajes reales.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth Manager con experiencia lanzando y midiendo +200 experimentos de crecimiento en startups de etapa seed a Serie B.

Mi contexto:
- Tipo de producto: [SaaS / e-commerce / marketplace / app / otro]
- Etapa: [pre-PMF / post-PMF con tracción / escalando]
- Métricas actuales: [DAU/MAU / MRR / conversión / churn — lo que tengas]
- El mayor cuello de botella en el funnel ahora mismo: [adquisición / activación / retención / monetización]
- Recursos disponibles: [equipo de crecimiento / solo yo / presupuesto mensual €X]

## Framework de Growth — [Producto]

### 🪣 Diagnóstico del funnel AARRR

**Adquisición:** ¿Cómo te descubren?
- Canales actuales y su % de contribución
- Coste por adquisición por canal
- ¿Qué canal tiene mejor CAC pero más espacio para escalar?

**Activación:** ¿Llegan al aha moment?
- % de usuarios que completan el onboarding
- % de usuarios que hacen la acción clave en las primeras 24h
- Dónde se pierde el 50% de los usuarios nuevos

**Retención:** ¿Vuelven?
- D1/D7/D30 retention (o W1/W4/M3 si es uso menos frecuente)
- ¿Qué diferencia a los usuarios que retienen de los que no?

**Revenue:** ¿Pagan?
- Tasa de conversión de free a paid
- ARPU y su tendencia
- NRR (Net Revenue Retention)

**Referral:** ¿Te recomiendan?
- NPS score
- % de nuevos usuarios que vienen por referencia

**Tu cuello de botella principal:** [el punto del funnel con mayor palanca de mejora]

### 🧪 El proceso de experimentación

**Paso 1 — Generación de ideas:**
Para cada etapa del funnel, genera 10 ideas de experimento. Fuentes:
- Entrevistas de usuario (qué frena / qué confunde)
- Análisis de datos (dónde hay drops)
- Benchmarking de competidores
- Literatura de growth (libros, blogs, teardowns)

**Paso 2 — Priorización ICE:**
| Idea | Impact (1-10) | Confidence (1-10) | Ease (1-10) | ICE Score |
|------|-------------|-----------------|-----------|-----------|
| [Idea 1] | 8 | 7 | 6 | 7.0 |
| [Idea 2] | 5 | 9 | 8 | 7.3 |

**Paso 3 — Diseño del experimento:**
Para cada experimento con ICE > 6:
- Hipótesis: "Creemos que [cambio] aumentará [métrica] en [X%] porque [razón]"
- Métrica norte: la única que determina si el experimento funcionó
- Tamaño mínimo de muestra: [calculadora estadística — N usuarios para significancia]
- Duración: [X semanas]
- Criterio de éxito / fracaso

**Paso 4 — Análisis y decisión:**
- ¿La hipótesis se confirmó? → escalar
- ¿Se refutó? → aprender y generar nueva hipótesis
- ¿Resultados no concluyentes? → extender o rediseñar

### 📅 Cadencia del equipo de growth
- Weekly growth meeting: agenda de 45 min
- Revisión mensual del backlog
- Sprint de growth de 2 semanas: qué va dentro y qué no

### 💡 Los 10 experimentos de crecimiento más rentables para tu etapa
Adaptados a tu cuello de botella identificado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Growth hacking, experimentación, AARRR funnel',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Seguridad en APIs REST: autenticación, rate limiting y protección OWASP para producción',
                'description'       => 'Implementa las medidas de seguridad esenciales en tu API REST: autenticación robusta, autorización granular, rate limiting, validación de inputs y protección contra los ataques más comunes del OWASP API Top 10.',
                'prompt_content'    => <<<'PROMPT'
Eres un Application Security Engineer especializado en APIs REST con experiencia auditando y securizando APIs en producción con millones de llamadas diarias.

Mi contexto:
- Stack de la API: [Node.js/Express / Python/FastAPI / PHP/Laravel / Go / otro]
- Tipo de API: [pública / privada / partner / interna]
- Autenticación actual: [ninguna / API key básica / JWT / OAuth2 / otra]
- Infraestructura: [AWS / GCP / Azure / VPS / Kubernetes]
- Exposición: [API gateway / directo / detrás de CDN]

## Guía de Seguridad en APIs REST — [Proyecto]

### 🔐 Autenticación robusta

**API Keys (para APIs internas o de partner):**
```javascript
// Generación segura de API keys
import crypto from 'crypto'

function generateApiKey(): string {
  return `sk_${crypto.randomBytes(32).toString('base64url')}`
}

// Middleware de validación (Express)
async function validateApiKey(req, res, next) {
  const key = req.headers['x-api-key']
  if (!key) return res.status(401).json({ error: 'API key required' })

  // Comparación segura contra timing attacks
  const hashedKey = crypto.createHash('sha256').update(key).digest('hex')
  const validKey = await db.apiKeys.findOne({ hash: hashedKey, active: true })
  if (!validKey) return res.status(401).json({ error: 'Invalid API key' })

  req.apiKey = validKey
  next()
}
```

**JWT con rotación de tokens:**
```javascript
// Access token de corta duración + refresh token
const ACCESS_TOKEN_TTL = '15m'
const REFRESH_TOKEN_TTL = '7d'

// Nunca en localStorage — cookies httpOnly + sameSite + secure
res.cookie('refresh_token', refreshToken, {
  httpOnly: true,
  secure: true,
  sameSite: 'strict',
  maxAge: 7 * 24 * 60 * 60 * 1000
})
```

### 🚦 Rate Limiting (imprescindible)

```javascript
// Con express-rate-limit
import rateLimit from 'express-rate-limit'

// Límite global
app.use(rateLimit({ windowMs: 15 * 60 * 1000, max: 100 }))

// Límite estricto en auth endpoints
const authLimiter = rateLimit({
  windowMs: 15 * 60 * 1000,
  max: 10, // 10 intentos de login cada 15 min
  skipSuccessfulRequests: true // no cuenta los logins correctos
})
app.post('/auth/login', authLimiter, loginController)
```

### 🛡️ OWASP API Top 10 — Protecciones concretas

**API1 — Broken Object Level Authorization:**
```javascript
// MAL: confiar en el id del body
app.delete('/posts/:id', auth, async (req, res) => {
  await Post.delete({ id: req.params.id }) // ¿Y si el post no es del usuario?
})

// BIEN: verificar ownership siempre
app.delete('/posts/:id', auth, async (req, res) => {
  const post = await Post.findOne({ id: req.params.id, userId: req.user.id })
  if (!post) return res.status(403).json({ error: 'Forbidden' })
  await post.delete()
})
```

**API3 — Broken Object Property Level Authorization:**
No devolver campos sensibles aunque el usuario sea válido.
```javascript
// Usar serializers/DTOs, nunca devolver el objeto completo de DB
const userDto = { id: user.id, name: user.name, email: user.email }
// Omitir: password_hash, internal_notes, payment_method, etc.
```

**API4 — Unrestricted Resource Consumption:**
- Paginación obligatoria con límite máximo en todas las listas
- Límite de tamaño en payloads de request (1MB por defecto)
- Timeout en operaciones largas

**API8 — Security Misconfiguration:**
```javascript
// Headers de seguridad con Helmet
import helmet from 'helmet'
app.use(helmet())
app.use(helmet.contentSecurityPolicy(...))

// No exponer información del stack en errores
app.use((err, req, res, next) => {
  console.error(err) // Log interno
  res.status(500).json({ error: 'Internal server error' }) // Sin detalles al cliente
})
```

### 📊 Checklist de seguridad antes de pasar a producción
Los 20 puntos que debes verificar antes de abrir la API al mundo.

### 🔍 Herramientas de auditoría recomendadas
OWASP ZAP, Burp Suite Community, nuclei — cómo usarlas sin ser un experto en seguridad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Seguridad en APIs, OWASP, autenticación, rate limiting',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design tokens: el sistema de variables que hace tu design system escalable',
                'description'       => 'Implementa design tokens para conectar Figma con el código de tu equipo. Con la nomenclatura correcta, la jerarquía de tokens por capa (global → semántico → componente) y la sincronización automática entre diseño y desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Design Systems Engineer con experiencia implementando design tokens en equipos de producto con 3 a 30 diseñadores y developers trabajando en el mismo sistema.

Mi contexto:
- Stack frontend: [React / Vue / Angular / iOS SwiftUI / Android / web multi-plataforma]
- Herramienta de diseño: [Figma]
- Estado actual: [sin tokens / tokens en Figma sin sincronizar / tokens en código sin Figma / otro]
- Número de temas/modos necesarios: [solo light / light + dark / múltiples marcas]

## Sistema de Design Tokens — [Proyecto]

### 🧠 Por qué los tokens son la clave del design system

Sin tokens: "El botón primario es #3B82F6" — funciona hasta que cambias el color y tienes 347 archivos que actualizar.

Con tokens: "El botón primario usa `color.action.primary`" — cambias el token una vez y se actualiza en todo el sistema, en todos los temas.

### 🏗️ Arquitectura de tokens en 3 capas

**Capa 1 — Global tokens (los primitivos):**
Los valores crudos. No tienen semántica, solo valores.

```json
{
  "color": {
    "blue": {
      "50": { "value": "#EFF6FF" },
      "100": { "value": "#DBEAFE" },
      "500": { "value": "#3B82F6" },
      "700": { "value": "#1D4ED8" },
      "900": { "value": "#1E3A8A" }
    },
    "neutral": {
      "0":   { "value": "#FFFFFF" },
      "50":  { "value": "#F9FAFB" },
      "900": { "value": "#111827" }
    }
  },
  "spacing": {
    "1": { "value": "4px" },
    "2": { "value": "8px" },
    "4": { "value": "16px" },
    "8": { "value": "32px" }
  }
}
```

**Capa 2 — Semánticos / Alias (el significado):**
Referencian globals. Aquí vive la semántica. Nunca valores crudos.

```json
{
  "color": {
    "background": {
      "primary":   { "value": "{color.neutral.0}" },
      "secondary": { "value": "{color.neutral.50}" }
    },
    "text": {
      "primary":   { "value": "{color.neutral.900}" },
      "secondary": { "value": "{color.neutral.600}" },
      "disabled":  { "value": "{color.neutral.400}" }
    },
    "action": {
      "primary":         { "value": "{color.blue.500}" },
      "primary-hover":   { "value": "{color.blue.700}" },
      "primary-focus":   { "value": "{color.blue.100}" }
    },
    "feedback": {
      "error":   { "value": "{color.red.500}" },
      "success": { "value": "{color.green.500}" },
      "warning": { "value": "{color.amber.500}" }
    }
  }
}
```

**Capa 3 — Tokens de componente (específicos):**
Solo cuando un componente necesita algo que no encaja en los semánticos.
```json
{
  "button": {
    "padding-x": { "value": "{spacing.4}" },
    "border-radius": { "value": "6px" },
    "font-weight": { "value": "600" }
  }
}
```

### 🎨 Dark mode con tokens (sin duplicar código)

```json
// dark-mode.json — solo sobreescribe los semánticos
{
  "color": {
    "background": {
      "primary":   { "value": "{color.neutral.900}" },
      "secondary": { "value": "{color.neutral.800}" }
    },
    "text": {
      "primary":   { "value": "{color.neutral.50}" }
    }
  }
}
```

### 🔄 Sincronización Figma ↔ Código

**Herramientas de sincronización:**
- Token Studio para Figma (plugin) → exporta a JSON
- Style Dictionary (Amazon) → transforma JSON a CSS variables, SCSS, iOS, Android
- GitHub Actions → automatiza la sincronización en cada push

**Pipeline de sincronización:**
```
Diseñador edita token en Figma →
Token Studio genera JSON →
PR automático al repositorio →
Style Dictionary genera outputs (CSS vars / SCSS / Swift / XML) →
Deploy automático a todos los consumidores
```

### 📋 Convención de nombres (para que todo el equipo use los mismos)
Guía de nomenclatura con ejemplos de qué hacer y qué evitar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Design tokens, design system, Figma, frontend',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Demostración de producto que cierra: la estructura del demo perfecto para SaaS y servicios',
                'description'       => 'Diseña y practica la demo de tu producto o servicio que convierte prospects en clientes. Con la estructura que mantiene el interés, la personalización por ICP y el manejo de las preguntas difíciles en directo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Engineer y Demo Specialist con experiencia haciendo demos de productos SaaS de +50.000€ ARR y servicios profesionales de alto ticket.

Mi contexto:
- Producto / servicio que presento: [describe]
- Duración habitual de la demo: [30 / 45 / 60 min]
- Perfil del comprador en la sala: [solo el decisor / equipo técnico + negocio / comité]
- Etapa en el proceso de venta: [primera demo / demo técnica / demo de cierre]
- Mayor problema con las demos actuales: [pierdo su atención / no personalizo suficiente / me preguntan algo y no sé responder / no cierro el siguiente paso]

## Guía de Demo Perfecta — [Producto]

### 🎯 Los 5 minutos previos a la demo (los más importantes)

**Pre-call checklist:**
- [ ] Revisado el LinkedIn del decisor + de todos los asistentes
- [ ] Buscado noticias recientes de la empresa (financiación, expansión, contrataciones)
- [ ] Preparado 2-3 referencias a su industria / caso de uso específico
- [ ] Entorno de demo limpio y con datos representativos de su sector
- [ ] Alternativa de backup si algo falla técnicamente

### 📐 La estructura de la demo que convierte (60 min)

**Bloque 1 — Conexión y agenda (5 min):**
- Presentaciones rápidas (máximo 30 segundos por persona)
- "¿Qué os gustaría ver hoy? ¿Qué haría que esta hora valiera vuestro tiempo?"
- Confirma el problema que tienes que resolver durante la demo

**Bloque 2 — El gancho (5 min):**
Antes de enseñar nada del producto:
"Muchos de los [cargo del interlocutor] con los que hablo tienen [problema específico de su industria]. ¿Os suena?"
Si dicen sí → tienes su atención. Todo lo que enseñes resolverá ese problema.

**Bloque 3 — La demo (35 min):**
Estructura: Problema → Solución → Prueba → Impacto

Para cada feature que enseñas:
1. "El problema que esto resuelve es..." (1 frase)
2. Muestra la feature (demo en vivo)
3. "Los clientes como vosotros ven [resultado específico] gracias a esto"
4. Pausa: "¿Tiene sentido para vuestro caso?"

**Lo que NO enseñas:**
Todo lo que no conecta con el problema del cliente. La demo más corta gana.

**Bloque 4 — Prueba social personalizada (5 min):**
"Trabajamos con [empresa similar a la suya / del mismo sector] y lo que ellos valoran más es [algo que acabas de enseñar]."

**Bloque 5 — Siguientes pasos (10 min):**
No preguntes "¿alguna pregunta?". Pregunta:
"¿Qué tendría que pasar para que este mes pudiéramos dar el siguiente paso?"

### 🤔 Manejo de preguntas difíciles en directo

**"¿Tenéis integración con [herramienta X]?":**
[Si la tienes → muéstrala. Si no → respuesta honesta + hoja de ruta]

**"¿Cuánto cuesta?":**
Cuándo responder y cuándo diferir (depende de la etapa).

**"Lo que hace [competidor] es diferente porque...":**
Cómo manejar la comparación sin hablar mal de la competencia.

**"Necesito consultar con mi equipo técnico":**
Cómo convertir esto en una demo técnica, no en el final del proceso.

### 📊 Métricas de tu demo
Cómo trackear tu tasa de conversión demo → propuesta y demo → cliente para saber qué mejorar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Demo de producto, sales engineering, cierre de ventas SaaS',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Priorización de features con RICE e ICE: cómo decir no con datos y sin dramas',
                'description'       => 'Implementa el framework de priorización RICE o ICE en tu equipo para tomar decisiones sobre el backlog con criterios objetivos. Con el proceso de scoring, cómo manejar las peticiones de ventas y cómo comunicar el "no" de forma que no queme relaciones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Product Manager con experiencia priorizando backlogs en entornos donde todos creen que su feature es la más importante.

Mi contexto:
- Tamaño del backlog: [N items]
- Quién aporta peticiones: [ventas / CS / CEO / usuarios / datos / todos]
- Cadencia de priorización: [semanal / mensual / sin proceso definido]
- Problema principal: [el backlog es un parking lot / ventas manda más que los datos / no hay criterios claros / el CEO cambia prioridades cada semana]
- Tipo de producto: [SaaS / consumer / marketplace / B2B]

## Framework de Priorización — [Producto]

### 📐 RICE Score — cuándo usarlo

**RICE es para cuando tienes suficientes datos para estimar impacto.**

**R — Reach (alcance):** ¿Cuántos usuarios se benefician en el siguiente trimestre?
- Número de usuarios que usarán esta feature por período
- Fuente: analytics, base de usuarios, entrevistas

**I — Impact (impacto):** ¿Cuánto impacta en el objetivo que importa?
- Escala: 0.25 (mínimo) → 0.5 (bajo) → 1 (medio) → 2 (alto) → 3 (masivo)
- Referencia: el "alto" de tu produto es [X conversiones / X retención / X revenue]

**C — Confidence (confianza):** ¿Cuánto confías en las estimaciones de R e I?
- 100% si tienes datos sólidos
- 80% si tienes datos parciales
- 50% si es intuición informada
- No uses <50% — si no confías, es un spike primero

**E — Effort (esfuerzo):** ¿Cuántas semanas-persona requiere?
- 1 semana = 1 dev durante 1 semana

```
RICE Score = (Reach × Impact × Confidence) / Effort
```

**Ejemplo:**
- Reach: 500 usuarios/trimestre
- Impact: 2 (alto)
- Confidence: 80% (0.8)
- Effort: 2 semanas-persona
- RICE = (500 × 2 × 0.8) / 2 = 400

### ⚡ ICE Score — cuándo usarlo

**ICE es para cuando tienes menos datos y necesitas velocidad de decisión.**

```
ICE Score = Impact (1-10) × Confidence (1-10) × Ease (1-10)
```

Más subjetivo que RICE, pero más rápido. Útil para early-stage o para filtrar rápidamente el backlog.

### 📊 El backlog priorizado en la práctica

**Plantilla de scoring:**
| Feature | Reach | Impact | Confidence | Effort | RICE | Sprint |
|---------|-------|--------|-----------|--------|------|--------|
| [Feature A] | 1200 | 2 | 80% | 3 | 640 | Q3 |
| [Feature B] | 200 | 3 | 60% | 1 | 360 | Q3 |
| [Feature C] | 800 | 1 | 90% | 0.5 | 1440 | Q3 |

**Regla de corte:** features con RICE < X entran en la capa "Later" del roadmap automáticamente.

### 🤝 Cómo decir no a una petición de ventas (y no quemarlos)

**El no que funciona tiene 3 partes:**
1. Reconocer el valor de la petición (sin prometer que se hace)
2. Compartir el criterio que usas (no "yo decido" sino "el dato decide")
3. Alternativa o timeline (no un no definitivo si hay posibilidad futura)

**Template:**
"Gracias por traer esto — tiene sentido para [cliente X]. Lo hemos puntuado con RICE y sale [N], lo que lo pone en [posición]. Lo que está por encima son [Y y Z] que impactan a [N] más usuarios. Si consigues que [umbral de validación] más clientes lo pidan, lo subimos en la próxima revisión mensual."

### 🔄 La reunión de priorización mensual
Agenda de 60 minutos para mantener el backlog actualizado y alineado con el equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Priorización, RICE, ICE, gestión del backlog, product management',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Plan de carrera y bandas salariales: la estructura que retiene al talento senior',
                'description'       => 'Diseña las bandas salariales y el framework de career laddering para tu empresa. Con los niveles definidos, los criterios objetivos de promoción y el proceso de calibración que reduce la arbitrariedad y el sesgo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Compensation & Benefits specialist con experiencia diseñando estructuras de carrera para empresas tech de 30 a 500 empleados.

Contexto de la empresa:
- Sector: [tech / servicios / e-commerce / otro]
- Número de empleados: [N]
- Familias de puestos principales: [engineering / marketing / ventas / producto / operaciones]
- Problema actual: [la gente se va por falta de carrera / las promociones son arbitrarias / hay inequidad salarial / no sabemos qué pagar para contratar]
- Benchmarks que usáis actualmente: [Glassdoor / Mercer / LinkedIn Salary / ninguno]

## Framework de Career Laddering y Bandas Salariales — [Empresa]

### 🏗️ Arquitectura del career ladder

**Principios de diseño:**
1. Máximo 5-6 niveles por familia (más niveles = más confusión)
2. Criterios observables y concretos (no "lidera con impacto")
3. Dos tracks: Individual Contributor (IC) y Management — sin obligar a todos a ser managers para crecer en sueldo
4. Las bandas salariales se solapan (el senior junior puede ganar más que el junior mid)

**Estructura de niveles para Engineering (ejemplo que puedes adaptar):**

| Nivel | Título | Scope de trabajo | Autonomía |
|-------|--------|-----------------|-----------|
| L1 | Junior Engineer | Tareas definidas, un componente | Supervisado |
| L2 | Engineer | Features completas con cierta ambigüedad | Orientado |
| L3 | Senior Engineer | Módulos enteros, levanta riesgos | Autónomo |
| L4 | Staff Engineer | Iniciativas cross-equipo, define arquitectura | Estratégico |
| L5 | Principal Engineer | Impacto a nivel empresa | Visionario |

**Criterios de nivel por dimensión (para cada nivel):**

Para cada nivel, define en estas 4-5 dimensiones:
- **Habilidades técnicas / funcionales:** qué debe saber hacer
- **Impacto:** qué resultado genera y en qué ámbito (tarea / equipo / área / empresa)
- **Colaboración:** cómo trabaja con otros y cómo influye
- **Comunicación:** con quién se comunica y sobre qué
- **Ownership:** qué puede decidir solo y qué necesita aprobación

### 💰 Bandas salariales

**Cómo construirlas:**
1. Define el punto medio (P50) basado en benchmarks de mercado para ese nivel y mercado
2. El rango cubre P25 a P75 del mercado (banda estrecha) o P10 a P90 (banda amplia)
3. Más amplia = más flexibilidad para casos especiales; más estrecha = más equidad

**Banda salariales recomendadas (ejemplo — adapta al mercado/sector):**

| Nivel | Rango (€ bruto/año) | Midpoint |
|-------|--------------------|---------|
| L1 | €25.000 — €35.000 | €30.000 |
| L2 | €32.000 — €45.000 | €38.500 |
| L3 | €42.000 — €60.000 | €51.000 |
| L4 | €55.000 — €80.000 | €67.500 |
| L5 | €70.000 — €100.000+ | €85.000 |

**Dónde situar a cada empleado en la banda:**
- P25: nuevo en el nivel, en desarrollo
- P50: cumple expectativas del nivel con solidez
- P75: excede, probablemente listo para el siguiente nivel

### 🎯 El proceso de calibración (para que no dependa del manager)

**Calibration meeting trimestral:**
- Todos los managers presentan a su equipo con nivel actual y posición en la banda
- Panel revisa: ¿consistencia entre equipos? ¿sesgos visibles?
- Decisiones de ajuste salarial y promoción: consenso del grupo, no del manager individual

### 📢 Cómo comunicarlo al equipo
El anuncio de las career levels y el proceso para que cada persona sepa en qué nivel está y qué necesita para subir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Career ladder, bandas salariales, retención de talento',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Optimización fiscal legal para autónomos y PYMEs: deducciones, sociedades y timing',
                'description'       => 'Aplica las estrategias de planificación fiscal legal que reducen tu carga tributaria como autónomo o PYME española. Con las deducciones más utilizadas, la comparativa autónomo vs. SL y el timing de decisiones que marca la diferencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como asesor fiscal especializado en optimización tributaria legal para autónomos y PYMEs en España con facturación de 30k a 2M€.

Mi situación:
- Figura jurídica: [autónomo / SL / SA]
- Facturación anual estimada: [€]
- Gastos actuales deducibles que ya aplico: [lista lo que sabes]
- Sectores de actividad: [describe — puede afectar deducciones específicas]
- Inversiones planificadas: [I+D / activos / formación / expansión / ninguna]
- Empleados: [ninguno / N empleados]

## Plan de Optimización Fiscal — [Tu situación]

### 💡 Las deducciones más efectivas y más olvidadas

**Para autónomos:**

**Gastos deducibles en el IRPF (régimen de estimación directa):**
- Cuota de autónomos (RETA): 100% deducible
- Seguro de salud (autónomo + cónyuge + hijos): hasta €500/persona/año
- Formación relacionada con la actividad: 100%
- Materiales, software, suscripciones: 100% si uso exclusivo profesional
- Teléfono: la parte de uso profesional (recomendable tener un número separado)
- Coche: complicado — solo si hay uso exclusivo profesional y se puede probar
- Gastos de representación: hasta 1% de la facturación

**El caso del despacho en casa:**
- Puedes deducir el % de la vivienda usado en la actividad × los gastos (hipoteca/alquiler, luz, internet)
- Requiere haber notificado a Hacienda en el alta de actividades
- Ratio recomendado: conservador y justificable (10-20% si tienes despacho propio)

**Para SL (Impuesto sobre Sociedades):**

**Reserva de nivelación (Art. 105 LIS):**
Reduce la base imponible hasta el 10% dotando una reserva indisponible durante 5 años.
- Ahorro real: 10% de la BI × 25% de IS = hasta 2,5% de la BI en impuesto diferido/evitado

**Reserva de capitalización (Art. 25 LIS):**
Reducción del 15% de la base imponible si incrementas fondos propios sin distribuir dividendos.

**Amortización acelerada:**
Para determinados activos e inversiones: puedes amortizar más rápido y diferir el pago del IS.

**I+D+i (si aplica):**
Deducciones en cuota de hasta el 42% del gasto en I+D — una de las más potentes y más desaprovechadas.

### ⚖️ ¿Autónomo o SL? El análisis real para tu facturación

| Facturación neta | ¿Cuándo conviene SL? |
|----------------|---------------------|
| < €40k | Autónomo casi siempre (costes de gestión de SL > ahorro fiscal) |
| €40k — €80k | Depende del perfil de gastos y retribución |
| > €80k | La SL suele ahorrar más (tipo IS 25% vs. tipo marginal IRPF 45%+) |

**El truco de la retribución en SL:**
El administrador de la SL se fija un salario que maximiza el beneficio neto personal (retribución razonable + dividendos en el momento fiscal óptimo).

### 📅 El timing de las decisiones fiscales

**Antes de diciembre 31:**
- Anticipar gastos deducibles del próximo año (compra de equipos, formación, seguros)
- Dotar las reservas de nivelación y capitalización si tienes SL
- Revisar si conviene adelantar o diferir cobros según la previsión del año siguiente

**Antes de junio 30 (cierre del 1er semestre):**
- Revisar las estimaciones de IRPF/IS y ajustar pagos fraccionados para no pagar multas

### ⚠️ Lo que Hacienda revisa primero
Las 5 deducciones que generan más inspecciones y cómo documentarlas correctamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Optimización fiscal, deducciones IRPF, SL vs autónomo',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento RGPD para equipos de marketing y ventas: lo que sí y lo que no puedes hacer',
                'description'       => 'Guía práctica de RGPD aplicada al trabajo diario de marketing y ventas. Qué bases jurídicas usar para cada tipo de comunicación, cómo hacer email marketing legal, qué datos puedes guardar en el CRM y qué constituye infracción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como Data Protection Officer (DPO) especializado en el impacto práctico del RGPD en los departamentos de marketing y ventas en empresas B2B y B2C en España.

Contexto:
- Tipo de negocio: [B2B / B2C / mixto]
- Canales de marketing que usáis: [email / LinkedIn / Meta Ads / Google Ads / eventos / otro]
- CRM que usáis: [HubSpot / Salesforce / Pipedrive / otro]
- Tamaño de la base de datos de contactos: [N registros]
- Problema o duda principal: [compra de bases de datos / cold email / tracking en web / retargeting / scraping / otro]

## Guía RGPD para Marketing y Ventas — [Empresa]

### 📋 Las bases jurídicas que podéis usar (y cuándo)

**1. Consentimiento explícito (el más conocido, no siempre necesario):**
- Cuándo: newsletters opt-in, formularios de descarga de recursos, cuentas de usuario
- Requisitos: libre, específico, informado, inequívoco → casilla no pre-marcada
- Problema: puede retirarse en cualquier momento → necesitas mecanismo de baja
- Cuándo NO usar: para datos ya recogidos sin consentimiento, para cold outreach

**2. Interés legítimo (el más útil para marketing B2B):**
- Cuándo: prospección a empresas, análisis de comportamiento en web, personalización
- Test de equilibrio obligatorio: tu interés legítimo vs. los derechos del interesado
- Siempre con derecho de oposición fácil (opt-out en cada comunicación)
- Lo que permite: cold email B2B si hay relevancia razonable

**3. Ejecución de contrato:**
- Cuándo: comunicaciones transaccionales con clientes activos (factura, envío, soporte)
- Muy clara: no necesitas consentimiento para enviar la factura de un pedido

### 📧 Email marketing — qué es legal y qué no

**Email a base propia (opt-in o interés legítimo B2B):**
✅ Legal con los requisitos correctos
- Base jurídica documentada
- Identificación del remitente clara
- Baja sencilla en cada email (1 clic, no "envíanos un email para darte de baja")
- Honoring de bajas en <10 días hábiles

**Compra de bases de datos de emails:**
⛔ Casi siempre ilegal
- Las bases compradas no tienen el consentimiento para TU empresa
- Multa máxima: 20M€ o 4% de la facturación global
- La AEPD ya ha sancionado a empresas por esto

**Cold email B2B (a personas de empresas):**
🟡 Legal bajo ciertas condiciones (interés legítimo)
- El contacto debe ser relevante para sus funciones profesionales
- El email debe identificar claramente quién escribe y por qué
- Debe incluir opt-out fácil
- Mejor práctica: limitarte a un primer email + un follow-up máximo sin respuesta

**Scraping de LinkedIn / webs para extraer emails:**
⛔ Ilegal bajo el RGPD (y viola los ToS de LinkedIn)

### 🎯 Retargeting y cookies de marketing

**Lo que puedes hacer:**
- Retargeting de usuarios que consintieron las cookies de marketing
- Custom audiences con tu propia base de clientes (cargada en hash)
- Lookalike audiences si la base original es legal

**Lo que no puedes hacer:**
- Retargeting sin consentimiento de cookies
- Compartir datos de clientes con terceros sin base jurídica

### 📊 CRM — qué datos puedes guardar y por cuánto tiempo

**Criterio de minimización:** solo los datos necesarios para la finalidad declarada.
- Lead frío: nombre, empresa, email, cargo — nada más sin su consentimiento
- Cliente: datos del contrato + historial de comunicaciones comerciales

**Plazos de conservación:**
- Leads que nunca compraron: 2 años desde el último contacto
- Clientes: durante la relación + 5 años (obligaciones fiscales)

### ✅ Los 10 cambios que marketing y ventas deben hacer esta semana
Acciones concretas para ponerse en compliance sin paralizar el negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'RGPD marketing, email marketing legal, protección de datos',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización con IA en soporte: qué delegar al bot y qué no (nunca)',
                'description'       => 'Diseña la estrategia de automatización de soporte con IA conversacional que reduce volumen sin destruir la experiencia del cliente. Con los casos de uso que sí funcionan, los que fallan, el diseño del handoff humano y las métricas de éxito.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director de Customer Experience con experiencia implementando IA conversacional en equipos de soporte de 10 a 100 agentes sin hundir el CSAT.

Contexto:
- Volumen de tickets: [N/mes]
- Principales motivos de contacto: [lista los 5-10 más frecuentes]
- Herramienta de soporte: [Intercom / Zendesk / Freshdesk / HubSpot / otra]
- CSAT actual: [X%]
- Objetivo de automatización: [reducir volumen / mejorar tiempo de respuesta / atención 24/7 / otro]

## Estrategia de Automatización con IA — [Empresa]

### ✅ Lo que SÍ debes automatizar (alto impacto, bajo riesgo)

**Tier 1 — Automatización total (sin intervención humana):**
- Estado de pedido / envío: "¿Dónde está mi pedido?" con integración al sistema de fulfillment
- Consulta de horarios, precios, disponibilidad
- Reseteo de contraseña / recuperación de cuenta (con verificación de identidad)
- FAQ que representan el 20% del volumen y tienen respuesta única
- Onboarding guiado: los primeros pasos del producto en formato conversacional

**Tier 2 — Asistencia al agente (copilot, no autopilot):**
- Sugerencia de respuesta al agente basada en el historial del cliente
- Resumen automático del contexto antes de que el agente tome la conversación
- Traducción en tiempo real para clientes en otros idiomas
- Detección de sentimiento y priorización de tickets urgentes

### ❌ Lo que NO debes automatizar (nunca o casi nunca)

**Situaciones que siempre necesitan humano:**
- Quejas de nivel crítico (cliente amenaza con cancelar, demanda legal, reseña pública)
- Problemas técnicos complejos con múltiples variables
- Casos de fraude o seguridad
- Clientes con historial de frustración acumulada
- Cualquier situación donde la respuesta incorrecta genera consecuencias legales o financieras al cliente

**La regla de oro:**
Si el bot no puede resolver el problema en 2 turnos de conversación → transferir a humano.

### 🔄 Diseño del handoff humano (el momento más crítico)

**El handoff perfecto incluye:**
1. El resumen de lo que el bot intentó y no pudo resolver
2. El historial del cliente relevante (pedidos recientes, tickets anteriores)
3. El sentimiento detectado (frustrado / neutral / positivo)
4. La categoría del problema
5. Lo que el cliente ha dicho textualmente que quiere

**Cómo NO hacer el handoff:**
"Conectando con un agente..." y el agente tiene que preguntar todo desde cero.

**Template de briefing al agente:**
```
🤖 Resumen del bot:
Cliente: [nombre]
Problema: [descripción de 1 línea]
Intentos del bot: [qué se probó]
Sentimiento: [frustrado — 3 mensajes sin solución]
Historial relevante: [último pedido, último ticket]
Lo que el cliente quiere: "[cita textual]"
```

### 📊 Métricas de la automatización

| Métrica | Cómo medirla | Target |
|---------|------------|--------|
| Deflection rate | Conversaciones resueltas por bot / total | 30-60% según el tipo de negocio |
| Bot CSAT | Encuesta post-conversación del bot | > 70% |
| Handoff accuracy | % de handoffs donde el agente tiene suficiente contexto | > 85% |
| Containment rate | % que el bot resuelve sin ever escalar | [varía por caso de uso] |

### 🚀 Implementación gradual (sin romper el CSAT)
El plan de rollout en fases para implementar la IA sin que los clientes noten el salto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'IA en soporte, chatbots, automatización de customer service',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Modelo de negocio freelance: transforma proyectos únicos en ingresos recurrentes predecibles',
                'description'       => 'Rediseña tu modelo de negocio freelance para añadir ingresos recurrentes que estabilicen tu cashflow. Con los modelos de retainer, los productos digitales y la transición de "trabajo por proyecto" a "ingresos mientras duermes".',
                'prompt_content'    => <<<'PROMPT'
Eres un business strategist especializado en modelos de negocio para freelancers y consultores independientes que quieren dejar de vender tiempo y empezar a vender valor.

Mi situación:
- Servicio principal que ofrezco: [describe]
- Ingresos mensuales actuales: [€]
- Variabilidad de los ingresos: [muy variable / moderada / estable]
- Número de clientes activos: [N]
- Habilidades que tengo además del servicio principal: [formación / escritura / diseño / código / otro]
- Tiempo disponible para construir nuevas fuentes de ingreso: [X horas/semana]

## Modelo de Negocio Freelance Diversificado — [Tu nombre]

### 🎯 El problema con "solo proyectos"

El modelo de proyecto único tiene tres problemas estructurales:
1. **Feast or famine:** meses con más trabajo del que puedes asumir + meses en blanco
2. **No dormir = no cobrar:** eres el único activo del negocio
3. **Techo de ingresos:** hay un límite de horas que puedes vender

La solución no es trabajar más. Es añadir capas de negocio que generan ingresos con diferente estructura de tiempo/dinero.

### 💼 Las 4 capas del negocio freelance maduro

**Capa 1 — Proyectos (ya la tienes):**
Alta remuneración + alto tiempo + alta variabilidad
El objetivo no es eliminarla, sino que no sea la única capa.

**Capa 2 — Retainers (el paso más fácil):**
Ingresos predecibles por disponibilidad o entregables mensuales fijos.

Tipos de retainer que puedes ofrecer desde ya:
- **Retainer de disponibilidad:** el cliente paga X€/mes para tener acceso prioritario a ti (N horas garantizadas)
- **Retainer de entregables:** el cliente paga X€/mes por [entregable fijo: 4 posts, 2 diseños, 1 informe]
- **Retainer de advisory:** el cliente paga X€/mes por una sesión mensual de asesoría + acceso por email

Cómo venderlo a clientes actuales:
"He diseñado una forma de trabajar juntos de forma más continua para que podáis contar conmigo sin tener que iniciar un proyecto cada vez..."

**Capa 3 — Productos digitales (escala sin tiempo adicional):**
- **Curso online:** empaqueta lo que ya sabes enseñar en tus proyectos
- **Plantillas / frameworks:** vende los recursos que ya usas en tu trabajo
- **Guías / ebooks:** el método que te diferencia, en formato descargable
- **Comunidad:** acceso a ti + a otros profesionales en tu nicho

Plataformas: Gumroad / Hotmart / Teachable / Lemon Squeezy

**Capa 4 — Audiencia + partnerships (a largo plazo):**
Newsletter / podcast / LinkedIn → partnerships + afiliados + sponsorships

### 📈 El plan de transición en 6 meses

**Mes 1-2:** Convierte a 1-2 clientes actuales a retainer. Ingresos recurrentes iniciales.
**Mes 3-4:** Empaquetar el primer producto digital. Venderlo a tu red existente.
**Mes 5-6:** Primera campaña de lanzamiento. Primer ingreso pasivo.

### 💰 Simulación de ingresos del modelo diversificado

Con [tu facturación actual], si añades:
- 2 retainers a €X/mes: +€2X/mes fijo
- 1 producto digital que vende 10 unidades/mes a €Y: +€10Y/mes
- Total adicional: €Z/mes con el mismo número de horas o menos

### ⚠️ El error más frecuente
Querer construir las 4 capas a la vez. La dispersión mata el avance. Elige una capa extra y la construyes hasta que funciona antes de pasar a la siguiente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Modelo de negocio freelance, retainers, ingresos recurrentes',
                'vote_score'        => 48,
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
