<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills432Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de branding y posicionamiento de marca con IA para marketing',
                'description'       => 'Construye una estrategia de marca completa con IA: desde el análisis competitivo hasta la definición de personalidad de marca, propuesta de valor y mensajes clave para cada audiencia.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de marca con más de una década de experiencia en branding para empresas de todos los tamaños. Tu metodología combina análisis competitivo riguroso, psicología del consumidor y construcción narrativa para crear marcas que conectan emocionalmente y se diferencian de forma sostenible.

**Contexto de la marca:**
- Nombre de la marca o empresa: [nombre]
- Sector o industria: [describe el sector]
- Producto o servicio principal: [describe brevemente]
- Años en el mercado: [número]
- Tamaño de la empresa: [startup / pyme / empresa mediana / corporación]
- Mercado objetivo: [local / nacional / europeo / global]
- Principales competidores que conoces: [lista 3-5 competidores]
- Propuesta de valor actual (cómo te describes hoy): [escribe tu descripción actual o "no definida"]
- Mayor frustración con la marca actual: [qué no funciona o qué quieres cambiar]

**estrategia de marca completa:**

1. **Análisis de posicionamiento competitivo:**
   Construye un mapa de posicionamiento del sector:
   - Identifica los 2 ejes de diferenciación más relevantes en tu categoría (precio/calidad, tradicional/innovador, generalista/especialista, etc.)
   - Posiciona a cada competidor nombrado en el mapa con una breve descripción de su territorio de marca
   - Identifica los espacios de oportunidad desocupados o subocupados
   - Define el territorio de posicionamiento recomendado para tu marca y por qué es defendible y relevante

2. **Arquitectura de marca:**
   Define la estructura fundamental de la marca:
   - Propósito (el "por qué" más profundo que va más allá del beneficio funcional)
   - Visión (el futuro que la marca quiere crear en el mundo)
   - Misión (cómo la marca contribuye a ese futuro hoy)
   - Valores (3-5 valores con su definición específica y un ejemplo de cómo se vive en la empresa)
   - Propuesta de valor única: la frase de una línea que resume qué ofreces, a quién y por qué es diferente

3. **Personalidad de marca (Brand Personality):**
   Define la marca como si fuera una persona:
   - 3 arquetipos de marca dominantes (de los 12 arquetipos de Jung) con justificación de por qué encajan
   - Rasgos de personalidad: 5 adjetivos que definen a la marca, con su contrario para claridad (ej. "audaz, no temerario")
   - Voz de marca: 4 características de cómo habla la marca, con ejemplos de frases que diría y frases que nunca diría
   - Tono según contexto: cómo varía el tono en situaciones de éxito, crisis, humor o comunicación corporativa

4. **Mensajes clave por audiencia:**
   Para cada segmento de audiencia relevante, define:
   - Perfil del segmento (demografía + psicografía en 3 líneas)
   - Mensaje principal: qué le dices a esta audiencia y cómo conecta con sus motivaciones
   - Puntos de prueba: 2-3 argumentos o evidencias que respaldan el mensaje
   - Canal preferido: dónde y cómo llegar a esta audiencia con ese mensaje
   Desarrolla esto para al menos 3 segmentos distintos.

5. **Narrativa de marca (Brand Story):**
   Construye la historia de la marca en formato de 3 actos:
   - Acto 1 — El origen: qué problema o injusticia del mundo motivó la creación de la marca (el conflicto original)
   - Acto 2 — La transformación: cómo la marca actúa para resolver ese conflicto (el método o la visión diferente)
   - Acto 3 — El futuro prometido: qué mundo o resultado crea para sus clientes (la transformación del cliente)
   La historia debe ser emocionalmente resonante, específica y creíble. Extensión: 200-300 palabras.

6. **Guía de implementación de la estrategia:**
   Cómo llevar la estrategia de marca a los touchpoints clave:
   - Actualización del copy del sitio web: qué secciones cambiar primero y cómo
   - Tono en redes sociales: 3 tipos de contenido que expresan la nueva personalidad de marca
   - Presentación corporativa: cómo abrir y cerrar de forma coherente con la nueva narrativa
   - Comunicación interna: cómo hacer que el equipo entienda y viva los valores de marca
   - Métricas de brand equity: qué medir para saber si la estrategia está funcionando (consideración de marca, NPS, share of voice)
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir una estrategia de marca diferenciada y coherente que guíe todas las comunicaciones de marketing y cree conexión emocional con el público objetivo.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Guía de estilo de código y arquitectura de marca para productos digitales con IA',
                'description'       => 'Crea el design system técnico y la guía de arquitectura que asegura la coherencia visual y funcional de un producto digital a medida que crece el equipo de desarrollo.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software frontend especializado en design systems y component libraries. Crearás una guía de estilo técnica completa que permita a cualquier desarrollador del equipo construir interfaces coherentes con la identidad de marca, sin depender de decisiones caso a caso.

**Contexto del proyecto:**
- Tipo de producto: [SaaS web / app móvil / e-commerce / plataforma / herramienta interna]
- Stack frontend: [React / Vue / Angular / Next.js / otro]
- Framework de CSS: [Tailwind / CSS Modules / Styled Components / SCSS / otro]
- ¿Existe un design system o librería de componentes?: [sí, cuál / no, se crea desde cero]
- Tamaño del equipo de desarrollo frontend: [número de personas]
- ¿Existe un equipo de diseño?: [sí, con qué herramienta trabajan (Figma/Sketch) / no]
- Identidad visual ya definida: [paleta de colores / tipografías / logo — describe lo que tienes]

**guía de estilo técnica a construir:**

1. **Tokens de diseño (Design Tokens):**
   Define el sistema de variables que conecta la identidad de marca con el código:
   - Tokens de color: primarios, secundarios, semánticos (éxito, error, alerta, info), superficies (background, surface, overlay)
   - Tokens de tipografía: familias de fuentes, escala de tamaños (xs a 5xl), pesos (light, regular, medium, semibold, bold), alturas de línea
   - Tokens de espaciado: escala de espaciado (4px base, escala 4-8-12-16-24-32-48-64-96)
   - Tokens de border radius, sombras y transiciones
   Proporciona los tokens en formato CSS custom properties y en formato JSON para consumo por herramientas de diseño.

2. **Componentes base (Atomic Design):**
   Define la estructura de componentes siguiendo la metodología Atomic:
   - Átomos: Button (variantes: primary, secondary, ghost, danger), Input, Select, Checkbox, Radio, Badge, Tag, Avatar, Icon
   - Moléculas: FormField (label + input + error), SearchBar, Dropdown, Modal, Toast/Alert, Card, DataTable row
   - Organismos: Header, Sidebar, DataTable completa, Form, EmptyState, ErrorBoundary
   Para cada componente: props API (nombre, tipo, descripción, valor por defecto), variants, estados (hover, focus, disabled, loading, error) y accesibilidad (ARIA labels mínimos).

3. **Sistema de grid y layout:**
   Define las reglas de composición de páginas:
   - Grid de 12 columnas con breakpoints responsivos (mobile: 320px, tablet: 768px, desktop: 1280px, wide: 1440px)
   - Máximos de ancho de contenido por tipo de página (dashboard, formulario, lectura, landing)
   - Reglas de spacing entre secciones y componentes
   - Patrones de layout predefinidos: sidebar + main content, two-column form, full-width hero + content grid

4. **Guía de uso de la marca en el producto:**
   Reglas específicas para mantener la coherencia de marca en la interfaz:
   - Cuándo y cómo usar el logo (tamaño mínimo, espacio de respeto, fondos permitidos)
   - Jerarquía tipográfica en la interfaz: H1 solo una vez por página, reglas para body y labels
   - Uso del color de marca como accent vs. como color de superficie
   - Ilustraciones y recursos gráficos: estilo coherente, fuentes permitidas y prohibidas
   - Fotografía en el producto: tratamiento de imágenes de usuario vs. imágenes editoriales

5. **Proceso de contribución al design system:**
   Cómo el equipo añade y mantiene componentes sin romper la coherencia:
   - Checklist para proponer un nuevo componente (cuándo crear uno nuevo vs. extender uno existente)
   - Proceso de revisión: quién aprueba, criterios de aprobación
   - Documentación mínima requerida para cada componente (Storybook story obligatoria)
   - Versionado semántico del design system: qué es un major, minor y patch change
   - Cómo gestionar breaking changes sin bloquear al equipo de producto

6. **Testing de accesibilidad y calidad visual:**
   Estándares mínimos de calidad que todo componente debe cumplir:
   - Nivel de conformidad WCAG: 2.1 AA como mínimo (contraste de color, navegación por teclado, ARIA)
   - Herramientas de testing automático recomendadas: axe-core, Lighthouse, Storybook a11y addon
   - Checklist de revisión visual antes de merge: responsive, dark mode si aplica, estados cubiertos
   - Cómo incorporar el testing de accesibilidad en el pipeline de CI/CD
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Crear la infraestructura técnica de design system que garantiza la coherencia de marca en el producto digital a medida que escala el equipo.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Sistema de identidad visual y paleta de marca con IA para diseñadores',
                'description'       => 'Crea un sistema de identidad visual completo: paleta cromática, tipografía, logo conceptual y aplicaciones de marca usando IA como co-creador y validador de decisiones estéticas.',
                'prompt_content'    => <<<'EOT'
Eres un director creativo especializado en identidad visual con experiencia en branding para startups, pymes y grandes marcas. Usarás la IA como herramienta de exploración, validación y documentación para crear sistemas de identidad visual coherentes y duraderos.

**Briefing de identidad:**
- Nombre de la marca: [nombre]
- Sector: [describe el sector]
- Público objetivo principal: [describe edad, estilo de vida, valores del buyer persona]
- Valores de marca que debe transmitir la identidad: [lista 3-5 valores]
- Personalidad de marca (si está definida): [describe cómo es la marca como persona]
- Competidores y cómo quieres diferenciarte visualmente de ellos: [describe]
- Referencias estéticas que te gustan (marcas, diseñadores, movimientos): [lista]
- Restricciones o elementos obligatorios: [colores corporativos existentes, icono que debe conservarse, etc.]
- Presupuesto para el proyecto de identidad: [bajo / medio / alto — orienta el nivel de extensión]

**sistema de identidad visual completo:**

1. **Estrategia cromática:**
   Define el sistema de color de la marca con rigor técnico y justificación semántica:
   - Color primario: HEX + RGB + CMYK + Pantone equivalente más cercano. Justificación psicológica y cultural del color elegido.
   - Color secundario o complementario: mismo formato. Relación armónica con el primario (complementario, análogo, triádico).
   - Colores de soporte neutros: 2-3 grises o tonos neutros para fondos y texto
   - Color de acento: para llamadas a la acción y elementos de énfasis
   - Paleta expandida de 3 tonos por color principal (claro, base, oscuro) para UI si aplica
   - Reglas de uso: qué porcentaje de cada color en las composiciones, qué combinaciones están prohibidas
   - Test de accesibilidad: verifica que el color de texto sobre cada fondo cumple WCAG AA (ratio mínimo 4.5:1)

2. **Sistema tipográfico:**
   Selecciona y justifica el sistema tipográfico de la marca:
   - Fuente principal (display): nombre, foundry, estilo, carácter de personalidad que aporta
   - Fuente de cuerpo (lectura): nombre, foundry, por qué es legible y complementa a la display
   - ¿Se necesita una fuente monoespaciada? (para marcas tech o productos digitales): sugerencia
   - Jerarquía tipográfica completa: H1 a H4, body, caption, label — tamaño en px y pt, interlineado, tracking
   - Alternativas gratuitas (Google Fonts) para cada fuente premium seleccionada
   - Reglas de uso: cuándo usar cada peso, qué combinaciones están permitidas, longitud máxima de línea

3. **Concepto de logotipo (brief para diseño):**
   Define el concepto creativo del logotipo con suficiente precisión para guiar el diseño:
   - Tipo de logo recomendado: logotipo (texto) / imagotipo (texto + símbolo) / isologo / isologotipo / monograma
   - Concepto del símbolo (si aplica): qué representa, de qué forma geométrica o metáfora parte, qué NO debe parecer
   - 3 direcciones creativas alternativas: describe brevemente cada concepto visual con sus referencias
   - Versiones necesarias: color sobre fondo claro, blanco sobre fondo oscuro, monocromático, favicon/icono app
   - Tamaño mínimo de uso y reglas de espacio de respeto
   - Genera los prompts de IA (Midjourney o DALL-E) para explorar los 3 conceptos visuales

4. **Elementos gráficos de soporte:**
   Define los recursos visuales que extienden la identidad más allá del logo:
   - Patrón o textura de marca: concepto, uso permitido (fondo / detalle / packaging)
   - Estilo de iconografía: trazo lineal / relleno sólido / duotono / ilustrativo — peso de trazo, corner radius
   - Estilo de ilustración (si aplica): referencias de estilo, paleta de uso, cuando usar vs. no usar
   - Recursos fotográficos: tipo de fotografía que encarna la marca (encuadre, luz, sujetos, tratamiento de color)
   - Motion y animación: si la marca aparece en digital, cómo se mueve (velocidad, easing, tipo de transición)

5. **Aplicaciones de marca prioritarias:**
   Guía de aplicación para los 5 soportes más importantes:
   - Tarjeta de visita (frente y dorso): composición, jerarquía de información, uso del color
   - Firma de email: estructura, tamaño de logo, tipografía, información mínima necesaria
   - Presentación corporativa (diapositiva de portada y diapositiva de contenido): grid, tipografía, colores
   - Perfil de redes sociales (foto de perfil + imagen de portada): dimensiones, composición, legibilidad en pequeño
   - Documento tipo: propuesta comercial o informe — márgenes, tipografía, colores de encabezado y footer

6. **Manual de marca (tabla de contenidos y portada):**
   Estructura del manual de identidad visual completo que entregarás al cliente:
   - Portada y contraportada: concepto visual
   - Índice de secciones con número de páginas estimado
   - Instrucciones de descarga y actualización del manual
   - Derechos de uso de fuentes y recursos incluidos
   - Contacto para consultas sobre uso correcto de la marca
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear un sistema de identidad visual completo y documentado para una marca, desde la paleta cromática hasta las aplicaciones y el manual de uso.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Propuesta de valor y narrativa de marca para equipos de ventas con IA',
                'description'       => 'Construye el pitch de marca perfecto: propuesta de valor irresistible, diferenciadores defendibles y narrativa de ventas que conecta emocionalmente con cada tipo de comprador.',
                'prompt_content'    => <<<'EOT'
Eres un experto en ventas consultivas y storytelling de marca con experiencia entrenando a equipos comerciales para comunicar el valor de forma que resuene con compradores racionales y emocionales. Crearás el arsenal de narrativa de marca que el equipo de ventas necesita para cerrar más y mejor.

**Contexto comercial:**
- Producto o servicio que vendes: [describe brevemente]
- Precio de venta (rango): [importe en €]
- Ciclo de venta: [transaccional (<1 semana) / consultivo (1-3 meses) / enterprise (>3 meses)]
- Perfil del comprador: [ICP — cargo, tipo de empresa, sector, tamaño]
- Las 3 principales razones por las que ganas acuerdos: [escribe lo que sabes o lo que te dicen los clientes]
- Las 3 principales razones por las que pierdes acuerdos: [objeciones o situaciones recurrentes]
- Competidores más frecuentes en el proceso: [lista]
- ¿Existe un pitch o presentación de ventas actual?: [sí / no — si sí, describe qué incluye]

**narrativa de marca y ventas:**

1. **Propuesta de valor única (UVP):**
   Construye la propuesta de valor en tres niveles de profundidad:
   - Nivel 1 — Elevator pitch (15 segundos): "Ayudamos a [cliente ideal] a [resultado deseado] mediante [método diferencial], a diferencia de [alternativa] que [debilidad de la alternativa]."
   - Nivel 2 — Propuesta completa (2 minutos): desarrolla el elevator pitch con el contexto del problema, el mecanismo de tu solución y la prueba de que funciona.
   - Nivel 3 — Caso de negocio (para compradores racionales): cuantifica el impacto en términos de ahorro de tiempo, reducción de costes o aumento de ingresos con ejemplos reales o estimaciones razonadas.
   Para cada nivel: versión definitiva + 2 variantes alternativas para diferentes contextos.

2. **Mapa de diferenciadores defendibles:**
   Identifica y construye los argumentos de diferenciación que la competencia no puede copiar fácilmente:
   - Diferenciador de proceso: cómo haces las cosas de forma única
   - Diferenciador de resultado: qué consiguen tus clientes que no consiguen con alternativas
   - Diferenciador de experiencia: cómo se sienten los clientes trabajando contigo
   - Diferenciador de comunidad o red: a qué acceden por trabajar contigo más allá del producto
   Para cada diferenciador: la afirmación, la prueba que la respalda y cómo presentarla sin sonar arrogante.

3. **Narrativa "antes y después" por perfil de comprador:**
   Para cada perfil de comprador clave (hasta 3):
   - El mundo ANTES (situación actual con el problema sin resolver): qué frustraciones vive, qué está en juego, qué está perdiendo
   - El mundo DESPUÉS (vida del cliente con tu solución implementada): qué ha cambiado, qué puede hacer ahora que antes no podía, cómo se siente
   - El puente (tu solución): cómo pasas al cliente del antes al después, cuál es el momento de cambio
   Esta narrativa debe hacer que el comprador se vea reflejado en el "antes" y desee el "después".

4. **Gestión de objeciones con narrativa de marca:**
   Para cada objeción frecuente identificada, crea una respuesta que refuerce la propuesta de valor:
   - "Es demasiado caro": cómo reencuadrar el precio como inversión con ROI cuantificado
   - "Ya tenemos algo similar": cómo destacar los diferenciadores sin atacar a la alternativa del cliente
   - "Necesitamos tiempo para decidir": cómo crear urgencia legítima sin presión artificial
   - "Hemos tenido malas experiencias antes": cómo usar la historia de cambio de otros clientes para reconstruir la confianza
   Para cada objeción: respuesta completa + pregunta de seguimiento para avanzar la conversación.

5. **Herramientas de ventas con narrativa de marca:**
   Versión adaptada de la narrativa para cada touchpoint comercial:
   - One-pager: estructura de 1 página A4 con los elementos clave de la propuesta de valor
   - Email de primer contacto en frío: asunto + cuerpo de 100 palabras que genere respuesta
   - Propuesta comercial: estructura recomendada (el problema → tu solución → por qué tú → prueba → inversión → siguientes pasos)
   - Presentación de ventas (10 diapositivas): título y contenido de cada diapositiva con el arco narrativo completo
   - Testimonial template: cómo pedir y estructurar un caso de éxito de cliente para máximo impacto

6. **Entrenamiento del equipo en la narrativa:**
   Plan para que todo el equipo de ventas interiorice y use la narrativa de forma natural:
   - Ejercicio de roleplay: cómo practicar el elevator pitch en 10 minutos al día
   - Test de coherencia: 5 preguntas que cualquier miembro del equipo debe poder responder sin dudar
   - Cómo adaptar la narrativa de marca al estilo personal del comercial sin perder la esencia
   - Proceso de actualización trimestral de la narrativa basado en feedback del mercado
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir la narrativa de marca y la propuesta de valor que el equipo de ventas necesita para comunicar diferenciación y cerrar más acuerdos.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Naming y posicionamiento de producto con IA para product managers',
                'description'       => 'Genera, evalúa y valida el nombre de tu producto o funcionalidad con IA: desde la exploración creativa hasta la verificación de disponibilidad y el test con usuarios reales.',
                'prompt_content'    => <<<'EOT'
Eres un experto en naming de productos y posicionamiento con experiencia en el lanzamiento de productos digitales en mercados competitivos. Crearás un proceso riguroso y creativo para encontrar el nombre y el posicionamiento óptimo para un producto o funcionalidad nueva.

**Contexto del producto:**
- Tipo de producto: [SaaS / app móvil / feature de un producto existente / herramienta interna / producto físico]
- Descripción breve de qué hace el producto: [2-3 frases]
- Usuario objetivo (persona): [describe quién lo usará]
- Beneficio principal que ofrece: [el resultado más importante para el usuario]
- Valor diferencial respecto a alternativas: [en qué es único]
- Mercado geográfico: [España / mercado hispanohablante / inglés / internacional multilingüe]
- Marca paraguas (si existe): [nombre de la empresa o marca madre]
- Restricciones de naming: [longitud máxima / idioma / palabras prohibidas / debe incluir algo específico]
- Presupuesto para registro de marca: [ninguno / bajo (<500€) / medio (500-2000€) / alto]

**proceso de naming completo:**

1. **Briefing semántico — el territorio de la marca:**
   Define el espacio semántico en el que vivirá el nombre:
   - Palabras raíz: 10 palabras en el idioma objetivo que capturen la esencia del producto
   - Campos semánticos asociados: 5 universos de referencia (naturaleza, tecnología, movimiento, tiempo, etc.)
   - Palabras prohibidas: términos que no deben aparecer (por asociaciones negativas, competidores, palabras gastadas en el sector)
   - El "sabor" del nombre: qué debe transmitir fonéticamente (energía / calma / precisión / calidez / ingenio)

2. **Generación de candidatos (mínimo 30 nombres):**
   Genera nombres en las siguientes categorías, con 5-8 candidatos por categoría:
   - Descriptivos: nombres que explican qué hace el producto (ventaja: claridad, desventaja: genericidad)
   - Evocadores: nombres que evocan el beneficio o la emoción sin describirlo literalmente
   - Inventados (portmanteau o neologismos): combinaciones de palabras o raíces que crean una palabra nueva
   - Metafóricos: nombres tomados de otro dominio (naturaleza, mitología, geometría) por analogía
   - Nombres de persona o lugar: si aplica al contexto
   - Acrónimos o abreviaturas: solo si resultan naturales, no forzados
   Para cada nombre: la pronunciación, la etimología o raíz, y en una frase por qué funciona.

3. **Filtros de evaluación (scoring de candidatos):**
   Evalúa los 30+ candidatos con un sistema de puntuación de 6 criterios (0-5 puntos cada uno):
   - Memorabilidad: ¿se recuerda fácilmente después de escucharlo una vez?
   - Pronunciabilidad: ¿se dice bien en el idioma objetivo? ¿y en inglés si hay ambición global?
   - Ortografía intuitiva: ¿se escribe como suena?
   - Disponibilidad potencial: ¿parece un término muy genérico (difícil de registrar) o suficientemente único?
   - Relevancia: ¿conecta con el beneficio o la personalidad del producto?
   - Escalabilidad: ¿funcionará si el producto crece o evoluciona?
   Presenta los 10 finalistas ordenados por puntuación total.

4. **Verificación de disponibilidad (checklist):**
   Para cada finalista, ejecuta estas comprobaciones antes de avanzar:
   - Dominio .com y .es: verificar disponibilidad en WHOIS (herramienta: namecheckr.com)
   - Marca registrada: búsqueda en EUIPO (marcas europeas) y OEPM (marcas españolas) — instrucciones paso a paso
   - Redes sociales: disponibilidad del handle en Instagram, X, LinkedIn, TikTok
   - Búsqueda semántica: resultados de Google para el nombre solo y el nombre + sector
   - Verificación lingüística: ¿tiene significado negativo, cómico o inapropiado en otros idiomas relevantes?

5. **Test cualitativo con usuarios:**
   Diseña un mini-test para validar el naming con usuarios reales antes de decidir:
   - Encuesta de 5 preguntas para 20-30 personas del target (formato para Typeform o Google Forms)
   - Preguntas de asociación espontánea: "¿Qué crees que hace un producto llamado [nombre]?"
   - Preguntas de preferencia entre 3 finalistas con justificación abierta
   - Test de recuerdo diferido: mostrar los nombres, esperar 24h, preguntar cuáles recuerdan
   - Cómo analizar los resultados y qué umbral de preferencia es suficiente para elegir

6. **Posicionamiento del producto (statement de posicionamiento):**
   Con el nombre elegido, construye el posicionamiento completo:
   - Para [segmento de clientes objetivo] que [necesidad o problema],
   - [Nombre del producto] es un [categoría del producto]
   - que [beneficio diferencial clave].
   - A diferencia de [alternativa principal],
   - nuestro producto [diferenciador único y defendible].
   Desarrolla 3 versiones de este statement con distintos énfasis para usarlo internamente, en el sitio web y en presentaciones de inversores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Encontrar el nombre perfecto para un producto o funcionalidad con un proceso riguroso de generación, evaluación y validación con usuarios.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding e identidad de marca empleadora con IA para RRHH',
                'description'       => 'Construye una propuesta de valor para el empleado (EVP) auténtica y diferenciada, y desarrolla la estrategia de employer branding para atraer y retener el talento que tu empresa necesita.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en employer branding y atracción de talento con experiencia en la construcción de marcas empleadoras que compiten eficazmente en el mercado de talento, especialmente en sectores donde los perfiles son escasos. Crearás una estrategia de employer branding completa y accionable.

**Contexto de la organización:**
- Nombre de la empresa: [nombre]
- Sector o industria: [describe]
- Número de empleados: [número]
- Perfiles que más necesitas atraer en los próximos 12 meses: [lista los 3 perfiles críticos]
- Principales competidores en el mercado de talento (no necesariamente del sector): [lista]
- Puntos fuertes que ya te mencionan los empleados satisfechos: [qué dicen que les gusta]
- Principales áreas de mejora percibidas: [qué dicen que no funciona bien]
- Cultura organizacional en 3 palabras: [describe]
- ¿Existe una cultura de diversidad e inclusión explícita?: [sí / en desarrollo / no]

**estrategia de employer branding completa:**

1. **Diagnóstico de la marca empleadora actual:**
   Evalúa el punto de partida de la marca empleadora:
   - Cómo auditar la presencia actual en Glassdoor, LinkedIn y portales de empleo
   - Qué preguntar en una encuesta de employer branding a empleados actuales (10 preguntas)
   - Cómo analizar las entrevistas de salida para extraer señales de la marca empleadora
   - Cómo hacer un benchmark competitivo: qué miran los candidatos de tu sector antes de aplicar
   Proporciona las encuestas y checklists listos para usar.

2. **Employee Value Proposition (EVP):**
   Construye la propuesta de valor para el empleado en 5 dimensiones:
   - Compensación y beneficios: salario, variable, beneficios diferenciales reales (no los genéricos de "buen ambiente")
   - Desarrollo y carrera: oportunidades de crecimiento concretas, formación, movilidad interna
   - Propósito e impacto: qué está construyendo la empresa y cómo contribuye cada empleado a algo más grande
   - Cultura y comunidad: cómo se trabaja en el día a día, cómo se toman decisiones, qué tipo de personas hay
   - Flexibilidad y bienestar: conciliación, trabajo remoto, carga de trabajo, autonomía
   Para cada dimensión: afirmación de la EVP + prueba que la respalda (dato, testimonio, política concreta).
   Síntesis: una frase de EVP de 15-20 palabras que resume por qué los mejores talentos eligen esta empresa.

3. **Mensajes por perfil de talento objetivo:**
   Para cada perfil crítico identificado:
   - Qué valora ese perfil al buscar trabajo (motivadores de este tipo de profesional)
   - Qué teme ese perfil (miedos y objeciones antes de aplicar o aceptar una oferta)
   - Mensaje de employer branding adaptado: qué aspecto de la EVP resonará más con este perfil
   - Canales donde este perfil busca trabajo y se informa sobre empleadores
   - Oferta de empleo tipo para este perfil: estructura, tono, qué incluir y qué evitar

4. **Plan de contenidos de employer branding:**
   Calendario trimestral de contenidos para redes sociales y canales de atracción:
   - Tipos de contenido: día a día en la empresa, celebraciones de logros del equipo, historias de empleados, tour por la oficina/remoto, proceso de selección, onboarding, formación, beneficios
   - Distribución por canal: LinkedIn (contenido profesional y de cultura), Instagram (contenido visual y de cultura), página de carreras (contenido evergreen), Glassdoor (respuestas a reseñas)
   - Frecuencia de publicación recomendada por canal
   - 10 ideas de contenido específicas con título, formato y canal para empezar esta semana

5. **Proceso de selección como experiencia de marca:**
   Cada punto de contacto con el candidato comunica la marca empleadora:
   - Anuncio de empleo: cómo redactarlo para atraer al perfil ideal y filtrar a los que no encajan
   - Respuesta de confirmación de candidatura: qué comunicar para generar expectativa positiva
   - Proceso de entrevistas: cómo estructurarlo para que el candidato se lleve una impresión excelente aunque no sea seleccionado
   - Carta de oferta: cómo presentar la oferta de forma que refuerce la decisión de aceptar
   - Rechazo con dignidad: cómo comunicar un rechazo que deje al candidato con buena impresión de la empresa

6. **Métricas de employer branding:**
   Define los KPIs del programa con objetivos y frecuencia de medición:
   - Tasa de aceptación de ofertas: objetivo y cómo mejorarlo
   - Tiempo hasta cubrir vacantes (Time to Fill): objetivo y palancas de mejora
   - Puntuación en Glassdoor o plataformas equivalentes: cómo gestionarla activamente
   - Net Promoter Score del empleado (eNPS): cómo medirlo trimestralmente
   - Coste por contratación (CPH): cómo reducirlo con el employer branding
   - Ratio de candidatos orgánicos vs. de pago: hacia dónde debe moverse con una EVP fuerte
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir una propuesta de valor para el empleado y una estrategia de employer branding que atraiga y retenga el talento crítico en un mercado competitivo.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valoración y monetización de activos de marca con IA para finanzas',
                'description'       => 'Aprende a cuantificar el valor económico de la marca como activo intangible, incorporarlo correctamente en estados financieros y usarlo como palanca de negociación en operaciones corporativas.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en valoración de empresas e intangibles con experiencia en operaciones de M&A, due diligence y reporting financiero bajo NIIF y GAAP. Crearás un análisis de valoración de marca completo y los marcos de referencia para su gestión como activo estratégico.

**Contexto financiero:**
- Tipo de empresa: [privada / cotizada / startup pre-revenue / en proceso de M&A]
- Sector: [describe]
- Facturación anual: [rango en €]
- ¿La marca genera ingresos directos? (licencias, royalties, franquicias): [sí/no]
- Propósito de la valoración: [operación M&A / reporting NIIF / negociación bancaria / seguro de marca / conocimiento interno]
- ¿Existe algún intento previo de valorar la marca?: [sí, con qué resultado / no]
- Datos financieros disponibles: [P&L de los últimos 3-5 años / proyecciones / solo histórico de 1 año]

**valoración y gestión financiera de la marca:**

1. **Metodologías de valoración de marca:**
   Explica y compara los 4 enfoques principales:
   - Método de royalties (Relief from Royalty): la marca vale el flujo de royalties que te ahorras por no tener que licenciarla. Fórmula, tasa de royalty de referencia por sector y cómo aplicarlo.
   - Método de prima de precio: cuánto más paga el consumidor por el producto de marca vs. el genérico equivalente. Cómo calcular la prima y proyectarla.
   - Método de ingresos económicos diferenciales: diferencia de ingresos o márgenes atribuible exclusivamente a la marca vs. un competidor sin marca. Proceso de cálculo.
   - Método de coste de reconstrucción: cuánto costaría construir la misma marca desde cero (inversión histórica en marketing + tiempo de construcción). Limitaciones de este enfoque.
   Para cada metodología: cuándo es más apropiada, qué datos necesita y cuáles son sus debilidades.

2. **Aplicación del método de royalties paso a paso:**
   Guía de cálculo detallada para el caso concreto descrito:
   - Identificación de los ingresos atribuibles a la marca (revenue stream correcto)
   - Selección de la tasa de royalty de mercado: bases de datos de referencia (RoyaltyStat, ktMINE) y rangos por sector
   - Proyección de ingresos a 5-10 años con tasa de crecimiento justificada
   - Aplicación de la tasa de royalty sobre los ingresos proyectados
   - Descuento al presente (DCF): selección de la tasa de descuento adecuada (WACC o tasa ajustada por riesgo específico de intangible)
   - Valor terminal y su peso en la valoración total
   - Presentación del rango de valoración (escenario conservador / base / optimista)

3. **Factores cualitativos que afectan al valor de marca:**
   Scoring de los activos intangibles que multiplican o reducen el valor calculado:
   - Fortaleza legal: registro de marca en los mercados relevantes, historial de defensión
   - Reconocimiento de mercado: share of voice, consideración de marca, NPS
   - Diversificación de ingresos: dependencia de un canal, cliente o producto
   - Duración y renovabilidad: plazo de registro, riesgo de obsolescencia
   - Coherencia y consistencia: ejecución de la marca en todos los touchpoints
   Sistema de scoring de 0 a 100 con los pesos de cada factor y cómo afecta al multiplicador de valor.

4. **Registro contable y reporting financiero de la marca:**
   Cómo tratar la marca en los estados financieros según la normativa aplicable:
   - Diferencia entre marca adquirida (se activa) y marca generada internamente (no se activa en NIIF)
   - PPA (Purchase Price Allocation) en una adquisición: cómo identificar y valorar la marca como activo adquirido
   - Test de deterioro (impairment test) anual: cómo realizarlo y qué desencadena un deterioro
   - Nota de información sobre intangibles en las cuentas anuales: qué revelar
   - Impacto fiscal de la amortización de la marca adquirida

5. **Marca como garantía y palanca de financiación:**
   Cómo usar el valor de marca para acceder a mejores condiciones de financiación:
   - Pignoración de marcas: cómo funciona, qué entidades financieras lo aceptan, condiciones habituales
   - Sale and leaseback de la marca: estructura de la operación y casos de uso
   - Licencias de marca como fuente de ingresos: cómo monetizar la marca en mercados donde no operas directamente
   - Cómo presentar el valor de la marca a un banco o inversor para mejorar las condiciones

6. **Gestión del riesgo de valor de marca:**
   Los eventos que pueden destruir valor de marca rápidamente y cómo protegerse:
   - Crisis reputacionales: protocolo de gestión y estimación del impacto en el valor de marca
   - Infracción de marca por terceros: proceso de vigilancia y defensa legal
   - Dilución de marca por extensión excesiva: cuándo una extensión de línea daña la marca madre
   - Seguro de marca: qué cubre, coste aproximado y cuándo tiene sentido contratarlo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Cuantificar el valor económico de la marca como activo intangible para operaciones corporativas, reporting financiero y negociación con inversores.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección legal de marca e identidad corporativa con IA para abogados',
                'description'       => 'Diseña una estrategia integral de protección de la marca: registro internacional, monitorización de infracciones, defensa ante el EUIPO y gestión de conflictos de marca en el entorno digital.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especialista en propiedad industrial e intelectual con experiencia en registro y defensa de marcas ante la OEPM, el EUIPO y la OMPI. Crearás una estrategia de protección de marca completa adaptada a las necesidades y recursos de la organización.

**Contexto de la marca a proteger:**
- Nombre o denominación de la marca: [nombre]
- Elementos visuales a proteger: [logo / colores / forma del producto / slogan / todos]
- Sectores o categorías de productos/servicios: [Niza 12: lista las clases relevantes]
- Mercados donde opera o planea operar: [España / Europa / USA / global]
- ¿Existe registro previo? [sí, en qué territorios y clases / no]
- Inversión anual en la marca (marketing + desarrollo): [rango en €]
- ¿Ha habido conflictos o infracciones previas?: [sí, describe / no]
- Presupuesto para protección: [muy limitado (<2.000€/año) / moderado (2.000-10.000€) / amplio (>10.000€)]

**estrategia integral de protección de marca:**

1. **Auditoría de protección actual:**
   Diagnóstico del estado de protección de la marca:
   - Búsqueda de anterioridades: cómo realizar una búsqueda en EUIPO TMview, OEPM y OMPI antes de cualquier inversión
   - Análisis de cobertura actual: qué clases de Niza están registradas, en qué territorios y con qué vencimientos
   - Identificación de gaps de protección: clases no registradas donde la marca tiene actividad o riesgo
   - Evaluación de la calidad del registro: ¿la descripción de productos/servicios es suficientemente amplia?
   - Mapa de riesgos: marcas similares o idénticas en clases colindantes que podrían generar conflicto

2. **Estrategia de registro (plan de protección):**
   Plan de registro adaptado al presupuesto indicado:
   - Priorización de territorios: dónde registrar primero según los mercados actuales y el plan de expansión
   - Selección de clases de Niza: cuáles registrar, con qué nivel de especificidad (amplia vs. restrictiva)
   - Vía de registro más eficiente según el alcance geográfico:
     - Solo España: OEPM (coste estimado y plazos)
     - Europa: EUIPO marca de la UE (coste estimado y plazos)
     - Global: Sistema de Madrid vía OMPI (coste estimado, plazos y países designados recomendados)
   - Registro de elementos adicionales: logo (marca figurativa), slogan, colores si son distintivos suficientes
   - Calendario de renovaciones: vencimientos actuales y sistema de alertas

3. **Monitorización de infracciones (vigilancia de marca):**
   Sistema de vigilancia activa para detectar infracciones antes de que se consoliden:
   - Vigilancia de nuevos registros: servicios de alerta (EUIPO, Watch, Markify, Corsearch) y cómo configurarlos
   - Vigilancia en el mercado digital: cómo monitorizar el uso no autorizado de la marca en Google, Amazon, redes sociales y marketplaces
   - Vigilancia de nombres de dominio: servicios de alerta de registro de dominios confundibles
   - Frecuencia y protocolo de revisión: qué revisar semanalmente, mensualmente y con qué herramientas gratuitas o de bajo coste
   - Criterios de alerta: qué nivel de similitud activa una acción legal vs. un simple seguimiento

4. **Protocolo de respuesta ante infracciones:**
   Guía de actuación graduada cuando se detecta una infracción:
   - Nivel 1 — Infracción menor (uso no autorizado en redes sociales): carta de cese y desistimiento (plantilla lista para usar), proceso de denuncia en la plataforma
   - Nivel 2 — Infracción grave (competidor usando marca similar): carta de cese con plazo, negociación de acuerdo de coexistencia, criterios para escalar
   - Nivel 3 — Infracción flagrante (copia directa o daño reputacional): medidas cautelares urgentes, demanda por violación de marca, gestión de comunicación de la crisis
   Para cada nivel: plazo de respuesta recomendado, costes estimados y probabilidad de éxito.

5. **Defensa ante el EUIPO (oposición y nulidad):**
   Guía práctica para dos procedimientos clave:
   - Oposición a nuevos registros: cuándo oponerse, plazo (3 meses desde publicación), fundamentos de oposición (identidad / similitud de signos + similitud de productos/servicios), proceso ante el EUIPO, costes y plazos
   - Solicitud de nulidad: cuándo es la mejor opción, tipos de causas (absolutas vs. relativas), proceso y coste, probabilidad de éxito según el fundamento
   - Cómo preparar la argumentación: qué documentos acreditan el uso previo y la notoriedad de la marca

6. **Marca en el entorno digital — protección específica:**
   Los riesgos específicos de la identidad de marca en el ecosistema digital:
   - Dominio squatting: qué hacer si alguien registró tu marca como dominio. UDRP (procedimiento de la OMPI) vs. demanda judicial: cuándo usar cada vía
   - Social media squatting: proceso de reclamación de perfiles impostores en cada plataforma
   - SEA (Search Engine Advertising) con términos de marca: cuándo la puja de un competidor por tu marca es infracción y cómo actuar
   - Gestión de la marca en marketplaces (Amazon, Etsy): Brand Registry de Amazon, detección de vendedores no autorizados y proceso de reclamación
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar una estrategia integral de protección legal de la marca: registro, vigilancia, defensa ante el EUIPO y gestión de infracciones en el entorno digital.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Voz y tono de marca en atención al cliente con IA para equipos de CS',
                'description'       => 'Define y aplica la voz de marca de forma coherente en todas las comunicaciones de soporte, para que cada interacción con el cliente refuerce la identidad de la empresa y genere lealtad.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en Customer Experience (CX) y comunicación de marca con experiencia en la creación de guías de voz y tono para equipos de soporte. Tu objetivo es asegurar que cada conversación de atención al cliente, independientemente del canal o el agente, transmita la identidad de la marca de forma coherente y auténtica.

**Contexto del equipo:**
- Marca o empresa: [nombre]
- Descripción de la marca en 3 palabras: [palabras que definen la personalidad]
- Sector y tipo de cliente: [describe]
- Canales de soporte donde se comunican con clientes: [email / chat / WhatsApp / teléfono / redes sociales / todos]
- Tamaño del equipo de CS: [número de agentes]
- Perfil del cliente típico: [describe quién es el cliente en 2-3 frases]
- Situaciones de soporte más frecuentes: [lista los 5 tipos de contacto más comunes]
- ¿Existe ya alguna guía de comunicación?: [sí / no / hay intentos informales]

**guía de voz y tono de marca para CS:**

1. **Definición de la voz de marca:**
   La voz es constante; el tono varía según el contexto. Define ambos:
   - Voz de marca: 4 atributos de personalidad con su definición específica en el contexto de CS
     Formato para cada atributo: [atributo] — Esto significa [definición]. En CS, sí decimos [ejemplo concreto]. Nunca decimos [ejemplo de lo que no se hace].
   - Mapa de tono: cómo varía el tono según 4 situaciones típicas:
     * Consulta estándar (tono: servicial y eficiente)
     * Problema técnico o error del producto (tono: empático y resolutivo)
     * Cliente frustrado o enfadado (tono: calmado, empático y orientado a la solución)
     * Celebración o feedback positivo (tono: cálido y genuino)

2. **Las 10 reglas de oro de la comunicación de la marca:**
   Principios concretos que todo agente debe interiorizar:
   - Reglas de inicio de conversación (cómo saluda la marca)
   - Reglas de personalización (uso del nombre, referencia al historial del cliente)
   - Reglas de empatía (cómo reconocer el problema sin exagerar ni minimizar)
   - Reglas de disculpa (cuándo y cómo disculparse de forma genuina)
   - Reglas de negativos (palabras y frases prohibidas y sus alternativas)
   - Reglas de cierre (cómo terminar cada conversación de forma que deje al cliente con buenas sensaciones)
   Para cada regla: descripción + ejemplo de aplicación + contraejemplo.

3. **Diccionario de voz de marca:**
   Vocabulario activo (palabras que usamos) y vocabulario pasivo (palabras que evitamos):
   - Lista de 20 palabras o expresiones que definen la forma de hablar de la marca
   - Lista de 20 palabras o expresiones que la marca nunca usa y su alternativa preferida
   - Fórmulas de cortesía preferidas vs. fórmulas genéricas que evitar
   - Emojis: si se usan, cuáles y en qué contextos; si no se usan, por qué y en qué casos puede ser necesario hacer una excepción
   - Signos de puntuación: política de uso de exclamaciones, puntos suspensivos y negritas

4. **Templates de respuesta con voz de marca:**
   Redacta (o mejora si existen) los 10 templates más usados aplicando la voz definida:
   - Confirmación de recepción de ticket
   - Solicitud de información adicional
   - Actualización de estado de pedido en tránsito
   - Retraso en la entrega (la empresa no tiene culpa directa)
   - Error del producto o servicio (la empresa tiene responsabilidad)
   - Resolución de incidencia con solución satisfactoria
   - Resolución de incidencia sin la solución ideal para el cliente
   - Respuesta a reseña positiva
   - Respuesta a reseña negativa (pública)
   - Encuesta de satisfacción post-resolución
   Cada template: versión para email + versión adaptada para chat (más corta y conversacional).

5. **Formación del equipo en la voz de marca:**
   Plan de incorporación de la guía de voz al trabajo diario del equipo:
   - Sesión de formación inicial de 2 horas: agenda y ejercicios prácticos
   - Ejercicio de reescritura: 5 mensajes reales con tono incorrecto que el equipo debe mejorar
   - Proceso de revisión entre pares: cómo implementar la revisión de calidad de comunicaciones sin crear fricción
   - Checklist de revisión antes de enviar un mensaje de alta importancia (reclamación, disculpa, oferta de compensación)
   - Cómo onboardear a nuevos agentes en la voz de marca en menos de 1 semana

6. **Evaluación y mejora continua de la voz de marca:**
   Cómo medir si el equipo comunica con coherencia de marca:
   - Revisión mensual aleatoria de conversaciones: criterios de evaluación objetivos (rúbrica de 10 puntos)
   - CSAT ligado a la calidad de comunicación (no solo a la resolución del problema)
   - Proceso de actualización de la guía: quién la actualiza, con qué frecuencia y ante qué desencadenante
   - Cómo compartir los mejores ejemplos de comunicación de marca para inspirar al equipo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear una guía de voz y tono de marca para el equipo de CS que asegure coherencia en todas las comunicaciones de soporte y refuerce la identidad de la empresa.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Identidad de marca personal para freelancers con IA',
                'description'       => 'Construye tu marca personal como freelance: define tu propuesta de valor única, tu nicho de especialización, tu voz y tu presencia digital para atraer a los clientes ideales y cobrar lo que mereces.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de marca personal y consultor de negocios para profesionales independientes con experiencia ayudando a freelancers a pasar de ser "uno más" en su sector a tener una agenda llena de proyectos ideales y una lista de espera. Crearás un sistema completo de construcción de marca personal adaptado a la realidad del trabajo autónomo.

**Perfil del freelance:**
- Nombre y apellidos (o nombre profesional): [nombre]
- Especialidad principal: [describe qué haces]
- Años de experiencia profesional total: [número]
- Años como freelance: [número]
- Tipo de clientes con los que más disfrutas trabajar: [describe al cliente ideal]
- Servicios que ofreces actualmente: [lista]
- El servicio que más te gusta hacer y en el que eres más bueno: [cuál]
- Tarifa actual (hora o proyecto): [importe en €]
- Presencia digital actual: [sitio web / LinkedIn / redes sociales / ninguna — describe el estado]
- El mayor problema al conseguir clientes: [describe tu frustración principal]

**sistema de marca personal completa:**

1. **Posicionamiento y definición del nicho:**
   El error más común del freelance es intentar servir a todos. Define tu nicho de forma que atraiga a los mejores clientes sin cerrar la puerta innecesariamente:
   - Análisis de tu ventaja diferencial: en qué intersección de habilidades, experiencia y pasión eres único (diagrama de Ikigai aplicado al freelance)
   - Definición del nicho: combinación de especialidad + sector + tipo de problema que resuelves (no solo el servicio que ofreces)
   - Test del nicho: 5 preguntas para validar que el nicho es viable (hay suficiente demanda, clientes con presupuesto, diferenciación posible)
   - El headline de tu marca: una frase de 10-15 palabras que define qué haces, para quién y qué resultado consiguen. Genera 5 variantes y explica las ventajas de cada una.

2. **Propuesta de valor personal:**
   Lo que te hace diferente de los cientos de freelancers con las mismas habilidades:
   - Inventario de diferenciadores: experiencias únicas, combinaciones de habilidades raras, resultados excepcionales obtenidos, método propio de trabajo
   - La "firma metodológica": tu proceso de trabajo con nombre propio (no haces "diseño web", haces el "Método X para tiendas online que venden en 30 días")
   - Historia de origen: el momento o la experiencia que te llevó a especializarte en esto — cuéntala de forma que resuene con tu cliente ideal
   - Propuesta de valor en 3 niveles: elevator pitch (10 segundos), explicación completa (2 minutos), caso de negocio para cliente racional (ROI cuantificado)

3. **Identidad visual personal:**
   La presencia visual de tu marca personal:
   - Fotografía profesional: qué tipo de foto transmite la personalidad de tu marca (formal / cercana / en acción), cómo hacerla sin estudio (instrucciones para una sesión casera de calidad)
   - Paleta de colores: 2-3 colores que expresan tu personalidad profesional con su significado, los HEX sugeridos y cómo usarlos
   - Tipografía: 1 fuente para headings (carácter y dónde encontrarla gratis) + 1 para cuerpo de texto
   - Estilo visual general: elementos gráficos, tratamiento de imágenes, recursos visuales que te representan
   - Elementos a evitar: qué no usar para no sonar genérico en tu sector

4. **Presencia digital optimizada:**
   Los 3 canales más importantes para un freelance y cómo optimizarlos:
   - Perfil de LinkedIn: headline irresistible, sección "Acerca de" en primera persona que vende, experiencia redactada en clave de resultados para el cliente, sección de servicios configurada, URL personalizada, foto y banner coherentes con la marca
   - Sitio web (estructura mínima viable): home (propuesta de valor + quién eres + servicios + CTA), servicios (página por servicio principal con precio o "desde"), sobre mí (historia + credenciales + foto), portafolio (3-5 casos de éxito en formato problema-solución-resultado), contacto (formulario simple)
   - Canal de contenidos elegido: cuál tiene más sentido para tu nicho (LinkedIn / newsletter / podcast / YouTube / blog) y por qué

5. **Sistema de atracción de clientes ideales:**
   Cómo hacer que los clientes correctos lleguen solos con tu marca personal:
   - Estrategia de contenidos: 3 tipos de post que posicionan tu expertise y atraen tu cliente ideal (educación, punto de vista propio, casos de éxito sin revelar datos confidenciales)
   - Frecuencia realista: cuánto contenido publicar siendo realista con el tiempo disponible
   - Proceso de networking digital: cómo conectar con decisores de tu nicho en LinkedIn sin parecer spam
   - Estrategia de testimonios: cómo pedir, qué preguntar y cómo usar los testimonios de clientes para generar confianza
   - Sistema de referidos: cómo convertir a tus mejores clientes en prescriptores activos de tu marca

6. **Plan de acción a 90 días:**
   Hoja de ruta concreta para construir la marca personal desde cero (o relanzarla):
   - Semanas 1-2: posicionamiento y mensajes (definir nicho, redactar headline, escribir la historia de origen)
   - Semanas 3-4: identidad visual y perfiles (foto profesional, actualizar LinkedIn, crear plantillas de contenido)
   - Semanas 5-8: presencia web (sitio mínimo viable con 3-5 páginas, integrar formulario de contacto)
   - Semanas 9-12: contenidos y networking (primeras 12 publicaciones, conectar con 50 decisores del nicho, pedir 3 testimonios a clientes anteriores)
   Para cada semana: 2-3 tareas concretas con tiempo estimado. Total: no más de 3-4 horas semanales adicionales a la carga de trabajo habitual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir una marca personal diferenciada como freelance para atraer a los clientes ideales, cobrar más por el trabajo y dejar de competir solo por precio.',
                'vote_score'        => 50,
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
