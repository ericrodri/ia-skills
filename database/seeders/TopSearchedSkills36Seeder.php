<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills36Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Pinterest y marketing visual: la plataforma de búsqueda visual que genera tráfico orgánico durante años',
                'description'       => 'Aprovecha Pinterest como motor de búsqueda visual que genera tráfico orgánico sostenido hacia tu web durante meses y años, no días. Con la estrategia de tableros, los Pins que se posicionan en los resultados de búsqueda y cómo integrar Pinterest en la estrategia de contenido de ecommerce y bloggers.',
                'prompt_content'    => <<<'PROMPT'
Eres un Pinterest Marketing Specialist con experiencia gestionando cuentas de ecommerce, blogs y creadores de contenido donde Pinterest genera entre el 20-40% del tráfico orgánico total, con tráfico acumulativo que crece mes a mes sin necesidad de inversión publicitaria.

Contexto:
- Tipo de negocio: [ecommerce / blog de contenido / marca personal / servicios / otro]
- Sector / nicho: [describe tu temática]
- Estado actual en Pinterest: [sin presencia / cuenta básica sin estrategia / queremos escalar lo que ya tenemos]
- El objetivo: [tráfico a la web / ventas directas / brand awareness / generación de leads]

## Pinterest Marketing — [Empresa/Marca]

### 🧠 Por qué Pinterest no es una red social sino un motor de búsqueda visual

**La diferencia fundamental con Instagram o TikTok:**
```
Instagram y TikTok: contenido efímero. Un post que no rinde en las primeras 24h, muerto.
Pinterest: el contenido se descubre durante meses y años. Un Pin bien posicionado sigue
generando clics 2 años después de publicarlo.

Por qué: Pinterest funciona como Google para imágenes. Las personas buscan ideas, inspiración
y soluciones. Los resultados de búsqueda muestran Pins relevantes para la query, independientemente
de la fecha de publicación.

Implicación para la estrategia:
→ En Instagram/TikTok: frecuencia diaria, contenido fresco.
→ En Pinterest: calidad y optimización para búsqueda, no frecuencia.
```

**El perfil del usuario de Pinterest (y por qué tiene alto intent de compra):**
```
Las personas van a Pinterest con una intención: planificar algo.
→ "Ideas para decorar el salón" → búsqueda activa con intención de compra futura
→ "Recetas sin gluten" → búsqueda con intención de hacer algo concreto
→ "Outfits de invierno" → búsqueda con intención de comprar ropa

El 85% de los usuarios de Pinterest han comprado algo que descubrieron en la plataforma.
```

### 📌 La estructura de la cuenta que maximiza el alcance

**Los tableros correctos:**
```
Estructura recomendada:
→ 1 tablero principal que coincide exactamente con tu nicho principal
→ 5-10 tableros secundarios con sub-temas de tu nicho
→ 1-2 tableros de inspiración general relacionada (no de competidores directos)

Nombra los tableros con palabras clave exactas, no con nombres creativos:
❌ "Mi mundo vegetal" → nadie busca esto
✅ "Plantas de interior fáciles de cuidar" → esto sí se busca

La descripción del tablero: 2-3 frases con las keywords que usaría alguien buscando este contenido.
```

**El tipo de Pin que se posiciona:**
```
TIPO 1 — Pins de imagen vertical (ratio 2:3 o 1:2):
La imagen vertical ocupa más espacio en el feed → mayor CTR.
Resolución recomendada: 1000×1500px o 1000×2000px.
Texto superpuesto claro que explica el beneficio en 5-7 palabras.

TIPO 2 — Pins de vídeo corto (15-60 segundos):
Mayor engagement. Priorizado algorítmicamente en 2025.
Los primeros 2 segundos deben capturar la atención sin sonido (la mayoría mira sin audio).

TIPO 3 — Pins de idea (carrusel de imágenes):
Perfecto para tutoriales paso a paso, recetas, outfits completos.
Mantiene al usuario más tiempo en el Pin → señal positiva para el algoritmo.
```

### 🔍 La optimización SEO de Pinterest: cómo aparecer en búsquedas

**La investigación de keywords en Pinterest:**
```
Paso 1: busca en Pinterest tu tema principal.
Las sugerencias de búsqueda que aparecen son las keywords más buscadas.

Paso 2: mira las keywords que aparecen en los Pins con más interacciones.

Paso 3: usa Pinterest Trends (trends.pinterest.com) para ver qué está creciendo en búsquedas.

Paso 4: integra las keywords en:
→ El nombre de tu cuenta
→ La bio de tu perfil
→ El nombre y descripción de cada tablero
→ El título y descripción de cada Pin
→ El texto alternativo de la imagen
```

**La descripción del Pin que posiciona Y convierte:**
```
Estructura:
1. Frase inicial con la keyword principal ("5 plantas de interior que no necesitan luz directa")
2. El beneficio para el usuario ("Perfectas para pisos sin terraza o con ventanas al norte")
3. Call to action claro ("Descubre cuáles elegir en el artículo completo del blog")
4. Hashtags (3-5 relevantes, no más)
```

### 📊 Las métricas de Pinterest y el ritmo de publicación
Las métricas que indican crecimiento real en Pinterest (impresiones, clics al sitio web, guardados), el ritmo de publicación recomendado (15-25 Pins/semana para cuentas en crecimiento) y la herramienta de programación que permite mantener el ritmo sin dedicar horas diarias.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Pinterest marketing, SEO Pinterest, tráfico orgánico Pinterest, marketing visual, ecommerce Pinterest',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura serverless: cuándo usar funciones en la nube y cuándo no, con AWS Lambda y Cloudflare Workers',
                'description'       => 'Decide cuándo la arquitectura serverless mejora tu sistema y cuándo añade complejidad innecesaria. Con los casos de uso donde serverless gana claramente, los antipatrones que lo convierten en una pesadilla de debugging y cómo implementar funciones Lambda y Workers con las mejores prácticas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Cloud Architect con experiencia diseñando sistemas serverless en AWS y Cloudflare donde la decisión de usar funciones en la nube ha reducido los costes de infraestructura un 60% en algunos casos de uso y ha añadido complejidad insostenible en otros, y puedes distinguir con claridad cuándo serverless es la decisión correcta.

Contexto:
- El caso de uso que estás evaluando: [describe qué quieres construir o migrar a serverless]
- Plataforma cloud actual: [AWS / GCP / Cloudflare / Azure / sin cloud / decidiendo]
- Experiencia con serverless: [ninguna / básica / intermedia / avanzada]
- El objetivo: [reducir costes / simplificar infraestructura / escalar mejor / reducir latencia con edge computing]

## Arquitectura Serverless — [Proyecto]

### 🎯 Cuándo serverless gana claramente

**Caso de uso 1 — Workloads con tráfico muy variable o intermitente:**
```
El modelo de pago por invocación de serverless es ideal cuando:
→ El tráfico tiene picos muy altos seguidos de períodos de casi nada
→ El workload es muy intermitente (ej: procesar archivos cuando se suben, disparado por eventos)

Ejemplo: procesamiento de imágenes.
→ Con servidor: pagas la VM 24h, aunque solo proceses imágenes 2h al día.
→ Con Lambda: pagas solo las invocaciones cuando se procesa. 0 uso = 0 coste.
```

**Caso de uso 2 — APIs de bajo tráfico o proyectos en etapas tempranas:**
```
→ Un MVP que no sabe si tendrá 10 o 10.000 usuarios/día
→ La AWS Lambda free tier (1M invocaciones/mes) cubre muchos casos en early-stage
→ Sin gestión de servidores, sin patching, sin escalado manual
```

**Caso de uso 3 — Edge computing para reducir latencia global:**
```
Cloudflare Workers ejecuta tu código en más de 300 datacenters globalmente.
Un usuario en Tokyo recibe la respuesta desde el datacenter de Cloudflare más cercano.
Ideal para: personalización de contenido, autenticación perimetral, A/B testing en el edge.

// Cloudflare Worker básico
export default {
  async fetch(request) {
    const country = request.cf?.country || 'US'
    if (country === 'ES') {
      return Response.redirect('https://tu-sitio.es')
    }
    return fetch(request)
  }
}
```

**Caso de uso 4 — Pipelines de datos y procesamiento asíncrono:**
```
→ ETL pipelines disparados por eventos (archivo subido a S3 → Lambda procesa → guarda en DB)
→ Notificaciones y webhooks (recibe evento → procesa → envía email)
→ Scheduled jobs ligeros (Lambda + EventBridge = cron sin servidor)
```

### ❌ Cuándo serverless añade complejidad innecesaria

**Antipatrón 1 — Aplicaciones con alta concurrencia y estados compartidos:**
```
Serverless no tiene estado entre invocaciones. Cada función arranca desde cero.
Si tu aplicación necesita memoria compartida entre requests → serverless complica las cosas.
```

**Antipatrón 2 — Aplicaciones con latencia muy baja (< 10ms) como requisito duro:**
```
El cold start de Lambda puede ser de 100-500ms.
Para aplicaciones de trading, gaming en tiempo real o sistemas críticos de baja latencia:
serverless no es la arquitectura correcta (a menos que uses Cloudflare Workers, que tiene cold starts ~0ms).
```

**Antipatrón 3 — Funciones con tiempos de ejecución largos:**
```
AWS Lambda: timeout máximo de 15 minutos.
Cloudflare Workers: timeout de 30 segundos (CPU time).
Procesamientos de vídeo, modelos de ML pesados, migraciones largas → no son para serverless.
```

### 🛠️ Implementación de AWS Lambda con las mejores prácticas

**Estructura de una función Lambda bien diseñada:**
```javascript
// handler.js
import { DynamoDBClient, PutItemCommand } from '@aws-sdk/client-dynamodb'

// Inicializa el cliente FUERA del handler — se reutiliza entre invocaciones calientes
const dynamodb = new DynamoDBClient({ region: process.env.AWS_REGION })

export const handler = async (event) => {
  try {
    // Valida el input antes de procesar
    const body = JSON.parse(event.body || '{}')
    if (!body.email) {
      return { statusCode: 400, body: JSON.stringify({ error: 'email required' }) }
    }

    await dynamodb.send(new PutItemCommand({
      TableName: process.env.TABLE_NAME,
      Item: { email: { S: body.email }, createdAt: { S: new Date().toISOString() } }
    }))

    return { statusCode: 201, body: JSON.stringify({ success: true }) }
  } catch (error) {
    console.error('Error:', error)
    return { statusCode: 500, body: JSON.stringify({ error: 'Internal server error' }) }
  }
}
```

### 📊 El modelo de costes serverless: cuándo es más barato y cuándo no
La comparativa de coste entre servidor dedicado, contenedores y serverless según el volumen de requests, el ejemplo de cálculo para tu caso de uso y el punto de inflexión donde serverless deja de ser más barato que un servidor.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Serverless AWS Lambda, Cloudflare Workers, arquitectura serverless, edge computing, funciones nube',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de usabilidad: evalúa tu diseño con los 10 heurísticos de Nielsen antes de hacer tests de usuario',
                'description'       => 'Realiza una auditoría de usabilidad de tu producto o prototipo usando los 10 heurísticos de Nielsen Jakob como marco de evaluación estructurado. Identifica los problemas de usabilidad más críticos antes de invertir en tests de usuario formales.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Researcher con experiencia realizando evaluaciones heurísticas en productos digitales — webs, apps móviles y plataformas SaaS — donde la evaluación heurística previa a los tests de usuario ha identificado el 70-80% de los problemas de usabilidad más graves en una fracción del tiempo y el coste de un test formal.

Contexto:
- Tipo de producto a evaluar: [web / app móvil / plataforma SaaS / otro]
- El flujo específico a auditar: [el onboarding / el checkout / la pantalla principal / todo el producto]
- Quién hará la evaluación: [yo solo / un equipo de 2-3 evaluadores / necesito una guía para no saber por dónde empezar]

## Auditoría de Usabilidad — Heurísticos de Nielsen — [Producto]

### 🧠 Qué es una evaluación heurística y cuándo usarla

**Evaluación heurística:** un experto en UX revisa el producto contra un conjunto de principios de usabilidad establecidos (los heurísticos) e identifica los problemas de diseño que violan esos principios.

**Cuándo es más útil:**
```
→ Antes de hacer tests de usuario (para no desperdiciar tiempo del test en problemas obvios)
→ Cuando no tienes tiempo o presupuesto para un test formal
→ Para evaluar un prototipo antes de invertir en desarrollo
→ Como auditoría periódica del producto en producción
→ Para comparar dos diseños alternativos
```

**La limitación principal:**
La evaluación heurística no reemplaza los tests de usuario. Identifica problemas de diseño,
pero no predice con certeza cuáles son los que más afectan a usuarios reales en tu contexto.
Úsala como primer filtro, no como sustituto del feedback de usuarios.

### 📋 Los 10 heurísticos de Nielsen con ejemplos prácticos

**H1 — Visibilidad del estado del sistema:**
```
Principio: el sistema siempre debe mantener informados a los usuarios sobre lo que está pasando.
Preguntas a hacer:
  → ¿El usuario sabe que su acción se procesó? (confirmación de envío de formulario)
  → ¿Hay indicador de progreso en acciones largas?
  → ¿El usuario sabe en qué parte del flujo está? (wizard steps, breadcrumbs)

Violación típica: botón de submit que no da feedback → el usuario hace clic varias veces
```

**H2 — Relación entre el sistema y el mundo real:**
```
Principio: el sistema debe hablar el lenguaje del usuario, no el del sistema.
Preguntas:
  → ¿Los términos usados corresponden al vocabulario del usuario objetivo?
  → ¿Los íconos tienen un significado universal o son ambiguos?
  → ¿Los mensajes de error están en lenguaje técnico o en lenguaje humano?

Violación típica: "Error 403 Forbidden" en lugar de "No tienes permiso para ver esta página"
```

**H3 — Control y libertad del usuario:**
```
Principio: los usuarios cometen errores. Necesitan una salida de emergencia clara.
Preguntas:
  → ¿Hay un botón "Atrás" o "Cancelar" en todos los flujos?
  → ¿El usuario puede deshacer acciones?
  → ¿Hay confirmación antes de acciones destructivas (borrar, enviar)?

Violación típica: eliminar un elemento sin confirmación y sin posibilidad de recuperarlo
```

**H4 — Consistencia y estándares:**
```
Principio: los usuarios no deberían tener que preguntarse si diferentes palabras, situaciones
o acciones significan lo mismo.
Preguntas:
  → ¿Los botones de la misma función se llaman igual en todo el producto?
  → ¿Los colores se usan de forma consistente (error siempre en rojo, éxito en verde)?
  → ¿La navegación es consistente entre pantallas?
```

**H5 — Prevención de errores:**
```
Principio: mejor que un buen mensaje de error es un diseño que previene el error.
Preguntas:
  → ¿Los campos de formulario tienen placeholders o ejemplos del formato esperado?
  → ¿Se valida en tiempo real antes de que el usuario envíe?
  → ¿Se deshabilitan las opciones que no están disponibles (en lugar de mostrar error después)?
```

**H6 — Reconocimiento antes que recuerdo:**
```
Principio: minimiza la carga de memoria del usuario. Los objetos, acciones y opciones deben
ser visibles.
Preguntas:
  → ¿El usuario tiene que recordar información de una pantalla anterior para actuar en la actual?
  → ¿Las opciones son visibles o están ocultas en menús profundos?
```

**H7-H10 (resumen):**
```
H7 — Flexibilidad y eficiencia: atajos para usuarios avanzados sin complicar a los básicos
H8 — Estética y diseño minimalista: sin información irrelevante que diluya lo importante
H9 — Ayuda para reconocer y recuperarse de errores: mensajes de error claros + solución
H10 — Ayuda y documentación: cuando existe, debe ser fácil de encontrar y específica
```

### 📊 El sistema de registro de hallazgos heurísticos
La plantilla de registro de problemas (heurístico violado, descripción, evidencia, severidad 0-4, propuesta de solución) y cómo priorizar los hallazgos según la combinación de severidad e impacto en el negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Evaluación heurística, usabilidad Nielsen, auditoría UX, heurísticos usabilidad, UX review',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del pipeline de ventas: el proceso semanal que convierte el CRM en una herramienta de cierre',
                'description'       => 'Implementa el proceso de gestión del pipeline de ventas que convierte el CRM de un registro de actividad en un sistema de predicción y acción semanal. Con la reunión de pipeline, el sistema de stages y los criterios de avance que eliminan el wishful thinking del forecast.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Manager con experiencia transformando equipos de ventas donde la gestión disciplinada del pipeline ha mejorado la precisión del forecast del 45% al 80% y aumentado la tasa de cierre un 25% al identificar y actuar sobre los deals bloqueados a tiempo.

Contexto:
- Tamaño del equipo de ventas: [1 solo / 2-5 / 5-10+ AEs]
- CRM actual: [Salesforce / HubSpot / Pipedrive / Notion / hojas de cálculo / otro]
- El mayor problema actual: [el forecast no se cumple / los deals se quedan bloqueados sin avanzar / el manager no sabe en qué estado está el pipeline real / el CRM no se actualiza]

## Gestión del Pipeline de Ventas — [Empresa]

### 🗺️ Los stages del pipeline: la estructura que hace el forecast fiable

**El error de los stages mal definidos:**
```
❌ Stages vagos:
  Prospección → En contacto → Negociando → Cerrado

Nadie sabe exactamente qué significa "En contacto" o cuándo un deal pasa de "En contacto" a "Negociando".
Cada comercial lo interpreta diferente → el pipeline no es comparable entre comerciales.

✅ Stages con criterio de entrada y salida claros:
Para que un deal avance al siguiente stage, debe cumplir una condición verificable.
```

**Ejemplo de pipeline para SaaS B2B:**
```
STAGE 1 — Prospect calificado:
  Criterio de entrada: el lead cumple el ICP (sector, tamaño, presupuesto estimado).
  El comercial lo ha encontrado o recibido, aún no hay contacto establecido.

STAGE 2 — Primer contacto establecido:
  Criterio de entrada: hemos tenido una conversación (email de respuesta, llamada).
  El prospecto sabe quiénes somos y hay interés suficiente para seguir.

STAGE 3 — Discovery completado:
  Criterio de entrada: hemos completado una reunión de discovery.
  Sabemos: su problema, su presupuesto aproximado, el proceso de decisión, el timing.
  Si no sabemos estos 4 elementos, el deal NO puede avanzar a Stage 3.

STAGE 4 — Demo / propuesta enviada:
  Criterio de entrada: hemos presentado nuestra solución específica para su problema.
  La propuesta económica está sobre la mesa.

STAGE 5 — Negociación:
  Criterio de entrada: el prospecto ha confirmado que quiere avanzar y está negociando condiciones.

STAGE 6 — Cerrado (ganado / perdido / sin respuesta):
```

### 📅 La reunión de pipeline semanal: 60 minutos que salvan deals

**El propósito de la reunión de pipeline:**
```
NO es un informe de actividad ("¿cuántas llamadas hiciste esta semana?").
ES una sesión de resolución de problemas sobre deals específicos bloqueados.
```

**La agenda de 60 minutos:**
```
[15 min] Review del forecast:
  → ¿Qué deals están en Stage 5 (negociación) con cierre previsto este trimestre?
  → ¿El importe total es suficiente para cubrir el objetivo?
  → ¿Qué ha cambiado desde la semana pasada?

[30 min] Deals bloqueados:
  Para cada deal que lleva más de 2 semanas sin avanzar:
  → ¿Cuál es el siguiente paso acordado? ¿Está en el calendario?
  → ¿Qué está frenando el avance? (objeción, decisor nuevo, presupuesto, competencia)
  → ¿Qué acción concreta tomamos esta semana para desbloquearlo?

[15 min] Pipeline nuevo:
  → ¿Cuántos deals nuevos entraron en Stage 1 esta semana?
  → ¿Hay suficiente pipeline para cubrir el objetivo del trimestre siguiente?
  (Pipeline necesario = Objetivo / Tasa de cierre histórica)
```

### ⚠️ Los síntomas del pipeline mal gestionado y cómo detectarlos
Las señales de alerta que indican que el pipeline está lleno de "wishful thinking" (deals que no van a cerrar pero nadie se atreve a descartarlos) y el proceso de limpieza trimestral del pipeline que mejora la precisión del forecast.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Pipeline ventas, gestión pipeline CRM, forecast ventas, stages pipeline, reunión pipeline semanal',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Investigación generativa en producto: cómo encontrar problemas que el usuario no te dijo que tenía',
                'description'       => 'Realiza investigación generativa de producto — la que descubre problemas y oportunidades que los usuarios no saben articular — usando entrevistas contextuales, shadowing y diarios de usuario. Con el protocolo de entrevista, el análisis de insights y cómo convertirlos en oportunidades de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Researcher especializado en investigación generativa con experiencia en proyectos donde las entrevistas contextuales y el shadowing han revelado problemas de usuario que ningún dato cuantitativo había señalado, llevando a rediseños de producto que aumentaron la adopción y la retención de forma significativa.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / plataforma / otro]
- El área de investigación: [un flujo específico / el problema de los churned users / una nueva audiencia que quieres entender / otro]
- Experiencia en research: [sin experiencia / entrevistas básicas / investigación estructurada / investigación avanzada]

## Investigación Generativa de Producto — [Empresa]

### 🔭 La diferencia entre investigación generativa y evaluativa

**Investigación evaluativa:** testa si algo que ya has diseñado funciona.
"¿Puede el usuario completar este flujo? ¿Entiende esta interfaz?"

**Investigación generativa:** descubre qué problemas existen antes de diseñar nada.
"¿Qué hacen los usuarios? ¿Por qué lo hacen así? ¿Dónde hay fricción?"

**Por qué la generativa es difícil:**
El usuario no puede decirte qué producto quiere (no es su trabajo saber qué es posible construir).
Pero sí puede mostrarte cómo trabaja, dónde se frustra, qué workarounds usa — y ahí está el insight.

### 🎤 El protocolo de entrevista generativa que encuentra problemas reales

**Las reglas fundamentales:**
```
REGLA 1 — Nunca preguntas sobre el futuro:
  ❌ "¿Usarías una función que te permitiera...?"
  ✅ "Cuéntame la última vez que intentaste hacer [tarea]. ¿Qué pasó?"

REGLA 2 — Siempre sobre el pasado y el comportamiento actual:
  Las personas son malos predictores de su comportamiento futuro.
  Son excelentes narradoras de lo que les pasó.

REGLA 3 — El silencio es tu herramienta principal:
  Cuando el usuario termina de hablar, espera 5-7 segundos antes de hacer la siguiente pregunta.
  El 70% de los insights más ricos vienen de lo que añade después del silencio.

REGLA 4 — "¿Por qué?" se reemplaza por "Cuéntame más sobre eso":
  "¿Por qué hiciste eso?" puede sonar acusatorio.
  "Cuéntame más sobre ese momento" genera más contexto y menos defensividad.
```

**La guía de entrevista (estructura de 60 minutos):**
```
[5 min] Presentación y contexto:
  "Voy a hacerte preguntas sobre cómo trabajas. No estoy evaluando tu desempeño.
  No hay respuestas correctas o incorrectas. Me interesa entender tu experiencia real.
  ¿Te parece bien si grabo para poder escuchar después sin tomar notas? [pide permiso]"

[10 min] Calentamiento — contexto general:
  "Cuéntame qué haces en tu trabajo. ¿Un día típico cómo es?"
  Objetivo: entender el contexto del usuario antes de profundizar en el área de interés.

[35 min] Deep dive en el área de investigación:
  "Piensa en la última vez que [actividad que te interesa investigar]. ¿Me cuentas cómo fue?"
  Seguimiento: "¿Qué hiciste después?" / "¿Cómo resolviste eso?" / "¿Qué herramientas usaste?"
  Señales de interés: momentos de frustración, workarounds, situaciones inesperadas.

[10 min] Cierre:
  "¿Hay algo que yo debería haber preguntado y no pregunté sobre este tema?"
  "¿Hay alguien más que crees que debería hablar sobre esto?"
```

### 🔬 Las técnicas complementarias a las entrevistas

**Shadowing (observación contextual):**
```
Qué es: acompañar al usuario mientras realiza la tarea real, en su entorno real.
Cuándo es irremplazable: cuando el usuario hace cosas que no sabe que hace
(behaviors automáticos, workarounds que considera normales).

"Muéstrame cómo lo harías" → siempre más revelador que "¿cómo lo harías?"
```

**Diario de usuario:**
```
Le pides al usuario que registre brevemente durante 1-2 semanas cada vez que hace [actividad].
Formato mínimo: qué hizo + cómo se sintió + qué fue difícil.
Útil cuando el comportamiento es difuso en el tiempo (no pasa en un solo momento observable).
```

### 📊 El análisis de insights: de la transcripción al hallazgo de producto
El proceso de análisis de las entrevistas (affinity mapping, patrones de comportamiento, jerarquía de insights) y cómo transformar los hallazgos de investigación en oportunidades de producto que el equipo puede priorizar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Investigación generativa, user research, entrevistas producto, shadowing usuario, UX research cualitativo',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Entrevistas de salida: cómo obtener la verdad sobre por qué se van los empleados',
                'description'       => 'Diseña el proceso de entrevista de salida que obtiene información honesta sobre por qué los empleados dejan la empresa, en lugar de las respuestas políticamente correctas que los empleados dan para no quemar puentes. Con el protocolo de la entrevista, el análisis de tendencias y cómo actuar sobre los insights.',
                'prompt_content'    => <<<'PROMPT'
Eres una People Ops Specialist con experiencia rediseñando procesos de offboarding en empresas de 50-300 personas donde las entrevistas de salida bien diseñadas han revelado problemas sistémicos de gestión y cultura que ninguna encuesta de engagement había capturado, llevando a cambios concretos que redujeron la rotación no deseada un 30%.

Contexto:
- Tamaño de la empresa: [N personas]
- Tasa de rotación actual: [%]
- Quién hace actualmente las entrevistas de salida: [el manager directo / HR / nadie / queremos implementarlas]
- El mayor problema actual: [los empleados no dicen la verdad / recibimos feedback pero no actuamos / no tenemos proceso formal]

## Entrevistas de Salida — [Empresa]

### 🧠 Por qué las entrevistas de salida no funcionan en la mayoría de empresas

**El problema de diseño más frecuente:**
```
Las entrevistas de salida las hace el manager directo del empleado que se va.
El empleado se va, pero podría necesitar una referencia de ese manager.
O simplemente no quiere "quemar puentes".
Resultado: el empleado dice que se va "por una oportunidad mejor" cuando en realidad
se va porque el manager es tóxico o la cultura es terrible.
```

**El problema de proceso:**
```
Se recoge la información pero nadie la analiza ni actúa sobre ella.
El manager recibe el feedback → lo archiva → no cambia nada.
El empleado siguiente se va por la misma razón.
```

**Las 3 condiciones para una entrevista de salida honesta:**
```
1. La hace alguien diferente al manager directo (HR, el Director de People, o un tercero externo)
2. Se garantiza la confidencialidad (se comparten tendencias, no atribuciones individuales)
3. La empresa tiene un historial de actuar sobre el feedback recibido
   (si nunca cambia nada, los empleados aprenden que el feedback no sirve de nada)
```

### 📋 El protocolo de la entrevista de salida honesta

**El momento correcto:**
```
Ni el último día (el empleado está desconectado mentalmente) ni el día en que da el preaviso
(puede arrepentirse y retractarse). La semana antes de la última semana es el momento óptimo.
Formato: presencial o por videollamada (no por formulario escrito — las conversaciones generan
más honestidad y más matiz que un Google Form).
Duración: 30-45 minutos.
```

**Las preguntas que obtienen honestidad:**
```
APERTURA — establece el tono:
"Esta conversación es confidencial. El objetivo es entender cómo mejorar para los compañeros
que se quedan. No va a afectar tu referencia ni tu proceso de salida. ¿Te parece bien que
tomemos notas para detectar tendencias?"

PREGUNTAS PRINCIPALES:
1. "¿Qué fue lo que te hizo empezar a buscar otras opciones?"
   (No "¿por qué te vas?" — la primera pregunta es sobre el momento de inicio, más fácil de responder honestamente)

2. "Describe un momento en que te sentiste especialmente frustrado o desenganchado en los
   últimos 6 meses."

3. "¿Qué haría que hubieras considerado quedarte?"

4. "Si pudieras cambiar algo del equipo, del proceso o de la cultura, ¿qué cambiarías?"

5. "¿Hay algún tema del que se habla en privado pero no en público que crees que la empresa
   debería conocer?"
   (Esta es la pregunta más poderosa — pero solo funciona después de haber construido confianza
   en la conversación con las preguntas anteriores.)

CIERRE:
"¿Hay algo que creas que debería haber preguntado y no pregunté?"
"¿Puedo contactarte en los próximos meses si tengo alguna pregunta de seguimiento?"
```

### 📊 El análisis de tendencias y cómo actuar sobre los insights
El proceso de análisis trimestral de las entrevistas de salida (agrupación de razones, identificación de tendencias por área, manager o antigüedad) y el protocolo de presentación al equipo directivo con recomendaciones de acción concretas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Entrevista de salida, exit interview, rotación empleados, offboarding, retención talento, people ops',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Control de gestión mensual: el cuadro de mando que da visión del negocio en 30 minutos',
                'description'       => 'Construye el cuadro de mando mensual de control de gestión que permite al equipo directivo tomar decisiones informadas en 30 minutos de reunión, con los indicadores financieros y operativos correctos presentados de forma que la conversación sea sobre acciones, no sobre entender los números.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller con experiencia construyendo cuadros de mando de control de gestión para empresas de 5-50M€ de facturación donde la calidad del reporting financiero determina si el equipo directivo toma decisiones con datos o con intuición.

Contexto:
- Tipo de empresa: [SaaS / servicios / manufactura / distribución / otro]
- Facturación anual: [€]
- El mayor problema actual: [no tenemos reporting mensual / el reporting existe pero no se usa / los datos no son fiables / el reporting tarda demasiado en prepararse]

## Control de Gestión Mensual — [Empresa]

### 🗺️ Los 4 bloques del cuadro de mando mensual

**Bloque 1 — Resultados vs. Presupuesto (P&L real vs. budget):**
```
Lo que debe mostrar:
CONCEPTO              REAL MES    BUDGET MES    DESVIACIÓN    % DESV    REAL ACUM    BUDGET ACUM
─────────────────────────────────────────────────────────────────────────────────────────────────
Ingresos              €420k       €400k         +€20k         +5%       €1.1M        €1.0M
Coste ventas (COGS)   €126k       €120k         -€6k          -5%       €330k        €300k
MARGEN BRUTO          €294k       €280k         +€14k         +5%       €770k        €700k
Gastos operativos     €210k       €200k         -€10k         -5%       €550k        €500k
EBITDA                €84k        €80k          +€4k          +5%       €220k        €200k
MARGEN EBITDA         20%         20%           0pp                     20%          20%

El color importa: verde si estamos dentro de ±5% del budget, ámbar ±5-15%, rojo >15%.
```

**Bloque 2 — Indicadores de negocio (KPIs operativos):**
```
Los 5-8 KPIs que predicen la salud futura del negocio (leading indicators), no solo los resultados pasados.

Para SaaS:
→ MRR (Monthly Recurring Revenue) y su variación vs. mes anterior
→ Churn rate (% de clientes que se fueron)
→ Nuevos clientes este mes
→ CAC (Coste de Adquisición de Cliente)
→ NRR (Net Revenue Retention)

Para servicios profesionales:
→ Facturación por empleado (productividad)
→ Tasa de utilización del equipo (% horas facturables / horas disponibles)
→ Pipeline de nuevos proyectos
→ Plazo medio de cobro (DSO)

Para ecommerce:
→ Conversión del tráfico
→ AOV (Average Order Value)
→ ROAS por canal
→ Tasa de devoluciones
```

**Bloque 3 — Posición de caja y liquidez:**
```
SALDO DE CAJA al inicio del mes: €X
(+) Cobros del mes: €X
(-) Pagos del mes: €X
SALDO DE CAJA al cierre del mes: €X

Previsión de caja a 3 meses: gráfico de barras con el saldo estimado cada mes.
Línea de alarma: el saldo mínimo operativo de la empresa (normalmente 2-3 meses de gastos operativos).
```

**Bloque 4 — Los 3 asuntos más importantes del mes:**
```
No son números — son las 3 situaciones que requieren decisión o atención del equipo directivo.
Formato: situación → causa → decisión/acción recomendada → responsable → fecha.

Ejemplo:
1. El cliente X (8% del ARR) está evaluando cancelar.
   Causa: nuestro producto no cubre un caso de uso que lanzaron hace 2 meses.
   Acción: reunión con el CPO y el Account Manager esta semana para evaluar si lo podemos resolver.
   Responsable: [nombre] / Fecha: [viernes].
```

### ⏱️ El proceso de cierre mensual que genera el reporting en menos de 5 días hábiles
El calendario de cierre contable (quién hace qué y cuándo), las automatizaciones que eliminan el trabajo manual y el formato de presentación de la reunión de resultados que genera conversación sobre acciones, no sobre discutir los números.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Control de gestión, cuadro de mando financiero, reporting mensual, P&L, KPIs financieros, controller',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Política de uso aceptable (AUP) y términos de servicio para plataformas digitales: lo que no puede faltar',
                'description'       => 'Redacta una Política de Uso Aceptable (AUP) y unos Términos de Servicio para tu plataforma digital que protegen a tu empresa de usos abusivos, limitan tu responsabilidad como intermediario y cumplen con la regulación europea aplicable a plataformas (DSA, RGPD).',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho digital y plataformas tecnológicas con experiencia redactando la documentación legal de startups y scale-ups que operan plataformas en Europa, donde la calidad de los Términos de Servicio y la AUP determina la protección legal de la empresa ante litigios y la viabilidad del cumplimiento regulatorio.

Contexto:
- Tipo de plataforma: [marketplace / SaaS B2B / red social / plataforma de contenido / otro]
- Quiénes usan la plataforma: [empresas / consumidores / ambos]
- Contenido generado por usuarios: [sí / no / parcialmente]
- Mercado principal: [España / Europa / global]

## AUP y Términos de Servicio — Plataforma Digital — [Empresa]

### 📋 Los documentos legales que necesita una plataforma digital

**Documento 1 — Términos de Servicio (ToS):**
```
Qué es: el contrato entre la plataforma y el usuario que define los derechos y obligaciones de ambas partes.
Cuándo se aplica: en la relación general con cualquier usuario.

Cláusulas obligatorias:
→ Identidad del prestador del servicio (razón social, domicilio, CIF, datos de contacto)
→ Objeto del servicio (qué ofreces exactamente)
→ Condiciones de registro y edad mínima
→ Precio y modelo de facturación (si aplica)
→ Propiedad intelectual (qué derechos tiene el usuario sobre su contenido, qué licencia te cede a ti)
→ Limitación de responsabilidad
→ Ley aplicable y jurisdicción
→ Proceso de modificación de los términos
→ Proceso de cancelación de la cuenta
```

**Documento 2 — Política de Uso Aceptable (AUP):**
```
Qué es: la lista de comportamientos prohibidos en la plataforma.
Por qué es distinto de los ToS: es más específico y operativo. Define exactamente qué está prohibido.

Lo que no puede faltar en la AUP de cualquier plataforma:
→ Actividades ilegales (definición amplia)
→ Spam y comunicaciones no solicitadas masivas
→ Suplantación de identidad
→ Carga de malware, código malicioso o ataques DDoS
→ Abuso de la API (rate limiting, scraping no autorizado)
→ Intentos de acceso no autorizado a sistemas o cuentas de otros usuarios
→ Uso para actividades que violen derechos de terceros (PI, privacidad)
→ Contenido ilegal (si hay contenido generado por usuarios): CSAM, incitación al odio, terrorismo

Consecuencias del incumplimiento:
→ Aviso previo (para incumplimientos menores)
→ Suspensión temporal
→ Terminación permanente de la cuenta
→ Acciones legales si procede
```

**Documento 3 — Política de Privacidad (RGPD):**
```
Obligatoria por el RGPD desde el primer usuario europeo.
Debe incluir: qué datos recoges, para qué, durante cuánto tiempo, con quién los compartes,
los derechos del usuario (acceso, rectificación, supresión, portabilidad) y cómo ejercerlos.
```

### ⚖️ La protección como intermediario: el régimen de responsabilidad del DSA

**El Reglamento de Servicios Digitales (DSA) de la UE:**
```
En vigor para todas las plataformas desde 2024.
Cómo afecta a tu AUP:
→ Si tu plataforma aloja contenido de usuarios (UGC), necesitas un proceso de notice and action
  (sistema para que terceros reporten contenido ilegal → tú lo evalúas → actúas en plazo razonable)
→ Los "muy grandes" (>45M usuarios en la UE) tienen obligaciones adicionales
→ Las plataformas de tamaño menor tienen obligaciones más ligeras pero existen

Qué protege el régimen de responsabilidad del intermediario:
Si no tuvieras conocimiento del contenido ilegal Y actúas con diligencia cuando te lo notifican,
no eres responsable del contenido generado por tus usuarios.
Si actúas como editor (seleccionas, editas) → pierdes la exención.
```

### 📝 La estructura de proceso de moderación y enforcement
El flujo interno de gestión de denuncias de infracciones de la AUP (recepción → evaluación → decisión → comunicación al usuario denunciado → derecho de apelación) que cumple con el DSA y protege a la empresa de acusaciones de censura arbitraria.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Términos de servicio plataforma, AUP política uso aceptable, DSA, RGPD plataforma, moderación contenido legal',
                'vote_score'        => 22,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte multilingüe: cómo dar soporte de calidad en varios idiomas sin contratar agentes nativos para cada uno',
                'description'       => 'Escala el soporte al cliente a múltiples idiomas sin multiplicar el equipo con agentes nativos para cada idioma. Con la estrategia de cobertura lingüística, el uso correcto de la traducción automática con supervisión humana y los procesos de QA para soporte multilingüe.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Operations Manager con experiencia escalando el soporte multilingüe en empresas SaaS con usuarios en 15-30 países, donde la combinación de traducción automática de alta calidad, agentes bi/trilingües y procesos de QA ha permitido ofrecer soporte en 8 idiomas con un equipo de 6 personas.

Contexto:
- Idiomas actuales en los que das soporte: [español / inglés / otro]
- Idiomas a los que quieres expandirte: [describe]
- Tamaño del equipo de soporte: [N agentes]
- Herramienta de soporte: [Zendesk / Intercom / Freshdesk / otro]

## Soporte Multilingüe — [Empresa]

### 🗺️ Las 3 estrategias de soporte multilingüe por volumen de tickets

**Estrategia 1 — Para idiomas de bajo volumen (<20 tickets/semana):**
```
Machine translation (MT) supervisada por agentes bilingües.
Flujo:
→ El cliente escribe en [idioma X]
→ El sistema traduce automáticamente al idioma principal del equipo
→ El agente entiende el problema y redacta la respuesta en el idioma principal
→ El sistema traduce la respuesta al idioma del cliente
→ El agente (con conocimiento básico del idioma) valida que la traducción tiene sentido

Herramientas recomendadas:
→ DeepL API (mejor calidad para idiomas europeos)
→ Google Cloud Translation API (mayor cobertura de idiomas)
→ Integración con Zendesk: Unbabel (MT + post-edición humana), Lingpad

Cuando NO usar MT pura:
→ Temas legales o contractuales (el matiz importa demasiado)
→ Clientes VIP o situaciones de alto riesgo de churn
→ Idiomas donde la MT es notoriamente mala (algunos idiomas del Sudeste Asiático)
```

**Estrategia 2 — Para idiomas de volumen medio (20-100 tickets/semana):**
```
Agentes bilingües que cubren varios idiomas.
Un agente que habla inglés + alemán + holandés puede cubrir los tres mercados.
Contratación: buscar agentes con segunda o tercera lengua como parte del perfil, no solo la especialización.

Cómo organizar el equipo:
→ Agentes "anchor" en el idioma principal que cubren un idioma secundario
→ Horarios escalonados para cobertura geográfica (idiomas de LATAM vs. Europa vs. Asia)
```

**Estrategia 3 — Para idiomas de alto volumen (>100 tickets/semana):**
```
Agentes nativos dedicados o BPO (Business Process Outsourcing) especializado.
En este volumen, la calidad de la experiencia del cliente en ese idioma justifica la inversión.
BPOs especializados en soporte multilingüe: Teleperformance, Majorel, Concentrix.
```

### 🛠️ La configuración técnica del soporte multilingüe

**Zendesk (o Freshdesk/Intercom):**
```
Configuración de detección automática de idioma:
→ El ticket entra y el sistema detecta el idioma
→ Lo asigna a la cola correcta (o al agente con esa habilidad lingüística)
→ Si el idioma no está cubierto por agentes nativos → workflow de MT automática

Vistas por idioma:
Crea vistas filtradas por idioma (campo de idioma en el ticket) para que cada agente vea
solo los tickets en los idiomas que puede cubrir.

Macros y respuestas enlatadas multilingüe:
Las respuestas a las preguntas más frecuentes ya traducidas a cada idioma.
Actualización centralizada: cuando cambias la macro en el idioma principal → se actualiza en todos.
```

**Help Center multilingüe:**
```
Un buen Help Center en el idioma del cliente es la primera línea de deflexión.
Prioridad de traducción: los 20 artículos más visitados, primero.
Herramienta: Crowdin (para gestionar traducciones colaborativas), Lokalise o Transifex.
MT del Help Center: aceptable para idiomas de bajo volumen, revisión humana para los principales.
```

### 📊 El QA del soporte multilingüe: cómo mantener la calidad cuando no hablas el idioma
El proceso de auditoría de calidad de tickets en idiomas que el manager no domina — con herramientas de back-translation, scorecards adaptados a contexto lingüístico y cómo involucrar a usuarios nativos en el QA.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Soporte multilingüe, customer support idiomas, DeepL soporte, Zendesk multilingüe, escalado soporte internacional',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Productividad y sistemas de trabajo freelance: el sistema que te permite trabajar menos y facturar más',
                'description'       => 'Diseña el sistema de trabajo freelance que maximiza tu productividad real — las horas que generan valor y revenue — y minimiza el tiempo administrativo que consume tu jornada sin generar ingresos. Con el time tracking, los bloques de trabajo y la automatización de tareas repetitivas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Productivity Coach con experiencia ayudando a profesionales independientes a rediseñar su sistema de trabajo para pasar de 50 horas semanales frenéticas y mal pagadas a 35 horas productivas y bien remuneradas, mediante la separación clara entre trabajo generador de ingresos, trabajo de mantenimiento y tiempo de recarga.

Perfil:
- Tu especialidad como freelance: [describe]
- El mayor problema de productividad actual: [demasiadas interrupciones / no sé en qué tiempo estoy perdiendo el tiempo / las tareas administrativas me consumen / no puedo desconectar]

## Productividad y Sistemas de Trabajo Freelance — [Nombre]

### 🔭 El diagnóstico: dónde va tu tiempo realmente

**El ejercicio del time audit (1 semana):**
```
Durante una semana, registra TODAS las actividades en bloques de 30 minutos.
Categoriza cada bloque:

CATEGORÍA A — Trabajo generador de ingresos:
  Trabajo facturable al cliente.
  Creación de contenido/producto que genera ventas.
  Propuestas y reuniones de ventas.

CATEGORÍA B — Trabajo de mantenimiento del negocio:
  Facturación, contabilidad, gestión de contratos.
  Email de clientes (no facturable).
  Reuniones de gestión.

CATEGORÍA C — Desarrollo profesional:
  Formación, lectura técnica.
  Networking, comunidad.

CATEGORÍA D — Tiempo muerto / distracción:
  Redes sociales sin propósito.
  Reuniones innecesarias.
  Tareas que nadie necesitaba.

Objetivo: la Categoría A debe ser al menos el 60% de tu tiempo total de trabajo.
Si está por debajo del 40%, tienes un problema de sistema, no de esfuerzo.
```

### ⏱️ El sistema de bloques de trabajo: estructura para el cerebro freelance

**El problema del freelance sin estructura:**
```
Sin estructura, el freelance cae en la reactividad:
→ Abre el email a las 9am → responde a todo → a las 12pm no ha hecho trabajo de cliente.
→ Acepta llamadas en cualquier momento → el trabajo profundo se fragmenta.
→ Mezcla trabajo de cliente + tareas admin + propuestas → nada sale bien.
```

**El diseño de la semana freelance:**
```
BLOQUES SAGRADOS (trabajo profundo, sin interrupciones):
→ 2-3 bloques de 2-3 horas para el trabajo que genera ingresos.
→ Sin email, sin Slack, sin teléfono.
→ Normalmente por la mañana (es cuando el cerebro funciona mejor para la mayoría).

BLOQUES DE COMUNICACIÓN:
→ 2 momentos al día para revisar email y mensajes (ej: 10am y 16:30pm).
→ El resto del tiempo, el email está cerrado.
→ Si alguien necesita algo urgente, que llame.

BLOQUES ADMINISTRATIVOS:
→ 1 tarde fija a la semana para toda la admin: facturación, contratos, tareas de gestión.
→ Al agrupar la admin en un solo bloque, reduces el coste cognitivo de cambiar de tarea.

BLOQUES DE NEGOCIO:
→ 2-3 horas semanales para trabajo de desarrollo del negocio (propuestas, networking, contenido).
→ Si no te asignas tiempo para hacer crecer el negocio, solo trabajas DENTRO del negocio.
```

### 🤖 Las automatizaciones que eliminan el trabajo repetitivo

**Las 5 automatizaciones con mayor ROI para freelancers:**
```
1. Plantillas de propuestas (Notion + PandaDoc / Qwilr):
   Cada propuesta parte de una plantilla → solo personalizas el problema específico.
   Tiempo ahorrado: 1-2 horas por propuesta.

2. Sistema de onboarding automático (Calendly + email sequence):
   Cuando firma un cliente → recibe automáticamente: contrato, formulario de brief, acceso al proyecto.
   Tiempo ahorrado: 1-2 horas por cliente nuevo.

3. Facturación automática (Holded / Invoice Ninja / FreshBooks):
   La factura se genera automáticamente en la fecha acordada.
   El recordatorio de pago se envía automáticamente si no pagan en el plazo.

4. Reuniones sin email (Calendly):
   El cliente reserva directamente en tu calendario en los huecos que tú defines.
   Elimina los 5-10 emails de "¿cuándo puedes?" por reunión.

5. Backup y organización de archivos automática:
   Todos los proyectos en la misma estructura de carpetas desde el día 1.
   Backup automático en la nube (Google Drive / Dropbox).
```

### 📊 El dashboard de productividad freelance: las métricas que indican si el sistema funciona
Las 5 métricas semanales del freelance (horas facturables, tarifa efectiva por hora real, tiempo de respuesta a clientes, tiempo en tareas de admin, tiempo de recarga) y el cuadro de mando mínimo que revelas en 10 minutos los lunes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Productividad freelance, sistema trabajo freelance, time blocking, automatización freelance, time audit',
                'vote_score'        => 45,
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
