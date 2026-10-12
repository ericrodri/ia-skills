<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills653Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para buscar vuelos baratos: fechas flexibles, aeropuertos alternativos, alertas y escalas',
                'description'       => 'Estrategia para encontrar vuelos baratos con IA: fechas, aeropuertos alternativos, escalas y alertas. Aviso: sin búsqueda web la IA no ve precios reales.',
                'prompt_content'    => <<<'EOT'
Ayúdame a diseñar una estrategia para encontrar vuelos baratos para el viaje que te describo. Antes de empezar, aclárame con sinceridad una cosa: si no tienes acceso a búsqueda web en esta conversación, no puedes ver precios ni disponibilidad en tiempo real, así que no inventes tarifas ni horarios concretos. En ese caso, tu trabajo es darme el método y la lista de búsquedas que debo hacer yo en los buscadores. Si sí tienes búsqueda web, indica de qué fuentes sacas cada precio y la fecha de la consulta, y recuérdame que los precios cambian.

Datos del viaje:
- Origen: [CIUDAD O AEROPUERTO]
- Destino: [CIUDAD, PAÍS O "CUALQUIER SITIO CON PLAYA EN EUROPA"]
- Fechas ideales: [FECHAS]
- Flexibilidad: [EJ.: +/- 3 DÍAS, CUALQUIER FIN DE SEMANA DE MARZO, TOTAL]
- Duración del viaje: [DÍAS]
- Número de viajeros y edades: [VIAJEROS]
- Equipaje: [SOLO MOCHILA / MALETA DE MANO / MALETA FACTURADA]
- Presupuesto máximo por persona ida y vuelta: [IMPORTE]
- Lo que no estoy dispuesto a aceptar: [EJ.: ESCALAS DE MÁS DE 4 HORAS, VUELOS DE MADRUGADA, CAMBIO DE AEROPUERTO EN LA ESCALA]

Lo que necesito:
1. **Fechas**: qué días de la semana y qué semanas suelen ser más baratas para esta ruta en general, explicando el porqué (temporada, festivos locales, eventos) y marcándolo como tendencia, no como garantía.
2. **Aeropuertos alternativos**: aeropuertos de origen y destino a una distancia razonable, con cómo llegar a ellos y cuánto tiempo y dinero cuesta el desplazamiento, para que pueda comparar el ahorro real.
3. **Escalas y combinaciones**: si conviene valorar vuelos con escala, billetes separados o ida y vuelta con aerolíneas distintas, y los riesgos de cada opción (por ejemplo, perder la conexión con billetes separados sin protección).
4. **Coste real**: lista de extras que suelen encarecer la tarifa (equipaje, asiento, tasas de pago, traslados) para comparar precios finales y no solo el precio de partida.
5. **Alertas**: cómo configurar alertas de precio en los buscadores habituales y con cuánta antelación suele ser razonable empezar a vigilar esta ruta.
6. **Plan de búsqueda**: tabla con las búsquedas concretas que debo hacer (origen, destino, rango de fechas, filtros) por orden de prioridad.
7. **Mitos**: aclara qué consejos populares no tienen fundamento sólido (por ejemplo, el modo incógnito o comprar un día concreto de la semana) y con qué nivel de certeza lo afirmas.

Formato de salida: un resumen de cinco líneas con la estrategia recomendada, seguido de las secciones anteriores con títulos y tablas donde ayuden. Termina con una lista de comprobación de diez puntos para antes de pagar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Planificar la búsqueda de vuelos baratos con un método claro, sabiendo qué puede y qué no puede hacer la IA.',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para itinerario de viaje día a día: horarios, desplazamientos y plan B si llueve',
                'description'       => 'Itinerario de viaje realista día a día: horarios, tiempos de traslado, comidas, reservas necesarias y un plan B para días de lluvia.',
                'prompt_content'    => <<<'EOT'
Crea un itinerario de viaje día a día que sea realista, no una lista de todo lo que se puede ver. Prefiero ver menos cosas con calma que pasar el viaje corriendo de un sitio a otro.

Datos del viaje:
- Destino o destinos: [CIUDADES O REGIÓN]
- Fechas: [FECHA DE LLEGADA Y DE SALIDA, CON HORAS DE LLEGADA Y SALIDA SI LAS SÉ]
- Alojamiento: [ZONA O DIRECCIÓN APROXIMADA, O "TODAVÍA SIN RESERVAR"]
- Viajeros: [NÚMERO, EDADES Y SI HAY ALGUNA LIMITACIÓN DE MOVILIDAD]
- Cómo nos moveremos: [A PIE, TRANSPORTE PÚBLICO, COCHE DE ALQUILER, TAXI]
- Intereses: [EJ.: MUSEOS, GASTRONOMÍA, NATURALEZA, ARQUITECTURA, COMPRAS, VIDA NOCTURNA]
- Ritmo: [TRANQUILO / MEDIO / INTENSO]
- Presupuesto diario aproximado por persona sin alojamiento: [IMPORTE]
- Imprescindibles: [LUGARES O EXPERIENCIAS QUE NO QUEREMOS PERDERNOS]
- Lo que no nos interesa: [LO QUE EVITAR]

Reglas:
1. Agrupa las visitas por zonas para minimizar desplazamientos. Indica el tiempo aproximado de traslado entre puntos y el medio recomendado.
2. Ten en cuenta el cansancio: el día de llegada y el de salida deben ser más ligeros, y conviene un rato libre cada día.
3. Señala qué sitios suelen requerir reserva previa o entradas con hora, y qué días suelen cerrar los museos o monumentos, avisando de que hay que confirmarlo en la web oficial porque los horarios cambian.
4. Incluye franjas para comer y cenar acordes con los horarios locales, con el tipo de zona o comida recomendada, sin inventar nombres de restaurantes concretos si no estás seguro de que existen.
5. Para cada día, añade un **plan B si llueve** (o si hace demasiado calor, según la época), con actividades a cubierto cerca de la zona prevista.
6. Si mis imprescindibles no caben en el tiempo disponible, dímelo y propón qué recortar.

Formato de salida:
**Resumen del viaje**: tabla con día, zona principal, actividad destacada y nivel de cansancio (bajo/medio/alto).

**Itinerario detallado**, un bloque por día:
- Mañana (con horas orientativas): actividades y traslados.
- Comida.
- Tarde.
- Cena y noche.
- Plan B si llueve.
- Reservas o entradas necesarias.
- Coste estimado del día, marcado como estimación.

**Antes de viajar**: lista de reservas que conviene hacer con antelación, ordenadas por urgencia.

**Consejos prácticos del destino**: transporte, tarjetas turísticas que podrían compensar (con el cálculo de si compensan con este itinerario), propinas y costumbres útiles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Preparar un itinerario de viaje con horarios y desplazamientos realistas y alternativas para días de mal tiempo.',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Organizar un viaje barato con presupuesto cerrado: reparto del gasto y dónde recortar',
                'description'       => 'Reparte un presupuesto de viaje cerrado entre transporte, alojamiento, comida y actividades, con colchón para imprevistos y una lista de dónde recortar.',
                'prompt_content'    => <<<'EOT'
Quiero organizar un viaje con un presupuesto cerrado que no puedo superar. Ayúdame a repartir el dinero entre las distintas partidas, a detectar dónde se suele ir el dinero sin darse cuenta y a decidir dónde recortar si no llega.

Datos:
- Presupuesto total para todo el viaje: [IMPORTE] (indica si incluye o no el transporte hasta el destino)
- Número de viajeros: [NÚMERO Y EDADES]
- Origen y destino: [ORIGEN] → [DESTINO O "ABIERTO A SUGERENCIAS"]
- Duración: [DÍAS]
- Época: [MES O FECHAS]
- Prioridades (ordénalas): [EJ.: 1. COMER BIEN, 2. BUENA UBICACIÓN, 3. ACTIVIDADES]
- En qué no me importa ahorrar: [EJ.: ALOJAMIENTO BÁSICO, VIAJAR DE NOCHE]
- Lo que ya tengo pagado: [SI HAY ALGO]

Instrucciones:
1. Si el destino es abierto, sugiere tres opciones compatibles con el presupuesto y explica por qué encajan. Si el destino es fijo y el presupuesto me parece insuficiente, dímelo claramente.
2. Los precios que des son orientativos: márcalos como estimación, explica en qué te basas y recuérdame que debo comprobarlos, porque no ves precios en tiempo real salvo que tengas búsqueda web.
3. Reserva un colchón para imprevistos de entre el 10% y el 15% del total, salvo que te indique otra cosa.
4. Ten en cuenta gastos que suelen olvidarse: traslados del aeropuerto, tasas turísticas, equipaje, seguro de viaje, comisiones por pagar con tarjeta en otra divisa, propinas, datos móviles.

Formato de salida:
**Reparto del presupuesto**: tabla con partida (transporte, alojamiento, comida, transporte local, actividades, seguro, extras, colchón), importe asignado, porcentaje del total e importe por día y persona.

**Presupuesto diario de bolsillo**: cuánto puedo gastar al día una vez descontado lo que pago por adelantado.

**Dónde recortar**: lista ordenada de mayor a menor ahorro posible, con cuánto se ahorra aproximadamente y qué se pierde a cambio (comodidad, tiempo, flexibilidad). Respeta mis prioridades: no propongas recortar primero en lo que más valoro.

**Gastos trampa**: los cinco gastos que más suelen desbordar el presupuesto en un viaje como este y cómo evitarlos.

**Ideas gratuitas o muy baratas** en el destino, sin inventar eventos concretos con fecha.

**Hoja de control**: una tabla sencilla que pueda copiar a una hoja de cálculo para apuntar el gasto diario y comparar con lo previsto, con una columna de diferencia acumulada.

**Plan si me paso**: qué hacer si a mitad de viaje voy por encima del presupuesto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Planificar un viaje económico sin pasarse del presupuesto, con un reparto claro y un sistema de control del gasto.',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Planificar un viaje en familia con niños: ritmo, descansos y actividades por edad',
                'description'       => 'Plan de viaje adaptado a niños: ritmo y descansos según la edad, actividades para todos, logística de comidas y siestas y lista de equipaje.',
                'prompt_content'    => <<<'EOT'
Ayúdame a planificar un viaje en familia con niños. Quiero un plan en el que los niños disfruten y los adultos también, sin días imposibles ni rabietas por agotamiento. Prefiero un ritmo realista a un plan muy ambicioso.

Datos de la familia y del viaje:
- Adultos: [NÚMERO]
- Niños y edades: [EJ.: 2 AÑOS, 6 AÑOS, 11 AÑOS]
- Necesidades especiales: [SIESTAS, CARRITO, ALERGIAS O INTOLERANCIAS, MAREOS, MOVILIDAD]
- Destino: [DESTINO O "SUGIÉREME"]
- Fechas y duración: [FECHAS]
- Cómo viajamos hasta allí: [COCHE / AVIÓN / TREN] y duración aproximada del trayecto
- Alojamiento: [HOTEL, APARTAMENTO, CAMPING… O "SIN DECIDIR"]
- Lo que les gusta a los niños: [ANIMALES, AGUA, PARQUES, CASTILLOS, DEPORTE…]
- Lo que nos gustaría a los adultos: [INTERESES]
- Presupuesto aproximado: [IMPORTE]

Reglas para el plan:
1. Como máximo una actividad principal por mañana y otra más ligera por la tarde, ajustando según la edad del menor.
2. Respeta los horarios de comidas y siestas de los pequeños. Si hay bebés, prevé dónde calentar comida o cambiar pañales.
3. Indica para cada actividad la edad recomendada, la duración razonable con niños y si es apta para carrito.
4. Incluye momentos para que los niños se muevan libremente (parque, playa, piscina) cada día.
5. Propón al menos una actividad pensada para los adultos que sea compatible con los niños.
6. Avisa de lo que conviene confirmar en la web oficial (horarios, edad mínima, precio de entradas infantiles), porque puede haber cambiado.
7. No inventes nombres de restaurantes o parques concretos si no estás seguro de que existen; en ese caso describe qué tipo de lugar buscar.

Formato de salida:
**Plan resumido**: tabla con día, actividad de mañana, actividad de tarde, nivel de esfuerzo y plan alternativo.

**Detalle por día**, con horas orientativas, comidas, descansos y consejos para esa jornada.

**El trayecto**: cómo hacerlo llevadero (paradas cada [HORAS] horas si es en coche, entretenimiento sin pantallas y con pantallas, qué llevar a mano).

**Lista de equipaje familiar**, separada por adultos, cada niño, botiquín, documentación y "para el trayecto".

**Plan de emergencias**: qué hacer si un niño enferma o se pierde, qué documentación llevar (tarjeta sanitaria, seguro de viaje) y una idea para que los niños lleven un teléfono de contacto.

**Cómo implicar a los niños** en la preparación según su edad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Organizar vacaciones con niños con un ritmo adaptado a su edad y un plan que funcione para toda la familia.',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Prompt para organizar una boda: calendario, presupuesto y lista de proveedores',
                'description'       => 'Plan de boda completo: calendario de tareas hacia atrás desde la fecha, reparto del presupuesto, proveedores a contratar y preguntas clave para cada uno.',
                'prompt_content'    => <<<'EOT'
Actúa como un organizador de bodas con experiencia y ayúdame a planificar la mía. Necesito tres cosas: un calendario de tareas, un reparto del presupuesto y una lista de proveedores con lo que debo preguntar a cada uno. Quiero algo práctico y realista, no una revista de novias.

Datos:
- Fecha de la boda (o mes aproximado): [FECHA]
- Meses que faltan: [NÚMERO]
- Ciudad o zona: [LUGAR]
- Número aproximado de invitados: [NÚMERO]
- Tipo de ceremonia: [CIVIL / RELIGIOSA / SIMBÓLICA] y si será en el mismo lugar que la celebración
- Estilo: [EJ.: INFORMAL, CAMPESTRE, URBANA, CLÁSICA, DESTINO]
- Presupuesto total: [IMPORTE] y quién lo aporta
- Lo que más nos importa: [EJ.: LA COMIDA, LA FOTOGRAFÍA, LA MÚSICA]
- Lo que nos importa poco: [EJ.: FLORES, PAPELERÍA]
- Ayuda disponible (familia, amigos, organizador): [AYUDA]

Instrucciones:
1. **Calendario hacia atrás** desde la fecha de la boda, por bloques (12 meses o más, 9-12, 6-9, 3-6, 1-3, último mes, última semana, el día, después de la boda). Si quedan menos meses de los habituales, señala qué tareas son urgentes y cuáles se pueden simplificar.
2. **Reparto del presupuesto** por partidas, respetando lo que más nos importa. Marca los importes como orientativos y explica que varían mucho por zona y temporada.
3. **Proveedores**: lista de los que necesitaremos según nuestro estilo, con el momento en que conviene contratarlos y entre cinco y ocho preguntas clave para cada uno (qué incluye el precio, condiciones de cancelación, plan en caso de lluvia, horas extra, pagos y plazos).
4. **Trámites legales**: menciona de forma general qué suele requerir una boda civil o religiosa en [PAÍS], pero indica claramente que los requisitos y plazos deben confirmarse en el registro civil, el ayuntamiento o la parroquia, porque pueden variar.
5. **Gastos ocultos** que suelen descuadrar el presupuesto (IVA no incluido, horas extra, transporte de invitados, pruebas de menú, alquiler de mobiliario, propinas).
6. Si el presupuesto no es realista para el número de invitados y el estilo, dilo y propón alternativas.

Formato de salida:
- Resumen de prioridades en cinco líneas.
- Calendario en tabla: periodo | tarea | responsable | hecho (casilla vacía).
- Presupuesto en tabla: partida | importe | porcentaje | notas.
- Ficha por proveedor con sus preguntas.
- Lista de gastos ocultos.
- Plantilla de seguimiento de invitados (nombre, mesa, confirmación, alergias, transporte).
- Guion orientativo del día de la boda con horas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Planificar una boda con un calendario de tareas, un presupuesto repartido y una lista de proveedores a contratar.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Organizar una fiesta de cumpleaños: temática, invitaciones, menú y actividades',
                'description'       => 'Organiza un cumpleaños infantil o de adultos: temática, texto de invitación, menú con cantidades, actividades con horario y lista de compra.',
                'prompt_content'    => <<<'EOT'
Ayúdame a organizar una fiesta de cumpleaños de principio a fin. Quiero ideas concretas y una planificación que pueda seguir sin agobios.

Datos:
- Para quién es: [NOMBRE O "MI HIJA", "MI PAREJA", "YO"] y cuántos años cumple: [EDAD]
- Gustos de la persona homenajeada: [AFICIONES, PERSONAJES, MÚSICA, COMIDA FAVORITA]
- Número de invitados: [NÚMERO] (si es infantil, indica cuántos niños y cuántos adultos)
- Lugar: [CASA, JARDÍN, LOCAL ALQUILADO, PARQUE, RESTAURANTE]
- Fecha y franja horaria: [FECHA Y HORAS]
- Presupuesto: [IMPORTE]
- Restricciones alimentarias conocidas: [ALERGIAS, VEGETARIANOS, ETC.]
- Tiempo que tengo para prepararla: [DÍAS O SEMANAS]
- ¿Es sorpresa?: [SÍ / NO]

Lo que necesito:
1. **Tres propuestas de temática** adaptadas a la edad y los gustos, con una línea sobre decoración, vestimenta sugerida y ambiente de cada una. Recomienda una y explica por qué.
2. **Invitación**: texto para enviar por mensaje y otro para invitación impresa, con fecha, hora, lugar, cómo confirmar y, si procede, qué traer o qué ponerse. Si es sorpresa, incluye instrucciones discretas para los invitados.
3. **Menú** adecuado a la hora de la fiesta (merienda, comida, cena, picoteo), con cantidades aproximadas por persona, opciones para las restricciones indicadas y qué se puede preparar con antelación.
4. **Tarta**: dos o tres ideas acordes con la temática, una casera y otra para encargar.
5. **Actividades y juegos** con horario: cuánto dura cada uno, materiales necesarios y para qué edades sirve. Si es infantil, prevé actividades tranquilas para el final y un plan si llueve en caso de que sea al aire libre.
6. **Decoración** sencilla y barata, con opción de hacerla en casa.
7. Si el presupuesto no da para todo lo anterior, dime en qué ahorrar primero.

Formato de salida:
- Temática elegida y por qué.
- Textos de invitación listos para copiar.
- Menú en tabla: plato | cantidad total | se prepara (día antes / el mismo día) | apto para.
- Programa de la fiesta con horas.
- **Lista de compra** agrupada por tienda o sección, con estimación de coste marcada como orientativa.
- **Calendario de preparación**: qué hacer dos semanas antes, una semana antes, el día anterior y el mismo día.
- Lista de últimos detalles (velas, mechero, bolsas de basura, cargador del altavoz, botiquín).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Preparar una fiesta de cumpleaños infantil o de adultos con un plan completo y una lista de compra.',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Investigar tu árbol genealógico: qué preguntar a la familia, qué archivos consultar y cómo ordenar los datos',
                'description'       => 'Guía para empezar tu árbol genealógico: entrevistas a familiares, archivos y registros donde buscar, y un sistema para ordenar y verificar los datos.',
                'prompt_content'    => <<<'EOT'
Quiero empezar a investigar mi árbol genealógico y necesito un plan de trabajo. No espero que conozcas a mi familia: lo que necesito es un método para recoger información, saber dónde buscar documentos y ordenar los datos sin liarme.

Lo que sé hasta ahora:
- Mis datos de partida: [TU NOMBRE COMPLETO, FECHA Y LUGAR DE NACIMIENTO]
- Padres: [NOMBRES, FECHAS Y LUGARES QUE CONOZCAS]
- Abuelos: [LO QUE SEPAS, AUNQUE SEA INCOMPLETO]
- Generaciones anteriores: [CUALQUIER DATO, HISTORIA O RUMOR FAMILIAR]
- Países y regiones de origen de la familia: [LUGARES]
- Familiares vivos de más edad con quienes puedo hablar: [QUIÉNES]
- Documentos que hay en casa: [LIBRO DE FAMILIA, FOTOS, CARTAS, ESQUELAS, ESCRITURAS…]
- Hasta dónde quiero llegar: [EJ.: BISABUELOS, EL PRIMER ANTEPASADO EN EL PUEBLO, ORIGEN DE UN APELLIDO]

Lo que necesito:
1. **Guion de entrevista familiar**: preguntas para hacer a familiares mayores, agrupadas por temas (nombres y fechas, lugares, oficios, migraciones, anécdotas, fotos y objetos). Incluye consejos para que la conversación sea cómoda, para pedir permiso antes de grabar y para contrastar recuerdos que pueden no ser exactos.
2. **Dónde buscar documentos**: tipos de fuentes útiles según el país y la época (registro civil, archivos parroquiales y diocesanos, padrones municipales, archivos históricos provinciales, censos, registros militares, protocolos notariales, prensa histórica, registros de emigración, plataformas de genealogía). Para cada tipo explica qué información suele contener y a partir de qué años existe aproximadamente. Indica tu nivel de certeza sobre fechas y procedimientos y recomiéndame confirmarlos con el archivo correspondiente, porque los requisitos de acceso cambian.
3. **Cómo pedir certificados o consultar archivos**: pasos generales y qué datos suelen pedir.
4. **Sistema para ordenar los datos**: una ficha por persona (campos recomendados), un sistema de numeración sencillo para los antepasados, cómo anotar la fuente de cada dato y cómo distinguir lo comprobado de lo que es tradición oral.
5. **Errores frecuentes**: confundir personas con el mismo nombre, fiarse de árboles ajenos sin fuentes, variaciones en la grafía de los apellidos.
6. **Privacidad**: cómo tratar los datos de familiares vivos si comparto el árbol en internet.

Formato de salida: plan de trabajo por fases (primer mes, segundo y tercero), seguido de las secciones anteriores. Incluye una plantilla de ficha por persona en tabla y una lista de los primeros cinco pasos concretos que puedo dar esta semana con lo que ya sé.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Empezar a investigar la historia familiar con un método ordenado de entrevistas, archivos y registro de fuentes.',
                'vote_score'        => 58,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Analizar una conversación de WhatsApp: temas, tono y malentendidos',
                'description'       => 'Analiza una conversación propia de WhatsApp para ver temas, tono y malentendidos. Antes de pegarla, quita nombres y teléfonos: incluye datos de terceros.',
                'prompt_content'    => <<<'EOT'
Quiero que analices una conversación de WhatsApp en la que he participado para entender mejor qué ha pasado: de qué se ha hablado, cómo ha cambiado el tono y dónde ha habido malentendidos.

Aviso de privacidad antes de empezar (léelo antes de pegar nada):
- Analiza solo conversaciones en las que yo haya participado. No uses este prompt con conversaciones ajenas obtenidas sin permiso.
- Una conversación contiene datos personales de otras personas. Antes de pegarla, sustituye los nombres por etiquetas (por ejemplo, "Yo", "Persona A", "Persona B"), y borra teléfonos, direcciones, correos, números de cuenta y cualquier dato de salud o sensible que no sea imprescindible.
- Si uso esta conversación en un contexto profesional (por ejemplo, atención al cliente), comprueba que la política de protección de datos de la empresa permite tratarla con una herramienta de IA.
- Si detectas en el texto datos personales que se me hayan pasado (teléfonos, correos, direcciones), avísame y no los repitas en tu respuesta.

Contexto:
- Tipo de conversación: [CON UN CLIENTE / CON MI PAREJA / CON UN AMIGO / GRUPO DE FAMILIA / GRUPO DE TRABAJO]
- Qué etiqueta me corresponde en la conversación: [EJ.: "YO"]
- Qué me preocupa o qué quiero entender: [EJ.: POR QUÉ SE ENFADÓ, SI FUI DEMASIADO BRUSCO, QUÉ SE ACORDÓ AL FINAL]
- Relación con la otra persona y contexto previo relevante: [CONTEXTO]

Instrucciones:
1. Lee la conversación completa antes de opinar.
2. Sé honesto también conmigo: si en algún momento mi mensaje pudo sentar mal o fue ambiguo, dilo con tacto pero con claridad.
3. No diagnostiques a nadie ni atribuyas intenciones o rasgos de personalidad como si fueran hechos. Habla de cómo pueden leerse los mensajes, no de cómo es la gente.
4. Ten en cuenta que en el texto se pierden el tono de voz, los audios, los emojis que no se copian bien y lo hablado fuera del chat.

Formato de salida:
**Resumen** en cinco líneas: de qué trata y cómo termina.

**Temas tratados**: lista con los temas y si quedaron resueltos, pendientes o en desacuerdo.

**Evolución del tono**: cómo cambia a lo largo de la conversación, señalando los mensajes (citados brevemente) donde se produce el giro.

**Posibles malentendidos**: tabla con el mensaje, cómo pudo interpretarlo cada parte y qué lo habría aclarado.

**Acuerdos y compromisos**: qué quedó acordado, quién se comprometió a qué y para cuándo.

**Si quiero responder ahora**: dos propuestas de mensaje, una breve y otra más elaborada, para aclarar o reconducir la situación.

Conversación (ya anonimizada):
[PEGA AQUÍ LA CONVERSACIÓN EXPORTADA O COPIADA]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Entender una conversación de WhatsApp propia, detectar malentendidos y preparar una respuesta, protegiendo los datos de terceros.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para organizar tu vida: rutina diaria y hábitos realistas',
                'description'       => 'Diseña una rutina diaria y un plan de hábitos que encajen con tu energía, tu horario real y tus obligaciones, empezando por poco y con plan para días malos.',
                'prompt_content'    => <<<'EOT'
Ayúdame a organizar mi rutina diaria y a crear hábitos que pueda mantener de verdad. Ya he probado planes perfectos que duran una semana; esta vez quiero algo realista, que tenga en cuenta mi energía, mis obligaciones y los días en que todo sale mal.

Mi situación:
- Trabajo y horario: [EJ.: AUTÓNOMO DESDE CASA, OFICINA DE 9 A 18, TURNOS ROTATIVOS]
- Obligaciones fijas: [HIJOS, CUIDADO DE FAMILIARES, DESPLAZAMIENTOS, CLASES]
- Hora a la que me levanto y me acuesto ahora: [HORAS]
- Cuándo tengo más y menos energía durante el día: [MOMENTOS]
- Cómo es un día normal ahora, de principio a fin: [DESCRÍBELO CON SINCERIDAD]
- Qué me gustaría cambiar: [EJ.: HACER EJERCICIO, LEER, DORMIR MÁS, DEJAR EL MÓVIL POR LA NOCHE, TENER LA CASA ORDENADA]
- Qué he intentado antes y por qué no funcionó: [INTENTOS ANTERIORES]
- Herramientas que uso: [AGENDA EN PAPEL, CALENDARIO DEL MÓVIL, NINGUNA]

Instrucciones:
1. Analiza primero mi día actual y dime dónde se me va el tiempo y la energía, sin juzgarme.
2. Prioriza: de todo lo que quiero cambiar, elige como máximo dos o tres hábitos para empezar y explica por qué esos primero.
3. Diseña cada hábito en su versión mínima (tan pequeña que sea difícil no hacerla) y su versión completa, y asócialo a algo que ya hago cada día.
4. Construye una rutina con bloques horarios flexibles, no con minutos exactos. Deja huecos libres y margen para imprevistos.
5. Incluye un **plan para días malos**: qué es lo mínimo que mantengo cuando estoy cansado, enfermo o con un día caótico.
6. No propongas levantarme a las cinco de la mañana ni rutinas de influencer salvo que encajen con lo que te he contado.
7. Si algo de lo que quiero es incompatible con mi horario, dímelo con sinceridad.

Formato de salida:
**Diagnóstico** de mi día actual en cinco puntos.

**Hábitos elegidos**: tabla con hábito, versión mínima, versión completa, disparador (después de…), momento del día y cómo medirlo.

**Rutina propuesta** para días laborables y otra para fines de semana, por bloques.

**Plan para días malos**.

**Plan de cuatro semanas**: qué añadir cada semana, de forma progresiva.

**Seguimiento**: una tabla semanal sencilla para marcar los hábitos y tres preguntas para revisar cada domingo qué funciona y qué ajustar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Ordenar el día a día y crear hábitos sostenibles adaptados al horario y la energía reales de cada persona.',
                'vote_score'        => 73,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Ahorrar en la compra: lista semanal, comparación de precios y cómo aprovechar ofertas y cupones',
                'description'       => 'Planifica la compra semanal para gastar menos: menú y lista ajustados, comparación por precio por kilo, ofertas y cupones que compensan de verdad.',
                'prompt_content'    => <<<'EOT'
Quiero gastar menos en la compra sin comer peor. Ayúdame a planificar el menú y la lista de la semana, a comparar precios de forma correcta y a aprovechar ofertas y cupones solo cuando de verdad compensan.

Datos:
- Personas en casa y edades: [NÚMERO Y EDADES]
- Presupuesto semanal actual (aproximado) y el que me gustaría: [ACTUAL] → [OBJETIVO]
- Supermercados que tengo cerca: [NOMBRES O TIPOS: DESCUENTO, GRAN SUPERFICIE, MERCADO]
- Restricciones o preferencias alimentarias: [ALERGIAS, VEGETARIANO, SIN GLUTEN…]
- Tiempo para cocinar entre semana: [MINUTOS AL DÍA]
- Equipamiento: [CONGELADOR GRANDE O PEQUEÑO, HORNO, OLLA RÁPIDA…]
- Lo que tengo ahora en la nevera y la despensa: [LISTA]
- Comidas que se hacen fuera de casa: [EJ.: LOS NIÑOS COMEN EN EL COMEDOR]

Instrucciones:
1. Diseña un menú semanal que aproveche lo que ya tengo, reutilice ingredientes en varias comidas y genere poco desperdicio.
2. Haz la lista de la compra agrupada por secciones del supermercado y con cantidades para la semana.
3. Explícame cómo comparar precios bien: precio por kilo o por litro, marcas blancas frente a marcas, formatos grandes que solo compensan si se consumen, productos de temporada.
4. Sobre ofertas y cupones: explica cuáles suelen compensar (descuentos en productos que ya compro, programas de fidelización, "segunda unidad" en productos no perecederos) y cuáles son trampas (comprar algo que no necesito, ofertas en productos que caducan antes de consumirlos). No inventes cupones, códigos ni promociones concretas: no conoces las ofertas vigentes salvo que tengas búsqueda web, y en ese caso indica la fuente y la fecha.
5. Los precios que uses son estimaciones: márcalos así y dime cómo comprobarlos (folleto, web o aplicación del supermercado).
6. Sé sincero si mi objetivo de presupuesto no es realista con mis condiciones.

Formato de salida:
**Menú semanal**: tabla con día, comida y cena, y qué se aprovecha de días anteriores.

**Lista de la compra** por secciones, con cantidad y coste estimado por producto y total.

**Preparación con antelación**: qué cocinar el fin de semana para ahorrar tiempo y dinero entre semana.

**Reglas de comparación de precios** en cinco puntos.

**Ofertas y cupones**: lista de lo que merece la pena vigilar y de las trampas habituales.

**Despensa básica**: productos que conviene tener siempre y comprar cuando están en oferta.

**Seguimiento**: una tabla para apuntar el gasto de cada compra y compararlo con el objetivo durante cuatro semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Reducir el gasto en el supermercado con un menú planificado, una lista ajustada y criterios para ofertas y cupones.',
                'vote_score'        => 68,
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
