<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills79Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de Pinterest para ecommerce y lifestyle',
                'description'      => 'Cómo generar tráfico orgánico de alta intención de compra con pins optimizados para tiendas online y marcas de estilo de vida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en marketing visual y Pinterest SEO con experiencia en crecimiento orgánico para ecommerce y marcas de lifestyle. Voy a darte el contexto de mi negocio y necesito que me diseñes una estrategia completa de Pinterest.

**Mi negocio:**
[Describe tu tienda, categorías de producto, ticket medio y mercado geográfico]

**Objetivo principal:**
[Tráfico a web, ventas directas, construcción de marca, captación de email]

---

## FASE 1 — AUDITORÍA Y CONFIGURACIÓN DE BASE

Antes de publicar nada, analiza si tengo bien configurado:

1. **Cuenta de empresa** activada con verificación del dominio
2. **Pinterest Analytics** conectado y con datos históricos
3. **Catálogo de productos** subido si tengo tienda (Product Pins)
4. **Rich Pins** activados para precios actualizados automáticamente
5. **Pinterest Tag** instalado en web para conversiones

Dime qué priorizar si alguno falta y el impacto real de cada uno.

---

## FASE 2 — ARQUITECTURA DE TABLEROS

Diseña la estructura de tableros para mi cuenta siguiendo este esquema:

| Tablero | Propósito | Nº pins objetivo | Frecuencia |
|---------|-----------|-----------------|------------|
| Tablero ancla de marca | Repositorio principal | 200+ | Diaria |
| Tableros de categoría | Una por línea de producto | 50-150 cada uno | 3x semana |
| Tableros de lifestyle | Inspiración relacionada con mi cliente | 100+ | 2x semana |
| Tablero secreto de programación | Buffer de contenido | Sin límite | Cuando crees |

Para cada tablero indícame:
- Nombre exacto con keyword principal
- Descripción de 500 caracteres con keywords secundarias
- Categoría de Pinterest correcta
- Si debe ser público o secreto en fase inicial

---

## FASE 3 — SISTEMA DE CREACIÓN DE PINS

### 3.1 Formatos que funcionan en 2024-2025

Describe cuándo usar cada formato y su CTR esperado:
- **Pin estático** (ratio 2:3, 1000×1500 px)
- **Pin de vídeo** (6-15 segundos, con subtítulos)
- **Pin de idea** (carrusel educativo 2-20 páginas)
- **Pin de producto** (directo al catálogo)

### 3.2 Anatomía de un pin de alta conversión

Dame una plantilla de descripción para pins de producto con este esquema:
- Primera línea: beneficio principal con keyword (no nombre del producto)
- Líneas 2-4: detalles sensoriales o de uso
- Hashtags: máximo 5, primero los de nicho luego los amplios
- Call to action: qué frases tienen más clics

### 3.3 Calendario de publicación semanal

| Día | Hora óptima (CET) | Tipo de contenido | Tablero destino |
|-----|-------------------|-------------------|-----------------|
| Lunes | 20:00 | Pin de producto nuevo | Tablero ancla |
| Martes | 14:00 | Pin inspiracional | Lifestyle |
| Miércoles | 21:00 | Pin educativo | Categoría |
| Jueves | 19:00 | Repin de contenido externo | Lifestyle |
| Viernes | 20:00 | Pin de colección o conjunto | Tablero ancla |
| Sábado | 11:00 | Pin de idea (tutorial) | Categoría |
| Domingo | 19:00 | Pin de lifestyle o mood | Lifestyle |

---

## FASE 4 — PINTEREST SEO

### Keywords y volumen de búsqueda

Explica cómo usar la barra de búsqueda de Pinterest como herramienta de investigación de keywords y proporciona la estructura de keywords en tres niveles:

1. **Keywords ancla** (1-2 palabras, volumen alto, competencia alta)
2. **Keywords de cola media** (2-3 palabras, balance)
3. **Keywords de cola larga** (4+ palabras, intención de compra alta)

Dame ejemplos concretos para una categoría típica de lifestyle/ecommerce.

### Algoritmo de Pinterest: factores de ranking

Explica con qué peso afecta cada factor al alcance orgánico:
- Calidad de la imagen (resolución, ratio, texto superpuesto)
- Relevancia del título y descripción
- Tasa de guardado (saves) en primeras 24-48 horas
- CTR hacia el sitio web
- Historial de la cuenta (dominio score)
- Frescura del contenido vs. evergreen

---

## FASE 5 — MÉTRICAS Y OPTIMIZACIÓN

Define el dashboard mensual que debo revisar:

| Métrica | Dónde verla | Objetivo mes 1-3 | Objetivo mes 4-6 |
|---------|-------------|------------------|------------------|
| Impresiones totales | Pinterest Analytics | Baseline | +50% |
| Tasa de guardado | Analytics / Pin | >1% | >2% |
| Clicks al sitio | Analytics | — | Crecimiento sostenido |
| Conversiones (si tag) | Analytics > Conversiones | — | ROAS positivo |
| Seguidores | Perfil | Secundario | Secundario |

Explica por qué los saves importan más que los likes y cómo usar los datos de "impresiones por keywords" para redirigir la estrategia.

---

## ENTREGABLES FINALES

1. Plan de acción para los primeros 30 días (semana a semana)
2. Checklist de revisión mensual
3. Los 3 errores más comunes en Pinterest para ecommerce y cómo evitarlos
4. Cuándo y cómo escalar a Pinterest Ads (presupuesto mínimo recomendado y tipos de campaña)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar una estrategia de Pinterest de principio a fin para generar tráfico orgánico cualificado hacia una tienda online.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de sistemas de cola de trabajo',
                'description'      => 'Redis Queue, Bull/BullMQ o Laravel Queues para tareas asíncronas en producción: diseño, monitoreo y gestión de fallos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como ingeniero de backend senior con experiencia en sistemas distribuidos y arquitecturas asíncronas. Necesito implementar un sistema de colas robusto en producción.

**Mi stack actual:**
[Node.js con Bull/BullMQ / Laravel con Redis / otro — especifica]

**Casos de uso que necesito cubrir:**
[Envío de emails, procesamiento de imágenes, generación de reportes, webhooks salientes, sincronizaciones con APIs externas]

**Volumen esperado:**
[Jobs por hora en pico / jobs diarios totales]

---

## PARTE 1 — FUNDAMENTOS Y ELECCIÓN DE HERRAMIENTA

### Comparativa de soluciones

| Criterio | Bull/BullMQ (Node) | Laravel Queues + Redis | SQS + Lambda | RabbitMQ |
|----------|--------------------|------------------------|--------------|----------|
| Curva de aprendizaje | Baja | Muy baja | Media | Alta |
| Persistencia | Redis (opcional DB) | DB o Redis | SQS nativo | Sí |
| Reintentos y backoff | Nativo | Nativo | Nativo | Manual |
| UI de monitoreo | Bull Board / Arena | Horizon | AWS Console | Management UI |
| Coste en producción | Solo infra Redis | Solo infra Redis | Pay per use | Infra propia |
| Escalado horizontal | Workers múltiples | Workers múltiples | Auto | Manual |

Recomiéndame la opción óptima para mi caso de uso con justificación técnica.

---

## PARTE 2 — DISEÑO DE LA ARQUITECTURA

### 2.1 Tipos de colas y prioridades

Explica cuándo crear colas separadas vs. prioridades dentro de una cola:

```
Colas recomendadas:
├── critical (prioridad máxima, SLA < 5s)  → emails transaccionales, pagos
├── default  (prioridad normal, SLA < 60s) → notificaciones, actualizaciones
├── bulk     (baja prioridad, SLA < 5min)  → reportes, sincronizaciones
└── scheduled (jobs diferidos/cron)        → resúmenes diarios, limpieza
```

### 2.2 Estructura de un Job bien diseñado

Proporciona el esqueleto de un Job con buenas prácticas:

```typescript
// BullMQ — ejemplo en TypeScript
interface EmailJobData {
  userId: string;
  templateId: string;
  variables: Record<string, string>;
  idempotencyKey: string;  // evitar duplicados
}

// Muéstrame la implementación completa con:
// - Validación de datos de entrada
// - Try/catch con error tipado
// - Logging estructurado (qué loguear y en qué nivel)
// - Respuesta del job (valor de retorno)
```

### 2.3 Configuración de reintentos y backoff

```typescript
const jobOptions = {
  attempts: 5,
  backoff: {
    type: 'exponential',  // vs 'fixed' — explica cuándo usar cada uno
    delay: 2000,          // base en ms
  },
  removeOnComplete: { count: 1000 },
  removeOnFail: { count: 5000 },
};
```

Explica la fórmula del backoff exponencial y cuántos minutos esperamos en cada intento con estos valores.

---

## PARTE 3 — IMPLEMENTACIÓN EN PRODUCCIÓN

### 3.1 Workers: concurrencia y recursos

¿Cuántos workers necesito? Dame la fórmula:

```
Workers recomendados = (CPU cores × 2) para I/O-bound jobs
Workers recomendados = (CPU cores) para CPU-bound jobs
```

Explica cómo configurar la concurrencia por worker para no saturar Redis ni la base de datos.

### 3.2 Dead Letter Queue (DLQ)

Implementa el patrón DLQ para jobs que fallan todas las repeticiones:

- Dónde almacenar los jobs muertos (Redis, DB, S3)
- Proceso de revisión manual y re-encolado
- Alertas automáticas cuando la DLQ supera N jobs

### 3.3 Idempotencia

Explica el problema de los duplicados (exactly-once vs. at-least-once) y cómo implementar idempotencia con Redis:

```typescript
async function processWithIdempotency(job: Job<EmailJobData>) {
  const lockKey = `job:processed:${job.data.idempotencyKey}`;
  const alreadyProcessed = await redis.get(lockKey);
  if (alreadyProcessed) return { skipped: true };
  // proceso...
  await redis.set(lockKey, '1', 'EX', 86400); // TTL 24h
}
```

---

## PARTE 4 — MONITOREO Y OBSERVABILIDAD

### Dashboard de salud del sistema de colas

| Métrica | Herramienta | Alerta si... |
|---------|-------------|-------------|
| Queue depth (jobs pendientes) | Prometheus + Grafana | > 10.000 en cola critical |
| Processing rate (jobs/min) | Métricas de worker | Cae > 50% del baseline |
| Error rate | Sentry / Datadog | > 1% en ventana de 5 min |
| Job duration p99 | OpenTelemetry | > SLA × 2 |
| Redis memory | Redis INFO | > 80% de maxmemory |

### Logging estructurado recomendado

```json
{
  "event": "job.completed",
  "queue": "default",
  "jobId": "abc123",
  "jobName": "SendEmailJob",
  "duration_ms": 245,
  "attempts": 1,
  "traceId": "x-trace-123"
}
```

---

## PARTE 5 — CASOS ESPECIALES

1. **Jobs de larga duración** (> 30 segundos): heartbeat para evitar que el worker los marque como stalled
2. **Jobs en cadena** (chaining): cómo orquestar pipelines donde B depende de A
3. **Rate limiting** contra APIs externas: cómo limitar a N requests/segundo desde los workers
4. **Graceful shutdown**: cómo apagar workers sin perder jobs en proceso durante deploys

---

## ENTREGABLES

1. Checklist de "listo para producción" (12 puntos)
2. Script de health check para CI/CD
3. Runbook: qué hacer cuando la cola crece sin control a las 3am
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Diseñar e implementar un sistema de colas robusto para tareas asíncronas, con manejo de errores, monitoreo y buenas prácticas de producción.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de dashboards ejecutivos',
                'description'      => 'KPIs para el C-suite: cómo presentar métricas complejas de forma clara y accionable para que los líderes tomen mejores decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en visualización de datos y diseño de información con experiencia en dashboards para dirección y C-suite. Necesito diseñar un dashboard ejecutivo que mis líderes realmente usen y entiendan.

**Contexto de la empresa:**
[Sector, tamaño, tipo de negocio B2B/B2C, modelo de ingresos]

**Audiencia del dashboard:**
[CEO, CFO, CMO, CTO — indica quiénes lo verán]

**Datos disponibles:**
[Fuentes de datos que tenemos: CRM, ERP, plataforma de marketing, herramienta de analytics, base de datos propia]

**Herramienta de BI:**
[Tableau, Power BI, Looker Studio, Metabase, Grafana, o diseño estático para presentación]

---

## FASE 1 — PRINCIPIOS DE DISEÑO PARA C-SUITE

### El problema de los dashboards que nadie usa

Explícame por qué el 70% de los dashboards ejecutivos fracasan y los 5 errores más comunes:
1. Demasiadas métricas sin jerarquía visual
2. Datos sin contexto (un número solo no dice nada)
3. Actualización manual que queda desactualizada
4. Diseño técnico en lugar de narrativo
5. Sin acción implícita: el ejecutivo ve el dato pero no sabe qué hacer

### Principio IBCS (International Business Communication Standards)

Introduce los principios IBCS aplicados a dashboards:
- **Say**: el título de cada gráfico debe ser una frase con conclusión, no una etiqueta
- **Unify**: misma escala para series comparables
- **Condense**: máxima densidad de información útil por cm²
- **Check**: resalta las desviaciones del plan, no el plan en sí

---

## FASE 2 — ARQUITECTURA DEL DASHBOARD

### Jerarquía de tres niveles

```
NIVEL 1 — Resumen ejecutivo (vista en 10 segundos)
├── 3-5 KPIs críticos con semáforo y tendencia
├── Variación vs. período anterior y vs. objetivo
└── Alerta de excepciones destacada en rojo

NIVEL 2 — Análisis por área (vista en 2 minutos)
├── Gráfico de evolución temporal (últimos 12 meses)
├── Desglose por dimensión clave (región, producto, canal)
└── Tabla de top performers y bottom performers

NIVEL 3 — Drill-down operativo (accesible desde nivel 2)
├── Tablas detalladas para el equipo de análisis
└── Exportación a Excel si es necesario
```

### Grid y composición visual

Proporciona las reglas de layout para distintos formatos:

| Formato | Columnas | Módulos máximos | Fuente mínima |
|---------|----------|-----------------|---------------|
| Pantalla 1080p | 12 col (24px gap) | 8 módulos | 13px |
| Pantalla 4K sala reuniones | 16 col | 12 módulos | 16px |
| PDF ejecutivo A4 | 2 col | 4 módulos por página | 10pt |
| Mobile (excepción) | 1 col | 3 módulos | 16px |

---

## FASE 3 — SELECCIÓN Y DISEÑO DE KPIs

### Framework para seleccionar las métricas correctas

Usa este filtro para cada métrica candidata:
1. ¿Es accionable? (¿el CEO puede hacer algo si el número está mal?)
2. ¿Es oportuna? (¿llega a tiempo para actuar?)
3. ¿Es confiable? (¿los datos son limpios y consistentes?)
4. ¿Está contextualizada? (¿tiene benchmark, objetivo o referencia?)

### Diseño de KPI tiles

Muéstrame el diseño verbal de un KPI tile completo:

```
┌─────────────────────────────┐
│ INGRESOS MRR                │
│ €127.450          ▲ +8,3%   │
│ vs. €117.680 mes anterior   │
│ Objetivo: €130.000  ✗ -2%   │
│ Pronóstico fin de mes: ✓    │
└─────────────────────────────┘
```

Explica qué información va en cada línea y por qué.

### Paleta de colores para dashboards ejecutivos

Define el sistema de colores semántico:

| Color | Uso | Hex recomendado |
|-------|-----|-----------------|
| Verde | Por encima del objetivo | #1A7F4B |
| Rojo | Por debajo del objetivo >5% | #C0392B |
| Ámbar | Desviación <5% o tendencia negativa | #E67E22 |
| Azul corporativo | Datos neutros, series principales | Variable |
| Gris | Datos secundarios, comparativa anterior | #7F8C8D |

Nota importante: nunca usar colores como decoración, solo como semántica.

---

## FASE 4 — TIPOS DE VISUALIZACIÓN Y CUÁNDO USARLOS

| Pregunta de negocio | Tipo de gráfico | Errores a evitar |
|---------------------|-----------------|------------------|
| ¿Cómo evolucionamos? | Línea temporal | No empezar el eje Y en distinto de 0 salvo contexto claro |
| ¿Cómo nos comparamos? | Barras horizontales | Nunca pie charts para más de 3 categorías |
| ¿Cuánto representa cada parte? | Barras apiladas 100% | Evitar donut charts con 6+ segmentos |
| ¿Hay correlación? | Scatter plot | Solo si la audiencia es analítica |
| ¿Cuál es la distribución? | Histograma o box plot | Raramente en dashboards ejecutivos |
| ¿Cuál es el estado? | Semáforo / gauge | Gauge solo si el rango es relevante |

---

## FASE 5 — INTERACTIVIDAD Y MANTENIMIENTO

1. **Filtros globales recomendados**: período de tiempo, región, línea de negocio
2. **Drill-through vs. drill-down**: cuándo usar cada uno
3. **Alertas automáticas**: configura umbrales para que el dashboard "te llame" cuando algo va mal
4. **Ciclo de revisión**: cuándo auditar el dashboard (trimestral recomendado)
5. **Change log**: cómo comunicar cambios en definición de métricas al equipo directivo

---

## ENTREGABLES

1. Especificación técnica del dashboard (una página): KPIs, fuentes, frecuencia de actualización, responsable de cada dato
2. Plantilla de naming convention para gráficos con conclusión integrada
3. Checklist de QA antes de presentar el dashboard a dirección
4. Protocolo de reunión de revisión mensual de 30 minutos usando el dashboard
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar dashboards ejecutivos que el C-suite realmente use: jerarquía visual, selección de KPIs, tipos de gráfico y principios de diseño de información.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Forecast de ventas',
                'description'      => 'El proceso de previsión que hace al equipo responsable y al CFO confiar en los números: metodología, cadencias y gestión de sesgos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de operaciones de ventas (Sales Ops) con experiencia en CRM, forecasting y gestión de pipeline. Necesito construir un proceso de forecast que sea creíble, preciso y que fomente la responsabilidad en el equipo.

**Mi contexto:**
[Tamaño del equipo de ventas, ticket medio, ciclo de venta típico en días, sector, CRM que usas]

**Problema actual:**
[El forecast es demasiado optimista / hay mucha varianza / el CFO no confía en los números / los comerciales no actualizan el CRM]

---

## PARTE 1 — FUNDAMENTOS DEL FORECASTING DE VENTAS

### Por qué los forecasts suelen fallar

Explícame los sesgos cognitivos que distorsionan las previsiones de ventas:

1. **Wishful thinking**: el comercial cree que todo va a cerrar
2. **Sandbagging**: el comercial es conservador para superar fácilmente
3. **Recency bias**: sobrepondera los últimos resultados
4. **Anchoring**: el primer número que sale tiende a quedarse
5. **Commit pressure**: el manager presiona y el número sube sin fundamento

¿Cómo detecta cada sesgo un buen director de ventas? Dame señales concretas.

### Los tres modelos de forecast

| Modelo | Cómo funciona | Cuándo usarlo | Precisión esperada |
|--------|---------------|---------------|-------------------|
| Bottom-up (oportunidad a oportunidad) | Suma de probabilidades por deal | Ciclos largos, B2B enterprise | Alta si CRM actualizado |
| Top-down (cuota a forecast) | % histórico de cumplimiento × cuota | Equipos grandes, ciclos cortos | Media, rápido |
| Híbrido | Bottom-up validado con top-down | Escenarios complejos | Alta |

Recomiéndame cuál usar para mi caso.

---

## PARTE 2 — ETAPAS DEL PIPELINE Y PROBABILIDADES

### Diseño de las etapas del funnel

Define 6-7 etapas de pipeline con criterios objetivos de entrada (exit criteria), no subjetivos:

| Etapa | Nombre | Criterio de entrada (verificable) | Prob. cierre |
|-------|--------|-----------------------------------|-------------|
| 1 | Prospecto cualificado | BANT o MEDDIC completo | 10% |
| 2 | Discovery completado | Reunión de necesidades con decisor | 20% |
| 3 | Demo/propuesta | Presentación realizada, fecha de seguimiento pactada | 35% |
| 4 | Propuesta enviada | Documento enviado, price range confirmado | 55% |
| 5 | Negociación | Contrato en revisión legal o con objeciones activas | 75% |
| 6 | Verbal | Compromiso verbal del decisor, pendiente de firma | 90% |
| 7 | Cerrado ganado | Contrato firmado, PO recibida | 100% |

Adapta estas etapas y probabilidades a mi sector y ciclo de venta.

---

## PARTE 3 — CADENCIA DE FORECAST

### Reunión semanal de pipeline (45 minutos)

Dame el formato exacto de la reunión:

**Participantes**: Manager + cada comercial individualmente (no en grupo)

**Agenda**:
1. (5 min) Revisión de compromisos de la semana pasada: ¿qué se dijo que cerraría?
2. (15 min) Revisión de oportunidades en etapa 5-6-7: actualizaciones de estado
3. (10 min) Nuevas oportunidades añadidas esta semana: ¿cumplen criterios de etapa 1?
4. (10 min) Oportunidades sin movimiento en 14+ días: ¿activas o limpiar pipeline?
5. (5 min) Commit de la semana: número que el comercial se compromete a cerrar

**Regla de oro**: El manager hace preguntas, el comercial habla. No al revés.

### Revisión mensual con dirección (30 minutos)

| Sección | Contenido | Tiempo |
|---------|-----------|--------|
| Resultado del mes | Actual vs. objetivo, % de cumplimiento | 5 min |
| Forecast próximo mes | Commit + best case + worst case | 10 min |
| Pipeline de 90 días | Cobertura necesaria para cumplir cuota | 10 min |
| Riesgos y acciones | Top 3 deals en riesgo y plan de contingencia | 5 min |

---

## PARTE 4 — MÉTRICAS DE PIPELINE

Define y enseñame a calcular:

1. **Pipeline Coverage Ratio** = Pipeline total / Cuota
   - ¿Cuánto necesito? (3x como mínimo, 4x recomendado para ciclos cortos)

2. **Win Rate por etapa** = Deals ganados / Deals que entraron en esa etapa
   - Cómo usarlo para detectar etapas con problemas

3. **Average Sales Cycle** = Días medios desde etapa 1 a cierre
   - Cómo afecta al forecast de los próximos 30/60/90 días

4. **Deal Velocity** = (Nº deals × Win Rate × ACV) / Ciclo de venta
   - El número que predice los ingresos futuros más fielmente

5. **Forecast Accuracy** = |Forecast - Real| / Real × 100
   - Objetivo: < 10% de desviación en el mejor forecast del mes

---

## PARTE 5 — FORECAST EN EL CRM

### Campos obligatorios en cada oportunidad

Configura tu CRM para que estos campos sean obligatorios al avanzar de etapa:
- Fecha de cierre esperada (con fecha real, no trimestre vago)
- Monto del deal (importe verificado con el cliente)
- Decisor identificado (nombre + cargo)
- Próximo paso concreto (con fecha)
- Commit del comercial (sí/no/best case)

### Los tres escenarios de forecast

| Escenario | Definición | Cálculo |
|-----------|-----------|---------|
| Commit | Lo que el comercial garantiza | Etapas 6-7 + parte de 5 verificada |
| Best case | Si todo va bien | Commit + deals de etapa 4 con señales positivas |
| Worst case | Si algo falla | Solo etapa 7 + 50% de etapa 6 |

---

## ENTREGABLES

1. Plantilla de Excel para el forecast mensual (estructura de columnas)
2. Script para la revisión 1:1 semanal de pipeline (preguntas exactas)
3. Definición de "deal de riesgo": los 5 indicadores de una oportunidad en peligro
4. Proceso de escalado: cuándo llevar un deal crítico a dirección general
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Construir un proceso de forecast de ventas creíble con metodología, cadencias de revisión, métricas de pipeline y configuración del CRM.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del backlog a escala',
                'description'      => 'Sistemas para priorizar cuando tienes 200 issues, 5 squads y muchos stakeholders que compiten por la atención del equipo de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Product Manager senior con experiencia en escalado de productos y gestión de múltiples equipos. Tengo un backlog que ha crecido sin control y necesito un sistema para mantenerlo ordenado, priorizado y accionable.

**Mi situación:**
[Número de issues en el backlog, número de squads, tipo de producto SaaS/app/plataforma, principales stakeholders internos]

**El problema principal:**
[El backlog es un cementerio de ideas / no sabemos qué priorizar / todos los stakeholders dicen que su cosa es urgente / los devs no saben qué hacer a continuación]

---

## PARTE 1 — DIAGNÓSTICO DEL BACKLOG ACTUAL

### Los 4 síntomas de un backlog enfermo

1. **Backlog infinito**: crecimiento sin política de entrada ni salida
2. **Issues zombie**: tickets de +6 meses que nadie toca pero nadie cierra
3. **Sin jerarquía**: epics, stories, bugs y tasks mezclados sin estructura
4. **Stakeholders como jefes del backlog**: cada uno añade directamente sin filtro

Para cada síntoma, dame:
- Cómo diagnosticarlo en 15 minutos
- El impacto real en velocidad del equipo
- La solución estructural (no parche)

### Auditoría de backlog en 2 horas

Diseña el proceso de auditoría semestral con estos criterios para cada issue:

| Criterio | Preguntas | Acción |
|----------|-----------|--------|
| Relevancia | ¿Sigue siendo válido el problema que resuelve? | Mantener / Archivar |
| Urgencia | ¿Hay consecuencia de no hacerlo este trimestre? | Priorizar / Diferir |
| Completitud | ¿Está suficientemente definido para estimarlo? | Refinar / Eliminar |
| Origen | ¿Quién lo pidió y sigue siendo stakeholder activo? | Validar / Cerrar |

---

## PARTE 2 — ESTRUCTURA DEL BACKLOG

### Jerarquía de items

```
Iniciativa (Nivel 0)
└── Épica (Nivel 1) — objetivo de negocio, 2-6 semanas
    ├── Historia de usuario (Nivel 2) — valor entregado, 1-5 días
    │   ├── Subtarea técnica (Nivel 3) — si el equipo lo necesita
    │   └── Bug asociado (Nivel 3)
    └── Spike de investigación (Nivel 2 especial)
```

Para cada nivel, define:
- Criterio de aceptación mínimo
- Quién puede crear items de ese nivel
- Tiempo máximo en backlog antes de revisión

### Separación de backlogs

Explica cuándo y cómo dividir el backlog en:
1. **Product Backlog** (ideas y funcionalidades)
2. **Bug Backlog** (defectos con impacto en usuario)
3. **Tech Debt Backlog** (mejoras técnicas internas)
4. **Research Backlog** (spikes, experimentos, validaciones)

¿Qué ratio de dedicación por sprint recomendado para cada uno?

---

## PARTE 3 — MARCOS DE PRIORIZACIÓN

### WSJF (Weighted Shortest Job First) — para entornos SAFe o a escala

```
WSJF = Coste del Retraso / Duración del Job

Coste del Retraso = Valor para el usuario + Criticidad temporal + Reducción de riesgo/oportunidad

Escala de puntuación: Fibonacci (1, 2, 3, 5, 8, 13, 20)
```

Muéstrame cómo aplicarlo en una tabla con 5 items de ejemplo y quién vota qué.

### ICE Score — para priorización rápida

```
ICE = Impact × Confidence × Ease

Impact:     ¿Cuánto mueve la métrica norte si funciona? (1-10)
Confidence: ¿Cuánta evidencia tenemos de que funcionará? (1-10)
Ease:       ¿Cuánto esfuerzo requiere? (10 = muy fácil) (1-10)
```

### RICE Score — para equipos de producto con métricas claras

```
RICE = (Reach × Impact × Confidence) / Effort

Reach:      Usuarios afectados por trimestre
Impact:     0.25 / 0.5 / 1 / 2 / 3
Confidence: 100% / 80% / 50%
Effort:     Person-months
```

¿Cuándo usar cada marco? Dame una guía de selección.

---

## PARTE 4 — GESTIÓN DE STAKEHOLDERS Y DEMANDAS

### El proceso de intake (entrada controlada al backlog)

Diseña el formulario de intake que todos los stakeholders deben completar:

1. Problema que resuelve (no la solución)
2. Usuario afectado y frecuencia del problema
3. Evidencia cuantitativa (datos, quejas de soporte, pérdida de revenue)
4. Coste de no hacerlo (qué pasa si no lo construimos)
5. Alternativas evaluadas
6. Urgencia real vs. urgencia percibida

### Matriz de stakeholders por tipo de demanda

| Tipo de stakeholder | Motivación típica | Cómo gestionar su demanda |
|--------------------|--------------------|---------------------------|
| Ventas | Necesitan feature para cerrar deal | Validar con cuántos deals y revenue en juego |
| Soporte/CS | Bug que genera tickets repetitivos | Cuantificar tiempo de soporte desperdiciado |
| Técnico (CTO/Lead) | Deuda técnica, escalabilidad | Traducir a riesgo de negocio futuro |
| Dirección general | Visión estratégica | Conectar con OKRs del trimestre |
| Marketing | Features para campaigns | Fecha límite de la campaign como criterio |

### Reunión de priorización cross-funcional (mensual, 90 min)

Define el formato de la reunión donde participan representantes de cada área:
- Preparación previa (qué enviar antes)
- Reglas de debate (quién puede votar qué)
- Técnica de votación (dot voting, silent writing, WSJF colaborativo)
- Cómo documentar los acuerdos
- Cómo comunicar a los que no consiguieron su prioridad

---

## PARTE 5 — BACKLOG CEREMONIES Y MANTENIMIENTO

### Refinamiento semanal (1 hora por squad)

| Segmento | Duración | Objetivo |
|----------|----------|----------|
| Top 5 items de próximo sprint | 30 min | Detallar criterios de aceptación, descomponer, estimar |
| Items de sprint+2 | 20 min | Aclarar dudas técnicas, identificar dependencias |
| Nuevas entradas de la semana | 10 min | Clasificar, descartar basura, situar en backlog |

### Política de archivo automático

Define reglas de auto-archivado para mantener el backlog limpio:
- Issues con más de 12 meses sin actividad: archivar con etiqueta "revisión 2025"
- Issues con less than 3 votos o 0 comentarios después de 6 meses: revisar para cierre
- Bugs marcados como "won't fix" después de 3 sprints sin acción: cerrar con nota

---

## ENTREGABLES

1. Plantilla de epic en Jira/Linear/Notion (campos mínimos)
2. Dashboard de salud del backlog (4 métricas clave)
3. Plantilla de comunicación para stakeholders cuya prioridad fue rechazada
4. Checklist trimestral de limpieza de backlog
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Crear un sistema de gestión de backlog escalable con estructura, marcos de priorización, proceso de intake y governance de stakeholders.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Liderazgo situacional',
                'description'      => 'Adapta tu estilo de management según la madurez y autonomía de cada miembro del equipo para obtener mejores resultados con menos fricción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como coach de liderazgo y desarrollo organizacional con experiencia en el modelo de Liderazgo Situacional de Hersey & Blanchard y sus derivados modernos. Necesito aprender a adaptar mi estilo de gestión a cada persona de mi equipo.

**Mi rol:**
[Manager de equipo, director de área, team lead técnico — especifica]

**Tamaño del equipo:**
[Número de personas a cargo, si son directos o hay mandos intermedios]

**Contexto:**
[Empresa en crecimiento, equipo nuevo, equipo consolidado con rotación reciente, primer rol de management]

---

## PARTE 1 — EL MODELO DE LIDERAZGO SITUACIONAL

### Los cuatro estilos de liderazgo

Explica cada estilo con ejemplos concretos de comportamiento del manager:

| Estilo | Nombre | Conducta directiva | Conducta de apoyo | Cuándo usarlo |
|--------|--------|-------------------|-------------------|---------------|
| E1 | Dirigir | Alta | Baja | Colaborador nuevo o tarea nueva para él |
| E2 | Entrenar | Alta | Alta | Colaborador con algo de experiencia pero inseguro |
| E3 | Apoyar | Baja | Alta | Colaborador capaz pero desmotivado o con dudas |
| E4 | Delegar | Baja | Baja | Colaborador autónomo, competente y motivado |

Para cada estilo, dame:
- 3 comportamientos específicos del manager
- 3 frases o preguntas típicas que usaría
- El error más común al aplicarlo

### Los cuatro niveles de desarrollo del colaborador

| Nivel | Código | Competencia | Compromiso | Perfil típico |
|-------|--------|-------------|------------|---------------|
| 1 | D1 | Baja | Alto | Nuevo entusiasta ("no sé, pero quiero") |
| 2 | D2 | Media-baja | Bajo | Novato decepcionado ("sé un poco, pero me cuesta") |
| 3 | D3 | Media-alta | Variable | Profesional capaz pero inseguro o desmotivado |
| 4 | D4 | Alta | Alto | Expert autónomo y comprometido |

El emparejamiento correcto: D1→E1, D2→E2, D3→E3, D4→E4

---

## PARTE 2 — DIAGNÓSTICO DE MI EQUIPO

### Herramienta de diagnóstico individual

Ayúdame a evaluar a cada miembro de mi equipo en dos dimensiones por TAREA ESPECÍFICA (no de forma general):

**Dimensión 1 — Competencia** (para esta tarea concreta)
- ¿Ha hecho esta tarea antes con éxito?
- ¿Tiene el conocimiento técnico necesario?
- ¿Ha demostrado buen juicio en situaciones similares?

**Dimensión 2 — Compromiso** (para esta tarea concreta)
- ¿Muestra entusiasmo o resistencia?
- ¿Toma iniciativa o espera instrucciones?
- ¿Confía en sí mismo/a para hacerlo?

Crea una matriz de evaluación para 5 personas ficticias de ejemplo y clasifícalas en D1-D4 para diferentes tareas.

### El error más común: el estilo por defecto

Explica qué es el "estilo dominante" y por qué los managers tienden a aplicar el mismo estilo a todos:
- El manager muy directivo que microgestiona a sus expertos (D4 con E1)
- El manager muy delegador que abandona a sus novatos (D1 con E4)
- Consecuencias en la motivación, la performance y la rotación

---

## PARTE 3 — APLICACIÓN PRÁCTICA

### Conversación de diagnóstico (1:1 estructurada)

Dame el guión de una conversación de 30 minutos con un colaborador para identificar su nivel de desarrollo en una tarea nueva:

1. Apertura sin juicio: establecer que el objetivo es apoyarle, no evaluarle
2. Preguntas de competencia: qué ha hecho antes, qué le resulta natural, dónde ve brechas
3. Preguntas de compromiso: cómo se siente ante esta responsabilidad, qué le preocupa
4. Acuerdo de estilo: "para esta tarea voy a [describir tu estilo], ¿te parece bien?"

### Transición de estilos: cómo evolucionar sin crear confusión

Explica el proceso de transición gradual de E1 a E4:
- ¿Cuánto tiempo en cada fase?
- Señales de que la persona está lista para más autonomía
- Señales de que necesitas volver a un estilo más directivo (regresión)
- Cómo comunicar el cambio de estilo al colaborador

### Liderazgo situacional en situaciones críticas

Analiza cómo adaptar el estilo en estos escenarios:

1. **Colaborador D4 que tiene que aprender una tecnología nueva** → Regresa a D1/D2 para esa tarea
2. **Colaborador D3 que acaba de tener un fracaso** → Compromiso cae, competencia se mantiene
3. **Colaborador D1 que intenta saltarse el proceso** → Fricción entre su entusiasmo y su falta de criterio
4. **Equipo completo en una situación de crisis** → ¿Qué estilo usar con el grupo?

---

## PARTE 4 — CONVERSACIONES DIFÍCILES CON CADA ESTILO

### Dar feedback según el nivel de desarrollo

| Nivel | Tono | Énfasis | Ejemplo de apertura |
|-------|------|---------|---------------------|
| D1 | Directivo, claro, alentador | Qué hacer exactamente | "Lo que necesito que hagas es..." |
| D2 | Cercano, explicativo | Por qué se hace así + apoyo emocional | "Entiendo que esto es difícil, y tiene sentido..." |
| D3 | Consultivo, reforzador | Destacar competencia, explorar inseguridades | "¿Qué crees tú que funcionó bien?" |
| D4 | Parejo, estratégico | Resultados, impacto, visión | "¿Cómo ves tú esto a largo plazo?" |

### Poner límites sin desmotivar

Cómo decir "no" y redirigir en cada estilo:
- D1: "No todavía, aquí está el proceso correcto..."
- D2: "Entiendo tu frustración, y hay una razón por la que lo hacemos así..."
- D3: "Confío en ti para esto, y si sientes que no puedes, hablamos..."
- D4: "Tú decides cómo lo haces, solo necesito [resultado] para [fecha]"

---

## ENTREGABLES

1. Plantilla de evaluación individual: una hoja por colaborador con sus tareas y nivel D
2. Guía de preguntas para 1:1 según nivel de desarrollo
3. Autodiagnóstico del manager: ¿cuál es tu estilo dominante y en qué te puede perjudicar?
4. Plan de desarrollo trimestral para llevar a un colaborador de D2 a D3 en una tarea específica
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Aprender a adaptar el estilo de management a cada colaborador según su competencia y compromiso, usando el modelo de Liderazgo Situacional.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control presupuestario mensual',
                'description'      => 'El proceso de revisión de presupuesto que detecta desviaciones antes de que sea tarde y convierte los números en decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller financiero senior con experiencia en control de gestión, análisis de desviaciones y reportes para dirección. Necesito diseñar el proceso mensual de control presupuestario de mi empresa.

**Mi empresa:**
[Sector, tamaño (facturación anual aproximada), número de centros de coste o departamentos, ERP o herramienta contable que usas]

**Situación actual:**
[Tenemos presupuesto pero no lo revisamos / las desviaciones las detectamos tarde / los managers no entienden sus números / el cierre contable llega demasiado tarde para actuar]

---

## PARTE 1 — FUNDAMENTOS DEL CONTROL PRESUPUESTARIO

### La diferencia entre contabilidad y control de gestión

Explica la distinción y por qué las empresas confunden los dos:
- **Contabilidad**: refleja lo que pasó (pasado, legal, exacto)
- **Control de gestión**: anticipa lo que va a pasar (futuro, aproximado, accionable)

El error más común: esperar el cierre contable del mes para tomar decisiones que ya son tardías.

### Los tres niveles de control

```
NIVEL 1 — Seguimiento semanal (operativo)
├── Cash flow: pagos y cobros de la semana
├── Ventas vs. objetivo acumulado
└── Alertas de gasto extraordinario

NIVEL 2 — Cierre mensual (táctico)
├── P&L real vs. presupuesto por línea
├── Análisis de desviaciones significativas
└── Forecast actualizado del trimestre

NIVEL 3 — Revisión trimestral (estratégica)
├── Revisión del presupuesto anual
├── Reprevisión (rolling forecast)
└── Análisis de rentabilidad por producto/cliente/canal
```

---

## PARTE 2 — EL PROCESO DE CIERRE MENSUAL

### Calendario de cierre (días hábiles tras el fin de mes)

| Día hábil | Tarea | Responsable |
|-----------|-------|-------------|
| D+1 | Provisiones de gastos devengados no facturados | Controller |
| D+2 | Contabilización de facturas pendientes | Administración |
| D+3 | Conciliación bancaria | Tesorería |
| D+4 | Revisión de centros de coste con managers | Controller |
| D+5 | Cierre provisional y P&L preliminar | Controller |
| D+7 | Informe de desviaciones a dirección | Controller + CFO |
| D+10 | Reunión de revisión con equipo directivo | Dirección |

### Checklist de cierre mensual

Define los 15 puntos que debe verificar el controller antes de cerrar el mes:

1. Todas las facturas del mes están registradas (o provisionadas)
2. Los salarios y cargas sociales están correctamente periodificados
3. Las amortizaciones están registradas automáticamente
4. Los ingresos diferidos están correctamente reconocidos
5. Las devoluciones y abonos del período están cruzados
6. Los anticipos a proveedores están reclasificados correctamente
7. Los gastos de viaje del mes están aprobados y contabilizados
8. Las provisiones de insolvencias están actualizadas
9. Las intercompany están cuadradas (si aplica)
10. El stock o los proyectos en curso tienen el valor correcto

---

## PARTE 3 — ANÁLISIS DE DESVIACIONES

### Las cuatro categorías de desviación

| Tipo | Descripción | Acción |
|------|-------------|--------|
| Desviación de volumen | Vendimos más/menos de lo presupuestado | Revisar forecast de ventas |
| Desviación de precio/margen | El mix de producto o precio cambió | Análisis de pricing y descuentos |
| Desviación de gasto fijo | Un departamento gastó más de su presupuesto | Conversación con el manager |
| Desviación temporal | El gasto fue real pero en mes diferente al presupuestado | Reclasificar, no alarmar |

### Umbral de materialidad: cuándo actuar

Define los umbrales de alerta:

```
Nivel verde (informativo):
  - Desviación < 5% o < [X]€ en una línea de gasto

Nivel ámbar (revisar en reunión mensual):
  - Desviación 5-15% o [X]-[Y]€
  - Tendencia negativa dos meses consecutivos

Nivel rojo (acción inmediata, no esperar a la reunión):
  - Desviación > 15% o > [Y]€
  - Impacto en resultado del trimestre
  - Gasto no presupuestado mayor de [Z]€
```

### El informe de desviaciones (máximo 2 páginas)

Estructura el informe que va a dirección:

**Página 1: Resumen ejecutivo**
- EBITDA real vs. presupuesto (un solo número y porcentaje)
- Las 3 desviaciones más significativas con causa raíz
- Forecast actualizado del trimestre y del año

**Página 2: Detalle por línea P&L**
- Tabla con columnas: Presupuesto mes / Real mes / Desviación % / Presupuesto YTD / Real YTD / Desviación YTD % / Forecast año
- Comentario de texto para cada línea con desviación significativa

---

## PARTE 4 — GESTIÓN DE MANAGERS DE ÁREA

### Cómo involucrar a los responsables de negocio

El error clásico: el controller hace el análisis y la dirección se entera al final del mes.

Diseña el proceso de revisión pre-cierre con cada manager:
1. El día 2 del mes siguiente: envía un resumen preliminar al manager de área
2. El manager tiene 24h para revisar y comentar (conoce el contexto operativo)
3. El controller incorpora las aclaraciones antes del informe a dirección
4. El manager firma (metafóricamente) su propio presupuesto

### Reunión mensual con managers de área (30 minutos)

Agenda para la revisión 1:1 de presupuesto con un manager de departamento:
1. Resultado real del área vs. presupuesto: 3 datos clave
2. Causa raíz de las desviaciones principales: preguntas abiertas, no acusaciones
3. Acciones correctivas si hay desviación negativa: quién, qué y cuándo
4. Previsión del mes siguiente: hay algo inusual que debamos provisionar
5. Solicitudes de reasignación presupuestaria si necesitan flexibilidad

---

## PARTE 5 — ROLLING FORECAST

### Del presupuesto estático al forecast dinámico

Explica por qué el presupuesto anual fijo se vuelve irrelevante en el segundo semestre y cómo implementar un rolling forecast de 12 meses:

- **Frecuencia**: actualización mensual, siempre 12 meses hacia adelante
- **Quién lo alimenta**: managers de área con datos de negocio, controller con datos financieros
- **Qué cambia vs. el presupuesto**: las hipótesis de negocio se actualizan con la realidad
- **Cómo conviven**: el presupuesto es el compromiso anual; el rolling forecast es la predicción más realista

---

## ENTREGABLES

1. Plantilla Excel del informe mensual de control presupuestario (estructura de filas y columnas)
2. Plantilla de email mensual para managers de área con sus números y las preguntas que necesitas que respondan
3. Política de gastos no presupuestados: proceso de aprobación de urgencia
4. KPIs del proceso de control: cómo medir si el proceso en sí es eficiente (días de cierre, precisión del forecast)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar el proceso mensual de control presupuestario: cierre, análisis de desviaciones, reporting a dirección y gestión de managers de área.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de franquicia en España',
                'description'      => 'Elementos obligatorios, el precontrato de 20 días y los derechos del franquiciado: guía legal para entender y negociar un contrato de franquicia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado mercantil especializado en derecho de franquicias y contratos de distribución en España. Necesito entender en profundidad los contratos de franquicia para [franquiciante que quiere estructurar su red / franquiciado que va a firmar un contrato].

**Mi situación:**
[Soy el franquiciante y quiero crear mi red de franquicias / Soy un franquiciado potencial y voy a firmar un contrato con la enseña X]

**Sector:**
[Restauración, retail, servicios, hostelería, formación, salud, etc.]

**Contexto:**
[Primera vez que entro en el mundo de la franquicia / tengo experiencia previa / contrato ya negociado y necesito revisarlo]

---

## PARTE 1 — MARCO LEGAL DE LA FRANQUICIA EN ESPAÑA

### Regulación aplicable

Explica el marco normativo completo:

1. **Real Decreto 201/2010**, de 26 de febrero, por el que se regula el ejercicio de la actividad comercial en régimen de franquicia y la comunicación de datos al registro de franquiciadores
2. **Código de Deontología Europeo de la Franquicia** (referencia no vinculante pero relevante)
3. **Código Civil**: aplicación subsidiaria para obligaciones contractuales
4. **Ley de Competencia Desleal**: protección contra prácticas abusivas

¿Existe en España una ley específica de franquicias? Explica la diferencia con el modelo francés o de la UE.

### El Registro de Franquiciadores

Requisitos para estar inscrito:
- Quién está obligado a inscribirse
- Qué datos se comunican
- Consulta pública: cómo verificar que el franquiciante está registrado
- Consecuencias de operar sin registro

---

## PARTE 2 — EL DOCUMENTO DE INFORMACIÓN PRECONTRACTUAL (DIP)

### La obligación de los 20 días

Explica en detalle el artículo 62 de la Ley de Ordenación del Comercio Minorista (LOCM) y el RD 201/2010:
- El franquiciante debe entregar el DIP con **mínimo 20 días de antelación** a la firma del contrato
- La firma del precontrato o el pago de cualquier cantidad también activa el plazo

### Contenido mínimo obligatorio del DIP

| Apartado | Contenido obligatorio | Por qué es importante |
|----------|----------------------|----------------------|
| Identificación del franquiciante | Razón social, domicilio, datos registrales | Verificar solidez jurídica |
| Descripción de la actividad | Qué vende, cómo opera la red | Entender el negocio real |
| Experiencia en el sector | Años de operación propia antes de franquiciar | Señal de madurez del modelo |
| Red de franquiciados | Número de establecimientos propios y franquiciados | Solidez de la red |
| Evolución de la red | Aperturas y cierres de los últimos 5 años | Detectar problemas de supervivencia |
| Resultados económicos de la red | P&L orientativo de un franquiciado tipo | El dato más valioso (y el más manipulado) |
| Obligaciones económicas | Canon de entrada, royalties, publicidad, mínimos | El coste real total |
| Territorio y exclusividad | Si hay zona exclusiva, cómo se define y protege | Crítico para la viabilidad |
| Duración y renovación | Años del contrato, condiciones de renovación | Seguridad jurídica a largo plazo |
| Causas de rescisión | Cuándo puede el franquiciante terminar el contrato | Riesgos de pérdida de inversión |

### Red flags en el DIP

Explícame qué señales de alarma buscar:
1. Proyecciones económicas sin base real o con asteriscos poco claros
2. Red en fuerte contracción (más cierres que aperturas)
3. Sin experiencia propia previa (el franquiciante nunca ha operado el negocio)
4. Zona exclusiva indefinida o con muchas excepciones
5. Cláusulas de rescisión unilateral muy amplias a favor del franquiciante

---

## PARTE 3 — EL CONTRATO DE FRANQUICIA

### Cláusulas esenciales que debe contener todo contrato

**Bloque 1 — Objeto y licencia**
- Descripción del know-how transmitido
- Licencia de uso de marca (no cesión, solo licencia)
- Obligación de actualizar el Manual Operativo

**Bloque 2 — Obligaciones económicas**
- Canon de entrada: importe, forma de pago, si es reembolsable en algún caso
- Royalty mensual: porcentaje sobre facturación bruta o neta, base de cálculo
- Canon de publicidad: porcentaje adicional, fondo común o gestión del franquiciante
- Mínimos de compra: si hay obligación de comprar a proveedores del franquiciante

**Bloque 3 — Territorio**
- Definición exacta de la zona de exclusividad (código postal, municipio, radio en km)
- Qué canales quedan dentro y fuera (¿el e-commerce respeta la exclusiva?)
- Derecho de tanteo o preferencia si el franquiciante abre cerca

**Bloque 4 — Duración y renovación**
- Plazo inicial (5, 7 o 10 años son habituales)
- Condiciones de renovación: automática, sujeta a auditoría, con nuevo canon
- Derecho de traspaso: si el franquiciado puede vender su franquicia

**Bloque 5 — Terminación**
- Causas de terminación con preaviso (mutuo acuerdo, no renovación)
- Causas de terminación inmediata por incumplimiento grave
- Consecuencias post-contractuales: no competencia, devolver manuales, cambio de imagen

### La cláusula de no competencia post-contractual

¿Es válida? ¿Durante cuánto tiempo? ¿En qué territorio?

Referencia al Reglamento (UE) 330/2010 sobre restricciones verticales: la no competencia post-contractual no puede superar 1 año y solo si está justificada en la protección del know-how.

---

## PARTE 4 — NEGOCIACIÓN DEL CONTRATO

### Qué es negociable y qué no

| Elemento | Negociabilidad | Estrategia |
|----------|---------------|------------|
| Canon de entrada | Baja (afecta a otros franquiciados) | Pedir descuento en segundas unidades |
| Royalty | Muy baja (igual para todos) | Negociar período de gracia inicial |
| Zona de exclusividad | Media | Ampliar el área con criterios objetivos |
| Plazo del contrato | Media | Puede alargarse a cambio de compromiso |
| Condiciones de renovación | Media-alta | Fijar condiciones ahora, no dejar abiertas |
| Inversión mínima exigida | Baja | Pedir apoyo financiero o fases |

### Preguntas que debes hacer antes de firmar

1. ¿Puedo hablar con franquiciados actuales (y ex-franquiciados) sin intermediarios del franquiciante?
2. ¿Cuál es el EBITDA real (no estimado) de los franquiciados con más de 2 años de antigüedad?
3. ¿Qué porcentaje de franquiciados renueva al finalizar su contrato?
4. ¿Qué soporte recibo los primeros 6 meses (formación, lanzamiento, visitas)?
5. ¿Cuántos franquiciados han cerrado en los últimos 3 años y por qué?

---

## ENTREGABLES

1. Checklist de revisión del DIP: 20 puntos antes de reunirte con el franquiciante
2. Lista de preguntas para hablar con franquiciados actuales de la red
3. Las 5 cláusulas más peligrosas para el franquiciado y cómo proponer alternativas
4. Protocolo de due diligence en 3 semanas antes de firmar un contrato de franquicia
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Entender el marco legal de la franquicia en España, el DIP y los 20 días, y revisar o negociar un contrato de franquicia con conocimiento.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico de nivel 2',
                'description'      => 'Cuándo escalar, qué información recoger y cómo gestionar la transferencia sin perder al cliente: el manual del agente de soporte L2.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de operaciones de customer support con experiencia en diseño de estructuras de soporte multinivel y gestión de escalaciones. Necesito definir o mejorar el rol de soporte técnico de nivel 2 en mi empresa.

**Mi contexto:**
[SaaS B2B / producto de consumo / plataforma marketplace / software on-premise — especifica]

**Estructura actual:**
[Solo tenemos L1 y L2 / tenemos también L3 técnico / el soporte lo hace el mismo equipo sin niveles definidos]

**Problemas actuales:**
[Escalamos demasiado / escalamos de menos y los clientes esperan / L1 no sabe cuándo pasar el ticket / L2 recibe tickets sin información suficiente]

---

## PARTE 1 — DEFINICIÓN DEL NIVEL 2

### La pirámide de soporte

```
L1 — Primera línea (generalista)
├── Canal: chat, email, teléfono
├── Resolución: preguntas frecuentes, errores de usuario, guías paso a paso
├── Tiempo de resolución objetivo: < 4 horas en horario laboral
└── Escalación a L2 si: no resuelto en 1 turno de comunicación o criterio técnico

L2 — Nivel técnico (especialista)
├── Canal: email, pantalla compartida si necesario
├── Resolución: bugs reproducibles, configuraciones complejas, integraciones, errores de datos
├── Tiempo de resolución objetivo: < 48 horas hábiles
└── Escalación a L3/Ingeniería si: bug confirmado en código, corrupción de datos, fallo de infraestructura

L3 — Ingeniería / Producto
├── Canal: ticket interno, no contacto directo con cliente salvo excepciones
├── Resolución: correcciones de código, hotfixes, restauración de datos
└── Comunicación al cliente: siempre a través de L2
```

### Diferencias clave entre L1 y L2

| Dimensión | L1 | L2 |
|-----------|----|----|
| Conocimiento requerido | Producto y procesos de usuario | Arquitectura, integraciones, base de datos, logs |
| Acceso a herramientas | CRM, portal de ayuda | Consola de administración, logs, entornos de staging |
| Gestión del ticket | Único propietario | Puede involucrar a varios equipos |
| Comunicación con cliente | Frecuente, empática | Técnica pero también empática |
| Autonomía | Baja-media | Media-alta |

---

## PARTE 2 — CRITERIOS DE ESCALACIÓN L1 → L2

### El árbol de decisión de escalación

Diseña el árbol de decisión que L1 debe seguir antes de escalar:

```
¿He buscado en la base de conocimiento? → No → Buscar primero
¿He reproducido el problema con los pasos que describe el cliente? → No → Reproducir antes de escalar
¿El problema ya está documentado como bug conocido? → Sí → Informar al cliente y añadir al bug tracker
¿El cliente tiene workaround disponible? → Sí → Ofrecer workaround + escalar para fix definitivo
¿Hay impacto en producción o en más de 5 usuarios? → Sí → Escalación prioritaria
¿Lleva más de 1 ciclo sin resolución? → Sí → Escalar con toda la información recogida
```

### La información que L2 necesita antes de aceptar un ticket

Define el formulario de transferencia L1→L2 (el "ticket de escalación"):

1. **Descripción del problema** en palabras del cliente (textual) + en palabras del agente (técnica)
2. **Pasos para reproducir** (numerados, exactos, con versión del producto y navegador/OS)
3. **Comportamiento esperado** vs. **comportamiento observado**
4. **Frecuencia**: siempre / solo a veces / ocurrió una vez (con fecha y hora)
5. **Impacto en el negocio del cliente**: cuántos usuarios afectados, si hay pérdida de datos o de transacciones
6. **Lo que ya se ha intentado**: workarounds probados, configuraciones revisadas
7. **Capturas o logs adjuntos**: obligatorio para tickets técnicos
8. **Historial del cliente**: plan, antigüedad, si es cliente estratégico o en riesgo de churn

### Regla del ticket incompleto

Define la política: L2 tiene derecho a devolver el ticket a L1 si falta información crítica, pero con plantilla de lo que falta — nunca sin explicación.

---

## PARTE 3 — GESTIÓN DE TICKETS EN L2

### Triage y priorización en L2

| Prioridad | Criterio | SLA L2 | Ejemplo |
|-----------|---------|--------|---------|
| P1 — Crítico | Producción caída, pérdida de datos, impacto total | 2h respuesta, 4h resolución o escalación | Login no funciona para todos los usuarios |
| P2 — Alto | Feature principal no funciona, workaround inexistente | 4h respuesta, 24h resolución | Exportación de reportes falla |
| P3 — Medio | Feature secundaria afectada, workaround disponible | 8h respuesta, 48h resolución | Filtro de búsqueda avanzada da error |
| P4 — Bajo | Cosmético, mejora, pregunta técnica compleja | 24h respuesta, 72h resolución | Campo no se alinea bien en pantalla de 1366px |

### Comunicación con el cliente durante L2

**Reglas de comunicación en L2**:
1. Primera respuesta en el SLA comprometido, aunque sea para confirmar que estás investigando
2. Actualización proactiva cada 24h si el ticket sigue abierto (no esperar a que el cliente pregunte)
3. Si necesitas más información, una sola pregunta por turno (no un formulario de 10 preguntas)
4. Si el problema va a L3 o Ingeniería, decírselo al cliente con expectativa de tiempo (aunque sea amplia)
5. Nunca decir "no tengo información" — decir "estoy investigando y te actualizo antes de [hora/fecha]"

### Plantillas de comunicación L2

Proporciona plantillas para:

**Template 1 — Acuse de recibo de escalación**
> "Hola [nombre], he recibido tu caso desde el equipo de soporte y estoy investigando el comportamiento que describes. Necesito [tiempo estimado] para revisar los logs y reproducirlo en nuestro entorno. Te actualizo antes de [fecha/hora]."

**Template 2 — Solicitud de información adicional**
> "Para avanzar en la investigación necesito que me confirmes [una pregunta específica]. Mientras tanto, ¿has probado [workaround] como solución provisional?"

**Template 3 — Escalación a ingeniería (comunicación al cliente)**
> "He confirmado que el comportamiento que describes es un defecto de nuestro sistema. Lo he registrado en nuestro equipo de desarrollo con prioridad [alta/media]. No puedo darte una fecha exacta de resolución, pero te notificaré en cuanto tengamos el fix disponible. ¿El workaround de [X] te permite seguir operando mientras tanto?"

---

## PARTE 4 — ESCALACIÓN L2 → L3

### Cuándo y cómo escalar a ingeniería

Criterios obligatorios para escalar a L3:
1. Bug reproducido en entorno de staging o producción por L2
2. Impacto en datos del cliente (corrupción, pérdida, exposición incorrecta)
3. Fallo de infraestructura (timeout, caída de servicio, integración rota)
4. Problema que afecta a múltiples clientes simultáneamente

Lo que el ticket de L2 → L3 debe incluir:
- Pasos para reproducir (verificados por L2, no los del cliente sin verificar)
- Logs relevantes con timestamp
- Entorno afectado (producción, staging, versión específica)
- Impacto en cliente y urgencia de negocio
- Comunicación pendiente con el cliente (qué le hemos dicho y cuándo)

---

## ENTREGABLES

1. Formulario de escalación L1→L2 (campos exactos con ejemplo relleno)
2. Árbol de decisión de escalación en formato visual (describe los nodos)
3. Dashboard de métricas de L2: 6 KPIs clave con objetivos
4. Proceso de post-mortem de tickets P1: qué analizar después de cada incidente crítico
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar el rol y los procesos de soporte técnico de nivel 2: criterios de escalación, gestión de tickets, comunicación con el cliente y transferencia a ingeniería.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Herramientas de IA para productividad freelance',
                'description'      => 'Automatiza investigación, redacción y comunicación con clientes usando IA: el sistema de un freelance que trabaja de forma más inteligente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de productividad freelance especializado en integración de herramientas de IA en flujos de trabajo independientes. Necesito construir un sistema de trabajo basado en IA que me ahorre tiempo en tareas repetitivas y me permita dedicar más energía a mi trabajo de mayor valor.

**Mi especialidad freelance:**
[Diseño gráfico / copywriting / desarrollo web / consultoría / traducción / marketing / fotografía / ilustración — especifica]

**Volumen de trabajo:**
[Número de clientes activos simultáneos, tipo de proyectos, duración media de proyectos]

**Mayor pérdida de tiempo actual:**
[Propuestas / investigación / emails / revisiones / facturas / gestión de redes sociales / etc.]

---

## PARTE 1 — AUDITORÍA DE TU FLUJO DE TRABAJO

### Categoriza tus tareas por valor y automatizabilidad

| Categoría | Ejemplos | Tiempo semanal | Automatizable con IA |
|-----------|---------|---------------|----------------------|
| Alta habilidad, no automatizable | Trabajo creativo principal, estrategia, juicio experto | 60-70% del tiempo ideal | No |
| Media habilidad, parcialmente automatizable | Briefings, revisiones, investigación básica | 20-30% | Parcialmente |
| Baja habilidad, altamente automatizable | Emails estándar, formatos de entrega, facturación | 10-20% | Sí |

El objetivo: mover tiempo de la tercera categoría a la primera.

### Las 10 tareas freelance más automatizables con IA

Enumera y explica cómo la IA puede ayudar en cada una:

1. **Investigación de brief**: entender el sector/competencia del cliente en minutos
2. **Primer borrador de propuesta**: estructura y contenido base
3. **Emails de seguimiento**: propuestas no respondidas, aprobaciones pendientes, facturas
4. **Contratos básicos**: primer borrador basado en tipo de proyecto y cliente
5. **Briefs creativos**: extraer lo relevante de lo que te dijo el cliente
6. **Revisión de entregables**: checklist automático antes de enviar
7. **Descripción de proyectos para portfolio**: convertir el trabajo en caso de estudio
8. **Gestión de redes sociales propias**: contenido que muestra tu proceso
9. **Estimaciones de tiempo**: basadas en proyectos similares anteriores
10. **Resúmenes de reunión**: puntos de acción tras llamadas con clientes

---

## PARTE 2 — EL STACK DE IA PARA FREELANCERS

### Herramientas por caso de uso

| Caso de uso | Herramienta principal | Alternativa gratuita | Coste mensual aprox. |
|-------------|----------------------|---------------------|---------------------|
| Asistente de redacción general | Claude / ChatGPT Plus | Claude free / ChatGPT free | 18-20€ |
| Transcripción de reuniones | Otter.ai / Fireflies | Tactiq (extensión) | 8-16€ |
| Generación de imágenes | Midjourney / DALL-E | Adobe Firefly free | 8-30€ |
| Edición de vídeo con IA | Descript / Runway | CapCut | 12-24€ |
| Automatización de flujos | Zapier / Make | n8n (self-hosted) | 0-20€ |
| Gestión del conocimiento | Notion AI / Obsidian | Notion free | 8-10€ |
| Email con IA | Superhuman / Shortwave | Gmail con extensión | 25-30€ |

**Recomendación de stack mínimo por presupuesto:**
- **< 30€/mes**: Claude o ChatGPT Plus + Otter.ai free + Zapier free
- **30-80€/mes**: Stack anterior + Make básico + Notion AI
- **> 80€/mes**: Stack completo personalizado por especialidad

---

## PARTE 3 — FLUJOS DE TRABAJO AUTOMATIZADOS

### Flujo 1: Respuesta a nueva consulta de cliente

```
Trigger: Nuevo email de consulta llega
→ Paso 1: Transcribe manualmente o extrae los puntos clave en Claude
→ Paso 2: Prompt de investigación: "Resume en 5 puntos el sector [X] y los 3 retos principales que tienen empresas como [Y]"
→ Paso 3: Genera borrador de respuesta personalizada con [plantilla base + contexto investigado]
→ Paso 4: Revisa y personaliza (5 minutos)
→ Paso 5: Envía
Tiempo ahorrado: 45 min → 10 min
```

### Flujo 2: Elaboración de propuesta

```
Input: Brief del cliente + tu propuesta base anterior similar
→ Paso 1: Prompt de análisis de brief: "Extrae los objetivos, el problema central, las restricciones y los criterios de éxito de este brief"
→ Paso 2: Genera estructura de propuesta adaptada
→ Paso 3: Redacta sección por sección con prompts específicos
→ Paso 4: Revisa la coherencia y personalización
→ Paso 5: Formatea en tu plantilla visual
Tiempo ahorrado: 4h → 1.5h
```

### Flujo 3: Seguimiento de proyectos activos

```
Herramienta: Notion + IA o Zapier
→ Cada lunes: genera resumen de estado de todos los proyectos activos
→ Detecta: proyectos sin movimiento, fechas de entrega próximas, facturas pendientes
→ Genera: lista de tareas de la semana ordenadas por urgencia e impacto
→ Opcional: envía emails de actualización a clientes de forma semi-automática
```

---

## PARTE 4 — PROMPTS ESENCIALES PARA FREELANCERS

### Biblioteca de prompts por situación

**Para investigar al cliente antes de una reunión:**
> "Actúa como analista de negocio. El cliente es [empresa/persona]. Su sector es [X]. Van a contratarme para [servicio]. Dame: 3 retos típicos de su sector, las métricas que más les importan a este tipo de empresa, y 5 preguntas de descubrimiento inteligentes que debería hacer en la primera reunión."

**Para transformar una llamada en un brief accionable:**
> "Tengo estas notas desordenadas de una llamada con un cliente: [notas]. Extrae: (1) el problema real que quieren resolver, (2) los entregables que esperan, (3) las restricciones que mencionaron (presupuesto, tiempo, estilo), (4) lo que NO dijeron pero probablemente es importante, (5) las preguntas de aclaración que necesito hacer."

**Para convertir un proyecto en caso de estudio:**
> "Tengo este proyecto completado: [descripción breve del proyecto]. Escribe un caso de estudio de 300 palabras para mi portfolio con esta estructura: situación inicial del cliente, el reto, mi proceso, la solución y los resultados. Tono: profesional pero cercano."

**Para redactar emails difíciles:**
> "Necesito enviar un email a un cliente que no ha pagado la factura de [fecha]. Han pasado [X] días. Es la [primera/segunda] vez que ocurre. Mantén el tono profesional y asertivo sin ser agresivo. Incluye el importe y un plazo claro."

---

## PARTE 5 — LÍMITES Y ÉTICA DE LA IA PARA FREELANCERS

### Qué NO delegar en IA

1. **El juicio creativo final**: la IA genera opciones, tú decides
2. **La relación con el cliente**: nada sustituye la conversación humana en momentos críticos
3. **La verificación de datos**: la IA alucina — siempre verifica fechas, estadísticas y nombres
4. **Tu voz y estilo propios**: el cliente te contrató a ti, no a la IA

### Transparencia con los clientes

Define tu política personal:
- ¿Les dices que usas IA? ¿Cuándo y cómo?
- ¿Qué partes del trabajo garantizas como 100% humanas?
- ¿Cómo aseguras la confidencialidad de los datos del cliente en herramientas de IA?

---

## ENTREGABLES

1. Mi stack de IA definitivo para [mi especialidad]: 5 herramientas con coste y uso concreto
2. Los 10 prompts que usaré esta semana para empezar a ahorrar tiempo
3. Calculadora de ROI de las herramientas de IA: cuánto me cuesta vs. cuántas horas ahorro
4. Política de uso de IA para compartir con clientes que lo pregunten
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Construir un sistema de productividad con IA para freelancers: stack de herramientas, flujos de trabajo automatizados y biblioteca de prompts por situación.',
                'vote_score'       => 42,
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
