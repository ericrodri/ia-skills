<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills23Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido para LinkedIn: el sistema de publicación semanal que construye audiencia sin consumirte',
                'description'       => 'Diseña el sistema de creación y publicación de contenido en LinkedIn que hace crecer tu audiencia de forma sostenible. Con el calendario editorial de 4 formatos, las estructuras de posts que funcionan para cada objetivo y el sistema de reutilización que multiplica cada pieza de contenido.',
                'prompt_content'    => <<<'PROMPT'
Eres un LinkedIn Content Strategist con experiencia ayudando a fundadores, consultores y directivos a pasar de 0 a 5.000+ seguidores relevantes en 6-12 meses sin publicar contenido genérico ni quemarse en el proceso.

Contexto:
- Perfil de LinkedIn: [URL o descripción]
- Objetivo de la presencia en LinkedIn: [visibilidad en el sector / generar leads / posicionarte como experto / contratos freelance]
- Audiencia objetivo: [cargo, sector, tamaño de empresa de las personas que te importa que te lean]
- Frecuencia de publicación actual: [nunca / esporádico / 1-2 veces/semana]
- Mayor bloqueo: [no sé de qué escribir / no tengo tiempo / no sé si funciona / tengo miedo al juicio]

## Sistema de Contenido LinkedIn — [Tu Nombre/Empresa]

### 🧠 El sistema de 4 formatos que cubre todas las necesidades

**Formato 1 — El post de enseñanza (x2/semana)**
Objetivo: demostrar expertise y dar valor directo.
Estructura:
```
Hook (1ª línea): la frase que hace que el lector haga clic en "ver más"
Cuerpo: la enseñanza con ejemplos concretos (3-5 puntos)
Cierre: la conclusión o el aprendizaje clave
CTA: una pregunta que invite a comentar
```

**Formato 2 — El post de experiencia (1/semana)**
Objetivo: humanizar y crear conexión emocional.
Estructura:
```
Situación: algo que te pasó (un error, un aprendizaje, una conversación)
Giro: lo que descubriste o lo que cambió
Aprendizaje: lo que extraes para tu audiencia
```

**Formato 3 — La opinión (1/semana)**
Objetivo: polarizar y generar debate entre tu audiencia objetivo.
Estructura:
```
La afirmación: "La mayoría de [X] está equivocada sobre [Y]"
El argumento: por qué lo crees (con datos o experiencia)
La invitación: "¿Qué piensas tú?"
```

**Formato 4 — El carrusel (1/2 semanas)**
Objetivo: máximo alcance orgánico (los carruseles tienen el mayor reach en LinkedIn).
Estructura: una lista de 5-10 puntos accionables en formato visual.
Tema ideal: listas, frameworks, comparativas, procesos paso a paso.

### 📅 El calendario editorial de 4 semanas

```
LUNES:      Post de enseñanza (dato o concepto útil)
MIÉRCOLES:  Post de experiencia o opinión (alternando)
VIERNES:    Post de enseñanza largo o carrusel (el contenido más elaborado)
```

No publiques 7 días a la semana si no puedes mantenerlo. 3 veces/semana con consistencia bate 7 veces/semana durante 2 semanas y luego nada.

### ✍️ El hook que hace que lean el post

El 90% de los lectores decide en la primera línea si sigue leyendo.

**Los 5 tipos de hook que funcionan:**
```
1. El número sorprendente:
   "Perdí €40.000 en mi primera campaña de publicidad. Esto es lo que aprendí."

2. La afirmación contraintuitiva:
   "Contratar a más vendedores no aumenta las ventas."

3. La pregunta directa a la audiencia:
   "¿Por qué el 80% de las startups fracasan aunque tienen buen producto?"

4. La promesa de valor:
   "Esto es lo que hago cada lunes para preparar mi semana (y me lleva 20 minutos)."

5. La historia de 1 frase:
   "Hoy despedí a mi mayor cliente. Aquí está el porqué."
```

**Lo que nunca funciona como hook:**
- "Hola LinkedIn, hoy quiero hablar de..."
- "Me complace anunciar que..."
- "Como [cargo] que lleva X años en el sector..."

### 🔄 El sistema de reutilización del contenido

1 pieza larga → 4 piezas cortas:
- Un artículo largo → 3 posts de enseñanza + 1 carrusel con los puntos clave
- Una conferencia o webinar → 5 posts con las ideas principales
- Un thread de Twitter/X → 1 post de LinkedIn con los puntos más interesantes

El contenido bueno no se agota — se reutiliza para audiencias y formatos distintos.

### 📊 Las métricas que indican que tu estrategia está funcionando
Más allá de los "me gusta" — los 5 indicadores que muestran si tu contenido está atrayendo a la audiencia correcta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'LinkedIn contenido, estrategia LinkedIn, personal branding, calendario editorial',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Testing de rendimiento y carga: encuentra el límite de tu aplicación antes de que lo encuentre el usuario',
                'description'       => 'Diseña e implementa las pruebas de rendimiento que revelan los límites de tu aplicación bajo carga real. Con la diferencia entre load testing, stress testing y spike testing, las herramientas para cada escenario, los KPIs de rendimiento y cómo interpretar los resultados para priorizar optimizaciones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Performance Engineer con experiencia identificando y resolviendo cuellos de botella en aplicaciones web que van de 100 a 100.000 usuarios concurrentes usando k6, JMeter y Locust.

Contexto:
- Stack de la aplicación: [Node.js / Python / PHP / Java / otro]
- Base de datos: [PostgreSQL / MySQL / MongoDB / Redis / otro]
- Infraestructura: [un solo servidor / varios servidores / Kubernetes / serverless]
- Carga esperada: [usuarios concurrentes esperados / pico de tráfico previsto]
- Problema actual: [la app va lenta / queremos prepararnos antes del lanzamiento / hubo un incidente de caída por carga]

## Testing de Rendimiento y Carga — [Aplicación]

### 🎯 Los 4 tipos de tests de rendimiento y cuándo usar cada uno

**Load testing (la prueba más importante):**
Simula la carga esperada normal para verificar que el sistema funciona correctamente.
Objetivo: confirmar que la app rinde bien bajo la carga habitual.
Cuándo: antes de cada release, regularmente como parte de la CI/CD.

**Stress testing:**
Aumenta la carga gradualmente hasta que el sistema falla.
Objetivo: descubrir el punto de quiebre y cómo falla el sistema (¿gracefully? ¿crash total?).
Cuándo: antes de lanzamientos importantes, al cambiar la infraestructura.

**Spike testing:**
Aumenta la carga de golpe (de 100 a 10.000 usuarios en segundos).
Objetivo: simular eventos virales, flash sales, lanzamientos de productos.
Cuándo: si tu negocio tiene picos de demanda predecibles (Navidad, lanzamientos, campañas).

**Soak testing:**
Carga moderada durante muchas horas o días.
Objetivo: detectar memory leaks, degradación gradual, problemas de acumulación.
Cuándo: antes de estabilizar una versión para producción.

### 🛠️ Load testing con k6 (la herramienta más moderna)

**Instalación:**
```bash
# macOS
brew install k6

# Linux
sudo gpg -k
sudo gpg --no-default-keyring --keyring /usr/share/keyrings/k6-archive-keyring.gpg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C5AD17C747E3415A3642D57D77C6C491D6AC1D69
echo "deb [signed-by=/usr/share/keyrings/k6-archive-keyring.gpg] https://dl.k6.io/deb stable main" | sudo tee /etc/apt/sources.list.d/k6.list
sudo apt-get update && sudo apt-get install k6
```

**El script básico de load testing:**
```javascript
// load-test.js
import http from 'k6/http'
import { check, sleep } from 'k6'

export const options = {
  stages: [
    { duration: '30s', target: 20 },   // Ramp up to 20 users in 30s
    { duration: '1m',  target: 20 },   // Stay at 20 users for 1 minute
    { duration: '30s', target: 0 },    // Ramp down to 0 users
  ],
  thresholds: {
    http_req_duration: ['p(95)<500'],  // 95% de requests bajo 500ms
    http_req_failed: ['rate<0.01'],    // Menos del 1% de errores
  },
}

export default function () {
  // Test del endpoint principal
  const res = http.get('https://tu-app.com/api/products')

  check(res, {
    'status is 200': (r) => r.status === 200,
    'response time < 500ms': (r) => r.timings.duration < 500,
    'response has data': (r) => r.body.length > 0,
  })

  sleep(1)  // Pausa de 1 segundo entre requests (simula comportamiento real)
}
```

**Ejecutar el test:**
```bash
k6 run load-test.js

# Con output detallado en tiempo real:
k6 run --out json=results.json load-test.js
```

**El script de stress testing:**
```javascript
export const options = {
  stages: [
    { duration: '2m',  target: 100 },   // Normal load
    { duration: '5m',  target: 100 },
    { duration: '2m',  target: 200 },   // Double load
    { duration: '5m',  target: 200 },
    { duration: '2m',  target: 300 },   // Triple load
    { duration: '5m',  target: 300 },
    { duration: '2m',  target: 0 },     // Scale down
  ],
}
```

### 📊 Los KPIs de rendimiento que importan

```
Métrica                    Umbral excelente    Umbral aceptable    Inaceptable
Response time (p95)        <200ms              <500ms              >1s
Response time (p99)        <500ms              <1s                 >3s
Error rate                 <0.1%               <1%                 >1%
Throughput (req/s)         Depende del negocio
CPU usage (bajo carga)     <70%                <85%                >90%
Memory usage (bajo carga)  <70%                <80%                >85%
```

### 🔍 Cómo interpretar los resultados y priorizar las optimizaciones
El proceso de análisis de resultados que convierte los números en un plan de optimización priorizado por impacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Load testing, k6, performance testing, stress testing, rendimiento web',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de iconografía: crea un set de iconos coherente que refuerza la identidad de tu producto',
                'description'       => 'Diseña o adapta un set de iconos coherente con la identidad visual de tu producto o marca. Con los principios de diseño de iconos, la cuadrícula base, los estilos (outline, filled, duotone) y cómo mantener la consistencia cuando el set crece.',
                'prompt_content'    => <<<'PROMPT'
Eres un UI/Brand Designer especializado en sistemas de iconografía con experiencia creando y manteniendo sets de iconos para productos digitales con decenas a cientos de iconos.

Contexto:
- Tipo de producto: [app móvil / web app / branding / sistema de diseño]
- Estilo actual de la marca: [moderno/geométrico / amigable/redondeado / técnico/preciso / otro]
- Número de iconos necesarios: [<20 / 20-50 / 50-100 / >100]
- Herramienta: [Figma / Illustrator / Sketch]
- Estado actual: [sin iconos / usando una librería de terceros / tenemos algunos pero son incoherentes]

## Sistema de Iconografía — [Producto/Marca]

### 🎯 Los principios de una iconografía coherente

**1. Consistencia del trazo:**
Todos los iconos tienen el mismo grosor de línea (stroke weight).
Estándar más frecuente: 1.5px o 2px a 24px de tamaño base.

❌ Mezcla iconos de 1px de trazo con iconos de 2px.
✅ Define un único stroke weight y úsalo en todo el set.

**2. Consistencia del estilo de línea:**
Elige uno (y solo uno):
- **Outline:** solo el contorno, sin relleno → limpio, versátil
- **Filled:** relleno sólido → más visual weight, mejor en tamaños pequeños
- **Duotone:** dos colores (fondo + primer plano) → más expresivo
- **Flat color:** formas de colores sólidos sin contorno

Mezclar estilos en el mismo set rompe la coherencia visual.

**3. Consistencia de los bordes:**
Elige un radio de esquina y úsalo en todos los iconos.
- Puntas cuadradas (0px): estilo técnico/preciso
- Ligeramente redondeadas (2px): balance profesional
- Muy redondeadas (4-6px): amigable, moderno

**4. El grid base:**
Todos los iconos se diseñan dentro del mismo grid.
Grid estándar: 24×24px con padding de 2px en cada lado → área de dibujo de 20×20px.

**5. Optical sizing:**
Los elementos circulares parecen más pequeños que los cuadrados del mismo tamaño.
Compensa ajustando visualmente — no matemáticamente.

### 📐 La cuadrícula base en Figma

```
Tamaño del frame:   24×24px (o 16×16px para sets pequeños)
Safe area:          20×20px (2px de margen en cada lado)
Keylines:           Cuadrado de 18×18px y círculo de ⌀20px
Stroke weight:      1.5px o 2px (consistente en todo el set)
Stroke cap:         Round o Square (el mismo en todos)
Joins:              Round o Miter (el mismo en todos)
```

**Cómo usar las keylines:**
Los iconos cuadrados (folder, document) se ajustan al cuadrado de 18px.
Los iconos circulares (avatar, globe) se ajustan al círculo de ⌀20px.
Los iconos horizontales (minus, arrow) se ajustan a 20px de ancho.
Los iconos verticales se ajustan a 20px de alto.

### 🎨 Los 3 estados de un icono (para UI)

**Estado normal:**
El icono por defecto.

**Estado activo/seleccionado:**
Cambia de outline a filled (para iconos de navegación).
O cambia el color al color principal de la marca.

**Estado desactivado:**
Reduce la opacidad al 30-40%. No cambia el trazo.

**Cómo construirlo en Figma:**
Crea un componente base con variantes:
- Variant: Style = Outline / Filled
- Variant: State = Default / Active / Disabled
- Variant: Size = 16 / 20 / 24 / 32

### 🔤 El naming system que hace que la librería sea usable

**La estructura del nombre:**
`[categoria]-[elemento]-[modificador]`

Ejemplos:
```
action-edit
action-edit-outline
action-edit-filled
navigation-arrow-left
navigation-arrow-right
status-check-circle
status-warning-triangle
media-play-circle
media-pause
```

**Por qué el naming importa:**
Un developer que busca "arrow" en la librería debe encontrar todos los arrows.
Un mal naming → los diseñadores crean iconos duplicados porque no encuentran el que existe.

### 📦 Cómo exportar y entregar la iconografía al equipo de desarrollo
El flujo de exportación en SVG, las configuraciones de optimización y la integración con Storybook o el sistema de diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Iconografía, set de iconos, design system, Figma, UI design',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Cierre de trimestre de ventas: el sprint final que maximiza el revenue sin quemar al equipo',
                'description'       => 'Gestiona el cierre de trimestre de ventas con la estrategia y las tácticas que maximizan el revenue sin que el equipo recurra a descuentos agresivos ni promesas que no se pueden cumplir. Con el plan de las últimas 3 semanas del trimestre, las conversaciones de aceleración y el análisis post-trimestre.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Manager con experiencia cerrando trimestres de ventas en equipos de 5-20 personas donde la presión del final del trimestre es real pero gestionable si tienes el sistema correcto.

Contexto:
- Estado actual del trimestre: [semanas que faltan para el cierre]
- % de cuota alcanzado hasta ahora: [%]
- Número de deals en pipeline avanzado (>70% probabilidad): [N deals, valor total €]
- Mayor bloqueo para cerrar: [el cliente necesita aprobación interna / están comparando con competidores / esperan descuento / otro]

## Sprint de Cierre de Trimestre — [Equipo de Ventas]

### 📊 El diagnóstico rápido: ¿qué necesitas cerrar para llegar a cuota?

**Cálculo del gap:**
```
Cuota del trimestre:              €X
Revenue ya cerrado:              -€Y
Revenue en pipeline >70%:        -€Z (el que razonablemente cerrará)
GAP real a cubrir:                €G
```

**Si el gap es <20% del pipeline probable:** estás bien, focus en acelerar los deals top.
**Si el gap es 20-50%:** necesitas activar deals que estaban en pipeline medio.
**Si el gap es >50%:** tienes un problema de pipeline — el cierre de este trimestre será difícil.

### ⏰ El plan de las últimas 3 semanas (semana por semana)

**SEMANA 1 — Clasificación y priorización:**
Clasifica todos los deals en pipeline en 3 categorías:
- **Tier A:** se cierra este trimestre con alta confianza
- **Tier B:** podría cerrarse si lo aceleras activamente
- **Tier C:** no hay posibilidad este trimestre → no consumas energía aquí

Focus del equipo: exclusivamente en Tier A y Tier B.

**SEMANA 2 — Aceleración activa:**
Para cada deal Tier A:
- ¿Qué falta para que el cliente firme? (un solo bloqueo identificado)
- ¿Quién en nuestra empresa puede ayudar a desbloquearlo? (CTO para el técnico, CFO para el financiero)
- ¿Cuándo es la próxima acción concreta con el cliente?

Para cada deal Tier B:
- La llamada de "¿qué necesitáis para tomar la decisión este trimestre?"
- Oferta de cierre trimestral (sin descuento — con incentivo de implementación rápida o bonus)

**SEMANA 3 — Ejecución y seguimiento diario:**
El daily standup de ventas (15 minutos):
- ¿Qué deals avanzan hoy?
- ¿Qué deals están bloqueados?
- ¿Qué necesita el vendedor del manager para desbloquearlos?

### 🗣️ La conversación de aceleración sin descuento agresivo

**El error del vendedor bajo presión:**
"Te puedo dar un 20% si firmas esta semana."

**Los 3 problemas de ese approach:**
1. Entrenas al cliente a esperar siempre al final del trimestre para comprar más barato
2. Destruyes el margen del negocio
3. El cliente asume que el precio regular estaba inflado

**La conversación de aceleración correcta:**
"[Nombre], sabemos que estáis valorando la propuesta. Si cerramos antes del [fecha], podríamos incluir [onboarding acelerado / X meses de acceso a la feature premium / sesión de formación del equipo] sin coste adicional. ¿Qué necesitáis de vuestra parte para poder avanzar en ese plazo?"

Estás ofreciendo valor adicional (no descuento) y poniendo el foco en lo que bloquea al cliente.

### 📈 El análisis post-trimestre: cómo aprenderás del cierre para el próximo
El proceso de retrospectiva de cierre de trimestre que mejora el forecasting y la conversión para el trimestre siguiente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Cierre de trimestre, deal management, aceleración de ventas, pipeline, forecast',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión del backlog: el proceso que mantiene el backlog limpio, priorizado y útil para el equipo',
                'description'       => 'Diseña el proceso de gestión del backlog de producto que mantiene la lista de trabajo limpia, priorizada y alineada con la estrategia. Con el proceso de refinement, los criterios de priorización, la gestión de bugs vs features y cómo comunicar las decisiones al equipo y a los stakeholders.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia gestionando backlogs de productos con 200-2.000 items donde el reto principal es que el backlog sea una herramienta de decisión, no un cementerio de ideas.

Contexto:
- Herramienta de gestión: [Jira / Linear / Notion / Trello / GitHub Issues / otro]
- Estado del backlog: [caótico y desactualizado / demasiado grande para gestionar / sin priorización real / quiero mejorar el proceso]
- Tamaño del equipo de desarrollo: [N personas]
- Metodología: [scrum / kanban / shape up / otro]
- Mayor problema: [todo es "urgente" / el backlog tiene 500 items sin priorizar / nunca hay tiempo para el backlog refinement / los stakeholders añaden sin consenso]

## Gestión del Backlog de Producto — [Equipo]

### 🏗️ La estructura del backlog que funciona

**El backlog tiene 3 zonas distintas:**

```
ZONA 1 — El backlog inmediato (sprint actual y 1-2 sprints siguientes):
- Items completamente especificados
- Estimados por el equipo
- Priorizados y en orden de trabajo
- Máximo: 2-3 sprints de trabajo

ZONA 2 — El backlog cercano (próximos 1-2 meses):
- Items en proceso de especificación
- Sin estimar todavía
- Priorizados por valor de negocio aproximado

ZONA 3 — El backlog lejano / ideas:
- Ideas sin especificar
- Sin prioridad firme todavía
- Se revisa cada quarter
```

**Por qué la separación importa:**
El equipo solo trabaja con Zona 1.
El PM trabaja con Zona 2 para preparar la Zona 1.
La Zona 3 es el "parking lot" — si no la revisas cada quarter, la eliminas.

### 🔄 El proceso de backlog refinement (la reunión que más mejora la entrega)

**Frecuencia:** una vez a la semana, 1 hora máximo.
**Participantes:** PM + tech lead + 1-2 devs senior (no todo el equipo — los demás tienen mejor uso de su tiempo).

**El orden del día de la reunión:**
```
0-15 min:  Revisar los items de la Zona 1 pendiente de estimación
           → El PM explica el contexto y el "qué" (no el "cómo")
           → El equipo estima (planning poker o T-shirt sizes)

15-35 min: Refinar los items de Zona 2 que pasan a Zona 1 esta semana
           → ¿Tenemos suficiente claridad para construirlo?
           → ¿Qué preguntas quedan abiertas?
           → ¿Qué dependencias existen?

35-50 min: Revisar y limpiar el backlog
           → ¿Algún item de Zona 2 que lleve >2 meses sin avanzar?
           → ¿Algún bug cerrado automáticamente por no reproducible?
           → ¿Algún item que ya no tenga valor tras cambios recientes?

50-60 min: Clarificaciones del PM sobre items de la próxima semana
```

### ⚖️ El framework de priorización que evita el "todo es urgente"

**El modelo RICE (aplicado al backlog):**
```
R — Reach:  ¿A cuántos usuarios impacta? (en el próximo trimestre)
I — Impact: ¿Cuánto impacta a cada usuario? (escala 0.25-3)
C — Confidence: ¿Cuánta confianza tenemos en R e I? (% del 0 al 100)
E — Effort: ¿Cuántas personas-semanas de trabajo?

Score RICE = (R × I × C) / E
```

**El proceso de priorización:**
Calcula el score RICE de los top 20 items del backlog.
El orden del score = el orden de prioridad.
Si hay desacuerdo, el PM tiene el desempate — con justificación pública.

**Bugs vs. features — la regla del 20/80:**
Reserva el 20% de la capacidad del equipo para bugs y deuda técnica.
No negocias este espacio con los stakeholders — es parte del coste de mantener el producto.

### 📣 Cómo comunicar las prioridades a los stakeholders que piden features
El proceso de gestión de stakeholders que mantiene la confianza sin comprometer la estrategia de producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Backlog management, refinement, priorización, RICE, product management',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de la diversidad, equidad e inclusión (DEI) en la empresa: del discurso a las acciones concretas',
                'description'       => 'Diseña el programa de DEI que produce cambios reales en la empresa más allá de las declaraciones de intenciones. Con el diagnóstico de la situación actual, las acciones concretas en selección y desarrollo, las métricas de seguimiento y cómo gestionar la resistencia interna.',
                'prompt_content'    => <<<'PROMPT'
Eres un People & Culture Lead con experiencia implementando programas de diversidad, equidad e inclusión en empresas de 30 a 500 personas que han conseguido mejoras medibles en representación y sentido de pertenencia sin crear polarización interna.

Contexto:
- Tamaño de la empresa: [N empleados]
- Estado actual: [no tenemos nada / tenemos la declaración de valores pero poco más / tenemos algunas iniciativas aisladas / queremos sistematizar]
- Área de mayor brecha: [diversidad de género / diversidad étnica / inclusión de personas con discapacidad / sesgo en la selección / otro]
- Industria: [tech / consultoría / manufactura / servicios / otro — cada sector tiene sus propios retos]

## Programa de DEI — [Empresa]

### 🔍 El diagnóstico: dónde estás antes de actuar

**Los datos que necesitas recopilar:**

```
REPRESENTACIÓN (datos de RRHH):
- % de mujeres por nivel: operativo, manager, director, C-level
- % de personas de minorías étnicas (si aplica en tu contexto)
- % de personas con discapacidad declarada
- Brecha salarial de género por categoría (obligatorio para >50 empleados en España)

EXPERIENCIA SUBJETIVA (encuesta anónima):
- ¿Sientes que tienes las mismas oportunidades de desarrollo que tus compañeros?
- ¿Has experimentado o presenciado comportamientos discriminatorios en el último año?
- ¿Sientes que tu opinión es escuchada y valorada en las reuniones?

PROCESOS (auditoría interna):
- ¿Cómo son nuestras ofertas de trabajo? ¿Usan lenguaje inclusivo?
- ¿Qué % de nuestros candidatos en cada fase del proceso son mujeres / minorías?
- ¿Tenemos un proceso estructurado de evaluación de candidatos o es subjetivo?
```

### 🎯 Las acciones concretas con mayor impacto

**En la selección (donde el sesgo es más frecuente):**

1. **Ofertas de trabajo con lenguaje inclusivo:**
   Usa herramientas como Gender Decoder o Textio para identificar términos que desincentivan candidaturas de mujeres ("agresivo", "rockstar", "ninja") o que son innecesariamente técnicos.

2. **Panel de entrevistas diverso:**
   Cuando sea posible, el panel de entrevista incluye al menos una persona de un grupo subrepresentado en el equipo.

3. **Scorecard estructurado:**
   Criterios definidos antes de entrevistar — no "feeling". Cada entrevistador evalúa los mismos criterios.

4. **Eliminar el "cultura fit" como criterio:**
   "Cultura fit" frecuentemente significa "se parece a nosotros". Reemplaza por "valores alignment" con criterios medibles.

**En el desarrollo:**

1. **Sponsorship activo:**
   Los managers nombran sponsors para personas de grupos subrepresentados con potencial — un sponsor que les abre puertas, no solo un mentor que les da consejos.

2. **Transparencia en los criterios de promoción:**
   Si los criterios de promoción no están escritos, los grupos con menos "acceso informal" no los conocen.

3. **Revisión de sesgos en la evaluación de desempeño:**
   Calibración cruzada entre managers para identificar evaluaciones que sistemáticamente favorecen o perjudican a ciertos grupos.

### 📊 Las métricas que miden el progreso real

```
REPRESENTACIÓN (cuantitativa):
- % de mujeres en roles de liderazgo (manager y superior)
- Ratio de contratación externa: % de candidatas mujeres vs. % de contrataciones mujeres
- Tasa de retención por género/grupo

EQUIDAD (cuantitativa):
- Brecha salarial ajustada (mismo rol, misma experiencia)
- Tasa de promoción por género/grupo

INCLUSIÓN (cualitativa):
- Score de sentido de pertenencia en la encuesta de clima
- % de empleados que reportaron un incidente de discriminación en el año
```

### 🤝 Cómo gestionar la resistencia interna al programa DEI
Los argumentos más frecuentes contra el DEI en empresas y cómo responderlos con datos y lógica, sin crear mayor resistencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'DEI, diversidad e inclusión, selección inclusiva, brecha salarial, cultura empresarial',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión del circulante y el NOF: libera caja optimizando el ciclo de conversión del efectivo',
                'description'       => 'Gestiona el circulante de tu empresa para liberar caja sin necesitar más financiación. Con el cálculo del NOF (Necesidades Operativas de Fondos), las 3 palancas del ciclo de conversión del efectivo y las acciones concretas para optimizar cobros, pagos e inventario.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia liberando caja en empresas de 1M a 20M de facturación mediante la optimización del circulante, reduciendo las necesidades de financiación a corto plazo sin comprometer las operaciones.

Contexto:
- Facturación anual: [€]
- Sector: [manufactura / distribución / servicios / retail / otro]
- Problema principal: [nos quedamos sin caja en determinados meses / los clientes tardan mucho en pagar / tenemos mucho stock inmovilizado / otro]
- PMC actual: [días de cobro medio]
- PMP actual: [días de pago a proveedores]
- PRI actual: [días de rotación de inventario — si aplica]

## Gestión del Circulante y el NOF — [Empresa]

### 🧮 El cálculo del NOF: cuánta caja consume tu ciclo operativo

**La fórmula del NOF:**
```
NOF = Deudores (clientes) + Inventario - Acreedores (proveedores)

En días:
NOF días = PMC + PRI - PMP

Donde:
PMC = Período Medio de Cobro = (Saldo medio clientes / Ventas) × 365
PRI = Período Medio de Rotación del Inventario = (Stock medio / Compras) × 365
PMP = Período Medio de Pago = (Saldo medio proveedores / Compras) × 365
```

**Ejemplo de cálculo:**
```
Empresa de distribución con 5M de facturación:

PMC: 60 días (cobro a clientes)
PRI: 30 días (días de stock en almacén)
PMP: 45 días (pago a proveedores)

NOF días = 60 + 30 - 45 = 45 días

Necesidades de financiación:
NOF € = (Facturación / 365) × NOF días
NOF € = (€5.000.000 / 365) × 45 = €616.438

Esta empresa necesita ~€616k para financiar su ciclo operativo.
```

**Si reduces los días de NOF de 45 a 30:**
```
NOF € = (€5.000.000 / 365) × 30 = €410.959
Caja liberada: €616.438 - €410.959 = €205.479
```

### 🔧 Las 3 palancas para reducir el NOF

**Palanca 1 — Reducir el PMC (cobrar antes a los clientes):**

Acciones concretas:
```
• Facturar al entregar, no al final del mes
  → Facturar el día 15 en lugar del 30 reduce el PMC ~15 días
  → En muchas empresas la factura va tarde porque "lo hace el administrativo a fin de mes"

• Descuento por pronto pago
  → 2% de descuento por pago en 10 días en lugar de 60
  → ¿Vale la pena? Coste = 2% del valor / (60-10) días de financiación = ~14% TAE
  → Si tu financiación bancaria cuesta >14% TAE, merece la pena al cliente aceptar el descuento

• Confirming (anticipar el cobro):
  → Tu banco paga al cliente la deuda, tú cobras antes
  → El cliente acepta pagar al banco en el plazo acordado

• Reducir los plazos de pago en contratos nuevos:
  → Négocialos antes de firmar — después es muy difícil
```

**Palanca 2 — Reducir el PRI (menos stock inmovilizado):**

Acciones concretas:
```
• Análisis ABC de inventario:
  A: 20% de referencias = 80% del valor → gestión exhaustiva
  B: 30% de referencias = 15% del valor → gestión estándar
  C: 50% de referencias = 5% del valor → ¿realmente necesitas tener este stock?

• Eliminación de stock obsoleto:
  → El stock que lleva >1 año sin moverse hay que liquidarlo (con descuento) o donarlo
  → No tiene sentido financiarlo indefinidamente

• Pedidos más frecuentes y en menor cantidad:
  → Reduce el stock promedio a costa de mayor frecuencia de pedidos
  → El coste de pedido puede compensarse con el ahorro de financiación
```

**Palanca 3 — Aumentar el PMP (pagar más tarde a proveedores):**

Acciones concretas:
```
• Negociar ampliaciones de plazo con proveedores estratégicos
• Centralizar los pagos a una o dos veces por semana
  → No pagar el día que vence sino en el siguiente ciclo de pagos programado
  → Puede añadir 5-10 días de media
• Confirming inverso: tu banco paga al proveedor antes pero tú pagas al banco más tarde
```

### 📅 El calendario de caja: gestionar la tesorería semana a semana
La hoja de seguimiento semanal que anticipa los problemas de caja con 4-8 semanas de antelación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Circulante, NOF, tesorería, ciclo de conversión efectivo, cash flow, PMC PMP',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'LOPD y RGPD para startups: cumple la normativa de protección de datos sin necesitar un DPO a tiempo completo',
                'description'       => 'Implementa el cumplimiento básico del RGPD en tu startup o PYME sin un departamento legal completo. Con el registro de actividades de tratamiento, las cláusulas de privacidad para tu web y app, la gestión de consentimientos y qué debes hacer si tienes un incidente de datos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en protección de datos con experiencia ayudando a startups y PYME a cumplir el RGPD (Reglamento UE 2016/679) y la LOPDGDD española (Ley Orgánica 3/2018) de forma pragmática y proporcional al tamaño de la empresa.

Contexto de la empresa:
- Tipo de empresa: [SaaS / ecommerce / app / servicios / otro]
- Datos que tratas: [emails de suscriptores / datos de clientes / datos de empleados / datos sensibles (salud, ideología) / otro]
- Número de usuarios/clientes cuyos datos tratas: [<1.000 / 1.000-10.000 / >10.000]
- Estado actual: [nunca nos hemos ocupado / tenemos la política de privacidad de plantilla / ya tenemos algo pero queremos revisarlo]
- País de operación: [España / UE / con usuarios fuera de la UE]

## Cumplimiento RGPD para Startups — [Empresa]

### 📋 Los 5 documentos mínimos que toda empresa necesita

**1. El Registro de Actividades de Tratamiento (RAT)**

Obligatorio para todas las empresas que tratan datos personales.
No tienes que publicarlo, pero debes tenerlo internamente y presentarlo a la AEPD si te lo piden.

**Estructura del RAT (un registro por cada "tratamiento" distinto):**
```
TRATAMIENTO 1: Gestión de clientes y facturación
Responsable: [nombre de tu empresa, CIF, dirección, email de contacto]
Finalidad: gestión de contratos, facturación y relación con clientes
Base legal: ejecución del contrato (art. 6.1.b RGPD)
Categorías de datos: nombre, email, empresa, dirección fiscal, datos de pago
Destinatarios: proveedor de ERP (Holded/Sage/otro), proveedor de email
Transferencias internacionales: [sí/no — si usas Stripe, Mailchimp → sí, a EEUU]
Plazo de conservación: 5 años (obligaciones contables y fiscales) + 4 años (prescripción acciones contractuales)

TRATAMIENTO 2: Marketing y newsletter
Finalidad: envío de comunicaciones comerciales
Base legal: consentimiento (art. 6.1.a RGPD)
[...]
```

**2. La política de privacidad**

Debe estar publicada en tu web y ser accesible antes de que el usuario facilite sus datos.
Obligatoria por el art. 13 del RGPD.

**Contenido mínimo:**
- Quién es el responsable del tratamiento (tu empresa)
- Qué datos recopilas y para qué
- Base legal de cada tratamiento
- Con quién compartes los datos (proveedores, subencargados)
- Cuánto tiempo los conservas
- Derechos del usuario (ARSOLP) y cómo ejercerlos
- Si haces transferencias internacionales y con qué garantías

**3. La política de cookies**

Obligatoria si tu web usa cookies de terceros o cookies de análisis.
La cookie de sesión propia (necesaria para el funcionamiento) no necesita consentimiento.
Sí necesita consentimiento: Google Analytics, Facebook Pixel, Hotjar.

**4. Los textos de consentimiento (checkboxes y formularios)**

Para cada formulario que recopila datos:
```
☐ He leído y acepto la [Política de privacidad] (enlace)
  (en el caso de menores de 14 años, se requiere el consentimiento del tutor legal)

☐ Acepto recibir comunicaciones comerciales de [empresa]
  (checkbox separado — el consentimiento de marketing no puede ser condición para el servicio)
```

**5. Los contratos con proveedores (DPA — Data Processing Agreement)**

Si contratas servicios que tratan datos de tus usuarios en tu nombre (Stripe, Mailchimp, AWS, OpenAI...), necesitas un contrato de encargo de tratamiento.
La mayoría de proveedores grandes ya lo tienen en sus términos o te lo facilitan firmado.

### 🚨 Qué hacer si tienes un incidente de seguridad (brecha de datos)

Si hay una vulneración de datos que afecta a usuarios:
1. Evalúa el riesgo en 72 horas: ¿afecta a datos sensibles? ¿cuántos usuarios? ¿qué tipo de datos?
2. Si el riesgo es moderado o alto: notifica a la AEPD en 72 horas desde que lo conoces
3. Si supone un alto riesgo para los derechos de los afectados: notifica también a los usuarios
4. Documenta todo el incidente en el RAT

**Las sanciones de la AEPD:**
Infracciones leves: hasta €40.000
Infracciones graves: hasta €300.000
Infracciones muy graves: hasta €20M o el 4% del volumen de negocio global anual (el mayor de los dos)

### 📝 Los derechos de los usuarios que debes poder gestionar
Los 6 derechos RGPD (ARSOLP) y el proceso interno para responder a las solicitudes en los plazos legales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'RGPD, LOPD, protección de datos, startup, política privacidad, cumplimiento legal',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión del soporte en periodos de alta demanda: el plan que mantiene la calidad cuando el volumen se dispara',
                'description'       => 'Prepara y gestiona el equipo de soporte durante los picos de demanda (Black Friday, lanzamientos, crisis de producto) sin que la calidad del servicio se desmorone. Con el plan de capacidad, la priorización de tickets en crisis, la comunicación proactiva y la recuperación post-pico.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Operations Manager con experiencia gestionando equipos de soporte durante picos de demanda de 3-10x el volumen habitual en ecommerce, SaaS y plataformas digitales.

Contexto:
- Tipo de pico de demanda: [Black Friday / lanzamiento de producto / incidente técnico / campaña de marketing / temporada alta]
- Volumen habitual: [tickets/día]
- Volumen esperado en el pico: [tickets/día o % de aumento]
- Equipo actual: [N agentes]
- Canales de soporte: [email / chat / teléfono / RRSS]
- Mayor riesgo: [tiempos de respuesta inaceptables / calidad de respuesta cae / agentes quemados / otro]

## Plan de Soporte en Alta Demanda — [Empresa]

### 📊 La planificación de capacidad: cuántos agentes necesitas

**El cálculo base:**
```
Capacidad por agente:
- Chat: 3-5 conversaciones simultáneas
- Email: 20-30 tickets/día con calidad
- Teléfono: 30-50 llamadas/día

Si esperas 500 tickets/día de email (vs. habitual de 100):
Agentes necesarios = 500 / 25 tickets por agente = 20 agentes
Agentes actuales = 5
Déficit = 15 agentes extra
```

**Las fuentes de capacidad adicional:**
1. **Soporte temporal:** agencias de soporte especializado (Influx, Helplama, Support Ninja)
2. **Personal de otras áreas:** CS Manager + agentes de ventas + product managers en el frontline durante el pico más agudo
3. **Automatización:** chatbot para las 5-10 preguntas más frecuentes del pico

### 🎯 La priorización de tickets en periodo de alta demanda

**El sistema de triage en crisis:**

```
PRIORIDAD 1 (respuesta <1h):
- Cliente no puede acceder a su cuenta
- Pago fallido con cargo realizado
- Error que impide completar la compra
- Tweet/review con >1.000 impresiones sobre el problema

PRIORIDAD 2 (respuesta <4h):
- Error técnico que afecta a funcionalidades clave
- Solicitud de reembolso
- Problema en pedido en tránsito

PRIORIDAD 3 (respuesta <24h):
- Preguntas sobre el estado del pedido (si hay página de seguimiento)
- Consultas generales
- Sugerencias de producto

PRIORIDAD 4 (respuesta en 48-72h o respuesta masiva):
- Feedback general
- Preguntas frecuentes cubiertas por el Help Center
```

### 🤖 La automatización que reduce el volumen en el pico

**Los 3 tipos de automatización más rápidos de implementar:**

1. **Respuesta automática con contexto:**
   No el típico "hemos recibido tu email". Una respuesta que ya responde el 30% de los casos:
   "Hemos recibido tu consulta. Si tu pregunta es sobre el estado de tu pedido, puedes consultarlo en tiempo real aquí: [link]. Si es sobre [X], aquí tienes la respuesta: [link]. Si no resuelve tu duda, responderemos en [X horas]."

2. **Macros para los 10 casos más frecuentes del pico:**
   Prepáralas antes del pico — el agente solo selecciona y personaliza.

3. **Bot de primer contacto en chat:**
   4-5 botones con los casos más frecuentes. Solo pasa al agente si el bot no resuelve.
   Implementación rápida con Intercom, Zendesk, Freshchat.

### 📣 La comunicación proactiva que previene tickets

**El principio:** por cada hora que tardas en comunicar un problema, recibes 10 tickets de usuarios que preguntan qué está pasando.

**El timing de la comunicación proactiva:**
```
Minuto 0-15:   Detectas el problema
Minuto 15:     Publicas el primer update en la página de status y en RRSS
               "Somos conscientes de [problema]. Estamos investigando."
Minuto 30-60:  Update de progreso aunque no esté resuelto
               "Hemos identificado la causa. Estamos trabajando en la resolución."
Resolución:    Comunicación de resolución + causa + pasos para evitar recurrencia
```

**La página de estado (status page):**
Si no tienes una, créala antes del próximo pico (Statuspage, BetterUptime, Cachet).
Es la herramienta que más reduce el volumen de tickets en un incidente.

### 🔄 La recuperación post-pico
El proceso de los 5-7 días después del pico para cerrar tickets pendientes, recuperar la satisfacción de los clientes afectados y documentar las lecciones para el próximo evento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Soporte picos demanda, Black Friday, crisis soporte, capacidad equipo, gestión tickets',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Validación de idea de negocio freelance: cómo testear si hay mercado antes de apostar todo',
                'description'       => 'Valida si tu idea de negocio o nuevo servicio freelance tiene demanda real antes de invertir semanas en construirlo. Con el proceso de validación mínima de 2 semanas, las conversaciones con potenciales clientes, el pre-selling y cómo interpretar las señales del mercado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach especializado en freelancers y solopreneurs con experiencia ayudando a profesionales independientes a validar nuevas ideas de servicio antes de invertir tiempo y dinero en un mercado que quizás no existe.

Contexto:
- Idea a validar: [describe el servicio o producto que quieres lanzar]
- Cliente objetivo: [quién pagaría por esto]
- Precio previsto: [€]
- Tu situación: [tengo ingresos actuales y quiero diversificar / voy a lanzar esto como mi negocio principal / quiero añadir un nuevo servicio]
- Tiempo disponible para validar: [2 semanas / 1 mes / otro]

## Validación de Idea — [Tu Servicio]

### 🧠 La trampa del builder: por qué la gente construye antes de validar

El error más frecuente del freelance:
"Tengo una idea → la desarrollo durante 3 meses → la lanzo → nadie compra."

La secuencia correcta:
"Tengo una idea → la valido en 2 semanas → si hay demanda → la construyo."

**Las 3 señales de que "nadie compra":**
1. La gente dice "qué buena idea" pero nadie paga
2. Te dicen "cuando lo tengas listo lo pruebo" pero no pagan por reservarlo
3. Estás hablando con personas que no tienen el problema que resuelves

### 🗺️ El proceso de validación en 4 pasos (2 semanas)

**SEMANA 1 — Definir y buscar al cliente**

**Paso 1 — El cliente que más sufre el problema:**
No el "target" genérico — el cliente específico que tiene el dolor más agudo.
Si vendes "formación en productividad para freelancers", el cliente específico es:
"Freelance de diseño con 3-5 años de experiencia, factura €40-60k/año, siente que trabaja más horas de las que quiere y no sabe cómo escalar sin contratar."

**Paso 2 — Dónde encontrar a ese cliente:**
- LinkedIn (búsqueda por cargo + sector)
- Comunidades de Slack/Discord de tu nicho
- Eventos y conferencias del sector
- Foros y grupos de Facebook específicos
- Tu red de contactos existente

**Objetivo de la semana 1:** 10 conversaciones de descubrimiento con clientes potenciales.

**SEMANA 2 — Las conversaciones de validación**

**La estructura de la conversación de 30 minutos:**
```
5 min: Contexto sobre quién eres y por qué quieres hablar con ellos
       (No les vendas nada todavía — solo di que estás investigando el mercado)

10 min: Las preguntas de descubrimiento:
  "¿Cómo gestionas actualmente [el problema que resuelves]?"
  "¿Cuánto tiempo/dinero te cuesta el problema?"
  "¿Qué has intentado ya para resolverlo?"
  "¿Qué no funciona de lo que has intentado?"
  "¿Cuánto pagarías por una solución que realmente funcionara?"

10 min: Presenta brevemente tu solución propuesta
  "Estoy pensando en crear [X] para [quién] que [resuelve qué].
  ¿Qué piensas?"

5 min: La pregunta clave de validación:
  "Si tuvieras acceso a esto ahora mismo por [precio], ¿lo comprarías?"
  Si dicen SÍ: "¿Puedo reservarte plaza ahora con un pago inicial?"
  Si dicen NO: "¿Qué haría que lo compraras?"
```

### 💰 El pre-selling: la única validación que cuenta

**La verdad incómoda:**
Las personas dicen "sí" en conversaciones porque son educadas. La única señal de validación real es que te den dinero.

**El pre-selling antes de construir:**
"Estoy lanzando [servicio] el [fecha]. Los primeros [N] clientes obtienen [bonus/precio especial]. ¿Te apuntas?"

Si consigues 3-5 personas que pagan por un servicio que no existe todavía → tienes validación.
Si tienes 50 "me parece buenísimo" pero 0 pagos → no tienes validación.

### 📊 Cómo interpretar los resultados de la validación
Las señales claras de "sigue adelante", "pivota" y "abandona esta idea y busca otra".
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Validación de idea, freelance, pre-selling, customer discovery, emprendimiento',
                'vote_score'        => 43,
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
