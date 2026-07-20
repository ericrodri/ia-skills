<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills27Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Retención y reducción del churn: el sistema que identifica los clientes en riesgo antes de que cancelen',
                'description'       => 'Diseña el sistema de retención que identifica los clientes en riesgo de cancelación antes de que lo hagan y activa las intervenciones correctas para retenerlos. Con las señales de churn tempranas, el health score de cliente, las campañas de reactivación y cómo medir el impacto en el LTV.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Success Manager con experiencia reduciendo el churn mensual del 5% al 2% en SaaS B2B mediante sistemas de early warning y programas de intervención proactiva.

Contexto:
- Tipo de producto: [SaaS / ecommerce / servicios de suscripción]
- Churn mensual actual: [%]
- Número de clientes activos: [N]
- Herramienta de análisis disponible: [Mixpanel / Amplitude / Segment / Intercom / solo SQL / otro]
- Estado actual: [no medimos el churn correctamente / medimos pero no actuamos / queremos mejorar el sistema de intervención]

## Sistema de Retención y Reducción de Churn — [Empresa]

### 📊 Las señales de churn tempranas (detectarlas 30-60 días antes es la clave)

**Las señales de uso (la más poderosa):**
```
SEÑAL DE ALTO RIESGO:
→ El usuario no ha iniciado sesión en los últimos 14 días (SaaS con uso diario esperado)
→ La frecuencia de uso ha caído >50% respecto al mes anterior
→ Solo el usuario principal accede (los otros miembros del equipo dejaron de entrar)
→ El número de acciones clave realizadas ha caído >40% en 30 días

SEÑAL MEDIA:
→ No usa las funcionalidades premium que contrataron
→ El tiempo por sesión ha bajado significativamente
```

**Las señales de negocio:**
```
→ No ha renovado el pago automático (para clientes sin renovación automática)
→ Reducción del contrato en la última renovación
→ El contacto principal ha cambiado o ha dejado la empresa
→ Quejas sin resolver en el sistema de soporte
→ NPS de 6 o menos en la última encuesta
```

### 🏥 El health score del cliente: un número que resume el riesgo

**Construye un health score con estas dimensiones:**

```
DIMENSIÓN 1 — Uso del producto (40% del peso):
Score 100: usa el producto al menos X días/semana
Score 70: usa al menos 3 días/semana
Score 40: usa 1-2 días/semana
Score 10: menos de 1 vez a la semana

DIMENSIÓN 2 — Adopción de features (30% del peso):
Score 100: usa 5+ features clave
Score 70: usa 3-4 features clave
Score 40: usa 1-2 features clave
Score 10: solo usa la feature básica

DIMENSIÓN 3 — Engagement con Customer Success (20% del peso):
Score 100: responde emails, asiste a QBRs, usa el soporte proactivamente
Score 50: responde pero no proactivo
Score 10: ignora los emails de CS

DIMENSIÓN 4 — ROI / resultados obtenidos (10% del peso):
Score 100: puede cuantificar el valor que obtiene
Score 50: usa el producto pero no ha medido el ROI
Score 10: no sabe si el producto le ayuda

HEALTH SCORE TOTAL = suma ponderada de las 4 dimensiones (0-100)
Zona roja: <40 → riesgo alto de churn
Zona amarilla: 40-70 → seguimiento activo
Zona verde: >70 → cliente sano
```

### 🎯 Las intervenciones por nivel de riesgo

**Zona roja (health score <40) — Intervención de rescate:**
```
Paso 1 (día 1): El CSM llama — no email.
   "Hola [nombre], veo que lleváis unas semanas sin conectar a [producto].
   Quería llamarte para entender si hay algo que no está funcionando
   o si podemos ayudarte de alguna forma."

Paso 2 (si no responde): Email personalizado del CEO o fundador.
   Una línea del CEO pesa más que 10 del CSM.

Paso 3 (si no responde): La oferta de rescate.
   Descuento de renovación + sesión de configuración gratuita + sesión de training.
   Esta es la última bala — úsala solo cuando lo demás falla.
```

**Zona amarilla (40-70) — Seguimiento activo:**
```
Email de valor mensual: "En el último mes, has conseguido [X, Y, Z] con [producto].
Aquí hay 3 cosas que podrían mejorar tus resultados el próximo mes."

QBR (Quarterly Business Review) para clientes de >€5k ARR.
Tutorial proactivo de una feature que no usa.
```

**Zona verde (>70) — Expansión:**
```
No solo mantengas — busca el upsell y el referido.
El cliente sano es el mejor momento para proponer expansión o referidos.
```

### 📈 Cómo calcular el impacto de la reducción de churn en el LTV y el ARR
El modelo que cuantifica cuánto vale económicamente reducir el churn un 1% y cómo presentarlo al equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Churn, retención clientes, health score, customer success, LTV, SaaS',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de APIs RESTful con versionado y documentación: la API que los desarrolladores aman usar',
                'description'       => 'Diseña una API RESTful bien estructurada con el versionado correcto, la documentación automática con OpenAPI/Swagger y el manejo de errores consistente que hace que los desarrolladores que la consumen no necesiten abrir un ticket de soporte. Con las convenciones de naming, los códigos de estado HTTP correctos y los patrones de paginación.',
                'prompt_content'    => <<<'PROMPT'
Eres un API Architect con experiencia diseñando APIs RESTful públicas y privadas para plataformas con decenas de miles de desarrolladores que las consumen en producción, donde la consistencia y la documentación son tan importantes como el funcionamiento.

Contexto:
- Stack backend: [Node.js+Express / Python+FastAPI / PHP+Laravel / Go / Java / otro]
- Tipo de API: [pública para desarrolladores externos / privada interna / API del producto para el frontend]
- Estado actual: [diseñando desde cero / tenemos una API sin documentar / queremos añadir versionado]
- Número de endpoints actual/previsto: [N]

## Diseño de API RESTful — [Proyecto]

### 📐 Las convenciones de naming que hacen la API predecible

**Los recursos en plural y en minúscula:**
```
✅ GET    /api/v1/users           → lista de usuarios
✅ POST   /api/v1/users           → crear usuario
✅ GET    /api/v1/users/:id       → obtener usuario por ID
✅ PUT    /api/v1/users/:id       → actualizar usuario completo
✅ PATCH  /api/v1/users/:id       → actualizar campos específicos
✅ DELETE /api/v1/users/:id       → eliminar usuario

❌ /api/getUsers                  → usa verbos (los verbos son los métodos HTTP)
❌ /api/user                      → singular en colecciones
❌ /api/Users                     → camelCase en URLs
```

**Las relaciones anidadas (hasta 2 niveles máximo):**
```
✅ GET /api/v1/users/:id/orders    → pedidos de un usuario
✅ GET /api/v1/orders/:id/items    → ítems de un pedido
❌ /api/v1/users/:id/orders/:id/items/:id  → demasiados niveles → usa filtros
✅ GET /api/v1/items?orderId=123   → alternativa con query params
```

**Las acciones que no son CRUD:**
```
✅ POST /api/v1/users/:id/activate     → acción como subrecurso
✅ POST /api/v1/users/:id/password/reset
✅ POST /api/v1/orders/:id/cancel
```

### 🔢 Los códigos de estado HTTP correctos

```
2xx — ÉXITO:
200 OK               → GET, PUT, PATCH exitosos
201 Created          → POST que crea un recurso
204 No Content       → DELETE exitoso (no devuelves nada)

4xx — ERROR DEL CLIENTE:
400 Bad Request      → Formato incorrecto, validación fallida
401 Unauthorized     → No autenticado (falta o expiró el token)
403 Forbidden        → Autenticado pero sin permisos
404 Not Found        → El recurso no existe
409 Conflict         → El recurso ya existe (ej: email duplicado)
422 Unprocessable    → Entidad sintácticamente correcta pero semánticamente inválida
429 Too Many Requests → Rate limiting

5xx — ERROR DEL SERVIDOR:
500 Internal Server Error → Error inesperado del servidor (no lo devuelvas a producción con detalles)
503 Service Unavailable   → El servicio está temporalmente no disponible
```

### 📦 El formato de respuesta consistente

**Estructura de respuesta exitosa:**
```json
{
  "data": {
    "id": "usr_123abc",
    "email": "ana@empresa.com",
    "name": "Ana García",
    "createdAt": "2025-01-15T10:30:00Z"
  },
  "meta": {
    "requestId": "req_abc123",
    "timestamp": "2025-01-15T10:30:01Z"
  }
}
```

**Estructura de respuesta de error:**
```json
{
  "error": {
    "code": "VALIDATION_ERROR",     // código máquina-legible
    "message": "El email ya existe",  // mensaje humano-legible
    "details": [                    // detalles opcionales
      {
        "field": "email",
        "issue": "Email address already registered"
      }
    ]
  },
  "meta": {
    "requestId": "req_abc123"
  }
}
```

### 📄 El versionado de la API

**La estrategia más común — versionado en la URL:**
```
/api/v1/users  → versión actual
/api/v2/users  → nueva versión con breaking changes

Reglas:
- Nuevos campos en una respuesta → NO es breaking change (v1 sigue funcionando)
- Eliminar un campo → ES breaking change → necesitas v2
- Cambiar el tipo de un campo → ES breaking change → necesitas v2
```

**El ciclo de vida de una versión:**
1. La nueva versión (v2) se lanza sin eliminar la antigua (v1)
2. Los clientes migran a v2 voluntariamente
3. Después de X meses, v1 entra en "deprecated" (con notificación en los headers)
4. Después de Y meses, v1 se elimina

### 📖 La documentación automática con OpenAPI/Swagger
La configuración de OpenAPI (Swagger) que genera documentación interactiva desde el código sin mantener documentación separada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'API design, RESTful API, OpenAPI, Swagger, versionado API, documentación',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de dark mode: implementa el modo oscuro que no destruye la jerarquía visual de tu producto',
                'description'       => 'Diseña el dark mode de tu aplicación web o móvil que no es solo "invertir los colores". Con la paleta de colores para dark mode, la gestión de superficies y elevación, los errores más frecuentes y cómo implementarlo con CSS variables o design tokens.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer especializado en sistemas de diseño con experiencia implementando dark modes en aplicaciones web y móviles de más de 100.000 usuarios activos.

Contexto:
- Tipo de producto: [web app / app móvil / sitio de marketing / otro]
- Estado actual: [quiero añadir dark mode / tenemos dark mode pero la jerarquía visual no funciona / queremos mejorar el existente]
- Stack de implementación: [CSS vanilla / Tailwind CSS / styled-components / React Native / Flutter / otro]
- Herramienta de diseño: [Figma / Sketch / Adobe XD]

## Diseño de Dark Mode — [Producto]

### 🎨 El error más frecuente: dark mode ≠ invertir colores

**Lo que NO debes hacer:**
```
Blanco (#FFFFFF) → Negro (#000000)
Negro (#000000) → Blanco (#FFFFFF)
```
El resultado: texto blanco sobre negro puro es demasiado contraste y cansa la vista.
Las sombras no funcionan en fondos oscuros (la sombra oscura sobre negro no se ve).

**Lo que SÍ funciona:**
Los fondos oscuros no son negros puros — son grises muy oscuros.
El sistema de superficies en capas (diferentes niveles de elevación = diferentes tonos de gris).

### 📐 La paleta de dark mode correcta

**El sistema de capas de Material Design (el estándar más adoptado):**
```
Nivel 0 (fondo de la app):      #121212 (no negro puro)
Nivel 1 (cards y paneles):      #1E1E1E (ligeramente más claro)
Nivel 2 (modales y dropdowns):  #232323
Nivel 3 (elementos sobre nivel 2): #282828
Nivel 4 (hover states):         #2C2C2C

Para texto sobre fondos oscuros:
Texto principal:     rgba(255,255,255, 0.87)  — no blanco puro: agota la vista
Texto secundario:    rgba(255,255,255, 0.60)
Texto desactivado:   rgba(255,255,255, 0.38)
```

**Por qué no usamos negro puro (#000000):**
El contraste máximo entre texto blanco y negro puro es fatigoso para lectura prolongada.
Los estudios de fatiga visual muestran que #121212 sobre #FFFFFF en modo claro, y su equivalente oscuro, son más cómodos para sesiones largas.

**Los colores de acento en dark mode:**
En light mode, tu color principal puede ser intenso y saturado.
En dark mode, el mismo color saturado puede parecer "eléctrico" y llamativo en exceso.
Solución: reduce la saturación o usa una variante más suave del color principal.

```
Light mode accent:  #2563EB (azul intenso)
Dark mode accent:   #60A5FA (azul más suave — misma familia, menos intenso)
```

### 🎭 La elevación en dark mode (las sombras no funcionan)

En light mode, la elevación se comunica con sombras (box-shadow oscura sobre fondo blanco).
En dark mode, las sombras no se ven sobre fondos oscuros.

**La solución: elevación por tonalidad:**
A mayor elevación del elemento, más claro es el tono del fondo.
```css
/* CSS variables para el sistema de elevación */
:root[data-theme="dark"] {
  --surface-0: #121212;  /* App background */
  --surface-1: #1E1E1E;  /* Cards, sheets */
  --surface-2: #232323;  /* Modals */
  --surface-3: #282828;  /* Navigation drawers */
  --surface-4: #2C2C2C;  /* App bars */
}
```

### 🔧 Implementación con CSS variables (el método más mantenible)

**El sistema de design tokens con CSS variables:**
```css
/* Definir los tokens para ambos modos */
:root {
  --color-bg:           #FFFFFF;
  --color-surface:      #F3F4F6;
  --color-text:         #111827;
  --color-text-muted:   #6B7280;
  --color-accent:       #2563EB;
  --color-border:       rgba(0,0,0,0.1);
}

[data-theme="dark"] {
  --color-bg:           #121212;
  --color-surface:      #1E1E1E;
  --color-text:         rgba(255,255,255,0.87);
  --color-text-muted:   rgba(255,255,255,0.60);
  --color-accent:       #60A5FA;
  --color-border:       rgba(255,255,255,0.1);
}

/* Todos los componentes usan variables, no colores hardcoded */
.card {
  background: var(--color-surface);
  color: var(--color-text);
  border: 1px solid var(--color-border);
}
```

**Detectar la preferencia del sistema:**
```javascript
// Detectar y aplicar la preferencia del sistema
const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)')

function applyTheme(isDark) {
  document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light')
}

applyTheme(darkModeMediaQuery.matches)
darkModeMediaQuery.addEventListener('change', (e) => applyTheme(e.matches))

// Permitir que el usuario lo sobreescriba
function toggleTheme() {
  const current = document.documentElement.getAttribute('data-theme')
  const next = current === 'dark' ? 'light' : 'dark'
  document.documentElement.setAttribute('data-theme', next)
  localStorage.setItem('theme', next)  // persistir la elección
}
```

### 🖼️ El caso especial de las imágenes y los iconos en dark mode
Las técnicas para manejar imágenes y logos que no funcionan bien en fondos oscuros sin duplicar los assets.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Dark mode, modo oscuro, CSS variables, design tokens, sistema de diseño',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Prospección en frío B2B: el sistema outbound que genera reuniones con decisores cualificados',
                'description'       => 'Construye el sistema de prospección en frío B2B que genera reuniones cualificadas con decisores de compra de forma consistente. Con la construcción de listas de prospección, las secuencias de contacto multicanal (email + LinkedIn), los mensajes que consiguen respuesta y las métricas del sistema.',
                'prompt_content'    => <<<'PROMPT'
Eres un SDR Manager con experiencia construyendo sistemas de outbound B2B que generan 20-40 reuniones cualificadas al mes para equipos de ventas de 2-10 SDRs en mercados europeos.

Contexto:
- Tipo de producto/servicio: [SaaS / servicios / consultoría / otro]
- ICP (cliente ideal): [describe el perfil de empresa y de decisor]
- ACV objetivo: [€ por contrato]
- Canales disponibles: [email en frío / LinkedIn / teléfono / eventos]
- Estado actual: [empezando desde cero / tenemos outbound pero las tasas son bajas / quiero mejorar el sistema]

## Sistema de Prospección en Frío B2B — [Empresa]

### 🔍 La lista de prospección: calidad sobre cantidad

**El error del volumen:**
Contactar 500 prospectos por semana con mensajes genéricos = 0.2% de tasa de respuesta.
Contactar 50 prospectos bien investigados con mensajes personalizados = 8-15% de tasa de respuesta.

**El proceso de construcción de la lista:**

```
Paso 1 — Fuentes para construir la lista:
- LinkedIn Sales Navigator (el más completo para B2B)
  Filtros: cargo + sector + tamaño de empresa + ubicación
- Apollo.io (acceso a emails + datos de empresa)
- Crunchbase (empresas con rondas recientes — señal de presupuesto)
- G2, Capterra (empresas que usan productos complementarios)
- Listas de asistentes a eventos del sector

Paso 2 — Señales de compra (los prospectos más calientes):
→ La empresa acaba de cerrar una ronda de financiación
→ La empresa ha contratado un nuevo cargo relacionado con tu solución
→ La empresa está en fase de crecimiento acelerado (ofertas de empleo)
→ El prospecto acaba de cambiar de trabajo (está implementando cambios)
→ La empresa tiene un problema público que tú resuelves

Paso 3 — Enriquecimiento de datos:
Verifica el email antes de enviar (Apollo, Findymail, Hunter.io)
Un 15-20% de bounce = la campaña de email puede ir a spam
```

### ✉️ La secuencia de contacto multicanal (4 touchpoints en 10 días)

**El sistema de secuencia:**
```
Día 1:  Email de primer contacto
Día 3:  Follow-up de email (si no abre/responde)
Día 5:  Solicitud de conexión en LinkedIn con nota personalizada
Día 10: Segundo email con nuevo ángulo o nuevo valor
```

**El email de primer contacto que consigue respuesta:**

```
Asunto: [algo específico de la empresa del prospecto]
Asunto: "Re: [tema que les interesa]" (solo si es realmente relevante — no uses esto como truco)

Hola [nombre],

[Línea de personalización — algo específico de ellos]:
Vi que [empresa] acaba de lanzar [X] / contratasteis un [cargo] en / lograron [resultado].

[El problema que resuelves — en sus términos, no en los tuyos]:
Muchas empresas como la vuestra tienen dificultades para [problema específico]
cuando [contexto que hace el problema relevante].

[La propuesta de valor — 1 frase, sin jerga]:
Ayudamos a [tipo de empresa] a [resultado específico]. En los últimos 6 meses,
hemos trabajado con [empresa similar] que consiguió [resultado concreto].

[Una sola pregunta para abrir la conversación]:
¿Es [el problema] algo relevante para vosotros ahora mismo?

[Tu nombre]
[Tu cargo + empresa]
```

**Lo que hace diferente este email:**
- Primera línea personalizada (no genérica)
- El problema en sus términos (no "nuestra solución innovadora")
- Prueba social concreta (no "tenemos muchos clientes")
- Una sola pregunta (fácil de responder con "sí" o "no")
- Sin adjuntos, sin links de calendario en el primer email

### 📊 Las métricas del sistema de prospección que debes monitorear
Las 6 métricas de funnel de outbound (desde contactos hasta oportunidades cualificadas) y los benchmarks por canal para saber si tu sistema está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Cold outbound, prospección B2B, SDR, email en frío, LinkedIn outreach, secuencias ventas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de precios para productos digitales: cómo fijar el precio que maximiza el revenue sin perder clientes',
                'description'       => 'Define la estrategia de precios para tu producto digital que maximiza el revenue total sin sacrificar la adquisición de clientes. Con los modelos de pricing (freemium, tiered, usage-based), los experimentos de precio, la psicología del precio y cómo comunicar los cambios de precio a clientes actuales.',
                'prompt_content'    => <<<'PROMPT'
Eres un Pricing Strategist con experiencia ayudando a productos SaaS y plataformas digitales a encontrar el precio que maximiza el revenue sin destruir la conversión de prueba a pago.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / plataforma / otro]
- Estado actual del pricing: [no hemos testado el precio / tenemos un precio pero creemos que es bajo / queremos cambiar el modelo / lanzando por primera vez]
- Precio actual: [€/mes o estructura actual]
- Tasa de conversión trial-to-paid: [%]
- Churn mensual: [%]
- MRR actual: [€]

## Estrategia de Pricing — [Producto]

### 🧠 Los 4 modelos de pricing para productos digitales

**1. Pricing plano (flat rate):**
Un precio único para todos los clientes.
Ventaja: simple de entender y de comunicar.
Riesgo: pierdes revenue de clientes que pagarían más, y bloqueas a los que pagan menos.
Mejor para: productos muy estandarizados con un solo perfil de usuario.

**2. Pricing por niveles (tiered pricing):**
3-4 planes con diferentes funcionalidades.
El modelo más usado en SaaS B2B.
El plan del medio captura el 60-70% de los clientes.

**3. Pricing por uso (usage-based / consumption pricing):**
El cliente paga según cuánto usa (por API call, por documento, por transacción).
Ejemplo: Stripe (% por transacción), AWS (por GB).
Ventaja: crece automáticamente con el éxito del cliente.
Riesgo: ingresos imprevisibles, los clientes tienen miedo al "bill shock".

**4. Freemium:**
Un plan gratuito con funcionalidades limitadas + planes de pago.
Ventaja: bajo coste de adquisición, el producto se "vende solo".
Riesgo: si el plan gratuito es demasiado bueno, nadie paga. Si es demasiado limitado, nadie se queda.
La tasa de conversión de freemium a paid típica: 2-5%.

### 💡 Cómo elegir el precio correcto (el método que funciona en early stage)

**El método de las 5 entrevistas:**
Antes de decidir el precio, pregunta a 5 usuarios potenciales (o clientes actuales):

```
"¿A qué precio te parecería tan caro que no lo considerarías?"  → Límite superior
"¿A qué precio empezaría a parecerte caro pero todavía lo considerarías?" → Zona de resistencia
"¿A qué precio te parecería barato — suficientemente barato para comprarlo sin pensarlo?" → Zona de conversión
"¿A qué precio sería tan barato que dudarías de la calidad?" → Límite inferior
```

El precio ideal está en la intersección de la zona de resistencia y la zona de conversión.

**Los benchmarks para no diseñar en el vacío:**
```
SaaS B2B (SMB):
- Planes de €25-99/mes son habituales para funcionalidad básica
- Planes de €100-499/mes para mid-market
- Planes de €500+/mes para enterprise (o cotización personalizada)

SaaS B2C:
- Planes de €5-15/mes son los más habituales
- Planes de €25-50/mes para funcionalidad premium
```

### 📐 La psicología del precio que aumenta la conversión

**El precio de ancla:**
El plan más caro crea la referencia psicológica que hace que el plan del medio parezca razonable.
Sin plan Enterprise: el cliente compara tu Plan Pro con la competencia.
Con plan Enterprise: el cliente compara el Plan Pro con tu propio Enterprise → parece barato.

**El precio terminado en 9:**
€99/mes convierte más que €100/mes (efecto de precio de encanto — el cerebro lee el primer dígito).
€97/mes también funciona — se percibe como precio "honesto" vs. "truco".

**El precio anual con descuento:**
"€X/mes facturado anualmente" + "Ahorra el 20% vs pago mensual" convierte bien.
El incentivo de pago anual mejora el cash flow y reduce el churn.

**El precio por usuario vs. precio plano:**
Precio por usuario escala con el éxito del cliente (expansion revenue natural).
Precio plano puede crear resistencia a añadir usuarios (el cliente siente que "paga más por lo mismo").
Para equipos: considera precios por "seat" con descuento por volumen.

### 🔄 Cómo comunicar un aumento de precios a clientes actuales
El proceso de subida de precios que minimiza el churn de clientes existentes y maximiza el revenue del cambio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Pricing strategy, SaaS pricing, freemium, tiered pricing, estrategia de precios',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Onboarding de nuevos empleados en remoto: integra al equipo aunque nunca se vean en persona',
                'description'       => 'Diseña el proceso de onboarding para empleados en remoto que los hace sentir bienvenidos, les da el contexto que necesitan para ser productivos y los conecta con el equipo en las primeras semanas sin necesidad de estar en la oficina.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Operations Manager con experiencia diseñando onboardings en remoto para equipos distribuidos de 20-200 personas donde la primera semana determina si el nuevo empleado se queda o empieza a buscar otro trabajo a los 3 meses.

Contexto:
- Tamaño del equipo: [N personas]
- Modelo de trabajo: [100% remoto / híbrido / first-remote]
- Cargo que se incorpora: [describe el puesto y el área]
- Duración prevista del onboarding: [1 semana / 2 semanas / 1 mes / 90 días]
- Mayor reto: [el nuevo empleado se siente aislado / no tiene contexto suficiente para trabajar / tarda mucho en ser productivo / no conecta con el equipo]

## Onboarding Remoto — [Empresa]

### 🎯 Las 3 fases del onboarding efectivo

**Fase 1 — Pre-boarding (antes del primer día):**
El período entre la firma del contrato y el primer día.
No esperes al primer día para empezar — empieza aquí.

**Qué enviar al nuevo empleado antes de incorporarse:**
```
1. Email de bienvenida del CEO/manager (personalizado, no plantilla):
   "Estamos muy contentos de que te unas. El equipo ya sabe que empiezas el [fecha]."

2. El kit de bienvenida práctico:
   - Acceso al email corporativo
   - Acceso a las herramientas (Slack, Notion, GitHub...)
   - El deck de onboarding con los links a todos los recursos

3. El schedule del primer día:
   "El lunes a las 10:00h te conectas a [video call] y te recibirá [nombre de tu buddy]."

4. La lectura ligera:
   - El handbook de la empresa (si existe)
   - 3-5 documentos de contexto sobre el área
```

**Fase 2 — La primera semana (conoce a la empresa y al equipo):**
Objetivo: que el empleado entienda la misión, el producto, el equipo y los procesos.
No esperes que sea productivo esta semana — es semana de aprendizaje.

**El schedule de la primera semana:**
```
Lunes:
09:00 - Bienvenida con el manager y el buddy (30 min)
10:00 - Reunión con RRHH (nóminas, beneficios, herramientas, 45 min)
11:00 - Setup del entorno de trabajo (con el buddy disponible)
Tarde: Lectura del handbook y de los documentos de contexto

Martes:
Reuniones 1:1 con los 3-5 compañeros más cercanos (30 min cada uno)
Objetivo: conocerse, no trabajar — que le cuenten su experiencia y su rol

Miércoles:
Demo del producto por el equipo de producto/ventas
Lectura de los docs técnicos del área

Jueves:
Primera tarea real (pequeña, con soporte del buddy)

Viernes:
Retrospectiva de onboarding con el manager:
"¿Cómo ha ido la semana? ¿Qué falta por entender? ¿Cómo te has sentido?"
```

**Fase 3 — Las semanas 2-4 (empieza a contribuir):**
Objetivo: primera contribución real de valor.

**El sistema del buddy:**
Cada nuevo empleado tiene un buddy — no el manager, sino un compañero del equipo.
El buddy responde las preguntas "tontas" que el nuevo empleado no quiere hacer al manager.
El buddy tiene 30 min bloqueadas/semana para el nuevo durante el primer mes.

**Los 30-60-90 días:**
```
30 días: El nuevo empleado entiende el contexto, las herramientas y el equipo.
60 días: El nuevo empleado completa sus primeras tareas relevantes de forma independiente.
90 días: El nuevo empleado contribuye al equipo sin supervisión constante.
```

### 🌍 El onboarding en remoto: cómo crear conexión sin verse en persona

**Las 3 herramientas de conexión en remoto que funcionan:**

1. **El café virtual aleatorio (Donut en Slack):**
   Empareja aleatoriamente a empleados para una sesión de café de 30 min por video.
   Sin agenda de trabajo — solo conversación.

2. **El canal de agua cooler en Slack:**
   #general-random / #off-topic — el espacio para compartir cosas personales.
   El manager debe participar activamente (marcar el tono de que es un espacio valorado).

3. **El team day trimestral en persona:**
   Si el modelo es remoto-first, el encuentro presencial una o dos veces al año es fundamental.
   La conexión presencial crea un capital de confianza que dura meses en remoto.

### 📋 El feedback de onboarding que mejora el proceso continuamente
La estructura del check-in a los 30 y 90 días que captura la experiencia del nuevo empleado y actualiza el proceso de onboarding.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Onboarding remoto, primer día empleado, pre-boarding, buddy system, remote-first',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelo de negocio canvas: diseña o rediseña tu modelo de negocio en 90 minutos',
                'description'       => 'Diseña o rediseña el modelo de negocio de tu empresa usando el Business Model Canvas para identificar cómo creas, entregas y capturas valor. Con los 9 bloques del canvas, las preguntas clave para cada bloque, los patrones de modelos exitosos y cómo usar el canvas para evaluar nuevas oportunidades.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Model Innovator con experiencia facilitando sesiones de Business Model Canvas en startups en fase de pivot y PYME que buscan nuevas fuentes de revenue o formas más eficientes de crear valor.

Contexto:
- Tipo de empresa: [startup / PYME / empresario individual / proyecto nuevo]
- Objetivo del canvas: [definir el modelo desde cero / evaluar si el modelo actual es sostenible / identificar nuevas fuentes de revenue / preparar la presentación a inversores]
- Estado actual: [idea sin modelo / modelo en funcionamiento que quiero revisar / voy a pivotar]

## Business Model Canvas — [Empresa]

### 🗺️ Los 9 bloques del canvas (en el orden correcto para completarlos)

El error es empezar por el bloque 1 en orden lineal.
El orden correcto:

```
1. Segmentos de clientes → ¿para quién creamos valor?
2. Propuesta de valor → ¿qué problema resolvemos? ¿qué necesidad satisfacemos?
3. Canales → ¿cómo llegamos a los clientes?
4. Relaciones con clientes → ¿cómo mantenemos la relación?
5. Fuentes de ingresos → ¿cómo monetizamos?
6. Recursos clave → ¿qué necesitamos para funcionar?
7. Actividades clave → ¿qué tenemos que hacer bien?
8. Asociaciones clave → ¿quién nos ayuda?
9. Estructura de costes → ¿cuánto nos cuesta?
```

### 👥 Bloque 1: Segmentos de clientes

**Las preguntas clave:**
- ¿Para quién creamos valor? ¿Quiénes son nuestros clientes más importantes?
- ¿Tenemos un segmento o varios segmentos distintos?
- ¿Qué necesidades específicas tiene cada segmento?

**Los 5 tipos de segmentación:**
```
Mercado de masas: todos tienen las mismas necesidades (consumo general)
Nicho de mercado: un segmento muy específico con necesidades muy concretas
Segmentado: varios segmentos distintos con propuestas distintas (ej: Airbnb: huéspedes y anfitriones)
Diversificado: segmentos no relacionados (ej: Amazon: consumidores + AWS para empresas)
Plataformas multilaterales: dos segmentos interdependientes (ej: Uber: conductores + pasajeros)
```

### 💎 Bloque 2: Propuesta de valor

**Las preguntas clave:**
- ¿Qué valor entregamos al cliente?
- ¿Qué problema resolvemos o qué necesidad satisfacemos?
- ¿Por qué el cliente nos elegiría a nosotros y no a la alternativa?

**Las 11 formas de crear valor:**
```
Novedad: algo que no existía antes
Rendimiento: mejor que las alternativas (más rápido, más eficiente)
Personalización: adaptado a cada cliente
Reducción de riesgo: garantías, seguros, soporte
Reducción de coste: más barato que la alternativa
Accesibilidad: llevar a nuevos clientes algo que antes era exclusivo
Diseño: mejor experiencia, más bonito, más usable
Marca/estatus: asociarse con valores de la marca
Conveniencia: más fácil, más cómodo, menos fricción
"Hacer el trabajo": el cliente subcontrata el trabajo completo
Precio: el precio más bajo del mercado
```

### 💰 Bloque 5: Fuentes de ingresos

**Las preguntas clave:**
- ¿Por qué están dispuestos a pagar los clientes?
- ¿Cuánto están dispuestos a pagar?
- ¿Cómo prefieren pagar?

**Los 7 modelos de ingresos más frecuentes:**
```
1. Venta de activos: vendes la propiedad de un producto físico o digital
2. Suscripción: acceso continuo por una cuota periódica
3. Cuota de uso: pagas por lo que usas (cloud, por llamada, por transacción)
4. Licencia: concedes el derecho a usar tu propiedad intelectual
5. Publicidad: cobras a terceros por acceder a tu audiencia
6. Corretaje: cobras una comisión por intermediar transacciones entre dos partes
7. Freemium: básico gratis + premium de pago
```

### 🔍 Cómo usar el canvas para evaluar si el modelo es sostenible
La prueba de viabilidad del Business Model Canvas que identifica los supuestos críticos que necesitas validar antes de comprometer recursos significativos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Business Model Canvas, modelo de negocio, propuesta de valor, revenue model, startup',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Negociación y resolución de conflictos empresariales: de la disputa al acuerdo sin juicio',
                'description'       => 'Negocia y resuelve conflictos empresariales (con socios, clientes, proveedores o empleados) antes de que lleguen a los tribunales. Con el proceso de negociación basada en intereses, la mediación empresarial, los acuerdos de confidencialidad para la negociación y cuándo la vía judicial es inevitable.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mediador especializado en resolución alternativa de disputas (ADR) con experiencia resolviendo conflictos empresariales entre socios, con clientes corporativos y en relaciones proveedor-cliente sin recurrir a procedimientos judiciales.

Contexto del conflicto:
- Tipo de conflicto: [entre socios fundadores / con un cliente / con un proveedor / con un empleado / otro]
- Importe o interés en disputa: [€ o descripción del interés]
- Estado del conflicto: [tensión sin llegar a disputa formal / carta de reclamación enviada / ya hay abogados de por medio / quiero evitar que escale]
- Relación futura deseada: [queremos seguir trabajando juntos / la relación ya está rota / neutral]

## Negociación y Resolución de Conflictos Empresariales — [Situación]

### 🧠 El principio fundamental: negocia intereses, no posiciones

**La negociación posicional (cómo NO hacerlo):**
Tú pides: "Quiero €100.000 de indemnización."
La otra parte responde: "Ofrecemos €10.000."
Ambos defienden sus posiciones → impasse → tribunal.

**La negociación basada en intereses (Harvard Negotiation Project):**
Detrás de cada posición hay un interés.
Posición: "Quiero €100.000."
Interés: "Necesito compensar la pérdida de tiempo y el daño a mi reputación."

Si entiendes los intereses de ambas partes, puedes buscar soluciones que los satisfagan sin que ninguno ceda su posición de forma que se sienta derrotado.

**El proceso de 4 pasos:**
```
1. Separar las personas del problema:
   El conflicto es con el problema, no con la persona.
   Trata a la otra parte como un aliado para resolver el problema, no como el enemigo.

2. Centrarse en los intereses, no en las posiciones:
   "¿Qué necesitas realmente de esta situación?"
   "¿Qué resultado te permitiría cerrar esto y seguir adelante?"

3. Generar opciones para beneficio mutuo:
   Antes de decidir, explora múltiples opciones.
   Las negociaciones que se cierran bien son las que crean valor para ambas partes.

4. Usar criterios objetivos:
   "¿Cómo determinamos qué es justo?"
   Los criterios objetivos (precios de mercado, informes de peritos, precedentes legales)
   desvinculan la negociación de las personalidades.
```

### 📋 La mediación empresarial: cómo funciona y cuándo usarla

**Cuándo la mediación es la mejor opción:**
- Cuando las partes quieren resolver pero están bloqueadas
- Cuando la relación tiene valor futuro (socios, clientes estratégicos)
- Cuando el coste y el tiempo del juicio supera el importe en disputa
- Cuando la privacidad es importante (los juicios son públicos)

**El proceso de mediación:**
```
1. Acuerdo de mediación (firmado por ambas partes):
   Confidencialidad — nada de lo dicho en mediación puede usarse en juicio
   Voluntariedad — cualquiera puede retirarse
   Neutralidad del mediador

2. Sesiones separadas (caucus):
   El mediador habla con cada parte por separado para entender los intereses reales
   que no se expresan en la negociación directa.

3. Sesiones conjuntas:
   Las partes se reúnen con el mediador para explorar soluciones.

4. El acuerdo:
   Si se llega a acuerdo → se formaliza por escrito (acuerdo transaccional).
   El acuerdo transaccional tiene fuerza vinculante como contrato.
```

**La mediación vs. el arbitraje:**
```
Mediación: el mediador facilita — no decide. Las partes acuerdan la solución.
Arbitraje: el árbitro decide — como un juicio privado. Más rápido que los tribunales, pero la decisión es vinculante.
Cláusula de arbitraje: muchos contratos B2B incluyen cláusulas que obligan al arbitraje antes del juicio.
```

### 📝 El acuerdo de transacción (settlement agreement): qué debe incluir
Las cláusulas esenciales del acuerdo que cierra la disputa y previene que vuelva a abrirse en el futuro.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Mediación empresarial, negociación conflictos, resolución disputas, ADR, negociación Harvard',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización del soporte con IA: implementa el chatbot que resuelve sin frustrar al cliente',
                'description'       => 'Implementa la automatización de soporte con IA que resuelve las consultas frecuentes sin que el cliente sienta que está hablando con un robot. Con los casos de uso correctos para automatizar, la configuración del bot, el diseño del flujo de escalado a humano y cómo medir si la automatización funciona.',
                'prompt_content'    => <<<'PROMPT'
Eres un CX Technology Manager con experiencia implementando bots de soporte con IA para empresas de ecommerce, SaaS y servicios que han reducido el volumen de tickets humanos un 25-40% sin reducir el CSAT.

Contexto:
- Tipo de negocio: [ecommerce / SaaS / servicios / otro]
- Volumen de soporte: [N tickets/mes]
- Herramienta de soporte actual: [Zendesk / Intercom / Freshdesk / otro]
- Nivel de automatización actual: [sin automatización / respuestas automáticas básicas / bot existente que no funciona bien]
- Presupuesto: [sin presupuesto adicional / €X/mes para herramientas / buscamos la mejor opción]

## Automatización de Soporte con IA — [Empresa]

### 🎯 El primer principio: automatiza lo correcto

**Los casos de uso donde la IA brilla:**
```
✅ IDEAL PARA AUTOMATIZAR:
- Estado de pedido / Estado de envío (respuesta = mirar en el sistema)
- Preguntas de FAQ: horarios, políticas de devolución, precios
- Reset de contraseña y acceso básico a la cuenta
- Información de producto sin variantes (características, compatibilidades)
- Primeros pasos del onboarding (cómo hacer X)
- Triaging: clasificar el tipo de consulta para enrutarla correctamente
```

```
❌ NO AUTOMATICES (escala siempre a humano):
- Quejas y reclamaciones emocionales (el cliente está frustrado)
- Situaciones de alta complejidad técnica
- Solicitudes de reembolso grandes o disputas
- Situaciones de vulnerabilidad del cliente
- Cuando la automatización ya ha fallado dos veces seguidas
```

### 🤖 Las herramientas de automatización de soporte

**Para empresas con Intercom:**
Fin (de Intercom) — el mejor bot en contexto de SaaS si ya usas Intercom.
Configuración: le das acceso a tu Help Center y responde usando el contenido.
Tasa de resolución típica: 35-50% de las consultas.

**Para empresas con Zendesk:**
Zendesk AI (Answer Bot + Intelligent Triage) — integrado en la plataforma.

**Para cualquier stack (más flexible):**
- ChatGPT API + conexión con tu sistema → requiere desarrollo pero es el más potente
- Tidio + IA — buena opción para ecommerce sin mucho presupuesto
- Crisp + bot — para pequeñas empresas
- Voiceflow — para construir flujos de bot más complejos sin código

**La opción sin herramienta adicional:**
Si usas Zendesk o Freshdesk, activa las macros de respuesta automática para las consultas más frecuentes.
No es IA, pero resuelve el 15-20% de los casos más simples sin coste adicional.

### 📋 El diseño del flujo de conversación que no frustra

**Los 5 principios del bot que los usuarios no odian:**

1. **Honestidad:** "Soy el asistente virtual de [empresa]. Te ayudo con..."
   No finjas ser humano. El 73% de los usuarios prefiere saber que hablan con un bot.

2. **Las opciones claras (no preguntas abiertas al inicio):**
   "¿En qué puedo ayudarte?" → el usuario no sabe qué puede hacer el bot.
   Mejor: "¿Qué necesitas?" + [botones: Estado de mi pedido / Devolución / Otro]

3. **El escalado fácil a humano:**
   El usuario puede pedir un agente humano en cualquier momento.
   Nunca pongas barreras al escalado — es la señal más negativa en el CSAT.

4. **El reconocimiento de la frustración:**
   Si el usuario escribe "NO FUNCIONA" o "ESTO ES UN DESASTRE" → escala inmediatamente.
   Los bots que insisten en responder a un usuario frustrado empeoran la situación.

5. **El handoff con contexto:**
   Cuando escala, el agente humano ve todo el historial de la conversación con el bot.
   No hay nada más frustrante para el cliente que repetir su problema.

### 📊 Cómo medir si la automatización está funcionando (y cuándo hacer ajustes)
Las 5 métricas del bot de soporte y el umbral en el que debes intervenir en los flujos que no funcionan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Chatbot soporte, automatización IA, bot atención cliente, Intercom Fin, CX automation',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión del tiempo y las prioridades para freelancers: el sistema que hace que el trabajo avance sin urgencias constantes',
                'description'       => 'Diseña el sistema de gestión del tiempo y las prioridades que hace que el trabajo de cliente avance, los proyectos se entreguen a tiempo y tengas espacio para el negocio sin trabajar 50 horas a la semana. Con el sistema de planificación semanal, la gestión del calendar y cómo manejar las interrupciones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Productivity Coach especializado en freelancers y solopreneurs que han pasado de trabajar en modo reactivo (siempre urgente, siempre tarde) a un sistema proactivo que entrega a tiempo y tiene espacio para el crecimiento del negocio.

Perfil:
- Especialidad: [describe tu servicio]
- Número de clientes activos: [N simultáneos]
- Horas de trabajo actuales: [N horas/semana]
- Problema principal: [todo es urgente / no termino de entregar a tiempo / no tengo tiempo para tareas de negocio / interrupciones constantes de clientes]

## Sistema de Gestión del Tiempo — [Freelance]

### 🧠 El diagnóstico: por qué el freelance siempre va con urgencias

**Las 3 causas raíz más frecuentes:**

1. **Demasiados clientes simultáneos sin estructura de plazos clara:**
   Sin fechas de entrega concretas → el cliente genera urgencias arbitrarias.
   La solución: cada proyecto tiene hitos con fechas, acordadas por escrito antes de empezar.

2. **Tiempo de entrega subestimado:**
   El tiempo estimado no incluye el contexto switching, las correcciones y las tareas de negocio.
   La solución: multiplica siempre tu estimación inicial por 1.5.

3. **Sin tiempo bloqueado para trabajo profundo:**
   Las interrupciones (emails, mensajes de Slack, llamadas) fragmentan el tiempo de concentración.
   La solución: bloques de trabajo profundo irrompibles cada mañana.

### 📅 El sistema de planificación semanal (1 hora los viernes o lunes)

**El proceso de los 3 pasos:**

**Paso 1 — Review (20 min):**
```
¿Qué entregué esta semana? (haz la lista)
¿Qué quedó pendiente? (y por qué)
¿Qué compromisos tengo para la próxima semana? (revisión del calendario y de los plazos)
¿Cómo fue la semana en términos de tiempo y energía?
```

**Paso 2 — Prioridades de la próxima semana (20 min):**
```
Las 3 entregas más importantes de la semana (las que NO pueden fallar)
Las 3 tareas de negocio más importantes (captación, facturas, propuestas)
Lo que necesito de terceros (respuestas, materiales, accesos) → pídelos antes del martes

NO hagas una lista de 20 cosas. Las 3 de cliente + 3 de negocio son suficientes.
```

**Paso 3 — Bloquea el tiempo en el calendario (20 min):**
```
Lunes a miércoles (mañanas 9-13h): Trabajo profundo de cliente (bloques irrompibles)
Lunes a miércoles (tardes): Reuniones, emails, llamadas
Jueves: Buffer y correcciones (el tiempo de lo que siempre se retrasa)
Viernes: Tareas de negocio (propuestas, facturas, networking, creación de contenido)
```

### 🚫 La gestión de las interrupciones (el mayor destructor de productividad del freelance)

**La política de respuesta que establece expectativas correctas:**
```
Email: "Respondo emails a las 10h y 16h en días laborables."
WhatsApp/mensajes: "Para proyectos en curso, respondo en el mismo día."
Llamadas: "Disponible para llamadas preagendadas de lunes a miércoles, 14-17h."
```

Comunica esta política a cada cliente nuevo en el onboarding del proyecto.
No es arrogancia — es profesionalidad. Los clientes que tienen expectativas claras no generan urgencias.

**El email no es una herramienta de trabajo en tiempo real:**
La mayoría de los emails "urgentes" pueden esperar 4 horas.
Cierra el email durante los bloques de trabajo profundo — las notificaciones son el enemigo de la concentración.

**La regla del 2 minutos para lo urgente real:**
Si algo tarda menos de 2 minutos → hazlo inmediatamente y ciérralo.
Si tarda más → apúntalo para tu bloque de trabajo o para el jueves de buffer.

### 📊 El tracker semanal de productividad
Las 5 métricas que te dicen si tu sistema de tiempo está funcionando: horas billables vs. no billables, tiempo en trabajo profundo, y la ratio de entregas a tiempo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión del tiempo freelance, productividad, planificación semanal, work deep, sistema prioridades',
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
