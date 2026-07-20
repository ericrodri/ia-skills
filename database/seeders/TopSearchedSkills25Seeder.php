<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills25Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de YouTube para B2B: el canal que genera leads cualificados mientras duermes',
                'description'       => 'Construye el canal de YouTube B2B que genera leads cualificados de forma consistente. Con la estrategia de contenido orientada al SEO de YouTube, los tipos de vídeo que convierten, el proceso de producción sin equipo de vídeo y las métricas que importan.',
                'prompt_content'    => <<<'PROMPT'
Eres un B2B Video Marketing Strategist con experiencia construyendo canales de YouTube para empresas tech, consultoras y SaaS que han generado entre 20-100 leads cualificados/mes desde el canal sin equipo de vídeo dedicado.

Contexto:
- Empresa y producto: [describe]
- Audiencia objetivo en YouTube: [cargo, sector, tamaño de empresa]
- Objetivo del canal: [leads directos / brand awareness / soporte y educación a clientes]
- Recursos disponibles: [1 persona con smartphone / tenemos cámara / tenemos edición / sin recursos]
- Estado actual: [canal de cero / canal con vídeos sin estrategia / quiero optimizar el existente]

## Estrategia de YouTube B2B — [Empresa]

### 🎯 Por qué YouTube funciona en B2B (y qué tipos de empresas lo usan bien)

YouTube tiene 2 ventajas únicas para B2B:

**1. El contenido se compone (efecto snowball):**
Un vídeo publicado hoy sigue generando vistas en 2 años.
Los artículos de blog se quedan obsoletos; los vídeos explicativos de "cómo hacer X" siguen siendo relevantes.

**2. El SEO de YouTube y el SEO de Google se retroalimentan:**
Los vídeos aparecen en los resultados de búsqueda de Google.
"Tutorial de [tu tema]" en Google → el vídeo de YouTube aparece en las primeras posiciones.

**Las empresas B2B que más éxito tienen en YouTube:**
- SaaS con una curva de aprendizaje (los tutoriales de la herramienta son el mejor contenido)
- Consultoras y agencias (los vídeos de expertise se comparten)
- Empresas con ciclo de venta largo (el cliente investiga mucho antes de comprar)

### 📋 Los 4 tipos de contenido que funcionan en YouTube B2B

**Tipo 1 — Tutoriales del producto/herramienta:**
"Cómo hacer [X] con [tu producto]"
Audiencia: clientes actuales (retención) + potenciales clientes que buscan esa funcionalidad.
Tasa de conversión: alta (ya están interesados en el tipo de solución que vendes).

**Tipo 2 — Vídeos de problema/solución:**
"Por qué [el problema que tienen tus clientes] ocurre y cómo resolverlo"
No menciones tu producto — da el valor sin vender.
Audiencia: personas en la fase de awareness del problema.

**Tipo 3 — Comparativas y alternativas:**
"[Tu producto] vs [Competidor]: cuándo elegir cada uno"
Mucho volumen de búsqueda. La honestidad en estas comparativas genera muchísima confianza.
Si recomiendas el competidor cuando es mejor para ciertos casos → builds massive trust.

**Tipo 4 — Casos de éxito en vídeo:**
Entrevista a un cliente sobre sus resultados con tu solución.
20-40 minutos. Formato conversacional.
Convierte muy bien porque el espectador se identifica con el cliente entrevistado.

### 🔍 El SEO de YouTube para B2B: cómo aparecer donde busca tu cliente

**Keyword research para YouTube:**
Las mismas herramientas que para SEO web — pero prioriza las keywords con vídeos en los resultados de Google.
Herramienta específica: TubeBuddy o VidIQ (extensiones de Chrome).

**La anatomía del vídeo optimizado:**

```
TÍTULO (máximo 60 caracteres):
[Keyword principal] + [el beneficio]
✅ "Cómo automatizar el seguimiento de leads en HubSpot (sin código)"
❌ "Tutorial de HubSpot - Parte 3"

DESCRIPCIÓN (primeras 3 líneas = lo que aparece antes del "ver más"):
- Las 3 primeras líneas son las más importantes (aparecen sin hacer clic)
- Incluye la keyword en las primeras 20 palabras
- Añade un CTA claro (link a la web, lead magnet, demo)

TAGS: 5-10 keywords relacionadas

THUMBNAIL:
- Texto legible en 3 palabras (es lo que ven antes de hacer clic)
- Contraste alto
- Tu cara si el vídeo es de explicación/educación (las caras convierten mejor)
```

### 🎬 La producción mínima viable (sin equipo de vídeo)

**El setup de €200-500 que te da calidad profesional:**
```
Cámara:      Tu teléfono (iPhone/Samsung 2020+) → mejor calidad que cámaras de entrada
Micrófono:   Rode Wireless GO II o Rode VideoMicro (€50-200) — el audio importa más que el vídeo
Iluminación: Ring light de €30-50 o luz natural de una ventana (sin sol directo)
Fondo:       Fondo limpio (pared lisa) o estantería de libros — no necesitas fondo de estudio

Edición: DaVinci Resolve (gratuito) o CapCut
```

**El proceso de producción de un vídeo en <3 horas:**
1. Guión: 30 minutos (outline + puntos clave — no el guión completo)
2. Grabación: 45 minutos (grabar + 2-3 retomas)
3. Edición: 60-90 minutos (cortes, música, subtítulos automáticos)
4. Thumbnail + SEO: 30 minutos

### 📊 Las métricas de YouTube B2B que importan
Click-through rate, watch time, y cómo conectar el canal de YouTube con el CRM para medir los leads que genera.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'YouTube B2B, video marketing, SEO YouTube, lead generation, contenido educativo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Autenticación segura en aplicaciones web: JWT, OAuth 2.0 y las mejores prácticas que evitan los errores más caros',
                'description'       => 'Implementa el sistema de autenticación y autorización de tu aplicación web de forma segura. Con las diferencias entre sesiones y JWT, el flujo correcto de OAuth 2.0, el almacenamiento seguro de tokens, la gestión de refresh tokens y los errores de seguridad más frecuentes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Security Engineer con experiencia auditando y corrigiendo vulnerabilidades de autenticación en aplicaciones web B2B SaaS que han pasado por auditorías de seguridad OWASP A07 (Identification and Authentication Failures).

Stack:
- Backend: [Node.js / Python / PHP / Java / Go / otro]
- Frontend: [React / Vue / Next.js / otro]
- Estado actual: [implementando autenticación desde cero / revisando sistema existente / añadiendo OAuth/SSO]
- Tipo de aplicación: [SPA con API / web tradicional / móvil + API / otro]

## Autenticación Segura — [Aplicación]

### 🔐 Sesiones vs. JWT: cuándo usar cada uno

**Sesiones del servidor (el método clásico):**
- La sesión se guarda en el servidor (memoria, Redis, base de datos)
- El cliente recibe un session ID en una cookie HttpOnly
- En cada request, el servidor verifica la sesión en el store

**Ventajas:** fácil de invalidar (logout instantáneo), sin exposición de datos en el cliente.
**Desventajas:** el servidor debe mantener estado, complica el scaling horizontal.

**JWT (JSON Web Tokens):**
- El token contiene el payload (user_id, roles) + firma criptográfica
- El servidor no almacena nada — verifica la firma en cada request
- El cliente guarda el token (en localStorage o cookie HttpOnly)

**Ventajas:** stateless, escala fácilmente.
**Desventajas:** no se pueden invalidar sin una blocklist (el logout no invalida el token inmediatamente).

**La recomendación:**
Para SPAs con API → JWT con refresh tokens almacenados en cookies HttpOnly.
Para aplicaciones web tradicionales → sesiones del servidor.

### ⚠️ Los errores de seguridad más frecuentes (y cómo evitarlos)

**Error 1 — Guardar el JWT en localStorage:**
```javascript
// ❌ Vulnerable a XSS — cualquier script malicioso puede leerlo
localStorage.setItem('token', jwt)

// ✅ Usa cookies HttpOnly — JavaScript no puede acceder a ellas
// El servidor las envía con:
res.cookie('token', jwt, {
  httpOnly: true,    // No accesible desde JavaScript
  secure: true,      // Solo HTTPS
  sameSite: 'strict' // Protege contra CSRF
})
```

**Error 2 — Access tokens de larga duración sin refresh tokens:**
```javascript
// ❌ Token que expira en 30 días — si se compromete, el atacante tiene 30 días de acceso
const token = jwt.sign({ userId }, secret, { expiresIn: '30d' })

// ✅ Access token corto + refresh token largo
const accessToken  = jwt.sign({ userId }, secret, { expiresIn: '15m' })
const refreshToken = jwt.sign({ userId }, secret, { expiresIn: '7d' })
// El refresh token se guarda en cookie HttpOnly
// El access token se guarda en memoria (React state, no localStorage)
```

**Error 3 — No validar el tipo de algoritmo del JWT:**
```javascript
// ❌ Vulnerable a algorithm confusion attack
const payload = jwt.verify(token, secret)

// ✅ Siempre especifica el algoritmo esperado
const payload = jwt.verify(token, secret, { algorithms: ['HS256'] })
```

**Error 4 — Contraseñas hasheadas con MD5 o SHA1:**
```javascript
// ❌ MD5/SHA1 son vulnerables a rainbow tables
const hashedPassword = crypto.createHash('md5').update(password).digest('hex')

// ✅ Usa bcrypt, argon2 o scrypt
const bcrypt = require('bcryptjs')
const hashedPassword = await bcrypt.hash(password, 12) // salt rounds = 12
const isValid = await bcrypt.compare(password, hashedPassword)
```

### 🔑 El flujo correcto de OAuth 2.0 (Google/GitHub login)

**El flujo Authorization Code (el más seguro para web):**

```
1. Usuario hace clic en "Login con Google"
2. Tu app redirige a:
   https://accounts.google.com/o/oauth2/auth
   ?client_id=YOUR_CLIENT_ID
   &redirect_uri=https://tuapp.com/auth/callback
   &scope=email+profile
   &response_type=code
   &state=RANDOM_STATE  ← importante para prevenir CSRF

3. Google autentica al usuario y redirige a:
   https://tuapp.com/auth/callback?code=AUTH_CODE&state=RANDOM_STATE

4. Tu servidor intercambia el AUTH_CODE por un access token:
   POST https://oauth2.googleapis.com/token
   { code, client_id, client_secret, redirect_uri, grant_type: 'authorization_code' }

5. Google devuelve { access_token, id_token }
6. Tu servidor verifica el id_token, extrae el email, crea o actualiza el usuario en tu DB
7. Tu servidor crea tu propia sesión/JWT para el usuario
```

**El error más frecuente en OAuth:**
No verificar el parámetro `state` → vulnerable a CSRF attacks.

### 🔒 La gestión de refresh tokens: rotación y revocación
El sistema de refresh token rotation que invalida tokens comprometidos y la estrategia de logout que limpia todos los dispositivos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Autenticación, JWT, OAuth 2.0, seguridad web, refresh tokens, OWASP',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX Writing: el microcopy que guía al usuario y reduce el soporte sin necesitar un copywriter',
                'description'       => 'Escribe el microcopy (textos de botones, mensajes de error, tooltips, placeholders y confirmaciones) que guía al usuario intuitivamente, reduce la fricción y hace que el producto sea más fácil de usar. Con los principios de UX writing, los errores más frecuentes y plantillas para los textos más habituales.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Writer con experiencia en productos SaaS y apps que han reducido las preguntas de soporte un 20-30% y mejorado las tasas de completitud de formularios gracias a mejoras en el microcopy.

Contexto:
- Tipo de producto: [SaaS / app móvil / ecommerce / otro]
- Área a mejorar: [formularios / mensajes de error / onboarding / emails de sistema / toda la app]
- Tono de la marca: [formal / amigable / técnico / otro]
- Problema actual: [los usuarios preguntan cosas que están en la UI / el onboarding tiene muchas preguntas / los mensajes de error son incomprensibles]

## UX Writing — [Producto]

### 🧠 Los 3 principios del microcopy que funciona

**Principio 1 — Claridad antes que creatividad:**
El microcopy no es el lugar para ser ingenioso. Primero que el usuario entienda qué debe hacer; después (si hay margen) que sea memorable.

"Continuar" es mejor que "¡Vamos!" si el usuario no tiene claro qué pasa al hacer clic.

**Principio 2 — Orienta al usuario hacia la acción siguiente:**
El microcopy no describe lo que ya está pasando — indica qué debe hacer el usuario a continuación.

**Principio 3 — El usuario central, no el sistema:**
El sistema no "procesa" ni "ejecuta" — el usuario "guarda", "actualiza" o "envía".

### ✍️ El microcopy de los 8 elementos más frecuentes

**1. Botones de acción:**
```
❌ "Submit" / "Enviar" / "OK" → sin contexto de qué hace
✅ La acción específica: "Guardar cambios" / "Crear proyecto" / "Publicar artículo"
✅ En primera persona cuando es una decisión: "Quiero empezar" / "Sí, eliminar"
```

**2. Placeholders en formularios:**
```
❌ "Nombre" → el usuario ya sabe que es el campo de nombre
❌ "Introduce tu nombre aquí" → demasiado evidente
✅ Usa el placeholder para dar formato o ejemplo:
   Campo nombre: "Ej: Ana García"
   Campo email: "tu@empresa.com"
   Campo precio: "Ej: 99.00"
   Campo descripción: "Describe brevemente el problema..."
```

**3. Labels de formulario:**
```
❌ Label genérico: "Nombre"
✅ Label específico: "Nombre completo (como aparecerá en el contrato)"
✅ Para campos opcionales: "Empresa (opcional)"
✅ Para campos con formato: "Fecha de nacimiento (DD/MM/AAAA)"
```

**4. Mensajes de error:**
```
❌ "Campo incorrecto" → el usuario no sabe qué está mal
❌ "Error 422: Unprocessable Entity" → solo lo entiende el desarrollador
✅ La fórmula: [qué pasó] + [por qué] + [cómo solucionarlo]

"Este email ya está registrado. ¿Quieres recuperar tu contraseña?"
"La contraseña debe tener al menos 8 caracteres y un número."
"No hemos podido procesar el pago — comprueba el número de tarjeta o intenta con otra."
```

**5. Mensajes de éxito:**
```
❌ "Proceso completado" → frío y genérico
✅ Específico y confirmatorio:
   "Tu proyecto está guardado."
   "Email enviado a ana@empresa.com."
   "Contraseña actualizada. La próxima vez que inicies sesión, usa la nueva."
```

**6. Estados vacíos:**
```
❌ "No hay datos" → no dice qué hacer
✅ La fórmula: [qué significa que esté vacío] + [cómo llenarlo]
   "Aún no has creado ningún proyecto. [+ Crear tu primer proyecto]"
   "No tienes clientes registrados todavía. [+ Añadir primer cliente]"
```

**7. Confirmaciones de acciones destructivas:**
```
❌ "¿Confirmar eliminación?" con botones "Sí" / "No"
✅ Describe la consecuencia exacta:
   "¿Eliminar el proyecto 'Proyecto Marketing Q1'?
   Se borrarán todos los archivos y comentarios. Esta acción no se puede deshacer."
   [Cancelar] [Eliminar proyecto]
```

**8. Tooltips:**
```
❌ Tooltip que repite lo que ya dice el label: "Este campo es para el nombre"
✅ Tooltip que añade información útil: "El nombre que verán tus clientes en las facturas"
✅ Tooltip que explica por qué se pide: "Necesitamos tu empresa para la emisión del certificado"
```

### 🎨 El tono de voz en el microcopy según la situación
Las 4 situaciones emocionales del usuario (frustración, duda, éxito, urgencia) y cómo adaptar el tono del microcopy a cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'UX writing, microcopy, copywriting UI, mensajes de error, textos de botones',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales enablement: el sistema de recursos que convierte a cada vendedor en el mejor vendedor del equipo',
                'description'       => 'Diseña el sistema de sales enablement que da a cada vendedor los recursos, el conocimiento y las herramientas para cerrar más deals. Con la biblioteca de recursos, las playbooks de venta por escenario, el proceso de entrenamiento continuo y cómo medir el impacto del enablement.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Enablement Manager con experiencia reduciendo el tiempo de ramping de nuevos vendedores de 6-9 meses a 3-4 meses y aumentando la tasa de cuota del 50% al 70% del equipo mediante sistemas de enablement estructurados.

Contexto:
- Tamaño del equipo de ventas: [N vendedores]
- Tipo de venta: [inside sales / field / canal]
- Ciclo de venta: [duración media]
- Problema actual: [los nuevos vendedores tardan demasiado en producir / el equipo no usa los recursos de marketing / las presentaciones y demos son inconsistentes / no sabemos por qué algunos vendedores cierran y otros no]
- Herramienta de CRM: [Salesforce / HubSpot / Pipedrive / otro]

## Sistema de Sales Enablement — [Empresa]

### 🏗️ Los 4 pilares del sales enablement efectivo

**Pilar 1 — Contenido de ventas (lo que el vendedor usa en cada etapa del ciclo):**
Recursos organizados por etapa del funnel y tipo de cliente.

**Pilar 2 — Conocimiento (lo que el vendedor necesita saber):**
Producto, competidores, industria, objeciones y respuestas.

**Pilar 3 — Habilidades (lo que el vendedor necesita hacer bien):**
Metodología de venta, storytelling, negociación, cierre.

**Pilar 4 — Herramientas (lo que automatiza y acelera):**
CRM, herramientas de prospección, secuencias de email, analytics de propuestas.

### 📚 La biblioteca de contenido de ventas (organizada por etapa)

```
ETAPA 1 — PROSPECCIÓN Y PRIMER CONTACTO:
- Plantillas de cold email por segmento (PYME / Mid-market / Enterprise)
- Scripts de llamada en frío por caso de uso
- Secuencias de LinkedIn por tipo de decisor
- Resumen del ICP con señales de compra

ETAPA 2 — CALIFICACIÓN:
- Guía MEDDIC / BANT de calificación
- Preguntas de descubrimiento por vertical
- Red flags y criterios de disqualificación

ETAPA 3 — DEMO Y PRESENTACIÓN:
- Deck de presentación modular (personalizable por vertical)
- Guión de demo por caso de uso
- Leave-behind para el cliente (1 página del ROI del producto)

ETAPA 4 — PROPUESTA Y NEGOCIACIÓN:
- Plantilla de propuesta por segmento
- Guía de gestión de objeciones (por objeción: precio, competencia, timing)
- Casos de éxito por vertical (para el momento de la propuesta)

ETAPA 5 — CIERRE:
- Checklist de cierre (qué falta para firmar)
- Plantillas de email de seguimiento de propuesta pendiente
- Scripts de conversación de urgencia

POST-VENTA (para el handoff a CS):
- Plantilla de kickoff meeting
- Expectativas del cliente documentadas para CS
```

### 🎓 El proceso de onboarding del nuevo vendedor (ramp acelerado)

**Los 3 fases del ramp:**

**Semana 1-2 — Aprende el producto:**
Objetivo: que el nuevo vendedor pueda hacer una demo básica solo.
- Acceso al producto como usuario
- 5 tutoriales del producto (los más usados por los clientes)
- Shadow en 5 demos con vendedores senior
- Primera demo práctica ante el manager

**Semana 3-4 — Aprende el proceso de venta:**
- Estudio de 10 deals ganados y 5 deals perdidos del CRM
- Shadow en 5 calls de calificación
- Roleplay de objeciones frecuentes
- Primera call de calificación propia (con feedback inmediato)

**Mes 2 — Construye el pipeline:**
Objetivo: 2x pipeline objetivo al final del mes.
- Prospección autónoma con revisión semanal del manager
- 1 reunión semanal de coaching (call review + feedback)
- Primer deal cerrado (aunque sea pequeño)

### 📊 Cómo medir el impacto del enablement
Las 5 métricas que demuestran si el sistema de enablement está produciendo resultados y cómo presentarlas al equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Sales enablement, playbook de ventas, onboarding vendedores, recursos de ventas, CRM',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto mínimo viable (MVP): qué construir primero para validar sin invertir 6 meses de desarrollo',
                'description'       => 'Define el MVP de tu producto con la funcionalidad mínima que valida la hipótesis central sin desperdiciar tiempo de desarrollo. Con el proceso para identificar qué es mínimo y qué es viable, las técnicas para validar antes de construir y cómo saber cuándo el MVP está listo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia lanzando MVPs en startups que han pasado de "construyamos todo" a "validemos con lo mínimo necesario" reduciendo el time-to-market de 9 meses a 6-8 semanas.

Contexto:
- Idea de producto: [describe]
- Hipótesis central: [qué asumes que es cierto sobre el problema y la solución]
- Usuario objetivo: [describe]
- Recursos disponibles: [1 dev / equipo de 3 / sin dev (no-code) / agencia]
- Estado actual: [idea sin desarrollar / prototipo / MVP en desarrollo / MVP lanzado sin tracción]

## Definición del MVP — [Producto]

### 🧠 La confusión sobre el MVP (y la definición que importa)

**Lo que el MVP NO es:**
- La versión reducida del producto completo
- Un prototipo de baja calidad
- Un producto con bugs que "ya mejoraremos después"

**Lo que el MVP SÍ es:**
La versión del producto que permite aprender lo máximo sobre el problema y la solución con el mínimo esfuerzo.

El objetivo del MVP no es lanzar — es aprender.

**La pregunta que define el MVP:**
"¿Cuál es la hipótesis más importante que este producto debe validar?"

Todo lo que no valida esa hipótesis no va en el MVP.

### 🔍 El proceso para definir qué va en el MVP (y qué no)

**Paso 1 — Escribe la hipótesis central:**
"Creemos que [el usuario X] tiene el problema Y. Creemos que la solución Z resuelve ese problema. Lo sabremos cuando [el indicador de validación]."

Ejemplo:
"Creemos que los freelancers de diseño tienen dificultad para hacer seguimiento de sus proyectos y cobros. Creemos que una app simple de gestión de proyectos y facturación lo resuelve. Lo sabremos cuando 50 freelancers la usen activamente durante 30 días y el 70% facture a través de la app."

**Paso 2 — Lista todas las funcionalidades "posibles":**
Sin limitación — todo lo que el producto podría hacer.

**Paso 3 — Clasifica cada funcionalidad:**
```
ESENCIAL: sin esto, no puedo probar la hipótesis central
IMPORTANTE: añade valor, pero el MVP funciona sin esto
DESEABLE: sería ideal, pero no es necesario para la validación
DEFER: para versiones futuras

Regla: solo lo ESENCIAL va en el MVP
```

**Paso 4 — La pregunta de eliminación:**
Para cada funcionalidad "esencial" pregunta:
"¿Puedo validar la hipótesis sin esto? ¿Puedo hacerlo manualmente en lugar de construirlo?"
Si la respuesta es sí → no lo construyas, hazlo manualmente.

### 🔧 Las técnicas para validar antes de construir

**El "Mago de Oz":**
El usuario cree que está usando un sistema automatizado, pero hay una persona detrás haciendo el trabajo manualmente.
Validación sin una sola línea de código.

**El Smoke Test:**
Crea una landing page que describe el producto que aún no existe.
Añade un formulario de registro o un botón de compra.
Si nadie se registra → el problema no era tan grande como pensabas.
Si hay registros → tienes demanda antes de construir.

**El concierge:**
Ofreces el servicio manualmente para los primeros clientes.
Si vendes software de gestión → ofrécete a gestionar el proceso tú mismo en Excel por €X/mes.
Si hay disposición a pagar → hay mercado.

**El prototipo en Figma:**
Diseña los flujos clave en alta fidelidad sin código.
Haz user testing con el prototipo.
Aprenderás el 80% de lo que aprenderías con el producto real, sin construirlo.

### 📐 Las feature flags: cómo lanzar el MVP a un subset de usuarios
La estrategia de rollout progresivo que permite validar con usuarios reales sin arriesgar toda la base de usuarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'MVP, producto mínimo viable, validación, lean startup, product management',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del conflicto en equipos: convierte la tensión en aprendizaje antes de que escale',
                'description'       => 'Gestiona los conflictos en equipos de trabajo de forma que resuelvan el problema real sin dañar las relaciones ni la productividad. Con el proceso de mediación, los tipos de conflicto más frecuentes, las conversaciones difíciles que no se pueden evitar y cuándo escalar a RRHH.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Business Partner con experiencia mediando conflictos en equipos de trabajo de 5-50 personas en empresas tech y de servicios donde los conflictos sin resolver destruyen equipos y elevan la rotación.

Contexto:
- Tipo de conflicto: [entre dos personas / entre el manager y el equipo / entre equipos distintos / otro]
- Gravedad: [tensión latente que afecta al trabajo / conflicto abierto / situación que requiere intervención inmediata]
- Tu rol: [manager del equipo / RRHH / una de las partes / tercero que media]
- Historia del conflicto: [cuánto lleva sin resolverse / hubo un incidente concreto]

## Gestión del Conflicto en Equipos — [Situación]

### 🔍 Los 4 tipos de conflicto (y por qué la categoría cambia el approach)

**Tipo 1 — Conflicto de tareas:**
Desacuerdo sobre qué hacer o cómo hacerlo.
→ El más fácil de resolver. A menudo productivo — el desacuerdo puede llevar a la mejor solución.
→ Approach: datos y lógica. Estructura el debate en torno a criterios acordados.

**Tipo 2 — Conflicto de proceso:**
Desacuerdo sobre cómo se distribuye el trabajo, los roles o las responsabilidades.
→ Origen frecuente: falta de claridad en las responsabilidades (ambigüedad de roles).
→ Approach: clarificar roles y procesos antes de abordar las personas.

**Tipo 3 — Conflicto de relación:**
Las personas tienen problemas personales más allá del trabajo.
→ El más difícil de resolver. A menudo tiene raíces en incidentes pasados no resueltos.
→ Approach: la mediación de las dos partes por separado antes de juntarlas.

**Tipo 4 — Conflicto de valores:**
Las personas tienen valores o principios incompatibles sobre lo que es correcto.
→ El más difícil cuando los valores son profundos. Si no hay zona de acuerdo → puede ser irresoluble.
→ Approach: separar lo que se puede negociar de lo que no. Si los valores son fundamentalmente incompatibles con la cultura de la empresa, puede ser un problema de fit, no de conflicto.

### 📋 El proceso de mediación en 5 pasos

**Paso 1 — Reuniones individuales (antes de juntarlos):**
Reúnete con cada persona por separado.
El objetivo es entender, no arbitrar todavía.

Preguntas para cada parte:
```
"¿Qué está pasando desde tu perspectiva?"
"¿Cómo está afectando esto a tu trabajo?"
"¿Qué necesitas que cambie para que esto mejore?"
"¿Qué estás dispuesto/a a hacer diferente?"
"¿Hay algo que yo (como mediador) deba saber?"
```

**Paso 2 — Identifica los intereses, no las posiciones:**
La posición es lo que la persona dice que quiere.
El interés es por qué lo quiere.

Ejemplo:
Posición de Ana: "Quiero que Miguel no asista a mis reuniones de cliente."
Interés de Ana: "Quiero que las relaciones con mis clientes no se vean comprometidas por comentarios imprudentes."

Si resuelves la posición, no resuelves el conflicto. Si resuelves el interés, sí.

**Paso 3 — La reunión conjunta:**
Reglas claras al inicio:
"El objetivo de esta reunión es encontrar una solución que funcione para ambos. Cada uno habla sin interrupciones. No buscamos quién tiene razón — buscamos qué podemos cambiar."

**Estructura de la reunión:**
1. Cada parte describe cómo está viviendo la situación (sin interrupciones)
2. Cada parte describe qué impacto tiene en su trabajo
3. Cada parte propone una solución (qué pide al otro + qué ofrece cambiar)
4. El mediador facilita la búsqueda de acuerdo

**Paso 4 — El acuerdo:**
El acuerdo debe ser específico y medible:
"Miguel revisará sus comentarios sobre proyectos de Ana en privado con ella antes de cualquier reunión de cliente."
No: "Miguel será más cuidadoso."

**Paso 5 — El seguimiento:**
Check-in individual a las 2 semanas.
"¿Cómo va el acuerdo? ¿Qué está funcionando? ¿Qué necesita ajuste?"

### 🚨 Cuándo escalar a RRHH (o a tu superior)
Las señales que indican que el conflicto ha cruzado la línea de lo que un manager puede gestionar solo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión conflictos, mediación, conversaciones difíciles, trabajo en equipo, RRHH',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Reducción de costes sin destruir el negocio: el análisis que separa lo imprescindible de lo prescindible',
                'description'       => 'Analiza y reduce los costes de la empresa de forma sistemática sin comprometer la capacidad de generación de revenue. Con el proceso de análisis de costes por categoría, los criterios para decidir qué cortar y qué preservar, y el plan de implementación que minimiza el impacto en el equipo y los clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia liderando procesos de reducción de costes en empresas de 20-200 empleados sin despidos masivos, preservando la capacidad de crecimiento y manteniendo la confianza del equipo en situaciones de presión financiera.

Contexto:
- Situación actual: [la empresa quema demasiada caja / la rentabilidad ha caído / estamos preparando una ronda y queremos limpiar el P&L / otro]
- Objetivo de reducción: [€/mes o % de la estructura de costes]
- Tiempo disponible: [1 mes / trimestre / 6 meses]
- Costes actuales principales: [describe las principales partidas]
- Restricción principal: [no podemos tocar el headcount / no podemos reducir marketing / otro]

## Plan de Reducción de Costes — [Empresa]

### 🧮 El diagnóstico: el mapa de costes antes de cortar

**Paso 1 — Clasifica todos los costes en 3 categorías:**

```
CATEGORÍA A — COSTES VARIABLES (proporcionales al revenue):
Comisiones, publicidad de performance (Google Ads, Meta Ads),
costes de infraestructura que escalan con el uso.
→ Si el revenue cae, estos caen automáticamente.
→ Son los más fáciles de ajustar sin dañar las operaciones.

CATEGORÍA B — COSTES SEMIFIJOS (parte fija + parte variable):
Algunos salarios (con variable), algunos servicios de marketing,
costes de algunos proveedores con mínimos garantizados.
→ Requieren análisis individual — hay parte ajustable.

CATEGORÍA C — COSTES FIJOS (no dependen del revenue):
Salarios fijos, alquiler, subscripciones de software, seguros.
→ Son los más difíciles de reducir pero los que más impactan.
```

**Paso 2 — Mapa de impacto vs. coste:**

Para cada partida de coste:
```
Columna 1: Nombre del coste
Columna 2: Importe mensual €
Columna 3: Impacto en el negocio si se elimina (1-5: 1=ninguno, 5=crítico)
Columna 4: Facilidad de eliminación (1-5: 1=complejo, 5=trivial)
Columna 5: Prioridad de corte = (5 - Impacto) × Facilidad

Ordena por prioridad descendente → los de arriba son los primeros a cortar.
```

### ✂️ Las 5 categorías de reducción más efectivas

**1. Subscripciones de software no utilizadas:**
La categoría con mayor ratio "ahorro / impacto". La mayoría de empresas tienen un 20-30% de suscripciones que nadie usa activamente.

Auditoría: lista todos los pagos de tarjeta de crédito y cargo en banco del último mes.
Para cada suscripción: ¿quién la usa? ¿Con qué frecuencia? ¿Hay una alternativa más barata?

**2. Proveedores y contratos renegociables:**
Revisa los contratos de más de 12 meses de antigüedad.
Los precios de cloud computing, telecomunicaciones y servicios profesionales son negociables cada año.
La mayoría de proveedores prefieren renegociar que perder el cliente.

**3. Publicidad de bajo ROI:**
Analiza cada canal de publicidad por ROAS (Return on Ad Spend).
Los canales con ROAS <2 pueden recortarse sin que el revenue caiga proporcionalmente.

**4. Optimización del espacio físico:**
Renegociar el contrato de alquiler, eliminar espacios que no se usan, pasar a modelo híbrido.

**5. Headcount — la última opción:**
El headcount es el coste mayor en la mayoría de empresas (60-80% de la estructura).
Pero también es el de mayor impacto en el negocio y en el equipo.
Antes del headcount: congelación de nuevas incorporaciones + no renovar contratos temporales.
Si hay que reducir headcount: hacerlo de una vez (no en varias oleadas — el efecto sobre el equipo es peor con las incertidumbres repetidas).

### 📣 Cómo comunicar el proceso de reducción de costes al equipo
El plan de comunicación que mantiene la confianza del equipo durante el proceso de reestructuración.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Reducción costes, reestructuración financiera, análisis gastos, rentabilidad, CFO',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad industrial: marcas, patentes y diseños industriales para proteger tu negocio en España y Europa',
                'description'       => 'Protege los activos intangibles de tu empresa registrando tu marca, diseño o invención en España y Europa. Con el proceso de registro de marca en la OEPM y la EUIPO, la diferencia entre marca, patente y diseño industrial, la búsqueda de anterioridades y los costes reales del proceso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en propiedad industrial con experiencia asesorando a startups y PYME en el registro y defensa de marcas, patentes y diseños industriales en España, la Unión Europea y mercados internacionales.

Contexto de la empresa:
- Qué quieres proteger: [nombre de marca / logotipo / diseño de producto / invención / software / otro]
- Ámbito territorial: [solo España / toda la UE / internacional]
- Estado actual: [uso la marca sin registrar / ya registro en España y quiero ampliar / acabo de crear el nombre y quiero registrarlo]
- Sector: [describe — relevante para las clases de Niza]

## Propiedad Industrial en España y Europa — [Empresa]

### 🏷️ El registro de marca: protege tu nombre e identidad

**¿Qué puedes registrar como marca?**
- Nombres comerciales (denominativas)
- Logos e imágenes (figurativas)
- La combinación de nombre + logo (mixtas)
- Colores específicos, formas, sonidos (marcas no convencionales — más difíciles de registrar)

**El proceso de registro en España (OEPM):**

```
Paso 1 — Búsqueda de anterioridades:
Antes de solicitar, verifica que tu marca no está registrada por otra empresa.
Busca en: OEPM (España), EUIPO (UE), TMview (internacional)

Paso 2 — Selección de las clases de Niza:
El sistema de Niza clasifica los productos y servicios en 45 clases.
Tu marca solo protege en las clases que solicitas.
Clase 35: publicidad y negocios
Clase 42: tecnología y software
Clase 9: software, apps, hardware
(El registro en cada clase tiene coste adicional)

Paso 3 — Presentación de la solicitud:
Online en sede.oepm.es
Tasa base (2024): €130 por la primera clase + €30 por cada clase adicional

Paso 4 — Período de oposición: 2 meses
Las terceras partes pueden oponerse al registro.

Paso 5 — Concesión:
Si no hay oposiciones o se resuelven a tu favor, la marca se registra.
Duración: 10 años, renovable indefinidamente.
```

**La marca de la Unión Europea (EUIPO):**
Una sola solicitud = protección en los 27 países de la UE.
Tasa: €850 (una clase) + €50 (segunda clase) + €150 (cada clase adicional).
Tramitación: 4-6 meses.

**¿España o UE?:**
Si tu negocio opera solo en España → marca española (más barata, más rápida).
Si tienes o prevés presencia en varios países de la UE → marca de la UE.
Ambas no son excluyentes — pero la marca UE te da cobertura continental más eficiente.

### 🔬 La patente: protege tu invención

**Qué protege una patente:**
Una invención técnica que resuelve un problema de forma novedosa.
Protege la solución técnica, no la idea.

**Qué NO se puede patentar en España/UE:**
- Descubrimientos científicos
- Algoritmos matemáticos (en abstracto)
- Software "per se" (aunque sí software con efecto técnico concreto)
- Métodos de negocio (en abstracto)

**Los requisitos para la patentabilidad:**
1. Novedad: no debe estar publicado o patentado en ningún lugar del mundo
2. Actividad inventiva: no debe ser obvio para un experto en la materia
3. Aplicación industrial: debe poder ser fabricado o utilizado

**El coste de la patente:**
España (OEPM): €750-1.500 (tasa de solicitud + examen) — protección solo en España, 20 años.
Europea (EPO): €3.000-5.000 solo en tasas + honorarios de agente de patentes (total: €5.000-15.000) para protección en los países europeos seleccionados.
Internacional (PCT): para expandir a EEUU, Asia y el resto — costes desde €10.000.

### 🎨 El diseño industrial: protege el aspecto de tu producto
El registro de diseño industrial como alternativa más rápida y barata que la patente para proteger la forma y apariencia de un producto o interfaz digital.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Propiedad industrial, registro de marca, OEPM, EUIPO, patentes, derecho mercantil',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de quejas y reclamaciones: el proceso que convierte una experiencia negativa en un cliente fiel',
                'description'       => 'Diseña el proceso de gestión de quejas y reclamaciones que resuelve los problemas del cliente de forma rápida, justa y empática, y que convierte la queja en una oportunidad de fidelización. Con el protocolo de respuesta, los niveles de compensación, la gestión de clientes difíciles y el análisis de las quejas recurrentes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience Director con experiencia transformando la gestión de quejas en empresas de ecommerce, SaaS y servicios donde la tasa de retención de clientes que habían presentado una queja pasó del 20% al 65%.

Contexto:
- Tipo de negocio: [ecommerce / SaaS / servicios profesionales / hostelería / otro]
- Canal principal de quejas: [email / teléfono / chat / RRSS / formulario / otro]
- Volumen de quejas: [N/mes]
- Tipo de queja más frecuente: [producto defectuoso / entrega tardía / facturación incorrecta / mal servicio / error del producto / otro]
- Estado actual: [sin proceso definido / proceso lento / el equipo no sabe cómo gestionar casos difíciles]

## Proceso de Gestión de Quejas — [Empresa]

### 🧠 El principio fundamental: la queja es un regalo

El cliente que se queja es el más valioso que tienes.
El 96% de los clientes insatisfechos no se quejan — simplemente no vuelven.
El 4% que se quejan te dan la oportunidad de retenerlos y aprender del problema.

**La investigación de Tarp Worldwide:**
Un cliente satisfecho cuenta su experiencia a 3 personas.
Un cliente insatisfecho la cuenta a 10.
Un cliente insatisfecho al que resolviste el problema bien → cuenta su experiencia positiva a 5 personas.

### 📋 El protocolo de respuesta a quejas (las primeras 2 horas son las que importan)

**El marco LEARN:**

```
L — Listen (escucha, no interrumpas):
"Cuéntame exactamente qué ha pasado."
El cliente necesita ser escuchado antes de ser resuelto.
No interrumpas, no defiendas, no expliques todavía.

E — Empathize (empatía real, no de plantilla):
"Entiendo perfectamente tu frustración — no debería haber pasado."
No: "Lamentamos los inconvenientes ocasionados" → suena a plantilla
Sí: "Esto es exactamente lo que esperabas, y ha fallado — te entiendo."

A — Apologize (pide disculpas, incluso si el error no es tuyo directamente):
"Te pido disculpas por lo que has vivido."
Si el error no es de tu empresa pero el cliente lo vive como tal → pide disculpas de todas formas.

R — Resolve (propón la solución):
"Esto es lo que voy a hacer para resolverlo: [solución concreta + plazo]."
La solución antes de la explicación. No expliques qué pasó antes de ofrecer la solución.

N — Notify (confirma y da seguimiento):
"Te confirmaré por email que [la solución] se ha realizado. ¿Hay algo más que pueda hacer?"
El seguimiento es la diferencia entre una queja gestionada y un cliente recuperado.
```

### 💰 Los niveles de compensación (y cuándo aplicar cada uno)

**El error de la compensación genérica:**
Un 10% de descuento para todos los problemas es injusto para el que tuvo un problema grave y excesivo para uno menor.

**La escala de compensación por impacto:**

```
NIVEL 1 — Error menor sin impacto económico para el cliente:
→ Disculpa + solución inmediata + nada más (no sobrecompenses)
→ Ejemplo: error de información en la web, tiempo de espera 5 min más de lo habitual

NIVEL 2 — Error que causó incomodidad pero no pérdida económica:
→ Disculpa + solución + gesto de buena voluntad (descuento próxima compra, acceso premium, envío gratis)
→ Ejemplo: entrega tardía sin consecuencias económicas para el cliente

NIVEL 3 — Error con impacto económico para el cliente:
→ Disculpa + solución + compensación económica (reembolso proporcional al daño)
→ Ejemplo: producto defectuoso, error de facturación, servicio no entregado

NIVEL 4 — Error grave con impacto significativo:
→ Disculpa + solución urgente + compensación generosa + revisión del proceso interno
→ Ejemplo: pérdida de datos del cliente, error que causó pérdida económica al negocio del cliente
```

### 📊 Cómo usar las quejas para mejorar el producto y el servicio
El proceso de análisis de quejas recurrentes que convierte la voz del cliente insatisfecho en prioridades del roadmap y del proceso operativo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión quejas, reclamaciones, customer recovery, LEARN, compensación cliente',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Escalar el negocio freelance sin contratar: los sistemas y la automatización que multiplican los ingresos',
                'description'       => 'Escala los ingresos de tu negocio freelance sin contratar a nadie ni trabajar más horas, usando sistemas, automatizaciones y modelos de negocio que apalancan tu expertise. Con el análisis de cómo usas tu tiempo, las automatizaciones de captación y gestión, y los modelos de ingresos que escalan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Systems Consultant especializado en freelancers y solopreneurs que han pasado de €3.000-5.000/mes a €8.000-15.000/mes sin aumentar las horas trabajadas ni contratar personal.

Perfil:
- Especialidad: [describe tu servicio]
- Ingresos actuales: [€/mes]
- Horas trabajadas/semana: [N horas]
- Distribución del tiempo: [% en trabajo cliente / % en ventas / % en admin / % en entrega]
- Mayor bloqueo para crecer: [no tengo más tiempo / no llega más gente / el dinero está limitado por las horas / otro]

## Sistema de Escalabilidad Freelance — [Tu Nombre]

### 🔍 El diagnóstico: cómo usas realmente el tiempo (y qué debes automatizar primero)

**Mapa de actividades de la semana:**
Para cada actividad que hiciste esta semana, clasifícala:
```
ZONA DE GENIO: Tareas que solo tú puedes hacer y que generan el mayor valor
(el trabajo creativo, estratégico, la relación con el cliente)

ZONA DE EXCELENCIA: Tareas que haces bien pero que otros también podrían hacer
(reportes, documentación, seguimiento, algunas reuniones)

ZONA DE COMPETENCIA: Tareas que haces bien pero que no te diferencian
(facturación, contabilidad, gestión de email, scheduling)

ZONA DE DEBILIDAD: Tareas que haces pero que no se te dan bien
(diseño si eres dev, código si eres diseñador, etc.)
```

**El objetivo:**
Pasar el máximo tiempo posible en la Zona de Genio.
Automatizar, sistematizar o externalizar todo lo demás.

### 🤖 Las automatizaciones que más tiempo liberan

**Automatización 1 — Captación y cualificación:**
```
Sistema actual: recibes un email de interés, respondes manualmente, coordinas una llamada...
Sistema automatizado:
→ Formulario de cualificación en la web (Typeform/Tally) con las preguntas clave
→ Si cumple el perfil: acceso automático al calendario (Calendly)
→ Si no cumple: respuesta automática con recursos útiles (no ignores a los leads no cualificados)
→ Herramienta: Make (ex-Integromat) o Zapier para conectar formulario + calendario + email
```

**Automatización 2 — Seguimiento de propuestas:**
```
Sistema actual: mandas la propuesta y a los 5 días recuerdas que debes hacer seguimiento...
Sistema automatizado:
→ Propuesta enviada por herramienta de propuestas (PandaDoc, Better Proposals, Notion)
→ Notificación cuando el cliente abre la propuesta
→ Secuencia de seguimiento automática si no hay respuesta en 3 días
```

**Automatización 3 — Onboarding de clientes:**
```
Sistema actual: cada cliente nuevo → tú mandas los accesos, los documentos, coordinas...
Sistema automatizado:
→ Portal de cliente (Notion, ClickUp, Client Portal)
→ Cuando se firma el contrato → se activa automáticamente el portal del cliente
→ Documentos de onboarding siempre disponibles (no mandas el mismo PDF 10 veces)
```

**Automatización 4 — Facturación y cobros:**
```
Sistema actual: facturas manuales, seguimiento manual de pagos...
Sistema automatizado:
→ Facturación automática en el día acordado (Holded, QuickBooks, Stripe Billing)
→ Recordatorio automático de pago (3 días antes + el día + 3 días después)
→ Los pagos se cobran automáticamente por domiciliación (si el cliente lo acepta)
```

### 💼 Los modelos de ingresos que escalan sin más horas

**Modelo 1 — El retainer mensual:**
En lugar de proyectos puntuales → ingresos fijos cada mes.
El freelance vende X horas/mes o X entregables/mes por un precio fijo.
Ventaja: previsibilidad, sin perseguir clientes nuevos cada mes.

**Modelo 2 — El producto digital:**
Template, curso, plantilla, guía, checklist.
Una vez creado → se vende repetidamente sin más tiempo de tu parte.
Ejemplo: una plantilla de €97 vendida 50 veces al mes = €4.850 sin horas adicionales.

**Modelo 3 — La formación o mentoría en grupo:**
En lugar de mentorías 1:1 → programa grupal con 10-20 personas.
El mismo tiempo → 10-20x el ingreso.

**Modelo 4 — La licencia o white label:**
Tu metodología, tu herramienta o tu proceso licenciado a otras empresas o freelancers.

### 📊 El dashboard de control del negocio freelance
Las 5 métricas mensuales que te dicen si el sistema está funcionando o dónde está el cuello de botella.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Escalar freelance, automatización negocios, sistemas freelance, ingresos pasivos, solopreneur',
                'vote_score'        => 49,
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
