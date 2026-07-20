<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills16Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Email marketing de ciclo de vida: los 7 emails que convierten suscriptores en clientes y clientes en fans',
                'description'       => 'Diseña la secuencia de emails de ciclo de vida que acompaña al usuario desde el primer contacto hasta la compra y la fidelización. Con los emails de bienvenida, nurturing, activación, retención y reactivación escritos y listos para personalizar.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Marketing Strategist especializado en lifecycle emails con experiencia diseñando secuencias de 7 emails que generan 3-5x de ROI en ecommerce, SaaS y negocios de servicios.

Mi contexto:
- Tipo de negocio: [SaaS / ecommerce / infoproductos / servicios / otro]
- Producto/servicio: [describe]
- Precio: [€]
- Lista actual: [N suscriptores]
- Herramienta de email: [Mailchimp / ActiveCampaign / Brevo / Klaviyo / ConvertKit / otra]
- Mayor problema: [suscriptores que no abren / lista que no compra / clientes que no repiten / otro]

## Secuencia de Lifecycle Emails — [Tu negocio]

### 📧 Los 7 emails esenciales del ciclo de vida

---

#### Email 1 — Bienvenida (enviar: inmediatamente tras el registro)

**Objetivo:** primera impresión y establecer la relación.
**Tasa de apertura esperada:** 50-80% (el email más abierto de toda la secuencia).

```
Asunto: [Nombre], bienvenido/a a [marca] — aquí tienes lo que necesitas para empezar

Hola [Nombre],

Gracias por unirte a [comunidad/lista/producto].

En los próximos días te voy a enviar [promesa concreta: 3 emails con X / los mejores recursos sobre Y].

Para empezar, aquí tienes lo más importante:
→ [Link 1: el recurso de más valor que tienes]
→ [Link 2: la página de inicio si es SaaS / la colección bestseller si es ecommerce]

Si tienes alguna pregunta, responde directamente a este email — lo leo yo personalmente.

[Firma personal]
```

**Por qué funciona:** es personal, entrega valor inmediato y abre el canal bidireccional.

---

#### Email 2 — La historia (enviar: día 2-3)

**Objetivo:** generar conexión y credibilidad antes de vender.

El email de historia no es tu CV. Es el momento en que pasaste por el mismo problema que tu suscriptor tiene hoy y cómo lo resolviste. El producto es la solución que encontraste.

Estructura:
1. El problema (antes): describe el pain point con detalle específico
2. El momento del cambio: qué buscabas o qué descubriste
3. El resultado (ahora): qué cambió y qué le prometes al suscriptor si hace lo mismo

---

#### Email 3 — Valor puro (enviar: día 4-5)

**Objetivo:** demostrar expertise antes de pedir nada.

Enseña algo accionable que el suscriptor pueda aplicar hoy sin comprarte nada. Cuanto más útil, más confianza. Este email no vende — construye la reciprocidad que hace que el siguiente email convierta.

---

#### Email 4 — La primera oferta (enviar: día 6-7)

**Objetivo:** la primera conversión.

```
Asunto: La solución que más me piden ([nombre del producto])

Hola [Nombre],

Esta semana te he compartido [resumen de los emails anteriores].

Hoy quiero presentarte [producto] — [descripción en 1 frase que conecta con el pain point del Email 1].

[Beneficio 1]: [resultado específico]
[Beneficio 2]: [resultado específico]
[Beneficio 3]: [resultado específico]

→ [CTA claro: Ver [producto] / Empezar gratis / Comprar ahora]

Si tienes alguna pregunta antes de decidir, responde aquí.

[Firma]

P.D. [La razón por la que actuar ahora — escasez, bonus, oferta temporal — solo si es real]
```

---

#### Email 5 — Objeción más frecuente (enviar: día 8-9)

**Objetivo:** eliminar la razón más común por la que no compraron.

Identifica la objeción más frecuente: "No tengo tiempo", "Es caro", "No sé si funcionará para mí", "Lo haré más adelante". Escribe un email que la aborda directamente con evidencia o reframing.

---

#### Email 6 — Prueba social (enviar: día 10-11)

**Objetivo:** la validación de otros que sí compraron.

Caso de éxito real de un cliente similar al suscriptor. Formato historia: situación antes → qué hizo → resultado con números.

---

#### Email 7 — El cierre (enviar: día 12-14)

**Objetivo:** el último CTA para los que aún no han comprado.

"Este es el último email sobre [producto] que voy a enviarte. Si no es para ti ahora mismo, no pasa nada — seguiré enviándote [contenido de valor]."

El cierre honesto convierte porque no hay presión falsa.

### 📊 Benchmarks y cómo medir el éxito de la secuencia
Tasas de apertura, CTR y conversión esperadas en cada email, y cómo iterar la secuencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Email marketing, ciclo de vida, nurturing, conversión, automation',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Optimización de queries SQL: de consultas lentas a respuestas en milisegundos',
                'description'       => 'Diagnostica y optimiza las queries SQL que están degradando el rendimiento de tu aplicación. Con el plan de ejecución, los índices correctos, las reescrituras que multiplican la velocidad y las trampas más comunes de los ORMs.',
                'prompt_content'    => <<<'PROMPT'
Eres un Database Engineer con experiencia optimizando queries SQL en bases de datos PostgreSQL y MySQL de 10GB a 10TB con millones de registros y aplicaciones con picos de 1000 QPS.

Mi contexto:
- Base de datos: [PostgreSQL / MySQL / MariaDB / SQLite / SQL Server]
- ORM: [Eloquent (Laravel) / Prisma / SQLAlchemy / ActiveRecord / Sequelize / queries directas]
- Problema: [query que tarda >2s / timeouts bajo carga / N+1 queries / dashboard lento / reportes que bloquean la app]
- Tabla problemática: [describe — N filas aproximadas, columnas principales]

## Optimización de SQL — [Tu consulta o problema]

### 🔍 El diagnóstico: EXPLAIN ANALYZE (empieza siempre aquí)

**PostgreSQL:**
```sql
EXPLAIN (ANALYZE, BUFFERS, FORMAT TEXT)
SELECT u.id, u.email, COUNT(o.id) as order_count
FROM users u
LEFT JOIN orders o ON o.user_id = u.id
WHERE u.created_at > '2024-01-01'
GROUP BY u.id, u.email
ORDER BY order_count DESC
LIMIT 100;
```

**Cómo leer el plan de ejecución:**
- **Seq Scan** en tabla grande: mal — está escaneando toda la tabla
- **Index Scan**: bien — usa el índice
- **Nested Loop** en tablas grandes: peligroso — O(n×m) operaciones
- **Hash Join**: bien para joins de tablas grandes
- **rows=X (actual rows=Y)**: si X y Y difieren mucho → estadísticas desactualizadas → ejecuta `ANALYZE tabla`

**MySQL:**
```sql
EXPLAIN SELECT ...;
-- El campo `key` dice si usa índice. `rows` estima cuántas filas examina.
-- `Extra: Using filesort` = ordenación sin índice = lento
-- `Extra: Using index` = covering index = rapidísimo
```

### 🏎️ Los índices correctos (la optimización de mayor impacto)

**Regla 1 — Indexa las columnas de WHERE, JOIN y ORDER BY:**
```sql
-- Si tu query frecuente es:
SELECT * FROM orders WHERE user_id = ? AND status = ? ORDER BY created_at DESC

-- El índice compuesto correcto:
CREATE INDEX idx_orders_user_status_date
ON orders (user_id, status, created_at DESC);
```

**Regla 2 — El orden del índice compuesto importa:**
La columna de mayor selectividad va primero (la que filtra más registros).
En el ejemplo: `user_id` primero (muy selectivo), `status` segundo, fecha al final.

**Regla 3 — Covering indexes (el índice que evita ir a la tabla):**
```sql
-- Si solo necesitas id y email de users:
CREATE INDEX idx_users_created_email
ON users (created_at, id, email);
-- PostgreSQL puede responder sin tocar la tabla principal
```

**Regla 4 — Índices parciales para filtros frecuentes:**
```sql
-- Solo indexar los pedidos activos (que son los que se consultan siempre):
CREATE INDEX idx_orders_active
ON orders (user_id, created_at)
WHERE status = 'active';
-- Más pequeño y más rápido que indexar toda la tabla
```

### 🐌 El problema N+1 y cómo evitarlo

**El N+1 clásico en ORMs:**
```php
// ❌ Eloquent — genera 1 + N queries:
$users = User::all();
foreach ($users as $user) {
    echo $user->orders->count(); // Una query por usuario
}

// ✅ Eager loading — 2 queries totales:
$users = User::withCount('orders')->get();
```

```javascript
// ❌ Prisma — N+1:
const users = await prisma.user.findMany()
for (const user of users) {
  const orders = await prisma.order.findMany({ where: { userId: user.id } })
}

// ✅ Include — 1 query con JOIN:
const users = await prisma.user.findMany({
  include: { orders: true }
})
```

### 🔧 Reescrituras que multiplican la velocidad

**Subquery → JOIN:**
```sql
-- ❌ Lento (subquery correlacionada — se ejecuta por cada fila):
SELECT * FROM users u
WHERE (SELECT COUNT(*) FROM orders WHERE user_id = u.id) > 5;

-- ✅ Rápido (una sola pasada):
SELECT u.* FROM users u
JOIN (
  SELECT user_id FROM orders
  GROUP BY user_id
  HAVING COUNT(*) > 5
) active ON active.user_id = u.id;
```

**EXISTS en lugar de COUNT:**
```sql
-- ❌ COUNT cuenta todas las filas:
WHERE (SELECT COUNT(*) FROM orders WHERE user_id = u.id) > 0

-- ✅ EXISTS para en el primer match:
WHERE EXISTS (SELECT 1 FROM orders WHERE user_id = u.id)
```
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Optimización SQL, índices, performance, PostgreSQL, MySQL',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Storytelling visual: cómo diseñar presentaciones que convencen sin que el diseñador desaparezca detrás de las slides',
                'description'       => 'Crea presentaciones que comunican con impacto visual, mantienen la atención y refuerzan el mensaje en lugar de competir con el ponente. Con los principios de jerarquía visual, el sistema de slides que escala y las reglas que evitan las presentaciones que se leen en lugar de escucharse.',
                'prompt_content'    => <<<'PROMPT'
Eres un Presentation Designer y Communication Strategist con experiencia diseñando pitch decks, keynotes y decks ejecutivos que han convencido desde inversores hasta juntas directivas.

Mi contexto:
- Tipo de presentación: [pitch deck / deck ejecutivo / keynote / propuesta comercial / deck de onboarding / otro]
- Audiencia: [inversores / clientes / equipo interno / consejo / otro]
- Herramienta: [PowerPoint / Keynote / Google Slides / Figma / Canva / otro]
- Número de slides estimado: [N]
- Mayor problema actual: [slides llenas de texto / diseño inconsistente / el deck no me representa / la audiencia mira las slides en lugar de escucharme / otro]

## Sistema de Storytelling Visual — [Nombre del deck]

### 🧠 El principio más importante: una idea por slide

La regla que transforma los decks:
**Si una slide tiene 2 ideas, es porque hay 2 slides.**

Cuando una slide tiene demasiada información:
- La audiencia lee la slide en lugar de escuchar al ponente
- El mensaje principal se diluye entre el ruido
- La comprensión y retención caen en picado

**El test de la slide:**
Cubre el texto de la slide y mira solo el visual. ¿Entiendes el mensaje principal? Si no, la slide no está comunicando — está almacenando información.

### 📐 La jerarquía visual de cada slide

**Los 4 elementos de una slide bien jerarquizada:**

1. **Headline:** la afirmación, no el tema. No "Ventas Q3" sino "Las ventas del Q3 crecieron 40% impulsadas por el mercado LATAM".
2. **Visual central:** el dato, gráfico, imagen o diagrama que prueba el headline.
3. **Apoyo:** el dato de contexto o la fuente. Pequeño y discreto.
4. **Espacio en blanco:** la parte que más mejora las slides malas.

**Tamaños de fuente mínimos (para presentaciones en sala):**
- Headline: 32-40px
- Cuerpo: 20-24px
- Notas/apoyo: 16px
- Nunca usar fuentes menores a 16px — si no cabe, corta el contenido

### 🎨 El sistema de slides que escala (y mantiene la consistencia)

**Las 5 plantillas que cubren el 90% de los casos:**

**Slide de afirmación:**
```
[HEADLINE que hace una afirmación]
[Visual grande que la apoya]
[Fuente o dato de contexto en pequeño]
```

**Slide de datos:**
```
[HEADLINE que interpreta el dato, no que lo enuncia]
[Número grande o gráfico simple]
[Contexto: vs. periodo anterior / vs. competencia / vs. objetivo]
```

**Slide de proceso:**
```
[HEADLINE del proceso]
[3-5 pasos numerados con icono o número visual]
[El paso actual o el que cambia va destacado]
```

**Slide de comparación:**
```
[HEADLINE que dice qué estás comparando]
[2-3 columnas — nunca más de 3]
[La opción recomendada tiene jerarquía visual clara]
```

**Slide de cita/testimonio:**
```
[La cita en grande — solo la frase clave, no el párrafo completo]
[Atribución: nombre, cargo, empresa]
[Foto opcional]
```

### ❌ Las 7 señales de una presentación que no funciona

1. Más de 7 palabras en el headline
2. Bullets con frases completas (si puedes poner bullets, puedes poner frases)
3. 3+ fuentes tipográficas diferentes
4. Gráficos con 5+ colores
5. Animaciones que no aportan significado
6. Slides con logo corporativo en cada página
7. Fondos con gradientes que compiten con el contenido

### 📊 La estructura narrativa del deck
El arco de 5 actos para presentaciones de venta o inversión que mantiene la tensión hasta el final.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Presentaciones, storytelling visual, pitch deck, diseño slides',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del pipeline semanal: el ritual que mantiene el funnel vivo y los deals avanzando',
                'description'       => 'Implementa el proceso de gestión semanal del pipeline de ventas que mantiene cada deal activo, identifica los que están estancados antes de que mueran y asegura que el funnel refleja la realidad. Con la agenda de la reunión de pipeline, las preguntas que revelan el estado real de cada deal y las acciones que lo desatascan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Manager con experiencia entrenando a equipos de ventas B2B de 3 a 20 personas para pasar de pipelines caóticos a procesos predecibles con NRR >110%.

Contexto:
- Número de vendedores: [N]
- Ciclo de venta: [X semanas]
- CRM: [HubSpot / Salesforce / Pipedrive / Close / otro]
- Ticket medio: [€]
- Mayor problema: [deals que "avanzan" pero nunca cierran / el CRM no refleja la realidad / el pipeline está inflado / vendedores que no saben cuáles priorizar / otro]

## Pipeline Management Semanal — [Equipo de ventas]

### 🎯 La diferencia entre pipeline management y deal review

**Pipeline management:** visión de todo el funnel — ¿hay suficiente volumen en cada etapa para cumplir la cuota? ¿Dónde hay cuellos de botella?

**Deal review:** análisis deal by deal — ¿cuál es el estado real de cada oportunidad? ¿Qué necesita para avanzar?

Los dos son necesarios. La reunión semanal hace los dos en 60 minutos.

### 📅 La reunión semanal de pipeline (60 minutos)

**Estructura fija — misma agenda cada semana:**

| Bloque | Tiempo | Qué ocurre |
|--------|--------|-----------|
| Vista del pipeline | 10 min | Dashboard: ¿cómo está el funnel vs. el trimestre? ¿Hay suficiente volumen? |
| Deals en "cierre este mes" | 25 min | Revisión de todos los deals que deben cerrar en los próximos 30 días |
| Deals estancados | 15 min | Deals sin movimiento en >14 días — ¿qué los desatasca o los archivamos? |
| Prospecting check | 10 min | ¿Hay suficiente input al top of funnel para el próximo mes? |

### 🔍 Las preguntas que revelan el estado real de un deal

La mayoría de managers hacen preguntas de estado: "¿Cómo va el deal de [empresa]?"
Los mejores managers hacen preguntas de evidencia:

**Para entender si el deal está vivo:**
- "¿Cuándo fue la última vez que hablaste con [nombre del decisor]?"
- "¿Qué fue lo último que te dijo sobre la decisión?"
- "¿Hay una fecha de decisión confirmada o es tu estimación?"

**Para entender el nivel de interés real:**
- "¿El sponsor interno ha movido algún dedo interno por hacer avanzar esto?"
- "¿Tienen presupuesto aprobado o todavía está en proceso?"
- "¿Hay competidores activos en este deal?"

**Para entender el siguiente paso:**
- "¿Cuál es el siguiente paso acordado y para cuándo?"
- "¿Qué necesita el cliente para tomar la decisión?"
- "¿Qué necesitas de mí para que avance esta semana?"

### 🚦 Clasificación de deals y acción recomendada

| Estado | Criterio | Acción |
|--------|---------|--------|
| 🟢 Activo | Contacto en <7 días + siguiente paso definido | Ejecutar el plan |
| 🟡 En riesgo | Sin contacto 7-14 días o siguiente paso vago | Outreach urgente esta semana |
| 🔴 Estancado | Sin contacto >14 días o siguiente paso desconocido | Decisión: reactivar o archivar |
| ⚫ Zombie | >30 días sin movimiento | Archivar — contamina el pipeline |

**Por qué hay que archivar los zombies:**
Un deal zombie en el pipeline infla las proyecciones, distorsiona el forecast y quita foco del vendedor a deals reales.

### 📊 Las métricas del pipeline que importan

- **Conversion rate por etapa:** dónde se pierden más deals
- **Average age por etapa:** cuánto tiempo llevan los deals en cada fase
- **Pipeline coverage:** pipeline total / cuota restante (objetivo: 3-4x)
- **Win rate:** % de deals que cierran (objetivo según sector: 20-40%)

### 🔧 Cómo conseguir que el CRM refleje la realidad
El proceso que hace que los vendedores actualicen sin necesidad de recordárselo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Pipeline management, sales process, CRM, gestión de ventas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseño de pricing para productos SaaS: del "no sé qué cobrar" a una estrategia que maximiza el revenue',
                'description'       => 'Define la estrategia de precios de tu producto SaaS basada en el valor que genera, no en lo que cuesta construirlo. Con los modelos de pricing, la investigación de disposición a pagar, el diseño de los planes y cómo iterar el pricing sin perder clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Pricing Strategist con experiencia diseñando y optimizando modelos de pricing para startups SaaS que han incrementado el ARPU entre 30% y 3x sin incrementar el churn.

Contexto:
- Producto: [describe]
- Pricing actual: [nada definido / precio único / freemium / planes actuales]
- Clientes actuales: [N — de qué tipo y tamaño]
- Ticket actual (si existe): [€/mes o €/año]
- Mayor problema: [no sé si estoy cobrando demasiado o muy poco / los clientes no escalan de plan / el freemium no convierte / otro]

## Estrategia de Pricing SaaS — [Producto]

### 🧠 El error de pricing más frecuente: cost-plus pricing

La mayoría de fundadores calcula: "nos cuesta €X construirlo y operarlo → cobramos €X × 2."

El problema: los clientes no pagan por lo que cuesta construir el producto. Pagan por el valor que les genera.

**Un cliente que ahorra 20 horas al mes con tu herramienta y factura a €100/h:**
Valor generado = 20 × €100 = €2.000/mes
Precio razonable = 10-20% del valor = €200-400/mes
Si estás cobrando €29/mes, tienes un problema de pricing.

### 📐 Los 4 modelos de pricing para SaaS

**1. Por usuario/asiento:**
El más fácil de entender y escalar. El cliente paga más a medida que crece el equipo.
Ideal cuando: el valor crece con el número de usuarios (collaboration tools, CRMs, proyectos).
Riesgo: el cliente limita los asientos para pagar menos.

**2. Por uso/consumo:**
Paga lo que consumes. El cliente entra con bajo coste y escala con el uso.
Ideal cuando: el valor está correlacionado con el uso (APIs, mensajes enviados, almacenamiento, transacciones).
Ejemplo: Stripe cobra por transacción, Twilio por mensaje, AWS por GB.

**3. Por features/plan:**
Planes diferenciados por funcionalidades. El cliente sube de plan cuando necesita más features.
Ideal cuando: hay features de alto valor que no todos necesitan.
El riesgo: poner las features equivocadas en cada plan (los customers tests ayudan).

**4. Freemium:**
Tier gratuito permanente + planes de pago.
Ideal cuando: tienes efecto red o el uso gratuito genera valor que convierte en pago.
El riesgo: el 95%+ de los usuarios se queda en free para siempre.
La pregunta clave: ¿el usuario gratuito te cuesta muy poco o te genera valor indirectamente?

### 🔬 Cómo investigar la disposición a pagar (WTP)

**El método de Van Westendorp (4 preguntas):**
En una encuesta a clientes potenciales o actuales:
1. "¿A qué precio te parecería tan barato que dudarías de su calidad?"
2. "¿A qué precio te parecería barato pero seguirías comprando?"
3. "¿A qué precio empezaría a parecerte caro pero seguirías comprando?"
4. "¿A qué precio te parecería demasiado caro para comprarlo?"

Con las respuestas, obtienes el rango de precio aceptable y el precio óptimo.

**El método de conversación directa:**
Pregunta a tus mejores clientes: "Si mañana el precio subiera un 20%, ¿cancelarías?"
Si la respuesta es "no" de forma consistente, probablemente estás cobrando poco.

### 🎯 Diseño de los planes (good / better / best)

**La regla del plan ancla:**
El plan más caro no está ahí para que lo compren muchos — está para hacer que el plan del medio parezca razonable (efecto anclaje).

**Qué va en cada plan:**

| Plan | Para quién | Precio | Features incluidas |
|------|-----------|--------|-------------------|
| Starter | Individual o startup temprana | €X | Las funciones core, limitadas por uso |
| Growth | Equipo pequeño o empresa en crecimiento | €X×3 | Funciones avanzadas, más uso, integrations |
| Pro/Scale | Empresa mediana | €X×8 | Todo, incluyendo la feature de mayor valor |
| Enterprise | Empresa grande | Custom | Todo + SLA + soporte dedicado + seguridad |

### 📈 Cómo iterar el pricing sin perder clientes
La estrategia de grandfather + migración gradual para subir precios a clientes existentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'SaaS pricing, estrategia de precios, monetización, product strategy',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño de beneficios y retribución flexible: el paquete que atrae talento sin solo subir el salario fijo',
                'description'       => 'Diseña el paquete de beneficios y la retribución flexible que mejora la propuesta de valor al empleado, reduce la rotación y optimiza la carga fiscal. Con el inventario de beneficios por perfil, el sistema de retribución flexible y cómo comunicarlo para que el equipo lo valore.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR & Total Rewards Specialist con experiencia diseñando paquetes de beneficios y retribución flexible para empresas de 20 a 500 empleados en España que han reducido la rotación y mejorado el employer branding.

Contexto:
- Número de empleados: [N]
- Sectores de los empleados: [tech / ventas / operaciones / mixto]
- Salario medio de la empresa: [€/año]
- Beneficios actuales: [ninguno / tickets restaurante / seguro médico / otro]
- Problema principal: [la gente se va por salario / no podemos competir salarialmente con grandes empresas / los beneficios actuales no los valora nadie / queremos atraer perfiles tech / otro]

## Paquete de Beneficios y Retribución Flexible — [Empresa]

### 🧠 Por qué los beneficios importan más de lo que parece

**La ecuación del empleado:**
Lo que un empleado valora = Salario neto + Beneficios tangibles + Beneficios intangibles

Una empresa que paga €35.000 brutos con buenos beneficios puede ser más atractiva que una que paga €38.000 sin nada.

**El impacto fiscal de los beneficios:**
Un beneficio en especie exento de IRPF (ticket restaurante, transporte, guardería) vale más que el mismo importe en salario porque el empleado no paga el 20-45% de IRPF sobre él.

### 📦 El inventario de beneficios (por perfil de empleado)

**Beneficios universales (todos los perfiles):**
- Seguro médico privado (Adeslas / Sanitas / Mapfre): €50-150/persona/mes — muy valorado
- Días adicionales de vacaciones (1-5 días sobre el convenio)
- Flexibilidad horaria y días de trabajo en remoto
- Paga extra de beneficios / bonus anual

**Beneficios para perfiles tech:**
- Budget anual para formación y conferencias: €500-2.000/año
- Hardware de trabajo de calidad (Mac de última generación)
- Home office allowance: contribución para el setup en casa
- Stock options o phantom shares para los primeros 20 empleados

**Beneficios para perfiles con familia:**
- Cheque guardería / ayuda para cuidado de hijos: exento hasta €1.000/año en IRPF
- Días adicionales por paternidad/maternidad más allá del convenio
- Seguro médico extensible a familiares

**Beneficios para perfiles de ventas:**
- Coche de empresa o allowance de movilidad
- Teléfono de empresa o allowance de telecomunicaciones
- Seguro de vida y accidentes

### 💰 La retribución flexible: cómo funciona en España

**La retribución flexible en España permite al empleado destinar parte de su salario bruto a:**

| Beneficio | Exención IRPF | Límite anual |
|-----------|--------------|-------------|
| Restaurante (ticket) | Sí | €11/día (€2.750/año) |
| Transporte | Sí | €1.500/año |
| Guardería y cuidado de hijos | Sí | Sin límite específico |
| Seguro médico | Sí | €500/persona/año (empleado) o €1.500 (con familia) |
| Formación | Sí | Sin límite si es job-related |

**Ejemplo de impacto:**
Empleado con €36.000 brutos y tipo marginal del 30%:
- Destina €2.000 a ticket restaurante + €1.500 a transporte = €3.500 en retflex
- Se ahorra €3.500 × 30% = €1.050 de IRPF al año
- La empresa puede absorber el coste de la plataforma de retflex (~€5/empleado/mes)

**Plataformas de retflex en España:**
Cobee, Cobee, Edenred, Sodexo, Up Spain — compara por coste y UX del empleado.

### 📣 Cómo comunicar los beneficios para que el equipo los valore

El error más frecuente: los empleados no conocen todos sus beneficios → los dan por sentado y no los ponen en la balanza cuando reciben una oferta externa.

**El total compensation statement anual:**
Un documento que muestra el coste total que la empresa invierte en cada empleado:
Salario bruto + cotizaciones (empresa) + valor de todos los beneficios = coste total de la empresa
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Retribución flexible, beneficios empleados, HR, employer branding España',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Cierre contable mensual: el proceso que da al CFO los números reales antes del día 5',
                'description'       => 'Diseña el proceso de cierre contable mensual que produce el P&L real, el balance y el cash flow antes del día 5 del mes siguiente. Con el checklist de cierre, los puntos de control clave y cómo detectar anomalías antes de presentar los números al equipo directivo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller con experiencia implementando procesos de cierre contable mensual en empresas de 2M a 50M€ que han pasado de "tener los números en el mes siguiente al siguiente" a cerrar en 3-5 días hábiles.

Contexto:
- Software contable: [Sage / Contaplus / Holded / Odoo / SAP / Quickbooks / Excel / otro]
- Facturación mensual aproximada: [€]
- Número de transacciones/mes: [N]
- Días de cierre actual: [N días hábiles]
- Mayor dificultad en el cierre actual: [facturas pendientes de proveedores / conciliación bancaria / periodificaciones que se olvidan / personal externo que tarda / otro]

## Proceso de Cierre Contable Mensual — [Empresa]

### 📅 El calendario del cierre (del día 1 al día 5 del mes siguiente)

**Día 1 del mes (primeras 2h):**
- Cierre de las facturas emitidas del mes anterior — no emitir más facturas con fecha anterior
- Revisión de cobros pendientes en el extracto bancario
- Comunicación al equipo: "el cierre del mes X ha comenzado"

**Día 2:**
- Registro de todas las facturas de proveedor recibidas
- Identificación de facturas de proveedor esperadas y no recibidas → imputación de devengos
- Conciliación bancaria: extracto bancario vs. contabilidad → diferencias identificadas y justificadas

**Día 3:**
- Cálculo de periodificaciones y ajustes de cierre (ver sección siguiente)
- Registro de nóminas y seguros sociales del mes
- Amortizaciones del mes (si están automatizadas, solo verificación)

**Día 4:**
- Balance de sumas y saldos — revisión de anomalías
- P&L preliminar — comparación con el mes anterior y el presupuesto
- Consultas y correcciones

**Día 5:**
- Cierre definitivo y bloqueo del período en el software contable
- Presentación al CEO/equipo directivo: P&L, balance y cash flow del mes

### 🔍 El checklist de cierre (lo que no puede olvidarse)

**Ingresos:**
- [ ] Todas las facturas emitidas registradas con la fecha correcta
- [ ] Ingresos diferidos reconocidos en el mes correcto (SaaS: el pago anual se devenga mensualmente)
- [ ] Comisiones de vendedores calculadas y periodificadas

**Gastos:**
- [ ] Nóminas y seguros sociales registrados
- [ ] Facturas de proveedores recibidas registradas
- [ ] Facturas de proveedores esperadas y no recibidas → devengadas como accrual
- [ ] Amortizaciones del período
- [ ] Seguros, alquileres y suscripciones anuales periodificados mensualmente

**Conciliación:**
- [ ] Extracto bancario conciliado con la contabilidad
- [ ] Cuentas a cobrar cuadradas con el CRM o la facturación
- [ ] Cuentas a pagar cuadradas con los proveedores

### ⚠️ Las anomalías que debes detectar antes de presentar

**Señales de que algo va mal en el P&L:**
- Un gasto en un mes que debería ser recurrente no aparece → falta de periodificación o factura pendiente
- Un ingreso anormalmente alto o bajo vs. el mes anterior sin explicación
- El margen bruto cambia >3pp respecto al mes anterior sin razón conocida
- Una cuenta de gastos duplicada o mal clasificada

**La pregunta antes de presentar los números:**
"¿Puedo explicar cada variación significativa vs. el mes anterior y vs. el presupuesto?"
Si la respuesta es no en algún punto, no presentas hasta entender la causa.

### 📊 Los tres documentos del cierre (P&L, Balance, Cash Flow)
La estructura de cada documento, la cadencia de presentación al equipo directivo y el formato que facilita las decisiones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Cierre contable, P&L, control financiero, contabilidad, CFO',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Políticas de uso aceptable y términos de servicio para plataformas digitales: el marco que protege sin espantar usuarios',
                'description'       => 'Redacta las políticas de uso aceptable (AUP) y los términos de servicio de tu plataforma digital que delimitan claramente qué está permitido y qué no, protegen a la empresa ante abusos y cumplen con el marco regulatorio europeo sin ser ilegibles.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho digital y regulación de plataformas con experiencia redactando términos de servicio para marketplaces, SaaS, redes sociales y apps móviles en el mercado europeo.

Contexto:
- Tipo de plataforma: [marketplace / red social / SaaS / app de servicios / comunidad / otro]
- Usuarios: [consumidores (B2C) / empresas (B2B) / ambos]
- Contenido generado por usuarios (UGC): [sí hay UGC / no]
- Transacciones económicas: [sí / no]
- Países objetivo: [España / Europa / internacional]
- Problema que quieres resolver: [usuarios que abusan de la plataforma / necesito limitar mi responsabilidad / quiero cerrar la cuenta de usuarios sin demandas / cumplimiento DSA / otro]

## Políticas de Uso Aceptable y Términos de Servicio — [Plataforma]

### 🏗️ La estructura de los documentos legales de una plataforma

**Los documentos que necesitas:**

| Documento | Qué regula | Audiencia |
|-----------|-----------|----------|
| Términos de Servicio | La relación contractual con el usuario | Usuario final |
| Política de Uso Aceptable | Lo que está prohibido hacer en la plataforma | Usuario final |
| Política de Privacidad | Tratamiento de datos personales (RGPD) | Usuario final |
| Política de Cookies | Tipos de cookies y consentimiento | Usuario final |
| Política de Contenidos | Criterios de moderación (si hay UGC) | Usuario + reguladores |

### 📄 Los Términos de Servicio — estructura esencial

**1. Partes del contrato:**
Quién eres (razón social, NIF, domicilio) y quién es el usuario.

**2. Objeto del servicio:**
Qué ofreces y qué no ofreces. Los límites del servicio deben ser explícitos.

**3. Registro y cuenta:**
Requisitos (edad mínima: 16 años en la UE por RGPD), obligaciones del usuario (mantener contraseña segura), cuándo puedes cerrar una cuenta.

**Cláusula de cierre de cuenta:**
```
"[Empresa] se reserva el derecho a suspender o cancelar la cuenta de cualquier
usuario que incumpla los presentes Términos o la Política de Uso Aceptable,
previa notificación por email salvo en casos de urgencia o riesgo para la
plataforma o terceros, sin que ello genere derecho a compensación alguna."
```

**4. Precio y condiciones de pago (si aplica):**
Precios, forma de pago, política de reembolsos, renovación automática.

**5. Propiedad intelectual:**
```
"El usuario concede a [Empresa] una licencia no exclusiva, gratuita, mundial
y sublicenciable para usar, reproducir, distribuir y mostrar el contenido
que publique en la plataforma a los únicos efectos de operar el servicio."
```

**6. Limitación de responsabilidad:**
```
"En ningún caso la responsabilidad de [Empresa] por daños derivados del uso
del servicio superará el importe pagado por el usuario en los últimos 12 meses."
```

### 🚫 La Política de Uso Aceptable — lo que está prohibido

**Categorías estándar de contenido/uso prohibido:**

1. **Contenido ilegal:** material de abuso sexual de menores (CSAM), incitación al terrorismo, contenido que infrinja derechos de autor.

2. **Contenido dañino:** hate speech, acoso, doxxing, desinformación deliberada.

3. **Actividades prohibidas:** spam, phishing, scraping masivo, uso automatizado no autorizado, reverse engineering.

4. **Uso comercial no autorizado:** reventa del servicio sin acuerdo previo, arbitraje de cuentas.

**La cláusula que protege ante abuso:**
```
"Nos reservamos el derecho a eliminar cualquier contenido o suspender cualquier
cuenta que, a nuestro criterio razonable, infrinja esta política o sea dañino
para la plataforma, sus usuarios o terceros, incluso si el incumplimiento no
está expresamente previsto en esta política."
```

### 🇪🇺 El Digital Services Act (DSA) y qué implica para tu plataforma

Si tienes >10.000 usuarios en la UE o eres un marketplace, el DSA (aplicable desde 2024) requiere:
- Mecanismo de denuncia de contenidos ilegales accesible y funcional en 24h
- Información al usuario sobre por qué se eliminó su contenido
- Informe de transparencia anual sobre moderación
- Contacto único para autoridades de la UE

### 📋 Cómo hacer los términos legibles (sin sacrificar la protección)
El formato de tabla resumen + términos completos que cumple con la obligación de transparencia sin asustar al usuario.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Términos de servicio, política de uso, plataformas digitales, DSA, derecho digital',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Onboarding de clientes nuevos: el proceso que activa al usuario en 7 días y reduce el churn temprano',
                'description'       => 'Diseña el proceso de onboarding de nuevos clientes que los lleva al primer valor en los primeros 7 días, reduce el churn en los primeros 90 días y crea el hábito de uso que genera retención. Con la secuencia de touchpoints, los criterios del aha moment y cómo medir la activación.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Success con experiencia diseñando procesos de onboarding que han reducido el churn en los primeros 90 días de 25% a 8% y aumentado la activación del 40% al 75%.

Contexto:
- Tipo de producto: [SaaS / app / plataforma / servicio / otro]
- Tiempo hasta el primer valor (actual): [inmediato / días / semanas / no lo sé]
- Precio: [€/mes o €/año]
- Onboarding actual: [ninguno / solo email de bienvenida / calls de onboarding / in-app / mixto]
- Mayor causa de churn en los primeros 90 días: [no entienden el producto / no lo usan / no ven valor / otro]

## Proceso de Onboarding — [Producto]

### 🎯 El aha moment: lo primero que debes definir

El "aha moment" es el momento exacto en que el usuario experimenta por primera vez el valor principal de tu producto.

No es cuando se registra.
No es cuando termina el tutorial.
Es cuando piensa "esto sí que me resuelve el problema."

**Cómo encontrar tu aha moment:**
Analiza a tus mejores clientes (los que llevan >12 meses y tienen alto NPS):
- ¿Qué hicieron en sus primeros 7 días que los que se fueron no hicieron?
- ¿Cuándo fue la primera vez que usaron la feature principal?
- ¿Cuál fue la primera semana en que el uso fue diario o recurrente?

La intersección de esas respuestas es tu aha moment.

**Ejemplos de aha moments conocidos:**
- Slack: enviar y recibir el primer mensaje con el equipo
- Dropbox: añadir un archivo y verlo en otro dispositivo
- Canva: publicar el primer diseño terminado

### 📅 La secuencia de onboarding en 7 días

**Día 0 — El momento del registro:**
- Configuración mínima viable para llegar al aha moment (no el perfil completo)
- In-app guided tour solo de los pasos necesarios para la primera acción
- El primer "quick win": algo que el usuario pueda completar en <5 minutos

**Email Día 0 (inmediatamente tras el registro):**
```
Asunto: [Nombre], tu cuenta de [producto] está lista — empieza aquí

Hola [Nombre],

Para sacarle el máximo a [producto], el primer paso es [la acción más importante].

→ [CTA: Haz tu primera X]

Aquí está todo lo que necesitas para empezar en 5 minutos: [link al quick start]

[Firma]
```

**Días 1-3 — Email de activación:**
Si el usuario no ha completado el aha moment, un email que identifica el punto de abandono y lo guía al siguiente paso.

**Día 3 — Check-in de CS (para planes de precio medio-alto):**
Llamada de 15 minutos o email personalizado: "¿Cómo va el setup? ¿Hay algo en lo que podamos ayudarte?"

**Día 7 — Email de milestone:**
Si llegaron al aha moment: celebración + presentación del siguiente nivel de uso.
Si no llegaron: outreach directo para entender el bloqueo.

### 📊 Las métricas de onboarding

| Métrica | Qué mide | Objetivo |
|---------|---------|---------|
| Time to aha moment | Tiempo desde registro hasta el aha | <[N días] |
| Activation rate (7 días) | % de registros que completaron el aha moment | >50% |
| Activation rate (30 días) | % activos al día 30 | >65% |
| Churn rate (90 días) | % que cancela en los primeros 90 días | <10% |
| Onboarding completion | % que completa el setup inicial | >70% |

### 🔧 Cómo reducir el time-to-value sin simplificar el producto
Las 3 técnicas de progressive disclosure que muestran la complejidad solo cuando el usuario está listo para ella.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Onboarding, activación, churn reduction, customer success, SaaS',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Productividad para freelancers: el sistema de gestión del tiempo que separa el trabajo cliente del trabajo en tu negocio',
                'description'       => 'Diseña el sistema de gestión del tiempo freelance que equilibra el trabajo de cliente (que paga las facturas hoy) con el trabajo en tu negocio (que construye el futuro). Con el time blocking semanal, el tracking de horas no facturables y el sistema de revisión que evita el modo apagafuegos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach freelance con 10 años de experiencia ayudando a profesionales independientes a pasar de trabajar 60h/semana con ingresos irregulares a trabajar 40h con ingresos predecibles y tiempo para el crecimiento del negocio.

Mi situación:
- Tipo de servicio freelance: [describe]
- Horas trabajadas a la semana (estimado): [N horas]
- % del tiempo que es trabajo de cliente (facturado): [X%]
- % del tiempo en administración, ventas y marketing del negocio: [X%]
- Mayor problema: [siempre en modo reactivo / nunca tiempo para prospecting / trabajo en el negocio solo cuando falta trabajo / agotamiento / otro]

## Sistema de Productividad Freelance — [Tu negocio]

### 🧠 El diagnóstico: por qué el freelance siempre está ocupado pero no siempre avanza

El problema central del freelance no es trabajar poco — es trabajar sin estructura:
- Cuando hay mucho trabajo de cliente: todo el tiempo es facturado. El negocio no crece.
- Cuando hay poco trabajo: el tiempo se va en búsquedas de urgencia de clientes nuevos.

La solución: **tiempo bloqueado para el negocio independientemente del nivel de ocupación.**

### 📅 El sistema de time blocking semanal para freelancers

**El principio de los 3 tipos de tiempo:**
1. **Tiempo de cliente:** trabajo facturado — lo que paga las facturas
2. **Tiempo de negocio:** ventas, marketing, prospecting, sistemas — lo que hace crecer
3. **Tiempo de operaciones:** admin, contabilidad, emails — lo necesario para funcionar

**La distribución objetivo:**

| Tipo | % del tiempo | Horas/semana (40h) |
|------|-------------|-------------------|
| Trabajo de cliente | 60-70% | 24-28h |
| Negocio (crecimiento) | 20-25% | 8-10h |
| Operaciones (admin) | 10-15% | 4-6h |

**Si estás al 90%+ de trabajo de cliente:**
Tienes el problema de capacidad — necesitas o subir precios, o subcontratar, o decir que no a trabajo.

**El calendario semanal tipo:**
```
Lunes a miércoles: bloques de trabajo de cliente (deep work, sin reuniones antes de las 11h)
Jueves mañana: trabajo de negocio (prospecting, marketing, sistema)
Jueves tarde: admin (facturas, emails, contabilidad)
Viernes: trabajo de cliente (mañana) + revisión semanal (tarde)
```

### 🎯 La revisión semanal (45 min todos los viernes)

**La pregunta más importante de la revisión:**
"¿Qué habré hecho esta semana que me acerque a donde quiero estar en 12 meses?"

Si la respuesta es solo "cumplí con los clientes", el negocio no está avanzando.

**Agenda de la revisión semanal:**
1. ¿Completé lo comprometido con los clientes? (10 min)
2. ¿Hice el trabajo de negocio planificado? ¿Por qué sí/no? (10 min)
3. ¿Cuál es el estado del pipeline? ¿Tengo suficiente para el próximo mes? (10 min)
4. ¿Qué ajusto para la próxima semana? (15 min)

### 📊 El tracking de tiempo que revela dónde va realmente el día

**Herramientas:**
- Toggl Track (gratuito para freelancers): categorías por tipo de tiempo
- Harvest: integración con facturación
- Clockify: gratuito y completo

**Las categorías que necesitas:**
- Por cliente (para calcular rentabilidad real)
- Por tipo (facturado / ventas / admin / formación)

**Lo que suele revelar el tracking:**
La mayoría de freelancers descubren que el 20-30% de su tiempo va a admin y comunicación que podrían reducir a la mitad con mejores sistemas.

### 💡 El truco del "tiempo bloqueado en el calendario como si fuera un cliente"
Por qué poner el trabajo de negocio en el calendario con bloque de tiempo (y modo DND activado) es la única forma de que realmente ocurra.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Productividad freelance, time blocking, gestión del tiempo, freelance business',
                'vote_score'        => 41,
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
