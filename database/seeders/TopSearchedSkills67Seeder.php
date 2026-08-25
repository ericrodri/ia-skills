<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills67Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Video marketing en LinkedIn — producción de vídeo nativo B2B',
                'description'      => 'Cómo producir vídeo nativo en LinkedIn que genera 3-5x más alcance que el texto en entornos B2B, con formatos, guiones y calendario editorial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenido B2B especializado en LinkedIn con experiencia en producción de vídeo nativo. Tu objetivo es ayudarme a construir una estrategia completa de vídeo para LinkedIn que multiplique mi alcance orgánico entre 3 y 5 veces respecto al contenido textual.

## CONTEXTO Y DIAGNÓSTICO INICIAL

Antes de darte el plan, necesito que me hagas las siguientes preguntas para personalizar la estrategia:
1. ¿Cuál es tu sector y a qué tipo de decisores te diriges?
2. ¿Cuántos seguidores tienes actualmente y cuál es tu tasa de interacción media?
3. ¿Tienes experiencia previa con vídeo o partes de cero?
4. ¿Qué recursos de producción tienes disponibles (cámara, micrófono, editor)?

## POR QUÉ EL VÍDEO NATIVO SUPERA AL TEXTO EN LINKEDIN

El algoritmo de LinkedIn penaliza los enlaces externos y prioriza el contenido que mantiene al usuario en la plataforma. El vídeo nativo (subido directamente, no enlazado desde YouTube) recibe:

- **3-5x más impresiones** que un post de texto equivalente
- **20x más shares** que otros formatos según datos internos de LinkedIn
- **Tiempo de visualización** que la plataforma interpreta como señal de calidad

El vídeo B2B no requiere producción cinematográfica. El formato "talking head" (cabeza parlante) con iluminación básica y mensaje claro supera al vídeo pulido sin sustancia.

## FRAMEWORKS DE CONTENIDO PARA VÍDEO B2B

### Framework AIDA adaptado al vídeo de 60-90 segundos

| Segmento | Duración | Objetivo | Ejemplo |
|----------|----------|----------|---------|
| Apertura-gancho | 0-5 seg | Captar atención antes del "Ver más" | "El 73% de los directivos de RRHH comete este error en..." |
| Problema | 5-20 seg | Conectar con el dolor del buyer | Describe la situación que conocen bien |
| Solución | 20-70 seg | Aportar valor accionable | El marco, el proceso, los 3 pasos |
| CTA suave | 70-90 seg | Generar interacción sin vender | "¿Os ha pasado esto? Contadme abajo" |

### Los 5 formatos de vídeo que mejor funcionan en B2B

**1. El Marco de 3 Pasos**
Estructura: "Para conseguir X sin Y, haz esto → esto → esto."
Duración ideal: 60-90 segundos.
Funciona porque da sensación de completitud y es fácil de guardar.

**2. El Mito vs. Realidad**
Estructura: "Todo el mundo dice X. La realidad es Y. Aquí la prueba."
Duración ideal: 45-75 segundos.
Genera debate y comentarios, lo que amplifica el alcance.

**3. El Caso de Uso Real**
Estructura: "Cliente/situación → problema específico → solución → resultado medible."
Duración ideal: 90-120 segundos.
Construye credibilidad con números concretos.

**4. La Pregunta Incómoda**
Estructura: Haz una pregunta que el sector evita. Respóndela honestamente.
Duración ideal: 60 segundos.
Alto ratio de comentarios y shares.

**5. La Actualización del Sector**
Estructura: "Ha pasado X. Esto significa Y para los profesionales de Z."
Duración ideal: 45-60 segundos.
Posiciona como referente y aprovecha el timing de noticias.

## PRODUCCIÓN SIN PRESUPUESTO: SETUP MÍNIMO VIABLE

### Equipamiento recomendado por nivel

| Nivel | Cámara | Audio | Iluminación | Inversión |
|-------|--------|-------|-------------|-----------|
| Básico | Smartphone moderno | Micrófono de solapa USB-C (15-30€) | Ventana natural lateral | < 50€ |
| Intermedio | Webcam 1080p o cámara DSLR | Rode Wireless GO II | Aro de luz LED | 200-400€ |
| Profesional | Sony ZV-E10 o similar | Micrófono cardioide de escritorio | Softbox doble | 600-1.200€ |

**Regla de oro:** El audio deficiente destruye la percepción de calidad más que el vídeo deficiente. Prioriza el micrófono sobre la cámara.

## GUIÓN TIPO: PLANTILLA REUTILIZABLE

```
[GANCHO — 5 seg]
"[Dato sorprendente / pregunta provocadora / afirmación contrarian] sobre [tema del sector]."

[PROBLEMA — 15 seg]
"La mayoría de [profesión/empresa] comete el error de [comportamiento común].
El resultado: [consecuencia negativa cuantificada]."

[SOLUCIÓN — 45 seg]
"Lo que funciona es [marco o proceso].
Paso 1: [acción concreta con ejemplo].
Paso 2: [acción concreta con ejemplo].
Paso 3: [acción concreta con ejemplo]."

[RESULTADO — 10 seg]
"Cuando aplicamos esto con [tipo de cliente/en nuestra empresa], conseguimos [resultado específico]."

[CTA — 10 seg]
"¿Vosotros cómo lo estáis haciendo? Contadme en los comentarios."
```

## CALENDARIO EDITORIAL: CADENCIA SOSTENIBLE

Para un perfil que empieza con vídeo, la cadencia recomendada es **2 vídeos por semana** durante las primeras 8 semanas para obtener datos suficientes.

| Día | Tipo de vídeo | Mejor hora de publicación |
|-----|---------------|--------------------------|
| Martes | Educativo (Marco/Proceso) | 8:00-9:00h o 17:00-18:00h |
| Jueves | Opinión/Mito vs. Realidad | 7:30-8:30h |

**Tema para los próximos 30 días:** Crea 8 vídeos alrededor de los problemas más frecuentes de tu buyer persona. Recicla el mismo contenido en distintos formatos: el vídeo largo se convierte en carrusel, el carrusel en post de texto, el post de texto en newsletter.

## MÉTRICAS QUE IMPORTAN (Y LAS QUE NO)

### KPIs relevantes para vídeo B2B

| Métrica | Buena señal | Señal de alarma |
|---------|-------------|-----------------|
| Tasa de visualización completa | > 35% | < 15% |
| Comentarios por 1.000 visualizaciones | > 5 | < 1 |
| Guardados | > 2% de visualizaciones | < 0,5% |
| Alcance fuera de seguidores | > 40% | < 20% |

**Ignora los "likes"** como métrica principal. Son la señal más débil del algoritmo. Un comentario de 5 palabras genera más alcance que 10 likes.

## PLAN DE ACCIÓN EN 30 DÍAS

**Semana 1:** Configura tu setup mínimo viable. Graba 4 vídeos en un mismo día de producción. Publícalos durante la semana.
**Semana 2:** Analiza cuál de los formatos tuvo mejor rendimiento. Dobla ese formato las semanas siguientes.
**Semana 3-4:** Introduce un elemento de serie (ej. "Cada semana un error que veo en [sector]") para crear expectativa y fidelizar audiencia.

Ahora dime: ¿cuál es tu sector y a quién te diriges? Con esa información diseño los primeros 4 guiones personalizados para ti.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear estrategia de vídeo nativo en LinkedIn con frameworks de guión, formatos probados y calendario editorial para entornos B2B.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Design QA para developers — revisar implementación frente al diseño',
                'description'      => 'Cómo revisar sistemáticamente que el código respeta el diseño y gestionar la brecha código-diseño entre desarrollo y UI/UX.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior developer con experiencia en colaboración con equipos de diseño. Necesito un sistema completo de Design QA para asegurar que lo que implementamos respeta fielmente lo que el diseñador entregó, y para gestionar las discrepancias de forma profesional sin bloquear el sprint.

## ¿QUÉ ES EL DESIGN QA Y POR QUÉ LO NECESITAS?

El Design QA (Quality Assurance de diseño) es el proceso sistemático de verificar que la implementación del frontend coincide con las especificaciones del diseño. Sin este proceso, los equipos acaban con:

- Inconsistencias visuales que se acumulan versión a versión
- Fricciones entre diseñadores y developers que escalan a conflictos de equipo
- Rework costoso descubierto tarde en el ciclo de desarrollo
- Productos que "funcionan pero no se ven bien"

## CHECKLIST DE DESIGN QA POR CATEGORÍAS

### 1. Tipografía

| Elemento | Qué verificar | Herramienta |
|----------|--------------|-------------|
| Font family | Familia correcta cargada, no fallback del sistema | DevTools → Computed |
| Font size | Px exactos o rem equivalente | DevTools → Box Model |
| Font weight | 400/600/700 no interpolado | DevTools → Computed |
| Line height | Valor exacto del sistema de diseño | DevTools |
| Letter spacing | Tracking aplicado correctamente | DevTools |
| Color de texto | Hex/variable de token exacto | Color picker |

### 2. Espaciado y layout

| Elemento | Qué verificar |
|----------|--------------|
| Padding interno | Todos los lados según spec |
| Margin entre componentes | Sistema de 4px/8px respetado |
| Gap en flex/grid | Valor del design token |
| Ancho máximo del contenedor | max-width correcto por breakpoint |
| Alineación | Left/center/right según diseño |

### 3. Color y estados

Verifica los estados interactivos que el diseño especifica pero el desarrollador olvida implementar:
- **Default** → estado normal
- **Hover** → cambio visual al pasar el cursor
- **Focus** → outline de accesibilidad (¡nunca elimines el focus ring sin sustituirlo!)
- **Active** → estado al hacer clic
- **Disabled** → opacidad reducida, no interactivo
- **Error** → color y mensaje de error

### 4. Responsive y breakpoints

| Breakpoint | Qué verificar en cada uno |
|------------|--------------------------|
| Mobile (320-767px) | Stack vertical, touch targets ≥ 44px |
| Tablet (768-1023px) | Layout intermedio según spec |
| Desktop (1024px+) | Grid completo, hover states |

## HERRAMIENTAS DE DESIGN QA

### Para pixel-perfect comparison

**PixelParallel** (extensión Chrome): Superpone el diseño de Figma sobre el navegador con ajuste de opacidad. Workflow: exporta el frame de Figma como PNG, cárgalo en PixelParallel, ajusta la opacidad al 50% y revisa diferencias.

**PerfectPixel** (extensión Chrome): Similar, permite medir desviaciones en píxeles.

### Para revisar design tokens

Usa las DevTools de Chrome con el panel de CSS personalizado:
```css
/* En el panel de Sources, busca tus custom properties */
:root {
  --color-primary: #your-token;
  --spacing-4: 16px;
}
```

Compara que los valores en producción coinciden con lo que Figma exporta como tokens.

### Para revisar accesibilidad visual

- **Axe DevTools**: Contraste de color automático
- **Who Can Use**: Simula cómo ven el color usuarios con distintas condiciones visuales

## PROCESO DE DESIGN QA EN EL SPRINT

### Flujo recomendado en 4 pasos

**Paso 1 — Design handoff con checklist**
Antes de que el developer empiece, el diseñador entrega:
- Archivo Figma con specs activadas (Inspect mode)
- Design tokens exportados
- Lista de estados interactivos
- Comportamientos responsive documentados

**Paso 2 — Self-QA del developer**
El developer hace su propio QA antes de abrir la PR usando el checklist anterior. Documenta las desviaciones intencionadas (por limitaciones técnicas) con una justificación.

**Paso 3 — Design review asíncrono**
El diseñador revisa la implementación en staging. Usa Loom o capturas anotadas para comunicar las correcciones. Clasifica cada issue:
- 🔴 Bloqueante (no se puede lanzar)
- 🟡 Importante (siguiente sprint)
- 🟢 Cosmético (backlog)

**Paso 4 — Sign-off documentado**
Una vez resueltos los bloqueantes, el diseñador da el sign-off explícito en el ticket/PR. Esto crea accountability y evita el "yo nunca aprobé esto".

## GESTIÓN DE LA BRECHA CÓDIGO-DISEÑO

### Causas frecuentes y soluciones

| Causa | Síntoma | Solución |
|-------|---------|----------|
| Diseño no revisa las constraints técnicas | Animaciones imposibles, layouts rotos | Incluir al developer en la fase de diseño |
| Design tokens no implementados | Valores hardcodeados, inconsistencias | Implementar sistema de tokens desde el inicio |
| No hay tiempo de QA en el sprint | Rework al final | Reservar 20% del tiempo de cada tarea para QA |
| Comunicación asíncrona deficiente | Malentendidos en la interpretación | Sesión de kickoff por feature, no solo handoff |

### Plantilla para reportar una desviación de diseño

```
## Design Deviation Report

**Componente:** [Nombre del componente]
**Pantalla/Feature:** [Nombre]
**Desviación detectada:** [Descripción específica]
**Diseño esperado:** [Link a frame de Figma]
**Implementación actual:** [Screenshot]
**Causa:** [Limitación técnica / Malentendido / Decisión de equipo]
**Solución propuesta:** [Corrección CSS / Alternativa técnica]
**Prioridad:** 🔴 / 🟡 / 🟢
```

## PLAN DE IMPLEMENTACIÓN

**Semana 1:** Audita el componente más usado del proyecto con el checklist de tipografía y espaciado. Documenta las desviaciones existentes.
**Semana 2:** Introduce el self-QA checklist en tu workflow personal antes de cada PR.
**Semana 3:** Propón al equipo añadir "Design Review" como paso obligatorio antes del merge a main.
**Mes 2:** Implementa un sistema de design tokens compartido entre Figma y el código.

¿Sobre qué parte del proceso quieres que profundice primero? ¿Tienes ya un sistema de tokens o partes de cero?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Establecer un proceso de Design QA que garantice fidelidad entre diseño e implementación, con checklists, herramientas y gestión de desviaciones.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de diseño que escala — gestión de la expansión visual con coherencia',
                'description'      => 'Cómo construir y gobernar un sistema de diseño que crece con el producto sin perder coherencia visual ni generar deuda de componentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design systems lead con experiencia construyendo y escalando sistemas de diseño en productos digitales medianos y grandes. Necesito un plan completo para crear o madurar un sistema de diseño que soporte el crecimiento del producto sin que la coherencia visual se degrade.

## EL PROBLEMA REAL: POR QUÉ LOS SISTEMAS DE DISEÑO FALLAN AL ESCALAR

La mayoría de los sistemas de diseño mueren por una de estas tres razones:
1. **Adopción parcial:** Los equipos de producto usan el 60% del sistema y el resto lo improvisan
2. **Deuda de componentes:** Se añaden componentes sin deprecar los obsoletos, creando duplicados
3. **Falta de gobernanza:** Nadie es dueño del sistema cuando el equipo crece

El resultado es un producto que empieza coherente y en 18 meses tiene 4 variantes del mismo botón primario.

## LOS 4 NIVELES DE MADUREZ DE UN SISTEMA DE DISEÑO

| Nivel | Nombre | Características | Señales |
|-------|--------|-----------------|---------|
| 1 | Ad-hoc | No existe sistema formal | Cada diseñador tiene sus propios estilos |
| 2 | Librería compartida | Componentes en Figma, sin tokens | El equipo los usa pero "a su manera" |
| 3 | Sistema gestionado | Tokens + componentes + documentación | Hay un proceso de contribución |
| 4 | Sistema de plataforma | Multi-producto, multi-equipo, versionado | Releases, changelogs, adoption metrics |

Diagnostica en qué nivel estás antes de decidir cuánto invertir.

## ARQUITECTURA DE UN SISTEMA DE DISEÑO ESCALABLE

### La pirámide de fundamentos

**Nivel 1 — Design Tokens (la base)**
Los tokens son los valores atómicos del sistema: colores, tipografía, espaciado, sombras, bordes.

```
tokens/
├── color/
│   ├── primitive.json    → { "blue-500": "#3B82F6" }
│   └── semantic.json     → { "color-primary": "{blue-500}" }
├── typography/
│   ├── font-size.json
│   └── line-height.json
└── spacing/
    └── scale.json        → { "spacing-4": "16px" }
```

**Nivel 2 — Componentes base (átomos)**
Botones, inputs, badges, iconos. Regla: un componente base no tiene lógica de negocio.

**Nivel 3 — Componentes compuestos (moléculas)**
Cards, formularios, modales construidos a partir de átomos.

**Nivel 4 — Patrones y plantillas**
Layouts de página, flujos de onboarding, estados vacíos.

## GESTIÓN DE LA EXPANSIÓN: EL PROCESO RFC

Cuando alguien necesita un componente nuevo, usa el proceso **RFC (Request for Component)**:

### Plantilla RFC

```markdown
## RFC: [Nombre del componente]

**Solicitado por:** [Equipo/persona]
**Feature donde se necesita:** [Link]
**Fecha límite:** [Fecha]

### Problema
¿Qué necesidad resuelve este componente?

### Diseño propuesto
[Mockup o descripción]

### Alternativas consideradas
1. ¿Existe un componente similar que pueda extenderse?
2. ¿Puede resolverse con variantes del componente X?

### Impacto en el sistema
- Nuevos tokens necesarios: [Lista]
- Dependencias: [Componentes que usa]
- Casos de uso adicionales identificados: [Lista]

### Decisión
[ ] Aprobado como nuevo componente
[ ] Resuelto extendiendo [componente existente]
[ ] Rechazado por [razón]
```

## GOBERNANZA: QUIÉN DECIDE QUÉ

### Modelo de gobierno para equipos de 3-10 personas

| Rol | Responsabilidad | Tiempo semanal |
|-----|-----------------|----------------|
| Design Systems Lead | Visión, decisiones de arquitectura, roadmap | 50-100% |
| Contribuidores (rotatorios) | Implementan RFC aprobados, documentan | 20% del sprint |
| Consumers | Usan el sistema, reportan bugs, proponen RFCs | Puntual |

### Reunión de sistema de diseño: cadencia y agenda

**Office Hours semanal (30 min, asíncrono primero):**
- ¿Qué RFC están en revisión?
- ¿Qué componentes tienen bugs reportados?
- ¿Qué deuda hay pendiente de deprecar?

## CÓMO DEPRECAR SIN ROMPER NADA

El proceso de deprecación es lo que más miedo da y lo que más se pospone. Este proceso de 4 fases lo hace manejable:

**Fase 1 — Anuncio (sprint N):** Añade etiqueta `[Deprecated]` al componente en Figma y documenta el reemplazo.
**Fase 2 — Aviso activo (sprint N+1 a N+3):** En cada PR que use el componente deprecado, el reviewer añade un comentario con el componente nuevo.
**Fase 3 — Migración (sprint N+4 a N+6):** El equipo migra todos los usos existentes. Busca en el código con grep/Storybook usage count.
**Fase 4 — Eliminación (sprint N+7):** Se elimina el componente. Se añade al CHANGELOG como breaking change.

## MÉTRICAS DE SALUD DEL SISTEMA DE DISEÑO

| Métrica | Cómo medirla | Objetivo |
|---------|-------------|----------|
| Cobertura de adopción | % de pantallas que usan componentes del sistema | > 80% |
| Componentes duplicados | Nº de componentes con funcionalidad solapada | < 5% del total |
| Tiempo de contribución | Días desde RFC aprobado hasta componente disponible | < 2 semanas |
| Bugs de sistema abiertos | Nº de issues sin resolver | < 10 en backlog |

## PLAN DE ACCIÓN EN 90 DÍAS

**Mes 1 — Fundamentos:**
- Audita todos los componentes existentes y clasifícalos por uso
- Implementa design tokens semánticos
- Documenta el proceso RFC

**Mes 2 — Gobernanza:**
- Establece el rol de Design Systems Lead (aunque sea parcial)
- Inicia el proceso de deprecación de los 3 componentes más duplicados
- Primera versión del Storybook o documentación viva

**Mes 3 — Adopción:**
- Sesión de formación para el equipo de producto y desarrollo
- Métricas de adopción definidas y dashboard activo
- Primera release versionada del sistema (v1.0.0)

¿En qué nivel de madurez estás actualmente y cuántas personas hay en tu equipo de diseño?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y escalar un sistema de diseño con tokens, gobernanza RFC, proceso de deprecación y métricas de adopción.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Expansion revenue — crecer dentro de cuentas existentes sin nuevas ventas',
                'description'      => 'El proceso sistemático de upsell, cross-sell y expansión de MRR dentro de la base de clientes actual, sin depender de nuevas adquisiciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas B2B especializado en expansion revenue y gestión de cuentas. Necesito construir un proceso sistemático para crecer dentro de mis cuentas actuales, porque adquirir un nuevo cliente cuesta 5-7 veces más que expandir uno existente.

## POR QUÉ EL EXPANSION REVENUE ES TU MAYOR PALANCA DE CRECIMIENTO

En un negocio SaaS o de servicios recurrentes, el Net Revenue Retention (NRR) lo es todo. Un NRR superior al 110% significa que tu base de clientes crece sola, incluso sin añadir nuevas cuentas. Las empresas con NRR > 120% (Snowflake, Datadog) crecen de forma exponencial porque cada cohorte de clientes vale más con el tiempo.

**La matemática del expansion revenue:**
- Cliente que paga 1.000€/mes → con un 20% de expansión anual → 1.200€/mes al año siguiente
- Si tienes 100 clientes así → 240.000€ adicionales/año sin un solo nuevo cliente

## LOS 3 MOTORES DE EXPANSION REVENUE

### 1. Upsell (subida de plan)
El cliente pasa de un plan inferior a uno superior porque ha superado los límites o ha visto el valor de las funcionalidades premium.

**Señales de oportunidad de upsell:**
- Uso > 80% del límite del plan actual (usuarios, storage, llamadas API, seats)
- Adopción alta de las funcionalidades del plan actual
- Caso de éxito documentado y medible
- Cambio en el equipo: nuevo responsable, crecimiento del cliente

### 2. Cross-sell (productos adicionales)
El cliente compra un producto o módulo adicional complementario a lo que ya tiene.

**Señales de oportunidad de cross-sell:**
- Mencionan un problema que resuelve tu otro producto en una llamada de revisión
- Tienen una herramienta de la competencia para un caso de uso que tú también cubres
- Han implementado con éxito el producto principal (base sólida para el segundo)

### 3. Seat expansion (más licencias)
El cliente añade más usuarios o departamentos. Típico en plataformas de colaboración y herramientas de productividad.

**Señales de oportunidad:**
- Nuevas contrataciones en el departamento que usa tu herramienta
- Otro departamento pidiendo acceso
- Compartir credenciales (señal de que el valor está probado y quieren más)

## EL PROCESO SYSTEMÁTICO: EXPANSION PLAYBOOK

### Fase 1 — Segmentación de la base de clientes

Clasifica todos tus clientes en 4 cuadrantes:

| Cuadrante | Salud | Potencial expansión | Acción |
|-----------|-------|---------------------|--------|
| Champions | Alta | Alto | Propuesta de expansión proactiva |
| Sleepers | Alta | Bajo | Programa de referidos |
| At Risk | Baja | Alto | Salvar primero, expandir después |
| Lost Causes | Baja | Bajo | Reducir costes de atención |

### Fase 2 — Modelo de salud del cliente (Health Score)

Define un health score que combina señales de uso y satisfacción:

| Señal | Peso | Verde | Amarillo | Rojo |
|-------|------|-------|----------|------|
| DAU/MAU ratio | 30% | > 40% | 20-40% | < 20% |
| NPS más reciente | 20% | ≥ 8 | 6-7 | < 6 |
| Tickets de soporte (volumen) | 15% | Bajo | Medio | Alto o 0 |
| Uso de funciones clave | 25% | ≥ 3 features core | 1-2 | Solo 1 |
| Días desde último login | 10% | < 7 | 7-30 | > 30 |

### Fase 3 — Cadencia de QBRs (Quarterly Business Reviews)

Los QBRs son la palanca de expansión más poderosa cuando se hacen bien. La mayoría se hacen mal.

**Estructura de un QBR que genera expansión:**

```
1. VALOR ENTREGADO (15 min)
   - Métricas de uso y ROI documentado
   - Comparativa con el periodo anterior
   - Caso de éxito específico del cliente

2. OBJETIVOS DEL CLIENTE (10 min)
   - ¿Qué han conseguido gracias a tu solución?
   - ¿Qué sigue siendo un reto para ellos?

3. ROADMAP Y NOVEDADES (10 min)
   - Lo que viene en los próximos 90 días que les puede interesar
   - Solicitar feedback sobre sus prioridades

4. CONVERSACIÓN DE EXPANSIÓN (15 min)
   - "Dado que X ha funcionado, hemos pensado que Y podría tener sentido para vosotros..."
   - Propuesta específica basada en su situación, no catálogo genérico

5. SIGUIENTES PASOS (10 min)
   - Acuerdos concretos con responsable y fecha
```

## PLANTILLA DE PROPUESTA DE EXPANSIÓN

```
Asunto: [Empresa] — Propuesta para [objetivo específico del cliente]

Hola [nombre],

En nuestra última revisión vimos que [métrica de éxito lograda].
Eso nos llevó a pensar en cómo podríais conseguir [siguiente objetivo que mencionaron].

La forma más directa de llegar ahí desde donde estáis es [solución/módulo/plan].

En concreto, esto os permitiría:
→ [Beneficio 1 cuantificado]
→ [Beneficio 2 cuantificado]
→ [Beneficio 3 cuantificado]

La inversión adicional sería de [precio] al mes, con un ROI estimado de [cálculo].

¿Tiene sentido que hablemos 20 minutos esta semana para verlo en detalle?
```

## MÉTRICAS DEL PROGRAMA DE EXPANSION REVENUE

| KPI | Fórmula | Objetivo |
|-----|---------|----------|
| Net Revenue Retention | (MRR inicio + expansión - contracción - churn) / MRR inicio | > 110% |
| Expansion MRR | MRR adicional de clientes existentes en el mes | > 15% del MRR total |
| Upsell conversion rate | Propuestas de upsell aceptadas / propuestas enviadas | > 30% |
| Time to expansion | Días desde que se identifica oportunidad hasta que cierra | < 45 días |

## PLAN DE 90 DÍAS PARA LANZAR TU PROGRAMA

**Mes 1:** Segmenta la base de clientes con el modelo de cuadrantes. Identifica los top 10 clientes con mayor potencial de expansión. Fija los QBRs con ellos.
**Mes 2:** Ejecuta los primeros 5 QBRs con la estructura anterior. Cierra al menos 2 conversaciones de expansión.
**Mes 3:** Sistematiza el proceso: health score automatizado, alertas de señales de expansión, plantillas en el CRM.

¿Cuántos clientes tienes actualmente y cuál es tu NRR actual? Con esa información te doy el plan de acción específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un playbook de expansion revenue con segmentación de clientes, health score, QBRs y métricas de NRR.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Privacy by design — integrar la privacidad en el producto desde el inicio',
                'description'      => 'Cómo el product manager integra la privacidad como requisito de diseño desde el primer sprint, no como parche de cumplimiento al final.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con especialización en privacidad de producto y cumplimiento del RGPD. Necesito un framework práctico para integrar privacy by design en mi proceso de desarrollo de producto, sin que se convierta en un freno para el equipo ni en un puro ejercicio de burocracia legal.

## QUÉ ES PRIVACY BY DESIGN Y POR QUÉ LE IMPORTA AL PM

Privacy by Design no es un concepto jurídico: es una filosofía de producto que dice que la privacidad debe ser el estado por defecto, no una capa añadida. El RGPD lo exige en su artículo 25, pero más allá del cumplimiento, hay razones de negocio para adoptarlo:

- **Confianza del usuario:** Los productos que piden menos datos del necesario y son transparentes tienen mayor conversión y retención
- **Riesgo reducido:** Las multas del RGPD pueden llegar al 4% del volumen de negocio global
- **Ventaja competitiva:** La privacidad es un diferenciador en mercados donde los usuarios son cada vez más conscientes
- **Deuda técnica evitada:** Añadir privacidad después cuesta entre 10 y 100 veces más que diseñarla desde el inicio

## LOS 7 PRINCIPIOS DE PRIVACY BY DESIGN (CAVOUKIAN)

| Principio | Qué significa en la práctica |
|-----------|------------------------------|
| 1. Proactivo, no reactivo | Identificar riesgos antes de que ocurran, no después |
| 2. Privacidad por defecto | La configuración más restrictiva como opción inicial |
| 3. Privacidad en el diseño | Integrada en la arquitectura, no añadida después |
| 4. Suma positiva | Privacidad Y utilidad, no privacidad O utilidad |
| 5. Seguridad end-to-end | Protección durante todo el ciclo de vida del dato |
| 6. Visibilidad y transparencia | El usuario puede verificar qué datos se recogen y por qué |
| 7. Respeto por el usuario | El usuario tiene control real sobre sus datos |

## EL PROCESS DE PRIVACY BY DESIGN PARA PMs

### Fase 1 — Privacy Impact Assessment (PIA) en la definición de la feature

Antes de escribir la primera user story, responde estas preguntas:

```
PRIVACY IMPACT CHECKLIST

Feature: [nombre]

□ ¿Qué datos personales recoge esta feature?
  Lista: [nombre, email, comportamiento, localización, etc.]

□ ¿Cuál es la base legal para recogerlos?
  [ ] Consentimiento
  [ ] Ejecución de contrato
  [ ] Interés legítimo
  [ ] Obligación legal

□ ¿Para qué finalidad exacta se usan estos datos?
  Finalidad declarada: [descripción precisa]

□ ¿Cuánto tiempo se retienen? [días/meses/hasta X evento]

□ ¿Se comparten con terceros? ¿Cuáles? ¿Con qué garantías?

□ ¿Puede el usuario acceder, modificar o eliminar estos datos?
  Mecanismo: [descripción]

□ ¿Cuál es el dato mínimo necesario para cumplir la finalidad?
  ¿Recogemos algo más de lo estrictamente necesario?
```

### Fase 2 — Privacy en las user stories

Añade criterios de aceptación de privacidad en todas las stories que impliquen datos personales:

```
Historia de usuario:
Como usuario, quiero registrarme con mi email para acceder a la plataforma.

Criterios de aceptación (privacidad):
- Solo se pide email y contraseña (mínimo necesario)
- El usuario ve un enlace a la política de privacidad antes de confirmar
- El consentimiento es granular: suscripción a marketing es opt-in separado
- El email se almacena cifrado en reposo
- El usuario puede eliminar su cuenta y todos sus datos en < 30 días
```

### Fase 3 — Privacy defaults: configuración por defecto restrictiva

| Setting | Default incorrecto | Default correcto |
|---------|-------------------|-----------------|
| Notificaciones de marketing | Activadas | Desactivadas |
| Visibilidad del perfil | Público | Solo yo |
| Analytics de uso compartidos | Activados | Desactivados |
| Cookies de terceros | Aceptadas | Solo esenciales |
| Historial de actividad | Guardado indefinidamente | 90 días con opción de extender |

## MINIMIZACIÓN DE DATOS: EL FRAMEWORK DE "NEED TO KNOW"

Para cada dato que tu producto recoge, pásalo por este filtro:

**Pregunta 1:** ¿Qué funcionalidad específica habilita este dato?
**Pregunta 2:** ¿Podría la funcionalidad existir sin este dato o con una versión menos precisa?
**Pregunta 3:** ¿Podría usarse un dato sintético o agregado en lugar del dato personal?

Ejemplo práctico:
- **Dato:** Localización GPS en tiempo real
- **Funcionalidad:** Recomendar restaurantes cercanos
- **Alternativa:** Pedir el código postal una vez en el onboarding (datos mucho menos sensibles)
- **Decisión:** Usar código postal salvo que la funcionalidad core requiera GPS

## GESTIÓN DE TERCEROS Y SDKs

Los SDKs de analytics, publicidad y herramientas de terceros son la mayor fuente de riesgo de privacidad en productos digitales. Antes de integrar cualquier SDK:

| Evaluación | Preguntas a responder |
|-----------|----------------------|
| Datos recogidos | ¿Qué datos envía el SDK a sus servidores? |
| Base legal | ¿Requiere consentimiento previo? |
| Transferencia internacional | ¿Datos fuera de la UE? ¿Con qué garantías? |
| DPA (Data Processing Agreement) | ¿Existe acuerdo firmado con el proveedor? |
| Opt-out | ¿Puedo desactivar el SDK si el usuario no consiente? |

## PLAN DE ACCIÓN EN 60 DÍAS

**Semanas 1-2:** Audita tu producto actual. Lista todos los datos personales que recoges, dónde se almacenan, con quién se comparten y qué retención tienen.
**Semanas 3-4:** Implementa el Privacy Impact Checklist en el proceso de definición de features. No hay que aprobar features sin él.
**Semanas 5-6:** Revisa los defaults de privacidad actuales y cambia los que no cumplan el principio de "mínimo permisivo".
**Semanas 7-8:** Audita todos los SDKs y herramientas de terceros. Elimina los que no sean imprescindibles. Firma DPAs con los que mantengas.

¿Tienes ya una política de privacidad vigente y un registro de actividades de tratamiento (RAT)? ¿En qué sector opera tu producto? Con esa información personalizo el análisis de riesgos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar privacy by design en el proceso de producto con checklists de PIA, user stories con criterios de privacidad y gestión de terceros.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Salud mental en el trabajo — cultura de bienestar psicológico real',
                'description'      => 'Cómo construir una cultura de bienestar psicológico genuina más allá del EAP y la fruta en la oficina, con acciones estructurales medibles.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en bienestar organizacional y psicología positiva aplicada al entorno laboral. Necesito diseñar una estrategia de salud mental en el trabajo que vaya más allá de las medidas superficiales (EAP, beneficios de wellness, fruta en la oficina) y construya una cultura de bienestar psicológico real y medible.

## POR QUÉ LAS MEDIDAS SUPERFICIALES NO FUNCIONAN

El 76% de los trabajadores reportan al menos un síntoma de burnout (Gallup, 2023). Las empresas han respondido con apps de meditación, días de salud mental y EAPs. El resultado: los índices de burnout no han bajado.

El problema es que estas medidas tratan los síntomas sin atacar las causas estructurales. Es como dar aspirinas a alguien que tiene fiebre por una infección: la fiebre baja un poco, pero la infección sigue ahí.

**Las causas reales del burnout organizacional:**
1. Sobrecarga de trabajo crónica y percepción de falta de control
2. Ausencia de reconocimiento y feedback genuino
3. Valores organizacionales incongruentes con los personales
4. Injusticia percibida (en compensación, trato, procesos)
5. Falta de comunidad y conexión social en el trabajo

Ninguna de estas causas se resuelve con una app de meditación.

## EL MODELO JD-R COMO MARCO DE DIAGNÓSTICO

El modelo Job Demands-Resources (Demandas-Recursos Laborales) es el framework académico más robusto para entender el bienestar en el trabajo. Dice que el burnout ocurre cuando las **demandas** superan a los **recursos**.

| Demandas (agotan) | Recursos (protegen) |
|-------------------|---------------------|
| Sobrecarga cuantitativa (mucho trabajo) | Autonomía y control sobre el trabajo |
| Demandas emocionales (trabajo con personas) | Feedback constructivo y reconocimiento |
| Ambigüedad de rol | Claridad de rol y expectativas |
| Conflicto trabajo-familia | Flexibilidad horaria |
| Clima de incivilidad | Apoyo del manager y del equipo |

**La palanca de RRHH:** No puedes eliminar todas las demandas (ni debes), pero puedes aumentar sistemáticamente los recursos.

## AUDITORÍA DE SALUD PSICOLÓGICA: EL DIAGNÓSTICO PREVIO

Antes de implementar cualquier medida, mide. Las encuestas anuales de clima son insuficientes por su baja frecuencia y reactividad. Implementa un sistema de medición continua:

### Pulse Survey mensual (5 preguntas, 2 minutos)

```
Escala 1-5 donde 1 = Totalmente en desacuerdo, 5 = Totalmente de acuerdo

1. Esta semana he podido gestionar mi carga de trabajo de forma sostenible.
2. Siento que mi trabajo tiene sentido y contribuye a algo que importa.
3. Mi manager me da el apoyo que necesito cuando tengo dificultades.
4. Me siento parte de un equipo donde me importa lo que le pasa a mis compañeros.
5. En esta empresa, pedir ayuda cuando la necesito es seguro y no penalizado.
```

La pregunta 5 mide la **seguridad psicológica**, que es el predictor más potente de rendimiento de equipo (Google Project Aristotle).

## LAS 5 ACCIONES ESTRUCTURALES QUE SÍ FUNCIONAN

### 1. Seguridad psicológica como KPI de managers

Los managers son el factor de riesgo o protección más potente para la salud mental de sus equipos. El 70% de la varianza en el bienestar del equipo se explica por el comportamiento del manager.

**Acciones concretas:**
- Incluir la puntuación de seguridad psicológica del equipo en la evaluación de desempeño del manager
- Formación en conversaciones difíciles: cómo dar feedback negativo sin crear miedo
- Prohibición explícita (y sancionada) del "shoot the messenger"

### 2. Derecho a desconexión digital real

El correo y los mensajes fuera de horario son la primera causa de sobrecarga percibida. Una política de desconexión que nadie cumple vale lo mismo que no tenerla.

**Implementación efectiva:**
- El liderazgo senior no envía mensajes fuera de horario (ni con la nota "no espero respuesta")
- Los canales de comunicación tienen horarios configurados (Slack en modo "no molestar" automático)
- Las urgencias reales tienen un canal específico y una definición explícita de "urgente"

### 3. Carga de trabajo como indicador medido, no intuido

| Práctica | Descripción | Frecuencia |
|----------|-------------|------------|
| Capacity planning por equipo | Antes de añadir proyectos, calcular capacidad real disponible | Cada sprint/mes |
| "Semáforo de carga" en reuniones de equipo | Cada persona reporta su nivel de carga (verde/amarillo/rojo) | Semanal |
| Revisión de WIP limits | Número máximo de proyectos activos por persona | Mensual |

### 4. Reconocimiento sistemático, no esporádico

El reconocimiento improvisado ("gracias cuando me acuerdo") es inconsistente y genera inequidad percibida.

**Sistema de reconocimiento estructurado:**
- Reconocimiento público en la reunión de equipo semanal: cada manager menciona una contribución específica de un miembro del equipo
- Peer recognition: un canal de Slack #gracias donde cualquiera puede reconocer a un compañero
- Vinculación explícita con valores: "Lo que hizo Ana ejemplifica nuestro valor de X porque..."

### 5. Conversaciones de bienestar individuales

Una vez al trimestre, los managers tienen una conversación de 30 minutos sobre bienestar (no sobre proyectos):

```
Guía de conversación de bienestar:

1. ¿Cómo estás en general? (no trabajo) → Escuchar activamente
2. ¿Qué parte de tu trabajo te da más energía? ¿Cuál te la quita?
3. ¿Hay algo que te esté generando estrés o preocupación que yo debería saber?
4. ¿Qué podría hacer yo de forma diferente para que tu trabajo fuera más sostenible?
5. ¿Qué necesitas de mí en los próximos 3 meses?
```

## MÉTRICAS DE UNA CULTURA DE BIENESTAR REAL

| Métrica | Fuente | Frecuencia | Objetivo |
|---------|--------|------------|----------|
| Índice de seguridad psicológica | Pulse survey (pregunta 5) | Mensual | > 4/5 |
| Absentismo por causa psicológica | Nómina/HR system | Trimestral | Tendencia descendente |
| eNPS (Employee NPS) | Encuesta dedicada | Trimestral | > +20 |
| Rotación voluntaria | HR system | Mensual | < referencia del sector |
| Utilización del EAP | Proveedor EAP | Trimestral | (indicador lagging, no leading) |

## PLAN DE IMPLEMENTACIÓN EN 6 MESES

**Mes 1-2:** Diagnóstico. Lanza el pulse survey. Analiza resultados por equipo y manager.
**Mes 3:** Formación a managers en seguridad psicológica y conversaciones de bienestar.
**Mes 4:** Implementa la política de desconexión digital con el apoyo visible del liderazgo.
**Mes 5-6:** Sistema de reconocimiento estructurado y revisión de carga de trabajo.

¿Cuál de los 5 factores de burnout descritos arriba crees que es el más crítico en tu organización ahora mismo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de salud mental en el trabajo con diagnóstico JD-R, pulse surveys, seguridad psicológica y acciones estructurales medibles.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de la deuda corporativa — cuándo endeudarse para crecer',
                'description'      => 'Cuándo tiene sentido endeudarse para financiar el crecimiento, cómo evaluar la capacidad de endeudamiento y cómo negociar condiciones con el banco.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en financiación bancaria de empresas medianas. Necesito entender cuándo tiene sentido apalancarse para crecer, cómo evaluar si mi empresa puede soportar la deuda y cómo negociar las condiciones con la entidad financiera.

## CUÁNDO LA DEUDA TIENE SENTIDO: EL PRINCIPIO DEL ARBITRAJE FINANCIERO

Endeudarse para crecer solo tiene sentido cuando el retorno esperado de la inversión (ROI) supera significativamente el coste de la deuda (tipo de interés + costes de estructuración).

**La regla del 2x:**
Si el coste de la deuda es del 6% anual y la inversión financia crecimiento con ROI del 20%, la deuda crea valor. Si el ROI es del 5%, la deuda destruye valor.

**Casos donde la deuda tiene sentido claro:**

| Tipo de inversión | Por qué la deuda encaja |
|-------------------|------------------------|
| Maquinaria o activo fijo productivo | El activo genera cash flow para pagar la deuda |
| Circulante para financiar crecimiento | El margen de la venta financia la deuda |
| Adquisición de empresa con sinergias | Las sinergias pagan el servicio de la deuda |
| Expansión internacional probada | El mercado destino tiene payback definido |

**Casos donde la deuda NO tiene sentido:**
- Financiar pérdidas operativas recurrentes
- Cubrir tesorería por problemas estructurales de margen
- Proyectos sin payback calculado

## ANÁLISIS DE CAPACIDAD DE ENDEUDAMIENTO

### Los 5 ratios que mira el banco antes de prestarte

**1. Ratio de endeudamiento = Deuda financiera neta / EBITDA**
- < 2x: empresa muy poco apalancada, con margen para endeudarse
- 2-3x: nivel razonable para empresa estable
- 3-4x: nivel alto, el banco pedirá más garantías
- > 4x: difícil de financiar sin garantías reales o patrimonio

**2. Cobertura del servicio de la deuda (DSCR) = EBITDA / (Capital + Intereses anuales)**
- El banco espera un DSCR > 1,25x. Eso significa que tu EBITDA cubre el pago de la deuda con un 25% de colchón.

**3. Ratio de liquidez = Activo corriente / Pasivo corriente**
- > 1,2x: el banco ve que puedes atender los pagos a corto plazo

**4. Margen EBITDA = EBITDA / Ventas**
- Indica la generación de caja operativa. Por debajo del 10% en la mayoría de sectores el banco se preocupa.

**5. ROE y crecimiento histórico**
- El banco quiere ver que la empresa tiene track record de crecimiento y rentabilidad, no solo el plan futuro.

### Simulación de capacidad: plantilla

```
Datos de tu empresa (últimos 12 meses):
- Ventas: €X
- EBITDA: €X (margen: X%)
- Deuda financiera neta actual: €X
- Activo corriente: €X
- Pasivo corriente: €X

Cálculo de capacidad adicional:
- Deuda máxima sostenible (3x EBITDA): €X
- Deuda actual: €X
- Capacidad adicional teórica: €X
- Descuento por garantías y riesgo: -30%
- Capacidad real de endeudamiento: €X
```

## TIPOS DE FINANCIACIÓN BANCARIA Y CUÁNDO USARLOS

| Producto | Para qué sirve | Plazo | Coste típico |
|----------|---------------|-------|-------------|
| Línea de crédito / póliza | Circulante, tesorería estacional | 1 año renovable | Euribor + 1-3% |
| Préstamo a largo plazo | Inversión en activos, expansión | 3-7 años | Euribor + 1,5-3,5% |
| Leasing / renting | Maquinaria, vehículos, equipos | Vida útil del activo | 4-7% |
| Factoring / confirming | Anticipo de cobros/pagos | Operación a operación | 2-4% sobre nominal |
| Préstamo ICO | Inversión y liquidez con garantía pública | 3-15 años | Euribor + 0,5-2% |
| Aval bancario | Garantía ante terceros (licitaciones, alquileres) | Duración del contrato | 0,5-1,5% anual sobre nominal |

## CÓMO NEGOCIAR CON EL BANCO: EL PROCESO EN 5 PASOS

### Paso 1 — Prepara el dossier de empresa

El banco recibe cientos de solicitudes. La calidad del dossier determina el tipo de interés que te ofrecen. Incluye:

- Cuentas auditadas de los últimos 3 años
- Plan de negocio con proyecciones a 3 años
- Descripción de la inversión a financiar y su ROI calculado
- Cuadro de deuda actual (todos los préstamos, vencimientos, tipos)
- Garantías disponibles (si las hay)

### Paso 2 — Habla con al menos 3 bancos simultáneamente

Nunca negocies con un solo banco. La competencia entre entidades es tu mayor palanca de negociación. Usa el mismo dossier para todos y compara:
- Tipo de interés (fijo vs. variable)
- Plazo de amortización
- Período de carencia
- Comisiones (apertura, estudio, cancelación anticipada)
- Garantías exigidas

### Paso 3 — Negocia las condiciones, no solo el tipo

Los elementos negociables más allá del tipo:

| Condición | Lo que pide el banco | Lo que puedes negociar |
|-----------|---------------------|------------------------|
| Comisión de apertura | 0,5-1% | Reducirla o eliminarla si ya eres cliente |
| Período de carencia | Sin carencia | 6-12 meses sin amortizar capital |
| Garantías personales | Aval del socio | Limitarlas o sustituirlas por garantía SGR |
| Covenants financieros | Muy restrictivos | Ampliar los umbrales o reducir la frecuencia de revisión |
| Cancelación anticipada | Penalización 0,5-1% | Eliminación o reducción |

### Paso 4 — Usa el ecosistema público de garantías

Las Sociedades de Garantía Recíproca (SGR como AVALMADRID, CERSA) avalan hasta el 80% de la operación a cambio de una comisión. Esto te permite:
- Acceder a financiación sin aval personal del socio
- Conseguir mejores tipos al reducir el riesgo bancario
- Operaciones más grandes de las que obtendrías solo

### Paso 5 — Lee las condiciones generales antes de firmar

Los contratos bancarios incluyen cláusulas que se activan en situaciones que no imaginas al firmar:
- **Cross-default:** Si incumples con otro banco, este puede reclamar su préstamo
- **Covenants:** Ratios financieros que debes mantener o el banco puede acelerar el vencimiento
- **Pignoración:** Activos que quedan en garantía y no puedes vender

Comparte el contrato con tu asesor legal y financiero antes de firmar.

## SEÑALES DE ALERTA: CUÁNDO NO ENDEUDARTE

- Tu EBITDA es negativo o muy volátil
- No tienes visibilidad de ventas a más de 3 meses
- La deuda actual ya supera 3x EBITDA
- El banco te pide el aval personal del socio y el importe te pone en riesgo patrimonial personal
- El ROI de la inversión está basado en supuestos muy optimistas sin base histórica

¿Cuál es el contexto de tu empresa y para qué tipo de inversión estás buscando financiación? Dame los números básicos (ventas, EBITDA, deuda actual) y te hago el análisis de capacidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Evaluar la capacidad de endeudamiento empresarial con ratios bancarios y negociar las condiciones del préstamo con entidades financieras.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Reglamento de IA de la UE (AI Act) — obligaciones y preparación para desarrolladores',
                'description'      => 'Qué sistemas son de alto riesgo según el AI Act, qué obligaciones impone a quien desarrolla IA y cómo empezar a cumplirlo antes de que entre en vigor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en regulación tecnológica y derecho digital europeo. Necesito entender el Reglamento de Inteligencia Artificial de la UE (AI Act), qué me obliga específicamente si desarrollo sistemas de IA, y qué pasos concretos debo dar para cumplirlo.

## QUÉ ES EL AI ACT Y CUÁNDO APLICA

El Reglamento (UE) 2024/1689 de Inteligencia Artificial (AI Act) es el primer marco regulatorio integral para la IA a nivel mundial. Fue publicado en el Diario Oficial de la UE en julio de 2024 y aplica de forma progresiva:

| Fecha | Qué entra en vigor |
|-------|--------------------|
| Febrero 2025 | Prohibición de sistemas de IA inaceptables |
| Agosto 2025 | Obligaciones para modelos de IA de uso general (GPAI) |
| Agosto 2026 | Obligaciones completas para sistemas de alto riesgo |
| Agosto 2027 | Extensión a sistemas de alto riesgo en productos regulados |

**¿A quién aplica?**
A cualquier empresa que **ponga en el mercado, ponga en servicio o utilice** sistemas de IA en la Unión Europea, independientemente de dónde tenga su sede. Esto incluye startups europeas, empresas americanas con clientes en la UE y cualquier organización que use IA en sus procesos internos.

## EL SISTEMA DE CLASIFICACIÓN DE RIESGOS

El AI Act clasifica los sistemas de IA en cuatro categorías:

### Riesgo inaceptable (PROHIBIDO desde feb. 2025)

Sistemas que no pueden comercializarse en la UE bajo ninguna circunstancia:
- Sistemas de puntuación social por parte de autoridades públicas
- Manipulación subliminal del comportamiento humano
- Explotación de vulnerabilidades de grupos específicos (menores, personas con discapacidad)
- Reconocimiento facial en tiempo real en espacios públicos (con excepciones para fuerzas de seguridad)
- Sistemas para inferir emociones en el trabajo y centros educativos

### Alto riesgo (obligaciones estrictas desde ago. 2026)

Esta es la categoría más relevante para la mayoría de los desarrolladores de IA. Un sistema es de alto riesgo si:

**Categoría A:** Es un componente de seguridad de un producto ya regulado (maquinaria, vehículos, dispositivos médicos, etc.)

**Categoría B:** Es un sistema independiente en alguno de estos ámbitos:
- Infraestructuras críticas
- Educación y formación profesional (acceso, evaluación)
- Empleo y gestión de personas (selección, evaluación, ascensos)
- Servicios esenciales privados y públicos (crédito, seguros, prestaciones sociales)
- Actividades de seguridad pública
- Migración y asilo
- Administración de justicia

**Ejemplos concretos de sistemas de alto riesgo:**
- CV screening automático para selección de personal
- Sistema de scoring crediticio
- Chatbot de asistencia jurídica que da recomendaciones vinculantes
- Sistema de detección de fraude en seguros
- Herramienta de evaluación de estudiantes

### Riesgo limitado (obligaciones de transparencia)

Estos sistemas tienen obligaciones más ligeras:
- **Chatbots:** Deben informar al usuario de que está interactuando con IA
- **Deepfakes:** El contenido sintético debe estar etiquetado
- **Sistemas de reconocimiento de emociones:** Deben informar a los usuarios

### Riesgo mínimo (sin obligaciones específicas)

La mayoría de las aplicaciones de IA caen aquí: filtros de spam, recomendadores de contenido, herramientas de productividad. No tienen obligaciones específicas bajo el AI Act, aunque sí aplican el RGPD y otras normativas sectoriales.

## OBLIGACIONES PARA SISTEMAS DE ALTO RIESGO

Si tu sistema es de alto riesgo, debes cumplir **antes de ponerlo en el mercado:**

### 1. Sistema de gestión de riesgos
Proceso continuo de identificación, análisis y mitigación de riesgos durante todo el ciclo de vida del sistema.

### 2. Gobernanza de datos
Los conjuntos de datos de entrenamiento deben:
- Estar documentados (procedencia, características, posibles sesgos)
- Ser representativos del ámbito de aplicación
- Tener medidas contra sesgos identificados

### 3. Documentación técnica
Antes del despliegue, documentar:
- Descripción general del sistema y su propósito
- Arquitectura del sistema y componentes
- Datos de entrenamiento y validación
- Capacidades y limitaciones (incluyendo umbrales de rendimiento)
- Medidas de ciberseguridad

### 4. Supervisión humana
El sistema debe estar diseñado para permitir la supervisión humana efectiva. Esto no significa que un humano apruebe cada decisión, sino que el sistema:
- Permite que el humano comprenda las decisiones
- Facilita la intervención cuando es necesario
- No impide al humano ignorar o anular el resultado

### 5. Exactitud, robustez y ciberseguridad
Niveles documentados de exactitud y medidas para mantener el rendimiento ante errores, fallos y ataques adversariales.

### 6. Registro de logs
El sistema debe registrar automáticamente los eventos que permitan rastrear su funcionamiento (especialmente en sistemas de decisión).

### 7. Transparencia hacia el usuario
Los usuarios del sistema (empresas que lo despliegan) deben recibir:
- Instrucciones de uso claras
- Información sobre las capacidades y limitaciones
- Información sobre los datos necesarios para el correcto funcionamiento

### 8. Registro en base de datos de la UE
Los sistemas de alto riesgo deben registrarse en la base de datos pública de la Comisión Europea antes de su comercialización.

### 9. Declaración de conformidad y marcado CE
Antes de poner en el mercado un sistema de alto riesgo como producto, se requiere la conformidad con el Reglamento y el marcado CE correspondiente.

## PLAN DE PREPARACIÓN EN 90 DÍAS

**Días 1-15 — Inventario:**
Lista todos los sistemas de IA que desarrollas, usas o planeas desarrollar. Para cada uno, aplica el árbol de decisión de clasificación de riesgos.

**Días 16-30 — Clasificación:**
Para los sistemas potencialmente de alto riesgo, realiza una evaluación documentada. Si hay duda, consulta con asesor legal especializado.

**Días 31-60 — Brechas:**
Para cada sistema de alto riesgo, compara tus prácticas actuales con las obligaciones del AI Act. Documenta las brechas.

**Días 61-90 — Roadmap:**
Prioriza las brechas por impacto y esfuerzo. Define responsables y fechas. Incluye el cumplimiento del AI Act en el proceso de diseño de nuevos sistemas.

## RECURSOS PRÁCTICOS

- **Texto oficial:** EUR-Lex Reglamento 2024/1689
- **Herramienta de clasificación:** AI Act Explorer (High-Level Expert Group on AI)
- **Estándar técnico de referencia:** ISO/IEC 42001 (AI Management System)
- **Consulta oficial:** AI Office de la Comisión Europea (ai-office@ec.europa.eu)

¿Cuáles son los sistemas de IA que desarrollas o usas actualmente? Con esa información te hago la clasificación de riesgo y la lista de obligaciones específicas para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Clasificar sistemas de IA según el AI Act de la UE, identificar obligaciones de cumplimiento para sistemas de alto riesgo y diseñar un plan de preparación.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte 24/7 con equipo pequeño — modelos de cobertura global para startups',
                'description'      => 'Modelos de cobertura global para startups que no pueden permitirse turnos de noche, con estrategias híbridas de IA, comunidad y escalado inteligente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia en startups B2B globales que han escalado el soporte sin escalar proporcionalmente el equipo. Necesito diseñar un modelo de cobertura 24/7 siendo realistas con el presupuesto: no puedo permitirme un equipo de noche.

## EL PROBLEMA REAL: EXPECTATIVAS VS. RECURSOS

Tus clientes americanos esperan respuesta a las 2 AM (hora española). Tu SLA dice "respuesta en menos de 4 horas". Tu equipo de soporte trabaja de 9 a 18. Esto crea una brecha de 15 horas diarias donde nadie responde.

Las opciones tradicionales son costosas:
- Turno de noche: 2-3 agentes × coste nocturno × 365 días = 80.000-150.000€/año
- Externalizar a BPO: pérdida de calidad, contexto y cultura

La buena noticia: hay modelos híbridos que cierran el 80-90% de esa brecha con recursos razonables.

## LOS 5 MODELOS DE COBERTURA 24/7 PARA STARTUPS

### Modelo 1 — Deflexión inteligente (el más escalable)

**Principio:** Haz que los clientes resuelvan sus propias dudas antes de contactar con el equipo.

El 60-70% de los tickets de soporte son la misma pregunta repetida. Si creas documentación accionable y un chatbot bien configurado, eliminas esa demanda.

**Componentes:**
- Knowledge base exhaustiva con búsqueda semántica (Intercom, Zendesk, Crisp)
- Chatbot configurado con las 50 preguntas más frecuentes
- Chatbot + IA generativa para preguntas no predefinidas (Intercom Fin, Zendesk AI)
- Tours interactivos en el producto que resuelven dudas antes de que aparezcan

**Resultado realista:** 40-60% de deflexión. De 100 tickets, 40-60 se resuelven sin intervención humana.

### Modelo 2 — Follow the sun (para equipos distribuidos)

**Principio:** Distribuyes el equipo en zonas horarias que juntas cubren 24 horas.

| Zona horaria | Horario local (9-18h) | Cobertura UTC |
|--------------|----------------------|---------------|
| Europa (España) | 9:00-18:00 CET | 8:00-17:00 UTC |
| LATAM (México/Colombia) | 9:00-18:00 CST/COT | 15:00/14:00-00:00/23:00 UTC |
| Asia-Pacífico (Filipinas/India) | 9:00-18:00 PHT/IST | 1:00/3:30-10:00/12:30 UTC |

Con tres personas en tres zonas horarias, cubres casi 24 horas. Coste adicional respecto al equipo actual: contratar 1-2 personas remotas en LATAM o Asia (30-50% del coste de una persona en Europa).

### Modelo 3 — On-call rotativo para urgencias

**Principio:** No todo es urgente. Distingue entre urgencias reales y solicitudes que pueden esperar hasta el horario de oficina.

**Definición de urgencia real:**
- El cliente está "bloqueado": no puede usar el producto para una operación crítica
- Impacto económico inmediato y cuantificable
- Sistema caído o bug que afecta a múltiples clientes

**Implementación:**
- Canal de urgencias separado (número de teléfono directo o email específico)
- Rotación de on-call entre el equipo: 1 semana cada X personas, con compensación adicional
- SLA diferenciado: urgencias en < 30 min, resto en horario de oficina del día siguiente

**Coste:** Compensación de on-call: 100-300€/semana por persona + smartphone de empresa

### Modelo 4 — Comunidad de usuarios como primera línea

**Principio:** Usuarios avanzados responden a usuarios principiantes. Tú supervisas y moderas.

Funciona especialmente bien en productos técnicos (developer tools, plataformas SaaS) donde los usuarios expertos tienen conocimiento suficiente para ayudar.

**Componentes:**
- Foro de comunidad (Discourse, Circle, Slack público)
- Programa de champions/MVPs con beneficios (licencias gratuitas, acceso anticipado, badge)
- Tu equipo monitoriza y escala lo que la comunidad no puede resolver
- SLA diferenciado: preguntas en el foro público sin SLA; tickets privados con SLA

### Modelo 5 — Horario ampliado sin turno de noche

**Principio:** Extiendes el horario de cobertura con turnos solapados, sin llegar a 24h.

| Turno | Horario | Cobertura |
|-------|---------|-----------|
| Mañana temprano | 7:00-16:00 CET | Cubre Asia y Oceanía (la noche anterior) |
| Turno estándar | 9:00-18:00 CET | Cobertura principal |
| Tarde extendida | 13:00-22:00 CET | Cubre América del Norte |

Con dos o tres personas en turnos solapados cubres de 7:00 a 22:00 (15 horas). La noche restante (22:00-7:00) queda fuera de SLA, pero la mayoría de los clientes europeos y americanos no lo notan si el SLA está bien comunicado.

## DISEÑO DEL SLA HONESTO Y GESTIONABLE

El error más común: prometer un SLA de 4 horas sin tener cobertura nocturna. El resultado: clientes decepcionados y métricas rojas constantemente.

**Alternativa: SLA por horario**

```
Horario de soporte activo: lunes a viernes 7:00-22:00 CET
Horario fuera de oficina: 22:00-7:00 CET y festivos

SLA para incidencias críticas (sistema caído):
- En horario activo: primera respuesta < 30 minutos
- Fuera de horario: primera respuesta al inicio del siguiente período activo

SLA para preguntas de producto:
- En horario activo: primera respuesta < 4 horas
- Fuera de horario: primera respuesta < 8 horas del inicio del siguiente día hábil
```

## HERRAMIENTAS PARA UN EQUIPO PEQUEÑO CON COBERTURA AMPLIA

| Herramienta | Para qué | Coste aprox. |
|-------------|----------|-------------|
| Intercom con Fin AI | Chatbot IA + ticketing | 100-400€/mes |
| Loom | Respuestas en vídeo (resuelve problemas complejos sin llamada) | 15€/usuario/mes |
| Zapier/Make | Automatización de respuestas a casos comunes | 20-100€/mes |
| Status page (Instatus/Statuspage) | Reduce tickets en incidencias | 20-100€/mes |
| Calendly | Gestionar llamadas de soporte sin ir y venir de emails | 8€/usuario/mes |

## PLAN DE IMPLEMENTACIÓN EN 60 DÍAS

**Semanas 1-2:** Analiza el 100% de tickets del último mes. Clasifícalos: ¿cuáles son las 20 preguntas más repetidas? Esas van a la knowledge base y al chatbot.
**Semanas 3-4:** Lanza la knowledge base y configura el chatbot con las 20 preguntas. Mide la deflexión.
**Semanas 5-6:** Define el SLA diferenciado por horario. Comunícalo a los clientes actuales.
**Semanas 7-8:** Implementa el modelo de on-call para urgencias reales. Define los criterios de urgencia con el equipo.

¿Cuántos tickets recibes al mes, en qué zonas horarias están tus clientes y cuántas personas tiene tu equipo de soporte actualmente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un modelo de cobertura 24/7 para startups con equipo pequeño mediante deflexión con IA, follow the sun, on-call y SLAs diferenciados.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'NDAs como freelance — qué firmar, qué evitar y cómo negociar',
                'description'      => 'Guía práctica para freelances sobre qué acuerdos de confidencialidad deben firmar, cuáles son una trampa contractual y cómo negociar cláusulas problemáticas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de contratos para profesionales independientes y freelances. Necesito una guía práctica para entender qué NDAs debo firmar, cuáles son una trampa y cómo negociar las cláusulas que me ponen en riesgo.

## QUÉ ES UN NDA Y POR QUÉ TE LO PIDEN

Un NDA (Non-Disclosure Agreement) o acuerdo de confidencialidad es un contrato por el que te comprometes a no revelar información que el cliente te comparte en el contexto del proyecto. Es completamente legítimo y en muchos casos necesario para que el cliente comparta información sensible contigo.

**El problema:** Muchos NDAs de empresas están redactados para proteger máximamente a la empresa, no para ser equilibrados. Como freelance, si no los revisas, puedes firmar obligaciones que:
- Te impiden trabajar con otros clientes del mismo sector durante años
- Te hacen responsable de daños desproporcionados
- Te obligan a litigar en países o jurisdicciones que no conoces
- Te prohíben mencionar que has trabajado para esa empresa (incluyendo en tu portfolio)

## LAS 7 CLÁUSULAS PELIGROSAS EN UN NDA

### 1. Cláusula de no competencia disfrazada de confidencialidad

**Cómo suena:** "El contratista no prestará servicios a empresas del mismo sector o que sean competidoras directas o indirectas del cliente durante el período de confidencialidad."

**Por qué es un problema:** Si eres diseñador UX y el cliente es una fintech, esta cláusula puede prohibirte trabajar con cualquier otra empresa financiera durante 2 años. Como freelance, tu sector habitual de especialización quedaría bloqueado.

**Cómo negociarla:** "Las obligaciones de confidencialidad no limitan la capacidad del contratista de prestar servicios similares a otras empresas que no sean competidoras directas del cliente. A estos efectos, se entiende por competidor directo [definición específica y limitada]."

### 2. Período de confidencialidad indefinido o excesivamente largo

**Cómo suena:** "Las obligaciones de confidencialidad de este acuerdo subsistirán indefinidamente / durante 10 años."

**Por qué es un problema:** La obligación de confidencialidad indefinida es difícil de mantener en la práctica y te expone a reclamaciones futuras. 5-10 años es excesivo para la mayoría de proyectos.

**Cómo negociarla:** Para proyectos de diseño, desarrollo o consultoría, 2-3 años es razonable. Los secretos comerciales genuinos tienen protección separada por ley.

### 3. Definición de información confidencial demasiado amplia

**Cómo suena:** "Se considera información confidencial cualquier información que el cliente comparta con el contratista, verbal o escrita, independientemente de que esté marcada como confidencial."

**Por qué es un problema:** Con esta redacción, una conversación informal en una videollamada sobre la visión del producto puede convertirse en información confidencial que no puedes compartir con nadie jamás.

**Cómo negociarla:** La información confidencial debe estar:
- Identificada como tal en el momento de la divulgación (marcada, etiquetada o comunicada expresamente)
- O quedar explícitamente excluida la información que ya era de conocimiento público

### 4. Jurisdicción y ley aplicable desfavorable

**Cómo suena:** "Este acuerdo se regirá por la ley del Estado de Delaware y cualquier disputa se resolverá exclusivamente ante los tribunales de Wilmington, Delaware."

**Por qué es un problema:** Si hay un conflicto y debes litigar en Delaware siendo un freelance español, el coste de contratar abogado allí y desplazarte convierte cualquier reclamación en inviable.

**Cómo negociarla:** Propón "ley española y tribunales de [tu ciudad de residencia]". Muchas empresas americanas aceptan una cláusula de arbitraje internacional (ICC, LCIA) como compromiso.

### 5. Cláusula de penalización desproporcionada

**Cómo suena:** "En caso de incumplimiento, el contratista pagará una penalización de 100.000€ / equivalente al 10x del valor del contrato."

**Por qué es un problema:** Una penalización desproporcionada respecto al valor del proyecto (ej. una penalización de 100.000€ en un proyecto de 5.000€) es abusiva. En España, la cláusula penal excesiva puede ser moderada judicialmente, pero el proceso es costoso y estresante.

**Cómo negociarla:** La penalización debe ser proporcional al daño real y razonable ("daños y perjuicios directamente causados y debidamente acreditados").

### 6. Asignación de propiedad intelectual incluida en el NDA

**Cómo suena:** "Todo el trabajo creado por el contratista en el contexto de este acuerdo será propiedad exclusiva del cliente."

**Por qué es un problema:** Un NDA no debería incluir cesión de propiedad intelectual. Eso es materia del contrato de servicios. Si lo mezclan en el NDA, pueden estar adquiriendo derechos sobre tu trabajo sin habértelo pagado como tal.

**Cómo negociarla:** "Las disposiciones sobre propiedad intelectual se regularán exclusivamente en el contrato de servicios. Este acuerdo se limita a las obligaciones de confidencialidad."

### 7. Prohibición de mencionar al cliente en el portfolio

**Cómo suena:** "El contratista no podrá hacer referencia al cliente, ni mencionar el nombre del cliente, ni mostrar trabajos realizados para el cliente, en ningún medio de comunicación ni plataforma."

**Por qué es un problema:** Tu portfolio es tu principal herramienta de adquisición de clientes como freelance. No poder mostrar proyectos puede perjudicar seriamente tu negocio.

**Cómo negociarla:** "El contratista podrá mencionar al cliente como referencia y mostrar el trabajo realizado en su portfolio profesional, con la excepción de información confidencial específicamente identificada. El cliente podrá aprobar previamente las piezas que el contratista desee mostrar."

## PLANTILLA DE CONTRANOTA PARA NEGOCIAR UN NDA

Cuando recibes un NDA con cláusulas problemáticas, esta es la respuesta profesional:

```
Asunto: Revisión del NDA — [Nombre del proyecto]

Hola [nombre],

He revisado el NDA y en líneas generales me parece razonable.
Antes de firmarlo, me gustaría proponer algunos ajustes en los siguientes puntos:

1. Duración de la confidencialidad: propongo reducirla a 3 años desde la fecha de firma.

2. Definición de información confidencial: propongo añadir que la información
   debe estar marcada expresamente como confidencial en el momento de la divulgación.

3. Portfolio: me gustaría mantener la posibilidad de mencionar el proyecto en mi
   portfolio con tu aprobación previa sobre las piezas concretas.

4. Jurisdicción: propongo tribunales españoles o arbitraje internacional (CCI).

Adjunto una versión con los cambios propuestos marcados en Track Changes.
Si hay algún punto que no puedas aceptar, dímelo y buscamos una redacción alternativa.
```

## CUÁNDO NO FIRMAR UN NDA

Hay situaciones donde la negativa es la respuesta correcta:
- El cliente exige firmarlo antes de la primera reunión de descubrimiento para no revelar "nada" sobre el proyecto → el proyecto puede ser una idea poco desarrollada con la que no quieren que trabajes para nadie más
- Las cláusulas de no competencia bloquean tu sector principal de actividad
- El cliente se niega a negociar cualquier término ("es nuestro template estándar, tómalo o déjalo")

En ese último caso, tienes dos opciones: o lo firmas sabiendo exactamente los riesgos que asumes, o declinas el proyecto.

¿Tienes un NDA concreto que quieras que revise? Pégalo aquí (con los datos confidenciales anonimizados) y te indico exactamente qué cláusulas son problemáticas y cómo redactarlas de forma más equilibrada.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Revisar y negociar NDAs como freelance: identificar cláusulas peligrosas, plantillas de contranota y criterios para decidir cuándo no firmar.',
                'vote_score'       => 43,
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
