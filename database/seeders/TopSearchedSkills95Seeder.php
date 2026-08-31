<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills95Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 6,
                'title'            => 'Descripción de puesto que atrae al candidato correcto y filtra al resto',
                'description'      => 'Reescribe la oferta desde el trabajo real: qué va a hacer esa persona, cómo se mide el éxito, qué es negociable y qué no, con revisión de lenguaje excluyente y de requisitos inventados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de talento con experiencia en procesos que se cierran rápido y con buen encaje. Quiero una descripción de puesto que atraiga a quien encaja y disuada al resto, no un anuncio genérico con 14 requisitos.

## Contexto que necesito

1. Puesto, equipo y a quién reporta.
2. Los tres problemas que esta persona va a resolver en su primer año.
3. Cómo se sabrá, a los seis meses, que la contratación fue buena.
4. Rango salarial real, modalidad de trabajo y ubicación.
5. Requisitos que el equipo dice que hacen falta (los revisaremos).
6. Lo incómodo del puesto: qué parte del trabajo no gusta a nadie.

## Paso 1 — Depurar los requisitos

Revisa la lista que te dé y clasifica cada requisito:

| Clasificación | Criterio |
|---|---|
| Imprescindible | Sin esto no se puede hacer el trabajo en el primer mes |
| Aprendible | Se adquiere en semanas con acompañamiento |
| Preferencia disfrazada | Alguien lo puso porque el anterior lo tenía |
| Excluyente injustificado | Años de experiencia arbitrarios, titulación no necesaria, herramienta concreta sustituible |

Los años de experiencia son el requisito más caro y menos informativo: propón sustituirlos por evidencia de haber resuelto el problema concreto.

## Paso 2 — Estructura de la oferta

1. **Título** que la gente busca de verdad, sin inventos internos ni «ninja».
2. **El trabajo en cinco líneas**: qué va a hacer esta persona el primer trimestre. Concreto, en primera persona del plural.
3. **Cómo mediremos el éxito** a los 6 meses. Esto atrae a la gente buena más que cualquier lista de beneficios.
4. **Lo que necesitas de verdad**: los imprescindibles, cinco como máximo.
5. **Lo que ayuda pero no es obligatorio**, con la frase explícita de que no hace falta cumplirlo todo para presentarse.
6. **Lo incómodo del puesto**, dicho con honestidad. Filtra mejor que cualquier prueba técnica y da credibilidad al resto.
7. **Condiciones**: rango salarial, modalidad, horario, viajes.
8. **El proceso**: número de etapas, en qué consiste cada una, plazo aproximado y quién participa.

## Paso 3 — Revisión de lenguaje

Marca y corrige:

- Adjetivos con sesgo de género o de edad, y términos como «nativo digital» o «recién titulado».
- Exigencias de disponibilidad que excluyen a personas con responsabilidades de cuidado sin necesidad real.
- Jerga interna incomprensible desde fuera.
- Promesas vacías: «ambiente familiar», «somos como una familia», «gente apasionada».
- Requisitos que en la práctica excluyen por origen o por trayectoria no lineal.

## Paso 4 — Coherencia con el proceso

Comprueba que lo que se pide se evalúa: si pides una competencia, tiene que haber un momento del proceso donde se comprueba. Y al contrario: si evaluamos algo que no está en la oferta, hay que añadirlo o dejar de evaluarlo.

## Entregables

1. Requisitos depurados y clasificados, con lo eliminado y su motivo.
2. La oferta completa, lista para publicar.
3. Lista de correcciones de lenguaje aplicadas.
4. Tabla de coherencia entre lo que se pide y dónde se evalúa.
5. Dos versiones cortas para redes profesionales y para portales de empleo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Escribir una descripción de puesto centrada en el trabajo real y los criterios de éxito, depurando requisitos innecesarios y lenguaje excluyente',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cribado de candidaturas con IA: qué se puede automatizar y qué no debes',
                'description'      => 'Delimita el uso de IA en selección con criterio de riesgo: qué tareas son seguras, qué exige supervisión humana con registro y qué decisiones no se delegan nunca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de talento con conocimiento del marco normativo europeo y experiencia en procesos de selección con herramientas automáticas. Quiero usar IA sin meterme en un problema legal ni construir un filtro que descarte a buenos candidatos por motivos absurdos.

Nota: esto ordena decisiones operativas. La calificación jurídica del sistema y las obligaciones concretas las valida quien lleve el asunto legal; el uso de IA en selección de personal está entre los usos que el Reglamento europeo de IA considera de alto riesgo, con obligaciones cuyo calendario ha cambiado, así que conviene comprobar el estado vigente antes de implantar nada.

## Contexto que necesito

1. Volumen de candidaturas por proceso y tamaño del equipo de selección.
2. Qué herramienta o modelo pensáis usar y con qué plan.
3. En qué punto exacto del proceso queréis usarlo.
4. Qué datos de la candidatura entrarían en la herramienta.
5. Países donde se contrata.

## Paso 1 — Clasificar la tarea

| Tarea | Riesgo | Recomendación |
|---|---|---|
| Resumir una candidatura para que la lea una persona | Bajo | Adelante, con revisión del resumen |
| Extraer datos estructurados (herramientas, años, idiomas) | Bajo | Adelante, verificando la extracción |
| Redactar preguntas de entrevista a partir del perfil | Bajo | Adelante |
| Ordenar candidaturas por encaje con criterios escritos | Medio | Solo como apoyo, sin descartar automáticamente |
| Puntuar y descartar automáticamente | Alto | No |
| Inferir rasgos de personalidad, emociones o potencial | Muy alto | No |
| Analizar vídeo o voz para evaluar al candidato | Muy alto | No |

La línea de fondo: la IA puede ayudar a leer, no a decidir. Un descarte lo firma una persona y tiene que poder explicarlo.

## Paso 2 — Diseño del cribado asistido

Para el uso permitido, define:

1. **Criterios escritos antes** de ver las candidaturas, derivados del puesto y comprobables (tiene o no tiene, ha hecho o no ha hecho).
2. **Prohibición explícita** de usar como criterio nombre, foto, edad, sexo, origen, dirección, universidad, huecos en el CV o duración de los contratos anteriores.
3. **Salida obligatoria de la herramienta**: para cada candidatura, qué criterios cumple, con la cita del CV que lo respalda, y qué falta. Nunca una nota global sin explicación.
4. **Revisión humana** de todas las candidaturas que la herramienta marque como no encaje, al menos por muestreo alto en volúmenes grandes.
5. **Registro**: versión de los criterios, fecha, quién revisó y motivo del descarte. Si un candidato reclama, esto es lo único que sirve.

## Paso 3 — Control de sesgo

Diseña la comprobación: pasar por la herramienta 20 candidaturas reales y sus copias con nombre, foto, edad y universidad cambiados. Si el resultado varía, el sistema no se usa. Repetir la comprobación cada vez que se cambie el prompt o la herramienta.

## Paso 4 — Transparencia con el candidato

Qué se le informa y dónde: que hay apoyo automatizado en la revisión, que la decisión la toma una persona, y a quién dirigirse para pedir explicación. Redáctalo en dos frases claras, sin lenguaje defensivo.

## Entregables

1. Clasificación de las tareas de mi proceso con la recomendación de cada una.
2. Criterios de cribado escritos y comprobables para el puesto.
3. Formato obligatorio de salida de la herramienta.
4. Protocolo de comprobación de sesgo, con la muestra.
5. Texto de información al candidato y esquema del registro a conservar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Delimitar el uso de IA en selección de personal por nivel de riesgo, con criterios escritos, control de sesgo, registro y transparencia con el candidato',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Política de uso de IA para empleados: redáctala y consigue que se cumpla',
                'description'      => 'El documento de dos páginas que dice qué herramientas están aprobadas, con qué datos, quién autoriza y quién revisa, más el registro de formación que permite demostrarlo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de personas con experiencia implantando políticas que la gente lee y cumple. Necesito una política de uso de IA para la empresa, corta y aplicable, no un documento defensivo de veinte páginas.

Nota: esto ordena el trabajo operativo. La revisión jurídica y las obligaciones normativas concretas las valida quien lleve el asunto legal.

## Contexto que necesito

1. Tamaño de la empresa, áreas y si hay perfiles técnicos.
2. Herramientas de IA que ya se usan (incluido lo que sabes que se usa sin aprobar).
3. Tipos de datos que se manejan: personales, de clientes, financieros, sanitarios, código.
4. Sector y si hay obligaciones específicas.
5. Quién puede ser el responsable de la política, con nombre.

## Paso 1 — Inventario sin sanción

Redacta el mensaje para preguntar al equipo qué usa hoy, con la garantía explícita de que declarar no tiene consecuencias y ocultar sí. Sin esa garantía, el inventario sale falso y la política se escribe sobre una realidad inventada.

## Paso 2 — Clasificación de datos en tres niveles

En lugar de una lista de herramientas que caduca, la política se construye sobre los datos:

| Nivel | Qué incluye | Regla |
|---|---|---|
| Verde | Información pública o interna sin datos personales ni secretos | Uso libre con herramientas aprobadas |
| Ámbar | Interna sensible sin datos personales | Solo herramientas aprobadas con plan de empresa |
| Rojo | Datos personales, credenciales, información confidencial de clientes | Prohibido sin autorización escrita |

Incluye la regla mnemotécnica: si no lo enviarías por correo a un proveedor externo sin pensarlo, no lo pegues en una IA.

## Paso 3 — La política, en dos páginas

Redáctala con estos apartados, con nombres y fechas concretas donde toque: alcance, herramientas aprobadas y cómo pedir una nueva, niveles de datos, revisión humana obligatoria de lo que sale con nombre de la empresa, transparencia con clientes, uso en decisiones sobre personas (selección, desempeño), automatizaciones y agentes, comunicación de incidentes sin sanción por avisar, formación obligatoria y fecha de revisión.

## Paso 4 — Que se cumpla

- Camino rápido para aprobar herramientas: formulario de cinco preguntas y respuesta en una semana. Si aprobar tarda tres meses, la política se incumple por necesidad.
- Formación por áreas, con ejemplos del trabajo real de cada una.
- Registro: quién asistió, cuándo, qué versión de la política y qué herramientas estaban aprobadas en esa fecha.
- Revisión semestral con fecha en el calendario.

## Paso 5 — Comunicación

Escribe el mensaje de lanzamiento: por qué existe la política, qué cambia para cada persona, qué no cambia y a quién preguntar. Tono de facilitar, no de prohibir: la prohibición sin alternativa produce uso en la sombra, que es el escenario que la política pretende evitar.

## Entregables

1. Mensaje de inventario inicial.
2. La política completa en dos páginas, con los huecos marcados para rellenar.
3. Formulario de aprobación de herramientas.
4. Esquema del registro de formación.
5. Mensaje de lanzamiento y guion de la sesión de una hora.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redactar e implantar una política interna de uso de IA con clasificación de datos, aprobación de herramientas, formación y registro',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programa de alfabetización en IA por rol: formación que se puede demostrar',
                'description'      => 'Diseña la formación mínima y suficiente para que cada área entienda las herramientas que usa, sus límites y sus riesgos, con contenidos por rol y evidencia de realización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de formación con experiencia en programas obligatorios que la gente no odia. Tengo que garantizar que el personal que usa sistemas de IA tenga un nivel suficiente de conocimiento, de forma proporcionada a su puesto, y poder demostrarlo.

Nota: el Reglamento europeo de IA incorpora una obligación de alfabetización en IA para el personal que usa estos sistemas, aplicable desde febrero de 2025. El alcance exacto para tu organización lo confirma quien lleve el asunto legal; aquí diseñamos el programa.

## Contexto que necesito

1. Áreas de la empresa y cuántas personas en cada una.
2. Qué herramientas de IA usa realmente cada área y para qué.
3. Nivel de partida: quién ya las usa a diario y quién no las ha abierto nunca.
4. Tiempo disponible: horas por persona que la empresa está dispuesta a invertir.
5. Si hay usos que afecten a decisiones sobre personas o clientes.

## Paso 1 — Mapa de exposición

Tabla por área: herramientas usadas, tipo de datos que tocan, decisiones en las que influye la IA y nivel de riesgo. El nivel de riesgo determina la profundidad de la formación; no todo el mundo necesita lo mismo.

## Paso 2 — Contenido común (una hora, todo el mundo)

1. Qué es y qué no es un modelo de lenguaje: predice texto plausible, no consulta una base de verdades.
2. Los tres fallos que hay que conocer: invención de datos con seguridad, desactualización y sesgo.
3. La regla de los datos: los tres niveles de la política interna, con ejemplos de la empresa.
4. Verificación: qué se comprueba siempre (cifras, nombres, citas, referencias legales) y cómo.
5. Responsabilidad: quien firma responde, igual que con cualquier otro trabajo.
6. Qué hacer si algo sale mal y a quién avisar.

Con ejercicios sobre casos reales de la empresa. Un curso genérico no cambia comportamientos.

## Paso 3 — Módulos por rol

Para cada área, media hora o una hora adicional con lo suyo:

| Área | Foco del módulo |
|---|---|
| Comercial y marketing | Datos de clientes, revisión de cifras, voz de marca, transparencia con el cliente |
| Personas | Uso en selección y desempeño: qué no se delega, registro, sesgo |
| Finanzas y legal | Confidencialidad, verificación documental, trazabilidad |
| Técnico | Confidencialidad del código, dependencias, inyección de prompt, permisos de agentes |
| Atención al cliente | Qué puede responder un asistente, qué se escala, tono |
| Dirección | Riesgos, decisiones de inversión, obligaciones y responsabilidad |

## Paso 4 — Evidencia

Define qué se conserva: asistentes, fecha, contenido impartido (con versión), materiales, resultado del ejercicio y confirmación de lectura de la política. En una hoja de cálculo o en el sistema de formación, pero con la versión del contenido anotada.

## Paso 5 — Mantenimiento

- Módulo de bienvenida para quien entre nuevo, en su primera semana.
- Actualización cuando se apruebe una herramienta nueva o cambie la política.
- Repaso anual de 30 minutos con los casos que hayan ocurrido en la empresa.

## Entregables

1. Mapa de exposición por área con nivel de riesgo.
2. Guion detallado de la sesión común, con los ejercicios.
3. Contenido de los módulos por rol.
4. Plantilla de registro de evidencia.
5. Calendario de despliegue y plan de mantenimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un programa de alfabetización en IA por rol con contenidos, ejercicios y registro de evidencia para poder demostrar la formación',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Rúbricas y hojas de evaluación que hacen comparables a los candidatos',
                'description'      => 'Convierte «me ha dado buena sensación» en una evaluación con criterios definidos, niveles descritos y evidencia, para que la decisión no dependa de quién entrevistó.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de talento con experiencia en procesos estructurados. Quiero que dos entrevistadores distintos que ven al mismo candidato lleguen a conclusiones parecidas, y que la decisión final se pueda explicar.

## Contexto que necesito

1. Puesto y las competencias que de verdad predicen el desempeño en él.
2. Etapas del proceso y quién participa en cada una.
3. Cómo se evalúa hoy y qué discusiones se repiten al decidir.
4. Si hay prueba práctica y en qué consiste.

## Paso 1 — Elegir las competencias

Máximo cinco, y cada una tiene que cumplir tres condiciones: predice el desempeño en este puesto, se puede observar en el proceso y se puede describir por niveles. Descarta las que no cumplan las tres y dime por qué: «proactividad» o «encaje cultural» sin definición son la puerta de entrada del sesgo.

## Paso 2 — Definir niveles observables

Para cada competencia, describe cuatro niveles con conductas, no con adjetivos:

| Nivel | Qué se observa |
|---|---|
| 1 — No demostrado | No aporta ejemplos o son ajenos a su responsabilidad |
| 2 — Básico | Ejemplos reales, con acompañamiento o en contextos simples |
| 3 — Sólido | Ejemplos propios, decisiones justificadas, resultados verificables |
| 4 — Referencia | Además, ha mejorado el sistema o formado a otros |

La diferencia entre el nivel 2 y el 3 tiene que poder señalarse en la transcripción de la entrevista. Si no, la rúbrica no sirve.

## Paso 3 — Preguntas por competencia

Tres preguntas por competencia, sobre comportamiento pasado y con repregunta:

- Pregunta de apertura: «cuéntame una situación en la que...».
- Repregunta de concreción: «¿qué hiciste tú exactamente?», para separar el logro del equipo del suyo.
- Repregunta de dificultad: «¿qué salió mal y qué harías distinto?».

Marca las preguntas que no se pueden hacer: situación familiar, planes de maternidad o paternidad, edad, salud, origen, creencias, afiliación.

## Paso 4 — Reparto entre etapas

Tabla de qué competencia se evalúa en qué etapa y por quién. Cada competencia, al menos por dos personas distintas. Ninguna etapa evalúa las cinco: eso produce evaluaciones superficiales.

## Paso 5 — Recogida y decisión

- Hoja de evaluación individual: nivel por competencia, evidencia citada de lo que dijo el candidato, y una recomendación.
- Regla clave: **cada evaluador registra su valoración antes de hablar con los demás.** El anclaje en la opinión del primero que habla es el sesgo más común y el más fácil de evitar.
- Reunión de decisión: se comparan niveles y evidencias, no impresiones. Si hay discrepancia grande en una competencia, se aclara con una conversación adicional en lugar de negociando el promedio.
- Registro del motivo de la decisión final.

## Entregables

1. Competencias elegidas con la justificación y las descartadas.
2. Rúbrica completa con los cuatro niveles por competencia.
3. Preguntas y repreguntas por competencia, con las prohibidas señaladas.
4. Reparto por etapas y evaluador.
5. Hoja de evaluación lista para usar y guion de la reunión de decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir rúbricas con niveles observables, preguntas por competencia y hojas de evaluación que hacen comparables a los candidatos',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Mapa de tareas y recualificación: cómo cambia cada puesto con la IA',
                'description'      => 'Analiza puesto por puesto qué tareas cambian, cuáles desaparecen y cuáles ganan peso, y construye el plan de recualificación con conversaciones honestas en lugar de rumores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de desarrollo organizativo. Quiero anticipar cómo cambia el trabajo en la empresa con la IA, sin caer ni en el catastrofismo ni en el «aquí no nos afecta».

## Contexto que necesito

1. Puestos a analizar y cuántas personas en cada uno.
2. Para cada puesto, las 10 tareas que consumen más tiempo.
3. Herramientas de IA que ya se usan en la empresa.
4. Horizonte de análisis: 12 o 24 meses.
5. Compromisos que la dirección está dispuesta a hacer públicos.

## Paso 1 — Análisis por tarea, no por puesto

El error habitual es preguntarse si un puesto «lo hará la IA». Los puestos no se automatizan: las tareas cambian. Para cada tarea:

| Campo | Contenido |
|---|---|
| Tiempo actual | Horas al mes |
| Verificabilidad | ¿Se detecta en un minuto que está mal hecha? |
| Efecto esperado | Desaparece / se acelera / cambia de forma / gana peso / no cambia |
| Qué queda para la persona | Criterio, relación, decisión, responsabilidad |
| Capacidad necesaria | Qué tiene que saber hacer para llevarla en el nuevo formato |

Presta atención a la categoría «gana peso»: cuando lo mecánico se acelera, lo que crece es la revisión, el criterio y la conversación con el cliente. Eso también hay que entrenarlo.

## Paso 2 — Perfil resultante

Para cada puesto, describe cómo queda el trabajo en el horizonte elegido: qué proporción de tiempo en qué tipo de actividad, y qué tres capacidades pasan a ser críticas.

## Paso 3 — Plan de recualificación

| Capacidad | Quién la necesita | Cómo se adquiere | Tiempo | Cómo se comprueba |
|---|---|---|---|---|

Prioriza por dos criterios: cuántas personas la necesitan y cuánto se degrada su trabajo sin ella. Nada de catálogos de cursos: formación con ejercicios sobre el trabajo real y una prueba de que se puede hacer.

## Paso 4 — Las conversaciones honestas

Aquí está la parte que decide si el plan funciona. Prepara:

- Qué se le dice a alguien cuya tarea principal se automatiza en gran parte: qué cambia, qué se le ofrece, en qué plazo y qué se le pide.
- Qué NO se promete si no se puede sostener. Un compromiso incumplido en este terreno destruye la confianza durante años.
- Cómo se responde a la pregunta directa: «¿esto significa que sobro?». Con la verdad disponible en ese momento, aunque sea incompleta.
- El canal para preguntas anónimas y el compromiso de responderlas en público.

## Paso 5 — Seguimiento

Indicadores trimestrales: tareas efectivamente cambiadas, horas liberadas y en qué se han reinvertido, personas formadas y capacidades demostradas, movilidad interna producida.

## Entregables

1. Mapa de tareas por puesto con el efecto esperado.
2. Perfil resultante de cada puesto en el horizonte elegido.
3. Plan de recualificación priorizado.
4. Guiones de las conversaciones difíciles, incluida la pregunta directa.
5. Cuadro de seguimiento trimestral.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar cómo la IA cambia las tareas de cada puesto y construir el plan de recualificación con conversaciones honestas y seguimiento',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'De 800 comentarios de una encuesta a seis acciones concretas',
                'description'      => 'Analiza respuestas abiertas de clima o de pulso con IA sin perder el matiz ni el anonimato, y convierte los temas en compromisos con responsable y fecha.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de personas con experiencia analizando encuestas de clima. Tengo cientos de respuestas abiertas y quiero un análisis que produzca acciones, no un informe que se presenta y se archiva.

## Lo que te voy a dar

1. Las respuestas abiertas (por lotes si son muchas).
2. Las preguntas que las provocaron.
3. Segmentación disponible: área, antigüedad, si es responsable de equipo. Solo con grupos suficientemente grandes.
4. Resultados cuantitativos, si los hay.
5. Qué se prometió en la encuesta anterior y qué se hizo.

## Regla de anonimato

Antes de cualquier análisis: no reproduzcas comentarios que permitan identificar a la persona (referencias a situaciones únicas, cargos con una sola persona, detalles personales). Cuando un comentario relevante sea identificable, parafraséalo. Y en la segmentación, nunca bajes de un tamaño mínimo de grupo: si el área tiene cuatro personas, no se desagrega.

## Paso 1 — Temas cuantificados

Tabla por tema: menciones, porcentaje del total, tono (positivo, negativo, mixto), intensidad, y en qué segmentos se concentra. Incluye los temas positivos: saber qué funciona es la mitad de la información y casi siempre se ignora.

## Paso 2 — Los tres niveles de cada queja

Para cada tema negativo, separa:

- **El síntoma** («hay demasiadas reuniones»).
- **El problema de fondo** (falta de claridad en las decisiones, así que se convoca a todo el mundo).
- **La solución que propone la gente** (cancelar reuniones), que rara vez ataca el fondo.

Actuar sobre el síntoma produce la misma queja al trimestre siguiente con otras palabras.

## Paso 3 — Lo que se puede cambiar y lo que no

Clasifica los temas:

| Categoría | Acción |
|---|---|
| Se puede cambiar ya | Acción concreta este trimestre |
| Se puede cambiar con decisión de dirección | Elevar con propuesta y coste |
| No se va a cambiar | Explicarlo con honestidad y una vez |
| Malentendido | Comunicar mejor, no cambiar nada |

La categoría «no se va a cambiar» es imprescindible. Callar sobre lo que no se va a tocar es lo que hace que la gente deje de responder las encuestas.

## Paso 4 — Máximo seis acciones

Elige seis, con responsable con nombre, fecha y una medida observable de que ha ocurrido. Seis compromisos cumplidos generan más confianza que veinte iniciativas anunciadas.

## Paso 5 — Devolución al equipo

Prepara la comunicación de resultados: qué ha dicho la gente (temas, no citas identificables), qué vamos a hacer, qué no vamos a hacer y por qué, y cuándo se informará del avance. Máximo una página.

## Entregables

1. Temas cuantificados con segmentos, respetando el anonimato.
2. Desglose síntoma / problema de fondo / solución propuesta.
3. Clasificación de temas por capacidad de cambio.
4. Las seis acciones con responsable, fecha y medida.
5. Comunicación de resultados de una página.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar cientos de respuestas abiertas de una encuesta interna respetando el anonimato y convertirlas en seis compromisos con responsable y fecha',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Base de conocimiento interna de personas: que el equipo deje de preguntar lo mismo',
                'description'      => 'Documenta las respuestas a las 40 preguntas que llegan cada mes a Recursos Humanos, con el formato que permite encontrarlas y que un asistente interno pueda responderlas bien.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de operaciones de personas. Mi equipo responde las mismas preguntas cada semana: vacaciones, nóminas, permisos, gastos, bajas, teletrabajo. Quiero documentarlo bien una vez.

## Contexto que necesito

1. Las preguntas que más llegan (mira el buzón del último trimestre y cuéntalas).
2. Dónde está hoy la información: convenio, políticas, correos antiguos, en la cabeza de alguien.
3. Herramienta donde vivirá: intranet, wiki, canal, asistente interno.
4. País o países y convenio aplicable, porque las respuestas dependen de ello.

## Paso 1 — Priorizar por volumen y por coste

Tabla de preguntas ordenadas por: frecuencia, tiempo que cuesta responder cada una, y consecuencia de responderla mal. Empieza por las diez primeras. Documentar cuarenta a la vez garantiza que ninguna quede bien.

## Paso 2 — Formato de cada artículo

Escribe cada respuesta con esta estructura fija:

1. **La pregunta tal como la hace la gente** (varias formulaciones si se pregunta de formas distintas).
2. **La respuesta corta**, en dos frases, arriba. La mayoría se queda aquí.
3. **Qué hacer**, paso a paso, con el enlace al formulario o herramienta.
4. **Plazos** concretos: cuándo hay que pedirlo, cuánto tarda, hasta cuándo.
5. **Casos particulares** que existen de verdad.
6. **Si tu caso no está aquí**: a quién escribir.
7. **Última actualización** y quién es el responsable del artículo.

La respuesta corta arriba es lo que hace que la gente la lea, y también lo que permite que un asistente interno la extraiga bien. Un artículo que empieza con tres párrafos de contexto normativo no lo lee nadie ni lo cita bien ninguna herramienta.

## Paso 3 — Lenguaje

- Sin artículos del convenio en la respuesta principal; van al final, como referencia.
- Sin condicionales innecesarios: si la respuesta es que sí, se dice que sí.
- Cifras y plazos exactos, no «con suficiente antelación».
- Una sola forma de nombrar cada cosa, en todos los artículos.

## Paso 4 — Uso con asistente interno

Si vais a conectar un asistente a esta base, añade las condiciones: qué preguntas puede responder directamente, qué preguntas deriva siempre a una persona (nómina concreta, situaciones personales, bajas, conflictos), aviso de que la respuesta procede de la documentación y a quién acudir. Y la regla de oro: el asistente cita el artículo, no improvisa la política.

## Paso 5 — Mantenimiento

- Responsable por área temática.
- Revisión cuando cambie una política, el convenio o el calendario, con fecha.
- Regla operativa: cada vez que alguien responde una pregunta por mensaje privado, comprueba si existe el artículo; si no existe, lo crea. Así crece la base sin un proyecto.

## Entregables

1. Preguntas priorizadas por volumen y coste.
2. Los diez primeros artículos redactados en el formato completo.
3. Glosario de términos y forma única de nombrarlos.
4. Reglas de uso del asistente interno, si aplica.
5. Plan de mantenimiento con responsables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Documentar las preguntas frecuentes de Recursos Humanos en artículos con respuesta corta, pasos y plazos, listos para el equipo y para un asistente interno',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicar un cambio impopular: mensajes, canales y las preguntas difíciles',
                'description'      => 'Prepara la comunicación de una decisión que no va a gustar: qué se dice, en qué orden se informa a quién, y las respuestas honestas a las preguntas que van a llegar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de comunicación interna con experiencia en cambios difíciles: fin del teletrabajo total, congelación salarial, reorganización, cambio de responsables, retirada de un beneficio. Tengo que comunicar uno.

## Contexto que necesito

1. La decisión, en una frase, y si es reversible o no.
2. Los motivos reales, incluidos los que no queríamos contar.
3. A quién afecta y cómo, con detalle.
4. Qué se ha decidido ya y qué está abierto de verdad.
5. Qué se puede compensar o mitigar y con qué presupuesto.
6. Plazo: cuándo entra en vigor.

## Paso 0 — La comprobación incómoda

Antes de redactar nada, contesta: ¿la decisión está tomada de verdad? Si está tomada, no se comunica como consulta. Presentar como abierta una decisión cerrada es el error que más confianza destruye, y siempre se descubre.

Y segunda comprobación: ¿el motivo que vamos a contar es el motivo real? Si no lo es, la gente lo notará y a partir de ese día no creerá el resto. Si hay una parte del motivo que no se puede contar, es mejor decir «hay una parte que no puedo detallar» que inventar una razón cómoda.

## Paso 1 — Orden de comunicación

| Momento | Quién | Por qué |
|---|---|---|
| Antes | Responsables de equipo | Para que no se enteren con su gente delante |
| Antes | Personas directamente afectadas, en conversación individual | Nadie se entera de algo que le cambia la vida por un correo colectivo |
| Después | Toda la empresa | Con el mensaje completo |
| Después | Externos, si aplica | Coherente con lo interno |

Los plazos entre pasos, en horas, no en días: en cuanto lo sabe un grupo, lo sabe la empresa.

## Paso 2 — El mensaje

Estructura, sin adornos:

1. Qué cambia, en la primera frase. Sin preámbulo de contexto: cuando la gente sabe que viene algo malo, el preámbulo se lee como manipulación.
2. Desde cuándo.
3. Por qué, con los motivos reales y los datos que se pueden compartir.
4. A quién afecta y cómo, con concreción.
5. Qué NO cambia. Reduce el ruido y el rumor.
6. Qué se ha hecho para mitigarlo y qué no se ha podido.
7. Qué está abierto y cómo participar en eso.
8. Dónde y cuándo se puede preguntar.

Prohibido: «una oportunidad emocionante», «alineación estratégica», «optimización de recursos» y cualquier eufemismo que la gente traducirá inmediatamente.

## Paso 3 — Las preguntas difíciles

Prepara las diez preguntas que van a hacer, incluidas las que preferirías evitar: ¿hay despidos detrás?, ¿esto afecta a la dirección igual que a nosotros?, ¿por qué ahora si la empresa va bien?, ¿esto es definitivo?, ¿qué pasa si no puedo cumplirlo por mi situación personal?

Para cada una: la respuesta honesta con la información disponible. Y donde no haya respuesta, decir que no la hay y cuándo la habrá. «No lo sé todavía, lo sabremos el día X» es una respuesta aceptable; una respuesta vacía no.

## Paso 4 — Después

- Espacio para preguntas en los primeros dos días, con presencia de quien decidió.
- Seguimiento a las dos semanas: qué se ha oído y qué hay que aclarar.
- Compromisos de mitigación con responsable y fecha, y su cumplimiento visible.

## Entregables

1. Veredicto de las dos comprobaciones previas.
2. Plan de comunicación con orden, canales y horas.
3. El mensaje principal redactado.
4. Guion de las conversaciones individuales con los afectados.
5. Las diez preguntas difíciles con su respuesta honesta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar la comunicación interna de una decisión impopular con orden de información, mensaje honesto y respuestas a las preguntas difíciles',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Perfil de competencias de IA por puesto: qué debe saber cada rol y cómo se comprueba',
                'description'      => 'Define, para cada puesto, qué nivel de manejo de IA se espera, con conductas observables por nivel, cómo se evalúa en una entrevista y cómo se desarrolla internamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de talento y desarrollo. «Manejo de IA» aparece ya en las ofertas y en las evaluaciones sin que nadie sepa qué significa. Quiero definirlo por puesto con conductas observables.

## Contexto que necesito

1. Puestos a definir y qué hace cada uno.
2. Herramientas de IA aprobadas en la empresa.
3. Nivel real del equipo hoy, si lo sabes.
4. Para qué lo quieres: contratar, evaluar, formar o las tres.

## Paso 1 — Cuatro niveles, con conductas

Define para cada puesto qué nivel se espera, usando esta escala y describiendo qué se observa:

| Nivel | Qué hace la persona |
|---|---|
| 1 — Usuario básico | Usa un asistente para tareas sueltas; revisa lo que sale; conoce la política de datos |
| 2 — Usuario competente | Escribe instrucciones con contexto y formato; itera; verifica cifras y fuentes; sabe cuándo la herramienta no sirve |
| 3 — Integrador | Diseña el flujo de una tarea completa con IA; documenta el procedimiento para otros; mide el ahorro real |
| 4 — Constructor | Monta automatizaciones o agentes con controles; evalúa calidad; entiende costes y riesgos |

La mayoría de los puestos necesitan nivel 2. Exigir 4 en un puesto que no lo requiere es lo que produce ofertas que nadie cumple y evaluaciones injustas.

## Paso 2 — Lo que no es competencia de IA

Marca explícitamente lo que no cuenta, porque es donde se cuela el humo:

- Haber hecho un curso o tener un certificado.
- Conocer el nombre de veinte herramientas.
- Usar la IA para todo, incluido lo que sale peor.
- Enseñar resultados sin poder explicar cómo se verificaron.

Y añade la competencia que más importa y menos se evalúa: **saber cuándo no usarla**.

## Paso 3 — Cómo se evalúa

Para contratar, tres preguntas por nivel con lo que hay que escuchar:

- Nivel 2: «cuéntame una tarea que hayas resuelto con IA la semana pasada; ¿cómo comprobaste que estaba bien?». Escucha el método de verificación, no la herramienta.
- Nivel 3: «¿qué proceso has cambiado y cuánto tiempo ahorra? ¿Cómo lo mediste?». Escucha si hay números y si el procedimiento quedó documentado para otros.
- Nivel 4: «cuéntame algo que montaste y falló; ¿qué control faltaba?». Escucha si piensa en fallos y en permisos.

Para evaluar internamente: una prueba práctica sobre una tarea real del puesto, con revisión del resultado y de cómo lo verificó.

## Paso 4 — Desarrollo

Para cada salto de nivel: qué hay que aprender, cómo se practica en el trabajo real, quién puede acompañar y en cuánto tiempo es razonable. Sin catálogo de cursos: práctica en tareas propias con revisión.

## Entregables

1. Nivel esperado por puesto, justificado.
2. Descripción de conductas por nivel, adaptada a mis puestos.
3. Lista de lo que no cuenta como competencia.
4. Preguntas de entrevista y prueba práctica por nivel.
5. Rutas de desarrollo por salto de nivel.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Definir el nivel de competencia en IA esperado por puesto con conductas observables, preguntas de entrevista y rutas de desarrollo',
                'vote_score'       => 30,
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
