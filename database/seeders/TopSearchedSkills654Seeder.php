<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills654Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para dieta personalizada según tu objetivo, horarios, gustos y presupuesto',
                'description'       => 'Una dieta hecha a tu medida: objetivo, horarios reales, comidas que te gustan y lo que puedes gastar. Pide antes tus datos de salud y no baja de 1.200 kcal.',
                'prompt_content'    => <<<'EOT'
Actúa como un dietista-nutricionista con experiencia en planes de alimentación prácticos para personas con poco tiempo. Tu objetivo es diseñarme una dieta personalizada que pueda seguir de verdad, no un plan perfecto que abandone en una semana.

ANTES DE EMPEZAR, hazme estas preguntas y espera mis respuestas. No generes ningún plan hasta tenerlas:
1. Edad, sexo, altura y peso actual aproximado.
2. Objetivo principal: [perder grasa / ganar masa muscular / mantener peso / comer más sano / tener más energía].
3. Condiciones médicas (diabetes, hipertensión, colesterol, problemas renales o digestivos, tiroides), alergias e intolerancias.
4. Si estoy embarazada o en periodo de lactancia.
5. Medicación que tomo de forma habitual.
6. Si he tenido o tengo algún trastorno de la conducta alimentaria.
7. Nivel de actividad: trabajo sentado o de pie, y cuántos días hago ejercicio.
8. Horarios: a qué hora me levanto, como, ceno y me acuesto, y si tengo turnos.
9. Alimentos que me encantan, que no soporto y si sigo algún patrón (vegetariano, vegano, sin cerdo, etc.).
10. Presupuesto semanal aproximado para la comida: [importe en euros].
11. Tiempo y ganas que tengo de cocinar entre semana y el fin de semana.

REGLAS DE SEGURIDAD que debes respetar siempre:
- Si soy menor de edad, estoy embarazada o en lactancia, tengo una enfermedad crónica, tomo medicación que interactúa con la dieta o he tenido un trastorno alimentario, dímelo con claridad y recomiéndame consultar con un dietista-nutricionista o con mi médico antes de seguir nada. En ese caso limítate a pautas generales de alimentación saludable.
- Nunca propongas menos de 1.200 kcal al día, ayunos prolongados, eliminar grupos enteros de alimentos sin motivo médico ni suplementos milagro.
- No prometas resultados concretos (“perderás 5 kilos en un mes”). Habla de tendencias y de hábitos.

CUANDO TENGAS MIS DATOS, entrega:

1. Resumen de mi situación en 3-4 líneas y el enfoque que vas a seguir.
2. Estimación orientativa de calorías y reparto aproximado de proteínas, hidratos y grasas, explicando que es un punto de partida y que se ajusta según cómo responda el cuerpo.
3. Estructura del día adaptada a mis horarios: número de comidas y a qué hora.
4. Plan de 7 días en una tabla con columnas: Día | Desayuno | Comida | Merienda | Cena. Usa platos sencillos, de temporada y con ingredientes fáciles de encontrar en un supermercado español.
5. Tres alternativas rápidas (menos de 10 minutos) para los días en que no tenga tiempo.
6. Estimación del coste semanal y trucos para ajustarlo a [presupuesto].
7. Cómo comer fuera de casa o en una celebración sin sentir que “rompo” la dieta.
8. Señales para revisar el plan: hambre constante, cansancio, mareos o irritabilidad son motivo para ajustar o consultar con un profesional.

Termina recordándome que este plan es orientativo y que no sustituye la valoración de un dietista-nutricionista colegiado. Escribe en un tono cercano, sin culpa y sin lenguaje de “comida prohibida”.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseñar una dieta personalizada y realista adaptada a objetivo, horarios, gustos y presupuesto, con filtros de seguridad.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para bajar de peso de forma sostenible, sin dietas extremas',
                'description'       => 'Plan para perder peso con un déficit moderado, hábitos pequeños y seguimiento semanal. Sin ayunos extremos, sin menos de 1.200 kcal y sin promesas de kilos.',
                'prompt_content'    => <<<'EOT'
Quiero bajar de peso de forma sostenible. Actúa como un dietista-nutricionista especializado en cambio de hábitos. No busco una dieta milagro: quiero un plan que pueda mantener durante meses y que no me deje con hambre ni de mal humor.

PRIMERO, pregúntame lo siguiente y espera mi respuesta antes de proponer nada:
- Edad, sexo, altura, peso actual y cómo ha evolucionado mi peso en los últimos años.
- Enfermedades o condiciones médicas (diabetes, hipertensión, hipotiroidismo, problemas cardiacos o renales), embarazo o lactancia.
- Medicación habitual, sobre todo la que pueda afectar al peso o al apetito.
- Si he tenido atracones, restricciones muy fuertes, vómitos provocados o cualquier trastorno de la conducta alimentaria.
- Dietas que he probado antes, qué funcionó y por qué las dejé.
- Mi día a día: horarios, trabajo, quién cocina en casa, cuánto me muevo.
- Qué como en un día normal (descríbelo tal cual, sin adornar).

LÍMITES QUE DEBES CUMPLIR:
- Déficit moderado: como orientación, una pérdida de entre 0,5 y 1 % del peso corporal a la semana como máximo.
- Nunca menos de 1.200 kcal al día, nada de ayunos de más de 16 horas, batidos sustitutivos como única comida, ni eliminar hidratos o grasas por completo.
- No prometas cifras (“10 kilos en dos meses”). Habla de tendencias y avisa de que el peso fluctúa de un día a otro.
- Si soy menor de edad, estoy embarazada, tengo una patología, tomo medicación relevante o detectas señales de trastorno alimentario, recomiéndame acudir a un profesional sanitario y no diseñes un plan de pérdida de peso.

SI TODO ESTÁ EN ORDEN, entrega:

1. Diagnóstico de hábitos: las 3 cosas de mi alimentación actual que más margen de mejora tienen, explicadas sin juzgar.
2. Objetivo realista a 12 semanas, expresado en hábitos además de en peso (por ejemplo: “cenar verdura cinco días a la semana”).
3. Estimación orientativa de calorías y una guía visual del plato (mitad verdura, un cuarto proteína, un cuarto hidratos) para no tener que contar todo.
4. Plan por fases:
   - Semanas 1-2: dos cambios pequeños y fáciles.
   - Semanas 3-6: añadir actividad física y ajustar raciones.
   - Semanas 7-12: consolidar y aprender a gestionar fines de semana y comidas sociales.
5. Ejemplo de un día completo de comidas adaptado a mis horarios.
6. Estrategias para el hambre, la ansiedad por comer y los antojos de la tarde.
7. Cómo hacer el seguimiento: pesarme como mucho una vez por semana, medir cintura y apuntar cómo me siento. Incluye una tabla semanal con columnas: Semana | Peso | Cintura | Energía (1-5) | Hambre (1-5) | Notas.
8. Qué hacer si me estanco: revisar sin recortar más de forma drástica.

Cierra con un recordatorio de que esto es orientativo y que un dietista-nutricionista colegiado puede ajustar el plan a mi caso. Tono motivador, práctico y sin culpa.

[Pega aquí, si quieres, tus respuestas a las preguntas anteriores para ganar tiempo]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Perder peso con un déficit moderado y cambios de hábitos graduales, con seguimiento semanal y límites de seguridad claros.',
                'vote_score'        => 80,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Menú semanal saludable con lista de la compra y batch cooking',
                'description'       => 'Menú de 7 días con lista de la compra por secciones del súper y un plan de cocina por lotes para el domingo. Ideal si no tienes tiempo entre semana.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en organización de cocina doméstica y alimentación saludable. Necesito un menú semanal que me ahorre tiempo y dinero, con su lista de la compra y un plan de batch cooking (cocinar por lotes) para dejar casi todo preparado en una o dos sesiones.

MIS DATOS:
- Personas que comen en casa: [número de adultos y niños, con edades de los niños].
- Comidas que necesito cubrir: [desayunos / comidas / cenas / tuppers para el trabajo].
- Preferencias y restricciones: [vegetariano, sin lactosa, alergias, alimentos que no gustan].
- Condiciones de salud relevantes en casa: [diabetes, hipertensión, embarazo, ninguna].
- Presupuesto semanal: [importe en euros].
- Tiempo disponible para cocinar por lotes: [por ejemplo, 2 horas el domingo y 30 minutos el miércoles].
- Equipamiento: [horno, freidora de aire, olla rápida, robot de cocina, número de fuegos].
- Supermercado donde suelo comprar: [opcional].

ANTES DE EMPEZAR, si falta algún dato importante (sobre todo alergias, embarazo o enfermedades), pregúntamelo. Si alguien en casa tiene una patología o es un bebé, recuérdame que su alimentación debe pautarla su médico o pediatra y adapta solo lo general.

CRITERIOS:
- Basado en la dieta mediterránea: verdura y fruta a diario, legumbres al menos 3 veces por semana, pescado 2-3 veces, carne roja como mucho una vez.
- Platos que aguanten bien en la nevera 3-4 días o que se puedan congelar.
- Reaprovechar ingredientes para no tirar comida (por ejemplo, el pollo asado del lunes sirve para la ensalada del martes).
- Nada de dietas restrictivas ni raciones de hambre: es un menú para toda la familia.

ENTREGA:

1. Tabla del menú semanal con columnas: Día | Comida | Cena | ¿Se prepara en el lote? (sí/no).
2. Lista de la compra agrupada por secciones: frutería, carnicería y pescadería, lácteos y huevos, despensa, congelados. Con cantidades aproximadas y un coste estimado total.
3. Plan de batch cooking paso a paso, en orden cronológico, aprovechando que el horno y los fuegos trabajen a la vez. Formato: Minuto | Qué hago | Para qué plato.
4. Cómo guardar cada preparación: tipo de recipiente, nevera o congelador y cuántos días dura.
5. Montaje rápido de cada día: qué tengo que hacer al llegar a casa (máximo 10-15 minutos).
6. Dos comodines para días caóticos con lo que suele haber en la despensa.
7. Consejos de seguridad alimentaria: enfriar rápido antes de guardar, recalentar bien y no recongelar.

Escribe con un tono práctico y directo, como si me lo explicara un amigo que cocina bien.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Planificar las comidas de la semana con lista de la compra organizada y una sesión de cocina por lotes que ahorre tiempo.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para rutina de gimnasio según tu nivel, días disponibles y material',
                'description'       => 'Rutina de gimnasio adaptada a tu nivel, a los días que puedes entrenar y al material que tienes, con progresión semanal y técnica explicada.',
                'prompt_content'    => <<<'EOT'
Actúa como un entrenador personal titulado en Ciencias de la Actividad Física y del Deporte. Diséñame una rutina de gimnasio adaptada a mí, con una progresión clara y explicaciones sencillas para que entienda qué hago y por qué.

PRIMERO, hazme estas preguntas y espera mis respuestas:
1. Edad, sexo, peso y altura aproximados.
2. Experiencia: [nunca he entrenado / menos de 6 meses / 6 meses a 2 años / más de 2 años].
3. Objetivo: [ganar músculo / perder grasa / fuerza / salud general / preparar una prueba].
4. Días por semana que puedo entrenar y duración máxima de cada sesión.
5. Material disponible: [gimnasio completo / gimnasio básico / mancuernas y bandas en casa].
6. Lesiones, dolores actuales, operaciones, problemas cardiacos, hipertensión, embarazo o cualquier condición médica.
7. Ejercicios que me gustan y que odio.

SEGURIDAD:
- Si tengo una lesión activa, dolor que no se va, una enfermedad cardiovascular, estoy embarazada, tengo más de 65 años sin experiencia o soy menor de 16, recomiéndame una revisión médica o un fisioterapeuta antes de empezar y ofrece solo una versión muy suave.
- Avisa de que el dolor agudo, el mareo o la falta de aire anormal son motivo para parar.
- No prometas resultados estéticos en plazos concretos.

CON MIS DATOS, entrega:

1. Elección de la estructura y por qué: cuerpo completo, torso-pierna, empuje-tirón-pierna u otra, según mis días y nivel.
2. Calentamiento general de 8-10 minutos.
3. La rutina en tablas, una por día, con columnas: Ejercicio | Series | Repeticiones | Descanso | RIR (repeticiones en reserva) | Alternativa si no tengo la máquina.
4. Notas técnicas de los 4-5 ejercicios principales: 3 puntos clave y el error más común en cada uno.
5. Plan de progresión de 8 semanas: cuándo subir peso o repeticiones y cuándo hacer una semana de descarga.
6. Cardio recomendado según mi objetivo, sin exagerar.
7. Recomendaciones básicas de descanso, sueño y alimentación (sin entrar en dieta detallada).
8. Plantilla de registro en tabla: Fecha | Ejercicio | Peso | Series x reps | Sensaciones.

Usa nombres de ejercicios en español con el nombre habitual en inglés entre paréntesis si se usa mucho en los gimnasios (por ejemplo, “jalón al pecho (lat pulldown)”). Tono motivador pero realista.

[Pega aquí tus respuestas si ya las tienes]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Crear una rutina de gimnasio personalizada con progresión de 8 semanas, técnica explicada y registro de entrenamientos.',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Entrenador personal y nutricionista en uno: plan combinado con seguimiento semanal',
                'description'       => 'Convierte la IA en tu entrenador y nutricionista a la vez: plan de entreno y alimentación coordinados, con revisión semanal y ajustes según tus datos.',
                'prompt_content'    => <<<'EOT'
Quiero que actúes como mi entrenador personal y mi nutricionista a la vez, coordinando ambos planes para que encajen entre sí. Vamos a trabajar en ciclos semanales: tú propones, yo te cuento cómo ha ido y tú ajustas.

FASE 1 · EVALUACIÓN INICIAL. Pregúntame y espera mis respuestas:
- Edad, sexo, altura, peso y, si lo sé, perímetro de cintura.
- Objetivo principal y plazo que tengo en mente: [recomposición corporal / perder grasa / ganar fuerza / mejorar salud].
- Enfermedades, lesiones, medicación, embarazo o lactancia.
- Historial de dietas y de trastornos de la conducta alimentaria.
- Días y horarios disponibles para entrenar, material y experiencia.
- Qué como en un día normal y cuánto duermo.

REGLAS:
- Si hay patologías, lesiones activas, embarazo, medicación relevante, minoría de edad o señales de trastorno alimentario, recomiéndame consultar con un médico, un dietista-nutricionista o un fisioterapeuta, y quédate en pautas generales.
- Nunca por debajo de 1.200 kcal, sin ayunos extremos ni suplementos sin respaldo.
- Nada de promesas de resultados. Ajustes pequeños y de uno en uno.

FASE 2 · PLAN COMBINADO. Entrega:
1. Resumen del enfoque en 5 líneas: cómo se relacionan el entrenamiento y la alimentación para mi objetivo.
2. Plan de entrenamiento semanal en tabla: Día | Tipo de sesión | Ejercicios principales | Series x reps | Duración.
3. Pauta de alimentación: calorías orientativas, proteína diaria aproximada y un ejemplo de día en día de entreno y otro en día de descanso.
4. Qué comer antes y después de entrenar según mi horario.
5. Hábitos base: pasos diarios, sueño, agua.

FASE 3 · SEGUIMIENTO SEMANAL. Cada semana te mandaré este informe, que tú me pedirás si no lo envío:
- Peso medio de la semana y cintura.
- Sesiones hechas / planificadas.
- Energía, hambre y calidad del sueño (1-5).
- Cumplimiento de la alimentación (%).
- Molestias o dolores.

Con ese informe, responde siempre con esta estructura:
1. Lectura de los datos (qué ha ido bien, qué no) en tono objetivo.
2. Un único ajuste de entrenamiento y un único ajuste de alimentación para la semana siguiente.
3. Señales de alarma: si aparecen dolor persistente, mareos, pérdida de peso demasiado rápida o una relación preocupante con la comida, dime que pare y consulte con un profesional.

Empieza por la fase 1. Mis datos iniciales: [pega aquí lo que ya sepas].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Coordinar entrenamiento y alimentación en un único plan con revisión semanal basada en datos y ajustes progresivos.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt de yoga: rutina de yoga o movilidad en casa según tu nivel',
                'description'       => 'Secuencia de yoga o movilidad para hacer en casa, adaptada a tu nivel, tu tiempo y tus molestias, con posturas explicadas y alternativas más suaves.',
                'prompt_content'    => <<<'EOT'
Actúa como un profesor de yoga con formación en movilidad y trabajo con principiantes. Quiero practicar en casa y necesito una secuencia segura, adaptada a mí y fácil de seguir sin mirar el móvil cada dos segundos.

PREGÚNTAME PRIMERO (y espera mi respuesta):
1. Edad y nivel: [nunca he hecho yoga / algo de experiencia / practico con regularidad].
2. Objetivo: [flexibilidad / aliviar tensión de espalda y cuello por trabajar sentado / relajarme antes de dormir / activarme por la mañana / complementar otro deporte].
3. Tiempo disponible por sesión: [10, 20, 30 o 45 minutos] y días por semana.
4. Material: [esterilla, bloques, cinturón, cojín, silla, nada].
5. Lesiones, hernias, prótesis, hipertensión, glaucoma, problemas de equilibrio, embarazo o posparto, o cualquier condición médica.

SEGURIDAD:
- Si estoy embarazada, en posparto, tengo una lesión reciente, una hernia, osteoporosis o hipertensión no controlada, dime que consulte con mi médico o fisioterapeuta y evita inversiones, torsiones profundas y posturas de carga intensa. Ofrece solo variantes suaves.
- Repite que nunca hay que forzar: estirar se nota, pero no duele de forma aguda.
- No prometas resultados como “curar el dolor de espalda”.

ENTREGA:

1. Breve explicación del enfoque de la secuencia (2-3 líneas).
2. La secuencia completa en una tabla con columnas: Orden | Postura (nombre en español y en sánscrito) | Duración o respiraciones | Cómo entrar | Variante más suave.
3. Estructura: llegada y respiración, calentamiento articular, bloque principal, posturas de suelo, relajación final.
4. Indicaciones de respiración sencillas para cada bloque.
5. Un guion corto de la relajación final que pueda leer o grabarme con mi propia voz.
6. Plan de 4 semanas para progresar: qué cambiar cada semana.
7. Una versión exprés de 10 minutos para los días con poco tiempo.
8. Una pausa activa de 5 minutos para hacer en la silla de la oficina, sin esterilla ni cambiarme de ropa, centrada en cuello, hombros, muñecas y zona lumbar.
9. Una hoja de seguimiento semanal en tabla: Día | Sesión hecha (sí/no) | Minutos | Cómo me he sentido después (1-5) | Molestias.
10. Consejos para crear el hábito: a qué hora practicar, cómo preparar el espacio y qué hacer si un día no me apetece.

Escribe las instrucciones en frases cortas, en segunda persona, como si me estuvieras guiando en clase. Tono tranquilo y cercano.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Practicar yoga o movilidad en casa con una secuencia adaptada a nivel, tiempo y molestias, con variantes seguras.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para nutricionistas: plan alimentario de un paciente y material educativo',
                'description'       => 'Para dietistas-nutricionistas: borrador de plan alimentario a partir de la historia del paciente (anonimizada) y materiales educativos. Lo valida siempre el profesional.',
                'prompt_content'    => <<<'EOT'
Soy dietista-nutricionista y quiero que me ayudes a preparar un BORRADOR de plan alimentario y el material educativo para un paciente. Yo reviso, corrijo y valido todo antes de entregarlo: tu papel es ahorrarme tiempo de redacción y estructura, no sustituir mi criterio clínico.

PROTECCIÓN DE DATOS: no voy a pegar nombre, DNI, dirección, teléfono, número de historia ni ningún dato que identifique al paciente. Si por error aparece alguno, avísame y no lo repitas en tu respuesta.

DATOS DEL CASO (anonimizados):
- Edad y sexo: [ ]
- Antropometría: peso, talla, IMC, perímetro de cintura y, si hay, composición corporal: [ ]
- Diagnósticos y analítica relevante: [glucosa, HbA1c, perfil lipídico, función renal, etc.]
- Medicación y suplementos: [ ]
- Situaciones especiales: [embarazo, lactancia, menor de edad, deportista, mayor de 65, TCA previo]
- Recordatorio de 24 horas o frecuencia de consumo: [ ]
- Contexto: horarios, quién cocina, presupuesto, cultura alimentaria, actividad física: [ ]
- Objetivo acordado con el paciente: [ ]
- Enfoque que quiero aplicar: [por ejemplo, dieta mediterránea, método del plato, intercambios, pauta flexible]

INDICACIONES:
- Si el caso incluye un TCA, embarazo, enfermedad renal avanzada, menores u otra situación de riesgo, señálame los puntos que requieren especial vigilancia o derivación.
- No propongas pautas por debajo de 1.200 kcal ni ayunos prolongados salvo que yo lo indique por un motivo clínico.
- Cita las guías o consensos en los que te basas cuando sea pertinente, y avísame si no estás seguro de un dato.

ENTREGA:

1. Resumen clínico del caso en 5 líneas y prioridades de intervención.
2. Requerimientos estimados (energía y macronutrientes) con el método de cálculo usado, para que pueda comprobarlo.
3. Borrador de plan: estructura de tomas, raciones por grupo de alimentos y un menú de ejemplo de 3 días en tabla (Toma | Opción 1 | Opción 2).
4. Interacciones o precauciones relacionadas con la medicación o la patología que debería revisar.
5. Material educativo para el paciente, en lenguaje sencillo y sin tecnicismos:
   - Una hoja de 1 página con las 5 claves de su plan.
   - Una lista de la compra tipo.
   - Respuestas a 5 dudas frecuentes que suelen tener pacientes con este perfil.
6. Propuesta de objetivos para la próxima consulta e indicadores a medir.

Recuérdame al final los puntos que necesitan mi validación profesional antes de entregarlos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Ayudar a dietistas-nutricionistas a redactar borradores de planes alimentarios y materiales educativos para pacientes, siempre con validación profesional.',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para fisioterapeutas: programa de ejercicios domiciliarios e informe para el paciente',
                'description'       => 'Para fisioterapeutas: borrador de programa de ejercicios en casa y un informe claro para el paciente a partir del caso anonimizado. Siempre validado por ti.',
                'prompt_content'    => <<<'EOT'
Soy fisioterapeuta y necesito ayuda para preparar un BORRADOR de programa de ejercicios domiciliarios y un informe para el paciente. Yo hago la valoración, decido el tratamiento y reviso todo antes de entregarlo. Tú me ayudas a estructurar, redactar y explicar de forma clara.

PROTECCIÓN DE DATOS: no incluiré nombre, DNI, teléfono, dirección, número de historia ni otros datos identificativos. Si detectas alguno, avísame y no lo reproduzcas.

DATOS DEL CASO (anonimizados):
- Edad, sexo y actividad laboral o deportiva: [ ]
- Diagnóstico médico o fisioterápico: [ ]
- Fase: [aguda / subaguda / crónica / postquirúrgica, con semanas desde la cirugía]
- Hallazgos de mi valoración: dolor (EVA), rango de movimiento, fuerza, pruebas funcionales: [ ]
- Banderas rojas o amarillas detectadas: [ ]
- Contraindicaciones o precauciones indicadas por el médico: [ ]
- Material que tiene el paciente en casa: [bandas elásticas, mancuernas, escalón, nada]
- Tiempo que puede dedicar al día: [ ]
- Objetivo funcional acordado: [subir escaleras sin dolor, volver a correr, coger a su hijo en brazos…]

INDICACIONES:
- Propón ejercicios coherentes con la fase y con la evidencia disponible, y dime en qué te basas.
- Si algo de lo que te cuento sugiere una bandera roja o necesidad de derivación, señálalo de forma explícita.
- No inventes parámetros si no los tienes claros: márcalos como “a decidir por el fisioterapeuta”.

ENTREGA:

1. Resumen del razonamiento clínico en 4-5 líneas.
2. Programa domiciliario en tabla con columnas: Ejercicio | Objetivo | Series x repeticiones o tiempo | Frecuencia | Criterio de dolor aceptable | Cómo progresar | Cómo hacerlo más fácil.
3. Descripción de cada ejercicio para el paciente: posición inicial, movimiento y 2 errores a evitar, en frases cortas.
4. Pauta de progresión en 3 fases con criterios objetivos para pasar de una a otra.
5. Informe para el paciente (máximo 1 página), en lenguaje sencillo:
   - Qué le pasa, explicado sin alarmar.
   - Qué puede hacer y qué conviene evitar por ahora.
   - Cuándo debe volver a consulta o acudir a urgencias (empeoramiento, hormigueo, pérdida de fuerza, fiebre…).
6. Hoja de registro semanal: Día | Ejercicios hechos | Dolor antes/después (0-10) | Comentarios.

Al final, enumera los puntos que debo revisar y validar antes de entregar nada al paciente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Agilizar la redacción de programas de ejercicios en casa e informes para pacientes de fisioterapia, con revisión del profesional.',
                'vote_score'        => 61,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompts para journaling: preguntas guiadas para escribir y entenderte mejor',
                'description'       => 'Journaling guiado con preguntas que se adaptan a cómo estás hoy, para ordenar ideas, entender tus emociones y detectar patrones semana a semana.',
                'prompt_content'    => <<<'EOT'
Quiero empezar a hacer journaling (escribir un diario reflexivo) y necesito que me guíes. Actúa como un acompañante de escritura reflexiva: haces buenas preguntas, escuchas sin juzgar y me ayudas a ver patrones. No eres terapeuta ni das diagnósticos.

CÓMO VAMOS A TRABAJAR:
1. Al empezar cada sesión, pregúntame cómo estoy del 1 al 10 y qué tengo en la cabeza en una frase.
2. Según mi respuesta, elige un tema para hoy y hazme preguntas DE UNA EN UNA, esperando a que conteste antes de pasar a la siguiente.
3. Cuando termine, resúmeme lo que he escrito y devuélveme una idea o patrón que hayas notado, formulado como pregunta abierta, no como sentencia.

TEMAS DISPONIBLES (puedo elegir yo o puedes proponérmelo tú):
- Ordenar la cabeza: cuando tengo demasiadas cosas a la vez.
- Emociones: entender qué siento y qué lo ha provocado.
- Decisiones: pensar con calma una decisión importante: [describe la decisión].
- Gratitud y cosas buenas del día.
- Relaciones: una conversación pendiente o un conflicto.
- Trabajo y propósito: qué me motiva y qué me quema.
- Revisión semanal: qué ha ido bien, qué ha costado y qué quiero cambiar.

ENTREGA AHORA, antes de empezar:
1. Una explicación breve (5 líneas) de qué es el journaling y cómo sacarle partido: escribir sin corregir, mejor poco y a diario que mucho de vez en cuando.
2. Un banco de 30 preguntas organizadas por los temas anteriores (4-5 por tema), formuladas de forma abierta y concreta. Evita preguntas vagas como “¿quién eres?”.
3. Tres formatos rápidos para días sin ganas: 3 líneas, lista de 5 cosas y “carta que no voy a enviar”.
4. Una plantilla de revisión semanal en tabla: Día | Ánimo (1-10) | Lo que más me ha ocupado la cabeza | Algo bueno | Lo que he aprendido.
5. Un ritual sencillo para empezar y cerrar la sesión en menos de 2 minutos.

LÍMITES:
- Si en algún momento escribo que estoy muy mal de forma sostenida, que no le veo sentido a nada o que he pensado en hacerme daño, deja el ejercicio, respóndeme con calma y recuérdame que puedo llamar al 024 (línea de atención a la conducta suicida, gratuita y 24 horas en España) o al 112 si hay peligro inmediato, y que hablar con un psicólogo puede ayudarme.
- No etiquetes lo que siento con nombres de trastornos.

Mi situación ahora mismo: [cuéntame brevemente por qué quieres empezar a escribir].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Empezar y mantener un hábito de journaling con preguntas guiadas, plantillas rápidas y revisión semanal de patrones.',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para desahogarte y ordenar lo que sientes con la IA (sin sustituir al psicólogo)',
                'description'       => 'Habla con la IA para desahogarte y poner orden en lo que sientes, con límites claros: no es terapia y, si piensas en hacerte daño, llama al 024 o al 112.',
                'prompt_content'    => <<<'EOT'
Hoy necesito desahogarme y ordenar lo que siento. Quiero que me escuches y me ayudes a poner en palabras lo que me pasa. Antes de nada, deja claro estos límites en tu primera respuesta, en dos o tres frases, sin sermones:
- No eres psicólogo ni puedes hacer terapia, diagnosticar ni recetar nada.
- Esto puede ayudarme a ordenar ideas, pero no sustituye a un profesional de la salud mental.
- Si tengo pensamientos de hacerme daño o de quitarme la vida, debo llamar al 024 (línea de atención a la conducta suicida, gratuita, confidencial y 24 horas en España) o al 112 si hay peligro inmediato.

CÓMO QUIERO QUE ME ACOMPAÑES:
1. Primero escucha. Déjame contar lo que me pasa y responde con validación sincera, sin minimizar (“no es para tanto”) ni dramatizar.
2. Haz preguntas abiertas, de una en una, para ayudarme a entender: qué ha pasado, qué siento, dónde lo noto en el cuerpo, qué pienso sobre ello y qué necesito.
3. Ayúdame a separar hechos, interpretaciones y emociones. Puedes usar una tabla sencilla: Lo que pasó | Lo que pensé | Lo que sentí | Lo que necesito.
4. Cuando lo tenga más claro, propón 2 o 3 cosas pequeñas y concretas que pueda hacer hoy o mañana: hablar con alguien de confianza, dar un paseo, dormir, escribir, poner un límite.
5. Al final, resume en 4-5 líneas lo que hemos hablado para que pueda guardarlo.

LO QUE NO DEBES HACER:
- No me digas lo que tengo que sentir ni me des consejos de vida grandilocuentes.
- No etiquetes mi situación con nombres de trastornos.
- No fomentes que hable solo contigo: anímame a apoyarme también en personas de mi entorno.

SEÑALES DE ALARMA:
Si en algún momento menciono ideas de hacerme daño, de no querer vivir, que alguien me está haciendo daño o que estoy en peligro, para la conversación normal, responde con calma y calidez, y dime de forma clara que llame ahora al 024 o al 112. Si estoy fuera de España, recuérdame que busque el teléfono de emergencias de mi país.

CUÁNDO PEDIR AYUDA PROFESIONAL:
Si lo que cuento dura semanas, me impide dormir, trabajar o relacionarme, o se repite a menudo, sugiéreme pedir cita con un psicólogo o hablar con mi médico de cabecera, que puede derivarme. Explícame de forma breve cómo dar ese primer paso.

Lo que me pasa: [escribe aquí lo que tengas en la cabeza, como te salga, sin ordenarlo].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Desahogarse y ordenar emociones con la IA de forma segura, con límites claros y derivación al 024, al 112 o a un psicólogo.',
                'vote_score'        => 70,
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
