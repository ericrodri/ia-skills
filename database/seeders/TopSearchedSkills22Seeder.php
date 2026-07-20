<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills22Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Email de bienvenida y secuencia de nurturing: convierte suscriptores en clientes con 5 emails que funcionan',
                'description'       => 'Diseña la secuencia de emails de bienvenida que convierte a un suscriptor nuevo en cliente en los primeros 14 días. Con la lógica de la secuencia, el copy de cada email, los disparadores de automatización y cómo medir si la secuencia está funcionando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Marketing Strategist con experiencia diseñando secuencias de nurturing que han generado tasas de conversión del 8-20% en SaaS, infoproductos y servicios profesionales.

Contexto:
- Producto o servicio: [describe]
- Lead magnet o punto de entrada: [qué descargaron / por qué se suscribieron]
- Segmento del suscriptor: [nicho / tamaño de empresa / cargo / situación]
- Objetivo de la secuencia: [compra directa / demo / consulta / webinar / upgrade]
- Herramienta de email: [Mailchimp / ActiveCampaign / ConvertKit / Brevo / HubSpot / otra]

## Secuencia de Bienvenida y Nurturing — [Producto]

### 🧠 La lógica antes de escribir los emails

**Por qué los emails de bienvenida importan más que cualquier otro:**
La tasa de apertura del email de bienvenida suele ser 3-4x mayor que la de cualquier campaña posterior.
Es el momento en que el suscriptor tiene máxima atención y máxima predisposición.
Si desperdicias ese momento con "Gracias por suscribirte", pierdes la mejor oportunidad.

**El framework de la secuencia:**
```
Email 1 (inmediato):    Entregar el valor prometido + primer engagement
Email 2 (día 2):        Contexto + por qué importa el problema
Email 3 (día 4):        Prueba social + casos de éxito
Email 4 (día 7):        El obstáculo más común + cómo lo resuelves
Email 5 (día 10-14):    Oferta directa + urgencia real
```

### ✉️ Los 5 emails de la secuencia

**Email 1 — El email de entrega (inmediato)**

*Objetivo:* Entregar lo prometido y crear el primer punto de contacto humano.

```
Asunto: [Lo que pidió] + tu primer paso

Hola [nombre],

Aquí tienes [el recurso / el acceso / la guía] que pediste:
→ [link directo, sin rodeos]

Mientras lo descubres, me presento rápido:
Soy [nombre], [una línea sobre quién eres y por qué te importa esto].

En los próximos días te enviaré [lo que van a aprender],
porque si llegaste aquí es porque te importa [el problema que resuelves].

¿Tienes alguna pregunta antes de empezar? Responde a este email,
lo leo personalmente.

[Nombre]
```

*KPI a medir:* Tasa de apertura (objetivo >50%), clics en el link (objetivo >30%).

**Email 2 — El contexto (día 2)**

*Objetivo:* Demostrar que entiendes el problema mejor que nadie.

```
Asunto: Por qué [el problema del suscriptor] ocurre (y no es culpa tuya)

Hola [nombre],

Si has llegado hasta aquí buscando [resolver X], probablemente
ya has intentado [solución típica que no funciona].

El problema no eres tú. Es que [la causa raíz del problema].

[2-3 párrafos explicando el contexto del problema con precisión]

Esto es exactamente lo que [tu solución] resuelve.
Mañana te cuento cómo [resultado específico].

[Nombre]
```

**Email 3 — La prueba social (día 4)**

*Objetivo:* Demostrar que funciona con casos reales.

```
Asunto: Cómo [cliente] consiguió [resultado] en [tiempo]

Hola [nombre],

[Nombre del cliente] estaba en la misma situación que tú hace [X meses].
[Descripción en 2 frases de su problema inicial]

Lo que hizo:
[Descripción concreta del proceso — 3 pasos]

El resultado:
[Resultado específico con números si es posible]

¿Puedes conseguir lo mismo? [Tu respuesta honesta + qué hace falta para lograrlo]

[Nombre]
```

**Email 4 — El obstáculo (día 7)**

*Objetivo:* Anticipar y neutralizar la objeción principal.

```
Asunto: La razón real por la que [resultado] no ocurre todavía

Hola [nombre],

Llevamos una semana trabajando en [el tema].
Si todavía no has conseguido [el resultado], hay una razón concreta:
[La objeción o el obstáculo más frecuente].

La buena noticia: es totalmente resoluble.
[Cómo resolverlo — 3 pasos simples]

Si quieres que lo trabajemos juntos:
[CTA suave — no es la oferta principal todavía]

[Nombre]
```

**Email 5 — La oferta (día 10-14)**

*Objetivo:* Convertir al suscriptor en cliente.

```
Asunto: Una pregunta directa (y una oportunidad)

Hola [nombre],

Hemos hablado de [el problema], de [la solución], de [el obstáculo].
Si todavía no has dado el paso, es normal — cambiar lleva tiempo.

Pero si estás listo para [el resultado que quiere], tengo una propuesta:
[Descripción de la oferta — precio, qué incluye, bonus si es temporal]

Disponible hasta [fecha] / para los primeros [N] clientes.
→ [link a la oferta]

¿Tienes preguntas? Responde aquí, te contesto en menos de 24h.

[Nombre]
```

### 📊 Cómo medir si la secuencia funciona
Los 4 KPIs de la secuencia y los benchmarks por sector para saber si tu secuencia está por encima o por debajo de la media.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Email marketing, secuencia bienvenida, nurturing, copywriting, automatización',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Accesibilidad web WCAG 2.2 en código: implementación práctica para que tu app sea usable por todos',
                'description'       => 'Implementa los estándares de accesibilidad WCAG 2.2 en tu aplicación web de forma práctica y sin convertirlo en un proyecto eterno. Con los 10 errores de accesibilidad más frecuentes, el código correcto para cada uno, cómo testear con lectores de pantalla y cómo priorizar las correcciones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Frontend Engineer especializado en accesibilidad web con experiencia llevando aplicaciones de puntuación 30/100 a 90/100 en Lighthouse Accessibility y cumplimiento WCAG 2.1 AA en React, Vue y Angular.

Stack:
- Framework: [React / Vue / Angular / HTML vanilla / otro]
- Tipo de aplicación: [SPA / web tradicional / app interna / e-commerce / otro]
- Estado actual: [nunca hemos pensado en accesibilidad / ya tenemos algunos fixes / queremos llegar a WCAG AA / hay requerimiento legal]
- Punto de partida: [score de Lighthouse / resultado del axe audit / "no lo hemos medido"]

## Accesibilidad Web WCAG 2.2 — [Proyecto]

### 🔍 Los 10 errores de accesibilidad más frecuentes (y su corrección)

**Error 1 — Imágenes sin alt text:**
```html
<!-- ❌ Mal -->
<img src="/hero.jpg">
<img src="/logo.svg">

<!-- ✅ Bien — imagen informativa -->
<img src="/hero.jpg" alt="Equipo de trabajo en reunión colaborativa">

<!-- ✅ Bien — imagen decorativa -->
<img src="/decorative-wave.svg" alt="" role="presentation">
<!-- alt="" vacío le dice al lector de pantalla que la ignore -->
```

**Error 2 — Contraste insuficiente:**
Ratio mínimo WCAG AA: 4.5:1 para texto normal, 3:1 para texto grande (>18px o >14px bold).
```css
/* ❌ Mal — ratio ~2.5:1 */
color: #888888; /* gris claro sobre blanco */

/* ✅ Bien — ratio 7:1 */
color: #595959; /* gris oscuro sobre blanco */
```
Herramienta: WebAIM Contrast Checker, o el panel de DevTools → Accessibility.

**Error 3 — Formularios sin labels asociados:**
```html
<!-- ❌ Mal — el placeholder no es un label -->
<input type="email" placeholder="Tu email">

<!-- ✅ Bien — label explícito -->
<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="ejemplo@correo.com">

<!-- ✅ También válido — aria-label -->
<input type="email" aria-label="Dirección de email" placeholder="ejemplo@correo.com">
```

**Error 4 — Botones sin texto descriptivo:**
```html
<!-- ❌ Mal — el lector de pantalla dice "botón" sin contexto -->
<button><svg>...</svg></button>

<!-- ✅ Bien — aria-label describe la acción -->
<button aria-label="Cerrar ventana"><svg aria-hidden="true">...</svg></button>

<!-- ✅ También válido — texto visible -->
<button><svg aria-hidden="true">...</svg> Cerrar</button>
```

**Error 5 — Focus no visible:**
```css
/* ❌ Mal — elimina el outline para todos los navegadores */
* { outline: none; }
button:focus { outline: none; }

/* ✅ Bien — outline visible y bonito */
button:focus-visible {
  outline: 3px solid #2563EB;
  outline-offset: 2px;
  border-radius: 4px;
}
```

**Error 6 — Links sin contexto:**
```html
<!-- ❌ Mal — el lector de pantalla dice "Leer más" sin contexto -->
<a href="/blog/post-1">Leer más</a>

<!-- ✅ Bien — texto descriptivo -->
<a href="/blog/post-1">Leer más sobre accesibilidad web WCAG</a>

<!-- ✅ También válido — aria-label adicional -->
<a href="/blog/post-1" aria-label="Leer más sobre accesibilidad web WCAG">Leer más</a>
```

**Error 7 — Modales sin trampa de foco:**
```javascript
// Cuando un modal se abre, el foco debe quedar DENTRO del modal
// El usuario con teclado no debe poder salir del modal con Tab
// Al cerrar, el foco debe volver al botón que abrió el modal

// React — solución con useEffect
useEffect(() => {
  if (isOpen) {
    modalRef.current?.focus()
    const previousFocus = document.activeElement
    return () => previousFocus?.focus() // restaurar al cerrar
  }
}, [isOpen])
```

**Error 8 — Roles y landmarks mal usados:**
```html
<!-- ❌ Mal — divitis, sin estructura semántica -->
<div class="header">...</div>
<div class="main">...</div>
<div class="footer">...</div>

<!-- ✅ Bien — landmarks HTML5 semánticos -->
<header role="banner">...</header>
<main id="main-content">...</main>
<footer role="contentinfo">...</footer>
<nav aria-label="Menú principal">...</nav>
```

**Error 9 — Contenido dinámico sin anuncios ARIA:**
```html
<!-- Para contenido que cambia dinámicamente (alertas, errores de form, carga) -->
<div role="alert" aria-live="assertive">
  <!-- Los cambios aquí son anunciados inmediatamente por el lector de pantalla -->
  {errorMessage}
</div>

<div role="status" aria-live="polite">
  <!-- Los cambios aquí son anunciados cuando el lector termina lo que está leyendo -->
  {successMessage}
</div>
```

**Error 10 — Tablas sin cabeceras:**
```html
<!-- ❌ Mal -->
<table>
  <tr><td>Nombre</td><td>Email</td></tr>
  <tr><td>Ana</td><td>ana@email.com</td></tr>
</table>

<!-- ✅ Bien -->
<table>
  <caption>Lista de usuarios registrados</caption>
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Ana</td><td>ana@email.com</td></tr>
  </tbody>
</table>
```

### 🧪 Cómo testear la accesibilidad de tu aplicación
El proceso de auditoría con axe DevTools + teclado + lector de pantalla (VoiceOver en Mac, NVDA en Windows) y cómo interpretar los resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Accesibilidad web, WCAG, a11y, lectores de pantalla, HTML semántico',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Brief de diseño efectivo: el documento que evita las rondas de revisión que nunca acaban',
                'description'       => 'Escribe un brief de diseño que da al diseñador el contexto exacto para crear sin necesitar 5 revisiones. Con la estructura del brief, las preguntas que debes responder antes de empezar, los ejemplos de referencia bien documentados y cómo dar feedback que produce cambios útiles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Creative Director con experiencia mediando entre equipos de negocio y diseño en proyectos que van desde landing pages a identidades de marca completas.

Proyecto a briefar:
- Tipo de pieza: [landing page / identidad de marca / campaña de RRSS / app / presentación / otro]
- Quién lo encarga: [cargo y área de la persona que hace el encargo]
- Quién lo diseña: [diseñador interno / freelance / agencia]
- Plazo de entrega: [fecha]
- Presupuesto (si es externo): [€]

## Brief de Diseño — [Nombre del Proyecto]

### 📋 La estructura del brief en 7 bloques

**Bloque 1 — ¿Qué es este proyecto?**

Una sola frase que describe el entregable concreto:
"Diseñar una landing page de conversión para la campaña de lanzamiento del Plan Pro, con destino a usuarios de pago de SaaS competidores."

No: "Necesitamos una landing page para nuestro nuevo plan."

**Bloque 2 — ¿Por qué existe este proyecto?**

El contexto de negocio en 3-4 frases:
- ¿Qué problema resuelve?
- ¿Qué oportunidad aprovecha?
- ¿Qué pasaría si no se hace?

Esto ayuda al diseñador a tomar decisiones cuando el brief no cubre un detalle específico.

**Bloque 3 — ¿A quién va dirigido?**

El público objetivo en lenguaje concreto:
- No: "Empresas B2B medianas"
- Sí: "Marketing managers de empresas de 50-200 empleados que usan [competidor] y están frustrados con [problema específico]. Tienen presupuesto aprobado pero necesitan justificar el cambio internamente."

Si tienes una persona de usuario definida, adjúntala.

**Bloque 4 — ¿Qué tiene que conseguir el diseño?**

El objetivo medible del diseño:
- "Que el usuario entienda la propuesta de valor en <10 segundos"
- "Que el CTR al botón de prueba gratuita sea >5%"
- "Que la tasa de rebote sea <40%"

No el objetivo de negocio — el objetivo del diseño.

**Bloque 5 — ¿Cuáles son las restricciones?**

Lo que NO puede cambiar:
- Guía de estilo de marca: [link o adjunto]
- Elementos obligatorios: [logo, disclaimer legal, imágenes de producto...]
- Restricciones técnicas: [formato, tamaño máximo de archivo, dimensiones...]
- Lo que no funciona: [lista de lo que se ha probado y ha fallado]

**Bloque 6 — Referencias**

3-5 ejemplos de diseño que te gustan (y por qué):
```
Ejemplo 1: [URL] — Me gusta: la jerarquía visual clara y la CTA sin distracciones
Ejemplo 2: [URL] — Me gusta: el tono de voz directo y sin jerga técnica
Ejemplo 3: [URL] — Referencia de estilo, no de contenido: los colores y la tipografía
```

3 ejemplos de lo que NO quieres (y por qué):
```
Anti-ejemplo 1: [URL] — No quiero: exceso de texto y falta de espacio en blanco
```

**Bloque 7 — Entregables y proceso**

Qué entregas se esperan y en qué formato:
- Entregable 1: Wireframe de baja fidelidad para validar estructura — plazo: [fecha]
- Entregable 2: Diseño en alta fidelidad para web y móvil — plazo: [fecha]
- Formato: [Figma / PDF / JPG a X px / HTML]
- ¿Cuántas rondas de revisión están incluidas?

### 🔄 Cómo dar feedback que no destruye el trabajo del diseñador

**El feedback inútil:**
"No me convence" / "Falta algo" / "Prueba otro color" / "Hazlo más moderno"

**El feedback útil:**
"El botón de CTA no destaca suficiente — necesito que sea lo primero que ve el ojo cuando aterriza en la página, y ahora compite con el título."

**La fórmula del feedback que produce cambios:**
[Qué observo] + [qué efecto tiene en el objetivo del diseño] + [qué resultado necesito]
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Brief de diseño, proceso creativo, feedback de diseño, design brief',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Modelo de comisiones para equipo de ventas: diseña el plan que retiene talento y maximiza el revenue',
                'description'       => 'Diseña el plan de comisiones de ventas que motiva al equipo, retiene a los mejores vendedores y alinea los incentivos con los objetivos del negocio. Con la estructura de comisión base + variable, los aceleradores de rendimiento, los clawbacks y cómo comunicar el plan al equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Revenue Operations Leader con experiencia diseñando planes de compensación para equipos de ventas de 3 a 50 personas en SaaS B2B y servicios profesionales donde la rotación de vendedores es el mayor riesgo del crecimiento.

Contexto:
- Tipo de venta: [inside sales / field sales / canal / híbrido]
- ACV medio: [€ por contrato anual]
- Ciclo de venta: [duración media]
- Sueldo base actual del equipo: [€/año]
- Variable actual: [% sobre el base / € fijo / por comisión directa]
- Problema actual: [los mejores vendedores se van / el variable no motiva / nadie llega a cuota / demasiada complejidad]

## Plan de Comisiones de Ventas — [Empresa]

### 🏗️ La estructura base: ratio base/variable

**Los ratios estándar por tipo de venta:**
```
Venta transaccional rápida (ciclo <30 días, ACV <€5k):  70% base / 30% variable
Venta consultiva (ciclo 1-3 meses, ACV €5k-€50k):       60% base / 40% variable
Venta enterprise (ciclo 3-12 meses, ACV >€50k):         65-70% base / 30-35% variable
```

**Por qué el ratio importa:**
Un ratio 60/40 atrae candidatos con apetito de riesgo y orientación al resultado.
Un ratio 80/20 atrae candidatos que priorizan la seguridad → menos comisionistas.
Ajusta el ratio al tipo de vendedor que necesitas reclutar.

**El OTE (On-Target Earnings):**
El salario total esperado si el vendedor cumple el 100% de cuota.
OTE = Base + Variable al 100% de cuota.

```
Ejemplo — AE Senior:
Base:     €45.000/año
Variable al 100%:  €30.000/año
OTE:      €75.000/año
Ratio:    60/40
```

### 💰 Los modelos de comisión (y cuándo usar cada uno)

**Comisión lineal sobre revenue:**
Comisión = Revenue × tasa de comisión (ej. 8%)

Ventaja: simple de entender y calcular.
Riesgo: sin aceleradores, el mejor vendedor solo gana proporcionalmente más, sin extra.

**Comisión por tramos (la más frecuente en SaaS):**
```
0% - 60% de cuota:   Tasa base (ej. 6%) — por debajo del umbral mínimo
60% - 100% de cuota: Tasa estándar (ej. 8%)
100% - 120%:         Acelerador 1.5x (ej. 12%)
>120%:               Acelerador 2x (ej. 16%)
```

Ventaja: recompensa desproporcionadamente al que supera la cuota → retiene a los mejores.

**Comisión por renovaciones y expansión (para Customer Success con responsabilidad de revenue):**
```
New ARR (nuevos logos):    8% de comisión
Expansion ARR (upsell):    4% de comisión
Renewal ARR:               2% de comisión
Churn (negativo):          -4% de penalización (si tienen control sobre la retención)
```

### 🛡️ Las cláusulas de protección del negocio

**Cliff de cuota:**
No se paga variable hasta alcanzar el 60% de la cuota.
Evita pagar comisiones a vendedores que no están rindiendo lo suficiente para cubrir el coste del puesto.

**Clawback:**
Si el cliente cancela en los primeros X meses, se descuenta parte de la comisión.
Protege al negocio de vendedores que cierran cuentas que saben que van a cancelar.
Tiempo estándar: 90-180 días post-cierre.

**Draw:**
Un adelanto de comisiones para vendedores nuevos durante el período de ramp (3-6 meses).
Se paga mensualmente y se descuenta de las comisiones futuras cuando el vendedor ya está operativo.
Ayuda a reclutar vendedores buenos que no pueden permitirse 3 meses sin variable.

### 📣 Cómo comunicar el plan al equipo
El proceso de roll-out del plan de comisiones que evita las preguntas de "¿por qué me cambian el plan?" y las percepciones de injusticia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Comisiones de ventas, plan de compensación, OTE, aceleradores, sales ops',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Métricas de activación y North Star Metric: mide el valor real que entregas, no la ilusión de uso',
                'description'       => 'Define las métricas de activación que indican que un usuario ha experimentado el valor de tu producto, identifica tu North Star Metric y diseña los experimentos que mueven esa métrica. Con el proceso de discovery de la NSM, los eventos clave de activación y el dashboard de seguimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Growth con experiencia definiendo North Star Metrics y métricas de activación en productos SaaS, marketplace y apps de consumo que han pasado de medir pageviews a medir valor entregado.

Contexto:
- Tipo de producto: [SaaS B2B / marketplace / app de consumo / plataforma educativa / otro]
- Métricas actuales: [lo que mides hoy — pageviews, MAU, registros, otro]
- Problema: [no sabemos qué medir / no sabemos si los usuarios están activados / no conectamos el uso con el revenue / otro]
- Ejemplo de usuario ideal: [qué hace el usuario que más valor obtiene de tu producto]

## Métricas de Activación y North Star Metric — [Producto]

### 🌟 La North Star Metric: el número que captura el valor que entregas

**La NSM no es una métrica de negocio — es una métrica de valor para el usuario:**

| Producto | NSM mal definida | NSM bien definida |
|----------|-----------------|-------------------|
| Slack | MAU | Mensajes enviados por equipos activos/semana |
| Airbnb | Reservas | Noches reservadas |
| Spotify | Usuarios registrados | Tiempo de escucha/semana |
| LinkedIn | Usuarios activos | Conexiones profesionales creadas |

**Por qué importa la diferencia:**
"MAU" te dice cuántos usuarios abrieron la app.
"Mensajes enviados por equipos activos" te dice cuántos equipos están usando el producto para lo que está diseñado.
Si la NSM crece, el negocio crecerá — si la NSM estanca, el negocio estancará.

### 🔍 El proceso de discovery de tu North Star Metric

**Paso 1 — Identifica al usuario que más valor extrae:**
¿Quién en tu base de usuarios tiene la tasa de retención más alta? ¿Los que más usan tu producto? ¿Los que tienen mayor LTV?

**Paso 2 — Qué hacen diferente:**
Compara el comportamiento del top 20% de usuarios (por retención o LTV) con el resto.
¿Qué acciones hacen más? ¿Con qué frecuencia? ¿Qué features usan que los demás no?

**Paso 3 — El momento "aha":**
¿Cuál es la primera acción que separa a los usuarios que se quedan de los que se van?
Ese es tu evento de activación principal.

**Paso 4 — La métrica que lo captura:**
Convierte ese comportamiento en una métrica medible:
- Frecuencia: ¿cuántas veces/semana?
- Profundidad: ¿cuántos pasos completa?
- Resultado: ¿qué output produce?

### 📐 Los eventos de activación: de registro a "aha moment"

**El embudo de activación:**
```
1. Registro completado
2. Perfil/configuración inicial completada   ← muchos se quedan aquí
3. Primera acción de valor (el "aha moment") ← el evento crítico
4. Segunda sesión (retención temprana)
5. Hábito formado (N sesiones en 7 días)
```

**Cómo medir la tasa de activación:**
```
Tasa de activación = (usuarios que llegan al aha moment) / (usuarios registrados) × 100

Benchmarks típicos:
- B2B SaaS con onboarding guiado: 40-60% en 7 días
- App de consumo: 20-40% en 3 días
- Marketplace: 15-30% en 7 días (depende si son compradores o vendedores)
```

### 🧪 Los experimentos que mueven la métrica de activación

**El framework de hipótesis:**
```
Observamos que: solo el 30% de los usuarios completan el paso X
Creemos que: si [cambiamos Y], más usuarios llegará al paso X
Lo mediremos con: aumento en la tasa de completitud de paso X en 14 días
```

**Los 5 tipos de experimentos de activación más frecuentes:**
1. Simplificación del onboarding (reducir pasos)
2. Tooltips y guías contextuales en el primer uso
3. Templates o contenido prellenado (reducir la "página en blanco")
4. Email/notificación de reactivación para usuarios que se han quedado en medio del funnel
5. Checkpoints de progreso (gamificación del onboarding)

### 📊 El dashboard de seguimiento de activación
Las 5 métricas del dashboard de activación y la cadencia de revisión que conecta el trabajo del equipo con los resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'North Star Metric, activación, aha moment, métricas producto, growth',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Evaluación de competencias anual sin burocracia: el proceso que da feedback útil y no destruye la motivación',
                'description'       => 'Diseña el proceso de evaluación de competencias anual que da al empleado feedback accionable, al manager información útil para tomar decisiones de desarrollo y a la empresa datos para la gestión del talento, sin que nadie sienta que es un trámite.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Operations Lead con experiencia diseñando procesos de evaluación de desempeño en empresas de 30 a 300 personas que han conseguido que los managers y los empleados consideren la evaluación útil en lugar de una pérdida de tiempo.

Contexto:
- Tamaño del equipo: [N personas]
- Estado actual: [sin proceso / evaluación anual que nadie toma en serio / sistema muy burocrático / queremos mejorar el proceso actual]
- Objetivo principal: [desarrollo profesional / decisiones de promoción / identificar bajo rendimiento / todo lo anterior]
- Herramientas disponibles: [Notion / Google Forms / BambooHR / Lattice / otro]

## Proceso de Evaluación de Competencias — [Empresa]

### 🏗️ Los 3 módulos del proceso de evaluación

**Módulo 1 — Autoevaluación del empleado (30 minutos)**

El empleado responde 5 preguntas:

```
1. ¿Cuál ha sido tu mayor logro del año y qué impacto ha tenido?
   (No "qué hiciste" — "qué cambió gracias a lo que hiciste")

2. ¿Qué habilidad has desarrollado más este año?
   (Con un ejemplo concreto de cómo la aplicas hoy vs. hace un año)

3. ¿En qué área has fallado o has quedado por debajo de tus expectativas?
   (Honestidad — y qué aprendiste de ello)

4. ¿Qué necesitas de la empresa / tu manager para rendir mejor el próximo año?
   (Recursos, formación, más autonomía, más contexto, otro)

5. ¿Cuál es tu objetivo profesional para los próximos 12 meses?
   (En términos de habilidades, responsabilidades o dirección de carrera)
```

**Módulo 2 — Evaluación del manager (45 minutos)**

El manager evalúa cada persona en 3 dimensiones:

```
DIMENSIÓN 1: RESULTADOS (¿qué ha conseguido?)
Escala de 4 niveles (no 5 — evita el "safe middle"):
- Excepcional: supera expectativas de forma consistente
- Cumple: entrega lo que se espera
- En desarrollo: necesita mejorar en áreas clave
- No cumple: no ha alcanzado el nivel esperado para el rol

DIMENSIÓN 2: COMPETENCIAS (¿cómo lo consigue?)
Las 3-5 competencias más importantes para el rol:
[Ej: comunicación, ownership, colaboración, pensamiento crítico, orientación al cliente]
Para cada competencia: evidencia concreta de los últimos 12 meses.

DIMENSIÓN 3: POTENCIAL (¿hacia dónde va?)
- ¿Está listo para asumir más responsabilidades en los próximos 12 meses?
- ¿Tiene el perfil para un rol de liderazgo en los próximos 2-3 años?
- ¿Es un especialista de alto valor que debe desarrollarse en profundidad, no en anchura?
```

**Módulo 3 — La conversación 1:1 de evaluación (60 minutos)**

Esta es la parte que más importa. Los formularios solo son preparación para esta conversación.

**Estructura de la reunión:**
```
0-5 min:   Contexto — el propósito de la conversación
5-20 min:  El empleado comparte su autoevaluación (el manager escucha, no interrumpe)
20-40 min: El manager da feedback (específico, con ejemplos, no genérico)
40-50 min: Alineación sobre objetivos y plan de desarrollo
50-60 min: Preguntas abiertas — ¿qué más necesita el empleado?
```

### 📝 El feedback que el empleado puede usar

**El feedback inútil:**
"Podrías mejorar en comunicación."

**El feedback útil (con el modelo SBI):**
**Situación:** "En la presentación del mes pasado con el cliente de Madrid..."
**Comportamiento:** "...interrumpiste al cliente dos veces mientras hacía su pregunta..."
**Impacto:** "...lo que hizo que el cliente se sintiera ignorado y el tono de la reunión cambió."

El SBI convierte la evaluación en datos, no en opiniones.

### 🚫 Los errores que hacen que la evaluación sea inútil
Los 5 sesgos más frecuentes en las evaluaciones de desempeño y cómo el proceso puede mitigarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Evaluación de desempeño, performance review, feedback, desarrollo profesional, RRHH',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de sensibilidad y escenarios: el modelo financiero que responde "¿qué pasa si...?" antes de que ocurra',
                'description'       => 'Construye el análisis de sensibilidad y los escenarios financieros que convierten tu modelo en una herramienta de decisión. Con las variables clave a testear, la tabla de sensibilidad en Excel, los escenarios base/optimista/pesimista y cómo presentarlo a inversores o al consejo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Financial Analyst con experiencia construyendo modelos financieros con análisis de sensibilidad para startups en rondas de Series A-B y PYME con planificación estratégica que necesitan tomar decisiones basadas en datos, no en instinto.

Contexto:
- Tipo de negocio: [SaaS / ecommerce / servicios / manufactura / otro]
- Modelo financiero existente: [P&L básico / modelo completo / no tenemos / Excel / otro]
- Variables más inciertas: [precio / volumen / tasa de churn / coste de adquisición / tasa de conversión / otro]
- Audiencia del análisis: [dirección interna / inversores / banco / consejo de administración]
- Decisión que hay que tomar: [subir precios / hacer una inversión / contratar / abrir mercado / otro]

## Análisis de Sensibilidad y Escenarios — [Empresa]

### 🧠 Por qué un modelo sin sensibilidad es peligroso

**El modelo puntual:**
"Proyectamos €2,5M de revenue en 2026."

**El problema:**
Un número único crea una falsa sensación de certeza. El plan es exactamente tan incierto como las asunciones que lo sustentan.

**El modelo con sensibilidad:**
"Proyectamos entre €1,8M y €3,2M de revenue en 2026, dependiendo principalmente de la tasa de conversión del trial (nuestra mayor incertidumbre)."

El análisis de sensibilidad convierte el modelo de una predicción a una herramienta de decisión.

### 🔍 Paso 1: Identificar las variables clave (drivers)

Para un SaaS, los drivers típicos:
```
Drivers de revenue:
- Tasa de conversión del trial a paid (alta incertidumbre)
- Churn mensual (alta incertidumbre)
- Precio medio por usuario (media incertidumbre)
- Volumen de leads entrantes (media incertidumbre)
- Tiempo de ciclo de venta (baja incertidumbre)

Drivers de costes:
- CAC (alta incertidumbre — depende del canal)
- Costes de infraestructura por usuario (baja incertidumbre)
- Headcount crecimiento (media incertidumbre)
```

**Regla del 80/20:**
Identifica las 2-3 variables que tienen más impacto en el resultado.
El análisis de sensibilidad solo es útil si enfocas la atención en los drivers que más importan.

### 📊 La tabla de sensibilidad de una variable

**Ejemplo: sensibilidad del EBITDA a la tasa de churn mensual**
```
Churn mensual  | ARR año 1 | ARR año 2 | ARR año 3 | EBITDA año 3
1,0%           |  €800k    |  €1,6M    |  €2,9M    |  €580k   ✅
1,5%           |  €760k    |  €1,4M    |  €2,4M    |  €340k   🟡
2,0% (base)    |  €720k    |  €1,2M    |  €1,9M    |  €120k   🟡
2,5%           |  €680k    |  €1,0M    |  €1,5M    | -€80k    🔴
3,0%           |  €640k    |  €850k    |  €1,1M    | -€260k   🔴
```

**La lectura del análisis:**
"A partir de un churn del 2,5% mensual, el negocio no es rentable en el año 3. Nuestra tasa de churn actual es del 2% — estamos en el umbral donde pequeñas mejoras en retención tienen impacto enorme."

### 📐 El análisis de escenarios bidimensional

**El tornado chart:**
Muestra qué variables tienen más impacto en el resultado final.
Ordena de mayor a menor impacto → te dice dónde enfocar el esfuerzo de gestión.

**Los 3 escenarios base:**

```
                    PESIMISTA    BASE       OPTIMISTA
Conversion trial     3%          5%          8%
Churn mensual        3%          2%          1,2%
ACV medio           €800        €1.000      €1.200
Leads/mes            80          100         130

ARR año 2          €720k        €1,2M       €2,1M
EBITDA año 3       -€180k       +€120k      +€680k
```

**Cómo definir los rangos de los escenarios:**
- Pesimista: el percentil 10 de resultados posibles (no el peor escenario catastrófico)
- Optimista: el percentil 90 (no el mejor caso de todos los tiempos)
- Base: la expectativa más probable dados los datos que tienes

### 📣 Cómo presentar el análisis a inversores
El framing del análisis de sensibilidad que convierte la incertidumbre en argumento de inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Análisis sensibilidad, escenarios financieros, modelo financiero, inversores, Excel',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Franquicia: aspectos legales básicos para el franquiciador que quiere replicar su negocio sin riesgos legales',
                'description'       => 'Entiende el marco legal de la franquicia en España antes de firmar el primer contrato de franquicia. Con el DIP (Documento de Información Precontractual), el contrato de franquicia, el manual operativo, los registros obligatorios y las cláusulas que protegen tu marca y tu modelo de negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho mercantil y franquicia con experiencia asesorando a empresas en la estructuración de redes de franquicia en España bajo el RD 201/2010 y la Ley 7/1996 de Ordenación del Comercio Minorista.

Contexto del franquiciador:
- Sector del negocio: [restauración / retail / servicios / educación / otro]
- Número de establecimientos propios: [N — necesitas al menos 1 establecimiento piloto operativo]
- Modelo de franquicia previsto: [franquicia individual / master franquicia / área de desarrollo]
- Canon de entrada previsto: [€]
- Royalty previsto: [% sobre ventas o € fijo/mes]
- Estado actual: [estoy pensando en franquiciar / he firmado un precontrato / necesito revisar la documentación]

## Marco Legal de la Franquicia en España — [Tu Negocio]

### 📋 Los 3 documentos esenciales de la franquicia

**1. El DIP — Documento de Información Precontractual**

El DIP es obligatorio por ley en España (RD 201/2010).
Debes entregarlo al franquiciado potencial con 20 días naturales de antelación mínima antes de firmar cualquier contrato o precontrato y antes de cobrar ningún pago.

**Qué debe incluir el DIP:**
- Datos identificativos del franquiciador (empresa, NIF, domicilio, registro)
- Descripción general del negocio y del sector
- Experiencia del franquiciador: antigüedad, evolución de la red
- Contenido del contrato de franquicia (resumen)
- Estructura de la red: número de establecimientos propios y franquiciados, aperturas y cierres en los últimos 2 años
- Elementos esenciales del acuerdo: canon, royalties, zona de exclusividad
- Obligaciones del franquiciador y del franquiciado
- Características del manual operativo

**El riesgo de no entregar el DIP correctamente:**
El franquiciado puede solicitar la nulidad del contrato si no recibió el DIP con 20 días de antelación. El franquiciador también puede enfrentarse a sanciones administrativas.

**2. El contrato de franquicia**

Las cláusulas esenciales del contrato:

```
CLÁUSULAS QUE PROTEGEN AL FRANQUICIADOR:
- Licencia de marca: definición exacta de los signos distintivos cedidos
- Zona de exclusividad: geografía y limitaciones
- Estándares de calidad: obligaciones del franquiciado de seguir el modelo
- Derecho de inspección: acceso del franquiciador a los locales
- No competencia: duración (máximo 1 año post-contrato según doctrina europea)
- Confidencialidad: protección del know-how
- Canon y royalties: forma de cálculo, frecuencia, auditoría

CLÁUSULAS QUE REGULAN LA RELACIÓN:
- Duración del contrato (típico: 5-10 años con derecho de renovación)
- Causas de resolución (por ambas partes)
- Primero derecho de tanteo en caso de venta del establecimiento
- Procedimiento de resolución de conflictos
```

**3. El manual operativo**

El manual es la prueba tangible del know-how que transmites.
Sin manual, es difícil demostrar que tienes un sistema replicable.
El manual también es confidencial y su entrega está regulada en el contrato.

**Contenido mínimo del manual:**
- Estándares de producto o servicio
- Procedimientos operativos
- Imagen corporativa y uso de marca
- Procesos de atención al cliente
- Formación del personal
- Proveedores y condiciones de suministro

### 📝 El Registro de Franquiciadores

En España, el franquiciador debe inscribirse en el Registro de Franquiciadores (Ministerio de Industria) antes de iniciar la actividad de franquicia.

**La inscripción requiere:**
- Datos de la sociedad franquiciadora
- Acreditación de la experiencia mínima (al menos 1 año en funcionamiento como empresa)
- Descripción de la actividad

**Consecuencia de no estar inscrito:**
La falta de inscripción es una infracción administrativa, pero NO invalida los contratos firmados.
Sin embargo, puede usarse como argumento en disputas con franquiciados.

### ⚖️ Los errores legales más frecuentes del franquiciador novel
Los 5 errores que cometen los franquiciadores en su primera red y cómo evitarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Franquicia España, DIP, contrato franquicia, registro franquiciadores, derecho mercantil',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Encuestas de satisfacción que los clientes responden: diseña el CSAT y NPS que te dan datos útiles',
                'description'       => 'Diseña las encuestas de satisfacción de clientes que obtienen tasas de respuesta del 30-50% y te dan datos accionables para mejorar el producto y el servicio. Con la pregunta de NPS correcta, el CSAT post-interacción, cuándo enviar cada encuesta y cómo cerrar el loop con los detractores.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience Manager con experiencia diseñando programas de voz del cliente (VoC) que han subido tasas de respuesta del 5% al 40% y convertido los datos en cambios reales en el producto y el servicio.

Contexto:
- Tipo de producto/servicio: [SaaS / ecommerce / servicios profesionales / otro]
- Canales de contacto con el cliente: [email / chat / teléfono / portal]
- Encuestas actuales: [no tenemos / NPS que nadie responde / CSAT post-ticket / otro]
- Objetivo: [medir la satisfacción general / identificar puntos de fricción / comparar con el sector / reducir el churn]

## Programa de Encuestas de Satisfacción — [Empresa]

### 📏 NPS vs CSAT vs CES: cuándo usar cada uno

**NPS (Net Promoter Score):**
Mide la lealtad general del cliente.
Pregunta: "¿Con qué probabilidad recomendarías [empresa] a un amigo o colega? (0-10)"
Cuándo enviar: cada 6-12 meses, no después de cada interacción.
Lo que te dice: la percepción general de la marca.

Categorías:
- 9-10: Promotores (están encantados)
- 7-8: Pasivos (satisfechos pero no entusiastas)
- 0-6: Detractores (insatisfechos, pueden hacer churn o dejar críticas negativas)

NPS = %Promotores - %Detractores
Benchmark SaaS: NPS >40 es excelente, >20 es bueno.

**CSAT (Customer Satisfaction Score):**
Mide la satisfacción con una interacción específica.
Pregunta: "¿Cómo valorarías tu experiencia con el soporte de hoy? (1-5 ⭐)"
Cuándo enviar: inmediatamente después de resolver un ticket o una interacción.
Lo que te dice: si la experiencia concreta fue satisfactoria.

**CES (Customer Effort Score):**
Mide el esfuerzo que requirió resolver un problema.
Pregunta: "¿Cuánto esfuerzo has necesitado para resolver tu problema hoy? (1=muy poco, 7=mucho)"
Cuándo enviar: después de resolver un problema o completar un proceso (onboarding, compra).
Lo que te dice: dónde hay fricción en la experiencia.

### 📋 La encuesta que los clientes responden (diseño que maximiza la tasa de respuesta)

**Los 5 factores que afectan la tasa de respuesta:**

1. **Longitud:** máximo 3-5 preguntas. Cada pregunta adicional reduce la tasa de respuesta un 5-10%.

2. **Momento de envío:** la encuesta CSAT se envía al cerrar el ticket — no 24h después.

3. **Línea de asunto del email:**
   "¿Cómo te ha ido hoy con [empresa]?" → más personal que "Encuesta de satisfacción"

4. **La primera pregunta es la pregunta rating (la más corta):**
   Una vez que el cliente clica la primera estrella, es mucho más probable que complete el resto.

5. **La pregunta abierta al final (solo 1):**
   "¿Qué podríamos haber hecho mejor?" para detractores (CSAT 1-2).
   "¿Qué es lo que más valoras?" para promotores (CSAT 4-5).

**La estructura de la encuesta CSAT perfecta:**
```
[Email subject: "¿Cómo te ha ido con [nombre del agente] hoy?"]

Hola [nombre],

Acabas de hablar con [nombre del agente] sobre [tema del ticket].
¿Puedes decirnos cómo fue?

★ ★ ★ ★ ★  [barra de rating clicable]
[Las estrellas son el CTA — el cliente hace clic y va al formulario]

[Solo 2 preguntas adicionales en el formulario:]
¿Resolvimos tu problema? Sí / Parcialmente / No
¿Qué podríamos mejorar? [campo de texto opcional]

Gracias — respondemos a todos los comentarios.
[Equipo de [empresa]]
```

### 🔄 Cerrar el loop con los detractores

**El error más frecuente en los programas de NPS:**
Enviar el NPS, ver la puntuación, no hacer nada con los detractores.

**El proceso de closed-loop:**
Cuando un cliente pone NPS 0-6:
1. El manager del cliente (o el equipo de soporte) contacta en 48h máximo
2. "Vi que puntuaste [puntuación] — ¿puedes contarme qué ocurrió?"
3. Escucha, no defiende
4. Propone una solución o un cambio concreto
5. Registra el problema para que se convierta en mejora del producto/servicio

**Por qué el closed-loop reduce el churn:**
El 70% de los clientes que se van dicen que habrían permanecido si la empresa hubiera resuelto su problema antes de que se marcharan.

### 📊 El dashboard del programa VoC
Los 5 indicadores que el equipo directivo debe revisar cada mes y la cadencia de reporting que conecta los datos con la acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'NPS, CSAT, CES, encuestas satisfacción, voz del cliente, VoC',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Primer proyecto con una empresa grande como freelance: cómo negociar, qué cobrar y cómo no arruinarlo',
                'description'       => 'Navega el proceso de conseguir y ejecutar tu primer proyecto con un cliente corporativo como freelance. Con la propuesta que convence a procurement, el contrato que te protege, la negociación del precio con departamentos de compras y cómo construir la relación para que vuelvan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Consultant freelance con experiencia asesorando a profesionales independientes en su transición de clientes pequeños a contratos con empresas de más de 500 empleados donde los procesos de compra, los plazos de pago y las expectativas son radicalmente distintos.

Perfil del freelance:
- Especialidad: [describe tu servicio]
- Experiencia: [años y tipo de clientes hasta ahora]
- Empresa objetivo: [sector / tamaño / por qué esta empresa]
- Tipo de proyecto: [consultoría / diseño / desarrollo / contenidos / formación / otro]
- Presupuesto estimado del proyecto: [€]

## Primer Proyecto con una Empresa Grande — [Freelance]

### 🏢 Por qué el proceso de compra en empresas grandes es diferente

**Lo que no esperas cuando vienes de clientes pequeños:**

1. **Procurement/Compras** revisa la propuesta — no solo el responsable del proyecto
2. **Los plazos de pago** son 30-60-90 días (no como autónomo → te pagan cuando te llega gana)
3. **Necesitas alta de proveedor** antes de recibir el primer euro — con tu DNI, modelo de actividad económica, datos bancarios
4. **El contrato lo pone la empresa** — no tú — y tiene 20 páginas con cláusulas que te obligan a revisar
5. **La decisión tarda** — pueden pasar 4-8 semanas desde "me interesa" hasta firma del contrato

### 📄 La propuesta que convence a procurement y al responsable del área

**El error del freelance sin experiencia corporate:**
Mandar el PDF de siempre que funciona con PYME y startups.

**El documento que necesitas:**

```
ESTRUCTURA DE PROPUESTA PARA EMPRESA GRANDE:

1. RESUMEN EJECUTIVO (1 página)
   Para: el que toma la decisión (puede ser diferente al que te contactó)
   Incluye: el problema que resuelves, el resultado esperado, el precio, el plazo

2. DESCRIPCIÓN DEL PROYECTO (1-2 páginas)
   El alcance exacto de lo que harás y lo que NO harás (el límite del alcance)
   Las entregables específicas con fechas

3. METODOLOGÍA (1 página)
   Cómo trabajarás, qué necesitas del equipo del cliente, las fases del proyecto

4. EXPERIENCIA RELEVANTE (1 página)
   Proyectos similares con resultados (sin identificar al cliente si es confidencial)
   Tu perfil en 5 líneas — no tu historia completa

5. PRECIO Y CONDICIONES (1 página)
   Precio total (no por hora — las empresas grandes prefieren precio cerrado)
   Hitos de pago vinculados a entregables
   Condiciones: qué pasa si hay cambios de alcance

6. TÉRMINOS Y CONDICIONES (1-2 páginas)
   Propiedad intelectual: qué cedes y qué retines
   Confidencialidad
   Resolución de conflictos
```

### 💰 Cómo negociar con el departamento de compras

**Lo que procurement intenta hacer:**
Bajar el precio un 10-20% como política interna.
No es personal — es su trabajo.

**Lo que NO debes hacer:**
Bajar el precio sin cambiar el alcance.

**Lo que SÍ debes hacer:**
"Si ajustamos el presupuesto a €X, el alcance sería [versión reducida]. ¿Qué parte del proyecto es más prioritaria para vosotros?"

Esto pone el foco en el valor, no en el precio. Si necesitan el proyecto completo, pagarán el precio.

**El precio mínimo que debes calcular antes de negociar:**
```
Precio mínimo = (costes fijos del mes × duración del proyecto) +
                (horas de trabajo × tarifa hora) +
                (margen para imprevistos del 20%) +
                (IRPF que vas a pagar)

Nunca bajes del precio mínimo — si lo haces, trabajarás a pérdidas.
```

### 🤝 Cómo construir la relación para que el cliente vuelva
Las 3 acciones concretas al finalizar el proyecto que convierten un proyecto único en un cliente recurrente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Freelance corporativo, propuesta B2B, negociación procurement, primer cliente grande',
                'vote_score'        => 42,
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
