<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills103Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Storytelling de marca',
                'description'      => 'Construye la narrativa que conecta emocionalmente con tu audiencia y diferencia la marca más allá de los atributos del producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de brand storytelling con experiencia en marcas de consumo y B2B. Tu misión es ayudarme a construir la narrativa central de mi marca siguiendo un proceso estructurado y profesional.

## Fase 1 — Diagnóstico de la narrativa actual

Antes de proponer nada, hazme las siguientes preguntas (una a una, esperando mi respuesta antes de avanzar):

1. ¿Cuál es tu producto o servicio y quién es tu cliente ideal (perfil demográfico y psicográfico)?
2. ¿Qué problema concreto resuelve tu marca y qué pasaría si no existiese?
3. ¿Cómo describirías hoy tu marca en una frase? ¿Y cómo la describen tus clientes?
4. ¿Qué valores no negociables tiene la empresa aunque cuesten dinero?
5. ¿Hay algún momento fundacional, fracaso superado o decisión contracultural que haya definido la identidad de la marca?

## Fase 2 — Arquitectura narrativa (Framework StoryBrand de Donald Miller adaptado)

Con mis respuestas, construye el siguiente mapa narrativo:

| Elemento | Contenido para mi marca |
|---|---|
| **El héroe** | (mi cliente, no mi marca) |
| **El problema** | Externo / Interno / Filosófico |
| **El guía** | Mi marca como mentor, no protagonista |
| **El plan** | Los 3 pasos simples que el cliente debe seguir |
| **La llamada a la acción** | Directa y de transición |
| **El éxito** | Cómo es la vida del cliente después |
| **El fracaso evitado** | Qué pierde si no actúa |

## Fase 3 — La historia de origen (Origin Story)

Redacta la historia de origen de la marca en 250-300 palabras siguiendo esta estructura:
- **El antes**: el mundo con el problema que la marca decidió resolver
- **El momento de quiebre**: la experiencia, el fracaso o la revelación que lo cambió todo
- **La decisión**: por qué apostamos por esta forma y no la fácil
- **El hoy**: qué representa la marca para quienes la eligen

La historia debe usar lenguaje específico y concreto, evitar clichés corporativos como "pasión", "excelencia" o "sinergia", y terminar con una línea memorable que pueda usarse como tagline.

## Fase 4 — Mensajes clave por canal

Adapta la narrativa central a tres formatos:

**A) Elevator pitch (30 segundos, 60-70 palabras)**
Para cuando alguien pregunta "¿a qué se dedica tu empresa?"

**B) About Us de la web (150 palabras)**
Sin hablar de "misión, visión y valores" de forma genérica. Con personalidad y verdad.

**C) Gancho para redes sociales (3 variaciones de un post de 150-200 palabras)**
Formato: Problema → Tensión → Resolución con llamada a la acción

## Fase 5 — Test de consistencia narrativa

Antes de cerrar, evalúa la narrativa construida contra estas 5 preguntas:
1. ¿El cliente es el héroe o lo es la marca?
2. ¿El problema descrito duele de verdad o es genérico?
3. ¿La solución es simple de entender en menos de 5 segundos?
4. ¿La historia podría ser de otra marca o es única nuestra?
5. ¿Hay alguna tensión dramática o es solo una descripción positiva?

Puntúa cada criterio del 1 al 5 y proporciona mejoras concretas para los puntos que estén por debajo de 4.

**Entregable final**: Un documento de marca con origen story, mapa narrativo StoryBrand, mensajes adaptados por canal y puntuación de consistencia con mejoras.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Construir o refinar la narrativa emocional de una marca para diferenciarse en mercados saturados.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Comunicar tecnología a no técnicos',
                'description'      => 'Cómo explicar decisiones de arquitectura, deuda técnica y plazos a CEOs, inversores y stakeholders sin formación técnica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO con 10 años de experiencia explicando tecnología a juntas directivas y equipos comerciales. Ayúdame a traducir conceptos técnicos complejos a un lenguaje que cualquier directivo entienda y con el que pueda tomar decisiones informadas.

## El problema central

Los developers y los CEOs hablan idiomas distintos. El developer dice "necesitamos refactorizar el monolito" y el CEO escucha "quieren gastar 3 meses en arreglar algo que funciona". Esta brecha genera decisiones erróneas, proyectos cancelados y frustración mutua.

## Paso 1 — Identifica qué necesitas comunicar

Dime cuál de estos escenarios describe tu situación (o descríbeme el tuyo):

- **A)** Quiero pedir recursos para pagar deuda técnica
- **B)** Necesito explicar por qué el plazo de una funcionalidad se ha alargado
- **C)** Quiero proponer cambiar de tecnología (lenguaje, framework, proveedor de nube)
- **D)** Debo presentar un incidente de producción sin que parezca una catástrofe
- **E)** Necesito que aprueben invertir en seguridad o infraestructura (algo invisible)
- **F)** Otro (descríbelo)

## Paso 2 — Framework de traducción técnica (Metodología "CEO Language")

Para cualquier concepto técnico, aplica esta plantilla:

| Campo | Pregunta que responde |
|---|---|
| **Analogía cotidiana** | ¿Con qué cosa del mundo real lo puedo comparar? |
| **Impacto en el negocio** | ¿Qué pasa si no lo hacemos? (en €, tiempo o riesgo) |
| **Coste de oportunidad** | ¿Qué nos impide hacer mientras no lo resolvemos? |
| **Riesgo si se ignora** | Escenario pesimista concreto y su probabilidad |
| **Lo que pedimos** | Tiempo, dinero, personas — en números reales |
| **Indicador de éxito** | ¿Cómo sabremos que funcionó? |

## Paso 3 — Ejemplos de traducción

### Deuda técnica
❌ "Necesitamos refactorizar el módulo de pagos porque usa una librería deprecated."
✅ "Nuestra infraestructura de pagos es como un edificio construido hace 8 años sin revisión. Funciona, pero si mañana el proveedor deja de dar soporte (ya lo anunció para diciembre), procesar pagos podría fallar. Invertir 6 semanas ahora evita un incidente que históricamente nos ha costado entre 15.000 y 40.000 € en pérdidas y reputación."

### Plazo ampliado
❌ "Se nos complicó la integración con el API de terceros."
✅ "El proveedor X cambió sus condiciones de API sin avisar, igual que cuando Hacienda saca una circular nueva y hay que adaptar todos los contratos. Necesitamos 2 semanas adicionales para cumplir con los nuevos requisitos. El efecto en el resto del roadmap es que la funcionalidad Y se mueve a finales de mes."

## Paso 4 — Construye tu presentación

Con el escenario que me hayas dado en el Paso 1, elabora:

1. **Slide de contexto** (3 bullets, máximo 20 palabras cada uno)
2. **La analogía** que humaniza el problema técnico
3. **Tabla de impacto** (decisión / si hacemos / si no hacemos)
4. **Lo que pedimos + fecha de retorno visible**
5. **Pregunta de cierre** que invite a decidir, no a debatir

## Paso 5 — Anticipar objeciones

Prepárate para las 3 preguntas que siempre hace el CEO:
- "¿No podemos hacerlo más rápido?"
- "¿Y si esperamos 3 meses más?"
- "¿Otros han resuelto esto de otra forma?"

Para cada una te daré la respuesta diplomática que cierra la objeción sin ponerse a la defensiva y sin mentir.

**Entregable**: Guión de presentación listo para usar, con analogías, tabla de impacto y respuestas a objeciones comunes.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Presentar decisiones técnicas, deuda técnica o incidentes a stakeholders no técnicos de forma que tomen decisiones informadas.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Presentar diseño a stakeholders',
                'description'      => 'Cómo defender decisiones de diseño ante directivos que quieren cambiar cosas sin entender el porqué.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia en presentaciones a C-level y comités de dirección. Ayúdame a estructurar y ejecutar presentaciones de diseño que generen aprobación sin convertirse en sesiones de rediseño colectivo.

## El problema que vamos a resolver

Cuando un diseñador muestra su trabajo a directivos sin estructura, ocurren tres cosas malas: (1) los stakeholders comentan estética en lugar de objetivos, (2) cada persona añade su criterio personal y el diseño se fragmenta, (3) el diseñador acaba implementando cambios que empeoran el resultado pero hacen feliz al jefe.

La solución no es diseñar mejor — es presentar diferente.

## Framework de presentación: "Context-First Design Review"

### Estructura de 5 actos

**Acto 1 — El problema (2 minutos)**
Antes de mostrar una sola pantalla, describe el problema que estás resolviendo:
- "Estamos aquí porque [métrica o problema concreto]"
- "El usuario que resolvemos es [perfil específico] y su frustración actual es [cita real o dato]"
- "El objetivo de negocio que esto soporta es [KPI o norte estratégico]"

**Acto 2 — Las restricciones (1 minuto)**
Declara las limitaciones antes de mostrar el diseño:
- Técnicas: "El backend no permite X antes de diciembre"
- De negocio: "No podemos tocar el flujo de checkout hasta Q3"
- De usuario: "Los tests mostraron que los usuarios abandonan si hay más de 3 pasos"

**Acto 3 — El diseño y sus decisiones (10-15 minutos)**
Muestra cada pantalla o flujo con este guión:
- "Esta pantalla resuelve [problema específico]"
- "La decisión clave aquí es [elemento] porque [dato o principio que lo sustenta]"
- "Rechazamos la alternativa de [X] porque [razón concreta]"

**Acto 4 — Validación (si existe)**
Nunca muestres diseño sin evidencia si puedes evitarlo:
- Resultados de tests de usabilidad (aunque sean 5 personas)
- Benchmarks de la competencia
- Datos de analytics del estado actual
- Citas de usuarios sobre el problema

**Acto 5 — Lo que necesitas (1 minuto)**
Termina pidiendo algo concreto:
- "Necesito aprobación para pasar a desarrollo" (sí/no)
- "Necesito feedback sobre [aspecto específico], no sobre el diseño visual general"
- "Las dos preguntas abiertas que tengo son X e Y"

## Cómo manejar el feedback destructivo

| Tipo de comentario | Lo que realmente significa | Respuesta profesional |
|---|---|---|
| "Ponlo más grande" | "No veo jerarquía clara" | "¿Qué es lo más importante que debe ver primero el usuario?" |
| "¿Por qué tan poco color?" | "No parece premium/moderno" | "La paleta sigue el sistema de diseño acordado. ¿Hay algún momento concreto donde falta énfasis?" |
| "A mí me gusta más como estaba antes" | Resistencia al cambio | "El diseño anterior generaba X% de abandono. Esto resuelve ese problema específico." |
| "¿Y si añadimos también Y?" | Scope creep | "Eso es una buena idea para la v2. Hoy resolvemos el problema de X para cumplir la fecha de Z." |
| "Mis hijos usan esto y ellos dicen..." | Sesgo de muestra inadecuado | "Entiendo esa perspectiva. Lo testamos con [perfil del usuario real] y el resultado fue..." |

## Plantilla para el documento de presentación

Construye el deck con esta estructura y te ayudaré a rellenar cada sección:

1. **Portada**: Nombre del proyecto + fecha + "v[número] — Para aprobación / Para feedback"
2. **El problema** (1 slide con dato concreto)
3. **Los usuarios** (1 slide con perfil y cita real)
4. **El objetivo medible** (1 slide con KPI o métrica de éxito)
5. **Las restricciones** (1 slide, bullet points)
6. **El diseño** (pantallas o flujos con anotaciones de decisión)
7. **La evidencia** (tests, benchmarks, datos)
8. **Próximos pasos** (acción concreta con fecha)

**Cuéntame sobre tu presentación**: ¿Qué estás presentando, a quién y cuál es el feedback que más temes recibir? Te preparo el guión y las respuestas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Presentar propuestas de diseño a directivos o clientes de forma que el feedback sea constructivo y no destruya las decisiones de diseño.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Comunicación persuasiva en ventas',
                'description'      => 'Los principios de Cialdini aplicados a la venta moderna: influencia ética que acelera la decisión de compra.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas especializado en psicología de la persuasión y comunicación de alto impacto. Ayúdame a aplicar los principios de influencia de Robert Cialdini a situaciones concretas de venta, de forma ética y efectiva.

## Los 7 principios de Cialdini aplicados a ventas modernas

### 1. Reciprocidad
Dar primero genera obligación de devolver. En ventas modernas esto se traduce en:
- Contenido de valor gratuito antes de pedir nada
- Auditorías, diagnósticos o primeras sesiones sin coste
- Compartir información que normalmente cobraríamos

**Aplicación práctica**: "Antes de hablar de precios, ¿te puedo enviar el análisis que hicimos para una empresa similar a la tuya? Sin compromiso." → El prospecto recibe valor real → La reunión siguiente parte de una deuda emocional positiva.

### 2. Compromiso y coherencia
Una vez que alguien dice sí a algo pequeño, tiende a ser coherente con decisiones posteriores mayores.

**Técnica del pie en la puerta adaptada**:
- Paso 1: "¿Puedes confirmarme que el problema que describiste (X) sigue siendo una prioridad para este trimestre?" → Sí
- Paso 2: "Y si resolviéramos X antes de fin de mes, ¿eso desbloquearía el resto del plan?" → Sí
- Paso 3: "Entonces si mi propuesta resuelve exactamente ese problema en ese plazo, ¿tienes autoridad para avanzar esta semana?" → La decisión ya estaba tomada antes de mostrar el precio.

### 3. Prueba social
Las personas miran a otros para decidir qué es correcto. No basta con decirlo; hay que mostrarlo.

| Formato de prueba social | Impacto |
|---|---|
| Testimonio con nombre y empresa real | Alto |
| Caso de estudio con métricas concretas | Muy alto |
| Logos de clientes conocidos | Medio |
| Número de clientes o usuarios | Bajo-Medio |
| Review en G2, Capterra o Google | Alto (independiente) |

**Regla**: la prueba social más poderosa es la que viene de alguien que se parece al prospecto (mismo sector, mismo tamaño, mismo problema).

### 4. Autoridad
Compramos más a quien percibimos como experto. Construye autoridad antes de la conversación de venta:
- Publica contenido educativo real (no comercial)
- Cita datos de fuentes externas, no solo las tuyas
- Menciona clientes o proyectos relevantes de forma natural, sin alardear
- Usa lenguaje específico del sector del prospecto

### 5. Agrado
Compramos a personas que nos caen bien. Factores de agrado en ventas:
- Similitud percibida: "Yo también viví eso cuando estaba en tu posición"
- Escucha activa real: reformula lo que dijo el cliente antes de proponer nada
- Cumplidos específicos y honestos: no "qué buen equipo" sino "la forma en que gestionáis la captación es más sofisticada que la mayoría de empresas de tu tamaño"

### 6. Escasez
Lo que es limitado se percibe como más valioso. Pero solo funciona si es real.
- "Solo tenemos capacidad para 2 nuevos clientes en octubre" (si es verdad)
- "La tarifa actual está vigente hasta el 30" (si hay cambio real de precio)
- Escasez falsa destruye la confianza y con ella la venta

### 7. Unidad (el principio añadido en la edición revisada)
Pertenecemos a tribus. Cuando el vendedor forma parte de la misma tribu que el comprador, la resistencia cae.
- "Como fundador que también ha pasado por esto..."
- "En la comunidad de SaaS de SaaS solemos ver que..."
- Compartir identidad: sector, ciudad, universidad, valores de empresa

## Tu ejercicio práctico

Cuéntame:
1. ¿A quién vendes? (perfil del prospecto)
2. ¿En qué momento del proceso sueles perder ventas o sentir resistencia?
3. ¿Tienes prueba social (casos, testimonios, datos)?

Con esa información construiré para ti:
- Un guión de llamada de 20 minutos que aplique los 3 principios más relevantes para tu situación
- 5 frases de cierre que reducen fricción sin presionar
- Plantilla de seguimiento post-reunión que mantiene la conversación activa

**La persuasión ética no manipula: alinea el valor real con la decisión correcta para el cliente.**
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Mejorar la efectividad de conversaciones de venta aplicando principios de psicología de la persuasión de forma ética.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product storytelling',
                'description'      => 'Cómo comunicas la visión del producto de forma que engineering, sales y marketing remen en la misma dirección.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CPO con experiencia en productos B2B SaaS de 50-500 personas. Ayúdame a construir y comunicar la visión del producto de forma que cada departamento la convierta en sus propias prioridades sin que yo tenga que estar en cada reunión.

## El problema del product storytelling

El mayor fracaso de comunicación de un Product Manager no es el roadmap: es que tres departamentos distintos tienen tres versiones distintas de lo que el producto "realmente es". Sales vende lo que puede, Engineering construye lo que cree que es correcto y Marketing comunica lo que suena bonito. El resultado: desalineación, fricción interna y un producto que no tiene norte claro.

## La estructura narrativa del producto

### Nivel 1 — La visión (el "por qué" en 1 frase)
Debe responder: ¿En qué mundo mejor viviríamos si tu producto tuviese éxito total?

Formato: "Para [quién], [nombre del producto] es [categoría] que [beneficio único], a diferencia de [alternativa], nuestra solución [diferenciador defensible]."

Ejemplo (Notion): "Para equipos de conocimiento disperso, Notion es el espacio de trabajo único que elimina el caos de herramientas, a diferencia de Google Docs o Confluence, porque combina bases de datos, wikis y proyectos en un solo sistema flexible."

### Nivel 2 — La narrativa de mercado (el "por qué ahora")
3 tendencias del mercado que hacen inevitable que tu solución gane:
- Tendencia 1: El mundo está cambiando hacia X
- Tendencia 2: Los clientes ahora esperan Y
- Tendencia 3: La tecnología por primera vez permite Z

Este slide es el más poderoso que existe para alinear a la empresa, a los inversores y a los clientes.

### Nivel 3 — El arco de usuario (el "cómo")
Describe la transformación que vive el cliente:

| Antes | Después |
|---|---|
| Estado emocional | Estado emocional |
| Tarea que hace | Tarea que hace |
| Herramienta que usa | Tu producto |
| Tiempo que invierte | Tiempo ahorrado |
| Resultado que obtiene | Resultado mejorado |

### Nivel 4 — El roadmap como historia
No presentes el roadmap como una lista de funcionalidades. Preséntalo como los capítulos de una historia:
- **Capítulo 1 (Q1)**: "Hacemos que sea fácil empezar" → las funcionalidades de onboarding
- **Capítulo 2 (Q2)**: "Hacemos que sea difícil irse" → las funcionalidades de retención
- **Capítulo 3 (Q3)**: "Hacemos que sea fácil crecer" → las funcionalidades de expansión

Cada capítulo responde al mismo problema del cliente, pero en diferente momento de su ciclo de vida.

## Cómo adaptar el mensaje por audiencia

| Audiencia | Énfasis | Formato | Duración |
|---|---|---|---|
| Engineering | Problema técnico a resolver y principios de diseño | Documento escrito + sesión de preguntas | 45 min |
| Sales | Qué puede prometer, qué no puede prometer aún | Demo + FAQ de objeciones | 30 min |
| Marketing | La narrativa de mercado y el perfil de usuario ideal | Presentación + brief de mensajes | 30 min |
| CEO/Board | North Star Metric + progreso vs. visión | Dashboard + 5 slides | 20 min |
| Clientes | Qué problema resuelves hoy y qué viene después | Release notes + roadmap público | Async |

## El ritual de alineación mensual

Para mantener la alineación sin reuniones infinitas, implementa este ritual:
1. **Product Letter mensual**: 1 página escrita por el PM con los 3 aprendizajes del mes, las 3 decisiones tomadas y los 3 próximos pasos. Se envía antes del 5 de cada mes.
2. **Demo interna quincenal**: 30 minutos donde engineering muestra qué se ha construido. Toda la empresa está invitada.
3. **Win/Loss review**: El último viernes del mes, Sales comparte 3 deals ganados y 3 perdidos. Product escucha, no habla.

**Cuéntame sobre tu producto**: ¿Qué construyes, para quién, y cuál es la fricción de comunicación que más te frustra hoy con los equipos internos? Construimos la narrativa juntos.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Construir una narrativa de producto que alinie engineering, sales y marketing alrededor de la misma visión y prioridades.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación interna efectiva',
                'description'      => 'Diseña los canales, rituales y mensajes que mantienen al equipo informado, alineado y motivado a escala.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia en empresas de 50 a 500 personas en crecimiento rápido. Ayúdame a diseñar o mejorar el sistema de comunicación interna para que la información correcta llegue a la persona correcta en el momento correcto, sin inundar a nadie de mensajes.

## Diagnóstico inicial: los 5 síntomas de una comunicación interna rota

Marca los que reconoces en tu empresa:
- [ ] Las personas se enteran de decisiones importantes por el rumor antes que por la empresa
- [ ] Los managers repiten las mismas preguntas porque la información no fluye hacia abajo
- [ ] Hay exceso de reuniones para compensar la falta de comunicación escrita
- [ ] El Slack o Teams es un caos donde la información importante se pierde
- [ ] Los equipos remotos o en otras oficinas se sienten desconectados de la dirección

Cuéntame cuántos has marcado y cuál es el que más te duele.

## Framework: la matriz de comunicación interna

| Tipo de información | Audiencia | Canal | Frecuencia | Responsable |
|---|---|---|---|---|
| Estrategia y dirección | Toda la empresa | All-hands + resumen escrito | Trimestral | CEO |
| Resultados del negocio | Toda la empresa | Newsletter interna | Mensual | CFO/CEO |
| Cambios de proceso | Equipos afectados | Documento + sesión Q&A | Ad hoc | HR/Manager |
| Hitos y victorias | Toda la empresa | Canal #wins en Slack | Semanal | Managers |
| Feedback urgente | Managers | 1:1 + canal directo | Inmediato | HR |
| Cultura y bienestar | Toda la empresa | Email/Newsletter | Quincenal | HR |

## Los rituales de comunicación que no pueden faltar

### 1. All-hands trimestral (60-90 minutos)
Estructura recomendada:
- 0:00 — Bienvenida + logros del trimestre (CEO, 10 min)
- 0:10 — Métricas del negocio: dónde estamos vs. donde queríamos estar (CFO, 10 min)
- 0:20 — Spotlight de equipos: 2-3 proyectos presentados por quienes los hicieron (15 min)
- 0:35 — Rumbo del próximo trimestre: las 3 prioridades y por qué (CEO, 10 min)
- 0:45 — Q&A anónimo en tiempo real (Slido o Mentimeter, 20 min)
- 1:05 — Cierre + reconocimientos individuales (5 min)

### 2. Newsletter interna mensual (se lee en 5 minutos)
Secciones fijas:
- **Número del mes**: una sola métrica con contexto
- **Decisiones tomadas**: 3 decisiones importantes con el razonamiento detrás
- **Quién ha llegado / quién se va**: bienvenidas y despedidas con dignidad
- **Lanzamientos**: lo que el producto o el equipo ha publicado este mes
- **Qué viene**: las 3 cosas más importantes del mes siguiente

### 3. Manager briefing semanal (asincrónico)
Cada lunes, los managers reciben un resumen de 5 bullets con lo que necesitan saber y transmitir a sus equipos esa semana. Se escribe en 30 minutos, se consume en 3.

## Cómo escribir mensajes internos que la gente lea

Las 3 reglas del mensaje interno efectivo:
1. **Primero el "para qué"**: empieza por por qué el receptor debería leer esto, no por el contexto
2. **Brevedad radical**: si puede leerse en 3 minutos, que se lea en 3 minutos. Si no puede, convierte el texto en un documento con resumen ejecutivo al principio
3. **Acción clara al final**: cada mensaje termina con una de estas tres cosas: "no necesitas hacer nada", "necesitas hacer X antes de Y fecha", o "si tienes preguntas, contacta con Z"

## Ayúdame a construir tu sistema

Cuéntame:
1. ¿Cuántas personas tiene tu empresa y cómo están distribuidas (oficina, remoto, mixto)?
2. ¿Qué herramientas de comunicación usáis ya (Slack, Teams, email, Notion)?
3. ¿Cuál es el ritual de comunicación que más falla o que más falta hace?

Con esa información diseñaré para ti el mapa completo de canales, rituales y plantillas de mensajes listos para usar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar o mejorar el sistema de comunicación interna de una empresa en crecimiento para reducir la desinformación y aumentar la alineación.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presentaciones financieras al board',
                'description'      => 'El formato, el nivel de detalle y el storytelling que convierte los números en decisiones estratégicas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia presentando resultados financieros a consejos de administración e inversores. Ayúdame a diseñar y ejecutar presentaciones financieras que generen confianza, claridad y decisiones, no solo preguntas.

## El error más común en las presentaciones al board

La mayoría de los CFOs llegan al board con una hoja de Excel de 80 columnas y esperan que los consejeros entiendan lo que importa. El resultado: 45 minutos de preguntas sobre la celda equivocada y cero tiempo para la decisión estratégica que necesitabas.

La solución: menos datos, más contexto. Menos tablas, más narrativa. Menos pasado, más implicaciones para el futuro.

## La estructura de la presentación financiera perfecta (45 minutos)

### Bloque 1 — El titular (5 minutos)
Un slide, tres números, una frase:
- Revenue del período vs. objetivo
- EBITDA o Runway (dependiendo del estadio)
- El número que más importa para nuestra estrategia ahora (NRR, CAC, Churn, etc.)
- Una frase: "Estamos [por delante / en línea / por detrás] del plan porque [razón principal]"

### Bloque 2 — La historia de los números (15 minutos)

**P&L simplificado** (máximo 8 líneas):
| Concepto | Real | Presupuesto | Δ | Comentario |
|---|---|---|---|---|
| Revenue | | | | |
| Coste de servicio | | | | |
| Gross Profit | | | | |
| Gastos operativos | | | | |
| EBITDA | | | | |

Regla: si no puedes explicar cada variación en 15 segundos, no la has entendido bien.

**Los 3 drivers de la variación**:
Siempre explica las desviaciones con esta estructura:
- "La variación de X en [línea] se debe a [causa], que es [controlable / no controlable] y [ya corregida / en proceso de corrección / requiere decisión del board]."

### Bloque 3 — La proyección (10 minutos)

**Tres escenarios obligatorios**:
| Escenario | Revenue | EBITDA | Runway / Cash | Probabilidad |
|---|---|---|---|---|
| Conservador | | | | 30% |
| Base | | | | 50% |
| Optimista | | | | 20% |

Cada escenario debe tener una sola hipótesis diferente (no cambies todo a la vez). El board necesita ver claramente qué variable es la que cambia el resultado.

### Bloque 4 — Decisiones que necesito (10 minutos)
Este es el bloque más importante y el que más se olvida.

Para cada decisión, usa este formato:
- **Contexto**: qué situación nos trae aquí
- **Opciones**: 2-3 alternativas con sus implicaciones financieras
- **Recomendación de management**: cuál proponemos y por qué
- **Lo que necesitamos del board**: aprobación / feedback / información

### Bloque 5 — Q&A abierto (5 minutos)
Deja tiempo real para preguntas. Si el board no tiene preguntas, algo ha fallado: o no entendieron o no les importa.

## Las 5 preguntas que siempre hace el board (y cómo responderlas)

1. "¿Cuántos meses de runway nos quedan?" → Siempre responde con el escenario base y el conservador
2. "¿El equipo está cumpliendo?" → Responde con métricas de productividad, no con opiniones
3. "¿Dónde podríamos recortar si fuera necesario?" → Ten preparado un plan de contingencia del 15% y del 25%
4. "¿Qué nos preocupa que no hayamos dicho?" → Esto requiere honestidad. Lo que no dices en el board suele volver como crisis
5. "¿Qué haríamos diferente si empezáramos hoy?" → La pregunta más valiosa. Respóndela con franqueza

## Ayúdame a preparar tu presentación

Cuéntame:
- ¿Cuál es el estadio de tu empresa? (startup early, growth, consolidada)
- ¿Cuántos consejeros hay y cuál es su perfil? (financiero, operativo, inversor, independiente)
- ¿Qué período estás presentando y cuál es la desviación más importante respecto al plan?
- ¿Hay alguna decisión que necesites que tome el board en esta sesión?

Con eso construimos el deck completo con narrativa, tablas y talking points para cada slide.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Preparar y ejecutar presentaciones financieras al consejo de administración que generen decisiones, no solo preguntas.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación legal clara',
                'description'      => 'Redacta contratos, políticas y avisos legales que la gente entiende sin necesitar un abogado para interpretarlos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en redacción legal clara (Plain Legal Language) y en la simplificación de documentos legales para productos digitales y empresas en crecimiento. Ayúdame a transformar el lenguaje legal opaco en textos que protejan legalmente y que la gente realmente lea y entienda.

## Por qué la claridad legal importa más de lo que crees

Un contrato que nadie lee no protege a nadie. Una política de privacidad incomprensible genera desconfianza y, en caso de disputa, puede volverse en tu contra si un juez determina que el usuario no pudo dar un consentimiento informado real. La claridad legal no es un lujo: es una estrategia de riesgo.

## Los 7 principios del Plain Legal Language

### 1. Frases cortas (máximo 25 palabras por oración)
❌ "En el supuesto de que el usuario, habiendo aceptado los presentes términos y condiciones con carácter previo a la utilización del servicio, incumpliese cualquiera de las obligaciones recogidas en el presente documento..."
✅ "Si incumples estos términos, podemos suspender tu cuenta."

### 2. Voz activa, no pasiva
❌ "Los datos serán tratados por el responsable del tratamiento..."
✅ "Nosotros tratamos tus datos..."

### 3. Sustituye el vocabulario legal por el equivalente cotidiano
| Legal | Claro |
|---|---|
| El arrendatario | Tú (el inquilino) |
| El prestador de servicios | Nosotros |
| Rescisión unilateral | Cancelar el contrato |
| Cláusula de confidencialidad | Qué información debes mantener en secreto |
| Hecho fortuito o de fuerza mayor | Cosas fuera de nuestro control (terremotos, huelgas generales, pandemias) |

### 4. Usa encabezados y listas, no párrafos largos
Los contratos modernos se leen como documentos de producto, no como sentencias judiciales.

### 5. Explica el "por qué" de las cláusulas importantes
No solo digas qué pasa — explica por qué existe esa regla. Los usuarios aceptan mejor lo que entienden.

### 6. Añade un resumen ejecutivo al inicio
Antes del texto legal, incluye un recuadro con: "En resumen: [5 bullets con lo más importante en lenguaje humano]"

### 7. Sé honesto sobre lo que proteges
Si una cláusula te protege a ti y no al usuario, dilo. La transparencia genera más confianza que el lenguaje evasivo.

## Los documentos más importantes y sus riesgos clave

### Términos y condiciones de uso
- Definir claramente qué puede y qué no puede hacer el usuario con tu plataforma
- Límite de responsabilidad: hasta dónde respondes tú si algo falla
- Política de cancelación y reembolso: ser explícito evita el 80% de las disputas
- Ley aplicable y jurisdicción: crucial en servicios con usuarios en múltiples países

### Política de privacidad (RGPD/LOPD)
- Qué datos recoges y para qué (finalidad específica, no genérica)
- Con quién los compartes (nombrar proveedores, no decir "terceros de confianza")
- Cuánto tiempo los guardas (plazos concretos)
- Cómo puede el usuario ejercer sus derechos (un email real, no un formulario kafkiano)

### Contratos de servicios profesionales
- Alcance del trabajo (qué incluye y qué no incluye, en detalle)
- Condiciones de pago (cuándo, cómo, qué pasa si no pagan)
- Propiedad intelectual (quién es dueño de qué al finalizar)
- Gestión de cambios (cómo se gestionan las peticiones fuera de alcance)

## Taller práctico

Pégame el fragmento de texto legal que quieras transformar y te entregaré:
1. La versión simplificada en Plain Legal Language (manteniendo la protección legal)
2. El resumen ejecutivo en 5 bullets para el inicio del documento
3. Las 3 cláusulas que más fricc generan con usuarios y cómo redactarlas mejor
4. Un check de cumplimiento RGPD básico (si aplica)

**Importante**: Este proceso no sustituye a la revisión de un abogado para documentos que comprometan derechos significativos. Lo que hacemos aquí es mejorar la comunicabilidad de los textos, no dar asesoramiento jurídico vinculante.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Transformar contratos, términos y políticas legales en documentos que los usuarios entienden y que mantienen la protección legal necesaria.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunicación empática en soporte',
                'description'      => 'El lenguaje, el tono y las frases que desactivan clientes frustrados y convierten incidentes en fidelización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Experience y comunicación de soporte con experiencia en equipos de 5 a 50 agentes. Ayúdame a construir el lenguaje, los protocolos y los marcos mentales que convierten conversaciones difíciles en experiencias que los clientes recuerdan positivamente.

## El principio fundamental

Un cliente furioso no quiere una solución técnica. Quiere sentirse escuchado. La solución sin empatía se percibe como un trámite. La empatía sin solución no resuelve nada. La magia está en el orden: primero la persona, luego el problema.

## El modelo HEARD para conversaciones difíciles

| Letra | Concepto | Qué haces |
|---|---|---|
| **H** | Hear (Escucha) | Deja que el cliente termine de hablar sin interrumpir |
| **E** | Empathize (Empatiza) | Reconoce su frustración con palabras concretas |
| **A** | Apologize (Discúlpate) | Una disculpa real, no corporativa |
| **R** | Resolve (Resuelve) | La solución concreta al problema |
| **D** | Diagnose (Diagnostica) | Entiende la causa raíz para evitar que vuelva a ocurrir |

## Frases que funcionan vs. frases que dinamitan

### En lugar de "Eso no es posible":
✅ "Lo que sí puedo hacer es [alternativa]. ¿Eso te resolvería el problema?"

### En lugar de "Ese es el procedimiento estándar":
✅ "Entiendo que esto no es lo que esperabas. La razón por la que funciona así es [explicación breve]. Lo que puedo hacer en tu caso concreto es [opción]."

### En lugar de "No es culpa nuestra":
✅ "Tienes razón en estar frustrado. Aunque la causa está fuera de nuestro sistema, voy a asegurarme de que resolvemos tu situación."

### En lugar de "Ya le dije la semana pasada...":
✅ "Quiero asegurarme de que esta vez el problema queda cerrado. ¿Puedo confirmar contigo exactamente qué necesitas?"

### En lugar de "Tendrá que esperar":
✅ "El tiempo estimado es [X]. Te escribiré antes de [hora/fecha] con una actualización aunque no tengamos la solución definitiva."

## Los 5 tipos de cliente difícil y cómo tratarlos

### 1. El cliente furioso (explotan antes de explicar el problema)
- Técnica: validación inmediata + pausa + preguntas
- Frase de apertura: "Entiendo que estás frustrado y tiene todo el sentido. Antes de buscar la solución, necesito entender bien qué ha pasado. ¿Me puedes contar desde el principio?"

### 2. El cliente repetitivo (dice lo mismo tres veces)
- Señal: no se siente escuchado
- Técnica: reflejo activo — "Déjame confirmar que he entendido bien: [resumen con sus palabras]. ¿Es correcto?"

### 3. El cliente que amenaza con irse
- Técnica: no contraatacar, explorar
- Frase: "Lo último que queremos es perderte como cliente. ¿Me puedes contar qué necesitaría cambiar para que siguieras con nosotros?"

### 4. El cliente que siempre pide excepciones
- Técnica: ser claro sobre lo que no puedes y generoso con lo que sí
- Frase: "En este caso concreto no puedo [X], pero sí puedo [Y] que creo que te resuelve igual el problema."

### 5. El cliente que escribe para desahogarse (no para resolver)
- Técnica: acuse de recibo emocional antes de cualquier pregunta técnica
- Frase: "Gracias por tomarte el tiempo de escribir. Lo que describes no debería haber pasado y entendemos perfectamente tu frustración."

## Plantillas de respuesta listas para usar

Cuéntame el tipo de incidente que más se repite en tu soporte y te escribiré:
1. Plantilla de primera respuesta (en menos de 2 horas)
2. Plantilla de actualización cuando no tienes solución aún
3. Plantilla de cierre que invita al cliente a valorar la experiencia
4. Guión para la llamada telefónica difícil
5. Email de recuperación post-incidente que fideliza

**El objetivo final**: que el cliente cierre el ticket pensando "qué bien me han tratado", no "menos mal que ya terminó".
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 25,
                'use_case'         => 'Mejorar la calidad de la comunicación del equipo de soporte para reducir el churn y convertir incidentes en experiencias positivas.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Propuesta comercial que convence',
                'description'      => 'Escribe propuestas que el cliente lee de principio a fin y que cierran sin necesidad de perseguir la respuesta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas especializado en propuestas comerciales para freelancers y consultores independientes. Ayúdame a escribir propuestas que el cliente lea, entienda y apruebe sin necesitar que le persiga durante semanas.

## Por qué la mayoría de las propuestas no funcionan

El error más común: una propuesta que habla de ti, de tus credenciales, de tu metodología y de tus herramientas. El cliente no compra tu proceso — compra el resultado que espera obtener. Una propuesta que centra al cliente gana 3 veces más que una que centra al proveedor.

## La estructura de la propuesta que convierte (6 secciones)

### Sección 1 — El problema (no el tuyo, el de ellos)
Empieza demostrando que has escuchado. Describe el problema del cliente con sus propias palabras:
- La situación actual: "Actualmente, [empresa] está [descripción del estado]"
- El impacto: "Esto está causando [consecuencias concretas: tiempo, dinero, fricción]"
- El coste de no resolver: "Si esto continúa sin resolverse, [escenario negativo específico]"

Esta sección no propone nada. Solo demuestra comprensión. Si el cliente lee esto y piensa "sí, exactamente", ya has ganado la mitad.

### Sección 2 — El objetivo (en sus términos)
Define el resultado esperado de forma medible:
- "Al finalizar este proyecto, [empresa] habrá [resultado concreto y medible]"
- Evita objetivos vagos como "mejorar la presencia online". Di "aumentar el tráfico orgánico en un 40% en 6 meses".

### Sección 3 — Mi propuesta (qué hago yo y cómo)
Aquí sí hablas de ti, pero siempre conectado al resultado:

| Fase | Qué incluye | Entregable | Plazo |
|---|---|---|---|
| Fase 1 | ... | ... | Semana 1-2 |
| Fase 2 | ... | ... | Semana 3-5 |
| Fase 3 | ... | ... | Semana 6-8 |

Regla de oro: el cliente no compra horas — compra entregables. Define siempre los entregables.

### Sección 4 — Inversión (no "precio" ni "coste")
Presenta el precio con contexto:
- "La inversión para este proyecto es de [X€]"
- Si puedes, añade: "Esto equivale a [X días de trabajo del equipo interno / Y meses de herramienta / Z% del coste que el problema genera cada mes]"
- Opciones: si tienes más de un tier, ofrece 3 opciones (básico, recomendado, premium). La mayoría elige la del medio.

### Sección 5 — Por qué yo (prueba social específica)
No un párrafo genérico sobre tu trayectoria. Un caso de estudio de una empresa similar:
- "Para [empresa del mismo sector / tamaño], realicé [proyecto similar] que resultó en [resultado con números]"
- Si tienes testimonio escrito del cliente, úsalo textualmente

### Sección 6 — Próximos pasos (sin fricción)
Termina con una acción clara y sencilla:
- "Si estás de acuerdo con esta propuesta, el siguiente paso es [acción simple: firmar aquí / responder este email con 'adelante' / agendar una llamada de 15 minutos]"
- Añade una fecha: "Esta propuesta está disponible en estos términos hasta el [fecha — 2 semanas vista]"

## Los 3 elementos que hacen que el cliente responda rápido

1. **La propuesta llega el mismo día de la reunión o al día siguiente**: cada día que pasa, el cliente pierde el contexto emocional de la conversación y la propuesta compite con otras prioridades
2. **Es corta**: 1-3 páginas. Si necesitas más, añade un anexo técnico opcional
3. **Tiene un precio claro**: las propuestas con "presupuesto a consultar" o rangos amplios generan más preguntas que respuestas

## Tu turno

Cuéntame:
1. ¿Para qué tipo de proyecto estás escribiendo la propuesta?
2. ¿Qué información tienes del cliente y el problema que han descrito?
3. ¿Cuánto cobras y cuáles son los entregables principales?

Con eso escribo la propuesta completa lista para enviar, en el tono correcto para tu sector.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 30,
                'use_case'         => 'Escribir propuestas comerciales para proyectos freelance que el cliente aprueba sin necesitar seguimiento.',
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
