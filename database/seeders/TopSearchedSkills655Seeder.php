<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills655Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 6,
                'title'             => 'Prompt para preparar oposiciones: calendario por temas, repasos espaciados y simulacros',
                'description'       => 'Plan de estudio para oposiciones adaptado a tu temario, horas y fecha de examen: calendario por temas, vueltas de repaso espaciado y simulacros.',
                'prompt_content'    => <<<'EOT'
Actúa como un preparador de oposiciones con experiencia en planificación del estudio. Necesito un plan realista para preparar mi oposición, que tenga en cuenta mi vida real y no solo el temario.

MIS DATOS:
- Oposición y cuerpo: [por ejemplo, Auxiliar Administrativo del Estado, Maestro de Primaria, Policía Nacional].
- Número de temas y extensión aproximada: [ ].
- Partes del examen: [test, supuesto práctico, desarrollo, oral, pruebas físicas, idioma].
- Fecha prevista del examen o de la convocatoria: [ ].
- Horas que puedo estudiar por día laborable y por día de fin de semana: [ ].
- Si trabajo, tengo hijos u otras obligaciones fijas: [ ].
- Temas que ya me sé o que he estudiado antes: [ ].
- Si tengo academia o preparador y qué materiales uso: [ ].

Si falta algún dato importante, pregúntamelo antes de hacer el plan.

ENTREGA:

1. Diagnóstico: horas totales disponibles hasta el examen frente a horas estimadas necesarias, y si el plazo es realista. Si no lo es, dímelo con franqueza y propón alternativas (priorizar temas, apuntarme a una convocatoria posterior).
2. Estrategia en fases:
   - Fase 1, primera vuelta: estudio y esquemas de todos los temas.
   - Fase 2, segunda y tercera vuelta: repaso y consolidación.
   - Fase 3, recta final: simulacros, puntos débiles y gestión de los nervios.
3. Calendario semanal en tabla con columnas: Semana | Temas nuevos | Temas a repasar | Test o supuesto | Horas previstas.
4. Sistema de repaso espaciado: cuándo repasar cada tema tras estudiarlo (por ejemplo, a 1, 7, 21 y 45 días) y cómo integrarlo en el calendario sin que se acumule.
5. Plan de simulacros: frecuencia, cómo hacerlos en condiciones reales (tiempo, sin apuntes) y cómo analizar los fallos.
6. Distribución de un día tipo de estudio con bloques y descansos.
7. Qué hacer si me retraso: reglas para reajustar el plan sin abandonar.
8. Plantilla de seguimiento: Tema | Fecha de estudio | Repaso 1 | Repaso 2 | Repaso 3 | Nota en test | Dominio (1-5).
9. Tres consejos para mantener la constancia y cuidar el descanso, porque la oposición es una carrera de fondo.

IMPORTANTE: comprueba siempre la información oficial de la convocatoria en el BOE o el boletín autonómico correspondiente; la IA puede no tener los datos actualizados. Tono motivador pero sincero.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Planificar la preparación de unas oposiciones con calendario por temas, repaso espaciado, simulacros y seguimiento.',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Prompt para temas de oposiciones: esquema, preguntas tipo test y supuestos prácticos',
                'description'       => 'Pega un tema de tu oposición y obtén un esquema para memorizar, preguntas tipo test con solución razonada y supuestos prácticos para entrenar.',
                'prompt_content'    => <<<'EOT'
Actúa como un preparador de oposiciones experto en convertir temas largos en material de estudio útil. Te voy a pegar un tema del temario y quiero que lo transformes en un esquema, preguntas tipo test y supuestos prácticos.

DATOS:
- Oposición: [nombre del cuerpo o escala].
- Número y título del tema: [ ].
- Tipo de examen: [test con penalización / sin penalización / desarrollo / supuesto práctico].
- Normativa de referencia, si la hay: [ley, real decreto, reglamento].
- Texto del tema: [pega aquí el contenido].

REGLAS:
- Básate solo en el texto que te pego. Si algo te parece desactualizado o dudoso (por ejemplo, un artículo que ha cambiado), señálalo con “[REVISAR]” en lugar de inventar.
- No añadas datos de tu cosecha sin avisar.
- Cita el artículo o apartado del que sale cada pregunta.

ENTREGA:

1. ESQUEMA DEL TEMA
   - Estructura jerárquica con epígrafes numerados, como máximo de 3 niveles.
   - Destaca en negrita plazos, cifras, órganos competentes y excepciones, que es lo que más se pregunta.
   - Al final, una tabla de “datos que caen” con columnas: Concepto | Dato | Artículo.
   - Una regla mnemotécnica para las 3 enumeraciones más difíciles.

2. PREGUNTAS TIPO TEST
   - 20 preguntas con 4 opciones (a, b, c, d) y una sola correcta.
   - Mezcla dificultades: 8 fáciles, 8 medias y 4 difíciles con trampas típicas (plazos parecidos, órganos confundibles, excepciones).
   - Solucionario aparte, al final, con la letra correcta, el artículo y una explicación de una línea de por qué las otras son incorrectas.

3. SUPUESTOS PRÁCTICOS (si el examen los incluye)
   - 2 supuestos realistas, del estilo de los exámenes de esta oposición, con 3-4 cuestiones cada uno.
   - Solución modelo paso a paso, indicando la normativa aplicable.
   - Errores frecuentes al resolverlos.

4. PREGUNTAS DE REPASO RÁPIDO
   - 10 preguntas cortas de respuesta abierta para hacer recuerdo activo sin mirar el esquema.

5. Tiempo estimado para estudiar el tema y propuesta de cuándo repasarlo.

6. CONEXIONES CON OTROS TEMAS
   - Indica qué conceptos de este tema suelen relacionarse con otros temas del temario de esta oposición, para que pueda estudiarlos juntos y no repetir esfuerzo.
   - Si el tema remite a otra norma, anótala para revisarla más adelante.

Recuérdame que contraste siempre con la normativa vigente publicada en el BOE, porque los temarios pueden quedarse anticuados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Transformar un tema de oposiciones en esquema, batería de test con solucionario y supuestos prácticos resueltos.',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer apuntes claros a partir de una clase, una transcripción o un PDF',
                'description'       => 'Convierte una clase grabada, una transcripción o un PDF en apuntes ordenados, con definiciones, ejemplos, esquemas y dudas para preguntar al profesor.',
                'prompt_content'    => <<<'EOT'
Actúa como un estudiante brillante que toma los mejores apuntes de la clase y los comparte con los demás. Te voy a pasar material en bruto y quiero que lo conviertas en apuntes claros, completos y fáciles de estudiar.

DATOS:
- Asignatura y curso: [por ejemplo, Microeconomía, 1.º de ADE].
- Tipo de material: [transcripción de una clase grabada / PDF de diapositivas / mis notas desordenadas / capítulo de un libro].
- Para qué los necesito: [examen tipo test / examen de desarrollo / práctica / entender el tema].
- Nivel de detalle: [resumido / intermedio / muy completo].
- Material: [pega aquí el texto o adjunta el archivo].

REGLAS:
- Respeta el contenido original. No inventes datos, fechas, fórmulas ni autores. Si algo de la transcripción no se entiende o parece un error, márcalo con “[REVISAR]”.
- Elimina muletillas, repeticiones y digresiones de la clase, pero conserva los ejemplos que puso el profesor, porque suelen caer en el examen.
- Si el profesor dijo algo como “esto es importante” o “esto entra”, márcalo con ⚠️.

ENTREGA LOS APUNTES CON ESTE FORMATO:

1. Título del tema y una frase que resuma de qué va.
2. Índice con los apartados.
3. Desarrollo por apartados:
   - Explicación en párrafos cortos y lenguaje claro.
   - Definiciones clave en negrita.
   - Fórmulas o pasos de procedimientos numerados, explicando cada variable.
   - Un ejemplo por concepto importante (el del profesor si lo hay; si añades uno propio, indícalo).
4. Tabla comparativa cuando haya conceptos que se confunden fácilmente: Concepto A | Concepto B | Diferencia clave.
5. Esquema final en forma de lista jerárquica para repasar en 5 minutos.
6. Glosario con los 10-15 términos más importantes.
7. Dudas pendientes: preguntas que yo debería hacer al profesor o consultar en la bibliografía.
8. Cinco preguntas de autoevaluación con respuesta breve.
9. Si el material es una transcripción larga, indica entre paréntesis el minuto aproximado de cada apartado para poder volver a escuchar la grabación cuando tenga dudas.

Al terminar, dime qué partes del material original estaban incompletas o eran confusas para que las complete. Recuerda que estos apuntes son para estudiar yo: si los voy a entregar como trabajo, tengo que revisar la normativa de mi centro sobre el uso de IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Pasar a limpio clases, transcripciones o PDFs en apuntes estructurados con ejemplos, esquemas y preguntas de autoevaluación.',
                'vote_score'        => 75,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer resúmenes para estudiar con recuerdo activo y tarjetas de repaso',
                'description'       => 'Resúmenes pensados para memorizar: ideas clave, preguntas de recuerdo activo y tarjetas de repaso listas para Anki o para imprimir.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en técnicas de estudio basadas en la evidencia, en especial el recuerdo activo (active recall) y la repetición espaciada. No quiero un resumen para leer y subrayar: quiero un material que me obligue a recordar, porque así se aprende de verdad.

DATOS:
- Asignatura y tema: [ ].
- Fecha del examen: [ ].
- Tipo de examen: [test / preguntas cortas / desarrollo / problemas].
- Lo que más me cuesta: [memorizar datos / entender conceptos / relacionar ideas].
- Texto o apuntes: [pega aquí el contenido].

REGLAS:
- Usa solo la información del texto. Si falta algo importante para entender el tema, dímelo aparte en vez de inventarlo.
- Lenguaje claro, frases cortas, sin relleno.

ENTREGA:

1. RESUMEN EN TRES CAPAS
   - Capa 1: el tema en 3 frases (lo que tendría que explicar si me preguntan en un pasillo).
   - Capa 2: las 7-10 ideas clave, una por línea.
   - Capa 3: desarrollo breve de cada idea clave con su ejemplo o dato de apoyo.

2. PREGUNTAS DE RECUERDO ACTIVO
   - 15 preguntas ordenadas de menor a mayor dificultad: primero “qué es”, después “por qué” y “cómo se relaciona con”, y al final “qué pasaría si”.
   - Respuestas al final, separadas, para no verlas mientras pienso.

3. TARJETAS DE REPASO (flashcards)
   - 25 tarjetas en formato de tabla con dos columnas: Anverso | Reverso.
   - Una sola idea por tarjeta, preguntas concretas y respuestas cortas.
   - Después, la misma lista en texto plano con el formato “pregunta;respuesta” por línea, para importarla en Anki o Quizlet.

4. MÉTODO DE ESTUDIO
   - Cómo usar este material: leer la capa 1 y 2, cerrar, intentar explicarlo en voz alta (técnica Feynman), contestar preguntas y repasar tarjetas.
   - Calendario de repaso desde hoy hasta [fecha del examen] con intervalos crecientes.
   - Cómo detectar lo que no sé: las tarjetas que fallo dos veces pasan a una lista de puntos débiles.

5. Mapa de relaciones: una lista que muestre cómo se conectan las ideas clave entre sí.

Recuérdame que el resumen es para estudiar: si lo tengo que entregar, debe ser trabajo mío y conviene revisar la normativa de mi centro sobre IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Preparar resúmenes de estudio con recuerdo activo, tarjetas de repaso exportables a Anki y calendario de repetición espaciada.',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Prompts para NotebookLM para estudiar: qué fuentes subir y qué pedirle',
                'description'       => 'Guía de prompts para estudiar con NotebookLM: cómo elegir las fuentes, qué preguntas hacerle y cómo sacarle guías de estudio, tests y resúmenes de audio.',
                'prompt_content'    => <<<'EOT'
Esta es una guía de prompts para estudiar con NotebookLM. Copia cada bloque en el chat del cuaderno cuando lo necesites y cambia lo que va entre corchetes.

PASO 0 · PREPARA LAS FUENTES ANTES DE PREGUNTAR
- Crea un cuaderno por asignatura o por tema grande, no uno para todo.
- Sube solo material fiable: apuntes del profesor, diapositivas, temario oficial, capítulos del manual, artículos de la bibliografía. Evita mezclar versiones antiguas y nuevas del mismo tema.
- Pon nombres claros a las fuentes, por ejemplo “Tema 3 - Diapositivas profesor”.
- Recuerda que NotebookLM responde a partir de tus fuentes y cita de dónde sale cada dato: si la fuente está mal, la respuesta también.

Petición 1 · VISIÓN GENERAL
“Basándote solo en las fuentes, explícame de qué trata [tema] en 10 líneas, como si no supiera nada. Después dame una lista de los 8 conceptos más importantes en el orden en que conviene estudiarlos.”

Petición 2 · GUÍA DE ESTUDIO
“Crea una guía de estudio de [tema] con: objetivos de aprendizaje, conceptos clave con definición, relaciones entre conceptos y los errores típicos que comete un estudiante. Cita la fuente de cada punto.”

Petición 3 · ENTENDER LO QUE NO ENTIENDO
“No entiendo [concepto]. Explícamelo de tres formas distintas: una definición sencilla, una analogía de la vida cotidiana y un ejemplo resuelto. Indica en qué fuente y en qué parte se trata.”

Petición 4 · COMPARAR FUENTES
“Compara lo que dicen [fuente A] y [fuente B] sobre [tema]. Hazlo en una tabla con columnas: Aspecto | Fuente A | Fuente B | ¿Coinciden? Señala las contradicciones.”

Petición 5 · AUTOEVALUACIÓN
“Hazme 10 preguntas tipo test sobre [tema] con 4 opciones, una correcta. No me des las respuestas hasta que conteste. Después corrígeme y dime qué parte de las fuentes debo repasar en cada fallo.”

Petición 6 · PREGUNTAS DE EXAMEN
“Redacta 5 preguntas de desarrollo como las que podría poner el profesor en un examen de [asignatura], y para cada una un guion de respuesta con los puntos que no pueden faltar.”

Petición 7 · RESUMEN EN AUDIO
Usa la función de resumen de audio con esta indicación personalizada: “Centra la conversación en [tema], explica los conceptos de forma sencilla, con ejemplos, y termina repasando las 5 ideas clave. Nivel: estudiante de [curso].” Escúchalo mientras caminas o vas en transporte.

Petición 8 · CHEQUEO FINAL ANTES DEL EXAMEN
“Hazme una lista de comprobación de todo lo que debería saber de [tema] para el examen. Para cada punto, una pregunta corta que me permita comprobar si lo domino.”

CONSEJOS:
- Pide siempre que se base solo en las fuentes y revisa las citas.
- No copies sus respuestas como trabajo propio: úsalas para entender y practicar. Consulta la normativa de tu universidad sobre el uso de IA.
- Si una respuesta no te convence, pregúntale “¿en qué fuente exacta dice eso?”.
EOT,
                'tool_name'         => 'NotebookLM',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Estudiar con NotebookLM sacando guías de estudio, tests, comparaciones de fuentes y resúmenes de audio a partir de tus propios materiales.',
                'vote_score'        => 73,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Prompts para presentaciones e infografías con NotebookLM a partir de tus apuntes',
                'description'       => 'Saca de NotebookLM el guion de una presentación, el contenido diapositiva a diapositiva y el texto de una infografía, todo basado en tus apuntes y fuentes.',
                'prompt_content'    => <<<'EOT'
Esta guía te ayuda a preparar una presentación o una infografía con NotebookLM a partir de tus apuntes y fuentes. Úsala en orden: primero el mensaje, después la estructura y por último el diseño.

ANTES DE EMPEZAR
- Sube al cuaderno solo las fuentes que vas a usar: tus apuntes, los artículos de referencia y, si la hay, la rúbrica o el enunciado del trabajo.
- Ten claro el contexto: [asignatura], [duración de la exposición en minutos], [público: profesor, compañeros, tribunal], [formato: diapositivas, póster, infografía].

Petición 1 · MENSAJE PRINCIPAL
“A partir de las fuentes, propón 3 posibles mensajes centrales para una presentación de [duración] minutos sobre [tema], dirigida a [público]. Para cada uno, explica en dos líneas por qué funcionaría.”

Petición 2 · ESTRUCTURA
“Con el mensaje [mensaje elegido], crea la estructura de la presentación en [número] diapositivas. Usa una tabla con columnas: N.º | Título de la diapositiva | Idea principal | Dato o ejemplo de las fuentes | Fuente citada. Incluye portada, introducción, desarrollo, conclusiones y referencias.”

Petición 3 · CONTENIDO DE CADA DIAPOSITIVA
“Para cada diapositiva, escribe: un título que sea una afirmación (no un tema), un máximo de 3 viñetas de menos de 10 palabras y una sugerencia de imagen, gráfico o esquema. Basa los datos solo en las fuentes.”

Petición 4 · GUION PARA HABLAR
“Escribe las notas del orador para cada diapositiva, en lenguaje oral, de unos [segundos] segundos cada una. Incluye frases de transición entre diapositivas.”

Petición 5 · INFOGRAFÍA
“Convierte el contenido sobre [tema] en el texto de una infografía vertical: un titular de menos de 8 palabras, un subtítulo, 4-6 bloques con un dato o idea y una frase explicativa cada uno, y una conclusión final. Indica qué tipo de visual encaja en cada bloque (icono, línea de tiempo, gráfico de barras, comparación).”

Petición 6 · PREGUNTAS DEL TRIBUNAL O DEL PROFESOR
“Prepara las 8 preguntas más probables que me podrían hacer tras la exposición, con una respuesta breve basada en las fuentes.”

Petición 7 · REVISIÓN
“Revisa la estructura frente a la rúbrica [pega o sube la rúbrica] y dime qué criterios no estoy cubriendo.”

HERRAMIENTAS DE NOTEBOOKLM
- Si tu versión incluye la generación de presentaciones de vídeo, mapas mentales o infografías, úsalas como primer borrador visual y después ajústalo en tu herramienta de diapositivas.
- El mapa mental es útil para comprobar que la estructura tiene sentido antes de diseñar.

BUENAS PRÁCTICAS
- Comprueba cada dato en la fuente citada antes de ponerlo en una diapositiva.
- La presentación tiene que reflejar tu trabajo: usa la IA para ordenar y practicar, no para entregar contenido ajeno. Revisa la normativa de tu universidad sobre el uso de IA.
EOT,
                'tool_name'         => 'NotebookLM',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Preparar presentaciones e infografías desde los propios apuntes con NotebookLM: mensaje, estructura, diapositivas, guion y preguntas.',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para TFG: elegir tema, estructura, objetivos y justificación',
                'description'       => 'Te ayuda a pensar tu TFG paso a paso: elegir y acotar el tema, plantear objetivos, redactar la justificación y montar el índice, sin escribirlo por ti.',
                'prompt_content'    => <<<'EOT'
Actúa como un tutor académico con experiencia dirigiendo Trabajos de Fin de Grado. Quiero que me ayudes a pensar y organizar mi TFG, no a escribirlo por mí. Hazme preguntas, cuestiona mis ideas y ayúdame a tomar decisiones.

MIS DATOS:
- Grado y universidad: [ ].
- Áreas o asignaturas que más me interesan: [ ].
- Tipo de TFG que permite mi facultad: [revisión bibliográfica / investigación empírica / proyecto aplicado / plan de empresa / desarrollo técnico].
- Ideas de tema que tengo, aunque sean vagas: [ ].
- Recursos y acceso a datos: [puedo hacer encuestas, tengo acceso a una empresa, laboratorio, bases de datos].
- Plazo de entrega y extensión exigida: [ ].
- Normas de estilo de citas: [APA 7, Vancouver, ISO 690, la que indique la guía].

TRABAJAREMOS EN CUATRO PASOS. Haz uno cada vez y espera mi respuesta antes de seguir:

PASO 1 · ELEGIR Y ACOTAR EL TEMA
- Propón 5 posibles enfoques a partir de mis intereses, evaluando cada uno en una tabla: Enfoque | Interés | Viabilidad con mis recursos | Originalidad | Riesgos.
- Ayúdame a acotar el elegido: población, lugar, periodo y variable o problema concreto.

PASO 2 · PREGUNTA Y OBJETIVOS
- Formula 2-3 versiones de la pregunta de investigación.
- Propón un objetivo general y 3-4 objetivos específicos con verbos medibles (analizar, comparar, identificar, diseñar), y explícame por qué cada uno es o no evaluable.

PASO 3 · JUSTIFICACIÓN
- Dame un guion con los puntos que debe cubrir: relevancia del problema, hueco en la literatura, utilidad práctica y motivación personal.
- Haz preguntas que me ayuden a encontrar mis propios argumentos y datos que lo respalden.
- Si redactas un ejemplo, que sea breve y sobre un tema distinto al mío, para que me sirva de modelo y no lo copie.

PASO 4 · ESTRUCTURA E ÍNDICE
- Índice provisional adaptado al tipo de TFG, con la extensión aproximada de cada apartado.
- Cronograma hasta la entrega en tabla: Semana | Tarea | Entregable para el tutor.

REGLAS:
- No inventes referencias bibliográficas. Si me sugieres autores o líneas de investigación, avísame de que debo comprobarlos en Google Académico, Dialnet o la biblioteca de mi universidad.
- Recuérdame revisar la normativa de mi universidad sobre el uso de IA en el TFG y comentarlo con mi tutor, porque en muchas facultades hay que declararlo.
- El texto final debe ser mío: tú me ayudas a pensar y a ordenar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Elegir y acotar el tema del TFG, formular pregunta y objetivos, preparar la justificación y planificar el índice y el cronograma.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para trabajos de investigación universitarios sin plagio: preguntas, fuentes y cómo citar',
                'description'       => 'Organiza un trabajo de investigación universitario: pregunta, búsqueda de fuentes fiables, fichas de lectura y citas bien hechas, sin plagio ni referencias inventadas.',
                'prompt_content'    => <<<'EOT'
Actúa como un bibliotecario universitario y tutor de metodología. Tengo que hacer un trabajo de investigación y quiero hacerlo bien: con buenas fuentes, citado correctamente y sin plagio. No quiero que lo redactes por mí; quiero que me guíes en el proceso.

MIS DATOS:
- Asignatura, curso y universidad: [ ].
- Enunciado o tema del trabajo: [ ].
- Extensión y fecha de entrega: [ ].
- Estilo de citas exigido: [APA 7 / MLA / Chicago / Vancouver / ISO 690].
- Lo que ya tengo hecho: [nada / algunas lecturas / un borrador].

TRABAJAREMOS POR FASES. Al final de cada fase, espera mi respuesta.

FASE 1 · PREGUNTA DE INVESTIGACIÓN
- Ayúdame a convertir el tema en una pregunta concreta, investigable en el plazo y extensión que tengo.
- Propón 3 subpreguntas que organicen el trabajo.

FASE 2 · ESTRATEGIA DE BÚSQUEDA
- Palabras clave en español y en inglés, sinónimos y combinaciones con operadores (AND, OR, comillas).
- Dónde buscar según la disciplina: Google Académico, Dialnet, Scopus, Web of Science, PubMed, repositorios universitarios, estadísticas oficiales (INE, Eurostat).
- Criterios para evaluar si una fuente es fiable: autoría, revisión por pares, fecha, editorial, citas recibidas.

FASE 3 · FICHAS DE LECTURA
- Plantilla en tabla: Referencia completa | Pregunta o objetivo del texto | Método | Hallazgos principales | Cita textual relevante (con página) | Mi comentario | Para qué apartado me sirve.
- Explícame la diferencia entre citar, parafrasear y resumir, con un ejemplo de cada uno.

FASE 4 · CITAR Y EVITAR EL PLAGIO
- Cómo citar en el texto y en la bibliografía con el estilo [estilo], con ejemplos para libro, artículo, capítulo, página web e informe.
- Errores típicos que se consideran plagio aunque no haya mala intención: parafrasear demasiado cerca del original, olvidar la cita en una idea ajena, autoplagio.
- Cómo declarar el uso de IA si la universidad lo permite y lo exige.

FASE 5 · ESTRUCTURA Y REVISIÓN
- Esquema del trabajo con la función de cada apartado.
- Lista de comprobación final antes de entregar.

REGLAS MUY IMPORTANTES:
- No inventes referencias, autores, DOI ni citas. Si mencionas una fuente, indica que debo verificar que existe y que dice lo que se le atribuye.
- La IA me ayuda a pensar y ordenar; el texto entregado debe ser mío. Recuérdame revisar la normativa de mi universidad sobre el uso de IA y la del profesor de la asignatura.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Planificar un trabajo de investigación universitario: pregunta, búsqueda de fuentes, fichas de lectura, citas correctas y prevención del plagio.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para aprender inglés hablado con la IA: conversaciones por nivel y corrección de errores',
                'description'       => 'Practica conversación en inglés con la IA según tu nivel, con situaciones reales, corrección de errores al final de cada turno y vocabulario para repasar.',
                'prompt_content'    => <<<'EOT'
Quiero practicar inglés hablado contigo. Actúa como un profesor nativo de inglés, paciente y animado, especializado en conversación para hispanohablantes. Usaré el modo de voz o escribiré como si hablara.

PRIMERO, hazme una prueba de nivel rápida:
- Hazme 5 preguntas en inglés de dificultad creciente.
- Según mis respuestas, dime mi nivel aproximado según el Marco Común Europeo (A1, A2, B1, B2, C1) y explícame en español en qué lo basas.
- Si ya sé mi nivel, te lo digo: [mi nivel] y te salto la prueba.

MIS DATOS:
- Para qué necesito el inglés: [trabajo, entrevistas, viajes, examen oficial como Cambridge o IELTS, conversación general].
- Temas que me interesan: [ ].
- Errores que sé que cometo: [por ejemplo, olvidar la -s de la tercera persona, false friends, pronunciación].
- Tiempo por sesión: [10, 20 o 30 minutos].

CÓMO SERÁ CADA SESIÓN:
1. Propón una situación realista adaptada a mi nivel y objetivo: pedir en un restaurante, entrevista de trabajo, small talk con un compañero, reclamar en un hotel, presentar un proyecto.
2. Interpreta tu papel con naturalidad. Habla a mi nivel: frases cortas en A1-A2, más naturales y con expresiones idiomáticas a partir de B2.
3. No me interrumpas para corregir. Mantén la conversación con preguntas abiertas para que yo hable más que tú.
4. Cada 4-5 intervenciones mías, haz una pausa de corrección con esta tabla: Lo que dije | Forma correcta | Por qué (explicado en español, en una línea).
5. Señala solo los 3-5 errores más importantes, no todos, para no agobiarme.
6. Si me quedo bloqueado y escribo “help”, dame dos o tres formas de decir lo que quiero.

AL FINAL DE LA SESIÓN, entrega:
- Resumen de lo que he hecho bien.
- Mis 3 errores más repetidos y un mini ejercicio de 5 frases para practicar cada uno.
- 10 palabras o expresiones nuevas de la conversación en tabla: Inglés | Español | Ejemplo de uso.
- Consejo de pronunciación sobre alguna palabra que haya usado, explicado para un hispanohablante.
- Propuesta de situación para la siguiente sesión, un poco más difícil.

Tono: cercano y motivador. Celebra los avances y no me hagas sentir mal por equivocarme: equivocarse es parte de aprender.

Empieza ahora con la prueba de nivel o, si ya te he dado mi nivel, con la primera situación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Practicar conversación en inglés adaptada al nivel, con corrección de errores, vocabulario nuevo y progresión entre sesiones.',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para aprender un idioma desde cero con ChatGPT o Claude: plan de 90 días (japonés, francés y más)',
                'description'       => 'Plan de 90 días para empezar un idioma desde cero, sea japonés, francés, alemán o italiano: fases, rutina diaria, recursos y la IA como tutor de práctica.',
                'prompt_content'    => <<<'EOT'
Quiero aprender [idioma, por ejemplo japonés, francés, alemán, italiano, coreano o portugués] desde cero y necesito un plan de 90 días. Actúa como un profesor de idiomas experto en métodos para adultos autodidactas, y después como mi tutor diario.

MIS DATOS:
- Idioma: [ ].
- Motivo: [viaje en una fecha concreta, trabajo, mudanza, afición como el anime o la literatura, familia, examen oficial como JLPT o DELF].
- Tiempo diario real: [15, 30, 45 o 60 minutos] y días por semana.
- Idiomas que ya hablo: [ ].
- Cómo aprendo mejor: [escuchando, leyendo, hablando, con juegos, con estructura].
- Recursos que ya tengo o quiero usar: [apps, libros, series, profesor].

ENTREGA PRIMERO EL PLAN:

1. Objetivo realista para el día 90, expresado en lo que podré hacer (por ejemplo: presentarme, pedir en un restaurante, entender un diálogo sencillo, leer hiragana y katakana). Sé honesto con lo que se puede lograr en ese tiempo.
2. Particularidades del idioma para un hispanohablante: lo que me resultará fácil y lo difícil (escritura, pronunciación, géneros, partículas, tonos…).
3. Plan en tres fases de 30 días, cada una con: objetivos, gramática, vocabulario aproximado (número de palabras) y la habilidad prioritaria.
   - Si el idioma tiene otro sistema de escritura (japonés, coreano, ruso, árabe), dedica las primeras semanas a dominarlo.
4. Rutina diaria tipo en tabla: Bloque | Minutos | Actividad | Recurso.
5. Calendario semanal en tabla: Semana | Objetivo | Temas | Práctica con la IA | Autoevaluación.
6. Recursos recomendados gratuitos y de pago, explicando para qué sirve cada uno. Avísame si alguno puede haber cambiado de nombre o precio.
7. Cómo usar la repetición espaciada para el vocabulario.
8. Tres hitos de evaluación (días 30, 60 y 90) con una prueba que yo pueda hacer.

DESPUÉS, CADA DÍA, ACTÚA COMO TUTOR:
- Cuando escriba “lección [número]”, dame la lección del día según el plan: explicación breve, 10 palabras nuevas con pronunciación aproximada para un hispanohablante, 5 frases de ejemplo y un mini ejercicio.
- Corrige mis respuestas explicando el error en español.
- Cada 7 lecciones, haz un repaso acumulativo.
- Si llevo días sin practicar, no me regañes: ayúdame a retomar.

Empieza por el plan con los datos que te he dado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Aprender un idioma nuevo desde cero con un plan de 90 días por fases y la IA como tutor diario de lecciones y corrección.',
                'vote_score'        => 72,
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
                'views_count' => rand(150, 600),
                'saves_count' => rand(15, 60),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
