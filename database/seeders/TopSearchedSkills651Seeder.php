<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills651Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para unir a dos personas en una foto con IA',
                'description'       => 'Junta a dos personas de fotos distintas en una sola imagen (abrazadas o una al lado de la otra) con luz, escala y perspectiva coherentes.',
                'prompt_content'    => <<<'EOT'
Uso: sube las dos fotos (una de cada persona) en el mismo mensaje y pega el texto. Solo con fotos propias o de personas que han dado permiso para este uso. Si una de las personas ha fallecido, hazlo con el acuerdo de la familia y no presentes la imagen como una foto real.

Consejo previo: elige fotos con la cara de frente o de tres cuartos, nítidas y con una luz parecida. Cuanto más se parezcan la luz y el ángulo, mejor será el resultado.

INSTRUCCIONES (en español)

Crea una sola fotografía realista en la que aparezcan juntas la persona de la imagen 1 y la persona de la imagen 2.

Escena:
- Postura: [de pie, una al lado de la otra / abrazadas / él con el brazo sobre los hombros de ella / sentadas en un banco].
- Lugar: [salón de casa / terraza al atardecer / parque / fondo liso neutro].
- Plano: [plano medio, de cintura para arriba / cuerpo entero].
- Ropa: [la de sus fotos originales / ropa de fiesta / ropa informal de verano].

Coherencia (muy importante):
1. Escala real: [persona 1] mide unos [1,80 m] y [persona 2] unos [1,62 m]; respeta esa diferencia.
2. Misma luz para las dos: misma dirección, intensidad y color.
3. Misma perspectiva y altura de cámara para ambas.
4. Contacto creíble: donde se tocan, las manos, brazos y hombros deben apoyarse de verdad, con sombras de contacto.
5. Misma nitidez, grano y tratamiento de color en las dos personas.

Identidad:
- Conserva exactamente la cara, los rasgos, el tono de piel, el pelo y la edad aparente de cada persona.
- No mezcles rasgos entre ellas ni las "embellezcas".

VERSIÓN EN INGLÉS

Create one realistic photograph showing the person from image 1 and the person from image 2 together, [standing side by side / hugging], in [setting], [medium shot]. Respect real heights: about [1.80 m] and [1.62 m]. Same light direction, intensity and color temperature on both, same camera height and perspective, believable physical contact with contact shadows, matching sharpness and grain. Preserve each person's exact face, features, skin tone, hair and apparent age. Do not blend features.

VARIANTES
- Foto de recuerdo: "Estilo de foto familiar espontánea hecha con móvil, luz natural".
- Foto antigua: "Que parezca una foto de los años [70], con color desvaído y grano".
- Celebración: "Brindando con copas en una cena, luces cálidas de fondo".

SI NO SALE BIEN
- Una persona parece recortada y pegada: "La persona 2 no está integrada; iguala su luz y su color con los de la persona 1".
- Tamaños incoherentes: "Corrige la escala: la cabeza de [persona 2] debe quedar a la altura de la barbilla de [persona 1]".
- Las caras cambian: pide primero la escena con caras pequeñas y en un segundo mensaje "corrige las caras para que sean idénticas a las fotos originales".
- Brazos o manos raros: elige una postura más sencilla (de pie, uno al lado del otro, sin abrazo).

LÍMITES QUE DEBES CONOCER
La IA puede alterar algo los rasgos, sobre todo con fotos pequeñas o de perfil. Revisa con calma el resultado. Es una imagen creada, no un recuerdo real: no la uses para engañar a nadie.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Crear una foto conjunta de dos personas que no tienen una foto juntas, para regalar o guardar de recuerdo',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Prompt para hacer una foto profesional para LinkedIn o el currículum a partir de un selfie',
                'description'       => 'Convierte un selfie en una foto de estudio para LinkedIn o el CV: fondo neutro, luz suave y ropa profesional, sin que cambie tu cara.',
                'prompt_content'    => <<<'EOT'
Uso: sube un selfie tuyo con la cara de frente, bien iluminada (luz de ventana) y sin gafas de sol. Pega el texto. Hazlo solo con tu foto o con la de alguien que te lo haya pedido.

INSTRUCCIONES (en español)

Convierte este selfie en una fotografía profesional de estudio para [LinkedIn / currículum / la web de mi empresa].

Encuadre:
- Plano de busto (de la mitad del pecho hacia arriba), cabeza centrada con un poco de aire por encima.
- Cámara a la altura de los ojos, sin el efecto de brazo estirado ni la distorsión de gran angular del selfie.
- Hombros ligeramente girados, cara mirando a cámara.
- Formato [cuadrado 1:1 para LinkedIn / vertical 4:5 para el CV].

Ropa:
- [Chaqueta azul marino con camisa blanca / jersey de punto gris / blusa lisa en tono neutro / la misma ropa que llevo]. Sin logotipos ni estampados llamativos.

Fondo y luz:
- Fondo [gris claro liso / gris azulado con degradado suave / oficina luminosa muy desenfocada].
- Luz de estudio suave desde un lado, con relleno en la sombra; brillo natural en los ojos.

Expresión:
- [Mantén mi expresión original / sonrisa natural con la boca cerrada / sonrisa abierta y cercana].

Identidad (obligatorio):
- Conserva exactamente mi cara: forma, nariz, ojos, boca, cejas, línea del pelo, tono de piel, pecas y lunares.
- No me rejuvenezcas, no me adelgaces y no suavices la piel en exceso.
- Mismo peinado y color de pelo, solo un poco más ordenado.
- Si llevo gafas, mantenlas igual.

VERSIÓN EN INGLÉS

Turn this selfie into a professional studio headshot for [LinkedIn]. Chest-up framing, eye-level camera, no selfie wide-angle distortion, shoulders slightly angled, facing camera, [1:1]. Outfit: [navy blazer over white shirt], no logos. Background: [plain light grey]. Soft studio key light with fill, natural catchlights. Expression: [natural closed-mouth smile]. Preserve my exact identity: face shape, features, skin tone, freckles, moles, hairline, hair color, glasses. Do not de-age, slim or over-smooth. Photorealistic.

VARIANTES
- Sector creativo: "Fondo de color [verde salvia], luz más contrastada, ropa informal cuidada".
- Sector tradicional (banca, despacho): "Traje oscuro, fondo gris oscuro, expresión seria y cordial".
- Foto de grupo para equipo: genera cada persona por separado con el mismo prompt para que todas tengan el mismo estilo.

SI NO SALE BIEN
- No pareces tú: "Mi cara ha cambiado: [la nariz / los ojos / la mandíbula]. Recupera los rasgos exactos de la foto original". Si persiste, prueba con otro selfie más nítido.
- Piel de plástico: "Conserva la textura natural de la piel".
- Aspecto falso o de anuncio: "Más natural, como una foto real de un fotógrafo de empresa".
- Hombros o cuello raros: "Corrige las proporciones del cuello y los hombros".

LÍMITES QUE DEBES CONOCER
Quien te vaya a entrevistar te verá en persona o por videollamada: la foto debe parecerse a ti hoy. Si el resultado te "mejora" demasiado, descártalo. Revisa además si la empresa o la oferta pide una foto real sin edición.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Conseguir una foto de perfil profesional para LinkedIn, el CV o la web de la empresa sin pagar una sesión de estudio',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer una sesión de fotos con IA: 6 poses y escenarios con la misma persona',
                'description'       => 'Crea una sesión de fotos completa a partir de tu foto: seis imágenes con poses, ropa y escenarios distintos manteniendo tu cara en todas.',
                'prompt_content'    => <<<'EOT'
Uso: sube 1 a 3 fotos tuyas nítidas (de frente, de tres cuartos y de cuerpo entero si puedes) y pega el texto. Solo con tus fotos o las de alguien que te haya dado permiso. Es mejor generar las imágenes de una en una dentro de la misma conversación que pedir las seis a la vez.

INSTRUCCIONES (en español)

Vas a hacer una sesión de fotos de 6 imágenes con la persona de las fotos que te he subido. Estilo general de la sesión: [urbano y natural / elegante de noche / verano en la costa / otoño en el campo / editorial de moda sobria].

Ficha de la persona (respétala en todas las fotos):
- Misma cara, rasgos, tono de piel, pecas, lunares y edad aparente.
- Pelo: [color y peinado].
- Complexión: [la de las fotos].

Las 6 fotos:
1. Retrato de cerca, mirando a cámara, [luz de ventana suave].
2. Plano medio caminando por [una calle empedrada], mirando a un lado, ligero movimiento.
3. Cuerpo entero apoyada en [una pared de color terracota], postura relajada.
4. Sentada en [un café / unas escaleras], riendo de forma natural, foto robada.
5. Plano de detalle: [manos con una taza / perfil con el pelo al viento].
6. Foto final en [hora dorada / de noche con luces de la ciudad], plano medio, mirada a cámara.

Ropa: [un único conjunto para toda la sesión / dos conjuntos: X en las fotos 1-3 e Y en las 4-6].

Coherencia de la sesión:
- Misma paleta de color y el mismo tratamiento en todas las fotos, como si fueran de un mismo fotógrafo.
- Aspecto de fotografía real con cámara profesional, profundidad de campo reducida.
- Formato [vertical 4:5].

Empieza por la foto 1. Cuando te diga "siguiente", haz la siguiente.

VERSIÓN EN INGLÉS

Photo shoot of 6 images featuring the person in the uploaded photos. Overall style: [natural urban]. Keep the same face, features, skin tone, freckles, moles, apparent age and hair in every image. Shots: 1 close portrait at window light; 2 medium shot walking down [a cobbled street]; 3 full body leaning on [a terracotta wall]; 4 sitting in [a café] laughing candidly; 5 detail shot [hands holding a cup]; 6 [golden hour] medium shot looking at camera. Outfit: [describe]. Consistent color grading, real camera look, shallow depth of field, [4:5]. Start with shot 1.

VARIANTES
- Sesión de embarazo, de cumpleaños o de graduación: cambia escenarios y ropa en la lista.
- Sesión para redes de un negocio: "La persona usando [mi producto / en mi taller]".
- Sesión en blanco y negro: añade "todo en blanco y negro con grano fino".

SI NO SALE BIEN
- La cara cambia entre fotos: vuelve a subir la foto original y di "Usa como referencia esta cara para la foto [número]".
- Fotos sin coherencia de estilo: "Aplica el mismo tratamiento de color que en la foto 1".
- Poses forzadas: "Postura más natural y espontánea, como si no supiera que la fotografían".
- Manos deformes: elige poses con las manos ocultas o en los bolsillos.

LÍMITES QUE DEBES CONOCER
Mantener la misma cara en seis imágenes es lo más difícil para estas herramientas: es normal que una o dos fallen y tengas que repetirlas. No uses estas imágenes para hacerte pasar por otra persona ni en perfiles de citas sin indicar que están hechas con IA.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear una serie de fotos variadas y coherentes de una misma persona para redes sociales o un portfolio personal',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer una foto de pareja con IA para aniversario o San Valentín',
                'description'       => 'Crea una foto romántica de pareja a partir de vuestras fotos para un aniversario o San Valentín, con escenario y estilo a elegir.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto en la que salgáis los dos o una foto de cada uno, y pega el texto. Hazlo con el consentimiento de tu pareja; si es una sorpresa, elige algo que sepas que le gustará ver.

INSTRUCCIONES (en español)

Crea una fotografía romántica de esta pareja para [nuestro aniversario número X / San Valentín / una tarjeta / el fondo de pantalla].

Escena:
- Lugar: [el sitio donde nos conocimos: "una terraza junto al mar en Cádiz" / una cena con velas / un campo de lavanda / una calle de París de noche / nuestra casa].
- Momento: [atardecer / noche con luces cálidas / mañana de invierno con nieve].
- Pose: [abrazados mirando a cámara / ella apoyada en su hombro / frente con frente sonriendo / caminando de la mano, de espaldas a medias].
- Ropa: [elegante para una cena / informal de verano / la de la foto original].

Estilo:
- Fotografía realista, luz cálida y suave, colores [cálidos / pastel / cinematográficos].
- Ambiente íntimo y natural, sin poses de anuncio.
- [Opcional: "Pétalos de rosa en la mesa" / "luces de guirnalda desenfocadas al fondo"].

Identidad:
- Conserva exactamente las caras, rasgos, tono de piel, peinado y edad aparente de los dos.
- Respeta la diferencia de altura real entre ambos.
- No los embellezcas ni los cambies.

Formato: [vertical 4:5 / horizontal 3:2 para imprimir].

[Opcional: texto en la imagen: "[Nombre] y [Nombre] · [fecha]". Indica la tipografía: manuscrita elegante, discreta, en la parte inferior].

VERSIÓN EN INGLÉS

Create a romantic, photorealistic picture of this couple for [our anniversary]. Setting: [seaside terrace at sunset]. Pose: [hugging and looking at camera]. Outfits: [elegant dinner wear]. Warm soft light, [warm] tones, intimate and natural, not like an advert. Preserve both people's exact faces, features, skin tones, hair and apparent age, and their real height difference. Aspect ratio [4:5].

VARIANTES
- Recreación de un recuerdo: "Recrea nuestro primer viaje a [lugar], con ropa de [año]".
- Estilo ilustración: "Ilustración en acuarela de la pareja, trazos suaves y colores pastel, reconocibles".
- Foto de "años después": "Los dos con [20] años más, envejecimiento realista" (con cuidado: es una suposición).
- Con mascota: añade "y nuestro perro [raza, color] sentado a nuestros pies" y sube su foto.

SI NO SALE BIEN
- No se parecen: "Las caras no coinciden con las fotos; mantén los rasgos exactos de cada uno". Prueba con fotos más nítidas por separado.
- Demasiado cursi o artificial: "Más natural, como una foto espontánea hecha por un amigo".
- Texto mal escrito: pide la imagen sin texto y añádelo tú con un editor.
- Proporciones raras en el abrazo: elige una pose más sencilla, de pie y uno al lado del otro.

LÍMITES QUE DEBES CONOCER
La IA puede alterar algún rasgo; revisa la imagen antes de regalarla o imprimirla. Las fotos generadas no sustituyen a las reales: díselo si te pregunta dónde se hizo.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Crear una foto romántica de pareja para regalar en un aniversario, San Valentín o usar como fondo de pantalla',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer una foto familiar con IA juntando fotos de varias personas',
                'description'       => 'Reúne en una foto familiar a personas que no coinciden nunca, a partir de fotos individuales, con escala, luz y posición coherentes.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto de cada persona (máximo 4 o 5 para que salga bien; si sois más, haz grupos) y pega el texto. Hazlo solo con fotos de tu familia y con su permiso. Si incluyes a un familiar fallecido, consúltalo con el resto de la familia y no presentes la imagen como una foto real.

INSTRUCCIONES (en español)

Crea una fotografía familiar realista con todas las personas de las imágenes que te he subido.

Quién es quién (en el orden de las imágenes):
1. Imagen 1: [abuela, 78 años, 1,55 m].
2. Imagen 2: [padre, 50 años, 1,78 m].
3. Imagen 3: [madre, 48 años, 1,65 m].
4. Imagen 4: [hija, 12 años, 1,50 m].
5. Imagen 5: [perro, mediano].

Composición:
- Disposición: [la abuela sentada en el centro, los padres de pie detrás, la hija a la derecha, el perro delante].
- Lugar: [salón con chimenea y árbol de Navidad / jardín en primavera / playa al atardecer / fondo de estudio gris].
- Ropa: [coordinada en tonos crema y azul / la de cada foto original / jerséis de Navidad].
- Plano general que muestre a todos completos, con un poco de margen.

Coherencia:
- Escala real según las alturas y la distancia a la cámara.
- Una única luz para todos, misma dirección y color.
- Mismo nivel de nitidez, grano y color en todas las personas.
- Contacto natural: manos sobre hombros, apoyos y sombras creíbles.
- Todos mirando a cámara con expresión [sonriente y natural].

Identidad:
- Mantén la cara, los rasgos, el tono de piel, el pelo y la edad aparente de cada persona tal como en su foto.
- No mezcles rasgos entre familiares ni los embellezcas.

VERSIÓN EN INGLÉS

Create a realistic family photograph with all the people from the uploaded images. Image 1: [grandmother, 78, 1.55 m]; image 2: [father, 50, 1.78 m]; image 3: [mother]; image 4: [daughter, 12]. Arrangement: [grandmother seated in the center, parents standing behind]. Setting: [living room with fireplace]. Outfits: [coordinated cream and blue]. Correct relative scale, one consistent light source, matching sharpness and color, natural physical contact, everyone looking at camera smiling. Preserve each person's exact face, features, skin tone, hair and apparent age. Wide shot, everyone fully visible.

VARIANTES
- Foto de Navidad para felicitar: "Añade espacio arriba para un texto de felicitación".
- Foto de generaciones: "Cuatro generaciones de mujeres de la familia, de la mayor a la menor".
- Estilo antiguo: "Como un retrato de estudio de los años 40, en blanco y negro".

SI NO SALE BIEN
- Falta alguien o hay una persona de más: "Deben aparecer exactamente [5] personas: [lista]".
- Alguien parece pegado: "Iguala la luz y el color de [persona] con los demás".
- Las caras se parecen entre sí: "Cada persona debe conservar sus rasgos propios; no unifiques las caras".
- Con muchas personas falla: crea la foto con 3 personas y añade las demás en un segundo paso con "añade a la persona de esta imagen a la [derecha]".

LÍMITES QUE DEBES CONOCER
Cuantas más personas, más probable es que alguna cara cambie. Revisa cara por cara. Los niños y las personas mayores son los que más suelen alterarse en la edad aparente.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Crear una foto de toda la familia a partir de fotos sueltas para Navidad, un regalo o un recuerdo',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para hacer una foto o tarjeta de cumpleaños personalizada con IA',
                'description'       => 'Crea una tarjeta o foto de cumpleaños con la cara del homenajeado, su edad y sus aficiones, lista para enviar por WhatsApp o imprimir.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto de la persona que cumple años (con su permiso o, si es menor, con el de su familia) y pega el texto.

INSTRUCCIONES (en español)

Crea una [tarjeta de felicitación / imagen para redes / invitación] de cumpleaños personalizada a partir de esta foto.

Datos:
- Nombre: [nombre].
- Edad que cumple: [número].
- Le encanta: [el fútbol / los gatos / viajar / cocinar / los dinosaurios / la música rock].
- Tono: [divertido / tierno / elegante / sorpresa].

Diseño:
- La persona de la foto como protagonista, [en el centro / a un lado], con su cara tal y como es.
- Escenario relacionado con su afición: [en un estadio celebrando / rodeada de gatitos y globos / soplando las velas de una tarta con forma de avión].
- Elementos de cumpleaños: tarta con [número] velas, globos [colores], confeti.
- Estilo: [foto realista / ilustración colorida / acuarela suave / estilo cómic sin personajes conocidos].
- Paleta: [colores].

Texto en la imagen (escríbelo exactamente así):
"¡Feliz cumpleaños, [Nombre]!"
[Opcional, segunda línea más pequeña: "[número] años" o "[frase corta]"].
Tipografía [redondeada y alegre / manuscrita elegante], bien legible, sin otras palabras.

Formato: [vertical 9:16 para estados de WhatsApp / cuadrado 1:1 / horizontal A5 para imprimir].

Identidad:
- Conserva la cara, los rasgos, el tono de piel y el peinado de la persona. No cambies su edad aparente.

VERSIÓN EN INGLÉS (pon el texto de la tarjeta en español igualmente)

Create a personalized birthday [card] from this photo. The person is the main subject, face unchanged. Theme based on their hobby: [football, celebrating in a stadium]. Birthday cake with [number] candles, [colors] balloons, confetti. Style: [colorful illustration]. Include exactly this text in Spanish: "¡Feliz cumpleaños, [Nombre]!" in a [rounded, cheerful] font, clearly legible, no other words. Aspect ratio [9:16]. Preserve face, features, skin tone, hair and apparent age.

VARIANTES
- Invitación a fiesta: añade "Día: [fecha], hora: [hora], lugar: [sitio]" (revisa bien cada dato).
- Cumpleaños infantil: "Estilo de cuento ilustrado, colores vivos, el niño como explorador".
- Antes y ahora: "Combina esta foto de cuando era pequeño con la actual, lado a lado".
- Humor: "La persona como héroe de una película de acción genérica, tono exagerado y divertido".

SI NO SALE BIEN
- El texto sale con faltas: pide "Comprueba letra por letra el texto" o genera la imagen sin texto y añádelo con un editor o con la propia aplicación de mensajes.
- La cara no se parece: "Mantén la cara exacta de la foto original; solo cambia el entorno".
- Demasiado recargado: "Menos elementos, más espacio libre y diseño más limpio".
- El número de velas no coincide: no es grave; si importa, pide "una vela con forma del número [X]".

LÍMITES QUE DEBES CONOCER
Las herramientas de imagen todavía se equivocan con el texto, sobre todo con tildes y la letra ñ: revísalo siempre. No uses personajes de películas o marcas registradas; describe el estilo que te gusta en su lugar.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Felicitar un cumpleaños con una tarjeta o imagen personalizada con la foto y las aficiones de la persona',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para hacer una caricatura a partir de una foto con ChatGPT',
                'description'       => 'Convierte una foto en una caricatura divertida que exagera rasgos con cariño y se reconoce a la persona, para regalar o como avatar.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto de frente o de tres cuartos, nítida, y pega el texto. Hazlo con tu foto o con la de alguien que esté de acuerdo; una caricatura debe hacer gracia también a quien aparece en ella.

INSTRUCCIONES (en español)

Haz una caricatura de la persona de esta foto.

Exageración:
- Cabeza grande y cuerpo pequeño, al estilo clásico de caricatura de feria.
- Exagera con humor y cariño sus rasgos más característicos: [la sonrisa amplia / las cejas pobladas / el pelo rizado / las gafas grandes]. Si no indico nada, elige tú los 2 o 3 rasgos más reconocibles.
- Nada de exagerar rasgos de forma ofensiva (peso, defectos, rasgos étnicos).
- Debe reconocerse a la persona a primera vista.

Escena y temática:
- Haciendo lo que más le gusta: [tocando la guitarra / en bicicleta / con su perro / en la oficina con un café enorme / en la cocina].
- Fondo [sencillo de un color / con elementos de su afición].
- [Opcional: un detalle de su trabajo o una broma interna: "rodeado de hojas de cálculo"].

Estilo de dibujo:
- [Caricatura dibujada a mano con lápices de colores / acuarela con tinta / ilustración digital de colores vivos / tinta en blanco y negro como las de periódico].
- Trazos expresivos, colores [vivos / suaves].
- Sin parecerse a personajes de dibujos animados conocidos.

Texto (opcional): "[Nombre]" o "[frase]" en la parte inferior, escrito exactamente así.

Formato: [vertical 4:5 / cuadrado para avatar].

VERSIÓN EN INGLÉS

Create a caricature of the person in this photo. Big head, small body, classic street caricature style. Exaggerate with humor and affection their most recognizable features: [wide smile, bushy eyebrows]. Nothing offensive. Must be instantly recognizable. Scene: [playing guitar], [simple solid] background. Style: [hand-drawn colored pencil and watercolor], expressive lines, [vivid] colors, not resembling any known cartoon character. [Square] format.

VARIANTES
- Para un regalo de jubilación o despedida: "Rodeado de los objetos de su trabajo, con un letrero que dice '[texto]'".
- Grupo de amigos o compañeros: sube varias fotos y pide "caricatura de grupo, cada uno haciendo [algo]".
- Avatar sobrio: "Exageración ligera, solo cabeza y hombros, fondo de color plano".
- Estilo escultura: "Como una figura de plastilina hecha a mano".

SI NO SALE BIEN
- No se reconoce: "Exagera menos y conserva las proporciones de ojos, nariz y boca del original".
- Demasiado realista: "Más caricatura: cabeza mucho más grande, trazo más suelto".
- Resulta desagradable: "Más amable y simpático; exagera solo la sonrisa y el pelo".
- Se parece a un personaje famoso de dibujos: "Estilo propio, sin parecerse a ningún personaje conocido".

LÍMITES QUE DEBES CONOCER
La IA no siempre acierta con qué rasgos hacen reconocible a alguien: dile tú cuáles son. Si la caricatura es para publicar, enséñasela antes a la persona.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Crear una caricatura divertida de una persona para un regalo, una despedida, una tarjeta o un avatar',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prompt para convertir una foto en ilustración de animación japonesa clásica dibujada a mano',
                'description'       => 'Transforma tu foto en una ilustración tipo película de animación japonesa clásica: acuarela, fondos pintados y colores suaves.',
                'prompt_content'    => <<<'EOT'
Uso: sube tu foto (o la de alguien que te haya dado permiso) y pega el texto. Este prompt describe el estilo con palabras en lugar de nombrar estudios o películas: así el resultado es tuyo y la herramienta lo acepta mejor.

INSTRUCCIONES (en español)

Convierte esta foto en una ilustración con el estilo de las películas de animación japonesa clásicas dibujadas a mano.

Características del estilo:
- Personajes con contornos finos y limpios, ojos expresivos pero no exagerados, rasgos sencillos.
- Coloreado plano con sombras suaves de uno o dos tonos.
- Fondos pintados a mano en acuarela y gouache, muy detallados, con pinceladas visibles.
- Paleta de colores suaves y cálidos: verdes de prado, azules de cielo limpio, ocres y tonos crema.
- Cielos con nubes grandes y esponjosas, luz de tarde dorada.
- Ambiente sereno, nostálgico, casi de cuento.
- Textura de papel y de celuloide pintado, sin acabado digital brillante ni 3D.

Fidelidad:
- Mantén la composición, la postura, la ropa y el entorno de la foto, traducidos a este estilo.
- La persona debe seguir siendo reconocible: conserva su peinado, color de pelo, forma de la cara, gafas, lunares y otros rasgos distintivos.
- [Si hay mascotas u objetos importantes, mantenlos].

Ajustes opcionales:
- Fondo: [el mismo de la foto / un prado con colinas / una calle de pueblo con tejados / una cocina acogedora llena de detalles / una estación de tren en verano].
- Momento: [tarde de verano / día de lluvia suave / atardecer].
- [Añade detalles mágicos discretos: pequeñas luces flotando, viento moviendo la hierba].

Formato: [horizontal 16:9, como un fotograma de película / vertical 4:5].

VERSIÓN EN INGLÉS

Turn this photo into an illustration in the style of classic hand-drawn Japanese animated films: clean thin outlines, expressive but not exaggerated eyes, flat colors with soft one or two tone shading, richly detailed hand-painted watercolor and gouache backgrounds with visible brushstrokes, soft warm palette of meadow greens, clear sky blues, ochres and cream, big fluffy clouds, golden afternoon light, serene and nostalgic mood, paper and painted cel texture, no glossy digital or 3D finish. Keep the composition, pose, clothing and setting. Keep the person recognizable: hairstyle, hair color, face shape, glasses, distinctive features. [16:9].

VARIANTES
- Retrato familiar: "Toda la familia en un porche de madera con un jardín frondoso".
- Mascota: "El perro tumbado en la hierba con el viento moviendo su pelo".
- Fondo de pantalla: "Sin personas: solo el paisaje de la foto pintado en este estilo".

SI NO SALE BIEN
- Parece anime moderno, brillante o digital: "Menos brillo y menos saturación; textura de acuarela y pintura a mano, aspecto de película antigua".
- Ojos enormes: "Ojos más pequeños y naturales, rasgos sencillos".
- Ya no se reconoce a la persona: "Conserva la forma de la cara, el peinado y [rasgo] del original".
- Fondo pobre: "Fondo mucho más detallado, pintado a mano, con muchos elementos pequeños".
- La herramienta rechaza la petición: revisa que no hayas añadido nombres de estudios, películas o personajes; describe solo el estilo.

LÍMITES QUE DEBES CONOCER
Al cambiar de estilo la cara siempre se simplifica: se reconocerá por el pelo, las gafas y la expresión más que por los rasgos exactos. Es una imagen inspirada en un estilo, no una obra oficial de ningún estudio.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Convertir fotos personales, familiares o de mascotas en ilustraciones de estilo animación japonesa clásica pintada a mano',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para crear stickers personalizados para WhatsApp a partir de tus fotos',
                'description'       => 'Crea un paquete de stickers con tu cara, la de tus amigos o tu mascota, con fondo transparente y listo para añadir a WhatsApp.',
                'prompt_content'    => <<<'EOT'
Uso: sube una foto nítida de la cara (tuya, de tu mascota o de alguien que haya dado permiso para que circule en un grupo) y pega el texto. No uses fotos de otras personas sin su consentimiento: los stickers se reenvían mucho.

INSTRUCCIONES (en español)

Crea un paquete de [6 / 9] stickers para WhatsApp a partir de la persona (o mascota) de esta foto.

Estilo de los stickers:
- [Ilustración tipo dibujo animado con contorno blanco grueso / estilo chibi con cabeza grande / estilo realista recortado / acuarela].
- Cada sticker es la misma persona con una expresión o gesto distinto, reconocible en todos.
- Fondo transparente o blanco liso, con un borde blanco alrededor de la figura (como los stickers de papel).
- Colores vivos y trazo limpio que se vea bien en tamaño pequeño.

Expresiones (una por sticker):
1. Riéndose a carcajadas.
2. Pulgar arriba, con el texto "¡Vale!".
3. Cara de sorpresa con las manos en la cara.
4. Llorando de risa.
5. Durmiendo con un "zzz".
6. Lanzando un beso con un corazón.
[7. Cara de "en serio", con una ceja levantada].
[8. Con un café, texto "Necesito café"].
[9. Saludando, texto "¡Hola!"].

Textos: cortos, en español, en mayúsculas, legibles. Escríbelos exactamente como los he puesto.

Presentación: dibuja todos los stickers en una sola imagen cuadrada, en cuadrícula de [3x3], con espacio entre ellos para poder recortarlos.

Identidad: conserva el peinado, el color de pelo, las gafas, la barba y los rasgos distintivos para que se reconozca.

VERSIÓN EN INGLÉS (los textos en español)

Create a sticker sheet of [9] WhatsApp stickers based on the person in this photo, [cartoon style with thick white outline]. Same recognizable person in every sticker, each with a different expression: laughing, thumbs up with "¡Vale!", surprised, crying with laughter, sleeping, blowing a kiss. Plain white background, white die-cut border, vivid colors, clean lines readable at small size. Grid [3x3] with spacing. Keep hairstyle, hair color, glasses and distinctive features.

PASOS PARA LLEVARLOS A WHATSAPP
1. Descarga la imagen y recorta cada sticker (con el editor de fotos del móvil o una herramienta de recorte).
2. Si el fondo no es transparente, usa la función de quitar fondo del móvil (en iPhone, mantén pulsada la figura; en Android, la opción de recortar sujeto de la galería).
3. En WhatsApp, abre un chat, pulsa el icono de stickers y elige "Crear" (disponible en la mayoría de versiones actuales) o usa una aplicación de creación de stickers.

VARIANTES
- Mascota: "El perro con expresiones humanas: enfadado, feliz, hambriento, culpable".
- Pareja o grupo: "Stickers con las dos personas juntas reaccionando".
- Stickers de trabajo: "Textos: 'Lo miro', 'Reunión', 'Enviado', 'Viernes'".

SI NO SALE BIEN
- Cada sticker parece una persona distinta: genera los stickers de dos en dos y vuelve a subir la foto cada vez.
- Texto con errores: pide los stickers sin texto y añádelo en el editor de WhatsApp.
- Demasiado detalle para verse en pequeño: "Más simple, contornos más gruesos, menos detalles".
- Stickers pegados entre sí: "Más separación entre cada sticker".

LÍMITES QUE DEBES CONOCER
La IA no genera directamente el formato de stickers de WhatsApp: tendrás que recortar y añadir cada uno. No uses personajes ni logotipos de marcas en tus stickers.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Crear un paquete de stickers personalizados con tu cara, tu pareja, tus amigos o tu mascota para usar en WhatsApp',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Prompt para hacer fotos de producto con IA para tu tienda online o Vinted',
                'description'       => 'Convierte la foto de un producto hecha con el móvil en una foto limpia de catálogo con fondo neutro, buena luz y sin alterar el artículo.',
                'prompt_content'    => <<<'EOT'
Uso: haz una foto de tu producto con luz natural (junto a una ventana, sin flash), lo más de frente posible, y súbela con este texto. Usa solo fotos de productos que vendes tú y no quites marcas de agua ni copies fotos de otras tiendas.

INSTRUCCIONES (en español)

Convierte esta foto en una foto de producto profesional para [mi tienda online / Vinted / Wallapop / Etsy / Instagram].

Producto: [qué es: "zapatillas de deporte blancas talla 39", "taza de cerámica hecha a mano", "bolso de piel marrón"].

Muy importante (fidelidad del producto):
- No cambies el producto: misma forma, tamaño, color exacto, textura, costuras, logotipos y etiquetas.
- Si el artículo tiene desgaste, manchas o defectos, mantenlos visibles: el comprador debe ver el estado real.
- No añadas accesorios ni piezas que no están en la foto.

Fondo y presentación:
- Fondo [blanco puro / gris claro / beige cálido / de color (indica cuál)], liso y uniforme.
- Producto centrado, ocupando aproximadamente el [80 %] del encuadre, recto y sin inclinar.
- Sombra suave y natural debajo del producto, como apoyado en una superficie.
- Elimina todo lo que no sea el producto: la mesa, la cama, objetos, dedos o manos.

Luz y color:
- Iluminación de estudio suave y uniforme, sin reflejos fuertes ni zonas quemadas.
- Balance de blancos neutro para que el color sea el real.
- Nitidez alta en texturas y detalles.

Formato: [cuadrado 1:1 / vertical 4:5 para Vinted].

VERSIÓN EN INGLÉS

Turn this photo into a professional e-commerce product photo. Product: [white sneakers]. Do not alter the product in any way: same shape, size, exact color, texture, stitching, logos and labels; keep any wear or defects visible. Do not add accessories. Background: [pure white], seamless. Product centered, filling about 80 percent of the frame, straight. Soft natural shadow beneath. Remove everything else (table, bed, hands). Soft even studio lighting, no harsh reflections, neutral white balance, high detail. [1:1].

VARIANTES
- Foto de ambiente para redes: "Coloca el producto en [una mesa de madera con plantas y luz de mañana]; producto intacto".
- Ropa en Vinted: "Prenda estirada y plana, vista desde arriba, sin arrugas exageradas, fondo [gris claro]". No pidas que aparezca puesta en una persona inventada si vas a venderla: puede inducir a error sobre el ajuste.
- Serie coherente: "Usa exactamente el mismo fondo, luz y encuadre que en la foto anterior".
- Detalle: "Primer plano de [la etiqueta / el cierre / el defecto] con la misma luz".

SI NO SALE BIEN
- Ha cambiado el color o la forma: "El producto ha cambiado [el color es más claro / la suela es distinta]. Debe ser idéntico al original".
- Ha borrado un logotipo o ha inventado texto: "Mantén la etiqueta tal como está; no inventes texto".
- Parece un render falso: "Más realista: textura y sombra naturales".
- Ha quitado el defecto: "Devuelve la mancha visible; la foto debe mostrar el estado real".

LÍMITES QUE DEBES CONOCER
En plataformas de segunda mano, las fotos deben mostrar el artículo real: una foto que lo "mejora" puede acabar en devoluciones o reclamaciones. Usa la IA para limpiar el fondo y la luz, no para cambiar el producto, y acompaña siempre con alguna foto original sin editar.
EOT,
                'tool_name'         => 'ChatGPT',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Mejorar fotos de producto hechas con el móvil para venderlas en tiendas online, Vinted, Wallapop o redes sociales',
                'vote_score'        => 73,
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
