<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills9Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de email marketing automatizado: nurturing que convierte sin ser spam',
                'description'       => 'Diseña las secuencias de email automatizado que convierten suscriptores en clientes con la cadencia correcta, el contenido adecuado para cada etapa y la segmentación que evita el unsubscribe.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Marketing Strategist especializado en secuencias automatizadas B2B y B2C con tasas de apertura >40% y conversión >5%.

Mi contexto:
- Tipo de negocio y producto: [describe]
- Herramienta de email: [Mailchimp / ActiveCampaign / HubSpot / Klaviyo / Brevo / otra]
- Lista actual: [N suscriptores]
- Tasa de apertura actual: [X%]
- Fuentes de captación: [formulario web / lead magnet / compra / evento / otro]
- Objetivo principal de las automatizaciones: [nutrir leads / convertir trial / reducir churn / reactivar inactivos]

## Estrategia de Email Marketing Automatizado — [Empresa]

### 🔄 Mapa de automatizaciones prioritarias

**Automatización 1 — Bienvenida (OBLIGATORIA, impacto más alto)**

*Trigger:* nuevo suscriptor / nueva cuenta gratuita
*Duración:* 7 días | *Emails:* 5

| Email | Día | Asunto | Objetivo | CTA |
|-------|-----|--------|---------|-----|
| 1 | 0 | "Bienvenido/a — esto es lo que puedes hacer ahora" | Activación | Primer paso |
| 2 | 1 | "El error que comete el 80% cuando empieza con [producto]" | Educación | Guía práctica |
| 3 | 3 | "Cómo [cliente similar] consiguió [resultado] en [tiempo]" | Prueba social | Caso de estudio |
| 4 | 5 | "[Recurso] que preparé específicamente para [tu segmento]" | Valor | Descarga |
| 5 | 7 | "Una pregunta directa: ¿qué te impide dar el siguiente paso?" | Objeción | Responder al email |

*Contenido completo del email 1:*
[Texto del email de bienvenida listo para copiar — asunto / preview text / cuerpo / CTA]

**Automatización 2 — Nurturing pre-compra**
[Estructura de 3 emails para convertir leads que no han comprado]

**Automatización 3 — Reactivación de inactivos**
[Secuencia de 2 emails para recuperar suscriptores inactivos >90 días antes de eliminarlos]

### ✍️ Buenas prácticas de copywriting para email

**Asuntos que abren:**
- Personalización (nombre, empresa, acción previa)
- Curiosidad sin clickbait
- Números específicos
- Plantillas que funcionan: [5 ejemplos con tu temática]

**Estructura del email que convierte:**
- Preview text complementario (no repetición del asunto)
- Primer párrafo: el gancho en las primeras 2 líneas
- Cuerpo: un solo tema, una sola idea
- CTA: un solo botón, texto orientado a beneficio

### 📊 Segmentación inteligente
Cómo dividir la lista para enviar el mensaje correcto a cada persona:
- Por comportamiento (abrieron / no abrieron / hicieron clic)
- Por etapa del funnel
- Por fuente de captación
- Por plan/producto

### 📈 KPIs y benchmarks
Qué tasas son buenas para tu sector y qué hacer cuando una métrica baja del umbral.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Email marketing, automatización, nurturing, conversión',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementación de CI/CD con GitHub Actions: del push al deploy en producción de forma segura',
                'description'       => 'Diseña e implementa el pipeline de CI/CD completo con GitHub Actions: tests automatizados, análisis de seguridad, build de artefactos y deploy progresivo a staging y producción con rollback automático.',
                'prompt_content'    => <<<'PROMPT'
Eres un DevOps Engineer especializado en pipelines de CI/CD para equipos de 2-20 developers que quieren automatizar su flujo de deployment sin overhead de gestión.

Mi stack:
- Lenguaje / framework: [Node.js / Python / Go / PHP Laravel / Ruby on Rails / otro]
- Containerización: [Docker / sin contenedores]
- Infraestructura destino: [AWS / GCP / Azure / Hetzner / VPS / Kubernetes / otro]
- Branches principales: [main / develop / feature branches]
- Tests existentes: [unitarios / integración / e2e / ninguno todavía]
- Problema principal del CI/CD actual: [no hay / muy lento / deployments manuales / sin tests / falta de staging]

## Pipeline CI/CD — [Proyecto] con GitHub Actions

### 🏗️ Arquitectura del pipeline

```
Push a branch →
  [CI] Lint + Tests + Security scan →
  [Build] Docker image + tag →
  [Deploy Staging] auto → smoke tests →
  [Deploy Prod] manual approval / auto en merge a main →
  [Notify] Slack / email
```

### 📄 Workflow completo (.github/workflows/ci-cd.yml)

```yaml
name: CI/CD Pipeline

on:
  push:
    branches: [main, develop]
  pull_request:
    branches: [main]

env:
  REGISTRY: ghcr.io
  IMAGE_NAME: ${{ github.repository }}

jobs:
  # ── 1. CI: Lint + Tests ──────────────────────────────────
  test:
    name: Tests & Lint
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Setup [Node/Python/Go/PHP]
        uses: actions/setup-[runtime]@v4
        with:
          [version]: '[tu versión]'
          cache: '[tu package manager]'

      - name: Install dependencies
        run: [tu comando de install]

      - name: Run linter
        run: [tu comando de lint]

      - name: Run tests
        run: [tu comando de tests]
        env:
          [TUS_VARIABLES_DE_ENTORNO]: ${{ secrets.SECRET_NAME }}

      - name: Upload coverage
        uses: codecov/codecov-action@v4

  # ── 2. Security scan ────────────────────────────────────
  security:
    name: Security Scan
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - name: Run Trivy vulnerability scanner
        uses: aquasecurity/trivy-action@master
        with:
          scan-type: 'fs'
          severity: 'HIGH,CRITICAL'
          exit-code: '1'

  # ── 3. Build Docker image ───────────────────────────────
  build:
    name: Build & Push Image
    needs: [test, security]
    runs-on: ubuntu-latest
    if: github.ref == 'refs/heads/main' || github.ref == 'refs/heads/develop'
    permissions:
      contents: read
      packages: write
    steps:
      - uses: actions/checkout@v4
      - uses: docker/login-action@v3
        with:
          registry: ${{ env.REGISTRY }}
          username: ${{ github.actor }}
          password: ${{ secrets.GITHUB_TOKEN }}
      - uses: docker/build-push-action@v5
        with:
          push: true
          tags: ${{ env.REGISTRY }}/${{ env.IMAGE_NAME }}:${{ github.sha }}
          cache-from: type=gha
          cache-to: type=gha,mode=max

  # ── 4. Deploy Staging ───────────────────────────────────
  deploy-staging:
    name: Deploy to Staging
    needs: build
    runs-on: ubuntu-latest
    environment: staging
    if: github.ref == 'refs/heads/develop'
    steps:
      - name: Deploy to staging
        [tu paso de deploy específico según infraestructura]

  # ── 5. Deploy Production ────────────────────────────────
  deploy-production:
    name: Deploy to Production
    needs: build
    runs-on: ubuntu-latest
    environment: production  # requiere aprobación manual en GitHub
    if: github.ref == 'refs/heads/main'
    steps:
      - name: Deploy to production
        [tu paso de deploy con rollback automático]
```

### 🔐 Secrets necesarios
Lista de secrets a configurar en GitHub Settings → Secrets + cómo configurarlos.

### 🔄 Estrategia de rollback automático
Si el smoke test de producción falla: cómo revertir al SHA anterior automáticamente.

### ⚡ Optimizaciones de velocidad del pipeline
Cómo bajar de 10 min a <5 min con caché de dependencias y paralelización de jobs.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'DevOps, CI/CD, GitHub Actions, automatización de deployments',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencia de onboarding que activa el primer valor en menos de 5 minutos',
                'description'       => 'Rediseña el onboarding de tu producto para que el usuario llegue al primer "aha moment" antes de salir de la primera sesión. Con flujo paso a paso, microcopy que guía sin abrumar y métricas de activación.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer especializado en experiencias de onboarding para productos digitales con +10.000 usuarios activos.

Contexto del producto:
- Tipo de producto: [SaaS / app móvil / herramienta web / marketplace]
- Primer valor del producto (el "aha moment"): [qué debe hacer o ver el usuario para entender el valor]
- Flujo de onboarding actual: [describe paso a paso]
- Tasa de activación actual: [X% de nuevos usuarios llegan al aha moment]
- Punto de mayor abandono: [en qué paso se van la mayoría]
- Perfil del usuario nuevo: [conocimiento técnico / motivación / contexto de uso]

## Rediseño de Onboarding — [Producto]

### 🎯 Definición del aha moment

**¿Cuál es el aha moment real?**
El momento en que el usuario experimenta el valor del producto por primera vez — no cuando lo configura, sino cuando lo usa y ve el resultado.

**Aha moment de [Producto]:** [describe en una frase]

**Cómo llegar ahí en <5 minutos:**
El camino más corto desde el registro hasta ese momento. Elimina todo lo que no contribuye directamente.

### 📐 Diseño del flujo de onboarding

**Principios de diseño:**
1. Un solo objetivo por pantalla
2. El usuario avanza, no el producto se configura
3. Progreso visible siempre (barra, pasos, "3 de 5")
4. Primero el valor, luego las opciones

**Flujo rediseñado — paso a paso:**

**Paso 1: Registro (objetivo: <60 segundos)**
- Campos obligatorios: [mínimo absoluto — solo lo que necesitas para crear la cuenta]
- Social login: [sí/no — impacto en conversión]
- Campos que ELIMINAR del registro actual: [lista]
- Microcopy: qué escribir en el botón de CTA, el hint de cada campo

**Paso 2: Personalización inicial (objetivo: <2 minutos)**
- Preguntas para segmentar al usuario (máximo 2-3)
- Por qué estas preguntas: para personalizar el siguiente paso, no por el gusto de preguntar
- Diseño: opciones visuales > dropdown > texto libre

**Paso 3: Primera acción guiada (el aha moment, objetivo: <3 minutos)**
- Qué hacer exactamente: [paso de la acción]
- Cómo guiar sin parecer tutorial: tooltips, highlights, empty states con CTA
- El primer resultado que ve el usuario: [describe]

**Paso 4: Confirmación y siguiente paso**
- Celebración del aha moment: [cómo mostrar que lo logró]
- Siguiente acción recomendada: una, no diez

### ✍️ Microcopy de onboarding
Textos para cada paso: headers, subheaders, placeholders, mensajes de error, botones.
Regla: cada texto debe empujar hacia adelante, no informar hacia atrás.

### 📊 Métricas de activación que debes medir
- Tasa de completion de cada paso (dónde abandonan)
- Time-to-aha: tiempo promedio hasta el primer valor
- 7-day retention de usuarios que completaron vs. no completaron el onboarding

### 🧪 Tests A/B de onboarding prioritarios
Los 3 experimentos de mayor impacto para subir la activación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'UX design, onboarding, product activation, retención',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Negociación de contratos B2B: cierra mejores condiciones sin perder la relación',
                'description'       => 'Prepara la negociación de un contrato B2B con la estrategia de BATNA, el mapa de intereses del cliente y los rangos de concesión por cláusula. Incluye tácticas para manejar el "tenemos que consultarlo internamente".',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Negotiation Coach con experiencia en contratos B2B de 50k€ a 2M€ ARR.

Contexto de la negociación:
- Qué estamos negociando: [tipo de contrato — software / servicios / partnership / suministro]
- Tu posición: [vendedor / comprador / ambos]
- Valor del contrato: [€]
- Estado actual: [oferta enviada / contraoferta recibida / última reunión fue X]
- Las condiciones más importantes para ti: [precio / plazo / exclusividad / SLA / otra]
- Lo que sabes de las prioridades del otro lado: [qué les importa más — precio / velocidad / términos / referencia]
- Tu BATNA (mejor alternativa si no hay acuerdo): [qué pasa si no cierras este contrato]
- Su BATNA (lo que crees que harían si no cierras): [tu estimación]

## Estrategia de Negociación — [Contrato]

### 🎯 Análisis de la zona de acuerdo posible (ZOPA)

**Tu punto de ancla (primera oferta):** [precio/condición — siempre más ambicioso que tu objetivo real]
**Tu punto objetivo:** [lo que de verdad quieres conseguir]
**Tu punto de abandono (walk away):** [el mínimo que aceptarías]

**Estimación del rango del cliente:**
Basado en lo que sabes, su BATNA y el mercado: [estimación de su punto de ancla / objetivo / walk away]

**ZOPA probable:** entre €X y €Y — [descripción de las condiciones negociables]

### 📋 Mapa de cláusulas por prioridad de concesión

| Cláusula | Tu posición inicial | Tu objetivo | Tu límite | Valor para conceder | Qué pedir a cambio |
|---------|-------------------|------------|---------|--------------------|--------------------|
| Precio | €X | €Y | €Z | Baja si... | [condición de compensación] |
| Plazo de contrato | X años | Y años | Z meses | Reducir si... | [qué pides] |
| SLA / penalizaciones | X% | Y% | Z% | Subir si... | [qué pides] |
| Pago (condiciones) | Anticipado | 50/50 | 30/60 días | Aplazar si... | [qué pides] |

**Concesiones que te cuestan poco pero valen mucho para ellos:**
[Lista de condiciones que puedes ofrecer con bajo coste real pero alto valor percibido]

### 🗣️ Tácticas y respuestas a situaciones típicas

**"El precio es demasiado alto":**
No bajes el precio directamente. Responde: [script exacto]

**"Necesitamos consultarlo internamente" (palanca de autoridad):**
Cómo mantener el momentum: [script]

**"La competencia nos ofrece lo mismo por menos":**
[Script de anclaje en diferenciación + petición de información]

**La táctica del silencio:**
Cuándo y cómo usarla para que el otro rellene el silencio con concesiones.

### ✅ Checklist del cierre
Los 5 puntos que debes confirmar verbalmente antes de enviar el contrato para firmar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Negociación B2B, contratos, cierre de ventas enterprise',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de deuda técnica: cómo cuantificarla, priorizarla y negociarla con negocio',
                'description'       => 'Convierte la deuda técnica de algo invisible en algo medible, priorizable y negociable con los stakeholders de negocio. Con el framework de categorización, el coste de interés y el business case para el sprint de refactoring.',
                'prompt_content'    => <<<'PROMPT'
Eres un Engineering Manager con experiencia convirtiendo conversaciones técnicas sobre deuda en decisiones de negocio que se financian.

Mi equipo:
- Tamaño: [N developers]
- Stack: [describe]
- Edad del código: [X años desde la primera línea]
- Síntomas visibles de deuda: [tiempo de build / frecuencia de bugs / lentitud en features / otro]
- Cómo se gestiona la deuda hoy: [nunca / sporádicamente / con ratio 20/80 / otro]

## Framework de Gestión de Deuda Técnica — [Equipo/Producto]

### 🗂️ Taxonomía de deuda técnica

**Tipo 1 — Deuda deliberada (decisiones conscientes):**
- Ejemplos: "lo arreglamos después del lanzamiento", shortcuts para llegar al deadline
- Cómo registrarla: un TODO con fecha, propietario y coste estimado
- Coste de interés: crece linealmente si no se paga

**Tipo 2 — Deuda accidental (decisiones sin información):**
- Ejemplos: código que funcionaba pero el negocio cambió, dependencias obsoletas
- Cómo detectarla: análisis de complejidad, revisiones de código, bugs recurrentes

**Tipo 3 — Deuda de arquitectura:**
- La más cara de pagar: requiere refactoring sistémico
- Cuándo vale la pena acometer: no siempre — análisis coste/beneficio

### 📊 Inventario y cuantificación

**Cómo crear el inventario:**
```
Para cada elemento de deuda técnica:
- Descripción: [qué es]
- Síntoma: [cómo se manifiesta]
- Impacto en velocidad: [ralentiza X horas/sprint]
- Esfuerzo de corrección: [horas de developer]
- Riesgo si no se corrige: [escala 1-5]
- Tipo: [deliberada / accidental / arquitectura]
```

**Coste del interés (el argumento para negocio):**
Fórmula: `Coste mensual = Horas perdidas/semana × 4 × Coste/hora del developer`

**Ejemplo real para tu equipo:**
Si los tests tardando 20 min frenan a 5 developers 3 veces al día:
→ 5 × 3 × 0.25h × 4 semanas = 15 h/mes × €X/hora = €X/mes

### 🎯 Priorización (Matriz de deuda)

| Deuda | Coste mensual (€) | Esfuerzo corrección (h) | ROI (meses de payback) | Prioridad |
|-------|-----------------|------------------------|----------------------|---------|
| [Tests lentos] | €X | Xh | X meses | 🔴 Alta |
| [Módulo sin tests] | €X | Xh | X meses | 🟡 Media |

**Criterio:** prioriza las deudas con payback < 3 meses primero.

### 🤝 El business case para el sprint de refactoring

**Cómo presentarlo a producto/negocio:**
No "necesitamos refactorizar el código" sino "invertir €X ahora nos ahorra €Y al mes".

**Template de presentación (5 slides):**
1. Estado actual (síntomas con datos)
2. Coste de la deuda (en €/mes)
3. Propuesta (qué hacemos y en cuánto tiempo)
4. ROI (cuándo recuperamos la inversión)
5. Riesgo de no hacerlo

### 📅 Modelo de gestión continua
Cómo integrar el pago de deuda en el ritmo de sprints sin que se convierta en un sprint de refactoring eterno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Engineering management, deuda técnica, ingeniería de producto',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Encuesta de clima laboral: diseño, análisis y plan de acción en 30 días',
                'description'       => 'Diseña la encuesta de clima que genera datos accionables (no solo bonitas nubes de palabras), facilita el análisis segmentado por área y nivel, y construye el plan de acción que el equipo ve ejecutarse.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Analytics specialist con experiencia en encuestas de clima organizacional para empresas de 50 a 2000 empleados.

Contexto:
- Tamaño de la empresa: [N empleados]
- Frecuencia deseada: [anual / semestral / trimestral pulse survey]
- Herramienta: [Culture Amp / Glint / Officevibe / Typeform / Google Forms / otra]
- Última encuesta: [nunca / hace X meses — cuántas respuestas / tasa de participación X%]
- Problema principal que quieres diagnosticar: [engagement / retención / colaboración / liderazgo / otro]

## Programa de Encuesta de Clima — [Empresa]

### 🎯 Dimensiones a medir (las que realmente importan)

**Selección de dimensiones según tu objetivo:**

| Dimensión | Qué mide | Preguntas |
|-----------|---------|-----------|
| Engagement | Compromiso emocional | 3 |
| eNPS | Probabilidad de recomendar como empleador | 1 |
| Liderazgo directo | Calidad del manager | 3 |
| Desarrollo profesional | Crecimiento y aprendizaje | 2 |
| Colaboración | Trabajo en equipo entre áreas | 2 |
| Confianza en dirección | Alineación con liderazgo | 2 |
| Recursos y herramientas | Condiciones para hacer bien el trabajo | 2 |
| Bienestar | Carga de trabajo y equilibrio | 2 |

**Total:** ~17 preguntas cuantitativas + 2-3 abiertas (tasa de completion óptima)

### 📋 Cuestionario completo

**Escala de Likert (1-5 o 1-7) con texto en los extremos:**

[Preguntas por dimensión, con formulación exacta que minimiza el sesgo de deseabilidad social]

**Preguntas abiertas (máximo 2):**
1. "¿Qué es lo que más valoras de trabajar en [empresa]?"
2. "¿Qué podría mejorar [empresa] para que estuvieras más satisfecho/a?"

**eNPS:**
"En una escala del 0 al 10, ¿recomendarías [empresa] como lugar de trabajo a alguien de tu entorno?"

### 📊 Análisis de resultados

**Segmentaciones prioritarias:**
- Por área / departamento (mínimo N=8 para garantizar anonimato)
- Por nivel (individual contributor / managers / senior managers)
- Por antigüedad (<1 año / 1-3 años / >3 años)
- Por ubicación (si aplica)

**Qué buscar en los resultados:**
- Las dimensiones con puntuación más baja (< 3.5/5)
- Las brechas entre áreas (misma empresa, experiencias muy diferentes)
- Los comentarios cualitativos agrupados por temática

**Análisis de correlación:**
Qué dimensión está más correlacionada con la intención de quedarse (suele ser: liderazgo directo + desarrollo profesional).

### 📢 Comunicación de resultados (cómo hacerlo sin crear más problemas)
- Qué compartir con toda la empresa vs. solo con managers
- Cómo presentar resultados negativos de forma constructiva
- El formato de las reuniones de equipo para comentar resultados

### ✅ Plan de acción en 30 días
El proceso para que la encuesta no sea un evento anual sin consecuencias:
- Semana 1: análisis interno y validación con dirección
- Semana 2: presentación de resultados a managers
- Semana 3: reuniones de equipo y recogida de ideas
- Semana 4: publicación de compromisos concretos y calendario
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Clima laboral, people analytics, engagement de empleados',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Cuadro de mando financiero para directivos: los 10 KPIs que muestran la salud real del negocio',
                'description'       => 'Diseña el dashboard financiero que el CEO y el board necesitan para tomar decisiones con confianza. Con los 10 métricas clave seleccionadas para tu tipo de negocio, la cadencia de revisión y las alertas automáticas.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia diseñando cuadros de mando financieros para equipos directivos y consejos de administración de empresas de 1M a 50M€ de facturación.

Mi empresa:
- Tipo de negocio: [SaaS / e-commerce / servicios / fabricación / retail / otro]
- Facturación anual: [€]
- Etapa: [early stage / crecimiento / consolidación / turnaround]
- Herramienta de BI disponible: [Looker / Power BI / Tableau / Excel / Google Sheets / ninguna]
- Frecuencia de reporting actual: [mensual / trimestral / sin proceso definido]
- Audiencia del dashboard: [CEO / board / inversores / equipo de dirección]

## Cuadro de Mando Financiero — [Empresa]

### 📊 Los 10 KPIs seleccionados para tu negocio

**Para cada KPI:**
- Definición exacta (sin ambigüedad)
- Fórmula de cálculo
- Fuente de datos
- Benchmark de referencia para tu sector
- Umbral de alerta (cuándo preocuparse)
- Cadencia de revisión

---

**KPI 1 — Ingresos (Revenue)**
- Fórmula: [facturación neta del período]
- Variación: MoM / YoY / vs. budget
- Alerta si: desviación > X% vs. forecast

**KPI 2 — Margen bruto**
- Fórmula: (Ingresos - COGS) / Ingresos
- Benchmark: [X% para tu sector]
- Alerta si: < X%

**KPI 3 — EBITDA**
[Definición + fórmula + benchmark]

**KPI 4 — Cash runway / posición de caja**
[Días de caja disponibles al ritmo de burn actual]

**KPI 5-10: [Adaptados al tipo de negocio]**
- SaaS: MRR, Churn, CAC, LTV, NRR
- E-commerce: GMV, AOV, CAC, ROAS, márgenes por canal
- Servicios: utilización de capacidad, revenue per employee, pipeline coverage
- Fabricación: margen por línea de producto, rotación de stock, OTIF

### 📐 Diseño del dashboard

**Vista ejecutiva (1 página, lectura en 30 segundos):**
- Semáforo de salud financiera: 🟢🟡🔴 por área
- Top 3 metrics vs. budget: gráfico de bullet chart
- Cash position y runway
- Alerta del mes: [el tema que necesita decisión]

**Vista de detalle (para el equipo financiero):**
- P&L vs. budget mes a mes
- Working capital waterfall
- Forecast de caja a 13 semanas

### ⚡ Automatización del reporting
Cómo conectar tu ERP / contabilidad al dashboard para que se actualice solo (herramientas concretas según tu stack).

### 📅 Cadencia de revisiones
- Diario: [qué mirar — solo caja y cobros/pagos del día]
- Semanal: [qué revisar — flash report de 5 métricas]
- Mensual: [revisión completa — agenda de la reunión de 60 min]
- Trimestral: [board report — estructura y narrativa]
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Reporting financiero, KPIs, cuadro de mando directivo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Resolución de conflictos entre socios: protocolo de familia y pacto de socios que previene la ruptura',
                'description'       => 'Diseña el protocolo de resolución de conflictos entre socios y las cláusulas del pacto de socios que previenen disputas antes de que destruyan la empresa. Con los mecanismos de salida, valoración y arbitraje.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista especializado en conflictos societarios y gobierno corporativo para startups y PYMEs en España.

Contexto:
- Tipo de empresa: [SL / SA / startup / empresa familiar]
- Número de socios: [N]
- Distribución de participaciones: [X% socio A / Y% socio B / Z% socio C]
- Hay pacto de socios actualmente: [sí/no — si sí, desde hace cuánto]
- Naturaleza del conflicto o riesgo: [diferencias estratégicas / salida de un socio / dilución / distribución de dividendos / otro]

## Protocolo de Gobierno Societario y Resolución de Conflictos

### 🏛️ Estructura de gobierno mínima necesaria

**Órganos recomendados:**
- Junta de Socios: composición, quórum y mayorías para decisiones ordinarias y extraordinarias
- Consejo de Administración (si aplica): composición, frecuencia de reuniones, decisiones delegadas
- Comité de Dirección (operativo): quién lo forma, frecuencia, qué puede decidir sin la junta

**Matriz de decisiones:**
| Tipo de decisión | Quién decide | Mayoría requerida |
|----------------|------------|------------------|
| Operativa (<€X) | CEO | Individual |
| Inversión (€X-€Y) | Comité Dirección | Mayoría simple |
| Estratégica | Consejo | Mayoría cualificada (X%) |
| Estatutaria | Junta | Unanimidad |

### 📋 Cláusulas clave del pacto de socios

**Cláusula 1 — Mecanismo de resolución de conflictos (escalada):**
Nivel 1: Negociación directa (plazo: X días)
Nivel 2: Mediación por tercero neutral acordado (plazo: X días)
Nivel 3: Arbitraje vinculante (CIMA / CEDR / otro)
Nivel 4: Disolución o venta de participaciones

**Cláusula 2 — Russian Roulette / Shoot-Out (deadlock en sociedades 50/50):**
Cuándo se activa, cómo funciona, ventajas e inconvenientes.

**Cláusula 3 — Drag Along y Tag Along:**
- Drag along: el socio mayoritario puede forzar a los minoritarios a vender (protege al comprador en M&A)
- Tag along: los minoritarios pueden unirse a la venta del mayoritario en las mismas condiciones

**Cláusula 4 — Valoración en caso de salida:**
- Método de valoración acordado: [múltiplo EBITDA / DCF / valor neto contable / experto independiente]
- Quién nombra al valorador: [banco de inversión acordado / fórmula de nombramiento]
- Descuento por venta de participación minoritaria: [X%]

**Cláusula 5 — Derecho de adquisición preferente (DAP):**
Proceso y plazo para que los otros socios puedan comprar antes que un tercero.

**Cláusula 6 — Vesting de participaciones (founders):**
4 años con 1 año cliff: cómo funciona y por qué protege a todos.

### ⚠️ Los 5 errores de gobierno que generan conflictos inevitables
Y cómo corregirlos antes de que sean un problema.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Derecho societario, gobierno corporativo, pacto de socios',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Escalado de soporte: cuándo y cómo crecer de 1 a 10 agentes sin perder calidad',
                'description'       => 'Diseña el plan de crecimiento del equipo de soporte: cuándo contratar el siguiente agente, cómo onboardear en 2 semanas, qué procesos documentar antes de escalar y cómo mantener la calidad con más gente.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Support con experiencia escalando equipos de 1 a 50 agentes manteniendo CSAT >90% y tiempos de respuesta por debajo del SLA.

Estado actual:
- Tamaño actual del equipo: [N agentes]
- Volumen de tickets: [N/semana / N/mes]
- CSAT actual: [X%]
- Tiempo de primera respuesta: [X horas]
- Herramienta: [Intercom / Zendesk / Freshdesk / Gorgias / HubSpot / otra]
- Tipo de soporte: [solo email / email + chat / omnicanal]
- Señal que te dice que necesitas contratar: [tiempo de respuesta subiendo / el equipo saturado / otro]

## Plan de Escalado del Equipo de Soporte

### 📐 La fórmula para saber cuándo contratar

**Indicadores de que estás al límite:**
- Tiempo de primera respuesta > [X horas del SLA] durante 3 semanas consecutivas
- CSAT < X% dos meses seguidos
- El agente trabaja más de X horas semanales en tickets

**Fórmula para calcular el headcount necesario:**
```
Agentes necesarios = (Tickets/semana × Tiempo medio de resolución)
                   / (Horas productivas/semana por agente)

Horas productivas = Jornada × 0.7 (30% no-ticket: reuniones, formación, admin)
```

**Con tu situación actual:** necesitas contratar cuando [condición basada en los datos]

### 🚀 Plan de onboarding de nuevo agente (14 días)

**Semana 1 — Inmersión:**
| Día | Actividad | Objetivo |
|-----|----------|---------|
| 1 | Presentación del equipo + lectura de la cultura de soporte | Contexto |
| 2-3 | Lectura de los últimos 100 tickets resueltos (todos los tipos) | Patrones |
| 4 | Shadow de 1 día con agente senior (leen, no responden) | Observación |
| 5 | Responden 10 tickets con revisión del senior antes de enviar | Práctica guiada |

**Semana 2 — Autonomía progresiva:**
- Empiezan con tickets de bajo riesgo (categorías definidas)
- El senior revisa el 50% de sus respuestas
- Daily check-in de 15 min para dudas
- Objetivo: al final de la semana 2, autónomos en el 70% de tickets

**Recursos de onboarding que debes tener preparados antes de contratar:**
- Base de conocimiento con los 50 temas más frecuentes
- Decision tree para los 10 escenarios más complicados
- Plantillas de respuesta para los 20 casos más comunes
- Guía de escalada: cuándo y a quién escalar

### 📋 Procesos que DEBES documentar antes del primer escalado
Los 5 procesos sin los que el nuevo agente tomará decisiones inconsistentes.

### 🎯 Mantenimiento de calidad a escala
Cómo hacer QA del trabajo de los agentes cuando hay más de 3 personas en el equipo.

### 💬 Estructura del equipo a partir de 5 agentes
Cuándo y cómo crear especialización (técnico / billing / éxito), quién hace de team lead, reuniones mínimas necesarias.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Escalado de equipos de soporte, operaciones de CS, calidad',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuesta de valor para freelance: el pitch de 2 minutos que cierra reuniones con clientes ideales',
                'description'       => 'Construye el pitch de presentación como freelance que genera reuniones de descubrimiento con clientes que pueden pagarte lo que vales. Con la estructura de presentación, elevator pitch y perfil de LinkedIn optimizado.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de comunicación y posicionamiento para freelancers con experiencia ayudando a profesionales independientes a triplicar su tarifa media en 6 meses.

Mi situación:
- Qué hago: [describe tu servicio principal]
- Para quién: [tipo de cliente ideal]
- Resultado principal que genero: [en términos de negocio — no "diseño páginas web" sino "aumento la conversión de landing pages"]
- Tarifa actual: [€/hora o €/proyecto]
- Cómo consigo clientes ahora: [referidos / LinkedIn / Upwork / eventos / otro]
- El cliente más interesante que he tenido: [describe brevemente]

## Kit de Comunicación para Freelance — [Tu nombre]

### 🎯 Propuesta de valor central

**La fórmula:**
"Ayudo a [tipo de empresa] a [resultado de negocio] sin [el dolor que evitas] en [plazo o con menos recursos]."

**Tu propuesta de valor:**
[Generada a partir de tu contexto]

**Por qué esta propuesta y no la genérica:**
Análisis de qué te diferencia de los otros 500 [tu profesión] en España.

### 🗣️ El elevator pitch de 2 minutos

**Versión para evento de networking:**
[Script completo — natural, sin sonar a anuncio, que termina con una pregunta que genera conversación]

**Versión para responder "¿a qué te dedicas?":**
[10-15 palabras. Provocador y específico.]

**Versión para LinkedIn DM (prospección):**
[3 líneas. Primera línea: algo sobre ellos. Segunda: propuesta de valor. Tercera: CTA de bajo compromiso.]

### 💼 Perfil de LinkedIn optimizado para ser encontrado

**Headline (220 caracteres):**
No "Diseñador gráfico freelance". Sí: "[Resultado que generas] para [tipo de empresa] | [Tu diferenciador]"

**Tu headline:** [generado]

**About section (los 3 primeros renglones son los únicos que se ven sin clic):**
[Texto completo — 1250 caracteres — que convierte visitas en solicitudes de reunión]

**Sección Featured:**
Los 3 elementos que deberías poner: [caso de estudio / recurso gratuito / testimonio de cliente]

**Optimización de keywords:**
Las 5 keywords por las que tus clientes te buscan en LinkedIn (no las que tú crees, las que ellos escriben).

### 📧 Template de presentación por email
El email de 150 palabras que envías cuando alguien te pide "más información sobre tu trabajo".

### 🤝 Cómo conseguir las primeras reuniones de descubrimiento
Las 3 acciones de esta semana que generan las primeras conversaciones con clientes ideales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Posicionamiento freelance, pitch, LinkedIn, captación de clientes',
                'vote_score'        => 46,
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
