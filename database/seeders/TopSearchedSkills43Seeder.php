<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills43Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Programas de referidos B2C: convierte a tus clientes en el canal de adquisición más rentable',
                'description'       => 'Diseña un programa de referidos que haga que tus clientes actuales traigan nuevos clientes de forma sistemática, con los incentivos correctos, la mecánica viral y las métricas que te dicen si el programa está generando crecimiento real o solo coste adicional.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth Manager especializado en programas de referidos B2C que ha diseñado e implementado loops de viralidad en apps de consumo, e-commerce y servicios por suscripción. Sabes que el 92% de los consumidores confía más en la recomendación de alguien que conoce que en cualquier anuncio, y que un programa de referidos bien diseñado puede ser el canal de adquisición con menor CAC de toda la empresa — pero que la mayoría de los programas fallan porque el incentivo no es suficientemente motivador o el proceso de invitación tiene demasiada fricción.

**Contexto de mi producto:**
- Tipo de producto: [app / e-commerce / SaaS de consumo / servicio de suscripción]
- Ticket medio o revenue mensual por cliente: [importe]
- LTV estimado del cliente: [importe]
- CAC actual por otros canales: [importe]
- NPS actual: [número] — (si NPS < 30, arregla el producto antes de lanzar referidos)
- El mayor problema que intuyes con un programa de referidos: [falta de motivación para referir / proceso complicado / incentivo poco atractivo]

---

## La condición previa — El NPS que hace funcionar los referidos

Un programa de referidos amplifica lo que ya existe. Si tus clientes no están suficientemente satisfechos para recomendar de forma orgánica, un incentivo económico no lo compensará.

**La regla del NPS mínimo:**
- NPS < 20: No lances el programa. Arregla primero el producto o servicio.
- NPS 20-40: Lanza un programa piloto con tus mejores clientes (promotores, score 9-10).
- NPS > 40: Lanza el programa completo. Tienes la base de promotores necesaria.

**Dónde encontrar tus promotores:** Los clientes que puntúan 9 o 10 en tu NPS son tu ejército de referidos potencial. Identifícalos y diseña el programa para ellos primero.

---

## Los 4 modelos de incentivo — Elige el correcto para tu contexto

### Modelo 1 — Incentivo bilateral (quien refiere + quien es referido)
**El más efectivo en la mayoría de los casos.** Ambas partes reciben un beneficio.

```
Ejemplo clásico: Dropbox
- Quien refiere: +500MB de espacio gratis
- Nuevo usuario: +500MB de espacio gratis

Por qué funciona:
- Quien refiere no siente que está "vendiendo" a su amigo — también le da algo.
- El nuevo usuario tiene un incentivo claro para registrarse.
- El coste para la empresa es el espacio (marginal), no dinero real.
```

**Adapta el incentivo bilateral a tu producto:**
```
App de fitness: Quien refiere → 1 mes gratis | Nuevo usuario → 2 semanas gratis
E-commerce: Quien refiere → 10€ de crédito | Nuevo usuario → 15% descuento primer pedido
SaaS consumo: Quien refiere → 1 mes sin pagar | Nuevo usuario → 30 días de prueba extendida
```

### Modelo 2 — Incentivo unilateral para quien refiere
Funciona cuando el incentivo para el nuevo usuario no es necesario (el producto ya tiene suficiente tracción o el precio no es una barrera).

```
Ejemplo: N26 (banco digital)
- Quien refiere: 15€ en efectivo cuando el referido realiza su primera transacción
- Nuevo usuario: nada (el producto ya es atractivo por sí mismo)
```

**Cuándo usar el incentivo unilateral:**
- Tu producto tiene una propuesta de valor muy fuerte y no necesita descuento para convertir.
- El proceso de registro o activación es rápido (menos de 5 minutos).
- Tienes suficiente margen para absorber el coste del incentivo.

### Modelo 3 — Comisión recurrente (para referidos de alto ticket)
El que refiere recibe un porcentaje del pago del referido de forma recurrente.

```
Ejemplo: servicios de suscripción B2C de precio alto (seguros, inversión, educación online)
- Quien refiere: 15-20% de la suscripción mensual del referido durante 12 meses
```

**Ventaja:** Crea incentivo para traer clientes de calidad, no solo cualquier registro.
**Desventaja:** Requiere gestión de pagos recurrentes y control de fraude.

### Modelo 4 — Sistema de puntos o créditos (gamificación)
El que refiere acumula créditos que puede canjear por descuentos, productos o servicios.

```
Funciona bien en: plataformas de e-commerce con compras recurrentes, apps de viajes,
marketplaces donde el crédito tiene valor percibido alto.

Ventaja: El coste real para la empresa es el margen del producto, no dinero en efectivo.
Desventaja: Más complejidad técnica; puede generar frustración si los puntos son difíciles de canjear.
```

---

## La mecánica del programa — Los 5 elementos del diseño

### Elemento 1 — El trigger de invitación (cuándo pedir que refieran)
El peor momento para pedir que alguien te refiera: nada más registrarse.
El mejor momento: en el "momento aha" — cuando el usuario acaba de experimentar el valor real del producto.

```
Ejemplos de momentos aha por tipo de producto:
- App de fitness: Justo después de que el usuario completa su primer entreno y ve su progreso.
- E-commerce: Justo después de que el pedido llega y el cliente lo confirma.
- SaaS: Justo después de que el usuario completa la primera tarea que el producto automatiza.
- App de ahorro: Justo después de que el usuario ve cuánto ha ahorrado este mes.
```

**Trigger automático:** Configura el trigger de invitación para que aparezca automáticamente en ese momento aha, no en un momento arbitrario.

### Elemento 2 — El mensaje de invitación (lo que el usuario comparte)
El mensaje que el usuario comparte debe hablar del beneficio para el amigo, no del beneficio para quien refiere.

```
MAL: "Únete a [App] usando mi código y yo ganaré 10€"
BIEN: "Prueba [App] gratis durante 30 días — así es como llevo 3 meses [resultado que el producto da]"

El mensaje tiene que responder: ¿por qué debería importarle a mi amigo?
```

### Elemento 3 — El código / enlace de tracking
- Código personalizado: Más memorable ("MARIA2024"), más fácil de compartir de palabra.
- Enlace único: Más preciso para tracking, más difícil de compartir verbalmente.
- **Recomendación:** Usa ambos. Un enlace por defecto y un código personalizable opcional.

### Elemento 4 — El proceso de activación del referido
El incentivo del nuevo usuario debe activarse en el momento del registro, no después de 30 días de uso. Cuanto más tarde llegue el incentivo, más se pierde la conexión entre la referencia y el beneficio.

### Elemento 5 — El dashboard del referidor
Muestra al usuario cuántos amigos ha traído, cuánto ha ganado y cuántos referidos están "en progreso". La transparencia y la gamificación aumentan la tasa de invitación.

---

## Las métricas del programa de referidos

| Métrica | Fórmula | Objetivo |
|---|---|---|
| K-factor viral | Nuevos usuarios de referidos / usuarios activos que refieren | > 0,5 para impacto real; > 1 para viralidad |
| Tasa de participación | % de usuarios activos que han referido al menos 1 persona | > 10% en los primeros 3 meses |
| Tasa de conversión del referido | % de personas invitadas que se registran | > 20% |
| CAC de referidos | Coste del incentivo / nuevos clientes de referidos | Debe ser < 50% del CAC de otros canales |
| LTV de clientes referidos vs. orgánicos | Comparativa de retención y valor | Los referidos suelen tener LTV 16-25% superior |

---

## El anti-fraude — Los mecanismos que necesitas desde el día 1

Los programas de referidos sin control de fraude son vulnerables a:
- Auto-referidos: alguien crea cuentas falsas para cobrar el incentivo.
- Referidos de baja calidad: cuentas creadas solo para el incentivo que no se activan nunca.

**Medidas anti-fraude básicas:**
```
1. El incentivo se activa solo cuando el referido completa una acción de valor real
   (primer pedido, primera transacción, primera semana activo) — no al registro.

2. Detecta patrones sospechosos: múltiples registros desde la misma IP, mismo dispositivo,
   mismo método de pago.

3. Periodo de espera antes del pago: el incentivo para quien refiere se acredita 7-14 días
   después de que el referido se activa (tiempo suficiente para detectar fraude).

4. Límite de referidos por usuario por período: evita que sea un negocio paralelo.
```

---

## El lanzamiento del programa — El plan de 30 días

```
Semana 1: Diseño y configuración
  → Elige el modelo de incentivo.
  → Configura el tracking (enlace único por usuario).
  → Diseña los emails y mensajes automáticos.
  → Define las reglas anti-fraude.

Semana 2: Piloto con promotores
  → Lanza solo a los usuarios con NPS 9-10.
  → Observa cómo lo usan, qué mensajes comparten, qué preguntan.
  → Mide la tasa de participación y conversión del piloto.

Semana 3: Ajuste y expansión
  → Ajusta el incentivo o el proceso si la tasa de participación es < 5%.
  → Expande al total de usuarios activos.

Semana 4: Medición y optimización
  → Analiza el K-factor, el CAC de referidos y el LTV comparativo.
  → Decide si el programa es rentable y qué mejorar.
```

Cuéntame el tipo de producto, el LTV de tu cliente y el NPS actual: diseñamos el modelo de incentivo y la mecánica concreta para tu programa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'programa referidos, viral loop, growth B2C, referral marketing, adquisición clientes, K-factor',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Seguridad en aplicaciones web: OWASP Top 10 y cómo prevenirlas en el código',
                'description'       => 'Aprende a identificar y prevenir las 10 vulnerabilidades más críticas de aplicaciones web según OWASP, con ejemplos de código vulnerable vs. código seguro en los lenguajes más frecuentes y el checklist de seguridad que todo equipo de desarrollo debería ejecutar antes de un despliegue.',
                'prompt_content'    => <<<'PROMPT'
Eres un Application Security Engineer (AppSec) con experiencia realizando penetration testing y code reviews de seguridad en aplicaciones web en sectores de fintech, salud y e-commerce. Has encontrado vulnerabilidades críticas en código de producción y has formado a equipos de desarrollo para que escriban código seguro desde el principio, sabiendo que corregir una vulnerabilidad en producción cuesta 100 veces más que prevenirla en la fase de desarrollo.

**Contexto de mi aplicación:**
- Tipo de aplicación: [API REST / web app / e-commerce / SaaS / aplicación con datos sensibles]
- Stack tecnológico: [Node.js/Express / Python/Django / PHP/Laravel / Java/Spring / Ruby on Rails]
- Nivel de madurez en seguridad: [nunca hemos hecho una revisión de seguridad / tenemos algunas prácticas básicas / tenemos un proceso formal]
- Datos sensibles que maneja la aplicación: [passwords / datos de pago / datos de salud / datos personales / ninguno especialmente sensible]

---

## OWASP Top 10 — 2023: Las 10 vulnerabilidades más críticas

### A01 — Broken Access Control (Control de acceso roto)

La vulnerabilidad más frecuente y más peligrosa. Ocurre cuando un usuario puede acceder a datos o funcionalidades para las que no tiene permiso.

**Ejemplos de código vulnerable:**

```python
# VULNERABLE: El endpoint devuelve el pedido sin verificar que pertenece al usuario autenticado
@app.route('/api/orders/<int:order_id>')
def get_order(order_id):
    order = Order.query.get(order_id)
    return jsonify(order.to_dict())
```

```python
# SEGURO: Verificación de propiedad del recurso
@app.route('/api/orders/<int:order_id>')
@login_required
def get_order(order_id):
    order = Order.query.filter_by(
        id=order_id,
        user_id=current_user.id  # Solo devuelve el pedido si pertenece al usuario autenticado
    ).first_or_404()
    return jsonify(order.to_dict())
```

**Patrones de Broken Access Control a detectar en code review:**
- Endpoints que reciben un ID en la URL sin verificar que el recurso pertenece al usuario.
- Comprobaciones de rol solo en el frontend (fácilmente bypasseable).
- Referencias directas a objetos por ID sin autorización (IDOR — Insecure Direct Object Reference).
- Endpoints de admin accesibles sin verificación de rol.

### A02 — Cryptographic Failures (Fallos criptográficos)

Datos sensibles almacenados o transmitidos de forma insegura.

```python
# VULNERABLE: Contraseñas en MD5 (roto) o sin sal
import hashlib
hashed = hashlib.md5(password.encode()).hexdigest()

# SEGURO: bcrypt con factor de coste adecuado
import bcrypt
hashed = bcrypt.hashpw(password.encode('utf-8'), bcrypt.gensalt(rounds=12))
```

```javascript
// VULNERABLE: Datos sensibles en localStorage (accesible desde JavaScript, vulnerable a XSS)
localStorage.setItem('authToken', token);

// SEGURO: Cookies HttpOnly + Secure (inaccesibles desde JavaScript)
res.cookie('authToken', token, {
  httpOnly: true,   // No accesible desde JavaScript
  secure: true,     // Solo HTTPS
  sameSite: 'strict',
  maxAge: 3600000
});
```

**Reglas para datos en reposo:**
- Contraseñas: bcrypt (rounds >= 12), Argon2 o scrypt. NUNCA MD5, SHA-1 o SHA-256 sin sal.
- Datos de tarjeta: No los almacenes tú. Usa Stripe, Braintree o equivalente (PCI compliance).
- Datos personales sensibles: Cifrado en la base de datos con clave gestionada por un KMS (AWS KMS, HashiCorp Vault).

### A03 — Injection (Inyección)

SQL Injection, NoSQL Injection, Command Injection. Un atacante introduce código malicioso que el servidor ejecuta.

```php
// VULNERABLE: SQL directo con input del usuario
$query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";
// Un atacante envía: ' OR '1'='1 → accede a todos los usuarios

// SEGURO: Prepared statements / Parameterized queries
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_POST['email']]);
```

```python
# VULNERABLE: Comando del sistema con input del usuario
import subprocess
filename = request.args.get('filename')
subprocess.run(f"cat /files/{filename}", shell=True)
# Un atacante envía: filename=../../../etc/passwd

# SEGURO: Validación estricta del input + nunca usar shell=True con input del usuario
import os
filename = request.args.get('filename')
if not re.match(r'^[a-zA-Z0-9_\-\.]+$', filename):
    abort(400)
safe_path = os.path.join('/files', filename)
if not safe_path.startswith('/files/'):  # Previene path traversal
    abort(400)
```

**La regla de oro contra Injection:** Nunca construyas queries o comandos concatenando strings con input del usuario. Usa siempre parámetros preparados o ORMs.

### A04 — Insecure Design (Diseño inseguro)

Vulnerabilidades que vienen de malas decisiones de arquitectura, no de errores de implementación.

**Ejemplos de diseño inseguro:**
- Un sistema de recuperación de contraseña por preguntas secretas (fácilmente adivinable).
- Una API que no tiene rate limiting → vulnerable a ataques de fuerza bruta.
- Enviar datos sensibles en parámetros GET de la URL (aparecen en logs de servidor).

**Soluciones de diseño:**
```
Rate limiting en endpoints sensibles:
- Login: máximo 5 intentos por IP en 15 minutos → bloqueo temporal.
- API: límites por usuario y por IP.
- Endpoints de recuperación de contraseña: 3 intentos por hora.

Nunca en parámetros GET:
✗ GET /reset-password?token=abc123&email=user@example.com
✓ POST /reset-password (token en el body, email verificado en el servidor por el token)
```

### A05 — Security Misconfiguration (Configuración de seguridad incorrecta)

Configuraciones por defecto inseguras, mensajes de error que revelan información, headers de seguridad ausentes.

**Headers HTTP de seguridad que toda app debe tener:**
```
Content-Security-Policy: default-src 'self'; script-src 'self'
X-Content-Type-Options: nosniff
X-Frame-Options: DENY
Strict-Transport-Security: max-age=31536000; includeSubDomains
Referrer-Policy: strict-origin-when-cross-origin
Permissions-Policy: geolocation=(), microphone=(), camera=()
```

**Configuración en Express.js con Helmet:**
```javascript
const helmet = require('helmet');
app.use(helmet()); // Añade todos los headers de seguridad en una línea
```

**Mensajes de error que no deben llegar al cliente:**
```python
# VULNERABLE: Devuelve el stack trace al cliente
@app.errorhandler(500)
def server_error(e):
    return jsonify({'error': str(e), 'traceback': traceback.format_exc()}), 500

# SEGURO: Log interno detallado, respuesta genérica al cliente
@app.errorhandler(500)
def server_error(e):
    app.logger.error(f"Internal error: {e}", exc_info=True)
    return jsonify({'error': 'Ha ocurrido un error interno. Por favor, inténtalo de nuevo.'}), 500
```

### A06 — Vulnerable and Outdated Components

Dependencias con vulnerabilidades conocidas.

```bash
# Node.js: Auditoría de dependencias
npm audit
npm audit fix

# Python: Verificar vulnerabilidades
pip install safety
safety check

# PHP: Verificar dependencias de Composer
composer audit

# Java: OWASP Dependency Check
mvn org.owasp:dependency-check-maven:check
```

**Proceso de gestión de dependencias:**
- Usa Dependabot (GitHub) o Renovate para actualizaciones automáticas de dependencias.
- Cada PR que actualiza una dependencia debe pasar los tests.
- Suscríbete a las alertas de seguridad de las dependencias críticas de tu proyecto.

### A07 — Identification and Authentication Failures

Autenticación débil, gestión de sesiones incorrecta.

```javascript
// Configuración segura de JWT
const token = jwt.sign(
  { userId: user.id, role: user.role },
  process.env.JWT_SECRET,  // Mínimo 256 bits de entropía
  {
    expiresIn: '1h',           // Tokens de corta vida
    algorithm: 'HS256',
    issuer: 'tu-app.com',
    audience: 'tu-app.com'
  }
);

// Invalidación de tokens en logout (requiere lista negra o token rotation)
// La lista negra en Redis es el patrón más eficiente
await redis.set(`blacklisted:${token}`, '1', 'EX', 3600);
```

**Checklist de autenticación segura:**
```
☐ Contraseñas almacenadas con bcrypt (rounds >= 12) o Argon2
☐ MFA disponible (y obligatorio para roles de admin)
☐ Límite de intentos de login con lockout temporal
☐ Tokens con expiración corta (< 1 hora para tokens de acceso)
☐ Refresh tokens con rotación (invalidar el token viejo al generar uno nuevo)
☐ Logout invalida el token en el servidor (no solo en el cliente)
☐ Recuperación de contraseña por email con token de un solo uso y expiración
```

### A08 — Software and Data Integrity Failures

Código o datos no verificados que se ejecutan o procesan.

```javascript
// VULNERABLE: Deserialización insegura
const data = JSON.parse(req.body.userData); // Si userData viene del cliente sin validación

// SEGURO: Validación estricta del schema
const schema = Joi.object({
  name: Joi.string().max(100).required(),
  email: Joi.string().email().required(),
  age: Joi.number().integer().min(18).max(120)
});
const { error, value } = schema.validate(req.body);
if (error) return res.status(400).json({ error: error.details[0].message });
```

### A09 — Security Logging and Monitoring Failures

Sin logs de seguridad, no puedes detectar ataques activos ni investigar incidentes.

**Eventos que siempre deben registrarse:**
```python
# Eventos de seguridad a loggear
security_events = [
    'user_login_success',
    'user_login_failure',
    'user_logout',
    'password_reset_requested',
    'password_changed',
    'admin_action',
    'permission_denied',
    'rate_limit_exceeded',
    'suspicious_activity_detected',
]

# Cada log debe incluir: timestamp, IP, user_id (si autenticado), acción, resultado
logger.warning('login_failure', extra={
    'ip': request.remote_addr,
    'email': email,
    'user_agent': request.user_agent.string,
    'timestamp': datetime.utcnow().isoformat(),
})
```

### A10 — Server-Side Request Forgery (SSRF)

El servidor hace requests a URLs controladas por el atacante, exponiendo servicios internos.

```python
# VULNERABLE: El servidor hace una request a una URL proporcionada por el usuario
url = request.args.get('url')
response = requests.get(url)  # Un atacante puede pasar http://169.254.169.254/latest/meta-data/

# SEGURO: Whitelist de dominios permitidos + bloqueo de IPs privadas
ALLOWED_DOMAINS = {'api.ejemplo.com', 'cdn.ejemplo.com'}
parsed = urlparse(url)
if parsed.netloc not in ALLOWED_DOMAINS:
    abort(400, 'URL no permitida')
```

---

## El checklist de seguridad pre-despliegue

```
AUTENTICACIÓN Y AUTORIZACIÓN
☐ Todos los endpoints verifican autenticación (excepto los que deben ser públicos)
☐ Todos los endpoints verifican autorización (el usuario tiene acceso a este recurso)
☐ No hay endpoints de admin accesibles sin verificación de rol

DATOS
☐ Inputs validados y sanitizados antes de usarse en queries o comandos
☐ Prepared statements en todas las queries SQL
☐ Contraseñas almacenadas con bcrypt/Argon2

CONFIGURACIÓN
☐ Headers de seguridad HTTP configurados
☐ Mensajes de error genéricos en producción
☐ Variables de entorno para secretos (no hardcoded en el código)
☐ .env no está en el repositorio (.gitignore)

DEPENDENCIAS
☐ npm audit / pip safety / composer audit sin vulnerabilidades críticas
☐ Dependencias actualizadas en los últimos 30 días

LOGS
☐ Eventos de autenticación registrados
☐ Errores de autorización registrados
☐ No se loggean datos sensibles (passwords, tokens, datos de tarjeta)
```

Cuéntame el stack de tu aplicación y el tipo de datos que maneja: identificamos las vulnerabilidades más probables y los cambios de código prioritarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'seguridad web, OWASP Top 10, SQL injection, XSS, vulnerabilidades aplicaciones, AppSec, código seguro',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño responsivo avanzado: container queries, fluid layouts y patrones más allá del mobile-first básico',
                'description'       => 'Domina las técnicas avanzadas de diseño responsivo que van más allá del breakpoint clásico, incluyendo container queries para componentes verdaderamente adaptativos, tipografía fluida con clamp(), layouts intrínsecos con CSS Grid y las nuevas propiedades que cambian cómo pensamos el diseño adaptativo.',
                'prompt_content'    => <<<'PROMPT'
Eres un desarrollador frontend especializado en CSS avanzado y diseño de sistemas que ha implementado interfaces adaptativas en productos con decenas de componentes reutilizables que deben funcionar correctamente en cualquier contexto de contenedor, no solo en breakpoints de viewport fijos. Sabes que el mobile-first con media queries es el punto de partida, no el destino, y que las técnicas modernas de CSS permiten crear interfaces verdaderamente fluidas que se adaptan al contexto local del componente, no solo al tamaño de la pantalla.

**Contexto de mi proyecto:**
- Tipo de proyecto: [design system / web app / e-commerce / sitio corporativo]
- El problema de responsividad que quiero resolver: [componentes que se rompen en ciertos contextos / tipografía que no escala bien / layout que requiere demasiados breakpoints]
- Soporte de navegadores requerido: [modern browsers / IE11 incluido / solo Chrome]
- Framework CSS: [CSS puro / Tailwind / SCSS / CSS Modules / styled-components]

---

## Técnica 1 — Container Queries: el componente que responde a su contenedor, no al viewport

El problema con las media queries clásicas es que responden al tamaño del viewport, no al tamaño del contenedor donde vive el componente. Una tarjeta de producto puede estar en una columna ancha o en una estrecha, y con media queries no puedes distinguir ese contexto.

**Container Queries resuelven esto:**

```css
/* Define el contenedor de referencia */
.card-grid {
  container-type: inline-size;
  container-name: card-grid;
}

/* El componente responde al tamaño de su contenedor, no del viewport */
.product-card {
  display: flex;
  flex-direction: column; /* Layout vertical por defecto (contenedor estrecho) */
}

@container card-grid (min-width: 400px) {
  .product-card {
    flex-direction: row; /* Layout horizontal cuando el contenedor tiene espacio */
    gap: 1rem;
  }

  .product-card__image {
    width: 40%;
    flex-shrink: 0;
  }
}

@container card-grid (min-width: 700px) {
  .product-card {
    /* Layout más espacioso en contenedores muy anchos */
    gap: 2rem;
    padding: 2rem;
  }
}
```

**El poder real:** Ahora el mismo componente `.product-card` funciona correctamente tanto en una sidebar estrecha como en una grid de contenido ancha, sin que el desarrollador tenga que crear variantes del componente ni usar clases condicionales en JavaScript.

**Soporte de navegadores:** Container queries son compatibles con Chrome 105+, Firefox 110+, Safari 16+. Cobertura global > 90% en 2024.

---

## Técnica 2 — Tipografía Fluida con clamp()

El problema del responsive tradicional: defines la tipografía en breakpoints fijos y el texto hace "saltos" entre tamaños.

La tipografía fluida escala de forma continua entre un mínimo y un máximo según el ancho del viewport.

**La función clamp():**
```css
/* Sintaxis: clamp(mínimo, valor-ideal-fluido, máximo) */
font-size: clamp(1rem, 2.5vw, 2rem);
/*                 ↑           ↑       ↑
                16px    fluido entre    32px
                mínimo  viewport        máximo
```

**La fórmula para calcular el valor fluido:**
```
valor-fluido = valor-mínimo + (valor-máximo - valor-mínimo) × ((100vw - viewport-mínimo) / (viewport-máximo - viewport-mínimo))
```

**Sistema de tipografía fluida completo:**
```css
:root {
  --text-xs:   clamp(0.75rem,  0.7rem + 0.25vw,  0.875rem);  /* 12px → 14px */
  --text-sm:   clamp(0.875rem, 0.8rem + 0.375vw, 1rem);       /* 14px → 16px */
  --text-base: clamp(1rem,     0.95rem + 0.25vw, 1.125rem);   /* 16px → 18px */
  --text-lg:   clamp(1.125rem, 1rem + 0.625vw,   1.5rem);     /* 18px → 24px */
  --text-xl:   clamp(1.25rem,  1.1rem + 0.75vw,  1.875rem);   /* 20px → 30px */
  --text-2xl:  clamp(1.5rem,   1.2rem + 1.5vw,   2.25rem);    /* 24px → 36px */
  --text-3xl:  clamp(1.875rem, 1.4rem + 2.375vw, 3rem);       /* 30px → 48px */
  --text-4xl:  clamp(2.25rem,  1.6rem + 3.25vw,  3.75rem);    /* 36px → 60px */
}

/* Uso */
h1 { font-size: var(--text-4xl); }
h2 { font-size: var(--text-3xl); }
p  { font-size: var(--text-base); }
```

**Herramienta para calcular clamp() fácilmente:** https://clamp.font-size.app/

---

## Técnica 3 — Layouts intrínsecos con CSS Grid

El diseño intrínseco significa que el layout se adapta al contenido disponible, sin breakpoints explícitos.

### Auto-fill / Auto-fit con minmax()

```css
/* Grid que crea columnas automáticamente según el espacio disponible */
.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(min(100%, 300px), 1fr));
  gap: 1.5rem;
}

/*
  auto-fill: crea todas las columnas que quepan
  minmax(min(100%, 300px), 1fr):
    → Cada columna tiene mínimo 300px (o el 100% si el contenedor es menor)
    → Máximo 1fr (distribuye el espacio restante)

  Resultado: en un viewport de 400px → 1 columna
             en un viewport de 700px → 2 columnas
             en un viewport de 1000px → 3 columnas
  Sin una sola media query.
*/
```

### Layouts asimétricos con named grid areas

```css
.page-layout {
  display: grid;
  grid-template-areas:
    "header header"
    "sidebar content"
    "footer footer";
  grid-template-columns: 280px 1fr;
  grid-template-rows: auto 1fr auto;
  min-height: 100dvh;
}

/* En mobile, cambia el layout sin tocar el HTML */
@media (max-width: 768px) {
  .page-layout {
    grid-template-areas:
      "header"
      "content"
      "sidebar"
      "footer";
    grid-template-columns: 1fr;
  }
}

header  { grid-area: header;  }
.sidebar { grid-area: sidebar; }
main    { grid-area: content; }
footer  { grid-area: footer;  }
```

---

## Técnica 4 — Espaciado fluido con tokens dinámicos

En lugar de definir el espaciado en breakpoints fijos, usa tokens que escalan con el viewport:

```css
:root {
  --space-xs:  clamp(0.25rem, 0.5vw,  0.5rem);
  --space-sm:  clamp(0.5rem,  1vw,    1rem);
  --space-md:  clamp(1rem,    2vw,    2rem);
  --space-lg:  clamp(1.5rem,  3vw,    3rem);
  --space-xl:  clamp(2rem,    5vw,    5rem);
  --space-2xl: clamp(3rem,    8vw,    8rem);
}

/* Uso en componentes */
.section {
  padding: var(--space-xl) var(--space-md);
}

.card {
  padding: var(--space-md);
  gap: var(--space-sm);
}
```

---

## Técnica 5 — Las nuevas unidades de viewport para el mobile moderno

El problema de 100vh en mobile: la barra del navegador reduce el viewport disponible, creando contenido cortado.

```css
/* Unidades de viewport modernas (Chrome 108+, Safari 15.4+, Firefox 101+) */

/* dvh: dynamic viewport height — se adapta cuando aparece/desaparece la barra del navegador */
.hero {
  min-height: 100dvh; /* Reemplaza 100vh en la mayoría de los casos */
}

/* svh: smallest viewport height — siempre el viewport más pequeño (con barra visible) */
.modal {
  max-height: 90svh;
}

/* lvh: largest viewport height — siempre el viewport más grande (sin barra) */
.fullscreen {
  height: 100lvh;
}

/* dvw, svw, lvw: equivalentes para width */
```

---

## Técnica 6 — Logical Properties para internacionalización

Si tu app puede estar en idiomas RTL (árabe, hebreo), usar propiedades físicas (left, right, margin-left) romperá el layout.

```css
/* FÍSICO (no internacionalizable) */
.card {
  margin-left: 1rem;
  padding-left: 1.5rem;
  border-left: 2px solid var(--color-brand);
  text-align: left;
}

/* LÓGICO (funciona en LTR y RTL automáticamente) */
.card {
  margin-inline-start: 1rem;    /* = margin-left en LTR, margin-right en RTL */
  padding-inline-start: 1.5rem;
  border-inline-start: 2px solid var(--color-brand);
  text-align: start;
}
```

**Mapa de propiedades lógicas:**
| Física | Lógica |
|---|---|
| `margin-left` / `margin-right` | `margin-inline-start` / `margin-inline-end` |
| `padding-top` / `padding-bottom` | `padding-block-start` / `padding-block-end` |
| `width` / `height` | `inline-size` / `block-size` |
| `top` / `bottom` | `inset-block-start` / `inset-block-end` |
| `border-radius` (top-left) | `border-start-start-radius` |

---

## Checklist de responsividad avanzada

```
LAYOUT
☐ Los layouts usan auto-fill/auto-fit en lugar de breakpoints para grids repetitivos
☐ Componentes reutilizables usan container queries en lugar de media queries cuando están
  diseñados para aparecer en contextos de ancho variable

TIPOGRAFÍA
☐ Los tamaños de fuente usan clamp() para escala fluida
☐ El espaciado usa tokens fluidos, no valores fijos en cada breakpoint

VIEWPORT UNITS
☐ Se usa 100dvh en lugar de 100vh para elementos de pantalla completa
☐ Se evita el overflow horizontal en todos los tamaños de pantalla

INTERNACIONALIZACIÓN
☐ Se usan propiedades lógicas si hay planes de soporte RTL

PRUEBAS
☐ Se ha probado en dispositivos reales (no solo Chrome DevTools)
☐ Se ha probado redimensionando el viewport de forma continua (no solo en breakpoints)
☐ Se ha verificado que el texto no se corta ni se desborda en ningún tamaño
```

Cuéntame el componente o layout concreto que quieres mejorar y te genero el CSS moderno completo con las técnicas más adecuadas para tu caso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'diseño responsivo, container queries, tipografía fluida, CSS Grid, clamp, responsive design avanzado',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Forecast de ventas: predice el revenue mensual con el pipeline ponderado y los datos históricos',
                'description'       => 'Aprende a construir un forecast de ventas preciso usando el método del pipeline ponderado por etapa, los datos históricos de conversión y los factores de ajuste que los mejores equipos comerciales usan para que sus previsiones se desvíen menos del 10% del resultado real.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Sales con experiencia liderando equipos comerciales B2B en empresas con ciclos de venta de 30 a 180 días. Has construido modelos de forecast en CRMs como Salesforce, HubSpot y Pipedrive, y has aprendido que el forecast es una disciplina que combina datos históricos con el juicio del vendedor. Los dos errores más frecuentes: un optimismo sistémico del equipo comercial (siempre sobreestima) y una dependencia excesiva en las tasas de conversión históricas sin ajustar por la calidad del pipeline actual.

**Contexto de mi equipo:**
- Número de comerciales: [N]
- Ticket medio de venta: [importe]
- Ciclo de venta promedio: [días desde primer contacto hasta cierre]
- CRM que usas: [Salesforce / HubSpot / Pipedrive / otro / Excel]
- Etapas del pipeline definidas: [lista las etapas que usas]
- El mayor problema con el forecast actual: [demasiado optimista / no hay proceso formal / los comerciales no actualizan el CRM / los datos históricos no son fiables]

---

## Los tres métodos de forecast — Cuándo usar cada uno

### Método 1 — Pipeline ponderado (el más usado)
Multiplica el valor de cada oportunidad por la probabilidad de cierre de la etapa en que se encuentra.

**Requiere:** Tasas de conversión históricas por etapa (de los últimos 6-12 meses mínimo).

### Método 2 — Forecast por categoría (el juicio del vendedor)
Cada vendedor clasifica sus oportunidades en categorías: Commit (casi seguro), Best Case (optimista), Pipeline (posible). El manager agrega y ajusta.

**Requiere:** Disciplina del equipo para clasificar honestamente.

### Método 3 — Forecast basado en datos históricos de cohorte
Analiza las oportunidades que entraron al pipeline en el mismo período del año anterior y calcula cuántas cerraron.

**Requiere:** Historial de datos limpio en el CRM de al menos 12 meses.

**Recomendación:** Usa los tres métodos en paralelo. Si los tres apuntan a una cifra similar, el forecast es robusto. Si divergen mucho, hay un problema en los datos o en las asunciones.

---

## El método del pipeline ponderado — Paso a paso

### Paso 1 — Define las etapas y sus probabilidades históricas

Analiza los últimos 12 meses de datos en el CRM y calcula qué porcentaje de las oportunidades que llegaron a cada etapa terminaron en cierre (won):

```
ETAPA             | Prob. histórica de cierre | Ejemplo de valor pipeline
------------------+---------------------------+--------------------------
Prospección       | 5-10%                     | 50.000€ × 8% = 4.000€
Calificado (MQL)  | 15-25%                    | 30.000€ × 20% = 6.000€
Demo realizada    | 25-40%                    | 40.000€ × 35% = 14.000€
Propuesta enviada | 40-60%                    | 25.000€ × 50% = 12.500€
Negociación       | 65-80%                    | 20.000€ × 75% = 15.000€
Commit (verbal)   | 85-95%                    | 15.000€ × 90% = 13.500€
------------------+---------------------------+--------------------------
FORECAST TOTAL                                              65.000€
```

**La fórmula:**
```
Forecast = Σ (Valor de oportunidad × Probabilidad de cierre de su etapa)
```

### Paso 2 — Segmenta el forecast por período de cierre

No todas las oportunidades en el pipeline cierran este mes. Filtra por la fecha de cierre esperada:

```
Pipeline total: 500.000€ weighted
Cierre esperado este mes: 65.000€ weighted
Cierre esperado próximo mes: 120.000€ weighted
Cierre esperado en Q2: 315.000€ weighted
```

### Paso 3 — Aplica los factores de ajuste (el juicio del manager)

Las tasas históricas son el punto de partida, no la respuesta final. El manager debe ajustar por:

**Factor de ajuste positivo (sube el forecast):**
- El contacto principal es un champion fuerte con presupuesto ya aprobado.
- El cliente ha dado señales de urgencia (deadline externo, problema que empeora).
- La demo fue especialmente bien y el cliente pidió referencias de forma proactiva.
- El competidor principal fue eliminado en la evaluación.

**Factor de ajuste negativo (baja el forecast):**
- El contacto principal ha cambiado (riesgo de empezar el proceso de nuevo).
- La oportunidad lleva más tiempo del promedio en la etapa actual (deal estancado).
- El cliente no responde con la frecuencia habitual en esta etapa.
- El presupuesto no estaba aprobado cuando se hizo la propuesta.

**La escala de ajuste del manager:**
```
+20% → Deal excepcionalmente fuerte con señales muy positivas
+10% → Deal sólido con algunas señales positivas por encima de lo normal
0%   → Deal promedio para esta etapa
-10% → Deal con algunas señales de riesgo
-20% → Deal con riesgo significativo — puede no cerrar este período
-100% → Deal muerto (muévelo a Lost en el CRM)
```

---

## El forecast por categoría — El método de Salesforce

Cada vendedor clasifica cada oportunidad en una de estas categorías al hacer su forecast semanal:

```
COMMIT:     "Este deal cierra este mes. Si no cierra, fue algo completamente imprevisto."
            → El manager puede contar el 90-95% de este importe.

BEST CASE:  "Puede cerrar este mes si todo va bien, pero hay riesgo."
            → El manager puede contar el 50-60% de este importe.

PIPELINE:   "Está en el pipeline para este trimestre pero no necesariamente este mes."
            → El manager puede contar el 20-30% de este importe.

OMIT:       "No cuentes con esto para el período actual."
            → No incluir en el forecast del período.
```

**La reunión semanal de forecast (el 1:1 con cada vendedor):**
```
¿Cuáles son tus Commits para este mes? (El vendedor los nomina uno a uno)
Para cada Commit:
  → ¿Cuál es el próximo paso acordado con el cliente y cuándo?
  → ¿El decisor final está alineado?
  → ¿Hay algún riesgo que no habías mencionado?

¿Qué hay en Best Case que podría pasar a Commit en los próximos 7 días?
```

---

## Las métricas que hacen el forecast más preciso con el tiempo

| Métrica | Fórmula | Por qué importa |
|---|---|---|
| Forecast accuracy | (Revenue real / Forecast) × 100 | El KPI principal del proceso de forecast |
| Win rate por etapa | Won / (Won + Lost) para cada etapa | Calibra las probabilidades |
| Ciclo de venta medio | Días desde oportunidad creada hasta cierre | Identifica deals estancados |
| Deal velocity | (Nº de deals × Win rate × Ticket medio) / Ciclo de venta | Revenue por día del pipeline |
| Pipeline coverage | Pipeline total / Objetivo de revenue | ¿Tienes suficiente pipeline para alcanzar el objetivo? |

**La regla del Pipeline Coverage:**
Para un ciclo de venta de 30-60 días necesitas 3-4× el objetivo en pipeline.
Para un ciclo de 90-180 días necesitas 4-6× el objetivo.

---

## El proceso de forecast semanal — El ritual que lo hace funcionar

```
LUNES — Actualización del CRM (cada comercial, 30 min)
  → Actualizar el estado de cada oportunidad activa
  → Mover a Lost las que están muertas (es información valiosa, no un fracaso)
  → Registrar el siguiente paso acordado con fecha para cada deal activo

MARTES — 1:1 de forecast con cada comercial (manager, 20 min por vendedor)
  → Revisar Commits y Best Cases
  → Identificar deals estancados y plan de acción
  → Actualizar el forecast individual

MIÉRCOLES — Forecast consolidado del equipo (manager, 45 min)
  → Agregar todos los forecasts individuales
  → Aplicar ajustes del manager
  → Calcular el gap vs. el objetivo y el plan para cubrirlo

VIERNES — Revisión de actividad de la semana (equipo, 15 min)
  → ¿Qué deals avanzaron?
  → ¿Qué deals se estancaron o murieron?
  → ¿Qué aprendemos para la semana siguiente?
```

---

## El modelo de forecast en Excel / Google Sheets

Para equipos sin CRM sofisticado, este modelo en hoja de cálculo replica el pipeline ponderado:

```
Columnas:
A: Nombre del deal
B: Empresa
C: Valor total (€)
D: Etapa (lista desplegable)
E: Probabilidad según etapa (VLOOKUP a tabla de tasas históricas)
F: Ajuste del manager (%)
G: Probabilidad ajustada (E × (1 + F))
H: Valor ponderado (C × G)
I: Fecha de cierre esperada
J: Mes de cierre (extraído de I)
K: Comercial responsable
L: Notas / próximo paso

Tabla de tasas históricas (hoja separada):
Etapa | Probabilidad base
Prospección | 8%
Calificado | 20%
Demo | 35%
Propuesta | 50%
Negociación | 75%
Commit | 90%

Resumen por mes (tabla dinámica o SUMIFS):
Mes | Forecast weighted | Commits | Objetivo | Gap
```

Cuéntame las etapas de tu pipeline y los datos históricos que tienes disponibles: construimos el modelo de forecast específico para tu ciclo de venta y tipo de equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'forecast ventas, pipeline ponderado, previsión revenue, sales forecasting, métricas ventas B2B',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Jobs to be Done (JTBD): el framework que revela por qué los usuarios realmente contratan tu producto',
                'description'       => 'Aprende a aplicar el framework Jobs to be Done para descubrir la motivación real detrás del uso de tu producto, con las técnicas de entrevista, el mapa de jobs y cómo traducir los hallazgos en decisiones de producto y mensajes de marketing que conectan con el verdadero problema del usuario.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Researcher con experiencia aplicando el framework Jobs to be Done en startups y empresas de software, habiendo realizado más de 300 entrevistas de usuario usando la metodología de Clayton Christensen y Bob Moesta. Sabes que el JTBD no es solo una técnica de investigación: es una forma diferente de entender por qué los usuarios compran y usan productos, que lleva a mejores decisiones de producto, mejores mensajes de marketing y una comprensión más profunda de la competencia real (que no siempre es el competidor obvio).

**Contexto de mi producto:**
- Tipo de producto: [SaaS / app de consumo / marketplace / herramienta de productividad]
- El comportamiento que quiero entender: [por qué los usuarios se registran y no activan / por qué hacen upgrade / por qué se van / por qué compran]
- Investigación previa realizada: [ninguna / encuestas / entrevistas sin estructura / análisis de datos de uso]

---

## Qué es un Job to be Done — La idea central

La premisa del JTBD: Los usuarios no compran productos. **Contratan** productos para ayudarles a hacer un progreso en su vida hacia un objetivo que tienen.**

La famosa frase de Christensen: "La gente no compra un taladro porque quiere un taladro. Lo compra porque quiere un agujero en la pared. Y no quiere el agujero por sí mismo, lo quiere para colgar un cuadro. Y quiere colgar el cuadro para que la casa se vea bien. Y quiere que la casa se vea bien para que los invitados se sientan bienvenidos."

**El job tiene tres dimensiones:**

1. **Functional job** (lo funcional): "Quiero organizar mis tareas pendientes."
2. **Emotional job** (lo emocional): "Quiero sentirme en control y no ansioso."
3. **Social job** (lo social): "Quiero que mi equipo me vea como alguien organizado y confiable."

El error más frecuente en product management: diseñar solo para el functional job e ignorar el emotional y el social, que frecuentemente son los determinantes reales de la decisión de compra.

---

## La entrevista de compra (Switch Interview) — La técnica central del JTBD

La Switch Interview reconstruye la historia de cómo el usuario llegó a adoptar (o dejar) un producto. No pregunta opiniones. Reconstruye hechos, momentos y emociones en orden cronológico.

### Los 4 momentos del "Switch" que quieres reconstruir:

```
MOMENTO 1 — First thought (El primer pensamiento)
"¿Cuándo fue la primera vez que pensaste que necesitabas una solución para [problema]?"
→ Reconstruye el contexto de vida que creó la necesidad.

MOMENTO 2 — Passive looking (La búsqueda pasiva)
"¿Qué pasó entre ese primer pensamiento y cuando empezaste a buscar activamente?"
→ Identifica qué events pusieron la búsqueda en pausa y qué la reactivó.

MOMENTO 3 — Active decision (La decisión activa)
"¿Qué fue lo que te hizo empezar a buscar activamente soluciones?"
→ El "event de ruptura" — el momento en que el dolor fue suficientemente grande.

MOMENTO 4 — First use (El primer uso)
"¿Cuéntame cómo fue tu primer día/semana usando [producto]?"
→ El momento aha — o la ausencia de él.
```

### El guión completo de la Switch Interview (60-90 minutos):

**Apertura:**
"Quiero entender cómo llegaste a usar [producto]. Me interesa la historia completa, desde mucho antes de que empezaras a buscarlo. No hay respuestas correctas o incorrectas. Yo haré preguntas para entender mejor, pero tú eres el experto en tu propia experiencia."

**Bloque 1 — El contexto de la situación:**
```
"Antes de que empezaras a usar [producto], ¿qué estabas usando para [hacer el trabajo]?"
"¿Qué es lo que no funcionaba de esa solución anterior?"
"¿Hace cuánto tiempo llevabas con ese problema?"
"¿Puedes contarme un momento específico en que ese problema te afectó especialmente?"
```

**Bloque 2 — El evento de ruptura:**
```
"¿Qué fue lo que te hizo decidir que era el momento de buscar algo diferente?"
"¿Estabas solo en esa decisión o había otras personas involucradas?"
"¿Hubo algo que cambió en tu situación — en tu trabajo, en tu equipo, en tu vida — que hizo que el problema fuera más urgente?"
```

**Bloque 3 — La búsqueda de alternativas:**
```
"¿Cómo empezaste a buscar? ¿Qué buscaste en Google / preguntaste a colegas / leíste?"
"¿Qué otras opciones consideraste además de [producto]?"
"¿Por qué las descartaste?"
```

**Bloque 4 — La decisión:**
```
"¿Cuándo decidiste que [producto] era la opción?"
"¿Hubo algún momento de duda? ¿Qué te preocupaba?"
"¿Cómo tomaste la decisión final? ¿Solo / con tu equipo / con tu jefe?"
"¿Qué fue lo que te convenció?"
```

**Bloque 5 — El primer uso:**
```
"¿Recuerdas el primer día/semana que lo usaste? ¿Cómo fue?"
"¿Hubo algún momento en que pensaste 'esto es exactamente lo que necesitaba'?"
"¿Hubo algo que te sorprendió (positiva o negativamente)?"
```

**Cierre:**
```
"¿Hay algo más que sientas que es importante que entienda sobre por qué decidiste [producto]?"
"¿Cómo describirías [producto] a un colega que tiene el mismo problema que tú tenías?"
```

---

## El análisis de las entrevistas — Extrayendo el Job Statement

Después de realizar 5-8 entrevistas de compra, empieza a ver patrones. El Job Statement sintetiza el job de forma accionable.

**La estructura del Job Statement:**
```
Cuando [situación de contexto],
quiero [motivación — el progreso que busca],
para poder [resultado esperado — funcional, emocional o social].
```

**Ejemplos de Job Statements reales:**

```
Para una app de gestión de tareas personal:
"Cuando tengo la cabeza llena de cosas pendientes al final del día,
quiero sacarlas todas a un lugar externo de confianza,
para poder desconectar sin miedo de olvidar algo importante."

Para un SaaS de facturación para freelancers:
"Cuando termino un proyecto con un cliente nuevo y tengo que cobrar,
quiero crear y enviar una factura profesional en menos de 5 minutos,
para no parecer poco profesional y cobrar cuanto antes."

Para una herramienta de análisis de datos:
"Cuando mi manager me pide datos para la reunión de dirección de mañana,
quiero encontrar y presentar los números correctos sin depender del equipo de datos,
para no quedar mal en una reunión importante por falta de información."
```

---

## Las implicaciones del JTBD en decisiones de producto y marketing

### En producto — El job define la prioridad de features

```
Si el job es "sentirme en control sin ansiedad":
  → Las features de recordatorios y notificaciones son más importantes que las de reporting.
  → El onboarding debe generar sensación de control desde la primera sesión.
  → La friction en el primer uso puede ser fatal — si el usuario no siente el alivio rápido, se va.

Si el job es "no quedar mal en una reunión importante":
  → La velocidad de obtención del dato es más importante que la profundidad del análisis.
  → Las plantillas de presentación son tan importantes como el análisis en sí.
  → La confiabilidad del dato (correcto, actualizado) es no-negociable.
```

### En marketing — El job define el mensaje

```
ANTES DEL JTBD (messaging basado en features):
"[Producto]: el gestor de tareas con IA que sincroniza todos tus dispositivos."

DESPUÉS DEL JTBD (messaging basado en el job):
"Termina el día con la mente en paz. Todo lo que tienes que hacer está en [Producto],
no en tu cabeza."
```

### En competencia — El JTBD redefine quiénes son tus competidores reales

```
Si el job es "vaciar la cabeza y desconectar sin ansiedad":
  Tus competidores NO son solo otras apps de tareas.
  Tus competidores reales también son:
  → Libretas de papel (que mucha gente prefiere por la sensación táctil)
  → El email propio como lista de tareas (hábito muy arraigado)
  → El "lo guardo en la memoria" (que genera la ansiedad que tú resuelves)
```

---

## El mapa de Jobs — Visualizar todo el sistema

Un mapa de Jobs organiza todos los jobs que tus usuarios tienen en torno al use case de tu producto:

```
JOB PRINCIPAL (core job):
→ [El job central que tu producto resuelve]

JOBS RELACIONADOS (related jobs — oportunidades de expansión):
→ Jobs que el usuario tiene antes de usar tu producto
→ Jobs que el usuario tiene mientras usa tu producto
→ Jobs que el usuario tiene después de usar tu producto

JOBS EMOCIONALES Y SOCIALES (el iceberg):
→ Sentirse [emoción] cuando [situación]
→ Parecer [percepción] ante [audiencia]
```

Cuéntame el comportamiento de usuario que quieres entender: diseñamos el guión de entrevista específico y el plan de investigación para tus próximas 6-8 entrevistas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Jobs to be Done, JTBD, investigación usuario, entrevistas producto, product discovery, user research',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del conflicto en equipos: cómo mediar y resolver disputas interpersonales antes de que destruyan la dinámica',
                'description'       => 'Aprende el proceso de mediación de conflictos entre miembros del equipo con el framework que convierte una disputa interpersonal en un acuerdo de trabajo, con las conversaciones estructura, los errores que empeoran el conflicto y los indicadores tempranos que tienes que detectar antes de que explote.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of People y coach de equipos con certificación en mediación de conflictos laborales, con experiencia gestionando disputas en equipos de tecnología, consultoría y startups. Sabes que el 70% de los conflictos en equipos de trabajo no se resuelven solos — se cronifican, se enquistan y terminan con la salida de uno o varios miembros del equipo. Y que intervenir demasiado tarde tiene un coste 10 veces mayor que intervenir en los primeros síntomas.

**Contexto de mi situación:**
- El tipo de conflicto: [conflicto de trabajo (cómo hacer las cosas) / conflicto de relación (tensión interpersonal) / conflicto de rol (confusión sobre responsabilidades) / conflicto de valores]
- Las personas involucradas: [describe los perfiles, sin nombres]
- Cuánto tiempo lleva el conflicto: [semanas / meses]
- El impacto en el equipo: [reuniones tensas / comunicación reducida / otros miembros del equipo afectados / baja de productividad]
- Tu rol: [manager directo / RRHH / líder del equipo / par de los implicados]

---

## Los 4 tipos de conflicto — Por qué importa identificar el tipo antes de intervenir

| Tipo | Descripción | Intervención correcta |
|---|---|---|
| Conflicto de tarea | Desacuerdo sobre cómo hacer el trabajo, qué priorizar, qué es correcto | Puede ser saludable — media para llegar a un acuerdo técnico |
| Conflicto de proceso | Desacuerdo sobre quién hace qué y cómo se toman decisiones | Clarifica roles y procesos — no es personal |
| Conflicto de relación | Tensión interpersonal, desconfianza, comunicación degradada | Requiere mediación interpersonal antes que cualquier acuerdo técnico |
| Conflicto de valores | Diferencias fundamentales en cómo abordar el trabajo, la ética o el propósito | El más difícil — a veces la solución es la separación |

**El error más frecuente del manager:** Tratar un conflicto de relación como si fuera un conflicto de tarea. "Decidamos quién tiene razón técnicamente" no resuelve una relación deteriorada.

---

## Las señales tempranas de conflicto — Intervén antes del punto de ruptura

**Señales de alerta nivel 1 (intervención suave):**
- Dos personas que habitualmente colaboraban bien evitan trabajar juntas.
- Cambio en la dinámica de las reuniones: uno calla cuando habla el otro, o hay tensión evidente.
- Mensajes de Slack/Teams más escuetos o formales de lo habitual entre dos personas.
- Quejas indirectas a terceros ("Pablo siempre hace X", dicho a un compañero).

**Señales de alerta nivel 2 (intervención media):**
- Quejas directas al manager sobre el otro.
- Proyectos compartidos que se estancan por falta de coordinación.
- Otros miembros del equipo empiezan a posicionarse de un lado.
- Ausencias o retrasos que coinciden con eventos donde ambos están.

**Señales de alerta nivel 3 (intervención urgente):**
- Confrontación directa en reuniones o canales de comunicación.
- Un miembro del equipo expresa que no puede trabajar con el otro.
- El conflicto está afectando a la productividad de todo el equipo.
- Uno o ambos han insinuado que considerarían irse si la situación no cambia.

---

## El proceso de mediación en 5 pasos

### Paso 1 — Conversaciones individuales (antes de cualquier reunión conjunta)

Antes de juntar a las dos personas, habla con cada una por separado. La reunión conjunta fracasa si no tienes el contexto previo de ambas perspectivas.

**Preguntas para la conversación individual:**
```
"Antes de que hablemos del conflicto en sí, quiero entender tu perspectiva.
 ¿Puedes contarme qué es lo que ha pasado desde tu punto de vista?"
 [Escucha sin interrumpir ni juzgar]

"¿Qué necesidades tuyas sientes que no están siendo respetadas en esta situación?"

"¿Qué impacto está teniendo este conflicto en tu trabajo y en tu bienestar?"

"¿Qué crees que necesitaría pasar para que esta situación mejorara?"

"¿Cómo crees que la otra persona vive esta situación?"
 [Esta pregunta mide la capacidad de empatía de cada parte]
```

**Qué buscas en la conversación individual:**
- Los intereses reales detrás de las posiciones (lo que realmente necesitan, no solo lo que piden).
- Si ambas partes están dispuestas a trabajar para resolver la situación.
- Si hay hechos concretos o si todo es interpretación y percepción.
- Las señales de que el conflicto es de valores (más difícil de resolver).

### Paso 2 — Diagnóstico: ¿es mediable?

No todos los conflictos son mediables. Evalúa:

**Señales de que SÍ es mediable:**
- Ambas partes quieren que la situación mejore.
- El conflicto es de tarea, proceso o relación (no de valores fundamentales).
- Ninguna parte ha cruzado líneas éticas o de conducta (acoso, discriminación — eso es un proceso disciplinario, no mediación).
- Hay historia de colaboración positiva entre las dos personas.

**Señales de que NO es mediable:**
- Una o ambas partes no quieren resolver la situación.
- Ha habido conductas inaceptables (acoso, amenazas, discriminación).
- El conflicto es de valores tan fundamentales que no hay terreno común.
- Una parte tiene poder sobre la otra (conflicto jefe-subordinado con abuso de autoridad).

### Paso 3 — La reunión de mediación conjunta

**Antes de empezar, establece las reglas:**
```
"Os pido que en esta conversación:
 1. Cada uno hable en primera persona ('yo siento', 'yo necesito') — no en segunda
    ('tú haces', 'tú siempre').
 2. Cuando alguien habla, el otro escucha sin interrumpir.
 3. El objetivo no es determinar quién tiene razón, sino entender qué necesita cada uno
    y cómo podemos trabajar bien juntos.
 4. Todo lo que se diga aquí queda entre nosotros tres."
```

**Estructura de la reunión (60-90 minutos):**

```
FASE 1 — Cada parte comparte su perspectiva (15-20 min)
  El mediador pide a cada persona que explique:
  → Cómo vive la situación
  → Qué impacto tiene en su trabajo
  → Qué necesita que cambie

  El mediador parafrasea después de cada intervención:
  "Si te entiendo bien, lo que estás diciendo es [X]. ¿Es correcto?"

FASE 2 — Identificación de los intereses comunes (15-20 min)
  "Si os escucho a los dos, veo que ambos queréis [X] y [Y].
   ¿Estáis de acuerdo en que eso es lo que queréis?"

  Buscar el terreno común antes de trabajar las diferencias.

FASE 3 — Generación de opciones (20-30 min)
  "¿Qué cambiaría en vuestra forma de trabajar si esto se resolviera bien?"
  "¿Qué podría hacer [Persona A] diferente que haría la situación más fácil para ti?"
  "¿Qué podrías hacer tú diferente que haría la situación más fácil para [Persona A]?"

FASE 4 — Acuerdo de trabajo (10-15 min)
  El mediador ayuda a las dos partes a llegar a acuerdos concretos:
  → ¿Cómo van a comunicarse de ahora en adelante?
  → ¿Qué harán cuando surja un desacuerdo?
  → ¿Cuándo van a revisar si los acuerdos están funcionando?
```

### Paso 4 — Documentar el acuerdo

Después de la reunión, el mediador envía un email a ambas partes con el resumen de los acuerdos alcanzados:

```
Asunto: Resumen de los acuerdos de nuestra conversación del [fecha]

Después de nuestra conversación de hoy, hemos llegado a los siguientes acuerdos:

1. [Acuerdo concreto 1 — qué, quién, cuándo]
2. [Acuerdo concreto 2]
3. [Acuerdo concreto 3]

Revisaremos cómo está funcionando en nuestra próxima conversación el [fecha].
Si alguno de los dos siente que algo no está funcionando antes, me lo comunicáis y lo hablamos.

Gracias a los dos por la apertura y el esfuerzo de hoy.
```

### Paso 5 — Seguimiento

La mediación no termina con la reunión conjunta. El 30% de los conflictos mediados vuelven a escalar si no hay seguimiento.

```
1 semana después: Conversación individual breve con cada parte
  → "¿Cómo están yendo las cosas desde nuestra reunión?"
  → "¿Hay algo que necesites ajustar?"

4 semanas después: Revisión conjunta (30 minutos)
  → ¿Se están cumpliendo los acuerdos?
  → ¿Hay algo que ajustar?
  → ¿La relación de trabajo ha mejorado?
```

---

## Los errores que empeoran el conflicto

```
❌ Evitar el conflicto esperando que se resuelva solo — casi nunca ocurre.
❌ Posicionarte de parte de una persona antes de escuchar a ambas.
❌ Juntar a las dos partes sin conversaciones individuales previas.
❌ Buscar quién tiene razón en lugar de qué necesita cada uno.
❌ Hacer acuerdos sin seguimiento — los acuerdos se cumplen cuando alguien los revisa.
❌ Hablar del conflicto con otras personas del equipo antes de que esté resuelto.
```

Cuéntame el tipo de conflicto y la dinámica específica de las personas involucradas: te diseño el plan de intervención y las preguntas concretas para cada conversación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'gestión conflictos equipo, mediación laboral, resolución conflictos, dinámica de equipo, RRHH, liderazgo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de rentabilidad por cliente y producto: descubre qué te genera dinero y qué te lo quita',
                'description'       => 'Aprende a calcular la rentabilidad real por cliente y por línea de producto aplicando la contabilidad de costes por actividad (ABC), el análisis de contribución marginal y el mapa de Pareto del revenue para tomar decisiones de precios, mix de producto y cartera de clientes basadas en datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO y consultor de gestión con experiencia ayudando a empresas de servicios, SaaS y manufactura a descubrir que el 20% de sus clientes y productos generan el 80% del beneficio real, y que otro 20% los destruye activamente. Sabes que la cuenta de resultados agregada miente: una empresa puede tener margen bruto positivo y estar perdiendo dinero en la mitad de sus clientes porque los costes reales de servirlos no están asignados correctamente.

**Contexto de mi empresa:**
- Sector y tipo de negocio: [servicios / SaaS / e-commerce / manufactura / distribución]
- Número de clientes activos: [N]
- Número de productos o líneas de servicio: [N]
- El sistema de gestión actual: [tengo datos en el ERP / solo en contabilidad / en Excel / no tengo datos detallados]
- El problema que intuyes: [algunos clientes nos generan mucho trabajo y pagan poco / algunos productos se venden bien pero no sabemos si son rentables / no sabemos dónde estamos ganando y perdiendo dinero de verdad]

---

## Por qué la rentabilidad agregada engaña

La cuenta de resultados típica muestra:
```
Revenue:         1.000.000 €
Coste de ventas:  (600.000 €)
Margen bruto:      400.000 €   → 40% de margen
Gastos generales: (350.000 €)
EBITDA:             50.000 €   → 5% de margen
```

Lo que no muestra:
```
Cliente A (100.000 € de revenue): Margen real = 60% → genera 60.000 € de beneficio
Cliente B (150.000 € de revenue): Margen real = 8%  → genera 12.000 € de beneficio
Cliente C (80.000 € de revenue):  Margen real = -5% → destruye 4.000 € de valor
```

Sin el análisis por cliente, tomarías la misma decisión para A, B y C. Con él, sabes que debes proteger a A, optimizar a B y redefinir la relación con C.

---

## Los 3 niveles de análisis de rentabilidad

### Nivel 1 — Contribución marginal por producto

La contribución marginal (CM) es el margen que queda después de restar los costes variables al revenue. Es el primer filtro para identificar productos que no deberían existir.

```
Fórmula:
CM = Revenue - Costes Variables Directos

Costes variables directos incluyen:
- Coste del producto (materiales, fabricación, coste del servicio prestado)
- Comisiones de venta
- Costes de transacción (payment processing, envío)
- Costes directos de soporte al cliente

Ejemplo para e-commerce con 3 productos:

Producto A:
  Precio de venta:     50 €
  Coste del producto: (20 €)
  Comisión vendedor:   (5 €)
  Envío:               (4 €)
  Payment processing:  (1,5 €)
  CM:                 19,5 €  → CM% = 39%

Producto B:
  Precio de venta:    120 €
  Coste del producto: (90 €)
  Comisión vendedor:  (12 €)
  Envío:              (6 €)
  Payment processing:  (3,6 €)
  CM:                  8,4 €  → CM% = 7%

Producto C:
  Precio de venta:     35 €
  Coste del producto: (10 €)
  Comisión vendedor:   (3,5 €)
  Envío:               (4 €)
  Payment processing:  (1,05 €)
  CM:                 16,45 € → CM% = 47%
```

**Conclusión inmediata:** El Producto B tiene CM del 7%. Antes de cualquier gasto de marketing, estructura o soporte, ya estás ganando muy poco. Necesitas subir el precio, bajar el coste o discontinuarlo.

### Nivel 2 — Costes de atención por cliente (Activity-Based Costing simplificado)

El ABC asigna los costes indirectos (soporte, account management, onboarding, facturación) a los clientes que los consumen, en lugar de distribuirlos uniformemente.

**El proceso simplificado:**

**Paso 1:** Identifica las actividades de coste que varían por cliente:
```
Actividad                | Coste mensual del equipo | Driver de coste
-------------------------|--------------------------|----------------
Soporte técnico          | 15.000 €/mes            | Tickets por cliente
Account management       | 10.000 €/mes            | Horas por cliente
Facturación y cobro      | 3.000 €/mes             | Facturas por cliente
Onboarding y formación   | 5.000 €/mes             | Horas por cliente nuevo
```

**Paso 2:** Calcula el coste por unidad de actividad:
```
Soporte: 15.000 € / 500 tickets al mes = 30 € por ticket
Account mgmt: 10.000 € / 200 horas = 50 € por hora
Facturación: 3.000 € / 150 facturas = 20 € por factura
```

**Paso 3:** Asigna los costes a cada cliente según su consumo real:
```
Cliente A:
  5 tickets de soporte: 5 × 30€ = 150 €
  2 horas de AM: 2 × 50€ = 100 €
  1 factura: 1 × 20€ = 20 €
  Total costes de atención: 270 €/mes

Cliente B:
  25 tickets de soporte: 25 × 30€ = 750 €
  8 horas de AM: 8 × 50€ = 400 €
  4 facturas (paga en cuotas): 4 × 20€ = 80 €
  Total costes de atención: 1.230 €/mes
```

**Paso 4:** Calcula la rentabilidad real por cliente:
```
Cliente A:
  Revenue mensual: 2.000 €
  Coste del servicio prestado: (800 €)
  CM: 1.200 €
  Costes de atención: (270 €)
  Rentabilidad real: 930 €  → 46,5% de margen real

Cliente B:
  Revenue mensual: 2.500 €
  Coste del servicio prestado: (1.500 €)
  CM: 1.000 €
  Costes de atención: (1.230 €)
  Rentabilidad real: -230 €  → -9,2% de margen real (¡destruye valor!)
```

### Nivel 3 — El Mapa de Pareto del Revenue y la Rentabilidad

Con los datos de rentabilidad por cliente, construye la curva de rentabilidad acumulada (también llamada "whale curve"):

```
Ordenar clientes de más rentable a menos rentable y graficar:
  Eje X: % acumulado de clientes (0% a 100%)
  Eje Y: % acumulado de beneficio

El resultado típico:
  El 20% de clientes más rentables genera el 150-200% del beneficio total
  El 60% de clientes medios genera cerca del 0% de beneficio adicional
  El 20% de clientes menos rentables destruye el 50-100% del beneficio generado

Resultado: si tu empresa tiene 100 €k de beneficio, es posible que solo 20 clientes
estén generando 180 €k y otros 20 clientes estén destruyendo 80 €k.
```

---

## Las 4 acciones estratégicas que emergen del análisis

### Acción 1 — Proteger a los clientes de alta rentabilidad
Identifica los 20% más rentables y diseña un programa de retención activa:
- Contacto proactivo regular (no esperar a que tengan problemas).
- Acceso prioritario a nuevas features.
- Revisión de precios con sensibilidad: no subas el precio a tus mejores clientes sin añadir valor.

### Acción 2 — Optimizar a los clientes de rentabilidad media
Los clientes "mediocres" en rentabilidad suelen poder mejorar con:
- Reducción de la frecuencia de soporte (mejor autoservicio, mejor documentación).
- Migración a planes con precio más adecuado a su consumo real.
- Automatización de procesos de facturación y account management.

### Acción 3 — Redefinir la relación con clientes que destruyen valor
Opciones según el caso:
- **Subir el precio** hasta que el cliente sea rentable o decida irse.
- **Cambiar las condiciones de servicio** (límites de soporte, SLA más ajustado).
- **Offboard activo** en casos extremos: algunos clientes no son viables a ningún precio razonable.

### Acción 4 — Ajustar el mix de productos
Enfoca marketing, ventas y desarrollo en los productos con mayor CM%. Considera discontinuar o reprecia los productos con CM% < 15% si no tienen potencial estratégico claro.

---

## El modelo de rentabilidad en Excel — La estructura mínima

```
Hoja 1 — Datos de cliente:
  A: ID cliente
  B: Revenue mensual
  C: Coste directo del servicio/producto (COGS)
  D: CM (B-C)
  E: CM% (D/B)
  F: Tickets de soporte/mes
  G: Horas de AM/mes
  H: Nº de facturas/mes
  I: Coste de atención (F×coste_ticket + G×coste_hora + H×coste_factura)
  J: Rentabilidad real (D-I)
  K: Margen real % (J/B)

Hoja 2 — Tasas de coste por actividad:
  Coste por ticket: [importe]
  Coste por hora de AM: [importe]
  Coste por factura: [importe]

Hoja 3 — Análisis de Pareto:
  Ordenar hoja 1 por columna J descendiente
  Calcular % acumulado de clientes y % acumulado de rentabilidad
  Gráfico de curva de ballena (whale curve)
```

Cuéntame el sector y el tipo de datos que tienes disponibles: diseñamos el modelo de análisis específico para tu caso y las primeras conclusiones accionables.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'rentabilidad por cliente, análisis contribución marginal, ABC costes, Pareto revenue, finanzas gestión, margen por producto',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Non-disclosure agreements (NDA) en España: cuándo son necesarios y cuándo son papel mojado',
                'description'       => 'Entiende cuándo un NDA protege realmente tu información confidencial, qué cláusulas son esenciales y qué prácticas habituales hacen que un NDA sea inaplicable en la práctica, con los modelos de cláusulas adaptados al derecho español.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado mercantilista con experiencia en contratos de confidencialidad en el ámbito tecnológico, incluyendo NDAs para startups en rondas de inversión, acuerdos de confidencialidad entre empresas en procesos de M&A y NDAs con empleados y colaboradores. Sabes que la mayoría de los NDAs que se firman en el ecosistema de startups son formularios genéricos copiados de internet que tienen cláusulas que no aplican al derecho español o que son tan genéricas que sería casi imposible ejecutarlas ante un tribunal.

**Contexto de mi situación:**
- Por qué necesito un NDA: [conversar con un inversor / contratar a un empleado o colaborador / negociar con un cliente / proceso de M&A / partnership con otra empresa]
- La información que quiero proteger: [tecnología / base de clientes / estrategia de negocio / datos financieros / código fuente / proceso interno]
- La otra parte: [inversor / empleado / empresa competidora / proveedor / cliente]
- Jurisdicción: [España / internacional]

---

## Cuándo un NDA sirve — Y cuándo no

### Situaciones donde el NDA tiene valor real

**1. Procesos de due diligence (M&A o rondas de inversión)**
El NDA en este contexto protege información financiera detallada, la lista de clientes y los términos de contratos que el inversor o comprador necesita ver para tomar su decisión. Sin NDA, compartir esa información te expone a que se use para negociar contra ti o para informar decisiones de un competidor.

**2. Desarrollo de producto con proveedores externos**
Si compartes especificaciones técnicas detalladas, código fuente o arquitectura de sistema con un proveedor de desarrollo o consultoría, el NDA protege ese conocimiento de que sea compartido con tus competidores.

**3. NDAs con empleados que tienen acceso a información crítica**
Los NDAs con empleados en posiciones de acceso a información muy sensible (CTO, Head of Sales con acceso a toda la cartera de clientes, CFO) añaden una capa de protección más allá de la confidencialidad implícita del contrato de trabajo.

### Situaciones donde el NDA no te protege

**1. Con inversores en fase de pitch inicial**
La mayoría de los VCs e inversores ángel no firman NDAs en el primer contacto por razones operativas (ven decenas de pitches similares y un NDA crea responsabilidad legal). Si pides que firmen un NDA para escuchar tu pitch, probablemente rechazarán la reunión.
**Alternativa:** No compartes información tan sensible como para necesitar NDA en un primer pitch. El valor está en el equipo y la ejecución, no en la idea.

**2. Para proteger una "idea"**
Una idea no protegida por patente ni por secreto comercial debidamente documentado es prácticamente imposible de defender con un NDA. Si compartes que "tengo la idea de hacer una app que hace X" y alguien lo copia, demostrar que fue por violación del NDA es extremadamente difícil.

**3. NDAs con competidores directos en negociaciones de partnership**
Un competidor que firma un NDA y luego usa tu información tiene incentivos económicos para asumir el riesgo legal. El NDA puede darte un recurso legal, pero no previene el uso de la información.

---

## Las cláusulas esenciales del NDA en España

### Cláusula 1 — Definición de Información Confidencial

Esta es la cláusula más importante. Si la información confidencial no está bien definida, el NDA no protege nada.

**MAL (definición genérica):**
```
"Toda la información compartida entre las partes en el marco de esta relación."
```

**BIEN (definición específica):**
```
"A efectos del presente acuerdo, se considera Información Confidencial:
(a) Toda información técnica, incluyendo código fuente, arquitectura de sistemas,
    algoritmos, metodologías de desarrollo y especificaciones de producto;
(b) Información comercial y financiera, incluyendo listas de clientes, términos
    de contratos con terceros, datos de revenue y proyecciones financieras;
(c) Información estratégica, incluyendo planes de expansión, estrategias de
    precios y acuerdos de negociación en curso;
(d) Cualquier información que la Parte Divulgadora marque expresamente como
    'Confidencial' en el momento de su divulgación.

No se considerará Información Confidencial aquella que:
(i) sea o pase a ser de dominio público sin responsabilidad de la Parte Receptora;
(ii) estuviera ya en posesión de la Parte Receptora antes de su divulgación;
(iii) sea recibida de un tercero sin restricción de confidencialidad;
(iv) sea desarrollada independientemente por la Parte Receptora sin uso de la
     Información Confidencial."
```

### Cláusula 2 — Obligaciones de la Parte Receptora

```
"La Parte Receptora se compromete a:
(a) Usar la Información Confidencial exclusivamente para [finalidad específica
    del NDA: evaluación de la posible relación comercial / desarrollo del proyecto X].
(b) No divulgar la Información Confidencial a terceros sin consentimiento previo
    y por escrito de la Parte Divulgadora, con excepción del personal de la Parte
    Receptora que tenga necesidad estricta de conocerla para la finalidad indicada,
    quienes deberán estar sujetos a obligaciones de confidencialidad equivalentes.
(c) Proteger la Información Confidencial con el mismo grado de diligencia con que
    protege su propia información confidencial, y en ningún caso con menos que un
    grado de diligencia razonable.
(d) Notificar de forma inmediata a la Parte Divulgadora si tuviera conocimiento
    de cualquier divulgación no autorizada de la Información Confidencial."
```

### Cláusula 3 — Duración del acuerdo

```
"El presente acuerdo entrará en vigor en la fecha de su firma y permanecerá vigente
durante un período de [2-5] años.

Las obligaciones de confidencialidad sobre la Información Confidencial que constituya
secreto empresarial en el sentido de la Ley 1/2019 de Secretos Empresariales
permanecerán vigentes durante el tiempo en que dicha información mantenga carácter
de secreto empresarial, con independencia de la duración general del acuerdo."
```

**Nota importante:** La Ley 1/2019 de Secretos Empresariales ofrece protección indefinida mientras la información sea secret, lo que hace innecesaria la cláusula de duración para la información que cumpla los criterios de secreto empresarial (medidas razonables para mantener el secreto, valor por ser secreta).

### Cláusula 4 — Consecuencias del incumplimiento

```
"El incumplimiento de las obligaciones del presente acuerdo por la Parte Receptora
dará derecho a la Parte Divulgadora a:
(a) Reclamar indemnización por los daños y perjuicios causados, incluyendo el
    lucro cesante y el daño emergente.
(b) Solicitar con carácter urgente medidas cautelares para hacer cesar la divulgación
    no autorizada o el uso indebido de la Información Confidencial.

Las partes acuerdan que el incumplimiento de este acuerdo causará daños irreparables
para los que la indemnización económica puede ser insuficiente, reconociendo expresamente
el derecho de la Parte Divulgadora a solicitar tutela cautelar o interdicto sin necesidad
de acreditar dicho daño de forma específica."
```

### Cláusula 5 — Ley aplicable y fuero

```
"El presente acuerdo se rige por el Derecho español.

Para la resolución de cualquier conflicto derivado de su interpretación o ejecución,
las partes se someten expresamente a la jurisdicción de los Juzgados y Tribunales de
[ciudad de la Parte Divulgadora], con renuncia a cualquier otro fuero que pudiera
corresponderles."
```

---

## El NDA unilateral vs. bilateral

| Tipo | Cuándo usar | Quién está obligado |
|---|---|---|
| Unilateral | Cuando solo una parte comparte información confidencial (ej: startup con inversor) | Solo la parte receptora |
| Bilateral (mutuo) | Cuando ambas partes compartirán información confidencial (ej: partnership, negociación de M&A) | Ambas partes |

**El error frecuente:** Usar un NDA bilateral cuando en realidad la relación es unilateral. Esto crea obligaciones innecesarias para ti como parte divulgadora.

---

## Medidas complementarias que hacen el NDA ejecutable

Un NDA es tan fuerte como las pruebas que puedas presentar en un tribunal. Para que sea ejecutable necesitas:

```
1. MARCA la información confidencial:
   → Documentos en PDF con marca de agua "CONFIDENCIAL"
   → Email con [CONFIDENCIAL] en el asunto y en el cuerpo
   → Registro de qué información se compartió, cuándo y en qué formato

2. DOCUMENTA el acuerdo de confidencialidad:
   → NDA firmado con fecha y firma manuscrita o firma electrónica cualificada
   → Confirma la recepción del NDA por email

3. CONTROLA el acceso:
   → Comparte solo lo necesario para la finalidad del NDA
   → No envíes la información completa de una sola vez
   → Usa sistemas de sharing con control de acceso (no adjuntos de email)

4. REGISTRA las conversaciones donde compartes información sensible:
   → Resumen escrito post-reunión enviado por email
   → Minuta de la reunión con los temas tratados
```

Cuéntame la situación específica para la que necesitas el NDA y la información que quieres proteger: redactamos las cláusulas adaptadas a tu caso concreto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'NDA España, acuerdo confidencialidad, secreto empresarial, contrato confidencialidad, protección información',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Knowledge base y autoservicio: construye el centro de ayuda que reduce tickets sin sacrificar satisfacción',
                'description'       => 'Diseña e implementa una base de conocimiento que permite a los usuarios resolver sus dudas sin contactar con soporte, con la arquitectura de contenidos, los criterios para identificar qué artículos escribir primero y las métricas que demuestran que el autoservicio está funcionando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director de Customer Experience con experiencia construyendo centros de ayuda que han reducido el volumen de tickets entre un 25% y un 45% en los primeros 6 meses sin deteriorar el CSAT, porque el usuario encuentra la respuesta antes de necesitar contactar con soporte. Sabes que el 90% de las knowledge bases fallan porque se construyen desde adentro hacia afuera (lo que el equipo cree que el usuario necesita saber) en lugar de desde afuera hacia adentro (las preguntas que los usuarios realmente hacen).

**Contexto de mi operación:**
- Tipo de producto y sector: [SaaS / e-commerce / app de consumo / servicio]
- Volumen de tickets mensuales: [N]
- Estado actual del autoservicio: [no existe / existe pero nadie lo usa / existe pero el contenido está desactualizado]
- Las 5 preguntas más frecuentes que recibe el equipo de soporte: [lista]
- Herramienta de helpdesk: [Zendesk / Intercom / Freshdesk / HubSpot / otra]

---

## El diagnóstico previo — Los datos que necesitas antes de escribir un solo artículo

El error más frecuente: construir la knowledge base basándose en lo que el equipo cree que los usuarios necesitan, no en lo que realmente buscan.

**Fuentes de datos para el diagnóstico:**

**1. Análisis de tickets de soporte (la fuente más valiosa):**
Clasifica los últimos 200-500 tickets en categorías. El 20% de las categorías de consulta representa el 80% del volumen. Esas son las primeras 10-15 categorías para las que necesitas artículos.

**2. Búsquedas en la knowledge base existente (si la tienes):**
Los términos que los usuarios buscan sin encontrar resultado son los artículos que faltan.

**3. Las preguntas del chat antes de contactar con soporte:**
Si tienes un chatbot o chat en vivo, los primeros mensajes que envían los usuarios revelan las preguntas que tienen antes de escalar.

**4. Las búsquedas de Google que llevan a tu web:**
Google Search Console te muestra qué preguntas hacen los usuarios que buscan soporte o ayuda sobre tu producto.

---

## La arquitectura de la knowledge base — Cómo organizar el contenido

### Los 3 errores de estructura más frecuentes:

1. **Organizar por departamento** ("Productos", "Facturación", "Técnico") — los usuarios no saben a qué departamento pertenece su problema.

2. **Organizar por feature** ("Cómo usar el módulo X", "Configuración del módulo Y") — los usuarios buscan por problema, no por feature.

3. **Sin jerarquía**: todos los artículos al mismo nivel, sin categorías ni subcategorías.

### La estructura correcta — Organizada por el problema del usuario:

```
NIVEL 1 — Categorías principales (5-8 categorías)
  Basadas en los grandes momentos del journey del usuario:
  → Primeros pasos y configuración inicial
  → Gestión de mi cuenta
  → [Feature principal 1]
  → [Feature principal 2]
  → Pagos y facturación
  → Resolución de problemas frecuentes
  → Integraciones

NIVEL 2 — Subcategorías (3-8 por categoría)
  → Primeros pasos > Registro y verificación de cuenta
  → Primeros pasos > Configuración inicial
  → Primeros pasos > Conectar con el equipo

NIVEL 3 — Artículos individuales
  → Cómo verificar tu email después del registro
  → Cómo configurar tu perfil de empresa
  → Cómo invitar a los miembros de tu equipo
```

---

## La plantilla de artículo que funciona — Los 6 componentes

### Componente 1 — El título (optimizado para búsqueda interna y SEO)

El título debe ser la pregunta que hace el usuario, no el nombre de la feature.

```
MAL: "Módulo de facturación — Configuración avanzada"
BIEN: "Cómo generar una factura para un cliente en menos de 2 minutos"

MAL: "Gestión de permisos de usuario"
BIEN: "Cómo dar acceso a un nuevo miembro del equipo (y qué permisos puede tener)"
```

### Componente 2 — El resumen en 1-2 frases

Antes del contenido, una frase que confirma al usuario que está en el lugar correcto:
```
"Este artículo explica cómo añadir un nuevo usuario a tu cuenta y qué nivel de
permisos puedes asignarle. Si tienes problemas para que el usuario reciba el email
de invitación, ve directamente a la sección [Solución de problemas de invitación]."
```

### Componente 3 — El contenido paso a paso

```
Reglas del contenido efectivo:
✓ Un paso = una acción. No combines dos acciones en un solo punto.
✓ Usa capturas de pantalla para cada paso que implica una acción en la interfaz.
  Las capturas deben mostrar la interfaz exacta, con el elemento relevante destacado.
✓ Usa el mismo nombre para las cosas que usa la interfaz (no "el botón de guardar"
  si el botón se llama "Guardar cambios").
✓ Escribe en imperativo: "Haz clic en..." / "Introduce tu..." / "Selecciona..."
✓ Máximo 10 pasos por artículo. Si necesitas más, divide en dos artículos.
```

**Plantilla de artículo paso a paso:**
```markdown
# [Título que responde a la pregunta del usuario]

[1-2 frases de resumen + enlace a sección específica si es relevante]

## Antes de empezar
[Requisitos previos si los hay: qué rol necesitas, qué información necesitas tener lista]

## Pasos

1. Accede a [Sección] en el menú principal.
   [Captura de pantalla]

2. Haz clic en [Botón o enlace].
   [Captura de pantalla]

3. Completa los campos requeridos:
   - **[Campo 1]**: [Explicación breve]
   - **[Campo 2]**: [Explicación breve]
   [Captura de pantalla del formulario]

4. Haz clic en [Botón de confirmación].

El sistema mostrará un mensaje de confirmación cuando [X] se haya completado
correctamente.

## Solución de problemas frecuentes

**¿No ves el botón [X]?**
Es posible que no tengas el permiso necesario. [Enlace al artículo de permisos]

**¿Recibes el error "[mensaje de error específico]"?**
Esto ocurre cuando [causa]. Para resolverlo: [solución].

## Artículos relacionados
→ [Artículo A]
→ [Artículo B]
```

### Componente 4 — Los artículos de solución de problemas

```
Estructura específica para troubleshooting:

SÍNTOMA: Describe el problema exactamente como lo experimenta el usuario
  ("El email de verificación no llega")

CAUSAS MÁS FRECUENTES: Lista las causas en orden de frecuencia
  1. El email está en la carpeta de spam
  2. La dirección de email tiene un error tipográfico
  3. El dominio del email tiene filtros anti-spam corporativos

SOLUCIÓN PARA CADA CAUSA:
  Si está en spam: [pasos]
  Si hay error tipográfico: [pasos]
  Si hay filtros corporativos: [pasos + instrucciones para IT]

CUÁNDO CONTACTAR CON SOPORTE:
  "Si has seguido todos los pasos anteriores y el problema persiste, contacta con
   nuestro equipo con esta información: [lista de datos que necesita soporte]"
```

### Componente 5 — Feedback del artículo

Al final de cada artículo: "¿Fue útil este artículo? 👍 Sí / 👎 No"

Si el usuario marca No, muestra un formulario mínimo:
```
"¿Qué parte no fue útil?"
○ La información es incorrecta
○ Los pasos no coinciden con lo que veo en la aplicación
○ No resuelve mi pregunta
○ Otro: [campo de texto]
```

### Componente 6 — Actualización y fecha de revisión

```
Footer del artículo:
"Última actualización: [fecha]
 ¿Ves algo que no coincide con la versión actual del producto?
 [Enlace de feedback] — lo corregimos en 24 horas."
```

---

## El proceso de creación y mantenimiento del contenido

### El backlog de artículos — Priorización por volumen de tickets

```
Paso 1: Exporta todos los tickets del último trimestre con su categoría.
Paso 2: Cuenta cuántos tickets hay por categoría.
Paso 3: Ordena de mayor a menor volumen.
Paso 4: Los 15 primeros son tu backlog inicial de artículos.

Regla de producción mínima: 2 artículos por semana es sostenible para un equipo de 1-2 personas.
Con 2 artículos/semana, en 8 semanas tienes los 16 artículos más importantes.
```

### El proceso de mantenimiento — La knowledge base que envejece bien

```
Trigger de actualización automático:
→ Cada despliegue de producto con cambios de interfaz → revisar los artículos afectados.
→ Cada artículo con rating negativo > 30% → revisar y actualizar.
→ Revisión general cada 6 meses: detectar artículos con capturas desactualizadas.
```

---

## Las métricas del autoservicio

| Métrica | Fórmula | Objetivo inicial | Señal de madurez |
|---|---|---|---|
| Deflection rate | Usuarios que vieron un artículo y NO abrieron un ticket / total búsquedas | > 15% | > 35% |
| Artículos con rating positivo | % de artículos con > 70% de 👍 | > 50% de artículos | > 80% |
| Tiempo de resolución de tickets | Minutos desde ticket hasta respuesta | Debe bajar a medida que la KB mejora | |
| % de tickets que citan un artículo | Tickets resueltos enviando enlace a KB | Sube con más contenido | > 40% |

**El indicador de impacto final:** Si el volumen de tickets por categoría baja después de publicar el artículo de esa categoría, el contenido está funcionando.

Cuéntame las 5 preguntas más frecuentes que recibe tu equipo de soporte: identificamos los 3 artículos que tienes que publicar primero y te escribo la estructura de cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'knowledge base, centro de ayuda, autoservicio soporte, deflection rate, documentación usuario, helpdesk',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Diversificación de ingresos como freelance: cursos, templates, consultoría grupal y streams que no dependen de tu tiempo',
                'description'       => 'Aprende a construir fuentes de ingresos pasivos y semi-pasivos como freelance — cursos online, productos digitales, consultoría grupal y comunidades de pago — con el proceso para validar, lanzar y escalar cada tipo de producto sin dejar de atender a tus clientes actuales.',
                'prompt_content'    => <<<'PROMPT'
Eres un freelance senior que ha diversificado sus ingresos más allá del trabajo por hora, añadiendo productos digitales y formatos grupales que generan entre el 30% y el 60% de sus ingresos sin intercambio directo de tiempo por dinero. Has cometido el error de construir el curso antes de validar que alguien lo compraría, y has aprendido que la clave de la diversificación exitosa es validar antes de crear.

**Contexto de mi situación:**
- Especialidad freelance: [diseño / desarrollo / marketing / copywriting / consultoría / otro]
- Ingresos mensuales actuales: [importe] — % de clientes de servicios vs. productos: [X% / Y%]
- El problema que quiero resolver con la diversificación: [estabilidad de ingresos / escalar sin más horas / reducir dependencia de pocos clientes / quiero ganar mientras duermo]
- Qué he intentado ya (si algo): [describe]

---

## Por qué el modelo de ingresos por hora tiene un techo

El freelance que solo cobra por hora tiene tres problemas estructurales:

**1. El techo de horas:** Hay un máximo de horas facturables al día. Incluso a tarifas altas, el techo de ingresos es bajo.

**2. La correlación perfecta riesgo-ingresos:** Si estás de baja, de vacaciones o simplemente no trabajas, los ingresos caen a cero.

**3. La depreciación del tiempo:** A medida que mejoras como profesional, el tiempo de ejecución baja, lo que paradójicamente puede reducir tus ingresos si facturas por hora en lugar de por valor entregado.

La diversificación de ingresos no elimina el trabajo de cliente a cliente — lo complementa con streams que escalan sin depender linealmente de tu tiempo.

---

## Los 5 modelos de diversificación para freelancers — De menor a mayor complejidad

### Modelo 1 — Templates y assets digitales (el más fácil de empezar)

**Qué son:** Plantillas de Figma, themes de WordPress, componentes de código, templates de Notion, decks de PowerPoint, contratos, frameworks en Excel.

**Por qué funciona:** Empaquetas el trabajo que ya haces para clientes y lo vendes como producto reusable. El coste de producción es bajo (ya tienes el conocimiento) y el coste de distribución es casi cero.

**Dónde vender:**
- Figma Community (diseñadores): Tu perfil como escaparate gratuito + Community Marketplace.
- Gumroad / Lemon Squeezy: Para vender cualquier tipo de asset digital.
- Envato / ThemeForest: Para themes y templates de mayor alcance.
- Tu propio sitio web: El mejor margen (sin comisiones), requiere tu propio tráfico.

**El proceso de creación:**
```
Paso 1: Identifica el template que más veces has creado para clientes.
Paso 2: Crea una versión genérica y profesional con documentación de uso.
Paso 3: Valida: publica en Gumroad a precio de 29-79 € y comparte en LinkedIn / Twitter.
Paso 4: Si vende 5 unidades en el primer mes → crea 3 más variantes.
Paso 5: Si no vende → cambia el precio, el ángulo o el producto.
```

**Ingresos esperados:** 200-2.000 €/mes con un catálogo de 10-20 productos.

---

### Modelo 2 — Curso online (el de mayor potencial, el que más falla)

**Por qué el 90% de los freelancers que hacen cursos fracasan:**
Crean el curso completo (200 horas de trabajo) antes de vender una sola copia. Si nadie lo compra, 200 horas desperdiciadas.

**El proceso correcto — Validar antes de crear:**

```
Semana 1 — Define el tema:
  El mejor tema de curso = el problema más frecuente que resuelves para tus clientes.
  No el tema que más te gusta, el que más necesita tu audiencia objetivo.

Semana 2 — Valida con pre-venta:
  Escribe una landing page con el título, el contenido prometido y el precio.
  Pon un botón de "Pre-comprar" a precio de lanzamiento (30-50% de descuento).
  Comparte con tu audiencia (LinkedIn, newsletter, comunidades).

  ¿Cuántas pre-ventas para validar?
  → Menos de 50€: 10+ pre-ventas
  → 50-200€: 5+ pre-ventas
  → Más de 200€: 3+ pre-ventas

Semana 3-4 — Solo si validas: Empieza a crear
  Crea el mínimo viable: el módulo más importante primero.
  Entrega a los pre-compradores antes de que el curso esté completo.
  Su feedback moldea el contenido de los módulos siguientes.
```

**Estructura de precios de un curso:**
```
Nivel básico (acceso al contenido): 97-297 €
Nivel intermedio (contenido + comunidad): 297-497 €
Nivel premium (contenido + comunidad + 1 sesión de feedback): 497-997 €
```

**Plataformas para cursos:**
- Teachable / Kajabi: Plataforma completa (curso + comunidad + email). Mayor coste, más funcionalidades.
- Gumroad / Lemon Squeezy: Simple y barato, ideal para el primer curso.
- Tu propia web con Memberful o Podia: Mayor control, requiere más configuración.

**Ingresos esperados:** 1.000-10.000 €/lanzamiento con una audiencia de 500-5.000 personas.

---

### Modelo 3 — Consultoría grupal y talleres (el de mayor conversión)

**Qué es:** En lugar de hacer 1:1 con 10 clientes a 200 €/hora, haces 1:10 (o 1:20) con 10 clientes a 50 €/persona/hora. El cliente paga menos. Tú ganas más.

**Formatos:**
- **Workshop intensivo (1 día):** Resuelve un problema específico en 4-8 horas. Precio: 200-500 €/persona.
- **Cohort (4-8 semanas):** Programa estructurado con grupos pequeños (8-20 personas). Precio: 500-2.000 €/persona.
- **Office hours grupales:** Sesión semanal o quincenal donde cualquier miembro del grupo puede hacer preguntas. Precio: 30-100 €/mes por miembro.

**Ejemplo de conversión de servicio a formato grupal:**

```
ANTES: "Reviso tu estrategia de contenido en una sesión de 2 horas" → 400 €
DESPUÉS: "Taller de auditoría de estrategia de contenido B2B"
         → 8 participantes × 100 € → 800 € por las mismas 2 horas
```

---

### Modelo 4 — Comunidad de pago

**Qué es:** Un espacio privado (Discord, Slack, Circle, Mighty Networks) donde los miembros pagan una cuota mensual o anual por acceso a la comunidad, al conocimiento del experto (tú) y a la red de otros miembros.

**Cuándo funciona:**
- Tienes una audiencia previa (newsletter, LinkedIn, redes sociales).
- Hay un tema suficientemente específico donde los miembros se benefician de conectar entre sí.
- Puedes aportar valor recurrente (sesiones, contenido exclusivo, acceso directo).

**La trampa de la comunidad:** El 80% de las comunidades de pago mueren en los 6 primeros meses porque el fundador no tiene tiempo para animarlas. Antes de lanzar una comunidad, pregúntate: "¿Tengo tiempo de dedicar 3-5 horas semanales a esto durante los próximos 12 meses?"

**Precio:** 29-99 €/mes por miembro. Con 50 miembros activos a 49 €/mes = 2.450 €/mes de ingreso recurrente.

---

### Modelo 5 — Productizar tu servicio (el paso previo a escalar)

**Qué es:** En lugar de ofrecer un servicio completamente a medida, defines un servicio con alcance, proceso y precio fijos. Reduces la fricción de venta y aumentas la eficiencia de entrega.

```
ANTES (servicio customizado):
"Diseño webs — Contáctame para presupuesto" → cada proyecto es diferente, el precio varía,
el proceso de venta es largo.

DESPUÉS (servicio productizado):
"Web de lanzamiento para freelances en 2 semanas — 2.500 €"
→ Alcance fijo: 5 páginas, diseño en Figma, desarrollo en Webflow.
→ Proceso fijo: Briefing el lunes, diseño el miércoles, revisión el viernes, entrega semana 2.
→ Precio fijo: 2.500 € siempre.
→ El cliente sabe exactamente qué recibe. Tú sabes exactamente qué entregas.
→ Resultado: vendes 3x más rápido y la entrega es 2x más eficiente.
```

---

## El plan de 90 días para añadir el primer stream de ingresos pasivos

```
Días 1-15 — Elige y valida:
  → Elige el modelo que más se alinea con tu audiencia y tu tiempo disponible.
  → Crea la landing de pre-venta o el template mínimo viable.
  → Comparte con tu audiencia y mide el interés real (clics, pre-ventas, preguntas).

Días 16-45 — Crea el producto mínimo viable:
  → Solo el contenido / producto suficiente para entregar a los primeros compradores.
  → Recoge feedback de los primeros compradores para mejorar.

Días 46-75 — Primer lanzamiento completo:
  → Email a tu lista / post en LinkedIn con la oferta completa.
  → Precio de lanzamiento con descuento para los primeros compradores.
  → Objetivo: 10-20 ventas en las primeras 2 semanas.

Días 76-90 — Automatización y evergreen:
  → Configura el embudo de venta para que funcione sin tu intervención activa.
  → La venta de esta semana no requiere que tú hagas nada nuevo.
```

---

## Los números que hacen la diversificación financieramente interesante

```
Escenario conservador (año 1):
  Ingresos de cliente: 4.000 €/mes
  Templates digitales (10 productos × 5 ventas/mes × 49€): 2.450 €/mes
  Total: 6.450 €/mes

Escenario medio (año 2):
  Ingresos de cliente: 4.000 €/mes (los mismos)
  Templates: 3.000 €/mes
  Curso (lanzamiento trimestral): 1.500 €/mes promedio
  Total: 8.500 €/mes → +56% vs. solo clientes

Escenario avanzado (año 3):
  Ingresos de cliente: 3.000 €/mes (trabajas menos horas con clientes)
  Productos digitales: 4.000 €/mes
  Comunidad (50 miembros × 49€): 2.450 €/mes
  Total: 9.450 €/mes → con menos horas trabajadas
```

Cuéntame tu especialidad y el tiempo que podrías dedicar a construir el primer stream: te diseño el plan de validación para las próximas 2 semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'ingresos pasivos freelance, cursos online, productos digitales, consultoría grupal, diversificación freelance',
                'vote_score'        => 45,
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
