<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills458Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Narrativa de marca y storytelling corporativo con IA',
                'description'      => 'Construye la historia de tu marca desde cero usando IA para definir el propósito, el arco narrativo y los mensajes clave que conectan emocionalmente con tu audiencia.',
                'prompt_content'   => <<<'EOT'
Eres un experto en brand storytelling y estrategia de comunicación corporativa con experiencia en marcas de consumo, tecnología y servicios. Tu misión es ayudarme a construir la narrativa de marca completa para una empresa que quiere pasar de comunicar productos y servicios a comunicar una historia que genere conexión emocional y lealtad.

Contexto de partida:
- Empresa: puede ser una startup, una pyme establecida o una empresa que está relanzando su identidad
- Problema actual: la comunicación es transaccional (oferta-precio-descarga), no hay hilo conductor entre los diferentes canales ni mensajes
- Objetivo: construir una narrativa que sea coherente en web, redes sociales, comunicados de prensa, presentaciones a inversores y comunicación interna

Construcción de la narrativa de marca:

1. PROPÓSITO Y RAZÓN DE SER
Define el núcleo filosófico de la marca:
- El "por qué" de la empresa según el modelo del Golden Circle de Simon Sinek: no lo que hace ni cómo lo hace, sino por qué existe y qué cambio quiere provocar en el mundo
- Distinción entre propósito real (genuino, que guía decisiones internas) y propósito cosmético (declarativo, sin consecuencias)
- Ejercicio: formula el propósito en una frase de máximo quince palabras que cualquier empleado pueda repetir de memoria
- Cómo validar que el propósito es auténtico: ¿refleja decisiones reales de negocio tomadas en el pasado? ¿tendría consecuencias si la empresa lo abandonara?

2. EL ARCO NARRATIVO DE LA MARCA
Diseña la historia de la marca usando la estructura del viaje del héroe adaptada a las marcas:
- El héroe de la historia: en el brand storytelling moderno, el héroe no es la marca sino el cliente; la marca es el mentor que le ayuda a transformarse
- El mundo ordinario del cliente: su situación actual, sus frustraciones, sus aspiraciones no cumplidas
- El desafío o llamada a la aventura: el problema que la marca resuelve, formulado en términos emocionales, no racionales
- El mentor (la marca): qué herramienta, guía o transformación ofrece para que el héroe supere el desafío
- La transformación: cómo es la vida del cliente después de relacionarse con la marca, qué ha ganado, en qué se ha convertido
- Escribe la narrativa completa en un párrafo de 150 palabras que sirva como "historia origen" de la marca

3. VOZ Y TONO DE MARCA
Define el sistema de comunicación verbal de la marca:
- Arquetipo de marca: identifica cuál de los doce arquetipos de Jung (héroe, sabio, cuidador, explorador, etc.) representa mejor la personalidad de la marca y cómo se traduce en el lenguaje
- Atributos de la voz: elige cuatro a seis adjetivos que describen cómo habla la marca (directa, cálida, irreverente, rigurosa, accesible) y sus opuestos (lo que nunca sería)
- Guía de tono por canal y contexto: cómo varía el tono entre una publicación de Instagram, un email de bienvenida, un comunicado de crisis y una presentación a inversores sin perder la coherencia de la voz
- Ejemplos antes y después: reescribe tres mensajes genéricos de la empresa aplicando la nueva voz de marca

4. MENSAJES CLAVE Y TAGLINES
Desarrolla el sistema de mensajes de la marca:
- Mensaje principal (the big idea): la afirmación de posicionamiento central que resume lo que la marca promete y en qué se diferencia
- Mensajes por audiencia: cómo adaptar el mensaje central para clientes, inversores, empleados potenciales y medios de comunicación
- Tagline o claim: propón tres opciones de tagline que capturen la esencia de la marca en menos de siete palabras, con explicación de la idea detrás de cada una
- Proof points: los tres a cinco argumentos factuales que dan credibilidad al mensaje central (datos, testimonios, casos de estudio)

5. STORYTELLING EN ACCIÓN
Diseña los formatos narrativos para los diferentes canales:
- Historia de origen de la empresa: estructura de 500 palabras para la página "Sobre nosotros" del sitio web
- Historia de cliente (case study narrativo): formato de 300 palabras que sigue el arco héroe-desafío-mentor-transformación con un cliente real
- Storytelling en redes sociales: cómo adaptar la narrativa a formatos cortos (post de LinkedIn de 150 palabras, carrusel de Instagram de cinco slides, vídeo de 60 segundos)
- Narrativa para inversores: cómo usar el storytelling para presentar la empresa en un pitch deck sin sacrificar el rigor financiero

6. COHERENCIA Y GOBERNANZA DE LA NARRATIVA
Diseña el sistema para mantener la coherencia narrativa a lo largo del tiempo:
- Brand book narrativo: qué incluir (propósito, arco, voz, mensajes, ejemplos de uso y de mal uso)
- Proceso de briefing para agencias y freelancers externos: cómo transmitir la narrativa de marca para que cualquier proveedor cree contenido coherente
- Revisión periódica de la narrativa: cuándo y cómo actualizar la historia de la marca sin perder continuidad
- Uso de IA para mantener la coherencia: cómo crear un sistema prompt de Claude que actúe como guardián de la voz de marca al generar contenido
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir narrativa y storytelling de marca con IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Generador de contenido de marca para desarrolladores con IA',
                'description'      => 'Crea un sistema automatizado de generación de contenido técnico de marca (documentación, posts, casos de uso) usando LLMs y pipelines de contenido personalizados.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software con especialización en sistemas de generación de contenido con IA (LLM pipelines) y developer experience. Necesito tu ayuda para diseñar e implementar un sistema automatizado que genere contenido de marca técnico de forma consistente y escalable, manteniendo la voz y los estándares de calidad de la empresa.

Contexto del proyecto:
- Empresa de software o SaaS con un equipo de marketing pequeño y un equipo técnico grande
- Problema: hay mucho conocimiento técnico interno que no llega al exterior como contenido (artículos de blog, documentación, casos de uso, posts de LinkedIn técnicos)
- Objetivo: automatizar la generación del primer borrador de contenido técnico a partir de fuentes internas (Jira, Confluence, pull requests, Slack) con la voz de marca aplicada

Arquitectura del sistema:

1. DISEÑO DEL PIPELINE DE CONTENIDO
Define la arquitectura del sistema de generación:
- Fuentes de input: changelog de GitHub/GitLab, tickets de Jira (historias de usuario completadas), páginas de Confluence, transcripciones de reuniones técnicas, conversaciones de Slack de los canales técnicos
- Procesamiento: cómo extraer señales de contenido relevantes de cada fuente (qué features se lanzaron, qué problemas se resolvieron, qué aprendizajes surgieron)
- Generación: cómo estructurar el prompt para Claude o GPT-4 para que transforme esas señales en contenido con la voz de marca correcta
- Revisión humana: qué parte del proceso requiere intervención humana antes de publicar y cómo integrar el feedback en el sistema

2. SISTEMA PROMPT DE VOZ DE MARCA
Diseña el sistema prompt que aplica la identidad narrativa de la empresa:
- Componentes del system prompt: propósito de la empresa, audiencia objetivo, atributos de la voz (tono, vocabulario, lo que nunca se dice), ejemplos de contenido aprobado en contraposición con ejemplos rechazados
- Cómo parametrizar el system prompt para diferentes formatos de salida: post de blog técnico de 800 palabras, post de LinkedIn de 150 palabras, descripción de feature para la web, nota de lanzamiento en el changelog
- Estrategia de few-shot learning: cuántos ejemplos incluir en el prompt, cómo seleccionarlos para cubrir la variedad de casos
- Evaluación de la consistencia: cómo medir que el contenido generado mantiene la voz de marca a lo largo del tiempo

3. INTEGRACIÓN CON HERRAMIENTAS DE DESARROLLO
Diseña las integraciones técnicas del sistema:
- GitHub Actions: workflow que detecta un nuevo release tag y genera automáticamente el borrador de las release notes y un post de anuncio
- Jira webhook: cuando un epic se marca como completado, el sistema extrae las historias de usuario y genera un caso de uso para el blog
- Slack bot: comando slash que permite a cualquier ingeniero enviar un fragmento de texto técnico y recibir la versión reformateada con la voz de marca
- CMS headless: cómo publicar el contenido generado como borrador en Contentful, Strapi o similar para revisión antes de publicar

4. CONTROL DE CALIDAD Y FACT-CHECKING
Diseña el proceso de revisión y aprobación:
- Checklist automático de calidad: verificar longitud, presencia de palabras prohibidas, coherencia con el system prompt de voz, ausencia de información confidencial
- Detección de alucinaciones técnicas: cómo implementar una capa de verificación que compruebe que las afirmaciones técnicas en el contenido generado son coherentes con la documentación interna
- Flujo de revisión en GitHub PR: el contenido generado se crea como un PR en el repositorio de contenido, el equipo de marketing lo revisa y aprueba o solicita cambios
- Métricas de calidad del contenido generado: tasa de aprobación sin cambios, número de ediciones promedio antes de publicar, tiempo de revisión por pieza

5. PERSONALIZACIÓN Y VARIACIONES
Diseña el sistema de adaptación del contenido a diferentes audiencias y canales:
- Variaciones por audiencia: el mismo hecho técnico comunicado de forma diferente para desarrolladores, directores de ingeniería y directores de negocio
- Localización: cómo adaptar el sistema para generar contenido en varios idiomas manteniendo la voz de marca en cada uno
- Formato adaptativo: cómo usar el mismo input para generar simultáneamente un post de blog, un hilo de Twitter/X, un post de LinkedIn y un párrafo de newsletter
- A/B testing de contenido: cómo generar variaciones del mismo contenido para testear qué enfoque funciona mejor con la audiencia objetivo

6. MONITORIZACIÓN Y MEJORA CONTINUA
Diseña el sistema de aprendizaje y optimización:
- Dashboard de rendimiento del contenido: qué métricas monitorizar (tráfico, engagement, leads generados, tiempo de revisión) y cómo integrar los datos de analítica en el sistema
- Feedback loop: cómo capturar las ediciones que hace el equipo de marketing sobre el contenido generado y usarlas para mejorar el system prompt
- Evaluación periódica del sistema: cómo comparar la calidad del contenido generado en distintos momentos, detector de regresiones cuando se cambia el modelo o el prompt
- Coste y escalabilidad: estimación del coste de tokens por pieza de contenido generada, proyección de costes a escala, estrategia de optimización mediante caching y prompt compression
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir sistema automatizado de generación de contenido de marca con LLMs',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Identidad visual de marca y sistema de diseño con IA',
                'description'      => 'Construye la identidad visual completa de una marca y diseña el sistema de componentes reutilizables usando IA como co-creador en el proceso de exploración y decisión.',
                'prompt_content'   => <<<'EOT'
Eres un director de arte y diseñador de identidad de marca con experiencia en proyectos de branding para startups, empresas medianas y lanzamientos de producto. Necesito tu ayuda para diseñar un proceso de creación de identidad visual que use la IA como acelerador en las fases de exploración y conceptualización, sin sacrificar el pensamiento estratégico y la coherencia del resultado.

Contexto del proyecto:
- Cliente: empresa en fase de lanzamiento o de rebranding que necesita una identidad visual completa
- Entregables esperados: logotipo con variantes, paleta de colores, tipografía, sistema de iconografía, guía de uso (brand guidelines)
- Restricción de tiempo: ocho semanas desde el briefing hasta la entrega final

Proceso de diseño:

1. BRIEFING Y ESTRATEGIA DE MARCA
Define las bases estratégicas antes de entrar en lo visual:
- Preguntas clave del briefing: propósito de la empresa, audiencia objetivo, personalidad de marca (tres adjetivos que sí, tres que nunca), referencias visuales que gustan y que no gustan, contextos de uso principales (digital, impresión, ropa, señalética)
- Análisis de la competencia visual: cómo mapear el espacio visual del sector para encontrar el territorio no ocupado donde posicionar la nueva identidad
- Moodboard estratégico: cómo usar IA para generar descripciones de concepto visual y luego explorar referencias en herramientas como Midjourney o Adobe Firefly
- Definición del concepto creativo: el insight central que guía todas las decisiones visuales posteriores

2. EXPLORACIÓN DE LOGOTIPO
Diseña el proceso de exploración y selección del logotipo:
- Tipologías a explorar: logotipo (solo texto), isotipo (solo símbolo), imagotipo (texto más símbolo separables), emblema (texto integrado en símbolo)
- Uso de IA para la exploración de conceptos: cómo escribir prompts efectivos para generar referencias visuales de cada dirección conceptual
- Proceso de reducción: cómo pasar de veinte direcciones iniciales a tres propuestas para el cliente, con criterios objetivos de selección
- Construcción del logotipo en vectorial: principios de construcción (proporciones, espaciado, zonas de exclusión), cómo documentar el proceso para el brand book

3. SISTEMA DE COLOR
Construye la paleta de color con rigor técnico y estratégico:
- Color primario: cómo seleccionarlo partiendo del concepto estratégico y del análisis de competencia, qué psicología del color aplica en el sector del cliente
- Paleta completa: color primario, secundario, de acento, neutros oscuros y claros, colores semánticos (éxito, error, advertencia) para interfaces digitales
- Especificaciones técnicas: valores en HEX, RGB, CMYK, Pantone, HSL para cada color
- Verificación de accesibilidad: contraste mínimo WCAG AA para texto sobre fondo, cómo ajustar la paleta si algún contraste no cumple
- Uso en contexto: ejemplos de cómo usar los colores en web, en impresión oscura y en fondos fotográficos

4. TIPOGRAFÍA Y SISTEMA DE TEXTO
Define el sistema tipográfico de la marca:
- Selección de tipografías: cómo elegir entre fuentes de pago (Adobe Fonts, MyFonts) y alternativas gratuitas de alta calidad (Google Fonts, Font Squirrel) según el presupuesto del cliente
- Jerarquía tipográfica: display (títulos grandes), heading (subtítulos), body (texto corrido), caption (notas y pies)
- Especificaciones de uso: tamaño, interlineado, kerning, color para cada nivel jerárquico en web y en impresión
- Compatibilidad digital: cómo asegurar que las fuentes renderizan correctamente en todos los navegadores y sistemas operativos, alternativas de sistema para cuando la fuente no carga

5. SISTEMA DE ICONOGRAFÍA E ILUSTRACIÓN
Diseña el lenguaje visual complementario de la marca:
- Estilo de iconografía: outline vs. filled, grosor de trazo, esquinas redondeadas vs. angulares, alineación con la personalidad de la marca
- Cómo usar IA para explorar estilos de ilustración: prompts para generar referencias del estilo buscado antes de encargar la ilustración real
- Librería de iconos: qué íconos son imprescindibles para el sector del cliente, cómo extender la librería de forma coherente
- Fotografía y tratamiento de imagen: directrices sobre tipo de fotografía (ambiente, producto, personas), filtros o tratamientos cromáticos que unen las imágenes a la identidad

6. BRAND GUIDELINES Y ENTREGA
Diseña el documento de identidad de marca:
- Estructura del brand book: introducción estratégica, logotipo y variantes, color, tipografía, iconografía, ejemplos de aplicación correcta e incorrecta, recursos descargables
- Formato de entrega: PDF interactivo para consulta diaria, web privada del brand book para el cliente con acceso a assets
- Formatos de los archivos: qué entregar en SVG, AI, EPS, PNG con fondo transparente, PNG con fondo blanco y en qué resoluciones
- Cómo usar IA para mantener el brand book actualizado: generación automática de nuevas páginas de aplicación cuando la empresa lanza un nuevo canal o producto
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir identidad visual completa de marca con IA como co-creador',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Storytelling de ventas y narrativa de propuesta de valor con IA',
                'description'      => 'Construye el relato de ventas que conecta emocionalmente con el cliente, usando estructuras narrativas probadas y IA para personalizar el mensaje a cada cuenta.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas y comunicación persuasiva con experiencia en ciclos de venta B2B de alta complejidad. Necesito tu ayuda para reemplazar el argumento de ventas estándar (características-beneficios-precio) por una narrativa de ventas que genere conexión emocional, reduzca la resistencia del comprador y acelere el proceso de decisión.

Contexto del equipo de ventas:
- Producto: solución de software o servicio de alto valor (ticket medio superior a 10.000 euros anuales)
- Ciclo de venta: entre tres y doce meses, con múltiples interlocutores en la cuenta
- Problema actual: el discurso de ventas es demasiado centrado en el producto y no conecta con las prioridades del comprador

Narrativa de ventas:

1. EL MAPA EMOCIONAL DEL COMPRADOR
Entiende la psicología del proceso de compra B2B:
- Tensión entre el dolor del problema actual y el miedo al riesgo de cambiar: cómo la narrativa de ventas debe resolver esta tensión antes de hacer la propuesta
- Mapa emocional del ciclo de compra: las cuatro emociones dominantes en cada fase (descubrimiento del problema, evaluación de opciones, decisión, implementación) y cómo el vendedor debe responder a cada una
- El comprador como héroe: cómo posicionar la solución como el mentor que ayuda al comprador a triunfar, no como el héroe que viene a salvarle
- Diferencia entre motivación de compra declarada (lo que dice querer) y motivación real (lo que le mueve de verdad): cómo descubrirla con preguntas narrativas

2. LA HISTORIA DE PROBLEMA
Construye el relato del dolor que resuena con el comprador:
- Cómo describir el problema del cliente mejor de lo que él mismo lo describiría: usar el lenguaje exacto de sus conversaciones internas, no el lenguaje del vendedor
- La historia del "mundo sin solución": cómo narrar cómo se ve el futuro del comprador si no resuelve el problema, sin ser alarmista sino realista
- Validación del problema con datos del sector: cómo usar estadísticas del mercado para confirmar que el problema es real y relevante
- Cómo usar IA para preparar la narrativa del problema personalizada para cada cuenta: investigar la empresa en LinkedIn, noticias y sus propios comunicados para adaptar el discurso

3. LA HISTORIA DE LA SOLUCIÓN
Diseña el relato de cómo la solución transforma la situación del cliente:
- Estructura de la historia de solución: situación antes, momento de cambio, situación después (el "nuevo normal" del cliente)
- Cómo usar casos de éxito reales como el núcleo de la narrativa: estructura de 90 segundos con cliente similar, problema concreto, solución aplicada, resultado medible
- La demostración narrativa: cómo estructurar una demo de producto como una historia con protagonista (el usuario), reto (su problema diario) y resolución (cómo la herramienta lo resuelve)
- Diferenciación sin atacar a la competencia: cómo posicionar la solución como única en su categoría usando la narrativa del "antes de que existiéramos"

4. PERSONALIZACIÓN DE LA NARRATIVA POR CUENTA
Diseña el sistema de personalización del discurso para cada cliente:
- Investigación previa con IA: qué información recopilar de la cuenta antes de la primera reunión (estrategia de la empresa, retos del sector, declaraciones del CEO, resultados financieros recientes) y cómo usarla para personalizar la apertura
- Personalización por rol del interlocutor: la narrativa para el Director Financiero destaca el ROI y el riesgo, para el Director de Operaciones el impacto en el equipo, para el CEO la ventaja competitiva
- Personalización por industria: cómo adaptar los casos de éxito y los datos de referencia a cada vertical del cliente (retail, logística, sanidad, banca)
- Generación de la propuesta narrativa con IA: cómo usar Claude para generar el primer borrador de una propuesta comercial personalizada a partir de las notas del discovery

5. STORYTELLING EN LOS MOMENTOS CLAVE DEL CICLO
Diseña la narrativa para cada momento crítico del ciclo de venta:
- El email de prospección: estructura de cuatro líneas que usa el storytelling para generar curiosidad sin vender nada todavía
- La primera reunión: los primeros tres minutos como gancho narrativo, cómo hacer que el comprador cuente su historia antes de que el vendedor cuente la suya
- La presentación del caso de negocio al comité: cómo estructurar la narrativa para un grupo heterogéneo con distintos intereses y distintos niveles de conocimiento técnico
- La gestión del silencio del comprador: cómo usar la narrativa para reactivar una oportunidad que ha perdido impulso

6. MEDIR LA EFECTIVIDAD DEL STORYTELLING
Define cómo medir el impacto de la narrativa de ventas:
- Métricas de conversación: tasa de respuesta a emails de prospección, ratio de primera reunión a segunda reunión, participación del comprador en la conversación (porcentaje de tiempo que habla el cliente vs. el vendedor)
- Métricas de ciclo: tiempo medio de cierre antes y después de implementar la narrativa, número de interlocutores involucrados, tasa de cierre por etapa del embudo
- Métricas de calidad: NPS de las reuniones de ventas (cómo el comprador valora la experiencia de la conversación), tasa de referidos generados por cuentas cerradas
- Cómo usar IA para analizar las grabaciones de reuniones y medir en qué momentos el comprador se muestra más comprometido y cuáles son las señales narrativas que lo generan
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir narrativa de ventas persuasiva personalizada con IA',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Narrativa de producto y comunicación del roadmap con IA',
                'description'      => 'Construye el relato estratégico de tu producto que conecta la visión del equipo con las necesidades del cliente, y aprende a comunicar el roadmap como una historia.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Producto con experiencia en startups y empresas de software B2B. Necesito tu ayuda para construir la narrativa de producto que guía todas las decisiones del equipo y la comunicación externa del roadmap, usando el storytelling como herramienta para alinear al equipo interno, convencer a los stakeholders y retener a los clientes.

Contexto del producto:
- Producto SaaS B2B en fase de crecimiento, con veinte a cien clientes activos
- Problema de comunicación: el roadmap se comunica como una lista de features sin contexto estratégico, los clientes no entienden el "para qué" de las decisiones de producto
- Objetivo: construir una narrativa de producto que cree anticipación, alinee al equipo y justifique las decisiones difíciles

Construcción de la narrativa de producto:

1. LA VISIÓN NARRATIVA DEL PRODUCTO
Define el relato del futuro que el producto quiere hacer realidad:
- El "mundo mejor" que el producto promete: cómo describe la situación ideal del cliente cuando el producto ha llegado a su versión más completa
- La distancia entre el presente y ese futuro: qué le falta al mundo hoy que el producto va a aportar, por qué nadie lo ha resuelto todavía de forma satisfactoria
- La visión como norte para las decisiones de producto: cómo usar la narrativa de visión para desempatar entre features cuando hay recursos limitados
- Cómo escribir la visión del producto en un párrafo de cien palabras que cualquier persona de la empresa pueda citar de memoria

2. LOS PERSONAJES DE LA NARRATIVA
Define los protagonistas del relato del producto:
- El usuario principal como protagonista: no solo un buyer persona demográfico, sino un personaje con una historia, un trabajo que hacer, frustraciones recurrentes y aspiraciones profesionales y personales
- El antagonista: no la competencia, sino el estado de cosas actual (el problema, la ineficiencia, el caos) contra el que lucha el usuario
- La empresa y el producto como mentor: qué herramienta, conocimiento o guía aporta al usuario para vencer al antagonista
- Cómo usar IA para enriquecer los personajes con datos reales: análisis de entrevistas de usuarios, reseñas del producto, tickets de soporte

3. EL ROADMAP COMO HISTORIA
Convierte el roadmap en una narrativa de progresión:
- De lista de features a arco narrativo: cada trimestre como un capítulo que acerca al usuario un paso más hacia el "mundo mejor" prometido
- Temas estratégicos trimestrales como títulos de capítulo: "Este trimestre ayudamos al usuario a recuperar el control de su tiempo", no "Lanzamos las integraciones del calendario y las notificaciones automáticas"
- Cómo comunicar la lógica de priorización: por qué esta feature ahora y no la otra, usando la narrativa del usuario y no el framework de priorización interno (RICE, ICE)
- Qué no poner en el roadmap público y cómo explicar las ausencias sin comprometer la estrategia

4. COMUNICACIÓN A DIFERENTES AUDIENCIAS
Adapta la narrativa de producto para cada stakeholder:
- Para el equipo de desarrollo: la historia técnica de cada feature, qué problema del usuario resuelve, qué decisiones de diseño se tomaron y por qué, qué casos de borde se descartaron deliberadamente
- Para el equipo de ventas: cómo la nueva feature convierte una objeción recurrente en un argumento de cierre, qué cuentas específicas deberían notificarse primero
- Para los clientes actuales: anuncio de nueva feature como capítulo de la historia del producto, qué cambia para ellos y cómo empezar a usarlo
- Para inversores: el roadmap como evidencia de la ejecución de la estrategia, cómo conectar cada decisión de producto con las métricas de negocio y la tesis de inversión

5. STORYTELLING EN LAS REUNIONES DE PRODUCTO
Usa la narrativa en las interacciones cotidianas del equipo:
- Cómo escribir las historias de usuario (user stories) como pequeñas narrativas: quién es el personaje, qué está tratando de hacer, qué obstáculo encuentra, qué necesita para superarlo
- Cómo presentar el resultado de un sprint de desarrollo: no una lista de lo entregado, sino la historia de cómo mejoró la vida del usuario en las últimas dos semanas
- Cómo usar IA para generar el resumen narrativo de las entrevistas de usuario: transformar notas de una sesión de investigación en una historia del usuario que el equipo pueda recordar y referenciar

6. MÉTRICAS DE LA NARRATIVA DE PRODUCTO
Define cómo medir el impacto del storytelling de producto:
- Alineación del equipo: encuesta trimestral sobre cuánto entiende cada persona de la empresa la visión del producto y el razonamiento detrás de las prioridades
- Reacción de los clientes al roadmap: tasa de apertura y engagement de los emails de anuncio de nuevas features, participación en webinars del roadmap
- Impacto en ventas: cuántas oportunidades de venta mencionan el roadmap como factor de decisión, cuántos churns se atribuyen a la ausencia de una feature
- Uso de IA para detectar desalineación narrativa: análisis de los mensajes de Slack y los documentos de especificación del equipo para identificar si el lenguaje usado está alineado con la narrativa de producto definida
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir narrativa de producto y comunicar el roadmap como historia',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Storytelling de employer branding para atraer talento con IA',
                'description'      => 'Construye la narrativa de empleador que atrae a los candidatos ideales, diseña la propuesta de valor al empleado y comunica la cultura de empresa usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un Director de RRHH y especialista en employer branding con experiencia en empresas de tecnología, consultoría y sector digital. Necesito tu ayuda para construir la narrativa de empleador que diferencia a la empresa en el mercado de talento, atrae a los perfiles adecuados y retiene a los mejores reduciendo la rotación.

Contexto de la empresa:
- Empresa con dificultades para atraer talento técnico y digital en un mercado competitivo
- Employer branding actual: inexistente o basado únicamente en publicar ofertas en portales con una descripción genérica
- Objetivo: posicionar la empresa como un lugar donde los mejores profesionales quieren trabajar, comunicando de forma auténtica la cultura y la propuesta de valor

Construcción del employer branding:

1. DIAGNÓSTICO DE LA CULTURA REAL
Define el punto de partida honesto antes de construir la narrativa:
- Entrevistas internas: qué preguntar a los empleados actuales para entender qué hace única a la empresa como lugar de trabajo (sin preguntar lo que ya saben que quieres escuchar)
- Análisis de reseñas en Glassdoor, LinkedIn y Kununu: cómo usar IA para sintetizar los patrones de lo que los empleados valoran y lo que critican
- Identificación de los momentos culturales definitorios: los tres a cinco episodios en la historia de la empresa que muestran mejor quiénes son de verdad (cómo reaccionaron en una crisis, qué hicieron cuando tuvieron que elegir entre dinero y valores)
- Brecha entre cultura aspiracional y cultura real: cómo gestionarla sin construir una narrativa que decepcione al candidato al llegar

2. EMPLOYEE VALUE PROPOSITION (EVP)
Construye la propuesta de valor al empleado:
- Los cinco pilares de la EVP: compensación y beneficios, desarrollo profesional, cultura y ambiente de trabajo, propósito e impacto, flexibilidad y conciliación
- Para cada pilar: qué ofrece la empresa de forma diferencial (no lo que todos ofrecen, sino lo que esta empresa hace de forma única o superior)
- El tagline del employer brand: una frase de menos de diez palabras que capture la esencia de lo que significa trabajar aquí
- Validación de la EVP con empleados: cómo hacer un focus group o encuesta que confirme que el mensaje resuena antes de lanzarlo al mercado

3. CONTENIDO DE EMPLOYER BRANDING
Diseña el plan de contenidos para comunicar la cultura:
- Formatos de contenido de alto impacto: vídeos de "un día en la vida de" por rol, artículos de empleados en primera persona en LinkedIn, behind the scenes del equipo en Instagram, AMA (Ask Me Anything) del CEO en LinkedIn Live
- Historias de empleados: cómo seleccionar a los embajadores de marca, qué historia pedir que cuenten, cómo ayudarles a contarla con IA sin que pierda autenticidad
- Contenido de las ofertas de empleo: cómo reescribir una oferta de trabajo con narrativa, de la lista de requisitos a una invitación a una historia compartida
- Uso de IA para generar variaciones del contenido: el mismo mensaje cultural adaptado a los distintos perfiles que la empresa quiere atraer

4. CANALES Y COMUNIDADES
Define la estrategia de distribución del employer brand:
- LinkedIn como canal principal: perfil de empresa optimizado para la búsqueda de talento, publicaciones de cultura semanales, participación de los empleados como amplificadores
- Comunidades de nicho: dónde se congregan los perfiles técnicos que la empresa busca (Discord de comunidades de programadores, Slack de diseñadores, foros de data science), cómo participar de forma auténtica y no intrusiva
- Universidades y bootcamps: programa de relaciones universitarias, charlas técnicas, hackathones como herramienta de employer branding y sourcing
- Feria de empleo y eventos de sector: cómo presentar la empresa de forma memorable en tres minutos ante un candidato

5. PROCESO DE SELECCIÓN COMO EXPERIENCIA DE MARCA
Diseña el proceso de selección que refuerza el employer brand:
- Candidate experience journey: mapea todos los touchpoints del candidato desde que ve la oferta hasta que recibe la decisión, identifica los momentos de fricción que dañan la percepción de la empresa
- Comunicación durante el proceso: mensajes automáticos personalizados en cada etapa, tiempo máximo de respuesta, feedback constructivo a los candidatos rechazados
- La entrevista como conversación de doble sentido: cómo diseñar entrevistas que demuestren la cultura de la empresa al mismo tiempo que evalúan al candidato
- Uso de IA para personalizar las comunicaciones del proceso: generación de emails de feedback constructivo para candidatos rechazados que preserven la relación

6. MÉTRICAS DE EMPLOYER BRANDING
Define cómo medir el retorno de la inversión en employer brand:
- Métricas de atracción: número de candidaturas espontáneas, calidad de los CVs recibidos, porcentaje de candidatos que aplican a través de la web corporativa vs. portales, tiempo de cobertura de vacantes
- Métricas de percepción: puntuación en Glassdoor, net promoter score del proceso de selección (candidate NPS), menciones positivas de la empresa en redes sociales
- Métricas de retención: tasa de rotación voluntaria, eNPS del empleado actual, porcentaje de empleados que recomendarían la empresa como lugar de trabajo
- Cómo usar IA para el reporting mensual de employer branding: síntesis de menciones en redes, análisis de sentimiento de reseñas, resumen de candidaturas por canal y perfil
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir employer branding y atraer talento con narrativa auténtica e IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación financiera y narrativa para inversores con IA',
                'description'      => 'Construye los mensajes clave para comunicar los resultados financieros, la estrategia y el potencial de la empresa a inversores usando storytelling y IA para elaborar el relato.',
                'prompt_content'   => <<<'EOT'
Eres un experto en comunicación financiera e investor relations con experiencia en empresas cotizadas, startups en ronda de financiación y empresas en proceso de salida. Necesito tu ayuda para construir la narrativa financiera que presenta los resultados y la estrategia de la empresa de forma que genere confianza, anticipación y compromiso en los inversores actuales y potenciales.

Contexto:
- Puede ser una startup preparando una ronda de financiación, una empresa mediana comunicando resultados anuales o una empresa en proceso de salida a bolsa
- Problema: la comunicación financiera es demasiado técnica, llena de datos sin contexto narrativo, y no logra transmitir el potencial real de la empresa
- Objetivo: construir una narrativa financiera que combine el rigor de los números con el poder de la historia para facilitar la decisión de inversión

Construcción de la narrativa financiera:

1. LA TESIS DE INVERSIÓN COMO HISTORIA
Define el relato central que justifica por qué invertir en esta empresa:
- Los tres pilares de una tesis de inversión convincente: mercado grande y en crecimiento, equipo diferencial y ejecución demostrada, modelo de negocio con ventajas competitivas sostenibles
- Cómo narrar cada pilar como una historia y no como una afirmación: en lugar de "mercado de 50.000 millones", contar por qué ese mercado está al borde de una transformación y por qué ahora es el momento
- El gancho de la tesis en 30 segundos: la frase que resume por qué esta empresa en este momento, diseñada para el primer párrafo de un teaser de inversión
- Cómo usar IA para investigar el mercado, la competencia y las tendencias del sector y sintetizarlos en argumentos narrativos sólidos

2. LOS NÚMEROS COMO EVIDENCIA DE LA HISTORIA
Diseña la estructura narrativa de los resultados financieros:
- Cómo presentar los KPIs como prueba de la historia: cada métrica debe responder a la pregunta "¿qué demuestra esto sobre el potencial de la empresa?"
- Estructura del earnings call o la presentación de resultados: apertura narrativa, revisión de los hitos del período, números en contexto, perspectiva de futuro, Q&A
- Cómo explicar las variaciones negativas sin perder credibilidad: marco narrativo para presentar malos resultados de forma honesta y recuperar la confianza
- Uso de IA para generar el comentario narrativo que acompaña a cada tabla o gráfico del informe: no solo el número sino su significado en el contexto de la estrategia

3. EL PITCH DECK NARRATIVO
Diseña la estructura de la presentación de inversión:
- Las doce diapositivas de la narrativa de inversión perfecta: problema del mercado, solución, tamaño del mercado, modelo de negocio, tracción y métricas, equipo, competencia, roadmap, uso de los fondos, financiación buscada
- La narrativa de apertura: cómo empezar con una historia o una afirmación que genere atención inmediata antes de la primera diapositiva de datos
- El momento de la prueba social: cómo presentar clientes, partners y advisors de forma que amplíen la credibilidad de la historia
- Cómo usar IA para generar múltiples versiones del pitch deck adaptadas al perfil del inversor (venture capital, business angel, family office, inversor estratégico)

4. COMUNICACIÓN CONTINUA CON INVERSORES
Diseña el sistema de comunicación periódica con la base de inversores:
- Investor update mensual o trimestral: estructura de un email de dos páginas con resumen narrativo del período, métricas principales, hitos conseguidos, desafíos y próximos pasos
- Comunicación de malas noticias: protocolo para comunicar una desviación del plan, un cambio de estrategia o un evento adverso de forma proactiva y que preserve la confianza
- Board deck narrativo: cómo estructurar la presentación al consejo para que sea una conversación estratégica y no una revisión de datos
- Uso de IA para generar el primer borrador del investor update a partir de los datos del CRM, los resultados financieros del mes y las notas del CEO

5. PREGUNTAS DIFÍCILES Y OBJECIONES DE INVERSORES
Prepara las respuestas a las preguntas más incómodas:
- Preguntas sobre la competencia: cómo responder a "¿por qué no va a hacer esto Google o Amazon?" con una narrativa de ventaja competitiva creíble y sin sonar defensivo
- Preguntas sobre la valoración: cómo justificar el múltiplo pedido usando comparables, potencial del mercado y narrativa de la oportunidad única
- Preguntas sobre el equipo: cómo presentar las fortalezas del equipo y reconocer los gaps de forma que demuestre autoconciencia y plan de solución
- Cómo usar IA para simular sesiones de Q&A con inversores: práctica de preguntas difíciles y refinamiento de las respuestas antes de la reunión real

6. MATERIALES DE COMUNICACIÓN FINANCIERA
Diseña el ecosistema de documentos de investor relations:
- Teaser ejecutivo: dos páginas que condensan la tesis de inversión para el primer contacto con el inversor
- Memorándum de información: documento completo de entre 30 y 50 páginas con toda la información necesaria para la due diligence
- Data room: estructura y contenidos para que la due diligence sea fluida y positiva
- Comunicados de prensa de hitos financieros: cómo usar IA para generar el comunicado de una ronda de financiación o de los resultados anuales con el tono y formato que esperan los medios financieros
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir narrativa financiera e investor relations con storytelling e IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación jurídica clara y narrativa legal persuasiva con IA',
                'description'      => 'Aprende a simplificar el lenguaje jurídico, construir argumentaciones persuasivas y comunicar conceptos legales complejos a clientes e interlocutores no técnicos usando IA.',
                'prompt_content'   => <<<'EOT'
Eres un abogado con experiencia en litigación y asesoramiento jurídico que ha desarrollado una habilidad especial para comunicar conceptos legales complejos de forma clara y persuasiva. Necesito tu ayuda para mejorar la comunicación jurídica en tres dimensiones: la claridad para el cliente, la persuasión ante jueces y árbitros, y el posicionamiento de la firma como referente mediante contenido legal accesible.

Contexto profesional:
- Abogado de firma mediana o boutique especializada que quiere diferenciarse por la calidad de su comunicación
- Problema: los escritos legales son complejos, los clientes no entienden el estado de su asunto y la firma no tiene presencia de marca visible en el sector
- Objetivo: usar las técnicas de storytelling y la IA para transformar la comunicación legal en una ventaja competitiva

Mejora de la comunicación jurídica:

1. SIMPLIFICACIÓN DEL LENGUAJE JURÍDICO
Transforma el lenguaje técnico en comunicación accesible:
- El test de la abuela: cómo verificar si un texto legal puede ser entendido por alguien sin formación jurídica sin perder precisión
- Las diez expresiones legales más habituales y cómo sustituirlas por lenguaje claro sin perder validez: "en virtud de lo expuesto", "asimismo", "el susodicho", "a los efectos oportunos", etc.
- Estructura de la comunicación al cliente: resumen ejecutivo en tres párrafos, luego el análisis jurídico detallado, respetando siempre el principio de la pirámide invertida (lo más importante primero)
- Uso de IA para transformar un texto de un escrito judicial o un dictamen en un resumen comprensible para el cliente, manteniendo los matices jurídicos relevantes

2. STORYTELLING EN LA ARGUMENTACIÓN JURÍDICA
Usa la narrativa para construir argumentaciones más persuasivas:
- La historia del cliente como núcleo del escrito: cómo presentar los hechos de forma que construyan una narrativa coherente y emocional que el juez o árbitro pueda seguir
- Estructura narrativa del escrito: hechos (la historia), fundamentos jurídicos (el marco), suplico (la resolución justa del conflicto)
- El personaje del cliente: cómo presentar al cliente (persona física o jurídica) de forma que sea comprensible y simpático para el juzgador, sin distorsionar los hechos
- El protagonista y el antagonista: cómo establecer la tensión narrativa del conflicto sin caer en la demonización de la parte contraria
- Cómo usar IA para revisar un borrador de escrito y sugerir mejoras narrativas que lo hagan más legible y persuasivo

3. COMUNICACIÓN PROACTIVA CON EL CLIENTE
Diseña el sistema de comunicación durante el proceso legal:
- Mapa de hitos del proceso judicial o arbitral: cómo explicar al cliente en qué fase está su asunto, qué ocurrirá a continuación y en qué plazos esperados
- Informe de estado mensual: estructura de un email o documento de una página que resume el estado del asunto sin entrar en tecnicismos
- Comunicación de malas noticias: cómo informar al cliente de una resolución desfavorable o de un riesgo material de forma directa, empática y constructiva
- Uso de IA para generar comunicaciones personalizadas al cliente a partir de las novedades del expediente, reduciendo el tiempo del abogado en la parte administrativa de la relación

4. MARKETING DE CONTENIDOS JURÍDICOS
Diseña la estrategia de contenido legal para posicionar la firma:
- Formatos de contenido de alto impacto para abogados: artículo de análisis jurídico en LinkedIn, newsletter sobre novedades legislativas, podcast de casos prácticos, guía descargable para empresas
- Cómo transformar un fallo judicial reciente en un artículo de 600 palabras accesible para empresarios: qué cambia, qué deben saber, qué deben hacer
- Uso de IA para generar el primer borrador de contenido jurídico: cómo estructurar el briefing para que Claude genere un artículo que luego el abogado revisa y enriquece con su expertise
- SEO para firmas de abogados: cómo identificar las búsquedas que hacen los clientes potenciales y crear contenido que responda a esas preguntas

5. PROPUESTAS COMERCIALES NARRATIVAS
Diseña la propuesta de honorarios que convierte prospectos en clientes:
- Estructura de la propuesta: descripción del problema del cliente (demostrando que lo has entendido), tu enfoque y metodología, el equipo que trabajará en el asunto, los resultados esperados, los honorarios y la forma de trabajo
- La narrativa de casos similares: cómo incluir dos o tres referencias de asuntos parecidos que hayas resuelto satisfactoriamente, respetando la confidencialidad
- Cómo usar IA para generar el borrador de la propuesta a partir de las notas de la reunión inicial con el prospecto
- El seguimiento de la propuesta: qué hacer si el prospecto no responde, cuándo llamar, qué añadir que no estaba en la propuesta original

6. GESTIÓN DE LA REPUTACIÓN Y PRESENCIA DIGITAL
Diseña el sistema de construcción de reputación online de la firma:
- Perfil de LinkedIn del abogado como carta de presentación: cómo optimizarlo para que sea encontrado por clientes potenciales y que cuente la historia profesional de forma atractiva
- Gestión de reseñas: cómo pedir a clientes satisfechos que dejen una reseña en Google o en directorios especializados (Lexdir, El Derecho)
- Posicionamiento en medios: cómo usar IA para detectar noticias de actualidad en las que el abogado puede aportar comentario experto y cómo contactar a los periodistas
- Monitorización de la reputación: cómo configurar alertas de Google sobre la firma y los abogados principales para detectar menciones y gestionar cualquier comentario negativo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar comunicación jurídica y construir reputación de firma con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Storytelling en atención al cliente para transformar quejas en lealtad con IA',
                'description'      => 'Usa técnicas de narrativa y comunicación empática para transformar las interacciones de soporte en historias de recuperación que conviertan clientes insatisfechos en promotores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Experience y comunicación empática con experiencia en equipos de soporte y customer success de empresas digitales. Necesito tu ayuda para diseñar un sistema de comunicación narrativa para el equipo de atención al cliente que transforme las interacciones conflictivas en momentos de fidelización, usando técnicas de storytelling y IA para escalar la personalización.

Contexto del equipo:
- Empresa de software o e-commerce con entre 50.000 y 200.000 clientes activos
- Equipo de soporte de 20 agentes gestionando 1.500 tickets diarios por email, chat y teléfono
- Problema: las respuestas de soporte son eficientes pero frías, mecánicas y no construyen lealtad

Sistema de comunicación narrativa:

1. LA QUEJA COMO HISTORIA DE FRUSTRACIÓN
Entiende la estructura narrativa de la insatisfacción del cliente:
- La queja como relato en tres actos: el mundo antes (las expectativas del cliente), el evento disruptivo (lo que salió mal), el mundo actual (el estado emocional de frustración)
- Cómo escuchar la historia completa antes de responder: técnicas de escucha activa en canal escrito (cómo formular la primera respuesta para que el cliente sienta que ha sido oído)
- La diferencia entre validar la emoción y aceptar la responsabilidad: se pueden hacer ambas cosas a la vez, pero hay que saber distinguirlas y hacerlas explícitas
- Cómo usar IA para analizar el tono emocional de un ticket y clasificar el nivel de frustración antes de asignarlo al agente con el perfil adecuado

2. LA RESPUESTA NARRATIVA
Diseña la estructura de una respuesta de soporte que construye lealtad:
- El arco de recuperación: reconocimiento del problema (el cliente se siente escuchado), explicación honesta sin excusas (el cliente entiende qué pasó), solución concreta (el cliente sabe qué hacer), compromiso de mejora (el cliente confía en el futuro)
- El lenguaje de la empatía sin clichés: cómo evitar las frases hechas que suenan automatizadas ("lamentamos los inconvenientes causados") y sustituirlas por lenguaje genuino y específico
- Personalización de la respuesta: cómo usar el nombre del cliente, referenciar el historial de la relación y mostrar que conoces su caso concreto
- Uso de IA para generar el primer borrador de respuesta empática: cómo estructurar el prompt para que Claude genere una respuesta que suene humana y personalizada, y qué debe revisar el agente antes de enviarla

3. LOS MOMENTOS DE LA VERDAD
Diseña las interacciones más críticas con un guion narrativo:
- La llamada de cliente furioso: guion de apertura que baja la intensidad emocional en los primeros 60 segundos, cómo usar el silencio, cómo pasar de la queja al problema solucionable
- El email de escalado al cliente VIP: estructura de seis párrafos para reconocer la gravedad, demostrar que es un caso prioritario, ofrecer la solución y crear un nuevo compromiso de confianza
- La respuesta a la reseña negativa pública: cómo responder en Google, Trustpilot o App Store de forma que el mensaje sea tanto para el cliente insatisfecho como para los futuros clientes que leerán la respuesta
- La reapertura de un cliente churneado: cómo contactar a un cliente que se fue con una historia de cambio y mejora que sea creíble

4. PLANTILLAS NARRATIVAS CON IA
Construye la biblioteca de respuestas narrativas:
- Arquitectura de plantillas: no plantillas rígidas sino marcos narrativos que el agente personaliza con los detalles del caso concreto
- Las diez situaciones más frecuentes del equipo: para cada una, un marco narrativo con los puntos que el agente debe cubrir, el tono recomendado y los elementos de personalización
- Uso de IA para generar variaciones de cada marco: cómo generar cinco versiones de una respuesta de disculpa por retraso que suenen todas diferentes y genuinas
- Sistema de mejora continua de las plantillas: cómo incorporar el feedback de los clientes y las métricas de resolución para mejorar los marcos narrativos trimestralmente

5. FORMACIÓN DEL EQUIPO EN COMUNICACIÓN NARRATIVA
Diseña el programa de formación para el equipo de soporte:
- Taller de storytelling aplicado al soporte: ejercicio de role play donde el agente escucha la historia completa del cliente antes de responder
- Práctica de reescritura: el agente recibe una respuesta mecánica y debe transformarla en una respuesta narrativa y empática
- Uso de IA como coach de escritura: cómo los agentes pueden usar Claude para mejorar sus borradores de respuesta antes de enviarlos, con el prompt correcto para obtener sugerencias de empatía y claridad
- Calibración de calidad: cómo el equipo de QA evalúa la calidad narrativa de las respuestas, más allá de la resolución técnica del problema

6. MÉTRICAS DE LA EXPERIENCIA NARRATIVA
Define cómo medir el impacto del storytelling en soporte:
- CSAT y CES diferenciados por tipo de interacción: comparar la satisfacción de respuestas narrativas vs. respuestas estándar
- Tasa de reapertura de tickets: los clientes que reciben una respuesta narrativa de calidad reabren menos el ticket porque sienten que el problema fue entendido y no solo resuelto
- Conversión de detractor a promotor: seguimiento de clientes que dieron una puntuación baja en la primera encuesta y cómo evolucionan si el equipo aplica el arco de recuperación narrativo
- Análisis de sentimiento en las respuestas del cliente: cómo usar IA para detectar el cambio de tono emocional entre el primer mensaje del cliente y su respuesta tras recibir la contestación narrativa del agente
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar storytelling en atención al cliente para convertir quejas en lealtad con IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Personal branding y narrativa de autoridad para freelancers con IA',
                'description'      => 'Construye tu historia profesional, define tu posicionamiento de nicho y crea contenido de autoridad de forma sistemática usando IA para atraer clientes sin depender de plataformas de freelance.',
                'prompt_content'   => <<<'EOT'
Eres un experto en personal branding y marketing de contenidos para profesionales independientes. Necesito tu ayuda para construir mi marca personal como freelancer de forma estratégica, usando el storytelling para diferenciarte en un mercado saturado, atraer a los clientes ideales directamente y reducir la dependencia de plataformas como Upwork o Fiverr.

Contexto del freelancer:
- Profesional con dos a ocho años de experiencia en su campo (diseño, desarrollo, marketing, consultoría, redacción, etc.)
- Problema: depende de plataformas para conseguir trabajo, no tiene diferenciación clara y compite principalmente por precio
- Objetivo: construir una marca personal que genere demanda inbound de clientes de mayor valor en los próximos doce meses

Construcción del personal brand:

1. EL ORIGEN DE TU HISTORIA PROFESIONAL
Construye el relato de por qué haces lo que haces:
- La historia de origen: el evento, la decisión o la transformación que te llevó a especializarte en lo que haces; no una cronología del CV sino un momento narrativo con tensión y resolución
- El punto de inflexión: cuál fue el proyecto, el cliente o el fracaso que definió tu especialización actual y qué aprendiste de él
- La misión personal: más allá de hacer proyectos, qué cambio quieres provocar en tus clientes o en tu industria, formulado en una frase de quince palabras
- Cómo usar IA para explorar y refinar tu historia: ejercicio de preguntas que Claude te hace para ayudarte a descubrir la narrativa auténtica que hay detrás de tu trayectoria

2. POSICIONAMIENTO DE NICHO
Define el nicho estratégico donde ser el referente:
- La intersección de tres círculos: qué sabes hacer mejor que la mayoría, qué le importa al mercado y qué te satisface hacer de forma sostenida
- Nicho de audiencia vs. nicho de problema: posicionarte por a quién sirves (startups de fintech) o por qué problema resuelves (el onboarding de usuarios que abandona) es diferente y tiene implicaciones distintas en cómo te comunicas
- Test de validación del nicho: cómo saber si el nicho tiene suficiente demanda y si los clientes potenciales tienen presupuesto
- El nicho como historia: cómo narrar tu especialización de forma que el cliente ideal se reconozca inmediatamente en tu mensaje

3. LA PROPUESTA DE VALOR COMO RELATO
Transforma tu propuesta de valor en una narrativa persuasiva:
- De "soy diseñador UX con cinco años de experiencia" a "ayudo a startups B2B a reducir su tasa de churn mejorando el onboarding de nuevos usuarios": cómo reescribir tu presentación centrándola en el resultado del cliente
- El antes y el después: construye dos imágenes nítidas de cómo está el cliente antes de trabajar contigo y cómo está después
- La prueba social narrativa: cómo presentar un caso de éxito en 100 palabras que sea creíble, específico y que hable el idioma del cliente potencial
- Cómo usar IA para generar cinco versiones de tu propuesta de valor adaptadas a diferentes sectores o tipos de cliente

4. SISTEMA DE CONTENIDO DE AUTORIDAD
Diseña la máquina de contenido que te posiciona como referente:
- El pilar de contenido: elige un tema central en el que eres experto y desde el que todos tus contenidos se conectan; ese pilar es tu territorio intelectual
- Formatos por canal: artículo largo en LinkedIn (una vez por semana), hilo de Twitter o publicación en X (dos o tres veces por semana), newsletter propia (quincenal), podcast invitado o propio (mensual)
- El proceso de creación con IA: cómo generar ideas de contenido a partir de las preguntas frecuentes de tus clientes, transformarlas en borradores con Claude y enriquecerlas con tu perspectiva y experiencia personal
- Contenido de captación: los formatos que mejor funcionan para atraer clientes (casos de estudio, comparativas, guías prácticas, análisis de tendencias del sector)

5. CAPTACIÓN DE CLIENTES DE ALTO VALOR
Define la estrategia de desarrollo de negocio sin depender de plataformas:
- El embudo de autoridad: cómo el contenido que publicas genera visibilidad, la visibilidad genera conversaciones, las conversaciones generan proyectos de mayor valor
- Outreach narrativo: cómo contactar a empresas o decisores potenciales de forma que el mensaje se centre en su problema y no en tu perfil
- Red de referidores: cómo construir relaciones con profesionales complementarios (agencias, otros freelancers, asesores) que te generen referencias de forma sistemática
- Uso de IA para personalizar los mensajes de prospección: investigar la empresa o el decisor y generar un mensaje de primer contacto que demuestre que conoces su contexto

6. GESTIÓN Y ESCALABILIDAD DE LA PRÁCTICA FREELANCE
Diseña el negocio que te da libertad sin agotarte:
- Productización de servicios: de proyectos ad hoc a paquetes con entregables y precios fijos que se venden sin negociar
- Precio por valor: cómo dejar de cobrar por hora y empezar a cobrar por el resultado que aportas, y cómo tener esa conversación con el cliente
- Uso de IA para productividad: cómo reducir el tiempo de trabajo operativo (informes, propuestas, comunicaciones, investigación) para dedicar más tiempo al trabajo estratégico de alto valor
- Indicadores de salud del negocio freelance: tasa de clientes recurrentes, porcentaje de ingresos que vienen de referidos vs. búsqueda fría, margen neto por proyecto, horas facturables vs. horas totales trabajadas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir personal branding y narrativa de autoridad como freelancer con IA',
                'vote_score'       => 44,
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
