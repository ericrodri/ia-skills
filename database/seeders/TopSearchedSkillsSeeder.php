<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            // 1 - Desarrollo (2) - AI Agents es LA tendencia de 2025-2026
            [
                'profession_id'     => 2,
                'title'             => 'Crea un agente de IA con Claude API en menos de 1 hora',
                'description'       => 'Diseña y despliega un agente autónomo con herramientas personalizadas usando la API de Claude. Desde el system prompt hasta el bucle agéntico completo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como arquitecto de sistemas de IA con experiencia en diseñar agentes autónomos de producción.

Voy a darte el objetivo de mi agente:
[DESCRIBE EL OBJETIVO: qué debe hacer el agente, qué inputs recibe, qué outputs produce]

Con esa información, genera para mí:

## 1. System Prompt del agente
Escribe el system prompt completo que usaré en `system:` de la API de Claude. Debe incluir:
- Rol y personalidad del agente
- Capacidades disponibles (herramientas que puede usar)
- Reglas de comportamiento y límites
- Formato de respuesta esperado

## 2. Definición de herramientas (Tool Use)
Para cada herramienta que el agente necesita, genera el JSON de definición siguiendo el formato de Claude API:
```json
{
  "name": "nombre_herramienta",
  "description": "Cuándo y cómo usar esta herramienta",
  "input_schema": {
    "type": "object",
    "properties": { ... },
    "required": [...]
  }
}
```

## 3. Bucle agéntico en Python
Código Python completo y funcional con:
- Cliente de Anthropic configurado
- Bucle while que procesa tool_use y tool_result
- Manejo de errores y stop_reason
- Historial de conversación correcto

## 4. Casos edge a contemplar
Lista los 5 casos límite más probables y cómo el agente debe manejarlos.

## 5. Prompt de prueba
Dame 3 mensajes de usuario para probar el agente en distintos escenarios.

Usa claude-opus-4-8 para tareas complejas de razonamiento, claude-haiku-4-5-20251001 para herramientas de alta frecuencia.
PROMPT,
                'tool_name'         => 'Claude API',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatización, desarrollo de producto con IA',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],

            // 2 - Product Management (5) - Resumen de reuniones es masivamente buscado
            [
                'profession_id'     => 5,
                'title'             => 'Transcripción de reunión → acta ejecutiva + tareas en 2 minutos',
                'description'       => 'Convierte cualquier transcripción de Zoom, Meet o Teams en un acta estructurada con decisiones, tareas asignadas y próximos pasos. Cero tiempo de redacción.',
                'prompt_content'    => <<<'PROMPT'
Eres un chief of staff experto en sintetizar reuniones de alto rendimiento.

Aquí tienes la transcripción de la reunión:
[PEGA LA TRANSCRIPCIÓN COMPLETA]

Contexto adicional (opcional):
- Tipo de reunión: [weekly / one-on-one / planning / retrospectiva / cliente]
- Asistentes clave: [nombres y roles]
- Proyecto o contexto: [nombre del proyecto o contexto]

Genera el siguiente output estructurado:

## Acta de reunión — [Fecha] [Nombre reunión]

### 📌 Resumen ejecutivo (3 líneas max)
Una síntesis que pueda leerse en 15 segundos.

### ✅ Decisiones tomadas
Lista numerada de decisiones concretas. Formato: "Se decidió [X] porque [Y]."

### 🎯 Tareas y compromisos
| Tarea | Responsable | Fecha límite | Prioridad |
|-------|-------------|--------------|-----------|
| ...   | ...         | ...          | Alta/Media/Baja |

### 💡 Ideas y propuestas pendientes de validar
Bullet points de ideas mencionadas que no tienen dueño ni fecha todavía.

### ⚠️ Riesgos y bloqueos identificados
Bullet points de cualquier problema, dependencia o riesgo mencionado.

### 📅 Próxima reunión
Fecha, objetivo y quién la convoca (si se mencionó).

---
Reglas: usa solo la información de la transcripción. Si algo no está claro, márcalo con [⚠️ confirmar]. No inventes tareas ni decisiones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 5,
                'use_case'          => 'Gestión de reuniones, productividad de equipos',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],

            // 3 - Product Management (5) - OKRs muy buscado
            [
                'profession_id'     => 5,
                'title'             => 'Generador de OKRs trimestrales con iniciativas y métricas de seguimiento',
                'description'       => 'Convierte la estrategia anual de tu empresa o equipo en OKRs trimestrales concretos, con key results medibles, iniciativas priorizadas y sistema de check-in semanal.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach experto en OKRs que ha implementado este sistema en más de 50 equipos.

Contexto de mi equipo/empresa:
- Nombre del equipo o área: [ej: Equipo de Producto / Marketing / Ingeniería]
- Objetivo estratégico anual: [qué quiere lograr la empresa/equipo este año]
- Principales métricas actuales: [ej: MRR actual, NPS, DAU, etc.]
- Recursos del equipo: [número de personas, presupuesto aproximado]
- Mayor reto del trimestre: [cuál es el principal obstáculo]

Trimestre objetivo: [Q1/Q2/Q3/Q4 de XXXX]

Genera el siguiente OKR framework:

## OKRs del [Trimestre] — [Nombre equipo]

### Objective 1: [Nombre inspirador del objetivo]
*Por qué importa: [una frase que conecta con la estrategia anual]*

| Key Result | Baseline | Meta | Unidad | Fuente de datos |
|-----------|---------|------|--------|----------------|
| KR1: ... | ... | ... | ... | ... |
| KR2: ... | ... | ... | ... | ... |
| KR3: ... | ... | ... | ... | ... |

**Iniciativas prioritarias:**
1. [Iniciativa] → KR que impacta: [KR1] → Esfuerzo: [semanas] → Owner: [rol]
2. ...

---
[Repite para 2-3 objectives máximo]

### Sistema de check-in semanal
Template de 5 preguntas para el check-in semanal de cada KR:
1. ¿Cuál es el valor actual del KR vs. meta?
2. ¿Estamos on-track, at-risk o off-track?
3. ¿Qué hicimos esta semana que mueve el KR?
4. ¿Qué bloqueos necesitamos resolver?
5. ¿Qué haremos la próxima semana?

### Semáforo de salud
- 🟢 On-track: >70% del progreso esperado
- 🟡 At-risk: 40-70% del progreso esperado
- 🔴 Off-track: <40% del progreso esperado

Reglas: máximo 3 objectives, máximo 3-4 KRs por objective. Los KRs deben ser medibles con un número, no binarios (no "sí/no").
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Planificación trimestral, alineación de equipos',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],

            // 4 - Diseño (3) - AI to code workflow muy buscado
            [
                'profession_id'     => 3,
                'title'             => 'Convierte un wireframe o mockup en componente React listo para producción',
                'description'       => 'Describe o pega imágenes de tu diseño y obtén el componente React + Tailwind CSS funcional, accesible y con todas las variantes de estado. Del diseño al código en minutos.',
                'prompt_content'    => <<<'PROMPT'
Eres un senior frontend developer especializado en traducir diseños UI a código React limpio y accesible.

Descripción del componente a crear:
[DESCRIBE O PEGA EL DISEÑO: puede ser texto describiendo la UI, una URL de Figma, o una descripción detallada]

Especificaciones técnicas:
- Framework: React (con TypeScript si es posible)
- CSS: Tailwind CSS
- ¿Necesita estado interno? [sí/no - describe cuál]
- ¿Tiene variantes? [ej: tamaños small/medium/large, estados default/hover/disabled/loading]
- ¿Recibe datos externos (props)? [describe qué datos]

Genera el código con este formato:

## Componente: [NombreComponente]

### Tipos TypeScript
```typescript
interface [NombreComponente]Props {
  // Props tipadas con JSDoc comments
}
```

### Componente principal
```tsx
// Componente completo con todos los estados
```

### Variantes de uso
```tsx
// 3-4 ejemplos de cómo instanciar el componente
```

### Checklist de accesibilidad implementado
- [ ] aria-labels correctos
- [ ] Roles ARIA apropiados
- [ ] Navegación por teclado (Tab, Enter, Escape)
- [ ] Contraste de colores (WCAG AA mínimo)
- [ ] Estados focus visibles

### Notas de implementación
Cualquier decisión de diseño que tomé y por qué.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Desarrollo frontend, handoff diseño-código',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],

            // 5 - Marketing (1) - Análisis de reviews muy buscado
            [
                'profession_id'     => 1,
                'title'             => 'Analiza 100 reviews de clientes y extrae los 5 insights que mueven el negocio',
                'description'       => 'Pega reviews de Google, Trustpilot, App Store o cualquier plataforma y obtén un análisis de sentimiento estructurado con los patrones más frecuentes, citas textuales y recomendaciones accionables.',
                'prompt_content'    => <<<'PROMPT'
Eres un analista de voz del cliente (VoC) con experiencia en convertir feedback desestructurado en estrategia de producto y marketing.

Reviews a analizar:
[PEGA TODAS LAS REVIEWS AQUÍ — pueden ser de Google, Trustpilot, App Store, G2, etc.]

Contexto del producto:
- Nombre del producto/empresa: [nombre]
- Tipo de producto: [SaaS / app / e-commerce / servicio / otro]
- Período de las reviews: [ej: últimos 6 meses]

Genera el análisis completo:

## Análisis de Reviews — [Producto] — [Fecha]

### 📊 Métricas generales
- Total reviews analizadas: N
- Sentimiento general: X% positivo / Y% neutral / Z% negativo
- Puntuación media: X/5
- Tendencia vs. período anterior: [si hay datos]

### 🏆 Top 5 fortalezas (lo que más mencionan positivamente)
Para cada una:
- **[Fortaleza]**: X menciones — Citas textuales: "[quote 1]" / "[quote 2]"
- Implicación estratégica: qué hacer con esto en marketing

### ⚠️ Top 5 problemas (lo que más genera fricción)
Para cada uno:
- **[Problema]**: X menciones — Citas textuales: "[quote 1]" / "[quote 2]"
- Impacto en retención: alto/medio/bajo
- Acción recomendada: [qué equipo debe actuar y cómo]

### 💡 Insights ocultos (lo que nadie ha resuelto aún)
Patrones menos obvios pero potencialmente diferenciadores.

### 📣 Frases para usar en marketing
5 citas textuales de clientes que pueden usarse como social proof en landing pages, anuncios o emails.

### 🎯 Recomendaciones priorizadas
| Prioridad | Acción | Equipo responsable | Impacto esperado |
|-----------|--------|-------------------|-----------------|
| 1 | ... | Producto/Marketing/Soporte | ... |
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Investigación de mercado, mejora de producto',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],

            // 6 - Legal (8) - Due diligence muy buscado en M&A
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence legal y comercial para compra de empresa o activo',
                'description'       => 'Framework completo para estructurar un proceso de due diligence: checklist de documentos, análisis de riesgos por área y resumen ejecutivo para el comité de inversión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como socio de un despacho M&A con 15 años de experiencia en due diligence de adquisiciones.

Contexto de la operación:
- Tipo de operación: [compraventa de empresa / compra de activos / fusión / inversión minoritaria]
- Sector de la empresa target: [sector]
- Tamaño aproximado: [facturación / empleados / valoración estimada]
- Jurisdicción: [España / otra — especifica]
- Timing: [fecha límite para el DD]

Genera el siguiente framework de due diligence:

## Due Diligence — [Target] — [Fecha]

### 📋 Checklist de documentación por área

**Área legal:**
- [ ] Escrituras de constitución y estatutos vigentes
- [ ] Libro de actas (últimos 5 años)
- [lista completa según el tipo de operación]

**Área financiera:**
- [ ] Cuentas auditadas (últimos 3 ejercicios)
- [ ] Proyecciones y presupuestos
- [lista completa]

**Área laboral:**
- [ ] Plantilla y contratos tipo
- [ ] Convenio colectivo aplicable
- [lista completa]

**Área fiscal:**
- [ ] Declaraciones de IS, IVA (últimos 4 años)
- [ ] Actas de inspección
- [lista completa]

**Área comercial y contratos:**
- [ ] Top 10 contratos de clientes
- [ ] Contratos con proveedores críticos
- [lista completa]

**Propiedad intelectual y tecnología:**
- [ ] Registro de marcas y patentes
- [ ] Licencias de software
- [lista completa]

### 🚨 Red flags a vigilar por área
Para cada área, los 3 indicadores de riesgo más críticos que deben examinarse en profundidad.

### 📊 Matriz de riesgos
| Riesgo identificado | Probabilidad | Impacto | Mitigación recomendada |
|--------------------|-----------|---------|-----------------------|
| ... | Alta/Media/Baja | Alto/Medio/Bajo | ... |

### 📝 Template de resumen ejecutivo para el comité
Estructura del documento de 1-2 páginas que presentarás al comité de inversión con los hallazgos clave.

### ⚖️ Cláusulas de protección a negociar en el SPA
Las 5 representaciones y garantías más importantes a incluir en el contrato de compraventa basadas en los riesgos detectados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'M&A, inversión, asesoría legal empresarial',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],

            // 7 - RRHH (6) - Plan de carrera con IA muy buscado
            [
                'profession_id'     => 6,
                'title'             => 'Plan de desarrollo profesional personalizado con IA (6-12 meses)',
                'description'       => 'Crea un plan de carrera individualizado para cualquier empleado: análisis de brechas de competencias, objetivos de desarrollo, recursos de aprendizaje y milestones de seguimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Business Partner experto en desarrollo de talento y planes de carrera individualizados.

Perfil del empleado:
- Nombre (opcional): [nombre o iniciales]
- Rol actual: [título y responsabilidades principales]
- Nivel de experiencia: [junior / mid / senior / lead]
- Tiempo en la empresa: [X meses/años]
- Rol o área objetivo: [a dónde quiere llegar en 1-2 años]
- Puntos fuertes identificados: [competencias donde destaca]
- Áreas de mejora: [competencias donde tiene brechas]
- Evaluación de desempeño reciente: [resumen o puntuación]
- Restricciones: [tiempo disponible para formación, presupuesto de formación]

Genera el plan completo:

## Plan de Desarrollo Individual — [Nombre/Rol] — [Año]

### 🎯 Objetivo de desarrollo (12 meses)
Una declaración clara y motivadora de hacia dónde va esta persona y por qué.

### 📊 Análisis de brechas de competencias
| Competencia | Nivel actual (1-5) | Nivel requerido | Brecha | Prioridad |
|------------|-------------------|----------------|--------|-----------|
| ... | ... | ... | ... | Alta/Media/Baja |

### 🗓️ Plan trimestral de desarrollo

**Q1 — Fundamentos:**
- Objetivo del trimestre: ...
- Acciones concretas: (formación, proyecto, mentoring, shadowing)
- Recursos: (cursos, libros, certificaciones con links o referencias)
- Milestone: cómo mediremos el progreso

[Repite para Q2, Q3, Q4]

### 💼 Asignaciones de trabajo para acelerar el desarrollo
3 proyectos o responsabilidades concretas que puedes darle para que desarrolle las competencias objetivo mientras trabaja.

### 👥 Red de apoyo
- Mentor interno recomendado: [perfil ideal]
- Stakeholders clave con quien debe relacionarse: [roles]
- Comunidades o eventos externos: [sugerencias]

### 📋 Template de check-in mensual (30 min)
5 preguntas para la reunión de seguimiento mensual entre manager y empleado.

### 🏆 Criterios de éxito a 12 meses
Cómo sabremos que el plan funcionó (indicadores concretos y observables).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Desarrollo de talento, retención, gestión del desempeño',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],

            // 8 - Finanzas (7) - Unit economics muy buscado por startups
            [
                'profession_id'     => 7,
                'title'             => 'Calculadora de unit economics y punto de inflexión para startups SaaS',
                'description'       => 'Analiza la salud financiera de tu negocio SaaS con los ratios clave: CAC, LTV, Payback Period, MRR Churn y el mes en que llegarás a rentabilidad. Con narrativa para inversores.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO fractional especializado en métricas SaaS y narrativa financiera para inversores.

Datos de mi negocio (usa 0 si no tienes el dato):
- MRR actual: [€/$/X]
- MRR hace 12 meses: [€/$/X]
- Número de clientes activos: [N]
- Clientes nuevos último mes: [N]
- Churn mensual (clientes que cancelaron): [N clientes o X%]
- Expansión MRR (upgrades): [€/mes]
- CAC (coste de adquirir un cliente): [€ o "no lo sé"]
- Gasto en ventas y marketing mensual: [€]
- ARPU (ingreso medio por usuario/mes): [€]
- Coste de servir a un cliente/mes (COGS): [€]
- Empleados: [N]
- Burn mensual total: [€]
- Caja disponible: [€]

Genera el análisis completo:

## Unit Economics — [Empresa] — [Mes/Año]

### 📊 Métricas calculadas
| Métrica | Valor | Benchmark SaaS | Semáforo |
|---------|-------|---------------|---------|
| LTV (Lifetime Value) | €X | >3x CAC | 🟢/🟡/🔴 |
| CAC | €X | <LTV/3 | 🟢/🟡/🔴 |
| Ratio LTV:CAC | X:1 | >3:1 | 🟢/🟡/🔴 |
| CAC Payback Period | X meses | <12 meses | 🟢/🟡/🔴 |
| MRR Churn Rate | X% | <2% mensual | 🟢/🟡/🔴 |
| Net Revenue Retention | X% | >100% | 🟢/🟡/🔴 |
| Gross Margin | X% | >70% | 🟢/🟡/🔴 |
| Runway | X meses | >18 meses | 🟢/🟡/🔴 |

### 📈 Proyección de crecimiento y punto de inflexión
Con el crecimiento MoM actual, cuándo llegarás a:
- €X MRR (próximo milestone)
- Breakeven operativo
- Punto de inflexión (cuando el crecimiento supera el burn)

### 🎯 Los 3 cambios que más impactan tus unit economics
Análisis de qué palanca tiene mayor ROI: reducir CAC, mejorar retención, aumentar ARPU o reducir COGS.

### 💬 Narrativa para inversores (1 párrafo)
Cómo explicarías estas métricas en un pitch deck. Honesto pero con el mejor encuadre posible.

### ⚠️ Alertas y recomendaciones
Los puntos críticos que debes abordar en los próximos 90 días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Análisis financiero, fundraising, gestión de startup',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],

            // 9 - Customer Support (9) - Análisis de churn muy buscado
            [
                'profession_id'     => 9,
                'title'             => 'Analiza conversaciones de soporte y predice qué clientes están a punto de cancelar',
                'description'       => 'Detecta señales de churn en tickets, chats y emails de soporte antes de que el cliente cancele. Genera un plan de acción por cliente y prioriza qué cuentas salvar primero.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success con especialización en reducción de churn mediante análisis de señales tempranas.

Pega aquí las conversaciones de soporte o tickets a analizar:
[CONVERSACIONES / TICKETS / EMAILS — uno por sección o separados por "---"]

Contexto adicional:
- Tipo de producto: [SaaS / app / servicio]
- Segmento de clientes: [SMB / mid-market / enterprise]
- Período analizado: [últimas X semanas]
- MRR en riesgo si cancela cada cliente: [si lo conoces]

Genera el análisis:

## Análisis de Riesgo de Churn — [Fecha]

### 🚨 Clientes en riesgo ALTO (actuar en 48h)
Para cada cliente:
**[Nombre/ID cliente]** — MRR en riesgo: €X
- Señales detectadas: [lista de red flags específicas de sus conversaciones]
- Sentimiento general: [muy negativo / negativo]
- Motivo principal de riesgo: [técnico / precio / falta de valor / competencia / ...]
- Acción recomendada: [llamada urgente / escalado a manager / demo de feature / ...]
- Mensaje de apertura sugerido: "[texto del primer mensaje para contactarles]"

### ⚠️ Clientes en riesgo MEDIO (actuar esta semana)
[Mismo formato, menos urgente]

### ✅ Clientes satisfechos (oportunidad de expansión)
Clientes que muestran señales positivas y podrían estar listos para un upsell.

### 📊 Patrones sistémicos detectados
¿Hay problemas que aparecen en múltiples clientes? ¿Bugs, confusiones de UX, falta de features?
Estos requieren acción del equipo de producto, no solo de CS.

### 📋 Plan de acción semanal
| Prioridad | Cliente | Acción | Responsable | Fecha |
|-----------|---------|--------|-------------|-------|
| 1 | ... | ... | ... | ... |
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Reducción de churn, customer success, retención',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],

            // 10 - Ventas (4) - Análisis de ICP muy buscado
            [
                'profession_id'     => 4,
                'title'             => 'Define tu ICP perfecto y genera el mensaje exacto para cada segmento',
                'description'       => 'Construye tu Ideal Customer Profile con datos reales de tus mejores clientes. Obtén el mensaje diferenciado por segmento, los canales de captación más efectivos y un scoring para cualificar leads.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de go-to-market con especialización en definición de ICP y segmentación para empresas B2B.

Información sobre mis mejores clientes actuales (los que más pagan, menos problemas dan y más tiempo llevan):
[DESCRIBE TUS 3-5 MEJORES CLIENTES: sector, tamaño, rol del comprador, problema que resuelves, por qué te eligieron]

Información sobre mi producto/servicio:
- Qué vendes: [descripción en 2-3 líneas]
- Precio/ticket medio: [€/mes o €/proyecto]
- Ciclo de venta típico: [días/semanas/meses]
- Quién firma la compra: [rol del decision maker]

Genera el análisis completo:

## Ideal Customer Profile — [Empresa] — [Fecha]

### 🎯 ICP Principal (80% de tu energía aquí)
**Perfil firmográfico:**
- Sector: [industria específica]
- Tamaño: [empleados / facturación]
- Geografía: [mercados objetivo]
- Modelo de negocio: [B2B/B2C/marketplace/...]
- Tecnología usada: [stack que indica que son buenos leads]

**Perfil del comprador (Buyer Persona):**
- Rol/título: [cargo exacto]
- Responsabilidades: [de qué es responsable]
- Métricas por las que le evalúan: [sus KPIs]
- Mayor frustración profesional: [pain point principal]
- Cómo se informa: [dónde busca soluciones]

**Desencadenantes de compra (trigger events):**
Los 5 eventos que hacen que este perfil empiece a buscar tu solución ahora.

### 📊 Scoring de leads (0-100 puntos)
| Criterio | Puntos | Cómo verificarlo |
|---------|--------|----------------|
| Sector correcto | 20 | ... |
| Tamaño correcto | 15 | ... |
| Trigger event activo | 25 | ... |
| Rol correcto | 20 | ... |
| Presupuesto probable | 20 | ... |

**Regla de cualificación: >70 puntos = llamada de discovery. <40 puntos = nurturing.**

### ✉️ Mensajes por segmento
Para cada perfil identificado, el mensaje de outreach de menos de 100 palabras con:
- Subject line
- Primer párrafo con hook específico al pain point
- CTA claro

### 📣 Canales de captación recomendados
Ordenados por ROI estimado para este ICP específico, con táctica concreta en cada canal.

### 🚫 Anti-ICP (clientes que debes rechazar)
Los perfiles que parecen buenos leads pero terminan siendo malos clientes. Señales de alerta en el proceso de venta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Estrategia go-to-market, prospección B2B, segmentación',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
        ];

        foreach ($skills as $data) {
            $title = $data['title'];
            $slug  = Str::slug($title);

            // Avoid duplicates
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping (exists): {$title}");
                continue;
            }

            Skill::create(array_merge($data, [
                'user_id' => $admin->id,
                'slug'    => $slug,
                'status'  => 'published',
                'version' => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));

            $this->command->info("Created: {$title}");
        }
    }
}
