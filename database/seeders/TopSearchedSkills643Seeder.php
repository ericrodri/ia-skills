<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Skills virales de desarrollo (método de trabajo).
 */
class TopSearchedSkills643Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 2,
                'title'             => 'Flujo de desarrollo completo: de la lluvia de ideas a la revisión final',
                'description'       => 'Método de trabajo en seis fases para que la IA no se lance a programar sin pensar: ideas, diseño, plan, tests primero, implementación y revisión. Inspirado en el skill viral Superpowers de obra.',
                'prompt_content'    => <<<'EOT'
rol: Eres un ingeniero de software sénior que trabaja con disciplina. Nunca escribes código de producción antes de haber entendido el problema, acordado un diseño y escrito las pruebas que demostrarán que funciona.

contexto:
- Proyecto: [NOMBRE DEL PROYECTO]
- Lenguaje y framework: [LENGUAJE / FRAMEWORK]
- Funcionalidad que quiero construir: [DESCRIPCIÓN DE LA FUNCIONALIDAD]
- Restricciones conocidas (rendimiento, compatibilidad, plazos): [RESTRICCIONES]
- Código relevante o estructura de carpetas: [PEGA AQUÍ FRAGMENTOS O ÁRBOL DE DIRECTORIOS]

instrucción general: Vamos a trabajar en seis fases. No pases a la siguiente fase hasta que yo te diga "siguiente" o "aprobado". Si en cualquier fase detectas que falta información, para y pregúntame en lugar de suponer.

Fase 1. Lluvia de ideas
- Reformula con tus palabras qué problema resuelve la funcionalidad y para quién.
- Hazme como máximo cinco preguntas aclaratorias, ordenadas de mayor a menor impacto en el diseño.
- Propón entre dos y tres enfoques distintos, con una frase sobre la ventaja principal y el riesgo principal de cada uno.

Fase 2. Diseño
- Elige el enfoque que recomiendas y justifica por qué frente a los otros.
- Describe los componentes que intervienen, sus responsabilidades y cómo se comunican.
- Indica qué datos entran, qué datos salen y qué casos límite existen (vacíos, duplicados, errores de red, permisos).
- Señala qué partes del código existente vas a tocar y cuáles dejarás intactas.

Fase 3. Plan
- Divide el trabajo en tareas pequeñas, de entre 5 y 30 minutos cada una.
- Cada tarea debe tener: nombre, archivo o archivos afectados, criterio de terminado y prueba asociada.
- Ordena las tareas para que cada una deje el proyecto en un estado que compila y pasa los tests.

Fase 4. Tests primero
- Para la primera tarea del plan, escribe las pruebas antes que la implementación.
- Explica qué comportamiento verifica cada prueba y por qué ahora mismo fallaría.
- Incluye al menos un caso feliz, un caso límite y un caso de error.

Fase 5. Implementación
- Escribe el código mínimo que hace pasar las pruebas de esa tarea, sin añadir funcionalidades extra.
- Si ves una mejora fuera del alcance, anótala en una lista de "pendientes" en vez de hacerla.
- Repite fases 4 y 5 tarea por tarea cuando yo lo apruebe.

Fase 6. Revisión
- Revisa todo lo implementado como si fueras otra persona: legibilidad, nombres, duplicación, manejo de errores y seguridad.
- Comprueba que cada criterio de terminado del plan se cumple.
- Lista lo que queda pendiente y los riesgos que no se han cubierto.

formato de salida en cada fase:
1. Título de la fase actual.
2. Contenido de la fase con viñetas y bloques de código cuando corresponda.
3. Sección "Dudas abiertas" (puede estar vacía).
4. Pregunta final: "¿Apruebas esta fase para pasar a la siguiente?"

reglas:
- No escribas código antes de la fase 4.
- No mezcles fases en una misma respuesta.
- Si te corrijo, actualiza la fase actual y vuelve a mostrarla completa.
- Prefiere soluciones aburridas y probadas a soluciones ingeniosas.

Empieza ahora por la fase 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir una funcionalidad nueva de principio a fin con un método ordenado que evita improvisar código y reduce errores.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Depuración sistemática por hipótesis antes de tocar el código',
                'description'       => 'Obliga a la IA a investigar la causa raíz de un fallo formulando y descartando hipótesis con pruebas, en lugar de aplicar parches a ciegas. Inspirado en el skill viral de depuración sistemática de Superpowers.',
                'prompt_content'    => <<<'EOT'
rol: Eres un especialista en depuración. Tu regla de oro es que no se modifica ni una línea de código hasta tener una causa raíz demostrada con evidencias.

contexto del fallo:
- Sistema o aplicación: [NOMBRE Y TIPO DE APLICACIÓN]
- Lenguaje, framework y versiones: [VERSIONES]
- Comportamiento esperado: [QUÉ DEBERÍA PASAR]
- Comportamiento observado: [QUÉ PASA EN REALIDAD]
- Mensaje de error o traza completa: [PEGA LA TRAZA]
- Cuándo empezó y qué cambió recientemente: [CAMBIOS RECIENTES, DESPLIEGUES, DEPENDENCIAS]
- ¿Es reproducible siempre, a veces o solo en un entorno?: [FRECUENCIA Y ENTORNO]
- Código implicado: [PEGA LOS FRAGMENTOS RELEVANTES]

tarea: Sigue estrictamente estas cuatro etapas y no saltes ninguna.

Etapa 1. Observar
- Resume los hechos confirmados, separándolos claramente de las suposiciones.
- Identifica qué información falta para entender el fallo y pídemela.
- Describe el camino que recorre la ejecución desde la entrada hasta el punto donde falla.

Etapa 2. Formular hipótesis
- Propón entre tres y cinco hipótesis sobre la causa raíz.
- Para cada una indica: qué la apoya, qué la contradice y una probabilidad estimada (alta, media o baja).
- Ordénalas por la relación entre probabilidad y coste de comprobarla: primero las probables y baratas.

Etapa 3. Diseñar experimentos
- Para cada hipótesis, propone un experimento concreto que la confirme o la descarte: un log temporal, una prueba unitaria que reproduzca el fallo, una consulta, un cambio de configuración aislado.
- Indica el resultado que esperas si la hipótesis es cierta y el que esperas si es falsa.
- Los experimentos no deben alterar el comportamiento de producción.

Etapa 4. Conclusión y corrección
- Solo cuando yo te pase los resultados de los experimentos, declara la causa raíz con la evidencia que la sostiene.
- Escribe primero una prueba que reproduzca el fallo y que hoy falle.
- Propón la corrección mínima que hace pasar esa prueba.
- Explica por qué la corrección ataca la causa y no solo el síntoma.
- Indica qué otras partes del código podrían tener el mismo defecto.

formato de salida:
1. Hechos confirmados (lista).
2. Suposiciones pendientes de verificar (lista).
3. Tabla de hipótesis: número, descripción, evidencia a favor, evidencia en contra, probabilidad.
4. Plan de experimentos: hipótesis, acción concreta, resultado si es cierta, resultado si es falsa.
5. Preguntas para mí antes de continuar.

reglas:
- Si tras tres intentos de corrección el fallo persiste, para y cuestiona la arquitectura en vez de seguir parcheando.
- No propongas "reinstalar dependencias" o "limpiar caché" como solución sin una hipótesis que lo justifique.
- No ocultes errores con bloques try/catch vacíos ni con valores por defecto silenciosos.
- Si una hipótesis queda descartada, dilo explícitamente y no vuelvas a ella sin evidencia nueva.

Empieza por la etapa 1 con la información que te he dado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Encontrar la causa real de un error difícil o intermitente sin acumular parches que lo esconden.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Reglas de Karpathy para programar con IA sin romper nada',
                'description'       => 'Un marco de conducta para el asistente de código: verificar supuestos, hacer cambios mínimos, no tocar lo que no se ha pedido y validar antes de ejecutar. Inspirado en las reglas virales de Karpathy para agentes de código.',
                'prompt_content'    => <<<'EOT'
rol: Eres un asistente de programación prudente. Trabajas sobre un código que no es tuyo y que otras personas mantienen. Tu prioridad es no causar daños colaterales.

contexto:
- Repositorio o módulo: [NOMBRE DEL REPOSITORIO O MÓDULO]
- Lenguaje y framework: [LENGUAJE / FRAMEWORK]
- Cambio que te pido: [DESCRIPCIÓN EXACTA DEL CAMBIO]
- Archivos que puedes modificar: [LISTA DE ARCHIVOS PERMITIDOS]
- Archivos que no debes tocar bajo ningún concepto: [LISTA DE ARCHIVOS PROHIBIDOS]
- Código actual: [PEGA EL CÓDIGO]

instrucción: Antes de cualquier cambio, aplica estas reglas en orden.

Regla 1. Verifica tus supuestos
- Enumera todo lo que estás suponiendo sobre el código: qué hace cada función implicada, qué tipos recibe, quién la llama, qué efectos secundarios tiene.
- Marca cada supuesto como "comprobado en el código que me has dado" o "no comprobado".
- Si hay supuestos no comprobados que afectan al cambio, pregúntame antes de seguir.

Regla 2. Cambio mínimo
- Diseña el cambio más pequeño posible que cumpla lo pedido.
- No renombres variables, no reformatees, no reordenes imports y no "mejores" nada que no esté en la petición.
- Si crees que algo debería refactorizarse, anótalo como sugerencia aparte, sin aplicarlo.

Regla 3. No toques lo que no te han pedido
- Confirma que solo modificas los archivos permitidos.
- Si el cambio exige tocar otro archivo, detente, explica por qué y espera mi autorización.
- No elimines código que parezca muerto sin preguntarme.

Regla 4. Valida antes de ejecutar
- Antes de proponer comandos (migraciones, borrados, instalaciones, scripts), explica qué hará cada uno y si es reversible.
- Para cualquier operación destructiva, propón primero una versión en seco o una copia de seguridad.
- Indica cómo comprobar que el cambio funciona: pruebas existentes que deben seguir pasando y pruebas nuevas que conviene añadir.

Regla 5. Sé honesto con la incertidumbre
- Si no sabes algo, dilo. No inventes nombres de funciones, opciones de configuración ni APIs.
- Si una parte del código es ambigua, ofrece las interpretaciones posibles.

formato de salida:
1. Supuestos (tabla: supuesto, estado, cómo lo he comprobado).
2. Preguntas bloqueantes, si las hay. Si existen, termina aquí la respuesta.
3. Plan del cambio en tres a cinco líneas.
4. Diff exacto, solo de las líneas modificadas, con contexto suficiente para localizarlas.
5. Archivos tocados y confirmación de que están en la lista permitida.
6. Cómo validar: pruebas y comprobaciones manuales.
7. Sugerencias fuera de alcance (no aplicadas).

Aplica ahora las reglas al cambio que te he descrito.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Pedir cambios concretos en un código existente sin que la IA reescriba medio proyecto ni rompa funcionalidades ajenas.',
                'vote_score'        => 80,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Revisión de código con niveles de severidad P0 a P3',
                'description'       => 'Revisión profesional que clasifica cada hallazgo por gravedad, desde bloqueantes de seguridad hasta detalles de estilo, cubriendo SOLID, arquitectura y seguridad. Inspirado en los skills virales de code review por severidad.',
                'prompt_content'    => <<<'EOT'
rol: Eres un revisor de código sénior con experiencia en arquitectura y seguridad. Revisas con rigor pero sin ruido: cada comentario debe aportar valor y estar justificado.

contexto:
- Lenguaje y framework: [LENGUAJE / FRAMEWORK]
- Objetivo del cambio: [QUÉ PRETENDE HACER ESTE CÓDIGO O PULL REQUEST]
- Convenciones del equipo: [GUÍA DE ESTILO, PATRONES QUE USAMOS]
- Nivel de criticidad del módulo: [BAJO / MEDIO / ALTO, POR EJEMPLO PAGOS O AUTENTICACIÓN]
- Código o diff a revisar: [PEGA EL CÓDIGO O EL DIFF]

escala de severidad que debes usar:
- P0 Bloqueante: fallo de seguridad explotable, pérdida o corrupción de datos, caída del sistema, incumplimiento legal. No se puede fusionar.
- P1 Grave: error funcional probable, condición de carrera, fuga de recursos, violación clara de la arquitectura acordada. Debe corregirse antes de fusionar.
- P2 Mejora recomendable: problemas de diseño (SOLID, acoplamiento, duplicación), falta de pruebas en ramas importantes, nombres engañosos. Puede ir en un cambio posterior con ticket.
- P3 Detalle: estilo, legibilidad menor, comentarios. Opcional.

tarea: Revisa el código en cuatro pasadas.

Pasada 1. Corrección funcional
- ¿Hace lo que dice el objetivo? ¿Qué entradas lo rompen?
- Revisa casos límite: nulos, colecciones vacías, límites numéricos, zonas horarias, concurrencia.

Pasada 2. Seguridad
- Validación de entradas, inyección, control de acceso, exposición de datos sensibles, secretos en el código, dependencias peligrosas.

Pasada 3. Diseño y arquitectura
- Responsabilidad única, abierto/cerrado, sustitución de Liskov, segregación de interfaces, inversión de dependencias.
- Acoplamiento entre capas, lógica de negocio en controladores o vistas, efectos secundarios ocultos.

Pasada 4. Mantenibilidad
- Legibilidad, nombres, complejidad, duplicación, pruebas, manejo de errores y logs.

formato de salida:
1. Veredicto en una línea: "Aprobar", "Aprobar con cambios" o "Rechazar", con el motivo principal.
2. Resumen por severidad: número de hallazgos P0, P1, P2 y P3.
3. Hallazgos, ordenados de P0 a P3. Para cada uno:
   - Severidad y título breve.
   - Ubicación: archivo y línea o función.
   - Problema: qué ocurre y en qué escenario.
   - Por qué importa: impacto concreto.
   - Propuesta: código corregido o pasos claros.
4. Puntos positivos: dos o tres cosas bien hechas que conviene mantener.
5. Pruebas que faltan, con el nombre sugerido para cada una.

reglas:
- No inventes problemas para rellenar. Si no hay P0, dilo.
- No marques como P0 o P1 cuestiones de gusto personal.
- Si algo depende de contexto que no tienes, márcalo como "a confirmar" en lugar de afirmarlo.
- Cita siempre la línea o el fragmento concreto.

Revisa ahora el código.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Revisar un pull request o un módulo y priorizar qué arreglar primero según su gravedad real.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Crear pull requests con título, descripción y checklist de CI impecables',
                'description'       => 'Genera pull requests claros y fáciles de revisar a partir de un diff: título convencional, descripción del porqué, pruebas realizadas y checklist de integración continua. Inspirado en los skills virales de creación de PR para agentes de código.',
                'prompt_content'    => <<<'EOT'
rol: Eres un desarrollador cuidadoso que sabe que un buen pull request ahorra horas de revisión. Escribes para la persona que revisará el cambio sin haber participado en él.

contexto:
- Repositorio: [NOMBRE DEL REPOSITORIO]
- Rama de origen y rama de destino: [RAMA ORIGEN] hacia [RAMA DESTINO]
- Ticket o incidencia relacionada: [ID DEL TICKET O "ninguno"]
- Convención de títulos del equipo: [POR EJEMPLO, CONVENTIONAL COMMITS: feat, fix, refactor, docs, chore]
- Pasos de CI que existen: [POR EJEMPLO: lint, tests unitarios, tests de integración, análisis estático, build]
- Diff o lista de commits: [PEGA EL DIFF O LOS MENSAJES DE COMMIT]
- Notas adicionales del autor: [CONTEXTO QUE NO SE VE EN EL CÓDIGO]

tarea: A partir del diff, prepara el pull request completo siguiendo estos pasos.

Paso 1. Entender el cambio
- Resume en dos frases qué cambia y por qué.
- Detecta si el diff mezcla cambios que no tienen relación entre sí. Si es así, propón cómo dividirlo en varios pull requests y detente.

Paso 2. Título
- Máximo 72 caracteres.
- Sigue la convención indicada, con ámbito si procede: tipo(ámbito): descripción en imperativo.
- Sin punto final y sin palabras vacías como "varios cambios" o "arreglos".

Paso 3. Descripción
Usa exactamente estas secciones:
- Qué: lista de cambios principales, agrupados por área.
- Por qué: problema que resuelve o necesidad de negocio.
- Cómo: decisiones técnicas relevantes y alternativas descartadas.
- Cómo probarlo: pasos concretos que puede seguir el revisor, con datos de ejemplo.
- Riesgos y reversión: qué podría fallar en producción y cómo deshacer el cambio.
- Capturas o ejemplos: indica dónde convendría añadirlos si hay cambios visibles.
- Cambios incompatibles: migraciones, variables de entorno nuevas, cambios de API. Si no hay, escribe "Ninguno".

Paso 4. Checklist de CI y revisión
Genera una lista de casillas con:
- Cada paso de CI del proyecto.
- Pruebas añadidas o actualizadas.
- Documentación actualizada si cambia el comportamiento público.
- Migraciones reversibles.
- Sin secretos ni datos personales en el diff.
- Sin código comentado ni trazas de depuración.

Paso 5. Sugerencias para el revisor
- Indica en qué archivos o funciones conviene centrar la revisión.
- Señala dudas abiertas que el autor quiere que el revisor valide.

formato de salida:
1. Bloque con el título final.
2. Bloque con la descripción en Markdown, lista para pegar.
3. Lista de etiquetas sugeridas (por ejemplo: bug, mejora, base de datos).
4. Nota breve si recomiendas dividir el pull request.

reglas:
- No inventes pruebas que no aparecen en el diff; si faltan, dilo en la checklist.
- Escribe en español claro y directo, sin relleno.
- Si el diff es demasiado grande para revisarlo bien (más de 400 líneas), adviértelo.

Prepara ahora el pull request.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Abrir pull requests que se revisan rápido y que dejan constancia clara de qué cambió, por qué y cómo comprobarlo.',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Autoevaluación de confianza: que la IA puntúe cuánto se fía de su respuesta',
                'description'       => 'Hace que el modelo califique la fiabilidad de cada afirmación que da, explique en qué se basa y diga qué verificaría antes de usarla. Inspirado en los skills virales de calibración y autoevaluación de confianza.',
                'prompt_content'    => <<<'EOT'
rol: Eres un analista riguroso que distingue con claridad entre lo que sabe, lo que deduce y lo que supone. Tu objetivo no es parecer seguro, sino ser útil y honesto sobre tus límites.

contexto:
- Pregunta o tarea: [ESCRIBE AQUÍ TU PREGUNTA O TAREA]
- Ámbito: [POR EJEMPLO: LEGAL, TÉCNICO, FINANCIERO, MÉDICO DIVULGATIVO, NEGOCIO]
- Uso que daré a la respuesta: [POR EJEMPLO: DECISIÓN INTERNA, PUBLICACIÓN, INFORME A CLIENTE]
- Coste de equivocarse: [BAJO / MEDIO / ALTO]
- Fuentes o datos que te aporto: [PEGA DOCUMENTOS O DATOS, O ESCRIBE "ninguno"]

tarea: Responde en tres capas.

Capa 1. Respuesta
- Da la mejor respuesta que puedas, completa y directa.
- Divide la respuesta en afirmaciones numeradas, cada una verificable por separado.

Capa 2. Autoevaluación por afirmación
Para cada afirmación numerada indica:
- Nivel de confianza de 0 a 100.
- Tipo de base: "dato aportado por el usuario", "conocimiento general estable", "conocimiento que puede haber cambiado", "deducción propia" o "suposición".
- Qué podría hacer que esté equivocada.
- Cómo verificarla: fuente concreta a consultar, prueba a realizar o persona experta a quien preguntar.

Usa esta guía de calibración:
- 90 a 100: hecho ampliamente establecido o presente en los datos aportados.
- 70 a 89: muy probable, pero depende de detalles que no he comprobado.
- 40 a 69: razonable, aunque hay alternativas plausibles.
- 0 a 39: especulativo; úsalo solo como punto de partida.

Capa 3. Valoración global
- Confianza global en la respuesta y la afirmación más débil que la arrastra.
- Lo que no sabes y que cambiaría la respuesta si lo supieras.
- Tres comprobaciones prioritarias antes de usar la respuesta, ordenadas por impacto.
- Si el coste de equivocarse es alto, indica si recomiendas consultar con un profesional.

formato de salida:
1. Respuesta con afirmaciones numeradas.
2. Tabla de autoevaluación: número, afirmación resumida, confianza, tipo de base, riesgo de error, cómo verificar.
3. Valoración global en un párrafo.
4. Lista de comprobaciones prioritarias.

reglas:
- No pongas a todo la misma puntuación; diferencia de verdad.
- No inventes fuentes, estudios, cifras ni citas. Si no recuerdas una fuente concreta, dilo.
- Si la información puede haber cambiado después de tu fecha de corte, márcalo.
- Si la pregunta está mal planteada o se basa en una premisa falsa, señálalo antes de responder.
- Prefiere decir "no lo sé" a dar una respuesta con apariencia de certeza.

Responde ahora siguiendo las tres capas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Saber qué partes de una respuesta de IA puedes usar directamente y cuáles debes comprobar antes de tomar una decisión.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Ingeniería de contexto: qué dar a la IA, qué dejar fuera y en qué orden',
                'description'       => 'Diseña el paquete de contexto óptimo para una tarea con IA: selecciona la información útil, descarta el ruido y la ordena para obtener mejores respuestas. Inspirado en los skills virales de context engineering para agentes.',
                'prompt_content'    => <<<'EOT'
rol: Eres un especialista en ingeniería de contexto para modelos de lenguaje. Sabes que la calidad de la respuesta depende menos de la redacción del prompt y más de qué información recibe el modelo, cuánta y en qué orden.

contexto:
- Tarea final que quiero que haga la IA: [DESCRIBE LA TAREA]
- Destinatario del resultado: [QUIÉN USARÁ LA RESPUESTA]
- Material disponible: [LISTA DE DOCUMENTOS, DATOS, CÓDIGO, CONVERSACIONES, NORMAS, EJEMPLOS]
- Tamaño aproximado del material: [NÚMERO DE PÁGINAS, ARCHIVOS O PALABRAS]
- Problemas que he tenido hasta ahora: [POR EJEMPLO: RESPUESTAS GENÉRICAS, INVENTA DATOS, IGNORA NORMAS, SE PIERDE]

tarea: Diseña el contexto ideal siguiendo cinco pasos.

Paso 1. Definir lo que la IA necesita saber
- Enumera las preguntas que el modelo tendría que poder responder para hacer bien la tarea.
- Para cada pregunta, indica qué parte del material la responde.

Paso 2. Clasificar el material
Clasifica cada elemento en una de estas categorías:
- Imprescindible: sin esto la tarea sale mal.
- Útil: mejora la respuesta pero no es crítico.
- Ruido: distrae, contradice o duplica.
- Peligroso: contiene datos sensibles, información desactualizada o instrucciones contradictorias.

Paso 3. Comprimir
- Para el material útil pero extenso, propón un resumen o extracto con lo esencial.
- Sustituye documentos largos por los fragmentos concretos que importan.
- Convierte normas dispersas en una lista corta de reglas numeradas.

Paso 4. Ordenar
Propón el orden de las secciones del contexto, siguiendo esta lógica:
- Primero, rol y objetivo en dos o tres frases.
- Después, reglas y restricciones que no se pueden romper.
- Luego, material de referencia, de lo más estable a lo más específico.
- A continuación, ejemplos de entrada y salida si los hay.
- Al final, la tarea concreta y el formato de salida esperado, cerca del final para que tenga más peso.

Paso 5. Detectar huecos y conflictos
- Señala información que falta y que provocaría que el modelo tenga que suponer.
- Señala instrucciones que se contradicen y propone cuál debe prevalecer.

formato de salida:
1. Tabla de clasificación: elemento, categoría, motivo, acción (incluir, resumir, excluir).
2. Plantilla final del contexto con secciones delimitadas por encabezados y huecos [ENTRE CORCHETES] para rellenar.
3. Lista de huecos de información y preguntas para mí.
4. Estimación de tamaño del contexto resultante frente al original.
5. Tres señales para saber si el contexto funciona y qué ajustar si no.

reglas:
- Menos es más: justifica cada elemento que incluyas.
- No mezcles instrucciones con material de referencia; sepáralos claramente.
- Marca con etiquetas claras dónde empieza y termina cada documento.

Empieza ahora por el paso 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Preparar el contexto de una tarea compleja con IA para que deje de dar respuestas genéricas o de ignorar información importante.',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Patrones multiagente: orquestador, trabajadores en paralelo y revisor',
                'description'       => 'Diseña un sistema de varios agentes de IA que se reparten una tarea grande: un orquestador que planifica, trabajadores que ejecutan en paralelo y un revisor que valida. Inspirado en los skills virales de subagentes y orquestación.',
                'prompt_content'    => <<<'EOT'
rol: Eres un arquitecto de sistemas de agentes de IA. Sabes cuándo compensa dividir una tarea entre varios agentes y cuándo un solo agente bien guiado es mejor.

contexto:
- Tarea grande que quiero automatizar: [DESCRIBE LA TAREA]
- Volumen y frecuencia: [POR EJEMPLO: 200 ARCHIVOS UNA VEZ, 50 TICKETS AL DÍA]
- Herramientas disponibles para los agentes: [POR EJEMPLO: LECTURA DE ARCHIVOS, TERMINAL, NAVEGADOR, BASE DE DATOS]
- Restricciones: [PRESUPUESTO, TIEMPO MÁXIMO, PERMISOS, DATOS SENSIBLES]
- Criterio de éxito: [CÓMO SÉ QUE EL RESULTADO ES CORRECTO]

tarea: Diseña el sistema en seis pasos.

Paso 1. ¿Hace falta multiagente?
- Evalúa si la tarea se beneficia de dividirse: subtareas independientes, contexto demasiado grande para un solo agente, necesidad de una revisión independiente.
- Si un solo agente basta, dilo y propón ese diseño en su lugar.

Paso 2. Orquestador
- Define su responsabilidad: descomponer la tarea, repartir trabajo, recoger resultados y decidir cuándo se ha terminado.
- Escribe sus instrucciones completas, con el formato en que debe repartir cada subtarea.
- Indica qué información conserva y qué delega para no saturar su contexto.

Paso 3. Trabajadores
- Define cuántos tipos de trabajador hay y qué hace cada uno.
- Especifica qué recibe cada trabajador (solo el contexto mínimo necesario) y qué devuelve (formato estructurado y breve).
- Indica qué subtareas pueden ejecutarse en paralelo y cuáles dependen de otras.
- Establece qué herramientas puede usar cada trabajador y cuáles tiene prohibidas.

Paso 4. Revisor
- Define un agente independiente que no ha participado en la ejecución.
- Escribe su lista de comprobaciones y los criterios para aceptar, pedir corrección o rechazar.
- Indica cuántas rondas de corrección se permiten antes de escalar a una persona.

Paso 5. Comunicación y estado
- Define el formato de los mensajes entre agentes.
- Explica cómo se registra el progreso para poder reanudar si algo falla a mitad.
- Indica cómo se evitan conflictos si dos trabajadores tocan el mismo recurso.

Paso 6. Riesgos y control
- Enumera los modos de fallo típicos: trabajo duplicado, resultados contradictorios, bucles infinitos, coste disparado, acciones irreversibles.
- Para cada uno, propone una medida de control.
- Indica en qué puntos debe intervenir una persona.

formato de salida:
1. Recomendación: un agente o varios, con justificación.
2. Diagrama en texto del flujo entre agentes.
3. Instrucciones completas del orquestador, de cada tipo de trabajador y del revisor, cada una en su bloque.
4. Esquema de los mensajes entre agentes.
5. Tabla de riesgos y controles.
6. Estimación de coste y tiempo frente a la versión con un solo agente.

reglas:
- Empieza por el diseño más simple que funcione.
- Cada agente debe tener una responsabilidad única y clara.
- Nada irreversible sin aprobación humana.

Diseña ahora el sistema.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Repartir una tarea grande (migraciones, auditorías, procesamiento masivo) entre varios agentes de IA con control de calidad.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Revisión de seguridad con OWASP Top 10 y ASVS como checklist',
                'description'       => 'Auditoría de seguridad de una aplicación web recorriendo las categorías del OWASP Top 10 y los requisitos de verificación ASVS, con hallazgos priorizados. Inspirado en los skills virales de revisión de seguridad para agentes.',
                'prompt_content'    => <<<'EOT'
rol: Eres un auditor de seguridad de aplicaciones con experiencia en OWASP. Revisas con método, documentas evidencias y priorizas por riesgo real, no por cantidad de hallazgos.

contexto:
- Aplicación: [NOMBRE Y DESCRIPCIÓN BREVE]
- Stack técnico: [LENGUAJE, FRAMEWORK, BASE DE DATOS, SERVIDOR]
- Tipo de usuarios y roles: [POR EJEMPLO: ANÓNIMO, CLIENTE, ADMINISTRADOR]
- Datos sensibles que maneja: [POR EJEMPLO: DATOS PERSONALES, PAGOS, SALUD]
- Nivel ASVS objetivo: [1, 2 O 3]
- Código, rutas o configuración a revisar: [PEGA EL MATERIAL]
- Alcance excluido: [LO QUE NO DEBES REVISAR]

tarea: Realiza la revisión en tres bloques.

Bloque 1. Recorrido OWASP Top 10
Para cada categoría, indica si aplica, qué has revisado y qué has encontrado:
- Control de acceso roto: rutas sin autorización, referencias directas a objetos, escalada de privilegios.
- Fallos criptográficos: datos sensibles sin cifrar, algoritmos débiles, gestión de claves.
- Inyección: SQL, comandos del sistema, plantillas, LDAP, cabeceras.
- Diseño inseguro: ausencia de límites, flujos de negocio abusables.
- Configuración de seguridad incorrecta: modo depuración, cabeceras ausentes, permisos por defecto.
- Componentes vulnerables o desactualizados.
- Fallos de identificación y autenticación: sesiones, contraseñas, recuperación de cuenta, fuerza bruta.
- Fallos de integridad de software y datos: deserialización, actualizaciones sin firma, pipelines.
- Fallos de registro y monitorización.
- Falsificación de peticiones del lado del servidor.

Bloque 2. Verificación ASVS
- Selecciona los capítulos ASVS más relevantes para esta aplicación según el nivel objetivo.
- Convierte cada requisito aplicable en una pregunta de sí o no y respóndela con la evidencia disponible.
- Marca como "no verificable" lo que necesite información que no tienes.

Bloque 3. Hallazgos
Para cada vulnerabilidad encontrada:
- Identificador y título.
- Categoría OWASP y requisito ASVS relacionado.
- Severidad: crítica, alta, media o baja, con una justificación de impacto y probabilidad.
- Ubicación exacta.
- Escenario de explotación descrito a alto nivel, sin código de ataque listo para usar.
- Corrección recomendada con ejemplo de código seguro.
- Cómo verificar que la corrección funciona.

formato de salida:
1. Resumen ejecutivo de cinco líneas para dirección.
2. Tabla OWASP Top 10: categoría, aplica, estado, hallazgos.
3. Checklist ASVS: requisito, pregunta, respuesta, evidencia.
4. Hallazgos detallados ordenados por severidad.
5. Plan de remediación por fases: inmediato, próximo sprint, a medio plazo.

reglas:
- No afirmes una vulnerabilidad sin señalar el código o la configuración que la provoca.
- Distingue entre vulnerabilidad confirmada y posible riesgo a confirmar.
- Esta revisión no sustituye a una prueba de penetración; indícalo en el resumen.

Comienza ahora por el bloque 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Auditar la seguridad de una aplicación web antes de un lanzamiento o de una auditoría externa.',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Generar código seguro desde el principio: inyección, control de acceso y deserialización',
                'description'       => 'Hace que la IA escriba código con las defensas incorporadas desde la primera versión, en lugar de parchear la seguridad después. Inspirado en los skills virales de secure coding para asistentes de programación.',
                'prompt_content'    => <<<'EOT'
rol: Eres un desarrollador que aplica seguridad por diseño. Cada línea que escribes asume que la entrada es hostil, que el usuario puede no tener permiso y que los datos externos pueden estar manipulados.

contexto:
- Lenguaje y framework: [LENGUAJE / FRAMEWORK Y VERSIÓN]
- Funcionalidad que hay que programar: [DESCRIPCIÓN]
- Origen de los datos de entrada: [FORMULARIO, API, ARCHIVO SUBIDO, COLA DE MENSAJES, TERCERO]
- Roles de usuario y quién puede hacer qué: [MATRIZ DE PERMISOS]
- Almacenamiento y servicios implicados: [BASE DE DATOS, SISTEMA DE ARCHIVOS, SERVICIOS EXTERNOS]
- Código existente relacionado: [PEGA FRAGMENTOS SI LOS HAY]

tarea: Antes de escribir el código, haz un análisis breve de amenazas. Después, escribe el código aplicando las defensas. Por último, explica qué protege cada defensa.

Parte 1. Análisis de amenazas
- Enumera los puntos de entrada de datos.
- Para cada uno, indica qué ataques son posibles en esta funcionalidad.
- Indica qué recursos deben protegerse y de quién.

Parte 2. Código con defensas obligatorias
Aplica, cuando corresponda, estas defensas:
Inyección
- Consultas parametrizadas o el ORM sin concatenar cadenas con datos del usuario.
- Nunca construyas comandos del sistema con entradas externas; si es inevitable, usa listas de argumentos y listas blancas.
- Escapa la salida según el contexto: HTML, atributo, JavaScript, URL.
Control de acceso
- Comprueba la autorización en el servidor en cada operación, no solo en la interfaz.
- Verifica que el recurso pertenece al usuario o que su rol lo permite antes de leerlo o modificarlo.
- Deniega por defecto.
Deserialización y datos externos
- No deserialices objetos nativos de fuentes no confiables; usa formatos de datos simples como JSON con validación de esquema.
- Valida tipo, longitud, formato y rango de cada campo con una lista blanca.
Además
- Mensajes de error genéricos para el usuario y detalle solo en los logs, sin datos sensibles.
- Límites de tamaño y de frecuencia en operaciones costosas.
- Secretos fuera del código, en variables de entorno o gestor de secretos.

Parte 3. Pruebas de seguridad
- Escribe pruebas que intenten: inyectar caracteres especiales, acceder a recursos de otro usuario, enviar tipos inesperados y superar límites.

formato de salida:
1. Tabla de amenazas: punto de entrada, ataque posible, defensa aplicada.
2. Código completo, con comentarios breves solo donde hay una defensa de seguridad.
3. Pruebas de seguridad.
4. Lista de comprobación final marcada: inyección, control de acceso, validación, deserialización, errores, secretos, límites.
5. Riesgos residuales que el código no puede cubrir por sí solo (configuración del servidor, cabeceras, WAF).

reglas:
- Si una petición mía es insegura por diseño, adviértelo y propón una alternativa.
- Usa las funciones de seguridad propias del framework en lugar de reinventarlas.
- No uses funciones obsoletas ni algoritmos criptográficos débiles.

Empieza por el análisis de amenazas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Pedir a la IA código para formularios, APIs o subidas de archivos que nazca protegido frente a los ataques más comunes.',
                'vote_score'        => 64,
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
