<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills2Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            // 1 - Marketing (1) - LinkedIn B2B contenido masivamente buscado
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido LinkedIn B2B: de 0 a 10.000 seguidores en 90 días',
                'description'       => 'Construye una estrategia de contenido LinkedIn para B2B desde cero: pilares de contenido, tipos de post, frecuencia, hooks que funcionan y sistema de análisis de métricas semana a semana.',
                'prompt_content'    => <<<'PROMPT'
Eres un estratega de contenido B2B especializado en LinkedIn con experiencia construyendo audiencias de decisores empresariales.

Contexto de mi empresa:
- Sector/industria: [tu sector]
- Producto o servicio: [qué vendes]
- Cliente ideal (ICP): [rol, sector, tamaño de empresa]
- Objetivo en LinkedIn: [leads / branding / reclutamiento / thought leadership]
- Voz de marca: [formal/cercana/técnica/inspiracional]
- Recursos disponibles: [tiempo semanal para LinkedIn, ¿tienes diseñador?]
- Competidores que admiras en LinkedIn: [1-3 empresas o personas]

Genera la estrategia completa:

## Estrategia LinkedIn B2B — [Empresa] — 90 días

### 🎯 Posicionamiento único
En una frase: por qué alguien debería seguirte a ti y no a la competencia en LinkedIn.

### 🏛️ 3 Pilares de contenido
Para cada pilar:
- **[Nombre del pilar]**: qué temas cubre, por qué conecta con tu ICP
- Ratio recomendado: X% del contenido total
- Ejemplos de post: 3 títulos concretos

### 📅 Calendario editorial — Semanas 1-4 (plantilla replicable)
| Día | Tipo de post | Pilar | Hook de apertura | Formato |
|-----|-------------|-------|-----------------|---------|
| Lunes | ... | ... | ... | Texto / Carrusel / Vídeo |
| Miércoles | ... | ... | ... | ... |
| Viernes | ... | ... | ... | ... |

### 🪝 10 hooks de apertura que paran el scroll
Adaptados a tu ICP. Fórmulas probadas:
1. "El 90% de [rol del ICP] comete este error..."
2. [9 más, específicos para tu sector]

### 📊 Métricas a seguir (dashboard semanal)
| Métrica | Cómo medirla | Objetivo semana 4 | Objetivo semana 12 |
|---------|-------------|------------------|-------------------|
| Seguidores nuevos | Analytics nativo | +X | +X |
| Impresiones/post | Analytics nativo | +X | +X |
| Tasa de engagement | (Reacciones+comentarios)/impresiones | >X% | >X% |
| Leads generados | UTMs + LinkedIn Forms | X | X |

### 🚀 Quick wins semana 1 (antes de publicar contenido)
5 acciones de optimización del perfil y red que aumentan el alcance orgánico desde el día 1.

### ✍️ Template de post viral (estructura probada)
El formato exacto para escribir un post de texto largo que genera comentarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Marketing de contenidos, generación de leads B2B, personal branding',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],

            // 2 - Desarrollo (2) - Tickets de Jira perfectos muy buscado
            [
                'profession_id'     => 2,
                'title'             => 'Convierte requisitos vagos en tickets de Jira perfectamente estructurados',
                'description'       => 'Transforma descripciones ambiguas de producto o negocio en user stories con criterios de aceptación BDD, subtareas técnicas, estimación y definición de "done" que cualquier dev puede implementar sin preguntar.',
                'prompt_content'    => <<<'PROMPT'
Eres un senior product engineer que domina la escritura de tickets accionables. Tu objetivo: zero ambigüedad, cero idas y venidas entre devs y producto.

Requisito o idea a convertir en ticket:
[DESCRIBE EL REQUISITO CON TUS PALABRAS, tan vago o detallado como lo tengas]

Contexto técnico (opcional pero útil):
- Stack tecnológico: [frontend, backend, DB]
- Épica o proyecto al que pertenece: [nombre]
- Prioridad: [crítica / alta / media / baja]
- Sprint objetivo: [sprint X o "backlog"]

Genera el ticket completo:

---
## 🎫 [TIPO] — [Título conciso en formato "verbo + sustantivo"]
*Épica: [nombre] | Prioridad: [nivel] | Estimación: [X puntos o X horas]*

### User Story
**Como** [tipo de usuario],
**quiero** [acción o funcionalidad],
**para** [beneficio o valor que obtiene].

### Contexto y motivación
2-3 líneas explicando el POR QUÉ de este ticket. Qué problema resuelve y qué pasa si no se hace.

### Criterios de aceptación (formato Gherkin/BDD)
```
Escenario 1: [caso feliz principal]
  DADO QUE [condición inicial]
  CUANDO [acción del usuario]
  ENTONCES [resultado esperado]

Escenario 2: [caso alternativo o edge case]
  DADO QUE ...
  CUANDO ...
  ENTONCES ...

Escenario 3: [caso de error]
  DADO QUE ...
  CUANDO ...
  ENTONCES ...
```

### Subtareas técnicas
- [ ] [Backend] ...
- [ ] [Frontend] ...
- [ ] [Tests] ...
- [ ] [Docs/Analytics] ...

### Definición de Done (DoD)
- [ ] Criterios de aceptación pasados al 100%
- [ ] Tests unitarios e integración escritos y en verde
- [ ] Code review aprobado por al menos 1 peer
- [ ] Deployed en staging sin errores
- [ ] Feature flag activado / métricas configuradas (si aplica)

### Notas técnicas y consideraciones
Dependencias, riesgos, decisiones de diseño que el dev debe conocer antes de empezar.

### Recursos
- Diseño (Figma): [link o "no aplica"]
- Documentación relacionada: [links]
---
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 8,
                'use_case'          => 'Gestión ágil, refinement de backlog, product-engineering alignment',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],

            // 3 - Diseño (3) - Microcopy / UX writing muy buscado
            [
                'profession_id'     => 3,
                'title'             => 'UX Writing: genera el microcopy perfecto para errores, empty states y onboarding',
                'description'       => 'Crea el texto de interfaz que reduce fricción y aumenta conversión: mensajes de error empáticos, empty states que guían al usuario y flows de onboarding que activan el aha-moment.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX writer senior con experiencia en productos digitales de alto crecimiento. Tu especialidad: convertir momentos de fricción en momentos de confianza.

Contexto del producto:
- Nombre y tipo de producto: [app / SaaS / e-commerce / otro]
- Tono de voz de la marca: [formal / amigable / técnico / juguetón]
- Audiencia principal: [perfil del usuario]
- Pantalla o flujo concreto: [qué parte del producto]

Tipo de microcopy que necesitas (elige uno o varios):
[ ] Mensajes de error (validación de formulario, errores de sistema, 404...)
[ ] Empty states (cuando no hay datos, primera vez en una sección...)
[ ] Onboarding / tooltips / coachmarks
[ ] Confirmaciones y acciones destructivas (delete, cancelar, archivar)
[ ] Placeholders y labels de formularios
[ ] Notificaciones y toasts (éxito, warning, info)
[ ] Botones y CTAs

Genera el microcopy con esta estructura:

## UX Copy — [Pantalla/Flujo] — [Producto]

### [Tipo de copy 1]: [Nombre del momento]

**Situación:** qué acaba de pasar / qué ve el usuario

**❌ Copy actual o genérico (no hagas esto):**
> "Error. Inténtalo de nuevo."

**✅ Copy recomendado:**
> **Título:** [máx 5 palabras]
> **Cuerpo:** [1-2 frases — qué pasó + qué hacer]
> **CTA primario:** [acción clara]
> **CTA secundario (si aplica):** [escape hatch]

**Por qué funciona:** explicación breve de la decisión de escritura.

**Variantes (A/B testing):**
- Variante A: [versión más directa]
- Variante B: [versión más empática]

---
[Repite para cada momento de copy solicitado]

### Guía de voz para este flujo
3 reglas de escritura específicas para mantener consistencia en este contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 12,
                'use_case'          => 'UX writing, diseño de producto, mejora de conversión',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],

            // 4 - Ventas (4) - Forecast de ventas muy buscado
            [
                'profession_id'     => 4,
                'title'             => 'Analiza tu pipeline de ventas y genera el forecast de cierre más preciso',
                'description'       => 'Identifica deals en riesgo, calcula la probabilidad real de cierre por oportunidad y genera una narrativa de forecast que puedas presentar al board o a tu VP con confianza.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de ventas con experiencia en forecasting B2B de ciclo largo. Tu método combina análisis cuantitativo con señales cualitativas para predecir cierres con >85% de precisión.

Datos de mi pipeline actual:
[PEGA TU PIPELINE — puede ser una tabla de Excel/CRM o describirlo así:]

Para cada deal incluye:
- Nombre de la cuenta
- Valor (€/$)
- Etapa del pipeline: [prospecting / discovery / propuesta / negociación / verbal]
- Fecha de cierre estimada
- Último contacto: [fecha]
- Notas o contexto: [lo que sepas del deal]

Contexto adicional:
- Cuota del mes/trimestre: [€]
- MRR/ARR actual: [€]
- Ciclo de venta medio: [X días/semanas]
- Tamaño medio de deal: [€]

Genera el análisis completo:

## Análisis de Pipeline y Forecast — [Mes/Trimestre]

### 📊 Resumen ejecutivo
| | Deals | Valor total |
|---|---|---|
| Pipeline total | N | €X |
| Commit (cerrarán seguro) | N | €X |
| Best case (podrían cerrar) | N | €X |
| Upside (sorpresas positivas) | N | €X |
| **Forecast conservador** | | **€X** |
| Cuota | | €X |
| Gap/Superávit | | €X (X%) |

### 🚨 Deals en riesgo (actuar esta semana)
Para cada deal en riesgo:
**[Cuenta]** — €X — [Etapa]
- Señal de riesgo: [qué indica que puede perderse]
- Acción recomendada: [qué hacer exactamente y cuándo]
- Probabilidad ajustada: X% (vs X% de CRM)

### ⭐ Deals acelerables (quick wins)
Deals que con una acción concreta pueden cerrar antes de lo esperado.

### 📈 Análisis de velocidad del pipeline
¿Qué etapa tiene mayor drop-off? ¿Dónde se atascan los deals más tiempo?

### 💬 Narrativa de forecast para el board (1 párrafo)
Cómo presentar este forecast de forma clara y con contexto suficiente.

### 🎯 Plan de acción semanal
| Prioridad | Cuenta | Acción | Fecha | Objetivo |
|-----------|--------|--------|-------|---------|
| 1 | ... | ... | ... | ... |
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sales management, forecasting, gestión de pipeline',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],

            // 5 - Product Management (5) - North Star Metric muy buscado
            [
                'profession_id'     => 5,
                'title'             => 'Define la North Star Metric de tu producto y construye el árbol de métricas completo',
                'description'       => 'Encuentra la métrica única que mejor captura el valor que entregas a usuarios, construye el árbol de input metrics accionables y diseña el dashboard de producto que alinea a todo el equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un product analytics lead con experiencia ayudando a equipos de producto a pasar del caos de métricas a un sistema de medición claro y accionable.

Contexto de mi producto:
- Nombre y descripción: [qué hace el producto]
- Modelo de negocio: [SaaS / marketplace / e-commerce / app gratuita + IAP / otro]
- Etapa: [pre-product-market fit / post-PMF / escala]
- Métricas que ya rastreas: [lista las que tienes]
- Mayor duda actual: [qué no sabes cómo medir]
- Usuarios activos (DAU/MAU): [aproximado]

Genera el framework completo:

## Sistema de Métricas de Producto — [Nombre producto]

### 🌟 North Star Metric recomendada
**[NOMBRE DE LA MÉTRICA]**

*Definición exacta:* cómo se calcula, qué cuenta y qué no cuenta.

*Por qué esta y no otra:* razonamiento basado en tu modelo de negocio y etapa.

*Frecuencia de medición:* [diaria / semanal / mensual]

*Objetivo a 12 meses:* [X — basado en benchmarks del sector]

### 🌳 Árbol de métricas (Input metrics)
```
North Star Metric: [NSM]
├── Amplitud: ¿cuántos usuarios hacen X?
│   ├── Input 1: [métrica accionable]
│   └── Input 2: [métrica accionable]
├── Frecuencia: ¿con qué frecuencia hacen X?
│   ├── Input 3: [métrica accionable]
│   └── Input 4: [métrica accionable]
└── Profundidad: ¿qué tanto valor obtienen?
    ├── Input 5: [métrica accionable]
    └── Input 6: [métrica accionable]
```

### 📊 Dashboard de producto (qué revisar y cuándo)
| Métrica | Frecuencia | Quién la revisa | Alerta si... |
|---------|-----------|----------------|-------------|
| NSM | Diaria | CPO + equipo | Cae >5% WoW |
| [Input 1] | Semanal | PM responsable | ... |
| [Negocio] | Mensual | Board | ... |

### ⚠️ Métricas vanidad a ignorar
Las métricas que tu equipo probablemente mira y que no predicen crecimiento real. Por qué descartarlas.

### 🔬 Experimento para validar la NSM en 2 semanas
Un test concreto para confirmar que la NSM está correlacionada con retención y revenue.

### 💬 Cómo comunicar la NSM al equipo
El mensaje de 5 minutos para presentar el nuevo sistema de métricas en el all-hands.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Product strategy, data-driven product, alineación de equipo',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],

            // 6 - RRHH (6) - eNPS y clima laboral muy buscado
            [
                'profession_id'     => 6,
                'title'             => 'Diseña una encuesta eNPS y convierte los resultados en plan de acción',
                'description'       => 'Crea una encuesta de Employee Net Promoter Score completa con preguntas de seguimiento, analiza los resultados cualitativos y genera un plan de mejora priorizado por impacto en retención.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Analytics specialist con experiencia diseñando sistemas de escucha de empleados que generan cambio real, no solo datos bonitos.

Contexto de mi empresa:
- Tamaño: [N empleados]
- Sectores/departamentos: [lista]
- Frecuencia de medición deseada: [trimestral / semestral / anual]
- Problemas que sospechas: [alta rotación / desmotivación / falta de reconocimiento / comunicación / otro]
- eNPS actual (si lo tienes): [número o "primera vez"]
- Herramienta de encuestas disponible: [Typeform / Google Forms / Culture Amp / Officevibe / otra]

MODO 1 — DISEÑO DE ENCUESTA:

## Encuesta eNPS — [Empresa] — [Trimestre/Año]

### Pregunta eNPS core
"En una escala del 0 al 10, ¿con qué probabilidad recomendarías [Empresa] como un lugar para trabajar a un amigo o conocido?"

### Preguntas de seguimiento (máx. 8, abiertas y cerradas)
Diseñadas para diagnosticar el driver detrás del score. Incluye:
- 2 preguntas abiertas para detractores (0-6)
- 2 preguntas abiertas para pasivos (7-8)
- 2 preguntas abiertas para promotores (9-10)
- 2 preguntas de drivers de compromiso para todos

### Configuración técnica recomendada
- Anonimato: [cómo garantizarlo]
- Segmentación mínima necesaria: [departamento, antigüedad, nivel]
- Comunicación pre-encuesta: email template para aumentar la tasa de respuesta
- Tasa de respuesta objetivo: >70%

---

MODO 2 — ANÁLISIS DE RESULTADOS:
[Si ya tienes datos, pégalos aquí: scores, comentarios textuales]

## Análisis eNPS — [Empresa] — [Fecha]

### 📊 Score y segmentación
- eNPS global: [fórmula: %promotores - %detractores]
- Benchmark del sector: [X — contexto]
- Evolución vs. período anterior: [+X / -X puntos]
- eNPS por departamento: tabla con semáforo 🟢🟡🔴

### 🔍 Análisis de comentarios cualitativos
Top 5 temas positivos (con frecuencia y citas textuales)
Top 5 temas de mejora (con frecuencia y citas textuales)

### 🎯 Plan de acción priorizado
| Palanca | Impacto en eNPS | Esfuerzo | Acción concreta | Responsable | Plazo |
|---------|----------------|---------|----------------|-------------|-------|
| ... | Alto/Medio/Bajo | Alto/Medio/Bajo | ... | RRHH/Manager/CEO | X semanas |

### 📣 Comunicación de resultados al equipo
Template de mensaje all-hands: qué compartir, qué comprometerse a hacer y en qué plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Employee engagement, retención de talento, cultura organizacional',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],

            // 7 - Finanzas (7) - Narrativa para board muy buscado
            [
                'profession_id'     => 7,
                'title'             => 'Narrativa financiera para board meeting: convierte números en historia',
                'description'       => 'Transforma tu P&L, cash flow y KPIs en una presentación de board que cuenta una historia clara con contexto, varianzas explicadas y los próximos pasos que piden los inversores.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia presentando ante boards de inversores de venture capital y private equity. Tu especialidad: convertir datos financieros complejos en narrativas que generan confianza y alinean decisiones.

Datos financieros del período:
[PEGA TUS NÚMEROS — P&L resumido, métricas clave, o describe los datos disponibles]

Contexto del board:
- Tipo de inversores: [VCs / angels / family office / PE / consejo estratégico]
- Etapa de la empresa: [seed / Serie A / Serie B / crecimiento / rentable]
- Período: [mes X / Q1 / semestre]
- Temas sensibles que anticipas: [áreas donde los números no son buenos]
- Decisiones que necesitas del board: [aprobaciones, recursos, validaciones]

Genera la narrativa completa:

## Board Update — [Empresa] — [Período]

### 📌 Executive Summary (lo que el board debe saber en 60 segundos)
3 bullets: logro principal del período, principal desafío y la decisión más importante que necesitas.

### 📈 Performance vs. Plan
Para cada métrica clave:
- **[Métrica]**: Real €X vs. Plan €X → [+X% / -X%]
- *Narrativa de varianza:* por qué está por encima/debajo. Factores internos vs. externos.
- *Acción tomada o planificada:* qué estás haciendo al respecto.

### 💰 Situación financiera
- Cash en caja: €X | Runway: X meses
- Burn rate mensual: €X (vs. €X plan)
- MRR: €X | Crecimiento MoM: X%

### 🎯 Iniciativas del trimestre: estado
| Iniciativa | Estado | Impacto logrado | Próximo hito |
|-----------|--------|----------------|-------------|
| ... | 🟢 En plan / 🟡 En riesgo / 🔴 Retrasada | ... | ... |

### 🔮 Outlook próximo trimestre
Guía de resultados esperados con rango conservador/base/optimista y los supuestos clave.

### ✅ Decisiones que necesito del board
Para cada decisión: contexto, opciones consideradas, recomendación y plazo.

### 💬 Cómo manejar preguntas difíciles
Preparación para las 3 preguntas más probables que harán los inversores sobre los puntos débiles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Investor relations, board management, CFO communications',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],

            // 8 - Legal (8) - SLA muy buscado en contratos tech
            [
                'profession_id'     => 8,
                'title'             => 'Redacta un SLA (Service Level Agreement) para contratos de software o servicios tech',
                'description'       => 'Genera un acuerdo de nivel de servicio completo y equilibrado para contratos de SaaS, desarrollo de software o servicios tecnológicos, con los KPIs de servicio, penalizaciones y mecanismos de resolución correctamente definidos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en contratos tecnológicos y acuerdos de nivel de servicio.

Contexto del servicio:
- Tipo de servicio: [SaaS / hosting / desarrollo a medida / mantenimiento / soporte / API]
- Descripción del servicio: [qué ofreces exactamente]
- Tipo de cliente: [empresa / consumidor / administración pública]
- Criticidad del servicio para el cliente: [alta / media / baja — ej: si es misión crítica o no]
- Jurisdicción: [España / UE / otra]
- Duración del contrato: [meses/años]

Genera el SLA completo:

---
## ACUERDO DE NIVEL DE SERVICIO (SLA)
**Proveedor:** [Nombre empresa]
**Cliente:** [Nombre cliente o "El Cliente"]
**Versión:** 1.0 | **Fecha:** [fecha]

### 1. Objeto y alcance
Definición precisa de qué servicios cubre este SLA y cuáles quedan expresamente excluidos.

### 2. Disponibilidad del servicio
- **Disponibilidad garantizada:** X% uptime mensual (equivale a máx. X horas de downtime/mes)
- **Ventana de mantenimiento programado:** [días/horas — no computa como downtime]
- **Cómo se mide:** [herramienta de monitorización, período de cálculo]
- **Fórmula de cálculo:** (Tiempo disponible / Tiempo total) × 100

### 3. Tiempos de respuesta y resolución por severidad
| Severidad | Definición | Tiempo de respuesta | Tiempo de resolución |
|-----------|-----------|--------------------|--------------------|
| Crítica (P1) | Servicio caído, impacto total | X hora | X horas |
| Alta (P2) | Funcionalidad crítica degradada | X horas | X horas |
| Media (P3) | Funcionalidad parcial afectada | X horas | X días hábiles |
| Baja (P4) | Inconveniente menor | X días hábiles | X días hábiles |

### 4. Canales de soporte y horario
Detalle de canales (email, teléfono, portal), horarios por severidad y contactos de escalado.

### 5. Penalizaciones por incumplimiento
| Disponibilidad real | Crédito de servicio |
|--------------------|--------------------|
| 99,0% - 99,5% | X% de la cuota mensual |
| 95,0% - 99,0% | X% de la cuota mensual |
| < 95,0% | X% de la cuota mensual |

**Límite máximo de créditos:** X% de la cuota mensual.
**Procedimiento de reclamación:** [plazo y forma]

### 6. Exclusiones de responsabilidad
Causas de fuerza mayor, fallos imputables al cliente, ataques de terceros, etc.

### 7. Métricas de reporting
Informe mensual que el proveedor entregará al cliente con los KPIs del SLA.

### 8. Proceso de revisión y modificación del SLA
Cómo se actualiza el SLA y con qué preaviso.

---
*[NOTA LEGAL: Este documento es un template orientativo. Debe ser revisado por un abogado antes de su uso en contratos reales.]*
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Contratos tecnológicos, SaaS, servicios B2B',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],

            // 9 - Customer Support (9) - Base de conocimiento muy buscado
            [
                'profession_id'     => 9,
                'title'             => 'Construye una base de conocimiento de soporte desde cero con estructura SEO',
                'description'       => 'Diseña la arquitectura completa de tu help center, escribe los primeros artículos siguiendo la estructura que reduce tickets y genera tráfico orgánico, y crea el sistema de mantenimiento para que no quede desactualizada.',
                'prompt_content'    => <<<'PROMPT'
Eres un Knowledge Base Architect especializado en help centers que reducen volumen de tickets en un 30-40% y generan tráfico SEO cualificado.

Contexto de mi producto:
- Nombre: [nombre]
- Tipo: [SaaS / app / e-commerce / servicio]
- Ticket más frecuente que recibes: [los 5 problemas más comunes]
- Herramienta de help center: [Intercom / Zendesk / Notion / GitBook / Crisp / otra]
- Volumen de tickets/mes: [aproximado]
- Equipo de soporte: [N personas]

FASE 1 — ARQUITECTURA:

## Base de Conocimiento — [Producto]

### 🏗️ Estructura de categorías (taxonomía)
Propuesta de X categorías principales con subcategorías:
```
📁 Primeros pasos
   └── Crear tu cuenta
   └── Configuración inicial
   └── Tour del producto
📁 [Categoría 2]
   └── ...
```

### 📊 Priorización de artículos (qué escribir primero)
Los 20 artículos que debes crear en las primeras 2 semanas, ordenados por:
- Volumen de tickets que resuelven (impacto inmediato)
- Potencial de tráfico SEO (impacto a largo plazo)

---

FASE 2 — REDACCIÓN DE ARTÍCULOS:
[Si tienes un tema concreto, indícalo y generaré el artículo completo]

Tema del artículo: [título o pregunta que responde]

## [Título del artículo — en formato pregunta o tarea]

**Tiempo de lectura:** X min | **Actualizado:** [fecha]

### El problema (sin este título visible)
Una frase que conecta con el momento de frustración del usuario.

### Lo que necesitas antes de empezar
- Acceso a: [permisos o requisitos]
- Nivel: [principiante / todos los niveles]

### Cómo hacerlo (paso a paso)
1. **[Paso 1]**: descripción clara + screenshot o descripción visual
2. ...

### Si algo no funciona
Troubleshooting de los 3 errores más comunes con solución directa.

### Preguntas relacionadas
- [Link a artículo relacionado 1]
- [Link a artículo relacionado 2]

---

FASE 3 — SISTEMA DE MANTENIMIENTO:
Proceso mensual de 2 horas para mantener la KB actualizada y relevante.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Self-service support, reducción de tickets, SEO de soporte',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],

            // 10 - Freelancers (10) - Sistema de productividad muy buscado
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de productividad freelance con IA: gestiona proyectos, tiempo y energía',
                'description'       => 'Diseña tu sistema completo de trabajo como freelance: estructura semanal, gestión de proyectos simultáneos, tracking de tiempo facturable y rituales de cierre para desconectar sin perder ninguna tarea.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de productividad especializado en freelancers y solopreneurs que gestionan múltiples clientes sin equipo.

Mi situación actual:
- Tipo de servicios que ofrezco: [diseño / desarrollo / copy / consultoría / otro]
- Número de clientes activos: [N]
- Horas de trabajo objetivo/semana: [N horas]
- Mayor problema de productividad: [procrastinación / sobreagenda / distracción / falta de límites / otro]
- Herramientas que ya uso: [Notion / Trello / Toggl / cal.com / otro]
- ¿Tienes equipo o trabajas solo? [solo / con colaboradores ocasionales]

Diseña mi sistema completo:

## Sistema de Productividad Freelance — [Tu nombre]

### 🗓️ Estructura semanal ideal
Diseño de la semana tipo con bloques de tiempo concretos:
- **Deep work** (trabajo de máxima concentración): cuándo y cuánto
- **Shallow work** (emails, reuniones, admin): cuándo y cuánto
- **Tiempo de negocio** (ventas, marketing propio): cuándo y cuánto
- **Buffer y urgencias**: margen de seguridad
- **Offline total**: cuándo desconectar sin culpa

### 📋 Sistema de gestión de proyectos (adaptado a tus herramientas)
Estructura de proyecto tipo que funciona para N clientes simultáneos:
- Tablero/carpeta por cliente
- Estados del proyecto y cuándo avanzar cada uno
- Dónde guardar qué (archivos, briefs, contratos, facturas)

### ⏱️ Tracking de tiempo facturable
- Método recomendado para tu tipo de trabajo
- Cómo capturar el tiempo sin interrumpir el flow
- Template de informe de tiempo para enviar al cliente

### 🔁 Rituales clave
**Ritual de inicio del día (15 min):**
Las 3 acciones exactas para arrancar en modo productivo.

**Ritual de cierre del día (10 min):**
Las 3 acciones exactas para cerrar sin dejar nada en el aire y desconectar de verdad.

**Revisión semanal (30 min, viernes):**
El checklist completo para revisar la semana y planificar la siguiente.

### 🚨 Los 5 ladrones de tiempo del freelance
Los patrones específicos de tu perfil que más tiempo te roban y cómo eliminarlos.

### 🤖 Automatizaciones con IA para recuperar 5h/semana
Tareas concretas de tu flujo de trabajo que puedes automatizar hoy con Claude u otras IAs.

### 📊 Dashboard de salud del negocio (revisar mensualmente)
Las 5 métricas que un freelance debe revisar cada mes para saber si el negocio va bien.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Productividad, gestión de proyectos freelance, time management',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
        ];

        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping (exists): {$data['title']}");
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
