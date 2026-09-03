# Intervención de contenido — 3 de septiembre de 2026

Continuación del [plan del 26 de agosto](2026-08-26-plan-posicionamiento.md) y de las
tandas del [31 de agosto](2026-08-31-contenido-guias-y-100-skills.md) y el
[1 de septiembre](2026-09-01-tres-guias-estandar-abierto-rgpd-y-roi.md). De 18 a 21
guías. Esta tanda ataca el **punto 2 del backlog** —errores al usar IA— y dos consultas
de tarea con volumen evergreen alto donde todo lo que rankea en español es listado de
herramientas.

---

## 1. Investigación de palabras clave (3 de septiembre de 2026)

Sin datos de Search Console ni de herramienta de keywords: son órdenes de magnitud,
hay que validarlos con impresiones reales.

| Consulta / familia | Señal de demanda | Competencia en español | Estado |
|---|---|---|---|
| errores al usar IA / por qué la IA se inventa datos / alucinaciones | **Alta y sostenida**, con pico cada vez que sale un caso judicial | Media, casi todo divulgación sin dato verificable | **Cubierta** (guía nueva) |
| resumir PDF con IA / IA para leer contratos / resumir documentos largos | **Alta y evergreen** | Alta en volumen, nula en método: son rankings de herramientas | **Cubierta** (guía nueva) |
| hacer presentaciones con IA / PowerPoint con IA / IA para diapositivas | **Muy alta y evergreen** | Saturada de listados «las 7 mejores IA para presentaciones» | **Cubierta** (guía nueva) |
| citas inventadas / verificar lo que dice la IA | Media, muy citable | Baja | Cubierta por la guía de errores |
| lost in the middle / contexto largo | Baja en español, muy citable | **Nula** | Cubierta por la guía de resúmenes |

El criterio de selección fue el mismo de la tanda anterior y conviene mantenerlo: no
entrar donde solo se puede competir con el mismo listado de herramientas que ya tienen
veinte dominios con más autoridad, sino entrar con **el método que esos listados no
tienen**. Las tres guías comparten tesis de casa: la elección de herramienta pesa menos
que el reparto de tareas entre la persona y el modelo.

---

## 2. Guías nuevas (de 18 a 21)

| Guía | Slug | Palabras | Intención objetivo |
|---|---|---|---|
| Los ocho errores que se repiten al usar IA en el trabajo | `errores-al-usar-ia-en-el-trabajo` | 1.760 | Informativa de formato lista, óptima para respuestas generativas |
| Resumir documentos largos con IA | `resumir-documentos-largos-con-ia` | 1.830 | Tarea concreta con intención B2B (legal, finanzas) |
| Presentaciones con IA | `presentaciones-con-ia` | 1.770 | Tarea concreta de volumen alto, diferenciada por método |

### Fuentes verificadas antes de publicar

- **OpenAI, sobre por qué persisten las alucinaciones** (septiembre de 2025). La tesis
  que abre la guía de errores no es «el modelo predice palabras» —eso lo dice todo el
  mundo— sino que **los exámenes con los que se evalúa puntúan igual el blanco que el
  error**, así que arriesgar sale rentable. La tabla de la guía usa la comparativa del
  propio artículo: 52 % de abstención y 26 % de error frente a 1 % de abstención y 75 %
  de error.
- **Estudio EBU/BBC sobre integridad de las noticias en asistentes de IA**
  (octubre de 2025): más de 3.000 respuestas, 22 medios públicos, 18 países, 14 idiomas.
  45 % con al menos un problema importante, 31 % con fallos graves de atribución, 20 %
  con errores de precisión. Es la medida más sólida que existe hoy sobre atribución y
  viene con metodología pública, no de una nota de prensa de proveedor.
- **Base de datos de citas judiciales fabricadas de Damien Charlotin**: 1.871 registros
  a 11 de agosto de 2026, ~69 % de Estados Unidos. Los dos casos citados
  —*Fletcher* (18 de febrero de 2026, dieciséis citas fabricadas) y *Whiting v. City of
  Athens* (13 de marzo de 2026, más de veinticuatro citas falsas y 15.000 dólares por
  letrado)— se tomaron del análisis de resoluciones de febrero a abril de 2026, no de
  titulares.
- **Literatura de *lost in the middle***: caídas superiores al 30 % en precisión de
  recuperación al mover el dato del extremo al centro del contexto, con la curva en U
  análoga al efecto de posición serial en memoria humana. La guía **matiza** que la
  investigación de 2026 muestra modelos que ya recuperan bien en cualquier posición, y
  explica por qué la consecuencia práctica aguanta igual: encontrar un dato cuando te lo
  piden no es lo mismo que decidir qué datos merecen entrar en un resumen.

Toda cifra va con fuente y fecha en el propio texto, porque caduca.

### El ángulo propio de cada guía

Es lo que decide si merece existir, y conviene dejarlo escrito para no repetirse:

1. **Errores**: la lista no va de prompts. Va de la tabla que separa las tareas donde el
   error se ve al revisar (redactar, reformular, estructurar) de las tareas donde el
   error pasa la revisión (cifras, citas, resúmenes, cálculos). Cierra con una
   comprobación de cinco preguntas.
2. **Resúmenes**: el fallo al resumir casi nunca es inventar, es **omitir**, y una
   omisión no se detecta leyendo el resumen. De ahí las dos piezas accionables: exigir
   cita con página, y el prompt de «qué has dejado fuera» que casi nadie usa.
3. **Presentaciones**: la IA hace diapositivas, no presentaciones. El titular de acción
   —frase que afirma, no etiqueta que anuncia— y el orden invertido (guion en texto
   antes de abrir el editor). Incluye la tabla de lo que se rompe al exportar a
   PowerPoint, que es la queja práctica más buscada y la que los listados no responden.

### Enlazado interno recíproco

Cada guía nueva enlaza a dos guías existentes y a tres landings de profesión, y las tres
se enlazan entre sí. Camino inverso añadido en cinco guías ya publicadas, con el `related`
ajustado para que la recomendación del pie coincida con el enlace del cuerpo:

- `como-escribir-prompts-efectivos` → `errores-al-usar-ia-en-el-trabajo`
- `politica-de-uso-de-ia-en-la-empresa` → `errores-al-usar-ia-en-el-trabajo` (como
  contenido para la sesión de formación del artículo 4)
- `ia-en-excel-y-google-sheets` → `presentaciones-con-ia` (extiende «la hoja calcula, la
  IA redacta» al destino de esas cifras)
- `ia-para-reuniones-y-actas` → `resumir-documentos-largos-con-ia` (una transcripción de
  dos horas es un documento largo, con el mismo punto débil en el tramo central)
- `usar-ia-sin-filtrar-datos-de-clientes` → `resumir-documentos-largos-con-ia` (la fuga
  llega más veces por el archivo que se sube que por el prompt escrito a mano)

El enlace desde `ia-para-reuniones-y-actas` es el que mejor cierra el cluster: conecta la
guía de reuniones con la de documentos por el mecanismo real que comparten, no por
proximidad temática.

### Metadatos

`words` y `readingMinutes` calculados sobre el cuerpo renderizado, no estimados: el campo
viaja como `wordCount` en el JSON-LD de `Article`. Las tres `description` caben enteras
(154, 149 y 156 caracteres, límite 158) con el gancho en los primeros 115, que es lo que
Google muestra en móvil. `seoTitle` entre 55 y 62 caracteres.

---

## 3. Comprobaciones

- `NewGuidesSmokeTest` ampliado a las 21 guías con los tres slugs nuevos en las dos
  aserciones de inventario (registro y presencia en `sitemap-guias.xml` y `/llms.txt`).
- Suite completa: **80 tests, 935 aserciones, todo en verde.**
- `php -l` limpio en las 21 guías y en `Guides.php`.
- Grafo de graphify reconstruido con `scripts/graphify_rebuild.py` (332 nodos).

---

## 4. Qué medir a partir del despliegue

1. **`errores-al-usar-ia-en-el-trabajo` es la apuesta de esta tanda para citas en
   asistentes.** Formato lista con tabla y cifras fechadas: es lo que los motores
   generativos extraen. Los dos fragmentos con más probabilidad de cita literal son la
   tabla de abstención frente a error y la tabla de «el error se ve / el error pasa la
   revisión». Añadirlos al panel de consultas de la guía de GEO.
2. **`presentaciones-con-ia` es la de más volumen y la más difícil.** La señal a vigilar
   no es la posición media sino la posición para consultas de problema —«se descoloca al
   exportar a PowerPoint», «presentación con IA que no parezca IA»— que es donde el
   contenido de método puede ganar a un listado de herramientas.
3. **`resumir-documentos-largos-con-ia`** debería rendir antes en cola larga B2B
   («resumir contrato con IA», «qué documentos no subir a ChatGPT») que en la consulta
   genérica.
4. Revisar en seis semanas si la guía de errores canibaliza impresiones de
   `como-escribir-prompts-efectivos`. No debería —una habla de escribir la petición y la
   otra de verificar el resultado— pero el solape de intención existe.

---

## 5. Siguiente tanda (por orden de oportunidad)

1. **20 prompts de IA para [profesión]** — sigue pendiente desde el 26 de agosto, tercera
   tanda consecutiva. Diez páginas, material de sobra (110 skills por profesión), y es la
   pieza que mejor conecta intención informativa con transaccional. Debería adelantarse a
   cualquier guía nueva.
2. **Actualizar `que-son-los-skills-de-claude-code`** para reencuadrarla como estándar
   multiproducto en vez de formato de un solo producto.
3. **IA para escribir correos de trabajo** — misma familia de tarea concreta que
   hojas de cálculo, reuniones y presentaciones, y completa el cuadrante de tareas de
   oficina. Volumen alto, y el ángulo propio ya existe: el correo que la IA escribe bien
   es el que tú no querías escribir, no el que importa.
4. **Skills del catálogo con `compatibility` declarada.**

La mejora estructural pendiente sigue siendo la misma y cada semana pesa más: **SSR de
Inertia** para las ~1.100 fichas de skills. Las guías rinden porque son Blade puro; las
fichas dependen de que el crawler ejecute JavaScript o se conforme con el fallback.
