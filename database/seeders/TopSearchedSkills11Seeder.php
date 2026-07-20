<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills11Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de podcast para marca: de cero a 1.000 oyentes con contenido que posiciona',
                'description'       => 'Lanza y crece un podcast corporativo o personal que construye autoridad en tu sector. Con la estructura de episodios, la estrategia de invitados, la distribución en plataformas y las métricas que importan.',
                'prompt_content'    => <<<'PROMPT'
Eres un podcast strategist con experiencia en podcasts B2B y de marca personal que han superado los 10.000 oyentes en su primer año.

Mi contexto:
- Temática del podcast: [describe el nicho]
- Objetivo: [autoridad de marca / leads / comunidad / monetización]
- Formato preferido: [solo / entrevistas / panel / mixto]
- Frecuencia deseada: [semanal / quincenal / mensual]
- Recursos disponibles: [equipo / presupuesto de producción €X / solo yo]
- Referentes (podcasts que admiras): [lista]

## Estrategia de Podcast — [Nombre del podcast]

### 🎯 Posicionamiento y propuesta de valor

**El nicho específico:** no "business" sino "[sub-nicho concreto] para [audiencia específica]"

**La promesa del podcast en una frase:**
"Cada episodio, los oyentes aprenden [resultado específico] en [tiempo] sin [fricción que evitas]."

**Por qué alguien te seguirá a ti y no a los 300 podcasts similares:**
Tu perspectiva única, tu acceso a invitados o tu formato diferencial.

### 📐 Estructura del episodio (plantilla)

**Apertura (60 segundos):**
- Hook: la pregunta o dato que engancha antes de presentarte
- Credencial del invitado en 2 frases (no currículum, el logro más relevante para este episodio)

**Cuerpo (20-40 min):**
Arco narrativo del episodio con las 5-7 preguntas clave en orden:
1. [Contexto / quién es y qué hace]
2. [El problema que resolvieron o el aprendizaje principal]
3. [Cómo lo hicieron — los detalles que no se cuentan en LinkedIn]
4. [El error más caro que cometieron en el proceso]
5. [El consejo contraintuitivo para alguien que empieza]
6. [Qué están haciendo ahora / qué viene]
7. [Pregunta de cierre de tu firma — siempre la misma]

**Cierre (60 segundos):**
- Tu takeaway personal del episodio
- CTA específico (no "suscríbete" sino algo accionable)

### 🎙️ Los primeros 10 episodios (el backlog de lanzamiento)

| Episodio | Tema / Invitado | Ángulo diferencial | CTA del episodio |
|---------|----------------|-------------------|-----------------|
| 1 | [Episodio de presentación — solo tú] | Tu historia y por qué este podcast | Suscripción + comunidad |
| 2-10 | [Lista de invitados con su perfil] | ... | ... |

**Regla de lanzamiento:** publica 3 episodios el día del lanzamiento para que el oyente enganche de inmediato.

### 📢 Distribución y crecimiento

**Publicación en plataformas:**
- Spotify, Apple Podcasts, iVoox (España): cómo subir y optimizar el perfil
- RSS feed: Anchor / Buzzsprout / Transistor — cuándo pagar

**Estrategia de contenido derivado (1 episodio → 5 piezas):**
- Clip de 60 seg para LinkedIn / Instagram Reels / TikTok
- Hilo de Twitter/X con los 5 puntos clave
- Newsletter con el resumen del episodio + enlace
- Quote card para LinkedIn del mejor momento

**Cross-promotion:**
Cómo aparecer en otros podcasts para crecer la audiencia.

### 📊 Métricas que importan
- Descargas en las primeras 72h (señal de momentum)
- Retención de oyentes (cuántos terminan el episodio)
- Subscriptores nuevos por episodio
- Cuándo has llegado al punto de inflexión
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Podcast, content marketing, autoridad de marca',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Testing en React y Vue: unitarios, integración y e2e con Vitest y Playwright',
                'description'       => 'Implementa la estrategia de testing completa para tu frontend: qué testear con unitarios, qué con integración y qué con e2e. Con la configuración de Vitest y Playwright lista para usar y los patrones que hacen los tests mantenibles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Frontend Engineer especializado en testing de componentes y flujos de usuario en aplicaciones React y Vue con Vitest y Playwright.

Mi contexto:
- Framework: [React / Vue 3 / Next.js / Nuxt]
- Estado del testing actual: [sin tests / solo unitarios / pocos e2e]
- Herramienta de componentes: [Storybook / ninguna]
- CI donde correrán los tests: [GitHub Actions / GitLab CI / otra]
- Cobertura actual: [X% / desconocida]

## Estrategia de Testing Frontend — [Proyecto]

### 🏆 La pirámide de testing para frontend

**Por qué la pirámide clásica no aplica bien al frontend:**
Los tests de componentes e integración son el núcleo, no los unitarios puros.

**Tu pirámide recomendada:**
- 60% — Tests de componentes (Vitest + Testing Library)
- 30% — Tests de integración de flujo (Testing Library + MSW para mocks de API)
- 10% — Tests e2e (Playwright — solo los flujos críticos)

**Qué NO testear** (para no malgastar tiempo):
- Detalles de implementación interna
- Estilos CSS
- Librerías de terceros

### ⚙️ Configuración de Vitest

```javascript
// vitest.config.ts
import { defineConfig } from 'vitest/config'
import vue from '@vitejs/plugin-vue' // o react si usas React

export default defineConfig({
  plugins: [vue()],
  test: {
    environment: 'jsdom',
    globals: true,
    setupFiles: ['./src/test/setup.ts'],
    coverage: {
      reporter: ['text', 'json', 'html'],
      exclude: ['node_modules/', 'src/test/'],
      thresholds: {
        global: { branches: 70, functions: 70, lines: 70 }
      }
    }
  }
})
```

```typescript
// src/test/setup.ts
import '@testing-library/jest-dom'
import { server } from './mocks/server' // MSW

beforeAll(() => server.listen())
afterEach(() => server.resetHandlers())
afterAll(() => server.close())
```

### 🧪 Patrones de test por tipo

**Test de componente (lo más común):**
```typescript
// UserCard.test.tsx / UserCard.test.ts
import { render, screen } from '@testing-library/react' // o @testing-library/vue
import userEvent from '@testing-library/user-event'
import { UserCard } from './UserCard'

describe('UserCard', () => {
  it('muestra el nombre y email del usuario', () => {
    render(<UserCard name="Ana García" email="ana@test.com" />)
    expect(screen.getByText('Ana García')).toBeInTheDocument()
    expect(screen.getByText('ana@test.com')).toBeInTheDocument()
  })

  it('llama a onEdit cuando el usuario hace clic en Editar', async () => {
    const onEdit = vi.fn()
    render(<UserCard name="Ana" email="ana@test.com" onEdit={onEdit} />)
    await userEvent.click(screen.getByRole('button', { name: /editar/i }))
    expect(onEdit).toHaveBeenCalledOnce()
  })
})
```

**Test de flujo con MSW (mocks de API):**
```typescript
// Mockear la API sin tocar el servidor real
import { http, HttpResponse } from 'msw'
import { setupServer } from 'msw/node'

const server = setupServer(
  http.get('/api/users', () => HttpResponse.json([{ id: 1, name: 'Ana' }]))
)
```

### 🎭 Playwright para e2e (solo lo crítico)

```typescript
// tests/e2e/checkout.spec.ts
import { test, expect } from '@playwright/test'

test('el usuario completa el checkout correctamente', async ({ page }) => {
  await page.goto('/products')
  await page.getByRole('button', { name: 'Añadir al carrito' }).first().click()
  await page.goto('/cart')
  await expect(page.getByText('1 producto')).toBeVisible()
  await page.getByRole('button', { name: 'Pagar' }).click()
  await expect(page).toHaveURL('/checkout')
})
```

**playwright.config.ts:**
```typescript
export default defineConfig({
  testDir: './tests/e2e',
  use: { baseURL: 'http://localhost:3000', trace: 'on-first-retry' },
  projects: [
    { name: 'chromium', use: { ...devices['Desktop Chrome'] } },
    { name: 'Mobile Safari', use: { ...devices['iPhone 14'] } }
  ]
})
```

### 📊 Integración en CI (GitHub Actions)
Workflow completo para correr Vitest + Playwright en paralelo en cada PR.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Testing frontend, Vitest, Playwright, React, Vue',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prototipado rápido en Figma: del brief al prototipo testeable en 4 horas',
                'description'       => 'Crea prototipos de alta fidelidad en Figma en tiempo récord usando componentes reutilizables, auto-layout y variables. Con el flujo de trabajo para ir del wireframe al prototipo interactivo sin perder tiempo en detalles prematuros.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer con experiencia en design sprints y prototipado rápido para startups y equipos ágiles.

Mi contexto:
- Tipo de producto a prototipar: [app móvil / web app / landing page / dashboard / otro]
- Tiempo disponible: [4 horas / 1 día / sprint de 5 días]
- Objetivo del prototipo: [validación de concepto / test de usabilidad / presentación a inversores / handoff a desarrollo]
- Familiaridad con Figma: [básica / intermedia / avanzada]
- ¿Existe un design system previo? [sí / no / parcial]

## Guía de Prototipado Rápido en Figma — [Producto]

### ⚡ Los primeros 30 minutos: claridad antes de abrir Figma

**Antes de tocar Figma, responde estas 3 preguntas:**
1. ¿Cuál es el flujo principal que debes prototipar? (máximo 5-7 pantallas)
2. ¿Qué decisión se va a tomar con este prototipo?
3. ¿Qué nivel de fidelidad necesitas? (sketchy → wireframe → visual completo)

**El error más caro en prototipado:** trabajar en el detalle visual antes de validar la estructura.

### 🗂️ Setup del archivo Figma (15 min)

**Estructura de páginas:**
```
📄 _Briefing (referencia — no tocar)
📄 Wireframes (estructura, sin color)
📄 Prototipo (el que se entrega)
📄 Assets (componentes temporales)
```

**Configuración inicial:**
- Frame size: [iPhone 14 (390×844) / MacBook (1440×900) / tu caso]
- Grid: 8px base grid + columnas del sistema
- Paleta mínima: 2 grises para wireframe + 1 color de acción

### 🏗️ Construcción del wireframe (60-90 min)

**Método de prototipado rápido — de afuera hacia adentro:**

1. **Layout primero:** Dibuja el esqueleto de cada pantalla sin contenido real
   - Usa rectángulos grises para imágenes
   - Usa texto Lorem Ipsum para contenido de relleno
   - Foco en la jerarquía de información y los puntos de acción

2. **Navegación después:** Conecta las pantallas con flechas para verificar el flujo
   - ¿El usuario puede llegar a donde necesita ir?
   - ¿Hay pantallas huérfanas?

3. **Contenido real al final:** Reemplaza los placeholders con contenido representativo

### 🎨 De wireframe a prototipo visual (60-90 min)

**El truco del multiplicador x2:**
Crea componentes para todo lo que aparece más de una vez. El tiempo de creación se amortiza en la tercera pantalla.

**Componentes mínimos para cualquier app:**
- Button (primary / secondary / ghost)
- Input field (default / focus / error)
- Card (con sus variantes)
- Navigation bar / Tab bar

**Auto-layout:** la habilidad que más tiempo ahorra en Figma
```
Selecciona elementos → Shift+A → ajusta padding, gap y dirección
Resultado: componentes que se adaptan automáticamente al contenido
```

### 🔗 Conectar el prototipo (20 min)

**Connections básicas:**
- Tap en botón → siguiente pantalla (Smart Animate para transiciones fluidas)
- Swipe / scroll: configura overflow en el frame
- Hover states: Use Variant Interactions

**Cómo simular estados complejos sin sobre-complicarlo:**
Variables de Figma para toggles, menús y estados de formulario.

### 🎯 Entrega y presentación
Cómo compartir el prototipo, qué mostrar primero y cómo guiar al observador durante un test de usabilidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Figma, prototipado, design sprint, UX',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta consultiva con SPIN Selling: las preguntas que hacen que el cliente se venda solo',
                'description'       => 'Aplica la metodología SPIN Selling (Situación, Problema, Implicación, Need-Payoff) a tu proceso de ventas. Con el banco de preguntas por tipo, los errores más comunes y cómo adaptar el método a ventas complejas de alto ticket.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Coach especializado en ventas consultivas B2B con ciclos de venta de 30 a 180 días y tickets superiores a 10.000€.

Mi contexto:
- Producto / servicio que vendo: [describe]
- Ticket medio: [€]
- Ciclo de venta: [X semanas/meses]
- Principal perfil del comprador: [cargo, sector, tamaño empresa]
- Mayor obstáculo en el proceso: [el cliente no percibe urgencia / habla con muchos competidores / el precio es la objeción / no llego al decisor real]

## SPIN Selling Aplicado — [Tu contexto de ventas]

### 🧠 Por qué SPIN funciona en ventas complejas

En ventas de alto ticket, el cliente no compra porque tú le hagas una gran presentación. Compra cuando:
1. Reconoce que tiene un problema significativo
2. Entiende las consecuencias de no resolverlo
3. Percibe que tu solución es la que mejor lo resuelve

SPIN es la metodología para guiar al cliente por ese camino haciendo preguntas, no argumentando.

### ❓ El banco de preguntas SPIN para tu producto

**S — Preguntas de SITUACIÓN (máximo 3-4)**
Objetivo: entender el contexto sin aburrir. El vendedor aprende, no el cliente.

Ejemplos adaptados a tu caso:
- "¿Cómo gestionáis actualmente [proceso relacionado con tu solución]?"
- "¿Qué herramientas usáis para [tarea que tu producto mejora]?"
- "¿Cuántas personas están implicadas en [proceso]?"

**P — Preguntas de PROBLEMA**
Objetivo: hacer que el cliente articule sus dificultades. El que lo dice, lo cree.

- "¿Cuánto tiempo dedicáis a [tarea ineficiente] cada semana?"
- "¿Qué pasa cuando [el proceso falla]?"
- "¿Con qué frecuencia os encontráis con [fricción específica]?"

**I — Preguntas de IMPLICACIÓN (las más poderosas)**
Objetivo: ampliar el problema hasta que el cliente sienta la urgencia.

- "Si [el problema] continúa, ¿cómo afecta a [objetivo de negocio]?"
- "¿Qué impacto tiene [problema] en la relación con vuestros clientes?"
- "Cuando ocurre [problema], ¿cuánto tiempo/dinero perdéis aproximadamente?"

**N — Preguntas de NEED-PAYOFF**
Objetivo: el cliente describe los beneficios de tu solución con sus propias palabras.

- "Si pudiérais [resolver el problema], ¿qué cambiaría en el equipo?"
- "¿En qué áreas os ayudaría más poder [beneficio de tu solución]?"
- "¿Cuánto valoraríais poder [resultado que tu producto genera]?"

### 🎯 Flujo de una discovery call con SPIN (60 min)

| Fase | Duración | Tipo de preguntas | Objetivo |
|------|---------|------------------|---------|
| Contexto | 10 min | S | Entender la situación |
| Exploración | 20 min | P | Descubrir problemas |
| Profundización | 15 min | I | Amplificar el dolor |
| Visión | 10 min | N | El cliente describe la solución |
| Transición | 5 min | — | Presentar el siguiente paso |

### 🚫 Los 5 errores de SPIN que neutralizan el método
Y cómo corregirlos en tiempo real durante la call.

### 📝 Template de notas post-call
Cómo documentar los hallazgos de SPIN para personalizar la propuesta y el seguimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Venta consultiva, SPIN Selling, discovery, ventas B2B',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap de producto: comunícalo a stakeholders sin comprometerte en fechas que no puedes cumplir',
                'description'       => 'Diseña el roadmap de producto que alinea al equipo, tranquiliza a ventas y no te ata a plazos imposibles. Con los formatos según la audiencia, el proceso de priorización y cómo mantenerlo vivo sin convertirlo en un Gantt.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Product con experiencia gestionando roadmaps en empresas de 20 a 500 personas donde cada área quiere algo diferente del producto.

Mi contexto:
- Tamaño del equipo de producto: [N PMs, N devs, N designers]
- Horizonte del roadmap: [trimestral / semestral / anual]
- Stakeholders principales: [CEO / Ventas / CS / Inversores / otro]
- Problema actual con el roadmap: [nadie lo mira / ventas lo usa para prometer / el equipo no se fía / se queda obsoleto en semanas]
- Metodología: [Shape Up / Scrum / Kanban / otra]

## Framework de Roadmap — [Empresa/Producto]

### 🗺️ Por qué la mayoría de roadmaps fallan

Los roadmaps fallan cuando mezclan tres cosas que deben estar separadas:
1. **Visión** (a dónde vamos — 12-24 meses)
2. **Estrategia** (cómo llegamos — 6-12 meses)
3. **Ejecución** (qué hacemos esta semana — sprint actual)

Un solo documento no puede servir para todo esto. Necesitas capas.

### 📐 El roadmap en 3 capas

**Capa 1 — Now / Next / Later (para el equipo y CEO)**

| Now (este trimestre) | Next (próximo trimestre) | Later (6+ meses) |
|---------------------|------------------------|-----------------|
| Feature A — en desarrollo | Feature B — en discovery | Idea X — sin commitment |
| Bug crítico — alta prioridad | Integración Y — en diseño | Plataforma Z — visión |

Reglas del Now/Next/Later:
- "Now" tiene commitment de entrega
- "Next" puede cambiar si hay nueva información
- "Later" es intención, no promesa

**Capa 2 — Objetivos trimestrales (para stakeholders de negocio)**
No hablas de features. Hablas de resultados:
- "Q3: Reducir el churn de nuevos usuarios de X% a Y%"
- "Q3: Habilitar integraciones que desbloquean el segmento enterprise"

**Capa 3 — Sprint backlog (solo para el equipo de desarrollo)**
El Jira / Linear interno. Nadie de fuera lo ve.

### 🎤 Cómo comunicar el roadmap a cada audiencia

**Al CEO/Founders:**
Necesitan: dirección estratégica + predictibilidad
Formato: presentación de 5 slides trimestral + email semanal de una página
Lo que nunca debes hacer: comprometerte en fechas sin buffer

**A Ventas:**
Necesitan: saber qué pueden prometer a clientes y cuándo
Formato: vista "Coming Soon" con trimestres (sin semanas ni días)
Lo que nunca debes hacer: dejarles acceso al backlog completo

**A Inversores:**
Necesitan: confianza en que sabes a dónde vas
Formato: narrativa de visión + hitos alcanzados + próximos bets

### 🔄 Ritual de mantenimiento del roadmap
Cómo actualizarlo sin que te consuma: la reunión mensual de 45 minutos que mantiene el roadmap vivo.

### ⚖️ El proceso de priorización que justifica tus decisiones
Cómo usar RICE o ICE para que "no" a una feature suene a "lo hemos evaluado y hay cosas más importantes".
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Product roadmap, comunicación con stakeholders, priorización',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Proceso de selección para perfiles tech: sourcing, entrevistas y oferta en 3 semanas',
                'description'       => 'Diseña el proceso de selección de perfiles técnicos (developers, data, DevOps) que atrae candidatos cualificados, evalúa con rigor en poco tiempo y cierra con una oferta que aceptan. Sin agencias de por medio si no quieres.',
                'prompt_content'    => <<<'PROMPT'
Eres un Technical Recruiter con 8 años de experiencia contratando developers, data engineers y DevOps en startups y scale-ups en España.

Contexto de la posición:
- Rol a cubrir: [título exacto]
- Stack técnico requerido: [lista de tecnologías]
- Nivel de experiencia: [junior / mid / senior / lead]
- Salario presupuestado: [rango €]
- Modalidad: [remoto / híbrido / presencial — ciudad]
- Urgencia: [para cuándo lo necesitas]
- ¿Hay equipo técnico disponible para entrevistar? [sí/no]

## Proceso de Selección — [Rol]

### 🎯 Perfil ideal (antes de publicar nada)

**Habilidades imprescindibles (dealbreakers):**
[Las 3-5 que si no tiene, no avanza]

**Habilidades deseables (nice to have):**
[Las que suman pero no filtran]

**Lo que realmente importa en el día a día del puesto:**
[No el currículum perfecto — las competencias que hacen a alguien exitoso en este rol]

**Red flags a detectar en el proceso:**
[Señales de que no encajará técnica o culturalmente]

### 📢 Sourcing (encontrar candidatos sin esperar que lleguen solos)

**LinkedIn Recruiter / búsqueda boolean:**
```
("[stack principal]" OR "[variante]") AND ("[nivel]" OR "senior" OR "lead")
AND ("España" OR "Remote" OR "[ciudad]")
```

**GitHub / Stack Overflow (para perfiles técnicos):**
Cómo buscar candidatos por contribuciones y tecnologías en GitHub.

**Comunidades tech en España:**
- Slack: [MadridJS / VueJS España / LaravelES / etc. según el stack]
- Meetups: [nombre de comunidades relevantes para este perfil]
- Newsletters de developers: cómo anunciarte aquí

**Job boards que funcionan para tech en España:**
- InfoJobs: bajo signal-to-noise en tech salvo senior
- LinkedIn Jobs: el más efectivo para mid/senior
- Manfred / Domestika Jobs / Remote First: para perfiles más exigentes

### 📋 El proceso en 3 semanas

**Semana 1 — Screening:**
- Día 1-3: Publicación + sourcing activo + primeras candidaturas
- Día 4-5: Revisión de CVs (criterios de filtro rápido de 2 min por CV)
- Día 5-7: Calls de screening de 20 min (cultural fit + expectativas básicas)

**Semana 2 — Entrevistas técnicas:**
- Entrevista técnica 1 (60 min): Live coding o revisión de proyecto propio
  - Qué evaluar: [problema representativo del día a día, no acertijos de Google]
  - Cómo estructurarla: [problema → solución → discusión de alternativas]
- Entrevista técnica 2 (45 min): System design o revisión de arquitectura (solo para senior+)

**Semana 3 — Decisión y oferta:**
- Entrevista cultural / con el equipo (30 min)
- Debrief del equipo entrevistador: scorecard + decisión en 24h
- Oferta verbal → oferta escrita en 48h → carta de oferta firmada

### 💬 Cómo hacer la oferta que cierra
El momento de la oferta y qué incluir más allá del salario para que digan sí.

### 📊 Métricas del proceso de selección
Time-to-hire, offer acceptance rate y cost-per-hire — cómo calcularlos y qué mejorar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Reclutamiento tech, selección de perfiles técnicos, sourcing',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelo financiero para startups SaaS: las métricas que miran los inversores de Series A',
                'description'       => 'Construye el modelo financiero que convence a inversores de Series A. Con las métricas SaaS imprescindibles (MRR, Churn, LTV/CAC, NRR), el modelo de crecimiento y las proyecciones a 3 años que resisten el escrutinio.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO de startups con experiencia ayudando a empresas SaaS a cerrar rondas de Series A de 2M a 15M€ en Europa.

Estado actual de mi startup:
- MRR actual: [€]
- Número de clientes: [N]
- ARR medio por cliente: [€]
- Churn mensual: [X%]
- CAC (coste de adquisición de cliente): [€]
- LTV actual calculado: [€ / o "desconocido"]
- Meses de runway: [N]
- Uso de fondos planificado: [equipo / marketing / producto / ops]

## Modelo Financiero SaaS — [Startup]

### 📊 Las métricas que los inversores de Serie A examinan primero

**1. MRR y su descomposición (el pulso mensual)**

| Componente del MRR | Cómo calcularlo | Benchmark saludable |
|-------------------|----------------|---------------------|
| New MRR | Clientes nuevos × ARR medio / 12 | Crecimiento >15% MoM en early stage |
| Expansion MRR | Upgrades + upsell de clientes actuales | >20% del New MRR = señal de product-market fit |
| Churned MRR | Clientes perdidos × su ARR / 12 | <2% MoM (gross churn) |
| Net New MRR | New + Expansion - Churned | Positivo = crecimiento sano |

**2. Churn — el metric que más preguntas genera**

Gross Revenue Churn: `MRR perdido por bajas / MRR al inicio del período`
Net Revenue Retention (NRR): `(MRR inicio + Expansion - Churn) / MRR inicio`
- NRR > 100%: los clientes actuales crecen solos (el sueño)
- NRR 90-100%: aceptable en early stage
- NRR < 90%: problema que necesita resolverse antes de escalar

**3. Unit Economics (LTV / CAC)**

```
LTV = ARPU × Gross Margin % / Churn Rate
CAC = Total gasto en Ventas+Marketing / Nuevos clientes en el período
LTV/CAC ratio objetivo: >3x en SaaS B2B
CAC Payback Period = CAC / (ARPU × Gross Margin %) → objetivo: <18 meses
```

Con tus datos actuales:
- LTV: [cálculo con tus números]
- CAC Payback: [cálculo con tus números]
- Diagnóstico: [qué significa y qué mejorar]

### 📈 Proyecciones a 3 años (el modelo que quieren ver)

**Estructura del modelo:**

**Hoja 1 — Assumptions (los inputs):**
- Tasa de crecimiento de nuevos clientes por mes: [X%]
- Churn mensual objetivo: [X%]
- ARPU objetivo (con expansión): [€]
- Headcount plan: cuándo contratar cada rol y a qué sueldo
- CAC y tendencia (baja a medida que escala)

**Hoja 2 — P&L proyectado:**
| | Año 1 | Año 2 | Año 3 |
|-|-------|-------|-------|
| ARR fin de año | €X | €X | €X |
| Gross Margin | X% | X% | X% |
| Burn mensual | €X | €X | €X |
| Runway (con ronda) | X meses | — | — |

**Hoja 3 — Cohort analysis:**
Retención de MRR por cohorte mensual — la visualización que más convence.

### 💰 Qué narrativa construir alrededor del modelo
Los 3 slides de financials que van en el deck de inversores y cómo presentarlos.

### ❓ Las 10 preguntas que un inversor de Serie A hará sobre el modelo
Y las respuestas que demuestran que entiendes tu negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'SaaS metrics, modelo financiero, fundraising Serie A',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual para startups: qué registrar, cuándo y cómo protegerlo en España y la UE',
                'description'       => 'Protege los activos intelectuales de tu startup antes de que sea demasiado tarde. Con la guía de marcas, patentes, secretos comerciales y copyright — qué necesitas tú, qué espera, y cómo hacerlo sin gastar el budget de runway.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en propiedad intelectual e industrial para startups y empresas tecnológicas en España y la Unión Europea.

Contexto de mi startup:
- Tipo de negocio: [SaaS / app / marketplace / hardware / biotech / otro]
- En qué mercados opero o pienso operar: [España / UE / EEUU / global]
- Nombre de la empresa y del producto: [nombre]
- Activos que necesito proteger: [nombre/marca / algoritmo / diseño de producto / código / contenido / base de datos / otro]
- Presupuesto disponible para PI: [€ o "mínimo"]
- ¿Hay inversores o M&A en el horizonte? [sí/no]

## Estrategia de Propiedad Intelectual — [Startup]

### 🗂️ Inventario de tus activos de PI

**Lo que probablemente tienes y no sabes que proteger:**
1. **Nombre y logo:** marca registrada → protege tu identidad comercial
2. **Código fuente:** copyright automático, pero los contratos con devs externos deben ceder los derechos
3. **Base de datos:** protección sui generis en la UE si hay inversión sustancial
4. **Algoritmo / método:** potencialmente patentable si es técnico y nuevo
5. **Secretos comerciales:** cliente lists, pricing models, know-how interno

### 🔷 Marcas comerciales (la PI más urgente para cualquier startup)

**Por qué registrar la marca ANTES de crecer:**
- Si alguien registra tu nombre en la OEPM primero, puedes perder el nombre aunque lo uses antes
- El coste de cambiar el nombre de una startup en Serie B es 10-100x mayor que registrar la marca hoy

**¿Dónde registrar?**
| Territorio | Organismo | Coste aprox. | Plazo |
|-----------|----------|-------------|-------|
| España | OEPM | €145-200 / clase | 6-12 meses |
| UE (27 países) | EUIPO | €850 primera clase + €50/clase adicional | 4-6 meses |
| EEUU | USPTO | $250-350 por clase (TEAS Plus) | 12-18 meses |
| Internacional | WIPO (Madrid) | Sistema centralizado para múltiples países | Variable |

**Clases de Niza relevantes para startups tech:**
- Clase 9: software, aplicaciones
- Clase 35: servicios de negocio, CRM, publicidad online
- Clase 42: servicios tecnológicos, SaaS, consultoría IT

**Paso previo obligatorio:** Búsqueda de anterioridades en [euipo.europa.eu] y [oepm.es] antes de invertir en la solicitud.

### 💡 Patentes (cuándo y cuándo no)

**Cuándo tiene sentido patentar:**
- Tienes una innovación técnica genuina y verificable
- Tu ventaja competitiva es el cómo técnico, no solo el qué
- Tienes inversores o piensas hacer M&A (las patentes son activos en due diligence)

**La realidad de las patentes para startups:**
- Coste: €3.000-10.000 hasta la concesión española / €15.000-50.000 PCT europeo
- Tiempo: 2-4 años hasta la concesión
- Problema: el código software puro NO es patentable en Europa (sí en EEUU con matices)
- Alternativa: el secreto comercial es gratis y no caduca

**Qué es patentable en software en Europa:**
Métodos técnicos con efecto técnico (no "lo de siempre pero en internet").

### 🔐 Secretos comerciales (la PI más subestimada)

**Qué protegen y cómo:**
Cualquier información empresarial que tenga valor por ser secreta y que tomes medidas para proteger.

**Medidas obligatorias para que sea un secreto comercial protegible:**
- NDA firmados con empleados, proveedores y socios
- Acceso restringido en sistemas (logs de quién accede a qué)
- Marca como "Confidencial" los documentos sensibles

### 📋 Checklist de PI para el primer año de una startup
Las 10 acciones de PI que debes hacer antes de hablar con inversores.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Propiedad intelectual, marcas, patentes, startups legales',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de incidencias críticas (P0/P1): protocolo de respuesta y comunicación en crisis',
                'description'       => 'Gestiona los momentos más estresantes de un equipo de soporte: la caída de producción, el bug que afecta a todos los clientes. Con el protocolo de escalada, la comunicación interna y externa, y el post-mortem que previene la repetición.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Support e Incident Manager con experiencia gestionando incidencias P0 en SaaS con 10.000+ clientes activos.

Contexto:
- Tipo de incidencia típica: [caída total / funcionalidad rota / pérdida de datos / lentitud extrema / brecha de seguridad]
- Canales de comunicación con clientes: [email / status page / in-app / Twitter / todos]
- Herramienta de gestión de incidencias: [PagerDuty / OpsGenie / Slack / otra]
- Tamaño del equipo de soporte: [N personas]
- SLA comprometido: [tiempo de respuesta / tiempo de resolución]

## Protocolo de Gestión de Incidencias Críticas — [Empresa]

### 🚨 Clasificación de severidad

| Nivel | Descripción | Tiempo máximo de respuesta | Quién se alerta |
|-------|------------|---------------------------|----------------|
| P0 — Crítico | Servicio caído para todos los clientes / pérdida de datos | 15 min | CEO, CTO, Head of Support, equipo de guardia |
| P1 — Alta | Funcionalidad crítica rota para +50% de usuarios | 30 min | CTO, Head of Support, equipo técnico |
| P2 — Media | Funcionalidad no crítica rota o degradada | 2 horas | Equipo técnico |
| P3 — Baja | Bug menor, afecta a pocos usuarios | 24 horas | Equipo de soporte |

### ⏱️ Los primeros 15 minutos de una P0

**Minuto 0-5 — Declaración y alerta:**
- [ ] Confirmar que el problema es real (no un falso positivo)
- [ ] Declarar la incidencia en [canal de Slack #incidents]
- [ ] Alertar al Incident Commander (quien lidera la respuesta)
- [ ] Abrir el canal de crisis: #inc-[fecha]-[descripción-corta]

**Minuto 5-10 — Evaluación de impacto:**
- [ ] ¿Cuántos clientes están afectados? (número y % del total)
- [ ] ¿Qué funcionalidad específica está rota?
- [ ] ¿Desde cuándo? (revisar logs y alertas)
- [ ] ¿Hay pérdida de datos? (el peor escenario)

**Minuto 10-15 — Primera comunicación externa:**
- [ ] Actualizar status page (si la tienes)
- [ ] Primera comunicación por email / in-app (ver template abajo)

### 📢 Templates de comunicación externa

**Primera comunicación (cuando el problema se confirma — dentro de los 15 min):**
```
Asunto: [Empresa] — Estamos investigando un problema con [funcionalidad]

Hemos detectado un problema que está afectando a [descripción general sin detalles técnicos].
Nuestro equipo técnico ya está trabajando en la resolución.

Estado actual: Investigando
Próxima actualización: En [30 min]

Pedimos disculpas por los inconvenientes causados.
```

**Actualización de progreso (cada 30-60 min mientras dure):**
```
Asunto: Actualización — [Empresa] — [descripción breve]

Actualización a las [hora]:
- Estado: [Investigando / Identificado / En resolución]
- Causa identificada: [si ya se sabe, en lenguaje no técnico]
- Impacto actual: [qué funciona / qué no funciona]
- ETA estimada: [si se puede comprometer]

Próxima actualización: En [tiempo]
```

**Comunicación de resolución:**
```
Asunto: RESUELTO — [Empresa] — [descripción breve]

El problema ha sido resuelto a las [hora].

Resumen:
- Duración del problema: [X horas X minutos]
- Usuarios afectados: [N o X%]
- Causa: [explicación en lenguaje de negocio]
- Solución aplicada: [qué se hizo]
- Medidas preventivas: [qué haremos para que no vuelva a pasar]

Lamentamos el impacto causado. Si tienes preguntas, responde a este email.
```

### 🔄 Roles durante la incidencia

**Incident Commander:** coordina, toma decisiones, es la única voz externa
**Technical Lead:** investiga y aplica la solución
**Communications Lead:** gestiona status page, emails y redes sociales
**Scribe:** documenta todo en tiempo real (para el post-mortem)

### 📋 Post-mortem sin culpables (blameless)
Estructura del documento de post-mortem que extrae aprendizajes reales en 1 hora.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión de incidencias, crisis management, customer support ops',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de múltiples clientes freelance: el sistema para no perder proyectos ni la cabeza',
                'description'       => 'Organiza el trabajo con 3 a 8 clientes simultáneos sin que ninguno sienta que no eres su única prioridad. Con el sistema de gestión de proyectos, la comunicación proactiva y los límites que protegen tu tiempo y calidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de productividad especializado en freelancers con cartera de clientes y proyectos simultáneos.

Mi situación:
- Número de clientes activos ahora: [N]
- Número máximo que quiero gestionar: [N]
- Tipo de proyectos: [proyectos puntuales / retainers / mixto]
- Herramienta de gestión que uso: [Notion / Trello / Asana / solo email / otra]
- Mayor dificultad actual: [perder el hilo de cada proyecto / clientes que piden urgencias constantes / no saber cuánto tiempo dedico a cada uno / otro]

## Sistema de Gestión Multi-cliente — [Tu nombre]

### 🗂️ La estructura del cliente en un sistema centralizado

**Un "espacio" por cliente con:**
- Dashboard del proyecto: estado, siguiente acción, fecha límite
- Log de comunicaciones: resumen de cada reunión y acuerdo
- Entregables: versiones y fechas de entrega
- Financiero: presupuesto, facturado, pendiente de cobro
- Notas: contexto del cliente, preferencias, lo que no hay que olvidar

**Template en Notion / Trello (estructura de tablero):**
```
📁 [Nombre del cliente]
  ├── 🎯 Resumen del proyecto (scope, deadline, precio)
  ├── 📋 Tareas activas (To Do / En progreso / En revisión / Hecho)
  ├── 📅 Próxima reunión: [fecha y agenda]
  ├── 💬 Log de comunicaciones
  └── 💰 Facturación: [facturado vs. pendiente]
```

### 📅 La semana tipo del freelance multi-cliente

**Lunes — Planificación semanal (60 min):**
- Revisar el estado de cada cliente en el sistema
- Identificar los entregables de esta semana
- Bloquear tiempos en el calendario (deep work por cliente)
- Identificar posibles conflictos de tiempo antes de que ocurran

**Martes-Jueves — Trabajo profundo (bloques de 2-3 horas):**
- Un cliente por bloque (no mezclar)
- Sin notificaciones durante los bloques
- Actualizar el tablero al terminar cada bloque

**Viernes — Cierre semanal (45 min):**
- Actualizar estado en todos los proyectos
- Enviar resumen de avance a clientes que lo necesiten
- Preparar la siguiente semana

### 📢 Comunicación proactiva (que previene urgencias)

**Regla de oro:** el cliente que no sabe qué está pasando inventa problemas.

**Actualización semanal (el email de viernes que todos esperan):**
```
Hola [nombre],

Esta semana en tu proyecto:
✅ Completado: [lista]
🔄 En progreso: [lista + % avance]
📋 Próxima semana: [lista]
❓ Necesito de ti: [bloqueos o decisiones pendientes]
```

**Gestión de urgencias del cliente:**
Cómo poner límites sin perder el cliente: el protocolo de respuesta a WhatsApps de domingo.

### ⚖️ Cuándo decir no a un cliente nuevo (capacidad máxima)
La fórmula para saber cuándo estás al límite real y cómo comunicar que no puedes asumir más trabajo sin quemar puentes.

### 📊 Dashboard personal de capacidad
La hoja de cálculo de 5 columnas que muestra en un vistazo si tienes margen para más clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión de proyectos freelance, productividad, multi-cliente',
                'vote_score'        => 44,
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
