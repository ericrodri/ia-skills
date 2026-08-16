<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills49Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de reseñas y testimoniales online: más reseñas positivas en Google, Trustpilot y G2',
                'description'       => 'Diseña un sistema sistemático para conseguir más reseñas positivas en las plataformas que más impactan en tu negocio: Google Business Profile, Trustpilot y G2. Incluye los momentos óptimos de solicitud, las plantillas de comunicación y las estrategias para gestionar las reseñas negativas sin dañar la reputación.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en reputación online y social proof con experiencia ayudando a empresas de servicios, SaaS y retail a multiplicar su volumen de reseñas positivas y a convertir su reputación digital en un activo de adquisición de clientes, ya que el 92% de los consumidores lee reseñas antes de decidir y el 72% toma acción tras leer reseñas positivas.

Contexto:
- Tipo de negocio: [tienda online / SaaS B2B / restaurante / servicio local / software / otro]
- Plataformas prioritarias para tus clientes: [Google Business Profile / Trustpilot / G2 / Capterra / TripAdvisor / App Store]
- Estado actual de reseñas: [número de reseñas / puntuación media / última reseña recibida]
- Volumen de clientes mensuales o transacciones: [número aproximado]
- Principal obstáculo para conseguir reseñas: [los clientes no responden / no sé cómo pedirlas / miedo a las negativas / proceso demasiado manual]

## Sistema de Reseñas Online — [Empresa]

### Por qué la mayoría de empresas tienen pocas reseñas (y cómo resolverlo)

**El problema de la asimetría motivacional:**
```
MOTIVACIÓN PARA DEJAR UNA RESEÑA NEGATIVA:
→ El cliente insatisfecho quiere desahogarse y alertar a otros
→ La emoción negativa es un motivador poderoso e inmediato
→ Tasa de conversión espontánea: 15-25% de clientes muy insatisfechos dejan reseña

MOTIVACIÓN PARA DEJAR UNA RESEÑA POSITIVA:
→ El cliente satisfecho ya tiene lo que quería — no tiene motivo extra para actuar
→ Sin un trigger externo, la mayoría no lo hará aunque estén muy contentos
→ Tasa de conversión espontánea: 1-3% de clientes satisfechos dejan reseña sin pedírselo

LA SOLUCIÓN: El sistema de solicitud activa
→ Solicitar en el momento correcto → tasa de conversión del 15-30% de los solicitados
→ Solo esto multiplica por 5-10x el volumen de reseñas positivas sin cambiar nada del producto
```

---

### Los 5 momentos óptimos para pedir una reseña

```
MOMENTO 1 — POST-ENTREGA O POST-COMPLETADO (el más efectivo)
→ Justo cuando el cliente recibe el producto o completa el servicio
→ La satisfacción está en su punto más alto
→ Timing: 24-48h después de la entrega (no inmediatamente — necesitan tiempo para ver el valor)
→ Canal: email personalizado + SMS si tienes el número

MOMENTO 2 — DESPUÉS DEL PRIMER ÉXITO (para SaaS)
→ Cuando el usuario alcanza su primer "momento aha" con el producto
→ Herramientas: Intercom / Appcues muestran el modal en el momento correcto dentro del producto
→ Ejemplo: "Has completado tu primer informe. ¿Te está siendo útil? Cuéntaselo a otros."

MOMENTO 3 — TRAS UNA INTERACCIÓN DE SOPORTE RESUELTA POSITIVAMENTE
→ El cliente tenía un problema → lo resolviste → está en el momento de mayor gratitud
→ El agente cierra el ticket con un mensaje personalizado pidiendo la reseña
→ El cliente CSAT alto → enlace directo a Google/Trustpilot en el email de cierre

MOMENTO 4 — EN LA RENOVACIÓN O SEGUNDA COMPRA
→ Un cliente que renueva o compra de nuevo demuestra satisfacción con acciones
→ Es el momento ideal para convertir esa satisfacción en una reseña pública
→ El mensaje: "Lleváis X tiempo con nosotros / Es tu segunda compra — nos alegra mucho.
  ¿Podrías compartir tu experiencia con otros?"

MOMENTO 5 — EN EL NPS ALTO
→ Si ya mides NPS y un cliente puntúa 9-10 (promotor)
→ El paso inmediato: "Gracias por tu puntuación de 10. ¿Podrías dejar una reseña en Google?"
→ Un promotor de NPS tiene una tasa de conversión del 40-60% a reseña si se le pide inmediatamente
```

---

### Plantillas de solicitud de reseña por canal

**Plantilla de email de solicitud (post-entrega):**
```
ASUNTO: ¿Qué te ha parecido [producto/servicio]? (Solo 2 minutos)

Hola [Nombre],

Hace unos días recibiste [producto/completaste el servicio] y queríamos saber cómo te ha ido.

¿Te ha resultado útil? Si es así, nos haría mucho bien que lo contaras.

[BOTÓN: "Dejar mi reseña en Google"] → enlace directo a la ficha de Google Business

Solo lleva 2 minutos y ayuda a otras personas a encontrarnos.

Un abrazo,
[Nombre]
[Empresa]

P.D. Si algo no ha ido como esperabas, escríbeme directamente aquí: [email] para
resolverlo antes de que lo cuentes en ningún sitio. Tienes mi atención directa.
```

**Plantilla de SMS de solicitud (alternativa):**
```
Hola [Nombre], soy [nombre] de [empresa]. Tu [pedido/proyecto] está listo 🎉
Si estás contento con el resultado, estaríamos muy agradecidos con una reseña en Google:
[enlace corto] Gracias!
```

**Plantilla de mensaje para el equipo de soporte al cerrar un ticket positivo:**
```
Hola [Nombre],

Nos alegra mucho que tu duda se haya resuelto. Si tienes un minuto,
dejar una reseña en [plataforma] nos ayuda muchísimo para que más empresas
como la tuya puedan encontrarnos:

→ [Enlace directo a la plataforma]

¡Muchas gracias por tu confianza!
```

---

### El enlace directo a Google — la fricción que más reseñas mata

**Cómo generar el enlace directo para dejar una reseña en Google:**
```
PASO 1: Busca tu empresa en Google Maps
PASO 2: En tu ficha de empresa → "Obtener más reseñas" → copia el enlace
   (o ve a: https://search.google.com/local/writereview?placeid=[TU_PLACE_ID])

PASO 3: Acorta el enlace con Bitly o TinyURL para que no sea intimidante

POR QUÉ IMPORTA:
→ Si el cliente tiene que buscar tu empresa en Google → muchos abandonan en el proceso
→ El enlace directo lleva al modal de reseña en 1 click → conversión 3-5x mayor
→ En el email: botón con color destacado, no enlace de texto plano
```

---

### Estrategia de gestión de reseñas negativas

**El protocolo de respuesta a una reseña negativa:**
```
RESPONDE SIEMPRE Y EN MENOS DE 48 HORAS:
→ Una reseña negativa sin respuesta es peor que una con respuesta correcta
→ El 45% de los consumidores dice que tiene más probabilidad de visitar un negocio si el dueño
  responde a las críticas negativas de forma constructiva

ESTRUCTURA DE RESPUESTA:
1. Agradece por el feedback (sin sarcasmo ni defensividad)
2. Reconoce el problema sin excusas generales
3. Explica brevemente qué pasó (si es relevante) o pide disculpas directamente
4. Ofrece resolución: "Escríbenos a [email] para resolverlo"
5. Muestra lo que has cambiado si el problema fue sistemático

PLANTILLA:
"Hola [Nombre], gracias por tu feedback y sentimos mucho que tu experiencia no
haya sido lo que esperabas. [Reconocimiento específico del problema]. Nos ponemos
en contacto contigo directamente a través de [email/teléfono] para resolverlo.
Tu opinión nos ayuda a mejorar. — [Nombre del equipo]"

LO QUE NUNCA DEBES HACER:
❌ Discutir o contradecir la versión del cliente en público
❌ Ignorar la reseña sin responder
❌ Usar respuestas genéricas copiadas sin personalización
❌ Pedir que borre la reseña en la propia respuesta pública
❌ Ofrecer descuentos o compensaciones en público (puede incentivar otras reseñas falsas)
```

---

### KPIs de tu estrategia de reseñas

```
MÉTRICAS A TRACKEAR MENSUALMENTE:
→ Número de nuevas reseñas / mes por plataforma
→ Puntuación media actual vs. hace 3 meses
→ Tasa de conversión de solicitudes enviadas → reseñas recibidas
   (objetivo: >15% de los emails enviados se convierten en reseña)
→ Tiempo de respuesta a reseñas negativas (objetivo: <24 horas)
→ Distribución 5/4/3/2/1 estrellas: el porcentaje de 4+5 estrellas

HERRAMIENTAS DE MONITORIZACIÓN:
→ Google Alerts: recibe aviso cuando alguien menciona tu marca
→ Reputology / Birdeye / Podium: centraliza y automatiza la solicitud de reseñas
→ Google Business Profile: notificaciones de nuevas reseñas
→ Brandwatch / Mention: para empresas con mayor presencia online
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un sistema sistemático para conseguir más reseñas positivas online',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Design sprint técnico: spike y proof of concept para validar arquitectura en 1-2 días',
                'description'       => 'Planifica y ejecuta un spike técnico o PoC en 1-2 días para validar decisiones de arquitectura críticas antes de comprometer al equipo semanas de desarrollo. Incluye el template de definición del spike, los criterios de éxito y el formato del informe de resultados que guía la decisión final.',
                'prompt_content'    => <<<'PROMPT'
Eres un Tech Lead con experiencia en arquitectura de sistemas distribuidos y en gestionar la incertidumbre técnica de equipos ágiles, donde la diferencia entre un spike bien definido y uno sin límites es la diferencia entre 2 días de investigación que ahorran 6 semanas de refactoring o 2 semanas perdidas sin conclusión.

Contexto:
- Decisión técnica que necesitas validar: [elige la arquitectura de X / valida si Y puede manejar Z carga / evalúa si la librería A resuelve el problema B]
- Stack tecnológico del equipo: [lenguaje/framework/cloud]
- Tiempo disponible para el spike: [1 día / 2 días / 1 semana]
- Consecuencias si la decisión es incorrecta: [semanas de refactoring / cambio de proveedor / deuda técnica difícil de resolver]
- Número de personas disponibles para el spike: [1 / 2-3]

## Design Sprint Técnico — [Nombre del Spike]

### Qué es un spike y cuándo usarlo

**La distinción fundamental:**
```
SPIKE = investigación técnica timeboxed con el objetivo de reducir incertidumbre

CUÁNDO HACER UN SPIKE:
✅ Cuando el equipo tiene una historia de usuario que nadie sabe cómo estimar
✅ Cuando hay 2+ opciones técnicas válidas y no hay evidencia para elegir una
✅ Cuando una integración con un sistema externo tiene riesgo desconocido
✅ Cuando el rendimiento de una solución en producción real es incierto
✅ Cuando una librería o servicio de terceros nunca se ha usado en el equipo

CUÁNDO NO HACER UN SPIKE:
❌ Cuando la decisión ya se puede tomar con el conocimiento existente del equipo
❌ Cuando el coste de equivocarse es bajo y reversible
❌ Cuando el spike se convierte en "hagamos ya todo el sistema para estar seguros"
   (si el spike empieza a parecerse a una feature completa → está mal definido)
```

---

### Plantilla de definición del spike (antes de empezar)

**Document de spike: las 7 secciones obligatorias:**
```
═══════════════════════════════════════════════════════
SPIKE TÉCNICO: [Nombre descriptivo]
Fecha: [fecha inicio] — [fecha fin máxima]
Participantes: [nombres y roles]
Timebox: [horas máximas — no negociable]
═══════════════════════════════════════════════════════

1. CONTEXTO Y DECISIÓN A TOMAR:
   ¿Qué necesitamos decidir y por qué necesitamos datos para decidirlo?
   Ejemplo: "Necesitamos decidir si usamos WebSockets nativos o Socket.io para las
   notificaciones en tiempo real. El equipo no tiene experiencia con ninguno en producción
   a escala y hay 3 features del Q3 que dependen de esta decisión."

2. PREGUNTAS ESPECÍFICAS A RESPONDER:
   [Las preguntas que el spike DEBE responder — no el "todo lo que sería interesante saber"]
   Ejemplo:
   Q1: ¿Puede la infraestructura actual manejar 1.000 conexiones WebSocket concurrentes?
   Q2: ¿Socket.io añade latencia significativa vs. WebSockets nativos en nuestro caso de uso?
   Q3: ¿Cómo afecta el load balancing actual a las conexiones persistentes?

3. CRITERIOS DE ÉXITO (definidos ANTES de empezar):
   ¿Qué tiene que ser cierto para considerar el spike exitoso?
   Ejemplo:
   ✅ Tenemos datos de latencia de ambas opciones con 500 conexiones simultáneas
   ✅ Hemos validado que el load balancer puede hacer sticky sessions
   ✅ Tenemos código de ejemplo funcional de cada opción corriendo en local

4. LO QUE NO ES PARTE DEL SPIKE:
   Definir el scope negativo es tan importante como el positivo.
   Ejemplo: "No vamos a implementar la UI del sistema de notificaciones.
   No vamos a resolver el problema de persistencia de mensajes perdidos."

5. ENTREGABLE ESPERADO:
   ¿Qué documento/código/decisión sale del spike?
   Ejemplo: "Un documento de 1-2 páginas con: resultados de benchmark, riesgos
   identificados y recomendación de la opción técnica con justificación."

6. RIESGOS DEL SPIKE:
   ¿Qué puede hacer que el spike no llegue a conclusión?
   Ejemplo: "El entorno de staging no refleja la carga real de producción.
   Mitigación: usaremos k6 con la carga real de producción de los últimos 7 días."

7. DECISIÓN POSTERIOR AL SPIKE:
   ¿Quién toma la decisión final y con qué criterio?
   Ejemplo: "El Tech Lead y el PM deciden basándose en los resultados del spike en
   la reunión de retrospectiva del sprint."
```

---

### Estructura de ejecución del spike en 2 días

**Día 1 — Exploración y primer prototipo:**
```
MAÑANA (4 horas):
[0-1h] Setup: entorno limpio donde probar sin contaminar el código de producción
        → Crea un repositorio o directorio separado
        → No uses el mismo setup del proyecto principal para el spike
[1-4h] Prototipo mínimo de la opción más prometedora
        → El objetivo es que funcione lo suficiente para medir, no que sea código de producción
        → Documenta las decisiones que tomas y las dudas que surgen

TARDE (4 horas):
[0-3h] Prototipo de la opción alternativa (o profundización si solo hay una)
[3-4h] Primeras mediciones y benchmark básico
        → Documenta los números raw, aunque aún no sean concluyentes
```

**Día 2 — Validación y conclusión:**
```
MAÑANA (4 horas):
[0-2h] Benchmark real con carga realista
        → Herramientas según el contexto: k6, Apache Bench, Locust, Artillery
        → Simula la carga del peor caso, no el caso medio
[2-4h] Identificación de los edge cases y problemas no anticipados
        → "¿Qué pasa si...?" sistemático sobre los riesgos del spike

TARDE (4 horas):
[0-2h] Redacción del informe de resultados
[2-3h] Revisión con el equipo: ¿las preguntas del spike tienen respuesta?
[3-4h] Decisión y next steps
```

---

### Template del informe de resultados del spike

**El documento de 2 páginas que guía la decisión:**
```
═══════════════════════════════════════════════════════
RESULTADOS DEL SPIKE: [Nombre]
Autores: [nombres] | Fecha: [fecha] | Duración real: X horas
═══════════════════════════════════════════════════════

RESUMEN EJECUTIVO (5 líneas):
→ Pregunta principal: [la decisión que había que tomar]
→ Resultado: [opción recomendada o "no concluyente"]
→ Confianza en la recomendación: [alta / media / baja — y por qué]

RESPUESTAS A LAS PREGUNTAS DEL SPIKE:
Q1: [Pregunta] → [Respuesta con datos: "La latencia media fue 45ms vs 120ms"]
Q2: [Pregunta] → [Respuesta]
Q3: [Pregunta] → [Respuesta]

DATOS DEL BENCHMARK:
| Métrica        | Opción A | Opción B | Nuestro requisito |
|----------------|----------|----------|-------------------|
| Latencia media | Xms      | Yms      | <100ms            |
| Conexiones max | X        | Y        | >500              |
| Consumo memoria| XMB      | YMB      | <512MB            |

RIESGOS DESCUBIERTOS:
→ [Riesgo 1]: [descripción] → [mitigación propuesta]
→ [Riesgo 2]: [descripción] → [mitigación propuesta]

INCÓGNITAS QUE SIGUEN ABIERTAS:
→ [Lo que no pudimos validar y cómo afecta a la decisión]

RECOMENDACIÓN:
→ [Opción elegida] por las siguientes razones: [1, 2, 3]
→ Condicional: si [condición] cambia, revisar la decisión

PRÓXIMOS PASOS:
□ [Acción 1] — Responsable: [nombre] — Fecha: [fecha]
□ [Acción 2] — Responsable: [nombre] — Fecha: [fecha]
```

---

### Las señales de que el spike está fallando

```
SEÑAL 1 — EL SPIKE SE CONVIERTE EN IMPLEMENTACIÓN:
"Ya que estamos, implementemos también X" → STOP. El spike tiene que parar.
El código del spike es DESECHABLE — no entra en producción directamente.

SEÑAL 2 — EL TIMEBOX SE EXTIENDE SIN DECISIÓN:
Si llegáis al final del timebox sin respuestas → la conclusión ES la conclusión.
"No pudimos validarlo en 2 días" es una señal valiosa: el problema es más complejo de lo estimado.
Acción: presenta los hallazgos parciales y decide si ampliar el spike (con nueva definición)
o tomar la decisión con la información disponible.

SEÑAL 3 — LAS PREGUNTAS ESTABAN MAL DEFINIDAS:
Si los resultados no ayudan a decidir → las preguntas eran demasiado amplias o erróneas.
Siguiente spike (si es necesario): preguntas más específicas y criterios de éxito más concretos.

SEÑAL 4 — EL RESULTADO SE IGNORA:
El mayor desperdicio: hacer el spike y no incorporar sus conclusiones a la decisión de arquitectura.
Asegúrate de que los resultados del spike están documentados y accesibles para el equipo.
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Planificar y ejecutar spikes técnicos para validar decisiones de arquitectura',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design sprint completo: de la idea al prototipo validado con usuarios en 5 días',
                'description'       => 'Facilita el proceso de Design Sprint de Google Ventures en tu equipo: los 5 días, las actividades de cada jornada, las herramientas de facilitación y cómo adaptar el sprint para equipos reducidos o remotos. Incluye la guía completa con plantillas para cada ejercicio.',
                'prompt_content'    => <<<'PROMPT'
Eres un facilitador de Design Sprints con más de 40 sprints facilitados en sectores tan distintos como fintech, salud, educación y retail, donde el sprint ha servido tanto para validar nuevos productos desde cero como para tomar decisiones críticas de rediseño que hubiesen tardado meses en un proceso tradicional.

Contexto:
- Tipo de reto a resolver: [nuevo producto / rediseño de flujo crítico / nueva funcionalidad / entrada en nuevo mercado]
- Tamaño del equipo del sprint: [número de participantes y sus roles]
- Modalidad: [presencial / remoto / híbrido]
- Disponibilidad: [5 días completos / 4 días / versión reducida de 2-3 días]
- Estado del conocimiento del problema: [exploración inicial / problema bien definido / hay hipótesis claras]

## Design Sprint Completo — [Reto]

### El mapa del sprint: los 5 días en una vista

```
LUNES — Entender y definir:
Mañana: mapa del problema + "How Might We" + objetivo a largo plazo
Tarde: entrevistas con expertos + votación de puntos críticos a resolver

MARTES — Generar ideas:
Mañana: lightning demos de inspiración (benchmark) + ejercicios de calentamiento
Tarde: ideación individual — Crazy 8s y Solución sketch

MIÉRCOLES — Decidir:
Mañana: exposición de sketches + mapa de calor + speed critique
Tarde: votación, decisión y storyboard del prototipo

JUEVES — Prototipar:
Todo el día: construir el prototipo en alta fidelidad suficiente para el test
(Figma / InVision / Marvel — suficientemente real para que los usuarios reaccionen como si fuera real)

VIERNES — Validar:
Mañana: 5 entrevistas de usuario (1 hora cada una)
Tarde: síntesis de insights y decisión basada en evidencia
```

---

### LUNES — Entender: el mapa del problema

**Actividad 1: El objetivo a largo plazo y las preguntas de sprint (9:00 - 10:00)**
```
OBJETIVO A LARGO PLAZO:
Responde a: "¿Dónde queremos estar en 2-3 años si este proyecto tiene éxito?"
→ Formulación: "[Verbo aspiracional] + [para quién] + [resultado de negocio]"
→ Ejemplo: "Convertirnos en la app de gestión financiera preferida por autónomos en España"

PREGUNTAS DE SPRINT:
Convierte el objetivo en preguntas que podrían fallar:
"¿Podemos [lograr X del objetivo]?"
Ejemplo:
→ "¿Podemos hacer que un autónomo configure su primera factura en menos de 5 minutos?"
→ "¿Podemos hacer que el usuario confíe en nuestras categorías automáticas de gastos?"
→ Al final del sprint, habremos respondido sí o no a cada pregunta
```

**Actividad 2: El mapa del journey (10:00 - 11:30)**
```
CONSTRUCCIÓN DEL MAPA:
→ El facilitador dibuja en una pizarra/Miro un mapa simple izquierda → derecha
→ Actores (quién): los tipos de usuarios que aparecen en el proceso
→ Fases (qué hace): los pasos del journey del usuario
→ Nodos críticos (círculos): los momentos donde el usuario toma una decisión

EJEMPLO DE MAPA SIMPLIFICADO (App de facturación):
[Autónomo nuevo] → Descubre la app → Se registra → Crea primera factura → Envía al cliente → Cobra

→ El mapa lo pinta el facilitador escuchando al equipo
→ Debe caber en una página: si es demasiado complejo, estás intentando resolver demasiado
→ Al final del día el equipo vota: ¿en qué nodo del mapa nos enfocamos esta semana?
```

**Actividad 3: Entrevistas con expertos (13:30 - 16:30)**
```
ESTRUCTURA DE LA SESIÓN CON EXPERTOS:
→ 3-5 expertos internos: atención al cliente, ventas, datos, el CEO del área
→ 15-20 minutos cada uno, con preguntas del equipo
→ Mientras escuchan: cada participante escribe notas en formato "HMW" (How Might We)
   en post-its: "¿Cómo podríamos [oportunidad o reto que escucharon]?"

HMW EXAMPLES:
"¿Cómo podríamos hacer que el usuario no tenga que introducir los datos manualmente?"
"¿Cómo podríamos dar confianza sin que el usuario entienda la tecnología?"

VOTACIÓN FINAL DEL DÍA:
→ Agrupa los HMW por tema en el mapa
→ Cada participante tiene 2 puntos adhesivos para votar sus HMW favoritos
→ El Decider (el CEO/CPO) tiene 1 punto especial con más peso
→ El HMW con más votos en el nodo del mapa elegido = el foco del sprint
```

---

### MARTES — Generar ideas

**Lightning Demos (9:00 - 11:00) — buscar inspiración fuera del sector:**
```
PROCESO:
→ Cada participante investiga 1-2 soluciones inspiradoras (de cualquier industria)
→ 3 minutos por persona para presentar: el problema que resuelven + la gran idea que nos podemos robar
→ El facilitador captura las "grandes ideas" en el mapa

TIPOS DE FUENTES:
→ Competidores directos: cómo lo resuelven ellos
→ Sectores adyacentes: ¿cómo resuelve este problema la banca / el e-commerce / la salud?
→ Analogías: ¿qué industria resuelve un problema similar de forma brillante?
```

**Crazy 8s (14:00 - 14:30) — el ejercicio de ideación rápida:**
```
INSTRUCCIONES:
1. Cada participante dobla un papel en 8 secciones (o usa la plantilla de Miro)
2. 8 minutos para dibujar 8 ideas — 1 por sección, 1 minuto cada una
3. No hay que ser artista: rectángulos + texto + flechas es suficiente
4. El objetivo: salir de la primera idea obvia. Las ideas 5-8 suelen ser las mejores.
5. Nadie comparte mientras trabajan en silencio

REGLA DE ORO: Cantidad sobre calidad en Crazy 8s.
El objetivo es generar 8 posibilidades distintas, no 8 variantes de la misma idea.
```

**Solution Sketch (14:30 - 17:00) — el diseño detallado:**
```
INSTRUCCIONES:
→ Cada participante elige su mejor idea de los Crazy 8s (o combina varias)
→ 3 post-its o 3 secciones de papel: cada uno es un paso del flujo
→ El sketch debe ser anónimo (no se pone el nombre)
→ Añade: título en la parte superior, flecha de flujo entre pantallas, texto que explique
→ El criterio: ¿puede alguien entender la solución sin que yo la explique?

FORMATO RECOMENDADO:
[Pantalla 1 / Paso 1] → [Pantalla 2 / Paso 2] → [Pantalla 3 / Resultado]
Con notas adhesivas de color diferente que explican la lógica
```

---

### MIÉRCOLES — Decidir: el storyboard

**El museo de arte + mapa de calor (9:00 - 10:30):**
```
PROCESO:
→ Pega todos los sketches en la pared/Miro en silencio (todos al mismo tiempo)
→ 20 minutos de recorrido en silencio: cada participante pone un punto adhesivo en las partes
   que le parecen interesantes o que resuelven bien el problema
→ Al final: el mapa de calor visual muestra qué elementos generaron más resonancia
```

**Speed Critique (10:30 - 12:30):**
```
PROCESO (3-5 min por sketch):
→ El facilitador describe lo que ve (no el autor, para que sea anónimo)
→ El equipo da feedback: ¿qué funciona? ¿qué genera dudas?
→ Al final: el autor se revela y tiene 1 minuto para explicar algo que el equipo no entendió
→ Nadie puede defender su sketch durante la crítica — solo escuchar

Captura en el mapa: las ideas más prometedoras de cada sketch
```

**Votación y decisión del Decider (13:30 - 15:00):**
```
RUMBLE (si hay 2 soluciones incompatibles que ambas tienen apoyo):
→ Prototipa las 2 y testéalas en paralelo el viernes
→ Máximo 2 soluciones — más de 2 no es posible en 1 día de prototipado

STORYBOARD (15:00 - 17:30):
→ El equipo dibuja el storyboard del prototipo: 10-15 pantallas o pasos
→ Basado en la solución elegida + las mejores partes de los otros sketches
→ Suficiente detalle para que el prototipista pueda construirlo sin preguntas
→ El facilitador dibuja, el equipo dicta y decide
```

---

### JUEVES — Prototipar en alta fidelidad suficiente

**Reglas del prototipado del sprint:**
```
HERRAMIENTA RECOMENDADA: Figma (estándar actual) o Marvel
TIEMPO TOTAL: 7 horas de producción
ROLES:
→ Creador del prototipo: 1-2 personas con Figma (los más rápidos del equipo)
→ Redactor de contenido: 1 persona que escribe todos los textos de la UI
→ Recogida de activos: 1 persona que busca imágenes, iconos, logos
→ Organizador de entrevistas de mañana: 1 persona que confirma con los usuarios

NIVEL DE FIDELIDAD OBJETIVO:
→ Suficientemente realista para que el usuario reaccione "como si fuera real"
→ NO tiene que ser código ni funcionar — solo tiene que verse como si funcionara
→ El click en el prototipo debe funcionar para el flujo del test (hotspot linking en Figma)
→ Regla: si el usuario puede distinguir que es una maqueta → el fidelidad es insuficiente

PANTALLAS NECESARIAS:
→ 5-8 pantallas que cubran el flujo crítico del storyboard
→ Estados de error y éxito de los momentos clave
→ Una pantalla de inicio realista (no genérica)
```

---

### VIERNES — Validar con 5 usuarios reales

**La regla de los 5 usuarios:**
```
Jakob Nielsen demostró que 5 usuarios descubren el 85% de los problemas de usabilidad.
No necesitas 50 usuarios — necesitas 5 bien seleccionados.

PERFIL DE LOS USUARIOS:
→ Deben ser usuarios reales o muy próximos al ICP del producto
→ NO empleados de la empresa ni amigos del equipo
→ Fuentes de reclutamiento: Respondent.io, User Interviews, panel propio de clientes,
  LinkedIn Ads segmentado, reclutamiento por Typeform
→ Incentivo: 30-50€ por 60 min de entrevista
```

**Estructura de la entrevista de test (60 min):**
```
[0:00 - 0:10] Bienvenida y contexto:
"No estamos evaluando tus habilidades — evaluamos el diseño. No hay respuestas incorrectas.
Por favor, piensa en voz alta mientras usas el prototipo."

[0:10 - 0:15] Preguntas contextuales:
"¿Cómo gestionas actualmente [el problema que resuelve el prototipo]?"

[0:15 - 0:50] Test de tareas:
Presenta 3-5 tareas concretas ("Imagina que quieres [acción] — muéstrame cómo lo harías")
→ NO expliques cómo funciona — observa cómo lo intenta
→ No ayudes si se pierde — el momento de confusión ES el dato
→ Pregunta "¿Qué esperarías que pasara ahora?" cuando se atasca

[0:50 - 1:00] Preguntas de cierre:
"¿Qué cambiarías?", "¿Qué es lo que más te ha gustado?", "¿Lo usarías? ¿Por qué?"
```

**Síntesis de los 5 tests (15:30 - 17:30):**
```
MÉTODO DE SÍNTESIS:
→ El equipo observa todas las entrevistas en tiempo real desde otra sala (o grabadas)
→ Cada observador anota en post-its: [problema observado] o [aspecto positivo]
→ Síntesis: agrupa los post-its por tema
→ Los problemas que aparecen en 3/5 o más usuarios → problemas sistémicos (a resolver)
→ Los problemas de 1-2 usuarios → señales, no bloqueantes

DECISIÓN FINAL:
□ ¿El prototipo resuelve el problema que queríamos resolver?
□ ¿Qué hipótesis se confirmaron?
□ ¿Qué hipótesis se invalidaron?
□ ¿Cuáles son los 3 cambios más importantes antes de desarrollar?
□ Recomendación del equipo al Decider: ¿avanzamos / iteramos / pivotamos?
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Facilitar un Design Sprint de 5 días para ir de idea a prototipo validado',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta en canales indirectos: gestión de distribuidores, partners y resellers',
                'description'       => 'Diseña y gestiona un programa de canal indirecto que convierte a distribuidores, resellers y partners en una fuerza de ventas externa efectiva. Incluye la estructura del programa de partner, el enablement y el sistema de incentivos que mantiene al canal motivado y alineado con tus objetivos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Channel Sales Director con 10 años de experiencia construyendo y escalando programas de canal en empresas de software, hardware y servicios B2B en mercados de EMEA, donde la venta indirecta representa el 60-80% de la facturación y donde el reto no es encontrar partners sino conseguir que los partners existentes prioricen tu solución sobre las 20 alternativas que tienen en su catálogo.

Contexto:
- Tipo de producto/servicio: [software / hardware / servicios / plataforma]
- Canales indirectos actuales o deseados: [resellers / distribuidores / integradores de sistemas (SIs) / consultoras / marketplaces / agentes]
- Mercados objetivo del canal: [geografía / verticales / segmento de cliente]
- Estado del programa de canal: [no existe / canal existente sin programa formal / quiero escalar lo existente]
- Principal problema: [los partners no priorizan mi solución / no tenemos suficientes partners activos / los partners no tienen capacidad de vender / el canal compite con nuestra venta directa]

## Programa de Canal Indirecto — [Empresa]

### Los 4 tipos de canal y cuándo usar cada uno

```
TIPO 1 — RESELLER (revendedor):
→ Compra tu producto y lo revende añadiendo margen o servicios
→ Mejor para: productos maduros con precio definido y venta de alto volumen
→ Tu rol: márgenes atractivos + materiales de venta + soporte técnico
→ El riesgo: el reseller tiene decenas de productos — tú eres uno más del catálogo

TIPO 2 — VAR (Value Added Reseller):
→ Revende tu producto añadiendo servicios de integración, customización o soporte
→ Mejor para: software empresarial que requiere implementación
→ Tu rol: formación técnica + soporte en preventa + margen + acceso anticipado a producto
→ El riesgo: si el equipo técnico del VAR no conoce tu producto en profundidad, venden lo que conocen

TIPO 3 — AGENTE / REFERRAL PARTNER:
→ No revende — genera leads y oportunidades que cierras tú directamente
→ Mejor para: productos complejos donde el ciclo de venta necesita tu equipo
→ Tu rol: comisión por oportunidad cerrada (10-20% del ARR)
→ El riesgo: bajo alineamiento — el agente no lleva el ciclo de venta, solo refiere

TIPO 4 — SI / CONSULTORA:
→ Implementa tu solución como parte de proyectos más grandes de transformación digital
→ Mejor para: enterprise software con proyectos de implantación de 6-18 meses
→ Tu rol: certificación técnica + enablement + oportunidades de co-sell
→ El riesgo: la consultora puede convertirte en commodity si no cuidas la relación
```

---

### Estructura del programa de partner: los 3 niveles

**El modelo tiered (niveles) que motiva la inversión del partner:**
```
NIVEL 1 — REGISTERED PARTNER:
Requisitos: firma del contrato de partner, 1 persona certificada
Beneficios: acceso al portal de partners, materiales de marketing, soporte técnico básico
Descuento/margen: 15%

NIVEL 2 — SILVER PARTNER:
Requisitos: 3 personas certificadas, mínimo 2 clientes referenciados, facturación mínima de X€/año
Beneficios: + descuento mayor, + acceso a leads de la empresa, + soporte dedicado de Channel Manager
Descuento/margen: 25%

NIVEL 3 — GOLD PARTNER:
Requisitos: 5+ personas certificadas, 5+ clientes, facturación mínima de XX€/año,
plan de negocio conjunto aprobado
Beneficios: + rebates trimestrales, + co-marketing financiado, + acceso a beta de producto,
+ reuniones con el CPO, + preferencia en asignación de leads enterprise
Descuento/margen: 35% + rebate de 5% por objetivos cumplidos

DISEÑO DEL SISTEMA DE NIVELES:
→ Los requisitos deben ser alcanzables pero no triviales
→ El salto de nivel debe percibirse como un upgrade de negocio real para el partner
→ Los beneficios del nivel superior deben justificar el esfuerzo de los requisitos adicionales
→ Publica los criterios de nivel: la transparencia genera confianza y motivación
```

---

### El partner enablement: convertir al partner en un vendedor efectivo

**Los 3 pilares del enablement:**
```
PILAR 1 — CONOCIMIENTO DEL PRODUCTO:
→ Programa de certificación técnica: quien no está certificado no puede hacer demos ni propuestas
→ Formato: módulos online de 2-4 horas + examen → certificado digital que puedo mostrar a clientes
→ Frecuencia de actualización: cuando haya releases significativas (mínimo 2x/año)
→ Herramienta recomendada: Learnupon, TalentLMS, o módulo de LMS en el portal de partners

PILAR 2 — HABILIDADES DE VENTA:
→ El partner sabe usar el producto pero no sabe cómo venderlo a su cartera de clientes
→ Entrega: sesiones de "seller enablement" trimestrales (2-3 horas, presencial o virtual)
→ Contenido:
  - Propuesta de valor para cada vertical donde el partner tiene clientes
  - Las 5 objeciones más comunes y cómo responderlas
  - Discovery questions para identificar oportunidades
  - Historias de éxito de otros partners del mismo segmento

PILAR 3 — HERRAMIENTAS Y MATERIALES:
→ Portal de partners con acceso a: pitch deck actualizado, ROI calculator, demo environment,
  plantillas de propuesta, casos de éxito por vertical
→ El partner NO tiene que crear sus propios materiales desde cero
→ Los materiales deben ser co-branded: el logo del partner + tu logo
```

---

### El sistema de incentivos del canal que genera priorización

**El reto central: conseguir que el partner te ponga primero**

```
EL PROBLEMA:
Un reseller tiene 15-20 soluciones en su catálogo.
Cuando le entra un lead, tiene 3 opciones:
1. Vender la solución con la que más margen tiene
2. Vender la solución que sus comerciales conocen mejor
3. Vender la solución que tiene el mejor programa de soporte en preventa

PARA QUE TE ELIJAN:
→ Margen competitivo: no tiene que ser el más alto, sí tiene que ser justo
→ Soporte en preventa: el partner debe poder contar con tu equipo cuando lo necesite
→ Sistema de leads: dar leads al partner es el incentivo más poderoso
→ Visibilidad: el partner que te vende aparece en tu web como "partner certificado"

LOS INCENTIVOS QUE MÁS MUEVEN AL CANAL:
1. DEAL REGISTRATION: el partner que registra un deal primero tiene protección del margen completo.
   Si el partner no registra, otro partner (o el equipo directo) puede ganar el deal.
   → Genera urgencia y hace que el partner trabaje activamente tus oportunidades

2. REBATES POR OBJETIVOS: además del margen del deal, un rebate trimestral si alcanza el target.
   → Incentiva la planificación y la dedicación sostenida

3. MARKET DEVELOPMENT FUNDS (MDF): fondos de co-marketing para que el partner haga actividades
   de generación de demanda — seminarios, publicidad local, eventos.
   → Reduce el coste del partner y aumenta tu presencia en su mercado

4. SPIFF: incentivo puntual para comerciales individuales del partner.
   "El comercial que cierre más deals de [producto X] en Q3 gana [viaje / tablet / bono]."
   → Motiva al nivel del comercial individual, no solo de la empresa
```

---

### El Channel Manager: la clave de la relación

**Las 5 responsabilidades del Channel Manager:**
```
1. ACTIVACIÓN: convertir al partner registrado en un partner activo que genera pipeline
   Métrica: % de partners registrados con al menos 1 oportunidad activa / trimestre

2. BUSINESS PLANNING: desarrollar un plan de negocio conjunto con los Gold Partners
   Incluye: objetivos de ventas, actividades de marketing, formación necesaria, soporte

3. ENABLEMENT: asegurar que el equipo del partner tiene las certificaciones y herramientas
   Métrica: % de partners con al menos 1 persona certificada activa

4. PIPELINE MANAGEMENT: revisar el pipeline del partner semanalmente
   Herramienta: acceso al CRM compartido o informe semanal del partner
   Frecuencia: llamada de pipeline review semanal o quincenal con los Gold Partners

5. ESCALACIÓN: resolver los bloqueantes del partner antes de que pierda el deal
   El Channel Manager no cierra deals — facilita que el partner los cierre
   Cuándo escalar: cuando el deal necesita una demo con el CPO, un precio especial o una referencia
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar y gestionar un programa de canal indirecto con partners y distribuidores',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de integraciones y dependencias externas: APIs de terceros y reducción de riesgo',
                'description'       => 'Gestiona las integraciones con APIs de terceros y proveedores SaaS de forma que las dependencias externas no se conviertan en puntos únicos de fallo de tu producto. Incluye el mapa de dependencias, los patrones de resiliencia técnica y el proceso de evaluación y offboarding de proveedores.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia técnica gestionando productos con alta dependencia de integraciones externas: pasarelas de pago, APIs de datos, servicios de mensajería, proveedores de IA y plataformas SaaS, en empresas donde la caída de un proveedor externo ha generado incidentes P1 que afectaron a miles de usuarios y costaron contratos.

Contexto:
- Tipo de producto: [SaaS B2B / plataforma de datos / marketplace / app de consumidor]
- Número de integraciones externas actuales: [número aproximado de APIs/servicios de terceros]
- Integraciones más críticas (si las tienes identificadas): [lista de los proveedores clave]
- Principal problema con las integraciones actuales: [falta de visibilidad cuando fallan / un proveedor critico sin alternativa / dificultad para cambiar de proveedor / costes que escalan sin control]
- Objetivo: [mapear el riesgo / añadir resiliencia / evaluar cambio de proveedor / estandarizar el proceso de integración]

## Gestión de Dependencias e Integraciones Externas — [Producto]

### Paso 1: El mapa de dependencias — la visibilidad que no tienes

**El inventario de integraciones externas:**
```
TEMPLATE DE INVENTARIO DE INTEGRACIONES:

| Proveedor | Función | Criticidad | Plan B | Coste/mes | SLA garantizado | Fecha última revisión |
|-----------|---------|-----------|--------|-----------|----------------|----------------------|
| Stripe    | Pagos   | CRÍTICA    | PayPal  | Variable  | 99.99%         | [fecha]              |
| Twilio    | SMS     | ALTA       | Vonage  | 200€      | 99.95%         | [fecha]              |
| OpenAI    | IA      | MEDIA      | Anthropic| Variable | 99.9%          | [fecha]              |
| Mailchimp | Email mkt| BAJA      | Brevo   | 80€       | 99.5%          | [fecha]              |

CLASIFICACIÓN DE CRITICIDAD:
CRÍTICA: Si este proveedor cae, el producto deja de funcionar completamente
         → Requiere: circuit breaker + plan B probado + SLA contractual
ALTA: Si este proveedor cae, una función clave no está disponible
      → Requiere: degradación elegante + notificación de usuario
MEDIA: Si este proveedor cae, una función secundaria no funciona
       → Requiere: registro del fallo + fallback opcional
BAJA: Si este proveedor cae, hay impacto mínimo o temporal
      → Monitorización básica suficiente
```

---

### Paso 2: Patrones de resiliencia técnica por criticidad

**Patrón 1: Circuit Breaker (para integraciones CRÍTICAS)**
```
PROBLEMA QUE RESUELVE:
Sin circuit breaker: si la API externa está lenta o caída → tu app espera N segundos en cada
request → los usuarios ven timeouts → la carga se acumula en tu sistema → cascada de fallos.

CÓMO FUNCIONA:
ESTADO CERRADO (normal): los requests pasan normalmente
ESTADO ABIERTO (proveedor caído): los requests fallan inmediatamente sin intentar la API
  → Tu app puede responder con un fallback o un mensaje de estado degradado
  → Después de X segundos, el circuit breaker prueba de nuevo (estado semi-abierto)
ESTADO SEMI-ABIERTO: deja pasar 1 request de prueba
  → Si tiene éxito → vuelve a CERRADO
  → Si falla → vuelve a ABIERTO

IMPLEMENTACIÓN (ejemplo Node.js con opossum):
const CircuitBreaker = require('opossum');

const options = {
  timeout: 3000,        // falla si la API tarda más de 3 segundos
  errorThresholdPercentage: 50,  // abre el circuito si el 50% de requests fallan
  resetTimeout: 30000,  // intenta de nuevo después de 30 segundos
};

const breaker = new CircuitBreaker(callExternalAPI, options);
breaker.fallback(() => getCachedResponse()); // respuesta de fallback
```

**Patrón 2: Degradación elegante (para integraciones ALTAS)**
```
PRINCIPIO: Si el servicio externo falla, el usuario experimenta una versión reducida del producto
— no un error técnico incomprensible.

EJEMPLOS:
→ Búsqueda con IA degradada a búsqueda por keywords si la API de IA falla
→ Recomendaciones personalizadas → recomendaciones genéricas si el motor de ML falla
→ Validación de dirección en tiempo real → formulario sin validación si la API de geodatos falla

IMPLEMENTACIÓN:
try {
  const result = await callAIProvider(prompt);
  return { personalized: true, data: result };
} catch (error) {
  logger.error('AI provider failed, using fallback', error);
  const fallback = await getGenericRecommendations();
  return { personalized: false, data: fallback };
}

COMUNICACIÓN AL USUARIO:
→ "Algunas funciones pueden estar temporalmente limitadas" (banner no intrusivo)
→ No menciones al proveedor externo — es un problema tuyo, no del usuario
```

**Patrón 3: Retry con backoff exponencial**
```
CUÁNDO USARLO: Para fallos transitorios (la API falla 1 vez de cada 20 requests).
NO USARLO: Cuando el servicio está claramente caído — el retry empeora la situación.

function retryWithBackoff(fn, maxRetries = 3) {
  return async (...args) => {
    for (let attempt = 0; attempt <= maxRetries; attempt++) {
      try {
        return await fn(...args);
      } catch (error) {
        if (attempt === maxRetries) throw error;
        const delay = Math.pow(2, attempt) * 1000 + Math.random() * 1000;
        // Delay: 1s, 2s, 4s + jitter aleatorio para evitar avalanchas
        await new Promise(resolve => setTimeout(resolve, delay));
      }
    }
  };
}
```

---

### Paso 3: El proceso de evaluación de proveedores externos

**Scorecard para evaluar una nueva integración:**
```
DIMENSIÓN TÉCNICA (40 puntos):
□ Calidad de la documentación (0-10): ¿Puedes hacer una PoC en menos de 2 horas?
□ SDK y librerías disponibles (0-10): ¿Tienen cliente para tu stack tecnológico?
□ Entorno de sandbox (0-10): ¿Puedes probar sin afectar producción?
□ Uptime histórico verificable (0-10): ¿Publican su status page pública? ¿Cuál es el uptime de los últimos 12 meses?

DIMENSIÓN DE NEGOCIO (30 puntos):
□ Precio y estructura de costes (0-10): ¿Los costes escalan de forma predecible con el volumen?
□ Estabilidad del proveedor (0-10): ¿Cuánto tiempo llevan en el mercado? ¿Son rentables o dependen de rondas?
□ Posibilidad de cambio (0-10): ¿Qué tan difícil es salir si queremos cambiar? ¿Hay vendor lock-in?

DIMENSIÓN DE RIESGO (30 puntos):
□ SLA contractual (0-10): ¿Tienen SLA con penalización económica por incumplimiento?
□ Seguridad y cumplimiento (0-10): ¿Certificaciones SOC2, ISO27001, GDPR?
□ Alternativas disponibles (0-10): Si desaparecieran, ¿cuánto costaría migrar y cuánto tiempo?

PUNTUACIÓN:
>80: Verde — proceder con la integración
60-79: Amarillo — proceder con plan de mitigación del riesgo
<60: Rojo — buscar alternativas antes de integrar
```

---

### Paso 4: El proceso de offboarding de un proveedor

**Cuándo y cómo cambiar de proveedor sin incidentes:**
```
SEÑALES DE QUE ES HORA DE CAMBIAR DE PROVEEDOR:
→ El proveedor ha tenido 3+ incidentes de >1 hora en los últimos 6 meses
→ Los precios han aumentado >30% en un año sin mejora de valor equivalente
→ El soporte ya no responde en tiempos aceptables
→ Han anunciado que descontinúan el servicio o se han adquirido por una empresa menos confiable

PLAN DE MIGRACIÓN (checklist):
□ Fase 1 — Evaluación: seleccionar el nuevo proveedor con el scorecard anterior
□ Fase 2 — PoC: implementar el nuevo proveedor en paralelo con el actual (feature flag)
□ Fase 3 — Shadow mode: enrutar el 5% del tráfico al nuevo proveedor para comparar resultados
□ Fase 4 — Canary release: 20% → 50% → 100% en ventanas de bajo tráfico
□ Fase 5 — Cutover: deprecar el antiguo proveedor, mantener el código 30 días más
□ Fase 6 — Cleanup: eliminar el código del proveedor antiguo del codebase

TIEMPO ESTIMADO POR TIPO DE INTEGRACIÓN:
→ Pasarela de pago: 4-8 semanas
→ Proveedor de email/SMS: 2-4 semanas
→ API de datos con alto volumen: 8-16 semanas
→ Modelo de IA: 2-6 semanas (depende de la similitud de la API)
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestionar dependencias de APIs externas para reducir el riesgo de interrupciones del producto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programas de formación y desarrollo profesional que la gente realmente aprovecha',
                'description'       => 'Diseña un programa de Learning & Development (L&D) que los empleados utilicen de verdad, que retenga talento y que sea justificable ante la dirección con métricas de impacto. Incluye el diagnóstico de necesidades, el modelo 70-20-10, el catálogo de formación y cómo medir el retorno.',
                'prompt_content'    => <<<'PROMPT'
Eres una directora de Learning & Development con 10 años de experiencia diseñando programas de formación en empresas tecnológicas y de servicios, donde has aprendido que el 80% de los presupuestos de formación se gasta en iniciativas que los empleados asisten por obligación y olvidan a las 2 semanas, y el 20% restante en programas que realmente cambian comportamientos y retienen talento.

Contexto:
- Tamaño de la empresa: [número de empleados]
- Perfiles principales de la plantilla: [técnicos / comerciales / operaciones / mixto]
- Presupuesto disponible para L&D: [€/año o €/empleado/año]
- Estado actual del L&D: [sin programa formal / formación ad-hoc / quiero rediseñar lo existente]
- Principal objetivo del programa: [retención de talento / upskilling técnico / desarrollo de liderazgo / cumplimiento normativo]

## Programa de L&D que Genera Impacto — [Empresa]

### El modelo 70-20-10: la proporción que funciona

**La investigación que cambia cómo diseñas el L&D:**
```
70% — Aprendizaje en el trabajo (on-the-job):
→ La mayor parte del aprendizaje ocurre haciendo, no estudiando
→ Proyectos desafiantes, nuevas responsabilidades, rotaciones internas
→ Tu rol como L&D: facilitar que los managers asignen proyectos de aprendizaje deliberado

20% — Aprendizaje social (de otros):
→ Mentoring, coaching, feedback de pares, comunidades de práctica
→ Mucho más efectivo que el training formal para cambiar comportamientos
→ Tu rol: crear las estructuras (programa de mentoring, peer learning circles)

10% — Formación formal (cursos, talleres, libros):
→ La parte donde se gasta el 80% del presupuesto — pero es solo el 10% del impacto real
→ La formación formal funciona cuando prepara al empleado para aplicarlo en el 70%
→ Tu rol: seleccionar la formación correcta en el momento correcto

LA IMPLICACIÓN PARA EL PRESUPUESTO:
→ Invierte más en crear estructuras de aprendizaje en el trabajo que en cursos
→ Los cursos más efectivos son los que tienen práctica inmediata y seguimiento posterior
```

---

### Diagnóstico de necesidades: antes de comprar ningún curso

**El proceso de Training Needs Assessment (TNA) en 4 semanas:**
```
SEMANA 1 — ANÁLISIS DE BRECHAS DE DESEMPEÑO:
→ Recopila datos de evaluaciones de desempeño del último año: ¿qué competencias aparecen como áreas de mejora?
→ Habla con los managers: ¿qué habilidades necesita el equipo que hoy no tiene?
→ Analiza los objetivos estratégicos de la empresa: ¿qué capacidades requieren los OKRs del próximo año?

SEMANA 2 — ENCUESTA A EMPLEADOS:
→ 5-7 preguntas sobre necesidades de desarrollo (nunca un formulario largo que nadie completa)
→ Preguntas clave:
  "¿En qué área de tu rol te gustaría mejorar en los próximos 12 meses?"
  "¿Qué aprendiste en el último año que más ha impactado en tu trabajo?"
  "¿Qué formato de formación prefieres? (cursos online / talleres presenciales / mentoring / aprender leyendo)"
→ Envío: anónimo + 5 minutos máximo + comunicación del para qué

SEMANA 3 — ENTREVISTAS CON STAKEHOLDERS:
→ 1 hora con el CEO/CPO/CHO: qué capacidades estratégicas necesita la empresa
→ 30 min con 3-5 managers: qué necesitan sus equipos que hoy no tienen
→ 30 min con 3-5 empleados de alto potencial: qué quieren desarrollar

SEMANA 4 — SÍNTESIS Y PRIORIZACIÓN:
→ Cruza: necesidades de la empresa + necesidades individuales + brechas de desempeño
→ Los puntos de convergencia → el catálogo del programa
→ Resultado: un documento de 1-2 páginas con las 3-5 áreas de desarrollo prioritarias
```

---

### El catálogo de formación: las categorías y los formatos

**Las 4 categorías que todo catálogo de L&D debería cubrir:**
```
CATEGORÍA 1 — COMPETENCIAS TÉCNICAS (Hard Skills):
→ Específicas de cada rol: Excel para finanzas, SQL para datos, Figma para diseño
→ Formato más efectivo: cursos de plataformas especializadas con práctica guiada
→ Plataformas recomendadas: Coursera for Business, LinkedIn Learning, Udemy Business, Pluralsight (tech)
→ Presupuesto sugerido: 40% del total de formación formal

CATEGORÍA 2 — COMPETENCIAS DE LIDERAZGO (Management Skills):
→ Para managers existentes y futuros líderes identificados
→ Temas: feedback efectivo, gestión de conflictos, delegación, comunicación difícil
→ Formato más efectivo: talleres presenciales con role-playing + coaching posterior
→ Presupuesto sugerido: 30% del total

CATEGORÍA 3 — COMPETENCIAS TRANSVERSALES (Power Skills):
→ Comunicación, presentaciones, trabajo en equipo, pensamiento crítico
→ Valiosas para todos los niveles
→ Formato más efectivo: taller práctico de medio día + práctica en el trabajo real
→ Presupuesto sugerido: 15% del total

CATEGORÍA 4 — DESARROLLO DE CARRERA (Career Development):
→ Exploración de carrera, planificación, habilidades del siguiente nivel
→ Especialmente importante para la retención del talento joven
→ Formato más efectivo: mentoría + plan de desarrollo individual
→ Presupuesto sugerido: 15% del total
```

---

### El programa de mentoring interno: el mayor ROI con el menor coste

**Estructura de un programa de mentoring efectivo:**
```
DURACIÓN: 6-12 meses
FRECUENCIA: 1 sesión mensual de 60 minutos (mínimo)
MATCHING: basado en objetivos de desarrollo, no en afinidad personal o jerarquía directa

PROCESO DE MATCHING:
1. El mentee completa un perfil: "Objetivo de desarrollo: quiero mejorar en X para poder Y"
2. El mentor completa un perfil: "Puedo aportar experiencia en X, Y, Z"
3. L&D sugiere 2-3 matches posibles y el mentee elige

ESTRUCTURA DE LA PRIMERA SESIÓN:
→ El mentee explica su contexto y sus objetivos de desarrollo
→ El mentor comparte sus expectativas y estilo
→ Acuerdan: frecuencia, formato, temas prioritarios

ESTRUCTURA DE LAS SESIONES REGULARES:
[0-5 min] Update desde la última sesión: ¿qué probé? ¿qué pasó?
[5-45 min] Tema principal de la sesión (propuesto por el mentee)
[45-60 min] Compromisos para la próxima sesión

SEGUIMIENTO DE L&D:
→ Encuesta de satisfacción a mitad (mes 3) y al final (mes 6/12)
→ Pregunta a managers si perciben cambio en las áreas de desarrollo acordadas
→ NPS del programa: ¿lo recomendarías a un compañero?

ESCALA: 1 coordinator de L&D puede gestionar hasta 30 pares de mentoring con herramientas básicas (formularios + calendario compartido)
```

---

### Cómo medir el impacto del L&D: el modelo Kirkpatrick

**Los 4 niveles de medición:**
```
NIVEL 1 — REACCIÓN (inmediata):
Pregunta: ¿Qué tan satisfecho estás con la formación?
Herramienta: encuesta post-formación (1-5 estrellas + 2 preguntas abiertas)
Benchmark: >4/5 para cualquier formación del catálogo

NIVEL 2 — APRENDIZAJE (1-2 semanas después):
Pregunta: ¿Qué aprendiste que antes no sabías o podías hacer?
Herramienta: mini-test o autoevaluación pre/post
Benchmark: mejora del 20%+ en la autoevaluación de la competencia

NIVEL 3 — COMPORTAMIENTO (2-3 meses después):
Pregunta: ¿Has aplicado lo aprendido en tu trabajo? ¿Cómo?
Herramienta: encuesta al empleado + encuesta al manager
Benchmark: el 60%+ de los participantes reportan cambio de comportamiento aplicado

NIVEL 4 — RESULTADOS (6-12 meses después):
Pregunta: ¿Ha mejorado algún KPI de negocio gracias a este programa?
Herramienta: seguimiento de métricas vinculadas (retención de empleados, productividad, NPS interno)
Benchmark: correlación positiva entre participación en el programa y mejora de métricas clave

CONSEJO PRÁCTICO:
→ Mide siempre el nivel 1 y el nivel 2 — son rápidos y dan señales de calidad
→ Mide el nivel 3 para los programas más costosos
→ El nivel 4 es el santo grial — intenta medirlo al menos en 1 programa por año como caso de estudio
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar programas de L&D que los empleados aprovechan y que retienen talento',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de cuentas a pagar: optimiza el DPO sin dañar las relaciones con proveedores',
                'description'       => 'Optimiza la gestión de cuentas a pagar (AP) para mejorar el Days Payable Outstanding sin deteriorar las relaciones con proveedores clave. Incluye las políticas de pago, las técnicas de negociación de términos y cómo aprovechar los descuentos por pronto pago cuando el coste financiero lo justifica.',
                'prompt_content'    => <<<'PROMPT'
Eres un director financiero con experiencia en la optimización del capital circulante (working capital) en empresas manufactureras, de distribución y de servicios, donde la gestión inteligente de los plazos de pago a proveedores ha liberado hasta 2M€ de caja en empresas de 10M€ de facturación sin generar ninguna fricción con la cadena de suministro.

Contexto:
- Sector de la empresa: [manufactura / distribución / servicios / retail / otro]
- Facturación anual: [€ aproximado]
- DPO actual: [días de media de pago a proveedores o "no lo medimos"]
- Número de proveedores activos: [número aproximado]
- Principal problema en AP: [falta de control de vencimientos / pagos fuera de plazo que dañan la relación / no aprovechamos los descuentos por pronto pago / los términos de pago no están negociados]

## Gestión de Cuentas a Pagar (AP) — [Empresa]

### El DPO como palanca de working capital

**Qué es el DPO y por qué importa:**
```
DPO = (Cuentas a pagar / Coste de ventas) × 365

Interpretación:
→ DPO de 30 días: pagas a los 30 días de recibir la factura
→ DPO de 60 días: pagas a los 60 días
→ Un DPO más alto = más días que financian tus proveedores tu actividad = menos necesidad de crédito bancario

EJEMPLO DE IMPACTO FINANCIERO:
Empresa con 10M€ de compras anuales:
→ DPO actual de 30 días → Cuentas a pagar: 10M/365 × 30 = 822k€
→ DPO objetivo de 45 días → Cuentas a pagar: 10M/365 × 45 = 1.233k€
→ Liberación de caja: 1.233k€ - 822k€ = 411k€ adicionales de financiación gratuita

Ese dinero extra puede:
→ Invertirse en producción o stock
→ Reducir la línea de crédito bancaria (ahorrando intereses)
→ Mejorar la tesorería en momentos de tensión de caja
```

**El DPO objetivo por sector (benchmarks):**
```
Manufactura: 45-60 días
Distribución / retail: 30-45 días
Servicios profesionales: 30-45 días
Gran distribución (Mercadona, IKEA): 60-90 días
Construcción: 60-120 días

Si estás significativamente por debajo del benchmark de tu sector → hay margen de mejora
Si estás por encima → cuidado: puede generar tensión con proveedores o incumplir la ley
```

---

### Las 3 estrategias para mejorar el DPO

**Estrategia 1: Negociación de términos de pago en el contrato**
```
CUÁNDO HACERLO:
→ Al iniciar la relación con un nuevo proveedor
→ En la renovación anual de contratos
→ Cuando el proveedor necesita algo de ti (nuevo pedido, aumento de volumen)

CÓMO NEGOCIAR:
→ Parte de términos generosos (60-90 días) y deja margen para ceder
→ Ofrece algo a cambio: mayor volumen comprometido, pagos más previsibles, reducción de devoluciones
→ La contrapartida más efectiva: "Te pagamos a 60 días pero te garantizamos X€ de pedidos al trimestre"

TIPOS DE TÉRMINOS A NEGOCIAR:
→ Net 30/45/60/90: pago completo en X días desde la factura
→ 2/10 Net 30: 2% de descuento si pagas en 10 días, 30 días sin descuento
→ EOM (End of Month): pagas a fin del mes en que se recibe la factura (o fin del mes siguiente)
→ MFI (Month Following Invoice): pago a finales del mes siguiente a la fecha de factura

CÓMO ABORDAR LA CONVERSACIÓN:
"Estamos revisando nuestros términos de pago con todos los proveedores para estandarizar
el proceso. Nos gustaría avanzar a 60 días netos. ¿Cómo podemos hacer que esto sea
viable para vosotros?"
```

**Estrategia 2: Optimización del proceso interno de AP**
```
EL CICLO DE APROBACIÓN COMO FUENTE OCULTA DE DÍAS:
→ Una factura con vencimiento a 45 días que tarda 15 días en ser aprobada internamente
  → el pago efectivo se retrasa → el proveedor lo percibe como retraso → relación dañada

OPTIMIZACIÓN DEL PROCESO:
□ Factura recibida → captura inmediata en el ERP (automatización con OCR si es posible)
□ Matching automático: factura ↔ pedido ↔ albarán (three-way matching)
□ Flujo de aprobación definido: quién aprueba por rango de importe, plazo máximo de respuesta
□ Regla de los 5 días: la aprobación debe ocurrir dentro de los 5 días de recibir la factura
□ Calendario de pagos semanal: los pagos se agrupan en 1-2 fechas fijas de la semana
  (no pagar según van llegando las facturas — genera ineficiencia y errores)

HERRAMIENTAS DE AP AUTOMATION:
→ Para empresas <50M€: Sage, Holded, QuickBooks con módulo AP
→ Para empresas >50M€: SAP Ariba, Oracle AP, Coupa, Tipalti
→ Para integración de facturas: Rossum, Hypatos (OCR + IA para captura de datos)
```

**Estrategia 3: Aprovechamiento de descuentos por pronto pago**
```
CUÁNDO VALE LA PENA PAGAR ANTES:
El descuento de pronto pago solo tiene sentido si el coste de financiación alternativa
es más alto que el descuento equivalente en tasa anual.

CÁLCULO DE LA TASA ANUAL DEL DESCUENTO (APR):
Descuento ofrecido: 2/10 Net 45 (2% si pagas en 10 días, 45 días sin descuento)
Días de financiación ganados: 45 - 10 = 35 días
Coste anualizado: (2% / 98%) × (365 / 35) = 0.02041 × 10.43 = 21.3% APR

REGLA DE DECISIÓN:
→ Si tu coste de crédito (tipo de interés de la línea de crédito) es < 21.3% → NO aproveches el descuento
→ Si tu coste de crédito es > 21.3% → SÍ, aprovecha el descuento

EN PRÁCTICA:
Los descuentos del tipo "2/10 Net 30" suelen equivaler al 36% APR — siempre conviene
cuando el dinero está disponible y el coste financiero es inferior.
```

---

### El mapa de proveedores: segmentación por impacto en el negocio

**Clasificación ABC para gestionar el riesgo relacional:**
```
CATEGORÍA A — PROVEEDORES ESTRATÉGICOS (top 20% por impacto en el negocio):
→ Su fallo de suministro o relación deteriorada afecta directamente a la operación
→ Política de pago: pago puntual garantizado, incluso si implica financiarse
→ Relación: revisión trimestral, contacto directo con la dirección, acuerdos a largo plazo
→ Nunca estresar la relación con estos proveedores por ganar 15 días de DPO

CATEGORÍA B — PROVEEDORES IMPORTANTES (siguiente 30%):
→ Impacto moderado en el negocio, con alternativas posibles pero con coste de cambio
→ Política de pago: cumplir los términos acordados con precisión
→ Negociar extensión de plazos cuando haya oportunidad en la renovación

CATEGORÍA C — PROVEEDORES ESTÁNDAR (50% restante):
→ Fácilmente sustituibles, impacto bajo en el negocio
→ Política de pago: maximizar los términos (pagar en el último día del vencimiento)
→ Negociar activamente extensión de plazos — si no aceptan, evaluar alternativas
```

---

### KPIs de la gestión de AP

```
MÉTRICAS PRINCIPALES:
→ DPO actual vs. objetivo (medición mensual)
→ % de facturas pagadas a tiempo (sobre el vencimiento acordado)
→ % de facturas pagadas con retraso > 15 días (señal de riesgo relacional)
→ % de facturas con descuento por pronto pago aprovechado vs. disponible
→ Tiempo medio de aprobación interna de facturas (en días)
→ Número de disputas de facturas abiertas (señal de proceso roto)

REPORTING MENSUAL AL CFO:
┌─────────────────────────────────────────────────────┐
│ DPO actual: X días | Objetivo: Y días               │
│ Cuentas a pagar totales: €X (vs. mes anterior: ±€Y) │
│ Facturas vencidas no pagadas: €X (señal de alerta)  │
│ Facturas pagadas con retraso: X% (objetivo: <5%)    │
│ Descuentos pronto pago aprovechados: €X             │
└─────────────────────────────────────────────────────┘
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimizar la gestión de cuentas a pagar para mejorar el working capital',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Registro de marca en España y Europa: proceso, costes y estrategia ante OEPM y EUIPO',
                'description'       => 'Navega el proceso de registro de marca en España (OEPM) y en Europa (EUIPO) con una estrategia clara: qué clases registrar, cómo realizar la búsqueda de anterioridades, qué hacer ante una oposición y cuándo es necesario ir al mercado internacional. Incluye los plazos, los costes reales y las decisiones estratégicas clave.',
                'prompt_content'    => <<<'PROMPT'
Eres un agente de la propiedad industrial con 15 años de experiencia asesorando a startups, PYMES y marcas de consumo en el registro de marcas ante la OEPM, la EUIPO y la OMPI, habiendo gestionado desde registros rutinarios hasta oposiciones complejas y cancelaciones por no uso.

Contexto:
- Nombre o signo a registrar: [nombre / logo / combinación]
- Sector/actividad de la empresa: [describe brevemente a qué se dedica]
- Mercados objetivo: [solo España / España + Europa / Europa + EEUU / global]
- Estado actual: [nunca se ha registrado / registro caducado / quiero ampliar la protección existente]
- Presupuesto disponible: [<500€ / 500-2.000€ / 2.000-5.000€ / sin restricción]

## Estrategia de Registro de Marca — [Nombre de la marca]

### Los conceptos clave antes de empezar

**Qué es una marca y qué puede ser objeto de registro:**
```
TIPOS DE SIGNOS REGISTRABLES (artículo 4 Ley de Marcas):
✅ Nombre: palabra o combinación de palabras (la más frecuente)
✅ Logo o diseño: representación gráfica (sin palabras)
✅ Marca mixta: nombre + logo combinados
✅ Marca tridimensional: la forma del producto o envase (Coca-Cola, Toblerone)
✅ Marca sonora: un jingle o sonido identificativo
✅ Marca de posición: el logo en una posición específica del producto

REQUISITOS PARA REGISTRAR:
1. Distintividad: capaz de distinguir tu producto/servicio del de otros
   ❌ No registrable: términos genéricos ("Café" para una cafetería), descriptivos ("Rápido" para mensajería)
   ❌ No registrable: términos geográficos descriptivos ("Ibérico" para productos de Extremadura)
   ✅ Registrable: términos inventados, sugestivos o arbitrarios ("Apple" para tecnología, "Google", "Zara")

2. No debe colisionar con marcas anteriores registradas o en uso
   → La búsqueda de anterioridades es obligatoria antes de invertir en el registro
```

---

### Paso 1: La búsqueda de anterioridades — lo que debes hacer antes de registrar

**Por qué la búsqueda es crítica:**
```
CONSECUENCIAS DE NO BUSCAR:
→ Inviertes tiempo y dinero en el registro → recibes una oposición → el registro se deniega
→ Lanzas el negocio con una marca → recibes carta de cese y desistimiento de una empresa con marca anterior
→ Tienes que cambiar el nombre cuando ya tienes clientes, dominio, redes y materiales

DÓNDE BUSCAR (herramientas gratuitas):
→ OEPM (España): https://www.oepm.es/es/marcas_y_nombres_comerciales/bases_de_datos/
→ EUIPO (Europa): https://euipo.europa.eu/eSearch/ — incluye todas las marcas de la UE
→ OMPI / WIPO (internacional): https://branddb.wipo.int/
→ Google / búsqueda web: ¿existe alguien usando el nombre aunque no esté registrado?

QUÉ BUSCAR:
→ El mismo nombre exacto en las clases que vas a solicitar
→ Marcas similares fonética o visualmente → el test no es solo ortográfico
→ Marcas con "riesgo de confusión" para el consumidor medio → criterio subjetivo que evalúa la OEPM

CUÁNDO CONTRATAR A UN AGENTE PARA LA BÚSQUEDA:
→ Cuando el nombre tiene riesgo (es descriptivo, muy corto, o hay muchas marcas en el sector)
→ Cuando el mercado objetivo incluye Europa (los 27 países tienen sus propias marcas nacionales)
→ Coste de una búsqueda profesional: 200-500€ — el mejor dinero que puedes gastar antes del registro
```

---

### Paso 2: Las clases de Niza — cómo elegir correctamente

**El sistema de clasificación internacional:**
```
La clasificación de Niza tiene 45 clases: 34 de productos y 11 de servicios.
Debes registrar en las clases que corresponden a tu actividad actual Y a la que prevés tener.

CLASES MÁS FRECUENTES EN TECH Y STARTUPS:
Clase 35: Servicios de publicidad, gestión empresarial, CRM, SaaS de gestión, marketplace
Clase 38: Telecomunicaciones, plataformas de comunicación online, chat
Clase 42: Diseño y desarrollo de software, SaaS técnico, cloud computing, IA, ciberseguridad
Clase 41: Educación, formación, e-learning, publicación de contenido
Clase 36: Servicios financieros, seguros, fintech, pagos

CLASES FRECUENTES EN CONSUMO:
Clase 25: Ropa y calzado
Clase 30: Café, té, especias, panadería, repostería
Clase 43: Restaurantes, catering, alojamiento temporal
Clase 44: Servicios médicos y veterinarios, belleza

REGLA ESTRATÉGICA:
→ Registra en tu clase principal + cualquier clase en la que preveas expandirte en 3-5 años
→ NO registres en todas las clases sin discriminación — es caro y puede dar imagen de mala fe
→ Registra al menos las clases donde un competidor podría causarte daño con una marca colisionante
```

---

### Paso 3: El proceso de registro — OEPM vs. EUIPO

**Registro en España (OEPM):**
```
PROCESO:
1. Solicitud online en sede.oepm.es → eliges clases → pagas tasas
2. La OEPM publica la marca en el Boletín Oficial de Propiedad Industrial (BOPI)
3. Periodo de oposición: 2 meses desde la publicación
4. Si no hay oposición → la marca se registra → certificado de registro
5. Si hay oposición → proceso administrativo (puedes defenderte o negociar)

TASAS OFICIALES 2025 (aproximadas):
→ 1 clase: 148,14€ (forma electrónica)
→ Cada clase adicional: +20,53€
→ Ejemplo: 3 clases → 148,14 + 20,53 + 20,53 = 189,20€

PLAZOS:
→ Publicación en el BOPI: 3-4 meses desde la solicitud
→ Concesión (si no hay oposición): 6-9 meses totales
→ Duración del registro: 10 años, renovable indefinidamente

REPRESENTACIÓN:
→ Personas físicas y jurídicas con domicilio en España: pueden solicitarlo sin representante
→ Empresas extranjeras: necesitan representante autorizado (agente de la PI)
```

**Registro comunitario (EUIPO) — protección en los 27 estados de la UE:**
```
PROCESO:
→ Mismo nombre, mismas clases → protección en toda la UE en un solo trámite
→ La solicitud se presenta ante la EUIPO (Alicante)
→ Examen formal + búsqueda de anterioridades en marcas comunitarias
→ Publicación en la Gaceta de Marcas de la EUIPO → 3 meses de oposición
→ Si no hay oposición → registro comunitario

TASAS EUIPO 2025 (aproximadas):
→ 1 clase: 850€ (online)
→ Segunda clase: +50€
→ Tercera clase y siguientes: +150€ cada una
→ Ejemplo: 3 clases → 850 + 50 + 150 = 1.050€

VENTAJA CLAVE:
→ Un registro comunitario sustituye a registros nacionales en todos los países de la UE
→ Más barato que registrar en 5-6 países individualmente
→ Si la empresa tiene actividad comercial o presencia digital en varios países de la UE: ir directo a EUIPO

DESVENTAJA:
→ Una marca nacional anterior en cualquier país de la UE puede bloquear el registro
→ Si hay conflicto en un país → el registro comunitario puede ser inválido en ese país o en toda la UE
```

---

### Cómo responder a una oposición

**El proceso de oposición:**
```
QUIÉN PUEDE OPONERSE:
→ El titular de una marca anterior registrada (nacional o comunitaria)
→ El titular de un nombre comercial notorio
→ En casos especiales: el titular de una marca sin registrar pero notoriamente conocida

QUÉ PUEDES HACER:
OPCIÓN 1 — DEFENDERTE:
→ Alegar que no hay similitud suficiente entre las marcas
→ Alegar que los productos/servicios son distintos y no hay riesgo de confusión
→ Si el oponente no usa activamente su marca en los últimos 5 años: solicitar la prueba de uso

OPCIÓN 2 — NEGOCIAR UNA COEXISTENCIA:
→ Contactar al oponente y acordar una limitación del ámbito de uso
→ Ejemplo: "acordamos que mi marca solo se usará en el sector X, no en el sector Y donde opera el oponente"
→ Herramienta: acuerdo de coexistencia de marcas firmado por ambas partes

OPCIÓN 3 — CEDER (si la marca del oponente es muy similar y tiene mucho uso):
→ Modifica el nombre o el logo para diferenciarte suficientemente
→ Ceder antes es menos costoso que perder después de meses de proceso

COSTE DE UNA OPOSICIÓN CONTESTADA:
→ Con agente de la PI: 800-3.000€ (dependiendo de la complejidad)
→ Sin agente: posible pero el riesgo de cometer errores procesales es alto
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Registrar una marca en España y Europa con la estrategia correcta de clases y plazos',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Retención de clientes en riesgo de churn: el playbook para salvar cuentas antes de que se vayan',
                'description'       => 'Implementa un sistema proactivo de detección y recuperación de cuentas en riesgo de churn que identifique la señal de alerta antes de que el cliente notifique la cancelación. Incluye el modelo de health score, los playbooks por segmento de riesgo y las conversaciones que recuperan hasta el 30% de las cuentas en peligro.',
                'prompt_content'    => <<<'PROMPT'
Eres una VP de Customer Success con experiencia construyendo programas de retención en empresas SaaS B2B con churn mensual del 3-5%, donde el coste de adquirir un nuevo cliente es 5-7x más caro que retener uno existente y donde cada punto de churn que reduces tiene un impacto directo y measurable en la valoración de la empresa.

Contexto:
- Tipo de producto: [SaaS B2B / plataforma de datos / software de gestión / otro]
- Churn actual (mensual o anual): [% o "no lo medimos con precisión"]
- Tamaño medio de cliente: [€ ARR por cuenta y número de usuarios por cuenta]
- Ciclo de renovación: [mensual / anual / plurianual]
- Señales de riesgo que ya detectas (si las tienes): [bajo uso / falta de respuesta / cambio de interlocutor / bajada de NPS]

## Playbook de Retención de Clientes en Riesgo — [Empresa]

### El customer health score: la señal antes de que sea urgente

**Las 5 métricas que componen el health score:**
```
DIMENSIÓN 1 — ENGAGEMENT CON EL PRODUCTO (40% del score):
Métricas: DAU/MAU ratio, frecuencia de login, funcionalidades activadas vs. disponibles,
  último login de los usuarios principales
Señal verde: login diario del usuario principal, >60% de features clave activadas
Señal amarilla: login semanal, 40-60% de features activadas
Señal roja: sin login en >14 días o login esporádico solo de un usuario de los N contratados

DIMENSIÓN 2 — ADOPCIÓN (20% del score):
Métricas: % de asientos (seats) activos vs. contratados, breadth of use (cuántos departamentos usan el producto)
Señal verde: >80% de los seats con actividad regular
Señal roja: <40% de los seats activos — el cliente ha contratado para todo el equipo pero solo lo usa 1 persona

DIMENSIÓN 3 — RESULTADOS (20% del score):
Métricas: ¿El cliente ha alcanzado los resultados prometidos en la venta? ¿Tiene ROI documentado?
Señal verde: cliente puede citar resultados concretos cuando habla con el CSM
Señal roja: el cliente no puede identificar ningún resultado atribuible al producto

DIMENSIÓN 4 — RELACIÓN CON LA EMPRESA (10% del score):
Métricas: NPS, CSAT de última interacción, número de tickets críticos abiertos, tiempo de respuesta del cliente
Señal verde: NPS ≥8, responde en <48h, tickets resueltos en SLA
Señal roja: NPS ≤6, no responde emails, escalaciones frecuentes

DIMENSIÓN 5 — SEÑALES COMERCIALES (10% del score):
Métricas: ¿Ha renovado sin negociación difícil? ¿Ha expandido? ¿Ha referido?
Señal verde: renovación automática o sin fricción, expansión en el último año
Señal roja: primera renovación pendiente desde hace >30 días, reducción de seats en la última renovación
```

**Cálculo del health score:**
```
PUNTUACIÓN POR DIMENSIÓN (0-10 por cada una):
Health Score = (Engagement × 0.4) + (Adopción × 0.2) + (Resultados × 0.2) + (Relación × 0.1) + (Comercial × 0.1)

CLASIFICACIÓN:
8-10: Verde — cliente sano, candidato a expansión o referencia
6-7.9: Amarillo — atención necesaria, revisión en próxima QBR
4-5.9: Naranja — en riesgo, intervención proactiva del CSM
<4: Rojo — en riesgo crítico, escalar a VP CS y CS manager

REVISIÓN DEL HEALTH SCORE:
→ Para cuentas enterprise: semanal
→ Para cuentas mid-market: mensual
→ Para cuentas SMB: trimestral (o automatizado con alertas de umbral)
```

---

### Playbook por nivel de riesgo

**Nivel AMARILLO — Intervención proactiva (6-7.9):**
```
TRIGGER: El health score cae de verde a amarillo o lleva 4 semanas sin mejorar

ACCIÓN DEL CSM (en los próximos 5 días):
1. Revisar los últimos 30 días de actividad en el producto: ¿qué ha cambiado?
2. Enviar email de "check-in de valor" (template abajo)
3. Si no responde en 48h: llamada corta de 15 minutos

OBJETIVO: Identificar si hay un problema de adopción, de cambio de interlocutor
o de valor no percibido — antes de que se convierta en intención de churn.

TEMPLATE EMAIL "CHECK-IN DE VALOR":
Asunto: [Nombre], ¿cómo va el equipo con [nombre del producto]?

Hola [Nombre],

Revisando vuestra cuenta he visto que [observación específica: "los accesos han bajado
un 30% en las últimas semanas" / "aún no habéis activado la funcionalidad X que nos
habíamos propuesto en la última reunión"].

¿Hay algo que podamos hacer para ayudaros? ¿Ha cambiado algo en el equipo o en los proyectos?

Me gustaría hacer una llamada de 15 minutos esta semana para asegurarme de que
estáis sacando el máximo partido. ¿Cuándo te va bien?

[Firma]
```

**Nivel NARANJA — Conversación de recuperación (4-5.9):**
```
TRIGGER: Health score en zona de riesgo + renovación en los próximos 90 días

ESCALADA: El CSM informa al CS Manager antes de contactar — necesita contexto y estrategia

REUNIÓN DE RECUPERACIÓN — LA ESTRUCTURA:
[0-5 min] "Queríamos revisar contigo cómo está yendo la colaboración. Antes de nada,
cuéntame: ¿cómo estás usando [producto] en el día a día del equipo actualmente?"
→ Escucha activa — deja que el cliente hable primero

[5-20 min] "¿Qué resultado esperabas conseguir cuando empezasteis con nosotros?"
→ Vuelve al éxito definido en el onboarding
→ "¿Sientes que estáis cerca de ese resultado?"
→ Si no: "¿Qué está bloqueando llegar ahí?"

[20-35 min] Plan de acción conjunto:
→ Define 1-2 acciones concretas con fecha para resolver el bloqueante
→ "Si conseguimos [acción A] para [fecha], ¿eso os daría suficiente valor para [resultado]?"
→ Comprométete a recursos: demo de nueva feature, sesión de entrenamiento, acceso a soporte premium

[35-45 min] Cierre con siguiente paso claro:
"En dos semanas hacemos un check-in para ver cómo van las acciones. ¿Quieres que te mande la invitación ahora?"
```

**Nivel ROJO — Rescue call con liderazgo (<4):**
```
TRIGGER: El cliente ha expresado intención de cancelar O el health score está en mínimos
  con renovación en <45 días

PARTICIPANTES: VP de CS o CEO (para cuentas grandes) + el CSM

ESTRUCTURA DE LA CONVERSACIÓN DE RESCATE:
→ NO empieces defendiendo el producto — empieza con escucha y diagnóstico
→ "Queremos entender qué ha fallado desde nuestra parte antes de hablar de soluciones"
→ Usa el silencio — deja que el cliente exprese su frustración sin interrumpir

LAS 4 RAZONES REALES DE CHURN Y SU RESPUESTA:
1. El producto no encaja con lo que necesitan → ofrece una transición honesta o un pivot de uso case
2. El interlocutor clave ha cambiado → nueva sesión de descubrimiento con el nuevo decisor
3. Razón económica (recorte de presupuesto) → renegociación de precio, downgrade de plan, pago aplazado
4. El equipo no ha adoptado el producto → plan de activación acelerado de 30 días con compromiso del cliente

OFERTA DE RESCATE (solo si tiene sentido para el negocio):
→ 1-2 meses gratuitos a cambio de un plan de acción firmado
→ Descuento en la renovación a cambio de un compromiso de plazo más largo
→ Acceso a funcionalidades del plan superior a coste del plan actual

SEÑAL DE QUE NO HAY VUELTA:
→ El cliente ya tiene firmado el contrato con la competencia
→ La empresa ha sido adquirida o está cerrando
→ Aprende: documentar por qué se fue y ajustar el proceso de onboarding para prevenir el mismo patrón
```

---

### KPIs del programa de retención

```
MÉTRICAS PRINCIPALES:
→ Churn rate mensual (MRR churn): % del MRR perdido por cancelaciones
→ Net Revenue Retention (NRR): [MRR renovado + expansión - churn] / MRR inicio. Objetivo: >110%
→ % de cuentas naranjas/rojas que mejoran de categoría tras la intervención
→ Win-back rate: % de cancelaciones revertidas con la rescue call
→ Tiempo medio de detección del riesgo antes de la notificación de churn (objetivo: >30 días de antelación)

REPORTING SEMANAL DEL EQUIPO DE CS:
┌────────────────────────────────────────────────────────┐
│ Cuentas en rojo esta semana: X (nueva: Y / mejoran: Z) │
│ Rescue calls realizadas: X | Resultado: Y% retenidas   │
│ NRR del mes: X% | Objetivo: >110%                      │
│ Churn del mes: X€ | Causas principales: [lista]        │
└────────────────────────────────────────────────────────┘
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Implementar un playbook de retención que detecta y recupera cuentas en riesgo de churn',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Posicionamiento como experto en un nicho: cómo especializarse para multiplicar la tarifa',
                'description'       => 'Define tu nicho de especialización como freelance y construye el posicionamiento que te permite cobrar 2-4x más que un generalista: cómo elegir el nicho correcto, cómo comunicar la especialización y cómo conseguir los primeros clientes premium en tu nicho.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio para freelancers y creativos que ha acompañado a más de 100 profesionales independientes en el proceso de especialización que les ha permitido pasar de tarifas generalistas de 40-60€/hora a tarifas de especialista de 100-200€/hora o a precios de proyecto que triplican sus ingresos anteriores, sin aumentar el número de horas trabajadas.

Contexto:
- Tipo de servicio freelance actual: [diseño / desarrollo / marketing / copywriting / consultoría / fotografía]
- Años de experiencia: [número]
- Tarifa actual: [€/hora o €/proyecto tipo]
- Sectores o tipos de cliente con los que has trabajado más: [lista los 3-5 más frecuentes]
- Principal obstáculo para especializarte: [miedo a perder clientes actuales / no sé cómo elegir el nicho / no sé cómo comunicarlo / creo que mi nicho es demasiado pequeño]

## Estrategia de Nicho para Freelancers — [Tu nombre/perfil]

### El argumento para especializarse: por qué un generalista cobra menos

**La paradoja de la especialización:**
```
EL GENERALISTA PIENSA:
"Si me especializo, pierdo el 80% de los potenciales clientes."
→ Es verdad. Pero los que quedan pagan 3x más y te buscan a ti específicamente.

EL MATH DE LA ESPECIALIZACIÓN:
Generalista:
→ 20 clientes potenciales al mes que responden a tus propuestas
→ Tarifa competitiva para ganar: 60€/hora
→ Ingresos: 20 clientes × 10h × 60€ = 12.000€/mes teórico (irrealista en la práctica)

Especialista en [nicho específico]:
→ 3 clientes potenciales al mes pero que buscan exactamente lo que ofreces
→ Tarifa de especialista: 150€/hora (nadie negocia porque no encuentran alternativa fácil)
→ Ingresos: 3 clientes × 10h × 150€ = 4.500€ con menos trabajo y menos búsqueda
→ O 1 proyecto mensual a precio de resultado: 8.000-15.000€

La clave: los clientes de nicho no comparan precios con generalistas.
Comparan entre especialistas — y ahí los criterios son calidad, reputación y experiencia, no precio.
```

---

### Cómo elegir el nicho correcto: el marco de las 3 intersecciones

**Las 3 preguntas que definen tu nicho:**
```
PREGUNTA 1 — ¿DÓNDE TIENES EXPERIENCIA REAL?
→ Lista los sectores, tipos de empresa o tipos de proyecto donde has trabajado más
→ Los proyectos que más te han gustado hacer
→ Los clientes con los que el trabajo fluía mejor

PREGUNTA 2 — ¿DÓNDE HAY DEMANDA Y CAPACIDAD DE PAGO?
→ Los sectores que contratan más en tu tipo de servicio
→ Los que tienen presupuestos reales para externalizar
→ Los que están creciendo y tienen urgencia

PREGUNTA 3 — ¿DÓNDE PUEDES SER DE LOS MEJORES?
→ ¿En qué combinación de habilidad + sector no hay muchos especialistas?
→ ¿Dónde tu combinación de conocimientos es difícil de replicar rápidamente?

EL NICHO CORRECTO ES LA INTERSECCIÓN:
Experiencia + Demanda con capacidad de pago + Escasez de especialistas

EJEMPLOS DE NICHO BIEN DEFINIDO:
❌ "Diseñador UX" → genérico, hay miles
❌ "Diseñador UX para startups" → mejor, pero aún amplio
✅ "Diseñador UX especializado en onboarding para SaaS B2B en etapa seed-Series A"
   → muy específico: el cliente que lo necesita te encontrará con facilidad y no negociará el precio

❌ "Copywriter"
✅ "Copywriter especializado en email sequences de venta para marcas de moda sostenible"
```

---

### El proceso de validación del nicho antes de comprometerse

**3 pasos para validar antes de cambiar tu posicionamiento:**
```
PASO 1 — INVESTIGA LA DEMANDA (1 semana):
→ Busca en LinkedIn: [tu servicio] + [tu nicho] → ¿cuántas ofertas de trabajo hay?
  Más ofertas de trabajo = hay presupuesto para pagar a freelancers también
→ Busca comunidades del nicho (Slack, Discord, grupos de LinkedIn)
  ¿Los miembros hablan de sus problemas con [tu tipo de servicio]? → hay necesidad
→ Busca competidores en el nicho: ¿hay 3-5 freelancers especializados activos?
  Competencia = mercado validado. Sin competencia = sin mercado (o nicho demasiado pequeño)

PASO 2 — CONVERSACIONES DE VALIDACIÓN (2 semanas):
→ Habla con 5-10 profesionales del nicho que serían tu cliente potencial
→ No vendas — pregunta:
  "¿Cuál es el mayor reto que tenéis con [tu tipo de servicio]?"
  "¿Cómo lo resolvéis actualmente?"
  "¿Qué haría que el proveedor ideal fuera claramente el elegido?"
→ Si emergen patrones comunes en las respuestas → el nicho tiene un problema que resolver

PASO 3 — PROYECTO PILOTO (antes del cambio oficial):
→ Consigue 1-2 proyectos en el nicho a tu tarifa objetivo
→ Si los consigues y el trabajo es el que esperabas → el nicho es viable
→ Si no puedes conseguir ni siquiera 1 proyecto exploratorio → ajusta el nicho o la propuesta de valor
```

---

### La propuesta de valor del especialista: cómo comunicarla

**El statement de posicionamiento en una línea:**
```
FÓRMULA:
"Ayudo a [tipo específico de cliente] a [resultado concreto] a través de [servicio]."

EJEMPLOS:
"Ayudo a clínicas dentales privadas a reducir las cancelaciones de última hora
 a través de sistemas de email y SMS automatizados."

"Diseño la arquitectura técnica de proyectos de machine learning para startups de salud
 que necesitan pasar de PoC a producción en 90 días."

"Escribo los textos de venta de marcas de cosméticos naturales que quieren vender
 en mercados anglófonos con una voz de marca auténtica."

TEST DEL BUEN STATEMENT:
□ ¿El cliente ideal que lo lee piensa "esto es para mí"?
□ ¿Excluye claramente a los que no son tu cliente ideal?
□ ¿Menciona un resultado específico, no solo una habilidad?
```

**Dónde y cómo comunicar la especialización:**
```
CANALES PRIORITARIOS POR TIPO DE NICHO:
→ B2B enterprise/startup: LinkedIn (perfil + contenido semanal)
→ Agencias y marcas: portfolio especializado + presencia en comunidades del sector
→ Pymes locales: Google My Business + directorio local especializado
→ EEUU/internacional: Upwork especializado + Cold outreach a LinkedIn

EL PRINCIPIO DE 1 AÑO:
→ Actualiza tu perfil de LinkedIn, web y bio de redes con el nuevo posicionamiento HOY
→ Publica contenido del nicho 2-3 veces por semana durante 6-12 meses
→ La consistencia hace que el nicho te reconozca antes de que empieces a pedir proyectos
→ El primer mes de especialización nadie te llama → es normal y esperado

ESTRATEGIA DE CONTENIDO PARA EL NICHO:
→ 1 post por semana: un problema del nicho + tu perspectiva experta
→ 1 caso de éxito al mes (aunque sea anonimizado): "Cómo ayudé a [tipo de cliente] a conseguir [resultado]"
→ Interactúa en los posts de los referentes del nicho: visibilidad sin crear contenido propio
```

---

### Los primeros clientes del nicho: dónde y cómo conseguirlos

```
MÉTODO 1 — REACTIVAR RELACIONES EXISTENTES:
→ Revisa tus clientes anteriores: ¿alguno es del nicho objetivo?
→ Contáctalos: "He decidido especializarme en [nicho]. Pensé en vosotros.
  ¿Tenéis algún proyecto en marcha donde pueda ayudaros?"
→ El cliente que ya te conoce tiene una barrera de entrada mínima

MÉTODO 2 — COLABORACIÓN CON PROVEEDORES COMPLEMENTARIOS:
→ Identifica otros freelancers o agencias que sirven al mismo nicho pero con servicios complementarios
→ Propón colaboraciones: tú haces X, ellos hacen Y → os referís mutuamente
→ Ejemplo: si eres diseñador UX para SaaS → contacta a desarrollo web para SaaS

MÉTODO 3 — OUTREACH DIRECTO EN LINKEDIN:
→ Busca decision makers del nicho con los filtros de LinkedIn Sales Navigator
→ Mensaje de conexión: personalizado, menciona algo específico de su empresa
→ Después de conectar: no vendas inmediatamente → comparte un insight del nicho
→ Cuando hay relación mínima: "¿Tienes 15 minutos para una llamada? Quiero entender los retos de [nicho] con [tu servicio]"

MÉTODO 4 — COMUNIDADES DEL NICHO:
→ Únete a los 2-3 grupos de LinkedIn, Slack o Discord donde están tus clientes ideales
→ Aporta valor con respuestas a preguntas de tu área de especialización
→ Sin spam ni promoción — solo conocimiento genuino
→ Los proyectos llegan cuando te perciben como el experto de referencia del grupo
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Definir y comunicar una especialización que permite cobrar tarifas premium como freelance',
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
