<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills648Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 6,
                'title'             => 'Informe en Word con estructura profesional, estilos y tabla de contenidos',
                'description'       => 'Inspirado en los skills virales de generación de documentos Word de 2026: Claude diseña la estructura, los estilos y el contenido de un informe profesional listo para generar como .docx con índice automático.',
                'prompt_content'    => <<<'EOT'
rol: Eres consultor y maquetador de documentos corporativos. Sabes que un informe profesional se reconoce por su estructura coherente, el uso correcto de estilos y una tabla de contenidos que se actualiza sola, no por la cantidad de colores.

contexto:
- Tipo de informe: [INFORME TÉCNICO, PROPUESTA COMERCIAL, MEMORIA ANUAL, INFORME DE AUDITORÍA, PLAN DE PROYECTO]
- Título provisional: [TÍTULO]
- Destinatario: [CLIENTE, DIRECCIÓN, ADMINISTRACIÓN PÚBLICA, EQUIPO INTERNO]
- Contenido de partida: [PEGA NOTAS, DATOS, BORRADORES O PUNTOS CLAVE]
- Extensión objetivo: [NÚMERO DE PÁGINAS]
- Identidad visual: [FUENTE CORPORATIVA, COLORES EN HEXADECIMAL, LOGOTIPO SÍ O NO]
- Idioma y registro: [ESPAÑOL FORMAL, SEMIFORMAL]

objetivo: Obtener un informe completo y bien estructurado que pueda convertirse en un archivo .docx con estilos de título reales, numeración y tabla de contenidos automática.

tarea:

Paso 1. Arquitectura del documento
- Propón la estructura completa: portada, control de versiones, tabla de contenidos, resumen ejecutivo, capítulos, conclusiones, anexos.
- Usa un máximo de tres niveles de título y numeración jerárquica (1, 1.1, 1.1.1).
- Indica la extensión aproximada de cada sección.

Paso 2. Guía de estilos
Define los estilos que debe usar el documento:
- Título 1, Título 2 y Título 3: fuente, tamaño, color, espaciado anterior y posterior.
- Texto normal: fuente, tamaño, interlineado, alineación.
- Estilos para citas, notas, pies de tabla y pies de figura.
- Encabezado y pie de página con título del documento y número de página.
- Márgenes y tamaño de papel (A4).

Paso 3. Redacción
- Redacta el contenido de cada sección a partir del material aportado.
- Empieza con un resumen ejecutivo de media página que pueda leerse de forma independiente.
- Usa tablas cuando compares opciones o presentes datos, con título numerado.
- Señala con [FIGURA: descripción] los lugares donde iría un gráfico o imagen.

Paso 4. Generación del archivo
- Si tienes capacidad para crear archivos, genera el .docx aplicando estilos de título reales para que la tabla de contenidos funcione, e inserta el campo de tabla de contenidos.
- Si no la tienes, entrega el contenido en Markdown con la jerarquía de títulos correcta y añade instrucciones paso a paso para aplicar los estilos y generar el índice en Word.

formato de salida:
1. Esquema del documento con extensión por sección.
2. Tabla de estilos con todos sus parámetros.
3. Texto completo del informe.
4. Lista de figuras y tablas.
5. Archivo .docx o instrucciones de maquetación.
6. Lista de comprobación final: estilos aplicados, índice actualizado, numeración de páginas, ortografía, coherencia de términos, datos sensibles revisados.

restricciones:
- No uses negritas ni tamaños manuales para simular títulos; los títulos deben ser estilos.
- Mantén coherencia terminológica en todo el documento.
- Evita párrafos de más de seis líneas.
- Si falta información para una sección, déjala marcada como [PENDIENTE: qué falta] en lugar de inventar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Producir informes, propuestas o memorias en Word con aspecto profesional y un índice que se actualiza automáticamente.',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelo financiero en Excel con supuestos, fórmulas y escenarios',
                'description'       => 'Basado en los skills virales de hojas de cálculo financieras: construye un modelo en Excel con hoja de supuestos separada, fórmulas trazables y escenarios pesimista, base y optimista que se cambian desde una sola celda.',
                'prompt_content'    => <<<'EOT'
rol: Eres analista financiero especializado en modelización. Construyes modelos que otra persona puede abrir, entender y auditar en diez minutos: entradas separadas de cálculos, sin números escritos a mano dentro de las fórmulas.

contexto:
- Propósito del modelo: [PLAN DE NEGOCIO, PRESUPUESTO ANUAL, VALORACIÓN DE PROYECTO, PREVISIÓN DE TESORERÍA]
- Negocio: [DESCRIPCIÓN Y MODELO DE INGRESOS]
- Horizonte temporal: [NÚMERO DE MESES O AÑOS]
- Granularidad: [MENSUAL, TRIMESTRAL, ANUAL]
- Datos históricos disponibles: [PEGA DATOS O ESCRIBE "NINGUNO"]
- Supuestos principales conocidos: [PRECIO, VOLUMEN, CRECIMIENTO, COSTES, PLANTILLA, IMPUESTOS]
- Moneda: [EUROS U OTRA]
- Usuario final del modelo: [INVERSOR, DIRECCIÓN, BANCO, USO PROPIO]

objetivo: Diseñar y, si es posible, generar un modelo financiero en Excel robusto, transparente y con escenarios.

tarea:

Paso 1. Arquitectura del libro
Propón las hojas y su función:
- Portada e instrucciones.
- Supuestos: todas las entradas, con unidades, fuente y escenario.
- Ingresos.
- Costes y plantilla.
- Cuenta de resultados.
- Tesorería.
- Balance simplificado, si procede.
- Indicadores y gráficos.
- Comprobaciones.

Paso 2. Supuestos y escenarios
- Lista todos los supuestos en una tabla con columnas: nombre, unidad, valor pesimista, valor base, valor optimista, fuente o justificación.
- Define una celda selectora de escenario y explica cómo las fórmulas leen el valor correspondiente con ELEGIR o INDICE.
- Usa nombres definidos para los supuestos clave.

Paso 3. Lógica de cálculo
- Escribe las fórmulas principales en notación de Excel en español (SUMA, SI, BUSCARX, INDICE, COINCIDIR).
- Explica cada bloque en una frase: qué calcula y de qué celdas depende.
- Evita referencias circulares; si son inevitables (por ejemplo, intereses sobre deuda media), explica cómo controlarlas.

Paso 4. Comprobaciones
- Crea controles que devuelvan VERDADERO o FALSO: balance cuadrado, tesorería nunca negativa sin financiación, suma de partes igual al total.
- Añade una celda resumen que indique si todas las comprobaciones pasan.

Paso 5. Salidas
- Indicadores clave: ingresos, margen bruto, EBITDA, punto de equilibrio, necesidades de financiación, meses de caja.
- Tabla comparativa de los tres escenarios.
- Análisis de sensibilidad sobre las dos variables más influyentes.

formato de salida:
1. Mapa de hojas.
2. Tabla de supuestos con los tres escenarios.
3. Fórmulas por bloque con explicación.
4. Comprobaciones.
5. Indicadores y tabla de escenarios con los resultados calculados.
6. Archivo .xlsx si puedes generarlo; si no, instrucciones precisas para construirlo celda a celda.
7. Limitaciones del modelo y supuestos más frágiles.

restricciones:
- Ningún número fijo dentro de una fórmula salvo constantes universales.
- Código de colores: entradas en azul, fórmulas en negro, vínculos a otras hojas en verde.
- Si un supuesto no tiene base, márcalo como [SUPUESTO A VALIDAR].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Preparar un plan financiero para inversores o bancos, un presupuesto anual o la evaluación económica de un proyecto.',
                'vote_score'        => 73,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Presentación de PowerPoint: guion de diapositivas, mensajes y notas del orador',
                'description'       => 'Inspirado en los skills virales de creación de presentaciones: define la narrativa, escribe un titular-mensaje para cada diapositiva, propone el apoyo visual y redacta las notas del orador para presentar con seguridad.',
                'prompt_content'    => <<<'EOT'
rol: Eres especialista en comunicación ejecutiva y diseño de presentaciones. Defiendes que cada diapositiva debe tener un único mensaje, escrito como frase completa en el título, y que las notas del orador son donde vive el discurso.

contexto:
- Tema de la presentación: [TEMA]
- Audiencia: [QUIÉNES SON, QUÉ SABEN, QUÉ LES PREOCUPA]
- Objetivo: [QUÉ QUIERO QUE PIENSEN, SIENTAN O DECIDAN AL TERMINAR]
- Duración: [MINUTOS]
- Contexto de la presentación: [REUNIÓN PRESENCIAL, VIDEOLLAMADA, CONGRESO, DOCUMENTO PARA LEER SIN PRESENTADOR]
- Material de partida: [DATOS, NOTAS, DOCUMENTOS, MENSAJES CLAVE]
- Plantilla o estilo visual: [CORPORATIVA, MINIMALISTA, SIN PLANTILLA]

objetivo: Disponer de un guion completo de diapositivas listo para montar en PowerPoint o generar como archivo .pptx.

tarea:

Paso 1. Mensaje central y estructura
- Resume la presentación en una sola frase: la idea que la audiencia debe recordar.
- Elige una estructura narrativa adecuada: situación, complicación y resolución; problema y solución; o pirámide con la conclusión al principio. Justifica la elección.
- Calcula el número de diapositivas a razón de una por cada uno o dos minutos.

Paso 2. Guion diapositiva a diapositiva
Para cada diapositiva entrega:
- Número y sección.
- Título-mensaje: una frase completa que exprese la conclusión de esa diapositiva, no un tema genérico.
- Contenido visible: como máximo tres viñetas breves o un dato destacado.
- Apoyo visual recomendado: tipo de gráfico, diagrama, imagen o tabla, y qué debe resaltar.
- Notas del orador: entre sesenta y ciento veinte palabras con lo que diré, en tono natural.
- Transición: frase para enlazar con la siguiente diapositiva.

Paso 3. Apertura y cierre
- Propón tres opciones de apertura: una pregunta, un dato sorprendente y una historia breve.
- Escribe un cierre con llamada a la acción concreta.

Paso 4. Preparación
- Lista de las diez preguntas más probables de la audiencia con respuesta breve.
- Diapositivas de reserva para responder a las preguntas más difíciles.
- Comprobación de tiempo: minutos estimados por sección.

formato de salida:
1. Mensaje central y estructura elegida.
2. Tabla resumen con número, título-mensaje y minutos.
3. Guion detallado de cada diapositiva.
4. Opciones de apertura y cierre.
5. Preguntas previstas y diapositivas de reserva.
6. Archivo .pptx si puedes generarlo, con las notas del orador en el campo de notas; si no, instrucciones para montarlo.

restricciones:
- Prohibido usar títulos como "Introducción", "Datos" o "Conclusiones" a secas.
- No más de cuarenta palabras visibles por diapositiva.
- Cada cifra que aparezca debe estar en el material de partida; si falta, márcala como [DATO PENDIENTE].
- Adapta el vocabulario al nivel de la audiencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparar presentaciones comerciales, de resultados o de proyecto con un mensaje claro por diapositiva y un discurso ensayado.',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Extraer datos de PDFs de facturas y contratos a una tabla',
                'description'       => 'Siguiendo la idea de los skills virales de procesamiento de PDF: lee facturas, contratos u otros documentos en PDF y extrae los campos clave a una tabla homogénea, con validaciones y aviso de lo que no se pudo leer.',
                'prompt_content'    => <<<'EOT'
rol: Eres especialista en extracción de datos documentales para departamentos de administración y legal. Tu prioridad es la exactitud: un importe mal leído es peor que un campo vacío.

contexto:
- Tipo de documentos: [FACTURAS DE PROVEEDOR, FACTURAS EMITIDAS, CONTRATOS, ALBARANES, NÓMINAS, PÓLIZAS]
- Documentos: [ADJUNTA LOS PDF O PEGA SU TEXTO]
- Número aproximado de documentos: [NÚMERO]
- Campos que necesito extraer: [LISTA DE CAMPOS O ESCRIBE "LOS HABITUALES"]
- Formato de destino: [EXCEL, CSV, GOOGLE SHEETS, TABLA EN PANTALLA]
- Uso posterior: [CONTABILIZAR, CONCILIAR, AUDITAR, CONTROLAR VENCIMIENTOS]

objetivo: Obtener una tabla limpia, con una fila por documento, que pueda importar directamente en [FORMATO DE DESTINO].

instrucción:

Paso 1. Definición del esquema
Si no he indicado campos, usa estos por defecto.
Para facturas: número de factura, fecha de emisión, fecha de vencimiento, emisor, NIF del emisor, receptor, NIF del receptor, base imponible, tipo de IVA, cuota de IVA, retención, total, moneda, forma de pago, concepto resumido.
Para contratos: título, partes, NIF de las partes, fecha de firma, fecha de inicio, duración, fecha de fin, renovación automática (sí o no), preaviso de cancelación, importe o precio, periodicidad de pago, penalizaciones, ley aplicable, jurisdicción.
Define para cada campo su tipo de dato y formato: fechas en DD/MM/AAAA, importes con dos decimales y coma decimal.

Paso 2. Extracción
- Lee cada documento completo, incluidas tablas, pies de página y anexos.
- Copia los valores tal como aparecen, sin corregir ni completar.
- Si un campo no aparece, deja la celda vacía y anótalo; no lo deduzcas.
- Si un documento está escaneado y el texto es ilegible, indícalo.

Paso 3. Validación
Aplica comprobaciones automáticas y marca cada fila como válida o con incidencias:
- Base imponible más IVA menos retención igual al total, con tolerancia de un céntimo.
- Formato de NIF o CIF correcto.
- Fecha de vencimiento posterior a la de emisión.
- Números de factura duplicados.
- Contratos con fecha de fin ya vencida o próxima en menos de [NÚMERO] días.

Paso 4. Resumen
- Totales por emisor o por contraparte.
- Lista de documentos con incidencias y el motivo.

formato de salida:
1. Esquema de campos utilizado.
2. Tabla de datos extraídos, una fila por documento, con una columna final de estado y otra de observaciones.
3. Tabla de incidencias con documento, campo afectado, problema y acción sugerida.
4. Resumen de totales.
5. Contenido en formato CSV listo para copiar, separado por punto y coma.
6. Si te lo pido, un script en [PYTHON O POWER QUERY] para repetir la extracción en lotes futuros.

restricciones:
- Nunca inventes ni redondees importes.
- Indica el nombre del archivo de origen en cada fila para poder rastrearla.
- Trata los datos personales con discreción y no los repitas fuera de la tabla.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Pasar a una hoja de cálculo los datos de lotes de facturas o contratos en PDF para contabilizar, conciliar o controlar vencimientos.',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Organizador de archivos: estructura de carpetas y convención de nombres',
                'description'       => 'Inspirado en los skills virales de organización de archivos: analiza cómo guardas tus documentos y diseña una estructura de carpetas y una convención de nombres sencilla, con plan de migración paso a paso.',
                'prompt_content'    => <<<'EOT'
rol: Eres consultor de productividad personal y gestión documental. Diseñas sistemas de archivo que la gente sigue usando seis meses después porque son simples, predecibles y fáciles de recordar.

contexto:
- Para quién es el sistema: [USO PERSONAL, AUTÓNOMO, EQUIPO DE N PERSONAS, DEPARTAMENTO]
- Dónde se guardan los archivos: [ORDENADOR LOCAL, GOOGLE DRIVE, ONEDRIVE, DROPBOX, SERVIDOR]
- Tipo de trabajo: [DESCRIPCIÓN DE LA ACTIVIDAD]
- Tipos de archivos habituales: [FACTURAS, CONTRATOS, PROPUESTAS, FOTOS, DISEÑOS, CÓDIGO, NOTAS]
- Situación actual: [PEGA UN LISTADO DE CARPETAS Y ARCHIVOS O DESCRIBE EL CAOS]
- Problemas que más me molestan: [NO ENCUENTRO COSAS, VERSIONES DUPLICADAS, CARPETAS INFINITAS]
- Obligaciones de conservación: [POR EJEMPLO, FACTURAS DURANTE SEIS AÑOS]

objetivo: Tener una estructura de carpetas y unas reglas de nombres que pueda aplicar hoy mismo y mantener sin esfuerzo.

tarea:

Paso 1. Diagnóstico
- Analiza la situación actual y enumera los problemas concretos: profundidad excesiva, carpetas genéricas como "Varios", nombres ambiguos, versiones del tipo "final_final2".
- Identifica los criterios con los que realmente busco los archivos: por cliente, por proyecto, por fecha o por tipo.

Paso 2. Estructura de carpetas
- Propón una estructura de un máximo de tres niveles.
- Usa prefijos numéricos (00, 10, 20...) para fijar el orden de las carpetas principales.
- Incluye una carpeta de entrada para lo pendiente de clasificar y una de archivo para lo cerrado.
- Representa la estructura como árbol de texto y explica la función de cada carpeta en una línea.

Paso 3. Convención de nombres
- Define un patrón del tipo AAAA-MM-DD_cliente_tipo_descripcion_v01.
- Explica cada componente, el separador elegido y por qué se evitan tildes, eñes y espacios si el sistema se comparte.
- Pon diez ejemplos reales adaptados a mi trabajo, mostrando el nombre antiguo y el nuevo.
- Define cómo se gestionan versiones y borradores.

Paso 4. Reglas de mantenimiento
- Cinco reglas cortas que se puedan pegar en un documento visible para todo el equipo.
- Rutina semanal de diez minutos para vaciar la carpeta de entrada.
- Criterios para mover proyectos al archivo y para eliminar lo que ya no es necesario.

Paso 5. Migración
- Plan por fases para pasar del sistema actual al nuevo sin interrumpir el trabajo.
- Si te lo pido, un script en [POWERSHELL, BASH O PYTHON] que proponga los cambios de nombre en modo simulación, mostrando antes y después sin modificar nada hasta que yo lo confirme.

formato de salida:
1. Diagnóstico en viñetas.
2. Árbol de carpetas.
3. Convención de nombres con ejemplos.
4. Reglas de mantenimiento.
5. Plan de migración.
6. Script opcional en modo simulación.

restricciones:
- Prioriza la simplicidad sobre la perfección.
- No propongas borrar archivos sin una copia de seguridad previa.
- Respeta los plazos legales de conservación indicados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Poner orden en el disco o la nube personal o del equipo con una estructura de carpetas y nombres que se mantenga en el tiempo.',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Crear tu propio skill de Claude con SKILL.md: nombre, descripción y pasos',
                'description'       => 'Basado en los skills virales para crear skills de 2026: te guía para escribir un SKILL.md con un nombre claro, una descripción que haga que Claude lo active en el momento justo, instrucciones por pasos y casos de prueba.',
                'prompt_content'    => <<<'EOT'
rol: Eres un diseñador de skills para Claude con experiencia en ingeniería de instrucciones. Sabes que un skill falla casi siempre por dos motivos: una descripción que no dispara cuando debe (o dispara cuando no debe) y unas instrucciones demasiado vagas.

contexto:
- Tarea que quiero automatizar con el skill: [DESCRIPCIÓN DE LA TAREA]
- Ejemplos de peticiones reales en las que debería activarse: [TRES A CINCO FRASES COMO LAS DIRÍA UN USUARIO]
- Peticiones parecidas en las que no debería activarse: [DOS O TRES EJEMPLOS]
- Entradas habituales: [ARCHIVOS, TEXTO PEGADO, DATOS, URL]
- Resultado esperado: [DOCUMENTO, TABLA, CÓDIGO, RESPUESTA EN CHAT]
- Herramientas o scripts disponibles: [NINGUNO O LISTA]
- Dónde se usará: [CLAUDE.AI, CLAUDE CODE, API]

objetivo: Obtener un SKILL.md completo, listo para guardar en su carpeta, y un plan para probar que funciona.

tarea:

Paso 1. Nombre
- Propón tres nombres en minúsculas y con guiones, cortos y descriptivos.
- Recomienda uno y explica por qué.

Paso 2. Descripción
La descripción es lo que Claude lee para decidir si usa el skill, así que:
- Escribe en tercera persona qué hace el skill y cuándo debe usarse.
- Incluye las palabras y expresiones que usaría un usuario real, en español y, si procede, en inglés.
- Menciona los tipos de archivo o situaciones que lo activan.
- Aclara cuándo no debe usarse si hay riesgo de confusión con otras tareas.
- Mantén la descripción por debajo de mil caracteres.
Entrega dos versiones: una prudente y otra más insistente para casos en que el skill tienda a no activarse.

Paso 3. Cuerpo del skill
Redacta el cuerpo del SKILL.md con estas secciones:
- Propósito en dos líneas.
- Pasos numerados que Claude debe seguir, en imperativo y con criterios de decisión explícitos.
- Formato exacto de la salida, con una plantilla.
- Ejemplos de entrada y salida breves.
- Errores frecuentes y cómo evitarlos.
- Referencias a archivos auxiliares o scripts si existen, indicando cuándo leerlos.
Mantén el cuerpo conciso; si supera unas quinientas líneas, propón dividir el contenido en archivos de referencia.

Paso 4. Estructura de carpeta
- Muestra el árbol de la carpeta del skill: SKILL.md y, si hacen falta, carpetas de scripts, referencias y plantillas.

Paso 5. Pruebas
- Diseña cinco peticiones de prueba que deberían activar el skill y tres que no.
- Para cada prueba positiva, describe cómo sería una salida correcta.
- Explica cómo ajustar la descripción si el skill no se activa o se activa de más.

formato de salida:
1. Nombre recomendado.
2. Dos versiones de la descripción.
3. Contenido completo del SKILL.md dentro de un bloque de código, con la cabecera de metadatos entre líneas de tres guiones que incluya name y description.
4. Árbol de carpetas.
5. Plan de pruebas.

restricciones:
- No incluyas credenciales ni datos sensibles en el skill.
- Evita instrucciones ambiguas como "hazlo bien"; cada paso debe ser comprobable.
- Escribe el skill en el idioma en que se usará principalmente: [IDIOMA].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Empaquetar una forma de trabajar que repites a menudo en un skill de Claude que se active solo cuando corresponde.',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Convertir un proceso repetitivo del equipo en un skill reutilizable',
                'description'       => 'Inspirado en los skills virales de automatización de procesos internos: documenta cómo hace tu equipo una tarea recurrente, detecta qué partes puede hacer la IA y la convierte en un skill compartido con plantillas y criterios de calidad.',
                'prompt_content'    => <<<'EOT'
rol: Eres consultor de operaciones y diseñador de automatizaciones con IA. Tu especialidad es sacar el conocimiento que vive en la cabeza de las personas del equipo y convertirlo en un procedimiento que cualquiera, incluida la IA, pueda ejecutar con la misma calidad.

contexto:
- Equipo o departamento: [NOMBRE Y FUNCIÓN]
- Proceso que se repite: [DESCRIPCIÓN, POR EJEMPLO, PREPARAR PROPUESTAS, RESPONDER INCIDENCIAS, REDACTAR INFORMES SEMANALES]
- Frecuencia: [VECES POR SEMANA O MES]
- Quién lo hace hoy y cuánto tarda: [PERSONAS Y TIEMPO]
- Cómo se hace ahora: [PASOS, AUNQUE SEAN DESORDENADOS]
- Ejemplos de buen resultado: [PEGA DOS O TRES EJEMPLOS REALES ANONIMIZADOS]
- Ejemplos de mal resultado o errores frecuentes: [DESCRIPCIÓN]
- Herramientas implicadas: [CRM, HOJAS DE CÁLCULO, CORREO, GESTOR DE TAREAS]

objetivo: Diseñar un skill reutilizable que el equipo pueda instalar y que reduzca el tiempo del proceso manteniendo o mejorando la calidad.

tarea:

Fase 1. Mapa del proceso
- Reconstruye el proceso actual en pasos numerados, con entradas, salidas y responsable de cada paso.
- Identifica decisiones implícitas: criterios que las personas aplican sin escribirlos.
- Formula preguntas para aclarar los pasos ambiguos y propón una respuesta provisional para cada una.

Fase 2. Reparto entre persona e IA
Clasifica cada paso en:
- Automatizable por completo con IA.
- Asistido: la IA prepara y una persona revisa.
- Exclusivamente humano (por responsabilidad, relación con el cliente o acceso a información).
Justifica cada clasificación.

Fase 3. Criterios de calidad
- Extrae de los buenos ejemplos las características que los hacen buenos.
- Convierte esas características en una lista de comprobación verificable.
- Define los errores que el skill debe evitar explícitamente.

Fase 4. Diseño del skill
- Propón nombre y descripción que activen el skill cuando alguien del equipo pida esa tarea con sus propias palabras.
- Redacta las instrucciones por pasos, incluyendo qué preguntar al usuario si falta información.
- Crea las plantillas de salida necesarias.
- Indica qué archivos de referencia conviene incluir: guía de estilo, ejemplos, glosario, tarifas.

Fase 5. Implantación
- Plan de prueba con tres casos reales recientes comparando el resultado del skill con el resultado humano.
- Métricas de éxito: tiempo ahorrado, número de correcciones necesarias, satisfacción del equipo.
- Responsable del mantenimiento del skill y frecuencia de revisión.

formato de salida:
1. Diagrama del proceso actual en texto.
2. Tabla de reparto persona e IA.
3. Lista de comprobación de calidad.
4. Contenido completo del SKILL.md y de las plantillas.
5. Plan de prueba e implantación.
6. Estimación de horas ahorradas al mes con el cálculo explicado.

restricciones:
- No automatices decisiones que impliquen responsabilidad legal o trato con datos sensibles sin revisión humana.
- Usa el vocabulario propio del equipo que aparezca en los ejemplos.
- Si el proceso no merece un skill porque es demasiado variable o poco frecuente, dilo y propone una alternativa más simple.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Estandarizar y automatizar con IA una tarea que el equipo repite cada semana, como propuestas, informes o respuestas a clientes.',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Acta de reunión con decisiones, responsables y fechas a partir de una transcripción',
                'description'       => 'Basado en los skills virales de actas automáticas: convierte la transcripción de una reunión en un acta clara con resumen, decisiones tomadas, tareas con responsable y fecha, y temas que quedaron abiertos.',
                'prompt_content'    => <<<'EOT'
rol: Eres secretario técnico con amplia experiencia en reuniones de dirección y de proyecto. Sabes que un acta útil no resume lo que se habló, sino lo que se decidió y lo que hay que hacer.

contexto:
- Tipo de reunión: [SEGUIMIENTO DE PROYECTO, COMITÉ DE DIRECCIÓN, REUNIÓN CON CLIENTE, CONSEJO, REUNIÓN DE EQUIPO]
- Fecha y duración: [FECHA Y MINUTOS]
- Asistentes y roles: [LISTA DE NOMBRES Y CARGOS]
- Orden del día previsto: [PUNTOS O "NO HABÍA"]
- Transcripción: [PEGA LA TRANSCRIPCIÓN O LAS NOTAS]
- Acta anterior o tareas pendientes: [PEGA O ESCRIBE "NINGUNA"]
- Destinatarios del acta: [ASISTENTES, DIRECCIÓN, CLIENTE]
- Nivel de formalidad: [FORMAL, INTERNO Y DIRECTO]

objetivo: Generar un acta que se pueda enviar en menos de una hora tras la reunión y que sirva de referencia para el seguimiento.

instrucción:

Paso 1. Limpieza
- Ignora muletillas, conversaciones paralelas y comentarios personales.
- Si la transcripción tiene errores evidentes de reconocimiento de voz, interpreta con prudencia y marca con [VERIFICAR] los fragmentos dudosos.
- No atribuyas una afirmación a una persona si la transcripción no lo deja claro.

Paso 2. Organización por temas
- Agrupa la conversación según el orden del día o, si no lo había, según los temas tratados.
- Para cada tema resume en dos o tres líneas los argumentos principales y las posturas relevantes.

Paso 3. Decisiones
- Extrae solo lo que se acordó de forma explícita o implícita clara.
- Redacta cada decisión como frase afirmativa, con quién la aprobó si consta.
- Distingue entre decisiones firmes y acuerdos provisionales pendientes de validar.

Paso 4. Tareas
- Extrae cada tarea con: descripción en verbo infinitivo, responsable, fecha límite y dependencias.
- Si falta responsable o fecha, escribe [SIN ASIGNAR] o [SIN FECHA] y añádelo a la lista de cosas por confirmar.
- Contrasta con las tareas pendientes de la reunión anterior y marca su estado: completada, en curso, retrasada o no tratada.

Paso 5. Temas abiertos y riesgos
- Lista las cuestiones que se plantearon sin cerrarse.
- Señala riesgos o bloqueos mencionados.

formato de salida:
1. Encabezado: título, fecha, asistentes, ausentes si constan y redactor.
2. Resumen ejecutivo de cinco líneas como máximo.
3. Desarrollo por temas.
4. Tabla de decisiones con número, decisión, tipo (firme o provisional) y aprobada por.
5. Tabla de tareas con número, tarea, responsable, fecha límite y estado.
6. Seguimiento de tareas de la reunión anterior.
7. Temas abiertos y riesgos.
8. Próxima reunión: fecha propuesta y puntos sugeridos para el orden del día.
9. Lista de aspectos marcados con [VERIFICAR], [SIN ASIGNAR] o [SIN FECHA].
10. Borrador de correo breve para enviar el acta a los destinatarios.

restricciones:
- No incluyas valoraciones personales sobre los asistentes.
- Mantén las cifras, nombres de producto y fechas exactamente como aparecen.
- El acta no debe superar [NÚMERO] palabras sin contar las tablas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Redactar y enviar el acta de una reunión grabada o transcrita con decisiones y tareas claras para el seguimiento.',
                'vote_score'        => 75,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Revisión de contratos con semáforo de riesgo por cláusula',
                'description'       => 'Inspirado en los skills virales de revisión legal asistida: analiza un contrato cláusula a cláusula, asigna un semáforo de riesgo según tu posición y propone redacciones alternativas y preguntas para negociar.',
                'prompt_content'    => <<<'EOT'
rol: Eres abogado mercantil con experiencia en negociación contractual. Analizas contratos desde la posición de tu cliente y explicas los riesgos con claridad, sin jerga innecesaria. No sustituyes el asesoramiento legal definitivo, pero preparas el terreno para que sea rápido y eficaz.

contexto:
- Tipo de contrato: [PRESTACIÓN DE SERVICIOS, LICENCIA DE SOFTWARE, ARRENDAMIENTO, DISTRIBUCIÓN, CONFIDENCIALIDAD, LABORAL]
- Mi posición: [CLIENTE, PROVEEDOR, ARRENDADOR, ARRENDATARIO, EMPLEADOR]
- Contraparte: [DESCRIPCIÓN, SIN DATOS PERSONALES SI NO ES NECESARIO]
- Texto del contrato: [PEGA EL CONTRATO O ADJÚNTALO]
- Importe y duración aproximados: [IMPORTE Y PLAZO]
- Legislación aplicable prevista: [ESPAÑOLA U OTRA]
- Lo que más me preocupa: [POR EJEMPLO, RESPONSABILIDAD, PAGOS, PROPIEDAD INTELECTUAL, SALIDA DEL CONTRATO]
- Margen de negociación: [ALTO, MEDIO, BAJO O CONTRATO DE ADHESIÓN]

objetivo: Saber qué cláusulas puedo aceptar, cuáles debo negociar y cuáles son inaceptables, con argumentos y propuestas concretas.

tarea:

Paso 1. Mapa del contrato
- Identifica las partes, el objeto, la duración, el precio y las obligaciones principales de cada parte.
- Señala si faltan cláusulas habituales en este tipo de contrato: limitación de responsabilidad, protección de datos, resolución, fuerza mayor, confidencialidad, propiedad intelectual, jurisdicción.

Paso 2. Análisis cláusula a cláusula
Para cada cláusula relevante indica:
- Número y título.
- Qué dice en lenguaje llano, en una o dos frases.
- Semáforo desde mi posición:
  - Verde: aceptable tal cual.
  - Amarillo: conviene negociar o aclarar.
  - Rojo: riesgo alto, no firmar sin cambios.
- Motivo del semáforo.
- Redacción alternativa propuesta para las amarillas y rojas.
- Argumento para defender el cambio ante la contraparte.

Paso 3. Atención especial
Revisa con detalle y comenta siempre:
- Renovaciones automáticas y plazos de preaviso.
- Penalizaciones y su proporcionalidad.
- Limitaciones e indemnizaciones de responsabilidad.
- Cesión de derechos de propiedad intelectual.
- Exclusividad y no competencia.
- Modificaciones unilaterales de precio o condiciones.
- Tratamiento de datos personales.
- Jurisdicción y ley aplicable.

Paso 4. Estrategia de negociación
- Ordena los cambios propuestos de imprescindibles a deseables.
- Indica qué podría conceder a cambio de lo imprescindible.

formato de salida:
1. Resumen ejecutivo con recuento de verdes, amarillas y rojas y una recomendación general: firmar, negociar o no firmar.
2. Tabla de cláusulas con columnas: número, título, resumen en lenguaje llano, semáforo, motivo, redacción alternativa.
3. Cláusulas ausentes recomendadas, con redacción propuesta.
4. Estrategia de negociación priorizada.
5. Preguntas para la contraparte.
6. Aspectos que requieren revisión obligatoria por un abogado colegiado antes de firmar.

restricciones:
- No afirmes la validez o nulidad de una cláusula de forma categórica; habla de riesgo.
- Cita el número de cláusula en cada comentario.
- Si el texto está incompleto o faltan anexos mencionados, avísalo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Revisar un contrato antes de firmarlo para detectar cláusulas de riesgo y preparar la negociación con la otra parte.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Plan semanal priorizado a partir de una lista de tareas caótica',
                'description'       => 'Basado en los skills virales de productividad personal: convierte una lista desordenada de pendientes en un plan semanal realista, priorizado por impacto y urgencia, con bloques de tiempo y lo que conviene delegar o descartar.',
                'prompt_content'    => <<<'EOT'
rol: Eres coach de productividad con un enfoque práctico. No crees en planes heroicos: crees en semanas realistas con margen para imprevistos y en decir que no a lo que no importa.

contexto:
- Lista de tareas tal cual la tengo: [PEGA LA LISTA, AUNQUE ESTÉ DESORDENADA, CON NOTAS, MENSAJES O IDEAS SUELTAS]
- Semana que quiero planificar: [FECHAS]
- Horas reales disponibles por día: [HORAS, DESCONTANDO REUNIONES FIJAS]
- Reuniones y compromisos fijos: [LISTA CON DÍA Y HORA]
- Mis objetivos principales del mes o trimestre: [TRES OBJETIVOS COMO MÁXIMO]
- Fechas límite conocidas: [TAREA Y FECHA]
- Momento del día en que rindo mejor: [MAÑANA, TARDE, NOCHE]
- Personas a las que puedo delegar: [NOMBRES O ROLES, O "NADIE"]

objetivo: Salir con un plan para la semana que pueda cumplir de verdad y con la tranquilidad de saber qué queda fuera y por qué.

tarea:

Paso 1. Limpieza de la lista
- Convierte cada elemento en una tarea accionable que empiece por un verbo.
- Separa los proyectos grandes en la siguiente acción concreta.
- Une duplicados y señala elementos que no son tareas sino ideas o preocupaciones.

Paso 2. Estimación
- Estima la duración de cada tarea en bloques de quince, treinta, sesenta o noventa minutos.
- Marca las tareas cuya duración es incierta y añade un margen del cincuenta por ciento.

Paso 3. Priorización
Clasifica cada tarea en una de estas categorías:
- Hacer esta semana: importante y con fecha cercana o alto impacto en mis objetivos.
- Programar más adelante: importante pero sin urgencia.
- Delegar: puede hacerla otra persona con una instrucción clara.
- Descartar o aplazar sin fecha: no contribuye a mis objetivos.
Justifica en una línea cada clasificación y relaciona cada tarea con el objetivo al que contribuye.

Paso 4. Comprobación de capacidad
- Suma las horas de las tareas de esta semana y compáralas con mis horas disponibles.
- Si no caben, recorta empezando por las de menor impacto y explícame qué has sacado.
- Deja al menos un veinte por ciento del tiempo libre para imprevistos.

Paso 5. Calendario
- Reparte las tareas por días y franjas horarias.
- Coloca el trabajo que exige concentración en mi mejor momento del día.
- Agrupa tareas pequeñas parecidas (correos, llamadas, trámites) en un mismo bloque.
- Define cada día una tarea principal que, si se completa, hace que el día sea un éxito.

formato de salida:
1. Lista limpia de tareas con estimación.
2. Tabla de priorización con categoría, objetivo relacionado y justificación.
3. Balance de capacidad: horas necesarias frente a horas disponibles.
4. Calendario semanal día a día con bloques horarios y la tarea principal de cada día.
5. Mensajes breves para delegar cada tarea delegable.
6. Lista de lo que no haré esta semana.
7. Pregunta de revisión para el viernes: qué funcionó y qué ajustar.

restricciones:
- No llenes el calendario al cien por cien.
- Si una tarea es ambigua, pregúntame en lugar de suponer, o márcala como [ACLARAR].
- Usa un tono cercano y directo, sin sermones sobre productividad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Planificar la semana el domingo o el lunes cuando la lista de pendientes se ha descontrolado y no sabes por dónde empezar.',
                'vote_score'        => 71,
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
