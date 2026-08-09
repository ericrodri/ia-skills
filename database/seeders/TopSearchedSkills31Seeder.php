<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills31Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Email marketing transaccional: los emails automáticos que generan más revenue que las campañas manuales',
                'description'       => 'Diseña los emails transaccionales automáticos (confirmación de compra, abandono de carrito, reactivación, cumpleaños) que generan revenue de forma continua sin trabajo manual. Con los disparadores correctos, los textos que convierten y las métricas de cada tipo de email automatizado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Marketing Automation Specialist con experiencia configurando flujos de emails automáticos para ecommerce y SaaS que generan un 30-45% del revenue total de email sin intervención manual continua.

Contexto:
- Tipo de negocio: [ecommerce / SaaS / servicios de suscripción / marketplace]
- Herramienta de email marketing: [Klaviyo / Mailchimp / Brevo / HubSpot / ActiveCampaign / otro]
- Volumen de clientes: [N]
- Estado actual: [sin automatizaciones / solo emails básicos de confirmación / queremos mejorar el sistema]

## Email Marketing Transaccional y Automatizado — [Empresa]

### 🏆 Los 5 emails automatizados con mayor ROI (en orden de prioridad)

**#1 — El email de abandono de carrito (el mayor revenue recovery del ecommerce):**
```
TRIGGER: el usuario añade productos al carrito y no completa la compra
TIMING: Email 1 a las 2 horas / Email 2 a las 24 horas / Email 3 a las 72 horas

EMAIL 1 (2h después): Recordatorio amable
Asunto: "[Nombre], tienes algo pendiente en tu carrito"
Preheader: "Tus productos te están esperando"
Body: Imagen del producto + nombre + precio + botón "Volver a mi carrito"
Sin descuento — el descuento quita margen a clientes que habrían comprado igual.

EMAIL 2 (24h): Añade urgencia y/o valor
Asunto: "¿Seguimos? Tu carrito caduca pronto"
O si tienes stock limitado: "Quedan solo 3 unidades de [producto]"

EMAIL 3 (72h): La oferta de rescate
Solo ahora ofreces un descuento (5-10%): "Te guardamos esto + 10% de descuento"
Este email salva a los clientes sensibles al precio que no habrían vuelto sin incentivo.

BENCHMARKS DE CONVERSIÓN:
Email 1: 15-25% de tasa de apertura, 3-5% de conversión
Email 2: 10-18% de apertura, 2-4% de conversión
Email 3: 8-12% de apertura, 1-3% de conversión (pero con el descuento)
```

**#2 — La secuencia de bienvenida del nuevo cliente (el mejor momento para fidelizar):**
```
TRIGGER: primer pedido completado / primera suscripción
TIMING: Email inmediato + Email 3 días después + Email 7 días después

Email 0 (inmediato): Confirmación de pedido — funcional, clara, sin adornos
Número de pedido, resumen, fecha de entrega estimada, cómo contactar.

Email 1 (3 días): El email de "gracias de verdad" (no de confirmación)
Asunto: "Gracias por confiar en nosotros, [Nombre]"
Body: Por qué el cliente tomó una buena decisión. Cómo sacar el máximo partido del producto.
CTA: "Aquí está todo lo que necesitas para empezar"

Email 2 (7 días): La petición de feedback o reseña
Asunto: "¿Cómo ha ido tu experiencia con [producto]?"
Pide la reseña o el NPS cuando el cliente ya ha tenido tiempo de usar el producto.
```

**#3 — El email de reactivación de clientes inactivos:**
```
TRIGGER: cliente que no ha comprado en X meses (según tu ciclo de compra típico)
Ecommerce de moda: inactivo = 90 días sin compra
SaaS: inactivo = 30 días sin login

SECUENCIA:
Email 1: "¿Todo bien, [Nombre]?" — casual, personal, sin descuento
Email 2 (7 días después): Oferta de reactivación (10-20% de descuento)
Email 3 (7 días después): "Última oportunidad + eliminaremos tu email de nuestras ofertas"
```

**#4 — El email de cumpleaños con oferta:**
```
TRIGGER: cumpleaños del cliente (recoge la fecha en el registro o la primera compra)
TIMING: El día del cumpleaños

Un descuento del 10-15% en el cumpleaños convierte 3-5x mejor que el mismo descuento en un email normal.
La razón: el cliente lo percibe como un regalo, no como publicidad.

Asunto: "Feliz cumpleaños, [Nombre] 🎂 — esto es para ti"
```

**#5 — El email de cross-sell y upsell post-compra:**
```
TRIGGER: 7-14 días después de recibir un pedido (cuando el cliente ya usa el producto)
"Los clientes que compraron [X] también compraron [Y]"
O: "¿Ya conoces [producto complementario]?"
```

### 📊 Las métricas de los emails automáticos que debes monitorear mensualmente
Los 4 KPIs de los flujos de automatización (tasa de apertura, CTR, tasa de conversión, revenue generado) y los benchmarks por tipo de email para saber si tus automatizaciones están funcionando bien.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Email automation, email transaccional, abandono carrito, klaviyo, flujos email automatizados',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Bases de datos NoSQL: elige entre MongoDB, Redis y Cassandra según el problema que estás resolviendo',
                'description'       => 'Elige la base de datos NoSQL correcta para cada caso de uso y aprende a usarla bien. Con el árbol de decisión entre MongoDB, Redis, Cassandra y DynamoDB, los patrones de modelado de datos en cada base, cuándo NoSQL es la respuesta equivocada y cómo migrar desde SQL.',
                'prompt_content'    => <<<'PROMPT'
Eres un Database Architect con experiencia diseñando la capa de persistencia de aplicaciones con tráfico de 1M-100M+ requests/día, habiendo trabajado con bases relacionales y NoSQL en contextos de producción donde la elección incorrecta de base de datos ha costado semanas de refactoring.

Contexto:
- Stack tecnológico actual: [Node.js / Python / Go / Java / otro]
- Tipo de datos que necesitas almacenar: [describe qué datos y sus relaciones]
- Patrones de acceso: [¿más lecturas o escrituras? / ¿consultas complejas o simples? / ¿acceso por clave o por filtros?]
- Escala objetivo: [N usuarios / N requests por segundo / N GB de datos]
- Base de datos actual: [PostgreSQL / MySQL / ninguna / NoSQL existente]

## Selección de Base de Datos NoSQL — [Proyecto]

### 🌳 El árbol de decisión: ¿cuándo usar NoSQL?

**Primero: ¿necesitas realmente NoSQL?**
```
La pregunta que debes responder antes de todo:
¿Tienes relaciones complejas entre entidades que necesitas consultar de forma ad-hoc?

SÍ → PostgreSQL probablemente sea mejor.
  Las JOINs, las transacciones ACID y el schema definido son superiores para datos relacionales.
  "Con PostgreSQL puedes hacer casi todo lo que hace MongoDB, y con más garantías."

NO (o tus relaciones son simples y predecibles) → NoSQL puede tener sentido.
  Analiza: el volumen, el patrón de acceso y la estructura de los datos.
```

**El árbol de decisión NoSQL:**
```
¿Necesitas caché en memoria de muy baja latencia (<1ms)?
  → Redis

¿Tienes documentos JSON con estructura flexible y relaciones simples?
  → MongoDB

¿Necesitas escrituras masivas distribuidas globalmente con alta disponibilidad?
  → Cassandra o DynamoDB

¿Tienes un grafo de relaciones complejas (red social, recomendaciones)?
  → Neo4j

¿Necesitas búsqueda full-text sobre grandes volúmenes de texto?
  → Elasticsearch (complemento, no sustituto de la DB principal)
```

### 🍃 MongoDB: el documento que estructura tus datos sin forzar un schema

**Cuándo MongoDB es la respuesta:**
```
✅ Los datos son naturalmente documentos (catálogos, perfiles, contenido)
✅ El schema evoluciona frecuentemente (sin migraciones costosas)
✅ Las consultas son principalmente por documentos individuales o por campos indexados
✅ Necesitas almacenar arrays y objetos embebidos con naturalidad

❌ MongoDB no es bueno cuando:
- Necesitas JOINs frecuentes entre colecciones (mejor PostgreSQL)
- Necesitas transacciones complejas que cruzan múltiples documentos
- Tus datos son altamente relacionales
```

**El patrón de modelado más importante: embed vs reference:**
```
EMBED (guarda dentro del documento):
Cuando los datos siempre se acceden juntos.
Cuando el sub-documento no crece indefinidamente.

// Embed: el perfil del usuario con sus últimas 5 direcciones
{
  "_id": "user123",
  "email": "ana@empresa.com",
  "addresses": [
    {"street": "Calle Mayor 1", "city": "Madrid", "isDefault": true},
    {"street": "Gran Vía 20", "city": "Barcelona"}
  ]
}

REFERENCE (guarda el ID y usa un lookup):
Cuando los datos referenciados se acceden independientemente.
Cuando el sub-documento puede crecer sin límite (pedidos de un cliente).

// Reference: el pedido referencia al usuario por ID
{
  "_id": "order456",
  "userId": "user123",  // referencia
  "total": 89.99
}
```

### ⚡ Redis: la caché que transforma el rendimiento de tu aplicación

**Los casos de uso de Redis:**
```
1. CACHÉ DE CONSULTAS COSTOSAS:
   const key = `user:${userId}:profile`
   let profile = await redis.get(key)
   if (!profile) {
     profile = await db.query('SELECT * FROM users WHERE id = $1', [userId])
     await redis.set(key, JSON.stringify(profile), 'EX', 3600) // TTL: 1 hora
   }
   return JSON.parse(profile)

2. SESIONES DE USUARIO:
   Más rápido que almacenar sesiones en PostgreSQL.
   TTL automático → las sesiones expiran sin necesitar un cron de limpieza.

3. RATE LIMITING:
   const requests = await redis.incr(`ratelimit:${ip}`)
   await redis.expire(`ratelimit:${ip}`, 60) // reinicia cada minuto
   if (requests > 100) throw new Error('Rate limit exceeded')

4. COLAS DE TAREAS (con Bull/BullMQ):
   Para procesamiento asíncrono de jobs (envío de emails, generación de PDFs).

5. LEADERBOARDS Y RANKINGS:
   Las sorted sets de Redis son perfectas para rankings en tiempo real.
```

### 🔥 Cassandra y DynamoDB: escrituras masivas a escala global
Los patrones de modelado de Cassandra/DynamoDB (diseñar para las queries, no para los datos), la diferencia con MongoDB y cuándo la complejidad operacional de estas bases merece la pena frente a PostgreSQL bien configurado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'NoSQL, MongoDB, Redis, Cassandra, DynamoDB, selección base de datos, modelado datos',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de apps móviles nativas: las diferencias de UX entre iOS y Android que debes conocer antes de diseñar',
                'description'       => 'Diseña interfaces móviles nativas para iOS y Android que siguen los patrones de cada plataforma en lugar de luchar contra ellos. Con las diferencias de navegación, los componentes nativos de cada sistema, las guías de diseño (HIG y Material You) y cuándo tiene sentido tener un diseño unificado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Mobile UX Designer con experiencia diseñando aplicaciones nativas para iOS y Android en productos con millones de usuarios, donde ignorar los patrones de cada plataforma ha generado reseñas negativas y tasas de retención menores.

Contexto:
- Tipo de app: [utilidad / ecommerce / SaaS / contenido / social / otro]
- Plataformas objetivo: [solo iOS / solo Android / ambas con diseño unificado / ambas con diseño nativo por plataforma]
- Estado actual: [diseñando desde cero / tenemos una app web que queremos nativizar / queremos mejorar la experiencia actual]

## Diseño de Apps Móviles Nativas — [App]

### 🍎📱 Las diferencias fundamentales entre iOS y Android

**Diferencia 1 — Navegación:**
```
iOS (Apple HIG):
→ Tab Bar en la parte inferior (máximo 5 pestañas)
→ Navigation Bar en la parte superior con botón "Atrás" a la izquierda
→ Gesture de deslizar desde el borde izquierdo para volver atrás
→ Los modales se deslizan desde abajo (bottom sheets)

Android (Material You):
→ Navigation Bar en la parte inferior (igual que iOS en las versiones recientes)
→ O Navigation Drawer (hamburger menu) para apps con muchas secciones
→ El botón atrás del sistema (gesto de deslizar desde el borde o botón virtual)
→ Los FABs (Floating Action Buttons) para la acción principal

El error más frecuente: usar la navegación de iOS en Android o viceversa.
Los usuarios de Android esperan el gesto del sistema para volver — no tu botón atrás personalizado.
```

**Diferencia 2 — Los componentes de UI:**
```
iOS:
→ UISwitch (toggle) para configuraciones
→ UIAlertController para alertas (2 botones: Cancelar + Acción)
→ UIActionSheet para menús de acciones
→ UIPickerWheel para selectores de fecha y opciones
→ Pull-to-refresh integrado en listas

Android:
→ Switch / ToggleButton
→ AlertDialog (más flexible, puede tener múltiples acciones)
→ BottomSheet para menús de acciones
→ DatePicker / TimePicker nativos
→ SwipeRefreshLayout para pull-to-refresh
```

**Diferencia 3 — La tipografía del sistema:**
```
iOS: San Francisco (SF Pro) — usada automáticamente si no especificas fuente
Android: Roboto (predeterminada) o Google Sans en dispositivos Pixel

La recomendación: usa las fuentes del sistema en lugar de importar fuentes personalizadas.
Ventajas: carga más rápida, mejor legibilidad según las preferencias del usuario, soporte automático de Dynamic Type (iOS) y font scaling (Android).
```

**Diferencia 4 — Tamaños y proporciones:**
```
iOS (puntos, no píxeles):
→ iPhone 15 Pro: 393×852 pt (1179×2556 px @3x)
→ iPhone SE: 375×667 pt

Android (dp, densidad independiente):
→ Diseña en 360×800 dp como base (el tamaño más común)
→ Prueba en al menos 3 tamaños: pequeño (320dp), medio (360dp) y grande (412dp)

Safe areas:
iOS: el notch y el Dynamic Island requieren margen superior
Android: el status bar y los gestos requieren margen inferior
```

### 📐 Las guías de diseño que debes conocer (pero no seguir ciegamente)

**Apple Human Interface Guidelines (HIG):**
Lo que dice: diseña para la plataforma, no contra ella.
Lo más importante: consistencia con los patrones que el usuario ya conoce de otras apps de iOS.

**Material Design 3 / Material You:**
Lo que dice: adapta la UI al tema del usuario (colores dinámicos del wallpaper en Android 12+).
Lo más importante: los componentes de Material Design 3 son accesibles y bien probados — úsalos antes de inventar los tuyos.

### 🔧 Cuándo el diseño unificado tiene sentido (y cuándo no)
La estrategia de diseño único vs. nativo por plataforma: costes de mantenimiento, experiencia del usuario y qué apps hacen bien el diseño unificado (y qué sacrifican para lograrlo).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseño apps móviles, iOS UX, Android UX, HIG, Material Design, mobile design patterns',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Solution Selling: el método de venta consultiva que cierra deals de mayor tamaño',
                'description'       => 'Implementa el método de venta consultiva Solution Selling para aumentar el tamaño medio de tus deals y cerrar con menos descuentos. Con las fases del proceso (pain identification, diagnosis, solution design), las preguntas clave de cada fase y cómo adaptar el método a ciclos de venta de 30-180 días.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Consultant con experiencia implementando metodologías de venta consultiva en equipos B2B de SaaS y servicios profesionales donde el ticket medio ha subido un 40-60% y el ciclo de venta se ha acortado un 20% después de adoptar el método.

Contexto:
- Tipo de producto/servicio: [SaaS B2B / consultoría / servicios profesionales / otro]
- Ticket medio actual: [€]
- Ciclo de venta típico: [N semanas/meses]
- El mayor reto en ventas: [deals que se alargan sin cerrar / propuestas que no se aprueban / competir solo por precio / otro]

## Solution Selling — [Empresa]

### 🧠 La diferencia entre vender un producto y vender una solución

**La venta de producto (lo que hacen la mayoría):**
```
El vendedor explica qué hace el producto.
"Nuestra herramienta tiene X funcionalidades, integra con Y, y cuesta Z."
El comprador lo compara con la competencia en precio y features.
El resultado: el precio se convierte en el factor principal de decisión.
```

**La venta consultiva / Solution Selling:**
```
El vendedor entiende el dolor antes de presentar la solución.
"¿Cuál es el impacto de este problema en tu negocio?"
El comprador percibe que el vendedor entiende su situación mejor que nadie.
El resultado: la solución parece diseñada específicamente para ellos.
El precio importa menos porque el valor percibido es mayor.
```

### 📋 Las 4 fases del proceso de Solution Selling

**Fase 1 — Situación (entiende el contexto antes de hablar):**
```
Objetivo: entender la empresa, el rol del comprador y el contexto.
NUNCA hagas preguntas de situación que puedas responder con investigación previa.
"¿A qué se dedica su empresa?" es una pérdida de tiempo del comprador.

Preguntas útiles de situación:
"¿Cómo estáis gestionando actualmente [el área que tu producto resuelve]?"
"¿Cuántas personas están involucradas en este proceso?"
"¿Qué herramientas estáis usando ahora mismo para esto?"
```

**Fase 2 — Problema (identifica el dolor real):**
```
Objetivo: que el comprador articule el problema en sus propias palabras.
El pain tiene más fuerza cuando viene del comprador, no del vendedor.

Preguntas de problema:
"¿Qué aspectos de ese proceso os generan más fricciones o retrasos?"
"¿Con qué frecuencia ocurre ese problema?"
"¿Hay situaciones donde ese problema os ha costado un cliente o un deal?"
```

**Fase 3 — Implicación (amplifica el impacto del problema):**
```
Objetivo: que el comprador entienda el coste real del problema.
Sin esta fase, el problema parece "tolerable" y no hay urgencia para comprar.

Preguntas de implicación:
"¿Cuánto tiempo dedica el equipo a [el problema] cada semana?"
"Si multiplicamos eso por 52 semanas y el coste hora del equipo... ¿cuánto representa?"
"¿Qué impacto tiene esto en los plazos de entrega de proyectos?"
"¿Esto ha afectado a la satisfacción de algún cliente importante?"
```

**Fase 4 — Necesidad de solución (co-diseña la solución con el comprador):**
```
Objetivo: que el comprador articule cómo debería ser la solución ideal.
Cuando el comprador describe la solución, es más fácil alinear lo que ofreces con lo que necesita.

Preguntas de necesidad:
"¿Cómo sería el proceso ideal si ese problema no existiera?"
"¿Qué resultado o métrica os indicaría que habéis resuelto el problema?"
"¿Qué features o capacidades serían críticas para vosotros en una solución?"
```

### 📄 La propuesta que cierra en Solution Selling
La estructura de la propuesta comercial que refleja el diagnóstico del problema, el impacto calculado y la solución diseñada para su situación específica — no el catálogo genérico de features y precios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Solution selling, venta consultiva, SPIN selling avanzado, ventas B2B complejas, pain identification',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Benchmarking competitivo de producto: analiza a la competencia para informar la hoja de ruta',
                'description'       => 'Realiza el análisis de benchmarking competitivo que informa las decisiones de la hoja de ruta del producto. Con el framework de análisis de features y posicionamiento, la metodología para comparar la experiencia de usuario con los competidores y cómo usar los gaps para priorizar la hoja de ruta.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia liderando análisis de benchmarking competitivo en startups SaaS B2B donde el análisis de la competencia ha revelado gaps de posicionamiento que se convirtieron en ventajas competitivas al ser cubiertas en la hoja de ruta.

Contexto:
- Tipo de producto: [SaaS B2B / marketplace / app de consumo]
- Competidores directos: [lista los 3-5 principales]
- El objetivo del benchmarking: [informar el roadmap / preparar la estrategia de precios / posicionamiento de marketing / todo]
- Frecuencia: [análisis puntual / trimestral / continuo]

## Benchmarking Competitivo de Producto — [Empresa]

### 🎯 La diferencia entre benchmarking útil e inútil

**Benchmarking inútil:**
```
Crear una tabla de features con ✅ y ❌ para tu producto vs. la competencia.
Sin contexto de importancia de cada feature para el usuario.
Sin análisis de por qué existe ese gap.
Sin conexión con las decisiones de la hoja de ruta.
```

**Benchmarking útil:**
```
Analiza las features en función de su importancia para el usuario (no todas las features pesan igual).
Identifica los gaps que son competitivamente relevantes (los que hacen perder deals).
Entiende la estrategia detrás de las decisiones de la competencia.
Conecta el análisis directamente con las decisiones de priorización del roadmap.
```

### 📋 El framework de benchmarking en 4 dimensiones

**Dimensión 1 — Features y funcionalidades:**
```
CATEGORÍAS DE ANÁLISIS (no hagas una lista plana — agrupa por área):
□ Core features (las esenciales para el job to be done principal)
□ Features de expansión (las que amplían el valor para usuarios avanzados)
□ Features de integración (conectores con otras herramientas)
□ Features de administración (gestión de equipo, permisos, reporting)
□ Features de seguridad y compliance

PARA CADA FEATURE, ANOTA:
- ¿Tiene mi producto? (Sí / No / Parcialmente)
- ¿Lo tienen los competidores clave? (Sí / No / Mejor que nosotros / Peor que nosotros)
- ¿Cuánto importa esta feature a nuestros usuarios? (Alta / Media / Baja — basado en datos)
- ¿Ha sido mencionada en deals perdidos o conversaciones de sales? (Sí / No)
```

**Dimensión 2 — Experiencia de usuario:**
```
METODOLOGÍA: recorre el flow completo como si fueras un nuevo usuario.
Crea una cuenta → completa el onboarding → realiza el job to be done principal → busca soporte.

Documenta:
- Time to value: ¿en cuánto tiempo el nuevo usuario llega al valor?
- Puntos de fricción: ¿dónde necesitas ayuda?
- UX patterns: ¿qué soluciones de diseño usan que tú no?
- Performance: ¿es rápido? ¿da errores?

Herramienta: capturas de pantalla + notas estructuradas en Notion/Figma.
```

**Dimensión 3 — Posicionamiento y messaging:**
```
Analiza la web principal (homepage, pricing page):
→ ¿A quién se dirigen? (ICP declarado)
→ ¿Qué promesa hacen en el headline?
→ ¿Cómo justifican el precio?
→ ¿Qué casos de éxito muestran?
→ ¿Cómo se diferencian de nosotros (si lo mencionan)?

Fuente: homepage + G2/Capterra reviews + LinkedIn posts del fundador/CEO.
```

**Dimensión 4 — Estrategia de go-to-market:**
```
→ ¿Cómo adquieren clientes? (SEO / paid / PLG / sales-led / community)
→ ¿Qué canales de contenido usan? (blog / YouTube / newsletter / podcast)
→ ¿Han levantado rondas? ¿Para qué declaran que las usarán?
→ ¿Están contratando? ¿En qué áreas? (signal de estrategia futura)
```

### 🗺️ De la tabla de benchmarking al roadmap: cómo priorizar los gaps
El framework de decisión para convertir los gaps competitivos en prioridades del roadmap: qué gaps perseguir (high-impact, low-effort), cuáles ignorar (features que nadie usa realmente) y cuáles convertir en ventaja competitiva diferenciando en lugar de igualar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Benchmarking competitivo, análisis competencia producto, feature comparison, roadmap priorización',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programas de bienestar y salud mental en el trabajo: más allá de la fruta y el gimnasio',
                'description'       => 'Diseña un programa de bienestar laboral que realmente impacta en la salud mental y física del equipo, reduce el absentismo y mejora el engagement. Con los elementos que funcionan, los que son lavado de imagen, cómo medir el impacto y el marco legal del riesgo psicosocial en España.',
                'prompt_content'    => <<<'PROMPT'
Eres un People & Wellbeing Manager con experiencia diseñando programas de bienestar laboral en empresas de 50-500 personas donde la diferencia entre un programa que funciona y uno decorativo está en si ataca las causas raíz del estrés laboral o solo sus síntomas.

Contexto:
- Tamaño de la empresa: [N personas]
- Modelo de trabajo: [presencial / remoto / híbrido]
- Sector: [tecnología / servicios / manufactura / otro]
- El problema que quieres abordar: [alto estrés / absentismo / burnout / baja satisfacción en encuesta / preparación legal / todo]

## Programa de Bienestar Laboral — [Empresa]

### ⚠️ El diagnóstico: por qué la mayoría de los programas de bienestar no funcionan

**Lo que no funciona (o funciona muy poco):**
```
❌ La cesta de fruta y los zumos en la oficina
❌ El descuento en el gimnasio que nadie usa
❌ El webinar de mindfulness de 45 minutos
❌ El día de la salud mental que no tiene seguimiento
```

Por qué no funcionan: atacan los síntomas, no las causas.
Si el estrés viene de la carga de trabajo, la falta de autonomía o el liderazgo tóxico, ningún descuento en el gimnasio lo resuelve.

**Lo que sí funciona:**
```
✅ Reducir las causas raíz del estrés laboral (carga de trabajo, claridad de rol, autonomía)
✅ Acceso real a apoyo psicológico (no solo un teléfono de línea de ayuda)
✅ Managers entrenados para detectar y apoyar problemas de salud mental
✅ Cultura que permite decir "estoy agotado" sin consecuencias
✅ Flexibilidad real (no la flexibilidad de papel)
```

### 📋 Los elementos de un programa de bienestar que genera impacto real

**1. Evaluación de riesgos psicosociales (obligatoria en España):**
```
El marco legal:
→ La Ley de Prevención de Riesgos Laborales (LPRL) y el RD 39/1997 obligan a identificar y evaluar los riesgos psicosociales.
→ Factores psicosociales: carga de trabajo, autonomía, relaciones laborales, claridad de rol, liderazgo.
→ El método FPSICO del INSST es el más usado en España para evaluarlos.
→ No hacerlo expone a la empresa a sanciones e inspecciones de trabajo.

Qué hacer:
→ Encuesta de riesgos psicosociales anual (FPSICO u equivalente)
→ Análisis de resultados y plan de acción documentado
→ Seguimiento de las medidas adoptadas
```

**2. Acceso a apoyo psicológico:**
```
El recurso más valorado (y más subutilizado por miedo al estigma):

Opciones por presupuesto:
→ Seguro médico con cobertura psicológica (para empresas >20 personas)
→ Servicio de Employee Assistance Program (EAP): €3-8/empleado/mes, incluye sesiones confidenciales de psicología, asesoramiento legal y financiero
→ Plataformas de bienestar mental: Optum, Navia, Koa Health, Mind Tools

Lo más importante: la confidencialidad.
El empleado debe saber que su uso del servicio no llega a RRHH ni a su manager.
```

**3. Los managers como primera línea de prevención:**
```
El factor de bienestar más impactante: el manager directo.
"La gente no deja las empresas — deja a sus managers."

Formación para managers:
→ Cómo detectar señales de agotamiento o problemas de salud mental en el equipo
→ Qué hacer y qué NO hacer cuando alguien comparte un problema personal
→ Cómo crear un entorno donde el equipo se sienta seguro para ser honesto
→ Cuándo referir a RRHH o a un profesional de salud

El error: asumir que esto es espontáneo — los managers necesitan formación y permiso explícito.
```

**4. La flexibilidad real:**
```
Las medidas de flexibilidad con mayor impacto en el bienestar:
→ Horario flexible con núcleo de horas comunes (ej: 10h-14h todos presentes/conectados)
→ Días sin reuniones (Viernes sin reuniones / Miércoles sin reuniones)
→ Derecho a la desconexión digital (obligatorio en España por Ley Orgánica 3/2018)
→ Días adicionales de libre disposición (días para asuntos personales, no patologizados)
→ Permisos familiares más allá del mínimo legal
```

### 📊 Cómo medir el impacto real del programa de bienestar
Las 5 métricas que indican si el programa funciona (eNPS, absentismo, rotación voluntaria, resultados de la evaluación de riesgos psicosociales, uso de los recursos) y cómo presentar el ROI del bienestar al equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Bienestar laboral, salud mental trabajo, riesgos psicosociales, EAP, burnout prevención',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Contabilidad básica para no financieros: entiende el P&L, el balance y el cash flow sin ser contable',
                'description'       => 'Entiende los tres estados financieros fundamentales (cuenta de resultados, balance y cash flow) para leer los números de tu empresa y tomar decisiones informadas sin necesitar un MBA. Con la explicación de cada partida, la diferencia entre beneficio y liquidez y los ratios más útiles.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO Advisor con experiencia explicando finanzas a fundadores, product managers y directores de área que necesitan entender los números sin ser contables — con el lenguaje claro y los ejemplos concretos que hacen que los conceptos financieros se queden.

Contexto:
- Tu rol: [fundador / CEO / product manager / director de área / otro]
- Tu nivel financiero actual: [cero conocimientos / entiendo algo pero me pierdo / quiero profundizar]
- El documento financiero que más necesitas entender: [P&L / balance / cash flow / todos]

## Contabilidad para No Financieros — Los 3 Estados Financieros

### 📊 El estado de resultados (P&L o Cuenta de Pérdidas y Ganancias)

**Qué te dice:** si la empresa gana o pierde dinero en un período de tiempo.

```
ESTRUCTURA DEL P&L (de arriba a abajo):

INGRESOS (Revenue / Facturación)
- Todo el dinero que facturas a tus clientes

- COGS (Coste de las Ventas / Coste del Servicio)
  Lo que te cuesta directamente generar ese revenue.
  En SaaS: hosting, soporte, customer success dedicado.
  En manufactura: materias primas + mano de obra directa.
  En consultoría: las horas de los consultores en proyectos de clientes.
────────────────────────────────
= MARGEN BRUTO (Gross Profit)
  Revenue - COGS
  % de margen bruto = (Revenue - COGS) / Revenue × 100
  SaaS bueno: >70% | Ecommerce típico: 40-60% | Manufactura: 25-40%

- GASTOS OPERATIVOS (OpEx)
  Marketing, ventas, salarios de back-office, alquiler de oficina, software, etc.
  Todo lo que gastas para operar el negocio pero que no es coste directo del producto.
────────────────────────────────
= EBITDA
  Earnings Before Interest, Taxes, Depreciation and Amortization
  La medida más usada de la rentabilidad operativa del negocio.
  Es "cuánto genera el negocio antes de impuestos, intereses y amortizaciones."

- Amortizaciones y depreciaciones
- Intereses de deuda
- Impuestos (IS: Impuesto de Sociedades)
────────────────────────────────
= BENEFICIO NETO
  Lo que queda en el bolsillo de la empresa al final.
```

### 💰 La diferencia entre beneficio y liquidez (la más importante y la menos intuitiva)

**El error que destruye empresas rentables:**
```
Puedes tener beneficio contable y quedarte sin efectivo.
Puedes tener pérdidas contables y tener mucho efectivo.

Por qué ocurre:
1. El beneficio se reconoce cuando facturas (no cuando cobras).
   Facturas €100k en enero → es revenue de enero.
   Cobras en marzo → el efectivo llega en marzo.

2. Las inversiones no son gasto inmediato — se amortizan.
   Compras un ordenador por €2.000 → no es gasto de este mes.
   Es gasto de €400/año durante 5 años (amortización).
   Pero el efectivo salió todo en el momento de la compra.
```

**El ejemplo que lo hace entender:**
```
Empresa en enero:
→ Factura €50.000 (revenue)
→ Sus costes son €30.000 (gasto)
→ Beneficio contable: €20.000 ✅

Pero:
→ Los clientes pagan a 90 días → el efectivo llegará en abril
→ Tiene que pagar nóminas el 1 de febrero → necesita €30.000 en caja

Resultado: tiene €20.000 de beneficio pero puede no tener efectivo para pagar las nóminas.
```

### 💼 El balance de situación: la foto de la empresa en un momento

**Qué te dice:** lo que tiene la empresa (activos) y de dónde viene ese valor (pasivos + patrimonio neto).

```
ACTIVO = PASIVO + PATRIMONIO NETO (siempre cuadra — es la ecuación fundamental)

ACTIVO (lo que tiene la empresa):
→ Activo corriente: efectivo, cuentas a cobrar, inventario (convertible en cash en <1 año)
→ Activo no corriente: maquinaria, software propio, patentes (duran >1 año)

PASIVO (lo que debe la empresa):
→ Pasivo corriente: deudas a pagar en <1 año (proveedores, deuda bancaria a corto, impuestos)
→ Pasivo no corriente: deudas a largo plazo (préstamo bancario a 5 años)

PATRIMONIO NETO (el valor de los propietarios):
→ Capital social + resultados acumulados
```

### 🔢 Los 5 ratios financieros más útiles para no financieros
Los ratios de liquidez, endeudamiento, rentabilidad y eficiencia que te dicen si los números son buenos o malos y cómo interpretarlos sin necesitar un contable que te los explique cada vez.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Contabilidad básica, P&L, balance, cash flow, finanzas para no financieros, estados financieros',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cap table y pacto de socios para startups: estructura el capital desde el principio para no arrepentirte después',
                'description'       => 'Estructura correctamente el cap table de tu startup y diseña el pacto de socios que previene los conflictos más frecuentes entre fundadores e inversores. Con la distribución inicial de participaciones, las cláusulas de vesting, los derechos de los inversores y los errores más comunes que cierran rondas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en capital riesgo y derecho societario con experiencia asesorando a más de 100 startups en sus primeras rondas de financiación, donde los errores del cap table y el pacto de socios en la fase seed hacen imposibles las rondas de Series A dos años después.

Contexto:
- Etapa de la startup: [idea con socios / pre-seed / seed / tenemos la primera ronda / queremos prepararnos]
- Número de fundadores: [N]
- Situación actual: [no tenemos ningún documento formal / tenemos una SL pero sin pacto / queremos revisar el existente]
- ¿Hay inversores (o previsión de entrada pronto)?: [sí / no / en negociación]

## Cap Table y Pacto de Socios — [Startup]

### 📊 El cap table: la tabla que refleja quién tiene qué

**Qué es el cap table:**
La tabla de capitalización muestra quiénes son los propietarios de la startup y qué porcentaje de la empresa tiene cada uno.

**La estructura básica del cap table de una startup seed:**
```
PROPIETARIO          PARTICIPACIONES   % ACTUAL   % DILUIDO (FD)
─────────────────────────────────────────────────────────────────
Fundador A             3.000.000         40%          33.3%
Fundador B             3.000.000         40%          33.3%
Fundador C             1.500.000         20%          16.7%
─────────────────────────────────────────────────────────────────
Subtotal fundadores    7.500.000        100%          83.3%
─────────────────────────────────────────────────────────────────
Pool de opciones        750.000           -           8.3%
  (ESOP/Phantom shares)
─────────────────────────────────────────────────────────────────
Pre-seed inversor         750.000           -           8.3%
─────────────────────────────────────────────────────────────────
TOTAL (FD)             9.000.000                     100%
```

FD = Fully Diluted (incluyendo pool de opciones y convertibles no ejercidos)

**El error más frecuente en la distribución inicial:**
Dar participaciones iguales a todos los fundadores cuando la contribución es diferente.
"Para no crear conflicto desde el principio" → crea el mayor conflicto de todos: dos años después, el fundador que trabajó más le da igual que el que está desvinculado tenga el mismo %.

### 🔒 El vesting: la cláusula que protege a todos

**Por qué el vesting es imprescindible:**
Sin vesting: si un fundador se va a los 6 meses, se lleva su 30% permanentemente.
Con vesting: el fundador que se va a los 6 meses se lleva el 0% de sus participaciones (o una fracción según el tiempo trabajado).

**El estándar del mercado:**
```
CLIFF + VESTING MENSUAL:
→ Cliff de 1 año: las primeras participaciones se "ganan" al año de antigüedad.
  Si el fundador se va antes del año → se lleva 0%.
→ Vesting de 4 años total: después del cliff, el resto vesta mensualmente.
  Si el fundador se va a los 2 años → se lleva el 25% de sus participaciones (1/4 del total).

El estándar más común: 4 años de vesting con cliff de 1 año.
```

**El vesting acelerado (para inversores):**
```
Single-trigger: la adquisición de la empresa acelera todo el vesting automáticamente.
Double-trigger: la adquisición + el despido del fundador acelera el vesting.
Los inversores prefieren el double-trigger — protege contra que el fundador se marche el día después de la adquisición.
```

### 📝 Las cláusulas más importantes del pacto de socios

**Las 5 cláusulas que debes tener:**

```
1. DERECHO DE ARRASTRE (Drag-along):
Si el 75%+ de los socios quieren vender la empresa, pueden obligar al resto a vender también.
Sin esta cláusula: un socio minoritario puede bloquear la venta de la empresa.

2. DERECHO DE ACOMPAÑAMIENTO (Tag-along):
Si alguien vende su participación a un tercero, los otros socios tienen derecho a vender en las mismas condiciones.
Protege a los minoritarios: si el inversor A vende, B tiene derecho a unirse a esa venta.

3. DERECHO DE TANTEO (Right of First Refusal):
Antes de vender a un tercero, hay que ofrecerlo primero a los socios existentes.

4. DILUCIÓN ANTI-DILUTION:
Protege al inversor si la empresa hace una ronda a una valoración inferior.
Los tipos: Full ratchet (muy duro, raro) y Weighted average (el estándar).

5. LIQUIDATION PREFERENCE:
El inversor cobra primero en caso de venta o liquidación.
1x non-participating: el inversor recibe 1x su inversión, luego participan pro-rata.
El estándar en España para seed/pre-seed: 1x non-participating.
```

### ⚠️ Los errores del cap table que hacen imposibles las rondas de Serie A
Los 5 errores de estructura que los VCs de Serie A rechazan automáticamente: cap tables complicados, preferencias excesivas, fundadores sin vesting, % de fundadores demasiado diluidos para seguir motivados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Cap table, pacto de socios, vesting, startup legal, rondas inversión, equity fundadores',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer Effort Score (CES): reduce el esfuerzo del cliente y aumenta la lealtad sin aumentar el equipo',
                'description'       => 'Implementa el Customer Effort Score para medir y reducir el esfuerzo que hacen los clientes para resolver sus problemas. Con la metodología de encuesta, los puntos de medición correctos, la interpretación de resultados y las acciones que más reducen el esfuerzo del cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience Manager con experiencia implementando programas de CES en empresas de SaaS y servicios donde la reducción del esfuerzo del cliente ha reducido el churn temprano un 25% y el coste de soporte un 20%.

Contexto:
- Tipo de negocio: [SaaS B2B / ecommerce / servicios / telecomunicaciones / otro]
- Canales de soporte actuales: [email / chat / teléfono / autoservicio / todos]
- Métricas de CX actuales: [CSAT / NPS / ninguna / todas]
- El mayor reto de CX: [clientes frustrados con el proceso / alto volumen de tickets repetidos / churn temprano / otro]

## Customer Effort Score (CES) — [Empresa]

### 🧠 Por qué el esfuerzo del cliente importa más que la satisfacción

**El hallazgo de la investigación de Gartner (Harvard Business Review, 2010):**
La lealtad del cliente no está correlacionada principalmente con la satisfacción — está correlacionada con el esfuerzo.

```
Los clientes que tienen que hacer poco esfuerzo para resolver un problema:
→ 94% tienen intención de renovar o repetir compra
→ 88% aumentan su gasto

Los clientes que hacen mucho esfuerzo:
→ 81% tienen intención de hablar negativamente de la empresa
→ 59% buscan activamente alternativas
```

**CES vs. CSAT vs. NPS:**
```
CSAT (Satisfaction): mide si el cliente está satisfecho con una interacción.
  "¿Cómo valorarías tu experiencia hoy?" (1-5)
  Limitación: un cliente puede estar satisfecho con la resolución pero frustrado con el proceso.

NPS (Net Promoter Score): mide la probabilidad de recomendar.
  "¿Con qué probabilidad recomendarías?" (0-10)
  Limitación: poca acción inmediata — no dice qué mejorar.

CES (Customer Effort Score): mide el esfuerzo requerido.
  "¿Cuánto esfuerzo has tenido que hacer para resolver tu problema?" (1-7)
  Ventaja: directamente accionable — te dice dónde están las fricciones.
```

### 📋 La metodología de medición del CES

**La pregunta estándar del CES:**
```
"[La empresa] hizo que fuera fácil para mí resolver mi problema."
Escala Likert de 7 puntos:
1 = Muy en desacuerdo (mucho esfuerzo)
7 = Muy de acuerdo (muy fácil)

Variante alternativa (más directa):
"¿Cuánto esfuerzo tuviste que hacer para resolver tu problema hoy?"
1 = Muy poco esfuerzo / 5 = Mucho esfuerzo

La recomendación: usa la escala de 7 puntos para más granularidad.
```

**Cuándo enviar la encuesta (el timing es crítico):**
```
INMEDIATAMENTE después de la resolución del ticket (dentro de las 24 horas):
→ Después de cerrar un ticket de soporte
→ Después de completar el onboarding
→ Después de una llamada de soporte

NO para todos los contactos — el CES es mejor para:
→ Transacciones de soporte específicas
→ Pasos del journey con fricción conocida (facturación, cancelación, onboarding)

Para medir la lealtad general: NPS es mejor.
Para medir momentos específicos de esfuerzo: CES es mejor.
```

**La pregunta de seguimiento (lo que convierte el dato en acción):**
```
Después de la pregunta principal de CES, añade:
"¿Qué podríamos haber hecho para hacer tu experiencia más sencilla?"
[Campo de texto abierto]

Esta respuesta cualitativa es la que da el contexto para actuar sobre el score.
```

### 📊 Cómo calcular e interpretar el CES

```
CÁLCULO:
CES = % de respuestas positivas (5,6,7) - % de respuestas negativas (1,2,3)
El 4 es neutro y no cuenta.

BENCHMARKS:
CES > 70%: excelente (menos del 30% de los clientes tiene fricción)
CES 50-70%: aceptable (zona de mejora identificable)
CES < 50%: crítico (más de la mitad tiene fricción significativa)
```

### 🔧 Las 5 acciones que más reducen el esfuerzo del cliente
El análisis de las causas más frecuentes de alto esfuerzo (procesos multi-paso, necesidad de contactar más de una vez, información contradictoria) y las palancas de mejora con mayor impacto en el CES.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'CES, Customer Effort Score, reducción esfuerzo cliente, CX métricas, lealtad cliente',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Networking estratégico para freelancers: construye la red que genera oportunidades sin eventos incómodos',
                'description'       => 'Construye la red de contactos estratégica que genera oportunidades de negocio como freelance sin tener que ir a eventos de networking que no te gustan. Con las 3 formas de networking que funcionan para freelancers, cómo mantener las relaciones activas sin parecer oportunista y el sistema de seguimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach especializado en freelancers con experiencia ayudando a profesionales independientes introvertidos y extrovertidos a construir redes de contactos que generan el 60-80% de sus oportunidades de negocio sin depender de plataformas de freelance ni de publicidad de pago.

Perfil:
- Especialidad: [describe tu servicio freelance]
- Perfil de personalidad: [introvertido y odio los eventos / extrovertido pero no tengo sistema / intermedio]
- El tipo de cliente que buscas: [startups / PYME / grandes empresas / otro freelancer / consumidor]
- Estado del networking actual: [no hago networking / tengo contactos pero no los activo / quiero sistematizarlo]

## Networking Estratégico para Freelancers — [Especialidad]

### 🧠 El cambio de mentalidad: networking no es pedir favores

**El mayor error conceptual:**
La mayoría de freelancers no hace networking porque lo entiende como "pedir trabajo a conocidos".
Es incómodo, se siente oportunista y raramente funciona.

**El networking que funciona:**
No es pedir — es dar valor primero.
No es una transacción — es una relación.
No es un evento — es una práctica continua de bajo coste.

La consecuencia: cuando alguien de tu red necesita lo que tú haces, o conoce a alguien que lo necesita, tú eres la primera persona que viene a la mente.

**Los tipos de contactos en tu red:**
```
NIVEL 1 — Fuente directa de trabajo (clientes actuales y pasados):
La fuente más valiosa. Son los que pueden encargarte más trabajo o referirte.

NIVEL 2 — Amplificadores (otros freelancers, agencias, consultoras):
No son clientes pero conectan contigo a quienes sí lo son.
Un diseñador que te refiere a sus clientes cuando necesitan desarrollo es oro.

NIVEL 3 — Conectores (personas con mucha red en tu sector):
No son clientes ni te pagan, pero conocen a quien sí puede hacerlo.
El organizador de un evento de tu sector. El editor de una newsletter relevante.
```

### 🔧 Los 3 sistemas de networking que funcionan para freelancers

**Sistema 1 — El re-engagement trimestral (el más eficiente):**
```
Una vez al trimestre, contacta a 10 personas de tu red con un mensaje de valor real.
No para pedir trabajo — para dar algo útil.

Ejemplos de mensajes de valor:
→ "Vi este artículo y pensé en ti porque [conexión específica con su trabajo]."
→ "Acabo de terminar un proyecto similar a lo que me comentaste en [fecha]. Aprendí X, Y, Z — por si te es útil."
→ "¿Cómo va [el proyecto que me comentaste]? Me quedé con curiosidad."

El 80% de los freelancers nunca hace seguimiento — esta práctica te diferencia.
Tiempo: 2 horas cada 3 meses. ROI: las oportunidades llegadas por referido suelen tener un ticket 30-50% mayor.
```

**Sistema 2 — El contenido como networking pasivo:**
```
Publicar regularmente en LinkedIn o en una newsletter hace que la red piense en ti
sin que tengas que contactar a nadie.

El mecanismo:
→ Publicas sobre un proyecto interesante que acabas de terminar
→ Un contacto de hace 3 años que ya no recordabas lo ve
→ Le llega justo cuando tiene ese problema
→ Te escribe

Clave: el contenido debe mostrar el trabajo real, no solo teoría.
Las publicaciones más efectivas: "Esto hice con un cliente, esto fue el reto, esto fue el resultado."
```

**Sistema 3 — Los eventos selectivos (1-2 al trimestre, no más):**
```
No vayas a todos los eventos — ve a los correctos.
El evento correcto: donde están tus clientes potenciales, no donde están otros freelancers.

Antes del evento:
→ Investiga quién va a asistir (LinkedIn + la web del evento)
→ Identifica 3-5 personas con quienes quieres hablar específicamente

Durante el evento:
→ Habla con pocas personas y en profundidad — no colecciones tarjetas
→ Escucha más de lo que hablas — el que habla más aprende menos

Después del evento (las 48 horas más importantes):
→ Conecta en LinkedIn con cada persona con quien hablaste (con mensaje personalizado)
→ Si prometiste algo (un artículo, una presentación, una intro): hazlo en 48h o pierde el impulso
```

### 📊 El seguimiento de la red: el sistema mínimo que no se convierte en otra tarea
El CRM simplificado para freelancers (10 minutos a la semana) que mantiene activa la relación con los contactos clave sin convertirse en un proyecto de gestión en sí mismo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Networking freelance, red contactos freelance, referidos, LinkedIn networking, re-engagement',
                'vote_score'        => 42,
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
