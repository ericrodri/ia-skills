<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills10Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de influencer marketing B2B: micro-influencers que generan pipeline real',
                'description'       => 'Diseña el programa de colaboración con micro-influencers y creadores de contenido B2B que mueven a tu ICP. Con criterios de selección, tipos de colaboración, brief y métricas para separar la vanidad del pipeline real.',
                'prompt_content'    => <<<'PROMPT'
Eres un B2B Marketing Strategist especializado en influencer marketing para mercados verticales donde el volumen es bajo pero cada cliente vale mucho.

Mi contexto:
- Producto / servicio: [describe]
- ICP (perfil del cliente ideal): [cargo, sector, tamaño de empresa]
- Budget mensual para influencers: [€]
- Objetivo: [awareness / leads / ventas / community building]
- Mercado: [España / LATAM / ambos]

## Estrategia de Influencer Marketing B2B — [Empresa]

### 🎯 Por qué micro-influencers (1k-50k) y no macro

En B2B, la autoridad vale más que el alcance:
- Un influencer con 5.000 seguidores muy cualificados (CTOs de SaaS, CFOs de PYME) > 200k seguidores generalistas
- Tasa de engagement de micro: 5-15% vs. macro: 1-3%
- Coste por lead cualificado: 3-5x menor que paid

### 🔍 Cómo identificar a los influencers correctos

**Criterios de selección:**
1. ¿Su audiencia es tu ICP? (pide datos demográficos antes de comprometerte)
2. ¿Hablan de problemas que tu producto resuelve?
3. ¿Tienen engagement real? (ratio comentarios/likes > 3%)
4. ¿Han colaborado antes con marcas similares sin perder credibilidad?

**Dónde encontrarlos:**
- LinkedIn: [cómo buscarlos con filtros + herramientas]
- Podcasts de nicho: [cómo identificar los relevantes]
- Newsletters de nicho: [Substack / Beehiiv — cómo encontrarlas]
- Speakers de eventos del sector: [dónde listarlos]

**Short list de 10 perfiles recomendados para tu nicho:**
[Con justificación de por qué cada uno]

### 📋 Tipos de colaboración (de menor a mayor inversión)

**Nivel 1 — Contenido orgánico puro:**
- Oferta: acceso gratuito al producto + onboarding personal
- Lo que pides: 1-2 posts honestos si les gusta (no forzado)
- Inversión: €0

**Nivel 2 — Colaboración editorial:**
- Co-crear un recurso (guía, report, webinar) con el influencer como autor principal
- Inversión: €500-2.000 + distribución conjunta

**Nivel 3 — Sponsored content:**
- Post patrocinado en LinkedIn / newsletter / podcast
- Inversión: €500-5.000 por activación según audiencia

### 📄 Brief para el influencer (template)
Lo que debes enviar para que el contenido sea bueno y no parezca un anuncio genérico.

### 📊 Métricas que importan (y cuáles ignorar)
- Ignorar: impressions, likes, seguidores del influencer
- Medir: UTM con conversiones, leads con tag de fuente, pipeline atribuido, tasa de conversión vs. otros canales
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Influencer marketing B2B, micro-influencers, generación de pipeline',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de base de datos: modelado relacional y consultas SQL optimizadas para producción',
                'description'       => 'Diseña el esquema de base de datos relacional con las relaciones correctas, las claves foráneas necesarias y los índices que hacen la diferencia en producción. Con las queries SQL más comunes optimizadas para tu caso de uso.',
                'prompt_content'    => <<<'PROMPT'
Eres un Database Architect con experiencia diseñando esquemas para aplicaciones con millones de registros en PostgreSQL y MySQL.

Mi caso de uso:
- Tipo de aplicación: [e-commerce / SaaS / marketplace / red social / sistema de reservas / otro]
- Entidades principales del negocio: [lista las cosas que necesitas almacenar — usuarios, productos, pedidos, etc.]
- Volumen estimado de datos: [N registros en la tabla más grande / crecimiento mensual estimado]
- Base de datos: [PostgreSQL / MySQL / SQLite / otra]
- Problema de diseño específico: [si lo tienes — relaciones N:M complejas / jerarquías / datos multi-tenant / otro]

## Diseño de Base de Datos — [Aplicación]

### 📐 Esquema relacional (DDL completo)

```sql
-- [Nombre de la aplicación] — Schema v1.0

-- Tabla de usuarios
CREATE TABLE users (
    id          BIGSERIAL PRIMARY KEY,
    email       VARCHAR(255) NOT NULL UNIQUE,
    name        VARCHAR(255) NOT NULL,
    created_at  TIMESTAMPTZ NOT NULL DEFAULT NOW(),
    updated_at  TIMESTAMPTZ NOT NULL DEFAULT NOW()
);

-- [Resto de tablas según las entidades que describiste]
-- Con tipos de datos apropiados, NOT NULL donde corresponde,
-- defaults razonables y CHECK constraints para integridad

-- Claves foráneas con ON DELETE adecuado:
-- ON DELETE CASCADE: cuando el hijo no tiene sentido sin el padre
-- ON DELETE RESTRICT: cuando debes prevenir la eliminación accidental
-- ON DELETE SET NULL: cuando la relación es opcional
```

### 🔑 Estrategia de índices

**Reglas para este esquema:**
1. Primary keys: automáticamente indexadas
2. Foreign keys: indexar siempre para JOINs rápidos
3. Columnas de filtro frecuente: WHERE email, WHERE status, WHERE created_at
4. Índices compuestos: cuándo y en qué orden de columnas

```sql
-- Índices necesarios para este esquema
CREATE INDEX idx_[tabla]_[columna] ON [tabla]([columna]);
-- Con justificación de por qué cada índice
```

### 🔍 Queries SQL optimizadas para las operaciones más comunes

**Query 1 — [La más frecuente en tu aplicación]:**
```sql
-- Versión naive (evitar):
SELECT * FROM ...

-- Versión optimizada:
SELECT [solo columnas necesarias]
FROM [tabla principal]
JOIN ...
WHERE ...
-- Con EXPLAIN ANALYZE de lo que esperar
```

**Query 2 — Paginación correcta para tablas grandes:**
```sql
-- cursor-based pagination (mejor que OFFSET para tablas grandes):
SELECT * FROM items
WHERE id > :last_seen_id
ORDER BY id
LIMIT :page_size;
```

**Query 3 — Agregaciones frecuentes:**
[Con índices que las aceleran]

### 📊 Decisiones de diseño explicadas

**Por qué usar UUID vs. BIGSERIAL:**
Cuándo cada opción tiene sentido para tu caso.

**Multi-tenant (si aplica):**
Row-level security vs. schema-per-tenant vs. database-per-tenant.

**Datos blandos (soft delete):**
Cuándo usar `deleted_at` y cómo afecta a los índices.

### 🚀 Checklist antes de ir a producción
Las 10 cosas que debes verificar en el esquema antes del primer deploy.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseño de bases de datos, SQL, PostgreSQL, optimización',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Rediseño de interfaz de usuario: del feedback de usuarios a la nueva propuesta en Figma',
                'description'       => 'Convierte los problemas de usabilidad detectados en encuestas y sesiones de testing en decisiones de rediseño concretas. Con el proceso de análisis de feedback, priorización de cambios y documentación de decisiones de diseño.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer especializado en rediseños de interfaces con datos reales de usuario, no solo intuición.

Contexto del rediseño:
- Interfaz a rediseñar: [página / flujo / componente específico]
- Feedback de usuarios disponible: [pega los verbatims de encuesta / Hotjar / soporte / entrevistas]
- Métricas actuales: [tasa de abandono X% / tasa de error X% / tiempo en tarea X seg]
- Constraints técnicas: [cambios que NO puedes hacer — legacy, limitaciones del backend]
- Herramienta de diseño: [Figma / Sketch / Adobe XD]

## Proceso de Rediseño — [Interfaz]

### 🔍 Análisis del feedback (affinity mapping)

**Agrupación de problemas por categoría:**

| Categoría | Frecuencia | Verbatims representativos | Impacto |
|-----------|-----------|--------------------------|---------|
| Navegación confusa | 47% | "No encuentro X", "dónde está Y" | Alto |
| Información insuficiente | 31% | "No sé qué hace este botón" | Medio |
| Proceso demasiado largo | 22% | "Demasiados pasos" | Alto |

**Los 3 problemas de mayor impacto:**
1. [Problema] → afecta a X% de usuarios → coste estimado: [abandono / soporte / pérdida de conversión]
2. ...
3. ...

### 🎯 Decisiones de diseño (las más importantes primero)

**Problema 1 → Decisión de diseño:**
- Por qué ocurre: [análisis de causa raíz — no síntoma]
- Solución propuesta: [descripción del cambio]
- Alternativas consideradas y descartadas: [con justificación]
- Hipótesis: "Si hacemos X, esperamos que Y mejore un Z%"

**[Repetir para cada problema principal]**

### 📐 Especificaciones para Figma

**Cambios en layout:**
- [Cambio 1]: de X a Y — con wireframe en ASCII si es simple
- [Cambio 2]: eliminación de [elemento] — por qué y qué lo reemplaza

**Cambios en microcopy:**
| Texto actual | Texto propuesto | Por qué |
|-------------|----------------|---------|
| "Enviar" | "Confirmar pedido" | Más específico, reduce ansiedad |
| "Error" | "El email no es válido" | Accionable |

**Cambios en jerarquía visual:**
- Qué debe ser más prominente y por qué
- Qué debe reducirse o eliminarse

### 🧪 Plan de validación

**Test de usabilidad antes/después:**
- Tareas a medir: [las mismas que antes para comparar]
- Métricas objetivo: reducir tiempo en tarea de X a Y seg

**A/B test (si el tráfico lo permite):**
- Variable a probar: [un solo cambio por test]
- Métrica principal: [conversión / tiempo / errores]
- Duración: [X semanas con X usuarios para significancia estadística]

### 📋 Design Handoff
Qué debe incluir el documento de entrega al equipo de desarrollo para que no haya malentendidos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'UI redesign, UX, Figma, diseño basado en datos',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Pipeline de ventas en CRM: diseño del proceso y automatizaciones que no pierden oportunidades',
                'description'       => 'Diseña el pipeline de ventas para tu CRM con las etapas correctas, los criterios de movimiento entre etapas y las automatizaciones que mantienen el CRM limpio y los follow-ups sin que dependan de la memoria del vendedor.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Operations Manager con experiencia implementando pipelines de ventas en HubSpot, Salesforce y Pipedrive para equipos de 2 a 30 comerciales.

Mi contexto:
- CRM que usas: [HubSpot / Salesforce / Pipedrive / Close / otra]
- Ciclo de venta típico: [X semanas / meses]
- Ticket medio: [€]
- Tamaño del equipo de ventas: [N personas]
- Etapas actuales del pipeline: [lista las que tienes, si las tienes]
- Mayor problema con el CRM actual: [deals que se quedan parados / vendedores que no actualizan / falta de visibilidad / otro]

## Pipeline de Ventas — [Empresa] en [CRM]

### 🗺️ Etapas del pipeline (con criterios de entrada y salida)

**Etapa 1 — Lead (oportunidad identificada)**
- Criterio de entrada: [cómo llega un lead aquí — formulario / prospección / referido]
- Criterio de salida (para pasar a la siguiente): contacto respondido + interés confirmado
- Tiempo máximo en esta etapa: X días
- Acción requerida del vendedor: [primera llamada de discovery]

**Etapa 2 — Calificado (BANT o MEDDIC validado)**
- Criterio de entrada: Budget / Authority / Need / Timeline confirmados (o el framework que uses)
- Criterio de salida: propuesta solicitada
- Tiempo máximo: X días

**Etapa 3 — Propuesta enviada**
- Criterio de entrada: propuesta enviada y confirmada recibida
- Criterio de salida: feedback recibido (positivo o negativo)
- Tiempo máximo: X días

**Etapa 4 — Negociación**
- Criterio de entrada: interés confirmado, negociando condiciones
- Criterio de salida: acuerdo verbal o rechazo definitivo

**Etapa 5 — Cerrado (Ganado / Perdido)**
- Si perdido: razón obligatoria de pérdida + tarea de follow-up en 3 meses

### ⚡ Automatizaciones clave

**Automatización 1 — Anti-inactividad:**
Si un deal no tiene actividad en X días → email al vendedor: "¿Qué pasa con [nombre deal]?"

**Automatización 2 — Follow-up de propuesta:**
3 días después de enviar propuesta sin respuesta → tarea de llamada + email automático al prospect

**Automatización 3 — Bienvenida al cliente ganado:**
Deal marcado como Ganado → notificación a CS + email de bienvenida automático + creación de cliente en facturación

**Automatización 4 — Limpieza del pipeline:**
Deals sin actividad > 30 días → alerta al manager para revisión o cierre como perdido

### 📊 Dashboard de pipeline para el manager

**Métricas semanales:**
- Deals por etapa (cantidad y €)
- Deals sin actividad > X días
- Tasa de conversión por etapa
- Ciclo de venta promedio
- Forecast de cierre del mes

### 📋 Reglas de higiene del CRM
Los 5 campos obligatorios en cada deal y cómo enforcarlos sin volver locos a los vendedores.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sales operations, CRM, pipeline de ventas, automatización',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product analytics: el setup de métricas que conecta el comportamiento del usuario con el negocio',
                'description'       => 'Diseña el plan de instrumentación de analytics de producto: qué eventos trackear, cómo nombrarlos, qué métricas construir y cómo conectar el comportamiento del usuario con las métricas de negocio que importan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Analyst con experiencia diseñando sistemas de medición para productos digitales desde el MVP hasta la escala.

Mi contexto:
- Tipo de producto: [SaaS / app móvil / e-commerce / marketplace / media]
- Herramienta de analytics: [Mixpanel / Amplitude / PostHog / Segment / GA4 / otra]
- Estado actual de la instrumentación: [sin tracking / tracking básico / tracking parcial]
- Flujos más importantes del producto: [registro / onboarding / feature principal / checkout / otro]
- Pregunta de negocio más urgente: [¿por qué se va la gente? / ¿qué features generan retención? / ¿dónde abandonan el checkout? / otra]

## Plan de Product Analytics — [Producto]

### 🎯 North Star Metric y árbol de métricas

**North Star Metric:** [la métrica que mejor captura el valor entregado a los usuarios]
- ¿Qué es: [descripción]
- Fórmula: [cómo se calcula]
- Target: [X por semana/mes]

**Árbol de métricas (cómo se desglosa la NSM):**
```
North Star: [NSM]
├── Adquisición
│   ├── Nuevos usuarios (DAU/WAU/MAU)
│   └── Fuente de tráfico
├── Activación
│   ├── Tasa de onboarding completado
│   └── Time-to-aha-moment
├── Retención
│   ├── D1/D7/D30 retention
│   └── Churn rate
└── Monetización (si aplica)
    ├── Conversión trial → paid
    └── MRR / ARR
```

### 📋 Plan de tracking — eventos a implementar

**Taxonomía de eventos (convención de nombres):**
Formato: `[Objeto] [Verbo]` (ej: `User Signed Up`, `Feature Activated`, `Subscription Cancelled`)

**Eventos críticos (instrumentar primero):**

| Evento | Cuándo se dispara | Propiedades obligatorias | Prioridad |
|--------|------------------|--------------------------|---------|
| `User Signed Up` | Cuando se completa el registro | user_id, source, plan, referral_code | 🔴 P0 |
| `Onboarding Completed` | Cuando llega al aha moment | user_id, time_to_complete, steps_completed | 🔴 P0 |
| `[Feature] Used` | Cuando usa la feature principal | user_id, feature_name, context | 🔴 P0 |
| `Subscription Started` | Primer pago | user_id, plan, mrr, source | 🔴 P0 |
| `Subscription Cancelled` | Cancela | user_id, plan, reason, days_active | 🔴 P0 |

**Eventos secundarios (instrumentar después):**
[Lista de eventos de Features secundarias, errores, etc.]

### 📊 Dashboards prioritarios (para responder las preguntas clave)

**Dashboard 1 — Salud del producto (revisión diaria, 5 min):**
- DAU / WAU / MAU (y ratios entre ellos)
- Nuevos signups del día
- Revenue del día

**Dashboard 2 — Funnel de conversión:**
[Visualización del funnel con tasas de conversión por etapa]

**Dashboard 3 — Retención:**
[Cohort analysis: retención por cohorte de signups]

### 🔍 Análisis para responder tu pregunta urgente
Paso a paso para investigar [la pregunta de negocio específica que diste].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Product analytics, instrumentación, métricas de producto',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Evaluación de desempeño por objetivos (OKR + revisión individual): el proceso que motiva en vez de estresar',
                'description'       => 'Diseña el ciclo de evaluación de desempeño individual conectado con los OKRs del equipo. Con el proceso de self-assessment, la conversación de calibración y el link con compensación que sea percibido como justo.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Experience Lead con experiencia diseñando ciclos de performance management en empresas de 50 a 500 empleados que quieren ir más allá de la evaluación anual.

Contexto:
- Tamaño de la empresa: [N empleados]
- Frecuencia de evaluación actual: [anual / semestral / trimestral]
- Framework de objetivos: [OKRs / MBOs / KPIs individuales / ninguno formal]
- Herramienta de gestión del desempeño: [Lattice / Leapsome / Culture Amp / Excel / ninguna]
- Problema principal del proceso actual: [demasiado subjetivo / no conectado con salario / no genera desarrollo / los managers no saben hacer las conversaciones / otro]

## Ciclo de Evaluación de Desempeño — [Empresa]

### 🗓️ Calendario del ciclo (semestral recomendado)

**Mes 1 del semestre — Configuración:**
- Reunión de alineación de OKRs de empresa → equipo → individuo
- Template de objetivos individuales: cómo escribirlos bien (SMART conectados con el equipo)
- Check-in de 30 min: manager + empleado para confirmar objetivos

**Meses 2-5 — Seguimiento:**
- 1:1 quincenal: agenda de seguimiento (no solo status del trabajo)
- Mid-cycle check-in (mes 3): ¿siguen siendo los objetivos correctos? ¿hay que ajustar?
- Registro de logros: el empleado anota sus contributions en tiempo real

**Mes 6 — Evaluación:**

*Semana 1 — Self-assessment:*
Preguntas del self-assessment que generan reflexión honesta, no autopromoción.
[Las 5 preguntas con instrucciones de cómo responderlas]

*Semana 2 — Manager assessment:*
Cómo el manager debe evaluar: evidencias concretas, no percepciones generales.
[Rúbrica por nivel/cargo — expectations for level]

*Semana 3 — Calibración:*
La reunión de calibración entre managers: cómo funciona, qué se puede cambiar, cómo manejar el sesgo de afinidad.

*Semana 4 — Conversación de devolution:*
[Agenda y guión de la conversación de 60 min — mira competencia de feedback 360 para el guión]

### 📊 Rating system que no genera debates infinitos

**Sistema de 4 niveles (mejor que 5):**
- Exceeds Expectations (top 10%)
- Meets Expectations (mayoría)
- Developing (necesita mejora específica)
- Not Meeting Expectations (requiere PIP)

**Definición operativa de cada nivel:**
Para que dos managers distintos den la misma calificación a la misma persona.

### 💰 Link con compensación (el momento más delicado)

**Cómo conectar el rating con el incremento salarial sin crear un sistema de juego:**
- Bandas salariales por nivel
- Rango de incremento por rating
- Cuándo y cómo comunicarlo: separar la conversación de desarrollo de la conversación de dinero

### 🔁 Cómo medir si el proceso funciona
Las 3 métricas que te dicen si el performance management está generando valor o solo burocracia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Performance management, OKRs, desarrollo de equipos, compensación',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Presupuesto anual (budget) de empresa: el proceso de bottom-up que todos pueden ejecutar',
                'description'       => 'Diseña y ejecuta el proceso de presupuestación anual de tu empresa con metodología bottom-up, asunciones documentadas y el modelo en Excel/Google Sheets que permite simular escenarios antes de comprometerse.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director Financiero con experiencia liderando procesos de presupuestación en empresas de 500k a 20M€ de facturación.

Mi empresa:
- Sector y tipo de negocio: [describe]
- Facturación actual: [€]
- Número de empleados: [N]
- Herramienta: [Excel / Google Sheets / Pigment / Anaplan / otra]
- Fecha de inicio del ejercicio: [enero / otro mes]
- Problemas con el presupuesto actual: [se hace en el último momento / nadie lo cumple / no hay proceso / demasiado top-down]

## Proceso de Presupuestación Anual — [Empresa]

### 🗓️ Calendario del proceso (8 semanas)

| Semana | Actividad | Responsables | Output |
|--------|----------|-------------|--------|
| 1 | Directrices estratégicas de dirección | CEO/CFO | Carta de presupuesto |
| 2-3 | Bottom-up por departamento | Cada área | Draft de presupuesto por área |
| 4 | Consolidación y gaps | CFO | Consolidated P&L draft |
| 5 | Sesiones de revisión por área | CFO + area leads | Ajustes acordados |
| 6 | Escenarios y sensibilidades | CFO | 3 escenarios |
| 7 | Aprobación de dirección y/o board | CEO + board | Budget aprobado |
| 8 | Comunicación y distribución | Todos | Cada área tiene su budget |

### 📋 Carta de presupuesto (qué enviar a cada área)

Template completo que incluye:
- Crecimiento de ingresos objetivo: [X%]
- Límite de crecimiento de gastos: [X%]
- Nuevas inversiones aprobadas previamente: [lista]
- Formato de respuesta: [template a rellenar]
- Fecha de entrega: [fecha]
- Persona de contacto para dudas: [CFO o Finance Business Partner]

### 📊 Modelo de P&L presupuestado

**Estructura del modelo (con fórmulas):**

```
INGRESOS
├── Línea de negocio 1: Clientes actuales × ARR medio × (1 - Churn esperado)
├── Línea de negocio 1: Clientes nuevos × Deal size medio × (Deals × Win rate)
└── Total ingresos

COSTES DIRECTOS (COGS)
├── Personal de servicio / COGS tech (hosting, licencias)
└── Margen bruto = Ingresos - COGS

GASTOS OPERATIVOS (OPEX)
├── Personal (mayor partida — cómo modelarlo)
│   └── Plantilla actual + nuevas contrataciones planificadas + seguridad social
├── Marketing
├── Ventas (comisiones variables sobre objetivos)
├── Tecnología y SaaS
├── Oficina y overhead
└── Total OPEX

EBITDA = Margen bruto - OPEX

Amortizaciones, EBIT, impuestos, resultado neto
```

### 🔄 Los 3 escenarios (base / optimista / pesimista)

**Cómo definirlos:**
- Base: asunciones más probables (60% confianza)
- Optimista: si las principales asunciones se cumplen mejor (85% probabilidad del objetivo)
- Pesimista: si las asunciones más inciertas fallan (cuánto aguantamos)

**Asunciones que más impactan (identifícalas primero):**
[Las variables de las que más depende el resultado — precio / volumen / churn / nuevas contrataciones]

### 📈 Seguimiento presupuestario mensual
Cómo hacer el Actuals vs. Budget mensual en 2 horas y presentarlo al equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Presupuesto empresarial, planificación financiera, FP&A',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de impagados: protocolo de reclamación extrajudicial y judicial en España',
                'description'       => 'Recupera las deudas de tus clientes con el protocolo correcto: desde el primer recordatorio hasta el monitorio o la demanda. Con los plazos legales, las comunicaciones fehacientes y cuándo vale la pena litigar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado procesalista especializado en reclamación de deudas comerciales para PYMEs y autónomos en España.

Situación del impago:
- Deudor: [empresa / autónomo / particular]
- Importe de la deuda: [€]
- Vencimiento de la factura: [fecha]
- Documentación que tienes: [factura / contrato / presupuesto aceptado / emails / albarán / otro]
- Contacto previo: [ya le has reclamado / no / ha prometido pagar y no lo ha hecho]
- Relación con el cliente: [quieres mantenerla / no te importa / ya la diste por perdida]

## Protocolo de Reclamación — [Deudor]

### 📋 Fase 1 — Reclamación amistosa (días 1-15)

**Primer contacto (email + llamada, día 1):**
[Template de email de recordatorio amable que no quema la relación]

**Segundo contacto (día 7, si no hay respuesta):**
[Template más directo con plazo concreto]

**¿Cuándo pasar a la fase 2?**
Si en 15 días naturales no hay pago ni plan de pago firmado.

### 📬 Fase 2 — Reclamación formal extrajudicial

**Burofax o carta notarial (el paso crucial):**
- Por qué es imprescindible antes de demandar: interrumpe la prescripción + prueba fehaciente
- Qué incluir en el burofax: [texto completo de la carta]
- Coste aproximado: Burofax Correos ~€10 / Carta notarial ~€50-80
- Plazos: das 10-15 días naturales para el pago

**Efectos legales del burofax:**
- Interrumpe el plazo de prescripción de la deuda (3 años en deudas comerciales — Art. 1967 CC)
- Establece la mora del deudor (Art. 1100 CC) → tienes derecho a intereses de demora

**Intereses de demora reclamables:**
- Deudas comerciales: Ley 3/2004 de lucha contra la morosidad → tipo de referencia BCE + 8 puntos (publicado semestralmente)
- Cómo calcularlos: [fórmula]

### ⚖️ Fase 3 — Vía judicial

**¿Cuándo demanda y cuándo monitorio?**
- Juicio monitorio (deudas de cualquier importe, con documentos que acrediten la deuda):
  - Cómo funciona: el juez da 20 días para pagar o oponerse
  - Si no se opone: despacho de ejecución automático
  - Coste: sin abogado ni procurador para deudas < 2.000€
  - Para deudas > 2.000€: necesitas abogado y procurador

- Juicio verbal (deudas < 15.000€) o juicio ordinario (deudas > 15.000€):
  Cuándo elegir esta vía en lugar del monitorio.

**¿Cuándo vale la pena litigar?**
El análisis coste-beneficio para decidir si demandar o no.

### 📊 Decisión: ¿vender la deuda a una empresa de recobro?
Cuándo tiene sentido y a qué precio suelen comprar (20-40% del valor nominal).

### ✅ Checklist de documentación
Lo que debes tener ordenado antes de iniciar cualquier acción legal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Reclamación de deudas, impagados, derecho mercantil',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Knowledge base que los clientes usan y que el equipo de soporte mantiene',
                'description'       => 'Crea y mantén una base de conocimiento que desvía tickets de soporte y empodera a los clientes. Con la arquitectura de contenido, el proceso de creación, la optimización para búsqueda y las métricas para saber si funciona.',
                'prompt_content'    => <<<'PROMPT'
Eres un Knowledge Management specialist con experiencia creando centros de ayuda que reducen el volumen de tickets entre un 20% y un 40%.

Contexto:
- Tipo de producto: [SaaS / e-commerce / app / servicio]
- Herramienta de Knowledge Base: [Intercom / Zendesk / Notion / Freshdesk / HelpScout / Confluence / otra]
- Estado actual: [sin KB / KB desactualizada / KB que nadie usa]
- Volumen de tickets: [N/mes]
- Los 5 temas más frecuentes en soporte: [lista]

## Knowledge Base — [Empresa]

### 🏗️ Arquitectura de la KB (cómo organizarla para que se encuentre)

**Estructura de categorías (máximo 8 categorías, 5-10 artículos cada una):**

```
📁 Primeros pasos (onboarding)
  └── Cómo crear tu cuenta
  └── Tutorial rápido de 5 minutos
  └── Conectar [integración principal]

📁 [Feature principal]
  └── Cómo usar [feature 1]
  └── Cómo usar [feature 2]
  └── Preguntas frecuentes sobre [feature]

📁 Cuenta y facturación
  └── Cambiar el plan
  └── Actualizar método de pago
  └── Cancelar la suscripción

📁 Solución de problemas
  └── [Los 5 problemas más frecuentes]
  └── Códigos de error y soluciones
```

**Regla de los 3 clics:**
Cualquier respuesta debe poder encontrarse en máximo 3 clics desde la página de inicio de la KB.

### ✍️ Template para artículos de KB que se entienden

**Estructura estándar:**
1. **Título**: "[Verbo] + [resultado]" — ej: "Conectar tu cuenta de Google Calendar"
2. **Resumen**: 1-2 frases — qué aprenderá el lector y cuánto tarda
3. **Antes de empezar** (si aplica): requisitos previos
4. **Pasos**: numerados, uno por línea, acción concreta en cada uno
5. **Resultado esperado**: qué verá el usuario cuando lo haya hecho bien
6. **Problemas frecuentes**: los 3 errores más comunes y cómo resolverlos
7. **¿No es lo que buscabas?**: link a artículos relacionados + contacto con soporte

**Buenas prácticas de escritura:**
- Párrafos de máximo 3 líneas
- Screenshots o GIFs para cada paso no obvio
- Titulares que sean preguntas que los usuarios se hacen
- Actualizar la fecha de última revisión al editarlo

### 🔍 Optimización para búsqueda interna y Google

**Para búsqueda interna:**
- Sinónimos y variantes en los artículos (los usuarios no usan tu jerga)
- Tags o etiquetas: cómo configurarlas

**Para SEO (si tu KB es pública):**
- URL de cada artículo con la keyword principal
- Meta description descriptiva
- Schema markup Article para los artículos de ayuda

### 📊 Métricas de éxito de la KB

| Métrica | Cómo medirla | Target |
|---------|------------|--------|
| Deflection rate | Tickets/mes ÷ visitas KB | >15% |
| Article satisfaction | Thumbs up / total | >70% |
| Search success rate | Búsquedas con clic ÷ total búsquedas | >60% |
| Artículos sin votos (desactualizados) | Revisión mensual | 0 |

### 🔄 Proceso de mantenimiento (para que no se quede obsoleta)
La rutina mensual de 2 horas para mantener la KB actualizada y relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Knowledge management, self-service support, deflección de tickets',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Fijar el precio de tus servicios freelance: metodología para cobrar lo que vales sin perder clientes',
                'description'       => 'Calcula tu tarifa mínima, define tu precio óptimo según el valor que aportas y aprende a presentarlo de forma que el cliente no regatee. Con los modelos de pricing (hora, proyecto, retainer) y cuándo usar cada uno.',
                'prompt_content'    => <<<'PROMPT'
Eres un business coach especializado en estrategia de pricing para freelancers y consultores independientes.

Mi situación:
- Servicio principal: [describe]
- Años de experiencia: [N]
- Tarifa actual: [€/hora o €/proyecto]
- Tipo de clientes que tengo: [pequeñas empresas / medianas / grandes / startups / particulares]
- Tarifa de la competencia directa (si la sabes): [€/hora o rango]
- Ingresos objetivo mensuales netos: [€]
- Horas facturables disponibles al mes: [N horas — descontando admin, marketing, vacaciones]

## Estrategia de Pricing — [Tu nombre/negocio]

### 📐 Calcula tu tarifa mínima (el suelo, no el precio)

**Fórmula del coste real de ser autónomo:**

```
Gastos fijos mensuales:
- Cuota autónomos:                    €[aprox. €330/mes en España]
- Software y herramientas:            €[lista los tuyos]
- Formación (anual ÷ 12):            €
- Marketing y web:                    €
- Seguro de responsabilidad civil:   €
- Coste de la no-facturación (vacaciones, enfermedad, comercial):
  [Horas disponibles × X% no facturable] = €

Total costes mensuales:              €X

Tarifa mínima = (Objetivo mensual neto + Costes + Impuestos estimados)
               / Horas facturables al mes

Tu tarifa mínima: €X/hora
```

⚠️ Esta es tu línea roja. Trabajar por menos es trabajar en pérdidas.

### 💎 Calcula tu precio óptimo (por valor, no por tiempo)

**El problema de cobrar por hora:**
Cuanto mejor eres → más rápido → cobras menos. El tiempo es el peor proxy del valor.

**Precio basado en valor:**
Paso 1: ¿Qué resultado de negocio genera tu trabajo?
- Ingresos adicionales generados: €X
- Costes evitados: €X
- Tiempo del cliente liberado: X horas × €Y/hora = €Z
- **Valor total generado:** €X+Y+Z

Paso 2: Tu precio justo = 10-20% del valor generado para el cliente

**Con tu caso:** si tu trabajo genera €X al cliente, tu precio puede ser €X×15% = €Y

### 🔄 Modelos de pricing y cuándo usar cada uno

**Por hora:**
- Cuándo: proyectos de alcance indefinido, consultoría puntual, expertise difícil de paquetizar
- Riesgo: el cliente controla el presupuesto limitando horas

**Por proyecto (precio fijo):**
- Cuándo: entregables claros y acotados
- Clave: define qué incluye Y qué no incluye (el scope creep te mata)
- Cómo fijarlo: horas estimadas × tarifa × 1.3 (buffer para revisiones)

**Retainer mensual:**
- Cuándo: cliente que necesita capacidad regular
- Ventajas: ingresos predecibles, relación más profunda
- Cómo calcularlo: X horas × tarifa con descuento del 10-15%

### 🗣️ Cómo presentar el precio sin que el cliente regatee
El momento de decir el precio y cómo responder al "es mucho dinero".

### 📈 Cuándo y cómo subir precios a clientes actuales
El guión exacto para la conversación de subida de tarifa sin perder al cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Pricing freelance, tarifa, estrategia de precios, valor',
                'vote_score'        => 53,
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
