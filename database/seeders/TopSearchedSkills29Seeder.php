<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills29Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Google Ads para negocios B2B: estructura de campaña de búsqueda que genera leads cualificados',
                'description'       => 'Diseña la estructura de campaña de Google Ads de búsqueda para un negocio B2B que genera leads cualificados a un coste sostenible. Con la investigación de palabras clave, la estructura de grupos de anuncios, los anuncios de búsqueda adaptables, las extensiones y la estrategia de puja.',
                'prompt_content'    => <<<'PROMPT'
Eres un Google Ads Specialist con experiencia gestionando cuentas B2B con presupuestos de €2.000-50.000/mes, donde la calidad del lead importa más que el volumen y el ciclo de venta largo requiere estrategias de seguimiento sofisticadas.

Contexto:
- Tipo de negocio: [SaaS B2B / consultoría / servicios profesionales / otro]
- Presupuesto mensual disponible: [€/mes]
- Ticket medio de venta: [€]
- El producto o servicio a anunciar: [describe brevemente]
- Mercado: [España / Latinoamérica / Europa / global en español]
- Estado actual: [sin campañas / campañas activas con resultados mediocres / quiero optimizar]

## Google Ads B2B — Estructura de Campaña — [Empresa]

### 🗺️ La arquitectura de cuenta correcta para B2B

**El error más frecuente: poner todo en una campaña con muchos grupos de anuncios.**
El resultado: el presupuesto se distribuye mal, los quality scores bajan, el coste por click sube.

**La estructura correcta:**
```
CUENTA DE GOOGLE ADS
│
├── CAMPAÑA 1: Branded (tu marca / producto)
│   ├── Grupo: Nombre de marca exacto
│   └── Grupo: Variaciones del nombre de marca
│
├── CAMPAÑA 2: Competencia (bidding sobre marcas rivales)
│   ├── Grupo: Competidor A
│   └── Grupo: Competidor B
│
├── CAMPAÑA 3: Producto/Solución (keywords de intención de compra)
│   ├── Grupo: "Software [función]" (ej: "software gestión proyectos")
│   ├── Grupo: "Herramienta [función]"
│   └── Grupo: "Plataforma [función]"
│
└── CAMPAÑA 4: Problema/Necesidad (keywords de problema del cliente)
    ├── Grupo: "Cómo [resolver problema]"
    └── Grupo: "[Problema] solución"
```

**Por qué separar en campañas:**
Cada campaña tiene su propio presupuesto y estrategia de puja.
La campaña de marca (muy barata, alta conversión) no compite con el presupuesto de prospección.

### 🔑 La investigación de palabras clave para B2B

**Los tipos de keywords por intención:**
```
TRANSACCIONAL (mayor intención, mayor CPC):
"software gestión de proyectos precio"
"herramienta CRM para pequeñas empresas"
"alternativa a [competidor]"
→ Usa coincidencia de frase o exacta. Alta prioridad.

INFORMACIONAL (menos intención, menor CPC):
"cómo gestionar proyectos de equipo"
"qué es un CRM"
→ Usa para remarketing o campañas de contenido. No como campaña principal.

NAVEGACIONAL (buscan tu marca o la competencia):
"[tu marca] login"
"[competidor] alternativa"
→ Campañas separadas de brand y competencia.
```

**Los tipos de coincidencia:**
```
[Coincidencia exacta]: el anuncio solo aparece para esa búsqueda exacta o muy similares
  → Alta relevancia, menor volumen
  → Ejemplo: [software gestión proyectos pyme]

"Coincidencia de frase": el anuncio aparece cuando la búsqueda contiene esa frase
  → Balance entre relevancia y volumen
  → Ejemplo: "gestión de proyectos"

Coincidencia amplia: el anuncio aparece para búsquedas relacionadas (Google decide)
  → Alto volumen, baja relevancia si no se controla
  → Requiere lista de palabras negativas muy trabajada
  → Para B2B: úsala con precaución y mucho presupuesto
```

### 📝 El anuncio de búsqueda adaptable (RSA) que funciona en B2B

**La estructura del anuncio:**
```
TITULARES (15 opciones, Google combina las mejores 3):
Titutar 1-3: Keywords principales (lo que el usuario buscó)
  "[Software de gestión de proyectos]" / "[Herramienta de CRM]"

Titular 4-6: Propuesta de valor única
  "Prueba gratuita 14 días" / "Sin tarjeta de crédito" / "Configurado en 1 hora"

Titular 7-9: Prueba social / credibilidad
  "+5.000 equipos lo usan" / "Valorado 4.8/5 en G2" / "Confían empresas Fortune 500"

Titular 10-12: Urgencia / CTA
  "Empieza hoy gratis" / "Solicita una demo" / "Compara planes y precios"

Titular 13-15: Beneficio específico
  "Gestiona tareas y proyectos" / "Integraciones con +200 apps" / "Soporte en español"

DESCRIPCIONES (4 opciones, Google muestra 2):
Descripción 1: El problema que resuelves + cómo
  "¿Tu equipo trabaja con hojas de cálculo y emails? [Producto] centraliza todo en un panel."

Descripción 2: Prueba social + CTA
  "Más de 5.000 equipos en España gestionan sus proyectos con [Producto]. Pruébalo gratis 14 días."

Descripción 3: Features clave + beneficio
  "Tareas, plazos, archivos y comunicación en un solo lugar. Sin curva de aprendizaje."

Descripción 4: Garantía/confianza
  "Cancela cuando quieras. Sin permanencia. Soporte en español incluido."
```

### 📊 La estrategia de puja y el seguimiento de conversiones para B2B
La configuración del seguimiento de conversiones (formulario de lead, llamada, registro de prueba), las estrategias de puja automatizadas para B2B (Target CPA, Maximizar conversiones) y cuándo usar puja manual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Google Ads B2B, campañas búsqueda, keywords, RSA, estructura cuenta Google Ads',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Observabilidad en producción: logs, métricas y trazas distribuidas con OpenTelemetry',
                'description'       => 'Implementa el sistema de observabilidad completo para tu aplicación en producción usando OpenTelemetry: los tres pilares (logs, métricas, trazas), cómo instrumentar el código, las herramientas de visualización y las alertas que avisan antes de que el usuario note el problema.',
                'prompt_content'    => <<<'PROMPT'
Eres un Site Reliability Engineer (SRE) con experiencia implementando sistemas de observabilidad en aplicaciones distribuidas con tráfico de 100k-10M requests/día, donde la diferencia entre detectar un problema en 2 minutos vs 2 horas puede costar €50k en revenue.

Contexto:
- Stack tecnológico: [Node.js / Python / Go / Java / PHP / otro]
- Arquitectura: [monolito / microservicios / serverless]
- Proveedor de nube: [AWS / GCP / Azure / self-hosted / otro]
- Estado actual: [sin observabilidad / solo logs básicos / queremos mejorar lo que tenemos]
- Presupuesto para herramientas: [gratuito / €X/mes]

## Observabilidad en Producción — [Aplicación]

### 🔭 Los 3 pilares de la observabilidad (y por qué los tres son necesarios)

**Pilar 1 — Logs: el "qué pasó"**
Los logs registran eventos discretos con el contexto de lo que ocurrió.
"El usuario 12345 intentó hacer login y falló porque la contraseña era incorrecta."
Son imprescindibles para el debugging post-mortem.

**Pilar 2 — Métricas: el "cuánto y cómo está"**
Las métricas son medidas numéricas agregadas en el tiempo.
CPU usage, requests/segundo, latencia P99, tasa de errores.
Son imprescindibles para las alertas y para entender tendencias.

**Pilar 3 — Trazas distribuidas: el "cómo viajó la request"**
Las trazas siguen una request a través de todos los servicios que toca.
"Esta petición del usuario tardó 2.3s: 0.1s en el API gateway, 0.2s en el servicio de auth, 2s en la query de base de datos."
Son imprescindibles en arquitecturas de microservicios.

**El problema sin observabilidad completa:**
- Solo logs: "Sé que algo falló pero no sé si es un problema sistémico o puntual"
- Solo métricas: "Sé que la latencia subió pero no sé en qué servicio ni por qué"
- Solo trazas: "Sé que esa request fue lenta pero no sé si el problema se repite"

### 🔧 OpenTelemetry: el estándar de observabilidad

**Por qué OpenTelemetry:**
```
Antes de OTel: cada herramienta (Datadog, NewRelic, Jaeger) tenía su SDK.
Si cambiabas de herramienta, reescribías toda la instrumentación.

Con OTel:
→ Instrumentas el código una vez con el SDK de OTel
→ Puedes enviar los datos a cualquier backend (Datadog, Jaeger, Prometheus, etc.)
→ Cambias de herramienta sin reescribir código
```

**Instrumentación básica en Node.js:**
```javascript
// Al inicio de la aplicación (antes de cualquier import)
import { NodeSDK } from '@opentelemetry/sdk-node'
import { OTLPTraceExporter } from '@opentelemetry/exporter-trace-otlp-http'
import { OTLPMetricExporter } from '@opentelemetry/exporter-metrics-otlp-http'
import { getNodeAutoInstrumentations } from '@opentelemetry/auto-instrumentations-node'

const sdk = new NodeSDK({
  serviceName: 'mi-api',
  traceExporter: new OTLPTraceExporter({
    url: 'http://otel-collector:4318/v1/traces',
  }),
  metricReader: new PeriodicExportingMetricReader({
    exporter: new OTLPMetricExporter({
      url: 'http://otel-collector:4318/v1/metrics',
    }),
  }),
  instrumentations: [getNodeAutoInstrumentations()], // auto-instrumenta Express, HTTP, DB...
})

sdk.start()
```

Con `getNodeAutoInstrumentations()`, OpenTelemetry instrumenta automáticamente:
- Express/Fastify (cada request HTTP)
- Llamadas HTTP salientes
- Drivers de base de datos (pg, mysql2, mongodb)
- Redis
- AWS SDK

### 📊 Las métricas que debes monitorear (los "Golden Signals" de Google SRE)

**Los 4 golden signals:**
```
1. LATENCIA: tiempo de respuesta de las requests
   - P50 (mediana), P95, P99 (el 99% de las requests es más rápido que esto)
   - Alerta: P99 > 2 segundos en tu API

2. TRÁFICO: volumen de requests
   - Requests/segundo
   - Alerta: caída > 50% respecto al promedio → algo se rompió que está cortando el tráfico

3. ERRORES: tasa de errores
   - HTTP 5xx / total requests (%)
   - Alerta: tasa de error > 1% en 5 minutos → incidente

4. SATURACIÓN: utilización de recursos
   - CPU, memoria, conexiones de DB, cola de mensajes
   - Alerta: CPU > 80% durante 5+ minutos, conexiones de DB > 90% del pool
```

### 🚨 Las alertas que avisan antes de que el usuario lo note
La configuración de alertas proactivas (SLOs, error budgets) vs. reactivas, y cómo diseñar el runbook para cada alerta de forma que cualquier miembro del equipo pueda responder a un incidente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Observabilidad, OpenTelemetry, logs, métricas, trazas distribuidas, SRE, monitorización',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de dashboards y visualización de datos: el dashboard que toman decisiones, no el que impresiona',
                'description'       => 'Diseña dashboards y visualizaciones de datos que ayudan a tomar decisiones en lugar de simplemente impresionar. Con los principios de visualización de datos, qué tipo de gráfico usar según el dato, la jerarquía visual y los errores más comunes que hacen los dashboards inútiles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Data Visualization Designer con experiencia diseñando dashboards para equipos de negocio, producto y operaciones en empresas de 50-500 personas, donde la diferencia entre un dashboard que se usa diariamente y uno que nadie abre está en las decisiones de diseño, no en la cantidad de datos mostrados.

Contexto:
- Audiencia del dashboard: [CEO / equipo de ventas / equipo de producto / operaciones / marketing / todos]
- Decisiones que debe apoyar: [describe las 3 decisiones clave que el dashboard debe facilitar]
- Datos disponibles: [describe las fuentes de datos: CRM, analytics, base de datos, etc.]
- Herramienta de visualización: [Tableau / Power BI / Looker / Metabase / Grafana / diseño en Figma / otro]

## Diseño de Dashboard — [Nombre]

### 🎯 El principio del dashboard que funciona: menos datos, más decisiones

**El error más frecuente: el dashboard de "todo lo que podemos medir"**
```
20 gráficos en una pantalla.
Cada métrica del mismo tamaño.
Sin jerarquía de importancia.
Resultado: el usuario ve todo y decide nada.
```

**La pregunta que define el diseño:**
"¿Qué pregunta concreta debe responder este dashboard?"
Y más importante: "¿Qué acción debe tomar el usuario después de ver este dashboard?"

Un dashboard bien diseñado lleva al usuario de los datos a la decisión en <30 segundos.

**La regla de los 3-5 KPIs:**
Todo dashboard tiene 3-5 métricas principales visible en el primer vistazo (above the fold).
El resto son métricas de apoyo para profundizar cuando la métrica principal genera una pregunta.

### 📊 Qué tipo de gráfico usar según el dato

**La guía de selección:**
```
COMPARACIÓN entre categorías:
→ Gráfico de barras horizontales (si hay muchas categorías)
→ Gráfico de barras verticales (si hay pocas categorías y el tiempo importa)
❌ No uses gráficos de tarta para comparar — son difíciles de leer

TENDENCIA a lo largo del tiempo:
→ Gráfico de líneas (para datos continuos)
→ Gráfico de área (para mostrar volumen acumulado)
❌ No uses barras para tendencias largas (>12 puntos de tiempo)

DISTRIBUCIÓN (cómo se reparte):
→ Histograma (para distribución de frecuencias)
→ Box plot (para ver percentiles y outliers)

RELACIÓN entre dos variables:
→ Scatter plot (diagrama de dispersión)
→ Heat map (para múltiples variables)

UN NÚMERO CLAVE:
→ Big number / KPI card — el número en grande, el contexto debajo
→ Gauge chart — solo para métricas con un rango claro (ej: NPS 0-100)
```

### 🎨 Los principios de diseño visual que hacen los dashboards legibles

**Principio 1 — Jerarquía visual:**
El ojo va del tamaño grande al pequeño.
Los KPIs más importantes = más grandes.
Las métricas de apoyo = más pequeñas, menos prominentes.

**Principio 2 — La paleta de colores mínima:**
```
3 colores máximo para un dashboard:
→ 1 color de acento para lo positivo/bueno (verde o el color de marca)
→ 1 color de alerta para lo negativo/malo (rojo o naranja)
→ 1 color neutro para el contexto (gris)

El error: usar colores diferentes para cada línea de un gráfico de múltiples series.
La solución: un solo color + diferentes opacidades, o etiquetas directas en lugar de leyenda.
```

**Principio 3 — La leyenda es el enemigo:**
Si el usuario tiene que mirar la leyenda para entender el gráfico, el gráfico está mal diseñado.
La alternativa: etiqueta las líneas/barras directamente en el punto final.

**Principio 4 — El contexto es obligatorio:**
Un número sin contexto no es información.
"€123.456 de revenue este mes" → ¿es bueno o malo?
Con contexto: "€123.456 de revenue (+12% vs mes anterior, -3% vs objetivo)"

**Principio 5 — El espacio en blanco no es desperdicio:**
Los dashboards sobrecargados aumentan el tiempo de comprensión y la tasa de rebote del usuario.
Deja espacio entre los elementos. La respiración visual facilita la lectura.

### 🔄 El proceso de diseño iterativo del dashboard
El método de validación del dashboard con los usuarios reales antes de construirlo (el test de los 5 segundos) y cómo iterar basándose en el uso real después del lanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Dashboard design, data visualization, gráficos, KPIs, diseño datos, Tableau, Power BI',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Negociación de precio sin bajar el margen: cómo defender el precio cuando el cliente dice "es muy caro"',
                'description'       => 'Negocia el precio de tu producto o servicio sin dar descuentos que destruyan el margen. Con el framework de respuesta al "es muy caro", las técnicas de anclaje y reencuadre del valor, cuándo es aceptable hacer un descuento y cómo hacerlo sin sentar precedente.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Coach con experiencia entrenando a equipos de ventas B2B a defender el precio frente a la presión de compra, reduciendo el descuento medio del 25% al 8% sin perder el ratio de cierre.

Contexto:
- Tipo de venta: [SaaS B2B / servicios profesionales / consultoría / producto físico / otro]
- Ticket medio: [€]
- Descuento que das habitualmente: [%]
- El tipo de objeción más frecuente: ["es muy caro" / "la competencia es más barata" / "necesito aprobación del presupuesto" / "no es el momento" ]

## Negociación de Precio — [Empresa]

### 🧠 Por qué dar descuentos es la solución más cara a largo plazo

**El impacto del descuento en el margen:**
```
Producto que vendes a €1.000 con margen del 40%:
Sin descuento: €400 de margen bruto
Con 20% de descuento: vendes a €800 → margen: €200 (-50% de margen por un -20% de precio)

Si tu margen bruto es del 40% y das un 20% de descuento → pierdes el 50% de tu margen.
Los descuentos destruyen el P&L mucho más rápido de lo que parece.
```

**El precedente del descuento:**
El cliente que compró con descuento del 20% en enero va a pedir lo mismo en la renovación de diciembre.
Los descuentos no son excepcionales — se convierten en la nueva tarifa.

### 🔄 El framework de respuesta a "es muy caro"

**El error que destruye el margen: bajar el precio inmediatamente.**
Si bajas el precio sin que el cliente te lo pida explícitamente, les enseñas que pueden conseguir descuento sin esfuerzo.

**El proceso de 4 pasos:**

**Paso 1 — Clarifica antes de responder:**
```
"¿Caro en comparación con qué?"

Las respuestas posibles:
a) "En comparación con la competencia" → es una objeción de precio real
b) "No tenemos presupuesto" → es una objeción de presupuesto (diferente)
c) "Pensaba que costaría menos" → es una objeción de expectativa
d) "Mi jefe no lo aprobará" → es una objeción de autorización

Cada tipo de objeción tiene una respuesta diferente.
Bajar el precio sin clarificar es responder a la pregunta equivocada.
```

**Paso 2 — Reencuadra el precio como inversión:**
```
"Entiendo que €X es una cantidad significativa. ¿Puedo preguntarte cuál es el impacto que esperas que [producto/servicio] tenga en [métrica que les importa]?"

Si el cliente dice: "Esperamos ahorrar 10 horas de trabajo a la semana por persona"
Y tienen 5 personas: 50 horas/semana × 4 semanas = 200 horas/mes
Al coste de €25/hora = €5.000/mes de valor
Tu precio es €800/mes → ROI de 6x

Ahora el precio no es el problema — el precio es la solución.
```

**Paso 3 — Si persisten, ofrece valor antes que descuento:**
```
En lugar de bajar el precio:
→ Extiende el período de prueba gratuita
→ Incluye una sesión de onboarding personalizado
→ Ofrece el acceso a una feature del plan superior durante 3 meses
→ Añade soporte prioritario al precio actual

Cambias la percepción de valor sin destruir el precio.
```

**Paso 4 — Si el descuento es inevitable, condiciona:**
```
Un descuento siempre tiene una contrapartida:
→ Pago anual anticipado (mejor cashflow para ti)
→ Caso de éxito o testimonial (marketing para ti)
→ Referido a otras empresas (pipeline para ti)
→ Ampliación del contrato a X meses más

"Podemos ajustar el precio en un 10% si pagáis anualmente. ¿Es algo que podríais valorar?"

NUNCA: "Te hago el 10% de descuento porque me cae bien."
```

### 🏆 Cuándo la competencia dice que es más barata: la respuesta que funciona
El framework para responder a la comparación con la competencia que reenfoca la conversación en el coste total de la decisión (TCO) y no en el precio de lista.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Negociación precio, defensa de precio, descuentos, objeción precio, valor vs precio ventas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Go-to-market desde producto: el lanzamiento que tiene en cuenta qué usuarios harán el producto viral',
                'description'       => 'Diseña la estrategia de go-to-market desde la perspectiva del equipo de producto para que el lanzamiento genere adopción real y no solo tráfico. Con la segmentación de early adopters, el diseño de los momentos de activación, la coordinación con ventas y marketing y las métricas de éxito del lanzamiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia liderando lanzamientos de producto que han pasado de 0 a 10.000 usuarios activos en los primeros 90 días en empresas SaaS B2B y B2C, donde la diferencia entre un lanzamiento que despega y uno que no está en la selección correcta de los primeros usuarios.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / feature de producto existente / nueva versión]
- A quién va dirigido: [describe el segmento objetivo]
- El problema que resuelve: [describe el job to be done principal]
- Fecha de lanzamiento prevista: [fecha o "por definir"]
- Canales disponibles: [base de usuarios existente / lista de espera / comunidad / RRSS / paid / producto hunt / otro]

## Go-to-Market desde Producto — [Nombre del Producto/Feature]

### 🎯 La selección de los early adopters correctos: el activo más infravalorado del lanzamiento

**Por qué los primeros 100 usuarios determinan el éxito del producto:**
Los early adopters que eliges en el lanzamiento definen:
- El feedback que recibes (y si ese feedback representa el mercado total)
- Los casos de uso que se desarrollan primero
- Los testimonios y prueba social que usarás para crecer
- Si el producto se convierte en viral dentro de un segmento específico

**El perfil del early adopter correcto:**
```
TIENE EL PROBLEMA HOY (no "algún día tendré ese problema"):
→ No es un curioso del producto — tiene el pain point activo
→ Están gastando tiempo o dinero para resolver ese problema con workarounds

TIENE TOLERANCIA A LA IMPERFECCIÓN:
→ Entiende que el producto está en fase early
→ Ve el potencial a pesar de los bugs y las features que faltan
→ No necesita un producto pulido para extraer valor

COMPARTE FEEDBACK ACCIONABLE:
→ No solo dice "no me gusta" — dice "el problema es X cuando intento hacer Y"
→ Está dispuesto a tener conversaciones de 30 minutos sobre su experiencia

TIENE INFLUENCIA EN SU RED:
→ Si les encanta, lo van a contar
→ En B2B: son los que recomiendan herramientas en su empresa o en su red profesional
```

**Cómo encontrar a los early adopters correctos:**
```
Fuentes en orden de calidad:
1. Tu lista de espera (ya levantaron la mano)
2. Usuarios de productos complementarios que tienen el mismo problema
3. Comunidades online donde la gente habla del problema que resuelves
4. Red personal del equipo fundador
5. Respuestas a content sobre el problema (comentarios, shares, DMs)
```

### 🏁 El diseño del "aha moment": el momento en que el usuario entiende el valor

**Qué es el aha moment:**
El momento en que el usuario dice (o piensa): "Ah, esto es exactamente lo que necesitaba."
En Slack: cuando el usuario envía el primer mensaje en un canal y recibe respuesta en segundos.
En Spotify: cuando el primer Discover Weekly recomienda una canción que el usuario desconocía pero ama.

**Cómo identificar el aha moment de tu producto:**
```
Analiza a tus mejores usuarios actuales (o early testers):
→ ¿Qué acción completaron en las primeras 24-48 horas que los que churnearon no completaron?
→ ¿Cuál es la correlación entre completar [acción X] y convertir a usuario activo?

Herramienta de análisis: funnel de activación en Mixpanel o Amplitude
```

**Cómo diseñar el camino al aha moment:**
```
1. Identifica el aha moment (la acción que predice la retención)
2. Elimina todos los pasos que no llevan directamente a ese momento
3. El onboarding no enseña features — lleva al aha moment lo antes posible
4. Mide cuántos usuarios alcanzan el aha moment en los primeros 7 días
   (este es tu "time to value" — el KPI más importante del lanzamiento)
```

### 📋 La coordinación entre producto, marketing y ventas en el lanzamiento
El calendario de lanzamiento en 6 semanas (pre-launch, día de lanzamiento, post-launch) con las responsabilidades de cada equipo y las métricas de éxito del D+7, D+30 y D+90.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Go-to-market producto, lanzamiento producto, early adopters, aha moment, activación usuarios',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Offboarding y gestión de la salida del empleado: el proceso que protege el negocio y la reputación',
                'description'       => 'Gestiona la salida de un empleado (voluntaria o involuntaria) con un proceso que protege el conocimiento de la empresa, mantiene la seguridad de los sistemas, cuida la reputación como empleador y cierra el ciclo de la relación laboral de forma profesional.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Operations Manager con experiencia gestionando procesos de offboarding en empresas de 20-300 personas donde una salida mal gestionada ha costado desde datos críticos perdidos hasta reseñas negativas en Glassdoor que dificultan la atracción de talento durante meses.

Contexto:
- Tipo de salida: [baja voluntaria del empleado / despido / fin de contrato / ERTE / prejubilación]
- Cargo del empleado que se va: [describe el rol y las responsabilidades]
- Preaviso: [N semanas/días]
- Sensibilidad de la situación: [salida amistosa / situación tensa / el empleado tiene acceso a información crítica]

## Proceso de Offboarding — [Empresa]

### ⚠️ Los riesgos de un offboarding mal gestionado

```
RIESGO 1 — Pérdida de conocimiento crítico:
El empleado se va y nadie sabe cómo hacer X proceso / qué contraseña es la de Y sistema.
El coste promedio de reconstruir conocimiento perdido: 40-80 horas de trabajo del equipo.

RIESGO 2 — Brechas de seguridad:
El empleado sigue teniendo acceso a sistemas críticos semanas después de su salida.
El 20% de las brechas de seguridad involucran a ex-empleados con acceso no revocado.

RIESGO 3 — Daño reputacional:
Una salida mal gestionada → reseña negativa en Glassdoor → candidatos que no aplican.
El 75% de los candidatos lee reseñas de Glassdoor antes de postularse.

RIESGO 4 — Riesgo legal:
Sin documentar el proceso, la empresa queda expuesta a reclamaciones por despido improcedente o incumplimiento de contrato.
```

### 📋 El proceso de offboarding en 4 etapas

**Etapa 1 — Cuando se comunica la salida (Día 0):**
```
□ Notificar a RRHH y al manager directo (si no lo son ya)
□ Acordar la fecha exacta de último día
□ Comunicar al equipo con el mensaje correcto:
  Para baja voluntaria: "Ha decidido asumir un nuevo reto profesional"
  Para despido: "Terminamos la relación laboral" (sin mentiras, sin humillaciones)
□ Bloquear el calendario para la entrevista de salida (siempre, sin excepción)
□ Iniciar el proceso de sustitución (antes de que se vaya, no después)
```

**Etapa 2 — Durante el preaviso (La semana más importante):**
```
TRANSFERENCIA DE CONOCIMIENTO:
□ El empleado documenta los procesos que solo él conoce
  Formato: Notion / Confluence / Google Docs
  Mínimo: los 5 procesos críticos de su rol
□ El empleado hace handoff de sus proyectos activos:
  - Estado actual
  - Próximos pasos
  - Contactos clave
  - Documentos relevantes
□ El empleado presenta a su sucesor o al responsable temporal a sus contactos clave

SECURITY CHECKLIST (preparar durante el preaviso, ejecutar el último día):
□ Lista de todos los accesos del empleado:
  - Email corporativo
  - Herramientas SaaS (Google Workspace, GitHub, Slack, CRM, etc.)
  - Servidores y sistemas internos
  - Tarjetas de crédito o cuentas bancarias asociadas al negocio
  - Cuentas de redes sociales corporativas
  - Repositorios de código
```

**Etapa 3 — El último día:**
```
MAÑANA:
□ Entrega del material de la empresa (ordenador, tarjetas de acceso, móvil corporativo)
□ Firma del finiquito y liquidación económica
□ Carta de referencia (si corresponde y la relación lo merece)

TARDE (después de la entrega física):
□ Revocación de TODOS los accesos de la lista
□ Transferencia del email corporativo a su gestor durante X semanas
□ Actualización de contraseñas compartidas donde el empleado tenía acceso
□ Cambio del responsable de cuentas críticas (AWS, dominios, analytics)
```

**Etapa 4 — La entrevista de salida:**
```
CUÁNDO: en la última semana (no el último día — la gente habla más libremente cuando no están en modo "despedida")
CON QUIÉN: RRHH o alguien que no sea el manager directo
FORMATO: conversación de 30-45 minutos, no formulario

Las preguntas que dan información real:
"¿Qué te llevó a tomar la decisión de irte?"
"¿Qué podría haber hecho la empresa de forma diferente para que te quedases?"
"¿Qué mejorarías del rol, el equipo o la empresa?"
"¿Qué aspectos valoras más de tu experiencia aquí?"
"¿Recomendarías la empresa a un amigo profesional? ¿Por qué?"
```

### 🤝 El alumni network: cómo convertir a los ex-empleados en embajadores
El ex-empleado bien tratado es uno de los mejores canales de referidos de clientes y candidatos. El proceso de mantener el contacto y las condiciones para que una salida correcta genere valor a largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Offboarding, gestión salida empleado, entrevista salida, revocación accesos, baja voluntaria',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de riesgos financieros para PYME: identifica y mitiga los riesgos antes de que sean una crisis',
                'description'       => 'Identifica y gestiona los riesgos financieros que pueden amenazar la viabilidad de tu empresa: riesgo de liquidez, riesgo de crédito, riesgo de tipo de interés, riesgo de concentración de clientes y riesgo operativo. Con el mapa de riesgos, las medidas de mitigación y el plan de contingencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia gestionando el riesgo financiero en PYME de sectores como tecnología, servicios y manufactura, donde la mayoría de las crisis de liquidez son previsibles con 3-6 meses de antelación si se tienen los indicadores correctos.

Contexto:
- Tipo de empresa: [SaaS / servicios / ecommerce / manufactura / consultoría / otro]
- Facturación anual: [€]
- Número de clientes principales: [N]
- Estado actual: [tenemos riesgos que no hemos identificado formalmente / hemos tenido una crisis y queremos prevenirla / queremos implementar gestión de riesgos proactiva]

## Gestión de Riesgos Financieros — [Empresa]

### 🔴 Los 5 riesgos financieros que más quiebran PYME

**Riesgo 1 — Concentración de clientes (el más subestimado):**
```
El riesgo: si un cliente representa >20% de tus ingresos, su salida puede ser letal.
El umbral de alerta: >30% de revenue en un solo cliente.
El umbral crítico: >50% de revenue en un solo cliente.

Indicadores de riesgo:
→ El cliente tiene retrasos en los pagos
→ El cliente está siendo adquirido
→ El cliente tiene problemas financieros propios
→ El cliente está evaluando a la competencia

Medidas de mitigación:
→ Plan activo de diversificación de ingresos
→ Contrato con cláusula de preaviso suficiente (90-180 días)
→ Fondo de reserva equivalente a 3 meses de ingresos de ese cliente
```

**Riesgo 2 — Riesgo de liquidez (cobro vs. pago):**
```
El riesgo: tienes beneficio contable pero no tienes efectivo para pagar las nóminas.
La causa: el plazo de cobro (90 días) es mayor que el plazo de pago (30 días).

El indicador: Days Sales Outstanding (DSO) - días que tardas en cobrar.
DSO = (Cuentas a cobrar / Ventas anuales) × 365
Si tu DSO es de 90 días y tus proveedores cobran a 30 días → tienes un gap de 60 días financiado por tu caja.

Medidas de mitigación:
→ Factura el mismo día que terminas el trabajo (no a fin de mes)
→ Cobra anticipos: 50% al inicio del proyecto, 50% a la entrega
→ Línea de crédito preaprobada como colchón (no para financiar la operación corriente)
→ Descuento pronto pago: "2% de descuento si pagas en 10 días" para los clientes más lentos
```

**Riesgo 3 — Riesgo de crédito (impagos):**
```
El riesgo: un cliente no te paga y la deuda afecta a tu tesorería.

Protocolo de cobro:
Día 30 post-vencimiento: email de recordatorio amable
Día 45: llamada telefónica (no solo email)
Día 60: email de requerimiento formal (con copia a RRHH del cliente si es una empresa)
Día 75: carta notarial / burofax
Día 90: proceso judicial (monitorio) o gestor de cobros

Prevención:
→ Comprueba la solvencia de nuevos clientes (BADEXCUG, Bureau van Dijk)
→ Seguro de crédito para clientes grandes
→ Provisión de insolvencias en el presupuesto (1-3% del revenue como colchón)
```

**Riesgo 4 — Riesgo de tipo de interés:**
```
El riesgo: tienes deuda a tipo variable y la subida de tipos aumenta la carga financiera.
Especialmente relevante en el contexto de tipos altos de 2023-2025 en Europa.

Acciones:
→ Renegocia la deuda variable a tipo fijo si prevés tipos altos durante 2+ años
→ Los bancos a veces ofrecen caps (techo de tipo) como seguro
```

**Riesgo 5 — Riesgo operativo:**
```
Persona clave que se va → el negocio se paraliza.
Dependencia de un solo proveedor crítico → su quiebra te afecta directamente.
Sistema crítico sin backup → la pérdida de datos puede ser catastrófica.

Mitigación:
→ Key person insurance para los perfiles más críticos
→ Doble proveedor para servicios críticos (hosting, finanzas, producción)
→ Business continuity plan documentado
```

### 📊 El mapa de riesgos y el dashboard de gestión de riesgos
La metodología para construir el mapa de riesgos (probabilidad × impacto) y los 5 indicadores de alerta temprana que debes revisar mensualmente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión riesgos financieros, riesgo liquidez, riesgo crédito, PYME, concentración clientes',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos de trabajo en España: modalidades, tipos y cláusulas que protegen a la empresa',
                'description'       => 'Entiende las modalidades de contratación laboral en España, las diferencias entre empleado, freelance y ETT, y las cláusulas contractuales que protegen a la empresa. Con la tabla comparativa de modalidades, las obligaciones del empleador y los errores más comunes en la contratación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado laboralista especializado en derecho del trabajo español con experiencia asesorando a startups y PYME en sus primeras contrataciones, donde el error de clasificación (autónomo cuando debería ser empleado) puede derivar en sanciones de la Inspección de Trabajo y reclamaciones de Seguridad Social.

Contexto:
- Tipo de empresa: [startup / PYME / autónomo que quiere contratar]
- Puesto a cubrir: [describe el rol y las funciones]
- Modalidad que estás considerando: [empleado a tiempo completo / freelance / ETT / becario / prácticas]
- Dudas específicas: [¿cuál modalidad usar? / ¿qué cláusulas incluir? / ¿cómo despedir correctamente? / otro]

## Contratación Laboral en España — [Empresa]

### 📋 La tabla comparativa de modalidades de contratación

```
MODALIDAD            CUÁNDO USAR               COSTE EMPRESA            RIESGO LEGAL
─────────────────────────────────────────────────────────────────────────────────────
Indefinido ordinario Puesto estable             SS: ~30% del salario      Bajo si se gestiona bien
Fijo discontinuo     Trabajo estacional         SS: ~30% + complejidad    Medio
Temporal por obra    Proyecto específico        SS: ~30%                  Alto (abuso de temporalidad)
Temporal por causas  Sustitución, circunst.     SS: ~30%                  Alto (misma razón)
A tiempo parcial     Horario reducido           SS: ~30% proporcional     Bajo
Prácticas formativas Recién graduados           SS bonificada (60-100%)   Bajo (duración limitada)
Formación en alternancia Formación dual         SS bonificada             Bajo
ETT                  Pico de trabajo puntual    Mayor coste total         Bajo (lo gestiona la ETT)
Autónomo/freelance   Servicios específicos      Sin SS                    Muy alto (si es falso autónomo)
```

### ⚠️ El falso autónomo: el error más caro de la contratación

**Cuándo la relación con un freelance se convierte en falso autónomo:**
```
Criterios que la Inspección de Trabajo evalúa:
1. DEPENDENCIA: ¿trabaja exclusivamente para tu empresa?
2. AJENIDAD: ¿usa tus herramientas y equipos?
3. HORARIO: ¿tiene un horario fijo que tú estableces?
4. DIRECCIÓN: ¿le das instrucciones sobre CÓMO hacer el trabajo (no solo qué)?
5. EXCLUSIVIDAD: ¿no puede trabajar para otros clientes?

Si respondes SÍ a 3+ criterios → la relación probablemente sea laboral encubierta.
```

**Las consecuencias del falso autónomo:**
```
→ Alta en Seguridad Social retroactiva (desde el inicio de la relación)
→ Pago de todas las cotizaciones pendientes + recargos (20-35%)
→ Sanción de la Inspección de Trabajo (€3.126 - €187.515)
→ El trabajador puede reclamar la categoría de indefinido
```

### 📝 Las cláusulas contractuales que protegen a la empresa

**Cláusula de confidencialidad:**
```
Qué debe incluir:
- Definición de "información confidencial" (amplia)
- Duración: durante el contrato y X años después (típico: 2-5 años)
- Las excepciones (información pública, información que el empleado ya conocía)
- Las consecuencias del incumplimiento

Validez: válida sin límite de duración durante el contrato; post-contrato requiere compensación económica para ser exigible según el TRET.
```

**Cláusula de no competencia post-contractual:**
```
Condiciones para que sea válida (art. 21.2 del Estatuto de los Trabajadores):
1. Debe haber un interés industrial o comercial efectivo del empresario
2. Debe haber una compensación económica adecuada (tipicamente 1/3-1/2 del salario durante el período)
3. Duración máxima: 2 años para técnicos, 6 meses para el resto
Sin compensación económica suficiente → la cláusula es nula.
```

**Cláusula de pacto de permanencia:**
```
Para cuando la empresa invierte en formación del empleado.
El empleado se compromete a permanecer X tiempo (máximo 2 años).
Si se va antes, debe compensar el coste de la formación proporcionalmente.
```

### 🔴 Los errores más comunes al despedir a un empleado en España
Los tipos de despido (disciplinario, objetivo, colectivo), los requisitos procedimentales de cada uno, el cálculo de la indemnización y qué errores formales convierten un despido procedente en improcedente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Contratos de trabajo España, modalidades contratación, falso autónomo, ET, despido España',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de tickets de alta complejidad técnica: el proceso de escalado que resuelve sin frustrar',
                'description'       => 'Gestiona los tickets de soporte técnico complejos que ningún agente de Tier 1 puede resolver, con el proceso de escalado correcto, la comunicación con el cliente durante la investigación y la coordinación con el equipo de ingeniería sin convertirse en el cuello de botella.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Engineer Lead con experiencia gestionando el escalado de tickets técnicos en productos SaaS B2B, donde el 15% de los tickets son tan complejos que requieren coordinación con el equipo de ingeniería y donde la comunicación con el cliente durante la espera es tan importante como la solución final.

Contexto:
- Tipo de producto: [SaaS B2B / infraestructura / API / herramienta de desarrollo / otro]
- Equipo de soporte: [N agentes Tier 1 + N ingenieros de soporte / Tier 2]
- Volumen de tickets complejos: [N por semana]
- El mayor problema actual: [los clientes se frustran mientras esperan / el equipo de ingeniería no prioriza el soporte / los tickets escalados se pierden en el proceso]

## Gestión de Tickets Complejos y Escalado Técnico — [Empresa]

### 🔍 Qué es un ticket técnicamente complejo (y cuándo escalar)

**Los criterios de escalado (no escales por intuición — usa criterios):**
```
Escala INMEDIATAMENTE si:
→ El cliente está en producción y su servicio está caído (P0/P1)
→ El problema afecta a múltiples clientes (posible bug sistémico)
→ Hay pérdida de datos o riesgo de seguridad
→ El bug no tiene workaround y el cliente no puede continuar

Escala en 24 horas si:
→ El Tier 1 ha intentado las soluciones documentadas y no funcionan
→ El problema requiere acceso al código fuente o a logs de infraestructura
→ El cliente ha proporcionado un bug reproducible que no está en los issues conocidos

NO escales si:
→ Solo necesitas más tiempo para investigar con los recursos actuales
→ La respuesta está en la documentación o en los issues conocidos
→ El cliente está frustrado pero el problema es de configuración (no de código)
```

### 📋 El proceso de escalado que funciona

**Paso 1 — Antes de escalar: el ticket tiene que llegar listo al ingeniero**
```
El ingeniero no puede perder tiempo entendiendo el contexto que ya tiene el agente.
Lo que debe incluir el ticket escalado:

1. DESCRIPCIÓN DEL PROBLEMA:
   "Cuando el usuario hace X en la condición Y, ocurre Z en lugar de W."
   No: "El cliente dice que algo no funciona."

2. PASOS PARA REPRODUCIR:
   1. Ve a [sección]
   2. Haz click en [botón]
   3. Introduce [valor] en [campo]
   4. Resultado: [comportamiento actual]
   5. Esperado: [comportamiento correcto]

3. CONTEXTO DEL ENTORNO:
   - Versión del producto / navegador / sistema operativo
   - Si es una instalación propia (self-hosted): versión del servidor, configuración
   - El user ID y el tenant ID (para que el ingeniero pueda buscar en los logs)

4. LO QUE YA SE HA PROBADO:
   - Acciones que el agente ha intentado
   - La respuesta del cliente a cada intento

5. IMPACTO EN EL NEGOCIO DEL CLIENTE:
   - ¿El cliente está bloqueado para trabajar?
   - ¿Cuántos usuarios afecta?
   - ¿Tiene un deadline relacionado con esto?
```

**Paso 2 — La comunicación con el cliente durante la investigación**
```
El mayor error: dejar al cliente en silencio mientras el ingeniero investiga.

El protocolo de comunicación:

Al escalar (día 0):
"Hemos escalado tu caso a nuestro equipo de ingeniería.
Están investigando el problema. Te escribiremos con una actualización
en [plazo realista: 4h / 24h / 48h]."

Actualización intermedia (si no hay solución en el plazo prometido):
"Queremos actualizarte: seguimos investigando.
Hemos identificado [qué hemos descartado / qué estamos mirando].
Nuestro objetivo es tenerte una respuesta antes de [nuevo plazo]."

Al resolver:
"Hemos identificado y solucionado el problema.
El error era [explicación técnica accesible].
Para evitar que vuelva a ocurrir, hemos [acción tomada].
¿Puedes confirmar que funciona correctamente por tu parte?"
```

### 🔧 La coordinación con ingeniería que no destruye la relación entre soporte y desarrollo
El proceso de priorización de bugs reportados por soporte dentro del sprint de ingeniería y el sistema de SLA internos entre soporte y desarrollo para los diferentes niveles de severidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Escalado técnico, tickets complejos, soporte Tier 2, bugs soporte, SLA interno soporte',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Pipeline de clientes freelance: el sistema de captación que llena la agenda sin depender de una sola fuente',
                'description'       => 'Construye el sistema de captación de clientes freelance que genera un pipeline predecible sin depender del boca a boca o de una sola plataforma. Con las 5 fuentes de captación que funcionan para freelancers, el proceso de seguimiento y cómo convertir un contacto en cliente sin presionar.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Development Coach especializado en freelancers con experiencia ayudando a más de 400 profesionales independientes a pasar de "espero que me llegue trabajo" a un sistema de captación que genera 3-5 oportunidades nuevas cada mes de forma constante.

Perfil:
- Especialidad: [describe tu servicio freelance]
- Experiencia: [N años]
- Fuente de clientes actual: [boca a boca / LinkedIn / plataformas / otros]
- El mayor problema de captación: [no sé de dónde vienen los clientes / dependo de un solo canal / muchos leads pero poca conversión / no tengo tiempo para captar mientras trabajo]

## Sistema de Captación de Clientes — [Freelance]

### 🧠 El diagnóstico: por qué el boca a boca solo no es un sistema

El boca a boca es la mejor fuente de clientes — cuando funciona.
El problema: no lo controlas.
Funciona cuando tienes muchos clientes satisfechos que te recuerdan en el momento justo.
Falla cuando acabas un proyecto y el siguiente no llega.

Un sistema de captación tiene dos características:
1. Es predecible (sabes que si haces X, llegará Y)
2. Es diversificado (no depende de una sola fuente)

**Las 5 fuentes de captación para freelancers (en orden de efectividad a largo plazo):**

```
FUENTE 1 — Red personal y referidos activos (la más efectiva):
ROI: muy alto. Tiempo de conversión: muy corto.
El error: esperar a que los referidos lleguen solos.
El sistema: pide referidos activamente a cada cliente al final de cada proyecto.
"¿Conoces a alguien que pueda beneficiarse de lo que hacemos juntos?"
El 80% de los freelancers nunca pide referidos directamente.

FUENTE 2 — LinkedIn (la más escalable para B2B):
ROI: medio-alto. Tiempo de conversión: medio (1-6 meses de construcción).
El sistema: publicar contenido de valor 3x/semana + conectar con 5 nuevos potenciales clientes/semana + mensajes de seguimiento a conexiones actuales.
El error: publicar sin interactuar. LinkedIn es una conversación, no un tablón de anuncios.

FUENTE 3 — Contenido propio (newsletter, blog, podcast):
ROI: bajo en el corto plazo, muy alto en el largo.
El sistema: una newsletter semanal de 500 palabras sobre tu especialidad.
Los suscriptores se convierten en clientes cuando tienen el problema que resuelves.
Tiempo hasta primeros resultados: 6-12 meses de consistencia.

FUENTE 4 — Comunidades y eventos del sector:
ROI: medio. Tiempo de conversión: variable.
El sistema: identifica 2-3 comunidades donde está tu cliente ideal (grupos de LinkedIn, Slack, comunidades de Discord, eventos sectoriales).
Participa activamente — no para vender, sino para ser reconocido como experto.

FUENTE 5 — Plataformas de freelance (Toptal, Malt, Fiverr, Upwork):
ROI: medio-bajo al principio (mucha competencia). Mejor para perfiles junior o nichos específicos.
El error: depender solo de plataformas — las plataformas tienen el control.
El sistema: úsalas para los primeros clientes, luego construye el resto fuera de ellas.
```

### 📞 El proceso de seguimiento que convierte sin presionar

**El pipeline de captación del freelance:**
```
ESTADO 1 — Lead (hay interés pero sin conversación):
Acción: conecta, comenta, o envía un mensaje de valor (no de venta).

ESTADO 2 — Contacto (ha habido conversación):
Acción: programa una llamada de discovery.

ESTADO 3 — Oportunidad (tiene un proyecto o necesidad):
Acción: propuesta personalizada.

ESTADO 4 — Propuesta enviada:
Acción: seguimiento a los 3 días si no hay respuesta.
"¿Has tenido oportunidad de revisar la propuesta? ¿Hay algo que necesites aclarar?"

ESTADO 5 — Cerrado (cliente activo o perdido):
Si cerrado: onboarding del proyecto.
Si perdido: "¿Puedo preguntarte qué decisión tomaste? Me ayuda a mejorar."
```

**La cadencia de seguimiento que no agobia:**
```
Propuesta enviada → sin respuesta:
Día 3: "¿Has podido revisarla?"
Día 7: último seguimiento con nueva información de valor.
Día 14: cierra el lead con elegancia: "Entiendo que quizás el timing no era el correcto. Si en el futuro puedo ayudarte, aquí estaré."

No envíes más de 3 mensajes de seguimiento sin respuesta. Después de 3, pasa a otro lead.
```

### 📊 El CRM mínimo viable para freelancers
La hoja de cálculo o la herramienta sencilla (Notion, Airtable) que gestiona el pipeline de captación sin convertirse en un proyecto de gestión en sí mismo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Captación clientes freelance, pipeline freelance, LinkedIn freelance, referidos, sistema captación',
                'vote_score'        => 50,
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
