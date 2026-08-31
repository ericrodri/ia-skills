# Plan de posicionamiento — ia-skills.com

Fecha: 26 de agosto de 2026
Estado del sitio antes de esta intervención: ~1.000 fichas de skills publicadas,
10 landings por profesión, y **ninguna URL con metadatos propios en el HTML**.

---

## 1. Diagnóstico

Auditoría hecha contra producción (`curl` con user-agent de Googlebot, sin JS).

| # | Hallazgo | Severidad | Estado |
|---|----------|-----------|--------|
| 1 | `/sitemap.xml` devolvía **HTTP 500**. Google no tenía forma de descubrir las ~1.000 fichas | Crítica | Corregido |
| 2 | `<html lang="en">` en un sitio íntegramente en español | Alta | Corregido |
| 3 | Inertia sin SSR: el HTML servido no tenía `<title>` propio, ni `description`, ni `canonical`, ni JSON-LD. Todas las URLs compartían el título «IA Skills» | Crítica | Corregido |
| 4 | `og:image` apuntaba a un **SVG**: ninguna red social genera preview con SVG | Alta | Corregido |
| 5 | Sin control de facetas: `?q=`, `?sort=`, `?profession=` generaban URLs indexables casi duplicadas | Media | Corregido |
| 6 | Cero contenido informativo: el sitio solo atacaba intención transaccional | Alta | Corregido (6 guías) |
| 7 | La fuente Inter se cargaba con `@import` dentro del CSS (descarga en cascada, penaliza LCP) | Media | Corregido |
| 8 | Ziggy inyecta la tabla completa de rutas + su librería (~25 KB sin comprimir) en cada página | Baja | Pendiente |
| 9 | Sin SSR real: el `<h1>` y el cuerpo siguen dependiendo de JavaScript | Media | Mitigado con `<noscript>` + JSON-LD |

### Causa raíz del 500 del sitemap

No era el XML. `CACHE_STORE=database` sobre PostgreSQL corrompe todo valor
cacheado cuyo serializado contenga bytes NUL — es decir, cualquier modelo o
colección de Eloquent, porque las propiedades protegidas se serializan como
`\0*\0nombre`. El `SitemapController` cacheaba dos colecciones de Eloquent con
TTL de 6 horas: la primera petición funcionaba y las siguientes devolvían
`__PHP_Incomplete_Class` → 500.

Verificado en local contra el PostgreSQL real: `serialize()` produce 5.355 bytes,
la fila guardada tiene 7.140 (base64) y `Cache::get()` devuelve
`__PHP_Incomplete_Class`. El mismo fallo latente estaba a punto de repetirse en
el feed RSS.

Queda documentado en `CLAUDE.md`. Si en el futuro se migra el caché a Redis o a
`file`, el problema desaparece de raíz.

---

## 2. Mapa de palabras clave

Las estimaciones de volumen son órdenes de magnitud para España + LatAm, no
datos de herramienta. **Valídalas en Search Console y Keyword Planner** antes de
tomar decisiones de inversión.

### Cabecera — intención transaccional (las tiene el catálogo)

| Palabra clave | Intención | Competencia | URL objetivo |
|---|---|---|---|
| prompts de ia | Transaccional | Alta | `/` |
| skills de ia | Transaccional | Media | `/` |
| prompts para chatgpt | Transaccional | Muy alta | `/skills` |
| biblioteca de prompts | Transaccional | Media | `/skills` |
| prompts de ia para marketing | Transaccional | Media | `/profesiones/marketing` |
| prompts de ia para programadores | Transaccional | Media | `/profesiones/desarrollo` |
| *(× 10 profesiones)* | | | `/profesiones/{slug}` |

### Cuerpo — intención informativa (las guías nuevas)

| Palabra clave | Competencia | URL objetivo |
|---|---|---|
| skills de claude code / qué es un skill de claude | **Baja** | `/guias/que-son-los-skills-de-claude-code` |
| cómo crear un skill claude code / SKILL.md | **Baja** | `/guias/como-crear-un-skill-para-claude-code` |
| cómo escribir prompts / prompt engineering español | Alta | `/guias/como-escribir-prompts-efectivos` |
| claude vs chatgpt | Alta | `/guias/claude-vs-chatgpt-para-trabajar` |
| qué es MCP / plugins claude code | **Baja** | `/guias/plugins-y-mcp-en-claude-code` |
| automatizar tareas con ia | Media | `/guias/automatizar-tareas-con-ia-en-el-trabajo` |

Las tres marcadas como competencia **baja** son la oportunidad real: consultas
en crecimiento, casi sin contenido bueno en español, y perfectamente alineadas
con lo que el sitio ya es. Ahí es donde hay que empujar.

### Cola larga — la mina de oro

Cada una de las ~1.000 fichas ataca una consulta específica del tipo
«prompt para analizar competidores SEO» o «prompt para escribir job description».
Volumen individual bajísimo, suma enorme, competencia casi nula. Su único
problema era técnico (no estaban descubiertas ni tenían título propio) y ya
está resuelto. **Este es el activo principal del dominio.**

---

## 3. Qué se ha implementado

### Técnico

- **Sitemap en formato índice**: `/sitemap.xml` → `sitemap-paginas.xml`,
  `sitemap-profesiones.xml`, `sitemap-guias.xml` y `sitemap-skills-{n}.xml`
  (bloques de 1.000 URLs). Fechas nulas ya no rompen el render y solo se cachean
  arrays planos.
- **Metadatos server-side** (`App\Support\Seo` + `partials/seo.blade.php`):
  title, description, canonical, robots, Open Graph, Twitter Card y JSON-LD en
  el HTML inicial de todas las páginas.
- **Datos estructurados** por tipo de página: `Organization` y `WebSite` con
  `SearchAction` en portada, `BreadcrumbList` en todas, `CollectionPage` +
  `ItemList` en listados, `HowTo` con el prompt completo en las fichas,
  `FAQPage` en las landings de profesión y en las guías, `Article` en las guías.
- **`lang="es"`** y locale de la aplicación en español.
- **Control de facetas**: `?q=` → `noindex, follow`; `?profession=x` →
  canonical hacia `/profesiones/x`; resto de combinaciones → `noindex, follow`;
  paginación con `rel=prev/next` y páginas 2+ de profesión en `noindex, follow`.
- **`og:image` en PNG** (`/og/default.png`), además de las imágenes dinámicas
  por skill y por profesión que ya existían.
- **`robots.txt`** reescrito: zonas privadas bloqueadas, búsqueda interna y
  reordenaciones fuera del rastreo, y acceso explícito para GPTBot, ClaudeBot,
  PerplexityBot y Google-Extended.
- **Feed RSS** en `/feed.xml` con las 50 últimas skills.
- **`<noscript>` con el contenido visible** (H1, descripción, prompt, enlaces):
  Googlebot ejecuta JS, pero Bingbot y los crawlers de IA no siempre.
- **Rendimiento**: fuente fuera del `@import` del CSS (era render-blocking en
  cascada) y rutas sin closures, de modo que `php artisan route:cache` funciona
  — antes fallaba en cada despliegue y nadie lo notaba.
- **13 tests** nuevos (`tests/Feature/SeoTest.php`) que fijan todo lo anterior,
  incluido el caso del sitemap con fecha nula y la doble petición sobre las
  rutas cacheadas.

### Contenido

Sección `/guias`: HTML renderizado en servidor, sin bundle de Vue, con índice,
FAQ, enlazado interno hacia el catálogo y `Article` + `FAQPage`.

| Guía | Palabras aprox. |
|---|---|
| Qué son los skills de Claude Code | 1.450 |
| Cómo crear un skill para Claude Code | 1.600 |
| Cómo escribir prompts efectivos | 1.700 |
| Claude o ChatGPT para trabajar | 1.500 |
| Plugins y MCP en Claude Code | 1.450 |
| Cómo automatizar tareas con IA en el trabajo | 1.550 |

El copy de las 10 landings por profesión se ha movido de
`Professions/Show.vue` a `resources/data/profession-content.json`, de modo que
el `FAQPage` se emite desde el servidor con exactamente el mismo texto que se ve
en pantalla.

---

## 4. Qué hacer después del despliegue

En orden, el mismo día:

1. **Search Console** → Inspección de URL sobre `https://ia-skills.com/` y
   «Solicitar indexación». Repetir con `/skills`, `/profesiones` y `/guias`.
2. **Sitemaps** → enviar `https://ia-skills.com/sitemap.xml`. Al ser un índice,
   Google recoge los cuatro hijos. Revisar en 48 h que no haya errores.
3. **Prueba de resultados enriquecidos** de Google sobre una ficha de skill, una
   landing de profesión y una guía. Deben salir `HowTo`, `FAQPage` y `Article`.
4. **Depurador de Sharing de Facebook y validador de X** sobre una ficha, para
   forzar el refresco del `og:image` que antes era SVG.
5. **Bing Webmaster Tools**: dar de alta el dominio y enviar el sitemap. Bing
   renderiza JS peor que Google y alimenta a Copilot; ahora hay `<noscript>`.
6. **PageSpeed Insights** en móvil sobre portada y una ficha, para tener la
   línea base de Core Web Vitals antes de seguir optimizando.

## 5. Siguientes 90 días

**Semanas 1-2 — medir, no tocar.** Dejar que Google rastree. La señal a vigilar
en Search Console es *Páginas → Indexadas*: debe subir de decenas a cientos.
Si muchas fichas quedan en «Rastreada, actualmente sin indexar», el problema es
de calidad/duplicación percibida y toca revisar títulos y descripciones.

**Semanas 3-6 — SSR de Inertia.** Es la mejora estructural que queda. Hoy el
cuerpo de las páginas depende de JavaScript; con SSR el HTML llegaría completo
para los ~1.000 URLs. Requiere `resources/js/ssr.js`, una entrada `ssr` en Vite,
un proceso Node supervisado en el servidor y ajustar Ziggy para SSR. Todos los
usos de `window`/`localStorage` del proyecto están dentro de handlers o
`onMounted`, así que son compatibles. No se ha hecho ahora porque cambia la
topología de despliegue y conviene hacerlo con el servidor delante.

**Semanas 3-12 — contenido, dos guías al mes.** Siguientes temas por orden de
oportunidad:

1. ~~Cómo instalar y empezar con Claude Code~~ — publicado el 31/08/2026, junto
   con «Claude Code vs Cursor» y «Política de uso de IA en la empresa». Detalle
   en [2026-08-31-contenido-guias-y-100-skills.md](2026-08-31-contenido-guias-y-100-skills.md)
2. 20 prompts de IA para \[profesión\] — uno por profesión, hub hacia el catálogo
3. Cómo usar IA sin filtrar datos de clientes (RGPD, ángulo que casi nadie cubre)
4. Errores al usar IA en el trabajo
5. Qué es un agente de IA y en qué se diferencia de un chatbot
6. Cómo medir si la IA te está ahorrando tiempo de verdad

**Enlazado interno**: cada guía nueva debe enlazar a dos guías existentes y a
una landing de profesión. El camino inverso ya está montado: cada landing de
profesión muestra tres guías relevantes al final del listado (las de Claude Code
en Desarrollo, las de prompts y automatización en el resto), y esos enlaces
también viajan en el `<noscript>`.

**Autoridad**: el activo diferencial es que el contenido es de la comunidad.
Vías realistas de enlaces: repositorios de listas «awesome» de skills y
plugins, comunidades de Claude Code y de IA en español, y menciones cruzadas
desde los propios autores de las skills.

## 6. Mejoras pendientes que no bloquean

- **Reducir el payload de Ziggy** filtrando las rutas expuestas al cliente
  (`@routes(['except' => [...]])`). Hay que auditar antes qué nombres usa cada
  componente, porque una ruta ausente rompe `route()` en runtime.
- **Migrar el caché a Redis**, que ya está en el `.env` de ejemplo. Elimina de
  raíz la clase de bug que tumbó el sitemap.
- **`hreflang`** solo si algún día hay versión en otro idioma. Hoy no aplica.
- **Autores como entidad**: `Person` con `sameAs` en los perfiles de quienes
  publican skills refuerza E-E-A-T, pero requiere página de perfil pública.
