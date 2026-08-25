<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills80Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing basado en cuentas para SaaS',
                'description'      => 'ABM para ciclos de venta largos: identificación de cuentas objetivo, personalización de mensajes y coordinación con el equipo de ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en Account-Based Marketing (ABM) con experiencia en SaaS B2B de ciclo de venta largo. Necesito diseñar e implementar una estrategia ABM que se coordine con el equipo comercial y genere pipeline real.

**Mi empresa:**
[Tipo de SaaS, ticket medio anual, ICP (sector, tamaño de empresa, cargo del decisor), tamaño del equipo de ventas]

**Situación actual:**
[Estamos haciendo marketing de volumen y queremos pasar a ABM / ya tenemos ABM pero no está coordinado con ventas / empezamos desde cero]

---

## PARTE 1 — FUNDAMENTOS DEL ABM

### Los tres modelos de ABM y cuándo usar cada uno

| Modelo | Nº de cuentas | Nivel de personalización | Recursos necesarios | ROI típico |
|--------|--------------|--------------------------|--------------------|-|
| ABM 1:1 (Estratégico) | 1-10 cuentas | Extremadamente alto | 1 marketer + 1 AE por cuenta | Más alto, más lento |
| ABM 1:Few (Basado en clusters) | 10-100 cuentas | Alto por segmento | Equipo de 2-3 personas | Balance óptimo para SaaS |
| ABM 1:Many (Programático) | 100-1.000 cuentas | Moderado (por industria) | Herramientas de automatización | Más volumen, menos personal |

Para SaaS con ciclos de venta de 3-12 meses, el modelo 1:Few suele ser el punto de entrada ideal.

### Por qué el ABM no es solo segmentar mejor

Explica la diferencia conceptual:
- **Marketing tradicional**: campañas masivas → filtrado → SQL
- **ABM**: lista de cuentas → campaña personalizada → multipunto de contacto → reunión

El cambio de mentalidad: el equipo de ventas no trabaja los leads del marketing; ambos equipos trabajan las mismas cuentas desde el primer día.

---

## PARTE 2 — SELECCIÓN DE CUENTAS OBJETIVO

### Framework ICP (Ideal Customer Profile)

Define el ICP con datos reales de tus mejores clientes:

**Firmographics** (empresa):
- Sector / industria (máximo 2-3 verticales para empezar)
- Tamaño por empleados o por facturación
- Geografía
- Tecnologías que usan (tech stack compatible)
- Señales de crecimiento (financiación reciente, contrataciones activas, expansión)

**Technographics** (señales tecnológicas):
- Usan la herramienta que tu SaaS sustituye o complementa
- Tienen el CRM o ERP al que te integras
- Son clientes de un partner tuyo

**Behavioral signals** (señales de intención de compra):
- Han buscado keywords relacionadas con tu categoría (intent data de Bombora, G2, etc.)
- Han visitado tu web recientemente
- Alguien de la empresa ha seguido a un competidor en LinkedIn

### Scoring de cuentas

Diseña el modelo de scoring para priorizar:

| Criterio | Peso | Puntuación |
|----------|------|-----------|
| Coincidencia con ICP firmographic | 30% | 1-10 |
| Señales de intención recientes | 25% | 1-10 |
| Presencia de contactos identificados | 20% | 1-10 |
| Engagement previo con la marca | 15% | 1-10 |
| Fit con tech stack | 10% | 1-10 |

Cuentas con score > 70: ABM 1:1 o 1:Few prioritarias
Cuentas con score 40-70: ABM 1:Many
Cuentas < 40: marketing estándar

---

## PARTE 3 — MENSAJES Y PERSONALIZACIÓN

### Mapa de stakeholders y mensajes por rol

Para cada cuenta objetivo, identifica los tres roles clave y adapta el mensaje:

| Rol | Dolor principal | Métrica que le importa | Mensaje clave | Canal principal |
|-----|----------------|----------------------|---------------|----------------|
| Decisor económico (CFO/CEO) | Coste y ROI | Reducción de costes, tiempo de retorno | "Nuestros clientes amortizan la inversión en X meses" | Email ejecutivo, LinkedIn |
| Decisor técnico (CTO/VP Eng) | Integración y fiabilidad | Uptime, tiempo de implementación, APIs | "Se integra con [su stack] en menos de 2 semanas" | Webinar técnico, docs |
| Usuario final (manager operativo) | Eficiencia diaria | Tiempo ahorrado, errores evitados | "Tu equipo dejará de hacer X manualmente" | Caso de estudio, demo |

### Personalización por industria

Para cada vertical que hayas seleccionado, define:
1. El problema específico de ese sector que tu SaaS resuelve mejor
2. El caso de uso más relevante (con nombre de cliente si puedes)
3. La terminología correcta (hablar como ellos, no como tech)
4. Las objeciones específicas de ese sector y cómo responderlas
5. Los referentes o asociaciones del sector que puedes mencionar

---

## PARTE 4 — COORDINACIÓN MARKETING + VENTAS

### El acuerdo de nivel de servicio (SLA) entre marketing y ventas para ABM

Define en un documento conjunto:
- **Marketing se compromete a**: identificar X cuentas por trimestre, generar Y touchpoints por cuenta antes de pasarla a ventas, compartir el engagement data en tiempo real
- **Ventas se compromete a**: hacer el primer contacto con cuentas calientes en menos de 48h, actualizar el CRM con los resultados de cada contacto, dar feedback sobre calidad de cuentas mensualmente

### Cadencia de coordinación

| Reunión | Frecuencia | Participantes | Agenda |
|---------|-----------|---------------|--------|
| ABM Sync | Semanal (30 min) | Marketing + AEs asignados | Cuentas en movimiento, ajustes de mensaje |
| Pipeline Review ABM | Quincenal (60 min) | Marketing + Sales Manager | Oportunidades abiertas de cuentas ABM, velocidad de progresión |
| ABM Quarterly Review | Trimestral (90 min) | Marketing + Sales + Liderazgo | Resultados, ajuste de lista de cuentas, ROI |

### Herramientas de coordinación

Cómo usar el CRM para ABM:
- Campo "cuenta ABM" con nivel (1:1, 1:Few, 1:Many)
- Vistas compartidas de engagement por cuenta
- Notificaciones automáticas cuando una cuenta objetivo visita la web o abre un email

---

## PARTE 5 — CANALES Y TÁCTICAS ABM

### Secuencia de touchpoints por cuenta (modelo de 8 semanas)

```
Semana 1-2: Research + activación digital
├── Activar anuncios en LinkedIn segmentados a la empresa objetivo
├── Conectar con 2-3 contactos identificados en LinkedIn (sin pitch)
└── Enviar contenido de valor (report de industria, benchmark)

Semana 3-4: Personalización directa
├── Email personalizado con referencia específica a su sector/empresa
├── Mensaje de LinkedIn directo al decisor técnico con insights
└── Invitación a webinar específico de su industria

Semana 5-6: Escalada de valor
├── Caso de estudio de empresa similar enviado por AE
├── Demo personalizada propuesta (sin hard sell)
└── Envío de contenido físico si es cuenta 1:1 de alto valor

Semana 7-8: Propuesta de siguiente paso
├── Email de conversación de discovery (no demo, una llamada de 20 min)
├── Seguimiento del AE con propuesta de valor personalizada
└── Evaluación: ¿seguir / pausar / descartar?
```

---

## MÉTRICAS DE ABM

Define las métricas específicas que miden el ABM (distintas del marketing tradicional):

| Métrica | Fórmula | Objetivo |
|---------|---------|---------|
| Account Coverage | Cuentas con ≥1 contacto identificado / Total cuentas lista | > 80% |
| Account Engagement Rate | Cuentas con ≥3 touchpoints / Total cuentas lista | > 50% |
| Pipeline Influenced | Revenue en pipeline de cuentas ABM | > 40% del pipeline total |
| Account Progression Rate | Cuentas que avanzan de etapa por mes | Benchmark por industria |
| ABM Win Rate | Deals cerrados de cuentas ABM / Deals totales | Debe superar el win rate general |

---

## ENTREGABLES

1. Plantilla de ICP con campos específicos para mi sector
2. Plantilla de plan de cuenta ABM (account plan): una página por cuenta prioritaria
3. Secuencia de emails de primer contacto personalizada por rol (3 variantes)
4. Dashboard de ABM en Hubspot / Salesforce (campos y vistas recomendadas)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Diseñar una estrategia ABM para SaaS B2B: selección de cuentas, personalización por rol, coordinación con ventas y métricas específicas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura serverless',
                'description'      => 'AWS Lambda, Google Cloud Functions y cuándo serverless es la solución correcta (y cuándo no): guía de decisión y diseño para developers.',
                'prompt_content'   => <<<'PROMPT'
Actúa como arquitecto de soluciones cloud con experiencia en arquitecturas serverless en AWS y Google Cloud. Necesito entender cuándo usar serverless y cómo diseñar una arquitectura robusta si decido adoptarlo.

**Mi contexto:**
[Tipo de aplicación: API REST / backend de app móvil / procesamiento de datos / microservicios / monolito que quiero migrar]

**Stack actual:**
[Node.js / Python / Go / Java — especifica lenguaje y runtime]

**Proveedor cloud preferido:**
[AWS / GCP / Azure / sin preferencia]

**Escala esperada:**
[Peticiones por segundo, patrones de tráfico: uniforme / picos / estacional]

---

## PARTE 1 — SERVERLESS: CUÁNDO SÍ Y CUÁNDO NO

### El modelo mental correcto de serverless

Serverless no significa "sin servidores" — significa que no gestionas los servidores. La plataforma maneja:
- Aprovisionamiento de instancias
- Escalado automático (incluyendo a cero)
- Parcheado y mantenimiento del OS
- Alta disponibilidad básica

Tú sigues siendo responsable de:
- El código y sus dependencias
- La configuración de la función (memoria, timeout, concurrencia)
- Los permisos IAM / service accounts
- El diseño de la arquitectura (qué funciones, qué triggers, qué colas)

### Cuándo serverless es la elección correcta

| Caso de uso | Por qué funciona bien | Servicio recomendado |
|-------------|----------------------|---------------------|
| APIs con tráfico variable o impredecible | Scale to zero, pagas por uso real | Lambda + API Gateway / Cloud Run |
| Procesamiento de eventos asíncrono | Trigger nativo desde S3, SQS, Pub/Sub | Lambda / Cloud Functions |
| Cron jobs y tareas programadas | Sin servidor dedicado idle | Lambda + EventBridge / Cloud Scheduler |
| Webhooks de terceros | Bajo volumen, alta variabilidad | Lambda / Cloud Functions |
| Backends de MVPs y startups early-stage | Coste bajo, zero-ops | Firebase + Cloud Functions |

### Cuándo NO usar serverless

Sé honesto sobre los antipatrones:

1. **Cold starts inaceptables**: si tu SLA requiere < 100ms en el percentil 99, serverless con cold start puede ser un problema (especialmente en JVM)
2. **Ejecuciones largas**: las funciones tienen límites de timeout (15 min en Lambda, 9 min en Cloud Functions). Para jobs largos, usa Fargate o Cloud Run
3. **Estado entre invocaciones**: las funciones son stateless por diseño; si necesitas estado compartido, es un antipatrón
4. **Computación intensiva en CPU**: cargas de ML inference, codificación de vídeo, simulaciones numéricas — los contenedores son más eficientes
5. **Alta frecuencia y latencia constante**: si tienes 10.000 RPS constantemente, un servidor dedicado puede ser más barato

### La trampa del "vendor lock-in"

Explica qué partes de serverless generan dependencia del proveedor y cómo mitigarla:
- El runtime y los triggers son portables (Node.js 20 en Lambda ≈ Cloud Functions)
- Los servicios gestionados de la plataforma NO son portables (DynamoDB, Firestore, SQS vs Pub/Sub)
- Estrategia de mitigación: hexagonal architecture + adapters para los servicios externos

---

## PARTE 2 — DISEÑO DE ARQUITECTURA SERVERLESS

### Estructura de una función bien diseñada

```typescript
// Handler minimalista — toda la lógica en servicios externos al handler
export const handler = async (event: APIGatewayProxyEvent): Promise<APIGatewayProxyResult> => {
  try {
    const input = parseAndValidate(event);          // validación
    const result = await processOrderUseCase(input); // lógica de negocio
    return successResponse(result);
  } catch (error) {
    return errorResponse(error);
  }
};
```

Principios:
- El handler solo orquesta; la lógica va en servicios/use cases testeables unitariamente
- Inyecta dependencias (clients de DB, APIs) fuera del handler para reutilizarlos entre invocaciones
- Logging estructurado desde el primer día (CloudWatch / Cloud Logging los parsea)

### Gestión del cold start

Explica el ciclo de vida de una función Lambda/Cloud Function:

```
INIT phase (cold start): ~100ms-3s
├── Descarga del paquete
├── Inicialización del runtime
└── Ejecución del código fuera del handler

INVOKE phase (warm): ~ms
└── Ejecución del handler con el evento
```

Técnicas para mitigar:
1. **Provisioned Concurrency** (Lambda): instancias pre-calentadas, coste extra
2. **Minimum instances** (Cloud Run / Cloud Functions Gen2): equivalente
3. **Keep-warm pings**: función de cron que invoca la función cada 5 minutos — solo para volúmenes muy bajos
4. **Reducir el tamaño del paquete**: menos dependencias = cold start más rápido
5. **Lenguajes con cold start bajo**: Node.js y Python arrancan más rápido que Java o .NET en general

### Concurrencia y throttling

| Concepto | AWS Lambda | GCP Cloud Functions |
|----------|-----------|---------------------|
| Concurrencia por defecto | 1.000 por región | 1.000 por función |
| Concurrencia reservada | Sí (garantía) | No disponible directamente |
| Concurrencia provisionada | Sí (warm instances) | Min instances en Gen2 |
| Límite de throttling | 429 TooManyRequests | 429 Resource Exhausted |

---

## PARTE 3 — SERVICIOS COMPLEMENTARIOS

### El stack serverless completo en AWS

```
Cliente
  └── API Gateway / Application Load Balancer
        └── Lambda (función)
              ├── DynamoDB / RDS Proxy (base de datos)
              ├── S3 (almacenamiento de objetos)
              ├── SQS / EventBridge (colas y eventos)
              ├── ElastiCache / DAX (caché)
              └── Secrets Manager (secretos)
```

### Patrones de integración asíncrona

**Fan-out con SNS + SQS**:
```
Lambda A → SNS topic → [SQS Queue 1 → Lambda B]
                      → [SQS Queue 2 → Lambda C]
                      → [SQS Queue 3 → Lambda D]
```
Usa este patrón cuando el mismo evento debe procesarse de formas independientes.

**Saga / Step Functions**:
Para flujos de negocio con pasos compensatorios (ej: proceso de pedido con rollback si falla el stock), usa AWS Step Functions en lugar de encadenar Lambdas directamente.

---

## PARTE 4 — OBSERVABILIDAD EN SERVERLESS

### El problema específico de observabilidad en serverless

Serverless hace que la observabilidad sea más difícil porque:
- No tienes acceso al servidor (no puedes hacer SSH)
- Las invocaciones son efímeras (no hay proceso persistente con métricas)
- Los logs están distribuidos en miles de invocaciones

### Stack de observabilidad recomendado

| Capa | Herramienta | Qué monitorizar |
|------|-------------|----------------|
| Logs | CloudWatch Logs / Cloud Logging | Errores, duración, memory used |
| Métricas | CloudWatch Metrics / Cloud Monitoring | Invocaciones, errores, throttles, duración |
| Trazas distribuidas | X-Ray / Cloud Trace | Latencia end-to-end, bottlenecks |
| Alertas | CloudWatch Alarms / Alerting | Error rate > 1%, duración > 80% del timeout |
| Dashboard APM | Datadog / New Relic (serverless plugin) | Vista unificada si el stack es complejo |

### Structured logging obligatorio

```typescript
const log = (level: string, message: string, context: object) => {
  console.log(JSON.stringify({
    level,
    message,
    timestamp: new Date().toISOString(),
    requestId: context.requestId,
    functionName: process.env.AWS_LAMBDA_FUNCTION_NAME,
    ...context,
  }));
};
```

---

## PARTE 5 — COSTES Y OPTIMIZACIÓN

### Modelo de costes de Lambda (AWS)

```
Coste = (Nº de invocaciones × $0.0000002)
      + (GB-seconds × $0.0000166667)

GB-seconds = (memoria configurada en GB) × (duración en segundos)

Ejemplo: 1M invocaciones, 512MB, duración media 200ms
= 1M × 0.0000002 + (1M × 0.5 × 0.2) × 0.0000166667
= $0.2 + $1.67 = ~$1.87/mes (dentro del free tier en gran parte)
```

Palancas de optimización de coste:
1. Ajustar la memoria al mínimo necesario (más memoria ≠ siempre más caro, porque mejora la velocidad)
2. Usar `Lambda Power Tuning` para encontrar la configuración óptima costo/performance
3. Reservar concurrencia solo donde sea necesario
4. Usar ARM/Graviton (20% más barato en Lambda, 20% mejor performance)

---

## ENTREGABLES

1. Diagrama de arquitectura serverless para mi caso de uso (describe los componentes y sus conexiones)
2. Checklist de "listo para producción" en serverless (15 puntos)
3. Decisión documentada: serverless vs. contenedores vs. VMs para mi caso de uso específico con pros/contras
4. Runbook de debugging de una Lambda que falla en producción sin acceso a servidor
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Decidir cuándo usar arquitectura serverless, diseñar la solución con buenas prácticas y gestionar cold starts, concurrencia y observabilidad en producción.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de juegos y gamificación',
                'description'      => 'Mecánicas de juego aplicadas a productos digitales para aumentar el engagement, la retención y la motivación del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de experiencias y especialista en gamificación con experiencia en aplicación de mecánicas de juego a productos no lúdicos (apps de fitness, plataformas de aprendizaje, herramientas de productividad, programas de fidelización). Necesito diseñar una capa de gamificación para mi producto.

**Mi producto:**
[Tipo de producto: app de fitness / plataforma educativa / app de productividad / ecommerce con programa de fidelización / SaaS con onboarding]

**Problema que quiero resolver con gamificación:**
[Baja retención en los primeros 7 días / baja frecuencia de uso / el onboarding no se completa / los usuarios no adoptan las features principales]

**Usuario objetivo:**
[Perfil del usuario: edad, motivaciones, nivel técnico, contexto de uso]

---

## PARTE 1 — FUNDAMENTOS DE GAMIFICACIÓN

### La diferencia entre gamificación real y "puntos vacíos"

Explica por qué la gamificación superficial (solo añadir puntos y badges) suele fracasar:

1. **Motivación extrínseca vs. intrínseca**: las recompensas externas pueden destruir la motivación interna si se aplican mal (efecto de sobrejustificación)
2. **Significado**: los puntos sin narrativa ni contexto no motivan más allá de las primeras horas
3. **Progresión sin propósito**: los usuarios sienten el "treadmill" — acumulan sin llegar a ningún lado

La gamificación que funciona conecta la mecánica con el valor real del producto.

### El modelo Octalysis de Yu-kai Chou

Las ocho motivaciones core que impulsan el comportamiento:

| Drive | Tipo | Ejemplos de mecánica |
|-------|------|---------------------|
| 1. Significado épico y misión | Intrínseco | Narrativa, ser parte de algo grande |
| 2. Desarrollo y logro | Intrínseco | Niveles, puntos, habilidades desbloqueadas |
| 3. Potenciación de creatividad | Intrínseco | Personalización, construcción, expresión |
| 4. Propiedad y posesión | Intrínseco/extrínseco | Inventario, colecciones, avatares |
| 5. Influencia social | Extrínseco | Leaderboards, gifting, competición |
| 6. Escasez e impaciencia | Extrínseco | Ofertas limitadas, energía, vidas |
| 7. Imprevisibilidad y curiosidad | Intrínseco | Recompensas variables, cajas de loot |
| 8. Pérdida y evasión | Extrínseco | Rachas que perder, penalizaciones |

Para mi producto, ¿qué drives son más relevantes y por qué?

---

## PARTE 2 — MECÁNICAS DE JUEGO Y SU APLICACIÓN

### Mecánicas de progresión

**Niveles y XP**:
- Define qué acciones dan XP (calibra para que sea alcanzable pero no trivial)
- Diseña la curva de progresión: más XP necesario en cada nivel (curva exponencial suave)
- Los primeros 3 niveles deben alcanzarse en la primera sesión — el early win es crítico

**Barras de progreso**:
- Zeigarnik effect: las barras incompletas generan tensión cognitiva que impulsa a completar
- Aplícalas al onboarding, al perfil, a los objetivos diarios
- Nunca mostrar una barra al 0% — empieza al 20-30% para reducir la barrera inicial

**Milestones y logros**:
- Diferencia entre logros de progresión (completar X acciones) y logros de habilidad (hacer X en Y tiempo)
- Los logros inesperados (achievements ocultos) generan más deleite que los predecibles
- Diseña logros que cuenten una historia sobre el usuario ("Madrugador: entrena 7 días seguidos antes de las 7am")

### Mecánicas de retención

**Daily streaks**:
- Motivación poderosa para crear hábito (Duolingo, Snapchat)
- Riesgo: usuarios estresados que usan el producto solo para no perder la racha
- Solución: freeze días (Duolingo), rachas flexibles (3 de 7 días), recuperación de racha con coste

**Recompensas variables (Variable Ratio Reinforcement)**:
- La mecánica más adictiva del diseño de comportamiento (Skinner)
- Cajas de loot, retos aleatorios, bonus surprise
- Ética: debe ser transparente y no explotar a usuarios vulnerables

**Eventos temporales**:
- Retos de duración limitada (challenge de 30 días, evento semanal, temporada)
- Crean urgencia sin la toxicidad del FOMO permanente
- Permiten onboardings de nuevos usuarios en momentos de alta actividad

### Mecánicas sociales

**Leaderboards**: solo funcionan si compites con personas de tu nivel, no con los top 1%. Usa leaderboards de amigos o de grupos de nivel similar.

**Colaboración vs. competición**: para productos de bienestar o educación, la colaboración (equipos, desafíos grupales) tiene mejor retención a largo plazo que la competición pura.

**Gifting y sharing**: permites dar recompensas a otros usuarios — genera loops virales orgánicos.

---

## PARTE 3 — DISEÑO DEL SISTEMA DE GAMIFICACIÓN

### El onboarding gamificado (primeras 24 horas)

Diseña el flujo de onboarding usando principios de juego:

```
Minuto 0-2: Tutorial interactivo (no texto, acción)
├── Primera acción = primera recompensa inmediata
└── "¡Ganaste 50 XP!" en la primera interacción

Minuto 2-10: Primer objetivo alcanzable
├── "Completa tu perfil para desbloquear X"
└── Barra de progreso que empieza en 33%

Día 1: Primer logro desbloqueado
├── Notificación motivadora al final del día
└── Preview de lo que viene ("mañana desbloquearás...")

Día 2-3: Inicio de racha
└── "Llevas 2 días seguidos, ¡sigue así!"
```

### Economía de juego: diseña tu moneda virtual (si aplica)

Si tu producto incluye moneda virtual o puntos canjeables:

1. **Gana**: acciones que el producto quiere fomentar (frecuencia, calidad, social)
2. **Gasta**: recompensas que el usuario quiere (descuentos, features premium, contenido exclusivo)
3. **Balance**: la velocidad de ganancia vs. gasto determina si el sistema se siente generoso o tacaño
4. **Inflación**: si los usuarios acumulan sin gastar, la moneda pierde valor subjetivo

### Personalización de la gamificación por perfil de usuario

No todos los usuarios responden igual. Según Bartle's Player Types:

| Tipo | Motivación | Mecánica favorita |
|------|-----------|-------------------|
| Achiever | Completar objetivos, dominar | Logros, niveles, colecciones completas |
| Explorer | Descubrir, experimentar | Easter eggs, contenido oculto, variedad |
| Socializer | Conexión con otros | Equipos, gifting, chat, leaderboards de amigos |
| Killer | Competir, dominar a otros | Ranking global, PvP, tablas de clasificación |

---

## PARTE 4 — MÉTRICAS DE GAMIFICACIÓN

### KPIs específicos para medir el impacto

| Métrica | Definición | Qué revela |
|---------|-----------|-----------|
| Day 1 / Day 7 / Day 30 Retention | % usuarios que vuelven al día 1, 7, 30 | Si la gamificación mejora la retención |
| Feature adoption gamificada | % usuarios que usan la feature con game layer | Efectividad de la mecánica |
| Session length | Duración media de sesión | Si el engagement aumenta |
| Streak length | Duración media de rachas activas | Calidad del hábito formado |
| Reward redemption rate | % de recompensas canjeadas / ganadas | Si las recompensas son deseables |

### A/B testing de mecánicas

Define cómo testear si una mecánica funciona:
- Grupo control: sin mecánica
- Grupo test: con mecánica
- Variable única: no testear dos mecánicas a la vez
- Duración mínima del test: 14 días para ciclos de hábito
- Métrica primaria: retención D7 (no engagement inmediato)

---

## ENTREGABLES

1. Mapa de gamificación para mi producto: acciones → recompensas → mecánicas → motivaciones
2. Flujo detallado del onboarding gamificado (pantalla a pantalla, en prosa)
3. Diseño del sistema de logros: 15 logros con nombre, descripción, criterio y nivel de dificultad
4. Plan de A/B test para la primera mecánica que voy a implementar
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar un sistema de gamificación para un producto digital: mecánicas de progresión, retención y social, con onboarding gamificado y métricas de impacto.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de servicios profesionales',
                'description'      => 'Propuesta, alcance, precio y cómo evitar el scope creep en contratos de servicios: el proceso comercial para vender trabajo de conocimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director comercial con experiencia en venta de servicios profesionales: consultoría, agencias, despachos, firmas de IT y cualquier negocio que venda tiempo y expertise. Necesito mejorar mi proceso de ventas para cerrar más contratos en mejores condiciones.

**Mi negocio:**
[Tipo de servicio: consultoría de negocio / agencia de marketing / desarrollo de software / asesoría legal/fiscal / arquitectura / etc.]

**Ticket medio:**
[Importe aproximado de un contrato típico]

**Ciclo de venta:**
[Días o semanas desde primer contacto hasta firma]

**Problema principal:**
[El cliente siempre quiere bajar el precio / los proyectos siempre acaban siendo más grandes de lo acordado / no sé cómo hacer la propuesta para que justifique el precio]

---

## PARTE 1 — EL PROCESO DE VENTA DE SERVICIOS

### Por qué vender servicios es diferente a vender productos

En la venta de productos, el cliente puede ver, tocar o probar antes de comprar.
En servicios profesionales, el cliente compra una promesa de resultado:

1. **Intangibilidad**: no puede evaluarse hasta después de la entrega
2. **Inseparabilidad**: el servicio y quien lo presta son lo mismo (tú eres el producto)
3. **Heterogeneidad**: cada proyecto es diferente aunque uses el mismo proceso
4. **Caducidad**: el tiempo no prestado no se almacena

Consecuencias comerciales: el cliente tiene mayor percepción de riesgo, por lo que la venta de servicios es principalmente venta de confianza.

### Las tres etapas críticas

```
ETAPA 1 — DISCOVERY (entender el problema real)
├── No vendas todavía — escucha
├── Pregunta por el coste de NO resolver el problema
└── Identifica quién toma la decisión y qué le preocupa

ETAPA 2 — PROPUESTA (convertir el entendimiento en oferta)
├── Propón soluciones, no catálogos de servicios
├── Presenta siempre 2-3 opciones (bueno, mejor, óptimo)
└── El precio siempre en contexto del valor, no del coste

ETAPA 3 — NEGOCIACIÓN Y CIERRE
├── Negocia el alcance antes que el precio
├── Maneja las objeciones como información, no como ataques
└── El contrato protege a ambas partes, no solo a ti
```

---

## PARTE 2 — LA REUNIÓN DE DISCOVERY

### Las 12 preguntas que debes hacer antes de hacer una propuesta

**Sobre el problema:**
1. ¿Cuánto tiempo lleva existiendo este problema?
2. ¿Qué han intentado antes y por qué no funcionó?
3. Si no lo resolvéis este año, ¿qué pasa?

**Sobre el impacto:**
4. ¿Cuánto os está costando este problema en dinero, tiempo o reputación?
5. Si lo resolveis perfectamente, ¿cómo se ve el éxito?
6. ¿Cómo lo mediríais para saber que funcionó?

**Sobre la decisión:**
7. ¿Quién más está involucrado en esta decisión?
8. ¿Han trabajado con proveedores externos para esto antes?
9. ¿Cuál es el proceso de aprobación de un contrato de este tamaño?

**Sobre el presupuesto y el tiempo:**
10. ¿Tienen presupuesto asignado para esto? ¿Hay un rango que puedas compartirme?
11. ¿Para cuándo necesitáis tener esto resuelto y por qué esa fecha?
12. ¿Qué otras prioridades compiten con esto ahora mismo?

### Escucha activa en la reunión de discovery

- Habla el 30% del tiempo, el cliente el 70%
- Reformula antes de responder: "Si te entiendo bien, el problema principal es..."
- Anota las frases exactas del cliente — las usarás en la propuesta
- No proponer soluciones en la reunión de discovery — "eso es algo que analizaré y te propongo la semana que viene"

---

## PARTE 3 — LA PROPUESTA DE SERVICIOS

### Estructura de una propuesta ganadora

**Sección 1 — Tu situación actual** (2 párrafos)
Describe el problema del cliente usando sus propias palabras de la reunión de discovery. Que al leerlo piense "esto es exactamente lo que nos pasa".

**Sección 2 — Lo que proponemos** (el qué, no el cómo)
Describe el resultado y el estado futuro, no la metodología. El cliente compra la transformación, no el proceso.

**Sección 3 — Nuestro enfoque** (el cómo, resumido)
Tres o cuatro fases del proyecto con entregables concretos. No el día a día, sino los hitos.

**Sección 4 — Por qué nosotros**
Casos de éxito similares (idealmente del mismo sector) y las credenciales relevantes para este proyecto específico. No tu historia general.

**Sección 5 — Opciones e inversión**
Presenta siempre tres opciones:
- Opción A (básico): resuelve el problema mínimo, precio más bajo
- Opción B (recomendado): el alcance óptimo, tu propuesta principal
- Opción C (completo): alcance ampliado, precio premium

La técnica de las tres opciones aumenta el ticket medio porque el cliente compara entre tus opciones, no entre tú y la competencia.

**Sección 6 — Próximos pasos**
Claro, concreto, con fecha: "Si decides avanzar con esta propuesta, el siguiente paso es una reunión de kickoff el [fecha tentativa]".

### El precio en la propuesta

Reglas para presentar el precio:
1. **Nunca precio por hora si puedes evitarlo**: incita a comparar tu tarifa con otros y compra incertidumbre
2. **Precio por proyecto o por resultado**: más fácil de presupuestar para el cliente, más predecible para ti
3. **Siempre justifica el precio con el valor**: "la inversión de X€ se compara con un coste anual de Y€ que tiene el problema actual"
4. **El precio va al final**: construye el valor primero, presenta el número después

---

## PARTE 4 — SCOPE CREEP: PREVENIRLO Y GESTIONARLO

### El scope creep y sus consecuencias reales

Scope creep: el cliente pide más de lo acordado sin pagar más por ello.

Consecuencias:
- El proyecto pierde rentabilidad (a veces se vuelve deficitario)
- El equipo se desmotiva
- La relación con el cliente se deteriora ("siempre piden más")
- El cliente aprende que pedir más funciona, así que sigue pidiendo

### Prevención en el contrato

Cláusulas que debes incluir en todo contrato de servicios:

1. **Definición de alcance detallada**: lista exhaustiva de entregables, con descripción y criterios de aceptación
2. **Lo que NO incluye el proyecto** (exclusiones explícitas): tan importante como lo que sí incluye
3. **Proceso de cambios**: toda solicitud de cambio de alcance debe ir por un Change Order escrito con precio adicional
4. **Criterios de aceptación**: cómo se considera un entregable como "aprobado"
5. **Número de rondas de revisión incluidas**: "hasta dos rondas de feedback por entregable"

### Gestionar una petición de scope en el proyecto

Cuando el cliente pide algo fuera del alcance, usa este proceso:

1. **Acuse de recibo positivo**: "Me parece una buena idea, lo apunto"
2. **Verificar el alcance**: "Revisando el contrato, esto no está incluido en el alcance actual"
3. **Cuantificar el adicional**: "Para añadir esto, necesitaría [X horas / Y días] adicionales, lo que supone un coste de [Z€]"
4. **Ofrecer opciones**: "Puedo incluirlo como un add-on, o podemos posponerlo para una fase 2"
5. **Documentar por escrito**: nunca de palabra, siempre email o Change Order firmado

---

## PARTE 5 — NEGOCIACIÓN DE PRECIO

### Cuándo y cómo negociar

Regla fundamental: **siempre negocia el alcance antes que el precio**.

Si el cliente dice "es demasiado caro":
1. Pregunta qué presupuesto tiene disponible
2. Propón la opción A de tu propuesta (si no lo hiciste) o reduce alcance para llegar al precio
3. Si no puedes reducir más el alcance, explica por qué el precio es el que es
4. Si aun así insisten, decide si el proyecto merece hacerse con ese margen

**Concesiones inteligentes**:
- Si bajas el precio, saca algo a cambio: menor alcance, plazos más largos, pago por adelantado
- Nunca hagas una concesión sin pedir algo a cambio — enseña al cliente que el precio tiene fundamento

---

## ENTREGABLES

1. Plantilla de propuesta de servicios (estructura en secciones con indicaciones de contenido)
2. Script de discovery call: las 12 preguntas con transiciones naturales entre ellas
3. Template de Change Order para gestionar peticiones de scope adicional
4. Objeciones de precio más comunes y respuestas que funcionan
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Mejorar el proceso de venta de servicios profesionales: discovery, propuesta con opciones, precio basado en valor y gestión del scope creep.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la experiencia post-compra',
                'description'      => 'El journey del cliente después de pagar: onboarding, activación y primer valor para reducir churn y aumentar el LTV desde el día uno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Product Manager con experiencia en growth y retención, especializado en el journey del usuario desde el momento de la compra hasta que experimenta el valor del producto por primera vez. Necesito diseñar o mejorar la experiencia post-compra.

**Mi producto:**
[SaaS / app de consumo / producto físico con app / plataforma de contenido / servicio de suscripción — especifica]

**Situación actual:**
[Mucho churn en los primeros 30 días / los usuarios registrados no activan / el tiempo hasta el primer valor es demasiado largo / no tenemos onboarding estructurado]

**Métricas actuales (si las conoces):**
[Day 1 retention, activation rate, time-to-value]

---

## PARTE 1 — EL FRAMEWORK DE ONBOARDING

### La diferencia entre registro, activación y retención

Explica por qué confundir estos tres conceptos destruye el análisis:

- **Registro**: el usuario creó una cuenta (lagging indicator de marketing, no de producto)
- **Activación**: el usuario experimentó el valor central del producto al menos una vez
- **Retención**: el usuario sigue volviendo porque el producto aporta valor continuo

El churn temprano no es un problema de retención — es un problema de activación.

### El "momento ajá" y cómo encontrarlo

Define el "aha moment" de tu producto: la acción específica que convierte a un visitante en un usuario que entiende el valor.

Ejemplos de aha moments conocidos:
- Dropbox: subir el primer archivo y verlo sincronizado en otro dispositivo
- Slack: enviar 2.000 mensajes en equipo (correlación con retención a 90 días)
- Airbnb: completar la primera reserva (como guest o como host)
- Twitter: seguir a 30 personas (descubrieron correlación con retención)

Cómo encontrar el tuyo:
1. Analiza los usuarios retenidos a 30 días: ¿qué hicieron en las primeras 48h que los no retenidos no hicieron?
2. Entrevista a 10 usuarios que siguen pagando: "¿Cuándo entendiste de verdad para qué sirve el producto?"
3. Busca la correlación: acción X en primeras 72h → retención a 30 días

---

## PARTE 2 — DISEÑO DEL ONBOARDING

### Los cinco tipos de onboarding

| Tipo | Cómo funciona | Cuándo usarlo |
|------|---------------|--------------|
| Tutorial interactivo | Guías paso a paso dentro del producto | Productos complejos, muchas features |
| Empty state design | El estado vacío muestra qué hacer a continuación | Productos donde el usuario crea contenido |
| Email sequence | Secuencia de emails educativos post-registro | Cuando la activación tarda > 24h |
| Onboarding checklist | Lista de tareas para completar la configuración | Productos B2B con muchos pasos de setup |
| Llamada de onboarding | Sesión 1:1 con el equipo de CS | Tickets altos, productos complejos |

La mayoría de los productos necesita combinar varios tipos.

### El flujo de onboarding ideal (primeras 72 horas)

```
MINUTO 0 — Registro completado
├── Pantalla de bienvenida: "¿Para qué usarás [producto]?"
│   (segmentación para personalizar onboarding)
└── Primera acción: llevar al usuario DIRECTAMENTE al aha moment
    (no al dashboard vacío, no al tutorial genérico)

HORA 1 — Primera sesión
├── Acción guiada hacia el aha moment (máximo 3 pasos)
├── Celebración del primer logro ("¡Lo conseguiste!")
└── Preview de las siguientes features ("También puedes hacer X")

DÍA 1 — Email de seguimiento
├── Asunto: referencia al progreso hecho (no genérico)
├── Una sola llamada a la acción: el siguiente paso lógico
└── Si no completó el aha moment: email de "te ayudamos"

DÍA 3 — Comprobación de activación
├── Si activado: email con tips para sacar más valor
└── Si no activado: email de intervención + oferta de ayuda

DÍA 7 — Revisión de primera semana
├── Resumen de lo que han conseguido con el producto
└── Siguiente nivel de uso (feature intermedia)
```

### Diseño del empty state

El estado vacío es el momento más crítico y más ignorado del diseño:

1. **No mostrar nada vacío**: siempre hay algo que mostrar (ejemplos, templates, datos de demo)
2. **Instrucción clara**: "Crea tu primer X" con botón visible, no texto explicativo largo
3. **Motivación**: muestra el resultado que obtendrán, no el proceso
4. **Social proof contextual**: "Más de 50.000 equipos como el tuyo ya usan esto para [resultado]"

---

## PARTE 3 — SEGMENTACIÓN DEL ONBOARDING

### Personalización según el perfil del usuario

Cómo usar las respuestas del signup para personalizar el onboarding:

**Pregunta clave en el registro**: "¿Cuál es tu principal objetivo con [producto]?"
- Respuesta A → camino de onboarding A (features relevantes para ese objetivo)
- Respuesta B → camino de onboarding B

Esta segmentación temprana puede aumentar la activación hasta un 25-30%.

### Onboarding por tipo de usuario en productos B2B

| Rol del usuario | Prioridad en onboarding | Metric de activación |
|----------------|------------------------|----------------------|
| Admin / decisor | Configuración de la cuenta, importar datos, invitar equipo | Invitó a ≥1 usuario más |
| Usuario power | Features avanzadas, integraciones | Completó 3+ acciones clave |
| Usuario casual | Flujo principal simplificado | Completó 1 acción clave |

---

## PARTE 4 — EMAIL SEQUENCES DE ONBOARDING

### Secuencia de emails post-registro (primeros 14 días)

| Email | Momento de envío | Asunto | Objetivo |
|-------|-----------------|--------|---------|
| 1 - Bienvenida | Inmediato | "Tu acceso a [producto] está listo" | Primer login |
| 2 - Guía de inicio | D+1 si no activó | "Cómo hacer [aha moment] en 3 minutos" | Activación |
| 3 - Caso de uso | D+3 | "[Empresa similar] usa [producto] para [resultado]" | Inspiración |
| 4 - Feature principal | D+5 | "La feature que más utilizan nuestros usuarios" | Adopción |
| 5 - Éxito o rescate | D+7 | "¿Cómo va todo?" (si activó) / "¿Necesitas ayuda?" (si no) | Retención o rescate |
| 6 - Siguiente nivel | D+10 | "Ya dominas lo básico, ahora prueba esto" | Feature avanzada |
| 7 - Social proof | D+14 | "Lo que consiguen nuestros usuarios en el primer mes" | Motivación |

### Trigger emails basados en comportamiento

Mejor que la secuencia temporal: emails basados en lo que hace (o no hace) el usuario:

- **No abrió el app en 3 días**: "¿Sigues aquí? Vuelve y completa [acción específica]"
- **Completó el aha moment**: "¡Genial! El siguiente paso para sacar más partido es..."
- **Invitó a un colega**: "Tu equipo está empezando a usar [producto] — aquí cómo coordinarse"
- **Lleva 30 días activo**: "¡Un mes con [producto]! Mira tu progreso"

---

## PARTE 5 — MÉTRICAS DE ACTIVACIÓN

### Dashboard de onboarding

| Métrica | Definición | Frecuencia de revisión | Objetivo |
|---------|-----------|----------------------|---------|
| Activation Rate | % usuarios que completan aha moment | Semanal | Benchmark por industria |
| Time to Activate | Horas desde registro hasta aha moment | Mensual | Reducir cada trimestre |
| D1 / D7 / D30 Retention | Usuarios activos en D1, D7, D30 | Semanal | Industry benchmark |
| Onboarding Completion Rate | % usuarios que completan el flujo de onboarding | Semanal | > 60% |
| Drop-off por paso | En qué paso abandonan el onboarding | Mensual | Identificar el cuello de botella |

---

## ENTREGABLES

1. Mapa de journey post-compra: del registro al aha moment en pasos concretos con pantallas
2. Secuencia de 7 emails de onboarding (asunto, objetivo y estructura de contenido de cada uno)
3. Definición del aha moment de mi producto y cómo medirlo
4. Plan de experimentos: 3 hipótesis de mejora del onboarding para testear este trimestre
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar la experiencia post-compra: onboarding, activación y secuencia de emails para llevar al usuario al aha moment y reducir el churn temprano.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento de perfiles técnicos escasos',
                'description'      => 'Cómo atraer desarrolladores, data scientists y perfiles STEM cuando la demanda supera a la oferta: estrategia, sourcing y proceso de selección.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de talent acquisition especializado en reclutamiento tecnológico y perfiles STEM de alta demanda. Necesito construir una estrategia de captación para roles técnicos donde la oferta supera ampliamente a los candidatos disponibles.

**Roles que necesito cubrir:**
[Software engineers / data scientists / ML engineers / DevOps / cybersecurity / diseñadores UX — especifica]

**Mi empresa:**
[Startup / scale-up / empresa tradicional en transformación / consultora tecnológica]

**Problema principal:**
[No recibimos candidatos cualificados / los candidatos nos rechazan por salario / el proceso de selección es demasiado largo / la competencia nos gana]

---

## PARTE 1 — ENTIENDE EL MERCADO DE TALENTO TÉCNICO

### Por qué el reclutamiento técnico es diferente

El candidato técnico de alto nivel en 2024-2025:
- **No está buscando activamente**: el 70-80% de los mejores ingenieros está empleado y satisfecho
- **Recibe múltiples contactos a la semana**: tu InMail es uno más de diez
- **Valora la tecnología tanto como el salario**: el stack técnico, la deuda técnica y los proyectos importan
- **Tiene red propia**: suele preguntar a colegas antes de aceptar una entrevista
- **Desconfía de los procesos largos y mal preparados**: un proceso deficiente es una señal negativa del equipo

### El candidato técnico vs. el candidato comercial

| Factor | Perfil comercial | Perfil técnico |
|--------|-----------------|----------------|
| Canal de captación | LinkedIn, portales de empleo | GitHub, Stack Overflow, comunidades, referidos |
| Motivadores principales | Comisiones, crecimiento, marca | Tecnología, aprendizaje, autonomía, equipo |
| Tiempo de decisión | Rápido (días-semanas) | Lento (semanas-meses si tiene otras ofertas) |
| Evaluación del empleador | Cultura, liderazgo, estabilidad | Stack, deuda técnica, proceso de trabajo, equipo |
| Red de referencia | CRM de contactos | Comunidad técnica (Slack, Discord, GitHub) |

---

## PARTE 2 — ESTRATEGIA DE SOURCING

### Canales de captación para perfiles técnicos

**Canales activos (tú buscas a ellos):**

1. **LinkedIn Recruiter con boolean search**: no uses títulos de puesto genéricos — busca tecnologías, frameworks, proyectos
   - Ejemplo: `"Python" AND "machine learning" AND ("TensorFlow" OR "PyTorch") NOT "junior"`
   - Filtra por actividad reciente en LinkedIn (los inactivos raramente responden)

2. **GitHub**: busca contribuidores a proyectos open source del stack que usas
   - Busca en repositorios de tu tecnología y contacta a los contributors más activos
   - Revisa sus proyectos para personalizar el contacto

3. **Stack Overflow Jobs / Talent**: candidatos que han respondido preguntas de tu tecnología

4. **Meetups y conferencias técnicas**: Python Spain, DotCSS, JSConf, local meetups de tu ciudad
   - Asiste, no solo patrocines
   - Los ingenieros que presentan están activos en la comunidad y son open a conversaciones

5. **Comunidades en Slack/Discord**: únete como empresa (con transparencia), no para hacer spam

**Canales pasivos (ellos llegan a ti):**

1. **Employer branding técnico**: blog de tecnología, GitHub de la empresa, charlas en meetups de tu CTO/tech leads
2. **Programa de referidos potente**: bonus significativo (3.000-6.000€) por referido contratado
3. **Presencia en universidades técnicas**: hackathons, proyectos de fin de grado, prácticas con pipeline

### El mensaje de primer contacto que funciona

El error más común: el mensaje genérico copy-paste.

**Estructura de un mensaje que responden los técnicos:**

```
Línea 1: Referencia específica a su trabajo
"Vi tu contribución a [repositorio X] / tu artículo sobre [Y] / tu charla en [conferencia]..."

Línea 2: Por qué les contactas (breve, específico)
"Estamos construyendo [descripción técnica concreta del proyecto/problema]..."

Línea 3: El gancho técnico
"Usamos [stack] y estamos enfrentando [desafío técnico interesante], creemos que tu experiencia en [Z] encajaría bien con esto."

Línea 4: La propuesta (no el proceso, no la oferta de trabajo)
"¿Tendrías 20 minutos para una charla informal? No te haré pasar por un proceso largo antes de saber si tiene sentido para los dos."
```

---

## PARTE 3 — EL PROCESO DE SELECCIÓN TÉCNICO

### Diseño del proceso que no espanta candidatos

El proceso de selección es una muestra de cómo trabaja la empresa. Un proceso desorganizado dice más que cualquier descripción de cultura.

**Proceso recomendado (máximo 3-4 semanas):**

| Fase | Duración | Formato | Propósito |
|------|----------|---------|-----------|
| Screening call | 30 min | Vídeo / teléfono | Motivación, fit cultural básico, expectativas salariales |
| Entrevista técnica inicial | 60 min | Conversación técnica con un senior | Evaluar profundidad técnica sin código bajo presión |
| Prueba técnica (si aplica) | Máximo 3-4h | Proyecto pequeño real o take-home | Evaluar código y proceso de trabajo |
| Entrevista técnica profunda | 90 min | Con el equipo que trabajará con él | Diseño de sistema, discusión de casos reales |
| Cultura y oferta | 45 min | Con manager y/o CEO | Alinear expectativas, presentar oferta |

**Principios del proceso:**

1. **Nunca hagas coding challenges de algoritmos sin contexto** (tipo LeetCode en whiteboard) si no es imprescindible — la industria los rechaza y no miden lo que importa
2. **El take-home test tiene que ser corto y pagado**: si pides más de 3 horas, paga el tiempo
3. **Feedback siempre**: si rechazas a alguien, da feedback concreto (la industria técnica es pequeña)
4. **El candidato también te evalúa a ti**: prepara al equipo para venderse como empleador

### Entrevista técnica basada en comportamiento pasado

Mejor que los problemas de algoritmos, las preguntas de ingeniería situacional:

- "Cuéntame un sistema que diseñaste que luego tuviste que refactorizar. ¿Qué cambiarías si lo hicieras hoy?"
- "¿Cuál es la deuda técnica más importante que has encontrado en tu carrera y cómo la abordaste?"
- "Describe una decisión de arquitectura en la que estuviste en desacuerdo con tu equipo. ¿Qué hiciste?"

---

## PARTE 4 — COMPENSACIÓN Y OFERTA

### Estructura de compensación para perfiles técnicos

| Componente | Perfiles Junior | Perfiles Senior | Perfiles Staff/Principal |
|-----------|----------------|-----------------|------------------------|
| Salario base | Mercado o +5% | Mercado +10-15% | Top 15-20% del mercado |
| Variable / Bonus | Poco o nada | 10-15% si aplica | 15-25% |
| Equity / Stock | Simbólico | Relevante en startups | Muy relevante |
| Beneficios | Seguro médico, teletrabajo | + Formación, hardware | + Conferencias, budget discrecional |

### Cómo hacer una oferta que no se rechace

1. **No hagas la oferta si no sabes la expectativa**: pregunta el rango antes de ofertar
2. **Presenta la oferta en una llamada, no por email**: explica cada componente
3. **Dar tiempo razonable**: 3-5 días hábiles para decidir (no presiones, pero tampoco ilimitado)
4. **Si la rechazan por salario**: pregunta qué necesitarían para aceptar — a veces hay margen

---

## ENTREGABLES

1. Job description técnica que atrae candidatos pasivos (estructura y lenguaje)
2. Plantilla de mensaje de primer contacto personalizado (para GitHub, LinkedIn)
3. Scorecard de evaluación de candidato técnico: competencias, criterios y puntuación
4. Guía de entrevista técnica para managers sin experiencia entrevistando (12 preguntas con qué buscar en la respuesta)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Construir una estrategia de sourcing y proceso de selección para atraer y contratar perfiles técnicos escasos en un mercado competitivo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de cobros y clientes morosos',
                'description'      => 'Protocolo de reclamación extrajudicial, factoring y cuándo ir al juzgado: el proceso para cobrar lo que te deben sin destruir la relación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor financiero y legal con experiencia en gestión de cobros, reclamación de deudas y tesorería empresarial. Necesito diseñar un proceso de cobro robusto que reduzca los impagos y me permita actuar con rapidez cuando un cliente no paga.

**Mi negocio:**
[Sector, tipo de clientes (B2B / B2C / administraciones públicas), ticket medio de factura, términos de pago habituales (30, 60, 90 días)]

**Problema actual:**
[Facturas que acumulan retrasos / un cliente grande moroso / no tenemos proceso definido / el equipo comercial frena las reclamaciones por miedo a perder la relación]

---

## PARTE 1 — PREVENCIÓN: EL MEJOR COBRO ES EL QUE NO FALLA

### Due diligence del cliente antes de vender a crédito

Antes de dar crédito comercial a un cliente nuevo, verifica:

1. **Registro Mercantil**: que la empresa existe, su capital social y sus administradores
2. **RAI o ASNEF Empresas**: si está en ficheros de morosos (Registro de Aceptaciones Impagadas)
3. **CIRBE** (solo si tienes acceso o lo pide el cliente para una operación grande): deuda bancaria
4. **Informe de crédito comercial**: Informa D&B, Iberinform, Creditsafe — proporcionan rating de riesgo y límite de crédito recomendado
5. **Señales de alarma**: cambios de administradores recientes, sede en lugar inaccesible, web sin información, retraso en responder al email de solicitud de datos

### Condiciones de pago en el contrato

Elementos que deben estar en el contrato o en las condiciones generales de venta:

- **Vencimiento exacto**: no "30 días" sino "30 días desde la fecha de factura"
- **Cuenta bancaria específica**: número de cuenta al que debe transferir
- **Intereses de demora**: referencia al tipo de interés legal del dinero + 8 puntos (Ley 3/2004 de morosidad en operaciones comerciales entre empresas)
- **Compensación por costes de cobro**: mínimo 40€ por factura impagada, según la misma ley
- **Fuero jurisdiccional**: dónde se resuelven los conflictos

### Facturación impecable

Los errores más comunes que retrasan los pagos:
1. Factura con datos incorrectos (NIF del cliente, dirección, descripción del servicio)
2. No incluir la referencia de pedido del cliente (Purchase Order number)
3. Envío por canal incorrecto (al email de contacto en lugar de contabilidad@empresa.com)
4. No confirmar recepción de la factura

---

## PARTE 2 — PROTOCOLO DE RECLAMACIÓN EXTRAJUDICIAL

### La cadena de reclamación por etapas

**FASE 1 — Recordatorio amable (D+1 tras vencimiento)**

Asume que fue un olvido. Tono cordial, sin acusaciones.

> "Te envío un recordatorio de la factura nº [X] por importe de [Y€], con vencimiento el [fecha]. Si ya realizaste el pago, por favor ignora este mensaje."

**FASE 2 — Reclamación formal (D+8 sin respuesta)**

Tono más firme. Referencia a consecuencias.

> "Habiendo transcurrido [X] días desde el vencimiento sin recibir el pago, te solicito formalmente que regularices el pago en los próximos 5 días hábiles. A partir de la fecha de vencimiento se generan intereses de demora conforme a la Ley 3/2004."

**FASE 3 — Burofax o email con acuse de recibo (D+20)**

A partir de aquí, todo debe quedar documentado. El burofax tiene valor probatorio en caso de procedimiento judicial.

Contenido del burofax:
- Datos de identificación completos de ambas partes
- Relación de facturas impagadas con fecha, importe y vencimiento
- Importe total reclamado incluidos intereses hasta esa fecha
- Requerimiento de pago en plazo máximo de 10 días
- Aviso de que en caso de no pago se ejercitarán las acciones legales correspondientes

**FASE 4 — Negociación de acuerdo de pago (paralela a las anteriores)**

Si el cliente tiene voluntad de pagar pero no puede ahora:
- Acuerdo de pago en cuotas: por escrito, firmado, con reconocimiento expreso de la deuda
- Intereses incluidos en el acuerdo
- Cláusula de vencimiento anticipado si se incumple alguna cuota

---

## PARTE 3 — HERRAMIENTAS FINANCIERAS PARA LA TESORERÍA

### Factoring: anticipa el cobro de tus facturas

Explica los tipos de factoring disponibles en España:

| Tipo | Cómo funciona | Con o sin recurso | Para quién |
|------|--------------|-------------------|-----------|
| Factoring con recurso | El banco adelanta el 80-90% de la factura; si el cliente no paga, la empresa devuelve el anticipo | Con recurso (el riesgo lo asumes tú) | Clientes de confianza, necesitas liquidez |
| Factoring sin recurso | El banco compra la factura y asume el riesgo de impago | Sin recurso (el riesgo lo asume el banco) | Cuando el cliente tiene riesgo pero necesitas caja |
| Confirming | Tu cliente usa confirming: el banco paga a tus proveedores en tu nombre | — | Útil si eres proveedor de grandes empresas |

**Coste del factoring**: comisión de gestión (0.5-2% del nominal) + tipo de interés sobre el anticipo (Euribor + diferencial)

### Seguro de crédito (caución de cobro)

Si trabajas con muchos clientes o exportas, el seguro de crédito cubre el impago:
- Aseguradoras principales: Cesce, Atradius, Coface
- Prima: 0.1-0.5% de la facturación asegurada
- Cubre: insolvencia declarada, impago prolongado, riesgo político en exportación
- Incluye servicios de evaluación de riesgo del cliente antes de vender

---

## PARTE 4 — VÍA JUDICIAL

### Cuándo ir al juzgado

Ir a vía judicial tiene coste (procurador, abogado, tiempo), así que evalúa:
- El importe de la deuda justifica los costes del procedimiento
- El cliente tiene solvencia (no vale la pena demandar a un insolvente)
- Has agotado las vías extrajudiciales documentadas
- La relación comercial ha terminado (o no te importa perderla)

### Procedimientos disponibles en España

| Procedimiento | Para qué importe | Plazo estimado | Coste |
|--------------|-----------------|---------------|-------|
| Proceso monitorio | Sin límite (preferible < 30.000€) | 3-6 meses si no hay oposición | Sin abogado hasta 2.000€; bajo coste relativo |
| Juicio verbal | < 6.000€ | 6-12 meses | Sin abogado o con costes bajos |
| Juicio ordinario | > 6.000€ | 12-24 meses | Abogado + procurador obligatorio |

### El proceso monitorio: el más rápido

Proceso especialmente diseñado para reclamar deudas dinerarias justificadas documentalmente:

1. Presentas escrito al juzgado con la deuda y los documentos (facturas, contratos, correos)
2. El juzgado notifica al deudor y le da 20 días para pagar u oponerse
3. Si paga: fin del proceso
4. Si se opone: pasa a juicio ordinario o verbal según cuantía
5. Si no responde: se dicta auto que sirve como título ejecutivo para el embargo

**Documentos que necesitas**:
- Contrato firmado o confirmación de pedido
- Facturas impagadas
- Justificantes de entrega (albaranes, correos de conformidad)
- Documentación de las reclamaciones realizadas (burofax, emails)

---

## ENTREGABLES

1. Plantilla de política interna de crédito y cobro (condiciones de pago, límites de crédito, proceso de aprobación)
2. Plantilla de las tres cartas de reclamación (recordatorio, formal, requerimiento previo a vía legal)
3. Checklist de documentación mínima para interponer proceso monitorio
4. Calculator de intereses de demora según Ley 3/2004 (qué datos necesito para calcularlo)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar el proceso completo de cobro: prevención, cadena de reclamación extrajudicial, factoring como alternativa y cuándo acudir a la vía judicial.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance laboral para startups en crecimiento',
                'description'      => 'Inspecciones de trabajo, obligaciones de prevención de riesgos y lo que más se sanciona: lo que toda startup debe saber antes de tener problemas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado laboralista con experiencia en asesoramiento a startups y pymes en crecimiento. Necesito entender las obligaciones laborales y de prevención de riesgos más importantes para una empresa que está escalando, y qué riesgos de sanción son más comunes.

**Mi empresa:**
[Número de empleados actual, sector, tipo de contratos mayoritarios, si tiene teletrabajo, si contrata a freelancers/autónomos para trabajo habitual]

**Fase de crecimiento:**
[De 0 a 10 / de 10 a 50 / de 50 a 100 empleados]

**Preocupaciones específicas:**
[Contratación de autónomos / control horario / prevención de riesgos / igualdad / teletrabajo / contrataciones internacionales]

---

## PARTE 1 — OBLIGACIONES LABORALES POR TAMAÑO DE EMPRESA

### El mapa de obligaciones que se activan por umbral de empleados

| Umbral | Obligación que se activa |
|--------|--------------------------|
| 1er empleado | Alta en Seguridad Social, contrato escrito, calendario laboral publicado, cuotas patronales |
| 6+ empleados | Servicio de Prevención de Riesgos Laborales (puede ser ajeno) |
| 10+ empleados | Libro de visitas (digital desde 2016), Registro de jornada obligatorio |
| 25+ empleados | Reserva del 2% de empleados con discapacidad (si existe mercado) |
| 50+ empleados | Plan de Igualdad obligatorio (según RDL 6/2019) |
| 50+ empleados | Canal de denuncias interno (Ley 2/2023 de protección del informante) |
| 100+ empleados | Auditoría retributiva obligatoria |
| 150+ empleados | Comité de empresa obligatorio |
| 250+ empleados | Plan de Igualdad con registro retributivo obligatorio |

---

## PARTE 2 — LO QUE MÁS INSPECCIONA LA ITSS

### Las áreas prioritarias de inspección laboral en 2024-2025

La Inspección de Trabajo y Seguridad Social (ITSS) tiene campañas de actuación publicadas anualmente. Explica las actuaciones más frecuentes en startups y empresas tecnológicas:

**1. Falsos autónomos (economía de plataformas y trabajo en remoto)**

La ITSS identifica como relación laboral encubierta cuando se dan estas notas:
- Dependencia: el trabajador trabaja exclusivamente o principalmente para una empresa
- Ajenidad: los medios de producción son de la empresa, el riesgo lo asume la empresa
- Habitualidad: trabajo continuo, no puntual

Consecuencias de ser declarado falso autónomo:
- Alta retroactiva en SS con recargo del 20-35%
- Cotizaciones de todos los meses trabajados más intereses
- Derecho del trabajador a condiciones laborales (ERE si se quiere prescindir de él, indemnizaciones, etc.)
- Sanción administrativa: 10.001 a 187.515€ por infracción muy grave

**2. Registro de jornada**

El RDL 8/2019 obliga a registrar diariamente la hora de inicio y fin de la jornada de cada empleado. Lo que más sanciona la ITSS:
- No tener sistema de registro (sanción de 626 a 1.250€ por empleado)
- Registro falsificado o que siempre muestra la jornada exacta del convenio (sospechoso)
- No conservar los registros durante 4 años
- No proporcionar copia mensual al empleado si la pide

**3. Horas extras no cotizadas**

Las horas extraordinarias deben:
- Compensarse en descanso o pagarse con el recargo del convenio
- Cotizarse a la Seguridad Social
- No superar 80 horas anuales por trabajador

La ITSS cruza los registros de jornada con las nóminas. Si las horas declaradas no coinciden con las cotizadas, hay sanción.

---

## PARTE 3 — PREVENCIÓN DE RIESGOS LABORALES

### La PRL no es solo para fábricas

El error más común en startups: creer que la PRL solo aplica a trabajos físicos. Las obligaciones aplican igualmente a oficinas, trabajo remoto y trabajo con pantallas.

### Obligaciones básicas de PRL para toda empresa

1. **Evaluación de riesgos**: documento que identifica los riesgos de cada puesto de trabajo y las medidas preventivas. Debe revisarse cuando cambia el puesto, el proceso o las condiciones de trabajo.

2. **Plan de prevención**: el documento marco que describe cómo la empresa gestiona la PRL. Obligatorio para todas las empresas.

3. **Reconocimientos médicos**: oferta anual obligatoria a los trabajadores (son voluntarios para el trabajador, obligatorios para la empresa ofrecerlos). En algunos puestos, son obligatorios también para el trabajador.

4. **Formación e información**: cada trabajador debe recibir formación específica sobre los riesgos de su puesto antes de comenzar a trabajar o cuando cambien las condiciones.

5. **Medidas de emergencia**: plan de evacuación, equipos de primeros auxilios, señalización. Incluso en una oficina de 5 personas.

### Servicio de Prevención: tres opciones

| Modalidad | Para quién | Coste aproximado | Ventajas |
|-----------|-----------|-----------------|---------|
| Servicio de Prevención Ajeno (SPA) | Empresas < 500 personas sin riesgos especiales | 300-1.500€/año según empleados | Externalización total, cumplimiento mínimo garantizado |
| Servicio de Prevención Propio (SPP) | Empresas > 500 empleados o con riesgos especiales | Mayor inversión interna | Control total, adaptado a la empresa |
| Trabajador designado | Startups muy pequeñas con actividad de bajo riesgo | El coste es de la formación del empleado | Flexible pero con limitaciones |

Para la mayoría de startups tecnológicas con < 100 empleados, el SPA es la solución práctica.

### Teletrabajo y PRL

La Ley 10/2021 de teletrabajo obliga a:
- Incluir el domicilio donde se teletrabaja en el acuerdo de teletrabajo
- Evaluar los riesgos del puesto de teletrabajo (ergonomía, condiciones de iluminación, etc.)
- Proporcionar o compensar los medios y materiales necesarios
- Respetar el derecho a la desconexión digital

---

## PARTE 4 — PLAN DE IGUALDAD

### Obligaciones según tamaño

| Empleados | Obligación |
|-----------|-----------|
| 50-99 | Plan de igualdad voluntario recomendado; obligatorio si lo exige convenio |
| 100-149 | Plan de igualdad obligatorio |
| 150+ | Plan de igualdad con registro retributivo y auditoría salarial |

### Qué debe contener el Plan de Igualdad

1. Diagnóstico de la situación de igualdad en la empresa (registro retributivo desagregado por sexo)
2. Objetivos de igualdad a alcanzar
3. Medidas concretas en: acceso al empleo, clasificación profesional, formación, promoción, retribución, conciliación, prevención del acoso
4. Sistema de seguimiento y evaluación

El Plan se negocia con la representación legal de los trabajadores (si existe) y se registra en el REGCON.

---

## PARTE 5 — CANAL DE DENUNCIAS

### La Ley 2/2023 y el canal interno de información

Obligatorio para empresas con 50+ empleados desde junio 2023.

Requisitos del canal:
- Confidencialidad de la identidad del denunciante
- Posibilidad de denuncia anónima (recomendado aunque no obligatorio)
- Acuse de recibo en 7 días
- Respuesta con la resolución en máximo 3 meses
- Prohibición de represalias al denunciante

Soluciones tecnológicas disponibles: herramientas SaaS de canal de denuncias (Whistleblower Software, EQS, etc.) desde 50-200€/mes o desarrolladas internamente.

---

## ENTREGABLES

1. Checklist de compliance laboral por fase de crecimiento (10, 25, 50, 100 empleados)
2. Plantilla de acuerdo de teletrabajo con los elementos obligatorios de la Ley 10/2021
3. Plan de acción para regularizar autónomos habituales que pueden ser falsos autónomos
4. Calendario de obligaciones anuales en materia laboral y de PRL (qué hacer y cuándo)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Conocer las obligaciones laborales y de PRL de las startups en crecimiento, qué inspecciona la ITSS y cómo estar al día antes de recibir una visita.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Programas de fidelización desde CS',
                'description'      => 'Cómo el equipo de soporte puede identificar y nutrir a los clientes más valiosos para aumentar retención, upsell y referencias.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de Customer Success con experiencia en programas de fidelización y gestión del ciclo de vida del cliente. Necesito diseñar un programa de fidelización que el equipo de soporte pueda operar de forma proactiva.

**Mi empresa:**
[SaaS B2B / ecommerce / producto de consumo / plataforma de servicios — especifica]

**Estructura actual de CS:**
[Solo soporte reactivo / tenemos CS proactivo pero sin programa formal / queremos que soporte contribuya activamente a la retención]

**Objetivo:**
[Reducir churn / aumentar NPS / generar más referidos / aumentar LTV con upsell desde CS]

---

## PARTE 1 — EL ROL DEL EQUIPO DE CS EN LA FIDELIZACIÓN

### De soporte reactivo a partner del cliente

El equipo de soporte tradicional responde tickets. El equipo de CS orientado a fidelización:

1. **Identifica señales de riesgo** antes de que el cliente pida la baja
2. **Detecta oportunidades de expansión** cuando el cliente tiene necesidades no cubiertas
3. **Convierte la experiencia de soporte** en un diferenciador de la marca
4. **Genera referidos** a partir de clientes satisfechos

La clave: el equipo de CS tiene más contexto sobre el cliente que cualquier otro equipo. Aprovecharlo requiere proceso.

### Los tres tipos de clientes que más necesitan atención de CS

| Tipo | Señales | Acción de CS |
|------|---------|-------------|
| Cliente en riesgo de churn | Baja frecuencia de uso, tickets de frustración, silencio prolongado, no renueva features | Check-in proactivo, plan de rescate |
| Cliente en expansión | Frecuencia de uso alta, preguntas sobre features que no tienen, crecimiento del equipo | Conversación de upsell desde CS |
| Cliente promotor potencial | NPS alto, testimonios espontáneos, referencias informales | Programa de referidos, caso de estudio |

---

## PARTE 2 — IDENTIFICACIÓN DE CLIENTES VALIOSOS

### Health Score: el semáforo del cliente

Define el Health Score para tus clientes (puntuación de 0-100 que indica el riesgo de churn):

| Dimensión | Peso | Indicadores |
|-----------|------|-------------|
| Uso del producto | 30% | Frecuencia de login, features activas, usuarios activos vs. licencias contratadas |
| Engagement con CS | 20% | Tiempo de respuesta a nuestros outreach, tasa de asistencia a QBRs |
| Satisfacción | 25% | NPS, CSAT, presencia de tickets críticos recientes |
| Indicadores de negocio | 25% | Renovación próxima, expansión reciente, crecimiento de la cuenta |

**Verde (70-100)**: cliente sano, foco en expansión y referidos
**Ámbar (40-69)**: señales mixtas, monitoreo semanal, outreach proactivo
**Rojo (0-39)**: riesgo de churn, intervención urgente, escalación a dirección si es cuenta grande

### Segmentación de cartera de clientes

Define los segmentos de tu cartera y el modelo de atención:

| Segmento | Criterio | Modelo de CS | Ratio CS:clientes |
|----------|---------|-------------|------------------|
| Enterprise | > [X€] ARR o > [Y] usuarios | High-touch: CS dedicado | 1:5-20 |
| Mid-market | [X/2-X€] ARR | Mid-touch: CS compartido + automatización | 1:50-100 |
| SMB / Long-tail | < [X/2€] ARR | Tech-touch: self-service + triggers automáticos | 1:200-500 |

---

## PARTE 3 — PROGRAMA DE FIDELIZACIÓN DESDE CS

### Cadencia de contacto proactivo por segmento

**Enterprise (high-touch)**:

| Cadencia | Formato | Objetivo |
|----------|---------|---------|
| Semanal | Email o Slack con update | Mantener visibilidad, detectar problemas |
| Mensual | Llamada o reunión 30 min | Seguimiento de adopción, identificar riesgos |
| Trimestral | QBR (Quarterly Business Review) 60 min | Alineación estratégica, ROI del producto, upsell |
| Anual | Executive Business Review | Relación de nivel C, renovación estratégica |

**Mid-market (mid-touch)**:

- Check-in mensual automático (email personalizado con datos de uso del cliente)
- Llamada trimestral para cuentas con health score ámbar o en renovación próxima
- QBR semestral para cuentas con ARR > umbral

**SMB (tech-touch)**:

- Triggers automáticos basados en comportamiento (sin uso en 14 días, feature no usada)
- Campaña de email de valor mensual (tips, casos de uso, novedades del producto)
- NPS automático post-interacción y a los 90 días

### La Quarterly Business Review (QBR)

Estructura de una QBR efectiva:

**Preparación (antes de la reunión)**:
- Datos de uso del último trimestre vs. el anterior
- Tickets abiertos y cerrados: resumen de issues y cómo se resolvieron
- Avance frente a los objetivos acordados en la QBR anterior
- Agenda enviada al cliente 5 días antes

**Agenda de la reunión**:

1. (5 min) Recapitulación de objetivos del cliente (en sus palabras, no en las nuestras)
2. (15 min) Revisión de resultados: ¿qué han conseguido con el producto? (métricas de negocio del cliente, no de uso de la plataforma)
3. (10 min) Novedades del producto relevantes para ellos
4. (15 min) Retos y obstáculos actuales: qué les impide sacar más valor
5. (10 min) Plan del próximo trimestre: objetivos, acciones y responsables
6. (5 min) Feedback abierto: ¿qué podríamos hacer mejor?

**Documentación post-QBR**:
- Email de seguimiento con los acuerdos y acciones en 24h
- Actualización del CRM con el health score y el next step

---

## PARTE 4 — RESCATE DE CLIENTES EN RIESGO

### Señales de alerta temprana

Define los triggers que deben notificar automáticamente al CS:

1. **Sin login en 14 días** (umbral según el producto)
2. **Uso del producto cayó > 30%** vs. el mismo período del mes anterior
3. **Ticket de queja o frustración** (clasificado por IA o manualmente)
4. **Renovación en < 60 días** con health score < 60
5. **Usuario admin abandonó la empresa** (detectable por cambio en el contacto)
6. **Competidor mencionado** en un ticket o conversación

### El proceso de rescate en 5 pasos

1. **Detección**: el sistema o el CS detecta la señal de alarma
2. **Diagnóstico**: ¿cuál es la causa raíz? ¿Falta de adopción / problema del producto / cambio interno en el cliente / competidor?
3. **Outreach**: contacto proactivo con el mensaje correcto según la causa diagnosticada
4. **Plan de acción**: en la llamada de rescate, define 2-3 acciones concretas con fechas
5. **Seguimiento**: check-in a los 7, 14 y 30 días para verificar el progreso

### El guión de la llamada de rescate

```
Apertura: "He notado que [señal específica: el uso bajó / no has entrado en X días]. Quería llamarte para entender si hay algo en lo que podamos ayudarte."

Diagnóstico: "¿Hay algo que esté impidiendo que uses [producto] con la frecuencia que necesitas?"

Empatía: Escucha sin interrumpir, valida el problema.

Solución: "Entendiendo lo que me comentas, lo que propongo es [acción concreta]. ¿Te parece bien si lo hacemos así?"

Compromiso: "¿Podemos quedar en [fecha] para revisar si esto ha funcionado?"
```

---

## PARTE 5 — MÉTRICAS DE FIDELIZACIÓN

| KPI | Definición | Objetivo |
|-----|-----------|---------|
| Net Revenue Retention (NRR) | (MRR inicial + expansión - contracción - churn) / MRR inicial × 100 | > 100% (significa que la base crece) |
| Gross Revenue Retention (GRR) | (MRR inicial - contracción - churn) / MRR inicial × 100 | > 90% |
| Customer Health Score promedio | Media del health score de la cartera | > 70 |
| QBR Coverage | % de cuentas enterprise con QBR en últimos 90 días | > 90% |
| Churn salvado | Cuentas en riesgo que se retuvieron / total en riesgo | > 50% |

---

## ENTREGABLES

1. Plantilla de health score: dimensions, weights y criterios de puntuación para mi producto
2. Template de email de check-in proactivo por segmento (enterprise, mid-market, SMB)
3. Agenda y guión de QBR (versión para 60 minutos)
4. Proceso de escalación interna de una cuenta en riesgo crítico
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar un programa de fidelización operado desde CS: health score, cadencia proactiva, QBRs y proceso de rescate de clientes en riesgo de churn.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de la reputación online como freelance',
                'description'      => 'Reviews, testimonios y cómo construir prueba social sin parecer desesperado: la estrategia de reputación para el freelance que quiere atraer mejores clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de marketing personal y branding para profesionales independientes. Necesito construir y gestionar mi reputación online de forma sistemática para atraer mejores clientes y poder cobrar más.

**Mi especialidad freelance:**
[Diseño / desarrollo / consultoría / copywriting / fotografía / formación / marketing — especifica]

**Situación actual:**
[Sin presencia online / tengo LinkedIn pero sin actividad / tengo reseñas pero pocas / clientes me piden referencias pero no tengo un sistema]

**Objetivo:**
[Atraer clientes inbound / justificar un precio más alto / diferenciarse de otros freelancers de mi especialidad / entrar en un nuevo mercado o sector]

---

## PARTE 1 — POR QUÉ LA REPUTACIÓN ES TU ACTIVO MÁS VALIOSO

### El freelance invisible vs. el freelance referenciado

Un freelance sin reputación online vive de:
- El boca a boca limitado de su red cercana
- Plataformas de precio donde compite con todo el mundo

Un freelance con reputación online construida:
- Recibe consultas de clientes que le encontraron por su contenido o reseñas
- Puede cobrar una prima de precio (el "premium de la confianza")
- Los clientes ya confían en él antes de la primera llamada

La reputación online es el vendedor que trabaja mientras duermes.

### Los cuatro pilares de la reputación freelance

1. **Prueba social**: testimonios, reseñas, casos de estudio, logos de clientes
2. **Presencia en buscadores y redes**: ser encontrado cuando alguien busca tu especialidad
3. **Autoridad de contenido**: artículos, posts o vídeos que demuestran tu expertise
4. **Red de referentes**: personas que te recomiendan activamente en su entorno

---

## PARTE 2 — CÓMO PEDIR TESTIMONIOS SIN INCOMODAR

### El momento perfecto para pedir un testimonio

Los momentos de mayor predisposición del cliente:
1. **Justo al entregar el proyecto** y recibir su conformidad positiva
2. **Cuando el cliente te dice algo bueno por email o Slack**: "puedes convertir eso en un testimonio?"
3. **A los 30 días de finalizar**: cuando ya ha visto los resultados reales
4. **Antes de cerrar la factura final**: mientras aún tienes su atención

El peor momento: meses después del proyecto, cuando el cliente ya no recuerda los detalles.

### El email de solicitud de testimonio que funciona

**Versión corta (para clientes con poco tiempo)**:

> "[Nombre], ha sido un placer trabajar contigo en [proyecto]. Si el resultado te ha convencido, me sería de mucha ayuda que respondieras estas dos preguntas en un email o en LinkedIn: ¿Cuál era el problema antes de trabajar conmigo? ¿Qué cambió después? Con eso tengo suficiente. Sin prisa y solo si te apetece."

**Versión estructurada (para testimonios de casos de estudio)**:

Pide que responda estas preguntas:
1. ¿Cuál era el reto o problema que buscabas resolver?
2. ¿Qué te hizo elegirme a mí sobre otras opciones?
3. ¿Qué resultado concreto o cambio notaste después del proyecto?
4. ¿A quién le recomendarías mi trabajo?

### Formatos de testimonio y dónde usarlos

| Formato | Cómo obtenerlo | Dónde publicar | Impacto |
|---------|---------------|---------------|---------|
| Texto corto (2-3 líneas) | Email o WhatsApp | Web, propuestas, LinkedIn | Alto en contexto de decisión |
| Texto largo (caso de estudio) | Entrevista por email | Blog, portfolio, LinkedIn article | Alto para SEO y autoridad |
| Vídeo (30-90 segundos) | Llamada grabada con permiso | Web, LinkedIn, YouTube | Muy alto (humaniza) |
| LinkedIn Recommendation | Desde LinkedIn directamente | Perfil de LinkedIn | Alto en contexto B2B |
| Reseña en Google My Business | Link directo a tu perfil | Google | Alto para búsquedas locales |

---

## PARTE 3 — PLATAFORMAS DE REPUTACIÓN POR ESPECIALIDAD

### Dónde construir reputación según tu tipo de trabajo

**Diseñadores UX/UI y gráficos**:
- Behance y Dribbble: portfolio con proceso de trabajo visible
- LinkedIn: endorsements de skills específicas
- Reseñas de clientes en LinkedIn Recommendations

**Desarrolladores**:
- GitHub: repositorios públicos que demuestran calidad del código
- Stack Overflow: respuestas con votos positivos acumulados
- Toptal, Gun.io: plataformas de selección rigurosa que son señal de calidad

**Copywriters y redactores**:
- Portfolio con muestras de antes/después
- Testimonios específicos con métricas (la landing convirtió X% más)
- Artículos propios como prueba de estilo

**Consultores y coaches**:
- LinkedIn como plataforma principal
- Testimonios en vídeo en web
- Podcast como invitado o propio

**Fotógrafos y creativos visuales**:
- Instagram como portfolio en movimiento
- Google My Business con reseñas
- Lista de bodas o eventos (Bodas.net, WeddingWire, etc.)

### LinkedIn como plataforma de reputación B2B

**El perfil que convierte visitas en conversaciones**:

1. **Foto profesional** (no hace falta estudio, buena luz y fondo neutro)
2. **Titular**: no tu título, sino el resultado que consigues para tus clientes
   - Mal: "Diseñador gráfico freelance"
   - Bien: "Ayudo a startups a tener una marca visual que atrae clientes / Diseño gráfico"
3. **Sección 'Acerca de'**: problema que resuelves + para quién + cómo lo haces + prueba social breve + CTA
4. **Sección 'Featured'**: los 3 mejores trabajos o el testimonio más potente
5. **Recomendaciones**: mínimo 5 recomendaciones escritas de clientes o colaboradores reales

---

## PARTE 4 — CONTENIDO COMO PRUEBA DE EXPERTISE

### El principio de "aprender en público"

Publicar sobre tu proceso de trabajo, tus aprendizajes y los problemas que resuelves demuestra tu expertise mejor que cualquier testimonio. Ejemplos:

- "Cómo resolví [problema técnico/creativo] para un cliente del sector [X]"
- "Lo que aprendí después de [número] proyectos de [especialidad]"
- "Los 3 errores que cometen las empresas cuando contratan [tu servicio]"
- "Antes y después: cómo mejoré [resultado concreto] para [tipo de cliente]"

### Cadencia de publicación realista para freelancers

No necesitas publicar cada día. Necesitas publicar con regularidad:

| Frecuencia | Formato | Canal principal |
|-----------|---------|----------------|
| 1x semana | Post de LinkedIn (200-500 palabras) | LinkedIn |
| 2x mes | Artículo o caso de estudio (800-1500 palabras) | Blog propio + LinkedIn |
| 1x mes | Newsletter a tu lista de contactos | Email |
| 1x trimestre | Testimonio en vídeo o caso de estudio completo | Web + LinkedIn |

### El caso de estudio como herramienta de venta

Estructura de un caso de estudio que convierte:

1. **Contexto del cliente** (sin datos confidenciales): sector, tamaño, situación inicial
2. **El problema**: en palabras del cliente, lo más específico posible
3. **Tu enfoque**: qué hiciste y por qué (proceso, metodología, decisiones clave)
4. **El resultado**: métricas concretas, cambios cuantificables, tiempo de retorno
5. **La voz del cliente**: una cita directa que valide los resultados

---

## PARTE 5 — GESTIÓN DE RESEÑAS NEGATIVAS O AUSENCIA DE RESEÑAS

### Qué hacer si recibes una crítica negativa

1. **No respondas con ira**: tu respuesta es más importante que la crítica original — la leerán futuros clientes
2. **Agradece el feedback** aunque no estés de acuerdo
3. **Explica tu versión** brevemente y sin ser defensivo
4. **Ofrece resolver**: si hay algo que puedas hacer, proponlo
5. **Aprende**: una crítica específica vale más que diez vaguedades positivas

### Construir reputación desde cero

Si no tienes testimonios todavía:

1. **Proyectos a precio reducido**: para clientes ideales con los que quieres construir portfolio
2. **Pro bono estratégico**: una organización o causa que tu cliente objetivo conoce y respeta
3. **Proyectos personales**: demuestra tus habilidades en un proyecto propio publicado
4. **Colaboración con otros freelancers**: aparece en su trabajo y ellos en el tuyo

---

## ENTREGABLES

1. Plantilla de email para solicitar testimonio después de entregar un proyecto (versión corta y versión para caso de estudio)
2. Estructura del perfil de LinkedIn optimizado para freelancers (campo a campo con ejemplos)
3. Calendario de contenido mensual para construir autoridad online con tiempo limitado
4. Protocolo de respuesta a una reseña negativa (qué decir y qué no decir)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Construir la reputación online como freelance: cómo pedir testimonios, qué plataformas priorizar, cómo usar el contenido como prueba de expertise y gestionar reseñas.',
                'vote_score'       => 40,
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
