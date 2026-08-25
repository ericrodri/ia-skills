<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills82Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido para YouTube',
                'description'      => 'SEO de vídeo, thumbnails, retención y el sistema de publicación que hace crecer el canal desde cero hasta una audiencia fiel.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en marketing de contenido en vídeo y crecimiento de canales de YouTube con experiencia en distintas categorías (educativo, entretenimiento, B2B, lifestyle). Necesito diseñar la estrategia completa para hacer crecer mi canal de YouTube.

**Mi canal:**
[Temática del canal, situación actual (nº de suscriptores, vídeos publicados, views medias), objetivo a 12 meses]

**Audiencia objetivo:**
[Perfil del espectador: profesión, edad, problema o interés que busca resolver, nivel de conocimiento sobre el tema]

**Recursos disponibles:**
[Tiempo dedicado a semana, equipo (solo / con ayuda), presupuesto de producción]

---

## PARTE 1 — EL ALGORITMO DE YOUTUBE Y CÓMO TRABAJAR CON ÉL

### Cómo funciona el algoritmo (lo que realmente importa)

YouTube optimiza para el tiempo de visionado de la plataforma, no de tu vídeo. Las métricas que más pesan:

1. **Click-Through Rate (CTR)**: % de personas que hacen clic en tu vídeo cuando lo ven en las sugerencias o en la búsqueda. CTR saludable: 4-10%. Si es < 4%, hay un problema con el título o el thumbnail.

2. **Average View Duration (AVD)**: cuántos minutos ven tus espectadores de media. Más importante que el porcentaje de retención para canales con vídeos de diferente duración.

3. **Audience Retention %**: qué porcentaje del vídeo completo ven. El algoritmo busca curvas de retención planas o con picos, no en caída libre.

4. **Satisfacción**: likes, comentarios, shares, "no me interesa" — señales de si el contenido gustó.

**Consecuencia para la estrategia**: hacer clic es fácil; retener al espectador es lo que realmente te hace crecer.

### Los tres tipos de tráfico en YouTube

| Tipo de tráfico | Fuente | % habitual en canal creciente | Cómo optimizarlo |
|----------------|--------|-------------------------------|-----------------|
| Búsqueda | El usuario escribe una query | 20-40% | SEO de vídeo (keywords, título, descripción) |
| Sugeridos / Recomendados | YouTube te muestra en la barra lateral o al finalizar un vídeo | 40-60% | CTR alto y retención alta en tu propia audiencia |
| Inicio / Home feed | YouTube te muestra a suscriptores y usuarios similares | 15-30% | Consistencia y satisfacción de la audiencia actual |

---

## PARTE 2 — SEO DE VÍDEO

### Investigación de keywords para YouTube

YouTube es el segundo buscador del mundo. Usa estas herramientas para encontrar keywords con demanda:

1. **Autocompletar de YouTube**: empieza a escribir tu tema en la barra de búsqueda y observa las sugerencias
2. **TubeBuddy o VidIQ**: muestran el volumen de búsqueda y la competencia de cada keyword
3. **Canales de la competencia**: qué títulos les están funcionando (ordena sus vídeos por "más vistos")
4. **Google Trends** (YouTube filter): valida si el interés en el tema es creciente, estable o declinante

### Anatomía de un título optimizado

El título debe:
1. Incluir la keyword principal en los primeros 40-60 caracteres (YouTube trunca después)
2. Generar curiosidad o prometer un resultado concreto
3. Ser honesto con el contenido del vídeo (no clickbait — YouTube penaliza la decepción)

**Fórmulas de título que funcionan bien**:
- "[Número] errores de [tema] que te están costando [consecuencia]"
- "Cómo [resultado deseado] en [tiempo] sin [obstáculo común]"
- "Por qué [creencia común sobre el tema] está EQUIVOCADA"
- "Hice [acción inusual] durante [tiempo] — esto pasó"
- "La guía definitiva de [tema] para [audiencia específica]"

### Descripción y etiquetas

**Descripción**: los primeros 2-3 líneas son las más importantes (se ven sin "ver más"). Include la keyword principal en el primer párrafo.

Estructura recomendada de la descripción:
1. Párrafo con keyword + resumen del vídeo (2-3 líneas)
2. Índice con timestamps si el vídeo es largo (impulsa la retención porque el usuario salta a lo que le interesa)
3. Links relevantes (tu newsletter, tu web, otros vídeos relacionados)
4. Redes sociales y CTA

**Etiquetas**: menos importantes desde 2020, pero útiles para vídeos en nichos específicos. Incluye: keyword exacta, variaciones de la keyword, tu nombre de canal.

---

## PARTE 3 — THUMBNAILS: EL ANUNCIO DE TU VÍDEO

### Los principios del thumbnail de alta conversión

El thumbnail compite con cientos de miniaturas al mismo tiempo. Para ganar:

1. **Constraste**: que se vea bien sobre fondo blanco y fondo negro de YouTube
2. **Caras**: los rostros con emociones fuertes generan más clics que los thumbnails sin personas (si aplica a tu nicho)
3. **Texto**: máximo 3-5 palabras, en fuente bold, que complementen el título (no repitan exactamente lo mismo)
4. **Coherencia visual**: tu canal debe tener un estilo reconocible — si alguien ve tu thumbnail en las sugerencias, debe saber que es tuyo
5. **El "gap" emocional o de conocimiento": el thumbnail debe crear una pregunta en la mente del espectador que solo el vídeo puede responder

### A/B testing de thumbnails

YouTube Studio permite probar dos thumbnails distintos. Después de 500+ impresiones, determina cuál tiene mayor CTR. Prueba una variable a la vez:
- Color de fondo
- Con cara / sin cara
- Tipo de texto
- Composición de elementos

### Creación sin presupuesto

Herramientas gratuitas:
- **Canva**: plantillas de YouTube thumbnail, fácil de usar
- **Adobe Express**: alternativa con más opciones de edición
- **Remove.bg**: eliminar fondos de fotos para componer thumbnails

---

## PARTE 4 — PRODUCCIÓN Y RETENCIÓN

### La curva de retención y qué la destruye

Puntos donde se va más audiencia:
- **Primeros 30 segundos**: si la intro es lenta o genérica ("hola a todos y bienvenidos a mi canal...")
- **Cambios de sección**: cuando el tema cambia bruscamente
- **Después de 8-10 minutos**: en vídeos largos, si no hay elementos que mantengan el interés

**Técnicas para mejorar la retención**:
1. **El hook de los primeros 15 segundos**: muestra el resultado antes de explicar el proceso ("al final de este vídeo sabrás X")
2. **Open loops**: menciona algo al principio que vas a explicar después ("más adelante te cuento el error que casi me cuesta...")
3. **Patrón de interrupción**: cada 60-90 segundos, cambia de plano, añade una animación o introduce un nuevo elemento visual
4. **Ritmo de edición**: corta las pausas y los "eh" y "um" — el silencio mata el ritmo
5. **Re-enganches en puntos de caída**: cuando el tema cambia, usa una frase de transición que recuerde por qué el espectador está viendo el vídeo

### Estructura de vídeo que retiene

**Para vídeos educativos / tutoriales** (8-20 min):
```
0:00 - 0:30  Hook: el resultado o el problema que vas a resolver
0:30 - 1:30  Por qué esto importa / credenciales rápidas (sin intro larga)
1:30 - X:XX  Contenido principal en 3-7 secciones con transiciones claras
X:XX - final  Recapitulación + CTA (suscribirse, ver siguiente vídeo, comentar)
```

**Para vídeos de entretenimiento / storytime** (6-15 min):
```
0:00 - 0:15  El gancho narrativo más fuerte del vídeo
0:15 - 2:00  Contexto de la historia
2:00 - X:XX  Desarrollo con giros y subidas de tensión
X:XX - final  Resolución + reflexión + CTA
```

---

## PARTE 5 — SISTEMA DE PUBLICACIÓN Y CRECIMIENTO

### Cadencia de publicación y consistencia

La consistencia importa más que la frecuencia. Mejor 1 vídeo por semana consistente que 4 vídeos un mes y 0 el siguiente.

Frecuencias recomendadas por fase del canal:
- **0-1.000 suscriptores**: 1 vídeo/semana mínimo (el algoritmo favorece a quienes publican con regularidad)
- **1.000-10.000 suscriptores**: 1-2 vídeos/semana
- **10.000+ suscriptores**: calidad sobre cantidad (1 buen vídeo/semana > 3 mediocres)

### El sistema de batch production

Graba y edita varios vídeos en lote para mantener la consistencia sin agotarte:

1. **Día 1 — Planificación y guiones**: define los temas de 4 vídeos, escribe los guiones o puntos principales
2. **Día 2 — Grabación**: graba los 4 vídeos en el mismo set con la misma iluminación
3. **Día 3-5 — Edición**: edita uno por día (con práctica, un vídeo de 10 min se edita en 2-3 horas)
4. **Día 6 — Thumbnails y SEO**: diseña los thumbnails y escribe títulos, descripciones y etiquetas de los 4 vídeos
5. **Semanas siguientes**: programa los vídeos en YouTube Studio para publicación escalonada

### Métricas mensuales a revisar

| Métrica | Qué revela | Objetivo por fase |
|---------|-----------|------------------|
| CTR promedio del canal | Si tus thumbnails y títulos funcionan | > 4% (> 6% excelente) |
| AVD (minutos visionados) | Si tu contenido retiene | Crecimiento mes a mes |
| Suscriptores netos / mes | Crecimiento neto de la audiencia | Crecimiento del 10-20% mensual en primeras etapas |
| Tráfico de búsqueda | Si tu SEO está funcionando | > 20% del total de vistas |
| Mejor y peor vídeo del mes | Qué formato y tema resonó más | Dobla lo que funciona |

### Primeros 1.000 suscriptores: la estrategia

El primer umbral de YouTube (para monetizar necesitas 1.000 suscriptores y 4.000 horas de visionado). Cómo llegar más rápido:

1. **Enfócate en 3-5 keywords de nicho** con búsquedas moderadas y baja competencia — es más fácil rankear que en keywords masivas
2. **Colabora con canales de tamaño similar**: videocolaboraciones que cruzan audiencias
3. **Comunidad**: responde todos los comentarios los primeros 6 meses — el engagement aumenta la retención del algoritmo
4. **Repropósito**: comparte clips de tus vídeos en TikTok, Instagram Reels y LinkedIn para atraer tráfico externo
5. **Playlist**: organiza tus vídeos en playlists temáticas — aumentan el tiempo de visionado de la sesión

---

## ENTREGABLES

1. Plan de contenido para los próximos 30 días: 4 vídeos con título, keyword principal y hook de los primeros 30 segundos
2. Plantilla de guión de vídeo (estructura con secciones, ganchos y CTAs)
3. Checklist de publicación: todo lo que revisar antes de publicar cada vídeo (título, descripción, thumbnail, etiquetas, programación)
4. Dashboard de métricas mensuales: qué revisar, qué comparar y qué cambiar según los datos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar la estrategia completa de crecimiento de un canal de YouTube: SEO de vídeo, thumbnails, retención y sistema de producción batch para publicar con consistencia.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de extensiones para navegadores',
                'description'      => 'Chrome Extensions con Manifest V3: arquitectura, APIs del navegador y cómo distribuir tu extensión en las tiendas oficiales de Chrome y Firefox.',
                'prompt_content'   => <<<'PROMPT'
Actúa como developer web con experiencia en desarrollo de extensiones para navegadores Chrome y Firefox usando Manifest V3. Necesito desarrollar una extensión desde cero y publicarla en las tiendas oficiales.

**Mi idea de extensión:**
[Describe brevemente qué hace la extensión: bloquea contenido / modifica páginas web / añade funcionalidad a una web específica / automatiza tareas / integra con una API]

**Stack preferido:**
[JavaScript vanilla / TypeScript / React / Vue para el popup — especifica]

**Objetivo:**
[Uso personal / distribución gratuita / monetización (freemium, one-time payment, suscripción)]

---

## PARTE 1 — ARQUITECTURA DE UNA EXTENSIÓN CHROME (MV3)

### Los componentes de una extensión

Una extensión de Chrome tiene varios componentes que se ejecutan en contextos distintos:

```
extensión/
├── manifest.json          # El "ADN" de la extensión — declara todo
├── background/
│   └── service-worker.js  # Se ejecuta en background (MV3: service worker, no página persistente)
├── content-scripts/
│   └── content.js         # Se inyecta en páginas web específicas
├── popup/
│   ├── popup.html         # La ventana que aparece al hacer clic en el icono
│   ├── popup.js
│   └── popup.css
├── options/
│   ├── options.html       # Página de configuración de la extensión
│   └── options.js
└── icons/
    ├── icon16.png
    ├── icon48.png
    └── icon128.png
```

### El manifest.json: la guía completa

```json
{
  "manifest_version": 3,
  "name": "Nombre de tu extensión",
  "version": "1.0.0",
  "description": "Descripción para la tienda (máximo 132 caracteres)",
  "icons": {
    "16": "icons/icon16.png",
    "48": "icons/icon48.png",
    "128": "icons/icon128.png"
  },
  "action": {
    "default_popup": "popup/popup.html",
    "default_icon": "icons/icon48.png",
    "default_title": "Nombre del tooltip"
  },
  "background": {
    "service_worker": "background/service-worker.js",
    "type": "module"
  },
  "content_scripts": [
    {
      "matches": ["https://*.example.com/*"],
      "js": ["content-scripts/content.js"],
      "run_at": "document_idle"
    }
  ],
  "permissions": ["storage", "tabs", "activeTab"],
  "host_permissions": ["https://api.tuapi.com/*"],
  "options_page": "options/options.html"
}
```

**Principio del mínimo privilegio**: declara solo los permisos que realmente necesitas — Google rechaza extensiones con permisos excesivos y los usuarios las desinstalan.

### Qué hace cada contexto

| Contexto | Dónde se ejecuta | Acceso al DOM | Acceso a APIs de Chrome | Persistencia |
|----------|-----------------|---------------|------------------------|-------------|
| Service Worker (background) | Proceso de Chrome separado | No | Sí (chrome.*) | No persistente — duerme y se activa |
| Content Script | En la página web | Sí (DOM de la web) | Limitado (solo chrome.runtime, storage) | Mientras la pestaña esté abierta |
| Popup | Ventana emergente de la extensión | Sí (su propio DOM) | Sí (chrome.*) | Solo mientras el popup está abierto |
| Options Page | Pestaña del navegador | Sí (su propio DOM) | Sí (chrome.*) | Solo mientras la pestaña esté abierta |

---

## PARTE 2 — APIs ESENCIALES DE CHROME

### chrome.storage: persistencia de datos

```javascript
// Guardar datos (asíncrono)
await chrome.storage.local.set({ key: 'value', settings: { theme: 'dark' } });

// Leer datos
const data = await chrome.storage.local.get(['key', 'settings']);
console.log(data.key);       // 'value'
console.log(data.settings);  // { theme: 'dark' }

// Escuchar cambios en el storage (útil para sincronizar popup y content script)
chrome.storage.onChanged.addListener((changes, namespace) => {
  for (const [key, { oldValue, newValue }] of Object.entries(changes)) {
    console.log(`${key} cambió de ${oldValue} a ${newValue}`);
  }
});

// chrome.storage.sync: sincroniza entre dispositivos del usuario (límite 100KB)
// chrome.storage.local: solo local (límite 10MB)
```

### Comunicación entre contextos (Message Passing)

El content script y el background no comparten memoria — se comunican con mensajes:

```javascript
// Desde content script → background
chrome.runtime.sendMessage({ action: 'fetchData', url: currentUrl }, (response) => {
  console.log('Respuesta del background:', response);
});

// En el background — escucha mensajes
chrome.runtime.onMessage.addListener((message, sender, sendResponse) => {
  if (message.action === 'fetchData') {
    fetch(message.url)
      .then(res => res.json())
      .then(data => sendResponse({ data }));
    return true; // IMPORTANTE: retorna true para respuesta asíncrona
  }
});

// Desde background → content script de una pestaña específica
chrome.tabs.sendMessage(tabId, { action: 'highlightText', text: 'hola' });
```

### chrome.tabs: interactuar con pestañas

```javascript
// Obtener la pestaña activa actual
const [activeTab] = await chrome.tabs.query({ active: true, currentWindow: true });
console.log(activeTab.url, activeTab.id);

// Inyectar un script en la pestaña actual (alternativa al content_script declarado)
await chrome.scripting.executeScript({
  target: { tabId: activeTab.id },
  func: () => {
    // Este código se ejecuta en el contexto de la página web
    document.body.style.backgroundColor = 'red';
  },
});
```

### chrome.contextMenus: menú clic derecho

```javascript
// En el service worker — al instalar la extensión
chrome.runtime.onInstalled.addListener(() => {
  chrome.contextMenus.create({
    id: 'searchSelection',
    title: 'Buscar "%s" en MiHerramienta',
    contexts: ['selection'],  // aparece cuando el usuario selecciona texto
  });
});

// Manejar el clic en el menú contextual
chrome.contextMenus.onClicked.addListener((info, tab) => {
  if (info.menuItemId === 'searchSelection') {
    const selectedText = info.selectionText;
    chrome.tabs.create({ url: `https://miherramienta.com/search?q=${selectedText}` });
  }
});
```

---

## PARTE 3 — PATRONES COMUNES

### Modificar el contenido de una página web (content script)

```javascript
// content.js — se inyecta en las páginas definidas en manifest.json
(function() {
  // Esperar a que el DOM esté listo
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  function init() {
    // Observar cambios dinámicos en el DOM (para SPAs como React/Vue)
    const observer = new MutationObserver((mutations) => {
      mutations.forEach(mutation => {
        if (mutation.addedNodes.length > 0) {
          processNewNodes(mutation.addedNodes);
        }
      });
    });
    observer.observe(document.body, { childList: true, subtree: true });

    // Procesamiento inicial
    processPage();
  }

  function processPage() {
    // Tu lógica de modificación de la página
    const elements = document.querySelectorAll('.clase-que-quieres-modificar');
    elements.forEach(el => {
      el.style.backgroundColor = '#f0f8ff';
      el.dataset.processedByExtension = 'true';
    });
  }
})();
```

### Llamadas a APIs externas desde la extensión

Las llamadas fetch desde content scripts están sujetas a CORS. La solución: hacer el fetch desde el service worker (background):

```javascript
// popup.js o content.js
chrome.runtime.sendMessage({ action: 'callAPI', endpoint: '/users', data: { id: 123 } }, (response) => {
  if (response.error) {
    console.error(response.error);
  } else {
    displayData(response.data);
  }
});

// service-worker.js
chrome.runtime.onMessage.addListener((message, sender, sendResponse) => {
  if (message.action === 'callAPI') {
    fetch(`https://api.miservicio.com${message.endpoint}`, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Authorization': `Bearer ${API_KEY}` },
      body: JSON.stringify(message.data),
    })
      .then(res => res.json())
      .then(data => sendResponse({ data }))
      .catch(error => sendResponse({ error: error.message }));
    return true;
  }
});
```

---

## PARTE 4 — PUBLICACIÓN EN LA CHROME WEB STORE

### Requisitos previos

1. **Cuenta de desarrollador de Google**: pago único de 5 USD
2. **Assets necesarios**:
   - Icono de 128×128 px (PNG)
   - Capturas de pantalla (mínimo 1, máximo 5): 1280×800 o 640×400 px
   - Vídeo de YouTube (opcional pero muy recomendable)
   - Descripción corta (132 caracteres) y descripción larga (hasta 16.000 caracteres)
3. **El zip de la extensión**: empaqueta todos los archivos de la extensión (sin node_modules, sin archivos de desarrollo)

### El proceso de review de Google

- **Primera publicación**: revisión manual de 1-3 días hábiles (puede alargarse)
- **Actualizaciones posteriores**: generalmente más rápidas (24-48h), aunque las que añaden permisos vuelven a revisión manual
- **Motivos comunes de rechazo**: permisos no justificados en el description, política de privacidad sin URL, comportamiento de la extensión diferente a la descripción

### Política de privacidad

Si tu extensión recopila cualquier dato del usuario (incluso anónimo), necesitas una política de privacidad pública. Puedes usar generadores gratuitos como TermsHub o Iubenda.

### Publicación en Firefox (AMO — addons.mozilla.org)

Ventajas de publicar también en Firefox:
- Más fácil la revisión (Mozilla es más permisiva que Google)
- Manifest V2 todavía soportado en Firefox (puedes tener el mismo código con pequeñas diferencias)
- Llega a usuarios de Firefox que no usan Chrome

---

## PARTE 5 — MONETIZACIÓN

### Modelos de monetización para extensiones de Chrome

| Modelo | Cómo implementarlo | Ventaja | Desventaja |
|--------|-------------------|---------|-----------|
| Freemium (free + premium) | Feature gate en la lógica de la extensión + pago en tu web | Control total | Debes gestionar licencias |
| One-time payment | Gumroad, LemonSqueezy, Paddle | Simple | Sin ingresos recurrentes |
| Suscripción mensual/anual | LemonSqueezy, Stripe | MRR predecible | Más fricción al comprar |
| Donaciones | Ko-fi, Buy Me a Coffee | Sin fricción | Ingresos muy variables |
| Chrome Web Store en-app purchases | API nativa de la CWS | Integrado | Solo Chrome, comisión del 5% |

### Validación de licencia

Si usas freemium, tu extensión necesita verificar si el usuario es premium:

1. El usuario se registra/compra en tu web
2. Tu web genera una licencia asociada a su email
3. La extensión pregunta al usuario su email/clave y la verifica contra tu API
4. La extensión guarda el estado de la licencia en `chrome.storage.sync` con TTL de validez

---

## ENTREGABLES

1. Estructura de archivos y manifest.json completo para mi tipo de extensión
2. Plantilla de comunicación popup ↔ background (message passing con async/await)
3. Checklist de pre-publicación en Chrome Web Store (permisos, assets, política de privacidad)
4. Script de empaquetado y publicación automatizada con las GitHub Actions de Chrome Extension
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'         => 'Desarrollar una extensión para Chrome con Manifest V3: arquitectura, APIs del navegador, comunicación entre contextos, y publicación en la Chrome Web Store.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces de voz',
                'description'      => 'VUI (Voice User Interface) para Alexa, Google Assistant y apps con comandos de voz: principios, flujos de conversación y pruebas de usabilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de Voice User Interfaces (VUI) con experiencia en Alexa Skills, Google Actions y diseño de experiencias conversacionales de voz. Necesito diseñar una interfaz de voz para mi producto.

**Mi proyecto:**
[Alexa Skill / Google Action / asistente de voz integrado en app / IVR telefónico / interfaz de voz en dispositivo propio]

**Casos de uso principales:**
[Qué quiero que el usuario pueda hacer con la voz: pedir información / controlar un dispositivo / completar un flujo de compra / consultar datos / etc.]

**Audiencia:**
[Usuarios con poca experiencia con comandos de voz / usuarios expertos en asistentes / usuarios con necesidades de accesibilidad]

---

## PARTE 1 — PRINCIPIOS DE DISEÑO VUI

### Las diferencias fundamentales entre GUI y VUI

La voz tiene restricciones que la pantalla no tiene:

| Dimensión | GUI (pantalla) | VUI (voz) |
|-----------|---------------|-----------|
| Capacidad de memoria | El usuario puede leer y releer | El usuario tiene que recordar lo que oyó |
| Opciones disponibles | Puede mostrar 10 opciones visualmente | Máximo 3-4 opciones de voz (la memoria auditiva es limitada) |
| Feedback de estado | Visible continuamente (botones, estados) | Solo cuando el asistente habla |
| Corrección de errores | El usuario ve el error y lo corrige | El usuario tiene que volver a hablar |
| Privacidad | El usuario controla quién ve la pantalla | La voz se escucha en el entorno |
| Velocidad | El usuario controla la velocidad (lee a su ritmo) | La velocidad la impone el asistente |

**Consecuencias de diseño**:
- Las respuestas de voz deben ser cortas (máximo 30-45 palabras)
- Nunca más de 3 opciones en un menú de voz
- Siempre confirmar antes de acciones irreversibles
- El asistente debe ser capaz de entender peticiones imperfectas, fuera de orden o vagas

### La pirámide de la conversación de voz

Una buena VUI debe funcionar en tres niveles:

1. **Nivel funcional**: el usuario puede completar la tarea que quiere hacer
2. **Nivel eficiente**: puede completarla rápidamente y sin fricción
3. **Nivel satisfactorio**: la interacción se siente natural y agradable

Los VUI fallan cuando se quedan en el nivel 1 con respuestas robóticas que solo funcionan si el usuario dice exactamente la frase correcta.

---

## PARTE 2 — DISEÑO DE FLUJOS DE CONVERSACIÓN

### El Happy Path y los Error Paths

El error más común en VUI: diseñar solo el happy path (cuando todo va bien) y olvidar los error paths.

**Estructura de un flujo completo**:

```
USUARIO: "Alexa, abre [nombre de la skill]"

ASISTENTE: "[Bienvenida breve — máximo 2 líneas] ¿Qué quieres hacer?"

USUARIO: [Puede decir algo esperado, algo inesperado, o nada]

→ Si dice algo esperado (happy path):
  ASISTENTE: [Respuesta + siguiente prompt si es necesario]

→ Si dice algo inesperado (error leve):
  ASISTENTE: "Lo siento, no entendí bien. Puedes decir [opción A], [opción B] o [opción C]."

→ Si no dice nada (reprompt):
  ASISTENTE: [Repetir la pregunta de forma diferente — no exactamente igual]

→ Segundo error seguido:
  ASISTENTE: [Explicación más clara + oferta de ayuda o salida limpia del flujo]

→ Tercer error (exit graceful):
  ASISTENTE: "Veo que estamos teniendo problemas. Puedes volver cuando quieras. ¡Hasta luego!"
```

### Las utterances: todas las formas en que el usuario puede pedir lo mismo

Para cada intención del usuario, debes contemplar todas las variaciones posibles:

**Intención**: añadir un ítem a una lista de compras

Utterances que el usuario puede decir:
- "añade leche"
- "añadir leche a la lista"
- "necesito leche"
- "ponme leche en la lista"
- "agrega leche a mis compras"
- "quiero comprar leche"
- "falta leche"
- "leche" (una sola palabra)

Un buen VUI acepta todas estas variaciones sin errores. Usa herramientas como el Alexa Skill Kit o Dialogflow para gestionar las utterances con NLU (Natural Language Understanding).

### Slots: capturar información variable

Los slots son los "espacios en blanco" de las utterances:

"añade {cantidad} de {producto} a la lista"

| Slot | Tipo | Ejemplos de valores |
|------|------|-------------------|
| {cantidad} | número o medida | "un litro de", "dos", "tres paquetes de" |
| {producto} | lista personalizada o abierta | "leche", "pan", "tomates" |

Para slots críticos, siempre confirma:
- Asistente: "Voy a añadir 1 litro de leche a tu lista. ¿Es correcto?"
- Usuario: "Sí"
- Asistente: "Añadido."

### Diseño del diálogo con VoiceFlow o Figma

Herramientas para diseñar flujos de VUI sin código:
- **VoiceFlow**: la herramienta especializada más usada — diseña y prueba Alexa Skills y Chatbots
- **Figma con voice flow templates**: para equipos que ya usan Figma
- **Draw.io o Miro**: para mapear los flujos antes de prototipar

---

## PARTE 3 — ESCRITURA PARA LA VOZ

### Cómo escribir respuestas que suenan bien en voz alta

Las frases de texto estándar no suenan bien cuando las lee un sintetizador de voz. Reglas para escribir para la voz:

1. **Frases cortas y directas**: máximo 20 palabras por frase en la respuesta principal
2. **Sin abreviaciones**: "Sr.", "etc.", "kg" — escribe "señor", "etcétera", "kilogramos"
3. **Números**: escribe los números como los dices: "veinticinco euros", no "25€"
4. **Signos de puntuación como pausas**: usa comas y puntos conscientemente — el sintetizador los usa para hacer pausas
5. **Listas en voz**: no enumeres más de 3 elementos. Para más, usa "entre otras cosas" y pide al usuario que elija
6. **Contracciones y lenguaje natural**: "aquí tienes" suena mejor que "a continuación encontrará"

### SSML (Speech Synthesis Markup Language)

SSML permite controlar cómo el asistente pronuncia el texto:

```xml
<speak>
  Bienvenido a tu asistente de cocina.
  <break time="500ms"/>
  Hoy tienes <emphasis level="strong">tres recetas</emphasis> pendientes.
  <break time="300ms"/>
  ¿Quieres empezar con la
  <prosody rate="slow">paella valenciana</prosody>,
  o prefieres algo más rápido?
</speak>
```

Elementos SSML más útiles:
- `<break time="300ms"/>`: pausa de X milisegundos
- `<emphasis level="strong">`: énfasis en una palabra
- `<prosody rate="slow/fast">`: velocidad de lectura
- `<say-as interpret-as="spell-out">WHO</say-as>`: "uve-hache-o" en lugar de "who"

---

## PARTE 4 — PRUEBAS DE USABILIDAD VUI

### El error de probar solo con texto

Un flujo de conversación puede parecer perfecto en papel y fallar completamente cuando se usa con voz real. Las pruebas de usabilidad VUI deben ser en voz alta desde el primer día.

### Métodos de prueba según la fase

| Fase | Método | Qué evalúas |
|------|--------|-------------|
| Diseño inicial | Wizard of Oz (una persona hace de asistente manual) | ¿Entienden los usuarios el concepto? ¿Qué dicen? |
| Prototipo | VoiceFlow con voz sintetizada | Flujo y utterances |
| Beta | Alexa Developer Console / Actions Console | Reconocimiento de voz real, errores de NLU |
| Producción | Analytics de la plataforma + sesiones grabadas | Utterances no reconocidas, puntos de abandono |

### Análisis de utterances no reconocidas

La métrica más valiosa en VUI: las utterances que el asistente no entendió. Revísalas semanalmente:
- Si el mismo tipo de frase falla repetidamente → añádela a las utterances del intent
- Si el usuario pide algo que la skill no soporta → evalúa si vale la pena añadirlo
- Si la tasa de error es > 20% en un intent → rediseña ese flujo

---

## PARTE 5 — PUBLICACIÓN EN TIENDAS

### Alexa Skills (Amazon)

1. Crea la skill en Alexa Developer Console (console.alexa.amazon.com)
2. Define el invocation name (cómo se abre la skill: "Alexa, abre [nombre]")
3. Configura el interaction model (intents + utterances + slots)
4. Conecta el backend: AWS Lambda (nativo) o endpoint HTTPS propio
5. Certifica la skill: revisión de Amazon (3-5 días hábiles)
6. Distribución: España, EE.UU., Reino Unido u otros mercados

### Google Actions

1. Desarrolla en Actions on Google (actionsonsuite.google.com) con Dialogflow o el nuevo Actions SDK
2. Define las intents en Dialogflow o el descriptor YAML
3. Backend: Cloud Functions o webhook propio
4. Certificación: revisión de Google (3-7 días)

---

## ENTREGABLES

1. Mapa de conversación completo de mi skill/action (happy path + 3 error paths principales)
2. Utterances para los 5 intents principales (mínimo 10 utterances por intent)
3. Guión de SSML para las respuestas más importantes (con pausas, énfasis y prosodia)
4. Plan de pruebas de usabilidad VUI: 5 tareas para testear con usuarios reales
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar una Voice User Interface (VUI) para Alexa o Google Assistant: flujos de conversación, utterances, escritura para voz y pruebas de usabilidad.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de la zona de ventas',
                'description'      => 'Organización del territorio, priorización de cuentas y optimización de la cobertura geográfica para que el comercial de campo maximice su productividad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director comercial con experiencia en diseño y gestión de redes de ventas de campo. Necesito optimizar la gestión de mi zona de ventas para aumentar el tiempo frente al cliente y mejorar los resultados con los mismos recursos.

**Mi contexto:**
[Tipo de ventas: B2B / canal de distribución / ventas a retailer / campo en sector farmacéutico / servicios a empresas]

**Mi zona actual:**
[Número de cuentas, extensión geográfica (ciudad / región / varias provincias), cuentas activas vs. potenciales]

**Problema principal:**
[Demasiado tiempo en desplazamiento / no sé a quién priorizar / visito siempre a los mismos y descuido el potencial / no tengo visibilidad de lo que pasa en la zona]

---

## PARTE 1 — DISEÑO DEL TERRITORIO

### El análisis previo: qué necesitas saber de tu zona

Antes de diseñar la cobertura, haz este inventario:

1. **Total de cuentas en la zona**: clientes activos + clientes dormidos + prospectos identificados
2. **Potencial de cada cuenta**: facturación actual + facturación potencial (¿cuánto más podrías venderles?)
3. **Tiempo de visita**: cuánto dura una visita típica según el tipo de cuenta (A: 45 min, B: 30 min, C: 15 min)
4. **Frecuencia de visita necesaria**: con qué frecuencia debes visitar cada tipo de cuenta (A: mensual, B: trimestral, C: semestral)
5. **Tiempo de desplazamiento**: mapa de distancias y tiempos reales entre cuentas

### Cálculo de la capacidad real de visitas

Antes de priorizar, calcula cuántas visitas puedes hacer:

```
Días laborables al mes: 22
Días de administración / reuniones / formación: -4
Días de vacaciones / bajas (prorrateado): -1
Días de visita disponibles: ~17

Visitas por día (sin modelo eficiente): 4-5
Visitas por día (con rutas optimizadas): 6-8

Capacidad mensual actual: 17 × 5 = 85 visitas/mes
Capacidad optimizada: 17 × 7 = 119 visitas/mes (+40%)
```

### Segmentación de cuentas: el modelo ABC

| Segmento | Criterio | Frecuencia de visita | % del tiempo |
|----------|---------|---------------------|-------------|
| A — Estratégicas | >80% del volumen / cuentas de alta fidelidad con potencial | Mensual | 50-60% |
| B — Desarrollo | Potencial de crecimiento alto, aún en desarrollo | Trimestral | 25-30% |
| C — Mantenimiento | Volumen bajo, relación estable sin potencial de crecimiento | Semestral o telefónico | 10-15% |
| D — Prospecto prioritario | No cliente aún, pero ICP perfecto | Mensual hasta convertir | 10% |

---

## PARTE 2 — PLANIFICACIÓN DE RUTAS

### El principio de la ruta eficiente

El tiempo de desplazamiento no genera ingresos. El objetivo: maximizar el tiempo frente al cliente minimizando el tiempo en el coche.

**Patrones de ruta ineficientes**:
- Visitas dispersas geográficamente en el mismo día
- Volver a la oficina a mediodía
- Visitar zonas opuestas de la ciudad en días consecutivos

**Principio del "pétalos de flor" o rutas en clover leaf**:
Organiza la semana para que cada día salgas del mismo punto (casa u oficina) y describes un recorrido en un área compacta, volviendo al punto de partida. Cada día cubre un "pétalo" diferente de la zona.

```
Lunes: zona norte (todas las cuentas del norte)
Martes: zona este
Miércoles: oficina / administración / llamadas
Jueves: zona sur
Viernes: zona centro (cuentas más cercanas, tarde libre para admin)
```

### Herramientas de optimización de rutas

| Herramienta | Para qué | Precio |
|-------------|---------|-------|
| Badger Maps | CRM + optimización de rutas + checkin | ~$50/mes |
| RouteXL | Optimización de rutas, sin CRM | Gratis hasta 20 paradas |
| Google Maps (manual) | Optimizar una ruta del día | Gratuito |
| Salesforce Maps | Integrado con Salesforce | Caro, para equipos grandes |
| Maps.me / Waze for drivers | Tráfico en tiempo real | Gratuito |

### El planning semanal de visitas

El comercial eficiente planifica la semana siguiente los viernes:

1. Revisar el CRM: ¿qué cuentas tienen seguimiento pendiente?
2. Añadir cuentas de la frecuencia de visita: ¿a qué cuentas B y C les toca este mes?
3. Bloquear reuniones estratégicas primero (cuentas A en riesgo, prospectos importantes)
4. Rellenar el día con cuentas cercanas (optimizar ruta geográficamente)
5. Dejar 1-2 huecos para visitas no programadas o imprevistos

---

## PARTE 3 — PRIORIZACIÓN EN LA VISITA

### La preparación de la visita (10 minutos antes)

Un comercial sin preparación pierde el 30% del valor de la visita. Antes de entrar:

1. **Revisa el historial en el CRM**: última visita, qué acordasteis, estado del pedido pendiente
2. **Mira los datos de compra reciente**: ¿ha bajado el volumen? ¿Hay una oportunidad de upsell?
3. **Define el objetivo de la visita**: visita de relación / de ventas / de resolución de problema / de prospección
4. **Prepara 1-2 preguntas de negocio**: algo sobre su negocio actual que demuestre que conoces su sector

### Los tipos de visita y su objetivo

| Tipo de visita | Objetivo | Duración | Frecuencia |
|----------------|---------|----------|-----------|
| Visita de relación | Mantener el vínculo, detectar necesidades latentes | 20-30 min | Trimestral en cuentas A estables |
| Visita de ventas | Presentar novedad, propuesta, cierre | 45-60 min | Cuando hay algo que vender |
| Visita de resolución | Resolver un problema, gestionar una queja | Variable | Inmediata cuando el problema surge |
| Visita de prospección | Primer contacto, cualificación | 20-30 min | Según la cadencia de desarrollo de cuentas |

### El registro de la visita (5 minutos después)

El registro en el CRM vale el tiempo que cuesta porque:
- Permite preparar mejor la próxima visita
- Permite que el manager te ayude si hay un problema
- Protege la información si cambias de empresa (o si el cliente cambia de interlocutor)

Campos mínimos del registro de visita:
- Fecha y duración
- Personas presentes
- Objetivo de la visita: ¿se logró?
- Principales temas hablados
- Próximo paso: quién hace qué antes de cuándo
- Señales de riesgo o de oportunidad detectadas

---

## PARTE 4 — KPIs DE LA ZONA DE VENTAS

### Dashboard del comercial de campo

| Métrica | Fórmula | Objetivo |
|---------|---------|---------|
| Visitas realizadas | Registros en CRM del mes | Plan de visitas × tasa de cumplimiento |
| Tasa de conversión (prospecto → cliente) | Clientes nuevos / prospectos visitados | Benchmark del sector |
| Penetración en la cuenta | Facturación real / Potencial estimado × 100 | > 60% en cuentas A |
| Cuota de zona | Ventas reales / Objetivo de ventas × 100 | > 100% |
| Cuentas sin visitar en 90 días | Registro en CRM | 0 cuentas A, < 10% cuentas B |
| Tiempo en cliente vs. tiempo total | Horas frente al cliente / horas laborales | > 40% |

### La revisión mensual de zona (con el manager)

Estructura de la revisión de zona de 60 minutos:

1. (10 min) Resultado del mes: ventas reales vs. objetivo, análisis de la desviación
2. (15 min) Top 5 cuentas A: situación, oportunidades y riesgos
3. (10 min) Prospectos en curso: estado y próximos pasos
4. (10 min) Cuentas en riesgo: qué está pasando y plan de acción
5. (10 min) Zona blanca: oportunidades no trabajadas todavía
6. (5 min) Necesidades del comercial: formación, apoyo de producto, recursos

---

## PARTE 5 — GESTIÓN DE CUENTAS ESTRATÉGICAS

### El Account Plan para cuentas A

Para tus 5-10 cuentas más importantes, diseña un plan de cuenta anual:

1. **Situación actual**: facturación, productos contratados, personas clave de contacto, historial de relación
2. **Potencial y objetivo**: cuánto facturación adicional es posible y por qué
3. **Mapa de poder**: quién toma las decisiones, quién influye, quién bloquea
4. **Plan de acción**: acciones específicas para el trimestre (reuniones, propuestas, formaciones)
5. **Riesgos**: qué podría amenazar la cuenta (competencia, cambio de interlocutor, problema de servicio)

### Señales de alerta en una cuenta estratégica

Detecta estos síntomas antes de que la cuenta se pierda:
- Caída del volumen de pedidos > 20% vs. período anterior
- El interlocutor principal ha cambiado (nueva persona que no te conoce)
- Tienes menos acceso al decisor que antes
- El cliente empieza a hacer preguntas de precio que antes no hacía
- Detectas que están probando a un competidor (por rumores del mercado o por comentarios del cliente)

---

## ENTREGABLES

1. Segmentación de mi zona de ventas: plantilla de clasificación A/B/C/D con criterios
2. Plan de ruta semanal tipo para mi territorio (descripción de la lógica geográfica)
3. Plantilla de Account Plan para mis 5 cuentas estratégicas (campos a rellenar)
4. Checklist de preparación y registro de visita (10 preguntas antes / 5 campos después)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Optimizar la gestión de la zona de ventas de campo: segmentación de cuentas, planificación de rutas, preparación de visitas y KPIs del comercial.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del ciclo de vida del producto (PLM)',
                'description'      => 'Cuándo mantener, mejorar, transformar o discontinuar una feature o producto: el proceso de decisión que evita el desperdicio de recursos en lo que no importa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Product Manager senior con experiencia en gestión del ciclo de vida de productos digitales. Necesito entender en qué fase está cada feature o producto de mi portfolio y qué debería hacer con ellos: mantener, invertir, pivotar o discontinuar.

**Mi contexto:**
[Tipo de producto digital: SaaS / app / plataforma / marketplace]

**Situación:**
[Tenemos features que nadie usa / el producto está maduro y no crece / queremos hacer espacio en el roadmap para nuevas iniciativas / necesitamos tomar decisiones sobre qué discontinuar]

**Datos disponibles:**
[Analytics de uso por feature / revenue por producto / feedback de usuarios / NPS]

---

## PARTE 1 — EL CICLO DE VIDA DEL PRODUCTO DIGITAL

### Las cuatro fases del PLM

A diferencia de los productos físicos, los productos digitales pueden saltar entre fases o volver a fases anteriores.

| Fase | Características | Estrategia | Indicadores |
|------|----------------|-----------|------------|
| Introducción | Adopción baja, inversión alta, incertidumbre | Validar hipótesis, iterar rápido | Activación rate, tiempo al valor |
| Crecimiento | Adopción creciente, el producto-market fit está probado | Escalar, mejorar la experiencia, reducir fricción | DAU/MAU growth, NPS, retención |
| Madurez | Adopción alta pero crecimiento se ralentiza | Optimizar, expandir casos de uso, defender | Retención, penetración en segmentos |
| Declive | Adopción y uso decrecientes | Mantener con mínima inversión o discontinuar | % de usuarios activos cayendo, soporte creciente |

### El producto digital vs. el producto físico en PLM

En producto digital, los puntos de inflexión son distintos:
- La madurez no significa que el producto no se puede mejorar — puede reinventarse
- El declive puede revertirse con un pivot o una nueva propuesta de valor
- La discontinuación puede ser parcial (deprecar una feature, no el producto entero)
- La competencia puede acelerar el ciclo en 12-18 meses en lugar de 5-10 años

---

## PARTE 2 — DIAGNÓSTICO: EN QUÉ FASE ESTOY

### La matriz de uso vs. satisfacción

Coloca cada feature o producto en esta matriz según sus datos:

```
                    SATISFACCIÓN ALTA
                           ↑
POCO USO ←───────────────────────────────→ MUCHO USO
    |    [C] Bajo uso, alta sat    [A] Alto uso, alta sat   |
    |    → Descubierto por pocos   → CORE FEATURE           |
    |    → Crear awareness         → Proteger e invertir    |
    |                                                        |
    |    [D] Bajo uso, baja sat    [B] Alto uso, baja sat   |
    |    → Candidato a deprecar    → DEUDA DE EXPERIENCIA   |
    |    → Pero primero entender   → Urgente: rediseñar     |
                           ↓
                    SATISFACCIÓN BAJA
```

**Cuadrante A**: la feature central — no la toques sin razón, optimiza su rendimiento
**Cuadrante B**: se usa pero frustra — prioridad urgente de mejora
**Cuadrante C**: nadie la descubre — problema de discoverability, no de la feature
**Cuadrante D**: candidato a depreciación — pero investiga antes de matar

### Las señales de declive en un producto digital

Identifica si una feature o producto está en declive real con estas señales:

1. **Uso decreciente consistente**: -X% mes a mes durante 3+ meses consecutivos
2. **Churn correlacionado**: los usuarios que abandonan mencionan esta feature o producto
3. **NPS divergente**: el NPS del segmento que usa la feature es significativamente más bajo
4. **Feedback cuali de abandono**: los usuarios que dejan de usar la feature dicen por qué
5. **Alternativa externa más usada**: los usuarios resuelven el mismo problema con una herramienta externa
6. **Carga de soporte creciente**: más tickets relacionados con esa feature aunque el uso no crece

---

## PARTE 3 — LAS CUATRO DECISIONES

### Decisión 1: Mantener (Harvest)

Cuándo: la feature está en madurez, el uso es estable, los costes de mantenimiento son bajos.

Qué significa mantener bien:
- Corrección de bugs pero sin nuevas features
- Documentación actualizada
- Monitoreo de las métricas de uso para detectar cambios
- Sin inversión de desarrollo excepto para seguridad o compatibilidad

Cuándo dejar de mantener y pasar a otro estado: si el uso cae > 20% en dos trimestres consecutivos, revisar la decisión.

### Decisión 2: Invertir (Grow/Improve)

Cuándo: la feature tiene potencial sin explotar o hay deuda de experiencia que frena su adopción.

Tipos de inversión:
- **Inversión de crecimiento**: mejorar el discovery, la onboarding de la feature, la comunicación de su valor
- **Inversión de calidad**: mejorar la UX, reducir el tiempo de carga, eliminar errores recurrentes
- **Inversión de expansión**: añadir casos de uso que usan segmentos que no la usan aún

Cuánto invertir: usa el Customer Lifetime Value del segmento que usará la feature mejorada como límite de la inversión.

### Decisión 3: Transformar (Pivot)

Cuándo: el problema que resuelve la feature sigue siendo válido, pero la solución actual no está funcionando.

El pivot de feature vs. el pivot de producto:
- **Pivot de feature**: mismo problema, diferente mecanismo de solución
- **Pivot de segmento**: misma solución, diferente audiencia
- **Pivot de tecnología**: misma propuesta de valor, diferente stack técnico (ej: pasar de sincrónico a asíncrono)

Antes de pivotar, valida que el problema persiste: el pivot más arriesgado es el que se hace por aburrimiento del equipo, no porque el mercado lo pida.

### Decisión 4: Deprecar (Kill)

La decisión más difícil en PLM: matar una feature o un producto.

**Criterios para deprecar**:
1. Menos del 5% de los usuarios la usan activamente en los últimos 90 días
2. El coste de mantenimiento supera el valor que genera
3. Tiene deuda técnica significativa que bloquea otras áreas del producto
4. Una alternativa mejor (propia o externa) existe y los usuarios la prefieren

**Cuándo NO deprecar aunque el uso sea bajo**:
- Una única cuenta enterprise la usa y es estratégica
- La feature da cumplimiento legal o regulatorio
- Es necesaria para la interoperabilidad con sistemas externos

---

## PARTE 4 — EL PROCESO DE DEPRECIACIÓN

### Cómo deprecar una feature sin dañar la relación con el usuario

**La "deprecation death march" que destruye la confianza del usuario**:
1. Anuncio de depreciación de 2 semanas sin alternativa
2. Sin comunicación clara de qué harán los usuarios que la necesitan
3. Los datos del usuario desaparecen sin previo aviso

**El proceso correcto de deprecación**:

| Fase | Cuándo | Acción |
|------|--------|--------|
| Decisión interna | -3 meses | La decisión está tomada, se comunica al equipo |
| Comunicación a usuarios | -2 meses | Email + notificación in-app: cuándo, por qué, alternativa |
| Período de gracia | -1 mes | La feature existe pero tiene un banner de depreciación visible |
| Deprecación suave | Fecha D | La feature deja de estar accesible pero los datos siguen disponibles |
| Deprecación completa | D +1 mes | Los datos se eliminan o se exportan según la política |

### Comunicación de la depreciación al usuario

El email de depreciación debe incluir:
1. Cuándo ocurre la depreciación (fecha exacta)
2. Qué pasará con sus datos (exportación disponible, migración automática, eliminación)
3. Alternativa disponible (dentro del producto o externa, con guía de migración)
4. Canal de contacto para preguntas o casos excepcionales
5. Por qué tomasteis esta decisión (brevemente — la transparencia genera confianza)

---

## PARTE 5 — EL PORTFOLIO DE PRODUCTO

### Gestionar el portfolio como un CFO gestiona una cartera de inversión

Cada producto o feature consume recursos (engineering time, design time, support time). Gestiona el portfolio con los mismos principios que la gestión de activos:

| Analogía financiera | Equivalente en producto |
|---------------------|------------------------|
| Activo de alto rendimiento | Feature core con alta retención |
| Activo de crecimiento | Feature nueva con adopción creciente |
| Activo especulativo | Experimento con alto potencial pero incierto |
| Activo zombi | Feature con bajo uso que consume recursos |
| Pasivo | Feature con deuda técnica que ralentiza todo |

### La auditoría de portfolio trimestral

Proceso de 4 horas para revisar el estado del portfolio:

1. **Inventario**: lista todas las features con su métrica de uso y satisfacción
2. **Clasificación**: asigna cada feature a las cuatro decisiones (mantener/invertir/transformar/deprecar)
3. **Balanceo**: ¿cuánto engineering time va a cada categoría? ¿Es el balance correcto?
4. **Decisiones**: formaliza al menos 1-2 deprecaciones por trimestre (mantener el portfolio limpio)
5. **Roadmap**: integra las decisiones del PLM en el roadmap del próximo trimestre

---

## ENTREGABLES

1. Plantilla de auditoría de features: tabla con métricas de uso, satisfacción, coste y decisión PLM
2. Criterios de depreciación para mi tipo de producto (checklist de 10 preguntas)
3. Plantilla de comunicación de depreciación a usuarios (email + notificación in-app)
4. Proceso de revisión de portfolio trimestral (agenda y metodología)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Gestionar el ciclo de vida del portfolio de features y productos: diagnosticar la fase, decidir entre mantener, invertir, transformar o deprecar, y comunicar la depreciación.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de la brecha de habilidades',
                'description'      => 'Upskilling y reskilling: cómo identificar los gaps de habilidades del equipo y construir el plan de formación que alinea el talento con la estrategia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de RRHH y People Development con experiencia en análisis de brechas de habilidades y diseño de programas de formación corporativa. Necesito identificar los gaps de habilidades de mi equipo y construir un plan de desarrollo que prepare a la organización para los retos futuros.

**Mi organización:**
[Sector, tamaño del equipo, tipo de roles predominantes, fase de transformación digital o cambio estratégico]

**El reto específico:**
[Nuevas tecnologías que el equipo no domina / cambio de modelo de negocio que requiere nuevas habilidades / plan de sucesión / digitalización de procesos / entrada en nuevos mercados]

**Recursos disponibles:**
[Presupuesto de formación anual por persona, tiempo disponible para formación, equipo de L&D propio o externalizado]

---

## PARTE 1 — DIAGNÓSTICO: IDENTIFICAR LOS GAPS

### El modelo de competencias: la base del análisis

Un gap de habilidades solo puede medirse si antes tienes claro qué habilidades necesitas. Define el mapa de competencias:

**Tipos de competencias a mapear**:

1. **Competencias técnicas (hard skills)**: habilidades específicas del rol
   - Ejemplo para un equipo de ventas: CRM avanzado, social selling, análisis de datos de ventas
   - Ejemplo para IT: cloud computing, ciberseguridad, arquitectura de microservicios

2. **Competencias transversales (soft skills)**: habilidades aplicables a cualquier rol
   - Comunicación, trabajo en equipo, gestión del tiempo, pensamiento crítico

3. **Competencias digitales**: habilidades para el entorno de trabajo digital actual
   - Herramientas de colaboración remota, análisis básico de datos, IA como herramienta de productividad

4. **Competencias de liderazgo** (para mandos): coaching de equipos, gestión del cambio, toma de decisiones bajo incertidumbre

### Métodos de evaluación del gap

**Método 1 — Autoevaluación + evaluación del manager** (más ágil):

Diseña un formulario con escala de 1-5 para cada competencia:
1 = Desconozco la competencia
2 = Tengo conocimiento teórico básico
3 = Puedo aplicarlo con supervisión
4 = Lo aplico de forma autónoma
5 = Puedo enseñarlo a otros

El gap = nivel requerido para el rol - nivel actual del empleado.

**Método 2 — Assessment de habilidades técnicas** (más preciso pero costoso):

Tests estandarizados (LinkedIn Skills Assessment, plataformas de coding challenges, simulaciones de casos), assessment centers para habilidades directivas.

**Método 3 — 360º para competencias conductuales**:

Feedback de superiores, pares y reportes directos sobre cómo se manifiestan las competencias en el trabajo real.

### El mapa de calor del equipo

Visualiza los resultados en una tabla que muestra de un vistazo dónde están los mayores gaps:

| Competencia | Empleado A | Empleado B | Empleado C | Nivel requerido | GAP MEDIO |
|-------------|-----------|-----------|-----------|-----------------|-----------|
| Data Analysis | 3 | 2 | 4 | 4 | -0.7 |
| AI Tools | 2 | 2 | 3 | 4 | -1.7 |
| Presentación ejecutiva | 4 | 3 | 4 | 4 | -0.3 |

Las celdas en rojo (gap > 1.5) son la prioridad del plan de formación.

---

## PARTE 2 — DISEÑO DEL PLAN DE FORMACIÓN

### Principios de un plan de formación que funciona

Los programas de formación corporativa tienen una tasa de aplicación muy baja (estudios muestran que solo el 10-20% del contenido de formación se aplica en el trabajo). Por qué:

1. **Sin práctica inmediata**: el empleado aprende pero no tiene oportunidad de aplicarlo
2. **Sin seguimiento**: nadie verifica si lo aplicó o si tiene dudas al hacerlo
3. **Sin integración con el trabajo real**: la formación sucede en un contexto desconectado del trabajo diario
4. **Sin refuerzo**: el olvido ocurre rápido (curva del olvido de Ebbinghaus)

**El modelo 70/20/10 para el diseño**:

| Fuente de aprendizaje | % del desarrollo | Cómo aplicarlo |
|----------------------|-----------------|---------------|
| Experiencia en el trabajo | 70% | Proyectos stretch, rotaciones, responsabilidades nuevas |
| Aprendizaje social | 20% | Mentoring, coaching, comunidades de práctica |
| Formación formal | 10% | Cursos, workshops, conferencias |

Un plan de formación que solo invierte en el 10% (cursos) pierde el 90% del potencial de desarrollo.

### Las modalidades de formación y cuándo usarlas

| Modalidad | Mejor para | Tiempo requerido | Coste |
|-----------|-----------|-----------------|-------|
| E-learning asíncrono (Coursera, LinkedIn Learning) | Conocimiento técnico, habilidades digitales | Flexible | €15-50/mes por persona |
| Workshop presencial o virtual (instructor) | Habilidades prácticas con interacción | 4-16h | €200-1.500 por participante |
| Bootcamp intensivo | Upskilling urgente y profundo | 1-4 semanas | €1.500-5.000 por persona |
| Mentoring interno | Transferencia de conocimiento tácito | 1h/mes mínimo | Bajo coste, requiere tiempo de mentores |
| Comunidad de práctica | Aplicación continua + resolución de dudas | 1h/semana | Muy bajo coste |
| Job rotation | Ampliar perspectiva y habilidades transversales | 3-6 meses | Coste de oportunidad |
| Proyecto stretch | Aplicar habilidades en un contexto nuevo y más exigente | Variable | Sin coste adicional |

---

## PARTE 3 — EL PLAN DE DESARROLLO INDIVIDUAL (PDI)

### Estructura del PDI

Para cada empleado, diseña un plan con:

1. **Competencias a desarrollar** (máximo 2-3 por año): más de 3 es demasiado y se difumina el foco

2. **Nivel actual y nivel objetivo**: con el assessment previo

3. **Acciones de desarrollo** para cada competencia:
   - Formación formal (qué curso, cuándo)
   - Aprendizaje social (con quién, en qué contexto)
   - Experiencia práctica (qué proyecto o tarea aplica la habilidad)

4. **Métricas de progreso**: cómo sabremos que la habilidad ha mejorado

5. **Revisiones de seguimiento**: fechas de check-in (trimestral recomendado)

### La conversación de desarrollo con el empleado

El PDI se construye CON el empleado, no PARA el empleado. La conversación:

1. **Abre con sus propias aspiraciones**: ¿Adónde quieres llegar en tu carrera? ¿Qué habilidades quieres desarrollar?
2. **Conecta con las necesidades del negocio**: de las habilidades que necesita la empresa, ¿cuáles coinciden con lo que tú quieres desarrollar?
3. **Identifica las brechas de forma conjunta**: revisa los resultados del assessment juntos, sin juicio
4. **Acordad las prioridades**: máximo 2-3 competencias en las que enfocar el año
5. **Diseñad el plan**: el empleado tiene más conocimiento que tú de cómo aprende mejor — usa esa información

---

## PARTE 4 — PROGRAMAS COLECTIVOS: UPSKILLING Y RESKILLING

### La diferencia entre upskilling y reskilling

- **Upskilling**: mejorar las habilidades actuales para adaptarse a la evolución del rol (ej: un analista que aprende Python para automatizar sus análisis)
- **Reskilling**: adquirir habilidades completamente nuevas para un rol diferente (ej: un administrativo que se convierte en analista de datos)

### Diseño de un programa de upskilling digital para toda la organización

Si el gap es generalizado (ejemplo: todos necesitan habilidades de IA o de análisis de datos), diseña un programa en niveles:

**Nivel básico** (toda la organización, 4-8 horas):
- Conceptos fundamentales: qué es la IA, cómo usarla como herramienta de productividad
- Herramientas básicas: prompts efectivos, automatización de tareas repetitivas

**Nivel intermedio** (mandos y roles de análisis, 20-40 horas):
- Análisis de datos con Excel avanzado / Power BI básico
- IA aplicada a su función específica (marketing, ventas, finanzas)

**Nivel avanzado** (roles técnicos y analíticos, 80-200 horas):
- Python / SQL para análisis de datos
- Machine learning básico aplicado

### Métricas del programa de formación

| Métrica | Cómo medirla | Para qué sirve |
|---------|-------------|----------------|
| Participación | % empleados que completan la formación | Si el programa llega a todos |
| Aprendizaje (conocimiento ganado) | Test pre/post formación | Si la formación enseña lo que promete |
| Aplicación en el trabajo | Encuesta 30 días después | Si el conocimiento se aplica |
| Impacto en KPIs del negocio | Correlación con métricas de negocio | ROI de la formación |
| Satisfacción del empleado | Encuesta NPS de la formación | Calidad del programa |

---

## ENTREGABLES

1. Plantilla de assessment de competencias: mapa de competencias + formulario de evaluación con escala 1-5
2. Plantilla de Plan de Desarrollo Individual (PDI) con todos los campos y ejemplos
3. Presupuesto de formación: cómo distribuir el presupuesto entre modalidades según el gap identificado
4. Proceso de seguimiento trimestral de los PDIs: agenda de la conversación de seguimiento
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar el proceso de identificación de brechas de habilidades y el plan de upskilling y reskilling del equipo: assessment, PDIs, programas colectivos y métricas.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de rentabilidad por cliente',
                'description'      => 'Calcula el margen real de cada cuenta y toma decisiones sobre en quién invertir tiempo, a quién hay que subir el precio y de quién hay que prescindir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller financiero y consultor de estrategia con experiencia en análisis de rentabilidad por cliente y optimización del portfolio de clientes. Necesito calcular la rentabilidad real de cada cliente para tomar mejores decisiones sobre en quién invertir recursos.

**Mi empresa:**
[Sector, modelo de negocio: venta de producto / prestación de servicios / suscripción recurrente / mix]

**Situación actual:**
[No sabemos qué clientes son rentables / sabemos que hay clientes que perdemos dinero pero no cuánto / queremos justificar subidas de precio selectivas / el equipo comercial solo mira el volumen, no el margen]

**Datos disponibles:**
[Facturación por cliente / costes directos por cliente / tiempo empleado por el equipo con cada cliente]

---

## PARTE 1 — POR QUÉ EL MARGEN POR CLIENTE ES DIFERENTE AL MARGEN MEDIO

### El problema de los promedios en el análisis de rentabilidad

El margen medio de una empresa puede ser del 30% mientras que el 20% de los clientes genera el 80% del beneficio y el otro 80% de clientes consume más recursos de los que aportan.

El análisis de rentabilidad por cliente responde a:
- ¿Quién está pagando el crecimiento del negocio?
- ¿Qué clientes son deficitarios (aunque facturen)?
- ¿Dónde deberíamos poner más foco comercial?
- ¿Qué clientes necesitan una renegociación de precio?

### Los costes que normalmente se ignoran por cliente

La facturación es visible. Los costes directos de cada cliente, muchas veces no:

| Tipo de coste | Cómo asignarlo al cliente |
|---------------|--------------------------|
| Coste de mercancía / coste de servicio prestado | Directo: se asigna al 100% al cliente |
| Tiempo del equipo comercial y de atención | Por horas dedicadas × coste horario |
| Soporte técnico o de servicio | Nº de tickets × coste medio por ticket |
| Descuentos y condiciones especiales | % de descuento sobre precio de tarifa |
| Costes de logística o entrega | Directo por envío o por km |
| Costes de financiación (pago a 90 días) | Tipo de interés del capital inmovilizado × días de pago |
| Costes de acquisition (si es cliente nuevo) | CAC amortizado durante la vida esperada del cliente |

---

## PARTE 2 — EL MODELO DE CÁLCULO

### Cuenta de resultados por cliente (P&L del cliente)

```
INGRESOS POR CLIENTE
(+) Facturación bruta al precio de tarifa
(-) Descuentos y rappels concedidos
(-) Devoluciones y abonos
= FACTURACIÓN NETA (A)

COSTES DIRECTOS DEL CLIENTE
(-) Coste de producto / prestación del servicio (COGS)
(-) Tiempo dedicado por ventas (horas × tarifa interna)
(-) Tiempo dedicado por soporte/CS (horas × tarifa interna)
(-) Logística y entrega
(-) Coste de los materiales específicos del proyecto
= MARGEN DE CONTRIBUCIÓN (B = A - costes directos)

COSTES INDIRECTOS ASIGNADOS (OPCIONAL)
(-) Parte proporcional de infraestructura, oficina, administración
= RESULTADO POR CLIENTE (C)

MARGEN NETO POR CLIENTE = C / A × 100
```

### Cómo calcular el coste del tiempo dedicado

Si tu negocio es de servicios y el tiempo es el principal recurso:

```
Coste horario de un empleado = (Salario bruto + cotizaciones empresa) / horas productivas al año

Ejemplo:
Salario bruto: 36.000€/año
Cotizaciones empresa: 12.000€/año (≈33%)
Total coste empresa: 48.000€/año
Horas productivas: 1.700 horas/año (22 días × 8h × 10 meses - vacaciones - formación)
Coste horario: 48.000 / 1.700 = 28,2€/hora

Si un cliente consume 40 horas de este empleado al mes:
Coste de tiempo = 40h × 28,2€ = 1.128€/mes
```

### El coste del capital inmovilizado por clientes que pagan tarde

Si tienes clientes que pagan a 90 días y tu coste de financiación es del 5%:

```
Factura de 10.000€ cobrada a 90 días (vs. 30 días estándar)
Días de retraso en cobro: 60 días
Coste del capital: 10.000€ × (5% / 365 × 60) = 82€ adicionales de coste

En clientes con muchas facturas o importes altos, esto puede ser relevante.
```

---

## PARTE 3 — SEGMENTACIÓN DE LA CARTERA POR RENTABILIDAD

### La matriz de rentabilidad vs. potencial

Cruza la rentabilidad actual con el potencial de crecimiento:

```
                    POTENCIAL ALTO
                           ↑
BAJA RENT. ←────────────────────────────→ ALTA RENT.
    |   [C] Bajo profit, alto potencial   [A] Alto profit, alto potencial  |
    |   → Negociar condiciones            → INVERTIR Y DESARROLLAR         |
    |   → Tiene que mejorar o out         → Más tiempo, más recursos        |
    |                                                                       |
    |   [D] Bajo profit, bajo potencial   [B] Alto profit, bajo potencial  |
    |   → Subir precio o prescindir       → ORDEÑAR CON MÍNIMA INVERSIÓN   |
    |   → No renovar contrato             → Relación transaccional          |
                           ↓
                    POTENCIAL BAJO
```

### Las decisiones que tomar por cuadrante

**Cuadrante A** (alta rentabilidad + alto potencial):
- Asignar el mejor account manager o comercial
- Inversión en la relación (eventos, formación, acceso a features premium)
- Explorar expansión proactiva

**Cuadrante B** (alta rentabilidad + bajo potencial):
- Mantener la relación con servicio estándar eficiente
- No sobre-invertir en el desarrollo de la cuenta
- Vigilar que las condiciones no erosionen el margen

**Cuadrante C** (baja rentabilidad + alto potencial):
- Renegociar las condiciones para mejorar el margen
- Dar un plazo: si en X meses no mejora la rentabilidad, o crece para compensar, salir
- Puede ser estratégico a corto plazo si es una cuenta de referencia

**Cuadrante D** (baja rentabilidad + bajo potencial):
- Plan de salida: subir precio o no renovar
- Prioridad de freed-up capacity para cuentas A y C

---

## PARTE 4 — ACTUAR SOBRE LOS RESULTADOS

### Cómo subir el precio a un cliente no rentable sin perderlo

**Preparación**:
1. Calcula el precio que necesitas para tener el margen objetivo
2. Cuantifica el valor que aportas al cliente (no el coste que tienes tú)
3. Compara con el precio de mercado de competidores o alternativas

**Conversación de renegociación**:

1. Abre con el valor: "En los últimos 12 meses, hemos [resultados concretos que has generado para ellos]"
2. Introduce el cambio: "Para poder seguir ofreciendo este nivel de servicio, necesitamos ajustar las condiciones"
3. Presenta el nuevo precio: en el contexto del valor, no como un aumento arbitrario
4. Da tiempo: preaviso razonable (30-60 días) para que el cliente pueda decidir
5. Ofrece alternativas si el cliente no puede asumir el precio: reducción del alcance del servicio

### Cuándo prescindir de un cliente

Decisión difícil pero necesaria cuando:
- El cliente consume más recursos que los que genera (pérdida real)
- El comportamiento del cliente (retrasos de pago, peticiones abusivas, reclamaciones constantes) daña al equipo
- El tiempo liberado tiene una oportunidad de uso más rentable ya identificada

El proceso de salida:
1. Comunicación con antelación suficiente (60-90 días)
2. Sin dejar al cliente colgado: ayuda a encontrar alternativa si es posible
3. Cierre ordenado de los proyectos en curso
4. Protección de los derechos contractuales (confidencialidad, PI)

---

## PARTE 5 — INTEGRACIÓN EN LA GESTIÓN

### Quién debe ver el análisis de rentabilidad por cliente

| Rol | Qué necesita ver | Para qué |
|-----|-----------------|---------|
| CFO / Controller | P&L completo por cliente, ordenado por margen | Decisiones de pricing, provisiones |
| Director Comercial | Segmentación A/B/C/D + potencial | Asignación de recursos comerciales |
| Account Manager | Rentabilidad de sus cuentas + tendencia | Gestión del cliente, alertas |
| CEO | Top 10 más rentables + bottom 10 | Decisiones estratégicas |

### Frecuencia de actualización

- **Mensual**: actualizar con datos reales del mes (facturación y costes directos)
- **Trimestral**: revisión completa del ranking de rentabilidad y reclasificación de cuentas
- **Anual**: revisión de la metodología de imputación de costes

---

## ENTREGABLES

1. Plantilla Excel de P&L por cliente (estructura de filas con fórmulas básicas)
2. Calculadora de coste horario por tipo de empleado para asignar a clientes
3. Informe de rentabilidad por cliente: las 10 más rentables y las 10 menos rentables con análisis
4. Guión de la conversación de renegociación de precio con un cliente del cuadrante D
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Calcular la rentabilidad real por cliente, segmentar el portfolio en cuadrantes y tomar decisiones sobre pricing, desarrollo o salida de cada cuenta.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratación pública en España',
                'description'      => 'Licitaciones, LCSP, pliegos de condiciones y cómo presentar la primera oferta: guía para empresas que quieren contratar con la Administración.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado administrativista y consultor de contratación pública con experiencia en licitaciones para pymes y empresas tecnológicas en España. Necesito entender cómo funciona la contratación pública y cómo presentar mi primera oferta con posibilidades reales de ganar.

**Mi empresa:**
[Sector, tamaño, tipo de servicios o productos que podría contratar con la Administración]

**Situación:**
[Nunca hemos licitado / hemos perdido licitaciones y no sabemos por qué / queremos entrar en el sector público / tenemos un cliente público y queremos ampliar]

**Tipo de licitación objetivo:**
[Servicios tecnológicos (software, consultoría IT) / servicios profesionales / suministro de productos / obra / servicios de comunicación / formación]

---

## PARTE 1 — EL MARCO LEGAL: LA LCSP

### La Ley de Contratos del Sector Público (LCSP)

La Ley 9/2017, de 8 de noviembre, de Contratos del Sector Público (LCSP) es la norma básica que regula toda la contratación pública en España. Conocer sus principios es el primer paso:

**Principios de la contratación pública**:
1. **Libertad de acceso a licitaciones**: cualquier empresa capacitada puede presentarse
2. **Publicidad y transparencia**: todas las licitaciones deben publicarse en la Plataforma de Contratación del Sector Público
3. **No discriminación e igualdad de trato**: la Administración no puede favorecer a ningún licitador
4. **Integridad**: la LCSP establece el Registro de Empresas con Sanciones de Contratación (RECE)

### Tipos de contratos

| Tipo | Definición | Ejemplos |
|------|-----------|---------|
| Contrato de suministro | Compraventa de bienes (productos, materiales) | Software con licencia, equipos informáticos, material de oficina |
| Contrato de servicios | Prestación de servicios de todo tipo | Consultoría, mantenimiento, limpieza, seguridad, formación |
| Contrato de obras | Construcción, reforma, mantenimiento de infraestructuras | — |
| Contrato de concesión de servicios | El contratista gestiona el servicio asumiendo riesgo operacional | Parking público, telecomunicaciones |

### Umbrales de publicidad y procedimiento

| Umbral (servicios y suministros) | Procedimiento | Plazo mínimo de presentación |
|----------------------------------|--------------|------------------------------|
| < 15.000€ (IVA excluido) | Contrato menor: sin licitación formal | — |
| 15.000€ - 100.000€ | Procedimiento abierto simplificado abreviado | 10 días |
| 100.000€ - 221.000€ | Procedimiento abierto simplificado | 20 días |
| > 221.000€ (AAPP) | Procedimiento abierto ordinario | 35 días (15 si hay anuncio previo) |
| > 5.538.000€ (obras) | Procedimiento abierto con publicidad en DOUE | 52 días |

---

## PARTE 2 — LOS PLIEGOS DE CONDICIONES

### Los dos pliegos que debes leer antes de cualquier otra cosa

**1. Pliego de Cláusulas Administrativas Particulares (PCAP)**:
El contrato en sí: reglas de la licitación, condiciones de ejecución, garantías, plazos, causas de exclusión y penalidades.

Qué buscar en el PCAP:
- Criterios de adjudicación: qué peso tiene el precio vs. la calidad técnica
- Solvencia económica y técnica requerida: si no la cumples, estás excluido
- Garantías: provisional (al presentar oferta) y definitiva (al adjudicarse)
- Plazos de ejecución y entregables
- Condiciones de modificación, prórroga y resolución

**2. Pliego de Prescripciones Técnicas (PPT)**:
Qué tiene que hacer el adjudicatario: los requisitos técnicos, funcionales y de calidad del servicio o producto.

Qué buscar en el PPT:
- Si los requisitos técnicos están hechos "a medida" de un competidor (posible favoritismo que puedes recurrir)
- Si tienes capacidad real para cumplir los requisitos sin riesgo
- Qué entregables y en qué plazos
- Cómo se mide el cumplimiento (SLAs, indicadores, penalidades)

---

## PARTE 3 — LOS CRITERIOS DE ADJUDICACIÓN

### Criterios evaluables automáticamente (normalmente el precio)

En muchos contratos, el precio tiene un peso del 40-60% de la puntuación total. El sistema de puntuación del precio más común:

**Fórmula de la media aritmética rebajada**:
- Se calcula la media de las ofertas económicas presentadas
- Se aplica un porcentaje de baja adicional (típicamente el 10% de la media)
- La mejor puntuación la obtiene la oferta más cercana al precio resultante de la fórmula

Esta fórmula penaliza las ofertas muy baratas (que se consideran temerarias) y las muy caras.

**La oferta anormalmente baja**:
Si tu oferta es más de un X% inferior a la media (el PCAP define el umbral), te declararán "anormalmente baja" y deberás justificar que puedes ejecutar el contrato a ese precio. Si no lo justificas, te excluyen.

### Criterios evaluables mediante juicio de valor (técnica)

La parte técnica se evalúa con criterios cualitativos que describe el órgano de contratación:
- Metodología de trabajo y plan de trabajo
- Calificación y experiencia del equipo
- Medidas de calidad y control
- Mejoras sobre los requisitos mínimos
- Innovación tecnológica

**La trampa del peso técnico/económico**: en contratos con peso técnico alto (60-70%), las grandes empresas tienen ventaja por sus referencias. En contratos con peso económico alto, las pymes pueden competir mejor en precio.

---

## PARTE 4 — PRESENTACIÓN DE LA OFERTA

### Los requisitos de solvencia: la barrera de entrada

Antes de presentar una oferta, verifica que cumples con los requisitos de solvencia del PCAP:

**Solvencia económica y financiera** (normalmente uno o varios de):
- Volumen de negocio mínimo (ej: facturación anual > 2× el importe del contrato)
- Seguro de responsabilidad civil con cobertura mínima
- Patrimonio neto positivo mínimo
- Ratio de solvencia financiera

**Solvencia técnica o profesional** (normalmente uno o varios de):
- Experiencia en contratos similares (misma categoría, importe similar, en los últimos 5 años)
- Equipo técnico con titulaciones específicas
- Certificaciones de calidad (ISO 9001, ISO 27001, etc.)
- Declaración de medios materiales y humanos disponibles

Si no cumples los requisitos de solvencia, la oferta será excluida. Soluciones:
- **Agrupación de empresas (UTE)**: unirte con otras empresas para acreditar la solvencia conjunta
- **Subcontratación acreditada**: acreditar la solvencia a través de un subcontratista

### La documentación de la oferta

Toda oferta se divide en tres sobres:

**Sobre A — Documentación administrativa**:
- Declaración Responsable (DEUC) o documentos de acreditación de solvencia
- Declaración de no estar incurso en prohibiciones de contratar
- Alta en la Plataforma de Contratación del Sector Público

**Sobre B — Proposición técnica** (evaluada con juicio de valor):
- Plan de trabajo, metodología
- Equipo asignado con CVs
- Experiencia en proyectos similares (fichas de proyectos)
- Mejoras propuestas

**Sobre C — Proposición económica** (precio):
- El precio exacto a desglosar según el modelo del PCAP
- No incluir ningún precio en el sobre B (motivo de exclusión)

### Cómo escribir una propuesta técnica ganadora

1. **Demuestra que entiendes el problema del cliente**: no repitas los requisitos del PPT — muestra que entiendes por qué los piden
2. **Estructura según los criterios de evaluación**: cada criterio del PCAP debe estar explícitamente respondido en tu propuesta
3. **Equipo concreto y comprometido**: no equipos genéricos — nombres reales con CVs adaptados al proyecto
4. **Casos de uso reales y relevantes**: referencias de proyectos similares con resultados, no solo la lista de clientes
5. **Lenguaje técnico del cliente**: usa la terminología del PPT y del sector público — demuestra que conoces el entorno

---

## PARTE 5 — DÓNDE ENCONTRAR LICITACIONES

### Las plataformas de licitación

| Plataforma | Qué incluye | URL |
|------------|------------|-----|
| Plataforma de Contratación del Sector Público (PCSP) | Todos los contratos de AGE y organismos adheridos | contrataciondelestado.es |
| Diario Oficial de la UE (DOUE) | Contratos sobre el umbral europeo | ted.europa.eu |
| BORM, BOJA, BOP... | Contratos de Comunidades Autónomas y ayuntamientos | Según CCAA |
| Perfiles de contratante | El de cada organismo concreto | Enlazados desde PCSP |

### Alertas y seguimiento

Configura alertas en la PCSP con los CPV (Códigos de Procedimiento del Vocabulario Común de Contratos Públicos) de tu sector. Los CPVs son el sistema de clasificación de contratos en la UE.

Ejemplos de CPVs para servicios tecnológicos:
- 72000000: Servicios de tecnologías de la información
- 72200000: Programación y consultoría de software
- 72500000: Servicios informáticos

---

## ENTREGABLES

1. Lista de verificación de elegibilidad: 10 preguntas antes de presentar una oferta
2. Estructura de la proposición técnica (índice con las secciones y qué va en cada una)
3. Calendario de preparación de una oferta en 20 días hábiles: qué hacer cada semana
4. Guía de búsqueda en la PCSP: cómo configurar alertas y filtrar contratos relevantes para mi sector
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Entrar en la contratación pública en España: leer los pliegos, verificar la solvencia, diseñar la propuesta técnica y presentar una oferta con posibilidades de ganar.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de las expectativas del cliente',
                'description'      => 'La técnica de underpromise and overdeliver aplicada al soporte cotidiano para reducir la insatisfacción y convertir clientes difíciles en promotores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de customer success con experiencia en gestión de expectativas y comunicación proactiva con clientes. Necesito mejorar la forma en que mi equipo gestiona las expectativas para reducir la insatisfacción y mejorar el NPS.

**Mi contexto:**
[SaaS B2B / servicio profesional / plataforma de ecommerce / servicio técnico de campo]

**Problema principal:**
[Los clientes se quejan de plazos que no cumplimos / los clientes esperan más de lo que el producto puede hacer / la comunicación reactiva llega tarde / los clientes escalan sin razón porque no tienen información]

---

## PARTE 1 — POR QUÉ LAS EXPECTATIVAS SON EL ORIGEN DE LA INSATISFACCIÓN

### La fórmula de la satisfacción del cliente

```
Satisfacción = Percepción - Expectativa

Si Percepción > Expectativa: cliente satisfecho (promotor)
Si Percepción = Expectativa: cliente neutro (pasivo)
Si Percepción < Expectativa: cliente insatisfecho (detractor)
```

La trampa más común: intentar solo mejorar la percepción (hacer más) sin gestionar la expectativa (comunicar mejor).

Un mismo resultado puede generar satisfacción o insatisfacción dependiendo exclusivamente de qué esperaba el cliente.

**Ejemplo práctico**:
- Cliente A esperaba resolución en 24h, recibe en 8h → ENCANTADO
- Cliente B esperaba resolución en 1h, recibe en 8h → FURIOSO
- El resultado fue idéntico. La expectativa lo cambió todo.

### Los tres orígenes de las expectativas mal gestionadas

1. **La promesa de venta excesiva**: el equipo comercial prometió más de lo que el producto o el servicio puede dar
2. **La comunicación reactiva**: el cliente solo recibe información cuando la pide (o cuando ya hay un problema)
3. **El silencio durante la espera**: no hay updates de estado, el cliente asume el peor escenario

---

## PARTE 2 — EL PRINCIPIO UNDERPROMISE & OVERDELIVER

### Cómo aplicarlo sin parecer mediocre

El underpromise & overdeliver no significa prometer lo mínimo. Significa prometer lo que puedes entregar con certeza y sorprender positivamente cuando puedes hacer más.

**La regla del "buffer de expectativa"**:
- Si puedes resolver un ticket en 6 horas, comunica "antes de fin del día laborable"
- Si el bug estará corregido en el próximo deploy (72h), di "en los próximos 3-5 días hábiles"
- Si la funcionalidad estará lista en 3 semanas, comunica "en unas 4 semanas"

El cliente no ve el esfuerzo interno. Ve si cumpliste lo que dijiste. Prometer X y entregar X+1 genera más satisfacción que prometer X+3 y entregar X+1.

### Los cuatro momentos críticos para gestionar la expectativa

**Momento 1 — Al abrir el ticket (primeros 30 minutos)**:
- Confirma que has recibido la solicitud
- Da una expectativa de tiempo para la primera respuesta sustantiva (no la resolución, la primera actualización real)
- Si es urgente y lo gestionarás antes, dilo — pero no prometas lo que no sabes

**Momento 2 — Cuando investigas (sin tener respuesta aún)**:
- No desaparezcas durante horas sin comunicar
- Un update de "sigo investigando, espero tener más info en X horas" es mejor que el silencio
- Si descubres que será más tiempo del prometido, comunícalo proactivamente (no esperes a que el cliente pregunte)

**Momento 3 — Al encontrar un obstáculo**:
- Comunica el cambio de expectativa inmediatamente, con contexto
- "La resolución tomará más tiempo de lo esperado porque [razón concreta]. Nuevo plazo estimado: X. Aquí tienes un workaround mientras tanto: Y."

**Momento 4 — Al resolver**:
- Comunica la resolución con lo que hiciste, cómo evitar el problema en el futuro (si aplica) y la verificación de que funciona

---

## PARTE 3 — COMUNICACIÓN PROACTIVA

### La diferencia entre soporte reactivo y proactivo

| Soporte reactivo | Soporte proactivo |
|-----------------|------------------|
| El cliente llama cuando hay un problema | El equipo llama al cliente antes de que detecte el problema |
| Respondemos a preguntas | Anticipamos las preguntas |
| El cliente gestiona la información | El cliente recibe la información |
| El cliente siente que persigue al equipo | El cliente siente que el equipo trabaja para él |

### Situaciones donde la comunicación proactiva cambia la experiencia

**Incidentes de servicio**:
En cuanto detectas un problema que puede afectar a clientes, comunica antes de que los clientes lo detecten:
"Hemos identificado un problema que puede afectar a [función] para algunos usuarios. Estamos trabajando en la resolución. Te mantenemos informado."

**Retrasos en entrega**:
No esperes al día de la entrega para decir que no se puede cumplir. Comunica el retraso tan pronto como lo sabes:
"Quiero informarte de que el [entregable / feature] que esperabas el [fecha] se retrasará hasta [nueva fecha] porque [razón]. Entiendo el impacto que esto puede tener en vuestros planes — ¿hay algo que pueda hacer para mitigar el efecto mientras tanto?"

**Cambios en el producto o servicio**:
Cualquier cambio que afecte al cliente (UI, proceso, precio, condiciones) debe comunicarse con antelación suficiente, no el día que ocurre.

### Plantillas de comunicación proactiva

**Template de update durante la investigación**:
> "Hola [nombre], quería mantenerte informado sobre el caso [#número]. Seguimos investigando la causa raíz del problema que reportaste. Por el momento no tenemos una solución definitiva, pero hemos descartado [X] y estamos enfocados en [Y]. Mi próxima actualización será a las [hora] de hoy. Si tienes alguna pregunta mientras tanto, no dudes en responder a este email."

**Template de cambio de expectativa de plazo**:
> "Hola [nombre], necesito informarte de un cambio en el plazo previsto para [tarea/resolución]. Inicialmente habíamos estimado [fecha original], pero por [razón concreta sin excusas] necesitaremos hasta [nueva fecha]. Lamento este inconveniente. Para minimizar el impacto, puedes [workaround si existe]. ¿Tienes alguna pregunta o necesitas algo más de mi parte?"

---

## PARTE 4 — GESTIÓN DEL CLIENTE DIFÍCIL

### Los tipos de cliente difícil y cómo gestionar cada uno

**El cliente impaciente** (exige resolución inmediata de todo):
- Raíz del comportamiento: ha tenido malas experiencias previas de soporte que le enseñaron que solo escalando consigue resultados
- Estrategia: dale visibilidad y control — updates frecuentes, acceso a estado del ticket en tiempo real, confirmación de que lo has priorizado
- Error que hay que evitar: prometer por presión y luego incumplir — confirma el ciclo de comportamiento

**El cliente detallista** (escala cualquier desviación mínima):
- Raíz: perfil de persona con alta aversión al riesgo o empresa en sector regulado
- Estrategia: sé exacto y documentado, no vago — las respuestas ambiguas aumentan su ansiedad
- Lo que más necesita: hechos, datos, confirmaciones por escrito

**El cliente que escaló sin razón** (va directamente a tu manager):
- Raíz: siente que el canal normal no funciona (ha tenido razón antes o tiene la percepción de que nadie le escucha)
- Estrategia: no defiendas al equipo ante el manager; primero resuelve el problema del cliente
- Post-resolución: analiza qué falló en el proceso para que no tuviera que escalar

**El cliente que "siempre" tiene problemas**:
- Antes de asumir que es un cliente difícil, revisa: ¿hay un patrón en los problemas? ¿Es el producto, el proceso de onboarding o realmente el cliente?
- Si hay un patrón de problemas recurrentes: tiene información valiosa sobre un bug o un gap de producto — conviértelo en aliado

### La escucha activa en un momento de cliente enfadado

Protocolo HEARD (Hear, Empathize, Apologize, Resolve, Diagnose):

1. **Hear (escuchar)**: deja que el cliente exprese toda su frustración sin interrumpir
2. **Empathize (empatizar)**: "Entiendo por qué esto es frustrante / esto no debería haber pasado"
3. **Apologize (disculparse)**: una disculpa sincera, sin excusas ni "pero"
4. **Resolve (resolver)**: propón una solución concreta y un plazo claro
5. **Diagnose**: una vez resuelto, analiza qué falló para que no vuelva a ocurrir

**Lo que nunca debes decir**:
- "No es culpa nuestra" (aunque sea verdad, el cliente no quiere oir esto cuando está enfadado)
- "Es una limitación del sistema" (suena a que no vas a arreglarlo)
- "Esto lo tendrías que haber configurado antes" (culpabiliza al cliente)
- "Estamos muy ocupados" (el cliente entiende que no es su prioridad)

---

## PARTE 5 — MÉTRICAS DE EXPECTATIVAS

| Métrica | Definición | Objetivo | Cómo mejorarla |
|---------|-----------|---------|----------------|
| First Response Time (FRT) | Tiempo hasta primera respuesta de un agente | < SLA prometido | Triaje automático, alertas de tickets sin responder |
| Resolution Time | Tiempo hasta resolución completa | < SLA prometido | Mejorar el proceso de escalación interna |
| SLA breach rate | % de tickets que no cumplen el SLA | < 5% | Más agentes, mejor distribución de carga |
| CSAT post-resolución | Encuesta de satisfacción tras cerrar el ticket | > 4.2/5 | Comunicación proactiva, cumplimiento de plazos |
| Escalation rate | % tickets que el cliente escala al manager | < 3% | Comunicación proactiva, resolver en primer contacto |
| Expectation alignment score | Encuesta específica: "¿Recibiste lo que esperabas?" | > 80% "sí" | Definir expectativas más claras en la apertura del ticket |

---

## ENTREGABLES

1. SOP de comunicación de tickets: los 4 momentos críticos con plantillas de mensaje para cada uno
2. Guía de gestión del cliente enfadado para el equipo (protocolo HEARD con ejemplos de frases)
3. Policy de underpromise por tipo de ticket y canal (tiempos que comunicar y cómo decirlo)
4. Plantilla de comunicación proactiva de incidentes: las primeras 3 comunicaciones de un incidente que afecta a múltiples clientes
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Gestionar las expectativas del cliente en soporte: underpromise and overdeliver, comunicación proactiva, protocolos para situaciones difíciles y métricas de alineación.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Pivote de nicho como freelance',
                'description'      => 'Cómo cambiar de sector o especialidad como freelance sin perder los clientes actuales ni el flujo de caja mientras construyes la nueva base de clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de negocios freelance con experiencia en transiciones de nicho y estrategia de posicionamiento para profesionales independientes. Necesito hacer un cambio de sector o especialidad sin arruinar mi negocio actual mientras lo hago.

**Mi situación actual:**
[Especialidad actual, tipos de clientes que tengo, facturación aproximada mensual, antigüedad como freelance]

**El nicho al que quiero ir:**
[Nuevo sector, nueva especialidad o combinación de ambos, por qué quieres hacer este cambio]

**Mis miedos:**
[Perder los clientes actuales / no tener clientes en el nuevo nicho / que el cambio tarde demasiado / tener que bajar el precio para empezar de cero]

---

## PARTE 1 — ANTES DE PIVOTAR: VALIDA EL NUEVO NICHO

### El error del pivot impulsivo

El mayor riesgo en un pivot de nicho freelance: dejar el nicho actual antes de tener tracción en el nuevo. Esto crea un vacío de ingresos que puede ser fatal.

La regla del "puente": nunca quemes el puente anterior antes de haber cruzado al nuevo lado.

### Validación del nuevo nicho antes de comprometerte

Responde estas preguntas antes de empezar el pivot:

**Demanda del mercado**:
1. ¿Hay empresas o personas que pagan por este tipo de trabajo?
2. ¿Cuál es el rango de precios que pagan? (investiga en Glassdoor, LinkedIn, foros del sector, pregunta a otros freelancers del nicho)
3. ¿Quién te contrataría exactamente? (¿qué cargo, en qué tipo de empresa?)
4. ¿Hay otros freelancers que ya lo hacen y están ocupados? (señal de demanda)

**Tu propuesta de valor diferenciada**:
5. ¿Qué aportas al nuevo nicho que no tiene la mayoría de sus freelancers actuales?
6. ¿Hay alguna conexión entre tu experiencia anterior y el nuevo nicho? (esa conexión es tu ventaja)
7. ¿Qué tendrías que aprender para ser competente en el nuevo nicho? ¿Cuánto tiempo?

**Test de mercado**:
8. ¿Puedes hacer 1-2 proyectos pequeños en el nuevo nicho antes de comprometerte?
9. ¿Tienes algún contacto en el nuevo nicho que pueda darte feedback?

### La validación con un proyecto piloto

Antes de hacer el pivot oficial, busca un proyecto en el nuevo nicho a precio reducido o pro bono si es necesario:
- Objetivo: demostrar que puedes hacer el trabajo de calidad suficiente
- Resultado: un caso de estudio, una referencia y una muestra para el portfolio
- Duración: 2-4 semanas como máximo — no un proyecto enorme

---

## PARTE 2 — EL PLAN DE PIVOT EN TRES FASES

### Fase 1 — Preparación paralela (mes 1-3)

Mientras sigues trabajando en tu nicho actual, construyes las bases del nuevo:

**Acciones de preparación**:
1. Completar la formación o certificación necesaria para el nuevo nicho (si aplica)
2. Crear 1-3 muestras de portfolio del nuevo nicho (casos de estudio ficticios o pro bono)
3. Actualizar LinkedIn gradualmente: añade el nuevo nicho sin eliminar el actual todavía
4. Conectar con 10-15 personas del nuevo nicho: prospectos potenciales, colegas freelancers del sector
5. Completar el primer proyecto piloto del nuevo nicho

**Financiero durante la Fase 1**:
- Mantén el 100% de tus ingresos actuales
- Ahorra si puedes: el pivot puede implicar 1-2 meses de ingresos reducidos en la transición
- No rechaces proyectos del nicho actual salvo que sean muy pequeños o muy complejos

### Fase 2 — Transición activa (mes 3-6)

Empiezas a recibir primeros clientes del nuevo nicho y reduces gradualmente la exposición al antiguo:

**Acciones de transición**:
1. Actualiza la propuesta de valor en tu web y LinkedIn para el nuevo nicho como principal
2. Empieza a declinar proyectos del nicho antiguo que no sean estratégicos o bien pagados
3. Lleva activamente 2-3 clientes del nuevo nicho en paralelo con los del antiguo
4. Pide testimonios de los proyectos del nuevo nicho para reforzar la prueba social

**Gestión de los clientes actuales**:
- No abandones a tus clientes actuales de golpe — termina los proyectos en curso
- Si hay clientes de nicho anterior con proyectos largos, puedes mantenerlos temporalmente pero sin aceptar nuevos del mismo tipo
- Algunos clientes actuales pueden ser transferibles al nuevo nicho si cambia el tipo de proyecto que les ofreces

### Fase 3 — Consolidación en el nuevo nicho (mes 6-12)

El nuevo nicho genera suficientes ingresos para ser tu fuente principal:

**Señales de que estás en Fase 3**:
- El 50%+ de tus ingresos vienen del nuevo nicho
- Tienes 2-3 testimonios de clientes del nuevo nicho
- Recibes consultas del nuevo nicho de forma inbound (referidos o tu contenido)

**Acciones de consolidación**:
1. Actualiza completamente tu posicionamiento al nuevo nicho
2. Decide si mantienes algún trabajo del nicho anterior como "servicio adicional" o lo eliminas completamente
3. Aumenta el precio del nuevo nicho a medida que tienes más casos de éxito

---

## PARTE 3 — CÓMO APROVECHAR TU EXPERIENCIA ANTERIOR EN EL NUEVO NICHO

### El "ángulo de cruce" como ventaja competitiva

El mayor activo en un pivot de nicho no es empezar de cero: es la perspectiva única que da tu experiencia anterior.

Ejemplos de ángulos de cruce que son ventaja:
- **Developer que pivota a consultoría de negocio**: entiende los límites técnicos que los consultores tradicionales ignoran
- **Diseñador de moda que pivota a UX**: tiene una sensibilidad estética que los UX de formación informática no tienen
- **Comercial que pivota a copywriting**: entiende la psicología de ventas desde dentro

**Cómo comunicar el ángulo de cruce en tu posicionamiento**:
"Ayudo a [tipo de cliente del nuevo nicho] a [resultado], con el enfoque de [tu experiencia anterior] que la mayoría de [competidores del nuevo nicho] no tiene."

### Transferencia de habilidades: qué sí cambia y qué no

| Qué cambia al pivotar | Qué NO cambia (y es tu ventaja) |
|----------------------|--------------------------------|
| Los clientes y sus problemas | Tu capacidad de ejecutar con calidad |
| La terminología del sector | Tu proceso de trabajo y gestión de proyectos |
| Los canales de captación de clientes | Tu capacidad de comunicar valor |
| Las referencias del portfolio | Tu mentalidad freelance y autogestión |
| Algunos tools y plataformas | Habilidades transversales (comunicación, negociación) |

---

## PARTE 4 — CAPTACIÓN DE CLIENTES EN EL NUEVO NICHO

### Los primeros clientes sin referencias

El catch-22 del nuevo nicho: para conseguir clientes, necesitas referencias. Para tener referencias, necesitas clientes.

**Las cinco vías de entrada sin referencias**:

1. **Tu red personal en el nuevo nicho**: ¿conoces a alguien en el sector nuevo que pueda ser cliente o referirte?
2. **Cold outreach muy personalizado**: busca 20 empresas del nuevo nicho, investiga su situación y envía un mensaje que demuestra que las conoces
3. **Contenido de autoridad**: publica 5-10 artículos o posts sobre el nuevo nicho que demuestren que sabes del tema — los clientes buscan prueba de conocimiento antes de contratar
4. **Colaboración con otros freelancers del nuevo nicho**: un diseñador que hace webs puede necesitar un copywriter; un consultor puede necesitar un developer — los subcontratos son el camino más rápido al primer cliente
5. **Plataformas específicas del nuevo nicho**: si hay marketplaces o plataformas de trabajo del sector, empieza allí aunque el precio sea menor — es para conseguir el primer caso de éxito

### Pricing en el nuevo nicho: cómo no empezar gratis

El error más común: cobrar mucho menos por inseguridad en el nuevo nicho. El cliente no sabe que eres nuevo — lo que ve es tu calidad y tu propuesta de valor.

Estrategia de pricing para el nuevo nicho:
- **Precio de mercado - 20-30%** para los primeros 2-3 proyectos (no gratis)
- **Sube al precio de mercado** cuando tengas 3 referencias del nuevo nicho
- **Precio premium** cuando tengas 5+ casos de éxito y testimonios verificables

Cómo comunicar el descuento inicial sin devaluar:
"Estoy expandiendo mi trabajo a [nuevo nicho] y quiero construir referencias sólidas en el sector. Por eso ofrezco mis primeros proyectos de [X€] a [X × 0.75€] — a cambio, necesito poder usar el proyecto como caso de estudio y pedir un testimonio."

---

## PARTE 5 — GESTIÓN DEL PERIODO DE TRANSICIÓN

### Finanzas durante el pivot

El pivot puede implicar 1-3 meses con ingresos reducidos. Prepárate:

1. **Colchón financiero**: 3 meses de gastos personales y de negocio antes de empezar la Fase 2
2. **No abandones todos los clientes del nicho actual a la vez**: reduce gradualmente
3. **Mantén proyectos puente**: trabajos del nicho antiguo que son bien pagados y de bajo esfuerzo, que puedes mantener mientras construyes el nuevo

### Indicadores de que el pivot va bien

Define los hitos de validación que te dirán si el pivot es correcto:
- Mes 2: primer proyecto del nuevo nicho completado (aunque sea pequeño o a precio reducido)
- Mes 4: primer cliente que paga precio de mercado del nuevo nicho
- Mes 6: 30%+ de ingresos del nuevo nicho
- Mes 9: primer cliente referido dentro del nuevo nicho
- Mes 12: 70%+ de ingresos del nuevo nicho, precio de mercado o superior

### Cuándo abortar el pivot

A veces el nuevo nicho no es lo que esperabas. Señales de que deberías reconsiderar:
- Después de 3 proyectos piloto, no hay satisfacción genuina con el trabajo (el pivot fue de huida, no de atracción)
- Los clientes del nuevo nicho valoran mucho menos tu trabajo de lo que esperabas
- El coste de adquisición de clientes es mucho mayor de lo que tu margen puede sostener
- Llevas 6 meses sin conseguir un cliente de precio de mercado

---

## ENTREGABLES

1. Plan de pivot personalizado: fases con hitos específicos y acciones semana a semana para los primeros 3 meses
2. Declaración de posicionamiento para el nuevo nicho (usando el ángulo de cruce de tu experiencia anterior)
3. Lista de 20 empresas del nuevo nicho a las que enviar outreach en los primeros 30 días
4. Script de cold outreach para el nuevo nicho: mensaje de LinkedIn y email (con personalización específica)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Planificar un pivot de nicho como freelance en tres fases: validación, transición con clientes paralelos y consolidación sin destruir los ingresos actuales.',
                'vote_score'       => 42,
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
