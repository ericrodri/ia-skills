# Intervención de contenido — 20 de septiembre de 2026

Continuación del [plan del 26 de agosto](2026-08-26-plan-posicionamiento.md) y de las
tandas del [31 de agosto](2026-08-31-contenido-guias-y-100-skills.md), el
[1 de septiembre](2026-09-01-tres-guias-estandar-abierto-rgpd-y-roi.md) y el
[3 de septiembre](2026-09-03-errores-resumenes-y-presentaciones.md). De 53 a 56 guías.

Esta tanda no abre un vertical nuevo: **cierra los huecos del clúster de SEO**, que
desde la tanda del 17–19 de septiembre cubre contenido, técnica y medición pero no
tenía ninguna guía sobre arquitectura interna, mantenimiento del contenido publicado
ni trabajo fuera del dominio. Son las tres patas que un lector reconoce como «esto lo
lleva alguien que hace SEO», y su ausencia se notaba en el enlazado: el clúster
enlazaba en círculo entre once guías que hablaban de lo mismo desde ángulos distintos.

---

## 1. Investigación de palabras clave (20 de septiembre de 2026)

Sin datos de Search Console ni de herramienta de keywords: son órdenes de magnitud y
lectura de SERP, hay que validarlos con impresiones reales.

| Consulta / familia | Señal de demanda | Competencia en español | Decisión |
|---|---|---|---|
| enlazado interno / interlinking / arquitectura web | **Alta y evergreen**; es consulta de oficio, se busca todos los meses | Media: hay contenido, casi todo de agencia y con la misma teoría de silos de 2018 | **Cubierta** (guía nueva) |
| páginas huérfanas / profundidad de clic | Media, muy citable | Baja | Cubierta por la misma guía |
| actualizar contenido antiguo / content decay / content pruning | **Alta y evergreen**, con pico cada vez que un sitio pierde tráfico | Alta en volumen, **nula en método**: todo son listas de «consejos para refrescar» sin criterio de decisión | **Cubierta** (guía nueva) |
| cuándo borrar contenido / fusionar artículos / 410 vs 301 | Media, con intención muy clara | Baja y contradictoria entre sí | Cubierta por la misma guía |
| menciones de marca vs backlinks / AI visibility | **Alta y en crecimiento vertical** durante todo 2026 | **Casi nula en español con el dato encima**: se repite el titular «las menciones pesan el triple» sin las cifras ni las advertencias del estudio | **Cubierta** (guía nueva) |
| canibalización de keywords | Alta | **Saturada**: Semrush, Sistrix e InboundCycle ocupan la primera página con contenido decente | **Descartada** como guía propia; se cubre como caso dentro de enlazado y de actualización |
| link building con IA | Alta | Saturada y de baja calidad; entrar ahí es competir con granjas | Descartada |
| SEO para ecommerce con IA | Alta | Alta | Aplazada: el dominio no tiene señal en comercio electrónico |

El criterio de entrada es el mismo de las tandas anteriores y conviene mantenerlo: no
entrar donde solo se puede competir repitiendo lo que ya dicen las herramientas, y
entrar donde hay demanda pero nadie publica el **método verificable** —el árbol de
decisión, la consulta exacta, los umbrales— que es justo lo que se cita en respuestas
generativas.

### El hallazgo que ordenó la tanda

El estudio de Ahrefs sobre 75.000 marcas (mayo de 2025) es el dato más citado del año
en español y casi siempre se cita mal: se repite «las menciones pesan tres veces más
que los enlaces» sin la tabla completa y, sobre todo, sin la advertencia que los
propios autores escriben en el artículo —correlación no es causalidad y **todas** las
señales analizadas dan correlaciones de moderadas a muy débiles—. Publicar la tabla
entera con la advertencia incluida es contenido citable y diferencial, y cuesta menos
que producir un estudio propio.

Cifras usadas, con su fuente primaria:

- Ahrefs, «An Analysis of AI Overview Brand Visibility Factors» (75.000 marcas,
  publicado el 26 de mayo de 2025): menciones de marca 0,664; anchors de marca 0,527;
  volumen de búsqueda de marca 0,392; Domain Rating 0,326; dominios de referencia
  0,295; tráfico de marca 0,274; backlinks 0,218; URL Rating 0,18; páginas del sitio 0,17.
- Semrush, AI Visibility Index 2026 (126 millones de consultas a asistentes en EE. UU.,
  enero–abril de 2026): 45 % de responsables de marketing no sabe medir su visibilidad
  en respuestas generadas y solo un 9 % dice tener herramientas para seguirlo todo;
  81 % de las organizaciones que integran SEO y visibilidad en IA en un solo flujo
  declara más tráfico o contactos, frente al 36 % de las que lo llevan por separado.
- Documentación de Google Search Central sobre enlaces rastreables y gestión de crawl
  budget, para las afirmaciones sobre `<a href>` y descubrimiento.

---

## 2. Guías nuevas (de 53 a 56)

| Guía | Slug | Palabras | Intención objetivo |
|---|---|---|---|
| Enlazado interno: la arquitectura que decide qué posiciona | `enlazado-interno-y-arquitectura-web` | 1.834 | Método de oficio, demanda evergreen |
| Actualizar contenido antiguo: cuándo refrescar, fusionar o podar | `actualizar-contenido-antiguo-con-ia` | 1.655 | Método con árbol de decisión, demanda evergreen |
| Menciones de marca y enlaces: qué cuenta en la búsqueda con IA | `menciones-de-marca-y-enlaces` | 1.686 | Informativa de referencia con dato primario |

Las tres llevan tabla comparativa, procedimiento reproducible y advertencias sobre
dónde la IA ayuda y dónde estorba, que es el patrón que mejor ha funcionado en las
tandas anteriores.

---

## 3. Enlazado: lo que se ha tocado además de los ficheros nuevos

El problema de las tandas anteriores fue publicar guías que solo se alcanzaban desde
`/guias` y el sitemap. Esta vez el enlazado entrante se ha escrito a la vez que las
guías, en el cuerpo y en `related` (con prepend, porque solo se renderizan las tres
primeras entradas):

| Guía existente | Enlaza ahora a | Dónde |
|---|---|---|
| `auditoria-seo-tecnica` | enlazado interno | sección de canibalización + `related` |
| `seo-programatico-con-ia` | enlazado interno | checklist de escalado + `related` |
| `escribir-contenido-seo-con-ia` | actualizar contenido antiguo | cierre sobre el trabajo previo + `related` |
| `keyword-research-con-ia` | actualizar contenido antiguo | error de «una página por keyword» + `related` |
| `ai-overviews-caida-de-clics` | actualizar contenido antiguo | error de «publicar más de lo mismo» + `related` |
| `aparecer-en-chatgpt-y-perplexity-geo` | menciones de marca | sección de medición + `related` |
| `eeat-experiencia-contenido-con-ia` | menciones de marca | sección sobre contenido citable + `related` |
| `medir-el-trafico-de-ia` | menciones de marca | sección de seguimiento de respuestas + `related` |

Cada guía nueva enlaza a su vez a dos o tres del clúster desde el cuerpo, así que el
subgrafo queda conectado en ambos sentidos y no depende del bloque automático.

---

## 4. Comprobaciones hechas

- `php artisan test` → 101 pruebas, 2.144 aserciones, todo en verde. Incluye el smoke
  test de guías, que valida render, canonical, JSON-LD de `Article` y `FAQPage`, que
  cada ancla del índice existe como `id` en el cuerpo y que ningún enlace interno
  apunta a una guía inexistente.
- `php scripts/guide_wordcount.php` → sin desviaciones por encima del 5 % en ninguna
  de las 56 guías. Los tres `words` se corrigieron contra el recuento real
  (1.800 declarado provisionalmente → 1.834 / 1.655 / 1.686).
- Las dos `description` que superaban los 158 caracteres se detectaron con
  `test_ninguna_guia_sirve_la_description_recortada` y se reescribieron; ninguna se
  sirve truncada. Los tres `seoTitle` caben bajo el límite de 65 con el sufijo de marca.
- `./vendor/bin/pint --test` sobre los cinco ficheros tocados → PASS. (Los fallos
  preexistentes de `routes/web.php` y compañía siguen ahí y no son de esta tanda.)
- Slugs registrados en `Guides::ORDER` y en las dos listas de
  `tests/Feature/NewGuidesSmokeTest.php`, así que entran en `/sitemap-guias.xml` y en
  `/llms.txt`.

---

## 5. Lo que queda en el backlog

1. **Migración web sin perder posiciones.** Demanda alta, intención comercial clara,
   contenido en español pobre. Encaja con el clúster y no se ha escrito por tiempo.
2. **Intención de búsqueda: clasificarla y decidir formato.** Es la pieza que falta
   entre `keyword-research-con-ia` y `escribir-contenido-seo-con-ia`.
3. **SEO para ecommerce.** Aplazada a propósito: el dominio no tiene ninguna señal en
   comercio electrónico y entrar ahí sin catálogo que lo respalde es publicar por
   publicar.
4. **Validar toda esta investigación con Search Console.** Sigue pendiente desde
   agosto y es lo que convertiría estas tablas de órdenes de magnitud en datos.
