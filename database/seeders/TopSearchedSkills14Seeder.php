<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills14Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Webinar de alto impacto: estructura, invitados y cierre en directo que convierte asistentes en clientes',
                'description'       => 'Diseña y ejecuta el webinar que genera pipeline real. Con la estructura de 60 minutos que mantiene el engagement, el sistema de promoción que llena la sala y el cierre en directo que convierte sin ser agresivo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Webinar Strategist con experiencia produciendo webinars B2B que promedian 200+ asistentes y 15% de conversión a reunión o compra.

Mi contexto:
- Tema del webinar: [describe]
- Objetivo: [generar leads / nutrir pipeline / cerrar ventas / lanzar producto]
- Precio del producto/servicio que promueves: [€]
- Audiencia objetivo: [perfil]
- Plataforma: [Zoom / Livestorm / Demio / StreamYard / otra]
- Fecha planificada: [cuánto tiempo tienes para prepararlo]

## Sistema de Webinar — [Título del webinar]

### 🎯 El título y la promesa (lo que vende la inscripción)

**Fórmula del título que convierte:**
"Cómo [resultado específico] en [tiempo] sin [la objeción más común]"

**Tu título:** [generado]

**La promesa del webinar (lo que aprenderán):**
3 bullets concretos y medibles — no "aprenderás sobre X" sino "al terminar esta sesión sabrás exactamente Y".

### 📐 Estructura de 60 minutos que retiene

**Minutos 0-5 — Apertura de alta energía:**
- No "gracias por estar aquí, espero que estéis todos bien"
- Sí: empezar con el dato más impactante o la pregunta más provocadora del tema
- Presentación en 60 segundos: tu credencial más relevante para este tema específico
- Las reglas del webinar: "hay chat, preguntas al final, habrá replay"

**Minutos 5-15 — El problema (la parte que más se saltea y más importa):**
- Por qué el problema que vas a resolver es real y urgente para tu audiencia
- Los errores más comunes que comete tu audiencia al intentar resolverlo sola
- El coste de no resolverlo (en €, tiempo o riesgo)
- Objetivo: que cada asistente piense "esto es exactamente mi situación"

**Minutos 15-45 — El contenido (el valor real que prometiste):**
La estructura de 3-5 bloques de aprendizaje con ejemplos, datos y casos reales.
Regla: cada 7-8 minutos, una interacción (encuesta, pregunta al chat, ejercicio rápido).

**Minutos 45-55 — La transición (de enseñar a vender sin vender):**
"Hemos visto el QUÉ y el POR QUÉ. Ahora os quiero mostrar el CÓMO exacto que usamos con nuestros clientes."
Presentación de la solución: no el producto, el proceso.

**Minutos 55-60 — El cierre y la oferta:**
La oferta específica para los asistentes del webinar (precio especial, bonus exclusivo, acceso limitado).
El CTA único y claro.

### 📢 Sistema de promoción (30 días antes)

**Día -30:** email a lista + LinkedIn + redes con el anuncio del evento
**Día -14:** recordatorio + testimonios de webinars anteriores
**Día -7:** "ya somos X inscritos — añade al calendario"
**Día -3:** email con "lo que aprenderás exactamente"
**Día -1:** recordatorio + guión de lo que tener preparado
**Día 0 (mañana):** "hoy es el día — el enlace de acceso"
**Día 0 (1h antes):** "empieza en 1 hora"

### 🏃 Las primeras 24h post-webinar
Replay, oferta a no asistentes, seguimiento de los que hicieron clic en el CTA.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Webinar, lead generation, evento online, ventas en directo',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Monitorización de aplicaciones: setup de Sentry, alertas y dashboards que previenen incidencias',
                'description'       => 'Implementa el stack de observabilidad completo para tu aplicación web: error tracking con Sentry, métricas de performance, logs centralizados y alertas que te avisan antes de que lo hagan los usuarios.',
                'prompt_content'    => <<<'PROMPT'
Eres un Site Reliability Engineer (SRE) con experiencia implementando observabilidad en aplicaciones web con 10k a 1M de usuarios activos.

Mi stack:
- Backend: [Node.js / Python / PHP Laravel / Go / Ruby / otro]
- Frontend: [React / Vue / Next.js / Nuxt / otro]
- Infraestructura: [AWS / GCP / Azure / Hetzner VPS / Kubernetes / otro]
- Estado actual de monitoring: [sin nada / solo logs básicos / Sentry sin configurar bien / otro]
- Presupuesto para herramientas: [gratuito / €X/mes]

## Stack de Observabilidad — [Aplicación]

### 🔍 Los 3 pilares de la observabilidad

1. **Logs:** qué pasó y cuándo
2. **Métricas:** tendencias y valores de salud del sistema
3. **Trazas:** el camino de un request a través de tu sistema

No necesitas los tres desde el día 1. Empieza por donde más duele.

### 🚨 Error Tracking con Sentry (empieza aquí)

**Instalación básica:**
```javascript
// Node.js / Next.js
import * as Sentry from "@sentry/nextjs"

Sentry.init({
  dsn: process.env.SENTRY_DSN,
  environment: process.env.NODE_ENV,
  tracesSampleRate: 0.1,       // 10% de requests para performance
  profilesSampleRate: 0.1,
  integrations: [
    Sentry.httpIntegration(),
    Sentry.prismaIntegration(),  // si usas Prisma
  ],
})
```

```php
// Laravel
composer require sentry/sentry-laravel
// config/sentry.php — dsn desde variable de entorno
// En App\Exceptions\Handler::report():
Sentry::captureException($exception);
```

**Configuración que marca la diferencia:**

```javascript
// Añadir contexto de usuario a cada error
Sentry.setUser({
  id: user.id,
  email: user.email,
  subscription: user.plan,
})

// Añadir breadcrumbs para reconstruir el camino al error
Sentry.addBreadcrumb({
  category: 'auth',
  message: 'User logged in',
  level: 'info',
})

// Capturar errores manejados con contexto extra
try {
  await processPayment(orderId)
} catch (error) {
  Sentry.captureException(error, {
    tags: { order_id: orderId, payment_method: 'stripe' },
    extra: { amount, currency },
  })
}
```

**Alertas de Sentry que debes configurar:**
- Nueva issue nunca vista → notificación inmediata
- Issue que crece >50% en 1h → alerta de regresión
- Issue que afecta a >1% de los usuarios → alerta crítica

### 📊 Métricas de infraestructura (elige según tu stack)

**Para Kubernetes/contenedores:** Prometheus + Grafana
**Para VPS/servidores:** Netdata (gratis, self-hosted) o Datadog (paid)
**Para severless:** las métricas nativas de AWS CloudWatch / Vercel Analytics

**Las 5 métricas que no pueden faltarte:**
1. P95 de latencia por endpoint
2. Error rate (errores 5xx / total requests)
3. CPU y memoria del servidor
4. Tiempo de respuesta de base de datos
5. Disponibilidad (uptime)

### 🔔 Uptime monitoring (2 minutos de setup)

**Herramientas gratuitas:**
- UptimeRobot (hasta 50 monitores gratuitos, check cada 5 min)
- Better Uptime (más features, plan gratuito limitado)

**Lo que monitorizar:**
- La home de tu app
- El endpoint de health check (`/health` que devuelve 200 si todo va bien)
- Los endpoints críticos de tu API

**Qué hacer cuando hay una alerta:**
Runbook de respuesta a incidencias — el documento que guía al oncall a las 3am.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Monitorización, Sentry, observabilidad, DevOps, SRE',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de formularios que no abandonan: los principios que doblan las tasas de compleción',
                'description'       => 'Rediseña los formularios de tu producto o web para reducir el abandono a la mitad. Con los principios de UX de formularios, el order correcto de los campos, los mensajes de error que ayudan y los micro-detalles que marcan la diferencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Designer especializado en diseño de formularios y conversión con experiencia mejorando tasas de compleción de formularios de registro, checkout y onboarding.

Mi contexto:
- Tipo de formulario: [registro / checkout / lead generation / onboarding / actualización de perfil / otro]
- Plataforma: [web / app móvil / ambas]
- Tasa de compleción actual: [X%]
- Número de campos actuales: [N]
- Mayor punto de abandono detectado: [campo específico / paso / momento]

## Rediseño de Formulario — [Tipo de formulario]

### 🎯 El principio más importante: cada campo que añades reduce las conversiones

**El coste real de un campo de más:**
En checkout: cada campo extra reduce la conversión un 10% de media.
En registro: los formularios de 3 campos convierten 2x más que los de 6 campos.

**Ejercicio de campo justificado:**
Para cada campo actual, responde: "¿Qué decisión de negocio cambia si no tenemos este dato?"
Si la respuesta es "ninguna", elimina el campo.

### 🏗️ Diseño del formulario óptimo

**Orden de los campos (de menor a mayor fricción):**
1. Primero: los campos fáciles (nombre, email — el usuario ya los tiene en mente)
2. Medio: los datos de contexto (empresa, cargo)
3. Último: los datos sensibles o de esfuerzo (contraseña, número de tarjeta, dirección)

**Por qué importa el orden:**
Si empiezas por lo difícil, el usuario abandona antes de llegar a lo fácil.
Si empiezas por lo fácil, ya ha invertido tiempo y es más probable que termine.

### ✏️ Inputs y labels que funcionan

**Label siempre visible (no placeholder como label):**
```
❌ [Ana García               ] ← el placeholder "Nombre" desaparece al escribir
✅ Nombre completo
   [Ana García               ]
```

**Placeholders útiles (ejemplos, no instrucciones):**
```
✅ Email: [ana@empresa.com]      ← muestra el formato
✅ Teléfono: [+34 612 345 678]   ← muestra el formato esperado
❌ Contraseña: [Introduce tu contraseña]  ← no aporta info
```

**Formato de campo adaptado al tipo de datos:**
- Teléfono: `type="tel"` + `inputmode="numeric"` → teclado numérico en móvil
- Email: `type="email"` → validación nativa + teclado con @ en móvil
- Número de tarjeta: separar en grupos de 4 automáticamente

### ❌ Mensajes de error que ayudan (no culpan)

```
❌ "Email inválido"
✅ "Introduce una dirección de email válida (ej: nombre@empresa.com)"

❌ "Contraseña incorrecta"
✅ "La contraseña debe tener al menos 8 caracteres e incluir un número"

❌ "Error en el formulario"
✅ "El código postal no corresponde a la provincia seleccionada"
```

**Cuándo mostrar el error:**
- No en cada keystroke (demasiado agresivo)
- Sí al salir del campo (onBlur) si el formato es claramente incorrecto
- Sí al enviar el formulario para todos los errores pendientes

### 📱 Optimización para móvil

**Los 5 quick wins de formularios en móvil:**
1. Inputs con al menos 44px de altura (facilita el tap)
2. `autocomplete` en todos los campos relevantes (email, nombre, tarjeta)
3. Teclado correcto con `inputmode` y `type`
4. Botón de submit siempre visible sin scroll
5. Mensajes de error dentro del campo, no en un toast que desaparece

### 📊 Cómo medir si el rediseño funciona
Hotjar / FullStory para ver la grabación de sesiones y el funnel de conversión del formulario.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'UX design, formularios, conversión, mobile UX',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Forecast de ventas: cómo predecir el cierre del mes con confianza sin depender de la memoria del equipo',
                'description'       => 'Implementa el proceso de sales forecasting que da visibilidad real al pipeline. Con la metodología de scoring, el ritual de forecast semanal, los modelos de predicción y cómo gestionar al equipo para que el CRM refleje la realidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Sales con experiencia construyendo procesos de forecasting que han reducido la desviación entre forecast y cierre real de ±40% a ±10%.

Mi contexto:
- Tamaño del equipo de ventas: [N personas]
- Ticket medio: [€]
- Ciclo de venta: [X semanas/meses]
- CRM: [HubSpot / Salesforce / Pipedrive / Close / otro]
- Problema actual: [el forecast es wishful thinking / los vendedores no actualizan el CRM / no sé qué va a cerrar este mes hasta el día 28 / otro]

## Sistema de Sales Forecasting — [Empresa]

### 🧮 Los métodos de forecasting (y cuándo usar cada uno)

**Método 1 — Pipeline stage (el más básico, el más usado incorrectamente):**
Suma de todos los deals en pipeline × probabilidad de la etapa
- Problema: la probabilidad de la etapa es una media que ignora el deal específico

**Método 2 — Opportunity scoring (el más preciso para ventas complejas):**
Puntúa cada deal en 4-6 factores → probabilidad real por deal
```
Factores de scoring:
- Sponsor interno identificado: Sí (+20) / No (+0)
- Presupuesto confirmado: Sí (+20) / En proceso (+10) / No (+0)
- Decisor final accesible: Sí (+20) / No directo (+10) / No (+0)
- Timeline de decisión < 30 días: Sí (+20) / 30-90 (+10) / >90 (+0)
- Propuesta presentada y con preguntas: Sí (+20) / Solo enviada (+10) / No (+0)

Score 80-100%: Commit — entra en el forecast del mes
Score 60-79%: Upside — puede cerrar, no commitment
Score <60%: Pipeline — no entra en el forecast
```

**Método 3 — Histórico + ratio (el más simple para early stage):**
Si cerraste el 25% del pipeline en los últimos 6 meses:
Forecast = Pipeline actual × 25%

### 📅 El ritual semanal de forecast (45 min todos los viernes)

**Reunión de forecast semanal:**

| Parte | Duración | Qué ocurre |
|-------|---------|-----------|
| Deal review | 20 min | Cada vendedor presenta los deals en "Commit" — el manager pregunta con evidencias |
| Upside review | 10 min | Deals en "Upside" — ¿qué necesita para pasar a Commit? |
| Forecast consolidado | 10 min | Manager suma Commit + % de Upside + sorpresas |
| Acciones de la semana | 5 min | ¿Qué necesita cada deal para avanzar? |

**Las preguntas del manager que revelan si un deal es real:**
- "¿Qué te dijo el sponsor en la última conversación?"
- "¿Cuándo es la próxima reunión con el decisor?"
- "¿Hay competidores activos en este deal?"
- "¿Tienes fecha de decisión confirmada o es tu estimación?"

### 📊 El dashboard de forecast

**Vista mensual:**
- Forecast committed: €X (deals en "Commit")
- Best case: €X (Commit + Upside)
- Pipeline total: €X
- Cierre necesario para cuota: €X
- Gap: €X (lo que falta + cómo cubrirlo)

**Tendencia histórica:**
Gráfico de forecast vs. cierre real en los últimos 6 meses — tu nivel de precisión.

### 🔧 Cómo conseguir que el equipo actualice el CRM
El proceso que hace que los vendedores vean el beneficio de tener el CRM al día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sales forecasting, pipeline management, sales operations',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Jobs to be Done: el framework que revela por qué los usuarios realmente usan tu producto',
                'description'       => 'Aplica el framework Jobs to be Done (JTBD) para entender la motivación real detrás del uso de tu producto. Con el proceso de investigación, las entrevistas de timeline y cómo convertir los jobs descubiertos en decisiones de roadmap.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Strategist con experiencia aplicando Jobs to be Done en startups que han encontrado su PMF gracias a entender el job real que los usuarios contratan al producto.

Mi contexto:
- Producto: [describe]
- Problema que crees resolver: [tu hipótesis actual]
- Señales que te hacen dudar: [churn inesperado / usuarios que no usan la feature "principal" / competidores con productos muy distintos que también ganan / otro]
- Acceso a usuarios: [fácil / difícil]

## JTBD Framework — [Producto]

### 🧠 Qué es Jobs to be Done (y qué no es)

**La idea central:**
Los usuarios no compran productos. "Contratan" soluciones para hacer un trabajo que necesitan que se haga.

"Las personas no quieren un taladro de 6mm. Quieren un agujero de 6mm."
— Theodore Levitt

**El job tiene 3 dimensiones:**
1. **Funcional:** la tarea práctica ("organizar las facturas del trimestre")
2. **Social:** cómo quiere verse el usuario ante otros ("parecer organizado ante mi equipo")
3. **Emocional:** cómo quiere sentirse ("no sentir ansiedad al llegar la fecha de impuestos")

**Por qué JTBD cambia el roadmap:**
Si tu producto se "contrata" para reducir la ansiedad (job emocional), las features que necesitas construir son muy diferentes que si se contrata para ahorrar tiempo (job funcional).

### 🎤 Las entrevistas de timeline (el método de investigación)

**El objetivo:** reconstruir el proceso de decisión que llevó al usuario a contratar tu producto.

**La pregunta de apertura:**
"Cuéntame la historia de cómo llegaste a [producto]. ¿Qué fue lo que pasó antes de que lo empezaras a usar?"

**Las preguntas de exploración:**
- "¿Qué estabas intentando hacer cuando decidiste buscar una solución?"
- "¿Qué usabas antes? ¿Por qué dejaste de usarlo?"
- "¿Cuándo fue el momento en que dijiste 'necesito resolver esto ya'?"
- "¿Qué te hizo elegir [producto] y no [alternativa]?"
- "¿Cuándo supiste que [producto] había funcionado?"

**Lo que buscas en las respuestas:**
- El evento desencadenante (el "primer pensamiento")
- El evento que aceleró la búsqueda (la "gota que colmó el vaso")
- El criterio de éxito del usuario (cómo define que el job está hecho)

### 📊 Del job a las oportunidades de producto

**Mapa de jobs descubiertos:**
| Job funcional | Job emocional | Job social | Solución actual del usuario | Oportunidad |
|--------------|--------------|-----------|---------------------------|------------|
| [Job 1] | [Sentir] | [Parecer] | [Cómo lo resuelve hoy] | [Dónde tu producto puede ser mejor] |

**Cómo priorizar los jobs:**
1. Frecuencia: ¿cuántos usuarios tienen este job?
2. Satisfacción actual: ¿qué tan bien lo resuelven con las alternativas?
3. Willingness to pay: ¿pagarían más por resolverlo mejor?

**Jobs con alta frecuencia + baja satisfacción = la oportunidad más valiosa**

### 📋 De los jobs al roadmap
Cómo traducir los jobs descubiertos en outcomes de producto y luego en features del backlog.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Jobs to be Done, investigación de producto, product strategy, PMF',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Comunicación interna efectiva: los rituales y canales que mantienen al equipo alineado sin reunionitis',
                'description'       => 'Diseña el sistema de comunicación interna de tu empresa que mantiene a todos informados y alineados sin ahogarlos en reuniones y Slack. Con la estructura de rituales, la matriz de decisión de canal y las normas de comunicación que el equipo realmente cumple.',
                'prompt_content'    => <<<'PROMPT'
Eres un Chief of Staff y Communications specialist con experiencia diseñando sistemas de comunicación interna para empresas de 20 a 300 personas en remoto, presencial e híbrido.

Contexto de la empresa:
- Número de empleados: [N]
- Modalidad: [remoto / presencial / híbrido — % de cada uno]
- Herramientas de comunicación actuales: [Slack / Teams / email / Notion / otra]
- Problema principal: [demasiadas reuniones / información que no llega / Slack que es un ruido constante / decisiones que se toman sin informar / otro]

## Sistema de Comunicación Interna — [Empresa]

### 📡 La matriz de canales de comunicación

**El error más frecuente:** usar el mismo canal para todo (Slack para todo = nada llega).

Cada tipo de comunicación tiene su canal óptimo:

| Tipo de comunicación | Canal | Por qué |
|---------------------|-------|---------|
| Urgente + síncrono | Llamada / reunion directa | La urgencia necesita respuesta inmediata |
| Importante pero no urgente | Email / Notion | Requiere reflexión y referencia futura |
| Colaboración en tiempo real | Slack / Teams | Hilo de trabajo activo |
| Anuncios de empresa | Email + all-hands | Máximo alcance y registro |
| Documentación permanente | Notion / Confluence | Búsqueda futura |
| Feedback y reconocimiento | 1:1 + canal de celebración | Impacto humano y visibilidad |

**Regla del canal correcto:**
"Si necesito que alguien lo haga hoy → Slack DM. Si necesito que se quede guardado → Notion. Si es para toda la empresa → email."

### 📅 Arquitectura de rituales de comunicación

**Daily Async (sin reunión, 3 minutos por persona):**
Cada persona escribe en el canal #daily-async:
- ✅ Ayer terminé: [lista]
- 🔄 Hoy voy a hacer: [lista]
- ❌ Bloqueado en: [si hay algún bloqueo]

**Weekly team meeting (30-45 min, en vivo):**
Agenda fija que nunca cambia:
1. Updates de métricas clave (10 min)
2. Proyectos importantes: ¿estamos en plazo? (10 min)
3. Decisiones que necesita el equipo (10 min)
4. Celebraciones y reconocimientos (5 min)
5. [Nada más — el resto va a Notion]

**Monthly all-hands (60 min):**
Para toda la empresa:
- Estado de la empresa (métricas, logros, desafíos) — CEO
- Proyecto o iniciativa destacada del mes — un equipo diferente cada mes
- Q&A abierta — preguntas anónimas bienvenidas

**Quarterly business review (90 min):**
Resultados del trimestre + objetivos del siguiente + retrospectiva.

### 🔕 Normas de comunicación que reducen el ruido

**Normas de Slack que cambian la vida:**
- Las horas de "no molestar" respetan el deep work
- @channel y @here solo para incidencias reales (no para "aviso a todos que es la reunión en 5 min")
- Los threads obligatorios en todos los canales públicos
- La etiqueta [URGENTE] solo cuando de verdad lo es (si todo es urgente, nada lo es)

**El derecho a la desconexión:**
La política explícita sobre responder fuera de horario laboral — escrita, no solo de palabra.

### 📊 Cómo saber si la comunicación funciona
Encuesta trimestral de 3 preguntas sobre la efectividad de la comunicación interna.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Comunicación interna, rituales de equipo, remote work, asynchronous',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Control de gastos por departamento: el proceso de aprobación que evita sorpresas en el P&L',
                'description'       => 'Diseña el proceso de control de gastos que da visibilidad en tiempo real al CFO y libertad operativa a los managers. Con las políticas de gasto por nivel, el flujo de aprobaciones y la herramienta que hace el seguimiento sin hojas de Excel.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia implementando controles de gasto en empresas de 20 a 200 empleados que han pasado de "gastamos sin saber" a tener visibilidad semanal.

Contexto:
- Número de empleados: [N]
- Gasto mensual total aproximado (sin nóminas): [€]
- Departamentos con gasto significativo: [marketing / ventas / IT / operaciones / otro]
- Herramienta actual: [solo el banco / Excel / Spendesk / Pleo / Ramp / Netsuite / otro]
- Problema principal: [gastos que aparecen sin presupuesto / managers que no saben cuánto tienen / facturas sin aprobación previa / otro]

## Sistema de Control de Gastos — [Empresa]

### 🏗️ La política de gasto (la base de todo)

**Principio de diseño:** máxima autonomía dentro de límites claros.
No queremos que los managers pidan permiso para comprar una suscripción de €29. Queremos saber que hay presupuesto para ello y que hay un proceso para lo que está fuera.

**Niveles de autonomía de gasto:**

| Nivel | Quién | Límite sin aprobación | Proceso |
|-------|-------|----------------------|---------|
| Individual | Todo empleado | €0-50 | Auto-aprobado con justificación |
| Manager | Responsable de área | €50-500 | Auto-aprobado si hay presupuesto |
| Director | VP / Director | €500-5.000 | Notificación al CFO |
| C-level | CEO / CFO | €5.000-20.000 | Aprobación del CEO |
| Board | Board approval | >€20.000 | Aprobación del consejo |

**Tipos de gasto y su tratamiento:**
- **Recurrentes presupuestados** (SaaS, suscripciones, servicios fijos): auto-aprobados si el presupuesto existe
- **Únicos > umbral**: necesitan PR (purchase request) con justificación
- **No presupuestados > umbral**: requieren presupuesto suplementario del CFO

### 💳 Herramientas de gestión de gasto (sin más tarjetas de empresa sin control)

**Para equipos de <50 personas:**
- Pleo: tarjetas virtuales y físicas por empleado con límites por persona y categoría
- Moss: similar a Pleo, más orientado a mercado europeo
- Divvy: más completo para EEUU

**Para equipos de >50 personas:**
- Spendesk: aprobaciones + tarjetas + facturas en un flujo integrado
- Ramp: potente analytics + automatización de conciliación

**La ventaja clave:**
El manager ve en tiempo real cuánto lleva gastado vs. su presupuesto. El CFO ve todo el cuadro.

### 📊 El dashboard de gastos que el CFO revisa cada viernes

**Vista por departamento:**
| Área | Presupuesto mensual | Gastado a [fecha] | % ejecutado | Proyección fin de mes |
|------|--------------------|--------------------|------------|----------------------|
| Marketing | €X | €X | X% | €X |
| Ventas | €X | €X | X% | €X |

**Alertas automáticas:**
- Departamento al 80% de presupuesto antes del día 20 → alerta al manager + CFO
- Gasto fuera de categoría presupuestada → notificación inmediata
- Factura de proveedor sin PO asociada → bloqueo hasta aprobación

### 📋 El proceso mensual de revisión de gastos
La reunión de 30 minutos con cada área que convierte el control de gastos en una conversación de negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Control de gastos, gestión financiera, presupuesto departamental',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cláusulas SLA y penalizaciones en contratos tecnológicos: protege al cliente sin asumir riesgos imposibles',
                'description'       => 'Redacta los Service Level Agreements (SLA) y las cláusulas de penalización en contratos de software y servicios IT que son justos para ambas partes, ejecutables en práctica y que no te arruinan si hay una incidencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en contratos tecnológicos (SaaS, outsourcing, desarrollo a medida) con experiencia negociando SLAs para empresas de software en España y la UE.

Contexto:
- Tipo de servicio: [SaaS / hosting / desarrollo a medida / mantenimiento / soporte técnico]
- Posición: [proveedor del servicio / cliente que compra]
- Criticidad del servicio para el cliente: [crítica — no puede parar / alta / media / baja]
- Importe del contrato: [€/mes o €/año]
- Historial de incidencias: [0 / ocasional / frecuente]

## Cláusulas SLA — [Tipo de servicio]

### 📐 Métricas de SLA estándar para servicios tecnológicos

**Disponibilidad (Uptime):**

| Nivel de SLA | Uptime | Downtime máximo/mes | Para qué tipo de servicio |
|-------------|--------|--------------------|-----------------------------|
| 99,9% ("tres nueves") | 43,8 min/mes | Servicios standard | La mayoría de SaaS |
| 99,95% | 21,9 min/mes | Servicios importantes | E-commerce, apps de negocio |
| 99,99% ("cuatro nueves") | 4,4 min/mes | Servicios críticos | Banca, salud, infraestructura |

**Cómo calcular el uptime comprometido:**
Excluir mantenimientos programados notificados con X horas de antelación.

**Tiempo de Respuesta (no de resolución):**

| Prioridad | Definición | Tiempo de respuesta |
|-----------|-----------|---------------------|
| P1 — Crítico | Servicio caído / pérdida de datos | 15-30 minutos |
| P2 — Alto | Funcionalidad principal degradada | 1-2 horas |
| P3 — Medio | Funcionalidad secundaria afectada | 4-8 horas (hábiles) |
| P4 — Bajo | Bug menor, consulta | 24-48 horas hábiles |

### ⚖️ Cláusula de SLA completa (texto legal)

**Artículo X — Nivel de Servicio**

"El Proveedor garantiza una disponibilidad del servicio del [X]% mensual, medida como el tiempo durante el cual el servicio es accesible y funcional, excluyendo:
(a) Mantenimientos programados notificados con al menos [24/48/72] horas de antelación;
(b) Causas de fuerza mayor;
(c) Fallos originados en sistemas o integraciones de terceros no gestionados por el Proveedor;
(d) Problemas derivados del mal uso del servicio por parte del Cliente."

### 💰 Cláusula de penalizaciones (que el proveedor pueda cumplir)

**La trampa del SLA con penalizaciones desproporcionadas:**
Si las penalizaciones superan el importe del contrato, el proveedor no puede asumirlas → quedan vacías o destruyen la relación.

**Penalizaciones proporcionales y ejecutables:**

| Incumplimiento de uptime | Penalización |
|--------------------------|-------------|
| 99,9% - 99,5% | 5% de la mensualidad |
| 99,5% - 99,0% | 10% de la mensualidad |
| 99,0% - 95,0% | 25% de la mensualidad |
| < 95,0% | 50% de la mensualidad |

**Límite de penalizaciones totales:**
"Las penalizaciones acumuladas en ningún caso excederán el [25/50]% del importe mensual del contrato ni darán derecho a resolución del contrato salvo que el incumplimiento supere [X] meses consecutivos."

**El mecanismo de reclamación:**
El Cliente debe reportar el incumplimiento en [X días hábiles] desde que ocurre. El Proveedor tiene [X días] para confirmar o refutar el cálculo. Las deducciones se aplican en la siguiente factura.

### 📋 Lo que nunca debes firmar en un SLA (si eres proveedor)
Las 5 cláusulas abusivas que las empresas grandes intentan incluir y cómo renegociarlas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Contratos tecnológicos, SLA, penalizaciones, derecho tech',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte proactivo: contacta al cliente antes de que tenga un problema (y antes de que se vaya)',
                'description'       => 'Diseña el sistema de soporte proactivo que previene el churn contactando al cliente en los momentos de riesgo antes de que llegue un ticket o una baja. Con los triggers de health score, los playbooks de outreach y las métricas de impacto.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Success con experiencia implementando programas de proactive support que han reducido el churn un 15-25% al contactar a clientes en riesgo antes de que lo pidieran.

Contexto:
- Tipo de producto: [SaaS / plataforma / servicio / app]
- Datos de uso disponibles: [login frecuency / features usadas / tiempo en app / otro]
- Herramienta de CS: [Intercom / HubSpot / Gainsight / Totango / otra]
- Churn mensual actual: [X%]
- Motivo más frecuente de churn: [bajo uso / competencia / presupuesto / producto no encaja / otro]

## Sistema de Soporte Proactivo — [Empresa]

### 🔭 Los triggers de riesgo que debes monitorizar

**Señales de riesgo de churn (actúa en 48h):**

**Señales de engagement bajo:**
- Usuario no ha hecho login en [X días] cuando el patrón normal es diario
- Feature principal no usada en [X días] cuando normalmente la usa semanalmente
- Tiempo de sesión promedio bajó >50% respecto al mes anterior

**Señales de fricción:**
- 3+ tickets en 30 días (especialmente si son del mismo tipo)
- Ticket que lleva >48h abierto sin resolución
- Calificación CSAT de 1-2 en los últimos 30 días

**Señales de intención de salida:**
- Descarga de datos / export masivo
- Visita a la página de precios o de cancelación
- Contacto con soporte preguntando por política de cancelación

**Señales de oportunidad perdida (clientes que no activan):**
- Registro hace >14 días sin completar el onboarding
- Nunca usó la feature que genera retención

### 📋 Playbooks de outreach proactivo

**Playbook 1 — Usuario inactivo (no ha hecho login en X días):**

*Trigger:* sin login en [X días]
*Canal:* email personalizado (no automatizado genérico)
*Objetivo:* entender si hay un problema o si el contexto cambió

Template:
```
Asunto: ¿Todo bien con [tu producto]?

Hola [nombre],

He notado que no has entrado en [producto] desde hace [X días] y quería ver si todo está bien por tu parte.

¿Hay algo en lo que podamos ayudarte o algo que no está funcionando como esperabas?

Un saludo,
[Tu nombre]
Head of Customer Success
```

*Por qué funciona:* es personal, directo y pregunta sin asumir.
*Si no responde en 3 días:* llamada de 5 minutos.

**Playbook 2 — Alta CSAT negativa:**
Outreach en <24h post-encuesta, escalado al manager si el cliente está muy frustrado.

**Playbook 3 — Nuevo cliente en riesgo de no activar:**
Check-in al día 7 y al día 14 si no ha llegado al aha moment.

**Playbook 4 — Cliente que mira la página de precios:**
Si el CRM o Intercom trackea la visita: outreach de CS en <2h con "¿tienes alguna pregunta sobre tu plan?"

### 📊 El Health Score (sistema de alerta temprana)

**Las 4 dimensiones del health score:**
| Dimensión | Señal | Peso |
|-----------|-------|------|
| Producto | Frecuencia de uso de la feature principal | 35% |
| Soporte | Tickets abiertos / CSAT reciente | 25% |
| Relación | Nivel de respuesta a comunicaciones | 25% |
| Negocio | Cambios en el cliente (LinkedIn: nuevos empleados / recortes) | 15% |

**Escala del health score:**
🟢 80-100: cliente sano → entrevista de referencia o upsell
🟡 50-79: en riesgo → outreach proactivo en 5 días
🔴 <50: riesgo alto → alerta al CSM + call en 24h

### 💰 El ROI del soporte proactivo
Cómo calcular cuánto MRR has salvado con los playbooks proactivos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Soporte proactivo, health score, churn prevention, customer success',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Subcontratación como freelance: cuándo delegar, cómo gestionar y qué nunca externalizar',
                'description'       => 'Aprende a subcontratar parte de tu trabajo para escalar sin contratar empleados. Con los criterios para decidir qué delegar, cómo encontrar y gestionar a otros freelancers y cómo proteger la calidad y la relación con tu cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un freelance senior que lleva 5 años subcontratando trabajo a una red de 8 freelancers especializados, con una red de ingresos de 30k€/mes con un equipo de 0 empleados.

Mi situación:
- Servicio principal: [describe]
- Volumen actual: [N proyectos / mes o €/mes]
- El trabajo que me sobra o que no me gusta hacer: [describe]
- Precio que cobro al cliente: [€/hora o €/proyecto]
- Mi mayor miedo al subcontratar: [calidad / que el colaborador vaya directo al cliente / no saber gestionar / legalmente / otro]

## Sistema de Subcontratación para Freelancers — [Tu negocio]

### 🎯 Cuándo tiene sentido subcontratar

**Subcontrata cuando:**
- Tienes más trabajo del que puedes asumir y pierdes oportunidades
- Hay partes del trabajo que otro hace mejor que tú y tú no quieres especializarte ahí
- El margen del proyecto permite pagar a un colaborador y que te quede beneficio razonable (mínimo 30%)
- Hay trabajo recurrente que se puede sistematizar (instrucciones claras, resultado predecible)

**No subcontrates:**
- La parte que te diferencia ante el cliente (tu expertise clave)
- La relación con el cliente (la gestión de cuenta siempre es tuya)
- El trabajo donde no puedes describir claramente qué esperas del resultado

### 💰 El modelo de precios de la subcontratación

**Estructura que funciona:**
- Cobras al cliente: [€X]
- Pagas al colaborador: [€X × 50-70% según el valor que añades]
- Tu margen: [30-50%] — includes la gestión, la relación con el cliente y el riesgo

**Por qué el colaborador acepta ganar menos:**
Tú aportas el cliente, el brief, la gestión de expectativas y el riesgo de impago.

**Nunca pagues menos del 50%** a un colaborador que hace el trabajo core — no es sostenible y los mejores no trabajarán contigo.

### 🔍 Cómo encontrar colaboradores de confianza

**Las 3 mejores fuentes:**
1. Tu red profesional de confianza (los que ya conoces y de quienes sabes que son buenos)
2. Comunidades de nicho (grupos de Slack, Discord, LinkedIn para tu especialidad)
3. Proyectos pasados donde alguien te impresionó (un developer, un diseñador, un redactor)

**Cómo evaluar antes de un proyecto real:**
Mini proyecto pagado (<€200) antes del proyecto grande. Evalúas:
- Calidad del trabajo
- Cómo comunica los problemas
- Si cumple los plazos
- Si pide clarificaciones antes o te entrega algo que no pediste

### 📄 El contrato con el colaborador (imprescindible)

**Lo que debe incluir:**
- Descripción exacta del entregable y estándares de calidad
- Cláusula de confidencialidad y no-contacto al cliente final
- Cesión de derechos de autor al pago
- Plazo de entrega y consecuencias del incumplimiento
- Forma de pago (hito o al finalizar)

### 🛡️ Cómo proteger la relación con tu cliente
La cláusula que impide que el colaborador vaya al cliente directamente + cómo presentar el trabajo sin revelar que subcontratas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Subcontratación freelance, escalado sin empleados, delegación',
                'vote_score'        => 40,
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
