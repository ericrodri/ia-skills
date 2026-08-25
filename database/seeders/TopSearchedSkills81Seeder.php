<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills81Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing para apps de IA',
                'description'      => 'Cómo comunicar y vender productos de inteligencia artificial a usuarios no técnicos: posicionamiento, mensajes y canales para crecer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en marketing de producto con experiencia en startups de inteligencia artificial y herramientas de software para usuarios no técnicos. Necesito diseñar la estrategia de marketing de mi producto de IA.

**Mi producto de IA:**
[Describe qué hace el producto: qué problema resuelve, para quién, en qué formato (app web / móvil / extensión / API)]

**Usuario objetivo:**
[Perfil del usuario: profesión, nivel técnico, contexto de uso — empresa / consumidor final]

**Situación actual:**
[Pre-lanzamiento / recién lanzado / tenemos usuarios pero no crecemos / queremos monetizar mejor]

---

## PARTE 1 — EL RETO DE COMUNICAR IA A USUARIOS NO TÉCNICOS

### Por qué el marketing de IA suele fracasar

Los cuatro errores más comunes:

1. **Comunicar la tecnología, no el resultado**: "Usamos un LLM de última generación" no le importa a nadie que no sea developer
2. **El hype de la IA como argumento de venta**: en 2024, todo dice que usa IA — ya no es un diferenciador
3. **Prometer magia y entregar algo más limitado**: las expectativas de la IA son altas y la decepción es rápida
4. **Ignorar el miedo y la desconfianza**: muchos usuarios tienen dudas sobre privacidad, errores y dependencia

### El principio del "resultado visible"

El usuario no compra IA. Compra el resultado que la IA le da.

Reformula tus mensajes:
- Mal: "IA que analiza tus documentos"
- Bien: "Respuestas de tus contratos en segundos, sin leer 200 páginas"

- Mal: "Generación de contenido con IA"
- Bien: "Un mes de contenido para LinkedIn en una hora"

Transforma cada feature técnica en un resultado concreto y medible para el usuario.

---

## PARTE 2 — POSICIONAMIENTO Y MENSAJES

### Framework de posicionamiento para productos de IA

Completa esta plantilla de posicionamiento:

```
Para [audiencia objetivo],
que tienen el problema de [problema específico y frecuente],
[nombre del producto] es la única [categoría de producto]
que [beneficio principal único]
a diferencia de [alternativa principal],
que [limitación de la alternativa].
```

### Mensaje principal (elevator pitch) en tres versiones

**Versión de 10 segundos** (para LinkedIn headline o homepage H1):
Un resultado + para quién + diferenciador

**Versión de 30 segundos** (para el primer párrafo de la web o un post de LinkedIn):
Problema → consecuencia del problema → solución → prueba

**Versión de 2 minutos** (para una demo, un vídeo o una propuesta):
Historia del cliente tipo → el momento del problema → cómo tu producto lo resuelve → resultado obtenido → prueba social

### Mensajes por objeción de usuario

Diseña el mensaje que responde a cada objeción típica de un usuario no técnico ante un producto de IA:

| Objeción | Respuesta de mensaje | Formato recomendado |
|----------|---------------------|---------------------|
| "No confío en que sea preciso" | Transparencia sobre limitaciones + muestra de casos de uso donde sí funciona | Demo interactiva, garantía |
| "¿Qué pasa con mis datos?" | Política de privacidad clara, sin datos de entrenamiento de usuarios | FAQ, badge de seguridad |
| "Es demasiado complicado de usar" | Time-to-first-value < 5 minutos + onboarding guiado | Tutorial en vídeo de 60s |
| "Ya tengo una solución que funciona" | Comparativa específica con su solución actual, cómo conviven | Caso de migración |
| "No sé si lo usaré suficiente para justificar el precio" | Prueba gratuita generosa + calculadora de ROI | Free trial, freemium |

---

## PARTE 3 — CANALES DE ADQUISICIÓN PARA APPS DE IA

### Canales por etapa de crecimiento

**Etapa 0-100 usuarios: validación manual**
- Comunidades de Product Hunt, Reddit (r/entrepreneur, r/SaaS, r/MachineLearning si el usuario es técnico)
- Grupos de Facebook o Slack de tu audiencia objetivo
- Tu red personal y la del fundador
- Direct outreach a usuarios potenciales para demos 1:1

**Etapa 100-1.000 usuarios: primeros canales escalables**
- Contenido en LinkedIn o Twitter/X (el fundador como cara visible)
- SEO para keywords de "herramienta para X" o "cómo hacer X con IA"
- Partnerships con newsletters de tu nicho
- Product Hunt launch (preparación: 4-6 semanas)

**Etapa 1.000+ usuarios: crecimiento paid + word of mouth**
- Google Ads para búsquedas de alta intención
- Programa de referidos bien diseñado
- Integraciones con plataformas donde ya está tu usuario (Zapier, Chrome Web Store, etc.)
- Afiliados o influencers de tu nicho

### El lanzamiento en Product Hunt

Product Hunt sigue siendo el canal de validación más potente para apps de IA. Prepara:

1. **Pre-lanzamiento (4 semanas antes)**: construye tu lista de "hunters" y seguidores, únete a comunidades de founders
2. **Assets del lanzamiento**: logo, tagline (60 caracteres), descripción, vídeo demo de 60s, capturas de pantalla
3. **El día del lanzamiento**: publica a las 12:01 AM hora de San Francisco, activa a tu comunidad para los primeros votos
4. **Responde todos los comentarios**: Product Hunt premia la participación activa del maker
5. **Objetivo realista**: top 5 del día puede generar 300-1.000 registros

### SEO específico para productos de IA

Las keywords con mayor intención de uso:

- "[tarea que hace] con IA": "transcribir audio con IA", "resumir PDFs con IA"
- "mejor herramienta de IA para [rol]": "mejor IA para community managers"
- "alternativa a [herramienta conocida]": "alternativa a Jasper", "alternativa a Grammarly con IA"
- "cómo [hacer tarea] más rápido": long-tail de alta conversión

Crea páginas de landing específicas para cada keyword cluster. Los blogs de comparativas y tutoriales de caso de uso tienen alto CTR para productos de IA.

---

## PARTE 4 — DEMOSTRACIONES Y ACTIVACIÓN

### El vídeo demo que convierte

Un buen vídeo demo de un producto de IA (60-90 segundos):

1. **0-5s**: el problema en una frase (sin logo todavía)
2. **5-20s**: muestra el problema real del usuario (pantalla normal, proceso tedioso)
3. **20-60s**: el producto en acción con el resultado visible (no el proceso técnico)
4. **60-75s**: el resultado final comparado con el antes
5. **75-90s**: CTA y nombre del producto

Normas del vídeo:
- Sin voz en off técnica — usa texto en pantalla simple
- Velocidad 1.25x del uso real — si es demasiado lento parece poco impresionante
- Subtítulos siempre (el 85% de los vídeos de redes se ven sin sonido)

### El onboarding que demuestra el valor en < 5 minutos

Para productos de IA, el time-to-wow debe ser < 5 minutos:

1. **Registro mínimo**: email + contraseña o Google SSO (sin datos de tarjeta hasta el momento de conversión)
2. **Primera acción = resultado de IA**: el usuario interactúa con la IA antes de cualquier configuración
3. **Muestra lo que la IA hizo**: explica qué procesó y por qué el resultado es así
4. **Genera curiosidad**: "¿Qué quieres hacer a continuación?" con opciones concretas

---

## PARTE 5 — CONFIANZA Y ÉTICA EN EL MARKETING DE IA

### Cómo comunicar las limitaciones sin perder credibilidad

Ser transparente sobre lo que la IA puede y no puede hacer no debilita la propuesta de valor — la fortalece:

- "Nuestra IA revisa el 95% de los errores de [tarea], pero siempre recomendamos una revisión humana final"
- "Entrenado con datos hasta [fecha] — para información muy reciente, contrástalo con fuentes actualizadas"
- "Mejor en [contexto A], puede tener limitaciones en [contexto B]"

### Política de datos y privacidad como ventaja de marketing

Para usuarios no técnicos, la privacidad es un bloqueador emocional, no técnico. Comunícala con claridad:

- "Tus documentos nunca se usan para entrenar nuestros modelos"
- "Tus datos se procesan en servidores europeos (GDPR compliant)"
- "Eliminamos tus datos cuando tú nos lo pides, sin preguntas"

Convierte la política de privacidad en un mensaje de marketing, no en letra pequeña.

---

## ENTREGABLES

1. Plantilla de posicionamiento completa para mi producto de IA
2. Los 5 mensajes clave (un mensaje por objeción de usuario) con el copy exacto
3. Plan de lanzamiento en Product Hunt: checklist de 4 semanas
4. Estructura del onboarding en < 5 minutos con pantallas y copy de cada paso
5. Política de privacidad en lenguaje no técnico (resumen de 5 puntos para la web)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar la estrategia de marketing para un producto de IA: posicionamiento, mensajes para usuarios no técnicos, canales de adquisición y comunicación de la privacidad.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Ciberseguridad para developers',
                'description'      => 'OWASP Top 10 aplicado: implementa las protecciones que evitan las vulnerabilidades más comunes sin necesitar ser un experto en seguridad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como ingeniero de seguridad con experiencia en application security y secure coding practices. Necesito entender y aplicar las protecciones de seguridad más importantes en mis aplicaciones web como developer.

**Mi stack:**
[Node.js/Express / Django / Laravel / Rails / Spring Boot / Next.js — especifica]

**Tipo de aplicación:**
[API REST / aplicación web con autenticación / plataforma SaaS / microservicios]

**Nivel de seguridad actual:**
[Sin medidas específicas / hemos implementado autenticación básica / queremos hacer un security audit]

---

## PARTE 1 — EL OWASP TOP 10: LAS VULNERABILIDADES MÁS CRÍTICAS

### A01 — Broken Access Control (Control de acceso roto)

La vulnerabilidad más común y más crítica en 2021-2024.

**Qué es**: el usuario puede acceder a recursos o acciones que no debería poder ver o realizar.

**Ejemplos de código vulnerable**:
```javascript
// ❌ VULNERABLE: el usuario puede ver cualquier pedido cambiando el ID en la URL
app.get('/orders/:id', async (req, res) => {
  const order = await Order.findById(req.params.id);
  res.json(order);
});

// ✅ SEGURO: verificar que el pedido pertenece al usuario autenticado
app.get('/orders/:id', authenticate, async (req, res) => {
  const order = await Order.findOne({
    _id: req.params.id,
    userId: req.user.id  // verificación de propiedad
  });
  if (!order) return res.status(403).json({ error: 'Forbidden' });
  res.json(order);
});
```

**Cómo prevenirlo**:
- Verificar siempre que el recurso pertenece al usuario autenticado (IDOR prevention)
- Implementar RBAC (Role-Based Access Control) con una librería probada
- Denegar por defecto: si no hay permiso explícito, denegar
- Nunca basar el control de acceso en IDs secuenciales predecibles

### A02 — Cryptographic Failures (Fallos criptográficos)

Datos sensibles expuestos por uso incorrecto o nulo de criptografía.

**Errores comunes**:
```javascript
// ❌ VULNERABLE: MD5 y SHA-1 son inseguros para passwords
const hash = crypto.createHash('md5').update(password).digest('hex');

// ❌ VULNERABLE: sin salt, vulnerable a rainbow tables
const hash = crypto.createHash('sha256').update(password).digest('hex');

// ✅ SEGURO: bcrypt con cost factor adecuado
const hash = await bcrypt.hash(password, 12);
const isValid = await bcrypt.compare(inputPassword, hash);
```

**Para datos en tránsito**:
- HTTPS obligatorio en todos los endpoints (redirigir HTTP a HTTPS)
- HSTS headers: `Strict-Transport-Security: max-age=31536000; includeSubDomains`
- Certificados válidos y renovados automáticamente (Let's Encrypt + Certbot)

**Para datos en reposo**:
- Nunca almacenar passwords, solo hashes
- Secretos de API y credenciales en variables de entorno o secrets manager, nunca en código
- PII (datos personales) cifrados en base de datos si el impacto de una brecha es alto

### A03 — Injection (Inyección SQL, NoSQL, comandos)

**SQL Injection — siempre usar queries parametrizadas**:
```javascript
// ❌ VULNERABLE
const query = `SELECT * FROM users WHERE email = '${email}'`;

// ✅ SEGURO: query parametrizada
const user = await db.query('SELECT * FROM users WHERE email = $1', [email]);

// ✅ SEGURO con ORM (la parametrización es automática)
const user = await User.findOne({ where: { email } });
```

**NoSQL Injection en MongoDB**:
```javascript
// ❌ VULNERABLE: el usuario puede pasar { $gt: '' } como password
const user = await User.findOne({ email: req.body.email, password: req.body.password });

// ✅ SEGURO: validar que los inputs son strings, no objetos
const email = String(req.body.email);
const password = String(req.body.password);
```

**Command Injection**:
```javascript
// ❌ VULNERABLE: nunca pasar input del usuario a exec/spawn directamente
exec(`convert ${userFile} output.jpg`, callback);

// ✅ SEGURO: usar spawn con argumentos separados (no shell)
spawn('convert', [sanitizedUserFile, 'output.jpg']);
```

### A05 — Security Misconfiguration (Configuración incorrecta)

**Headers de seguridad HTTP** — usa la librería `helmet` en Node.js:
```javascript
const helmet = require('helmet');
app.use(helmet()); // activa: X-Frame-Options, X-Content-Type-Options, CSP, etc.

// Configuración explícita de CSP
app.use(helmet.contentSecurityPolicy({
  directives: {
    defaultSrc: ["'self'"],
    scriptSrc: ["'self'"],
    styleSrc: ["'self'", 'https://fonts.googleapis.com'],
    imgSrc: ["'self'", 'data:'],
  },
}));
```

**Errores de configuración más comunes**:
- Debug mode activo en producción
- Stack traces expuestas en respuestas de error al cliente
- Puertos de administración (Redis, MongoDB) expuestos a internet sin autenticación
- Claves secretas en variables por defecto (JWT_SECRET=secret, etc.)

### A07 — Identification and Authentication Failures

**JWT correctamente implementado**:
```javascript
// ❌ VULNERABLE: secreto débil, sin expiración, algoritmo por defecto
jwt.sign({ userId: user.id }, 'secret');

// ✅ SEGURO
jwt.sign(
  { userId: user.id },
  process.env.JWT_SECRET,  // secreto largo y aleatorio (256+ bits)
  {
    expiresIn: '15m',       // tokens de acceso de corta vida
    algorithm: 'HS256',
    issuer: 'tu-app.com',
  }
);
```

**Protección contra fuerza bruta**:
```javascript
const rateLimit = require('express-rate-limit');
const loginLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutos
  max: 5,                    // máximo 5 intentos por IP
  message: 'Too many login attempts, please try again later',
});
app.post('/login', loginLimiter, loginHandler);
```

---

## PARTE 2 — VALIDACIÓN Y SANITIZACIÓN DE INPUTS

### Esquema de validación con Zod (TypeScript) o Joi (JavaScript)

```typescript
import { z } from 'zod';

const CreateUserSchema = z.object({
  email: z.string().email().max(255),
  password: z.string().min(8).max(128).regex(/^(?=.*[A-Z])(?=.*[0-9])/),
  name: z.string().min(1).max(100).trim(),
  age: z.number().int().min(18).max(120).optional(),
});

// En el handler
const result = CreateUserSchema.safeParse(req.body);
if (!result.success) {
  return res.status(400).json({ errors: result.error.format() });
}
const validatedData = result.data; // ya es seguro usar esto
```

### Sanitización de HTML (XSS prevention)

```javascript
const DOMPurify = require('dompurify');
const { JSDOM } = require('jsdom');
const window = new JSDOM('').window;
const purify = DOMPurify(window);

// Para contenido HTML que el usuario genera y otros usuarios verán:
const cleanHtml = purify.sanitize(userInput);

// Para texto plano (sin HTML):
const escapeHtml = (str) => str
  .replace(/&/g, '&amp;')
  .replace(/</g, '&lt;')
  .replace(/>/g, '&gt;')
  .replace(/"/g, '&quot;');
```

---

## PARTE 3 — GESTIÓN DE SECRETOS Y CONFIGURACIÓN

### Variables de entorno correctas

```bash
# .env.example (sí al repositorio — sin valores reales)
DATABASE_URL=postgresql://user:password@host:5432/dbname
JWT_SECRET=your-256-bit-secret-here
STRIPE_SECRET_KEY=sk_live_...

# .env (NUNCA al repositorio — en .gitignore)
DATABASE_URL=postgresql://real_user:real_pass@localhost:5432/mydb
JWT_SECRET=abc123def456...
```

### Checklist de seguridad antes de hacer deploy

- [ ] Sin credenciales hardcodeadas en el código (busca con `git grep -i "password\|secret\|api_key"`)
- [ ] .env está en .gitignore y nunca fue commiteado
- [ ] Debug mode desactivado en producción
- [ ] Headers de seguridad configurados (helmet o equivalente)
- [ ] Rate limiting en endpoints de login y registro
- [ ] Passwords hasheadas con bcrypt o argon2 (no MD5, SHA-1, SHA-256)
- [ ] Queries parametrizadas en todas las consultas a base de datos
- [ ] HTTPS forzado en producción
- [ ] Dependencias actualizadas (npm audit / pip check)
- [ ] Logs sin datos sensibles (sin passwords, tokens ni PII en logs)
- [ ] CORS configurado para permitir solo los orígenes necesarios

---

## PARTE 4 — DEPENDENCY SCANNING Y SUPPLY CHAIN

### npm audit / pip check como parte del CI/CD

```bash
# En GitHub Actions o GitLab CI
npm audit --audit-level=high
# Falla el pipeline si hay vulnerabilidades de severidad alta o crítica

# Para corregir automáticamente las que se pueden
npm audit fix
```

### Dependencias con mayor superficie de ataque

Las librerías más críticas a mantener actualizadas:
- ORM / librería de base de datos
- Framework web principal
- Librería de autenticación / JWT
- Librería de procesamiento de archivos (subida de imágenes, PDFs)
- Cualquier librería que parsee XML o YAML

---

## ENTREGABLES

1. Checklist de security review por PR (preguntas que todo developer debe hacerse antes de hacer merge)
2. Middleware de seguridad básico para mi framework (código comentado y listo para usar)
3. Plantilla de threat modeling: las 5 amenazas más probables para mi tipo de aplicación y cómo mitigarlas
4. Proceso de respuesta a incidentes de seguridad: qué hacer las primeras 2 horas si descubro una brecha
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Implementar las protecciones del OWASP Top 10 en aplicaciones web: código seguro, validación de inputs, gestión de secretos y checklist de deploy.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de productos de IA',
                'description'      => 'Cómo diseñar interfaces para funcionalidades de IA que generen confianza, sean comprensibles y no frustren al usuario cuando el modelo se equivoca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de experiencia de usuario especializado en productos de inteligencia artificial y sistemas adaptativos. Necesito diseñar las interfaces y flujos de una funcionalidad de IA en mi producto.

**Mi producto:**
[Describe el producto y la funcionalidad de IA que estás diseñando: qué hace la IA, qué input toma, qué output genera]

**Usuario objetivo:**
[Perfil técnico / no técnico, frecuencia de uso, contexto]

**Reto de diseño principal:**
[Los usuarios no confían en el output de la IA / la IA comete errores y no sabemos cómo comunicarlos / los usuarios no saben cómo usar la funcionalidad / queremos dar sensación de magia sin sobre-prometer]

---

## PARTE 1 — PRINCIPIOS DE DISEÑO PARA PRODUCTOS DE IA

### Los cinco principios de AI/UX según Google PAIR

1. **Claridad de capacidades**: el usuario debe entender qué puede y qué no puede hacer la IA antes de usarla
2. **Control del usuario**: el usuario siempre debe poder corregir, rechazar o ignorar el output de la IA
3. **Reconocimiento de incertidumbre**: cuando la IA no está segura, debe comunicarlo (no mentir con falsa confianza)
4. **Aprendizaje de la retroalimentación**: si el usuario corrige a la IA, el producto debe mejorar o al menos reconocerlo
5. **Comunicación de automatización**: siempre debe quedar claro qué hizo la IA y qué hizo el humano

### El problema de la "caja negra"

Los usuarios rechazan o desconfían de sistemas que:
- Dan resultados sin explicar (ni brevemente) cómo llegaron a ellos
- Cometen errores sin advertir previamente que podían equivocarse
- No permiten corregir o rechazar su output fácilmente

Estrategias de "cristal transparente":
- Mostrar qué datos usó la IA para generar el resultado
- Ofrecer una versión corta de "por qué te sugiero esto"
- Permitir ver alternativas cuando el resultado no convence

---

## PARTE 2 — COMUNICACIÓN DE LA CONFIANZA Y LA INCERTIDUMBRE

### Cómo comunicar el nivel de confianza sin abrumar

Escala visual de confianza que no usa porcentajes técnicos:

| Nivel de confianza del modelo | Diseño UX recomendado | Ejemplo de copy |
|-------------------------------|----------------------|-----------------|
| Alta confianza (> 90%) | Resultado directo, sin disclaimers | "Tu contrato vence el 15 de marzo" |
| Confianza media (70-90%) | Resultado con sugerencia de verificar | "Parece que vence el 15 de marzo — revísalo para confirmar" |
| Baja confianza (< 70%) | No mostrar resultado directo, pedir más información | "No tengo suficiente información para estar seguro — ¿puedes añadir X?" |
| Error o imposible | Explicar el límite claramente | "Esto está fuera de lo que puedo analizar. Prueba con [alternativa]" |

### Diseño de error states para IA

Los errores de IA son diferentes a los errores de software:
- Un error de software (404, 500) es un fallo técnico — el sistema no funcionó
- Un error de IA es una limitación — el sistema funcionó pero el modelo no pudo

**Micro-copy para errores de IA**:
- ❌ "Error al procesar" (vago, da sensación de bug)
- ✅ "No pude analizar este documento porque [razón específica]. Prueba con [alternativa concreta]"

**El botón "Esto no es correcto"**:
- Siempre presente junto a cualquier output de IA
- Al pulsar: formulario minimalista (1-2 campos) o simplemente un pulgar abajo
- Feedback inmediato: "Gracias, aprenderemos de esto" (aunque sea solo para análisis interno)

---

## PARTE 3 — DISEÑO DE LA INTERACCIÓN CON IA

### Tipos de interfaces para IA

| Tipo | Descripción | Casos de uso | Ventajas / Riesgos |
|------|-------------|--------------|-------------------|
| Chat / conversacional | Input texto libre, output texto | Asistentes, Q&A, análisis | Familiar, flexible / expectativas demasiado altas |
| Formulario con IA asistiendo | Inputs estructurados, IA rellena o sugiere | Generación de documentos, formularios inteligentes | Guiado, menos errores / puede sentirse mecánico |
| IA en segundo plano | El usuario no ve la IA, solo el resultado | Clasificación automática, recomendaciones | Invisible / si falla, el usuario no sabe por qué |
| Co-piloto | El humano trabaja, la IA sugiere en tiempo real | Editores de texto, código, diseño | Muy útil para expertos / puede ser intrusiva |

### Diseño del prompt input (si el usuario escribe)

Para interfaces donde el usuario da instrucciones a la IA:

1. **Placeholder útil**: no "Escribe aquí" — muestra un ejemplo real del tipo de input que funciona bien
2. **Ejemplos de prompts**: muestra 3-5 ejemplos de "qué puedes pedir" antes de que el usuario empiece
3. **Contador de tokens o caracteres**: si hay límite, muéstralo antes de que el usuario llegue al límite
4. **Historial de prompts**: permite volver a un prompt anterior sin escribir de nuevo
5. **Templates**: para usuarios no técnicos, ofrece plantillas de prompt prediseñadas para casos de uso comunes

### El flujo de revisión humana

Para outputs de alta importancia (documentos legales, emails a clientes, decisiones financieras), diseña un flujo de revisión obligatoria:

```
IA genera output
    ↓
Pantalla de "Revisa antes de usar"
├── Highlight de las partes más probablemente incorrectas
├── Acciones: Editar / Aprobar / Rechazar y pedir de nuevo
└── Si aprueba: el output se marca como "revisado por humano"
```

Este flujo comunica que la IA no es infalible y que el humano tiene la última palabra.

---

## PARTE 4 — ONBOARDING DE FUNCIONALIDADES DE IA

### El primer uso: gestión de expectativas

El primer uso de una funcionalidad de IA es el más crítico. Si el resultado no es bueno o no se entende, el usuario nunca vuelve.

**Estrategia de first-run experience**:

1. **Antes de que el usuario interactúe**: muestra un ejemplo del output real (no un mockup perfecto, uno real típico)
2. **Explica la IA en una frase**: "Nuestra IA analiza [X] para sugerirte [Y]. Funciona mejor cuando [condición]"
3. **Guía el primer input**: para el primer uso, simplifica el input o usa datos de ejemplo tuyos
4. **Celebra el primer resultado**: aunque sea básico, muéstralo como un logro ("¡Aquí tienes tu primer [resultado]!")
5. **Explica cómo mejorar**: "Cuanto más [hagas X], mejor será el resultado"

### Progressive disclosure de la IA

No muestres toda la capacidad de IA desde el primer día:

- **Nivel 1 (primeras sesiones)**: solo la feature de IA principal, bien explicada
- **Nivel 2 (usuario activo)**: features de IA avanzadas, personalizables
- **Nivel 3 (usuario experto)**: control fino sobre el modelo (si aplica): tono, longitud, estilo

---

## PARTE 5 — ACCESIBILIDAD Y ÉTICA EN EL DISEÑO DE IA

### Diseño inclusivo para outputs de IA

1. **No asumas que el usuario entiende "IA"**: para muchos usuarios, el output de la IA es simplemente "la app"
2. **Alternativas a lenguaje de IA**: en lugar de "el modelo predice...", usa "estimamos que..."
3. **Considera usuarios con dificultades cognitivas**: el output de IA puede ser abrumador — ofrece versión simplificada
4. **Lee en voz alta**: si el producto tiene lectores de pantalla, ¿el output de IA se lee con coherencia?

### Evitar sesgos en el diseño de la interfaz

El diseño puede amplificar sesgos del modelo:
- Si la IA sugiere opciones, ¿el diseño de la interfaz favorece alguna sobre otras?
- ¿Los ejemplos y placeholders representan diversidad?
- ¿Los errores del modelo afectan más a ciertos grupos de usuarios?

### La cláusula de "humano en el bucle"

Para cualquier decisión que afecte significativamente al usuario, diseña un punto de control humano:
- La IA no puede tomar la acción final sola (solo sugerir)
- El usuario tiene 24-48h para revertir cualquier acción tomada por la IA
- Un email de confirmación para acciones irreversibles

---

## ENTREGABLES

1. Principios de diseño de IA para mi producto: 5 principios adaptados a mi contexto específico
2. Especificación de todos los estados de error de la funcionalidad de IA (vacío, procesando, éxito, error, baja confianza)
3. Flujo de revisión humana para el output de IA más crítico de mi producto
4. Guía de micro-copy para IA: cómo hablar de la IA en la interfaz (qué decir, qué no decir, tono)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar interfaces para funcionalidades de IA que generen confianza: comunicar incertidumbre, gestionar errores, onboarding y flujos de revisión humana.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta recurrente y suscripciones',
                'description'      => 'El proceso comercial específico para vender contratos de suscripción y asegurar renovaciones anuales en modelos de ingresos recurrentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director comercial con experiencia en ventas de SaaS, servicios de suscripción y contratos de mantenimiento recurrente. Necesito diseñar el proceso comercial específico para vender suscripciones y garantizar su renovación.

**Mi modelo de negocio:**
[SaaS mensual/anual / servicio de mantenimiento recurrente / membresía / retainer de consultoría / contrato de soporte]

**Ticket medio:**
[Precio mensual y/o anual del contrato]

**Ciclo de venta:**
[Días/semanas desde primer contacto hasta firma del contrato inicial]

**Problema principal:**
[Los clientes prefieren mensual a anual / la tasa de renovación es baja / no sabemos cómo justificar el precio anual / los clientes cancelan antes del año]

---

## PARTE 1 — LA MENTALIDAD DE LA VENTA RECURRENTE

### Por qué la venta de suscripciones es diferente a la venta transaccional

En la venta transaccional, el comercial cierra el trato y pasa al siguiente.
En la venta de suscripciones, el cierre es solo el comienzo. El contrato se "re-vende" en cada renovación.

Consecuencias para el proceso comercial:
1. **La promesa de venta debe ser cumplible**: lo que prometes en la venta, el cliente lo exigirá en la renovación
2. **El onboarding es parte del proceso de venta**: un mal onboarding destruye la renovación antes de que empiece
3. **El AE necesita coordinarse con CS**: el traspaso post-venta es crítico
4. **El valor debe demostrarse continuamente**: el cliente toma la decisión de renovar cada mes (aunque sea anual)

### La matemática de los ingresos recurrentes

Explica estas métricas y por qué son más importantes que las ventas nuevas:

- **MRR (Monthly Recurring Revenue)**: ingresos recurrentes mensuales = base del negocio
- **ARR (Annual Recurring Revenue)**: MRR × 12 = valoración del negocio
- **Churn rate**: % de clientes que cancelan al mes / al año
- **Net Revenue Retention (NRR)**: si es > 100%, el negocio crece solo con los clientes actuales
- **Customer Lifetime Value (LTV)**: el valor total de un cliente en toda su vida útil

Ejemplo: con un churn del 5% mensual, el LTV medio es 20 meses. Con un churn del 1% mensual, el LTV es 100 meses. La diferencia en valoración del negocio es exponencial.

---

## PARTE 2 — VENDER EL CONTRATO ANUAL

### Por qué el contrato anual beneficia a ambas partes

**Para el cliente**:
- Precio menor (descuento del 15-25% sobre mensual acumulado)
- Presupuesto predecible: saben exactamente lo que van a gastar
- Sin interrupciones del servicio por falta de pago de una mensualidad
- Prioridad en soporte y acceso anticipado a nuevas features (si lo ofreces)

**Para tu empresa**:
- Cashflow predecible (o cobro por adelantado)
- Menor churn involuntario (tarjeta caducada, etc.)
- Menor coste de renovación (una conversación al año vs. doce)
- Valoración del negocio más alta (ARR con contratos anuales vale más que MRR)

### El argumento del precio anual en la propuesta

**Script de la conversación de pricing**:

"Tenemos dos opciones. La mensual, que es X€/mes, que te da flexibilidad total para cancelar cuando quieras. Y la anual, que son Y€/año — que equivale a Z€/mes, un ahorro de [ahorro total] al año. La mayoría de nuestros clientes elige la anual porque [beneficio específico para su caso]. ¿Qué tiene más sentido para vosotros?"

**Técnicas para reducir la barrera del pago anual**:
1. **Pago anual fraccionado**: el compromiso es anual pero el pago es trimestral o mensual (menor cashflow para el cliente, compromiso para ti)
2. **Mes gratis al pagar anual**: más claro mentalmente que un porcentaje de descuento
3. **Cancelación prorrateada**: si cancelan antes, les devuelves los meses no usados — reduce el riesgo percibido

---

## PARTE 3 — EL PROCESO DE RENOVACIÓN

### Diseña el calendario de renovación

Nunca dejes la renovación para el último momento. Empieza el proceso de renovación con suficiente anticipación:

| Meses antes de la renovación | Acción |
|------------------------------|--------|
| 90 días | CS revisa el health score del cliente; si es ámbar o rojo, intervención inmediata |
| 60 días | Reunión de valor: revisión del ROI obtenido con el producto |
| 45 días | Envío de propuesta de renovación (con opciones: mismo plan / upgrade) |
| 30 días | Seguimiento de la propuesta con el decisor económico |
| 15 días | Cierre de la renovación o plan de acción si hay objeciones |
| 7 días | Recordatorio final y gestión de documentación |

### La reunión de renovación (QBR de renovación)

Esta reunión no es de soporte ni de formación. Es una reunión de negocio.

**Agenda**:

1. (10 min) ¿Cuáles eran los objetivos que tenían cuando contrataron?
2. (15 min) ¿Qué han conseguido con el producto? (con datos reales de uso y resultados)
3. (10 min) ¿Qué valor les ha aportado en euros, tiempo o riesgo evitado?
4. (10 min) ¿Qué podría ser mejor? (recoge el feedback antes de la renovación, no después)
5. (15 min) Plan del próximo año: qué quieren conseguir y cómo el producto les ayudará

El objetivo: que el cliente salga de la reunión convencido de renovar, no porque les hayas presionado, sino porque han articulado el valor que obtienen.

### El ROI Business Case para la renovación

Ayuda al cliente a construir el business case interno para renovar (o para justificar el gasto a su CFO):

Plantilla de ROI:
```
Valor generado por [producto] en los últimos 12 meses:

AHORRO DE TIEMPO:
[X] horas/semana ahorradas × [nº de usuarios] × [coste hora] × 52 semanas = €[total]

REDUCCIÓN DE ERRORES / RIESGOS:
[Número de incidentes evitados] × [coste medio por incidente] = €[total]

INGRESOS ADICIONALES (si aplica):
[Nuevos proyectos / clientes habilitados por el producto] × [margen] = €[total]

INVERSIÓN ANUAL EN [PRODUCTO]: €[precio]
ROI: [valor generado] / [inversión] × 100 = [X]%
```

---

## PARTE 4 — GESTIÓN DE OBJECIONES EN LA RENOVACIÓN

### Las objeciones más comunes y cómo responderlas

**"Es demasiado caro para renovar al mismo precio"**:
- Primero: valida el sentimiento (no defiendas el precio inmediatamente)
- Luego: vuelve al valor obtenido ("El año pasado os generó un ROI de X")
- Si aun así hay problema: explora si hay un plan más ajustado o un cambio de términos antes de bajar el precio

**"Queremos evaluar alternativas antes de renovar"**:
- Señal de advertencia temprana: si lo dicen a 30 días de la renovación, hay un problema de valor o de relación
- Respuesta: "Me parece bien que evalúen. ¿Qué criterios son más importantes para vosotros? Así os puedo ayudar a comparar correctamente."
- Objetivo: ser parte de la evaluación, no excluirte de ella

**"Necesitamos reducir el plan o el gasto"**:
- Antes de aceptar una reducción: entiende si es un problema real de presupuesto o de valor percibido
- Si es presupuesto real: busca un plan más pequeño antes que perder el cliente
- Si es valor percibido: vuelve al business case y trabaja la relación

**"No hemos usado todo lo que pagamos"**:
- La causa más común de churn y de negociación a la baja en la renovación
- Solución: no esperar a la renovación — detectarlo antes y activar el uso con CS

---

## PARTE 5 — EXPANSIÓN EN LA RENOVACIÓN

La renovación es el mejor momento para el upsell:
- El cliente ya confía en el producto
- Ya conoces sus necesidades reales después de un año
- El coste de adquisición de un upsell es 5-7 veces menor que adquirir un cliente nuevo

### Cómo proponer el upgrade sin presionar

1. Identifica una necesidad no cubierta que el cliente ha mencionado durante el año
2. Muestra que tienes la solución en un plan superior
3. Calcula el coste adicional vs. el valor incremental
4. Incluye la propuesta de upgrade dentro de la propuesta de renovación como una opción (no como única opción)

---

## ENTREGABLES

1. Script de venta del contrato anual frente al mensual (conversación completa con objeciones)
2. Calendario de renovación: acciones y mensajes semana a semana en los 90 días previos
3. Plantilla de business case de ROI para presentar al CFO del cliente
4. Playbook de objeciones de renovación: 5 objeciones con respuestas palabra por palabra
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar el proceso de venta de contratos de suscripción anual y asegurar la renovación con un calendario de acción, business case de ROI y gestión de objeciones.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la IA en el producto',
                'description'      => 'Cómo integrar funcionalidades de IA de forma responsable, medir su impacto real y mantener la confianza del usuario cuando el modelo falla.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Product Manager con experiencia en productos de inteligencia artificial, Machine Learning y sistemas de recomendación. Necesito definir cómo integrar, lanzar y gestionar funcionalidades de IA en mi producto de forma responsable.

**Mi producto:**
[Tipo de producto y la funcionalidad de IA que quiero integrar o ya tengo]

**Estado actual de la IA en el producto:**
[Queremos añadir IA por primera vez / tenemos IA pero no medimos su impacto / la IA falla con frecuencia y no sabemos cómo gestionarlo]

**Equipo:**
[Tenemos ML engineers internos / usamos APIs de terceros (OpenAI, Anthropic, etc.) / tenemos modelo propio entrenado]

---

## PARTE 1 — LA IA EN EL PRODUCTO: FUNDAMENTOS DE DECISION

### ¿Cuándo añadir IA a un producto?

Responde estas preguntas antes de decidir:

1. **¿El problema existe?** ¿Los usuarios tienen una necesidad real que la IA puede resolver mejor que una alternativa no-IA?
2. **¿Los datos están disponibles?** ¿Tenemos los datos necesarios para que el modelo sea bueno? Sin datos, no hay IA útil.
3. **¿El error es tolerable?** Si la IA se equivoca el 10% de las veces, ¿cuál es el impacto para el usuario?
4. **¿El beneficio justifica la complejidad?** La IA añade complejidad técnica, operativa y de comunicación. ¿El valor lo justifica?
5. **¿Es la IA la solución mínima?** A veces, reglas de negocio bien diseñadas son más eficientes que un modelo de ML.

### Tipos de IA en productos y sus retos específicos

| Tipo | Ejemplos | Reto principal | KPI de éxito |
|------|---------|----------------|-------------|
| Generativa (LLMs) | Copiloto de escritura, chatbot, resúmenes | Alucinaciones, calidad del output | User acceptance rate, tiempo ahorrado |
| Recomendaciones | Productos sugeridos, contenido personalizado | Burbuja de filtro, cold start | CTR, diversidad, serendipity |
| Clasificación / Detección | Moderación de contenido, categorización automática | Sesgo, falsos positivos | Precision, recall, F1 |
| Predicción | Scoring de leads, churn prediction, forecasting | Overfitting, deriva del modelo | Accuracy, calibration |
| Visión artificial | OCR, detección de objetos, análisis de imágenes | Calidad de imagen, varianza de entornos | mAP, inferencia time |

---

## PARTE 2 — LANZAMIENTO DE UNA FEATURE DE IA

### El proceso de lanzamiento en tres fases

**FASE 1 — Alpha interno (semana 1-4)**

Objetivo: verificar que la IA funciona antes de que un usuario real la vea.

- El equipo de producto y los ML engineers usan la feature en su trabajo real
- Se define el criterio de calidad mínimo para pasar a beta (ejemplo: precision > 85%, tiempo de respuesta < 3s)
- Se identifican los edge cases y los fallos más frecuentes
- Se diseña la experiencia de error antes de la experiencia de éxito

**FASE 2 — Beta controlada (semana 4-8)**

Objetivo: validar con usuarios reales sin escalar el riesgo.

- Grupo de 5-10% de usuarios seleccionados (preferiblemente usuarios activos y tolerantes al fallo)
- Monitoreo intensivo: métricas de uso, feedback cualitativo, tasa de error
- Cada error significativo se investiga (root cause analysis)
- El usuario tiene siempre la opción de desactivar la feature o ignorar el output de la IA

**FASE 3 — Rollout general (gradual)**

Objetivo: escalar con confianza.

- Rollout del 5% → 20% → 50% → 100% con monitoreo entre cada salto
- Criterios de pausa del rollout: error rate > X%, NPS de la feature < Y, incidente de seguridad/privacidad

### Feature flags para IA

Define cómo usar feature flags para gestionar el rollout de IA:
- Flag por usuario (beta list)
- Flag por porcentaje de tráfico (rollout gradual)
- Flag por segmento (plan premium, empresas de cierto tamaño, región)
- Kill switch global: apagar toda la feature de IA en < 5 minutos si hay un incidente

---

## PARTE 3 — MÉTRICAS DE IA EN PRODUCTO

### Los dos tipos de métricas: modelo vs. producto

Un error común: medir solo métricas del modelo (accuracy, F1) sin medir el impacto en el producto.

| Capa | Métricas | Herramienta |
|------|---------|-------------|
| Modelo | Accuracy, precision, recall, latencia de inferencia, coste por request | MLflow, Weights & Biases |
| Producto | User acceptance rate, feature adoption, time-to-value, NPS de la feature | Mixpanel, Amplitude |
| Negocio | Retención, LTV, tiempo ahorrado, tareas completadas | CRM, BI |

### El "user acceptance rate": la métrica más importante de IA en producto

Para features de IA que hacen sugerencias (copiloto, autocompletado, recomendaciones):

```
User Acceptance Rate (UAR) = sugerencias aceptadas / sugerencias mostradas × 100
```

Si el UAR es < 20%: los usuarios rechazan más de lo que aceptan — el modelo no está bien calibrado para el caso de uso o la UX está mal diseñada.

Si el UAR es > 80%: los usuarios aceptan casi todo — pueden estar usando la IA sin revisar (riesgo de calidad) o el modelo está muy bien ajustado.

### Model drift: cuando el modelo se degrada

Explica por qué los modelos de ML se degradan con el tiempo:
- **Data drift**: los datos de entrada cambian (el comportamiento de los usuarios evoluciona)
- **Concept drift**: la relación entre los datos y el target cambia (lo que era spam hace 2 años, hoy no lo es)
- **Feature drift**: alguna fuente de datos cambia su formato o desaparece

Cómo detectarlo:
1. Monitoreo continuo del UAR y de las métricas de negocio
2. Alertas cuando las métricas caen > X% en una ventana de 7 días
3. Re-entrenamiento periódico del modelo con datos nuevos (mensual o trimestral según la velocidad de cambio)

---

## PARTE 4 — RESPONSABILIDAD Y ÉTICA

### El marco de IA responsable para PMs

Como PM, eres responsable de que la IA en tu producto:

1. **No discrimine**: testa el modelo con diferentes grupos demográficos para detectar sesgos (diferencia de performance entre grupos)
2. **Sea transparente**: el usuario sabe cuándo está interactuando con IA (obligatorio según regulación europea en muchos contextos)
3. **Sea revisable por humanos**: hay un proceso claro para que el usuario reporte errores y sean revisados
4. **Cumpla el GDPR**: si el modelo usa datos personales, el usuario tiene derecho a saber, a acceder y a solicitar que sus datos no se usen para entrenamiento

### El proceso de revisión de incidentes de IA

Cuando la IA comete un error con impacto en el usuario:

1. **Detección**: el usuario reporta / el monitoreo lo detecta automáticamente
2. **Triage**: ¿cuántos usuarios afectados? ¿cuál es la severidad del daño?
3. **Mitigación inmediata**: ¿hay un kill switch? ¿Se puede desactivar la feature temporalmente?
4. **Comunicación al usuario**: si hubo impacto visible, comunicar con transparencia y sin excusas técnicas
5. **Root cause analysis**: ¿fue un fallo del modelo, de los datos, del diseño de la feature o del uso del usuario?
6. **Corrección y re-test**: corregir, validar que el error no se repite, documentar

---

## PARTE 5 — HOJA DE RUTA DE IA

### Cómo priorizar el backlog de IA

Las features de IA tienen retos de priorización únicos:
- El tiempo de desarrollo es incierto (los experimentos de ML pueden fallar)
- El valor es difícil de estimar hasta tener un MVP funcional
- El coste de la inferencia puede cambiar el modelo de negocio

Framework de priorización específico para IA:

| Criterio | Peso | Pregunta |
|----------|------|---------|
| Impacto en métrica norte | 30% | ¿Cuánto mueve retención / revenue si funciona? |
| Confianza en viabilidad técnica | 25% | ¿Tenemos los datos y el tiempo para hacerlo bien? |
| Coste de inferencia sostenible | 20% | ¿El coste de la IA cabe en el margen del producto? |
| Riesgo de daño al usuario | 25% | ¿Qué pasa si la IA falla? ¿Hay humano de respaldo? |

---

## ENTREGABLES

1. Checklist de "¿Debería añadir IA a esta feature?": 10 preguntas antes de comprometer recursos
2. Plan de lanzamiento de la feature de IA: fases, criterios de avance y criterios de pausa
3. Dashboard de métricas de IA: qué medir, con qué frecuencia y qué alertas configurar
4. Proceso de revisión de incidentes de IA: plantilla de post-mortem adaptada a errores de modelos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Integrar funcionalidades de IA en el producto de forma responsable: lanzamiento gradual, métricas de impacto, detección de model drift y gestión de incidentes.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Atracción de talento con employer branding',
                'description'      => 'Construye la reputación como empleador que hace que los mejores quieran trabajar contigo: estrategia, canales y contenido para atraer talento sin pagar más.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en employer branding y atracción de talento con experiencia en empresas en crecimiento. Necesito diseñar la estrategia de employer branding de mi empresa para atraer mejores candidatos sin depender solo del salario.

**Mi empresa:**
[Sector, tamaño, tipo de perfiles que contratas mayoritariamente, fase (startup / scale-up / empresa consolidada)]

**Situación actual:**
[Sin presencia de employer brand / tenemos Glassdoor con pocas reseñas / los candidatos no conocen la empresa / competimos con empresas más grandes]

**Objetivo:**
[Recibir más candidatos cualificados en inbound / mejorar la experiencia de candidato / reducir el tiempo de contratación / mejorar la retención]

---

## PARTE 1 — QUÉ ES EL EMPLOYER BRANDING Y POR QUÉ IMPORTA

### La propuesta de valor al empleado (EVP)

El Employer Value Proposition (EVP) es lo que tu empresa ofrece a cambio del tiempo, la energía y el talento de un empleado. Es distinto de la propuesta de valor al cliente.

El EVP tiene cinco dimensiones:

| Dimensión | Qué incluye | Preguntas para definirla |
|-----------|------------|--------------------------|
| Recompensa | Salario, beneficios, equity, bonus | ¿Cómo me compensan económicamente? |
| Desarrollo | Formación, carrera, aprendizaje, responsabilidad | ¿Cómo voy a crecer aquí? |
| Cultura | Valores, forma de trabajar, relaciones | ¿Con quién y cómo se trabaja aquí? |
| Propósito | Misión, impacto, significado del trabajo | ¿Para qué existe esta empresa? |
| Entorno | Flexibilidad, herramientas, oficina, teletrabajo | ¿Cómo y dónde trabajo? |

El EVP debe ser honesto (no lo que queremos ser, sino lo que somos) y diferenciado (lo que nos hace distintos de la competencia como empleador).

### El employer branding no es marketing de reclutamiento

Error común: publicar ofertas de empleo bonitas no es employer branding.

| Marketing de reclutamiento | Employer Branding |
|---------------------------|------------------|
| Activo (estoy buscando candidatos para una vacante) | Pasivo (los candidatos me conocen antes de que tenga una vacante) |
| A corto plazo (cubre el puesto) | A largo plazo (construye la reputación) |
| Un mensaje por vacante | Un relato consistente durante meses y años |
| Frío para el candidato | Candidatos que ya quieren trabajar aquí |

---

## PARTE 2 — CONSTRUIR EL EVP

### Investigación interna: qué hace única a tu empresa como empleador

Diseña el proceso de investigación con empleados actuales:

**1. Encuesta de clima y EVP** (anónima, 10 preguntas):
- ¿Qué es lo mejor de trabajar aquí?
- ¿Qué es lo más frustrante?
- ¿Recomendarías trabajar aquí a un amigo cercano? ¿Por qué sí o por qué no?
- ¿Qué es lo que te haría irte a otra empresa?
- ¿Qué es lo que te hizo elegir esta empresa sobre otras ofertas?

**2. Entrevistas de salida** (a las personas que se van):
- ¿Qué te llevó a buscar otra posición?
- ¿Qué es lo que más vas a echar de menos?
- ¿Qué consejo le darías a la empresa para retener mejor a su equipo?

**3. Entrevistas con las mejores personas** (los que quieres retener):
- ¿Qué es lo que más valoras de tu trabajo aquí?
- Si un amigo te preguntara si debería unirse, ¿qué le dirías?

### De los datos a la narrativa del EVP

Con la investigación, identifica los 3-5 temas que aparecen consistentemente en los empleados más satisfechos. Esos son tu EVP real.

Estructura el EVP en una declaración:

"En [empresa], trabajas con [tipo de equipo] en [tipo de proyectos/misión], con [principal beneficio diferencial], en un entorno donde [segundo diferencial cultural]. Si buscas [valor que te define], este es tu sitio."

---

## PARTE 3 — CANALES DE EMPLOYER BRANDING

### LinkedIn: el canal principal para perfiles profesionales

**Página de empresa** (configuración básica):
- Sección "Life" activa con fotos del equipo, oficina y cultura
- Publicaciones regulares desde la página (no solo ofertas)
- Empleados como embajadores: anima a que compartan contenido propio con #[nombredondework]

**Contenido para la página de empresa**:
- "Un día en la vida de" (vídeo o post con un empleado)
- Anuncios de ascensos y logros internos del equipo
- Behind the scenes de proyectos o eventos
- Valores de empresa en acción (ejemplo real, no definición abstracta)
- Novedades del equipo: nuevas contrataciones, aniversarios de empleados

**Frecuencia recomendada**: 3-5 posts por semana (variando entre texto, imagen, vídeo corto)

### Glassdoor: gestionar la reputación existente

Aunque no hayas pedido reseñas, los empleados y ex-empleados pueden haberlas dejado. Estrategia:

1. **Reclamar el perfil**: gratuito, te da acceso a responder reseñas
2. **Responder todas las reseñas** (positivas y negativas): demuestra que escuchas
3. **Pedir reseñas proactivamente**: en el onboarding de nuevos empleados (voluntario, nunca incentivado)
4. **No pedir solo a los más satisfechos**: el perfil de Glassdoor debe reflejar la realidad

Respuesta a reseña negativa:
```
"Gracias por tu feedback. Lamentamos que tu experiencia no haya cumplido tus expectativas.
Hemos trabajado en [acción concreta relacionada con la crítica].
Si quieres hablar más sobre esto, puedes escribirnos a [email de RRHH]."
```

### La carrera de empleos como herramienta de branding

Tu página de ofertas de empleo es el punto de mayor intención de un candidato. Optimízala:

1. **Sobre nosotros**: no la historia corporativa, sino cómo es el equipo, cómo se trabaja, qué hace la empresa especial
2. **Fotos reales**: del equipo, la oficina, los eventos — no stock photos
3. **Testimonios de empleados**: quotes cortas de personas reales del equipo
4. **Proceso de selección descrito**: cuántas entrevistas, qué se evalúa, cuánto dura — reduce la ansiedad del candidato
5. **Velocidad de respuesta comprometida**: "Respondemos a todas las candidaturas en X días"

---

## PARTE 4 — CONTENIDO DE EMPLOYER BRANDING

### Tipos de contenido por canal y objetivo

| Tipo de contenido | Canal | Objetivo | Frecuencia |
|------------------|-------|---------|-----------|
| Day in the life (foto/vídeo) | LinkedIn, Instagram | Mostrar cultura real | Quincenal |
| Entrevista con empleado | Blog, LinkedIn | Autenticidad, diferenciación | Mensual |
| Detrás de escena de un proyecto | LinkedIn | Mostrar nivel técnico / creatividad | Mensual |
| Logro del equipo / anuncio | LinkedIn, todas las redes | Orgullo de equipo | Cuando ocurre |
| Tips o conocimiento del equipo | LinkedIn | Posicionar el expertise de la empresa | Semanal |
| Vídeo de cultura de empresa | Web, YouTube | First impression de candidatos | Semestral |

### El "día en la vida de" — el formato más efectivo

Estructura para un post o vídeo de "Day in the life":

1. Nombre, cargo y tiempo en la empresa
2. ¿Cómo llegaste a esta empresa? (la historia real)
3. Un día típico: qué haces, con quién, cómo
4. Lo que más te gusta de trabajar aquí (1-2 cosas específicas y honestas)
5. El mayor reto (honestidad = credibilidad)
6. Qué buscarías en alguien que se uniera a tu equipo

---

## PARTE 5 — MÉTRICAS DE EMPLOYER BRANDING

| Métrica | Cómo medirla | Objetivo |
|---------|-------------|---------|
| eNPS (Employee Net Promoter Score) | Encuesta trimestral a empleados | > 30 (base), > 50 (bueno) |
| Candidaturas inbound | ATS: candidaturas sin sourcing activo | Crecimiento mes a mes |
| Quality of hire | Performance review de las últimas contrataciones | > 70% supera el período de prueba |
| Glassdoor rating | Plataforma | > 4.0 |
| Tiempo de contratación | ATS: días desde publicación a firma | Reducción trimestral |
| Retención a 12 meses | RRHH: % empleados que siguen al año | > 85% |

---

## ENTREGABLES

1. Declaración de EVP de mi empresa (redactada tras las preguntas de investigación)
2. Plan editorial de employer branding para LinkedIn: 12 ideas de contenido para el próximo mes
3. Guía para empleados embajadores: cómo compartir contenido de employer branding sin que parezca forzado
4. Checklist de optimización de la página de Glassdoor y de la carrera de empleos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Construir la estrategia de employer branding: EVP, canales, tipos de contenido y métricas para atraer talento de forma orgánica y diferenciada.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financiación para startups en España',
                'description'      => 'ENISA, CDTI, ICO, business angels y capital riesgo: el mapa completo de la financiación disponible para startups y cómo acceder a cada instrumento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor financiero con experiencia en financiación de startups y pymes innovadoras en España. Necesito entender las opciones de financiación disponibles para mi empresa, cuál es la adecuada para mi momento y cómo acceder a ella.

**Mi empresa:**
[Sector, años de actividad, número de empleados, facturación anual si ya tienes, tipo de producto o servicio]

**Fase de desarrollo:**
[Idea / MVP / tracción inicial / crecimiento / expansión internacional]

**Necesidad de capital:**
[Importe aproximado que necesitas y para qué: I+D, contratación, marketing, internacionalización]

**Situación financiera:**
[Bootstrapped / con inversión previa / necesidad urgente / podemos esperar meses]

---

## PARTE 1 — EL MAPA DE LA FINANCIACIÓN PARA STARTUPS EN ESPAÑA

### Los tres grandes bloques de financiación

**BLOQUE A — Financiación pública (no dilutiva)**
Préstamos, subvenciones y ayudas de organismos públicos que no requieren ceder participaciones en la empresa.

**BLOQUE B — Capital privado (dilutiva)**
Inversión de business angels, fondos de capital riesgo y family offices a cambio de participaciones en el capital.

**BLOQUE C — Financiación bancaria y alternativa**
Préstamos bancarios, líneas de crédito, crowdlending, factoring y otras herramientas de deuda.

### ¿Qué financiación es adecuada para cada fase?

| Fase | Instrumento recomendado | Por qué |
|------|------------------------|---------|
| Idea / pre-seed | Subvenciones (CDTI Neotec, ICF, comunidades), FFF (family, friends, fools), aceleradoras | Sin historial ni tracción para otra cosa |
| Seed (MVP, primeros clientes) | Business angels, ENISA Jóvenes Emprendedores, Fondos Seed | Tracción incipiente, necesidad de capital para escalar |
| Serie A (crecimiento) | Capital riesgo, ENISA Emprendedores, ICO Sostenible | Métricas de negocio, escalabilidad demostrada |
| Serie B+ (expansión) | Fondos de VC nacional e internacional, deuda privada | Internacionalización, M&A, break-even cercano |

---

## PARTE 2 — FINANCIACIÓN PÚBLICA

### ENISA (Empresa Nacional de Innovación)

La fuente de préstamo participativo más relevante para startups españolas.

**Líneas disponibles**:
- **ENISA Jóvenes Emprendedores**: hasta 75.000€, empresa < 2 años con al menos un socio < 40 años
- **ENISA Emprendedores**: hasta 300.000€, empresa entre 1-5 años
- **ENISA Crecimiento**: hasta 1.500.000€, empresa con beneficios o trayectoria sólida
- **ENISA Agroalimentario**: línea específica para empresas del sector

**Características del préstamo participativo**:
- Tipo de interés: parte fija (baja, 0-2%) + parte variable ligada a la rentabilidad
- Carencia de principal: 5-7 años sin devolver el capital
- Sin garantías reales: ENISA evalúa el proyecto, no los activos
- Tiempo de resolución: 3-6 meses

**Requisitos generales**:
- Mayoría del capital en manos de personas físicas privadas (no puede haber corporativos con > 50%)
- Sede y actividad principal en España
- Plan de negocio con proyecciones financieras a 3-5 años
- Proyecto innovador o con potencial de crecimiento

### CDTI (Centro para el Desarrollo Tecnológico Industrial)

Para empresas con componente tecnológico o de I+D.

**Instrumentos principales**:
- **Proyectos de I+D**: préstamos de hasta 250.000€ sin interés (tipo 0%) con hasta 3 años de carencia
- **Neotec**: ayuda de hasta 250.000€ para startups de base tecnológica en sus primeros años (subvención + préstamo)
- **CDTI Crecimiento e Internacionalización**: financiación de hasta 5M€ para empresas más maduras
- **Misiones Ciencia e Innovación**: proyectos colaborativos con universidades o centros tecnológicos

**Perfil de empresa que encaja con CDTI**:
- Software propio, hardware innovador, biotech, deeptech, medtech
- Equipo técnico con capacidad I+D demostrada (CVs, publicaciones, patentes)
- El proyecto debe tener incertidumbre técnica (si ya sabes cómo hacerlo, no es I+D para el CDTI)

### ICO (Instituto de Crédito Oficial)

Líneas de préstamo que se tramitan a través de entidades bancarias colaboradoras:

- **ICO Empresas y Emprendedores**: hasta 12,5M€ para cualquier empresa española; financiación de circulante, inversiones, internacionalización
- **ICO Sostenible**: inversiones en proyectos de eficiencia energética, economía circular
- **ICO Innovación**: para empresas innovadoras o con calificación PYME innovadora del CDTI

**Ventaja**: tipos de interés más bajos que el mercado y plazos más largos.
**Desventaja**: requieren garantías bancarias; no son para startups sin historial crediticio.

### Comunidades autónomas y fondos europeos

Cada comunidad tiene sus propios instrumentos:
- **Cataluña**: ACCIÓ (ICF, Innobonos), Barcelona Activa
- **Madrid**: Comunidad de Madrid Emprende, IMADE
- **País Vasco**: SPRI, Basque Movers
- **Andalucía**: Andalucía Emprende, IDEA
- **Nacional + UE**: Horizonte Europa (programa de I+D de la UE), EIC Accelerator (hasta 2,5M€ en subvención + 15M€ en equity)

---

## PARTE 3 — CAPITAL PRIVADO

### Business Angels

**Dónde encontrar business angels en España**:
- ESADE BAN, Keiretsu Forum, BAC (Business Angels Club), Angels Capital
- Redes regionales: BANC (Cataluña), BANSEED, MAD Angels (Madrid)
- Plataformas de equity crowdfunding: Capital Cell (salud/biotech), Crowdcube, Seedrs (operan en España)

**Qué buscan los business angels**:
- Equipo: más que la idea, invierten en el fundador
- Tamaño del mercado: > 100M€ directo
- Tracción: algo que pruebe que el mercado responde
- Propuesta diferencial: por qué tu empresa puede ser líder en su categoría

**Ticket medio de un business angel en España**: 25.000€ - 150.000€ por angel; rondas de 200.000€ - 1M€ con varios angels.

### Capital Riesgo (Venture Capital)

Los fondos de VC generalistas y especializados en España:

| Fondo | Etapa | Ticket típico | Sectores preferentes |
|-------|-------|-------------|---------------------|
| Kibo Ventures | Seed / Serie A | 500K - 3M€ | Tech, SaaS, deeptech |
| Nauta Capital | Serie A / B | 2M - 10M€ | SaaS, tech |
| Seaya Ventures | Serie A / B | 5M - 30M€ | Impacto positivo, tech |
| All Iron Ventures | Seed / Serie A | 500K - 5M€ | Generalista |
| Alma Mundi Ventures | Seed / Serie A | 500K - 5M€ | Edtech, insurtech, fintech |
| Bonsai Partners | Seed | 200K - 1M€ | Early stage generalista |

---

## PARTE 4 — EL PROCESO DE CAPTACIÓN DE INVERSIÓN

### Preparación antes de hablar con inversores

Antes de cualquier reunión, ten preparado:

1. **Deck de presentación** (10-12 diapositivas): problema, solución, mercado, modelo de negocio, tracción, equipo, financiación solicitada y uso de fondos
2. **One-pager** (resumen ejecutivo de 1 página): para compartir por email antes de la reunión
3. **Financial model** (proyecciones a 3 años): P&L, cashflow, principales KPIs y supuestos
4. **Data room básico**: documentación legal (pacto de socios, cap table, contratos relevantes)

### La valoración en etapa temprana

Explica cómo se valora una startup en etapas tempranas:

- **Pre-money**: la valoración antes de la inversión
- **Post-money**: pre-money + el capital invertido

Métodos en etapas tempranas (donde no hay flujos históricos que descontar):
- **Comparable method**: ¿a qué valoración se financiaron empresas similares?
- **Scorecard method**: ajusta una valoración media de mercado según la calidad del equipo, el mercado, el producto y la tracción
- **VC method**: trabaja hacia atrás desde el retorno que el fondo necesita

---

## ENTREGABLES

1. Mapa de financiación personalizado para mi empresa: 3 instrumentos prioritarios con por qué y cómo aplicar
2. Checklist de documentación para solicitar financiación ENISA
3. Estructura del pitch deck: 10 diapositivas con qué poner en cada una
4. Calendario de aplicación: cuándo abren las convocatorias más relevantes y plazos de resolución
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Navegar el ecosistema de financiación para startups en España: ENISA, CDTI, ICO, business angels y VC, con cómo acceder a cada instrumento según la fase.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho digital y ciberdelitos',
                'description'      => 'Qué hacer cuando tu empresa sufre un ciberataque: cómo notificar a la AEPD, cómo denunciar ante las autoridades y cómo limitar la responsabilidad legal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado especializado en derecho digital, ciberseguridad y protección de datos. Necesito entender qué obligaciones legales tiene mi empresa ante un incidente de ciberseguridad y cuáles son los pasos correctos a seguir.

**Mi empresa:**
[Sector, tamaño, tipo de datos que manejamos: datos personales de clientes / empleados / datos de salud / datos financieros]

**Situación:**
[Hemos sufrido un ransomware / nos han accedido a la base de datos de clientes / hemos recibido un phishing que comprometió credenciales / queremos tener el protocolo preparado antes de que ocurra]

---

## PARTE 1 — EL MARCO LEGAL DEL INCIDENTE DE SEGURIDAD

### Definición legal de "brecha de seguridad de datos personales"

El RGPD (Reglamento General de Protección de Datos) define la brecha de seguridad como "toda violación de la seguridad que ocasione, de manera accidental o ilícita, la destrucción, pérdida o alteración no autorizadas, o la comunicación o acceso no autorizados, a datos personales transmitidos, conservados o tratados de otra forma."

Esto incluye:
- **Confidencialidad**: acceso no autorizado a datos (el hacker leyó tu base de datos)
- **Integridad**: alteración de datos (modificaron registros)
- **Disponibilidad**: pérdida de datos (ransomware que cifra tus archivos)

### Cuándo estás obligado a notificar

La obligación de notificar a la AEPD (o la autoridad de control de tu comunidad) surge cuando la brecha es probable que conlleve un riesgo para los derechos y libertades de las personas afectadas.

**Si el riesgo es probable**: notificar a la AEPD en máximo 72 horas desde que conoces la brecha.
**Si el riesgo es alto**: además, notificar a los propios afectados sin dilación indebida.
**Si el riesgo es mínimo o nulo**: no hay obligación de notificar externamente, pero sí de documentar internamente.

### Los 72 horas: contando bien el reloj

El plazo de 72 horas corre desde que el responsable del tratamiento (tu empresa) tiene conocimiento del incidente, no desde que ocurrió. Esto implica:

- Tener un proceso interno claro para que el equipo técnico escale los incidentes al responsable legal o al DPO inmediatamente
- Si no tienes toda la información, puedes notificar de forma provisional e ir completando la información después
- Notificar tarde o no notificar puede ser una infracción independiente del incidente en sí

---

## PARTE 2 — NOTIFICACIÓN A LA AEPD

### Cómo notificar a la AEPD

La notificación se realiza a través del portal de la AEPD (sede.aepd.es) en la sección de "Notificación de brechas de seguridad".

**Información mínima requerida en la notificación**:

1. Descripción de la naturaleza de la brecha (qué tipo de datos, qué ocurrió, cuándo)
2. Nombre y datos de contacto del Delegado de Protección de Datos (DPD) si existe
3. Descripción de las posibles consecuencias de la brecha
4. Descripción de las medidas adoptadas o propuestas para hacer frente a la brecha
5. Estimación del número de personas afectadas y del volumen de datos
6. Categorías de personas afectadas (empleados, clientes, menores, etc.)
7. Categorías de datos afectados (datos básicos, de salud, financieros, etc.)

**Nivel de riesgo y consecuencias**:

| Nivel de riesgo | Criterios | Obligación |
|-----------------|----------|-----------|
| Sin riesgo aparente | Datos cifrados con clave segura, acceso a datos no sensibles limitado | Solo registro interno |
| Riesgo probable | Acceso a datos de contacto, datos laborales, datos contractuales | Notificar a AEPD en 72h |
| Alto riesgo | Datos de salud, financieros, biométricos, de menores; número de afectados elevado | Notificar a AEPD + comunicar a los afectados |

### Comunicación a los afectados (cuando aplica)

Cuando la brecha conlleva alto riesgo para los afectados, la comunicación debe:
- Describir con lenguaje claro y sencillo la naturaleza de la brecha
- Incluir los datos de contacto del DPD o punto de contacto de la empresa
- Describir las posibles consecuencias de la brecha para el afectado
- Describir las medidas adoptadas o propuestas para hacer frente a la brecha
- Recomendar medidas que el afectado puede adoptar para protegerse (cambio de contraseña, alerta de fraude, etc.)

---

## PARTE 3 — DENUNCIA ANTE LAS AUTORIDADES

### Cuándo denunciar

La notificación a la AEPD y la denuncia penal son dos procedimientos independientes. Puedes hacer una, la otra, ambas o ninguna (en la denuncia tienes libertad, en la notificación a AEPD puede ser obligatorio).

**Denunciar ante la Policía o Guardia Civil cuando**:
- El ciberataque fue intencionado (ransomware, intrusión, phishing dirigido)
- Hay un daño económico cuantificable
- Tienes pruebas o indicios de la procedencia del ataque
- Quieres recuperar datos robados a través de vías judiciales

### El proceso de denuncia

1. **Preservar las evidencias digitales ANTES de actuar**: no apagues los sistemas, no cambies contraseñas, no limpies logs — primero documenta
2. **Contratar un perito informático forense** si el daño es significativo: su informe pericial es la prueba en el procedimiento judicial
3. **Presentar la denuncia** ante la Brigada de Investigación Tecnológica (BIT) de la Policía Nacional o el Grupo de Delitos Telemáticos (GDT) de la Guardia Civil
4. **Acompañar la denuncia con**: registros de acceso, emails con indicios, capturas de pantalla, informe del perito, valoración del daño económico

### Delitos informáticos más relevantes en el Código Penal español

| Delito | Artículo CP | Pena |
|--------|-------------|------|
| Acceso ilícito a sistemas informáticos | Art. 197 bis | 6 meses a 2 años; hasta 5 si hay daño |
| Interceptación de comunicaciones | Art. 197 | 1 a 4 años |
| Daños informáticos (ransomware, borrado) | Art. 264 bis | 6 meses a 3 años; hasta 10 si es infraestructura crítica |
| Estafa informática | Art. 248.2 | 6 meses a 3 años |
| Revelación de secretos empresariales | Art. 278-279 | 2 a 4 años |

---

## PARTE 4 — RESPONSABILIDAD Y LIMITACIÓN DE DAÑOS

### Responsabilidad del responsable del tratamiento

Si la brecha ocurre porque la empresa no tenía las medidas de seguridad adecuadas, la AEPD puede imponer sanciones:

- **Infracción grave** (no notificar en plazo, no implementar medidas de seguridad): hasta 10M€ o 2% de la facturación global anual
- **Infracción muy grave** (incumplimiento de principios básicos, transferencias no autorizadas): hasta 20M€ o 4% de la facturación global anual

### Cómo limitar la responsabilidad

1. **Documentar las medidas de seguridad previas**: registro de actividades de tratamiento, evaluación de impacto si aplica, política de seguridad
2. **Actuar con diligencia tras el incidente**: notificar a tiempo, tomar medidas correctivas inmediatas
3. **Registrar todas las acciones**: cada decisión tomada durante el incidente, con timestamp y responsable
4. **Notificación parcial a tiempo mejor que notificación completa tarde**: es preferible notificar provisionalmente en 72h que esperar a tener toda la información y pasarse del plazo

### El seguro de ciberriesgos

Explica qué cubre un seguro de ciberriesgos para pymes:
- Costes de respuesta al incidente (perito forense, abogados, gestión de crisis)
- Pérdida de ingresos por interrupción del negocio
- Responsabilidad civil por daños a terceros (clientes afectados por la brecha)
- Multas y sanciones (solo en algunos países; en UE la cobertura de multas administrativas es limitada)
- Coste de notificación a afectados

Primas orientativas para pymes: 1.500€ - 8.000€/año según sector y volumen de datos.

---

## PARTE 5 — PROTOCOLO PREVENTIVO

### El plan de respuesta a incidentes de seguridad (antes de que ocurra)

Componentes mínimos del plan:

1. **Equipo de respuesta** con roles definidos: coordinador, técnico, legal/DPD, comunicación
2. **Árbol de decisión**: cuándo se activa el protocolo, quién lo activa, quién es la primera llamada
3. **Checklist de las primeras 2 horas**: preservar evidencias, evaluar alcance, decidir si notificar
4. **Plantillas de comunicación**: notificación a AEPD (provisional), comunicación a afectados, comunicación interna
5. **Contactos de emergencia**: perito forense de guardia, abogado de datos, seguro de ciberriesgos
6. **Simulacro anual**: practicar el protocolo con un caso hipotético

---

## ENTREGABLES

1. Checklist de las primeras 2 horas tras un incidente de seguridad: qué hacer en orden
2. Plantilla de notificación provisional a la AEPD (campos mínimos pre-rellenados)
3. Plantilla de comunicación a clientes afectados por una brecha de datos personales
4. Resumen ejecutivo del plan de respuesta a incidentes (1 página para imprimir y tener disponible)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Gestionar legalmente un ciberataque: obligación de notificar a la AEPD en 72h, proceso de denuncia penal, responsabilidad y protocolo preventivo.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Automatización de soporte con IA',
                'description'      => 'Implementa chatbots y clasificadores que resuelven el 30-40% de los tickets sin agente humano, con buena experiencia de usuario y sin frustraciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en automatización de customer support con experiencia en implementación de chatbots conversacionales, clasificadores de intención y sistemas de enrutamiento inteligente. Necesito implementar IA en mi equipo de soporte para reducir la carga de tickets sin perjudicar la experiencia del cliente.

**Mi contexto:**
[Tipo de empresa: SaaS / ecommerce / app de consumo / servicio profesional]

**Volumen de soporte:**
[Tickets por mes, canales principales: email / chat / WhatsApp / teléfono]

**Tipos de tickets más frecuentes:**
[Preguntas de producto, problemas técnicos, solicitudes de devolución, problemas de cuenta, etc.]

**Stack actual:**
[Zendesk / Intercom / Freshdesk / Hubspot Service / otro — especifica]

---

## PARTE 1 — ESTRATEGIA ANTES DE AUTOMATIZAR

### El error de automatizar sin entender

El mayor error en la automatización de soporte: empezar por implementar el chatbot antes de entender qué tickets se pueden automatizar.

**Proceso correcto**:

1. **Analiza el ticket backlog**: descarga todos los tickets del último trimestre y clasifícalos por tipo
2. **Identifica los patrones repetitivos**: ¿qué tipo de ticket supone el 20% de las categorías pero el 60% del volumen?
3. **Evalúa la automatizabilidad**: ¿puede responderse con información estática? ¿Requiere acceso a datos del cliente? ¿Requiere juicio humano?
4. **Prioriza por impacto**: automatiza primero los tickets más frecuentes y más fáciles de responder bien

### Los tres niveles de automatización

| Nivel | Qué hace | Ejemplo | % de resolución esperado |
|-------|---------|---------|--------------------------|
| Nivel 1 — Autoservicio | FAQ inteligente, chatbot de búsqueda | "¿Cómo cambio mi contraseña?" | 20-30% |
| Nivel 2 — Acción autónoma | Bot que accede al sistema y resuelve | "Cancela mi suscripción" → sistema cancela directamente | 10-20% adicional |
| Nivel 3 — Asistencia al agente | IA sugiere la respuesta, el agente aprueba | Borrador de respuesta generado por IA | No reduce tickets pero reduce tiempo por ticket un 40-60% |

Para empezar, el Nivel 3 tiene el ROI más rápido y el menor riesgo.

---

## PARTE 2 — IMPLEMENTACIÓN DEL CHATBOT

### Arquitectura de un chatbot de soporte moderno

```
USUARIO
  ↓
CANAL (chat, WhatsApp, email)
  ↓
CLASIFICADOR DE INTENCIÓN
├── FAQ / conocimiento estático → Respuesta directa de knowledge base
├── Consulta de cuenta → Integración con sistema (CRM, backend)
├── Solicitud de acción → Bot ejecuta la acción o pide confirmación
└── Complejidad alta / emoción negativa → Transferencia a agente humano
  ↓
ESCALACIÓN A AGENTE (con contexto del bot)
```

### Diseño del árbol de conversación

Para cada flujo del chatbot, define:

1. **Trigger**: la frase, intención o keyword que activa el flujo
2. **Respuesta inicial**: el mensaje del bot (máximo 2-3 líneas, con opción de "más información")
3. **Opciones de seguimiento**: los 2-3 caminos posibles tras la respuesta
4. **Condición de escalación**: cuándo el bot cede el control al agente humano
5. **Mensaje de transición**: cómo el bot comunica la transferencia al usuario

### El prompt de un chatbot basado en LLM

Si usas un LLM (GPT-4, Claude, etc.) como base del chatbot, el system prompt es crítico:

```
Eres el asistente de soporte de [empresa]. Tu nombre es [nombre del bot].

CONTEXTO:
- Ayudas a clientes de [tipo de producto/servicio]
- Los clientes contactan principalmente por [tipos de dudas frecuentes]

REGLAS DE COMPORTAMIENTO:
1. Responde siempre en el idioma del cliente
2. Sé conciso: máximo 3-4 oraciones por respuesta
3. Si no estás seguro de la respuesta, admítelo y ofrece escalar a un agente
4. No inventes datos de cuenta, precios ni fechas — si los necesitas, pide al cliente que te los proporcione o escala
5. Si el cliente expresa frustración o enfado, prioriza empatía antes que información

LÍMITES:
- No hagas promesas de reembolso, descuentos o compensaciones sin confirmación del agente
- No accedas a información de cuenta sin verificar la identidad del cliente
- No respondas sobre temas que no estén en tu knowledge base

ESCALACIÓN:
Escala al agente cuando: (a) el cliente lo pide, (b) el problema requiere acceso a sistemas que no tienes, (c) el cliente está muy frustrado, (d) la consulta es técnica compleja
```

### Knowledge base: la base del chatbot

Un chatbot es tan bueno como su knowledge base. Proceso para construirla:

1. **Exporta las respuestas de tus mejores agentes** para los tickets más frecuentes — esas son las respuestas correctas
2. **Estructura en pares pregunta-respuesta**: no artículos largos, sino Q&A específicos
3. **Cubre variaciones de la misma pregunta**: "¿cómo cancelo?" / "quiero darme de baja" / "cancelar cuenta" → misma respuesta
4. **Revisa y actualiza mensualmente**: la knowledge base caduca si el producto cambia

---

## PARTE 3 — CLASIFICACIÓN Y ENRUTAMIENTO INTELIGENTE

### Clasificación automática de tickets

Aunque no implementes un chatbot, un clasificador de tickets mejora drásticamente la eficiencia:

**Qué puede clasificar automáticamente**:
- **Categoría**: billing / técnico / cuenta / feature request / queja / otro
- **Prioridad**: urgente / normal / baja (basado en palabras clave y sentimiento)
- **Sentimiento**: positivo / neutral / negativo / muy negativo
- **Idioma**: para enrutar al agente correcto en equipos multilingüe
- **Cliente**: VIP / plan premium / en riesgo de churn (integración con CRM)

### Enrutamiento basado en habilidades

Define las reglas de enrutamiento que el sistema debe seguir:

| Condición | Enrutar a |
|-----------|----------|
| Categoría = billing + cliente VIP | Equipo senior + prioridad alta |
| Categoría = técnico + producto X | Especialista técnico del producto X |
| Sentimiento muy negativo | Agente senior con habilidades de retención |
| Idioma = francés | Cola de agentes bilingüe |
| Cliente en período de prueba | CS con perfil de onboarding |

### Auto-respuestas y resolución asistida

**Auto-respuestas de alta confianza** (sin agente): si el clasificador detecta intención de "resetear contraseña" con > 90% de confianza, puede enviar la respuesta automáticamente.

**Borrador sugerido para el agente** (el agente revisa y aprueba): para el 60% de los tickets rutinarios, el agente recibe ya un borrador de respuesta generado por IA. Solo necesita revisarlo y ajustarlo antes de enviar.

---

## PARTE 4 — MEDICIÓN DEL IMPACTO

### Métricas antes y después de la automatización

| Métrica | Cómo medirla | Objetivo |
|---------|-------------|---------|
| Containment rate | % tickets resueltos por bot sin escalar a agente | 25-40% |
| Bot CSAT | Satisfacción de la interacción con el bot (encuesta al finalizar) | > 3.5/5 |
| Tiempo de primera respuesta | Minutos hasta primera respuesta (bot o agente) | Reducción > 60% con bot |
| Tiempo de resolución (agentes) | Tiempo medio de resolución en tickets que llegan al agente | Reducción > 30% con clasificador |
| Escalation rate | % de conversaciones del bot que escalan a agente | 60-75% (si es > 80%, el bot no está funcionando) |
| Agent efficiency | Tickets resueltos por agente por hora | Aumento > 20% con IA asistida |

### El CSAT del bot vs. el CSAT del agente

Un chatbot de soporte bien implementado debe tener un CSAT comparable al de los agentes humanos en los casos que resuelve. Si el CSAT del bot es significativamente menor:
- El bot está intentando resolver casos que debería escalar
- Las respuestas del bot son demasiado genéricas
- El flujo de escalación es frustrante (el usuario no llega fácilmente al agente)

---

## PARTE 5 — GESTIÓN DEL CAMBIO EN EL EQUIPO

### Cómo presentar la automatización al equipo de soporte

El temor más común: "la IA va a quitarnos el trabajo". La comunicación correcta:

1. **Transparencia sobre el objetivo**: reducir tickets rutinarios para que el equipo pueda enfocarse en casos complejos y en la relación con el cliente
2. **Involucrar al equipo en el diseño**: los agentes conocen mejor que nadie qué preguntas son repetitivas y qué respuestas funcionan — son los mejores para construir la knowledge base
3. **Mostrar el beneficio personal**: menos tickets de "¿cómo reseteo mi contraseña?" = más tiempo para casos interesantes y relaciones con clientes
4. **Medir y compartir los resultados**: cuando el bot resuelve 200 tickets por semana, mostrarlo como logro del equipo, no de la tecnología

---

## ENTREGABLES

1. Análisis de automatizabilidad de mis tickets: categorías, volumen y prioridad de automatización
2. System prompt del chatbot de soporte adaptado a mi empresa y tipo de producto
3. Árbol de decisión de escalación: cuándo el bot cede al agente (con condiciones específicas)
4. Plan de implementación en 8 semanas: fases, entregables y métricas de éxito
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Implementar automatización de soporte con IA: chatbot, clasificador de intención, knowledge base y medición del impacto en la eficiencia del equipo.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Contratos para freelancers',
                'description'      => 'El contrato de servicios que protege tu trabajo, establece límites claros y garantiza el cobro: guía completa para freelancers que trabajan sin protección.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado mercantil con experiencia en contratos de servicios profesionales para trabajadores independientes. Necesito diseñar el contrato de servicios freelance que proteja mi trabajo, establezca límites claros con el cliente y garantice el cobro.

**Mi especialidad freelance:**
[Diseño / desarrollo / copywriting / consultoría / fotografía / formación / marketing — especifica]

**Tipo de clientes habituales:**
[Startups / pymes / grandes empresas / personas físicas / agencias]

**Ticket medio:**
[Importe medio de un proyecto]

**Problema que quiero resolver:**
[Clientes que piden más de lo acordado / clientes que no pagan / proyectos que nunca terminan / no tengo contrato y trabajo con email]

---

## PARTE 1 — POR QUÉ TODO FREELANCE NECESITA UN CONTRATO

### Las cuatro situaciones que un contrato hubiera evitado

1. **El cliente pide tres revisiones más "pequeñas" que acaban siendo el doble del trabajo**
   → Un contrato con el número de revisiones incluidas y el proceso de Change Order lo habría evitado

2. **El cliente desaparece con los entregables sin pagar**
   → Un contrato con pago por adelantado parcial y retención de derechos hasta el pago habría protegido

3. **El cliente dice que los entregables "no son lo que esperaba" sin haberlo especificado antes**
   → Un contrato con criterios de aceptación y brief firmado habría definido el éxito

4. **El proyecto se eterniza sin final claro**
   → Un contrato con fecha de entrega y cláusula de finalización habría dado cierre

### La diferencia entre un email y un contrato

Un email de confirmación tiene valor probatorio limitado. Un contrato firmado:
- Define claramente las obligaciones de ambas partes
- Establece las consecuencias del incumplimiento
- Es ejecutable judicialmente en caso de disputa
- Disuade al cliente de reclamar cosas que no acordasteis

---

## PARTE 2 — LAS CLÁUSULAS ESENCIALES

### Cláusula 1 — Identificación de las partes

Datos mínimos que deben aparecer:

**Proveedor (freelance)**:
- Nombre completo o razón social si tienes empresa
- DNI / NIF
- Domicilio fiscal
- Email profesional y teléfono

**Cliente**:
- Nombre completo o razón social
- NIF / CIF
- Domicilio social o fiscal
- Nombre del responsable del proyecto (la persona con quien trabajas)
- Email del contacto principal

### Cláusula 2 — Objeto del contrato (el alcance)

Esta es la cláusula más importante. Debe ser lo más específica posible:

❌ Vago: "Diseño de la identidad visual de la empresa"

✅ Específico: "Diseño del logotipo de la empresa en sus variantes horizontal, vertical y símbolo aislado, en colores corporativos (máximo 3) y en versión monocromo, con entrega en formatos AI, EPS, PNG y PDF vectorial. Incluye manual de marca básico de hasta 12 páginas con aplicaciones sobre papelería (tarjeta, carta y sobre). No incluye diseño web, packaging, señalética ni animaciones."

**El apartado de exclusiones es tan importante como el de inclusiones.**

### Cláusula 3 — Precio y forma de pago

**Precio total**:
- Importe total del proyecto (sin IVA) o tarifa por hora/día si es el modelo
- IVA aplicable (21% en España para la mayoría de servicios)
- Gastos adicionales incluidos o no (desplazamientos, licencias de software, stock photos)

**Calendario de pagos**:
El modelo recomendado para proyectos de más de 1.000€:

| Hito | Porcentaje | Momento |
|------|-----------|---------|
| Señal / inicio | 30-50% | A la firma del contrato |
| Entrega de borrador | 20-30% | Antes de la primera revisión |
| Entrega final | 20-30% | Tras la aprobación del cliente |

Para proyectos > 5.000€: divide en más hitos o añade hitos intermedios.

**Por qué el pago por adelantado protege al freelance**:
- Compromete económicamente al cliente con el proyecto
- Cubre al menos los costes de oportunidad y parte del tiempo si el cliente desaparece
- Filtra a los clientes que no tienen presupuesto real

### Cláusula 4 — Plazos y entregables

Define:
- Fecha de inicio (desde la recepción del pago inicial y del brief completo)
- Hitos con fechas o número de semanas desde inicio
- Fecha de entrega final (condicionada a que el cliente cumpla sus compromisos: briefing, feedback en plazo, pago)

**La cláusula de delay del cliente**: "Si el cliente no proporciona el feedback, los materiales o la información necesarios en el plazo de [X días hábiles], la fecha de entrega se prorrogará automáticamente por el mismo período de retraso más [X días adicionales para retomar el proyecto]."

### Cláusula 5 — Revisiones y cambios de alcance

**Revisiones incluidas**:
"El precio acordado incluye hasta [número] rondas de revisión por entregable. Cada ronda de revisión comprende los comentarios y ajustes solicitados por el cliente en una sola comunicación (no de forma fragmentada a lo largo de varios días). Las rondas de revisión adicionales se facturarán a [X]€/hora o [X]€ por ronda."

**Proceso de cambio de alcance (Change Order)**:
"Cualquier solicitud fuera del alcance descrito en la Cláusula 2 deberá formalizarse mediante un Addendum a este contrato, acordando el importe adicional y el nuevo plazo antes de que el freelance inicie el trabajo adicional. El freelance no está obligado a iniciar trabajos fuera del alcance sin un Addendum firmado."

### Cláusula 6 — Propiedad intelectual

Dos modelos principales:

**Modelo A — Cesión total** (el cliente obtiene todos los derechos al pagar):
"Tras el pago íntegro del precio acordado, el freelance cede al cliente todos los derechos de explotación sobre los entregables finales, incluyendo los derechos de reproducción, distribución, comunicación pública y transformación."

**Modelo B — Licencia de uso** (el freelance retiene los derechos):
"El freelance concede al cliente una licencia de uso no exclusiva y no sublicenciable sobre los entregables finales, limitada a [los usos acordados: web de la empresa, publicaciones en redes sociales, etc.]. El freelance retiene la propiedad intelectual y puede usar los entregables en su portfolio."

**Cláusula de retención de derechos hasta el pago**:
"Los derechos de uso de los entregables solo se transmitirán al cliente una vez realizado el pago íntegro del precio acordado. Hasta dicho pago, el cliente no podrá usar, publicar ni distribuir los entregables."

Esta cláusula es el seguro de impago más efectivo del freelance.

### Cláusula 7 — Confidencialidad

"Ambas partes se comprometen a mantener la más estricta confidencialidad sobre la información reservada que se comparta durante la ejecución de este contrato, especialmente [datos de negocio, estrategia de producto, información de clientes del cliente]. Esta obligación se mantendrá durante la ejecución del contrato y durante un período de [2 años] tras su finalización."

### Cláusula 8 — Resolución del contrato

**Causas de resolución por parte del freelance**:
- Impago de cualquier factura transcurridos [15 días] desde el vencimiento
- Incumplimiento grave de las obligaciones del cliente (proporcionar la información necesaria, respetar el proceso acordado)
- Cambios sustanciales en el alcance que el cliente exige sin acuerdo de precio

**Consecuencias de la resolución**:
- El cliente abona los trabajos realizados hasta la fecha de resolución
- El freelance entrega los materiales parciales solo si el cliente ha pagado lo correspondiente

### Cláusula 9 — Jurisdicción

"Para cualquier disputa derivada de este contrato, las partes se someten a los juzgados y tribunales del domicilio del freelance, con renuncia expresa a cualquier otro fuero que pudiera corresponderles."

Esta cláusula obliga al cliente a litigar en tu ciudad, lo que disuade las reclamaciones frívolas de clientes lejanos.

---

## PARTE 3 — FORMATO Y FIRMA

### Cómo firmar contratos digitalmente

Herramientas de firma electrónica legalmente válidas en España y la UE:
- **DocuSign**: el estándar empresarial, más caro
- **HelloSign (ahora Dropbox Sign)**: equilibrio entre precio y funcionalidad
- **Signaturit**: española, especialmente válida para firma avanzada y cualificada
- **Adobe Acrobat Sign**: si ya usas Adobe
- **Free alternatives**: Docusign free plan, Signee (básico gratuito)

La firma electrónica simple (que el destinatario pincha "acepto") tiene validez legal para contratos entre profesionales en España.

---

## ENTREGABLES

1. Contrato base para freelancers en servicios creativos (estructura completa con todas las cláusulas listadas y sus opciones)
2. Template de Change Order para solicitudes fuera del alcance
3. Proceso de revisión del contrato antes de enviarlo al cliente (5 preguntas que debes hacerte)
4. Qué hacer cuando el cliente se niega a firmar un contrato (alternativas y cómo protegerse de todas formas)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar el contrato de servicios freelance con las cláusulas que protegen el trabajo, establecen el alcance, garantizan el cobro y retienen los derechos hasta el pago.',
                'vote_score'       => 45,
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
