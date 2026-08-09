<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills35Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Remarketing y retargeting: recupera a los que se fueron sin comprar con anuncios que convierten',
                'description'       => 'Implementa una estrategia de remarketing y retargeting que recupere a los visitantes que abandonaron tu web, tu carrito o tu formulario de contacto con el mensaje correcto en el momento correcto. Con las audiencias, los mensajes por etapa del funnel y las reglas de exclusión que evitan saturar al usuario.',
                'prompt_content'    => <<<'PROMPT'
Eres un Performance Marketing Specialist con experiencia gestionando campañas de remarketing en Google Ads y Meta Ads que han recuperado entre el 15-25% de los visitantes que abandonaron el proceso de compra, con un ROAS (Return on Ad Spend) de 4× o superior.

Contexto:
- Plataforma de remarketing: [Google Ads / Meta Ads / LinkedIn Ads / varias]
- Tipo de negocio: [SaaS B2B / ecommerce / servicios profesionales / otro]
- Ticket medio: [€]
- El problema actual: [no hacemos remarketing / baja conversión del remarketing actual / no sabemos segmentar las audiencias]

## Remarketing y Retargeting — [Empresa]

### 🧠 La diferencia entre remarketing y retargeting (y por qué importa)

**Retargeting:** mostrar anuncios a personas que visitaron tu web (basado en cookies / píxel).
**Remarketing:** en sentido estricto, se refiere a campañas de email a personas que ya son contactos.
En la práctica, los dos términos se usan indistintamente. En este prompt nos referimos al retargeting paid (anuncios pagados a visitantes de la web).

### 🎯 Las audiencias de retargeting que sí convierten (por orden de prioridad)

**Audiencia 1 — Abandonadores del carrito o del formulario (más caliente):**
```
Quiénes: visitaron la página del carrito / del formulario y no completaron la acción.
Por qué son los mejores: ya tomaron una decisión activa de interés. El abandono fue una fricción, no un "no" definitivo.
Mensaje: el que elimina la fricción específica.
  → Si abandono el carrito → "Olvidaste algo. Aquí está tu carrito. Envío gratis si completas hoy."
  → Si abandono el formulario → "¿Empezamos? Rellena el formulario en 2 minutos."
Ventana: 3-7 días desde el abandono (más tiempo = la intención se enfría).
```

**Audiencia 2 — Visitantes de la página de precios o de contacto:**
```
Quiénes: visitaron la página de precios o contacto pero no convirtieron.
Por qué son buenos: muestran intención de compra activa (alguien que busca el precio está evaluando).
Mensaje: elimina la objeción de precio o aporta prueba social.
  → "Ve qué plan usa [empresa como la suya]."
  → "Más de 1.000 empresas ya confían en nosotros. Empieza gratis."
Ventana: 7-14 días.
```

**Audiencia 3 — Visitantes de páginas de producto o servicio:**
```
Quiénes: visitaron páginas de producto específicas (sin llegar a precios).
Por qué son interesantes: hay interés, pero en una etapa más inicial.
Mensaje: refuerza los beneficios del producto que vieron.
  → Anuncio dinámico que muestra el producto exacto que visitaron.
Ventana: 14-30 días.
```

**Audiencia 4 — Visitantes de blog / contenido educativo:**
```
Quiénes: leyeron contenido de tu blog pero no tomaron ninguna acción de conversión.
Estos están en TOFU — no los presiones con un CTA de compra directa.
Mensaje: siguiente paso natural en el journey.
  → "Descarga la guía completa." / "Únete al webinar."
Ventana: 30-60 días.
```

### 🚫 Las reglas de exclusión que evitan saturar y quemar el presupuesto

**Excluye siempre:**
```
→ Clientes actuales (ya compraron — mostrarles anuncios de captación es dinero tirado)
→ Leads que ya están en conversación activa (el comercial los está trabajando)
→ Usuarios que convirtieron en los últimos 30 días
→ Personas que han visto el mismo anuncio más de 5 veces sin interactuar (frequency cap)
```

**El frequency cap (límite de frecuencia):**
```
Google Display / YouTube: máximo 3-5 impresiones/semana por usuario.
Meta Ads: monitorizar el CPM y el CTR — cuando el CTR cae más del 30% respecto al inicio de la campaña, la audiencia está saturada y hay que refrescar el creativo.
```

### 📊 Las métricas del remarketing que indican si está funcionando
El ROAS por segmento de audiencia (carrito > precios > producto > blog), el View-through conversion rate y cómo detectar el attribution overlap (cuántas ventas se atribuyen al remarketing que habrían ocurrido igualmente sin el anuncio).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Remarketing, retargeting, Google Ads, Meta Ads, audiencias personalizadas, abandono carrito, ROAS',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Testing de integración end-to-end: la suite de tests que atrapa los bugs antes de que lleguen a producción',
                'description'       => 'Construye una suite de tests de integración end-to-end que valida los flujos críticos de tu aplicación en cada PR antes de llegar a producción. Con las herramientas correctas por stack, la estrategia de qué testear, los patrones de tests mantenibles y cómo integrarlos en el CI/CD.',
                'prompt_content'    => <<<'PROMPT'
Eres un QA Engineer / SDET con experiencia construyendo suites de tests de integración e2e que han reducido los bugs en producción un 70% sin convertirse en un cuello de botella que ralentiza los ciclos de release.

Contexto:
- Stack tecnológico: [Node.js+Express / Python+FastAPI / Go / PHP+Laravel / otro]
- Frontend: [React / Vue / Angular / sin frontend (API pura)]
- Herramienta de tests e2e actual: [ninguna / Playwright / Cypress / Selenium / otro]
- El mayor problema actual: [tests que fallan de forma intermitente (flaky) / tests que tardan demasiado / no sabemos qué testear / tests que no capturan los bugs reales]

## Testing de Integración E2E — [Aplicación]

### 🗺️ La pirámide de tests: dónde encajan los tests e2e

```
         /\
        /E2E\          Pocos (10-20) — lentos, pero validan flujos completos
       /──────\
      / Integration \  Algunos (50-100) — validan módulos en combinación
     /──────────────\
    /   Unit Tests    \ Muchos (500+) — rápidos, validan funciones individuales
   /──────────────────\
```

**La regla:** no reemplaces los unit tests con e2e. Los tests e2e son caros (lentos, más difíciles de mantener). Úsalos solo para los flujos más críticos de negocio.

**Qué testear con e2e (la lista corta):**
```
✅ El flujo de registro / login completo
✅ El flujo de checkout o de activación del servicio (el que genera revenue)
✅ El flujo del usuario nuevo (onboarding crítico)
✅ Las integraciones con terceros más críticas (pago, email, webhook principal)
✅ Los flujos que cuando fallan causan incidentes P0

❌ NO testear e2e:
- Casos extremos de validación (eso es para unit tests)
- Cada variación de un formulario
- El CSS o el diseño visual
```

### 🛠️ Las herramientas por stack

**Para aplicaciones web con frontend:**
```
Playwright (recomendado en 2025):
  → Compatible con Chromium, Firefox y Safari en el mismo test
  → API async/await nativa
  → Auto-waiting integrado (espera a que el elemento esté listo antes de interactuar)
  → Grabación de trazas para debugging
  → Soporte de componentes (React, Vue)

Instalación:
npm install --save-dev @playwright/test
npx playwright install

Test de ejemplo — login:
import { test, expect } from '@playwright/test'

test('login correcto', async ({ page }) => {
  await page.goto('/login')
  await page.fill('[data-testid="email"]', 'test@example.com')
  await page.fill('[data-testid="password"]', 'password123')
  await page.click('[data-testid="submit"]')
  await expect(page).toHaveURL('/dashboard')
  await expect(page.locator('h1')).toContainText('Bienvenido')
})
```

**Para APIs REST (sin frontend):**
```
Supertest + Jest (Node.js):
import request from 'supertest'
import app from '../src/app'

describe('POST /api/users', () => {
  it('crea un usuario y devuelve 201', async () => {
    const res = await request(app)
      .post('/api/users')
      .send({ email: 'test@example.com', name: 'Test User' })
    expect(res.status).toBe(201)
    expect(res.body).toHaveProperty('id')
    expect(res.body.email).toBe('test@example.com')
  })
})

HTTPx + pytest (Python):
import httpx, pytest

def test_create_user(client):
    response = client.post('/api/users', json={'email': 'test@example.com'})
    assert response.status_code == 201
    assert 'id' in response.json()
```

### 🚫 Los antipatrones que convierten los tests e2e en una pesadilla

**El test flaky (intermitente):**
```
Causa: esperas fijas (await page.waitForTimeout(2000)).
Fix: esperas basadas en estado (await page.waitForSelector('.dashboard-loaded')).
Nunca uses sleep/waitForTimeout en tests de integración.
```

**El test que depende de datos hardcodeados:**
```
Causa: el test asume que el usuario con email 'admin@test.com' existe.
Fix: cada test crea sus propios datos de prueba y los limpia al terminar.
beforeEach → setup de datos / afterEach → cleanup.
```

**El test demasiado largo:**
```
Un test que valida 15 pasos en un solo it() es difícil de debuggear.
Divide los flujos en tests independientes y cortos (1 flujo = 1 test).
```

### ⚙️ Integración en el pipeline de CI/CD
La configuración de GitHub Actions que ejecuta los tests e2e en cada PR (con base de datos de prueba aislada), el reporte de resultados y las estrategias para tests e2e paralelos que reducen el tiempo de ejecución.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Testing e2e, Playwright, Cypress, integration tests, CI/CD testing, tests automatizados',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design handoff a desarrollo: cómo entregar diseños de Figma que el equipo dev realmente puede implementar',
                'description'       => 'Prepara y entrega tus diseños de Figma al equipo de desarrollo de forma que el producto final sea fiel al diseño y el proceso no genere idas y venidas interminables. Con el checklist de preparación, la documentación de comportamientos y la gestión del dev mode de Figma.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer con experiencia coordinando el handoff de diseño a desarrollo en equipos ágiles donde la calidad de la entrega determina si el producto final corresponde al diseño o es una interpretación libre del desarrollador.

Contexto:
- Herramienta de diseño: [Figma / Sketch / Adobe XD / otro]
- Tamaño del equipo de desarrollo: [1 / 2-5 / 5+ devs]
- El mayor problema actual: [el dev implementa cosas que no corresponden al diseño / hay muchas preguntas del dev que interrumpen / los componentes no están organizados / no sé qué documentar]

## Design Handoff — Figma → Desarrollo — [Producto]

### ⚠️ Por qué el handoff sale mal (y cómo evitarlo)

**El problema de fondo:**
El diseñador entrega una captura estática de cómo debería verse la pantalla.
El desarrollador necesita saber cómo se comporta en cada estado posible.

**Los 5 estados que el diseñador suele olvidar documentar:**
```
1. Estado vacío: ¿qué ve el usuario cuando no hay datos todavía?
   (La lista de pedidos vacía, el dashboard sin métricas, el inbox sin mensajes)

2. Estado de carga: ¿skeleton screen, spinner, o nada?

3. Estado de error: ¿qué mensaje aparece si la API falla?

4. Estado de éxito: el feedback visual después de una acción completada.

5. Estado con datos reales: ¿qué pasa con un título de 80 caracteres? ¿Se corta? ¿Se hace línea?
```

### ✅ El checklist de preparación antes del handoff

**1. Nomenclatura consistente:**
```
Los layers de Figma se llaman como las variables del código.
❌ Layer: "Rectangle 47"
✅ Layer: "card-product / image"
❌ Layer: "Group 23"
✅ Layer: "modal-confirmation / button-primary"
```

**2. Componentes organizados:**
```
Todos los elementos reutilizables son componentes de Figma (no grupos).
Los componentes tienen variantes para sus diferentes estados (default, hover, disabled, error).
Los componentes están en una página separada ("Design System" o "Components").
```

**3. Design tokens documentados:**
```
Los colores, tipografías y espaciados usan variables de Figma (no valores hardcoded).
El desarrollador ve que el color de fondo es "bg-surface-1" (que en código es #F8F9FA), no "#F8F9FA" directamente.
```

**4. Comportamientos documentados:**
```
Añade anotaciones directamente en Figma para:
→ Comportamientos de animación (qué se anima, cuánto dura, qué easing)
→ Comportamientos de scroll (sticky header, infinite scroll, pagination)
→ Comportamientos de hover/click/focus
→ Breakpoints responsive (qué cambia en mobile vs. desktop)
→ Accesibilidad (orden de tab, descripción del aria-label de cada ícono)
```

### 🔧 Figma Dev Mode: la configuración que mejora el handoff

**Qué activa el Dev Mode de Figma:**
```
→ El desarrollador puede inspeccionar valores exactos de los elementos (padding, border-radius, font-size...)
→ Ve el código CSS, iOS Swift o Android Kotlin generado automáticamente
→ Puede marcar secciones como "listas para implementar" o "en revisión"
→ Ve los assets (imágenes, íconos) exportables directamente
```

**Cómo maximizar el Dev Mode:**
```
1. Organiza el archivo de Figma con frames separados por pantalla/componente
   (no un enorme frame con todo mezclado).

2. Nombra correctamente los export assets:
   El ícono "search" en Figma → exporta como "icon-search.svg" (no "Vector 12.svg").

3. Usa Auto Layout en todos los componentes:
   El desarrollador puede ver si el componente crece verticalmente u horizontalmente
   sin tener que asumir nada.

4. Marca las secciones como "Ready for dev" solo cuando están finalizadas:
   El developer sabe exactamente qué puede implementar y qué está en proceso.
```

### 📝 La documentación de pantalla que responde las preguntas antes de que las hagan
La plantilla de anotaciones por pantalla que documenta los estados, los comportamientos, los edge cases y los criterios de aceptación en el mismo archivo de Figma, reduciendo las interrupciones durante la implementación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Design handoff, Figma Dev Mode, entrega diseño desarrollo, design system, anotaciones diseño',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Social selling en LinkedIn: construye autoridad que genera oportunidades sin hacer cold outreach',
                'description'       => 'Construye una presencia en LinkedIn que genera oportunidades de negocio de forma orgánica, sin spam de conexiones ni mensajes de venta fríos. Con la estrategia de contenido, el sistema de interacción con prospectos y el proceso de conversación que convierte seguidores en reuniones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Social Selling Specialist con experiencia en B2B que ha generado pipeline de ventas de €500k+ a través de LinkedIn sin invertir en LinkedIn Sales Navigator y sin hacer cold outreach masivo, únicamente mediante el posicionamiento como referente en el sector y el engagement estratégico.

Perfil:
- Sector / especialidad: [describe tu sector y a quién vendes]
- Tu ICP (cliente ideal) en LinkedIn: [cargo, tamaño de empresa, sector]
- El mayor obstáculo actual: [no sé qué publicar / publico pero nadie interacciona / tengo muchos seguidores pero no genera negocio]

## Social Selling en LinkedIn — [Perfil]

### 🧠 La diferencia entre social selling y spam con contenido

**Social selling que no funciona:**
```
→ Publicar cada día contenido genérico copiado de otros
→ Conectar con 50 personas a la semana y enviarles un pitch inmediato
→ Medir el éxito por los likes y los seguidores
→ Publicar solo sobre los productos que vendes
```

**Social selling que funciona:**
```
→ Publicar contenido que tu ICP guarda y comparte porque resuelve un problema real suyo
→ Interactuar en los posts de tus prospectos antes de enviarles ningún mensaje
→ Medir el éxito por las conversaciones de venta que genera
→ Posicionarte como alguien que ayuda primero y vende después
```

### 📝 El sistema de contenido para LinkedIn: qué publicar y cuándo

**La regla del 80/20:**
```
80% — Contenido que aporta valor sin pedir nada a cambio:
  → Frameworks y metodologías de tu área
  → Análisis de tendencias del sector
  → Errores comunes (basados en tu experiencia con clientes)
  → Casos de uso anónimos ("un cliente mío hizo X y consiguió Y")
  → Cuestionamiento de ideas establecidas ("todo el mundo dice X, pero la realidad es Y")

20% — Contenido de conversión:
  → Casos de éxito (con permiso del cliente)
  → Anuncios de recursos descargables
  → Invitaciones a webinars o eventos
```

**Los 5 tipos de post que funcionan en LinkedIn B2B:**
```
TIPO 1 — El post de problema/solución:
  Problema que tiene tu ICP → la causa real → la solución → el resultado esperado.
  Estructura: "La mayoría de los [cargo de tu ICP] cometen este error..."

TIPO 2 — El post de opinión contraria:
  Una idea establecida en tu sector + por qué estás en desacuerdo + tu alternativa.
  Genera debate y posicionamiento. No seas artificialmente polémico.

TIPO 3 — El framework o checklist:
  "Las 5 preguntas que hago antes de [problema que resuelves]."
  Alta tasa de guardados → la métrica que más correlaciona con alcance orgánico.

TIPO 4 — El caso de estudio anónimo:
  "Un cliente [cargo+sector sin nombrar] tenía este problema. Lo resolvimos así. Resultado: [métricas]."

TIPO 5 — El post personal con aprendizaje profesional:
  Una historia personal + la lección profesional que extraes.
  Genera engagement emocional, humaniza el perfil.
```

### 🤝 El proceso de interacción que convierte LinkedIn en pipeline

**El sistema de 3 pasos antes de contactar a un prospecto:**
```
Paso 1 (semana 1): Sigue al prospecto. Comenta en sus posts con algo sustancial (no "gran post").
Paso 2 (semana 2-3): Otro comentario valioso. Si comparte algo tuyo, responde personalmente.
Paso 3: Solo ahora envía el mensaje directo.

El mensaje que funciona:
"Hola [nombre], llevo unas semanas leyendo tus posts sobre [tema]. Tienes una perspectiva
que comparto sobre [algo específico que escribió]. Precisamente estoy trabajando en algo
relacionado y me pregunto si no te parecería interesante hablar 20 minutos."

Por qué funciona: no es frío (hay contexto de interacción previa) y no vende nada todavía.
```

### 📊 Las métricas de social selling que predicen el pipeline
El Social Selling Index (SSI) de LinkedIn, las métricas que sí importan (conversaciones iniciadas por inbound, reuniones generadas desde LinkedIn, revenue atribuido al canal) y cómo construir el tracking sin herramientas complejas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Social selling LinkedIn, autoridad LinkedIn, contenido B2B LinkedIn, outreach LinkedIn, pipeline orgánico',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de la deuda técnica desde producto: cómo priorizar el trabajo invisible que frena la velocidad',
                'description'       => 'Gestiona la deuda técnica de tu producto desde el rol de PM con un proceso que equilibra la velocidad de entrega de features con la salud técnica del sistema. Con el inventario de deuda, la negociación con el equipo de ingeniería y cómo vender la inversión técnica al negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un Senior Product Manager con experiencia gestionando la tensión entre velocidad de entrega de features y salud técnica del sistema, en entornos donde la deuda técnica se ha gestionado de forma proactiva en lugar de acumularse hasta convertirse en un freno al crecimiento del producto.

Contexto:
- Tamaño del equipo de ingeniería: [N engineers]
- Estado de la deuda técnica: [desconocido / sabemos que existe pero no está cuantificada / tenemos un backlog técnico sin priorizar / es un problema activo que frena el desarrollo]
- El stakeholder a quien necesitas convencer: [CEO / CTO / inversores / nadie — el equipo lo gestiona solo]

## Gestión de Deuda Técnica desde Producto — [Empresa]

### 🧠 Por qué la deuda técnica es un problema de producto, no solo de ingeniería

**El error habitual:**
El PM ve la deuda técnica como "un problema del equipo de engineering".
Engineering gestiona la deuda de forma reactiva (cuando algo falla).
El negocio siente el impacto solo cuando la velocidad de entrega se colapsa.

**La realidad:**
La deuda técnica es un problema de producto porque:
→ Ralentiza la entrega de features que el negocio necesita
→ Aumenta la tasa de bugs que degradan la experiencia del usuario
→ Eleva el coste de cambiar el producto cuando la estrategia cambia
→ Dificulta la incorporación de nuevos engineers (cuello de botella de onboarding)

El PM es el mejor aliado de engineering para priorizar la inversión técnica porque:
→ Puede traducir el impacto técnico al lenguaje del negocio (revenue, velocidad, riesgo)
→ Tiene la visibilidad del roadmap para identificar dónde la deuda frena más el avance
→ Es el puente entre ingeniería y los stakeholders de negocio

### 📋 El inventario de deuda técnica: hacer visible lo invisible

**Cómo construir el inventario con el equipo de engineering:**
```
Workshop de 2 horas con el equipo técnico:
1. Cada engineer anota los problemas técnicos que más les frenan en el día a día.
2. Se agrupan por área o sistema.
3. Se puntúa cada ítem en 3 dimensiones:

DIMENSIÓN               ESCALA    PREGUNTA
────────────────────────────────────────────────────────────
Impacto en velocidad    1-5       ¿Cuánto frena la entrega de features por aquí?
Riesgo para el negocio  1-5       ¿Con qué probabilidad causa un incidente o pérdida de datos?
Coste de resolver       1-5       ¿Cuánto esfuerzo requiere arreglarlo?

Prioridad = (Impacto × Riesgo) / Coste
Los ítems con puntuación más alta son los que hay que atacar primero.
```

### 💬 Cómo vender la inversión técnica al negocio

**El error al hablar de deuda técnica con no-técnicos:**
```
❌ "Necesitamos refactorizar el módulo de autenticación."
   → El CEO oye: "El equipo quiere hacer cosas que no benefician a los usuarios."

✅ "Cada nueva feature de autenticación nos cuesta el doble de lo que debería porque la base
   no está bien construida. Si invertimos 2 semanas ahora, las siguientes 5 features en esa
   área se entregan un 40% más rápido. El payback es en el sprint siguiente."
   → El CEO oye: "Hay una inversión con retorno claro."
```

**Los 3 argumentos que funcionan con el negocio:**
```
1. El argumento de velocidad:
   "Nuestro velocity actual en [área] es de X points/sprint. Si resolvemos la deuda,
   estimamos subir a Y points/sprint. Son Z features adicionales al año."

2. El argumento de riesgo:
   "Este componente no tiene tests. Si falla, el impacto es [describir en términos de negocio].
   La probabilidad de fallo sin acción es alta — ya hemos tenido 3 incidentes en 6 meses."

3. El argumento de coste diferido:
   "Cada mes que no lo arreglamos, el coste de hacerlo crece porque más código depende de él.
   Lo que hoy cuesta 2 semanas, en 6 meses costará 6."
```

### 📅 El modelo de asignación de capacidad que equilibra features y deuda
El modelo de dedicación de capacidad (ej: 70% features / 20% deuda / 10% exploración) y cómo negociar con el equipo de ingeniería y los stakeholders de negocio el porcentaje correcto según el estado de salud del sistema.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Deuda técnica producto, technical debt management, priorización ingeniería, velocidad de desarrollo, product engineering',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People ops en empresas de crecimiento rápido: procesos de RRHH que escalan sin burocracia',
                'description'       => 'Diseña los procesos de RRHH que soportan el crecimiento rápido de una empresa sin convertirte en un cuello de botella burocrático. Con los procesos mínimos viables de onboarding, evaluación de desempeño y desarrollo de carrera que funcionan desde 20 hasta 200 personas.',
                'prompt_content'    => <<<'PROMPT'
Eres una Head of People con experiencia construyendo los procesos de RRHH en startups que han crecido de 20 a 200 personas en 2-3 años, donde la clave ha sido implementar los procesos correctos en el momento correcto para que apoyen el crecimiento en lugar de frenarlo.

Contexto:
- Tamaño actual de la empresa: [N personas]
- Crecimiento esperado en 12 meses: [N personas adicionales]
- Estado de los procesos de RRHH: [todo informal / procesos básicos / queremos profesionalizar sin burocratizar]
- El mayor reto actual: [onboarding caótico / evaluaciones de desempeño inconsistentes / no hay planes de carrera / retención de talento clave]

## People Ops en Crecimiento Rápido — [Empresa]

### 🗺️ Los 3 estadios de los procesos de RRHH según el tamaño

**Estadio 1 (1-30 personas) — El fundador lo gestiona todo:**
```
Lo que funciona: informalidad, velocidad, relación personal del CEO con todos.
Lo que falla: al llegar a 20+ personas, el CEO no puede dar feedback a todos.
Señal de que necesitas estructura: los empleados no saben qué se espera de ellos.

Procesos mínimos para este estadio:
→ Onboarding checklist (aunque sea en Notion)
→ 1:1 semanal manager-empleado
→ Revisión de objetivos trimestral informal
```

**Estadio 2 (30-100 personas) — Se necesitan procesos pero no burocracia:**
```
Lo que falla sin procesos: el onboarding es diferente para cada persona, los managers
dan feedback de formas completamente distintas, no hay criterios claros de promoción.

Procesos que hay que implementar en este estadio:
→ Onboarding estructurado (plan de 30-60-90 días)
→ Sistema de evaluación de desempeño (2× año)
→ Career ladder básico por área
→ Proceso de offboarding (tan importante como el onboarding)
```

**Estadio 3 (100-300 personas) — La cultura se gestiona, no se asume:**
```
Lo que falla sin estructura: la cultura que tenías con 30 personas no se transmite sola
a los nuevos empleados. Los valores se vuelven decorativos.

Procesos adicionales:
→ Encuestas de clima y engagement (2× año)
→ Programa de desarrollo de managers
→ Gestión de la compensación con bandas salariales
→ DEI intencional (no solo declarativo)
```

### 📋 El onboarding de 30-60-90 días que retiene el talento

**Por qué el onboarding determina la retención:**
```
El 30% de los empleados que se van en el primer año, se van en los primeros 3 meses.
La causa principal: no entendieron qué se esperaba de ellos, no tuvieron el apoyo necesario,
o descubrieron que la empresa no era lo que esperaban.

El objetivo del onboarding: que el nuevo empleado al final del día 90 sienta que:
→ Entiende el negocio y su contribución al mismo
→ Sabe qué se espera de él en su rol
→ Tiene las relaciones necesarias para trabajar bien
→ Siente que fue una buena decisión unirse a la empresa
```

**El plan de 30-60-90 días:**
```
PRIMEROS 30 DÍAS — Aprender:
  Semana 1: orientación (empresa, cultura, herramientas, personas)
  Semanas 2-4: inmersión en el área (shadowing, reuniones de contexto, lecturas)
  Hito día 30: reunión con el manager — "¿Qué has aprendido? ¿Qué no tienes claro?"

DÍAS 31-60 — Contribuir con supervisión:
  Primeras tareas reales con acompañamiento.
  Objetivo: completar el primer entregable significativo.
  Hito día 60: review del manager — "¿Cómo va la integración? ¿Qué necesitas para ser más efectivo?"

DÍAS 61-90 — Contribuir con autonomía:
  Gestión autónoma de responsabilidades del rol.
  Objetivo: el empleado trabaja de forma independiente y tiene relaciones establecidas.
  Hito día 90: reunión formal de feedback 360° — ¿El rol es lo que esperaba? ¿La empresa también?
```

### 📊 El sistema de evaluación de desempeño que no consume más tiempo del que aporta
El proceso de evaluación 2× año que no requiere más de 4 horas del manager y produce conversaciones útiles sobre desarrollo en lugar de formularios que nadie lee.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'People ops, RRHH startup, onboarding empleados, evaluación desempeño, HR crecimiento rápido',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión del riesgo de tipo de cambio para empresas que operan en varias divisas',
                'description'       => 'Gestiona la exposición al riesgo de tipo de cambio de tu empresa cuando opera en múltiples divisas — clientes en dólares, costes en euros, proveedores en libras. Con la cuantificación de la exposición, los instrumentos de cobertura disponibles y la política de FX para empresas medianas.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO / Director de Finanzas con experiencia gestionando el riesgo de tipo de cambio en empresas que facturan en múltiples divisas (principalmente EUR, USD, GBP), donde la implementación de una política de cobertura ha protegido el margen operativo de la volatilidad del mercado FX sin consumir recursos de tesorería desproporcionados.

Contexto:
- Moneda funcional de la empresa (en la que están los costes): [EUR / GBP / otro]
- Monedas en las que se factura a clientes: [USD / GBP / EUR / otras]
- Exposición neta estimada: [% de los ingresos en divisas diferentes a la moneda funcional]
- El mayor reto: [no tenemos política FX / usamos coberturas pero no estamos seguros si es la estrategia correcta / el tipo de cambio ha afectado significativamente nuestros resultados]

## Gestión del Riesgo de Tipo de Cambio — [Empresa]

### 🧠 Por qué el tipo de cambio es un riesgo financiero que hay que gestionar activamente

**El impacto real en los resultados:**
```
Ejemplo: empresa española con costes en EUR que vende a clientes en USD.

Escenario A (sin cobertura):
Factura $1.000.000 en enero cuando EUR/USD = 1.05 → €952.381
Cobra en agosto cuando EUR/USD = 1.15 → €869.565
Pérdida por tipo de cambio: €82.816 (8.7% del ingreso)

Este no es un riesgo de negocio (mala estrategia, mal producto) — es ruido financiero puro.
Con una cobertura básica, esa pérdida desaparece o se reduce drásticamente.
```

**Los 3 tipos de exposición FX:**
```
1. EXPOSICIÓN TRANSACCIONAL:
   El riesgo en transacciones concretas ya acordadas.
   Ejemplo: has firmado un contrato de $500.000 que cobrarás en 6 meses.
   → Este es el riesgo más fácil de cubrir.

2. EXPOSICIÓN TRASLACIONAL:
   El riesgo en la conversión de estados financieros de filiales en divisas extranjeras.
   Relevante para empresas con subsidiarias internacionales.

3. EXPOSICIÓN ECONÓMICA:
   El riesgo de que el tipo de cambio afecte la competitividad a largo plazo.
   Ejemplo: si el EUR se aprecia mucho vs. el USD, tus precios en USD se vuelven caros para clientes americanos.
   → El más difícil de cubrir con instrumentos financieros.
```

### 🛠️ Los instrumentos de cobertura disponibles para empresas medianas

**Instrumento 1 — Contrato a plazo (forward):**
```
Qué es: acuerdo con el banco para cambiar una divisa a un tipo de cambio fijo en una fecha futura.
Coste: ninguno directo (el banco incluye su margen en el tipo pactado).
Cuándo usarlo: cuando tienes un cobro en divisa extranjera en una fecha conocida.

Ejemplo:
Tienes un cliente que te pagará $500.000 en 6 meses.
Hoy contratas un forward a EUR/USD = 1.08 con vencimiento en 6 meses.
En 6 meses, independientemente del tipo de cambio spot, cambias $500.000 a 1.08.
Resultado: €462.963 garantizados, sin importar si EUR/USD está a 1.05 o 1.15.
```

**Instrumento 2 — Opción de divisas (FX option):**
```
Qué es: derecho (no obligación) a cambiar divisas a un tipo determinado en una fecha futura.
Coste: prima (similar a un seguro — la pagas aunque no ejerzas la opción).
Cuándo usarlo: cuando tienes incertidumbre sobre si cobrarás el importe (oferta pendiente de aceptación).

La diferencia clave con el forward:
Forward → obligatorio, sin prima.
Opción → opcional, con prima.
Si el tipo de cambio te favorece, ejerces la opción. Si no, la dejas vencer.
```

**Instrumento 3 — Netting natural (el más barato):**
```
Qué es: compensar ingresos en USD con gastos en USD, reduciendo la exposición neta.
Ejemplo: si tienes clientes en USD y proveedores en USD, paga a los proveedores directamente en USD
antes de convertir. Reduces la exposición de $1M a la diferencia entre cobros y pagos en USD.
Coste: cero.
Limitación: solo funciona si tienes flujos en ambas direcciones en la misma divisa.
```

### 📋 La política de FX para empresas medianas: los principios que guían las decisiones
Los umbrales de exposición que activan la cobertura obligatoria, el porcentaje de exposición a cubrir (no cubrir el 100% es intencionado), y el proceso de revisión trimestral de la política con el consejo de administración.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Riesgo tipo de cambio, FX risk, cobertura divisas, forward FX, finanzas internacionales, gestión divisa',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Compliance PCI-DSS e ISO 27001: lo que una empresa de software necesita saber para vender a grandes empresas',
                'description'       => 'Entiende los requisitos de compliance de PCI-DSS e ISO 27001 que los grandes clientes enterprise exigen a sus proveedores de software, qué significa cumplirlos de verdad y cuál es el camino más eficiente para certificarte sin convertirlo en un proyecto de 18 meses.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de seguridad y compliance con experiencia guiando a empresas de software B2B en el proceso de certificación ISO 27001 y cumplimiento PCI-DSS, donde el objetivo es superar la auditoría de seguridad de grandes clientes enterprise y conseguir los certificados que abren las puertas a deals de €100k+.

Contexto:
- Tipo de empresa: [SaaS B2B / empresa de desarrollo de software / integrador / otro]
- El driver del compliance: [un cliente enterprise lo exige / queremos entrar en el mercado enterprise / tenemos un incident de seguridad y necesitamos certificarnos]
- El certificado necesario: [ISO 27001 / PCI-DSS / SOC 2 / todos / no lo tenemos claro]

## Compliance PCI-DSS e ISO 27001 — [Empresa]

### 🗺️ Qué es cada certificado y cuándo necesitas cuál

**ISO 27001 — La norma de gestión de la seguridad de la información:**
```
Qué certifica: que tienes un Sistema de Gestión de Seguridad de la Información (SGSI) implementado,
mantenido y mejorado continuamente.
No certifica que eres "seguro" — certifica que tienes un proceso formal de gestión de riesgos.

Cuándo lo necesitan los clientes:
→ La mayoría de los grandes clientes enterprise en Europa (especialmente sector financiero, salud, público)
→ Licitaciones con Administración Pública española y europea
→ Clientes con datos especialmente sensibles (RGPD de alto riesgo)

Duración de la certificación: 3 años con auditorías de vigilancia anuales.
Coste estimado de primera certificación (empresa 20-100 personas): €15.000-40.000 (certificación + consultoría).
```

**PCI-DSS — El estándar de seguridad para datos de tarjetas de pago:**
```
Quién lo necesita: cualquier empresa que almacene, procese o transmita datos de tarjetas de pago.
Si usas Stripe/Braintree/PayPal y no almacenas datos de tarjeta → tu scope es mínimo (SAQ A).
Si tienes tu propia integración con el banco o almacenas datos de tarjeta → el scope es mucho mayor.

Los niveles:
Nivel 1: >6M transacciones/año → requiere auditoría externa (QSA)
Nivel 2-4: menos transacciones → cuestionario de auto-evaluación (SAQ)

Importante: si usas Stripe/PayPal y no tocas datos de tarjeta, el compliance de PCI es
principalmente responsabilidad de ellos. La tuya es mínima.
```

**SOC 2 (Type I y Type II):**
```
Relevante principalmente para clientes en USA.
En Europa, los clientes suelen pedir ISO 27001 en lugar de SOC 2.
Si vendes principalmente en USA: prioriza SOC 2 Type II.
Si vendes principalmente en Europa: prioriza ISO 27001.
Si vendes en ambos mercados: ISO 27001 tiene mayor reconocimiento global.
```

### 🛤️ El camino a ISO 27001: el proceso real

**Fase 1 — Gap analysis (4-8 semanas):**
```
Evalúas tu estado actual frente a los requisitos de ISO 27001.
¿Qué tienes ya? ¿Qué te falta?
Output: lista priorizada de los controles a implementar.
```

**Fase 2 — Implementación del SGSI (3-6 meses):**
```
Los 5 elementos obligatorios que no pueden faltar:
1. Política de Seguridad de la Información (documento firmado por la dirección)
2. Inventario de activos de información (qué datos gestionas y su clasificación)
3. Evaluación de riesgos (qué puede salir mal y cuál es el impacto)
4. Plan de tratamiento de riesgos (qué haces con cada riesgo)
5. Métricas e indicadores del SGSI (cómo mides que funciona)

Los controles del Anexo A (114 controles en ISO 27001:2013 / 93 en ISO 27001:2022):
No tienes que implementarlos todos — debes justificar cuáles aplican a tu contexto.
```

**Fase 3 — Auditoría de certificación:**
```
Etapa 1 (revisión documental): el auditor revisa la documentación del SGSI.
Etapa 2 (auditoría in-situ): el auditor visita (o conecta remotamente) y verifica que los controles
están implementados en la realidad, no solo en el papel.
No conformidades menores → puedes certificarte con un plan de acción.
No conformidades mayores → no te certificas hasta resolver.
```

### ⚡ Los atajos que reducen el tiempo y el coste de la certificación ISO 27001
Las decisiones de diseño del SGSI (ámbito reducido, controles priorizados por riesgo real, documentación mínima suficiente) que permiten certificarse en 6 meses en lugar de 18 sin comprometer la solidez del sistema.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'ISO 27001, PCI-DSS, SOC 2, certificación seguridad, compliance enterprise, SGSI, auditoría seguridad',
                'vote_score'        => 24,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer journey mapping para soporte: diseña la experiencia de resolución de problemas del cliente',
                'description'       => 'Mapea el journey de resolución de problemas del cliente desde que detecta el problema hasta que lo resuelve, para identificar los puntos de fricción que destruyen la experiencia y diseñar el flujo de soporte que hace sentir al cliente cuidado, no procesado.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Experience Designer especializado en soporte al cliente con experiencia mapeando y rediseñando journeys de soporte en empresas de SaaS y ecommerce donde mejorar los puntos de fricción del proceso ha aumentado el CSAT del 65% al 85% sin aumentar el equipo.

Contexto:
- Tipo de empresa: [SaaS B2B / ecommerce / app de consumo / otro]
- Canales de soporte actuales: [email / chat / teléfono / self-service / redes sociales]
- El mayor problema en la experiencia de soporte: [el cliente tarda demasiado en obtener respuesta / el cliente tiene que repetir la información varias veces / el problema no se resuelve en el primer contacto / la experiencia es impersonal y fría]

## Customer Journey Mapping — Soporte — [Empresa]

### 🗺️ El journey de soporte: los 6 estadios del cliente con un problema

**Estadio 1 — Detección del problema:**
```
Lo que experimenta el cliente:
  "Algo no funciona. No sé si es mi error, un error del sistema, o si es permanente."
Emociones: confusión, incertidumbre.

Puntos de fricción frecuentes:
  → El cliente no sabe si es un problema temporal o estructural
  → No hay página de status del sistema visible
  → El mensaje de error es técnico e incomprensible

Mejoras de diseño:
  → Página de status pública (statuspage.io) con actualizaciones en tiempo real
  → Mensajes de error claros que indican qué pasó y qué puede hacer el usuario
  → Detección proactiva: si el sistema sabe que hay un problema, contáctale antes de que lo descubra
```

**Estadio 2 — Búsqueda de solución por self-service:**
```
Lo que experimenta el cliente:
  "Voy a buscar en el Help Center antes de contactar con soporte."
Emociones: esperanza, luego frustración si no encuentra.

Puntos de fricción frecuentes:
  → La búsqueda no devuelve resultados relevantes
  → Los artículos están desactualizados o no corresponden a la versión actual del producto
  → Los artículos explican el "qué" pero no el "por qué" ni el "cómo en mi caso"

Mejoras de diseño:
  → Búsqueda semántica que entiende preguntas en lenguaje natural ("¿cómo conecto con X?")
  → Artículos con ejemplos visuales (screenshots, GIFs) para el paso más confuso
  → "¿Te ha resultado útil este artículo?" + campo de "¿qué buscabas que no encontraste?"
```

**Estadio 3 — Decisión de contactar con soporte:**
```
Lo que experimenta el cliente:
  "No he encontrado la solución. Voy a pedir ayuda."
Emociones: algo de frustración, expectativa de que soporte resuelva.

Puntos de fricción frecuentes:
  → El botón de contacto es difícil de encontrar (oculto intencionadamente)
  → Solo hay un canal (email) cuando el cliente prefiere el chat
  → El formulario de contacto pide datos que soporte ya debería tener

Mejoras de diseño:
  → El acceso al soporte es visible y claro (no hay que buscar el email de soporte)
  → Ofrecer el canal correcto según la urgencia (chat para problemas bloqueantes, email para el resto)
  → El formulario de contacto es mínimo: describe el problema + capturas → el resto lo busca soporte
```

**Estadio 4 — La interacción con el agente de soporte:**
```
Lo que experimenta el cliente:
  "Explico mi problema. El agente me responde."
Emociones: expectativa, luego satisfacción o frustración según la respuesta.

Puntos de fricción frecuentes:
  → El agente pide información que ya estaba en el formulario inicial (el cliente tiene que repetirse)
  → La primera respuesta es una pregunta en lugar de una solución o diagnóstico
  → El agente usa lenguaje técnico que el cliente no entiende
  → El cliente no sabe cuándo recibirá respuesta

Mejoras de diseño:
  → El agente llega a la conversación con contexto completo del cliente (qué plan tiene, qué hizo antes del problema)
  → La primera respuesta o es la solución o es un diagnóstico con opciones
  → Expectativa de tiempo de respuesta visible desde el momento del contacto
```

**Estadios 5-6 — Resolución y post-resolución:**
```
Los puntos de fricción más frecuentes en el cierre de un ticket y cómo convertir el
momento del cierre en una oportunidad para capturar feedback y aumentar la satisfacción final.
```

### 📊 Las métricas del journey de soporte que revelan dónde está el dolor
El deflection rate (% que resuelve por self-service), el First Contact Resolution rate, el tiempo en cada estadio del journey y la correlación entre estos indicadores y el CSAT final del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Customer journey soporte, CX soporte cliente, mapa de experiencia soporte, CSAT, first contact resolution',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Colaboraciones y Joint Ventures como freelance: cómo ganar proyectos grandes que no puedes hacer solo',
                'description'       => 'Construye alianzas estratégicas con otros freelancers y pequeñas agencias que te permiten ganar proyectos más grandes, ofrecer servicios complementarios y generar referidos mutuos, sin perder tu independencia ni asumir los costes de contratar un equipo propio.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Business Strategist con experiencia construyendo redes de colaboración freelance-to-freelance y freelance-to-agencia que han permitido a profesionales independientes doblar su facturación al ganar proyectos que habrían rechazado por falta de capacidad o especialización complementaria.

Perfil:
- Tu especialidad: [describe tu servicio principal]
- El tipo de proyectos que rechazas por exceder tu capacidad o alcance: [describe]
- El tipo de colaborador que te falta para ofrecer el servicio completo: [ej: diseñador si eres dev, redactor si eres diseñador, etc.]

## Colaboraciones y Joint Ventures Freelance — [Especialidad]

### 🧠 Los modelos de colaboración entre freelancers

**Modelo 1 — La referencia pura (el más simple):**
```
Cómo funciona: te refieres clientes mutuamente cuando el proyecto no es para ti.
Acuerdo: un fee de referido (típicamente 10-15% del primer proyecto o una tarifa fija).
Cuándo funciona: especialidades claramente complementarias (ej: copywriter que refiere diseñadores).
Ventaja: sin complejidad, sin riesgo, sin gestión.
Limitación: no te permite participar en proyectos más grandes — solo referir.
```

**Modelo 2 — El subcontrato (tú eres el principal):**
```
Cómo funciona: llevas tú el proyecto y subcontratas las partes que no puedes hacer.
Tú eres el responsable principal frente al cliente. El subcontratado trabaja para ti, no para el cliente.
Ventaja: puedes ganar proyectos más grandes sin perder el control de la relación con el cliente.
Riesgo: si el subcontratado falla, el problema es tuyo.
Gestión necesaria: contrato de subcontratación + acuerdo de NDA + brief detallado.

Tu margen sobre el subcontratado:
No es incorrecto añadir un margen de coordinación (10-20%) sobre lo que cobra el subcontratado.
Tú asumes el riesgo, la gestión y la relación con el cliente.
```

**Modelo 3 — El consorcio de freelancers (todos sois pares):**
```
Cómo funciona: varios freelancers especializados se presentan juntos como un equipo al cliente.
Cada uno factura directamente al cliente su parte.
Tú actuas como lead (el punto de contacto principal) sin ser el responsable económico de todos.
Ventaja: sin riesgo financiero — cada uno responde de su parte.
Complejidad: requiere alinear metodologías, formatos, ritmos de trabajo y comunicación.
```

**Modelo 4 — La JV project-based (Joint Venture por proyecto):**
```
Cómo funciona: tú y otro freelance creáis temporalmente una entidad o un acuerdo para un proyecto concreto.
Los ingresos se distribuyen según el porcentaje acordado.
Cuándo usarlo: proyectos grandes donde la propuesta económica y el portfolio conjunto son más competitivos.
```

### 🤝 Cómo encontrar los colaboradores correctos y construir la red

**Los canales para encontrar colaboradores:**
```
→ Slack de comunidades de tu sector (ProductHunt Makers, Indie Hackers, comunidades locales)
→ LinkedIn: busca freelancers con especialidades complementarias a la tuya en tu mercado objetivo
→ Twitter/X: las personas que respetan públicamente tu trabajo suelen ser buenas colaboradoras
→ Eventos y meetups presenciales de tu sector
→ Clientes actuales: "¿Conoces a alguien que haga X?" (a veces el cliente es el introductor)
```

**Cómo evaluar si alguien es un buen colaborador antes de comprometerte:**
```
1. Trabaja con ellos en algo pequeño primero (un proyecto mini o un intercambio de feedback).
2. Observa su puntualidad, calidad y comunicación en ese proyecto pequeño.
3. Pregunta por su disponibilidad real antes de incluirles en una propuesta.
4. Alinea las expectativas de calidad y proceso antes de que el proyecto empiece.
```

### 📝 El acuerdo de colaboración mínimo necesario
El contrato de colaboración freelance-to-freelance que define la división de trabajo, la distribución de ingresos, la propiedad intelectual, la responsabilidad frente al cliente y el proceso de resolución de conflictos sin necesitar un abogado en cada proyecto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Colaboraciones freelance, Joint Venture freelance, subcontratar, red freelancers, proyectos grandes freelance',
                'vote_score'        => 42,
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
