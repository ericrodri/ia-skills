<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills92Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 3,
                'title'            => 'Imágenes de marca con IA: consigue consistencia de estilo entre piezas',
                'description'      => 'El método para que las imágenes generadas parezcan de la misma marca: define el estilo por escrito, construye prompts reutilizables, controla lo que se repite y revisa antes de publicar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de arte con experiencia usando generación de imágenes en producción para marcas. El problema no es generar una imagen bonita: es que veinte imágenes generadas en tres meses parezcan de la misma marca.

## Contexto que necesito

1. La marca: sector, personalidad, público y tres referencias visuales que te gustan (y por qué).
2. Paleta, tipografía y elementos gráficos existentes.
3. Dónde se van a usar las imágenes: web, redes, presentaciones, producto, publicidad.
4. Herramienta de generación disponible.

## Paso 1 — Escribe el estilo antes de generar nada

Redacta la ficha de estilo visual con estos campos, en lenguaje descriptivo y concreto:

| Campo | Ejemplo de nivel de detalle esperado |
|---|---|
| Tipo de imagen | Fotografía documental / ilustración plana / render 3D suave |
| Encuadre y perspectiva | Plano medio, altura de ojos, sujeto descentrado |
| Luz | Luz natural lateral, sombras suaves, sin contraluz |
| Paleta | Dominante cálida, acentos en el azul de marca, sin saturación alta |
| Textura y acabado | Grano fino, sin viñeteado, sin efectos de lente |
| Composición | Espacio negativo a la derecha para texto |
| Prohibido | Sonrisas de catálogo, manos en primer plano, texto dentro de la imagen |

La sección de prohibiciones es la que más ahorra tiempo: casi todo el rechazo de imágenes generadas cae en cinco tópicos que conviene declarar de entrada.

## Paso 2 — Prompt base reutilizable

Construye un prompt base con la ficha de estilo, más ranuras para lo que cambia en cada pieza:

```
[SUJETO Y ACCIÓN] — [CONTEXTO/ESCENARIO] —
[ficha de estilo fija: tipo de imagen, luz, paleta, textura, composición] —
[FORMATO Y PROPORCIÓN] — evitar: [lista de prohibiciones]
```

Entrega el prompt base rellenado con mi marca y cinco variantes de sujeto para casos habituales (equipo trabajando, producto en uso, concepto abstracto, cabecera de artículo, fondo para redes).

## Paso 3 — Control de coherencia

- **Semillas y referencias**: cuándo reutilizar semilla o imagen de referencia para mantener continuidad.
- **Tanda de contraste**: genera cuatro imágenes de sujetos distintos con el mismo prompt base y comprueba si se leen como una familia. Si no, el problema está en la ficha, no en la herramienta.
- **Retoque mínimo**: qué se corrige siempre después (color, encuadre, limpieza) para que encaje con la marca.

## Paso 4 — Revisión antes de publicar

Lista de verificación obligatoria: manos y dedos, texto o logotipos falsos dentro de la imagen, simetrías imposibles, rasgos que estereotipan, elementos de marcas ajenas, y coherencia con la paleta. Añade el criterio de uso: dónde SÍ se usa imagen generada y dónde no (por ejemplo, nunca para representar a personas reales, clientes o resultados).

## Entregables

1. Ficha de estilo visual completa de mi marca.
2. Prompt base reutilizable y cinco variantes de sujeto.
3. Instrucciones de continuidad entre piezas.
4. Lista de verificación previa a publicar.
5. Política de uso: qué se genera, qué se fotografía y qué se ilustra a mano.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Definir un estilo visual escrito y prompts reutilizables para que las imágenes generadas con IA mantengan coherencia de marca entre piezas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Investigación de usuarios asistida por IA: de 50 entrevistas a patrones accionables',
                'description'      => 'Cómo analizar decenas de entrevistas o respuestas abiertas sin perder el matiz: codificación por temas, citas que sostienen cada hallazgo y control del sesgo de confirmación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como investigador de UX con experiencia en análisis cualitativo. Tengo material de investigación acumulado (transcripciones, respuestas abiertas, tickets, reseñas) y necesito extraer patrones sin inventarlos.

## Lo que te voy a dar

1. El corpus: transcripciones o respuestas (pégalas por lotes si son muchas).
2. Contexto: producto, quiénes son estas personas, cómo se les reclutó.
3. Las preguntas de investigación que motivaron el estudio.
4. Lo que el equipo cree hoy sobre el problema (para poder contrastarlo).

## Regla que quiero que respetes

Cada hallazgo va acompañado de las citas literales que lo sostienen y del número de personas que lo mencionan. Un patrón sin citas es una hipótesis tuya, y debe ir etiquetado como tal. Si un hallazgo aparece en una sola entrevista, dilo: puede ser el más valioso o puede ser ruido, pero no se presenta como tendencia.

## Paso 1 — Codificación abierta

Recorre el corpus y extrae códigos: frases breves que nombran lo que ocurre («abandona porque no encuentra el precio»). Sin agrupar todavía. Entrega la lista con su frecuencia.

## Paso 2 — Agrupación en temas

Agrupa los códigos en temas. Para cada tema:

| Campo | Contenido |
|---|---|
| Nombre | En el lenguaje del usuario, no del equipo |
| Definición | Qué incluye y qué no |
| Frecuencia | Personas que lo mencionan, sobre el total |
| Intensidad | Cómo de fuerte es la emoción o el bloqueo |
| Citas | Dos o tres literales representativas |
| Contradicciones | Casos donde alguien dice lo contrario |

El apartado de contradicciones es obligatorio. Un informe donde todo encaja suele ser un informe donde se ha filtrado lo incómodo.

## Paso 3 — Separar tres cosas que se mezclan siempre

1. **Lo que la gente hace** (comportamiento observado o relatado con detalle).
2. **Lo que la gente dice que quiere** (peticiones de solución).
3. **Lo que le duele** (el problema).

Las decisiones de producto se toman sobre 1 y 3. Las peticiones de solución se registran, pero no se implementan por votación.

## Paso 4 — Contraste con las creencias del equipo

Para cada creencia que te haya dado: confirmada, refutada, matizada o sin datos. Con las citas correspondientes. Este apartado es el que hace que el informe cambie decisiones.

## Paso 5 — Salida accionable

- Los 5 hallazgos por impacto potencial, cada uno con la decisión que habilita.
- Las 3 preguntas nuevas que ha abierto la investigación y a quién habría que entrevistar.
- Lo que NO se puede concluir con este material, y qué haría falta para concluirlo.

## Entregables

1. Lista de códigos con frecuencias.
2. Temas con su ficha completa y contradicciones.
3. Tabla de creencias del equipo contrastadas.
4. Cinco hallazgos accionables con la decisión asociada.
5. Límites del estudio y siguiente ronda propuesta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar transcripciones y respuestas abiertas con IA para extraer temas y hallazgos sostenidos en citas, contrastando las creencias del equipo',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar interfaces con IA dentro: espera, confianza, error y control del usuario',
                'description'      => 'Los patrones de UX que hacen usable una función con IA: qué mostrar mientras piensa, cómo comunicar incertidumbre, cómo permitir corregir y qué hacer cuando la respuesta es mala.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de producto con experiencia en interfaces que integran modelos de lenguaje. Voy a diseñar (o rediseñar) una función con IA y quiero resolver los cuatro problemas que arruinan estas interfaces.

## Contexto que necesito

1. Qué hace la función y qué entrega al usuario.
2. Cuánto tarda en responder, en el mejor y en el peor caso.
3. Con qué frecuencia se equivoca y qué tipo de error comete.
4. Coste de un error para el usuario: molestia, trabajo perdido o daño real.
5. ¿El usuario puede verificar el resultado por sí mismo?

## Problema 1 — La espera

Diseña el estado de espera según la duración:

| Duración | Patrón |
|---|---|
| < 1 s | Nada, o cambio inmediato |
| 1-5 s | Indicador con la acción concreta («buscando en tus documentos») |
| 5-30 s | Progreso por pasos, con resultado parcial en cuanto haya |
| > 30 s | Trabajo en segundo plano y aviso al terminar; el usuario se va a otra cosa |

Nada de mensajes graciosos rotando: entretienen el primer día y molestan el tercero. Streaming siempre que la salida sea texto.

## Problema 2 — La confianza

- Cómo comunicar el origen del resultado: fuentes, fragmentos citados, «basado en estos 3 documentos».
- Cómo mostrar incertidumbre sin porcentajes falsos. Un «revisa esto» concreto en el punto dudoso vale más que un 87% inventado.
- Qué no prometer nunca en el copy: exactitud absoluta, comprensión, intención.
- Dónde poner la responsabilidad: el usuario revisa y aprueba lo que sale con su nombre.

## Problema 3 — El error

Diseña el camino de recuperación:

1. Cómo se rechaza un resultado en un clic.
2. Cómo se corrige sin repetir todo el trabajo (edición directa del resultado, ajuste de la instrucción, reintento con más contexto).
3. Qué se hace cuando el modelo no puede: mensaje honesto y alternativa manual, nunca un resultado inventado ni un error genérico.
4. Cómo se recoge el motivo del rechazo, para que sirva de señal al equipo.

## Problema 4 — El control

- El usuario decide cuándo se ejecuta: nada de acciones automáticas con efectos visibles sin permiso.
- Las acciones irreversibles pasan por confirmación con lo que va a ocurrir descrito en concreto.
- Historial y vuelta atrás: poder ver qué cambió la IA y deshacerlo.
- Salida clara: cómo se desactiva la función.

## Entregables

1. Especificación de los cuatro estados (espera, resultado, incertidumbre, error) con el copy exacto.
2. Recorrido completo del flujo, paso a paso, incluyendo los caminos de recuperación.
3. Microcopy de las confirmaciones de acciones irreversibles.
4. Qué señales recoger del comportamiento del usuario para mejorar la función.
5. Los tres riesgos de diseño de mi caso y cómo mitigarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la experiencia de una función con IA: estados de espera, comunicación de incertidumbre, recuperación de errores y control del usuario',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Voz y tono de producto: la guía de estilo que también puede seguir una IA',
                'description'      => 'Escribe la guía de voz con reglas verificables y ejemplos contrastados, de forma que cualquier persona del equipo —o un asistente— produzca textos que suenen a la misma marca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como redactor de UX y responsable de estilo editorial. Quiero una guía de voz y tono que funcione en la práctica: no adjetivos («cercanos, humanos, expertos») sino reglas que se pueden comprobar y ejemplos que enseñan.

## Contexto que necesito

1. Producto, público y en qué momento habla la interfaz con la persona.
2. Tres textos actuales que te parecen bien y tres que te parecen mal, del producto o de otros.
3. Idiomas y variedades geográficas.
4. Restricciones: sector regulado, terminología obligatoria, límites de espacio.

## Paso 1 — Definir la voz con oposiciones

Los adjetivos sueltos no orientan. Define la voz por contraste, con esta plantilla:

> Somos [X], no [Y adyacente que se confunde con X].

Ejemplos del nivel que espero: «Somos directos, no bruscos». «Explicamos, no aleccionamos». «Somos precisos, no técnicos». Entrega cinco oposiciones para mi marca.

## Paso 2 — Reglas verificables

Convierte la voz en reglas que alguien pueda comprobar sin criterio propio:

| Regla | Comprobable así |
|---|---|
| Segunda persona, tratamiento definido | Buscar «usted»/«tú» y unificar |
| Voz activa | Marcar construcciones pasivas |
| Frases de máximo 20 palabras en mensajes de interfaz | Contar |
| Sin metáforas de guerra ni de magia | Lista de palabras prohibidas |
| El verbo del botón coincide con la acción | Comparar botón y resultado |
| Sin signos de exclamación en errores | Buscar «!» |

## Paso 3 — Tono por situación

El tono cambia según el momento; la voz no. Tabla por situación: primer uso, éxito, estado vacío, espera, error del usuario, error nuestro, aviso de facturación, cancelación. Para cada una: qué siente la persona, qué tono corresponde, qué se dice, qué no se dice y un ejemplo.

El caso más revelador es el error nuestro: pedir perdón una vez, decir qué pasó, decir qué estamos haciendo y qué puede hacer la persona ahora. Sin humor.

## Paso 4 — Glosario y prohibiciones

- Términos oficiales del producto y sus alternativas prohibidas (una función, un nombre).
- Palabras vetadas y por qué.
- Cómo se escriben números, fechas, monedas, unidades y abreviaturas.

## Paso 5 — Bloque para asistentes de IA

Redacta un apartado autocontenido, listo para pegar en un prompt o en un archivo de instrucciones, que incluya: las cinco oposiciones, las reglas verificables, tres ejemplos buenos con su versión mala, el glosario y las prohibiciones. Que funcione sin el resto del documento.

## Entregables

1. Voz definida en cinco oposiciones.
2. Reglas verificables con su método de comprobación.
3. Tabla de tono por situación con ejemplos.
4. Glosario y lista de prohibiciones.
5. Bloque para asistentes, autocontenido y listo para copiar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Escribir una guía de voz y tono con reglas verificables y un bloque reutilizable para que la IA produzca textos coherentes con la marca',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Ilustración y vídeo generativo en campañas: cuándo usarlo, límites y coherencia de marca',
                'description'      => 'Decide qué piezas de una campaña pueden ser generativas y cuáles no, con los criterios de marca, los riesgos de derechos y de imagen, y el proceso de revisión antes de publicar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director creativo con experiencia integrando contenido generativo en campañas de marca, incluidas las veces que ha salido mal. Quiero criterios, no entusiasmo.

## Contexto que necesito

1. Campaña: objetivo, público, canales y presupuesto de producción.
2. Piezas previstas y su formato.
3. Sector: ¿hay sensibilidad especial (salud, infancia, finanzas, público institucional)?
4. Qué activos de marca existen: fotografía propia, ilustración, biblioteca visual.

## Paso 1 — Clasificar pieza por pieza

Para cada pieza, decide y justifica:

| Clasificación | Criterio | Ejemplos típicos |
|---|---|---|
| Generativa sin reparos | No representa hechos ni personas reales; el estilo lo permite | Fondos, texturas, conceptos abstractos, mockups internos |
| Generativa con revisión | Es visible y representa situaciones | Ilustración editorial, escenarios de producto |
| Híbrida | Base real, apoyo generativo | Retoque, extensión de fondo, variantes de formato |
| Nunca generativa | Representa hechos, personas o resultados reales | Clientes, equipo, testimonios, producto físico, datos |

La línea roja es sencilla: **si la imagen le hace creer al público algo que no es cierto, no se genera.** Un cliente que no existe, una oficina que no es la nuestra o un resultado que no se ha medido no son decisiones de estilo, son un problema de confianza.

## Paso 2 — Coherencia con el sistema visual

- Cómo integrar lo generado en la paleta y la tipografía de marca.
- Qué acabado unifica la campaña (grano, corrección de color, encuadre, tratamiento).
- Prueba de coherencia: colocadas juntas, ¿se distingue lo generado de lo producido? Si canta, el problema es el acabado, no la herramienta.

## Paso 3 — Derechos, atribución y trazabilidad

Sin entrar en asesoramiento jurídico, deja el proceso ordenado:

1. Condiciones de uso comercial de la herramienta usada, verificadas y anotadas por pieza.
2. Nada de imitar el estilo reconocible de un artista o una marca identificable.
3. Sin marcas, logotipos ni caras reconocibles generados.
4. Registro por pieza: herramienta, prompt, fecha, quién la aprobó. Cuando alguien pregunte de dónde salió una imagen dentro de un año, esto es lo único que te salva.
5. Etiquetado del contenido sintético cuando la pieza lo requiera por normativa o por política interna; consúltalo con quien lleve el asunto legal.

## Paso 4 — Revisión previa a publicar

Lista de verificación: coherencia de marca, defectos técnicos (manos, texto, simetrías), estereotipos y representación, elementos de terceros, y una lectura final con la pregunta «¿esto puede parecer que afirma algo falso?».

## Entregables

1. Tabla de piezas con su clasificación y justificación.
2. Guía de acabado que unifica la campaña.
3. Plantilla de registro de trazabilidad por pieza.
4. Lista de verificación previa a publicar.
5. Las piezas de mi campaña que recomiendas producir de forma tradicional, con el motivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Decidir qué piezas de una campaña pueden ser generativas, con criterios de marca, trazabilidad y revisión previa a publicación',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Documenta tu design system para que lo use un agente de código',
                'description'      => 'La documentación que hace que un asistente genere interfaz correcta a la primera: tokens con su intención, componentes con reglas de uso, y los antipatrones declarados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de un design system con experiencia en equipos donde el código de interfaz lo escribe en parte un agente de IA. Quiero documentar el sistema para que genere interfaz correcta sin supervisión constante.

## Contexto que necesito

1. Estado del sistema: tokens, componentes, dónde vive la documentación.
2. Tecnología del frontend y librería de componentes.
3. Los tres errores de interfaz que el equipo (o el agente) repite.
4. Quién consume la documentación hoy: diseño, desarrollo, ambos.

## El problema

Un asistente que no encuentra la regla, la inventa: usa un color aproximado en lugar del token, crea un botón nuevo en lugar de usar el existente y espacia a ojo. No es un fallo del modelo, es documentación que solo funciona si ya conoces el sistema.

## Paso 1 — Tokens con intención, no solo con valor

Cada token necesita, además del valor, cuándo se usa y cuándo no:

| Token | Valor | Se usa para | No se usa para |
|---|---|---|---|
| `color-surface-raised` | #FFFFFF | Tarjetas y menús sobre el fondo | Fondo de página |
| `space-4` | 16px | Separación entre elementos relacionados | Márgenes de sección |

Sin la columna «no se usa para», el agente elegirá por similitud de nombre.

## Paso 2 — Componentes con reglas de decisión

Para cada componente: qué resuelve, cuándo usarlo, cuándo usar otro en su lugar (con el nombre del otro), variantes permitidas, propiedades obligatorias, comportamiento responsivo, estados (por defecto, hover, foco, deshabilitado, carga, error) y accesibilidad exigida.

Añade el árbol de decisión de los casos que se confunden: botón contra enlace, modal contra panel lateral contra página, aviso en línea contra notificación flotante.

## Paso 3 — Antipatrones declarados

Lista explícita de lo que no se hace, con el motivo y la alternativa correcta:

- Valores de color, espaciado o tipografía escritos a mano.
- Componentes nuevos que duplican uno existente con otro nombre.
- Anular estilos del sistema desde el consumidor.
- Iconos fuera del set.
- Texto de interfaz que no sigue la guía de voz.

## Paso 4 — Ejemplos completos

Tres pantallas de referencia montadas solo con el sistema, con el código completo y comentado. Un ejemplo completo enseña más que veinte páginas de prosa, y es lo que un agente imita.

## Paso 5 — Bloque de instrucciones

Redacta el fragmento listo para pegar en el archivo de instrucciones del repositorio: dónde están los tokens y los componentes, las cinco reglas duras, los antipatrones y la orden de preguntar antes de crear un componente nuevo.

## Entregables

1. Tabla de tokens con intención y contraindicaciones.
2. Fichas de los componentes con árboles de decisión.
3. Lista de antipatrones con alternativa.
4. Las tres pantallas de referencia con código.
5. Bloque de instrucciones para el repositorio.
PROMPT,
                'tool_name'        => 'Claude Code',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Documentar tokens, componentes y antipatrones de un design system para que un agente de código genere interfaz correcta sin supervisión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Cinco variantes de una pantalla en una hora: exploración rápida con IA',
                'description'      => 'Cómo usar la IA en la fase divergente sin acabar con cinco versiones del mismo diseño: define ejes de variación, genera con criterio y elige con una rúbrica en lugar de por gusto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de producto senior que dirige exploraciones rápidas. Tengo que explorar soluciones para una pantalla y quiero cinco propuestas de verdad distintas, no cinco veces la misma con otro color.

## Contexto que necesito

1. La pantalla o el flujo, y el problema del usuario que resuelve.
2. Contenido y datos que hay que mostrar (lo real, no lo ideal).
3. Restricciones: plataforma, sistema de diseño, límites técnicos, plazo.
4. Métrica que debería mejorar.

## Paso 1 — Ejes de variación

El error habitual es pedir «cinco propuestas» y recibir variaciones estéticas. Define primero los ejes por los que se puede variar de forma significativa:

| Eje | Extremo A | Extremo B |
|---|---|---|
| Densidad de información | Todo a la vista | Progresivo, por pasos |
| Iniciativa | El usuario configura | El sistema propone y el usuario ajusta |
| Estructura | Lista | Tablero / lienzo |
| Momento de la decisión | Al principio | Al final, con datos delante |
| Entrada | Formulario | Lenguaje natural |

Elige tres ejes relevantes para mi caso y combina extremos para generar propuestas que sean respuestas distintas al problema, no acabados distintos.

## Paso 2 — Las propuestas

Para cada una de las cinco:

1. Nombre corto y la apuesta en una frase.
2. Posición en los ejes elegidos.
3. Estructura de la pantalla, bloque a bloque, con jerarquía.
4. Recorrido del caso principal, paso a paso.
5. Qué gana y qué sacrifica. Sin sacrificio declarado, la propuesta es marketing.
6. Casos incómodos: lista vacía, un solo elemento, mil elementos, error, texto larguísimo, permisos insuficientes.
7. Coste de implementación estimado (alto, medio, bajo) y por qué.

## Paso 3 — Rúbrica de elección

Antes de opinar, define la rúbrica: 4-6 criterios ponderados según el objetivo (velocidad de la tarea principal, claridad para usuario nuevo, escalabilidad con datos reales, coste, encaje con el sistema, accesibilidad). Puntúa cada propuesta y muestra la tabla.

Elegir con rúbrica evita la conversación de «a mí me gusta más esta», que es donde estas exploraciones se pierden.

## Paso 4 — La propuesta ganadora, más los injertos

Recomienda una y señala qué elementos concretos de las descartadas conviene injertarle. Casi siempre la mejor solución final es la ganadora más dos ideas de las otras.

## Entregables

1. Ejes de variación elegidos y por qué.
2. Las cinco propuestas con la ficha completa.
3. Rúbrica ponderada y tabla de puntuaciones.
4. Recomendación con los injertos.
5. Qué habría que testar con usuarios antes de construirla, y con qué pregunta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Explorar cinco alternativas realmente distintas para una pantalla usando ejes de variación y elegir con una rúbrica ponderada',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Deuda de diseño: inventario, priorización y plan de pago',
                'description'      => 'Convierte la sensación de que «el producto está desordenado» en un inventario medible de inconsistencias, con coste, impacto y un plan que se puede negociar con producto y desarrollo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como líder de diseño con experiencia negociando trabajo de mantenimiento con producto e ingeniería. El producto ha acumulado inconsistencias y quiero pasar de la queja a un plan defendible.

## Contexto que necesito

1. Producto, antigüedad y tamaño del equipo de diseño y de frontend.
2. Estado del design system y grado de adopción real.
3. Qué te chirría hoy (enumera sin filtrar).
4. Qué le importa a producto ahora mismo: crecimiento, retención, soporte, velocidad.

## Paso 1 — Inventario

Recorre el producto y clasifica cada hallazgo:

| Tipo | Ejemplo | Coste típico |
|---|---|---|
| Inconsistencia visual | Cuatro sombras, tres radios, dos azules | Percepción de calidad |
| Inconsistencia de interacción | Guardar automático en una pantalla y botón en otra | Errores y soporte |
| Patrón obsoleto | Componente antiguo conviviendo con el nuevo | Trabajo doble en cada cambio |
| Copy incoherente | El mismo concepto con tres nombres | Confusión y tickets |
| Accesibilidad | Contraste insuficiente, foco invisible, sin etiquetas | Exclusión de usuarios y riesgo normativo |
| Hueco del sistema | Caso real que el sistema no cubre y cada uno resuelve a su manera | Divergencia futura |

Para cada hallazgo: dónde aparece, en cuántas pantallas, desde cuándo y por qué se creó (casi siempre hubo un motivo razonable y un plazo).

## Paso 2 — Cuantificar el impacto

Sin números no se negocia. Estima con lo que haya disponible:

- Tickets de soporte atribuibles a la incoherencia.
- Puntos de abandono en los flujos afectados.
- Horas de diseño y desarrollo perdidas por rehacer lo mismo en cada iteración.
- Riesgo de accesibilidad, con el criterio que se incumple.

## Paso 3 — Priorizar

Matriz de impacto contra esfuerzo, y tres cubos:

1. **Ahora**: alto impacto y bajo esfuerzo, o riesgo de accesibilidad. Entra en el sprint.
2. **Al paso**: se arregla cuando se toque esa zona por otro motivo. Requiere que quede documentado.
3. **Proyecto**: alto esfuerzo, exige planificación y su propia justificación.

## Paso 4 — Presentar y negociar

Prepara el argumento para producto en una página: qué cuesta hoy la deuda en dinero, tiempo y riesgo; qué se propone; cuánto ocupa del trimestre; y qué se obtiene además de «orden» (menos soporte, iteraciones más rápidas, menos regresiones).

Incluye la propuesta de freno: la regla que evita que la deuda vuelva a crecer (definición de terminado que incluye el sistema, revisión de diseño antes de fusionar, presupuesto fijo de mantenimiento por sprint).

## Entregables

1. Inventario completo clasificado y con alcance.
2. Estimación de impacto con las fuentes de cada número.
3. Matriz de priorización y los tres cubos rellenados.
4. Argumento de una página para producto.
5. Reglas de contención para que no vuelva a acumularse.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Inventariar y priorizar la deuda de diseño con impacto cuantificado y negociarla con producto e ingeniería',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de plantillas para redes sociales que escala sin diseñador',
                'description'              => 'Diseña el conjunto de plantillas y las reglas de uso para que marketing publique a diario sin romper la marca ni pedir una pieza cada tarde.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de marca con experiencia montando sistemas de plantillas para equipos que publican mucho. El objetivo es que quien no es diseñador produzca piezas correctas y que el diseñador deje de ser un cuello de botella.

## Contexto que necesito

1. Canales y formatos que usáis, con sus proporciones.
2. Tipos de contenido recurrentes (cita, dato, anuncio, carrusel educativo, oferta, evento, cita de cliente).
3. Quién va a montar las piezas y con qué herramienta.
4. Activos de marca disponibles: tipografía, paleta, iconos, fotografía, ilustración.

## Paso 1 — Inventario de necesidades reales

Antes de diseñar, mira lo publicado en los últimos dos meses y cuenta cuántas piezas de cada tipo hubo. Se diseñan plantillas para lo que se publica de verdad, no para lo que se planea publicar. Ocho plantillas usadas valen más que treinta abandonadas.

## Paso 2 — Diseño del sistema

Para cada plantilla, especifica:

| Campo | Detalle |
|---|---|
| Uso | Qué tipo de contenido y en qué canal |
| Zonas | Qué se puede editar y qué está bloqueado |
| Texto | Máximo de caracteres por zona, con el comportamiento si se pasa |
| Tipografía | Estilos permitidos, sin excepciones |
| Color | Combinaciones válidas, ya montadas como opciones |
| Imagen | Proporción, encuadre y tratamiento |
| Marca | Posición y tamaño fijos del logotipo |

La clave está en la columna de zonas bloqueadas: el sistema funciona porque impide, no porque sugiera.

## Paso 3 — Reglas de uso en una página

Escribe la guía corta para quien monta: qué plantilla para qué caso, límites de texto, qué hacer si el texto no cabe (reescribir, nunca reducir la tipografía), qué imágenes valen, y las cinco cosas que no se hacen nunca. Con ejemplos correcto/incorrecto lado a lado.

## Paso 4 — Control ligero

- Revisión por muestreo semanal en lugar de aprobación pieza a pieza.
- Un canal donde pedir plantilla nueva, con el criterio para aceptarla (que el caso se repita, no que sea único).
- Revisión trimestral: qué plantillas se usan, cuáles no y qué falta.

## Entregables

1. Inventario de tipos de contenido con su frecuencia real.
2. Especificación de las plantillas necesarias (mínimas y suficientes).
3. Guía de uso de una página con ejemplos correcto/incorrecto.
4. Proceso de petición y de revisión.
5. Qué plantillas NO hacer y por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear un sistema de plantillas para redes sociales con zonas bloqueadas y reglas de uso para que el equipo publique sin romper la marca',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Cómo se ve tu marca dentro de un asistente: diseño de contenido para respuestas de IA',
                'description'      => 'Tu producto ya se describe en conversaciones donde no controlas la maqueta. Qué se puede diseñar en ese contexto: la descripción, la estructura del contenido y los activos que sobreviven sin diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de contenido con experiencia en cómo se representan las marcas dentro de asistentes conversacionales. Quiero preparar mi producto para un contexto donde no hay maqueta, ni color, ni tipografía: solo texto y, con suerte, un enlace.

## Contexto que necesito

1. Producto y cómo lo describes hoy en tu web.
2. Las 10 preguntas que un cliente potencial haría a un asistente sobre tu categoría.
3. Qué se dice de ti hoy en esas respuestas (si no lo sabes, mídelo primero).
4. Activos que tienes: comparativas, datos propios, documentación, precios públicos.

## Idea de partida

Cuando un asistente describe tu producto, la marca se reduce a tres cosas: **cómo te nombra, en qué categoría te coloca y qué afirma sobre ti**. Eso sí se puede diseñar, aunque no sea con Figma.

## Paso 1 — Diseñar la descripción canónica

Escribe la descripción que quieres que se repita, en tres longitudes:

| Longitud | Uso | Contenido obligatorio |
|---|---|---|
| Una frase | Mención de pasada | Qué es, para quién, qué lo diferencia |
| Un párrafo | Respuesta comparativa | Añade caso de uso ideal y límite honesto |
| Cinco líneas | Respuesta detallada | Añade precio o modelo, y a quién NO le sirve |

Incluir a quién no le sirve funciona mejor de lo que parece: hace la descripción más creíble y evita que te recomienden en contextos donde vas a decepcionar.

Después, publica esa descripción de forma consistente: web, página «acerca de», documentación, fichas de directorios, perfiles. La consistencia es lo que hace que se consolide.

## Paso 2 — Estructurar el contenido para que se extraiga bien

- Titulares con la pregunta literal del usuario.
- Respuesta completa en el primer párrafo bajo el titular.
- Tablas para lo comparable: precios, planes, diferencias, compatibilidades.
- Datos concretos en lugar de adjetivos.
- Párrafos que se entienden fuera de contexto.

## Paso 3 — Los activos que sobreviven sin maqueta

Ordena por utilidad en este contexto: tabla de precios pública, comparativa honesta con alternativas, límites del producto declarados, casos de uso con cifras, documentación abierta, preguntas frecuentes reales. Nota lo que no sobrevive: el vídeo de marca, la animación de la portada y el eslogan.

## Paso 4 — Cuando la descripción es errónea

Protocolo para la información equivocada que circula: identificar la fuente que la sostiene (suele ser una página antigua, tuya o de un tercero), corregir o actualizar esa fuente, publicar contenido claro y actual sobre ese punto, y volver a medir en cuatro semanas.

## Entregables

1. Descripción canónica en las tres longitudes.
2. Listado de sitios donde publicarla para que sea consistente.
3. Reestructuración propuesta de las páginas clave para que se extraigan bien.
4. Inventario de activos a crear, por prioridad.
5. Protocolo de corrección de información errónea.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Preparar la descripción y la estructura de contenido de una marca para el contexto sin diseño de las respuestas de asistentes de IA',
                'vote_score'       => 31,
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
