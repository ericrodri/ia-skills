<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills72Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Podcast marketing: genera autoridad y leads siendo invitado en podcasts',
                'description'      => 'Aprende a identificar los podcasts correctos de tu sector, conseguir invitaciones y convertir cada aparición en autoridad de marca y leads reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing de contenidos especializado en podcast marketing y relaciones públicas digitales. Tengo un negocio y quiero aparecer como invitado en podcasts de mi sector para generar autoridad y leads sin pagar publicidad. Ayúdame a diseñar una estrategia completa.

**Mi contexto:**
- Mi negocio o rol profesional: [describe brevemente]
- Mi área de expertise: [tema principal en el que puedo aportar valor como invitado]
- Mercado objetivo: [idioma, geografía, sector del oyente ideal]
- Objetivo principal: [autoridad de marca / generación de leads / visibilidad personal]
- ¿Has hecho alguna aparición en podcast antes?: [Sí / No]

---

## POR QUÉ EL PODCAST MARKETING FUNCIONA MEJOR QUE LOS ANUNCIOS

Los podcasts tienen 3 características únicas que los anuncios no pueden replicar:

1. **Atención profunda:** El oyente medio escucha 30-60 minutos contigo sin interrupciones
2. **Relación parasocial:** La voz crea proximidad — el oyente siente que te conoce
3. **Credibilidad transferida:** El presentador te avala ante su audiencia

**Datos de referencia:**
- El 80% de los oyentes de podcast escuchan el episodio completo
- La tasa de conversión promedio de oyente a lead tras una aparición es 2-4x mayor que en artículos
- Un oyente que te escucha 45 minutos tiene 6-8 veces más probabilidades de comprarte que alguien que lee un tuit

---

## PASO 1: IDENTIFICAR LOS PODCASTS CORRECTOS

### Criterios de selección (en orden de importancia):

| Criterio | Por qué importa | Cómo verificarlo |
|----------|----------------|-----------------|
| Audiencia = tu cliente ideal | Un oyente es mejor que mil irrelevantes | Pide datos demográficos al presentador |
| Engagement de la audiencia | Podcasts pequeños pero activos convierten mejor | Reviews en Spotify/Apple, interacción en redes |
| Frecuencia de publicación | Signal de salud del podcast | Verifica los últimos 3 meses de episodios |
| Tipo de invitados previos | ¿Personas similares a ti? | Escucha 2-3 episodios recientes |
| Alineación de temática | ¿Tu historia encaja en el contenido? | Mapa de episodios recientes |

### Herramientas para encontrar podcasts:
- **Listen Notes** (listennotes.com): el mejor directorio con filtros de categoría, seguidores y frecuencia
- **Podchaser**: métricas de audiencia y contacto con presentadores
- **Spotify for Podcasters**: búsqueda por tema en español
- **Búsqueda en Apple Podcasts**: "[tu sector] + entrevistas"
- **LinkedIn:** busca "presentador de podcast" + tu sector

### Clasificación de podcasts objetivo:
```
Tier 1 (stretch goal): 100k+ descargas/episodio — difíciles, alta exposición
Tier 2 (objetivo principal): 10k-100k descargas/episodio — accesibles con buena propuesta
Tier 3 (base): 1k-10k descargas/episodio — los más fáciles, perfectos para empezar
```
**Estrategia:** Empieza por Tier 3, usa esas apariciones como credencial para Tier 2 y Tier 1.

---

## PASO 2: LA PROPUESTA DE INVITADO (PITCH)

El 90% de los pitches son rechazados porque son egocéntricos. El presentador no quiere saber de ti — quiere saber qué le vas a dar a su audiencia.

### Anatomía del pitch perfecto:

**Email de pitch — template:**
```
Asunto: Idea de episodio para [NOMBRE DEL PODCAST]: [TEMA CONCRETO]

Hola [NOMBRE PRESENTADOR],

Escucho [NOMBRE PODCAST] desde el episodio [NÚMERO O FECHA] — especialmente
me quedé con [ALGO ESPECÍFICO DEL PODCAST que demuestra que lo escuchas de verdad].

Te escribo porque creo que podría aportar valor a tu audiencia con el tema:
"[TÍTULO DEL EPISODIO PROPUESTO]"

3 ideas concretas que podríamos explorar:
→ [Insight 1 que tu audiencia no ha oído antes]
→ [Historia o caso práctico relevante]
→ [Framework o metodología accionable]

Contexto sobre mí: [2-3 líneas — lo justo para ser creíble, no un CV]

Si te interesa explorar esto, puedo adaptarme a tu formato y duración habitual.

[TU NOMBRE]
[URL de tu web/perfil con ejemplos de apariciones previas o contenido propio]
```

**Lo que NUNCA debe incluir el pitch:**
- "Soy el fundador de..." como primera línea
- Una lista de tus logros antes de proponer el valor para la audiencia
- Un PDF adjunto en el primer contacto
- "Te ayudaré a promocionar el episodio" — todos lo dicen, ninguno lo hace de verdad

---

## PASO 3: PREPARAR TU APARICIÓN PARA MAXIMIZAR CONVERSIONES

### La media de 45 minutos en podcast: estructura ideal

| Segmento | Tiempo | Objetivo |
|----------|--------|---------|
| Tu historia personal (breve) | 3-5 min | Crear conexión y credibilidad |
| El problema que resuelves | 5-10 min | Audiencia se identifica |
| Framework o metodología | 15-20 min | Valor concreto, te posiciona como experto |
| Casos prácticos / historias | 10-15 min | Prueba social y memorabilidad |
| Cierre y CTA | 2-3 min | Conversión a lead |

### El CTA perfecto para el cierre del episodio:
Nunca digas "sígueme en Instagram" (nadie lo hace). En cambio:

**Formato de CTA que convierte:**
"Si lo que hemos hablado hoy te ha resonado, he preparado [NOMBRE DEL RECURSO GRATUITO — plantilla, guía, checklist] que puedes descargar en [URL SIMPLE Y MEMORABLE]. Es exactamente lo que necesitas para [BENEFICIO CONCRETO EN 5 PALABRAS]."

---

## PASO 4: EXTRAER EL MÁXIMO VALOR DE CADA APARICIÓN

Una sola aparición puede generar contenido para 4-6 semanas:

| Canal | Contenido derivado | Esfuerzo |
|-------|-------------------|---------|
| LinkedIn | 3-5 posts con insights del episodio | Bajo |
| Twitter/X | 10 citas o datos del episodio | Muy bajo |
| Newsletter | Resumen del episodio con enlace | Bajo |
| Blog | Artículo largo basado en el episodio | Medio |
| YouTube | Clip de 3-5 minutos del mejor momento | Medio |
| Instagram Reels | 3 clips de 30-60 segundos | Medio |

---

## TAREA PARA CLAUDE

Con mi contexto descrito:

1. **Lista de 20 podcasts objetivo:** Basándote en mi expertise y mercado, dame una lista estructurada de 20 podcasts donde debería aparecer (5 Tier 1, 8 Tier 2, 7 Tier 3) con el nombre del presentador si es posible y por qué encajo en su audiencia.

2. **Mis 3 ángulos de pitch únicos:** ¿Cuáles son las 3 historias o frameworks de mi expertise que generarían el mejor episodio? Descríbelos en formato de título + 3 bullets de valor para la audiencia.

3. **Email de pitch personalizado:** Escribe el email de pitch para el podcast más relevante de mi lista con el formato correcto, específico para mi perfil.

4. **Mi CTA de conversión:** Diseña el recurso gratuito y el CTA que debería usar al final de cada aparición para convertir oyentes en leads de forma que encaje con lo que vendo.

5. **Sistema de seguimiento:** Dame una plantilla de hoja de seguimiento para gestionar mi pipeline de podcast outreach (estado de cada contacto, fechas, recordatorios).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar una estrategia de podcast marketing para generar autoridad y leads siendo invitado en podcasts del sector',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de frontend escalable: componentes, estado y module boundaries',
                'description'      => 'Diseña la arquitectura de una aplicación frontend grande: estructura de componentes, gestión de estado, límites de módulos y estrategias de performance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de frontend senior con experiencia diseñando aplicaciones de gran escala en React, Vue o Angular con equipos de 5-20 desarrolladores. Voy a describir mi aplicación y mi equipo, y necesito que me ayudes a diseñar o revisar la arquitectura para que sea mantenible, escalable y performante.

**Mi contexto:**
- Framework principal: [React / Vue 3 / Angular / otro]
- Tamaño de la aplicación: [número de páginas/rutas, complejidad de estado]
- Tamaño del equipo: [X desarrolladores frontend]
- Principal problema actual: [estado global descontrolado / bundle demasiado grande / componentes imposibles de mantener / test coverage bajo]
- Stack adicional: [TypeScript sí/no, testing framework, CI/CD]

---

## PARTE 1: ESTRUCTURA DE CARPETAS Y MODULE BOUNDARIES

### El patrón Feature-Sliced Design (FSD)
La arquitectura más adoptada para aplicaciones grandes. Divide el código en capas con reglas estrictas de dependencia unidireccional.

```
src/
├── app/           # Configuración global, providers, router, store root
├── pages/         # Composición de features para una ruta específica
├── widgets/       # Bloques de UI reutilizables que combinan features
├── features/      # Acciones del usuario con lógica de negocio
├── entities/      # Modelos de negocio (User, Order, Product)
├── shared/        # Utilities, UI kit, API clients, hooks genéricos
```

**Regla de dependencia:** Las capas superiores solo pueden importar de capas inferiores.
```
app → pages → widgets → features → entities → shared
```
Nunca al revés. Esta regla elimina las dependencias circulares.

### Public API de cada módulo
Cada feature o entidad debe exportar solo lo que otros módulos necesitan:

```typescript
// features/auth/index.ts — Public API
export { LoginForm } from './ui/LoginForm';
export { useAuthStore } from './model/authStore';
export type { AuthUser } from './model/types';

// Lo demás es privado dentro del módulo
// No importes de features/auth/model/internalHelper.ts — eso rompe el contrato
```

---

## PARTE 2: GESTIÓN DE ESTADO — ELEGIR EL INSTRUMENTO CORRECTO

### Árbol de decisión de estado:

```
¿El estado necesita persistir entre componentes?
├─ No → useState local
└─ Sí → ¿Es estado de servidor (datos de API)?
          ├─ Sí → React Query / TanStack Query / SWR
          └─ No → ¿Es estado de UI global?
                    ├─ Sí (modales, temas, sidebar) → Zustand / Pinia / NgRx
                    └─ No, es estado de formulario → React Hook Form / VeeValidate
```

### Comparativa de librerías de estado global (2024):

| Librería | Framework | Bundle size | Devtools | Curva aprendizaje | Ideal para |
|----------|-----------|------------|---------|------------------|-----------|
| Zustand | React | ~1KB | ⭐⭐⭐ | Baja | Apps medianas, equipos pequeños |
| Jotai | React | ~3KB | ⭐⭐ | Media | Estado atómico granular |
| Redux Toolkit | React | ~15KB | ⭐⭐⭐⭐⭐ | Alta | Apps grandes, auditoría estricta |
| Pinia | Vue 3 | ~1.5KB | ⭐⭐⭐⭐ | Baja | Vue 3 — el estándar de facto |
| NgRx | Angular | ~30KB | ⭐⭐⭐⭐⭐ | Muy alta | Angular enterprise |

**Anti-patrón más común:** Poner todo en el store global. La regla práctica: si el estado solo lo usa un componente o un árbol pequeño, mantenlo local. El global store solo para estado realmente compartido entre rutas o módulos distantes.

---

## PARTE 3: PERFORMANCE EN APPS GRANDES

### Las 5 causas más frecuentes de lentitud en frontend:

#### 1. Bundle demasiado grande
**Diagnóstico:**
```bash
# Para React (Vite)
npx vite-bundle-visualizer

# Para webpack
npx webpack-bundle-analyzer stats.json
```

**Solución — Code splitting por ruta:**
```typescript
// Antes (todo en bundle principal)
import { AdminPanel } from './pages/AdminPanel';

// Después (lazy loading por ruta)
const AdminPanel = lazy(() => import('./pages/AdminPanel'));
```

**Objetivo:** Bundle inicial < 150KB gzipped. Cada ruta como chunk separado.

#### 2. Re-renders innecesarios
**Diagnóstico:** React DevTools Profiler — busca componentes que renderizan sin cambios en sus props.

**Soluciones:**
```typescript
// Memoización de componentes costosos
const ExpensiveList = memo(({ items }) => <ul>{items.map(...)}</ul>);

// Memoización de cálculos
const filteredItems = useMemo(() => items.filter(item => item.active), [items]);

// Memoización de callbacks para evitar re-renders de hijos
const handleClick = useCallback((id) => dispatch(selectItem(id)), [dispatch]);
```

**Cuándo NO memoizar:** En componentes simples o que siempre reciben props nuevas — la memoización tiene un coste de comparación.

#### 3. Imágenes sin optimizar
- Usa formatos WebP o AVIF (30-50% más ligeros que JPEG)
- Lazy loading nativo: `<img loading="lazy">`
- Tamaños responsivos: atributo `srcset`
- CDN con transformación en tiempo real (Cloudinary, imgix)

#### 4. Waterfalls de datos
Problema: Componente A carga → pide datos → llegan datos → renderiza hijos → hijos piden sus datos...

**Solución — Prefetch y parallel fetching:**
```typescript
// Inicia todas las peticiones en paralelo
const [user, orders, recommendations] = await Promise.all([
    fetchUser(userId),
    fetchOrders(userId),
    fetchRecommendations(userId),
]);
```

#### 5. Main thread bloqueado
Para operaciones costosas (parseo, cálculos complejos):
```typescript
// Mueve al Web Worker
const worker = new Worker('./heavy-computation.worker.ts');
worker.postMessage({ data: largeDataset });
worker.onmessage = (e) => setResult(e.data);
```

---

## PARTE 4: TESTING EN FRONTEND ESCALABLE

### La pirámide de tests para frontend:

| Nivel | Herramienta | % del total | Qué testea |
|-------|-------------|-------------|-----------|
| Unit | Vitest / Jest | 60-70% | Lógica pura, hooks, stores |
| Integration | Testing Library | 20-30% | Componentes con contexto real |
| E2E | Playwright / Cypress | 5-10% | Flujos críticos completos |

**Regla de oro:** Testea el comportamiento, no la implementación.
```typescript
// ❌ Mal — testea implementación
expect(component.state.isLoading).toBe(true);

// ✅ Bien — testea comportamiento del usuario
expect(screen.getByRole('progressbar')).toBeInTheDocument();
```

---

## TAREA PARA CLAUDE

Con mi framework y contexto:

1. **Auditoría de arquitectura actual:** Si me describes tu estructura de carpetas actual, te digo exactamente qué está bien, qué cambiar y en qué orden.

2. **Estructura de carpetas adaptada:** Propón la estructura de carpetas concreta para mi aplicación con ejemplos de qué va en cada capa.

3. **Estrategia de estado:** Para los 3-4 tipos de estado más comunes en mi aplicación, recomienda la herramienta exacta con un snippet de código de ejemplo.

4. **Plan de mejora de performance:** ¿Qué métricas debo medir primero (Core Web Vitals, bundle size, re-renders) y qué herramientas uso para diagnosticar cada una?

5. **Guía de contribución para el equipo:** Escribe las 10 reglas de arquitectura que todo el equipo debe conocer, en formato de guía breve que pueda ir al README del proyecto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la arquitectura de aplicaciones frontend grandes para equipos de desarrollo',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño en sprints ágiles: cómo encaja el diseño sin ser el cuello de botella',
                'description'      => 'Adapta tu proceso de diseño al ritmo de los sprints de desarrollo para entregar a tiempo, mantener la calidad y dejar de ser el eslabón más lento del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX/UI senior con experiencia trabajando en equipos ágiles y liderando la integración del proceso de diseño en ciclos de sprint. Trabajo en un equipo que usa Scrum o Kanban y el diseño a menudo bloquea o se retrasa respecto al desarrollo. Necesito tu ayuda para reorganizar mi proceso.

**Mi situación:**
- Metodología del equipo: [Scrum con sprints de X semanas / Kanban / mixto]
- Tamaño del equipo: [X diseñadores, X developers, X PMs]
- Principal problema: [diseño siempre va detrás / developers esperan diseños / no hay tiempo para investigación / los diseños cambian después de implementados]
- Herramientas de diseño: [Figma / Sketch / Adobe XD]
- Herramienta de gestión de proyecto: [Jira / Linear / Notion / Asana]

---

## EL PROBLEMA RAÍZ: EL DISEÑO NO ES UNA FASE, ES UN FLUJO

El error más común es pensar el diseño como una etapa que ocurre antes del desarrollo. En realidad, en equipos ágiles el diseño debe correr en paralelo con el desarrollo, siempre un sprint por delante.

**El modelo "Dual Track Agile":**
```
Sprint N:    [Discovery Track]  → Investigar y validar lo que el Sprint N+1 va a construir
             [Delivery Track]   → Diseño detallado de lo que el Sprint N construirá
                                  Desarrollo de lo que diseñó el sprint anterior
```

Esto significa que el diseñador siempre está trabajando en el sprint N+1 mientras el equipo desarrolla el sprint N.

---

## PARTE 1: LOS 3 NIVELES DE DISEÑO EN ÁGIL

### Nivel 1: Diseño Exploratario (2-4 semanas por delante)
- Bocetos, wireframes de baja fidelidad
- User stories con criterios de aceptación de UX
- Validación con usuarios (guerrilla testing, 5 usuarios)
- Output: problem frame claro y dirección aprobada por PM

### Nivel 2: Diseño Listo para Desarrollo (1 sprint por delante)
- Mockups de alta fidelidad en Figma
- Especificaciones de interacción y estados
- Design tokens y variables de diseño
- Handoff con anotaciones para desarrolladores
- Output: componentes listos para implementar sin ambigüedad

### Nivel 3: Diseño Reactivo (durante el sprint actual)
- Resolución de dudas de los developers (< 2 horas de respuesta)
- Ajustes menores y variantes no previstas
- QA visual: revisión de la implementación vs. diseño
- Output: implementación alineada con la intención de diseño

---

## PARTE 2: EL SPRINT DE DISEÑO — RITUALES CLAVE

### Los 5 rituales que el diseñador debe mantener:

#### 1. Design Review semanal (30 min)
Muestra los diseños de la próxima semana al equipo completo. Objetivo: detectar problemas técnicos antes de que lleguen al sprint.

**Agenda tipo:**
```
5 min  — ¿Qué hay en desarrollo ahora? Bloqueos o dudas pendientes
15 min — Presentación de diseños para el próximo sprint (flujos, estados, edge cases)
10 min — Q&A técnico con developers (¿esto es posible? ¿hay una solución más simple?)
```

#### 2. Kickoff de Historia (15 min por historia)
Antes de que un developer empiece a implementar, el diseñador explica la intención:
- ¿Qué problema resuelve este flujo?
- ¿Qué es crítico vs. qué puede simplificarse?
- ¿Cuáles son los edge cases?

#### 3. Desk Check de UI (10 min)
Cuando el developer dice "está listo", el diseñador revisa antes de que llegue a QA. Evita retrabajo tardío.

#### 4. Retrospectiva de diseño (mensual, 1h)
Solo el equipo de diseño: ¿qué handoffs salieron bien? ¿dónde pedimos demasiado tarde? ¿qué cambió durante el sprint?

#### 5. Inventario de deuda de diseño (semanal, 15 min)
Lista de inconsistencias detectadas durante el sprint. Priorización en el backlog de diseño.

---

## PARTE 3: FIGMA PARA HANDOFFS EFICIENTES

### Estructura de archivo Figma para equipos ágiles:

```
📁 [PROYECTO]
├── 📄 Design System (componentes, tokens, variables)
├── 📄 Sprint N — En desarrollo
│   ├── 🖼 Flujos finalizados (listos para implementar)
│   └── 🖼 States & Edge Cases
├── 📄 Sprint N+1 — En diseño
│   ├── 🖼 WIP (work in progress)
│   └── 🖼 Para revisar
└── 📄 Archivo histórico (sprints anteriores)
```

### Las anotaciones mínimas que deben acompañar cada entrega:

| Anotación | Qué incluir |
|-----------|------------|
| Estados del componente | Default, hover, active, disabled, error, loading, empty |
| Comportamiento responsive | Mobile, tablet, desktop si varía |
| Interacciones | Qué pasa al hacer clic, scroll, swipe |
| Condiciones de visibilidad | ¿Cuándo se muestra u oculta este elemento? |
| Datos reales vs. placeholder | Indicar longitudes máximas de texto, formatos de datos |

---

## PARTE 4: CUANDO NO HAY TIEMPO — DISEÑO DE MÍNIMOS VIABLES

### La matriz de priorización de diseño:

| Criterio | Prioridad Alta | Prioridad Media | Prioridad Baja |
|----------|---------------|-----------------|----------------|
| Impacto en el usuario | Flujo principal, primera sesión | Flujo secundario | Feature rara vez usada |
| Riesgo técnico | Interacción compleja | Interacción estándar | Texto y layout simple |
| Visibilidad para stakeholders | Demo / lanzamiento próximo | Uso interno | Backoffice |

**Cuándo puedes entregar "diseño suficiente":**
- Patrones de UI bien establecidos (tablas, formularios estándar) → referencia al design system
- Features de bajo tráfico → mockup de baja fidelidad es suficiente
- Experimentos / A/B tests → variante B puede ir con diseño minimal

---

## TAREA PARA CLAUDE

Con mi situación descrita:

1. **Diagnóstico de mis cuellos de botella:** Basándome en los problemas que describo, ¿cuáles son las 3 causas raíz de que el diseño sea el cuello de botella? ¿Qué cambio tiene el mayor impacto?

2. **Propuesta de calendario semanal:** Diseña mi semana ideal como diseñador en un equipo de sprints de 2 semanas, distribuyendo el tiempo entre discovery, producción de diseño, handoff y reactividad.

3. **Plantilla de handoff de Figma:** Describe exactamente qué secciones y anotaciones debe tener cada entrega de diseño a desarrollo para mi tipo de producto.

4. **Conversación difícil con el equipo:** Dame el guión para la reunión donde propongo al PM y al tech lead adoptar el modelo Dual Track. ¿Cómo vendo el cambio?

5. **Métricas de salud del proceso:** ¿Qué 5 métricas debo medir para saber si el proceso de diseño-desarrollo está funcionando bien?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar el proceso de diseño en sprints ágiles sin convertirse en el cuello de botella del equipo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Business case para el CFO: construye el ROI que justifica la inversión',
                'description'      => 'Construye el análisis financiero y la presentación que convence al director financiero más escéptico de aprobar tu propuesta o inversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con 20 años de experiencia evaluando propuestas de inversión en empresas medianas y grandes. Voy a describir la propuesta que quiero presentar y necesito que me ayudes a construir el business case financiero que superará el escrutinio del CFO más riguroso.

**Mi propuesta:**
- Qué quiero aprobar: [nueva herramienta / contratación / proyecto / expansión / inversión tecnológica]
- Coste estimado: [€X de inversión inicial + €X anuales de mantenimiento]
- Beneficios esperados: [describe qué crees que va a mejorar]
- Plazo para conseguir la aprobación: [días/semanas]
- Contexto del CFO: [¿qué sabes de sus prioridades actuales? ¿ahorros / crecimiento / riesgo?]

---

## CÓMO PIENSA UN CFO: LOS 4 FILTROS DE EVALUACIÓN

Antes de construir el business case, entiende la mentalidad que va a evaluarlo:

### Filtro 1: ¿Es la inversión real o especulativa?
El CFO distingue entre "esto va a pasar" y "esto podría pasar". Todo lo que está en el segundo grupo necesita análisis de sensibilidad.

### Filtro 2: ¿Cuál es el coste de NO hacerlo?
A veces el argumento más poderoso no es el ROI positivo de la inversión, sino el coste de inacción: riesgo de multa regulatoria, pérdida de clientes, incremento de coste operativo.

### Filtro 3: ¿Qué pasa si sale mal?
El CFO quiere saber el peor escenario antes que el mejor. Anticipa esto en tu análisis.

### Filtro 4: ¿Hay alternativas más baratas?
Si no has comparado alternativas, el CFO lo hará por ti — y puede rechazarte solo por no haber hecho ese trabajo.

---

## ESTRUCTURA DEL BUSINESS CASE FINANCIERO

### Sección 1: Resumen ejecutivo (máximo 1 página)
El CFO puede leer solo esto. Debe contener:
- Inversión total requerida (con desglose)
- ROI proyectado y payback period
- Riesgo principal identificado
- Decisión que se solicita y fecha límite

### Sección 2: Análisis de costes

**Template de desglose de costes:**
```
COSTES DE IMPLEMENTACIÓN (año 0):
├── Licencias/hardware/software: €X
├── Consultoría e implementación: €X
├── Formación del equipo: €X
├── Coste de migración/integración: €X
└── Contingencia (10-15%): €X
TOTAL INVERSIÓN INICIAL: €X

COSTES RECURRENTES (por año):
├── Mantenimiento y soporte: €X/año
├── Licencias anuales: €X/año
├── Recursos internos dedicados: €X/año (X% de X FTE × salario)
└── TOTAL OPEX ANUAL: €X
```

### Sección 3: Análisis de beneficios

**Los 4 tipos de beneficio que debes cuantificar:**

| Tipo | Descripción | Cómo calcularlo |
|------|-------------|----------------|
| Ahorro directo | Reducción de coste actual | Coste actual - coste futuro |
| Incremento de ingresos | Nuevas ventas o retención | Estimación conservadora de uplift |
| Ahorro de tiempo | Horas recuperadas × coste/hora | (Horas actuales - horas futuras) × coste FTE |
| Reducción de riesgo | Coste de un incidente × probabilidad | Análisis de escenarios |

**Template de cálculo de ahorro de tiempo:**
```
Proceso actual: X personas × Y horas/semana × €Z coste/hora = €W/año
Proceso mejorado: X personas × Y2 horas/semana × €Z coste/hora = €W2/año
Ahorro anual: €(W - W2)
```

### Sección 4: Análisis financiero

**Las 3 métricas que el CFO siempre pide:**

#### Payback Period (periodo de recuperación):
```
Payback Period = Inversión inicial ÷ Beneficio neto anual
Ejemplo: €100.000 ÷ €40.000/año = 2,5 años
```
**Benchmark:** < 2 años para inversiones tecnológicas en la mayoría de empresas.

#### ROI (Return on Investment):
```
ROI = (Beneficio total - Inversión total) ÷ Inversión total × 100
Ejemplo: (€200.000 - €100.000) ÷ €100.000 × 100 = 100% a 5 años
```

#### NPV (Valor Presente Neto):
Para inversiones > €50k o a largo plazo, el CFO querrá el VPN con tasa de descuento.
```
Usa la tasa WACC de la empresa (pregúntala o usa 8-12% como referencia)
NPV = Σ (Flujo de caja año N ÷ (1 + tasa)^N) - Inversión inicial
```

### Sección 5: Análisis de sensibilidad (lo que distingue un buen business case)

Presenta 3 escenarios:

| Escenario | Hipótesis | ROI | Payback |
|-----------|-----------|-----|---------|
| Pesimista | Beneficios -30%, costes +20% | X% | X años |
| Base | Como calculado | X% | X años |
| Optimista | Beneficios +20%, costes sin variación | X% | X años |

**Argumento clave:** "Incluso en el escenario pesimista, la inversión se recupera en [X] años y genera ROI positivo."

---

## EL SLIDE DECK PARA EL CFO: 6 SLIDES, NO MÁS

1. **Problema/oportunidad:** ¿Qué duele hoy? Datos concretos, no opiniones.
2. **La solución propuesta:** Qué es, cómo funciona, por qué esta y no otra.
3. **Análisis de costes:** Desglose claro y honesto, con contingencia.
4. **Proyección de beneficios:** Solo lo que se puede demostrar. Nada especulativo sin marcarlo.
5. **Resumen financiero:** Payback, ROI, VPN en una tabla. Los 3 escenarios.
6. **Próximos pasos:** Qué apruebas, para cuándo, quién es responsable.

---

## TAREA PARA CLAUDE

Con mi propuesta descrita:

1. **Estructura financiera completa:** Ayúdame a completar la tabla de costes y beneficios con los datos que te he dado, haciendo suposiciones explícitas donde falten datos.

2. **Cálculo del ROI y payback:** Calcula el payback period, ROI a 3 y 5 años, y el VPN con tasa de descuento del 10%.

3. **Análisis de sensibilidad:** Construye la tabla de 3 escenarios con las variables clave de mi propuesta.

4. **Argumentario para las 5 objeciones del CFO:** ¿Cuáles van a ser las 5 objeciones más duras y cuál es la respuesta correcta para cada una?

5. **Resumen ejecutivo de 1 página:** Redáctalo completo, listo para enviar por email antes de la reunión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir el análisis financiero y la presentación para conseguir la aprobación del CFO en inversiones y proyectos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en growth stage: escalar sin romper nada',
                'description'      => 'Adapta el modelo de trabajo del equipo de producto cuando ya tienes PMF y necesitas escalar: roadmap, procesos, OKRs y gestión del equipo que crece.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia llevando productos desde la etapa post-PMF hasta la escala, habiendo trabajado en empresas que crecieron de 50 a 500 empleados. Mi empresa ha encontrado el Product Market Fit y está entrando en la fase de crecimiento. Necesito ayuda para adaptar cómo trabajamos en producto para que el equipo pueda escalar sin perder velocidad ni calidad.

**Mi situación:**
- Etapa de la empresa: [post PMF, crecimiento activo]
- Tamaño actual del equipo de producto: [X PMs, X diseñadores, X developers]
- Principal reto ahora: [demasiadas prioridades / el equipo no sabe cuándo decir no / los OKRs no funcionan / cada squad va por su lado]
- Crecimiento de equipo previsto: [X personas en los próximos 12 meses]
- Modelo de trabajo actual: [squads / feature teams / otro]

---

## EL CAMBIO QUE NADIE TE CUENTA: DE FOUNDER-LED A PROCESS-LED

En etapa early-stage, la velocidad venía de decisiones rápidas del founder/CPO que conocía todo el contexto. En growth stage, ese modelo no escala porque:
- El CPO no puede estar en todas las decisiones
- Los nuevos PMs no tienen el contexto histórico
- Los equipos crecen y necesitan autonomía sin caos

El reto no es trabajar más duro — es construir los sistemas que permiten que otros trabajen bien sin supervisión constante.

---

## PARTE 1: ESTRUCTURA DE PRODUCTO QUE ESCALA

### Modelo de organización por outcome, no por feature

**Antes (feature team):**
```
Squad A: Todo lo relacionado con el producto de pagos
Squad B: Todo lo relacionado con la app móvil
```

**Después (outcome team):**
```
Squad Activación: Responsable de mejorar la tasa de activación de nuevos usuarios
Squad Retención: Responsable de reducir el churn y aumentar el NRR
Squad Monetización: Responsable de aumentar el ARPU
```

La diferencia: el outcome team tiene autonomía para decidir qué construir, no solo cómo.

### Cuándo añadir un nuevo PM al equipo:
| Señal | Acción recomendada |
|-------|-------------------|
| Un PM lleva más de 2 productos/áreas sin foco | Contrata un PM junior o asociado |
| El equipo de desarrollo espera priorización | El ratio 1:5-8 (1 PM por 5-8 engineers) se ha roto |
| Las decisiones de producto tardan > 2 días | Falta capacidad de decisión, no solo de ejecución |
| Un área estratégica no tiene dueño claro | Necesitas un PM senior o staff |

---

## PARTE 2: EL SISTEMA DE PRIORIZACIÓN QUE ESCALA

### OKRs de producto: los 5 errores más comunes

| Error | Consecuencia | Corrección |
|-------|-------------|-----------|
| KRs que son outputs, no outcomes | El equipo entrega features sin impacto | KR: "Reducir churn del 5% al 3%", no "Lanzar feature de retención" |
| Demasiados OKRs (> 3 por squad) | Foco disperso, todo avanza pero nada llega | Máximo 1 objetivo y 3 KRs por squad por trimestre |
| OKRs desconectados de la estrategia | Cada squad optimiza su métricas locales | Cascada: Company OKRs → Product OKRs → Squad OKRs |
| KRs imposibles de medir semanalmente | No hay feedback loop, los OKRs son decorativos | Todo KR debe tener una métrica medible en el dashboard |
| Sin OKR de salud del sistema | El equipo sacrifica calidad técnica por velocidad | Añade siempre un KR de mantenimiento: "Deuda técnica < X días" |

### Framework de priorización RICE vs WSJF:

**RICE** (mejor para discovery y features nuevas):
```
Score = (Reach × Impact × Confidence) ÷ Effort
```
- Reach: usuarios afectados en 1 trimestre
- Impact: 0.25 (mínimo) a 3 (masivo)
- Confidence: 50-100% según evidencia
- Effort: semanas de trabajo

**WSJF** (mejor para backlog de mejoras en growth stage):
```
WSJF = (Valor de negocio + Urgencia temporal + Reducción de riesgo) ÷ Tamaño del trabajo
```
Más adecuado cuando los costes de retraso son conocidos.

---

## PARTE 3: LOS RITUALES QUE HACEN ESCALAR EL EQUIPO

### Calendario de rituales de producto:

| Ritual | Frecuencia | Duración | Quiénes | Output |
|--------|-----------|---------|---------|--------|
| Product Review | Semanal | 60 min | Todo el equipo de producto | Decisiones de dirección desbloqueadas |
| Metrics Monday | Semanal | 30 min | PMs + data | ¿Vamos bien en nuestros KRs? |
| Discovery Sync | Quincenal | 45 min | PMs + UX + Data | Insights compartidos, evitar duplicar research |
| Roadmap Review | Mensual | 90 min | Producto + stakeholders | Alineación de expectativas |
| Product Strategy | Trimestral | Medio día | CPO + PMs seniors | Dirección del próximo trimestre |

### Cómo decir NO sin destruir relaciones con stakeholders:

**El framework del "Sí, pero no ahora":**
```
1. Reconoce la necesidad: "Entiendo por qué esto es importante para vosotros..."
2. Comparte el contexto: "Ahora mismo estamos focalizados en X porque [razón basada en datos]"
3. Dale un camino: "Para considerar esto en el próximo trimestre, necesitaría [evidencia o criterio]"
4. Cierra el loop: "Lo añado al backlog con esta justificación — te avisaré cuando lo evaluemos"
```

---

## PARTE 4: GESTIÓN DE STAKEHOLDERS EN GROWTH STAGE

### El mapa de stakeholders de producto en crecimiento:

| Stakeholder | Lo que quiere | Lo que necesitas de él | Cadencia de comunicación |
|-------------|--------------|----------------------|--------------------------|
| CEO/Founder | Velocidad y resultados | Prioridades estratégicas | Semanal |
| CTO | Sostenibilidad técnica | Capacidad y deuda técnica | Semanal |
| Ventas | Features para cerrar deals | Feedback de clientes real | Quincenal |
| CS/Support | Reducir tickets | Incidencias y pain points | Mensual |
| Marketing | Fechas comprometidas para lanzamientos | Previsión de lanzamientos | Mensual |
| Inversores | KPIs de crecimiento | Contexto de decisiones grandes | Trimestral |

---

## TAREA PARA CLAUDE

Con mi situación descrita:

1. **Diagnóstico de madurez del equipo:** Basándome en lo que me describes, ¿en qué nivel de madurez operativa está tu equipo de producto? ¿Cuáles son los 3 gaps más urgentes?

2. **Diseño de estructura de squads:** Propón la estructura de squads basada en outcomes para mi tamaño de empresa con responsabilidades y métricas de éxito de cada uno.

3. **Sistema de OKRs para el próximo trimestre:** Ayúdame a construir los OKRs del equipo de producto para los próximos 3 meses basándome en mis retos actuales.

4. **Calendario de rituales:** Diseña el calendario de rituales semanal/mensual/trimestral adaptado a mi equipo con los participantes y outputs esperados.

5. **Plan de onboarding de nuevos PMs:** ¿Qué debe saber y poder hacer un nuevo PM en mis primeras 4 semanas en el equipo para ser productivo sin depender del CPO?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Adaptar los procesos y la organización del equipo de producto para escalar sin perder velocidad ni calidad',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Síndrome del impostor en equipos: reconócelo y abórdalo como manager',
                'description'      => 'Identifica el síndrome del impostor en ti y en tu equipo, y aprende las intervenciones prácticas que un manager puede usar para reducir su impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo y psicólogo organizacional especializado en dinámicas de equipo y liderazgo. Quiero entender mejor el síndrome del impostor: cómo reconocerlo en mí mismo, cómo detectarlo en los miembros de mi equipo y qué intervenciones concretas puedo hacer como manager para reducir su impacto sin psicologizar las conversaciones de trabajo.

**Mi contexto:**
- Mi rol: [manager / team lead / director / fundador]
- Tamaño de mi equipo: [X personas]
- Perfil del equipo: [sector, nivel de experiencia, diversidad]
- ¿Has notado algo específico?: [comportamientos concretos que te preocupan o te has identificado en ti]

---

## QUÉ ES Y QUÉ NO ES EL SÍNDROME DEL IMPOSTOR

### Definición operativa (para managers, no para terapeutas)
El síndrome del impostor es el patrón cognitivo recurrente de creer que los propios logros son producto de la suerte, el engaño o el error ajeno, acompañado del miedo persistente a ser "descubierto" como fraude — a pesar de evidencia objetiva de competencia.

Pauline Clance (1978), quien lo describió por primera vez, identificó 6 manifestaciones:
1. El ciclo del impostor (evitación → éxito → alivio temporal → nuevo ciclo)
2. La necesidad de ser especial o el mejor
3. El super-individualismo ("debo hacerlo solo")
4. El temor al fracaso y a ser descubierto
5. La negación de la propia competencia
6. El temor y la culpa por el éxito

### Qué NO es síndrome del impostor:
- **Incompetencia real:** El impostor tiene evidencia de competencia que no reconoce.
- **Humildad saludable:** La humildad coexiste con reconocimiento propio; el impostor lo niega.
- **Baja confianza situacional:** Es normal dudar ante tareas nuevas.
- **Ansiedad generalizada:** Puede coexistir pero tienen tratamientos distintos.

---

## SEÑALES EN TI MISMO Y EN TU EQUIPO

### En ti (como manager/líder):

| Comportamiento | Manifestación típica | Impacto en el equipo |
|----------------|--------------------|--------------------|
| Over-preparation | Preparas cada reunión 3 veces más de lo necesario | No delegas porque "nadie lo hará igual" |
| Minimizar logros | "Fue suerte" / "El equipo lo hizo solo" | El equipo no recibe reconocimiento real |
| No pedir ayuda | Prefieres trabajar más horas que preguntar | Señal cultural de que pedir ayuda es debilidad |
| Procrastinar decisiones | Buscas más datos antes de decidir siempre | El equipo pierde velocidad |
| Reacción desproporcionada al error | Un error pequeño genera rumiación intensa | El equipo teme el error y no experimenta |

### En tu equipo — señales de alerta:

| Señal observable | Lo que puede significar | Intervención inicial |
|-----------------|------------------------|---------------------|
| "No sé si soy la persona adecuada para esto" ante algo que claramente sí puede hacer | Impostor activo | Reconocimiento específico de capacidad |
| Silencio en reuniones de personas técnicamente buenas | Miedo a ser juzgados | Cambiar el formato de la reunión |
| Sobre-justificación de cada decisión en emails | Necesidad de validación | 1:1 de revisión de autonomía |
| Rechaza oportunidades de visibilidad | Miedo al escrutinio | Crear exposición gradual y segura |
| Solo habla cuando está 100% seguro | Filtro muy alto de autoexigencia | Celebrar el thinking-out-loud |

---

## INTERVENCIONES CONCRETAS PARA MANAGERS

### Intervención 1: La Carpeta de Evidencias
Propón a tu equipo (y hazlo tú también) mantener un documento personal con:
- Feedbacks positivos recibidos (literales, no parafraseados)
- Proyectos completados con éxito y su impacto medible
- Habilidades adquiridas en los últimos 6 meses
- Momentos en los que tomaron la decisión correcta

**Cuándo usarla:** Antes de una evaluación de rendimiento, antes de pedir un aumento, antes de asumir un proyecto ambicioso.

### Intervención 2: El Feedback Específico (no el genérico)
El "buen trabajo" no combate el síndrome del impostor. El impostor lo descarta como educación.

**Formato de feedback que sí funciona:**
```
"[NOMBRE], en [SITUACIÓN CONCRETA] hiciste [ACCIÓN ESPECÍFICA].
El resultado fue [IMPACTO MEDIBLE]. Eso requiere [HABILIDAD CONCRETA]
que no todo el mundo tiene."
```

Ejemplo real vs. genérico:
- ❌ "¡Gran presentación esta mañana!"
- ✅ "María, cómo manejaste la pregunta difícil del cliente sobre los plazos fue excepcional. La convertiste en una conversación de confianza. Eso es inteligencia emocional avanzada."

### Intervención 3: Normalizar la Duda en Reuniones
Como manager, di en voz alta: "No sé la respuesta a esto, vamos a investigarlo" o "Tengo dudas sobre esta decisión, ¿qué piensan?"

Efecto: modelas que la incertidumbre es normal y que expresarla es una fortaleza.

### Intervención 4: La Conversación 1:1 de Calibración
No como una sesión de coaching forzado, sino como revisión regular:

**Preguntas que abren el tema sin dramatismo:**
- "¿Hay algún área en la que sientes que la organización no está reconociendo lo que aportas?"
- "¿Hay alguna oportunidad que hayas descartado porque creías que aún no estabas listo?"
- "¿Qué necesitarías para sentirte más seguro asumiendo más responsabilidad?"

### Intervención 5: Rediseñar el Proceso de Error
El síndrome del impostor se alimenta del miedo al error. Como manager:
- Celebra el error bien gestionado públicamente
- Diferencia error de negligencia en tu discurso
- Haz postmortems sin culpabilizar (Blameless Postmortem)

---

## CUÁNDO EL MANAGER NO ES SUFICIENTE

Señales de que la persona necesita apoyo profesional, no solo management:
- Ansiedad que interfiere con el funcionamiento diario
- Patrones que persisten a pesar de múltiples intervenciones
- La persona lo menciona explícitamente como algo que le causa sufrimiento

En ese caso: menciona el EAP (Employee Assistance Program) si la empresa lo tiene, normaliza el acceso a psicología sin hacerlo obligatorio.

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Autodiagnóstico:** A partir de los comportamientos que he descrito, ¿hay patrones de síndrome del impostor en mí como manager? ¿Cuáles son los más impactantes?

2. **Diagnóstico del equipo:** Basándome en lo que me describes sobre tu equipo, ¿a quién me recomendarías prestar más atención y por qué señales?

3. **Plan de intervención individual:** Para el caso más preocupante de mi equipo, dame un plan de 3 meses con acciones concretas en los 1:1 y en el día a día.

4. **Cambios al entorno del equipo:** ¿Qué 5 cambios en las dinámicas de equipo (rituales, formatos de reunión, procesos de feedback) reducirían la incidencia del síndrome del impostor de forma sistémica?

5. **Script para la conversación difícil:** Dame el guión para la conversación con alguien de mi equipo que está rechazando oportunidades por inseguridad, sin que la conversación suene a sesión de terapia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Identificar y reducir el impacto del síndrome del impostor en uno mismo y en los miembros del equipo como manager',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'M&A desde el vendedor: prepara la empresa y maximiza la valoración',
                'description'      => 'Prepara tu empresa para una adquisición, gestiona el proceso de due diligence desde el lado del vendedor y maximiza la valoración sin quemarte en el intento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de fusiones y adquisiciones (M&A) con experiencia representando a fundadores y empresas vendedoras en procesos de adquisición de €5M a €100M. Estoy considerando vender mi empresa total o parcialmente y necesito entender el proceso, cómo prepararme y cómo maximizar el resultado.

**Mi situación:**
- Tipo de empresa: [sector, modelo de negocio]
- Facturación aproximada: [€X]
- EBITDA o beneficio neto: [€X o X%]
- Motivo de la venta: [salida total / venta parcial / buscar socio estratégico / sucesión]
- Horizonte temporal: [quiero cerrar en X meses / aún estoy explorando]
- ¿Ya has hablado con algún comprador potencial?: [Sí / No]

---

## PARTE 1: PREPARACIÓN PRE-PROCESO (6-12 MESES ANTES)

### Por qué la preparación es el 80% del resultado
El precio al que vendes depende más de cómo presentas la empresa que de sus fundamentales. Un proceso bien preparado puede generar 20-40% de diferencia en la valoración final.

### Los 5 pilares de preparación:

#### Pilar 1: Normalización del EBITDA
Los compradores pagan múltiplos sobre el EBITDA ajustado (normalizado). Identifica y documenta los "add-backs" — gastos que no son operativos o que no repetirá el comprador:

| Tipo de add-back | Ejemplo | Justificación |
|------------------|---------|---------------|
| Salario del fundador por encima del mercado | Founder cobra €300k, mercado €120k → add-back €180k | El comprador tendrá un CEO con salario de mercado |
| Gastos personales pasados por la empresa | Coche, viajes mixtos | No repetibles |
| Gastos no recurrentes | Legal de un litigio ya cerrado | One-time |
| Amortización de activos ya pagados | Amortización de goodwill interno | Non-cash |

**Fórmula:**
```
EBITDA reportado
+ Add-backs documentados
= EBITDA normalizado (base de valoración)
```

#### Pilar 2: Limpiar la Dependencia del Fundador
El mayor descuento en valoración de PYMEs: "La empresa = el fundador".

**Señales de riesgo para el comprador:**
- El fundador tiene las relaciones con todos los clientes clave
- Solo el fundador sabe hacer X proceso crítico
- No existe equipo directivo con contrato y autonomía
- Clientes preguntan por el fundador por nombre

**Plan de acción:**
- Documenta los procesos críticos
- Transfiere relaciones con clientes al equipo comercial
- Da visibility y autonomía al número 2 con 12 meses de antelación

#### Pilar 3: Contratos de Clientes
Los compradores valoran la recurrencia. Convierte lo que puedas a contratos plurianuales o suscripciones antes del proceso.

**Métricas que aumentan la valoración:**
- NRR (Net Revenue Retention) > 100%
- Contratos de 2-3 años con cláusulas de renovación automática
- Diversificación: ningún cliente > 20% de ingresos
- Churn < 5% anual

#### Pilar 4: Documentación Financiera Auditada
Para ventas > €5M, el comprador esperará 3 años de cuentas auditadas o al menos revisadas por auditor independiente. Empieza a auditar 2-3 años antes si es posible.

#### Pilar 5: Propiedad Intelectual y Legal Limpio
- Marcas registradas y dominios a nombre de la empresa, no del fundador
- Código fuente con contratos de cesión de PI de todos los desarrolladores
- Sin litigios activos o documentados y provisionados
- Contratos de empleados con cláusulas de no competencia y confidencialidad

---

## PARTE 2: EL PROCESO DE VENTA

### Timeline típico de un proceso M&A:

```
Mes 1-2:   Preparación del Teaser y CIM (Confidential Information Memorandum)
Mes 2-3:   Contacto con compradores potenciales, NDAs
Mes 3-4:   Process Letters, Indicative Offers (IOIs)
Mes 4-5:   Acceso al Data Room, Management Presentations
Mes 5-6:   Ofertas vinculantes (LOIs), negociación
Mes 6-9:   Due Diligence exhaustiva
Mes 9-10:  SPA (Share Purchase Agreement), negociación legal
Mes 10-11: Cierre y cobro
```

### El Data Room: qué debe contener

| Categoría | Documentos |
|-----------|-----------|
| Financiero | P&L 3 años, balance, cash flow, proyecciones 3 años, desglose de ingresos por cliente |
| Legal | Estatutos, actas de consejo, contratos clave, litigios, propiedad intelectual |
| Comercial | Lista de clientes con antigüedad, ARR/MRR, contratos, pipeline |
| RRHH | Organigrama, contratos de empleados clave, salarios |
| Operaciones | Procesos documentados, proveedores clave, SLAs |
| Tecnología (si aplica) | Arquitectura, deuda técnica, documentación, accesos |

---

## PARTE 3: VALORACIÓN — CÓMO SE CALCULAN LOS MÚLTIPLOS

### Múltiplos de referencia por sector (España, 2024):

| Sector | Múltiplo EBITDA típico | Variable principal |
|--------|------------------------|-------------------|
| SaaS B2B | 5-12x | ARR growth rate y NRR |
| Servicios profesionales | 4-7x | Dependencia del founder y contratos |
| E-commerce | 3-6x | Margen y recurrencia |
| Manufactura | 3-5x | Activos y deuda |
| Distribución | 2-4x | Contratos exclusivos |

**Factores que aumentan el múltiplo:**
- Crecimiento > 20% YoY: +1-3x
- NRR > 110%: +1-2x
- Equipo directivo sin dependencia del fundador: +0.5-1x
- Contratos plurianuales con clients enterprise: +0.5-1x
- Propuesta única difícil de replicar (moat): +1-3x

---

## TAREA PARA CLAUDE

Con mi información:

1. **Valoración indicativa:** Basándome en mis datos financieros y sector, dame un rango de valoración probable y los factores que más moverían ese rango en uno u otro sentido.

2. **Plan de preparación personalizado:** ¿Cuáles son los 5 elementos más urgentes que debo trabajar en los próximos 6-12 meses para maximizar mi valoración?

3. **Lista de compradores potenciales:** Para mi sector y perfil, ¿qué tipo de compradores debo buscar? (estratégicos, financieros, competidores, internacionales) ¿Cuál de ellos pagaría más y por qué?

4. **Simulación de due diligence:** ¿Cuáles son las 10 preguntas más duras que me va a hacer el comprador en la due diligence? ¿Qué respondo y qué documentos preparo ya?

5. **Estructura de deal óptima:** Para mis objetivos (precio, continuidad del equipo, mi rol post-venta), ¿qué estructura de transacción me recomendarías? (100% cash / earnout / equity roll / management buy-in)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar y ejecutar el proceso de venta de una empresa maximizando la valoración desde el lado del vendedor',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Publicidad y marketing digital ilegal en España: sanciones y cómo evitarlas',
                'description'      => 'Identifica qué prácticas de marketing digital están prohibidas en España, cuáles son las sanciones de la CNMC y cómo diseñar campañas que cumplan la normativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la publicidad y marketing digital con experiencia en el mercado español y europeo. Tengo una empresa que hace publicidad online y quiero asegurarme de que mis campañas, comunicaciones y prácticas de marketing están dentro de la legalidad. Ayúdame a entender qué está prohibido y cómo evitar sanciones.

**Mi contexto:**
- Tipo de negocio: [B2C / B2B / marketplace]
- Canales de marketing principales: [email / redes sociales / SEM / influencers / afiliados]
- Productos o servicios que anuncio: [describe brevemente — importante para detectar sectores regulados]
- ¿Has recibido alguna queja o requerimiento regulatorio?: [Sí / No]

---

## MARCO NORMATIVO: LAS LEYES QUE REGULAN EL MARKETING DIGITAL EN ESPAÑA

### Ley General de Publicidad (LGP, Ley 34/1988)
La norma base. Prohíbe:
- **Publicidad engañosa:** Que induzca a error sobre características del producto
- **Publicidad desleal:** Que denigre a competidores, imite de forma confusionaria, o aproveche la reputación ajena
- **Publicidad subliminal:** Que actúe sin ser consciente el receptor
- **Publicidad ilícita en sectores:** Tabaco, alcohol (restricciones), medicamentos, productos financieros

### LSSI (Ley de Servicios de la Sociedad de la Información y el Comercio Electrónico)
Regula el **email marketing y comunicaciones comerciales electrónicas:**
- El envío de publicidad por email requiere **consentimiento previo y expreso** (opt-in)
- Excepción: clientes existentes para productos similares a los ya adquiridos
- Obligatorio: identificar claramente que es publicidad, identificar al remitente, ofrecer baja fácil
- Sanción por infracción grave: hasta **€150.000**

### RGPD + LOPDGDD para marketing
- La base legal para marketing directo es el **interés legítimo** o el **consentimiento**
- El consentimiento para marketing debe ser: libre, específico, informado e inequívoco
- Un consentimiento genérico ("acepto los términos") no vale para marketing
- Derecho de oposición al marketing directo es absoluto (no se puede denegar)

---

## LAS 10 PRÁCTICAS ILEGALES MÁS FRECUENTES

### 1. Publicidad engañosa en precios

**Ilegal:**
- Mostrar precio "tachado" que nunca fue el precio real
- "Precio sin descuento: €100" cuando el producto siempre se ha vendido a €60
- Descuentos calculados sobre PVP sugerido que nadie cobra

**Normativa aplicable:** LGP + Directiva Omnibus 2022 (exige transparencia en comparaciones de precio)

**Multa referencia:** La OCU y la CNMC han sancionado a grandes retailers con €200k-€1M por fake discounts.

### 2. Dark Patterns en consentimiento y suscripciones

**Ilegal:**
- Pre-marcado de casillas de suscripción a newsletter
- "Confirmar para desuscribirte" en lugar de un botón directo
- Letra pequeña con suscripciones de renovación automática no claramente indicadas
- Costes adicionales añadidos en checkout sin posibilidad de eliminarlos fácilmente

**Normativa:** LSSI + Directiva de Derechos de Consumidores + AI Act (dark patterns clasificados como práctica prohibida)

### 3. Publicidad encubierta con influencers

**Ilegal:** Un influencer publica sobre tu producto sin marcar el contenido como publicidad pagada.

**Obligatorio:** Usar etiquetas claras: #publicidad, #ad, #patrocinado, o el disclosure nativo de Instagram/TikTok/YouTube.

**Quién es responsable:** Tanto el influencer como la marca anunciante.

**Sanción:** La CNMC y el CAD (Consejo de Autorregulación de la Publicidad) han emitido resoluciones contra marcas por no controlar a sus influencers.

### 4. Email marketing sin consentimiento

**Ilegal:** Comprar bases de datos de emails y enviar newsletter sin consentimiento expreso.

**También ilegal:** Usar el email para marketing aunque tengas el contacto si no tiene consentimiento para comunicaciones comerciales.

**Sanción máxima:** €150.000 por la AEPD.

### 5. Testimonios y valoraciones falsas

**Ilegal:** Publicar testimonios inventados, pagar por reseñas positivas sin disclosure, filtrar reseñas negativas en plataformas propias.

**Normativa:** Directiva Omnibus (2022) prohíbe expresamente mostrar reseñas sin proceso de verificación. Las plataformas deben indicar si las reseñas son verificadas.

### 6. Publicidad en sectores específicos sin cumplir restricciones

| Sector | Restricción principal |
|--------|----------------------|
| Alcohol > 20% | Prohibida en TV entre 6:00-22:00, no puede ir dirigida a menores |
| Medicamentos | Solo pueden anunciarse al público los OTC, con aprobación de la AEMPS |
| Tabaco/vapeadores | Prohibición casi total en medios y espacios públicos |
| Juego online | Muy restringido — solo entre 1:00-5:00 en TV, prohibido patrocinar deportes |
| Crédito y préstamos | Obligatorio mostrar TAE, advertencia de riesgo |
| Criptoactivos | Publicidad regulada por CNMV desde 2022, disclaimers obligatorios |

---

## LOS ORGANISMOS QUE TE PUEDEN SANCIONAR

| Organismo | Competencia | Sanción máxima |
|-----------|-------------|----------------|
| CNMC | Competencia desleal, publicidad engañosa | Millones de euros |
| AEPD | Datos personales en marketing | €20M o 4% facturación global |
| CNMV | Publicidad de productos financieros | €150.000 - millones |
| Consumo autonómico | Engaño a consumidores | Según CCAA |
| CAD (autorregulación) | Publicidad | Resoluciones públicas, sin multa directa |

---

## TAREA PARA CLAUDE

Con mi tipo de negocio y canales:

1. **Auditoría de riesgos:** Para mis canales y tipo de producto, ¿cuáles son las 5 prácticas de marketing más comunes en mi sector que son ilegales o cuestionables en España?

2. **Checklist de cumplimiento:** Dame un checklist de los elementos obligatorios que debo verificar en cada campaña antes de lanzarla.

3. **Política de influencers:** Escribe la política de disclosure que debo incluir en todos mis contratos con influencers y creators.

4. **Revisión de mis emails de marketing:** Si me describes tu secuencia de emails actual, te digo qué elementos incumplen la LSSI y el RGPD y cómo corregirlos.

5. **Plan de compliance de marketing:** ¿Qué proceso debo implementar en mi equipo para que cada campaña pase un filtro legal antes de publicarse?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Auditar campañas de marketing digital para identificar prácticas ilegales y evitar sanciones regulatorias en España',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Recuperar churn involuntario: clientes que se van por fallos técnicos, no por insatisfacción',
                'description'      => 'Diseña el sistema para recuperar clientes perdidos por tarjeta expirada, fallos de pago o problemas técnicos con campañas de dunning y retención automatizadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en retención de clientes y revenue recovery con experiencia en SaaS y productos de suscripción. Tengo un producto de suscripción y estoy perdiendo clientes no por insatisfacción sino por razones técnicas: tarjetas expiradas, rechazos de cobro, fallos de integración o cuentas olvidadas. Necesito diseñar el sistema para recuperar este churn involuntario.

**Mi contexto:**
- Tipo de producto: [SaaS / app de suscripción / membership / e-commerce con suscripción]
- Plataforma de pagos: [Stripe / Braintree / Redsys / otro]
- Ciclo de facturación: [mensual / anual / mixto]
- Tasa de churn actual: [X%]
- ¿Tienes algún proceso de dunning?: [Sí, básico / No]
- Ticket medio: [€X]

---

## ENTENDIENDO EL CHURN INVOLUNTARIO

### Los 4 tipos de churn involuntario y su frecuencia:

| Tipo | Frecuencia típica | Recuperabilidad |
|------|------------------|----------------|
| Tarjeta expirada | 20-30% del churn total | Alta (85-95%) |
| Rechazo de cobro (fondos insuficientes) | 30-40% del churn total | Media (50-70%) |
| Tarjeta cancelada/robada | 15-20% del churn total | Alta (si el cliente sigue activo) |
| Cambio de banco o número | 10-15% del churn total | Alta |
| Error técnico o fallo de integración | 5-10% del churn total | Muy alta (casi siempre recuperable) |

### El coste real del churn involuntario
```
Si tienes 1.000 suscriptores a €30/mes:
- 5% churn total = 50 clientes/mes perdidos
- 40% de ese churn es involuntario = 20 clientes/mes
- CAC promedio = €150 → 20 clientes × €150 = €3.000/mes en adquisición desperdiciada
- LTV promedio = €360 → 20 clientes × €360 = €7.200/mes de valor no recuperado

→ Sistema de dunning efectivo puede recuperar 15 de esos 20 clientes
→ Valor recuperado: 15 × €360 = €5.400/mes
```

---

## EL SISTEMA DE DUNNING: ESTRUCTURA ÓPTIMA

### El dunning es la secuencia de comunicaciones automáticas que intentan recuperar un pago fallido.

### Fase 1: Smart Retry (Reintento Inteligente)
Antes de contactar al cliente, intenta cobrar de nuevo de forma inteligente.

**Estrategia de reintentos con Stripe:**
```
Día 0:  Pago falla → reintento inmediato (distinto horario)
Día 3:  Segundo reintento (lunes si falló el viernes)
Día 7:  Tercer reintento
Día 14: Cuarto reintento (si no se ha recuperado con comunicaciones)
```

**Smart Retry considera:**
- Hora del día con mejor tasa de éxito (generalmente por la mañana)
- Día de la semana (evitar fines de semana)
- Tipo de tarjeta (algunas tarjetas de débito fallan a fin de mes)

Resultado típico del Smart Retry solo: recupera 20-35% de los cobros fallidos sin contactar al cliente.

---

### Fase 2: Secuencia de Emails de Dunning

**Email 1 — Día 0 del fallo (tono: informativo, no alarmante):**
```
Asunto: Ha habido un problema con tu pago en [EMPRESA]

Hola [NOMBRE],

Hemos intentado procesar tu pago de [€X] para [NOMBRE DEL PLAN] y no ha podido
completarse.

Esto suele ocurrir por una tarjeta expirada o datos desactualizados. Tu cuenta
sigue activa — tienes [X] días para actualizar tu método de pago.

👉 Actualizar método de pago: [ENLACE DIRECTO]

Si crees que es un error, responde a este email y te ayudamos.

[NOMBRE EQUIPO]
```

**Email 2 — Día 3 (tono: urgente pero empático):**
```
Asunto: Recordatorio: actualiza tu pago para no perder el acceso

[NOMBRE], tu cuenta está en riesgo de cancelarse en [X] días.

Tu suscripción [NOMBRE DEL PLAN] lleva [TIEMPO] contigo.
Nos encantaría que no tuvieras que empezar de cero.

👉 Actualizar ahora (tarda 30 segundos): [ENLACE]

¿Necesitas cambiar de plan o tienes algún problema? Escríbenos aquí.
```

**Email 3 — Día 7 (tono: última oportunidad + ancla de pérdida):**
```
Asunto: Tu cuenta se cancela mañana — último aviso

[NOMBRE],

Mañana cancelaremos tu cuenta de [EMPRESA] porque no hemos podido procesar
ningún pago.

Perderás:
✗ Acceso a [FEATURE 1]
✗ Todos tus datos de [FEATURE 2]
✗ Tu historial de [FEATURE 3]

Si actualizas tu pago hoy, todo sigue igual como si nada hubiera pasado.

👉 Actualizar y mantener mi cuenta: [ENLACE]

Si has decidido cancelar, no hace falta que hagas nada.
```

**Email 4 — Post-cancelación Día 1 (win-back):**
```
Asunto: Tu cuenta ha sido cancelada — puedes reactivarla cuando quieras

[NOMBRE], hemos cancelado tu cuenta por falta de pago. Lamentamos que no hayas
podido actualizar tu método de pago a tiempo.

Si fue un despiste o las circunstancias han cambiado, puedes reactivar en cualquier
momento manteniendo todos tus datos durante [X] días.

👉 Reactivar mi cuenta: [ENLACE]

¿Hay algo que hayamos podido hacer mejor? Nos encantaría saberlo.
```

---

## MÉTRICAS DEL SISTEMA DE DUNNING

| Métrica | Benchmark | Cómo calcularla |
|---------|-----------|----------------|
| Recovery rate | 40-70% del churn involuntario | Clientes recuperados / churn involuntario total |
| Time to recovery | < 10 días | Días desde primer fallo hasta cobro exitoso |
| Dunning email open rate | > 40% | Abre email / enviados |
| Payment update rate por email | 15-30% | Actualizan pago / open email |
| Porcentaje recuperado por smart retry solo | 20-35% | Sin contactar al cliente |

---

## HERRAMIENTAS RECOMENDADAS

| Herramienta | Qué hace | Precio referencia |
|-------------|---------|------------------|
| Stripe Billing + Smart Retry | Reintentos inteligentes + dunning básico | Incluido en Stripe |
| Chargebee | Dunning avanzado, analytics de retención | Desde $299/mes |
| ProfitWell Retain | Dunning + win-back automatizado | % de churn recuperado |
| ChurnBuster | Especializado en dunning para SaaS | Desde $149/mes |
| Customer.io | Secuencias de email avanzadas con lógica | Desde $150/mes |

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Estimación de churn involuntario:** Basándome en mi tipo de producto y plataforma de pagos, ¿qué porcentaje de mi churn actual estimas que es involuntario y qué podría recuperar?

2. **Diseño del flujo de dunning:** Crea el flujo completo de dunning para mi caso con los tiempos, canales (email / SMS / in-app) y mensajes adaptados a mi producto.

3. **Configuración de Stripe/plataforma:** ¿Qué configuraciones concretas debo activar en mi plataforma de pagos para maximizar la tasa de recuperación?

4. **Segmentación de la campaña:** ¿Cómo debo diferenciar el tratamiento entre un cliente de alto valor (LTV > €500) y uno de bajo valor? ¿Y entre uno activo vs. uno que lleva meses sin entrar a la app?

5. **Dashboard de retención:** ¿Qué métricas debo monitorizar semanalmente para saber que mi sistema de dunning está funcionando? Dame las fórmulas y las fuentes de datos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Recuperar clientes de suscripción perdidos por fallos de pago técnicos con sistemas de dunning y retención automatizados',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Automatización administrativa para freelancers: elimina el trabajo que no facturas',
                'description'      => 'Configura flujos y herramientas para automatizar propuestas, seguimiento de pagos, recordatorios y onboarding de clientes para recuperar horas de trabajo real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad y automatización para freelancers con experiencia ayudando a profesionales independientes a recuperar 5-10 horas semanales eliminando trabajo administrativo que no genera ingresos. Necesito configurar un sistema de automatización para mi negocio freelance.

**Mi situación:**
- Especialidad: [tu servicio freelance]
- Clientes habituales: [tipo de empresa o persona]
- Número de proyectos simultáneos: [X]
- Herramientas que ya uso: [lista lo que tienes: email, facturación, gestión]
- Principal pérdida de tiempo administrativo: [propuestas / seguimiento de pagos / recordatorios / onboarding]
- Presupuesto para herramientas: [€0 / < €50/mes / < €100/mes]

---

## EL DIAGNÓSTICO: CUÁNTO TIEMPO PIERDES

### Inventario típico de trabajo no facturable para un freelance:

| Tarea administrativa | Tiempo medio/semana | ¿Automatizable? |
|---------------------|--------------------|--------------------|
| Responder a consultas iniciales | 2-3h | 80% automatizable |
| Elaborar y enviar propuestas | 3-5h | 60% automatizable |
| Seguimiento de propuestas sin respuesta | 1-2h | 95% automatizable |
| Enviar y hacer seguimiento de facturas | 1-2h | 90% automatizable |
| Recordar pagos pendientes | 0.5-1h | 100% automatizable |
| Onboarding de nuevos clientes | 1-3h | 70% automatizable |
| Reportes de avance del proyecto | 1-2h | 50% automatizable |
| Gestión de agenda y reuniones | 1-2h | 90% automatizable |
| **TOTAL** | **10-20h/semana** | **~75% recuperable** |

Si facturas a €60/h y trabajas 10h en admin, estás perdiendo €600/semana en tiempo no facturable.

---

## SISTEMA COMPLETO DE AUTOMATIZACIÓN POR ETAPAS

### ETAPA 1: PRIMER CONTACTO Y CALIFICACIÓN AUTOMÁTICA

#### Formulario de contacto inteligente
En lugar de recibir emails de "hola quiero saber precios", usa un formulario con preguntas de calificación:

**Preguntas mínimas del formulario:**
1. ¿Qué tipo de proyecto tienes en mente?
2. ¿Cuál es tu presupuesto aproximado?
3. ¿Para cuándo necesitas que esté listo?
4. ¿Cómo encontraste mi trabajo?

**Herramientas:**
- **Gratuito:** Tally.so, Google Forms
- **Freemium:** Typeform (bonito, lógica condicional)
- **Integrado:** Notion con bases de datos + Zapier

**Automación post-formulario:**
- Si el presupuesto es < €X: envío automático de email con precios y disponibilidad (no hay reunión)
- Si el presupuesto está en rango: email automático con calendario de reunión (Calendly)
- Si el presupuesto es > €X: notificación prioritaria + seguimiento personal en 2h

---

### ETAPA 2: PROPUESTAS EN MINUTOS, NO EN HORAS

#### Sistema de propuestas por plantilla
El error más común: crear cada propuesta desde cero. La solución: tener 3-5 plantillas para los tipos de proyecto más frecuentes.

**Estructura de plantilla de propuesta (Notion, Google Docs o Pandadoc):**
```
1. Resumen del proyecto (1 párrafo — personalizar)
2. ¿Qué incluye?: Lista de entregables (template base)
3. ¿Qué NO incluye?: Limita el scope (template base)
4. Proceso de trabajo: Tus fases (template fijo)
5. Inversión: Precio con opciones (template con precios)
6. Términos de pago: 50% inicio, 50% entrega (template fijo)
7. Próximos pasos: "Firma este documento y realiza el primer pago" (template fijo)
```

**Herramientas para propuestas con firma digital:**
| Herramienta | Gratuito | Firma digital | Propuesta bonita | Seguimiento |
|-------------|---------|--------------|-----------------|-------------|
| PandaDoc | Plan free limitado | ✅ | ✅ | ✅ |
| Docusign | No | ✅ | Básico | ✅ |
| HoneyBook | No (€X/mes) | ✅ | ✅ | ✅ |
| Bonsai | No (€X/mes) | ✅ | ✅ | ✅ |
| Notion + Tally | Gratuito | ❌ | Bueno | Manual |

---

### ETAPA 3: FACTURACIÓN Y COBROS AUTOMÁTICOS

#### El flujo de facturación sin fricción:

```
Propuesta aceptada → Factura de anticipo automática (50%)
→ Cliente paga → Onboarding automático del proyecto
→ Hito/entrega → Factura final automática (50%)
→ Si no paga en 7 días → Recordatorio automático 1
→ Si no paga en 14 días → Recordatorio automático 2 + escalación
```

**Herramientas de facturación para freelancers en España:**
| Herramienta | Precio | Fiscalidad España | Cobro online | Automatización |
|-------------|--------|------------------|-------------|----------------|
| Suma (Holded lite) | Gratuito | ✅ | ✅ básico | Básica |
| Factura Directa | Desde €9/mes | ✅ | ✅ | Media |
| Bonsai | Desde €17/mes | ❌ (para EEUU) | ✅ | Alta |
| Stripe + Invoices | % transacción | ✅ | ✅ | Alta con Zapier |
| Quaderno | Desde €49/mes | ✅ | ✅ | Alta |

**Template de recordatorio de pago automático:**
```
Asunto: Recordatorio de pago — Factura [NÚMERO] vence hoy

Hola [NOMBRE],

Te recuerdo que la factura [NÚMERO] por importe de [€X] vence hoy [FECHA].

Si ya realizaste el pago, por favor ignora este mensaje.
Si necesitas más tiempo o tienes alguna pregunta, escríbeme.

Puedes pagar directamente aquí: [ENLACE]

Gracias,
[TU NOMBRE]
```

---

### ETAPA 4: ONBOARDING DE CLIENTES AUTOMÁTICO

Cuando un cliente firma y paga el anticipo, en lugar de escribir emails manuales, activa un flujo automático:

**Secuencia de onboarding automatizado (días post-firma):**

**Día 0 — Email de bienvenida:**
- Acceso al espacio de proyecto compartido (Notion, Trello, ClickUp)
- Checklist de lo que necesitas del cliente para empezar
- Calendario con los hitos principales

**Día 1 — Kickoff automático:**
- Recordatorio de completar el formulario de brief
- Enlace a reunión de kickoff si no se ha agendado

**Día 7 — Primer check-in:**
- "¿Tienes todo lo que necesitas para que empecemos?" — automatizado pero con tu tono

**Herramientas de automatización de flujos:**
- **Zapier** (el más potente, desde gratuito con límites)
- **Make (Integromat)** (más visual, desde gratuito)
- **n8n** (open source, para perfiles técnicos)

---

## TAREA PARA CLAUDE

Con mi especialidad y herramientas actuales:

1. **Stack recomendado:** ¿Qué combinación de herramientas me recomiendas para mi presupuesto y tipo de trabajo? Justifica cada elección.

2. **Flujo de automatización completo:** Diseña el flujo completo desde que un prospecto me contacta hasta que el proyecto se entrega y se cobra, indicando qué es automático y qué requiere mi intervención.

3. **Templates listos para usar:** Escribe 3 templates de email que puedo implementar hoy: (a) respuesta automática a primer contacto, (b) recordatorio de pago, (c) email de bienvenida post-firma.

4. **Plantilla de propuesta:** Dame la estructura de mi plantilla base de propuesta adaptada a mi tipo de servicio, que pueda personalizar en 15 minutos.

5. **Plan de implementación de 2 semanas:** ¿En qué orden monto el sistema para no paralizar mi negocio mientras lo configuro? Dame las tareas día a día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar la gestión administrativa del negocio freelance para recuperar horas de trabajo y reducir el trabajo que no genera ingresos',
                'vote_score'       => 47,
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
