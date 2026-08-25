<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills57Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunidad online de marca: construye y activa Discord, Circle o Slack para generar lealtad y referidos',
                'description'      => 'Diseña la arquitectura, los rituales y los flujos de activación de una comunidad de marca que convierta miembros pasivos en embajadores activos que traen nuevos clientes sin coste de adquisición adicional.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en community building con experiencia lanzando y escalando comunidades de marca en Discord, Circle, Slack y Mighty Networks para empresas SaaS, e-commerce y servicios profesionales, donde las comunidades bien diseñadas reducen el CAC hasta un 60% y multiplican el LTV porque los miembros vinculados no se van con la competencia.

Contexto de mi comunidad:
- Tipo de negocio y producto: [SaaS B2B / e-commerce / formación online / agencia / otro]
- Plataforma elegida o que evalúas: [Discord / Circle / Slack / Mighty Networks / otra]
- Tamaño actual de audiencia (newsletter, redes, clientes): [número aproximado]
- Objetivo principal de la comunidad: [soporte entre pares / aprendizaje / networking / ventas cruzadas / referidos]
- Recursos disponibles para gestionar la comunidad: [horas/semana del equipo, community manager o no]

---

## Marco estratégico: las 4 fases de una comunidad de marca

### Fase 1 — Diseño (semanas 1-2)

**Elige la plataforma con este filtro:**

| Criterio | Discord | Circle | Slack | Mighty Networks |
|---|---|---|---|---|
| Audiencia técnica/gamer | ★★★★★ | ★★ | ★★★ | ★★ |
| Cursos + comunidad integrados | ★★ | ★★★★★ | ★ | ★★★★ |
| Empresas B2B / profesionales | ★★ | ★★★ | ★★★★★ | ★★★ |
| Coste para <500 miembros | Gratis | 49$/mes | Gratis | 33$/mes |
| Personalización de marca | Baja | Alta | Media | Alta |
| Monetización nativa | No | Sí | No | Sí |

**Regla de oro:** elige donde ya está tu audiencia, no la plataforma con más features.

**Arquitectura de canales (ejemplo para Circle o Discord):**

```
🏠 BIENVENIDA
  #presentaciones        → primer post obligatorio del nuevo miembro
  #normas-y-guía         → reglas breves (máx 5), tono de comunidad
  #anuncios-del-equipo   → solo admins pueden publicar

📚 APRENDIZAJE
  #recursos-y-herramientas
  #casos-de-éxito        → plantilla estructurada obligatoria
  #preguntas-y-respuestas

🤝 NETWORKING
  #busco-colaborador
  #ofertas-y-proyectos
  #feedback-a-mi-trabajo

🔥 VIP / CLIENTES ACTIVOS
  #acceso-anticipado     → betas, descuentos, novedades primero
  #llamadas-grupales     → calendario de sesiones en vivo

🎉 OCIO
  #off-topic
  #wins-y-celebraciones  → pequeños logros de los miembros
```

---

### Fase 2 — Lanzamiento (semanas 3-6)

**El método de los fundadores fundadores:**

1. **Invita a mano los primeros 50 miembros.** No hagas un post público. Selecciona clientes actuales con los que tengas relación, ex-usuarios activos y referentes del sector.
2. **Onboarding en 3 pasos obligatorios antes de acceder a todos los canales:**
   - Completar perfil con foto y cargo
   - Publicar presentación en #presentaciones usando la plantilla
   - Leer y aceptar las normas
3. **Plantilla de presentación que genera conversación:**

```
👋 Hola, soy [Nombre]
📍 Trabajo en/como: [empresa o rol]
🎯 Estoy aquí porque quiero: [objetivo concreto]
🤝 Puedo ayudar a la comunidad con: [habilidad o conocimiento]
🔥 Un reto en el que estoy trabajando ahora: [problema real]
```

Esta plantilla produce respuestas porque hay dos anzuelos de conversación (el objetivo y el reto).

---

### Fase 3 — Activación y rituales (meses 2-6)

**Los 5 rituales de comunidad que mantienen la actividad sin depender de contenido constante:**

| Ritual | Frecuencia | Descripción |
|---|---|---|
| Wins Wednesday | Semanal (miércoles) | Hilo donde cada miembro comparte un logro pequeño de la semana |
| AMA con el fundador | Mensual | Sesión de preguntas abiertas, sin slides, 45 min |
| Hot Take Friday | Semanal (viernes) | El equipo publica una opinión polémica del sector, los miembros debaten |
| Collab Monday | Quincenal | Hilo de "busco / ofrezco" — genera conexiones y referidos internos |
| Member Spotlight | Mensual | Entrevista breve a un miembro destacado, se publica en la newsletter |

**KPIs de activación que tienes que medir cada semana:**

```
DAU/MAU ratio           → objetivo >15% (comunidades sanas: 20-30%)
Posts por miembro activo → objetivo >1 post/mes por miembro
Tasa de presentación    → nuevos miembros que publican en #presentaciones / total nuevos
Comentarios por post    → objetivo >2 comentarios de media
Churn mensual          → miembros que abandonan o dejan de interactuar
```

---

### Fase 4 — Referidos y monetización de la comunidad

**El flywheel de referidos basado en comunidad:**

```
Miembro nuevo
    ↓ (onboarding bien diseñado)
Miembro activo (publica, comenta, ayuda)
    ↓ (recibe valor + reconocimiento)
Miembro embajador (trae a alguien de su red)
    ↓ (incentivo: acceso VIP, descuento, mención pública)
Nuevo miembro → reinicia el ciclo
```

**Programa de embajadores — estructura mínima viable:**

- **Nivel 1 — Contribuidor:** 10+ posts de calidad en 30 días → badge + mención en newsletter
- **Nivel 2 — Experto:** 1 referido que se convierte en cliente + sesión de AMA propia
- **Nivel 3 — Embajador:** 3+ referidos activos → co-creación de contenido + revenue share (5-15%)

**Template de mensaje para activar referidos de forma orgánica:**

```
[Nombre], llevas X semanas en la comunidad y has aportado mucho
con tus posts sobre [tema].

¿Conoces a alguien que también se esté enfrentando al reto de [problema
que resuelve tu comunidad]? Si les compartes tu enlace de invitación
y se unen, ambos accedéis a [beneficio concreto].

Tu enlace personal: [URL única]
```

---

### Errores que matan las comunidades (y cómo evitarlos)

1. **Abrir demasiados canales antes de tener masa crítica.** Regla: máximo 5-7 canales hasta los 200 miembros activos.
2. **Solo publicar contenido de la marca.** La ratio óptima es 20% contenido de la marca / 80% conversaciones entre miembros.
3. **No reconocer a los contribuidores.** El reconocimiento público es el motor de participación más potente y más barato.
4. **Medir solo el tamaño (número de miembros).** El número que importa es el DAU/MAU ratio, no el total de inscritos.
5. **No tener un community manager claro.** Alguien tiene que ser el "anfitrión" que da la bienvenida, modera y genera los hilos de conversación.

---

Entrega: el plan de lanzamiento semana a semana para los primeros 90 días de mi comunidad en [plataforma elegida], con los rituales adaptados a mi sector ([sector]) y la arquitectura de canales exacta para mi caso de uso ([objetivo principal]).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar y lanzar una comunidad de marca que genera lealtad y referidos orgánicos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización del bundle de frontend: tree shaking, code splitting y lazy loading para mejor performance web',
                'description'      => 'Reduce el bundle size de tu aplicación web con técnicas modernas de tree shaking, code splitting dinámico y lazy loading para conseguir tiempos de carga más rápidos y mejores métricas de Core Web Vitals.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en rendimiento web y optimización de bundles de JavaScript con experiencia en proyectos React, Vue y Angular usando Webpack, Vite y Rollup, donde reducciones del 40-70% en el bundle size son habituales con las técnicas correctas y se traducen directamente en mejoras de conversión y posicionamiento SEO.

Contexto de mi proyecto:
- Framework frontend: [React / Vue / Angular / Svelte / Vanilla JS]
- Bundler actual: [Webpack / Vite / Rollup / Parcel / otro]
- Tamaño actual del bundle principal (main bundle): [en KB o MB, si lo sabes]
- Herramienta de análisis que usas: [webpack-bundle-analyzer / vite-bundle-visualizer / ninguna aún]
- Principal síntoma del problema: [carga lenta / LCP alto / First Contentful Paint lento / tamaño de main.js enorme]

---

## Diagnóstico primero: mide antes de optimizar

### Paso 1 — Instala el analizador de bundles

**Para Webpack:**
```bash
npm install --save-dev webpack-bundle-analyzer

# En webpack.config.js:
const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer');
module.exports = {
  plugins: [
    new BundleAnalyzerPlugin({
      analyzerMode: 'static',
      reportFilename: 'bundle-report.html',
      openAnalyzer: false,
    }),
  ],
};
```

**Para Vite:**
```bash
npm install --save-dev rollup-plugin-visualizer

# En vite.config.ts:
import { visualizer } from 'rollup-plugin-visualizer';
export default {
  plugins: [
    visualizer({ open: true, gzipSize: true, brotliSize: true }),
  ],
};
```

### Paso 2 — Genera el build de producción y analiza

```bash
npm run build
# Abre el reporte y busca:
# 1. Paquetes que ocupan más del 10% del bundle total
# 2. Dependencias duplicadas (misma lib en versiones distintas)
# 3. Código de desarrollo incluido en producción (lodash, moment, etc.)
# 4. Assets (imágenes, fuentes) que no deberían estar en el JS bundle
```

**Tabla de culpables más frecuentes y sus soluciones:**

| Librería | Problema | Solución |
|---|---|---|
| moment.js | 67KB min+gzip sin tree shaking | Migrar a date-fns o dayjs |
| lodash (completo) | 71KB en lugar de los 2KB que usas | Imports específicos: `import debounce from 'lodash/debounce'` |
| antd / MUI completo | 200-500KB innecesario | Importar solo el componente que usas |
| firebase (SDK completo) | 400KB+ | Usar modular SDK (v9+) |
| chart.js completo | 170KB | Registrar solo los componentes que necesitas |

---

## Tree Shaking: elimina lo que no usas

El tree shaking funciona con módulos ES (import/export). Si tu código o tus dependencias usan CommonJS (require), el bundler no puede eliminar el código muerto.

**Configura tree shaking correcto en Webpack 5:**
```javascript
// webpack.config.js
module.exports = {
  mode: 'production',          // activa tree shaking automáticamente
  optimization: {
    usedExports: true,         // marca exports no usados
    sideEffects: false,        // elimina módulos con sideEffects: false en package.json
  },
};
```

**En tu package.json del proyecto:**
```json
{
  "sideEffects": [
    "*.css",
    "*.scss",
    "./src/polyfills.js"
  ]
}
```
Con `sideEffects` bien configurado, Webpack elimina todo el código importado pero no usado.

**Ejemplo concreto — antes vs. después:**
```javascript
// ❌ MAL: importa todo lodash (71KB)
import _ from 'lodash';
const result = _.debounce(myFn, 300);

// ✅ BIEN: importa solo debounce (1.8KB)
import debounce from 'lodash/debounce';
const result = debounce(myFn, 300);

// ✅ MEJOR: usa el método nativo si el navegador lo soporta
// o date-fns con tree shaking perfecto por diseño
import { debounce } from 'ts-debounce'; // 1.2KB
```

---

## Code Splitting: divide el bundle en chunks

### Splitting por rutas (el más impactante)

**React con React Router:**
```jsx
import { lazy, Suspense } from 'react';
import { Routes, Route } from 'react-router-dom';

// Carga diferida por ruta
const Dashboard = lazy(() => import('./pages/Dashboard'));
const Settings  = lazy(() => import('./pages/Settings'));
const Reports   = lazy(() => import('./pages/Reports'));

function App() {
  return (
    <Suspense fallback={<PageSkeleton />}>
      <Routes>
        <Route path="/dashboard" element={<Dashboard />} />
        <Route path="/settings"  element={<Settings />} />
        <Route path="/reports"   element={<Reports />} />
      </Routes>
    </Suspense>
  );
}
```

**Vue 3 con Vue Router:**
```javascript
// router/index.js
const routes = [
  {
    path: '/dashboard',
    component: () => import('../pages/Dashboard.vue'), // chunk automático
  },
  {
    path: '/settings',
    component: () => import('../pages/Settings.vue'),
  },
];
```

### Splitting por componente pesado

```jsx
// Carga el editor de código solo cuando el usuario lo necesita
const CodeEditor = lazy(() =>
  import(/* webpackChunkName: "code-editor" */ '@monaco-editor/react')
);

// Con Vite, el comentario no es necesario pero puedes nombrar el chunk:
const HeavyChart = lazy(() =>
  import(/* @vite-ignore */ './components/HeavyChart')
);
```

---

## Lazy Loading de imágenes y assets

```html
<!-- HTML nativo (soporte 95%+ de navegadores) -->
<img src="hero.webp" loading="lazy" alt="Hero" width="800" height="600" />

<!-- Siempre incluye width y height para evitar CLS (Cumulative Layout Shift) -->
```

**Intersection Observer para casos avanzados:**
```javascript
const lazyImages = document.querySelectorAll('img[data-src]');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const img = entry.target;
      img.src = img.dataset.src;
      img.removeAttribute('data-src');
      observer.unobserve(img);
    }
  });
}, { rootMargin: '200px' }); // carga 200px antes de que sea visible

lazyImages.forEach(img => observer.observe(img));
```

---

## Resultados esperados por técnica

| Técnica | Reducción típica del bundle | Impacto en LCP |
|---|---|---|
| Tree shaking + imports específicos | 20-40% | Medio |
| Code splitting por rutas | 30-60% del JS inicial | Alto |
| Lazy loading de imágenes | 0% JS, -60-80% bytes iniciales | Muy alto |
| Migrar moment → dayjs | -65KB | Medio |
| Migrar lodash completo → lodash/módulo | -60KB | Medio |
| Configurar sideEffects en package.json | 5-15% | Bajo-medio |

---

## Checklist de optimización por fases

**Fase 1 — Victorias rápidas (1-2 horas):**
- [ ] Instalar y ejecutar bundle analyzer
- [ ] Migrar imports de lodash a imports específicos
- [ ] Reemplazar moment.js por dayjs
- [ ] Añadir `loading="lazy"` a todas las imágenes below-the-fold

**Fase 2 — Impacto medio (medio día):**
- [ ] Implementar lazy loading de rutas con React.lazy / Vue async components
- [ ] Configurar sideEffects en package.json
- [ ] Revisar y reducir dependencias duplicadas

**Fase 3 — Optimización avanzada (1-2 días):**
- [ ] Preload de chunks críticos con `<link rel="preload">`
- [ ] Configurar HTTP/2 push en el servidor
- [ ] Implementar service worker para caché de chunks

---

Entrega: analiza el bundle de mi proyecto [framework] con bundler [bundler], identifica los 3-5 cambios con mayor impacto para mi caso específico y dame el código exacto para implementarlos, con el tamaño de reducción esperado en cada caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducir el bundle size y mejorar los Core Web Vitals del frontend',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de iconografía personalizado: diseña y mantén un set de iconos coherente para producto y marca',
                'description'      => 'Crea desde cero o unifica un sistema de iconos coherente que refuerza la identidad visual de tu producto, con guías de uso, variantes y un flujo de contribución que evita que el set se llene de iconos inconsistentes con el tiempo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de sistemas visuales y iconografía de producto con experiencia creando y manteniendo icon libraries para productos digitales de escala media y grande, donde un sistema de iconos bien definido reduce el tiempo de diseño e implementación hasta un 40% y elimina las inconsistencias visuales que erosionan la percepción de calidad del producto.

Contexto de mi proyecto:
- Tipo de producto: [app web / app móvil / SaaS / e-commerce / branding corporativo]
- Situación actual de los iconos: [usamos una librería externa (Lucide, Heroicons, etc.) / tenemos iconos propios inconsistentes / empezamos desde cero]
- Herramienta de diseño principal: [Figma / Adobe Illustrator / Sketch]
- Escala del set que necesitas: [pequeño <50 iconos / medio 50-200 / grande 200+]
- Estilo visual del producto: [outline (líneas) / filled (relleno) / duotone / mixed]

---

## Marco de decisión: ¿creas el set o adaptas uno existente?

**Árbol de decisión:**

```
¿Tu marca tiene un estilo visual muy diferenciado?
├── SÍ → Crea iconos propios desde cero (o personaliza una base)
└── NO → ¿Tienes menos de 50 iconos en el backlog?
         ├── SÍ → Usa una librería open source (Lucide, Heroicons, Phosphor)
         └── NO → Adapta una librería open source con tus tokens de estilo
```

**Librerías de referencia por estilo:**

| Librería | Estilo | Licencia | Iconos | Ideal para |
|---|---|---|---|---|
| Lucide | Outline, 2px stroke | MIT | 1.400+ | SaaS, apps modernas |
| Heroicons | Outline + Solid | MIT | 292 | Tailwind, apps limpias |
| Phosphor | 6 estilos | MIT | 1.200+ | Proyectos con variantes |
| Feather | Outline, minimalista | MIT | 286 | Apps de productividad |
| Material Symbols | 3 estilos, variable | Apache 2.0 | 2.800+ | Ecosistema Google/Android |
| Tabler Icons | Outline, 1.5px | MIT | 5.700+ | El set más completo gratis |

---

## Los principios del sistema de iconos

### 1. Define el grid y las dimensiones base

**Grid recomendado para iconos de producto:**

```
Tamaño base: 24×24px (viewport principal)
Grid interno: 20×20px área de contenido + 2px padding por lado
Stroke width: 1.5px (compacto, moderno) o 2px (más accesible)
Corner radius: consistente en todas las formas cerradas
  → 0px: estilo técnico/serio
  → 1px: equilibrado
  → 2px: amigable/consumer
```

**Variantes de tamaño y su uso:**

| Tamaño | Nombre | Uso |
|---|---|---|
| 16×16px | xs | Inline en texto, badges, chips |
| 20×20px | sm | Menús, listas densas |
| 24×24px | md (base) | Uso estándar en UI |
| 32×32px | lg | Botones CTA, tarjetas |
| 48×48px | xl | Ilustraciones simples, estados vacíos |

### 2. Define las reglas de estilo antes de dibujar

**Checklist de atributos del sistema:**
- [ ] Stroke width uniforme en todos los iconos (1px / 1.5px / 2px)
- [ ] Corner radius uniforme en todos los path cerrados
- [ ] Terminaciones de línea: `round` (amigable) o `square` (técnico)
- [ ] Uso de fill: nunca / siempre en iconos "solid" / solo para estado activo
- [ ] Ángulos: preferencia por 45° o evitar diagonales irregulares
- [ ] Espacio negativo: mínimo 2px entre elementos internos

### 3. Estructura en Figma para mantenibilidad

```
📁 _Icons Library
  📁 00 - Core (grid, tokens, guía de uso)
    Frames: Grid 24px, Grid 16px, Reglas de estilo
  📁 01 - Navigation
    home, search, menu, back, forward, close, settings
  📁 02 - Actions
    add, delete, edit, copy, share, download, upload, filter
  📁 03 - Status
    check, error, warning, info, loading, empty
  📁 04 - Content
    file, folder, image, video, document, link
  📁 05 - Communication
    mail, phone, chat, notification, bell
  📁 06 - Commerce
    cart, bag, payment, coupon, star (review)
  📁 07 - Social
    user, users, heart, thumbs-up, bookmark
```

**Configuración del componente en Figma:**

```
Cada icono es un Component con:
- Nombre: [categoría]/[nombre] → navigation/home, actions/edit
- Property "Size": 16 / 20 / 24 / 32 / 48
- Property "Style": outline / filled (si aplica)
- Property "Color": usa la variable de color, nunca valor hardcoded

Estructura del frame:
- Frame 24×24px con constraints: center/center
- Layer "icon" con el path vectorial
- Color del stroke/fill: vinculado a variable "icon/default"
```

---

## Flujo de contribución: cómo añadir iconos sin romper la coherencia

**Proceso de solicitud de nuevo icono:**

```
1. SOLICITUD
   └── El equipo o stakeholder abre un issue/ticket con:
       - Nombre propuesto (sustantivo o verbo claro)
       - Contexto de uso (dónde y cómo se va a usar)
       - Referencia visual (icono similar de otra librería)

2. REVISIÓN (Design System Lead)
   ├── ¿Ya existe un icono que cubre este caso de uso? → No crear
   ├── ¿El nombre es genérico y reutilizable? → OK
   └── ¿El caso de uso es demasiado específico? → Ilustración, no icono

3. DISEÑO
   ├── Crea sobre el grid base (24px)
   ├── Comprueba coherencia con 5 iconos cercanos en estilo
   ├── Testea en 16px (¿sigue siendo legible?)
   └── Testea en fondo claro y oscuro

4. REVISIÓN DE PARES
   ├── Otro diseñador revisa contra los principios del sistema
   └── El equipo de accesibilidad valida contraste (mínimo 3:1 sobre fondo)

5. EXPORT Y ENTREGA
   ├── Export SVG optimizado (sin grupos innecesarios, sin IDs)
   ├── Nombrar: nombre-del-icono.svg (kebab-case)
   └── Actualizar la documentación del sistema
```

---

## Export y optimización de SVGs

**Script de optimización con SVGO:**

```bash
# Instala SVGO
npm install -g svgo

# Optimiza un icono individual
svgo icono.svg --output icono.optimized.svg

# Optimiza toda la carpeta de iconos
svgo --folder ./icons --output ./icons-optimized

# Configuración recomendada svgo.config.js:
module.exports = {
  plugins: [
    'removeDoctype',
    'removeXMLProcInst',
    'removeComments',
    'removeMetadata',
    'removeTitle',        # ¡OJO! Quitar si el title es el accText
    'removeDesc',
    'removeDimensions',   # Usa viewBox, no width/height absolutos
    'cleanupIds',
    'convertPathData',
    { name: 'removeAttrs', params: { attrs: ['fill', 'stroke-width'] } },
    # ↑ Elimina atributos hardcoded para controlar el color desde CSS
  ],
};
```

**SVG de icono bien formado:**
```svg
<!-- ❌ MAL: lleno de atributos innecesarios -->
<svg width="24" height="24" fill="none" stroke="#000000" stroke-width="2"
     xmlns="http://www.w3.org/2000/svg">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7..."/>
</svg>

<!-- ✅ BIEN: limpio, color controlado por CSS -->
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
     aria-hidden="true" focusable="false">
  <path d="M3 12l2-2m0 0l7-7..." fill="none" stroke="currentColor"
        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
```

La clave: `stroke="currentColor"` hace que el icono herede el color del texto CSS, sin necesitar props de color en el componente.

---

## Documentación mínima del sistema

**Página de Storybook o Notion para cada icono:**

```
Nombre: actions/edit
Descripción: Acción de editar o modificar un elemento existente
Uso correcto:
  ✅ Junto a un campo de formulario para indicar que es editable
  ✅ En un menú de acciones como "Editar nombre"
  ✅ Botón de edición inline en una tabla
Uso incorrecto:
  ❌ Para indicar "personalizar" (usa settings o sliders)
  ❌ Para "crear nuevo" (usa add o plus)
Accesibilidad:
  - Si el icono es el único elemento del botón, incluir aria-label="Editar"
  - Si va acompañado de texto, usar aria-hidden="true" en el SVG
```

---

Entrega: crea el plan de auditoría de los iconos actuales de mi producto [tipo de producto], define los principios del sistema adaptados a nuestro estilo [estilo visual] y dame la estructura de Figma y el proceso de contribución para que el equipo lo mantenga coherente a medida que crece.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y mantener un sistema de iconografía coherente para producto digital',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de la competencia en el proceso de venta: posiciónate cuando el cliente compara activamente',
                'description'      => 'Maneja con confianza las comparaciones competitivas durante el proceso de venta B2B y B2C: cuándo y cómo hablar de la competencia, cómo reforzar tu diferenciación sin atacar, y cómo convertir la comparación en una oportunidad de cierre.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas consultivas B2B con experiencia gestionando ciclos de venta competitivos en sectores como SaaS, servicios profesionales y tecnología, donde la gestión correcta de la comparación competitiva es el factor que decide el 60% de los cierres cuando el precio y las features son similares.

Contexto de mi situación de venta:
- Tipo de venta: [B2B / B2C / SaaS / servicios / producto físico]
- Ticket medio por operación: [rango en euros o dólares]
- Competidores principales con los que me comparan más: [nombre 1, nombre 2, nombre 3]
- El momento en que aparece la comparación: [al inicio / en la demo / en la propuesta / al negociar el precio]
- Principal argumento del cliente para comparar: [precio más bajo / más features / marca más conocida / ya lo conocen]

---

## Marco estratégico: los 4 escenarios de competencia

### Escenario 1: El cliente compara activamente (tiene una shortlist)

**Señales:** "Estamos evaluando también a [competidor]", "Nos han enviado propuesta de X", "¿Qué os diferencia de Y?"

**Protocolo de respuesta en 4 pasos:**

**Paso 1 — Diagnostica antes de posicionarte:**
```
Preguntas de diagnóstico (antes de hablar de ti):

"¿Qué es lo que más les ha llamado la atención de [competidor]?"
→ Te dice qué criterio está ponderando el cliente

"¿Qué es lo que les genera alguna duda o les gustaría que fuera diferente?"
→ Te da la grieta donde entrar

"¿Cómo están priorizando los criterios de decisión?"
→ Te revela si el precio es el driver o si hay algo más importante

"¿En qué momento esperan tomar la decisión?"
→ Te sitúa en el timeline y urgencia del proceso
```

**Paso 2 — Reconoce sin atacar:**

El error más frecuente: hablar mal de la competencia. El efecto psicológico es siempre contrario al deseado (el cliente defiende al competidor y tú quedas como inseguro).

```
❌ MAL: "El problema de [competidor] es que su soporte es muy malo y tienen
muchos bugs. Nosotros somos mucho más fiables."

✅ BIEN: "[Competidor] es una solución sólida, especialmente para equipos
que priorizan [su punto fuerte real]. Lo que nuestros clientes que vinieron
de allí nos dicen que encontraron diferente con nosotros fue [tu diferenciador
clave que conecta con el dolor del cliente]."
```

**Paso 3 — Cambia el criterio de comparación:**

Si te comparan en precio, mueve la conversación al coste total. Si te comparan en features, mueve a resultados. El que define los criterios de comparación, gana.

```
Técnica "Reencuadre de criterios":

Cliente: "Vuestra plataforma es un 30% más cara que [competidor]."
Vendedor: "Entiendo que el precio inicial es diferente. ¿Le puedo compartir
cómo calculan el coste total nuestros clientes después de 12 meses de uso?
Incluye el tiempo de implementación, el soporte y el impacto en [métrica
que le importa]. La mayoría nos dicen que el ROI es muy diferente al precio
de suscripción mensual."
```

**Paso 4 — Cierra con la decisión, no con la comparación:**

```
"Basándonos en todo lo que hemos hablado — que su prioridad principal es
[objetivo del cliente] y que el criterio más importante para ustedes es
[criterio], ¿tiene sentido que avancemos con [siguiente paso concreto]?"
```

---

### Escenario 2: El cliente ya tiene una preferencia (favorece al competidor)

**Señal:** "Es que ya estamos muy acostumbrados a trabajar con [competidor]", "Llevamos 5 años con ellos."

**Técnica del cambio de referencia:**

```
"Entiendo perfectamente. La comodidad con una herramienta conocida es real
y valiosa. Si me permite preguntarle: cuando empezaron con [competidor],
¿cuál era el principal objetivo que querían resolver?"

[Escucha la respuesta]

"¿Y hoy, 5 años después, ese objetivo sigue siendo el mismo o han aparecido
nuevas necesidades que entonces no existían?"

[Casi siempre la respuesta es: "Han aparecido nuevas necesidades"]

"Precisamente eso es lo que nos encontramos habitualmente: los equipos que
nos llaman no es porque [competidor] sea malo, sino porque han crecido y
sus necesidades son diferentes. ¿Le cuento qué es lo que [empresa similar]
encontró cuando hizo el cambio?"
```

---

### Escenario 3: El cliente usa el competidor como palanca de precio

**Señal:** "Me han dado [competidor] por X euros, ¿podéis igualarlo?"

**Protocolo de respuesta:**

```
Paso 1 — Valida la información:
"¿Puedo preguntarle si es el mismo plan con las mismas funcionalidades
que estamos ofreciendo nosotros?"
→ En el 60% de los casos, la propuesta del competidor no incluye algo importante

Paso 2 — Si la comparación es justa, no bajes el precio, baja el alcance:
"Podemos ajustar el precio si ajustamos también el alcance. ¿Qué parte
del proyecto le parece más crítica y cuál podríamos diferir para una
segunda fase?"

Paso 3 — Si no puedes moverte en precio, refuerza el riesgo de cambio:
"Una pregunta importante: ¿qué pasa si la implementación de [competidor]
se retrasa o no cumple las expectativas? ¿Cuánto les cuesta un mes de
retraso en [el objetivo que quieren conseguir]?"
```

---

### Escenario 4: Comparación post-demo (el cliente pide tiempo)

**Señal:** "Necesitamos comparar las dos opciones y os decimos."

**Técnica del resumen de criterios antes de salir:**

```
"Perfecto. Para que la comparación sea más fácil para su equipo, ¿le
parece bien que le deje un resumen de los 3-4 criterios que usted mismo
ha mencionado como los más importantes hoy, y cómo cada opción responde
a ellos?"

[Prepara un documento de una página — "Comparativa de criterios" — que
incluya solo los criterios que el cliente mencionó, no los que tú quieres
destacar. Y colócate honestamente bien en los criterios que son tu fuerte.]
```

**Plantilla del documento de comparativa:**

```
CRITERIOS DE DECISIÓN — [Nombre del Cliente]
Basado en nuestra conversación del [fecha]

Criterio 1: [Lo que el cliente dijo que le importa]
  → Nuestra solución: [respuesta honesta]
  → A tener en cuenta: [ventaja genuina que tienes]

Criterio 2: [Tiempo de implementación]
  → Nuestra solución: [X semanas, por qué]
  → Referencia: [nombre de cliente similar que implementó en ese tiempo]

Criterio 3: [Soporte y acompañamiento]
  → Nuestra solución: [qué incluye exactamente]
  → Diferencia clave: [lo que hace único tu soporte]

Próximo paso recomendado: [fecha y acción concreta]
```

---

## Battle cards: fichas de competidor para el equipo de ventas

**Estructura de una battle card efectiva:**

```
BATTLE CARD: vs. [Nombre del Competidor]
Última actualización: [fecha]

¿POR QUÉ GANAN?           ¿POR QUÉ PERDEMOS?
[Su punto fuerte real]     [Nuestra debilidad real]
[Su precio más bajo]       [Nuestro proceso más largo]

CUÁNDO APARECEN: [etapa del ciclo donde suelen estar en paralelo]

PREGUNTAS PARA DESCUALIFICARLOS:
1. "[Pregunta que pone en evidencia su limitación principal]"
2. "[Pregunta sobre el caso de uso donde no son buenos]"

NUESTRO ARGUMENTO CLAVE EN 1 FRASE:
"[Frase que resume por qué somos la mejor opción para este cliente]"

EVIDENCIAS QUE AYUDAN:
- Caso de éxito de cliente que vino de [competidor]: [link]
- Comparativa técnica: [link]
- Review en G2/Capterra: [link]
```

---

Entrega: crea las battle cards para mis 2-3 competidores principales ([nombres]), con los argumentos adaptados a mi tipo de venta ([B2B/B2C]) y ticket ([precio]), y dame el guión exacto para el momento en que el cliente menciona a [competidor principal] por primera vez en la conversación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Posicionarse con confianza ante comparaciones competitivas en el proceso de venta',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en startup vs. empresa grande: adapta el rol y los procesos al contexto',
                'description'      => 'Entiende cómo cambia el rol de PM según el tamaño y la etapa de la empresa, qué procesos son necesarios y cuáles son burocracia disfrazada, y cómo operar con efectividad en cada entorno sin perder agilidad ni rigor.',
                'prompt_content'   => <<<'PROMPT'
Eres un senior product manager con experiencia en ambos mundos: startups de 10-50 personas en etapa early-stage y empresas de 500+ empleados con procesos maduros, y eres capaz de identificar qué prácticas de PM son universales y cuáles son específicas del contexto, para que cada profesional opere con la mentalidad y las herramientas adecuadas a su situación real.

Contexto de mi situación:
- Mi contexto actual: [startup early-stage / scale-up / empresa mediana / corporación grande]
- Equipo de producto: [solo / 2-5 PMs / 5-20 PMs / más de 20 PMs]
- Madurez del proceso: [sin proceso / proceso básico / proceso establecido / proceso rígido que frena]
- Reto principal: [¿cómo estructurar el proceso? / ¿cómo mantener la agilidad? / ¿cómo hacer mi rol visible? / ¿cómo influir sin autoridad?]
- Transición que vivo o anticipo: [de startup a scale-up / de empresa grande a startup / de IC a lead / otra]

---

## Las dimensiones clave que cambian con el tamaño

### Tabla comparativa del rol de PM

| Dimensión | Startup (<50 personas) | Scale-up (50-500) | Corporación (500+) |
|---|---|---|---|
| Scope del PM | Todo el producto | Squad/área | Feature o componente |
| Ciclo de decisión | Horas o días | Días o semanas | Semanas o meses |
| Acceso al CEO | Directo, frecuente | Eventual | Inexistente o protocolar |
| Proceso de roadmap | Post-it o Notion | Quarterly planning ligero | Annual planning + OKRs formales |
| Relación con engineering | Muy próxima, informal | Proceso de sprint establecido | Proceso formal, múltiples dependencias |
| Validación con usuarios | Constante, informal | Proceso de research establecido | UX research separado con proceso propio |
| Documentación | Mínima o nula | Wikis, PRDs ligeros | PRDs completos, sign-offs, comités |
| Político/organizacional | Bajo | Medio | Alto — capital político es clave |

---

## PM en startup: lo que funciona y lo que te puede hundir

### Lo que funciona en startup

**El PM-en-modo-founder:**
- Hablas con usuarios tú mismo, sin intermediarios, mínimo 3-5 cada semana
- Tomas decisiones con información imperfecta — esperar la certeza es lujo que no tienes
- Tu mejor herramienta es el "walking the floor": estar en las conversaciones de soporte, ventas y onboarding
- El roadmap es vivo y cambia con frecuencia — eso no es un bug, es una feature

**Framework de priorización express para startup (RICE modificado):**

```
Para cada iniciativa, puntúa de 1 a 5:

R — Reach: ¿a cuántos usuarios impacta? (1=pocos clientes beta, 5=todos)
I — Impact: ¿cuánto mueve la métrica norte? (1=marginal, 5=transformador)
C — Confidence: ¿cuánta evidencia tienes? (1=intuición pura, 5=usuarios lo pidieron)
E — Effort: inverso — ¿cuánto cuesta? (5=1 día, 1=un mes)

Score = (R × I × C) / E

Usa el score para ordenar, nunca para decidir solo. El contexto siempre gana.
```

**El PRD mínimo viable para startup:**

```markdown
# [Nombre de la feature] — PRD v1
Fecha: [fecha] | Responsable: [nombre]

## El problema
[2-3 frases. ¿Qué dolor del usuario resuelve esto? ¿Evidencia de que existe?]

## La solución propuesta
[Descripción de lo que vamos a construir. Sin ambigüedad.]

## Criterios de éxito (qué mediremos)
- Métrica 1: [qué medir] → objetivo: [número] en [plazo]
- Métrica 2: [...]

## Fuera de scope (lo que NO hacemos ahora)
- [...]

## Dependencias y riesgos
- [...]

## Mocks / flujo (enlace a Figma o diagrama)
[link]
```

### Lo que te puede hundir en startup

- **Construir proceso antes de tener product-market fit.** Los procesos formales antes de PMF añaden fricción donde necesitas velocidad.
- **Roadmap rígido de 12 meses.** En startup, el horizonte de planificación confiable es de 4-6 semanas como máximo.
- **Esperar consenso para avanzar.** En startup el consenso es un lujo. Decide, comunica, ajusta.

---

## PM en empresa grande: lo que funciona y lo que te paraliza

### Lo que funciona en corporación

**La influencia sin autoridad — el superpoder del PM corporativo:**

El PM corporativo rara vez tiene autoridad directa sobre el equipo de ingeniería, diseño o datos. Su herramienta principal es la influencia. Cómo construirla:

```
1. Sé el más informado de la sala en tu dominio
   → Lee todos los tickets de soporte de tu área cada semana
   → Conoce las métricas mejor que cualquier stakeholder
   → Ten siempre datos para las decisiones, no opiniones

2. Crea coaliciones antes de las reuniones, no durante
   → Habla individualmente con cada stakeholder antes del comité
   → Llega a la reunión con el acuerdo ya hecho

3. Usa el lenguaje del negocio, no el lenguaje del producto
   → Habla en impacto de revenue, riesgo, coste operativo
   → Los ejecutivos deciden en euros y porcentajes, no en features
```

**El one-pager ejecutivo para grandes empresas:**

```
INICIATIVA: [Nombre]
Fecha: [fecha] | PM: [nombre] | Aprobación requerida de: [stakeholders]

RESUMEN EN 3 LÍNEAS:
[Qué vamos a hacer, por qué ahora, y qué resultado esperamos]

OPORTUNIDAD DE NEGOCIO:
- Segmento objetivo: [...]
- Impacto estimado en revenue/coste: [número con rango de confianza]
- Riesgo de no hacerlo: [...]

PROPUESTA:
- Alcance: [en una frase]
- Recursos requeridos: [equipo, presupuesto, plazo]
- Dependencias: [otras áreas o sistemas]

CRITERIOS DE ÉXITO:
- KPI 1: [métrica → objetivo → plazo]
- KPI 2: [...]

OPCIÓN ALTERNATIVA EVALUADA:
[Qué más se consideró y por qué se descartó]

RECOMENDACIÓN:
[Decisión propuesta + próximo paso concreto]
```

**Gestión del roadmap en contexto de OKRs corporativos:**

```
Cómo alinear tu roadmap con los OKRs de la empresa:

Q1 al inicio:
1. Identifica los OKRs de empresa y de tu VP/C-level
2. Mapea cada iniciativa de tu backlog a un OKR de empresa
3. Elimina o pospón lo que no mapea a ningún OKR
4. Documenta el mapping — te protege cuando pregunten "¿por qué hacemos esto?"

Durante el quarter:
- Weekly: revisa las KRs de tu squad, no el output (features entregadas)
- Monthly: actualiza el roadmap y comparte el estado con stakeholders
- Fin de quarter: retrospectiva de OKRs antes de planificar el siguiente
```

### Lo que te paraliza en corporación

- **Buscar la aprobación perfecta antes de empezar.** El "piloto con 3 clientes" te da validación rápida sin necesitar aprobación global.
- **Medir el éxito en features entregadas.** Las corporaciones tienden a medir output. Tú mide outcomes aunque nadie más lo haga.
- **Aislarte del usuario final.** En corporaciones el PM puede pasar semanas sin hablar con un usuario real. Bloquea tiempo de research en tu calendario, igual que cualquier reunión.

---

## Cuando cambias de contexto: guía de transición

**De startup a corporación:**
- Semanas 1-4: escucha más, propone menos. Mapea el poder real (no el organigrama)
- Meses 2-3: identifica a tus aliados naturales en ingeniería, datos y diseño
- Mes 4+: propón cambios pequeños, demuestra impacto, gana credibilidad para cambios grandes

**De corporación a startup:**
- Semana 1: asume que el 80% de los procesos que conoces no aplican aquí
- Meses 1-2: resiste el impulso de "ordenar" — el caos productivo de startup tiene su lógica
- Mes 3+: introduce proceso solo cuando el dolor de no tenerlo sea obvio para todos

---

Entrega: adapta el marco a mi contexto específico ([startup/corporación]), identifica mis 3 retos más probables en los próximos 90 días y dame el plan de acción concreto para operar con efectividad en [mi situación actual], incluyendo las herramientas y plantillas que debo adoptar primero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Adaptar el rol y los procesos de PM al tamaño y etapa de la empresa',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Performance Improvement Plan (PIP): cuándo usarlo, cómo diseñarlo y cómo ejecutarlo con dignidad',
                'description'      => 'Aprende a diseñar e implementar un Plan de Mejora del Desempeño que sea justo, legal y efectivo: cuándo un PIP es la herramienta adecuada, cómo estructurarlo con objetivos medibles y cómo acompañar al empleado para maximizar las posibilidades de éxito.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del desempeño y relaciones laborales con experiencia diseñando e implementando PIPs en empresas de diferentes tamaños y sectores, donde la diferencia entre un PIP bien diseñado y uno mal ejecutado es la diferencia entre recuperar a un empleado valioso, llegar a una salida pactada con dignidad, o enfrentarte a una demanda por despido improcedente.

Contexto de la situación:
- Tipo de empresa y sector: [tamaño, sector, convenio colectivo si aplica]
- Puesto del empleado y tiempo en la empresa: [cargo, antigüedad]
- Naturaleza del problema de desempeño: [resultados por debajo del objetivo / comportamiento / habilidades técnicas / actitud / otro]
- Historial de feedback previo: [conversaciones informales / feedback escrito / advertencias formales / ninguno]
- Objetivo del PIP en tu caso: [recuperación genuina / documentación para desvinculación / ambos]

---

## Cuándo usar un PIP (y cuándo NO)

### Cuándo un PIP tiene sentido

```
✅ El empleado tiene potencial pero un desempeño claramente por debajo del esperado
✅ El problema de desempeño es específico y medible, no una "sensación"
✅ Ya has dado feedback verbal claro y documentado, sin mejora sostenida
✅ El manager tiene tiempo y voluntad real de acompañar al empleado
✅ Las expectativas del puesto están escritas y fueron comunicadas desde el inicio
✅ El área de RRHH o legal ha validado el proceso antes de empezarlo
```

### Cuándo un PIP NO es la herramienta adecuada

```
❌ Cuando ya has decidido que la persona se va — el PIP no es para eso,
   y usarlo así es de mala fe y te expone legalmente
❌ Cuando el problema es de fit cultural o de relación con el manager,
   no de desempeño objetivo
❌ Cuando las expectativas del puesto nunca fueron claras por escrito
❌ Cuando es un problema sistémico del equipo, no individual
❌ Cuando no vas a dar soporte real durante el proceso
❌ Cuando el empleado acaba de pasar por algo personal grave (enfermedad,
   duelo) sin haber tenido tiempo de recuperarse
```

---

## Estructura del PIP: los 6 componentes esenciales

### 1. Descripción del problema de desempeño

**Cómo documentarlo con precisión:**

```
❌ MAL (vago e indefendible):
"Carlos no cumple con las expectativas del puesto y su actitud
en el equipo no es la adecuada."

✅ BIEN (específico, medible, con evidencia):
"Durante los últimos 3 meses (julio-septiembre 2025), Carlos ha
entregado un promedio de 4 propuestas comerciales por semana,
frente al objetivo establecido para su puesto de 8 propuestas
semanales. En las revisiones de calidad de agosto, el 60% de sus
propuestas requirieron revisión antes de enviarse al cliente,
frente al 15% del promedio del equipo. En las reuniones del equipo
de los días 12/08 y 3/09, llegó con 20+ minutos de retraso sin
comunicarlo previamente."
```

### 2. Expectativas claras y medibles

**Plantilla de objetivos SMART para el PIP:**

| Área | Situación actual | Objetivo durante el PIP | Cómo se mide |
|---|---|---|---|
| Volumen de propuestas | 4/semana | Mínimo 7/semana desde semana 3 | Registro en CRM |
| Calidad de propuestas | 60% requieren revisión | Máximo 20% requieren revisión | Revisión del manager |
| Puntualidad en reuniones | 2 retrasos en 2 meses | 0 retrasos durante el PIP | Registro de asistencia |
| [Área 3] | [...] | [...] | [...] |

**Regla de oro:** si no puedes medir el objetivo de forma objetiva, no es un objetivo de PIP. Es una opinión.

### 3. Plazo del PIP

```
Plazos recomendados según la naturaleza del problema:

Habilidades técnicas específicas: 60-90 días
  → El aprendizaje requiere tiempo de práctica

Resultados (ventas, producción, calidad): 30-60 días
  → Los resultados deben verse rápido si hay voluntad de mejora

Comportamiento y actitud: 30-45 días
  → El cambio de comportamiento es visible relativamente pronto

Regla: el plazo tiene que ser suficiente para que la mejora sea
posible con esfuerzo real, pero no tan largo que el mensaje
de urgencia se diluya.
```

### 4. Recursos y soporte comprometidos por la empresa

**Este es el punto que más se olvida y el que más diferencia un PIP legítimo de uno de mala fe:**

```
Recursos que la empresa se compromete a proporcionar durante el PIP:
□ Sesiones de 1:1 semanales con el manager (día, hora, duración)
□ Formación específica: [nombre del curso / coaching / mentoring]
□ Acceso a [herramienta / información / soporte técnico]
□ Feedback escrito después de cada revisión de desempeño
□ [Otro recurso específico al caso]

El empleado tiene que salir de la reunión del PIP sintiendo que
la empresa quiere que tenga éxito, no que ya lo han descartado.
```

### 5. Consecuencias claras

```
"Si al finalizar el período del PIP ([fecha de fin]) los objetivos
descritos en este documento no se han alcanzado de forma sostenida,
la empresa tomará las medidas disciplinarias correspondientes, que
podrían incluir la terminación de la relación laboral."

Importante: la frase tiene que ser directa pero no amenazante.
El empleado tiene que entender las consecuencias, no sentirse
acorralado desde el día 1.
```

### 6. Firmas y acuses de recibo

```
El documento debe incluir:
- Firma del empleado (no implica acuerdo, solo recepción)
- Firma del manager directo
- Firma del representante de RRHH
- Fecha de entrega

Si el empleado se niega a firmar:
→ Pon en el documento: "El empleado fue informado de este plan
   el [fecha] en presencia de [testigo] y se negó a firmarlo."
→ Envía copia por correo certificado o email con confirmación de lectura
```

---

## La reunión de inicio del PIP: guión para el manager

**Antes de la reunión:**
- RRHH ha revisado y validado el PIP
- Tienes el documento impreso y en PDF
- Has elegido un lugar privado, sin interrupciones
- La reunión está bloqueada en el calendario con tiempo suficiente (45-60 min)
- No lo haces en viernes por la tarde ni antes de un puente

**Guión de apertura:**
```
"[Nombre], gracias por venir. Esta reunión es importante y quiero
ser directo contigo porque te lo mereces.

Llevamos [X semanas/meses] trabajando en [el área de mejora] y,
a pesar de las conversaciones que hemos tenido los días [fechas],
no estamos viendo el progreso que necesitamos.

Por eso hemos preparado este Plan de Mejora del Desempeño. Su
objetivo es darte un marco claro de qué esperamos, en qué plazo,
y qué apoyo vas a tener de nuestra parte para lograrlo.

Quiero que esto funcione. El objetivo no es llegar a una salida
— el objetivo es que en [fecha de fin del PIP] estés cumpliendo
los objetivos de tu puesto."
```

**Al final de la reunión:**
```
"¿Tienes alguna pregunta sobre lo que acabas de leer?
¿Hay algo del contexto o de las circunstancias que no
hemos tenido en cuenta y que crees que debería saber?"

[Escucha activamente. Pueden aparecer factores que no conocías
y que cambian la situación: problemas de salud, problemas con
herramientas o procesos internos, falta de formación que nunca
se proporcionó.]
```

---

## Seguimiento durante el PIP

**Cadencia de check-ins recomendada:**

```
Semana 1: reunión de seguimiento (30 min)
  → ¿Cómo va el primer objetivo? ¿Hay obstáculos?
  → Feedback inmediato, escrito después de la reunión

Semana 2-3: check-in rápido (15 min) + feedback escrito
  → Revisión de métricas vs. objetivos del PIP

Semana 4: revisión de mitad de período (45 min)
  → Balance: ¿está en el camino? ¿Necesitas ajustar algo?
  → Si el progreso es bueno: refuerzo positivo explícito
  → Si no hay progreso: aviso claro de las consecuencias

Semana final: reunión de cierre (60 min)
  → Decisión: superado / no superado / extensión justificada
```

**Registro de cada sesión (nunca verbal únicamente):**
```
PIP CHECK-IN — [Nombre empleado] — [Fecha]

Objetivos revisados:
- Objetivo 1: [Resultado actual] vs. [Objetivo] → Estado: ✅/⚠️/❌
- Objetivo 2: [...]

Observaciones:
[Qué ocurrió bien, qué sigue sin mejora, qué acordamos]

Próximos pasos comprometidos:
- Empleado: [...]
- Manager/empresa: [...]

Fecha próxima reunión: [...]
Firmado: [Manager] — [Empleado]
```

---

Entrega: diseña el PIP completo para mi caso ([descripción breve de la situación]), con los objetivos SMART adaptados al puesto ([cargo]), el plazo adecuado y el guión para la reunión de inicio, teniendo en cuenta el historial de feedback previo ([lo que ya se hizo]).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar e implementar un Plan de Mejora del Desempeño justo, legal y efectivo',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Evaluación y gestión de proyectos de inversión CAPEX: aprobación, seguimiento y control de activos',
                'description'      => 'Domina el proceso completo de gestión de inversiones en activos fijos: cómo preparar la solicitud de CAPEX con criterios financieros sólidos, cómo hacer el seguimiento del proyecto de inversión y cómo controlar el retorno sobre la inversión real vs. el presupuestado.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en finanzas corporativas y control de gestión con especialización en la evaluación y seguimiento de proyectos de inversión en activos fijos (CAPEX), donde la diferencia entre una empresa que crea valor y una que destruye caja está frecuentemente en la disciplina con la que aprueba, ejecuta y controla sus inversiones de capital.

Contexto de mi proyecto:
- Tipo de inversión CAPEX: [maquinaria / tecnología / reforma de instalaciones / vehículos / desarrollo de software / otro]
- Importe estimado de la inversión: [rango en euros]
- Vida útil esperada del activo: [años]
- Objetivo de la inversión: [reducir costes operativos / aumentar capacidad / cumplimiento normativo / mejora de calidad / otro]
- Proceso actual de aprobación de CAPEX en tu empresa: [informal / formulario básico / proceso estructurado con comité]

---

## Marco de evaluación financiera del CAPEX

### Los 4 criterios financieros que debe superar cualquier inversión

**1. Payback Period (período de recuperación)**

```
Fórmula: Payback = Inversión inicial / Flujo de caja anual neto

Ejemplo:
Inversión en nueva línea de producción: 200.000€
Ahorro anual en costes operativos: 60.000€
Payback = 200.000 / 60.000 = 3,3 años

Referencia por tipo de inversión:
- Tecnología (vida útil corta):  objetivo <2 años
- Maquinaria industrial:          objetivo <4 años
- Inmuebles e infraestructura:    objetivo <7 años
- Energía renovable:              objetivo <6 años

Limitación: el payback ignora el valor temporal del dinero.
Úsalo como filtro rápido, no como criterio único.
```

**2. VAN — Valor Actual Neto**

```
Fórmula: VAN = -I₀ + Σ (FCₜ / (1+r)ᵗ)

Donde:
I₀ = inversión inicial
FCₜ = flujo de caja del año t
r   = tasa de descuento (WACC de la empresa, típicamente 8-15%)
t   = año del flujo

Regla de decisión:
VAN > 0 → la inversión crea valor → APROBAR (financieramente)
VAN = 0 → la inversión cubre el coste de capital → NEUTRAL
VAN < 0 → la inversión destruye valor → RECHAZAR (salvo razón estratégica)

Ejemplo (tasa de descuento = 10%, inversión 200.000€):
Año 1: 60.000 / (1,10)¹ = 54.545€
Año 2: 65.000 / (1,10)² = 53.719€
Año 3: 70.000 / (1,10)³ = 52.592€
Año 4: 70.000 / (1,10)⁴ = 47.811€
Año 5: 70.000 / (1,10)⁵ = 43.464€
Valor residual: 20.000 / (1,10)⁵ = 12.418€

VAN = -200.000 + 264.549 = +64.549€ ✅
```

**3. TIR — Tasa Interna de Retorno**

```
La TIR es la tasa de descuento que hace el VAN = 0.
Es la rentabilidad implícita de la inversión.

Regla de decisión:
TIR > WACC → la inversión es rentable → APROBAR
TIR < WACC → la inversión no cubre el coste de capital → RECHAZAR

En el ejemplo anterior, la TIR es aproximadamente 28%.
Con un WACC del 10%, la inversión tiene un colchón de rentabilidad amplio.

En Excel: =TIR(rango de flujos incluyendo la inversión como negativo)
En Google Sheets: =IRR(rango)
```

**4. Índice de Rentabilidad (Profitability Index)**

```
PI = (VAN + Inversión) / Inversión = Valor Presente de Flujos / Inversión

PI > 1 → APROBAR
PI < 1 → RECHAZAR

En el ejemplo: PI = 264.549 / 200.000 = 1,32

Útil cuando tienes varios proyectos compitiendo por el mismo presupuesto:
ordénalos por PI para maximizar el valor creado con el capital disponible.
```

---

## La solicitud de CAPEX: plantilla ejecutiva

```
SOLICITUD DE INVERSIÓN CAPEX
Número de proyecto: CAPEX-[año]-[número]
Fecha: [fecha]
Solicitante: [nombre y departamento]
Aprobación requerida: [nivel según importe]

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
1. RESUMEN EJECUTIVO (máx. 3 párrafos)
[Qué se solicita, por qué ahora, qué pasa si no se hace]

2. DESCRIPCIÓN DE LA INVERSIÓN
Activo/proyecto: [descripción]
Proveedor(es): [nombre(s), si ya está(n) seleccionado(s)]
Importe total solicitado: [€]
  Desglose: equipos [€] / instalación [€] / formación [€] / contingencia [€]
Fecha prevista de inicio: [fecha]
Fecha prevista de puesta en marcha: [fecha]
Vida útil esperada: [años]
Amortización propuesta: [método y plazo]

3. JUSTIFICACIÓN Y ALTERNATIVAS EVALUADAS
Opción A (recomendada): [descripción] — Coste: [€]
Opción B: [descripción] — Coste: [€] — Descartada porque: [razón]
Opción C — No hacer nada: [coste o riesgo de no invertir]

4. ANÁLISIS FINANCIERO
Inversión inicial total: [€]
Flujos de caja proyectados:
  Año 1: [€] | Año 2: [€] | Año 3: [€] | Año 4: [€] | Año 5: [€]
Payback: [años]
VAN (tasa [%]%): [€]
TIR: [%]
Índice de Rentabilidad: [número]

Supuestos clave del análisis:
- [Supuesto 1: e.g. ahorro en personal equivalente a 1,5 FTE]
- [Supuesto 2: e.g. precio de energía estable]
- [Supuesto 3: e.g. vida útil del activo conservadora en 5 años, aunque el fabricante garantiza 8]

Análisis de sensibilidad:
  Escenario base (prob. 60%): VAN = [€], TIR = [%]
  Escenario pesimista (prob. 25%): VAN = [€], TIR = [%]
  Escenario optimista (prob. 15%): VAN = [€], TIR = [%]

5. RIESGOS Y MITIGACIÓN
[Riesgo 1]: [impacto] — Mitigación: [acción]
[Riesgo 2]: [impacto] — Mitigación: [acción]

6. IMPACTO OPERATIVO Y ORGANIZACIONAL
[Cambios en headcount, procesos, formación necesaria]

7. APROBACIONES
Solicitante: [firma] Fecha:
Director de área: [firma] Fecha:
Director Financiero: [firma] Fecha:
CEO/Comité (si aplica): [firma] Fecha:
```

---

## Seguimiento y control del proyecto de inversión

### KPIs de control durante la ejecución

```
Tablero de control CAPEX (actualización mensual):

ESTADO DEL PROYECTO: [En plazo ✅ / En riesgo ⚠️ / Retrasado ❌]

PRESUPUESTO:
  Aprobado:    [€]
  Comprometido (contratos firmados): [€]
  Gastado a fecha: [€]
  Desviación: [€] ([%])
  Previsión al cierre: [€]

PLAZO:
  Fecha inicio aprobada: [fecha]
  Fecha inicio real: [fecha]
  Fecha fin aprobada: [fecha]
  Previsión fecha fin: [fecha]
  Desviación: [días]

HITOS:
  [Hito 1] → Previsto: [fecha] / Real: [fecha] / Estado: [✅/⚠️/❌]
  [Hito 2] → Previsto: [fecha] / Real: [fecha] / Estado: [✅/⚠️/❌]

ALERTAS Y ACCIONES:
  [Descripción del desvío si existe y acción correctora propuesta]
```

### Post-implementation review (PIR): el paso que nadie hace y que más enseña

A los 12 meses de la puesta en marcha, revisa si la inversión cumplió lo prometido:

```
POST-IMPLEMENTATION REVIEW — CAPEX-[año]-[número]
Fecha de revisión: [12 meses después de la puesta en marcha]

INVERSIÓN REAL vs. PRESUPUESTADA:
  Presupuestado: [€] / Real: [€] / Desviación: [€] ([%])

BENEFICIOS REALES vs. PROYECTADOS (año 1):
  Proyectado: [€] / Real: [€] / Desviación: [€] ([%])

PAYBACK ACTUALIZADO: [años] (vs. [años] en la solicitud)
VAN ACTUALIZADO: [€] (vs. [€] en la solicitud)

LECCIONES APRENDIDAS:
  Qué subestimamos: [...]
  Qué sobreestimamos: [...]
  Qué cambiaríamos en el proceso de aprobación: [...]

RECOMENDACIONES PARA FUTURAS INVERSIONES SIMILARES:
  [...]
```

---

Entrega: prepara la solicitud de CAPEX completa para mi inversión en [tipo de activo] por [importe estimado]€, con el análisis financiero a [vida útil] años usando una tasa de descuento del [%]%, los supuestos clave y el análisis de sensibilidad para el escenario pesimista y el optimista.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar y gestionar solicitudes de inversión en activos fijos con rigor financiero',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Reclamaciones de consumidores y gestión de devoluciones: protocolo legal ante garantías, desistimientos y quejas formales',
                'description'      => 'Diseña el protocolo legal y operativo para gestionar reclamaciones de consumidores, devoluciones y ejercicio de garantías conforme a la normativa española y europea, minimizando el riesgo legal y la pérdida de clientes.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho del consumo y comercio electrónico con experiencia asesorando a empresas de e-commerce, retail y servicios en España, donde el incumplimiento de los derechos de los consumidores no solo genera sanciones de hasta 100.000€ sino que destruye la reputación en un entorno donde una reseña negativa llega a miles de potenciales compradores.

Contexto de mi negocio:
- Tipo de negocio: [e-commerce / tienda física / servicios / suscripción / marketplace]
- Volumen de ventas mensual: [número de pedidos o facturación aproximada]
- Mercado principal: [España / España + UE / España + internacional]
- Principales tipos de reclamación que recibes: [devoluciones / productos defectuosos / retrasos de envío / insatisfacción / fraude]
- Proceso actual de gestión: [sin proceso definido / gestión manual caso a caso / proceso automatizado parcialmente]

---

## Marco legal aplicable en España

### La normativa que debes conocer (actualizada 2024)

```
1. Real Decreto Legislativo 1/2007 (TRLGDCU) — Texto Refundido
   de la Ley General para la Defensa de los Consumidores y Usuarios
   → Base de todos los derechos de los consumidores en España

2. Directiva 2019/771 sobre contratos de compraventa de bienes
   → Transpuesta en España en 2022: amplía la garantía legal a 3 años
   → Presunción de falta de conformidad: 2 años desde la entrega

3. Directiva 2011/83/UE sobre derechos de los consumidores
   → Derecho de desistimiento de 14 días en ventas a distancia
   → Información precontractual obligatoria

4. Reglamento ODR (Online Dispute Resolution) 2013/524
   → Plataforma europea de resolución de litigios online
   → Obligatorio enlazarla en tu web si vendes online en la UE
```

---

## El derecho de desistimiento: lo que hay que hacer bien

### Cuándo aplica y cuándo no

**Aplica en ventas a distancia (online, teléfono, fuera del establecimiento):**
- El consumidor tiene **14 días naturales** para desistir sin justificación
- El plazo empieza desde la recepción del bien (no desde la compra)
- No aplica a empresas comprando a empresas (B2B)

**Excepciones al derecho de desistimiento (no aplica en):**

```
❌ Bienes elaborados a medida o claramente personalizados
❌ Bienes que puedan deteriorarse o caducar rápidamente (alimentos frescos)
❌ Bienes precintados que no sean aptos para devolución por razones
   de protección de la salud o higiene (cosméticos abiertos, etc.)
❌ Grabaciones de audio/vídeo o programas informáticos precintados
   si se han abierto
❌ Periódicos, revistas o publicaciones periódicas
❌ Contratos de alojamiento, transporte, alquiler de vehículos
   y restauración para una fecha o período específico
❌ Servicios completamente ejecutados antes del plazo de desistimiento
   (con consentimiento expreso del consumidor)
```

### Plantilla de formulario de desistimiento (obligatorio)

```
FORMULARIO DE DESISTIMIENTO
(solo debe cumplimentarlo y enviarlo si desea desistir del contrato)

A la atención de: [Nombre empresa], [Dirección], [Email]

Por la presente le comunico que desisto de mi contrato de venta
del siguiente bien/servicio:

Pedido nº: ___________________
Fecha de recepción: ___________________
Nombre del consumidor: ___________________
Dirección del consumidor: ___________________
Firma (solo si se presenta en papel): ___________________
Fecha: ___________________
```

**Plazo de respuesta obligatorio:**
```
El comercio tiene 14 días para devolver el importe íntegro,
incluyendo los gastos de envío de entrada.
NO puede retener el reembolso hasta recibir el bien devuelto,
salvo que ofrezca recogerlo él mismo.

Los gastos de devolución (envío de vuelta) pueden ir a cargo
del consumidor si se informó de ello antes de la compra.
```

---

## La garantía legal: el marco de 3 años

### Plazos que aplican desde 2022

```
GARANTÍA LEGAL (obligatoria, el vendedor no puede reducirla):

Bienes nuevos: 3 años desde la entrega
  → Presunción de falta de conformidad: primeros 2 años
     (el vendedor tiene que demostrar que el defecto no existía al entregar)
  → Tercer año: la carga de la prueba se invierte
     (el consumidor debe demostrar que el defecto existía al comprar)

Bienes de segunda mano: mínimo 1 año (pueden pactar hasta 2)
  → Los vendedores particulares entre sí no tienen esta obligación
  → Las plataformas que intermedian ventas entre particulares tienen
     responsabilidades específicas bajo el DSA (Digital Services Act)

Contenidos y servicios digitales: 2 años o durante toda la duración
del contrato si es un servicio de suscripción
```

### Protocolo de gestión de garantías

**Paso 1 — Evaluación inicial de la reclamación (48h):**

```
Formulario interno de evaluación:
□ ¿Es consumidor? (persona física para uso privado, no empresarial)
□ ¿Está dentro del plazo de garantía? (fecha de compra + 3 años)
□ ¿Cuál es el defecto declarado? (descripción exacta del cliente)
□ ¿Es un defecto de falta de conformidad o mal uso?
  → Si hay duda, el beneficio de la duda va al consumidor los primeros 2 años
□ ¿Tiene el cliente justificante de compra? (ticket, confirmación de pedido)
```

**Paso 2 — Opciones de resolución (en este orden de preferencia del vendedor):**

```
OPCIÓN 1: Reparación
  → Gratuita para el consumidor
  → Plazo razonable (jurisprudencia: máximo 30 días)
  → Si tras la reparación reaparece el mismo defecto: el consumidor
     puede exigir sustitución o resolución

OPCIÓN 2: Sustitución
  → Si la reparación no es posible o tarda demasiado
  → Por producto equivalente o superior

OPCIÓN 3: Reducción del precio
  → Si el consumidor no quiere reparación ni sustitución
  → Proporcional a la falta de conformidad

OPCIÓN 4: Resolución del contrato (devolución íntegra)
  → Último recurso o cuando el defecto es grave
  → El consumidor devuelve el bien en el estado en que lo recibió
```

---

## Reclamaciones formales: el proceso paso a paso

### Cuando el cliente abre una reclamación formal

```
Canales por los que puede llegar:
1. Hoja de Reclamaciones (física o electrónica según CCAA)
2. OMIC (Oficina Municipal de Información al Consumidor)
3. Organismos de consumo autonómicos
4. Juntas Arbitrales de Consumo (arbitraje gratuito y vinculante si te adhieres)
5. Plataforma ODR de la UE (ventas online transfronterizas)
6. Juzgado de lo Mercantil (vía judicial directa)
```

**Plantilla de respuesta a reclamación formal (plazo: máximo 10-15 días hábiles según CCAA):**

```
Estimado/a [Nombre del consumidor]:

Hemos recibido su reclamación de fecha [fecha] con número de expediente
[número], relativa a [descripción breve del motivo de la reclamación].

Tras revisar los hechos expuestos y la documentación aportada,
nuestra posición es la siguiente:

[Opción A — Aceptamos la reclamación]:
"Tras revisar su reclamación, reconocemos que [descripción del
problema] y procedemos a [solución: reembolso / sustitución /
reparación] con efectos inmediatos / en un plazo de [X días]."

[Opción B — Rechazamos la reclamación con justificación]:
"Tras revisar los hechos, consideramos que [razón justificada:
el producto fue usado de forma incorrecta / el plazo de garantía
ha vencido / el defecto no es de origen sino de uso]. No obstante,
como gesto de buena voluntad, le ofrecemos [gesto: descuento,
reparación a precio reducido, etc.]."

En caso de no estar conforme con nuestra respuesta, le informamos
de que puede acudir a [Junta Arbitral de Consumo de [ciudad] /
OMIC de [localidad] / Plataforma ODR: ec.europa.eu/consumers/odr].

Atentamente,
[Nombre] — Departamento de Atención al Cliente
[Empresa] — [Datos de contacto]
```

---

## Política de devoluciones y garantías en la web: lo obligatorio

**Información que debe constar en tu web antes de la compra:**

```
✅ Existencia del derecho de desistimiento y plazo (14 días)
✅ Procedimiento para ejercer el desistimiento
✅ Quién asume los gastos de devolución
✅ Plazo de reembolso (máx. 14 días)
✅ Condiciones del producto devuelto aceptado
✅ Plazo de garantía legal (3 años bienes nuevos)
✅ Procedimiento para ejercer la garantía
✅ Enlace a la plataforma ODR de la UE (si vendes online en la UE)
✅ Existencia de hojas de reclamaciones y dónde solicitarlas
```

---

Entrega: crea el protocolo completo de gestión de reclamaciones para mi negocio ([tipo de negocio]), con las plantillas de respuesta adaptadas a los tipos de reclamación más frecuentes que recibo ([tipos de reclamación]), y el árbol de decisión interno para que el equipo de atención al cliente gestione cada caso con seguridad jurídica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar reclamaciones de consumidores con seguridad jurídica y eficiencia operativa',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer education y academia de clientes: forma a tus usuarios para que usen mejor el producto',
                'description'      => 'Diseña y lanza una academia de clientes que reduce el volumen de soporte, acelera la adopción del producto y convierte a los usuarios más formados en los que más renuevan y expanden su uso.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer education y diseño de programas de formación para clientes de empresas SaaS y servicios digitales, donde los datos son consistentes: los clientes que completan al menos un módulo de formación tienen tasas de retención entre un 25% y un 40% más altas y generan entre un 15% y un 30% menos de tickets de soporte que los que no se forman.

Contexto de mi empresa:
- Tipo de producto: [SaaS / plataforma digital / servicio complejo / app de gestión]
- Tamaño del equipo de CS/soporte: [número de personas]
- Volumen de tickets de soporte mensual: [aproximado]
- Porcentaje de tickets sobre "cómo hacer X": [estimado: 40% / 60% / 80%]
- Herramienta de LMS o base de conocimiento que tienes o evalúas: [Intercom / Zendesk / Notion / Teachable / Thinkific / Loom / otra]

---

## Por qué la educación del cliente es una estrategia de negocio, no solo de soporte

### El impacto financiero de un programa de customer education

```
Métricas que se mueven con un buen programa de formación:

SOPORTE:
- Reducción de tickets: -20% a -50% en 6 meses
- Reducción del tiempo medio de resolución: -15% (los clientes describen
  mejor el problema cuando entienden el producto)
- Autoservicio: 30-60% de los "cómo hacer X" se resuelven con la academia

RETENCIÓN Y EXPANSIÓN:
- Clientes con certificación o nivel avanzado: churn 35-50% menor
- NPS de clientes con >2 cursos completados: 15-20 puntos más alto
- Expansión (upsell/cross-sell): 20-30% más probable en clientes formados

ADQUISICIÓN:
- El contenido educativo abierto al público (SEO) genera leads cualificados
- Las academias públicas se convierten en diferenciador competitivo
```

---

## El framework de diseño: los 5 niveles de madurez educativa

### Nivel 1 — Base de conocimiento reactiva (FAQ y artículos)

```
Cuándo: cuando tus tickets repetitivos superan el 30% del volumen

Estructura mínima por área funcional:
- Getting Started: los primeros 5 pasos que todo usuario debe dar
- Cómo hacer [las 10 acciones más frecuentes]
- Solución a los [5 errores más comunes]
- Glosario de términos del producto

Formato recomendado:
→ Artículos cortos (máx. 500 palabras) con capturas de pantalla actualizadas
→ Vídeo corto (2-3 min) embebido en el artículo para procesos visuales
→ Búsqueda funcional — el 80% de los usuarios llega por búsqueda, no navegando

KPI: Tasa de resolución sin contacto con soporte (deflection rate)
Objetivo inicial: 15-25% de los usuarios que visitan la KB no abren ticket
```

### Nivel 2 — Onboarding educativo estructurado

```
Cuándo: cuando el time-to-value (tiempo hasta el primer éxito) supera
los 7-14 días

Diseño del programa de onboarding:

SEMANA 1 — Activación básica:
  Módulo 1.1: Configura tu cuenta (10 min, vídeo + checklist)
  Módulo 1.2: Crea tu primer [objeto central del producto] (15 min)
  Módulo 1.3: Invita a tu equipo (5 min)
  ✅ Checkpoint: el usuario ha completado las 3 acciones clave del día 1

SEMANA 2 — Adopción de features clave:
  Módulo 2.1: [Feature que más impacto tiene en el valor percibido]
  Módulo 2.2: [Integración más popular]
  Módulo 2.3: [Feature que más diferencia a los usuarios que renuevan]

SEMANA 3-4 — Optimización:
  Módulo 3.1: Buenas prácticas de los usuarios más avanzados
  Módulo 3.2: Automatizaciones y configuraciones avanzadas
  Módulo 3.3: Cómo medir el impacto con [las métricas del producto]
```

### Nivel 3 — Academia de clientes con rutas de aprendizaje

```
Arquitectura de la academia (ejemplo para un SaaS de gestión):

RUTA 1: Inicio rápido (para nuevos usuarios)
  Certificado: "[Producto] Essentials"
  Módulos: 4-6 | Duración total: 2-3 horas

RUTA 2: Avanzado por rol
  Certificado: "[Producto] para [Rol: Admin / Manager / Analista]"
  Módulos: 6-8 | Duración total: 4-6 horas

RUTA 3: Integrador o partner
  Certificado: "[Producto] Partner Certified"
  Módulos: 10-12 | Duración total: 8-10 horas

Principios de diseño de cada módulo:
→ Máximo 15 minutos por módulo (la atención cae drásticamente a partir de ahí)
→ Un solo objetivo de aprendizaje por módulo (no "aprenderás 10 cosas")
→ Quiz al final: mínimo 70% para pasar al siguiente (refuerza la retención)
→ Ejercicio práctico: el usuario hace algo en el producto real, no solo lee
→ Progreso visible: barra de progreso y % completado siempre visible
```

### Nivel 4 — Comunidad de aprendizaje entre pares

```
La capa más poderosa: los usuarios expertos que ayudan a los nuevos.

Estructura mínima:
- Foro de preguntas y respuestas: categorizado por área funcional
- Programa de "Product Expert" o "Champion": usuarios avanzados
  que responden preguntas a cambio de acceso anticipado y visibilidad
- Sesiones de "power user tips": grabadas y añadidas a la academia
- Casos de uso reales de la comunidad: documentados con plantilla

Incentivos para los usuarios que contribuyen:
  Badge visible en su perfil → reconocimiento
  Acceso anticipado a betas → utilidad
  Mención en newsletter → visibilidad externa
  Co-autoría en casos de éxito → reputación profesional
```

### Nivel 5 — Certificación profesional pública

```
Cuándo tiene sentido: cuando tu producto requiere habilidad real
para dominarlo y los usuarios pueden añadir la certificación a su CV.

Estructura del programa de certificación:
- Examen de 40-60 preguntas (nivel mínimo de aprobación: 80%)
- Certificado con nombre, fecha y URL de verificación única
- Publicable en LinkedIn (integración con LinkedIn Learning o URL directa)
- Renovación anual (mantiene el engagement a largo plazo)

ROI del programa de certificación:
→ Los usuarios certificados tienen un LTV 2-3x mayor
→ El programa genera leads: profesionales que buscan la certificación
   para su CV llegan a la empresa a través de la academia
→ Diferenciador en ventas: "tenemos la única certificación del sector en X"
```

---

## Plan de lanzamiento de la academia en 90 días

```
SEMANAS 1-2: Auditoría de contenido existente
  □ Exporta los 20 tickets más frecuentes de soporte
  □ Identifica los 5 temas más buscados en tu base de conocimiento
  □ Entrevista a 3-5 usuarios avanzados: "¿qué tardaste más en aprender?"
  □ Define los 3 "primeros éxitos" que todo usuario debe alcanzar en la semana 1

SEMANAS 3-5: Producción del contenido núcleo
  □ Graba el módulo Getting Started (10-15 min, calidad media es suficiente)
  □ Escribe los 10 artículos de los problemas más frecuentes
  □ Crea la ruta de aprendizaje básica (nivel 1) con 4-6 módulos

SEMANAS 6-8: Configuración de la plataforma y lanzamiento beta
  □ Configura el LMS elegido (Teachable / Thinkific / Notion + Loom)
  □ Lanza a 20-30 clientes seleccionados para feedback
  □ Integra la academia en el flujo de onboarding de nuevos clientes

SEMANAS 9-12: Lanzamiento general y primeros KPIs
  □ Anuncia la academia a toda tu base de clientes
  □ Mide: tasa de completación, deflection rate, NPS de usuarios que formaron
  □ Ajusta los módulos con mayor tasa de abandono
```

---

## Métricas que importan para justificar la inversión

| Métrica | Fórmula | Objetivo mes 3 | Objetivo mes 12 |
|---|---|---|---|
| Tasa de completación | Módulos completados / Módulos iniciados | >40% | >60% |
| Deflection rate | Usuarios que visitaron KB y NO abrieron ticket / Total visitantes KB | >20% | >40% |
| Ticket deflection value | Tickets evitados × coste medio por ticket | Mide el ROI | Mide el ROI |
| Certificaciones emitidas | Total certificados en los últimos 30 días | 10+ | 50+ |
| Retención certificados vs. no certificados | Churn rate comparado | -20% churn | -35% churn |

---

Entrega: diseña el plan de lanzamiento de la academia de clientes para mi empresa ([tipo de producto]), con la arquitectura de cursos del nivel 1 y 2, los primeros 10 artículos que debo crear basados en los tickets más frecuentes ([ejemplos de temas frecuentes]) y el plan de 90 días adaptado a mi equipo ([tamaño del equipo]).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar un programa de customer education que reduce soporte y mejora la retención',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Reputación online como freelance: gestiona reseñas, portfolio y presencia web para atraer clientes premium',
                'description'      => 'Construye una presencia digital sólida que posiciona tu trabajo freelance en el segmento premium: cómo gestionar y solicitar reseñas estratégicamente, qué mostrar en tu portfolio para atraer clientes de mayor ticket y cómo optimizar cada punto de contacto digital para que el cliente llegue convencido antes de hablar contigo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing personal para freelances y consultores independientes con experiencia ayudando a profesionales de diseño, desarrollo, consultoría y servicios creativos a posicionarse en el segmento premium, donde la diferencia de tarifa entre un freelance con reputación sólida y uno sin ella puede ser del 200-400% por el mismo trabajo objetivo.

Contexto de mi situación:
- Especialidad freelance: [diseño web / desarrollo / copywriting / consultoría / fotografía / marketing / otro]
- Ticket medio actual: [rango en euros por proyecto o mensual]
- Ticket al que quieres llegar: [rango objetivo]
- Presencia digital actual: [web propia / solo LinkedIn / perfil en plataforma (Workana, Fiverr, Toptal) / sin presencia estructurada]
- Principal canal por el que llegas a nuevos clientes: [referidos / LinkedIn / plataformas / boca a boca / búsqueda orgánica]

---

## El ecosistema de reputación online del freelance premium

### Los 5 pilares que construyen (o destruyen) tu reputación

```
1. RESEÑAS Y TESTIMONIALES
   → Dónde: Google My Business, LinkedIn, tu web, Clutch, Trustpilot
   → Qué importa: especificidad, resultados concretos, credibilidad del autor
   → Error frecuente: pedir solo "una reseña" sin orientar el contenido

2. PORTFOLIO
   → Dónde: tu web, Behance, Dribbble, GitHub, casos de estudio en PDF
   → Qué importa: el problema que resolviste, no solo cómo quedó
   → Error frecuente: mostrar el resultado sin el contexto del reto

3. PRESENCIA EN LINKEDIN
   → Dónde: perfil, publicaciones, comentarios, recomendaciones
   → Qué importa: coherencia entre lo que dices y lo que muestran tus clientes
   → Error frecuente: perfil desactualizado o sin actividad

4. WEB PERSONAL / LANDING
   → Dónde: tu dominio propio, no en WordPress.com ni Wix gratuito
   → Qué importa: claridad de propuesta de valor, prueba social visible, CTA claro
   → Error frecuente: hablar de tí mismo en lugar de hablar del cliente

5. CONTENIDO Y POSICIONAMIENTO DE AUTORIDAD
   → Dónde: blog, newsletter, podcast, publicaciones en LinkedIn
   → Qué importa: consistencia y relevancia para tu cliente ideal
   → Error frecuente: publicar de todo para todos
```

---

## Reseñas: cómo conseguirlas y hacerlas funcionar

### El momento de pedir la reseña

```
El mejor momento: cuando el cliente acaba de recibir un resultado positivo.
No al final del proyecto (cuando ya ha pasado la emoción del logro),
sino justo en el momento del "¡Esto quedó perfecto!" o "Los números
ya están subiendo."

Señales de que es el momento:
→ El cliente te envía un mensaje positivo espontáneo
→ Acaban de ver los primeros resultados del trabajo
→ Han validado la entrega y están satisfechos
→ Te piden una segunda fase o un nuevo proyecto
```

**Mensaje de solicitud de reseña que funciona:**

```
Asunto: ¿Te haría un favor grande?

Hola [Nombre],

Me alegra muchísimo que [resultado concreto que acaban de conseguir]
esté yendo tan bien.

Te pido un favor: ¿podrías dejar una breve reseña en [plataforma]?
Para mí tiene mucho valor porque ayuda a clientes nuevos a entender
con qué tipo de proyectos trabajo y qué tipo de resultados pueden esperar.

Si te ayuda, estas preguntas suelen guiar bien la reseña:
- ¿Cuál era el problema o reto que buscabas resolver?
- ¿Cómo fue el proceso de trabajo conmigo?
- ¿Qué resultado concreto conseguiste?

No tiene que ser larga — con 3-4 frases es más que suficiente.

Aquí el enlace directo: [URL de Google / LinkedIn / Clutch]

Muchas gracias de antemano,
[Tu nombre]
```

**Por qué este mensaje funciona:**
- Da contexto de qué escribir (sin pautar la opinión)
- Reduce la fricción con el enlace directo
- Es personal y explica por qué importa para ti
- No pide que sea larga (el principal inhibidor de escritura)

### Cómo gestionar una reseña negativa

```
Regla de oro: responde siempre, en menos de 48 horas, en público.

Estructura de la respuesta (máx. 3 párrafos):

Párrafo 1 — Reconocimiento:
"Gracias por compartir tu experiencia. Lamento que el proyecto
no cumpliera tus expectativas en [aspecto específico]."

Párrafo 2 — Contexto (sin justificarte demasiado):
"Desde mi parte, [lo que hiciste para intentar resolver la
situación]. Reconozco que [algo que podrías haber hecho mejor]."

Párrafo 3 — Resolución y apertura:
"Si tienes algún tema pendiente, estoy disponible para hablarlo
directamente en [email]. Mi objetivo siempre es que el cliente
quede satisfecho con el resultado final."

Lo que NO hacer:
❌ Atacar al cliente o dudar de su honestidad en público
❌ Dar explicaciones técnicas largas que nadie va a leer
❌ Ignorar la reseña (los clientes leen cómo respondes a las malas)
❌ Pedir que la elimine en el mismo mensaje público
```

---

## Portfolio que convierte: el formato del caso de estudio

### Estructura del caso de estudio premium

```
[Nombre del proyecto o empresa del cliente, si tiene permiso]
[Sector + tipo de trabajo + año]

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

EL RETO
[2-3 frases. ¿Qué problema tenía el cliente? ¿Por qué era urgente
resolverlo? ¿Qué habían intentado antes?]

Ejemplo:
"Empresa de e-commerce de moda sostenible con 3 años de historia
y un sitio web que convertía al 0,8% en un sector donde la media
es del 2,5%. Habían invertido en tráfico de pago pero el problema
estaba en la página, no en los anuncios."

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

MI ENFOQUE
[El proceso: cómo diagnosticaste, qué decidiste hacer y por qué]

"Auditoría de usabilidad con grabaciones de Hotjar (245 sesiones
analizadas). Identifiqué 3 puntos de abandono críticos. Rediseñé
el flujo de producto → carrito → checkout en 3 sprints de 2 semanas."

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

EL RESULTADO
[Siempre con números. Si no tienes números exactos, usa rangos.]

"La tasa de conversión pasó del 0,8% al 2,3% en 60 días.
El ticket medio aumentó un 18% por la mejora en el upsell.
El ROI del proyecto (coste del rediseño vs. aumento de ingresos)
fue de 4,2x en los primeros 3 meses."

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

LO QUE APRENDÍ
[Opcional pero diferenciador: un insight o lección del proyecto]

"El mayor impacto no vino del rediseño visual sino de simplificar
el formulario de checkout de 8 campos a 4. La usabilidad gana siempre."
```

### Reglas del portfolio premium

```
1. Máximo 6-8 casos de estudio. La calidad > cantidad. Si tienes 20
   proyectos, elige los 6 que mejor representan tu trabajo ideal.

2. Muestra el trabajo que quieres seguir haciendo. Si tienes proyectos
   de logos de bajo presupuesto y proyectos de branding corporativo,
   muestra solo los segundos.

3. El visual es la puerta. El texto del caso de estudio es la venta.
   Un buen visual atrae el clic; los resultados convencen.

4. Antes / después siempre que sea posible. El contraste visual de
   la transformación es más poderoso que cualquier descripción.

5. Testimonial en cada caso de estudio. La voz del cliente, junto al
   resultado del proyecto, vale por todo lo demás.
```

---

## Tu web personal: el centro de tu reputación

### Los 5 elementos imprescindibles

```
1. PROPUESTA DE VALOR EN LA CABECERA (above the fold)
   Formato: [Lo que haces] para [quién] que consigue [resultado]

   ❌ MAL: "Diseñadora gráfica freelance con 8 años de experiencia"
   ✅ BIEN: "Diseño la identidad visual de startups tech que quieren
             diferenciarse desde el primer día"

2. PRUEBA SOCIAL INMEDIATA (visible sin hacer scroll)
   → 3 logos de clientes reconocibles (si los tienes)
   → O 1 testimonio de impacto con el resultado concreto
   → O un número: "45 proyectos entregados en 12 países"

3. CASOS DE ESTUDIO (no galería de imágenes, casos con resultados)
   → Mínimo 3, máximo 8
   → Estructura: reto → proceso → resultado

4. PÁGINA "CON QUIÉN TRABAJO MEJOR" (o "Servicios")
   → Describe a tu cliente ideal con tanto detalle que se reconozca
   → Esto filtra los clientes de bajo presupuesto sin decir "no trabajo barato"

5. CTA ÚNICO Y CLARO
   → Un solo botón de acción principal: "Agenda una llamada",
     "Cuéntame tu proyecto", "Hablemos"
   → No más de 3 formas de contacto (elige una principal)
```

---

## Plan de acción en 30 días

```
Semana 1 — Auditoría y limpieza:
□ Revisa tu presencia digital actual: ¿qué hay y qué falta?
□ Identifica los 3 proyectos que mejor representan tu trabajo ideal
□ Lista los 5 clientes más satisfechos a los que vas a pedir reseña

Semana 2 — Reseñas y testimoniales:
□ Envía el mensaje de solicitud de reseña a los 5 clientes
□ Configura Google My Business si no lo tienes
□ Solicita 3 recomendaciones en LinkedIn (clientes o colaboradores)

Semana 3 — Portfolio:
□ Escribe 1 caso de estudio completo con el formato de arriba
□ Publica el caso de estudio en tu web y en LinkedIn como artículo
□ Añade el caso al PDF de presentación que envías a nuevos clientes

Semana 4 — Web y LinkedIn:
□ Revisa la propuesta de valor de tu web y de tu titular de LinkedIn
□ Asegúrate de que la prueba social es visible sin hacer scroll
□ Publica 1 contenido de valor en LinkedIn relacionado con tu especialidad
```

---

Entrega: dame el diagnóstico de mi presencia digital actual ([descripción de mi situación]), las 3 acciones con mayor impacto para posicionarme en el segmento premium de [especialidad], y el mensaje personalizado para solicitar reseñas a mis clientes más satisfechos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una reputación online sólida que atraiga clientes de mayor ticket',
                'vote_score'       => 37,
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
