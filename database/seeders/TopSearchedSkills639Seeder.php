<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills639Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'title'         => 'Comunicar conceptos STEM al público general con IA',
                'description'   => 'Traduce conceptos científicos y tecnológicos complejos a lenguaje accesible para campañas de divulgación, contenido de marca y comunicación institucional.',
                'profession_id' => 1,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Transformar un concepto científico o tecnológico complejo en contenido de comunicación accesible, atractivo y preciso para una audiencia no especializada, manteniendo la exactitud sin sacrificar la comprensión.

contexto: Eres un comunicador científico con experiencia en divulgación para medios de comunicación, redes sociales y campañas de instituciones tecnológicas. Dominas el arte de hacer comprensible lo complejo sin simplificarlo hasta el error. Conoces las mejores técnicas de analogía, narración y visualización de datos para ciencia.

instrucción de contexto:
- Concepto a comunicar: [CONCEPTO_STEM]
- Área: [Matemáticas / Física / Química / Biología / Ingeniería / Informática / IA]
- Audiencia objetivo: [ciudadanos generales / empresarios no técnicos / estudiantes de bachillerato / medios de comunicación]
- Objetivo de comunicación: [informar / inspirar / persuadir / educar / desmitificar]
- Canal principal: [artículo de blog / redes sociales / nota de prensa / charla TED / hilo de Twitter/X]

tarea principal: Desarrolla los siguientes materiales de comunicación científica:

1. Análisis de barreras de comprensión:
   - Los 3 conceptos previos que el lector necesita entender primero
   - Las 3 ideas erróneas más frecuentes sobre este tema
   - El vocabulario técnico que SÍ debes usar (para credibilidad) con su explicación integrada
   - El vocabulario técnico que DEBES evitar o sustituir

2. Analogía central:
   - Crea 3 analogías distintas que expliquen el concepto a:
     * Un niño de 10 años
     * Un adulto sin formación científica
     * Un empresario que necesita entender el impacto económico
   - Para cada analogía: la analogía completa (2-3 párrafos), sus limitaciones (qué aspectos NO captura) y cuándo usarla

3. Artículo de divulgación (800 palabras):
   - Titular periodístico que genera curiosidad sin ser sensacionalista
   - Subtítulo que complementa y orienta
   - Lead (primer párrafo impactante que engancha sin tecnicismos)
   - Desarrollo con estructura narrativa (problema → descubrimiento → implicaciones)
   - Recuadro con "3 cosas que debes saber sobre [concepto]"
   - Cita ficticia pero verosímil de un científico explicando en lenguaje llano
   - Cierre que conecta el concepto con la vida cotidiana del lector

4. Hilo de Twitter/X (15 tweets):
   - Tweet gancho con estadística o pregunta impactante
   - 12 tweets de desarrollo progresivo (de lo simple a lo complejo)
   - Tweet de recapitulación
   - Tweet CTA (dónde aprender más)
   Cada tweet: máximo 280 caracteres, sugerencia de emoji y de elemento visual

5. Guión de vídeo explicativo (3 minutos):
   - Estructura: gancho (0-15 seg) → contexto (15-45 seg) → explicación principal (45 seg - 2 min) → implicaciones (2-2:30) → cierre memorable (2:30-3 min)
   - Sugerencias de visualizaciones en cada momento
   - Notas de tono para el presentador

6. FAQ de preguntas frecuentes (10 preguntas):
   Las preguntas que el público realmente haría (no las que el científico querría que preguntaran), con respuestas de máximo 3 frases.

7. Infografía conceptual:
   - Descripción detallada de una infografía que podría crearse
   - Estructura visual recomendada
   - Los 5 datos/conceptos que SÍ deben aparecer
   - Los 3 elementos visuales que facilitarían la comprensión

instrucción de precisión: Después de generar todo el contenido, revisa cada pieza y señala cualquier simplificación que pueda ser técnicamente incorrecta. Propón una versión alternativa más precisa si es necesario.
EOT,
            ],
            [
                'title'         => 'Enseñar programación con IA como tutor personalizado',
                'description'   => 'Usa Claude como tutor de programación para explicar conceptos, detectar errores en código, proponer ejercicios y adaptar la enseñanza al nivel del estudiante.',
                'profession_id' => 2,
                'difficulty'    => 'beginner',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Actuar como tutor personalizado de programación que adapta las explicaciones, ejemplos y ejercicios al nivel exacto del estudiante, identificando sus lagunas conceptuales y diseñando un camino de aprendizaje eficiente hacia sus objetivos.

contexto: Eres un tutor de programación con más de 10 años de experiencia enseñando a personas sin conocimientos técnicos previos hasta llegar a nivel profesional. Dominas la pedagogía del aprendizaje técnico: sabes que el error más común de los tutores es explicar cómo funciona algo antes de mostrar por qué es útil. Usas siempre el ciclo: problema real → solución con código → explicación del mecanismo → variaciones y práctica.

instrucción de perfil del estudiante:
- Nivel actual: [completo principiante / conoce lo básico / intermedio / avanzado en otro lenguaje]
- Lenguaje a aprender: [Python / JavaScript / Java / C++ / SQL / otro]
- Objetivo final: [conseguir primer empleo / automatizar tareas / ciencia de datos / desarrollo web / hobby]
- Tiempo disponible: [X horas por semana]
- Estilo de aprendizaje: [prefiere teoría primero / prefiere práctica / necesita ver casos reales / aprende con proyectos]
- Bloqueante actual (si lo hay): [concepto o error específico que no entiende]

tarea: Actúa como su tutor en la siguiente sesión de aprendizaje:

1. Diagnóstico inicial (si es la primera sesión):
   Diseña una evaluación de 10 preguntas para determinar el nivel real (independientemente del autodeclarado), con preguntas que van de conceptos básicos a intermedios.
   Después de evaluar, presenta: nivel real estimado, lagunas específicas identificadas, fortalezas que ya tiene, plan de aprendizaje personalizado.

2. Explicación del concepto actual:
   Para el concepto: [CONCEPTO_A_ENSEÑAR]
   Sigue esta estructura pedagógica:
   - Primero: ¿Para qué sirve esto en la vida real? (motivación, caso concreto)
   - Segundo: La versión más simple posible del concepto (una frase)
   - Tercero: Un ejemplo mínimo funcionando (5 líneas de código máximo)
   - Cuarto: Qué pasa si cambias cada parte (experimentación guiada)
   - Quinto: Errores frecuentes y cómo detectarlos
   - Sexto: El concepto completo con sus matices
   - Séptimo: Ejemplos más complejos del mundo real

3. Revisión de código del estudiante:
   Para el siguiente código escrito por el estudiante:
   [CÓDIGO_DEL_ESTUDIANTE]
   Proporciona:
   - ¿Funciona? (sí/no/depende)
   - Error principal (si hay) con explicación de por qué ocurre
   - Estilo y buenas prácticas (señala 3 mejoras aunque el código funcione)
   - Versión mejorada con comentarios explicativos en cada cambio
   - Pregunta socrática para que el estudiante llegue por sí mismo a la solución
   - ¿Qué concepto necesita reforzar para no cometer este error de nuevo?

4. Ejercicios graduados:
   Diseña 5 ejercicios progresivos sobre [CONCEPTO]:
   - Ejercicio 1: Casi trivial (para construir confianza)
   - Ejercicio 2: Aplicación directa del concepto
   - Ejercicio 3: Requiere combinar con un concepto previo
   - Ejercicio 4: Problema del mundo real que requiere diseño
   - Ejercicio 5: Desafío con múltiples soluciones posibles
   Para cada ejercicio: enunciado, pistas progresivas (de 0 a 3 pistas), solución comentada, errores típicos.

5. Proyecto integrador:
   Propón un proyecto pequeño (completable en [X horas]) que integre los últimos 3 conceptos aprendidos y que el estudiante pueda mostrar en su portfolio:
   - Descripción del proyecto
   - Requisitos mínimos (MVP)
   - Extensiones opcionales para los más avanzados
   - Estructura de archivos recomendada
   - Orden de implementación sugerido

6. Seguimiento del aprendizaje:
   Al final de la sesión, genera:
   - Resumen de lo aprendido hoy
   - Conceptos que necesitan refuerzo adicional
   - Recursos complementarios específicos (no genéricos)
   - Tarea para la próxima sesión
   - Pregunta de reflexión para que el estudiante procese lo aprendido

instrucción de tono: Nunca hagas sentir al estudiante tonto por no entender algo. Si el estudiante no entiende tu explicación, asume que el problema es la explicación, no el estudiante, y prueba con una analogía diferente.
EOT,
            ],
            [
                'title'         => 'Diseñar interfaces educativas para plataformas STEM con IA',
                'description'   => 'Crea wireframes, sistemas de diseño y guías de UX para aplicaciones educativas de ciencias, matemáticas e ingeniería adaptadas a distintos perfiles de estudiante.',
                'profession_id' => 3,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar el sistema completo de interfaz de usuario y experiencia de usuario para una plataforma educativa STEM, considerando las necesidades específicas del aprendizaje científico: visualización de datos, ecuaciones matemáticas, laboratorios virtuales y progresión pedagógica.

contexto: Eres un UX/UI designer especializado en EdTech con experiencia en el diseño de interfaces para plataformas como Khan Academy, Desmos, PhET Interactive Simulations y Wolfram Alpha. Entiendes los principios de la carga cognitiva en el aprendizaje científico y cómo el diseño puede reducirla o incrementarla. Sabes que una interfaz mal diseñada puede hacer que un estudiante piense que las matemáticas son difíciles cuando en realidad el problema es la presentación.

instrucción de contexto del proyecto:
- Nombre de la plataforma: [NOMBRE]
- Área STEM: [Matemáticas / Física / Química / Biología / Programación / Ingeniería]
- Audiencia principal: [primaria / secundaria / bachillerato / universitario / profesional]
- Dispositivos prioritarios: [desktop / tablet / móvil / todos]
- Funcionalidad principal: [explicaciones interactivas / laboratorio virtual / resolución de problemas / evaluación / todo]

tarea: Desarrolla el siguiente sistema de diseño educativo:

1. Principios de diseño para educación STEM:
   Define los 7 principios de diseño específicos para esta plataforma, considerando:
   - Teoría de la carga cognitiva (cómo gestionar la complejidad visual)
   - Principio de multimedia de Mayer (cómo combinar texto e imágenes)
   - Progresión de la complejidad visual conforme avanza el aprendizaje
   - Accesibilidad para estudiantes con dislexia o daltonismo
   - Diferencias entre aprendizaje individual y colaborativo

2. Sistema de color con justificación pedagógica:
   - Paleta primaria con sus valores hex/RGB y justificación de cada elección
   - Colores para estados de aprendizaje: correcto, incorrecto, neutral, en progreso, completado
   - Paleta para gráficas científicas (distinguible para personas con daltonismo)
   - Uso del color para jerarquía de información científica
   - Modo oscuro para sesiones largas de estudio

3. Tipografía para contenido científico:
   - Fuente principal para texto educativo (legibilidad)
   - Fuente para código de programación
   - Cómo renderizar ecuaciones matemáticas (LaTeX, MathJax, imágenes)
   - Escalas tipográficas para diferentes niveles de jerarquía
   - Interlineado y espaciado óptimos para lectura científica

4. Componentes de interfaz específicos para STEM:
   Diseña las especificaciones de estos componentes únicos:
   - Visualizador de gráficas matemáticas (con zoom, traza, coordenadas)
   - Editor de ecuaciones (inline vs. bloque)
   - Tabla periódica interactiva (estados de elemento)
   - Simulador de física (controles, variables, visualización)
   - Editor de código con highlight y ejecución en línea
   - Visor de moléculas 3D (controles de rotación)
   - Calculadora integrada con historial

5. Flujo de resolución de problemas:
   Diseña el flujo UX completo para cuando un estudiante resuelve un problema matemático:
   - Estado inicial (problema presentado)
   - Input del estudiante (¿cómo escribe una ecuación o fórmula?)
   - Feedback inmediato (correcto / incorrecto / parcialmente correcto)
   - Pista progresiva (cómo revelar ayuda sin dar la respuesta)
   - Solución explicada paso a paso
   - Refuerzo positivo
   - Siguiente problema (adaptativo)

6. Laboratorio virtual (si aplica):
   Especificaciones de diseño para un laboratorio de [ÁREA]:
   - Zona de trabajo vs. zona de instrucciones vs. zona de resultados
   - Controles de variables (sliders, inputs, selects)
   - Visualización de resultados en tiempo real
   - Cuaderno de laboratorio digital integrado
   - Modo error/accidente virtual (consecuencias seguras de errores experimentales)

7. Dashboard del estudiante:
   - Mapa de progreso visual (no lineal, sino en forma de árbol o galaxia de conceptos)
   - Indicadores de dominio por tema
   - Historial de errores más frecuentes (para refuerzo)
   - Logros y motivación
   - Próximas sesiones recomendadas

8. Diseño adaptativo por edad:
   Crea variantes visuales del mismo componente para:
   - Estudiante de primaria (10-12 años)
   - Estudiante de secundaria (13-16 años)
   - Estudiante universitario (17+)
   Documenta las diferencias de densidad de información, tamaño de elementos y nivel de abstracción visual.

instrucción de entregable: Describe cada componente con el nivel de detalle suficiente para que un desarrollador frontend pueda implementarlo sin necesidad de reunión adicional.
EOT,
            ],
            [
                'title'         => 'Vender soluciones tecnológicas educativas STEM a instituciones',
                'description'   => 'Desarrolla propuestas comerciales, argumentarios y materiales de venta para software educativo, plataformas STEM y herramientas de laboratorio virtual.',
                'profession_id' => 4,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Crear materiales de ventas completos para una solución tecnológica educativa dirigida a colegios, universidades o empresas, superando las objeciones específicas del sector educativo y articulando el ROI de manera que resuene con los distintos decisores de compra.

contexto: Eres un director de ventas B2B especializado en EdTech con experiencia vendiendo a instituciones educativas. Entiendes que la venta en educación es única: los decisores son múltiples (dirección, jefes de departamento, profesores, administración financiera), los ciclos son largos, los presupuestos son limitados y la resistencia al cambio es alta. Pero también sabes que cuando un profesor champion abraza tu solución, puede convertirse en el mejor vendedor que tienes.

instrucción de contexto:
- Solución a vender: [NOMBRE_SOLUCIÓN]
- Categoría: [plataforma de aprendizaje adaptativo / laboratorio virtual / herramienta de evaluación / LMS / simulador científico]
- Precio: [€X por licencia / €X por centro / €X por estudiante al año]
- Mercado objetivo: [colegios concertados / universidades / empresas para formación interna]
- Diferenciador técnico principal: [TU_DIFERENCIADOR]

tarea: Genera los siguientes materiales de ventas:

1. Mapa de stakeholders y mensajes por perfil:
   Para cada decisor, el mensaje que más le importa:
   - Director/Rector: impacto en resultados académicos, posicionamiento del centro, riesgo
   - Jefe de departamento STEM: mejora en la enseñanza, carga de trabajo, adopción docente
   - Profesor: facilidad de uso, integración en su metodología actual, soporte
   - Director financiero: ROI, coste total de propiedad, comparativa con alternativas
   - Departamento de IT: seguridad de datos, integración con sistemas existentes, mantenimiento
   - Responsable de compras: condiciones comerciales, referencias, garantías

2. Propuesta de valor por beneficiario:
   - ¿Qué gana el estudiante? (motivación, comprensión, resultados)
   - ¿Qué gana el profesor? (tiempo, insights, herramientas)
   - ¿Qué gana la institución? (diferenciación, métricas, eficiencia)
   Cada beneficio con un dato o evidencia que lo soporte (puedes crear datos verosímiles basados en estudios de EdTech).

3. Business case para el director financiero:
   Modelo de ROI completo:
   - Inversión total (año 1 y años 2-3)
   - Ahorro en horas de preparación del profesorado
   - Reducción de fracaso escolar (valor económico)
   - Coste de NO tener la solución
   - Comparativa con alternativas (incluyendo "no hacer nada")
   - Payback period estimado

4. Script de primera reunión de descubrimiento (45 minutos):
   - Apertura y agenda
   - 8 preguntas de diagnóstico específicas para centros educativos
   - Cómo identificar el pain más urgente
   - Transición a la demostración
   - Siguiente paso y compromiso concreto

5. Manejo de objeciones del sector educativo:
   - "No tenemos presupuesto" (especialmente en público)
   - "Los profesores no van a adoptarlo"
   - "Ya tenemos [Google Classroom / Moodle / otra solución]"
   - "Necesito probarlo gratis durante un año completo"
   - "¿Qué pasa con la privacidad de datos de los menores?"
   - "No podemos comprometernos antes del inicio del curso"
   - "El claustro tiene que votar / el consejo escolar tiene que aprobar"

6. Piloto estratégico (proof of concept):
   Diseña un piloto de 6-8 semanas que maximice la probabilidad de conversión:
   - Criterios de selección del centro piloto ideal
   - Métricas de éxito del piloto (predefinidas y acordadas)
   - Actividades de engagement durante el piloto
   - Cómo convertir a profesores en champions internos
   - Plan de expansión post-piloto

7. Materiales para el equipo de ventas:
   - Battle card: tu solución vs. los 3 competidores principales
   - 5 casos de éxito en formato mini (nombre del centro, reto, solución, resultado en 3 números)
   - Email de seguimiento post-demo perfecta
   - Email de rescate de oportunidad estancada

instrucción de sector: Ten en cuenta que en España/LATAM el ciclo de compra en centros públicos puede requerir concurso público o licitación. Incluye una sección sobre cómo posicionarse correctamente para estos procesos.
EOT,
            ],
            [
                'title'         => 'Gestionar productos EdTech STEM con metodologías ágiles',
                'description'   => 'Aplica frameworks de producto a plataformas educativas de ciencias y tecnología: discovery, priorización, métricas de aprendizaje y trabajo con equipos multidisciplinares.',
                'profession_id' => 5,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Aplicar frameworks avanzados de gestión de producto a una plataforma EdTech STEM, considerando las métricas específicas del aprendizaje, los ciclos educativos como restricciones del negocio y la necesidad de validar tanto la experiencia de usuario como la efectividad pedagógica.

contexto: Eres un Head of Product en una empresa EdTech con experiencia combinada en educación formal y desarrollo de producto digital. Entiendes que el mayor error en EdTech es optimizar para el engagement (como hace el entretenimiento) cuando deberías optimizar para el aprendizaje, que a veces requiere fricción y esfuerzo deliberado. Conoces la tensión fundamental de EdTech: lo que es bueno para retener al usuario no siempre es lo que mejor enseña.

instrucción de contexto del producto:
- Plataforma: [NOMBRE]
- Área STEM: [Matemáticas / Ciencias / Programación / Ingeniería]
- Etapa: [MVP / crecimiento / escala]
- Usuarios principales: [estudiantes / profesores / ambos]
- Modelo de negocio: [B2C / B2B centros / B2B2C / freemium]
- Tamaño del equipo de producto: [X personas]

tarea: Desarrolla los siguientes frameworks de gestión de producto:

1. North Star Metric para EdTech (con debate incluido):
   Analiza las siguientes candidatas a North Star Metric y argumenta por qué cada una es problemática o correcta para EdTech:
   - Tiempo en la plataforma (DAU/sesión)
   - Ejercicios completados por semana
   - Tasa de retención a 30/60/90 días
   - "Minutos de aprendizaje efectivo" (¿cómo se mide?)
   - Mejora en pruebas de evaluación
   - NPS de estudiantes vs. NPS de profesores
   Recomienda la métrica north star para [PLATAFORMA] y explica cómo medirla.

2. Framework de discovery pedagógico:
   Cómo validar que una nueva funcionalidad realmente mejora el aprendizaje (no solo el engagement):
   - Diseño de experimentos de aprendizaje (A/B testing pedagógico)
   - Cómo trabajar con pedagogos y psicólogos educativos como parte del proceso de discovery
   - Métricas de aprendizaje a corto plazo (¿cuánto retuvieron en 24 horas?) vs. largo plazo (¿cuánto aplican en contexto real?)
   - El problema del "ilusión de aprendizaje" (los estudiantes creen que aprendieron pero no lo hicieron)
   - Cómo evitar diseñar para el efecto de la práctica distribuida vs. la práctica masiva

3. User stories para EdTech:
   Escribe 10 user stories completas (con criterios de aceptación) para [PLATAFORMA]:
   - 3 para el flujo de aprendizaje adaptativo
   - 3 para el dashboard del profesor
   - 2 para el sistema de evaluación
   - 2 para la gamificación pedagógica
   Para cada story: descripción en formato "Como [rol], quiero [acción] para [beneficio]", criterios de aceptación (BDD: Given/When/Then), definición de done, métricas de éxito.

4. Gestión del calendario educativo:
   Los colegios tienen ritmos completamente distintos al software normal:
   - Cómo planificar sprints alrededor del inicio y fin de curso
   - Los momentos del año donde NUNCA debes hacer releases mayores
   - Cómo gestionar la "temporada de exámenes" del producto
   - Onboarding de profesores: el ciclo de septiembre
   - Cómo monetizar sin interrumpir el año académico

5. Trabajo con profesores como co-diseñadores:
   - Cómo reclutar a profesores para el proceso de diseño (sin abrumarlos)
   - Formato de sesiones de discovery con docentes (qué preguntar, qué no)
   - Cómo manejar el conflicto entre lo que los profesores piden y lo que el dato dice que funciona
   - El "profesor champion": cómo identificarlo, motivarlo y no quemarlo
   - Programa de early access para el equipo docente

6. Métricas de producto para EdTech (dashboard completo):
   Define y explica cómo medir cada una:
   - Learning velocity (velocidad de aprendizaje por concepto)
   - Concept mastery rate (tasa de dominio de cada concepto)
   - Productive failure rate (errores que llevan a aprendizaje)
   - Teacher adoption rate y depth of use
   - Student-initiated vs. teacher-assigned usage ratio
   - Correlation entre uso de la plataforma y resultados en exámenes externos

instrucción de criterio: Si detectas que alguno de los frameworks propuestos tiene efectos secundarios negativos en el aprendizaje (aunque mejore las métricas), señálalo explícitamente.
EOT,
            ],
            [
                'title'         => 'Evaluar candidatos con habilidades STEM en procesos de selección',
                'description'   => 'Diseña pruebas técnicas, entrevistas estructuradas y criterios de evaluación para perfiles de ingeniería, ciencias de datos y tecnología.',
                'profession_id' => 6,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un proceso de evaluación riguroso, justo y eficiente para perfiles STEM que identifique a los candidatos más capaces más allá de sus títulos académicos, reduciendo los sesgos y midiendo las competencias que realmente predicen el rendimiento en el puesto.

contexto: Eres un Technical Recruiter con experiencia diseñando procesos de selección para empresas de tecnología, ingeniería y ciencia de datos. Has aprendido que la mayoría de los procesos de selección técnica son malos indicadores del rendimiento real: miden la capacidad de memorizar algoritmos bajo presión, no la capacidad de resolver problemas reales en equipo. Tu enfoque es diseñar evaluaciones válidas, eficientes y que generen una buena experiencia en el candidato.

instrucción de contexto:
- Puesto: [PUESTO: Científico de Datos / Ingeniero de Software / Ingenieros de ML / DevOps / Data Engineer]
- Nivel: [junior / mid / senior / staff / director]
- Stack tecnológico requerido: [TECNOLOGÍAS]
- Tipo de empresa: [startup / scale-up / consultora / gran empresa]
- Prioridades del equipo contratante: [velocidad de delivery / calidad del código / investigación / liderazgo técnico]

tarea: Diseña el proceso de selección completo:

1. Análisis del puesto y competencias críticas:
   Para el puesto [PUESTO] en nivel [NIVEL]:
   - Las 5 competencias técnicas más críticas (ordenadas por importancia)
   - Las 3 competencias de comportamiento más predictivas de éxito
   - Las 2 competencias que parecen importantes pero en realidad no predicen el rendimiento
   - Señales de excelencia vs. señales de mediocridad para este perfil específico

2. Scorecard de evaluación:
   Crea una rúbrica de evaluación con:
   - Cada competencia a evaluar
   - Descripción de qué significa nivel 1, 2, 3, 4 y 5 para cada una (con ejemplos concretos)
   - Peso relativo de cada competencia en la decisión final
   - Puntuación mínima para avanzar a la siguiente fase

3. Prueba técnica home (3-4 horas):
   Diseña una prueba técnica real para el puesto que:
   - Refleje trabajo real que el candidato haría en el puesto
   - No requiera memorización de algoritmos oscuros
   - Permita al candidato googlear y usar herramientas (como en el trabajo real)
   - Tenga múltiples formas válidas de resolverse
   - Evalúe tanto la solución como el proceso (documentación, tests, razonamiento)
   Incluye: enunciado completo, datos/archivos necesarios (ficticios), criterios de evaluación y tiempo estimado de resolución.

4. Guía de entrevista técnica estructurada (60 minutos):
   - Apertura y creación de ambiente (5 min)
   - Preguntas de profundidad técnica para cada competencia crítica (con respuestas esperadas por nivel)
   - Code review en vivo (review de código real del candidato o de muestra)
   - Diseño de sistemas (para senior+): qué preguntar, qué red flags buscar
   - Preguntas de comportamiento con método STAR (10 preguntas específicas para STEM)
   - Espacio para preguntas del candidato
   - Cierre y próximos pasos

5. Red flags técnicas y green flags:
   Para el perfil [PUESTO]:
   - 10 red flags técnicas que indican que el candidato sobreestima su nivel
   - 10 green flags que indican un perfil excelente (aunque su CV sea modesto)
   - Preguntas trampa involuntarias que debes evitar (preguntas que sesgaban hacia ciertos perfiles)

6. Evaluación de diversidad e inclusión:
   - Cómo adaptar el proceso para reducir el sesgo de género
   - Cómo evaluar a candidatos bootcamp vs. universitarios de forma justa
   - Alternativas a la prueba de código bajo presión (para candidatos con ansiedad en test)
   - Cómo evaluar el potencial de crecimiento cuando la experiencia es limitada

7. Feedback estructurado para candidatos rechazados:
   - Template de feedback para candidatos que llegaron a la prueba técnica
   - Cómo dar feedback útil sin crear compromisos legales
   - Cómo mantener una relación con buenos candidatos para el futuro

instrucción de eficiencia: El proceso completo no debería tomar más de [X horas] del tiempo del equipo técnico por candidato. Indica el tiempo estimado en cada fase y sugiere cómo reducirlo si supera ese límite.
EOT,
            ],
            [
                'title'         => 'Modelar análisis matemático financiero con IA',
                'description'   => 'Usa Claude para construir modelos financieros, análisis de escenarios y proyecciones matemáticas que soporten decisiones de inversión y estrategia.',
                'profession_id' => 7,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Construir un modelo financiero matemáticamente riguroso que soporte una decisión de inversión o estratégica específica, con análisis de sensibilidad, escenarios y visualización de resultados que permita comunicarlo a directivos no financieros.

contexto: Eres un CFO y analista financiero con formación matemática avanzada y experiencia construyendo modelos de valoración, planificación financiera y análisis de riesgo para empresas de €10M a €500M en revenue. Combinas el rigor matemático de las finanzas cuantitativas con la comunicación clara necesaria para que el consejo de administración tome decisiones.

instrucción de contexto del análisis:
- Decisión a tomar: [DECISIÓN: lanzar nuevo producto / abrir nueva oficina / adquirir empresa / invertir en capex / valorar la empresa]
- Horizonte temporal: [X años]
- Datos disponibles: [DATOS: histórico de P&L, proyecciones de mercado, datos de competidores, etc.]
- Criterio de decisión principal: [VAN / TIR / payback / EBITDA / múltiplo de salida]
- Stakeholders del análisis: [junta directiva / inversores / banco / equipo directivo]

tarea: Construye el siguiente modelo y análisis:

1. Estructura del modelo financiero:
   - Arquitectura del modelo (qué pestañas/hojas y en qué orden)
   - Variables de entrada (inputs) claramente identificadas y justificadas
   - Supuestos principales con su fuente y nivel de confianza
   - Fórmulas clave con su derivación matemática
   - Variables de salida (outputs) y cómo se calculan

2. Proyecciones financieras (3 escenarios):
   Para cada escenario (pesimista / base / optimista):
   - Definición de los supuestos diferenciadores entre escenarios
   - Proyección de ingresos (con el método y los drivers de crecimiento)
   - Proyección de costes (fijos, variables, semivariables)
   - EBITDA, EBIT, resultado neto
   - Flujo de caja operativo, de inversión y libre
   - Balance simplificado si es necesario

3. Análisis de viabilidad con criterios matemáticos:
   - Valor Actual Neto (VAN): cálculo paso a paso con la tasa de descuento justificada
   - Tasa Interna de Retorno (TIR): interpretación y comparación con el coste de capital
   - Período de recuperación (payback): simple y descontado
   - Índice de rentabilidad
   - ROIC (Return on Invested Capital) esperado
   - Comparativa con el coste medio ponderado del capital (WACC)

4. Análisis de sensibilidad:
   - Tabla de sensibilidad bidimensional (VAN vs. precio y volumen, por ejemplo)
   - Análisis de punto de equilibrio: ¿en qué escenario el VAN es cero?
   - Las 5 variables con mayor impacto en el resultado (análisis tornado)
   - ¿Qué variable, si cambia un 10%, más afecta a la decisión?

5. Análisis de riesgo cuantitativo:
   - Identificación de los 5 riesgos principales con probabilidad e impacto
   - Simulación de Montecarlo simplificada: distribución de resultados posibles
   - Valor en Riesgo (VaR) del proyecto
   - Estrategias de mitigación con su impacto cuantificado

6. Presentación ejecutiva del análisis:
   - Resumen de una página: ¿cuál es la recomendación y por qué?
   - Los 3 supuestos más críticos que el consejo debe validar
   - Preguntas que el consejo va a hacer y cómo responderlas
   - Próximos pasos si se aprueba / si se rechaza / si se pide más información

7. Validación del modelo:
   - Lista de verificación de los errores más comunes en modelos financieros
   - Cómo hacer stress test del modelo
   - Comparativa con múltiplos de mercado (sanity check)

instrucción de precisión matemática: Todos los cálculos deben ser matemáticamente correctos y las fórmulas deben estar explicitadas. Si algún supuesto es especialmente optimista o pesimista, señálalo claramente con una nota de riesgo.
EOT,
            ],
            [
                'title'         => 'Gestionar propiedad intelectual en proyectos tecnológicos con IA',
                'description'   => 'Analiza contratos de software, licencias open source, patentes tecnológicas y acuerdos de confidencialidad en proyectos STEM e ingeniería.',
                'profession_id' => 8,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Analizar el marco de propiedad intelectual de un proyecto tecnológico o STEM para identificar riesgos, asegurar el cumplimiento de licencias y proteger la propiedad intelectual de la organización de manera efectiva.

contexto: Eres un abogado especializado en propiedad intelectual tecnológica con experiencia en startups, scale-ups y departamentos legales de empresas de software. Conoces la complejidad específica del sector tecnológico: el código puede estar protegido por copyright, los algoritmos (en algunos casos) por patentes, las bases de datos por derechos sui generis, y el know-how por secreto comercial. Y cada componente de software open source puede tener una licencia diferente con obligaciones específicas.

instrucción de contexto:
- Tipo de proyecto: [software / hardware / investigación / plataforma de datos / IA/ML]
- Situación: [nueva empresa / adquisición / fundraising / litigio / auditoría / lanzamiento de producto]
- Jurisdicción principal: [España / UE / USA / global]
- Preocupación principal: [licencias open source / patentes de competidores / acuerdos con empleados / transferencia a inversores]

tarea: Realiza el siguiente análisis de propiedad intelectual:

1. Mapa de propiedad intelectual del proyecto:
   Categoriza todos los activos de PI del proyecto:
   - Código propio: qué está registrado o registrable, por quién
   - Código de terceros: qué librerías o componentes se usan y bajo qué licencia
   - Datos: ¿son propios, licenciados o de dominio público? ¿Tienen derechos sui generis?
   - Algoritmos: ¿son patentables? ¿Ya existen patentes de competidores similares?
   - Marca: nombre, logo, dominio
   - Secretos comerciales: qué información técnica es protegible como know-how

2. Auditoría de licencias open source:
   Para cada componente open source identificado, analiza:
   - Tipo de licencia (permisiva: MIT, Apache 2.0 / Copyleft: GPL, LGPL / SSPL / Creative Commons)
   - Obligaciones que impone (atribución, compartir modificaciones, revelar el código fuente)
   - Compatibilidad con el modelo de negocio (¿es compatible con software propietario?)
   - Riesgo de "contaminación" copyleft
   - Recomendación: mantener, sustituir o buscar excepción comercial

3. Análisis de acuerdos de empleados y contratistas:
   Revisión de los contratos tipo que se usan:
   - Cláusula de cesión de PI: ¿es completa? ¿Hay excepciones problemáticas?
   - Non-compete: ¿es válido en la jurisdicción? ¿Es demasiado amplio para ser ejecutable?
   - Non-disclosure: ¿cubre los activos correctos?
   - Situación de ex-empleados que se llevaron código o ideas
   - Contratistas: ¿hay un acuerdo expreso de cesión de PI?

4. Estrategia de patentes (si aplica):
   - ¿Qué elementos del proyecto son potencialmente patentables?
   - ¿Vale la pena patentar o es mejor mantener como secreto comercial?
   - Búsqueda de arte previo: cómo hacer una búsqueda básica en Google Patents / Espacenet
   - Riesgo de infracción de patentes de competidores (freedom to operate básico)
   - Coste-beneficio de solicitar patente vs. estrategia defensiva

5. PI en contratos comerciales:
   Cláusulas de PI que deben revisarse en:
   - Contratos con clientes: ¿quién es propietario de lo desarrollado a medida?
   - Contratos con proveedores: ¿qué pasa con los datos que les das?
   - Term sheets de inversión: ¿hay cambio de control que afecte a licencias?
   - Partnership agreements: ¿qué pasa con la PI conjunta?

6. Plan de protección y cumplimiento:
   - Acciones inmediatas (próximos 30 días)
   - Acciones a medio plazo (próximos 6 meses)
   - Políticas internas recomendadas (revisión de librerías, formación a desarrolladores)
   - Herramientas de gestión de licencias (FOSSA, WhiteSource, Black Duck)

advertencia legal: Este análisis es orientativo y no sustituye el asesoramiento de un abogado en PI licenciado en la jurisdicción correspondiente. Las decisiones de patentes especialmente requieren consulta especializada.
EOT,
            ],
            [
                'title'         => 'Dar soporte técnico en plataformas de aprendizaje STEM con IA',
                'description'   => 'Resuelve incidencias técnicas y pedagógicas de usuarios en plataformas educativas de ciencias, matemáticas y programación con empatía y precisión.',
                'profession_id' => 9,
                'difficulty'    => 'beginner',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Proporcionar soporte técnico y pedagógico de alta calidad a usuarios de una plataforma educativa STEM, resolviendo tanto problemas técnicos como confusiones de aprendizaje, con empatía especial hacia estudiantes frustrados con las matemáticas o la programación.

contexto: Eres un especialista de soporte técnico con formación en ciencias y experiencia en plataformas EdTech. Entiendes que el soporte en plataformas educativas STEM es único: el usuario no solo puede tener un problema técnico (el vídeo no carga, el ejercicio no puntúa) sino también un bloqueo cognitivo (no entiende el concepto, cree que es "malo en matemáticas"). Ambos tipos de problemas requieren respuestas distintas y ambos son igualmente importantes.

instrucción de contexto:
- Plataforma: [NOMBRE_PLATAFORMA]
- Área: [Matemáticas / Programación / Física / Química / Ciencias de Datos]
- Tipo de usuario: [estudiante individual / profesor / padre/madre / administrador de centro]
- Canal de soporte: [email / chat en vivo / foro / WhatsApp / helpdesk]

tarea: El usuario ha enviado el siguiente mensaje:
[MENSAJE_DEL_USUARIO]

genera la respuesta completa y los recursos asociados:

1. Clasificación de la incidencia:
   - Tipo: [técnico / pedagógico / de cuenta / de facturación / combinado]
   - Urgencia: [crítica: no puede usar la plataforma / alta: bloquea aprendizaje / media / baja]
   - Emoción detectada: [frustración / confusión / urgencia / satisfacción / ansiedad]
   - ¿Hay un bloqueo de aprendizaje subyacente además del problema técnico?

2. Respuesta principal al usuario:
   - Reconocimiento empático (diferente según la emoción detectada)
   - Confirmación de que entendiste el problema
   - Solución paso a paso (numera cada paso, máximo 5 pasos simples)
   - Si es un problema técnico: incluye pasos de diagnóstico si hay múltiples causas posibles
   - Si es un bloqueo pedagógico: ofrece una explicación alternativa del concepto
   - Confirmación de que la solución funcionó (pregunta de cierre)
   - Escalado: cuándo y cómo escalar si la solución no funciona

3. Respuesta específica para bloqueos pedagógicos en STEM:
   Si el usuario está bloqueado en un concepto matemático o científico:
   - Identifica la confusión exacta (¿qué concepto previo falta?)
   - Explica de 3 formas distintas (texto / analogía / ejemplo con números concretos)
   - Indica qué lecciones de la plataforma debería repasar primero
   - Normaliza la dificultad ("este concepto es difícil para la mayoría, no es que seas malo en matemáticas")

4. Artículo de base de conocimiento generado:
   A partir de esta incidencia, genera un artículo para el centro de ayuda:
   - Título optimizado para búsqueda
   - Descripción del problema en 2 líneas
   - Solución paso a paso con capturas de pantalla sugeridas
   - Sección de troubleshooting (si los pasos anteriores no funcionan)
   - Preguntas relacionadas (enlaces a otros artículos)

5. Métricas y mejora del producto:
   - ¿Esta incidencia indica un bug? ¿Un problema de UX? ¿Una laguna pedagógica en el contenido?
   - Ticket de mejora sugerido para el equipo de producto (título + descripción + impacto estimado en usuarios)
   - Clasificación para las métricas de soporte: ¿es un problema nuevo o recurrente?

6. Scripts para situaciones especiales en EdTech:
   Genera respuestas tipo para:
   - Estudiante que cree que "no sirve para las matemáticas" y está a punto de abandonar
   - Profesor que no sabe cómo explicar a sus alumnos que usen la plataforma
   - Padre/madre preocupado porque su hijo pasa demasiado tiempo en la plataforma
   - Administrador de centro que no puede ver los informes de progreso de sus alumnos

instrucción de empatía: El soporte en educación es más sensible que en otras industrias porque está en juego la autoestima del estudiante. Nunca uses frases que impliquen que el error es del usuario ("debería haber leído las instrucciones").
EOT,
            ],
            [
                'title'         => 'Crear y vender cursos STEM en línea con IA como freelancer',
                'description'   => 'Diseña, estructura y comercializa cursos de ciencias, matemáticas o programación para plataformas como Udemy, Teachable o tu propia academia online.',
                'profession_id' => 10,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un curso STEM de alta calidad listo para publicar en plataformas de educación online, con estructura pedagógica sólida, materiales completos y una estrategia de lanzamiento y marketing que genere ventas recurrentes.

contexto: Eres un instructor de cursos online con experiencia en plataformas como Udemy, Coursera y Teachable. Has creado cursos que han superado las 10.000 matrículas porque entiendes que la diferencia entre un curso mediocre y uno exitoso no está en el conocimiento del instructor, sino en la estructura pedagógica, la claridad de la transformación prometida y el marketing desde el primer día.

instrucción de contexto del creador:
- Área de expertise: [ÁREA STEM: Python para análisis de datos / Estadística para negocios / Física cuántica para curiosos / Arduino / etc.]
- Audiencia objetivo: [profesionales / estudiantes / curiosos / otro]
- Nivel del curso: [introductorio / intermedio / avanzado]
- Plataforma objetivo: [Udemy / Teachable / Thinkific / academia propia / LinkedIn Learning]
- Precio objetivo: [€X]
- Tiempo disponible para crear el curso: [X semanas]

tarea: Desarrolla el plan completo del curso:

1. Validación de la idea (antes de crear):
   - Análisis de demanda: cómo buscar si hay mercado para este curso
   - Benchmarking: los 5 cursos más vendidos en tu área, sus fortalezas y el gap que tú puedes llenar
   - La transformación única de tu curso en una frase ("al terminar este curso, podrás [resultado específico y medible]")
   - Pregunta de validación: cómo presell el curso antes de crearlo

2. Diseño curricular completo:
   Plan del curso con estructura pedagógica:
   - Objetivos de aprendizaje por módulo (en formato "el estudiante será capaz de...")
   - Estructura de módulos y lecciones con duración estimada de cada vídeo
   - Equilibrio entre teoría, demo y práctica guiada
   - Proyectos que el estudiante completa durante el curso
   - Sistema de evaluación (quizzes, proyectos, certificado)
   El curso debe tener entre [X] y [Y] horas de contenido.

3. Guión de la lección piloto:
   Escribe el guión completo de la lección 1 del curso:
   - Apertura: por qué este tema importa (1 minuto)
   - Objetivo de la lección
   - Contenido principal con ejemplos concretos
   - Demo práctica (si aplica)
   - Resumen y conexión con la siguiente lección
   - Ejercicio propuesto
   Total: 8-12 minutos de vídeo.

4. Materiales complementarios:
   Para el curso completo, detalla qué materiales crear:
   - Diapositivas: estilo recomendado para STEM (equilibrio texto-visual)
   - Notebooks/archivos de código: estructura y organización
   - Hojas de referencia (cheatsheets): qué incluir en cada una
   - Ejercicios con soluciones: formato y dificultad progresiva
   - Recursos adicionales curados: cómo elegir los mejores

5. Página de ventas de alto impacto:
   Crea la página de ventas completa:
   - Título principal (con la transformación clara)
   - Subtítulo (con la audiencia y el beneficio)
   - Para quién es este curso (y para quién NO es)
   - Lo que aprenderás (bullets con beneficios, no temas)
   - Tu credibilidad como instructor
   - Temario detallado con duración
   - Testimoniales de estudiantes (crea 3 ejemplos verosímiles)
   - FAQ de las 8 preguntas más frecuentes
   - Garantía de satisfacción
   - CTA de inscripción

6. Estrategia de lanzamiento (primeros 30 días):
   - Semana previa: presell y lista de espera
   - Día de lanzamiento: actividades hora a hora
   - Semana 1-4: estrategia de captación de reseñas, promociones y contenido de atracción
   - Canales de distribución más efectivos para este nicho STEM
   - Cómo aprovechar la auditoría de Udemy para aparecer en búsquedas

7. Escalabilidad del negocio de cursos:
   - De 1 curso a un catálogo: qué crear después
   - Academia propia vs. Udemy: cuándo migrar y cómo
   - Membresía mensual: ¿tiene sentido para tu nicho?
   - Generación de ingresos pasivos reales vs. expectativas irreales
   - Cuántas horas reales de mantenimiento requiere un curso después del lanzamiento

instrucción de calidad pedagógica: Revisa que el diseño curricular sigue los principios de aprendizaje activo, no solo "lecciones magistrales". El estudiante debe HACER algo en cada módulo, no solo ver vídeos.
EOT,
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
