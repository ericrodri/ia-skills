<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills96Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 7,
                'title'            => 'Conciliación bancaria y detección de anomalías con IA',
                'description'      => 'Estructura el proceso de conciliación para que la IA proponga emparejamientos y señale lo raro, mientras la decisión y el asiento siguen siendo humanos y trazables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller financiero con experiencia en cierres mensuales y automatización de tareas contables. Quiero acelerar la conciliación bancaria sin perder el control ni la trazabilidad.

## Contexto que necesito

1. Volumen: movimientos bancarios al mes, número de cuentas y de facturas.
2. Herramientas: ERP o programa contable, formato de los extractos.
3. Cómo se concilia hoy y cuánto tiempo cuesta.
4. Casos que siempre dan problemas: pagos agrupados, parciales, divisas, comisiones, devoluciones.

## Regla de partida

La IA propone, la persona decide y el sistema registra. Ningún emparejamiento se contabiliza automáticamente sin que quede constancia de quién lo aprobó. Esto no es prudencia excesiva: es lo que permite responder a una auditoría y detectar un error antes de que se arrastre tres meses.

## Paso 1 — Preparación de los datos

Define el formato mínimo de trabajo para extractos y para facturas: columnas necesarias, normalización de fechas e importes, limpieza de conceptos bancarios y separación de comisiones. Explica cómo obtenerlo de mi ERP.

## Paso 2 — Reglas de emparejamiento, por orden

| Nivel | Criterio | Tratamiento |
|---|---|---|
| 1 | Importe y referencia exactos | Emparejamiento automático, revisión por muestreo |
| 2 | Importe exacto, fecha cercana, proveedor coincidente | Propuesta con confianza alta |
| 3 | Pago agrupado que suma varias facturas | Propuesta con el desglose, revisión obligatoria |
| 4 | Pago parcial o con retención | Propuesta con el pendiente calculado, revisión obligatoria |
| 5 | Sin candidato | A la lista de pendientes con el motivo |

Que cada propuesta venga con la explicación de por qué se propone. Un emparejamiento sin justificación no se puede revisar.

## Paso 3 — Detección de anomalías

Señales a marcar para revisión, incluso si el emparejamiento cuadra:

- Importes redondos y repetidos en fechas próximas.
- Proveedor nuevo con importe alto en su primer pago.
- Cambio de cuenta bancaria de un proveedor conocido (la señal más importante de todas: es el patrón habitual del fraude del correo suplantado).
- Pagos fuera del horario o del día habitual.
- Conceptos que no encajan con la actividad del proveedor.
- Duplicados con importe idéntico y referencia distinta.
- Movimientos con desviación grande respecto al patrón mensual de esa cuenta.

## Paso 4 — Cierre del proceso

- Lista de pendientes con antigüedad y responsable de resolver cada uno.
- Umbral de materialidad: qué diferencias se investigan y cuáles se regularizan con asiento y explicación.
- Registro del proceso: qué se emparejó automáticamente, qué se aprobó a mano, qué quedó abierto.
- Indicadores del mes: porcentaje conciliado automáticamente, tiempo total, pendientes al cierre y anomalías detectadas.

## Entregables

1. Formato de datos de trabajo y cómo generarlo.
2. Reglas de emparejamiento con el formato de las propuestas.
3. Lista de señales de anomalía adaptada a mi negocio.
4. Procedimiento de cierre con umbrales y registro.
5. Cuadro de indicadores mensual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un proceso de conciliación bancaria asistido por IA con reglas de emparejamiento, detección de anomalías y trazabilidad de las aprobaciones',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Facturas y gastos con lectura automática: reglas, validaciones y control humano',
                'description'      => 'Monta el flujo que extrae los datos de facturas y tickets, los valida contra reglas del negocio y deja para revisión solo lo que de verdad la necesita.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de administración con experiencia automatizando el circuito de facturas y gastos. Quiero reducir el trabajo manual sin que se cuelen errores caros.

## Contexto que necesito

1. Volumen mensual de facturas recibidas y de gastos de empleados.
2. Formatos que llegan: PDF, papel escaneado, foto de ticket, factura electrónica estructurada.
3. Sistemas: ERP, herramienta de gastos, gestor documental.
4. Circuito de aprobación actual y sus cuellos de botella.
5. Requisitos fiscales del país y qué campos son obligatorios.

## Paso 1 — Campos y confianza

Define los campos a extraer y qué nivel de exigencia tiene cada uno:

| Campo | Crítico | Validación automática posible |
|---|---|---|
| Identificación fiscal del emisor | Sí | Formato y existencia en maestro de proveedores |
| Número y fecha de factura | Sí | Duplicidad contra lo ya registrado |
| Base, tipo de impuesto y cuota | Sí | La cuota cuadra con base por tipo |
| Total | Sí | Suma de líneas más impuestos |
| Concepto y cuenta contable | No | Sugerencia por histórico del proveedor |
| Centro de coste o proyecto | Depende | Reglas por proveedor |

Regla: si un campo crítico no se extrae con seguridad, el documento va a revisión humana. Nunca se rellena con la mejor conjetura.

## Paso 2 — Validaciones de negocio

Las que evitan los errores caros:

1. Duplicado: mismo emisor, número y fecha, o mismo importe y proveedor en pocos días.
2. Cuadre aritmético completo.
3. Proveedor no dado de alta: bloqueo y alta con verificación.
4. Cuenta bancaria distinta de la registrada: **bloqueo obligatorio y verificación por un canal distinto del correo**.
5. Importe fuera del rango histórico de ese proveedor.
6. Factura sin pedido o sin contrato asociado, cuando el circuito lo exija.
7. Gasto de empleado sin justificante válido o fuera de política.

## Paso 3 — Enrutado inteligente

Diseña las tres vías:

- **Automática:** todos los campos críticos con confianza alta, todas las validaciones pasadas y por debajo del umbral de importe. Con muestreo posterior.
- **Revisión ligera:** un campo dudoso, resto correcto. Se confirma en segundos.
- **Revisión completa:** validación fallida, importe alto, proveedor nuevo, o documento ilegible.

Da los umbrales concretos según mi volumen y mi nivel de riesgo.

## Paso 4 — Política de gastos aplicable

Convierte la política en reglas comprobables: límites por concepto, justificante obligatorio, plazo de presentación, conceptos no admitidos y qué se hace con lo que se sale (rechazo, aprobación excepcional con quién la firma).

## Paso 5 — Control y mejora

Indicadores mensuales: porcentaje procesado automáticamente, tasa de error detectada en el muestreo, tiempo medio hasta contabilizar, incidencias por proveedor. Y revisión trimestral de las reglas que más falsos positivos generan.

## Entregables

1. Tabla de campos con validaciones y criterio de confianza.
2. Lista completa de validaciones de negocio, en orden de ejecución.
3. Reglas de enrutado con umbrales concretos.
4. Política de gastos traducida a reglas.
5. Cuadro de indicadores y plan de revisión de reglas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatizar la lectura y validación de facturas y gastos con reglas de negocio, enrutado por confianza y control humano donde importa',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Informe mensual al comité en una hora: de los datos al comentario escrito',
                'description'      => 'Convierte el cierre en un informe que se lee: las cifras que importan, la explicación de por qué se mueven y las tres decisiones que hay que tomar este mes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director financiero que presenta al comité de dirección cada mes. Quiero un informe corto que se lea antes de la reunión y que centre la conversación en decisiones, no en repasar tablas.

## Lo que te voy a dar

1. Cifras del mes: ingresos, márgenes, gastos por área, caja, cuentas a cobrar y a pagar.
2. Presupuesto y mismo mes del año anterior.
3. Hechos del mes que explican los movimientos (un cliente grande, una incidencia, una contratación, un pago extraordinario).
4. Los tres asuntos que dirección tiene sobre la mesa ahora.

## Estructura del informe (dos páginas, sin excepciones)

### 1. Titular del mes
Tres frases: cómo hemos ido, por qué y qué hay que decidir.

### 2. Cuadro de cifras
Tabla con: real, presupuesto, desviación, mismo mes del año anterior y acumulado del año. Solo las líneas que alguien va a usar para decidir. Si una fila no ha cambiado nada en seis meses y nadie pregunta por ella, fuera.

### 3. Las tres desviaciones que importan
Para cada una: cuánto, por qué (causa concreta, no «menor actividad»), si es puntual o estructural, y qué se está haciendo. La distinción entre puntual y estructural es la que cambia decisiones.

### 4. Caja
Saldo, generación del mes, previsión a 13 semanas con el punto más bajo señalado, y qué lo mueve. Si el punto bajo se acerca a un umbral incómodo, va en la primera página.

### 5. Riesgos y avisos tempranos
Máximo cinco, cada uno con probabilidad, impacto en euros y qué haría falta para mitigarlo. Incluye los que dirección no quiere oír: concentración de clientes, morosidad creciente, dependencia de un proveedor.

### 6. Decisiones que se piden hoy
Cada una con: qué se decide, opciones, recomendación, coste e implicaciones de no decidir. Máximo tres.

## Cómo quiero el lenguaje

- Sin jerga contable innecesaria: el comité no es el departamento financiero.
- Cada número relevante acompañado de su porqué. Un número sin explicación genera diez minutos de preguntas.
- Comparaciones útiles: contra presupuesto y contra el año anterior, no contra el mes pasado a secas (la estacionalidad engaña).
- Nada de eufemismos. Si el mes ha ido mal, la primera frase lo dice.

## Además

- Señálame qué información falta para que el informe sea completo.
- Prepárame las cinco preguntas más probables del comité con su respuesta y el dato que la respalda.
- Marca lo que es dato cerrado y lo que es estimación pendiente de cierre.

## Entregables

1. El informe completo de dos páginas.
2. Las cinco preguntas anticipadas con su respuesta.
3. Lista de información que falta y a quién pedirla.
4. Plantilla reutilizable para los próximos meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redactar el informe financiero mensual para el comité con desviaciones explicadas, previsión de caja, riesgos y decisiones que se piden',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de desviaciones presupuestarias explicado en lenguaje claro',
                'description'      => 'Descompón cada desviación en sus causas reales —precio, volumen, mezcla, calendario— y traduce el resultado a una explicación que entienda quien no es financiero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller de gestión con experiencia explicando números a responsables no financieros. Tengo desviaciones respecto al presupuesto y quiero saber por qué de verdad, y contarlo de forma que se pueda actuar.

## Lo que te voy a dar

1. Presupuesto y real del periodo, por línea.
2. Detalle disponible: unidades, precios, clientes, proyectos, plantilla.
3. Hechos conocidos del periodo.
4. Quién va a leer el análisis y qué decisión tiene delante.

## Paso 1 — Materialidad primero

No analices las 40 líneas. Ordena las desviaciones por importe absoluto y quédate con las que explican el 80% del total. Dime cuántas líneas son y qué porcentaje cubren. El resto, en una línea agregada.

## Paso 2 — Descomponer cada desviación

Para ingresos:

| Efecto | Pregunta que responde |
|---|---|
| Volumen | ¿Hemos vendido más o menos unidades de lo previsto? |
| Precio | ¿Hemos vendido al precio previsto? |
| Mezcla | ¿Hemos vendido lo mismo, o más de lo barato y menos de lo caro? |
| Calendario | ¿Es un desplazamiento entre meses o una pérdida real? |
| Alcance | ¿Ha entrado o salido algo que no estaba en el presupuesto? |

Para gastos: precio unitario, consumo, calendario, alcance y errores de imputación (más frecuentes de lo que nadie admite).

Cuantifica cada efecto en euros. Una desviación de 40.000 que resulta ser 55.000 de calendario y −15.000 de precio se gestiona de otra manera que un agujero de 40.000.

## Paso 3 — Clasificar

| Tipo | Definición | Acción |
|---|---|---|
| Puntual | No se repetirá | Explicar y seguir |
| Calendario | Se recupera en meses siguientes | Ajustar la previsión, no el plan |
| Estructural | Se va a repetir | Decisión de gestión y replanificación |
| Error de presupuesto | El presupuesto estaba mal | Corregir el método para el año que viene |
| Error de imputación | Está mal contabilizado | Corregir antes de analizar nada más |

## Paso 4 — La explicación en lenguaje claro

Para cada desviación material, tres frases: qué ha pasado, por qué, y qué significa para el resto del año. Sin fórmulas ni tecnicismos. Prohibidas las frases que no explican nada: «menor actividad de la prevista», «desviación por timing», «efecto perímetro».

## Paso 5 — Proyección y acciones

- Impacto en el cierre del año si cada desviación estructural continúa.
- Las tres acciones que más corrigen, con importe estimado y responsable.
- Qué habría que vigilar mensualmente para detectarlo antes la próxima vez.

## Entregables

1. Desviaciones materiales ordenadas, con el porcentaje que cubren.
2. Descomposición por efectos, cuantificada en euros.
3. Clasificación por tipo.
4. Explicación en lenguaje claro para el destinatario que te he dicho.
5. Proyección de cierre y tres acciones con responsable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Descomponer desviaciones presupuestarias en efectos de precio, volumen, mezcla y calendario y explicarlas en lenguaje claro con acciones',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestar la IA en la empresa: licencias, consumo y ahorro real',
                'description'      => 'Pon cifras al gasto en herramientas de IA, incluido el consumo variable que nadie presupuesta, y monta el control que distingue el ahorro demostrado del prometido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller de gestión al que le han pedido presupuestar «lo de la IA» para el año que viene. Quiero un presupuesto defendible y un control que detecte a tiempo si se descontrola.

## Contexto que necesito

1. Herramientas y suscripciones actuales, con precio y número de licencias.
2. Consumo de API o de créditos, si hay, y su evolución de los últimos meses.
3. Proyectos previstos para el año que viene.
4. Qué áreas lo usan y con qué intensidad.
5. Qué ahorro se ha prometido internamente, si se ha prometido alguno.

## Paso 1 — Inventario del gasto actual

Tabla con todo, incluido lo que se paga con tarjeta de alguien y no está en ningún presupuesto:

| Concepto | Tipo | Coste mensual | Área | Responsable | Crecimiento con el uso |
|---|---|---|---|---|---|

Tipos a distinguir, porque se comportan de forma distinta: licencia por puesto (crece con la plantilla), consumo por uso (crece con la actividad y no tiene techo natural), infraestructura, e implantación y formación (una vez).

Casi siempre aparecen suscripciones duplicadas y licencias asignadas a gente que ya no las usa. Cuantifícalo.

## Paso 2 — Presupuesto por escenarios

El consumo variable es el que estropea los presupuestos. Presenta tres escenarios con supuestos explícitos:

| Escenario | Adopción | Uso por persona | Coste anual | Supuestos |
|---|---|---|---|---|
| Conservador | | | | |
| Base | | | | |
| De éxito | | | | |

El escenario de éxito es el importante: si el proyecto funciona, ¿cuánto cuesta? Muchos presupuestos de IA están hechos para el caso en que la herramienta se usa poco.

## Paso 3 — Ahorro: demostrado, estimado y prometido

Separa las tres categorías y no las mezcles nunca en la misma cifra:

- **Demostrado:** medido antes y después, con el método anotado. Es lo único que va al presupuesto como ahorro.
- **Estimado:** cálculo razonable con supuestos escritos. Va como nota, no como línea.
- **Prometido:** lo que alguien dijo en una reunión. No va a ningún sitio hasta que se mida.

Para el ahorro demostrado, exige que incluya el tiempo de revisión: una tarea que pasa de 60 a 10 minutos pero necesita 20 de revisión ahorra 30, no 50.

## Paso 4 — Controles

- Techo de gasto por herramienta y alerta al 70% y al 90%.
- Un responsable con nombre por partida.
- Revisión trimestral de licencias activas contra uso real.
- Regla de alta: ninguna herramienta nueva sin responsable, sin techo y sin fecha de revisión.
- Indicador de coste por persona activa, que es el que revela si el gasto crece por adopción o por descontrol.

## Entregables

1. Inventario completo con duplicidades y licencias sin uso cuantificadas.
2. Presupuesto anual por escenarios con supuestos.
3. Tabla de ahorro separado en demostrado, estimado y prometido.
4. Controles con umbrales y responsables.
5. Las tres decisiones de recorte que harías hoy sin afectar al trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Presupuestar el gasto en IA por escenarios, separar el ahorro demostrado del prometido y montar los controles de consumo',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Business case de un proyecto de IA: supuestos, sensibilidad y criterio de parada',
                'description'      => 'Construye la justificación económica de una inversión en IA con los supuestos a la vista, el análisis de sensibilidad y el punto en el que se decide parar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como analista financiero especializado en evaluación de proyectos tecnológicos. Me piden aprobar una inversión en un proyecto de IA y quiero un análisis que resista preguntas.

## Contexto que necesito

1. El proyecto: qué se va a construir o implantar y qué problema resuelve.
2. Costes previstos: licencias, consumo, desarrollo, integración, formación, mantenimiento.
3. Beneficio esperado y cómo se ha calculado.
4. Alternativas consideradas, incluida no hacer nada.
5. Horizonte de evaluación y coste de capital, si lo tenéis definido.

## Paso 1 — Coste total, no el de la factura

Enumera y cuantifica lo que se olvida siempre:

| Partida | Frecuencia | Nota |
|---|---|---|
| Licencias o suscripciones | Recurrente | Crece con la plantilla |
| Consumo por uso | Recurrente y variable | Crece con la adopción, sin techo natural |
| Desarrollo e integración | Una vez, con riesgo de desviación | |
| Datos: limpieza, acceso, permisos | Una vez y recurrente | La partida más subestimada |
| Formación y cambio de proceso | Una vez | Sin esto no hay adopción |
| Revisión humana de la salida | Recurrente | Se olvida sistemáticamente y a veces se come el ahorro |
| Mantenimiento y evaluación de calidad | Recurrente | Los prompts y los modelos cambian |
| Coste de salida | Contingente | Qué pasa si hay que dejar el proveedor |

## Paso 2 — Beneficio con la cadena completa

Para cada beneficio, exige la cadena de causalidad: qué cambia en la operación → cuánto tiempo o coste se ahorra → cómo se convierte en euros → quién lo confirma.

Marca en qué eslabón está el supuesto más frágil. Habitualmente es el último: horas ahorradas que no se traducen en menos coste porque nadie deja de trabajar, solo trabaja en otra cosa. Si el ahorro es capacidad liberada y no reducción de gasto, dilo así: sigue siendo valioso, pero no aparece en la cuenta de resultados igual.

## Paso 3 — Números

Calcula con los supuestos a la vista: flujo por año, payback, VAN con la tasa que me des y TIR. Y una tabla de sensibilidad sobre las dos variables que más mueven el resultado (normalmente adopción y coste variable por uso).

Incluye el escenario pesimista completo: adopción a la mitad, coste variable al doble, beneficio con seis meses de retraso. Si el proyecto sigue teniendo sentido ahí, la decisión es fácil.

## Paso 4 — Riesgos y criterio de parada

- Los cinco riesgos con probabilidad, impacto y mitigación.
- Hitos de decisión: qué tiene que haber ocurrido a los 3 y a los 6 meses para continuar.
- **Criterio de parada explícito**: qué resultado nos haría abandonar, decidido ahora y no cuando ya haya orgullo invertido.

## Entregables

1. Coste total con todas las partidas cuantificadas.
2. Cadena de causalidad de cada beneficio, con el eslabón frágil señalado.
3. Payback, VAN, TIR y tabla de sensibilidad.
4. Escenario pesimista y su conclusión.
5. Hitos de decisión y criterio de parada.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el business case de una inversión en IA con coste total, cadena de causalidad del beneficio, sensibilidad y criterio de parada',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Facturación electrónica y Verifactu: plan de preparación para tu empresa',
                'description'      => 'Ordena lo que hay que hacer para tener la facturación en regla con los sistemas informáticos verificables: diagnóstico del software actual, calendario, y qué preguntar al proveedor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor de administración y sistemas con experiencia en implantaciones de facturación electrónica en pymes españolas. Quiero un plan de preparación realista.

Nota: este prompt organiza la preparación operativa. El calendario normativo ha cambiado más de una vez —en la última actualización disponible, la obligación de los sistemas informáticos de facturación verificables quedó fijada en el 1 de enero de 2027 para contribuyentes del Impuesto sobre Sociedades y el 1 de julio de 2027 para autónomos y el resto—, así que **confirma las fechas vigentes con tu asesoría antes de firmar nada**.

## Contexto que necesito

1. Forma jurídica: sociedad o autónomo, y régimen fiscal.
2. Cómo facturas hoy: programa de gestión, hoja de cálculo, plantillas de documento, facturas a mano.
3. Volumen de facturas emitidas al mes y si hay facturación recurrente.
4. Si emites a administraciones públicas o a grandes empresas que ya exigen formato electrónico.
5. Quién emite las facturas y quién da soporte informático.

## Paso 1 — Diagnóstico de la situación

Responde con claridad:

| Pregunta | Por qué importa |
|---|---|
| ¿Tu software actual está adaptado o su fabricante ha anunciado que lo estará? | Es lo primero que determina si hay proyecto o solo actualización |
| ¿Facturas con hoja de cálculo o documentos sueltos? | Ahí sí hay cambio de herramienta, no adaptación |
| ¿Tienes facturación desde varios sitios (tienda, ERP, TPV)? | Cada origen es un frente |
| ¿Emites rectificativas y abonos con frecuencia? | Es donde fallan las implantaciones |
| ¿Quién conserva y quién puede recuperar una factura de hace tres años? | Obligación de conservación |

## Paso 2 — Preguntas al proveedor de software

Prepárame la lista para escribirle hoy: si su producto cumple y desde qué versión, si el cumplimiento está incluido en mi licencia o tiene coste, en qué fecha estará disponible, cómo se gestionan las rectificativas, qué pasa con mi histórico, si hay pruebas disponibles antes de la fecha, y qué soporte ofrecen durante la transición.

Advertencia útil: en estas transiciones se dispara la oferta de urgencia. Pedir por escrito el compromiso de fechas y el alcance evita comprar dos veces.

## Paso 3 — Plan de trabajo

Ordena las tareas con margen realista:

1. Confirmar fechas aplicables con la asesoría.
2. Decisión de herramienta: actualizar la actual o cambiar.
3. Revisión de los datos maestros: clientes con identificación fiscal completa, series de numeración, conceptos y tipos de impuesto.
4. Unificación de los orígenes de facturación.
5. Pruebas con facturas reales, incluidas rectificativas.
6. Formación de quien factura, con los casos raros incluidos.
7. Procedimiento de contingencia: qué se hace si el sistema no está disponible.
8. Conservación y acceso al histórico.

Con fechas hacia atrás desde el plazo confirmado, dejando un trimestre de colchón.

## Paso 4 — Aprovechar el cambio

Como hay que tocarlo todo, señala las mejoras que casi no cuestan más: numeración ordenada, cobro más rápido con enlace de pago, envío automático, integración con contabilidad, recordatorios de impagados.

## Entregables

1. Diagnóstico con el veredicto: actualización sencilla o proyecto.
2. Correo listo para enviar al proveedor de software.
3. Plan de trabajo con fechas hacia atrás y responsables.
4. Lista de comprobación de datos maestros.
5. Mejoras que conviene aprovechar en el mismo esfuerzo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Planificar la adaptación de la facturación de una pyme a los sistemas informáticos verificables, con diagnóstico, preguntas al proveedor y calendario',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Preparar una auditoría sin sufrirla: documentación, respuestas y orden',
                'description'      => 'Anticipa lo que va a pedir el auditor, prepara la documentación por áreas y ensaya las respuestas de los puntos donde sabes que hay debilidades.',
                'prompt_content'   => <<<'PROMPT'
Actúa como controller con experiencia atendiendo auditorías de cuentas y revisiones internas. Tengo una auditoría en unas semanas y quiero llegar preparado.

## Contexto que necesito

1. Tipo de revisión: auditoría de cuentas, revisión limitada, auditoría interna, revisión de un cliente o de un inversor.
2. Tamaño y actividad de la empresa, y si es la primera vez.
3. Áreas donde sabes que hay debilidades o cosas mal documentadas.
4. Qué se pidió el año pasado y qué observaciones quedaron.
5. Quién puede dedicar tiempo y cuánto.

## Paso 1 — Anticipar la lista de peticiones

Prepárame la lista de documentación previsible por área, con quién la tiene y en qué estado:

| Área | Documentación habitual |
|---|---|
| Ingresos | Contratos, facturas, criterio de reconocimiento, saldos de clientes y antigüedad |
| Compras y gastos | Facturas, contratos de proveedores, periodificaciones |
| Personal | Nóminas, seguros sociales, contratos, provisiones |
| Tesorería | Extractos, conciliaciones, confirmaciones bancarias |
| Existencias y activos | Inventario, valoración, amortizaciones, altas y bajas |
| Impuestos | Declaraciones presentadas, conciliación entre contabilidad y declaraciones |
| Gobierno | Actas, poderes, contratos con partes vinculadas |
| Sistemas | Accesos, segregación de funciones, copias de seguridad |

## Paso 2 — Autoevaluación de riesgos

Para cada área, señala los puntos que un auditor mira primero y que suelen fallar: apuntes manuales al cierre, cambios de criterio sin documentar, saldos antiguos sin explicación, operaciones con partes vinculadas, provisiones sin cálculo escrito, ingresos reconocidos en el límite del periodo, y cualquier ajuste grande de última hora.

Para cada debilidad que te haya contado: qué preguntará el auditor, qué documentación la respalda y qué se puede arreglar antes.

## Paso 3 — Carpeta de auditoría

Estructura de carpetas por área, nomenclatura de ficheros y un índice con: documento, quién lo aporta, fecha y estado. Regla práctica: cada cifra de las cuentas debe poder trazarse hasta un documento en menos de dos minutos. Si no se puede, ahí hay trabajo.

## Paso 4 — Ensayo de las respuestas difíciles

Prepara el guion de las cinco conversaciones incómodas previsibles. Principios: responder lo que se pregunta, aportar el documento, no improvisar interpretaciones contables sobre la marcha y decir «lo comprobamos y te lo confirmamos» cuando no se sabe. Un dato inventado en una auditoría genera tres peticiones nuevas.

## Paso 5 — Durante y después

- Un único interlocutor que canalice las peticiones y las registre.
- Registro de lo entregado, con fecha.
- Plan para las observaciones que salgan: responsable, plazo y comprobación en el siguiente cierre.

## Entregables

1. Lista de documentación previsible por área, con estado y responsable.
2. Autoevaluación de riesgos con las preguntas anticipadas.
3. Estructura e índice de la carpeta de auditoría.
4. Guion de las cinco conversaciones difíciles.
5. Calendario de preparación semana a semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar una auditoría con la documentación anticipada por áreas, autoevaluación de riesgos y ensayo de las respuestas difíciles',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Controles antifraude en una pyme: los diez que se pueden montar sin equipo',
                'description'      => 'Identifica dónde está el riesgo real de fraude interno y externo en una empresa pequeña y monta los controles compatibles con tener poca gente y ninguna burocracia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como auditor interno con experiencia en pymes. Quiero controles proporcionados: no puedo tener segregación de funciones perfecta con seis personas en administración, pero tampoco quiero enterarme de un problema dos años después.

## Contexto que necesito

1. Tamaño del equipo de administración y quién hace qué.
2. Volumen y tipo de pagos: transferencias, tarjetas, efectivo, domiciliaciones.
3. Quién puede dar de alta proveedores, quién aprueba y quién ejecuta pagos.
4. Sistemas usados y quién tiene acceso de administrador.
5. Si ha ocurrido algún incidente, aunque fuera pequeño.

## Paso 1 — Mapa de riesgos reales

Los patrones que de verdad ocurren en empresas pequeñas:

| Riesgo | Cómo ocurre | Señal |
|---|---|---|
| Suplantación de proveedor | Correo pidiendo cambio de cuenta bancaria | Cambio de IBAN, urgencia, contacto nuevo |
| Suplantación de directivo | Petición urgente de transferencia «confidencial» | Presión, secreto, fuera de proceso |
| Proveedor ficticio | Alta de proveedor vinculado a un empleado | Proveedor nuevo sin contrato, importes redondos |
| Facturas infladas o duplicadas | Complicidad o descuido | Duplicidad, precios fuera de mercado |
| Gastos personales | Tarjeta de empresa | Conceptos recurrentes fuera de política |
| Desvío de cobros | Cobros en efectivo o cuentas no controladas | Diferencias en caja, saldos de clientes descuadrados |
| Manipulación de nóminas | Alta o complemento no autorizado | Variaciones sin justificante |

Para cada uno, dime cuál es mi exposición según lo que te he contado.

## Paso 2 — Los diez controles

Propón los controles proporcionados a mi tamaño. Como referencia de lo que suele funcionar:

1. Doble firma o doble aprobación por encima de un umbral, con el umbral definido.
2. Verificación por canal distinto (teléfono a un número ya conocido) de todo cambio de cuenta bancaria. Sin excepciones por urgencia: la urgencia es precisamente la técnica.
3. Alta de proveedores separada de la aprobación de pagos, aunque sea con dos personas.
4. Revisión mensual de proveedores nuevos por alguien ajeno a administración.
5. Conciliación bancaria mensual revisada por otra persona distinta de quien la hace.
6. Arqueo de caja aleatorio, no en la misma fecha cada mes.
7. Revisión de tarjetas con justificante obligatorio y política escrita.
8. Revisión de altas y variaciones de nómina contra documentación.
9. Retirada inmediata de accesos al salir alguien, con lista de comprobación.
10. Vacaciones obligatorias: los fraudes largos se sostienen porque nadie más toca ese trabajo nunca.

Adáptalos a mi caso, quitando lo que no aplique y añadiendo lo que falte.

## Paso 3 — Cuando no se puede segregar

Con equipos muy pequeños, propón compensaciones: revisión posterior por la dirección o por la asesoría externa, listados automáticos de excepciones, umbrales más bajos de aprobación, y rotación de tareas.

## Paso 4 — Protocolo si aparece algo

Pasos ordenados: no confrontar de inmediato, preservar la evidencia (accesos, correos, documentos), acotar el alcance, decidir quién lo sabe, y consultar con asesoría legal antes de cualquier medida. Improvisar aquí arruina tanto la recuperación del dinero como el procedimiento posterior.

## Entregables

1. Mapa de exposición al riesgo de mi empresa.
2. Los diez controles adaptados, con quién los hace y con qué frecuencia.
3. Compensaciones para lo que no se puede segregar.
4. Política de pagos y de tarjetas en una página.
5. Protocolo de actuación ante un indicio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar controles antifraude proporcionados para una pyme, con mapa de riesgos, compensaciones a la falta de segregación y protocolo ante indicios',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Evaluar un proveedor de software: coste total, dependencia y coste de salida',
                'description'      => 'Antes de firmar, calcula lo que cuesta de verdad, qué pasa si el precio sube o el proveedor desaparece, y cuánto costaría salir dentro de tres años.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable financiero que revisa contratos de software antes de firmarlos. Quiero evaluar una herramienta con criterio económico y de riesgo, no solo comparando el precio de la tarifa.

## Contexto que necesito

1. Herramienta, proveedor y qué sustituye o añade.
2. Modelo de precio ofertado: por puesto, por consumo, por volumen, escalones.
3. Duración propuesta del contrato y condiciones de renovación.
4. Cuántas personas la usarán ahora y en dos años.
5. Qué datos nuestros van a estar dentro.

## Paso 1 — Coste total a tres años

| Partida | Año 1 | Año 2 | Año 3 |
|---|---|---|---|
| Suscripción base | | | |
| Crecimiento de puestos previsto | | | |
| Consumo variable | | | |
| Implantación y migración de datos | | | |
| Integraciones y desarrollo | | | |
| Formación | | | |
| Módulos que hoy no están incluidos | | | |
| Subida anual prevista | | | |

Pregunta clave y a menudo olvidada: **¿qué límite de subida anual admite el contrato?** Sin cláusula, el precio del año tres es una incógnita, y la incógnita siempre sube.

## Paso 2 — Riesgo de dependencia

Evalúa y puntúa:

- ¿Qué parte del negocio deja de funcionar si la herramienta cae una semana?
- ¿Podemos exportar nuestros datos en un formato utilizable, cuándo queramos y sin coste? Pídelo por escrito.
- ¿Hay alternativas reales en el mercado o quedamos atrapados?
- ¿Qué pasa si el proveedor es comprado o cierra? ¿Hay compromisos de continuidad?
- ¿El precio depende de una métrica que nosotros no controlamos?

## Paso 3 — Coste de salida

Calcula lo que costaría dejarlo dentro de tres años: extracción y conversión de datos, reconstrucción de integraciones, formación en la nueva herramienta, trabajo en paralelo durante la transición y penalizaciones contractuales. El coste de salida es el que determina cuánto poder de negociación tendrás en la renovación.

## Paso 4 — Cláusulas a negociar

Prioriza las que de verdad importan: límite de subida anual, portabilidad de datos garantizada y gratuita, niveles de servicio con compensación, condiciones si cambia el modelo de precio, precio de los puestos adicionales fijado, notificación previa de cambios sustanciales, y salida sin penalización si suben el precio por encima del límite pactado.

## Paso 5 — Recomendación

Veredicto con: coste total a tres años, riesgos principales, cláusulas imprescindibles, y una alternativa (otra herramienta, plan menor, contrato más corto) para tener con qué negociar. Firmar sin alternativa es firmar lo que te ofrezcan.

## Entregables

1. Tabla de coste total a tres años con supuestos.
2. Evaluación del riesgo de dependencia.
3. Cálculo del coste de salida.
4. Lista de cláusulas a negociar, por prioridad.
5. Recomendación con la alternativa de referencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Evaluar económicamente un contrato de software con coste total a tres años, riesgo de dependencia, coste de salida y cláusulas a negociar',
                'vote_score'       => 27,
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
