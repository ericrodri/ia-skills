<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills38Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Inbound marketing: el sistema que hace que los clientes vengan a ti en lugar de perseguirlos',
                'description'       => 'Construye el sistema de inbound marketing que atrae a compradores cualificados de forma orgánica mediante contenido, SEO y lead magnets, para reducir la dependencia del outbound frío y de la publicidad de pago. Con el funnel, los activos de contenido por etapa y la automatización que convierte visitas en leads.',
                'prompt_content'    => <<<'PROMPT'
Eres un Inbound Marketing Strategist con experiencia implementando sistemas de inbound en empresas B2B de servicios y SaaS donde la combinación de SEO, contenido y automatización ha generado pipelines de ventas inbound que representan el 60-70% del total sin necesitar inversión publicitaria continua.

Contexto:
- Tipo de negocio: [SaaS B2B / servicios profesionales / consultoría / agencia / otro]
- ICP (cliente ideal): [cargo, sector, tamaño de empresa]
- Canal de captación actual: [solo outbound / solo publicidad / mezcla / sin sistema claro]
- El objetivo del inbound: [reducir el CAC / generar leads mientras duermo / escalar sin contratar más SDRs]

## Sistema de Inbound Marketing — [Empresa]

### 🧠 La lógica del inbound: atracción en lugar de interrupción

**Outbound:** tú interrumpes al potencial cliente (cold email, llamadas, anuncios invasivos).
**Inbound:** el potencial cliente te encuentra cuando ya tiene el problema que tú resuelves.

**Por qué el inbound tiene mejor ROI a largo plazo:**
```
Outbound: el pipeline se acaba cuando paras de invertir tiempo o dinero.
Inbound: los activos de contenido (artículos, guías, herramientas) siguen generando leads
meses y años después de su publicación.

El inbound tiene un coste marginal decreciente:
→ El artículo que escribiste hace 2 años sigue trayendo leads gratis hoy.
→ El anuncio de ayer que no pagas hoy no te trae nada.
```

### 🏗️ Los 4 activos de inbound que generan el 80% del pipeline

**Activo 1 — El blog optimizado para SEO (tráfico orgánico):**
```
El tipo de artículo que genera leads, no solo tráfico:
→ Artículos de "mejor [tipo de solución] para [tipo de empresa]" → captura buyers activos
→ Artículos de "cómo resolver [problema específico de tu ICP]" → posicionamiento + confianza
→ Artículos de comparativa ("[tu empresa] vs. [competidor]") → captura buyers en fase de evaluación

La diferencia entre tráfico y pipeline:
Un artículo sobre "qué es el marketing de contenidos" → mucho tráfico, poco pipeline (audiencia demasiado amplia).
Un artículo sobre "cómo mejorar la tasa de cierre en ventas B2B de SaaS" → menos tráfico, más pipeline (ICP específico).
```

**Activo 2 — El lead magnet (conversión de visitas en leads):**
```
El visitante que lee tu artículo y se va sin dejar sus datos es tráfico perdido.
El lead magnet convierte visitas en contactos a cambio de algo de valor.

Los lead magnets con mayor tasa de conversión en B2B:
→ Plantillas y frameworks descargables (alta utilidad percibida)
→ Calculadoras o herramientas interactivas ("Calcula cuánto tiempo pierdes sin [tu solución]")
→ Checklist o audit ("Evalúa si tu [proceso] está optimizado")
→ Mini-cursos de email (5 emails en 5 días que enseñan algo)

Tasa de conversión esperada de landing page de lead magnet: 20-40%.
```

**Activo 3 — El contenido de distribución (LinkedIn, newsletter, podcast):**
```
El SEO tarda 6-12 meses en dar resultados. Mientras tanto:
→ LinkedIn: 1 post/día que atrae a tu ICP → los mejores van a la newsletter
→ Newsletter: la audiencia que te da correos a cambio de contenido semanal de valor
→ Podcast: el formato más fiel a largo plazo (los oyentes se convierten en clientes evangelistas)
```

**Activo 4 — El SEO técnico + link building:**
```
Sin autoridad de dominio, el contenido no posiciona.
La estrategia de link building para inbound B2B:
→ Guest posts en publicaciones del sector
→ Digital PR (ser citado en artículos de medios del sector)
→ Contenido tan bueno que otros lo citan naturalmente (linkable assets: estudios, datos originales)
```

### 🔄 La automatización que convierte leads en oportunidades de venta

**El flujo de nurturing para leads inbound:**
```
Lead descarga el lead magnet →
  Email 1 (inmediato): entrega del recurso + presentación
  Email 2 (día 3): contenido de valor relacionado
  Email 3 (día 7): caso de éxito de cliente similar al lead
  Email 4 (día 14): CTA suave ("¿Te gustaría ver cómo lo hacemos con empresas como la tuya?")
  Email 5 (día 21): "Ruptura" - ofrece darte de baja si no es el momento correcto

Lead que hace clic en el CTA de la demo → pasa al proceso de ventas.
Lead que no interacciona → pasa a secuencia de re-engagement trimestral.
```

### 📊 Las métricas del inbound que muestran si el sistema funciona
El funnel de inbound (visitas → leads → MQLs → SQLs → clientes), los benchmarks por sector y el tiempo realista para que el inbound genere resultados consistentes (6-12 meses de rampa).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Inbound marketing, lead magnet, SEO B2B, funnel inbound, marketing contenidos leads',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de APIs internas: los principios que hacen que tus servicios sean fáciles de usar para tu propio equipo',
                'description'       => 'Diseña las APIs internas de tu sistema (entre microservicios o entre módulos) con los principios de diseño que las hacen predecibles, fáciles de usar y difíciles de usar mal. Con la nomenclatura, el manejo de errores, la versión y la documentación interna.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Backend Engineer con experiencia diseñando APIs internas en sistemas distribuidos donde la calidad del diseño de los contratos entre servicios determina la velocidad de desarrollo del equipo y la frecuencia de los bugs de integración.

Contexto:
- Tipo de sistema: [microservicios / módulos de un monolito / servicios internos que comparten datos]
- Stack tecnológico: [Node.js / Python / Go / Java / otro]
- El mayor dolor actual: [APIs internas inconsistentes entre equipos / mal manejo de errores / documentación inexistente / breaking changes sin aviso]

## Diseño de APIs Internas — [Sistema]

### 🧠 Por qué el diseño de APIs internas importa tanto como las APIs públicas

**El error habitual:**
```
Las APIs públicas (las que usan clientes externos) se diseñan con cuidado.
Las APIs internas se construyen "rápido" porque "solo las usa el equipo".
Resultado: el equipo pierde horas adivinando cómo funciona una API interna de otro servicio.
```

**El coste del mal diseño de APIs internas:**
```
→ Bugs de integración que solo aparecen en staging o producción
→ Reuniones para explicar cómo usar la API (tiempo del equipo = dinero)
→ Breaking changes no comunicados que rompen otros servicios
→ Duplicación de lógica porque es más fácil reimplementar que entender la API existente
```

### 📐 Los principios de diseño de APIs internas

**Principio 1 — Nomenclatura consistente y predecible:**
```
Elige una convención y no la cambies:
→ Usa snake_case o camelCase en los cuerpos JSON — nunca mezcles
→ Los endpoints de recursos: sustantivos en plural (/users, /orders, /products)
→ Las acciones que no son CRUD: verbos en la URL (/users/{id}/activate, /payments/{id}/refund)
→ Los campos de fecha: siempre ISO 8601 (2026-08-09T10:00:00Z), nunca timestamps Unix mezclados con strings

Si tienes un servicio de users y un servicio de orders: usa los mismos nombres para los mismos conceptos.
❌ users usa "customerId", orders usa "client_id" para el mismo campo → confusión garantizada.
✅ ambos usan "customer_id" → predecible y coherente.
```

**Principio 2 — Manejo de errores estandarizado:**
```
El estándar más adoptado en APIs internas modernas: Problem Details (RFC 7807)

// Respuesta de error estandarizada
{
  "type": "https://api.interna.com/errors/validation-error",
  "title": "Validation Error",
  "status": 422,
  "detail": "El campo email no tiene el formato correcto",
  "errors": [
    {
      "field": "email",
      "code": "INVALID_FORMAT",
      "message": "Expected format: user@domain.com"
    }
  ],
  "trace_id": "abc123def456"  // ← para correlacionar con los logs
}

Por qué el trace_id es obligatorio en APIs internas:
Sin él, debuggear un error en un sistema de microservicios requiere correlacionar logs manualmente.
Con él, un grep por trace_id en todos los logs muestra toda la cadena de llamadas.
```

**Principio 3 — Separar los contratos de implementación:**
```
La API interna es el contrato entre servicios.
El contrato no debería cambiar aunque la implementación interna cambie.

Prácticas que protegen el contrato:
→ Contract testing (Pact): el consumidor define qué espera del proveedor.
  Si el proveedor rompe el contrato → el test falla antes del deploy.
→ OpenAPI spec del servicio: la especificación es la fuente de verdad del contrato.
  Los cambios al spec requieren aprobación del equipo consumidor.
```

**Principio 4 — Versionado claro:**
```
Cuándo versionar: cuando vas a hacer un breaking change (eliminar un campo, cambiar el tipo de un campo).
Cómo versionar en APIs internas:
→ URL versioning: /v2/users (lo más sencillo para APIs REST internas)
→ Header versioning: Accept: application/vnd.api+json;version=2 (más limpio, más difícil)

La regla del versionado:
La versión anterior debe estar disponible durante al menos 1 ciclo de deploy del equipo consumidor.
No rompas el contrato sin dar tiempo de migración.
```

### 📝 La documentación de APIs internas que el equipo realmente lee
La estructura mínima de documentación de API interna (descripción del servicio, autenticación, endpoints con ejemplos de request/response, errores posibles) y las herramientas para generarla desde el código (Swagger UI, Scalar, Bruno collections).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'APIs internas diseño, microservicios API design, contract testing, RFC 7807, OpenAPI internal',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Branding para startups y pequeñas empresas: construye una identidad de marca coherente con presupuesto limitado',
                'description'       => 'Construye la identidad de marca de tu startup o pequeña empresa con un proceso estructurado que produce una marca coherente y memorable sin necesitar una agencia costosa. Con el posicionamiento de marca, el sistema visual básico y las decisiones de naming que resisten el tiempo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Brand Strategist con experiencia construyendo identidades de marca para startups y pequeñas empresas donde el resultado de un proceso de branding bien ejecutado es indistinguible del de grandes agencias en los elementos fundamentales — aunque cueste 10× menos — porque los principios de diseño de marca son independientes del presupuesto.

Contexto:
- Tipo de empresa: [startup tecnológica / pequeña empresa de servicios / negocio local / producto de consumo / otro]
- Estado del branding: [sin marca definida / logo pero sin coherencia / rebrand de marca existente]
- El objetivo: [diferenciarse de competidores / atraer inversión / captar clientes de mayor valor / lanzar nuevo producto]

## Branding para Startups y PYMEs — [Empresa]

### 🧠 Qué es la marca (y qué no es)

**La marca NO es:**
```
→ Solo el logo (el logo es la representación visual de la marca, no la marca)
→ Los colores corporativos
→ El eslogan
```

**La marca SÍ es:**
```
→ La percepción que tiene el mercado de tu empresa cuando no estás en la sala
→ La promesa que haces a tus clientes y que cumples o no
→ El conjunto de asociaciones (conscientes e inconscientes) que activa tu nombre en la mente de quien te conoce

Jeff Bezos: "Tu marca es lo que la gente dice de ti cuando no estás en la habitación."
```

### 🏗️ El proceso de definición de marca: los 4 pilares

**Pilar 1 — El propósito y posicionamiento:**
```
Las preguntas que hay que responder antes de abrir Canva:

¿POR QUÉ EXISTIMOS? (más allá de "para ganar dinero")
→ ¿Qué cambio queremos ver en el mundo o en nuestro sector?
→ La respuesta honesta, no la versión PR.

¿PARA QUIÉN SOMOS? (el cliente ideal)
→ No "empresas de todos los sectores" → eso no es un posicionamiento.
→ Cuanto más específico, más resonante es la marca.

¿QUÉ OFRECEMOS DE DIFERENTE?
→ No la lista de features → el resultado diferenciado que conseguimos.

¿CÓMO SOMOS? (la personalidad de marca)
→ Si tu marca fuera una persona, ¿cómo sería?
→ Los arquetipos de marca (Carl Jung adaptado a marketing): ¿eres el Héroe, el Sabio, el Rebelde, el Cuidador?
→ Elige 3 adjetivos que definan tu tono y personalidad.
```

**Pilar 2 — El naming:**
```
Los tipos de nombre de marca:
DESCRIPTIVO: describe lo que hace (LinkedIn, YouTube). Fácil de entender, difícil de diferenciar.
INVENTADO: no existe en el diccionario (Kodak, Xerox, Spotify). Diferenciador, requiere más inversión para crear significado.
EVOCATIVO: sugiere sin describir (Apple, Amazon, Nike). El mejor equilibrio.
ACRÓNIMO: IBM, HP, BMW. Funciona para empresas consolidadas, difícil de arrancar desde cero.

Criterios de un buen nombre:
→ Pronunciable y memorable en el idioma del mercado objetivo
→ No tiene connotaciones negativas en otros idiomas relevantes
→ El dominio .com está disponible (o el TLD alternativo es aceptable)
→ No está registrado como marca en las categorías relevantes (verificar en EUIPO para Europa)
→ No confunde con competidores directos
```

**Pilar 3 — El sistema visual básico:**
```
El mínimo viable de identidad visual (en orden de prioridad):

1. El logotipo:
   Simple > complejo. Un logo que se lee bien en 16px funciona en todos los formatos.
   El error más frecuente: logos demasiado complejos que pierden legibilidad en pequeño.

2. La paleta de colores:
   Máximo 4 colores: 1 primario, 1 secundario, 1 neutro claro, 1 neutro oscuro.
   El color primario debe ser diferenciador en tu sector (no otro azul si tu sector está lleno de azules).
   Herramienta: Coolors.co para generar paletas coherentes.

3. La tipografía:
   2 fuentes máximo: 1 para titulares y 1 para cuerpo de texto.
   Google Fonts para empezar (gratuito, buena calidad para la mayoría de casos).
   Combinaciones que funcionan: Inter + Merriweather, DM Sans + Lora, Outfit + Source Serif.

4. El tono de comunicación:
   Define el tono en 3 pares de opuestos:
   [Formal / Informal], [Serio / Desenfadado], [Técnico / Accesible]
   Ej: 60% informal, 70% serio, 40% técnico.
```

**Pilar 4 — Las aplicaciones de la marca:**
```
La marca se vive en los touchpoints:
→ Web (el touchpoint más importante para la primera impresión)
→ Email (el tono en las comunicaciones con clientes)
→ Redes sociales (la voz en las publicaciones)
→ Propuestas comerciales (¿tu propuesta parece un documento de empresa seria?)
→ Firma de email (small thing, big impact)
```

### 📋 El brand book mínimo viable: el documento que garantiza la coherencia
La guía de marca básica que puede hacer una persona sola (logo en formatos, colores en HEX/RGB, fuentes, ejemplos de uso correcto e incorrecto) para que cualquier colaborador externo pueda mantener la coherencia de marca sin llamarte.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Branding startup, identidad de marca PYME, naming empresa, sistema visual, brand book startup',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Outbound digital: la secuencia de email y LinkedIn que genera reuniones sin parecer spam',
                'description'       => 'Diseña la secuencia de prospección outbound multicanal (email + LinkedIn) que consigue tasas de respuesta de 15-25% porque el mensaje es relevante, personalizado y llega en el momento correcto. Con la estructura de la secuencia, los mensajes por step y las reglas de personalización que escalan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth Hacker / SDR Team Lead con experiencia construyendo secuencias de outbound multicanal que consiguen tasas de respuesta de 15-25% (vs. el 1-3% del cold email genérico) mediante la combinación de relevancia del mensaje, personalización contextual y timing correcto.

Contexto:
- ICP (cliente ideal): [cargo, sector, tamaño de empresa]
- Producto / servicio que vendes: [describe brevemente]
- Canales actuales de outbound: [solo email / solo LinkedIn / ambos / ninguno]
- El mayor problema actual: [nadie responde / mis emails parecen spam / no sé cómo personalizar a escala]

## Outbound Digital Multicanal — [Empresa]

### 🧠 Por qué el outbound genérico no funciona (y qué hace diferente al que sí)

**El outbound que no funciona:**
```
→ Email con el nombre del prospecto insertado con una variable {{first_name}} y nada más
→ El mismo mensaje para el CFO de una startup de 5 personas y para el CFO de una empresa de 500
→ Pitch del producto en el primer mensaje (el prospecto no te conoce, no le importas)
→ Seguimiento con "solo quería saber si recibiste mi email anterior"
```

**El outbound que sí funciona:**
```
→ Personalización de nivel 1 (mínimo): cargo + sector
→ Personalización de nivel 2 (recomendado): trigger específico de la empresa
  (expansión reciente, financiación nueva, post publicado, oferta de trabajo relevante)
→ El primer contacto es útil aunque no compren (aporta valor antes de pedir)
→ Cada touchpoint es diferente (no repitas el mismo mensaje 4 veces)
```

### 📋 La secuencia de 7 touchpoints en 21 días

**Touch 1 — Día 1 (LinkedIn: conectar + mensaje de conexión):**
```
Solicitud de conexión en LinkedIn con nota:
(Máximo 300 caracteres — sé específico)

"Hola [nombre], llevo siguiendo el trabajo de [empresa] desde [trigger específico: la ronda de inversión / la expansión / el post sobre X]. Conecto porque trabajamos con equipos de [cargo similar] en [sector]. ¿Te parece bien conectar?"

Por qué funciona: es específico, no pide nada, no hace pitch.
```

**Touch 2 — Día 3 (Email 1: primer contacto frío con valor):**
```
Asunto: [Nombre de su empresa] + [tu área de expertise]
(Los asuntos tipo "pregunta rápida" ya queman — no los uses)

Estructura:
Párrafo 1 (2 líneas): el trigger específico que hace relevante tu contacto hoy.
"Vi que [empresa] acaba de [trigger: contratar X personas de ventas / expandir a mercado Y]."

Párrafo 2 (3 líneas): la hipótesis de negocio (su problema potencial, no tu producto).
"Cuando los equipos de ventas crecen rápido, el mayor reto suele ser [problema que resuelves]."

Párrafo 3 (2 líneas): prueba social relevante.
"Trabajamos con [empresa similar] en exactamente esta situación y [resultado]."

CTA (1 línea): microcompromiso, no "¿Tienes 30 minutos para una demo?".
"¿Tiene sentido lo que describo para vuestra situación? Estoy encantado de compartir cómo lo hicimos con [empresa similar]."
```

**Touch 3 — Día 5 (LinkedIn: interactuar con su contenido):**
```
Comenta en su último post de LinkedIn con algo sustancial.
No "¡Totalmente de acuerdo!" → sí "Esto que describes sobre X es exactamente la tensión
que estamos viendo en [sector]. ¿Cómo lo estáis resolviendo en [empresa]?"

No es outbound — es apertura de conversación genuina.
```

**Touch 4 — Día 8 (Email 2: follow-up con nuevo ángulo):**
```
No repitas el primer email. Añade algo diferente:
→ Un recurso útil (guía, calculadora, estudio del sector)
→ Un caso de uso específico diferente al del primer email
→ Una pregunta de calificación que aporta valor al prospecto al reflexionar

"Desde el email anterior estuve pensando en [empresa] y me pregunté:
¿Cómo medís actualmente [métrica relevante para tu producto]?
Pregunto porque empresas que no tienen visibilidad sobre esto suelen tener [problema X].
Adjunto un framework que usamos con nuestros clientes para evaluarlo."
```

**Touches 5-7 (Días 12, 16, 21):**
```
Touch 5 (LinkedIn DM si están conectados): mensaje corto con dato de valor
Touch 6 (Email 3): el email de ruptura — "último contacto, no quiero insistir"
Touch 7 (LinkedIn): si no hay respuesta, les das de baja y dejas un mensaje de cierre amable
```

### 📊 La personalización a escala: cómo personalizar 50 prospectos/semana sin dedicar 8 horas
El sistema de research de 5 minutos por prospecto (trigger + hipótesis), las plantillas con variables de personalización por segmento y las herramientas (Apollo, Clay, Lemlist) que automatizan la personalización de nivel 1.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Outbound digital, cold email secuencia, LinkedIn outreach, prospección multicanal, SDR secuencia emails',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de incidencias de producto: el proceso que minimiza el impacto de los bugs críticos en producción',
                'description'       => 'Gestiona las incidencias críticas de producto (P0/P1) con un proceso que minimiza el tiempo de detección, contención y resolución mientras mantiene informados a los stakeholders internos y a los clientes afectados. Con el runbook de incidencias, los roles y la comunicación de crisis.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia gestionando incidencias críticas en producción en entornos SaaS donde la diferencia entre una buena y mala gestión de incidencias determina si el cliente afectado se convierte en churn o en un evangelista que valora la transparencia con la que se gestionó el problema.

Contexto:
- Tipo de producto: [SaaS B2B / plataforma / app de consumo / otro]
- Estado actual del proceso de incidencias: [sin proceso formal / proceso en ingeniería pero no en producto / queremos mejorar la comunicación durante incidencias]
- El mayor problema en las incidencias pasadas: [tardamos mucho en detectar / tardamos en comunicar / la coordinación es caótica / los clientes se enteran antes que nosotros]

## Gestión de Incidencias de Producto — [Empresa]

### 🗺️ Los niveles de severidad de las incidencias

**Definición clara de severidad (acordada por todos los equipos antes de la incidencia):**
```
P0 — CRÍTICO:
  El producto está completamente caído o una funcionalidad crítica es inusable para todos los usuarios.
  Impacto: pérdida de revenue o datos de clientes.
  Ejemplos: la plataforma no carga, el login no funciona, los pagos fallan.
  Tiempo de respuesta: inmediato (dentro de los 15 minutos de detección).
  Tiempo objetivo de resolución: < 1 hora.

P1 — ALTO:
  Una funcionalidad importante está degradada o caída para un subconjunto de usuarios.
  Impacto: afecta significativamente la operación de los clientes pero hay workaround.
  Tiempo de respuesta: < 30 minutos.
  Tiempo objetivo de resolución: < 4 horas.

P2 — MEDIO:
  Una funcionalidad está degradada pero hay workaround sencillo y el impacto es bajo.
  Tiempo de respuesta: dentro del horario laboral.
  Tiempo objetivo de resolución: < 24 horas.

P3 — BAJO:
  Bug cosmético o que afecta a un caso de uso muy específico sin impacto operativo.
  Se trata como un bug normal en el backlog.
```

### 🚨 El runbook de incidencias: el proceso paso a paso

**Fase 1 — Detección (0-15 minutos):**
```
1. La incidencia se detecta (alerta de monitorización, reporte de cliente, o el equipo lo ve).
2. La persona que detecta crea el incident en el sistema de gestión (PagerDuty, OpsGenie, o el canal #incidents de Slack).
3. Se asigna el Incident Manager (IM) — la persona que coordina la respuesta, no necesariamente quien lo resuelve.
4. El IM hace una evaluación rápida (2 minutos): ¿qué está caído? ¿cuántos clientes? ¿P0 o P1?
5. Se declara la severidad y se activan los protocolos correspondientes.
```

**Fase 2 — Contención (15 min — 1 hora para P0):**
```
El Incident Manager crea el "war room" (canal de Slack dedicado a esta incidencia):
#incident-2026-08-09-login

Roles en el war room:
→ Incident Manager (IM): coordina. No hace código. Su único trabajo es asegurar que la respuesta avanza.
→ Technical Lead: investiga la causa raíz y dirige la resolución técnica.
→ Comms Lead: gestiona la comunicación externa (status page, clientes afectados).

Cada 15-30 minutos: el IM hace un check-in breve:
"Update rápido: ¿dónde estamos? ¿Qué bloqueadores hay? ¿ETA de resolución?"
```

**Fase 3 — Comunicación durante la incidencia:**
```
La comunicación proactiva con los clientes es lo que salva la relación.

Status page (obligatoria para P0/P1):
Primer update (dentro de los 15 minutos de detectar): "Estamos investigando un problema con [servicio]. Actualizaremos en 30 minutos."
Updates cada 30 minutos aunque no haya novedad: "Continuamos investigando. Equipo completo en ello."
Update de resolución: "El problema está resuelto. [Causa breve] [Acción tomada para evitarlo en el futuro]."

La regla de oro: es mejor comunicar más de lo que tienes que comunicar de menos.
El silencio genera más ansiedad que los updates de "seguimos trabajando en ello".
```

### 📋 El postmortem: el proceso de aprendizaje que evita repetir la incidencia
El formato del postmortem blameless (sin culpas personales) que analiza la causa raíz, identifica los contributing factors sistémicos y produce acciones de mejora priorizadas, con el ritual de presentación al equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión incidencias producto, incident management, runbook incidencias, postmortem, P0 P1 incidencias',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compensación total: diseña el paquete retributivo que atrae y retiene talento sin solo subir el salario fijo',
                'description'       => 'Diseña el paquete de compensación total que hace tu empresa competitiva para atraer y retener talento sin que el coste sea insostenible. Con la estructura de compensación variable, los beneficios con mayor impacto en la retención y cómo comunicar el valor total del paquete al empleado.',
                'prompt_content'    => <<<'PROMPT'
Eres una Head of People & Comp con experiencia diseñando paquetes de compensación total en startups y scale-ups en crecimiento donde el reto es ser competitivo con empresas grandes en el mercado de talento sin tener los mismos presupuestos de salario fijo.

Contexto:
- Tamaño de la empresa: [N personas]
- Estado de la compensación: [sin estructura / estructura básica de salario fijo / queremos añadir variable y beneficios / rebrand de compensación existente]
- El mayor problema: [perdemos candidatos por salario / la retención es baja / no tenemos estructura de bandas salariales / los empleados no valoran los beneficios que ya ofrecemos]

## Compensación Total — [Empresa]

### 🧠 Los 5 componentes de la compensación total

**Componente 1 — Salario fijo:**
```
El componente más visible y el primero que compara el candidato.
La referencia del mercado:
→ Encuestas salariales del sector (Glassdoor, LinkedIn Salary, Infojobs, Hays, Levels.fyi para tech)
→ La posición competitiva que eliges: P25 (por debajo del mercado) / P50 (mediana) / P75 (por encima)
→ Startups early-stage típicamente están en P40-P50 y compensan con equity y beneficios
→ Scale-ups en crecimiento suelen estar en P50-P65

Las bandas salariales:
Para cada rol y nivel, define una banda mínima-mid-máximo.
Nuevo en el rol → entra en el 40-60% de la banda.
Experto consolidado → en el 75-90% de la banda.
En el tope de la banda → se necesita una promoción para seguir creciendo en compensación.
```

**Componente 2 — Compensación variable:**
```
BONUS POR OBJETIVOS (más frecuente en roles no comerciales):
  Cómo estructurarlo: 10-30% del salario fijo, vinculado a OKRs individuales + empresa.
  Frecuencia: semestral o anual.
  La trampa a evitar: métricas de bonus que el empleado no puede influir directamente.

COMISIONES (para perfiles comerciales):
  El SDR/AE cobra comisión sobre las reuniones o deals generados.
  Estructura típica: salario fijo (50-60%) + variable (40-50%).
  El acelerador: por encima de cuota, la comisión aumenta (incentiva superar el objetivo).
```

**Componente 3 — Equity (acciones o stock options):**
```
Para startups: el instrumento de compensación más poderoso para competir con grandes empresas.
La realidad del equity:
→ Las stock options no tienen valor hasta el exit o una ronda que ponga precio.
→ El empleado debe entender esto claramente (no vender el equity como si fuera salario seguro).

Cómo comunicar el equity de forma honesta:
"Te damos X stock options. Si la empresa llega a la valoración Y (que es el objetivo a 5 años),
tu paquete valdría Z. Es una apuesta, no una certeza, pero es nuestra apuesta compartida."
```

**Componente 4 — Beneficios con alto impacto en retención:**
```
Los beneficios con mayor ROI en retención (datos de estudios de engagement):
1. Flexibilidad horaria y de lugar de trabajo (remote/hybrid): el más valorado por la mayoría.
2. Seguro médico privado (España: coste empresa ~€50-100/mes/empleado → valorado en €200-300/mes por el empleado).
3. Retribución flexible (tickets restaurante, transporte, guardería): ahorro fiscal para el empleado.
4. Presupuesto de formación y desarrollo (€500-2.000€/año) → muy valorado en perfiles tech.
5. Días de vacaciones adicionales (25 días en lugar de 22 legales).

Los beneficios con menor ROI (caros para la empresa, poco valorados):
→ Fruta en la oficina, futbolín, mesa de ping-pong.
→ La oficina bonita sin flexibilidad → el empleado prefiere la flexibilidad a la oficina.
```

**Componente 5 — Desarrollo de carrera:**
```
No es un beneficio económico directo pero es el predictor de retención más potente a largo plazo.
→ Plan de carrera claro (sabe adónde puede llegar y qué necesita para llegar)
→ Presupuesto de formación y tiempo para usarlo (no solo el dinero, también el tiempo)
→ Proyectos desafiantes que desarrollan nuevas habilidades
```

### 💬 El Total Rewards Statement: cómo comunicar el valor total del paquete
El documento anual que muestra al empleado el coste total de su compensación (salario + variable + seguro médico + equity + beneficios) para que comprenda que el coste para la empresa es significativamente mayor que el salario bruto que ve en la nómina.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Compensación total, retribución flexible, bandas salariales, equity empleados, beneficios retención talento',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Consolidación financiera de grupo empresarial: cómo preparar las cuentas consolidadas correctamente',
                'description'       => 'Prepara las cuentas consolidadas de un grupo empresarial con participadas eliminando las operaciones intragrupo y consolidando las participaciones para presentar la imagen fiel de la situación financiera del grupo ante inversores, entidades financieras o la auditoría.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director Financiero con experiencia preparando y revisando cuentas consolidadas de grupos empresariales de 3-15 sociedades, donde la calidad del proceso de consolidación determina la credibilidad de los estados financieros ante auditores, inversores y entidades financieras.

Contexto:
- Número de sociedades del grupo: [N]
- Tipo de relación: [matriz + filiales 100% / matriz con participaciones minoritarias / joint ventures]
- Herramienta de consolidación actual: [Excel / ERP con módulo de consolidación / sin proceso formal]
- El mayor reto: [eliminar las operaciones intragrupo correctamente / gestionar las diferencias de consolidación / la complejidad de las participaciones minoritarias]

## Consolidación Financiera de Grupo — [Grupo]

### 🗺️ Qué es y por qué es necesaria la consolidación financiera

**El problema que resuelve la consolidación:**
```
Sin consolidación: la matriz puede tener una filial que le compra todos sus productos.
Los ingresos de la matriz incluyen ventas a la filial → el P&L de la matriz parece mayor.
El balance de la filial incluye un pasivo con la matriz → el grupo parece más endeudado de lo que está.
Si ambas son del mismo dueño, esas transacciones no son reales desde la perspectiva del grupo.

La consolidación elimina esas transacciones intragrupo y presenta el grupo como si fuera
una sola entidad económica.
```

**Cuándo es obligatoria la consolidación:**
```
En España, el Código de Comercio (art. 42) obliga a consolidar cuando una sociedad:
→ Tiene mayoría de derechos de voto en otra
→ Tiene el derecho a nombrar o cesar a la mayoría de los administradores de otra
→ Tiene el poder para dirigir las políticas financieras y de explotación de otra

Exenciones de la obligación de consolidar (art. 43 C.Com.):
→ Grupos pequeños: si el conjunto de las sociedades no supera 2 de estos 3 límites:
  4.000 empleados, €11.4M de activo, €22.8M de facturación neta.
→ Si la sociedad matriz está a su vez sujeta a consolidación por otra empresa superior del grupo.
```

### 📋 El proceso de consolidación: los 6 pasos

**Paso 1 — Definición del perímetro de consolidación:**
```
Identifica todas las sociedades del grupo y su método de consolidación:
→ Integración global (>50% de control): la filial se consolida al 100% con ajuste de minoritarios.
→ Integración proporcional (joint ventures): se consolida el % de participación.
→ Puesta en equivalencia (20-50% de participación significativa): no se consolidan línea a línea,
  se ajusta el valor de la participación por el % de resultado generado.
```

**Paso 2 — Homogeneización contable:**
```
Antes de consolidar, todas las sociedades deben usar los mismos criterios contables.
Si la filial amortiza el inmovilizado en 10 años y la matriz en 7 → hay que homogeneizar.
Si la filial tiene su moneda funcional en USD y la matriz en EUR → conversión de divisas.
```

**Paso 3 — Eliminación de la inversión y los fondos propios de la filial:**
```
En el balance consolidado, eliminamos:
→ La participación en filiales del activo de la matriz
→ Los fondos propios de la filial
La diferencia entre el precio de adquisición y el valor contable de los fondos propios
adquiridos = Diferencia de primera consolidación (fondo de comercio o reservas de consolidación).
```

**Paso 4 — Eliminación de operaciones intragrupo:**
```
En el P&L consolidado, eliminamos:
→ Las ventas de la matriz a filiales y las compras de la filial a la matriz (compras/ventas intragrupo)
→ Los dividendos pagados entre sociedades del grupo
→ Los resultados de las transacciones intragrupo (el beneficio de la venta intragrupo hasta que
  el activo no se venda a terceros)

En el balance consolidado, eliminamos:
→ Los saldos de deudores y acreedores intragrupo (se anulan mutuamente)
→ Los préstamos entre sociedades del grupo
```

**Paso 5 — Ajuste de minoritarios:**
```
Si la filial no está participada al 100%, la parte de los fondos propios y del resultado
que corresponde a los socios externos (minoritarios) se presenta por separado.
Intereses minoritarios en el balance → en los fondos propios pero separados de los del grupo.
Resultado atribuible a minoritarios en el P&L → se deduce del resultado consolidado total.
```

**Paso 6 — Preparación de los estados financieros consolidados:**
```
Los documentos que componen las cuentas consolidadas:
→ Balance de situación consolidado
→ Cuenta de pérdidas y ganancias consolidada
→ Estado de cambios en el patrimonio neto consolidado
→ Estado de flujos de efectivo consolidado
→ Memoria consolidada (con el detalle de las sociedades del grupo, métodos de valoración, etc.)
```

### 🛠️ Las herramientas de consolidación: Excel vs. ERP
La evaluación de cuándo Excel es suficiente (hasta 3-4 sociedades con estructura sencilla) y cuándo es necesario un ERP con módulo de consolidación (SAP BPC, Oracle HFM, Jedox, Tagetik), con los criterios de decisión y el coste/beneficio de la inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Consolidación financiera grupo, cuentas consolidadas, eliminación intragrupo, fondo comercio consolidación, CCAA consolidadas',
                'vote_score'        => 22,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección de datos en el desarrollo de software: RGPD para equipos de producto y tecnología',
                'description'       => 'Implementa los requisitos del RGPD en el desarrollo de software desde el equipo de producto y tecnología con los principios de privacy by design, la gestión del consentimiento, el registro de actividades de tratamiento y las medidas de seguridad técnica que exige la regulación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Data Privacy Engineer con experiencia implementando los requisitos del RGPD en equipos de producto y tecnología donde la protección de datos no es solo una obligación legal sino una ventaja competitiva ante clientes enterprise que auditan a sus proveedores.

Contexto:
- Tipo de datos personales que maneja tu producto: [email + nombre / datos de comportamiento / datos financieros / datos de salud / datos de menores]
- Tipo de usuarios: [consumidores / empresas (B2B) / empleados internos]
- Estado actual del cumplimiento: [sin proceso / cumplimiento básico / queremos profundizar / auditoría próxima]

## RGPD para Equipos de Producto y Tecnología — [Empresa]

### 🧠 Los 7 principios del RGPD que afectan al diseño del producto

**Principio 1 — Licitud, lealtad y transparencia:**
```
Debes tener una base legal para cada tratamiento de datos personales.
Las 6 bases legales del RGPD:
1. Consentimiento del interesado (la más usada en apps de consumo)
2. Ejecución de un contrato (cuando procesas datos para prestar el servicio contratado)
3. Cumplimiento de una obligación legal (facturas, retenciones fiscales)
4. Interés vital (emergencias médicas)
5. Interés público (organismos públicos)
6. Interés legítimo (el más flexible, pero requiere una evaluación de intereses en juego)

IMPORTANTE: no uses el consentimiento como base legal cuando puedes usar "ejecución de contrato".
El consentimiento es la base más débil (el usuario puede retirarlo en cualquier momento).
```

**Principio 2 — Limitación de finalidad:**
```
Los datos recogidos para una finalidad no pueden usarse para otra.
Si recoges el email para enviar la factura, no puedes usarlo para marketing sin base legal adicional.
Implicación en el diseño del producto: cada tratamiento necesita documentar su finalidad.
```

**Principio 3 — Minimización de datos:**
```
Solo recoge los datos estrictamente necesarios para la finalidad declarada.
El campo de formulario que añades "porque puede ser útil en el futuro" es una violación del principio.
Revisión periódica: ¿sigues usando todos los datos que recogiste? Si no → borra los que ya no necesitas.
```

**Principio 4 — Exactitud:**
```
Los datos deben estar actualizados. Necesitas un proceso para que los usuarios puedan corregir sus datos.
```

**Principio 5 — Limitación del plazo de conservación:**
```
No puedes guardar datos personales indefinidamente.
Para cada tipo de dato, define un plazo de retención:
→ Datos de clientes activos: mientras dure la relación + los plazos legales de conservación (ej: facturas, 6 años en España por obligación fiscal).
→ Datos de usuarios que se dieron de baja: eliminación o anonimización en 30-90 días (salvo obligación legal).
→ Logs del sistema con datos personales: máximo 12-24 meses.
```

**Principio 6 — Integridad y confidencialidad (seguridad):**
```
Medidas técnicas que el RGPD considera adecuadas para la mayoría de sistemas:
→ Cifrado en tránsito (HTTPS/TLS) y en reposo (para datos sensibles)
→ Control de acceso mínimo privilegio (solo puede acceder a los datos quien lo necesita para su función)
→ Gestión de contraseñas: hashing con bcrypt/argon2 — NUNCA texto plano
→ Logs de acceso a datos sensibles (quién accedió a qué y cuándo)
→ Plan de respuesta a brechas de seguridad (el RGPD exige notificar en 72 horas)
```

**Principio 7 — Responsabilidad proactiva (accountability):**
```
No basta con cumplir — debes poder demostrarlo.
Los documentos que materializan el accountability:
→ Registro de actividades de tratamiento (RAT): el inventario de todos los tratamientos de datos personales.
→ Evaluaciones de impacto (EIPD/DPIA): obligatorias para tratamientos de alto riesgo.
→ Contratos con encargados del tratamiento (art. 28 RGPD): con todos tus proveedores que tratan datos en tu nombre.
```

### 🛠️ Privacy by Design: cómo integrar la protección de datos en el proceso de desarrollo
El checklist de privacidad para la revisión de nuevas features (preguntas que el equipo de producto debe responder antes de lanzar), el proceso de DPIA (evaluación de impacto) para features de alto riesgo y cómo documentar las decisiones de privacidad en el código y en los tickets.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'RGPD desarrollo software, privacy by design, protección datos producto, RAT RGPD, consentimiento RGPD',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Voz del cliente (VoC) en soporte: cómo convertir el feedback de los tickets en mejoras del producto',
                'description'       => 'Construye el sistema de captura y análisis de la voz del cliente (VoC) desde el equipo de soporte que convierte el feedback de los tickets en insights accionables para el equipo de producto. Con el proceso de categorización, la cadencia de reporting y el ritual de colaboración entre soporte y producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Insights Manager con experiencia implementando sistemas de VoC en equipos de soporte de SaaS donde la información que fluye desde los tickets al equipo de producto ha mejorado la priorización del roadmap y reducido el volumen de tickets recurrentes al atacar los problemas raíz en el producto.

Contexto:
- Tipo de empresa: [SaaS B2B / app de consumo / plataforma / otro]
- Volumen de tickets mensual: [N tickets/mes]
- Herramienta de soporte: [Zendesk / Intercom / Freshdesk / otro]
- El problema actual: [el equipo de producto no escucha a soporte / recogemos feedback pero no lo procesamos / no tenemos un proceso de VoC formal]

## Voz del Cliente (VoC) desde Soporte — [Empresa]

### 🧠 Por qué el equipo de soporte es la fuente de VoC más infrautilizada

**El paradójico privilegio del soporte:**
```
El equipo de soporte habla con los clientes más comprometidos (los que tienen un problema
y se toman el tiempo de contactar).
Estos clientes expresan su frustración de forma clara y directa.
Ningún otro equipo tiene ese acceso directo y continuo al dolor del cliente.

El problema: esa información rara vez sale del inbox de soporte.
El equipo de producto trabaja con encuestas de NPS, métricas de uso y roadmaps estratégicos.
El feedback más crudo y específico del cliente se queda en el CRM de soporte.
```

### 📋 El sistema de captura de VoC: categorización de tickets en el momento de la resolución

**El error habitual:**
```
Categorizar el feedback después (en un proceso separado de análisis) → demasiado costoso en tiempo → nunca se hace de forma consistente.

El sistema que funciona: el agente categoriza el ticket en el momento de resolverlo.
Coste: 30-60 segundos por ticket.
Requerimiento: campos obligatorios de categorización en la herramienta de soporte.
```

**La taxonomía de categorías para el VoC:**
```
CATEGORÍA NIVEL 1 (el tipo de feedback):
→ BUG: el producto no funciona como debería.
→ FEATURE REQUEST: el cliente pide algo que no existe.
→ UX CONFUSION: el cliente no entiende cómo usar algo que ya existe.
→ PRICING/BILLING: feedback sobre el precio o la facturación.
→ ONBOARDING: problemas en el proceso de inicio con el producto.
→ DOCUMENTATION: falta documentación o está desactualizada.

CATEGORÍA NIVEL 2 (el área del producto):
→ [Lista de los módulos o áreas principales del producto]

CAMPO LIBRE (el insight específico):
→ Una frase que captura la esencia del feedback (para los bugs y feature requests más repetidos).
```

**Implementación en Zendesk:**
```
Campos personalizados de ticket:
→ "Tipo de VoC" (lista desplegable con las categorías)
→ "Área del producto" (lista desplegable)
→ "Descripción del insight" (campo de texto)
→ "Reproducible por el equipo técnico" (sí/no, solo para bugs)
Hacer los campos obligatorios al resolver un ticket → garantiza que se rellenan.
```

### 📊 El reporting de VoC: de los datos al insight accionable

**El informe mensual de VoC (preparado por el lead de soporte, presentado al Head of Product):**
```
SECCIÓN 1 — Resumen ejecutivo:
  → Top 5 issues más reportados este mes (con volumen y tendencia vs. mes anterior)
  → Los 3 feature requests más solicitados
  → Los 2 bugs críticos recurrentes (ya reportados al equipo de ingeniería)

SECCIÓN 2 — Top Issues con context:
  Para cada uno de los top 5:
  → Número de tickets únicos
  → Ejemplo de cita real del cliente (anónima)
  → Impacto estimado en churn o en NPS (si hay datos)
  → ¿Ya está en el backlog del producto? ¿En qué estado?

SECCIÓN 3 — Tendencias emergentes:
  → Issues que están creciendo aunque aún son bajo volumen (señal de alerta temprana)
```

### 🤝 El ritual de colaboración soporte-producto: la reunión mensual que cierra el loop
La reunión mensual de 60 minutos entre el lead de soporte y el Head of Product (o el PM responsable) con la agenda estructurada, el proceso de priorización conjunta del feedback y el mecanismo de feedback loop al equipo de soporte sobre qué se ha hecho con los insights que aportaron.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Voz del cliente soporte, VoC customer support, feedback producto desde soporte, categorización tickets, soporte y producto',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Escalar el negocio freelance sin contratar: sistemas y procesos que multiplican tu capacidad',
                'description'       => 'Escala tu capacidad como freelance sin contratar empleados ni perder el control de la calidad mediante la creación de sistemas, plantillas y procesos que reducen el tiempo por proyecto y te permiten servir a más clientes o proyectos con la misma calidad y menos esfuerzo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Systems Coach con experiencia ayudando a profesionales independientes a doblar su capacidad de facturación sin doblar sus horas de trabajo mediante la creación de sistemas y procesos que hacen que el trabajo repetitivo se ejecute más rápido y con más consistencia.

Perfil:
- Tu especialidad: [describe tu servicio]
- Situación actual: [tengo más proyectos de los que puedo gestionar / quiero servir a más clientes sin trabajar más horas / quiero reducir el tiempo por proyecto]
- El tipo de trabajo que más tiempo te consume: [la parte repetitiva que haces en cada proyecto]

## Escalar el Freelance sin Contratar — [Especialidad]

### 🔭 El análisis de capacidad: dónde se pierde el tiempo

**El mapa de cada proyecto:**
```
Dibuja el flujo de trabajo de un proyecto típico, paso a paso.
Marca cada paso con:
→ TIEMPO que dedicas (horas)
→ TIPO de tarea: estratégica (requiere tu juicio) / operativa (proceso repetible) / administrativa

Ejemplo para un consultor de estrategia de marketing:
1. Reunión de briefing con el cliente [2h — estratégica]
2. Investigación y análisis del sector [6h — operativa]
3. Diseño de la estrategia [4h — estratégica]
4. Redacción de la presentación [5h — operativa]
5. Revisión con el cliente [1.5h — estratégica]
6. Correcciones [2h — operativa]
7. Facturación y seguimiento [1h — administrativa]
Total: 21.5h / proyecto

Las tareas operativas y administrativas = 14h (65% del tiempo).
Objetivo: reducir ese 65% con sistemas sin comprometer las 7.5h estratégicas.
```

### 🏗️ Los 4 sistemas que escalan la capacidad freelance

**Sistema 1 — Plantillas maestras de entregables:**
```
El primer proyecto de cada tipo lo haces desde cero.
El segundo usa la estructura del primero.
El décimo usa una plantilla tan buena que reduces el tiempo a la mitad.

Los entregables que más se benefician de tener plantilla:
→ Propuestas comerciales (estructura idéntica, solo cambia el problema específico)
→ Informes y presentaciones (la narrativa y el diseño ya están hechos)
→ Emails de seguimiento y comunicaciones tipo
→ Documentos de onboarding del cliente

Cómo construir la plantilla maestra:
1. Al terminar un proyecto, extrae las partes reutilizables.
2. Generaliza los específicos: "[Nombre del cliente]" en lugar del nombre real.
3. Añade notas sobre dónde personalizar y por qué.
4. Guarda en una carpeta de plantillas accesible.
```

**Sistema 2 — El checklist de proyecto:**
```
La diferencia entre un proyecto que fluye y uno que se estanca suele ser la falta de un proceso claro.
El checklist elimina el "¿qué toca ahora?" y el olvido de pasos.

Cómo construirlo:
1. Lista todos los pasos de tu proceso de trabajo (del briefing a la facturación).
2. Añade los materiales que necesitas del cliente en cada paso.
3. Añade los entregables que produces en cada paso.
4. Guarda como template en Notion, ClickUp o Trello.
5. Al empezar cada proyecto nuevo → duplica el template.

Beneficio adicional: si algún día subcontratas → el checklist es el manual del proceso.
```

**Sistema 3 — La biblioteca de respuestas frecuentes:**
```
¿Cuántas veces has escrito el mismo email explicando el mismo proceso?
→ Cómo funciona tu proceso de revisiones
→ Cómo se estructura la facturación
→ Cómo enviar el feedback sobre un entregable
→ Qué pasa si el proyecto se alarga más de lo previsto

Crea una carpeta con las 20 respuestas más frecuentes.
Cada vez que escribes un email que ya has escrito antes → va a la biblioteca.
Cada vez que lo necesitas → copia, personaliza en 2 minutos, envía.
```

**Sistema 4 — La automatización del proceso de onboarding de cliente:**
```
Cada vez que firmas un cliente nuevo, probablemente haces las mismas cosas:
→ Enviar el contrato
→ Pedir el pago inicial
→ Enviar el cuestionario de briefing
→ Agendar el kickoff

Con Zapier / Make (antes Integromat):
Cuando el cliente firma el contrato en PandaDoc → automáticamente:
→ Se envía el email de bienvenida con el link de pago
→ Se crea el proyecto en tu herramienta de gestión
→ Se manda el cuestionario de briefing
→ Se añade una tarea en tu calendario para el seguimiento en 48h si no responde

Tiempo de configuración: 2-3 horas.
Tiempo ahorrado: 45-60 minutos por cliente nuevo.
```

### 📊 El modelo de precios por proyecto vs. por hora: cuál te permite escalar mejor
La comparativa de los modelos de facturación (por hora, por proyecto, por resultado, retainer mensual) y cuál de ellos te beneficia más a medida que te vuelves más eficiente con tus sistemas — porque con los sistemas correctos, deberías cobrar más por proyecto, no menos, aunque tardes menos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Escalar freelance, sistemas freelance, plantillas trabajo freelance, automatización freelance, capacidad freelance',
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
