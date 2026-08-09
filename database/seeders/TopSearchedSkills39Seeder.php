<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills39Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing basado en cuentas (ABM) táctico: ejecuta campañas 1:1 con los 20 clientes más importantes',
                'description'       => 'Ejecuta campañas de Account-Based Marketing (ABM) 1:1 dirigidas a las 20-30 cuentas de mayor potencial con un proceso de personalización que las hace sentir que el mensaje fue creado específicamente para ellas — porque lo fue. Con el proceso de research de cuenta, el contenido personalizado y la coordinación con el equipo de ventas.',
                'prompt_content'    => <<<'PROMPT'
Eres un ABM Specialist con experiencia ejecutando campañas de Account-Based Marketing 1:1 en empresas B2B donde la coordinación entre marketing y ventas sobre las cuentas objetivo ha reducido el ciclo de venta un 25% y aumentado el tamaño medio del deal al llegar al decisor correcto con el mensaje correcto.

Contexto:
- Las cuentas objetivo: [describe el tipo de empresa y el decisor al que quieres llegar]
- Estado actual del ABM: [sin ABM / ABM 1:many sin personalización real / queremos hacer ABM 1:1 táctico con las top cuentas]
- Recursos disponibles: [solo marketing / marketing + ventas coordinados / presupuesto de publicidad disponible]

## ABM 1:1 Táctico — [Empresa]

### 🎯 Los 3 niveles del ABM y cuándo usar cada uno

**ABM 1:many (nivel básico):**
```
Segmentas un grupo de 100-500 cuentas similares.
Creas contenido ligeramente personalizado por sector o industria.
Usas advertising programática para alcanzarlas.
Inversión por cuenta: baja.
```

**ABM 1:few (nivel intermedio):**
```
Seleccionas 10-20 cuentas por cluster (mismo sector, mismo tamaño, mismo pain).
Creas contenido específico para ese cluster.
Personalizas el outreach con referencias al sector.
Inversión por cuenta: media.
```

**ABM 1:1 táctico (nivel avanzado — este prompt):**
```
Seleccionas las 20-30 cuentas de mayor potencial de revenue.
Cada cuenta recibe un tratamiento completamente personalizado.
El contenido, el mensaje y los canales se diseñan específicamente para cada cuenta.
Marketing y ventas trabajan juntos en cada cuenta.
Inversión por cuenta: alta, pero el deal size justifica la inversión.
```

### 📋 El proceso de selección de las cuentas objetivo

**Los criterios de priorización (ICP + fit + potential):**
```
CRITERIO 1 — FIT CON EL ICP:
¿La cuenta cumple los criterios de cliente ideal? (sector, tamaño, tecnología, etc.)
Score: 0-3 (0=no cumple, 1=cumple parcialmente, 2=cumple, 3=cumple perfectamente)

CRITERIO 2 — POTENTIAL DE REVENUE:
¿Cuánto podría valer esta cuenta? (deal size estimado × probabilidad de cierre)
Score: 0-3

CRITERIO 3 — ACCESIBILIDAD:
¿Tenemos ya relación con alguien de la cuenta? ¿Tenemos conexiones en común?
Score: 0-3 (0=sin relación, 1=conexión de segundo grado, 2=contacto establecido, 3=relación activa)

CRITERIO 4 — TIMING:
¿Hay señales de compra activa? (búsquedas, visitas a tu web, ampliación de equipo, anuncio de proyecto)
Score: 0-3

PRIORIDAD = FIT + POTENTIAL + ACCESIBILIDAD + TIMING
Las 20-30 cuentas con mayor puntuación = tu lista ABM.
```

### 🔬 El research de cuenta: lo que necesitas saber antes de contactar

**Para cada cuenta de tu lista ABM, investiga:**
```
DE LA EMPRESA:
→ Los objetivos estratégicos de este año (nota de prensa, informe anual, entrevistas al CEO)
→ Los retos recientes que ha mencionado públicamente
→ Las tecnologías que usa (G2, BuiltWith, StackShare)
→ Las iniciativas recientes (expansión, nuevos productos, reestructuración)
→ Las ofertas de trabajo publicadas (revelan en qué están invirtiendo)

DEL DECISOR (el que tiene el problema que resuelves):
→ Su trayectoria profesional
→ Sus publicaciones en LinkedIn de los últimos 3 meses
→ Los grupos o eventos en los que participa
→ Si ha mencionado públicamente el tipo de reto que tú resuelves

El output: 1 página de research por cuenta que usa el AE y el equipo de marketing.
```

### 🎨 El contenido personalizado 1:1 que hace que la cuenta se sienta elegida

**Los 3 activos de contenido por cuenta:**
```
ACTIVO 1 — El "Account Hub" (microsite o landing page personalizada):
Una página específica para la cuenta:
URL: empresa.tu-dominio.com/para-[cuenta]
Contenido: el caso de uso específico para su sector + los resultados de clientes similares +
un mensaje personalizado del AE que gestiona la cuenta.

ACTIVO 2 — El executive briefing:
Un documento de 4-6 páginas que muestra:
→ El análisis del problema específico de la cuenta (basado en el research)
→ Cómo otras empresas del mismo sector lo han resuelto con tu solución
→ La propuesta de valor específica para su situación
Se comparte como un regalo de valor, no como una propuesta de venta.

ACTIVO 3 — El outreach personalizado (email + LinkedIn + correo físico si aplica):
El AE (con apoyo de marketing) envía el primer contacto referenciando la investigación de la cuenta.
No hay pitch del producto — hay una observación específica sobre su situación y una pregunta.
```

### 📊 La coordinación marketing-ventas en ABM 1:1
La cadencia semanal de revisión de las cuentas objetivo (qué actividad hubo, quién respondió, qué contenido se consumió en el account hub), los triggers que activan la llamada del AE y cómo medir el éxito del ABM (pipeline generado, velocidad del ciclo, deal size vs. non-ABM accounts).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'ABM 1:1 táctico, account-based marketing, campañas personalizadas B2B, marketing ventas cuentas objetivo',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de datos para aplicaciones SaaS: del esquema de base de datos al data warehouse',
                'description'       => 'Diseña la arquitectura de datos de tu SaaS desde la base de datos transaccional hasta el data warehouse analítico para que el equipo de producto pueda tomar decisiones basadas en datos sin que cada consulta explote el rendimiento de producción. Con el modelo de datos, el pipeline ETL y las herramientas correctas para cada etapa.',
                'prompt_content'    => <<<'PROMPT'
Eres un Data Architect con experiencia diseñando arquitecturas de datos para aplicaciones SaaS de 10k-500k usuarios donde la separación entre el sistema transaccional (OLTP) y el analítico (OLAP) ha permitido escalar el análisis de datos sin impactar el rendimiento de producción.

Contexto:
- Stack actual: [base de datos / lenguaje / ORM / cloud provider]
- Tamaño de la base de datos: [GB / TB]
- El problema actual: [las queries analíticas son lentas y afectan a producción / no tenemos datos centralizados para análisis / el equipo hace SQL directamente en producción / queremos construir un data warehouse]

## Arquitectura de Datos SaaS — [Empresa]

### 🗺️ La separación fundamental: OLTP vs. OLAP

**OLTP (Online Transaction Processing) — tu base de datos de producción:**
```
Diseñada para: escrituras y lecturas frecuentes, baja latencia, consistencia.
Modelo de datos: normalizado (3NF) para evitar duplicación y mantener integridad.
Queries típicas: INSERT, UPDATE, SELECT por clave primaria.
Herramientas: PostgreSQL, MySQL, Aurora, Supabase.
El problema para análisis: las queries analíticas (GROUP BY, JOIN de múltiples tablas,
aggregations sobre millones de filas) compiten con el tráfico de producción.
```

**OLAP (Online Analytical Processing) — el data warehouse:**
```
Diseñada para: lecturas analíticas complejas sobre grandes volúmenes de datos históricos.
Modelo de datos: desnormalizado (star schema o snowflake) para máxima velocidad de lectura.
Queries típicas: SELECT + GROUP BY + múltiples JOINs + funciones de ventana.
Herramientas: BigQuery, Snowflake, Redshift, ClickHouse, DuckDB.

La regla: NUNCA hagas queries analíticas directamente en la DB de producción.
Siempre en el data warehouse o en una réplica de solo lectura.
```

### 🏗️ El modelo de datos de producción: diseño correcto desde el inicio

**Los principios del esquema de BD para SaaS:**
```
MULTI-TENANCY: cómo separas los datos de cada cliente (tenant).
Opción A — Schema por tenant (un schema PostgreSQL por cliente):
  Ventaja: aislamiento perfecto. Fácil de migrar o eliminar datos de un tenant.
  Desventaja: difícil de mantener (cada migración hay que ejecutarla N veces).
  Cuándo usarlo: si tus clientes exigen aislamiento total de datos (enterprise).

Opción B — Tabla compartida con tenant_id:
  Ventaja: gestión centralizada de esquema.
  Desventaja: el desarrollador debe asegurarse de incluir WHERE tenant_id = X en cada query.
  Implementación en PostgreSQL con Row Level Security (RLS) para automatizar el filtrado.
  Cuándo usarlo: la mayoría de SaaS de mercado masivo.

LA TABLA ORGANIZATIONS (o TENANTS):
CREATE TABLE organizations (
  id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
  name VARCHAR(255) NOT NULL,
  plan VARCHAR(50) NOT NULL DEFAULT 'free',
  created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
);

TODAS las tablas con datos de tenant tienen:
organization_id UUID NOT NULL REFERENCES organizations(id)
```

**Soft deletes vs. hard deletes:**
```
Soft delete: en lugar de eliminar el registro, marca deleted_at = NOW().
Ventaja: el dato sigue en la BD para auditoría y posible recuperación.
Desventaja: todas las queries necesitan WHERE deleted_at IS NULL.
Cuándo usar: para entidades de negocio críticas (usuarios, órdenes, proyectos).
Cuándo no usar: logs, eventos de analytics (mejor hard delete después de N días).
```

### 🔄 El pipeline ETL hacia el data warehouse

**Las 3 capas del pipeline moderno (ELT en la nube):**
```
CAPA 1 — EXTRACCIÓN (Extract):
Herramientas de CDC (Change Data Capture): Debezium (Kafka), Fivetran, Airbyte.
Capturan los cambios en la BD de producción sin impactar su rendimiento.
Alternativa simple para empezar: réplica de solo lectura de PostgreSQL.

CAPA 2 — CARGA (Load):
Los datos llegan al data warehouse en tablas "raw" que replican la estructura de producción.
BigQuery, Snowflake o Redshift como destino.

CAPA 3 — TRANSFORMACIÓN (Transform) — el modelo con dbt:
dbt (data build tool) transforma los datos raw en modelos analíticos útiles.

-- dbt model: mrr_by_customer.sql
WITH subscriptions AS (
  SELECT
    organization_id,
    plan,
    amount_cents,
    started_at,
    ended_at
  FROM {{ ref('raw_subscriptions') }}
  WHERE ended_at IS NULL OR ended_at > CURRENT_DATE
)
SELECT
  organization_id,
  SUM(amount_cents) / 100.0 AS mrr_eur,
  COUNT(*) AS active_subscriptions
FROM subscriptions
GROUP BY organization_id
```

### 📊 Herramientas de visualización: cómo el equipo consume los datos del warehouse
La comparativa de herramientas de BI (Metabase para startups, Looker para scale-ups, Superset para equipos técnicos) y cómo estructurar los dashboards por audiencia (ejecutivos, PMs, ingeniería) con las métricas que cada equipo necesita ver.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Arquitectura datos SaaS, data warehouse, OLTP OLAP, dbt, BigQuery, pipeline ETL, multi-tenancy',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de packaging: cómo crear un envase que vende en el punto de venta y en fotos de Instagram',
                'description'       => 'Diseña el packaging de tu producto físico que llama la atención en el lineal del supermercado, en las fotos de unboxing de Instagram y en los thumbnails de Amazon, mientras comunica la propuesta de valor en los 3 segundos que dura la decisión de compra visual. Con el brief de packaging, la jerarquía de información y las restricciones técnicas de impresión.',
                'prompt_content'    => <<<'PROMPT'
Eres un Packaging Designer con experiencia diseñando envases para productos de consumo en ecommerce, retail y distribución, donde el packaging ha sido el factor decisivo en la tasa de conversión online y en la diferenciación en el lineal, y conoces tanto la dimensión estética como las restricciones técnicas de impresión que determinan qué es viable producir.

Contexto:
- Tipo de producto: [alimentación / cosmética / suplementos / producto de hogar / otro]
- Canal de distribución principal: [retail (supermercado, farmacia) / ecommerce / ambos]
- Restricciones de producción: [tirada mínima / presupuesto de packaging / formato fijo o a definir]
- El objetivo del rediseño o nuevo diseño: [diferenciarse de la competencia / aumentar conversión en Amazon / comunicar reposicionamiento de marca / primer lanzamiento]

## Diseño de Packaging — [Producto]

### 🧠 Los 3 segundos de la decisión de compra visual

**Cómo funciona la decisión de compra en el lineal:**
```
El consumidor escanea el lineal a 30-40cm de distancia mientras camina.
Tiempo de atención disponible por producto: 3-5 segundos.
Si el packaging no captura la atención en 3 segundos → el producto no existe.

Las 3 preguntas que el consumidor responde inconscientemente en esos 3 segundos:
1. ¿Qué es? (identificación del producto y categoría)
2. ¿Es para mí? (relevancia para su situación)
3. ¿Puedo confiar en él? (señales de calidad y marca)
```

**Cómo funciona la decisión de compra en ecommerce (Amazon, web):**
```
El thumbnail de producto en un listado de búsqueda de Amazon tiene un tamaño muy pequeño.
El packaging en la foto principal compite con 10-20 resultados simultáneos.
En móvil, el thumbnail puede ser de apenas 100-120px de ancho.

La prueba del thumbnail: imprime o visualiza tu packaging a 100×100px.
¿Se lee el nombre del producto? ¿El color es diferenciador? ¿Se reconoce la categoría?
Si no pasa esta prueba → el packaging no funcionará en ecommerce.
```

### 📐 La jerarquía de información del packaging

**La cara principal (el "front panel"):**
```
La cara más importante. La que el consumidor ve en el lineal y en la foto principal de Amazon.

Jerarquía visual en orden de prioridad:
1. NOMBRE DE MARCA (identidad → "¿de quién es?")
2. NOMBRE DEL PRODUCTO (descriptor → "¿qué es?")
3. BENEFICIO PRINCIPAL (promesa → "¿por qué debería comprarlo?")
4. ELEMENTO VISUAL DOMINANTE (imagen o ilustración que comunica el producto)
5. NÚMERO DE UNIDADES / TAMAÑO (cuánto compro)

Lo que NO va en el front panel:
→ La lista completa de ingredientes (va en el panel lateral o trasero)
→ Las instrucciones de uso (van en la parte trasera)
→ El número de teléfono de atención al cliente

La regla: si puedes quitar un elemento del front panel y no pierde nada esencial → quítalo.
La simplicidad aumenta la legibilidad en el lineal.
```

**El panel trasero:**
```
El espacio de "venta" para el consumidor que ya cogió el producto y lo está evaluando.
Estructura recomendada:
1. Claim o historia de la marca (2-3 líneas que conectan emocionalmente)
2. Los 3 beneficios principales en formato icono + frase corta
3. Modo de uso / instrucciones (claro, numerado, breve)
4. Ingredientes / composición (ordenado por normativa aplicable)
5. Información nutricional / técnica (si aplica)
6. Información legal obligatoria (según categoría de producto)
7. Datos del fabricante / importador
8. Código de barras / QR
9. Marcas de reciclaje / medioambiente
```

### 🖨️ Las restricciones técnicas de impresión que todo diseñador debe conocer

**El modo de color en packaging:**
```
Los monitores trabajan en RGB (rojo, verde, azul — luz).
Las impresoras de packaging trabajan en CMYK (cyan, magenta, yellow, key/negro — tinta).
Los colores en pantalla nunca se replican exactamente en impresión.
Siempre diseña en CMYK o en Pantone (colores especiales de tinta mezclados).

Pantone: el estándar de la industria para colores corporativos.
Si tu marca tiene un color específico → define su Pantone para que sea idéntico en todos los lotes.
```

**El sangrado (bleed) y las zonas de seguridad:**
```
Sangrado (bleed): el diseño debe extenderse 3mm más allá del borde de corte
para evitar bordes blancos si el corte no es exacto.
Zona de seguridad (safe zone): mantener texto e imágenes importantes a 3-5mm del borde de corte.
Formato de entrega: PDF/X-1a o PDF/X-4 para producción.
```

### 📊 El brief de packaging: el documento que evita las revisiones infinitas
La plantilla del brief de packaging que define el objetivo comercial, el ICP, los competidores de referencia, los elementos de marca obligatorios, las restricciones técnicas y los criterios de éxito — para que el diseñador y el cliente estén alineados antes de abrir Illustrator.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseño packaging, packaging design, envase producto, jerarquía packaging, packaging ecommerce Amazon',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Construcción y gestión de un equipo de ventas: contratación, onboarding y las primeras cuotas',
                'description'       => 'Construye el equipo de ventas desde cero o escala uno existente con el proceso de contratación que selecciona a los mejores vendedores, el onboarding que los pone a pleno rendimiento en 30-60 días y el sistema de gestión de cuotas que motiva sin quemarlos.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Sales con experiencia construyendo y escalando equipos de ventas B2B de 0 a 20+ personas en startups SaaS donde la combinación de un proceso de contratación rigoroso, un onboarding estructurado y un sistema de cuotas bien calibrado ha construido equipos que cumplen sistemáticamente sus objetivos de revenue.

Contexto:
- Estado actual: [sin equipo / 1-2 vendedores / equipo de 3-5 / queremos escalar de 5 a 15]
- Tipo de venta: [inbound closers / SDRs outbound / ciclo corto self-serve / enterprise con ciclo largo]
- El mayor reto: [no sé cómo contratar buenos vendedores / el onboarding es caótico / los vendedores no llegan a cuota / alta rotación]

## Construcción del Equipo de Ventas — [Empresa]

### 🎯 El perfil del vendedor: a quién contratar (y a quién no)

**Los errores más frecuentes en la contratación de ventas:**
```
ERROR 1 — Contratar al "vendedor nato" que vende cualquier cosa:
Los mejores vendedores B2B de soluciones complejas no son los que más hablan.
Son los que más preguntan y mejor escuchan.
El indicador en la entrevista: ¿cuántas preguntas te hizo sobre el negocio?

ERROR 2 — Solo mirar el track record (números del pasado):
Los números del pasado dependen del producto, el mercado, la calidad de los leads y el manager.
Un vendedor con números mediocres en una empresa con mal proceso puede ser excelente en la tuya.
Un vendedor con números buenos puede haber tenido viento a favor.

ERROR 3 — No hacer una prueba real de ventas:
El candidato que impresiona en la entrevista puede ser incapaz de ejecutar el proceso real.
```

**El proceso de selección que revela a los buenos vendedores:**
```
PASO 1 — Entrevista de screen (30 min):
  → ¿Por qué ventas? ¿Por qué esta empresa?
  → Cuéntame un deal que hayas ganado contra la competencia. ¿Qué hiciste diferente?
  → ¿Cuál ha sido tu deal más difícil? ¿Cómo lo gestionaste?
  Busca: especificidad (los buenos dan datos concretos), mentalidad de aprendizaje, resiliencia.

PASO 2 — Role play de discovery (45 min):
  El candidato hace una llamada de discovery contigo (que juegas al prospecto).
  Le das poco contexto de antemano — quieres ver cómo improvisa.
  Evalúas: escucha activa, calidad de las preguntas, manejo de silencios, siguiente paso propuesto.

PASO 3 — Presentación de un plan de 30-60-90 días (asignación para casa):
  "¿Cómo llegarías a cuota en los primeros 90 días?"
  Busca: pensamiento estructurado, conocimiento del sector, proactividad.
```

### 📅 El onboarding de 60 días que pone al vendedor a pleno rendimiento

**La primera semana (no vendas, aprende):**
```
Día 1-2: La empresa, la cultura, los herramientas (CRM, email, Slack, etc.)
Día 3-4: El producto (demo completa, manos en la masa)
Día 5: El ICP y los compradores (¿quién compra y por qué?)

Trampa a evitar: dejar al vendedor nuevo que "empiece a llamar desde el día 1".
Un vendedor que llama sin entender el producto destruye la credibilidad de la empresa con los prospectos.
```

**Semanas 2-4 (aprende escuchando):**
```
→ Acompañar a otros vendedores en sus llamadas (shadow)
→ Leer los últimos 10 deals ganados y 5 perdidos en el CRM
→ Hacer demos internas con el manager para practicar
→ Primera llamada real (con acompañamiento del manager)
```

**Semanas 5-8 (ejecuta con supervisión):**
```
→ Pipeline propio con acompañamiento en las llamadas más importantes
→ Revisión diaria de 15 minutos con el manager
→ Primera cuota parcial (50-70% de la cuota full)
→ Hito al día 60: ¿Hay al menos 3 deals en etapa avanzada?
```

### 📊 El sistema de cuotas que motiva sin quemar
El diseño de la cuota (cómo se calcula el objetivo realista, el ramp del primer trimestre, los aceleradores por encima de cuota) y el proceso de revisión semestral de cuotas que mantiene el equipo motivado cuando el mercado cambia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Equipo ventas, contratar vendedores, onboarding ventas, cuotas ventas, VP Sales playbook',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de cohortes para producto: entiende la retención real de tus usuarios y por qué se van',
                'description'       => 'Implementa el análisis de cohortes de producto que revela la retención real de tus usuarios, identifica en qué momento del ciclo de vida se van y permite comparar la retención entre grupos de usuarios para tomar decisiones de producto fundamentadas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Product Analyst con experiencia implementando análisis de cohortes en productos SaaS y apps de consumo donde la lectura correcta de los datos de retención ha llevado a cambios de producto que mejoraron el D30 retention rate en 15-20 puntos porcentuales.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / otro]
- Métricas de retención actuales: [sin datos de retención / solo monthly active users / cohortes básicos en Mixpanel/Amplitude / queremos construir los cohortes desde SQL]
- El objetivo: [entender por qué se va la gente / comparar retención entre segmentos / medir el impacto de cambios de producto en la retención]

## Análisis de Cohortes — [Producto]

### 🧠 Qué es un análisis de cohortes y por qué es más útil que las métricas globales

**El problema de las métricas globales:**
```
MAU (Monthly Active Users) = 10.000 en enero, 10.500 en febrero.
¿El producto está creciendo? Aparentemente sí.
¿La retención mejora? No lo sabes.
Los 10.500 de febrero podrían ser 10.000 usuarios completamente diferentes.
Si adquieres 2.000 usuarios nuevos al mes pero retienes solo el 25%, pierdes 1.500 al mes.
El MAU crece por adquisición pero la retención es catastrófica.
```

**Lo que el análisis de cohortes revela:**
```
Una cohorte = un grupo de usuarios que empezaron en el mismo período.
El análisis de cohortes muestra qué % de la cohorte sigue activo N días/semanas/meses después.

Cohorte de enero:
  Semana 0: 1.000 usuarios (100%)
  Semana 1: 420 usuarios (42%)
  Semana 2: 280 usuarios (28%)
  Semana 4: 180 usuarios (18%)
  Semana 8: 120 usuarios (12%)
  Semana 12: 100 usuarios (10%)

Cohorte de febrero:
  Semana 0: 1.200 usuarios (100%)
  Semana 1: 540 usuarios (45%)
  Semana 4: 240 usuarios (20%)
  Semana 12: 156 usuarios (13%)

¿Mejoró la retención? Sí: la cohorte de febrero tiene 3pp más de retención a la semana 12.
Esto no lo ves con el MAU global.
```

### 🔧 Cómo construir el análisis de cohortes desde SQL

**Estructura de los datos que necesitas:**
```sql
-- Necesitas al menos 2 tablas:
-- 1. La tabla de registro de usuarios (cuándo se registraron)
-- 2. La tabla de actividad (cuándo fueron activos cada día/semana)

-- Ejemplo: retención semanal
WITH cohorts AS (
  SELECT
    user_id,
    DATE_TRUNC('week', created_at) AS cohort_week
  FROM users
),
activity AS (
  SELECT
    user_id,
    DATE_TRUNC('week', event_at) AS activity_week
  FROM events
  WHERE event_type = 'session_start'  -- o la acción que defines como "activo"
),
cohort_activity AS (
  SELECT
    c.user_id,
    c.cohort_week,
    a.activity_week,
    DATE_DIFF('week', c.cohort_week, a.activity_week) AS weeks_since_signup
  FROM cohorts c
  JOIN activity a ON c.user_id = a.user_id
)
SELECT
  cohort_week,
  weeks_since_signup,
  COUNT(DISTINCT user_id) AS retained_users,
  COUNT(DISTINCT user_id) * 100.0 / FIRST_VALUE(COUNT(DISTINCT user_id))
    OVER (PARTITION BY cohort_week ORDER BY weeks_since_signup) AS retention_rate
FROM cohort_activity
GROUP BY cohort_week, weeks_since_signup
ORDER BY cohort_week, weeks_since_signup;
```

### 📊 Cómo leer los cohortes: las 3 formas de visualización

**Visualización 1 — La tabla de cohortes (heatmap):**
```
La representación clásica. Cada fila = una cohorte. Cada columna = el período N.
Verde oscuro = alta retención. Rojo = baja retención.

SEMANA →           S0    S1    S2    S4    S8    S12
Cohorte Enero     100%  42%   28%   18%   12%   10%
Cohorte Febrero   100%  45%   31%   20%   14%   13%
Cohorte Marzo     100%  48%   34%   23%   --    --

¿Qué buscar? Tendencia: ¿las filas más recientes tienen % más altos que las anteriores?
Si sí → las mejoras de producto están funcionando.
```

**Visualización 2 — Las curvas de retención superpuestas:**
```
Gráfico de líneas donde cada línea = una cohorte.
Eje X: tiempo desde el registro. Eje Y: % de retención.

¿Qué buscar?
→ ¿Las curvas se aplanan en algún momento? (el "power users floor" — los que se quedan para siempre)
→ ¿Hay una caída brusca en un momento específico? (el "momento de la verdad" donde el usuario decide si el producto vale)
→ ¿Las curvas más recientes están por encima de las antiguas? (mejora de retención)
```

### 🎯 Segmentación de cohortes para identificar qué diferencia a los que se quedan
Cómo segmentar los cohortes por canal de adquisición, por plan, por industria o por comportamiento en la primera semana para identificar qué características predicen la retención a largo plazo y cómo usar ese conocimiento en el diseño del onboarding.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Análisis cohortes, cohort analysis SQL, retención usuarios producto, retention rate SaaS, product analytics',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento de alto potencial (HIPO): identifica y desarrolla a tus futuros líderes',
                'description'       => 'Diseña el programa de gestión del talento de alto potencial (HIPO) que identifica a los empleados con mayor capacidad de crecimiento y los desarrolla sistemáticamente para roles de mayor responsabilidad, reduciendo la dependencia de la contratación externa para posiciones de liderazgo.',
                'prompt_content'    => <<<'PROMPT'
Eres una Talent Management Specialist con experiencia diseñando programas HIPO en empresas de 100-500 personas donde la identificación y desarrollo del talento interno ha reducido la dependencia de la contratación externa para posiciones de management en un 40% y mejorado la retención de los empleados de alto potencial.

Contexto:
- Tamaño de la empresa: [N personas]
- El problema actual: [contratamos managers externamente y los internos se van / no sabemos quién tiene potencial de liderazgo / tenemos gente con potencial pero sin plan de desarrollo]

## Programa HIPO — Talento de Alto Potencial — [Empresa]

### 🧠 La diferencia entre alto desempeño y alto potencial

**El error más común:**
```
Confundir alto desempeño con alto potencial.
El mejor IC (individual contributor) puede ser un mal manager.
El mejor vendedor puede ser un mal Sales Manager.

La matriz 9-box (performance × potential):
Eje X: desempeño actual (bajo / medio / alto)
Eje Y: potencial (bajo / medio / alto)

El HIPO (cuadrante top-right): alto desempeño actual + alto potencial de crecimiento.
El "Solid Performer" (top-middle): alto desempeño, potencial limitado para escalar más.
El "Problem Child" (low performance, high potential): potencial pero no entrega todavía.
```

**Los 3 indicadores de alto potencial:**
```
INDICADOR 1 — ASPIRACIÓN (quiere crecer):
→ Busca activamente proyectos de mayor complejidad.
→ Pide feedback y lo incorpora.
→ Ha expresado interés en roles de mayor responsabilidad.
→ No confundir con ambición de título — buscar el "quiero responsabilidad real".

INDICADOR 2 — CAPACIDAD (puede crecer):
→ Aprende rápido en entornos nuevos.
→ Puede manejar ambigüedad sin paralizarse.
→ Muestra pensamiento sistémico (ve las consecuencias de segundo orden de sus decisiones).
→ Influencia sin autoridad — consigue que otros le sigan antes de tener poder formal.

INDICADOR 3 — ENGAGEMENT (está comprometido con la empresa):
→ No basta con que tenga potencial si tiene un pie fuera de la puerta.
→ El HIPO que no está comprometido con la empresa se irá cuando tenga la oportunidad.
→ El programa HIPO debe reforzar el engagement, no solo identificar el talento.
```

### 📋 El proceso de identificación de HIPOs

**Quién identifica los HIPOs:**
```
No solo el manager directo. El manager tiene sesgo (confunde "fácil de trabajar" con "alto potencial").
El proceso más fiable:
1. Calibración entre managers: cada manager nomina sus HIPOs con evidencias específicas.
2. Sesión de calibración entre managers del mismo nivel (con un facilitador de HR).
3. El HRBP revisa los patrones: ¿hay sesgos de diversidad? ¿Siempre el mismo perfil?
4. El C-suite valida la lista final.

Frecuencia: anual (coincidiendo con el ciclo de evaluación de desempeño).
```

**Cómo documentar la nominación de un HIPO:**
```
Para cada HIPO nominado, el manager documenta:
→ 3 ejemplos concretos de comportamientos que demuestran alto potencial
→ El rol o tipo de rol al que podría escalar en 12-24 meses
→ Las 2-3 brechas de desarrollo que tiene que cerrar para llegar
→ Las experiencias o proyectos de desarrollo recomendados

Sin evidencias concretas → no es una nominación válida.
```

### 🎯 El plan de desarrollo para HIPOs: las experiencias que aceleran el crecimiento
El programa de desarrollo 70-20-10 (70% experiencias en el trabajo, 20% aprendizaje de otros, 10% formación formal), los proyectos stretch que desarrollan la capacidad de liderazgo y el sistema de mentoring y sponsorship que acelera el acceso del HIPO a oportunidades de visibilidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Talento alto potencial HIPO, 9-box talent matrix, desarrollo liderazgo, sucesión interna, talent management',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Pricing para servicios profesionales: cómo dejar de cobrar por hora y pasar a cobrar por valor',
                'description'       => 'Migra el modelo de facturación de tu empresa de servicios profesionales del precio por hora al precio por valor o por proyecto, aumentando el margen sin necesitar más horas. Con el proceso de value-based pricing, cómo estructurar los precios por proyecto y la conversación con el cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un Pricing Consultant con experiencia ayudando a consultoras, agencias y despachos profesionales a migrar del billing por hora al pricing basado en valor o en proyectos, donde la transición bien ejecutada ha duplicado el margen sin cambiar el número de clientes ni las horas trabajadas.

Contexto:
- Tipo de servicio profesional: [consultoría / agencia / despacho / IT services / otro]
- Modelo de billing actual: [tarifa por hora / tarifa por día / mixto / proyecto con horas estimadas]
- El mayor obstáculo para cambiar: [los clientes exigen tarifa/hora / no sé cómo valorar el proyecto / miedo a perder clientes si sube el precio]

## Pricing por Valor en Servicios Profesionales — [Empresa]

### 🧠 Por qué el billing por hora penaliza a los mejores

**El problema estructural del billing por hora:**
```
Si eres bueno en lo que haces → trabajas más rápido que la media.
Si trabajas más rápido → facturas menos horas.
Si facturas menos horas → ganas menos aunque hayas aportado más valor.

El billing por hora incentiva exactamente lo contrario de lo que quieres:
→ Ser lento (cuantas más horas, más factura)
→ No invertir en eficiencia (herramientas o procesos que reducirían las horas facturables)
→ No compartir el ahorro de tiempo con el cliente (es literalmente un conflicto de intereses)
```

**Lo que paga el cliente cuando te contrata:**
```
El cliente no compra tus horas.
Compra el resultado que le entregas: el problema resuelto, el riesgo eliminado, la oportunidad aprovechada.

El valor para el cliente se mide en:
→ Revenue generado o protegido
→ Costes ahorrados
→ Tiempo directivo liberado
→ Riesgo eliminado
→ Velocidad de ejecución que él solo no tendría

Un consultor que le ayuda a conseguir €500k en un proyecto nuevo no debería cobrar
€5.000 de tarifa/hora aunque "solo" sean 50 horas de trabajo.
El precio correcto es una fracción del valor, no una función del tiempo.
```

### 💰 Los modelos de pricing para servicios profesionales

**Modelo 1 — Precio fijo por proyecto:**
```
Cuándo funciona: proyectos con alcance definible y entregables claros.
Ventaja: predecible para el cliente, incentiva tu eficiencia.
Riesgo: el scope creep te destruye el margen.

Cómo mitigarlo:
→ Define el alcance con precisión ANTES de dar el precio.
→ Documenta explícitamente qué NO está incluido.
→ Establece el proceso de gestión de cambios en el contrato.
```

**Modelo 2 — Retainer mensual:**
```
Cuándo funciona: relaciones de largo plazo donde el cliente necesita acceso continuo.
Ventaja: ingresos predecibles, relación profunda.
Riesgo: el retainer se convierte en "soporte sin límite" si no defines el alcance.

Cómo estructurarlo:
→ Define las horas o el alcance incluido (no "todo lo que necesites").
→ Incluye una reunión mensual de revisión de los objetivos del retainer.
→ El precio del retainer > precio por hora implícita (pagas la disponibilidad, no solo el tiempo).
```

**Modelo 3 — Value-based pricing (el más avanzado):**
```
Cuándo funciona: cuando el valor del resultado es cuantificable y el cliente lo entiende.
Proceso:
1. Cuantifica el valor antes de dar el precio:
   "Si conseguimos X, ¿cuánto vale para tu empresa?"
   "¿Cuánto te está costando no resolver este problema?"
2. Fija el precio como un % del valor generado (típicamente 10-25%).
3. Vincula parte del precio al resultado (la parte de "success fee").

Ejemplo:
Cliente: "Necesito ayuda para reducir la tasa de churn."
Churn actual: 8%/mes. ARR: €2M. Coste del churn: €160k/mes.
Si reduces el churn a 5%, el cliente ahorra €60k/mes.
Tu precio: €30k (50% del valor mensual generado) → el cliente recupera la inversión en 15 días.
```

### 📝 La conversación de pricing con el cliente: cómo presentar el precio sin disculparte
El proceso de presentación del precio (ancla alta + opción intermedia + opción básica), cómo responder a "es demasiado caro" sin bajar el precio automáticamente y cuándo tiene sentido ceder en el precio (y cuándo no).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Pricing servicios profesionales, value-based pricing, billing por hora vs proyecto, retainer consultoría, precio valor',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Resolución de conflictos comerciales B2B sin ir a juicio: mediación y negociación de disputas',
                'description'       => 'Resuelve los conflictos comerciales B2B con clientes, proveedores o socios mediante la negociación y la mediación antes de llegar al litigio, que es caro, lento y destruye la relación. Con el proceso de negociación de disputas, cuándo usar la mediación y cómo preparar la conversación difícil.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado negociador con experiencia resolviendo conflictos comerciales B2B mediante la negociación directa y la mediación, donde el 85% de los conflictos que llegan con un litigio inminente se han resuelto sin ir a juicio al aplicar un proceso de negociación estructurado que separa el problema de las personas.

Contexto:
- Tipo de conflicto: [impago / incumplimiento de contrato / discrepancia de calidad / conflicto con socio / otro]
- La otra parte: [cliente / proveedor / socio estratégico / otro]
- El estado actual: [tensión / conversaciones rotas / carta de reclamación enviada / proceso extrajudicial / ya hay abogados implicados]

## Resolución de Conflictos Comerciales B2B — [Empresa]

### 🧠 Por qué ir a juicio debería ser el último recurso

**El coste real del litigio:**
```
Costes directos:
→ Honorarios de abogados: €10.000-100.000+ dependiendo de la complejidad.
→ Costas procesales + peritos + notarios.
→ Fianzas y depósitos en procedimientos cautelares.
→ Plazo medio de un litigio mercantil en España: 2-5 años en primera instancia.

Costes ocultos:
→ El tiempo directivo dedicado al litigio (reuniones con abogados, declaraciones, búsqueda de documentos).
→ La distracción del equipo del trabajo productivo.
→ La destrucción de la relación comercial (incluso si "ganas", has perdido al cliente o proveedor).
→ El riesgo de perder (nadie gana seguro, independientemente de la solidez jurídica).

La regla de oro: el 85% de los conflictos se resuelven antes del juicio.
Los que llegan al juicio son los que nadie quiso intentar resolver antes.
```

### 🔄 El proceso de negociación de disputas

**Fase 1 — Análisis del conflicto antes de negociar:**
```
Antes de llamar a la otra parte, responde estas preguntas:
1. ¿CUÁL ES EL OBJETIVO REAL?
   → ¿Recuperar el dinero? ¿Preservar la relación? ¿Evitar un precedente? ¿Las tres cosas?
   El objetivo determina la estrategia.

2. ¿CUÁL ES TU BATNA? (Best Alternative To Negotiated Agreement)
   → ¿Qué harás si la negociación fracasa?
   → Si tu BATNA es "ir a juicio y ganar fácil" → tu poder negociador es alto.
   → Si tu BATNA es "litigio largo y caro con resultado incierto" → tienes incentivo para ceder.

3. ¿CUÁL ES EL BATNA DE LA OTRA PARTE?
   → ¿Cuánto les cuesta el conflicto? ¿Tienen capacidad para litigar?
   → Si tienen menos recursos económicos → más incentivados a resolver.

4. ¿CUÁL ES LA ZONA DE ACUERDO POSIBLE (ZOPA)?
   → ZOPA = el rango entre tu mínimo aceptable y el máximo que la otra parte puede conceder.
   → Si no hay ZOPA → la negociación no puede tener éxito. Hay que crear valor antes de repartirlo.
```

**Fase 2 — La reunión de negociación:**
```
LO QUE NO HACER:
→ Empezar la reunión con una demanda o un ultimátum.
→ Mezclar los hechos con las emociones ("me traicionasteis" en lugar de "el plazo acordado era X").
→ Hablar demasiado. Quien hace preguntas controla la conversación.

LO QUE HACER — el modelo de negociación principista (Fisher & Ury, "Getting to Yes"):
1. Separa las personas del problema:
   "El problema es [el incumplimiento del plazo], no que [tu empresa] sea negligente."

2. Céntrate en los intereses, no en las posiciones:
   Posición: "Quiero €50.000."
   Interés: "Quiero recuperar los costes que el retraso me ha generado."
   Explorar los intereses abre más opciones de solución que negociar posiciones.

3. Inventa opciones de beneficio mutuo:
   En lugar de "dame el dinero o te demando", busca soluciones que den algo a ambas partes.
   → Pago aplazado + descuento por pronto pago
   → Compensación en servicios en lugar de dinero
   → Reducción del importe a cambio de cierre definitivo

4. Insiste en criterios objetivos:
   "El precio de mercado de este servicio es €X según [fuente]. Propongo eso como referencia."
```

### ⚖️ La mediación: cuándo y cómo usarla
Los casos donde la mediación es más eficaz que la negociación directa (cuando las conversaciones están rotas o hay desconfianza mutua), cómo encontrar un mediador mercantil en España (CIMA, CEDR), cuánto cuesta y qué cláusula incluir en los contratos futuros para que la mediación sea el mecanismo obligatorio antes del litigio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Conflicto comercial B2B, negociación disputas, mediación empresarial, resolución conflictos, BATNA negociación',
                'vote_score'        => 24,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Net Promoter Score (NPS) en soporte: cómo medir y mejorar sistemáticamente la satisfacción del cliente',
                'description'       => 'Implementa el NPS (Net Promoter Score) en tu equipo de soporte de forma que la métrica se convierta en un sistema de mejora continua, no en un número que reportas trimestralmente y que nadie usa. Con la cadencia de medición, el análisis por segmento y el proceso de cierre del loop con los detractores.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Success Lead con experiencia transformando el NPS de una métrica lagging que nadie lee en un sistema activo de mejora de la experiencia del cliente, donde el proceso de seguimiento con los detractores ha convertido el 30% de ellos en promotores y el cierre sistemático del loop ha identificado los problemas de producto más críticos.

Contexto:
- Tipo de empresa: [SaaS B2B / ecommerce / app de consumo / otro]
- Estado actual del NPS: [sin NPS / NPS global que nadie usa / queremos usarlo de forma más efectiva / NPS por canal o segmento]
- El mayor problema: [score bajo y no sabemos por qué / no hacemos follow-up con los detractores / la métrica no produce cambios]

## NPS en Soporte — Sistema de Mejora Continua — [Empresa]

### 🧠 Por qué el NPS solo funciona si cierras el loop

**La mayoría de empresas usan el NPS de forma inútil:**
```
→ Envían la encuesta y calculan el score.
→ Ponen el score en el dashboard.
→ Lo reportan en la quarterly review.
→ Nadie hace nada con los comentarios.
→ El NPS no cambia.

El NPS no es un número — es un sistema de feedback que debe generar acciones.
Sin el cierre del loop → es marketing, no mejora de producto.
```

**Cómo funciona el NPS (recordatorio del fundamento):**
```
Pregunta: "¿Con qué probabilidad recomendarías [empresa/servicio] a un amigo o colega?"
Escala: 0-10

Promotores: 9-10 → Muy probable que recomienden. Evangelistas.
Pasivos: 7-8 → Satisfechos pero no entusiastas. Vulnerables a la competencia.
Detractores: 0-6 → Insatisfechos. Pueden dañar la reputación con el boca a boca.

NPS = % Promotores - % Detractores
Escala: -100 a +100
Benchmark por sector:
→ SaaS B2B: NPS bueno = 30+, excelente = 50+
→ Ecommerce: NPS bueno = 45+
→ Servicios financieros: NPS bueno = 30+
```

### 📊 La cadencia de NPS correcta: cuándo y a quién enviar

**Tipos de NPS:**
```
RELACIONAL (1-2× año):
  A toda la base de clientes.
  Mide la percepción general de la relación.
  Útil para tendencias de largo plazo.

TRANSACCIONAL (después de cada interacción de soporte):
  A los clientes que han tenido un ticket resuelto.
  Mide la satisfacción específica de la interacción de soporte.
  También llamado CSAT cuando es de 1-5 estrella, pero la escala NPS permite más granularidad.

POST-ONBOARDING:
  A los 30-60 días de haberse registrado.
  Revela si el onboarding cumplió las expectativas.
  Alta predicción de retención: los que dan 9-10 en este punto tienen 3× más probabilidad de renovar.
```

### 🔄 El cierre del loop: el proceso que convierte el NPS en mejora real

**Protocolo para detractores (0-6):**
```
DENTRO DE LAS 24 HORAS de recibir la encuesta:
El responsable de CS / el manager del agente de soporte llama o escribe personalmente.
No el agente que gestionó el ticket — alguien con autoridad para resolver el problema.

Guión de apertura:
"Hola [nombre], he visto tu respuesta a nuestra encuesta. Quiero entender mejor qué pasó
y cómo podemos mejorar. ¿Tienes 10 minutos para contarme?"

Objetivo de la conversación:
1. Escuchar sin defender → el cliente necesita sentirse escuchado.
2. Reconocer el problema (aunque no sea culpa nuestra).
3. Ofrecer una solución concreta si existe.
4. Agradecer el feedback.

Resultado esperado: el 30% de los detractores que recibes este follow-up → pasan a pasivos o promotores.
```

**Protocolo para promotores (9-10):**
```
No dejes pasar la oportunidad:
→ Agradece el feedback de forma personalizada.
→ Pide una reseña en G2, Capterra o Google (el mejor momento para pedirla es cuando están contentos).
→ Invítalos al programa de referidos.
```

### 📈 El análisis de NPS por segmento que revela problemas específicos
El cruce del NPS con variables como plan, antigüedad, sector, o agente de soporte responsable para identificar si el problema es sistemático (el producto) o específico (un agente o un tipo de cliente) y dirigir las acciones correctivas al lugar correcto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'NPS soporte cliente, Net Promoter Score, cierre loop NPS, detractores NPS, CSAT soporte',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Retiro profesional y descanso para freelancers: cómo desconectar sin que el negocio se detenga',
                'description'       => 'Planifica y ejecuta un período de descanso real como freelance — vacaciones, retiro creativo o baja — sin que el negocio colapse, los clientes se vayan o vuelvas sintiéndote peor que antes. Con la preparación previa, la comunicación con clientes y el sistema de reactivación al volver.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Lifestyle Coach con experiencia ayudando a profesionales independientes a recuperar el derecho al descanso real que muchos freelancers creen que no tienen, y a construir los sistemas que permiten desconectar sin ansiedad porque el negocio puede aguantar 2-4 semanas sin ellos.

Perfil:
- Tu situación: [quiero vacaciones pero tengo miedo de perder clientes / llevo X meses sin descansar / quiero tomar una baja / quiero hacer un retiro creativo]
- El mayor obstáculo: [clientes que esperan disponibilidad inmediata / proyectos en curso / no tengo ingresos si no trabajo / no confío en que el negocio aguante]

## Descanso Real para Freelancers — [Perfil]

### 🧠 Por qué el freelance cree que no puede descansar (y por qué está equivocado)

**Los 3 miedos que impiden el descanso:**
```
MIEDO 1 — "Si no estoy disponible, el cliente se va":
Realidad: los clientes de calidad respetan los límites.
Si un cliente se va porque te tomas 2 semanas de vacaciones → eras un recurso, no un colaborador.
La fidelidad del cliente se construye con la calidad del trabajo, no con la disponibilidad 24/7.

MIEDO 2 — "No puedo permitirme no facturar":
Realidad: este es el problema de sistemas, no de las vacaciones.
Si no puedes permitirte 2 semanas sin ingresos → necesitas fondo de emergencia y/o retainers.
Solución: planifica el descanso como una inversión a 12 meses vista, no como una decisión de esta semana.

MIEDO 3 — "Hay demasiado trabajo pendiente":
Realidad: siempre habrá trabajo pendiente. El descanso no es para cuando "no haya nada".
El descanso es para mantener la energía cognitiva que hace que tu trabajo siga siendo bueno.
Un freelance quemado factura menos y peor que uno descansado.
```

### 📅 El plan de descanso de 6 semanas: preparación, descanso y reactivación

**FASE 1 — 6 semanas antes: la preparación**
```
SEMANA 6-5 (2 meses antes):
→ Confirma las fechas en tu calendario y bloquéalas.
→ Revisa los proyectos en curso: ¿qué se puede cerrar antes de las vacaciones?
→ Identifica si hay proyectos que necesiten una transición (briefing a un colega si subercontratas).

SEMANA 4-3:
→ Comunica a los clientes activos la fecha de tu descanso con tiempo suficiente.
  Más de 2 semanas de antelación → los clientes organizados lo agradecen.
  Menos de 1 semana → los clientes se sienten abandonados.
→ Plantea adelantar entregas para evitar que coincidan con las vacaciones.
→ Configura el autoresponder de email (ver plantilla abajo).

SEMANA 2-1:
→ Entrega los proyectos en curso o deja todo en un estado documentado.
→ Finaliza la facturación pendiente.
→ Prepara el fondo de emergencia para el período sin ingresos.
```

**El email de comunicación a clientes:**
```
Asunto: Vacaciones / Pausa del [fecha] al [fecha]

Hola [nombre],

Quería avisarte con tiempo de que estaré de descanso del [fecha] al [fecha].
Durante ese período no estaré disponible para nuevos proyectos ni para consultas.

Antes de salir:
→ [Los entregables actuales / el estado del proyecto actual]
→ Si tienes algo urgente que resolver antes de esa fecha, házmelo saber antes del [fecha] para organizarlo.

A partir del [fecha de vuelta] estaré disponible con toda la energía.

Un saludo, [nombre]
```

**FASE 2 — El descanso (las 2 semanas o el período que sea):**
```
La regla de oro: no hay excepciones.
Si haces una excepción en el día 2, habrás establecido que las vacaciones son negociables.

Opciones para gestionar la ansiedad del primer día:
→ Un bloqueo diario de 15 minutos para revisar si hay algo que no puede esperar.
  (Solo emergencias reales — define "emergencia" antes de salir: el servidor caído, sí; una duda, no.)
→ Un autoresponder que explica cuándo vuelves y quién puede ayudar mientras tanto.
```

### 🔄 La reactivación al volver: cómo volver sin saturarte en el día 1
El sistema de reactivación progresiva (los primeros 3 días son de revisión, no de ejecución), el proceso de priorización del inbox acumulado y cómo estructurar la primera semana para no llegar al día 7 igual de agotado que el día antes de las vacaciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Vacaciones freelance, descanso freelance, desconectar freelance, pausa negocio freelance, sostenibilidad freelance',
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
