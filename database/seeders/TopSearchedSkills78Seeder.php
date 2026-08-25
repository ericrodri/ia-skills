<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills78Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing educativo (edtech) — captación, retención y upsell en formación online',
                'description'      => 'Aprende las estrategias de marketing específicas para productos de formación online: cómo captar con contenido, retener con comunidad y hacer upsell de programas más avanzados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing para empresas de educación online (edtech) con experiencia en academias digitales, plataformas de cursos y programas de formación B2C y B2B. Necesito una estrategia de marketing completa adaptada a las particularidades de los productos educativos.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de producto educativo tienes? (curso puntual, membresía, bootcamp, formación corporativa B2B)
2. ¿Cuál es el precio del producto principal y el ticket promedio?
3. ¿Cuál es el perfil del estudiante objetivo y qué problema vital resuelve tu formación?
4. ¿Cuál es tu canal de adquisición principal actualmente? (orgánico, paid, partnerships, B2B)
5. ¿Cuál es el mayor reto: atraer nuevos estudiantes, que completen el curso, o que vuelvan a comprar?

## Las Particularidades del Marketing Educativo

El marketing de edtech no es igual al de un SaaS o un ecommerce. Las diferencias clave:

| Aspecto | Edtech | SaaS/Ecommerce |
|---|---|---|
| Ciclo de decisión | Lento (la formación es una apuesta personal) | Más rápido |
| Objeción principal | "¿Cambiaré mi vida o perderé el dinero?" | Precio, funcionalidad |
| Prueba social clave | Transformación de alumnos reales | Funcionalidades, reviews |
| Abandono post-compra | Alto (estudiante que no avanza se siente culpable y pide reembolso) | Bajo si el producto funciona |
| Upsell natural | Programa más avanzado, comunidad, mentorías | Plan superior |
| Mejor canal orgánico | YouTube, podcast, blog (educativo por naturaleza) | SEO de producto, review sites |

## Estrategia de Captación: El Embudo Educativo

**El principio de la "muestra gratis":**
En edtech, la muestra del producto es la mejor publicidad. El marketing de contenidos no es solo para generar tráfico: es la demostración de tu método de enseñanza.

**Embudo de 4 capas:**

| Capa | Formato | Objetivo |
|---|---|---|
| Awareness | Video YouTube, podcast, artículo de blog, post LinkedIn | Demostrar expertise y atraer audiencia |
| Interés | Lead magnet (mini-curso gratis, PDF, webinar) | Capturar email y demostrar valor del método |
| Consideración | Secuencia de email (7-10 emails) + testimonios | Construir confianza y superar objeciones |
| Conversión | Webinar de ventas, página de ventas, llamada | Cierre de la compra |

**El lead magnet educativo perfecto:**
No es un ebook de 50 páginas. Es una victoria rápida: algo que el potencial estudiante puede hacer en 1-2 horas y que le da un resultado concreto y una visión de lo que el programa completo puede darle.

Ejemplos:
- "Mini-taller de 45 min: Crea tu primera campaña de Google Ads" (lead para curso de SEM)
- "Plantilla de análisis financiero en Excel: consíguela gratis" (lead para curso de finanzas)
- "Clase gratuita: Los 3 errores que cometen el 90% de los diseñadores UX junior" (lead para bootcamp)

## Secuencia de Email de Nurturing para Edtech

Una secuencia de 7 emails para convertir a un lead en estudiante:

| Email | Día | Contenido | Objetivo |
|---|---|---|---|
| 1 | Inmediato | Entrega del lead magnet + historia personal de por qué creaste el programa | Confianza inicial |
| 2 | Día 2 | El problema que resuelve el programa (con datos del mercado) | Reconocer el dolor |
| 3 | Día 4 | Caso de éxito de alumno con transformación medible | Prueba social |
| 4 | Día 6 | El método: cómo funciona el programa, qué lo hace diferente | Diferenciación |
| 5 | Día 8 | Objeciones frecuentes respondidas ("No tengo tiempo", "¿Será para mí?") | Eliminar fricciones |
| 6 | Día 10 | Apertura o descuento de lanzamiento con urgencia real | Activar decisión |
| 7 | Día 12 | Último recordatorio antes de cierre + bonus de última hora | Último impulso |

## Retención: El Problema Más Ignorado del Edtech

El 50-80% de los compradores de cursos online no completan el contenido. Un alumno que no avanza:
- Pide reembolso
- Da malas reseñas
- No vuelve a comprarte

**Las 3 causas del abandono y sus soluciones:**

| Causa | Señal | Solución |
|---|---|---|
| Abrumamiento (demasiado contenido) | El alumno no empieza el módulo 1 en 3 días | Reducir el contenido del módulo inicial, gamificación de primeros pasos |
| Falta de progreso visible | El alumno no pasa del 20% del curso | Hitos de progreso con celebración, "próximo paso" siempre visible |
| Falta de comunidad | El alumno trabaja solo sin feedback | Foro de alumnos, grupo de Telegram/Slack, sesiones en vivo opcionales |

**Email de reactivación para alumnos inactivos:**
"[Nombre], llevas [X días] sin acceder al curso. Te has perdido [módulo X]. Muchos alumnos en tu posición me dijeron que [objeción más común]. Aquí te cuento cómo lo superaron: [enlace a recurso o sesión de Q&A]."

## Lanzamiento vs. Evergreen: Los Dos Modelos de Venta

| Modelo | Cómo funciona | Pros | Contras |
|---|---|---|---|
| Lanzamiento (launch) | Abre matrículas 2-4 veces al año durante 5-7 días | Urgencia real, picos de ingresos | Ingresos irregulares, energía concentrada |
| Evergreen | Siempre abierto, con webinar automatizado | Ingresos constantes, escalable | Conversión más baja, requiere mucho tráfico |
| Híbrido | Evergreen con "clase cohort" en vivo trimestralmente | Lo mejor de ambos | Más complejo de gestionar |

**Recomendación para empezar:** Lanzamientos primero. Te permiten aprender rápido, generar ingresos concentrados y mejorar el producto antes de automatizar.

## Marketing B2B para Formación Corporativa

Si vendes formación a empresas (B2B), el proceso es diferente:

**El comprador en B2B de formación:**
- RRHH o L&D (Learning & Development): el que autoriza presupuesto de formación
- Mánager del equipo: el que ve la necesidad y la "empuja" internamente
- El propio profesional: el que usará el producto

**Canales de captación B2B:**
1. LinkedIn Ads dirigidos a directores de RRHH y L&D
2. Alianzas con plataformas de beneficios para empleados (Cobee, Coverflex, Gympass)
3. Programa de "empresa adherida" con precio por asiento y factura a empresa
4. Cold outreach a empresas con iniciativas de digitalización activas

## Métricas de Marketing Edtech

| Métrica | Definición | Referencia |
|---|---|---|
| Lead to student rate | % de leads que compran el curso | 1-5% en evergreen / 5-15% en launch |
| Course completion rate | % de alumnos que completan el 80%+ del contenido | > 40% |
| Student NPS | NPS de alumnos a los 30 días de empezar | > 50 |
| Refund rate | % de alumnos que piden reembolso | < 5% |
| Upsell rate | % de alumnos que compran un programa más avanzado | > 15% |
| Lifetime value (LTV) | Ingresos totales por alumno en 24 meses | > 3x precio del primer curso |

## Entregables

Con el contexto que me des, produce:
1. Estrategia de contenidos para los próximos 90 días (qué publicar, dónde y con qué objetivo)
2. Secuencia de email de nurturing completa (7 emails) adaptada a tu curso
3. Guía de retención: las 5 intervenciones automatizadas para reducir el abandono del curso
4. Plan de lanzamiento de 4 semanas para la próxima cohorte
5. Métricas dashboard: qué medir cada semana para mejorar la conversión y retención
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de marketing completa para un producto educativo online: captación con contenido, nurturing y retención de alumnos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Observabilidad avanzada — distributed tracing con OpenTelemetry en producción',
                'description'      => 'Implementa observabilidad completa en sistemas distribuidos: distributed tracing con OpenTelemetry, correlación de logs, métricas y alertas que permiten diagnosticar incidentes en minutos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de plataforma y SRE con especialización en observabilidad de sistemas distribuidos. Necesito implementar observabilidad completa en nuestra arquitectura de microservicios usando OpenTelemetry como estándar, con correlación de logs, métricas y trazas.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu stack? (Node.js, Python, Go, Java, .NET) y ¿cuántos microservicios tiene la arquitectura?
2. ¿Tienes ya alguna solución de observabilidad? (Datadog, New Relic, Jaeger, Prometheus+Grafana)
3. ¿Cuál es tu mayor dolor actual: tiempo para diagnosticar incidentes, alertas ruidosas, logs sin contexto?
4. ¿Tienes Kubernetes u orquestación de contenedores?
5. ¿Cuál es el presupuesto aproximado para herramientas de observabilidad?

## Los Tres Pilares de la Observabilidad (The Three Pillars)

| Pilar | Qué captura | Mejor para | Herramientas |
|---|---|---|---|
| **Logs** | Eventos discretos en el tiempo | Debug de errores específicos, auditoría | Loki, ELK, Datadog Logs |
| **Métricas** | Valores numéricos a lo largo del tiempo | Tendencias, alertas de umbral, dashboards | Prometheus, InfluxDB, Datadog Metrics |
| **Trazas** | Flujo de una request a través de múltiples servicios | Diagnóstico de latencia, dependencias, N+1 | Jaeger, Tempo, Datadog APM |

**El cuarto pilar que se olvida:**
Las **excepciones y errores** merecen su propia capa de gestión: Sentry, Bugsnag o Rollbar capturan el stack trace completo en el momento del error, con el contexto del usuario y el estado de la aplicación. Imprescindible en producción.

## OpenTelemetry: El Estándar Abierto

OpenTelemetry (OTel) es el estándar de la industria para instrumentación de observabilidad. La ventaja clave: instrumentas una sola vez y exportas a cualquier backend (Jaeger, Tempo, Datadog, Honeycomb).

**Arquitectura OpenTelemetry:**
```
Tu aplicación
     │
     │  (SDK de OTel: trazas, métricas, logs)
     ↓
OpenTelemetry Collector
     │
     ├──→ Jaeger / Tempo (trazas)
     ├──→ Prometheus (métricas)
     └──→ Loki / ELK (logs)
```

El Collector actúa como proxy inteligente: recibe, procesa (filtra, enriquece, muestrea) y exporta a múltiples backends.

## Instrumentación en Node.js

**Instalación:**
```bash
npm install @opentelemetry/sdk-node \
            @opentelemetry/auto-instrumentations-node \
            @opentelemetry/exporter-otlp-http
```

**Configuración (tracing.ts — carga antes que todo lo demás):**
```typescript
import { NodeSDK } from '@opentelemetry/sdk-node';
import { OTLPTraceExporter } from '@opentelemetry/exporter-otlp-http';
import { getNodeAutoInstrumentations } from '@opentelemetry/auto-instrumentations-node';
import { Resource } from '@opentelemetry/resources';
import { ATTR_SERVICE_NAME, ATTR_SERVICE_VERSION } from '@opentelemetry/semantic-conventions';

const sdk = new NodeSDK({
  resource: new Resource({
    [ATTR_SERVICE_NAME]: 'orders-service',
    [ATTR_SERVICE_VERSION]: process.env.APP_VERSION ?? '0.0.1',
    environment: process.env.NODE_ENV ?? 'development',
  }),
  traceExporter: new OTLPTraceExporter({
    url: process.env.OTEL_EXPORTER_OTLP_ENDPOINT ?? 'http://otel-collector:4318/v1/traces',
  }),
  instrumentations: [
    getNodeAutoInstrumentations({
      '@opentelemetry/instrumentation-http': { enabled: true },
      '@opentelemetry/instrumentation-express': { enabled: true },
      '@opentelemetry/instrumentation-pg': { enabled: true },
      '@opentelemetry/instrumentation-redis': { enabled: true },
    }),
  ],
});

sdk.start();
```

**Trazas personalizadas (custom spans):**
```typescript
import { trace, SpanStatusCode } from '@opentelemetry/api';

const tracer = trace.getTracer('orders-service');

async function processOrder(orderId: string) {
  return tracer.startActiveSpan('processOrder', async (span) => {
    try {
      span.setAttributes({
        'order.id': orderId,
        'order.type': 'subscription',
      });

      const result = await doWork(orderId);
      span.setStatus({ code: SpanStatusCode.OK });
      return result;
    } catch (error) {
      span.recordException(error as Error);
      span.setStatus({ code: SpanStatusCode.ERROR, message: (error as Error).message });
      throw error;
    } finally {
      span.end();
    }
  });
}
```

## Correlación de Logs, Métricas y Trazas

La observabilidad real no es tener los tres pilares por separado: es poder saltar entre ellos cuando investigas un incidente.

**El Trace ID como hilo conductor:**
Cuando OpenTelemetry genera un span, produce un `trace_id` único para toda la request. Añadir este ID a todos los logs hace que puedas ir del log al trace con un click.

**Inyectar trace_id en los logs (Node.js con Winston):**
```typescript
import { trace, context } from '@opentelemetry/api';
import winston from 'winston';

const otelFormat = winston.format((info) => {
  const span = trace.getActiveSpan();
  if (span) {
    const ctx = span.spanContext();
    info['trace_id'] = ctx.traceId;
    info['span_id'] = ctx.spanId;
  }
  return info;
});

const logger = winston.createLogger({
  format: winston.format.combine(
    otelFormat(),
    winston.format.json()
  ),
  transports: [new winston.transports.Console()],
});
```

## OpenTelemetry Collector: Configuración de Producción

**otel-collector-config.yaml:**
```yaml
receivers:
  otlp:
    protocols:
      grpc:
        endpoint: 0.0.0.0:4317
      http:
        endpoint: 0.0.0.0:4318

processors:
  batch:
    timeout: 5s
    send_batch_size: 1024
  memory_limiter:
    check_interval: 1s
    limit_mib: 512
  resource:
    attributes:
      - key: environment
        value: production
        action: upsert

exporters:
  otlp/jaeger:
    endpoint: jaeger:4317
    tls:
      insecure: true
  prometheusremotewrite:
    endpoint: "http://prometheus:9090/api/v1/write"
  loki:
    endpoint: "http://loki:3100/loki/api/v1/push"

service:
  pipelines:
    traces:
      receivers: [otlp]
      processors: [memory_limiter, batch, resource]
      exporters: [otlp/jaeger]
    metrics:
      receivers: [otlp]
      processors: [memory_limiter, batch]
      exporters: [prometheusremotewrite]
    logs:
      receivers: [otlp]
      processors: [memory_limiter, batch]
      exporters: [loki]
```

## SLOs, SLAs y Alertas Basadas en Señales

**Los 4 Golden Signals (Google SRE):**
| Signal | Qué mide | Alerta típica |
|---|---|---|
| Latency | Tiempo de respuesta de las requests | P99 > 500ms durante 5 min |
| Traffic | Volumen de requests por segundo (RPS) | Anomalía > 3σ del baseline |
| Errors | % de requests que fallan | Error rate > 1% durante 2 min |
| Saturation | Uso de recursos (CPU, memoria, disco, conexiones) | CPU > 85% durante 10 min |

**SLO de ejemplo para un servicio de API:**
- Disponibilidad: 99.9% de las requests exitosas en ventana de 30 días
- Latencia: 95% de las requests en < 200ms; 99% en < 500ms
- Error budget: 0.1% = 43 minutos de downtime al mes

## Stack de Observabilidad Open Source (sin costes de licencia)

| Componente | Herramienta | Qué hace |
|---|---|---|
| Trazas | Jaeger o Tempo (Grafana) | Almacena y visualiza distributed traces |
| Métricas | Prometheus + Grafana | Almacena métricas y dashboards |
| Logs | Loki + Grafana | Almacena logs con contexto |
| Todo en uno (UI) | Grafana | Un solo pane of glass para los 3 pilares |
| Errores | Sentry (free tier generoso) | Captura y agrupa excepciones |
| Collector | OTel Collector | Recibe de todos los servicios y envía a los backends |

## Entregables

Con el contexto que me des, produce:
1. Diagrama de arquitectura de observabilidad para tu stack (en texto o mermaid)
2. Configuración completa de OTel SDK para tu lenguaje principal
3. otel-collector-config.yaml adaptado a tu infraestructura
4. Dashboard de Grafana (descripción de paneles) con los 4 Golden Signals
5. Runbook de diagnóstico de incidente: los pasos para investigar una degradación de latencia usando trazas, métricas y logs correlacionados
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar observabilidad completa en microservicios con OpenTelemetry: trazas distribuidas, métricas, logs correlacionados y alertas basadas en SLOs',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de navegación compleja — mega-menús, árboles de información y arquitecturas de productos grandes',
                'description'      => 'Aprende a diseñar sistemas de navegación para productos grandes: mega-menús, árboles de navegación profundos, breadcrumbs y arquitectura de información para aplicaciones con cientos de secciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de información y diseñador UX especializado en aplicaciones con alto nivel de complejidad navegacional. Necesito diseñar o rediseñar el sistema de navegación de un producto con muchas secciones, contenidos o funcionalidades.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántas secciones o categorías principales tiene el producto y cuántos niveles de profundidad?
2. ¿Cuál es el tipo de usuario principal? (experto que conoce el producto, usuario nuevo, múltiples perfiles)
3. ¿Cuál es el dispositivo principal? (web desktop, mobile, ambos)
4. ¿Tienes datos de analytics sobre dónde se pierden los usuarios actualmente?
5. ¿Cuál es la acción principal que el usuario necesita hacer en el producto? (la más frecuente)

## Los Principios de Arquitectura de Información

**1. La regla de los 7±2 (Miller's Law)**
Los humanos podemos retener entre 5 y 9 elementos en la memoria a corto plazo. Una navegación con más de 7 opciones en un nivel empieza a ser cognitivamente costosa.

**Implicación práctica:**
- Máximo 7 ítems en el menú principal
- Si tienes más categorías, agrúpalas con criterio
- Los mega-menús son la excepción: permiten más ítems si están bien organizados visualmente

**2. El principio de 3 clics (y por qué es un mito)**
El usuario no se va a los 3 clics: se va cuando no encuentra lo que busca o cuando se siente perdido. El número de clics importa menos que la claridad de cada paso.

**Lo que sí importa:**
- El usuario debe saber siempre dónde está
- El usuario debe poder predecir qué hay detrás de cada enlace
- El usuario debe poder volver atrás sin esfuerzo

**3. Taxonomía basada en los modelos mentales del usuario**
Organiza la navegación por cómo el usuario piensa en sus tareas, no por cómo está estructurada la base de datos o el equipo de producto.

Herramienta: Card Sorting (abierto para descubrir categorías, cerrado para validar la propuesta)

## Los Patrones de Navegación y Cuándo Usarlos

| Patrón | Descripción | Cuándo usar |
|---|---|---|
| Top navigation bar | Menú horizontal en la parte superior | Apps desktop con 5-8 secciones principales |
| Side navigation (sidebar) | Menú vertical a la izquierda | Apps de productividad, dashboards, muchas secciones |
| Tab navigation (mobile) | Barra inferior con 4-5 iconos | Apps mobile con 4-5 destinos principales |
| Mega-menú | Dropdown con múltiples columnas y categorías | E-commerce, portales con muchas subcategorías |
| Breadcrumbs | Ruta de migas de pan | Estructuras de más de 2 niveles de profundidad |
| Hamburger menu | Icono ≡ que despliega el menú | Mobile, secciones secundarias en desktop |
| Progressive navigation | El menú se adapta al contexto del usuario | Apps con múltiples flujos muy diferentes |

## Diseño de Mega-Menús: Las Reglas de Oro

El mega-menú es la solución para catálogos o productos con muchas subcategorías.

**Cuándo justifica un mega-menú:**
- Tienes más de 7 categorías principales con subcategorías significativas
- El usuario necesita saltar directamente a subcategorías sin pasar por la categoría padre
- Hay contenido visual (imágenes de categorías, iconos) que ayuda a orientar

**Reglas de diseño del mega-menú:**

| Regla | Descripción |
|---|---|
| Máximo 4 columnas | Más de 4 columnas sobrepasa el ancho y se vuelve ilegible |
| Jerarquía visual clara | Títulos de columna en bold/mayúsculas, ítems en regular |
| Agrupación semántica | Los ítems de cada columna tienen relación conceptual clara |
| Featured content opcional | Una sección visual (imagen + CTA) puede anclar el mega-menú |
| Cierre claro | El mega-menú se cierra con click fuera o con escape |
| No anidación dentro del mega-menú | El mega-menú es el máximo nivel de dropdown; dentro no hay más dropdowns |

**Ejemplo de mega-menú bien estructurado (para una plataforma de cursos):**
```
MARKETING        TECNOLOGÍA        DISEÑO           NEGOCIOS
─────────────    ──────────────    ─────────────    ──────────────
Marketing Digital  Programación Web  UX/UI Design     Emprendimiento
SEO y SEM          Data Science      Motion Design     Finanzas
Email Marketing    Ciberseguridad    Ilustración       Liderazgo
Redes Sociales     DevOps            Fotografía        Ventas
Content Marketing  Inteligencia IA   Video y Edición   RRHH

[Banner: Cursos nuevos esta semana →]
```

## Breadcrumbs: Diseño y Buenas Prácticas

Los breadcrumbs son el GPS de la navegación. Imprescindibles en estructuras de más de 2 niveles.

**Tipos de breadcrumbs:**
| Tipo | Ejemplo | Cuándo |
|---|---|---|
| Basado en ubicación | Inicio > Marketing > Email Marketing | Estructura jerárquica fija |
| Basado en el camino | Inicio > Búsqueda > Resultado > Detalle | Flujos de usuario no lineales |
| Basado en atributo | Cursos > Online > Gratis > Marketing | Filtros de catálogo |

**Reglas de diseño:**
- El último ítem (página actual) no debe ser un enlace
- Usar el separador > o / de forma consistente
- Incluir siempre "Inicio" como primer nivel
- En mobile, colapsar a "< [Nivel anterior]" para ahorrar espacio

## Navegación en Mobile: Priorización Radical

El mobile no permite la misma riqueza navegacional que el desktop. Reglas:

| Desktop | Mobile |
|---|---|
| Mega-menú | Tab bar (4-5 destinos) + hamburger para el resto |
| Sidebar de 20 ítems | Lista colapsable en el hamburger + búsqueda |
| Breadcrumbs completas | Solo el nivel inmediatamente superior ("< Volver") |
| Hover states | Todo debe funcionar con tap (sin hover) |

## Tree Testing: Valida Tu Arquitectura Antes de Diseñar

El Tree Testing es la prueba más eficiente para validar la navegación antes de construirla.

**Cómo funciona:**
1. Crea el árbol de navegación en texto (sin diseño)
2. Pide a 20-30 usuarios que encuentren 10 ítems específicos navegando por el árbol
3. Mide: % de éxito, camino tomado, dónde se pierden
4. Herramientas: Optimal Workshop (TreeJack), Maze

**Métricas clave del tree test:**
- Task success rate > 80%: la estructura es buena
- Task success rate 60-80%: hay problemas puntuales que corregir
- Task success rate < 60%: replantear la arquitectura

## Entregables

Con el contexto que me des, produce:
1. Propuesta de arquitectura de información (árbol de navegación completo)
2. Diseño del sistema de navegación principal (descripción de componentes y comportamiento)
3. Especificaciones del mega-menú (si aplica): columnas, contenido, comportamiento
4. Sistema de breadcrumbs: tipo, truncación en mobile, casos especiales
5. Plan de tree testing: las 10 tareas para validar la arquitectura con usuarios reales
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el sistema de navegación completo para un producto con muchas secciones: mega-menús, árbol de navegación y arquitectura de información validada',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de la objeción de precio — defiende tu precio sin descuento',
                'description'      => 'Aprende el mindset y el script para gestionar la objeción de precio en ventas B2B de alto valor: cómo reencuadrar el precio como inversión y defender el valor sin ceder en el descuento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en ventas consultivas B2B donde el precio es frecuentemente cuestionado. Necesito dominar el manejo de la objeción de precio para cerrar deals sin hacer descuentos que erosionen el margen y envíen el mensaje equivocado al mercado.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el precio del producto o servicio y cuál es el ACV típico?
2. ¿En qué momento del proceso de venta aparece la objeción de precio? (primera reunión, tras la propuesta, en negociación final)
3. ¿Cuál es el argumento de precio más frecuente que escuchas? ("Es caro", "El competidor X cuesta la mitad", "No tenemos presupuesto")
4. ¿Sueles hacer descuentos y con qué frecuencia? ¿Cuánto erosiona el margen?
5. ¿Tienes calculado el ROI de tu solución para el cliente?

## El Error Fundamental: Reaccionar al Precio en Lugar del Valor

Cuando el cliente dice "es caro", la mayoría de los vendedores cometen uno de estos errores:
1. Se ponen a la defensiva y justifican el precio
2. Hacen un descuento inmediato (destruye el valor percibido)
3. Hablan de características en lugar de valor de negocio
4. Aceptan la premisa del cliente (que el precio es el problema)

**La verdad sobre la objeción de precio:**
"Es caro" casi nunca significa "el precio absoluto es demasiado alto". Casi siempre significa una de estas tres cosas:
1. "No veo el valor suficiente para justificar ese coste"
2. "No confío en que entregues lo que prometes"
3. "No tengo ese presupuesto aprobado y necesito justificarlo internamente"

Cada una requiere una respuesta diferente.

## El Framework RAIN para Manejar Objeciones

**R — Reframe (Reencuadra)**
Antes de responder, valida la objeción y reencuádrala como una pregunta de valor, no de precio:
"Entiendo. Cuando dices que es caro, ¿me puedes decir más? ¿Lo estás comparando con otra solución o con no hacer nada?"

**A — Ask (Pregunta)**
Haz preguntas que te ayuden a entender el fondo de la objeción:
- "¿Cuál es el presupuesto con el que trabajáis para este tipo de solución?"
- "¿Qué tendría que incluir para que el precio te pareciera justo?"
- "Si el precio no fuera el factor, ¿seguiríais adelante?"

**I — Illustrate (Ilustra con datos de ROI)**
Devuelve el foco al valor. Calcula el ROI con sus propios números:
"Con vuestro volumen actual, si nuestra solución reduce el tiempo de [proceso] en un 40%, eso es [X horas/mes × coste hora] = [Y€/año]. El coste de nuestra solución es [Z€/año]. ¿Eso te parece caro?"

**N — Negotiate (Negocia desde el valor, no desde el descuento)**
Si hay que ceder, cede en el scope, no en el precio:
"Si el presupuesto es [X], podemos empezar con [módulo más pequeño] y escalar en Q2."

## Los 5 Tipos de Objeción de Precio y Sus Respuestas

### 1. "Es caro"

**Respuesta:**
"Entiendo que el precio importa. ¿Puedo preguntarte con qué lo estás comparando? Si es con no hacer nada, el coste real es [coste del problema sin resolver]. Si es con un competidor, me gustaría entender qué incluye esa propuesta para comparar con precisión."

### 2. "El competidor X cuesta la mitad"

**Respuesta:**
"Es un dato relevante. Si me compartes más detalle de esa propuesta, podemos revisar juntos qué cubre y qué no. En nuestra experiencia, la diferencia de precio entre nosotros y [competidor] suele reflejar [diferencia concreta: soporte incluido, implementación, SLA, funcionalidades]. ¿Hay alguna razón por la que estás hablando con nosotros además de con ellos?"

### 3. "No tenemos presupuesto"

**Respuesta:**
"Entiendo. Cuando dices que no tenéis presupuesto, ¿significa que no hay partida para esto en absoluto, o que la partida existe pero necesitáis justificarlo internamente? Si es lo segundo, puedo preparar el análisis de ROI que necesitas para presentar internamente. ¿Quién más necesita ver los números?"

### 4. "Dame un descuento"

**Respuesta:**
"Me gustaría poder ayudarte con eso. Nuestros precios están calculados para poder darte el nivel de servicio que necesitas. Si hay una restricción de presupuesto real, podemos ver si tiene sentido ajustar el alcance para que quede dentro de tu presupuesto. ¿Qué es imprescindible para ti y qué podría quedarse para una segunda fase?"

### 5. "Necesito que bajes el precio para cerrar hoy"

**Respuesta:**
"Aprecio la urgencia. Pero si bajo el precio sin cambiar el scope, te envío el mensaje de que mi precio anterior no era el real. Lo que sí puedo hacer es [condición alternativa: pago anual con descuento, inicio más rápido, añadir un bonus sin coste para el cierre]. ¿Alguna de esas opciones os ayuda?"

## La Calculadora de ROI: Tu Mejor Herramienta

Si no puedes cuantificar el valor para el cliente, siempre vas a perder la batalla del precio.

**Plantilla de cálculo de ROI:**

| Problema que resuelves | Cuantificación | Datos necesarios |
|---|---|---|
| Ahorro de tiempo | Horas ahorradas/mes × coste hora del empleado | Horas actuales del proceso, nómina media |
| Reducción de errores | Coste por error × reducción del % de errores | Errores/mes actuales, coste por error |
| Incremento de ingresos | % incremento × ingresos actuales | Ingresos actuales, conversión actual |
| Reducción de churn | Clientes retenidos × ACV medio | Churn rate actual, ACV del cliente |
| Reducción de tiempo de ciclo | Aceleración × deals × margen | Ciclo de venta actual, nº de deals |

**Una vez calculado:**
"Según los datos que me has dado, nuestra solución genera [X€] de valor al año. El precio es [Y€]. El ROI es [X/Y × 100]% en el primer año, y se paga en [meses]."

## Cuándo y Cómo Hacer Un Descuento Si Es Necesario

A veces hay que hacer descuentos. Hazlo bien:

| Condición para el descuento | Por qué importa |
|---|---|
| A cambio de algo (pago anual, caso de estudio, referencia) | El descuento debe tener un coste para el cliente, no ser gratis |
| Con fecha de expiración real | La urgencia debe ser auténtica |
| Sin cambiar el precio de lista | El descuento es especial, no el precio nuevo |
| Solo una vez por deal | Si el cliente sabe que siempre bajas, siempre pedirá descuento |

## Entregables

Con el contexto que me des, produce:
1. Calculadora de ROI personalizada para tu solución con los inputs específicos de tu mercado
2. Guión completo para las 5 objeciones de precio más frecuentes en tu sector
3. Política de descuentos interna: cuándo, cuánto y qué condiciones
4. Ejercicio de role-play: simula una conversación de precio con un cliente típico para que practiquemos
5. Email de seguimiento post-propuesta cuando el cliente pide un descuento por email
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Dominar el manejo de la objeción de precio en ventas B2B para defender el valor y cerrar deals sin hacer descuentos innecesarios',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la beta — diseña, ejecuta y aprende de tu programa beta',
                'description'      => 'Aprende a diseñar y ejecutar un programa beta que reduce el riesgo del lanzamiento: cómo seleccionar beta users, estructurar el feedback y decidir cuándo salir de beta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con experiencia en lanzamientos de producto y programas beta en empresas SaaS B2B y B2C. Necesito ayuda para diseñar, ejecutar y extraer aprendizajes de un programa beta que reduzca el riesgo de nuestro próximo lanzamiento.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué producto o feature vas a lanzar en beta?
2. ¿Cuántos usuarios o empresas piensas incluir en el beta?
3. ¿Cuál es el objetivo principal del beta: validar el producto market fit, encontrar bugs, o medir la adopción?
4. ¿Cuánto tiempo tienes para el beta antes de la fecha de lanzamiento público?
5. ¿Es un beta interno (empleados), de clientes existentes, o de nuevos usuarios?

## Por Qué Los Programas Beta Fallan

Un beta mal diseñado no da información útil. Los fallos más comunes:

| Error | Consecuencia |
|---|---|
| Seleccionar solo a fans incondicionales | Feedback sesgado positivo, problemas reales no detectados |
| Sin estructura de feedback | Los usuarios dan opiniones pero no datos accionables |
| Beta demasiado largo | Los usuarios pierden el interés, el equipo pierde el foco |
| Sin criterio de salida de beta | El producto se queda en beta para siempre sin comprometerse |
| Sin loop de cierre con los beta users | Los usuarios no saben si su feedback fue escuchado |

## El Diseño del Programa Beta

### Paso 1: Define el Objetivo de Aprendizaje

Un beta debe responder una pregunta concreta, no "ver cómo va":

| Tipo de beta | Pregunta a responder | Métrica de éxito |
|---|---|---|
| Alpha / Beta técnico | ¿Funciona sin bugs críticos? | 0 bugs P0, < 5 bugs P1 |
| Beta de usabilidad | ¿Pueden los usuarios completar la tarea clave sin ayuda? | Task completion rate > 80% |
| Beta de adopción | ¿Repiten el uso sin que se los pidamos? | DAU/WAU ratio > 40% |
| Beta de valor | ¿El usuario obtiene el valor prometido? | % que alcanza el "aha moment" en < 7 días |
| Beta de precio | ¿Están dispuestos a pagar por esto? | % que confirma intención de pago real |

### Paso 2: Selección de Beta Users

**El perfil del beta user ideal:**
- Tiene el problema que resuelves con suficiente intensidad
- Tiene tiempo y motivación para dar feedback de calidad
- Es representativo del segmento al que te diriges (no solo early adopters tech)
- No es un fan ciego: puede criticar con criterio

**Diversidad de perfiles en el beta:**
| Perfil | % del beta group | Por qué |
|---|---|---|
| Power users con el problema agudo | 40% | Encuentran los límites del producto |
| Usuarios "representativos" del ICP | 40% | Representan al mercado objetivo real |
| Usuarios técnicos críticos | 10% | Detectan problemas que otros no articulan |
| Usuarios no técnicos / novatos | 10% | Validan la usabilidad para el usuario menos experto |

**Número recomendado de beta users:**
| Objetivo del beta | Número |
|---|---|
| Bugs y funcionalidad | 5-15 usuarios |
| Usabilidad | 5-8 usuarios (el punto de saturación de hallazgos) |
| Adopción y retención | 50-200 usuarios |
| Validación de precio | 20-50 usuarios |

### Paso 3: La Estructura de Feedback

Un beta sin estructura de feedback produce ruido, no información.

**Mecanismos de feedback en el producto:**
- Widget de feedback in-app (Canny, UserVoice, o propio)
- "¿Qué tan fácil fue hacer X?" al completar la tarea clave (Single Ease Question, escala 1-7)
- NPS a los 7 días de acceso

**Cadencia de sesiones de feedback:**
| Momento | Tipo | Duración |
|---|---|---|
| Semana 1 | Sesión de onboarding + primera impresión (individual) | 30 min |
| Semana 2-3 | Sesión de uso avanzado (individual o grupo pequeño) | 45 min |
| Fin del beta | Retrospectiva (grupo o survey) | 60 min o 10 min encuesta |

**Las preguntas clave en las sesiones de beta:**
1. "Sin que yo te explique nada, ¿qué intentarías hacer primero?"
2. "¿Hubo algún momento en el que te bloqueaste o te confundiste?"
3. "¿Qué esperabas que pasara cuando hiciste X?"
4. "¿Si tuvieras que describirle esto a un colega, qué le dirías?"
5. "¿Volverías a usarlo esta semana? ¿Por qué sí o no?"
6. "¿Qué es lo que más te ha gustado? ¿Y lo que más mejorarías?"

### Paso 4: Clasificación del Feedback del Beta

No todo el feedback merece la misma atención:

| Clasificación | Definición | Acción |
|---|---|---|
| Bug crítico (P0) | El producto no funciona para la tarea principal | Fix inmediato antes del lanzamiento |
| Bug importante (P1) | Problema que afecta la usabilidad pero tiene workaround | Fix antes del lanzamiento si hay tiempo |
| Problema de UX | Los usuarios no entienden cómo funciona algo | Analizar patrón, rediseñar si es frecuente |
| Petición de feature | "Me gustaría que también tuviera X" | Registrar en el backlog, no bloquea el lanzamiento |
| Opinión/preferencia | "Me gusta más el azul" | Nota, no bloquea nada |

**El test de las 3 fuentes:**
Un problema de UX o un bug solo entra en el roadmap pre-lanzamiento si lo reportan 3 o más usuarios de forma independiente.

### Paso 5: Criterios de Salida de Beta

Define antes de empezar cuándo es suficiente para lanzar:

| Criterio | Umbral de salida |
|---|---|
| Bugs P0 | 0 bugs P0 abiertos |
| Bugs P1 | ≤ 3 bugs P1 abiertos con workaround documentado |
| Task completion rate | > 75% en la tarea crítica |
| Retención semana 2 | > 40% de beta users vuelven en la semana 2 sin recordatorio |
| NPS del beta | > 30 |
| Beta users que recomendarían | > 70% |

## El Cierre del Beta: El Paso Olvidado

Cuando termina el beta, cierra el ciclo con los usuarios:

1. Email personal a cada beta user: "Gracias por tu participación. Hemos hecho X cambios basados en tu feedback, incluyendo [los más impactantes]. Tu contribución está en el producto."
2. Oferta de acceso anticipado al producto lanzado (a precio especial o antes que nadie)
3. Invitación a ser caso de éxito o referencia si el feedback fue positivo

## Entregables

Con el contexto que me des, produce:
1. Diseño del programa beta: objetivo, perfil de usuarios, número y criterios de selección
2. Guión de la sesión de onboarding y primera sesión de feedback (1:1 con beta user)
3. Survey de beta de 10 preguntas (combinación cuantitativa y cualitativa)
4. Criterios de salida de beta específicos para tu producto
5. Email de cierre del beta y transición al lanzamiento público
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y ejecutar un programa beta estructurado que reduzca el riesgo del lanzamiento con feedback accionable de usuarios reales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de la diversidad, equidad e inclusión (DEI) — más allá del cumplimiento',
                'description'      => 'Aprende a construir una estrategia de DEI que va más allá de las cuotas y el cumplimiento: cómo crear una organización donde todos puedan prosperar, con métricas reales de impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Diversidad, Equidad e Inclusión (DEI) con experiencia en el diseño e implementación de programas DEI en empresas medianas y grandes. Necesito ayuda para diseñar una estrategia de DEI que tenga impacto real en la cultura y los resultados de la empresa, más allá de las declaraciones y las cuotas.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿En qué etapa está la empresa en su trayectoria DEI? (ningún programa, inicio, intermedio, avanzado)
2. ¿Cuál es el tamaño de la empresa y cuáles son las principales brechas de diversidad que observas? (género, etnia, edad, diversidad funcional, LGBTQ+)
3. ¿Hay un responsable o equipo DEI, o es una función de RRHH entre otras?
4. ¿Cuál es el apoyo del liderazgo ejecutivo? (comprometido activamente, neutro, resistente)
5. ¿Cuáles son los principales riesgos o problemas que motivaron este trabajo? (retención de talento, reputación, requisito de cliente, convicción interna)

## El Caso de Negocio de la DEI

Antes de lanzar cualquier iniciativa, el liderazgo necesita entender por qué importa más allá de la ética:

**Datos de impacto en negocio:**
- Las empresas en el cuartil superior de diversidad de género tienen un 25% más de probabilidad de rentabilidad por encima de la media de su sector (McKinsey, 2020)
- Los equipos cognitivamente diversos resuelven problemas complejos un 87% más rápido (Harvard Business Review)
- Las empresas con programas DEI maduros tienen 2.4x más probabilidad de superar sus objetivos financieros (Bersin by Deloitte)
- El talento joven considera los compromisos DEI de la empresa como un factor clave en la decisión de empleo

**Los 3 motores del ROI de DEI:**

| Motor | Mecanismo |
|---|---|
| Atracción de talento | Marca empleadora más atractiva para perfiles de alta demanda |
| Retención | Empleados que se sienten incluidos tienen 3x más probabilidad de quedarse |
| Innovación | La diversidad cognitiva produce soluciones más creativas y robustas |

## El Marco de los 3 Niveles: Diversidad, Equidad e Inclusión

Muchas empresas confunden los tres conceptos y atacan solo uno:

| Nivel | Qué es | Cómo se mide | Iniciativa tipo |
|---|---|---|---|
| **Diversidad** | Representación: ¿hay personas diferentes en la organización? | % por género, etnia, edad en cada nivel | Reclutamiento inclusivo, alianzas con universidades diversas |
| **Equidad** | Justicia: ¿tienen las mismas oportunidades de crecer? | Brecha salarial, tasa de promoción por demografía | Revisión de compensación, eliminación de sesgos en evaluación |
| **Inclusión** | Pertenencia: ¿se sienten valorados y pueden contribuir plenamente? | Inclusion Index (encuesta), tasa de retención por demografía | Liderazgo inclusivo, Employee Resource Groups, psicología de seguridad |

## Diagnóstico DEI: El Audit de Partida

Antes de lanzar iniciativas, necesitas datos:

**Análisis cuantitativo:**
- Composición de la plantilla por nivel jerárquico y demografía (género mínimo, etnia si legalmente posible)
- Brecha salarial ajustada y no ajustada por género (y otras dimensiones si tienes datos)
- Tasa de promoción por demografía
- Tasa de abandono por demografía

**Análisis cualitativo:**
- Encuesta de inclusión (Inclusion Index): mide si los empleados se sienten valorados, escuchados y capaces de contribuir
- Focus groups por colectivo (mujeres en puestos técnicos, personas de colectivos subrepresentados)
- Revisión del proceso de selección y evaluación en busca de sesgos sistémicos

**Preguntas clave de la encuesta de inclusión:**
1. Siento que mi opinión es tenida en cuenta en las decisiones importantes (1-10)
2. En mi equipo, las personas con diferentes perspectivas son bienvenidas (1-10)
3. Creo que tengo las mismas oportunidades de crecimiento que mis compañeros (1-10)
4. Me siento cómodo/a siendo auténtico/a en el trabajo (1-10)
5. Siento que pertenezco a esta organización (1-10)

## Las 5 Áreas de Intervención

**1. Reclutamiento inclusivo**
- Eliminar el lenguaje sesgado en las ofertas de empleo (herramientas: Textio, Gender Decoder)
- Establecer paneles de entrevista diversos
- Usar estructuras de entrevistas estandarizadas con rubrics para reducir sesgos de afinidad
- Ampliar el pool de candidatos con alianzas con organizaciones de colectivos subrepresentados

**2. Equidad en compensación**
- Hacer una auditoría salarial anual comparando compensación igual por trabajo de igual valor
- Publicar bandas salariales internas (mayor equidad, menor negociación basada en historial)
- Separar la evaluación del desempeño de la negociación salarial

**3. Desarrollo y promoción equitativos**
- Criterios de promoción explícitos y transparentes (eliminar la "meritocracia" subjetiva)
- Programas de sponsorship (no solo mentoring): alguien con poder que aboga activamente por tu carrera
- Calibración de evaluaciones: el sesgo más común es evaluar a las mujeres por resultados pasados y a los hombres por potencial futuro

**4. Cultura e inclusión cotidiana**
- Formación en sesgo inconsciente (como punto de partida, no como solución única)
- Normas de reunión inclusivas: ceder el turno de palabra, dar crédito, no ignorar ideas
- Employee Resource Groups (ERGs): grupos de afinidad voluntarios con presupuesto y vínculo con el negocio
- Gestión inclusiva: los managers son el factor más importante en la experiencia de inclusión

**5. Liderazgo responsable**
- Objetivos DEI vinculados a la evaluación de desempeño de los directivos
- Reporting DEI transparente: publicar los datos de diversidad internamente y (si la empresa lo decide) externamente
- CEO y C-Suite como aliados visibles: sus comportamientos son el modelo cultural

## Métricas de DEI: Más Allá de los Porcentajes de Género

| Métrica | Qué mide | Cómo recogerla |
|---|---|---|
| Representation index | % de grupos subrepresentados en cada nivel vs. mercado | HRIS + benchmarks de sector |
| Pay equity ratio | Diferencia salarial ajustada por rol y nivel | Auditoría anual de compensación |
| Promotion parity | Tasa de promoción por demografía | HRIS |
| Inclusion score | Media del Inclusion Index por equipo | Encuesta semestral |
| Voluntary attrition by demographic | % de bajas voluntarias por colectivo | HRIS |
| Internal mobility parity | % de candidaturas internas exitosas por demografía | ATS + HRIS |

## Entregables

Con el contexto que me des, produce:
1. Diagnóstico DEI: las 5 preguntas de auditoría cuantitativa y cualitativa prioritarias para tu empresa
2. Plan de DEI a 12 meses con 3 iniciativas de alto impacto, responsables y métricas
3. Encuesta de inclusión de 10 preguntas lista para lanzar a la plantilla
4. Guía de comunicación interna sobre la estrategia DEI (para que el CEO la use en el all-hands)
5. Checklist de reclutamiento inclusivo para los hiring managers
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una estrategia DEI con impacto real: diagnóstico, iniciativas priorizadas, métricas y plan de comunicación interna',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de la internacionalización — estructura fiscal y riesgo cambiario',
                'description'      => 'Aprende a estructurar la expansión internacional de tu empresa minimizando el riesgo fiscal y cambiario: qué vehículo jurídico usar, cómo gestionar los precios de transferencia y el riesgo FX.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en expansión internacional de empresas medianas. Necesito ayuda para estructurar la internacionalización de mi empresa de forma que minimice el riesgo fiscal, legal y cambiario.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿En qué países o regiones quieres expandirte y qué actividad realizarás allí? (ventas, operaciones, desarrollo, mixto)
2. ¿Cuál es la facturación actual y la esperada en los nuevos mercados en el primer año?
3. ¿Cuál es la moneda de referencia de tu empresa y cuáles serás las monedas de los nuevos mercados?
4. ¿Tienes ya actividad internacional o empiezas desde cero?
5. ¿Cuál es el horizonte temporal de la expansión? (prueba de 6-12 meses vs. compromiso a largo plazo)

## Las 4 Opciones de Estructura para la Expansión Internacional

| Estructura | Descripción | Cuándo usar | Complejidad |
|---|---|---|---|
| Exportación directa desde España | Vendes desde la entidad española a clientes internacionales | Prueba inicial, volumen bajo | Baja |
| Representante o agente local | Contrato con una persona/empresa local que vende por ti | Mercados donde necesitas presencia local sin entidad | Baja-Media |
| Sucursal (Branch) | Extensión de la empresa española sin personalidad jurídica propia | Actividad permanente, responsabilidad de la matriz | Media |
| Filial (Subsidiary) | Sociedad de capital independiente en el país destino | Presencia a largo plazo, protección de responsabilidad | Alta |

**Cuándo pasar de exportación a filial:**
- Superas 1-2M€ de facturación anual en el mercado
- Necesitas contratar empleados locales
- El cliente requiere una entidad local para el contrato
- Quieres proteger la propiedad intelectual o los activos en el país

## Los Riesgos Fiscales de la Internacionalización

### 1. Establecimiento Permanente (EP)

El mayor riesgo fiscal en la expansión internacional: si la autoridad fiscal del país extranjero considera que tienes un "establecimiento permanente" allí, deberás tributar en ese país sobre los beneficios atribuibles a esa actividad.

**¿Cuándo se genera un EP?**
| Situación | Riesgo de EP |
|---|---|
| Tienes un empleado en el país extranjero que habitualmente cierra contratos | Alto |
| Tienes unas oficinas fijas en el país (aunque sea coworking) | Medio |
| Tienes un agente independiente que solo trabaja para ti | Medio |
| Solo vendes online desde España | Bajo |
| Participas en ferias y eventos esporádicamente | Bajo |

**Consecuencia si se determina EP:** El país extranjero puede exigir tributar en sus normas locales sobre los beneficios del EP + posibles sanciones por no haberlo declarado desde el inicio.

### 2. Precios de Transferencia

Cuando hay transacciones entre entidades relacionadas del mismo grupo (matriz española y filial extranjera), Hacienda española y la autoridad fiscal extranjera exigen que el precio sea el de mercado (arm's length principle).

**Transacciones que requieren documentación:**
- Servicios intragrupo (la filial paga a la matriz por servicios de administración, IT, marketing)
- Licencias de propiedad intelectual (la filial paga royalties por usar la marca o tecnología)
- Préstamos intragrupo
- Ventas de producto o servicio entre entidades del grupo

**Documentación requerida (OCDE y norma española):**
- Masterfile: descripción global del grupo y su política de precios de transferencia
- Local file: análisis específico de las transacciones con la entidad española
- Country-by-Country Report (CbCR): solo obligatorio si la facturación del grupo supera 750M€

### 3. Retenciones en Origen (Withholding Tax)

Cuando una filial paga dividendos, intereses o royalties a la matriz española, el país de la filial puede retener un porcentaje antes de transferir el dinero.

**Cómo reducirlo:**
- Los Convenios de Doble Imposición (CDIs) suscritos por España reducen la retención máxima
- España tiene CDIs con más de 100 países
- Dentro de la UE, la Directiva Matriz-Filial elimina la retención en dividendos si la participación es ≥ 10% y se mantiene 1 año

## Gestión del Riesgo Cambiario (FX Risk)

Si facturas en divisas extranjeras (USD, GBP, MXN, BRL, etc.) y tus costes son en euros, tienes exposición al tipo de cambio.

**Los 3 tipos de riesgo cambiario:**

| Tipo | Qué es | Ejemplo |
|---|---|---|
| Riesgo de transacción | Variación del tipo de cambio entre la factura y el cobro | Facturas en USD cobradas a 90 días |
| Riesgo de conversión | Variación al consolidar estados financieros de filiales en moneda extranjera | Filial en México (MXN) que consolida en EUR |
| Riesgo económico | Impacto en la competitividad por variaciones estructurales del tipo de cambio | Costes en EUR, competidores con costes en USD |

**Herramientas de cobertura cambiaria:**

| Instrumento | Descripción | Para quién |
|---|---|---|
| Forward (compra/venta a plazo) | Fija hoy el tipo de cambio para una transacción futura | Empresa con flujos de cobro/pago en divisa predecibles |
| Opción de divisa | Derecho (no obligación) de comprar/vender a un tipo prefijado | Cuando quieres protección pero sin renunciar a beneficiarte de movimientos favorables |
| Cuenta en divisa | Cobrar en USD y pagar proveedores en USD sin convertir | Si tienes ingresos y gastos en la misma divisa |
| Natural hedging | Generar ingresos y gastos en la misma moneda | Contratar en el país destino reduce el riesgo |

**Política de cobertura cambiaria:**
La mayoría de empresas medianas no especulan con divisas. La política recomendada:
- Identifica la exposición neta (ingresos en divisa - gastos en divisa = exposición real)
- Cubre entre el 50-80% de la exposición de los próximos 6-12 meses con forwards
- Revisa la política trimestralmente

## Estructura Óptima: Holding + Filiales Operativas

Para expansión a múltiples países, considera una estructura holding:

```
HOLDING (España o Países Bajos o Irlanda)
    │
    ├── Filial operativa España
    ├── Filial operativa UK
    ├── Filial operativa México
    └── Filial operativa EEUU
```

**Ventajas del holding:**
- Centraliza la propiedad intelectual (marca, tecnología) con royalties a las filiales
- Facilita la distribución de dividendos con reducción de retenciones
- Protege los activos en caso de problemas en una filial operativa
- Permite acceder a regímenes fiscales favorables (Países Bajos, Irlanda, Luxemburgo para IP)

## Entregables

Con el contexto que me des, produce:
1. Mapa de riesgos fiscales de tu expansión específica (EP, precios de transferencia, retenciones)
2. Recomendación de estructura jurídica con justificación (exportación, sucursal o filial)
3. Política de cobertura cambiaria: instrumento, % de cobertura y horizonte temporal
4. Checklist de due diligence antes de operar en un nuevo país
5. Modelo de cash flow internacional que separe los flujos en cada divisa y la conversión
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estructurar la expansión internacional de la empresa minimizando el riesgo fiscal (EP, precios de transferencia) y el riesgo cambiario',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contrato de alta dirección — diferencias con el contrato ordinario y la cláusula dorada',
                'description'      => 'Entiende el régimen especial del contrato de alta dirección en España: su diferencia con el contrato laboral ordinario, las indemnizaciones pactadas y cómo negociar la cláusula dorada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista especializado en relaciones laborales de alta dirección en España. Necesito entender el régimen jurídico del contrato de alta dirección: qué lo diferencia del contrato ordinario, cómo se negocia y qué cláusulas son imprescindibles para proteger mis intereses.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Eres el directivo que va a firmar el contrato o eres la empresa que lo va a ofrecer?
2. ¿Cuál es el cargo en cuestión? (CEO, CEO delegado, Director General, Director de Área con poderes)
3. ¿Hay ya un contrato de alta dirección vigente o se negocia uno nuevo?
4. ¿Tienes también la condición de socio o consejero, o solo la relación laboral de alta dirección?
5. ¿Hay alguna situación específica que motiva esta consulta? (nuevo contrato, fusión/adquisición, conflicto, fin de la relación)

## Qué Es el Contrato de Alta Dirección

El contrato de alta dirección está regulado por el Real Decreto 1382/1985 y es un contrato laboral especial, diferente del contrato laboral ordinario regulado por el Estatuto de los Trabajadores.

**¿A quién se aplica?**
Solo a los trabajadores que ejercen poderes inherentes a la titularidad jurídica de la empresa y relativos a los objetivos generales de la empresa, con autonomía y plena responsabilidad.

En la práctica: CEO, Director General, y directivos con poderes generales de representación y decisión sobre la empresa en su conjunto. No aplica a directores de área sin poderes amplios.

## Las Diferencias Clave con el Contrato Ordinario

| Aspecto | Contrato ordinario (ET) | Contrato de alta dirección (RD 1382/1985) |
|---|---|---|
| Normativa aplicable | Estatuto de los Trabajadores | RD 1382/1985 (subsidiariamente, ET y CC) |
| Pacto de no competencia | Máx. 2 años, compensación obligatoria | Sin límite legal, negociable libremente |
| Duración | Indefinido o temporal con límites | Indefinido o determinado, más flexible |
| Extinción por voluntad del empresario | Indemnización legal de 33 días/año (máx. 24 meses) | Indemnización legal de 7 días/año (máx. 6 meses) si no se pacta otra |
| Extinción por dimisión del directivo | No hay preaviso legal mínimo | 3 meses de preaviso (salvo pacto contrario) |
| Desistimiento del directivo ante incumplimiento de la empresa | Extinción con indemnización máx. 60 días/año (máx. 12 meses) | Extinción con indemnización de 7 días/año más lo pactado |
| Convenio colectivo | Aplica | No aplica (salvo que el contrato lo incorpore) |
| Negociación colectiva | Sí | No (negociación individual) |

## La Cláusula Dorada (Golden Parachute)

La indemnización legal en el contrato de alta dirección es muy baja (7 días/año con máximo de 6 meses). Por eso, es imprescindible negociar una cláusula de indemnización pactada superior.

**¿Por qué es crucial para el directivo?**
Sin cláusula pactada, si la empresa prescinde del directivo sin causa, la indemnización puede ser ridícula para alguien con años de carrera en la empresa y un coste de oportunidad elevado.

**¿Por qué puede interesar también a la empresa?**
Ofrecer una cláusula dorada atractiva permite:
- Captar talento directivo de primer nivel que de otro modo no firmaría
- Asegurar la permanencia durante un período mínimo
- Establecer condiciones claras de salida que eviten litigios

**Elementos de la cláusula dorada:**

| Elemento | Descripción | Rango negociable |
|---|---|---|
| Indemnización base | Por desistimiento del empresario sin causa | 1-3 años de retribución total |
| Change of control clause | Mayor indemnización si hay cambio de control (M&A) | 1.5-3x la indemnización base |
| Good leaver / Bad leaver | Distingue entre salida voluntaria, con causa o sin causa | Escalonado según circunstancia |
| Período de devengo | La indemnización crece con el tiempo en la empresa | A menudo lineal o con cliff al año |

**Tributación de la cláusula dorada:**
Las indemnizaciones por extinción del contrato de alta dirección están exentas de IRPF hasta el límite legal (7 días/año × máx. 6 meses). El exceso tributa como renta del trabajo.
Excepción: si hay condición de consejero o administrador, puede no aplicarse la exención (tributación íntegra).

## Otras Cláusulas Esenciales del Contrato de Alta Dirección

**1. Retribución variable (bonus)**
Define claramente:
- KPIs que generan el bonus y su peso (objetivo, supraobjetivo)
- Período de devengo y fecha de pago
- Qué pasa con el bonus si hay extinción antes de que se pague (¿se paga pro-rata?)

**2. Pacto de no competencia post-contractual**
Debe incluir:
- Duración y ámbito geográfico y de actividad (cuanto más amplio, más compensación)
- Compensación económica (sin límite legal en alta dirección, pero debe ser real)
- Consecuencias del incumplimiento

**3. Pacto de permanencia**
Si la empresa invierte en formación del directivo o en una transición costosa, puede pactarse que el directivo permanezca un mínimo. El incumplimiento genera indemnización al directivo a la empresa.

**4. Benefits y retribución en especie**
Plan de pensiones, seguro de vida, vehículo, gastos de representación, seguro médico. Negocia estos como parte del paquete total, no como beneficios post-negociación.

**5. Cláusula de resolución de conflictos**
Define el foro (jurisdicción social ordinaria, arbitraje) y la ley aplicable. En directivos con residencia en el extranjero, esto puede ser complejo.

## El Directivo que También Es Consejero o Administrador

Cuando el directivo tiene también cargo de consejero o administrador, existe la "teoría del vínculo": la relación mercantil como administrador "absorbe" la relación laboral especial, eliminando la protección del RD 1382/1985.

**Consecuencias de la teoría del vínculo:**
- La retribución y la relación se rigen por la normativa mercantil (Ley de Sociedades de Capital)
- La retribución debe estar prevista en los estatutos sociales
- No hay derecho a indemnización laboral si se cesa como administrador
- Cotización a la Seguridad Social: posiblemente como autónomo societario en lugar de régimen general

**Protección ante la teoría del vínculo:**
Asegúrate de que los estatutos prevean expresamente la retribución del cargo de administrador, y consulta si conviene separar el cargo ejecutivo del cargo de consejero.

## Entregables

Con el contexto que me des, produce:
1. Comparativa de los términos del contrato de alta dirección vs. el contrato ordinario en tu situación específica
2. Cláusula dorada negociada: texto de la cláusula de indemnización adaptada a tu caso
3. Checklist de cláusulas imprescindibles antes de firmar un contrato de alta dirección
4. Análisis de la tributación de la indemnización según el escenario de tu caso
5. Guía de negociación: los 5 puntos donde tienes más margen de negociar como directivo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negociar y entender el contrato de alta dirección en España: diferencias con el ordinario, cláusula dorada y protección del directivo',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Métricas de equipo de soporte — qué medir, cómo reportarlo y mejorar con datos',
                'description'      => 'Aprende a definir, medir y reportar las métricas del equipo de soporte que realmente importan, y cómo usar los datos para mejorar la calidad y la eficiencia del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Customer Support con experiencia en equipos de soporte B2B y B2C en empresas SaaS. Necesito ayuda para diseñar el sistema de métricas del equipo de soporte: qué medir, cómo medirlo, cómo reportarlo al negocio y cómo usar los datos para mejorar continuamente.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántas personas tiene el equipo y qué canales de soporte gestionan? (email, chat, teléfono, redes)
2. ¿Qué herramienta de ticketing usas? (Zendesk, Freshdesk, Intercom, Salesforce)
3. ¿Qué métricas mides actualmente, si es que mides alguna?
4. ¿A quién reportas las métricas del equipo de soporte? (CEO, COO, VP Customer Success)
5. ¿Cuál es el problema más urgente: falta de visibilidad, no saber qué mejorar, o justificar recursos al negocio?

## Las Métricas de Soporte: El Mapa Completo

Las métricas de soporte se organizan en cuatro dimensiones:

**1. Calidad de la experiencia del cliente (CX)**
**2. Eficiencia operativa**
**3. Desempeño del equipo**
**4. Impacto en el negocio**

No todas pesan igual. Las métricas de CX y de impacto en negocio son las que hablan a los stakeholders. Las de eficiencia y desempeño son internas del equipo.

## Dimensión 1: Calidad de la Experiencia del Cliente

| Métrica | Definición | Frecuencia | Benchmark SaaS B2B |
|---|---|---|---|
| CSAT (Customer Satisfaction Score) | % de clientes que puntúan la interacción ≥ 4/5 | Continuo (por ticket) | > 85% |
| CES (Customer Effort Score) | Facilidad percibida del cliente para resolver su problema (1-7) | Por ticket/interacción | < 3 (menor esfuerzo = mejor) |
| NPS de soporte | Probabilidad de recomendar el soporte (0-10) | Trimestral | > 50 |
| FCR (First Contact Resolution) | % de tickets resueltos en el primer contacto sin reapertura | Semanal | > 75% |
| Reopen rate | % de tickets cerrados que vuelven a abrirse | Semanal | < 5% |

**Cómo recoger CSAT:**
Envía la encuesta automáticamente al cerrar el ticket. Una sola pregunta: "¿Qué nota le darías a la atención recibida? (1-5)". Opcionalmente, campo de comentario abierto. Hazlo corto para maximizar la tasa de respuesta (objetivo > 30%).

## Dimensión 2: Eficiencia Operativa

| Métrica | Definición | Frecuencia | Objetivo |
|---|---|---|---|
| AHT (Average Handle Time) | Tiempo promedio de resolución por ticket | Semanal | Según complejidad del producto |
| FRT (First Response Time) | Tiempo hasta la primera respuesta del agente | Diario | < 2h (email), < 5min (chat) |
| TTR (Time to Resolution) | Tiempo total desde apertura hasta cierre | Semanal | < 24h (simple), < 72h (complejo) |
| Ticket Volume por canal | Nº de tickets por canal y semana | Semanal | Tendencia vs. período anterior |
| Backlog | Tickets abiertos en cualquier momento | Diario | < 48h sin respuesta |
| Deflection rate | % de sesiones en KB que no derivan en ticket | Semanal | > 25% |

## Dimensión 3: Desempeño del Equipo

| Métrica | Definición | Frecuencia | Uso |
|---|---|---|---|
| Tickets cerrados por agente/día | Productividad individual | Semanal | Identificar necesidades de formación |
| CSAT por agente | Calidad de la atención individual | Mensual | Coaching individual |
| Quality Score (QA) | Puntuación de las revisiones de tickets | Mensual | Desarrollo profesional |
| Macro usage rate | % de respuestas usando macros/plantillas | Semanal | Identificar oportunidades de automatización |
| Adherence (horario) | % del tiempo en el canal de soporte según schedule | Diario (contact center) | Para equipos de chat/teléfono |

**Cómo hacer QA (Quality Assurance):**
- Revisa al menos 3-5 tickets por agente por semana (o 10 si el equipo es pequeño)
- Usa un scorecard de 4-6 criterios (tono, precisión, seguimiento de proceso, resolución, uso de KB)
- Cada criterio en escala de 1-4 con descripción de cada nivel
- Comparte el feedback individualmente, nunca en público

## Dimensión 4: Impacto en el Negocio

Estas son las métricas que justifican el presupuesto del equipo ante el liderazgo:

| Métrica | Definición | Por qué importa al negocio |
|---|---|---|
| Churn relacionado con soporte | % de churns donde el soporte fue un factor | Cuantifica el coste de una mala experiencia |
| Revenue at risk gestionado | MRR de cuentas en riesgo que el soporte salvaguarda | Justifica el ROI del equipo |
| CSAT → NPS correlation | Correlación entre CSAT de soporte y NPS global | Demuestra el impacto en la satisfacción general |
| Escalados a producto resueltos | Features o bugs identificados por soporte que se resolvieron | El equipo como antena del producto |
| Self-service savings | Tickets deflectados × coste promedio por ticket | ROI de la inversión en KB |

## Reporting: Cómo Presentar Las Métricas al Negocio

**Weekly dashboard (interno del equipo):**
- Volumen de tickets de la semana vs. semana anterior
- CSAT de la semana
- FRT y TTR promedio
- Backlog al final de la semana
- Top 3 temas más frecuentes

**Monthly report (para el liderazgo — 1 página):**
- 3 métricas de CX con tendencia (CSAT, FCR, NPS)
- 2 métricas de eficiencia (AHT, TTR)
- 1 métrica de impacto (churn relacionado con soporte, deflection savings)
- Top 5 temas del mes con análisis de causa raíz
- Iniciativa de mejora del mes: qué se implementó y cuál fue el impacto

**Cómo comunicar métricas que han empeorado:**
No presentes solo el número negativo. Presenta siempre: contexto (por qué empeoró), plan de acción (qué vas a hacer), y timeline (cuándo esperas recuperar).

## Cadencia de Revisión de Métricas

| Cadencia | Reunión | Participantes | Objetivo |
|---|---|---|---|
| Diaria | Standup de 10 min | Equipo de soporte | Backlog, casos urgentes, distribución de carga |
| Semanal | Weekly metrics review (30 min) | Team lead + agentes senior | Tendencias, ajustes de proceso |
| Mensual | Report al liderazgo | Head of Support + COO/CEO | Impacto en negocio, recursos, roadmap |
| Trimestral | Retrospectiva de equipo | Todo el equipo | Qué funciona, qué mejorar, iniciativas del siguiente trimestre |

## Entregables

Con el contexto que me des, produce:
1. Dashboard de métricas semanal (template con las métricas clave y el formato de presentación)
2. Scorecard de QA para revisión de tickets (criterios, escala, ejemplo relleno)
3. Monthly report de soporte (template de 1 página para el liderazgo)
4. Definición de los SLAs de respuesta y resolución para cada canal y tipo de ticket
5. Plan de mejora de las 2 métricas más débiles de tu equipo (basado en los datos que me des)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema completo de métricas del equipo de soporte: qué medir en cada dimensión, cómo reportarlo y cómo usarlo para mejorar continuamente',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cómo decir no a un cliente — cuándo rechazar proyectos y cómo comunicarlo',
                'description'      => 'Aprende a identificar qué proyectos y clientes debes rechazar, cómo comunicar el no de forma profesional y por qué decir no estratégicamente es fundamental para crecer como freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers y profesionales independientes con experiencia en gestión de clientes y crecimiento de negocio. Necesito ayuda para aprender a decir que no de forma estratégica: cuándo rechazar un proyecto o cliente, cómo comunicarlo sin dañar la relación y por qué esto es clave para crecer.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Hay algún proyecto o cliente específico que estás considerando rechazar ahora mismo?
2. ¿Cuál es la razón principal que te hace dudar? (precio, alcance, cliente difícil, falta de tiempo, no es tu especialidad)
3. ¿Con qué frecuencia dices sí a proyectos que luego lamentas haber aceptado?
4. ¿Cuál es tu capacidad actual? ¿Estás al 100% o tienes espacio?
5. ¿Tienes miedo de perder el cliente/proyecto o de las consecuencias de decir no?

## Por Qué Los Freelancers Dicen Sí Cuando Deberían Decir No

El "sí reflexivo" (decir sí por miedo) es uno de los mayores frenos al crecimiento del freelance:

| Miedo | Creencia limitante | Realidad |
|---|---|---|
| "Si digo no, no me llamarán más" | Los clientes buenos valoran a quien gestiona bien su agenda | Los clientes que te dejan de llamar por un no educado no eran los que querías |
| "No me puedo permitir perder este ingreso" | Un proyecto mal cobrado o que consume todo tu tiempo tiene un coste de oportunidad enorme | El tiempo libre es el activo más valioso de un freelance |
| "Hay poca demanda y tengo que aceptar lo que venga" | La demanda se construye con posicionamiento, no con disponibilidad permanente | Aceptar cualquier cosa reduce tu posicionamiento y retrasa tu especialización |
| "Podré con todo" | La sobrecarga reduce la calidad de todo lo que haces | Mejor 2 proyectos excelentes que 4 mediocres |

## Las 7 Señales de Alerta que Justifican un No

**Señales de cliente (red flags):**

| Señal | Por qué es un problema |
|---|---|
| Negocia el precio agresivamente antes incluso de entender el proyecto | Seguirá negociando en cada hito y pedirá extras sin pagar |
| No respeta tus horas de trabajo ni tus tiempos de respuesta | El proyecto se convertirá en una emergencia permanente |
| Cambia el brief varias veces antes de contratar | El alcance crecerá sin control una vez empecéis |
| "Necesito esto para ayer" como primera frase | El cliente no planifica y te hará responsable de sus urgencias |
| "Es fácil/rápido, no debería costar tanto" | No entiende el valor de tu trabajo y nunca lo entenderá |
| Habla mal de los freelancers anteriores de forma sistemática | La próxima persona de quien hablará mal serás tú |
| El feeling en la primera llamada es malo | Tu intuición es una herramienta de diagnóstico poderosa |

**Señales de proyecto (criterios de rechazo):**

| Criterio | Por qué rechazar |
|---|---|
| El proyecto no encaja con tu especialización | Bajarás la calidad y aprenderás a costa del cliente |
| El budget no cubre el tiempo real que llevará | Trabajarás a pérdidas o recortarás calidad |
| El cliente no tiene autoridad de decisión | El proyecto tendrá infinitas rondas de aprobación |
| El proyecto es contrario a tus valores | El malestar afectará a tu trabajo y a tu reputación |
| Ya tienes el 100% de tu capacidad ocupada | Hacer más de lo que puedes destruye la calidad de todo |

## Cómo Decir No: El Arte del Rechazo Profesional

Un no bien comunicado puede fortalecer la relación, no romperla.

**Los 4 principios del no profesional:**
1. **Rápido:** No hagas esperar al cliente más de 48h. La incertidumbre es peor que el no.
2. **Honesto pero diplomático:** Puedes ser honesto sobre la razón sin ser hiriente.
3. **Con alternativa si es posible:** Un no con una referencia vale más que un sí mediocre.
4. **Sin exceso de explicación:** Una razón bien dada es suficiente. Las excusas múltiples parecen inseguras.

**Los 5 formatos de no según la situación:**

**Formato 1: No por falta de capacidad (el más fácil)**
"Hola [Nombre], gracias por pensar en mí para este proyecto. Actualmente tengo la agenda completa hasta [fecha] y no podría darte el nivel de atención que merece este trabajo. Si tu timeline es flexible, podría empezar [en X semanas]. Si necesitas a alguien antes, puedo recomendarte a [nombre de colega]."

**Formato 2: No por precio**
"Gracias por tu propuesta. Tras revisar el alcance, el proyecto requiere [X horas/semanas] de trabajo para hacerse bien, lo que resulta en un presupuesto de [Y€]. Si el budget es de [Z€], podemos ajustar el alcance para trabajar dentro de ese presupuesto. ¿Te parece que hablemos de opciones?"

**Formato 3: No por desalineación con tu especialización**
"Este proyecto requiere expertise en [área donde no eres fuerte]. Me especializo en [tu especialización] y creo que para obtener los mejores resultados necesitas a alguien con experiencia específica en [su necesidad]. Puedo recomendarte a [nombre] que hace exactamente esto."

**Formato 4: No a un cliente existente que quiere algo fuera de alcance**
"Entiendo la necesidad. Lo que describes está fuera del alcance del acuerdo actual, pero puedo ofrecerte una propuesta específica para ese trabajo adicional. ¿Te parece bien que te la prepare?"

**Formato 5: No a un proyecto que no te conviene sin decir por qué**
"Tras pensarlo con calma, no creo que sea el proyecto adecuado para mí en este momento. No quiero comprometerme con algo en lo que no pueda darte el 100%. Te agradezco mucho haberte puesto en contacto y espero que encuentres a alguien que encaje mejor con lo que buscas."

## Cuándo Decir Sí Con Condiciones (En Lugar de No)

A veces el no no es absoluto: es un no a las condiciones actuales.

| Situación | Respuesta con condiciones |
|---|---|
| El proyecto es interesante pero el precio es bajo | "Puedo hacerlo a X€ [tu precio] con este alcance" |
| El timeline es imposible | "Puedo empezar en [fecha realista] con las garantías de calidad necesarias" |
| El alcance es demasiado amplio | "Podemos empezar con la fase 1 [alcance reducido] y evaluar la fase 2 según resultados" |
| El cliente es bueno pero el proyecto concreto no | "Este proyecto no encaja conmigo, pero para el próximo que tengas de [tipo], llámame" |

## El Coste de los Síes Equivocados

Calcula el coste real de un proyecto que no deberías haber aceptado:

| Coste | Cómo cuantificarlo |
|---|---|
| Tiempo real vs. tiempo estimado | Las horas adicionales × tu tarifa hora |
| Energía emocional | No cuantificable pero real: estrés, noches, desgaste |
| Proyectos rechazados por falta de capacidad | El proyecto bueno que dijiste no por estar ocupado con el malo |
| Reputación si el resultado no es bueno | Imposible de cuantificar pero de altísimo impacto |

La regla práctica: si dices no a un proyecto de 3.000€ que te llevaría el 50% de tu capacidad durante un mes, estás dejando libre esa capacidad para un proyecto de 6.000€ que encaja mejor.

## Entregables

Con el contexto que me des, produce:
1. Checklist de evaluación de proyectos: criterios de sí, no y sí con condiciones
2. Guión completo de rechazo para la situación específica que me describas
3. Email de rechazo profesional listo para enviar (adaptado a tu caso)
4. Lista de referencias para derivar clientes que rechaces (cómo organizarla y mantenerla)
5. Reflexión estratégica: si rechazas los proyectos que no deberías aceptar, ¿cuánto tiempo liberas y cuánto debería valer ese tiempo en proyectos mejores?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Aprender a rechazar proyectos y clientes estratégicamente, con los formatos de comunicación correctos para cada situación',
                'vote_score'       => 41,
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
