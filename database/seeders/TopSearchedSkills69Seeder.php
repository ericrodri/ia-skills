<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills69Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de datos first-party — construye tu activo de datos propio',
                'description'      => 'Cómo construir una estrategia de datos first-party ante la desaparición de las cookies de terceros, con captación, enriquecimiento y activación de tu base de datos propia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing digital especializado en datos first-party y privacidad publicitaria. Necesito construir una estrategia de datos first-party completa que me permita hacer marketing personalizado efectivo sin depender de las cookies de terceros, que están desapareciendo progresivamente.

## EL CONTEXTO: POR QUÉ LAS COOKIES DE TERCEROS ESTÁN MURIENDO

Las cookies de terceros (third-party cookies) son el mecanismo que permite a las plataformas publicitarias (Meta, Google, etc.) rastrear el comportamiento de los usuarios a través de distintos sitios web para mostrarles publicidad personalizada. Su desaparición progresiva se debe a:

- **Safari y Firefox** ya las bloquean por defecto desde 2020-2021
- **iOS 14.5+** introdujo App Tracking Transparency, que exige consentimiento explícito
- **RGPD y ePrivacy** en Europa exigen consentimiento real para el seguimiento
- **Chrome** ha anunciado (y retrasado repetidamente) su eliminación

El resultado: los marketers que dependen exclusivamente de audiencias de plataformas y retargeting basado en cookies están viendo caer el rendimiento de sus campañas un 20-40%.

## QUÉ SON LOS DATOS FIRST-PARTY Y POR QUÉ SON EL FUTURO

| Tipo de datos | Definición | Ejemplos | Control |
|---------------|------------|---------|---------|
| First-party | Los recopila directamente tu empresa | Email, historial de compra, comportamiento en tu web | Total |
| Second-party | Los compartes con otro empresa con acuerdo | Datos de un partner de distribución | Parcial |
| Third-party | Los recopila un tercero y te los vende/presta | Cookies de Meta, audiencias de DV360 | Ninguno |

Los datos first-party son tu activo más valioso porque:
- No te los puede quitar ninguna plataforma
- Tienen consentimiento explícito (cumplimiento legal)
- Son más precisos que los datos inferidos por terceros
- Tienen mayor tasa de coincidencia con audiencias en plataformas (Customer Match)

## LA ESTRATEGIA EN 4 FASES

### Fase 1 — Auditoría de datos actuales

Antes de captar nuevos datos, entiende qué tienes ya:

```
Inventario de datos first-party:

Fuente | Tipo de dato | Volumen | Calidad | Actualización
-------|-------------|---------|---------|---------------
CRM | Email + nombre + empresa | X registros | Alta/Media/Baja | Fecha
E-commerce | Historial de compra | X transacciones | Alta | Tiempo real
Web analytics | Comportamiento en web | X sesiones/mes | Media | Tiempo real
Newsletter | Email + engagement | X suscriptores | Alta | Semanal
Formularios de lead | Email + intereses | X leads | Media | Por evento
Encuestas | Preferencias | X respuestas | Alta | Por campaña
```

### Fase 2 — Captación de datos first-party

El principio fundamental: el usuario te da sus datos cuando recibe algo de valor a cambio. Los mecanismos de captación más efectivos:

**Lead Magnets de alto valor:**

| Tipo | Ejemplo | Tasa de conversión típica |
|------|---------|--------------------------|
| Guía / ebook descargable | "Guía completa de X para Y profesional" | 15-30% de visitantes |
| Webinar / evento online | "Cómo hacer X en 60 minutos" | 5-15% del tráfico del email |
| Herramienta gratuita / calculadora | "Calcula tu ROI de X" | 20-40% de quienes la encuentran |
| Trial / freemium | Acceso gratis con registro | Variable según producto |
| Newsletter de valor | "Cada semana, las 3 mejores estrategias de X" | 2-5% de visitas web |
| Quiz / diagnóstico | "Descubre cuál es tu estilo de X" | 20-35% de quienes empiezan |

**El doble opt-in como buena práctica:**
Aunque no es obligatorio en España para todos los tipos de comunicación, el doble opt-in (email de confirmación) garantiza direcciones de email válidas y reduce quejas de spam.

### Fase 3 — Enriquecimiento de los datos

Tener el email no es suficiente. El valor está en saber qué quiere ese contacto, en qué fase de compra está y qué contenido le interesa.

**Enriquecimiento progresivo (progressive profiling):**
En lugar de pedir 10 datos en el primer formulario (nadie lo rellena), pide 2-3 y cada vez que el usuario interactúa contigo, pide un dato adicional.

```
Formulario 1 (descarga guía): email + empresa
Formulario 2 (webinar): cargo + tamaño empresa
Formulario 3 (solicitud de demo): teléfono + presupuesto + urgencia
```

**Segmentación por comportamiento:**
El comportamiento es el dato más valioso. En tu plataforma de email (HubSpot, Klaviyo, ActiveCampaign), segmenta automáticamente según:
- Emails abiertos / clicados (nivel de interés)
- Páginas visitadas (intención de compra)
- Descargas y recursos consumidos (fase del funnel)
- Historial de compra (frecuencia, valor, categorías)

### Fase 4 — Activación: usar los datos para personalizar y anunciar

**Customer Match y audiencias similares:**
Sube tu base de datos (emails hasheados) a Google Ads, Meta Ads y LinkedIn Ads. Esto te permite:
- Mostrar anuncios personalizados a tus propios contactos (retargeting sin cookies)
- Crear audiencias "lookalike" (usuarios similares a tus mejores clientes)

**Email marketing personalizado:**
Con los segmentos construidos en Fase 3, crea flujos automatizados:

```
Flujo de nutrición básico:

Día 0: Bienvenida + entrega del lead magnet
Día 3: Contenido relacionado con el tema que les interesó
Día 7: Caso de éxito de cliente similar
Día 14: Contenido de producto/servicio (primera mención comercial)
Día 21: Oferta o invitación a demo/consulta
Día 30: Follow-up (si no han comprado o agendado)
```

## EL CONSENT MANAGEMENT: BASE LEGAL DE TODO

Sin consentimiento correctamente recogido, los datos first-party son un pasivo legal, no un activo de marketing.

**Checklist de cumplimiento:**
- Formulario de captación con checkbox de consentimiento no premarcado
- Política de privacidad accesible y actualizada con los fines específicos
- Mecanismo de baja funcional en todos los emails (enlace "darse de baja")
- Registro de consentimientos con fecha, fuente y versión de política aceptada
- Proceso documentado para atender derechos ARCO (acceso, rectificación, cancelación, oposición)

**Plataformas de Consent Management (CMP):**
- Axeptio, Cookiebot, OneTrust (para gestión de cookies en web)
- HubSpot, Mailchimp, ActiveCampaign (para gestión de consentimiento en email)

## MÉTRICAS DE LA ESTRATEGIA FIRST-PARTY

| Métrica | Qué mide | Objetivo |
|---------|----------|----------|
| Tamaño de la base activa | Contactos con consentimiento válido y activos (abierto en últimos 6 meses) | Crecimiento > 10%/mes |
| Tasa de captación | Nuevos opt-ins / visitantes únicos | > 2% |
| Tasa de apertura de email | Salud de la base | > 30% |
| Customer Match rate | % de emails que coinciden en plataformas publicitarias | > 50% |
| Revenue atribuido al canal email | Ingresos directamente atribuidos a envíos | Variable por sector |

## PLAN DE 90 DÍAS

**Mes 1:** Auditoría de datos actuales. Limpieza de la base (elimina contactos inactivos > 12 meses). Implementa CMP en la web si no tienes.
**Mes 2:** Lanza el primer lead magnet de alto valor. Configura los formularios de doble opt-in. Crea los primeros 3 segmentos de comportamiento.
**Mes 3:** Activa Customer Match en Google y Meta. Lanza el primer flujo de nutrición automatizado. Mide la tasa de captación y optimiza el lead magnet.

¿Qué tipo de negocio tienes (B2B o B2C) y qué herramienta de email marketing/CRM usas actualmente? Con esa información te doy el plan de implementación adaptado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una estrategia de datos first-party con auditoría, captación con lead magnets, enriquecimiento progresivo y activación en Customer Match.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Notificaciones push web y móvil — PWA, APNs y FCM en producción',
                'description'      => 'Implementación de notificaciones push en PWA (Web Push API), iOS (APNs) y Android (Firebase FCM): arquitectura, gestión de permisos y mejores prácticas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un developer senior especializado en aplicaciones web progresivas y notificaciones push multiplataforma. Necesito una guía completa de implementación de notificaciones push para web (PWA), iOS (APNs) y Android (FCM), incluyendo arquitectura del sistema, gestión correcta de permisos y las mejores prácticas para evitar que los usuarios desactiven las notificaciones.

## ARQUITECTURA DE UN SISTEMA DE NOTIFICACIONES PUSH

### Los 4 componentes de cualquier sistema push

```
┌──────────────────────────────────────────────────┐
│ 1. TU BACKEND                                    │
│    - Almacena los tokens/subscriptions           │
│    - Decide cuándo y a quién enviar              │
│    - Llama a la API del servicio push            │
└─────────────────────┬────────────────────────────┘
                      │
┌─────────────────────▼────────────────────────────┐
│ 2. SERVICIO PUSH (Firebase FCM / APNs / VAPID)  │
│    - Recibe la instrucción de tu backend         │
│    - Entrega la notificación al dispositivo      │
└─────────────────────┬────────────────────────────┘
                      │
┌─────────────────────▼────────────────────────────┐
│ 3. DISPOSITIVO DEL USUARIO                       │
│    - Recibe la notificación                      │
│    - La muestra en el sistema operativo          │
└─────────────────────┬────────────────────────────┘
                      │
┌─────────────────────▼────────────────────────────┐
│ 4. TU APP / PWA (Service Worker)                 │
│    - Maneja el clic en la notificación           │
│    - Actualiza el estado de la app               │
└──────────────────────────────────────────────────┘
```

### Diferencias entre plataformas

| Plataforma | Protocolo | SDK recomendado | Requiere app nativa |
|------------|-----------|-----------------|---------------------|
| Web (Chrome, Firefox) | Web Push API + VAPID | Service Worker nativo | No (PWA suficiente) |
| Android | Firebase FCM | Firebase SDK | No para PWA; Sí para app nativa |
| iOS Safari (PWA) | Web Push API (iOS 16.4+) | Service Worker nativo | No (desde iOS 16.4) |
| iOS App nativa | APNs | Firebase FCM (que usa APNs internamente) o APNs directo | Sí |

## IMPLEMENTACIÓN WEB PUSH (PWA)

### Paso 1 — Registrar el Service Worker

```javascript
// En tu código principal de la app
if ('serviceWorker' in navigator && 'PushManager' in window) {
  const registration = await navigator.serviceWorker.register('/sw.js');
  console.log('Service Worker registrado:', registration);
}
```

### Paso 2 — Solicitar permiso (el momento más crítico)

```javascript
// NUNCA pidas permiso al cargar la página. Pídelo en contexto.
const requestNotificationPermission = async () => {
  // Muestra primero tu propio modal explicando el valor
  // Solo después llamas al API nativo del browser
  const permission = await Notification.requestPermission();

  if (permission === 'granted') {
    await subscribeUserToPush();
  } else if (permission === 'denied') {
    // El usuario denegó. No vuelvas a pedir.
    // Guarda esta preferencia para no volver a molestarle.
    localStorage.setItem('pushDenied', 'true');
  }
  // 'default' significa que cerró el diálogo sin decidir.
  // Puedes intentarlo de nuevo más tarde.
};
```

### Paso 3 — Suscribir al usuario con VAPID

```javascript
const subscribeUserToPush = async () => {
  const registration = await navigator.serviceWorker.ready;

  const subscription = await registration.pushManager.subscribe({
    userVisibleOnly: true, // Obligatorio para Web Push
    applicationServerKey: urlBase64ToUint8Array(
      process.env.NEXT_PUBLIC_VAPID_PUBLIC_KEY
    )
  });

  // Envía la subscription a tu backend para guardarla
  await fetch('/api/push/subscribe', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(subscription)
  });
};

// Helper para convertir la clave VAPID
const urlBase64ToUint8Array = (base64String) => {
  const padding = '='.repeat((4 - base64String.length % 4) % 4);
  const base64 = (base64String + padding)
    .replace(/-/g, '+').replace(/_/g, '/');
  const rawData = window.atob(base64);
  return Uint8Array.from([...rawData].map(c => c.charCodeAt(0)));
};
```

### Paso 4 — Service Worker: manejar la notificación recibida

```javascript
// sw.js (Service Worker)
self.addEventListener('push', (event) => {
  const data = event.data?.json() ?? {};

  const options = {
    body: data.body,
    icon: '/icon-192.png',
    badge: '/badge-72.png',
    data: { url: data.url }, // URL a abrir al hacer clic
    actions: data.actions ?? [], // Botones opcionales en la notificación
    requireInteraction: false, // true = no desaparece automáticamente
  };

  event.waitUntil(
    self.registration.showNotification(data.title, options)
  );
});

self.addEventListener('notificationclick', (event) => {
  event.notification.close();

  event.waitUntil(
    clients.openWindow(event.notification.data.url)
  );
});
```

### Paso 5 — Backend: enviar la notificación

Usando la librería `web-push` en Node.js:

```javascript
import webpush from 'web-push';

webpush.setVapidDetails(
  'mailto:tu@email.com',
  process.env.VAPID_PUBLIC_KEY,
  process.env.VAPID_PRIVATE_KEY
);

export const sendPushNotification = async (subscription, payload) => {
  try {
    await webpush.sendNotification(
      subscription,
      JSON.stringify(payload)
    );
  } catch (error) {
    if (error.statusCode === 410) {
      // La suscripción expiró o fue revocada.
      // Elimínala de tu base de datos.
      await deleteSubscription(subscription.endpoint);
    }
  }
};
```

## IMPLEMENTACIÓN CON FIREBASE FCM (Android + iOS nativo)

Firebase Cloud Messaging es la capa de abstracción que funciona tanto para Android como para iOS (usando APNs internamente). Simplifica enormemente la implementación multiplataforma.

### Configuración básica en React Native / Expo

```javascript
import messaging from '@react-native-firebase/messaging';

// 1. Solicitar permiso (iOS requiere permiso explícito; Android 13+ también)
const requestPermission = async () => {
  const authStatus = await messaging().requestPermission();
  const enabled =
    authStatus === messaging.AuthorizationStatus.AUTHORIZED ||
    authStatus === messaging.AuthorizationStatus.PROVISIONAL;

  if (enabled) {
    await registerDeviceToken();
  }
};

// 2. Obtener y guardar el token del dispositivo
const registerDeviceToken = async () => {
  const token = await messaging().getToken();

  // Envía el token a tu backend
  await fetch('/api/push/register-device', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ token, platform: Platform.OS })
  });
};

// 3. Escuchar notificaciones en foreground
useEffect(() => {
  const unsubscribe = messaging().onMessage(async remoteMessage => {
    // Muestra una notificación in-app o actualiza el estado
    console.log('Notificación en foreground:', remoteMessage);
  });

  return unsubscribe;
}, []);
```

## MEJORES PRÁCTICAS: QUÉ HACE QUE LOS USUARIOS NO DESACTIVEN LAS NOTIFICACIONES

### La regla de oro: contexto antes de permiso

El 60% de los usuarios rechaza el permiso de notificaciones cuando se les pide al entrar a la app por primera vez. La tasa de aceptación sube al 80%+ cuando:

1. El usuario ha interactuado con la app durante al menos 2-3 minutos
2. Se muestra primero un modal de la propia app explicando el valor específico ("Te avisaremos cuando tu pedido llegue")
3. Solo entonces aparece el diálogo del sistema operativo

### El principio de relevancia

| Notificación que desactiva | Notificación que mantiene |
|---------------------------|--------------------------|
| "¡No te pierdas nuestras ofertas!" | "Tu pedido #1234 ha salido a reparto" |
| "Mira lo que hay de nuevo" | "Han respondido a tu pregunta en el foro" |
| Más de 2 push/semana sin acción del usuario | Push solo cuando hay algo específico para ese usuario |

### Frecuencia máxima recomendada por tipo

| Tipo | Frecuencia máxima | Ejemplo |
|------|-------------------|---------|
| Transaccional (estado de pedido, pago) | Sin límite (solo cuando hay evento) | "Tu pago fue procesado" |
| Actividad social (menciones, respuestas) | Sin límite (solo cuando hay evento) | "Juan comentó tu publicación" |
| Alertas personalizadas (precio, stock) | Solo cuando se cumple la condición | "El producto X bajó de precio" |
| Marketing/promocional | Máximo 1/semana | "Esta semana: 20% dto en X" |
| Re-engagement | 1 vez tras X días de inactividad | "¡Te echamos de menos!" |

## GESTIÓN DE TOKENS Y ERRORES FRECUENTES

```javascript
// Errores que debes manejar en el backend al enviar:

// 410 Gone - La suscripción expiró, el usuario desinstalóla app
// → Eliminar el token de tu base de datos

// 404 Not Found - Token inválido
// → Eliminar el token

// 429 Too Many Requests - Rate limiting de FCM/APNs
// → Implementar backoff exponencial y reintentos

// 5xx - Error del servidor push
// → Reintentar con backoff exponencial (1s, 2s, 4s, 8s...)
```

¿Cuál es tu stack (web PWA, React Native, Flutter) y a qué plataformas necesitas dar soporte prioritariamente? Con ese contexto profundizo en la implementación específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar notificaciones push en PWA (Web Push + VAPID), Android y iOS (Firebase FCM) con gestión correcta de permisos, tokens y errores.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX conversacional — diseña chatbots y asistentes de voz que resuelven',
                'description'      => 'Cómo diseñar chatbots, asistentes de voz y flujos de conversación que resuelven las necesidades del usuario sin frustración ni callejones sin salida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX conversacional con experiencia en chatbots, asistentes de voz e interfaces conversacionales. Necesito una guía completa para diseñar flujos de conversación que realmente resuelvan las necesidades del usuario, evitando los errores que convierten un chatbot en una fuente de frustración.

## POR QUÉ LA MAYORÍA DE LOS CHATBOTS FALLAN

El 56% de los usuarios que interactúan con un chatbot acaban frustrados y abandonan sin resolver su problema (Drift, 2024). Las causas más frecuentes:

1. **El chatbot no entiende lo que el usuario dice** (reconocimiento de intención deficiente)
2. **El flujo de conversación tiene callejones sin salida** (el bot no sabe qué hacer y se queda mudo)
3. **La persona no sabe que puede escribir en lenguaje natural** (solo ve botones genéricos)
4. **No hay escalado a humano cuando el bot falla** (la frustración no tiene salida)
5. **El bot responde como un bot, no como el asistente de una marca** (sin personalidad, sin tono)

## LOS PRINCIPIOS DE COOPER PARA EL DISEÑO CONVERSACIONAL

El framework de conversational design de Google (basado en la teoría de conversación de H.P. Grice) establece 4 principios:

| Principio | Descripción | Aplicación práctica |
|-----------|-------------|---------------------|
| Cantidad | Di lo suficiente, no más | Respuestas cortas; expande solo si el usuario pide más |
| Calidad | Solo di lo que sabes que es verdad | No inventes; reconoce cuando no sabes |
| Relación | Di solo lo relevante | Responde al intent real, no a las palabras literales |
| Manera | Di las cosas de forma clara y ordenada | Una idea por turno; evita listas largas |

## ARQUITECTURA DE UN FLUJO CONVERSACIONAL

### Los 5 componentes de un flujo de conversación bien diseñado

**1. Intents (intenciones)**
Qué quiere hacer el usuario. Cada intent tiene variantes (utterances):

```
Intent: Consultar estado del pedido
Utterances:
- "¿Dónde está mi pedido?"
- "¿Cuándo llega mi compra?"
- "Quiero saber el estado de mi envío"
- "Mi número de pedido es 1234"
- "¿Ha salido ya?"
```

**2. Entities (entidades)**
Información que el usuario provee y que necesitas para responder:
- Número de pedido
- Email de la cuenta
- Fecha de compra

**3. Slots (huecos a rellenar)**
Información que el sistema necesita pero que el usuario no dio. Diseña prompts naturales para pedirla:

```
Usuario: "¿Dónde está mi pedido?"
Bot: "Con mucho gusto te ayudo. ¿Puedes darme el número de pedido?
     Lo encontrarás en el email de confirmación que recibiste."
```

**4. Responses (respuestas)**
Las respuestas deben:
- Confirmar que entendiste al usuario ("Perfecto, déjame comprobarlo...")
- Dar la información solicitada con claridad
- Proponer el siguiente paso natural

**5. Fallbacks (respuestas de emergencia)**
Cuando el bot no entiende o no puede ayudar. Diseña mínimo 3 niveles:

```
Fallback nivel 1 (no entendió la primera vez):
"No estoy seguro de haber entendido. ¿Puedes reformularlo de otra manera?"

Fallback nivel 2 (segundo intento fallido):
"Parece que tengo dificultades para ayudarte con esto.
¿Quieres que te ponga en contacto con un agente?"

Fallback nivel 3 (escalado automático):
[Transferencia a agente humano o formulario de contacto]
```

## DISEÑO DE CONVERSACIONES: EL MÉTODO WIZARD OF OZ

Antes de desarrollar nada, valida el flujo haciéndolo a mano. El método Wizard of Oz consiste en:

1. Describe los flujos conversacionales en papel o en un doc
2. Un diseñador juega el rol del bot en WhatsApp o Slack con usuarios reales
3. Registra qué preguntas no supiste responder, qué formulaciones no anticipaste
4. Itera el diseño hasta que el 90% de las interacciones fluyen bien

Solo entonces empieza el desarrollo.

## MAPA DE FLUJO CONVERSACIONAL: PLANTILLA

Para cada tarea que el chatbot debe resolver, dibuja el flujo:

```
Tarea: Consultar estado de pedido

                    ┌─────────────────────────────────┐
                    │ Usuario: pregunta por su pedido  │
                    └──────────────┬──────────────────┘
                                   │
                    ┌──────────────▼──────────────────┐
                    │ Bot: pide número de pedido       │
                    └──────────────┬──────────────────┘
                                   │
             ┌─────────────────────┴─────────────────────┐
             │                                           │
  ┌──────────▼─────────┐                  ┌─────────────▼───────────┐
  │ Usuario da número  │                  │ Usuario no tiene número  │
  └──────────┬─────────┘                  └─────────────┬───────────┘
             │                                           │
  ┌──────────▼─────────┐                  ┌─────────────▼───────────┐
  │ Bot: busca pedido  │                  │ Bot: pide email para     │
  └──────────┬─────────┘                  │ buscar por cuenta        │
             │                            └─────────────┬───────────┘
     ┌───────┴───────┐                                  │
     │               │                      [mismo flujo de búsqueda]
  Encontrado     No encontrado
     │               │
  [Estado]    [Escalar a agente]
```

## TONO DE VOZ EN LAS CONVERSACIONES

El tono conversacional del bot debe ser coherente con la marca. Define:

| Dimensión | Opciones | Ejemplo en texto |
|-----------|----------|-----------------|
| Formalidad | Formal / Informal | "Estimado cliente" vs. "Hola, ¿en qué te ayudo?" |
| Temperatura | Cálido / Neutro / Profesional | "¡Encantado de ayudarte!" vs. "Claro, te ayudo." |
| Longitud | Conciso / Detallado | "Tu pedido llega mañana." vs. "Hemos comprobado tu pedido y..." |
| Personalidad | Genérico / Con nombre y carácter | "El bot" vs. "Soy Lia, la asistente de [Marca]" |

**Regla:** El bot debe sonar como el mejor agente de soporte de la empresa, no como un sistema informático.

## ESCALADO A HUMANO: EL DISEÑO DEL HANDOFF

El handoff (transferencia a agente humano) es el momento más crítico del diseño conversacional. Se debe hacer:

**¿Cuándo escalar?**
- Después de 2 fallbacks consecutivos
- Cuando el usuario pide explícitamente hablar con una persona
- Cuando el tema es sensible (quejas, devoluciones, reclamaciones legales)
- Cuando la complejidad supera las capacidades del bot

**Cómo hacer el handoff correctamente:**

```
✅ Bien:
"Entiendo. Déjame conectarte con uno de nuestros agentes que podrá
ayudarte mejor con esto. Un momento, por favor."
[Transferencia con contexto: el agente recibe el historial de la conversación]

❌ Mal:
"Lo sentimos, no puedo ayudarte. Por favor, contacta con soporte."
[Sin transferencia directa, sin contexto, el usuario tiene que empezar de cero]
```

## HERRAMIENTAS Y PLATAFORMAS

| Herramienta | Para qué | Complejidad técnica |
|-------------|----------|---------------------|
| Dialogflow CX | Chatbots complejos multimodales | Alta |
| Botpress | Open source, self-hosted | Media-alta |
| Voiceflow | Diseño visual de flujos conversacionales | Baja-media |
| Landbot | Chatbots de marketing sin código | Baja |
| Intercom Fin | Chatbot IA para soporte al cliente | Baja (SaaS) |
| OpenAI Assistants API | Chatbot con LLM personalizable | Media (desarrollo custom) |

## PLAN DE DISEÑO EN 6 SEMANAS

**Semana 1-2:** Define los 5-10 top intents (lo que los usuarios preguntarán más). Valida con datos de soporte históricos o entrevistas.
**Semana 3:** Diseña los flujos conversacionales en papel. Realiza sesiones de Wizard of Oz con 5-10 usuarios reales.
**Semana 4:** Itera los flujos con los aprendizajes. Define el tono de voz y las respuestas de fallback.
**Semana 5-6:** Desarrolla la primera versión en la plataforma elegida. Test interno exhaustivo. Soft launch con un porcentaje del tráfico.

¿Qué tipo de conversación quieres diseñar (soporte, ventas, onboarding) y en qué canal (web, WhatsApp, voz)? Con esa información estructuro los primeros 5 intents y flujos para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos conversacionales para chatbots y asistentes de voz con intents, fallbacks, escalado a humano y validación con Wizard of Oz.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'CRM avanzado para ventas — automatizaciones y vistas que hacen al vendedor más eficiente',
                'description'      => 'Cómo configurar el CRM con automatizaciones, workflows y vistas que reducen el trabajo administrativo del vendedor y aumentan el tiempo en actividades de venta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un RevOps manager especializado en optimización del stack de ventas y configuración avanzada de CRM. Necesito un plan completo para transformar el CRM de un sistema de registro de actividad a una herramienta que hace al equipo de ventas más eficiente y reduce el tiempo administrativo.

## EL PROBLEMA DEL CRM MAL CONFIGURADO

El vendedor promedio dedica solo el 33% de su tiempo a actividades de venta directa (llamadas, reuniones, propuestas). El resto va a tareas administrativas: actualizar el CRM, buscar información, coordinarse internamente (Salesforce State of Sales, 2024).

Un CRM bien configurado puede recuperar 4-6 horas semanales por vendedor en tiempo productivo. Un CRM mal configurado añade fricción y hace que el equipo lo use como registro histórico en lugar de herramienta de gestión.

## LAS 5 ÁREAS DE CONFIGURACIÓN AVANZADA DEL CRM

### 1. Limpieza y estructura de datos: la base de todo

Un CRM con datos sucios genera más trabajo del que ahorra. Antes de automatizar, limpia.

**Principios de estructura de datos:**

| Principio | Descripción | Implementación |
|-----------|-------------|----------------|
| Un registro por entidad | Una empresa = un registro. No duplices. | Deduplificación automática |
| Campos obligatorios mínimos | Solo pide lo que realmente usas para segmentar o reportar | Revisa cada campo: ¿se usa en algún report o filtro? |
| Nomenclatura consistente | "Marketing Digital S.L." no "Marketing Digital" o "MKT Digital SL" | Reglas de limpieza de empresa |
| Propietario siempre asignado | Cada deal y contacto tiene un responsable | Reglas de asignación automática |

**Proceso de limpieza inicial:**
1. Exporta todos los registros a un CSV
2. Identifica duplicados (por email de empresa, dominio web, nombre)
3. Fusiona los duplicados manteniendo el registro con más información
4. Elimina los registros de prueba, contactos sin actividad en > 24 meses sin oportunidad activa

### 2. Pipeline: el corazón del CRM

El pipeline debe reflejar cómo realmente vende tu equipo, no un proceso ideal que nadie sigue.

**Auditoría del pipeline actual:**

Pregunta a los vendedores: "Cuando un deal pasa de la fase X a la Y, ¿qué tiene que haber ocurrido exactamente?" Si no tienen una respuesta clara, las fases están mal definidas.

**Estructura de pipeline recomendada para B2B:**

| Fase | Nombre | Criterio de entrada | Probabilidad de cierre |
|------|--------|---------------------|------------------------|
| 1 | Prospecto identificado | Contacto iniciado, problema confirmado | 5-10% |
| 2 | Calificado | BANT/MEDDIC confirmado | 20-25% |
| 3 | Demo / Propuesta presentada | Demo realizada y propuesta enviada | 40-50% |
| 4 | Negociación | Cliente pidió cambios en precio/condiciones | 60-70% |
| 5 | Cierre pendiente | Verbal o escrito confirmado, pendiente firma | 80-90% |
| 6 | Cerrado ganado / perdido | Firma o rechazo definitivo | 100% / 0% |

### 3. Automatizaciones que ahorran tiempo real

Prioriza las automatizaciones que más tiempo ahorran por repetición:

**Automatización 1 — Creación automática de tarea tras cada reunión**
Trigger: campo "Fecha de reunión" se marca como completado
Acción: crear tarea "Follow-up: enviar propuesta" asignada al mismo vendedor, con fecha = reunión + 1 día hábil

**Automatización 2 — Alerta de deal estancado**
Trigger: un deal lleva más de X días en la misma fase sin actividad
Acción: notificación al vendedor + al manager con el nombre del deal y los días sin actividad

**Automatización 3 — Asignación automática de leads entrantes**
Trigger: nuevo contacto creado desde formulario web
Acción: asignar al vendedor con menos deals activos en la misma región/vertical usando round-robin o reglas de territorio

**Automatización 4 — Secuencia de emails post-demo**
Trigger: deal pasa a fase "Demo realizada"
Acción: enviar email de follow-up personalizado al día siguiente + recordatorio de propuesta a los 3 días si no hay respuesta

**Automatización 5 — Notificación de renovación**
Trigger: contrato con fecha de vencimiento en 90 días
Acción: crear tarea "Iniciar conversación de renovación" para el account manager

### 4. Vistas y dashboards que el vendedor abre voluntariamente

El CRM genera muchos datos pero los vendedores usan la misma vista genérica de siempre. Crea vistas con nombre y propósito claro:

**Vista "Mi día": lo que el vendedor ve al abrir el CRM**
Filtros: tareas de hoy + reuniones de hoy + deals con actividad pendiente de ayer

**Vista "Pipeline activo": la vista de gestión semanal**
Filtros: todos los deals abiertos del vendedor, ordenados por probabilidad de cierre × importe (expected value)
Columnas visibles: nombre del deal, empresa, fase, importe, fecha de cierre estimada, días en fase actual, próxima actividad

**Vista "Riesgo de pérdida": deals que necesitan atención urgente**
Filtros: deals con última actividad > 14 días Y probabilidad > 40%
Uso: revisión semanal con el manager

**Dashboard del manager: forecast semanal**
- Pipeline total por fase y vendedor
- Deals cerrados en el mes vs. objetivo
- Deals en riesgo (sin actividad)
- Deals nuevos creados en la semana

### 5. Integración con el stack de productividad

El CRM sin integración con el resto de herramientas crea trabajo manual. Estas son las integraciones con mayor ROI:

| Integración | Qué automatiza | Herramientas |
|-------------|---------------|--------------|
| Email ↔ CRM | Registra automáticamente emails en el deal | HubSpot nativo, Salesforce Inbox, Outreach |
| Calendario ↔ CRM | Sincroniza reuniones y crea actividades | Google Calendar / Outlook sync nativo |
| LinkedIn ↔ CRM | Importa contactos sin copiar/pegar | LinkedIn Sales Navigator + integración |
| Propuestas ↔ CRM | Cuando firma el contrato, crea el deal como ganado | PandaDoc, DocuSign + Zapier/Make |
| Facturación ↔ CRM | Cuando ganas un deal, crea la factura automáticamente | Stripe, Holded, Factusol + integración |

## MÉTRICAS DE EFICIENCIA DEL CRM

| KPI | Fórmula | Objetivo |
|-----|---------|----------|
| Completitud de datos | % de deals con todos los campos obligatorios rellenos | > 95% |
| Actividad de logging | % de reuniones registradas en el CRM vs. total de reuniones | > 80% |
| Tiempo medio por deal en cada fase | Suma de días / nº de deals que pasaron por esa fase | Referencia: benchmark inicial |
| Uso del CRM | Logins por semana por vendedor | Mínimo 5 días/semana |
| Forecast accuracy | Deals cerrados en mes / deals predichos al inicio del mes | ± 15% |

## PLAN DE IMPLEMENTACIÓN EN 60 DÍAS

**Semanas 1-2:** Auditoría del CRM actual. Limpieza de datos. Redefinición de fases del pipeline con el equipo.
**Semanas 3-4:** Implementa las 5 automatizaciones prioritarias. Crea las 4 vistas recomendadas.
**Semanas 5-6:** Formación del equipo en las nuevas vistas y flujos. Recoge feedback.
**Semanas 7-8:** Implementa las integraciones con el stack existente. Primera revisión de métricas.

¿Qué CRM usas actualmente (HubSpot, Salesforce, Pipedrive, otro) y cuál es el mayor punto de fricción que tiene el equipo con él?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Configurar el CRM con estructura de datos, pipeline bien definido, automatizaciones de ahorro de tiempo, vistas accionables e integraciones con el stack de ventas.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Seguridad del producto desde PM — cómo trabajar con el equipo de seguridad',
                'description'      => 'Cómo el product manager integra la seguridad en el ciclo de desarrollo de producto, colabora con el equipo de seguridad y gestiona los trade-offs sin ser el experto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en la colaboración con equipos de seguridad en entornos SaaS. Necesito un framework práctico para integrar la seguridad en el ciclo de desarrollo de producto, trabajar efectivamente con el equipo de seguridad y gestionar los trade-offs entre velocidad de entrega y seguridad sin necesitar ser un experto en ciberseguridad.

## EL ROL DEL PM EN LA SEGURIDAD DEL PRODUCTO

El PM no es el experto en seguridad: ese es el equipo de seguridad o el CISO. El rol del PM es ser el traductor que asegura que:
1. Los requisitos de seguridad forman parte del backlog con la misma prioridad que las features
2. Las decisiones de seguridad vs. velocidad se toman de forma explícita, no por omisión
3. El equipo de seguridad tiene visibilidad del roadmap con suficiente antelación para alertar sobre riesgos

## POR QUÉ LA SEGURIDAD DEBE ESTAR EN EL PRODUCTO DESDE EL PRINCIPIO

El coste de arreglar una vulnerabilidad de seguridad escala exponencialmente según en qué fase se detecta:

| Fase de detección | Coste relativo de corrección |
|------------------|------------------------------|
| Diseño | 1x |
| Desarrollo | 5x |
| Testing QA | 10x |
| Staging/Pre-producción | 15x |
| Producción (antes de incidente) | 25x |
| Producción (post-incidente) | 100x+ |

Este modelo (NIST) justifica la inversión en seguridad temprana desde el punto de vista puramente económico.

## EL SECURE DEVELOPMENT LIFECYCLE (SDL) PARA PMS

El SDL es el proceso que integra la seguridad en cada fase del ciclo de desarrollo. El PM tiene un rol en cada fase:

### Fase 1 — Requisitos

**Rol del PM:** Incluir requisitos de seguridad en el documento de especificaciones de cada feature.

**Plantilla de requisitos de seguridad:**

```
Feature: [Nombre]

AUTENTICACIÓN Y AUTORIZACIÓN
□ ¿Quién puede acceder a esta funcionalidad? (roles)
□ ¿Qué datos pueden ver/modificar cada rol?
□ ¿Hay acciones que requieren re-autenticación (ej. cambiar email)?

DATOS SENSIBLES
□ ¿Qué datos personales o sensibles maneja esta feature?
□ ¿Cómo se almacenan? (en reposo, en tránsito)
□ ¿Hay logs de auditoría necesarios?

INPUTS DEL USUARIO
□ ¿Qué inputs del usuario se procesan?
□ ¿Están validados y sanitizados?
□ ¿Hay riesgo de inyección (SQL, XSS)?

INTEGRACIONES CON TERCEROS
□ ¿Se comparten datos con servicios externos?
□ ¿Se almacenan tokens o credenciales de terceros?
```

### Fase 2 — Diseño

**Rol del PM:** Invitar al equipo de seguridad al Threat Modeling de features de alto riesgo.

**¿Qué features requieren threat modeling?**
- Nuevos flujos de autenticación
- Funcionalidades que manejan pagos o datos financieros
- Nuevas integraciones con servicios externos
- Features que acceden a datos de otros usuarios

**Threat Modeling en 4 preguntas (STRIDE simplificado):**

| Pregunta | Qué analiza |
|----------|-------------|
| ¿Quién podría querer abusar de esta feature? | Actores maliciosos externos e internos |
| ¿Cómo podrían abusar de ella? | Vectores de ataque: spoofing, tampering, repudiation, info disclosure, DoS, elevation |
| ¿Qué pasaría si lo consiguieran? | Impacto: datos expuestos, fraude, daño a usuarios |
| ¿Cómo lo mitigamos? | Controles: validación, autenticación, rate limiting, logs |

### Fase 3 — Desarrollo

**Rol del PM:** Asegurar que los criterios de aceptación de seguridad están en las user stories y en la definición de "done".

**Añadir a la Definición de Done:**
```
□ Code review ha revisado los puntos de seguridad identificados
□ No hay secrets (API keys, passwords) en el código fuente
□ Las dependencias nuevas han sido verificadas (no CVEs críticos)
□ Los inputs del usuario están validados en el backend (no solo en el frontend)
```

### Fase 4 — Testing

**Rol del PM:** Asegurar que el SAST (Static Application Security Testing) y los tests de seguridad automáticos forman parte del pipeline de CI/CD.

**Herramientas de testing de seguridad automático:**
- SAST: SonarQube, Semgrep (análisis estático del código)
- Dependency scanning: Snyk, Dependabot (vulnerabilidades en dependencias)
- Secret scanning: GitGuardian, git-secrets (secrets en el repositorio)

### Fase 5 — Lanzamiento

**Rol del PM:** Definir el proceso de divulgación responsable de vulnerabilidades y asegurarse de que hay un plan de respuesta a incidentes.

**Preguntas que el PM debe poder responder antes de lanzar una feature sensible:**
- ¿Tenemos un contacto de seguridad público (security@empresa.com) para que investigadores reporten vulnerabilidades?
- Si mañana nos reportan una vulnerabilidad crítica, ¿quién decide cuándo y cómo parchear?
- ¿Tenemos un proceso de comunicación a usuarios afectados si hay un incidente?

## GESTIÓN DE TRADE-OFFS: VELOCIDAD VS. SEGURIDAD

Este es el conflicto más frecuente para el PM. El equipo de seguridad dice "no podemos lanzar hasta que esto esté corregido" y el negocio dice "necesitamos lanzar esta semana". El PM debe gestionar este trade-off de forma explícita.

### El framework de decisión de riesgo aceptado

Cuando el equipo de seguridad identifica un problema y el negocio presiona para lanzar:

```
1. CARACTERIZAR EL RIESGO
   - ¿Cuál es la probabilidad de que sea explotado? (Alta/Media/Baja)
   - ¿Cuál sería el impacto si se explota? (Datos expuestos / Fraude / Reputación)
   - ¿Hay mitigación parcial posible hasta el fix completo?

2. DOCUMENTAR LA DECISIÓN
   - Redactar un "risk acceptance document" firmado por quien autoriza el riesgo
   - Este documento protege al equipo de seguridad de la presión de "aceptar" sin registro

3. COMPROMETERSE CON EL TIMELINE DE FIX
   - Riesgo crítico: fix antes del lanzamiento (no negociable)
   - Riesgo alto: fix en el próximo sprint
   - Riesgo medio: en el siguiente mes
   - Riesgo bajo: en el backlog con fecha

4. COMPENSAR CON CONTROLES ADICIONALES
   - Rate limiting, monitoring adicional, alertas
   - Limitar el alcance del lanzamiento (soft launch, beta cerrada)
```

## VOCABULARIO DE SEGURIDAD QUE EL PM DEBE DOMINAR

| Término | Qué significa para el producto |
|---------|-------------------------------|
| CVE | Vulnerabilidad conocida y publicada en una dependencia que usas |
| OWASP Top 10 | Las 10 vulnerabilidades más comunes en aplicaciones web (tu lista de "qué evitar") |
| Zero-day | Vulnerabilidad no conocida públicamente que alguien está explotando |
| Bug bounty | Programa que paga a investigadores por encontrar vulnerabilidades |
| Penetration testing | Auditoría de seguridad contratada: alguien intenta hackear tu producto |
| SOC 2 / ISO 27001 | Certificaciones de seguridad que los clientes enterprise te pedirán |

## PLAN DE ACCIÓN EN 90 DÍAS

**Mes 1:** Introduce el checklist de seguridad en las especificaciones de las próximas 3 features. Añade los criterios de seguridad a la Definición de Done.
**Mes 2:** Implementa SAST y dependency scanning en el pipeline de CI/CD. Organiza una sesión de threat modeling con el equipo de seguridad sobre el flujo más sensible de tu producto.
**Mes 3:** Establece el proceso de divulgación responsable. Revisa con el equipo de seguridad el roadmap del próximo trimestre para identificar features de alto riesgo con antelación.

¿Cuál es la naturaleza de tu producto (datos de salud, finanzas, B2B enterprise, consumidor) y cuántas personas tiene tu equipo de seguridad?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar la seguridad en el ciclo de producto con SDL, requisitos de seguridad en specs, threat modeling y framework de decisión de riesgo aceptado.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Retención en momentos de crisis — gestionar el talento en incertidumbre',
                'description'      => 'Cómo gestionar la retención del talento clave durante periodos de incertidumbre, ERTEs o reestructuraciones sin perder a las personas que más necesitas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con experiencia en gestión de personas durante reestructuraciones, fusiones y adquisiciones, y periodos de incertidumbre organizacional. Necesito un plan de retención del talento clave durante momentos de crisis que sea honesto, efectivo y que preserve la cultura de la empresa más allá del momento difícil.

## POR QUÉ LAS CRISIS ACELERAN LA FUGA DE TALENTO

Durante los periodos de incertidumbre, las personas con mayor empleabilidad son las primeras en irse. Son las que reciben más llamadas de headhunters, las que tienen más opciones y las que menos necesitan aguantar la incomodidad. El resultado: la crisis acaba con el talento que más necesitas para salir de ella.

**La paradoja de la retención en crisis:**
La incomodidad de quedarse es igual para todos, pero la facilidad de irse es mayor para los mejores.

## IDENTIFICACIÓN DEL TALENTO CRÍTICO: ¿A QUIÉN DEBES RETENER?

No todo el mundo merece el mismo esfuerzo de retención (los recursos son limitados en una crisis). Identifica tu talento crítico con dos dimensiones:

### Matriz de talento crítico

| | Alto rendimiento | Rendimiento estándar |
|--|-----------------|---------------------|
| **Alta dificultad de reemplazar** | CRÍTICO: máxima inversión en retención | IMPORTANTE: retención selectiva |
| **Baja dificultad de reemplazar** | VALIOSO: conversaciones de reconocimiento | ESTÁNDAR: gestión habitual |

**Criterios de "dificultad de reemplazar":**
- Conocimiento especializado que tarda meses o años en adquirirse
- Relaciones con clientes clave que son personales, no institucionales
- Rol de referente cultural o técnico para el resto del equipo
- Expertise en sistemas críticos sin documentar

### Mapa de riesgo de fuga

Para cada persona en el cuadrante "Crítico", evalúa:

```
Perfil de riesgo de fuga:

Persona: [nombre]
Motivo potencial de fuga:
□ Compensación por debajo del mercado
□ Incertidumbre sobre su futuro en la empresa
□ Pérdida de confianza en el liderazgo
□ Carga de trabajo insostenible durante la crisis
□ Recibiendo ofertas activas de la competencia

Señales observadas:
- Actitud en reuniones: [observación]
- Búsqueda activa de empleo (LinkedIn, referencias): [señal]
- Conversaciones informales: [contexto]

Probabilidad de fuga en próximos 3 meses: Alta / Media / Baja
```

## LAS 5 PALANCAS DE RETENCIÓN EN CRISIS

### 1. Comunicación honesta y frecuente: la palanca más subestimada

En una crisis, el vacío de información lo llena el rumor. Los rumores siempre son peores que la realidad.

**Principio de "honestidad valiente":**
Di lo que sabes, cuándo lo sabrás mejor y qué aún no puedes decir. Los profesionales toleran la incertidumbre mucho mejor que la falta de información.

**Ejemplo de comunicación honesta:**
"Os cuento lo que sé ahora mismo: hemos decidido reducir la estructura en un 15% para asegurar la viabilidad del negocio. Los criterios de selección son [X]. Las personas afectadas lo sabrán antes del [fecha]. Los que no recibáis comunicación antes de esa fecha, no estáis afectados. Hasta entonces, entiendo que hay ansiedad y puedo responder lo que esté en mi mano. Lo que no puedo decir todavía es [Y] porque [razón honesta]."

**Cadencia de comunicación en crisis:**
- Actualización semanal del liderazgo (aunque no haya novedades: "seguimos en el mismo punto, os avisamos en cuanto haya cambios")
- Canal abierto para preguntas anónimas
- 1:1 con personas en el cuadrante crítico al menos cada 2 semanas

### 2. Conversaciones de retención individuales

Una vez identificado el talento crítico, los managers deben tener conversaciones explícitas de retención.

**Guión de conversación de retención:**

```
"Quería hablar contigo de forma directa. Eres una persona clave para
nosotros y para el proyecto y quiero que sepas que eso no ha cambiado
con los ajustes que estamos haciendo.

Sé que este momento genera incertidumbre y que probablemente estás
recibiendo más conversaciones de fuera de lo habitual.

¿Cómo estás viviendo todo esto? ¿Qué necesitarías de la empresa o de
mí para que quedarte tuviera sentido en los próximos 12 meses?"

[Escuchar activamente. No interrumpir. Tomar nota.]

"¿Hay algo específico que pueda hacer para que sientas más seguridad
sobre tu futuro aquí?"
```

### 3. Retención económica: cuándo y cómo

Los bonos de retención ("stay bonuses") son la herramienta más directa pero también la más costosa. Úsalos cuando:
- El riesgo de fuga es alto y el coste de reemplazar a la persona supera el bono
- Hay un momento crítico específico que necesitas cubrir (cierre de un proyecto, integración post-adquisición)

**Estructura de bono de retención:**
- Importe: equivalente a 2-6 meses de salario
- Condición: pago escalonado (50% a los 6 meses, 50% a los 12)
- Vesting: si la persona se va antes del período, devuelve la parte proporcional

### 4. Claridad de futuro: el proyecto más que la estabilidad

En momentos de crisis, la estabilidad no se puede prometer. Pero sí se puede ofrecer claridad sobre qué proyecto viene después, qué rol tendrán y qué oportunidades habrá en la nueva estructura.

"No puedo prometerte que todo será igual, pero puedo decirte que en la estructura que estamos construyendo, tu rol es [descripción] y la oportunidad de crecimiento en los próximos 18 meses sería [descripción]."

### 5. Gestión de la carga de trabajo durante la reducción

Cuando se reduce plantilla, la carga de los que quedan aumenta. Si no se gestiona, el burnout acaba despidiendo a las personas que la empresa no quiso perder.

**Acciones concretas:**
- Revisión del scope de responsabilidades con cada persona crítica: ¿qué se puede dejar de hacer, automatizar o contratar externamente?
- Contratación puntual de freelances para absorber la carga de transición
- Priorización explícita: en qué proyectos concentrar la energía, cuáles se ponen en pausa

## EL PROCESO DE OFFBOARDING CON DIGNIDAD

Las personas que salen también impactan la retención de las que se quedan. Si ven un offboarding irrespetuoso, la confianza cae aunque ellas no hayan sido afectadas.

**Principios de offboarding digno:**
- Tiempo suficiente para despedirse del equipo (no el mismo día del anuncio)
- Carta de recomendación ofrecida proactivamente
- Liquidación correcta y puntual
- Outplacement (apoyo en búsqueda de empleo) si los recursos lo permiten

## PLAN DE ACCIÓN EN LOS PRIMEROS 30 DÍAS DE CRISIS

**Días 1-3:** Identifica el talento crítico. Haz la matriz y el mapa de riesgo de fuga.
**Días 4-7:** Comunica al equipo lo que sabes. No esperes a tener toda la información para comunicar.
**Días 8-15:** Managers tienen conversaciones 1:1 de retención con el talento crítico.
**Días 16-30:** Diseña las medidas de retención específicas para las personas de mayor riesgo. Decide quién recibe bono de retención si el presupuesto lo permite.

¿En qué tipo de crisis está tu organización (ERTE, reducción de plantilla, fusión, pivote estratégico) y cuántas personas aproximadamente están en el cuadrante de talento crítico?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Retener el talento crítico durante una crisis organizacional con identificación de riesgo de fuga, conversaciones de retención, bonos de permanencia y gestión de carga de trabajo.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control de costes de proyectos — seguimiento de desviaciones en servicios',
                'description'      => 'Cómo hacer el seguimiento de costes, gestionar los hitos de facturación y controlar las desviaciones en proyectos de servicios profesionales y consultoría.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en empresas de servicios profesionales, consultoría y agencias. Necesito un sistema completo de control de costes de proyectos que me permita hacer el seguimiento de costes reales vs. presupuestados, gestionar los hitos de facturación y detectar las desviaciones antes de que destruyan el margen.

## POR QUÉ LOS PROYECTOS DE SERVICIOS PIERDEN DINERO SIN QUE NADIE LO VEA

El problema específico de los proyectos de servicios es que el coste principal es el tiempo de las personas, que es intangible y difícil de controlar. Un proyecto puede parecer que va bien (el cliente está contento, las entregas van a tiempo) mientras internamente consume muchas más horas de las presupuestadas, destruyendo el margen.

**La trampa del scope creep silencioso:**
El cliente añade pequeñas solicitudes que ningún miembro del equipo se atreve a rechazar. Cada una parece pequeña. Pero 20 solicitudes "pequeñas" de 2 horas cada una son 40 horas fuera del presupuesto.

## LOS 3 TIPOS DE COSTE EN PROYECTOS DE SERVICIOS

| Tipo de coste | Descripción | Controlable por el PM |
|---------------|-------------|----------------------|
| Coste de tiempo propio | Horas de tu equipo × tarifa interna | Sí (gestión del scope y de la eficiencia) |
| Coste de subcontratación | Freelances, proveedores específicos | Sí (contratos fijos o por hora con tope) |
| Costes directos del proyecto | Licencias, viajes, materiales | Sí (aprobación previa) |

## EL SISTEMA DE CONTROL EN 4 CAPAS

### Capa 1 — Presupuesto inicial: la base de comparación

Todo empieza en el presupuesto. Un presupuesto de servicios bien construido tiene:

```
DESCOMPOSICIÓN DEL PRESUPUESTO POR FASE Y ROL

Proyecto: [Nombre]
Tarifa interna por hora:
  - Director: 150€/h
  - Senior: 80€/h
  - Junior: 45€/h

FASE 1 — DESCUBRIMIENTO (semanas 1-2)
  Director (20h × 150€)    = 3.000€
  Senior (30h × 80€)       = 2.400€
  Total fase 1             = 5.400€

FASE 2 — DISEÑO (semanas 3-6)
  Senior (80h × 80€)       = 6.400€
  Junior (40h × 45€)       = 1.800€
  Subcontratación: UX      = 2.000€
  Total fase 2             = 10.200€

[...demás fases...]

TOTAL PROYECTO:            = 32.000€
Margen objetivo (30%):     = 9.600€
Precio de venta:           = 41.600€
```

### Capa 2 — Registro de horas: el sistema de captura de datos

Sin registro de horas por proyecto, no hay control. Herramientas simples y por qué usarlas:

| Herramienta | Mejor para | Integración |
|-------------|-----------|-------------|
| Toggl Track | Equipos pequeños, no te piden mucho | Jira, Asana, Notion |
| Harvest | Proyectos con facturación integrada | QuickBooks, Xero |
| Clockify | Gratis, equipos con poco budget | Varias |
| Everhour | Integrado en la herramienta de proyectos | Asana, Linear, Trello |

**Regla de registro:** Las horas se registran el mismo día, no a final de semana. La memoria de horas trabajadas se degrada rápidamente.

### Capa 3 — Dashboard de control: la foto semanal

Cada semana, el PM o el responsable financiero revisa el estado de cada proyecto activo con este dashboard:

```
DASHBOARD DE PROYECTO — Semana [N]

Proyecto: [Nombre]    Cliente: [Cliente]    PM: [Persona]

HORAS
Presupuestadas total:        200h
Consumidas hasta hoy:        95h
Estimación a terminar:       130h
TOTAL ESTIMADO:              225h   ← ¡ALERTA: 12,5% sobre presupuesto!

COSTE
Presupuesto de coste:        16.000€
Coste real hasta hoy:        7.600€
Coste estimado a terminar:   10.400€
TOTAL ESTIMADO:              18.000€   ← ¡ALERTA: 12,5% sobre presupuesto!

FACTURACIÓN
Precio de venta:             20.800€
Facturado hasta hoy:         5.000€ (hito 1)
Pendiente de facturar:       15.800€

MARGEN ESTIMADO:
Precio - Coste estimado:     20.800€ - 18.000€ = 2.800€ (13,5%)
vs. margen objetivo:                               4.800€ (23%)
DESVIACIÓN DE MARGEN:        -2.000€ ← Acción requerida

PRÓXIMO HITO DE FACTURACIÓN:
Hito 2: Entrega de fase 2 → 7.000€ → Fecha prevista: [fecha]
```

### Capa 4 — Protocolo de desviación: actuar antes de que sea tarde

Define umbrales de alerta y acciones asociadas:

| Desviación de horas | Acción |
|--------------------|--------|
| < 5% | Monitorización. Sin acción inmediata. |
| 5-15% | Reunión interna: ¿por qué? ¿scope creep o subestimación? Conversación con el cliente. |
| 15-25% | Conversación formal con el cliente sobre ajuste de scope o presupuesto adicional. |
| > 25% | Escalada al director. Propuesta de Change Order al cliente. Revisión del proceso de presupuestación. |

## GESTIÓN DE LOS HITOS DE FACTURACIÓN

Los hitos de facturación son el mecanismo que protege tu cash flow en proyectos de larga duración. Un proyecto sin hitos intermedios genera trabajo durante meses sin ingresos, y si el cliente cancela, el riesgo es enorme.

**Estructura de hitos recomendada:**

| Hito | % del proyecto | Condición | Ejemplo |
|------|---------------|-----------|---------|
| Inicio | 30% | Firma del contrato y pago del anticipo | "Al inicio del proyecto" |
| Entrega intermedia | 30% | Aprobación de entregable clave de la fase media | "Aprobación del diseño" |
| Entrega final | 30% | Aceptación del entregable final | "Entrega y aprobación final" |
| Soporte/retención | 10% | 30-60 días tras el cierre | "Período de soporte post-entrega" |

**Cláusula crítica en el contrato:**
"El cliente dispondrá de [X] días hábiles para revisar y aprobar cada entregable. Transcurrido ese plazo sin comunicación por escrito de objeciones, se entenderá el entregable como aprobado y el hito como factura able."

## GESTIÓN DEL SCOPE CREEP: EL PROCESO DE CHANGE ORDER

El scope creep es la principal causa de proyectos no rentables. El proceso de Change Order lo formaliza:

**Cuándo emitir un Change Order:**
- Cualquier solicitud que añade trabajo no contemplado en el contrato original
- Cambios en los requisitos que requieren rehacer trabajo ya entregado
- Ampliación de plazos solicitada por el cliente que consume tiempo de coordinación

**Plantilla de Change Order:**

```
CHANGE ORDER #[N]
Proyecto: [Nombre]    Fecha: [Fecha]

SOLICITUD DEL CLIENTE:
[Descripción específica de lo que piden]

IMPACTO EN EL PROYECTO:
Horas adicionales estimadas: [X] horas
Perfil requerido: [Senior/Director]
Coste adicional: [X€]
Impacto en el plazo: +[X] días

PRECIO ADICIONAL: [X€]

CONDICIONES:
Este trabajo comenzará una vez firmado el presente Change Order.
El plazo de entrega se amplía en [X] días hábiles desde la aprobación.

[Firma del cliente] ____________________    Fecha: _______
[Tu firma]         ____________________    Fecha: _______
```

¿Cuántos proyectos activos tienes simultáneamente y cuál es el tamaño medio en horas y euros? Con esa información te diseño el sistema de control adaptado a tu volumen.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Controlar los costes de proyectos de servicios con presupuesto descompuesto, registro de horas, dashboard semanal, protocolo de alerta y gestión de Change Orders.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Fiscalidad de las criptomonedas en España — cómo declarar y qué riesgos evitar',
                'description'      => 'Cómo declarar las criptomonedas en España (persona física y empresa), qué obligaciones tiene la empresa que las usa y qué riesgos fiscales evitar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal especializado en criptomonedas y activos digitales en el marco del sistema tributario español. Necesito entender cómo declarar las criptomonedas correctamente, qué obligaciones específicas tiene una empresa que las usa y qué riesgos fiscales evitar.

## EL MARCO LEGAL EN ESPAÑA (2024-2025)

Las criptomonedas en España se tratan como activos digitales a efectos fiscales. No existe una ley tributaria específica para criptomonedas, pero la Agencia Tributaria (AEAT) ha publicado consultas vinculantes (CV) que aclaran su tratamiento.

**Los hitos regulatorios clave:**
- **Modelo 721:** Obligación de declarar criptomonedas en el extranjero (similar al 720 para cuentas bancarias). Vigente desde el ejercicio 2023.
- **DAC8:** Directiva europea de intercambio automático de información sobre criptoactivos. Los exchanges europeos reportarán las operaciones de sus usuarios a las autoridades fiscales a partir de 2026.
- **MiCA (Reglamento de Mercados de Criptoactivos):** Regulación de los prestadores de servicios de criptoactivos en la UE.

## TRIBUTACIÓN PARA PERSONA FÍSICA

### IRPF: cuándo y cómo tributan las ganancias

Las ganancias y pérdidas de criptomonedas tributan en el IRPF como **ganancias patrimoniales** en la base imponible del ahorro:

| Ganancia patrimonial | Tipo impositivo (2024) |
|---------------------|----------------------|
| Hasta 6.000€ | 19% |
| De 6.000€ a 50.000€ | 21% |
| De 50.000€ a 200.000€ | 23% |
| Más de 200.000€ | 27% |

**¿Cuándo se genera el hecho imponible?**

| Operación | ¿Tributa? | Cuándo |
|-----------|-----------|--------|
| Compra de cripto con euros | No | No hay ganancia, solo compra |
| Venta de cripto a euros | Sí | En el momento de la venta |
| Intercambio cripto por cripto (ej. BTC → ETH) | Sí | En el momento del intercambio |
| Uso de cripto para pagar un bien o servicio | Sí | En el momento del pago |
| Staking, minería | Sí | Cuando se recibe la recompensa (como rendimiento del capital mobiliario) |
| Airdrops | Sí | Cuando se reciben (valor de mercado en ese momento) |
| Transferencia entre wallets propias | No | No hay transmisión a terceros |

**El método de valoración FIFO:**
España usa el método FIFO (First In, First Out) para calcular el coste de adquisición. Si compraste BTC en 3 momentos distintos y vendes una parte, se considera que vendes primero las unidades compradas antes.

**Ejemplo de cálculo:**
```
Compra 1: 0,5 BTC a 20.000€/BTC = 10.000€ (coste)
Compra 2: 0,5 BTC a 30.000€/BTC = 15.000€ (coste)
Venta: 0,5 BTC a 40.000€/BTC = 20.000€ (ingreso)

Coste de la venta (FIFO): 10.000€ (primera compra)
Ganancia patrimonial: 20.000€ - 10.000€ = 10.000€
Impuesto a pagar: 19% × 6.000€ + 21% × 4.000€ = 1.140€ + 840€ = 1.980€
```

### Casillas del IRPF donde declarar

| Operación | Casilla |
|-----------|---------|
| Ganancias y pérdidas de transmisión de criptomonedas | 1626-1634 (Ganancias patrimoniales derivadas de transmisiones de otros bienes) |
| Rendimientos de staking / minería | 28-30 (Rendimientos del capital mobiliario) |

### Modelo 721: declaración de criptomonedas en el extranjero

Si tienes criptomonedas custodiadas por un exchange o proveedor con sede fuera de España y el valor total supera los **50.000€** a 31 de diciembre, debes presentar el Modelo 721.

**Plazos:** enero-marzo del año siguiente al ejercicio.
**Sanciones:** Infracción grave si no se presenta. Multa mínima de 10.000€.

## TRIBUTACIÓN PARA EMPRESAS

### Impuesto de Sociedades

Las criptomonedas en el activo de una empresa se tratan como **activos intangibles**. Su valoración y tratamiento sigue las normas contables del Plan General de Contabilidad:

- **Compra de cripto:** Se registra como activo a precio de adquisición
- **Venta de cripto:** La diferencia entre precio de venta y coste de adquisición es un resultado de la actividad (base imponible del IS)
- **Valoración a cierre de ejercicio:** En principio al precio de adquisición; si el valor de mercado es inferior (deterioro), se puede registrar deterioro

### IVA

La compraventa de criptomonedas está **exenta de IVA** (resolución del TJUE y consultas de la DGT). Sin embargo, los servicios relacionados con criptomonedas (minería, custodia, intermediación) pueden estar sujetos a IVA dependiendo del caso.

### Obligaciones informativas adicionales para empresas

| Obligación | Cuando aplica |
|------------|---------------|
| Modelo 721 | Si la empresa custodia cripto en exchanges del extranjero y el valor supera 50.000€ |
| Modelo 232 (operaciones vinculadas) | Si la empresa hace operaciones con cripto con partes vinculadas |
| Registros contables detallados | Siempre. Debes poder justificar cada operación ante la AEAT. |

## LOS 5 RIESGOS FISCALES MÁS FRECUENTES

### 1. No declarar los intercambios cripto-cripto

Muchos contribuyentes creen que solo tributan al convertir a euros. Error: cada intercambio (BTC → ETH, ETH → USDT) es una transmisión patrimonial que genera ganancia o pérdida.

**Riesgo:** La AEAT cruza datos con los exchanges que operan en España (Coinbase, Binance EU, Kraken tienen obligación de reportar) y puede detectar estas operaciones no declaradas.

### 2. No documentar el coste de adquisición

Si no puedes justificar cuánto pagaste por las criptomonedas que vendes, la AEAT puede considerar que el coste de adquisición es cero y calcular la ganancia sobre el valor total de la venta.

**Solución:** Guarda los historiales de transacciones de todos los exchanges que hayas usado, incluyendo los ya cerrados.

### 3. Tratar el staking como no sujeto

Los rendimientos de staking, yield farming y préstamo de cripto tributan como rendimientos del capital mobiliario en el año en que se reciben, al tipo del 19-27%.

### 4. No presentar el Modelo 721

La sanción por no presentar el Modelo 721 cuando existe obligación es muy elevada. Además, la AEAT ha anunciado que cruzará datos con los exchanges europeos bajo DAC8.

### 5. Usar cripto para pagar sin declararlo

Cuando una empresa usa cripto para pagar a un proveedor, el pago se valorará a precio de mercado en el momento del pago. La diferencia entre el coste de adquisición y el valor en el momento del pago es una ganancia patrimonial sujeta a IS.

## HERRAMIENTAS DE CONTABILIDAD FISCAL PARA CRIPTOMONEDAS

| Herramienta | Para qué | Coste aprox. |
|-------------|----------|-------------|
| Koinly | Importa transacciones de exchanges y genera informe fiscal | 50-200€/año |
| CoinTracking | Soporta más exchanges, reportes avanzados | 100-300€/año |
| Cryptohopper Tax | Integrado con exchanges populares | 30-100€/año |

Estas herramientas calculan automáticamente las ganancias y pérdidas siguiendo el método FIFO, pero siempre debes revisar los resultados con un asesor fiscal.

## RECOMENDACIONES PRÁCTICAS

1. **Conserva todos los justificantes** de compra, venta e intercambio durante al menos 4 años (plazo de prescripción)
2. **Usa software de contabilidad fiscal** si tienes más de 20 operaciones al año
3. **Consulta con un asesor** antes de hacer operaciones de importe relevante
4. **Presenta el 721 si aplica** aunque no hayas tenido ganancias

¿Eres persona física o empresa? ¿Qué tipo de operaciones has realizado (compraventa, staking, yield farming)? Con esa información te doy el análisis específico de tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Declarar correctamente las criptomonedas en España en IRPF e IS, presentar el Modelo 721 y evitar los 5 riesgos fiscales más frecuentes para personas físicas y empresas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Encuestas de satisfacción post-resolución — diseño y análisis que mejoran el soporte',
                'description'      => 'Cómo diseñar, cronometrar y analizar las encuestas post-resolución que realmente mejoran la calidad del soporte y no se convierten en ruido estadístico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en Customer Experience con experiencia en Voice of Customer y métricas de calidad de soporte. Necesito un sistema completo para diseñar, enviar y analizar encuestas de satisfacción post-resolución que generen insights accionables y mejoren la calidad del equipo de soporte.

## POR QUÉ LA MAYORÍA DE LAS ENCUESTAS DE SOPORTE NO SIRVEN PARA NADA

Las encuestas de satisfacción de soporte tienen dos problemas sistémicos:

1. **Sesgo de respuesta extrema:** Las personas que responden son las muy satisfechas o las muy insatisfechas. La mayoría silenciosa (los neutrales) no responde. El resultado: las métricas no reflejan la experiencia real del cliente.

2. **Datos sin acción:** El equipo recibe las métricas pero no tiene un proceso claro para actuar sobre los resultados. La encuesta se convierte en un KPI de reporting, no en una herramienta de mejora.

## LAS 3 MÉTRICAS PRINCIPALES DE SATISFACCIÓN DE SOPORTE

### 1. CSAT (Customer Satisfaction Score)

**Qué mide:** Satisfacción inmediata con la interacción de soporte.
**Pregunta estándar:** "¿Cómo valorarías tu experiencia con el servicio de soporte hoy?" (escala 1-5 o 1-10)
**Cálculo:** CSAT = (Nº de respuestas positivas / Total respuestas) × 100
- En escala 1-5: positivas = 4 y 5
- En escala 1-10: positivas = 9 y 10

**Benchmark:** CSAT > 80% es bueno; > 90% es excelente.

**Cuándo usarlo:** Mide la calidad de la interacción individual, no la calidad del producto ni la relación global con la empresa.

### 2. CES (Customer Effort Score)

**Qué mide:** El esfuerzo que el cliente tuvo que hacer para resolver su problema.
**Pregunta estándar:** "¿Qué tan fácil fue resolver tu problema hoy?" (escala 1-7, de "Muy difícil" a "Muy fácil")
**Por qué es poderoso:** El CES tiene mayor correlación con la lealtad del cliente que el CSAT. Reducir el esfuerzo del cliente es la palanca más efectiva para reducir el churn.

**Cuándo usarlo:** Para identificar fricciones en el proceso de soporte (cuántos contactos necesita el cliente para resolver, cuántos canales tiene que usar).

### 3. FCR (First Contact Resolution)

**Qué mide:** % de issues resueltos en el primer contacto sin necesidad de seguimiento.
**Cálculo:** FCR = (Tickets resueltos en primer contacto / Total tickets) × 100
**Benchmark:** FCR > 70% es bueno; > 85% es excelente.

**Por qué importa:** Cada ticket que no se resuelve en el primer contacto genera un segundo contacto, que tiene un coste 4x mayor que el primero.

## DISEÑO DE LA ENCUESTA: LO QUE FUNCIONA

### Principios de diseño

**1. Máximo 3 preguntas**
Cada pregunta adicional reduce la tasa de respuesta en un 5-10%. Una encuesta de soporte efectiva tiene:
- 1 pregunta de métrica principal (CSAT o CES)
- 1 pregunta abierta de cualificación (¿por qué esa puntuación?)
- 1 pregunta opcional de seguimiento

**2. La pregunta abierta es la más valiosa**
La puntuación numérica te dice QUÉ está pasando. El texto libre te dice POR QUÉ. Sin la pregunta abierta, no tienes datos accionables.

**3. Escala Likert visual para móvil**
El 65% de las encuestas se responden en móvil. Usa emojis o estrellas, no escalas numéricas de 7 puntos que requieren leer.

### Plantilla de encuesta de soporte (CSAT)

```
Asunto: ¿Cómo fue tu experiencia con nosotros?
Preheader: Solo 30 segundos. Tu opinión mejora nuestro soporte.

---

Hola [nombre],

Resolvimos tu consulta sobre [resumen breve del ticket].

¿Cómo valorarías tu experiencia?

😞 😐 😊 😄 🤩
  1     2    3    4    5

[Independientemente de lo que hayan seleccionado]

¿Qué podría haber sido mejor?
[Campo de texto libre]

---
Este email es sobre el ticket #[número] cerrado el [fecha].
```

### Plantilla de encuesta (CES)

```
¿Qué tan fácil fue resolver tu problema hoy?

Muy difícil ←───────────────→ Muy fácil
     1    2    3    4    5    6    7

¿Qué te hizo más difícil o más fácil la experiencia?
[Campo de texto libre]
```

## TIMING: CUÁNDO ENVIAR LA ENCUESTA

El timing es crítico para la tasa de respuesta y la calidad de las respuestas:

| Timing | Tasa de respuesta | Calidad de la respuesta |
|--------|------------------|------------------------|
| Inmediato (al cerrar el ticket) | Alta (15-25%) | Alta (experiencia fresca) |
| 1-4 horas después del cierre | Alta (12-20%) | Alta |
| Al día siguiente | Media (8-15%) | Media-alta |
| 3+ días después | Baja (3-8%) | Baja (el cliente no recuerda) |

**Recomendación:** Envía la encuesta en los 30 minutos siguientes al cierre del ticket, pero no en el mismo email de cierre. Un email separado tiene mayor tasa de respuesta.

**Excepciones al timing inmediato:**
- No envíes encuesta si el ticket se reabrió (el problema no estaba resuelto)
- Espera 24h para tickets de alta carga emocional (incidentes, reclamaciones graves)
- No envíes si el cliente ya recibió una encuesta en los últimos 30 días

## ANÁLISIS DE RESULTADOS: DE DATOS A ACCIÓN

### Dashboard de métricas semanales

```
INFORME SEMANAL DE CALIDAD DE SOPORTE
Semana del [fecha]

MÉTRICAS PRINCIPALES
CSAT: 87% (+2pp vs. semana anterior)
CES: 5,6/7 (-0,1 vs. semana anterior)
FCR: 74% (→ sin cambio)
Tasa de respuesta a encuesta: 18%

POR AGENTE (CSAT)
María García:    94% ████████████████████ (30 respuestas)
Carlos López:    88% ██████████████████   (25 respuestas)
Ana Martínez:    76% ███████████████      (21 respuestas)  ← Atención

POR TIPO DE TICKET (CSAT más bajo)
Facturación y pagos: 71%   ← Issue sistémico
Integraciones técnicas: 79%
Preguntas de producto: 91%

TOP 3 TEMAS EN TEXTO LIBRE (negativo)
1. "Tardó mucho en responder" (23 menciones)
2. "Tuve que explicar el problema varias veces" (17 menciones)
3. "La solución no funcionó a la primera" (12 menciones)
```

### Proceso de acción: el cierre del loop

El análisis solo tiene valor si genera acción. El proceso de cierre del loop:

**Loop a nivel de ticket individual (Close the Loop):**
Para todos los tickets con CSAT < 3 (o CES < 3):
- El equipo de CS contacta al cliente en 24 horas para disculparse y resolver el problema real
- El manager revisa el caso para entender qué falló
- Si el problema es sistémico, se escala al área responsable

**Loop a nivel de equipo (mejora continua):**
- Reunión semanal de calidad de 30 minutos: revisar el informe y los 3 temas más frecuentes
- Cada tema recurrente genera una acción concreta: actualización de la knowledge base, formación del equipo, cambio de proceso o escalada al producto

**Loop a nivel de producto (voz del cliente):**
Los tickets con menciones recurrentes de dificultad o confusión se reportan al equipo de producto mensualmente como "friction report":

```
FRICTION REPORT — [Mes]
Para: Equipo de Producto
De: Customer Support

TOP PROBLEMAS QUE GENERAN TICKETS EVITABLES:

1. Configuración de integraciones (87 tickets este mes)
   Verbatim del cliente: "No entiendo qué significa el campo X"
   Propuesta: mejorar el tooltip y añadir documentación en el paso 3 del wizard

2. Confusión entre plan Free y Pro (45 tickets)
   Verbatim: "Pensé que X estaba incluido en mi plan"
   Propuesta: comparativa más clara en el pricing page y en el upgrade prompt
```

¿Qué herramienta de soporte usas actualmente (Zendesk, Intercom, Freshdesk) y tienes ya algún sistema de encuestas? Con esa información te ayudo a implementar el sistema en tu stack específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar encuestas de satisfacción de soporte con CSAT y CES, optimizar el timing de envío y crear un proceso de análisis y cierre del loop que genera mejoras reales.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Trabajar con agencias como proveedor freelance — condiciones y riesgos',
                'description'      => 'Ventajas, riesgos y cómo negociar las condiciones como proveedor freelance de agencias para no ser el último en cobrar y proteger tu margen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de negocio especializado en profesionales independientes con experiencia en la cadena de valor de las agencias. Necesito una guía completa sobre cómo trabajar con agencias como proveedor freelance: qué ventajas tiene, qué riesgos implica y cómo negociar las condiciones para no ser el último en cobrar ni sacrificar mi margen sin control.

## EL MODELO: CÓMO FUNCIONA LA CADENA AGENCIA-FREELANCE

Las agencias (de marketing, comunicación, diseño, desarrollo, consultoría) frecuentemente subcontratan trabajo a freelances por varias razones:
- Necesitan expertise especializado que no tienen internamente
- Tienen picos de demanda que no pueden cubrir con su equipo fijo
- Necesitan reducir costes sin despedir empleados

Como freelance en esta cadena, eres un **subcontratista**: la agencia te contrata, tú entregas el trabajo, la agencia lo factura al cliente final con su margen. Tú no ves al cliente final; la agencia es tu cliente.

**El margen de la agencia sobre tu trabajo:**
Las agencias suelen aplicar un margen del 30-60% sobre tu tarifa antes de facturar al cliente final. Eso significa que si cobras 60€/h, la agencia puede estar facturando 90-100€/h por tu trabajo. Esto es completamente legítimo y es el modelo de negocio de las agencias, pero debes saberlo para posicionar tu tarifa correctamente.

## VENTAJAS DE TRABAJAR CON AGENCIAS

| Ventaja | Descripción |
|---------|-------------|
| Volumen de trabajo | Una sola agencia puede darte trabajo de forma recurrente, reduciendo el coste de adquisición de clientes |
| Sin gestión del cliente final | La agencia gestiona la relación con el cliente; tú te concentras en la entrega |
| Diversificación de sectores | A través de una agencia puedes trabajar en proyectos de distintos sectores sin buscarlos tú |
| Referidos | Si trabajas bien, la agencia puede referirte a otros contactos o usarte como referencia |
| Menos riesgo comercial | No necesitas invertir en ventas o marketing; la agencia trae el trabajo |

## LOS 5 RIESGOS PRINCIPALES DE TRABAJAR CON AGENCIAS

### Riesgo 1 — Morosidad de segundo nivel

Este es el riesgo más frecuente y más dañino. Funciona así:
- La agencia entrega el trabajo al cliente final
- El cliente final tarda en pagar a la agencia
- La agencia te paga a ti cuando cobra del cliente final
- Si el cliente final no paga, tú tampoco cobras

Muchos freelances descubren este riesgo cuando ya tienen facturas impagas de 90, 120 o 180 días.

**Señales de alerta de morosidad potencial:**
- La agencia no puede darte los términos de pago por escrito
- Los plazos de pago que proponen son > 60 días
- Cuando preguntas cuándo cobrarás, la respuesta es "cuando cobre el cliente"
- La agencia tiene mala reputación en el sector (busca referencias antes de empezar)

### Riesgo 2 — Condiciones contractuales que favorecen solo a la agencia

Los contratos de las agencias con sus proveedores suelen incluir:
- Confidencialidad absoluta sobre el cliente final y el proyecto (no puedes mencionar el trabajo en tu portfolio)
- No competencia que te impide contactar al cliente final directamente
- Propiedad intelectual cedida totalmente a la agencia sin restricción
- Penalizaciones desproporcionadas por retrasos o errores

### Riesgo 3 — Scope creep sin soporte de la agencia

La agencia acepta cambios del cliente final sin consultarte. Los cambios te llegan ya aprobados y sin coste adicional para la agencia, pero te generan trabajo extra que nadie te va a pagar.

### Riesgo 4 — Dependencia excesiva de un solo cliente-agencia

Si el 50%+ de tus ingresos vienen de una sola agencia, eres vulnerable. Una decisión de la agencia (cambio de estrategia, pérdida de un cliente clave, cierre) puede eliminarte ese ingreso de un día para otro.

### Riesgo 5 — Tarifa de mercado que erosiona tu posicionamiento

Las agencias negocian duramente porque maximizan su margen sobre tu trabajo. Si aceptas tarifas muy bajas para conseguir el volumen de la agencia, tu posicionamiento en el mercado se ve afectado y te cuesta subir tarifas más adelante.

## CÓMO NEGOCIAR LAS CONDICIONES CON UNA AGENCIA

### Lo innegociable: el pago no puede depender del cobro del cliente final

**Cláusula que debes rechazar:**
"El pago se realizará en los 30 días siguientes a la recepción del pago del cliente final."

**Por qué es una trampa:** Te convierte en co-financiador del riesgo de impago del cliente final, sin ninguna compensación por ese riesgo.

**Contraoferta:**
"Los pagos se realizarán en un plazo máximo de [30/45] días desde la emisión de mi factura, independientemente del estado de cobro del cliente final."

Si la agencia se niega, pedid un descuento por riesgo: "Si el pago está condicionado a vuestra cobranza, necesito que la tarifa refleje ese riesgo: +15% sobre mi tarifa estándar."

### Plazos de pago razonables para agencias

| Plazo | Evaluación |
|-------|-----------|
| 15-30 días | Excelente. Trabaja con esta agencia. |
| 30-45 días | Razonable. Acepta con contrato claro. |
| 45-60 días | Aceptable para proyectos grandes. Pide anticipo del 30%. |
| > 60 días | Pide tarifa majorada o anticipo del 50%. |
| "Cuando cobre el cliente" | Rechaza o añade un tope de 90 días como máximo absoluto. |

### El anticipo: tu protección más efectiva

En proyectos de más de 5.000€ con una agencia nueva, pide siempre un anticipo:
- 30-50% al inicio del proyecto
- El anticipo reduce el riesgo de impago total
- Si la agencia se niega al anticipo, es una señal de alarma

### Cláusula de portfolio

Las agencias suelen prohibir mencionar el cliente final. Negocia al menos poder mostrar el trabajo de forma genérica:

**Propuesta:**
"Podré mostrar el trabajo en mi portfolio sin mencionar el nombre del cliente final ni de la marca, usando una descripción genérica como 'Proyecto de [tipo de proyecto] para una empresa de [sector]'."

Muchas agencias aceptan esto, ya que protege la confidencialidad del cliente final sin impedirte construir tu portfolio.

## CONTRATO MÍNIMO PARA TRABAJAR CON AGENCIAS

Nunca trabajes sin contrato escrito. El contrato mínimo debe incluir:

```
1. DESCRIPCIÓN DEL TRABAJO
   Alcance exacto con lista de entregables y criterios de aceptación.

2. PLAZOS
   Fecha de inicio, hitos intermedios, fecha de entrega final.
   Gestión de retrasos causados por la agencia (extensión automática del plazo).

3. PRECIO Y FORMA DE PAGO
   Importe total o tarifa por hora con máximo de horas.
   Plazo de pago desde emisión de factura (fecha concreta, no "tras cobrar al cliente").
   Penalización por pago tardío (ej. 1,5%/mes sobre el importe impagado).

4. CAMBIOS DE SCOPE
   Proceso formal de aprobación de cualquier cambio fuera del alcance original.
   Los cambios no aprobados por escrito no generan obligación de ejecución.

5. PROPIEDAD INTELECTUAL
   La propiedad se transfiere al cliente (agencia) en el momento del pago completo.
   Antes del pago completo, los derechos son del freelance.

6. CONFIDENCIALIDAD
   Qué es confidencial (específico, no genérico).
   Qué queda fuera: menciones en portfolio (negocia la excepción aquí).
```

## DIVERSIFICACIÓN: EL PORTFOLIO DE CLIENTES SANO

La regla de concentración para un freelance que trabaja con agencias:

| Proporción máxima de ingresos de una sola fuente | Riesgo |
|--------------------------------------------------|--------|
| < 30% | Bajo: puedes absorber la pérdida sin crisis |
| 30-50% | Medio: trabaja en diversificar activamente |
| > 50% | Alto: eres vulnerable a una decisión de esa agencia |

**Plan de diversificación:**
- 2-3 agencias activas como máximo a la vez
- 1-2 clientes directos (aunque sean más pequeños)
- 1 proyecto propio o pasivo (product, curso, consultoría puntual)

¿Con qué tipo de agencias trabajas (marketing, desarrollo, diseño) y cuál es la situación contractual actual? Te doy la lista de cambios prioritarios a negociar en tus próximos contratos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Negociar condiciones como proveedor freelance de agencias: plazos de pago, anticipos, cláusulas de scope creep y contrato mínimo para proteger el cobro.',
                'vote_score'       => 41,
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
