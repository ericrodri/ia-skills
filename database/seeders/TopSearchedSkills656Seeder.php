<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills656Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para decorar una habitación a partir de una foto: estilo, paleta, muebles y presupuesto',
                'description'       => 'Sube una foto de tu habitación y recibe una propuesta de decoración con estilo, paleta de colores, lista de muebles y presupuesto por partidas.',
                'prompt_content'    => <<<'EOT'
Actúa como interiorista con experiencia en reformas pequeñas y decoración de pisos reales, no de revista. Te adjunto una foto de mi habitación (es mía, la he hecho yo). Quiero redecorarla sin obras y con un presupuesto ajustado.

DATOS DE LA HABITACIÓN
- Tipo de estancia: [dormitorio / salón / habitación juvenil / despacho / cuarto de invitados]
- Medidas aproximadas: [largo x ancho en metros, altura del techo]
- Orientación y luz natural: [mucha luz de mañana / poca luz / ventana al patio]
- Lo que quiero conservar: [cama, armario empotrado, suelo, sofá...]
- Lo que no me gusta ahora: [describe en una o dos frases]
- Quién la usa y para qué: [dormir, teletrabajar, leer, que jueguen los niños...]
- Estilos que me gustan: [nórdico, japandi, mediterráneo, industrial, clásico renovado, no lo sé]
- Presupuesto máximo total: [cantidad en euros]
- ¿Vivo de alquiler?: [sí / no] (si es sí, nada de taladrar azulejos ni pintar sin permiso del casero)

LO QUE NECESITO QUE HAGAS
1. Analiza la foto: describe lo que ves (distribución, colores dominantes, luz, puntos fuertes y problemas). Si algo no se aprecia bien en la imagen, dímelo en lugar de inventarlo.
2. Propón dos direcciones de estilo distintas que encajen con lo que conservo. Para cada una explica en tres líneas por qué funciona en este espacio.
3. Para la dirección que recomiendes, dame una paleta de 4 o 5 colores con su función (base, secundario, acento, madera o metal) y una referencia aproximada de tono que pueda pedir en una tienda de pinturas.
4. Distribución: dónde colocar cada mueble, qué mover y qué espacio de paso hay que dejar libre (mínimo 70-80 cm).
5. Iluminación en tres capas: general, de tarea y ambiental, con temperatura de color recomendada.
6. Textiles, alfombra, cortinas y dos o tres objetos decorativos, sin recargar.

FORMATO DE SALIDA
- Diagnóstico de la foto (máximo 8 líneas).
- Tabla de compra con columnas: Elemento | Descripción concreta | Medidas | Precio orientativo | Prioridad (imprescindible / si sobra dinero).
- Suma total y comprobación de que no supera [presupuesto]. Si lo supera, indica qué recortar primero.
- Plan por fases: qué hacer este fin de semana, qué en el mes siguiente.
- Tres errores típicos que debo evitar en una habitación como la mía.

Reglas: precios orientativos del mercado español, sin nombrar tiendas concretas salvo que te lo pida. No recomiendes nada que exija obra. Si con la foto no puedes saber algo importante (por ejemplo, el tamaño real de la ventana), pregúntamelo antes de cerrar la propuesta.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Redecorar un dormitorio, salón o despacho sin obras partiendo de una foto real y un presupuesto cerrado.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para diseñar una cocina: distribución, triángulo de trabajo y materiales',
                'description'       => 'Diseña la distribución de tu cocina con el triángulo de trabajo, medidas de paso, almacenaje y materiales según uso y presupuesto.',
                'prompt_content'    => <<<'EOT'
Eres diseñador de cocinas con experiencia en viviendas españolas, donde las cocinas suelen ser estrechas y con tomas de agua y humos ya fijadas. Ayúdame a diseñar mi cocina antes de pedir presupuestos.

DATOS
- Medidas de la planta: [largo x ancho en cm, y altura]
- Posición de puertas y ventanas: [describe en qué pared está cada una y su ancho]
- Toma de agua y desagüe actuales: [pared y posición]
- Salida de humos: [sí, en la pared X / no hay, necesito campana de recirculación]
- Tipo de cocina que imagino: [lineal / en L / en U / paralela / con isla / con península]
- Personas en casa y cuánto cocinamos: [ejemplo: 3 personas, cocinamos a diario]
- Electrodomésticos imprescindibles: [lavavajillas, horno en columna, frigorífico combi o americano, lavadora...]
- Presupuesto orientativo: [cantidad en euros, con o sin electrodomésticos]
- Preferencias estéticas: [colores, madera, blanco mate, encimera clara u oscura]

TAREAS
1. Comprueba si la distribución que imagino cabe con mis medidas. Si no cabe, dilo claramente y propón la alternativa que mejor aprovecha el espacio.
2. Diseña el triángulo de trabajo (fregadero, placa y frigorífico): indica la distancia aproximada entre cada vértice y si la suma está en un rango cómodo (entre 4 y 7 metros, sin lados demasiado cortos ni muy largos).
3. Define las zonas en orden de uso: almacenaje de comida, lavado, preparación, cocción y servicio. Indica cuántos centímetros de encimera libre quedan entre fregadero y placa (lo ideal es 60 cm o más).
4. Medidas clave: pasillo libre entre muebles enfrentados, altura de encimera según mi estatura [tu estatura en cm], altura de la campana sobre la placa.
5. Almacenaje: módulos recomendados (cajoneras, esquineros, columnas, despensa extraíble) y dónde va cada uno.
6. Materiales: compara tres opciones de encimera y dos de frentes con ventajas, inconvenientes, mantenimiento y rango de precio.
7. Iluminación bajo muebles altos y enchufes: cuántos y dónde.

FORMATO DE SALIDA
- Esquema en texto de cada pared, de izquierda a derecha, con el ancho de cada módulo en cm (por ejemplo: "Pared A: columna horno 60 | cajonera 60 | fregadero 80 | lavavajillas 60").
- Tabla de materiales: Material | Uso | Pros | Contras | Precio orientativo por metro lineal.
- Lista de preguntas que debo hacer a la tienda o al montador antes de firmar.
- Resumen de riesgos: qué cambios obligan a mover instalaciones y encarecen la obra.

Si te faltan datos, pregúntame antes de dibujar el esquema. Recuerda que mover gas o desagües requiere un profesional cualificado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Planificar la distribución y los materiales de una cocina antes de pedir presupuestos a una tienda o carpintero.',
                'vote_score'        => 64,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para reformar tu casa: fases, presupuesto orientativo y qué pedir a los profesionales',
                'description'       => 'Organiza la reforma de tu vivienda por fases, con presupuesto orientativo, orden de gremios, permisos y las preguntas clave para cada profesional.',
                'prompt_content'    => <<<'EOT'
Actúa como jefe de obra con experiencia en reformas de viviendas en España. Quiero planificar la reforma de mi casa para no improvisar ni dejarme engañar. Aviso importante que debes repetir en tu respuesta: esta planificación no sustituye a un arquitecto, aparejador o técnico competente. Si la reforma toca muros de carga, forjados, fachada o instalaciones de gas, hace falta un técnico y, normalmente, licencia municipal.

MI SITUACIÓN
- Tipo de vivienda: [piso / casa unifamiliar], año aproximado de construcción: [año]
- Metros cuadrados: [m2] y número de estancias: [número]
- Qué quiero reformar: [cocina, baños, suelos, ventanas, electricidad, fontanería, pintura, tirar un tabique...]
- Estado actual que conozco: [humedades, instalación eléctrica antigua, tuberías de plomo, nada destacable]
- ¿Viviré en la casa durante la obra?: [sí / no]
- Presupuesto disponible: [cantidad en euros] y margen de imprevistos que acepto: [porcentaje]
- Plazo deseado: [semanas o fecha]
- Comunidad de vecinos: [sí, con horarios / no]

LO QUE NECESITO
1. Clasifica cada trabajo: reforma menor (normalmente comunicación previa) o reforma que probablemente necesite proyecto técnico y licencia. Indica que debo confirmarlo en mi ayuntamiento.
2. Orden lógico de la obra: demoliciones, instalaciones (fontanería, electricidad), albañilería, carpintería, alicatado, suelos, pintura, montaje de cocina y limpieza. Explica por qué no se pueden alterar ciertos pasos.
3. Presupuesto orientativo por partida, con un rango bajo y alto, y un colchón para imprevistos del 10-15 %.
4. Calendario por semanas con los gremios que coinciden y los tiempos de secado.
5. Qué pedir a cada profesional: presupuesto desglosado por partidas con mediciones, calidades y marcas de material, plazo, forma de pago, garantía por escrito, seguro de responsabilidad civil y quién gestiona los escombros.
6. Señales de alarma en un presupuesto (pagos por adelantado excesivos, partidas sin medir, «todo incluido» sin detalle).

FORMATO DE SALIDA
- Aviso inicial sobre cuándo hace falta técnico.
- Tabla: Fase | Trabajos | Gremio | Duración estimada | Coste orientativo (mín.-máx.) | ¿Necesita técnico o licencia?
- Calendario semana a semana.
- Lista de comprobación para comparar al menos tres presupuestos.
- Diez preguntas que debo hacer antes de firmar.

Si algo de lo que describo suena a problema estructural (grietas, techos combados, vigas dañadas), dímelo de forma clara y recomiéndame consultar con un técnico antes de seguir planificando.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Planificar una reforma integral o parcial y comparar presupuestos de gremios con criterio.',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para render realista de un espacio a partir de un plano o una foto',
                'description'       => 'Convierte un plano o una foto de tu espacio en un render realista con luz, materiales y encuadre definidos, sin alterar la arquitectura.',
                'prompt_content'    => <<<'EOT'
Quiero obtener un render realista de un espacio interior o exterior a partir de un plano o de una foto que te adjunto. La imagen es mía o tengo permiso para usarla. Trabajaremos en dos pasos: primero me ayudas a definir el encargo y después generas la imagen.

PASO 1. ANÁLISIS DE LA REFERENCIA
Describe lo que ves en la imagen adjunta: tipo de espacio, dimensiones aparentes, posición de puertas, ventanas, pilares y mobiliario fijo. Enumera los elementos que NO se pueden modificar en el render (geometría de muros, huecos, techo, vigas). Si es un plano, dime qué cotas lees y cuáles no se distinguen bien.

PASO 2. DATOS DEL RENDER
- Tipo de espacio: [salón, cocina, terraza, local comercial, dormitorio]
- Uso del render: [enseñar a mi familia, vender o alquilar, presentar a un cliente, decidir materiales]
- Estilo: [contemporáneo cálido, nórdico, mediterráneo, industrial...]
- Materiales: suelo [material y tono], paredes [color o acabado], carpinterías [color], encimeras o textiles [descripción]
- Mobiliario principal: [lista breve]
- Hora del día y luz: [mañana con luz lateral suave / atardecer cálido / luz artificial de noche]
- Punto de vista: [desde la puerta de entrada, a la altura de los ojos, 1,6 m / vista cenital / esquina opuesta a la ventana]
- Formato: [horizontal 16:9 / vertical 4:5 / cuadrado]

PASO 3. PROMPT DE GENERACIÓN
Redacta un prompt de imagen en este orden: encuadre y cámara (objetivo equivalente a 24-35 mm para interiores, líneas verticales rectas), arquitectura fija que debe respetarse, materiales con texturas concretas, iluminación (fuente, dirección, temperatura de color, sombras suaves), mobiliario y decoración, ambiente final. Añade una frase de restricciones: no cambiar la forma de la estancia, no añadir ventanas ni puertas, no incluir personas, no incluir texto, logotipos ni marcas reconocibles.

PASO 4. GENERACIÓN Y REVISIÓN
Genera la imagen. Después revísala tú mismo con esta lista: ¿se respeta la geometría?, ¿las proporciones de los muebles son creíbles?, ¿la luz entra por las ventanas correctas?, ¿hay deformaciones en líneas rectas? Indica qué corregirías y propón el prompt ajustado.

FORMATO DE SALIDA
- Análisis de la referencia (lista).
- Prompt final en un bloque de texto listo para copiar.
- Imagen generada.
- Lista de revisión con «correcto / mejorable» y el prompt de corrección.

Recuerda: un render generado con IA es orientativo y no sirve como documentación técnica ni como medición.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Visualizar cómo quedará un espacio reformado o amueblado antes de comprar o encargar la obra.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt de colorimetría personal: descubre tu estación de color con una foto',
                'description'       => 'Analiza tu subtono, contraste y profundidad con una foto con luz natural y recibe tu estación de color, paleta y colores a evitar.',
                'prompt_content'    => <<<'EOT'
Actúa como asesora de imagen especializada en colorimetría personal. Te adjunto una foto mía (soy yo, la he hecho para este análisis) y quiero saber qué colores me favorecen. Sé honesta sobre los límites: una foto nunca sustituye a un análisis presencial con telas, porque la cámara, la pantalla y la luz alteran los tonos.

CÓMO HE HECHO LA FOTO
- Luz: [natural, junto a una ventana, sin sol directo / otra]
- Maquillaje: [sin maquillaje / maquillaje ligero]
- Pelo: [color natural / teñido de color X]
- Ropa: [camiseta blanca / gris / otra]
- Filtros o retoques: [ninguno]

DATOS ADICIONALES
- Color natural de mi pelo (raíz): [describir]
- Color de ojos: [describir]
- ¿Las venas de la muñeca se ven más azuladas, verdosas o no lo sé?: [respuesta]
- ¿Me favorece más la plata o el oro?: [respuesta o no lo sé]
- ¿Me pongo roja o me bronceo con facilidad?: [respuesta]
- Colores que me dicen que me quedan bien: [lista]
- Colores con los que me veo apagada o cansada: [lista]

ANÁLISIS QUE NECESITO
1. Evalúa la calidad de la foto para este fin. Si la luz es cálida, hay dominante de color o sombras fuertes, dímelo y explícame cómo repetirla antes de sacar conclusiones.
2. Determina por separado: subtono (cálido, frío o neutro), valor o profundidad (claro, medio, oscuro), intensidad (brillante o suave) y contraste entre piel, pelo y ojos (alto, medio, bajo). Justifica cada uno con lo que observas.
3. Propón mi estación probable (primavera, verano, otoño o invierno) y la subestación, e indica tu nivel de confianza (alto, medio, bajo). Si dudas entre dos, dime cuáles y por qué.
4. Dame mi paleta: 12 colores recomendados con nombre descriptivo y código hexadecimal aproximado, agrupados en neutros, básicos y acentos.
5. Colores a evitar cerca de la cara y cómo llevarlos igualmente (en pantalones, zapatos, accesorios).
6. Metales, estampados, maquillaje (base, colorete, labios) y tinte de pelo que encajan con el análisis.

FORMATO DE SALIDA
- Valoración de la foto (2-3 líneas).
- Tabla de rasgos: Rasgo | Resultado | Por qué.
- Estación y nivel de confianza.
- Paleta en tabla: Color | Hex | Uso recomendado.
- Prueba casera para confirmar: cómo hacer el test de las telas con ropa que ya tengo, frente a un espejo y con luz de día.

No hagas comentarios sobre mi físico más allá del color. Si no puedes concluir algo, dilo.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Conocer tu estación de color y elegir ropa, maquillaje y tinte que favorecen tu tono de piel.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt de visagismo: qué corte de pelo me queda según la forma de mi cara',
                'description'       => 'Identifica la forma de tu cara, recibe cortes de pelo recomendados y un prompt para probarlos sobre tu foto sin que la IA te cambie la cara.',
                'prompt_content'    => <<<'EOT'
Actúa como estilista experto en visagismo. Te adjunto una foto mía de frente (soy yo y la he hecho para esto). Quiero saber qué cortes de pelo me favorecen y luego verlos sobre mi propia foto sin que cambies mis rasgos.

CÓMO ES LA FOTO
- De frente, a la altura de los ojos, sin inclinar la cabeza: [sí / no]
- Pelo recogido hacia atrás para que se vea el contorno: [sí / no]
- Luz uniforme, sin filtros: [sí / no]

DATOS SOBRE MI PELO
- Tipo: [liso, ondulado, rizado, muy rizado]
- Grosor y cantidad: [fino y poco / normal / grueso y mucho]
- Largo actual: [corto, por la barbilla, por los hombros, largo]
- Remolinos o entradas: [describir]
- Tiempo que dedico a peinarme cada mañana: [minutos]
- Lo que no quiero de ninguna manera: [flequillo, rapado, mucho volumen...]
- Contexto: [trabajo formal, uso casco, hago deporte, me lo recojo a menudo]

PARTE 1. ANÁLISIS
1. Revisa si la foto permite el análisis. Si no, dime qué repetir.
2. Describe la forma de mi cara (ovalada, redonda, cuadrada, alargada, corazón, diamante, triangular) comparando el ancho de frente, pómulos y mandíbula y el largo total. Indica tu nivel de confianza.
3. Explica qué conviene equilibrar en mi caso (por ejemplo, alargar visualmente, suavizar la mandíbula, dar volumen en la coronilla).

PARTE 2. RECOMENDACIONES
Propón 5 cortes compatibles con mi tipo de pelo y mi tiempo de peinado. Para cada uno: nombre descriptivo, largo, capas, raya y flequillo, por qué me favorece, mantenimiento (cada cuántas semanas pasar por la peluquería) y cómo pedírselo al peluquero en una frase clara.
Añade 2 cortes que NO te recomendaría y por qué.

PARTE 3. PROMPT PARA PROBARLO SOBRE MI FOTO
Escribe, para los 3 mejores cortes, un prompt de edición de imagen que siga estas reglas:
- Editar solo el pelo. Mantener idénticos rostro, rasgos, expresión, tono de piel, forma de la cara, ojos, nariz, boca, orejas, fondo, ropa y encuadre.
- No embellecer, no adelgazar, no rejuvenecer, no maquillar.
- Describir el nuevo corte con detalle: largo exacto, textura, raya, volumen y color (el mío actual salvo que pida otro).
- Iluminación coherente con la foto original.

FORMATO DE SALIDA
- Diagnóstico y forma de cara con nivel de confianza.
- Tabla: Corte | Por qué me favorece | Mantenimiento | Frase para el peluquero.
- Los 3 prompts de edición en bloques separados, listos para copiar.

Recuerda que la imagen editada es una aproximación: la textura real del pelo y la habilidad del peluquero cambian el resultado.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Elegir un nuevo corte de pelo según la forma de tu cara y verlo sobre tu propia foto antes de ir a la peluquería.',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para peinados de evento: ideas según tu pelo, largo y vestido',
                'description'       => 'Ideas de peinado para boda, comunión o graduación según tu tipo de pelo, largo, escote y clima, con pasos para hacerlo o pedirlo en la peluquería.',
                'prompt_content'    => <<<'EOT'
Actúa como peluquera especializada en peinados de evento. Tengo un evento y quiero llegar con un peinado que me favorezca, aguante todo el día y encaje con lo que llevo puesto.

EL EVENTO
- Tipo: [boda de día, boda de noche, comunión, bautizo, graduación, cena de empresa, nochevieja]
- Mi papel: [invitada, madrina, novia, madre del niño]
- Duración y lugar: [desde las 12:00 hasta la madrugada, al aire libre, en una finca]
- Clima previsto: [calor y humedad, viento, frío]

MI PELO
- Tipo: [liso, ondulado, rizado, muy rizado]
- Grosor y cantidad: [fino, normal, grueso]
- Largo: [corto, media melena, por debajo de los hombros, muy largo]
- Color y si tengo mechas: [describir]
- ¿Aguanta las ondas o se cae enseguida?: [respuesta]
- ¿Lo haré yo o iré a la peluquería?: [yo / peluquería / alguien de la familia]

EL LOOK
- Vestido o traje: [largo, corto, mono, traje de chaqueta]
- Escote: [palabra de honor, pico, barco, halter, cerrado, espalda descubierta]
- Complementos para la cabeza: [tocado, pamela, diadema, horquillas joya, ninguno]
- Pendientes: [grandes / pequeños / no sé aún]
- Estilo que me gusta: [natural y suelto, pulido y elegante, romántico, moderno]

LO QUE NECESITO
1. Propón 5 peinados adecuados a mi pelo, mi escote y el clima. Combina opciones: suelto, semirrecogido y recogido.
2. Para cada uno explica: por qué encaja con el escote y el complemento, cuánto aguanta según el clima, nivel de dificultad si lo hago yo (fácil, medio, difícil) y tiempo aproximado.
3. Para los dos que más recomiendes, dame el paso a paso con las herramientas y productos genéricos necesarios (protector térmico, espuma, laca de fijación media o fuerte, horquillas, gomas transparentes...).
4. Cómo describírselo a la peluquera en dos o tres frases y qué fotos de referencia buscar (descripción, no marcas ni nombres de famosos).
5. Plan de prueba: cuándo hacer un ensayo, qué hacer la noche anterior (lavar o no lavar), y un pequeño kit de retoques para el bolso.
6. Errores frecuentes en mi caso (por ejemplo, ondas que se deshacen con humedad o recogidos que tiran del tocado).

FORMATO DE SALIDA
- Tabla: Peinado | Tipo | Por qué te favorece | Duración | Dificultad.
- Paso a paso de los dos favoritos.
- Frase para la peluquería.
- Calendario de preparación y kit de retoques.

Si algún dato no encaja (por ejemplo, un recogido alto con un pelo muy corto), dímelo y propón una alternativa realista.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Elegir y preparar el peinado para una boda, comunión, graduación u otro evento según tu pelo y tu ropa.',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para outfits y armario cápsula con la ropa que ya tienes',
                'description'       => 'Crea un armario cápsula con la ropa que ya tienes: combinaciones por ocasión, prendas que faltan y qué donar o vender, sin comprar de más.',
                'prompt_content'    => <<<'EOT'
Actúa como estilista personal centrada en la moda sostenible. Quiero vestirme mejor con lo que ya tengo, crear un armario cápsula y comprar solo lo imprescindible.

MI ROPA ACTUAL
Te paso la lista de prendas (o la describo por categorías). Si lo prefieres, te adjunto fotos de mi armario.
- Partes de arriba: [ejemplo: 3 camisetas blancas, 1 camisa vaquera, 2 jerséis grises, 1 blusa estampada]
- Partes de abajo: [ejemplo: 2 vaqueros rectos, 1 pantalón negro de vestir, 1 falda midi]
- Vestidos y monos: [lista]
- Prendas de abrigo: [lista]
- Calzado: [lista]
- Complementos: [bolsos, cinturones, pañuelos]

MI VIDA Y MIS GUSTOS
- Ocupación y código de vestimenta: [oficina informal, teletrabajo, atención al público, uniforme]
- Semana típica: [ejemplo: 3 días oficina, 2 en casa, fin de semana con niños]
- Clima donde vivo y temporada que planificamos: [ciudad, primavera-verano / otoño-invierno]
- Estilo que me gusta: [clásico, minimalista, desenfadado, romántico, deportivo]
- Colores que me favorecen o mi estación de color si la conozco: [lista]
- Prendas que nunca me pongo y por qué: [lista]
- Presupuesto para completar: [cantidad en euros]

LO QUE NECESITO
1. Clasifica mis prendas en tres grupos: base de la cápsula, prendas puntuales y prendas que no encajan (para donar, vender o arreglar). Justifica brevemente.
2. Define la paleta de la cápsula: 3 neutros, 2 colores principales y 1 o 2 acentos, usando lo que ya tengo.
3. Crea 15 combinaciones completas con mis prendas, etiquetadas por ocasión (trabajo, fin de semana, cena, día de lluvia). Usa nombres claros de las prendas para que las identifique.
4. Lista de prendas que faltan para multiplicar combinaciones, ordenadas por impacto, con un máximo de 5 compras y precio orientativo. Para cada una, cuántas combinaciones nuevas permite.
5. Consejos de proporción según mi cuerpo si te los pido: [sí / no]. Si es que no, no comentes nada sobre mi físico.
6. Rutina: cómo planificar los conjuntos de la semana en 10 minutos el domingo.

FORMATO DE SALIDA
- Tabla de inventario: Prenda | Grupo | Motivo.
- Paleta de la cápsula.
- Lista numerada de combinaciones: Ocasión | Arriba | Abajo | Calzado | Complemento.
- Lista de compra priorizada con total y comprobación del presupuesto.
- Plantilla semanal de planificación.

No recomiendes marcas concretas. Prioriza reutilizar, arreglar o comprar de segunda mano antes que comprar nuevo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Ordenar el armario, sacar más combinaciones a tu ropa y decidir qué comprar sin gastar de más.',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para diseñar un tatuaje y su plantilla (stencil) para el tatuador',
                'description'       => 'Convierte tu idea en un diseño de tatuaje original y una plantilla de líneas limpia para llevar al estudio, con tamaño y zona del cuerpo.',
                'prompt_content'    => <<<'EOT'
Quiero diseñar un tatuaje original y llevar al estudio una referencia clara y una plantilla (stencil) de líneas. Sé que el tatuador profesional adaptará el diseño a mi piel y a su técnica; esto es una base para la conversación, no el diseño definitivo.

MI IDEA
- Qué quiero representar: [ejemplo: una golondrina con una rama de olivo por mi abuela]
- Significado o historia: [breve, para que el diseño tenga sentido]
- Elementos obligatorios: [lista]
- Elementos que no quiero: [lista]
- Estilo: [línea fina, blackwork, tradicional, neotradicional, acuarela, puntillismo, geométrico, lettering]
- Color: [solo negro / negro y gris / color: lista de colores]
- Zona del cuerpo: [antebrazo interior, tobillo, espalda alta, costillas...]
- Tamaño aproximado: [ancho x alto en cm]
- Texto incluido: [texto exacto y tipografía aproximada, o ninguno]
- Imagen de referencia propia: [sí, adjunto un boceto o foto mía / no]

REGLAS
- El diseño debe ser original. No copies obras de otros artistas, logotipos, personajes ni marcas con derechos, aunque yo los nombre. Si mi idea depende de uno, propón una alternativa propia con el mismo significado.
- Si adjunto una foto de una persona o mascota, es mía o tengo permiso.

PASO 1. CONCEPTO
Propón tres conceptos distintos en texto (composición, elementos, flujo con la forma de la zona del cuerpo). Explica qué funciona mejor a mi tamaño: los detalles muy pequeños se emborronan con los años, así que señala los que debería simplificar.

PASO 2. DISEÑO FINAL
Con el concepto que elija [número de concepto], genera la ilustración del tatuaje: fondo blanco liso, sin piel ni maqueta, encuadre completo, proporciones adecuadas a [tamaño] y al estilo elegido.

PASO 3. PLANTILLA (STENCIL)
Genera una segunda versión solo con líneas: negro puro sobre blanco, sin sombras ni rellenos, contornos cerrados y grosor uniforme, con las zonas de sombreado indicadas solo con una línea de límite. Que el texto, si lo hay, quede legible y sin letras inventadas.

PASO 4. FICHA PARA EL ESTUDIO
Resume en texto: idea y significado, estilo, tamaño, zona, color, detalles que se pueden simplificar y preguntas para el tatuador (si el tamaño es suficiente, cómo envejecerá, número de sesiones y cuidados).

FORMATO DE SALIDA
- Tres conceptos numerados.
- Imagen del diseño final.
- Imagen de la plantilla de líneas.
- Ficha para el estudio en lista.

Revisa el texto letra por letra antes de entregar: un error en un tatuaje no tiene arreglo fácil.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Llegar al estudio de tatuajes con un diseño original y una plantilla clara para hablar con el tatuador.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para diseños de camisetas listos para imprimir',
                'description'       => 'Genera diseños originales de camisetas con fondo limpio, colores limitados y las especificaciones para serigrafía, DTF o impresión bajo demanda.',
                'prompt_content'    => <<<'EOT'
Actúa como diseñador gráfico especializado en ropa estampada. Quiero crear diseños originales de camisetas que pueda imprimir sin que el taller me devuelva el archivo por problemas técnicos.

EL PROYECTO
- Para qué es: [marca propia, despedida de soltero, equipo deportivo, evento de empresa, tienda de impresión bajo demanda]
- Público: [edad, gustos, ciudad o afición]
- Tema o mensaje: [describir]
- Texto exacto (si lo hay): [texto, en mayúsculas o minúsculas]
- Estilo visual: [ilustración vintage, minimalista de línea, tipográfico, retro años 70, cómic, geométrico]
- Color de la camiseta: [blanca, negra, gris, otro]
- Número de tintas: [1, 2, 3 o a todo color]
- Técnica de impresión: [serigrafía, DTF, vinilo, sublimación, no lo sé]
- Zona y tamaño: [pecho centrado unos 28 cm de ancho / bolsillo 9 cm / espalda completa]

REGLAS DE ORIGINALIDAD
No uses ni imites logotipos, personajes, mascotas, escudos de clubes, nombres de marcas ni obras de artistas reconocibles, aunque los mencione. Si mi idea se parece a algo protegido, propón una versión propia con el mismo espíritu.

PASO 1. CONCEPTOS
Propón cuatro conceptos en texto, cada uno con: idea visual, composición, tipografía aproximada (sin nombrar fuentes de pago), paleta de tintas y por qué funcionaría con mi público.

PASO 2. GENERACIÓN
Para los dos conceptos que elija [números], genera la imagen así:
- Diseño aislado, sobre fondo de color plano y uniforme fácil de eliminar, sin maqueta de camiseta, sin sombras proyectadas ni degradados de fondo.
- Colores limitados al número de tintas indicado, contornos nítidos, sin detalles más finos de lo que la técnica permite.
- Texto exactamente como lo he escrito, sin letras inventadas.
- Composición centrada y adaptada a la proporción de la zona de impresión.

PASO 3. COMPROBACIÓN TÉCNICA
Revisa cada diseño: ¿se lee bien a 3 metros?, ¿funciona sobre el color de camiseta elegido?, ¿hay trazos demasiado finos?, ¿cuántos colores reales tiene?

PASO 4. ESPECIFICACIONES PARA EL TALLER
Indica: tamaño final en cm, resolución recomendada (300 ppp al tamaño real) o necesidad de vectorizar, formato de archivo (PNG con fondo transparente o vector), códigos de color aproximados y advertencias para la técnica elegida.

FORMATO DE SALIDA
- Cuatro conceptos en lista.
- Dos imágenes generadas.
- Tabla de comprobación: Diseño | Legibilidad | Contraste | Colores | Ajustes necesarios.
- Ficha técnica para el taller.

Recuerda que deberé eliminar el fondo y, para serigrafía, vectorizar el diseño antes de enviarlo.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Crear diseños de camisetas originales para una marca, un evento o una tienda de impresión bajo demanda.',
                'vote_score'        => 61,
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
