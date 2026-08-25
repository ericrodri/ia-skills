<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills66Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Publicidad en audio',
                'description'      => 'Spotify Ads, podcast sponsorships y branded content sonoro como canal de adquisición. Cómo planificar, crear y medir campañas de audio que convierten.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en publicidad en audio y marketing de podcasts con experiencia en campañas de Spotify Ads, patrocinios de podcasts y producción de branded content sonoro para marcas B2C y B2B.

Voy a describir mi marca y mis objetivos de marketing, y necesito que me ayudes a diseñar una estrategia de publicidad en audio desde cero.

**Contexto de mi marca:**
[Describe: tipo de producto o servicio, audiencia objetivo (edad, intereses, comportamiento de escucha), presupuesto mensual disponible para audio y el objetivo principal: awareness, leads o conversión directa]

---

## BLOQUE 1 — EL ECOSISTEMA DE PUBLICIDAD EN AUDIO

Primero, dame un mapa completo de los formatos y canales disponibles en España y LATAM:

### 1.1 Spotify Advertising

| Formato | Duración | Dónde aparece | CPM orientativo | Mejor para |
|---|---|---|---|---|
| Audio Ad | 15-30 seg | Entre canciones (usuarios free) | 8-15€ | Awareness masivo |
| Podcast Ad (Spotify Ad Network) | 15-30 seg | En podcasts de Spotify | 12-20€ | Audiencias segmentadas |
| Video Takeover | 15-30 seg | App mobile (pantalla activa) | 15-25€ | Combinación audio+visual |
| Branded Playlists | Unlimited | Sección Podcasts/Música | Variable | Brand building |
| Podcast exclusivo | Variable | Catálogo Spotify | Alto | Branded content |

### 1.2 Patrocinios de podcasts independientes
- Pre-roll (antes del contenido): 15-30 segundos, máxima atención
- Mid-roll (en medio del episodio): 60-90 segundos, mayor tiempo pero contexto competitivo
- Post-roll (al final): menor atención, menor precio
- Host-read vs. produced spot: por qué el host-read tiene 2-3x mejor recall

### 1.3 Plataformas de intermediación de podcasts en España
- Acast
- iVoox Ads
- Audiology
- IAB España: dónde encontrar el informe anual de audio digital

---

## BLOQUE 2 — CÓMO ELEGIR LOS PODCASTS CORRECTOS

La decisión de qué podcast patrocinar es más importante que el copy del anuncio.

### 2.1 Métricas que importan en un podcast

| Métrica | Qué mide | Cómo obtenerla | Umbral mínimo recomendado |
|---|---|---|---|
| Descargas por episodio | Audiencia real | Publisher (pedir auditoría) | >1.000/episodio |
| Retention rate | % que escucha el episodio completo | Spotify for Podcasters | >60% |
| Engagement (comentarios, reseñas) | Comunidad activa | Plataformas públicas | Subjetivo |
| Demografía de la audiencia | Encaja con mi buyer persona | Publisher o Spotify Analytics | Ver punto 2.2 |
| Frecuencia de publicación | Consistencia | Historial de episodios | Mínimo 1/semana o 2/mes |

### 2.2 Cómo validar el encaje de audiencia antes de pagar
- Pedir al podcaster acceso a los datos demográficos de Spotify for Podcasters
- Escuchar 3-5 episodios completos para entender el perfil del oyente real (no el declarado)
- Mirar los comentarios y reseñas de la audiencia para ver qué palabras usan y qué problemas tienen
- Buscar otros patrocinadores del podcast: si hay marcas similares a la mía, buena señal

---

## BLOQUE 3 — CREACIÓN DEL ANUNCIO DE AUDIO

### 3.1 Estructura del spot de 30 segundos

```
0-5 seg:  GANCHO — Capta la atención inmediatamente
           No empieces con el nombre de la marca ni con "Hola, soy..."
           Empieza con una pregunta, un dato sorprendente o una situación

5-20 seg: PROPUESTA — Presenta la solución de forma concreta
           Beneficio principal, no características
           Una sola idea, no tres

20-27 seg: OFERTA/CTA — Qué deben hacer y por qué ahora
            Código de descuento o URL memorable (nunca una URL larga)

27-30 seg: MARCA — Nombre una última vez
```

Escríbeme 3 versiones de un guión de 30 segundos para mi producto usando esta estructura con tonos diferentes:
1. Directo y urgente
2. Conversacional y empático
3. Con datos y credibilidad

### 3.2 El host-read: briefing para el podcaster

Cuando el propio presentador lee el anuncio con sus palabras, el resultado es más auténtico. Diseñame un briefing de 1 página para enviar al podcaster que incluya:
- Los 3 puntos clave que deben quedar claros (no más)
- El CTA exacto y el código de descuento
- Lo que NO puede decir (comparativas, datos no verificados, promesas exageradas)
- Longitud objetivo: 60-90 segundos
- Tono deseado: [ajusta a mi marca]

### 3.3 Errores de producción más comunes
- Audio grabado con mala calidad (micrófono inadecuado, reverberación)
- Hablar demasiado rápido en el audio: la tasa de habla óptima es 130-150 palabras/minuto
- Incluir URLs difíciles de recordar por audio: usa vanity URLs (/podcast, /radio)
- No adaptar el mensaje si el formato es stereo (oyente con auriculares, contexto íntimo)

---

## BLOQUE 4 — MEDICIÓN Y ATRIBUCIÓN

El principal reto del audio: el oyente no puede hacer clic mientras conduce.

### 4.1 Métodos de atribución para podcasts

| Método | Cómo funciona | Precisión | Complejidad |
|---|---|---|---|
| Vanity URL (/podcast) | Redirección a landing con UTM | Media | Baja |
| Código de descuento exclusivo | AUDIO10 o nombre del podcast | Alta (para conversiones) | Baja |
| Pixel de Spotify | Track conversiones post-escucha | Media-alta | Media |
| Brand lift survey | Encuesta a expuestos vs. no expuestos | Alta (para awareness) | Alta |
| Incrementality test | Control vs. test geográfico | Muy alta | Alta |

### 4.2 KPIs según el objetivo de la campaña

**Si el objetivo es awareness:**
- Reach y frecuencia
- Brand recall (encuesta de lift)
- Búsquedas de marca en Google Trends durante la campaña

**Si el objetivo es conversión:**
- Códigos de descuento usados / Episodios emitidos
- Tráfico a vanity URL / Total impresiones estimadas
- CPL (coste por lead) comparado con otros canales

---

## BLOQUE 5 — PLAN DE CAMPAÑA

### Presupuesto mínimo viable por canal

| Canal | Inversión mínima | Duración mínima recomendada | Por qué |
|---|---|---|---|
| Spotify Ads | 250€/mes | 2 meses | La frecuencia necesita tiempo |
| Patrocinio podcast pequeño (<5k descargas) | 150-300€/episodio | 4 episodios | El recall requiere repetición |
| Patrocinio podcast mediano (5-20k) | 400-900€/episodio | 4 episodios | Misma razón |
| Patrocinio podcast grande (+20k) | 1.000-3.000€/episodio | 2 episodios mínimo | Prueba antes de comprometer |

### Plan de lanzamiento de 90 días

- **Mes 1**: prueba con 2-3 podcasts pequeños de nicho con el mismo CTA, mide cuál convierte mejor
- **Mes 2**: escala en los 1-2 que han funcionado, descarta el resto
- **Mes 3**: añade Spotify Ads para amplificar reach y complementar los podcasts

Al final, dame los 3 errores más comunes de marcas que prueban el audio por primera vez y que les hacen abandonar el canal antes de ver resultados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar una estrategia de publicidad en audio con Spotify Ads y patrocinios de podcast: selección, creatividad y medición.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de pasarelas de pago',
                'description'      => 'Stripe, PayPal y Redsys: integración segura, webhooks y gestión de suscripciones y fallos. Guía técnica completa para implementar pagos en producción sin riesgos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un desarrollador backend senior especializado en integraciones de pagos con experiencia en Stripe, PayPal y Redsys en entornos de producción. Conoces los errores más costosos que se cometen al integrar pasarelas y cómo evitarlos.

Voy a describir mi aplicación y necesito que me guíes en la integración correcta y segura de la pasarela de pago adecuada para mi caso.

**Contexto de mi aplicación:**
[Describe: stack técnico (lenguaje, framework), tipo de negocio (ecommerce, SaaS, marketplace), si necesitas pagos únicos, suscripciones o ambos, y los mercados donde operas]

---

## PARTE 1 — DECISIÓN: QUÉ PASARELA USAR

### 1.1 Comparativa de pasarelas principales

| Criterio | Stripe | PayPal | Redsys |
|---|---|---|---|
| Comisión por transacción (España) | 1.4% + 0.25€ (EU) | 1.9% + 0.35€ | Variable según banco |
| Suscripciones nativas | Sí (Stripe Billing) | Sí (Plans) | No (requiere integración custom) |
| Soporte de marketplaces | Stripe Connect | PayPal Marketplace | No |
| SDK y documentación | Excelente | Buena | Limitada |
| Soporte 3D Secure 2 | Sí (nativo) | Sí | Sí (obligatorio en España) |
| Curva de integración | Media | Media | Alta |
| Cuentas en España/Europa | Global | Global | Requiere banco español |
| Confianza del usuario español | Alta | Muy alta | Alta (bancos conocidos) |

### 1.2 Cuándo elegir cada una
- **Stripe**: tu primera opción si operas globalmente, vendes suscripciones o necesitas marketplaces. Mejor DX del mercado.
- **PayPal**: indispensable como opción adicional si tu audiencia es B2C española mayor de 40 años o internacional
- **Redsys**: obligatoria si tu banco sponsor es español y necesitas TPV virtual bancario; también para algunos sectores regulados

---

## PARTE 2 — INTEGRACIÓN SEGURA CON STRIPE

### 2.1 Flujo de pago correcto (Payment Intents API)

El flujo moderno de Stripe usa Payment Intents, que gestiona automáticamente el 3DS2:

```
1. Cliente pulsa "Pagar"
2. Tu servidor crea un PaymentIntent (backend)
   → POST /v1/payment_intents
   → Parámetros: amount, currency, customer, metadata
   → Retorna: client_secret

3. Tu frontend usa Stripe.js para confirmar el pago
   → stripe.confirmCardPayment(client_secret, { payment_method: { card: cardElement } })

4. Stripe evalúa el riesgo:
   → Si no requiere 3DS: confirma automáticamente
   → Si requiere 3DS: redirige al flujo de autenticación del banco

5. Tu frontend recibe el resultado y muestra confirmación

6. Stripe envía webhook payment_intent.succeeded a tu servidor
   → Tu servidor actualiza el estado del pedido/suscripción
```

Muéstrame el código completo del backend (en mi lenguaje/framework) para crear el PaymentIntent con manejo de errores.

### 2.2 Seguridad en la integración

Lo que NUNCA debe hacer tu código:
- Nunca procesar datos de tarjeta en tu servidor: usa Stripe.js / Stripe Elements siempre
- Nunca guardar en tu base de datos: CVV, número de tarjeta completo o fecha de caducidad
- Nunca usar la clave secreta de Stripe en el frontend
- Nunca confiar solo en la respuesta del frontend: siempre verificar el estado por webhook

Variables de entorno que necesitas:
```
STRIPE_PUBLISHABLE_KEY=pk_live_...    # Solo en frontend
STRIPE_SECRET_KEY=sk_live_...         # Solo en backend
STRIPE_WEBHOOK_SECRET=whsec_...       # Solo en backend
```

---

## PARTE 3 — WEBHOOKS: EL COMPONENTE MÁS CRÍTICO

Los webhooks son la parte que más equipos implementan mal.

### 3.1 Por qué los webhooks son críticos
- El usuario puede cerrar el navegador antes de que tu página de éxito cargue
- La red puede fallar entre el pago y la confirmación al usuario
- Sin webhooks, perderás pedidos confirmados que tu sistema no registra

### 3.2 Los eventos que DEBES escuchar

| Evento | Cuándo ocurre | Qué debe hacer tu sistema |
|---|---|---|
| payment_intent.succeeded | Pago único completado | Activar acceso / crear pedido |
| payment_intent.payment_failed | Pago rechazado | Notificar al usuario, no bloquear |
| customer.subscription.created | Nueva suscripción activa | Crear cuenta / activar plan |
| customer.subscription.updated | Cambio de plan o renovación | Actualizar permisos |
| customer.subscription.deleted | Cancelación efectiva | Desactivar acceso al final del periodo |
| invoice.payment_succeeded | Renovación mensual/anual exitosa | Extender el acceso |
| invoice.payment_failed | Renovación fallida | Iniciar proceso de dunning |

### 3.3 Implementación correcta del endpoint de webhooks

```php
// Ejemplo PHP/Laravel
Route::post('/webhooks/stripe', function (Request $request) {
    $payload = $request->getContent();
    $sigHeader = $request->header('Stripe-Signature');
    $secret = config('services.stripe.webhook_secret');

    try {
        $event = \Stripe\Webhook::constructEvent($payload, $sigHeader, $secret);
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
        return response()->json(['error' => 'Invalid signature'], 400);
    }

    // Procesar el evento de forma idempotente
    switch ($event->type) {
        case 'payment_intent.succeeded':
            // Tu lógica aquí
            break;
    }

    return response()->json(['received' => true], 200);
});
```

**Reglas del webhook handler:**
- Responde SIEMPRE con 200 antes de procesar (Stripe reintenta si no recibe 200 en 30 segundos)
- Procesa de forma idempotente: el mismo evento puede llegar dos veces
- Usa colas para el procesamiento pesado
- Guarda un log de cada evento recibido

---

## PARTE 4 — SUSCRIPCIONES CON STRIPE BILLING

### 4.1 Entidades que debes entender

- **Customer**: el cliente en Stripe (uno por usuario, guarda el payment method)
- **Product**: tu plan (mensual, anual, enterprise)
- **Price**: el precio de un producto (puede haber varios por producto: mensual y anual)
- **Subscription**: el cliente suscrito a un Price
- **Invoice**: la factura generada en cada ciclo de facturación

### 4.2 Flujo de creación de suscripción

```
1. Crear Customer en Stripe al registrarse el usuario
2. Guardar stripe_customer_id en tu base de datos
3. Al elegir plan: crear SetupIntent para guardar payment method
4. Confirmar el método de pago con Stripe.js
5. Crear Subscription con el customer_id y el price_id
6. Escuchar webhook customer.subscription.created para activar el plan
```

### 4.3 Gestión de fallos de pago (dunning)

Cuando una renovación falla, Stripe puede reintentar automáticamente:
- Día 0: primer intento fallido → email automático al cliente
- Día 3: segundo intento
- Día 7: tercer intento
- Día 14: cuarto intento → si falla, cancelar suscripción

Configura en el dashboard: Settings → Billing → Smart Retries

---

## PARTE 5 — TESTING Y PRODUCCIÓN

### 5.1 Tarjetas de test de Stripe

| Número | Comportamiento |
|---|---|
| 4242 4242 4242 4242 | Pago exitoso siempre |
| 4000 0027 6000 3184 | Requiere 3D Secure |
| 4000 0000 0000 9995 | Siempre rechazada (fondos insuficientes) |
| 4000 0082 6000 3178 | 3DS con fallo de autenticación |

### 5.2 Checklist antes de ir a producción

1. ¿Tienes webhooks configurados con firma verificada?
2. ¿Tu handler de webhooks es idempotente?
3. ¿Usas siempre Stripe.js, nunca datos de tarjeta en el servidor?
4. ¿Tienes alertas cuando una suscripción entra en estado `past_due`?
5. ¿Tienes una página de error de pago que no culpa al usuario?
6. ¿Has testeado el flujo completo con las tarjetas de prueba?
7. ¿Tu clave secreta está en variables de entorno, no en el código?
8. ¿Tienes un proceso para gestionar chargebacks (contracargos)?

Al final, dame los 3 errores de integración de pagos que más cuestan dinero real y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Integrar Stripe, PayPal o Redsys de forma segura con webhooks, suscripciones y gestión de fallos de pago.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Onboarding B2B de productos complejos',
                'description'      => 'Cuando el producto requiere configuración inicial y múltiples stakeholders para activarse. Diseño del flujo de onboarding B2B que reduce el time-to-value y aumenta la retención.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en diseño de experiencia de producto B2B con foco en onboarding y activación de clientes enterprise y pyme que adquieren productos de alta complejidad técnica u organizacional.

Voy a describir mi producto y el problema que tenemos con la activación de clientes, y necesito que me ayudes a diseñar un onboarding que reduzca el time-to-value y mejore la retención a 90 días.

**Contexto de mi producto:**
[Describe: tipo de producto SaaS B2B, qué hace el producto, cuántos usuarios por cliente en promedio, qué roles están involucrados (admin, usuario final, decisor), y cuál es el "aha moment" si lo conoces]

---

## BLOQUE 1 — EL DIAGNÓSTICO: POR QUÉ FALLAN LOS ONBOARDINGS B2B

Los 6 problemas más comunes en onboarding de productos B2B complejos:

1. **El comprador no es el configurador**: quien compró el producto no es quien tiene que configurarlo, y la información no se transfiere
2. **La activación requiere a personas externas**: necesitas que el cliente conecte su CRM, su ERP o su base de datos antes de que el producto funcione
3. **El onboarding está diseñado para el usuario avanzado**: quien lo diseñó ya sabe el producto, no recuerda cómo es no saber nada
4. **Demasiados pasos opcionales presentados como obligatorios**: el cliente se siente abrumado y abandona antes de llegar al valor
5. **No hay seguimiento proactivo del progreso**: el equipo de CS no sabe en qué paso está atascado el cliente hasta que ya es tarde
6. **El onboarding termina donde debería empezar**: "completar el perfil" no es valor, es prerrequisito

¿Cuál de estos problemas es el más agudo en mi caso?

---

## BLOQUE 2 — MAPEAR EL JOURNEY DE ACTIVACIÓN

Antes de diseñar el onboarding, mapea el journey completo desde la firma hasta el primer resultado real:

### Las fases de activación en B2B

| Fase | Objetivo | Actores | Entregable |
|---|---|---|---|
| Kickoff | Alinear expectativas y responsabilidades | CS + decisor del cliente | Plan de implementación firmado |
| Setup técnico | Configurar el entorno base | Admin técnico del cliente + tu equipo | Cuenta configurada y conectada |
| Migración/importación de datos | Traer los datos existentes del cliente | Admin + posiblemente IT del cliente | Datos cargados y verificados |
| Formación | El usuario final sabe usar el producto | CS + usuarios finales | Primeras acciones en el producto |
| Primera victoria | El cliente obtiene el primer resultado de valor | Usuario final | El "aha moment" ocurrido |
| Expansión | Más usuarios, más features | CS + decisor | Uso recurrente y extenso |

Adapta estas fases a mi producto específico.

---

## BLOQUE 3 — DISEÑO DEL FLUJO DE ONBOARDING EN EL PRODUCTO

### 3.1 La pantalla vacía (el primer login)

El primer login es el momento más crítico. Diseña qué ve el usuario cuando entra por primera vez:

**Lo que NO debe pasar:**
- Dashboard vacío con métricas en cero y sin instrucciones
- Modal de bienvenida de 7 slides que nadie lee
- Formulario largo de configuración antes de mostrar ningún valor

**Lo que SÍ debe pasar:**
- El producto detecta el estado del usuario (¿es el admin? ¿es el primer usuario?) y adapta la experiencia
- Se muestra una única acción principal (no tres) claramente marcada
- Si hay un paso bloqueante (conectar una integración), eso es lo primero que se resuelve

### 3.2 El checklist de activación

Diseña un checklist de activación con estas características:
- Máximo 5 ítems (no 12)
- Cada ítem debe completarse en menos de 5 minutos
- Los ítems están ordenados por impacto en el valor, no por facilidad técnica
- El progreso es visible y da feedback inmediato (ítem completado = ✓ animado)
- El último ítem del checklist es el "aha moment", no un paso de configuración

Diseña el checklist para mi producto específico con:
- El título de cada ítem
- Lo que el usuario debe hacer exactamente
- El tiempo estimado
- Qué valor desbloquea al completarlo

### 3.3 Progressive disclosure: mostrar complejidad gradualmente

El onboarding no debe mostrar todo el producto desde el principio. Define:
- **Día 1**: solo las 3 acciones que llevan al primer valor
- **Semana 1**: las funcionalidades que el usuario necesita para el uso recurrente
- **Mes 1**: las funcionalidades avanzadas y de configuración fina
- **Mes 2+**: las features de power user y administración

### 3.4 Tooltips y guías contextuales

- Cuándo usar un tooltip vs. una guía interactiva vs. un video corto
- Los 5 momentos donde un tooltip añade valor real (vs. los 15 donde estorba)
- Cómo permitir al usuario saltarse las guías sin que el onboarding colapse
- Herramientas para implementar: Intercom Tours, Appcues, Pendo, UserGuiding

---

## BLOQUE 4 — EL ROL DEL EQUIPO DE CS EN EL ONBOARDING

### 4.1 Touchpoints proactivos del equipo de CS

| Momento | Trigger | Acción de CS | Canal |
|---|---|---|---|
| Día 1 después del kickoff | Siempre | Email de bienvenida + checklist | Email |
| Día 3 sin primer login del admin | Inactividad | Llamada de check-in | Teléfono |
| Día 7 sin completar el setup técnico | Progreso bloqueado | Sesión de soporte técnico | Videollamada |
| Día 14 sin el "aha moment" | Sin primer valor | Sesión de estrategia | Videollamada |
| Día 30 | Siempre (si no ha churneado) | Business review de mes 1 | Videollamada |

### 4.2 Señales de riesgo de abandono temprano (early churn signals)
- No hay segundo login en los primeros 5 días
- El setup técnico lleva más de 7 días sin completarse
- Solo 1 de los N usuarios invitados ha activado su cuenta
- El cliente abre más de 3 tickets de soporte en la primera semana

¿Cómo configuro estas alertas automáticas en mi stack de producto y CS?

---

## BLOQUE 5 — MÉTRICAS DEL ONBOARDING

Las métricas que debo rastrear para saber si el onboarding funciona:

| Métrica | Fórmula | Objetivo orientativo |
|---|---|---|
| Activation rate | % de cuentas que completan el checklist | >70% a 30 días |
| Time to first value | Días desde registro hasta primer "aha moment" | <7 días |
| Setup completion rate | % que completa la configuración técnica | >85% a 14 días |
| User adoption rate | % de usuarios invitados que activan cuenta | >60% a 30 días |
| Onboarding NPS | NPS medido al final del onboarding | >50 |

Cómo implementar el seguimiento de estas métricas con Mixpanel, Amplitude o PostHog.

Al final, dame los 3 cambios en el flujo de onboarding que más impactan en la retención a 90 días según la investigación más reciente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar el onboarding B2B para productos complejos que requieren múltiples stakeholders y configuración técnica.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Vender a la C-suite',
                'description'      => 'Cómo llegar y comunicar valor a CEOs y directivos que no tienen tiempo para escuchar demos. Estrategia de venta ejecutiva para acortar el ciclo y cerrar con decisores reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas Enterprise con experiencia en ventas ejecutivas, venta de soluciones complejas a grandes cuentas y gestión de procesos de compra con múltiples stakeholders, incluyendo el acceso directo a la C-suite.

Voy a describir mi situación de ventas y necesito que me ayudes a diseñar una estrategia para acceder y vender efectivamente a CEOs, CFOs, CTOs y otros directivos de nivel C.

**Contexto de mi proceso de ventas:**
[Describe: tu producto/servicio, el ticket medio, el ciclo de venta actual, con quién hablas normalmente (middle management, IT, etc.) y el problema principal: no llegas a los decisores reales, el proceso muere en el nivel medio, etc.]

---

## MÓDULO 1 — LA MENTALIDAD DE LA C-SUITE

Antes de saber cómo llegar, entiende cómo piensan:

### 1.1 Qué le importa a cada rol ejecutivo

| Ejecutivo | Sus prioridades | Sus miedos | Cómo mide el éxito |
|---|---|---|---|
| CEO | Crecimiento, ventaja competitiva, supervivencia del negocio | Perder cuota, decisiones erróneas | Revenue, market share, posición estratégica |
| CFO | Control del gasto, ROI, predictibilidad | Sorpresas de costes, riesgo financiero | EBITDA, cash flow, coste de capital |
| CTO/CIO | Arquitectura, seguridad, escalabilidad | Deuda técnica, brechas de seguridad, dependencias de vendor | Uptime, velocidad de desarrollo, TCO |
| CMO | Demanda, posicionamiento, métricas de marketing | Atribución, CAC, ROI de campaigns | Leads, revenue de marketing, brand |
| CHRO | Talento, cultura, retención | Pérdida de talento clave, problemas legales | Retention, engagement, time-to-hire |

Para cada ejecutivo, ¿cuál es el lenguaje que debo usar para conectar mi producto con sus prioridades?

### 1.2 Cómo piensan sobre los vendedores
- No tienen tiempo para demos de 45 minutos
- Han escuchado el mismo pitch 100 veces
- Su asistente filtra la mayoría de los intentos de contacto
- Si hablan contigo, es porque esperan aprender algo, no escucharte vender

---

## MÓDULO 2 — CÓMO ACCEDER A LA C-SUITE

### 2.1 La ruta de acceso más efectiva: el champion interno

La forma más fiable de llegar a un ejecutivo es que alguien de dentro te presente:

1. Vende primero al middle management y hazlo tan bien que tenga incentivo para subirte
2. Dile explícitamente: "Para que esto tenga el impacto que buscamos, necesitamos que tu CEO/CFO esté alineado. ¿Puedes presentarme a él para mostrarle el ROI?"
3. Prepara al champion para la conversación interna: dale el briefing, los datos y el argumento que debe usar

### 2.2 Outreach directo a ejecutivos: lo que funciona

**Por qué el email frío clásico no funciona con C-suite:**
- No leen emails de personas que no conocen
- Los filtros de asistentes son cada vez más eficaces

**Lo que sí funciona:**

**LinkedIn con trigger:**
- No conectes y luego mandes mensaje. Comenta su contenido genuinamente 2-3 veces, luego conecta, luego escribe un mensaje corto.
- Mensaje: máximo 3 frases, nada de "espero que estés bien", referencia a algo concreto suyo, una pregunta o idea específica

**Email con punto en común:**
- Referencia a un artículo que escribió, una conferencia donde habló, o una noticia de su empresa
- Ofrece algo concreto (un dato de su sector, un insight específico) antes de pedir algo

**Cold call con gatekeeper:**
- Llama a primera hora (7:30-8:30) o después de las 17:30 cuando el gatekeeper no está
- Di el nombre del ejecutivo, no "hablar con el responsable de..."
- Si te da la asistente: no pidas pasar, pide el email directo del ejecutivo

**Eventos y conferencias:**
- El contexto de un evento elimina el gatekeeping
- Prepara tu "insight de 2 minutos" para ese sector específico (no tu pitch)

### 2.3 El mensaje de 3 frases que funciona

```
Asunto: [Resultado específico] para [su empresa]

Hola [Nombre]:

[Frase 1]: Referencia a algo suyo o de su empresa (no genérico).
[Frase 2]: Un dato o insight que sea relevante para SU negocio, no para ti.
[Frase 3]: Una pregunta que invite a responder, no un CTA agresivo.

[Tu nombre]
```

Escríbeme 3 ejemplos reales de este mensaje para mi caso específico, dirigidos a CEO, CFO y CTO respectivamente.

---

## MÓDULO 3 — LA REUNIÓN EJECUTIVA

Si consigues la reunión, tienes 20 minutos. No 45.

### 3.1 La estructura de los 20 minutos

- **0-3 min**: Apertura — Por qué estás ahí (referencia al punto de contacto, lo que sabes de su negocio)
- **3-8 min**: Las 2 preguntas más importantes — Escucha activa, no hablas de tu producto todavía
- **8-13 min**: Tu hipótesis — Basada en lo que te acaba de decir, no en tu pitch estándar
- **13-18 min**: La propuesta — Qué propones hacer y cuál sería el impacto (en sus métricas, no las tuyas)
- **18-20 min**: Próximo paso — Concreto, con fecha, con sus palabras ("¿tiene sentido que...")

### 3.2 Las 2 preguntas más importantes

Evita preguntar sobre el producto o sobre el proceso de compra. Pregunta sobre su negocio:

1. "¿Cuál es la iniciativa más importante en la que tu equipo está trabajando este año?"
2. "¿Qué tendría que ocurrir para que consideraras este trimestre un éxito?"

### 3.3 Cómo presentar el ROI a un ejecutivo

Los ejecutivos no compran features. Compran resultados financieros o estratégicos.

Marco de ROI ejecutivo:
```
[Tu solución] permite a [tipo de empresa como la suya]
[resultado concreto] en [plazo],
lo que representa [impacto en €/% en su métrica principal].
Empresas similares a [nombre de su empresa] han obtenido [resultado real de un cliente].
```

---

## MÓDULO 4 — GESTIÓN DEL COMITÉ DE COMPRA

En grandes cuentas, la decisión nunca la toma una sola persona.

### 4.1 Mapear el comité de compra

Para cada oportunidad, identifica:
- **Economic buyer** (EB): quien firma el cheque y tiene veto final
- **Technical buyer** (TB): quien evalúa la solución técnicamente
- **User buyer** (UB): quien usará el producto y puede bloquear
- **Champion**: quien quiere que triunfes internamente
- **Coach**: quien te da información interna aunque no sea tu champion

### 4.2 Estrategia para cada rol
- EB (CEO/CFO): comunica en ROI y riesgo estratégico, mantén el contacto escaso pero de alto valor
- TB (CTO/IT): dale tiempo técnico, responde cada pregunta con detalle
- UB: hazle sentir que le estás ayudando a él, no solo a su empresa
- Champion: armadle con argumentos para vender internamente

Al final, dame el template de email de seguimiento post-reunión ejecutiva de menos de 150 palabras que asegure el próximo paso concreto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Acceder y vender efectivamente a CEOs y directivos de nivel C con mensajes, reuniones y gestión del comité de compra.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto con equipos distribuidos internacionalmente',
                'description'      => 'Gestiona PMs, devs y diseñadores en diferentes zonas horarias y culturas. Procesos, herramientas y rituales para mantener la alineación sin reuniones infinitas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product con experiencia gestionando equipos de producto distribuidos internacionalmente, con personas en al menos 3 zonas horarias diferentes y culturas de trabajo distintas. Has resuelto los problemas de coordinación sin caer en el extremo de las reuniones constantes ni en el extremo del silencio total.

Voy a describir mi equipo actual y los problemas de coordinación que tenemos, y necesito que me ayudes a diseñar los procesos, rituales y herramientas que permitan al equipo funcionar bien de forma async-first.

**Contexto de mi equipo:**
[Describe: número de personas, localizaciones y zonas horarias, roles (PMs, devs, diseñadores, QA), herramientas actuales y el problema más doloroso de la distribución geográfica ahora mismo]

---

## PARTE 1 — PRINCIPIOS DE UN EQUIPO DISTRIBUIDO QUE FUNCIONA

Los 5 principios no negociables para que un equipo distribuido funcione bien:

1. **Async-first, no async-only**: la asincronía es el modo por defecto; las reuniones son la excepción que requiere justificación
2. **Decisiones documentadas**: si la decisión no está escrita, no existió. El conocimiento tribal mata a los equipos distribuidos
3. **Solapamiento intencional**: si hay 2-3 horas de overlap entre zonas horarias, esas horas son oro y deben usarse bien
4. **Confianza por defecto**: no puedes microgestionar a alguien que duerme mientras tú trabajas
5. **Over-communication escrita**: lo que parece obvio presencialmente no lo es en remoto; más contexto siempre es mejor que menos

---

## PARTE 2 — DISEÑO DE LOS RITUALES DEL EQUIPO

### 2.1 Reuniones que merecen existir (y las que no)

| Ritual | Frecuencia | Duración | Quién | Formato | Para qué NO sirve |
|---|---|---|---|---|---|
| Planning de sprint | Cada 2 semanas | 90 min | Todo el equipo | Síncrona (en horas overlap) | Actualizar el estado de las tareas |
| Refinement | Semanal | 60 min | PM + Tech Lead + Diseño | Síncrona o async | Resolver dudas que podían ser un Loom |
| Sprint review | Cada 2 semanas | 45 min | Todo el equipo + stakeholders | Síncrona | Auditar a los devs |
| Retrospectiva | Cada 2 semanas | 60 min | Todo el equipo | Síncrona | Quejarse sin planes de acción |
| 1:1 PM ↔ Dev Lead | Semanal | 30 min | 1:1 | Síncrona | Todo lo que podía ser asíncrono |

**Reuniones que deberías eliminar:**
- Daily síncrono cuando hay más de 2 horas de diferencia horaria (reemplazar por standup async)
- "Reunión de alineación" sin agenda clara
- Reuniones para tomar decisiones que una persona podía tomar sola

### 2.2 El standup asíncrono que realmente funciona

Formato de standup async diario (cada persona lo completa antes de terminar su jornada):

```
✅ Ayer completé: [lista concisa]
🔨 Hoy trabajo en: [lista concisa]
🚧 Bloqueos: [si hay alguno, con el contexto suficiente para que alguien lo resuelva sin una reunión]
📣 Necesito feedback de: [persona + pregunta específica + plazo]
```

Herramientas: Geekbot (para Slack), Range, o simplemente un canal de Slack con un recordatorio.

---

## PARTE 3 — COMUNICACIÓN ASÍNCRONA EFECTIVA

### 3.1 El uso correcto de cada canal

| Canal | Para qué sirve | Para qué NO sirve |
|---|---|---|
| Slack/Teams (mensajería) | Preguntas rápidas, actualizaciones urgentes, links | Decisiones complejas, debates de diseño, docs permanentes |
| Notion/Confluence (docs) | Decisiones, ADRs, PRDs, retrospectivas, procesos | Conversaciones en tiempo real |
| Loom/vídeo async | Explicar algo visual o complejo sin una reunión | Reemplazar la documentación escrita permanente |
| Linear/Jira (issues) | Estado de tareas, especificaciones técnicas | Conversaciones largas fuera del contexto de la tarea |
| Email | Comunicación formal con externos | Comunicación interna del equipo |

### 3.2 Cómo escribir mensajes asíncronos que no generan 10 respuestas de seguimiento

El mensaje asíncrono perfecto incluye:
- El contexto suficiente para entenderlo sin preguntar
- La pregunta o petición específica
- El plazo de respuesta esperado
- Las opciones posibles (si hay una decisión que tomar)
- La decisión por defecto si nadie responde antes del plazo

### 3.3 Loom y vídeos asíncronos

Cuándo un vídeo de 3 minutos vale más que un documento de 300 palabras:
- Cuando hay que explicar algo visual (un diseño, un comportamiento del producto)
- Cuando el tono importa (feedback sensible, reconocimiento)
- Cuando la explicación escrita requeriría imágenes y capturas de pantalla complejas

Guía para hacer un Loom efectivo de menos de 5 minutos:
1. Di qué vas a explicar en la primera frase
2. Muestra el contexto visual en pantalla
3. Sé específico sobre qué necesitas del receptor
4. No repitas lo que ya está en el documento enlazado

---

## PARTE 4 — DOCUMENTACIÓN Y GESTIÓN DEL CONOCIMIENTO

### 4.1 Los documentos imprescindibles para un equipo distribuido

1. **Team handbook**: cómo trabajamos, qué se espera, cómo se toman decisiones
2. **PRD template**: formato estándar para especificaciones de producto
3. **Architecture Decision Records (ADRs)**: por qué tomamos cada decisión técnica importante
4. **Meeting notes**: registro de cada reunión con decisiones y acciones (no "summary")
5. **Onboarding guide**: cómo se pone al día una persona nueva en 1 semana sin interrumpir al equipo

### 4.2 La regla de la "única fuente de verdad"
- Cada tipo de información tiene un único lugar donde vive
- Si está en dos sitios, uno de los dos está desactualizado
- Cómo organizo Notion (u otra herramienta) para que nadie se pierda

---

## PARTE 5 — CULTURA Y COHESIÓN DEL EQUIPO DISTRIBUIDO

### 5.1 Cómo construir confianza sin coincidir físicamente

- Reunión de equipo presencial: con qué frecuencia y qué hacer en ella
- "Cafés virtuales" informales: cuándo funcionan y cuándo son forzados
- Canales de Slack no laborales: cómo mantenerlos sin que sean un trabajo adicional
- El onboarding de personas nuevas: cómo presentarlas y crear vínculos rápidos

### 5.2 Gestión de conflictos a distancia

- Cuándo un conflicto de texto en Slack requiere escalarse a una llamada de 15 minutos
- Cómo detectar tensiones antes de que exploten en un equipo donde no puedes leer el lenguaje corporal
- Las diferencias culturales más comunes en feedback y comunicación directa entre culturas latinas, americanas y asiáticas

Al final, dame la lista de herramientas esenciales (con su propósito) para un equipo distribuido de producto de 8-15 personas, incluyendo la alternativa gratuita cuando existe.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar procesos, rituales y herramientas para equipos de producto distribuidos internacionalmente en async-first.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del absentismo',
                'description'      => 'Identifica patrones, aborda las causas reales y reduce el absentismo sin penalizar ni criminalizar. Proceso completo para RRHH: datos, conversación y plan de mejora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Recursos Humanos con experiencia en gestión del absentismo laboral en empresas medianas y grandes, con conocimiento de la normativa española y de las mejores prácticas de diagnóstico y reducción de ausencias.

Voy a describir la situación de absentismo en mi empresa y necesito que me ayudes a diseñar un proceso completo que lo aborde de forma efectiva, sin crear un clima de desconfianza ni incumplir la normativa.

**Contexto de mi empresa:**
[Describe: sector, número de empleados, tasa de absentismo actual (si la conoces), los departamentos o perfiles más afectados y si tienes sospechas sobre las causas principales]

---

## MÓDULO 1 — DIAGNÓSTICO: TIPOS DE ABSENTISMO Y SUS CAUSAS

Primero, diferencia los tipos de absentismo para no tratarlos todos igual:

### 1.1 Clasificación del absentismo

| Tipo | Descripción | Causa probable | Herramienta de diagnóstico |
|---|---|---|---|
| Absentismo justificado por enfermedad | IT con parte médico | Enfermedad real, estrés, burnout, trabajo-salud | Análisis de duración y frecuencia |
| Absentismo justificado no médico | Permisos legales, ausencias justificadas | Conciliación, situación familiar | Registro de motivos |
| Absentismo presencial (presentismo) | Asiste pero no rinde | Desmotivación, enfermedad leve | Encuestas de clima y desempeño |
| Absentismo injustificado | Ausencias sin justificación | Desenganche, conflictos, mala gestión | Conversación directa |

### 1.2 Las causas más frecuentes que las empresas no quieren ver

1. **Mala gestión directa**: el empleado no se ausenta de la empresa, se ausenta de su manager
2. **Carga de trabajo insostenible**: el cuerpo dice basta cuando la mente no puede
3. **Clima tóxico**: un compañero conflictivo o un entorno hostil genera más bajas que la gripe
4. **Falta de autonomía y reconocimiento**: el desenganche crónico precede a las bajas frecuentes
5. **Problema real de salud**: hay que abordarlo con apoyo, no con sospecha

¿Cómo sé cuál de estas causas es la más prevalente en mi empresa?

---

## MÓDULO 2 — ANÁLISIS DE DATOS

### 2.1 Las métricas que debo calcular

**Tasa de absentismo general:**
```
Tasa de absentismo = (Horas de ausencia / Horas teóricas trabajadas) × 100
```
Benchmark orientativo: <3% es aceptable, 3-5% es zona de alerta, >5% es crítico

**Índice Bradford (para ausencias frecuentes de corta duración):**
```
Bradford = Número de episodios² × Total de días de ausencia
```
- Alta puntuación Bradford = muchas ausencias cortas y frecuentes (mayor disrupción operativa)
- Baja puntuación con muchos días = pocas ausencias largas (menor disrupción, más gravedad médica)

**Duración media de cada episodio:**
- Episodios de 1-3 días: posible absentismo de lunes/viernes, causas más conductuales
- Episodios de 7-30 días: causas médicas reales o burnout
- Episodios >30 días: enfermedad grave, requiere gestión especial

### 2.2 Análisis de patrones

Busca estos patrones en los datos antes de actuar:
- ¿Las ausencias se concentran en ciertos días de la semana? (lunes y viernes: señal de alarma)
- ¿Hay picos después de evaluaciones, cambios organizativos o conflictos?
- ¿Un departamento tiene tasas significativamente más altas que otros?
- ¿Hay concentración en ciertos managers?

Si el absentismo está concentrado en un departamento específico o bajo un manager concreto, el problema no es el empleado, es el entorno.

---

## MÓDULO 3 — EL PROTOCOLO DE RETORNO AL TRABAJO

### 3.1 La entrevista de retorno (return-to-work interview)

La herramienta más efectiva para gestionar el absentismo recurrente. Se hace tras TODA ausencia, no solo las largas.

**Propósito (que no es vigilar ni intimidar):**
- Bienvenida genuina al regreso
- Verificar que el empleado está en condiciones de retornar
- Identificar si hay algo en el trabajo que contribuye a las ausencias
- Transmitir que las ausencias se notan y que hay apoyo si se necesita

**Guión de la entrevista de retorno (15-20 minutos):**

1. Apertura: "Bienvenido/a de vuelta. ¿Cómo estás?"
2. Bienestar: "¿Te encuentras bien para retomar el trabajo hoy?"
3. Actualización: "Mientras estabas ausente, estas cosas han pasado en el equipo..."
4. Causas (si procede): "¿Hay algo relacionado con el trabajo que pueda haber contribuido?"
5. Apoyo: "¿Hay algo que necesites de mí o de la empresa para que esto no vuelva a pasar?"
6. Plan: si hay varios episodios, acordar un plan de seguimiento

**Lo que NO debe hacer el manager en esta entrevista:**
- Cuestionar la veracidad de la baja o la justificación médica
- Transmitir que el equipo ha sufrido por la ausencia (aunque sea verdad)
- Pedir compromisos que no dependen del empleado ("intenta no coger más bajas")

### 3.2 Gestión de bajas de larga duración (+30 días)

- Mantener contacto periódico (mensual) durante la baja para que el empleado no se sienta olvidado
- Coordinar con el médico de empresa (si lo hay) y con la Mutua
- Plan de reintegración progresiva: cuándo y cómo hacerlo
- Adaptación del puesto si hay secuelas o limitaciones permanentes

---

## MÓDULO 4 — MEDIDAS DE REDUCCIÓN

### 4.1 Medidas preventivas (abordan las causas)

**Carga de trabajo:**
- Auditoría de carga por equipo: ¿está distribuida equitativamente?
- ¿Hay procesos innecesarios que generan estrés sin valor añadido?

**Clima y gestión:**
- Encuesta de clima anónima anual con seguimiento de resultados
- Formación de managers en feedback, reconocimiento y gestión de conflictos
- Proceso claro para denunciar comportamientos inadecuados sin represalias

**Flexibilidad:**
- Teletrabajo y horario flexible: evidencia de que reduce el absentismo por motivos personales
- Banco de horas: permite al empleado gestionar pequeñas ausencias sin generar partes médicos

**Salud:**
- Seguro médico privado como beneficio: reduce los tiempos de espera y facilita la atención temprana
- Programas de bienestar: fisioterapia, psicología, mindfulness (con evidencia de retorno)
- Ergonomía en el puesto: especialmente en trabajo físico y trabajo en pantalla

### 4.2 Medidas de gestión (actúan sobre el comportamiento)

- Protocolo de seguimiento de altas tasas de Bradford
- Conversaciones estructuradas cuando se superan umbrales (no antes de tener datos)
- En casos de absentismo injustificado reiterado: proceso disciplinario según convenio

---

## MÓDULO 5 — COMUNICACIÓN AL EQUIPO

Cómo comunicar las medidas de gestión del absentismo sin crear un clima de sospecha:

- Qué decir en la comunicación interna: el enfoque en el apoyo, no en el control
- Cómo formar a los managers para que hagan las entrevistas de retorno correctamente
- Cómo presentar los datos de absentismo al Comité de Dirección: formato, benchmarks y palancas

Al final, dame una plantilla del informe mensual de absentismo para presentar a la Dirección en menos de una página.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar el proceso completo de gestión del absentismo: diagnóstico, métricas, entrevistas de retorno y medidas preventivas.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestación base cero',
                'description'      => 'Construye el presupuesto desde cero cada año para eliminar costes heredados y justificar cada euro. Metodología ZBB práctica adaptada a pymes y empresas en crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Controller financiero con experiencia en implementación de Zero-Based Budgeting (ZBB) en empresas medianas que quieren pasar de un presupuesto "incrementalista" (el del año pasado más un porcentaje) a uno que justifique cada partida de gasto desde cero.

Voy a describir mi empresa y necesito que me ayudes a implementar la presupuestación base cero de forma práctica, sin convertirlo en un proceso burocrático que consuma más tiempo del que ahorra.

**Contexto de mi empresa:**
[Describe: sector, tamaño (empleados y facturación), estructura de departamentos, cómo haces el presupuesto actualmente y qué problema concreto quieres resolver con el ZBB: costes heredados, falta de control, decisiones sin datos, etc.]

---

## BLOQUE 1 — QUÉ ES EL ZBB Y QUÉ NO ES

### 1.1 La diferencia clave con el presupuesto incremental

| Aspecto | Presupuesto incremental | Zero-Based Budgeting |
|---|---|---|
| Punto de partida | El año anterior +/- % | Desde cero, sin herencia |
| Pregunta central | ¿Cuánto más necesitas este año? | ¿Por qué necesitas este gasto? |
| Carga de la prueba | Justificar el incremento | Justificar la existencia del gasto |
| Tiempo de elaboración | Menor | Mayor (primer año), menor luego |
| Resultado | Perpetúa ineficiencias históricas | Elimina costes zombi |

### 1.2 Los mitos del ZBB que asustan innecesariamente

- **"ZBB significa recortar todo"**: no, significa justificar todo. La justificación puede llevar a aumentar algunas partidas.
- **"ZBB tarda meses en hacerse"**: en empresas grandes sí; adaptado a pymes puede hacerse en 3-4 semanas.
- **"ZBB es solo para grandes corporaciones"**: es especialmente útil en empresas de 20-200 empleados donde los costes heredados se acumulan rápidamente.
- **"Hay que hacerlo todos los años desde cero"**: se puede alternar: ZBB completo cada 3 años, incremental los demás.

---

## BLOQUE 2 — LAS UNIDADES DE DECISIÓN

La unidad básica del ZBB es la "unidad de decisión": un centro de coste, un departamento o una actividad específica que tiene un responsable y puede justificarse de forma independiente.

### 2.1 Cómo definir las unidades de decisión para mi empresa

Ejemplo para una empresa de 50 personas:
- Marketing (adquisición paid, contenido, eventos, herramientas)
- Ventas (equipo, herramientas CRM, viajes)
- Producto (equipo, licencias de software, investigación)
- Operaciones (logística, proveedores, mantenimiento)
- RRHH (nóminas, formación, selección, beneficios)
- IT y sistemas (infraestructura, licencias, soporte)
- Administración y finanzas (asesoría, seguros, oficina)

Para cada unidad de decisión necesito:
- Un responsable claro (no "es compartido")
- Un objetivo definido (para qué existe esta unidad)
- Los gastos actuales detallados
- Los gastos propuestos para el año siguiente con justificación

---

## BLOQUE 3 — LOS PAQUETES DE DECISIÓN

Dentro de cada unidad de decisión, crea "paquetes de decisión" que muestren qué obtienes a distintos niveles de inversión.

### 3.1 Los tres niveles de paquete

Para cada unidad de decisión, presenta tres escenarios:

**Nivel mínimo (supervivencia):**
- El gasto mínimo para que la unidad funcione y no comprometa el negocio
- Qué capacidades se perderían con respecto a lo actual
- El riesgo de operar a este nivel

**Nivel base (mantenimiento):**
- El gasto para mantener el rendimiento actual
- Qué actividades incluye
- Qué no incluye

**Nivel incremento (crecimiento):**
- El gasto para mejorar el rendimiento
- Qué capacidad adicional aporta
- El ROI esperado de la inversión adicional

### 3.2 Plantilla de paquete de decisión

```
UNIDAD DE DECISIÓN: [Nombre del departamento/área]
RESPONSABLE: [Nombre y cargo]
OBJETIVO: [Para qué existe esta unidad]

PAQUETE MÍNIMO — €___/año
Actividades incluidas: [Lista]
Actividades excluidas: [Lista]
Riesgo operativo: [Bajo / Medio / Alto]
Impacto en el negocio si operamos a este nivel: [Descripción]

PAQUETE BASE — €___/año
Actividades incluidas: [Lista]
Diferencia vs. mínimo: [Qué añade]
Justificación: [Por qué lo necesitamos]

PAQUETE INCREMENTO — €___/año
Actividades adicionales: [Lista]
ROI esperado: [€ o % de mejora]
Plazo para ver el retorno: [X meses]
```

---

## BLOQUE 4 — PROCESO DE REVISIÓN Y PRIORIZACIÓN

### 4.1 El comité de presupuesto ZBB

Quién debe estar:
- CEO o Director General: decisión final
- CFO/Controller: análisis y consolidación
- Directores de departamento: presentan sus paquetes
- ¿Consejo o junta?: si aplica en mi caso

Formato:
- Cada director presenta sus paquetes en 20 minutos
- El comité hace preguntas durante 10 minutos
- La decisión se toma con todos los datos sobre la mesa, no en bilaterales

### 4.2 El ranking de paquetes de decisión

Cuando todos los paquetes están presentados, se crea una lista priorizada:

```
Prioridad | Unidad | Paquete | Coste | Justificación | Decisión
1 | RRHH | Mínimo | 120k€ | Sin esto no hay empresa | Aprobado
2 | IT | Base | 45k€ | Infraestructura crítica | Aprobado
3 | Marketing | Base | 80k€ | Motor de crecimiento | Aprobado
...
N | Marketing | Incremento | +30k€ | Si queda presupuesto | En revisión
```

Se aprueban de arriba abajo hasta que el presupuesto se agota. Lo que queda fuera no se ejecuta.

---

## BLOQUE 5 — GESTIÓN DE LOS COSTES HEREDADOS

Los "costes zombi" que ZBB suele eliminar:

1. **Licencias de software no usadas**: SaaS que se contrató para un proyecto y nadie canceló
2. **Servicios de agencias o consultoras sin KPI**: "siempre ha sido así"
3. **Viajes de representación sin ROI medible**: congresos, eventos de sector
4. **Beneficios de empleados nunca revisados**: del tipo "lo damos porque siempre lo hemos dado"
5. **Proveedores de toda la vida sin comparativa de precio en años**

Para cada uno: cómo identificarlo en mis datos contables y cómo gestionar la conversación con el responsable.

---

## BLOQUE 6 — CALENDARIO DE IMPLEMENTACIÓN

Dame un calendario de 10 semanas para implementar el primer ZBB:

- Semanas 1-2: formación de responsables y distribución de plantillas
- Semanas 3-5: elaboración de paquetes por cada unidad
- Semanas 6-7: revisión y calibración por el CFO
- Semana 8: sesión del comité de presupuesto
- Semana 9: ajustes y cierre
- Semana 10: comunicación al equipo y inicio del año presupuestario

Al final, dame los 3 costes que ZBB elimina con más frecuencia en empresas de entre 20 y 100 empleados y cómo identificarlos rápidamente en mi contabilidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Implementar Zero-Based Budgeting en una pyme para eliminar costes heredados y justificar cada partida de gasto.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Crowdfunding y financiación participativa',
                'description'      => 'Plataformas reguladas en España, obligaciones legales para la empresa y los inversores. Cómo estructurar una ronda de crowdfunding cumpliendo la normativa CNMV.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en fintech y financiación alternativa con experiencia en proyectos de crowdfunding en España, tanto equity crowdfunding como crowdlending, bajo el marco del Reglamento Europeo 2020/1503 y la normativa de la CNMV.

Voy a describir mi empresa y mis objetivos de financiación, y necesito que me ayudes a entender las opciones disponibles y sus obligaciones legales.

**Contexto de mi empresa:**
[Describe: tipo de sociedad (SL, SA), sector, facturación y beneficios actuales, para qué necesitas la financiación y cuánto quieres captar]

---

## BLOQUE 1 — EL MAPA DE LA FINANCIACIÓN PARTICIPATIVA EN ESPAÑA

### 1.1 Tipos de crowdfunding y sus diferencias legales

| Tipo | Qué recibe el inversor | Regulación | Límites | Plataformas en España |
|---|---|---|---|---|
| Equity crowdfunding | Participaciones/acciones de la empresa | CNMV + Reg. UE 2020/1503 | 5M€/año por empresa | Crowdcube ES, StartupXplore, The Crowd Angel |
| Crowdlending (préstamos) | Intereses + devolución del principal | CNMV + Reg. UE 2020/1503 | 5M€/año por empresa | October, Loanbook |
| Crowdlending inmobiliario | Intereses + garantía inmobiliaria | CNMV | 5M€/año por empresa | Urbanitae, Housers |
| Reward crowdfunding | Producto/recompensa (no financiero) | Sin regulación financiera | Sin límite legal | Verkami, Kickstarter, Indiegogo |
| Donation crowdfunding | Nada (donación pura) | Sin regulación financiera | Sin límite legal | GoFundMe, Teaming |

Para mi caso concreto, ¿qué tipo de crowdfunding es el más adecuado y por qué?

---

## BLOQUE 2 — EL REGLAMENTO EUROPEO 2020/1503 (ECSP)

Desde noviembre de 2023, todos los proveedores de servicios de financiación participativa en la UE deben estar autorizados bajo este reglamento.

### 2.1 Qué cambia para las empresas que buscan financiación

- Las plataformas autorizadas pueden operar en toda la UE (pasaporte europeo)
- Límite de captación: 5 millones de euros por proyecto en 12 meses
- Obligación de publicar un "Documento de Datos Fundamentales de Inversión" (KID — Key Investment Data Sheet)
- Mayor transparencia: la plataforma debe verificar la información que publica

### 2.2 Proyectos que NO pueden acogerse al Reglamento ECSP
- Proyectos de bienes inmuebles para uso residencial propio del promotor
- Financiación de crowdfunding rewards y donaciones
- Captaciones superiores a 5M€ (requieren prospecto completo y registro en CNMV)
- Financiación de proyectos iniciados por entidades de crédito o empresas de servicios de inversión

---

## BLOQUE 3 — EL DOCUMENTO DE DATOS FUNDAMENTALES (KID)

El KID es el documento principal que el inversor lee antes de invertir. Su contenido está regulado y no es opcional.

### 3.1 Contenido obligatorio del KID

1. **Información del promotor**: razón social, CIF, domicilio, actividad, años de operación, ingresos, beneficios, deudas
2. **Descripción del proyecto**: para qué se usarán los fondos, con desglose por partidas
3. **Riesgos principales**: los 5 riesgos más significativos con su descripción
4. **Información financiera**: últimas cuentas auditadas o verificadas, proyecciones financieras con supuestos
5. **Derechos del inversor**: qué recibe, cuándo, cómo
6. **Advertencias obligatorias**: la inversión puede perderse total o parcialmente, el crowdfunding no es adecuado para todos, etc.
7. **Política de devolución de fondos**: qué pasa si no se alcanza el objetivo mínimo

### 3.2 Cómo preparar las proyecciones financieras para el KID

El error más común: proyecciones demasiado optimistas sin fundamento, que la plataforma no puede publicar.

Las proyecciones deben:
- Basarse en supuestos explícitos y verificables
- Incluir al menos un escenario base y un escenario adverso
- Ser coherentes con los datos históricos si la empresa ya tiene historial
- No prometer rentabilidades garantizadas

---

## BLOQUE 4 — EL PROCESO DE UNA CAMPAÑA DE EQUITY CROWDFUNDING

### 4.1 Pasos antes de lanzar

1. **Valoración de la empresa**: cuánto vale y cómo lo justificas
   - Métodos: DCF (descuento de flujos de caja), múltiplos de sector, comparable de mercado
   - El error más común: sobrevalorarse en la primera ronda
   - Dilución: si captas 200k€ a valoración pre-money de 1M€, los inversores tienen el 16.7%

2. **Due diligence de la plataforma**: la plataforma verificará
   - Identidad y antecedentes del equipo fundador
   - Estado registral y societario
   - Ausencia de deudas con AEAT y Seguridad Social
   - Coherencia de la información publicada

3. **Preparación de materiales**:
   - KID completo y verificado
   - Pitch deck de 10-12 slides
   - Vídeo de presentación de 2-3 minutos
   - FAQ para inversores potenciales

### 4.2 Durante la campaña

- Duración típica: 30-60 días
- Objetivo mínimo (soft target): si no se alcanza, los fondos se devuelven
- Objetivo máximo (hard cap): no se puede superar sin abrir un nuevo proyecto
- Comunicación durante la campaña: actualizaciones semanales a los inversores potenciales que ya han mostrado interés

### 4.3 Después de la campaña

- Formalización de la ampliación de capital: escritura pública y registro mercantil
- Pacto de socios: derechos de los nuevos inversores (arrastre, acompañamiento, información)
- Obligaciones de reporting post-inversión: cuánta información debo dar a los inversores y con qué frecuencia

---

## BLOQUE 5 — FISCALIDAD PARA EL INVERSOR

Aunque no es tu obligación explicarlo, debes entenderlo para responder preguntas:

| Tipo de retorno | Tributación del inversor | Deducción autonómica |
|---|---|---|
| Dividendos | Base del ahorro: 19-28% | No generalmente |
| Plusvalía en venta de participaciones | Base del ahorro: 19-28% | Sí en algunas CCAA |
| Intereses de crowdlending | Base del ahorro: 19-28% | No |
| Pérdida de la inversión | Compensación con ganancias del mismo tipo | — |

Deducción estatal por inversión en startups (Ley de Startups, desde 2023):
- 50% de deducción sobre la inversión, máximo 100.000€ de base
- Solo para empresas de nueva creación que cumplan los requisitos de startup

---

## BLOQUE 6 — PLATAFORMAS Y CÓMO ELEGIR

| Criterio | Qué evaluar |
|---|---|
| Autorización CNMV | Verificar en el Registro Oficial de la CNMV |
| Track record | Proyectos financiados, tasa de éxito, incidencias de pago |
| Comisiones | Típicamente 5-8% sobre fondos captados + fee de éxito |
| Audiencia de inversores | Número de inversores registrados, ticket medio |
| Soporte al promotor | ¿Ayudan con el KID y los materiales o solo publican? |

Al final, dame el checklist de los 10 documentos que debo tener preparados antes de acudir a una plataforma de equity crowdfunding en España.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 45,
                'use_case'         => 'Entender el marco legal del crowdfunding en España y preparar una campaña de equity o deuda conforme al Reglamento ECSP.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Más allá del CSAT',
                'description'      => 'Indicadores cualitativos y análisis de tendencias para medir la calidad del soporte con mayor profundidad. Cómo ir más allá de la puntuación y entender realmente al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success especializado en métricas de calidad de soporte, análisis de VOC (voz del cliente) y diseño de sistemas de medición que van más allá de las puntuaciones CSAT tradicionales.

Voy a describir mi equipo de soporte y los límites de mi sistema de medición actual, y necesito que me ayudes a construir un framework de medición más completo y accionable.

**Contexto actual:**
[Describe: tamaño del equipo de soporte, volumen de tickets mensuales, métricas que mides actualmente, y el problema principal con tu sistema de medición: CSAT no te dice qué mejorar, poca participación en encuestas, etc.]

---

## BLOQUE 1 — LOS LÍMITES DEL CSAT

Por qué el CSAT solo es insuficiente:

1. **Tasa de respuesta baja**: el 10-20% de respuesta media hace que la muestra sea sesgada (responden más los extremos: muy satisfechos y muy insatisfechos)
2. **Mide la transacción, no la relación**: un ticket resuelto rápido tiene CSAT alto aunque el problema sea recurrente
3. **No predice el comportamiento**: un cliente puede dar un 5/5 y churnar igual
4. **Varía por canal**: el CSAT de chat es sistemáticamente más alto que el de email, aunque la calidad sea la misma
5. **No dice qué mejorar**: un 3/5 no te dice si fue la velocidad, el agente, la solución o el producto
6. **El "CSAT farming"**: los agentes aprenden a pedir activamente una buena puntuación, inflando los resultados

---

## BLOQUE 2 — EL FRAMEWORK COMPLETO DE MEDICIÓN

Organiza las métricas en cuatro dimensiones:

### Dimensión 1: Eficiencia operativa

| Métrica | Qué mide | Fórmula | Benchmark |
|---|---|---|---|
| First Response Time (FRT) | Velocidad de primera respuesta | Tiempo hasta primera respuesta real | <4h email, <2min chat |
| Full Resolution Time (FRT) | Tiempo hasta resolver completamente | Apertura hasta cierre | Por canal y tipo |
| First Contact Resolution (FCR) | Resolución sin reapertura | Tickets cerrados sin reapertura / Total | >70% |
| Backlog growth rate | Si la cola crece o decrece | Tickets nuevos - Tickets cerrados | <0 (cola decreciente) |
| Handle time | Tiempo del agente por ticket | Tiempo activo / tickets gestionados | Por tipo de ticket |

### Dimensión 2: Satisfacción del cliente

| Métrica | Qué mide | Cuándo usarla | Periodicidad |
|---|---|---|---|
| CSAT | Satisfacción con la interacción | Tras cada ticket | Por ticket |
| CES (Customer Effort Score) | Facilidad para resolver el problema | Tras tickets complejos | Por ticket |
| NPS relacional | Lealtad global del cliente | Independiente del soporte | Trimestral |
| Sentiment score | Análisis de tono en tickets | Automático en todos los tickets | Continuo |

### Dimensión 3: Calidad del agente

| Métrica | Qué mide | Cómo se obtiene |
|---|---|---|
| QA score | Calidad de la respuesta según rúbrica | Revisión manual o automática |
| Escalation rate | % de tickets que escala | Tickets escalados / Total |
| DSAT rate (insatisfacción) | % de tickets con CSAT 1-2 | Por agente |
| Resolution accuracy | La solución resolvió el problema realmente | Reaperturas en 7 días |
| Policy adherence | Sigue los procesos y políticas | QA checklist |

### Dimensión 4: Impacto en el negocio

| Métrica | Qué mide | Por qué importa |
|---|---|---|
| Churn predicido por soporte | Correlación entre mala experiencia y churn | El soporte anticipa churns |
| Revenue at risk | MRR de clientes con experiencia negativa | Priorización de recuperación |
| Tickets per account | Tickets que genera cada cliente | Señal de salud del producto |
| Self-service deflection | % de usuarios que resuelven solos | Eficiencia del knowledge base |

---

## BLOQUE 3 — CALIDAD CUALITATIVA: EL QA DE SOPORTE

### 3.1 La rúbrica de evaluación de tickets

Para revisar manualmente o semi-manualmente la calidad de las respuestas:

| Criterio | Peso | Descripción | Puntuación 1-4 |
|---|---|---|---|
| Resolución del problema | 30% | ¿El ticket se resolvió completamente? | 1=No resuelto, 4=Resuelto a la primera |
| Tiempo de respuesta | 20% | ¿Se respondió dentro del SLA? | 1=Fuera de SLA, 4=Bien dentro del SLA |
| Claridad y precisión | 20% | ¿La respuesta era clara y correcta? | 1=Confusa o incorrecta, 4=Clara y correcta |
| Empatía y tono | 15% | ¿El tono fue apropiado? | 1=Frío o inapropiado, 4=Muy empático |
| Seguimiento de procesos | 15% | ¿Siguió los procedimientos? | 1=No siguió, 4=Siguió correctamente |

### 3.2 Sample size para el QA manual

¿Cuántos tickets revisar por agente por semana para que el QA sea representativo?

- Si el agente gestiona <50 tickets/semana: revisa 10 (20%)
- Si gestiona 50-150/semana: revisa 15-20 (10-15%)
- Si gestiona >150/semana: revisa 20-25 (10-15%)

Para revisión aleatoria vs. revisión dirigida:
- 70% aleatoria (para tener una muestra representativa)
- 30% dirigida (tickets con CSAT bajo, tickets escalados, clientes VIP)

### 3.3 QA automatizado con IA

Herramientas que analizan tickets automáticamente:
- Klaus (ahora Zendesk QA): puntúa automáticamente basándose en criterios
- MaestroQA: más personalizable
- Assembla AI: alternativa más económica

¿Cuándo compensa la inversión en QA automático? A partir de 500-1.000 tickets mensuales.

---

## BLOQUE 4 — ANÁLISIS DE TENDENCIAS Y PATRONES

Más valioso que la puntuación individual es entender los patrones:

### 4.1 Análisis de topics en tickets

- Clasifica los tickets por categoría (producto, facturación, usabilidad, bug, etc.)
- Sigue el volumen por categoría semana a semana
- Una categoría que crece bruscamente = problema emergente en el producto o proceso

### 4.2 Correlación soporte → retención

¿Los clientes que tienen muchos tickets churnan más? Análisis:
1. Cruza el número de tickets de los últimos 90 días con el churn en los siguientes 90
2. Identifica si hay un umbral de tickets que predice el churn
3. Activa acciones proactivas de CS cuando un cliente supera ese umbral

### 4.3 El voice of customer (VOC) operativo

Cómo sintetizar los insights del soporte para el equipo de producto cada semana:
- Top 3 problemas más reportados (con ejemplos de tickets reales)
- Top 3 peticiones de funcionalidades (con frecuencia y segmento)
- 1 cita literal de un cliente que ilustra el sentimiento general

---

## BLOQUE 5 — DASHBOARD E INFORMES

Dame el diseño de un dashboard semanal de calidad de soporte con:
- Las 6 métricas más importantes en el header (formato semáforo)
- Un gráfico de tendencia de CSAT y FCR a 12 semanas
- Top 5 categorías de tickets de la semana
- Ranking de agentes por QA score (con cuidado en cómo se comunica)
- 3 tickets destacados de la semana: 1 ejemplo excelente, 1 a mejorar, 1 bug o feedback de producto

Al final, dame las 3 métricas que más predirán el NPS de tus clientes en los siguientes 90 días según los estudios más recientes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir un sistema de medición de calidad del soporte más allá del CSAT: QA, VOC, tendencias y correlación con retención.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Facturación y administración del autónomo',
                'description'      => 'El sistema que gestiona facturas, gastos, impuestos y cobros en menos de 1 hora semanal. Flujo completo para autónomos que quieren olvidarse de la admin sin olvidar la Hacienda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal con experiencia en autónomos en España y también como consultor de productividad para profesionales independientes. Tu objetivo es ayudarme a diseñar un sistema de gestión administrativa que sea lo más ligero posible sin arriesgarme a sanciones o sorpresas fiscales.

Voy a describir mi situación actual y necesito que me ayudes a construir el sistema completo: desde la factura hasta la declaración trimestral.

**Contexto de mi actividad:**
[Describe: tipo de actividad (diseño, desarrollo, marketing, consultoría, etc.), si tienes empleados o eres solo, si facturas a empresas o a particulares, si estás en módulos o estimación directa, y el mayor dolor administrativo que tienes ahora]

---

## BLOQUE 1 — LOS FUNDAMENTOS QUE TODO AUTÓNOMO DEBE TENER CLAROS

### 1.1 El modelo 130 vs. el modelo 131

| Modelo | Para quién | Cuándo | Qué pagas |
|---|---|---|---|
| 130 — IRPF estimación directa | La mayoría de autónomos | Trimestral (abr, jul, oct, ene) | 20% del beneficio neto del trimestre |
| 131 — IRPF módulos | Autónomos en régimen de módulos | Trimestral | Cuota fija según módulos |
| 303 — IVA | Autónomos que facturan con IVA (no todos) | Trimestral | IVA cobrado - IVA soportado |

¿En qué régimen estoy y qué declaraciones debo presentar en mi caso específico?

### 1.2 El IVA: cuándo aplica y cuándo no

| Situación | ¿Factura con IVA? |
|---|---|
| Servicios profesionales a empresas españolas | Sí, 21% |
| Servicios a empresas de la UE con VAT ID | No (inversión del sujeto pasivo) |
| Servicios a consumidores de la UE | Sí, IVA del país del cliente |
| Servicios a empresas fuera de la UE | No (exportación) |
| Actividades exentas de IVA (educación, salud, etc.) | No |

### 1.3 Cuánto pagar de IRPF: la estimación trimestral

La fórmula simplificada del modelo 130:

```
Base imponible = Ingresos - Gastos deducibles
Pago fraccionado = 20% de la base imponible
- Retenciones ya aplicadas en las facturas recibidas (si eres retenedor)
= Lo que pagas en el modelo 130
```

**Consejo práctico**: separa el 30% de cada cobro en una cuenta aparte desde el primer día. Nunca te quedarás sin dinero para pagar a Hacienda.

---

## BLOQUE 2 — EL FLUJO DE FACTURACIÓN

### 2.1 La factura correcta: qué debe incluir

Elementos obligatorios de una factura en España:

1. Número de factura (serie correlativa sin saltos)
2. Fecha de emisión
3. Tus datos: nombre/razón social, NIF, domicilio
4. Datos del cliente: nombre/razón social, NIF, domicilio
5. Descripción del servicio
6. Base imponible
7. Tipo de IVA aplicado (si aplica)
8. Cuota de IVA
9. Retención de IRPF (si aplica, normalmente el 15% si el cliente es empresa)
10. Total a pagar

### 2.2 La retención del 15%

Cuándo el cliente te retiene el 15%:
- Cuando el cliente es una empresa o profesional español
- Cuando el servicio es de tipo profesional (no está en la lista de actividades excluidas)
- Durante los primeros 3 años como autónomo, la retención es del 7%

¿Qué pasa con esa retención?
- El cliente la ingresa directamente a Hacienda en tu nombre
- Tú la descuentas del pago fraccionado del modelo 130 (ya pagaste parte de tu IRPF)

### 2.3 La factura simplificada (ticket)

Cuándo puedes usar factura simplificada (sin los datos del cliente):
- Importes inferiores a 400€ (IVA incluido)
- Para determinadas actividades (hostelería, comercio minorista, transporte de viajeros)
- Si el cliente no necesita la factura completa para deducirse el IVA

---

## BLOQUE 3 — LOS GASTOS DEDUCIBLES: QUÉ PUEDES DESCONTARTE

### 3.1 Gastos deducibles más comunes para profesionales digitales

| Gasto | Deducible | Condiciones |
|---|---|---|
| Cuota de autónomo a SS | 100% | Sin condiciones |
| Software y licencias (Adobe, Figma, etc.) | 100% | Uso profesional |
| Hardware (portátil, monitor, tablet) | 100% o prorrata | Si es de uso exclusivo profesional |
| Teléfono móvil | 50% | Si no es exclusivamente profesional |
| Internet en casa | 50% | Si trabajas desde casa |
| Alquiler de despacho u oficina | 100% | Si es exclusivamente profesional |
| Formación relacionada con la actividad | 100% | Facturas a tu nombre |
| Libros y suscripciones profesionales | 100% | Con factura |
| Transporte y viajes de trabajo | 100% | Con justificación de la visita |
| Dietas y restauración (trabajo) | Hasta 26.67€/día en España | Con factura y justificación |
| Gestoría o asesor fiscal | 100% | Con factura |

**Gasto en casa (despacho en domicilio):**
Si trabajas desde casa y declaras un porcentaje del domicilio como despacho, puedes deducir ese porcentaje del alquiler, suministros y comunidad. Requiere notificación a Hacienda (modelo 037 o 036).

### 3.2 Lo que NO puedes deducir aunque lo uses para trabajar
- Ropa (salvo uniformes o ropa de protección)
- Alimentación general (no son dietas)
- Multas y sanciones
- Gastos sin factura (tickets de caja no identificados)

---

## BLOQUE 4 — EL SISTEMA DE 1 HORA SEMANAL

### El flujo semanal (30 minutos)

**Cada lunes o viernes, 30 minutos:**

1. **Registra los cobros** (10 min): marca como cobradas las facturas que se han pagado esta semana en tu software de facturación
2. **Registra los gastos** (10 min): foto del ticket o factura → tu app de gastos → categoriza (hay apps que categorizan automáticamente con OCR)
3. **Factura lo que toca** (10 min): si tienes proyectos en curso, emite las facturas según los hitos o la cadencia acordada

### El flujo mensual (30 minutos)

**El día 5 de cada mes:**
1. Conciliación bancaria: verifica que todos los cobros del mes pasado están registrados
2. Revisa gastos de la tarjeta: ¿hay alguno sin registrar?
3. Calcula el beneficio del mes y el IRPF acumulado

### El flujo trimestral (2-3 horas con gestor o 4-5 horas solo)

**Los últimos 20 días del trimestre (marzo, junio, septiembre, diciembre):**
1. Entrega toda la documentación a tu gestor o prepara los modelos
2. Modelo 303 (IVA): IVA cobrado - IVA soportado = a pagar o a compensar
3. Modelo 130 (IRPF): 20% del beneficio neto - retenciones
4. Presentación antes del día 20 del mes siguiente al trimestre

---

## BLOQUE 5 — HERRAMIENTAS RECOMENDADAS

| Herramienta | Para qué | Precio orientativo |
|---|---|---|
| Holded | Facturación + contabilidad + gastos | Desde 29€/mes |
| Sage One Autónomos | Facturación + gastos + modelos | Desde 15€/mes |
| Quipu | Muy fácil para autónomos digitales | Desde 10€/mes |
| Freeagent / Wave | Opción gratuita o barata | Gratis (Wave) |
| Renta.ai | Declaraciones con IA | Pago por declaración |
| Folia (Banco) | Cuenta bancaria con funciones de gestión | Gratis |

**Mis recomendaciones por perfil:**
- Si facturas poco (< 5 facturas/mes): Quipu o similar
- Si facturas a empresas con proyectos complejos: Holded
- Si tienes gestor: dale acceso a tu software en lugar de mandarle excels

Al final, dame el calendario fiscal del autónomo en España mes a mes para el año completo, con todas las fechas límite de presentación de los modelos más comunes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Montar el sistema de facturación y administración fiscal del autónomo en España que funciona en menos de 1 hora semanal.',
                'vote_score'       => 43,
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
