<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills55Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'PR y relaciones con medios',
                'description'       => 'Consigue cobertura mediática para tu startup o empresa con presupuesto mínimo y sin agencia de comunicación.',
                'prompt_content'    => <<<'PROMPT'
# PR y relaciones con medios: consigue cobertura sin presupuesto de agencia

Actúa como un consultor de relaciones públicas con experiencia ayudando a startups y PYMES a conseguir cobertura mediática en medios especializados y generalistas sin contratar una agencia de PR. Voy a compartirte el contexto de mi empresa y el objetivo de comunicación, y necesito una estrategia de PR ejecutable desde hoy mismo.

## Por qué el PR orgánico funciona para startups

Una aparición en un medio relevante puede hacer lo que meses de publicidad pagada no logran: credibilidad instantánea, backlinks de autoridad, y visibilidad ante audiencias que bloquean anuncios. El problema es que la mayoría de startups no saben cómo pitchear a periodistas y desperdician oportunidades por hacerlo mal.

---

## Parte 1: Define tu ángulo de historia — lo que los medios REALMENTE quieren publicar

Los periodistas no publican notas de prensa corporativas. Publican historias que interesan a su audiencia. Para conseguir cobertura, necesitas encontrar el ángulo que conecta tu empresa con algo que el periodista ya quiere escribir.

**Los 6 ángulos que funcionan:**

| Ángulo | Descripción | Ejemplo |
|---|---|---|
| Dato sorprendente | Una cifra o tendencia contraintuitiva de tu sector | "El 73 % de las PYMES españolas no usa IA para ningún proceso" |
| Historia de transformación | Un cliente cuya vida cambió con tu producto | Testimonial con resultado numérico verificable |
| David vs. Goliath | La startup que desafía a los grandes del sector | "Cómo una startup de 5 personas compite con las grandes consultoras" |
| Tendencia + timing | Tu empresa como ejemplo de una tendencia más grande | Relacionar tu lanzamiento con un macro-trend en el mercado |
| Conflicto o debate | Una postura contraria a la narrativa dominante del sector | "Por qué el NPS es una métrica inútil para la mayoría de empresas" |
| Hito o milestone | Ronda de financiación, número de clientes, expansión internacional | "Superamos los 10.000 usuarios en 6 meses sin inversión externa" |

**Ejercicio para encontrar tu ángulo:**
1. ¿Qué crees tú o hace tu empresa que va en contra de la sabiduría convencional del sector?
2. ¿Tienes datos propios (encuestas, datos de uso) que muestren algo sorprendente?
3. ¿Hay un debate actual en tu sector en el que tengas una postura clara y justificada?
4. ¿Tienes un cliente con un resultado espectacular y verificable que cuente su historia?

---

## Parte 2: El mapa de medios y periodistas

Antes de enviar un solo email, necesitas saber exactamente a quién dirigirte.

**Tipos de medios por objetivo:**

| Tipo de medio | Objetivo | Ejemplos (España) |
|---|---|---|
| Medios de tecnología / startups | Credibilidad en el ecosistema, backlink | Xataka, El Referente, Hipertextual, TechCrunch ES |
| Medios económicos y de negocio | Credibilidad con inversores y empresas | El Economista, Cinco Días, Expansión |
| Medios generalistas | Alcance masivo, viralidad | El País Retina, El Mundo, El Confidencial |
| Newsletters de nicho | Audiencia muy segmentada y comprometida | Newsletters especializadas en tu sector |
| Podcasts de tu sector | Profundidad y autoridad | Los podcasts líderes de tu vertical |
| Prensa local | Perfil humano, comunidad local | El periódico de la ciudad donde estás |

**Cómo encontrar al periodista correcto:**
1. Busca en Google: "[tema de tu empresa] site:xataka.com" para identificar quién escribe sobre tu sector
2. Revisa el byline de los últimos 5-10 artículos sobre tu temática en cada medio
3. Encuéntrate en Twitter/X o LinkedIn — la mayoría de periodistas tienen perfil activo
4. Herramienta: Muckrack (de pago) o simplemente Google Alerts con el nombre del periodista

**Base de datos mínima que debes construir:**
```
| Periodista | Medio | Temáticas cubiertas | Email / Twitter | Último artículo relevante | Notas |
```

---

## Parte 3: El pitch perfecto a un periodista

Un email de pitch a un periodista debe tener estas características:
- **Asunto**: una frase que sea el titular de la historia, no el nombre de tu empresa
- **Cuerpo**: máximo 150 palabras en el email inicial
- **Ángulo claro**: en la primera frase, la historia. No en el tercer párrafo.
- **Exclusividad** (cuando sea posible): ofrece la primicia antes de publicar en otros medios

**Plantilla de pitch email:**
```
Asunto: [El titular de la historia, no el nombre de tu empresa]

Hola [Nombre],

He seguido tu cobertura sobre [tema específico que han escrito] y creo que esto puede
interesarte.

[Una frase con el ángulo de la historia — el dato, el hito, la tendencia].

[Una frase explicando por qué es relevante para su audiencia ahora].

[Nombre de tu empresa] es [descripción de 10 palabras] y podría ser el ejemplo concreto
para ilustrar esta historia. [Dato o resultado concreto que lo avale].

Si te parece interesante, estaré encantado/a de pasarte más datos, organizar una llamada
o presentarte a [cliente / experto] que pueda hablar del tema con mayor profundidad.

[Tu nombre]
[Cargo] · [Empresa]
[Teléfono — imprescindible para periodistas]
```

---

## Parte 4: La nota de prensa — solo cuando tiene sentido

La nota de prensa tradicional solo funciona para hitos concretos: ronda de financiación cerrada, lanzamiento de producto mayor, adquisición, alianza estratégica relevante. Para el resto de historias, el pitch directo es más efectivo.

**Estructura de nota de prensa que se publica:**
1. **Titular**: el hecho en una frase. Activo, presente, sin jerga.
2. **Subtítulo**: amplía el titular con el contexto más relevante.
3. **Lead (primer párrafo)**: responde a las 5W — quién, qué, cuándo, dónde, por qué.
4. **Cuerpo (2-3 párrafos)**: contexto, datos, citas del portavoz.
5. **Quote del CEO o portavoz**: 2-3 frases con una postura clara, no texto corporativo genérico.
6. **Boilerplate**: descripción estándar de la empresa (3-4 frases).
7. **Contacto de prensa**: nombre, email y teléfono.

---

## Parte 5: Calendario de PR y gestión de las relaciones

El PR es una relación a largo plazo, no una campaña puntual.

**Acciones de construcción de relaciones con periodistas:**
- Comparte y comenta sus artículos de forma genuina (no spam de halagos)
- Sé fuente de datos e información útil incluso cuando no tienes nada que vender
- Responde a sus peticiones en Twitter/X (#PRrequest o @HARO) cuando tengas algo que aportar
- Invítalos a eventos de tu empresa antes de que sean públicos

**Cadencia anual de PR recomendada:**
- Q1: Informe de tendencias del sector con datos propios
- Q2: Historia de cliente o caso de uso notable
- Q3: Hito de producto o expansión
- Q4: Predicciones para el año siguiente (los medios los publican en noviembre-diciembre)

---

## Entregable

Dime el nombre de tu empresa, a qué te dedicas, tu principal hito reciente y el tipo de medio en el que quieres aparecer, y crearé:
1. Tu ángulo de historia para los próximos 90 días
2. Lista de 10 periodistas específicos con sus emails y últimas coberturas relevantes
3. Email de pitch listo para enviar (personalizado para el periodista más relevante)
4. Nota de prensa si tienes un hito que lo justifique
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar y ejecutar una estrategia de PR para conseguir cobertura mediática con presupuesto mínimo',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura event-driven con colas',
                'description'       => 'Diseña sistemas desacoplados con RabbitMQ, SQS o Kafka para manejar alta carga, garantizar resiliencia y escalar sin fricción.',
                'prompt_content'    => <<<'PROMPT'
# Arquitectura event-driven con colas: del monolito al sistema desacoplado

Actúa como un arquitecto de software con experiencia diseñando sistemas de mensajería y procesamiento asíncrono en entornos de producción con alta carga. Voy a compartirte el contexto de mi sistema actual y necesito que me ayudes a diseñar o mejorar la arquitectura event-driven con colas de mensajes.

## Cuándo necesitas colas de mensajes

Las colas de mensajes resuelven problemas específicos. Úsalas cuando:
- Una operación tarda más de lo que el usuario puede esperar (> 2 segundos)
- Necesitas procesar tareas en paralelo para escalar horizontalmente
- Quieres desacoplar productores de consumidores para que un fallo en uno no afecte al otro
- Necesitas garantizar que una tarea se ejecuta exactamente una vez (at-least-once o exactly-once delivery)
- Tienes picos de carga impredecibles y necesitas amortiguar el tráfico

**Cuándo NO usar colas:**
- Cuando la respuesta debe ser inmediata y síncrona (ej. validación de formulario)
- Cuando el volumen de mensajes es bajo y un cron job o proceso síncrono es suficiente
- En MVP donde la complejidad operativa no está justificada

---

## Parte 1: Conceptos fundamentales

### Los actores del sistema

**Producer (productor)**: el componente que genera el evento o mensaje y lo publica en la cola. No sabe quién lo consumirá ni cuándo.

**Queue / Topic**: el canal donde los mensajes esperan a ser procesados. La diferencia clave:
- **Queue** (RabbitMQ, SQS, FIFO): cada mensaje lo consume exactamente un consumidor
- **Topic** (Kafka, SNS): cada mensaje puede ser consumido por múltiples consumidores independientes

**Consumer (consumidor)**: el componente que lee el mensaje y ejecuta la lógica asociada. Puede haber múltiples consumidores del mismo tipo para procesar en paralelo.

**Dead Letter Queue (DLQ)**: cola donde van los mensajes que fallaron después de N intentos. Indispensable en producción para no perder mensajes.

### Garantías de entrega

| Garantía | Qué significa | Cuándo usarla |
|---|---|---|
| At-most-once | El mensaje puede perderse pero nunca se procesa dos veces | Métricas, logs (pérdida tolerable) |
| At-least-once | El mensaje se procesa al menos una vez (puede duplicarse) | La mayoría de casos — asegúrate de que tu lógica es idempotente |
| Exactly-once | Se procesa exactamente una vez | Pagos, transferencias — más complejo y costoso |

---

## Parte 2: Elegir la herramienta correcta

| Herramienta | Mejor para | Limitaciones |
|---|---|---|
| RabbitMQ | Routing complejo, topologías flexibles, baja latencia | No diseñado para replay de eventos históricos |
| Amazon SQS | Simplicidad, integración nativa con AWS, escalado automático | Sin fanout nativo (usa SNS + SQS para eso) |
| Apache Kafka | Streaming de eventos de alto volumen, event sourcing, replay | Alta complejidad operativa, curva de aprendizaje |
| Redis Streams | Colas ligeras integradas en la infraestructura existente | Durabilidad limitada vs. brokers dedicados |
| Laravel Queues | Abstracción sobre Redis/SQS/DB para proyectos PHP/Laravel | No apto para sistemas multi-lenguaje o muy alta escala |

**Árbol de decisión simplificado:**
- ¿Usas AWS? → SQS + SNS para fanout
- ¿Necesitas replay de eventos o analytics sobre el stream? → Kafka
- ¿Routing flexible y bajo volumen (< 100k msgs/día)? → RabbitMQ
- ¿Proyecto Laravel y quieres la solución más rápida? → Laravel Queues con Redis

---

## Parte 3: Diseño de un sistema event-driven real

**Caso de uso**: sistema de procesamiento de pedidos de e-commerce

**Arquitectura sin colas (problema):**
```
Usuario → [POST /checkout] → Valida stock → Carga pago → Envía email → Notifica almacén → Responde (8-12 segundos)
```
Un fallo en cualquier paso afecta a toda la cadena. El usuario espera 12 segundos. Si el servicio de email está caído, el pedido no se procesa.

**Arquitectura con colas (solución):**
```
Usuario → [POST /checkout] → Valida stock + reserva → Publica evento "order.created" → Responde en < 500ms

Worker 1: Consume "order.created" → Procesa pago → Publica "payment.processed"
Worker 2: Consume "payment.processed" → Envía email de confirmación
Worker 3: Consume "payment.processed" → Notifica sistema de almacén
Worker 4: Consume "payment.processed" → Actualiza CRM
```

Beneficios:
- El usuario recibe respuesta en milisegundos
- Si el servicio de email falla, el mensaje espera en la cola y se reintenta
- Cada worker escala independientemente según su carga

---

## Parte 4: Patrones de diseño clave

### Idempotencia

En sistemas at-least-once, el mismo mensaje puede procesarse dos veces. Tu lógica de negocio debe ser idempotente: procesarlo dos veces tiene el mismo resultado que procesarlo una vez.

**Técnica**: usa un `idempotency_key` único por mensaje y comprueba en base de datos si ya fue procesado antes de ejecutar la lógica.

```php
// Ejemplo en Laravel
public function handle(OrderCreated $event): void
{
    if (ProcessedEvent::where('event_id', $event->id)->exists()) {
        Log::info("Event {$event->id} already processed, skipping.");
        return;
    }

    // Procesa el pedido...

    ProcessedEvent::create(['event_id' => $event->id]);
}
```

### Circuit Breaker

Cuando un servicio dependiente falla repetidamente, el circuit breaker evita que los workers sigan intentándolo y saturando el sistema:
- **Closed** (normal): las llamadas pasan normalmente
- **Open** (fallo): las llamadas fallan inmediatamente sin intentar la conexión
- **Half-open** (recuperación): permite algunas llamadas para verificar si el servicio se recuperó

### Saga Pattern (transacciones distribuidas)

Para operaciones que afectan a múltiples servicios y necesitan rollback coordinado. En lugar de una transacción distribuida (2PC), usa una secuencia de eventos compensatorios: si el paso 3 falla, publica un evento que revierte los pasos 1 y 2.

---

## Parte 5: Operaciones y monitorización

**Métricas que debes monitorizar:**

| Métrica | Qué indica | Alerta cuando |
|---|---|---|
| Queue depth (mensajes pendientes) | Velocidad de consumo vs. producción | Crece sostenidamente > 5 min |
| Consumer lag | Retraso del consumidor respecto al productor | > 1.000 mensajes en cola crítica |
| DLQ size | Mensajes con errores sin procesar | > 0 en producción |
| Processing time per message | Rendimiento del worker | Aumenta sostenidamente |
| Retry rate | % de mensajes que requieren reintento | > 5 % |

**Herramientas de monitorización:**
- RabbitMQ: Management Plugin + Grafana
- SQS: CloudWatch + alarmas en DLQ
- Kafka: Kafka UI, Confluent Control Center, Grafana + JMX

---

## Entregable

Descríbeme tu sistema actual (lenguaje, infraestructura, el proceso que quieres hacer asíncrono) y diseñaré:
1. Arquitectura event-driven adaptada a tu stack con diagrama de flujo
2. Definición de los eventos (nombre, payload, productor, consumidores)
3. Estrategia de gestión de errores y DLQ
4. Checklist de implementación por fases
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Diseñar sistemas desacoplados con colas de mensajes para alta carga y resiliencia',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Rediseño de producto existente',
                'description'       => 'Aborda un rediseño complejo sin perder usuarios actuales, sin partir de cero y con una estrategia de transición validada.',
                'prompt_content'    => <<<'PROMPT'
# Rediseño de producto: cómo renovar sin romper lo que funciona

Actúa como un diseñador de producto senior con experiencia liderando rediseños de productos con usuarios activos, desde aplicaciones de 500 usuarios hasta plataformas con millones de sesiones mensuales. Voy a compartirte el contexto del producto que quiero rediseñar y necesito que me ayudes a planificar y ejecutar el proceso de rediseño sin perder usuarios ni generar rechazo.

## Por qué los rediseños fallan (y cómo evitarlo)

Los rediseños fracasan por una de estas razones:
1. **Se diseña para el usuario imaginario del futuro**, ignorando los hábitos del usuario actual
2. **Se cambia todo de golpe**: los usuarios no pueden reconocer el producto que usaban y abandonan
3. **No hay métricas de baseline**: no saben si el nuevo diseño es mejor porque no midieron el anterior
4. **El feedback de usuarios se ignora**: "es que los usuarios se resisten al cambio" es la excusa más cara de la historia del diseño de producto

---

## Parte 1: Diagnóstico antes del rediseño

Antes de hacer una sola wireframe, necesitas entender por qué el diseño actual no funciona y para quién no funciona.

### Auditoría del diseño actual

**Datos cuantitativos que debes recopilar:**
- Mapa de calor de clics (Hotjar, Clarity, FullStory) — ¿dónde hacen clic los usuarios y dónde deberían?
- Funnel de conversión de los flujos principales — ¿dónde abandonan?
- Tasa de uso de cada funcionalidad — el 20 % de features que generan el 80 % del valor
- Tickets de soporte relacionados con problemas de usabilidad o confusión en la interfaz
- Grabaciones de sesión de usuarios con problemas en flujos críticos

**Datos cualitativos:**
- Entrevistas con 5-8 usuarios actuales (especialmente los que han solicitado cambios o han contactado a soporte por confusión)
- Entrevistas con usuarios que abandonaron en los últimos 90 días
- Jobs to be done: ¿qué trabajo real intenta hacer el usuario con el producto?

### Mapa de lo que NO debes tocar

Identifica las partes del producto que los usuarios adoran o usan intensivamente. Estas son las que más riesgo tienen en un rediseño:

```
| Funcionalidad | Uso mensual | Satisfacción (CSAT) | Riesgo de cambio |
|---|---|---|---|
| Dashboard principal | 95 % usuarios | 4,2/5 | ALTO — rediseñar con mucho cuidado |
| Generación de informe | 60 % usuarios | 3,1/5 | MEDIO — hay problemas, pero es crítica |
| Configuración avanzada | 12 % usuarios | 4,5/5 | BAJO — solo usuarios expertos |
```

---

## Parte 2: Define el alcance y la estrategia de rediseño

**Los 4 tipos de rediseño según el alcance:**

| Tipo | Qué cambia | Riesgo para usuarios | Duración típica |
|---|---|---|---|
| Reskin visual | Solo la capa de presentación: colores, tipografía, iconos | Bajo | 2-6 semanas |
| Rediseño de flujo | Cambia la arquitectura de información y navegación | Medio-alto | 2-4 meses |
| Rediseño de arquitectura | Nueva estructura de componentes y patrones de interacción | Alto | 4-8 meses |
| Rediseño completo (v2) | El producto nuevo coexiste con el antiguo durante la transición | Muy alto | 6-18 meses |

**Preguntas para definir el alcance correcto:**
1. ¿El problema es visual (parece anticuado) o funcional (es confuso de usar)?
2. ¿Los usuarios actuales tienen flujos memorizados que un cambio de arquitectura rompería?
3. ¿Cuánto tiempo tienes para la transición?
4. ¿Tienes capacidad técnica para mantener dos versiones en paralelo si usas la estrategia de feature flags?

---

## Parte 3: La estrategia de transición — cómo cambiar sin que duela

**Estrategia 1 — Rediseño incremental (la más segura)**
Cambia una sección o flujo a la vez, en sprints de 2-4 semanas. Los usuarios se adaptan gradualmente. Ideal cuando el producto tiene secciones relativamente independientes.

**Estrategia 2 — Feature flags y beta cerrado**
El nuevo diseño solo se muestra a un % de usuarios (empezando por el 5-10 %) mientras monitoreas métricas de engagement, errores y feedback. Escala el % según los resultados.

```
Semana 1-2: 5 % de usuarios (usuarios más activos y open to feedback)
Semana 3-4: 20 % — monitoriza métricas vs. grupo de control
Semana 5-6: 50 % — análisis estadísticamente significativo
Semana 7+: 100 % + mantén la versión anterior accesible 30 días adicionales
```

**Estrategia 3 — Opt-in voluntario**
Los usuarios pueden activar el nuevo diseño cuando quieran, con opción de volver al antiguo. Genera expectación y feedback valioso. Riesgo: la fragmentación del producto complica el soporte.

**Estrategia 4 — Big bang (solo si es inevitable)**
Se lanza el nuevo diseño para todos el mismo día. Solo recomendable cuando el diseño anterior tiene problemas técnicos críticos que impiden el mantenimiento. Requiere comunicación extensiva previa y soporte reforzado durante las 2-4 semanas posteriores.

---

## Parte 4: Comunicación con usuarios durante el rediseño

La comunicación es la diferencia entre un rediseño exitoso y una crisis de soporte.

**Protocolo de comunicación:**

1. **Antes (4-6 semanas)**: "Algo está cambiando" — email o notificación en app anunciando mejoras próximas. Invita a usuarios interesados a ser beta testers.

2. **Durante la beta**: "Así es el nuevo [producto]" — guía interactiva, vídeo corto o tour de las novedades. Comparte el razonamiento detrás de los cambios.

3. **En el lanzamiento**: "Ya está disponible para todos" — email con los 3 cambios más importantes y enlace a guía completa. FAQ de las dudas más frecuentes.

4. **Después (2-4 semanas)**: "Gracias por tu feedback" — comunicación con las mejoras aplicadas gracias al feedback de usuarios durante el proceso.

**Lo que nunca debes hacer:**
- Lanzar el rediseño un viernes (si algo falla, no habrá equipo disponible para reaccionar)
- Eliminar funcionalidades sin avisar con al menos 30 días de antelación
- Ignorar el feedback negativo inicial como "resistencia al cambio" sin investigar si hay problemas reales de usabilidad

---

## Parte 5: Métricas para validar el rediseño

Establece el baseline ANTES de lanzar y compara durante las primeras 4-8 semanas:

| Métrica | Qué mide | Cuándo el rediseño funciona |
|---|---|---|
| Task completion rate | % de usuarios que completan el flujo principal | ≥ baseline anterior |
| Time on task | Tiempo para completar tareas clave | Menor que el baseline |
| Error rate | Clics en elementos que no llevan a ningún lado | Menor que el baseline |
| Support tickets de usabilidad | Tickets relacionados con confusión en la UI | Reducción > 20 % en 90 días |
| Retención 30 días | % de usuarios activos a los 30 días del lanzamiento | ≥ baseline |
| NPS / CSAT | Satisfacción general | Estable o mejora |

---

## Entregable

Descríbeme el producto que quieres rediseñar (capturas de pantalla si las tienes, datos de uso, principales quejas de usuarios) y elaboraré:
1. Diagnóstico de lo que está funcionando y lo que no
2. Estrategia de rediseño con alcance y fases recomendadas
3. Plan de comunicación con usuarios durante la transición
4. Métricas de validación y criterios de éxito del rediseño
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Planificar y ejecutar un rediseño de producto sin perder usuarios ni funcionalidad',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en ciclos largos',
                'description'       => 'Estrategias para mantener el deal vivo durante meses de proceso de decisión sin perder momentum ni quemar al prospecto.',
                'prompt_content'    => <<<'PROMPT'
# Ventas en ciclos largos: mantén el deal vivo durante meses sin desesperarte

Actúa como un director de ventas enterprise con más de 10 años gestionando deals de 3 a 18 meses de ciclo de venta en B2B. Voy a compartirte el contexto de mi proceso de ventas y un deal concreto, y necesito una estrategia para mantener el momentum, avanzar en el proceso de decisión y cerrar sin parecer desesperado.

## Por qué son diferentes los ciclos de venta largos

En ciclos de venta cortos (< 30 días), el momentum es automático. En ciclos de 3-18 meses, el mayor enemigo no es la competencia: es la inercia. Los proyectos mueren porque se van postergando hasta que dejan de ser prioridad, no porque el cliente haya elegido a otro.

Las habilidades críticas en ventas de ciclo largo son:
- Gestionar el cambio de interlocutores a lo largo del proceso
- Crear razones legítimas para avanzar sin presionar artificialmente
- Construir un caso de negocio interno que el champion pueda defender ante el comité de compra
- Identificar cuándo un deal está realmente vivo y cuándo es un zombie

---

## Parte 1: Mapea el proceso de decisión real (no el que te cuentan)

El proceso oficial que te describe tu interlocutor suele ser incompleto. Lo que realmente necesitas saber:

**Las 5 preguntas que debes responder antes de cualquier propuesta:**

1. **¿Quién es el Economic Buyer?** — La persona con autoridad real para aprobar el gasto. No siempre es quien te habla. ¿Has conseguido acceso a esa persona?

2. **¿Qué criterios de evaluación usan?** — ¿Los conoces todos? ¿Hay criterios no escritos (preferencia por proveedor local, relación previa con la competencia)?

3. **¿Cuál es el proceso interno de aprobación?** — ¿Legal? ¿IT security? ¿Compras? ¿Consejo de administración? Cada nodo de aprobación puede añadir semanas.

4. **¿Qué pasa si NO hacen nada?** — El statu quo siempre es una opción para ellos. ¿Cuál es el coste de no actuar y es suficientemente doloroso para generar urgencia real?

5. **¿Existe un evento externo que fije una fecha?** — Fin de año fiscal, lanzamiento de producto, renovación de contrato de la solución actual. Si no existe, el ciclo se alargará indefinidamente.

**Plantilla de mapa de stakeholders:**
```
| Stakeholder | Rol formal | Rol en la compra | Posición (champion/neutral/blocker) | Preocupaciones específicas |
|---|---|---|---|---|
| [Nombre] | CTO | Evaluador técnico | Champion | Seguridad y compliance |
| [Nombre] | CFO | Economic Buyer | Neutral | ROI y payback |
| [Nombre] | Director IT | Influencer | Blocker | Carga de integración |
```

---

## Parte 2: Cadencia de contacto sin parecer desesperado

La diferencia entre un vendedor pesado y uno valioso es el valor que aporta en cada contacto. Si cada llamada o email es "solo quería saber cómo vais con la decisión", eres el vendedor pesado.

**Regla de oro**: cada contacto debe aportar algo de valor para el comprador, no solo avanzar tu proceso.

**Tipos de contactos de valor:**

| Tipo | Ejemplo | Frecuencia |
|---|---|---|
| Insight relevante | Artículo, informe o tendencia de su sector | Cada 2-3 semanas |
| Caso de uso similar | "Un cliente en tu situación hizo X y consiguió Y" | Ante hito o duda específica |
| Avance en el proceso | Entrega de propuesta, resultado de prueba piloto, respuesta a objeción | Según el deal |
| Evento externo | Invitación a webinar, evento sectorial, demostración con otros clientes | Trimestral |
| Check de pulso | "¿Cómo están avanzando internamente?" | Máximo cada 10-14 días si hay silencio |

---

## Parte 3: Construye el caso de negocio que el champion puede defender

En deals largos, tu champion (la persona que te apoya internamente) debe vender por ti en reuniones a las que no te invitan. Si no tienes el material para que lo haga, el deal muere en esas reuniones.

**Componentes del caso de negocio interno:**

1. **El problema cuantificado**: ¿cuánto le cuesta al negocio el problema actual? En euros, en horas, en riesgo.

2. **El ROI proyectado**: con los datos del cliente, no con datos genéricos de tu web.

3. **Análisis de riesgo de la alternativa**: ¿qué pasa si no hacen nada o eligen a la competencia?

4. **El caso de referencia**: un cliente equivalente (tamaño, sector, problema similar) con resultado verificable.

5. **Plan de implementación**: timeline, recursos necesarios del cliente, riesgo de migración.

**Plantilla de una sola página para el champion:**
```
# Business Case: [Tu solución] para [Empresa cliente]

## Situación actual
[Descripción del problema en lenguaje de negocio, con cifras del cliente]

## Impacto proyectado a 12 meses
- Ahorro en [categoría]: X €
- Reducción de [tiempo/recurso]: X %
- [Beneficio cuantificable 3]: X

## Inversión requerida
[Precio + coste de implementación + recursos internos estimados]

## ROI y payback
- ROI a 12 meses: X %
- Payback: X meses

## Referencia: [Empresa similar]
[Descripción breve del caso similar con resultado verificable]

## Riesgo de no actuar
[Coste del statu quo o de retrasar la decisión]
```

---

## Parte 4: Señales de un deal zombie (y cómo actuar)

Un deal zombie es un deal que ya está muerto pero nadie te lo ha dicho. Reconócelo antes de seguir invirtiendo tiempo:

**Señales de alerta:**
- [ ] No has hablado con el Economic Buyer en más de 6 semanas
- [ ] Cada llamada termina con "lo revisamos internamente y te decimos" sin fecha
- [ ] El champion ha cambiado de posición o de empresa
- [ ] La "siguiente reunión" lleva 3 veces siendo cancelada o postergada
- [ ] No pueden articular qué falta para tomar la decisión

**Cómo actuar ante un posible zombie:**
En lugar de seguir haciendo follow-up normal, envía un email de "ruptura" (breakup email):

```
Asunto: ¿Cerramos el proceso?

Hola [Nombre],

Llevamos [X semanas] en conversaciones y entiendo que los tiempos de decisión son largos.

He intentado ayudar a que el proceso avance, pero parece que no es el momento adecuado o que han surgido otras prioridades.

No quiero seguir ocupando tu tiempo si el proyecto no es una prioridad ahora mismo. Dime si prefiers que lo dejemos aquí y retomamos cuando tenga más sentido, o si hay algo específico que podamos resolver para avanzar.

[Tu nombre]
```

Este email tiene una tasa de respuesta sorprendentemente alta porque elimina la presión y obliga al prospecto a una posición clara.

---

## Parte 5: Gestión de deals en el CRM para ciclos largos

Mantén el pipeline limpio para no engañarte sobre el estado real del negocio:

**Campos críticos por deal:**
- Fecha de último contacto con Economic Buyer
- Siguiente paso específico con fecha y propietario (tuyo o del cliente)
- Probabilidad de cierre revisada semanalmente
- Razón principal de riesgo

**Regla de higiene del pipeline**: cualquier deal sin actividad en 21 días pasa automáticamente a "en riesgo" y requiere un plan de acción.

---

## Entregable

Descríbeme el deal o proceso de venta en el que estás trabajando (sector, tamaño del cliente, fase actual, última interacción) y elaboraré:
1. Mapa de stakeholders y recomendación de pasos para acceder al Economic Buyer
2. Cadencia de contacto personalizada para los próximos 60 días
3. Business case de una página adaptado a tu contexto
4. Evaluación honesta de si el deal está vivo o es un zombie
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Gestionar deals de 3-18 meses de ciclo de venta sin perder momentum',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product analytics avanzado',
                'description'       => 'Funnels de conversión, cohortes de retención y segmentación de usuarios para tomar decisiones de producto basadas en datos reales.',
                'prompt_content'    => <<<'PROMPT'
# Product analytics avanzado: de los datos a las decisiones de producto

Actúa como un product analyst o Head of Data con experiencia en Mixpanel, Amplitude, Segment y SQL para analizar comportamiento de usuario y traducir los datos en decisiones de producto accionables. Voy a compartirte el contexto de mi producto y las preguntas que quiero responder, y necesito que me ayudes a diseñar el análisis correcto y a interpretar los resultados.

## La trampa del analytics vanity

Antes de diseñar cualquier análisis, distingue entre métricas vanity y métricas accionables:

**Métricas vanity** (te hacen sentir bien pero no guían decisiones):
- Usuarios registrados totales (si no sabes cuántos están activos)
- Páginas vistas totales (sin saber si contribuyen a la retención)
- Sesiones por día (sin contexto del comportamiento en esas sesiones)

**Métricas accionables** (cada cambio en ellas tiene una implicación de negocio clara):
- DAU/MAU ratio — mide el hábito de uso del producto
- Retención D1, D7, D30 — mide si el producto genera valor suficiente para volver
- Time to value — cuánto tarda el usuario en experimentar el valor del producto por primera vez
- Feature adoption rate — % de usuarios que usan cada funcionalidad clave

---

## Parte 1: Funnels de conversión

Un funnel mide cuántos usuarios completan una secuencia de pasos. Es la herramienta más directa para identificar dónde estás perdiendo usuarios.

### Diseño de un funnel de activación

El funnel de activación mide el proceso desde el registro hasta el primer momento de valor (AHA moment):

```
Registro → Completa onboarding → Crea primer proyecto → Invita a un colaborador → AHA moment
```

**Métricas que extraer de cada paso:**

| Paso | Usuarios que llegan | Tasa de conversión al siguiente paso | Drop-off |
|---|---|---|---|
| Registro | 1.000 | 100 % | — |
| Completa onboarding | 720 | 72 % | 280 usuarios (28 %) |
| Crea primer proyecto | 410 | 57 % | 310 usuarios (43 %) |
| Invita colaborador | 180 | 44 % | 230 usuarios (56 %) |
| AHA moment | 120 | 67 % | 60 usuarios (33 %) |

**El drop-off más grande (en este caso, "Crea primer proyecto" al "Invita colaborador") es el cuello de botella que debes priorizar para mejorar.**

### Segmentación de funnels

Un funnel global puede ocultar comportamientos muy distintos entre segmentos. Siempre segmenta por:
- Canal de adquisición (orgánico, paid, referido)
- Plan de suscripción o tamaño de empresa
- Geografía o idioma
- Dispositivo o plataforma

Un funnel con 40 % de conversión global puede ser 65 % para usuarios de empresa y 15 % para usuarios individuales — decisiones completamente distintas.

---

## Parte 2: Análisis de cohortes de retención

Las cohortes agrupan usuarios que realizaron la misma acción en el mismo período y miden su comportamiento a lo largo del tiempo. Es la métrica más honesta sobre si tu producto genera valor duradero.

**Cómo leer una tabla de cohortes:**

```
Cohorte       | Semana 0 | Semana 1 | Semana 2 | Semana 4 | Semana 8
Ene — 500 u.  |   100 %  |   42 %   |   31 %   |   22 %   |   18 %
Feb — 620 u.  |   100 %  |   45 %   |   34 %   |   25 %   |   21 %
Mar — 780 u.  |   100 %  |   48 %   |   37 %   |   28 %   |   —
Abr — 850 u.  |   100 %  |   51 %   |   40 %   |   —      |   —
```

**Qué buscar en las cohortes:**

1. **Retención en la semana 1** (Day 7): indicador principal del AHA moment. Si < 20 %, el onboarding está fallando.

2. **Flattening de la curva**: en qué semana se estabiliza la retención. Si la curva llega a cero, no hay usuarios retenidos. Si se estabiliza en un valor positivo (ej. 15 %), existe un núcleo de usuarios comprometidos.

3. **Mejora entre cohortes**: ¿las cohortes más recientes retienen mejor que las anteriores? Si sí, tus cambios de producto están funcionando.

**Benchmark de retención por tipo de producto:**

| Tipo de producto | Retención D7 | Retención D30 | Retención D90 |
|---|---|---|---|
| Consumer social (B2C) | 25-40 % | 15-25 % | 8-15 % |
| Productividad (B2C) | 30-45 % | 20-35 % | 15-25 % |
| SaaS SMB | 65-80 % | 55-70 % | 45-60 % |
| SaaS Enterprise | 80-95 % | 75-90 % | 70-85 % |

---

## Parte 3: Segmentación de usuarios para decisiones de producto

No todos los usuarios tienen el mismo valor ni el mismo comportamiento. Segmentar correctamente te permite priorizar qué usuarios hacer crecer.

**Segmentación por comportamiento (Power Users vs. At-Risk):**

| Segmento | Definición | Acción de producto |
|---|---|---|
| Power Users | Top 20 % en uso y engagement | Entrevístalos, prioriza sus feature requests, conviértelos en referentes |
| Usuarios activos normales | Usan el producto regularmente, sin ser power users | Mejora la retención y facilita el upsell |
| Usuarios en riesgo | Activos pero con uso decreciente | Campaña de re-engagement proactiva desde CS |
| Churned recientes | Inactivos en los últimos 30-60 días | Entrevista de churn para entender el motivo |
| Sleepers | Registrados pero nunca activados | Secuencia de activación automática o desactivación de la cuenta |

**Análisis RFM para product analytics:**
- **Recency**: ¿cuándo fue la última vez que usaron el producto?
- **Frequency**: ¿con qué frecuencia lo usan?
- **Magnitude**: ¿cuán profundamente usan el producto (nº de features, nº de acciones)?

Cruza estas tres dimensiones para crear tu mapa de segmentación interna.

---

## Parte 4: Diseña tu North Star Metric

La North Star Metric (NSM) es el único KPI que captura el valor que el producto entrega a los usuarios y que predice el crecimiento a largo plazo.

**Características de una buena NSM:**
- Mide entrega de valor al usuario (no solo actividad)
- Es accionable: el equipo puede influir directamente en ella
- Correlaciona con el crecimiento del negocio
- Es comprendida y seguida por todo el equipo

**Ejemplos por tipo de producto:**

| Producto | North Star Metric |
|---|---|
| Spotify | Minutos de audio escuchados por día |
| Airbnb | Noches reservadas |
| Slack | Mensajes enviados por equipos activos |
| LinkedIn | Conexiones realizadas por mes |
| Producto educativo | Estudiantes que completan una lección por semana |

**Ejercicio para encontrar tu NSM:**
Completa la frase: "Cuando nuestro producto funciona bien, [tipo de usuario] [acción específica] [con qué frecuencia]."

---

## Parte 5: Stack de herramientas recomendado por madurez

| Etapa | Stack recomendado | Inversión mensual |
|---|---|---|
| Pre-PMF (0-1.000 usuarios) | Posthog (self-hosted) + Metabase | < 50 € |
| Early growth (1k-10k) | Mixpanel o Amplitude (plan gratuito) + Segment | 0-200 € |
| Crecimiento (10k-100k) | Amplitude Pro + Segment + dbt + BigQuery | 500-2.000 € |
| Escala (> 100k) | Stack de datos completo con data warehouse + BI tool | > 2.000 € |

---

## Entregable

Dime cuál es tu producto, qué herramienta de analytics usas y cuál es la pregunta de negocio que quieres responder, y elaboraré:
1. Diseño del funnel de activación con los eventos a trackear
2. Configuración de la tabla de cohortes y cómo leer los resultados
3. Segmentación de usuarios recomendada para tu caso
4. Propuesta de North Star Metric con justificación
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Usar funnels, cohortes y segmentación para tomar decisiones de producto basadas en datos',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Escalar la cultura de empresa',
                'description'       => 'Mantén los valores y la esencia de tu empresa al pasar de 10 a 50-100 personas sin perder lo que os hizo exitosos.',
                'prompt_content'    => <<<'PROMPT'
# Escalar la cultura de empresa: de startup a organización sin perder el alma

Actúa como un consultor de cultura organizacional y liderazgo con experiencia ayudando a fundadores y directores de personas en empresas en hipercrecimiento. Voy a compartirte el contexto de mi empresa y el reto de crecimiento que estamos viviendo, y necesito una estrategia concreta para escalar la cultura sin diluirla.

## El problema de la cultura a escala

La cultura funciona de forma diferente en distintos tamaños de empresa:

- **Empresa de 1-10 personas**: la cultura es tácita. Está en el comportamiento del fundador, en las conversaciones informales, en cómo se toman las decisiones. No necesita ser escrita porque todos la respiran.

- **Empresa de 10-30 personas**: aparecen las primeras fricciones. Las personas que no estuvieron "desde el principio" no comparten los contextos implícitos. Se empiezan a tomar decisiones inconsistentes.

- **Empresa de 30-100 personas**: la cultura deja de transmitirse por ósmosis. Si no está codificada y reforzada activamente, la cultura real (cómo se comporta la gente de verdad) diverge de la cultura aspiracional (los valores en la web).

- **Empresa de 100+ personas**: la cultura se fragmenta por equipos, oficinas o países. El riesgo es que diferentes partes de la organización operen con culturas contradictorias.

**La transición más crítica es la de 10 a 50 personas.** Es cuando tienes que pasar de cultura implícita a cultura explícita.

---

## Parte 1: Codifica lo que ya existe antes de inventar nada nuevo

El error más frecuente es importar frameworks de cultura de otras empresas (los valores de Netflix, el Spotify model, las OKR de Google) en lugar de articular lo que ya funciona en la tuya.

**Proceso de arqueología cultural (haz esto antes que nada):**

1. **Entrevista a tus 5-10 empleados más antiguos**: "¿Qué es lo que más te gusta de trabajar aquí que no crees que encontrarías en otra empresa? ¿Cuándo tomamos las mejores decisiones? ¿Cuándo me has visto actuar de una manera que refleja perfectamente cómo quieres que sea esta empresa?"

2. **Analiza las decisiones difíciles que habéis tomado bien**: busca el patrón. ¿Qué criterios usasteis realmente para decidir? ¿Priorizasteis la velocidad sobre la calidad, la transparencia sobre la eficiencia, las personas sobre los procesos?

3. **Identifica qué comportamientos no toleráis aunque la persona tenga buen rendimiento**: este es el valor más revelador. Lo que no perdonas define mejor la cultura que lo que celebras.

4. **Mira a quién habéis ascendido y por qué**: los ascensos son el mensaje más potente sobre lo que realmente valora la empresa.

El output de este proceso son 3-5 valores reales (no aspiracionales) con ejemplos concretos de comportamiento que los ilustran.

---

## Parte 2: De valores abstractos a comportamientos observables

Los valores genéricos no cambian el comportamiento. "Integridad", "innovación" y "colaboración" están en los valores de casi todas las empresas y no significan nada por sí solos.

**Formato de valor útil:**

```
Nombre del valor: [2-3 palabras distintivas de vuestra empresa]

Lo que significa en la práctica:
- [Comportamiento observable que sí hacemos]
- [Comportamiento observable que sí hacemos]
- [Comportamiento observable que sí hacemos]

Lo que NO significa (anti-patrón):
- [Lo que este valor no implica para nosotros]

Cómo sabemos que alguien lo vive:
- En una entrevista de candidato: [señal o pregunta concreta]
- En la revisión de rendimiento: [criterio observable]
- En una decisión difícil: [cómo se manifiesta]
```

**Ejemplo real:**
```
Nombre: Honestidad incómoda

Lo que significa:
- Damos feedback negativo directamente y en privado antes de cualquier queja a terceros
- Compartimos las malas noticias al equipo antes que las buenas (no las guardamos para el all-hands)
- Decimos "no sé" cuando no sabemos en lugar de improvisar

Lo que NO significa:
- Ser brutal o desconsiderado en la forma de comunicar
- Criticar sin proponer alternativas

Señal en entrevista: "Cuéntame una vez en que no estuviste de acuerdo con tu jefe. ¿Qué hiciste?"
```

---

## Parte 3: Los 5 rituales que transmiten la cultura a escala

La cultura se transmite a través de rituales repetidos, no de documentos. Define los tuyos:

| Ritual | Propósito | Frecuencia | Formato |
|---|---|---|---|
| All-hands de empresa | Transparencia, contexto estratégico, Q&A con liderazgo | Mensual | 60-90 min con agenda pública |
| Storytelling de valores | Reconocer comportamientos que ejemplifican un valor | Semanal / en el all-hands | 5 min: "Esta semana vi a [nombre] hacer [acción] que ejemplifica [valor]" |
| Retrospectiva de cultura | Evaluar si estamos viviendo los valores, no solo proclamándolos | Trimestral | Workshop con el equipo |
| Entrevista de salida estructurada | Detectar fricciones culturales que no se ven desde dentro | Cada baja | 45 min con alguien que no sea el jefe directo |
| Buddy de onboarding | Transmitir la cultura implícita al empleado nuevo | Primeros 90 días | 1 hora/semana con un empleado senior voluntario |

---

## Parte 4: El onboarding como vector de cultura

Los primeros 90 días son cuando la cultura se imprime o no en el nuevo empleado.

**Los 3 objetivos del onboarding cultural:**
1. Que el empleado entienda por qué existe la empresa y a dónde va
2. Que experimente en carne propia los valores (no que le lean una lista)
3. Que conozca a personas clave de diferentes equipos, no solo a su equipo directo

**Estructura del onboarding cultural en los primeros 30 días:**

- **Día 1**: el fundador o CEO dedica 30-60 minutos a contar la historia de la empresa (por qué existe, momentos difíciles y cómo se superaron, por qué las decisiones más importantes del pasado)
- **Semana 1**: el buddy explica cómo se trabaja de verdad (cómo se toman las decisiones, cómo es el feedback, qué "no" se hace aquí aunque no esté escrito)
- **Semanas 2-4**: el nuevo empleado tiene 1:1 con personas de diferentes equipos para entender cómo cada área contribuye al objetivo común
- **Día 30**: "ask me anything" con un miembro del liderazgo, sin agenda preestablecida

---

## Parte 5: Señales de alerta de dilución cultural

**Detecta estos síntomas antes de que la cultura se fragmente:**

- [ ] Las decisiones de ascenso y contratación tienen un doble estándar no verbalizado
- [ ] Los managers nuevos (llegados en los últimos 12 meses) toman decisiones que sorprenden a los empleados veteranos
- [ ] El resultado de las encuestas de clima varía significativamente entre equipos o departamentos
- [ ] Los empleados veteranos dicen con frecuencia "esto antes no pasaba"
- [ ] Los valores de la empresa se mencionan con ironía o descrédito internamente

---

## Entregable

Cuéntame en qué momento de crecimiento está tu empresa, qué valores queréis preservar y qué tensiones culturales estáis viviendo, y elaboraré:
1. Guía de valores con comportamientos observables adaptada a tu empresa
2. Diseño de los 3 rituales culturales más prioritarios para vuestra etapa
3. Plan de onboarding cultural para los próximos 6 meses
4. Diagnóstico de los riesgos culturales más urgentes que debes abordar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Mantener y escalar la cultura de empresa al pasar de 10 a 50-100 personas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Reporting financiero para inversores',
                'description'       => 'Elabora el pack mensual de información financiera que genera confianza y transparencia con tus inversores actuales y futuros.',
                'prompt_content'    => <<<'PROMPT'
# Reporting financiero para inversores: el pack mensual que genera confianza

Actúa como un CFO con experiencia en startups financiadas por capital riesgo en España y Europa. Voy a compartirte el contexto de mi empresa y necesito que me ayudes a estructurar el investor update mensual que mantiene a mis inversores informados, genera confianza y sirve de base para futuras rondas.

## Por qué el investor update es una inversión, no una obligación

La mayoría de founders ven el investor update como burocracia. Los mejores founders lo ven como una herramienta de:
- **Accountability**: te obliga a analizar tus propios números mensualmente
- **Credibilidad**: los inversores que reciben updates consistentes invierten más en rondas futuras y te presentan a otros inversores
- **Red de ayuda**: un investor update bien hecho incluye las necesidades del mes — los inversores que pueden ayudar, ayudan si saben cómo
- **Due diligence anticipada**: cuando llegues a la siguiente ronda, toda la información ya está organizada

**Dato**: según estudios de fondos de VC, las startups que envían investor updates regulares reciben apoyo activo de sus inversores un 65 % más que las que no los envían.

---

## Parte 1: Estructura del investor update mensual

El investor update mensual no debería superar las 2-3 páginas (o el equivalente en un email bien estructurado). La brevedad es respeto por el tiempo de tus inversores.

### Plantilla completa del investor update

```
ASUNTO: [Nombre empresa] — Investor Update [Mes Año]

---

## HEADLINE

Una frase que resume el mes. El investor debe entender en 10 segundos si fue un mes bueno, normal o difícil.

"Superamos los 500 k€ de ARR por primera vez. Churn al mínimo histórico. Contratamos el Head of Sales que buscábamos."
"Mes difícil: perdimos nuestro mayor cliente (22 % del ARR). Ya tenemos plan de acción."

---

## MÉTRICAS CLAVE

| Métrica | Este mes | Mes anterior | Variación | Objetivo anual |
|---|---|---|---|---|
| ARR / MRR | X € | X € | +X % | X € |
| Nuevos clientes | X | X | +X | — |
| Churn (clientes) | X % | X % | — | < X % |
| Churn (revenue) | X % | X % | — | < X % |
| CAC | X € | X € | — | — |
| LTV/CAC ratio | X | X | — | > 3 |
| Cash en banco | X € | — | — | — |
| Runway (meses) | X | — | — | — |
| Headcount | X | X | +X | — |

---

## HITOS CONSEGUIDOS ESTE MES

Lista concisa de 3-5 cosas que sucedieron:
- [Hito 1]: descripción breve y por qué importa
- [Hito 2]: descripción breve
- [Hito 3]: descripción breve

---

## PRIORIDADES DEL PRÓXIMO MES

Las 3 cosas más importantes que harás en el mes siguiente:
1. [Prioridad 1]
2. [Prioridad 2]
3. [Prioridad 3]

---

## RETOS Y PROBLEMAS

Esta sección es la más difícil de escribir y la más valiosa para tus inversores.
Sé honesto. Ocultar problemas en el update y luego tener que darlos en el siguiente no construye confianza.

- [Problema 1]: descripción + qué estás haciendo al respecto
- [Problema 2]: descripción + plan de acción o señales que estás monitorizando

---

## NECESIDADES DEL MES

¿En qué pueden ayudarte tus inversores concretamente?

- Buscamos: [perfil de candidato] para [rol]. Si conocéis a alguien, agradezco una intro.
- Necesito conectar con: [tipo de empresa o persona] para [objetivo concreto].
- ¿Conocéis a alguien en [empresa / fondo] con quien debería hablar?

---

## PRODUCTO Y TECNOLOGÍA (OPCIONAL, BREVE)

Un párrafo o 3 bullets sobre qué se ha lanzado o está en desarrollo.

---

## PIPELINE COMERCIAL

| Stage | Nº de deals | Valor total | Cambio vs. mes anterior |
|---|---|---|---|
| Discovery | X | X € | — |
| Propuesta enviada | X | X € | — |
| Negociación | X | X € | — |
| Cerrado ganado (mes) | X | X € | — |
| Cerrado perdido (mes) | X | X € | — |

---

## FINANCIERO RESUMIDO

| | Este mes | Acumulado año |
|---|---|---|
| Ingresos | X € | X € |
| Gastos operativos | X € | X € |
| EBITDA | X € | X € |
| Burn rate neto | X € | — |
```

---

## Parte 2: Las métricas que debes incluir según tu modelo de negocio

**SaaS / Suscripción:**
MRR, ARR, Net Revenue Retention (NRR), Gross Churn, Logo Churn, Expansion Revenue, CAC payback, Quick Ratio

**E-commerce / Marketplace:**
GMV, Gross Margin, AOV (Average Order Value), Repeat Purchase Rate, Customer Acquisition Cost, Contribution Margin

**Servicios / Agencia:**
Revenue, Gross Margin por proyecto, Utilización del equipo, NPS de clientes, Pipeline de nuevos proyectos

---

## Parte 3: Cómo comunicar las malas noticias

El mayor error en el investor update es maquillar los malos resultados o simplemente no enviar el update cuando las cosas van mal.

**Principios para comunicar problemas:**

1. **Primero el hecho, luego el contexto**: "Perdimos el 15 % del ARR en octubre" — no empieces con excusas.
2. **Muestra que entiendes la causa raíz**: no solo el síntoma.
3. **Presenta el plan de acción**: qué vas a hacer diferente y cuándo esperas ver resultados.
4. **Indica qué ayuda necesitas**: un buen inversor puede ayudar si sabe exactamente con qué.

**Plantilla para comunicar un mes difícil:**
```
Octubre fue un mes difícil y quiero ser completamente transparente.

[Qué pasó]: Perdimos 3 clientes enterprise que representaban el 18 % del ARR.
[Por qué]: Dos de ellos tuvieron recortes de presupuesto por el contexto macro.
El tercero eligió a la competencia por una funcionalidad que nosotros no tenemos.

[Plan de acción]:
1. Hemos acelerado la funcionalidad que perdimos vs. competencia — ETA: diciembre.
2. Implementamos contrato anual obligatorio para nuevos clientes enterprise para reducir churn por contexto macro.
3. Reforzamos el proceso de QBR (quarterly business review) con todos los clientes > X € ARR.

[Runway]: A pesar de esto, tenemos 14 meses de runway. No hay riesgo inmediato.
[En qué necesito ayuda]: Si conocéis a CFOs o directores financieros en empresas de 50-200 empleados del sector retail, es nuestro ICP ideal y donde tenemos mayor tasa de conversión.
```

---

## Parte 4: Cadencia y formato

**Frecuencia:**
- Mensual: estándar para startups pre-Serie A y Serie A
- Trimestral: aceptable para startups en etapas más avanzadas con menor necesidad de apoyo activo
- Nunca más de 6 semanas entre updates, salvo circunstancias excepcionales

**Formato:**
- Email estructurado: el más habitual y efectivo. Llega directamente a la bandeja de entrada.
- Deck PDF adjunto: complementario si tienes gráficas o pipeline visual que merece la pena compartir
- Plataforma de portfolio: Visible, Briefcase, Sydecar — útiles cuando el número de inversores crece (> 10)

**Timing:**
Envía el update entre el día 5 y el 10 del mes siguiente. Los inversores esperan recibirlo a principios de mes con los datos del mes anterior.

---

## Entregable

Compárteme los datos del último mes (o los que tengas disponibles) y el tipo de inversores que tienes (angels, VCs, family office), y elaboraré:
1. Investor update completo listo para enviar
2. Guía de métricas específicas para tu modelo de negocio
3. Template de hoja de cálculo con las métricas que debes registrar mensualmente
4. Versión de comunicación para un mes con malas noticias (si es el caso)
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Elaborar el investor update mensual que genera confianza y facilita el apoyo de inversores',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual en relaciones laborales',
                'description'       => 'Determina a quién pertenece lo que crea el empleado o el contratista externo, y cómo proteger la propiedad intelectual de tu empresa.',
                'prompt_content'    => <<<'PROMPT'
# Propiedad intelectual en relaciones laborales: quién es el dueño de lo que se crea

Actúa como un abogado especialista en propiedad intelectual e industrial y derecho laboral español. Voy a compartirte el contexto de mi empresa y la situación concreta sobre la creación de obras, software o inventos por parte de empleados o contratistas externos, y necesito entender qué pertenece a la empresa y cómo protegerlo.

## El contexto legal en España

En España, la propiedad intelectual de las creaciones generadas en el contexto laboral se regula principalmente por:
- **Real Decreto Legislativo 1/1996, de 12 de abril** (Ley de Propiedad Intelectual — LPI)
- **Ley 24/2015, de 24 de julio** (Ley de Patentes)
- **Estatuto de los Trabajadores** (ET)
- El propio contrato de trabajo y los acuerdos específicos suscritos

El régimen es distinto según el tipo de creación (software, obras audiovisuales, invenciones, diseños) y según el tipo de relación (empleado, freelance, becario).

---

## Parte 1: El software creado por empleados

La Ley de Propiedad Intelectual en España establece una regla clara para el software desarrollado por empleados:

**Artículo 97.4 LPI**: "Los derechos de explotación de los programas de ordenador creados por un trabajador asalariado en el ejercicio de las funciones que le han sido confiadas o siguiendo las instrucciones de su empresario, corresponderán exclusivamente al empresario."

### Condiciones para que la titularidad sea de la empresa:

1. **Creado en el ejercicio de sus funciones**: el desarrollo debe entrar dentro de las responsabilidades del cargo para el que fue contratado.
2. **Siguiendo instrucciones del empresario**: el empleado lo crea porque la empresa lo encargó.
3. **En el contexto de la relación laboral**: no necesariamente en el horario de trabajo ni con medios de la empresa, si el trabajo "encarga" la creación.

### La zona gris — proyectos personales y trabajo lateral:

Si un desarrollador crea un proyecto en su tiempo libre, con sus propios medios y sin relación con las funciones de su puesto, ese software es suyo, no de la empresa.

**Pero cuidado con estas situaciones:**
- Si usa conocimiento, código o datos confidenciales de la empresa, la titularidad es discutible aunque lo haga en su tiempo libre
- Si el proyecto compite con el negocio de la empresa, puede incumplir el deber de no concurrencia
- Si lo desarrolla durante el horario laboral aunque use sus propios medios, la titularidad corresponde a la empresa

**Recomendación contractual:**
Incluye en el contrato una cláusula de cesión explícita y, si quieres cubrir la zona gris, una cláusula de notificación de proyectos personales relacionados con el sector.

---

## Parte 2: El software y las obras creadas por freelancers y contratistas externos

Aquí la regla cambia radicalmente. A diferencia del empleado, el freelance NO cede automáticamente los derechos a quien le encarga el trabajo.

**Artículo 17 LPI**: el autor (el freelance) es el titular originario de todos los derechos, salvo que exista un acuerdo expreso de cesión o transmisión.

### Lo que esto significa en la práctica:

Si contratas a un diseñador gráfico para crear el logotipo de tu empresa sin un contrato que ceda los derechos, el logotipo es del diseñador, no tuyo. Puedes usarlo para el fin para el que te lo encargó, pero no tienes derecho exclusivo ni puedes impedir que lo reutilice.

Lo mismo aplica a:
- Software desarrollado por una agencia o freelance
- Textos, artículos o contenidos encargados a un redactor
- Videos, fotografías o ilustraciones encargadas externamente
- Diseños de producto o packaging

### Cláusula de cesión que debes incluir en TODO contrato con freelancers:

```
El Prestador cede de forma exclusiva, con carácter ilimitado en el tiempo y en el territorio mundial,
todos los derechos de explotación sobre las obras creadas en el marco del presente contrato,
incluyendo los derechos de reproducción, distribución, comunicación pública y transformación.
El Prestador renuncia expresamente a ejercer cualquier acción derivada del derecho moral
de paternidad o integridad que pudiera interferir con el uso comercial de las obras por parte del Cliente.
El Prestador declara que las obras entregadas son originales, no infringen derechos de terceros
y está en disposición de ceder los derechos aquí descritos.
```

---

## Parte 3: Las invenciones de los empleados en España

La Ley de Patentes española distingue tres tipos de invenciones creadas por empleados:

### 1. Invenciones de servicio (propiedad de la empresa)

Son las invenciones creadas **en el ejercicio de las funciones del empleado** o siguiendo instrucciones del empresario. La titularidad corresponde íntegramente a la empresa.

El empleado tiene derecho a una **compensación económica adicional** si la invención tiene importancia industrial o comercial superior a lo que cabe esperar de su aportación normal. Este derecho no puede renunciarse anticipadamente.

### 2. Invenciones mixtas

Creadas por el empleado **fuera de sus funciones** pero con medios de la empresa o conocimiento adquirido en ella. La empresa tiene derecho de asunción preferente:
- Puede asumir la titularidad completa o una licencia
- Debe notificarlo al empleado en 3 meses desde que este le comunica la invención
- El empleado recibe una compensación pactada

### 3. Invenciones libres

Sin relación con la actividad de la empresa ni con los conocimientos adquiridos. Son íntegramente del empleado. La empresa no tiene ningún derecho.

**Obligación del empleado**: comunicar por escrito a la empresa todas las invenciones para que esta pueda determinar su clasificación.

---

## Parte 4: Protección adicional — cláusulas recomendadas en el contrato laboral

Para proteger completamente la propiedad intelectual de tu empresa, incluye estas cláusulas:

**Cláusula de cesión amplia:**
```
El trabajador cede a la empresa todos los derechos de propiedad intelectual e industrial
sobre las obras, invenciones, software, diseños, bases de datos y cualquier otro resultado
creativo que pueda generarse en el contexto de la relación laboral, incluyendo los generados
en el tiempo libre si guardan relación con el negocio de la empresa o han sido realizados
con medios o conocimiento confidencial de la empresa.
```

**Cláusula de notificación:**
```
El trabajador se obliga a notificar a la empresa por escrito cualquier invención, desarrollo
de software, diseño o creación que pueda guardar relación con la actividad de la empresa,
aunque haya sido generada fuera del horario laboral, en un plazo máximo de 5 días hábiles
desde su creación.
```

**Cláusula de confidencialidad:**
Complementa la cesión de derechos con una cláusula de confidencialidad que proteja el know-how, procesos internos y datos de la empresa, con vigencia incluso después de la extinción del contrato.

---

## Parte 5: Situaciones especiales

**Becarios e internos**: la titularidad de las creaciones de los becarios sigue el mismo régimen que los empleados si existe una relación de tipo laboral de facto. Si el convenio de prácticas no incluye cesión de derechos, incluye una cláusula específica.

**Software open source creado por empleados**: si tu empleado contribuye a proyectos open source durante el horario laboral, las contribuciones pueden quedar afectadas por las licencias del proyecto. Define una política clara sobre contribuciones a proyectos externos.

**IA y creaciones asistidas por IA**: en España, la LPI actualmente no reconoce como autor a una IA. Las creaciones generadas con IA y supervisadas por un humano pueden estar protegidas si existe aportación creativa humana suficiente. El marco legal está evolucionando.

---

## Entregable

Descríbeme tu situación concreta (empleado, freelance, tipo de creación, contexto específico) y elaboraré:
1. Análisis de a quién pertenece la propiedad intelectual en tu caso
2. Cláusulas contractuales específicas para proteger los derechos de tu empresa
3. Checklist de revisión de contratos actuales con empleados y freelancers
4. Recomendaciones para regularizar situaciones de creaciones pasadas sin cesión formal
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Determinar la titularidad de creaciones de empleados y freelancers y proteger la PI de la empresa',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Escalar el equipo de soporte',
                'description'       => 'Estrategia para contratar, onboardear y gestionar la calidad cuando el equipo de Customer Success crece de 2 a 10+ personas.',
                'prompt_content'    => <<<'PROMPT'
# Escalar el equipo de soporte: de 2 a 10 personas sin perder calidad

Actúa como un Head of Customer Success con experiencia escalando equipos de soporte en SaaS B2B de 2 a 15 personas, manteniendo o mejorando la satisfacción del cliente durante el crecimiento. Voy a compartirte el contexto de mi equipo y las necesidades de crecimiento, y necesito una estrategia concreta para contratar, estructurar y gestionar la calidad a escala.

## Cuándo escalar el equipo (y los riesgos de hacerlo tarde)

**Señales de que ya deberías haber escalado:**
- El tiempo medio de primera respuesta supera el SLA prometido de forma sistemática
- El CSAT baja < 4,0/5 dos meses consecutivos
- Los agentes trabajan overtime regularmente y empiezan a cometer más errores
- El churn por "falta de soporte" o "tiempo de respuesta lento" aparece en las entrevistas de salida
- Tu mejor agente de soporte está empezando a quemarse (burnout)

**Los riesgos de escalar demasiado rápido:**
- Contratar antes de tener los procesos documentados = escalar el caos
- Agentes nuevos sin onboarding sólido = CSAT que empeora al añadir personas
- Sin QA process = inconsistencia de calidad entre agentes

La regla: documenta el proceso antes de contratar la primera persona adicional.

---

## Parte 1: Define la estructura del equipo por etapa

### Equipo de 1-3 personas (etapa founding)
- Todos hacen de todo: técnico, billing, onboarding
- Foco: aprender del cliente y construir el playbook
- Herramienta: Intercom, Zendesk Lite o incluso Gmail con labels
- KPI principal: tiempo de primera respuesta y CSAT

### Equipo de 3-7 personas (etapa de especialización)
- Primera especialización: soporte técnico vs. customer success proactivo
- Surge la necesidad de un Team Lead (no necesariamente gerente, pero sí referente)
- Implementar un sistema de escalado L1 (agente) → L2 (senior/técnico) → L3 (producto/ingeniería)
- Herramienta: Zendesk, Freshdesk o Help Scout + base de conocimiento
- KPI añadido: First Contact Resolution (FCR), backlog bajo control

### Equipo de 7-15 personas (etapa de proceso)
- Un manager de CS dedicado (puede ser el Head of CS o un Team Lead promovido)
- Especialización por segmento de cliente (SMB vs. Enterprise) o por canal (chat, email, telefónico)
- Quality Assurance dedicado (al menos parcial): revisión de interacciones y calibración de equipo
- Ciclos formales de feedback al producto (monthly ticket review con el PM)
- KPI añadido: QA score, tiempo de resolución por categoría, ticket deflection rate

---

## Parte 2: El perfil correcto para cada nivel

**Agente L1 (soporte general):**
- Empatía alta y comunicación escrita clara
- Capacidad de seguir procesos documentados
- NO necesita conocimiento técnico profundo del producto en el primer mes (el onboarding lo da)
- Señal en entrevista: pídele que responda a un ticket real de ejemplo

**Agente L2 (soporte técnico o senior):**
- Conocimiento técnico del producto o capacidad de aprenderlo rápido
- Capacidad de diagnosticar problemas sin escalado
- Mentalidad de "dueño del problema"
- Señal en entrevista: dale un caso técnico ambiguo y observa cómo estructura la investigación

**Team Lead / Head of CS:**
- Construye sistemas y procesos, no solo resuelve tickets
- Capaz de analizar datos y comunicar insights al equipo de producto
- Coaching de agentes, no solo supervisión
- Señal en entrevista: "Cuéntame cómo mejorarías el proceso de soporte en los primeros 90 días"

---

## Parte 3: El onboarding de un nuevo agente de soporte

Un agente que llega sin onboarding adecuado daña la experiencia del cliente durante semanas. Este proceso evita ese daño:

**Semana 1 — Inmersión en el producto:**
- Día 1-2: Usar el producto como cliente. Completar el onboarding de usuario, explorar todas las funcionalidades, crear proyectos de prueba.
- Día 3-4: Leer los 50 tickets más frecuentes de los últimos 90 días y las respuestas modelo.
- Día 5: Shadow de 2-3 sesiones de soporte en vivo con un agente senior (observar sin intervenir).

**Semana 2 — Práctica supervisada:**
- Responder tickets de baja complejidad con revisión obligatoria del senior antes de enviar
- Acceso al playbook de respuestas y base de conocimiento
- Al menos una sesión de roleplay de cliente difícil con el Team Lead

**Semana 3-4 — Independencia con QA:**
- Responde tickets de forma independiente pero con QA semanal de 5 interacciones aleatorias
- Reunión de feedback semanal con el Team Lead
- Evaluación al final del mes 1: ¿está listo para tickets L2?

---

## Parte 4: Sistema de QA para mantener la calidad a escala

Sin un proceso de QA, la calidad de soporte varía enormemente entre agentes y nadie lo sabe hasta que el CSAT baja.

**Proceso de QA mínimo viable:**

1. **Selección de interacciones**: revisa 5 interacciones aleatorias por agente por semana. Incluye también las que recibieron feedback negativo del cliente.

2. **Scorecard de evaluación** (escala 1-5 en cada dimensión):

| Dimensión | Descripción |
|---|---|
| Resolución correcta | ¿Se resolvió el problema del cliente correctamente? |
| Tono y empatía | ¿El tono fue apropiado para la situación? |
| Claridad | ¿La respuesta fue clara y sin ambigüedades? |
| Eficiencia | ¿Se resolvió en el menor número de interacciones posible? |
| Política y proceso | ¿Se siguieron los protocolos correctos? |

3. **Sesión de calibración mensual**: todos los agentes y el QA reviewer puntúan el mismo ticket de forma independiente, luego comparten y discuten las diferencias. Esto alinea los criterios de calidad de todo el equipo.

4. **Feedback individual**: cada agente recibe feedback de su QA mensualmente con ejemplos concretos de lo que hace bien y una sola área de mejora prioritaria.

---

## Parte 5: Las métricas del equipo escalado

| KPI | Definición | Objetivo recomendado |
|---|---|---|
| First Response Time | Tiempo hasta la primera respuesta humana | < 2h (email) / < 5min (chat) |
| Time to Resolution | Tiempo desde apertura hasta cierre definitivo | Definir por categoría y plan |
| First Contact Resolution (FCR) | % de tickets resueltos en el primer contacto | > 70 % |
| CSAT | Satisfacción media del cliente tras el ticket | > 4,2/5 |
| QA Score | Puntuación media de calidad interna | > 4,0/5 |
| Tickets per Agent | Volumen gestionable por agente sin degradar calidad | 60-80 tickets/semana (variable según complejidad) |
| Escalation Rate | % de tickets que suben de L1 a L2 | < 20 % a largo plazo |

---

## Entregable

Cuéntame el tamaño actual de tu equipo, el volumen de tickets, las herramientas que usas y el principal problema de calidad o capacidad que tienes, y elaboraré:
1. Estructura de equipo recomendada para los próximos 12 meses
2. Plan de contratación priorizado con perfiles y criterios de selección
3. Plan de onboarding de 30 días para el siguiente agente que incorpores
4. Scorecard de QA y proceso de calibración para tu equipo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Escalar el equipo de Customer Success sin perder calidad ni quemar al equipo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de proyectos como freelance',
                'description'       => 'Herramientas, procesos y comunicación para entregar proyectos como freelance sin estrés, sin scope creep y con clientes satisfechos.',
                'prompt_content'    => <<<'PROMPT'
# Gestión de proyectos como freelance: entrega sin estrés y sin scope creep

Actúa como un consultor de productividad y operaciones con experiencia asesorando a freelancers de diseño, desarrollo, consultoría y marketing sobre cómo estructurar sus proyectos para entregar con calidad, en plazo y sin perder dinero por el scope creep. Voy a describir mi situación y tipo de proyectos, y necesito un sistema de gestión que se adapte a mi forma de trabajar.

## El problema del freelance sin proceso

La mayoría de freelancers pierden dinero y cordura por estos tres problemas:

1. **Scope creep**: el proyecto empieza siendo X, el cliente va pidiendo "pequeñas cosas" adicionales y termina siendo 2X sin cobrar más.
2. **Comunicación reactiva**: el cliente pregunta a cualquier hora, por cualquier canal, y el freelance está siempre disponible mentalmente aunque no esté trabajando.
3. **Sin estructura de hitos**: el cliente ve el proyecto como una caja negra hasta que lo entrega, y entonces empieza a pedir cambios masivos.

El sistema que voy a darte resuelve los tres.

---

## Parte 1: El Brief de proyecto — la base de todo

Todo proyecto debe empezar con un brief firmado. No empiecen antes.

**Plantilla de brief de proyecto:**

```
BRIEF DE PROYECTO

Cliente: [Nombre / Empresa]
Fecha: [DD/MM/AAAA]
Contacto principal: [Nombre, email, teléfono]

---

ALCANCE DEL PROYECTO

Descripción del trabajo a realizar:
[Descripción específica de qué entregas incluye el proyecto]

Entregables concretos:
1. [Entregable 1 con especificación técnica]
2. [Entregable 2]
3. [Entregable 3]

Lo que NO incluye este proyecto:
- [Exclusión 1]
- [Exclusión 2]
- [Exclusión 3]
(Esta sección es tan importante como lo que sí incluye)

---

TIMELINE

Fecha de inicio: [DD/MM]
Hito 1 — [Nombre del hito]: [DD/MM]
Hito 2 — [Nombre del hito]: [DD/MM]
Entrega final: [DD/MM]

---

INVERSIÓN

Total: X €
Forma de pago: 50 % al inicio / 50 % en la entrega final
(O el esquema que uses)

Revisiones incluidas: [N] rondas de revisión por entregable
Revisiones adicionales: X €/hora o X € por ronda adicional

---

PROCESO DE TRABAJO

Canal de comunicación: [Email / Slack / Notion]
Horario de respuesta: [Ej. lunes a viernes, 9:00-18:00]
Tiempo máximo de respuesta: [Ej. 24 horas laborables]

Responsabilidades del cliente:
- Proporcionar [materiales / accesos / información] antes de [fecha]
- Revisar y aprobar cada hito en un plazo máximo de [X días laborables]
- Designar un único punto de contacto para la toma de decisiones

---

APROBACIÓN

Al enviar el pago del 50 % inicial, el cliente confirma haber leído y aceptado este brief.

[Tu nombre y firma]
[Nombre del cliente y firma si es posible]
```

---

## Parte 2: La estructura de hitos — visibility sin microgestión

Divide el proyecto en hitos visibles para el cliente. Cada hito tiene:
- Una entrega tangible que el cliente puede revisar
- Una fecha de entrega
- Una aprobación requerida (por escrito) antes de continuar

**Por qué los hitos son clave:**
- El cliente ve progreso sin necesitar actualizaciones constantes
- Si hay un cambio de dirección, lo detectas en el hito 1, no cuando todo está terminado
- La aprobación escrita de cada hito es tu protección legal ante cambios tardíos

**Ejemplo de estructura de hitos para un proyecto web:**
```
Hito 0 (inicio): Recepción del 50 % + brief aprobado
Hito 1 (semana 2): Wireframes de las 5 páginas principales — revisión del cliente
Hito 2 (semana 4): Diseño visual de 2 páginas clave — revisión y aprobación
Hito 3 (semana 6): Diseño completo de todas las páginas — revisión final
Hito 4 (semana 7): Maquetación y desarrollo
Hito 5 (semana 8): Entrega final + segundo pago
```

---

## Parte 3: Cómo manejar el scope creep

El scope creep no siempre es mala fe del cliente. A veces el cliente genuinamente no sabía lo que quería hasta que vio el trabajo. Pero eso no significa que debas hacerlo gratis.

**Protocolo ante una petición de cambio:**

1. **Recíbela sin comprometerte**: "Entendido, déjame revisar si esto entra dentro del alcance acordado o requiere una revisión del presupuesto."

2. **Clasifica la petición**:
   - ¿Está dentro del alcance acordado en el brief? → Lo haces sin comentario adicional
   - ¿Es una mejora menor que no cambia el alcance pero sí el tiempo? → Lo haces pero lo registras internamente
   - ¿Es un cambio de alcance significativo? → Emites una Change Order

3. **Emite una Change Order (CO):**
```
CHANGE ORDER #001

Proyecto: [Nombre]
Fecha: [DD/MM]

Cambio solicitado:
[Descripción del cambio que el cliente ha pedido]

Impacto en el proyecto:
- Coste adicional: X €
- Impacto en el plazo: +X días
- Entregables afectados: [lista]

Para proceder, confirma tu aprobación respondiendo a este email con "Aprobado".
```

**El truco**: no es confrontacional. Es profesional. Los clientes que trabajan con profesionales serios esperan este proceso y lo respetan.

---

## Parte 4: Comunicación estructurada que reduce el estrés

Define un sistema de comunicación antes de empezar el proyecto y comunícaselo al cliente:

**El sistema de un solo canal:**
Toda la comunicación del proyecto va por un único canal. El resto se redirige a ese canal.

"Para mantener todo el historial del proyecto organizado, usaremos [email / Slack / Notion] como canal principal. Si recibes un mensaje mío por otro canal, lo redirigiré al canal principal."

**El update semanal proactivo:**
En lugar de esperar a que el cliente te pregunte "¿cómo va?", envía tú un update semanal de 5 líneas:

```
Asunto: Update semana [N] — [Nombre proyecto]

Hola [Nombre],

Esta semana:
✓ [Qué has completado]
✓ [Qué has completado]

Esta semana que viene:
→ [Qué vas a completar]

¿Necesito de tu parte?
→ [Acción concreta que necesitas del cliente, si la hay]

[Tu nombre]
```

Este email tarda 5 minutos en escribir y elimina el 80 % de las consultas del cliente.

---

## Parte 5: Herramientas mínimas para freelancers

No necesitas un stack complejo. Necesitas consistencia en pocas herramientas:

| Necesidad | Herramienta gratuita | Herramienta de pago |
|---|---|---|
| Gestión de tareas del proyecto | Notion, Trello gratuito | Linear, Basecamp |
| Compartir entregables con cliente | Google Drive, Notion | Pastel.io (para feedback de diseño) |
| Contratos y firma digital | Docusign (básico) | Bonsai, HelloSign |
| Facturación | Holded (España) | FreshBooks |
| Time tracking | Toggl (gratuito) | Harvest |
| Comunicación con cliente | Email + Loom para videos | Slack (si el cliente lo usa) |

---

## Entregable

Cuéntame tu tipo de proyectos habituales (diseño, desarrollo, consultoría, marketing), el tamaño medio en semanas y el mayor problema que tienes (scope creep, comunicación, plazos, pagos), y elaboraré:
1. Brief de proyecto personalizado para tu tipo de trabajo
2. Estructura de hitos estándar para tu proyecto típico
3. Plantilla de Change Order lista para usar
4. Sistema de comunicación con clientes adaptado a tu forma de trabajar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Estructurar proyectos freelance para entregar en plazo sin scope creep',
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
