# Intervención de contenido — 1 de septiembre de 2026

Continuación del [plan del 26 de agosto](2026-08-26-plan-posicionamiento.md) y de
la [tanda del 31 de agosto](2026-08-31-contenido-guias-y-100-skills.md). Esta vez
el objetivo no era volumen: era **autoridad verificable**. Tres guías escritas
contra fuente primaria, en tres consultas donde el contenido en español que ya
rankea es reseña superficial o traducción automática.

---

## 1. Investigación de palabras clave (1 de septiembre de 2026)

Fuentes: búsquedas sobre demanda y tendencias en español, documentación oficial
de cada producto y documentos normativos primarios. **Sin datos de herramienta de
keywords: son órdenes de magnitud, hay que validarlos en Search Console.**

| Consulta / familia | Señal de demanda | Competencia en español | Estado |
|---|---|---|---|
| agent skills / skill.md / estándar de skills | **Alta y en crecimiento vertical**: el formato se ha vuelto multiproducto en 2026 | **Casi nula en español** | **Cubierta** (guía nueva) |
| skills en cursor / skills en copilot / skills en codex | Media-alta, creciendo con cada adopción | Nula en español | Cubierta por la misma guía |
| IA y datos de clientes / RGPD e IA / qué puedo pegar en ChatGPT | Alta y sostenida | Media, dominada por asesorías con contenido genérico | **Cubierta** (guía nueva) |
| AEPD IA agéntica / regla de 2 agentes | Baja hoy, muy citable | **Nula** | Cubierta por la misma guía |
| medir ROI de la IA / cuánto tiempo ahorra la IA | Alta y con pico en cada informe trimestral | Alta pero vacía: casi todo son fórmulas genéricas sin método | **Cubierta** (guía nueva) |

El hallazgo que ordenó la tanda: **el formato de skills dejó de ser exclusivo de
Claude Code**. Es un estándar abierto (`agentskills.io`) implementado por unos
cuarenta y cinco productos, entre ellos Cursor, GitHub Copilot, VS Code, Gemini
CLI, Codex y ChatGPT. Para un dominio que se llama ia-skills eso no es una
noticia más: es la consulta con mejor encaje temático y sin competencia en
español.

---

## 2. Guías nuevas (de 12 a 15)

| Guía | Slug | Palabras | Intención objetivo |
|---|---|---|---|
| Agent Skills: el estándar abierto de skills para agentes de IA | `agent-skills-estandar-abierto` | 2.104 | Informativa de referencia + comparativa técnica |
| Cómo usar IA sin filtrar datos de clientes | `usar-ia-sin-filtrar-datos-de-clientes` | 2.237 | Informativa B2B con intención de cumplimiento |
| Cómo medir si la IA te está ahorrando tiempo de verdad | `medir-si-la-ia-ahorra-tiempo` | 1.910 | Método, con demanda directiva |

### Fuentes primarias verificadas antes de publicar

Nada de lo que lleva número o ruta en las tres guías viene de segunda mano:

- **Especificación de Agent Skills** (`agentskills.io/specification`): límites
  exactos de `name` (1-64, minúsculas, sin guiones consecutivos, debe coincidir
  con la carpeta) y `description` (1-1024), campos opcionales, estructura de
  carpetas, y los tres niveles de divulgación progresiva con sus umbrales
  (~100 tokens de metadatos, <5.000 tokens de instrucciones, <500 líneas).
- **Documentación de cada cliente**, para la tabla de rutas: Claude Code, Cursor,
  VS Code/Copilot y Codex/ChatGPT. De ahí sale la conclusión accionable de la
  guía: `.agents/skills/` es el denominador común de los tres últimos, y Claude
  Code es la excepción que hay que resolver con un enlace simbólico.
- **AEPD, «Orientaciones sobre Inteligencia Artificial agéntica desde la
  perspectiva de protección de datos»**, V1.2 de febrero de 2026 (76 páginas,
  descargada y leída, no citada de reseñas). De ahí salen la **Regla de 2**
  con sus tres capacidades y sus tres configuraciones gestionables, la
  descripción del *shadow leak*, el principio de los cuatro ojos, los
  cortacircuitos y el *golden testing*.
- **McKinsey, State of AI 2026** (agosto de 2026, 1.719 profesionales y
  directivos): 80 % de mejora de productividad individual percibida frente a
  6 % de organizaciones de alto rendimiento (≥5 % del EBIT atribuido a la IA) y
  37 % con algún impacto en EBIT. Esa brecha es la tesis de la guía de medición.

Toda cifra y toda ruta van fechadas en el texto («consultadas el 1 de septiembre
de 2026»), porque caducan. La guía de datos personales lleva además la nota
explícita de que no es asesoramiento jurídico.

### Enlazado interno recíproco

Cada guía nueva enlaza a dos guías existentes y a tres landings de profesión, y
se añadió el camino inverso en cinco guías ya publicadas:

- `que-son-los-skills-de-claude-code` → `agent-skills-estandar-abierto`
- `como-crear-un-skill-para-claude-code` → `agent-skills-estandar-abierto`
- `claude-code-vs-cursor` → `agent-skills-estandar-abierto`
- `automatizar-tareas-con-ia-en-el-trabajo` → `medir-si-la-ia-ahorra-tiempo`
- `politica-de-uso-de-ia-en-la-empresa` → `usar-ia-sin-filtrar-datos-de-clientes`

Los arrays `related` de esas cinco se ajustaron para que la recomendación del pie
coincida con el enlace del cuerpo.

El enlace desde `claude-code-vs-cursor` es el que más puede rendir: es la guía
más competida del sitio y ahora aporta un ángulo que la competencia no tiene
—que la elección de herramienta pesa menos porque los skills se han
estandarizado—, lo que da un motivo para actualizarla y una razón de cita.

### Metadatos

`words` y `readingMinutes` se calcularon sobre el contenido real renderizado
(cuerpo + preguntas frecuentes, a 170 palabras por minuto) en vez de estimarse.
El primer borrador los declaraba entre un 10 % y un 15 % por debajo; `words`
viaja al HTML como `wordCount` dentro del JSON-LD de `Article`, así que un
número inventado es un dato estructurado que miente.

---

## 3. Test de regresión nuevo

`tests/Feature/NewGuidesSmokeTest.php` recorre las 15 guías y comprueba cuatro
cosas que hasta ahora no cubría nada:

1. Cada guía responde 200 con `rel="canonical"` y JSON-LD de `Article` y
   `FAQPage` en el HTML servido (la app no tiene SSR de Inertia: si el SEO de
   servidor se rompe, no se nota hasta semanas después).
2. Cada ancla declarada en `toc` existe como `id` en el cuerpo. Un índice que
   apunta a un ancla inexistente es un enlace roto que ningún test veía.
3. Ningún enlace `/guias/...` del cuerpo o del CTA apunta a una guía que no
   existe.
4. Las tres guías nuevas aparecen en `sitemap-guias.xml` y en `/llms.txt`.

Suite completa: **76 tests, 733 aserciones, todo en verde.** `php -l` limpio en
los quince ficheros de guía y en `Guides.php`.

---

## 4. Qué medir a partir del despliegue

1. **`agent-skills-estandar-abierto` es la apuesta fuerte.** Vigilar impresiones
   para «agent skills», «skill.md», «skills cursor» y «skills copilot». Si en
   seis semanas no hay impresiones, el problema es de autoridad de dominio, no
   de contenido, porque competencia en español no hay.
2. **Citas en asistentes.** Las tres guías están escritas en el formato que los
   motores generativos extraen: tablas con umbrales, listas numeradas y cifras
   con fuente y fecha. La tabla de rutas por herramienta y la Regla de 2 son los
   dos fragmentos con más probabilidad de ser citados literalmente. Añadirlos al
   panel de consultas de la guía de GEO.
3. **`medir-si-la-ia-ahorra-tiempo`** compite contra mucho contenido de agencia.
   La señal a vigilar no es la posición sino el tiempo en página: si el método a
   cuatro semanas funciona, se lee entero.

---

## 5. Siguiente tanda (por orden de oportunidad)

1. **20 prompts de IA para [profesión]** — sigue pendiente desde el 26 de
   agosto y sigue siendo la pieza que mejor conecta intención informativa con
   transaccional. Diez páginas, material de sobra (110 skills por profesión).
2. **Errores al usar IA en el trabajo** — formato lista, buen rendimiento en
   respuestas generativas. Hay un dato verificado y muy citable para abrirla: la
   proporción de artículos científicos con citas inventadas pasó de 1 de cada
   2.828 en 2023 a 1 de cada 458 en 2025.
3. **Actualizar `que-son-los-skills-de-claude-code`** más a fondo. Ahora enlaza
   al estándar, pero sigue escrita como si el formato fuera de un solo producto.
   Reencuadrarla —y quizá reconsiderar su slug— es trabajo de una tarde con
   retorno en la consulta genérica «qué es un skill».
4. **Skills del catálogo con `compatibility` declarada.** Si el catálogo va a
   servir skills a usuarios de Cursor, Copilot y Codex, conviene que las fichas
   digan en qué herramientas se han probado. Es diferenciación de producto y
   además genera texto único por ficha.

La mejora estructural pendiente sigue siendo la misma y cada semana pesa más:
**SSR de Inertia** para las 1.100 fichas de skills.
