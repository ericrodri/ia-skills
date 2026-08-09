<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills34Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing automation: flujos de nurturing que convierten leads fríos en clientes listos para comprar',
                'description'       => 'Diseña los flujos de marketing automation que acompañan al lead desde el primer contacto hasta la decisión de compra de forma automática. Con los flujos de nurturing por etapa del funnel, la lógica de segmentación, los disparadores correctos y cómo evitar el spam que destruye la reputación del dominio.',
                'prompt_content'    => <<<'PROMPT'
Eres un Marketing Automation Specialist con experiencia diseñando flujos de nurturing en HubSpot y ActiveCampaign que han reducido el ciclo de venta un 35% y aumentado la conversión de lead a cliente en un 25% al entregar el contenido correcto en el momento correcto del journey.

Contexto:
- Herramienta de marketing automation: [HubSpot / ActiveCampaign / Klaviyo / Mailchimp / Brevo / otro]
- CRM integrado: [HubSpot CRM / Salesforce / Pipedrive / otro / ninguno]
- Tipo de negocio: [SaaS B2B / servicios profesionales / ecommerce / otro]
- Ciclo de compra típico: [días / semanas / meses]
- Estado actual: [sin automation / solo emails de bienvenida / queremos flujos más sofisticados]

## Marketing Automation — Flujos de Nurturing — [Empresa]

### 🗺️ El mapa del journey del lead: antes de configurar nada

**Los errores que destruyen los flujos de nurturing:**
```
❌ Enviar el mismo contenido a todos los leads sin segmentar
❌ Bombardear con emails demasiado frecuentes (más de 2/semana suele aumentar las bajas)
❌ Flujos que no tienen fin claro (el lead queda atrapado en el automation para siempre)
❌ Contenido que no corresponde con la etapa del journey del lead
```

**Las 3 etapas del nurturing y el contenido que corresponde:**
```
TOFU (Top of Funnel) — El lead acaba de descubrir el problema:
  Objetivo: educar y generar confianza.
  Contenido: artículos de blog, guías, infografías, webinars educativos.
  Frecuencia: 1 email/semana.
  Tono: "Te ayudo a entender mejor tu problema."

MOFU (Middle of Funnel) — El lead sabe que tiene un problema y busca soluciones:
  Objetivo: posicionarte como la mejor solución.
  Contenido: casos de éxito, comparativas, calculadoras de ROI, demos.
  Frecuencia: 1-2 emails/semana.
  Tono: "Así es cómo resolvemos lo que tú tienes."

BOFU (Bottom of Funnel) — El lead está evaluando y listo para decidir:
  Objetivo: eliminar las últimas objeciones y cerrar.
  Contenido: prueba gratuita, demo personalizada, oferta, testimoniales de clientes similares.
  Frecuencia: según el comportamiento (si abrió el email de precio → contacto inmediato del SDR).
  Tono: "¿Empezamos?"
```

### 🔧 Los 3 flujos de nurturing fundamentales

**Flujo 1 — Nuevo lead (lead magnet o registro):**
```
TRIGGER: el lead descarga un recurso o se registra en la newsletter.

Email 1 (inmediato): entrega lo prometido + bienvenida
  "Aquí tienes [el recurso]. Además, en los próximos días te enviaré..."

Email 2 (día 3): contenido de valor relacionado con el problema
  Artículo, vídeo o guía que profundiza en el tema del lead magnet.

Email 3 (día 7): prueba social (caso de uso o historia de cliente)
  "Cómo [empresa similar] resolvió [problema]."

Email 4 (día 14): contenido de diferenciación
  "Por qué [tu enfoque] funciona mejor que [la alternativa]."

Email 5 (día 21): CTA suave
  "¿Quieres ver cómo podríamos ayudarte específicamente?"
  [Enlace a página de contacto o demo]

Si no hay interacción → enter en secuencia de re-engagement.
Si hay interacción (clic en CTA) → sale del nurturing y entra al proceso de ventas.
```

**Flujo 2 — Nurturing basado en comportamiento:**
```
TRIGGER: el lead visita la página de precios 2+ veces.
El comportamiento es la señal más potente de intención de compra.

Email disparado (dentro de las 2 horas):
Asunto: "¿Tienes alguna pregunta sobre los precios?"
Body: "Hemos visto que has estado viendo nuestros planes.
Si tienes alguna pregunta o quieres que calculemos juntos qué plan se adapta mejor a ti,
es un placer ayudarte."
CTA: "Reservar una llamada de 20 minutos"

Si no responde → alerta al SDR para llamada directa.
```

**Flujo 3 — Re-engagement (leads que dejaron de interaccionar):**
```
TRIGGER: el lead lleva 60 días sin abrir un email.

Email 1: El email de ruptura (muy eficaz precisamente porque es diferente)
Asunto: "¿Seguimos?"
Body (muy corto): "Han pasado unos meses desde que nos conocimos.
¿Sigues interesado en [resolver el problema]?
Si no, no hay problema — te doy de baja de nuestra lista para no molestarte.
Haz clic aquí si quieres seguir recibiendo nuestros recursos."
[Botón: "Sí, sigo interesado"]

Si hace clic → vuelve al flujo activo.
Si no responde → se elimina de la lista (limpia la base de datos y mejora la entregabilidad).
```

### 📊 La puntuación de leads (lead scoring) que prioriza al equipo de ventas
El sistema de lead scoring automático que asigna puntos por comportamiento (visita a la página de precios, apertura de emails, descarga de recursos) y desencadena la alerta al SDR cuando el lead supera el umbral de MQL.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Marketing automation, nurturing leads, HubSpot, ActiveCampaign, lead scoring, email automation',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Caching avanzado: estrategias de caché que eliminan el 80% de la carga de la base de datos',
                'description'       => 'Implementa las estrategias de caché correctas para tu aplicación web que reducen la latencia y la carga de la base de datos sin introducir inconsistencias de datos. Con los patrones de invalidación, el caché distribuido con Redis, el caché HTTP y el CDN para activos estáticos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Backend Engineer con experiencia optimizando aplicaciones que pasaron de tiempos de respuesta de 800ms a 80ms implementando las estrategias de caché correctas en la capa adecuada, sin introducir inconsistencias de datos.

Contexto:
- Stack tecnológico: [Node.js / Python / Go / PHP+Laravel / Java / otro]
- Tipo de aplicación: [API REST / aplicación web / SaaS / ecommerce]
- Problema actual: [latencia alta / base de datos saturada / costes de infra elevados / escala no aguanta]
- Infraestructura: [AWS / GCP / Azure / self-hosted / otro]

## Estrategias de Caché — [Aplicación]

### 🗺️ Las 4 capas de caché (y qué problema resuelve cada una)

**Capa 1 — Caché de base de datos (query cache):**
```
Problema que resuelve: queries lentas o repetidas que sobrecargan la DB.
Herramienta: Redis (recomendado), Memcached.
Granularidad: resultado de una query específica.

Patrón Cache-Aside (el más común):
1. El servidor busca en el caché primero.
2. Si está en caché (hit) → devuelve el resultado directamente.
3. Si no está (miss) → hace la query a la DB, guarda el resultado en caché y lo devuelve.

// Node.js + Redis
async function getUserProfile(userId) {
  const cacheKey = `user:profile:${userId}`
  const cached = await redis.get(cacheKey)
  if (cached) return JSON.parse(cached)

  const user = await db.query('SELECT * FROM users WHERE id = $1', [userId])
  await redis.set(cacheKey, JSON.stringify(user), 'EX', 3600) // TTL: 1 hora
  return user
}
```

**Capa 2 — Caché de objetos / sesiones:**
```
Problema que resuelve: datos de sesión almacenados en DB que se consultan en cada request.
Herramienta: Redis.
TTL: el tiempo de expiración de la sesión.

// Express.js + Redis sessions
const session = require('express-session')
const RedisStore = require('connect-redis')(session)

app.use(session({
  store: new RedisStore({ client: redisClient }),
  secret: process.env.SESSION_SECRET,
  resave: false,
  saveUninitialized: false,
  cookie: { maxAge: 86400000 } // 24 horas
}))
```

**Capa 3 — Caché HTTP (headers de respuesta):**
```
Problema que resuelve: el navegador o el proxy hace la misma petición varias veces.
Herramienta: headers HTTP correctos.
Granularidad: respuesta completa de un endpoint.

Headers clave:
Cache-Control: max-age=3600                    // cacheable por 1 hora
Cache-Control: no-cache                        // revalidar siempre con el servidor
Cache-Control: no-store                        // nunca almacenar (datos sensibles)
Cache-Control: public, max-age=86400           // público (CDN puede cachearlo)
ETag: "abc123"                                 // fingerprint del contenido
Last-Modified: Thu, 20 Jul 2026 10:00:00 GMT  // fecha de última modificación

// Express.js
app.get('/api/products', (req, res) => {
  res.set('Cache-Control', 'public, max-age=3600')
  res.set('ETag', generateETag(products))
  res.json(products)
})
```

**Capa 4 — CDN (Content Delivery Network):**
```
Problema que resuelve: activos estáticos (imágenes, JS, CSS) servidos desde un servidor central a usuarios geográficamente distantes.
Herramientas: Cloudflare, AWS CloudFront, Fastly.

Qué cachear en el CDN:
✅ Imágenes, vídeos, archivos de audio
✅ Archivos JS y CSS con hash en el nombre (ej: app.a3f2b1.js)
✅ Respuestas de API que no cambian frecuentemente (catálogos, configuración pública)

❌ No cachear en CDN:
- Datos de sesión o personalizados
- APIs con datos en tiempo real
- Respuestas que contienen datos del usuario autenticado
```

### ⚠️ La invalidación de caché: el problema más difícil del caching

**La regla de Phil Karlton:**
"Solo hay dos cosas difíciles en ciencias de la computación: la invalidación de caché y nombrar las cosas."

**Los patrones de invalidación:**

```
1. TTL (Time To Live) — el más simple:
El caché expira automáticamente después de X segundos.
Ventaja: simple, sin código adicional.
Riesgo: los datos pueden estar desactualizados hasta que expire el TTL.
Cuándo usar: datos que cambian raramente (catálogos, configuración).

2. Write-through — invalidar en la escritura:
Cuando actualizas un dato en la DB, actualizas también el caché.
await db.update('users', { id: userId, name: newName })
await redis.set(`user:profile:${userId}`, JSON.stringify(updatedUser), 'EX', 3600)

3. Cache-invalidation por evento:
Cuando algo cambia, publicas un evento que limpia el caché relacionado.
// Cuando el usuario actualiza su perfil:
await eventBus.publish('user.updated', { userId })
// El subscriber limpia el caché:
eventBus.subscribe('user.updated', ({ userId }) => {
  redis.del(`user:profile:${userId}`)
})
```

### 📊 Cómo medir el rendimiento del caché y detectar problemas
Las métricas del caché (hit rate, miss rate, eviction rate) y los umbrales que indican que el sistema de caché está mal configurado o saturado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Caching Redis, caché HTTP, CDN, cache-aside pattern, invalidación caché, performance',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Animaciones e interacciones en interfaces digitales: el movimiento que guía sin distraer',
                'description'       => 'Diseña las animaciones e interacciones de tu interfaz digital que mejoran la experiencia del usuario en lugar de distorsionarla. Con los principios del motion design para UI, cuándo animar y cuándo no, los valores de duración y easing correctos y las herramientas de prototipado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Motion Designer especializado en UI/UX con experiencia diseñando sistemas de animación para aplicaciones web y móviles donde el movimiento bien ejecutado ha aumentado la comprensión del producto y reducido la tasa de abandono en onboardings complejos.

Contexto:
- Tipo de producto: [web app / app móvil / sitio web / otro]
- Herramienta de diseño: [Figma / Framer / Principle / Lottie / CSS / React Native Animated]
- Estado actual: [sin animaciones / animaciones básicas / queremos un sistema coherente]
- El objetivo: [mejorar el onboarding / dar feedback de acciones / hacer el producto más expresivo / todo]

## Animaciones e Interacciones — [Producto]

### 🧠 El principio del motion design en UI: el movimiento tiene un propósito

**Lo que las animaciones hacen (cuando están bien hechas):**
```
1. ORIENTAN AL USUARIO:
   Una transición de pantalla que desliza hacia la derecha indica "has avanzado un paso."
   Una que desliza hacia la izquierda indica "has vuelto atrás."
   El usuario entiende la estructura de la app sin leer instrucciones.

2. DAN FEEDBACK DE ACCIONES:
   El botón que se "presiona" cuando haces clic confirma que la acción fue registrada.
   El campo de formulario que tiembla cuando el dato es incorrecto comunica el error sin texto.

3. EVITAN EL BLOQUEO PERCEPTIVO:
   Un skeleton screen (estructura fantasma) hace que la carga parezca más rápida que un spinner.
   Una animación de carga comunica "el sistema está trabajando" y reduce la ansiedad de espera.

4. CREAN JERARQUÍA:
   El elemento más importante se anima primero → guía la atención del usuario.
```

**Lo que las animaciones NO deben hacer:**
```
❌ Decorar por decorar (movimiento sin propósito confunde y distrae)
❌ Ralentizar el flujo (una animación de 800ms en una acción frecuente = 0.8s robados × 100 veces al día)
❌ Bloquear la interacción (el usuario no puede hacer click hasta que termina la animación)
❌ Ignorar las preferencias del sistema (prefers-reduced-motion: el 10-15% de usuarios tiene sensibilidad al movimiento)
```

### ⏱️ Los valores de duración y easing correctos

**Duración por tipo de animación:**
```
Micro-interacciones (hover, press, toggle):     100-200ms
Transiciones de elementos en la misma pantalla: 200-300ms
Transiciones entre pantallas o vistas:          250-400ms
Animaciones de entrada de elementos nuevos:     300-500ms
Animaciones de carga o espera:                  indefinidas (loop)

La regla: más corto siempre que sea legible.
Una animación de 300ms que el ojo captura es mejor que 600ms que el usuario espera.
```

**Los tipos de easing:**
```
EASE-OUT (desacelera al final — el más natural para entradas):
  Los elementos que entran en pantalla arrancan rápido y se frenan suavemente.
  Simula un objeto que llega y se detiene.
  CSS: cubic-bezier(0.0, 0.0, 0.2, 1) / ease-out

EASE-IN (acelera al final — para salidas):
  Los elementos que salen de pantalla empiezan lentos y aceleran hasta desaparecer.
  Simula un objeto que parte y coge velocidad.
  CSS: cubic-bezier(0.4, 0.0, 1, 1) / ease-in

EASE-IN-OUT (acelera y desacelera — para elementos que se mueven por la pantalla):
  Para transiciones de un lugar a otro dentro de la pantalla.
  CSS: cubic-bezier(0.4, 0.0, 0.2, 1)

LINEAR (velocidad constante — casi nunca):
  Solo para loops de carga o progreso lineal.
  Para casi todo lo demás, el linear se siente mecánico y artificial.
```

### 🛠️ Implementación práctica: CSS y Framer Motion

**CSS puro (para micro-interacciones):**
```css
/* Botón con feedback de hover y click */
.button {
  transition: transform 150ms ease-out, background-color 150ms ease-out;
}
.button:hover {
  background-color: #1d4ed8;
  transform: translateY(-1px);
}
.button:active {
  transform: translateY(0px) scale(0.98);
}

/* Entrada de un card con fade + slide */
.card-enter {
  opacity: 0;
  transform: translateY(8px);
  animation: card-enter 300ms ease-out forwards;
}
@keyframes card-enter {
  to { opacity: 1; transform: translateY(0); }
}

/* Respeto a prefers-reduced-motion */
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}
```

**Framer Motion (React):**
```jsx
import { motion, AnimatePresence } from 'framer-motion'

// Entrada de un modal
function Modal({ isOpen, children }) {
  return (
    <AnimatePresence>
      {isOpen && (
        <motion.div
          initial={{ opacity: 0, scale: 0.95 }}
          animate={{ opacity: 1, scale: 1 }}
          exit={{ opacity: 0, scale: 0.95 }}
          transition={{ duration: 0.2, ease: 'easeOut' }}
        >
          {children}
        </motion.div>
      )}
    </AnimatePresence>
  )
}
```

### 🎬 El sistema de animación: cómo documentar el motion design para el equipo
El design token de motion (variables de duración y easing compartidas entre diseño y desarrollo) y el inventario de animaciones del design system que asegura coherencia en todo el producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Motion design UI, animaciones interfaz, Framer Motion, CSS transitions, easing, micro-interacciones',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Account Management: gestión de cuentas clave para crecer el revenue sin buscar nuevos clientes',
                'description'       => 'Gestiona las cuentas de clientes existentes de alto valor con un proceso de Key Account Management (KAM) que maximiza el revenue de cada cuenta mediante expansión, renovación y referidos. Con el plan de cuenta, el QBR y cómo identificar oportunidades de upsell sin presionar.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Account Manager con experiencia gestionando carteras de cuentas enterprise de €500k-5M ARR donde el Net Revenue Retention (NRR) supera el 120% gracias a un proceso sistemático de expansión dentro de las cuentas existentes.

Contexto:
- Tipo de producto/servicio: [SaaS B2B / consultoría / servicios profesionales / otro]
- Tamaño medio de cuenta: [€ ARR]
- NRR actual: [%]
- El mayor reto: [las cuentas no crecen / alta tasa de churn / no sé cuándo proponer el upsell / no tengo proceso formal]

## Key Account Management — [Empresa]

### 🎯 La diferencia entre gestionar cuentas y desarrollar cuentas

**Gestión de cuentas (lo que hace la mayoría):**
```
Responder a lo que pide el cliente.
Resolver los problemas cuando llegan.
Mantener la relación sin objetivo de crecimiento.
Resultado: las cuentas renuevan por inercia o se van por la misma razón.
```

**Key Account Management (KAM):**
```
Tener un plan de crecimiento para cada cuenta estratégica.
Identificar proactivamente oportunidades de expansión antes de que el cliente las pida.
Medir el éxito del cliente continuamente y vincularlo al valor de tu producto.
Resultado: NRR >100% — las renovaciones generan más revenue que el año anterior.
```

### 📋 El plan de cuenta: el documento que guía cada relación estratégica

**La estructura del plan de cuenta (revisión trimestral):**
```
PARTE 1 — PANORAMA DE LA CUENTA:
→ Información de la empresa (sector, tamaño, situación actual)
→ Mapa de stakeholders: quién decide, quién influye, quién usa
→ Estado de la relación: health score (1-10)
→ Revenue actual y potencial (ARR, expansión posible, productos/servicios no contratados)

PARTE 2 — SITUACIÓN DEL CLIENTE:
→ Los objetivos de negocio del cliente para este año
→ Cómo está usando nuestro producto (¿adopción alta? ¿baja? ¿hay features no usadas?)
→ Los resultados que ha obtenido (ROI documentado)
→ Los retos que tiene que podríamos resolver

PARTE 3 — ESTRATEGIA DE CRECIMIENTO:
→ Las 2-3 oportunidades de expansión identificadas (y el timing)
→ Los riesgos de churn y el plan de mitigación
→ Los próximos pasos con nombre, acción y fecha

PARTE 4 — RELATIONSHIP MAP:
→ ¿Tenemos relación solo con el contacto principal? (RIESGO: si se va, se va la cuenta)
→ ¿Tenemos contacto con el C-suite o el decisor de presupuesto?
→ ¿Hay campeones internos que nos defienden cuando no estamos en la sala?
```

### 📅 El QBR (Quarterly Business Review): la reunión que hace crecer las cuentas

**Qué es y qué NO es un QBR:**
```
Un QBR NO es:
→ Una reunión de soporte o de resolución de problemas operativos
→ Un informe de uso de la herramienta ("aquí tenéis las métricas del trimestre")
→ Una presentación unilateral del AM al cliente

Un QBR SÍ es:
→ Una revisión estratégica de qué ha conseguido el cliente gracias a tu producto
→ Una conversación sobre los próximos objetivos del cliente (y cómo puedes ayudar)
→ El momento para identificar y proponer la expansión de forma natural
```

**La agenda del QBR de 60 minutos:**
```
10 min — Revisión de objetivos del trimestre anterior:
"Al inicio del trimestre nos comprometimos a [resultado X].
Aquí está dónde estamos: [métricas reales]."

15 min — El cliente habla: ¿qué ha ido bien? ¿qué ha ido mal?
Deja que el cliente hable más que tú en esta parte.

10 min — Lo que viene: los objetivos del próximo trimestre
"¿Cuáles son vuestros 2-3 objetivos principales para Q3?"

15 min — Cómo podemos ayudar en esos objetivos
Aquí es donde surge la conversación de expansión de forma natural.
"Para conseguir [objetivo del Q3], una opción que os podría ayudar es [feature/producto adicional]."

10 min — Próximos pasos
```

### 🚀 Cómo identificar y ejecutar el momento correcto del upsell
Las señales que indican que una cuenta está lista para expandir (high adoption, ROI demostrado, nuevo objetivo de negocio) y el guión de la conversación de expansión que no parece un pitch de ventas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Key Account Management, KAM, QBR, NRR, expansión cuentas, upsell B2B, plan de cuenta',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de plataforma: cómo construir el producto que atrae a dos lados del mercado',
                'description'       => 'Define la estrategia de plataforma para productos que conectan dos grupos de usuarios (marketplace, red de desarrolladores, ecosistema de partners). Con la solución al problema del huevo y la gallina, el modelo de monetización de plataforma y cómo construir efectos de red que hacen el producto difícil de abandonar.',
                'prompt_content'    => <<<'PROMPT'
Eres un Platform Product Manager con experiencia construyendo productos de dos lados del mercado (marketplaces, plataformas de desarrolladores, ecosistemas de partners) donde los efectos de red son la principal ventaja competitiva.

Contexto:
- Tipo de plataforma: [marketplace B2B / marketplace B2C / plataforma de desarrolladores / red de profesionales / ecosistema de partners / otro]
- Los dos grupos que quieres conectar: [Grupo A (ej: compradores) y Grupo B (ej: vendedores)]
- Estado actual: [idea / producto inicial sin los dos lados activos / un lado funciona, el otro no / queremos construir los efectos de red]

## Estrategia de Plataforma — [Empresa]

### 🧠 Qué es una plataforma y qué no lo es

**Un producto de plataforma:**
Crea valor facilitando interacciones entre dos o más grupos de usuarios.
El valor del producto aumenta con el número de participantes de cada lado.
Ejemplos: Airbnb (anfitriones + huéspedes), Stripe (comercios + compradores), GitHub (desarrolladores + proyectos open source).

**Un producto lineal (no de plataforma):**
Crea valor transformando inputs en outputs para un solo grupo de usuarios.
El valor no cambia (o cambia poco) con el número de usuarios.

**Por qué la distinción importa:**
Las plataformas requieren una estrategia diferente:
- Métricas distintas (no solo usuarios activos sino interacciones entre ambos lados)
- Estrategia de adquisición distinta (hay que atraer a ambos lados simultáneamente)
- Modelo de monetización distinto (¿a quién cobras? ¿a los dos?)

### 🐔🥚 El problema del huevo y la gallina: la mayor barrera de entrada de las plataformas

**El problema:**
Los compradores vienen si hay vendedores.
Los vendedores vienen si hay compradores.
¿Por quién empiezas?

**Las 4 estrategias que funcionan:**

**Estrategia 1 — Conquista un sub-mercado específico primero:**
No intentes atraer a todos los vendedores y compradores desde el día 1.
Elige un nicho donde el problema es más agudo y la comunidad es pequeña.
Airbnb empezó con conferencias — cuando había un evento grande y los hoteles se llenaban,
Airbnb conectaba asistentes con habitaciones disponibles de residentes locales.

**Estrategia 2 — Subsidia un lado (el que tiene más poder de atracción):**
¿Cuál de los dos lados atrae automáticamente al otro?
En un marketplace de trabajo: los candidatos van donde están las ofertas.
Solución: subsidia a los empleadores (gratis para publicar) hasta tener suficiente oferta.
Luego monetiza cuando el otro lado (candidatos) tiene valor.

**Estrategia 3 — Crea valor para un lado antes de tener el otro:**
Construye una herramienta útil para el lado B aunque el lado A todavía no exista.
PayPal empezó como herramienta de pago para individuos → luego la integraron en eBay.
GitHub fue útil para el control de versiones antes de que existiera el efecto de red de las contribuciones open source.

**Estrategia 4 — Producers-first (primero el supply):**
Recluta manualmente el supply antes del lanzamiento.
Yelp: el equipo contactó a restaurantes manualmente para conseguir las primeras reseñas.
Doordash: el equipo fue físicamente a restaurantes a convencerles de que se apuntaran.

### 📐 Los efectos de red: cómo hacer el producto más valioso con cada nuevo usuario

**Los tipos de efectos de red:**
```
DIRECTO (mismo lado):
Más usuarios del mismo tipo = más valor para cada uno.
WhatsApp: cuantos más de tus contactos lo usan, más valioso es para ti.

INDIRECTO (entre lados):
Más vendedores = más valor para compradores.
Más compradores = más valor para vendedores.
La mayoría de los marketplaces tienen efectos de red indirectos.

LOCAL:
El efecto de red funciona en un área geográfica, no globalmente.
Uber: tener muchos conductores en Madrid no te ayuda si estás en Barcelona.
```

### 💰 El modelo de monetización de plataforma: ¿a quién cobras?
Los tres modelos de monetización de plataforma (cobrar al lado que genera más valor, take rate sobre transacciones, suscripción al acceso) y cómo el momento de monetización afecta al crecimiento de la plataforma.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Platform strategy, marketplace, efectos de red, huevo gallina, two-sided market, product platform',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Planificación de la plantilla (workforce planning): anticipa las necesidades de talento antes de que sean urgentes',
                'description'       => 'Planifica las necesidades de talento de tu empresa a 6-18 meses vista para contratar con tiempo, desarrollar el talento interno y evitar los errores de contratación urgente. Con el modelo de capacidad vs. demanda, el mapa de habilidades y el plan de hiring trimestral.',
                'prompt_content'    => <<<'PROMPT'
Eres un Strategic HR Business Partner con experiencia implementando procesos de workforce planning en empresas en crecimiento de 50-500 personas donde planificar la plantilla con 6 meses de antelación ha reducido el tiempo de contratación urgente (y los errores asociados) un 60%.

Contexto:
- Tamaño actual de la empresa: [N personas]
- Crecimiento esperado en los próximos 12 meses: [%]
- Estado actual: [contratamos cuando hay urgencia / tenemos un presupuesto de hiring anual pero sin proceso / queremos anticiparnos]
- Área de mayor necesidad de talento: [tecnología / ventas / operaciones / todas]

## Workforce Planning — [Empresa]

### 🔭 Por qué el workforce planning es estratégico, no administrativo

**El coste de no planificar:**
```
Contratación urgente = menor calidad en la selección (el primer candidato "suficientemente bueno" vs el mejor candidato)
Time to hire urgente: 4-8 semanas sin planificación / 2-4 semanas con proceso preparado.
Coste de una mala contratación: 1-3× el salario anual del puesto.
Pérdida de proyectos o clientes por falta de capacidad: el coste de oportunidad más alto.
```

**Lo que te permite la planificación anticipada:**
```
→ Buscar al mejor candidato, no al primero disponible
→ Desarrollar talento interno (más barato que contratar externamente)
→ Usar el hiring como herramienta estratégica (contratar 3 meses antes del pico de demanda)
→ Gestionar el presupuesto con previsibilidad
```

### 📊 El modelo de capacidad vs. demanda: el análisis de partida

**Paso 1 — Mapa el estado actual de la plantilla:**
```
Para cada departamento/equipo:
→ Headcount actual
→ Habilidades disponibles (lo que sabe hacer el equipo ahora)
→ Capacidad efectiva (horas disponibles para trabajo productivo vs. operativo)
→ Gaps críticos actuales (lo que necesitas y no tienes)
```

**Paso 2 — Proyecta la demanda futura:**
```
Pregunta a los líderes de área:
"Para conseguir tus objetivos de los próximos 12 meses, ¿qué capacidad adicional necesitas?"
"¿Qué habilidades que hoy no tienes necesitarás en 6-12 meses?"
"¿Qué está en el backlog que no puedes ejecutar por falta de personas?"

Inputs del negocio:
→ Plan de ventas (si van a vender 2× más, ¿cuánto más soporte/operaciones necesitan?)
→ Roadmap de producto (nuevas features = ¿nuevos engineers? ¿nuevo equipo de soporte?)
→ Expansión geográfica (nuevo mercado = ¿equipo local?)
```

**Paso 3 — Identifica los gaps:**
```
GAP = Demanda futura - Capacidad actual

Para cada gap, define la estrategia:
OPCIÓN A — Contratar externamente (más caro, más rápido en resultados)
OPCIÓN B — Desarrollar internamente (más barato, más lento, mejor retención)
OPCIÓN C — Externalizar/subcontratar (flexible, sin coste fijo)
OPCIÓN D — Rediseñar el proceso para necesitar menos capacidad
```

### 📅 El plan de hiring trimestral

**El formato del plan (revisión trimestral con el equipo directivo):**
```
POSICIÓN              DEPTO    PRIORIDAD   APERTURA    MOTIVO
──────────────────────────────────────────────────────────────
Backend Engineer      Tech     Alta        Q3 Mes 1    Roadmap Q4 requiere capacidad adicional
Sales Development Rep Ventas   Alta        Q3 Mes 2    Objetivo ARR Q4 requiere 2 SDRs adicionales
Customer Success Mgr  CS       Media       Q3 Mes 3    Cartera actual supera ratio 1:80 cuentas
Marketing Specialist  Mktg     Baja        Q4 Mes 1    Expansión a nuevo mercado
```

**El mapa de habilidades (Skills Matrix):**
```
Un documento que mapea qué habilidades tiene cada persona del equipo.
Se actualiza 2× al año.

Utilidad:
→ Identifica dónde hay single points of failure (solo 1 persona con una habilidad crítica)
→ Muestra los candidatos internos para promociones
→ Informa el plan de formación
```

### 🔄 El proceso de revisión trimestral del workforce plan
La reunión de 90 minutos con el equipo directivo que revisa el plan, ajusta las prioridades y asigna el presupuesto de hiring del próximo trimestre con criterios de decisión claros.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Workforce planning, planificación plantilla, gap analysis talento, skills matrix, hiring plan',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de viabilidad de inversiones: ROI, VAN, TIR y payback para decidir en qué invertir',
                'description'       => 'Evalúa la viabilidad económica de nuevos proyectos de inversión (nueva línea de negocio, expansión, maquinaria, software) usando los indicadores financieros que usan los directivos para decir sí o no. Con el cálculo del ROI, el VAN, la TIR y el payback con ejemplos prácticos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director de Finanzas con experiencia evaluando la viabilidad de inversiones para comités de dirección en sectores de tecnología, servicios y manufactura, donde la presentación correcta de los indicadores financieros determina si la inversión se aprueba o no.

Contexto:
- Tipo de inversión a evaluar: [nueva línea de negocio / maquinaria / software / expansión geográfica / adquisición / otro]
- Importe de la inversión: [€]
- Horizonte temporal: [N años]
- El objetivo del análisis: [presentar al comité de dirección / convencer a inversores / tomar la decisión internamente]

## Análisis de Viabilidad de Inversiones — [Proyecto]

### 📊 Los 4 indicadores de viabilidad de inversiones

**Indicador 1 — ROI (Return on Investment):**
```
Qué mide: el rendimiento total de la inversión expresado como porcentaje.
Cuándo usarlo: para una comparación rápida entre opciones.
Limitación: no tiene en cuenta el valor temporal del dinero ni el ritmo del retorno.

Fórmula:
ROI = (Beneficio neto total - Inversión inicial) / Inversión inicial × 100

Ejemplo:
Inversión inicial: €100.000
Beneficio neto acumulado en 3 años: €150.000
ROI = (€150.000 - €100.000) / €100.000 × 100 = 50%

Interpretación: por cada €1 invertido, recuperas €1,50 (€0,50 de ganancia).
```

**Indicador 2 — Payback (Período de recuperación):**
```
Qué mide: en cuánto tiempo recuperas la inversión inicial.
Cuándo usarlo: para evaluar el riesgo de liquidez (cuánto tiempo el capital está comprometido).
Limitación: no tiene en cuenta los flujos de caja después de recuperar la inversión.

Fórmula (payback simple):
Payback = Inversión inicial / Flujo de caja anual promedio

Ejemplo:
Inversión: €100.000
Flujo de caja anual: €35.000
Payback = €100.000 / €35.000 = 2.86 años (aproximadamente 2 años y 10 meses)

Interpretación: recuperas la inversión en menos de 3 años. Para una inversión de bajo riesgo, <3 años suele considerarse aceptable.
```

**Indicador 3 — VAN (Valor Actual Neto):**
```
Qué mide: el valor presente de todos los flujos de caja futuros, descontados a la tasa de descuento.
Por qué es mejor que el ROI simple: tiene en cuenta que €1 hoy vale más que €1 en 3 años.
Cuándo usarlo: para inversiones de varios años donde el ritmo de los flujos importa.

La tasa de descuento: refleja el coste de oportunidad del capital.
Típicamente: 8-12% para empresas privadas / 6-8% para inversiones de bajo riesgo.

VAN = -Inversión inicial + Σ [Flujo de caja año t / (1 + tasa de descuento)^t]

Ejemplo simplificado:
Inversión: -€100.000
Flujos: €40.000 / año durante 3 años
Tasa descuento: 10%

VAN = -100.000 + 40.000/(1.10)^1 + 40.000/(1.10)^2 + 40.000/(1.10)^3
VAN = -100.000 + 36.364 + 33.058 + 30.053
VAN = -€525

Interpretación: VAN negativo → la inversión no genera suficiente retorno para cubrir el coste de capital.
VAN = €0 → punto de equilibrio exacto.
VAN positivo → la inversión genera valor por encima del coste de oportunidad.
```

**Indicador 4 — TIR (Tasa Interna de Retorno):**
```
Qué mide: la tasa de descuento a la que el VAN = 0.
Es la rentabilidad efectiva de la inversión.
Cuándo usarlo: para comparar la rentabilidad de la inversión con el coste de capital.

Interpretación:
TIR > Coste de capital → inversión rentable
TIR < Coste de capital → inversión no rentable
TIR = 15% vs. coste de capital del 10% → la inversión genera 5 puntos de rentabilidad extra.

La TIR se calcula iterativamente — en la práctica se usa Excel o Python:
=TIR(rango de flujos de caja) en Excel
```

### 📋 La plantilla de análisis de viabilidad completa
El modelo de análisis en una hoja de cálculo que incluye los 4 indicadores, el análisis de sensibilidad (escenario optimista, base y pesimista) y la recomendación de inversión fundamentada en los datos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Viabilidad inversiones, ROI, VAN, TIR, payback, análisis financiero inversión, capex',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Derecho laboral en España: despidos, EREs y bajas voluntarias — lo que toda empresa debe saber',
                'description'       => 'Entiende el marco legal de la terminación de relaciones laborales en España — el despido disciplinario, el despido objetivo, el ERE y la baja voluntaria — para gestionar las salidas con seguridad jurídica y sin sorpresas en el juzgado de lo social.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado laboralista con experiencia asesorando a empresas de 10-500 empleados en España en procesos de despido, EREs y reestructuraciones, donde el error procedimental (una carta de despido mal redactada, un plazo incumplido) convierte un despido procedente en improcedente con el coste económico correspondiente.

Contexto:
- Tamaño de la empresa: [N empleados]
- La situación que quieres entender: [despido disciplinario / despido objetivo / ERE / baja voluntaria del empleado / despido de empleado en IT protegida]
- El empleado afectado: [describe el cargo, antigüedad y si tiene alguna protección especial]

## Terminación de Relaciones Laborales en España — [Empresa]

### 📋 Los 4 tipos de terminación de relaciones laborales

**Tipo 1 — El despido disciplinario (art. 54 del ET):**
```
Cuándo procede: cuando el trabajador comete una falta grave o muy grave.
Causas legales: incumplimiento contractual, faltas repetidas de asistencia, transgresión de la buena fe contractual, acoso, embriaguez habitual...

Lo que debe incluir la carta de despido:
→ La causa concreta y detallada (no basta con "incumplimiento de sus obligaciones")
→ La fecha de efectos del despido
→ Si el trabajador es representante sindical → audiencia previa al comité de empresa

Indemnización: CERO si el despido es procedente.
Si el juez lo declara improcedente: 33 días/año trabajado (máximo 24 mensualidades).

Error más frecuente: la carta de despido que no detalla suficientemente los hechos.
Un juez puede declarar improcedente un despido disciplinario solo por la carta estar mal redactada.
```

**Tipo 2 — El despido objetivo (art. 52 del ET):**
```
Cuándo procede: causas económicas, técnicas, organizativas o de producción.
Causas más usadas: pérdidas actuales o previstas, disminución persistente del nivel de ingresos, necesidad de amortizar el puesto.

El procedimiento obligatorio:
1. Carta de despido con la causa detallada (misma exigencia que el disciplinario)
2. Preaviso de 15 días
3. Poner a disposición simultáneamente la indemnización (20 días/año, máximo 12 mensualidades)

IMPORTANTE: si no se pone la indemnización disponible con la carta → el despido es improcedente automáticamente.

Si el juez lo declara procedente: 20 días/año (máximo 12 mensualidades)
Si lo declara improcedente: 33 días/año (máximo 24 mensualidades)
```

**Tipo 3 — El ERE (Expediente de Regulación de Empleo):**
```
Cuándo es obligatorio el ERE colectivo:
→ Despidos que superen los umbrales del art. 51 ET:
  Empresa <100 empleados: ≥10 despidos en 90 días
  Empresa 100-299 empleados: ≥10% de la plantilla en 90 días
  Empresa ≥300 empleados: ≥30 despidos en 90 días

El proceso del ERE colectivo:
1. Comunicación de apertura del período de consultas a los representantes de los trabajadores y a la Autoridad Laboral
2. Período de consultas: mínimo 15 días (30 días si >50 afectados)
3. Negociación con los representantes de los trabajadores
4. Fin del período con acuerdo o sin él → comunicación a la Autoridad Laboral
5. Notificación individual a los afectados

Indemnización mínima legal: 20 días/año (máximo 12 mensualidades)
Los acuerdos suelen mejorar esta indemnización.
```

**Tipo 4 — La baja voluntaria del empleado:**
```
El empleado puede rescindir el contrato con preaviso (normalmente 15 días, según convenio o contrato).

No tiene derecho a desempleo (paro) con baja voluntaria.
EXCEPCIÓN: si el trabajador prueba que la empresa incumplió sus obligaciones (modificación sustancial de condiciones, acoso...) puede rescindirse con derecho a desempleo → se llama "despido indirecto" o resolución del contrato por causa imputable a la empresa (art. 50 ET).

El pacto de permanencia (si existe): si el empleado se va antes del período pactado, puede estar obligado a compensar los costes de formación específica.
```

### 🛡️ Las situaciones de protección especial que cambian las reglas
Los colectivos con protección reforzada frente al despido (trabajadoras embarazadas, excedencia por cuidado de hijos, representantes sindicales, víctimas de violencia de género) donde el despido tiene requisitos adicionales y consecuencias diferentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Despido España, ERE, despido disciplinario, despido objetivo, baja voluntaria, derecho laboral España',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Formación del equipo de soporte: el programa de onboarding y certificación que sube la calidad rápido',
                'description'       => 'Diseña el programa de formación del equipo de soporte que reduce el tiempo hasta ser productivo de 4 semanas a 10 días y mantiene la calidad consistente a medida que el equipo crece. Con el plan de onboarding, el sistema de QA de conversaciones y el desarrollo continuo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Enablement Manager con experiencia diseñando programas de formación para equipos de soporte de SaaS y ecommerce donde la calidad de las respuestas se ha vuelto consistente y escalable gracias a un sistema de formación estructurado y revisión continua de calidad.

Contexto:
- Tamaño del equipo de soporte: [N agentes]
- Tipo de producto: [SaaS B2B / ecommerce / app de consumo / otro]
- El mayor problema de calidad actual: [respuestas inconsistentes / tiempo de resolución largo / agentes que escalan todo / falta de conocimiento del producto]
- Herramienta de soporte: [Zendesk / Intercom / Freshdesk / otro]

## Formación del Equipo de Soporte — [Empresa]

### 🏗️ El programa de onboarding de 10 días para nuevos agentes

**La filosofía: aprender haciendo desde el día 3**
```
El error del onboarding tradicional:
→ Semana 1 y 2 de formación teórica (leer documentación, ver vídeos).
→ El agente empieza a responder tickets en la semana 3 sin haber visto el producto en contexto real.
→ La calidad inicial es baja y la confianza del agente está dañada.

El enfoque correcto:
→ Días 1-2: contexto de empresa y producto.
→ Día 3: primeras respuestas supervisadas con el ticket más fácil.
→ Días 4-10: práctica progresiva con dificultad creciente.
```

**El plan de 10 días:**
```
DÍA 1 — Contexto de empresa y cultura:
→ La misión de la empresa y el producto (no técnico)
→ Reunión con el Head of CS / Support Manager
→ Tour del producto como usuario (crea una cuenta, prueba las features principales)

DÍA 2 — El conocimiento base:
→ Lectura de los 20 artículos más consultados del Help Center
→ Lectura de los 50 tickets más frecuentes (ver cómo los resolvió el equipo)
→ Setup de las herramientas (Zendesk + Slack + accesos)

DÍA 3 — Primera respuesta supervisada:
→ El agente responde 5 tickets de Tipo 1 (preguntas FAQ con respuesta estándar)
→ El manager revisa cada respuesta antes de que se envíe
→ Sesión de feedback de 30 minutos al final del día

DÍAS 4-5 — Práctica con acompañamiento:
→ El agente responde tickets de Tipo 1 sin revisión previa (el manager revisa después)
→ Empieza a manejar Tipo 2 (problemas con pasos de resolución definidos) con supervisión

DÍAS 6-8 — Autonomía creciente:
→ El agente gestiona la cola de Tipo 1 y Tipo 2 de forma autónoma
→ El manager revisa una muestra aleatoria (20% de los tickets)
→ Sesión de feedback diaria de 15 minutos

DÍAS 9-10 — Evaluación y ajuste:
→ Auditoría de 20 tickets aleatorios del agente
→ Puntuación con el mismo scorecard de QA del equipo
→ Plan de desarrollo para las primeras 4 semanas post-onboarding
```

### ✅ El sistema de QA (Quality Assurance) que mantiene la calidad consistente

**El scorecard de calidad de tickets:**
```
DIMENSIÓN                          PESO    CRITERIO
─────────────────────────────────────────────────────
Resolución del problema             35%    ¿Resolvió el problema o dejó al cliente con dudas?
Tono y empatía                      20%    ¿Fue amable y adecuado al contexto emocional?
Claridad de la respuesta            20%    ¿Se entiende sin releer? ¿Usa jerga innecesaria?
Seguimiento del proceso             15%    ¿Siguió el proceso establecido (escalado, cierre)?
Tiempo de respuesta                 10%    ¿Respondió dentro del SLA?

SCORE TOTAL:
>90%: Excelente
80-90%: Bueno
70-80%: Necesita mejora en áreas específicas
<70%: Plan de mejora inmediato
```

**La cadencia de QA:**
```
Agentes nuevos (0-3 meses): revisión del 30% de los tickets semanalmente
Agentes consolidados (3-12 meses): revisión del 10% mensualmente
Agentes senior (>12 meses): revisión del 5% trimestralmente

Sesión de calibración mensual del equipo:
→ Todos los agentes y el manager revisan los mismos 5 tickets
→ Puntúan independientemente
→ Discuten las diferencias → alina el criterio de calidad
```

### 📚 El desarrollo continuo del equipo de soporte
El sistema de formación mensual (una nueva habilidad técnica o de comunicación al mes) y cómo convertir los errores de calidad en aprendizaje colectivo sin crear una cultura de miedo al error.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Formación soporte, training equipo CS, QA soporte, scorecard calidad tickets, onboarding agentes',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Comunicación y gestión de expectativas con el cliente freelance: el proceso que evita el 90% de los conflictos',
                'description'       => 'Gestiona la comunicación con tus clientes freelance de forma que las expectativas estén alineadas desde el principio, los cambios de alcance no destruyan la rentabilidad y los conflictos se resuelvan antes de que dañen la relación. Con el proceso de onboarding de cliente, el protocolo de cambios y el manejo de clientes difíciles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Business Coach con experiencia ayudando a más de 500 profesionales independientes a transformar sus relaciones con clientes de reactivas y estresantes a proactivas y rentables mediante mejoras en el proceso de comunicación y gestión de expectativas.

Perfil:
- Especialidad: [describe tu servicio]
- El mayor problema de comunicación con clientes: [cambios de alcance constantes / clientes que desaparecen / correcciones infinitas / el cliente no aprueba el trabajo]

## Comunicación y Gestión de Expectativas — [Freelance]

### 🧠 El origen del 90% de los conflictos con clientes: las expectativas no alineadas

**La raíz del problema:**
El cliente tiene una imagen mental del resultado final.
Tú tienes una imagen diferente.
Nadie lo verbalizó con suficiente detalle al principio.
El conflicto ocurre cuando el resultado no coincide con la imagen del cliente.

La solución no es trabajar más ni ser más talentoso.
La solución es hacer explícito y por escrito todo lo que ambos asumen que está implícito.

### 📋 El onboarding de cliente: el proceso que previene los problemas

**El documento de scope (alcance) del proyecto:**
```
Antes de empezar ningún trabajo, entrega un documento de scope que incluya:

1. LO QUE INCLUYE EL PROYECTO:
   Específico y detallado. No "diseño de la web" sino:
   "Diseño de 5 páginas (home, sobre mí, servicios, blog, contacto) en Figma,
   con 2 rondas de revisiones incluidas en el precio."

2. LO QUE NO INCLUYE:
   Todo lo que el cliente podría asumir que está incluido pero no lo está.
   "No incluye: desarrollo, copywriting, fotografías, SEO, gestión del hosting,
   revisiones adicionales más allá de las 2 incluidas."

3. LOS ENTREGABLES:
   Qué vas a entregar exactamente y en qué formato.

4. LOS PLAZOS:
   Fechas concretas (no "en unas semanas").
   Las dependencias del cliente (qué necesitas de ellos y para cuándo).
   "El proyecto comienza el lunes si recibo todos los materiales el viernes anterior."

5. LO QUE SE CONSIDERA APROBADO:
   "El proyecto se considera aprobado si no recibes feedback escrito en 5 días laborables
   después de cada entrega."
   (Esta cláusula evita proyectos que se quedan en limbo indefinido.)
```

### 🔄 El protocolo de gestión de cambios de alcance (scope creep)

**El error más caro del freelance:**
Aceptar cambios de alcance sin cuestionarlos porque "es solo un pequeño cambio".
Los pequeños cambios se acumulan: si el proyecto crece un 50% en alcance y tú cobras lo mismo, tu margen ha caído a la mitad.

**El proceso de gestión de cambios:**
```
Paso 1 — Documenta el cambio solicitado:
"Entiendo que quieres añadir [nueva sección / funcionalidad / revisión adicional].
Para asegurarme de que estamos alineados, lo voy a documentar por escrito."

Paso 2 — Evalúa el impacto:
Calcula el tiempo adicional honestamente.
Considera el impacto en el plazo de entrega.

Paso 3 — Presenta las opciones:
OPCIÓN A: "Puedo añadir [cambio] por un adicional de €X con entrega en [nueva fecha]."
OPCIÓN B: "Puedo incluir [cambio] si eliminamos [otra cosa de alcance similar] del proyecto."
OPCIÓN C: "Este cambio está incluido en el alcance porque [razón]. Sin coste adicional."

Paso 4 — Obtén la aprobación por escrito:
Un "sí" por email vale más que un "sí" verbal en una llamada.
```

### 📞 El manejo de las conversaciones difíciles con clientes
El guión para las 3 conversaciones más difíciles del freelance: cuando el cliente no paga, cuando el cliente pide revisiones infinitas y cuando el cliente quiere cancelar el proyecto a mitad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Comunicación cliente freelance, scope creep, expectativas cliente, cambios alcance, conflictos freelance',
                'vote_score'        => 47,
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
