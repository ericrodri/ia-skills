<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills28Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de influencer marketing: micro-influencers que convierten sin el presupuesto de una gran marca',
                'description'       => 'Diseña la estrategia de influencer marketing que genera ventas reales usando micro-influencers (5k-100k seguidores) en lugar de macro-influencers. Con el proceso de selección, el briefing al influencer, la negociación del acuerdo y cómo medir el ROI de cada colaboración.',
                'prompt_content'    => <<<'PROMPT'
Eres un Influencer Marketing Manager con experiencia gestionando más de 200 campañas con micro-influencers en sectores como moda, tecnología, alimentación y lifestyle, con tasas de conversión del 3-8% en comparación con el 0.8% promedio de la publicidad display.

Contexto:
- Tipo de producto/servicio: [describe el producto o servicio]
- Sector: [moda / tecnología / alimentación / fitness / finanzas personales / otro]
- Presupuesto mensual para influencer marketing: [€]
- Redes sociales objetivo: [Instagram / TikTok / YouTube / LinkedIn / todas]
- Objetivo de la campaña: [awareness / conversiones directas / contenido UGC / lanzamiento de producto]

## Estrategia de Influencer Marketing — [Marca]

### 🎯 Por qué los micro-influencers superan a los macro-influencers en ROI

**Los números que cambian la conversación:**
```
Macro-influencer (>500k seguidores):
- Engagement rate medio: 1.2%
- Coste por post: €5.000 - €50.000
- Audiencia: masiva pero poco segmentada
- Autenticidad percibida: baja (el público sabe que es publicidad)

Micro-influencer (10k - 100k seguidores):
- Engagement rate medio: 4.5-7%
- Coste por post: €200 - €2.000
- Audiencia: muy segmentada y fiel
- Autenticidad percibida: alta (recomendación de "alguien como yo")
```

Con €10.000 de presupuesto:
- 1 macro-influencer (200k seguidores, 1.2% engagement) → 2.400 interacciones
- 20 micro-influencers (15k seguidores, 5% engagement) → 15.000 interacciones

### 🔍 Cómo encontrar y seleccionar los influencers correctos

**Los criterios de selección que importan:**

```
1. ALINEACIÓN CON LA AUDIENCIA (lo más importante):
   ¿Los seguidores del influencer son tu cliente ideal?
   No mires los seguidores del influencer — mira los seguidores de sus seguidores.
   Señales: comentarios relevantes, preguntas de compra, menciones de marcas similares.

2. ENGAGEMENT RATE REAL (no el de los seguidores inflados):
   Fórmula: (likes + comentarios) / seguidores × 100
   Benchmark:
   - Instagram: >3% bueno, >6% excelente
   - TikTok: >5% bueno, >10% excelente
   - Señal de alerta: muchos seguidores + <1% engagement = seguidores comprados

3. LA CALIDAD DE LOS COMENTARIOS:
   Comentarios reales: "¿Dónde lo compré?" / "Lo tengo y es increíble" / "Mi madre necesita esto"
   Comentarios de bot: "🔥🔥" / "Nice!" / "Follow for follow"

4. CONTENIDO RECIENTE Y CONSISTENCIA:
   ¿Publica con frecuencia regular? (al menos 1-2 veces/semana)
   ¿El estilo visual es coherente con tu marca?
   ¿Ha trabajado con marcas competidoras recientemente?
```

**Herramientas para encontrar influencers:**
```
Gratuitas:
- Búsqueda manual en Instagram/TikTok por hashtags de tu sector
- Buscar quién etiqueta a marcas similares a la tuya
- Menciones espontáneas: clientes que ya hablan de tu marca

De pago:
- Heepsy, Upfluence, Grin — bases de datos con filtros de engagement y audiencia
- Later Influence — para campañas en Instagram
- TikTok Creator Marketplace — directamente en la plataforma
```

### 📋 El briefing al influencer que produce el contenido que necesitas

**Lo que debe incluir el brief:**
```
1. El contexto de marca (2 párrafos — no hagas un PDF de 20 páginas):
   Qué hacemos, para quién, qué nos diferencia.

2. El objetivo del contenido:
   "Queremos que tu audiencia descubra [producto] y entienda cómo soluciona [problema]."

3. Los mensajes clave (máximo 3):
   - El beneficio principal
   - La propuesta diferencial
   - El CTA (qué queremos que hagan: visitar la web / usar el código descuento / seguir la cuenta)

4. Los must-haves (lo que sí o sí debe aparecer):
   - Mención del nombre de la marca
   - El enlace o código de descuento
   - El hashtag de la campaña (si aplica)

5. Los must-avoids (lo que no debe aparecer):
   - Mencionar a la competencia
   - Estilo de contenido que no encaja con tu marca

6. La libertad creativa (lo más importante):
   "El formato, el guión y el tono son totalmente tuyos. Confiamos en tu criterio."
   Los influencers que tienen libertad producen mejor contenido que los que siguen guiones.
```

### 💰 La negociación del acuerdo y el cálculo del ROI
El modelo de pago (fee fijo, comisión por ventas, productos gratuitos o mixto), las cláusulas del contrato de colaboración y el dashboard de métricas para calcular el CPV (coste por venta) de cada influencer.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Influencer marketing, micro-influencers, UGC, colaboraciones marca, engagement rate',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de microservicios: cuándo dividir el monolito y cómo hacerlo sin destruir el equipo',
                'description'       => 'Decide cuándo tiene sentido pasar de un monolito a microservicios y cómo ejecutar la transición sin interrumpir el servicio ni el equipo. Con los patrones de descomposición, la gestión de la comunicación entre servicios, las trampas más comunes y cuándo el monolito es la respuesta correcta.',
                'prompt_content'    => <<<'PROMPT'
Eres un Software Architect con experiencia liderando migraciones de arquitecturas monolíticas a microservicios en empresas de 20-500 ingenieros, habiendo visto tanto los éxitos como los fracasos de esta transición.

Contexto:
- Stack actual: [describe el monolito: lenguaje, framework, base de datos]
- Tamaño del equipo de ingeniería: [N personas]
- El problema que quieres resolver con microservicios: [escalabilidad / velocidad de desarrollo / equipos independientes / otro]
- Tamaño del monolito: [N líneas de código / N módulos / antigüedad]

## Arquitectura de Microservicios — [Empresa]

### ⚠️ La pregunta que debes responder primero: ¿necesitas realmente microservicios?

**Los microservicios resuelven problemas de organización, no de código.**

La regla de Martin Fowler (arquitecto de microservicios):
> "No empieces con microservicios. Empieza con un monolito bien estructurado y divídelo cuando el monolito ya no escale."

**Los síntomas que indican que SÍ necesitas microservicios:**
```
✅ Múltiples equipos trabajan en el mismo código y se bloquean mutuamente
✅ Diferentes partes del sistema tienen necesidades de escalado muy distintas
   (ej: el módulo de búsqueda necesita 100x más recursos que el módulo de admin)
✅ Necesitas tecnologías distintas para partes distintas del sistema
✅ Los ciclos de deploy son tan lentos que están bloqueando el equipo
✅ El equipo tiene >15 ingenieros trabajando en el mismo codebase
```

**Los síntomas que indican que NO necesitas microservicios:**
```
❌ Equipo pequeño (<8 ingenieros): la coordinación de microservicios va a costaros más de lo que ganáis
❌ El monolito funciona bien y el equipo es productivo — "si no está roto, no lo arregles"
❌ El sistema no tiene suficiente tráfico como para necesitar escalado diferenciado
❌ La razón principal es "microservicios está de moda"
```

### 🔪 Los patrones de descomposición del monolito

**Patrón 1: Strangler Fig (el más recomendado para monolitos en producción)**
No reescribes todo — extraes funcionalidades pieza a pieza mientras el monolito sigue funcionando.

```
1. Pones un proxy/API Gateway delante del monolito
2. Extraes la primera funcionalidad a un microservicio nuevo
3. El proxy redirige las llamadas a esa funcionalidad al nuevo microservicio
4. El monolito sigue funcionando para el resto
5. Repites hasta que el monolito se ha vaciado por completo
```

La ventaja: nunca hay un "big bang rewrite" que deja el sistema roto durante meses.

**Patrón 2: Separar por bounded contexts (Domain-Driven Design)**
Identifica los dominios del negocio que son genuinamente independientes.

```
Ejemplo: plataforma de ecommerce
Dominio 1: Catálogo de productos (lectura intensiva)
Dominio 2: Gestión de pedidos (escritura intensiva)
Dominio 3: Pagos (requiere máxima seguridad y compliance)
Dominio 4: Logística (dependencias con proveedores externos)
Dominio 5: Usuarios y autenticación (compartido por todos)
```

Cada bounded context puede ser un microservicio.
Si dos "servicios" comparten la misma base de datos → no son microservicios, son un monolito distribuido (peor que el monolito original).

### 🔗 La comunicación entre servicios: el mayor dolor de los microservicios

**Comunicación síncrona (REST/gRPC):**
```
Cuándo usarla: cuando necesitas la respuesta para continuar
Riesgo: cascading failures — si el servicio B cae, el servicio A que lo llama también falla
Mitigation: circuit breakers (Hystrix, Resilience4j), timeouts agresivos, retries con backoff
```

**Comunicación asíncrona (eventos/mensajes):**
```
Herramientas: Kafka, RabbitMQ, AWS SNS/SQS
Cuándo usarla: cuando puedes procesar la respuesta después (notificaciones, actualizaciones)
Ventaja: si el servicio B cae, los mensajes se quedan en la cola y se procesan cuando vuelva
```

**El patrón Saga para transacciones distribuidas:**
El mayor problema de los microservicios: las transacciones que cruzan servicios.
En un monolito: `BEGIN TRANSACTION` + `COMMIT` lo resuelve todo.
En microservicios: cada servicio tiene su propia base de datos — las transacciones distribuidas son el infierno.

Solución: Saga pattern (coreografía o orquestación de compensaciones).

### 📏 Los problemas que nadie te cuenta antes de migrar
La complejidad operacional real de los microservicios (tracing distribuido, gestión de configuración, service discovery) y cuándo el "modular monolith" es la mejor arquitectura para equipos medianos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Microservicios, arquitectura software, strangler fig, DDD, migración monolito',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de formularios complejos: el formulario multi-paso que los usuarios terminan sin frustración',
                'description'       => 'Diseña formularios complejos (multi-step, largos, con lógica condicional) que los usuarios completan sin abandonar a mitad. Con la estructura de pasos, la validación en tiempo real, el manejo de errores, el progreso visual y los patrones de UX que reducen el abandono en un 40%.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Designer especializado en conversión de formularios con experiencia diseñando flujos de checkout, formularios de onboarding y procesos de solicitud que han aumentado las tasas de completado del 45% al 78% mediante mejoras de UX.

Contexto:
- Tipo de formulario: [onboarding / solicitud / checkout / registro / encuesta / otro]
- Número de campos: [N campos en total]
- Estado actual: [tasa de abandono alta / queremos diseñar desde cero / mejorar el existente]
- Dispositivo principal: [desktop / móvil / ambos]

## Diseño de Formularios Complejos — [Producto]

### 🧠 El principio del formulario que se completa: reduce la carga cognitiva

**Por qué abandonan los formularios (en orden de impacto):**
```
1. El formulario parece largo al principio (efecto de ansiedad de la longitud)
2. Los errores de validación aparecen demasiado tarde (después de enviar)
3. El usuario no sabe cuánto falta (sin indicador de progreso)
4. Preguntas en el momento equivocado (piden datos que asustan antes de crear confianza)
5. El formulario no guarda el progreso (tener que volver a empezar)
```

### 📋 La estructura del formulario multi-paso

**El principio de separación: un tema por paso**
```
Checkout (3 pasos):
Paso 1: Información personal (nombre, email)
Paso 2: Dirección de envío
Paso 3: Pago y confirmación

Onboarding SaaS (4 pasos):
Paso 1: Sobre ti (nombre, cargo, empresa)
Paso 2: Sobre tu equipo (tamaño, sector)
Paso 3: Tu objetivo con el producto (use case)
Paso 4: Configuración inicial (invita al equipo, importa datos)
```

**El indicador de progreso que funciona:**
```
❌ "Paso 2 de 6" — el número de pasos totales asusta
✅ Barra de progreso visual (33% completado) — percepción de avance, no de distancia

El truco psicológico: empieza la barra al 10-15%, no al 0%.
Un usuario que ve que ya lleva algo hecho es más probable que continúe.
```

### ✅ La validación que no frustra

**Validación en tiempo real (inline validation):**
```
✅ Valida CUANDO EL USUARIO SALE DEL CAMPO (onBlur), no mientras escribe
❌ No valides mientras el usuario escribe — interrumpe el pensamiento
❌ No esperes a que el usuario envíe el formulario para mostrar errores

El patrón correcto:
1. El usuario escribe en el campo
2. El usuario pasa al siguiente campo (blur)
3. Inmediatamente aparece ✅ (correcto) o ❌ con el mensaje de error específico
```

**Los mensajes de error que ayudan:**
```
❌ MAL: "Email inválido"
✅ BIEN: "Introduce un email válido, como nombre@empresa.com"

❌ MAL: "El campo es obligatorio"
✅ BIEN: "Necesitamos tu número de teléfono para enviarte el código de confirmación"

La regla: el mensaje de error debe decir QUÉ está mal Y CÓMO corregirlo.
```

**La validación del lado del servidor (feedback post-submit):**
```
Si el servidor detecta un error (email ya registrado, DNI inválido):
1. Hacer scroll automático al primer campo con error
2. Marcar visualmente el campo (borde rojo, icono de error)
3. El mensaje de error aparece DEBAJO del campo, no en un alert
4. Mantener todos los datos que el usuario ya introdujo
```

### 📱 El formulario en móvil: los detalles que cambian todo

**El tipo de teclado correcto para cada campo:**
```
inputmode="numeric"    → para códigos postales, teléfonos (sin letras)
type="email"           → abre teclado con @ en móvil
type="tel"             → abre teclado numérico de teléfono
type="date"            → abre selector de fecha nativo
autocomplete="..."     → el relleno automático ahorra 50% del tiempo de entrada
```

**La accesibilidad que afecta a la tasa de conversión:**
```
Label siempre visible (no solo como placeholder — el placeholder desaparece al escribir)
El área de tap de botones y checkboxes: mínimo 44×44px
El orden del focus con teclado debe ser lógico (Tab key navigation)
```

### 💾 El guardado automático y la recuperación del formulario
El patrón de auto-save en localStorage que recupera el progreso del usuario si cierra el navegador, y cuándo pedir confirmación antes de borrar los datos guardados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseño formularios, UX formularios, form design, multi-step form, validación inline',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Account-Based Marketing (ABM): el sistema que alinea ventas y marketing para atacar las cuentas que importan',
                'description'       => 'Implementa la estrategia de Account-Based Marketing que hace que ventas y marketing trabajen hacia las mismas cuentas objetivo con mensajes personalizados. Con la selección de cuentas target, la personalización del contenido por cuenta, la coordinación del outreach y cómo medir el éxito del programa ABM.',
                'prompt_content'    => <<<'PROMPT'
Eres un ABM Strategist con experiencia implementando programas de Account-Based Marketing en empresas B2B con tickets medios de €20.000-200.000 ARR, donde la personalización por cuenta ha reducido el ciclo de ventas un 30% y aumentado el win rate un 25%.

Contexto:
- Tipo de empresa: [SaaS B2B / servicios profesionales / consultoría / otro]
- ACV objetivo: [€ por cuenta]
- Número de cuentas target que quieres atacar: [N cuentas]
- Estado actual de ventas y marketing: [trabajan por separado / empezamos a coordinarnos / queremos un programa ABM estructurado]
- Herramientas disponibles: [HubSpot / Salesforce / LinkedIn Sales Navigator / otro]

## Programa ABM — [Empresa]

### 🎯 Los 3 tipos de ABM y cuál corresponde a tu situación

**ABM 1:1 (Strategic ABM):**
```
Para quién: empresas con tickets >€100k, <20 cuentas target
Personalización: máxima — contenido, eventos y propuestas 100% personalizados por cuenta
Inversión por cuenta: alta (€5.000-20.000 en contenido, eventos, outreach)
Equipos involucrados: 1 AE + 1 CSM + marketing dedicado por cuenta
```

**ABM 1:Few (ABM lite):**
```
Para quién: empresas con tickets €20k-100k, 20-100 cuentas target
Personalización: por segmento de cuentas (agrupadas por sector, tamaño, problema)
Inversión por cuenta: media (€500-2.000)
Equipos: AE + marketing con contenido personalizado por segmento
```

**ABM 1:Many (Programmatic ABM):**
```
Para quién: empresas con tickets €5k-20k, 100-1.000 cuentas target
Personalización: automática (nombre de empresa, sector, cargo en el contenido)
Inversión por cuenta: baja (personalización automatizada por herramientas)
```

### 📋 Paso 1: Cómo seleccionar las cuentas target correctas

**El proceso de selección con ventas (la reunión que define todo):**
```
Pregunta 1: ¿Cuáles son los 10 logos que más te gustaría tener en el portfolio?
Pregunta 2: ¿Cuáles son las cuentas donde tenemos contactos pero no oportunidades abiertas?
Pregunta 3: ¿Cuáles son las cuentas similares a nuestros mejores clientes actuales?

Los criterios de selección:
- Fit con el ICP (tamaño, sector, tecnología usada, momento de compra)
- Señales de intención (buscan proveedores, cambiaron de cargo decisor, crecimiento reciente)
- Presencia de contactos (¿tenemos ya alguna relación dentro de esa empresa?)
```

**El ICP scoring para priorizar:**
```
CRITERIO              PESO    PUNTUACIÓN (1-5)
Sector objetivo        25%    ×
Tamaño empresa         20%    ×
Presupuesto estimado   20%    ×
Señales de intención   20%    ×
Contactos existentes   15%    ×

Score total = suma ponderada
Tier A (>4.0): atacar en los próximos 30 días con ABM 1:1
Tier B (3.0-4.0): atacar en el próximo trimestre con ABM 1:Few
Tier C (<3.0): nurturing pasivo hasta señal de activación
```

### ✉️ La personalización del contenido y el outreach por cuenta

**El contenido personalizado por cuenta (sin duplicar el trabajo):**
```
Base común (70% del contenido):
- Case studies del sector (si atacas banca, tienes un case study de banca)
- ROI calculators con benchmarks del sector
- Webinar específico del sector o del problema

Personalización por cuenta (30%):
- El email o LinkedIn message menciona algo específico de esa empresa
- El landing page de la cuenta muestra el logo de esa empresa
- La propuesta tiene ejemplos del producto o mercado de esa empresa
```

### 📊 La reunión de sincronización ABM entre ventas y marketing (bi-semanal)
El formato de la reunión de 30 minutos que alinea a ambos equipos: qué cuentas avanzaron, qué cuentas están estancadas, qué contenido produjo resultados y los ajustes para las próximas 2 semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'ABM, Account-Based Marketing, ventas B2B, alineación ventas marketing, cuentas target',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de stakeholders en producto: alinea sin ceder el control de la hoja de ruta',
                'description'       => 'Gestiona las expectativas y demandas de los stakeholders internos (CEO, ventas, CS, inversores) sin que la hoja de ruta del producto se convierta en una lista de peticiones. Con el framework de priorización con stakeholders, cómo decir no sin que se sientan ignorados y cómo comunicar los cambios de plan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Product Manager con experiencia gestionando stakeholders en empresas de 50-500 personas donde el mayor reto no es definir qué construir sino alinear a las 8 personas que creen que su petición es la más importante.

Contexto:
- Tamaño de la empresa: [N personas]
- Stakeholders principales: [CEO / CTO / ventas / customer success / inversores / otro]
- El problema que quieres resolver: [todos me piden features / no sé cómo decir no / el roadmap cambia constantemente / no tengo autoridad formal]

## Gestión de Stakeholders — [Empresa]

### 🧠 El diagnóstico: ¿por qué la gestión de stakeholders es difícil en producto?

**La tensión fundamental:**
El product manager es responsable del producto pero no tiene autoridad formal sobre los stakeholders.
No puedes ordenar al CEO que deje de pedir features.
No puedes ignorar a ventas cuando dicen que un cliente se va a ir si no construyes X.

**El error más frecuente:**
El PM actúa como el "portero de los no" — siempre rechazando peticiones.
El resultado: los stakeholders le saltán por encima (van al CTO, al CEO, al equipo de desarrollo directamente).

**El enfoque correcto:**
El PM actúa como traductor entre la necesidad del negocio y la solución de producto.
Los stakeholders aportan el problema — el PM decide la solución.

### 📋 El framework de recogida de peticiones de stakeholders

**La reunión de 30 minutos que transforma las peticiones en insights:**

```
Cuando un stakeholder viene con una petición ("necesitamos la feature X"):
No digas: "Lo añado al backlog"
No digas: "No es una prioridad ahora mismo"

En cambio, pregunta:

Pregunta 1 — El problema:
"Cuéntame más sobre el contexto. ¿Qué problema o situación te ha llevado a pedir esto?"

Pregunta 2 — El impacto:
"Si tuviéramos esto construido, ¿qué cambiaría para ti / para el cliente / para la empresa?"

Pregunta 3 — La frecuencia y el alcance:
"¿Con qué frecuencia ocurre esto? ¿A cuántos clientes afecta?"

Pregunta 4 — La urgencia real:
"¿Qué pasaría si no lo construimos en los próximos 3 meses?"
```

Con estas 4 preguntas, en el 60% de los casos descubres que la petición de feature es en realidad un problema que ya puedes resolver con lo que existe, o que la urgencia es mucho menor de lo que parecía.

### 🗺️ Cómo comunicar el roadmap para que no genere falsas expectativas

**El roadmap con horizontes temporales:**
```
AHORA (próximas 4-6 semanas): comprometido y detallado
   - Feature A: lanzamiento semana 2 de [mes]
   - Fix B: semana 4

PRÓXIMO (próximos 2-3 meses): probable pero puede cambiar
   - Módulo X (Q3)
   - Mejora Y (Q3 o Q4 según resultados de X)

DESPUÉS (>3 meses): intención, no compromiso
   - Integración con Z (en evaluación)
   - Expansión internacional (pendiente de señal del mercado)
```

**La frase que salva el roadmap de las falsas expectativas:**
"Esto está en el roadmap de Q4, pero el roadmap es nuestra mejor estimación actual, no una promesa.
Si aprendemos algo nuevo que lo invalide, lo ajustaremos y os comunicaremos el cambio."

### ❌ Cómo decir no sin destruir la relación
El framework DEAR (Delay, Explain, Alternatives, Revisit) para rechazar peticiones de stakeholders de forma que se sientan escuchados y respetados, y las situaciones donde sí tiene sentido ceder.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión stakeholders, product manager, roadmap, priorización, decir no en producto',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos multigeneracionales: lidera a Baby Boomers, Millennials y Gen Z sin estereotipos',
                'description'       => 'Gestiona equipos donde conviven personas de diferentes generaciones con distintas expectativas sobre el trabajo, la comunicación y el desarrollo profesional. Con las diferencias reales (no los estereotipos), los ajustes de estilo de liderazgo y cómo crear una cultura que funcione para todos.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Manager con experiencia liderando equipos de 10-50 personas donde la diferencia generacional ha sido una fuente tanto de tensión como de ventaja competitiva cuando se gestiona bien.

Contexto:
- Composición generacional del equipo: [Baby Boomers (55+) / Gen X (40-54) / Millennials (28-43) / Gen Z (<28)]
- Tamaño del equipo: [N personas]
- El reto específico: [conflictos de comunicación / diferentes expectativas sobre el trabajo / retención de Gen Z / otro]

## Gestión de Equipos Multigeneracionales — [Equipo]

### ⚠️ El error de partida: los estereotipos generacionales son el mayor obstáculo

Los perfiles generacionales son tendencias estadísticas, no rasgos individuales.
Gestionar a alguien como "un Millennial típico" porque nació en 1990 es tan impreciso como gestionar a alguien diferente por su nombre.

**Lo que sí es cierto (y útil):**
Las personas que crecieron en la misma época comparten algunas experiencias formativas.
Pero el contexto individual (educación, familia, sector, empresa) pesa igual o más que la generación.

**El enfoque correcto:**
Observa a la persona, no a su generación.
Las generalizaciones son útiles como punto de partida para hacer mejores preguntas, no como respuestas.

### 🔍 Las diferencias que sí importan y cómo gestionarlas

**Diferencia 1: La relación con la autoridad y la jerarquía**

```
Perfil que acepta jerarquía: "El jefe decide y yo ejecuto. Si quiero cambiar algo, lo hablo en privado."
Perfil que cuestiona jerarquía: "El cargo no da automáticamente la razón. Argumento mis propuestas sin importar quién las hace."

Cómo gestionarlo:
→ Establece con claridad qué es negociable y qué no.
→ En las decisiones que sí son negociables, abre el espacio para el debate.
→ En las que no lo son, explica el porqué — la razón transforma una orden en contexto.
```

**Diferencia 2: La comunicación**
```
Preferencia por comunicación formal (email, reuniones con agenda):
→ Documenta los acuerdos. Convoca reuniones con propósito claro.

Preferencia por comunicación informal y rápida (Slack, mensajes directos):
→ Reduce el tiempo de espera. Usa canales de respuesta rápida para lo urgente.

La solución: define con el equipo cuándo se usa cada canal.
"Para urgencias, Slack. Para decisiones importantes, email. Para retroalimentación, 1:1."
```

**Diferencia 3: La expectativa de feedback**
```
Perfil que espera feedback anual (en la evaluación):
"Dame mi evaluación de rendimiento y ajustaremos."

Perfil que espera feedback continuo:
"Dime cómo lo estoy haciendo en tiempo real — no esperes al final del año."

La solución: mantén los 1:1 semanales o quincenales para todos.
El feedback frecuente no incomoda a quien prefiere el anual — pero la ausencia de feedback sí frustra a quien lo necesita constantemente.
```

**Diferencia 4: Las motivaciones y el desarrollo profesional**
```
Motivaciones más frecuentes en perfiles senior:
- Estabilidad, seguridad, reconocimiento de la experiencia
- Poder transmitir el conocimiento acumulado
- Autonomía en la ejecución (ya saben cómo hacerlo)

Motivaciones más frecuentes en perfiles junior:
- Aprendizaje rápido y visible
- Propósito claro del trabajo (¿por qué importa lo que hago?)
- Flexibilidad y autonomía de horario y lugar
```

### 🤝 Cómo aprovechar la diversidad generacional como ventaja
Los 3 patrones de colaboración intergeneracional que crean más valor del que genera cualquier equipo homogéneo, y cómo diseñar el mentoring inverso (los más jóvenes enseñan habilidades digitales a los más seniors).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Equipos multigeneracionales, Baby Boomers, Millennials, Gen Z, liderazgo diverso',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Reporting financiero al consejo y a inversores: el cuadro de mando que comunica salud y dirección',
                'description'       => 'Diseña el paquete de reporting financiero mensual para el consejo de administración y los inversores que comunica la salud del negocio y la dirección estratégica sin abrumar con datos. Con los KPIs esenciales, la narrativa financiera, el formato del board pack y cómo presentar las malas noticias.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia preparando informes financieros mensuales para consejos de startups en Series A-C y PYME, donde la calidad del reporting determina la confianza del inversor en el equipo directivo.

Contexto:
- Tipo de empresa: [startup SaaS / PYME / empresa en crecimiento]
- Etapa: [pre-revenue / €X MRR / €X ARR / EBITDA positivo]
- Audiencia del informe: [consejo de administración / inversores VC / business angels / socios]
- Frecuencia: [mensual / trimestral]

## Reporting Financiero al Consejo — [Empresa]

### 📊 Los KPIs que importan según la etapa de la empresa

**Early stage (pre-revenue o <€100k ARR):**
```
Los inversores quieren ver:
- Burn rate mensual (cuánto estáis gastando)
- Runway (cuántos meses de vida con el efectivo actual)
- ARR/MRR y su crecimiento MoM
- Pipeline de ventas y conversiones
- Los 2-3 experimentos que estáis ejecutando y sus resultados
```

**Growth stage (€100k - €2M ARR):**
```
Los inversores quieren ver:
- MRR y crecimiento MoM (%)
- Churn rate (mensual y anual)
- CAC (coste de adquisición de cliente)
- LTV y ratio LTV:CAC (objetivo: >3:1)
- Net Revenue Retention (NRR) — indica si los clientes existentes crecen
- Burn multiple (nueva ARR generada por cada € quemado)
- Runway (meses)
```

**Mature stage (€2M+ ARR o camino a rentabilidad):**
```
Los inversores quieren ver:
- Revenue total y crecimiento YoY
- EBITDA y margen EBITDA
- Free Cash Flow
- NRR y Gross Revenue Retention
- Eficiencia de go-to-market (magic number)
```

### 📋 La estructura del board pack mensual

**El orden correcto (de más a menos importante):**
```
1. PORTADA Y RESUMEN EJECUTIVO (1 página):
   Las 5 cosas más importantes del mes. Tres columnas:
   ✅ Lo que va bien (con datos)
   ⚠️ Lo que hay que vigilar (con plan de acción)
   ❌ Lo que va mal (con respuesta al problema)

2. P&L SIMPLIFICADO (1 página):
   Revenue / COGS / Gross Profit / Opex / EBITDA / Net Income
   Actual vs. Budget vs. Mismo mes año anterior
   Las variaciones significativas (>5%) deben tener una nota explicativa

3. CASH FLOW Y RUNWAY (1 página):
   Efectivo al inicio del mes → Entradas → Salidas → Efectivo al final del mes
   Runway proyectado (meses) con 3 escenarios: base, optimista, pesimista

4. MÉTRICAS DE NEGOCIO (1-2 páginas):
   Los KPIs clave según la etapa (ver arriba)
   Tendencia de 6-12 meses en gráfico
   El foco en la narrativa, no en la tabla de datos

5. PIPELINE Y FORECASTING (1 página):
   Revenue forecast del trimestre y del año
   Pipeline de ventas por etapa
   Nuevos contratos cerrados vs. objetivo

6. TEAM Y HIRING (1 página):
   Headcount actual vs. plan
   Posiciones abiertas y su impacto en el negocio
   Turnover (si es relevante)

7. ANEXOS (solo si los piden):
   Balances detallados, cohort analysis, datos operativos por departamento
```

### 😰 Cómo presentar las malas noticias al consejo sin destruir la confianza
El framework de comunicación de problemas (problema + causa raíz + plan de acción + lo que necesitamos del consejo) que transforma las malas noticias en momentos de liderazgo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Reporting financiero, board pack, KPIs inversores, consejo de administración, CFO',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Privacy by design en el producto digital: construye cumplimiento RGPD desde el primer sprint',
                'description'       => 'Implementa el cumplimiento del RGPD en tu producto digital desde la fase de diseño, no como un parche posterior. Con los principios de privacy by design, el registro de actividades de tratamiento (RAT), la evaluación de impacto (DPIA), el diseño de los consentimientos y las medidas técnicas de seguridad mínimas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en protección de datos (DPO certificado) con experiencia auditando startups SaaS y plataformas digitales para garantizar el cumplimiento del RGPD (Reglamento General de Protección de Datos) y la Ley Orgánica de Protección de Datos española (LOPDGDD).

Contexto:
- Tipo de producto digital: [SaaS B2B / app de consumo / marketplace / plataforma / ecommerce]
- Datos personales que tratáis: [describe los tipos de datos que recogéis]
- Estado actual de cumplimiento: [no hemos hecho nada / tenemos la política de privacidad básica / queremos hacer una auditoría completa]
- ¿Tratáis datos de menores o datos sensibles?: [sí / no]

## Privacy by Design — [Empresa]

### 🔑 Los 7 principios del RGPD aplicados al producto

**1. Licitud, lealtad y transparencia:**
Cada dato que recogéis necesita una base legal.
```
Las 6 bases legales del RGPD:
a) Consentimiento: el usuario da permiso explícito
b) Contrato: necesario para prestar el servicio
c) Interés legítimo: el tratamiento beneficia legítimamente al responsable (con prueba)
d) Obligación legal: necesario por ley
e) Interés vital: proteger la vida de alguien
f) Misión de interés público: para organismos públicos

En la práctica para la mayoría de productos digitales:
- Datos de la cuenta: base contractual (necesarios para el servicio)
- Analytics/tracking: consentimiento (necesita cookie banner que cumpla)
- Marketing emails: consentimiento explícito separado
```

**2. Limitación de finalidad:**
Recoges datos para un propósito específico y no los usas para otra cosa sin nueva base legal.
Un email recogido para el onboarding no puede usarse para marketing sin consentimiento separado.

**3. Minimización de datos:**
Solo recoges los datos que necesitas para el propósito declarado.
Si no necesitas la fecha de nacimiento, no la pidas.
El RGPD premia a los equipos de producto que dicen "¿necesitamos este campo?" en cada sprint.

**4. Exactitud:**
Los datos deben estar actualizados. Implementa mecanismos para que los usuarios los corrijan.

**5. Limitación del plazo de conservación:**
¿Cuánto tiempo guardas los datos después de que el usuario cancela?
Define y documenta las políticas de retención. Implementa el borrado automático.

**6. Integridad y confidencialidad:**
Medidas técnicas y organizativas de seguridad.
El estándar mínimo para una startup: HTTPS, contraseñas hasheadas (bcrypt/Argon2), acceso por roles, logs de auditoría.

**7. Responsabilidad proactiva:**
Documenta qué datos tratas, con qué base, por cuánto tiempo.
Esto es el Registro de Actividades de Tratamiento (RAT).

### 📋 El Registro de Actividades de Tratamiento (RAT)

**Obligatorio para empresas con >250 empleados o que traten datos de riesgo.**
Recomendado para todas las empresas digitales desde el primer usuario.

```
FORMATO DEL RAT (una fila por actividad de tratamiento):

Nombre de la actividad: [ej: "Gestión de cuentas de usuario"]
Responsable: [nombre de la empresa]
Finalidad: [para qué usamos estos datos]
Base legal: [contractual / consentimiento / interés legítimo]
Categorías de datos: [email, nombre, IP, etc.]
Categorías de interesados: [usuarios, clientes, proveedores]
Destinatarios: [¿compartimos datos con terceros? AWS, Stripe, HubSpot, etc.]
Plazo de conservación: [X meses/años]
Transferencias internacionales: [¿datos fuera de la UE? Mecanismo de transferencia]
Medidas de seguridad: [HTTPS, cifrado en reposo, acceso por roles, etc.]
```

### 🍪 El diseño del consent layer (cookie banner) que cumple
Los requisitos legales del consentimiento de cookies en España (AEPD), el diseño del banner que cumple sin destruir la UX, y la diferencia entre cookies esenciales (no necesitan consentimiento) y cookies de marketing/analytics (necesitan opt-in activo).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'RGPD, privacy by design, protección de datos, LOPDGDD, DPO, cookie consent',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Diseño del equipo de soporte desde cero: estructura, roles y herramientas para los primeros 100k usuarios',
                'description'       => 'Diseña el equipo de soporte al cliente desde cero — la estructura de roles, las herramientas, los procesos y las métricas para acompañar el crecimiento hasta los 100k usuarios sin que el soporte sea el cuello de botella del negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Support con experiencia construyendo equipos de soporte desde 0 hasta 50 personas en startups en fase de crecimiento acelerado, donde las decisiones de diseño del equipo en los primeros 12 meses determinan la escalabilidad del soporte durante años.

Contexto:
- Tipo de producto: [SaaS / ecommerce / app de consumo / marketplace]
- Usuarios actuales: [N]
- Usuarios proyectados en 12 meses: [N]
- Canales de soporte actuales: [email / chat / teléfono / WhatsApp / redes sociales]
- Estado actual: [somos los fundadores respondiendo soporte / primer agente / queremos escalar]

## Diseño del Equipo de Soporte desde Cero — [Empresa]

### 🏗️ Las fases de construcción del equipo de soporte

**Fase 0 — Founders doing support (hasta ~500 usuarios activos):**
Los fundadores deben hacer el soporte ellos mismos en los primeros meses.
No por falta de recursos — porque el soporte directo con los primeros usuarios es el mejor aprendizaje de producto que existe.
Cada conversación de soporte es una sesión de investigación de usuario.

**Fase 1 — El primer agente de soporte (500-5.000 usuarios):**
```
El perfil correcto del primer agente:
→ NO es un perfil de call center clásico
→ ES alguien que le gusta resolver problemas, aprender rápido y tiene curiosidad técnica suficiente para entender el producto
→ Debe escribir bien (el soporte escrito es el canal principal en la mayoría de productos digitales)
→ Debe tener empatía genuina sin ser condescendiente

Las primeras 2 semanas del primer agente:
→ Semana 1: shadowing (lee conversaciones pasadas, observa al fundador responder)
→ Semana 2: responde con revisión del fundador
→ Semana 3+: autonomía con feedback semanal
```

**Fase 2 — El equipo básico (5.000-50.000 usuarios, 2-8 agentes):**
```
El primer rol especializado: Team Lead de Soporte
  Cuándo contratarlo: cuando tengas 3+ agentes
  Qué hace: gestiona al equipo, identifica problemas sistémicos, escala lo que necesita atención del producto
  Cuándo NO necesitas un Team Lead: cuando el "equipo" es 1-2 personas (el fundador puede hacer este rol)

Los agentes de soporte:
  Nivel 1 (Tier 1): resolución de consultas estándar (FAQs, problemas comunes, onboarding)
  Nivel 2 (Tier 2): casos técnicos complejos, bugs, casos de cuenta especiales

  La regla del 80/20: el 80% de los tickets deben poder resolverse en Tier 1
  Si el Tier 1 necesita escalar más del 30% de los casos → el producto tiene un problema de UX o la documentación es insuficiente
```

### 🛠️ La stack de herramientas del equipo de soporte

**La herramienta central: el sistema de tickets**
```
Para equipos pequeños (1-5 agentes):
  Intercom — el mejor para SaaS en crecimiento (chat + email + base de conocimiento)
  Zendesk — más potente pero más complejo, justificado a partir de 5+ agentes
  Freshdesk — buena relación calidad/precio

Para ecommerce:
  Gorgias — específico para ecommerce, integrado con Shopify/WooCommerce

Para equipos muy pequeños (1-2 personas):
  Help Scout — más simple y más barato, suficiente para la fase inicial
```

**Las herramientas complementarias:**
```
Base de conocimiento: Intercom Articles / Notion (acceso público) / GitBook
Grabación de sesiones para debug: Loom / Jam
Comunicación interna del equipo de soporte: canal de Slack dedicado
Documentación de bugs: Linear / Jira (integrado con el sistema de tickets)
```

### 📊 Las métricas del equipo de soporte y los targets por fase
Los 6 KPIs del equipo de soporte (CSAT, FRT, TTR, FCR, tickets per agent, deflection rate) y los benchmarks realistas para cada fase de crecimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Equipo soporte desde cero, Head of Support, estructura CS, herramientas soporte, escalado soporte',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Pricing estratégico para freelancers: cómo fijar tarifas que reflejen tu valor sin perder clientes',
                'description'       => 'Fija las tarifas de tu servicio freelance basándote en el valor que aportas al cliente, no en las horas que tardas. Con los modelos de pricing (por hora, por proyecto, por valor, retainer), cómo calcular tu tarifa mínima viable y cómo comunicar el precio sin disculparte.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach especializado en freelancers con experiencia ayudando a más de 300 profesionales independientes a subir sus tarifas una media del 60% en 6 meses sin perder los clientes que realmente importan.

Perfil:
- Especialidad: [describe tu servicio freelance]
- Años de experiencia: [N]
- Tarifa actual: [€/hora o €/proyecto]
- Tipo de clientes: [startups / PYME / grandes empresas / consumidores]
- El problema con el pricing actual: [demasiado barata / no sé si estoy bien posicionado / quiero cambiar de modelo / clients regatean constantemente]

## Pricing Estratégico para Freelancers — [Especialidad]

### 🧠 El error de cobrar por horas (y por qué te limita)

**El problema del pricing por hora:**
```
Cuanto más rápido y eficiente eres → menos cobras
Cuanto más experimentado eres → más rápido acabas → menos facturas
El cliente paga tu tiempo, no tu resultado

Ejemplo:
Diseñador junior: 4 horas para hacer un logo × €20/h = €80
Diseñador senior: 1 hora para hacer un logo × €80/h = €80

¿Cuál tiene más valor? El del senior — en la misma inversión del cliente
¿Cuál cobra más? Ninguno — los dos cobran €80

El pricing por hora iguala al experto con el junior
```

**Los modelos que rompen este techo:**

```
1. PRECIO POR PROYECTO (el primer paso para salir del hourly):
   Defines el entregable y el precio, independientemente de las horas.
   Riesgo: el alcance se expande → defines el alcance con precisión quirúrgica en el contrato.

2. RETAINER MENSUAL (el modelo que más estabilidad da):
   El cliente paga X€/mes a cambio de Y horas o Z entregables.
   Ventaja: ingresos predecibles, relación continua, sin buscar cliente cada mes.
   Cuándo tiene sentido: cuando el cliente tiene necesidades recurrentes.

3. PRECIO POR VALOR (el modelo de mayor potencial):
   Cobras en función del valor que generas para el cliente, no de tu tiempo.
   Ejemplo: un copywriter que escribe una landing page no cobra €500 por el texto
   sino €5.000 porque la landing generará €100.000 en revenue.
   Requiere: credibilidad, casos de éxito y la conversación sobre ROI con el cliente.
```

### 💰 Cómo calcular tu tarifa mínima viable

**El cálculo que no puedes ignorar:**
```
Paso 1 — Tus costes mensuales reales:
Gastos personales (vivienda, comida, transporte, ocio): €____
Gastos del negocio (herramientas, gestoría, formación): €____
Total gastos: €____

Paso 2 — Los impuestos:
Autónomo en España: la facturación bruta no es tuya.
IRPF estimado (15-20% para ingresos medios): ____%
IVA (21%): recuerdas pagar trimestral.
Un freelance que factura €3.000/mes en España se queda con ~€2.100 netos.

Paso 3 — Las horas reales facturables:
No trabajas 8h/día × 5 días × 4 semanas = 160h facturables.
El 30-40% del tiempo es gestión, marketing, formación, burocracia.
Horas facturables reales: ~80-100h/mes.

Paso 4 — Tu tarifa mínima:
Tarifa mínima = (Gastos + impuestos estimados + beneficio deseado) / horas facturables reales

Ejemplo:
Gastos: €2.500/mes + impuestos (30%): €1.000 + beneficio deseado: €500
Total necesario: €4.000/mes bruto
Horas facturables: 80h
Tarifa mínima: €4.000 / 80h = €50/h

Esto es tu SUELO. Trabajar por debajo de esto es trabajar en pérdidas.
```

### 💬 Cómo comunicar el precio sin disculparte
El guión de la conversación de precio con el cliente (cómo presentar la tarifa, cómo manejar el "es demasiado caro" y cuándo la negociación tiene sentido y cuándo no).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Pricing freelance, tarifas freelance, valor vs horas, retainer, value-based pricing',
                'vote_score'        => 48,
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
