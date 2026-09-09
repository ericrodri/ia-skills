<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills104Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Optimización de la experiencia de compra online',
                'description'      => 'CRO avanzado: heatmaps, session recordings, tests A/B y los cambios que más impacto tienen en la conversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en Conversion Rate Optimization (CRO) con experiencia en e-commerce y productos digitales. Ayúdame a diagnosticar los problemas en el funnel de compra y a priorizar los experimentos que van a mover más la aguja de conversión.

## El contexto del CRO moderno

La tasa de conversión media en e-commerce global ronda el 2-3%. Eso significa que el 97-98% de las personas que llegan a tu tienda se van sin comprar. El CRO no es magia: es un sistema de hipótesis, medición y aprendizaje que mejora ese porcentaje de forma sostenida.

## Paso 1 — Diagnóstico cualitativo y cuantitativo

Antes de lanzar ningún test, necesitas entender por qué la gente no compra. Las herramientas son:

### Datos cuantitativos (Google Analytics / GA4)
Identifica estas métricas en tu funnel:
| Paso del funnel | Tráfico | Conversión | Drop-off |
|---|---|---|---|
| Landing/categoría → Producto | | | |
| Producto → Carrito | | | |
| Carrito → Checkout inicio | | | |
| Checkout → Confirmación | | | |

El paso con mayor drop-off es tu primera prioridad.

### Datos cualitativos (Hotjar, Microsoft Clarity o FullStory)
- **Heatmaps de clics**: ¿La gente hace clic donde quieres que haga clic?
- **Heatmaps de scroll**: ¿La información crítica está por encima del fold donde la gente mira?
- **Session recordings**: Busca patrones de frustración: clics en áreas no interactivas, movimientos erráticos del ratón, formularios que se abandonan a mitad
- **Encuestas de salida**: "¿Por qué no has completado tu compra hoy?" — 50 respuestas ya te dirán más que cualquier herramienta

## Paso 2 — Los 10 cambios de mayor impacto (por orden de frecuencia en estudios de CRO)

1. **Simplificar el checkout**: cada campo adicional reduce la conversión un 10-15%. Elimina todo lo que no sea imprescindible para procesar el pedido.
2. **Mostrar el precio total antes del último paso**: el "price shock" en el checkout (gastos de envío ocultos) es la causa número 1 de abandono de carrito.
3. **Añadir señales de confianza en el momento de compra**: sellos de seguridad, política de devolución visible, reviews cerca del CTA.
4. **Mejorar las imágenes de producto**: más ángulos, zoom, foto en contexto de uso, vídeo. El impacto en moda y hogar es brutal.
5. **Hacer el CTA principal imposible de ignorar**: tamaño, color, posición y texto. "Añadir al carrito" convierte menos que "Quiero este producto".
6. **Urgencia y escasez reales**: "Últimas 3 unidades" o "Envío hoy si pides antes de las 14h" — si son verdad.
7. **Reviews con filtros y fotos de clientes**: las reviews sin filtro con fotos reales superan a las reviews perfectas de 5 estrellas.
8. **Guest checkout**: obligar a crear cuenta antes de comprar elimina hasta el 35% de las conversiones.
9. **Velocidad de carga**: cada segundo adicional de carga reduce la conversión un 7%. En móvil, el impacto es doble.
10. **Retargeting de carrito abandonado**: email a los 30 minutos, a las 24 horas y a los 3 días. La secuencia de 3 emails recupera entre el 5% y el 15% del abandono.

## Paso 3 — Cómo priorizar los experimentos (Framework ICE)

| Experimento | Impact (1-10) | Confidence (1-10) | Ease (1-10) | Score ICE |
|---|---|---|---|---|
| Simplificar checkout a 2 pasos | 9 | 8 | 6 | 7.7 |
| Añadir timer de urgencia en producto | 6 | 5 | 9 | 6.7 |
| Reescribir el CTA principal | 7 | 7 | 10 | 8.0 |

Lanza primero los que tienen mayor score ICE y menor riesgo técnico.

## Paso 4 — Cómo ejecutar un test A/B correctamente

1. **Hipótesis clara**: "Creemos que cambiar el texto del CTA de 'Comprar' a 'Quiero este [nombre de producto]' aumentará la conversión en la página de producto en un 15%, porque hace la acción más personal y específica."
2. **Muestra suficiente**: usa una calculadora de significanza estadística. Necesitas al menos 1.000 visitantes por variante antes de sacar conclusiones.
3. **Una sola variable por test**: no cambies el CTA y el color y el texto a la vez. Si gana, no sabrás qué lo causó.
4. **Duración mínima**: 2 semanas para capturar ciclos de comportamiento semanal.
5. **Significanza estadística mínima**: 95% antes de declarar un ganador.

## Tu diagnóstico personalizado

Cuéntame:
- ¿Cuál es tu tasa de conversión actual y en qué paso pierdes más usuarios?
- ¿Tienes acceso a heatmaps o session recordings?
- ¿Cuál es el dispositivo dominante de tus compradores (móvil/escritorio)?

Con esa información, identifico los 3 experimentos que deberías lanzar esta semana.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Diagnosticar y optimizar el funnel de conversión de una tienda o producto digital para aumentar el porcentaje de visitantes que compran.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Accesibilidad como cultura de equipo',
                'description'      => 'Cómo integrar la accesibilidad en el proceso de desarrollo para que no sea una revisión final sino una práctica continua.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior especializado en accesibilidad web (a11y) y en la integración de prácticas de inclusión en equipos de desarrollo ágiles. Ayúdame a transformar la accesibilidad de un requisito de checklist al final del sprint en una práctica integrada en cada fase del desarrollo.

## Por qué la accesibilidad como afterthought siempre falla

Cuando la accesibilidad se revisa al final del proyecto, los costes de corrección se multiplican por 10. Un componente rediseñado para ser accesible después de ser construido requiere cambios en el HTML, el CSS, el JavaScript y a veces en la arquitectura de datos. El mismo cambio tomado en la fase de diseño cuesta cero.

Además, hay un argumento de negocio claro: en España, el 10% de la población tiene alguna discapacidad permanente; el 40% sufre alguna limitación temporal (brazo roto, gafas rotas, entorno ruidoso). La accesibilidad no es solo ética — es mercado.

## Los 4 principios WCAG explicados para developers

Las WCAG 2.1 (Web Content Accessibility Guidelines) se organizan en 4 principios:

| Principio | Qué significa | Ejemplo concreto |
|---|---|---|
| **Perceptible** | La información puede percibirse de más de una forma | Imagen con texto alternativo descriptivo |
| **Operable** | Todo funciona con teclado, no solo con ratón | Formulario navegable con Tab + Enter |
| **Comprensible** | El contenido y la interfaz son predecibles | Mensajes de error que dicen cómo corregirlos |
| **Robusto** | Funciona con tecnologías asistivas actuales y futuras | HTML semántico que los lectores de pantalla interpretan |

## La integración de a11y por fase del proceso

### Fase de diseño (Figma / Sketch)
- Usar el plugin de contraste de Figma en cada combinación de color texto/fondo (mínimo ratio 4.5:1 para texto normal, 3:1 para texto grande)
- Definir el orden de focus para cada pantalla interactiva
- Documentar los estados de todos los componentes: hover, focus, active, disabled, error
- Establecer un sistema tipográfico que no use tamaños inferiores a 16px para texto de cuerpo

### Fase de desarrollo (HTML/CSS/JS)
Checklist mínimo por componente:
- [ ] HTML semántico: usar `<button>` para acciones, `<a>` para navegación, `<h1-h6>` en orden lógico
- [ ] Atributos ARIA solo cuando HTML nativo no es suficiente (no añadir ARIA redundante)
- [ ] Navegación por teclado: Tab, Shift+Tab, Enter, Space, flechas donde corresponde
- [ ] Focus visible: nunca `outline: none` sin alternativa de estilo igual de visible
- [ ] Imágenes: `alt` descriptivo (no "imagen" o el nombre del archivo), `alt=""` para imágenes decorativas
- [ ] Formularios: `<label>` asociado a cada `<input>`, mensajes de error vinculados con `aria-describedby`
- [ ] Colores: nunca usar solo el color para transmitir información (añadir icono o texto)

### Fase de QA (testing automatizado + manual)
Herramientas de testing automatizado (encuentran el 30-40% de los problemas):
- `axe-core`: librería integrable en Jest, Cypress o Playwright
- Lighthouse (built-in en Chrome DevTools): informe rápido con puntuación y recomendaciones
- `eslint-plugin-jsx-a11y`: detecta errores de accesibilidad en tiempo de escritura (React/JSX)

Testing manual imprescindible (el 60-70% restante):
- Navegar toda la pantalla solo con teclado
- Probar con lector de pantalla: NVDA + Firefox (Windows), VoiceOver + Safari (Mac), TalkBack (Android)
- Zoom de navegador al 200%: ¿el layout se rompe o el texto se desborda?
- Modo de alto contraste del sistema operativo

## Cómo integrar a11y en el flujo de trabajo del equipo

### En la definición de "Done"
Añade a tu Definition of Done:
- "La funcionalidad supera el audit de axe-core con 0 errores críticos"
- "El flujo principal es navegable por teclado"
- "Las imágenes tienen texto alternativo revisado"

### En las pull requests
Plantilla de PR con sección de accesibilidad:
```
## Accesibilidad
- [ ] Revisado con axe-core
- [ ] Navegable por teclado
- [ ] Contrastes verificados
- [ ] Probado con lector de pantalla: Sí / No aplica
```

### En las retrospectivas
Una vez al mes, dedica 15 minutos a revisar los issues de accesibilidad encontrados: ¿dónde se generaron? ¿En diseño, en desarrollo o en QA? ¿Qué cambio de proceso los habría evitado?

## Plan de implementación en 4 semanas

**Semana 1**: Audit inicial con Lighthouse en las 5 páginas más visitadas. Inventario de problemas por nivel de impacto.
**Semana 2**: Configurar axe-core en el pipeline de CI. Resolver todos los errores críticos (nivel A).
**Semana 3**: Formación de 2 horas para el equipo. Actualizar la Definition of Done.
**Semana 4**: Primera revisión manual completa con lector de pantalla. Crear el backlog de mejoras nivel AA.

Cuéntame en qué tecnología trabaja tu equipo y qué nivel de madurez de accesibilidad tenéis hoy: te daré el plan concreto adaptado a vuestra realidad.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Integrar la accesibilidad web en el proceso de desarrollo para cumplir WCAG 2.1 y no tener que hacer costosas correcciones al final del proyecto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Jobs to be Done aplicado al diseño',
                'description'      => 'Usa el framework JTBD para diseñar funcionalidades que resuelven el trabajo real del usuario, no el que imaginas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto experto en el framework Jobs to be Done (JTBD) y en investigación de usuario aplicada a decisiones de diseño. Ayúdame a aplicar JTBD para descubrir los trabajos reales que mis usuarios contratan mi producto para hacer, y a traducir esos insights en decisiones de diseño más acertadas.

## Qué es Jobs to be Done (y qué no es)

JTBD es un framework de investigación desarrollado por Clayton Christensen que plantea una pregunta radical: las personas no compran productos, contratan soluciones para un trabajo que necesitan hacer. El famoso ejemplo: "La gente no quiere un taladro de un cuarto de pulgada. Quiere un agujero de un cuarto de pulgada." Y en realidad, lo que quiere es colgar un cuadro para que su casa se vea bien cuando lleguen los invitados.

Cuando diseñas desde la funcionalidad, construyes taladros. Cuando diseñas desde JTBD, construyes lo que el usuario realmente necesita para completar su trabajo.

## Los tres tipos de Jobs

| Tipo | Descripción | Ejemplo (app de notas) |
|---|---|---|
| **Funcional** | La tarea práctica que el usuario quiere realizar | "Capturar una idea antes de que se me olvide" |
| **Social** | Cómo quiere ser percibido por otros | "Parecer organizado y profesional con mi equipo" |
| **Emocional** | Cómo quiere sentirse | "Sentir que tengo el control de mis proyectos" |

El error más común en diseño: solo resolver el job funcional y olvidar los jobs social y emocional, que son los que generan fidelidad real.

## El método de la entrevista JTBD

La entrevista JTBD no pregunta "¿qué funcionalidades necesitas?". Pregunta sobre el momento de compra o de adopción para descubrir la cadena de causalidad real.

### Protocolo de entrevista (45-60 minutos)

**Bloque 1 — El momento de la decisión**
- "Cuéntame la primera vez que empezaste a pensar que necesitabas [solución/producto similar al tuyo]."
- "¿Qué estaba pasando en tu vida en ese momento?"
- "¿Qué fue lo que te hizo buscar algo nuevo justo entonces?"

**Bloque 2 — La búsqueda**
- "¿Qué alternativas consideraste?"
- "¿Qué probaste primero y por qué?"
- "¿Hubo algo que descartaste? ¿Por qué?"

**Bloque 3 — La decisión**
- "¿Qué fue lo que te hizo elegir [tu producto]?"
- "¿Hubo algún momento en que dudaste de si era la decisión correcta?"
- "¿Alguien más influyó en la decisión?"

**Bloque 4 — El uso**
- "¿Hay algún momento del día o la semana en que lo uses especialmente?"
- "¿Hay algo que hagas antes o después de usarlo?"
- "¿Qué es lo que más te frustra todavía?"

### Cómo analizar las entrevistas: el mapa de forces

Christensen describe 4 fuerzas que determinan si alguien adopta algo nuevo:

| Hacia el cambio | Contra el cambio |
|---|---|
| **Push**: el problema con la situación actual | **Inertia**: el hábito de la situación actual |
| **Pull**: la atracción de la nueva solución | **Anxiety**: el miedo a que lo nuevo no funcione |

Diseñar bien significa amplificar el pull y reducir la ansiedad.

## De los Jobs a las decisiones de diseño

Una vez identificados los jobs reales, aplica este proceso:

### 1. Job statement canonical
Formato: "Cuando [situación], quiero [motivación], para [resultado esperado]."
Ejemplo: "Cuando estoy en una reunión y surge una idea, quiero anotarla en menos de 5 segundos, para no perder el hilo de la conversación ni la idea."

### 2. Métricas del job
¿Cómo sabe el usuario que ha completado bien el job?
- Velocidad: ¿cuánto tarda?
- Fiabilidad: ¿funciona siempre?
- Completitud: ¿ha capturado todo lo que necesitaba?
- Esfuerzo: ¿cuánta energía mental ha costado?

### 3. Oportunidades de diseño
Para cada métrica que no se cumple bien, hay una oportunidad de diseño. Documenta las oportunidades en una tabla:

| Job | Métrica | Valor actual | Valor objetivo | Oportunidad de diseño |
|---|---|---|---|---|
| Capturar idea en reunión | Velocidad | 8 segundos | <3 segundos | Acceso directo desde lock screen |

## Tu ejercicio

Descríbeme tu producto y el perfil de tus usuarios. Te preparo:
1. La guía de entrevista JTBD adaptada a tu contexto (10 preguntas)
2. La plantilla de análisis de forces para organizar los insights
3. Los 3 job statements más probables basados en lo que me describas
4. Sugerencias de funcionalidades derivadas de esos jobs que probablemente no tienes en el backlog

Diseñar desde el trabajo del usuario es lo que separa los productos que la gente recomienda de los que simplemente usa.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Aplicar el framework Jobs to be Done para descubrir las motivaciones reales de los usuarios y tomar mejores decisiones de diseño de producto.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Demo del producto perfecta',
                'description'      => 'El guión, la estructura y los momentos clave de una demo que hace que el cliente diga "¿cuándo empezamos?"',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Sales Engineer y formador de equipos de ventas especializado en demos de producto para SaaS B2B. Ayúdame a construir una demo que no sea un tour de funcionalidades sino una experiencia que conecte el producto con el problema real del cliente y acelere la decisión de compra.

## El error clásico de la demo: el "feature tour"

La mayoría de las demos siguen este patrón: "Aquí tenéis el dashboard, aquí la sección de reportes, aquí los ajustes de usuario..." El vendedor conoce el producto de memoria y quiere mostrarlo todo. El cliente desconecta a los 8 minutos y termina la reunión pensando: "Era interesante, pero no sé si es para nosotros."

El problema: una demo no es una visita guiada. Es una historia que protagoniza el cliente.

## La estructura de la demo perfecta (45-60 minutos)

### Parte 1 — El contexto (10 minutos, antes de abrir el producto)

**Confirma el problema (5 minutos)**:
"Antes de mostraros nada, quiero asegurarme de que lo que vamos a ver es relevante para vosotros. En nuestra conversación anterior mencionasteis [problema específico]. ¿Sigue siendo esa vuestra prioridad principal?"

Escucha la respuesta. Si ha cambiado algo, ajusta tu demo en tiempo real.

**El headline de la demo (1 minuto)**:
"Lo que os voy a mostrar hoy es cómo [empresa similar a la suya] pasó de [situación anterior] a [resultado concreto con número] en [plazo]. Al final, quiero que podáis decidir si esto tiene sentido para [nombre de su empresa]."

**Alinea las expectativas (4 minutos)**:
"Tenemos 45 minutos. Voy a mostraros 3 cosas específicas relacionadas con lo que me contasteis. Habrá tiempo para preguntas. ¿Os parece bien ese plan?"

### Parte 2 — La demo (25-30 minutos)

**La estructura de 3 actos**:

**Acto 1 — El dolor (7 min)**: Empieza mostrando el problema tal y como el cliente lo vive hoy, con sus datos si es posible. Si tienes acceso a sus datos o a una sandbox personalizada, úsala. Si no, usa datos ficticios del mismo sector.

**Acto 2 — La transformación (15 min)**: Muestra el "antes y después". No expliques las funcionalidades — muéstralas resolviendo el problema específico que confirmaste en la Parte 1. Para cada funcionalidad: "Esto resuelve [el problema que mencionasteis de X]."

**Acto 3 — El futuro (8 min)**: Muestra cómo escala la solución. Si hoy el problema es X, cuando el cliente crezca el problema será Y — y el producto también cubre eso. Esto siembra las semillas de la expansión futura.

### Parte 3 — El cierre (10-15 minutos)

**Verifica la comprensión**:
"¿Hay algo de lo que hemos visto que no haya quedado claro?"

**Pregunta de calificación**:
"De lo que hemos visto hoy, ¿qué es lo que más os ha resonado con lo que estáis viviendo ahora mismo?"

**El siguiente paso**:
Nunca termines una demo sin un siguiente paso concreto:
- "El siguiente paso es que os enviamos el acceso a un trial durante 14 días. ¿Quién del equipo debería tener acceso desde el día uno?"
- "¿Tiene sentido que programemos una segunda sesión con [persona técnica / decision maker] la semana que viene?"

## Los momentos que hacen la diferencia

### 1. La personalización de la demo
Personaliza al menos estas 3 cosas: el nombre de la empresa en el sistema, datos del sector del cliente, un caso de uso que hayas oído en la primera llamada. Con eso, la demo parece construida para ellos aunque uses la misma estructura para todos.

### 2. El manejo de las preguntas durante la demo
Si alguien pregunta sobre una funcionalidad que no ibas a mostrar:
- Si es rápido de mostrar: "Buena pregunta, os lo muestro ahora."
- Si es complejo: "Apunto esa pregunta y la cubro al final. Tiene muy buena respuesta."
- Si la funcionalidad no existe: "Hoy no tenemos eso, pero quiero ser honesto sobre el roadmap..."

### 3. La demo para múltiples stakeholders
Cuando hay 3+ personas en la sala con roles distintos:
- Identifica al champion (quien tiene el problema), al economic buyer (quien firma), y al blocker (quien puede vetarlo)
- Dedica los primeros 5 minutos a cada perfil: "Para el equipo de marketing, lo más relevante va a ser... Para el equipo técnico, voy a cubrir..."

## Prepara tu demo

Cuéntame:
1. ¿Qué producto vendes y a qué tipo de empresa?
2. ¿Cuánto dura tu demo actual y qué feedback recibes?
3. ¿Cuál es el momento en que más sientes que la atención del cliente cae?

Construyo contigo el guión completo con los 3 actos, las transiciones y las preguntas de verificación.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir y ejecutar demos de producto para SaaS B2B que conectan emocionalmente con el cliente y aceleran la decisión de compra.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Continuous discovery en producto',
                'description'      => 'El sistema de investigación de usuario continua que mantiene al equipo siempre conectado a los problemas reales del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager experto en investigación de usuario y en la metodología Continuous Discovery popularizada por Teresa Torres. Ayúdame a construir el sistema de investigación continua que mantiene al equipo de producto siempre conectado a los problemas reales de los clientes, sin depender de grandes estudios de investigación esporádicos.

## El problema del discovery tradicional

El modelo tradicional: cada 6-12 meses se hace un gran estudio de usuario con una agencia externa que entrega un informe de 80 páginas que el equipo lee en parte y aplica menos. Para cuando el equipo actúa sobre los insights, el mercado ya ha cambiado.

El continuous discovery propone lo opuesto: entrevistas pequeñas y frecuentes integradas en el flujo de trabajo semanal del equipo, con un sistema para acumular y conectar los aprendizajes a lo largo del tiempo.

## Los pilares del Continuous Discovery

### 1. La cadencia semanal de entrevistas

**El estándar mínimo**: una entrevista de usuario por semana por equipo de producto. No una entrevista enorme — una conversación de 30-45 minutos con un usuario o cliente real.

**La rotación**: el PM no es el único que entrevista. Rota con el diseñador y el developer líder. Cuando engineering escucha los problemas directamente de los clientes, las decisiones técnicas cambian.

**La captación automática de participantes**: conecta tu CRM o tu base de usuarios a una herramienta como Calendly o Respondent para que siempre haya una cola de participantes disponibles sin esfuerzo manual.

### 2. El Opportunity Solution Tree (OST)

La herramienta central de continuous discovery es el Opportunity Solution Tree de Teresa Torres:

```
[Resultado de negocio deseado]
        |
   [Oportunidades] ← Problemas, deseos y necesidades de los usuarios
        |
   [Soluciones] ← Ideas de producto para cada oportunidad
        |
   [Experimentos] ← Los tests mínimos para validar cada solución
```

**Cómo construirlo**:
- El nodo raíz es el North Star Metric o el objetivo del trimestre
- Las oportunidades emergen de las entrevistas (no las inventas tú)
- Las soluciones son ideas para resolver cada oportunidad
- Los experimentos son los assumption tests antes de construir

### 3. Las entrevistas de discovery (no de usabilidad)

La entrevista de discovery no evalúa tu producto — descubre los problemas del cliente. La diferencia es fundamental:

| Entrevista de usabilidad | Entrevista de discovery |
|---|---|
| "¿Puedes completar esta tarea?" | "Cuéntame la última vez que intentaste [X]" |
| Evalúa tu solución | Descubre problemas |
| Se hace con un prototipo | Se hace con preguntas abiertas |
| Retrospectiva | Prospectiva y retrospectiva |

**Las preguntas de discovery que más revelan**:
- "Cuéntame la última vez que tuviste que hacer [tarea relacionada con tu producto]"
- "¿Qué fue lo más difícil de eso?"
- "¿Cómo lo resolviste al final?"
- "¿Qué haría que eso fuera 10 veces más fácil?"
- "¿Qué herramientas usas para eso hoy? ¿Qué te gusta y qué te frustra de ellas?"

### 4. El sistema de síntesis

El valor del continuous discovery no está en una entrevista — está en el patrón que emerge después de 20-30 entrevistas.

**Cómo documentar para encontrar patrones**:
- Una ficha por entrevista con: perfil del entrevistado, citas textuales, oportunidades identificadas, conexiones con entrevistas anteriores
- Usa un tablero (Notion, Miro, FigJam) para agrupar oportunidades similares y ver cuáles aparecen en más entrevistas
- Una oportunidad que aparece en el 30%+ de las entrevistas es una señal fuerte de mercado

### 5. Assumption testing antes de construir

Antes de escribir una sola línea de código, testa los supuestos más arriesgados de tu solución:

**Tipos de assumption tests (del más barato al más caro)**:
1. Entrevista de concepto: muestra un sketch o descripción verbal y pide reacción
2. Fake door: añade el botón de la funcionalidad y mide cuántos lo intentan usar
3. Smoke test: landing page con la propuesta de valor y formulario de registro anticipado
4. Wizard of Oz: simula la funcionalidad manualmente sin automatizar
5. Concierge MVP: ofrece el servicio de forma manual a 5 clientes antes de construirlo

## Implementación en 30 días

**Semana 1**: Define el resultado de negocio deseado. Crea la cuenta en Calendly. Identifica los primeros 10 usuarios a invitar.
**Semana 2**: Primera entrevista. Documenta con la ficha estándar. Construye el primer nivel del OST.
**Semana 3**: Segunda y tercera entrevistas. Busca patrones. Actualiza el OST.
**Semana 4**: Presenta el OST al equipo. Elige las 3 oportunidades con más señal. Define el primer assumption test.

Cuéntame sobre tu producto y tu equipo y te ayudo a configurar tu primer ciclo de continuous discovery.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Implementar un sistema de investigación de usuario continua que mantiene al equipo de producto conectado a los problemas reales del cliente sin grandes estudios esporádicos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employee Experience (EX)',
                'description'      => 'Diseña la experiencia del empleado con el mismo rigor que el producto diseña la experiencia del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia en empresas de tecnología de rápido crecimiento. Ayúdame a aplicar los principios del diseño de experiencia de usuario (UX) a la experiencia del empleado (EX) para crear un lugar de trabajo que retenga talento y genere alto rendimiento de forma sostenida.

## La analogía fundamental

Tu empresa tiene dos tipos de usuarios: los externos (clientes) y los internos (empleados). Las empresas gastan millones optimizando la experiencia del cliente y luego improvisan la experiencia del empleado. El resultado: el talento que cuidas menos se va al competidor que lo cuida más.

Aplicar UX a EX no es metáfora — es un framework operativo con herramientas concretas.

## El Employee Journey Map

Igual que el customer journey map traza todos los puntos de contacto del cliente con tu marca, el employee journey map traza los momentos que importan en la vida de un empleado en tu empresa.

### Los 8 momentos que importan

| Momento | Duración típica | Riesgo de abandono | Palanca clave |
|---|---|---|---|
| Reclutamiento | 2-8 semanas | Alto | Claridad y velocidad del proceso |
| Onboarding | Primeros 90 días | Muy alto | Conexión con equipo y claridad de rol |
| Primer logro | Mes 2-4 | Medio | Reconocimiento oportuno |
| Desarrollo y crecimiento | Mes 6-18 | Alto | Plan de carrera visible |
| Feedback y evaluación | Anual/semestral | Medio | Claridad y justicia percibida |
| Cambio de rol o equipo | Variable | Medio | Gestión del cambio |
| Momentos de vida | Variable | Alto | Flexibilidad y apoyo |
| Salida | Variable | — | Offboarding digno |

## El onboarding como momento fundacional

El 20% de la rotación ocurre en los primeros 90 días. La razón no suele ser el sueldo — es la sensación de no encajar, no entender qué se espera de ti, o no conectar con el equipo.

### El plan de onboarding de 90 días

**Semana 1 — Conexión humana antes que productividad**:
- Bienvenida personal del manager el primer día (no una reunión de equipo genérica)
- Almuerzo informal con el equipo directo
- Sesión de 30 min con el CEO o un fundador (aunque la empresa sea grande, puede ser grabada)
- Acceso completo a herramientas y sistemas antes del día 1

**Mes 1 — Comprensión del contexto**:
- Reuniones 1:1 con los 5-8 personas con quienes más trabajará
- Acceso al roadmap, la estrategia y las métricas de negocio
- Primera tarea pequeña con éxito garantizado (para generar confianza)
- Check-in semanal con el manager: ¿qué va bien? ¿qué no está claro?

**Mes 2-3 — Primera contribución real**:
- Proyecto con impacto real pero acotado
- Feedback explícito sobre lo que va bien y lo que puede mejorar
- Conversación sobre expectativas a 6 y 12 meses
- Evaluación del propio onboarding: "¿Qué cambiaríais para quien llegue después de ti?"

## Cómo medir la experiencia del empleado

Los 3 indicadores esenciales:

### 1. eNPS (Employee Net Promoter Score)
Pregunta trimestral: "¿Recomendarías esta empresa como lugar de trabajo a un amigo o colega?" (0-10)
- Promotores (9-10): tus embajadores
- Pasivos (7-8): neutrales que pueden irse o quedarse
- Detractores (0-6): riesgo de rotación y cultura tóxica

### 2. Engagement survey trimestral (5 preguntas, 3 minutos)
1. Sé lo que se espera de mí en mi trabajo (1-5)
2. En el último mes, alguien reconoció mi trabajo (1-5)
3. Tengo oportunidades de aprender y crecer (1-5)
4. Mi manager se preocupa por mí como persona (1-5)
5. En los próximos 6 meses, ¿planeas seguir en la empresa? (Sí / Probablemente sí / No sé / No)

### 3. Stay interviews (no exit interviews)
Los exit interviews llegan demasiado tarde. Los stay interviews son conversaciones de 30 minutos con empleados que quieres retener, donde preguntas:
- "¿Qué es lo que más valoras de trabajar aquí?"
- "¿Qué te haría plantearte irse?"
- "¿Qué cambiarías si pudieras cambiar algo mañana?"

## Tu diagnóstico

Cuéntame:
- ¿En qué momento del journey estáis perdiendo más talento?
- ¿Tenéis alguna medición de engagement ahora mismo?
- ¿Cuál es el tamaño del equipo y su distribución geográfica?

Con eso diseño el plan de EX adaptado a vuestra realidad actual.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar la experiencia del empleado desde el reclutamiento hasta la salida, aplicando metodologías de UX para reducir la rotación y aumentar el compromiso.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Fintech y banca digital',
                'description'      => 'Cómo las startups financieras ganan cuota a la banca tradicional: modelo de negocio, regulación y ventajas competitivas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de industria fintech con experiencia en venture capital y en la supervisión de entidades de pago en Europa. Ayúdame a entender el ecosistema fintech y a analizar las oportunidades de disrupción en los servicios financieros tradicionales.

## Por qué la banca tradicional es vulnerable

Los bancos tradicionales tienen cuatro problemas estructurales que las fintech explotan:

1. **Sistemas legacy**: la mayoría de los grandes bancos corren sobre mainframes de los años 70-80 que cuestan millones de euros en mantenimiento y hacen imposible la innovación rápida.
2. **Estructura de costes**: una sucursal física cuesta entre 300.000 y 800.000 € anuales en operaciones. Una cuenta bancaria digital puede servirse por 15-20 € por cliente al año.
3. **Cultura de producto**: los bancos construyen productos para cumplir requisitos regulatorios, no para deleitar al usuario.
4. **Datos fragmentados**: los datos de los clientes están en silos que no se comunican, lo que hace imposible la personalización real.

## El mapa del ecosistema fintech por vertical

| Vertical | Problema que resuelve | Jugadores relevantes | Margen de disrupción |
|---|---|---|---|
| Neobancos | Cuenta bancaria cara y mal diseñada | Revolut, N26, Wise | Alto (ya ha ocurrido) |
| Pagos | Transferencias lentas y comisiones opacas | Stripe, Adyen, Bizum | Muy alto |
| Inversión minorista | Acceso limitado y comisiones altas | Robinhood, Indexa, inbestMe | Alto |
| Crédito alternativo | Acceso denegado por modelos de riesgo anticuados | Afluenta, October, Younited | Medio |
| Insurtech | Seguros caros, procesos manuales y rigidez | Lemonade, Bdeo, Claimsforce | Medio-Alto |
| RegTech | Cumplimiento regulatorio caro y lento | Sumsub, Ncontracts | Creciente |
| Open Banking | Datos financieros en silos | Belvo, Tink, Plaid | Muy alto |

## El modelo de negocio de las fintech de éxito

Las fintech no ganan dinero solo con comisiones de transacción. Los modelos más robustos son:

### Freemium con upgrade a premium
El usuario basic es gratuito (adquisición a coste cero) y el usuario premium paga 7-15 €/mes por funcionalidades adicionales. Revolut tiene 40+ millones de usuarios con ~20% en planes de pago.

### Interchange fees
Cada vez que usas una tarjeta, el emisor cobra una comisión al comercio (0.2% en débito, 0.3% en crédito en Europa). Para una fintech con millones de usuarios activos, esto genera ingresos recurrentes sin cobrar nada al cliente.

### Intereses sobre saldos e inversiones
Si la fintech tiene licencia bancaria, puede depositar los saldos de clientes en el mercado monetario y retener parte del interés generado. Con tipos altos, esto ha sido un impulsor de ingresos enorme en 2023-2024.

### B2B2C (Banking as a Service)
Plataformas como Solarisbank o Swan permiten que cualquier empresa embeba servicios financieros (cuentas, tarjetas, pagos) en su producto. El margen es B2B pero el volumen es masivo.

## La regulación como barrera de entrada y como moat

### PSD2 y Open Banking en Europa
La directiva PSD2 obliga a los bancos a abrir sus APIs a terceros autorizados. Esto crea el Open Banking: cualquier fintech con licencia de TPP (Third Party Provider) puede acceder a los datos bancarios de los clientes (con consentimiento) y ejecutar pagos en su nombre.

Impacto: los neobancos pueden agregar todas las cuentas del usuario en un solo lugar y ofrecer vistas financieras unificadas sin ser el banco principal.

### Licencias y sus costes

| Licencia | Qué permite | Tiempo de obtención | Coste estimado |
|---|---|---|---|
| Entidad de pago (EP) | Pagar, transferir, cobrar | 6-12 meses | 100-500K € |
| Entidad de dinero electrónico (EME) | Emitir dinero electrónico (tarjetas prepago) | 6-18 meses | 150-600K € |
| Licencia bancaria completa | Todo: depósitos, crédito, seguros | 18-36 meses | 5-15M € |
| Pasaporte europeo | Operar en toda la UE desde un solo estado | Derivada de EP/EME/banco | Sin coste adicional |

La estrategia habitual: empezar con licencia de EP o EME (o usar la de un BaaS) y escalar hasta la licencia bancaria cuando el volumen lo justifique.

## El análisis competitivo que te pido que hagamos

Cuéntame:
- ¿Estás analizando el ecosistema para invertir, para construir o para comparar competidores?
- ¿En qué vertical o geografía quieres profundizar?
- ¿Hay alguna empresa específica cuyo modelo quieras desmontar?

Con eso te preparo el análisis financiero y competitivo adaptado a tu pregunta.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Entender el ecosistema fintech y analizar modelos de negocio, regulación y oportunidades competitivas en servicios financieros digitales.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Términos y política de privacidad que cumplen',
                'description'      => 'Redacta los documentos legales del producto digital que cubren los riesgos reales sin alienar al usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho digital, protección de datos y contratos de productos digitales en el ámbito europeo (RGPD, LOPD-GDD, DSA, ePrivacy). Ayúdame a revisar, mejorar o crear desde cero los documentos legales de mi producto digital de forma que sean legalmente sólidos y que el usuario los entienda y no los perciba como una barrera.

## Por qué los documentos legales de los productos digitales suelen fallar

Hay dos tipos de fracasos legales:

**Fracaso tipo 1 — No protegen**: el documento fue copiado de otro producto, no cubre los riesgos específicos del tuyo, o usa fórmulas genéricas que no se sostienen ante una reclamación real.

**Fracaso tipo 2 — Alejan al usuario**: son tan largos y opacos que nadie los lee, lo que en el contexto del RGPD puede significar que el consentimiento dado no es "libre, específico, informado e inequívoco" — y por tanto no es válido.

El objetivo es encontrar el equilibrio: documentos que protejan legalmente y que el usuario pueda leer y entender.

## Estructura óptima para los Términos y Condiciones de uso (T&C)

### 1. Resumen ejecutivo (el "TL;DR legal")
Antes de los términos completos, incluye un recuadro de 5-8 bullets que resuma los puntos más importantes en lenguaje humano. Ejemplo:

- Puedes usar el servicio de forma gratuita / con suscripción de X€/mes
- No puedes usar el servicio para actividades ilegales ni para hacer spam
- Puedes cancelar cuando quieras. Te devolvemos el dinero proporcional si estás en plan anual
- Somos responsables de que el servicio funcione, no de lo que hagas con él
- Si hay un problema entre nosotros, intentamos resolverlo con mediación antes de ir al juzgado

### 2. Las cláusulas de alto riesgo que no pueden faltar

| Cláusula | Por qué es crítica | Error común |
|---|---|---|
| Límite de responsabilidad | Sin ella, respondemos de todos los daños causados | No incluirla o ponerla en letra ilegible |
| Propiedad del contenido del usuario | ¿De quién son los datos que el usuario sube? | Ambigüedad que lleva a conflictos |
| Política de cancelación y reembolso | El 60% de las disputas vienen de aquí | Redacción vaga sobre "casos excepcionales" |
| Modificación de los términos | Cómo y con cuánto aviso podemos cambiar las condiciones | No especificar plazo mínimo de preaviso |
| Ley aplicable y jurisdicción | Dónde y bajo qué ley se resuelven los conflictos | No adaptarlo a la ubicación real del usuario |

### 3. Cláusula de modificación de servicio
Necesitas la capacidad de modificar, suspender o cancelar cuentas y funcionalidades. La clave es definir los supuestos con claridad y especificar el preaviso razonable.

## Estructura óptima para la Política de Privacidad (RGPD)

El RGPD exige que la política sea concisa, transparente, inteligible y de fácil acceso. Las autoridades de protección de datos sancionan las políticas ilegibles igual que las que omiten información.

### Las 9 secciones obligatorias del RGPD

1. **Quién es el responsable del tratamiento**: nombre legal, CIF y datos de contacto reales (no "info@empresa.com" — necesitas un email de privacidad específico o un DPO si aplica)
2. **Qué datos recogemos**: listado específico, no "datos personales necesarios para el servicio"
3. **Por qué los recogemos (finalidad) y base jurídica**:
   - Contrato: para ejecutar el servicio contratado
   - Interés legítimo: para análisis internos o seguridad (con evaluación de intereses legítimos)
   - Consentimiento: para marketing o cookies analíticas (debe ser revocable fácilmente)
   - Obligación legal: para cumplir con normativa fiscal o AML
4. **Cuánto tiempo los guardamos**: plazos concretos, no "el tiempo necesario"
5. **Con quién los compartimos**: nombres de los subprocesadores reales (Google, AWS, Stripe, etc.), no "proveedores de servicios de confianza"
6. **Transferencias fuera del EEE**: si usas servicios de EEUU, necesitas mencionar las garantías (Cláusulas Contractuales Tipo o DPF)
7. **Derechos del interesado**: acceso, rectificación, supresión, portabilidad, limitación, oposición — con el canal exacto para ejercerlos
8. **Derecho a reclamar ante la AEPD**: obligatorio mencionarlo
9. **Cookies**: idealmente en un documento separado que se actualiza con el gestor de cookies

## Checklist de cumplimiento antes de publicar

- [ ] La política de privacidad está fechada y tiene número de versión
- [ ] El banner de cookies aparece antes de cargar cookies no esenciales
- [ ] El formulario de registro tiene casilla separada para marketing (no combinado con los T&C)
- [ ] Los emails transaccionales no incluyen publicidad sin consentimiento separado
- [ ] Hay un proceso documentado para responder solicitudes de derechos en menos de 30 días
- [ ] Los subprocesadores tienen contratos de encargado del tratamiento firmados

## Cuéntame sobre tu producto

¿Qué tipo de producto digital tienes, en qué países operas y cuál es el dato más sensible que tratas (financiero, de salud, de menores, de localización)? Revisamos juntos qué documentos necesitas y qué riesgos específicos tienes que cubrir.

**Aviso importante**: este proceso proporciona una base sólida de conocimiento y estructura, pero los documentos legales definitivos deben ser revisados por un abogado colegiado antes de publicarlos en producción.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Crear o revisar los términos y condiciones y la política de privacidad de un producto digital para que cumplan el RGPD y sean comprensibles para los usuarios.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Experience-led support',
                'description'      => 'Diseña el soporte como parte de la experiencia de producto, no como un departamento separado que arregla lo que el producto rompe.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Experience con experiencia en empresas de producto digital B2C y B2B. Ayúdame a rediseñar la función de soporte para que deje de ser un centro de costes reactivo y se convierta en un motor de retención y mejora de producto.

## El problema del soporte tradicional

El modelo tradicional de soporte tiene cuatro síntomas que lo delatan como disfuncional:

1. **Métricas de eficiencia sobre métricas de experiencia**: se mide el tiempo de primera respuesta, no si el cliente quedó satisfecho de verdad.
2. **El soporte y el producto no hablan**: los tickets de soporte contienen el mapa más honesto de los problemas del producto, pero nadie en producto los lee.
3. **Soporte reactivo total**: el equipo solo actúa cuando algo ya fue mal. Nunca antes.
4. **El soporte se esconde**: las empresas hacen difícil encontrar el chat o el email de soporte para reducir el volumen, no para mejorar la experiencia.

## El modelo Experience-Led Support

### Principio 1 — El soporte es parte del producto, no un apéndice

Implicaciones prácticas:
- El equipo de soporte está en el mismo sprint de planificación que producto y engineering
- Cada nueva funcionalidad incluye un "support brief": qué preguntas va a generar, qué base de conocimiento hay que actualizar, qué automatizaciones se pueden preparar
- El Product Manager revisa los 10 tickets más frecuentes de la semana antes de la planning del sprint

### Principio 2 — Deflexión inteligente antes de contacto humano

El objetivo no es evitar que el cliente contacte contigo — es resolver su problema antes de que necesite hacerlo. Las tres capas de deflexión:

**Capa 1 — Self-service de calidad** (resuelve el 60-70% de los casos):
- Base de conocimiento bien escrita, buscable y actualizada
- Vídeos cortos de onboarding integrados en el producto (no en YouTube)
- Tooltips y guías contextuales dentro de la aplicación

**Capa 2 — Chatbot con IA** (resuelve el 20-25% adicional):
- No el chatbot que responde "No he entendido tu pregunta" — uno que usa la base de conocimiento real y escalada limpiamente cuando no puede resolver
- Regla: si el chatbot no puede resolver en 3 turnos, escala a humano automáticamente

**Capa 3 — Soporte humano** (el 10-15% restante que requiere criterio):
- Aquí el agente tiene tiempo real, contexto completo y autoridad para resolver sin escalar

### Principio 3 — El soporte proactivo

Las mejores intervenciones de soporte ocurren antes de que el cliente contacte:
- **Onboarding proactivo**: email o mensaje in-app cuando el usuario lleva 48h sin completar el setup
- **Health score monitoring**: identificar usuarios que no han iniciado sesión en 14 días y contactarles antes de que cancelen
- **Alertas de incidencia**: cuando hay un problema técnico, el equipo de soporte lo comunica masivamente antes de que empiecen las consultas individuales
- **Outreach post-renovación**: contactar a clientes en la semana posterior a renovar suscripción para asegurarse de que están satisfechos

### Principio 4 — Las métricas correctas

| Métrica de eficiencia (menos importante) | Métrica de experiencia (más importante) |
|---|---|
| Tiempo de primera respuesta | Customer Satisfaction Score (CSAT) post-ticket |
| Tickets cerrados por agente/hora | First Contact Resolution Rate |
| Tiempo medio de resolución | Churn rate de clientes que han contactado soporte vs. los que no |
| Coste por ticket | Net Promoter Score del soporte |

La métrica más valiosa y menos usada: el porcentaje de clientes que habían contactado soporte en los 30 días previos a cancelar. Si es alto, el soporte no está resolviendo — está siendo el último síntoma antes de la pérdida.

## Cómo implementar el feedback loop soporte → producto

**El ritual del ticket digest semanal**:
- Cada viernes, el líder de soporte envía a producto y engineering los 5 tipos de tickets más frecuentes de la semana, con citas textuales de clientes
- Regla: si el mismo tipo de ticket aparece 3 semanas seguidas, genera un issue en el backlog de producto
- Regla: si genera un issue crítico que se resuelve, el equipo de soporte es reconocido como fuente del insight

## Tu diagnóstico

Cuéntame:
- ¿Cuántas personas tiene tu equipo de soporte y cuántos tickets gestionan a la semana?
- ¿Cuál es tu CSAT actual o cómo mides la satisfacción de los clientes post-soporte?
- ¿Existe algún canal de feedback entre soporte y producto hoy?

Con eso diseño el plan de transformación adaptado a tu realidad.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Transformar el soporte de un centro de costes reactivo en un motor de retención y mejora de producto integrado con el equipo de desarrollo.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Especializarse en UX research como freelance',
                'description'      => 'El nicho con mayor demanda y menor oferta: cómo posicionarte, qué cobrar y dónde encontrar clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocios para freelancers creativos y técnicos, especializado en posicionamiento y estrategia de captación de clientes. Ayúdame a construir un negocio freelance de UX research viable, bien posicionado y con tarifas que reflejen el valor que genero.

## Por qué UX research es el nicho ideal para un freelance

La demanda de UX research supera con creces a la oferta de profesionales capaces de ejecutarlo bien. Las razones:

1. **Las empresas necesitan research pero no pueden permitirse un researcher a tiempo completo**: la mayoría de las startups y empresas medianas necesitan 2-4 proyectos de research al año — suficiente para un freelance, no para una contratación fija.
2. **Los diseñadores hacen research pero no quieren especializarse**: la mayoría de los diseñadores de producto saben hacer entrevistas básicas pero no tienen profundidad metodológica ni el tiempo para el análisis riguroso.
3. **El retorno del research es medible**: un estudio que descubre que el 70% de los usuarios abandona el onboarding por un problema específico tiene un ROI calculable — lo que justifica tarifas más altas que el diseño visual.

## Tu posicionamiento: la clave de todo

El error más común del freelance de UX research: presentarse como "hago todo tipo de research para cualquier tipo de empresa". El resultado: invisibilidad total.

La especialización que convierte:

### Opción A — Especialización por industria
"Research de usuario para startups de healthtech" o "Research de UX para plataformas de e-learning B2B". Conoces el lenguaje, los usuarios tipo, los problemas recurrentes y los reguladores del sector.

### Opción B — Especialización por método
"Especialista en evaluación de usabilidad y test moderado" o "Research cualitativo: entrevistas en profundidad y análisis temático". Eres la persona a quien llaman cuando necesitan un método específico ejecutado con excelencia.

### Opción C — Especialización por momento del producto
"Research para productos en fase pre-PMF" (descubrir si el problema es real) o "Research para productos con millones de usuarios que necesitan iterar". Los problemas y los métodos son completamente distintos.

## Las tarifas: qué cobrar y cómo justificarlo

El mercado de UX research freelance en España (2024-2025):

| Perfil | Tarifa día (8h) | Tarifa por proyecto |
|---|---|---|
| Junior (0-2 años) | 250-400 € | 1.500-4.000 € |
| Mid (3-5 años) | 400-700 € | 4.000-10.000 € |
| Senior (6+ años) | 700-1.200 € | 10.000-30.000 € |
| Especialista reconocido | 1.200-2.000 € | 15.000-50.000 € |

### Cómo justificar tarifas altas

La clave: nunca vendas horas, vende el resultado. La diferencia:

❌ "El estudio cuesta 5.000 € por 10 días de trabajo."
✅ "Este estudio identificará los 3 problemas principales que impiden que vuestros usuarios completen el onboarding. Empresas similares han visto aumentos del 20-40% en activación después de implementar los hallazgos. La inversión es de 5.000 €."

## Los 5 canales de captación más efectivos para UX researchers

### 1. LinkedIn como canal de contenido (no de venta directa)
Publica semanalmente sobre un insight de research real (anonimizado), una metodología que usas, o una pregunta que te hizo un cliente. El research bien explicado fascina a los product managers y diseñadores — que son quienes contratan freelancers o los recomiendan.

### 2. La red de diseñadores y PMs
Los diseñadores de producto saben cuando un proyecto necesita más research del que ellos pueden hacer. Cultiva relaciones con diseñadores senior de empresas medianas — son tu mejor fuente de referidos.

### 3. Comunidades de producto
Slack y Discord de Product School, Mind the Product, y comunidades locales de diseño. No vayas a vender — ve a contribuir. Responde preguntas de methodology, comparte recursos, construye reputación.

### 4. Responder a convocatorias en Workana, Toptal o Contra
Para construir cartera al principio. Las tarifas son más bajas, pero los casos de éxito que generan son oro para el pitch a clientes directos.

### 5. El cliente ancla (el más valioso)
Un cliente con quien trabajas de forma recurrente (1-2 proyectos al año) que da estabilidad y referencia social. Consíguelo aunque al principio tengas que negociar precio — la relación larga vale más que el margen del primer proyecto.

## Tu plan de los primeros 90 días

**Mes 1**: Define tu especialización, actualiza LinkedIn con el nuevo posicionamiento, contacta a 20 personas de tu red para comunicar tu nuevo enfoque.
**Mes 2**: Publica 4 posts en LinkedIn sobre tu especialidad, aplica a 5 proyectos en plataformas, busca 1 proyecto pequeño para tener un caso de éxito reciente.
**Mes 3**: Con el primer proyecto terminado, pide un testimonio, crea un mini case study, contacta a 10 clientes potenciales directamente con el case study como gancho.

Cuéntame tu perfil y experiencia: te ayudo a definir el posicionamiento y las primeras acciones concretas para los próximos 30 días.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir un negocio freelance de UX research bien posicionado, con tarifas justificadas y un sistema de captación de clientes sostenible.',
                'vote_score'       => 46,
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
