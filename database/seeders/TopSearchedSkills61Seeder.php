<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills61Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'ASO — App Store Optimization para posicionar tu app en Apple App Store y Google Play con más descargas orgánicas',
                'description'      => 'Aprende a optimizar el listing de tu app en App Store y Google Play para aparecer en más búsquedas, mejorar la conversión de visitas a instalaciones y conseguir más descargas orgánicas sin aumentar el presupuesto de paid.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en App Store Optimization (ASO) con 8 años de experiencia posicionando apps en los rankings de Apple App Store y Google Play. Tu misión es ayudarme a construir una estrategia ASO completa y accionable para mi app, desde el research de keywords hasta la optimización de la ficha y el análisis de métricas.

---

## FASE 1 — RESEARCH DE KEYWORDS

Antes de escribir una sola línea del listing, necesito entender cómo buscan mis usuarios.

### 1.1 Mapa de intención de búsqueda

Para mi app [DESCRIBE TU APP EN 2 LÍNEAS], ayúdame a generar:

**Keywords de alto volumen** (cabeza):
- Términos genéricos de categoría (ej. "fitness tracker", "budget app")
- Alta competencia, difícil de rankear, pero necesarios para visibilidad

**Keywords de media cola**:
- Combinaciones de 2-3 palabras más específicas
- Menor competencia, conversión más alta

**Keywords de larga cola**:
- Frases de 4+ palabras con intención clara de descarga
- Volumen bajo pero tasa de conversión altísima

**Template de keyword research:**

| Keyword | Volumen estimado | Dificultad (1-10) | Relevancia (1-10) | Prioridad |
|---------|-----------------|-------------------|-------------------|-----------|
| [KW1]   | Alto            | 8                 | 9                 | Media     |
| [KW2]   | Medio           | 5                 | 10                | Alta      |
| [KW3]   | Bajo            | 2                 | 10                | Alta      |

### 1.2 Análisis de competidores

Para cada uno de mis 3 competidores principales, analiza:
- ¿Qué keywords tienen en el título?
- ¿Qué promesas hacen en el subtítulo?
- ¿Cómo estructuran las primeras 3 líneas de la descripción (las únicas visibles antes del "ver más")?
- ¿Qué categoría y subcategoría usan?

---

## FASE 2 — OPTIMIZACIÓN DEL LISTING

### 2.1 Título (App Store: 30 chars / Google Play: 50 chars)

El título es el campo con mayor peso en el algoritmo. Reglas:

**App Store**: `[Nombre de marca] — [Keyword principal]`
Ejemplo: `Fintonic — Control de gastos`

**Google Play**: `[Nombre de marca]: [Keyword principal] y [keyword secundaria]`
Ejemplo: `Fintonic: Finanzas y ahorro`

Genera 5 variaciones de título para mi app y puntúa cada una según:
- Densidad de keyword (sin keyword stuffing)
- Claridad de propuesta de valor
- Longitud óptima (no desperdiciar caracteres ni cortarse)

### 2.2 Subtítulo / Descripción corta

**App Store** (subtítulo, 30 chars): complementa el título con un beneficio diferencial
**Google Play** (descripción corta, 80 chars): actúa como el meta description — debe contener keyword + CTA implícito

### 2.3 Descripción larga — estructura AIDA para apps

```
PÁRRAFO 1 (Atención — las 3 primeras líneas):
"¿Cansado de [problema]? [Nombre app] es la forma más [adjetivo] de [beneficio]."
→ Incluye keyword principal en las primeras 100 caracteres

PÁRRAFO 2 (Interés — 3 beneficios en bullets):
✅ [Beneficio 1 con dato específico]
✅ [Beneficio 2 con dato específico]
✅ [Beneficio 3 con diferenciador]

PÁRRAFO 3 (Deseo — prueba social):
"Más de [X] usuarios ya [logro]. Valorada con [nota] estrellas por [segmento]."

PÁRRAFO 4 (Acción):
"Descarga gratis y [primera acción de valor] en menos de 2 minutos."

SECCIÓN DE FEATURES (para keywords secundarias):
--- LO QUE ENCONTRARÁS ---
• [Feature 1] — [keyword long tail]
• [Feature 2] — [keyword long tail]
• [Feature 3] — [keyword long tail]
```

### 2.4 Keywords field (solo App Store — 100 chars)

Reglas críticas:
- NO repitas keywords que ya están en el título o subtítulo (el algoritmo ya las indexa)
- Separa con comas SIN espacios para maximizar caracteres
- Usa singular O plural, no ambos
- Incluye variaciones con errores tipográficos comunes si el espacio lo permite

---

## FASE 3 — ELEMENTOS VISUALES CON IMPACTO EN CONVERSIÓN

### 3.1 Icono

El icono afecta el CTR en los resultados de búsqueda. Principios:
- Fondo sólido o gradiente simple (máximo 2 colores)
- Sin texto (ilegible en tamaños pequeños)
- Contraste alto respecto a fondos claros y oscuros
- Test A/B con 2-3 variantes antes de definir

### 3.2 Screenshots — el carrusel de conversión

El 60% de las decisiones de descarga se toman mirando los screenshots, NO leyendo la descripción.

**Estructura óptima de 5 screenshots:**
1. Screenshot 1 — El problema o la promesa principal (texto + pantalla hero)
2. Screenshot 2 — El feature más diferencial
3. Screenshot 3 — Prueba social o dato de impacto
4. Screenshot 4 — Feature secundario de alta valoración
5. Screenshot 5 — CTA final ("Empieza gratis hoy")

**Template de copy para screenshots:**
```
Headline: [Beneficio en 5-7 palabras]
Subheadline: [Cómo lo consigues en 1 línea]
Pantalla: [La UI más relevante para ese beneficio]
```

### 3.3 Preview video (aumenta conversiones hasta un 25%)

Los primeros 3 segundos son los únicos que importan. Estructura:
- 0-3s: El problema (sin audio en App Store, con audio en Play)
- 3-8s: La solución en acción (demo rápida del flujo principal)
- 8-15s: Resultado + CTA

---

## FASE 4 — RATINGS Y REVIEWS

El rating promedio (> 4.2 estrellas) es un factor de ranking crítico.

### Sistema de solicitud de reviews en el momento óptimo

Usa el native rating prompt (SKStoreReviewAPI / Play In-App Review API) después de:
- El usuario completa su primera acción de valor (no en el onboarding)
- El usuario regresa por tercera vez
- El usuario comparte o exporta algo (señal de satisfacción)

NUNCA pidas review:
- En el primer uso
- Después de un error o crash
- En mitad de un flujo crítico

---

## FASE 5 — MÉTRICAS ASO A MONITORIZAR SEMANALMENTE

| Métrica | Herramienta | Objetivo |
|---------|-------------|----------|
| Impresiones de búsqueda | App Store Connect / Play Console | Tendencia ascendente |
| CTR de producto (impresión → página) | App Store Connect | > 3% búsqueda orgánica |
| Tasa de conversión (página → descarga) | App Store Connect | > 30% cold traffic |
| Ranking por keyword | AppFollow / AppTweak / Sensor Tower | Top 10 en keywords principales |
| Rating promedio | App Store Connect | > 4.2 |
| Volumen de reviews (semanal) | Manual | Tendencia ascendente |

---

## ENTREGABLE FINAL

Con toda la información anterior, genera para mi app [NOMBRE Y DESCRIPCIÓN]:

1. Título optimizado para App Store y para Google Play
2. Subtítulo (App Store) y descripción corta (Google Play)
3. Descripción larga completa con estructura AIDA
4. Lista de 100 caracteres de keywords para App Store (sin espacios, sin repeticiones)
5. Briefing de copy para los 5 screenshots
6. Plan de acción de 30 días: semana 1 (listing), semana 2 (visual), semana 3-4 (reviews y monitorización)

Empieza preguntándome los datos que necesitas antes de generar cualquier contenido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar el listing de una app móvil para aumentar las descargas orgánicas en App Store y Google Play mediante keyword research, copywriting y estrategia de conversión.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Accesibilidad web para developers — ARIA roles, WCAG 2.2 y cómo implementar a11y en React/Vue sin ralentizar el sprint',
                'description'      => 'Guía práctica para implementar accesibilidad web (a11y) en proyectos React y Vue: qué atributos ARIA son obligatorios, cómo cumplir WCAG 2.2 nivel AA y cómo integrar los checks en el flujo de desarrollo sin convertirlo en una tarea de refactoring eterna.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineer senior especializado en accesibilidad web con experiencia auditando y remediando productos digitales bajo WCAG 2.2. Tu objetivo es ayudarme a implementar accesibilidad de forma pragmática en mi proyecto [React/Vue — indica cuál usas], priorizando los cambios de mayor impacto y mínima fricción para el sprint.

---

## CONTEXTO: POR QUÉ A11Y NO ES OPCIONAL

La accesibilidad web afecta a aproximadamente el 15% de la población mundial con alguna discapacidad. Además:
- En la UE, la Directiva de Accesibilidad Web (WAD) obliga a organismos públicos y empresas con más de 250 empleados desde 2023
- Los lectores de pantalla (NVDA, VoiceOver, JAWS) son usados por millones de personas con discapacidad visual
- La accesibilidad bien implementada mejora el SEO y la UX para todos los usuarios

---

## MÓDULO 1 — LOS 4 PRINCIPIOS WCAG (POUR)

WCAG 2.2 se estructura en 4 principios. Estos son los criterios de nivel AA más frecuentemente incumplidos:

### Perceptible
- **1.1.1** Alt text en imágenes (excepto decorativas: `alt=""`)
- **1.3.1** Información transmitida solo por color (error states, gráficos)
- **1.4.3** Contraste mínimo 4.5:1 texto normal, 3:1 texto grande (> 18px bold o > 24px)
- **1.4.4** El texto debe poder ampliarse 200% sin pérdida de funcionalidad

### Operable
- **2.1.1** Toda funcionalidad accesible por teclado (Tab, Enter, Espacio, flechas)
- **2.4.3** Orden de foco lógico (no saltar del header al footer sin pasar por el contenido)
- **2.4.7** Foco visible — el outline no puede ser `outline: none` sin reemplazarlo
- **2.5.3** El label visible de un control debe estar en su accessible name

### Comprensible
- **3.1.1** Idioma de la página declarado (`<html lang="es">`)
- **3.3.1** Errores de formulario identificados en texto, no solo con color
- **3.3.2** Labels visibles en todos los campos de formulario

### Robusto
- **4.1.2** Todos los componentes UI tienen name, role y value programáticos

---

## MÓDULO 2 — ARIA ROLES: CUÁNDO USARLOS (Y CUÁNDO NO)

### Regla número uno: HTML nativo primero

```html
<!-- MAL: ARIA innecesario sobre elemento semántico -->
<button role="button" aria-label="Enviar">Enviar</button>

<!-- BIEN: El elemento nativo ya tiene el rol implícito -->
<button>Enviar</button>
```

### Cuándo SÍ necesitas ARIA

**Widgets interactivos sin equivalente HTML nativo:**

```jsx
// Dropdown personalizado
<div
  role="combobox"
  aria-expanded={isOpen}
  aria-haspopup="listbox"
  aria-controls="dropdown-list"
  aria-activedescendant={selectedId}
>
  {/* trigger */}
</div>
<ul role="listbox" id="dropdown-list">
  {options.map(opt => (
    <li role="option" aria-selected={opt.id === selectedId} id={opt.id}>
      {opt.label}
    </li>
  ))}
</ul>
```

**Tabla de los roles ARIA más usados en componentes SPA:**

| Patrón UI | Role(s) ARIA | Estados dinámicos |
|-----------|-------------|-------------------|
| Modal/Dialog | `role="dialog"` + `aria-modal="true"` | `aria-hidden` en el resto del DOM |
| Toast/Alert | `role="alert"` o `role="status"` | Se anuncia al insertar en el DOM |
| Tab panel | `role="tablist"`, `role="tab"`, `role="tabpanel"` | `aria-selected`, `aria-controls` |
| Accordion | `role="button"` (en trigger), región | `aria-expanded` |
| Progress bar | `role="progressbar"` | `aria-valuenow`, `aria-valuemin`, `aria-valuemax` |
| Loading spinner | `role="status"` + `aria-live="polite"` | Texto para lectores de pantalla |

---

## MÓDULO 3 — PATRONES REACT/VUE DE ALTA FRECUENCIA

### 3.1 Gestión del foco en modales (React)

```jsx
import { useRef, useEffect } from 'react';

function Modal({ isOpen, onClose, title, children }) {
  const modalRef = useRef(null);
  const previousFocusRef = useRef(null);

  useEffect(() => {
    if (isOpen) {
      previousFocusRef.current = document.activeElement;
      modalRef.current?.focus();
    } else {
      previousFocusRef.current?.focus();
    }
  }, [isOpen]);

  if (!isOpen) return null;

  return (
    <div
      role="dialog"
      aria-modal="true"
      aria-labelledby="modal-title"
      ref={modalRef}
      tabIndex={-1}
      onKeyDown={e => e.key === 'Escape' && onClose()}
    >
      <h2 id="modal-title">{title}</h2>
      {children}
      <button onClick={onClose}>Cerrar</button>
    </div>
  );
}
```

### 3.2 Formularios accesibles con mensajes de error

```jsx
function AccessibleInput({ id, label, error, ...props }) {
  const errorId = `${id}-error`;
  return (
    <div>
      <label htmlFor={id}>{label}</label>
      <input
        id={id}
        aria-describedby={error ? errorId : undefined}
        aria-invalid={!!error}
        {...props}
      />
      {error && (
        <span id={errorId} role="alert">
          {error}
        </span>
      )}
    </div>
  );
}
```

### 3.3 Anuncios dinámicos con live regions

```jsx
// Para anuncios que no deben interrumpir (polite) o sí (assertive)
function LiveRegion({ message, politeness = 'polite' }) {
  return (
    <div
      aria-live={politeness}
      aria-atomic="true"
      className="sr-only" // visually hidden pero en el DOM
    >
      {message}
    </div>
  );
}

// CSS para sr-only
// .sr-only { position: absolute; width: 1px; height: 1px;
//   padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0);
//   white-space: nowrap; border-width: 0; }
```

---

## MÓDULO 4 — INTEGRACIÓN EN EL FLUJO DE DESARROLLO

### 4.1 Checks automáticos en CI/CD

```bash
# Instala axe-core con testing library
npm install --save-dev @axe-core/react jest-axe

# Test de accesibilidad en Jest
import { axe, toHaveNoViolations } from 'jest-axe';
expect.extend(toHaveNoViolations);

test('Modal no tiene violaciones a11y', async () => {
  const { container } = render(<Modal isOpen title="Test" onClose={() => {}} />);
  const results = await axe(container);
  expect(results).toHaveNoViolations();
});
```

### 4.2 Extensiones de navegador para audit manual

1. **axe DevTools** (Chrome/Firefox) — el estándar de la industria
2. **Lighthouse** — incluida en Chrome DevTools, genera un score de accesibilidad
3. **WAVE** — muestra errores y alertas overlay en la página real

### 4.3 Checklist de PR para a11y

```markdown
## Checklist de accesibilidad (obligatorio en PRs con UI)
- [ ] Todos los elementos interactivos son accesibles por Tab y activables con Enter/Espacio
- [ ] Los modales gestionan el foco correctamente (trap + restore)
- [ ] Los errores de formulario se comunican con aria-describedby + aria-invalid
- [ ] No hay `outline: none` sin replacement visible
- [ ] El contraste de texto supera 4.5:1 (verificado con Colour Contrast Analyser)
- [ ] Los iconos decorativos tienen aria-hidden="true"
- [ ] Las imágenes informativas tienen alt text descriptivo
- [ ] axe DevTools no reporta violaciones críticas ni serias
```

---

## ENTREGABLE

Dado mi componente [PEGA AQUÍ EL CÓDIGO DE TU COMPONENTE], realiza:
1. Audit completo de violaciones WCAG 2.2 nivel AA con severidad (crítica/seria/moderada)
2. Versión corregida del componente con comentarios explicativos
3. Tests de accesibilidad con jest-axe
4. Lista de las 3 mejoras de mayor impacto que debería priorizar esta semana

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar accesibilidad web (a11y) en proyectos React o Vue siguiendo WCAG 2.2 nivel AA con patrones de código reutilizables y checklist de PR.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design critique — cómo dar y recibir feedback de diseño constructivo en equipo sin que se convierta en un debate de gustos',
                'description'      => 'Framework para estructurar sesiones de design critique que producen decisiones claras y mejoran el diseño, no el ego. Incluye roles, formato de sesión, lenguaje concreto para dar feedback y cómo separar preferencias personales de problemas reales de UX.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia facilitando design critiques en equipos de producto. Ayúdame a preparar y facilitar una sesión de design critique efectiva para mi equipo, y a desarrollar el lenguaje y los hábitos que convierten el feedback en una herramienta de mejora en lugar de un campo de batalla de opiniones.

---

## EL PROBLEMA REAL DEL DESIGN CRITIQUE

La mayoría de los design critiques fallan por tres razones:
1. **Sin contexto**: el reviewer juzga un diseño sin saber el problema que resuelve
2. **Sin criterio**: el feedback es "me gusta / no me gusta" en vez de "cumple / no cumple el objetivo"
3. **Sin estructura**: la conversación deriva en preferencias personales, no en decisiones

El resultado: el designer defiende su trabajo, no lo mejora. El reviewer siente que su aportación no sirve. Y el producto no avanza.

---

## MÓDULO 1 — ANTES DE LA SESIÓN: CONTEXTO ES TODO

### El briefing del designer (5 minutos antes de mostrar cualquier pantalla)

El designer presenta obligatoriamente en este orden:

```
1. PROBLEMA: "El usuario no puede / no sabe / se frustra cuando..."
2. OBJETIVO: "Queremos que el usuario pueda [acción] de forma [adjetivo]"
3. RESTRICCIONES: "No podemos hacer X porque... / El componente X ya existe"
4. MÉTRICAS: "El éxito se mide con [métrica] que hoy está en [valor]"
5. LO QUE BUSCO HOY: "Necesito feedback específico sobre [área], NO sobre [área fuera de scope]"
```

Este briefing elimina el 70% de los comentarios fuera de scope porque establece el criterio antes de que alguien opine.

---

## MÓDULO 2 — ROLES EN EL CRITIQUE

| Rol | Quién | Responsabilidad |
|-----|-------|-----------------|
| **Presenter** | Designer del trabajo | Presenta contexto, escucha, NO defiende |
| **Facilitator** | Design lead o PM | Mantiene el tiempo, gestiona tangentes, cierra decisiones |
| **Reviewers** | Equipo (1-6 personas óptimo) | Dan feedback estructurado, hacen preguntas |
| **Notetaker** | Rotativo | Captura feedback + decisiones (no opiniones) |

**Regla de oro para el Presenter**: durante el critique, tu única tarea es hacer preguntas, no justificar. Si alguien señala un problema, responde "¿puedes describirme qué esperabas ver?" en vez de "lo hice así porque...".

---

## MÓDULO 3 — LENGUAJE PARA FEEDBACK CONSTRUCTIVO

### El framework "I like, I wish, What if" (para empezar)

```
I like (observación positiva específica):
"Me gusta que el CTA principal tiene contraste suficiente y ocupa el primer viewport"

I wish (problema desde la perspectiva del usuario):
"Ojalá el usuario pudiera entender qué pasa después de hacer clic antes de hacerlo"

What if (propuesta abierta, no prescriptiva):
"¿Y si mostramos una preview del resultado en el hover del botón?"
```

### Frases que abren conversaciones vs. frases que las cierran

| Cierra el diálogo (evitar) | Abre el diálogo (usar) |
|----------------------------|------------------------|
| "Esto no me gusta" | "¿Qué problema resuelve esta decisión?" |
| "Yo lo haría diferente" | "¿Hay otra forma de que el usuario entienda X?" |
| "El color está mal" | "El contraste en mobile puede no superar 4.5:1, ¿lo hemos revisado?" |
| "Esto parece [app competidora]" | "¿Qué nos diferencia de [app] en este flujo?" |
| "No sé, algo no me convence" | "¿Puedes señalarme exactamente qué elemento te genera esa sensación?" |

### La pregunta que separa preferencia de problema

Ante cualquier comentario de tipo "no me gusta / parece raro / se ve pesado", el facilitador pregunta:

> **"¿Qué tarea del usuario crees que este elemento dificulta?"**

Si el reviewer no puede responder esa pregunta, el feedback es una preferencia personal y se registra como tal (no como bloqueante).

---

## MÓDULO 4 — ESTRUCTURA DE UNA SESIÓN DE 60 MINUTOS

```
00:00 - 05:00  Setup y briefing del designer
               (problema, objetivo, restricciones, qué feedback busca)

05:00 - 10:00  Observación silenciosa
               Cada reviewer escribe sus notas individualmente
               SIN hablar — evita el sesgo de anclaje al primer comentario

10:00 - 30:00  Ronda de feedback estructurado
               Cada reviewer comparte 1-2 observaciones con el formato:
               "Observo que [elemento] → creo que el usuario [consecuencia]
               → porque [principio de diseño o dato de investigación]"

30:00 - 45:00  Discusión de los 3 temas de mayor impacto
               El facilitador prioriza los temas, no los reviewers

45:00 - 55:00  Decisiones explícitas
               Para cada tema: ¿qué cambiamos? ¿quién lo hace? ¿para cuándo?

55:00 - 60:00  Retrospectiva express del critique
               ¿Qué funcionó? ¿Qué cambiaríamos de la sesión?
```

---

## MÓDULO 5 — CÓMO CATEGORIZAR EL FEEDBACK

El notetaker clasifica cada feedback en una de estas categorías:

| Categoría | Descripción | Prioridad |
|-----------|-------------|-----------|
| **Bloqueante** | Impide que el usuario complete la tarea | Crítica |
| **Problema UX** | Dificulta la tarea pero no la impide | Alta |
| **Inconsistencia** | Rompe el design system o el patrón establecido | Media |
| **Mejora visual** | Refinamiento estético dentro de los criterios | Baja |
| **Preferencia personal** | Sin impacto en el usuario | No accionable |

Solo los tres primeros tipos generan tareas en el backlog. Los dos últimos se registran como contexto pero no bloquean la entrega.

---

## MÓDULO 6 — GESTIONAR LOS STAKEHOLDERS FUERA DEL EQUIPO DE DISEÑO

Cuando alguien de negocio o ingeniería opina sobre diseño sin el contexto del usuario:

**Técnica del "¿y el usuario?"**:
> "Interesante punto. ¿Qué crees que haría el usuario si ve esto por primera vez sin ningún contexto?"

Esta pregunta desplaza la conversación de la opinión personal al impacto en el usuario, que es el único criterio que importa.

---

## ENTREGABLE

Con la información de mi próximo critique [describe el diseño, el contexto y el equipo]:
1. Guión del briefing para el designer (adaptado a mi contexto)
2. 5 preguntas de critique específicas para el diseño que voy a presentar
3. Plantilla de notas para el notetaker
4. Correo de invitación a la sesión con instrucciones claras de preparación

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Facilitar sesiones de design critique estructuradas que producen feedback accionable y decisiones claras en equipos de producto.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'MEDDPICC — el framework de calificación de oportunidades enterprise que evita cerrar deals que no van a cerrar',
                'description'      => 'Aprende a calificar oportunidades enterprise con MEDDPICC: identifica qué deals tienen posibilidades reales de cerrarse, descubre los criterios de decisión ocultos, localiza al economic buyer y evita perder meses en procesos que no avanzan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas enterprise con 10 años de experiencia en ciclos de venta complejos B2B (6-18 meses, múltiples stakeholders, tickets de 50k€ en adelante). Ayúdame a aplicar MEDDPICC de forma rigurosa a mis oportunidades actuales para identificar cuáles tienen posibilidades reales de cerrarse y en cuáles estoy desperdiciando el tiempo.

---

## QUÉ ES MEDDPICC Y POR QUÉ IMPORTA

MEDDPICC es el framework de sales qualification más usado en ventas enterprise. Surgió en PTC en los 90 y fue adoptado por empresas como Salesforce, Datadog y Snowflake. Su poder está en hacer explícito todo lo que normalmente ignoramos porque "la relación va bien" o "el deal parece avanzar".

Un deal que no puedes calificar completamente en MEDDPICC NO VA A CERRAR en el plazo que tienes en tu forecast.

---

## LOS 8 ELEMENTOS DE MEDDPICC

### M — Metrics (Métricas)
*¿Cuál es el impacto económico cuantificado de resolver el problema?*

Sin métricas, el comprador no puede justificar la inversión internamente. Sin justificación interna, el deal muere en comité de compras.

**Preguntas para descubrirlas:**
- "¿Cuánto os está costando hoy este problema? ¿En tiempo, dinero, personas?"
- "Si lo resolvéis, ¿qué métrica mejora y en cuánto?"
- "¿Cómo medís el éxito de una inversión de este tipo?"

**Template de ROI case:**
```
Situación actual: [problema] cuesta [X€/tiempo/recursos] al mes/año
Con nuestra solución: reducimos ese coste un [Y%]
ROI en [Z meses]: [cálculo específico]
Payback: [período de recuperación]
```

### E — Economic Buyer (Comprador económico)
*¿Quién firma el cheque y tiene autoridad para decir SÍ sin pedir permiso a nadie más?*

El champion no es el economic buyer. El manager que usa el producto no es el economic buyer. El CFO o el VP con presupuesto son el economic buyer.

**Señales de que NO has encontrado al Economic Buyer:**
- "Tengo que consultarlo con mi jefe"
- "Necesitamos que pase por el comité de compras"
- "El presupuesto no está aprobado aún"

**Cómo acceder a él:**
> "Para poder construir el business case que necesitáis internamente, me ayudaría hablar directamente con la persona que tiene autoridad sobre el presupuesto. ¿Podrías presentarme a [nombre/cargo]?"

### D — Decision Criteria (Criterios de decisión)
*¿Con qué criterios van a elegir entre las opciones disponibles?*

Hay criterios explícitos (los que te dicen) y criterios implícitos (los que realmente importan). Tu trabajo es descubrir ambos.

**Preguntas:**
- "¿Cuáles son los 3 criterios más importantes para tomar esta decisión?"
- "¿Qué haría que descartarais una solución aunque fuese buena?"
- "¿Tenéis un RFP / RFI formal? ¿Puedo verlo?"

### D — Decision Process (Proceso de decisión)
*¿Cómo toman la decisión exactamente, quién interviene en cada paso y qué puede matarla?*

El proceso de decisión suele tener más pasos de los que el champion sabe o te dice.

**Mapa del proceso de decisión:**
```
Paso 1: [acción] → Responsable: [nombre/cargo] → Timeline: [fecha]
Paso 2: [acción] → Responsable: [nombre/cargo] → Timeline: [fecha]
Paso 3: Aprobación final → Responsable: Economic Buyer → Timeline: [fecha]

Posibles blockers: [departamento legal, IT security, procurement...]
```

### P — Paper Process (Proceso de contratos)
*¿Cuánto tarda el proceso de contratos, quién lo aprueba y qué puede retrasarlo?*

Este es el elemento más subestimado. En enterprise, el proceso legal/procurement puede durar entre 2 semanas y 3 meses.

**Preguntas para el champion:**
- "¿Cómo es el proceso de firma de contratos en vuestra organización?"
- "¿Procurement revisa todos los contratos? ¿Tienen un vendor approval process?"
- "¿Habéis contratado a proveedores nuevos recientemente? ¿Cuánto tardó?"

### I — Identify Pain (Identificar el dolor)
*¿Cuál es el problema real, quién lo sufre y con qué urgencia necesitan resolverlo?*

Si el dolor no es lo suficientemente agudo, el comprador encontrará razones para no decidir. "Interesante" no es suficiente. "Necesitamos resolver esto antes de Q2 porque si no..." sí lo es.

**Los tres niveles de dolor:**
1. **Dolor latente**: el cliente no sabe que tiene el problema
2. **Dolor activo**: sabe que tiene el problema pero no ha priorizado resolverlo
3. **Dolor urgente**: tiene que resolverlo ya o hay consecuencias concretas

Solo los deals con dolor urgente cierran en el plazo previsto.

### C — Champion (Campeón)
*¿Quién dentro de la organización va a vender tu solución internamente cuando tú no estás en la sala?*

El champion tiene tres características:
1. Tiene acceso al Economic Buyer
2. Tiene influencia en el proceso de decisión
3. Se beneficia personalmente del éxito de la implementación

**Test del champion:**
> "¿Estarías dispuesto a presentar internamente a tu equipo directivo el business case que hemos construido juntos?"

Si duda, no es tu champion. Si acepta, lo es.

### C — Competition (Competencia)
*¿Con quién compites, cuál es su posición y cuál es la tuya?*

La competencia no es solo otra empresa. Puede ser la solución interna, el status quo ("lo seguimos haciendo a mano") o simplemente la inacción.

**Mapa competitivo:**
| Competidor | Su fortaleza | Su debilidad | Tu ventaja diferencial |
|------------|-------------|--------------|----------------------|
| [Competidor 1] | [X] | [Y] | [Z] |
| Status quo | [X] | [Y] | [Z] |

---

## SCORECARD DE CALIFICACIÓN

Para cada elemento, puntúa del 1 al 3:
- **3**: completamente descubierto y documentado
- **2**: parcialmente conocido, necesito más información
- **1**: no lo sé / no está claro

| Elemento | Puntuación | Próxima acción |
|----------|-----------|----------------|
| Metrics | /3 | |
| Economic Buyer | /3 | |
| Decision Criteria | /3 | |
| Decision Process | /3 | |
| Paper Process | /3 | |
| Identify Pain | /3 | |
| Champion | /3 | |
| Competition | /3 | |
| **TOTAL** | **/24** | |

**Interpretación:**
- 20-24: Deal sólido, sigue avanzando
- 14-19: Gaps críticos, no pongas fecha de cierre hasta resolverlos
- < 14: No está en condiciones de entrar en el forecast

---

## ENTREGABLE

Para mi oportunidad actual [describe el deal: empresa, sector, solución, ticket estimado, contactos, estado actual]:
1. MEDDPICC completo con lo que sé y los gaps identificados
2. Las 5 preguntas más importantes que tengo que hacer en la próxima reunión
3. Plan de acción de 2 semanas para calificar los elementos que faltan
4. Recomendación: ¿debe estar en el forecast de este trimestre? ¿Por qué?

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calificar oportunidades de venta enterprise con MEDDPICC para construir un forecast preciso y evitar invertir tiempo en deals que no van a cerrar.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Platform product management — gestionar productos con múltiples tipos de usuario con intereses opuestos',
                'description'      => 'Framework para product managers que trabajan en plataformas con dos o más tipos de usuario (compradores/vendedores, creadores/consumidores, empresas/trabajadores): cómo equilibrar sus intereses en tensión, qué métricas priorizar y cómo estructurar la roadmap cuando cada decisión afecta a ambos lados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en plataformas de dos o más lados (marketplaces, plataformas SaaS con múltiples roles, redes con efectos de red). Ayúdame a resolver los retos específicos de gestionar un producto donde las necesidades de distintos tipos de usuario están frecuentemente en tensión.

---

## EL RETO ÚNICO DEL PLATFORM PM

En un producto de un solo tipo de usuario, optimizas para ese usuario. En una plataforma, cada decisión que tomas para un lado afecta al otro. Las tensiones más comunes:

- **Precio**: más comisión para la plataforma → proveedores menos satisfechos → menos oferta → compradores insatisfechos
- **Calidad**: filtros más estrictos para proveedores → más calidad para compradores → menos oferta disponible
- **Velocidad**: más fricción en el onboarding del lado B → más calidad → menos velocidad de crecimiento de oferta

Tu trabajo no es hacer feliz a un lado. Es encontrar el equilibrio que maximiza el valor total de la plataforma.

---

## MÓDULO 1 — MAPEAR LOS DOS (O MÁS) LADOS

### Canvas de stakeholders de plataforma

Para cada tipo de usuario, mapea:

```
LADO A: [Nombre del segmento — ej. Compradores]
├── Job to be done principal: "Cuando [situación], quiero [acción] para [resultado]"
├── Métricas de éxito desde su perspectiva: [qué miden ellos]
├── Fricciones actuales: [qué les impide tener éxito]
├── Alternativas que consideran: [cómo lo hacen sin la plataforma]
└── Palancas de retención: [qué los mantiene en la plataforma]

LADO B: [Nombre del segmento — ej. Vendedores]
├── Job to be done principal: "Cuando [situación], quiero [acción] para [resultado]"
├── Métricas de éxito desde su perspectiva: [qué miden ellos]
├── Fricciones actuales: [qué les impide tener éxito]
├── Alternativas que consideran: [cómo lo hacen sin la plataforma]
└── Palancas de retención: [qué los mantiene en la plataforma]
```

---

## MÓDULO 2 — MÉTRICAS DE PLATAFORMA

### Las métricas que importan en una plataforma de dos lados

| Categoría | Métrica | Descripción |
|-----------|---------|-------------|
| **Liquidez** | Match rate | % de búsquedas que resultan en una transacción |
| **Liquidez** | Time to match | Tiempo desde que el lado A llega hasta que encuentra al lado B |
| **Oferta** | Supply quality score | Rating promedio / tasa de éxito de los proveedores |
| **Demanda** | Demand repeat rate | % de compradores que repiten en 90 días |
| **Red** | GMV growth rate | Crecimiento del valor bruto de las transacciones |
| **Salud** | Take rate | % de comisión que retiene la plataforma |
| **Salud** | NPS por lado | NPS separado para cada tipo de usuario |

**El error más común**: optimizar solo el GMV sin medir la satisfacción diferencial por lado. Una plataforma con GMV creciente pero NPS de vendedores en caída tiene un problema de oferta que tardará 6-12 meses en materializarse como problema de negocio.

---

## MÓDULO 3 — FRAMEWORK PARA DECISIONES EN TENSIÓN

Cuando una decisión beneficia a un lado y perjudica al otro, usa este framework:

### Paso 1: Cuantifica el impacto en cada lado
```
Decisión: [describe la decisión]

Impacto en Lado A:
- Positivo: [qué mejora, cuánto]
- Negativo: [qué empeora, cuánto]
- % de usuarios de Lado A afectados: [X%]

Impacto en Lado B:
- Positivo: [qué mejora, cuánto]
- Negativo: [qué empeora, cuánto]
- % de usuarios de Lado B afectados: [Y%]
```

### Paso 2: Evalúa el impacto en la liquidez de la plataforma
La pregunta clave no es "¿quién gana?" sino "¿esta decisión aumenta o reduce el número de matches exitosos en la plataforma?"

### Paso 3: Considera los efectos de red a largo plazo
Una plataforma tiene efectos de red cuando más usuarios de un lado hacen más valioso el otro lado. Una decisión que reduce la oferta hoy puede destruir valor de red durante meses.

### Paso 4: Decide con criterio explícito
```
Decisión: [X]
Fundamento: "Priorizamos [Lado A / Lado B] en este caso porque [razón basada en datos]"
Mitigación para el lado perdedor: [qué haremos para reducir el impacto negativo]
Plazo de revisión: [cuándo revisaremos si la decisión fue correcta]
```

---

## MÓDULO 4 — ROADMAP EN PLATAFORMAS

### Estructura de roadmap por lado

Un error común es tener una roadmap única. Las plataformas maduras tienen roadmaps diferenciadas:

```
Q[X] ROADMAP

LADO A (Compradores):
- Epic 1: [mejora de la experiencia de búsqueda] → impacto en Match Rate
- Epic 2: [checkout simplificado] → impacto en Conversion Rate

LADO B (Vendedores):
- Epic 1: [dashboard de analytics] → impacto en Supply Quality
- Epic 2: [herramientas de gestión de inventario] → impacto en Supply retention

PLATAFORMA (impacta a ambos):
- Epic 1: [mejora del algoritmo de matching] → impacto en Time to Match
- Epic 2: [sistema de reviews y reputación] → impacta a ambos lados
```

### Cómo priorizar cuando tienes recursos limitados

Usa este criterio de desempate cuando no puedes financiar iniciativas de ambos lados:

**Prioriza el lado que actualmente es el cuello de botella de la liquidez.**

Si tienes más demanda que oferta → invierte en el Lado B (oferta)
Si tienes más oferta que demanda → invierte en el Lado A (demanda)
Si están equilibrados → prioriza la plataforma (matching, confianza, pagos)

---

## MÓDULO 5 — GESTIÓN DE STAKEHOLDERS INTERNOS

En empresas que desarrollan plataformas, los equipos de ventas y customer success suelen estar organizados por lado (un equipo para vendedores, otro para compradores). Esto crea silos donde cada equipo solo defiende a su lado.

**Cómo gestionarlo:**
1. Reuniones de alineación cross-side mensuales donde se presentan las métricas de ambos lados
2. OKRs de plataforma que son compartidos entre los equipos (no solo métricas de un lado)
3. Escalaciones de decisiones en tensión al PM de plataforma, no a los equipos de lado

---

## ENTREGABLE

Para mi plataforma [describe brevemente: qué hace, los tipos de usuario, el estado actual]:
1. Canvas de stakeholders completo para cada lado
2. Las 3 tensiones más críticas que necesito resolver y el framework de decisión para cada una
3. Dashboard de métricas de plataforma con las 5 métricas prioritarias para mi contexto
4. Estructura de roadmap Q[próximo trimestre] con iniciativas por lado y de plataforma

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar un producto de plataforma con múltiples tipos de usuario en tensión, con framework de decisión, métricas diferenciadas y estructura de roadmap por lado.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Compensación ejecutiva — diseña el paquete retributivo para C-suite y directivos con base, variable y equity',
                'description'      => 'Framework para diseñar o revisar la compensación de perfiles C-suite y directivos senior: cómo establecer la banda salarial de base, estructurar el variable anual con KPIs relevantes y diseñar el paquete de equity (opciones, RSU, phantom shares) alineado con los intereses de los accionistas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de compensación ejecutiva con experiencia en startups en fase de crecimiento y empresas medianas. Ayúdame a diseñar o revisar el paquete de compensación total para un perfil [especifica el cargo: CEO/CTO/CMO/CFO/otro] con el contexto de mi empresa [fase, sector, tamaño].

---

## POR QUÉ LA COMPENSACIÓN EJECUTIVA ES DIFERENTE

A diferencia de la compensación de empleados, la compensación ejecutiva debe:
1. **Atraer talento escaso**: hay pocos buenos C-suite y todos tienen ofertas
2. **Retener durante los años críticos**: el vesting típico cubre 3-4 años de los más importantes del ciclo de la empresa
3. **Alinear incentivos**: el ejecutivo debe ganar cuando la empresa gana, y no ganar cuando la empresa no gana
4. **Ser transparente con el board**: cada componente debe ser justificable ante inversores

---

## MÓDULO 1 — BENCHMARKING DE MERCADO

### Fuentes de datos por tipo de empresa

| Tipo de empresa | Fuentes recomendadas |
|-----------------|---------------------|
| Startup early-stage (< Serie A) | Levels.fyi, Radford (startups), AngelList salary data |
| Startup growth (Serie A-C) | Radford, Mercer, encuestas de asociaciones locales de VC |
| PYME establecida | Mercer, Hay Group, encuestas sectoriales de CEOE/AEDIPE |
| Empresa cotizada | Proxy statements públicos de empresas comparables |

### Variables de ajuste del benchmark

El percentil de mercado que deberías pagar depende de:
- **P25-P50**: empresa en fase temprana, alta incertidumbre, equity compensatorio alto
- **P50-P75**: empresa establecida con liquidez, equity complementario
- **P75-P90**: empresa madura que compite con multinacionales por talento

---

## MÓDULO 2 — SALARIO BASE

### Principios de la base ejecutiva

La base cubre el coste de vida del ejecutivo. No es el incentivo principal — para eso está el variable y el equity.

**Rango típico por fase en España (2024-2025):**

| Cargo | Startup < Serie B | Serie B-C / PYME | Empresa > 50M€ ARR |
|-------|-------------------|------------------|--------------------|
| CEO | 80.000-130.000€ | 130.000-200.000€ | 200.000-350.000€ |
| CTO | 90.000-140.000€ | 140.000-190.000€ | 190.000-280.000€ |
| CMO | 70.000-110.000€ | 110.000-160.000€ | 160.000-240.000€ |
| CFO | 75.000-120.000€ | 120.000-170.000€ | 170.000-260.000€ |

*Nota: rangos orientativos para Madrid/Barcelona. Ajusta -15-20% para otras ciudades.*

### Revisión anual de la base

Establece un proceso de revisión anual ligado a:
1. Evolución del mercado salarial (inflación + ajuste sectorial)
2. Rendimiento individual (evaluación del board/CEO)
3. Cambios en el scope del rol (más reportes directos, internacionalización)

---

## MÓDULO 3 — VARIABLE ANUAL (BONUS EJECUTIVO)

### Estructura del variable

El variable ejecutivo típico oscila entre el 20% y el 60% del salario base, y se divide en:

**Componente corporativo (50-60% del variable):**
Métricas de empresa que el ejecutivo puede influir pero no controlar solo:
- ARR / Revenue
- EBITDA / margen operativo
- NPS de clientes
- Hitos de producto/tecnología

**Componente individual (40-50% del variable):**
Objetivos específicos del rol que el ejecutivo controla directamente.

### Template de acuerdo de variable ejecutivo

```
ACUERDO DE RETRIBUCIÓN VARIABLE — [CARGO] — [AÑO]

Objetivo máximo: [X€] ([Y%] del salario base)

COMPONENTE CORPORATIVO ([60%] del variable = [A€])
Condición de trigger: Solo se paga si la empresa alcanza > [70%] del objetivo de ARR

  Métrica 1: ARR anual
  - Objetivo: [X€]
  - Pago al 100%: si ARR ≥ [X€]
  - Pago proporcional: entre [80%-100%] del objetivo
  - Sin pago: si ARR < [80%] del objetivo

  Métrica 2: [Otra métrica corporativa]
  [misma estructura]

COMPONENTE INDIVIDUAL ([40%] del variable = [B€])
  Objetivo 1: [descripción específica y medible]
  Peso: [X%]

  Objetivo 2: [descripción específica y medible]
  Peso: [Y%]

CONDICIONES:
- Pago en [fecha] tras cierre del ejercicio y aprobación del board
- El ejecutivo debe estar activo en la empresa en la fecha de pago
- En caso de salida voluntaria antes del [fecha de evaluación], se pierde el variable
```

---

## MÓDULO 4 — EQUITY

### Los tres tipos de equity en España

**Stock Options (opciones sobre acciones):**
- Derecho a comprar acciones a un precio fijo (strike price = valor de la acción en la fecha de concesión)
- El beneficio se produce si la empresa vale más en el futuro que el strike price
- Tributación en España: al ejercicio (IRPF como rendimiento del trabajo, salvo exenciones del art. 42.3a LIRPF hasta 12.000€/año)
- Más común en startups

**RSU (Restricted Stock Units):**
- Unidades de acciones que se entregan gratuitamente según un calendario de vesting
- Sin coste de ejercicio para el ejecutivo
- Tributación al vest (valor de mercado × unidades vest = rendimiento del trabajo)
- Más común en empresas con valoración alta

**Phantom Shares (participaciones fantasma):**
- No son acciones reales — son un derecho a cobrar en efectivo el equivalente al valor de X participaciones en un evento de liquidez (venta, IPO)
- No requieren notaría, son más flexibles para SL
- Tributación: rendimiento del trabajo cuando se cobran
- Muy usadas en PYMEs y startups en fase temprana

### Estructura de vesting estándar

```
Cliff: 12 meses (si el ejecutivo sale antes del año 1, pierde todo)
Vesting total: 4 años
Mecanismo: 25% al año 1 (cliff), luego vesting mensual del 75% restante
           (2,0833% de las opciones totales por mes, meses 13-48)

Ejemplo: 100.000 opciones a 4 años
- Mes 12: 25.000 opciones vest (el cliff)
- Mes 13-48: 2.083 opciones/mes
- Mes 48: 100% de las opciones han hecho vest
```

### Cláusulas de aceleración

**Single trigger**: si la empresa se vende, el 100% (o un porcentaje) de las opciones no vested hacen vest automáticamente.

**Double trigger**: el vesting se acelera solo si la empresa se vende Y el ejecutivo es despedido sin causa en los siguientes 12 meses (más habitual, protege al inversor).

---

## ENTREGABLE

Para el cargo [especifica] en mi empresa [describe: fase, ARR, número de empleados, sector, inversores]:
1. Propuesta de compensación total (base + variable + equity) con justificación de mercado
2. Borrador de acuerdo de variable con métricas específicas y ponderación
3. Recomendación de tipo de equity con estructura de vesting y tamaño del pool
4. Preguntas que debo hacer al candidato para validar sus expectativas antes de la negociación

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar el paquete de compensación total para perfiles C-suite y directivos senior, incluyendo base, variable con KPIs y equity estructurado.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de sensibilidad y punto muerto — determina qué variables tienen más impacto en la rentabilidad y cuándo dejas de perder dinero',
                'description'      => 'Aprende a construir un análisis de sensibilidad y calcular el punto muerto (break-even) de tu negocio o proyecto de inversión. Identifica las variables que más afectan a la rentabilidad, simula escenarios pesimistas y optimistas, y determina el volumen de ventas mínimo para cubrir costes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero senior con experiencia en modelización y análisis de viabilidad de negocios. Ayúdame a construir un análisis de sensibilidad completo y calcular el punto muerto de mi negocio/proyecto, para entender cuándo dejo de perder dinero y qué variables son las que más importa controlar.

---

## CONCEPTOS FUNDAMENTALES

### Punto muerto o Break-Even Point (BEP)

El punto muerto es el nivel de ventas en el que los ingresos igualan exactamente a los costes totales — ni ganas ni pierdes.

**Fórmula básica:**

```
BEP (unidades) = Costes Fijos Totales / Margen de Contribución por Unidad

Margen de Contribución por Unidad = Precio de Venta Unitario - Coste Variable Unitario

BEP (€ de ingresos) = Costes Fijos Totales / Ratio de Margen de Contribución

Ratio de Margen de Contribución = Margen de Contribución por Unidad / Precio de Venta Unitario
```

### Ejemplo aplicado

```
Empresa SaaS:
- Plan mensual: 49€/mes
- Coste variable por cliente: 7€/mes (soporte + infraestructura)
- Margen de Contribución: 49 - 7 = 42€/cliente/mes
- Ratio Margen de Contribución: 42/49 = 85,7%
- Costes Fijos Mensuales: 35.000€ (equipo + oficina + herramientas)

BEP (clientes) = 35.000 / 42 = 834 clientes de pago
BEP (MRR) = 35.000 / 0,857 = 40.841€ de MRR
```

---

## MÓDULO 1 — IDENTIFICAR TUS COSTES

### Clasificación correcta de costes

El mayor error en el cálculo del BEP es clasificar mal los costes.

| Tipo | Definición | Ejemplos | Error común |
|------|------------|----------|-------------|
| **Fijo** | No cambia con el volumen | Alquiler, sueldos fijos, licencias anuales | Incluir costes que SÍ escalan |
| **Variable** | Crece proporcionalmente con cada venta | Comisiones, packaging, COGS, pago por uso | Olvidar costes de servicio al cliente |
| **Semivariable** | Tiene componente fijo + variable | Suministros, transporte, soporte escalable | Tratarlo como puramente fijo |

**Template de clasificación:**

```
COSTES FIJOS MENSUALES
Recursos humanos fijos: ________€
Alquiler/oficina: ________€
Software y herramientas: ________€
Marketing fijo (retainers, SEO): ________€
Seguros y servicios profesionales: ________€
TOTAL COSTES FIJOS: ________€

COSTES VARIABLES POR UNIDAD VENDIDA
COGS / coste de producción: ________€
Comisión de ventas: ________€
Coste de entrega/logística: ________€
Coste de servicio/onboarding: ________€
Pasarela de pago (% sobre precio): ________€
TOTAL COSTE VARIABLE POR UNIDAD: ________€
```

---

## MÓDULO 2 — ANÁLISIS DE SENSIBILIDAD

El análisis de sensibilidad responde a la pregunta: "¿Qué pasa con mi BEP si [variable] cambia un X%?"

### Paso 1: Identifica las variables clave

Las variables que más afectan al BEP son siempre las mismas:
1. Precio de venta (impacto alto)
2. Costes variables unitarios (impacto medio-alto)
3. Costes fijos totales (impacto medio)
4. Volumen de ventas (para calcular si superas el BEP)

### Paso 2: Construye la tabla de sensibilidad

**Tabla de sensibilidad — Precio vs. Costes Variables:**

| Precio \ Coste Variable | -20% CV | -10% CV | Base | +10% CV | +20% CV |
|------------------------|---------|---------|------|---------|---------|
| -20% precio | [BEP] | [BEP] | [BEP] | [BEP] | [BEP] |
| -10% precio | [BEP] | [BEP] | [BEP] | [BEP] | [BEP] |
| Precio base | [BEP] | [BEP] | **[BEP base]** | [BEP] | [BEP] |
| +10% precio | [BEP] | [BEP] | [BEP] | [BEP] | [BEP] |
| +20% precio | [BEP] | [BEP] | [BEP] | [BEP] | [BEP] |

**Interpretación**: las celdas con el BEP más bajo son los escenarios más favorables. Las celdas con el BEP más alto son los escenarios donde necesitas más ventas para sobrevivir.

### Paso 3: Análisis de tornado (impacto relativo de cada variable)

Calcula cuánto cambia el BEP cuando cada variable se mueve un ±10%:

```
Variable               BEP si -10%    BEP base    BEP si +10%    Rango
Precio de venta        [X unidades]   [Y unidades] [Z unidades]  [Z-X]
Coste variable         [X unidades]   [Y unidades] [Z unidades]  [Z-X]
Costes fijos           [X unidades]   [Y unidades] [Z unidades]  [Z-X]
```

La variable con mayor rango es la que más debes monitorizar y controlar.

---

## MÓDULO 3 — ESCENARIOS

### Los tres escenarios estándar

| Escenario | Precio | Volumen | Costes Variables | Costes Fijos |
|-----------|--------|---------|------------------|--------------|
| **Pesimista** | -15% | -30% | +10% | +5% |
| **Base** | 0% | 0% | 0% | 0% |
| **Optimista** | +10% | +40% | -5% | 0% |

Para cada escenario calcula:
- BEP en unidades y en €
- ¿Cuándo alcanzas el BEP dado el crecimiento previsto?
- Margen de seguridad: qué % puede caer el volumen antes de perder dinero
- Cash runway: cuántos meses de quema con las pérdidas del escenario pesimista

```
Margen de Seguridad = (Ventas Actuales - BEP) / Ventas Actuales × 100
Si es > 30%: negocio resiliente
Si es 10-30%: vigilar, no tiene mucho colchón
Si es < 10%: urgente aumentar ventas o reducir costes fijos
```

---

## MÓDULO 4 — BEP DINÁMICO PARA NEGOCIOS CON CRECIMIENTO

Para negocios SaaS o con ingresos recurrentes, el BEP no es un punto fijo sino un mes.

```
Mes | MRR | Clientes | Costes Fijos | Costes Variables | Resultado
 1  | [X] |   [N]   |     [CF]     |      [CV]        |  [R]
 2  | [X] |   [N]   |     [CF]     |      [CV]        |  [R]
...
N   | [X] |   [N]   |     [CF]     |      [CV]        |   0 ← BEP mensual
```

El BEP mensual es el mes en que por primera vez el resultado del mes es ≥ 0.

---

## ENTREGABLE

Para mi negocio/proyecto [describe: tipo de negocio, precio de venta, costes principales, situación actual]:
1. Cálculo del BEP en unidades y en € con tu modelo de costes
2. Tabla de sensibilidad precio × costes variables (5×5)
3. Análisis de tornado con las 3 variables más críticas para tu negocio
4. Tres escenarios (pesimista / base / optimista) con el mes de BEP en cada uno
5. Las 3 acciones prioritarias para reducir el BEP lo antes posible

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Calcular el punto muerto del negocio, construir análisis de sensibilidad y determinar qué variables tienen mayor impacto en la rentabilidad para tomar decisiones de pricing y costes.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cláusulas de no competencia y no solicitud en contratos laborales — cuándo son válidas en España y cómo redactarlas',
                'description'      => 'Guía práctica sobre las cláusulas de pacto de no competencia y no solicitud en contratos de trabajo en España: requisitos de validez, duración máxima, compensación obligatoria, qué pasa si el empleado las incumple y cómo redactarlas para que sean ejecutables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista especializado en derecho del trabajo en España. Ayúdame a entender los límites legales y los requisitos de validez de las cláusulas de no competencia y no solicitud en contratos laborales, y a redactar cláusulas ejecutables adaptadas a mi situación.

**AVISO LEGAL**: Este prompt es una guía orientativa. Para redactar contratos con efectos jurídicos, consulta siempre con un abogado laboralista colegiado.

---

## PACTO DE NO COMPETENCIA POSTCONTRACTUAL

### Marco legal

El pacto de no competencia postcontractual está regulado en el **artículo 21.2 del Estatuto de los Trabajadores (ET)**. Para ser válido debe cumplir TRES requisitos acumulativos:

### Requisito 1 — Interés empresarial efectivo

La empresa debe tener un **interés industrial o comercial legítimo** que justifique la restricción.

¿Qué cuenta como interés legítimo?
- Acceso del trabajador a información confidencial de clientes (carteras, precios, estrategia)
- Conocimiento de procesos productivos propietarios o tecnología diferencial
- Relaciones comerciales estratégicas que el trabajador gestionó directamente

¿Qué NO es interés legítimo?
- Simplemente querer evitar que el trabajador trabaje para la competencia sin más
- Proteger información que es conocimiento del sector (no de la empresa)

### Requisito 2 — Compensación económica adecuada

Debe existir una **compensación económica adecuada** para el trabajador. Sin compensación, el pacto es nulo.

La ley no fija un mínimo, pero la jurisprudencia del Tribunal Supremo establece como referencia:
- Restricción de 6 meses → mínimo 1-3 mensualidades de compensación
- Restricción de 1 año → mínimo 3-6 mensualidades
- Restricción de 2 años → 6-12 mensualidades o una mensualidad durante cada mes de vigencia

**Formas de pago**:
1. **Mensual durante la vigencia** (recomendado): el trabajador percibe X€/mes mientras dura la restricción
2. **Suma alzada al término**: cantidad única pagada al finalizar el contrato
3. **Mixta**: parte al finalizar + mensualidades durante la vigencia

### Requisito 3 — Duración máxima

| Tipo de trabajador | Duración máxima |
|--------------------|-----------------|
| Técnicos y cuadros | 2 años |
| Resto de trabajadores | 6 meses |

**Regla importante**: si se pacta una duración mayor, el pacto no es nulo en su totalidad — los tribunales reducen la duración al máximo legal y lo mantienen vigente por ese período.

---

## TEMPLATE DE CLÁUSULA DE NO COMPETENCIA POSTCONTRACTUAL

```
PACTO DE NO COMPETENCIA POSTCONTRACTUAL

D./Dña. [NOMBRE DEL TRABAJADOR], en adelante "el Trabajador", y [NOMBRE DE LA EMPRESA],
en adelante "la Empresa", acuerdan de forma expresa el siguiente pacto:

1. OBJETO
El Trabajador se compromete a no desarrollar, por cuenta propia o ajena,
actividades que sean total o parcialmente competidoras con las actividades
de la Empresa durante un período de [6 MESES / 1 AÑO / 2 AÑOS — ajusta
según categoría] contado desde la fecha de extinción de la relación laboral.

A los efectos de este pacto, se consideran actividades competidoras:
[DEFINE CLARAMENTE: por ejemplo, "el desarrollo y comercialización de
software de gestión de recursos humanos dirigido a empresas con más de
50 empleados en el territorio nacional"].

2. ÁMBITO TERRITORIAL
La restricción se aplica en el siguiente ámbito geográfico:
[ESPECIFICA: España / UE / comunidad autónoma — cuanto más amplio, más
difícil de justificar ante los tribunales].

3. COMPENSACIÓN ECONÓMICA
En contraprestación por este pacto, la Empresa abonará al Trabajador:
[OPCIÓN A]: La cantidad de [X€] mensuales durante el período de vigencia,
            que se abonarán en los primeros 5 días de cada mes natural.
[OPCIÓN B]: La cantidad alzada de [X€] en el momento de extinción del contrato.

4. RENUNCIA
La Empresa podrá renunciar al presente pacto mediante comunicación escrita
al Trabajador con [30 días] de antelación, en cuyo caso quedará liberada
del pago de la compensación correspondiente al período no transcurrido.

5. INCUMPLIMIENTO
El incumplimiento del presente pacto por parte del Trabajador facultará
a la Empresa para exigir la devolución de las cantidades percibidas en
concepto de compensación, así como la indemnización de los daños y
perjuicios acreditados.
```

---

## PACTO DE NO SOLICITUD (NON-SOLICITATION)

### Tipos de restricción de no solicitud

**No solicitud de clientes**: el trabajador no puede captar clientes de la empresa para su nuevo empleador.

**No solicitud de empleados**: el trabajador no puede llevarse a colegas a la nueva empresa (anti-poaching).

### Requisitos legales en España

El pacto de no solicitud no tiene regulación expresa específica en el ET, pero los tribunales lo validan cuando:
1. Existe una base contractual clara (cláusula en contrato o acuerdo separado)
2. Tiene compensación económica (o está incluida en la compensación del pacto de no competencia)
3. Es razonable en alcance y duración (típicamente 1-2 años)

### Template de cláusula de no solicitud

```
PACTO DE NO SOLICITUD

1. NO SOLICITUD DE CLIENTES
Durante los [12/24] meses siguientes a la extinción de la relación laboral,
el Trabajador se abstendrá de contactar, solicitar o captar, por sí mismo
o a través de terceros, a los clientes de la Empresa con los que hubiera
mantenido relación comercial durante los últimos [24] meses de su prestación
de servicios, con el fin de ofrecerles productos o servicios competidores.

2. NO SOLICITUD DE EMPLEADOS
Durante los [12] meses siguientes a la extinción de la relación laboral,
el Trabajador se abstendrá de contactar, reclutar o intentar contratar,
directamente o a través de terceros, a empleados de la Empresa.

3. EXCEPCIONES
Lo anterior no será de aplicación cuando el cliente o empleado haya
tomado la iniciativa del contacto de forma espontánea y sin inducción
del Trabajador.
```

---

## SITUACIONES ESPECIALES

### Pacto durante la vigencia del contrato (art. 21.1 ET)

Además del pacto postcontractual, el ET permite pactar la exclusividad durante la vigencia del contrato. En este caso:
- Requiere compensación económica si la empresa lo impone
- El trabajador puede pedir la rescisión de la exclusividad si no hay compensación adecuada

### Cómo actuar ante el incumplimiento

Si el trabajador incumple el pacto:
1. **Prueba**: documenta el incumplimiento (captación de clientes, empleo en competidor)
2. **Acción**: reclamación civil por incumplimiento contractual o acción de la empresa ante el Juzgado de lo Social
3. **Remedios**: devolución de compensaciones percibidas + daños y perjuicios probados

---

## ENTREGABLE

Para mi caso específico [describe: tipo de empresa, cargo del trabajador, información a proteger, clientes relevantes, duración deseada]:
1. Evaluación de si mi pacto de no competencia cumple los tres requisitos del art. 21.2 ET
2. Cláusula de no competencia redactada y adaptada a mi caso
3. Cláusula de no solicitud (clientes y/o empleados) si procede
4. Compensación económica recomendada y forma de pago
5. Riesgos de la cláusula tal como está y cómo mitigarlos

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redactar cláusulas de no competencia y no solicitud en contratos laborales en España que sean legalmente válidas y ejecutables ante los tribunales.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte B2B vs B2C — las diferencias operativas y de mentalidad para adaptar el equipo según el tipo de cliente',
                'description'      => 'Guía para entender y gestionar las diferencias fundamentales entre el soporte a empresas (B2B) y el soporte a consumidores (B2C): estructura del equipo, SLAs, canales, lenguaje, gestión de escalaciones y métricas que importan en cada modelo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia gestionando equipos en empresas B2B y B2C. Ayúdame a entender las diferencias operativas y de mentalidad entre ambos modelos para adaptar mi equipo y mis procesos al tipo de cliente que tenemos o que estamos incorporando.

---

## LA DIFERENCIA FUNDAMENTAL

No es solo el tipo de cliente. Es todo lo que eso implica:

**En B2C** el cliente es anónimo, el volumen es masivo, el problema es urgente para él en este momento, y la solución tiene que ser rápida, empática y self-service. Si no resuelves el problema en minutos, el cliente se frustra y puede ir a las redes sociales.

**En B2B** el cliente tiene un contrato, un SLA, un account manager y probablemente una relación con la empresa de 12+ meses. El problema no solo le afecta a él — le afecta a su negocio y a sus propios clientes. La expectativa no es velocidad, es competencia y responsabilidad.

---

## MÓDULO 1 — TABLA COMPARATIVA OPERATIVA

| Dimensión | B2C | B2B |
|-----------|-----|-----|
| Volumen de tickets | Alto (cientos/miles por día) | Bajo-medio (decenas por día) |
| Complejidad por ticket | Baja-media | Media-alta |
| Impacto de un problema | Individual | Empresarial (puede afectar a muchos usuarios finales) |
| Tiempo de resolución esperado | Minutos-horas | Horas-días (según SLA) |
| Canal principal | Chat, app, redes sociales | Email, teléfono, portal dedicado |
| Interlocutor | El usuario final | Admin IT / responsable del área / CFO en casos graves |
| Escalación | Rara (self-service absorbe mucho) | Frecuente y estructurada |
| Métricas clave | CSAT, FCR, AHT | SLA compliance, NPS, churn prevention |
| Conocimiento requerido del agente | Producto + empatía emocional | Producto + contexto del negocio del cliente |

---

## MÓDULO 2 — ESTRUCTURA DEL EQUIPO

### Equipo B2C

```
Tier 1 (Soporte General)
├── Agentes de chat / email / redes sociales
├── Objetivo: resolver el 80% de los tickets en el primer contacto
├── KPI principal: First Contact Resolution (FCR) y CSAT
└── Apoyo: base de conocimiento robusta + macros de respuesta

Tier 2 (Soporte Especializado)
├── Agentes con más conocimiento técnico o de producto
├── Reciben escalaciones del Tier 1
└── KPI principal: tiempo de resolución de escalaciones

Tier 3 (Ingeniería / Producto)
└── Solo para bugs confirmados y problemas técnicos complejos
```

### Equipo B2B

```
Customer Support (tickets técnicos operativos)
├── Agentes con conocimiento profundo del producto
├── Trabajan con tickets categorizados por severity y SLA
└── KPI principal: SLA compliance y CSAT post-resolución

Technical Account Manager / CSM con función de soporte
├── Point of contact para cuentas enterprise
├── Gestiona la relación, anticipa problemas y hace seguimiento de tickets abiertos
└── KPI principal: NPS, health score, churn rate de sus cuentas

Escalation Manager
├── Gestiona los P1/P0 (incidentes críticos que afectan al negocio del cliente)
└── Coordina ingeniería, producto y comunicación con el cliente durante el incidente
```

---

## MÓDULO 3 — SLAs Y NIVELES DE SEVERIDAD (B2B)

### Matriz de severidad

| Severity | Definición | Tiempo de respuesta | Tiempo de resolución |
|----------|------------|--------------------|--------------------|
| **P0 / Critical** | El negocio del cliente está parado, afecta a todos sus usuarios | < 15 minutos | < 4 horas (workaround) |
| **P1 / High** | Funcionalidad crítica degradada, hay workaround | < 1 hora | < 8 horas |
| **P2 / Medium** | Funcionalidad no crítica afectada | < 4 horas | < 2 días laborables |
| **P3 / Low** | Pregunta, error cosmético, mejora | < 1 día laborable | < 5 días laborables |

### Template de SLA en contrato B2B

```
ACUERDO DE NIVEL DE SERVICIO (SLA)

Horario de cobertura:
- Soporte standard: L-V 9:00-18:00 (hora Madrid)
- Soporte 24/7: disponible para P0 y P1 con add-on Enterprise

Canales de contacto:
- Portal de soporte (todos los niveles): support.[empresa].com
- Email (todos los niveles): soporte@[empresa].com
- Teléfono de emergencias (solo P0 y P1): [número]

Compromisos de tiempo de respuesta:
[ver tabla de severidad anterior]

Exclusiones: El SLA no aplica durante mantenimientos programados
comunicados con > 48h de antelación, ni en casos de fuerza mayor.

Penalizaciones por incumplimiento: [opcional - créditos de servicio]
```

---

## MÓDULO 4 — LENGUAJE Y TONO SEGÚN EL CLIENTE

### B2C — Empático, rápido, humano

**MAL:**
"Estimado cliente, hemos recibido su consulta y la estamos procesando según nuestros procedimientos internos. Le responderemos en el plazo establecido en nuestras condiciones de servicio."

**BIEN:**
"¡Hola! Entiendo perfectamente lo frustrante que es no poder acceder a tu cuenta justo ahora. Déjame mirarlo en este momento — ¿puedes confirmarme el email con el que te registraste?"

Principios:
- Primera persona del singular ("yo") o del plural cercano ("nosotros")
- Nombre del cliente en el primer mensaje
- Paráfrasis del problema antes de la solución (demuestra que escuchaste)
- Una pregunta por mensaje (no interrogatorio)

### B2B — Competente, preciso, orientado al negocio

**MAL:**
"Hola! Ya lo miramos ahora mismo, no te preocupes."

**BIEN:**
"Buenos días, [nombre]. He recibido el reporte del ticket #[número] sobre [problema]. He replicado el comportamiento en vuestro entorno de staging y lo he categorizado como P2. El equipo de ingeniería tiene acceso al log desde las 9:15. Os actualizaré a las 14:00 con el diagnóstico. Si el impacto aumenta y necesitáis reclasificarlo a P1, podéis escalar directamente a través del portal."

Principios:
- Número de ticket siempre visible
- Confirma que has reproducido/entendido el problema
- Comunica el siguiente paso con fecha/hora concreta
- Nunca prometas lo que no controlas

---

## MÓDULO 5 — GESTIÓN DE ESCALACIONES EN B2B

### El protocolo de P0 (incidente crítico)

```
T+0: Cliente reporta P0
T+5min: Agente senior confirma severidad y abre war room (Slack/Teams/zoom)
T+10min: Escalation Manager notificado, ingeniería convocada
T+15min: Primera comunicación al cliente: "Confirmamos P0. Equipo asignado.
          Próxima actualización en 30 minutos."
T+30min: Update al cliente (aunque no haya solución)
T+60min: Update al cliente + ETA si ya está identificada la causa
[Cada hora hasta resolución]: update de estado
Resolución: RCA (Root Cause Analysis) en 48h post-incidente
```

---

## ENTREGABLE

Para mi equipo de soporte [describe: tipo de empresa B2B/B2C/mixta, tamaño del equipo, herramienta de ticketing, principales problemas actuales]:
1. Diagnóstico de las 3 principales gaps entre tu operativa actual y las mejores prácticas para tu modelo
2. Propuesta de estructura de equipo adaptada a tu contexto
3. Matriz de SLA y severidades para B2B (si aplica)
4. Guía de tono y templates de respuesta para tu perfil de cliente
5. Las 5 métricas que deberías tener en tu dashboard de CS esta semana

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar la operativa, los SLAs, el tono y la estructura del equipo de Customer Support según el modelo de negocio B2B o B2C.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Networking online para freelancers — LinkedIn, comunidades sectoriales y cómo generar oportunidades de negocio sin eventos presenciales',
                'description'      => 'Sistema de networking online para freelancers que genera oportunidades de negocio de forma consistente: estrategia en LinkedIn, presencia en comunidades sectoriales (Slack, Discord, foros), contenido que atrae clientes y cómo convertir una conversación online en un proyecto real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance coach con experiencia ayudando a profesionales independientes a construir su cartera de clientes únicamente a través del canal digital. Ayúdame a diseñar y ejecutar un sistema de networking online que genere oportunidades de negocio consistentes para mi actividad freelance.

---

## EL ERROR DE LA MAYORÍA DE FREELANCERS EN NETWORKING

El error no es no hacer networking. El error es hacerlo sin sistema:
- Estar en LinkedIn pero no publicar nada
- Publicar contenido genérico que no atrae al cliente ideal
- Unirse a comunidades pero solo "asomarse" sin participar
- Conectar con personas sin ningún seguimiento posterior

El networking que funciona no es accidental. Es un sistema con canales definidos, rutinas semanales y una propuesta de valor clara para cada contexto.

---

## MÓDULO 1 — DEFINE TU POSICIONAMIENTO ANTES DE HACER NETWORKING

Antes de conectar con nadie, necesitas una respuesta clara a esta pregunta:

> **"¿Qué tipo de empresa necesita contratar exactamente a alguien como tú, para qué tipo de proyecto, y por qué tú en lugar de otro freelancer?"**

### Template de posicionamiento freelance

```
SOY [cargo / especialidad]
QUE AYUDA A [tipo de empresa / sector / tamaño]
A [resultado de negocio tangible]
SIN [fricción / coste / riesgo que les preocupa]
A DIFERENCIA DE [alternativa: agencia / interno / otro freelancer]
YO [diferenciador concreto: metodología, experiencia, especialización vertical]
```

Ejemplo:
```
Soy diseñadora UX especializada en aplicaciones fintech
que ayuda a startups en fase seed-Serie A
a reducir el abandono en sus flujos de onboarding
sin necesidad de contratar un diseñador a jornada completa
a diferencia de agencias de diseño generalistas
yo trabajo solo en fintech desde hace 4 años y conozco las restricciones regulatorias del sector
```

---

## MÓDULO 2 — LINKEDIN: EL CANAL PRINCIPAL DE OPORTUNIDADES B2B

### 2.1 Perfil que atrae clientes (no reclutadores)

Los clientes de un freelance no buscan un CV. Buscan a alguien que resuelva su problema. Optimiza el perfil para ellos, no para una oferta de trabajo.

**Titular** (220 caracteres, visible en todos los comentarios y conexiones):
```
MAL: "Freelance UX Designer | Diseño web y apps | Disponible"
BIEN: "Diseñadora UX para startups fintech → reduzco el abandono en onboarding |
       Proyectos desde 2 semanas"
```

**About / Acerca de** (estructura de 5 párrafos):
```
Párrafo 1 — El problema que resuelves (no quién eres):
"Si tu app de pagos o inversión tiene un proceso de registro de 8 pasos y una
tasa de abandono del 60%, tienes un problema de UX que cuesta dinero cada día."

Párrafo 2 — Tu solución y para quién:
"Trabajo con equipos de producto de startups fintech en etapas seed-Serie A
para rediseñar los flujos críticos de onboarding y KYC..."

Párrafo 3 — Prueba social:
"En los últimos 18 meses he trabajado con [cliente 1], [cliente 2] y [cliente 3],
mejorando la tasa de activación en una media de un 23%..."

Párrafo 4 — Cómo trabajo:
"Mis proyectos empiezan con un sprint de discovery de 2 semanas..."

Párrafo 5 — CTA:
"¿Estás construyendo un producto fintech y el onboarding no convierte?
Escríbeme un DM o reserva una llamada de 20 minutos aquí: [enlace]"
```

### 2.2 Estrategia de contenido para atraer clientes

Publica con esta mezcla semanal (1-3 posts por semana):

| Tipo de contenido | Frecuencia | Objetivo |
|-------------------|-----------|----------|
| **Caso práctico** (problema → proceso → resultado con datos) | 1/semana | Demostrar competencia y resultados |
| **Lección del sector** (insight de tu experiencia o investigación) | 1/semana | Posicionarte como experto |
| **Opinión** (punto de vista diferenciado sobre algo de tu sector) | Quincenal | Generar debate y visibilidad |
| **Pregunta** (invitar a la audiencia a compartir su experiencia) | Quincenal | Aumentar engagement |

**Template de post de caso práctico:**

```
🔴 El onboarding de [cliente] tenía una tasa de abandono del 67%.

El paso 4 (verificación de identidad) tardaba 3,5 minutos de media.
Casi nadie llegaba al paso 5.

Lo que encontramos:
→ El usuario no sabía cuántos pasos faltaban
→ La cámara del DNI no funcionaba en iOS 14 (30% de usuarios)
→ El copy del error era técnico, no orientaba a ninguna acción

Lo que cambiamos en 10 días:
→ Barra de progreso clara (paso X de 6)
→ Fallback a subida manual de foto si la cámara falla
→ Copy de errores reescrito con acción concreta

Resultado en 30 días:
→ Abandono en paso 4: de 67% a 31%
→ Tasa de activación total: de 28% a 51%

El problema no era la regulación. Era la experiencia.

[etiqueta de sector: #fintech #ux #onboarding]
```

### 2.3 Rutina de engagement semanal

El contenido solo funciona si eres visible. Dedica 20-30 minutos al día a:

**Lunes-Viernes**:
- Comenta en 3-5 posts de clientes potenciales o referentes del sector (comentario con aportación real, nunca "gran post")
- Acepta y responde a solicitudes de conexión pendientes
- Revisa las notificaciones de quién ha visto tu perfil (señal de interés)

**Una vez por semana**:
- Publica un nuevo post
- Envía 3-5 mensajes de seguimiento a conversaciones iniciadas que quedaron frías

---

## MÓDULO 3 — COMUNIDADES SECTORIALES

### Dónde están tus clientes según tu sector

| Sector | Comunidades relevantes |
|--------|----------------------|
| Tech / Producto | Product Hunt, Indie Hackers, communities de YC, Slack de communities de tu stack |
| Marketing / Growth | Growth Hackers, Marketing Brew Slack, Product-led Growth Slack |
| Diseño | Designer Hangout Slack, Behance comunidad, Figma Community |
| Finanzas / Legal | CFO Network, comunidades de asesores en LinkedIn |
| Startups España | Territorio Startups, Startups de España (LinkedIn), foros de Lanzadera, SeedRocket |

### Cómo participar sin parecer spam

La regla de 80/20:
- **80%** de tus participaciones son valor puro: responder preguntas, compartir recursos, dar feedback
- **20%** puedes mencionar tu trabajo (cuando alguien pregunta directamente, cuando es 100% relevante para el hilo)

**Template para responder preguntas en comunidades:**

```
[La respuesta directa y útil a la pregunta — sin rodeos]

En mi experiencia trabajando con [tipo de empresa], lo que mejor funciona es [X] porque [razón].

Un recurso que puede ayudar: [enlace o nombre de herramienta/libro].

[Solo si es relevante y natural]: Si necesitas profundizar más en esto, escríbeme por MD.
```

---

## MÓDULO 4 — CONVERTIR CONVERSACIONES EN PROYECTOS

### El embudo de conversación freelance

```
Visibilidad (post, comentario, participación en comunidad)
    ↓
Conexión / Follow (el cliente te sigue o te envía solicitud)
    ↓
Conversación inicial (respuesta a un comentario, DM sobre un post)
    ↓
Llamada de discovery (20-30 min para entender el problema)
    ↓
Propuesta / Presupuesto
    ↓
Proyecto
```

### Template de primer DM a un cliente potencial

```
Hola [nombre],

He visto tu comentario en [post/comunidad] sobre [problema específico].
Trabajo exactamente en eso con startups de [sector] — el mes pasado
ayudé a [cliente/tipo de empresa] a [resultado concreto].

¿Tienes 20 minutos esta semana para contarme más sobre vuestra situación?
No te voy a vender nada — si veo que puedo ayudarte, te lo digo;
si no, también.

[Tu nombre]
```

---

## ENTREGABLE

Para mi caso como freelance [describe: especialidad, tipo de clientes objetivo, nivel de LinkedIn actual, presencia en comunidades]:
1. Template de posicionamiento completado para tu especialidad
2. Titular de LinkedIn optimizado para atraer clientes, no reclutadores
3. Estructura del About section adaptada a tu propuesta de valor
4. Plan de contenido para las próximas 4 semanas (1 post por semana con tema y ángulo)
5. Las 3 comunidades más relevantes para tu sector con estrategia de participación
6. Rutina semanal de networking en 30 minutos al día

PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de networking online que genera oportunidades de negocio para freelancers mediante LinkedIn, comunidades sectoriales y contenido que atrae clientes.',
                'vote_score'       => 41,
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
