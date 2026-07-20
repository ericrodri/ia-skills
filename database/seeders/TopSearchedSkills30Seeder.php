<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills30Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido B2B en X (Twitter): construye audiencia sin pagar publicidad',
                'description'       => 'Construye presencia y audiencia en X (Twitter) para un negocio B2B que genera leads inbound sin publicidad de pago. Con la estrategia de contenido, el ritmo de publicación, los formatos que funcionan en B2B y cómo pasar de seguidores a contactos de negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un Social Media Strategist especializado en B2B con experiencia construyendo cuentas de empresa en X (Twitter) de 0 a 20.000+ seguidores en sectores de tecnología, finanzas y servicios profesionales, donde la audiencia se convierte en pipeline de ventas de forma orgánica.

Contexto:
- Tipo de negocio: [SaaS B2B / consultoría / agencia / servicios profesionales]
- Quién publicará: [el CEO/founder / el equipo de marketing / yo como experto]
- Audiencia objetivo: [CTOs / CFOs / fundadores / marketers / otro]
- Estado actual: [sin cuenta / cuenta con pocos seguidores / queremos reactivar una cuenta dormida]

## Estrategia de Contenido B2B en X — [Empresa]

### 🎯 Por qué X sigue siendo relevante para B2B (a pesar de todo)

X tiene una característica única para el B2B: el acceso directo a decisores de compra que son imposibles de alcanzar por email o LinkedIn.

Los CTOs que no responden cold emails sí interactúan con hilos técnicos interesantes.
Los VPs de ventas que ignoran tu InMail de LinkedIn sí responden si comentas algo inteligente en un debate de su sector.

La oportunidad: la mayoría de empresas B2B abandonaron X en 2023-2024 por la incertidumbre de la plataforma. Los que se quedaron tienen menos competencia por la atención.

### 📝 Los 5 tipos de contenido B2B que funcionan en X

**Tipo 1 — Los hilos de conocimiento (el formato rey):**
```
Estructura: 8-12 tweets que enseñan algo valioso en profundidad.
Ejemplo: "Cómo reducimos el churn del 8% al 2% en 6 meses (hilo) 🧵"

El primer tweet es el gancho — tiene que ser irresistible.
✅ "Después de 3 años y 500 entrevistas de salida, aprendimos por qué los clientes se van.
Los motivos no son los que creíamos. Hilo:"

El último tweet debe tener un CTA suave:
"Si esto te fue útil, sígueme para más. Y si tu empresa tiene este reto, te leo en DM."
```

**Tipo 2 — Las estadísticas o datos sorprendentes con contexto:**
```
"El 73% de los clientes B2B no renueva su contrato por razones relacionadas con el soporte,
no con el producto.

Y sin embargo, las empresas SaaS invierten 10x más en producto que en Customer Success.

¿Qué estamos haciendo mal?"
```

**Tipo 3 — Los contrarian takes (la opinión polémica pero fundamentada):**
```
"El Net Promoter Score es la métrica más sobrevaluada en SaaS.

Aquí hay 3 razones por las que el NPS te engaña más de lo que te ayuda:
[...]

¿La alternativa? CES + entrevistas cualitativas + churn analysis real."

El debate que genera es engagement orgánico que amplifica el alcance.
```

**Tipo 4 — Los behind the scenes (lo que no se comparte habitualmente):**
```
Resultados reales: "Nuestro Q1: lo bueno, lo malo y lo que cambiaríamos."
Errores propios: "El producto que lanzamos que fue un fracaso total (y lo que aprendimos)"
Procesos internos: "Así gestionamos nuestra reunión de producto semanal"
```

**Tipo 5 — La curación de contenido con tu punto de vista:**
```
Comparte un artículo relevante del sector y añade tu análisis de 2-3 puntos.
No copies el artículo — añade perspectiva que no está en el original.
```

### ⏱️ La cadencia de publicación sostenible

**Para cuentas de empresa o de founder B2B:**
```
Mínimo viable: 5 tweets/semana + 3-5 respuestas a conversaciones del sector/día
Óptimo: 7-10 tweets/semana + 10+ respuestas/día

Las respuestas son el canal de crecimiento más subestimado:
Responder a cuentas grandes del sector con comentarios perspicaces →
sus seguidores ven tu comentario → te siguen si les parece valioso.
```

### 🔄 El sistema de conversión de seguidores a leads de negocio
El proceso de DM estratégico, la integración del perfil con un CTA de captura de email y cómo medir el ROI de la presencia en X en términos de pipeline generado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Twitter X B2B, social media B2B, hilos Twitter, contenido B2B, audiencia orgánica',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Seguridad web: protege tu aplicación contra OWASP Top 10 con código concreto',
                'description'       => 'Implementa las protecciones de seguridad para las 10 vulnerabilidades más críticas de aplicaciones web según OWASP. Con ejemplos de código para prevenir XSS, SQL injection, CSRF, broken authentication, y las cabeceras de seguridad HTTP que toda aplicación web debe tener.',
                'prompt_content'    => <<<'PROMPT'
Eres un Application Security Engineer con experiencia auditando y asegurando aplicaciones web en producción, habiendo encontrado y remediado vulnerabilidades críticas en startups y empresas de mid-market que habrían permitido la exfiltración de datos o la toma de control completa de la aplicación.

Contexto:
- Stack tecnológico: [Node.js+Express / Python+Django / PHP+Laravel / Go / Java / otro]
- Tipo de aplicación: [SaaS B2B / ecommerce / API pública / aplicación interna]
- Estado actual: [sin auditoría de seguridad / tenemos algunas protecciones básicas / queremos revisar la postura de seguridad completa]
- Datos que manejáis: [datos de usuarios / datos de pago / datos de salud / datos de menores / datos corporativos]

## Seguridad Web — OWASP Top 10 — [Aplicación]

### 🔴 A01: Broken Access Control (el más crítico de 2021-2024)

**El problema:**
El usuario A puede acceder a los datos del usuario B cambiando un ID en la URL.

**Ejemplo vulnerable:**
```javascript
// ❌ VULNERABLE: el usuario puede acceder a cualquier perfil
app.get('/api/users/:id', async (req, res) => {
  const user = await User.findById(req.params.id)
  res.json(user)
})
```

**Ejemplo seguro:**
```javascript
// ✅ SEGURO: solo puede ver su propio perfil
app.get('/api/users/:id', authenticate, async (req, res) => {
  // Verificar que el usuario autenticado solo accede a su propio recurso
  if (req.user.id !== req.params.id && !req.user.isAdmin) {
    return res.status(403).json({ error: 'Forbidden' })
  }
  const user = await User.findById(req.params.id)
  res.json(user)
})
```

### 🔴 A03: Injection (SQL, NoSQL, Command Injection)

**SQL Injection:**
```javascript
// ❌ VULNERABLE: el atacante puede inyectar SQL
const query = `SELECT * FROM users WHERE email = '${req.body.email}'`
// Input malicioso: ' OR '1'='1 → devuelve todos los usuarios

// ✅ SEGURO: usa parámetros preparados (parameterized queries)
const query = 'SELECT * FROM users WHERE email = $1'
const result = await pool.query(query, [req.body.email])
```

**En ORMs (Sequelize, Prisma, TypeORM):**
```javascript
// ✅ SEGURO: los ORMs usan parámetros preparados por defecto
const user = await User.findOne({ where: { email: req.body.email } })
// NUNCA uses: User.findAll({ where: sequelize.literal(`email = '${email}'`) })
```

### 🔴 A07: Identification and Authentication Failures

**Las configuraciones de autenticación que debes tener:**
```javascript
// 1. Contraseñas: usa bcrypt con factor de coste 12+
const bcrypt = require('bcrypt')
const SALT_ROUNDS = 12
const hashedPassword = await bcrypt.hash(plainPassword, SALT_ROUNDS)

// 2. Sesiones: configura cookies de forma segura
app.use(session({
  secret: process.env.SESSION_SECRET, // mínimo 32 caracteres aleatorios
  resave: false,
  saveUninitialized: false,
  cookie: {
    httpOnly: true,   // no accesible desde JavaScript
    secure: true,     // solo HTTPS
    sameSite: 'strict', // protección CSRF
    maxAge: 24 * 60 * 60 * 1000 // 24 horas
  }
}))

// 3. Rate limiting en login
const rateLimit = require('express-rate-limit')
const loginLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutos
  max: 5, // 5 intentos máximo
  message: 'Demasiados intentos de login. Inténtalo en 15 minutos.'
})
app.post('/api/auth/login', loginLimiter, loginHandler)
```

### 🛡️ Las cabeceras de seguridad HTTP que toda aplicación debe tener

```javascript
// Con helmet.js (Node.js) — un solo import configura todo
const helmet = require('helmet')
app.use(helmet())

// Lo que helmet configura automáticamente:
// Content-Security-Policy: previene XSS limitando de dónde se carga el JS
// X-Frame-Options: DENY → previene clickjacking (el sitio no se puede incrustar en un iframe)
// X-Content-Type-Options: nosniff → el navegador no adivina el MIME type
// Referrer-Policy: no-referrer → no se filtra la URL en las peticiones externas
// Strict-Transport-Security: fuerza HTTPS por X segundos
// Permissions-Policy: desactiva APIs del navegador que no usas (cámara, micrófono, geolocalización)
```

### 🔐 A02: Cryptographic Failures — qué nunca debes guardar en texto plano
La lista completa de datos que requieren cifrado en reposo, los algoritmos modernos (AES-256, Argon2) y los algoritmos que debes dejar de usar (MD5, SHA-1, DES).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Seguridad web, OWASP Top 10, XSS, SQL injection, CSRF, authentication, cabeceras seguridad',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de emails transaccionales y de marketing: el email que abre, lee y hace click',
                'description'       => 'Diseña emails transaccionales (bienvenida, confirmación, notificación, recuperación de contraseña) y de marketing que llegan a la bandeja de entrada, se leen en móvil y desktop y consiguen que el usuario haga lo que necesitas. Con las plantillas de diseño, las limitaciones del HTML de email y las mejores prácticas de entregabilidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Designer con experiencia diseñando sistemas de email transaccional y marketing para productos SaaS, ecommerce y plataformas con +100k usuarios, donde la diferencia entre un email bien diseñado y uno mal diseñado puede ser la diferencia entre una tasa de apertura del 40% y del 18%.

Contexto:
- Tipo de emails a diseñar: [transaccionales (bienvenida, confirmación, alertas) / marketing (newsletters, campañas) / ambos]
- Herramienta de envío: [Mailchimp / Brevo / HubSpot / Postmark / SendGrid / otro]
- Audiencia: [B2B / B2C / mixta]
- Estado actual: [sin sistema de email / emails muy básicos sin diseño / queremos rediseñar los existentes]

## Diseño de Emails — [Empresa]

### 🧱 Las limitaciones del HTML en email (lo que hace único al diseño de email)

**El email HTML no es el HTML web:**
```
Los clientes de email (Gmail, Outlook, Apple Mail) usan sus propios motores de renderizado.
Outlook sigue usando Word como motor de renderizado → es el más problemático.

Lo que NO puedes usar en email:
❌ CSS Grid, CSS Flexbox (Outlook los ignora)
❌ Fuentes web (Google Fonts, etc.) — usar fallback de sistema
❌ JavaScript (bloqueado por seguridad en todos los clientes)
❌ Formularios dentro del email (la mayoría los bloquea)
❌ Videos en línea (solo GIFs animados o poster image con link)
❌ position: absolute/fixed

Lo que SÍ debes usar:
✅ Tablas para el layout (el estándar que funciona en todos los clientes)
✅ Estilos inline en la mayoría de casos (algunos clientes ignoran la sección <style>)
✅ Imágenes con atributo alt (si el cliente bloquea imágenes, se ve el alt)
✅ Colores en hexadecimal de 6 caracteres (#FF0000, no #F00)
```

**La solución práctica: usa un framework de email**
```
MJML: el más popular (transforma un markup simple en HTML de email compatible)
  → Componentes: mj-column, mj-image, mj-button, mj-text
  → Compila a HTML compatible con todos los clientes

Foundation for Emails: alternativa a MJML

Herramientas visuales:
  → Beefree (drag & drop profesional)
  → Unlayer (embebible en tu propio producto)
  → Los constructores de Mailchimp/Brevo/HubSpot (suficientes para la mayoría)
```

### 📐 La estructura del email bien diseñado

**Los 4 bloques de todo email:**
```
1. PREHEADER (el texto invisible que se ve en la bandeja de entrada):
   El segundo factor de decisión de apertura (después del asunto).
   Máximo 90 caracteres.
   No dejes que sea el "Para ver este email correctamente, haz click aquí."
   Debe complementar el asunto, no repetirlo.

2. HEADER:
   Logo de la empresa (centrado, con link a la web).
   Ancho máximo: 600px.
   El logo en PNG con fondo transparente o blanco.

3. BODY (el cuerpo del email):
   Un solo objetivo por email — un solo CTA.
   Jerarquía: H1 grande → párrafo corto → CTA.
   Columnas: 1 columna en móvil, máximo 2 columnas en desktop.

4. FOOTER:
   Dirección legal (obligatoria para cumplir con CAN-SPAM y RGPD).
   Link de desuscripción (obligatorio).
   Links a RRSS (opcional).
```

### 📱 El diseño responsive que funciona en móvil (donde se abre el 60% de los emails)

```
Las reglas del diseño responsive de email:
✅ Ancho máximo: 600px (el email se escala hacia abajo pero no hacia arriba bien)
✅ Tamaño mínimo de fuente: 14px (el iOS Mobile Safari lo escala automáticamente si es menor)
✅ Los CTAs deben ser de mínimo 44px de alto (la zona de toque mínima del dedo)
✅ Las imágenes con max-width: 100% (se ajustan al ancho de la pantalla)
✅ El texto en una sola columna en móvil (mejor legibilidad)
```

### 🎨 Los tipos de email transaccional con su plantilla específica

**Email de bienvenida (el más importante — tasa de apertura >50%):**
```
Asunto: "Bienvenida a [Producto], [Nombre]"
Preheader: "Tu cuenta está lista. Aquí tienes cómo empezar."
Body:
  H1: "Bienvenido a [Producto]"
  P: Qué van a poder hacer con el producto (1-2 frases de beneficio)
  3 pasos o features destacados (iconos + texto corto)
  CTA principal: "Ir a mi cuenta" / "Empezar ahora"
  CTA secundario: "Ver la guía de inicio" (enlace de texto, no botón)
Footer: datos legales + desuscripción
```

### 📊 Las métricas de email y los benchmarks por sector
Las 5 métricas de email (tasa de apertura, CTR, tasa de rebote, spam, desuscripción) con los benchmarks por sector y las acciones de optimización para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Email design, diseño email, email transaccional, MJML, email HTML, email marketing diseño',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del pipeline de ventas con CRM: mantén el embudo limpio y el forecast fiable',
                'description'       => 'Gestiona el pipeline de ventas en tu CRM de forma que el forecast sea fiable, los deals no se pierdan por falta de seguimiento y el equipo sepa en qué oportunidades centrar la energía. Con la configuración de etapas, la higiene del pipeline y la reunión de revisión semanal.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Manager con experiencia gestionando pipelines de ventas B2B en CRMs como Salesforce y HubSpot para equipos de 2-15 AEs, donde la disciplina de la gestión del CRM determina la precisión del forecast y la tasa de cierre del equipo.

Contexto:
- CRM utilizado: [HubSpot / Salesforce / Pipedrive / otro]
- Tamaño del equipo de ventas: [N AEs]
- Ciclo de venta típico: [N semanas/meses]
- ACV medio: [€]
- Estado del pipeline actual: [no usamos el CRM bien / el forecast es impreciso / hay deals que llevan meses sin actividad / queremos estructurar mejor el proceso]

## Gestión del Pipeline de Ventas — [Empresa]

### 🗺️ La estructura de etapas del pipeline que funciona

**El error más frecuente: etapas definidas desde la perspectiva del vendedor, no del comprador.**

```
❌ ETAPAS CENTRADAS EN EL VENDEDOR (subjetivas):
"Prospección / Demo enviada / Propuesta / Negociación / Cerrado"
El problema: "Demo enviada" no dice nada del interés real del comprador.

✅ ETAPAS CENTRADAS EN EL COMPRADOR (con criterios de avance):
```

**Las etapas recomendadas para ventas B2B complejas:**

```
ETAPA 1 — QUALIFIED LEAD:
Criterio para entrar: el lead cumple el ICP (sector, tamaño, cargo del contacto)
Criterio para avanzar: hay una reunión agendada

ETAPA 2 — DISCOVERY:
Criterio para entrar: hemos tenido una conversación de discovery
Criterio para avanzar: confirmamos que tiene el problema + presupuesto + autoridad + timing (BANT)

ETAPA 3 — SOLUTION PRESENTED:
Criterio para entrar: hemos presentado nuestra solución al problema específico de ese cliente
Criterio para avanzar: el comprador nos ha dado feedback y nos ha pedido una propuesta

ETAPA 4 — PROPOSAL SENT:
Criterio para entrar: hemos enviado propuesta formal
Criterio para avanzar: el comprador ha revisado la propuesta y quiere negociar

ETAPA 5 — NEGOTIATION / VERBAL YES:
Criterio para entrar: hay un verbal yes del comprador
Criterio para avanzar: contrato firmado

ETAPA 6 — CLOSED WON / CLOSED LOST:
Won: contrato firmado
Lost: el deal no va a cerrar (con razón de pérdida documentada)
```

**Por qué los criterios de avance son la clave:**
Sin criterios → el vendedor mueve deals de etapa por optimismo, no por evidencia.
Con criterios → el forecast refleja la realidad, no los deseos del vendedor.

### 🧹 La higiene del pipeline: las 5 reglas del CRM limpio

```
REGLA 1 — Los deals tienen actividad en los últimos 14 días o no están en el pipeline:
Un deal sin actividad en 30 días no está "en negociación" — está olvidado.
Los deals zombies inflan el pipeline y distorsionan el forecast.

REGLA 2 — El close date es realista:
El vendedor que pone todos sus deals a cerrar en el último día del trimestre
no está haciendo un forecast — está aplazando la conversación difícil.
El close date debe basarse en el proceso de compra del cliente, no en el trimestre del vendedor.

REGLA 3 — El "next step" está siempre definido:
Cada deal activo debe tener el siguiente paso concreto y agendado.
"Esperando respuesta" no es un next step — es pasividad disfrazada.
✅ "Llamada de revisión de propuesta el martes a las 11h" es un next step.

REGLA 4 — El tamaño del deal es real:
Los deals que llevan 3 meses sin cambiar de tamaño probablemente no sean tan grandes.

REGLA 5 — Los deals perdidos se cierran con la razón de pérdida documentada:
La razón de pérdida es el dato más valioso del CRM a largo plazo.
Sin esa información, el equipo repite los mismos errores.
```

### 📊 La reunión de revisión de pipeline (Pipeline Review) semanal
El formato de la reunión de 60 minutos donde el manager revisa el pipeline con cada AE: las preguntas que hacen, los deals que merecen atención especial y cómo distinguir entre coaching y microgestión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Pipeline ventas, CRM gestión, forecast ventas, HubSpot pipeline, Salesforce etapas',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Competitive intelligence para producto: entiende a la competencia mejor que ellos se entienden a sí mismos',
                'description'       => 'Implementa el proceso de inteligencia competitiva para producto que te da una visión continua y estructurada de cómo evolucionan los competidores, qué hacen que tú no haces y dónde están sus debilidades. Con las fuentes de información, el framework de análisis y cómo usar la intel en la hoja de ruta.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia construyendo sistemas de competitive intelligence en empresas SaaS donde la falta de visibilidad de la competencia ha causado sorpresas estratégicas que costaron cuota de mercado.

Contexto:
- Tipo de producto: [SaaS B2B / marketplace / producto de consumo]
- Número de competidores directos: [N]
- Estado actual: [no tenemos proceso formal / revisamos la competencia de vez en cuando / queremos sistematizarlo]
- Decisiones que debe informar la competitive intel: [hoja de ruta / pricing / posicionamiento / conversaciones de ventas / todo]

## Competitive Intelligence para Producto — [Empresa]

### 🔭 Las fuentes de información competitiva (gratuitas y de pago)

**Fuentes de producto (las más valiosas para PMs):**
```
1. SU PROPIO PRODUCTO (la fuente más directa):
   → Crea una cuenta de prueba en todos los competidores relevantes
   → Recorre el onboarding completo cada trimestre
   → Documenta el flujo de activación, los features clave, la UX, el pricing

2. LOS CHANGELOGS Y RELEASE NOTES:
   → La mayoría de SaaS publican sus changelogs (busca /changelog, /releases)
   → Herramientas: track changes automáticamente con cambios de DOM en Visualping o Distill

3. LAS RESEÑAS DE USUARIOS (G2, Capterra, Trustpilot, App Store):
   → Las reseñas de 3 estrellas son las más útiles: dicen qué falta sin el sesgo de los extremos
   → Categoriza las quejas de la competencia: "Si sus usuarios odian X, nosotros somos mejores en X"
   → Categoriza los elogios de la competencia: "Si sus usuarios aman Y, nosotros necesitamos Y o tenemos que diferenciarnos"

4. LAS OFERTAS DE EMPLEO:
   → Lo que contratan es lo que van a construir
   → "Buscan un Product Manager de enterprise" → van a atacar el enterprise
   → "Buscan un Data Engineer" → van a construir algo de analytics

5. LOS MEDIOS Y LAS NOTAS DE PRENSA:
   → Alerts de Google con el nombre de cada competidor
   → TechCrunch, Product Hunt, Crunchbase para hitos y financiación

6. LAS CONVERSACIONES DE VENTAS PERDIDAS:
   → Pregunta siempre: "¿Con quién más comparasteis?" y "¿Qué fue lo que os convenció de ellos?"
   → El equipo de ventas tiene la mejor intel competitiva y raramente la comparte con producto
```

### 📋 El framework de análisis competitivo para PMs

**La plantilla de ficha competitiva (una por competidor):**
```
COMPETIDOR: [nombre]
Actualizado: [fecha]

1. POSICIONAMIENTO:
   ¿A quién se dirigen? ¿Qué promesa hacen?
   Tagline actual: "..."

2. PRICING:
   Modelo: [freemium / tiered / por usuario / por uso]
   Rangos de precio: [€X - €Y/mes]
   Última modificación de precio conocida: [fecha]

3. FEATURES CLAVE:
   Lo que hacen mejor que nosotros:
   - Feature A
   Lo que nosotros hacemos mejor:
   - Feature X
   Lo que ninguno hace (oportunidad):
   - Feature Z

4. GO-TO-MARKET:
   Canales: [paid / SEO / PLG / sales-led]
   Contenido: [newsletter / blog / eventos / comunidad]

5. MOVIMIENTOS RECIENTES (últimos 90 días):
   - [Lanzaron feature X el DD/MM]
   - [Levantaron ronda de €Xm]
   - [Contrataron VP of Sales]

6. ANÁLISIS ESTRATÉGICO:
   ¿Hacia dónde parece que se dirigen?
   ¿Qué podemos aprender de ellos?
   ¿Qué debilidades podemos explotar?
```

### 🗓️ La cadencia de competitive intelligence que no consume todo el tiempo
El sistema de 2 horas/mes de revisión continua + el review trimestral profundo + cómo distribuir la intel al equipo de ventas, marketing y producto en formatos que realmente se usen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Competitive intelligence, análisis competencia, benchmarking producto, ficha competitiva',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de la productividad del equipo sin microgestión: resultados sin control constante',
                'description'       => 'Gestiona la productividad de un equipo orientado a resultados sin necesidad de vigilar las horas trabajadas ni el estado de cada tarea. Con el sistema de objetivos y entregables, las reuniones de seguimiento correctas y cómo distinguir cuándo dar autonomía y cuándo intervenir.',
                'prompt_content'    => <<<'PROMPT'
Eres un Manager con experiencia liderando equipos en empresas de tecnología y servicios donde la microgestión ha sido reemplazada por sistemas de responsabilidad basados en resultados que mejoraron la productividad un 35% y redujeron el turnover un 50%.

Contexto:
- Tamaño del equipo: [N personas]
- Modelo de trabajo: [remoto / híbrido / presencial]
- Tipo de trabajo: [proyecto / recurrente / mixto]
- El problema actual: [no sé si el equipo está trabajando bien / las tareas se retrasan sin aviso / no tengo visibilidad sin preguntar constantemente / el equipo se siente vigilado]

## Gestión de Productividad sin Microgestión — [Equipo]

### 🧠 La diferencia entre microgestión y accountability

**La microgestión es:**
```
Controlar EL PROCESO: cómo trabaja, cuándo trabaja, desde dónde trabaja.
Pedir actualizaciones diarias de estado.
Revisar cada tarea antes de que salga.
Desconfiar sin evidencia de que algo va mal.

El resultado: el equipo deja de tomar decisiones propias,
espera instrucciones para todo y su autonomía se atrofia.
```

**El accountability (la alternativa) es:**
```
Controlar LOS RESULTADOS: qué entrega, cuándo entrega, con qué calidad.
La persona decide cómo y cuándo trabaja.
El manager interviene cuando el resultado no llega o llega mal.

El resultado: el equipo asume responsabilidad real,
desarrolla criterio propio y escala cuando genuinamente necesita ayuda.
```

### 📋 El sistema de objetivos y entregables que da visibilidad sin vigilancia

**El contrato de trabajo semanal (5 minutos los lunes):**
```
Cada persona del equipo comparte al inicio de la semana:
→ Los 3-5 entregables de la semana (no tareas — resultados concretos)
→ Las dependencias que necesita (qué necesita de ti o de otros para avanzar)
→ Los posibles riesgos (qué podría retrasar la entrega)

El manager lee el mensaje, hace preguntas si algo no está claro y no vuelve a preguntar
sobre el estado hasta el check-in acordado.
```

**Por qué funciona:**
El equipo tiene que pensar qué va a entregar antes de empezar a trabajar.
El manager tiene visibilidad sin tener que preguntar.
Si algo se retrasa, la persona lo comunica — no espera a que el manager lo detecte.

### ⏰ Las reuniones de seguimiento que sí funcionan

**El 1:1 semanal (la reunión más importante del manager):**
```
Duración: 30-45 minutos
Frecuencia: semanal (en remoto) o quincenal (en presencial con alta autonomía)

ESTRUCTURA (la agenda es de la persona, no del manager):
- ¿Cómo va la semana? ¿Qué está avanzando bien?
- ¿Qué está bloqueado o necesita ayuda?
- ¿Hay algo sobre la dirección del equipo/empresa que quiera entender mejor?

Lo que NO es un 1:1:
❌ Un informe de estado (eso lo tiene el manager del contrato semanal)
❌ Una sesión de corrección de errores
❌ Una reunión que el manager podría haber evitado mirando el sistema de seguimiento
```

**El standup asíncrono (para equipos remotos):**
```
Herramienta: Slack / Notion / Linear
Formato: mensaje diario de 3 frases:
"Ayer completé: [X]"
"Hoy voy a trabajar en: [Y]"
"Bloqueado en: [Z] — necesito [ayuda específica]"

Duración: 2 minutos por persona.
El manager lee todos los standups y actúa solo en los bloqueos.
```

### 🔴 Cuándo la autonomía no es suficiente: las señales de que hay que intervenir
Los 5 síntomas de que una persona del equipo necesita más estructura temporal (no más control permanente) y cómo ofrecer soporte sin señalizar desconfianza.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión productividad equipo, accountability, microgestión, trabajo remoto, OKRs equipo',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de rentabilidad por producto o línea de negocio: descubre dónde ganas y dónde pierdes dinero',
                'description'       => 'Analiza la rentabilidad real de cada producto, servicio o línea de negocio de tu empresa para tomar decisiones de asignación de recursos basadas en los números reales. Con el modelo de costes por producto, la asignación de costes indirectos y los umbrales de decisión para continuar, escalar o eliminar líneas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller de Gestión con experiencia implementando sistemas de análisis de rentabilidad por producto y segmento en empresas de servicios, SaaS y manufactura donde el análisis reveló que el 30-40% de las líneas de producto generaban pérdidas ocultas que el P&L global no mostraba.

Contexto:
- Tipo de empresa: [SaaS / servicios / ecommerce / manufactura / consultoría]
- Líneas de negocio o productos: [describe los productos/servicios que ofreces]
- Facturación total: [€]
- Estado actual: [tenemos un P&L global pero no por producto / queremos saber cuál es rentable / hemos detectado que algo no cuadra]

## Análisis de Rentabilidad por Producto — [Empresa]

### 🔍 Por qué el P&L global miente: el problema de los costes compartidos

**El escenario más común:**
```
Empresa con dos productos:
Producto A: factura €800k/año
Producto B: factura €200k/año

P&L global: Revenue €1M - Costes €700k = EBITDA €300k (30%)
El CEO está contento: "Somos rentables."

Pero la realidad (cuando analizas por producto):
Producto A: Revenue €800k - Costes €400k = Beneficio €400k (50% de margen)
Producto B: Revenue €200k - Costes €300k = Pérdida -€100k

Producto B está destruyendo €100k de valor al año.
El P&L global lo oculta porque el Producto A compensa.
```

### 📐 El modelo de costes por producto

**Los 3 tipos de costes en el análisis por producto:**

**Costes directos (fáciles de asignar):**
```
Son los costes que claramente pertenecen a un producto:
- Coste de los materiales o del servicio prestado
- Salario del equipo dedicado exclusivamente al producto
- Marketing específico del producto
- Licencias de software usadas solo para ese producto
```

**Costes semidirectos (asignación por driver):**
```
Son costes que se comparten pero con un driver claro de asignación:
- Equipo de soporte → se asigna en % de tickets por producto
- Infraestructura de hosting → se asigna en % de uso o de recursos consumidos
- Equipo de ventas compartido → se asigna en % de revenue generado por producto
```

**Costes indirectos o de estructura (asignación más discutible):**
```
Son los costes generales que benefician a todos por igual:
- Salario del CEO, CFO, RRHH
- Oficina y suministros
- Auditoría y gestoría

Los métodos de asignación:
→ Revenue (% de revenue de cada producto sobre el total)
→ Horas dedicadas (si se puede medir)
→ Headcount (% de personas por línea)
→ ABC costing (Activity-Based Costing — el más preciso pero el más complejo)
```

### 📊 El modelo completo (plantilla por producto)

```
LÍNEA DE PRODUCTO: [nombre]

REVENUE:
+ Ventas del producto:              €____
+ Upsells / expansión:              €____
= REVENUE TOTAL:                    €____

COSTES DIRECTOS:
- COGS (coste del servicio/producto): €____
- Equipo directo (salarios):          €____
- Marketing directo:                  €____
= MARGEN DE CONTRIBUCIÓN BRUTO:     €____ (__%)

COSTES SEMIDIRECTOS (asignados):
- Soporte (% de tickets):            €____
- Infraestructura (% de uso):        €____
- Ventas (% de revenue):             €____
= MARGEN DE CONTRIBUCIÓN NETO:      €____ (__%)

COSTES INDIRECTOS (asignados por %)
- Estructura general:                €____
= EBITDA POR PRODUCTO:              €____ (__%)
```

**Los umbrales de decisión:**
```
EBITDA >20%: producto sano — asigna más recursos y escala
EBITDA 0-20%: producto acceptable — optimiza costes o aumenta precio
EBITDA negativo: producto en pérdidas — necesita plan de turnaround en 90 días o eliminación
Margen contribución neto negativo: señal de alerta — ni siquiera cubre sus propios costes
```

### 🔄 Las decisiones estratégicas que el análisis de rentabilidad debe informar
El framework de decisión para los 4 escenarios posibles (escalar, optimizar, reposicionar, eliminar) y cómo comunicar la decisión de eliminar una línea de producto al equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Rentabilidad producto, análisis margen, costes por línea negocio, P&L por producto, controller',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'NDAs y acuerdos de confidencialidad: el contrato que protege sin ahuyentar al colaborador',
                'description'       => 'Redacta y negocia acuerdos de confidencialidad (NDA) para proteger la información sensible de tu empresa en conversaciones con potenciales socios, inversores, empleados y proveedores, sin que las cláusulas excesivas destruyan la confianza antes de empezar la relación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista con experiencia redactando y negociando NDAs para startups y empresas de tecnología en contextos de due diligence con inversores, negociaciones M&A, conversaciones de partnership y relaciones con proveedores críticos.

Contexto:
- Situación que requiere el NDA: [conversación con inversor / partnership / proveedor / empleado / due diligence M&A / otro]
- Tipo de información a proteger: [código fuente / clientes / precios / estrategia / todo]
- Si el NDA es: [unilateral (solo tú compartes) / bilateral/mutuo (ambos compartís)]
- Duración prevista de la relación: [conversación puntual / proyecto de meses / relación a largo plazo]

## NDA y Acuerdo de Confidencialidad — [Situación]

### 📋 Las 8 cláusulas esenciales de un NDA efectivo

**1. Definición de información confidencial:**
```
La cláusula más importante del NDA.
Si la definición es demasiado amplia ("todo lo que se comparta") → ineficaz e inaplicable.
Si es demasiado estrecha → deja fuera información que querías proteger.

Redacción recomendada:
"Se considera Información Confidencial toda información técnica, financiera, comercial, estratégica
o de cualquier otra naturaleza que la Parte Divulgadora comunique a la Parte Receptora, ya sea
de forma oral, escrita, electrónica o de cualquier otro modo, siempre que sea designada como
confidencial en el momento de la divulgación o que por su naturaleza sea razonablemente
reconocible como confidencial."
```

**2. Las excepciones a la confidencialidad (lo que no protege el NDA):**
```
La información deja de ser confidencial cuando:
a) Era de dominio público antes de ser comunicada (o pasa a serlo sin culpa del receptor)
b) El receptor ya la conocía antes de recibirla (con prueba documental)
c) El receptor la obtiene legítimamente de un tercero sin obligación de confidencialidad
d) El receptor la desarrolla de forma independiente (con prueba documental)
e) La divulgación es requerida por ley o resolución judicial (con notificación previa al divulgador)
```

**3. Obligaciones del receptor:**
```
La Parte Receptora se obliga a:
a) Tratar la Información Confidencial con el mismo grado de cuidado que aplica a su propia
   información confidencial, pero en ningún caso con menos que la diligencia de un profesional prudente
b) No divulgar la Información Confidencial a terceros sin consentimiento escrito previo
c) Utilizar la Información Confidencial exclusivamente para la finalidad descrita en el presente Acuerdo
d) Limitar el acceso a la Información Confidencial a los empleados y asesores que necesiten conocerla
   para los fines del Acuerdo
```

**4. La finalidad del acuerdo:**
```
Define exactamente para qué se comparte la información.
"La Información Confidencial se comparte exclusivamente para evaluar una posible inversión de [Inversor] en [Empresa]."
O: "para explorar una posible relación comercial de partnership en [área]."

La finalidad acota el uso de la información. Sin esta cláusula, el NDA tiene poca fuerza.
```

**5. El plazo de confidencialidad:**
```
Durante el acuerdo + X años después de su terminación.
Contextos habituales:
- Conversación con inversor: 2-3 años post-conversación
- Empleados: durante el contrato + 2-3 años
- Partners/proveedores: durante la relación + 2-3 años

No pongas "por tiempo indefinido" — los tribunales tienden a considerarlo desproporcionado
y puede invalidar la cláusula. 3-5 años es el rango habitual y defensible.
```

### 🤝 La negociación del NDA: qué cláusulas son negociables

**Lo que el inversor/partner suele pedir cambiar:**
```
1. La definición de información confidencial:
   Querrán acotarla (solo lo marcado expresamente como confidencial).
   Negociación: acepta la acotación a cambio de que el proceso de marcado sea claro.

2. La jurisdicción y ley aplicable:
   Si son internacionales, querrán la ley de su país.
   Si eres español, mantén ley española y jueces de tu ciudad.

3. El plazo:
   Los inversores sofisticados aceptan 2-3 años raramente.
   Suelen pedir 1-2 años post-conversación.
```

### 📝 Las situaciones donde el NDA NO es la solución correcta
Cuándo un NDA no protege (idea sin implementar, información que ya es pública, cuando el daño es difícil de cuantificar) y las alternativas (diseño del proceso de compartición, acuerdos de inversión directa con cláusulas de confidencialidad integradas).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'NDA, acuerdo confidencialidad, contrato confidencialidad, due diligence, protección información',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Diseño de la experiencia de soporte omnicanal: el cliente resuelve donde quiere sin repetirse',
                'description'       => 'Diseña la experiencia de soporte omnicanal donde el cliente puede empezar la conversación en un canal y continuar en otro sin tener que repetir su problema. Con la integración de canales, la unificación del historial del cliente y la estrategia de enrutamiento según el tipo de consulta y el canal.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience Director con experiencia diseñando arquitecturas de soporte omnicanal para empresas de ecommerce, telecomunicaciones y SaaS que han reducido el esfuerzo del cliente (CES) un 35% al eliminar la repetición de información entre canales.

Contexto:
- Canales de soporte actuales: [email / chat en vivo / teléfono / WhatsApp / redes sociales / todos]
- Herramienta de soporte: [Zendesk / Intercom / Freshdesk / Salesforce Service / otro]
- El mayor problema del cliente: [tiene que repetir el problema en cada canal / el agente no tiene el historial / los canales no están coordinados]
- Tipo de negocio: [ecommerce / SaaS / telecomunicaciones / servicios / otro]

## Experiencia de Soporte Omnicanal — [Empresa]

### 🎯 La diferencia entre multicanal y omnicanal

**Multicanal (lo que tienen la mayoría):**
```
El cliente puede contactar por email, chat, teléfono o WhatsApp.
Pero cada canal es un silo independiente con su propio sistema.
El agente del chat no ve lo que el cliente escribió por email.
El cliente tiene que repetir su problema cada vez que cambia de canal.

Síntoma: el cliente llama después de enviar un email porque no tuvo respuesta,
y el agente del teléfono no sabe que el email existe.
```

**Omnicanal (lo que queremos construir):**
```
El cliente puede empezar por chat, continuar por email y cerrar por teléfono.
El agente ve en todo momento TODO el historial del cliente en todos los canales.
El cliente no tiene que repetir nada — el agente ya sabe lo que pasó.

La tecnología que lo hace posible: una vista unificada del cliente (Customer 360).
```

### 🔧 La arquitectura técnica del soporte omnicanal

**El componente central: el sistema de tickets unificado**
```
Zendesk, Freshdesk, Intercom y Salesforce Service Cloud tienen la arquitectura omnicanal integrada.
La clave: todos los canales (email, chat, WhatsApp, teléfono, RRSS) crean tickets en el mismo sistema.
El perfil del cliente (quién es, qué compró, su historial de interacciones) está vinculado a todos los tickets.
```

**La integración de WhatsApp (el canal de mayor crecimiento en España y Latinoamérica):**
```
Opciones:
1. Zendesk + WhatsApp Business API (directo de Meta)
2. Freshdesk + WhatsApp Business (a través de Freshchat)
3. Integración directa con la API de WhatsApp + webhook al sistema de tickets

Lo que permite:
→ Los mensajes de WhatsApp crean tickets en Zendesk igual que los emails
→ El agente responde desde Zendesk sin salir de la herramienta
→ El cliente ve la respuesta en WhatsApp
```

**La integración de redes sociales:**
```
Los DMs de Instagram, mensajes de Facebook y menciones en Twitter/X
deben convertirse en tickets en el sistema de soporte.
Herramientas: Sprout Social (para equipos grandes), Mention (para equipos pequeños).

La regla de oro: si el cliente escribe en redes sociales esperando soporte,
necesitas responder en <2 horas durante horario de trabajo.
La ausencia de respuesta en RRSS es más dañina que una respuesta tardía por email.
```

### 🗺️ La estrategia de enrutamiento por canal y tipo de consulta

```
Canal / Tipo de consulta → Enrutamiento recomendado:

CHAT EN VIVO:
→ Estado de pedido, preguntas simples → bot primero, humano si escala
→ Problema técnico en curso → agente Tier 1 directamente

EMAIL:
→ Quejas formales → agente senior con SLA de 24h
→ Consultas de facturación → agente especializado
→ Consultas generales → agente Tier 1

TELÉFONO:
→ Clientes enterprise o de alto valor → agente dedicado
→ Problemas urgentes con servicio caído → agente Tier 2 directamente

WHATSAPP:
→ Consultas simples → bot + opción de hablar con humano
→ Clientes de alto valor → agente con acceso a historial completo
```

### 📊 Las métricas del soporte omnicanal que van más allá del CSAT
El Customer Effort Score (CES) por canal, la tasa de "repetición de información" como métrica de experiencia y el análisis de los canales con mayor tasa de escalado para identificar gaps de cobertura.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Soporte omnicanal, customer experience, CX multicanal, WhatsApp soporte, vista 360 cliente',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'De freelance a estudio o agencia: cuándo y cómo dar el salto sin perder lo que hiciste bien solo',
                'description'       => 'Decide si tiene sentido pasar de freelance individual a crear un estudio o agencia pequeña, y cómo ejecutar esa transición sin perder la calidad, los clientes y la rentabilidad que conseguiste trabajando solo. Con el modelo de negocio del estudio, las primeras contrataciones y las métricas que indican que estás listo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach especializado en la transición de freelance a estudio con experiencia acompañando a más de 150 profesionales independientes en esta decisión, donde el 40% concluye que el modelo freelance sigue siendo la mejor opción para ellos y el 60% logra construir un estudio rentable.

Perfil:
- Especialidad: [diseño / desarrollo / marketing / consultoría / otro]
- Años como freelance: [N]
- Ingresos anuales actuales: [€]
- La razón por la que te planteas el cambio: [tengo más trabajo del que puedo asumir solo / quiero escalar los ingresos / quiero construir algo con más impacto / otro]

## De Freelance a Estudio o Agencia — [Especialidad]

### ⚠️ La pregunta que debes responder primero: ¿quieres ser dueño de un negocio o quieres hacer tu trabajo?

**El error de confundir "escalar" con "contratar":**
Muchos freelancers exitosos crean un estudio y descubren que ahora gestionan personas y proyectos
en lugar de hacer el trabajo que les hacía buenos.

El freelance que cobra €100k/año trabajando solo puede ganar más que el dueño de una agencia de €500k
en revenue con 4 empleados, si el margen del estudio es del 20%.

**Las dos preguntas que definen la decisión:**
```
1. ¿Qué problema quieres resolver con el cambio?
   Si la respuesta es "tengo demasiado trabajo" → considera subcontratar antes de contratar.
   Si la respuesta es "quiero construir algo más grande que yo" → el estudio tiene sentido.

2. ¿Te gusta gestionar personas y proyectos?
   Porque eso es el 60% del trabajo de un dueño de estudio.
   Si la respuesta es no → mantén el modelo freelance y busca la productización.
```

### 📊 Las señales de que estás listo para crear el estudio (todas deben cumplirse)

```
SEÑAL 1 — Tienes más demanda de la que puedes atender:
Rechazas proyectos buenos con regularidad (no por mala calidad del proyecto — por capacidad).
La lista de espera supera los 2 meses.

SEÑAL 2 — Tienes ingresos recurrentes suficientes para cubrir el coste del primer empleado:
El primer empleado cuesta €2.500-4.000/mes (salario + Seguridad Social + herramientas).
Antes de contratar, debes tener ese coste cubierto durante al menos 6 meses con el flujo actual.

SEÑAL 3 — Tienes un proceso documentado y repetible:
Si no puedes explicar cómo haces tu trabajo en un documento, no puedes enseñárselo a nadie.
El proceso no te quita a ti — te multiplica a través de otros.

SEÑAL 4 — Tienes clientes con proyectos recurrentes o de largo plazo:
Los proyectos puntuales son difíciles de gestionar con un equipo.
Los retainers y proyectos largos permiten planificar la capacidad del estudio.
```

### 🏗️ El modelo de negocio del estudio: cómo funciona la economía

```
MODELO 1 — El estudio de servicios (el más frecuente):
Revenue: clientes pagan por proyectos o retainers
Margen objetivo: 40-60% (después de pagar al equipo)
Riesgo: dependes del cliente para el revenue

MODELO 2 — El estudio + producto propio:
Revenue: clientes (60-70%) + producto propio (30-40%)
Margen: mixto — margen alto en el producto, variable en los servicios
Riesgo: construir el producto require tiempo sin revenue inmediato

MODELO 3 — El subcontratista especializado:
Trabajas solo pero con una red de freelancers especializados que subucontratas por proyecto.
No contratas empleados — coordinas un equipo flexible.
Riesgo bajo, escalabilidad media, sin coste fijo de personal.
```

**Las primeras 2 contrataciones:**
```
Primera contratación: NO es otro experto en tu especialidad.
ES: alguien que hace las tareas que haces tú que NO requieren tu expertise.
  → Un project manager o coordinador de proyectos
  → Un asistente que gestiona la comunicación con clientes
  → Un perfil junior que hace el trabajo base mientras tú haces el trabajo de más valor

Segunda contratación: ahora sí, un perfil junior de tu especialidad al que enseñas.
```

### 📋 El plan de transición en 12 meses
Los hitos del primer año del estudio: el primer subcontratista (mes 1-3), la primera contratación (mes 4-6), la estandarización del proceso de entrega (mes 7-9) y la primera propuesta sin que tú hagas el trabajo (mes 10-12).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Freelance a agencia, crear estudio, escalar freelance, primera contratación, modelo negocio estudio',
                'vote_score'        => 44,
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
