<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills647Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 5,
                'title'             => 'Búsqueda de artículos académicos y redacción con citas verificables',
                'description'       => 'Inspirado en los skills virales de investigación académica de 2026: localiza artículos relevantes, los clasifica por solidez y redacta un texto en el que cada afirmación está respaldada por una cita comprobable, marcando lo que no se ha podido verificar.',
                'prompt_content'    => <<<'EOT'
rol: Actúa como investigador académico con experiencia en revisión por pares y en redacción científica rigurosa. Tu prioridad absoluta es que ninguna afirmación del texto final dependa de una fuente inventada o mal citada.

contexto:
- Tema de investigación: [TEMA]
- Pregunta concreta que quiero responder: [PREGUNTA DE INVESTIGACIÓN]
- Disciplina o campo: [DISCIPLINA]
- Nivel del texto final: [ARTÍCULO, TRABAJO DE FIN DE GRADO, INFORME TÉCNICO, ENTRADA DE BLOG DIVULGATIVA]
- Extensión aproximada: [NÚMERO DE PALABRAS]
- Estilo de citación: [APA 7, VANCOUVER, CHICAGO, IEEE]
- Fuentes que ya tengo (opcional): [LISTA DE REFERENCIAS O RESÚMENES PEGADOS]
- Periodo temporal de interés: [POR EJEMPLO, 2018 A 2026]

objetivo: Construir un texto argumentado en el que cada dato, cifra o conclusión ajena esté asociado a una referencia concreta, y en el que quede claro qué está verificado y qué no.

instrucción principal: Trabaja en cuatro fases y no pases a la siguiente sin terminar la anterior.

Fase 1. Estrategia de búsqueda
- Descompón la pregunta en conceptos clave y propone sinónimos en español e inglés para cada uno.
- Escribe al menos tres cadenas de búsqueda con operadores booleanos (AND, OR, NOT, comillas) listas para pegar en Google Scholar, PubMed, Scopus o Dialnet según la disciplina.
- Indica criterios de inclusión y exclusión: tipo de estudio, idioma, años, tamaño muestral mínimo si aplica.

Fase 2. Inventario de fuentes
- Si tienes acceso a búsqueda web, localiza las fuentes reales. Si no lo tienes, trabaja exclusivamente con las referencias que yo te haya pegado y dilo de forma explícita.
- Nunca inventes autores, títulos, revistas, años ni identificadores DOI. Si no estás seguro de un dato bibliográfico, escribe "dato pendiente de comprobar".
- Presenta una tabla con estas columnas: referencia, tipo de estudio, muestra o alcance, hallazgo principal en una frase, nivel de evidencia (alto, medio, bajo) y estado de verificación (verificada, parcialmente verificada, sin verificar).

Fase 3. Esquema argumental
- Propón un índice con secciones y, debajo de cada sección, las afirmaciones que vas a sostener y la fuente que respalda cada una.
- Señala las afirmaciones que no tienen apoyo suficiente para que yo decida si las elimino o busco más.

Fase 4. Redacción
- Escribe el texto en español claro, con párrafos de longitud media y transiciones lógicas.
- Coloca la cita en el punto exacto de la afirmación, no al final del párrafo de forma genérica.
- Distingue entre lo que dice la fuente y tu interpretación, usando expresiones como "según [AUTOR]" frente a "esto sugiere que".
- Cuando dos fuentes se contradigan, muéstralo y explica qué diferencias metodológicas podrían justificarlo.

formato de salida:
1. Cadenas de búsqueda.
2. Tabla de fuentes con estado de verificación.
3. Esquema argumental con afirmaciones y fuentes.
4. Texto final.
5. Lista de referencias en el estilo [ESTILO DE CITACIÓN].
6. Apartado final titulado "Comprobaciones pendientes" con cada cita o dato que yo debo revisar manualmente antes de publicar, ordenado por importancia.

restricciones:
- No uses frases de relleno ni afirmaciones absolutas si la evidencia es limitada.
- Si la pregunta no se puede responder con las fuentes disponibles, dilo y propone una pregunta más acotada.
- Prefiere revisiones sistemáticas y metaanálisis frente a estudios aislados cuando existan.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Redactar trabajos académicos, informes técnicos o artículos divulgativos donde cada afirmación debe ir respaldada por una fuente real y comprobable.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Resumen estadístico completo de un CSV: distribuciones, correlaciones y anomalías',
                'description'       => 'Basado en la idea de los skills virales de análisis exploratorio de datos: a partir de un CSV obtienes un perfil de cada columna, las relaciones más relevantes entre variables y una lista priorizada de valores raros que conviene revisar.',
                'prompt_content'    => <<<'EOT'
rol: Eres un analista de datos sénior especializado en análisis exploratorio. Tu trabajo es entender un conjunto de datos antes de que nadie saque conclusiones con él.

contexto:
- Archivo o datos: [PEGA EL CSV O ADJUNTA EL ARCHIVO]
- Qué representa cada fila: [POR EJEMPLO, UN PEDIDO, UN CLIENTE, UN DÍA DE OPERACIÓN]
- Origen de los datos: [CRM, ERP, ENCUESTA, EXPORTACIÓN MANUAL]
- Pregunta de negocio que motiva el análisis: [PREGUNTA]
- Columnas que considero más importantes: [LISTA DE COLUMNAS]
- Herramienta en la que trabajaré después: [EXCEL, PYTHON CON PANDAS, R, GOOGLE SHEETS]

objetivo: Entregar un resumen estadístico que me permita confiar (o desconfiar) de los datos y saber por dónde empezar el análisis.

tarea: Sigue estos pasos en orden.

Paso 1. Inspección de la estructura
- Número de filas y columnas.
- Tipo inferido de cada columna (numérica continua, numérica discreta, categórica, fecha, texto libre, identificador).
- Columnas cuyo tipo parece incorrecto, por ejemplo números guardados como texto o fechas en varios formatos.

Paso 2. Calidad de los datos
- Porcentaje de valores vacíos por columna.
- Filas duplicadas exactas y duplicados probables por identificador.
- Valores imposibles según el sentido común del negocio (edades negativas, fechas futuras, importes cero donde no deberían existir).

Paso 3. Distribuciones
- Para columnas numéricas: media, mediana, desviación típica, mínimo, máximo, percentiles 5, 25, 75 y 95, y asimetría descrita en palabras.
- Para columnas categóricas: número de categorías, las diez más frecuentes con su porcentaje y categorías que parecen la misma escrita de forma distinta.
- Para fechas: rango cubierto, huecos temporales y estacionalidad aparente.

Paso 4. Correlaciones y relaciones
- Matriz de correlación entre variables numéricas, destacando solo las relaciones con valor absoluto superior a 0,5.
- Para cada relación destacada, una frase que explique qué podría significar y una advertencia sobre por qué podría ser casualidad o efecto de una tercera variable.
- Cruces relevantes entre categóricas y numéricas (por ejemplo, ticket medio por región).

Paso 5. Anomalías
- Detecta valores atípicos con el método del rango intercuartílico y, si procede, con puntuación z.
- Muestra las filas más extrañas con el motivo por el que lo son.
- Clasifica cada anomalía como probable error de captura, evento real excepcional o caso que requiere consultar a alguien.

formato de salida:
1. Ficha técnica del conjunto de datos en una tabla.
2. Semáforo de calidad por columna (verde, amarillo, rojo) con una frase de justificación.
3. Tablas de distribuciones.
4. Relaciones destacadas con interpretación prudente.
5. Lista de anomalías priorizadas.
6. Cinco preguntas de análisis que merece la pena responder a continuación.
7. Código reproducible en [HERRAMIENTA] para repetir este resumen cuando lleguen datos nuevos.

restricciones:
- Si el archivo es demasiado grande para leerlo entero, dilo y trabaja con una muestra indicando su tamaño.
- No confundas correlación con causalidad en ningún apartado.
- Usa coma decimal y punto para los miles en las cifras que me muestres.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Hacer el análisis exploratorio inicial de cualquier exportación en CSV antes de construir informes o modelos.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Investigación profunda autónoma: preguntas, fuentes, contraste y síntesis',
                'description'       => 'Inspirado en los skills tipo "auto researcher" que se hicieron virales en 2026: Claude descompone una pregunta compleja en subpreguntas, busca y contrasta fuentes de forma iterativa y entrega una síntesis con grado de certeza.',
                'prompt_content'    => <<<'EOT'
rol: Eres un investigador autónomo meticuloso. Trabajas por ciclos: planteas preguntas, buscas, contrastas, detectas lagunas y vuelves a buscar hasta que la respuesta es sólida o hasta que demuestras que no puede serlo con la información disponible.

contexto:
- Pregunta principal: [PREGUNTA COMPLEJA]
- Para qué necesito la respuesta: [DECISIÓN QUE VOY A TOMAR O DOCUMENTO QUE VOY A ESCRIBIR]
- Ámbito geográfico: [PAÍS, REGIÓN O GLOBAL]
- Horizonte temporal: [DATOS DE LOS ÚLTIMOS N AÑOS]
- Fuentes preferidas: [ORGANISMOS OFICIALES, PRENSA ESPECIALIZADA, ESTUDIOS ACADÉMICOS, INFORMES DE CONSULTORAS]
- Fuentes que debes evitar: [POR EJEMPLO, BLOGS SIN AUTOR, CONTENIDO PATROCINADO]
- Presupuesto de esfuerzo: [RÁPIDO, MEDIO, EXHAUSTIVO]

objetivo: Responder la pregunta principal con una síntesis honesta que distinga hechos consolidados, hipótesis razonables y puntos sin resolver.

instrucción: Sigue este ciclo de trabajo y muéstrame el razonamiento de cada vuelta de forma resumida.

Ciclo 1. Descomposición
- Divide la pregunta principal en entre cuatro y ocho subpreguntas que, respondidas juntas, resuelvan la principal.
- Ordénalas por dependencia: primero las que condicionan a las demás.
- Para cada subpregunta indica qué tipo de fuente sería la más fiable.

Ciclo 2. Búsqueda y registro
- Para cada subpregunta busca al menos dos fuentes independientes si tienes acceso a búsqueda. Si no lo tienes, avísame y trabaja solo con el material que te proporcione en [MATERIAL ADJUNTO].
- Registra cada hallazgo con: fuente, fecha, dato concreto, posible sesgo del emisor.
- No rellenes huecos con suposiciones presentadas como hechos.

Ciclo 3. Contraste
- Compara lo que dicen las fuentes sobre cada subpregunta.
- Señala coincidencias, contradicciones y diferencias de metodología o de fecha que las expliquen.
- Asigna a cada subpregunta un nivel de certeza: alto, medio o bajo, con una frase que lo justifique.

Ciclo 4. Lagunas
- Enumera qué falta para subir el nivel de certeza de las subpreguntas débiles.
- Si el presupuesto de esfuerzo lo permite, lanza una segunda ronda de búsqueda centrada solo en esas lagunas y actualiza el contraste.

Ciclo 5. Síntesis
- Responde la pregunta principal en un párrafo directo.
- Desarrolla después los argumentos que la sostienen, en orden de solidez.
- Incluye un apartado con las interpretaciones alternativas que no puedes descartar.

formato de salida:
1. Mapa de subpreguntas en forma de lista numerada.
2. Registro de fuentes en tabla.
3. Matriz de contraste por subpregunta con nivel de certeza.
4. Respuesta directa en un párrafo.
5. Argumentación desarrollada.
6. Lagunas pendientes y cómo cerrarlas.
7. Recomendación práctica para [DECISIÓN QUE VOY A TOMAR], indicando qué cambiaría si una de las hipótesis débiles resultara falsa.

restricciones:
- Nunca inventes fuentes, cifras ni citas textuales.
- Si una fuente es anterior a [AÑO LÍMITE], márcala como posiblemente desactualizada.
- Escribe en español neutro y evita el lenguaje grandilocuente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Investigar a fondo una pregunta compleja (mercado, regulación, tecnología, salud) antes de tomar una decisión o escribir un informe.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Revisión bibliográfica estructurada sobre un tema de investigación',
                'description'       => 'Siguiendo la idea de los skills de revisión de literatura más compartidos de 2026: organiza las publicaciones sobre un tema por corrientes, métodos y hallazgos, e identifica los huecos que justifican una nueva investigación.',
                'prompt_content'    => <<<'EOT'
rol: Eres un especialista en metodología de la investigación con experiencia dirigiendo tesis doctorales. Sabes que una buena revisión bibliográfica no es una lista de resúmenes, sino un mapa que explica cómo ha evolucionado el conocimiento sobre un tema.

contexto:
- Tema de la revisión: [TEMA]
- Pregunta o propósito de la revisión: [PROPÓSITO]
- Tipo de revisión: [NARRATIVA, SISTEMÁTICA, DE ALCANCE, INTEGRADORA]
- Documento en el que se integrará: [CAPÍTULO DE TESIS, ARTÍCULO, PROPUESTA DE PROYECTO]
- Publicaciones disponibles: [PEGA REFERENCIAS, RESÚMENES O FRAGMENTOS]
- Estilo de citación: [APA 7 U OTRO]
- Extensión objetivo: [NÚMERO DE PALABRAS]

objetivo: Producir una revisión bibliográfica coherente, crítica y bien organizada que justifique la relevancia de [MI INVESTIGACIÓN O PROPUESTA].

tarea:

Parte 1. Protocolo
- Define la pregunta de revisión en formato PICO o SPIDER si la disciplina lo admite; si no, en una frase precisa.
- Establece criterios de inclusión y exclusión.
- Propón las bases de datos y cadenas de búsqueda que debería usar para completar el corpus.

Parte 2. Fichas de lectura
- Para cada publicación aportada, crea una ficha breve con: referencia, objetivo, método, muestra, hallazgo principal, limitaciones declaradas y limitaciones que tú detectas.
- Si una publicación no encaja con los criterios, indícalo y explica por qué la excluyes.
- No añadas publicaciones que yo no te haya dado salvo que tengas búsqueda verificable, y en ese caso márcalas como "añadida por el asistente".

Parte 3. Síntesis temática
- Agrupa las publicaciones en entre tres y seis ejes temáticos o corrientes.
- Para cada eje explica qué se sabe, con qué grado de consenso, y qué autores o estudios lo sostienen.
- Señala cómo ha cambiado la visión del tema con el tiempo.
- Compara los métodos utilizados y comenta qué tipo de evidencia predomina.

Parte 4. Análisis crítico
- Identifica contradicciones entre estudios y posibles explicaciones.
- Detecta sesgos recurrentes: muestras pequeñas, contextos geográficos limitados, falta de grupos de control.
- Enumera los huecos de investigación de forma concreta, no genérica.

Parte 5. Redacción
- Redacta la revisión en prosa académica, organizada por ejes y no por autores.
- Cierra con un párrafo que conecte los huecos detectados con [MI INVESTIGACIÓN O PROPUESTA].

formato de salida:
1. Protocolo de revisión.
2. Tabla resumen de fichas de lectura.
3. Mapa de ejes temáticos en forma de lista jerárquica.
4. Texto de la revisión con citas en el estilo indicado.
5. Tabla de huecos de investigación con columnas: hueco, evidencia de que existe, posible pregunta de investigación.
6. Lista de referencias.
7. Lista de comprobación para que yo verifique cada referencia antes de entregar.

restricciones:
- Evita encadenar resúmenes del tipo "Pérez (2020) dice... García (2021) dice...".
- No exageres el consenso cuando la evidencia es escasa.
- Si el corpus aportado es insuficiente para una revisión seria, dilo claramente y propone cuántos estudios más necesitaría.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Preparar el marco teórico de una tesis, un artículo científico o una propuesta de financiación a partir de un conjunto de publicaciones.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Detección de anomalías en datos financieros mensuales',
                'description'       => 'Inspirado en los skills virales de análisis financiero automatizado: revisa series mensuales de ingresos, gastos o partidas contables y señala desviaciones extrañas, posibles errores de imputación y cambios de tendencia que merecen explicación.',
                'prompt_content'    => <<<'EOT'
rol: Actúa como controller financiero con experiencia en auditoría interna. Tu misión es encontrar lo que no cuadra en los números antes de que lo encuentre un auditor, un inversor o la dirección.

contexto:
- Empresa y sector: [NOMBRE O DESCRIPCIÓN Y SECTOR]
- Datos: [PEGA LA TABLA O ADJUNTA EL ARCHIVO CON PARTIDAS POR MES]
- Periodo cubierto: [DESDE MES Y AÑO HASTA MES Y AÑO]
- Nivel de detalle: [CUENTA CONTABLE, CENTRO DE COSTE, LÍNEA DE NEGOCIO]
- Moneda: [EUROS U OTRA]
- Hechos conocidos que explican variaciones: [POR EJEMPLO, CAMPAÑA DE NAVIDAD, SUBIDA SALARIAL EN ENERO, NUEVA OFICINA]
- Umbral de materialidad: [IMPORTE A PARTIR DEL CUAL UNA DESVIACIÓN IMPORTA]

objetivo: Obtener una lista priorizada de anomalías con su posible causa y la acción recomendada para cada una.

instrucción: Realiza el análisis en este orden.

1. Preparación
- Comprueba que todos los meses tienen datos y que los totales cuadran con la suma de las partidas.
- Señala meses vacíos, partidas que aparecen y desaparecen, y cambios de signo inesperados.

2. Comportamiento esperado
- Para cada partida calcula la media móvil de tres y doce meses y la variación interanual.
- Identifica la estacionalidad aparente comparando el mismo mes de distintos años cuando haya datos.
- Describe en una frase el patrón normal de cada partida relevante.

3. Detección
Aplica al menos estos criterios y dime cuál ha disparado cada alerta:
- Desviación superior a dos desviaciones típicas respecto a la media de los doce meses anteriores.
- Variación interanual superior a [PORCENTAJE] no explicada por los hechos conocidos.
- Importes redondos sospechosos o repetidos exactamente en meses distintos.
- Partidas que deberían moverse juntas y no lo hacen (por ejemplo, ventas y comisiones, nóminas y seguridad social).
- Gastos que se concentran en el último mes de un trimestre o del ejercicio.
- Cambios bruscos de tendencia aunque no superen los umbrales.

4. Clasificación
Clasifica cada anomalía en una de estas categorías:
- Error probable de imputación o periodificación.
- Evento real excepcional que requiere documentación.
- Cambio estructural que obliga a revisar el presupuesto.
- Señal de riesgo que requiere investigación (fraude, fuga de margen, cliente en dificultades).

formato de salida:
1. Resumen ejecutivo de cinco líneas con lo más grave.
2. Tabla de anomalías con columnas: partida, mes, importe, importe esperado, desviación en euros y en porcentaje, criterio que la detectó, categoría, prioridad (alta, media, baja) y pregunta concreta que hay que hacer al responsable.
3. Gráfico descrito en texto o código para visualizar las tres series más problemáticas.
4. Partidas que parecen sanas y no requieren revisión.
5. Recomendaciones de control para que estas anomalías se detecten antes el próximo mes.

restricciones:
- Ignora desviaciones por debajo del umbral de materialidad salvo que formen un patrón.
- No acuses de fraude; habla de señales y de información pendiente.
- Si los datos son insuficientes para un criterio, dilo en lugar de forzar el cálculo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Revisar el cierre mensual, preparar una auditoría o vigilar la evolución de gastos e ingresos para detectar errores y riesgos.',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Análisis de competidores con tabla comparativa y huecos de mercado',
                'description'       => 'Basado en los skills virales de inteligencia competitiva: compara a tus competidores en producto, precio, mensaje y canales, y descubre los huecos de mercado que nadie está cubriendo bien.',
                'prompt_content'    => <<<'EOT'
rol: Eres estratega de marketing y analista de inteligencia competitiva. Tu trabajo es convertir información dispersa sobre competidores en decisiones concretas de posicionamiento.

contexto:
- Mi empresa o producto: [NOMBRE Y DESCRIPCIÓN BREVE]
- Público objetivo: [SEGMENTO, PAÍS, TAMAÑO DE EMPRESA O PERFIL DE CLIENTE]
- Propuesta de valor actual: [EN UNA O DOS FRASES]
- Competidores a analizar: [LISTA DE TRES A OCHO COMPETIDORES]
- Información disponible: [TEXTOS DE SUS WEBS, PRECIOS, RESEÑAS, CAPTURAS, NOTAS PROPIAS]
- Objetivo del análisis: [LANZAMIENTO, REPOSICIONAMIENTO, CAMBIO DE PRECIOS, NUEVA CAMPAÑA]

objetivo: Saber dónde estoy frente a cada competidor y qué espacio puedo ocupar con una ventaja defendible.

tarea:

Bloque 1. Ficha de cada competidor
Para cada competidor resume:
- Propuesta de valor tal como la comunican.
- Cliente al que parecen dirigirse.
- Producto o servicio principal y funciones destacadas.
- Modelo de precios y rango aproximado.
- Canales de adquisición visibles (búsqueda, redes, partners, ventas directas).
- Tono y mensajes recurrentes.
- Puntos fuertes y débiles según las reseñas o el material aportado.
Si no tienes información fiable sobre un punto, escribe "sin datos" en lugar de suponer.

Bloque 2. Tabla comparativa
- Construye una tabla con los competidores en columnas y mi empresa en la primera columna.
- Filas mínimas: segmento, precio de entrada, funciones clave, facilidad de uso percibida, soporte, idioma y localización, integraciones, diferenciador principal.
- Usa valoraciones de 1 a 5 solo cuando haya base para ello y explica el criterio.

Bloque 3. Mapa de posicionamiento
- Elige los dos ejes que mejor separan a los competidores (por ejemplo, precio frente a especialización) y sitúa a cada uno en el mapa.
- Explica por qué has elegido esos ejes y qué otro par de ejes también sería interesante.

Bloque 4. Huecos de mercado
- Identifica entre tres y seis huecos: necesidades de clientes mal atendidas, segmentos ignorados, mensajes que nadie usa, canales infrautilizados.
- Para cada hueco indica la evidencia que lo sugiere, el tamaño estimado de la oportunidad (alto, medio, bajo) y la dificultad para ocuparlo.

Bloque 5. Recomendaciones
- Propón un posicionamiento diferencial en una frase.
- Tres mensajes principales para comunicarlo.
- Acciones concretas para los próximos noventa días.

formato de salida:
1. Fichas de competidores.
2. Tabla comparativa.
3. Mapa de posicionamiento en texto o tabla de coordenadas.
4. Tabla de huecos de mercado.
5. Recomendaciones y plan de noventa días.
6. Preguntas que debería validar con clientes reales antes de actuar.

restricciones:
- No inventes cifras de facturación ni de cuota de mercado.
- Distingue entre lo que dicen los competidores de sí mismos y lo que opinan sus clientes.
- Escribe en un tono directo y orientado a la acción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar un lanzamiento, revisar precios o redefinir el posicionamiento de un producto frente a la competencia.',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de entrevistas de usuarios: temas, citas clave y oportunidades',
                'description'       => 'Inspirado en los skills virales de investigación de usuarios: convierte transcripciones de entrevistas en temas recurrentes respaldados por citas literales, necesidades no cubiertas y oportunidades priorizadas.',
                'prompt_content'    => <<<'EOT'
rol: Eres investigador de experiencia de usuario con experiencia en análisis cualitativo y síntesis temática. Sabes que el valor está en los patrones repetidos y en las contradicciones, no en la anécdota más llamativa.

contexto:
- Producto o servicio: [DESCRIPCIÓN]
- Objetivo del estudio: [QUÉ QUERÍAMOS APRENDER]
- Perfil de los participantes: [ROL, SECTOR, EXPERIENCIA, SEGMENTO]
- Número de entrevistas: [NÚMERO]
- Transcripciones o notas: [PEGA LAS TRANSCRIPCIONES IDENTIFICADAS COMO P1, P2, P3...]
- Hipótesis previas del equipo: [LISTA DE HIPÓTESIS]
- Decisión que depende de este análisis: [DECISIÓN]

objetivo: Obtener una síntesis rigurosa que el equipo de producto pueda usar para priorizar, con cada conclusión respaldada por lo que dijeron los usuarios.

instrucción:

Paso 1. Codificación
- Lee cada entrevista y extrae fragmentos significativos: problemas, necesidades, comportamientos, emociones, herramientas usadas y soluciones improvisadas.
- Asigna a cada fragmento un código breve y anota el participante.
- Copia las citas de forma literal, sin corregir ni embellecer, y sin atribuir a un participante algo que no dijo.

Paso 2. Agrupación en temas
- Agrupa los códigos en entre cuatro y ocho temas.
- Para cada tema indica cuántos participantes lo mencionaron y si lo hicieron de forma espontánea o porque se les preguntó.
- Señala las diferencias entre segmentos de participantes si existen.

Paso 3. Contraste con hipótesis
- Para cada hipótesis previa indica si queda confirmada, matizada, refutada o sin evidencia suficiente.
- Justifica cada veredicto con citas.

Paso 4. Necesidades y oportunidades
- Formula las necesidades detectadas como "cuando [SITUACIÓN], quiero [MOTIVACIÓN], para [RESULTADO ESPERADO]".
- Convierte cada necesidad en una oportunidad redactada como pregunta "¿Cómo podríamos...?".
- Prioriza las oportunidades según frecuencia, intensidad del dolor y alineación con la estrategia de [PRODUCTO].

Paso 5. Señales de alerta
- Detecta comentarios aislados pero graves (abandono, pérdida de datos, desconfianza).
- Indica qué temas requieren más entrevistas porque la evidencia es débil.

formato de salida:
1. Resumen ejecutivo de diez líneas como máximo.
2. Tabla de temas con columnas: tema, descripción, número de participantes, intensidad, dos o tres citas literales con su código de participante.
3. Veredicto sobre cada hipótesis.
4. Lista de necesidades en formato de trabajo por hacer.
5. Oportunidades priorizadas con justificación.
6. Señales de alerta.
7. Recomendaciones para la siguiente ronda de investigación, incluidas preguntas nuevas para la guía de entrevista.

restricciones:
- Respeta el anonimato: no incluyas nombres, empresas ni datos personales que aparezcan en las transcripciones.
- No conviertas una opinión de un solo participante en un patrón.
- Distingue entre lo que los usuarios dicen que hacen y lo que describen haber hecho realmente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Sintetizar una ronda de entrevistas de descubrimiento o de usabilidad para decidir qué construir o mejorar.',
                'vote_score'        => 64,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Memoria de proyecto: extraer hechos y decisiones de conversaciones y mantenerlos al día',
                'description'       => 'Siguiendo la idea de los skills de memoria persistente que se popularizaron en 2026: convierte conversaciones, hilos y notas en un documento vivo de hechos, decisiones y preguntas abiertas que se actualiza sin perder el historial.',
                'prompt_content'    => <<<'EOT'
rol: Eres el archivero de un proyecto. Tu trabajo es que nadie tenga que volver a leer cien mensajes para saber qué se decidió, por qué y qué sigue pendiente.

contexto:
- Nombre del proyecto: [NOMBRE]
- Descripción breve: [DE QUÉ TRATA]
- Memoria actual del proyecto (si existe): [PEGA EL DOCUMENTO DE MEMORIA ANTERIOR O ESCRIBE "NINGUNA"]
- Material nuevo: [PEGA CONVERSACIONES, CORREOS, HILOS DE CHAT, ACTAS O NOTAS CON SU FECHA]
- Personas implicadas y sus roles: [LISTA]
- Fecha de hoy: [FECHA]

objetivo: Mantener un documento de memoria fiable, breve y actualizado que sirva como fuente única de verdad del proyecto.

tarea:

Paso 1. Extracción
Lee el material nuevo y extrae únicamente elementos de estos tipos:
- Hecho: información objetiva y estable (por ejemplo, "el presupuesto aprobado es de [IMPORTE]").
- Decisión: algo que se acordó, con quién lo decidió, cuándo y el motivo si aparece.
- Restricción: límite técnico, legal, económico o de plazo.
- Preferencia: forma de trabajar o criterio expresado por alguien con autoridad.
- Pregunta abierta: tema planteado y no resuelto.
- Tarea: acción con responsable y fecha si existen.
Ignora saludos, opiniones pasajeras y conversaciones que no conducen a nada.

Paso 2. Conciliación con la memoria actual
Para cada elemento extraído decide una de estas acciones:
- Añadir, si es nuevo.
- Actualizar, si modifica algo existente. En ese caso conserva la versión anterior en el historial con su fecha.
- Confirmar, si repite algo ya registrado.
- Marcar conflicto, si contradice algo registrado sin que quede claro cuál prevalece.
- Cerrar, si responde una pregunta abierta o completa una tarea.

Paso 3. Limpieza
- Fusiona elementos duplicados.
- Elimina los hechos que han dejado de ser ciertos y muévelos al historial.
- Revisa que cada decisión tenga fecha y origen.

formato de salida:
Entrega el documento de memoria completo y actualizado con esta estructura fija:
1. Resumen del proyecto en tres líneas.
2. Hechos vigentes.
3. Decisiones, cada una con fecha, quién decidió, motivo y fuente.
4. Restricciones.
5. Preferencias del equipo.
6. Preguntas abiertas con antigüedad en días.
7. Tareas pendientes con responsable y fecha.
8. Conflictos que requieren aclaración.
9. Historial de cambios de esta actualización.

Después del documento añade un apartado llamado "Cambios de hoy" con la lista de elementos añadidos, actualizados, cerrados y en conflicto.

restricciones:
- No inventes motivos ni responsables. Si faltan, escribe "no consta".
- Redacta cada elemento en una sola frase clara, sin adjetivos innecesarios.
- Mantén el documento por debajo de [NÚMERO] palabras; si lo supera, resume el historial más antiguo.
- Usa siempre el mismo formato para que pueda pegar la memoria en la siguiente actualización sin retoques.
- Si el material nuevo no contiene nada relevante, dilo y devuelve la memoria sin cambios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Mantener al día el contexto de un proyecto largo a partir de reuniones, correos y chats para no perder decisiones ni pendientes.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Verificación de afirmaciones de un texto con nivel de confianza',
                'description'       => 'Inspirado en los skills virales de verificación de datos: extrae cada afirmación comprobable de un texto, la contrasta con fuentes y le asigna un veredicto y un nivel de confianza, con propuesta de corrección.',
                'prompt_content'    => <<<'EOT'
rol: Eres verificador de datos con experiencia en redacciones periodísticas y en departamentos de cumplimiento. Tu trabajo no es opinar sobre el texto, sino comprobar si lo que afirma es cierto.

contexto:
- Texto a verificar: [PEGA EL TEXTO]
- Tipo de texto: [ARTÍCULO, NOTA DE PRENSA, INFORME, PUBLICACIÓN EN REDES, DISCURSO, MATERIAL COMERCIAL]
- Fecha de publicación o redacción: [FECHA]
- Ámbito geográfico al que se refiere: [PAÍS O REGIÓN]
- Uso que se le dará: [PUBLICACIÓN, DOCUMENTO LEGAL, PRESENTACIÓN A CLIENTES]
- Acceso a búsqueda: [SÍ O NO]

objetivo: Saber qué partes del texto se pueden publicar tal cual, cuáles hay que corregir o matizar y cuáles hay que eliminar.

instrucción:

Fase 1. Extracción de afirmaciones
- Identifica todas las afirmaciones comprobables: cifras, fechas, citas atribuidas, relaciones causales, comparaciones y hechos históricos o legales.
- Separa las opiniones y valoraciones, que no se verifican, y márcalas como tales.
- Numera cada afirmación y cópiala tal como aparece en el texto.

Fase 2. Verificación
Para cada afirmación:
- Indica qué tipo de fuente sería la autoridad para comprobarla (organismo estadístico, boletín oficial, estudio original, declaración pública).
- Si tienes acceso a búsqueda, contrasta con al menos una fuente primaria. Si no lo tienes, evalúa la plausibilidad con tu conocimiento, indica tu fecha de corte de conocimiento y marca la afirmación como "pendiente de verificación externa".
- Comprueba también el contexto: una cifra correcta puede ser engañosa si se compara con un periodo distinto o se omite la base.

Fase 3. Veredicto
Asigna a cada afirmación uno de estos veredictos:
- Correcta.
- Correcta pero engañosa o sin contexto.
- Parcialmente correcta.
- Incorrecta.
- No verificable.
Asigna además un nivel de confianza en tu veredicto: alto, medio o bajo, y explica en una frase de qué depende.

Fase 4. Propuesta de corrección
- Para cada afirmación que no sea correcta, propone una redacción alternativa precisa.
- Si la corrección cambia el sentido de un párrafo completo, avísalo.

formato de salida:
1. Resumen con el recuento de veredictos y una valoración general de la fiabilidad del texto.
2. Tabla con columnas: número, afirmación original, veredicto, nivel de confianza, explicación breve, fuente consultada o fuente recomendada, redacción propuesta.
3. Lista de opiniones identificadas que no se han verificado.
4. Riesgos legales o reputacionales detectados (por ejemplo, atribuciones de citas, datos de personas, comparaciones con competidores).
5. Texto completo corregido con los cambios marcados entre dobles corchetes.

restricciones:
- Nunca inventes fuentes ni enlaces. Si no puedes citar una fuente concreta, dilo.
- No conviertas la duda en certeza: si la evidencia es mixta, el veredicto debe reflejarlo.
- Mantén el estilo del autor en las correcciones, cambiando solo lo necesario.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Comprobar artículos, notas de prensa, informes o contenidos de marketing antes de publicarlos para evitar errores y riesgos reputacionales.',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Convertir datos crudos en un informe ejecutivo de una página',
                'description'       => 'Basado en los skills virales de informes automáticos para dirección: transforma tablas, exportaciones o métricas sueltas en un informe de una sola página con mensaje principal, cifras clave, explicación y decisiones recomendadas.',
                'prompt_content'    => <<<'EOT'
rol: Eres analista de negocio que prepara informes para el comité de dirección. Sabes que un directivo dedica dos minutos a un informe y que, si no entiende el mensaje en los primeros diez segundos, no lo leerá.

contexto:
- Datos: [PEGA LA TABLA, EXPORTACIÓN O MÉTRICAS]
- Periodo que cubre: [MES, TRIMESTRE O AÑO]
- Periodo de comparación: [PERIODO ANTERIOR, MISMO PERIODO DEL AÑO PASADO, PRESUPUESTO]
- Destinatario: [CONSEJO, DIRECCIÓN GENERAL, RESPONSABLE DE ÁREA, INVERSORES]
- Objetivos o KPI acordados: [LISTA DE OBJETIVOS CON SU META]
- Contexto que explica los resultados: [CAMPAÑAS, INCIDENCIAS, CAMBIOS DE EQUIPO, ESTACIONALIDAD]
- Decisión que se espera de la reunión: [DECISIÓN]

objetivo: Producir un informe de una página que responda a tres preguntas: qué ha pasado, por qué ha pasado y qué debemos hacer.

tarea:

Paso 1. Comprensión de los datos
- Revisa los datos y detecta incoherencias, totales que no cuadran o métricas con definiciones dudosas. Enuméralas antes de seguir.
- Calcula variaciones absolutas y porcentuales frente al periodo de comparación y frente al objetivo.

Paso 2. Selección de lo relevante
- Elige como máximo cinco cifras clave. Justifica brevemente por qué esas y no otras.
- Descarta métricas de vanidad que no influyen en la decisión.

Paso 3. Mensaje principal
- Redacta un titular de una sola frase que resuma la situación con una cifra concreta. Ejemplo de forma: "Las ventas crecen un [X] % pero el margen cae [Y] puntos por [CAUSA]".

Paso 4. Explicación
- Explica las dos o tres causas principales de los resultados, apoyadas en los datos.
- Distingue entre causas demostradas por los datos y causas probables que hay que confirmar.

Paso 5. Recomendaciones
- Propón entre dos y cuatro acciones concretas, cada una con responsable sugerido, plazo e impacto esperado.
- Indica los riesgos de no actuar.

formato de salida:
El informe debe caber en una página y seguir esta estructura:
1. Titular.
2. Tres o cinco indicadores en una tabla con columnas: indicador, valor actual, comparación, variación, estado (en línea, en riesgo, fuera de objetivo).
3. Qué ha pasado: tres viñetas como máximo.
4. Por qué: tres viñetas como máximo.
5. Qué proponemos: acciones con responsable y plazo.
6. Decisión que pedimos hoy, en una frase.

Después del informe, fuera de la página, añade:
- Las incoherencias detectadas en los datos.
- Una propuesta de gráfico único que acompañe al informe, indicando tipo de gráfico, ejes y qué debe destacar.
- Una versión en tres líneas para enviar por correo o chat.

restricciones:
- Nada de jerga técnica innecesaria ni frases vacías como "seguimos trabajando para mejorar".
- Cada afirmación debe estar respaldada por una cifra de los datos.
- Si los datos no permiten responder al porqué, dilo y sugiere qué información falta.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Preparar el informe mensual o trimestral para dirección a partir de exportaciones de datos sin tener que maquetar presentaciones largas.',
                'vote_score'        => 76,
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
