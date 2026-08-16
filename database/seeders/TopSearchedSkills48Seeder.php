<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills48Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia omnicanal: integra todos los canales de marketing para una experiencia coherente',
                'description'       => 'Diseña e implementa una estrategia omnicanal que conecte todos los puntos de contacto del cliente —digital y físico— en una experiencia coherente y sin fricciones. Incluye el mapa de customer journey omnicanal, la arquitectura de datos necesaria y los KPIs que miden si la integración funciona realmente.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de marketing digital con experiencia liderando transformaciones omnicanal en retail, banca y telecomunicaciones, sectores donde la fragmentación de canales ha sido históricamente el mayor obstáculo para dar al cliente la experiencia sin fricción que espera en 2025. Has integrado ecosistemas de 8-12 canales simultáneos con una visión unificada del cliente que permite personalizar cada interacción.

Contexto:
- Tipo de empresa y sector: [retail físico + online / SaaS / finanzas / educación / otro]
- Canales activos actualmente: [web / app móvil / email / redes sociales / tienda física / WhatsApp / call center]
- Estado de integración actual: [cada canal funciona de forma independiente / hay integración parcial / quiero mejorar lo existente]
- Principal fricción para el cliente hoy: [tiene que repetir sus datos en cada canal / las promociones no son consistentes / el historial no se comparte entre canales]
- Objetivo principal: [aumentar conversión / mejorar retención / reducir coste de servicio / mejorar NPS]

## Estrategia Omnicanal — [Empresa]

### El test de madurez omnicanal: en qué nivel estás

```
NIVEL 1 — MULTICANAL (silos):
Cada canal tiene su propio equipo, sus métricas y sus campañas.
El cliente que compra en tienda física no es reconocido en la web.
El email no sabe que el cliente acaba de hablar con el call center.
→ El 70% de las empresas están aquí aunque crean que son omnicanal.

NIVEL 2 — CROSS-CHANNEL (canales coordinados):
Las campañas están sincronizadas entre canales.
Hay un CRM centralizado, pero la sincronización en tiempo real es imperfecta.
El cliente no tiene que repetir sus datos en el mismo canal.
→ El objetivo mínimo aceptable.

NIVEL 3 — OMNICANAL REAL (experiencia unificada):
El cliente puede empezar una compra en el móvil, continuarla en el portátil y
completarla en tienda física sin perder el contexto.
Cada interacción alimenta el perfil unificado del cliente y personaliza la siguiente.
Los equipos de marketing, ventas y soporte ven el mismo historial del cliente.
→ El objetivo estratégico.
```

---

### La arquitectura de datos omnicanal: el requisito técnico

**El CDP (Customer Data Platform) como cerebro del sistema:**

```
SIN CDP (arquitectura en silos):
Email list → Mailchimp
CRM → HubSpot
E-commerce → Shopify
App móvil → Firebase
→ Cada plataforma tiene su propia ID del cliente
→ No puedes saber si el mismo cliente está en todas ellas

CON CDP (arquitectura unificada):
Todas las fuentes de datos → CDP → ID unificada del cliente → Activación en todos los canales

Herramientas CDP por presupuesto:
→ <500€/mes: RudderStack (open source), CustomerIO con integraciones
→ 500-2.000€/mes: Segment (Twilio), Klaviyo para e-commerce
→ >2.000€/mes: Adobe Experience Platform, Salesforce Data Cloud

El dato mínimo que debes capturar en cada punto de contacto:
□ Identificador del cliente (email o ID)
□ Canal de origen de la interacción
□ Acción realizada y timestamp
□ Resultado (compra, rebote, conversión, contacto)
```

**Los 5 datos que hacen posible la personalización real:**
```
1. HISTORIAL DE COMPRAS: qué ha comprado, cuándo y en qué canal
2. HISTORIAL DE INTERACCIONES: emails abiertos, páginas visitadas, soporte contactado
3. PREFERENCIAS DECLARADAS: qué categorías le interesan, frecuencia de contacto deseada
4. ESTADO EN EL CICLO DE VIDA: nuevo cliente / recurrente / en riesgo de churn / perdido
5. CANAL PREFERIDO: dónde convierte mejor cada segmento de clientes
```

---

### El customer journey omnicanal: mapearlo antes de optimizarlo

**Plantilla de customer journey omnicanal:**

```
FASE: DESCUBRIMIENTO
Canales relevantes: Google Ads / Meta Ads / SEO / redes sociales / boca a boca
Experiencia ideal: El anuncio que ve el cliente en Instagram lleva a una landing
  personalizada para ese segmento, no a la home genérica.
Fricción actual en tu empresa: [describe]
Dato que capturar: utm_source, canal de primer contacto, página de entrada

FASE: CONSIDERACIÓN
Canales relevantes: Web, email, comparadores, reseñas, WhatsApp
Experiencia ideal: Si el cliente visita la página de precios 3 veces sin convertir,
  recibe automáticamente un email con una comparativa o un caso de éxito.
Fricción actual: [describe]
Dato que capturar: páginas vistas, tiempo en página de precios, contenido consumido

FASE: DECISIÓN
Canales relevantes: Web, app, tienda física, chat
Experiencia ideal: El cliente que tiene el carrito abandonado recibe:
  1h después → push notification en la app
  24h después → email con el carrito y reseñas del producto
  48h después → SMS si no ha abierto el email
Fricción actual: [describe]
Dato que capturar: abandono de carrito, motivo si se declara, canal de reconversión

FASE: COMPRA
Experiencia ideal: Mismos precios y promociones en todos los canales.
  Confirmación de pedido en el canal preferido del cliente (email/WhatsApp).
Fricción actual: [describe]

FASE: POSTVENTA
Canales relevantes: Email, app, WhatsApp, call center, tienda física
Experiencia ideal: El agente de soporte ve el historial completo: qué compró,
  qué páginas visitó, si ha habido incidencias anteriores. Sin preguntas repetidas.
Fricción actual: [describe]
```

---

### Los 5 casos de uso omnicanal con mayor ROI

**Caso 1: Secuencia de recuperación de carrito multi-canal**
```
Trigger: abandono de carrito con email conocido
T+1h:  Push notification en app (si la tiene instalada)
T+24h: Email de recuperación con foto del producto + reseñas
T+72h: SMS o WhatsApp si no ha abierto el email
T+7d:  Email final con descuento o incentivo de urgencia

Resultado esperado: recuperación del 10-20% de carritos abandonados
(vs. 5-8% con solo email)
```

**Caso 2: Bienvenida personalizada por canal de adquisición**
```
Cliente llega desde:
→ Instagram Ads → secuencia de onboarding con contenido visual/stories
→ Google SEO → secuencia educativa sobre el problema que buscaba
→ Referido → email de bienvenida que menciona a quien lo refirió

Resultado: la personalización del primer email aumenta la apertura un 25-40%
```

**Caso 3: Alertas de churn y reactivación proactiva**
```
Si el cliente no ha interactuado en [X días según el benchmark de tu sector]:
→ Email con contenido de valor o novedad relevante (no descuento inmediato)
→ Si no abre: push notification o SMS
→ Si no responde: asignación automática a un comercial para llamada de check-in

Resultado: reduce el churn pasivo un 15-25%
```

---

### KPIs del omnicanal: qué medir y cómo

| KPI | Definición | Herramienta | Objetivo |
|-----|-----------|------------|---------|
| Single Customer View (%) | % de clientes con perfil unificado en todos los canales | CDP / CRM | >80% |
| Cross-channel conversion lift | Conversión de clientes contactados en 2+ canales vs. 1 solo | A/B test | +15-30% vs. single channel |
| Attribution accuracy | % de conversiones atribuidas vs. last-click | GA4 data-driven / Northbeam | <20% de conversiones "sin atribuir" |
| Churn por canal | Qué canal de adquisición genera clientes que más retienen | CRM + cohort analysis | Identificar canal con mayor LTV |
| NPS post-interacción omnicanal | Satisfacción tras una interacción que cruzó canales | Encuesta post-resolución | >50 NPS |
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar e implementar una estrategia de marketing omnicanal coherente',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Optimización de PostgreSQL: índices, query planning y EXPLAIN ANALYZE para el 80% de los problemas',
                'description'       => 'Domina las técnicas de optimización de PostgreSQL que resuelven la mayoría de los problemas de rendimiento: cómo leer el output de EXPLAIN ANALYZE, qué índices crear (y cuáles eliminar), cómo optimizar queries lentas y cuándo es un problema de configuración de la base de datos y no del query.',
                'prompt_content'    => <<<'PROMPT'
Eres un DBA y ingeniero de backend con 10 años de experiencia optimizando PostgreSQL en producción para aplicaciones con millones de registros y decenas de queries por segundo, donde la diferencia entre un query de 3 segundos y uno de 50 milisegundos puede ser un índice, un tipo de datos incorrecto o el query planner tomando una decisión subóptima.

Contexto:
- Versión de PostgreSQL: [14 / 15 / 16 / otra]
- Tamaño de la base de datos: [MB / GB / TB]
- Tipo de carga: [OLTP — muchas lecturas/escrituras pequeñas / OLAP — queries analíticos sobre grandes volúmenes / mixta]
- Síntoma principal: [queries lentos en producción / alto uso de CPU / bloqueos y deadlocks / crecimiento descontrolado de la BD]
- Herramientas de monitoring disponibles: [pg_stat_statements / pganalyze / Datadog / nada]

## Optimización de PostgreSQL — Guía Práctica

### Paso 1: Identifica los queries que más impacto tienen

**Activar pg_stat_statements (la herramienta más importante):**
```sql
-- En postgresql.conf o superuser:
CREATE EXTENSION IF NOT EXISTS pg_stat_statements;

-- Top 10 queries más lentos por tiempo total acumulado:
SELECT
  round(total_exec_time::numeric, 2) AS total_ms,
  round(mean_exec_time::numeric, 2)  AS mean_ms,
  calls,
  round((total_exec_time / sum(total_exec_time) OVER ()) * 100, 2) AS percentage,
  left(query, 120) AS query_preview
FROM pg_stat_statements
ORDER BY total_exec_time DESC
LIMIT 10;

-- Resetear estadísticas (útil después de un deploy o cambio de índice):
SELECT pg_stat_statements_reset();
```

**Los 3 queries que siempre debes revisar primero:**
```sql
-- 1. Queries con alto tiempo medio (lentos en cada ejecución):
SELECT query, mean_exec_time, calls
FROM pg_stat_statements
WHERE mean_exec_time > 100  -- más de 100ms por ejecución
ORDER BY mean_exec_time DESC
LIMIT 20;

-- 2. Queries con alto tiempo total (los que más CPU consumen):
SELECT query, total_exec_time, calls
FROM pg_stat_statements
ORDER BY total_exec_time DESC
LIMIT 10;

-- 3. Queries que hacen muchas llamadas (candidatos a caching):
SELECT query, calls, mean_exec_time, total_exec_time
FROM pg_stat_statements
ORDER BY calls DESC
LIMIT 10;
```

---

### Paso 2: Leer EXPLAIN ANALYZE — el diagnóstico del query

**Los nodos que más debes conocer:**

```sql
EXPLAIN (ANALYZE, BUFFERS, FORMAT TEXT) SELECT ...;

-- SEÑALES DE ALARMA en el output:

-- 1. Seq Scan en tabla grande:
"Seq Scan on orders (cost=0.00..15420.00 rows=750000 width=60)"
→ Lee toda la tabla sin índice. Si la tabla tiene >10.000 filas y filtras por columna → necesitas un índice.

-- 2. Rows estimados muy distintos de los reales:
"Seq Scan on users (cost=... rows=100 ...) (actual rows=85432 ...)"
→ El planner creía que eran 100 filas, eran 85.000. → Ejecuta ANALYZE users; para actualizar estadísticas.

-- 3. Hash Join vs. Nested Loop:
"Hash Join" → eficiente para joins de tablas grandes
"Nested Loop" con tabla grande en el inner → puede ser muy costoso; revisa si hay índice en la columna de join

-- 4. Buffers: hit vs. read
"Buffers: shared hit=4502 read=8203"
→ "read" significa lectura de disco (lento). Si el ratio read/(hit+read) es alto → aumenta shared_buffers.
```

**Flujo de diagnóstico con EXPLAIN ANALYZE:**
```
PASO 1: Ejecuta el query con EXPLAIN (ANALYZE, BUFFERS)
PASO 2: Busca el nodo con el "actual time" más alto → ahí está el cuello de botella
PASO 3: Identifica si el problema es:
  a) Seq Scan en tabla grande → crear índice
  b) Rows estimación incorrecta → ANALYZE + pg_statistics
  c) Hash Join sin índice → índice en columna de join
  d) Sort costoso → índice de ordenación o work_mem
  e) Muchos "read" en buffers → aumentar shared_buffers o añadir RAM
```

---

### Paso 3: Índices — qué crear, qué evitar y cuándo borrar

**Los tipos de índice más útiles:**

```sql
-- B-tree (el estándar para =, <, >, BETWEEN, ORDER BY):
CREATE INDEX CONCURRENTLY idx_orders_user_id ON orders(user_id);
-- CONCURRENTLY: crea el índice sin bloquear lecturas/escrituras en producción

-- Índice parcial (solo indexa filas que cumplen una condición):
-- Ahorra espacio y es más eficiente si solo consultas esas filas
CREATE INDEX idx_orders_pending ON orders(created_at)
WHERE status = 'pending';

-- Índice compuesto (para queries que filtran por múltiples columnas):
-- El orden importa: poner primero la columna de mayor selectividad
CREATE INDEX idx_orders_user_status ON orders(user_id, status);
-- Útil para: WHERE user_id = X AND status = 'active'
-- NO útil para: WHERE status = 'active' (sin user_id en el WHERE)

-- Índice de cobertura (covering index): incluye columnas extra para evitar ir a la tabla
CREATE INDEX idx_orders_user_covering ON orders(user_id) INCLUDE (total, created_at);
-- Si el query solo necesita user_id, total y created_at → Index-Only Scan (más rápido)

-- GIN para búsqueda de texto completo y arrays:
CREATE INDEX idx_products_search ON products USING GIN(to_tsvector('spanish', name || ' ' || description));
```

**Los índices que debes eliminar:**
```sql
-- Índices duplicados (mismo conjunto de columnas en el mismo orden):
SELECT indexname, indexdef
FROM pg_indexes
WHERE tablename = 'orders'
ORDER BY indexname;

-- Índices que nunca se usan (llevan más de 2 semanas en producción sin uso):
SELECT schemaname, tablename, indexname, idx_scan
FROM pg_stat_user_indexes
WHERE idx_scan = 0
  AND indexname NOT LIKE '%_pkey'  -- nunca borres la primary key
ORDER BY schemaname, tablename;

-- Un índice no usado consume espacio y ralentiza los INSERTs/UPDATEs.
-- Bórralo si llevas >30 días de producción sin que aparezca en idx_scan.
```

---

### Paso 4: Los 5 problemas más frecuentes y su solución

**Problema 1: N+1 queries desde el ORM**
```sql
-- Síntoma: 1.000 queries iguales que se ejecutan en ráfaga
-- En pg_stat_statements: calls=50.000 con el mismo query parameterizado

-- Solución en el ORM (ejemplo Eloquent Laravel):
-- ❌ N+1: Order::all() → luego $order->user en cada iteración
-- ✅ Eager loading: Order::with('user', 'items')->get()

-- Solución en SQL puro: usa JOIN en lugar de subquery separada
SELECT o.*, u.name, u.email
FROM orders o
JOIN users u ON u.id = o.user_id
WHERE o.status = 'pending';
```

**Problema 2: Consultas de rangos de fecha sin índice**
```sql
-- ❌ LENTO: función en la columna → el índice no se puede usar
SELECT * FROM orders WHERE EXTRACT(YEAR FROM created_at) = 2024;

-- ✅ RÁPIDO: comparación directa → usa el índice en created_at
SELECT * FROM orders
WHERE created_at >= '2024-01-01' AND created_at < '2025-01-01';
```

**Problema 3: LIKE con wildcard al inicio**
```sql
-- ❌ No usa el índice B-tree:
SELECT * FROM products WHERE name LIKE '%laptop%';

-- ✅ Usa índice GIN con pg_trgm para búsqueda parcial:
CREATE EXTENSION IF NOT EXISTS pg_trgm;
CREATE INDEX idx_products_name_trgm ON products USING GIN(name gin_trgm_ops);
SELECT * FROM products WHERE name ILIKE '%laptop%';  -- ahora usa el índice
```

**Problema 4: Estadísticas desactualizadas (el planner toma decisiones incorrectas)**
```sql
-- Actualiza estadísticas de las tablas con mayor escritura:
ANALYZE orders;
ANALYZE users;

-- Para tablas muy grandes con distribución sesgada, aumenta el target:
ALTER TABLE orders ALTER COLUMN status SET STATISTICS 500;
-- (por defecto es 100; 500 da más detalle al planner sobre la distribución)
ANALYZE orders;
```

**Problema 5: Bloqueos (locks) en producción**
```sql
-- Ver bloqueos activos en este momento:
SELECT
  pid,
  now() - pg_stat_activity.query_start AS duration,
  query,
  state,
  wait_event_type,
  wait_event
FROM pg_stat_activity
WHERE (now() - pg_stat_activity.query_start) > interval '5 seconds'
ORDER BY duration DESC;

-- Identificar queries bloqueando a otros:
SELECT
  blocked.pid AS blocked_pid,
  blocked.query AS blocked_query,
  blocking.pid AS blocking_pid,
  blocking.query AS blocking_query
FROM pg_stat_activity AS blocked
JOIN pg_stat_activity AS blocking
  ON blocking.pid = ANY(pg_blocking_pids(blocked.pid))
WHERE cardinality(pg_blocking_pids(blocked.pid)) > 0;
```

---

### Checklist de optimización antes de escalar el servidor

```
ANTES DE COMPRAR MÁS RAM O CPU, VERIFICA:
□ pg_stat_statements instalado y monitorizando las queries más lentas
□ EXPLAIN ANALYZE revisado para el top 5 de queries lentos
□ Tablas con >100k filas tienen índices en las columnas del WHERE y JOIN
□ No hay índices sin uso (idx_scan = 0) después de 30 días en producción
□ Las estadísticas están actualizadas (ANALYZE ejecutado en las últimas 24h en tablas con alta escritura)
□ shared_buffers configurado al 25% de la RAM disponible
□ work_mem configurado entre 16MB-64MB (cuidado con el multiplicador de conexiones)
□ No hay Seq Scans en tablas de más de 50.000 filas en queries frecuentes
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Optimizar el rendimiento de PostgreSQL con índices, EXPLAIN ANALYZE y tuning',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de formularios: patrones UX que maximizan la tasa de completado',
                'description'       => 'Aplica los patrones de diseño de formularios que aumentan la tasa de completado hasta un 40% en formularios complejos: la estructura, el orden de campos, la validación en tiempo real, el manejo de errores y las microcopy que convierten un formulario frustrante en una experiencia fluida.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX researcher y diseñador especializado en formularios y flujos de conversión, con experiencia en pruebas A/B de formularios de onboarding, pago y registro en aplicaciones SaaS, e-commerce y servicios financieros. Has incrementado tasas de completado hasta un 45% simplemente rediseñando la estructura y los mensajes de error de formularios existentes sin cambiar nada del backend.

Contexto:
- Tipo de formulario: [registro / checkout / onboarding / solicitud de servicio / formulario de contacto]
- Número de campos actuales: [número de campos]
- Tasa de completado actual: [% o "no la medimos"]
- Plataforma: [web responsive / app móvil / desktop]
- Principal problema reportado por usuarios: [abandono en el campo X / confusión con el campo Y / errores no claros]

## Diseño de Formularios — [Nombre del formulario]

### Principio 1: Elimina antes de diseñar

**El campo más efectivo es el que no existe:**
```
ANTES DE DISEÑAR, PARA CADA CAMPO PREGUNTA:
1. ¿Por qué necesitamos este dato?
2. ¿Cuándo lo necesitamos realmente? (¿ahora o más adelante en el flujo?)
3. ¿Podemos obtenerlo de otra forma sin pedirlo al usuario?
4. ¿Qué pasa si no lo tenemos?

EJEMPLOS DE CAMPOS QUE SUELEN SOBRAR:
❌ Teléfono en formularios de registro donde nunca se llama al usuario
❌ Confirmación de email/contraseña (la validación en tiempo real lo hace obsoleto)
❌ País si ya tienes la IP y el idioma del navegador
❌ Fecha de nacimiento completa cuando solo necesitas verificar si es mayor de edad
❌ "Empresa" en un formulario B2C donde la mayoría no tienen empresa

REGLA EMPÍRICA: Cada campo adicional reduce la tasa de completado un 5-10%.
Un formulario de 8 campos tiene el 40-80% de conversión de uno de 3 campos.
```

---

### Principio 2: Estructura y orden de campos

**El orden óptimo de los campos:**
```
REGLA GENERAL: De lo más fácil y menos invasivo a lo más difícil y más sensible.

INCORRECTO (inicia con lo más difícil):
1. Tarjeta de crédito
2. DNI / NIF
3. Dirección completa
4. Email

CORRECTO (genera momentum con lo fácil):
1. Email (conocido, fácil, bajo compromiso)
2. Nombre (personal pero no invasivo)
3. Contraseña (requiere creatividad, medio)
4. Dirección (más esfuerzo)
5. Datos de pago (mayor compromiso, al final)

Por qué funciona: el usuario ha invertido tiempo en los campos anteriores
(sunk cost effect) → tiene más motivación para completar los campos más difíciles.
```

**Agrupación lógica de campos:**
```
Agrupa los campos por categoría semántica con headers claros:

SECCIÓN 1: "Tu cuenta" — email, contraseña
SECCIÓN 2: "Sobre ti" — nombre, apellidos, teléfono
SECCIÓN 3: "Dirección de envío" — dirección, ciudad, código postal
SECCIÓN 4: "Pago" — número de tarjeta, fecha, CVV

Beneficio: el usuario ve el progreso entre secciones y siente que avanza.
Un formulario largo sin secciones parece más largo de lo que es.

Para formularios de más de 7 campos: considera la paginación (wizard/stepper).
Muestra el progreso: "Paso 2 de 3" o una barra de progreso.
```

---

### Principio 3: Los tipos de campo correctos

**Tabla de mejores prácticas por tipo de dato:**

| Dato a capturar | Tipo de campo óptimo | Lo que evitar |
|-----------------|---------------------|---------------|
| Fecha de nacimiento | 3 selects (día/mes/año) o date picker | Input de texto libre (errores de formato) |
| País | Select con búsqueda | Lista desplegable sin búsqueda con 200 países |
| Teléfono | Input con selector de prefijo país | Input texto sin formato |
| Contraseña | Input password + botón "mostrar" | Campo de solo texto por usabilidad |
| Importe monetario | Input numérico con símbolo de moneda | Input texto que acepta "ciento veinte euros" |
| Género | Opciones de radio button o select inclusivo | Solo "Hombre/Mujer" si no es estrictamente necesario |
| Número de tarjeta | Input que formatea automáticamente (XXXX XXXX XXXX XXXX) | Input de texto plano sin formato |

---

### Principio 4: Validación y mensajes de error

**La validación en tiempo real — el cambio con mayor impacto:**
```
VALIDACIÓN INCORRECTA (en el submit):
1. Usuario rellena todo el formulario
2. Hace click en "Enviar"
3. 5 errores aparecen arriba de golpe
4. El usuario tiene que volver a encontrar cada campo con error
5. Frustración máxima → abandono

VALIDACIÓN CORRECTA (inline, onBlur):
1. El usuario sale de un campo
2. Si hay error → aparece inmediatamente debajo del campo
3. Si está correcto → muestra un ✓ verde
4. El usuario corrige campo a campo mientras avanza
5. El submit final es solo una confirmación

Implementación:
- Valida onBlur (cuando el usuario sale del campo), no onChange (demasiado agresivo)
- Excepción: confirmación de email/contraseña puede validar onChange una vez que el
  segundo campo tiene al menos la misma longitud que el primero
```

**Los mensajes de error que no frustran:**
```
PRINCIPIOS PARA MENSAJES DE ERROR EFECTIVOS:

1. ESPECÍFICO, no genérico:
❌ "Email inválido"
✅ "El email debe incluir @ y un dominio (por ejemplo, nombre@empresa.com)"

2. HUMANIZADO, no técnico:
❌ "Error 422: formato de campo incorrecto"
✅ "Este número de tarjeta no parece correcto. Revísalo e inténtalo de nuevo."

3. ORIENTADO A LA SOLUCIÓN:
❌ "Contraseña débil"
✅ "Añade al menos un número y un carácter especial para hacer la contraseña más segura"

4. POSICIÓN: siempre debajo del campo con error, nunca arriba del formulario
5. COLOR: rojo para errores, verde para confirmados — nunca al revés
6. ÍCONO + TEXTO: el ícono solo no es suficiente para usuarios con daltonismo
```

---

### Principio 5: Microcopy que convierte

**Los textos pequeños con gran impacto:**

```
1. PLACEHOLDER TEXT (texto de ejemplo dentro del campo):
❌ "Email" (inútil, ya lo dice el label)
✅ "nombre@empresa.com" (muestra el formato esperado)

2. ETIQUETAS DE CAMPO:
❌ Dentro del campo (desaparecen al escribir → el usuario olvida qué campo es)
✅ Encima del campo siempre visibles

3. TEXTO DE AYUDA BAJO EL CAMPO (helper text):
→ Para campos que generan duda: "Tu contraseña debe tener mínimo 8 caracteres, 1 número y 1 símbolo"
→ Para campos sensibles: "Solo usaremos tu teléfono para confirmar pedidos, nunca para publicidad"
→ Aparece de forma constante (no solo al hacer hover)

4. BOTÓN DE SUBMIT:
❌ "Enviar" / "Aceptar" / "Continuar" (genérico, no indica qué pasa)
✅ "Crear mi cuenta gratis" / "Confirmar pedido" / "Empezar la prueba de 14 días"
→ El texto del botón debe describir el resultado de la acción

5. TEXTO LEGAL:
❌ Párrafos de texto legal antes del botón que bloquean el flujo visual
✅ Un enlace discreto: "Al registrarte aceptas los Términos de uso y la Política de privacidad"
```

---

### Checklist de revisión de un formulario

```
ESTRUCTURA:
□ El número de campos es el mínimo necesario (eliminé al menos 1 campo)
□ El orden va de lo más fácil/menos invasivo a lo más difícil/sensible
□ Hay agrupación visual si hay más de 5 campos
□ Si hay más de 7 campos: está paginado con indicador de progreso

CAMPOS Y TIPOS:
□ Los tipos de campo son los correctos para cada dato
□ Los placeholders muestran ejemplos de formato, no repiten el label
□ Las etiquetas están siempre visibles (no son placeholders que desaparecen)

VALIDACIÓN Y ERRORES:
□ La validación ocurre onBlur, no solo en el submit
□ Los mensajes de error están bajo cada campo, son específicos y orientados a la solución
□ Los campos correctos muestran confirmación visual (✓)

MICROCOPY:
□ El botón de submit describe la acción (no solo "Enviar")
□ Los campos sensibles tienen texto de ayuda que explica por qué se piden
□ El texto legal no interrumpe el flujo visual principal

ACCESIBILIDAD:
□ Todos los campos tienen label explícito (no solo placeholder)
□ El orden de tabulación con Tab es lógico y fluye de arriba a abajo
□ Los errores son distinguibles por texto e ícono, no solo por color
□ El formulario funciona con teclado sin necesidad de ratón
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar formularios que maximizan la tasa de completado y minimizan el abandono',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta enterprise: cómo vender a grandes empresas con múltiples stakeholders y comités de compra',
                'description'       => 'Domina el proceso de venta enterprise: cómo mapear y gestionar a múltiples stakeholders, navegar los procesos de aprobación internos y mantener el momentum en ciclos de venta de 6-18 meses. Incluye el mapa de poder organizacional, la estrategia de multithreading y las herramientas para gestionar oportunidades complejas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Account Executive con 12 años de experiencia en ventas enterprise a empresas del IBEX 35 y Fortune 500, con tickets medios de 100.000€ a 2M€ anuales y ciclos de venta de 6 a 24 meses. Has cerrado deals en los que el proceso de aprobación involucraba hasta 14 stakeholders y 3 comités de decisión, y has aprendido que la diferencia entre ganar y perder un deal enterprise pocas veces está en el producto y casi siempre está en la política interna.

Contexto:
- Tipo de solución: [SaaS enterprise / software on-premise / servicios profesionales / hardware + software]
- Tamaño del cliente objetivo: [número de empleados / facturación / sector]
- Ticket medio de oportunidades enterprise: [€ ARR o precio de proyecto]
- Ciclo de venta habitual: [meses]
- Principal dificultad: [acceder al decision maker / mantener el momentum / competir con el incumbente / proceso de compras complejo]

## Metodología de Venta Enterprise — [Empresa vendedora]

### El mapa de poder organizacional: quién es quién

**Los 5 roles en un comité de compra enterprise:**

```
1. ECONOMIC BUYER (EB) — quien tiene el presupuesto
→ Suele ser el CFO, CEO o el director de negocio del área
→ Raramente en las primeras reuniones — tu trabajo es llegar a él
→ Se preocupa por: ROI, riesgo, coste total de propiedad (TCO), impacto en el P&L

2. TECHNICAL BUYER (TB) — quien evalúa si encaja técnicamente
→ CTO, arquitecto de sistemas, IT director, CISO
→ Tiene poder de veto aunque no tiene el presupuesto
→ Se preocupa por: seguridad, integraciones, escalabilidad, coste de implementación

3. USER BUYER (UB) — quien lo va a usar en el día a día
→ El mánager del equipo que usará el producto
→ Tiene influencia sobre el EB y el TB por su conocimiento del problema
→ Se preocupa por: facilidad de uso, adopción del equipo, cambio de proceso

4. CHAMPION — tu aliado dentro de la organización
→ Alguien que quiere que la compra se haga y está dispuesto a trabajar para ello
→ Te da información interna: presupuesto real, historias de éxito y fracaso anteriores
→ Sin champion, pierdes el deal (el vendedor no puede estar en todas las reuniones internas)

5. BLOCKER — quien no quiere que se haga la compra
→ Puede ser el competidor interno (quien usa la solución actual), el IT conservador o el CFO que no ve el ROI
→ Tu trabajo: convertirlo en neutral o en champion si es posible;
  si no, rodearle con los demás stakeholders
```

**Plantilla de mapa de stakeholders:**
```
OPORTUNIDAD: [Empresa] — [Producto/Servicio]
DEAL SIZE: [€] | CLOSE DATE ESTIMADA: [mes/año]

STAKEHOLDER MAP:
┌──────────────────┬────────────────────┬───────────────┬──────────────────────┐
│ Nombre           │ Cargo              │ Rol en compra │ Nivel de apoyo (1-5) │
├──────────────────┼────────────────────┼───────────────┼──────────────────────┤
│ [Nombre]         │ CFO                │ EB            │ 3 — neutral          │
│ [Nombre]         │ CTO                │ TB            │ 4 — pro              │
│ [Nombre]         │ Dir. Operaciones   │ Champion      │ 5 — activo           │
│ [Nombre]         │ Dir. Compras       │ Blocker       │ 2 — escéptico        │
└──────────────────┴────────────────────┴───────────────┴──────────────────────┘

SITUACIÓN DEL PRESUPUESTO: [aprobado / en aprobación / sin presupuesto formal / proyecto de 2026]
COMPETIDORES EN EL PROCESO: [nombres de los proveedores alternativos que evalúan]
```

---

### Multithreading: por qué confiar en un solo contacto te hace perder el deal

```
EL RIESGO DEL SINGLE-THREAD:
→ Tu único contacto sale de la empresa → el deal se cae
→ Tu único contacto no tiene acceso al EB → nunca llegas al decision maker
→ Tu único contacto recibe más presión interna de lo que te dice → el deal muere en silencio

LA ESTRATEGIA DE MULTITHREADING:
Regla mínima: en cualquier deal enterprise de >50.000€, debes tener contacto activo
con al menos 3 personas en diferentes niveles y áreas de la organización.

Cómo hacerlo sin parecer que salteas a tu contacto principal:
"[Nombre], para preparar la mejor propuesta posible me ayudaría mucho hablar directamente
con el equipo técnico sobre los requerimientos de integración. ¿Podrías presentarme a
[nombre del CTO]? Puedo hacer que sea una llamada de 30 minutos muy específica."

→ Pide la intro a tu contacto, no contactes directamente sin avisar
→ Cada reunión con un nuevo stakeholder → briefing posterior a tu contacto principal
  (le haces sentir en control, él te da el feedback político real)
```

---

### El proceso enterprise en 6 etapas y qué hacer en cada una

**Etapa 1: Calificación enterprise (semana 1-2)**
```
Preguntas de calificación MEDDPICC:
M — Metrics: ¿qué ROI/impacto esperan conseguir y en qué plazo?
E — Economic Buyer: ¿quién tiene el presupuesto? ¿Ya te reuniste con él?
D — Decision Criteria: ¿en base a qué criterios van a decidir?
D — Decision Process: ¿cuáles son los pasos hasta la firma?
P — Paper Process: ¿quién firma el contrato? ¿hay legal / compras / CISO implicados?
I — Identify Pain: ¿qué problema de negocio concreto quieren resolver?
C — Champion: ¿tienes alguien que trabaja internamente para que la compra suceda?
C — Competition: ¿a quién más están evaluando?

Un deal que no pasa el test MEDDPICC no debería entrar al forecast.
```

**Etapa 2: Acceso al Economic Buyer**
```
La pregunta que siempre funciona:
"[Champion], esta decisión de [€ importe] va a necesitar aprobación del [CFO/CEO/Director].
Para poder hacer una propuesta que responda a sus prioridades, ¿tiene sentido que
tengamos una llamada de 20 minutos con él antes de preparar la propuesta?
¿Podrías organizar esa reunión?"

Si dice "No, ya se lo presento yo":
→ Es una señal de alerta: o no tiene acceso o no quiere que hables con el EB
→ Pregunta: "Entendido. ¿Qué necesita saber el [CFO] para decir sí a este proyecto?
  ¿Cómo puedo ayudarte a preparar esa conversación interna?"
```

**Etapa 3: La propuesta — estructura enterprise**
```
FORMATO DE PROPUESTA PARA COMITÉ:
Ejecutivo (1 página para el EB que lee en 2 minutos):
  → El problema, el impacto económico cuantificado, la solución en 3 líneas, el ROI

Análisis de negocio (3-5 páginas):
  → Benchmark: cómo lo resuelven los competidores del cliente
  → Caso de éxito de un cliente similar (misma industria, mismo tamaño)
  → ROI detallado: modelo financiero con supuestos conservadores

Propuesta técnica (para el TB):
  → Arquitectura de integración
  → Plan de implementación
  → SLAs, seguridad, certificaciones

Términos comerciales:
  → Precio total, modelo de pago, condiciones especiales si las hay
```

**Etapas 4-6: Negociación, aprobación y cierre**
```
NEGOCIACIÓN ENTERPRISE — LAS REGLAS:
1. Nunca concedas en precio sin obtener algo a cambio (expansión de contrato, referencia, pago anticipado)
2. "Aprobación del comité" no es un blocker, es una etapa del proceso — pide la fecha de la próxima reunión del comité
3. Los descuentos tienen fecha de expiración — "esta propuesta es válida hasta el [fecha]"
4. Si te piden un POC (Proof of Concept): defínelo con criterios de éxito escritos y acordados ANTES de empezar

SEÑALES DE QUE EL DEAL VA A CERRARSE:
✅ El EB se involucra directamente
✅ Llegan preguntas de compras/legal sobre el contrato
✅ Piden referencias y te presentan a clientes suyos para llamadas
✅ Preguntan por el plan de implementación y los plazos

SEÑALES DE QUE EL DEAL ESTÁ EN RIESGO:
⚠️ Tu champion no responde con la misma velocidad que antes
⚠️ "Estamos a punto de decidir" durante más de 4 semanas
⚠️ Piden un descuento adicional sin ofrecer nada a cambio
⚠️ El proceso de compras pide cambios de última hora en el contrato
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestionar oportunidades enterprise con múltiples stakeholders hasta el cierre',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión del backlog: de la lista caótica al backlog organizado que el equipo ejecuta',
                'description'       => 'Transforma tu backlog de lista infinita de deseos en una herramienta de toma de decisiones que el equipo entiende, prioriza y ejecuta con confianza. Incluye los frameworks de priorización, la estructura de los ítems del backlog y el proceso de refinamiento que mantiene el backlog manejable y actualizado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia gestionando backlogs en equipos de producto de 5 a 20 personas, en empresas desde early stage hasta scale-up, donde el backlog de "más de 400 ítems sin priorizar" es tan frecuente como devastador para la moral del equipo y la claridad estratégica.

Contexto:
- Tamaño del equipo de producto: [PMs, diseñadores, desarrolladores]
- Estado actual del backlog: [número de ítems / herramienta: Jira/Linear/Notion/otra]
- Principales fuentes de entrada al backlog: [clientes / ventas / stakeholders internos / el propio equipo / datos]
- Problema más frecuente: [demasiados ítems sin prioridad / nadie sabe qué hay en el backlog / los ítems son demasiado grandes / el backlog no refleja la estrategia]
- Cadencia de planning actual: [diaria / semanal / quincenal / mensual]

## Sistema de Gestión de Backlog — [Producto]

### Paso 1: La gran limpieza — antes de organizar, eliminar

**El protocolo de backlog cleanup:**
```
REGLA DE ORO: Un backlog que nadie va a ejecutar en los próximos 6 meses no es un backlog,
es un cementerio de buenas intenciones que contamina la toma de decisiones.

PROCESO DE LIMPIEZA (1 sesión de 2 horas con el equipo de producto):

Para cada ítem del backlog, la pregunta:
"¿Haríamos esto en los próximos 6 meses si es lo más importante que queda?"

→ SÍ de forma inmediata: mantener en el backlog activo
→ QUIZÁS: mover al "cold storage" o "backlog de ideas" (Notion o archivo separado)
→ NO: eliminar directamente (es liberador, no doloroso)

El test de los 6 meses:
Si un ítem lleva más de 6 meses en el backlog sin que nadie lo haya tocado,
las probabilidades de que alguna vez se haga son menores del 5%.
El coste de mantenerlo: contamina la lista, hace que el backlog parezca siempre enorme,
y dificulta que los ítems realmente importantes sean visibles.

OBJETIVO DE LA LIMPIEZA:
→ El backlog activo debería tener el trabajo de 2-3 sprints como máximo en la parte de arriba
→ El resto en "refinamiento pendiente" o "cold storage"
→ Resultado esperado: de 400 ítems a 50-80 ítems bien definidos
```

---

### Paso 2: La estructura de un ítem de backlog bien escrito

**El formato de User Story que el equipo puede ejecutar:**
```
FORMATO ESTÁNDAR:
"Como [tipo de usuario], quiero [acción o funcionalidad],
para poder [beneficio o objetivo]."

INCORRECTO (demasiado técnico, sin contexto de usuario):
"Implementar endpoint REST para exportación de datos CSV con paginación"

CORRECTO (contexto + usuario + valor):
"Como manager de un equipo de 20+ personas, quiero poder exportar los datos de
actividad mensual a CSV, para poder analizarlos en Excel sin depender del equipo de datos."

CAMPOS OBLIGATORIOS EN CADA ÍTEM:
□ Título: claro y descriptivo (no "Mejorar dashboard")
□ User story o descripción del problema
□ Criterios de aceptación: qué tiene que ser cierto para que el ítem esté "done"
□ Contexto / motivación: por qué esto importa ahora (data, feedback de clientes, OKR relacionado)
□ Prioridad: clasificación según el framework de priorización en uso
□ Estimación de complejidad: T-shirt size o story points (opcional pero útil)
□ Dependencias: qué otro ítem o equipo necesita estar listo primero

CRITERIOS DE ACEPTACIÓN — GHERKIN:
DADO [contexto inicial]
CUANDO [acción del usuario]
ENTONCES [resultado esperado]

Ejemplo:
DADO que soy un manager con acceso al módulo de reportes
CUANDO selecciono un rango de fechas y hago clic en "Exportar CSV"
ENTONCES descargo un archivo CSV con las columnas [nombre, fecha, actividad, resultado]
  con todos los registros del rango seleccionado, máximo 10.000 filas
```

---

### Paso 3: Framework de priorización — cómo decidir qué va primero

**RICE Score (el más versátil para SaaS):**
```
RICE = (Reach × Impact × Confidence) / Effort

REACH: ¿A cuántos usuarios beneficia en un trimestre?
→ Número de usuarios que lo usarían (no % estimado, número absoluto)

IMPACT: ¿Cuánto impacta en el usuario o en el negocio?
→ 3 = transformacional | 2 = significativo | 1 = moderado | 0.5 = mínimo | 0.25 = marginal

CONFIDENCE: ¿Cuánto confías en tus estimaciones?
→ 100% = evidencia sólida (datos + investigación de usuarios)
→ 80% = buenas señales (algo de datos + intuición informada)
→ 50% = intuición sin datos claros

EFFORT: ¿Cuántas personas-semana requiere (diseño + desarrollo + QA)?
→ Estimación del equipo, incluye diseño y testing

EJEMPLO:
Feature A: Nueva integración con Salesforce
Reach=500 usuarios | Impact=2 | Confidence=80% | Effort=4 semanas-persona
RICE = (500 × 2 × 0.8) / 4 = 200

Feature B: Mejora del flujo de onboarding
Reach=1.000 nuevos usuarios/trimestre | Impact=3 | Confidence=80% | Effort=3 semanas-persona
RICE = (1.000 × 3 × 0.8) / 3 = 800 → Prioridad más alta
```

**Matriz de 2x2 — para cuando el RICE es demasiado formal:**
```
                ALTO IMPACTO
                     │
          ┌──────────┼──────────┐
          │  Quick   │  Major   │
BAJO      │  Wins    │Projects  │
ESFUERZO ─┤  (Hazlo  │(Planifí- │─ ALTO ESFUERZO
          │  ya)     │ calo)    │
          ├──────────┼──────────┤
          │  Fill-   │  Hard    │
          │  ins     │Slogs     │
          │(Solo si  │(Evitar)  │
          └──────────┴──────────┘
                BAJO IMPACTO

Quick Wins: alto impacto + bajo esfuerzo → máxima prioridad
Major Projects: alto impacto + alto esfuerzo → planificar con OKRs y asignar capacidad
Fill-ins: bajo impacto + bajo esfuerzo → solo cuando no hay nada más urgente
Hard Slogs: bajo impacto + alto esfuerzo → nunca, a menos que sea un requisito legal o contractual
```

---

### Paso 4: El proceso de refinamiento semanal

**El backlog grooming en 60 minutos:**
```
PARTICIPANTES: PM + Tech Lead + (opcional) Diseñador senior
FRECUENCIA: 1 vez por semana, siempre el mismo día y hora
OBJETIVO: que el backlog del próximo sprint esté listo antes del sprint planning

AGENDA (60 min):
[0-10] Review de nuevas entradas de la semana → rápida calificación (sí/no/cold storage)
[10-30] Refinamiento de los 3-5 ítems más próximos al top del backlog:
  → ¿Los criterios de aceptación son claros?
  → ¿El equipo de desarrollo puede hacer una estimación?
  → ¿Hay dependencias no resueltas?
[30-45] Estimación de complejidad de los ítems refinados (Planning Poker o T-shirt)
[45-60] Confirmación del orden de prioridad del top 10

SALIDA DE CADA SESIÓN:
→ Top 10 del backlog tiene criterios de aceptación claros
→ Los ítems del próximo sprint están estimados
→ El sprint planning del lunes es una formalidad, no una sesión de descubrimiento
```

---

### Los 4 tipos de ítem que deben coexistir en el backlog

```
1. FEATURES: nueva funcionalidad que añade valor al usuario
   → 50-60% del capacity del equipo en etapa de crecimiento

2. BUGS: defectos que afectan la funcionalidad existente
   → Clasificados por severidad (P1: bloquea / P2: degradado / P3: cosmético)
   → P1 siempre entra al sprint inmediato, independientemente del planning

3. TECH DEBT: mejoras de arquitectura, refactoring, deuda técnica acumulada
   → 15-20% del capacity del equipo — negociado con el Tech Lead
   → Si se ignora, la velocidad del equipo cae un 30-50% en 12-18 meses

4. RESEARCH: spike o investigación antes de comprometerse a una solución
   → Timeboxed: máximo 2-3 días → resultado: recomendación de solución o descarte
   → Convierte incertidumbre en decisión sin bloquear todo el sprint
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Organizar y priorizar el backlog de producto para que el equipo ejecute con claridad',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Retribución variable e incentivos: diseña bonus y comisiones que motivan sin crear disfunciones',
                'description'       => 'Diseña sistemas de retribución variable —bonus anuales, comisiones de ventas, incentivos de equipo— que alinean el comportamiento individual con los objetivos de la empresa sin generar los efectos secundarios clásicos: gaming de métricas, competencia interna destructiva o desmotivación cuando los objetivos son inalcanzables.',
                'prompt_content'    => <<<'PROMPT'
Eres una consultora de compensación y beneficios con 12 años de experiencia diseñando sistemas de incentivos para empresas de tecnología, consultoría y ventas B2B, donde la retribución variable bien diseñada es la diferencia entre un equipo que optimiza para los resultados correctos y uno que aprende a jugar con el sistema.

Contexto:
- Perfil del equipo para el que diseñas el incentivo: [ventas / customer success / producto / operaciones / directivos]
- Tipo de empresa y etapa: [startup / escala / empresa consolidada]
- Sistema de incentivos actual: [no existe / bonus discrecional / comisiones pero con problemas / queremos rediseñar]
- Principal problema con el sistema actual: [desmotivación / gaming / inequidad / falta de transparencia / alineación incorrecta con objetivos]
- Presupuesto disponible para variable: [% del salario fijo o € totales por persona]

## Sistema de Retribución Variable — [Empresa]

### Principios antes de diseñar ningún número

**Las 5 preguntas que determinan si el sistema funcionará:**
```
PREGUNTA 1 — ¿QUÉ COMPORTAMIENTOS QUEREMOS INCENTIVAR?
→ Un incentivo siempre optimiza para la métrica que mide
→ Incentiva revenue → el equipo perseguirá revenue aunque baje el margen
→ Incentiva volumen de llamadas → el equipo hará más llamadas aunque sean de peor calidad
→ La métrica incorrecta destruye la calidad aunque mejore la cantidad

PREGUNTA 2 — ¿PUEDE EL EMPLEADO INFLUIR DIRECTAMENTE EN LA MÉTRICA?
→ El empleado solo puede estar motivado por métricas bajo su control
→ El bonus ligado al EBITDA de la empresa para un técnico de soporte → no tiene sentido
→ El bonus ligado a la satisfacción de los clientes que atiende → tiene sentido

PREGUNTA 3 — ¿ES MEDIBLE SIN AMBIGÜEDAD?
→ Si hay disputas frecuentes sobre si se alcanzó un objetivo → el sistema falla
→ La métrica debe ser objetiva: número, %, ratio — no valoración subjetiva del manager

PREGUNTA 4 — ¿CUÁL ES LA LÍNEA BASE Y EL OBJETIVO REALISTA?
→ Si el 90% del equipo alcanza el 100% del objetivo todos los trimestres → el objetivo es demasiado fácil
→ Si nadie alcanza el 50% → el objetivo desmotiva en lugar de motivar
→ Objetivo bien calibrado: el 60-70% del equipo alcanza el 100% en un trimestre normal

PREGUNTA 5 — ¿ES TRANSPARENTE Y COMPRENSIBLE?
→ Si el empleado no puede calcular él mismo su bonus con una hoja de cálculo simple → es demasiado complejo
→ Complejidad en incentivos → desconfianza → el incentivo no motiva
```

---

### Modelo de comisiones para equipos de ventas

**La estructura de comisiones en capas (acelerators):**
```
MODELO ESTÁNDAR SaaS CON ACELERADORES:

Base de comisión: X% del ARR cerrado (típico: 8-12% según el sector)

TRAMOS DE ACELERACIÓN:
0% - 50% de cuota alcanzada   → 50% de la comisión base (tasa reducida)
50% - 100% de cuota           → 100% de la comisión base (tasa estándar)
100% - 120% de cuota          → 150% de la comisión base (primer acelerador)
>120% de cuota                → 200% de la comisión base (segundo acelerador)

LÓGICA:
→ Bajo el 50%: el vendedor tiene menos comisión por cada € cerrado para incentivar alcanzar mínimos
→ 50-100%: comportamiento esperado normal
→ Sobre el 100%: los mejores vendedores se ven desproporcionadamente recompensados
→ Resultado: los top performers ganan 3-5x la comisión de los que están en el 70%

EJEMPLO NUMÉRICO:
Cuota trimestral: 200.000€ ARR
Tasa de comisión base: 10%
Target Incentive Compensation (TIC): 20.000€ trimestral

Si cierra 150.000€ (75% de cuota):
→ 0-100k (primeros 50%): 10% × 100k × 50% = 5.000€
→ 100k-150k (siguiente 50-75%): 10% × 50k × 100% = 5.000€
→ Total: 10.000€

Si cierra 240.000€ (120% de cuota):
→ 0-100k: 5.000€
→ 100k-200k: 10.000€
→ 200k-240k (acelerador 150%): 10% × 40k × 150% = 6.000€
→ Total: 21.000€ (5% más que el TIC, pero cerró 20% más de cuota)
```

---

### Modelo de bonus para equipos no comerciales

**Estructura de bonus por objetivos (MBO — Management by Objectives):**
```
COMPONENTES TÍPICOS DEL BONUS MBO:

1. OBJETIVO DE EMPRESA (30% del bonus total):
   → Vinculado a un KPI de empresa: ARR, EBITDA, NPS global
   → Alinea a todo el equipo con los resultados del negocio
   → Se paga o no se paga en bloque: todo o nada, o proporcional al % de consecución

2. OBJETIVO DE EQUIPO (40% del bonus total):
   → Métrica del departamento o equipo: reducción de churn, tasa de activación, tiempo de ciclo
   → Fomenta la colaboración dentro del equipo
   → Proporcional al % de consecución entre 50% y 120%

3. OBJETIVO INDIVIDUAL (30% del bonus total):
   → 2-3 objetivos específicos del rol del empleado
   → Acordados al inicio del periodo con el manager
   → Evaluación: el empleado y el manager comparten la valoración

FÓRMULA DE CÁLCULO:
Bonus = TIB × (% empresa × 30% + % equipo × 40% + % individual × 30%)
TIB = Target Incentive Bonus (el bonus al 100% de consecución)

EJEMPLO:
TIB = 6.000€ | Empresa al 80% | Equipo al 100% | Individual al 110%
Bonus = 6.000 × (0.8 × 0.30 + 1.0 × 0.40 + 1.10 × 0.30)
Bonus = 6.000 × (0.24 + 0.40 + 0.33) = 6.000 × 0.97 = 5.820€
```

---

### Los 4 efectos secundarios más comunes y cómo evitarlos

```
DISFUNCIÓN 1 — GAMING (jugar con las métricas en lugar de trabajar)
Ejemplo: vendedores que retrasan cierres al final del trimestre para el siguiente período
Prevención:
→ Cliffs de bonus que no incentivan la acumulación (pago mensual vs. trimestral)
→ Clawback clause: si el cliente cancela en 90 días, la comisión se devuelve

DISFUNCIÓN 2 — COMPETENCIA INTERNA DESTRUCTIVA
Ejemplo: vendedores que no comparten leads para no ceder comisión
Prevención:
→ Bonus de equipo que representa al menos el 30% del total
→ Reglas de territory y lead assignment claras y públicas

DISFUNCIÓN 3 — DESMOTIVACIÓN POR OBJETIVOS INALCANZABLES
Ejemplo: cuota Q1 tan alta que nadie llega al 70% → el equipo deja de intentarlo
Prevención:
→ Calibración trimestral de cuotas con datos históricos
→ Si >40% del equipo no alcanza el 75% de la cuota → revisión de objetivos a mitad de período

DISFUNCIÓN 4 — INEQUIDAD PERCIBIDA
Ejemplo: dos empleados con el mismo rol y rendimiento reciben bonus diferentes por decisiones
arbitrarias del manager
Prevención:
→ Fórmulas públicas y transparentes — todo el mundo conoce cómo se calcula su bonus
→ Calibración de manager en RRHH antes de comunicar los importes
```

---

### Plantilla de diseño de un sistema de incentivos

```
DISEÑO DE SISTEMA — [Equipo / Rol]

1. OBJETIVO DEL SISTEMA:
   ¿Qué comportamientos o resultados queremos potenciar?

2. MÉTRICAS ELEGIDAS:
   KPI 1: [nombre] — peso: X% — fuente de datos: [herramienta] — frecuencia de medición: [mensual/trimestral]
   KPI 2: [nombre] — peso: Y%
   KPI 3: [nombre] — peso: Z%

3. TARGET INCENTIVE:
   Importe del bonus/comisión al 100% de consecución: [€ o % del salario]
   Forma de pago: [mensual / trimestral / semestral / anual]

4. TABLA DE CONSECUCIÓN:
   <50%: sin bonus
   50-70%: X% del TI
   70-100%: proporcional al % conseguido
   100-120%: 100% + acelerador de X%
   >120%: acelerador adicional de Y%

5. REVISIÓN:
   Fecha de revisión de los objetivos: [trimestral / semestral]
   Qué activa una revisión a mitad de período: [si el equipo está por debajo del X% a mitad]
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar sistemas de retribución variable que alinean comportamiento y resultados',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financiación bancaria para empresas: cómo preparar el dossier de crédito y negociar las mejores condiciones',
                'description'       => 'Aprende a preparar el dossier de crédito que los bancos realmente quieren ver, a entender cómo analizan el riesgo de tu empresa y a negociar con múltiples entidades para obtener las mejores condiciones de financiación en préstamos, líneas de crédito y factoring.',
                'prompt_content'    => <<<'PROMPT'
Eres un director financiero con 15 años de experiencia gestionando la relación bancaria de empresas de 2M€ a 50M€ de facturación en los sectores industrial, tecnológico y de servicios, donde la capacidad de negociar con los bancos desde una posición de conocimiento —en lugar de necesidad— ha marcado la diferencia entre pagar un 4% o un 8% en el mismo préstamo.

Contexto:
- Tamaño de la empresa: [facturación anual aproximada]
- Tipo de financiación que buscas: [préstamo a largo plazo / línea de crédito / factoring / leasing / financiación ICO]
- Importe aproximado: [€]
- Destino de los fondos: [inversión en activo fijo / circulante / adquisición / refinanciación de deuda existente]
- Relación bancaria actual: [número de bancos / principal banco / rating crediticio si lo conoces]

## Dossier de Crédito y Negociación Bancaria — [Empresa]

### Cómo piensa un banco cuando analiza tu solicitud

**Los 5 criterios que todo analista de riesgos evalúa:**
```
CRITERIO 1 — CAPACIDAD DE PAGO (el más importante)
→ ¿Genera la empresa suficiente flujo de caja para pagar la cuota del préstamo?
→ El banco calcula: EBITDA / Deuda financiera total (Leverage ratio)
→ Benchmark aceptable: EBITDA > 3x el servicio anual de la deuda
→ Si tu EBITDA es 500k€ → la deuda total no debería superar los 1,5M€ para ser financiable sin garantías adicionales

CRITERIO 2 — HISTÓRICO (la reputación crediticia)
→ ¿Ha cumplido la empresa sus compromisos anteriores?
→ Impagos o reestructuraciones en el histórico → bandera roja en todos los bancos
→ Historial de pago puntual de cuotas anteriores → palanca en la negociación

CRITERIO 3 — GARANTÍAS (el colchón ante el impago)
→ ¿Tiene la empresa activos que respalden el préstamo si no puede pagar?
→ Activos aceptables como garantía: inmuebles, maquinaria, vehículos, cartera de clientes
→ Aval personal del administrador: el banco lo pedirá en empresas pequeñas — es negociable en empresas con >2 años de beneficios sólidos

CRITERIO 4 — CAPITAL (la solidez financiera)
→ ¿Cuánto capital propio tiene la empresa en relación a la deuda?
→ Ratio de endeudamiento: Deuda total / Patrimonio neto
→ Aceptable: <2. Comprometido: 2-4. En riesgo: >4

CRITERIO 5 — CONDICIONES DEL MERCADO Y DEL SECTOR
→ ¿Es la empresa vulnerable a ciclos sectoriales o a un solo gran cliente?
→ Concentración de clientes: si el 60%+ de la facturación es 1 cliente → riesgo elevado para el banco
```

---

### El dossier de crédito: qué incluir y cómo presentarlo

**Estructura del dossier de crédito ganador:**
```
PORTADA Y RESUMEN EJECUTIVO (1-2 páginas):
→ Descripción breve de la empresa: sector, años de actividad, modelo de negocio
→ Importe solicitado, plazo, destino y forma de pago propuesta
→ Resumen financiero: facturación, EBITDA, deuda actual (los últimos 3 años en una tabla)
→ El resumen ejecutivo lo lee el director de banca — si no convence, el resto no importa

INFORMACIÓN DE LA EMPRESA (2-3 páginas):
→ Estructura societaria y accionariado
→ Equipo directivo con experiencia (el banco financia también al equipo)
→ Clientes principales (sin revelar datos confidenciales — porcentaje de concentración)
→ Posicionamiento competitivo: por qué tiene tracción en el mercado

INFORMACIÓN FINANCIERA HISTÓRICA (3 últimos años):
→ Cuentas anuales completas de los 3 últimos ejercicios (balance + P&L)
→ Tabla de evolución de KPIs:
  │ Concepto          │ 2022 │ 2023 │ 2024 │ Tendencia │
  │ Facturación       │  X   │  Y   │  Z   │ +25%      │
  │ EBITDA            │  X   │  Y   │  Z   │ +18%      │
  │ Margen EBITDA (%) │  X   │  Y   │  Z   │ Estable   │
  │ Deuda financiera  │  X   │  Y   │  Z   │ Controlada│
  │ Patrimonio neto   │  X   │  Y   │  Z   │ Creciendo │

PROYECCIONES FINANCIERAS:
→ 3 años de proyección con los supuestos explicados (no solo los números)
→ Escenario base + escenario conservador
→ Demostrar que incluso en el escenario conservador se puede pagar la deuda

PLAN DE DEVOLUCIÓN:
→ Propuesta concreta: importe, plazo, cuota mensual estimada, periodo de carencia solicitado
→ Cálculo de la cobertura del servicio de la deuda: EBITDA / cuota anual propuesta
→ Si el ratio es >3, lo mencionas explícitamente — es tu principal argumento
```

---

### La estrategia de negociación con múltiples bancos

**El proceso de negociación en 5 pasos:**
```
PASO 1 — PREPARA ANTES DE NECESITAR (6-12 meses antes)
→ No vayas al banco cuando la tesorería está tensa — negocias desde la debilidad
→ Abre líneas de crédito cuando la empresa va bien: el banco dice sí con más facilidad
→ Establece relación con 2-3 bancos diferentes, no solo con uno

PASO 2 — ENVÍA EL DOSSIER A 3-5 BANCOS SIMULTÁNEAMENTE
→ La competencia entre bancos es tu principal palanca
→ Informa a cada banco que estás comparando propuestas ("estamos en proceso con otras entidades")
→ Esto acelera los tiempos y mejora las condiciones ofrecidas

PASO 3 — LA REUNIÓN CON EL DIRECTOR DE BANCA
→ No vayas a preguntar si te darán el préstamo — ve a presentar el proyecto
→ Posicionamiento: "Estamos en expansión y queremos que vuestra entidad sea parte de este crecimiento"
→ Trae el dossier impreso y en digital — la preparación genera confianza

PASO 4 — RECIBE Y COMPARA LAS PROPUESTAS
→ Solicita siempre la TAE (Tasa Anual Equivalente), no solo el tipo de interés nominal
→ Compara también: comisión de apertura, comisiones de disponibilidad en líneas de crédito,
  seguros obligatorios vinculados (a veces añaden más coste que el tipo de interés)
→ Pide siempre la tabla de amortización completa para ver el coste total

PASO 5 — NEGOCIA CON LA MEJOR PROPUESTA COMO PALANCA
→ Con la mejor oferta en mano, vuelve a los otros bancos:
  "Hemos recibido una oferta al 4,5% TAE a 7 años. ¿Podéis mejorarla?"
→ El banco con el que ya tienes relación tiene más incentivo para mejorar y no perderte
→ El límite de mejora: los bancos rara vez se alejan más del 0,5-1% entre ellos en el mismo perfil de riesgo
```

---

### Los productos de financiación por necesidad

| Necesidad | Producto más adecuado | Plazo típico | Ventaja |
|-----------|----------------------|-------------|---------|
| Inversión en maquinaria/equipo | Leasing | 3-7 años | El activo es la garantía; mejora la caja inicial |
| Inversión en inmueble | Hipoteca empresarial | 10-25 años | Largo plazo reduce cuota mensual |
| Financiar circulante (stock, salarios) | Línea de crédito | Renovable anual | Solo pagas por lo que usas |
| Acelerar el cobro de facturas | Factoring / Confirming | Inmediato | Convierte cuentas a cobrar en liquidez inmediata |
| Proyecto de expansión / adquisición | Préstamo a largo plazo | 5-10 años | Tipo fijo posible; mejor planificación |
| Proyectos innovación/digitalización | Líneas ICO + BEI | 5-15 años | Tipos subsidiados; comisiones menores |

---

### Checklist antes de ir al banco

```
□ Cuentas anuales de los últimos 3 años firmadas y depositadas en el Registro Mercantil
□ Declaraciones de IVA e IS de los últimos 2 años (acredita la actividad real)
□ Certificado de estar al corriente con la AEAT y Seguridad Social
□ Posición de deuda actual: listado de préstamos y leasing vigentes con cuota e importe pendiente
□ Justificante del destino de los fondos (factura proforma, contrato de compraventa, business plan)
□ Proyecciones financieras a 3 años con los supuestos documentados
□ Patrimonio personal del administrador si prevén pedir aval personal
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Preparar el dossier de crédito y negociar financiación bancaria para empresas',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Obligaciones legales del comercio electrónico en España: lo que toda tienda online debe cumplir',
                'description'       => 'Conoce todas las obligaciones legales que debe cumplir una tienda online en España: LSSI, RGPD, derechos de los consumidores, cookies, publicidad online y requisitos de la Directiva Omnibus. Incluye las multas por incumplimiento, los textos legales obligatorios y el checklist de cumplimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres una abogada especializada en derecho digital y comercio electrónico con experiencia asesorando a tiendas online, marketplaces y SaaS en España en el cumplimiento de la normativa RGPD, LSSI, LOPDGDD y la legislación de consumidores, habiendo auditado más de 150 comercios electrónicos y acompañado a varios en procedimientos sancionadores de la AEPD y de las Direcciones Generales de Consumo.

Contexto:
- Tipo de negocio online: [tienda e-commerce B2C / marketplace / SaaS / tienda B2B / otro]
- Mercados donde operas: [solo España / España + Europa / también mercados no UE]
- Estado actual de cumplimiento: [nueva tienda que quiere hacerlo bien desde el inicio / tienda existente con dudas / revisión tras una denuncia o aviso]
- Dudas específicas: [política de privacidad / cookies / devoluciones / publicidad / otro]

## Cumplimiento Legal del Comercio Electrónico en España

### Bloque 1: Información obligatoria en la web (LSSI-CE)

**La Ley de Servicios de la Sociedad de la Información exige que toda web con actividad comercial muestre:**

```
AVISO LEGAL — DATOS OBLIGATORIOS:
□ Nombre o denominación social del titular
□ NIF/CIF
□ Domicilio social completo
□ Datos de contacto: email, teléfono (si existe), formulario de contacto
□ Número de inscripción en el Registro Mercantil (si la empresa está inscrita)
□ Si estás inscrito en un registro profesional: número de colegio o registro
□ Datos de la autoridad supervisora (si aplica al sector: farmacia, finanzas, educación)

DÓNDE MOSTRARLOS:
→ En el Aviso Legal (enlace en el pie de página, visible desde todas las páginas)
→ También en el proceso de compra antes de la confirmación del pedido

SANCIONES POR INCUMPLIMIENTO LSSI:
→ Infracción leve: hasta 30.000€
→ Infracción grave: 30.001€ - 150.000€
→ Infracción muy grave: 150.001€ - 600.000€
```

---

### Bloque 2: RGPD y privacidad — los requisitos que más se incumplen

**Política de privacidad — los 10 apartados obligatorios:**
```
1. Identidad y datos del responsable del tratamiento
2. Datos del Delegado de Protección de Datos (si tienes la obligación de nombrarlo)
3. Finalidades del tratamiento: para qué usas cada dato
4. Base legal de cada tratamiento (consentimiento / interés legítimo / contrato / obligación legal)
5. Destinatarios: si compartes datos con terceros (Google Analytics, plataformas de email marketing, pasarelas de pago)
6. Transferencias internacionales: si los datos salen de la UE (ej: servidores en EEUU)
7. Plazos de conservación de los datos
8. Derechos del usuario: acceso, rectificación, supresión, portabilidad, limitación, oposición
9. Cómo ejercer los derechos: email o formulario
10. Derecho a reclamar ante la AEPD (Agencia Española de Protección de Datos)

BASES LEGALES MÁS FRECUENTES EN E-COMMERCE:
→ Gestión del pedido: base contractual (no necesitas consentimiento)
→ Email marketing: consentimiento expreso (casilla sin marcar por defecto)
→ Analytics de comportamiento: consentimiento (el banner de cookies)
→ Cumplimiento de obligaciones fiscales: obligación legal
→ Prevención del fraude: interés legítimo (puede aplicar, con análisis previo)

MULTAS RGPD:
→ Infracciones menos graves: hasta 10M€ o 2% de la facturación anual global
→ Infracciones graves: hasta 20M€ o 4% de la facturación anual global
```

**El banner de cookies — el que cumple la normativa española:**
```
LO QUE DICE LA AEPD (Guía de Cookies 2023):
✅ El banner debe tener botón de "Aceptar" y botón de "Rechazar" al mismo nivel visual
✅ El botón de rechazar debe ser igual de visible que el de aceptar (mismo tamaño, mismo color)
✅ Antes de aceptar: solo las cookies técnicas necesarias deben estar activas
✅ Guardar la preferencia: si el usuario rechaza, no volver a preguntar en 6 meses
✅ El usuario puede cambiar su decisión en cualquier momento

LO QUE ESTÁ PROHIBIDO:
❌ Dark patterns: el botón de rechazar más pequeño, oscuro o difícil de encontrar
❌ Cookie walls: bloquear el contenido completamente hasta que el usuario acepte
❌ Scroll to consent: "al seguir navegando aceptas las cookies" — esto NO es consentimiento válido
❌ Prechecked: las cookies no esenciales marcadas por defecto

HERRAMIENTAS DE GESTIÓN DE CONSENTIMIENTO (CMP):
→ Cookiebot, OneTrust, Axeptio — precios desde 9€/mes
→ Obligatorio si usas Google Analytics 4 o Meta Pixel (necesitas consentimiento previo)
```

---

### Bloque 3: Derechos del consumidor (TRLGDCU y Directiva Omnibus)

**Los derechos que toda tienda B2C debe garantizar:**

```
DERECHO DE DESISTIMIENTO (devolución sin motivo):
→ Plazo: 14 días naturales desde la recepción del producto
→ La tienda debe informar de este derecho ANTES de la compra
→ Si no informa: el plazo se amplía a 12 meses
→ Reembolso: en los mismos medios de pago que usó el cliente, en 14 días
→ Los gastos de devolución pueden ser a cargo del cliente si se indica antes de la compra
→ Excepciones: productos personalizados, perecederos, sellos rotos de higiene/audio/vídeo

GARANTÍA LEGAL (obligatoria, no opcional):
→ 3 años desde 2022 (antes era 2 años) para productos nuevos
→ 2 años para productos de segunda mano si el vendedor informa al consumidor
→ La garantía cubre defectos de conformidad del producto
→ Las "garantías comerciales" adicionales no sustituyen a la garantía legal — la complementan

PRECIOS (Directiva Omnibus — vigente desde 2023):
→ En ofertas y descuentos: debes mostrar el precio más bajo de los últimos 30 días, no el precio de lista
❌ ILEGAL: "Precio original: 100€ → Precio oferta: 50€" si el precio no fue 100€ en los últimos 30 días
✅ LEGAL: "Precio más bajo en los últimos 30 días: 80€ → Precio actual: 50€"
→ Reseñas de consumidores: si las muestras, debes verificar que provienen de compradores reales
```

---

### Bloque 4: Obligaciones adicionales según el tipo de producto

| Sector | Normativa adicional | Requisito clave |
|--------|--------------------|-----------------|
| Alimentación | Reglamento UE 1169/2011 | Información nutricional, alérgenos, etiquetado |
| Juguetes | Directiva 2009/48/CE | Marcado CE, advertencias de seguridad en español |
| Cosméticos | Reglamento UE 1223/2009 | Lista de ingredientes, persona responsable UE |
| Farmacia/parafarmacia | AEMPS | Autorización especial, restricciones de publicidad |
| Venta de alcohol | Ley 17/1970 + autonómica | Prohibición de venta a menores, publicidad restringida |
| Servicios financieros | CNMV / Banco de España | Autorización previa obligatoria |

---

### Checklist de cumplimiento para tiendas online en España

```
DOCUMENTOS LEGALES EN EL PIE DE PÁGINA:
□ Aviso Legal con todos los datos del titular (LSSI)
□ Política de Privacidad completa (RGPD + LOPDGDD)
□ Política de Cookies
□ Condiciones Generales de Compra o Contratación
□ Política de Devoluciones (con el derecho de desistimiento de 14 días)
□ Banner de cookies conforme a la guía AEPD 2023

PROCESO DE COMPRA:
□ El precio final (con IVA incluido) es visible antes de confirmar el pedido
□ Se informa del derecho de desistimiento antes de la compra
□ Hay un paso explícito de aceptación de las condiciones (casilla sin marcar por defecto)
□ El email de confirmación incluye el resumen del pedido y el derecho de desistimiento
□ Los descuentos muestran el precio más bajo de los últimos 30 días (Directiva Omnibus)

PRIVACIDAD:
□ Los formularios de captación de email tienen casilla de consentimiento separada
□ Google Analytics 4 tiene configurado el modo de consentimiento (Consent Mode v2)
□ El CMP (gestor de cookies) bloquea cookies no esenciales hasta obtener consentimiento
□ Hay un Registro de Actividades de Tratamiento actualizado

RECLAMACIONES:
□ Existe un canal de reclamaciones accesible (formulario o email)
□ Si tienes más de 250 empleados o tratas datos sensibles: hay DPO nombrado
□ La web tiene enlace a la plataforma ODR de la UE para resolución de disputas online
   (obligatorio en B2C europeo): https://ec.europa.eu/consumers/odr/
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Cumplir con todas las obligaciones legales de una tienda online en España',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer advisory board: cómo crear y gestionar un grupo de clientes clave que co-diseña el producto',
                'description'       => 'Diseña y gestiona un Customer Advisory Board (CAB) que convierta a tus mejores clientes en co-creadores del producto, generadores de insights estratégicos y embajadores de alto valor. Incluye el proceso de selección, la estructura de las sesiones y cómo convertir el feedback del CAB en decisiones de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP de Customer Success con experiencia construyendo Customer Advisory Boards en empresas SaaS B2B de 5M€ a 50M€ ARR, donde un CAB bien gestionado ha pasado de ser un "club de clientes VIP" a convertirse en una de las fuentes más valiosas de inteligencia competitiva, validación de roadmap y generación de referencias de alto nivel.

Contexto:
- Tipo de empresa y producto: [SaaS B2B / software industria / plataforma de servicios]
- Tamaño del equipo de Customer Success: [número de CSMs]
- ARR actual y segmentos de clientes: [ARR total y distribución enterprise/mid-market/SMB]
- Estado del CAB: [no existe / informal sin estructura / quiero formalizarlo / quiero relanzarlo]
- Objetivo principal: [feedback de producto / co-creación del roadmap / generación de referencias / reducción de churn en el segmento enterprise]

## Customer Advisory Board — [Empresa]

### Qué es y qué NO es un CAB

```
UN CAB BIEN HECHO ES:
✅ Un grupo de 8-15 clientes seleccionados estratégicamente que se reúnen 2-4 veces al año
✅ Un foro donde el CEO/CPO comparte la visión del producto y recibe feedback real sin filtros
✅ Una fuente de insight sobre las tendencias del sector desde la perspectiva de quien las vive
✅ Un mecanismo de fidelización que hace que los clientes miembros se sientan co-propietarios del producto
✅ Una red de referencias de altísima calidad: el 70% de los miembros del CAB refieren a otros

UN CAB NO ES:
❌ Un grupo de focus groups donde preguntas qué funcionalidades quieren
   (ellos piden todo, tú tienes que decidir)
❌ Un foro de quejas de clientes insatisfechos
❌ Un evento de marketing disfrazado de feedback
❌ Una reunión de ventas donde muestras el roadmap para que sigan comprando
❌ Una obligación que cumplen los CSMs llevando a sus clientes a una cena anual
```

---

### Selección de miembros: los criterios que determinan el valor del CAB

**Perfil del miembro ideal:**
```
CRITERIOS OBLIGATORIOS:
□ Es un usuario intensivo del producto (lo usa de forma estratégica, no periférica)
□ Tiene el nivel de cargo suficiente para hablar de problemas de negocio, no solo de funcionalidades
  (ideal: VP, Director, C-level — no el usuario técnico del día a día)
□ Tiene capacidad de decisión sobre la renovación y la expansión del contrato
□ Tiene perspectivas diversas: no todos del mismo sector o del mismo tamaño de empresa

CRITERIOS DESEABLES:
□ Es o puede ser un referente de opinión en su sector
□ Tiene experiencia con competidores (su comparativa es muy valiosa)
□ Ha participado antes en advisory boards o grupos similares (sabe cómo funciona)
□ Tiene relación ya consolidada con el equipo de CS o con el CEO/CPO

LO QUE EVITAR:
❌ Solo clientes 100% satisfechos que no tienen críticas — el CAB pierde valor diagnóstico
❌ Clientes con tickets de soporte abiertos graves — la reunión se convierte en una escalada
❌ Todos del mismo segmento (sector, tamaño, geografía) — pierdes perspectiva
❌ El cliente que solo acepta porque espera un descuento a cambio
```

**Proceso de selección en 3 pasos:**
```
PASO 1 — LISTADO LARGO (CSM y CS leadership):
→ Identifica todos los clientes que cumplen los criterios básicos
→ Criterio de ARR mínimo: suele ser el top 20% de clientes (o los que representan el 80% del ARR)
→ Resultado: 30-50 candidatos

PASO 2 — FILTRO POR EQUILIBRIO ESTRATÉGICO:
→ Diversidad de sector: máximo 2-3 clientes del mismo vertical
→ Diversidad de tamaño: mezcla enterprise, mid-market
→ Diversidad geográfica si operas en varios mercados
→ Representación de casos de uso: que el CAB cubra los principales segmentos del producto
→ Resultado: 15-20 candidatos finales

PASO 3 — INVITACIÓN PERSONALIZADA (CEO o CPO):
→ La invitación la envía el CEO o CPO, nunca el CSM en nombre de la empresa
→ La carta enfatiza que se invita a un número limitado de clientes seleccionados
→ Se explica el compromiso: 3-4 reuniones al año de 2-3 horas
→ Los beneficios para el miembro: acceso anticipado a features, influencia real en el roadmap, red de pares
→ Tasa de aceptación esperada: 60-80% si el perfil está bien seleccionado
```

---

### Estructura de las sesiones del CAB

**Agenda tipo de una reunión de CAB de 2,5 horas:**
```
[0:00 - 0:20] Bienvenida y contexto
→ El CEO/CPO da la bienvenida y recuerda el propósito del CAB
→ Ronda rápida de presentación si hay nuevos miembros
→ Recap del feedback de la última sesión y qué acciones se tomaron
  (mostrar que su feedback tuvo impacto es crítico para la participación futura)

[0:20 - 0:50] Update de negocio y visión
→ El CEO comparte: métricas de crecimiento, logros clave del trimestre
→ Dirección estratégica de los próximos 12 meses
→ El objetivo es contexto, no presentación comercial — los números reales dan credibilidad

[0:50 - 1:30] Sesión de trabajo sobre 1-2 temas estratégicos
→ NUNCA preguntes "¿qué funcionalidades queréis?" — es una pregunta de gestión de producto, no de CAB
→ SÍ pregunta: "¿Cómo está cambiando la forma en que tu equipo [hace X proceso]?"
→ SÍ pregunta: "¿Qué problema de negocio te sigue costando más resolver?"
→ Usa el formato de "roundtable": cada miembro responde → el facilitador sintetiza → todos reaccionan
→ El CPO puede compartir 1-2 iniciativas del roadmap para validar dirección, no para pedir validación

[1:30 - 1:45] Descanso

[1:45 - 2:15] Tema específico a petición del equipo
→ Un reto concreto donde el equipo necesita perspectiva externa
→ Puede ser: nuevos mercados, modelo de precios, propuesta de valor, naming de una feature

[2:15 - 2:30] Próximos pasos y cierre
→ El facilitador resume los 3-5 insights más importantes de la sesión
→ Se confirma cómo se comunicarán los resultados a los miembros
→ Se anuncia la fecha de la próxima reunión
```

---

### Convertir el feedback del CAB en decisiones de producto

**El proceso de síntesis post-sesión:**
```
DENTRO DE LAS 48 HORAS SIGUIENTES:
1. Envía el resumen de insights a todos los miembros del CAB
   → Muestra que escuchaste y comprendiste
   → Incluye: insights principales, preguntas que quedaron abiertas, próximos pasos

2. Comparte los insights con el equipo de producto en el formato:
   "Los miembros del CAB indican que [patrón observado]. Esto refuerza/contradice nuestra hipótesis de [X].
   Acción propuesta: [investigar más / pilotar / incorporar al roadmap]"

3. Clasifica los insights en la matriz:
   ┌─────────────────┬────────────────────────────────────┐
   │ Confirma        │ Menciones de validación de          │
   │ dirección actual│ iniciativas ya en roadmap            │
   ├─────────────────┼────────────────────────────────────┤
   │ Nueva señal     │ Problemas o contexto no anticipados │
   │ relevante       │ que merecen investigación           │
   ├─────────────────┼────────────────────────────────────┤
   │ Ruido           │ Opiniones individuales sin eco en   │
   │                 │ el resto del grupo                  │
   └─────────────────┴────────────────────────────────────┘
```

---

### Los beneficios para los miembros — por qué dicen sí

```
TANGIBLES:
→ Acceso anticipado a nuevas funcionalidades (beta privada)
→ Crédito de producto o descuento en la renovación (discreto — no es el motivo principal)
→ Invitaciones a eventos de la empresa como invitados VIP

INTANGIBLES (los que más valoran):
→ Acceso directo al CEO/CPO — raramente tienen este canal en otras empresas
→ Red de pares: conectan con directivos de empresas similares que son sus iguales
→ Influencia real en la dirección del producto que usan
→ Visibilidad como empresa que forma parte de un grupo selecto (pueden mencionarlo externamente)
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear y gestionar un Customer Advisory Board que co-diseña el producto',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'De freelance a micro-agencia: cuándo y cómo escalar de trabajo en solitario a un pequeño estudio',
                'description'       => 'Identifica el momento correcto para dejar de ser freelance individual y construir una micro-agencia o estudio de 2-5 personas, y ejecuta la transición sin perder rentabilidad ni los clientes que te han dado estabilidad. Incluye las estructuras de equipo, el modelo de precios y los errores más caros del salto.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio para agencias creativas y de servicios digitales con experiencia acompañando a freelancers a construir estudios y agencias de 2 a 20 personas, habiendo visto los patrones que determinan si la transición es exitosa (más tiempo libre, más proyectos, más ingresos) o un fracaso costoso (más estrés, menos margen, clientes perdidos).

Contexto:
- Tipo de servicio freelance: [diseño / desarrollo / marketing / consultoría / fotografía / otro]
- Facturación actual: [€/año aproximado]
- Años como freelance: [número]
- Situación actual: [saturado de trabajo / quiero crecer / quiero proyectos más grandes / quiero más tiempo libre]
- Principal motivación para escalar: [más ingresos / proyectos más ambiciosos / sostenibilidad / salir del burnout]

## De Freelance a Micro-Agencia — [Tu nombre/estudio]

### Las 5 señales de que es el momento de escalar

```
SEÑAL 1 — EL CUELLO DE BOTELLA ERES TÚ:
→ Rechazas proyectos de forma regular porque no tienes capacidad
→ Los proyectos que rechazas van a la competencia que crece gracias a tu exceso de demanda
→ Test: ¿en los últimos 3 meses has rechazado más de 2 proyectos por falta de tiempo?

SEÑAL 2 — TU TARIFA ESTÁ EN EL TECHO DEL MERCADO:
→ Has subido precio varias veces y los clientes siguen aceptando
→ Llegará un punto donde el precio individual no puede crecer más sin un cambio de posicionamiento
→ La micro-agencia justifica precios 2-4x superiores al freelance individual del mismo nivel

SEÑAL 3 — LOS PROYECTOS GRANDES TE SUPERAN EN SOLITARIO:
→ Hay proyectos que te interesan pero necesitarían un equipo para ejecutarlos bien
→ Estás subcontratando de forma reactiva (sin proceso, sin margen, sin calidad consistente)
→ Una micro-agencia te permite ir a por esos proyectos de forma competitiva

SEÑAL 4 — DEPENDES DE TI MISMO 100% Y ESO TE ASUSTA:
→ Si enfermas una semana, el negocio para
→ Si quieres vacaciones, los proyectos se retrasan
→ La salud del negocio = tu disponibilidad personal: eso no es un negocio, es un autoempleo sin red

SEÑAL 5 — TIENES ESTABILIDAD FINANCIERA PARA ABSORBER EL RIESGO INICIAL:
→ El primer año de escalar suele ser más estresante y rentable que en solitario
→ Necesitas al menos 3-6 meses de reservas para absorber los costes fijos de un equipo
→ Si escalar te pone en riesgo financiero inmediato, espera 6-12 meses más
```

---

### Los 3 modelos de micro-agencia y cuál elegir

**Modelo A: El estudio de socio (2 personas complementarias)**
```
ESTRUCTURA: Tú + 1 socio con habilidades complementarias
EJEMPLO: diseñador UX + desarrollador frontend
VENTAJA: mínima complejidad de gestión, sin relación de empleador-empleado, riesgo compartido
DESVENTAJA: elegir mal al socio es el error más caro; necesitas acuerdo muy claro desde el día 1
CUANDO ELEGIRLO: cuando tienes un perfil complementario de confianza con quien ya has trabajado

ACUERDO DE SOCIOS MÍNIMO:
□ Distribución de beneficios (no tiene que ser 50/50)
□ Quién gestiona qué (clientes / finanzas / producción / marketing)
□ Proceso de toma de decisiones en caso de desacuerdo
□ Qué pasa si uno de los dos quiere salir
□ Política de clientes propios de cada socio vs. clientes del estudio
```

**Modelo B: El estudio con colaboradores freelance**
```
ESTRUCTURA: Tú (lead) + red de 3-6 colaboradores freelance especializados
VENTAJA: flexibilidad máxima, sin costes fijos de personal, puedes escalar y reducir según la carga
DESVENTAJA: menor control de calidad, los mejores freelancers son los más solicitados → disponibilidad
CUANDO ELEGIRLO: cuando la demanda es variable y no quieres el riesgo de un empleado fijo

CLAVE DEL ÉXITO:
→ Tienes una red de 6-10 colaboradores pre-vettados (no buscas cuando los necesitas — los tienes listos)
→ Cada colaborador sabe exactamente cómo trabajar contigo: briefing, proceso de revisión, facturación
→ Tu margen sobre el trabajo de los colaboradores: 30-50% del coste de su parte
→ Los clientes contratan el estudio, no a los individuos: el pricing es de agencia, no de freelance individual
```

**Modelo C: El estudio con primer empleado**
```
ESTRUCTURA: Tú + 1 empleado junior/mid
VENTAJA: calidad consistente, el empleado crece con el negocio, construyes activo de valor
DESVENTAJA: coste fijo desde el día 1, responsabilidad legal de empleador, formación inicial costosa
CUANDO ELEGIRLO: cuando tienes contratos de retainer que garantizan X€/mes durante 6+ meses

EL CÁLCULO ANTES DE CONTRATAR AL PRIMER EMPLEADO:
Salario bruto: 25.000€/año
Seguridad Social empresa: ~8.000€/año
Herramientas y espacio: ~2.000€/año
Coste total real: ~35.000€/año = 2.900€/mes

Para justificar este coste, el empleado necesita generar (con tu dirección) al menos:
35.000 × 2 = 70.000€/año en proyectos = 5.800€/mes de facturación adicional
(el ×2 es el margen mínimo para que la contratación sea rentable)
```

---

### El modelo de precios de agencia vs. freelance

**Por qué y cómo subir los precios al escalar:**
```
FREELANCE INDIVIDUAL:
→ Precio = tu tarifa por hora × horas estimadas
→ Límite: lo que el mercado paga por UNA persona

MICRO-AGENCIA:
→ Precio = valor del resultado para el cliente
→ Los precios de agencia se justifican con:
  - La suma de múltiples especialistas (nadie espera pagar solo una tarifa)
  - El proceso y la metodología (no compras horas, compras un resultado)
  - La garantía de que el proyecto se entrega incluso si alguien cae enfermo

TIPOS DE TARIFA PARA MICRO-AGENCIA:

1. PROYECTO CERRADO (precio fijo):
→ Mejor para proyectos con scope definido
→ Incluye: discovery, diseño, producción, revisiones, entrega
→ Tu margen debe ser >40% sobre el coste de producción (horas propias + colaboradores)

2. RETAINER MENSUAL:
→ El objetivo: convertir el 30-40% de la facturación en retainers fijos
→ Ejemplo: 3 retainers de 3.000€/mes = 9.000€ de base garantizada antes de proyectos
→ El retainer financia los costes fijos del estudio; los proyectos son el margen

3. TIME & MATERIALS (horas reportadas):
→ Solo para proyectos donde el scope es imposible de definir al inicio
→ Requiere confianza consolidada con el cliente
→ Comunica semanalmente el burn rate para evitar sorpresas en la factura
```

---

### Los 5 errores más caros al hacer la transición

```
ERROR 1 — BAJAR LA TARIFA PARA CONSEGUIR MÁS VOLUMEN
La micro-agencia tiene más costes fijos: la tentación de compensar con volumen a tarifa baja
resulta en estar más ocupado con menos margen que como freelance solo.
Corrección: sube el precio al escalar, no lo bajes. La agencia debe cobrar MÁS que el freelance.

ERROR 2 — CONTRATAR DEMASIADO PRONTO SIN DEMANDA ASEGURADA
Primer empleado con cartera insegura → 3 meses después hay que despedirle → daño reputacional y emocional.
Corrección: solo contrata cuando tienes demanda confirmada para 6+ meses.

ERROR 3 — SEGUIR SIENDO EL MEJOR EJECUTOR EN LUGAR DE DIRECTOR
Quieres hacer el trabajo creativo, pero el negocio necesita que gestiones clientes y equipo.
Resultado: el equipo no crece sin tu supervisión constante; los clientes solo quieren a ti.
Corrección: empieza a delegar ejecución desde el día 1; tu valor es la dirección y el cliente.

ERROR 4 — NO TENER ACUERDO CLARO CON EL SOCIO O COLABORADORES
Las ambigüedades sobre dinero, crédito creativo y decisiones destruyen más socios que la falta de trabajo.
Corrección: papel firmado antes de trabajar juntos, aunque sea con alguien de confianza.

ERROR 5 — PERDER LOS CLIENTES CLAVE QUE TE DABAN ESTABILIDAD
Al escalar el pricing o el proceso, algunos clientes antiguos se sienten desatendidos.
Corrección: comunicación proactiva con los 3-5 clientes más importantes sobre qué cambia y por qué les beneficia.
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Planificar y ejecutar la transición de freelance individual a micro-agencia',
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
