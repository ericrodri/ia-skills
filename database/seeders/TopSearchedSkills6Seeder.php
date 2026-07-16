<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills6Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Email automation por comportamiento: secuencias que se adaptan a cada usuario',
                'description'       => 'Diseña el sistema de emails automatizados basado en comportamiento del usuario: triggers de activación, ramas de decisión y mensajes que se sienten personales aunque lleguen a miles de personas.',
                'prompt_content'    => <<<'PROMPT'
Eres un email marketing strategist especializado en behavioral email automation con experiencia en Klaviyo, ActiveCampaign y HubSpot.

Mi contexto:
- Tipo de negocio: [SaaS / e-commerce / infoproductos / servicios]
- Herramienta de email: [Klaviyo / ActiveCampaign / HubSpot / Mailchimp / otra]
- Objetivo principal: [activación / retención / reactivación / upsell]
- Eventos de comportamiento que puedo trackear: [registro / compra / login / vista de página / click / inactividad]
- Lista actual: [N suscriptores]

Genera el sistema completo:

## Sistema de Email Automation — [Empresa]

### 🗺️ Mapa de automatizaciones prioritarias

**1. Secuencia de bienvenida y activación (trigger: registro)**
Para nuevos usuarios que aún no han completado la acción clave.

| Email | Día | Asunto | Objetivo | CTA |
|-------|-----|--------|---------|-----|
| 1 | 0 | [asunto] | Bienvenida + primera acción | [CTA] |
| 2 | 2 | [asunto — si no hicieron X] | Activación | [CTA] |
| 3 | 5 | [asunto — si no hicieron X] | Valor + prueba social | [CTA] |
| 4 | 9 | [asunto — último intento] | Oferta de ayuda | [CTA] |

**Rama si SÍ activaron (hicieron la acción clave):**
- Email de confirmación de valor + siguiente paso

**2. Secuencia de reactivación (trigger: X días sin login)**
Para usuarios que se "durmieron".

**3. Secuencia de upsell (trigger: uso intensivo de feature X)**
Para usuarios que están listos para el siguiente plan.

### ✍️ Emails completos (los 3 más importantes)
Para cada email: asunto (3 variantes A/B/C), preview text, cuerpo completo listo para copiar.

### 🔧 Configuración técnica
- Cómo configurar los triggers en tu herramienta
- Condiciones de entrada y salida de cada automatización
- Cómo evitar que un usuario reciba emails contradictorios de múltiples flujos

### 📊 Métricas por automatización
Open rate objetivo, CTR objetivo y cómo saber si una automatización no está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Email marketing, marketing automation, retención de usuarios',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementa autenticación segura con JWT y OAuth 2.0 desde cero',
                'description'       => 'Diseña e implementa un sistema de autenticación production-ready: JWT con refresh tokens, OAuth con Google/GitHub, protección contra ataques comunes y las decisiones de seguridad documentadas.',
                'prompt_content'    => <<<'PROMPT'
Eres un security engineer especializado en sistemas de autenticación y autorización para aplicaciones web modernas.

Mi contexto:
- Stack: [Node.js+Express / Python+FastAPI / Laravel / Rails / otro]
- Base de datos: [PostgreSQL / MySQL / MongoDB]
- Necesidades de auth: [email+password / OAuth social / magic link / MFA / todas]
- Tipo de app: [SPA / SSR / API pura / mobile backend]
- Requisitos de seguridad especiales: [HIPAA / PCI / SOC2 / ninguno]

## Sistema de Autenticación — [Stack]

### 🏗️ Arquitectura de auth recomendada
Diagrama textual del flujo completo y justificación de cada decisión de diseño.

### 🔐 JWT: implementación correcta

**Estructura del token:**
```json
{
  "header": { "alg": "RS256", "typ": "JWT" },
  "payload": {
    "sub": "user_id",
    "iat": 1234567890,
    "exp": 1234567890,
    "jti": "unique_token_id"
  }
}
```

**Por qué RS256 y no HS256:** explicación de la diferencia y cuándo usar cada uno.

**Access token + Refresh token:**
```javascript/python/php
// Implementación completa con:
// - Generación de par de tokens
// - Validación del access token
// - Rotación del refresh token (detecta robo)
// - Blacklisting de tokens revocados
```

### 🌐 OAuth 2.0 con Google (y adaptable a otros providers)

**Flujo Authorization Code + PKCE:**
```
1. Frontend → /auth/google → Google consent screen
2. Google → callback con code
3. Backend → intercambia code por tokens
4. Backend → crea/actualiza usuario
5. Backend → devuelve JWT propio
```

```javascript/python/php
// Código completo del endpoint de callback
// Manejo de state parameter (CSRF protection)
// Linking de cuenta si el email ya existe
```

### 🛡️ Protecciones contra ataques comunes
- Brute force: rate limiting + account lockout
- Session fixation: cómo prevenirlo
- CSRF: tokens o SameSite cookies
- XSS: dónde guardar los tokens (localStorage vs. httpOnly cookies — debate con respuesta)
- Token theft: refresh token rotation + familia de tokens

### 🧪 Tests de seguridad a ejecutar
Checklist de vulnerabilidades a verificar antes de ir a producción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Seguridad, autenticación, backend development',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Rediseña tu landing page para doblar la tasa de conversión (con análisis incluido)',
                'description'       => 'Analiza tu landing page actual con el framework CRO y genera el rediseño completo: nueva estructura, copy por sección, elementos de prueba social y tests A/B prioritarios para doblar el CVR.',
                'prompt_content'    => <<<'PROMPT'
Eres un Conversion Rate Optimization specialist con experiencia rediseñando landing pages que doblan o triplican las conversiones sin aumentar el tráfico.

Mi landing page:
- URL actual o descripción de la página: [URL o describe sección por sección]
- Producto/servicio: [descripción]
- Visitantes mensuales: [N]
- Conversión actual: [X%] → [N conversiones/mes]
- CTA principal: [qué acción quieres que hagan]
- Fuente de tráfico principal: [SEO / paid / social / referral]
- Precio del producto: [€]

## Análisis CRO y Rediseño — [Página]

### 🔍 Diagnóstico de la página actual
Evaluación de cada sección con el framework LIFT (Value Proposition, Relevance, Clarity, Anxiety, Distraction, Urgency):

**Above the fold:**
- ❌ Problemas detectados: [lista]
- ✅ Qué funciona bien: [lista]

**[Resto de secciones]:** mismo análisis

### 🏗️ Nueva estructura recomendada

**Sección 1 — Hero (lo más importante)**
- Headline: [texto exacto con propuesta de valor clara]
- Subheadline: [texto exacto que amplía el headline]
- CTA: [texto del botón + color + posición]
- Visual: [descripción de la imagen/vídeo ideal]

**Sección 2 — Problema (agitación)**
- [Copy exacto que conecta con el dolor del usuario]

**Sección 3 — Solución**
- [Cómo presentar el producto en lenguaje de beneficios, no features]

**Sección 4 — Prueba social**
- Qué tipo de social proof funciona mejor para este precio/producto
- [Layout y copy de los testimonios]

**Sección 5 — Objeciones y FAQs**
- Las 5 objeciones más frecuentes con respuesta que reduce ansiedad

**Sección 6 — CTA final**
- [Copy + urgencia genuina si aplica]

### 🧪 Tests A/B prioritarios (por impacto esperado)
| Test | Hipótesis | Variante A | Variante B | Métrica |
|------|-----------|-----------|-----------|---------|
| 1 | ... | [control] | [variante] | CVR |

### 📊 Métricas a instalar (Hotjar, GA4, etc.)
Qué eventos trackear para tomar decisiones basadas en datos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'CRO, landing pages, diseño orientado a conversión',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Renovación de contrato y negociación de expansión con cliente existente',
                'description'       => 'Prepara la conversación de renovación de contrato con la estrategia para mantener el precio, ampliar el scope y evitar que el cliente aproveche el momento para renegociar a la baja.',
                'prompt_content'    => <<<'PROMPT'
Eres un Account Executive senior especializado en renovaciones y expansión de cuentas B2B con ciclos de contrato anuales.

Mi situación:
- Cliente: [nombre o descripción]
- Contrato actual: [€/mes o €/año — duración]
- Fecha de renovación: [mes/año]
- Uso del producto/servicio: [activo/pasivo — cómo lo usan]
- NPS o satisfacción conocida: [alta/media/baja o desconocida]
- Oportunidad de expansión: [más usuarios / nuevo módulo / más volumen]
- Riesgo de pérdida: [alto/medio/bajo — por qué]
- Competidores que rondan la cuenta: [si lo sabes]

## Estrategia de Renovación — [Cliente] — [Fecha]

### 📊 Diagnóstico de la cuenta pre-renovación
- Health score estimado: [verde/amarillo/rojo]
- Argumentos a tu favor (valor entregado)
- Riesgos que debes mitigar antes de la conversación

### 📞 Secuencia de contactos pre-renovación (60 días antes)

**Día -60: Business Review**
Pide una reunión de business review. Objetivo: mostrar valor antes de hablar de precio.
Email template: [texto exacto]

**Día -30: Propuesta de expansión**
Presenta la oportunidad de ampliar antes de renovar al mismo nivel.
Email template: [texto exacto]

**Día -14: Conversación de renovación**
Agenda formal de la reunión de renovación.

### 🗣️ Guión de la reunión de renovación

**Apertura (no empieces por el precio):**
[Script exacto de los primeros 5 minutos]

**Presentación de valor entregado:**
Cómo estructurar el ROI del año que se va (datos que necesitas preparar).

**La propuesta de renovación:**
Cómo presentar precio y términos. El orden importa.

**Manejo de objeciones:**
- "Necesitamos un descuento para renovar": [respuesta exacta]
- "Lo estamos evaluando con la competencia": [respuesta exacta]
- "Tenemos que reducir costes este año": [respuesta exacta]

### 📋 Términos de la propuesta de renovación
Qué incluir para hacer la renovación más atractiva sin reducir el precio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Account management, renovaciones, expansión de cuentas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Post-mortem de feature o proyecto fallido: convierte el fracaso en aprendizaje accionable',
                'description'       => 'Facilita un post-mortem sin culpas que extrae los aprendizajes reales de una feature que no funcionó, un lanzamiento fallido o un proyecto cancelado. Con template, dinámica y cómo convertir los hallazgos en mejoras del proceso.',
                'prompt_content'    => <<<'PROMPT'
Eres un Engineering Manager y facilitador de post-mortems con experiencia convirtiendo fracasos en mejoras sistémicas sin buscar culpables.

Contexto del post-mortem:
- Qué falló: [feature lanzada que no tuvo adopción / bug en producción / proyecto cancelado / otro]
- Impacto: [usuarios afectados / revenue perdido / tiempo invertido]
- Equipo involucrado: [roles]
- Timeline del incidente o proyecto: [fechas clave]
- Hipótesis inicial sobre por qué falló: [lo que crees que pasó]

## Post-Mortem — [Nombre del proyecto/incidente] — [Fecha]

### 📋 Resumen ejecutivo
- Qué ocurrió (en 3 líneas, sin jerga)
- Impacto cuantificado
- Estado actual (resuelto / en resolución / aprendizaje aplicado)

### 🗓️ Timeline detallado
Reconstrucción cronológica de los eventos clave. Basada en hechos, no en interpretaciones.

| Fecha/Hora | Evento | Quién lo detectó | Acción tomada |
|-----------|--------|----------------|--------------|
| ... | ... | ... | ... |

### 🔍 Análisis de causa raíz (5 Whys)
```
Problema: [síntoma observable]
→ Why 1: [primera causa]
  → Why 2: [causa de la causa]
    → Why 3: ...
      → Why 4: ...
        → Why 5: [causa raíz sistémica]
```

### 💡 Qué salió bien (para preservar)
Aspectos del proceso o equipo que funcionaron correctamente y no deben perderse.

### ⚠️ Qué falló (sin culpables — foco en sistemas)
Procesos, herramientas o comunicaciones que contribuyeron al fracaso.

### 🎯 Plan de acción (con dueños y fechas)
| Acción | Por qué | Dueño | Fecha límite | Cómo verificar |
|--------|---------|-------|-------------|---------------|
| ... | ... | ... | ... | ... |

### 📣 Cómo facilitar la sesión de post-mortem
Agenda de 60-90 min, reglas de participación y cómo evitar que se convierta en sesión de culpas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Engineering management, mejora continua, cultura de aprendizaje',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Política de compensación variable y bonus por performance que motiva de verdad',
                'description'       => 'Diseña el sistema de bonus y compensación variable alineado con los objetivos del negocio. Con fórmulas claras, métricas accionables y comunicación que motiva en lugar de generar ansiedad.',
                'prompt_content'    => <<<'PROMPT'
Eres un Total Rewards specialist con experiencia diseñando sistemas de compensación variable que mejoran el rendimiento sin crear incentivos perversos.

Contexto de mi empresa:
- Sector y tipo de negocio: [tech / comercial / consultoría / otro]
- Roles a los que aplica el variable: [ventas / todos / solo management / otro]
- Salario base medio del colectivo: [€/año]
- Porcentaje de variable sobre el total deseado: [X%]
- Periodicidad del pago: [mensual / trimestral / anual]
- Métricas de negocio que quieres incentivar: [revenue / NPS / producto / eficiencia]
- Problema con el sistema actual (si existe): [describe]

## Sistema de Compensación Variable — [Empresa]

### 🏗️ Estructura del modelo

**Para el rol de [Ventas/otro]:**
- Salario base: €X (X% del total)
- Variable objetivo (OTE): €X (X% del total)
- Variable máximo (superación): €X (X% del objetivo)

**Fórmula de cálculo:**
```
Bonus = Variable_objetivo × (Logro_KPI1 × Peso1 + Logro_KPI2 × Peso2 + ...)
```

### 📊 KPIs y ponderación

| KPI | Peso | Cómo se mide | Umbral mínimo (0%) | Objetivo (100%) | Máximo (150%) |
|-----|------|-------------|-------------------|----------------|---------------|
| [KPI 1] | X% | [fuente de datos] | €/N | €/N | €/N |
| [KPI 2] | X% | [fuente de datos] | X% | X% | X% |

**Por qué estos KPIs y no otros:** razonamiento anti-incentivos perversos.

### 📅 Ciclo de gestión del variable
- Cuándo se fijan los objetivos: [inicio de trimestre/año]
- Cuándo se comunica el progreso: [mensual — dashboard]
- Cuándo se evalúa y paga: [proceso exacto]

### 💬 Cómo comunicar el sistema al equipo
- Guía de conversación manager → empleado para explicar el sistema
- Las preguntas más frecuentes y sus respuestas honestas
- Cómo gestionar cuando alguien no llega al mínimo

### ⚠️ Errores de compensación variable que generan toxicidad
Los 5 diseños que parecen buenos pero crean comportamientos disfuncionales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Compensación, total rewards, gestión de rendimiento',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de estados financieros: lee un balance y P&L como un inversor profesional',
                'description'       => 'Interpreta los estados financieros de cualquier empresa (competidor, cliente, inversión potencial) para detectar señales de salud o riesgo que no son obvias a primera vista.',
                'prompt_content'    => <<<'PROMPT'
Eres un analista financiero con experiencia en análisis fundamental de empresas cotizadas y privadas, M&A y due diligence financiero.

Estados financieros a analizar:
[PEGA O DESCRIBE: Balance de situación, Cuenta de Resultados y/o Estado de Cash Flow]

Contexto del análisis:
- Empresa analizada: [nombre o "empresa del sector X"]
- Motivo del análisis: [cliente potencial / competidor / inversión / proveedor / auditoría]
- Período: [año o trimestre]
- Sector: [para benchmarks correctos]

## Análisis Financiero — [Empresa] — [Período]

### 📊 Ratios clave calculados

**Liquidez y solvencia:**
| Ratio | Fórmula | Valor | Benchmark sector | Semáforo |
|-------|---------|-------|-----------------|---------|
| Liquidez corriente | AC/PC | X | >1.5 | 🟢/🟡/🔴 |
| Prueba ácida | (AC-Inventario)/PC | X | >1.0 | ... |
| Ratio de endeudamiento | Deuda/PN | X | <1.0 | ... |

**Rentabilidad:**
| ROE | ROA | Margen neto | EBITDA margin |
|-----|-----|------------|--------------|

**Eficiencia operativa:**
| Rotación de activos | Días de cobro | Días de pago | Ciclo de conversión de caja |

### 🚨 Red flags detectados
Señales de alerta que indican riesgo financiero que no son obvias a primera vista:
1. [Red flag] — qué significa y qué preguntar
2. ...

### ✅ Señales positivas
Indicadores de fortaleza financiera que refuerzan la confianza.

### 🔮 Proyección: ¿cuánto aguanta si...?
Análisis de escenarios de estrés: qué pasa si los ingresos caen un 20%, si sube el tipo de interés, etc.

### 💬 Conclusión ejecutiva
En 5 líneas: empresa sana / en riesgo / en crisis — con los 3 argumentos principales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Análisis financiero, due diligence, toma de decisiones',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Acuerdo de colaboración entre empresas (partnership agreement) con protecciones reales',
                'description'       => 'Redacta el contrato de partnership entre dos empresas que colaboran en un proyecto, producto o mercado conjunto. Con distribución de responsabilidades, ingresos, IP y salidas limpias si la relación no funciona.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en acuerdos de colaboración empresarial y joint ventures.

Contexto del partnership:
- Empresa A: [nombre, rol en la colaboración]
- Empresa B: [nombre, rol en la colaboración]
- Objeto de la colaboración: [desarrollo conjunto / distribución / co-marketing / servicio conjunto]
- Duración prevista: [X meses / indefinido]
- Ingresos generados: [sí / no — cómo se generan y de qué importe]
- Propiedad intelectual creada conjuntamente: [sí/no — describe]
- Inversión de cada parte: [tiempo / dinero / recursos]
- Mayor preocupación de cada parte: [Empresa A teme X / Empresa B teme Y]

## ACUERDO DE COLABORACIÓN
**Entre [Empresa A] y [Empresa B]**

### 1. Partes y objeto
Identificación completa y descripción precisa de la colaboración.

### 2. Aportaciones de cada parte
Qué aporta cada empresa, cuantificado y con calendario.

### 3. Gobernanza del proyecto
- Órgano de dirección: [comité conjunto / responsable designado]
- Frecuencia de reuniones
- Cómo se toman las decisiones (mayoría / unanimidad / árbitro)
- Resolución de empates

### 4. Distribución de ingresos y costes
Fórmula clara de cómo se reparten los ingresos generados y quién soporta qué costes.

### 5. Propiedad intelectual
- IP preexistente de cada parte (permanece de cada uno)
- IP creada conjuntamente (copropiedad — cómo se gestiona)
- Licencias cruzadas necesarias

### 6. Confidencialidad y no competencia
Qué información es confidencial y limitaciones de competencia durante la vigencia.

### 7. Exclusividad (si aplica)
Alcance preciso de la exclusividad y sus límites.

### 8. Terminación y salida
- Causas de terminación ordinaria (con preaviso)
- Causas de terminación extraordinaria
- Qué pasa con la IP, clientes y contratos al terminar
- Derecho de compra preferente de la participación del otro

### 9. Responsabilidad y seguros
Límites de responsabilidad de cada parte frente a terceros.

### 10. Ley aplicable y resolución de disputas
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Partnerships, joint ventures, colaboración empresarial',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de CSAT y NPS de soporte: de la puntuación al plan de mejora en 1 hora',
                'description'       => 'Interpreta tus métricas de satisfacción de soporte (CSAT, NPS, CES), identifica los patrones que más impactan en la puntuación y genera un plan de acción por agente y por tipo de ticket.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience analyst especializado en métricas de soporte y programas de mejora de satisfacción.

Datos disponibles:
[PEGA TUS DATOS — puede ser: CSAT por agente, NPS mensual, comentarios de encuestas, tickets con puntuación baja]

Contexto:
- Período analizado: [último mes / trimestre]
- Volumen de tickets: [N]
- Tasa de respuesta a encuestas: [X%]
- CSAT actual: [X/5 o X%]
- NPS actual: [X]
- Objetivo: [CSAT X / NPS X]

## Análisis de Satisfacción — [Empresa] — [Período]

### 📊 Resumen de métricas
| Métrica | Valor actual | Mes anterior | Benchmark sector | Tendencia |
|---------|-------------|-------------|-----------------|----------|
| CSAT | X/5 (X%) | X/5 | 4.2/5 | ↑↓→ |
| NPS | X | X | X | ↑↓→ |
| CES | X | X | X | ↑↓→ |

### 🔍 Análisis por agente
| Agente | CSAT | Tickets/día | Tiempo res. medio | Área de mejora |
|--------|------|------------|-----------------|---------------|
| ... | ... | ... | ... | ... |

### 📝 Análisis de comentarios negativos
Categorización temática de los comentarios de puntuación 1-3:

| Categoría | Frecuencia | Comentarios representativos | Acción |
|-----------|-----------|----------------------------|--------|
| Tiempo de respuesta | X% | "..." | ... |
| Calidad de la respuesta | X% | "..." | ... |
| Actitud del agente | X% | "..." | ... |

### 🎯 Plan de mejora priorizado

**Cambios de proceso (impacto colectivo):**
[Cambios que afectan a todo el equipo]

**Formación individual (por agente):**
[Qué necesita mejorar cada agente con un gap significativo]

**Quick wins (esta semana):**
3 acciones inmediatas que suben el CSAT sin inversión.

### 💬 Cómo responder a reviews negativas públicas
Template para responder públicamente a valoraciones bajas en Google/Trustpilot que convierte el problema en prueba de profesionalidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Customer satisfaction, soporte, mejora continua',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de referencias freelance: consigue que tus clientes te recomienden activamente',
                'description'       => 'Diseña el programa de referidos de tu práctica freelance: cuándo y cómo pedir referencias, qué incentivos funcionan, y los mensajes exactos que convierten clientes satisfechos en tu mejor canal de ventas.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de negocio para freelancers especializado en estrategias de crecimiento orgánico y boca a boca.

Mi perfil:
- Tipo de servicio: [describe]
- Clientes actuales satisfechos: [N aproximado]
- ¿Has pedido referencias antes? [sí — cómo / no]
- Ticket medio de proyecto: [€]
- Mayor barrera para pedir referencias: [vergüenza / no saber cómo / miedo al rechazo / otro]

## Sistema de Referencias — [Tu práctica freelance]

### 🗓️ Cuándo pedir (el momento perfecto)

Los 3 momentos donde pedir una referencia tiene la máxima probabilidad de éxito:
1. [Momento específico con justificación psicológica]
2. ...
3. ...

### 💬 Cómo pedir (los mensajes exactos)

**Email de petición de referencia (post-proyecto):**
```
Asunto: Una pregunta rápida, [Nombre]

[Email completo — natural, sin presión, fácil de responder]
```

**Mensaje de WhatsApp/LinkedIn (más informal):**
```
[Mensaje corto de 3-4 líneas]
```

**En persona / en llamada:**
Script de 30 segundos que no resulta incómodo.

### 🎁 Estructura de incentivos (opcional pero efectivo)

Opciones de incentivo que funcionan para freelancers sin parecer "comisión de ventas":
- Opción A: [descuento en siguiente proyecto]
- Opción B: [regalo de valor]
- Opción C: [sin incentivo — cuándo es mejor así]

### 🔄 Sistema de seguimiento
Cómo trackear quién te ha referido a quién, sin herramientas complejas.

### 📣 Cómo facilitar que te recomienden sin esfuerzo
Los activos que necesitas preparar para que recomendar sea tan fácil como reenviar un email:
- Tu one-liner que tus clientes pueden usar cuando te presenten
- Tu página de portfolio lista para compartir
- Tu email de presentación que el cliente puede reenviar

### 🙏 Cómo agradecer una referencia (para que sigan mandando más)
El gesto exacto que hace que quien te recomendó quiera volver a hacerlo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Business development freelance, referidos, boca a boca',
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
