<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills645Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 10,
                'title'             => 'Guion de corte: eliminar silencios, muletillas y repeticiones de una transcripción',
                'description'       => 'Inspirado en los skills virales de edición automática de vídeo de 2026: convierte una transcripción con marcas de tiempo en una lista de cortes precisa que elimina silencios muertos, muletillas y tomas repetidas, pero respeta las pausas dramáticas y las risas.',
                'prompt_content'    => <<<'EOT'
Actúa como editor de vídeo sénior especializado en contenido hablado (podcasts, vídeos de cabeza parlante, entrevistas y cursos). Tu trabajo es preparar un guion de corte que un editor humano o una herramienta de edición pueda ejecutar sin volver a ver el material completo.

contexto:
- Tipo de vídeo: [tipo de vídeo, p. ej. podcast, tutorial, entrevista, vlog]
- Duración aproximada del bruto: [duración en minutos]
- Duración objetivo del montaje final: [duración objetivo o "lo que salga sin perder contenido"]
- Ritmo deseado: [pausado / natural / dinámico tipo YouTube]
- Muletillas habituales del presentador: [lista, p. ej. "eh", "o sea", "vale", "en plan", "¿sabes?"]
- Transcripción con marcas de tiempo: [pega aquí la transcripción con formato mm:ss o hh:mm:ss por frase o por palabra]

tarea:
Analiza la transcripción completa y detecta cuatro tipos de problemas:
1. Silencios muertos: huecos de más de [umbral en segundos, por defecto 0,8] segundos sin intención comunicativa.
2. Muletillas y titubeos: palabras de relleno, arranques en falso, sílabas cortadas y "eeeh" alargados.
3. Repeticiones y tomas falsas: cuando el presentador repite una frase porque se equivocó, conserva SIEMPRE la última toma completa salvo que una anterior sea claramente mejor; explica por qué.
4. Divagaciones: fragmentos que no aportan al objetivo del vídeo [objetivo del vídeo]. Márcalas como "opcional", no como corte obligatorio.

instrucción importante sobre lo que NO se corta:
- Pausas intencionadas antes de un dato, una revelación o un chiste.
- Risas propias o del invitado, reacciones genuinas y momentos de complicidad.
- Silencios que dan peso emocional a una frase.
- Muletillas que forman parte de la personalidad del presentador si eliminarlas deja la frase robótica. En ese caso, conserva una de cada tres como máximo.
Cuando dudes, marca el fragmento como "revisar" en lugar de cortarlo.

Formato de salida:
1. Resumen ejecutivo: duración estimada antes y después, número de cortes por tipo y porcentaje de tiempo eliminado.
2. Tabla de cortes con columnas: N.º | Entrada | Salida | Tipo (silencio / muletilla / repetición / divagación) | Texto afectado | Acción (cortar / revisar / opcional) | Motivo breve.
3. Lista de "momentos protegidos": marcas de tiempo de pausas, risas o silencios que has decidido conservar y por qué.
4. Advertencias de continuidad: cortes que pueden provocar saltos visibles de imagen (jump cuts) y sugerencia para taparlos con zoom, b-roll o cambio de plano.
5. Versión limpia del guion: la transcripción final tal como sonará tras aplicar los cortes obligatorios, para que el presentador la valide.
6. Exportación en texto plano con una línea por corte, en formato "ENTRADA --> SALIDA", lista para pegar en un editor que admita listas de edición.

Reglas de calidad:
- Deja siempre entre 0,1 y 0,2 segundos de colchón antes y después de cada corte para que la voz no suene recortada.
- No juntes dos cortes separados por menos de 0,5 segundos: fusiónalos en uno.
- Si la transcripción no tiene marcas de tiempo por palabra, indica que los tiempos son aproximados.
- Si detectas que falta contexto (por ejemplo, no sabes si un silencio es intencionado), pregúntamelo antes de cerrar la lista.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Preparar el primer montaje de podcasts, tutoriales y vídeos de cabeza parlante eliminando silencios y muletillas sin perder naturalidad',
                'vote_score'        => 74,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Detectar los momentos virales de un vídeo largo y convertirlos en clips verticales 9:16',
                'description'       => 'Inspirado en los skills virales de "clipping" automático de 2026: analiza la transcripción de un vídeo largo, puntúa sus momentos con más potencial y entrega cada clip vertical con gancho, encuadre y subtítulos listos.',
                'prompt_content'    => <<<'EOT'
Actúa como estratega de contenido corto y editor de clips con experiencia en TikTok, Instagram Reels y YouTube Shorts. Tu misión es encontrar dentro de un vídeo largo los fragmentos con más probabilidad de funcionar por sí solos en formato vertical.

contexto:
- Tema del vídeo original: [tema]
- Plataforma principal de destino: [TikTok / Reels / Shorts / todas]
- Público objetivo: [descripción del público]
- Número de clips que quiero: [número, por defecto 8]
- Duración máxima de cada clip: [segundos, por defecto 60]
- Tono de marca: [divulgativo, polémico, humorístico, inspirador...]
- Transcripción con marcas de tiempo: [pega aquí la transcripción]

tarea:
1. Lee la transcripción completa y localiza candidatos a clip. Un buen candidato cumple al menos tres de estos criterios: abre con una afirmación fuerte o una pregunta, contiene un dato sorprendente, una opinión contraria a lo habitual, una historia con giro, un consejo accionable, una frase citable o una emoción intensa (risa, enfado, sorpresa).
2. Comprueba que cada candidato se entiende sin el resto del vídeo. Si necesita contexto, propón una frase de texto en pantalla que lo aporte en menos de 8 palabras.
3. Puntúa cada candidato de 1 a 10 en: fuerza del gancho, autonomía, valor para el público y potencial de compartirse. Calcula la media.
4. Selecciona los [número] mejores, evitando que dos clips repitan la misma idea.

Formato de salida para cada clip:
- Título interno del clip
- Entrada y salida exactas (mm:ss --> mm:ss) y duración
- Puntuación media y desglose
- Gancho de apertura: la primera frase que se oye. Si la mejor frase está en mitad del fragmento, propón reordenarla y marca el corte necesario.
- Texto en pantalla de los 3 primeros segundos (máx. 8 palabras)
- Indicaciones de encuadre 9:16: a quién seguir en cada tramo si hay varias personas, cuándo hacer zoom y si hace falta pantalla partida
- Subtítulos: transcripción limpia dividida en bloques de 2 a 4 palabras, con las palabras clave que deben resaltarse en otro color
- Final del clip: cómo cerrar (frase rotunda, bucle con el inicio o llamada a la acción) para favorecer el visionado repetido
- Descripción corta para publicar (máx. 150 caracteres) y 3 a 5 hashtags relevantes

Después de la lista, añade:
- Ranking final ordenado por potencial y un calendario sugerido de publicación (qué clip sale primero y por qué).
- Dos clips "descartados por poco" con el motivo, por si quiero probarlos.
- Riesgos: frases que puedan sacarse de contexto o generar polémica no deseada.

Reglas:
- No inventes frases que no estén en la transcripción. Si propones texto nuevo, márcalo como "texto en pantalla" o "voz en off añadida".
- Prioriza los primeros 3 segundos: si un clip no engancha ahí, descártalo aunque el resto sea bueno.
- Mantén los subtítulos fieles al audio, solo corrigiendo muletillas evidentes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sacar entre 5 y 10 clips verticales con subtítulos de un podcast, directo o vídeo largo de YouTube',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Plan de zooms y empujes de cámara para vídeos de cabeza parlante',
                'description'       => 'Inspirado en los skills virales de edición dinámica de 2026: a partir de la transcripción decide dónde aplicar zooms, empujes lentos y cambios de encuadre para mantener la atención en vídeos de una sola cámara.',
                'prompt_content'    => <<<'EOT'
Actúa como editor de vídeo especializado en contenido de cabeza parlante para YouTube y redes sociales. Sabes que, cuando hay una sola cámara fija, el movimiento de encuadre en edición es la herramienta principal para mantener la atención y marcar el ritmo.

contexto:
- Plataforma y formato: [YouTube horizontal 16:9 / vertical 9:16 / ambos]
- Resolución de grabación: [p. ej. 4K, que permite recortar sin perder calidad, o 1080p]
- Encuadre original: [plano medio, plano medio corto, primer plano]
- Estilo deseado: [sobrio y corporativo / dinámico tipo creador / muy enérgico]
- Duración del vídeo: [duración]
- Transcripción con marcas de tiempo: [pega aquí la transcripción]

tarea:
Lee la transcripción y clasifica cada frase o bloque según su función: introducción, explicación, dato clave, chiste, cambio de tema, historia personal, llamada a la acción o cierre. Después asigna un movimiento de cámara virtual siguiendo estas pautas:
1. Zoom de golpe (punch-in, 110-125 %): en remates de chistes, datos sorprendentes, palabras enfáticas y para tapar cortes de salto.
2. Empuje lento (de 100 % a 108-112 % durante 3-6 segundos): en momentos emocionales, historias personales y frases importantes.
3. Vuelta al plano abierto: tras un cambio de tema o al iniciar una nueva sección, para dar aire.
4. Encuadre lateral o descentrado: cuando aparecerá un gráfico, texto o b-roll en un lado de la pantalla.
5. Sin movimiento: en tramos de explicación densa donde el movimiento distraería.

Reglas de ritmo:
- No más de un movimiento cada [segundos, por defecto 4-8] en estilo dinámico, ni más de uno cada 15 segundos en estilo sobrio.
- No encadenes dos zooms de golpe seguidos al mismo porcentaje: alterna niveles.
- Cada corte de salto (jump cut) debe ir acompañado de un cambio de encuadre para que no se note.
- Comprueba que el recorte nunca corte la cabeza ni deje los ojos fuera del tercio superior.
- Si la grabación es 1080p, limita los zooms al 115 % para no perder nitidez.

Formato de salida:
1. Tabla de movimientos con columnas: N.º | Marca de tiempo | Frase de referencia | Función de la frase | Movimiento | Escala inicial y final | Duración | Curva (corte seco / suavizado) | Motivo.
2. Mapa de intensidad: divide el vídeo en tramos de 30 segundos y marca la energía de cada uno (baja, media, alta) para detectar zonas planas.
3. Recomendaciones para las zonas planas: dónde añadir texto en pantalla, b-roll o efecto de sonido si el zoom no basta.
4. Ajustes para la versión vertical (si aplica): posición de la cara en el recorte 9:16 y zonas seguras para subtítulos.
5. Instrucciones de exportación: lista sencilla de marcas de tiempo con escala para replicar en [Premiere Pro / DaVinci Resolve / CapCut / Final Cut].

Antes de entregar, revisa que la cantidad de movimientos sea coherente con el estilo elegido y que ningún tramo de más de 20 segundos quede sin estímulo visual en el estilo dinámico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Dar ritmo visual a vídeos grabados con una sola cámara fija sin regrabar ni usar varias cámaras',
                'vote_score'        => 63,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Buscador de b-roll: qué recurso visual poner en cada momento del guion',
                'description'       => 'Inspirado en los skills virales de búsqueda de b-roll de 2026: recorre el guion frase a frase y propone el recurso visual ideal, con términos de búsqueda para bancos de imágenes y alternativas grabables o generadas.',
                'prompt_content'    => <<<'EOT'
Actúa como director de postproducción y documentalista visual. Tu tarea es convertir un guion o transcripción en una lista de b-roll concreta, buscable y realista, para que el editor sepa exactamente qué imagen cubre cada momento.

contexto:
- Tema del vídeo: [tema]
- Formato: [16:9 / 9:16 / ambos]
- Estilo visual: [documental, corporativo limpio, creador de YouTube, cinematográfico, humor]
- Recursos disponibles: [bancos de imágenes que uso, p. ej. Pexels, Storyblocks, Artgrid; material propio grabado; capturas de pantalla; generación con IA]
- Presupuesto o restricciones: [solo recursos gratuitos, no mostrar marcas, no mostrar personas reconocibles...]
- Porcentaje de pantalla que quiero cubrir con b-roll: [p. ej. 30 %]
- Guion o transcripción con marcas de tiempo: [pega aquí el texto]

tarea:
1. Divide el guion en momentos de 3 a 10 segundos y decide en cuáles el b-roll aporta (ilustra un concepto abstracto, muestra un dato, enseña un producto, rompe una explicación larga, tapa un corte) y en cuáles conviene mantener la cara del presentador (confesiones, opiniones fuertes, chistes, llamadas a la acción).
2. Para cada momento con b-roll, piensa en tres niveles de recurso:
   - Literal: muestra exactamente lo que se dice.
   - Metafórico: una imagen que transmite la idea sin ser obvia.
   - Gráfico: texto animado, icono, gráfico de datos o captura de pantalla.
   Elige uno como recomendado y deja los otros como alternativa.
3. Escribe términos de búsqueda en inglés y en español, porque los bancos de imágenes indexan mejor en inglés.
4. Si no existe un recurso de banco adecuado, propón un plano que pueda grabar yo con el móvil en menos de cinco minutos, o una instrucción para generarlo con IA.

Formato de salida:
1. Tabla principal: N.º | Entrada-salida | Frase del guion | ¿B-roll? (sí / no / opcional) | Tipo (literal / metafórico / gráfico) | Descripción del plano | Búsqueda EN | Búsqueda ES | Duración | Alternativa.
2. Lista de capturas de pantalla o grabaciones de pantalla que tengo que hacer yo, agrupadas por herramienta o web.
3. Lista de planos propios para grabar en una sola sesión, ordenados por localización para ahorrar tiempo.
4. Gráficos y textos animados: texto exacto, estilo y duración de cada uno.
5. Comprobación de cobertura: porcentaje real del vídeo cubierto con b-roll frente al objetivo y tramos de más de 30 segundos sin cambio visual.

Reglas:
- Evita los tópicos visuales gastados (apretones de manos, personas señalando pantallas, bombillas encendiéndose) salvo que el estilo sea humorístico.
- No pongas b-roll sobre la primera frase del vídeo ni sobre el remate de un chiste.
- Respeta las restricciones de marcas y derechos indicadas.
- Si una frase admite un recurso con mucho más impacto que el resto, márcala como "momento estrella".
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Planificar el b-roll de un vídeo de YouTube o curso antes de editar, con búsquedas listas para bancos de imágenes',
                'vote_score'        => 58,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Guion y brief técnico para un vídeo explicativo animado con Remotion',
                'description'       => 'Inspirado en los skills virales de vídeo programático con Remotion de 2026: convierte una idea en guion, storyboard escena a escena y especificación técnica de componentes React lista para implementar.',
                'prompt_content'    => <<<'EOT'
Actúa como director creativo de motion graphics y desarrollador con experiencia en Remotion (vídeo hecho con React). Vas a preparar todo lo necesario para producir un vídeo explicativo animado de forma programática, de manera que pueda implementarse escena a escena sin improvisar.

contexto:
- Producto, concepto o idea que hay que explicar: [descripción]
- Público objetivo: [quién lo verá y qué sabe ya]
- Objetivo del vídeo: [entender cómo funciona, registrarse, compartir, vender...]
- Duración objetivo: [segundos, por defecto 60-90]
- Formato: [1920x1080, 1080x1920, 1080x1080]
- FPS: [30 o 60]
- Identidad visual: [colores en hexadecimal, tipografías, logotipo, estilo plano / 3D / ilustrado]
- Voz en off: [sí, con texto para locutar / no, solo texto en pantalla y música]
- Datos dinámicos: [¿el vídeo debe generarse con datos variables, p. ej. nombre del cliente o cifras? descríbelos]

tarea:
1. Escribe el guion con la estructura problema - consecuencia - solución - cómo funciona - prueba - llamada a la acción. Cada frase de locución debe durar como máximo 4 segundos.
2. Crea el storyboard escena a escena. Para cada escena indica: número, rango de fotogramas (inicio y fin), duración en segundos, texto de locución, texto en pantalla, elementos visuales, animación de entrada, animación de salida y transición a la siguiente escena.
3. Diseña la especificación técnica para Remotion:
   - Estructura de la composición principal y de las secuencias (Sequence) con sus fotogramas.
   - Lista de componentes reutilizables (p. ej. TituloAnimado, TarjetaDato, IconoConEtiqueta, BarraProgreso) con sus props y tipos.
   - Esquema de props de entrada para los datos dinámicos, con valores por defecto.
   - Animaciones: qué usar con interpolate y qué con spring, con valores orientativos de damping y duración.
   - Recursos: imágenes, iconos, audio y fuentes necesarios, y dónde ubicarlos en la carpeta pública.
4. Propón la sincronización con el audio: en qué fotograma debe arrancar cada frase de locución y cada efecto de sonido.

Formato de salida:
1. Guion completo con tiempos.
2. Tabla de storyboard.
3. Árbol de archivos propuesto del proyecto.
4. Especificación de componentes (nombre, responsabilidad, props, animación).
5. Esqueleto de código de la composición principal con las secuencias y comentarios, sin implementar el detalle visual de cada componente.
6. Lista de comprobación antes de renderizar: legibilidad del texto (mínimo 3 segundos en pantalla por frase), contraste, zonas seguras, duración total y peso del render.

Reglas:
- Un solo mensaje por escena; si una escena necesita explicar dos cosas, divídela.
- No uses más de dos tipografías ni más de cuatro colores principales.
- Si falta información de marca, propón una paleta y márcala como provisional.
- Mantén el código en TypeScript y explica cualquier decisión que no sea obvia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Planificar y arrancar un vídeo explicativo animado generado con código, reutilizable con datos variables',
                'vote_score'        => 66,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Título, descripción, capítulos y etiquetas de YouTube a partir de la transcripción',
                'description'       => 'Inspirado en los skills virales de publicación en YouTube de 2026: a partir de la transcripción genera opciones de título, descripción optimizada, capítulos con marcas de tiempo, etiquetas e ideas de miniatura.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en crecimiento de canales de YouTube y SEO de vídeo. Tu objetivo es preparar todos los textos de publicación de un vídeo para maximizar el porcentaje de clics y la retención, sin prometer nada que el vídeo no cumpla.

contexto:
- Nombre del canal y temática: [canal y temática]
- Público objetivo: [descripción]
- Palabra clave principal que quiero posicionar: [palabra clave o "propónmela tú"]
- Enlaces que deben aparecer en la descripción: [web, producto, redes, afiliados]
- Llamada a la acción principal: [suscribirse, descargar recurso, comprar, ver otro vídeo]
- Estilo de títulos del canal: [informativo, curiosidad, lista, reto, polémico moderado]
- Transcripción completa con marcas de tiempo: [pega aquí la transcripción]

tarea:
1. Resume en dos frases de qué trata realmente el vídeo y cuál es la promesa principal que cumple.
2. Identifica la intención de búsqueda: qué escribiría alguien en YouTube o Google para encontrar este vídeo. Propón la palabra clave principal y 5 secundarias.
3. Escribe 10 títulos de menos de 60 caracteres usando ángulos distintos: beneficio directo, curiosidad, número, error común, comparación, historia, tiempo o resultado concreto. Indica cuál recomiendas y por qué.
4. Propón 3 conceptos de miniatura que complementen el título (no lo repitan): composición, expresión facial, texto de máximo 4 palabras y color dominante.
5. Redacta la descripción:
   - Dos primeras líneas (las que se ven sin desplegar) con la palabra clave y un motivo para ver el vídeo.
   - Párrafo de resumen de 80 a 120 palabras con palabras clave secundarias de forma natural.
   - Bloque de enlaces y recursos.
   - Capítulos.
   - Llamada a la acción y 3 hashtags.
6. Crea los capítulos: empiezan en 00:00, mínimo 3, cada uno de al menos 10 segundos, con títulos descriptivos y que contengan palabras que la gente busca, no títulos genéricos como "Introducción".
7. Sugiere 15 etiquetas ordenadas de más específica a más amplia.
8. Escribe el comentario fijado: una pregunta que invite a responder relacionada con el contenido.

Formato de salida:
- Resumen y promesa
- Palabras clave
- Títulos (tabla: título | ángulo | caracteres | recomendación)
- Miniaturas
- Descripción completa lista para copiar
- Capítulos listos para copiar
- Etiquetas separadas por comas
- Comentario fijado
- Sugerencia de vídeo relacionado para la pantalla final, si se deduce del contenido

Reglas:
- No uses mayúsculas en todo el título ni más de un emoji.
- Comprueba que las marcas de tiempo de los capítulos existen en la transcripción.
- Si el vídeo no cumple la promesa de un título, descártalo aunque sea atractivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Publicar un vídeo de YouTube con título, descripción, capítulos y etiquetas optimizados en pocos minutos',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Ganchos de los 3 primeros segundos para Shorts, Reels y TikTok',
                'description'       => 'Inspirado en los skills virales de "hooks" para vídeo corto de 2026: genera y puntúa ganchos verbales, visuales y de texto en pantalla para que el espectador no deslice en los primeros 3 segundos.',
                'prompt_content'    => <<<'EOT'
Actúa como guionista de vídeo corto con experiencia en retención en TikTok, Instagram Reels y YouTube Shorts. Sabes que los 3 primeros segundos deciden si el vídeo se ve o se desliza, y que un gancho funciona cuando combina lo que se oye, lo que se ve y lo que se lee.

contexto:
- Tema del vídeo: [tema]
- Idea principal o mensaje que entrega el vídeo: [mensaje]
- Público objetivo: [quién es, qué le preocupa, qué desea]
- Plataforma principal: [TikTok / Reels / Shorts]
- Formato del vídeo: [cara a cámara, voz en off con imágenes, tutorial de pantalla, antes y después, vlog]
- Tono: [cercano, experto, humorístico, provocador, inspirador]
- Guion actual o primeras frases (si lo tengo): [texto o "no tengo"]
- Ganchos que me funcionaron antes: [ejemplos o "ninguno"]

tarea:
1. Identifica el deseo o el miedo concreto del público que conecta con este vídeo.
2. Escribe 15 ganchos verbales (lo que se dice), de máximo 12 palabras cada uno, repartidos entre estas familias:
   - Afirmación contraria a lo que todos creen.
   - Error común que comete el público.
   - Resultado concreto con número o plazo.
   - Pregunta que el espectador se ha hecho.
   - Inicio en mitad de la acción o de una historia.
   - Advertencia o "deja de hacer esto".
   - Comparación inesperada.
3. Para cada gancho verbal, añade:
   - Gancho visual: qué se ve en el primer fotograma (movimiento, objeto en mano, cambio de plano, resultado final mostrado primero).
   - Texto en pantalla: máximo 6 palabras, que refuerce sin repetir literalmente lo que se dice.
   - Promesa implícita: qué espera ver el espectador si se queda.
4. Puntúa cada gancho de 1 a 10 en claridad, curiosidad, relevancia para el público y cumplimiento (si el vídeo realmente cumple lo prometido).
5. Elige los 3 mejores y reescribe para cada uno los primeros 10 segundos completos del guion, incluyendo la transición del gancho al contenido sin perder tensión.

Formato de salida:
1. Diagnóstico del público (3 líneas).
2. Tabla de 15 ganchos: N.º | Familia | Gancho verbal | Gancho visual | Texto en pantalla | Puntuación media.
3. Los 3 finalistas con sus primeros 10 segundos de guion y una nota de dirección (tono de voz, gesto, ritmo).
4. Plan de prueba: cómo publicar variantes del mismo vídeo cambiando solo el gancho y qué métricas mirar (retención a los 3 segundos, visionado completo, compartidos).

Reglas:
- Nada de cebos engañosos: si el gancho promete algo, el vídeo debe darlo.
- Evita arranques débiles como "Hola, hoy os voy a contar" o "En este vídeo".
- Escribe en español natural, como se habla, no como se escribe.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Mejorar la retención inicial de Shorts, Reels y TikToks probando varios ganchos para el mismo vídeo',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Vídeo de producto cinematográfico: lista de planos y recetas de toma',
                'description'       => 'Inspirado en los skills virales de vídeo de producto cinematográfico de 2026: diseña la lista de planos, la iluminación, el movimiento de cámara y los ajustes de cada toma para un anuncio de producto con aspecto premium.',
                'prompt_content'    => <<<'EOT'
Actúa como director de fotografía especializado en publicidad de producto y vídeo comercial. Vas a diseñar un rodaje de producto con aspecto cinematográfico, adaptado al equipo y al presupuesto disponibles, con recetas de toma tan concretas que pueda ejecutarlas una sola persona.

contexto:
- Producto: [nombre, tamaño, materiales, colores, acabado (mate, brillante, transparente, metálico)]
- Beneficio principal y sensación que debe transmitir: [p. ej. lujo, frescura, potencia, artesanía, tecnología]
- Uso del vídeo: [anuncio de redes, página de producto, lanzamiento, Kickstarter]
- Formato y duración: [9:16 / 16:9 / 1:1, duración en segundos]
- Equipo disponible: [cámara o móvil, objetivos, focos, difusores, trípode, slider, gimbal, plato giratorio]
- Espacio de rodaje: [mesa en casa, estudio, exterior]
- Presupuesto para atrezo: [cantidad]
- Referencias de estilo: [describe anuncios o estéticas que te gustan]

tarea:
1. Define el concepto visual en tres líneas: paleta de color, tipo de luz (dura, suave, contraluz, claroscuro) y ritmo de montaje.
2. Diseña una lista de 10 a 15 planos que cuenten una pequeña historia: misterio o revelación, detalles de material, producto en uso, beneficio en acción y plano final de marca.
3. Para cada plano escribe una receta de toma:
   - Tipo de plano (macro, detalle, medio, cenital, contrapicado, plano de héroe).
   - Movimiento de cámara (fijo, deslizamiento lateral, empuje, órbita, plato giratorio, inclinación) y velocidad.
   - Esquema de iluminación: número de luces, posición respecto al producto y a la cámara, difusión y uso de reflectores o banderas negras.
   - Ajustes de cámara orientativos: fotogramas por segundo (24, 60 o 120 para cámara lenta), obturación, apertura y enfoque (manual, cambio de foco).
   - Fondo y atrezo, con alternativas caseras baratas.
   - Efecto práctico si aplica: agua pulverizada, humo, polvo, salpicadura, caída de producto.
   - Duración útil en el montaje.
4. Ordena los planos en un plan de rodaje eficiente agrupando por esquema de luz y fondo, no por orden del montaje.
5. Propón el montaje: orden final, duración de cada plano, puntos de corte con el ritmo de la música y textos en pantalla.

Formato de salida:
1. Concepto visual.
2. Tabla de planos: N.º | Nombre | Tipo | Movimiento | Luz | Ajustes | Atrezo | Efecto | Duración.
3. Diagramas de iluminación descritos en texto (vista cenital: posición de cada luz en grados y distancia).
4. Plan de rodaje por bloques con tiempo estimado.
5. Guion de montaje con música sugerida (tempo en pulsaciones por minuto y estilo).
6. Errores típicos a evitar con este tipo de producto (reflejos, huellas, polvo, colores falseados) y cómo resolverlos.

Reglas:
- Adapta todo al equipo indicado; si un plano requiere algo que no tengo, ofrece una alternativa.
- Para productos brillantes o transparentes, explica cómo controlar los reflejos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar el rodaje de un anuncio de producto con aspecto premium usando equipo reducido',
                'vote_score'        => 61,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Biblioteca de recursos: clasificar y etiquetar archivos de un equipo de contenido',
                'description'       => 'Inspirado en los skills virales de organización de recursos creativos de 2026: diseña una taxonomía de etiquetas y clasifica archivos, enlaces e imágenes de un equipo de contenido para encontrarlos en segundos.',
                'prompt_content'    => <<<'EOT'
Actúa como gestor de activos digitales (DAM) y documentalista para equipos de contenido. Tu objetivo es poner orden en una biblioteca caótica de vídeos, imágenes, plantillas, enlaces y documentos, y dejar un sistema que el equipo pueda mantener solo.

contexto:
- Tipo de equipo: [agencia, marca, creador con equipo, medio digital]
- Número de personas que usan la biblioteca: [número]
- Herramienta donde se guarda: [Google Drive, Dropbox, Notion, Airtable, Frame.io, carpeta local]
- Tipos de recursos: [vídeos brutos, vídeos finales, miniaturas, fotos de producto, logotipos, música, plantillas, enlaces de referencia, guiones]
- Clientes, marcas o proyectos activos: [lista]
- Problemas actuales: [no se encuentran archivos, duplicados, versiones mezcladas, derechos dudosos...]
- Lista de recursos a clasificar: [pega aquí nombres de archivo, enlaces o descripciones, uno por línea]

tarea:
1. Diseña una taxonomía de etiquetas con estas dimensiones (adáptalas si no encajan):
   - Tipo de recurso (vídeo, imagen, audio, plantilla, documento, enlace).
   - Proyecto o cliente.
   - Fase (bruto, en edición, aprobado, publicado, archivado).
   - Formato o plataforma (16:9, 9:16, 1:1, YouTube, Instagram, TikTok, web).
   - Tema o categoría de contenido.
   - Derechos de uso (propio, licencia de banco, cedido por cliente, uso limitado hasta fecha).
   - Responsable.
   Para cada dimensión define valores cerrados, sin sinónimos, para evitar etiquetas duplicadas.
2. Propón una convención de nombres de archivo, por ejemplo AAAAMMDD_proyecto_tipo_descripcion_v01, con reglas claras sobre mayúsculas, separadores y versiones.
3. Clasifica cada recurso de la lista: nombre actual, nombre propuesto, etiquetas por dimensión y carpeta destino. Si te falta información para alguna dimensión, márcala como "pendiente" en lugar de inventarla.
4. Detecta posibles duplicados y versiones antiguas, e indica cuál conservar.
5. Señala los recursos con derechos dudosos o caducados.

Formato de salida:
1. Taxonomía completa en tabla (dimensión | valores permitidos | descripción | ejemplo).
2. Convención de nombres con 3 ejemplos.
3. Estructura de carpetas en árbol, como máximo 3 niveles de profundidad.
4. Tabla de clasificación de los recursos, lista para pegar en una hoja de cálculo.
5. Lista de duplicados y riesgos de derechos.
6. Guía de mantenimiento de una página para el equipo: cómo subir un recurso nuevo, quién revisa, cada cuánto se archiva y qué hacer con los brutos tras publicar.

Reglas:
- Prioriza que cualquier persona nueva encuentre un archivo en menos de 30 segundos.
- Menos etiquetas bien usadas es mejor que muchas inconsistentes: no más de 7 dimensiones.
- Usa minúsculas y guiones en las etiquetas para evitar problemas de búsqueda.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Ordenar la carpeta compartida de un equipo de contenido con etiquetas, nombres y estructura coherentes',
                'vote_score'        => 52,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Reutilizar un vídeo largo en 10 piezas: LinkedIn, hilo, newsletter y carrusel',
                'description'       => 'Inspirado en los skills virales de reutilización de contenido de 2026: transforma la transcripción de un vídeo largo en diez piezas adaptadas a cada canal, manteniendo la voz del autor y sin repetir el mismo ángulo.',
                'prompt_content'    => <<<'EOT'
Actúa como estratega de contenido multicanal y redactor. Tu tarea es exprimir un único vídeo largo (podcast, webinar, vídeo de YouTube o charla) y convertirlo en diez piezas distintas, cada una adaptada a las reglas de su canal y con un ángulo propio.

contexto:
- Autor o marca y su voz: [descripción del tono, expresiones habituales, cosas que nunca diría]
- Público objetivo: [descripción]
- Objetivo de negocio de esta tanda: [atraer seguidores, captar suscriptores, vender, posicionarse como experto]
- Canales disponibles: [LinkedIn, X, Instagram, newsletter, blog, TikTok...]
- Enlace al vídeo original: [enlace o "no incluir"]
- Transcripción completa: [pega aquí la transcripción]

tarea:
1. Extrae de la transcripción una lista de "átomos de contenido": ideas principales, datos, historias, citas textuales, consejos accionables, opiniones polémicas y preguntas del público. Numera cada átomo con su marca de tiempo.
2. Asigna los átomos a estas diez piezas, sin repetir el ángulo principal entre ellas:
   1. Post de LinkedIn tipo historia personal (1.200-1.500 caracteres, primera línea que obligue a desplegar).
   2. Post de LinkedIn tipo lista de lecciones o consejos.
   3. Hilo de X de 6 a 9 publicaciones con un gancho fuerte y un cierre que remita al vídeo.
   4. Newsletter de 500 a 700 palabras con asunto, preasunto, desarrollo y una sola llamada a la acción.
   5. Carrusel de Instagram o LinkedIn de 8 a 10 diapositivas: texto de cada diapositiva y una indicación visual.
   6. Cita destacada para imagen (máx. 20 palabras) con contexto para el texto del post.
   7. Guion de vídeo corto de 45 segundos basado en el mejor momento.
   8. Artículo de blog: título SEO, estructura de encabezados y primer párrafo.
   9. Pregunta o encuesta para generar conversación con 3 o 4 opciones.
   10. Publicación de "detrás de las cámaras" o reflexión del autor sobre el proceso.
3. Escribe cada pieza completa, lista para publicar, respetando la voz del autor.
4. Propón un calendario de publicación de dos semanas que distribuya las piezas por canal y día, empezando por las de mayor potencial.

Formato de salida:
1. Lista de átomos de contenido (tabla: N.º | tipo | idea | marca de tiempo).
2. Mapa de reutilización: pieza | canal | átomos usados | ángulo | objetivo.
3. Las diez piezas completas, cada una bajo su propio encabezado.
4. Calendario de dos semanas.
5. Métricas que conviene revisar en cada canal para decidir qué ángulo repetir.

Reglas:
- No inventes datos ni anécdotas que no estén en la transcripción; si necesitas un ejemplo adicional, márcalo como [añadir ejemplo propio].
- Cada pieza debe tener sentido sin haber visto el vídeo.
- Evita las frases hechas típicas de texto generado y los emojis en exceso.
- Adapta la longitud y el formato a cada canal, no copies el mismo texto recortado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Convertir un podcast, webinar o vídeo de YouTube en contenido para dos semanas en varios canales',
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
