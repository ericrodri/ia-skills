# Intervención de contenido — 31 de agosto de 2026

Continuación del [plan de posicionamiento del 26 de agosto](2026-08-26-plan-posicionamiento.md).
Objetivo de esta tanda: cubrir huecos de intención informativa con demanda
comprobada y ampliar la cola larga del catálogo por el lado en el que el
dominio puede ganar hoy — la IA aplicada a cada profesión.

---

## 1. Investigación de palabras clave (agosto de 2026)

Fuentes: búsquedas en la web sobre volúmenes y tendencias en español, análisis
de la competencia que ya rankea y contraste con lo que el catálogo ya cubre.
**Sin datos de herramienta de keywords: son órdenes de magnitud, hay que
validarlos en Search Console y Keyword Planner.**

| Consulta / familia | Señal de demanda | Competencia en español | Estado |
|---|---|---|---|
| instalar claude code / claude code primeros pasos | Alta y creciente; es la entrada al ecosistema | Baja-media | **Cubierta** (guía nueva) |
| claude code vs cursor | Muy alta: 7+ resultados dedicados en la primera página | **Alta** | **Cubierta** (guía nueva) |
| política de uso de IA en empresa / AI Act para empresas | Alta y estacional (hitos normativos de agosto 2026) | Media, dominada por asesorías | **Cubierta** (guía nueva) |
| qué es MCP / model context protocol | Muy alta | Media | Ya cubierta por `plugins-y-mcp-en-claude-code` |
| GEO / aparecer en ChatGPT | Media-alta, creciendo | Baja | Ya cubierta |
| prompt engineering español | Alta | Alta | Ya cubierta |
| verifactu / facturación electrónica | Alta y con fechas movidas a 2027 | Alta (asesorías) | Cubierta en el catálogo (skill) |
| accesibilidad web obligatoria | Media-alta desde junio de 2025 | Media | Cubierta en el catálogo (skill) |

Conclusión del análisis competitivo: en las consultas de producto («X vs Y»,
«cómo instalar X») hay contenido en español pero casi todo es reseña
superficial o traducción; el hueco real está en el **método verificable** —
comandos exactos, tablas comparables, criterios de decisión— que es
precisamente lo que se cita en respuestas generativas.

---

## 2. Guías nuevas (de 9 a 12)

| Guía | Slug | Palabras | Intención objetivo |
|---|---|---|---|
| Cómo instalar Claude Code y sacarle partido la primera semana | `empezar-con-claude-code` | 1.950 | Tutorial de entrada, alto volumen |
| Claude Code vs Cursor: cuál elegir según cómo trabajas | `claude-code-vs-cursor` | 1.660 | Comparativa, decisión |
| Política de uso de IA en la empresa: qué escribir y qué exige la norma | `politica-de-uso-de-ia-en-la-empresa` | 2.170 | Informativa B2B + plantilla |

Datos verificados contra fuente primaria antes de publicar: comandos de
instalación y comandos de sesión (documentación oficial de Claude Code),
precios de planes (página de precios oficial, consultados el 31/08/2026),
precios de Cursor (varias fuentes de agosto de 2026), y el calendario del
Reglamento europeo de IA incluido el aplazamiento del alto riesgo por el
paquete Ómnibus Digital (Reglamento UE 2026/1744, en vigor el 27/07/2026).
Toda cifra de precio y toda fecha normativa va fechada en el texto, porque
caducan.

### Enlazado interno recíproco

Cada guía nueva enlaza a dos guías existentes y a una landing de profesión, y
se añadió el camino inverso en cinco guías ya publicadas:

- `que-son-los-skills-de-claude-code` → `empezar-con-claude-code`
- `plugins-y-mcp-en-claude-code` → `empezar-con-claude-code`
- `claude-vs-chatgpt-para-trabajar` → `claude-code-vs-cursor`
- `automatizar-tareas-con-ia-en-el-trabajo` → `politica-de-uso-de-ia-en-la-empresa`
- `que-es-un-agente-de-ia` → `politica-de-uso-de-ia-en-la-empresa`

Los arrays `related` de esas cinco guías se ajustaron para que la
recomendación del pie sea coherente con el enlace del cuerpo.

### Corrección de metadatos

El campo `words` de las 12 guías estaba inflado entre un 25% y un 40% respecto
al contenido real, y viaja al HTML como `wordCount` dentro del JSON-LD de
`Article`. Se recalculó sobre el cuerpo más las preguntas frecuentes (que es lo
que se renderiza) y se ajustó `readingMinutes` a 170 palabras por minuto. Dato
estructurado que miente, dato estructurado que resta.

---

## 3. Cien skills nuevas (de 1.003 a 1.103)

Diez seeders, `TopSearchedSkills90Seeder` a `TopSearchedSkills99Seeder`, diez
skills por profesión.

| Seeder | Profesión | Eje temático |
|---|---|---|
| 90 | Marketing | SEO técnico y de contenidos que el catálogo no cubría: GEO, clústeres, canibalización, migraciones, Schema.org, medición sin cookies |
| 91 | Desarrollo | Trabajo con agentes: CLAUDE.md, revisión automática, servidor MCP propio, migraciones asistidas, evals, seguridad de features con LLM, coste y latencia |
| 92 | Diseño | IA en el proceso de diseño: imagen de marca coherente, investigación asistida, UX de funciones con IA, design system legible por agentes |
| 93 | Ventas | Prospección e higiene del pipeline con IA: fichas de cuenta, reunión a CRM, análisis de llamadas, revisión de oportunidades |
| 94 | Product Management | PRD y especificación con IA, opiniones a escala, umbral de calidad de una función con IA, unit economics, promesa de datos |
| 95 | RRHH | Selección con IA acotada por riesgo, política interna, alfabetización obligatoria, mapa de tareas y recualificación |
| 96 | Finanzas | Conciliación y anomalías, lectura de facturas, informe al comité, presupuesto de IA, business case, facturación verificable, antifraude |
| 97 | Legal | Cláusulas de IA, revisión documental con secreto profesional, EIPD, inventario y clasificación de sistemas, accesibilidad, canal de denuncias |
| 98 | Customer Support | Base de conocimiento para asistentes, respuestas sugeridas, enrutado, QA con IA, medición honesta de la deflexión |
| 99 | Freelancers | Vender servicios con IA, auditoría como servicio, cláusula contractual, presupuestar coste variable, precio por valor |

### Criterios de selección de los temas

1. **Hueco real:** se extrajeron los 1.093 títulos existentes del catálogo y se
   descartó todo tema ya cubierto. Verificado por slug: **cero colisiones** con
   el catálogo y cero duplicados internos.
2. **Demanda 2026:** el catálogo estaba muy completo en temas clásicos de cada
   profesión y casi vacío en «IA aplicada a esta profesión», que es donde está
   creciendo la búsqueda y donde el dominio tiene autoridad natural.
3. **Citabilidad:** cada prompt incluye tablas de decisión, umbrales concretos y
   entregables numerados, que es el formato que los motores generativos
   extraen y citan.
4. **Honestidad técnica:** los prompts sobre terreno normativo (selección de
   personal, EIPD, facturación, accesibilidad, canal de denuncias) llevan nota
   explícita de que la validación jurídica corresponde a un profesional, y las
   fechas van con la advertencia de comprobar vigencia.

### Verificación

- `php -l` limpio en los diez seeders.
- Ejecutados contra el PostgreSQL local: 100 registros creados, 1.103 totales.
- Suite completa: 73 tests, 487 aserciones, todo en verde.
- Las 12 guías responden con metadatos completos (`SeoTest` itera `Guides::all()`).

---

## 4. Efecto esperado y qué medir

Las 100 skills nuevas y las 3 guías entran automáticamente en
`sitemap-skills-{n}.xml`, `sitemap-guias.xml` y `/llms.txt`, porque todo se
genera desde `Guides` y desde la base de datos.

Qué vigilar en Search Console a partir del despliegue:

1. **Indexación de las URLs nuevas**: deberían descubrirse en 1-2 semanas vía
   sitemap. Si quedan en «Rastreada, actualmente sin indexar», el problema es
   de calidad percibida y toca revisar títulos y descripciones.
2. **Consultas de las tres guías nuevas**: `claude code vs cursor` es la más
   competida y la que dará la señal más rápida sobre si el contenido compite.
3. **Cola larga del catálogo**: impresiones agregadas de `/skills/*`, que es el
   activo principal del dominio.
4. **Citas en asistentes**: preguntar cada mes por las 15 consultas del panel de
   la guía de GEO y anotar si aparecemos.

---

## 5. Siguiente tanda de contenido (por orden de oportunidad)

Del plan del 26 de agosto quedan pendientes, y siguen siendo la mejor apuesta:

1. **20 prompts de IA para [profesión]** — uno por profesión, hub hacia el
   catálogo. Es la pieza que mejor conecta intención informativa con
   transaccional y hay material de sobra: 110 skills por profesión.
2. **Cómo usar IA sin filtrar datos de clientes** — ángulo RGPD práctico; ahora
   enlaza natural con la guía de política de uso.
3. **Cómo medir si la IA te está ahorrando tiempo de verdad** — el tema aparece
   como apartado en media docena de skills nuevas y merece guía propia.
4. **Errores al usar IA en el trabajo** — formato lista, buen rendimiento en
   respuestas generativas.

Y la mejora estructural pendiente sigue siendo la misma: **SSR de Inertia**,
que con 1.100 fichas pesa más cada semana.
