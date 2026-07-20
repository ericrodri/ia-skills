<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills21Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'SEO de contenido: keyword research, estructura E-E-A-T y el artículo que llega al top 3 de Google',
                'description'       => 'Crea el proceso completo de SEO de contenido que posiciona artículos en las primeras posiciones de Google. Con el keyword research que encuentra las oportunidades reales, la estructura de artículo que satisface la intención de búsqueda y los principios E-E-A-T que Google exige para contenido de calidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un SEO Content Specialist con experiencia posicionando artículos en el top 3 de Google para palabras clave con 1k-100k búsquedas/mes en nichos competitivos de SaaS, ecommerce y servicios B2B.

Contexto:
- Sector/temática: [describe]
- Dominio/web: [URL o descripción]
- Herramienta de SEO disponible: [Ahrefs / SEMrush / Ubersuggest / Google Search Console / ninguna]
- Artículo a crear o mejorar: [tema o URL del artículo existente]
- Objetivo: [posicionar desde cero / mejorar ranking de artículo existente / crear cluster de contenido]

## Proceso SEO de Contenido — [Temática]

### 🔍 Keyword Research: encontrar las oportunidades reales

**El error del principiante:** ir a por las keywords con más búsquedas.
**El error del intermedio:** ir a por keywords de cola larga sin evaluar la intención.

**El proceso correcto:**

**Paso 1 — Seed keywords:**
Las 5-10 palabras que definen tu temática. Ejemplo: si vendes software de facturación → [software facturación, programa facturas, app factura autónomo, crear factura online...]

**Paso 2 — Expansión con herramientas:**
```
Herramienta gratuita: Google Search (autocompletado + "búsquedas relacionadas")
Herramienta gratuita: Answer The Public (preguntas frecuentes)
Herramienta de pago: Ahrefs/SEMrush → Keywords Explorer → "Match terms" + "Questions"
```

**Paso 3 — Filtrar por oportunidad real:**
No es solo el volumen de búsquedas — es la combinación de:
- Volumen: ¿cuántas búsquedas mensuales?
- Keyword Difficulty (KD): ¿qué tan difícil es posicionar? (KD <40 = oportunidad real para dominios nuevos)
- Intención de búsqueda: ¿el usuario quiere información, comparar o comprar?
- Relevancia para tu negocio: ¿si posicionas esto, atrae al cliente ideal?

**Tabla de priorización:**
| Keyword | Volumen | KD | Intención | Relevancia | Prioridad |
|---------|---------|----|-----------|-----------|----|
| [keyword 1] | X | X | info/transac | Alta | 🔴/🟡/🟢 |

### 📐 La intención de búsqueda: lo que Google quiere ver

**Los 4 tipos de intención:**
- **Informacional:** el usuario quiere aprender ("qué es el IVA")
- **Navegacional:** busca una web específica ("login Holded")
- **Comercial:** compara opciones antes de decidir ("mejor software facturación PYME")
- **Transaccional:** listo para comprar ("comprar programa facturación")

**Por qué importa:**
Si escribes un artículo transaccional para una keyword informacional, Google no lo posicionará bien — la intención no coincide.

**Cómo verificar la intención:**
Busca la keyword en Google y analiza los primeros 5 resultados:
- ¿Son artículos de blog? → intención informacional
- ¿Son páginas de producto o landing? → intención transaccional
- ¿Son listas de comparación? → intención comercial

Tu contenido debe seguir el mismo formato que los resultados que ya posicionan.

### 🏗️ La estructura del artículo que posiciona

**H1:** la keyword principal (una sola vez, al principio)
**Introducción (150-200 palabras):** responde directamente la pregunta principal — Google y el usuario quieren la respuesta inmediata
**H2s y H3s:** las preguntas relacionadas que el usuario también tiene ("People Also Ask" de Google = tu tabla de contenidos)
**Conclusión:** resumen + CTA claro

**Longitud óptima:**
No existe la longitud perfecta — es la que los top 3 resultados tienen.
Si los competidores tienen 1.500 palabras, cubre el tema con 1.800-2.000. No rellenes por rellenar.

### 🏆 E-E-A-T: lo que diferencia el contenido que Google confía del que ignora

**Experiencia:** muestras experiencia real con el tema (casos propios, datos propios)
**Expertise:** eres experto en la materia (credenciales, profundidad del contenido)
**Autoridad:** otros te citan y enlazan
**Confianza:** el contenido es preciso, tiene fuentes y se actualiza

**Señales de E-E-A-T en el artículo:**
- Autor con bio y credenciales visibles
- Fecha de publicación y última actualización
- Fuentes citadas (estudios, datos, organismos oficiales)
- Experiencia propia (screenshots, casos reales, ejemplos propios)
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'SEO contenido, keyword research, posicionamiento Google, E-E-A-T',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura hexagonal en aplicaciones web: separa el dominio de la infraestructura y haz tu código testeable',
                'description'       => 'Implementa la arquitectura hexagonal (ports and adapters) en tu aplicación web para desacoplar la lógica de negocio de los frameworks, bases de datos y servicios externos. Con la estructura de carpetas, los patrones de repositorio y caso de uso, y cómo migrar desde una arquitectura acoplada sin parar el desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Software Architect con experiencia implementando arquitecturas hexagonales en aplicaciones Node.js, Python y PHP que han pasado de código imposible de testear a suites de tests con 80%+ de cobertura y migración de infraestructura sin reescribir la lógica de negocio.

Stack:
- Lenguaje/framework: [Node.js+Express / Python+FastAPI / PHP+Laravel / otro]
- Estado actual: [arquitectura acoplada en controladores / MVC sin capa de dominio / queremos mejorar testabilidad]
- Tamaño del proyecto: [pequeño <10k LOC / medio 10-50k LOC / grande >50k LOC]
- Objetivo: [hacer el código testeable / poder cambiar la BD sin tocar lógica / preparar para escalar el equipo]

## Arquitectura Hexagonal — [Tu proyecto]

### 🧠 El problema que resuelve la arquitectura hexagonal

**El problema del código acoplado:**
```javascript
// ❌ El controlador hace todo: HTTP + lógica + base de datos
class UserController {
  async register(req, res) {
    // Validación del request HTTP
    if (!req.body.email) return res.status(400).json({ error: 'Email required' })

    // Lógica de negocio mezclada con la infra
    const existingUser = await db.query('SELECT * FROM users WHERE email = ?', [req.body.email])
    if (existingUser) return res.status(409).json({ error: 'Email already exists' })

    // Acceso directo a la base de datos
    const user = await db.query('INSERT INTO users (email, ...) VALUES (?, ...)', [...])

    // Envío de email directamente
    await sendgrid.send({ to: req.body.email, ... })

    res.json({ user })
  }
}
```
**El resultado:** no puedes testear la lógica sin una base de datos real y un servidor HTTP activo.

### 🏗️ La estructura de la arquitectura hexagonal

```
src/
├── domain/                    # El núcleo — sin dependencias externas
│   ├── entities/              # Las entidades del negocio
│   │   └── User.js
│   ├── repositories/          # Las interfaces (ports)
│   │   └── UserRepository.js  # define el contrato, sin implementación
│   └── use-cases/             # La lógica de negocio pura
│       └── RegisterUser.js
│
├── application/               # Orquestación
│   └── services/
│       └── UserService.js
│
└── infrastructure/            # Los adapters — implementaciones concretas
    ├── http/                  # El adapter HTTP (Express, Fastify...)
    │   └── controllers/
    │       └── UserController.js
    ├── persistence/           # El adapter de base de datos
    │   └── PostgresUserRepository.js
    └── email/                 # El adapter de email
        └── SendgridEmailService.js
```

### 📐 Los puertos y adaptadores en código

**El puerto (la interfaz — en el dominio):**
```javascript
// domain/repositories/UserRepository.js
// No importa nada externo — es una interfaz pura
export class UserRepository {
  async findByEmail(email) { throw new Error('Not implemented') }
  async save(user) { throw new Error('Not implemented') }
}
```

**El caso de uso (lógica de negocio pura — en el dominio):**
```javascript
// domain/use-cases/RegisterUser.js
export class RegisterUser {
  constructor(userRepository, emailService) {
    this.userRepository = userRepository  // inyectado — puede ser real o mock
    this.emailService = emailService
  }

  async execute({ email, password }) {
    const existing = await this.userRepository.findByEmail(email)
    if (existing) throw new Error('Email already registered')

    const user = new User({ email, password: await hash(password) })
    await this.userRepository.save(user)
    await this.emailService.sendWelcome(user)

    return user
  }
}
// Este caso de uso es 100% testeable sin base de datos ni HTTP
```

**El adaptador de base de datos:**
```javascript
// infrastructure/persistence/PostgresUserRepository.js
import { UserRepository } from '../../domain/repositories/UserRepository.js'

export class PostgresUserRepository extends UserRepository {
  constructor(db) { super(); this.db = db }

  async findByEmail(email) {
    return this.db.query('SELECT * FROM users WHERE email = $1', [email])
  }

  async save(user) {
    return this.db.query('INSERT INTO users ... VALUES ...', [...])
  }
}
```

**El test — sin infraestructura real:**
```javascript
// tests/use-cases/RegisterUser.test.js
import { RegisterUser } from '../../domain/use-cases/RegisterUser.js'

test('registers a new user', async () => {
  const mockRepo = {
    findByEmail: jest.fn().mockResolvedValue(null),  // no está registrado
    save: jest.fn().mockResolvedValue(true),
  }
  const mockEmail = { sendWelcome: jest.fn() }

  const useCase = new RegisterUser(mockRepo, mockEmail)
  const user = await useCase.execute({ email: 'test@test.com', password: '123456' })

  expect(mockRepo.save).toHaveBeenCalledWith(expect.objectContaining({ email: 'test@test.com' }))
  expect(mockEmail.sendWelcome).toHaveBeenCalledWith(user)
})
// Sin base de datos. Sin HTTP. En milisegundos.
```

### 📅 Cómo migrar desde arquitectura acoplada sin parar el desarrollo
La estrategia de "strangler fig" para migrar módulo a módulo sin una reescritura big bang.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Arquitectura hexagonal, clean architecture, DDD, ports and adapters, testing',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Guía de estilo de marca para no diseñadores: el documento que hace que el equipo use bien los elementos visuales',
                'description'       => 'Crea la guía de estilo de marca que cualquier persona del equipo puede seguir para producir materiales visuales consistentes. Con los elementos mínimos documentados, las reglas de uso correcto e incorrecto, los templates listos y las instrucciones para Canva o PowerPoint.',
                'prompt_content'    => <<<'PROMPT'
Eres un Brand Designer con experiencia creando guías de estilo que equipos de ventas, marketing y producto aplican correctamente sin necesitar al diseñador en cada pieza.

Contexto:
- Marca: [nombre y descripción del negocio]
- Quién va a usar la guía: [equipo de ventas / marketing / product / todos]
- Materiales que producen sin diseñador: [presentaciones / posts de RRSS / documentos / emails / otro]
- Estado actual: [sin guía / logo en PDF sin reglas / guía existente que nadie consulta / otro]
- Herramientas que usa el equipo: [Canva / PowerPoint / Google Slides / Figma / otro]

## Guía de Estilo de Marca — [Empresa]

### 🎨 Los 5 elementos mínimos que toda guía debe incluir

**1. La paleta de colores**

Para cada color, documenta:
- El nombre de uso: "Color principal / Secundario / Acento / Neutro"
- Los 3 códigos: HEX (#2563EB), RGB (37, 99, 235), CMYK (para impresión)
- Cómo usarlo: "Para CTAs y botones principales"
- Cómo NO usarlo: "No usar sobre fondo blanco sin suficiente contraste"

**Plantilla:**
```
AZUL PRINCIPAL     #2563EB | RGB(37, 99, 235)
Usa para: botones primarios, links, elementos de acción
No usar para: texto corrido (dificulta la lectura sobre blanco)

NEGRO TEXTO        #111827 | RGB(17, 24, 39)
Usa para: todos los textos principales

GRIS CLARO        #F3F4F6 | RGB(243, 244, 246)
Usa para: fondos de sección, separadores visuales
```

**2. La tipografía**

```
TÍTULO (H1/H2):   Inter Bold — 40px/36px — Solo para encabezados principales
SUBTÍTULO:        Inter SemiBold — 24px/20px — Para secciones y subtítulos
CUERPO:           Inter Regular — 16px — Para texto corrido
DESTACADO:        Inter Medium Italic — 18px — Para citas y pulls
```

Cómo documenta el uso correcto:
- La fuente del heading NUNCA se usa para texto largo
- El texto corrido tiene interlineado de 1.5
- En bold solo para enfatizar — no más del 10% del texto de un párrafo

**3. El logotipo**

Para cada variante del logo:
- Logo completo (horizontal y vertical)
- Isotipo (el símbolo solo)
- Versión en positivo (fondo claro) y negativo (fondo oscuro)

**Reglas de uso:**
```
✅ Usar:
- Logo horizontal en presentaciones y documentos (mínimo 80px de ancho)
- Isotipo en avatares y perfiles (cuadrado 400×400px mínimo)
- Versión blanca sobre fondo de color corporativo

❌ No usar:
- Estirar o distorsionar el logo
- Cambiar los colores del logo
- Colocar sobre fondos que no contrasten suficientemente
- Añadir sombras, bordes o efectos
```

**Zona de exclusión:**
Espacio mínimo alrededor del logo = X veces la altura de la letra "A" del logotipo.

**4. La fotografía e imágenes**

El estilo fotográfico en 3 frases:
- "Personas reales en situaciones de trabajo, no modelos de stock genéricos"
- "Fondos claros o neutros, nunca oscuros salvo en piezas especiales"
- "Alta exposición, colores naturales sin filtros excesivos"

**5. El tono de voz (aunque sea para el equipo visual)**
Tono → cómo se traduce en las piezas:
- "Profesional pero cercano" → frases cortas, tuteo, sin jerga técnica
- "Confiado pero no arrogante" → afirmaciones directas, sin signos de exclamación en exceso

### 📋 El archivo de templates listos para usar

Lo más importante de la guía de estilo para no diseñadores:
No describirles las reglas — darles los templates.

**Templates que incluir en Canva / PowerPoint:**
1. Plantilla de presentación (portada + slides de contenido + cierre)
2. Post de LinkedIn (horizontal y cuadrado)
3. Historia de Instagram
4. Documento de propuesta (portada + contenido)
5. Firma de email

Cada template usa los colores, fuentes y logos correctos. El equipo solo cambia el texto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Guía de estilo, brand guidelines, identidad visual, Canva, templates',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión de territorios y cuotas de ventas: asigna el mercado y las metas para que el equipo rinda al máximo',
                'description'       => 'Diseña el modelo de territorios y cuotas de ventas que da a cada vendedor un mercado claro, una meta alcanzable y los incentivos correctos para maximizar el rendimiento del equipo. Con el proceso de segmentación del mercado, la asignación de cuotas basada en datos y el sistema de revisión.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Sales con experiencia diseñando modelos de territorios y cuotas para equipos de ventas de 5 a 50 personas en B2B SaaS y servicios profesionales.

Contexto:
- Tamaño del equipo: [N vendedores]
- Tipo de venta: [inside sales / field sales / mixto]
- Mercado: [sectores específicos / geografía / tamaño de empresa]
- Revenue objetivo anual: [€]
- Situación actual: [sin territorios definidos / cuotas históricas sin análisis / el equipo siente que las cuotas son injustas / otro]

## Modelo de Territorios y Cuotas — [Empresa]

### 🗺️ Diseño de territorios: cuándo usar geografía vs. verticals vs. segmentos

**El territorio geográfico:**
Cada vendedor cubre una región física.
Mejor cuando: el producto requiere visitas presenciales o la presencia local importa al cliente.
Riesgo: algunos territorios tienen más oportunidades que otros → cuotas desiguales.

**El territorio por vertical o industria:**
Cada vendedor cubre un sector (salud, manufactura, retail...).
Mejor cuando: el producto tiene casos de uso muy distintos por industria y la especialización importa.
Ventaja: el vendedor se convierte en experto del sector → conversiones más altas.

**El territorio por segmento de empresa:**
SMB (1-50 empleados), Mid-market (51-500), Enterprise (>500).
Mejor cuando: el proceso de venta es muy distinto según el tamaño.

**El modelo híbrido:**
Geografía + segmento. Ejemplo: "SMB en España y Portugal / Enterprise en toda Europa".

### 📊 Cómo calcular las cuotas basadas en datos

**Paso 1 — El Total Addressable Revenue del territorio:**

```
Territorio A:
- Empresas en el ICP dentro del territorio: 500 empresas
- Tasa de penetración objetivo: 5% en 12 meses
- ACV (valor medio del contrato anual): €12.000
- Revenue objetivo del territorio: 500 × 5% × €12.000 = €300.000/año
```

**Paso 2 — La cuota del vendedor:**

La cuota del vendedor NO es igual al revenue objetivo del territorio.
La cuota debe ser alcanzable por el vendedor con esfuerzo, no automática.

**La regla del 70/30:**
El 70% del equipo debe poder cumplir la cuota. Si más del 50% falla, la cuota está mal diseñada.

**La cuota correcta:**
```
Revenue objetivo del territorio: €300.000
× 80% (factor de productividad ajustado a la realidad)
= Cuota anual del vendedor: €240.000/año = €20.000/mes
```

**Paso 3 — La cuota por período:**
Distribución por trimestre — muchos negocios tienen estacionalidad.
```
Q1: 20% de la cuota anual (enero-marzo es lento en muchos sectores)
Q2: 25%
Q3: 25%
Q4: 30% (el trimestre más fuerte en B2B)
```

### 💰 Los tipos de cuota (y cuál elegir)

**Cuota de revenue:** la más común. Cuánto cierra en €.
**Cuota de actividad:** número de llamadas, demos, propuestas. Para vendedores nuevos que aprenden.
**Cuota de nuevos logos:** número de clientes nuevos (combinada con revenue para evitar focus solo en logos pequeños).
**Cuota de pipeline:** cantidad de pipeline generado. Útil para SDRs.

**La cuota mixta para AEs:**
70% por revenue cerrado + 20% por nuevos logos + 10% por upsell.
Incentiva el volumen y la calidad sin sacrificar ninguna métrica.

### 🔄 El proceso de revisión de cuotas (sin destruir la motivación del equipo)
La revisión anual de cuotas, cómo comunicar los cambios y qué hacer con los territorios que sobre/under-performan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Territorios de ventas, cuotas, sales planning, revenue operations',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'OKRs de producto: cómo escribirlos para que orienten decisiones y no se queden en papel mojado',
                'description'       => 'Escribe OKRs de producto que conectan los objetivos del equipo con la estrategia de la empresa y que el equipo puede usar para tomar decisiones todos los días. Con la diferencia entre outputs y outcomes, los Key Results medibles y el proceso de check-in que mantiene vivos los OKRs durante el trimestre.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Product con experiencia implementando OKRs en equipos de producto de 3 a 20 personas que han pasado de listas de features a objetivos de negocio medibles.

Contexto:
- Tamaño del equipo de producto: [N personas]
- Estado actual de los OKRs: [sin OKRs / los tenemos pero son features, no objetivos / los escribimos cada trimestre pero no los miramos / quiero mejorar la calidad de los OKRs]
- Horizonte temporal: [trimestral / semestral / anual]
- Nivel de los OKRs: [equipo de producto / toda la empresa / solo el PM]

## OKRs de Producto — [Equipo]

### 🧠 La diferencia más importante: output vs. outcome

**Output (lo que construyes):**
"Lanzar el módulo de integraciones"
"Rediseñar el onboarding"
"Mejorar el tiempo de carga de la página"

**Outcome (el cambio que produce en el usuario o el negocio):**
"Que los usuarios configuren su primera integración en <10 minutos"
"Que el 60% de los usuarios complete el onboarding en 7 días"
"Que el 80% de los usuarios de la app web vea el dashboard en <2 segundos"

**Por qué los OKRs de producto deben ser outcomes:**
Los outputs están bajo el control total del equipo.
Los outcomes son lo que el negocio necesita cambiar.
Un equipo que entrega sus outputs pero no mueve las métricas del negocio está ejecutando el plan equivocado.

### 📐 La estructura correcta de un OKR de producto

**El Objective:**
Una frase inspiradora que describe el cambio cualitativo que quieres conseguir este trimestre.
- Es ambicioso pero no imposible
- No contiene números (esos van en los KRs)
- Da dirección, no prescribe soluciones

**Bien:** "Que los usuarios nuevos experimenten el valor del producto en la primera semana"
**Mal:** "Mejorar el onboarding" (demasiado vago)
**Mal:** "Aumentar la activación al 60%" (el número va en el KR)

**Los Key Results (2-4 por Objective):**
Métricas específicas y medibles que definen "cómo sabremos que el Objective se cumplió".

**La fórmula del KR:**
[Métrica de baseline] → [métrica objetivo] en [plazo]

**Ejemplos:**
```
Objective: Que los usuarios nuevos experimenten el valor en la primera semana

KR1: Aumentar el % de usuarios que completan el onboarding de 35% a 55% (fin de Q2)
KR2: Reducir el time-to-aha-moment de 5 días a 2 días (fin de Q2)
KR3: Mejorar el Day-7 retention de 20% a 30% (medido en la cohorte de Q1)
```

**El test del KR:**
- ¿Está claro cómo lo voy a medir?
- ¿Está claro cuál es el valor de partida (baseline)?
- ¿Si lo consigo, el Objective está claramente más cerca?
- ¿Si me enfoco solo en este KR, ¿podría conseguirlo de forma disfuncional? (si sí, añade otro KR que lo balancee)

### 📅 El ritmo de OKRs que funciona (sin que sea puro teatro)

**La reunión de kick-off del trimestre:**
Presentar los OKRs al equipo, explicar el "por qué" y alinear sobre qué no haremos este trimestre.

**El check-in semanal (10-15 min):**
No es una reunión de estado — es una conversación sobre aprendizajes:
"¿Qué aprendimos esta semana sobre el KR1? ¿Qué cambiaríamos en el approach?"

**El mid-quarter review:**
A la mitad del trimestre: ¿vamos en línea? ¿Hay que ajustar el approach? ¿Hay que escalar algo que no está funcionando?

**El retrospectivo de fin de trimestre:**
¿Alcanzamos los OKRs? ¿Por qué sí o no? ¿Qué aprendimos sobre cómo medimos y sobre qué nos propusimos?

### 🚫 Los errores que hacen que los OKRs sean papel mojado
Los 5 errores más frecuentes de implementación de OKRs en equipos de producto y cómo evitarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'OKRs de producto, outcomes vs outputs, métricas, product management',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Outplacement y desvinculación digna: el proceso que protege a la empresa y cuida al empleado que sale',
                'description'       => 'Gestiona el proceso de desvinculación voluntaria o involuntaria de forma que proteja la reputación de la empresa, cumpla las obligaciones legales y trate al empleado con dignidad. Con la reunión de comunicación, el proceso de salida, el apoyo de outplacement y cómo gestionar el impacto en el equipo que se queda.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Director con experiencia gestionando procesos de desvinculación en empresas de 20 a 500 empleados de forma que minimizan el impacto legal, preservan la reputación del empleador y mantienen la moral del equipo restante.

Contexto:
- Tipo de desvinculación: [despido individual / ERE / no renovación / baja voluntaria]
- Nivel del empleado: [operativo / manager / directivo / C-level]
- Motivo: [rendimiento / restructuración / fit cultural / económico]
- Relación actual con el empleado: [tensa / neutra / buena a pesar de la decisión]
- País: [España — marco ET aplicable]

## Proceso de Desvinculación Digna — [Empresa]

### 🏗️ Los principios de una desvinculación bien gestionada

**Para la empresa:**
- Cumplir todas las obligaciones legales (indemnización, finiquito, liquidación, plazos)
- Minimizar el riesgo de demanda por despido improcedente o nulo
- Proteger la confidencialidad de la información

**Para el empleado:**
- Recibir la información de forma clara y respetuosa
- Tener el tiempo suficiente para prepararse
- Recibir el apoyo necesario para el siguiente paso (outplacement)

**Para el equipo restante:**
- Que la comunicación sea clara y honesta
- Que no sientan que "nadie está seguro"
- Que la empresa explica el motivo (sin detallar lo que no deben saber)

### 📋 La reunión de comunicación del despido (la más difícil)

**Preparación:**
- Tener listos todos los documentos legales antes de la reunión (carta de despido, finiquito calculado)
- La reunión debe ser en privado — nunca en salas de cristal ni con otras personas cerca
- Participan: HR + el manager directo (como mínimo)
- Duración: 20-30 minutos (no más de 45)

**El guión de la reunión:**

*Apertura (directa — no alargar la anticipación):*
"[Nombre], gracias por venir. Necesito comunicarte una decisión difícil: hemos decidido prescindir de tus servicios con efectividad [fecha]."

*El motivo (claro, sin excusas vagas):*
"La razón es [restructuración del equipo / no hemos alcanzado el acuerdo en el rendimiento / cambio de dirección del área]."

*Los próximos pasos:*
"Tu último día de trabajo es [fecha]. Tu indemnización es [€], calculada en base a [años de servicio × días/año]. Hoy te entregamos la carta formal y el cálculo del finiquito para que lo revises con calma."

*El apoyo disponible:*
"Queremos ayudarte en este proceso. Ofrecemos [programa de outplacement / carta de recomendación / referencia profesional / tiempo durante el preaviso para buscar trabajo]."

*El espacio para preguntas:*
"¿Tienes alguna pregunta?"

**Lo que nunca debes decir:**
- "No ha sido una decisión fácil para nosotros" → suena vacío
- "Tienes mucho talento, esto no tiene que ver con ti" → si el motivo es rendimiento, es contradictorio
- Disculparte en exceso → genera confusión sobre si la decisión es firme
- Negociar en la reunión de comunicación → si hay margen de negociación, es en otra reunión

### 📦 El proceso de offboarding (los 5-15 días siguientes)

**Día de la comunicación:**
- Revocar accesos a sistemas críticos (sin que lo note el empleado en la reunión)
- Entrega del equipo corporativo al finalizar la jornada
- Entrega de la documentación legal para firma

**Durante el período de preaviso (si lo hay):**
- Proceso de traspaso de conocimiento
- Acceso a servicios de outplacement
- Comunicación interna al equipo (preparada con el empleado si la relación lo permite)

### 🤝 El outplacement: apoyo para el siguiente paso

**Qué incluye un programa de outplacement básico:**
- Actualización del CV y perfil de LinkedIn
- Preparación para entrevistas
- Mapa de contactos y red de apoyo
- Orientación sobre el mercado laboral del sector

**Por qué la empresa se beneficia del outplacement:**
Reduce la probabilidad de demanda judicial (el empleado está ocupado en su siguiente paso).
Mejora el Glassdoor y la reputación como empleador.

### 📣 La comunicación al equipo restante
El mensaje que da contexto sin violar la privacidad del empleado que sale.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Offboarding, desvinculación, outplacement, despido digno, HR',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis del punto de equilibrio: calcula cuándo dejas de perder dinero y qué palancas lo aceleran',
                'description'       => 'Calcula el punto de equilibrio (breakeven) de tu negocio o proyecto y usa el análisis para tomar decisiones de pricing, volumen y estructura de costes. Con la fórmula, el modelo en Excel, los escenarios de sensibilidad y cómo presentar el análisis a inversores.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO Advisor con experiencia ayudando a fundadores y directivos a calcular y comunicar el breakeven de sus negocios para tomar mejores decisiones de pricing, inversión y estructura de costes.

Contexto:
- Tipo de negocio: [SaaS / ecommerce / servicios / manufactura / restauración / otro]
- Costes fijos mensuales: [€/mes — si no los sabes, describe los principales]
- Precio de venta unitario: [€ por suscripción/producto/proyecto]
- Coste variable unitario: [€ por unidad vendida — o margen bruto %]
- Volumen de ventas actual: [unidades/mes o €/mes]
- Objetivo: [calcular el breakeven / presentar a inversores / evaluar un cambio de precio / comparar dos modelos de negocio]

## Análisis del Punto de Equilibrio — [Negocio]

### 📐 La fórmula del breakeven (simple y extensible)

**Breakeven en unidades:**
```
Punto de Equilibrio = Costes Fijos / (Precio - Coste Variable Unitario)
                    = Costes Fijos / Margen de Contribución Unitario
```

**Ejemplo para un SaaS:**
```
Costes fijos mensuales: €15.000 (equipo + infraestructura + oficina)
Precio del plan: €99/mes
Coste variable por suscriptor: €5/mes (soporte + infraestructura proporcional)
Margen de contribución: €99 - €5 = €94

Breakeven = €15.000 / €94 = 160 suscriptores

Con menos de 160 suscriptores → pérdidas
Con 160 suscriptores → sin pérdidas, sin beneficios
Con 200 suscriptores → €94 × (200-160) = €3.760/mes de beneficio
```

**Ejemplo para un negocio de servicios:**
```
Costes fijos: €8.000/mes (salarios, herramientas, local)
Proyecto medio: €3.500
Coste variable por proyecto: €500 (materiales, subcontratación)
Margen de contribución: €3.000/proyecto

Breakeven = €8.000 / €3.000 = 2,67 proyectos/mes → mínimo 3 proyectos/mes
```

### 🔧 El modelo de breakeven en 3 escenarios

**Escenario Base (expectativa realista):**
Los números actuales o los del plan de negocio.

**Escenario Pesimista (qué pasa si las ventas caen un 20%):**
¿Cuánto tardarías más en llegar al breakeven? ¿Cuánto capital necesitas para aguantar?

**Escenario Optimista (qué pasa si las ventas suben un 20%):**
¿Cuánto beneficio genera una aceleración moderada?

```
                  PESIMISTA  BASE   OPTIMISTA
Unidades vendidas     128     160     192
Ingresos           €12.672  €15.840  €19.008
Costes Variables    -€640   -€800    -€960
Margen Bruto       €12.032  €15.040  €18.048
Costes Fijos       -€15.000 -€15.000 -€15.000
RESULTADO          -€2.968   +€40   +€3.048
```

### 🎯 Las palancas para acelerar el breakeven

**Palanca 1 — Subir el precio:**
Si subes el precio un 10% sin perder volumen, el margen de contribución aumenta directamente.
```
Precio: €99 → €109 (+10%)
Nuevo margen: €109 - €5 = €104
Nuevo breakeven: €15.000 / €104 = 144 suscriptores (-16 que el anterior)
```

**Palanca 2 — Reducir costes variables:**
Optimizar los costes de producción, soporte o infraestructura proporcional a cada venta.

**Palanca 3 — Reducir costes fijos:**
La más difícil con un equipo, pero la más impactante. Cada €1.000 de reducción en costes fijos = [breakeven / precio] unidades menos necesarias.

**Palanca 4 — Aumentar el volumen:**
La más intuitiva, pero no siempre la más eficiente.

**La pregunta estratégica:**
¿Cuál de estas 4 palancas puedo mover más rápido con el menor coste?

### 📊 Cómo presentar el breakeven a inversores
El gráfico de breakeven (ingresos vs. costes totales) y la narrativa que lo convierte en un argumento de inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Punto de equilibrio, breakeven, análisis financiero, costes fijos, pricing',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Term sheet de inversión ángel: qué negocias, qué puedes ceder y qué nunca debes firmar',
                'description'       => 'Entiende y negocia el term sheet de una ronda de inversión ángel o pre-seed. Con las cláusulas más frecuentes explicadas en lenguaje no legal, lo que es estándar del mercado, las cláusulas que te protegen como fundador y las que debes rechazar o limitar siempre.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en M&A y financiación startup con experiencia asesorando a fundadores en más de 50 rondas de inversión ángel y Series A en España y el ecosistema europeo.

Contexto del fundador:
- Etapa de la empresa: [pre-seed / seed]
- Importe de la ronda: [€]
- Tipo de inversor: [business angel individual / sindicato de ángeles / fondo micro-VC]
- Estado del term sheet: [recibido y analizando / en negociación / necesito entender los términos antes de recibir]
- Mayor duda: [no entiendo la valoración / hay cláusulas que me preocupan / quiero saber qué es normal / otro]

## Term Sheet de Inversión Ángel — [Empresa]

### 🧮 Los 3 conceptos de valoración que debes entender

**Pre-money valuation:**
El valor de la empresa antes de que entre el dinero.

**Post-money valuation:**
Pre-money + Inversión = Post-money
Ejemplo: valoración pre-money de €2M + inversión de €500k = post-money de €2,5M

**Dilución del fundador:**
Si la valoración post-money es €2,5M y el inversor pone €500k:
El inversor tiene €500k / €2,5M = 20% de la empresa.
El fundador pasa de 100% a 80%.

**La nota convertible (SAFE o préstamo convertible):**
En early stage, muchas rondas se articulan sin fijar la valoración:
El inversor presta €X que se convierte en equity en la siguiente ronda con descuento.
**Cap:** valoración máxima a la que convierte el inversor.
**Descuento:** % de descuento sobre la valoración de la siguiente ronda (típico: 20%).

### 📋 Las cláusulas estándar del term sheet

**Dilution protection (anti-dilución):**
Protege al inversor si en una ronda futura se emiten participaciones a valoración más baja.
- **Weighted average (estándar):** ajusta la participación del inversor proporcionalmente → razonable para el fundador
- **Full ratchet (muy duro):** compensa al inversor a precio 1:1 de la ronda baja → puede ser muy dilutivo para el fundador, intenta evitarlo

**Liquidation preference:**
Define cómo se distribuye el dinero en caso de venta.
- **1x non-participating (estándar):** el inversor recupera 1x su inversión o convierte en equity, lo que sea mayor
- **Participating (problemática para el fundador):** el inversor recupera 1x Y además participa en el reparto del resto

**Pro-rata rights:**
El inversor tiene derecho a mantener su % en rondas futuras invirtiendo en cada nueva ronda.
Estándar para inversores que quieren mantener su posición → razonable de aceptar.

**Board seat vs. observer seat:**
- Board seat: el inversor vota en las decisiones del consejo
- Observer seat: asiste pero no vota

Para inversiones ángel menores, un observer seat suele ser más apropiado que un board seat. Más de 2 externos en el board en early stage complica la toma de decisiones.

### 🚨 Las cláusulas que debes rechazar o limitar

**Drag-along sin cap de precio:**
Obliga a los fundadores a vender si el inversor quiere vender, sin límite de precio. Añade siempre un precio mínimo de venta aceptable (drag-along threshold).

**Full ratchet anti-dilución:**
Demasiado favorable para el inversor en una down round. Intenta negociar weighted average.

**Veto sobre decisiones operativas ordinarias:**
El inversor no debe tener veto sobre la contratación, los salarios del equipo o las decisiones de producto. El veto tiene sentido para ventas de empresa, emisión de nuevas participaciones o endeudamiento significativo.

**Cláusula de no-compete excesiva para el fundador:**
Duración máxima razonable: 1-2 años post-salida. No 5 años para toda la industria.

### 📄 El proceso de negociación del term sheet
Cómo responder una term sheet con contrapropuesta profesional y los puntos que siempre puedes negociar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Term sheet, inversión ángel, startup, rondas de inversión, derecho mercantil',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Reducción del AHT: cómo resolver tickets más rápido sin sacrificar la calidad del soporte',
                'description'       => 'Reduce el tiempo medio de resolución de tickets (AHT) de tu equipo de soporte sin que los clientes sientan que les despachas. Con el análisis de los cuellos de botella, las macros y plantillas que aceleran sin robotizar, el proceso de escalado ágil y la formación que marca la diferencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Operations Manager con experiencia reduciendo el AHT (Average Handle Time) en equipos de soporte de 15-30 minutos a 8-12 minutos sin reducir la satisfacción del cliente.

Contexto:
- AHT actual: [N minutos]
- Volumen de tickets: [N/mes]
- Canal principal: [chat / email / teléfono / ticket portal]
- Herramienta: [Zendesk / Intercom / Freshdesk / Help Scout / otra]
- Mayor causa de tickets lentos: [los agentes buscan información / muchos pasos de escalado / los clientes no dan suficiente info al inicio / otro]

## Reducción del AHT — [Equipo de Soporte]

### 🔍 Diagnóstico: dónde se va el tiempo en un ticket

**El análisis de tipo:**
Revisa los 50 tickets más lentos del último mes. Clasifica cada uno:
- ¿Dónde tardó más? ¿Buscando información? ¿Esperando al cliente? ¿Escalando a L2? ¿Redactando la respuesta?
- ¿El agente tenía acceso a la información que necesitaba?
- ¿Hubo múltiples idas y vueltas por falta de información al inicio?

**Las 4 causas más frecuentes de AHT alto:**

1. **El agente busca la información:** no tiene acceso rápido a los datos del cliente, historial o documentación
2. **Múltiples intercambios por información incompleta:** el cliente no da todos los datos al inicio
3. **Redacción lenta:** el agente escribe las respuestas desde cero cada vez
4. **Escalado lento:** el ticket pasa por dos personas antes de llegar a quien puede resolverlo

### 📝 Las macros y plantillas que aceleran sin robotizar

**El error de las macros mal diseñadas:**
"Hola [nombre], gracias por contactar con [empresa]. Lamento que hayas tenido este problema..."
El cliente siente que está leyendo un email automático.

**Las macros que funcionan:**
Comienzan con el contexto específico del cliente — y el agente solo rellena el contexto.

**Estructura de macro efectiva:**
```
[Macro: Problema de acceso a la cuenta]

Hola [nombre],

[CONTEXTO DEL AGENTE: 1 frase sobre el problema específico]

Para recuperar el acceso a tu cuenta de [producto]:
1. Ve a [link directo]
2. Introduce tu email ([email del cliente])
3. Recibirás un enlace en [X minutos]

Si el email no llega, comprueba la carpeta de spam. Si sigues sin recibirlo,
escríbenos y lo verificamos por aquí.

[Nombre del agente]
```

El agente solo rellena el contexto (1 frase) — el resto está preparado.

**Las categorías de macros que más reducen el AHT:**
- Los 20 errores de error más frecuentes (con el proceso de resolución paso a paso)
- Las preguntas de facturación más habituales
- Los pasos de onboarding que generan más dudas
- Las instrucciones de troubleshooting técnico básico

### 📊 El proceso de primera respuesta que reduce las idas y vueltas

**El error:** responder al ticket pidiendo más información.
**El problema:** cada ida-y-vuelta añade 24-48h al AHT.

**La primera respuesta que resuelve en una sola:**
```
Hola [nombre],

He visto tu consulta sobre [problema]. Voy a darte las instrucciones
para los 3 casos más frecuentes de este error — así cubrimos el tuyo
aunque no haya aclarado los detalles:

Si ves el error "[mensaje 1]": [solución 1]
Si el problema ocurre en [situación 2]: [solución 2]
Si ninguna de las anteriores aplica: [pasos de diagnóstico]

¿Cuál de estas situaciones describe mejor lo que te pasa?

[Nombre]
```

### 📈 Cómo medir la mejora sin sacrificar la satisfacción
El tradeoff entre AHT y CSAT, y cómo saber si la reducción del AHT está afectando la calidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'AHT, tiempo de resolución, eficiencia soporte, macros, plantillas',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión administrativa del autónomo en España: facturación, IVA, IRPF y obligaciones trimestrales',
                'description'       => 'Domina las obligaciones administrativas y fiscales del autónomo en España sin necesitar un asesor para entender qué tienes que hacer. Con el calendario de obligaciones, cómo emitir facturas correctas, los modelos trimestrales 303 y 130, y qué puedes deducir legalmente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como asesor fiscal especializado en autónomos en España con experiencia explicando las obligaciones tributarias de profesionales independientes de forma clara y sin jerga innecesaria.

Perfil del autónomo:
- Régimen de estimación: [directa simplificada / módulos / directa normal]
- IVA: [repercutes IVA / estás exento (educación, salud, etc.)]
- Tipo de servicio: [profesional B2B / B2C / mixto]
- Situación: [acabo de darme de alta / llevo tiempo pero no tengo claro el sistema / quiero revisarlo todo]

## Gestión Administrativa del Autónomo — España

### 📅 El calendario fiscal del autónomo (lo que no puedes perderte)

**Cada mes:**
- Cuota de autónomos a la Seguridad Social: entre el día 1 y el último día del mes
- Emitir facturas de los servicios prestados en el mes (no acumules para final de mes)

**Cada trimestre (enero, abril, julio y octubre — primeros 20 días):**
- **Modelo 303** (IVA): declaras el IVA cobrado a clientes (repercutido) menos el IVA pagado a proveedores (soportado). La diferencia es lo que ingresas o lo que te devuelven.
- **Modelo 130** (IRPF — estimación directa): pago fraccionado de IRPF. Calculas el 20% de los beneficios netos del trimestre (si es positivo).

**Anual:**
- **Declaración de la renta (IRPF)**: entre abril y junio del año siguiente

### 🧾 Cómo emitir una factura correcta en España

**Elementos obligatorios en todas las facturas:**
```
Número de factura:     F-2025-001 (correlativo, sin saltos)
Fecha de emisión:      15/03/2025
Fecha de operación:    si es distinta a la fecha de emisión

EMISOR (tú):
Nombre/Razón social:   [Tu nombre completo]
NIF/NIE:               [Tu número]
Dirección fiscal:      [Tu domicilio fiscal]

RECEPTOR (tu cliente):
Nombre/Razón social:   [Nombre del cliente]
CIF/NIF:               [NIF del cliente]
Dirección fiscal:      [Dirección del cliente]

CONCEPTO:              Descripción del servicio prestado (sé específico)
BASE IMPONIBLE:        €1.000,00
IVA (21%):             €210,00
RETENCIÓN IRPF (15%):  -€150,00   [solo para profesionales, a clientes empresas]
TOTAL A PAGAR:         €1.060,00
```

**El IVA en tus facturas:**
La mayoría de servicios profesionales llevan 21% de IVA.
Excepciones al 0% (exentos): educación reglada, servicios médicos y sanitarios, servicios de asistencia social.

**La retención de IRPF:**
- Solo se aplica cuando facturas a empresas o autónomos (no a particulares)
- El porcentaje general es el 15% (7% en el primer año de alta y los dos siguientes)
- La retención la paga el cliente directamente a Hacienda → tú cobras menos, pero esa retención cuenta en tu declaración anual

### 📊 El modelo 303 — IVA trimestral (explicado sin jerga)

**La lógica:**
```
IVA de tus facturas emitidas (lo que cobraste a tus clientes):    €2.100
- IVA de tus facturas recibidas (lo que pagaste a proveedores):  -€420
= Diferencia a ingresar en Hacienda:                               €1.680
```

Si el resultado es positivo → lo pagas a Hacienda.
Si es negativo → tienes derecho a compensarlo en el trimestre siguiente (no te devuelven en cash hasta el modelo 390 anual).

**Los gastos de los que deduces el IVA:**
Herramientas de trabajo, subscripciones de software, material de oficina, formación profesional, asesor/gestor, teléfono (50% si es mixto personal/profesional).

### 💼 Qué puedes deducir en IRPF (los gastos más frecuentes)
Los gastos deducibles para autónomos en estimación directa simplificada y los que generan más controversia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Autónomo España, IVA, IRPF, facturación, obligaciones fiscales, modelo 303',
                'vote_score'        => 55,
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
