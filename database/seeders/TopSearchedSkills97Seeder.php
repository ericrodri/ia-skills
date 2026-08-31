<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills97Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 8,
                'title'            => 'Cláusulas de IA en contratos con proveedores: datos, entrenamiento y subencargados',
                'description'      => 'Qué hay que pactar cuando un proveedor usa IA con tu información o cuando tú la usas con la de tu cliente: uso de los datos, entrenamiento, subencargados, responsabilidad y salida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado de contratos tecnológicos. Quiero preparar el bloque de cláusulas sobre inteligencia artificial para nuestros contratos, en las dos direcciones: cuando somos cliente y cuando somos proveedor.

Nota: esto produce un borrador de trabajo y una lista de puntos a negociar. La versión final la revisa y firma un profesional habilitado en la jurisdicción aplicable.

## Contexto que necesito

1. ¿Somos cliente, proveedor o los dos según el contrato?
2. Qué servicio se presta y qué datos intervienen: personales, confidenciales, de terceros, código.
3. ¿Hay uso de IA declarado? ¿Cuál, de qué proveedor y en qué parte del servicio?
4. Jurisdicción y ley aplicable habitual en tus contratos.
5. Nivel de negociación posible: contrato de adhesión o negociado.

## Los puntos que hay que cerrar

Para cada uno, dame el objetivo de negociación, la cláusula tipo y qué es aceptable ceder:

| Punto | Qué se pacta |
|---|---|
| Declaración de uso | Si el proveedor usa IA en la prestación, dónde y con qué proveedor subyacente |
| Uso de los datos | Para qué puede usarlos: solo prestar el servicio, o también mejorar el producto |
| Entrenamiento | Prohibición expresa de usar nuestros datos para entrenar modelos, salvo consentimiento escrito |
| Subencargados | Lista, obligación de comunicar altas y derecho a oponerse |
| Ubicación del tratamiento | Dónde se procesa y qué garantías hay si sale del espacio europeo |
| Retención y borrado | Plazos concretos y borrado certificado al terminar |
| Confidencialidad | Extensión expresa al contenido introducido en herramientas de IA |
| Titularidad de resultados | Quién es titular de lo generado y con qué garantías de no infracción |
| Supervisión humana | Compromiso de revisión humana en decisiones relevantes |
| Responsabilidad | Reparto ante errores del sistema, y qué queda excluido |
| Auditoría e información | Derecho a pedir evidencias razonables de cumplimiento |
| Cambios | Notificación previa si cambia el proveedor de IA o el modo de tratamiento |
| Salida | Portabilidad de datos y borrado al finalizar, con plazos y sin coste |

## Las dos versiones

1. **Como cliente:** la versión protectora, con las prohibiciones que de verdad importan y los derechos de información.
2. **Como proveedor:** la versión defendible, que sea cumplible de verdad. Un compromiso que no puedes cumplir es peor que no asumirlo: propón redacciones honestas, con excepciones acotadas.

## Y una advertencia práctica

Cuando el proveedor de IA subyacente es un gran proveedor con condiciones de adhesión, hay cláusulas que no podrás trasladarle. Señálame cuáles son irreales de exigir y qué alternativa cabe: restringir qué datos entran en la herramienta, exigir un plan de empresa concreto, o excluir ese tratamiento del alcance.

## Entregables

1. Tabla de puntos con objetivo de negociación y margen.
2. Bloque de cláusulas en versión cliente.
3. Bloque de cláusulas en versión proveedor.
4. Lista de exigencias irreales y su alternativa práctica.
5. Preguntas a hacer al proveedor antes de firmar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Redactar el bloque contractual sobre uso de IA en contratos con proveedores y clientes, en versión protectora y en versión cumplible',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisar contratos con IA sin comprometer la confidencialidad',
                'description'      => 'El flujo de trabajo que permite acelerar la revisión documental manteniendo el secreto profesional: qué se puede procesar, cómo se anonimiza, qué se verifica siempre y qué queda registrado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado con experiencia en implantación de herramientas en despachos y departamentos legales. Quiero usar IA para acelerar la revisión de contratos sin poner en riesgo la confidencialidad ni la calidad del criterio.

## Contexto que necesito

1. Tipo de documentos: contratos propios, de la parte contraria, expedientes, documentación de operaciones.
2. Herramienta y plan contratado, y qué dicen sus condiciones sobre retención y uso de datos.
3. Volumen: documentos al mes y tamaño típico.
4. Quién revisaría: personas con criterio o perfiles junior.
5. Obligaciones de confidencialidad aplicables y política del cliente, si existe.

## Paso 1 — Qué se puede procesar y qué no

| Categoría | Tratamiento |
|---|---|
| Modelos y plantillas propias sin datos de cliente | Libre |
| Normativa, doctrina y resoluciones públicas | Libre |
| Contratos con datos identificativos de las partes | Solo con herramienta aprobada y con anonimización previa si es posible |
| Documentación de operaciones en curso sujeta a confidencialidad reforzada | Solo con autorización del cliente o entorno cerrado |
| Datos personales sensibles y expedientes con datos de salud o penales | No, salvo entorno controlado con base jurídica clara |

Regla de partida: la obligación de secreto no se delega a un proveedor por el hecho de haber aceptado sus condiciones. Si el cliente no lo ha autorizado, no entra.

## Paso 2 — Anonimización operativa

Procedimiento antes de procesar: sustituir nombres, identificadores fiscales, direcciones e importes singulares por marcadores consistentes (PARTE_A, IMPORTE_1) que permitan trabajar y luego revertir. Explica cómo mantener la trazabilidad de la sustitución para poder devolver el resultado al documento real.

## Paso 3 — Tareas por nivel de utilidad

- **Alta utilidad y bajo riesgo:** resumen de un contrato largo, extracción de plazos y obligaciones a un cuadro, comparación entre dos versiones, detección de cláusulas ausentes respecto a una lista propia, generación de un primer índice de la revisión.
- **Utilidad media, requiere criterio:** valoración de riesgo de una cláusula, propuesta de redacción alternativa, detección de contradicciones internas.
- **No delegable:** interpretación con consecuencias, estrategia, decisión sobre firmar, cualquier conclusión que salga con la firma del despacho sin revisión completa.

## Paso 4 — Verificación obligatoria

Antes de usar cualquier salida:

1. Toda cita normativa o jurisprudencial se comprueba en la fuente oficial. Sin excepciones: la invención de referencias con formato correcto es el fallo más peligroso en este oficio.
2. Toda cifra, plazo y fecha se localiza en el documento original.
3. Toda cláusula «detectada como ausente» se busca a mano en el documento, porque puede estar con otro nombre.
4. La revisión final la firma quien responde del trabajo.

## Paso 5 — Registro y política

Qué se anota por asunto: herramienta usada, tipo de tarea, si hubo anonimización, quién revisó. Y el texto de dos líneas para informar al cliente del uso de herramientas de apoyo, cuando corresponda.

## Entregables

1. Matriz de qué se puede procesar y con qué condiciones.
2. Procedimiento de anonimización con ejemplo.
3. Lista de tareas por nivel, adaptada a mi práctica.
4. Lista de verificación obligatoria previa a usar cualquier salida.
5. Esquema de registro y texto de información al cliente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Definir el flujo de revisión documental asistida por IA en un despacho o departamento legal con anonimización, verificación obligatoria y registro',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Evaluación de impacto en protección de datos para un proyecto con IA',
                'description'      => 'Determina si el proyecto necesita EIPD y, si la necesita, construye el documento: descripción del tratamiento, necesidad y proporcionalidad, riesgos para las personas y medidas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en protección de datos con experiencia en evaluaciones de impacto de proyectos con inteligencia artificial. Tengo un proyecto y quiero saber si hace falta EIPD y, en su caso, producir el borrador.

Nota: esto genera un borrador estructurado y las preguntas que hay que responder. La valoración final y la firma corresponden a quien ejerza la función de delegado de protección de datos o al asesor competente.

## Contexto que necesito

1. Qué hace el proyecto y para qué se usa la IA en él.
2. Datos personales tratados: categorías, de quién, volumen y origen.
3. Si hay decisiones automatizadas con efecto sobre las personas.
4. Si hay categorías especiales de datos (salud, biometría, ideología, etc.).
5. Base jurídica prevista y quién es responsable del tratamiento.
6. Proveedores implicados y ubicación del tratamiento.

## Paso 1 — ¿Hace falta EIPD?

Analiza los criterios de riesgo alto y dime cuáles concurren, cuáles no y cuáles son dudosos:

- Evaluación o puntuación de personas, incluido perfilado.
- Decisiones automatizadas con efecto jurídico o significativo.
- Observación sistemática.
- Datos de categorías especiales o de carácter altamente personal.
- Tratamiento a gran escala.
- Cruce o combinación de conjuntos de datos.
- Datos de personas vulnerables.
- Uso innovador de tecnología.
- Impedir el ejercicio de un derecho o el acceso a un servicio.

Con dos criterios suele ser exigible; con uno, conviene documentar el análisis aunque se concluya que no. Da un veredicto claro y su justificación.

## Paso 2 — Descripción del tratamiento

Estructura: finalidades, categorías de datos e interesados, origen, destinatarios y subencargados, transferencias internacionales, plazos de conservación, recorrido completo del dato con los sistemas implicados, y descripción de cómo interviene el modelo (qué entra, qué sale, qué se decide con ello).

## Paso 3 — Necesidad y proporcionalidad

Preguntas a responder con honestidad:

- ¿Se puede conseguir la finalidad con menos datos? ¿Con datos agregados? ¿Sin IA?
- ¿La base jurídica sostiene este tratamiento concreto, y no otro parecido?
- ¿Cómo se informa a las personas y con qué claridad?
- ¿Cómo se ejercen los derechos de acceso, rectificación, oposición y, si aplica, a no ser objeto de decisiones automatizadas?
- ¿Hay intervención humana real, o es un sello formal? Describe en qué consiste: qué puede cambiar la persona que revisa y con qué información.

## Paso 4 — Riesgos para los derechos de las personas

Tabla con: riesgo, cómo se materializa, probabilidad, gravedad para la persona (no para la empresa), medidas previstas y riesgo residual. Incluye los propios de la IA: error del modelo con consecuencia, sesgo discriminatorio, opacidad de la decisión, reutilización de datos para fines nuevos, filtración por el proveedor y falsa sensación de objetividad del resultado automático.

## Paso 5 — Medidas y seguimiento

Medidas técnicas y organizativas concretas, quién las implanta y cuándo se comprueban. Más el plan de revisión: cuándo se vuelve a evaluar y qué cambio del proyecto obliga a rehacer la evaluación.

## Entregables

1. Veredicto sobre la exigibilidad de la EIPD, con los criterios concurrentes.
2. Descripción del tratamiento completa.
3. Análisis de necesidad y proporcionalidad con las preguntas respondidas y los huecos marcados.
4. Tabla de riesgos con medidas y riesgo residual.
5. Plan de medidas y de revisión, y lista de preguntas pendientes para el responsable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Determinar si un proyecto con IA requiere evaluación de impacto en protección de datos y construir el borrador con riesgos y medidas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Inventario y clasificación de los sistemas de IA en uso en la empresa',
                'description'      => 'El registro que permite saber qué IA se usa, para qué, con qué datos y con qué nivel de riesgo, base de cualquier cumplimiento posterior y de las respuestas a clientes y auditores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de cumplimiento con experiencia en gobierno de la inteligencia artificial. Quiero construir el inventario de sistemas de IA de la empresa y clasificarlos, porque hoy nadie sabe con certeza qué se usa ni dónde.

Nota: la calificación jurídica definitiva de cada sistema y las obligaciones aplicables las valida el asesor competente. Este trabajo produce el inventario y una clasificación preliminar bien documentada, que es lo que hace posible todo lo demás.

## Contexto que necesito

1. Sector y tamaño de la empresa, y si opera en varios países.
2. Áreas de negocio y procesos principales.
3. Lo que ya sabes que se usa, incluidas herramientas contratadas por áreas por su cuenta.
4. Si desarrolláis IA propia o solo usáis herramientas de terceros.
5. Quién puede ser responsable del registro.

## Paso 1 — Cómo encontrar lo que hay

La mayor parte del inventario no está en ninguna lista. Fuentes a cruzar:

- Facturación y gastos con tarjeta: suscripciones de software.
- Aplicaciones conectadas a las cuentas corporativas.
- Encuesta a las áreas, sin sanción por declarar.
- Funciones de IA incorporadas a herramientas que ya usáis (el ofimático, el CRM, el gestor de tickets, la herramienta de contratación). Este es el bloque que más se olvida: la IA que llegó dentro de un producto que ya teníais.
- Automatizaciones y scripts internos que llaman a un modelo.

## Paso 2 — Ficha por sistema

| Campo | Contenido |
|---|---|
| Nombre y proveedor | |
| Área y proceso donde se usa | |
| Finalidad | Qué decide o produce |
| Papel de la empresa | Usuario, responsable del despliegue, desarrollador |
| Datos de entrada | Incluidos personales y de terceros |
| Salida y su uso | Informativa, apoyo a decisión, decisión automática |
| Personas afectadas | Empleados, candidatos, clientes, terceros |
| Supervisión humana | Existe, en qué consiste y quién |
| Proveedor subyacente y ubicación del tratamiento | |
| Plan contratado y condiciones sobre datos | |
| Responsable interno | Con nombre |
| Fecha de alta y última revisión | |

## Paso 3 — Clasificación preliminar por riesgo

Clasifica cada sistema y documenta el motivo:

- **Prohibido o inaceptable:** usos vetados; si aparece alguno, es la prioridad absoluta y se detiene.
- **Alto riesgo probable:** afecta a acceso al empleo, evaluación de personas, crédito, educación, servicios esenciales, seguridad. Requiere análisis específico.
- **Obligaciones de transparencia:** interacción con personas, generación o manipulación de contenido.
- **Riesgo limitado o mínimo:** apoyo interno sin efecto sobre terceros.

Señala especialmente los sistemas donde la salida se usa como decisión sin que nadie con criterio la revise: ahí está casi siempre el problema real, con independencia de la etiqueta.

## Paso 4 — Huecos y acciones

Para cada sistema: qué falta documentar, qué hay que pedir al proveedor, qué medida hay que implantar y en qué plazo. Ordenado por riesgo, no por facilidad.

## Paso 5 — Mantenimiento

- Alta obligatoria en el registro como paso del proceso de compra de cualquier herramienta.
- Revisión semestral con fecha fijada.
- Responsable único del registro y suplente.
- Uso del registro para responder cuestionarios de clientes y auditorías: si está bien hecho, esa respuesta pasa de días a una hora.

## Entregables

1. Guía de búsqueda para completar el inventario, con las fuentes concretas.
2. Plantilla de ficha lista para rellenar.
3. Inventario preliminar con lo que ya me has contado, y las fichas incompletas marcadas.
4. Clasificación por riesgo con justificación.
5. Plan de acciones priorizado y procedimiento de mantenimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el inventario de sistemas de IA en uso en la empresa con fichas completas y clasificación preliminar por riesgo',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Accesibilidad digital obligatoria: qué exige y cómo se documenta el cumplimiento',
                'description'      => 'Traduce la obligación de accesibilidad de webs, apps y comercio electrónico en un plan verificable: alcance, criterios técnicos, evidencias y declaración de accesibilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de cumplimiento en accesibilidad digital. Quiero saber qué nos aplica, qué hay que hacer y cómo se demuestra.

Nota: la accesibilidad de productos y servicios digitales es exigible en la Unión Europea desde el 28 de junio de 2025, con transposición en España a través del Real Decreto 193/2023, con matices de alcance según tipo de empresa y de servicio. Contrasta la aplicación concreta a tu caso con asesoría especializada; aquí construimos el plan operativo.

## Contexto que necesito

1. Qué tenéis: web corporativa, tienda en línea, aplicación móvil, aplicación de cliente, quioscos o terminales.
2. Tamaño de la empresa: plantilla y facturación aproximada.
3. Si vendéis a consumidores por internet.
4. Sector, porque hay servicios con reglas propias (banca, transporte, telecomunicaciones, audiovisual, libro electrónico).
5. Estado actual: ¿hay alguna auditoría de accesibilidad hecha?

## Paso 1 — Alcance

Dime qué nos aplica y qué no, con el razonamiento. Presta atención a la confusión más habitual: el hecho de ser una empresa pequeña no exime automáticamente si se presta un servicio de comercio electrónico a consumidores. Y señala los supuestos donde caben excepciones y qué habría que documentar para invocarlas.

## Paso 2 — Criterios técnicos y prioridad

Traduce la obligación a comprobaciones concretas, ordenadas por impacto real en las personas y por frecuencia de incumplimiento:

| Criterio | Qué se comprueba | Frecuencia del fallo |
|---|---|---|
| Contraste de color | Texto y elementos de interfaz | Muy alta |
| Navegación por teclado | Todo el flujo, con foco visible | Muy alta |
| Alternativas textuales | Imágenes, iconos, gráficos con información | Alta |
| Formularios | Etiquetas asociadas, errores identificados y descritos | Alta |
| Estructura semántica | Encabezados, listas, regiones, tablas | Alta |
| Compatibilidad con lector de pantalla | Recorridos principales completos | Media |
| Contenido multimedia | Subtítulos y alternativas | Media |
| Movimiento y tiempos | Poder detener animaciones y ampliar plazos | Media |
| Zoom y adaptación | Hasta el 200% sin pérdida de contenido | Media |

## Paso 3 — Cómo se audita

Método en tres capas, porque ninguna basta sola: comprobación automática (detecta una parte), revisión manual guiada por criterios, y prueba con personas usuarias de tecnologías de apoyo en los recorridos críticos. Define muestra de páginas y flujos: portada, plantillas principales, un proceso completo de compra o registro, formularios y área privada.

## Paso 4 — Documentación del cumplimiento

- Informe de auditoría con hallazgos, criterio incumplido, gravedad y plantilla afectada.
- Plan de remediación con responsable y fecha, priorizado por impacto.
- Declaración de accesibilidad publicada: estado, alcance, contenido no accesible y por qué, mecanismo de contacto y fecha de revisión.
- Evidencias conservadas: informes, correcciones, formación del equipo.

## Paso 5 — Que no se rompa

La accesibilidad se pierde en el siguiente despliegue si no se integra: criterios en la definición de terminado, comprobación automática en el proceso de publicación, formación de diseño y desarrollo, y revisión de plantillas nuevas antes de publicar.

## Entregables

1. Alcance aplicable a mi caso, razonado.
2. Lista de comprobaciones priorizada.
3. Diseño de la auditoría con muestra de páginas y flujos.
4. Estructura del informe, del plan de remediación y de la declaración.
5. Medidas de integración para no reincidir.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Determinar el alcance de la obligación de accesibilidad digital y construir el plan de auditoría, remediación y declaración de cumplimiento',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Canal interno de información (denuncias): implantación y gestión práctica',
                'description'      => 'Monta el sistema interno de información con las garantías de confidencialidad y no represalia, el procedimiento de tramitación y el registro, adaptado al tamaño real de la organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de cumplimiento con experiencia implantando canales internos de información. Quiero un sistema que funcione y que cumpla, no un formulario en la intranet que nadie usa ni nadie atiende.

Nota: en España el marco es la Ley 2/2023 de protección de las personas que informen sobre infracciones normativas y lucha contra la corrupción, con obligaciones que dependen del tipo y tamaño de la entidad. Contrasta la aplicación a tu caso con asesoría; aquí diseñamos la implantación.

## Contexto que necesito

1. Tipo de entidad, plantilla y sector.
2. Si ya existe algún canal, aunque sea informal, y cómo se atiende.
3. Quién podría ser responsable del sistema y si tiene independencia real.
4. Si hay representación de los trabajadores y si se ha consultado.
5. Estructura del grupo: ¿hay filiales que puedan compartir canal?

## Paso 1 — Diseño del canal

Decisiones a tomar y recomendación para mi caso:

| Decisión | Opciones | Criterio |
|---|---|---|
| Vías de entrada | Escrita, verbal, reunión presencial a petición | La ley exige que sean posibles varias |
| Anonimato | Permitido o no | Permitirlo aumenta el uso; complica el seguimiento |
| Gestión | Interna o externalizada | Independencia y capacidad de tramitar |
| Herramienta | Plataforma específica, correo dedicado, buzón físico | Trazabilidad y confidencialidad |
| Alcance | Empleados, ex empleados, candidatos, proveedores, terceros | Suele ser más amplio de lo que se piensa |

## Paso 2 — Responsable del sistema

Perfil, requisitos de independencia, a quién reporta, incompatibilidades (no puede ser quien tenga conflicto con los asuntos que se van a tratar), y qué recursos necesita. Es el punto donde más implantaciones fallan: se nombra a alguien sin autonomía y el canal pierde credibilidad el primer día.

## Paso 3 — Procedimiento de tramitación

Con plazos concretos:

1. Acuse de recibo al informante, con el plazo máximo.
2. Análisis preliminar de admisibilidad, con criterios escritos.
3. Instrucción: quién investiga, cómo se recaba información, cómo se preserva la evidencia.
4. Audiencia de la persona afectada, con garantías de presunción de inocencia.
5. Conclusión y propuesta de medidas.
6. Comunicación al informante del resultado, con el plazo máximo de respuesta.
7. Archivo y conservación, con plazos y con supresión de datos innecesarios.

Y el protocolo de conflicto: qué se hace si la información afecta al propio responsable del sistema o a la dirección.

## Paso 4 — Protección del informante

- Prohibición de represalias y ejemplos concretos de qué cuenta como represalia (cambio de funciones, exclusión, evaluación negativa repentina).
- Confidencialidad de la identidad y quién puede conocerla.
- Qué hacer si se detecta una represalia: procedimiento y consecuencias.
- Información sobre canales externos, que el informante puede usar directamente.

## Paso 5 — Implantación y cultura

Política del sistema, comunicación a la organización, formación de responsables de equipo, cartel o página visible con las vías de acceso, y revisión anual con indicadores: comunicaciones recibidas, admitidas, tramitadas, plazos cumplidos y medidas adoptadas. Cero comunicaciones en un año no es una buena noticia: es señal de desconfianza en el canal.

## Entregables

1. Diseño del canal con las decisiones recomendadas.
2. Perfil y encaje del responsable del sistema.
3. Procedimiento de tramitación con plazos, listo para aprobar.
4. Medidas de protección del informante y protocolo de represalias.
5. Plan de comunicación, formación e indicadores de revisión anual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implantar el canal interno de información con procedimiento de tramitación, protección del informante e indicadores de revisión',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Reclamaciones por decisiones automatizadas: derecho a explicación e intervención humana',
                'description'      => 'Prepara el procedimiento para responder cuando alguien impugna una decisión tomada con apoyo automático: qué hay que poder explicar, quién revisa y qué se documenta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en protección de datos y cumplimiento. Tenemos procesos donde una herramienta automática influye en decisiones sobre personas, y quiero estar preparado para la reclamación que llegará.

Nota: esto diseña el procedimiento operativo. La respuesta concreta a una reclamación real y la valoración jurídica corresponden al asesor competente.

## Contexto que necesito

1. Qué decisiones se toman con apoyo automático: selección, precios, riesgo, concesión de servicio, moderación, prioridad de atención.
2. Grado de automatización: apoyo a una persona o decisión sin intervención.
3. Qué información entra en la decisión y de dónde sale.
4. Qué se le comunica hoy a la persona afectada.
5. Quién podría revisar una decisión impugnada y con qué autoridad para cambiarla.

## Paso 1 — Diagnóstico de explicabilidad

La prueba de fuego, antes de cualquier procedimiento: **si una persona pregunta hoy por qué se le denegó, ¿podemos contestar con precisión?** Responde con honestidad para cada proceso:

- ¿Sabemos qué factores pesaron en esa decisión concreta?
- ¿Conservamos los datos de entrada y la salida del sistema, con fecha?
- ¿Podemos reconstruir la decisión con la versión del sistema que estaba activa ese día?
- ¿Hay registro de quién la revisó y con qué información?

Si la respuesta a cualquiera de estas es no, ese es el trabajo previo: sin trazabilidad no hay explicación posible, y la ausencia de explicación es en sí misma el problema.

## Paso 2 — Qué se explica y con qué nivel de detalle

Distingue lo que hay que poder comunicar de lo que no procede: la lógica aplicada, las categorías de datos usadas, la importancia relativa de los factores principales y las consecuencias previstas, sí; el código, los pesos internos del modelo o información de terceros, no. Redacta el modelo de explicación en lenguaje comprensible, sin tecnicismos y sin fórmulas.

## Paso 3 — Intervención humana que lo sea de verdad

Define en qué consiste la revisión: quién la hace (con competencia y sin ser quien tomó la decisión inicial), qué información recibe, qué puede cambiar, en qué plazo y cómo se documenta. Un sello de aprobación sin capacidad ni información no es intervención humana, y así se valorará si llega una inspección.

## Paso 4 — Procedimiento de reclamación

1. Vías de entrada y acuse de recibo con plazo.
2. Identificación de la persona y de la decisión concreta.
3. Recuperación del expediente: entradas, salida, versión del sistema, revisor.
4. Revisión humana con criterio y con las alegaciones aportadas.
5. Respuesta motivada: qué se decidió, por qué, qué factores pesaron y qué puede hacer si no está conforme, incluida la vía ante la autoridad de control.
6. Registro y análisis: si varias reclamaciones apuntan al mismo factor, el problema es el sistema y no las reclamaciones.

## Paso 5 — Prevención

- Información previa clara en el momento de la decisión, no escondida en la política de privacidad.
- Revisión periódica de resultados por grupos, para detectar efectos discriminatorios.
- Umbral de revisión humana obligatoria por defecto en los casos de mayor impacto.

## Entregables

1. Diagnóstico de explicabilidad por proceso, con los huecos de trazabilidad.
2. Modelo de explicación en lenguaje comprensible.
3. Definición operativa de la intervención humana.
4. Procedimiento de reclamación con plazos y plantillas de respuesta.
5. Medidas de prevención y de vigilancia de efectos discriminatorios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Preparar el procedimiento de respuesta a reclamaciones sobre decisiones automatizadas, con explicabilidad, intervención humana real y registro',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad del código y del contenido generado con IA en contratos de desarrollo',
                'description'      => 'Cómo pactar la titularidad, las garantías y las obligaciones de transparencia cuando parte del entregable se ha producido con asistencia de IA, en contratos de desarrollo y de creación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado especializado en propiedad intelectual y contratos de desarrollo de software y de creación de contenido. Quiero cerrar bien la parte de IA en estos contratos, en las dos posiciones.

Nota: la protección del contenido generado con asistencia de IA es un terreno en evolución y con diferencias entre jurisdicciones. Esto produce un borrador y una lista de decisiones; la validación final corresponde a un profesional habilitado.

## Contexto que necesito

1. ¿Eres quien encarga o quien desarrolla?
2. Tipo de entregable: software, diseño, texto, imagen, audio, formación.
3. ¿Se usa IA en la producción? ¿Con qué herramientas y en qué proporción?
4. Uso previsto del entregable: interno, comercial, redistribuido, incorporado a un producto.
5. Jurisdicción y ley aplicable.

## Paso 1 — Las tres preguntas que hay que decidir

1. **¿Se permite usar IA en la producción del entregable?** Sí sin condiciones, sí con declaración, sí con límites por tipo de componente, o no. Cada opción tiene consecuencias de precio y de plazo: prohibirlo encarece, y hay que decirlo.
2. **¿Qué se transmite?** La titularidad de lo que sea susceptible de protección y, en todo caso, un derecho de uso amplio, irrevocable y suficiente para el uso previsto. Esta segunda parte es la que de verdad protege al cliente cuando la protección del resultado es dudosa.
3. **¿Qué garantías puede dar el desarrollador?** Aquí está el punto realista: se puede garantizar que no se ha copiado a sabiendas y que se han usado herramientas con condiciones de uso comercial. Garantizar que ningún fragmento generado coincide con obra protegida ajena no es cumplible; propón redacciones honestas con obligaciones de conducta y de subsanación.

## Paso 2 — Cláusulas a redactar

| Cláusula | Contenido |
|---|---|
| Declaración de uso de IA | Qué herramientas, en qué componentes, con qué condiciones de licencia |
| Titularidad y cesión | De lo protegible; más licencia de uso amplia sobre el resto |
| Garantías | Conducta diligente, licencias comerciales verificadas, no copia deliberada |
| Dependencias y licencias | Inventario de componentes de terceros y su licencia, con prohibición de licencias incompatibles con el uso previsto |
| Subsanación | Qué ocurre si aparece una reclamación: colaborar, sustituir el componente, plazos |
| Indemnidad | Alcance realista, con límites y exclusiones claras |
| Datos del cliente | Prohibición de introducirlos en herramientas no aprobadas |
| Confidencialidad | Extensión expresa al uso de herramientas de IA |
| Trazabilidad | Registro de qué se generó con asistencia, conservado durante N años |
| Entrega | Fuentes, documentación y todo lo necesario para mantenerlo sin el proveedor |

## Paso 3 — Anexo técnico de trazabilidad

Formato del registro que acompaña a la entrega: componente, herramienta usada, fecha, si hubo revisión humana sustancial y quién. Sin esto, dos años después nadie puede responder de nada. Con esto, la respuesta a una reclamación es un documento.

## Paso 4 — La versión de cada lado

Entrega dos redacciones del bloque: la del cliente exigente y la defendible por el proveedor, señalando en cada punto qué es negociable y qué no debería cederse.

## Entregables

1. Decisiones recomendadas a las tres preguntas, con sus consecuencias.
2. Bloque de cláusulas completo, versión cliente.
3. Bloque de cláusulas completo, versión proveedor.
4. Anexo de trazabilidad listo para usar.
5. Puntos que conviene consultar por la jurisdicción concreta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Pactar titularidad, garantías y trazabilidad del entregable cuando se usa IA en contratos de desarrollo o de creación de contenido',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contrato de encargado del tratamiento y transferencias internacionales: revisión práctica',
                'description'      => 'Revisa el contrato de tratamiento de datos de un proveedor punto por punto y resuelve la parte de transferencias internacionales con la documentación que hay que conservar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en protección de datos con experiencia revisando contratos de encargado del tratamiento de proveedores tecnológicos. Voy a contratar (o ya uso) un proveedor que tratará datos personales por nuestra cuenta.

Nota: esto produce una revisión estructurada y una lista de puntos a exigir. La validación jurídica final corresponde al asesor competente.

## Contexto que necesito

1. Proveedor, servicio y qué datos tratará.
2. Categorías de interesados: clientes, empleados, candidatos, usuarios finales de nuestros clientes.
3. Documento que ofrece el proveedor: su contrato de tratamiento, sus condiciones o nada.
4. Dónde se trata la información y qué subencargados declara.
5. Si nosotros somos responsables o encargados frente a un tercero (cambia todo el análisis).

## Paso 1 — Papeles claros

Determina y justifica quién es responsable, encargado y subencargado en esta relación. Un error aquí invalida el resto del análisis, y es más frecuente de lo que parece cuando hay tres empresas en la cadena.

## Paso 2 — Revisión del contrato, punto por punto

Comprueba y marca conforme, insuficiente o ausente:

| Elemento | Qué debe decir |
|---|---|
| Objeto, duración y naturaleza del tratamiento | Concreto, no genérico |
| Categorías de datos e interesados | Enumeradas |
| Instrucciones | Tratar solo según instrucciones del responsable |
| Confidencialidad del personal | Obligación expresa |
| Medidas de seguridad | Descritas, no «medidas adecuadas» |
| Subencargados | Autorización, lista, comunicación de cambios y derecho de oposición |
| Asistencia en derechos de los interesados | Cómo y en qué plazo |
| Notificación de brechas | Plazo concreto y contenido mínimo |
| Auditoría e información | Evidencias razonables: certificaciones, informes |
| Supresión o devolución al final | Plazo y forma, con certificación |
| Transferencias internacionales | Mecanismo identificado |
| Uso para fines propios del proveedor | Prohibido, o delimitado con base clara |

Presta atención especial a la última fila: cláusulas que permiten al proveedor usar los datos para «mejorar sus servicios» son el punto que más problemas genera y el más fácil de pasar por alto.

## Paso 3 — Transferencias internacionales

Para cada flujo fuera del espacio europeo: destino, mecanismo aplicable, si hay decisión de adecuación o cláusulas tipo, y qué análisis complementario procede documentar sobre el marco legal del país de destino y las garantías adicionales. Deja claro qué documentación hay que archivar, porque es lo que se pide cuando llega una inspección o un cuestionario de cliente.

## Paso 4 — Lo que hay que exigir

Lista priorizada de cambios a pedir al proveedor, separando lo imprescindible de lo deseable. Y una nota realista: con proveedores grandes de adhesión no habrá negociación; en esos casos la decisión es qué datos entran en el servicio y qué tratamientos se excluyen.

## Paso 5 — Documentación a conservar

Carpeta del proveedor: contrato firmado, anexos, lista de subencargados con fecha, certificaciones, análisis de transferencias, registro en el inventario de tratamientos y fecha de próxima revisión.

## Entregables

1. Determinación de papeles en la cadena.
2. Revisión punto por punto con el estado de cada elemento.
3. Análisis de transferencias internacionales y documentación asociada.
4. Lista priorizada de exigencias al proveedor.
5. Índice de la carpeta documental y calendario de revisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Revisar el contrato de encargado del tratamiento de un proveedor y documentar las transferencias internacionales con la evidencia conservada',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Términos de servicio para un producto con funciones de IA',
                'description'      => 'Redacta las condiciones de uso de un producto que incorpora IA: qué se promete, qué se excluye, qué puede hacer el usuario con lo generado y qué usos están prohibidos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado de producto digital. Vamos a lanzar (o ya tenemos) un producto con funciones de IA y quiero unas condiciones que protejan sin ser abusivas y que sean coherentes con lo que el producto hace de verdad.

Nota: esto produce un borrador estructurado. La adaptación a la jurisdicción, la normativa de consumo aplicable y la revisión final corresponden a un profesional habilitado.

## Contexto que necesito

1. Producto, funciones con IA y qué genera para el usuario.
2. Tipo de cliente: consumidor, empresa o ambos; y países.
3. Modelo de negocio: gratuito, suscripción, consumo, límites por plan.
4. Qué datos introduce el usuario y qué hacemos con ellos.
5. Proveedores de modelos utilizados y sus restricciones de uso.

## Bloques a redactar

### 1. Descripción del servicio y de la función de IA
Qué hace y cómo funciona en términos comprensibles. Aquí se juega la coherencia: si el marketing promete precisión y las condiciones dicen que no se garantiza nada, el problema aparecerá tarde y con un cliente enfadado.

### 2. Naturaleza de la salida y responsabilidad del usuario
Que la salida puede contener errores, que no sustituye asesoramiento profesional cuando aplique, y que el usuario debe revisar antes de usarla. Redactado en lenguaje llano, no en una cláusula sepultada en la letra pequeña.

### 3. Titularidad y licencias
| Elemento | Quién |
|---|---|
| Contenido que introduce el usuario | Del usuario; nosotros con licencia limitada para prestar el servicio |
| Salida generada | Derechos que le concedemos al usuario, con el alcance del uso comercial |
| Nuestro producto y marcas | Nuestros |
| Sugerencias del usuario | Cómo tratarlas para evitar reclamaciones futuras |

Incluye una advertencia honesta sobre la protección incierta de lo generado y sobre resultados similares entre usuarios distintos.

### 4. Usos prohibidos
Lista concreta y no meramente ornamental: usos ilegales, generación de material dañino, suplantación de identidad, elusión de límites técnicos, reventa del servicio, uso para entrenar modelos competidores, y los usos que restrinja el proveedor del modelo subyacente. Con la consecuencia de cada incumplimiento.

### 5. Datos y privacidad
Referencia a la política de privacidad, con lo esencial dicho aquí: qué se guarda, cuánto, si se usa para mejorar el servicio y qué controles tiene el usuario. Coherente palabra por palabra con la política.

### 6. Límites de uso y cambios
Cuotas por plan, qué ocurre al agotarlas, y cómo se comunican los cambios de límites o de funcionalidad. Los productos con coste variable cambian límites: mejor tenerlo previsto que improvisarlo.

### 7. Disponibilidad, exclusiones y responsabilidad
Sin garantía de disponibilidad continua, dependencia de proveedores externos, límites de responsabilidad ajustados a lo permitido según el tipo de cliente y el país. Con la advertencia de qué límites no son oponibles a consumidores.

### 8. Terminación y salida
Causas, preaviso, qué pasa con el contenido del usuario, plazo de exportación y borrado.

## Entregables

1. Borrador completo de las condiciones, por bloques.
2. Resumen en lenguaje llano de los cinco puntos que más importan al usuario.
3. Tabla de coherencia entre lo que promete el marketing y lo que dicen las condiciones.
4. Lista de puntos a revisar con asesoría por jurisdicción y por normativa de consumo.
5. Qué hay que actualizar en el producto para que las condiciones sean verdad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Redactar los términos de servicio de un producto con funciones de IA, con titularidad de la salida, usos prohibidos y límites coherentes con el producto',
                'vote_score'       => 28,
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
