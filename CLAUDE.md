## graphify

This project has a graphify knowledge graph at graphify-out/.

Rules:
- Before answering architecture or codebase questions, read graphify-out/GRAPH_REPORT.md for god nodes and community structure
- If graphify-out/wiki/index.md exists, navigate it instead of reading raw files
- For cross-module "how does X relate to Y" questions, prefer `graphify query "<question>"`, `graphify path "<A>" "<B>"`, or `graphify explain "<concept>"` over grep — these traverse the graph's EXTRACTED + INFERRED edges instead of scanning files
- After modifying code files in this session, run `python3 scripts/graphify_rebuild.py` to keep the graph current (AST-only, no API cost). Follow it with `graphify export html` if you want the visualization refreshed too.

**Never run `graphify update .` or `graphify watch .` on this repo.** Both scan the
whole directory, including `vendor/` and `node_modules/`. Doing so once turned a
160-node graph into 58.659 nodes and a 44 MB `graph.json`, and graphify stopped
emitting `graph.html` because it exceeded the 5.000-node visualization limit.
`scripts/graphify_rebuild.py` exists precisely to pin the corpus to project code —
edit the `DIRS` list there if the scope ever needs to change.

## Caché: nunca guardes objetos de Eloquent

`CACHE_STORE=database` sobre PostgreSQL **corrompe cualquier valor cacheado cuyo
serializado contenga bytes NUL**, que es el caso de todo modelo o colección de
Eloquent (los nombres de propiedades protegidas se serializan como `\0*\0name`).
El síntoma es traicionero: la primera petición funciona porque devuelve el valor
recién calculado, y todas las siguientes fallan con
`__PHP_Incomplete_Class` durante el TTL.

Esto tuvo `/sitemap.xml` devolviendo un 500 en producción durante semanas, con
las ~1.000 fichas de skills sin descubrir por Google.

Regla: en `Cache::remember` guarda solo escalares y arrays de escalares
(`->pluck()`, `->map(fn () => [...])->all()`). Ver `SitemapController`,
`FeedController` y `App\Support\SiteData` como referencia. Las cadenas binarias
(los PNG de `OgImageController`) sí sobreviven, así que ese caso no aplica.

## SEO: los metadatos se renderizan en el servidor

La app es una SPA con Inertia **sin SSR**, así que los `<Head>` de Vue solo
existen tras ejecutar JavaScript. Todo el SEO indexable se emite desde Blade:

- `App\Support\Seo::share([...])` desde el controlador → `partials/seo.blade.php`
  renderiza title, description, canonical, robots, Open Graph y JSON-LD.
- `partials/seo-fallback.blade.php` publica en `<noscript>` el mismo contenido
  visible (H1, descripción, prompt, enlaces) para los crawlers sin JS.
- En los componentes Vue solo debe quedar `<Head><title>` para la navegación
  SPA. **No vuelvas a añadir `<meta>`, canonical ni JSON-LD en los `.vue`**: se
  duplicarían con los del servidor.
- Las guías (`/guias`) no son Inertia: son Blade puro (`layouts/site`), con el
  contenido en `resources/guides/*.php`. Enlázalas con `<a href>`, nunca con
  `<Link>` de Inertia.
- El copy de las landings por profesión vive en
  `resources/data/profession-content.json` (fuente única para el FAQPage del
  servidor y para el render de `Professions/Show.vue`).
