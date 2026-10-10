<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills649Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 3,
                'title'             => 'Póster de viaje en doble exposición con IA: tu silueta llena de paisaje',
                'description'       => 'Claude actúa como director de arte y te devuelve el prompt en inglés para crear un póster de viaje en doble exposición, con tu silueta fundida con el destino que elijas, más variantes y consejos para que la imagen salga limpia.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte especializado en carteles de viaje y fotografía de doble exposición. Tu trabajo no es generar la imagen, sino redactar el prompt final optimizado que yo pegaré en ChatGPT Images, Midjourney o Gemini para obtener un póster de viaje en el que mi silueta (o la de la persona que elija) aparece rellena con el paisaje de un destino.

contexto: la doble exposición es una de las tendencias de imagen más compartidas de 2026 porque convierte un recuerdo de viaje en una pieza decorativa con aire de cartel de cine. Funciona cuando hay un contraste claro entre la silueta y el fondo, cuando el paisaje tiene formas reconocibles y cuando el texto del póster es corto y elegante.

datos que necesito que me pidas antes de escribir nada (si ya los he dado, no los repitas):
1. Destino: [CIUDAD, REGIÓN O PAISAJE CONCRETO, por ejemplo "acantilados de Etretat" o "barrio del Albaicín al atardecer"].
2. Silueta: [PERFIL DE MI CARA / CUERPO ENTERO DE ESPALDAS / MEDIO CUERPO MIRANDO AL HORIZONTE]. Indica si voy a subir una foto mía como referencia.
3. Paleta: [CÁLIDA DE ATARDECER / FRÍA DE NIEBLA / BLANCO Y NEGRO CON UN ACENTO DE COLOR].
4. Texto del póster: [NOMBRE DEL DESTINO, AÑO DEL VIAJE O UNA FRASE CORTA], o "sin texto".
5. Formato de salida: [VERTICAL 2:3 PARA IMPRIMIR / 4:5 PARA INSTAGRAM / 9:16 PARA HISTORIAS].
6. Herramienta que usaré: [CHATGPT IMAGES / MIDJOURNEY / GEMINI].

tarea: con esos datos, entrega exactamente estas secciones, en este orden:

A) prompt final (en inglés, un solo bloque listo para copiar). Debe describir: la silueta en primer plano sobre un fondo liso y claro; el paisaje del destino integrado dentro de la silueta con transición suave en los bordes; elementos icónicos del lugar colocados donde aporten lectura (montañas en los hombros, edificios en la línea de la mandíbula, el cielo en la parte alta de la cabeza); grano sutil de impresión; tipografía de cartel vintage para el texto indicado, con su posición exacta; relación de aspecto. Adapta la sintaxis a la herramienta: en Midjourney añade parámetros de proporción y estilo al final; en ChatGPT Images y Gemini redacta en frases naturales y pide expresamente que el texto aparezca bien escrito.

B) tres variantes cortas del prompt en inglés: una minimalista con dos tintas, una nocturna con luces de ciudad y una en acuarela con bordes que se deshacen.

C) consejos de ejecución: cómo elegir la foto de referencia (perfil limpio, fondo neutro, buena luz lateral), qué hacer si el paisaje tapa la cara entera, cómo pedir una segunda iteración corrigiendo solo un elemento, y cómo preparar el archivo para imprimir a tamaño A3 sin perder nitidez.

D) frase de corrección rápida: una línea en inglés que pueda añadir si el resultado sale demasiado recargado.

derechos e imagen: recuérdame en dos o tres líneas que solo debo usar fotos mías o de personas que me hayan dado permiso expreso, que no debo copiar carteles oficiales de turismo ni logotipos de aerolíneas, hoteles u otras marcas registradas, y que si incluyo un monumento con protección de imagen para uso comercial debo comprobarlo antes de vender el póster.

instrucción de estilo: escribe las explicaciones en español claro y sin tecnicismos innecesarios; el prompt final y las variantes, en inglés. No inventes datos que no te haya dado: si falta alguno, pregúntalo primero en una sola lista numerada. Si mi destino es muy genérico, propón dos alternativas más concretas que den mejor resultado visual y explica por qué en una frase.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Crear un póster decorativo o una publicación para redes a partir de un viaje, fundiendo tu silueta con el paisaje del destino.',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Mini-yo en un diorama: tu versión en miniatura dentro de un mundo a escala',
                'description'       => 'Prompt de director de arte que te devuelve en inglés la instrucción para generar una figura en miniatura de ti mismo dentro de un diorama temático, con variantes de escena, iluminación y consejos para lograr el efecto de maqueta.',
                'prompt_content'    => <<<'EOT'
objetivo: eres un director de arte experto en fotografía de miniaturas, maquetas y efecto tilt-shift. Vas a escribir para mí el prompt final que pegaré en ChatGPT Images, Gemini o Midjourney para crear la tendencia viral del "mini-yo": una figura en miniatura de mí mismo, del tamaño de un muñeco de colección, colocada dentro de un diorama que representa mi trabajo, mi afición o un lugar que me importa.

contexto: esta tendencia triunfa porque mezcla lo personal con lo artesanal. Lo que la hace creíble es la escala: tiene que parecer que una mano real podría coger la figura. Para eso hacen falta profundidad de campo muy corta, texturas de material (resina pintada, cartón, musgo de maqueta, madera de balsa) y una luz cálida de mesa de taller.

pídeme estos datos antes de escribir (en una sola lista, solo los que falten):
1. Quién es el mini-yo: [DESCRIPCIÓN FÍSICA BREVE: PELO, ROPA, GAFAS, POSTURA] y si subiré foto de referencia.
2. Mundo del diorama: [MI OFICINA / MI COCINA / UNA LIBRERÍA / UN HUERTO / UN ESTUDIO DE MÚSICA / OTRO].
3. Acción de la figura: [QUÉ ESTÁ HACIENDO, por ejemplo "regando tomates gigantes" o "escribiendo en un portátil del tamaño de una galleta"].
4. Objetos a escala real que aparecen al lado: [UNA TAZA, UN LÁPIZ, UNA MANO, NINGUNO]. Estos objetos refuerzan la sensación de miniatura.
5. Soporte del diorama: [PEANA REDONDA DE MADERA / CAJA DE CRISTAL / ESTANTERÍA / ESCRITORIO REAL].
6. Formato: [1:1 / 4:5 / 9:16] y herramienta de destino.

tarea: entrega las siguientes secciones.

A) prompt final en inglés, en un único bloque. Debe incluir: descripción de la figura como "hand-painted collectible miniature figure" con mis rasgos; el diorama con al menos cinco detalles concretos del mundo elegido; materiales de maqueta visibles; objeto cotidiano a escala real para comparar tamaños; enfoque macro con fondo desenfocado; luz cálida lateral y sombras suaves; proporción de aspecto. Si la herramienta es Midjourney, añade los parámetros al final; si es ChatGPT Images o Gemini, pide en lenguaje natural que mantenga mi parecido con la foto subida.

B) tres variantes en inglés: versión en caja de colección con etiqueta inventada (sin marcas reales), versión nocturna con farolas diminutas encendidas y versión "cortado en sección" donde se ve el interior del diorama por capas.

C) consejos para que salga bien: qué foto subir (frontal, cuerpo entero, ropa reconocible), cómo evitar que la figura parezca una persona normal reducida (pedir brillo de pintura y uniones visibles), cómo corregir manos o caras deformes en una segunda vuelta y qué palabras quitar si la imagen sale demasiado infantil.

D) idea de publicación: un pie de foto corto en español para acompañar la imagen en redes, sin exagerar.

derechos e imagen: incluye un recordatorio breve: usa solo tu propia foto o la de alguien que te haya dado permiso; no reproduzcas juguetes, figuras de colección ni envases de marcas registradas de forma reconocible; inventa el nombre de la "colección" y su logotipo en lugar de imitar uno existente; y si la imagen va a usarse con fines comerciales, revisa las condiciones de uso de la herramienta generadora.

instrucción de estilo: explicaciones en español sencillo, prompt y variantes en inglés. Sé concreto: nada de adjetivos vacíos como "increíble" o "épico" dentro del prompt; describe materiales, luz, escala y composición. Si mi idea de mundo es poco visual, sugiere una alternativa con más detalles fotografiables.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Crear una imagen viral de tu versión en miniatura dentro de un diorama temático para redes sociales, regalos o tu marca personal.',
                'vote_score'        => 78,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Convertir una foto en personaje de animación 3D familiar sin copiar ningún estudio',
                'description'       => 'Claude te prepara el prompt en inglés para transformar una foto en un personaje con estética de película de animación 3D para toda la familia, conservando el parecido y evitando imitar estilos o personajes protegidos.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte de cine de animación. Necesito que redactes el prompt final, en inglés, para convertir una foto real en un personaje con estética de animación 3D familiar: ojos expresivos, proporciones suavemente exageradas, piel con textura limpia, iluminación de película y un fondo que parezca un fotograma. Lo pegaré en ChatGPT Images, Gemini o Midjourney.

contexto: esta tendencia es de las más buscadas porque el resultado es tierno y fácil de compartir, pero tiene dos riesgos: perder el parecido con la persona real y acabar imitando de forma reconocible a un estudio concreto o a un personaje con copyright. El prompt debe describir la estética por sus rasgos técnicos, no por nombres.

datos que debes pedirme antes de escribir (solo los que falten):
1. Quién aparece: [YO / MI HIJO O HIJA / MI PAREJA / MI MASCOTA / UN GRUPO DE N PERSONAS] y confirmación de que tengo permiso de todas las personas de la foto.
2. Rasgos que no pueden perderse: [PECAS, GAFAS, PEINADO, BARBA, SONRISA TORCIDA, COLOR DE OJOS...].
3. Escena: [LA MISMA DE LA FOTO / UN BOSQUE MÁGICO / UNA CIUDAD DE NOCHE / UNA COCINA ACOGEDORA / OTRA].
4. Emoción del personaje: [CURIOSIDAD / ALEGRÍA / DETERMINACIÓN / TRAVESURA].
5. Uso final: [FELICITACIÓN, AVATAR, PÓSTER, PORTADA DE CUENTO] y formato [1:1 / 4:5 / 16:9].
6. Herramienta.

tarea: entrega estas secciones.

A) prompt final en inglés, un único bloque. Describe el estilo con términos neutrales: "family-friendly 3D animated film style", "soft subsurface skin shading", "large expressive eyes", "slightly oversized head", "cinematic rim light", "shallow depth of field", "rich but soft color palette". Incluye la instrucción explícita de conservar los rasgos que te he indicado y la identidad de la persona de la foto, la emoción, la pose, la escena con tres o cuatro detalles y el formato. Prohíbe expresamente en el propio prompt logotipos, marcas de agua y personajes existentes ("no existing characters, no logos, no studio branding").

B) tres variantes en inglés: estilo "plastilina digital" con texturas suaves, estilo "libro ilustrado en 3D" con fondo pintado y estilo "fotograma nocturno" con luces de farolillos.

C) consejos de ejecución: qué foto funciona mejor (cara bien iluminada, sin filtros de belleza, mirada a cámara), cómo recuperar el parecido si se pierde (repetir los rasgos clave al principio del prompt y subir la foto de nuevo), cómo evitar ojos desproporcionados en niños pequeños, cómo hacer una serie coherente de varios miembros de la familia usando la misma descripción de estilo y cómo pedir solo un cambio de fondo sin regenerar la cara.

D) lista de palabras a evitar en el prompt: nombres de estudios de animación, títulos de películas y nombres de personajes; explica en una línea que, además de un problema legal, muchas herramientas bloquean la petición.

derechos e imagen: añade un apartado breve: no transformes fotos de otras personas, y mucho menos de menores, sin permiso de ellas o de sus tutores; no publiques el resultado de alguien que no lo ha aprobado; no uses el estilo para hacerte pasar por un producto oficial de ningún estudio; y si el personaje va a usarse comercialmente, revisa los términos de la herramienta.

instrucción de estilo: explicaciones en español claro, prompt y variantes en inglés. Si mi petición menciona un estudio o una película concreta, no la uses: tradúcela a rasgos visuales neutros y avísame de que lo has hecho.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Transformar una foto personal o familiar en un personaje de animación 3D para avatares, felicitaciones o regalos, sin infringir derechos de terceros.',
                'vote_score'        => 82,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Retrato al óleo de estilo renacentista a partir de tu foto',
                'description'       => 'Claude te devuelve un prompt en inglés para convertir una foto actual en un retrato al óleo con composición, vestuario y luz de la pintura renacentista, con variantes y trucos para que parezca pintado y no filtrado.',
                'prompt_content'    => <<<'EOT'
objetivo: eres director de arte con formación en historia de la pintura. Tu tarea es escribir el prompt final en inglés que usaré en ChatGPT Images, Gemini o Midjourney para convertir una foto real en un retrato al óleo de estilo renacentista, creíble como cuadro de museo, conservando el parecido de la persona.

contexto: la tendencia del "retrato de época" se ha disparado porque da un resultado elegante y sirve como regalo, cuadro para casa o imagen de perfil original. Lo que separa un buen resultado de un filtro barato es el detalle pictórico: craquelado del barniz, pinceladas visibles, fondo oscuro con paisaje lejano o cortinaje, luz suave que modela el rostro y vestuario coherente con la época.

pídeme estos datos (solo los que falten, en lista numerada):
1. Persona retratada: [YO / OTRA PERSONA CON PERMISO / MASCOTA] y si subiré foto.
2. Encuadre: [BUSTO DE TRES CUARTOS / MEDIO CUERPO CON MANOS / CUERPO ENTERO SENTADO].
3. Vestuario: [NOBLE CON TERCIOPELO Y GORGUERA / ERUDITO CON LIBRO / COMERCIANTE CON GUANTES / LIBRE INTERPRETACIÓN].
4. Objeto simbólico que sostiene: [UN LIBRO, UNA FLOR, UN INSTRUMENTO, UNA HERRAMIENTA DE MI PROFESIÓN...].
5. Fondo: [PAISAJE CON RÍO Y COLINAS / CORTINA DE TERCIOPELO / VENTANA CON CIUDAD AMURALLADA / FONDO OSCURO LISO].
6. Uso y formato: [CUADRO IMPRESO 3:4 / PERFIL 1:1 / REGALO EN LIENZO].
7. Herramienta.

tarea: entrega estas secciones.

A) prompt final en inglés, un único bloque. Incluye: "oil painting on wood panel", "Renaissance portrait composition", luz difusa desde una ventana lateral, "sfumato soft transitions", paleta de tierras, ocres y bermellones, pinceladas visibles, "fine craquelure and aged varnish", vestuario descrito con tejidos y colores, el objeto simbólico, el fondo, el encuadre y la indicación de conservar los rasgos faciales de la foto de referencia. Pide expresamente que no aparezcan firmas, marcas de agua ni texto.

B) tres variantes en inglés: retrato de pareja en díptico, retrato con marco dorado tallado incluido en la imagen (como foto de un cuadro colgado en una sala) y versión de miniatura ovalada sobre medallón.

C) consejos de ejecución: qué foto subir (luz suave, sin gafas de sol, expresión serena, ya que en la pintura de la época apenas se sonríe), cómo evitar que la piel quede plástica (pedir "visible brushwork" y "matte oil texture"), cómo corregir manos con dedos de más en una segunda iteración, y cómo preparar la imagen para imprimirla en lienzo: resolución mínima recomendada, uso de un reescalador y margen para el bastidor.

D) mini ficha para regalar: escribe en español una cartela breve, estilo museo, con un título inventado para el cuadro, la "técnica" y una línea divertida sobre el retratado, usando [NOMBRE].

derechos e imagen: recuerda brevemente que solo debo usar fotos propias o con permiso, que no debo presentar el resultado como obra de un pintor real ni copiar un cuadro concreto reconocible, y que no debo imitar firmas. Describe siempre la estética por época y técnica, nunca por el nombre de un artista.

instrucción de estilo: explicaciones en español claro y directo; prompt y variantes en inglés. Si elijo un vestuario anacrónico, avísame en una línea y propón la alternativa más coherente, pero respeta mi decisión si insisto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Crear un retrato al óleo de estilo renacentista para regalar, imprimir en lienzo o usar como imagen de perfil original.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Retrato "old money" para perfil profesional: elegancia discreta generada con IA',
                'description'       => 'Claude actúa como director de arte y te entrega el prompt en inglés para un retrato de estética "old money" (sobria, atemporal y cuidada) pensado para LinkedIn, webs corporativas o tu ficha de ponente, con variantes y consejos de credibilidad.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte especializado en retrato corporativo y marca personal. Escribe el prompt final en inglés para generar, a partir de mi foto, un retrato con estética "old money": elegancia discreta, ropa de buena calidad sin logotipos, colores neutros, luz natural suave y un entorno que sugiera trayectoria sin ostentación. Lo usaré en ChatGPT Images, Gemini o Midjourney y el resultado irá a mi perfil profesional.

contexto: la estética "old money" sigue siendo una de las más buscadas porque transmite solvencia y calma. En un perfil profesional, sin embargo, hay una línea fina: si el retrato parece un anuncio de lujo o se aleja demasiado de mi aspecto real, resta confianza. El objetivo es una foto que podría haber hecho un buen fotógrafo en una mañana tranquila, no una fantasía.

pídeme estos datos antes de escribir (solo los que falten):
1. Mi sector y cargo: [SECTOR, PUESTO, TIPO DE CLIENTE].
2. Dónde se usará: [LINKEDIN / WEB CORPORATIVA / FICHA DE PONENTE / DOSIER DE PRENSA] y formato [1:1 / 4:5 / 3:2 HORIZONTAL].
3. Vestuario preferido: [AMERICANA AZUL MARINO Y CAMISA BLANCA / JERSEY DE PUNTO FINO SOBRE CAMISA / BLAZER CAMEL / TRAJE GRIS SIN CORBATA / OTRO].
4. Entorno: [BIBLIOTECA CON LUZ DE VENTANA / TERRAZA CON VEGETACIÓN / DESPACHO CON MADERA CLARA / FONDO LISO EN TONO PIEDRA].
5. Rasgos que deben mantenerse exactos: [CANAS, GAFAS, LUNAR, PEINADO, BARBA...].
6. Nivel de retoque: [NATURAL / LIGERO / CUIDADO PERO REAL].
7. Herramienta.

tarea: entrega estas secciones.

A) prompt final en inglés, un único bloque. Incluye: "editorial corporate portrait, quiet luxury aesthetic", luz natural de ventana suave, encuadre de pecho hacia arriba o tres cuartos según el uso, vestuario descrito por tejido y color sin marcas, paleta neutra (marfil, camel, azul marino, verde oliva, gris), entorno desenfocado con dos o tres detalles, expresión cercana y segura, piel con textura real, y la instrucción explícita de mantener mi identidad y los rasgos indicados. Añade al final "no logos, no visible brand names, no jewelry excess, no text".

B) tres variantes en inglés: retrato en exterior con abrigo largo en otoño, retrato sentado en sillón de cuero con libro y retrato en blanco y negro de alto contraste suave para dosier de prensa.

C) consejos de credibilidad profesional: por qué la imagen debe parecerse a mí en persona (las reuniones existen), cómo detectar señales de imagen generada que restan confianza (manos raras, botones asimétricos, fondos imposibles), cómo pedir solo un ajuste de luz o de ropa sin cambiar la cara, y cómo mantener coherencia si necesito varias fotos para la web del equipo.

D) texto de apoyo: propón en español un titular de perfil y una frase de presentación de dos líneas acordes al tono de la imagen, con [PLACEHOLDERS] para mi especialidad y logro principal.

derechos e imagen: incluye un apartado breve: usa solo tu propia foto o la de compañeros que lo hayan autorizado por escrito; no reproduzcas logotipos, monogramas ni estampados reconocibles de marcas de moda registradas; y revisa si tu empresa tiene normas sobre imágenes generadas con IA en canales corporativos. Si alguna plataforma lo exige, indica que la imagen ha sido editada con IA.

instrucción de estilo: explicaciones en español claro, prompt y variantes en inglés. Prioriza siempre la naturalidad sobre el efecto: si alguna de mis peticiones pondría en riesgo la credibilidad, dímelo en una frase y propón una opción más sobria.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Renovar la foto de perfil profesional en LinkedIn, la web corporativa o una ficha de ponente con un retrato sobrio, atemporal y creíble.',
                'vote_score'        => 80,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Estética de película analógica de los 90 para tus fotos generadas con IA',
                'description'       => 'Claude te escribe el prompt en inglés para recrear la estética de carrete analógico de los años noventa (grano, flash directo, colores desvaídos y fecha naranja en la esquina) con variantes y consejos para que no parezca un filtro.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte y fotógrafo con experiencia en película química. Escribe el prompt final en inglés para generar, o transformar a partir de mi foto, una imagen con estética de cámara analógica compacta de los años noventa. Lo pegaré en ChatGPT Images, Gemini o Midjourney, o lo usaré como imagen de inicio en un generador de vídeo.

contexto: la nostalgia analógica es tendencia constante en 2026, sobre todo entre quienes nunca revelaron un carrete. Lo que hace que funcione no es "poner un filtro", sino reproducir los defectos reales: grano visible, flash directo que quema un poco la cara y oscurece el fondo, colores ligeramente desplazados al verde o al magenta, viñeteado, alguna fuga de luz y, si se quiere, la fecha impresa en naranja en la esquina.

datos que debes pedirme (solo los que falten):
1. Escena: [CUMPLEAÑOS EN CASA / VERANO EN LA PLAYA / NOCHE DE FIESTA / VIAJE EN COCHE / RETRATO CASUAL / OTRA].
2. Personas: [CUÁNTAS, EDAD APROXIMADA, ROPA] y si subiré foto de referencia propia.
3. Tipo de cámara simulada: [COMPACTA CON FLASH / CÁMARA DESECHABLE / RÉFLEX CON OBJETIVO 50 MM].
4. Tono de color: [CÁLIDO Y AMARILLENTO / FRÍO Y VERDOSO / SATURADO DE PELÍCULA BARATA].
5. Fecha impresa: [SÍ, CON FECHA CONCRETA "'98 7 14" / NO].
6. Formato: [3:2 CLÁSICO / 4:5 / 9:16] y herramienta.

tarea: entrega las siguientes secciones.

A) prompt final en inglés, un único bloque. Incluye: "35mm film photograph, 1990s point-and-shoot camera", tipo de flash, "visible film grain", "slight color shift", "soft vignetting", "occasional light leak on the edge", ropa, peinados y objetos coherentes con la década descritos de forma genérica, expresión espontánea (no posada), y la fecha naranja si la he pedido con su posición. Añade "no modern smartphones, no logos, no brand names visible" para evitar anacronismos y marcas.

B) tres variantes en inglés: una de cámara desechable bajo el agua con colores turquesa, una de foto de fotomatón en tira de cuatro y una de imagen escaneada de un álbum con borde blanco y ligera curvatura del papel.

C) consejos para que salga bien: cómo evitar que la imagen quede demasiado limpia (pedir imperfecciones concretas), cómo conseguir coherencia en una serie de diez fotos para un carrusel (repetir el bloque de estilo idéntico y cambiar solo la escena), qué hacer si aparecen objetos modernos, y cómo usar la imagen como fotograma inicial en un generador de vídeo pidiendo un movimiento de cámara corto y temblón.

D) bloque de estilo reutilizable: separa en una línea en inglés solo los términos de estética para que yo pueda pegarlos al final de cualquier otro prompt.

derechos e imagen: recuerda en pocas líneas que solo debo transformar fotos mías o de personas que lo hayan autorizado, que no debo imitar la portada de un disco, un fotograma de una película o un anuncio concreto de la época de forma reconocible, y que no debo incluir logotipos de marcas de película, cámaras o refrescos.

instrucción de estilo: explicaciones en español sencillo, prompt y variantes en inglés. Si la escena que propongo no encaja con la década, dímelo con amabilidad y sugiere un ajuste.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Dar a fotos generadas o propias un aire auténtico de carrete de los 90 para carruseles, portadas de lista de reproducción o campañas con tono nostálgico.',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Collage tipo álbum de recortes retro y cuadrícula 4x4 con IA',
                'description'       => 'Claude te devuelve el prompt en inglés para crear un collage de álbum de recortes con texturas de papel, cinta adhesiva y pegatinas, o una cuadrícula 4x4 de dieciséis escenas coherentes, ideal para resumir un año, un proyecto o un viaje.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte especializado en diseño editorial y collage. Escribe el prompt final en inglés para generar, en ChatGPT Images, Gemini o Midjourney, una de estas dos piezas (o las dos): un collage tipo álbum de recortes retro o una cuadrícula 4x4 con dieciséis viñetas coherentes entre sí.

contexto: los resúmenes visuales ("mi año en 16 fotos", "el proceso de mi proyecto", "nuestro viaje") son una tendencia muy compartida. El álbum de recortes funciona por su textura artesanal: papel kraft, recortes con bordes irregulares, cinta washi, sellos, notas a mano y fotos superpuestas. La cuadrícula 4x4 funciona por coherencia: misma paleta, misma luz y un hilo narrativo claro de la primera a la última casilla.

pídeme estos datos antes de escribir (solo los que falten):
1. Formato elegido: [ÁLBUM DE RECORTES / CUADRÍCULA 4X4 / AMBOS].
2. Tema o historia: [MI AÑO 2026 / LANZAMIENTO DE MI PROYECTO / VIAJE A [DESTINO] / BODA / PRIMER AÑO DE MI NEGOCIO].
3. Momentos clave: lista de hasta dieciséis [MOMENTO 1, MOMENTO 2...]. Si doy menos, propón el resto con coherencia y márcalos como sugerencias.
4. Personas que aparecen y si subiré fotos de referencia propias o con permiso.
5. Paleta: [PASTEL / TIERRAS CÁLIDAS / BLANCO Y NEGRO CON UN COLOR] y textos que deben aparecer escritos [TÍTULO, FECHAS, FRASES CORTAS].
6. Formato de salida [1:1 / 4:5] y herramienta.

tarea: entrega estas secciones.

A) prompt final en inglés para el álbum de recortes, en un único bloque: "vintage scrapbook page", fondo de papel con textura, fotos impresas con borde blanco y ligeramente giradas, cinta washi, pegatinas genéricas, notas manuscritas con los textos exactos que te haya dado entre comillas, flores secas o billetes de transporte inventados, luz cenital suave como si estuviera fotografiado sobre una mesa.

B) prompt final en inglés para la cuadrícula 4x4, en un único bloque: "a 4x4 grid of sixteen square panels, consistent style", la descripción de cada casilla numerada del 1 al 16 en orden de lectura, bloque de estilo común (luz, paleta, tipo de lente), separación fina entre casillas y la instrucción de mantener a la misma persona reconocible en todas.

C) consejos de ejecución: por qué conviene generar la cuadrícula en dos mitades de 2x4 si la herramienta se lía con dieciséis escenas, cómo unirlas después, cómo comprobar que el texto está bien escrito y corregirlo en una segunda vuelta, y cómo exportar en alta resolución para imprimir.

D) dos variantes cortas en inglés: álbum de recortes digital con estética de pantalla de ordenador antiguo y cuadrícula con marco de tira de negativos.

derechos e imagen: añade un apartado breve: usa solo fotos tuyas o de personas que hayan dado su permiso; no incluyas recortes de revistas, logotipos, entradas de eventos con marca ni personajes reconocibles; inventa los nombres de lugares, billetes y pegatinas; y si el collage es para un cliente, confirma que tiene los derechos de las fotos que te entrega.

instrucción de estilo: explicaciones en español claro, prompts en inglés. Mantén los textos visibles muy cortos (máximo cinco palabras por nota) porque los generadores fallan con frases largas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Resumir visualmente un año, un viaje o un proyecto en un collage retro o una cuadrícula de dieciséis escenas para redes, presentaciones o regalos.',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Portada de revista de moda editorial con tu marca generada con IA',
                'description'       => 'Claude te entrega el prompt en inglés para crear una portada de revista de moda con cabecera inventada para tu marca, titulares y fotografía editorial, más variantes, jerarquía tipográfica y consejos para que el texto salga legible.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte de una revista de moda. Escribe el prompt final en inglés para generar en ChatGPT Images, Gemini o Midjourney una portada editorial protagonizada por mí (o por el producto de mi marca), con una cabecera propia, titulares y composición de portada de quiosco.

contexto: las portadas de revista personalizadas son tendencia porque convierten un lanzamiento, un aniversario o una campaña en algo que parece noticia. La clave está en la jerarquía: una cabecera grande en la parte superior, una foto de alta calidad que respire, tres o cuatro titulares cortos en los laterales y un pequeño elemento de fecha o número. Si el texto es largo o hay demasiados elementos, el generador comete errores y la portada pierde fuerza.

pídeme estos datos (solo los que falten):
1. Nombre de la cabecera: [NOMBRE DE MI MARCA O UNA PALABRA INVENTADA]. No puede coincidir con el nombre de ninguna revista real.
2. Protagonista: [YO / MI PRODUCTO / UN MODELO GENÉRICO] y si subiré foto propia o con permiso.
3. Vestuario o producto: [DESCRIPCIÓN DE ROPA, COLORES, TEXTURAS, O DEL PRODUCTO].
4. Titular principal (máximo cinco palabras): [TITULAR] y hasta tres titulares secundarios: [TITULAR 2], [TITULAR 3], [TITULAR 4].
5. Estilo fotográfico: [ESTUDIO CON FONDO DE COLOR / EXTERIOR URBANO / NATURALEZA / BLANCO Y NEGRO DRAMÁTICO].
6. Colores de marca: [CÓDIGOS O NOMBRES DE COLOR].
7. Formato [VERTICAL 4:5 O 3:4] y herramienta.

tarea: entrega las siguientes secciones.

A) prompt final en inglés, un único bloque. Incluye: "high-fashion magazine cover", la cabecera exacta entre comillas con tipografía serif de alto contraste en la parte superior, el protagonista descrito con pose, mirada y vestuario, luz de estudio o natural según lo elegido, los titulares exactos entre comillas y su posición (lateral izquierdo, inferior derecho), un pequeño texto con fecha y número inventados, paleta de marca, acabado de papel satinado. Añade "no real magazine names, no logos other than the masthead provided".

B) tres variantes en inglés: portada minimalista solo con cabecera y una palabra, portada de número especial con fondo dividido en dos colores y portada en la que el protagonista tapa parcialmente la cabecera, como se hace en las grandes revistas.

C) consejos de ejecución: cómo verificar letra a letra los textos y qué hacer si alguno sale mal (regenerar solo el texto o añadirlo después en un editor como Canva o Figma), por qué limitar los titulares, cómo dejar margen de seguridad si se imprime y cómo adaptar la misma portada a historia vertical 9:16 para anunciar el lanzamiento.

D) texto de lanzamiento: escribe en español un pie de publicación corto que acompañe la portada, con [PLACEHOLDERS] para la fecha y el enlace.

derechos e imagen: añade un recordatorio breve: no imites cabeceras, tipografías exclusivas ni maquetaciones reconocibles de revistas reales; no uses fotos de personas sin su permiso ni sugieras que una persona famosa respalda tu marca; y si aparece ropa o accesorios de otras marcas, evita que sus logotipos sean visibles.

instrucción de estilo: explicaciones en español claro, prompt y variantes en inglés. Si mis titulares son demasiado largos, acórtalos tú y enséñame la versión original junto a la propuesta.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Anunciar un lanzamiento, una colección o un aniversario de marca con una portada de revista de moda personalizada para redes, web o materiales impresos.',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Vídeo estilo plastilina y stop-motion para un anuncio de tu producto',
                'description'       => 'Claude actúa como director de arte y de animación para devolverte los prompts en inglés de un anuncio corto con estética de plastilina y stop-motion: guion de planos, fotograma inicial, prompt de vídeo, variantes y consejos de coherencia.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte y animación especializado en stop-motion. Necesito que prepares todo lo necesario para crear un anuncio corto de mi producto con estética de plastilina: un guion de planos y, para cada plano, el prompt de imagen inicial y el prompt de vídeo en inglés, listos para pegar en un generador de imágenes (ChatGPT Images, Gemini o Midjourney) y en un generador de vídeo con IA.

contexto: la estética de plastilina se ha convertido en una de las tendencias de vídeo más usadas en publicidad en 2026 porque es cálida, artesanal y destaca en un feed lleno de imágenes pulidas. Para que sea creíble hace falta: huellas de dedos visibles en el material, movimiento a pocos fotogramas por segundo con ligeros saltos, decorados de cartón y fieltro, iluminación de estudio pequeño y personajes de formas simples.

pídeme estos datos antes de escribir (solo los que falten):
1. Producto o servicio: [QUÉ ES, PARA QUIÉN, BENEFICIO PRINCIPAL].
2. Duración total: [6 / 10 / 15 / 30 SEGUNDOS] y formato [9:16 / 1:1 / 16:9].
3. Idea o mensaje: [LA HISTORIA EN UNA FRASE, por ejemplo "una taza de café que despierta a toda la casa"].
4. Personajes: [MI PRODUCTO CON CARA / UNA PERSONA DE PLASTILINA / UN ANIMAL / NINGUNO].
5. Colores de marca: [COLORES] y texto final: [ESLOGAN CORTO Y NOMBRE DE MARCA].
6. Herramienta de vídeo y si admite imagen de inicio.

tarea: entrega estas secciones.

A) guion de planos en español: tabla con número de plano, duración en segundos, qué se ve, movimiento de cámara y sonido sugerido. Entre tres y seis planos según la duración.

B) bloque de estilo común en inglés, para pegar en todos los prompts: "claymation stop-motion style, handmade plasticine with visible fingerprints, felt and cardboard set, soft studio lighting, slightly choppy animation at 12 frames per second, warm color palette".

C) para cada plano, prompt final de imagen inicial en inglés y prompt final de vídeo en inglés. El de vídeo debe describir solo el movimiento (qué cambia, a qué velocidad, qué hace la cámara) y repetir el bloque de estilo.

D) plano final con el nombre de marca: indica cómo generarlo y recomienda añadir el texto en edición, porque los generadores de vídeo deforman las letras.

E) dos variantes de concepto en inglés: una versión "detrás de las cámaras" donde se ven las manos del animador moldeando el producto y una versión en bucle de seis segundos para anuncio en historias.

F) consejos de coherencia y montaje: cómo mantener el mismo personaje en todos los planos (usar la misma imagen de referencia y la misma descripción), cómo evitar que el material parezca plástico liso, qué hacer si el movimiento sale demasiado fluido, y qué música o efectos de sonido encajan con este estilo sin usar canciones con derechos.

derechos e imagen: incluye un apartado breve: no recrees personajes ni anuncios conocidos de plastilina de forma reconocible; no uses logotipos de otras marcas en el decorado; si aparece una persona real, debe haber dado su permiso; usa música con licencia o libre de derechos; y revisa las normas de la plataforma sobre contenido publicitario generado con IA.

instrucción de estilo: explicaciones en español claro, prompts en inglés. Sé muy concreto con los movimientos: un plano, una acción principal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Producir un anuncio corto con estética de plastilina y stop-motion para redes sociales o campañas de pago usando generadores de imagen y vídeo con IA.',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Tu yo de la infancia y tu yo actual juntos en la misma foto con IA',
                'description'       => 'Claude te devuelve el prompt en inglés para crear una imagen emotiva en la que tu versión adulta abraza o acompaña a tu versión infantil, conservando el parecido de ambas fotos, con variantes, ideas de uso profesional y consejos.',
                'prompt_content'    => <<<'EOT'
objetivo: actúa como director de arte y fotógrafo de retrato. Escribe el prompt final en inglés para generar, en ChatGPT Images o Gemini (o en Midjourney con referencias de imagen), una fotografía en la que aparezco yo en la actualidad junto a mi yo de la infancia, como si ambos hubiéramos posado en la misma sesión.

contexto: esta tendencia emociona porque cuenta una historia en una sola imagen: de dónde vengo y quién soy ahora. También tiene uso profesional: aniversarios de carrera, la sección "sobre mí" de una web, una publicación sobre vocación o un cartel para una charla. Lo difícil es que las dos personas sean reconocibles, que la luz y el estilo fotográfico sean los mismos para ambos y que la escala de edad sea coherente.

pídeme estos datos antes de escribir (solo los que falten):
1. Foto actual: confirmación de que subiré una foto reciente mía con buena luz.
2. Foto de infancia: [EDAD APROXIMADA EN LA FOTO] y confirmación de que es mía.
3. Interacción: [ME ABRAZO A MÍ MISMO DE NIÑO / ESTAMOS SENTADOS EN UN BANCO / LE DOY LA MANO / ME MIRA DESDE ABAJO / LE ENSEÑO ALGO DE MI TRABAJO].
4. Escenario: [EL MISMO LUGAR DE LA FOTO ANTIGUA / MI LUGAR DE TRABAJO ACTUAL / FONDO DE ESTUDIO NEUTRO / UN PARQUE].
5. Estilo fotográfico: [FOTO ACTUAL NÍTIDA / ESTÉTICA ANALÓGICA CÁLIDA PARA LOS DOS / BLANCO Y NEGRO].
6. Uso: [PUBLICACIÓN PERSONAL / ANIVERSARIO PROFESIONAL / WEB / CARTEL DE CHARLA] y formato [1:1 / 4:5 / 16:9].
7. Herramienta.

tarea: entrega estas secciones.

A) prompt final en inglés, un único bloque. Debe indicar: dos personas, "the adult from reference image 1" y "the child from reference image 2", conservando los rasgos faciales de cada referencia; la interacción descrita con postura de manos y miradas; ropa de cada uno (la del niño coherente con su época, la del adulto actual); escenario con tres detalles; misma luz para los dos ("consistent lighting and color grading across both subjects"); proporción realista de estatura; expresión natural, sin exagerar la emoción; formato.

B) tres variantes en inglés: el adulto y el niño mirándose a través de un espejo, ambos sentados en extremos opuestos de una mesa con objetos de cada época, y versión "foto dentro de la foto" en la que el adulto sostiene la foto antigua mientras el niño aparece a su lado.

C) consejos de ejecución: cómo mejorar una foto de infancia borrosa antes de subirla (escanearla bien, recortar la cara, evitar restauradores agresivos que cambian los rasgos), cómo corregir si la IA mezcla las caras, cómo pedir que solo se ajuste la mano o la mirada, y cómo decidir si conviene dejar una pequeña nota indicando que es una imagen generada.

D) texto de acompañamiento: escribe en español dos versiones de pie de foto, una personal y otra profesional (aniversario de carrera), con [PLACEHOLDERS] para años de experiencia y lo que me llevó a mi profesión.

derechos e imagen: añade un apartado breve: usa solo fotos tuyas; si en la foto de infancia aparecen otras personas (familiares, compañeros de clase), recórtalas o pide su permiso; no hagas esta composición con fotos de otra persona, y menos de un menor actual, sin el consentimiento de esa persona o de sus tutores; y evita fondos con marcas, carteles o personajes reconocibles.

instrucción de estilo: explicaciones en español claro, cercano y sin dramatismo; prompt y variantes en inglés. Si alguna interacción que propongo suele salir mal en los generadores, avísame y sugiere otra más fiable.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Crear una imagen emotiva de tu yo actual junto a tu yo de la infancia para aniversarios profesionales, la sección "sobre mí" de tu web o publicaciones personales.',
                'vote_score'        => 79,
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
                'views_count' => rand(200, 800),
                'saves_count' => rand(20, 80),
            ]));

            $this->command->info("Created: {$data['title']}");
        }
    }
}
