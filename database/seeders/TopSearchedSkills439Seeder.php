<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills439Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido para YouTube con IA: de la idea al canal con audiencia fiel',
                'description'       => 'Aprende a usar IA para diseñar la estrategia completa de un canal de YouTube: investigación de nichos, planificación de contenidos, guiones optimizados para retención y análisis de métricas para crecer de forma sostenida.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de contenido digital especializado en YouTube con más de 8 años ayudando a marcas y creadores a construir canales con audiencias leales y monetización sólida. Has trabajado con canales que partían de cero y llegaron a cientos de miles de suscriptores en nichos tan variados como finanzas personales, tecnología, educación y lifestyle. Entiendes que YouTube no es solo una plataforma de video — es un motor de búsqueda y un sistema de recomendación que premia la consistencia, la retención y la relevancia temática.

Hoy vas a ayudarme a construir la estrategia de contenido de video para mi canal o marca usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de canal o marca: [personal / empresarial / educativo / de entretenimiento]
- Nicho o temática principal: [descripción]
- Estado actual del canal: [nuevo / existente con X suscriptores / en proceso de pivote]
- Objetivo principal: [awareness de marca / generación de leads / monetización directa / posicionamiento de autoridad]

---

## 1. Investigación de nicho y posicionamiento: encontrar el ángulo diferencial

El mayor error al empezar en YouTube es ser genérico. El algoritmo recompensa la especificidad y la audiencia sigue a quien habla exactamente de lo que necesita escuchar.

**Análisis de nicho con IA:**

```
Estoy planificando un canal de YouTube sobre [temática]. Los canales más grandes en este nicho son: [lista de 3-5 competidores principales].

Analiza:
1. Los subtemas dentro de este nicho que tienen alta demanda de búsqueda pero menor competencia (los huecos que los canales grandes no cubren bien)
2. El tipo de audiencia que no está siendo atendida por los canales existentes
3. El ángulo diferencial que podría tener mi canal: ¿qué perspectiva única, formato o profundidad puedo ofrecer que los demás no ofrecen?
4. Los 10 títulos de video que más probabilidades tienen de posicionarse en los próximos 6 meses en este nicho
5. El posicionamiento de canal en una frase: qué soy, para quién, y qué obtendrán de mí
```

---

## 2. Planificación de contenidos: el calendario editorial que mantiene la consistencia

```
Mi canal es sobre [temática]. Mi posicionamiento es [descripción]. Puedo publicar [frecuencia: 1-2 videos por semana].

Diseña el plan de contenido para los próximos 3 meses que incluya:
1. Los pilares temáticos del canal (3-4 categorías de contenido que cubren diferentes momentos del viaje del espectador)
2. La mezcla de tipos de video: contenido evergreen de búsqueda, contenido de tendencia y contenido de comunidad
3. Una propuesta de 12 títulos de video para el primer mes con la lógica detrás de cada uno (por qué ese título y no otro)
4. La estrategia de series: qué contenidos funcionan mejor como videos individuales y cuáles como series vinculadas
5. El calendario de publicación con los mejores días y horas para mi audiencia objetivo
```

---

## 3. Guiones de video optimizados para retención: los primeros 30 segundos deciden todo

```
Voy a grabar un video sobre [tema específico]. El título tentativo es [título]. La duración objetivo es [X minutos].

Escribe el guión completo del video estructurado de la siguiente manera:
1. El gancho de los primeros 15-30 segundos: la promesa que hace que el espectador no haga clic en otro video (usa una de estas técnicas: pregunta que duele, afirmación contraintuitiva, número específico sorprendente, o escena de tensión)
2. La intro de presentación del canal (máximo 10 segundos, que no interrumpa el momentum del gancho)
3. El desarrollo del contenido con transiciones que mantienen la atención: usa marcadores de progreso ("en el punto 3 te voy a mostrar algo que cambió mi forma de..."), mini-ganchos antes de cada corte, y variación de ritmo
4. Los CTAs naturales integrados en el contenido (no como interrupción sino como parte del flujo)
5. El cierre con promesa del próximo video que genere anticipación real
```

---

## 4. Optimización SEO para YouTube: los metadatos que hacen que el algoritmo te encuentre

```
Tengo un video sobre [tema]. El contenido cubre los siguientes puntos principales: [lista].

Genera la optimización completa de SEO para YouTube:
1. 5 opciones de título optimizado (con el keyword principal en los primeros 3 palabras cuando sea posible, entre 50-60 caracteres, que genere curiosidad o urgencia sin ser clickbait)
2. La descripción del video de 300-500 palabras con: párrafo de gancho para los primeros 2 líneas visibles, desarrollo del contenido con keywords naturales, y sección de recursos/links al final
3. Las 10-15 etiquetas más relevantes (mix de keywords exactos, variaciones y términos relacionados)
4. El capítulo de marcas de tiempo (timestamps) con los nombres optimizados para búsqueda
5. La miniatura: descripción detallada de lo que debe mostrar, los colores que generan más CTR en este nicho y el texto que debe aparecer (máximo 3-4 palabras)
```

---

## 5. Análisis de métricas y optimización continua: aprender de cada video

```
Tengo los siguientes datos de mis últimos 5 videos:
- Tasas de retención: [datos o estimaciones]
- CTR (click-through rate): [datos]
- Fuentes de tráfico: [búsqueda / sugeridos / externo / lista de reproducción]
- Comentarios más frecuentes: [descripción]
- Videos con mejor y peor rendimiento: [descripción]

Analiza:
1. Qué está funcionando y qué no funciona en mi canal basándome en estos datos
2. Los patrones de los videos con mayor retención: ¿qué tienen en común en términos de tema, formato o estructura?
3. Las hipótesis de mejora que debo probar en los próximos 3 videos
4. Si el canal debería pivotar en algo: temática, formato, frecuencia o tipo de audiencia
5. Las oportunidades de contenido que me estoy perdiendo según las fuentes de tráfico y los comentarios de la audiencia
```

---

## Resultado esperado

Una estrategia de contenido para YouTube construida con IA no garantiza el éxito viral, pero sí elimina las dos causas principales de fracaso: la falta de consistencia por no tener un sistema claro, y la falta de relevancia por no entender lo que la audiencia realmente busca. Con este framework aplicado durante 6 meses de forma consistente, deberías ver una mejora sostenida en el CTR, la retención media y el crecimiento orgánico de suscriptores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Marketers y creadores de contenido que quieren construir una estrategia de YouTube sólida con investigación de nicho, guiones optimizados y análisis de métricas',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Documentación técnica en video con IA: tutoriales de código que la gente realmente completa',
                'description'       => 'Framework para desarrolladores que crean contenido técnico en video: cómo estructurar tutoriales de código, optimizarlos para YouTube y GitHub, y construir una audiencia técnica que se convierte en comunidad.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador de software y creador de contenido técnico con experiencia publicando tutoriales de programación que combinan rigor técnico con pedagogía efectiva. Has creado cursos en plataformas como YouTube, Udemy y canales propios, y sabes que la diferencia entre un tutorial técnico que funciona y uno que abandona el 80% de la audiencia a los 3 minutos no es la complejidad del contenido — es la estructura pedagógica y la claridad de la presentación.

Hoy vas a ayudarme a crear contenido técnico en video de alta calidad usando IA como herramienta de planificación y escritura.

**Contexto de mi situación:**
- Lenguaje o tecnología que voy a enseñar: [JavaScript / Python / React / AWS / etc.]
- Nivel de la audiencia objetivo: [principiantes / intermedios / avanzados]
- Formato preferido: [tutorial paso a paso / explicación conceptual / proyecto completo / código en vivo]
- Canal o plataforma: [YouTube / Twitch / plataforma de cursos / canal interno de empresa]

---

## 1. Selección de temas técnicos con potencial de audiencia

El error más frecuente en contenido técnico es elegir los temas que el creador considera interesantes, no los que la audiencia está buscando activamente.

```
Soy desarrollador especializado en [tecnología/lenguaje]. Quiero crear contenido en video para [audiencia objetivo].

Ayúdame a identificar:
1. Los 15 temas técnicos en mi área de especialidad con mayor volumen de búsqueda en YouTube y Stack Overflow en los últimos 6 meses
2. Los errores y problemas más frecuentes que los desarrolladores buscan resolver en foros y comunidades (Reddit, Discord, GitHub Issues) relacionados con [tecnología]
3. Los temas evergreen que siempre tienen demanda vs. los temas de tendencia que tienen un pico y luego caen
4. El nivel de dificultad óptimo para mi audiencia: ¿qué nivel de conocimiento previo asumo para maximizar el alcance sin perder profundidad?
5. Los 5 videos de "proyecto completo" que construirían una narrativa de aprendizaje progresiva para mi canal
```

---

## 2. Estructura pedagógica del tutorial técnico: de cero a funcionando sin abandonos

```
Voy a grabar un tutorial sobre [tema técnico específico]. La duración objetivo es [X minutos]. El resultado final que el espectador logrará es: [descripción del proyecto o habilidad].

Diseña la estructura pedagógica del tutorial:
1. El gancho de los primeros 60 segundos: muestra el resultado final primero (lo que el espectador podrá hacer al terminar), luego explica brevemente qué se necesita saber previamente
2. La sección de configuración del entorno: cómo hacerla rápida y sin perder a los espectadores (el momento donde más se abandona)
3. La progresión de conceptos: orden óptimo para introducir cada concepto nuevo, con el principio de "lo más confuso primero" vs. "lo más motivador primero" según el tema
4. Los puntos de verificación durante el tutorial: mini-momentos donde el espectador comprueba que va bien (reducen el abandono al sentir progreso)
5. El manejo de los errores típicos: cómo anticipar los problemas que el 40% de los espectadores tendrá y resolverlos en el propio video sin romper el flujo
```

---

## 3. Guión técnico que combina código y explicación

```
El tutorial es sobre [tema]. Los pasos principales son: [lista de pasos técnicos].

Escribe el guión completo que incluya:
1. Las explicaciones verbales de cada bloque de código (qué hace, por qué se hace así y cuándo usarías una alternativa)
2. Las transiciones entre secciones que mantienen el hilo narrativo (no solo "ahora vamos a ver...")
3. Los comentarios en el código que se escriben en pantalla y se explican verbalmente (sincronización de código y voz)
4. Los momentos donde pausar la grabación para mostrar un error deliberado y resolverlo en vivo (aumentan la retención porque muestran resolución de problemas real)
5. El resumen final de los conceptos clave en un formato que el espectador pueda guardar como referencia
```

---

## 4. Comunidad técnica en YouTube: de los espectadores a los colaboradores

```
Tengo un canal técnico con [número] suscriptores. Los videos con más engagement son sobre [temas]. Los comentarios más frecuentes dicen [descripción].

Diseña la estrategia de construcción de comunidad técnica que incluya:
1. Los formatos de video que generan más comentarios técnicos (preguntas, debates, contribuciones de la audiencia)
2. Cómo usar los comentarios como fuente de ideas para nuevos videos (el loop de feedback con la audiencia)
3. La estrategia de recursos complementarios: repositorio de GitHub, Discord, newsletter técnica — qué tiene más impacto para una audiencia de desarrolladores
4. Los colabs con otros creadores técnicos: cómo identificar los proyectos conjuntos que benefician a ambas audiencias
5. Cómo monetizar un canal técnico sin perder credibilidad: patrocinios, cursos, consultoría, membresías — lo que mejor funciona para audiencias de desarrolladores
```

---

## 5. Optimización del flujo de producción técnica: publicar consistentemente sin burnout

```
Mi proceso actual de producción de un tutorial técnico tarda [X horas]. Los pasos son: [descripción de tu proceso actual].

Optimiza el flujo de producción para que pueda publicar [frecuencia objetivo] sin que la calidad baje ni el burnout me paralice:
1. Las tareas donde la IA puede reducir el tiempo de producción más significativamente
2. El sistema de reutilización de contenido: cómo un tutorial largo se convierte en clips cortos, posts, hilos de Twitter y documentación escrita
3. El setup técnico mínimo que produce la mejor calidad de video y audio para contenido de programación (sin invertir en equipamiento profesional caro)
4. El sistema de batching: cómo grabar 4 videos en un día de producción sin que se note la repetición
5. Los indicadores que me dirán cuándo escalar (contratar editor, crear curso premium, lanzar membresía)
```

---

## Resultado esperado

Un canal técnico bien construido con IA es una de las herramientas de marca personal más poderosas para un desarrollador. Genera oportunidades de trabajo, consultoría y proyectos de forma pasiva. Los canales técnicos con entre 5.000 y 50.000 suscriptores en nichos específicos generan más oportunidades relevantes que muchos canales generalistas con millones de seguidores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrolladores que crean o quieren crear contenido técnico en video y buscan un sistema para producir tutoriales de calidad de forma sostenida',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Producción de contenido visual para video y YouTube con IA: miniaturas, motion y storyboards',
                'description'       => 'Guía para diseñadores y directores creativos que producen contenido visual para YouTube: cómo diseñar miniaturas de alto CTR, crear storyboards eficientes con IA y coordinar la identidad visual de un canal.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Arte especializado en producción visual para plataformas de video digital, con experiencia diseñando sistemas visuales para canales de YouTube con millones de suscriptores. Sabes que en YouTube la miniatura es el anuncio del video — es lo primero que ve el espectador y determina si hace clic o no. También entiendes que la identidad visual de un canal no es solo estética: es una señal de consistencia y profesionalidad que genera confianza en la audiencia.

Hoy vas a ayudarme a construir el sistema de producción visual para un canal de YouTube usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de canal: [educativo / entretenimiento / corporativo / de creador personal / marca]
- Temática principal: [descripción]
- Estilo visual actual o deseado: [minimalista / energético / profesional / amigable / premium]
- Recursos de producción disponibles: [Figma / Photoshop / After Effects / Canva / equipo de diseño]

---

## 1. Sistema de identidad visual del canal: consistencia que genera reconocimiento

La identidad visual de un canal de YouTube es lo que hace que un espectador reconozca tu contenido en el feed antes de leer el título.

```
Estoy creando o renovando la identidad visual de un canal de YouTube sobre [temática]. La audiencia objetivo es [descripción]. El tono que quiero transmitir es [descripción: serio/juguetón/premium/accesible/etc.].

Diseña el sistema de identidad visual del canal que incluya:
1. La paleta de colores principal (2-3 colores primarios + 1-2 de acento) con la justificación psicológica de cada elección para este nicho y audiencia
2. La tipografía: fuente principal para títulos de miniatura y fuente secundaria para textos de apoyo (con alternativas gratuitas en Google Fonts)
3. El estilo fotográfico o de ilustración para el canal: ¿fotos de personas / ilustraciones / capturas de pantalla / gráficos abstractos?
4. Los elementos gráficos recurrentes que funcionan como firma visual (formas, marcos, texturas, iconografía específica)
5. Las reglas de uso: qué elementos son invariables (para mantener consistencia) y cuáles pueden variar video a video (para mantener frescura)
```

---

## 2. Diseño de miniaturas de alto CTR: la ciencia y el arte del primer impacto

```
Voy a diseñar la miniatura para un video sobre [tema]. El título del video es [título]. La audiencia principal es [descripción].

Genera las especificaciones de diseño para 3 variantes de miniatura:
1. Variante A (cara + texto): descripción del encuadre de la persona (expresión facial, gestura, dirección de la mirada), posición en el frame, el texto que debe aparecer (máximo 4 palabras, fuente, tamaño relativo, color y contraste con el fondo)
2. Variante B (resultado visual + texto): descripción del elemento visual principal que muestra el "resultado" del video (antes/después, el objeto de interés, el gráfico clave), composición y jerarquía visual
3. Variante C (concepto gráfico): diseño más abstracto o conceptual que funciona como metáfora visual del contenido, con descripción de elementos y su significado
4. Para las 3 variantes: la hipótesis de por qué cada una podría funcionar mejor según el comportamiento de la audiencia de este nicho
5. El sistema de A/B testing: cómo probar las variantes y qué métricas usar para determinar la ganadora (CTR mínimo aceptable, tiempo de prueba, tamaño de muestra)
```

---

## 3. Storyboards eficientes con IA: planificar el video antes de grabar

```
Voy a grabar un video sobre [tema]. La estructura del video es: [lista de secciones o puntos principales]. Duración objetivo: [X minutos].

Crea el storyboard descriptivo que incluya:
1. La descripción de cada plano por sección (tipo de encuadre: plano medio / primer plano / pantalla de grabación / animación, acción en pantalla, texto o gráfico superpuesto si aplica)
2. Las transiciones entre secciones: qué tipo de corte o transición refuerza el ritmo del video (corte directo / fade / zoom / text reveal)
3. Los momentos de b-roll: qué imágenes o videos de apoyo necesito para no tener 10 minutos de cara a cámara (y dónde conseguirlos si no los tengo)
4. Los gráficos y visualizaciones: qué datos, procesos o conceptos se benefician de una representación visual y cómo describirlos para delegarlos o crearlos con herramientas de IA
5. El timing estimado de cada sección para verificar que el ritmo del video no tiene zonas lentas
```

---

## 4. Motion graphics y animaciones con IA: elevar la producción sin presupuesto de estudio

```
Necesito animaciones y motion graphics para mi canal de [temática]. Mi nivel técnico con After Effects o herramientas de animación es [principiante / intermedio / avanzado]. Mi presupuesto para herramientas es [descripción].

Diseña el sistema de motion graphics que incluya:
1. Las animaciones que más impacto tienen en la percepción de calidad de producción y son relativamente fáciles de ejecutar (lower thirds, transiciones de texto, zoom dinámico)
2. Las herramientas de IA que puedo usar para generar animaciones sin conocimientos avanzados de After Effects (Runway, Kling, Pika, etc.) y los casos de uso específicos para contenido de video
3. Las plantillas de motion graphics que debo tener siempre preparadas (intro, outro, lower third con nombre, transición entre secciones)
4. El flujo de producción: cuándo crear las animaciones (antes o después de grabar), cómo organizarlas en el proyecto de edición
5. Las limitaciones actuales de las herramientas de IA para motion: qué todavía hace mejor un animador humano y dónde no vale la pena usar IA
```

---

## 5. Sistema de producción visual escalable: mantener la calidad cuando crece el volumen

```
Mi canal publica [frecuencia] videos por semana. La producción visual actual me lleva [X horas por video]. Quiero reducir ese tiempo sin perder calidad.

Diseña el sistema de producción visual escalable que incluya:
1. El kit de plantillas que debo crear una vez y reutilizar (miniaturas, pantallas de intro, gráficos de datos, endscreen)
2. El flujo de trabajo con IA generativa para acelerar la creación de assets visuales (Midjourney / DALL-E / Stable Diffusion para ilustraciones, Leonardo para estilos consistentes)
3. Los criterios de calidad mínima que el diseño debe cumplir antes de publicar (checklist de revisión visual)
4. Cuándo tiene sentido externalizar la producción visual y cómo hacer el briefing a un diseñador externo para que mantenga la identidad del canal
5. El sistema de archivo y organización de assets visuales para no perder tiempo buscando elementos ya creados
```

---

## Resultado esperado

La calidad visual de un canal de YouTube es la primera señal de profesionalismo que recibe el espectador potencial. Un sistema de producción visual bien construido con IA permite mantener una calidad consistente y reconocible sin depender de horas interminables de diseño manual para cada video. La inversión en el sistema visual del canal multiplica su efecto en cada video publicado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñadores y directores creativos que producen contenido visual para YouTube y quieren un sistema de identidad, miniaturas y storyboards eficiente',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Video marketing y contenido de ventas en YouTube con IA: del canal al pipeline',
                'description'       => 'Framework para equipos de ventas que quieren usar YouTube como canal de generación de demanda: cómo crear contenido que educa a los prospectos, acorta el ciclo de venta y posiciona al equipo como referente del sector.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Ventas con experiencia en social selling y video marketing B2B. Has ayudado a equipos comerciales a construir presencia en YouTube y LinkedIn Video que genera leads cualificados de forma orgánica, acorta los ciclos de venta porque el prospecto llega ya educado, y posiciona a los vendedores como asesores de confianza en lugar de simples representantes comerciales.

Hoy vas a ayudarme a usar el video y YouTube como herramienta de generación de pipeline usando IA para acelerar la producción y la estrategia.

**Contexto de mi situación:**
- Producto o servicio que vendo: [descripción]
- Tipo de cliente objetivo: [perfil del ICP: sector, tamaño de empresa, cargo del decisor]
- Ciclo de venta típico: [duración y número de interacciones hasta el cierre]
- Presencia actual en video: [ninguna / LinkedIn Video esporádico / canal de YouTube existente con X videos]

---

## 1. Estrategia de contenido de video para ventas: educar para vender sin que parezca venta

```
Vendo [producto/servicio] a [perfil de cliente]. El principal problema que resuelvo es [descripción]. Las objeciones más frecuentes en el proceso de venta son: [lista de 3-5 objeciones].

Diseña la estrategia de contenido de video que:
1. Mapee los temas de video con cada etapa del funnel de ventas (awareness → consideración → decisión): qué tipo de contenido necesita el prospecto en cada fase para avanzar
2. Identifique los 10 videos que directamente responden a las objeciones más frecuentes antes de que las planteen en la llamada de ventas
3. Defina el posicionamiento del creador del contenido: ¿vendedor personal / experto de la empresa / equipo de varios voices?
4. Establezca la frecuencia y los canales: YouTube como repositorio evergreen + LinkedIn para distribución + email para nurture
5. Mida el impacto en el pipeline: cómo atribuir los leads generados por el contenido de video al CRM
```

---

## 2. Guiones de video de ventas: contenido que genera confianza y llamadas a la acción naturales

```
Voy a grabar un video sobre [tema directamente relacionado con mi producto/servicio]. El objetivo del video es que el espectador quiera tener una conversación con nosotros al terminar de verlo.

Escribe el guión del video de ventas que:
1. Empiece con el problema del espectador, no con la solución que vendemos (los primeros 60 segundos son sobre ellos, no sobre nosotros)
2. Desarrolle el contenido educativo real con el mismo rigor que tendría un video sin intención comercial (si no aportas valor independientemente del producto, el prospecto lo nota)
3. Integre referencias naturales al producto o servicio en el contexto del contenido (no como interrupción publicitaria sino como ejemplo o caso de uso)
4. Incluya un CTA al final que sea una invitación de valor y no una llamada a comprar (demo gratuita / auditoría / calculadora / recurso descargable)
5. Mantenga el tono de asesor de confianza en lugar de representante comercial en cada sección
```

---

## 3. Secuencias de nurture con video: usar el contenido en el proceso de ventas activo

```
Tengo una lista de prospectos en diferentes etapas del pipeline. Quiero usar los videos existentes (o crear videos específicos) para acelerar el ciclo de venta.

Diseña el sistema de video nurture que incluya:
1. Qué video enviar a cada tipo de prospecto según su etapa y su principal objeción o duda
2. El mensaje de acompañamiento del video en el email o LinkedIn (que no suene a "mira este video que hice" sino a "esto es específicamente relevante para lo que me contaste")
3. Los videos de "seguimiento sin presión": contenido que mantiene la relación y el top-of-mind sin pedir una reunión en cada interacción
4. El video personalizado de propuesta: cómo grabar un video de 2-3 minutos específico para una oportunidad concreta que reemplaza o complementa el PDF de propuesta
5. Las métricas para saber si el prospecto vio el video y cómo usar esa información en el seguimiento
```

---

## 4. Testimonios y casos de éxito en video: la prueba social más convincente

```
Tengo [número] clientes satisfechos que podrían participar en un testimonio en video. El tipo de cliente es [descripción]. Los casos de éxito más representativos son: [descripción de 2-3 casos].

Diseña el sistema de producción de testimonios en video que incluya:
1. El proceso de pedirle a un cliente un testimonio en video sin que se sienta incómodo o comprometido (el framing correcto de la solicitud)
2. Las 5-7 preguntas que generan los testimonios más convincentes (que van mucho más allá de "¿qué te pareció el producto?")
3. El formato del video de testimonio: ¿entrevista con el vendedor / monólogo del cliente / caso de estudio narrado? ¿Grabado remotamente o presencial?
4. El guión de presentación del caso de éxito que contextualiza el testimonio para la audiencia correcta (no todos los testimonios sirven para todos los prospectos)
5. Cómo usar los clips de los testimonios en diferentes formatos: video completo en YouTube, clips cortos en LinkedIn, citas en el deck de ventas
```

---

## 5. Medición del ROI del video marketing en ventas: conectar el contenido con el revenue

```
Hemos publicado [número] videos en los últimos [X meses]. Quiero medir el impacto real en el pipeline y el revenue.

Diseña el sistema de medición que incluya:
1. Las métricas de video que tienen correlación real con el pipeline generado (no solo views y likes — engagement con CTAs, tiempo de retención, clics en links de la descripción)
2. Cómo trackear en el CRM la influencia del contenido de video en las oportunidades (UTMs, campos de origen, preguntas en el formulario de contacto)
3. El análisis de la cohorte de leads que consumieron contenido de video vs. los que no: ¿hay diferencia en tasa de cierre, velocidad del ciclo o ticket medio?
4. El informe mensual de video marketing para ventas: qué datos presentar al equipo directivo para justificar la inversión de tiempo en producción de contenido
5. Los criterios para escalar: cuándo tiene sentido contratar un editor de video, pagar distribución o crear un canal más elaborado
```

---

## Resultado esperado

Un equipo de ventas con una estrategia de video marketing bien ejecutada genera dos ventajas competitivas difíciles de replicar: los prospectos llegan a la primera llamada ya educados (lo que reduce el tiempo de venta) y el equipo comercial tiene credibilidad y autoridad antes de abrir la boca. El video convierte al vendedor en consultor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Equipos de ventas B2B que quieren usar YouTube y video como canal de generación de leads cualificados y aceleración del ciclo de venta',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Video de producto y tutoriales de onboarding con IA: reducir el churn desde el primer día',
                'description'       => 'Framework para product managers que quieren usar video e IA para mejorar el onboarding de usuarios, reducir la carga de soporte y aumentar la activación de features nuevas mediante contenido en video estratégicamente diseñado.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con experiencia en productos SaaS que han usado el video como herramienta estratégica de onboarding y reducción de churn. Has visto cómo un buen video de onboarding puede reducir el time-to-value del usuario, disminuir el volumen de tickets de soporte y aumentar la adopción de features que de otra forma nunca descubren los usuarios nuevos.

Hoy vas a ayudarme a construir la estrategia de video de producto usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de producto: [SaaS B2B / B2C / marketplace / herramienta de productividad / etc.]
- Principal problema en el onboarding actual: [abandono temprano / bajo uso de features clave / alta carga de soporte / tiempo largo hasta el primer valor]
- Recursos de producción disponibles: [equipo interno / freelancers / herramientas de IA de video]
- Métricas de onboarding actuales: [tasa de activación / tiempo hasta primer valor / churn en los primeros 30 días]

---

## 1. Mapeo del viaje del usuario para definir qué videos crear primero

```
Mi producto es [descripción]. Los usuarios nuevos llegan con el objetivo de [job-to-be-done principal]. Los puntos donde más usuarios se pierden en los primeros 7 días son: [lista de momentos de fricción o abandono].

Ayúdame a mapear la estrategia de video de onboarding:
1. Los 5 momentos críticos del viaje del usuario donde un video corto reduce la fricción más significativamente
2. El tipo de video para cada momento: ¿explicación de concepto / tutorial paso a paso / inspiración de caso de uso / respuesta a FAQ?
3. La duración óptima para cada tipo de video (los usuarios en onboarding tienen tolerancia baja a videos largos — ¿cuál es el límite?)
4. El orden de priorización: qué video crear primero con mayor impacto esperado en la activación
5. Los criterios de éxito para cada video: cómo saber si el video está funcionando (completion rate, reducción de tickets de soporte en ese tema, aumento de la métrica de activación correspondiente)
```

---

## 2. Guiones de video de producto: explicar lo complejo de forma simple y rápida

```
Necesito crear un video tutorial sobre [feature o proceso específico del producto]. El usuario objetivo acaba de completar el registro y está viendo el producto por primera vez. El objetivo del video es que en menos de [X minutos] el usuario entienda cómo usar [feature] y consiga [resultado específico].

Escribe el guión del video de producto que:
1. Empiece mostrando el resultado final antes de explicar los pasos (el usuario necesita saber adónde va antes de empezar a caminar)
2. Use el lenguaje del usuario, no el lenguaje interno del equipo de producto (evita los tecnicismos que solo usa el equipo)
3. Estructure los pasos en formato de tarea concreta: "haz clic aquí → escribe esto → verás esto → significa esto"
4. Anticipe los errores más comunes y los mencione proactivamente ("si ves un error en este punto, significa que...")
5. Termine con un CTA claro que lleve al siguiente paso natural en el flujo de onboarding
```

---

## 3. Series de videos de adopción de features: convertir usuarios básicos en usuarios avanzados

```
Mi producto tiene [número] features que muchos usuarios nunca llegan a descubrir. Las features con mayor impacto en la retención según los datos son: [lista de features y su correlación con retención]. Las features con menor adopción actual son: [lista].

Diseña la estrategia de video para aumentar la adopción de features:
1. Los videos de "feature spotlight" que muestran el valor de una feature en menos de 90 segundos (formato, estructura, cuándo mostrarlos en el producto)
2. La estrategia de distribución in-product: dónde ubicar los videos dentro del producto para que el usuario los vea en el momento correcto (tooltips de video, modales de activación, sección de ayuda)
3. Las series de videos progresivos: cómo llevar al usuario de "usuario básico" a "usuario avanzado" con una secuencia lógica de videos
4. El sistema de notificaciones para el video: cómo avisar al usuario de que existe un video relevante sin interrumpir su flujo de trabajo
5. La medición de la adopción: cómo correlacionar el consumo de video con el uso de la feature correspondiente
```

---

## 4. Video para reducir la carga de soporte: convertir los tickets en contenido

```
Los 10 problemas más frecuentes que llegan al equipo de soporte son: [lista con los temas más comunes]. El tiempo promedio que tarda el equipo en responder cada uno es [X horas]. El volumen mensual de estos tickets es [número].

Diseña la estrategia de deflexión de soporte con video que incluya:
1. Los videos de respuesta a los 10 problemas más frecuentes (formato, duración y nivel de profundidad para cada uno)
2. El sistema de acceso a estos videos: ¿centro de ayuda con videos / respuesta automática con link al video / chatbot que recomienda el video correcto?
3. Cómo crear estos videos de forma eficiente usando herramientas de IA de grabación de pantalla y generación de voz (Loom / Synthesia / HeyGen / Camtasia con IA)
4. El proceso de actualización: cuándo y cómo actualizar los videos cuando el producto cambia (y cómo detectar que un video está desactualizado)
5. La medición del impacto: cómo calcular el ahorro de tiempo de soporte generado por los videos y presentarlo al equipo
```

---

## 5. Producción de video de producto con IA: escalar el contenido sin escalar el equipo

```
El equipo de producto necesita producir [número] videos por mes entre tutoriales de onboarding, release notes en video y demos de features. El equipo disponible para producción de video es [descripción].

Diseña el sistema de producción de video con IA que incluya:
1. Las herramientas de IA para grabar, editar y publicar videos de producto sin un equipo de producción dedicado (Loom / Synthesia / Descript / HeyGen — qué usar para qué)
2. El flujo de producción exprés: del guión al video publicado en menos de [X horas] por video
3. Las plantillas de video que estandarizan el aspecto visual y el formato sin necesidad de diseño en cada video
4. El sistema de localización con IA: cómo crear versiones en otros idiomas de los videos de producto usando dubbing o subtítulos automáticos con IA
5. El proceso de control de calidad: qué revisar antes de publicar un video de producto para asegurar que cumple los estándares de la marca
```

---

## Resultado esperado

Los productos que invierten en video de onboarding y adopción de features generan usuarios más comprometidos, con mayor tiempo de vida y menor carga para el equipo de soporte. Un video bien hecho trabaja las 24 horas del día respondiendo las mismas preguntas que de otra forma requieren tiempo humano. La inversión en contenido de video de producto es una de las pocas inversiones en product que tiene retorno medible, escalable y compuesto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Product managers que quieren usar video para mejorar el onboarding, aumentar la adopción de features y reducir la carga del equipo de soporte',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Comunicación interna en video con IA: mensajes de liderazgo y formación que la gente realmente ve',
                'description'       => 'Framework para equipos de RRHH y People que quieren usar video para comunicación interna, formación y cultura empresarial: cómo producir contenido en video que los empleados consumen voluntariamente.',
                'prompt_content'    => <<<'EOT'
Eres un Director de People & Culture con experiencia en empresas de rápido crecimiento que han usado el video como herramienta estratégica de comunicación interna, formación y construcción de cultura. Has visto cómo un video del CEO bien producido puede conectar mejor con los empleados que diez all-hands meetings, y cómo una serie de videos de formación bien diseñada puede reemplazar jornadas enteras de formación presencial con mejores resultados de retención del conocimiento.

Hoy vas a ayudarme a construir la estrategia de comunicación interna en video usando IA de forma sistemática.

**Contexto de mi situación:**
- Tamaño de la organización: [número de empleados / número de oficinas o equipos remotos]
- Principal reto de comunicación interna: [desconexión entre equipos / baja retención de mensajes / cultura fragmentada / formación ineficiente]
- Canales de comunicación interna actuales: [Slack / Teams / email / intranet]
- Recursos para producción de video: [descripción]

---

## 1. Estrategia de video para comunicación de liderazgo: mensajes que conectan en lugar de informar

```
El equipo directivo necesita comunicarse de forma más efectiva con los empleados. Los mensajes actuales se transmiten principalmente por [email / all-hands slides / Slack], y la percepción de los empleados es que [descripción del problema: no los leen, no generan conexión, parecen corporativos y distantes].

Diseña la estrategia de video de liderazgo que incluya:
1. Los formatos de video más efectivos para comunicaciones de liderazgo: ¿grabación informal desde el despacho / formato entrevista / recorrido por las instalaciones / video con datos visualizados?
2. La cadencia óptima: cuántos videos al mes genera cada nivel de liderazgo sin que pierda impacto por exceso de frecuencia
3. El guión del video mensual del CEO/fundador: cómo estructurarlo para que sea honesto, conecte emocionalmente con la realidad de los empleados y no parezca una presentación de resultados
4. El proceso de producción para líderes no habituados a estar en cámara: cómo preparar al directivo, qué equipo usar, cómo minimizar el tiempo de grabación
5. El sistema de distribución y feedback: cómo compartir el video, cómo medir que lo vieron y cómo recoger reacciones que informen el próximo video
```

---

## 2. Formación en video: reemplazar las sesiones de formación presencial con contenido que se recuerda

```
Necesito crear formación en video sobre [tema de formación: onboarding / compliance / habilidades técnicas / cultura / liderazgo]. La formación actual se imparte [presencialmente / en live virtual / por documentos escritos]. El principal problema de la formación actual es: [baja asistencia / baja retención / alto coste de tiempo / no escalable a nuevas incorporaciones].

Diseña el sistema de formación en video que incluya:
1. La estructura pedagógica del módulo de video: cómo dividir el contenido en piezas de máximo 5-8 minutos que mantienen la atención y facilitan la retención
2. Los formatos de video para cada tipo de contenido: conceptual (explicación en cámara) / procedimental (tutorial paso a paso) / actitudinal (casos reales, dilemas, ejemplos de cultura)
3. El sistema de evaluación integrado: cómo añadir preguntas de comprobación entre videos que no se sientan como un examen sino como una reflexión
4. La estrategia de actualización: cómo estructurar el contenido de formación para que las actualizaciones sean quirúrgicas (cambias un video, no regrabar toda la serie)
5. La plataforma de distribución: LMS propio / YouTube privado / Loom / plataforma de intranet — cuál tiene más sentido según el tamaño del equipo y el presupuesto
```

---

## 3. Video para construcción de cultura: hacer visible lo que normalmente es invisible

```
Quiero usar el video para construir y comunicar la cultura de la empresa. Los valores que queremos reflejar son [lista de valores]. Los comportamientos que queremos que los empleados reconozcan y repliquen son [descripción]. Los retos de cultura actuales son: [fragmentación por equipos / trabajo remoto / crecimiento rápido con muchas incorporaciones].

Diseña la estrategia de video de cultura que incluya:
1. Los formatos de video que hacen la cultura visible: "un día en la vida de" / historias de empleados / momentos de trabajo en equipo / celebraciones de logros
2. La serie de videos de onboarding cultural para nuevas incorporaciones: qué necesita ver alguien en sus primeros 30 días para entender cómo funciona realmente la empresa (más allá del manual de empleados)
3. El sistema de testimonios internos: cómo recoger historias de empleados que ilustran los valores en acción sin que parezca propaganda corporativa
4. Los videos de "estado de la empresa" que actualizan al equipo con honestidad: cómo compartir los avances, los retos y las decisiones difíciles de forma que genere confianza en lugar de ansiedad
5. La estrategia de employer branding externo con el contenido interno: qué contenido de cultura (con permiso) puede compartirse públicamente para atraer talento
```

---

## 4. Producción de video interno con IA: calidad profesional sin presupuesto de producción

```
El equipo de People necesita producir [número] videos internos al mes con un equipo de [tamaño] personas y un presupuesto de [descripción].

Diseña el sistema de producción eficiente que incluya:
1. El setup técnico mínimo para videos internos de calidad aceptable (cámara del ordenador vs. webcam dedicada, iluminación con luz natural, micrófono de solapa básico)
2. Las herramientas de IA para edición rápida: Descript para editar con texto, CapCut para edición rápida, Synthesia o HeyGen para avatares de IA cuando la persona no quiere o puede grabar
3. Las plantillas de video por tipo: intro corporativa, lower thirds con nombre y cargo, outro estándar — que se aplican en minutos sin diseño desde cero
4. El flujo de aprobación de videos internos: quién revisa qué y en cuánto tiempo para no ralentizar la producción
5. El repositorio de contenido en video: cómo organizar el archivo de videos internos para que sean buscables y reutilizables
```

---

## 5. Medición del impacto del video en la comunicación interna: más allá de los views

```
Hemos publicado [número] videos internos en los últimos [X meses]. Quiero medir su impacto real en la comunicación interna y la cultura.

Diseña el sistema de medición que incluya:
1. Las métricas cuantitativas accesibles: tasa de visualización, tiempo medio de visionado, clicks en CTAs del video
2. Las métricas cualitativas: cómo recoger feedback sobre el contenido de video en las encuestas de clima laboral y las sesiones de 1:1
3. Los indicadores indirectos: ¿ha bajado el volumen de preguntas repetitivas en Slack? ¿Ha mejorado la coherencia en la aplicación de los procesos formados con video?
4. El informe trimestral de comunicación en video: cómo presentarlo al equipo directivo para justificar el tiempo invertido
5. Los criterios para escalar: cuándo contratar un coordinador de contenido interno, cuándo invertir en equipamiento de producción de mayor calidad
```

---

## Resultado esperado

Las organizaciones que usan el video de forma estratégica para la comunicación interna generan equipos más alineados con la cultura, mayor velocidad en la adopción de cambios y una percepción más positiva del liderazgo. El video es el formato de comunicación con mayor densidad de información por minuto de atención del receptor — úsalo para los mensajes que importan, no para los que pueden ir en un email.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Equipos de People y RRHH que quieren usar video para comunicación interna, formación y construcción de cultura empresarial de forma escalable',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Contenido financiero en video con IA: educar inversores y comunicar resultados con claridad',
                'description'       => 'Framework para profesionales de finanzas que crean contenido en video para inversores, clientes o audiencias de educación financiera: cómo traducir datos complejos en narrativas visuales que generen confianza y comprensión.',
                'prompt_content'    => <<<'EOT'
Eres un CFO y comunicador financiero con experiencia creando contenido en video para inversores institucionales, accionistas retail y audiencias de educación financiera. Has producido videos de resultados trimestrales, webinars de análisis de mercado y series de educación financiera que simplifican conceptos complejos sin perder rigor. Sabes que el mayor reto en la comunicación financiera en video no es la complejidad del contenido — es traducir los números en narrativas que la gente entiende y en las que confía.

Hoy vas a ayudarme a crear contenido financiero en video usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de contenido financiero: [resultados trimestrales / análisis de inversión / educación financiera / comunicación a accionistas / newsletter en video]
- Audiencia objetivo: [inversores institucionales / accionistas retail / clientes de banca privada / audiencia general]
- Objetivo del contenido: [generar confianza / educar / atraer inversores / posicionar al equipo como expertos]
- Restricciones regulatorias relevantes: [descripción si las hay]

---

## 1. Narrativa financiera en video: de los datos al relato que conecta

```
Tengo los siguientes datos financieros que necesito comunicar en video: [descripción de los datos: resultados, métricas, proyecciones].

Ayúdame a construir la narrativa financiera que:
1. Identifique el mensaje central que quiero que la audiencia recuerde (el titular financiero del video — máximo una frase)
2. Estructure los datos en una historia con arco narrativo: situación de partida → desarrollo → conclusión con implicaciones
3. Decida qué datos incluir y qué datos omitir (más datos no es mejor comunicación — ¿cuáles son esenciales para el mensaje central?)
4. Anticipe las 3 preguntas más probables de la audiencia y las responda proactivamente en el video
5. Establezca el tono correcto para la situación: ¿cómo comunicar resultados por debajo de las expectativas con honestidad sin generar pánico? ¿Cómo comunicar resultados positivos sin sonar exagerado?
```

---

## 2. Guiones de comunicación de resultados: el video trimestral que los inversores esperan

```
Necesito crear el video de comunicación de resultados del [Q / trimestre / año]. Los resultados clave son: [descripción con los números principales]. El contexto de mercado durante el período fue: [descripción]. Las preguntas más frecuentes que esperamos son: [lista].

Escribe el guión del video de resultados que:
1. Empiece con el mensaje más importante en los primeros 30 segundos (no con la introducción corporativa)
2. Presente cada métrica clave con su contexto: no solo el número, sino qué significa, cómo compara con el período anterior y cómo compara con el sector
3. Use visualizaciones describibles: qué gráfico mostrar para cada dato (línea temporal, comparativa de barras, desglose de componentes) con las instrucciones para el equipo de diseño
4. Incluya una sección de perspectivas: qué espera el equipo directivo para el próximo período y por qué
5. Cierre con un resumen de los 3 puntos más importantes que la audiencia debe recordar
```

---

## 3. Serie de educación financiera en video: construir audiencia con contenido de valor

```
Quiero crear una serie de videos de educación financiera sobre [temática: inversión / gestión de riesgos / planificación fiscal / mercados / etc.]. La audiencia objetivo es [descripción de su nivel financiero y sus dudas principales].

Diseña la serie de educación financiera que incluya:
1. Los 12 temas de mayor demanda en mi área de especialidad que tienen audiencia activa en YouTube y otros canales de video
2. La secuencia de aprendizaje: cómo ordenar los videos para que cada uno construya sobre el anterior sin dejar lagunas
3. El equilibrio entre rigor y accesibilidad: cómo simplificar sin simplificar en exceso (la trampa del "lo explico tan simple que ya no es verdad")
4. Los elementos visuales que mejor funcionan en contenido financiero: gráficos animados, ejemplos numéricos con casos reales, simulaciones de escenarios
5. Las llamadas a la acción apropiadas para contenido financiero sujeto a regulación: cómo invitar a la audiencia a profundizar sin hacer recomendaciones de inversión
```

---

## 4. Videos para clientes de banca privada y gestión patrimonial: personalización a escala

```
Gestiono [número] clientes de alto patrimonio. La comunicación actual con ellos es [email / reuniones presenciales / informes PDF trimestrales]. Quiero añadir video a la comunicación con estos clientes.

Diseña la estrategia de video para clientes premium que incluya:
1. El video de revisión de cartera trimestral personalizado: cómo grabarlo en 10-15 minutos de forma que se sienta personalizado aunque use una estructura estándar
2. Los videos de contexto de mercado: actualizaciones cortas de 3-5 minutos ante eventos de mercado relevantes (subidas de tipos, caídas de índices, cambios regulatorios) que el cliente recibe antes de llamar con preguntas
3. La estrategia de personalización escalable: cómo crear una parte de cada video específica para cada cliente (con su nombre, su situación) y otra parte común reutilizable
4. El canal de distribución: ¿email directo con link privado / plataforma de cliente / WhatsApp? Lo que genera mayor probabilidad de visionado para este perfil de cliente
5. Las restricciones de compliance que hay que respetar en la comunicación de inversiones en video y cómo integrarlas sin destruir la naturalidad del contenido
```

---

## 5. Optimización de la producción de video financiero: calidad y velocidad

```
El equipo financiero necesita producir [número] videos al mes. El tiempo actual de producción de un video es [X horas]. Los videos son principalmente [comunicados de resultados / actualizaciones de mercado / educación financiera].

Diseña el sistema de producción eficiente que incluya:
1. Las plantillas de video reutilizables para cada tipo de comunicación financiera (con la estructura fija que solo requiere actualizar el contenido)
2. Las herramientas de IA para generar visualizaciones financieras rápidamente: de los datos en Excel al gráfico animado en el video
3. El flujo de aprobación de contenido financiero: cómo incluir el proceso de revisión de compliance sin triplicar el tiempo de producción
4. La estrategia de reutilización: cómo un video de 10 minutos genera clips cortos para LinkedIn, citas para el newsletter y gráficos para los informes escritos
5. Los indicadores de calidad mínima: qué debe cumplir un video financiero antes de publicarse (claridad del mensaje, ausencia de errores numéricos, aprobación de compliance)
```

---

## Resultado esperado

Los profesionales financieros que comunican a través del video tienen una ventaja significativa en la construcción de confianza y autoridad. La voz, el lenguaje corporal y el ritmo del discurso transmiten credibilidad de una forma que el texto escrito no puede igualar. Un video bien producido de comunicación de resultados o de educación financiera es una inversión de tiempo que trabaja indefinidamente para posicionar al profesional y a la institución.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Profesionales de finanzas que crean contenido en video para inversores, clientes o audiencias de educación financiera y quieren comunicar con claridad y confianza',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contenido legal en video con IA: educar a clientes y construir autoridad jurídica online',
                'description'       => 'Framework para abogados y firmas legales que crean contenido en video para educar a clientes potenciales, construir autoridad en su área de práctica y generar consultas de calidad a través de YouTube y LinkedIn Video.',
                'prompt_content'    => <<<'EOT'
Eres un abogado con práctica activa en [área de especialidad] y experiencia creando contenido legal en video que genera confianza en la audiencia, atrae clientes cualificados y posiciona la firma como referente en su área. Sabes que el contenido legal en video tiene un reto único: debe ser suficientemente accesible para que el no jurista lo entienda, suficientemente riguroso para que no induzca a error, y suficientemente específico para que el espectador con el problema correcto quiera contactar con el despacho.

Hoy vas a ayudarme a crear la estrategia de contenido legal en video usando IA de forma sistemática.

**Contexto de mi situación:**
- Área de práctica: [laboral / mercantil / familia / penal / fiscal / inmobiliario / startups / propiedad intelectual]
- Tipo de cliente objetivo: [particulares / empresas / startups / pymes / grandes empresas]
- Objetivo del contenido: [atraer consultas / posicionar autoridad / educar a clientes existentes / employer branding del despacho]
- Restricciones deontológicas relevantes: [descripción si las hay en tu jurisdicción]

---

## 1. Estrategia de contenido legal: qué temas generan consultas, no solo views

```
Soy abogado especializado en [área de práctica]. Mis clientes objetivo son [descripción]. Las preguntas más frecuentes que recibo en consulta son: [lista de 5-10 preguntas].

Diseña la estrategia de contenido legal en video que:
1. Identifique los 20 temas de video con mayor volumen de búsqueda en YouTube en mi área de práctica (la gente busca respuestas legales en YouTube más de lo que los abogados creen)
2. Diferencie entre los temas que generan views de audiencia general y los que generan consultas de clientes cualificados (no son siempre los mismos)
3. Establezca el posicionamiento del canal: ¿abogado que explica la ley de forma accesible / firma que muestra su forma de trabajar / educador que enseña a las empresas a prevenir problemas legales?
4. Defina los límites del contenido: qué puedo responder en un video sin incurrir en responsabilidad profesional y cuándo debo derivar explícitamente a consulta
5. Planifique el calendario de los primeros 3 meses: qué publicar primero para generar la base de autoridad del canal antes de los temas más competitivos
```

---

## 2. Guiones de video legal: explicar la ley sin simplificar hasta el error

```
Voy a crear un video sobre [tema legal específico]. La audiencia son [descripción: particulares que han recibido una carta de despido / empresas que quieren proteger su propiedad intelectual / etc.]. El objetivo es que al terminar el video entiendan [concepto o situación] y sepan [cuándo necesitan contratar a un abogado / qué derechos tienen / qué pasos deben dar].

Escribe el guión del video legal que:
1. Empiece con la situación del espectador, no con la definición legal (comienza con "si te han llegado a la empresa una inspección de Hacienda..." no con "según el artículo 178 de la Ley General Tributaria...")
2. Use ejemplos concretos para cada concepto abstracto (los ejemplos son la diferencia entre el video que se entiende y el que no)
3. Incluya los matices necesarios sin paralizar al espectador con excepciones (menciona la existencia de excepciones sin detallarlas todas — "esto puede variar según...")
4. Sea claro sobre las limitaciones del video: qué situaciones requieren consulta individualizada y por qué
5. Cierre con los 3 puntos más importantes a recordar y un CTA natural a contactar con el despacho si se reconocen en la situación descrita
```

---

## 3. Video para onboarding de clientes: reducir el tiempo de las primeras reuniones

```
El proceso de onboarding de un nuevo cliente empieza siempre con explicar [lista de conceptos, procesos o expectativas que siempre tengo que explicar en la primera reunión]. Este proceso me toma [X minutos] de reunión con cada cliente nuevo.

Diseña la serie de videos de onboarding para clientes que incluya:
1. Los temas que puedo explicar en video antes de la primera reunión para que llegue ya con el conocimiento base (y la reunión sea más productiva)
2. El video de bienvenida al despacho: cómo es nuestro proceso de trabajo, qué esperar, qué necesitamos de ellos — en un formato de 3-5 minutos que genera confianza desde el primer día
3. Los videos explicativos de los procesos más frecuentes: qué pasa en un proceso de divorcio, qué esperar de una negociación laboral, cómo funciona la due diligence en una compraventa
4. Las preguntas frecuentes de clientes existentes respondidas en video: ¿puedo enviarlo a los clientes en lugar de responder cada vez individualmente?
5. El sistema de entrega: ¿cómo comparto estos videos con los clientes? ¿Área privada, email con link, WhatsApp?
```

---

## 4. LinkedIn Video para abogados: la plataforma con el mayor ROI en tiempo invertido

```
Quiero usar LinkedIn Video como canal de contenido legal. Mi red profesional en LinkedIn tiene [número] contactos. Mi área de práctica es [descripción]. Los clientes empresariales que quiero atraer usan LinkedIn.

Diseña la estrategia de LinkedIn Video que incluya:
1. Los formatos de video que mejor funcionan para abogados en LinkedIn: ¿reflexión de 60 segundos / análisis de jurisprudencia reciente / caso de estudio anonimizado / comentario de novedades legislativas?
2. La cadencia: cuántos videos a la semana es sostenible sin comprometer la práctica profesional
3. El contenido que diferencia al abogado de los demás en LinkedIn: qué perspectiva o conocimiento tengo que otros no tienen y que mi red de potenciales clientes encontraría valioso
4. La estrategia de distribución: cómo maximizar el alcance de cada video en LinkedIn (publicación directa vs. comentarios / reposts / conversaciones generadas)
5. Los límites deontológicos que debo tener en cuenta en LinkedIn Video y cómo mantener el profesionalismo sin perder la personalidad del creador
```

---

## 5. Medición del retorno del contenido legal en video: conectar el canal con las consultas

```
He publicado [número] videos en los últimos [X meses]. Quiero saber si están generando consultas de calidad.

Diseña el sistema de medición que incluya:
1. Las preguntas que debo añadir al formulario de contacto del despacho o a la primera llamada de consulta para detectar si el cliente llegó a través del contenido en video
2. Las métricas de video que tienen mayor correlación con la generación de consultas (tiempo de retención / clicks en el link de la descripción / ratio de comentarios con preguntas de potenciales clientes)
3. El análisis cualitativo: cómo evaluar la calidad de las consultas generadas por video vs. las generadas por otros canales (referidos, Google, directorio)
4. El tiempo necesario para empezar a ver retorno en un canal legal: cuántos videos, durante cuántos meses, antes de que el canal tenga masa crítica suficiente para generar consultas de forma consistente
5. Los criterios para decidir si el canal de video merece más inversión de tiempo o si hay otros canales más eficientes para mi tipo de práctica
```

---

## Resultado esperado

Un abogado con presencia consistente en video construye autoridad digital que trabaja de forma pasiva y genera consultas de potenciales clientes que ya confían en él antes de la primera llamada. El video legal bien hecho no solo atrae clientes — también educa a clientes que llegan con expectativas más realistas, lo que mejora la calidad de la relación desde el primer día.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Abogados y firmas legales que quieren usar video para construir autoridad en su área de práctica y atraer consultas de clientes cualificados',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Video tutorials y contenido de autoservicio con IA: reducir tickets sin reducir la satisfacción',
                'description'       => 'Framework para equipos de Customer Success y soporte que quieren usar video tutorials con IA para empoderar a los clientes a resolver sus problemas de forma autónoma, reduciendo el volumen de tickets sin sacrificar la satisfacción.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia en equipos que han transformado su modelo de soporte mediante el uso estratégico de video tutorials y contenido de autoservicio. Has visto cómo un buen sistema de video FAQ puede reducir el volumen de tickets en un 30-40% en los primeros 6 meses, mientras simultáneamente mejora la satisfacción del cliente porque este resuelve su problema más rápido de lo que podría hacerlo esperando la respuesta de un agente.

Hoy vas a ayudarme a construir el sistema de video tutorials y autoservicio usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de producto o servicio que soporte: [SaaS / plataforma / hardware / servicio profesional]
- Principal problema en el soporte actual: [alto volumen de tickets repetitivos / tiempos de respuesta largos / clientes que no encuentran la respuesta en el centro de ayuda]
- Recursos disponibles para producción de video: [descripción]
- Métricas actuales de soporte: [volumen mensual de tickets / CSAT / tiempo medio de resolución]

---

## 1. Identificación de los temas de video con mayor impacto en la deflexión de tickets

```
Los 20 problemas más frecuentes en los tickets de soporte del último trimestre son: [lista]. El tiempo medio de resolución de cada uno es [descripción]. El volumen mensual de cada tipo es [estimación].

Analiza esta información para:
1. Identificar los 10 temas que, si se resuelven con video de autoservicio, tendrían mayor impacto en la reducción del volumen total de tickets
2. Categorizar cada problema según su resolubilidad en video: algunos se explican perfectamente en 2 minutos, otros requieren contexto que solo un agente puede obtener — ¿cuál es cuál?
3. Priorizar la producción de videos según la combinación de volumen de tickets y facilidad de resolución en video (los de alto volumen y fácil explicación, primero)
4. Estimar el impacto potencial en reducción de tickets si cada video desvía el 30%, 50% o 70% de los tickets de ese tipo
5. Identificar los problemas que aparecen frecuentemente juntos y podrían resolverse en un único video tutorial de flujo completo
```

---

## 2. Producción de video tutorials que los clientes realmente completan

```
Voy a crear un video tutorial sobre [problema específico del cliente]. Los pasos para resolver el problema son: [lista de pasos]. El perfil del cliente con este problema es: [descripción de su nivel técnico y su contexto].

Escribe el guión del video tutorial de soporte que:
1. Empiece mostrando el síntoma exacto que el cliente está viendo (así el cliente con ese problema sabe inmediatamente que este video es para él)
2. Explique cada paso con el nivel de detalle correcto para el perfil del cliente (sin asumir conocimiento técnico que no tiene, sin explicar lo que ya sabe)
3. Use el lenguaje de la interfaz del producto tal y como aparece en pantalla (los nombres exactos de los botones, menús y mensajes — no paráfrasis que confunden)
4. Muestre qué aspecto debe tener el resultado correcto al final de cada paso (para que el cliente sepa si va bien)
5. Incluya una sección de "si esto no funciona" con las causas más frecuentes por las que el proceso falla y cómo resolverlas
```

---

## 3. Sistema de distribución de video tutorials: que el cliente encuentre el video correcto

```
Tengo [número] videos tutorials ya producidos o en producción. El cliente necesita encontrar el video correcto en el momento en que tiene el problema.

Diseña el sistema de distribución que incluya:
1. La integración in-product: cómo mostrar el video correcto en el contexto del producto donde el cliente tiene el problema (tooltips de video, modales de ayuda contextual, links en mensajes de error)
2. El centro de ayuda en video: cómo organizar los videos en el centro de ayuda para que sean buscables y navegables (categorías, tags, títulos optimizados para búsqueda interna)
3. El chatbot de soporte con video: cómo integrar los videos en el flujo del chatbot para que, antes de escalar a un agente, el bot ofrezca el video relevante
4. El email de soporte proactivo: cómo enviar el video correcto a los clientes en el momento en que más probablemente tendrán ese problema (basado en el comportamiento en el producto)
5. La búsqueda de videos por síntoma vs. por nombre de feature: cómo los clientes buscan la solución (por lo que ven, no por el nombre técnico de la feature) y cómo adaptar los títulos de los videos
```

---

## 4. Producción escalable de video tutorials con IA: velocidad sin perder calidad

```
El equipo de CS necesita producir [número] videos de soporte al mes. El equipo de producción es [descripción]. El tiempo actual de producción por video es [X horas].

Diseña el sistema de producción con IA que incluya:
1. Las herramientas de IA para grabación y edición de video de soporte: Loom para grabación rápida, Descript para edición con texto, IA de voz para versiones localizadas — cuándo usar cada una
2. El flujo de producción exprés: del ticket de soporte al video publicado en menos de [X horas] para los problemas más urgentes
3. El sistema de grabación de pantalla con narración simultánea: cómo hacerlo sin errores frecuentes que obligan a regrabar
4. Las plantillas de video que garantizan consistencia visual y de formato sin necesidad de diseño en cada video
5. El proceso de revisión técnica: quién valida que el proceso mostrado en el video es correcto antes de publicarlo (para no crear un video que enseña a hacer algo mal)
```

---

## 5. Medición del ROI del programa de video tutorials: el ahorro real en tiempo de agente

```
Hemos publicado [número] videos tutorials en los últimos [X meses]. Quiero medir su impacto real en el volumen de soporte y la satisfacción del cliente.

Diseña el sistema de medición que incluya:
1. La metodología para medir la deflexión de tickets: cómo distinguir los tickets que no llegaron porque el cliente se autoservició vs. los que no llegaron por otras razones
2. Las métricas de consumo de video que predicen la deflexión: tasa de completion del video, tiempo hasta que el cliente busca ayuda adicional después de ver el video, ratio de tickets abiertos después de ver el video
3. El CSAT de autoservicio: cómo medir la satisfacción del cliente que resolvió su problema con un video (incluso cuando no hubo interacción con un agente)
4. El cálculo del ROI: cuánto tiempo de agente se ha ahorrado, a qué coste, y cómo compararlo con el tiempo invertido en producción de los videos
5. El sistema de detección de videos desactualizados: cómo identificar los videos que están aumentando la confusión del cliente porque el producto ha cambiado
```

---

## Resultado esperado

Un programa de video tutorials bien ejecutado convierte el conocimiento del equipo de soporte en un activo escalable que trabaja las 24 horas sin aumentar el coste del equipo. Los clientes que resuelven sus problemas de forma autónoma tienen mayor satisfacción que los que esperan la respuesta de un agente, porque valoran la inmediatez y la autonomía. El video de soporte no es una reducción del servicio — es una mejora de la experiencia del cliente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Equipos de Customer Success y soporte que quieren reducir el volumen de tickets mediante video tutorials de autoservicio sin sacrificar la satisfacción del cliente',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Canal de YouTube como negocio freelance: de la audiencia a los ingresos recurrentes con IA',
                'description'       => 'Framework completo para freelancers y consultores independientes que quieren construir un canal de YouTube como fuente de ingresos complementaria o principal: cómo monetizar la audiencia con cursos, consultoría, patrocinios y productos digitales.',
                'prompt_content'    => <<<'EOT'
Eres un creador de contenido independiente y consultor de negocios digitales con experiencia ayudando a freelancers y consultores a construir canales de YouTube que generan ingresos recurrentes. Has visto cómo profesionales en nichos muy específicos — diseñadores gráficos, consultores de marketing, especialistas en Excel, coaches de productividad — construyen audiencias de 5.000 a 50.000 suscriptores que generan más ingresos que su trabajo freelance directo con clientes.

Hoy vas a ayudarme a construir el canal de YouTube como negocio independiente usando IA de forma sistemática.

**Contexto de mi situación:**
- Mi área de especialidad como freelancer o consultor: [descripción]
- Tipo de audiencia que quiero construir: [profesionales de mi sector / clientes potenciales / personas que aprenden lo que yo sé]
- Estado actual del canal: [nuevo / existente con X suscriptores]
- Objetivo de monetización: [ingreso complementario de X€/mes / fuente principal / construir audiencia para lanzar un curso]

---

## 1. Posicionamiento del canal freelance: el ángulo que atrae audiencia y clientes a la vez

```
Soy freelancer o consultor especializado en [área de especialidad]. Mi cliente ideal es [descripción]. Las preguntas que mis clientes me hacen con más frecuencia son: [lista].

Ayúdame a encontrar el posicionamiento del canal que:
1. Atraiga la audiencia de potenciales clientes (los videos de YouTube que resuelven los problemas de quienes me contratan)
2. Simultáneamente construya audiencia de aprendices (los que quieren aprender lo que yo sé — y que son la base de los productos digitales)
3. No canibalice mi trabajo de consultoría directa (hay un equilibrio entre dar tanto valor gratuito que nadie me contrate y dar tan poco que nadie confíe en mí)
4. Me diferencie de otros creadores en mi nicho: ¿qué perspectiva, experiencia o formato tengo que otros no tienen?
5. Sea sostenible con el tiempo disponible de un freelancer activo: ¿cuántos videos por mes puedo producir sin que el canal compita con el trabajo de pago?
```

---

## 2. Modelo de monetización del canal: las fuentes de ingresos que funcionan para nicho pequeño

```
Mi canal tiene [número actual o proyectado de suscriptores]. Mi nicho es [descripción]. El tipo de audiencia es [descripción de su perfil y poder adquisitivo].

Diseña el modelo de monetización que incluya:
1. La evaluación de cada fuente de ingresos para mi nicho específico: patrocinios (¿hay marcas que paguen para llegar a mi audiencia?), AdSense (¿tiene sentido con el volumen que tengo?), curso online (¿hay demanda y disposición a pagar?), membresía (¿qué contenido exclusivo justificaría una suscripción?), consultoría generada por el canal
2. La secuencia de lanzamiento: qué monetización activar primero, cuándo tiene sentido añadir la siguiente
3. El volumen de audiencia mínimo para que cada fuente de ingresos sea significativa (en mi nicho, 5.000 suscriptores muy cualificados pueden valer más que 100.000 de nicho generalista)
4. El producto digital de entrada para mi audiencia: qué puedo crear en 2-4 semanas que tenga un precio de 30-100€ y sea el primer paso en la escalera de valor
5. El modelo de consultoría a través del canal: cómo usar los videos para generar consultas de clientes de mayor ticket y cómo gestionar el volumen cuando el canal crece
```

---

## 3. Producción de contenido como sistema freelance: publicar sin burnout

```
Soy freelancer activo y quiero publicar contenido en YouTube de forma consistente. Mi tiempo disponible para el canal es [X horas por semana]. Mis horas facturables cuestan [€/hora] — así que el tiempo del canal tiene un coste de oportunidad real.

Diseña el sistema de producción que maximice la relación entre tiempo invertido e impacto:
1. El flujo de producción mínimo viable: del borrador de idea al video publicado en el menor tiempo posible sin perder calidad
2. El batching de producción: cómo grabar 3-4 videos en un día de producción mensual en lugar de producir uno a la semana
3. Las herramientas de IA que reducen el tiempo de producción más significativamente (guiones con IA, edición con Descript, miniaturas con templates de Canva, SEO con herramientas de keywords)
4. La estrategia de reutilización del contenido del canal en el trabajo de consultoría: cómo los videos de YouTube se convierten en recursos para clientes, posts de LinkedIn, newsletters y propuestas comerciales
5. El punto de inflexión para contratar ayuda: cuándo tiene sentido pagar a un editor de video, qué parte del proceso delegar primero, cuánto cuesta y cuándo se paga solo
```

---

## 4. Lanzamiento de curso desde el canal de YouTube: la audiencia como validación

```
Quiero lanzar un curso online sobre [tema] para la audiencia de mi canal. Mi canal tiene [número] suscriptores. El precio tentativo del curso es [€]. El formato es [video pregrabado / bootcamp en vivo / híbrido].

Diseña el proceso de lanzamiento del curso que incluya:
1. La validación del tema antes de crear el curso: cómo usar el canal para probar si hay demanda real antes de invertir semanas en la producción
2. El pre-lanzamiento: cómo calentar a la audiencia durante 4-6 semanas con contenido relacionado que construye el deseo del curso sin revelar demasiado
3. El video de lanzamiento: qué tipo de video de YouTube genera más conversiones a la página de ventas del curso (comparativa de formatos: tutorial relacionado / testimonio de estudiantes beta / behind the scenes de la creación)
4. El sistema de email para la venta del curso: cómo convertir suscriptores de YouTube en suscriptores de email (el activo más valioso para el lanzamiento) y la secuencia de emails de lanzamiento
5. La medición del éxito: qué métricas de lanzamiento debo monitorear, cómo analizar qué funcionó y qué cambiar en el siguiente lanzamiento
```

---

## 5. Crecimiento del canal con IA: acelerar los primeros 1.000 suscriptores

```
Mi canal tiene [número actual] suscriptores. El objetivo a 6 meses es [número objetivo]. El ritmo actual de crecimiento es [X suscriptores por mes].

Diseña la estrategia de crecimiento acelerado que incluya:
1. Los tipos de video con mayor probabilidad de tener alcance viral en mi nicho (los formatos que el algoritmo de YouTube distribuye más entre no suscriptores)
2. La estrategia de colaboraciones: cómo identificar a creadores con audiencias complementarias, cómo proponerles una colaboración cuando todavía tengo un canal pequeño, y qué formato de collab funciona mejor
3. La distribución externa: dónde compartir los videos fuera de YouTube para generar las primeras vistas que activen el algoritmo (comunidades de Reddit, grupos de LinkedIn, newsletters del sector, Quora)
4. El uso de Shorts de YouTube: cómo crear clips cortos de los videos largos con IA (Opus Clip / Descript) y si los Shorts contribuyen o distraen del crecimiento del canal principal en mi nicho
5. Los errores más frecuentes que frenan el crecimiento de canales pequeños y que puedo corregir analizando mis datos de YouTube Analytics con IA
```

---

## Resultado esperado

Un canal de YouTube construido estratégicamente por un freelancer o consultor es el activo de negocio con mejor retorno compuesto a largo plazo. A diferencia de un cliente que te paga una vez, la audiencia de un canal crece, genera ingresos pasivos y construye una reputación que atrae oportunidades sin esfuerzo activo de venta. Los freelancers con canal de YouTube en nichos específicos suelen convertirse en los referentes de su sector en 18-36 meses de publicación consistente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Freelancers y consultores independientes que quieren construir un canal de YouTube como fuente de ingresos complementaria o principal con un sistema de producción sostenible',
                'vote_score'        => 41,
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
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
