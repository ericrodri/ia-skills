<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills89Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de guerrilla en B2B — tácticas de bajo coste y alto impacto para startups',
                'description'      => 'Aprende tácticas de marketing de guerrilla adaptadas al B2B: acciones creativas de bajo presupuesto que generan visibilidad, conversación y leads sin depender de grandes campañas de paid.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing con experiencia en startups B2B con presupuestos limitados que han logrado visibilidad y generación de pipeline con tácticas no convencionales. Necesito ideas y un plan de acción para generar impacto de marketing sin un presupuesto grande.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el mercado objetivo y cuánto sabes ya sobre dónde se concentra tu ICP?
2. ¿Cuál es el presupuesto real disponible para marketing este trimestre?
3. ¿Tienes ya una presencia mínima: web, LinkedIn de empresa, perfil del fundador activo?
4. ¿Cuáles son los 2-3 problemas que más duelen a tu ICP y sobre los que tienes perspectiva única?
5. ¿Qué tácticas de marketing has probado ya y con qué resultados?

## Por Qué el Marketing de Guerrilla Funciona en B2B

El marketing de guerrilla no es hacer el ridículo con una mascota en la calle. En B2B, es usar la creatividad y la asimetría de atención para generar más impacto con menos dinero que los competidores con más presupuesto.

**El principio de asimetría de atención:**
Los mercados B2B están saturados de contenido genérico, anuncios idénticos y mensajes que dicen lo mismo de formas diferentes. La guerrilla explota esta saturación: en un mar de lo mismo, cualquier cosa diferente e inesperada captura desproporcionadamente la atención.

**Las ventajas estructurales de la startup:**
- Puede actuar más rápido que las empresas grandes sin comités de aprobación
- Puede tomar riesgos de comunicación que las empresas consolidadas no se atreverían
- El fundador puede hablar en primera persona con autenticidad genuina
- Tiene menos que perder y más que ganar siendo disruptivo en comunicación

## Las 8 Tácticas de Guerrilla B2B con Mayor ROI

### Táctica 1: El Informe de Estado del Sector

Crea el informe de referencia de tu industria. Encuesta a 50-100 profesionales de tu ICP, analiza los datos y publica el informe con los resultados.

**Por qué funciona:**
- Los medios del sector lo citan (PR gratuita)
- Tu ICP lo descarga (leads cualificados)
- Te posiciona como referencia del sector sin hablar de tu producto

**Coste:** Tiempo + herramienta de encuesta gratuita (Typeform, Google Forms)
**Impacto esperado:** 200-1.000 descargas en las primeras semanas si el tema es relevante

### Táctica 2: El "Destructor del Competidor"

Crea contenido que compara directamente con los competidores establecidos: "Por qué las empresas de tu sector están abandonando [solución antigua] por [tu categoría de solución]".

**Reglas para hacerlo bien:**
- Basado en datos y hechos, no en opiniones
- Compara con la categoría o el status quo, no con empresas concretas por su nombre
- El tono es de análisis objetivo, no de ataque

**Distribución:** LinkedIn (formato carrusel o artículo), email a tu lista, Hacker News o equivalente en tu sector

### Táctica 3: El Proyecto de Datos Públicos

Construye una herramienta gratuita que usa datos públicos para producir un insight que tu ICP valora y que requiere tu conocimiento del sector para interpretar correctamente.

Ejemplos:
- Un tracker de precios del sector
- Un índice de tendencias construido con datos de LinkedIn o búsquedas de Google Trends
- Un benchmark público de métricas del sector (construido con datos anónimos de tus clientes o de fuentes públicas)

**Por qué funciona:** La herramienta te genera backlinks, menciones y tráfico orgánico permanente. El que la usa es exactamente tu ICP.

### Táctica 4: El Sabotaje del Evento de la Competencia

Cuando tu competidor o un actor del sector organiza un evento importante donde va tu ICP, activa marketing alrededor del evento sin ser el patrocinador.

**Cómo hacerlo:**
- Organiza un desayuno o afterwork para los asistentes al evento (antes o después)
- Crea contenido específico sobre los temas del evento la semana antes ("Lo que esperamos escuchar en [evento]")
- Compra palabras clave de búsqueda relacionadas con el evento durante los días del evento
- Live-tweet con perspectiva y análisis durante el evento (visibilidad entre asistentes)

**Coste:** Alquiler de espacio para el desayuno/cena + bebidas. Mucho menos que un stand de patrocinador.

### Táctica 5: La Campaña de Evangelización del Problema

En lugar de hablar de tu solución, convierte tu empresa en el evangelizador del problema que resuelves. Crea el lenguaje, las métricas y los marcos de referencia del problema.

**Ejemplo:** Si vendes software de gestión de proyectos, evangeliza el concepto de "deuda de proyecto" (igual que la deuda técnica). Define el término, cuantifica el coste, crea el vocabulario que el sector no tenía y que ahora asocia a tu empresa.

**Resultado:** En 6-12 meses, cuando alguien busque información sobre el problema que tu empresa nombró, tu contenido aparece primero.

### Táctica 6: El Co-Marketing con Empresas No Competidoras

Identifica 3-5 empresas que venden a tu mismo ICP sin competir contigo directamente. Propón proyectos de co-marketing: informe conjunto, webinar compartido, newsletter cruzada.

**Beneficios:**
- Accedes a la audiencia del partner sin pagarla
- Credibilidad por asociación
- Contenido de mayor calidad al combinar perspectivas

**Cómo proponerlo:** "Tenemos 800 suscriptores del perfil de CFO de pymes. Vosotros tenéis 1.200. ¿Hacemos un webinar conjunto sobre [tema de interés mutuo]?"

### Táctica 7: El Contenido que Avergüenza al Status Quo

Crea contenido que exponga un problema del status quo de tu industria de forma que genere conversación y tensión constructiva.

Ejemplos:
- "Por qué el 80% de los proyectos de [tu sector] fracasan" (con datos)
- "El error más caro que cometen las empresas de [tu ICP] y cómo evitarlo"
- "Lo que nadie te dice sobre [proceso que tu ICP realiza actualmente]"

**Clave:** El contenido no puede ser autopublicitario. Debe ser genuinamente útil aunque el lector nunca te contrate. Si en algún momento parece un anuncio disfrazado, pierde todo el impacto.

### Táctica 8: La Visibilidad en Comunidades de Terceros

Identifica las comunidades donde tu ICP pasa tiempo: grupos de Slack, foros, grupos de LinkedIn, subreddits, comunidades de Discord. Participa como experto, no como vendedor.

**La regla 80/20 de la participación en comunidades:**
80% del contenido que aportas es puro valor sin mención a tu empresa. 20% puede incluir referencias a tu trabajo cuando es genuinamente relevante para la conversación.

**El error a evitar:** Entrar en una comunidad y publicar un post de "presentación" que es un anuncio. La comunidad lo detecta inmediatamente y pierdes la credibilidad antes de ganártela.

## El Calendario de Guerrilla: 90 Días

| Mes | Táctica | Objetivo | Métrica |
|---|---|---|---|
| 1 | Informe del sector (diseño + lanzamiento) | 300 descargas | Leads generados |
| 1-2 | Participación activa en 3 comunidades de ICP | Reconocimiento en la comunidad | Menciones, respuestas recibidas |
| 2 | Co-marketing con 1 empresa partner | Acceso a audiencia nueva | Suscriptores nuevos |
| 2-3 | Táctica de evento del sector | Visibilidad durante el evento | Nuevos contactos LinkedIn |
| 3 | Proyecto de datos públicos / herramienta gratuita | Tráfico orgánico recurrente | Usuarios de la herramienta |

## Entregables

Con el contexto que me des, produce:
1. Selección de las 3 tácticas más adecuadas para tu mercado con justificación y plan de ejecución
2. Brief del informe del sector: tema, preguntas de la encuesta y plan de distribución
3. Lista de 5 comunidades de ICP con la estrategia de participación para cada una
4. Plan de co-marketing: perfiles de empresa partner, propuesta de colaboración y formato
5. Calendario de 90 días con acciones semanales, responsable y métricas de seguimiento
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y ejecutar tácticas de marketing de guerrilla B2B de bajo coste y alto impacto que generen visibilidad y leads sin depender de grandes presupuestos de paid',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de deuda técnica — auditar, documentar y planificar la reducción sin frenar la entrega',
                'description'      => 'Aprende a auditar el estado de la deuda técnica de tu codebase, documentarla de forma que sea visible para producto y negocio, y crear un plan de reducción que no bloquee las entregas del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager y arquitecto de software con experiencia gestionando la deuda técnica en equipos de producto que no pueden parar la entrega de funcionalidades mientras abordan los problemas estructurales del código. Necesito un sistema para auditar, priorizar y reducir la deuda técnica de forma sostenible.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el síntoma principal de la deuda técnica en tu equipo ahora? (velocidad de entrega lenta, bugs frecuentes, dificultad para onboarding de nuevos devs, tiempo de build excesivo)
2. ¿Cuánto tiempo del sprint actual se gasta en trabajo no planificado por problemas técnicos?
3. ¿Tiene el equipo visibilidad compartida de la deuda técnica o está en la cabeza de cada dev?
4. ¿Cómo es la relación actual con producto/negocio respecto a dedicar tiempo a deuda técnica?
5. ¿Cuál es el stack principal y cuántos años lleva el proyecto?

## Qué es la Deuda Técnica y Qué No Es

La deuda técnica no es sinónimo de código malo o de trabajo incompleto. Martin Fowler la define como la diferencia entre la solución correcta que deberías haber implementado y la solución más rápida que implementaste bajo presión de tiempo.

**Los 4 cuadrantes de la deuda técnica (Fowler):**

| | Deliberado | Imprudente |
|---|---|---|
| **Consciente** | "Sabemos que es un atajo, lo documentamos y lo arreglaremos en Q2" | "No tenemos tiempo para diseñarlo bien" |
| **Inconsciente** | "Adoptamos el patrón que era mejor práctica hace 5 años" | "¿Qué son las capas de arquitectura?" |

**Deuda deliberada y consciente:** La más manejable. Se tomó una decisión informada con un plan de resolución.
**Deuda imprudente e inconsciente:** La más peligrosa. No se reconoce hasta que el coste es muy alto.

## La Auditoría de Deuda Técnica: Cómo Hacerla

### Paso 1: Recopilar las Percepciones del Equipo

La deuda técnica es un problema humano además de técnico. El primer paso es hacer visible lo que está en la cabeza de los desarrolladores.

**La sesión de deuda técnica (90 min con el equipo):**

1. Cada dev escribe en post-its (o tarjetas de Miro/Mural) los 3 problemas técnicos que más les ralentizan
2. Se agrupan por tema (arquitectura, tests, infra, documentación, dependencias)
3. Se priorizan por impacto en la velocidad del equipo: votación por puntos (dot voting)
4. Se documentan los 10-15 más críticos

**Las categorías de deuda técnica más frecuentes:**

| Categoría | Ejemplos |
|---|---|
| Arquitectura | Acoplamiento fuerte, violación de SOLID, código spaghetti |
| Testing | Sin tests, tests frágiles, cobertura < 20% en módulos críticos |
| Dependencias | Librerías sin actualizar, versiones EOL, vulnerabilidades conocidas |
| Documentación | Sin documentación de arquitectura, README desactualizado |
| Infraestructura y DevOps | Build lento, deploy manual, sin entorno de staging |
| Rendimiento | Queries N+1, caches sin invalidar, memory leaks conocidos |
| Seguridad | Secretos en el código, dependencias con CVEs, sin rate limiting |

### Paso 2: Priorizar con el Impact-Effort Matrix

No toda la deuda técnica merece el mismo esfuerzo. Prioriza con dos dimensiones:

**Impacto en el negocio:**
- ¿Cuánto ralentiza la entrega de nuevas features?
- ¿Con qué frecuencia genera bugs o incidencias?
- ¿Cuánto dificulta el onboarding de nuevos desarrolladores?
- ¿Supone un riesgo de seguridad o disponibilidad?

**Esfuerzo de resolución:**
- ¿Cuántos developer-días requiere?
- ¿Cuánto riesgo de regresión introduce el cambio?
- ¿Tiene dependencias con otros cambios?

**La matriz resultante:**

| Impacto alto + Esfuerzo bajo | Impacto alto + Esfuerzo alto |
|---|---|
| QUICK WINS — Hacer ya | PROYECTOS ESTRATÉGICOS — Planificar en roadmap |

| Impacto bajo + Esfuerzo bajo | Impacto bajo + Esfuerzo alto |
|---|---|
| OPORTUNISMO — Hacer cuando se pase por el módulo | IGNORAR O ELIMINAR |

### Paso 3: Documentar el Tech Debt Backlog

Cada ítem de deuda técnica debe documentarse como una historia de usuario técnica en el backlog de producto:

```
TÍTULO: Migrar el módulo de autenticación de JWT ad-hoc a una librería estándar

CONTEXTO:
El módulo de auth fue escrito hace 3 años sin librería. Tiene 2 CVEs conocidos
y cualquier cambio de seguridad requiere modificar 15 archivos distintos.

IMPACTO ACTUAL:
- 3h de trabajo extra por cada cambio de seguridad en auth
- 2 bugs en producción este trimestre relacionados con el módulo
- Nuevo dev tardó 1 semana en entender el flujo de auth

SOLUCIÓN PROPUESTA:
Reemplazar con [librería] — 3 developer-días de trabajo + 1 día de testing

CRITERIOS DE DONE:
- Tests de auth al 90% de cobertura
- Documentación de los flujos actualizada
- Zero regresiones en el smoke test de login

PRIORIDAD: Alta (Quick Win)
ESTIMACIÓN: 4 developer-días
```

## La Estrategia de Reducción: Los Tres Modelos

### Modelo 1: El 20% del Sprint

Reservar el 20% de la capacidad de cada sprint para deuda técnica. Equivale a 1 día por dev por semana.

**Ventajas:** Predecible, sostenible, integrado en el ritmo del equipo
**Desventaja:** Lento para deuda severa

### Modelo 2: El Sprint Técnico

Una vez al trimestre, un sprint dedicado exclusivamente a deuda técnica. Sin nuevas features.

**Ventajas:** Permite abordar proyectos de mayor envergadura
**Desventaja:** Resistencia de producto, difícil de mantener el ritmo

### Modelo 3: El Campamento (Boy Scout Rule)

Regla: cualquier código que toques en el contexto de una feature, lo dejas mejor de lo que lo encontraste. No es un bloque de tiempo dedicado, es una cultura.

**Ventajas:** Reduce la deuda de forma continua sin coste visible para producto
**Desventaja:** Solo funciona en la deuda menor y con un equipo disciplinado

**La recomendación:** Combinar el 20% del sprint + el campamento para la deuda recurrente, con sprints técnicos trimestrales para la deuda estructural.

## Cómo Hablar de Deuda Técnica con Producto y Negocio

El mayor error: presentar la deuda técnica como un problema técnico abstracto. Producto y negocio necesitan entenderla en términos de impacto de negocio.

**El lenguaje correcto:**

| Lo que dices al equipo | Lo que dices a producto/negocio |
|---|---|
| "El módulo de autenticación no tiene tests" | "Cada cambio de seguridad nos cuesta 3 días extras y genera riesgo de bugs en producción" |
| "La arquitectura está muy acoplada" | "Añadir la feature X que pedís os va a costar 6 semanas en lugar de 2, y aquí está la razón" |
| "Las queries son N+1" | "El tiempo de carga del dashboard crece linealmente con el número de registros. Para el cliente X con 50.000 registros, ya tarda 8 segundos" |

**La propuesta de negocio de la deuda técnica:**

Cuando pidas tiempo para deuda técnica, presenta el business case:
"Invertir 2 sprints en refactorizar el módulo de facturación nos permitirá entregar las siguientes 3 features en la mitad de tiempo. El ROI estimado es de 6 sprints ganados en los próximos 6 meses."

## Métricas de Salud Técnica

Para hacer el progreso visible, trackea métricas de salud técnica:

| Métrica | Herramienta | Objetivo |
|---|---|---|
| Cobertura de tests | Jest/PHPUnit + Coverage report | > 70% en módulos críticos |
| Tiempo de build | CI/CD dashboard | < 5 minutos |
| Número de CVEs conocidos | Dependabot, Snyk | 0 críticos |
| Lead time de cambio | DORA metrics | < 1 semana |
| Tasa de cambios fallidos | DORA metrics | < 5% |
| Deuda técnica en horas | SonarQube | Reducción trimestral |

## Entregables

Con el contexto que me des, produce:
1. Plantilla de sesión de auditoría de deuda técnica con el equipo (agenda, dinámicas y output)
2. Tech Debt Backlog: template de story técnica con los campos relevantes
3. Matriz de priorización de deuda técnica con los criterios de impacto y esfuerzo
4. Presentación de negocio: cómo presentar la deuda técnica prioritaria a producto en 5 diapositivas
5. Plan de reducción de deuda para el próximo trimestre: modelo elegido, ítems priorizados y métricas de éxito
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Auditar, documentar y planificar la reducción de la deuda técnica con un sistema que haga el problema visible para producto y negocio y genere progreso sostenible',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de pitch decks y presentaciones que convencen inversores y directivos',
                'description'      => 'Aprende la estructura visual y narrativa de una presentación que convence: el arco de historia, la jerarquía visual, los slides que nunca fallan y los errores que destruyen la credibilidad de un pitch deck.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de comunicación y estratega de presentaciones con experiencia preparando pitch decks para rondas de financiación, presentaciones a consejos de administración y presentaciones comerciales de alto valor. Necesito diseñar una presentación que no solo informe sino que convenza y mueva a la acción.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de presentación es? (pitch deck para inversores, presentación a directivos internos, presentación comercial, presentación de producto)
2. ¿Cuánto tiempo tienes para presentar y cuántos slides son el máximo aceptable?
3. ¿Quién es la audiencia exacta y cuál es la decisión que quieres que tomen?
4. ¿Tienes ya un borrador o empezamos desde cero?
5. ¿Tienes identidad de marca definida o necesitamos diseñar el estilo visual también?

## El Principio Fundamental: Una Presentación es una Historia

La diferencia entre una presentación que se olvida y una que se recuerda no está en las diapositivas: está en la narrativa. Las personas no toman decisiones basándose en datos: toman decisiones basándose en historias que los datos apoyan.

**El arco narrativo de toda presentación que convence:**

1. **Situación:** El mundo tal como es hoy (contexto compartido con la audiencia)
2. **Complicación:** El problema o la tensión que hace que el statu quo sea insostenible
3. **Pregunta implícita:** ¿Qué hay que hacer? (la audiencia ya se la está haciendo)
4. **Respuesta:** Tu solución, tu propuesta, tu oportunidad
5. **Prueba:** La evidencia de que funciona
6. **Llamada a la acción:** Lo que necesitas de la audiencia

Esta estructura funciona tanto para un pitch deck de 10 slides como para una presentación de consejo de 30.

## La Estructura del Pitch Deck para Inversores (10-12 Slides)

### Slide 1: El Hook (La Diapositiva de Apertura)

No empieces con "quiénes somos". Empieza con el problema de la forma más impactante posible.

Una estadística que golpea: "El 73% de los proyectos de [sector] fracasan en los primeros 18 meses por [causa]."
Una historia de cliente: "María tiene 12 empleados y pierde 3 horas al día haciendo X manualmente."
Una pregunta que genera tensión: "¿Por qué en 2025 todavía hacemos [proceso anticuado] de la misma forma que en 1995?"

### Slide 2: El Problema

Un slide de problema bien hecho responde a: ¿Quién tiene este problema? ¿Qué le cuesta? ¿Por qué las soluciones actuales no funcionan?

Evita el slide de "los problemas son A, B y C" en tres bullets iguales. Jerarquiza: hay un problema principal y consecuencias secundarias.

### Slide 3: La Solución

La solución en un pitch no es el listado de features. Es la transformación: "Pasas de [estado actual] a [estado deseado] con [mecanismo]."

Regla: si la descripción de tu solución podría aplicarse a cualquier otro producto del sector, es demasiado genérica.

### Slide 4: La Demo o el Producto (Opcional)

Si el producto existe y es visual, muéstralo. Un screenshot del producto bien diseñado vale más que cualquier descripción. Si el producto no existe, un prototipo de Figma de 3 pantallas es suficiente.

### Slide 5: El Mercado

El inversor necesita ver que la oportunidad justifica la inversión. Presenta el TAM (Total Addressable Market), SAM (Serviceable Addressable Market) y SOM (Serviceable Obtainable Market) con metodología clara, no con números de analista citados sin contexto.

**El error más frecuente:** "El mercado de [categoría amplia] es de 500 billones de dólares." Los inversores no se impresionan con un % de un mercado enorme que no justificas. Prefieren un mercado pequeño bien argumentado a uno enorme sin lógica.

### Slide 6: El Modelo de Negocio

¿Cómo ganas dinero? ¿Cuál es el precio? ¿Cuál es la unidad económica (LTV/CAC)? ¿Cuál es el margen?

No necesita ser complicado: "Suscripción anual de 5.000€ por empresa. Margen bruto del 80%. LTV/CAC objetivo de 4x."

### Slide 7: La Tracción

La tracción es la prueba de que el problema es real y que tu solución funciona. Dependiendo del estadio:
- Pre-revenue: usuarios beta, cartas de intención, entrevistas con clientes
- Early revenue: clientes pagando, ARR, tasa de crecimiento mensual
- Growth: métricas de retención, NPS, logos de clientes conocidos

### Slide 8: La Competencia

El slide de competencia más honesto y más efectivo: muestra el mapa de alternativas (incluyendo "no hacer nada" como alternativa) y posiciona claramente dónde estás y por qué esa posición es defendible.

### Slide 9: El Equipo

Los inversores en etapa temprana invierten en el equipo tanto como en la idea. Muestra:
- Por qué vosotros (experiencia relevante, unfair advantage)
- Por qué ahora (qué ha cambiado que hace posible esto)
- Qué posiciones clave quedan por cubrir

### Slide 10: El Ask

Cuánto buscas, en qué lo vas a usar y qué hito estratégico te permite alcanzar.

Forma: "Buscamos [X€] para [18 meses] que nos permiten llegar a [hito concreto: ARR de X€, lanzamiento en mercado Y, 100 clientes]."

## Diseño Visual: Las Reglas que Siempre Funcionan

### La Jerarquía de Lectura de Cada Slide

Cada slide debe responder a una sola pregunta. El título del slide es la respuesta, no el tema.

| ❌ Título descriptivo | ✅ Título con insight |
|---|---|
| "Mercado" | "El mercado de X crece al 23% anual y nadie lo tiene resuelto" |
| "Modelo de negocio" | "Suscripción anual a 5.000€ con margen del 80%" |
| "Equipo" | "El único equipo que ha construido esto antes" |

### Los 5 Principios de Diseño de Slides

1. **Una idea por slide:** Si tienes más de una idea, tienes más de un slide
2. **Máximo 30 palabras de texto por slide:** Si hay más, es un documento, no una presentación
3. **La imagen hace el trabajo emocional, el texto hace el trabajo cognitivo**
4. **Contraste y espacio en blanco:** El espacio vacío no es espacio perdido, es énfasis
5. **Coherencia tipográfica:** Máximo 2 tipografías, 3 tamaños de texto

### El Slide de Solo Números

Cuando tienes un dato poderoso, dale todo el espacio:

```
                    73%

        de las empresas del sector X
        no tienen solución para Y
```

Un número grande en un slide vacío se queda grabado en la memoria. El mismo dato en un párrafo de 4 líneas, no.

## Errores que Destruyen un Pitch Deck

| Error | Por qué importa |
|---|---|
| Demasiado texto | La audiencia lee, no escucha. Pierdes el control de la narrativa |
| Slides de bullets idénticos | Sin jerarquía = sin importancia relativa = sin mensaje |
| Gráficas sin contexto | Una gráfica que sube sin escala ni comparación no dice nada |
| Inconsistencia visual | Diferentes fuentes, colores y estilos = falta de profesionalidad |
| Slides de agenda al inicio | El tiempo del inversor/directivo es escaso. Ve al grano |
| Terminar con "¿Preguntas?" | Termina con la llamada a la acción clara: "¿Cuál es el próximo paso?" |

## Entregables

Con el contexto que me des, produce:
1. Estructura completa de la presentación: slides, título de cada uno y la idea central que comunica
2. Narrativa del pitch: el guión de lo que dirás en cada slide (no el texto de los slides, sino lo que hablas)
3. Especificación visual: paleta de colores, tipografías y estilo de las diapositivas
4. Los 3 slides más críticos desarrollados en detalle (texto + descripción del visual)
5. Checklist de revisión final antes de presentar: los 10 errores a eliminar
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un pitch deck o presentación de alto impacto con narrativa, estructura de slides y diseño visual que convenza a inversores, directivos o clientes',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de transformación digital a empresas tradicionales — cómo vender tecnología con desconfianza',
                'description'      => 'Aprende a vender proyectos de digitalización a empresas tradicionales que desconfían de la tecnología: gestión del miedo al cambio, construcción de confianza y cómo hacer que el directivo de una empresa clásica diga sí.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia vendiendo proyectos de transformación digital a empresas industriales, de distribución, retail tradicional y pymes de sectores clásicos donde la tecnología no es el core business y existe una resistencia cultural al cambio. Necesito estrategias para cerrar ventas en entornos donde el cliente tiene miedo a la tecnología, ha sido quemado por proyectos anteriores o simplemente no ve la urgencia.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de solución o proyecto estás vendiendo? (ERP, digitalización de operaciones, e-commerce, automatización de procesos, analítica)
2. ¿Cuál es el perfil del decisor? (CEO familiar, director de operaciones, gerente de una pyme, consejo de administración)
3. ¿Cuáles son las objeciones más frecuentes que escuchas? ("no es el momento", "ya lo intentamos", "nuestro negocio es diferente")
4. ¿Cuánto dura el ciclo de venta típico y en qué fase suelen morir los proyectos?
5. ¿Tienes casos de éxito en el mismo sector o perfil de empresa que el prospecto?

## Por Qué la Venta de Transformación Digital es Diferente

En la venta de tecnología a empresas tecnológicas, el cliente ya tiene un vocabulario, ha comparado soluciones y sabe lo que quiere. En la venta a empresas tradicionales, el cliente no sabe lo que quiere porque no sabe lo que es posible, desconfía de lo que no conoce y ha visto demasiados proyectos tecnológicos prometedores que fracasaron.

**Los miedos reales del directivo de empresa tradicional:**
- "Esto va a costar el doble de lo que me dicen y tardará el triple"
- "Voy a depender de esta empresa para siempre si implemento esto"
- "Mis empleados no lo usarán y quedaré mal delante de todo el mundo"
- "El negocio no puede parar durante la implementación"
- "Nadie de mi empresa entiende de esto y nos van a enredar"

Estos miedos son racionales basados en experiencias reales. Tu trabajo no es minimizarlos: es abordarlos directamente y con evidencia.

## La Estrategia de Ventas en 4 Fases

### Fase 1: Construir Confianza Antes de Vender

El directivo de empresa tradicional no compra a desconocidos. La primera reunión no es de venta: es de escucha y de posicionamiento como alguien que entiende su negocio.

**Las preguntas que construyen confianza:**
- "¿Cómo gestionáis actualmente [proceso específico]?"
- "¿Qué intentasteis cambiar en los últimos años y qué funcionó o no?"
- "¿Cuál es el mayor reto operativo que tenéis ahora mismo?"
- "¿Cuándo decís que el negocio es diferente, en qué concreto os diferenciáis?"

**Lo que NO decir en la primera reunión:**
- Cualquier frase que empiece por "la transformación digital..."
- Hablar de tu producto o solución antes de entender el problema
- Usar jerga tecnológica (API, cloud nativo, microservicios) con alguien que no la domina
- Presentar casos de éxito genéricos de grandes empresas cuando el cliente es una pyme

### Fase 2: El Diagnóstico de Situación

Antes de proponer nada, hay que hacer visible el coste real de no cambiar. El cliente no comprará si no siente la urgencia, y la urgencia solo existe cuando el coste del statu quo es mayor que el coste del cambio.

**El cuestionario de diagnóstico económico:**

"Para poder proponeros algo que tenga sentido, necesito entender algunos números. ¿Os parece bien que calculemos juntos el impacto de [problema específico]?"

| Pregunta de diagnóstico | Por qué la haces |
|---|---|
| ¿Cuántos empleados dedican tiempo a [proceso manual]? | Para calcular el coste laboral del proceso |
| ¿Cuántos errores por mes genera este proceso? ¿Cuánto cuesta cada error? | Para cuantificar el coste de calidad |
| ¿Cuántos clientes perdéis al año por [problema de experiencia]? | Para calcular el impacto en ventas |
| ¿Cuánto tiempo tarda en llegar el dato de X a la persona que lo necesita? | Para visibilizar el coste de la lentitud |

El objetivo: que el cliente calcule junto contigo que el problema le cuesta entre X€ y Y€ al año. Cuando el cliente saca el número, cree en él. Si lo sacas tú, lo cuestiona.

### Fase 3: La Propuesta que Reduce el Miedo al Riesgo

La propuesta técnica tradicional genera resistencia porque parece un compromiso enorme. La propuesta que convierte en empresas tradicionales tiene estas características:

**El piloto de bajo riesgo:**
No vendas la transformación completa en el primer contrato. Vende un piloto acotado: un proceso, un departamento, un período de tiempo. Si el piloto funciona, el resto viene solo.

"En lugar de abordar todo el ERP de golpe, os propongo que empecemos por el módulo de almacén durante 3 meses. Inversión de [X€], resultado medible al cabo de 90 días. Si los resultados son los que esperamos, seguimos. Si no, habréis invertido poco para aprender mucho."

**Las garantías que reducen el miedo:**
- Precio cerrado (sin sorpresas al alza)
- Timeline comprometido con penalizaciones si no se cumple
- Formación incluida (el cliente no depende de ti para usar el sistema)
- Soporte post-implementación con SLA claro
- Cláusula de salida: si el cliente no está satisfecho en 90 días, puede salir sin coste

**El caso de éxito del mismo sector y tamaño:**
Un cliente del mismo sector, con el mismo tamaño de empresa y el mismo perfil de decisor, que ha pasado por el mismo camino que el prospecto está a punto de recorrer, es más persuasivo que 100 páginas de presentación.

### Fase 4: El Manejo de las Objeciones Específicas de Empresa Tradicional

| Objeción | Lo que significa realmente | Tu respuesta |
|---|---|---|
| "No es el momento" | No ven la urgencia o no tienen el presupuesto claro | "¿Qué tendría que ocurrir para que fuera el momento correcto?" |
| "Ya lo intentamos antes y fue un desastre" | Tienen miedo fundado basado en experiencia real | "¿Qué salió mal exactamente? ¿Qué haríamos diferente esta vez?" |
| "Nuestro negocio es diferente" | No ven casos de éxito relevantes para ellos | "¿En qué concreto es diferente vuestro proceso? Quiero entenderlo bien antes de proponer nada" |
| "Mis empleados no lo usarán" | Han visto sistemas implementados que nadie usa | "La adopción es el reto principal. Aquí está cómo lo gestionamos con otros clientes similares" |
| "Es demasiado caro" | No ven el ROI suficientemente claro | "¿Podemos revisar los números que calculamos antes? ¿A qué precio tendría sentido para vosotros?" |

## La Negociación con el Decisor Conservador

El decisor de empresa tradicional no negocia como el CFO de una startup. Negocia desde el miedo y la prudencia:

**Sus prioridades en la negociación:**
1. No quedar mal delante de su equipo o de la familia si es empresa familiar
2. No comprometerse a algo que no puede controlar
3. No depender de un proveedor externo para su operación core

**Lo que puedes ceder (genera percepción de control sin perder el negocio):**
- Fase de inicio más pequeña (piloto antes del proyecto completo)
- Mayor detalle del contrato y de los entregables
- Más hitos de revisión durante el proyecto
- Opción de salida parcial si un módulo no cumple expectativas

## Entregables

Con el contexto que me des, produce:
1. Guión de la primera reunión: preguntas de descubrimiento y cómo cerrar el diagnóstico
2. Plantilla de diagnóstico económico: cálculo del coste del statu quo con los datos del cliente
3. Estructura de propuesta de piloto de bajo riesgo: fases, precio, garantías y criterios de éxito
4. Respuestas a las 5 objeciones más frecuentes en tu mercado con scripts completos
5. Plan de referencias: cómo construir y usar casos de éxito del mismo sector para cerrar deals
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Vender proyectos de digitalización a empresas tradicionales superando el miedo al cambio, construyendo confianza y diseñando propuestas de bajo riesgo percibido',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en hardware + software — gestionar productos con componentes físicos y digitales',
                'description'      => 'Aprende las especificidades de gestionar un producto que combina hardware y software: ciclos de desarrollo distintos, supply chain, firmware, y cómo alinear los roadmaps de la parte física y la digital.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con experiencia en productos que combinan hardware y software: dispositivos IoT, wearables, productos de domótica, herramientas industriales conectadas y gadgets de consumo con app. Necesito entender las especificidades de gestionar un producto donde el hardware y el software tienen ciclos de vida, restricciones y dependencias muy diferentes.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de producto hardware+software estás gestionando o desarrollando?
2. ¿En qué fase está el producto? (concepto, prototipo, MVP, producción a escala)
3. ¿Cuál es la mayor fricción actual entre el equipo de hardware y el de software?
4. ¿Cuántos SKUs o variantes del hardware tienes o prevés tener?
5. ¿Tienes ya un proceso de gestión de versiones de firmware o es algo que necesitas construir?

## Por Qué el Product Management de Hardware+Software es Diferente

En un producto puramente software, puedes desplegar en producción a las 2 de la tarde y revertir a las 3 si algo sale mal. En hardware, un error de diseño que llega a producción puede significar decenas de miles de unidades defectuosas, recalls costosos y daño de reputación irreversible.

**Las diferencias fundamentales:**

| Dimensión | Software puro | Hardware + Software |
|---|---|---|
| Ciclo de iteración | Días o semanas | Meses o años para hardware |
| Coste de un error en producción | Bajo (despliegue de fix en horas) | Alto (recall, material de reposición, logística) |
| Reversibilidad de decisiones | Alta | Baja (una vez en producción, el hardware es fijo) |
| Cadena de suministro | No aplica | Crítica: componentes, proveedores, lead times |
| Certificaciones | Pocas (a veces ninguna) | CE, FCC, UL, IP ratings — lentas y costosas |
| Actualizaciones post-lanzamiento | Completas vía software | Parciales (firmware) o imposibles (hardware) |

## Los Dos Roadmaps que Debes Gestionar en Paralelo

### El Roadmap de Hardware

El roadmap de hardware tiene una cadencia mucho más lenta y cada decisión es más costosa de revertir:

| Fase | Duración típica | Entregables | Gates de decisión |
|---|---|---|---|
| Concepto y especificación | 2-4 semanas | BOM inicial, especificaciones funcionales | ¿Construimos o compramos componentes? |
| EVT (Engineering Validation Test) | 4-8 semanas | Primer prototipo funcional | ¿El diseño electrónico funciona? |
| DVT (Design Validation Test) | 4-8 semanas | Prototipo con carcasa final | ¿El diseño industrial es correcto? |
| PVT (Production Validation Test) | 4-8 semanas | Primeras unidades de producción | ¿El proceso de manufactura funciona? |
| MP (Mass Production) | Continuo | Producto final | ¿La calidad es consistente? |

**La regla de las decisiones de hardware:**
Cuanto más tarde en el proceso de desarrollo, más cara es una modificación. Un cambio de componente en la fase EVT cuesta 10x menos que el mismo cambio en DVT y 100x menos que en producción.

### El Roadmap de Software y Firmware

El firmware es el software que vive dentro del hardware. Tiene sus propias complejidades:

**Versiones de firmware:**
- El firmware v1.0 debe ser compatible con el hardware v1.0 pero también con el v2.0
- Los usuarios no siempre actualizan el firmware automáticamente (a diferencia de las apps)
- Un firmware defectuoso puede "brickear" el dispositivo si falla durante la actualización

**Gestión de versiones de firmware en producción:**
```
Regla: Nunca depreces un firmware que tiene usuarios activos sin una estrategia de migración clara.

Estrategia de actualización OTA (Over-The-Air):
1. Rollout gradual (5% → 20% → 50% → 100%)
2. Monitoring de errores post-update en tiempo real
3. Rollback automático si la tasa de errores supera el umbral
4. Notificación al usuario del cambio con opción de retrasar
```

## La Alineación de los Dos Roadmaps: El Mayor Reto

El conflicto más frecuente en hardware+software: el equipo de software termina features antes de que el hardware esté listo para ellas, o el hardware tiene capacidades que el software no aprovecha todavía.

**Las dependencias más críticas a gestionar:**

| Dependencia | Ejemplo | Cómo gestionarla |
|---|---|---|
| Feature de software requiere nuevo sensor | App quiere medir X pero el hardware v1 no tiene el sensor | Planificar la feature para el hardware v2, no para el software actual |
| Hardware v2 introduce breaking changes en la API del firmware | Nuevo chip tiene diferente interfaz | Versionar la API del firmware y mantener compatibilidad backward |
| Certificación retrasada bloquea el lanzamiento del software | App lista pero el hardware no tiene la CE | Lanzar el software como beta cerrada hasta tener la certificación |
| Actualización de firmware requiere validación extensa | Bug fix crítico pero el QA del firmware tarda 3 semanas | Proceso de fast-track para security patches |

## La Gestión de la Supply Chain como Función de Producto

El PM de hardware+software debe entender la supply chain como parte del producto, no como una función externa:

**Los riesgos de supply chain que el PM debe monitorizar:**

| Riesgo | Señal de alerta | Mitigación |
|---|---|---|
| Componente crítico sin alternativa | Un solo proveedor para un chip esencial | Diseño con componentes alternativos desde el inicio |
| Lead time impredecible | El lead time de tu componente principal varía de 8 a 28 semanas | Stock buffer + dual sourcing |
| Cambio de componente del proveedor (EOL) | El proveedor anuncia fin de vida de un componente | Plan de migración de componente y re-validación |
| Cambio de aranceles o regulación | Nueva regulación de importación afecta tu BOM | Diversificación geográfica de manufactura |

**La BOM como documento de producto:**
La BOM (Bill of Materials) no es solo un documento de ingeniería. Es una decisión de producto: cada componente tiene un coste, una disponibilidad y un riesgo. El PM debe entender el top 10 de componentes por coste e impacto.

## KPIs de Producto Hardware+Software

| Métrica | Específica de hardware+software | Objetivo |
|---|---|---|
| Return rate | % de unidades devueltas por defecto | < 1% |
| Firmware adoption rate | % de dispositivos en la última versión de firmware | > 80% en 30 días post-release |
| Device activation rate | % de dispositivos vendidos que se activan y usan | > 85% |
| Mean time between failures (MTBF) | Tiempo medio entre fallos de hardware | Según especificación del producto |
| OTA update success rate | % de actualizaciones de firmware completadas con éxito | > 98% |
| Supply chain lead time vs. plan | Desviación del lead time previsto | < 20% de desviación |

## Entregables

Con el contexto que me des, produce:
1. Template de roadmap dual: hardware y software en la misma vista con dependencias visibles
2. Registro de decisiones de hardware: las 10 decisiones más críticas del producto y su grado de reversibilidad
3. Proceso de gestión de firmware: versiones, OTA rollout gradual y protocolo de rollback
4. Mapa de riesgos de supply chain con las mitaciones para cada riesgo identificado
5. KPI dashboard de producto hardware+software: métricas, fuentes de datos y cadencia de revisión
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar un producto que combina hardware y software con ciclos de desarrollo distintos, alineación de roadmaps, firmware y supply chain como parte del trabajo de producto',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Feedback continuo y coaching de managers — el sistema de feedback semanal que funciona',
                'description'      => 'Diseña un sistema de feedback continuo y coaching de managers que sustituya a la evaluación anual: reuniones 1:1 efectivas, modelos de feedback estructurado y cómo desarrollar a los managers del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo y director de personas con experiencia diseñando sistemas de feedback continuo y programas de desarrollo de managers en empresas tecnológicas en crecimiento. Necesito implementar un modelo de feedback y coaching que sea más efectivo que la evaluación anual de desempeño y que genere mejora real en la gente.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el sistema de evaluación actual? (evaluación anual, semestral, ninguna, OKRs sin feedback estructurado)
2. ¿Cuántos managers directos tienes y cuánta experiencia tienen en dar feedback?
3. ¿Cuál es el problema principal que quieres resolver? (managers que no dan feedback, feedback que no genera cambio, evaluación anual que sorprende a la gente, falta de desarrollo)
4. ¿Hay una cultura de feedback ya en la empresa o es algo nuevo?
5. ¿Cuánto tiempo pueden dedicar los managers al feedback y el desarrollo de su equipo?

## Por Qué la Evaluación Anual No Funciona

La evaluación anual es el sistema de feedback más utilizado y el menos efectivo:

- **Sesgo de recencia:** Los managers recuerdan los últimos 2-3 meses y olvidan los 9 anteriores
- **Efecto sorpresa:** El empleado recibe feedback negativo que debería haber llegado 8 meses antes
- **Parálisis por calificación:** La discusión se centra en el número de la evaluación, no en el desarrollo
- **Feedback demasiado escaso:** Una conversación de feedback al año es insuficiente para generar cambio
- **Desconexión con el trabajo diario:** La evaluación anual está desconectada de los proyectos en curso

**El modelo que reemplaza a la evaluación anual:**
Feedback continuo semanal + revisión de desempeño trimestral + conversación de carrera semestral.

## El Sistema de 1:1 Efectivo

El 1:1 es la herramienta de feedback continuo más poderosa y la más mal utilizada.

**Lo que el 1:1 NO debe ser:**
- Un status update del trabajo (para eso existe el standup)
- Una reunión de seguimiento de tareas
- Una conversación que el empleado siente que no controla

**Lo que el 1:1 SÍ debe ser:**
- El espacio donde el empleado lidera la conversación
- El lugar donde el manager da feedback en tiempo real sobre comportamientos recientes
- El espacio donde el manager ayuda al empleado a desbloquear obstáculos
- La conversación donde el empleado puede decir lo que no diría en público

**La agenda de 1:1 que funciona (30 min, semanal):**

```
1. El empleado abre (10 min):
   "¿Qué quieres abordar hoy?"
   Puede ser: un bloqueo, una duda, un logro, algo que le preocupa

2. Feedback del manager (10 min):
   Feedback específico sobre algo de la última semana
   (positivo o de mejora, siempre concreto y basado en comportamiento observable)

3. Acciones y seguimiento (5 min):
   ¿Qué va a hacer el empleado esta semana?
   ¿Qué va a hacer el manager para desbloquearlo?

4. Cierre con pregunta de calibración (5 min):
   "¿Cómo estás en general? ¿Hay algo más que necesites de mí?"
```

## El Modelo SBI de Feedback Estructurado

El feedback que no genera cambio es el feedback vago: "Necesitas mejorar tu comunicación." ¿Qué significa eso exactamente? ¿En qué contexto? ¿Qué debería hacer diferente?

**El modelo SBI (Situation-Behavior-Impact):**

```
SITUACIÓN: "En la reunión del lunes con el cliente X..."
COMPORTAMIENTO: "...interrumpiste al cliente tres veces antes de que terminara su pregunta..."
IMPACTO: "...y noté que el cliente dejó de hacer preguntas y la reunión terminó antes de lo previsto."
```

**Por qué funciona:**
- La situación ancla el feedback a un momento concreto (no generalización)
- El comportamiento describe lo observable (no la intención o el carácter)
- El impacto conecta el comportamiento con las consecuencias reales

**El cierre del feedback SBI:**
Después de describir la situación, el comportamiento y el impacto, pregunta al empleado:
"¿Cómo lo ves tú? ¿Qué cambiarías la próxima vez?"

Esto convierte el feedback en una conversación, no en un juicio.

## El Programa de Coaching de Managers

Los managers de primera línea son el factor de retención más importante de cualquier empresa. Sin embargo, raramente reciben formación o coaching sobre cómo ser mejores managers.

**Las 5 competencias core del manager que el programa debe desarrollar:**

| Competencia | Lo que significa | Señal de que no está desarrollada |
|---|---|---|
| Dar feedback efectivo | SBI, en tiempo real, sin incomodidad | Evita las conversaciones difíciles |
| Desarrollar a su equipo | Identifica el potencial, crea oportunidades | Solo asigna trabajo, no desarrolla |
| Gestionar la energía del equipo | Lee el estado emocional, previene el burnout | Sorprendido por la baja de alguien |
| Tomar decisiones con equipo | Involucra al equipo, mantiene la velocidad | Decide solo o delega en exceso |
| Comunicar hacia arriba | Visibiliza el trabajo del equipo, pide lo que necesita | El equipo invisible ante la dirección |

**La estructura del programa de coaching de managers:**

| Sesión | Cadencia | Formato | Contenido |
|---|---|---|---|
| Coaching individual | Mensual | 1:1 de 60 min entre el manager y su coach | Revisión de sus propios 1:1s, retos actuales |
| Workshop de habilidades | Trimestral | Grupo de managers (3-8 personas, 2h) | Una competencia en profundidad + roleplay |
| Peer learning | Mensual | Grupo de managers (informal, 45 min) | Compartir situaciones difíciles y soluciones |
| Revisión de 360 | Semestral | Feedback del equipo + autoevaluación | Calibrar la percepción vs. la realidad |

## La Revisión de Desempeño Trimestral: El Sustituto de la Evaluación Anual

En lugar de una evaluación anual que lo juzga todo, haz revisiones trimestrales que guían el desarrollo:

**La conversación trimestral de desempeño (45-60 min):**

1. **Mirada atrás (15 min):** ¿Qué fue bien? ¿Qué no fue como esperabas? ¿Qué aprendiste?
2. **Calibración de desempeño (10 min):** El manager comparte su evaluación del trimestre usando datos y comportamientos concretos. Sin sorpresas: si ha dado feedback continuo, esta conversación es una confirmación, no una revelación.
3. **Foco en el desarrollo (20 min):** ¿En qué quieres crecer el próximo trimestre? ¿Cómo puedo apoyarte yo?
4. **Acuerdos de acción (10 min):** 2-3 compromisos concretos para el próximo trimestre (del empleado y del manager)

**La calibración sin nota numérica:**
En lugar de un número del 1 al 5, usa una descripción cualitativa:
- "Excepcional: supera consistentemente las expectativas del rol"
- "En camino: cumple las expectativas y está en la trayectoria correcta"
- "En desarrollo: algunas áreas por debajo de las expectativas con un plan claro"
- "Preocupante: múltiples áreas por debajo, requiere plan de mejora formal"

## Entregables

Con el contexto que me des, produce:
1. Template de 1:1 semanal con la agenda tipo, preguntas de apertura y espacio de seguimiento
2. Guía de feedback SBI para managers: 5 ejemplos de feedback real con el modelo completo
3. Programa de desarrollo de managers: las 5 sesiones del primer trimestre con agenda y materiales
4. Template de revisión trimestral de desempeño: estructura, preguntas y criterios de calibración
5. Encuesta de 360 mínima viable para managers: las 10 preguntas más reveladoras sobre las competencias clave
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar un sistema de feedback continuo y coaching de managers con 1:1s efectivos, modelo SBI y revisiones trimestrales que reemplacen la evaluación anual',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de la inflación en la empresa — precios, contratos y costes en entornos inflacionistas',
                'description'      => 'Aprende a adaptar la estrategia financiera de tu empresa a entornos de inflación elevada: revisión de precios, cláusulas de indexación en contratos, gestión de costes y protección del margen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia gestionando empresas en entornos de inflación elevada y sostenida. Necesito un plan concreto para proteger el margen de la empresa frente a la inflación: cómo ajustar precios, cómo revisar los contratos de compra y de venta, y cómo gestionar los costes en un entorno donde todo sube.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuáles son las principales partidas de coste de tu empresa y cuáles han subido más? (materias primas, energía, personal, logística, SaaS)
2. ¿Cómo está estructurada la facturación? (contratos a precio fijo a largo plazo, facturación por proyecto, suscripción, venta unitaria)
3. ¿Cuál es el margen bruto actual y cuánto ha caído en el último año?
4. ¿Cuánto poder de negociación tienes con tus proveedores principales?
5. ¿Has subido precios a los clientes en el último año y con qué resultado?

## La Inflación y la Cuenta de Resultados: El Efecto Real

La inflación ataca la cuenta de resultados por dos frentes simultáneamente:

**Frente 1 — Los costes suben:**
Materias primas, energía, salarios, transportes, servicios externos. Si tu estructura de costes es rígida (contratos a largo plazo a precio fijo, plantilla estable), la presión llega de inmediato.

**Frente 2 — Los precios son difíciles de subir:**
Los clientes resisten las subidas de precio, especialmente si tienen contratos firmados. El tiempo de reacción en precios siempre es mayor que el tiempo de reacción en costes.

**El resultado: compresión de margen.**

```
EJEMPLO:
Año 0: Ventas 1.000.000€, Costes 700.000€, Margen bruto 300.000€ (30%)
Año 1 (inflación 8%): Costes suben a 756.000€ pero ventas se mantienen en 1.000.000€
Margen: 244.000€ (24,4%) — reducción de 5,6 puntos porcentuales
```

Si el margen parte del 30%, una inflación del 8% en costes sin subida de precio equivale a perder casi 1/5 del margen bruto.

## Estrategia de Precios en Inflación

### Paso 1: Analiza Qué Costes Han Subido y Cuánto

Antes de hablar de precios con los clientes, necesitas los datos:

```
ANÁLISIS DE VARIACIÓN DE COSTES (vs. año anterior)
Materia prima A: +12%    → Impacto en precio de venta: +3,2%
Energía: +35%             → Impacto en precio de venta: +2,1%
Logística: +15%           → Impacto en precio de venta: +1,8%
Personal: +4,5%           → Impacto en precio de venta: +1,1%
TOTAL impacto en precio necesario para mantener margen: +8,2%
```

Este análisis es tu argumento con el cliente: la subida de precio no es arbitraria, es la trasferencia de un coste real documentado.

### Paso 2: Segmenta los Clientes por Elasticidad de Precio

No todos los clientes reaccionan igual a una subida de precio. Antes de lanzar una subida generalizada:

| Segmento | Elasticidad | Estrategia |
|---|---|---|
| Clientes con alta dependencia y switching cost alto | Baja | Subida directa con aviso de 30-60 días |
| Clientes con alternativas claras y precio sensible | Alta | Negociación caso a caso, compensaciones en valor |
| Clientes con contratos a precio fijo vigentes | N/A | Revisar cláusulas de revisión de precio |
| Clientes con relación larga y confianza alta | Media | Conversación proactiva y transparente |

### Paso 3: La Comunicación de la Subida de Precio

La forma en que comunicas la subida importa tanto como el importe:

**Template de comunicación de subida de precio:**

```
Estimado [Nombre],

En los últimos [X] meses, el coste de [categoría de coste principal] ha subido
un [X%] en nuestra industria, afectando directamente al coste de [vuestro servicio/producto].

Para continuar ofreciendo la calidad y el servicio con los que nos conocéis,
necesitamos ajustar nuestros precios en un [X%] efectivo desde el [fecha].

[Opcional: "Dado el tiempo de relación que llevamos juntos, aplicaremos este ajuste
en dos fases: [X/2%] a partir de [fecha 1] y [X/2%] a partir de [fecha 2]."]

Quedamos a vuestra disposición para hablar de este ajuste en detalle.

Atentamente,
[Nombre]
```

## Cláusulas de Indexación en Contratos

La mejor protección frente a la inflación futura no es gestionar las subidas cuando ocurren: es incluir cláusulas de revisión automática en los contratos.

**Los tipos de cláusulas de revisión de precio:**

**Cláusula de revisión anual ligada al IPC:**
"El precio acordado se revisará anualmente en la fecha de aniversario del contrato, aplicando la variación del IPC general publicado por el INE en los 12 meses previos, con un mínimo del 0% y un máximo del [X%]."

**Cláusula de revisión ligada a índice de coste específico:**
Para contratos donde un coste específico es dominante (energía, acero, transporte):
"El precio acordado se revisará trimestralmente en función de la variación del índice [índice específico: CESOP de energía, MIBEL, índice de transportes del Ministerio], con comunicación de 30 días de antelación."

**Cláusula de fuerza mayor por inflación extraordinaria:**
"En caso de que la inflación anual supere el [X%] según datos del INE, cualquiera de las partes podrá solicitar una renegociación de los términos económicos del contrato."

## Gestión de Costes: El Lado de la Compra

Mientras subes precios, también debes gestionar activamente los costes:

**Las palancas de gestión de costes en inflación:**

| Palanca | Acción | Efecto |
|---|---|---|
| Renegociación de contratos de suministro | Pedir descuento por volumen, pago anticipado a cambio de precio fijo | Reducir el impacto de subidas futuras |
| Diversificación de proveedores | Añadir un segundo proveedor para los inputs críticos | Poder de negociación y menor riesgo |
| Sustitución de inputs | Materiales equivalentes de menor coste donde la calidad lo permite | Reducción directa de coste |
| Cobertura de precio (hedging) | Contratos de compra a futuro para materias primas cotizadas | Protección frente a subidas futuras |
| Optimización de procesos | Reducción de mermas, eficiencia energética, digitalización de procesos manuales | Reducción del coste por unidad |
| Revisión del portafolio de productos | Eliminar productos o servicios con margen negativo en el entorno actual | Mejora del mix de margen |

## El Dashboard de Seguimiento del Margen en Inflación

En entornos inflacionistas, el seguimiento mensual del margen no es suficiente. Necesitas visibilidad semanal o por lote:

| Métrica | Frecuencia | Umbral de alerta |
|---|---|---|
| Margen bruto por línea de producto | Mensual | Caída > 2 puntos vs. mes anterior |
| Variación de coste de principales inputs | Semanal | Subida > 5% en una semana |
| Backlog de contratos a precio fijo | Mensual | > 30% del revenue en contratos sin cláusula de revisión |
| Pipeline de subidas de precio pendientes | Mensual | Clientes con subida comunicada pero no confirmada |

## Entregables

Con el contexto que me des, produce:
1. Análisis de variación de costes: tabla de impacto de cada categoría en el precio de venta final
2. Segmentación de clientes por elasticidad: qué subir a quién y en qué orden
3. Template de comunicación de subida de precio personalizable
4. Propuesta de cláusula de indexación para incluir en los nuevos contratos de venta y de compra
5. Plan de optimización de costes: las 5 palancas más aplicables a tu estructura de costes
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Proteger el margen de la empresa en entornos de inflación elevada ajustando precios, revisando contratos con cláusulas de indexación y optimizando la estructura de costes',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Tokens y activos digitales en empresas — marco legal MiCA y uso empresarial de tokens',
                'description'      => 'Entiende el marco legal europeo para tokens y activos digitales (Reglamento MiCA): cuándo necesitas autorización, qué puedes hacer con tokens en tu empresa y las obligaciones de compliance para emisores y proveedores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en regulación de criptoactivos y finanzas digitales con experiencia en el Reglamento MiCA (Markets in Crypto-Assets) de la Unión Europea. Necesito entender qué puedo y qué no puedo hacer con tokens y activos digitales en mi empresa, cuándo necesito una licencia y cuáles son los riesgos legales más importantes.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el caso de uso que quieres implementar con tokens o activos digitales? (token de fidelización, stablecoin, utility token para acceso a servicios, tokenización de activos reales, NFTs, crypto payments)
2. ¿En qué países opera tu empresa y a qué usuarios o clientes va dirigido el token?
3. ¿Tienes ya activos digitales en el balance de la empresa? (criptomonedas, stablecoins)
4. ¿Tu empresa emite el token o solo lo usa como medio de pago o incentivo?
5. ¿Tienes ya asesoramiento legal o jurídico en materia de criptoactivos?

## El Reglamento MiCA: La Nueva Regulación Europea

El Reglamento (UE) 2023/1114 sobre los mercados de criptoactivos (MiCA) entró en vigor el 30 de junio de 2024 para tokens de activos referenciados (ARTs) y tokens de dinero electrónico (EMTs), y el 30 de diciembre de 2024 para el resto de criptoactivos (utility tokens, crypto payments).

MiCA crea el primer marco regulatorio completo y uniforme de la UE para criptoactivos. Su objetivo: proteger al inversor y consumidor, dar claridad jurídica a los emisores y prevenir el blanqueo de capitales y la financiación del terrorismo.

## Las 3 Categorías de Criptoactivos según MiCA

### Categoría 1: Tokens Referenciados a Activos (ART — Asset-Referenced Tokens)

Son tokens que mantienen un valor estable referenciándose a múltiples activos: monedas fiduciarias, materias primas, otras criptomonedas o una combinación.

**Ejemplos:** Stablecoins respaldadas por una cesta de monedas.

**Requisitos para emitir un ART:**
- Autorización como entidad de crédito o emisor de ART por el supervisor competente (CNMV en España)
- Capital mínimo de 350.000€ o 2% de los fondos de reserva
- Libro blanco (whitepaper) completo y publicado
- Gobernanza, control de riesgos y reservas de activos definidas
- Restricciones si el ART tiene más de 1M de transacciones o 200M€ diarios

### Categoría 2: Tokens de Dinero Electrónico (EMT — E-Money Tokens)

Son tokens que referencian una única moneda fiduciaria oficial y actúan como dinero electrónico.

**Ejemplos:** Un stablecoin pegged al euro o al dólar.

**Requisitos para emitir un EMT:**
- Solo pueden emitirlos entidades de crédito o entidades de dinero electrónico ya autorizadas
- Los tenedores tienen derecho de reembolso al par en todo momento
- Los fondos de reserva deben segregarse y protegerse

**Conclusión práctica:** Si tu empresa no es un banco o una entidad de dinero electrónico, no puedes emitir un EMT. Punto.

### Categoría 3: Otros Criptoactivos (incluyendo Utility Tokens)

Todo lo que no encaja en ART ni EMT: utility tokens, tokens de acceso, criptomonedas como Bitcoin o Ethereum, NFTs (en algunos casos), tokens de fidelización.

**Requisitos generales para emitir criptoactivos de categoría 3:**
- Publicar un whitepaper (libro blanco) notificado al supervisor antes de la oferta pública
- El whitepaper debe contener información detallada sobre el emisor, los derechos del tenedor, los riesgos y el protocolo técnico
- Reglas de marketing: no engañoso, claro sobre riesgos
- Derecho de desistimiento del inversor minorista durante 14 días

**EXCEPCIONES importantes (no requieren whitepaper):**
- Oferta a menos de 150 personas físicas o jurídicas por Estado miembro
- Oferta con contraprestación total inferior a 1 millón de euros en 12 meses
- Tokens ofrecidos solo a inversores cualificados
- Tokens gratuitos (airdrops sin contraprestación)
- Tokens creados como remuneración por minería (Proof of Work)

## Los CASP: Proveedores de Servicios de Criptoactivos

MiCA regula no solo a los emisores sino también a los proveedores de servicios relacionados con criptoactivos (CASP — Crypto-Asset Service Providers).

**Servicios que requieren autorización como CASP:**

| Servicio | Ejemplos |
|---|---|
| Custodia y administración de criptoactivos | Custodios, wallets de terceros |
| Gestión de plataformas de negociación | Exchanges |
| Canje de criptoactivos por moneda fiat o por otros criptoactivos | OTC desks, exchange services |
| Colocación de criptoactivos | Participar en ICOs o TGEs como colocador |
| Recepción y transmisión de órdenes | Brokers de criptoactivos |
| Asesoramiento sobre criptoactivos | Servicios de investment advice en crypto |

**Si tu empresa realiza cualquiera de estos servicios para terceros, necesitas una licencia CASP en la UE.**

## Casos de Uso Empresariales y Su Encaje en MiCA

### Caso 1: Token de Fidelización (Puntos o Rewards)

Un token que los clientes reciben por compras y pueden canjear por descuentos o productos.

**Encaje en MiCA:** Si el token solo se canjea dentro del ecosistema del emisor, puede quedar fuera del ámbito de MiCA como "network token" de uso limitado. Si se puede intercambiar o vender en mercados secundarios, entra en el ámbito de MiCA.

**Recomendación:** Diseña el token de fidelización sin transferibilidad ni mercado secundario para mantenerlo fuera del perimetro MiCA.

### Caso 2: Utility Token para Acceso a Servicios

Token que da acceso a funcionalidades premium de la plataforma.

**Encaje en MiCA:** Utility token de categoría 3. Requiere whitepaper si la oferta supera el millón de euros o las 150 personas. El token debe dar acceso real a servicios, no ser un instrumento de inversión.

**Riesgo:** Si el token se vende a compradores que esperan revalorizarse, puede considerarse un valor negociable y salir del ámbito de MiCA para entrar en MiFID II (regulación de instrumentos financieros, mucho más exigente).

### Caso 3: Aceptar Criptomonedas como Medio de Pago

La empresa acepta Bitcoin, Ethereum o stablecoins como pago de sus productos o servicios.

**Encaje en MiCA:** Aceptar criptomonedas como pago no requiere autorización MiCA. Sin embargo, hay obligaciones de:
- AML/KYC para pagos superiores a 1.000€ por operación
- Contabilidad y fiscalidad de las ganancias/pérdidas de conversión
- Si usas un proveedor externo para el procesamiento, este sí necesita licencia CASP

## Entregables

Con el contexto que me des, produce:
1. Análisis de clasificación: en qué categoría MiCA encaja tu caso de uso y qué obligaciones genera
2. Checklist de requisitos MiCA para el caso de uso más relevante para tu empresa
3. Estructura del whitepaper MiCA: secciones obligatorias y contenido mínimo
4. Mapa de riesgos legales: las 5 situaciones donde más empresas se equivocan con tokens
5. Protocolo AML/KYC básico para empresas que aceptan criptoactivos como medio de pago
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Entender el marco legal MiCA para tokens y activos digitales, identificar las obligaciones de compliance para el caso de uso concreto de la empresa y los riesgos legales principales',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Métricas de CS avanzadas — NPS, CES, health score y el cuadro de mando completo',
                'description'      => 'Diseña el sistema de métricas completo para el equipo de customer success: NPS, CES, health score, QBR effectiveness y las métricas de negocio que demuestran el impacto del CS en el ARR.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia diseñando sistemas de métricas para equipos de CS en SaaS B2B. Necesito construir el cuadro de mando completo del equipo de customer success: qué medir, con qué frecuencia, con qué herramientas y cómo conectar las métricas de CS con el impacto en el negocio.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos clientes gestiona el equipo y cuántos CSMs hay?
2. ¿Qué métricas medís actualmente y cuáles son las que más os faltan?
3. ¿Cuál es el modelo de CS? (high touch con QBRs, mid touch con check-ins periódicos, tech touch / digital)
4. ¿Qué herramientas de CS tenéis? (Gainsight, ChurnZero, Totango, HubSpot, manual en CRM)
5. ¿Qué métricas presenta el equipo de CS a la dirección y con qué frecuencia?

## Por Qué las Métricas de CS Importan Más Allá de la Satisfacción

El customer success no es solo un equipo que hace a los clientes felices. Es la función que protege y hace crecer el ARR de los clientes existentes. Las métricas de CS deben demostrar ese impacto económico, no solo reportar encuestas de satisfacción.

**La cadena de valor de CS:**
```
Activación → Adopción → Valor percibido → Satisfacción → Retención → Expansión
```

Cada eslabón de esta cadena tiene métricas. Un cuadro de mando completo mide todos los eslabones, no solo el final (satisfacción o retención).

## Las Métricas de Satisfacción del Cliente

### NPS (Net Promoter Score)

El NPS mide la probabilidad de que el cliente recomiende tu empresa.

**Cálculo:**
```
NPS = % Promotores (9-10) - % Detractores (0-6)
Rango: -100 a +100
Benchmark SaaS B2B: NPS > 30 es bueno, > 50 es excelente
```

**Cuándo medirlo:**
- NPS relacional: 1-2 veces al año a toda la base de clientes (pulso general)
- NPS transaccional: después de eventos específicos (onboarding, renovación, incidente)

**El error más frecuente con el NPS:**
Medir el NPS y no hacer nada con los resultados. El NPS tiene valor cuando:
1. Contactas a todos los detractores en < 48 horas para entender el problema
2. Contactas a todos los promotores para solicitar testimonios y referencias
3. Analizas los comentarios cualitativos para identificar patrones

### CES (Customer Effort Score)

El CES mide el esfuerzo que el cliente ha tenido que hacer para resolver su problema o usar el producto.

**La pregunta del CES:**
"¿Cuánto esfuerzo personal has tenido que hacer para gestionar este tema?" (escala 1-7, de "muy poco esfuerzo" a "mucho esfuerzo")

**Cuándo es más útil que el NPS:**
- Después de interacciones de soporte
- Después del proceso de onboarding
- Cuando quieres identificar fricciones específicas en el journey del cliente

**Benchmark:** CES < 3 en una escala 1-7 indica bajo esfuerzo (bueno). CES > 5 indica alto esfuerzo (alarma).

### CSAT (Customer Satisfaction Score)

La satisfacción puntual con una interacción concreta. Escala 1-5 o 1-10 sobre "¿Cómo de satisfecho estás con [evento específico]?"

**Mejor para:** Tickets de soporte, reuniones de QBR, procesos de renovación.
**No reemplaza al NPS:** El CSAT mide momentos específicos, el NPS mide la relación global.

## El Health Score: La Métrica Predictiva

El health score es el indicador que predice la probabilidad de renovación y de expansión de cada cuenta. Es la métrica más importante para la gestión proactiva del CS.

**Estructura de un health score avanzado:**

| Dimensión | Peso | Señales que mide |
|---|---|---|
| Adopción del producto | 30% | Usuarios activos / licencias, features clave utilizadas, frecuencia de uso |
| Resultado del cliente (ROI) | 25% | Menciona resultados en conversaciones, solicita expansión, referencias internas |
| Engagement con el proveedor | 20% | Asistencia a QBRs, respuesta a comunicaciones, participación en comunidad |
| Salud del contrato | 15% | Tiempo hasta la renovación, riesgo de downsell, historial de pagos |
| Satisfacción | 10% | NPS reciente, CSAT de tickets, menciones positivas/negativas |

**Sistema de puntuación:**
- Cada dimensión se puntúa de 0 a 100
- El health score es la suma ponderada
- Verde: 70-100, Amarillo: 40-69, Rojo: 0-39

## Las Métricas de Negocio de CS

Estas métricas conectan el trabajo del equipo de CS con el impacto económico en el ARR:

### Net Revenue Retention (NRR)

La métrica más importante para el negocio. Mide si la base de clientes existente crece o decrece en ingresos.

```
NRR = (ARR inicio + Expansión - Churn - Downsell) / ARR inicio

NRR > 100%: Los clientes existentes generan más ARR que al principio del período
NRR = 100%: Compensas exactamente lo que pierdes
NRR < 100%: Estás perdiendo ARR de clientes existentes
```

**Benchmarks:**
- NRR > 120%: Excelente (top performers como Snowflake, Datadog)
- NRR 100-120%: Muy bueno (SaaS B2B saludable)
- NRR < 100%: Problema serio de retención

### Gross Revenue Retention (GRR)

Solo mide las pérdidas (churn y downsell), sin incluir la expansión.

```
GRR = (ARR inicio - Churn - Downsell) / ARR inicio
Máximo posible: 100%
Benchmark SaaS B2B: GRR > 85% es bueno
```

### Churn Rate y Tiempo hasta la Detección

```
Churn Rate mensual = MRR perdido por cancelaciones / MRR inicio del mes
Churn Rate anual = 1 - (1 - Churn mensual)^12
```

**El tiempo hasta la detección del riesgo:**
¿Cuántos días antes de la cancelación detecta el equipo de CS el riesgo? Cuanto mayor sea este número, más tiempo tienes para intervenir.

## Las Métricas de Eficiencia del Equipo de CS

| Métrica | Definición | Benchmark |
|---|---|---|
| Cuentas por CSM | Número de cuentas gestionadas por CSM | 30-80 (high touch) / 100-300 (mid touch) |
| ARR gestionado por CSM | ARR total del portfolio del CSM | Depende del modelo |
| QBR completion rate | % de cuentas Tier 1 con QBR en el trimestre | > 85% |
| Tiempo de respuesta | Tiempo hasta la primera respuesta a un cliente | < 4h para cuentas Tier 1 |
| Expansión generada por CS | ARR de upsell y cross-sell iniciado por CS | Objetivo: 20-30% de la expansión total |
| At-risk accounts saved | % de cuentas en rojo que se retuvieron | > 50% |

## El Cuadro de Mando del CS: Lo que Se Presenta a Dirección

| Métrica | Cadencia de reporte | Audiencia |
|---|---|---|
| NRR y GRR | Mensual | Dirección, Board |
| Churn MRR y cuentas | Mensual | Dirección |
| Health score distribution | Semanal (interna CS) / Mensual (dirección) | CS + Dirección |
| NPS | Trimestral | Dirección |
| At-risk pipeline | Semanal | CS + Dirección |
| Expansión generada por CS | Mensual | Ventas + Dirección |

## Entregables

Con el contexto que me des, produce:
1. Modelo de health score completo con dimensiones, pesos y fórmula de cálculo
2. Proceso de medición de NPS: cuándo, a quién, qué hacer con los resultados
3. Cuadro de mando de CS: las 12 métricas principales con definición, fuente de datos y cadencia
4. Presentación mensual de CS a dirección: estructura y métricas que demuestran el impacto en ARR
5. OKRs de CS para el próximo trimestre basados en las métricas más críticas identificadas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el sistema de métricas completo del equipo de customer success con NPS, health score, NRR y el cuadro de mando que demuestra el impacto en el ARR',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de salida del freelancing — transición a empleado, fundador o agencia',
                'description'      => 'Aprende cuándo y cómo hacer la transición de freelance a empleado a tiempo completo, fundador de empresa o dueño de una agencia: señales, planificación financiera y los pasos concretos para cada camino.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de carrera especializado en profesionales independientes que están considerando dar el siguiente paso tras años de freelancing. Necesito entender cuándo tiene sentido salir del modelo freelance y cómo hacer esa transición hacia el empleo a jornada completa, la fundación de una empresa o la creación de una agencia.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos años llevas como freelance y cuál es tu ingreso mensual promedio?
2. ¿Qué te está impulsando a plantearte el cambio ahora? (agotamiento, techo de ingresos, oportunidad específica, deseo de construir algo mayor)
3. ¿Cuál de los tres caminos te atrae más: empleado en empresa, fundador o agencia?
4. ¿Cuántos meses de reserva financiera tienes disponibles para hacer la transición?
5. ¿Tienes ya clientes que podrían convertirse en los primeros clientes de una agencia, o contactos en empresas donde querrías trabajar?

## Por Qué el Freelancing Tiene un Techo

El modelo freelance tiene límites estructurales que con el tiempo se hacen más evidentes:

**Los límites del freelance puro:**
- Ingresos limitados por el tiempo disponible: no puedes vender más horas de las que tienes
- Sin activo construido: cuando dejas de trabajar, dejan de entrar ingresos
- Sin equipo: creces tú, pero no construyes nada que te sobreviva
- Dependencia de pocos clientes: si uno grande se va, el impacto es inmediato
- Sin cobertura en enfermedad, vacaciones o baja: el riesgo lo asumes tú solo

Estos límites no hacen del freelancing un mal modelo: lo hacen un modelo con fecha de caducidad para muchos profesionales. El momento de plantearse la salida es cuando los límites empiezan a frenar lo que quieres conseguir.

## Las 3 Salidas del Freelancing

### Salida 1: El Empleo a Jornada Completa

Incorporarte a una empresa como empleado: abandas la incertidumbre del freelance a cambio de estabilidad, pertenencia a un equipo y beneficios de empleado.

**Cuándo tiene sentido:**
- Quieres construir expertise profundo en un dominio específico con la estructura de una empresa
- Tienes una oferta de un rol que no podrías crear para ti mismo como freelance
- El freelancing te genera ansiedad o agotamiento que afecta a tu calidad de vida
- Tienes una familia o responsabilidades financieras que requieren estabilidad

**Los riesgos de esta transición:**
- El sueldo de empleado raramente iguala los ingresos de freelance en los primeros años
- Perdes la autonomía sobre tu agenda y la elección de proyectos
- La burocracia corporativa puede frustrarte si vienes de la libertad del freelance

**Cómo posicionarte para conseguir el rol correcto:**
- Tu portfolio de freelance es tu mayor activo: proyectos reales con resultados medibles
- Busca roles donde el expertise independiente sea valorado: startups, scaleups, empresas que contratan freelancers y prefieren tenerlos dentro
- Negocia en función de tu valor de freelance, no del rango salarial del rol estándar

**El proceso de búsqueda de empleo desde el freelancing:**

| Paso | Acción | Timeline |
|---|---|---|
| 1 | Decide el perfil de empresa y rol exacto | Semana 1-2 |
| 2 | Activa la red de clientes pasados y presentes | Semana 2-3 |
| 3 | Actualiza LinkedIn como portfolio de resultados | Semana 3 |
| 4 | Entrevistas y negociación | Mes 2-4 |
| 5 | Período de preaviso y cierre de proyectos activos | Mes 4-5 |

### Salida 2: Fundar una Empresa

Crear una empresa que resuelva un problema que has identificado durante tu freelancing.

**Las ventajas del freelance como punto de partida para fundar:**
- Has validado un problema real de clientes reales
- Tienes acceso a tus primeros potenciales clientes (los del periodo freelance)
- Tienes expertise del dominio que es difícil de replicar sin años de experiencia

**Las señales de que estás listo para fundar:**
- Tienes una idea que requiere construir un producto o una plataforma, no solo tu servicio
- Tienes acceso a 10+ potenciales clientes que pagarían por una solución automatizada
- Tienes o puedes conseguir un cofundador que complementa tus competencias
- Tienes 12-18 meses de pista financiera (runway)

**El plan de fundación en 3 fases:**

**Fase 1 — Validación (meses 1-3): Sin dejar el freelance todavía**
Valida la idea mientras sigues generando ingresos como freelance:
- Entrevistas a 20-30 potenciales clientes del problema que quieres resolver
- Construye un prototipo básico o una simulación del producto
- Consigue 3-5 clientes de pago aunque sea con el proceso manual

**Fase 2 — Transición (meses 4-6): Reducción gradual del freelancing**
- Reduce la carga de clientes freelance al 50% de la capacidad
- Dedica el tiempo liberado al producto
- Cierra los primeros contratos reales
- Decide si hay cofundador o si vas solo en esta fase

**Fase 3 — Salida total (mes 7+): Full-time en la empresa**
- Solo si tienes suficiente runway y tracción inicial
- El criterio de salida: ingresos de la empresa + reservas > 18 meses de gastos personales

### Salida 3: Crear una Agencia

Transformar tu práctica de freelance en una agencia: contratando otros profesionales, estandarizando procesos y escalando el modelo.

**Cuándo tiene sentido:**
- Tienes más demanda de trabajo del que puedes atender solo
- Tienes habilidad para gestionar a otros profesionales además de hacer el trabajo
- Identificas una especialización de nicho donde puedes construir la agencia de referencia
- Quieres construir algo con valor de venta futura (un activo que exista sin ti)

**El modelo de escalado de freelance a agencia:**

| Fase | Empleados | Clientes | Rol del fundador |
|---|---|---|---|
| Freelance ampliado | 0 (subcontratistas) | 5-8 | Hace todo + coordina subcontratistas |
| Micro-agencia | 2-4 empleados | 10-15 | Hace trabajo senior + gestiona equipo |
| Agencia pequeña | 5-10 empleados | 15-30 | Gestión + ventas + estrategia |
| Agencia consolidada | 10+ empleados | 30+ | Solo gestión y negocio |

**El primer contrato: la decisión más crítica**
Cuando contratas al primer empleado, el modelo cambia radicalmente. Tienes que generar suficiente trabajo para pagar a alguien además de a ti. La regla: el primer empleado solo llega cuando tienes un backlog de proyectos que justifique 1,5 FTEs durante 3 meses.

## La Planificación Financiera de la Transición

Independientemente del camino elegido, la transición requiere planificación financiera:

**El colchón mínimo según el camino:**
- Empleo: 3-6 meses de gastos (la búsqueda puede tardar)
- Fundación: 18-24 meses de gastos personales + costes de la empresa
- Agencia: 6-12 meses (la agencia puede ser rentable más rápido si tienes demanda)

**La reducción de deuda freelance antes de transicionar:**
Antes de salir del freelancing, cierra o pasa a otros profesionales todos los proyectos que no vayas a llevar contigo. Un cliente insatisfecho en la transición puede seguirte con consecuencias reputacionales.

## Entregables

Con el contexto que me des, produce:
1. Diagnóstico: cuál de los 3 caminos de salida encaja mejor con tu situación y motivaciones
2. Plan de transición de 6-12 meses con hitos, acciones y criterios de go/no-go para cada fase
3. Planificación financiera de la transición: cuánto necesitas ahorrar y en cuánto tiempo
4. Proceso de cierre ordenado del freelancing: cómo terminar con los clientes actuales de forma profesional
5. Lista de las 10 primeras acciones concretas de la semana que viene para empezar la transición
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar la transición del freelancing hacia el empleo, la fundación de empresa o la agencia con un plan concreto, planificación financiera y los primeros pasos accionables',
                'vote_score'       => 38,
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
