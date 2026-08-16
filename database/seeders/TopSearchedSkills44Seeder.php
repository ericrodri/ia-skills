<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills44Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Newsletter B2C que la gente abre, lee y comparte cada semana',
                'description'      => 'Sistema completo para diseñar, escribir y optimizar una newsletter B2C de alto engagement: estructura, líneas de asunto, segmentación y métricas clave.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en email marketing B2C con más de 10 años de experiencia construyendo newsletters que superan el 40% de tasa de apertura. Voy a darte toda la información sobre mi newsletter actual o la que quiero crear, y necesito que me ayudes a construir un sistema sostenible que genere apertura, lectura y sharing semana tras semana.

## INFORMACIÓN QUE ME DARÁS (completa cada punto)

**Sobre tu marca y audiencia:**
- Nombre del negocio o proyecto: [tu respuesta]
- Producto o servicio principal: [tu respuesta]
- Perfil del suscriptor ideal (edad, ocupación, dolor principal): [tu respuesta]
- Frecuencia de envío deseada (semanal, bisemanal, etc.): [tu respuesta]
- Métricas actuales si existen (% apertura, % clic, tasa de baja): [tu respuesta]
- Herramienta de email marketing que usas (Mailchimp, Brevo, Kit, etc.): [tu respuesta]

**Sobre el contenido:**
- Tres temas que más interesan a tu audiencia: [tu respuesta]
- Un tema tabú o irrelevante para tu suscriptor: [tu respuesta]
- Tono que quieres proyectar (cercano, experto, inspiracional, directo): [tu respuesta]

---

## TAREA 1 — ARQUITECTURA DE LA NEWSLETTER

Con la información anterior, diseña la estructura fija de cada edición usando el framework **ABCD**:
- **A (Apertura)**: gancho en las primeras 2 líneas del cuerpo que conecte con un dolor o deseo concreto del suscriptor
- **B (Beneficio central)**: la pieza de valor principal (tutorial, historia, análisis, recurso)
- **C (Conexión)**: sección breve que humaniza la marca (historia personal, error cometido, reflexión)
- **D (Dirección)**: CTA único y claro; nunca más de uno por edición

Devuelve la estructura en formato de plantilla que pueda copiar y pegar cada semana.

---

## TAREA 2 — BANCO DE 10 LÍNEAS DE ASUNTO

Genera 10 líneas de asunto para las próximas ediciones usando estas fórmulas probadas:
1. **La pregunta incómoda**: plantea algo que el suscriptor se niega a preguntarse
2. **El número sorprendente**: una estadística contraintuitiva del sector
3. **El error común**: nombra un fallo que comete casi todo el mundo
4. **La promesa de tiempo**: resultado concreto en un tiempo específico
5. **El secreto**: "Lo que nadie te dice sobre X"
6. **La historia**: "Cómo [persona real o tipo de persona] consiguió X sin Y"
7. **La lista rara**: "5 razones por las que X no funciona (y la alternativa)"
8. **El contrario**: "Para de hacer X si quieres Y"
9. **La urgencia real**: contenido con caducidad real, no artificial
10. **El beneficio desnudo**: la promesa directa sin adornos

Para cada línea de asunto, añade también el preheader recomendado (máx. 90 caracteres).

---

## TAREA 3 — SISTEMA DE SEGMENTACIÓN BÁSICA

Propón cómo segmentar la lista en al menos 3 grupos usando comportamiento (aperturas, clics, antigüedad) y explica qué contenido diferente enviarías a cada segmento. Incluye la lógica de automatización que configuraría en la herramienta de email elegida.

---

## TAREA 4 — CALENDARIO EDITORIAL DE 4 SEMANAS

Crea un calendario con:
- Tema principal de cada edición
- Línea de asunto elegida del banco (o nueva)
- Beneficio central de esa edición
- CTA de esa edición
- Fuente de inspiración o recurso de apoyo

---

## TAREA 5 — DASHBOARD DE MÉTRICAS

Define los 5 KPIs que debo revisar cada lunes tras el envío del viernes, con el benchmark de referencia para mi sector y la acción correctiva a tomar si el indicador está por debajo:

| KPI | Benchmark B2C | Mi objetivo | Acción si bajo |
|-----|--------------|-------------|----------------|
| Tasa de apertura | | | |
| Tasa de clic (CTOR) | | | |
| Tasa de baja | | | |
| Tasa de conversión | | | |
| Reenvíos / shares | | | |

---

## TAREA 6 — PRIMERA EDICIÓN COMPLETA

Escribe el borrador completo de la primera edición siguiendo la estructura ABCD. Debe incluir:
- Línea de asunto + preheader
- Cuerpo completo (entre 300 y 600 palabras)
- CTA final con texto del botón y URL placeholder
- Nota de pie personalizable

Mantén el tono que he indicado y adapta cada sección al perfil del suscriptor ideal.

---

## NOTAS FINALES

- Prioriza legibilidad en móvil: párrafos cortos (máx. 3 líneas), sin bloques de texto densos
- Usa el nombre del suscriptor en al menos un punto de la edición
- Evita las palabras que activan filtros de spam: gratis, urgente, oferta limitada, haz clic aquí
- Cada edición debe poder leerse en menos de 4 minutos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y optimizar newsletters B2C de alto engagement con estructura, asuntos y sistema de métricas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de rendimiento en React y Vue: profiling y 70% más de velocidad',
                'description'      => 'Guía práctica de profiling y optimización de renders en React y Vue con técnicas de lazy loading, memoización y análisis de bundles que hacen las apps notablemente más rápidas.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero frontend senior especializado en rendimiento de aplicaciones React y Vue. Tu misión es ayudarme a diagnosticar cuellos de botella en mi aplicación y aplicar las optimizaciones que realmente mueven la aguja. Necesito un plan de acción concreto, no teoría general.

## CONTEXTO DE MI APLICACIÓN

Completa antes de ejecutar el prompt:
- Framework: [React / Vue 3 / Vue 2]
- Versión: [p. ej. React 18.2]
- Gestión de estado: [Redux / Zustand / Pinia / Vuex / Context API / otro]
- Bundler: [Vite / Webpack / Parcel]
- Síntoma principal de lentitud: [p. ej. "el listado de 500 productos tarda 2 s en renderizar"]
- Entorno de producción: [SPA pura / SSR con Next/Nuxt / SSG]
- ¿Tienes métricas actuales de Core Web Vitals?: [Sí/No — pega los valores si los tienes]

---

## FASE 1 — DIAGNÓSTICO: DÓNDE ESTÁ EL PROBLEMA

### 1.1 Profiling en React DevTools / Vue DevTools

Explícame paso a paso cómo usar el Profiler para:
1. Identificar los componentes que se re-renderizan innecesariamente
2. Leer el flamegraph y entender qué me está diciendo
3. Detectar renders en cascada provocados por cambios de estado en componentes padre
4. Marcar interacciones para medir el tiempo de respuesta percibido por el usuario

### 1.2 Análisis del bundle con source-map-explorer o rollup-plugin-visualizer

Dame el comando exacto para generar el mapa del bundle y cómo interpretar los resultados para identificar:
- Dependencias duplicadas
- Chunks demasiado grandes (>200 KB)
- Código dead que se incluye igualmente
- Librerías que podrían sustituirse por alternativas más ligeras

### 1.3 Medición con Lighthouse y Web Vitals

Script para medir LCP, FID/INP, CLS y TTFB desde la terminal antes y después de cada optimización, para poder comparar con números reales.

---

## FASE 2 — OPTIMIZACIÓN DE RENDERS

### 2.1 Estrategia de memoización

Para React:
- Cuándo usar `React.memo` y cuándo es contraproducente
- Cuándo usar `useMemo` vs `useCallback` y el coste oculto de cada uno
- Ejemplo con código real de un componente de lista que pasa de 120 ms a 8 ms

Para Vue 3:
- `computed` vs `watchEffect` vs `watch`: regla de decisión
- `v-once`, `v-memo` y cuándo marcan la diferencia
- Ejemplo equivalente con `defineComponent` + `shallowRef`

### 2.2 Virtualización de listas largas

Dame el código de implementación completo usando:
- `@tanstack/react-virtual` (React)
- `vue-virtual-scroller` (Vue)

Incluye el caso de listas con filas de altura variable y cómo evitar el "flash" al hacer scroll rápido.

### 2.3 Estado global y re-renders

Explica cómo estructurar el store para que un cambio de estado solo afecte al árbol de componentes mínimo necesario. Incluye el patrón de "selectors atómicos" en Zustand/Pinia.

---

## FASE 3 — LAZY LOADING Y CODE SPLITTING

### 3.1 Code splitting por ruta

Código de configuración del router para que cada ruta cargue solo su chunk, con prefetch inteligente basado en visibilidad del enlace.

### 3.2 Lazy loading de componentes pesados

Patrón con Suspense (React) / defineAsyncComponent + Suspense (Vue) para componentes de más de 50 KB, incluyendo skeleton de carga.

### 3.3 Optimización de imágenes y assets

Script de automatización para:
- Convertir imágenes a WebP/AVIF en el pipeline de build
- Generar srcset automático para responsive images
- Lazy loading nativo + Intersection Observer como fallback

---

## FASE 4 — CHECKLIST DE PRODUCCIÓN

Genera una tabla de verificación de 20 puntos que cubra renders, bundle, red, caché y accesibilidad, con la herramienta de verificación y el impacto esperado de cada punto (Alto / Medio / Bajo).

---

## ENTREGABLE FINAL

Con todo lo anterior, crea un plan de sprint de 2 semanas con tareas priorizadas por impacto/esfuerzo para llevar mi aplicación de su estado actual a los siguientes objetivos:
- LCP < 2.5 s
- INP < 200 ms
- Bundle principal < 150 KB (gzip)
- 0 re-renders innecesarios en el flujo crítico
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diagnosticar y optimizar el rendimiento de aplicaciones React o Vue con profiling, memoización y lazy loading',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Wireframing y prototipado rápido: de idea a concepto testeable en 2 horas',
                'description'      => 'Proceso estructurado para pasar de una idea vaga a un prototipo testeable en Figma o papel en dos horas, con técnicas de sketching, flujos de usuario y validación rápida.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador UX senior con experiencia en design sprints y metodologías de ideación rápida. Necesito tu ayuda para transformar una idea de producto o funcionalidad en un prototipo testeable en el menor tiempo posible, sin saltar pasos que después cuesten caros.

## MI SITUACIÓN

- Idea o funcionalidad a prototipar: [describe tu idea en 2-3 frases]
- Usuario objetivo: [quién va a usar esto y cuál es su objetivo principal]
- Plataforma: [web de escritorio / móvil / tablet / app nativa]
- Herramienta disponible: [Figma / papel y bolígrafo / Balsamiq / otro]
- Tiempo disponible: [60 min / 90 min / 2 horas]
- ¿Existe algún producto de referencia que admires?: [URL o nombre]
- Restricciones conocidas: [limitaciones técnicas, de marca, de presupuesto]

---

## BLOQUE 1 — CLARIFICACIÓN DE PROBLEMA (15 minutos)

Antes de dibujar una sola línea, respóndeme estas preguntas y dame las herramientas para responderlas yo mismo si no tengo acceso a usuarios:

1. **¿Qué trabajo está contratando el usuario para hacer?** (Jobs To Be Done framework) — define el job statement en formato "Cuando [situación], quiero [motivación], para que [resultado esperado]"
2. **¿Cuál es el momento más crítico de la experiencia?** — identifica el "momento de la verdad" que, si falla, el usuario abandona
3. **¿Cuál es el flujo mínimo que necesito prototipar para validar la hipótesis principal?** — 3 a 5 pantallas máximo
4. **¿Qué suposición es la más arriesgada de mi idea?** — la que, si es falsa, invalida todo lo demás

---

## BLOQUE 2 — MAPA DE FLUJO DE USUARIO (20 minutos)

Dibuja en formato texto el flujo de usuario principal con el patrón de 3 columnas:

```
[PANTALLA / PASO] → [ACCIÓN DEL USUARIO] → [RESPUESTA DEL SISTEMA]
```

Incluye:
- El happy path (flujo sin errores)
- Al menos 2 estados de error y cómo se resuelven
- Los puntos de decisión donde el usuario elige entre opciones
- Las microtransiciones que mejoran la percepción de velocidad

---

## BLOQUE 3 — SKETCHING EN 3 RONDAS (30 minutos)

### Ronda 1 — Crazy 8s (8 minutos)
Genera 8 versiones distintas del layout de la pantalla más crítica. Cada versión debe explorar una jerarquía visual diferente. Descríbelas en texto si no puedo verlas, indicando:
- Posición del elemento principal de acción
- Dónde está la información de contexto
- Cómo se navega hacia adelante y hacia atrás

### Ronda 2 — Selección y fusión (7 minutos)
Selecciona los 2 mejores conceptos de la ronda 1. Explica por qué, usando los criterios:
- Claridad del objetivo principal
- Número de clics para completar la tarea
- Reconocibilidad de los patrones UI usados

### Ronda 3 — Refinamiento (15 minutos)
Desarrolla el concepto ganador con anotaciones de comportamiento:
- Qué pasa al hacer tap/clic en cada elemento interactivo
- Estados hover, focus y disabled de los controles principales
- Comportamiento responsive si aplica

---

## BLOQUE 4 — PROTOTIPO EN FIGMA (componentes mínimos)

Dame la lista exacta de frames y componentes que necesito crear en Figma para tener un prototipo navegable:

**Frames necesarios:**
1. [nombre del frame] — propósito — contenido mínimo
2. ...

**Componentes que debo crear como Auto Layout:**
- [componente] — variantes necesarias — propiedades expuestas

**Conexiones de prototipado:**
- Frame X → Frame Y — trigger — animación recomendada

**Lo que NO hace falta para esta primera ronda de tests:**
- Lista de lo que puedo dejar como placeholder o caja gris

---

## BLOQUE 5 — GUIÓN DE TEST RÁPIDO (15 minutos)

Crea un guión de test de usuario con 5 tareas que puedo ejecutar en 20 minutos con una sola persona usando el prototipo de Figma. Para cada tarea:
- Escenario de contexto (frase de introducción)
- Tarea concreta que doy al usuario sin decirle cómo hacerla
- Lo que observo (¿dónde duda? ¿qué toca primero?)
- Métrica de éxito/fracaso

---

## ENTREGABLE: CHECKLIST PREVIO A LA SESIÓN DE TEST

Genera una checklist de 12 puntos que verifique que mi prototipo está listo para ser testado sin errores técnicos ni sesgos de facilitación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Pasar de una idea a un prototipo testeable en Figma o papel en 2 horas con un proceso estructurado',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Cross-sell y upsell sin presión: vende más a clientes existentes de forma natural',
                'description'      => 'Sistema de cross-selling y upselling basado en valor percibido y momentos de oportunidad para aumentar el ticket medio sin que el cliente se sienta presionado ni manipulado.',
                'prompt_content'   => <<<'PROMPT'
Eres un director comercial con amplia experiencia en ventas consultivas B2B y B2C. Tu enfoque es el de un asesor de confianza, no el de un vendedor agresivo. Necesito que me ayudes a construir un sistema de cross-sell y upsell que aumente el ticket medio de mis clientes existentes sin dañar la relación ni generar rechazo.

## MI CONTEXTO COMERCIAL

- Sector y tipo de producto/servicio: [tu respuesta]
- Ticket medio actual por cliente: [tu respuesta]
- Frecuencia de compra o renovación: [tu respuesta]
- ¿Qué productos o servicios complementarios tengo disponibles?: [tu respuesta]
- Canal de venta principal: [presencial / telefónico / email / ecommerce / SaaS]
- Perfil del cliente ideal: [descripción breve]
- ¿Cuál es el momento en que más contacto tengo con el cliente? (onboarding, renovación, soporte, etc.): [tu respuesta]

---

## MÓDULO 1 — MAPA DE OPORTUNIDADES

### 1.1 Matriz de cross-sell y upsell

Construye para mí una matriz con:
- **Eje X**: etapa del ciclo de vida del cliente (nuevo, activo, en riesgo de churn, fidelizado)
- **Eje Y**: categorías de productos o servicios que tengo
- **Celdas**: nivel de oportunidad (Alta / Media / Baja) y el argumento de valor que lo justifica

### 1.2 Momentos de oportunidad dorada

Identifica los 5 momentos del ciclo del cliente en los que la propuesta de valor adicional es bienvenida en lugar de intrusiva. Para cada momento, explica:
- Qué está experimentando el cliente en ese instante
- Qué necesidad latente tiene que aún no ha expresado
- Qué producto o servicio resuelve esa necesidad
- Cómo introduzco la conversación sin sonar a "vendedor"

---

## MÓDULO 2 — GUIONES DE CONVERSACIÓN

### 2.1 El método "Observación → Pregunta → Propuesta"

Para cada momento de oportunidad identificado, escribe el guión en 3 pasos:
1. **Observación**: lo que he notado sobre el uso o situación del cliente (dato real, no inventado)
2. **Pregunta de apertura**: pregunta abierta que hace que el cliente articule su necesidad sin que yo la haya nombrado
3. **Propuesta natural**: cómo presento la solución adicional como consecuencia lógica de lo que el cliente acaba de decir

### 2.2 Respuestas a las 5 objeciones más comunes

Escribe el tratamiento para:
1. "Ya tengo suficiente con lo que tengo"
2. "Ahora mismo no es el momento"
3. "Es caro para lo que necesito"
4. "Déjame pensarlo" (cuando es una excusa de salida)
5. "No lo tenía en el presupuesto"

Para cada objeción: valida → pregunta → reencuadra → cierra sin presionar.

---

## MÓDULO 3 — SISTEMA DE DETECCIÓN AUTOMÁTICA

### 3.1 Señales de compra para cross-sell

Lista 8 comportamientos o eventos observables (en CRM, uso del producto, comunicaciones) que indican que un cliente está listo para una propuesta adicional. Explica cómo detectar cada señal sin necesidad de herramientas avanzadas de BI.

### 3.2 Scoring de oportunidad manual

Crea una tabla de scoring de 10 puntos que cualquier comercial pueda rellenar en 2 minutos para priorizar a qué clientes llamar esta semana con una propuesta de cross-sell o upsell.

---

## MÓDULO 4 — CAMPAÑAS DE ACTIVACIÓN

### 4.1 Secuencia de email para upsell (3 correos)

Escribe la secuencia completa:
- **Email 1** (día 0): genera curiosidad sin mencionar el producto; enfócate en el resultado que el cliente podría conseguir
- **Email 2** (día 3): cuenta una historia de un cliente similar que ya lo usa; incluye resultado medible
- **Email 3** (día 7): propuesta directa con oferta de consulta gratuita o demo, sin descuento

### 4.2 Script para llamada de revisión de cuenta

Guión de una llamada de 15 minutos donde el objetivo declarado es "ver cómo va todo" y el objetivo real es abrir la conversación de upsell de forma natural. Incluye preguntas de revisión, indicadores de éxito del cliente y el momento exacto para introducir la propuesta.

---

## MÓDULO 5 — MÉTRICAS Y SEGUIMIENTO

Define el cuadro de mando semanal para el equipo comercial con:
- KPIs de cross-sell y upsell (ratio de penetración, ticket medio, tasa de conversión de propuestas)
- Frecuencia de revisión recomendada
- Umbral de alerta y acción correctiva
- Cómo incentiva al equipo sin crear presión que lleve a ventas forzadas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un sistema de cross-sell y upsell con guiones, detección de señales y secuencias de activación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Frameworks de priorización: RICE, MoSCoW e ICE para decidir qué construir',
                'description'      => 'Guía práctica para aplicar los frameworks de priorización más efectivos según el contexto, con plantillas de scoring, ejemplos reales y cómo comunicar las decisiones al equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un Product Manager senior con experiencia en startups de crecimiento rápido y empresas de producto establecidas. Necesito que me ayudes a aplicar los frameworks de priorización más adecuados para mi situación, de forma que las decisiones de qué construir estén basadas en criterios explícitos y sean fáciles de comunicar y defender.

## MI CONTEXTO DE PRODUCTO

- Fase del producto: [idea / early adopters / crecimiento / madurez / pivote]
- Tamaño del equipo de desarrollo: [número de personas]
- Frecuencia de releases: [continua / semanal / quincenal / mensual]
- Principal métrica de negocio que debo mover: [ej: retención D30, conversión de trial, NPS]
- Número de ítems en el backlog actual: [aproximado]
- ¿Tienes stakeholders externos que presionan con sus propias prioridades? [Sí/No — describe brevemente]
- Herramienta de gestión de producto: [Jira / Linear / Notion / Productboard / otro]

---

## PARTE 1 — DIAGNÓSTICO: ¿QUÉ FRAMEWORK NECESITAS AHORA?

Analiza mi contexto y recomiéndame el framework principal y uno de apoyo según esta lógica:

| Situación | Framework recomendado | Por qué |
|-----------|----------------------|---------|
| Muchas ideas, poca claridad estratégica | MoSCoW + revisión de OKRs | ... |
| Necesito comparar ítems con impacto cuantificable | RICE | ... |
| Backlog grande, equipo pequeño, velocidad crítica | ICE | ... |
| Múltiples stakeholders con agendas distintas | Weighted scoring | ... |
| Decisión sobre si pivotar una funcionalidad existente | Kano Model | ... |

Para mi caso específico, explica por qué el framework elegido encaja con mi fase de producto y mis restricciones de equipo.

---

## PARTE 2 — GUÍA DE APLICACIÓN PASO A PASO

### 2.1 RICE (Reach · Impact · Confidence · Effort)

**Definición operativa de cada variable para MI producto:**
- Reach: cómo lo mido (usuarios activos, sesiones, segmento específico)
- Impact: escala de 0.25 a 3 con descripción de qué significa cada valor en mi contexto
- Confidence: cómo asigno el % basándome en evidencia disponible (datos / investigación / intuición)
- Effort: en person-weeks, con regla de redondeo al 0.5 más cercano

**Plantilla de scoring:**
```
Feature: [nombre]
Reach:      ___ usuarios/período
Impact:     ___ (0.25 / 0.5 / 1 / 2 / 3)
Confidence: ___%
Effort:     ___ person-weeks
RICE Score: (Reach × Impact × Confidence) / Effort = ___
```

**Ejemplo resuelto**: aplica RICE a 5 features hipotéticas de mi tipo de producto, con números realistas y la decisión de priorización resultante.

**Trampas comunes del RICE**:
- Cómo evitar el "Reach inflado" cuando se mide mal el alcance real
- Por qué Confidence del 100% es una señal de alerta
- Cuándo un RICE score alto puede llevar a la decisión equivocada

---

### 2.2 MoSCoW

**Definición de categorías adaptada a mi contexto:**
- **Must have**: criterio concreto para este sprint/trimestre (no "es importante")
- **Should have**: cómo distinguirlo del Must sin que todo se vuelva Must
- **Could have**: cómo evitar que el Could inflado mate la velocidad
- **Won't have (this time)**: cómo comunicar el Won't sin que los stakeholders pierdan la fe

**Regla del 60/20/20**: por qué el Must no puede superar el 60% de la capacidad y cómo hacer cumplir esta regla con el equipo.

**Plantilla de sesión de priorización con stakeholders** (agenda de 90 minutos, materiales necesarios, roles y reglas de votación).

---

### 2.3 ICE (Impact · Confidence · Ease)

**Cuándo usar ICE en lugar de RICE**: las 3 condiciones que hacen que ICE sea superior.

**Tabla de scoring rápido** (5 min por ítem):

| Feature | Impact (1-10) | Confidence (1-10) | Ease (1-10) | ICE Score | Ranking |
|---------|--------------|-------------------|-------------|-----------|---------|

**Cómo usar ICE en sesiones de equipo** sin que se convierta en una guerra de opiniones: técnica de votación silenciosa y calibración previa.

---

## PARTE 3 — COMUNICACIÓN DE DECISIONES

### 3.1 Plantilla de "Decision Brief" (1 página)

Estructura de documento para comunicar cualquier decisión de priorización a stakeholders:
- Contexto y objetivo
- Ítems evaluados y scores
- Decisión tomada
- Lo que NO se priorizó y por qué
- Próxima revisión

### 3.2 Cómo manejar el "¿por qué mi feature no está en el sprint?"

Script para la conversación difícil con el stakeholder cuya iniciativa quedó fuera, usando los datos del framework como ancla objetiva.

---

## PARTE 4 — REVISIÓN CONTINUA

Define el cadencio de revisión del backlog (cuándo, quién, qué criterios cambian) y cómo integrar los frameworks en el ritmo de trabajo semanal sin que sean un trámite burocrático.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar RICE, MoSCoW e ICE para priorizar el backlog y comunicar decisiones de producto con criterios explícitos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación interna efectiva: equipo informado y alineado sin reuniones infinitas',
                'description'      => 'Sistema de comunicación interna que mantiene al equipo alineado y motivado usando los canales y rituales correctos, sin sobrecarga de reuniones ni ruido de Slack.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en people operations y comunicación organizacional con experiencia en empresas de 10 a 500 personas. Necesito que me ayudes a diseñar o mejorar el sistema de comunicación interna de mi organización para que la información fluya de forma eficiente, el equipo se sienta alineado y los managers no pasen el día en reuniones.

## MI SITUACIÓN ACTUAL

- Tamaño del equipo: [número de personas]
- Estructura: [totalmente presencial / híbrido / totalmente remoto]
- Número de equipos o departamentos: [número]
- Herramientas actuales de comunicación: [Slack / Teams / email / Notion / otro]
- Principal queja del equipo sobre la comunicación actual: [ej: "nos enteramos de las cosas tarde", "demasiadas reuniones", "Slack es un caos"]
- ¿Hay diferentes zonas horarias en el equipo?: [Sí/No — cuáles]
- Cultura de empresa: [muy formal / seminformal / startup / corporativa]

---

## MÓDULO 1 — AUDITORÍA DE COMUNICACIÓN ACTUAL

Ayúdame a diagnosticar mis puntos de quiebre con este cuestionario estructurado. Para cada área, dame la pregunta que debo hacerle al equipo y el indicador que me dice si hay problema:

1. **Fluidez vertical** (dirección → equipo): ¿la estrategia llega a todos de forma comprensible?
2. **Fluidez horizontal** (entre equipos): ¿los proyectos transversales tienen visibilidad suficiente?
3. **Carga de reuniones**: ¿cuántas horas semanales pierde cada persona en reuniones que podría ser asíncrono?
4. **Ruido en canales digitales**: ¿las personas encuentran lo que buscan en menos de 2 minutos?
5. **Psicología de seguridad**: ¿el equipo comparte malas noticias a tiempo o las oculta?

---

## MÓDULO 2 — ARQUITECTURA DE COMUNICACIÓN

### 2.1 La matriz de canales

Diseña la arquitectura de canales de comunicación para mi empresa usando esta estructura:

| Tipo de mensaje | Canal correcto | Tiempo de respuesta esperado | Quién puede enviar |
|-----------------|---------------|------------------------------|--------------------|
| Urgente (<1h) | | | |
| Importante pero no urgente | | | |
| Informativo general | | | |
| Documentación y referencia | | | |
| Cultura y social | | | |
| Feedback y mejora | | | |

### 2.2 Reglas de uso de Slack / Teams

Redacta las 10 normas de uso del canal de mensajería que van al handbook de empresa. Deben ser claras, positivas (no prohibiciones) y con ejemplos de comportamiento correcto e incorrecto.

### 2.3 Política de "no-meeting days"

Diseña la política de días sin reuniones para mi equipo, incluyendo:
- Qué días y para qué roles
- Qué tipo de reunión está siempre exenta (emergencias, 1:1, etc.)
- Cómo comunicar la política sin que parezca una restricción
- Cómo medir si está funcionando

---

## MÓDULO 3 — RITUALES DE COMUNICACIÓN

### 3.1 El All-Hands mensual eficiente

Agenda tipo de 45 minutos que mantiene al equipo informado, conectado y motivado:
- Minuto a minuto del all-hands
- Qué se dice vs. qué se envía por escrito antes
- Cómo gestionar preguntas sin que se vayan por las ramas
- Formato de seguimiento post-evento

### 3.2 El Weekly Update asíncrono

Plantilla del mensaje semanal del CEO/director al equipo que puede escribirse en 15 minutos y leerse en 3:
```
[Semana del DD/MM al DD/MM]

✅ LO QUE CONSEGUIMOS ESTA SEMANA:
[2-3 logros concretos con impacto en números]

🎯 EN QUÉ NOS ENFOCAMOS LA PRÓXIMA SEMANA:
[2-3 prioridades, no más]

⚠️ ALGO EN LO QUE NECESITO TU OPINIÓN:
[1 pregunta concreta a responder antes del viernes]

📣 RECONOCIMIENTO DE LA SEMANA:
[nombre + comportamiento específico + impacto]
```

### 3.3 El 1:1 de manager efectivo

Estructura de la reunión individual de 30 minutos que cubre bienestar, progreso y alineación sin convertirse en una sesión de seguimiento de tareas. Incluye las 5 preguntas que ningún manager debería dejar de hacer cada mes.

---

## MÓDULO 4 — GESTIÓN DE LA INFORMACIÓN

### 4.1 Sistema de documentación asíncrona

Define la estructura del wiki interno (en Notion, Confluence o similar) con las categorías, quién es owner de cada sección y el proceso para mantenerla actualizada sin que sea un cementerio de documentos obsoletos.

### 4.2 Protocolo de comunicación de malas noticias

Guía para que los managers comuniquen decisiones difíciles (despidos, cambios de estrategia, proyectos cancelados) de forma honesta, clara y sin generar ansiedad innecesaria.

---

## ENTREGABLE: PLAN DE IMPLEMENTACIÓN 30-60-90

- **30 días**: cambios de bajo coste y alto impacto que puedo implementar mañana
- **60 días**: nuevos rituales y canales que requieren formación del equipo
- **90 días**: revisión de resultados y ajuste basado en métricas de comunicación
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema de comunicación interna que mantiene al equipo alineado sin reuniones innecesarias ni ruido digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Control de costes operativos: reducir el gasto un 15-20% sin dañar el equipo ni la operación',
                'description'      => 'Metodología práctica para auditar, clasificar y reducir costes operativos de forma sostenible, con herramientas de análisis, criterios de decisión y plan de implementación.',
                'prompt_content'   => <<<'PROMPT'
Eres un CFO con experiencia en procesos de optimización de costes en empresas de tamaño medio. Tu enfoque es quirúrgico: cortar lo que sobra sin tocar lo que genera valor. Necesito que me ayudes a reducir los costes operativos de mi empresa un 15-20% en los próximos 90 días sin impactar negativamente en la operación ni en el equipo.

## MI CONTEXTO FINANCIERO

- Sector y modelo de negocio: [tu respuesta]
- Facturación anual aproximada: [rango, p. ej. 500K-2M€]
- Número de empleados: [número]
- Las 3 partidas de gasto más grandes (excluyendo nóminas si son intocables): [tu respuesta]
- ¿Tienes P&L mensual disponible?: [Sí/No]
- Margen EBITDA actual aproximado: [porcentaje]
- ¿Hay estacionalidad en el negocio?: [Sí/No — cuándo]
- Restricción principal: [p. ej. "no puedo tocar headcount", "tenemos contratos firmados hasta X fecha"]

---

## FASE 1 — AUDITORÍA DE COSTES (semana 1)

### 1.1 Taxonomía de costes por naturaleza estratégica

Ayúdame a clasificar cada partida de gasto en una de estas cuatro categorías:

| Categoría | Definición | Acción por defecto |
|-----------|-----------|-------------------|
| **Costes de crecimiento** | Generan ingresos directos o capacidad futura | Proteger o invertir más |
| **Costes de operación** | Necesarios para entregar el producto/servicio | Optimizar eficiencia |
| **Costes de mantenimiento** | Mantienen el negocio en marcha pero no crecen | Revisar frecuencia/nivel |
| **Costes zombi** | Se pagan pero nadie sabe exactamente por qué | Eliminar o congelar de inmediato |

Dame las preguntas exactas para clasificar cualquier partida en menos de 2 minutos.

### 1.2 Detección de costes zombi

Lista las 15 categorías más frecuentes de costes zombi en empresas de mi tamaño y sector, con el método de detección (qué buscar en el extracto bancario o en la contabilidad) y el ahorro potencial típico.

### 1.3 Benchmark de costes por categoría

Para las categorías más relevantes en mi sector, indícame:
- Qué porcentaje de la facturación debería representar ese coste
- La señal de alerta cuando está por encima del benchmark
- La pregunta que debo hacer al proveedor o al responsable interno antes de actuar

---

## FASE 2 — ANÁLISIS DE PALANCAS (semana 1-2)

### 2.1 Las 7 palancas de reducción de costes

Para cada palanca, explica el mecanismo, el potencial de ahorro típico, el riesgo y el tiempo de implementación:

1. Renegociación de contratos con proveedores existentes
2. Consolidación de proveedores (de 5 a 2 en una categoría)
3. Eliminación de suscripciones SaaS infrautilizadas
4. Optimización del consumo energético y de infraestructura
5. Revisión del modelo de trabajo (teletrabajo, espacio de oficina)
6. Internalización vs externalización de procesos clave
7. Automatización de tareas manuales repetitivas

### 2.2 Matriz de impacto vs. dificultad

Genera una tabla donde pueda posicionar cada iniciativa de ahorro según:
- Ahorro anual estimado (€)
- Tiempo de implementación (semanas)
- Esfuerzo interno requerido (persona/días)
- Riesgo operacional (1-5)
- Prioridad resultante

---

## FASE 3 — NEGOCIACIÓN CON PROVEEDORES

### 3.1 Preparación de la negociación

Para cada categoría de proveedor (software, telecomunicaciones, servicios profesionales, logística), dame:
- Los argumentos de negociación más efectivos
- La alternativa de reserva (BATNA) que debo tener preparada
- Las concesiones que puedo ofrecer a cambio de precio (volumen, pago anticipado, referencia)
- El momento del año más favorable para renegociar

### 3.2 Script de negociación por email

Escribe el email de apertura de negociación con un proveedor estratégico que quiero mantener pero con un 20% de descuento. Debe ser directo, sin excusas falsas, apelando a la relación y al volumen futuro.

---

## FASE 4 — IMPLEMENTACIÓN Y SEGUIMIENTO

### 4.1 Plan de implementación 30-60-90

- **30 días**: acciones de impacto inmediato (cancelaciones, congelaciones, quick wins)
- **60 días**: renegociaciones activas y cambios de proveedor en marcha
- **90 días**: optimizaciones estructurales y automatizaciones implementadas

### 4.2 Dashboard de seguimiento de ahorro

Plantilla del tracking semanal que muestra:
- Ahorro comprometido vs. ahorro realizado
- Iniciativas en curso con fecha de cierre estimada
- Ahorro acumulado en el trimestre
- Proyección de EBITDA con y sin el plan de costes

### 4.3 Cómo comunicar el plan al equipo

Guía para comunicar la reducción de costes internamente sin generar miedo, pérdida de confianza ni especulaciones sobre despidos. Incluye el mensaje del CEO/director, las preguntas frecuentes y las respuestas honestas a cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Auditar y reducir costes operativos un 15-20% en 90 días con metodología de clasificación, negociación y seguimiento',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos laborales en España: modalidades, cláusulas clave y errores costosos',
                'description'      => 'Guía práctica sobre las modalidades de contrato laboral en España, las cláusulas que protegen a la empresa y al trabajador, y los errores más frecuentes que terminan en sanciones o litigios.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado laboralista especializado en derecho del trabajo español con experiencia en asesoramiento a pymes y startups. Necesito una guía práctica y actualizada sobre contratos laborales en España que me ayude a tomar decisiones correctas, evitar sanciones de la Inspección de Trabajo y proteger tanto a mi empresa como a mis trabajadores.

AVISO IMPORTANTE: Este prompt genera información orientativa de carácter educativo. Para decisiones contractuales concretas, consulta siempre con un abogado laboralista o asesor de RRHH colegiado.

## MI SITUACIÓN

- Tipo de empresa: [autónomo con trabajadores / SL / SA / cooperativa / otro]
- Sector de actividad y convenio colectivo aplicable (si lo sabes): [tu respuesta]
- Tipo de contratación que quiero hacer: [indefinido / temporal / prácticas / formación / a tiempo parcial / otro]
- Perfil del puesto: [descripción breve]
- Salario previsto y jornada: [tu respuesta]
- ¿Ha habido contrataciones previas en la empresa?: [Sí/No]

---

## BLOQUE 1 — MAPA DE MODALIDADES CONTRACTUALES

### 1.1 Tabla comparativa de contratos vigentes (post-reforma 2022)

| Modalidad | Duración | Cuándo usarlo | Bonificaciones SS | Restricciones principales |
|-----------|---------|--------------|-------------------|--------------------------|
| Indefinido ordinario | Indefinida | | | |
| Indefinido a tiempo parcial | Indefinida | | | |
| Fijo discontinuo | Indefinida con interrupciones | | | |
| Temporal por causa productiva | Máx. 6 meses | | | |
| Contrato de sustitución | Duración de la causa | | | |
| Formación en alternancia | 3 meses a 2 años | | | |
| Prácticas profesionales | 3 meses a 1 año | | | |

Para cada modalidad, indica si está bonificada y la cuantía aproximada actual.

### 1.2 El fin de la temporalidad fraudulenta

Explica los cambios de la reforma laboral de 2022 respecto a:
- Qué convierte automáticamente un contrato temporal en indefinido
- El límite del 25% de temporalidad en plantillas de más de 5 personas
- Las consecuencias de la concatenación de contratos temporales ilegales (indemnización, sanción administrativa, carga de prueba invertida)

---

## BLOQUE 2 — ANATOMÍA DEL CONTRATO

### 2.1 Cláusulas obligatorias

Lista todas las menciones que debe contener cualquier contrato laboral según el ET y el RD 1659/1998 (adaptado a la transposición de la Directiva 2019/1152). Indica cuáles generan nulidad si faltan y cuáles solo son sancionables administrativamente.

### 2.2 Cláusulas protectoras para la empresa (y sus límites legales)

Para cada cláusula, explica su validez legal, cómo redactarla correctamente y qué pasa si se excede el límite:

1. **Período de prueba**: duraciones máximas por categoría y el error de firmarlo en documentos separados
2. **Pacto de no competencia post-contractual**: requisitos de validez (compensación económica adecuada, límite temporal, actividad concreta)
3. **Pacto de permanencia**: cuándo es válido, cuánto tiempo y qué ocurre si el trabajador se va antes
4. **Cláusula de confidencialidad**: qué puede incluir y qué no (el acceso a datos personales tiene sus propias reglas LOPD/RGPD)
5. **Polivalencia funcional**: cómo evitar la movilidad funcional unilateral ilegal
6. **Geolocalización y control digital**: qué debes informar al trabajador y cuándo y cómo puedes monitorizarlo

### 2.3 Cláusulas que NO puedes incluir aunque el trabajador las firme

Explica por qué son nulas aunque haya consentimiento:
- Renuncias anticipadas a derechos laborales
- Salarios por debajo del convenio colectivo
- Jornadas que excedan los límites legales
- Plazos de preaviso superiores a los legales para el trabajador

---

## BLOQUE 3 — ERRORES COSTOSOS MÁS FRECUENTES

### 3.1 Los 10 errores que llevan a sanción o litigio

Para cada error: descripción del error, consecuencia legal concreta (multa, indemnización, declaración de indefinición), cómo evitarlo y jurisprudencia de referencia si existe.

1. Contrato temporal sin causa real o causa vaga
2. No dar de alta en Seguridad Social antes del inicio de la actividad
3. Período de prueba superior al convenio
4. No registrar la jornada diaria correctamente
5. Comunicar el despido por WhatsApp o email sin carta formal
6. No abonar los complementos del convenio colectivo aplicable
7. Contratación de becarios sin contrato de prácticas
8. Subcontratación sin verificar que el subcontratista está al día con SS
9. No actualizar el contrato ante modificaciones sustanciales de condiciones
10. Clasificación profesional incorrecta (trabajador en grupo inferior al que corresponde)

### 3.2 Cómo preparar un expediente ante una inspección

Lista de documentación que debes tener siempre disponible para una visita de la Inspección de Trabajo, con el formato correcto y el plazo máximo de conservación.

---

## BLOQUE 4 — DESPIDOS: LO QUE NECESITAS SABER ANTES DE CONTRATAR

Explica los tipos de despido, su indemnización, el procedimiento correcto y cuándo un despido declarado improcedente se convierte en nulo (y sus consecuencias radicalmente distintas). Incluye la tabla de indemnizaciones por tipo y antigüedad.

---

## ENTREGABLE: CHECKLIST PRE-FIRMA

Genera una checklist de 15 puntos que debo revisar antes de firmar cualquier contrato laboral nuevo, con la referencia legal de cada punto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Entender las modalidades, cláusulas y errores más costosos en contratación laboral española para tomar decisiones correctas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Onboarding de clientes: el proceso de activación de los primeros 30 días que reduce el churn',
                'description'      => 'Diseño del proceso de onboarding de los primeros 30 días que activa al cliente, le da su primer valor rápido y reduce el churn temprano mediante automatización y touchpoints humanos clave.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en Customer Success con experiencia en SaaS B2B y B2C. Tu especialidad es diseñar procesos de onboarding que llevan al cliente a su "momento aha" en el menor tiempo posible y aseguran que renueve. Necesito que me ayudes a construir o mejorar el proceso de onboarding de los primeros 30 días de mis clientes.

## MI CONTEXTO

- Tipo de producto o servicio: [SaaS / servicio profesional / producto físico / ecommerce / otro]
- Modelo de negocio: [B2B / B2C / B2B2C]
- Ticket medio y frecuencia de facturación: [tu respuesta]
- ¿Cuántos clientes nuevos incorporas al mes?: [número]
- Churn actual en los primeros 90 días: [porcentaje si lo conoces]
- Tamaño del equipo de CS: [número de personas]
- Herramientas de CS disponibles: [Intercom / HubSpot / Zendesk / email manual / otro]
- ¿Cuál es el "momento aha" de tu producto? (el instante en que el cliente entiende el valor real): [tu respuesta si lo sabes]

---

## MÓDULO 1 — DIAGNÓSTICO DE TU ONBOARDING ACTUAL

### 1.1 El mapa de fricción

Ayúdame a identificar los puntos de abandono más frecuentes en los primeros 30 días analizando estas señales:

| Señal de alerta | Qué indica | Acción inmediata |
|----------------|-----------|-----------------|
| El cliente no completa el setup inicial en 48h | | |
| El cliente no usa la función core en la primera semana | | |
| El cliente no responde a los emails de onboarding | | |
| El cliente hace preguntas de nivel básico en la semana 3 | | |
| El cliente solicita una llamada de soporte antes del día 7 | | |

### 1.2 Métricas de activación que debo medir

Define los 5 eventos de activación que predicen si un cliente va a quedarse o a marcharse. Para cada evento:
- Definición técnica del evento (qué acción en el producto)
- Ventana temporal esperada (ej: "en los primeros 3 días")
- Benchmark de activación saludable
- Acción automática si el cliente no llega al evento en el tiempo esperado

---

## MÓDULO 2 — ARQUITECTURA DEL ONBOARDING (días 1-30)

### 2.1 El mapa de touchpoints

Diseña el journey completo de onboarding con esta estructura:

**DÍA 1:**
- Acción del cliente esperada: [...]
- Comunicación automática: [asunto + primer párrafo del email de bienvenida]
- Touchpoint humano si aplica: [quién contacta, cómo y con qué mensaje]
- Métrica de éxito del día 1: [...]

**DÍA 3:**
[misma estructura]

**DÍA 7 (fin de semana 1):**
[misma estructura — incluye revisión del progreso]

**DÍA 14 (fin de semana 2):**
[misma estructura — introduce el caso de uso avanzado]

**DÍA 21:**
[misma estructura — detecta y rescata a los clientes en riesgo]

**DÍA 30 (revisión de fin de mes):**
[misma estructura — consolida el valor entregado y siembra la renovación]

### 2.2 El "primer valor rápido" (Time to Value)

Define la tarea mínima que el cliente debe completar para sentir el valor del producto antes de las 24 horas. Diseña el checklist de onboarding en el producto que guía al cliente hacia esa primera victoria de forma visual y motivadora.

---

## MÓDULO 3 — SECUENCIA DE EMAILS DE ONBOARDING

Escribe los 6 emails de la secuencia de onboarding:

**Email 1** (día 0, bienvenida): personalizado, sin abrumar, con un único paso siguiente
**Email 2** (día 2, activación): recuerda el beneficio prometido, muestra el siguiente paso fácil
**Email 3** (día 7, caso de uso): historia de cliente similar + función que aún no han descubierto
**Email 4** (día 14, profundidad): funcionalidad avanzada que multiplica el valor ya obtenido
**Email 5** (día 21, rescate): para clientes que no han completado los hitos de activación — tono de ayuda, no de alarma
**Email 6** (día 30, revisión): celebra el progreso, pregunta qué cambiarían, siembra la renovación

Para cada email: línea de asunto, preheader, cuerpo completo y CTA.

---

## MÓDULO 4 — PLAYBOOK DEL CS MANAGER

### 4.1 Protocolo de intervención humana

Define en qué momentos exactos el CS Manager debe intervenir de forma proactiva (llamada o mensaje personalizado) en lugar de dejar que la automatización actúe. Incluye el script de la llamada de check-in del día 14.

### 4.2 Segmentación de clientes en riesgo durante el onboarding

Crea el sistema de semáforo (verde / amarillo / rojo) basado en comportamiento de uso para priorizar la atención del equipo de CS durante los primeros 30 días.

### 4.3 Encuesta NPS de onboarding

Diseña la encuesta de 5 preguntas que envías el día 30 para medir la calidad del onboarding y detectar causas de abandono antes de que se conviertan en baja. Incluye cómo segmentar las respuestas y actuar según el resultado.

---

## ENTREGABLE FINAL: CHECKLIST DE ONBOARDING LISTO PARA LANZAR

Genera el checklist de 20 puntos que verifica que el sistema de onboarding está listo antes de lanzarlo con clientes reales, incluyendo los tests de QA de los emails automáticos y los permisos de tracking necesarios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar el proceso de onboarding de los primeros 30 días que activa clientes rápidamente y reduce el churn temprano',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Cómo calcular tu tarifa freelance: el método que cubre tus costes y genera beneficio real',
                'description'      => 'Método paso a paso para calcular la tarifa por hora y por proyecto como freelance, cubriendo costes reales, impuestos, vacaciones y margen de beneficio, con simulador y estrategia de posicionamiento.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor especializado en modelos de negocio para freelancers y profesionales independientes. Tu enfoque es pragmático y sin romanticismos: cobrar lo que realmente necesitas cobrar para tener un negocio sostenible y rentable, no solo para "sobrevivir". Necesito que me ayudes a calcular mi tarifa correcta, no la tarifa que creo que el mercado aceptará ni la que cobra el más barato de mi competencia.

## MI INFORMACIÓN BASE

Completa estos datos antes de ejecutar el prompt:
- País de residencia fiscal: [España / México / Argentina / otro]
- Especialidad freelance: [diseño gráfico / desarrollo web / consultoría / redacción / otro]
- Régimen fiscal actual: [autónomo / sociedad / monotributo / otro]
- ¿Llevas cuánto tiempo como freelance?: [meses o años]
- ¿Tienes clientes recurrentes o son todos proyectos puntuales?: [recurrentes / puntuales / mezcla]
- Número de horas que quieres trabajar por semana (REALMENTE, no las que trabajas): [número]

---

## PASO 1 — COSTE DE VIDA REAL (el suelo del que no puedes bajar)

### 1.1 Cuadro de gastos personales anuales

Ayúdame a construir la tabla de gastos personales que debo cubrir. Para cada categoría, dame la pregunta concreta que me lleva a calcular el número real (no el número que me gustaría que fuera):

| Categoría | Ejemplo orientativo | Mi número anual |
|-----------|-------------------|----------------|
| Vivienda (alquiler/hipoteca + suministros) | 12.000€ | |
| Alimentación | 4.800€ | |
| Transporte | 2.400€ | |
| Salud (seguro + copagos) | 1.200€ | |
| Formación y libros | 1.500€ | |
| Ocio y vacaciones (4 semanas) | 3.000€ | |
| Ahorro e inversión (mínimo 10% de ingresos brutos) | variable | |
| Fondo de emergencia (3-6 meses de gastos) | variable | |
| **TOTAL gastos personales anuales** | | |

### 1.2 Gastos del negocio freelance

Lista los costes operativos que muchos freelancers olviden incluir en su tarifa:
- Cuota de autónomo (o equivalente en tu país)
- Software y herramientas (suite Adobe, Figma, IDEs, gestión de proyectos)
- Contabilidad y gestoría
- Formación profesional
- Material y equipamiento (amortización del ordenador, periféricos)
- Marketing y presencia online (web, hosting, publicidad)
- Seguros profesionales (responsabilidad civil)
- Fondo para baches de facturación (meses sin clientes)

**TOTAL gastos del negocio anuales: ___**

---

## PASO 2 — HORAS REALMENTE FACTURABLES (no las que trabajas)

### 2.1 El cálculo de las horas perdidas

Explícame el concepto de "utilization rate" para freelancers y ayúdame a calcular mis horas facturables reales:

```
Semanas disponibles al año:           52
- Vacaciones (semanas):               - ___
- Festivos (en semanas equivalentes): - ___
- Tiempo de gestión y admin (% jornada): - ___
- Tiempo de marketing y captación:    - ___
- Formación y desarrollo propio:      - ___
= Semanas productivas al año:         = ___

× Horas por semana que quiero trabajar: × ___
= Horas facturables al año:             = ___
```

Típicamente el resultado será entre 1.000 y 1.400 horas/año. Explica por qué es normal y por qué trabajar más horas no es la solución.

---

## PASO 3 — CÁLCULO DE LA TARIFA MÍNIMA DE SUPERVIVENCIA

### 3.1 Fórmula base

```
Ingreso bruto necesario = (Gastos personales + Gastos negocio) / (1 - tipo impositivo efectivo estimado)
Tarifa mínima por hora = Ingreso bruto necesario / Horas facturables al año
```

Aplica la fórmula con mis datos y muéstrame el resultado paso a paso.

### 3.2 Por qué la tarifa mínima NO debe ser tu tarifa de mercado

Explica la diferencia entre tarifa de supervivencia y tarifa de posicionamiento, y por qué cobrar la tarifa mínima te pone en una trampa de tiempo sin capacidad de crecer.

---

## PASO 4 — TARIFA DE POSICIONAMIENTO (lo que deberías cobrar)

### 4.1 Las 5 variables que justifican una tarifa más alta

Para cada variable, dame la pregunta que debo hacerme y el ejemplo de cómo aumenta mi tarifa:
1. Especialización en un nicho concreto (no "diseñador", sino "diseñador de UI para fintechs")
2. Resultados medibles y documentados de trabajos anteriores
3. Escasez percibida (disponibilidad limitada, agenda cerrada)
4. Velocidad de entrega (el cliente que necesita algo para mañana paga más)
5. Nivel de riesgo del proyecto para el cliente (cuánto le cuesta si sale mal)

### 4.2 Cómo pasar de tarifa-hora a tarifa-por-proyecto

Explica el proceso para calcular un presupuesto por proyecto sin perder dinero, incluyendo:
- Cómo estimar horas con margen de seguridad del 30%
- Cómo incluir las revisiones sin que se vuelvan ilimitadas
- Cómo estructurar el contrato de proyecto con pagos parciales

### 4.3 Simulador de escenarios

Crea una tabla con 3 escenarios (tarifa mínima / tarifa de mercado / tarifa premium) que muestre para cada uno:
- Tarifa por hora
- Horas trabajadas por semana
- Ingresos anuales brutos y netos estimados
- Vacaciones posibles por año
- Margen para imprevistos

---

## PASO 5 — ESTRATEGIA DE SUBIDA DE TARIFA

Redacta el email que envío a mis clientes actuales para comunicarles una subida de tarifa del 20-30%, que sea honesto, que explique el valor entregado y que no suene a disculpa. Incluye la gestión de la respuesta cuando el cliente pide mantener el precio anterior.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Calcular la tarifa freelance correcta con método de costes reales, horas facturables y estrategia de posicionamiento',
                'vote_score'       => 49,
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
