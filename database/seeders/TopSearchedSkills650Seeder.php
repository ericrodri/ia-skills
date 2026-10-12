<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills650Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para restaurar fotos antiguas o dañadas con ChatGPT o Gemini',
                'description'       => 'Quita arañazos, manchas y desvaído de una foto antigua sin que la IA invente rasgos ni cambie la cara de tus familiares.',
                'prompt_content'    => <<<'EOT'
Uso: sube la foto antigua (escaneada o fotografiada de frente, sin reflejos) y pega este texto debajo. Usa solo fotos de tu familia o de personas que te hayan dado permiso.

INSTRUCCIONES (en español)

Restaura esta fotografía antigua de [año aproximado, por ejemplo 1965] en la que aparece [quién aparece: mis abuelos, mi madre de niña, un grupo familiar].

Haz exactamente esto:
1. Elimina arañazos, grietas, pliegues, polvo, manchas de humedad y puntos blancos.
2. Recupera el contraste y la gama tonal perdidos por el desvaído, sin quemar las luces ni empastar las sombras.
3. Corrige el tono amarillento o rojizo del papel envejecido. [Mantén el blanco y negro / Mantén el tono sepia original].
4. Reconstruye las zonas rotas o que faltan solo cuando el contexto lo deje claro (un trozo de pared, de ropa o de fondo).

Lo que NO debes hacer:
- No cambies la forma de la cara, los ojos, la nariz, la boca, las orejas ni la línea del pelo de ninguna persona.
- No rejuvenezcas, no adelgaces y no "embellezcas" a nadie.
- No añadas detalles que no se ven en el original (pendientes, botones, dientes, arrugas nuevas).
- No cambies la ropa, el peinado, la postura ni el encuadre.
- Si una zona de la cara está muy dañada, déjala ligeramente suave antes que inventar rasgos.

Entrega una sola imagen, con el mismo encuadre y proporción que el original, con aspecto de fotografía real de la época bien conservada, no de ilustración ni de foto moderna.

VERSIÓN EN INGLÉS (suele dar resultados más fieles)

Restore this old photograph from around [year]. Remove scratches, cracks, creases, dust, stains and fading. Recover natural contrast and correct the yellow cast of aged paper, keeping it [black and white / sepia]. Preserve every person's facial features, face shape, expression, hairstyle, clothing and pose exactly as in the original. Do not beautify, de-age or add details that are not visible. Keep the same framing and aspect ratio. The result must look like a well-preserved real photograph from that era, not an illustration.

VARIANTES
- Restauración mínima: "Limpia solo arañazos y polvo, no toques el contraste ni el color".
- Con color: tras restaurar, pide en un segundo mensaje "Ahora colorea esta foto de forma realista" (mejor en dos pasos que en uno).
- Grupo grande: añade "Hay [número] personas; revisa cara por cara que ninguna ha cambiado".

SI NO SALE BIEN
- Las caras parecen otras personas: responde "Las caras han cambiado. Vuelve a partir del original y limita la restauración al fondo, la ropa y los daños; deja las caras casi intactas".
- Queda con aspecto de pintura o de plástico: "Conserva el grano de la película y la textura de piel; resultado menos suavizado".
- Ha recortado o cambiado el encuadre: "Mantén exactamente el encuadre y la proporción del original".
- Ha inventado ojos o dientes donde la foto estaba rota: pide que deje esa zona difuminada.

LÍMITES QUE DEBES CONOCER
La IA no recupera información que no existe: si una cara está borrada, lo que aparezca será una suposición. Compara siempre el resultado con el original antes de imprimirlo o compartirlo, y guarda el escaneo original sin tocar.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Recuperar fotos familiares antiguas con arañazos, manchas o colores apagados para imprimirlas o compartirlas',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Cómo pedirle a ChatGPT que mejore la calidad de una imagen y la amplíe a alta resolución',
                'description'       => 'Prompt para dar nitidez a una foto borrosa o pixelada y ampliarla a alta resolución sin que la IA cambie lo que aparece en ella.',
                'prompt_content'    => <<<'EOT'
Uso: sube la imagen original (la de mayor tamaño que tengas, no una captura de WhatsApp si puedes evitarlo) y pega el texto. Usa solo imágenes tuyas o con permiso de quien aparece en ellas.

INSTRUCCIONES (en español)

Mejora la calidad de esta imagen. Es [una foto de / una captura de / una imagen de] [qué aparece: mi perro en la playa, un retrato, un paisaje, un documento].

Objetivo: [imprimirla a tamaño 20x30 / usarla en una presentación / publicarla en redes / fondo de pantalla].

Haz lo siguiente:
1. Aumenta la nitidez y la definición de los bordes de forma natural.
2. Elimina el ruido digital y los artefactos de compresión (bloques, halos, bandas de color).
3. Amplía la imagen a la mayor resolución que puedas generar, manteniendo la proporción [original / 3:2 / 16:9].
4. Corrige ligeramente la exposición y el balance de blancos solo si son claramente incorrectos.

Reglas de fidelidad:
- No cambies el contenido: mismas personas, mismos objetos, misma composición.
- No modifiques rasgos faciales, expresiones ni proporciones del cuerpo.
- No inventes texto: si hay letras ilegibles, déjalas como están en lugar de escribir palabras nuevas.
- No apliques filtros artísticos ni cambies el estilo.

VERSIÓN EN INGLÉS

Enhance this image: increase sharpness and fine detail naturally, remove noise and compression artifacts, and upscale it to the highest resolution possible while keeping the [original] aspect ratio. Do not change the content, composition, faces, expressions or proportions. Do not invent or rewrite any text. No artistic filters. Photorealistic result.

VARIANTES
- Foto de persona: añade "Conserva la textura real de la piel; nada de efecto suavizado".
- Paisaje o arquitectura: "Refuerza el detalle de texturas (hojas, piedra, agua) sin crear halos en los bordes".
- Logo o gráfico sencillo: "Redibuja los bordes limpios y los colores planos, sin degradados nuevos".
- Captura de pantalla: "Mejora la legibilidad del texto sin cambiar ninguna palabra".

SI NO SALE BIEN
- La imagen ha cambiado (otra cara, otro objeto): "Vuelve al original. Prioriza la fidelidad sobre la nitidez".
- Queda demasiado artificial: "Menos nitidez y conserva algo de grano natural".
- Ha recortado los bordes: "Mantén todo el encuadre original, sin recortar".
- El texto sale con letras inventadas: pide que deje el texto borroso o recórtalo antes de subir la imagen.

LÍMITES QUE DEBES CONOCER
ChatGPT y Gemini no "desenfocan al revés": generan una imagen nueva parecida a la original. Si la foto está muy borrosa, los detalles finos serán una reconstrucción plausible, no la realidad. Para documentos, matrículas o pruebas no sirve. Además, la resolución máxima de salida es limitada; para ampliar a tamaños de impresión grandes, combina este paso con un programa de ampliación específico.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 5,
                'use_case'          => 'Dar nitidez y ampliar fotos borrosas, pixeladas o comprimidas para imprimirlas o publicarlas',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para colorear una foto en blanco y negro de forma realista',
                'description'       => 'Da color natural a una foto en blanco y negro con tonos de piel creíbles, o haz lo contrario: un blanco y negro artístico con contraste.',
                'prompt_content'    => <<<'EOT'
Uso: sube la foto en blanco y negro y pega el texto. Si además está dañada, restáurala antes en otro mensaje. Usa fotos propias, familiares o con permiso.

INSTRUCCIONES (en español)

Colorea esta fotografía en blanco y negro de forma realista. Contexto: [lugar, por ejemplo un pueblo de Galicia], [época aproximada, por ejemplo años 50], [ocasión: boda, comunión, retrato de estudio, día de campo].

Datos de color que conozco (respétalos):
- [Persona o elemento]: [color, por ejemplo "el vestido de la novia era blanco roto"].
- [Persona o elemento]: [color, por ejemplo "mi abuelo tenía los ojos verdes y el pelo castaño"].
Si no indico un color, elige el más probable para esa época y lugar, con tonos sobrios y algo apagados, como en la fotografía en color de entonces.

Reglas:
- Tonos de piel naturales y distintos entre personas, sin aspecto anaranjado ni grisáceo.
- No cambies caras, expresiones, peinados, ropa, encuadre ni composición: solo añade color.
- Conserva el grano y la textura de la foto original.
- Evita colores saturados o modernos que no encajen con la época.

VERSIÓN EN INGLÉS

Colorize this black and white photograph realistically. Setting: [place], around [decade], [occasion]. Known colors: [list]. For anything not specified, choose period-accurate, slightly muted colors. Natural, varied skin tones. Do not alter faces, expressions, hairstyles, clothing shapes, framing or composition; only add color. Keep the original film grain.

VARIANTE INVERSA: BLANCO Y NEGRO ARTÍSTICO
Si tienes una foto en color y la quieres en blanco y negro con intención:
"Convierte esta foto a blanco y negro artístico: contraste [alto / suave], negros profundos, blancos limpios, grano fino de película, viñeteado ligero. Separa bien a la persona del fondo con la luz. No cambies el contenido ni los rasgos".
En inglés: "Convert to fine-art black and white, [high / soft] contrast, deep blacks, fine film grain, subtle vignette. Do not change content or facial features".

OTRAS VARIANTES
- Color selectivo: "Deja todo en blanco y negro excepto [el ramo de flores], en color realista".
- Estilo postal antigua: "Coloreado a mano, colores pastel y algo irregulares".

SI NO SALE BIEN
- Todo sale con el mismo tono marrón: "Usa una paleta más variada; el cielo, la vegetación y la ropa deben tener colores distintos".
- La piel parece de cera: "Piel con variaciones naturales de tono, mejillas algo más cálidas, sin suavizar".
- Ha cambiado las caras: "Vuelve al original y limítate a colorear, sin regenerar rasgos".
- Colores demasiado intensos: "Reduce la saturación un 30 %".

LÍMITES QUE DEBES CONOCER
Una foto en blanco y negro no guarda información de color: la IA adivina. El resultado es una interpretación, no los colores reales. Si vas a compartirla, indica que es una foto coloreada con IA, sobre todo si tiene valor histórico.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Dar color realista a fotos familiares en blanco y negro o convertir fotos en color a blanco y negro artístico',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para que Gemini no cambie la cara al editar una foto',
                'description'       => 'Bloque de instrucciones para pegar en cualquier edición y que ChatGPT o Gemini conserven tu cara, tus rasgos y tu expresión.',
                'prompt_content'    => <<<'EOT'
Uso: este es un bloque para añadir a cualquier petición de edición (cambiar fondo, ropa, luz, estilo). Sube tu foto, escribe primero el cambio que quieres y pega después el bloque de identidad. Úsalo con tus fotos o con las de personas que te han dado permiso.

PASO 1: DESCRIBE EL CAMBIO
Edita esta foto para [el cambio concreto: poner un fondo de playa / cambiar la camiseta por una camisa azul / mejorar la luz / añadir un sombrero].

PASO 2: PEGA EL BLOQUE DE IDENTIDAD (español)

Reglas de preservación de identidad, obligatorias:
- La persona debe ser reconocible al instante como la misma de la foto original.
- No modifiques la forma de la cara, la mandíbula, la nariz, los ojos, las cejas, la boca, las orejas ni la línea del pelo.
- Mantén el tono de piel, las pecas, los lunares, las cicatrices y las arrugas tal como son.
- Mantén la misma expresión y la misma dirección de la mirada.
- No rejuvenezcas, no adelgaces, no maquilles y no "mejores" los rasgos.
- Mantén la edad aparente, el color de ojos y el color de pelo.
- Cambia SOLO lo que he pedido en el paso 1; todo lo demás debe quedar igual.

BLOQUE DE IDENTIDAD EN INGLÉS (recomendado, suele respetarse mejor)

Keep the person's identity exactly the same. Preserve face shape, jawline, nose, eyes, eyebrows, mouth, ears, hairline, skin tone, freckles, moles, scars and wrinkles. Keep the same expression, gaze direction, apparent age, eye color and hair color. Do not beautify, slim, de-age or retouch facial features. Only change: [the requested edit]. Everything else stays identical.

TRUCOS QUE AYUDAN
- Usa una foto con la cara grande, de frente, bien iluminada y nítida. Cuanto más pequeña es la cara, más la reinventa la IA.
- Pide un solo cambio por mensaje. Encadenar cinco ediciones en la misma imagen degrada la cara poco a poco.
- Si encadenas cambios, vuelve a subir la foto original cada dos o tres pasos.
- En Gemini (Nano Banana), di "edita esta imagen" en lugar de "crea una imagen de": así parte de tu foto.
- Pide que la cara ocupe la misma posición y tamaño que en el original.

VARIANTES
- Para varias personas: "Aplica estas reglas a cada una de las [número] personas por separado".
- Para cambios de estilo (ilustración, dibujo): "Estiliza la imagen, pero conserva las proporciones faciales y los rasgos distintivos para que se reconozca a la persona".

SI NO SALE BIEN
- Se parece pero "no es": responde "La cara ha cambiado: [ojos más grandes / nariz más fina / mandíbula distinta]. Corrige solo eso y deja el resto de la edición".
- Ha suavizado la piel: "Recupera la textura real de la piel y las marcas de expresión".
- Sigue fallando: empieza una conversación nueva, sube la foto original y pega de nuevo las instrucciones; el historial largo empeora los resultados.

LÍMITES QUE DEBES CONOCER
Ningún prompt garantiza el 100 % de fidelidad: estas herramientas regeneran la imagen y siempre hay pequeñas variaciones. Revisa el resultado con calma antes de publicarlo y no lo uses para documentos oficiales.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 5,
                'use_case'          => 'Editar fotos personales (fondo, ropa, luz o estilo) sin que la IA altere la cara ni los rasgos de la persona',
                'vote_score'        => 80,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para quitar personas u objetos de una foto con ChatGPT o Gemini',
                'description'       => 'Borra turistas, cables, papeleras u objetos que molestan en tus propias fotos y rellena el hueco de forma creíble.',
                'prompt_content'    => <<<'EOT'
Uso: sube tu foto y pega el texto. Funciona con fotos propias o de personas que te han dado permiso. No sirve para quitar marcas de agua ni firmas de fotos ajenas.

INSTRUCCIONES (en español)

Elimina de esta foto lo siguiente:
1. [Elemento 1 y dónde está: "la persona de camiseta roja a la izquierda, detrás de mí"].
2. [Elemento 2: "el cubo de basura junto a la puerta"].
3. [Elemento 3: "los cables que cruzan el cielo en la parte superior"].

Cómo rellenar el hueco:
- Reconstruye el fondo con lo que lógicamente habría detrás: [continuación del muro / arena / mar / suelo empedrado / cielo].
- Mantén la perspectiva, las líneas rectas, la textura y la iluminación del resto de la imagen.
- Quita también las sombras y reflejos de lo que borres.

Lo que debe quedar igual:
- [Las personas que sí deben aparecer: "yo y mi hermana en el centro"], sin cambiar caras, ropa ni postura.
- El encuadre, la proporción, los colores y la luz generales.
- No añadas elementos nuevos para rellenar (ni personas, ni plantas, ni objetos).

VERSIÓN EN INGLÉS

Remove the following from this photo: [element 1 with location], [element 2], [element 3]. Fill the area with a realistic continuation of the background ([wall / sand / sky]), matching perspective, texture and lighting. Also remove their shadows and reflections. Keep [the people who stay] completely unchanged: faces, clothing, pose. Keep framing, aspect ratio and colors. Do not add new objects.

VARIANTES
- Foto de viaje llena de gente: "Deja solo a [las personas que quieres], elimina a todos los demás de fondo".
- Limpieza de casa para vender o alquilar: "Quita los objetos personales de la encimera y la mesa; mantén los muebles".
- Detalle pequeño: "Elimina solo [la mancha de la camisa / el grano de la frente / el reflejo de las gafas]".

SI NO SALE BIEN
- Ha borrado lo que no era: describe la posición con más precisión ("tercio derecho de la imagen, parte baja") o recorta la foto para que el elemento quede más claro.
- Queda una mancha borrosa: "El relleno se nota. Reconstruye con más detalle la textura de [la pared], continuando las líneas de [las baldosas]".
- Ha aparecido algo nuevo: "No añadas nada; rellena solo con fondo".
- Ha cambiado a las personas que debían quedarse: añade el bloque "No modifiques a [nombre/posición]: mismos rasgos, misma ropa, misma postura".
- Varios objetos a la vez fallan: quítalos de uno en uno, en mensajes separados.

LÍMITES QUE DEBES CONOCER
Si el elemento tapa una parte grande de la escena, lo que aparezca detrás será inventado. Revisa detalles como manos, pies y bordes de las personas que se quedan, que son donde más se notan los errores. No uses esta técnica para alterar fotos que vayan a servir como prueba o documento.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 5,
                'use_case'          => 'Limpiar fotos de viaje o de casa eliminando personas de fondo, cables u objetos que estropean la imagen',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para cambiar el fondo de una foto con IA y que la luz encaje',
                'description'       => 'Cambia el fondo de una foto por otro lugar o un fondo liso, ajustando luz, sombras y color para que no parezca un recorte.',
                'prompt_content'    => <<<'EOT'
Uso: sube la foto y pega el texto. Funciona mejor si la persona u objeto está bien separado del fondo original. Usa tus fotos o las de personas que te han dado permiso.

INSTRUCCIONES (en español)

Cambia el fondo de esta foto. Mantén a [quién o qué: "la persona", "las dos personas", "el producto"] y sustituye todo lo demás por:

Nuevo fondo: [descripción concreta: "una calle de Sevilla con naranjos al atardecer" / "fondo liso gris claro" / "una oficina luminosa y desenfocada" / "la orilla de un lago con montañas"].

Para que la integración sea creíble:
1. Ajusta la dirección de la luz sobre la persona para que coincida con la del nuevo fondo (por ejemplo, sol bajo desde la [izquierda]).
2. Iguala la temperatura de color: si el fondo es cálido, la piel y la ropa deben recibir esa luz cálida.
3. Añade la sombra de contacto en el suelo y la sombra proyectada en la dirección correcta.
4. Cuida el borde del pelo: mechones naturales, sin halo ni recorte duro.
5. Ajusta la escala y la perspectiva: la cámara debe estar a [la altura de los ojos / un poco más baja].
6. Desenfoque del fondo [ligero / marcado, como con un objetivo de retrato].

No cambies:
- La cara, los rasgos, la expresión, la ropa ni la postura.
- El encuadre ni la proporción de la imagen.

VERSIÓN EN INGLÉS

Replace the background of this photo with [new background]. Keep [the subject] unchanged: face, features, expression, clothing and pose. Relight the subject to match the new scene: light direction from the [left], matching color temperature, realistic contact shadow and cast shadow. Natural hair edges, no halo. Correct scale and perspective, eye-level camera. Background blur: [subtle / strong]. Same framing and aspect ratio. Photorealistic.

VARIANTES
- Fondo para documento o perfil: "Fondo liso [blanco / gris claro], luz suave y uniforme, sin sombras en el fondo".
- Fondo de estudio: "Fondo de papel continuo [color], con un degradado suave detrás de la persona".
- Fondo navideño o de temporada: "Salón con árbol de Navidad desenfocado y luces cálidas en bokeh".

SI NO SALE BIEN
- Parece pegado: "La persona no está integrada. Ajusta la luz para que venga del mismo lado que en el fondo y añade sombra en el suelo".
- La persona sale demasiado grande o pequeña: "Corrige la escala; debe parecer que está a [3 metros] de [la fuente / el coche]".
- Halo blanco alrededor del pelo: "Elimina el halo y difumina el borde del pelo con el fondo nuevo".
- Ha cambiado la cara: añade "Conserva la identidad exacta de la persona; cambia solo el fondo y la iluminación ambiental".

LÍMITES QUE DEBES CONOCER
Si la foto original tiene una luz muy marcada (flash directo, sol de mediodía), cuesta que encaje con un fondo de luz opuesta: elige un fondo con una luz parecida. Para fotos oficiales (DNI, pasaporte) revisa la normativa: muchas no admiten fondos generados ni retoques.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 10,
                'use_case'          => 'Cambiar el fondo de fotos personales o de perfil por otro lugar o un fondo liso, con una integración realista',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para retocar un retrato con IA sin efecto plástico',
                'description'       => 'Retoque profesional de retrato con ChatGPT: piel natural con textura, luz favorecedora y color equilibrado, sin cara de muñeco.',
                'prompt_content'    => <<<'EOT'
Uso: sube un retrato tuyo o de alguien que te haya dado permiso y pega el texto. El objetivo es que parezca una buena foto, no una foto retocada.

INSTRUCCIONES (en español)

Haz un retoque profesional y discreto de este retrato. Uso previsto: [perfil profesional / web personal / foto para imprimir / redes].

Piel:
- Reduce imperfecciones temporales (granitos, rojeces puntuales, brillos de grasa).
- Mantén la textura real: poros visibles, vello fino, pecas y lunares.
- Suaviza ojeras y marcas solo un [20 %], sin borrarlas.
- No elimines arrugas de expresión ni cambies la edad aparente.

Luz:
- Equilibra la exposición de la cara; recupera detalle en zonas quemadas.
- Abre ligeramente las sombras bajo los ojos y la barbilla, como un reflector suave.
- Añade un brillo natural en los ojos si están apagados, sin cambiar su color.

Color:
- Corrige el balance de blancos para que la piel tenga un tono natural.
- Contraste moderado, saturación natural, estilo de foto de estudio real.

Prohibido:
- Cambiar la forma de la cara, la nariz, los ojos, los labios o el cuerpo.
- Blanquear dientes hasta un blanco irreal o cambiar el color de ojos o de pelo.
- Efecto de piel de porcelana, de filtro de belleza o de render 3D.
- Cambiar el encuadre, la ropa o el fondo (salvo que lo pida abajo).

[Opcional: "Ordena los pelos sueltos más llamativos alrededor de la cabeza" / "Quita la arruga de la camisa en el hombro"].

VERSIÓN EN INGLÉS

Professional, subtle portrait retouch. Skin: reduce temporary blemishes, redness and shine, keep real skin texture, pores, freckles and moles; soften under-eye circles by about 20 percent; keep expression lines and apparent age. Light: balance exposure, gently lift shadows under eyes and chin, natural catchlights. Color: neutral white balance, natural skin tone, moderate contrast. Do not change face shape, features, body, eye or hair color. No plastic skin, no beauty filter, no 3D render look. Keep framing, clothing and background.

VARIANTES
- Retoque mínimo: "Solo corrige color y exposición; no toques la piel".
- Estilo revista editorial: "Luz más contrastada y tono cálido, manteniendo la textura de piel".
- Foto con gafas: "Elimina el reflejo de las gafas sin cambiar la montura ni los ojos".

SI NO SALE BIEN
- Piel de plástico: "Demasiado suavizado. Recupera los poros y la textura; retoque al 50 % de intensidad".
- La persona parece más joven o distinta: "Respeta la edad y los rasgos exactos del original".
- Colores raros en la piel: "La piel está [naranja / rosada / gris]. Ajusta a un tono neutro y natural".
- Ojos demasiado brillantes: "Reduce el brillo de los ojos; que parezcan naturales".

LÍMITES QUE DEBES CONOCER
Aunque se lo pidas, la IA puede alterar ligeramente los rasgos al regenerar la imagen. Compara original y resultado a la vez antes de usarlo. Si es para un documento oficial, no lo retoques.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 10,
                'use_case'          => 'Retocar retratos para perfil profesional, web o impresión con un acabado natural y sin aspecto artificial',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para sacar el prompt de una imagen y poder recrearla con IA',
                'description'       => 'Pide a ChatGPT que describa una imagen con detalle técnico (estilo, luz, cámara, composición) y te devuelva un prompt para recrearla.',
                'prompt_content'    => <<<'EOT'
Uso: sube la imagen que te gusta y pega este texto. Sirve para entender un estilo y crear imágenes propias parecidas, no para copiar obras ajenas: el resultado debe ser una imagen nueva, no una réplica. No pidas que imite a artistas, personajes o marcas concretas por su nombre.

INSTRUCCIONES (en español)

Actúa como director de fotografía y experto en generación de imágenes. Analiza esta imagen y devuélveme lo siguiente:

1. Descripción objetiva (5 a 8 líneas): qué aparece, dónde, en qué posición y qué está pasando.

2. Ficha técnica:
- Tipo de imagen: fotografía, ilustración, render 3D, pintura, collage.
- Estilo visual descrito con palabras genéricas (por ejemplo "fotografía documental de calle", "ilustración plana de líneas finas"), sin nombres de autores ni marcas.
- Encuadre y plano: primer plano, plano medio, general, cenital, contrapicado.
- Objetivo aproximado y profundidad de campo: gran angular, teleobjetivo, fondo desenfocado o nítido.
- Luz: tipo, dirección, dureza, hora del día, color.
- Paleta de color: 4 a 6 colores dominantes con nombre.
- Textura y acabado: grano, nitidez, papel, pinceladas.
- Ambiente o emoción que transmite.

3. Prompt listo para usar, en inglés, de 60 a 120 palabras, ordenado así: sujeto, acción, entorno, estilo, encuadre, luz, color, detalles técnicos, proporción.

4. El mismo prompt en español.

5. Tres versiones del prompt cambiando un solo elemento: [otra estación del año / otro sujeto: "[mi sujeto]" / otra hora del día].

6. Lista de palabras que conviene evitar para que no salga [genérico / con texto / con aspecto artificial].

Si hay elementos que no puedes identificar con seguridad, dilo en lugar de inventarlos.

VERSIÓN EN INGLÉS

Act as a cinematographer and image-generation expert. Analyze this image and give me: an objective description; a technical breakdown (image type, visual style in generic terms without artist or brand names, shot type, lens and depth of field, lighting, color palette, texture, mood); a ready-to-use prompt of 60 to 120 words ordered as subject, action, setting, style, framing, lighting, color, technical details, aspect ratio; and three variations changing one element each. Say so if something is uncertain.

VARIANTES
- Para adaptar el estilo a tu foto: "Ahora reescribe el prompt para aplicar este estilo a la foto que te subo, conservando la identidad de la persona".
- Para imágenes de producto: "Céntrate en la iluminación de estudio, el fondo y el ángulo de cámara".
- Formato corto: "Dame solo el prompt final en una línea".

SI NO SALE BIEN
- El prompt es demasiado vago: "Sé más concreto con la luz y el encuadre; nada de adjetivos como 'bonito' o 'impresionante'".
- Al recrearla sale muy diferente: pega el prompt, genera la imagen y pide "Compara esta imagen con la original y ajusta el prompt para corregir las tres diferencias principales".
- Incluye nombres de artistas o marcas: "Sustituye cualquier nombre propio por una descripción del estilo".

LÍMITES QUE DEBES CONOCER
Nunca obtendrás el prompt exacto con el que se hizo una imagen (puede que ni siquiera se hiciera con IA). Lo que obtienes es una descripción que permite crear algo parecido. Cada herramienta interpreta el texto a su manera, así que prueba y ajusta.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 10,
                'use_case'          => 'Analizar una imagen de referencia para entender su estilo y obtener un prompt con el que crear imágenes propias parecidas',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para vectorizar un logo o dibujo con IA: limpiar la imagen y pasarla a vector',
                'description'       => 'Limpia un logo o dibujo con ChatGPT para dejarlo listo para vectorizar, con los pasos para obtener un SVG que la IA de imagen no exporta.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto o captura de tu logo o dibujo (de tu marca, tuyo o con permiso del autor). Antes de empezar, una aclaración importante: ChatGPT y Gemini generan imágenes de píxeles (PNG o JPG), no archivos vectoriales SVG. Este prompt deja la imagen perfecta para que una herramienta de vectorizado la convierta a vector con buen resultado.

PASO 1: LIMPIAR LA IMAGEN (en español)

Redibuja este [logo / dibujo / firma / icono] como una imagen limpia preparada para vectorizar:
- Fondo blanco puro y uniforme, sin sombras, papel, arrugas ni reflejos.
- Corrige la perspectiva: vista totalmente frontal y recta.
- Bordes nítidos y continuos, sin dientes de sierra ni borrosidad.
- Colores planos y sólidos, sin degradados, texturas ni brillos. Máximo [número] colores: [lista, por ejemplo azul marino y naranja].
- Grosor de trazo uniforme donde el original lo sea.
- Respeta la forma, las proporciones y la composición del original. No rediseñes ni "mejores" el diseño.
- Texto: reproduce exactamente estas palabras: "[texto del logo]". Si no puedes, deja el texto fuera y lo añadiré yo con una tipografía.
- Imagen grande, cuadrada, con el diseño centrado y margen alrededor.

VERSIÓN EN INGLÉS

Redraw this [logo / drawing] as a clean image ready for vectorization: pure white background, straight frontal view, crisp continuous edges, flat solid colors only (max [number]: [colors]), no gradients, shadows or textures. Keep the exact shapes, proportions and composition; do not redesign. Text must read exactly "[text]", or leave the text out. Large square canvas, centered, with margin.

PASO 2: CONVERTIR A VECTOR
1. Descarga el PNG resultante a la mayor resolución posible.
2. Pásalo por un vectorizador: Inkscape (gratuito, menú Trazado > Vectorizar mapa de bits) o Adobe Illustrator (Calco de imagen). También hay vectorizadores en línea.
3. En Inkscape, para logos de colores planos usa el modo "Colores" con el número exacto de colores y activa "Suavizar esquinas"; para dibujos a línea usa "Umbral de brillo".
4. Revisa los nodos: borra los sobrantes y rehaz a mano las curvas imperfectas.
5. Sustituye el texto vectorizado por una tipografía real si lo necesitas editable.
6. Exporta como SVG (web) o PDF/EPS (imprenta).

PASO 3 (OPCIONAL): PEDIR AYUDA CON EL SVG
Para iconos muy sencillos (formas geométricas) puedes pedir a ChatGPT: "Escribe el código SVG de este icono usando solo formas básicas". Funciona con diseños simples, no con logos complejos ni dibujos detallados.

VARIANTES
- Versión en una tinta: "Haz la versión en negro puro sobre blanco".
- Boceto a mano: "Convierte este boceto en un dibujo de línea limpio, trazo negro uniforme, sin sombreado".

SI NO SALE BIEN
- Ha cambiado el diseño: "No rediseñes; calca la forma original con más fidelidad".
- Mete degradados o sombras: "Solo colores planos, cero degradados".
- El texto sale con letras inventadas: deja el texto fuera y añádelo luego.
- El vectorizado sale con muchos nodos: reduce colores en la imagen y sube la resolución antes de vectorizar.

LÍMITES QUE DEBES CONOCER
Si el original está muy borroso, la IA reinterpretará las formas: revisa cada detalle. Para un logo profesional que vaya a imprimirse en grande, un diseñador que lo redibuje a mano sigue dando el mejor resultado.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Recuperar un logo o dibujo a partir de una foto o imagen pixelada y dejarlo listo para convertirlo en SVG',
                'vote_score'        => 58,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para animar una foto con IA y darle movimiento sutil',
                'description'       => 'Convierte una foto fija en un vídeo corto con movimiento natural (pelo, agua, mirada, cámara lenta) usando un generador de vídeo con IA.',
                'prompt_content'    => <<<'EOT'
Uso: este prompt es para un generador de vídeo a partir de imagen (por ejemplo, la función de vídeo de Gemini u otros generadores de vídeo con IA). Sube la foto como imagen inicial y pega el texto. Usa solo fotos tuyas o de personas que han dado permiso; si animas a alguien que ya no está, hazlo con el acuerdo de la familia.

INSTRUCCIONES (en español)

Anima esta foto con un movimiento sutil y realista durante [5 / 8] segundos.

Qué debe moverse:
- [Persona]: [parpadea una vez, sonríe levemente, gira un poco la cabeza hacia la cámara, respira].
- [Entorno]: [el pelo y la ropa se mueven con una brisa suave / las hojas de los árboles se mecen / el agua tiene un oleaje tranquilo / el humo del café sube].
- Cámara: [fija / acercamiento muy lento / desplazamiento lateral muy suave].

Qué debe quedarse quieto:
- La identidad de la persona: misma cara, mismos rasgos, misma ropa.
- El encuadre general y la composición.
- [Elementos que no deben moverse: los edificios, el fondo, las demás personas].

Estilo:
- Movimiento lento y natural, sin gestos bruscos ni exagerados.
- Sin cambios de luz, sin efectos especiales ni transiciones.
- Aspecto de vídeo real grabado con cámara, [a cámara lenta / a velocidad normal].
- Sin sonido [o: con sonido ambiente de mar].

VERSIÓN EN INGLÉS

Animate this photo with subtle, realistic motion for [5] seconds. [Person]: blinks once, slight smile, small head turn toward camera, gentle breathing. Environment: [hair and clothes moving in a light breeze / leaves swaying / calm water]. Camera: [static / very slow push-in]. Keep the person's identity, face, clothing and the overall composition unchanged. Slow, natural movement, no sudden gestures, no lighting changes, no effects. Realistic camera footage look.

VARIANTES
- Foto antigua familiar: "Movimiento mínimo: parpadeo y una leve sonrisa. Mantén el blanco y negro y el grano".
- Paisaje: "Solo se mueven las nubes y el agua; cámara fija; efecto de fotografía viva".
- Mascota: "El perro mueve la cola y las orejas y mira hacia la cámara".
- Efecto cinemagraph: "Todo quieto excepto [la llama de la vela], en bucle continuo".

SI NO SALE BIEN
- La cara se deforma: reduce el movimiento ("solo parpadeo, cabeza quieta") y usa una foto con la cara más grande y nítida.
- Movimientos raros o robóticos: "Más lento y sutil; la mitad de movimiento".
- Aparecen manos o dedos extraños: elige un encuadre donde las manos no se vean o pide "las manos permanecen quietas".
- La cámara se mueve demasiado: "Cámara completamente fija, trípode".
- Cambia el fondo: "El fondo no cambia en ningún momento".

LÍMITES QUE DEBES CONOCER
El generador inventa el movimiento: no recupera cómo se movía la persona en realidad. Los vídeos son cortos (unos segundos) y a veces aparecen deformaciones. Cuanto más movimiento pidas, más probable es que falle. Si lo compartes, indica que es una animación hecha con IA.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Dar vida a fotos familiares, de viaje o de mascotas convirtiéndolas en vídeos cortos con movimiento natural',
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
