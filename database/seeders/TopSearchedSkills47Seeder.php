<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills47Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'SEO de YouTube orgánico: cómo posicionar vídeos en YouTube y Google Search',
                'description'       => 'Domina el algoritmo de YouTube para posicionar tus vídeos tanto en la búsqueda interna de YouTube como en Google. Incluye investigación de palabras clave, optimización de metadatos, estructura de guiones para retención y las señales que el algoritmo recompensa con distribución orgánica masiva.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en YouTube SEO con experiencia posicionando canales en nichos competitivos como tecnología, finanzas personales y marketing digital. Has generado más de 10 millones de visitas orgánicas combinando optimización técnica, investigación de intención de búsqueda y producción de contenido que retiene a la audiencia durante más del 50% del vídeo.

Contexto:
- Canal / nicho: [describe el tema del canal y la audiencia objetivo]
- Estado actual: [nuevo canal / canal existente con X suscriptores y Y vídeos]
- Principales competidores en YouTube: [enumera 2-3 canales que ya posicionan bien]
- Objetivo de posicionamiento: [aumentar tráfico de búsqueda / llegar a X suscriptores / monetizar]

## Estrategia de YouTube SEO — [Nombre del canal]

### Fase 1: Investigación de palabras clave para YouTube

**Las 4 fuentes de keywords que más convierten en YouTube:**

```
FUENTE 1 — Autocompletado de YouTube
→ Escribe tu keyword raíz en la barra de búsqueda de YouTube
→ Anota todas las sugerencias (son las búsquedas reales de los usuarios)
→ Repite con variantes long-tail: "cómo [keyword]", "[keyword] para principiantes", "tutorial [keyword]"

FUENTE 2 — vidIQ / TubeBuddy
→ Instala la extensión gratuita de vidIQ
→ Cada keyword muestra: volumen de búsqueda, competencia (score 0-100), ratio oportunidad
→ Prioriza keywords con volumen >1.000/mes y competencia <50

FUENTE 3 — Google Keyword Planner
→ Las búsquedas de YouTube y Google se solapan en un 60-70% para tutoriales y "cómo hacer"
→ Filtra por idioma y región
→ Las keywords de Google con intención informacional suelen tener presencia de vídeos en la SERP

FUENTE 4 — Análisis de competidores
→ Entra en el canal competidor → Vídeos → Ordenar por "Más populares"
→ Los 10 vídeos más vistos revelan qué keywords genera retorno en tu nicho
→ Usa TubeBuddy para ver las tags de cualquier vídeo público
```

**Matriz de priorización de keywords:**

| Keyword | Búsquedas/mes | Competencia | Vídeos en Google | Prioridad |
|---------|--------------|-------------|-----------------|-----------|
| [keyword 1] | Ej: 5.000 | Baja | Sí | Alta |
| [keyword 2] | Ej: 12.000 | Media | Sí | Media |
| [keyword 3] | Ej: 2.000 | Muy baja | No | Alta (SEO YouTube) |

---

### Fase 2: Optimización de metadatos — el trío título-descripción-tags

**Fórmula de título que posiciona Y genera clics:**

```
[Palabra clave principal] + [beneficio o resultado concreto] + [elemento curiosidad/urgencia]

Ejemplos:
❌ "Cómo hacer SEO en YouTube"
✅ "SEO en YouTube 2025: cómo pasar de 0 a 10.000 visitas en 90 días (sin pagar publicidad)"

❌ "Tutorial de Excel avanzado"
✅ "5 fórmulas de Excel que el 95% de usuarios no conoce (y que te ahorran 3 horas al día)"

Reglas del título:
→ Entre 50-70 caracteres para que no se corte en mobile
→ La keyword principal en los primeros 30 caracteres
→ Números impares generan más CTR que números pares
→ Las palabras "cómo", "por qué", "error", "secreto" aumentan el CTR un 20-30%
```

**Estructura de descripción que rankea (mínimo 300 palabras):**

```
PÁRRAFO 1 (primeras 2-3 líneas, visibles sin expandir):
→ Incluye la keyword exacta en las primeras 25 palabras
→ Describe de qué trata el vídeo con el beneficio principal
→ Llama a la acción secundaria (suscribirse, ver playlist)

CUERPO DE LA DESCRIPCIÓN:
→ Timestamps con la keyword integrada en el texto
→ Recursos mencionados en el vídeo (links)
→ Keywords relacionadas de forma natural (no keyword stuffing)
→ Enlace a contenido relacionado del canal

CIERRE:
→ Call to action claro: suscripción, comentario, compartir
→ Links a redes sociales
→ Hashtags relevantes (3-5 máximo, al final)
```

**Tags: estrategia en capas:**
```
Capa 1 — Keyword exacta del título: "seo youtube", "posicionar vídeos youtube"
Capa 2 — Variantes long-tail: "seo youtube 2025", "cómo posicionar vídeos en youtube sin suscriptores"
Capa 3 — Keywords relacionadas del nicho: "algoritmo youtube", "youtube analytics", "monetización youtube"
Capa 4 — Marca personal: [nombre del canal], [nombre del presentador]
Total recomendado: 8-15 tags
```

---

### Fase 3: Señales de retención — lo que el algoritmo mide

**Las 5 métricas que determinan si YouTube distribuye tu vídeo:**

```
1. CTR (Click-Through Rate): objetivo >5% desde los resultados de búsqueda
   → Si tu CTR es bajo, el problema es el título o la miniatura
   → A/B test de miniaturas con YouTube Studio

2. Watch Time Percentage: objetivo >50% de la duración total
   → Vídeos de 8-12 minutos con 50% de retención = mejor señal que vídeo de 20 min con 30%

3. Average View Duration: cuántos minutos ven de media
   → El algoritmo favorece canales donde la audiencia pasa más tiempo total

4. Velocidad de las primeras 48 horas: vistas, likes, comentarios en el lanzamiento
   → Notifica a tu lista de correo y comunidades el día del lanzamiento

5. Ratio de interacción: likes/vistas objetivo >4-6%
   → Pide el like en el momento de mayor valor del vídeo, no al principio
```

**Estructura de guión para maximizar la retención:**

```
[00:00-00:30] Hook: la promesa más importante del vídeo + la mayor promesa de resultado
[00:30-01:30] Establecer el problema y por qué importa ahora
[01:30-03:00] Preview: "En este vídeo vas a aprender X, Y, Z" (el índice crea expectativa)
[03:00-XX:XX] Contenido principal dividido en bloques de 2-3 minutos con transiciones
[Cada bloque] Empieza con "Lo segundo más importante es..." para reducir cierres anticipados
[Penúltimo minuto] El insight más valioso o sorprendente del vídeo
[Último minuto] CTA + vídeo recomendado con tarjeta
```

---

### Fase 4: Miniatura y branding visual

**Los 3 elementos de una miniatura que genera alto CTR:**
```
ELEMENTO 1 — Cara con emoción: sorpresa, incredulidad o entusiasmo genuino
  → Las miniaturas con cara humana generan hasta 38% más CTR
  → La emoción debe ser coherente con el tono del vídeo

ELEMENTO 2 — Texto en miniatura: máximo 5-6 palabras, mínimo 50pt de fuente
  → El texto debe complementar el título, no repetirlo
  → Colores de alto contraste: fondo oscuro / texto claro o viceversa
  → Evita amarillo sobre blanco o rojo sobre azul oscuro

ELEMENTO 3 — Coherencia de marca: plantilla reconocible en todo el canal
  → Mismo estilo → el suscriptor reconoce tus vídeos antes de leer el título
  → Herramientas: Canva Pro, Adobe Express, Photoshop
```

---

### Plan de lanzamiento de 30 días

**Semana 1-2:**
- Publica 1 vídeo de "pillar content" con keyword de alto volumen (>5.000 búsquedas)
- Comparte en todas las comunidades relevantes (Reddit, Facebook Groups, LinkedIn)
- Responde todos los comentarios en las primeras 24 horas

**Semana 3-4:**
- Publica 1 vídeo de "cluster" long-tail relacionado con el pillar
- Añade cards y end screens enlazando entre los dos vídeos
- Analiza el retention graph para identificar el momento exacto de abandono y corregirlo

**KPIs a revisar cada semana:**
- CTR desde búsqueda (objetivo: >5%)
- Porcentaje de retención media (objetivo: >50%)
- Fuentes de tráfico: qué % viene de búsqueda vs. sugeridos vs. externo
- Suscriptores ganados por vídeo (objetivo: >1% de vistas totales)
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Posicionar vídeos de YouTube en búsqueda orgánica y Google',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Autenticación y autorización segura: OAuth2, JWT y RBAC sin fallos de seguridad',
                'description'       => 'Implementa autenticación y autorización robusta con OAuth2, JWT y control de acceso basado en roles (RBAC) evitando los errores de seguridad más comunes: tokens mal validados, CSRF, session fixation y privilege escalation. Incluye código de ejemplo, checklist de auditoría y patrones de implementación para Node.js, Python y PHP.',
                'prompt_content'    => <<<'PROMPT'
Eres un ingeniero de seguridad especializado en identidad y control de acceso, con experiencia auditando sistemas de autenticación en aplicaciones SaaS B2B y fintech. Has encontrado y corregido vulnerabilidades críticas en implementaciones de JWT y OAuth2 que parecían correctas pero tenían fallos sutiles que permitían escalada de privilegios o robo de sesión.

Contexto:
- Stack tecnológico: [Node.js/Express / Django / Laravel / Spring Boot / otro]
- Tipo de aplicación: [SPA con backend API / aplicación server-side / microservicios]
- Requisitos de autenticación: [usuario/contraseña / OAuth social / SSO empresarial / MFA]
- Requisitos de autorización: [roles simples / RBAC granular / ABAC / multi-tenant]

## Sistema de Autenticación y Autorización Segura

### Módulo 1: JWT — los 8 errores que crean vulnerabilidades críticas

**Error 1: Algoritmo "none" y validación débil**
```javascript
// ❌ VULNERABLE: no valida el algoritmo
const payload = jwt.decode(token); // solo decodifica, no verifica

// ❌ VULNERABLE: acepta cualquier algoritmo que declare el token
jwt.verify(token, secret);

// ✅ CORRECTO: especifica el algoritmo explícitamente
const payload = jwt.verify(token, process.env.JWT_SECRET, {
  algorithms: ['HS256'], // lista blanca de algoritmos permitidos
  issuer: 'tu-app.com',
  audience: 'api.tu-app.com',
});
```

**Error 2: Secretos débiles o hardcodeados**
```bash
# ❌ VULNERABLE
JWT_SECRET=mysecret123

# ✅ CORRECTO: secreto de 256 bits mínimo, rotación programada
node -e "console.log(require('crypto').randomBytes(64).toString('hex'))"
# Guarda en variables de entorno, nunca en el código fuente
```

**Error 3: Claims insuficientes — el token sin contexto**
```javascript
// ❌ INSUFICIENTE: payload mínimo que dificulta auditoría y revocación
{ sub: userId }

// ✅ COMPLETO: claims estándar + claims de aplicación
{
  sub: userId,           // subject: ID único del usuario
  iss: 'tu-app.com',    // issuer
  aud: 'api.tu-app.com',// audience
  iat: Math.floor(Date.now() / 1000),     // issued at
  exp: Math.floor(Date.now() / 1000) + 900, // expiry: 15 minutos
  jti: crypto.randomUUID(),               // JWT ID único (permite revocación)
  roles: ['user'],                        // roles actuales
  sessionId: sessionId,                   // vincula al registro de sesión
}
```

**Error 4: Tokens de larga duración sin refresh token**
```
PATRÓN CORRECTO DE DOBLE TOKEN:
Access Token:  15 minutos de expiración, en memoria (no localStorage)
Refresh Token: 7-30 días, httpOnly cookie, rotación en cada uso

Flujo:
1. Login → devuelve access token (en body) + refresh token (httpOnly cookie)
2. Request API → Authorization: Bearer <access_token>
3. 401 Unauthorized → cliente llama /auth/refresh con la cookie
4. Servidor valida refresh token, lo invalida, emite par nuevo
5. Logout → invalida el refresh token en base de datos
```

---

### Módulo 2: OAuth2 — flujos correctos por caso de uso

**Matriz de flujos OAuth2:**

| Caso de uso | Flujo correcto | Flujo incorrecto |
|-------------|---------------|-----------------|
| SPA / mobile app | Authorization Code + PKCE | Implicit (obsoleto) |
| Server-to-server | Client Credentials | Authorization Code |
| Aplicación web server-side | Authorization Code | Password Grant |
| Acceso en nombre del usuario | Authorization Code + PKCE | Password Grant |

**Implementación de Authorization Code + PKCE:**
```javascript
// 1. Generar code_verifier y code_challenge
const codeVerifier = crypto.randomBytes(64).toString('base64url');
const codeChallenge = crypto
  .createHash('sha256')
  .update(codeVerifier)
  .digest('base64url');

// 2. Guardar state y code_verifier en sesión del servidor (no en el cliente)
req.session.oauthState = crypto.randomUUID();
req.session.codeVerifier = codeVerifier;

// 3. URL de autorización
const authUrl = `https://provider.com/oauth/authorize?
  response_type=code&
  client_id=${CLIENT_ID}&
  redirect_uri=${encodeURIComponent(REDIRECT_URI)}&
  scope=openid+profile+email&
  state=${req.session.oauthState}&
  code_challenge=${codeChallenge}&
  code_challenge_method=S256`;

// 4. Callback: validar state ANTES de usar el code
if (req.query.state !== req.session.oauthState) {
  throw new Error('State mismatch: posible ataque CSRF');
}

// 5. Intercambiar code por tokens
const tokens = await exchangeCodeForTokens(req.query.code, req.session.codeVerifier);
```

---

### Módulo 3: RBAC — diseño que escala sin convertirse en caos

**Modelo de datos RBAC recomendado:**
```sql
-- Tablas fundamentales
CREATE TABLE roles (
  id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
  name VARCHAR(50) UNIQUE NOT NULL,  -- 'admin', 'editor', 'viewer'
  description TEXT
);

CREATE TABLE permissions (
  id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
  resource VARCHAR(100) NOT NULL,    -- 'articles', 'users', 'billing'
  action VARCHAR(50) NOT NULL,       -- 'create', 'read', 'update', 'delete'
  UNIQUE(resource, action)
);

CREATE TABLE role_permissions (
  role_id UUID REFERENCES roles(id) ON DELETE CASCADE,
  permission_id UUID REFERENCES permissions(id) ON DELETE CASCADE,
  PRIMARY KEY (role_id, permission_id)
);

CREATE TABLE user_roles (
  user_id UUID REFERENCES users(id) ON DELETE CASCADE,
  role_id UUID REFERENCES roles(id) ON DELETE CASCADE,
  granted_by UUID REFERENCES users(id),
  granted_at TIMESTAMPTZ DEFAULT NOW(),
  PRIMARY KEY (user_id, role_id)
);
```

**Middleware de autorización:**
```javascript
// Guard reutilizable para cualquier ruta
const authorize = (resource, action) => async (req, res, next) => {
  const userPermissions = await getUserPermissions(req.user.id);
  const hasPermission = userPermissions.some(
    p => p.resource === resource && p.action === action
  );
  if (!hasPermission) {
    return res.status(403).json({ error: 'Acceso denegado' });
  }
  next();
};

// Uso en rutas
router.post('/articles', authorize('articles', 'create'), createArticle);
router.delete('/articles/:id', authorize('articles', 'delete'), deleteArticle);
```

---

### Checklist de seguridad — auditoría antes de desplegar

**Autenticación:**
- [ ] Contraseñas hasheadas con bcrypt (cost ≥12) o Argon2id
- [ ] Rate limiting en endpoints de login (máx. 5 intentos / 15 min / IP)
- [ ] Bloqueo de cuenta temporal tras intentos fallidos
- [ ] MFA disponible (TOTP con librería auditada: speakeasy, pyotp)
- [ ] Tokens JWT con expiración corta y algoritmo explícito en whitelist

**Sesiones:**
- [ ] Session ID regenerado tras login (previene session fixation)
- [ ] Cookies con flags: Secure, HttpOnly, SameSite=Strict
- [ ] Logout invalida el token en servidor (lista negra o revocación en DB)

**Autorización:**
- [ ] Verificación de autorización en el servidor, nunca solo en el cliente
- [ ] IDOR protegido: validar que el recurso pertenece al usuario autenticado
- [ ] Logs de auditoría para acciones privilegiadas con user_id, IP, timestamp

**Tokens y secretos:**
- [ ] Secretos en variables de entorno (nunca en código ni en logs)
- [ ] Rotación programada de secretos JWT y client_secrets OAuth
- [ ] Escaneo de secrets en CI/CD (truffleHog, gitleaks)
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Implementar autenticación y autorización segura en aplicaciones web',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Motion design para UX: animaciones de interfaz que mejoran la usabilidad sin distraer',
                'description'       => 'Aplica los principios del motion design para crear animaciones de interfaz que orientan al usuario, comunican cambios de estado y reducen la carga cognitiva. Incluye los 12 principios de animación adaptados a UI, los valores de duración y easing por contexto, y el flujo de trabajo para entregar animaciones a desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX motion designer con experiencia en productos digitales de alta conversión donde cada animación tiene una justificación funcional: no decoración, sino comunicación. Has diseñado sistemas de motion para aplicaciones móviles y webs donde la animación reduce la confusión del usuario, refuerza la jerarquía visual y hace que las transiciones complejas sean comprensibles de un vistazo.

Contexto:
- Tipo de producto: [aplicación móvil iOS/Android / web app / landing page / dashboard]
- Estado actual de las animaciones: [sin animaciones / animaciones inconsistentes / quiero crear un sistema]
- Stack de desarrollo del equipo: [React / Vue / Flutter / Swift / otro]
- Principal problema de UX a resolver con motion: [orientación tras carga / feedback de acciones / transiciones entre pantallas / estados vacíos y de carga]

## Sistema de Motion Design para UX — [Nombre del producto]

### Principio fundamental: la animación funcional vs. decorativa

```
ANIMACIÓN FUNCIONAL (siempre justificada):
✅ Indica dónde aparece un nuevo elemento (orienta la atención)
✅ Muestra la relación entre pantallas (jerarquía espacial)
✅ Confirma que una acción tuvo efecto (feedback)
✅ Comunica el estado del sistema (loading, error, éxito)
✅ Guía el flujo de onboarding paso a paso

ANIMACIÓN DECORATIVA (eliminar o reducir):
❌ Animación por estética sin propósito funcional
❌ Loops continuos que distraen de la tarea principal
❌ Transiciones largas que ralentizan la interacción percibida
❌ Efectos llamativos en elementos de uso frecuente
```

---

### Los 12 principios de animación adaptados a UI

**Principios de rendimiento temporal:**

| Principio | Definición UI | Aplicación práctica |
|-----------|--------------|-------------------|
| Timing | Duración correcta según complejidad | Micro: 100-200ms / Macro: 300-500ms |
| Ease In/Out | Aceleración natural | Objetos que aparecen: ease-out / que desaparecen: ease-in |
| Anticipation | Pequeño movimiento previo a la acción | Botón que "respira" antes de expandirse |
| Follow Through | El elemento no para en seco | Un modal que se asienta ligeramente al aparecer |

**Principios de relación espacial:**
```
RELACIÓN PADRE-HIJO:
→ Cuando un elemento "nace" de otro, la animación refuerza ese origen
→ Ejemplo: un modal que se expande desde el botón que lo triggerea
→ Técnica: transform-origin en el punto de origen del trigger

CONTINUIDAD ESPACIAL:
→ Las pantallas que se relacionan jerárquicamente se mueven en el mismo eje
→ Abrir detalles → slide de derecha a izquierda (profundidad)
→ Volver atrás → slide de izquierda a derecha (emergencia)
→ Menú lateral → slide horizontal desde el borde
```

---

### Valores de referencia por tipo de animación

**Tabla de duraciones recomendadas:**

| Tipo de animación | Duración | Easing recomendado |
|-------------------|----------|-------------------|
| Feedback micro (tap, hover) | 80-120ms | ease-out |
| Aparecer / desaparecer elemento | 150-200ms | ease-out / ease-in |
| Transición entre pantallas | 250-350ms | ease-in-out |
| Modal / bottom sheet | 300-400ms | cubic-bezier(0.16, 1, 0.3, 1) |
| Carga de datos (skeleton) | Loop 1.5s | linear |
| Celebración / logro | 600-800ms | spring |
| Toast / snackbar | Aparece 200ms, espera, desaparece 150ms | ease-out / ease-in |

**Curvas de easing por contexto:**
```css
/* Elementos que entran (ease-out: rápido al principio, suave al final) */
--ease-out-standard: cubic-bezier(0, 0, 0.2, 1);

/* Elementos que salen (ease-in: suave al principio, rápido al final) */
--ease-in-standard: cubic-bezier(0.4, 0, 1, 1);

/* Transiciones de estado (ease-in-out: simétrico) */
--ease-in-out-standard: cubic-bezier(0.4, 0, 0.2, 1);

/* Elementos "vivos" con rebote leve (spring) */
--ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);

/* Material Design 3 — Emphasized */
--ease-emphasized: cubic-bezier(0.2, 0, 0, 1);
```

---

### Patrones de motion más comunes en UI

**Patrón 1: Skeleton Loading → Contenido**
```css
@keyframes skeleton-pulse {
  0% { background-position: -200% 0; }
  100% { background-position: 200% 0; }
}

.skeleton {
  background: linear-gradient(90deg,
    var(--surface-2) 25%,
    var(--surface-3) 50%,
    var(--surface-2) 75%
  );
  background-size: 200% 100%;
  animation: skeleton-pulse 1.5s ease infinite;
}

/* Transición al contenido real: fade-in con ligero desplazamiento */
.content-loaded {
  animation: fadeInUp 200ms ease-out forwards;
}
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(8px); }
  to   { opacity: 1; transform: translateY(0); }
}
```

**Patrón 2: Confirmación de acción (botón → estado de carga → éxito)**
```
Estado 1 (idle):    [  Guardar cambios  ]
Estado 2 (loading): [  ⟳ Guardando...  ]  — spinner 200ms ease-out
Estado 3 (success): [  ✓ Guardado       ]  — check 150ms spring, mantiene 1.5s
Estado 4 (idle):    [  Guardar cambios  ]  — fade out y regreso suave

Regla: nunca desaparezcas el botón durante el proceso → el usuario pierde el contexto
```

**Patrón 3: Staggered list animation (listas que aparecen progresivamente)**
```javascript
// Cada elemento de la lista aparece con un delay escalonado
items.forEach((item, index) => {
  item.style.animationDelay = `${index * 40}ms`; // 40ms entre cada elemento
  item.classList.add('animate-in');
});

// CSS
.animate-in {
  animation: fadeInUp 200ms ease-out both;
}
// Máximo 8-10 elementos con stagger — más de 10 el efecto pierde impacto
```

---

### Flujo de trabajo: de Figma a desarrollo

**Paso 1: Documentar la animación en Figma**
```
Usa Figma Smart Animate entre variants para mostrar la transición
Añade una nota de especificación con:
  - Duración: 300ms
  - Easing: ease-out (cubic-bezier(0, 0, 0.2, 1))
  - Propiedad: transform + opacity
  - Trigger: al aparecer el componente en viewport
```

**Paso 2: Handoff al equipo de desarrollo**
```
Entrega un documento de "Motion Tokens" con:
  - Tabla de duraciones por categoría
  - Variables CSS de easing
  - Descripción textual de cada animación: qué se mueve, cómo y cuándo
  - Vídeo de referencia (grabado desde Figma o prototype)
  - Nota de accesibilidad: la animación debe desactivarse con prefers-reduced-motion
```

**Paso 3: Accesibilidad — siempre obligatorio**
```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}
```

---

### Checklist de revisión antes de entregar animaciones

- [ ] Cada animación tiene una justificación funcional documentada
- [ ] Las duraciones siguen la tabla de referencia del sistema
- [ ] Existe versión con prefers-reduced-motion activado
- [ ] El timing no supera los 400ms en flujos de alta frecuencia de uso
- [ ] Las animaciones de loading no son loops infinitos sin salida
- [ ] Los estados de éxito/error son claramente distinguibles por movimiento y color
- [ ] Se ha probado en dispositivos de gama baja (30fps mínimo)
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar animaciones de interfaz funcionales y accesibles',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Demo de producto que convierte: estructura y técnicas para cerrar en la llamada',
                'description'       => 'Diseña y ejecuta demostraciones de producto que convierten prospectos en clientes. Incluye la estructura en 5 actos, la preparación pre-demo, las técnicas para manejar objeciones en tiempo real y los errores que convierten una buena demo en una reunión sin cierre.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de ventas con más de 10 años de experiencia liderando equipos de demo en empresas SaaS B2B con ciclos de venta de 30 a 180 días. Has entrenado a más de 50 Account Executives en la metodología de demo consultiva que convierte el 35-45% de las demos en oportunidades avanzadas, frente al 15-20% de la demo de catálogo.

Contexto:
- Tipo de producto: [SaaS / software on-premise / servicio con componente tecnológico]
- Público objetivo de la demo: [CEO / CTO / Director de operaciones / equipo de compras]
- Duración habitual de la demo: [30 / 45 / 60 minutos]
- Fase del ciclo de venta: [primera demo de discovery / demo técnica / demo de cierre / demo para comité]
- Principal objeción que aparece en las demos: [precio / complejidad de implementación / integración con el stack actual]

## Metodología de Demo que Convierte — [Nombre del producto]

### Los 5 actos de la demo consultiva

**Acto 1: Reencuadre de expectativas (3-5 minutos)**

La mayoría de los vendedores empiezan haciendo click en el software. Error. El prospecto necesita entender POR QUÉ vale su tiempo.

```
APERTURA DE DEMO:
"Antes de entrar en el producto, quiero hacer 2 cosas: primero,
asegurarme de que lo que voy a mostrarte es relevante para lo que
tu equipo está viviendo ahora mismo, y segundo, dejar tiempo al
final para tus preguntas. ¿Te parece bien si te hago 3 preguntas
rápidas para personalizar la demo?"

→ Esto establece que TÚ llevas la reunión
→ El prospecto sabe que habrá tiempo para sus preguntas (baja la guardia)
→ Las preguntas que haces a continuación son el discovery real
```

**Preguntas de discovery mini en la apertura:**
```
1. "¿Cuál es el problema más urgente que queréis resolver con esta herramienta?"
2. "¿Qué solución estáis usando ahora mismo para gestionar esto?"
3. "¿Qué haría que la demo de hoy fuera un éxito para ti?"

→ La respuesta a la pregunta 3 es el cierre de la demo: vuelve a ella al final
→ Las respuestas te dan el "caso de uso protagonista" de la demo
```

---

**Acto 2: El antes (el dolor en su contexto) — 5 minutos**

```
ANTES DE MOSTRAR EL PRODUCTO:
Describe la situación actual del cliente CON SUS PROPIAS PALABRAS.
Usa lo que dijeron en el discovery (o en el formulario de calificación).

"Si entiendo bien vuestra situación, hoy estáis gestionando X con [herramienta actual],
lo que significa que [consecuencia del dolor 1] y [consecuencia del dolor 2].
¿Es así como lo veis vosotros?"

→ El cliente dice "sí" → has creado alineación emocional antes de abrir el software
→ El cliente corrige → obtienes información más valiosa antes de la demo
```

**El mapa de dolor — antes de la demo:**
| Dolor mencionado | Consecuencia de negocio | Módulo del producto que lo resuelve |
|-----------------|------------------------|-------------------------------------|
| [Dolor 1] | [Horas perdidas / dinero / riesgo] | [Módulo X] |
| [Dolor 2] | [Impacto en el equipo] | [Módulo Y] |

---

**Acto 3: La demo (el viaje del héroe del cliente) — 20-30 minutos**

**La regla del protagonista:**
```
El protagonista de la demo NO es el producto.
El protagonista es el CLIENTE y su historia.

Estructura narrativa:
"Imagina que eres [nombre del usuario tipo del cliente].
Son las 9 de la mañana del lunes y tienes que [tarea que hoy es dolorosa].
Con [nombre del producto], esto es lo que pasa..."

→ Presentas la funcionalidad en el contexto del flujo de trabajo del cliente
→ Usas datos ficticios que parecen reales y relevantes para su sector
→ Cada módulo que muestras resuelve un dolor que ellos mencionaron
```

**Regla del 70/30:**
```
70% del tiempo de la demo: los 2-3 flujos que resuelven los dolores principales
30% del tiempo: el resto de funcionalidades en modo "aquí también podéis..."

El error más común: mostrar TODO el producto por miedo a que el cliente piense
que no es completo. El efecto es el contrario: confusión y sensación de complejidad.
```

**Técnica del "Stop and Check":**
```
Cada 5-7 minutos de demo, para y pregunta:
"¿Esto responde a lo que me comentabas de [su dolor específico]?"
"¿Cómo estaría usando esto tu equipo de [departamento]?"

→ Mantiene la atención
→ Genera microcompromisos ("sí, esto tiene sentido")
→ Te avisa si la demo está siendo relevante o no
```

---

**Acto 4: El después — 5 minutos**

```
ANTES DEL CIERRE, DIBUJA EL FUTURO:
"Pensando en tu equipo, si tuviérais esto funcionando en 30 días,
¿qué cambia para vosotros?"

→ Haces que el cliente visualice el uso real del producto
→ Identificas los criterios de éxito del cliente (usarlos en la propuesta)
→ Si el cliente tiene dificultad para responder → queda trabajo de discovery

Refuerza con un caso de éxito de un cliente similar:
"Un cliente vuestro que tiene [característica similar] ha conseguido [resultado concreto]
en [plazo]. ¿Queréis que os ponga en contacto con ellos?"
```

---

**Acto 5: El cierre de la demo — 5 minutos**

```
VUELVE A LA PREGUNTA 3 DEL INICIO:
"Al principio me dijiste que el éxito de esta demo para ti sería [respuesta].
Habiendo visto lo que has visto, ¿hemos llegado ahí?"

Si dice SÍ: "¿Cuáles son los próximos pasos naturales desde vuestra perspectiva?"
Si dice PARCIALMENTE: "¿Qué parte te genera todavía dudas?"
Si dice NO: "¿Qué tendría que ser diferente para que tuviese sentido seguir explorando esto?"

NUNCA termines la demo sin definir el siguiente paso con fecha concreta:
"¿Tiene sentido que el jueves que viene hagamos una demo técnica con vuestro CTO?
¿Qué horario le va mejor?"
```

---

### Manejo de las 5 objeciones más comunes en demo

| Objeción | Respuesta equivocada | Respuesta efectiva |
|----------|---------------------|-------------------|
| "Es demasiado caro" | Defender el precio | "¿Comparado con qué alternativa?" → cuantifica el coste del problema |
| "Lo tenemos que pensar" | "Claro, sin problema" | "¿Qué información os falta para poder decidir?" |
| "¿Y si se integra con [herramienta]?" | Mostrar la integración en directo sin preparación | "Déjame confirmarlo con el equipo técnico — ¿si la integración está confirmada, eso desbloquea la decisión?" |
| "Necesitamos aprobación del CEO" | Enviar propuesta al interlocutor actual | "¿Qué necesita el CEO para decir sí? ¿Tendría sentido una demo de 15 minutos con él?" |
| "Ahora no es el momento" | Desaparecer | "Entendido, ¿cuándo sería un buen momento? ¿Agosto o septiembre?" |

---

### Preparación pre-demo: los 30 minutos que marcan la diferencia

```
CHECKLIST PRE-DEMO (30 min antes):
□ Lee las últimas 3 interacciones del CRM con este prospecto
□ Busca en LinkedIn: cargo, tiempo en la empresa, posts recientes
□ Revisa la web de la empresa: tamaño, noticias recientes, competidores
□ Prepara los datos ficticios de la demo con el nombre de su empresa y su sector
□ Define los 2-3 módulos protagonistas según los dolores conocidos
□ Confirma que el entorno de demo funciona (¡no durante la llamada!)
□ Ten preparado un caso de éxito de un cliente del mismo sector
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estructurar y ejecutar demos de producto que convierten prospectos en clientes',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'OKRs para equipos de producto: objetivos que alinean sin microgestionar',
                'description'       => 'Define e implementa OKRs en tu equipo de producto que conectan la visión del negocio con el trabajo diario, sin convertirse en una lista de tareas glorificada. Incluye las fórmulas para redactar buenos objetivos y key results, el calendario de check-ins y los errores más frecuentes que convierten los OKRs en burocracia.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia implementando OKRs en equipos de producto de empresas en etapa Series A y Series B, donde el desafío no es el framework sino conseguir que los OKRs sean algo vivo que guíe decisiones reales, no un ejercicio de planificación trimestral que se archiva al día siguiente.

Contexto:
- Tamaño del equipo de producto: [número de PMs, diseñadores y desarrolladores]
- Etapa de la empresa: [early stage / growth / scale]
- Estado actual de la planificación: [sin OKRs / OKRs que no se usan / primer intento de implementación]
- Cadencia de planificación actual: [trimestral / anual / ninguna]
- Principal problema con los OKRs (si ya los usas): [son tareas disfrazadas / nadie los mira / no están alineados con el negocio]

## OKRs para Equipos de Producto — [Nombre del equipo/empresa]

### El test de los 3 errores más comunes

**Error 1: El key result que es una tarea**
```
❌ KR: "Lanzar la nueva funcionalidad de exportación de datos"
   → Esto es un output, no un outcome. Se puede completar y no mover ningún negocio.

✅ KR: "Aumentar el número de usuarios que exportan datos semanalmente de 200 a 500"
   → Esto es un outcome medible que indica que la funcionalidad aporta valor real.
```

**Error 2: El objetivo sin ambición**
```
❌ O: "Mejorar la experiencia de onboarding"
   → Vago, no inspira, no indica qué nivel de mejora basta.

✅ O: "Hacer que los nuevos usuarios alcancen su primer momento de valor en menos de 10 minutos"
   → Específico, inspira, define qué significa "mejor" para el equipo.
```

**Error 3: Demasiados OKRs**
```
La regla: máximo 3 objetivos por equipo por trimestre, con 2-4 key results cada uno.
Más de eso y los OKRs dejan de guiar decisiones: todo parece igualmente prioritario.

Si tienes más de 3 objetivos, pregunta:
"Si solo pudiéramos conseguir UNO de estos objetivos este trimestre, ¿cuál elegiríamos?"
→ Ese es el verdadero Objective 1.
```

---

### Fórmula para redactar buenos OKRs

**Fórmula del Objetivo:**
```
[Verbo de acción ambicioso] + [área de impacto] + [para quién] + [nivel de aspiración]

Ejemplos:
"Convertirnos en el producto más recomendado por los nuevos usuarios de nuestro segmento"
"Eliminar la fricción que impide que los equipos de ventas adopten el CRM en los primeros 30 días"
"Establecer la base técnica que nos permita escalar a 10x usuarios sin degradación de rendimiento"

Test del buen objetivo:
□ ¿Inspira al equipo? (si da igual conseguirlo, no es suficientemente ambicioso)
□ ¿Es cualitativo? (los números van en los KRs, no en el objetivo)
□ ¿Podría el equipo tomar decisiones basándose en este objetivo? (si no, es demasiado vago)
```

**Fórmula del Key Result:**
```
[Métrica actual] → [métrica objetivo] para [fecha o fin de trimestre]

Plantilla: "Aumentar/Reducir [métrica] de [valor actual] a [valor objetivo]"

Ejemplos:
"Aumentar la tasa de activación de usuarios en los primeros 7 días de 22% a 40%"
"Reducir el tiempo medio de onboarding de 45 a 15 minutos"
"Aumentar el NPS del segmento enterprise de 32 a 50"

Test del buen Key Result (SMART adaptado):
□ ¿Tiene una métrica clara y medible sin ambigüedad?
□ ¿El equipo puede influir directamente sobre ella?
□ ¿Tiene fecha de medición definida?
□ ¿Es un outcome (resultado) y no un output (tarea o entregable)?
□ ¿Alcanzarlo al 70% ya sería un éxito notable? (el 100% demasiado fácil = mal KR)
```

---

### Plantilla de OKRs trimestrales para equipo de producto

**Plantilla de documento:**
```markdown
## OKRs Q[X] — Equipo de Producto — [Empresa]
Periodo: [fecha inicio] → [fecha fin]
Última actualización: [fecha]

---

### O1: [Objetivo 1]
*Tema estratégico: [Retención / Adquisición / Monetización / Infraestructura]*

| Key Result | Baseline | Target | Progreso semana X | Confianza |
|-----------|---------|--------|------------------|-----------|
| KR1.1: Aumentar [métrica] de X a Y | X | Y | Z | 🟢 Alta |
| KR1.2: Reducir [métrica] de X a Y | X | Y | Z | 🟡 Media |
| KR1.3: Aumentar [métrica] de X a Y | X | Y | Z | 🔴 En riesgo |

Iniciativas en curso que contribuyen:
- [Iniciativa A]: impacta KR1.1, KR1.2
- [Iniciativa B]: impacta KR1.1

---

### O2: [Objetivo 2]
...
```

---

### El calendario de OKRs que los mantiene vivos

**Ciclo trimestral:**

| Semana | Actividad | Participantes | Duración |
|--------|-----------|--------------|----------|
| -3 (antes del trimestre) | Workshop de definición de OKRs | PM + líder de diseño + tech lead | 2 horas |
| -1 | Revisión y alineación con dirección | PM + CPO/CEO | 45 min |
| Semana 1 | Kickoff del trimestre: presentar OKRs al equipo completo | Todo el equipo | 30 min |
| Cada semana | Check-in breve de progreso en la reunión de equipo | Todo el equipo | 10 min |
| Mes 1 (semana 4) | Revisión de mitad de mes: ¿necesitamos replanificar? | PM + stakeholders | 30 min |
| Semana 6 | Mid-quarter review formal | PM + dirección | 45 min |
| Semana 12 | OKR retrospective: scoring + aprendizajes | PM + equipo | 1 hora |

**El check-in semanal en 3 preguntas:**
```
1. ¿Dónde está el progreso de cada KR? (semáforo: verde/amarillo/rojo)
2. ¿Qué nos está bloqueando o poniendo un KR en riesgo?
3. ¿Alguna iniciativa debe cambiar de prioridad basándonos en los datos?
```

---

### Cómo conectar OKRs de empresa con OKRs de equipo

**El árbol de OKRs:**
```
Nivel 1 — Empresa:
O: Duplicar el ARR en 12 meses
  KR1: Aumentar nuevos clientes enterprise de 20 a 40
  KR2: Reducir churn en segmento SMB de 8% a 4%

Nivel 2 — Equipo de Producto (contribuye al KR2):
O: Eliminar la fricción en los primeros 30 días que provoca el 60% del churn
  KR1: Aumentar la tasa de completado del onboarding de 35% a 70%
  KR2: Reducir el tiempo hasta primer valor de 4 días a 1 día
  KR3: Aumentar el engagement de la semana 2 de 40% a 65%

→ Cada OKR de equipo debe tener una línea clara hasta al menos un OKR de empresa
→ Si no encuentras la conexión, pregunta si el objetivo merece estar en el trimestre
```

---

### Scoring al final del trimestre

```
Sistema de scoring de Google (0.0 — 1.0):
0.0 — 0.3: No progresamos significativamente
0.4 — 0.6: Progresamos pero no alcanzamos el objetivo
0.7 — 1.0: Éxito (0.7 es el "stretch goal" ideal)

Interpretación:
Score 1.0 consistente → los OKRs no son suficientemente ambiciosos
Score < 0.3 consistente → los OKRs no están controlando bien el trabajo o son inalcanzables

En la retrospectiva:
□ ¿Qué aprendimos de los KRs que no alcanzamos?
□ ¿Las iniciativas que ejecutamos eran las correctas para mover los KRs?
□ ¿Algo del entorno cambió y necesitamos replantear el próximo trimestre?
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Definir e implementar OKRs en equipos de producto que guían decisiones reales',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Reclutamiento técnico sin ser técnico: cómo evaluar candidatos de ingeniería y diseño desde RRHH',
                'description'       => 'Aprende a evaluar candidatos de perfiles técnicos (desarrolladores, diseñadores, data scientists) sin necesitar conocimientos técnicos profundos. Incluye las preguntas de entrevista que revelan el nivel real, cómo interpretar los resultados de las pruebas técnicas con ayuda del hiring manager y los sesgos que debes evitar.',
                'prompt_content'    => <<<'PROMPT'
Eres una Business Partner de RRHH con 8 años de experiencia reclutando perfiles técnicos en empresas de tecnología donde el departamento de People es pequeño y los hiring managers no tienen tiempo para hacer todo el proceso solos. Has desarrollado un sistema de evaluación de candidatos técnicos que te permite hacer cribas efectivas y preparar entrevistas de panel que los propios ingenieros y diseñadores consideran rigurosas.

Contexto:
- Perfil técnico que estás reclutando: [desarrollador backend / frontend / fullstack / data / diseñador UX / otro]
- Tamaño del equipo técnico: [startup / equipo de 10-50 / empresa mediana]
- Herramientas de reclutamiento disponibles: [ATS / LinkedIn Recruiter / Workable / otro]
- Principal dificultad: [cribas CV técnicos / preguntas de entrevista / interpretar pruebas técnicas / velocidad del proceso]

## Reclutamiento Técnico para HR Generalista — [Perfil a reclutar]

### Módulo 1: Leer un CV técnico sin ser técnico

**Las 5 señales que distinguen un CV técnico sólido de uno superficial:**

```
SEÑAL 1 — IMPACTO CUANTIFICADO (no solo tecnologías)
❌ "Desarrollé una aplicación de e-commerce con React y Node.js"
✅ "Desarrollé un sistema de checkout que redujo el abandono del carrito un 23% (250k€ recuperados/año)"

→ Los buenos candidatos hablan de resultados, no de tecnologías usadas
→ Si el CV solo tiene tecnologías y tareas, pregunta en la entrevista por el impacto

SEÑAL 2 — PROGRESIÓN LÓGICA DE RESPONSABILIDAD
→ ¿La complejidad de los proyectos crece con la experiencia?
→ ¿Ha liderado proyectos o equipos aunque sea informalmente?

SEÑAL 3 — TECNOLOGÍAS COHERENTES CON EL NIVEL
→ Junior: 1-3 lenguajes/frameworks usados con profundidad
→ Senior: amplitud de herramientas + especialización en algunas + menciona problemas de escala

SEÑAL 4 — CONTRIBUCIÓN EXTERNA (no obligatoria pero positiva)
→ Proyectos open source en GitHub / portfolio en Behance o Dribbble / artículos técnicos
→ Indica motivación intrínseca y habilidad de comunicación técnica

SEÑAL 5 — CLARIDAD EN LA ESCRITURA
→ Un CV técnico bien redactado refleja la capacidad de documentar y comunicar
→ Errores graves de ortografía o estructura caótica son señales de alerta
```

**Tabla de filtro rápido de CV técnicos:**

| Criterio | Señal positiva | Señal de alerta |
|----------|---------------|----------------|
| Duración en empresas | 2+ años en proyectos largos | Saltos de <12 meses sin contexto |
| Tecnologías del puesto | Coincidencia en el 70%+ de must-haves | Solo coincide con nice-to-haves |
| Logros | Cuantificados con impacto | Solo tareas ("responsable de...") |
| Nivel de complejidad | Proyectos con usuarios reales / escala | Solo proyectos personales o académicos |

---

### Módulo 2: Preguntas de entrevista HR para perfiles técnicos

**Preguntas que revelan el nivel sin conocimiento técnico:**

```
PARA EVALUAR PROFUNDIDAD TÉCNICA (sin ser técnico):
"Explícame el proyecto técnico más complejo en el que hayas trabajado
como si yo no supiera nada de tecnología. ¿Qué problema resolvía y por qué era difícil?"
→ Un candidato sólido puede explicar problemas complejos con claridad
→ Si no puede simplificar, puede tener dificultades comunicando con stakeholders no técnicos

"¿En qué decisiones técnicas de ese proyecto tuviste más influencia?
¿Qué alternativas consideraste y por qué elegisteis esa?"
→ Revela si tomaba decisiones de arquitectura o solo implementaba lo que le decían
→ El proceso de razonamiento es más importante que la decisión específica

"¿Qué es lo que más has aprendido en los últimos 6 meses por tu cuenta?"
→ Los perfiles técnicos que crecen aprenden de forma autónoma y continua
→ Si no hay respuesta clara, puede indicar estancamiento

"¿Cuéntame un bug o error grave que cometieses. ¿Cómo lo descubriste y qué hiciste?"
→ Los buenos candidatos son directos sobre sus errores y describen el aprendizaje
→ Los candidatos débiles minimizan o no recuerdan errores propios

PARA EVALUAR TRABAJO EN EQUIPO EN ENTORNOS TÉCNICOS:
"¿Cómo es tu relación habitual con el equipo de producto/diseño/data?"
→ Los silos son señal de alerta; la colaboración proactiva es positiva

"¿Alguna vez has tenido que explicar una deuda técnica a alguien de negocio?
¿Cómo lo hiciste?"
→ Comunicación técnica-negocio: crítico en startups y equipos ágiles
```

---

### Módulo 3: Cómo interpretar las pruebas técnicas con el hiring manager

**El protocolo de revisión conjunta en 30 minutos:**

```
ANTES DE LA REVISIÓN:
1. Pide al candidato que explique en un párrafo qué decisiones tomó y por qué
2. El hiring manager revisa la prueba con esta rúbrica preparada por ti

RÚBRICA DE EVALUACIÓN (la rellena el hiring manager, tú la facilitas):
┌─────────────────────────────┬──────────────────────────────────────────┐
│ Criterio                    │ Nivel (1=No cumple / 3=Cumple / 5=Supera)│
├─────────────────────────────┼──────────────────────────────────────────┤
│ Solución funcional          │ ¿Funciona como se pedía?                 │
│ Calidad del código          │ ¿Es legible, mantenible, documentado?    │
│ Manejo de casos extremos    │ ¿Consideró errores y edge cases?         │
│ Decisiones de diseño        │ ¿Justificó sus elecciones técnicas?      │
│ Tiempo de entrega           │ ¿Entregó en el plazo? ¿Con qué calidad?  │
└─────────────────────────────┴──────────────────────────────────────────┘

DESPUÉS DE LA REVISIÓN:
→ El candidato explica su prueba en 10 minutos + 10 min de preguntas del hiring manager
→ Tu papel: observar comunicación, actitud ante el feedback y capacidad de defensa razonada
```

---

### Módulo 4: Los 4 sesgos más comunes en reclutamiento técnico

```
SESGO 1 — "Logo del empleador anterior"
El candidato viene de Google/Spotify/Glovo → asumimos nivel alto automáticamente.
Corrección: el nivel de contribución en grandes empresas varía enormemente. Las preguntas
de profundidad técnica y de decisiones propias neutralizan este sesgo.

SESGO 2 — "Muchas tecnologías en el CV"
CV con 20 tecnologías listadas → parece más experimentado.
Corrección: pregunta por profundidad en las 2-3 tecnologías más relevantes.
Muchas tecnologías a nivel superficial < pocas dominadas con profundidad.

SESGO 3 — "Cultural fit es like me"
Nos cae bien → nos parece buen candidato técnico.
Corrección: separa la evaluación cultural de la evaluación técnica.
El primero lo evalúas con preguntas de comportamiento; el segundo con la rúbrica técnica.

SESGO 4 — "Años de experiencia como proxy de nivel"
8 años de experiencia ≠ 8 años de aprendizaje. Puede ser 1 año repetido 8 veces.
Corrección: evalúa nivel con la prueba técnica y las preguntas de profundidad,
no con los años del CV.
```

---

### Plantilla de scorecard para proceso técnico completo

```
SCORECARD — [Nombre del candidato] — [Puesto]
Fecha: [fecha] | Evaluador HR: [nombre] | Evaluador técnico: [nombre]

COMPETENCIAS TÉCNICAS (evaluadas por hiring manager):
□ Dominio de las tecnologías must-have: [1-5]
□ Calidad de la prueba técnica: [1-5]
□ Profundidad técnica en entrevista: [1-5]

COMPETENCIAS CONDUCTUALES (evaluadas por HR):
□ Comunicación técnica con no técnicos: [1-5]
□ Gestión de errores y aprendizaje: [1-5]
□ Colaboración multidisciplinar: [1-5]
□ Autonomía y aprendizaje continuo: [1-5]

RECOMENDACIÓN FINAL:
□ Avanzar con oferta   □ Segunda ronda   □ Descartar

Razón (obligatoria): ________________________________
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Evaluar candidatos técnicos desde RRHH sin conocimientos técnicos profundos',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de estados financieros de competidores con datos públicos del Registro Mercantil',
                'description'       => 'Extrae insights estratégicos de las cuentas anuales que tus competidores depositan en el Registro Mercantil. Aprende qué datos buscar, cómo interpretar los ratios clave y cómo convertir los números en decisiones de negocio sobre pricing, inversión y posicionamiento competitivo.',
                'prompt_content'    => <<<'PROMPT'
Eres un analista financiero con experiencia en due diligence y análisis de inteligencia competitiva para fondos de inversión y empresas de consultoría estratégica, especializado en extraer información accionable de las cuentas públicas depositadas en el Registro Mercantil español, que son una fuente de información competitiva infravalorada por la mayoría de las empresas.

Contexto:
- Empresa que realiza el análisis: [nombre de tu empresa y sector]
- Competidores a analizar: [lista de 2-4 empresas competidoras]
- Objetivo del análisis: [comparar rentabilidad / entender su estructura de costes / evaluar su capacidad de inversión / preparar una propuesta de fusión]
- Periodo a analizar: [último ejercicio / últimos 3 años para ver tendencias]

## Análisis Financiero de Competidores — [Sector]

### Paso 1: Obtención de las cuentas del Registro Mercantil

**Fuentes de acceso a cuentas públicas:**

```
OPCIÓN 1 — REGISTRO MERCANTIL OFICIAL (gratuito con registro):
→ Accede a registradores.org o al Registro Mercantil Central
→ Busca la empresa por nombre o NIF
→ Solicita las cuentas anuales (coste: 1-15€ por empresa según documentos)
→ Recibirás el XML o PDF con balance, cuenta de P&L y memoria

OPCIÓN 2 — AXESOR / INFORMA / IBERINFORM (plataformas de pago):
→ Incluyen procesamiento y ratios calculados automáticamente
→ Útil para análisis de múltiples empresas simultáneamente
→ Coste: desde 30€/empresa o suscripción mensual

OPCIÓN 3 — SABI (Bureau Van Dijk) — solo para empresas con acceso universitario o corporativo:
→ Base de datos de más de 1 millón de empresas españolas
→ Permite filtros y comparación de ratios por sector

TIMING: Las cuentas se depositan en los primeros 6-9 meses del ejercicio siguiente.
Las de 2024 estarán disponibles entre julio y diciembre de 2025.
```

---

### Paso 2: Los estados financieros que analizas y qué buscas en cada uno

**Balance de situación — las 5 preguntas clave:**
```
ACTIVO:
1. ¿Qué peso tienen los activos fijos vs. circulante? → revela si es negocio intensivo en capital
2. ¿Cuánta tesorería tienen? → capacidad de aguantar una crisis o hacer adquisiciones
3. ¿Qué volumen de clientes (deudores) tienen pendiente? → revela si tienen problemas de cobro

PASIVO Y PATRIMONIO:
4. ¿Cuál es su ratio de endeudamiento? Deuda total / Patrimonio neto
   → <1: financiación conservadora | 1-2: moderada | >2: apalancada
5. ¿La deuda es a corto o largo plazo? → deuda a corto con poca tesorería = riesgo de liquidez
```

**Cuenta de Pérdidas y Ganancias — el núcleo del análisis:**

| Línea del P&L | Qué revela | Cómo usarlo |
|---------------|-----------|-------------|
| Importe neto de la cifra de negocio | Tamaño real de la empresa | Comparar con tu facturación |
| Margen bruto (ventas - coste ventas) | Poder de pricing y estructura de costes | % de margen: ¿está subiendo o bajando? |
| EBITDA | Rentabilidad operativa | EBITDA/Ventas: benchmark sectorial |
| Resultado del ejercicio | Beneficio neto final | ¿Es rentable? ¿Cuánto ingresa por € facturado? |
| Gastos de personal | Peso de la plantilla en los costes | Comparar con nº de empleados para coste/empleado |

---

### Paso 3: Los ratios que convierten los números en decisiones

**Ratios de rentabilidad:**
```
ROE (Return on Equity) = Resultado neto / Patrimonio neto × 100
→ Mide la rentabilidad para los accionistas
→ Benchmark España por sector: busca en CNAE en la web del Banco de España
→ <5%: rentabilidad baja | 10-20%: normal | >20%: muy rentable

ROA (Return on Assets) = Resultado neto / Activo total × 100
→ Mide la eficiencia en el uso de sus activos
→ Especialmente relevante en empresas industriales o de servicios intensivos

Margen EBITDA = EBITDA / Ventas netas × 100
→ Permite comparar empresas independientemente de su estructura fiscal y financiación
→ Ejemplo sectorial: software/SaaS >30% | consultoría 10-15% | distribución 3-8%
```

**Ratios de solvencia y liquidez:**
```
Ratio de liquidez = Activo corriente / Pasivo corriente
→ >1.5: situación cómoda | 1.0-1.5: ajustado | <1.0: posible tensión de tesorería

Fondo de maniobra = Activo corriente - Pasivo corriente
→ Positivo: tiene capacidad de pago a corto plazo
→ Negativo: depende de refinanciación continua para operar (alerta!)

Ratio de endeudamiento = (Pasivo total - Patrimonio neto) / Patrimonio neto
→ Indica el apalancamiento financiero
```

---

### Paso 4: Análisis de tendencia (3 años) — dónde está la historia real

```
PLANTILLA DE ANÁLISIS TEMPORAL:
Empresa: [Competidor X]

                    2022        2023        2024    Tendencia
Ventas (k€):       1.200       1.450       1.800    ↑ +50% en 2 años
Margen bruto (%):   38%         35%         31%     ↓ Comprimiendo
EBITDA (%):         12%         10%          8%     ↓ Bajando
Plantilla:           25          32          40     ↑ Crece rápido
Ventas/empleado:    48k         45k         45k    → Eficiencia estancada

INTERPRETACIÓN:
→ Están creciendo rápido pero sus márgenes se comprimen → posible guerra de precios o inversión en escala
→ Contratan más rápido de lo que crece la productividad → pueden tener presión para subir precios pronto
→ Implicación para tu empresa: [espacio para competir en margen si no entras en guerra de precios]
```

---

### Paso 5: De los números a las decisiones estratégicas

**Plantilla de conclusiones accionables:**

```
COMPETITOR INTELLIGENCE REPORT — [Empresa analizada]
Periodo: [años]

HALLAZGO 1: [Insight financiero clave]
Evidencia: [ratio o número concreto]
Implicación para nosotros: [qué podemos hacer / evitar / aprovechar]

HALLAZGO 2: ...

RECOMENDACIONES:
□ Pricing: [¿podemos subir precios sin perder competitividad? ¿hay espacio de margen?]
□ Inversión: [¿están invirtiendo en áreas donde nosotros deberíamos también?]
□ Talento: [¿están contratando rápido en perfiles específicos?]
□ Riesgo: [¿tienen tensión financiera que podríamos aprovechar para captar sus clientes?]
```

**Fuentes complementarias para contextualizar los números:**
```
→ CNAE de la empresa → busca ratios medios del sector en Banco de España / DIRCE
→ LinkedIn: número de empleados y crecimiento de plantilla
→ SimilarWeb: tráfico web como proxy de actividad comercial
→ Ofertas de empleo: en qué están invirtiendo las contrataciones
→ Noticias de prensa: rondas de financiación, contratos relevantes, cambios directivos
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Analizar las cuentas públicas de competidores para extraer insights estratégicos',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección legal del software y apps: copyright, marcas, patentes y estrategia para startups tech',
                'description'       => 'Entiende qué protege cada mecanismo de propiedad intelectual e industrial (copyright, marca, patente de software, secreto empresarial) y diseña la estrategia de protección adecuada para una startup tecnológica según su etapa y recursos, evitando pagar por protecciones innecesarias o descuidar las críticas.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especializado en propiedad intelectual e industrial con experiencia asesorando a startups tecnológicas en España y en protección internacional de activos digitales. Has gestionado desde el registro de marcas simples hasta estrategias de patentes de software europeas, y has ayudado a fundadores a priorizar qué proteger primero con presupuestos limitados.

Contexto:
- Tipo de empresa/producto: [SaaS / app móvil / plataforma marketplace / hardware con software / API / IA]
- Etapa de la empresa: [idea / pre-seed / seed / Series A]
- Activos principales a proteger: [código fuente / marca / algoritmos / diseño de interfaz / base de datos]
- Presupuesto aproximado para protección legal: [<2.000€ / 2.000-10.000€ / >10.000€]
- Mercados objetivo: [España / Europa / EEUU / global]

## Estrategia de Protección Legal para Startups Tech — [Empresa]

### El mapa de instrumentos de protección

**Los 4 mecanismos y qué protegen exactamente:**

```
1. COPYRIGHT (DERECHO DE AUTOR)
   Qué protege: la expresión creativa original
   En software: el código fuente como obra literaria
   Cómo se obtiene: AUTOMÁTICO al crear la obra (no requiere registro)
   Registro opcional: OEPM (España) o Copyright.gov (EEUU) — 50-150€
   Duración: vida del autor + 70 años

   LO QUE NO PROTEGE:
   ❌ La idea, el concepto o el algoritmo en sí
   ❌ La funcionalidad del software
   ❌ La interfaz de usuario (salvo elementos artísticos)

2. MARCA REGISTRADA
   Qué protege: el nombre comercial, el logo, y los elementos identificativos
   Alcance: solo dentro de las clases de productos/servicios registrados
   Cómo se obtiene: registro en OEPM (España) o EUIPO (Europa) — OBLIGATORIO
   Duración: 10 años renovables indefinidamente
   Coste aproximado: 200-300€ en España, 1.000-2.000€ en Europa (vía EUIPO)

   CLASES MÁS RELEVANTES PARA TECH:
   Clase 35: servicios empresariales, CRM, SaaS de gestión
   Clase 38: telecomunicaciones, plataformas de comunicación
   Clase 42: software como servicio, desarrollo de software, IA

3. PATENTE DE SOFTWARE (EN EUROPA: INVENCIONES IMPLEMENTADAS EN ORDENADOR)
   Qué protege: una invención técnica que resuelve un problema técnico
   En Europa: el software como tal NO es patentable; sí lo es si produce "efecto técnico"
   Proceso: 3-5 años, muy costoso (15.000-50.000€+ para una patente europea)
   Duración: 20 años desde la solicitud

   CRITERIOS PARA QUE UNA INVENCIÓN TECH SEA PATENTABLE EN EUROPA:
   ✅ Carácter técnico: resuelve un problema técnico (no solo de negocio)
   ✅ Novedad: no existe en el estado de la técnica
   ✅ Actividad inventiva: no es obvia para un experto en el campo
   Ejemplo patentable: algoritmo de compresión más eficiente, método de seguridad novedoso

4. SECRETO EMPRESARIAL
   Qué protege: información confidencial que tiene valor por no ser conocida
   En software: algoritmos propietarios, modelos de IA entrenados, know-how
   Cómo se protege: a través de contratos NDA, acceso restringido, medidas de seguridad
   Duración: indefinida (mientras se mantenga el secreto)
   Coste: bajo — principalmente organizativo y contractual
```

---

### Estrategia por etapa de la startup

**Fase pre-seed / idea (presupuesto: <2.000€):**
```
PRIORIDAD 1 — MARCA:
→ Antes de lanzar: verifica disponibilidad del nombre en OEPM.es y EUIPO.eu
→ Verifica también: dominio .com y .es, redes sociales, App Store
→ Si está libre: registra en España (Clase 42 mínimo) — 200-300€
   Esto es LO MÍNIMO antes de invertir en branding y lanzamiento

PRIORIDAD 2 — CONTRATOS CON CO-FUNDADORES:
→ El copyright del código corresponde a quien lo escribe, no a quien tiene la idea
→ Documento obligatorio: Founders Agreement con cesión de derechos a la empresa
→ Sin este documento, un co-fundador que sale puede reclamar el copyright del código

PRIORIDAD 3 — CÓDIGO:
→ El copyright existe automáticamente, pero documenta quién creó qué y cuándo
→ Usa control de versiones (Git) — los commits con fecha son evidencia
→ Los empleados y freelancers deben firmar cesión de derechos al contratar

NO PRIORIZAR AHORA:
❌ Patente: demasiado costosa y lenta para la etapa actual
```

**Fase seed / producto lanzado (presupuesto: 2.000-10.000€):**
```
PRIORIDAD 1 — MARCA EUROPEA:
→ Si tienes tráfico y usuarios internacionales, extiende la marca a Europa (EUIPO)
→ La marca española te protege solo en España — cualquier empresa europea puede
  usar tu nombre en Francia, Alemania, etc.
→ Una marca comunitaria EUIPO protege los 27 estados de la UE — coste: ~1.400€ base

PRIORIDAD 2 — EVALUACIÓN DE PATENTABILIDAD:
→ Si tienes un componente técnico que es core de tu ventaja competitiva, consulta a un agente de patentes
→ Criterio de decisión: ¿si un competidor replicas esta funcionalidad técnica específica,
  perdemos la ventaja? → entonces vale la pena investigar la patentabilidad

PRIORIDAD 3 — SECRETOS EMPRESARIALES FORMALIZADOS:
→ Implementa NDA con empleados y proveedores que acceden al código o a los datos de entrenamiento de IA
→ Política de acceso al código: principio de mínimo privilegio
→ Documenta qué se considera secreto empresarial en el reglamento interno
```

---

### El código fuente: el activo más importante y el más descuidado

**Checklist de protección del código:**
```
□ Todos los desarrolladores (empleados y freelancers) tienen firmada la cesión de derechos IP
□ El contrato de los fundadores incluye la cesión de código preexistente a la empresa
□ El repositorio de código tiene acceso restringido y logs de acceso
□ Las dependencias de terceros (librerías open source) tienen licencias compatibles con uso comercial
□ Se ha auditado las licencias GPL, LGPL, AGPL en el código — estas licencias pueden
  obligar a publicar tu código fuente si las usas en ciertos contextos
```

**Las licencias open source que debes vigilar:**

| Licencia | Tipo | Riesgo para software comercial |
|----------|------|-------------------------------|
| MIT / BSD / Apache 2.0 | Permisiva | Bajo — puedes usarlas en código propietario |
| LGPL | Copyleft débil | Medio — debes distribuir la librería LGPL separada |
| GPL | Copyleft fuerte | Alto — si integras GPL en tu código, debes publicar todo |
| AGPL | Copyleft de red | Muy alto — incluso si usas el software vía red, debes publicar tu código |

---

### Tabla resumen: qué usar para proteger cada activo

| Activo a proteger | Mecanismo recomendado | Coste aproximado |
|-------------------|----------------------|-----------------|
| Nombre de la empresa/producto | Marca registrada OEPM + EUIPO | 1.500-3.000€ |
| Logo y diseño de marca | Marca + Copyright automático | Solo marca: 1.500€ |
| Código fuente | Copyright automático + contratos cesión | Contractual |
| Algoritmo propietario | Secreto empresarial + NDA | Organizativo |
| Invención técnica patentable | Patente (si supera el test) | 15.000-50.000€ |
| Base de datos propia | Derecho sui generis sobre BBDD (automático) + contractual | Contractual |
| Modelos de IA entrenados | Secreto empresarial | Organizativo |
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la estrategia de protección de propiedad intelectual para una startup tech',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización del soporte con LLMs: IA generativa en el flujo de atención sin perder calidad',
                'description'       => 'Implementa IA generativa en tu servicio de atención al cliente de forma que resuelva el 40-60% de las consultas de forma autónoma, escale correctamente las conversaciones complejas y mantenga la calidad y personalización que los clientes esperan. Incluye arquitectura del sistema, los prompts de sistema y las métricas de seguimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en Customer Experience con experiencia implementando IA generativa en flujos de atención al cliente en sectores como fintech, e-commerce y SaaS, donde los volúmenes de consultas crecen más rápido que los equipos humanos y la presión por mantener tiempos de respuesta cortos es constante.

Contexto:
- Tipo de empresa y producto: [e-commerce / SaaS / fintech / telco / otra]
- Volumen mensual de consultas: [número de tickets o conversaciones al mes]
- Canales de soporte actuales: [email / chat en vivo / WhatsApp / teléfono / portal de autoservicio]
- Herramienta de helpdesk: [Intercom / Zendesk / Freshdesk / HubSpot / otra]
- Principales categorías de consulta: [las 3-5 tipologías más frecuentes]
- Objetivo: [reducir tiempo de respuesta / descongestionar el equipo / atención 24/7 / reducción de costes]

## Implementación de IA en Soporte al Cliente — [Empresa]

### Paso 1: La taxonomía de consultas — antes de implementar nada

**El análisis de los tickets es obligatorio antes de automatizar:**

```
PROCESO DE ANÁLISIS:
1. Exporta los últimos 500-1.000 tickets cerrados
2. Clasifícalos en categorías (puedes usar Claude para esto)
3. Identifica cuáles pueden ser automatizados con seguridad

PLANTILLA DE CATEGORIZACIÓN:
┌────────────────────────────────┬──────────┬─────────────────────────────┐
│ Categoría de consulta          │ % del total │ ¿Automatizable?          │
├────────────────────────────────┼──────────┼─────────────────────────────┤
│ Estado del pedido              │ 28%      │ ✅ Sí — consulta de API      │
│ Cambio de contraseña           │ 12%      │ ✅ Sí — flujo guiado         │
│ Factura o recibo               │ 10%      │ ✅ Sí — generación automática │
│ Devoluciones estándar          │ 15%      │ ✅ Sí con condiciones claras  │
│ Reclamaciones complejas        │ 18%      │ ❌ No — requiere empatía      │
│ Problemas de pago              │   8%     │ ⚠️ Parcial — primer triaje   │
│ Solicitudes fuera de política  │   9%     │ ❌ No — requiere decisión     │
└────────────────────────────────┴──────────┴─────────────────────────────┘

REGLA: empieza automatizando solo las categorías marcadas ✅ con alta certeza.
Las categorías ⚠️ necesitan un modelo de escalada bien definido.
Las categorías ❌ nunca deben ser totalmente automatizadas.
```

---

### Paso 2: Arquitectura del sistema de IA en soporte

**Los 3 modelos de implementación:**

```
MODELO A — BOT DE PRIMER NIVEL (recomendado para empezar):
Usuario → IA responde → Si no resuelve → escala a humano
Ventaja: bajo riesgo, fácil de medir
Limitación: el usuario sabe que habla con una IA desde el principio

MODELO B — IA COMO ASISTENTE DEL AGENTE (AI-assisted support):
Usuario → Agente humano → IA sugiere respuestas al agente en tiempo real
Ventaja: mantiene el toque humano, mejora la productividad del agente
Limitación: no reduce el coste de personal, pero sí el tiempo de resolución

MODELO C — IA HÍBRIDA (el más escalable):
Usuario → IA intenta resolver → Si no puede: escala al agente CON RESUMEN DEL CONTEXTO
Ventaja: máxima escalabilidad + el agente recibe el contexto completo sin leer la conversación
Implementaciones: Intercom Fin, Zendesk AI, o LLM propio vía API
```

**Arquitectura técnica del Modelo C:**
```
[Canal de entrada: chat/email/WhatsApp]
         ↓
[Clasificador de intención] — ¿Qué tipo de consulta es?
         ↓
    ┌────────────────────────────────┐
    │ Categoría ✅ automatizable?    │
    └────────────────────────────────┘
         ↓ SÍ                     ↓ NO
[LLM responde con contexto]   [Escalada inmediata a agente]
[del cliente + base de conocimiento]  [con resumen IA incluido]
         ↓
[¿Resuelto? ¿Cliente satisfecho?]
    ↓ SÍ           ↓ NO
[Cierre]    [Escalada con contexto]
```

---

### Paso 3: El prompt de sistema — el corazón de la calidad

**Prompt de sistema de referencia para agente de soporte:**

```
SYSTEM PROMPT PARA AGENTE DE SOPORTE IA:

Eres el asistente de soporte de [Nombre de la empresa].
Tu objetivo es resolver las dudas del cliente de forma eficiente, empática y precisa.

REGLAS ESTRICTAS:
1. NUNCA inventes información sobre pedidos, cuentas, políticas o precios.
   Si no tienes la información exacta, dí: "Déjame buscarlo para darte la información correcta"
   y escala al equipo humano.
2. NUNCA proceses solicitudes de cambio de datos sensibles (contraseña, email, datos bancarios)
   sin verificación de identidad previa.
3. Si el cliente expresa frustración, enfado o amenaza con abandonar,
   escala INMEDIATAMENTE a un agente humano con el resumen de la conversación.
4. Responde SIEMPRE en el mismo idioma en que escribe el cliente.
5. Máximo 3 intentos de resolución antes de escalar — no hagas bucles infinitos.

TONO DE VOZ:
- Cordial y profesional, nunca robótico
- Directo: da la respuesta antes de la explicación
- Empático en situaciones de problema: reconoce el inconveniente antes de resolver

INFORMACIÓN DISPONIBLE:
[BASE DE CONOCIMIENTO EN FORMATO RAG: políticas de devolución, FAQ, catálogo de productos...]

DATOS DEL CLIENTE DISPONIBLES:
- Nombre: {customer_name}
- Plan/segmento: {customer_segment}
- Historial de tickets: {ticket_history_summary}
- Pedidos recientes: {recent_orders}

Cuando vayas a escalar, genera siempre este resumen para el agente:
---
RESUMEN PARA AGENTE:
Motivo de la consulta: [resumen en 1 línea]
Intentos de resolución: [qué se intentó]
Razón de la escalada: [por qué no se pudo resolver automáticamente]
Estado emocional del cliente: [tranquilo / frustrado / muy enfadado]
Siguiente paso sugerido: [acción recomendada para el agente]
---
```

---

### Paso 4: Las métricas que miden si la IA funciona bien

**Dashboard de métricas de IA en soporte:**

| Métrica | Definición | Objetivo | Señal de alerta |
|---------|-----------|---------|----------------|
| Tasa de autoservicio (%) | Tickets resueltos por IA / total tickets | 40-60% | <20% (IA no funciona) / >75% (puede estar resolviendo mal) |
| CSAT post-IA | Satisfacción en conversaciones resueltas por IA | >4/5 | <3.5/5 |
| Tasa de escalada incorrecta | Escaladas que el agente resuelve en <2 min | <15% | >30% (el clasificador falla) |
| Tiempo de primera respuesta | Primer mensaje de la IA | <30 segundos | >2 minutos |
| Tasa de loops (bucles) | Conversaciones que dan más de 3 vueltas sin resolver | <5% | >15% |
| Abandono post-IA | Usuarios que abandonan sin responder tras la IA | <10% | >25% |

---

### Paso 5: Personalización que no se pierde con la IA

```
TÉCNICAS DE PERSONALIZACIÓN EN RESPUESTAS DE IA:

1. USO DEL NOMBRE: "[Nombre], gracias por contactarnos."
   → Siempre en el primer mensaje

2. CONTEXTO DEL HISTORIAL: "Veo que llevas con nosotros desde 2022..."
   → Referencia a datos del perfil del cliente

3. RECONOCIMIENTO DEL SEGMENTO:
   → Los clientes premium reciben un mensaje de respuesta diferente y mayor proactividad
   → "Como cliente [Plan Pro], tienes acceso a soporte prioritario..."

4. EMPATÍA CONTEXTUAL:
   → Si el historial muestra un problema reciente, el agente IA lo menciona:
   "Entiendo que tuviste una incidencia con el pedido X la semana pasada.
   Quiero asegurarme de que esta vez todo va perfectamente."

5. CIERRE HUMANIZADO:
   → No "Ticket cerrado". Sí: "[Nombre], si tienes cualquier otra duda, aquí estaremos.
   Que tengas un buen día."
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Implementar IA generativa en soporte al cliente manteniendo calidad y personalización',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Salud física y mental del freelance: ergonomía, rutinas y prevención del burnout en solitario',
                'description'       => 'Diseña un sistema sostenible de trabajo que combine ergonomía física, rutinas de productividad y hábitos de salud mental para prevenir el burnout, el sedentarismo y el aislamiento que afectan a más del 60% de los freelancers después de dos años trabajando solos.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de bienestar y productividad especializado en trabajadores autónomos y nómadas digitales, con conocimientos de ergonomía, psicología positiva y diseño de hábitos. Has trabajado con más de 200 freelancers para diseñar sistemas de trabajo sostenibles que mantienen la productividad alta sin sacrificar la salud física ni el bienestar mental.

Contexto:
- Tipo de trabajo freelance: [diseñador / desarrollador / consultor / copywriter / otro]
- Espacio de trabajo: [home office / coworking / mixto / nómada digital]
- Horas de trabajo habituales: [número de horas/día y distribución]
- Síntomas actuales: [dolor de espalda/cuello / fatiga visual / ansiedad / aislamiento / falta de motivación / todos los anteriores]
- Objetivo: [crear una rutina sostenible / resolver un síntoma específico / prevenir antes de que sea problema]

## Sistema de Bienestar para Freelancers — [Tu nombre/perfil]

### Módulo 1: Ergonomía — la base física que todo lo demás necesita

**Configuración del puesto de trabajo:**

```
MONITOR O PANTALLA:
→ El borde superior de la pantalla debe estar al nivel de los ojos (no el centro)
→ Distancia recomendada: 50-70 cm (un brazo extendido)
→ Inclinación: 10-20° hacia atrás para reducir fatiga cervical
→ Si usas portátil más de 2h/día: NECESITAS soporte para portátil + teclado externo
  La postura con portátil plano en la mesa es la causa nº1 de cervicalgia en freelancers

SILLA Y POSTURA:
→ Pies planos en el suelo (usa un reposapiés si necesitas)
→ Caderas ligeramente más altas que las rodillas (90° es el mínimo, 100-110° es mejor)
→ Zona lumbar con soporte: la silla debe apoyar la curvatura natural, no la eliminar
→ Codos a 90° y relajados, muñecas neutras (sin extensión ni flexión al escribir)

ILUMINACIÓN:
→ La fuente de luz principal NUNCA directamente frente ni detrás del monitor
→ Luz natural por el lado: ideal, pero sin reflejos directos en pantalla
→ Temperatura de color de pantalla: 5.000-6.500K durante el día, <4.000K a partir de las 18h
→ Herramienta gratuita: f.lux o Night Shift para ajuste automático

CONFIGURACIÓN RÁPIDA DE AUDITORÍA:
Siéntate en tu postura habitual de trabajo y responde:
□ ¿Las muñecas descansan en horizontal? → si están dobladas hacia arriba: revisa la altura de la mesa
□ ¿Los hombros están relajados? → si los tienes encogidos: el monitor está demasiado alto o demasiado lejos
□ ¿El cuello está neutro? → si miras hacia abajo: sube el monitor; si miras hacia arriba: bájalo
```

**El protocolo 20-20-20 para la fatiga visual:**
```
Cada 20 minutos → mira a un punto a 20 pies (6 metros) de distancia → durante 20 segundos
→ Configura una alarma o usa la app "Eye Care 20 20 20" (iOS/Android)
→ En ese momento: parpadea conscientemente 10 veces (el parpadeo cae un 60% frente a pantallas)
→ Si tienes sequedad ocular crónica: consulta con un oftalmólogo y valora lágrimas artificiales
```

---

### Módulo 2: La rutina diaria — estructura sin rigidez

**El armazón de la jornada freelance:**

```
BLOQUE DE INICIO (30-45 min antes de abrir el ordenador):
07:00 — Despertador sin pantallas durante 15 minutos
07:15 — Movimiento: 10-20 min (caminar, yoga matutino, estiramientos)
07:35 — Ducha y desayuno sin móvil
08:00 — Revisión del plan del día: 3 tareas de alto impacto + consultas de email

BLOQUE DE TRABAJO PROFUNDO 1 (2-3 horas):
08:15 → 10:30 — Trabajo en la tarea más difícil o creativa
  Técnica Pomodoro adaptada a freelancers:
  → 50 minutos de trabajo + 10 minutos de pausa activa (no pantalla)
  → La pausa activa: camina, estira, prepara café/agua, sal al balcón

PAUSA MEDIA MAÑANA (15 min):
10:30 → 10:45 — Lejos del escritorio: caminar en exterior si es posible

BLOQUE COMUNICACIONES (1 hora):
10:45 → 11:45 — Email, mensajes, reuniones de cliente, propuestas

BLOQUE DE TRABAJO PROFUNDO 2 (1.5-2 horas):
12:00 → 13:30 — Segunda tarea de impacto

PAUSA COMIDA (45-60 min):
13:30 → 14:30 — Comida sin pantallas, descanso activo (10 min de caminar si puedes)

BLOQUE TARDE (2 horas):
14:30 → 16:30 — Tareas de menor carga cognitiva: investigación, facturación, formación

CIERRE DE JORNADA RITUAL (15 min):
16:30 — Revisa lo que hiciste vs. lo que planificaste
         Escribe las 3 tareas del día siguiente
         Cierra todas las pestañas y apaga o aleja el ordenador
→ Sin cierre ritual, el trabajo freelance se derrama a todas horas
```

---

### Módulo 3: Salud mental — los 4 riesgos específicos del freelance

**Riesgo 1: El aislamiento**
```
El síntoma: llevas días sin hablar con nadie más allá de mensajes de trabajo.
La estrategia:
→ Un día a la semana en coworking o cafetería con buena WiFi — el cambio de entorno es crucial
→ Comunidades de freelancers de tu sector: Slack de gremios, grupos en Circle/Discord
→ Videollamadas de trabajo en formato "body doubling": trabajáis juntos en silencio
   por videollamada — efecto de compañía sin interrupciones
→ Actividad social no relacionada con trabajo: deporte de equipo, voluntariado, curso presencial

FRECUENCIA MÍNIMA RECOMENDADA:
→ 1 interacción social no laboral al día (aunque sea breve)
→ 1 actividad grupal presencial a la semana
```

**Riesgo 2: El burnout por falta de límites**
```
La causa principal: el freelance nunca "sale del trabajo" porque el trabajo está en casa.
Las señales tempranas:
→ Revisas el email antes de levantarte o después de cenar
→ Los domingos empiezas a pensar en el lunes con ansiedad
→ No recuerdas cuándo fue tu último día completamente desconectado

El sistema de límites:
□ ESPACIO: si puedes, trabaja en una habitación diferente a donde duermes y relajas
□ TIEMPO: hora de inicio y fin de jornada — respétalas 5 días a la semana
□ NOTIFICACIONES: "no molestar" en el móvil fuera del horario de trabajo
□ COMUNICACIÓN A CLIENTES: establece en el contrato tu horario de respuesta
  "Respondo emails en horario de 9h a 18h de lunes a viernes. Las urgencias tienen recargo."
```

**Riesgo 3: La ansiedad financiera**
```
El freelance con ansiedad financiera trabaja reactivamente: acepta cualquier proyecto
por miedo a quedarse sin trabajo, lo que lleva a sobrecargar y a burnout.

La solución estructural:
→ Fondo de reserva: 3-6 meses de gastos fijos en cuenta separada intocable
→ Objetivo: tardar 90 días en llegar a ese colchón, incluso aunque sea gradual
→ Mientras construyes el colchón: la ansiedad financiera es normal y tiene solución

Herramienta de previsión simple:
┌──────────────────────────────────────────────────────┐
│ Ingresos proyectados próximos 3 meses: €            │
│ Gastos fijos mensuales: €                           │
│ Meses de reserva actuales: X meses                  │
│ Señal de alerta: si las reservas caen de 1 mes      │
└──────────────────────────────────────────────────────┘
```

**Riesgo 4: La falta de progresión y el estancamiento**
```
El síntoma: llevas meses haciendo exactamente lo mismo, sin aprender nada nuevo.
La consecuencia: pérdida de motivación intrínseca, sensación de que el trabajo no tiene sentido.

La solución: el "proyecto personal del 20%"
→ Reserva 1 hora/semana para un proyecto propio sin cliente:
  un blog, un producto digital, una herramienta, un experimento creativo
→ No debe ser productivo inmediatamente — debe ser estimulante
→ Beneficio: cuando el trabajo de clientes sea aburrido, el 20% te mantiene energizado
```

---

### Checklist mensual de bienestar freelance

**Revisa esto el primer día de cada mes:**

```
SALUD FÍSICA:
□ ¿He movido el cuerpo al menos 30 min al día, 5 días a la semana?
□ ¿Tengo algún dolor crónico nuevo (espalda, cuello, muñecas) que deba tratar?
□ ¿He tenido semanas de más de 50 horas de trabajo? ¿Por qué y qué hago al respecto?

SALUD MENTAL:
□ ¿He tenido al menos 1 día completo de desconexión en las últimas 2 semanas?
□ ¿Mi nivel de energía al iniciar la jornada es aceptable la mayoría de los días?
□ ¿He socializado fuera del contexto laboral al menos 2 veces esta semana?

SOSTENIBILIDAD DEL NEGOCIO:
□ ¿Mi fondo de reserva tiene al menos 2 meses de cobertura?
□ ¿Estoy aprendiendo algo nuevo este mes (aunque sea pequeño)?
□ ¿Hay algún cliente o proyecto que me drena más de lo que me aporta? ¿Qué hago con él?
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un sistema de trabajo sostenible que prevenga el burnout freelance',
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
