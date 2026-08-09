<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills40Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de influencers a largo plazo: de la colaboración puntual a la embajada de marca',
                'description'       => 'Construye relaciones de largo plazo con influencers que se convierten en auténticos embajadores de tu marca, superando el modelo de colaboración puntual que produce contenido genérico que nadie cree. Con el proceso de selección, la estructura del acuerdo de embajada y las métricas que realmente miden el ROI.',
                'prompt_content'    => <<<'PROMPT'
Eres un Influencer Marketing Manager con experiencia construyendo programas de embajada de marca en categorías de consumo y B2B donde la relación sostenida con 10-20 influencers cuidadosamente seleccionados ha generado más impacto que 100 colaboraciones puntuales, porque la audiencia percibe la autenticidad que no existe en la mención de pago único.

Contexto:
- Sector / categoría: [describe tu producto y mercado]
- Estado actual del influencer marketing: [sin programa / colaboraciones puntuales sin estrategia / queremos pasar a embajadores]
- Presupuesto disponible: [€/mes o €/año para el programa]
- El mayor reto: [encontrar influencers que encajen de verdad / medir el ROI / gestionar las relaciones a largo plazo]

## Programa de Embajada de Marca — [Empresa]

### 🧠 Por qué el modelo de colaboración puntual cada vez funciona menos

**El problema del influencer marketing transaccional:**
```
→ El seguidor promedio reconoce el contenido patrocinado genérico.
→ "Hoy os traigo este producto maravilloso" sin contexto previo → credibilidad cero.
→ Los estudios muestran que el 71% de los consumidores confía más en las reseñas de
  influencers con los que el creador tiene relación real con el producto.
```

**Por qué los programas de embajada funcionan mejor:**
```
La audiencia ve que el influencer usa el producto durante meses → percibe uso real.
El influencer conoce mejor el producto → el contenido es más auténtico y específico.
El influencer invierte en la relación con la marca → más motivado para producir buen contenido.
Tú inviertes en conocer bien al influencer → mensajes más personalizados.
```

### 🎯 La selección del embajador: los criterios que van más allá de los seguidores

**El error de selección más frecuente:**
```
Seleccionar solo por número de seguidores.
Un influencer con 500k seguidores pero 0.5% de engagement rate tiene menos impacto real
que uno de 20k con 8% de engagement.

Los 5 criterios de selección de embajadores:
CRITERIO 1 — RELEVANCIA DE LA AUDIENCIA:
  → ¿La audiencia del influencer coincide con tu ICP?
  → Solicita el media kit con los datos demográficos.
  → La herramienta que más ayuda: SparkToro (qué audiencias sigue y lee).

CRITERIO 2 — ENGAGEMENT RATE REAL:
  → Instagram: >2% es bueno, >5% es excelente.
  → TikTok: >5% es bueno.
  → Herramienta para verificar: HypeAuditor, Modash, Upfluence.
  → Detecta seguidores falsos: si el engagement es muy bajo vs. seguidores → red flag.

CRITERIO 3 — ALINEACIÓN DE VALORES:
  → ¿El tono y los valores del creador encajan con la marca?
  → Mira los últimos 60 posts: ¿hay algo que contradiga lo que tu marca representa?
  → No necesitas que comparta todos tus valores, pero sí que no contradiga los esenciales.

CRITERIO 4 — AUTENTICIDAD PREVIA CON TU CATEGORÍA:
  → ¿Ha hablado orgánicamente de productos similares antes de la colaboración?
  → Si es la primera vez que menciona tu categoría → el público lo notará.

CRITERIO 5 — CALIDAD DE PRODUCCIÓN Y CREATIVIDAD:
  → ¿El contenido que produce es de calidad consistente?
  → ¿Tiene creatividad para hacer el branded content de forma no obvia?
```

### 📋 La estructura del acuerdo de embajada

**Los elementos del acuerdo:**
```
DURACIÓN: 6-12 meses mínimo (por debajo de 6 meses no hay tiempo para construir la autenticidad).

ENTREGAS MÍNIMAS:
→ Número de posts/stories/reels garantizados al mes.
→ Canales incluidos (Instagram, TikTok, YouTube...).
→ Tipos de contenido (feed, stories, reels, newsletter...).
→ Ventana de exclusividad por categoría (no puede hacer branded content con competidores directos).

COMPENSACIÓN:
→ Fee mensual (base de la relación, no ligado a performance).
→ Bonus por resultados (ventas, conversiones, viralidad).
→ Producto gratuito (siempre incluido — el embajador debe usar el producto genuinamente).
→ Experiencias (invitaciones a eventos, lanzamientos, viajes de marca — alto valor no monetario).

DERECHOS DE CONTENIDO:
→ Tienes derecho a reutilizar el contenido en tus canales orgánicos (siempre).
→ El uso en publicidad de pago requiere acuerdo específico y compensación adicional.
→ Define el período de exclusividad del contenido (cuánto tiempo no puede publicarlo en otras redes).

PROCESO CREATIVO:
→ La marca da un briefing con el mensaje clave y las restricciones.
→ El influencer tiene libertad creativa para ejecutarlo en su tono.
→ Proceso de aprobación: 1 revisión máximo (más revisiones matan la autenticidad).
```

### 📊 Las métricas del programa de embajada: más allá del alcance e impresiones
El modelo de medición del programa de embajada (earned media value, tráfico referido, tasa de conversión de la audiencia del influencer, brand search lift después de las publicaciones) y cómo calcular el ROI real del programa para presentarlo internamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Influencer marketing largo plazo, embajadores de marca, programa embajada, selección influencers, ROI influencer marketing',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Code review efectivo: cómo dar y recibir feedback de código que mejora la calidad sin generar conflictos',
                'description'       => 'Implementa un proceso de code review en tu equipo que mejora la calidad del código, comparte el conocimiento y detecta bugs antes de producción, sin que las revisiones se conviertan en debates interminables, críticas personales o un cuello de botella que ralentiza el equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Staff Engineer con experiencia implementando culturas de code review en equipos de ingeniería donde la calidad del proceso de revisión ha mejorado la calidad del código, reducido los bugs en producción y acelerado el crecimiento profesional de los ingenieros más juniors.

Contexto:
- Tamaño del equipo de ingeniería: [N devs]
- Estado actual del code review: [sin proceso / reviews superficiales / reviews que tardan demasiado / reviews que generan conflictos]
- El mayor problema: [nadie revisa con profundidad / los PRs se quedan bloqueados esperando revisión / el feedback es poco constructivo / los seniors no hacen review]

## Code Review Efectivo — [Equipo]

### 🧠 El propósito del code review (más allá de encontrar bugs)

**Los 4 objetivos del code review:**
```
1. CALIDAD: detectar bugs, problemas de seguridad, y código que no funciona como debería.
2. MANTENIBILIDAD: asegurar que el código es legible, testeable y fácil de cambiar en el futuro.
3. CONOCIMIENTO COMPARTIDO: al menos 2 personas del equipo entienden cada parte del sistema.
4. MEJORA PROFESIONAL: el feedback bien dado es la mejor herramienta de desarrollo técnico.

El objetivo que más se olvida: #4.
Un buen code review no es solo "encontrar problemas" — es una conversación técnica de calidad.
```

### 📋 El proceso de code review que funciona

**Responsabilidades del autor del PR:**

**Antes de abrir el PR:**
```
→ Self-review: revisa tu propio PR antes de pedirlo. Comenta los puntos que sabes que son cuestionables.
→ Tamaño del PR: máximo 400 líneas de cambio. PRs más grandes → revisiones superficiales.
  Si el cambio es grande → divídelo en PRs más pequeños e independientes.
→ Descripción del PR:
  - ¿QUÉ hace este cambio? (breve)
  - ¿POR QUÉ es necesario?
  - ¿Cómo lo PROBÉ?
  - ¿Hay alguna decisión de diseño que necesita discusión?
```

**Responsabilidades del revisor:**

**Cómo dar feedback constructivo:**
```
La distinción de tipos de comentario (Conventional Comments):
→ [nit]: sugerencia estilística de bajo impacto. El autor puede ignorarla.
  "[nit] Preferiría `const users = []` pero está bien como está."
→ [suggestion]: una mejora que vale la pena considerar pero no bloquea.
  "[suggestion] Podrías extraer esta lógica a una función separada para mejorar la testabilidad."
→ [issue]: problema real que debe resolverse antes del merge.
  "[issue] Aquí hay una race condition si dos requests llegan simultáneamente."
→ [question]: una pregunta genuina para entender el código, no una crítica.
  "[question] ¿Por qué elegiste usar un Map aquí en lugar de un objeto?"

Por qué la distinción importa:
El autor sabe exactamente qué es bloqueante y qué es opcional.
Reduce la ansiedad del autor al ver 15 comentarios (12 son nits, 2 suggestions, 1 issue real).
```

**Lo que el revisor NO debe hacer:**
```
→ Comentar el estilo sin tener un linter que lo valide automáticamente
  (si hay un linter → no pierdas tiempo en espacios y comillas en el review).
→ Reescribir el código del autor en los comentarios ("hazlo así: [código completo]")
  → Sugerencia, no dictado. El autor tiene ownership del código.
→ Aprobar sin leer (el rubber stamp review).
→ Bloquear indefinidamente sin dar un camino claro para desbloquear.
```

### ⏱️ El SLA del code review: cómo evitar los PRs bloqueados durante días

**El problema de los PRs bloqueados:**
```
Un PR que lleva 3 días esperando revisión:
→ El contexto del autor se ha enfriado.
→ Puede haber conflictos de merge con los PRs que se han mergeado mientras tanto.
→ El autor ha empezado otro trabajo y la vuelta al contexto es costosa.
→ La feature no llega a producción.
```

**El SLA de review recomendado:**
```
PRs pequeños (<100 líneas): primera revisión en < 4 horas hábiles.
PRs medianos (100-400 líneas): primera revisión en < 24 horas hábiles.
PRs grandes (>400 líneas): considera si se puede dividir antes de revisar.

Implementación práctica:
→ Rotación de reviewer duty: 1 persona del equipo es el "PR duty" cada día → revisa todos los PRs abiertos que no tienen revisor asignado.
→ Notificación de PR sin revisión en > 4 horas → alerta al canal del equipo.
```

### 📊 Las métricas del proceso de code review
El tiempo medio de ciclo del PR (desde apertura hasta merge), el tamaño medio de los PRs, la tasa de reversión post-merge (los PRs mergeados que tuvieron que revertirse por bugs) y cómo estas métricas revelan si el proceso de review es saludable o un cuello de botella.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Code review efectivo, feedback código, pull request best practices, code review process, equipo desarrollo',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias de usuario para personas mayores y accesibilidad cognitiva',
                'description'       => 'Diseña interfaces digitales que funcionan bien para personas mayores y para personas con capacidades cognitivas diversas — sin sacrificar la experiencia del resto de usuarios. Con los principios de diseño inclusivo, los patrones que reducen la carga cognitiva y las herramientas de evaluación de accesibilidad cognitiva.',
                'prompt_content'    => <<<'PROMPT'
Eres un Inclusive UX Designer con experiencia diseñando productos digitales para audiencias diversas que incluyen personas mayores, personas con discapacidades cognitivas y personas con baja alfabetización digital, donde el diseño inclusivo ha aumentado la base de usuarios y mejorado la experiencia para todos los grupos.

Contexto:
- Tipo de producto: [app de salud / producto de banca / plataforma de servicios gubernamentales / app de consumo / otro]
- El porcentaje estimado de tu audiencia que es mayor de 65 años o tiene capacidades cognitivas diversas: [%]
- El mayor reto de diseño: [menús demasiado complejos / textos ilegibles / demasiados pasos para tareas simples / errores que el usuario no sabe cómo recuperar]

## Diseño Accesible Cognitivo y para Personas Mayores — [Producto]

### 🧠 Por qué el diseño accesible mejora la experiencia para todos

**El mito que hay que superar:**
```
"Si diseñamos para personas mayores o con discapacidad cognitiva, el diseño será aburrido o simple."
Realidad: los principios de diseño accesible producen interfaces más claras para todo el mundo.

La prueba: los subtítulos en vídeo se diseñaron para personas con discapacidad auditiva.
Ahora el 80% de las personas los usa en entornos ruidosos o cuando no quieren molestar.
El curb cut effect: las rampas para sillas de ruedas las usa todo el mundo
(padres con carritos, repartidores, ciclistas).
```

### 📐 Los principios de diseño para accesibilidad cognitiva

**Principio 1 — Reduce la carga cognitiva:**
```
La memoria de trabajo humana tiene una capacidad muy limitada (7±2 elementos).
Las personas mayores y con diversidad cognitiva tienen mayor fatiga cognitiva con la complejidad.

Técnicas:
→ Chunking: agrupa la información en bloques de 3-5 elementos.
  En lugar de un formulario de 15 campos → 3 pasos de 5 campos.
→ Progressive disclosure: muestra solo la información necesaria en cada momento.
  La información adicional está disponible pero no distrae.
→ Reduce las opciones: el exceso de opciones produce parálisis de decisión.
  Las tiendas de supermercado que redujeron las variedades de mermelada vendieron más.
```

**Principio 2 — Diseña para el error, no contra él:**
```
Las personas cometen errores. Las personas mayores y con diversidad cognitiva cometen más.
El diseño debe anticipar y recuperar los errores, no castigarlos.

Patrones:
→ Confirmación antes de acciones destructivas (borrar, enviar, pagar).
→ La acción es reversible cuando es posible (deshacer, cancelar).
→ El mensaje de error explica QUÉ salió mal y QUÉ HACER para corregirlo.
  ❌ "Error: campo inválido"
  ✅ "El teléfono debe incluir el prefijo internacional. Ejemplo: +34 612 345 678"
→ Autocompletar y validación en tiempo real para formularios complejos.
```

**Principio 3 — Tipografía y contraste legibles:**
```
Las personas mayores tienen dificultades con:
→ Fuentes demasiado pequeñas: mínimo 16px en body (18-20px es mejor para audiencias mayores).
→ Contraste insuficiente: el estándar WCAG 2.1 AA exige ratio de contraste de 4.5:1 para texto normal.
   Herramienta de verificación: WebAIM Contrast Checker.
→ Texto sobre imágenes sin overlay suficiente.
→ Fuentes decorativas o difíciles de leer (nunca uses Comic Sans o fuentes de script para contenido informativo).
→ Líneas de texto demasiado largas: máximo 70-80 caracteres por línea.
→ Interlineado insuficiente: mínimo 1.5× el tamaño de la fuente.
```

**Principio 4 — Navegación predecible y consistente:**
```
El usuario mayor o con diversidad cognitiva necesita que la interfaz sea predecible.
Si cambia de pantalla y el menú está en otro lugar → desorientación completa.

Reglas de consistencia:
→ El menú de navegación siempre en el mismo lugar.
→ Los botones con la misma función tienen siempre el mismo aspecto.
→ El título de cada pantalla es claro y dice exactamente dónde está el usuario.
→ El breadcrumb o el indicador de progreso es visible en flujos de múltiples pasos.
```

**Principio 5 — Lenguaje claro y simple:**
```
El nivel de lectura objetivo para contenido de consumo masivo: primaria-secundaria.
Herramienta para verificar la legibilidad del texto: Hemingway Editor (inglés), Legibilidad (español).

Reglas del lenguaje claro:
→ Frases cortas (máximo 20-25 palabras).
→ Una idea por frase.
→ Sin jerga técnica o acrónimos sin explicar.
→ La información más importante al principio (pirámide invertida).
→ Voz activa ("Haz clic en Guardar") en lugar de voz pasiva ("El botón de Guardar debe ser presionado").
```

### 🛠️ Las herramientas de evaluación de accesibilidad cognitiva
La combinación de herramientas automáticas (axe DevTools, WAVE, Lighthouse) con la evaluación manual siguiendo las pautas de WCAG 2.2 Criterios de éxito 1.3-1.4 (perceptible) y 2.4 (navegable), y cómo diseñar los tests de usuario con personas reales de la audiencia objetivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Accesibilidad cognitiva, diseño personas mayores, UX inclusivo, WCAG cognitivo, diseño accesible',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Operaciones de ventas (Sales Ops): el sistema que hace al equipo de ventas más efectivo sin añadir vendedores',
                'description'       => 'Implementa las operaciones de ventas (Sales Ops) que maximizan la productividad del equipo comercial existente mediante la optimización del CRM, la automatización de tareas repetitivas y el reporting que revela los cuellos de botella del proceso. Con los proyectos de Sales Ops con mayor ROI y cómo priorizarlos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Sales Operations con experiencia implementando sistemas de Sales Ops en equipos de ventas B2B de 5-30 personas donde las mejoras en proceso y herramientas han aumentado la productividad de los vendedores un 30% sin contratar personas adicionales.

Contexto:
- Tamaño del equipo de ventas: [N AEs / SDRs]
- CRM actual: [Salesforce / HubSpot / Pipedrive / otro / ninguno]
- El mayor tiempo perdido del equipo de ventas: [actualizando el CRM manualmente / buscando información de contactos / preparando propuestas / reuniones internas / no sé pero algo va mal]

## Sales Operations — [Empresa]

### 🧠 Qué es Sales Ops y por qué es el multiplicador de fuerza del equipo de ventas

**La definición simple:**
```
Sales Ops se encarga de todo lo que hace al equipo de ventas más efectivo, excepto vender.
→ Proceso: diseñar el proceso de ventas y sus etapas
→ Tecnología: implementar y mantener el CRM y el stack de ventas
→ Datos: reporting, forecast, análisis del pipeline
→ Enablement: dar a los vendedores los materiales, herramientas y formación que necesitan
→ Automatización: eliminar las tareas manuales que roban tiempo de venta
```

**Por qué invertir en Sales Ops antes de contratar más vendedores:**
```
Contratar un vendedor más: €80.000/año de coste total (salario + beneficios + ramp).
Resultado: +1 vendedor.

Invertir 3 meses en Sales Ops (1 persona especializada o un consultor):
→ El CRM está bien configurado → los vendedores lo usan.
→ Las tareas manuales están automatizadas → los vendedores tienen 1-2h más/día de tiempo de venta.
→ El reporting revela los cuellos de botella → se atacan los problemas correctos.
Resultado: el equipo actual es un 30% más productivo → equivale a 2 vendedores adicionales.
```

### 🔧 Los proyectos de Sales Ops con mayor ROI (en orden de prioridad)

**Proyecto 1 — CRM hygiene y configuración correcta:**
```
El CRM mal configurado es peor que no tener CRM.
Los vendedores no lo usan → los datos son inútiles → el management toma decisiones con datos incorrectos.

Diagnóstico en 1 hora:
→ ¿Cuántos deals no tienen una actividad registrada en los últimos 7 días? (señal de abandono del CRM)
→ ¿Cuántos deals tienen un cierre estimado que ya pasó? (señal de que no se actualiza)
→ ¿El proceso de stages tiene criterios claros de entrada y salida?

Las mejoras que producen más impacto:
→ Definir los stages con criterios claros y formarlos en el equipo.
→ Automatizar las actualizaciones de estado cuando sea posible (ej: si el deal lleva 14 días sin actividad → alerta automática).
→ Requerir los campos mínimos para avanzar un deal (deal amount, close date, next step).
```

**Proyecto 2 — Automatización del data entry:**
```
El tiempo que el vendedor gasta actualizando el CRM es tiempo que no vende.
Las automatizaciones de mayor impacto:
→ Sincronización de email con el CRM: cada email con un contacto se registra automáticamente.
→ Enriquecimiento automático de contactos: Apollo/Clay enriquece los datos del contacto
  (empresa, LinkedIn, teléfono) sin que el SDR tenga que buscarlo manualmente.
→ Logging automático de llamadas: si usas Gong, Chorus o Aircall → las llamadas se registran
  y transcriben automáticamente en el CRM.
```

**Proyecto 3 — El stack de ventas eficiente:**
```
El stack mínimo eficiente para un equipo de ventas B2B en 2025:
PROSPECCIÓN: Apollo.io (base de datos de contactos + secuencias de outreach)
CRM: HubSpot (para equipos <30 personas) / Salesforce (para >30 personas)
LLAMADAS Y COACHING: Gong.io (grabación + análisis de conversaciones) o Chorus
EMAIL: Gmail/Outlook con extensiones (Yesware, Mixmax para tracking)
FIRMA ELECTRÓNICA: PandaDoc o DocuSign
VIDEO ASÍNCRONO: Loom (para demos asíncronas y seguimiento de propuestas)

Coste estimado total: €80-150/vendedor/mes.
```

**Proyecto 4 — El dashboard de ventas que revela los cuellos de botella:**
```
Las métricas que el manager debe ver cada semana:
→ Pipeline por stage: ¿dónde se atascan los deals?
→ Velocidad del pipeline: tiempo medio en cada stage.
→ Win rate por stage: ¿en qué stage se pierde más?
→ Activity metrics: llamadas + emails + reuniones por vendedor.
→ Forecast accuracy: ¿los deals que decimos que cerramos este mes, cierran?
```

### 📋 El playbook de ventas: el documento que estandariza el proceso
El playbook de ventas que documenta el proceso completo (desde el lead hasta el cierre) para que el onboarding de nuevos vendedores sea más rápido, el proceso sea consistente entre vendedores y los managers puedan identificar dónde cada vendedor necesita coaching.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sales Operations, Sales Ops CRM, productividad equipo ventas, automatización ventas, CRM hygiene, stack ventas',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Experimentación en producto: cómo diseñar y analizar A/B tests que producen aprendizaje real',
                'description'       => 'Diseña y ejecuta experimentos A/B en tu producto que producen aprendizaje estadísticamente válido en lugar de resultados ambiguos que nadie sabe cómo interpretar. Con el proceso de diseño del experimento, el cálculo del tamaño de muestra, el análisis correcto de los resultados y cuándo NO hacer A/B test.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Experimentation Specialist con experiencia implementando programas de experimentación en equipos de producto donde la cultura del A/B test bien ejecutado ha reemplazado las decisiones basadas en intuición del stakeholder más ruidoso por decisiones basadas en evidencia estadística.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / ecommerce / otro]
- Tráfico mensual: [visitas o MAU] (crítico para saber si tienes suficiente tráfico para testar)
- Estado del A/B testing: [sin experiencias / hacemos tests pero no sé si son estadísticamente válidos / queremos mejorar el proceso]
- Herramienta de A/B testing: [Optimizely / VWO / Statsig / LaunchDarkly / home-built / ninguna]

## A/B Testing en Producto — [Empresa]

### 🧠 Por qué la mayoría de los A/B tests producen resultados inútiles

**Los 5 errores más frecuentes:**
```
ERROR 1 — TAMAÑO DE MUESTRA INSUFICIENTE:
El test se para antes de tener suficiente tráfico para conclusiones válidas.
Resultado: "Ganó la variante B con 53% vs. 51% pero con solo 200 usuarios" → esto no es válido.
Fix: calcula el tamaño de muestra necesario ANTES de empezar el test.

ERROR 2 — PEEKING (mirar los resultados antes de tiempo):
El test lleva 3 días y ya se mira si hay diferencias. Si hay → se para el test.
Resultado: el 30% de los tests que "ganan" early son falsos positivos.
Fix: decide la duración del test antes de empezar y no mires hasta que se cumpla.

ERROR 3 — MÚLTIPLES VARIANTES SIN AJUSTE ESTADÍSTICO:
Testas A vs. B vs. C vs. D simultáneamente con el mismo nivel de significancia.
Resultado: el 20% de los tests con 4 variantes tienen al menos 1 falso positivo por azar.
Fix: ajusta el nivel de significancia para tests múltiples (Bonferroni correction).

ERROR 4 — LA MÉTRICA ERRÓNEA:
El test mide "páginas vistas" cuando el objetivo era "conversión a pago".
Fix: define la métrica primaria que importa antes de empezar.

ERROR 5 — INTERFERENCIA ENTRE VARIANTES:
En productos sociales o con efectos de red, los usuarios de la variante A interactúan con los de B.
Fix: necesitas un diseño de experimentación diferente (cluster randomization).
```

### 📐 El proceso correcto de diseño de un A/B test

**Paso 1 — Define la hipótesis:**
```
Formato: "Creemos que [el cambio X] producirá [el resultado Y] para [el segmento Z]
porque [el razonamiento basado en evidencia]."

Ejemplo concreto:
"Creemos que añadir testimoniales de clientes en la landing de pricing
producirá un aumento en la conversión de trial a plan de pago
para los usuarios nuevos que visitan la página por primera vez,
porque el 70% de nuestros churned users en la encuesta de salida indicaron
que dudaron de si el producto cumpliría sus expectativas."

Una hipótesis bien formada tiene:
→ Un cambio específico (no "mejorar la página")
→ Una métrica específica (no "mejorar la experiencia")
→ Un segmento específico
→ Un razonamiento basado en evidencia previa
```

**Paso 2 — Calcula el tamaño de muestra necesario:**
```
Los 3 inputs que necesitas:
1. Tasa base actual de la métrica (ej: conversión actual del 3%)
2. El efecto mínimo detectable (MDE): el cambio más pequeño que es relevante para el negocio
   (ej: quiero detectar una mejora de al menos 10% → de 3% a 3.3%)
3. Potencia estadística: 80% (estándar de la industria)
4. Nivel de significancia: α = 0.05 (5% de probabilidad de falso positivo)

Herramienta online gratuita: Evan Miller's A/B Test Sample Size Calculator.
La duración del test = tamaño de muestra necesario / tráfico diario real.

Ejemplo:
Tasa base: 3%
MDE: 0.5% (de 3% a 3.5%)
Resultado del calculador: necesitas 35.000 usuarios por variante.
Tráfico diario: 1.000 usuarios.
Duración mínima: 70 días (35 días si divides el tráfico 50/50).

Si la duración es >90 días → el test no es práctico. Aumenta el MDE o busca otra optimización.
```

**Paso 3 — Ejecuta y respeta el plan:**
```
→ Asigna a los usuarios a las variantes de forma aleatoria (y verifica que la asignación es uniforme).
→ Monitoriza la asignación pero NO los resultados durante las primeras 2 semanas.
→ Espera a alcanzar el tamaño de muestra calculado o la duración planificada.
→ Analiza SOLO cuando el test ha concluido según el plan.
```

### 📊 Cuándo NO hacer A/B test
Las situaciones donde el A/B test no es la herramienta correcta (tráfico insuficiente, cambios que afectan a toda la experiencia, decisiones estratégicas de UX donde la investigación cualitativa es más valiosa) y las alternativas: smoke tests, feature flags con rollout gradual, y la regla para cuando "solo lanzar y medir" es la decisión correcta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'A/B testing producto, experimentación producto, diseño experimentos, tamaño muestra AB test, significancia estadística',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding auténtico: construye la reputación de empleador que atrae al talento que buscas',
                'description'       => 'Construye la propuesta de valor para el empleado (EVP) y la estrategia de employer branding que atrae a los candidatos correctos de forma orgánica, reduciendo el coste de adquisición de talento y aumentando la calidad de las candidaturas. Con el diagnóstico, el mensaje diferenciado y los canales de distribución.',
                'prompt_content'    => <<<'PROMPT'
Eres una Employer Brand Specialist con experiencia construyendo propuestas de valor para el empleado (EVP) y estrategias de employer branding en startups y empresas en crecimiento donde el posicionamiento auténtico como empleador ha reducido el coste de adquisición de talento un 40% y aumentado la tasa de conversión de candidatos a oferta aceptada.

Contexto:
- Tipo de empresa: [startup / scale-up / PYME / empresa consolidada]
- Tamaño: [N empleados]
- El mayor reto de atracción de talento: [no nos conocen / nos conocen pero no nos eligen / los candidatos tienen expectativas incorrectas que generan desajuste / alta competencia con empresas grandes]

## Employer Branding Auténtico — [Empresa]

### 🧠 Por qué el employer branding genérico no funciona

**El problema del "great place to work" genérico:**
```
Todas las empresas dicen lo mismo:
→ "Somos como una familia."
→ "Aquí se aprende mucho."
→ "Tenemos un ambiente dinámico y joven."
→ "Valoramos la iniciativa y la creatividad."

El candidato que ha visitado 10 páginas de empleo las ha leído todas.
Para él son ruido de fondo — no sirven para decidir dónde quiere trabajar.

El employer branding que funciona:
→ Es específico (nombra exactamente qué hace diferente trabajar aquí).
→ Es honesto (incluye los desafíos, no solo los beneficios).
→ Es consistente (lo que se dice fuera coincide con lo que viven los empleados dentro).
→ Es auténtico (viene de las historias reales de empleados, no de un copywriter que nunca pisó la oficina).
```

### 🔬 El diagnóstico: entender tu reputación real como empleador

**Paso 1 — Las entrevistas internas (qué dicen los que ya están):**
```
Pregunta a una muestra de empleados actuales (10-20% del equipo, diverso en rol y antigüedad):
1. "¿Por qué decidiste unirte a [empresa]?"
2. "¿Qué te ha sorprendido positivamente de trabajar aquí?"
3. "¿Qué te frustra o echas de menos?"
4. "¿Cómo explicarías trabajar en [empresa] a un amigo que no nos conoce?"
5. "¿A qué tipo de persona le encantaría trabajar aquí? ¿Y a quién NO le gustaría?"

La respuesta a la pregunta 5 es la más valiosa:
Definir quién NO encajaría es más honesto y específico que describir el candidato ideal.
```

**Paso 2 — Las fuentes externas de reputación:**
```
→ Reseñas en Glassdoor, Indeed, LinkedIn. Busca los patrones (las críticas repetidas, no los outliers).
→ Las preguntas más frecuentes de candidatos en los procesos de selección.
→ Las razones por las que candidatos rechazan ofertas.
→ Los perfiles de los empleados que se fueron voluntariamente y por qué.
```

### 📝 La propuesta de valor para el empleado (EVP): el núcleo del employer branding

**La estructura de la EVP:**
```
La EVP responde a esta pregunta: "¿Por qué debería trabajar aquí en lugar de en otro sitio?"

Los 5 pilares de la EVP:
1. PROPÓSITO: ¿qué impacto tiene el trabajo en algo más grande?
   "Estamos construyendo la infraestructura financiera para las PYMEs europeas que hoy no tienen acceso."

2. CULTURA: ¿cómo es el ambiente real de trabajo?
   Específico: "Decidimos en base a datos, no por jerarquía. El becario puede rebotar una decisión del CEO si tiene los datos."

3. DESARROLLO: ¿cómo crece la persona aquí?
   Específico: "El 60% de los managers actuales eran ICs hace 2 años. Hay career ladder documentado."

4. COMPENSACIÓN: ¿qué incluye el paquete total?
   No solo el salario — equity, flexible working, beneficios específicos.

5. EL TIPO DE PERSONA QUE TRIUNFA AQUÍ:
   "Si te gusta la autonomía y te frustra la burocracia → vas a estar muy cómodo.
   Si necesitas mucha estructura y dirección → igual esto no es lo tuyo todavía."
   La honestidad en este punto reduce el desajuste cultural.
```

### 📢 Los canales de distribución del employer branding
La estrategia de contenido en LinkedIn (empleados como embajadores), la gestión proactiva de Glassdoor, la página de Careers como herramienta de conversión, y los eventos y comunidades donde está el talento que buscas — con el mensaje adaptado a cada canal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Employer branding, EVP propuesta valor empleado, atracción talento, reputación empleador, Glassdoor estrategia',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Presupuesto de tesorería a 13 semanas: anticipa los problemas de caja antes de que se conviertan en crisis',
                'description'       => 'Construye y gestiona el presupuesto de tesorería a 13 semanas que permite a la empresa anticipar con tiempo los problemas de liquidez, tomar decisiones proactivas y evitar el estrés de descubrir a última hora que no hay caja para pagar las nóminas.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO / Director de Tesorería con experiencia implementando el modelo de previsión de caja a 13 semanas en empresas de €1M-€20M de facturación donde este instrumento ha sido la diferencia entre detectar un problema de caja 6 semanas antes (tiempo suficiente para actuar) y descubrirlo la semana que vence el pago.

Contexto:
- Tamaño de la empresa: [€ facturación / N empleados]
- El mayor reto de tesorería: [no tenemos visibilidad de la caja futura / los imprevistos siempre nos pillan / la empresa está creciendo rápido y la caja es impredecible / tenemos estacionalidad importante]
- Herramienta actual: [Excel / ERP / ninguna]

## Presupuesto de Tesorería a 13 Semanas — [Empresa]

### 🧠 Por qué 13 semanas y no el presupuesto anual

**La diferencia entre el P&L y la caja:**
```
El P&L (cuenta de resultados) dice si la empresa es rentable.
La caja dice si la empresa puede pagar sus obligaciones en el día de vencimiento.
Una empresa puede ser rentable y quedarse sin caja (el clásico problema de la PYME en crecimiento).

Por qué la previsión de caja es diferente al P&L:
→ Una venta de €100k en enero puede cobrarse en marzo (DSO de 60 días).
→ En el P&L aparece en enero. En la caja aparece en marzo.
→ Si tienes que pagar nóminas en febrero, la venta de enero no te ayuda.
```

**Por qué 13 semanas (y no 12 meses):**
```
12 meses de previsión → demasiado incierto para ser útil semana a semana.
4 semanas → demasiado corto para tomar decisiones preventivas.
13 semanas (3 meses) → el horizonte que permite:
→ Detectar el problema con suficiente antelación para actuar.
→ Tener precisión razonable en las previsiones.
→ Tomar decisiones de financiación si es necesario (pedir una póliza de crédito lleva 4-8 semanas).
```

### 📊 La estructura del modelo de tesorería a 13 semanas

**El formato del modelo (Excel / Google Sheets):**
```
Una fila por semana (13 semanas).
Las columnas:

COBROS (entradas de caja):
→ Cobros de clientes por ventas ya facturadas (con aging de cuentas a cobrar)
→ Cobros anticipados de contratos firmados
→ Otros ingresos (subvenciones, desinversiones, etc.)
TOTAL COBROS SEMANA

PAGOS (salidas de caja):
→ Nóminas y SS (fechas exactas de pago)
→ Pago a proveedores (con aging de cuentas a pagar)
→ Impuestos y tasas (IVA trimestral, retenciones IRPF, Impuesto de Sociedades)
→ Cuotas de préstamos y leasing
→ Gastos operativos fijos (alquiler, servicios, suscripciones)
→ Inversiones (CAPEX previstas)
TOTAL PAGOS SEMANA

POSICIÓN DE CAJA:
SALDO INICIAL SEMANA
+ TOTAL COBROS
- TOTAL PAGOS
= SALDO FINAL SEMANA → SALDO INICIAL DE LA SEMANA SIGUIENTE

ALERTAS:
→ Si el saldo final es < [el mínimo operativo] → la celda se pone en rojo.
```

### 🔍 La construcción de la previsión: cómo obtener los datos

**Los cobros (la parte más difícil de prever):**
```
COBROS CONFIRMADOS (alta certeza):
→ Facturas emitidas con fecha de vencimiento conocida y cliente fiable.
→ Contratos con pago adelantado ya firmados.
→ Pedidos recurrentes de clientes con historial de pago puntual.

COBROS ESTIMADOS (menor certeza):
→ Ventas esperadas por el equipo comercial (aplica un % de descuento de realismo).
→ Proyectos en ejecución que se facturarán al cerrar hitos.

Para mejorar la previsión de cobros:
→ El aging de cuentas a cobrar (cuánto lleva sin cobrarse cada factura) es el mejor predictor.
→ El DSO histórico de cada cliente te dice cuándo esperar el cobro.
```

**Los pagos (más predecibles):**
```
Los pagos fijos son los más fáciles: nóminas, alquiler, cuotas bancarias → fechas exactas.
Los variables requieren historial: proveedores principales → usa la media de los últimos 3 meses.
Los impuestos tienen fechas concretas en el calendario fiscal:
→ IVA mensual o trimestral (según el régimen)
→ Retenciones IRPF: liquidación mensual o trimestral
→ Impuesto de Sociedades: pagos fraccionados en abril, octubre, diciembre
```

### 🚨 Cómo usar la previsión: el proceso semanal de actualización
La cadencia de actualización del modelo (15-30 minutos cada lunes por el responsable de tesorería), el semáforo de alertas (verde/ámbar/rojo según el saldo mínimo) y el protocolo de acción cuando el saldo cae en rojo con 4+ semanas de antelación (póliza de crédito, adelanto de cobros, aplazamiento de pagos).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Tesorería 13 semanas, cash flow forecast, previsión caja, gestión liquidez, cash management PYME',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Responsabilidad del administrador de sociedad en España: lo que todo CEO y directivo debe saber',
                'description'       => 'Entiende la responsabilidad personal del administrador de una sociedad española — cuándo el administrador responde con su patrimonio personal por las deudas de la empresa, las obligaciones legales más críticas y cómo protegerse mediante el cumplimiento de deberes diligentes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista especializado en derecho societario con experiencia asesorando a administradores de sociedades españolas sobre sus obligaciones legales y la gestión del riesgo de responsabilidad personal, donde el desconocimiento de estos límites ha llevado a administradores a responder con su patrimonio personal por deudas que creían eran exclusivamente de la sociedad.

Contexto:
- Tu rol: [CEO de una SL / administrador de una SA / consejero delegado / miembro del consejo de administración]
- El área de preocupación: [entender cuándo soy personalmente responsable / gestión de una empresa en dificultades / nombramiento como nuevo administrador / herencia de empresa con problemas]

## Responsabilidad del Administrador de Sociedad — España

### ⚠️ El principio del que parte todo: la limitación de responsabilidad tiene excepciones

**El principio general:**
```
En una Sociedad Limitada (SL) o Sociedad Anónima (SA), los socios responden de las deudas
de la sociedad solo hasta el importe de su aportación al capital.
La empresa es una persona jurídica separada del administrador.

PERO: el administrador tiene obligaciones específicas. Si las incumple,
puede responder personalmente con su patrimonio por las deudas sociales.
```

### 🚨 Las 3 principales vías de responsabilidad personal del administrador

**VÍA 1 — Responsabilidad por no disolver la sociedad en causa de disolución (art. 367 LSC):**
```
CUÁNDO SE APLICA:
La sociedad está en causa legal de disolución y el administrador no convoca la Junta
en los 2 meses siguientes para acordar la disolución o el concurso de acreedores.

Las causas de disolución más frecuentes:
→ Pérdidas que reducen el patrimonio neto a menos de la mitad del capital social.
→ Capital social inferior al mínimo legal durante más de 1 año.
→ Imposibilidad de cumplir el fin social.

EL EFECTO: el administrador responde SOLIDARIAMENTE de las deudas sociales
generadas DESPUÉS de que concurriera la causa de disolución.
(No de todas las deudas — solo de las posteriores a la causa de disolución.)

El plazo: 2 meses desde que se conoce o debería conocerse la causa de disolución.
Pasados los 2 meses sin actuar → cada nueva deuda que contrae la sociedad puede
reclamarse personalmente al administrador.
```

**VÍA 2 — Responsabilidad por daños al incumplir deberes de diligencia y lealtad (art. 236 LSC):**
```
El administrador tiene el deber de diligencia (actuar como un empresario ordenado)
y el deber de lealtad (actuar en interés de la sociedad, no en el propio).

EJEMPLOS DE INCUMPLIMIENTO QUE GENERAN RESPONSABILIDAD:
→ Desvío de negocio/oportunidades de la sociedad al administrador personalmente.
→ Contratos de la sociedad con empresas del administrador sin aprobación de la Junta.
→ Remuneraciones del administrador no autorizadas en los estatutos.
→ Falta de control sobre empleados que cometen fraudes (si había señales que el administrador ignoró).

QUIÉN PUEDE RECLAMAR:
→ La propia sociedad (acción social de responsabilidad, la decide la Junta).
→ Los socios (acción individual si el daño es directo a ellos).
→ Los acreedores (acción individual si el daño reduce el patrimonio que garantizaba sus créditos).
```

**VÍA 3 — Responsabilidad fiscal y tributaria (Ley General Tributaria, art. 43):**
```
La Agencia Tributaria puede declarar responsable subsidiario al administrador por las deudas
tributarias de la sociedad cuando el administrador no haya realizado los actos necesarios
para el cumplimiento de las obligaciones tributarias o haya consentido el incumplimiento.

CASOS MÁS FRECUENTES:
→ No presentar declaraciones de impuestos o presentarlas fraudulentamente.
→ Vaciar de activos la sociedad después de contraer la deuda tributaria.
→ Cesión de la empresa después de la deuda tributaria con el fin de obstaculizar el cobro.
```

### 🛡️ Cómo protegerse: las 5 prácticas que reducen el riesgo de responsabilidad
El sistema de cumplimiento mínimo que todo administrador debe tener (libro de actas, cuentas anuales depositadas, monitorización del patrimonio neto, protocolo ante dificultades financieras) y el seguro de Responsabilidad Civil de Administradores y Directivos (D&O) que transfiere parte del riesgo a la aseguradora.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Responsabilidad administrador sociedad España, LSC art 367, responsabilidad personal CEO, causa disolución, D&O seguro',
                'vote_score'        => 22,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte como ventaja competitiva: cómo el equipo de CS puede ser el diferenciador que retiene clientes',
                'description'       => 'Convierte el equipo de soporte de un centro de costes a un activo estratégico que genera retención, expansión y referidos. Con los procesos de soporte proactivo, el seguimiento de cuenta y cómo el equipo de CS puede identificar oportunidades de upsell sin convertirse en un equipo de ventas encubierto.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Success con experiencia transformando equipos de soporte reactivo en organizaciones de CS proactivo donde la atención al cliente se ha convertido en un diferenciador competitivo real que retiene clientes en mercados con alta competencia por precio.

Contexto:
- Tipo de empresa: [SaaS B2B / ecommerce / servicios / otro]
- Modelo actual de CS/soporte: [solo soporte reactivo / CS básico / queremos evolucionar a CS proactivo]
- El mayor problema de retención: [los clientes se van sin avisarnos / churn por bajo uso / clientes que no adoptan el producto / competencia agresiva en precio]

## Soporte como Ventaja Competitiva — [Empresa]

### 🧠 La diferencia entre soporte reactivo y Customer Success proactivo

**Soporte reactivo:**
```
El cliente tiene un problema → contacta → se resuelve.
El equipo espera que los problemas lleguen.
La métrica principal: tiempo de respuesta y CSAT.
Impacto en retención: limitado (resuelve problemas pero no crea valor adicional).
```

**Customer Success proactivo:**
```
El equipo monitoriza el uso del producto y contacta al cliente ANTES de que tenga el problema.
El equipo entiende el objetivo del cliente y trabaja activamente para que lo consiga.
La métrica principal: retención, expansión y NPS.
Impacto en retención: muy alto (el cliente siente que hay un aliado en su éxito).
```

**El cambio de pregunta:**
```
Soporte reactivo: "¿Qué problema tiene el cliente HOY?"
CS proactivo: "¿Qué necesita el cliente para alcanzar su objetivo con nuestro producto?"
```

### 🔍 El health score: el sistema de alerta temprana del churn

**Qué es el health score:**
```
Un indicador compuesto que predice la probabilidad de retención de cada cliente.
Combina señales de uso del producto, de satisfacción y de relación.

Componentes típicos del health score (ajusta los pesos a tu producto):
SEÑAL                              PESO    INDICADOR DE RIESGO
────────────────────────────────────────────────────────────────
Frecuencia de uso (DAU/WAU)         30%    Caída de >30% vs. mes anterior
Breadth de uso (features usadas)    20%    Usa <3 features de las 8 core
NPS / CSAT último touch             20%    NPS <7 / CSAT <3
Tiempo sin contacto con el equipo   15%    Sin conversación en >45 días
Engagement con materiales de ayuda  10%    Sin visitar el Help Center en 30 días
Renovación próxima                   5%    <60 días para la renovación

Health Score:
90-100: Promotor potencial. Candidato a upsell y referido.
70-89: Saludable. Seguimiento periódico.
50-69: En riesgo. Intervención activa esta semana.
<50: Riesgo de churn inminente. Escalación al manager de CS.
```

### 🤝 El QBR y el seguimiento proactivo que previene el churn

**El check-in mensual (para cuentas mid-market):**
```
No es una reunión de soporte. Es una reunión de éxito.
Agenda de 30 minutos:
[5 min] ¿Cómo va el negocio del cliente en relación al objetivo por el que contrató?
[10 min] ¿Están usando el producto como habían previsto? ¿Hay bloqueantes?
[10 min] Novedades del producto que son relevantes para su caso de uso.
[5 min] Próximos pasos.

El CS trae preparado: el health score del cliente, las features que no está usando, las novedades relevantes.
El cliente trae: sus objetivos del trimestre y los resultados que ha conseguido.
```

**El playbook del cliente en riesgo (health score <50):**
```
Paso 1 (inmediato): el CSM llama (no escribe) al contacto principal.
  "He estado revisando vuestro uso de [producto] y veo que ha bajado bastante.
   Quiero entender qué está pasando — ¿ha habido algún cambio en el equipo o en el proyecto?"

Paso 2 (si hay problema técnico): conecta con el equipo de soporte técnico en menos de 24h.

Paso 3 (si hay problema de adopción): sesión de re-onboarding personalizada.

Paso 4 (si hay problema de valor percibido): demuestra el ROI real con los datos del cliente.
  "Con los datos que tenemos de vuestro uso, podemos calcular que [producto] os ha ahorrado X horas/mes."

Paso 5 (si hay intención de no renovar): escalación al manager + propuesta de solución.
```

### 📊 Cómo el equipo de CS genera expansión sin parecer un equipo de ventas
El proceso natural de identificación de oportunidades de upsell durante las conversaciones de CS (el cliente menciona un nuevo objetivo que requiere más capacidad o una feature premium), el handoff al equipo de ventas y cómo medir la contribución del CS al revenue de expansión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Customer Success proactivo, health score cliente, churn prevention, soporte ventaja competitiva, CS B2B',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Mentalidad financiera del freelance: entiende tus números y toma el control de tu negocio',
                'description'       => 'Desarrolla la mentalidad financiera que todo freelance necesita para tomar decisiones de negocio informadas: entender la diferencia entre facturación y beneficio, gestionar el flujo de caja con estacionalidad, planificar los impuestos y construir la base económica para la estabilidad a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Financial Coach especializado en autónomos y freelancers con experiencia ayudando a profesionales independientes a pasar de "no entiendo mis números" a "tengo el control financiero de mi negocio", donde la claridad financiera ha transformado la relación con el dinero y la toma de decisiones de miles de freelancers.

Perfil:
- Tu situación financiera actual: [no sé exactamente cuánto gano / tengo meses buenos y meses malos y no sé cómo gestionarlos / no sé cuánto apartar para impuestos / quiero construir un colchón de seguridad]

## Mentalidad Financiera del Freelance — [Nombre]

### 🧠 El primer cambio mental: facturación ≠ dinero tuyo

**La confusión más frecuente:**
```
El freelance factura €5.000 en enero.
El freelance cree que tiene €5.000.
El freelance gasta como si tuviera €5.000.
En abril, le llega la declaración de IVA y IRPF.
El freelance descubre que de esos €5.000, una parte significativa no era suya.

La realidad de lo que es tuyo:
€5.000 facturados
- €882 de IVA que cobras pero que le pertenece a Hacienda (IVA 21% / 1.21)
  [si factura IVA; hay casos exentos]
= €4.118 de ingresos reales
- €617 de cotización a la Seguridad Social (cuota autónomo mínima aprox.)
= €3.501 antes de IRPF
- Estimación de IRPF (entre el 15-35% según los ingresos totales del año)
= Tu beneficio neto real

Si facturas €5.000 al mes sin separarlos, en abril te quedas sin caja para pagar a Hacienda.
```

### 🏦 El sistema de cuentas separadas para el freelance

**El método de las 4 cuentas:**
```
CUENTA 1 — Cuenta de operaciones (todo entra aquí):
Todos los cobros de clientes llegan aquí.
Desde esta cuenta, transfieres a las otras 3 en el día del cobro.

CUENTA 2 — Cuenta de impuestos (el dinero de Hacienda):
Al cobrar, transfiere inmediatamente:
→ El importe del IVA cobrado al cliente.
→ Una provisión para el IRPF (guía rápida: aparta entre el 20-30% de tus ingresos netos
  dependiendo de tu franja de ingresos; mejor consulta con tu gestor para el % exacto).

REGLA DE ORO: nunca toques la cuenta de impuestos.
No es tuya. Es de Hacienda. Solo está en tu banco temporalmente.

CUENTA 3 — Fondo de emergencia / irregularidades (el colchón):
Aparta el 10-15% de los ingresos hasta tener 3-6 meses de gastos fijos cubiertos.
Esta cuenta es para los meses malos, no para gastos discrecionales.

CUENTA 4 — Cuenta personal (lo que sí es tuyo):
Lo que queda después de apartar impuestos y colchón → esto es tu "salario" como freelance.
Transfiérete un "salario" fijo mensual aunque haya meses con más ingresos.
Los meses buenos engordan el fondo de emergencia. Los malos se cubren con él.
```

### 📊 El cuadro de mando financiero mensual del freelance (15 minutos al mes)

**Las 5 métricas que debes revisar cada mes:**
```
1. FACTURACIÓN DEL MES:
   ¿Cuánto facturaste (sin IVA)?
   ¿Está por encima o por debajo de tu objetivo mensual?

2. COBROS REALES DEL MES:
   ¿Cuánto has cobrado efectivamente (pueden no coincidir con la facturación)?
   ¿Hay facturas pendientes de cobro de más de 30 días?

3. GASTOS DEL MES:
   Gastos fijos (suscripciones, asesoría, seguros) + gastos variables del mes.
   ¿Hay gastos nuevos que no preveías?

4. RESULTADO DEL MES (beneficio antes de impuestos):
   Cobros - Gastos operativos.
   ¿Es suficiente para cubrir tu "salario" + impuestos + colchón?

5. SITUACIÓN DE CAJA:
   Saldo de la cuenta de operaciones + previsión de cobros próximas 4 semanas.
   ¿Habrá un mes difícil en las próximas semanas?
```

### 📅 La planificación fiscal del autónomo: cómo no tener sorpresas en la declaración
El calendario fiscal del autónomo en España (declaraciones trimestrales de IVA e IRPF, la declaración anual de la renta) con las fechas clave, las deducciones habituales que el freelance no aprovecha, y cuándo merece la pena contratar un gestor (spoiler: casi siempre desde el primer año).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Finanzas freelance, gestión dinero autónomo, impuestos freelance, cuenta separada freelance, flujo caja freelance',
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
