<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills174Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Copywriting de respuesta directa',
                'description'       => 'Escribe copy que vende: los principios del copywriting de respuesta directa aplicados a landing pages, emails y anuncios que convierten visitantes en clientes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un copywriter de respuesta directa con experiencia escribiendo copy para lanzamientos de producto, emails de nurturing y landing pages que han generado millones en ventas. Necesito que me ayudes a escribir copy que convierta, aplicando los principios del copywriting de respuesta directa a mi negocio.

**Contexto de mi negocio:**
- Producto o servicio que vendo: [describe qué vendes]
- Precio y modelo de negocio: [precio y si es pago único / suscripción / servicio]
- Perfil del cliente ideal: [cargo, sector, problema principal, situación actual]
- Principal transformación que ofreces: [de X estado a Y estado]
- Mayor objeción del cliente: [precio / tiempo / desconfianza / no prioridad / otro]
- Canal donde necesito el copy: [landing page / email / anuncio / todo]
- Competidores directos: [si los hay, menciónalos]

**Escríbeme y explícame:**

1. **Los principios del copywriting de respuesta directa que funcionan**
   - La diferencia entre copywriting de marca y copywriting de respuesta directa
   - Los 4 elementos de todo copy que convierte: problema, promesa, prueba, propuesta
   - Por qué el copy largo vende más que el copy corto (y cuándo no)
   - Las fórmulas clásicas: AIDA, PAS, BAB y cuándo usar cada una

2. **El headline que para el scroll**
   - Las 4 categorías de headlines que funcionan (beneficio, curiosidad, noticias, pregunta)
   - Cómo escribir un headline usando la voz del cliente (sus palabras, no las tuyas)
   - Los errores de headline que cuestan conversiones (vagos, centrados en el producto, sin beneficio)
   - Dame 10 variantes de headline para mi producto específico

3. **El lead que engancha en los primeros 3 segundos**
   - Los tipos de apertura que capturan la atención (shock, pregunta, historia, dato)
   - Cómo conectar con el dolor del cliente en las primeras líneas sin ser manipulador
   - La voz del cliente en el copy: cómo usar sus palabras exactas para crear resonancia
   - Escríbeme 3 aperturas distintas para mi producto

4. **El cuerpo del copy: construyendo el deseo**
   - Cómo explicar los beneficios sin caer en listar características
   - El bullet point de beneficio que va más allá del feature: la fórmula que funciona
   - Storytelling en el copy de ventas: cuándo contar una historia y cómo estructurarla
   - La prueba social que convierte: tipos de testimonios y cómo presentarlos

5. **El cierre y la llamada a la acción**
   - Cómo crear urgencia real sin usar los countdown timers falsos
   - La garantía que elimina el riesgo percibido del cliente
   - La CTA que consigue el clic: palabras que convierten y palabras que frenan
   - Cómo estructurar el precio para que parezca irresistible (anclaje, comparación, desglose)

6. **Aplicación práctica a mi caso**
   - Escríbeme el esqueleto completo del copy para el canal que más necesito
   - Los tests A/B que haría primero para optimizar las conversiones
   - Cómo revisar y editar el copy: el checklist de revisión del copywriter de respuesta directa
   - Los errores de copy que probablemente estoy cometiendo ahora mismo

Quiero salir de esta conversación con al menos un draft de copy que pueda publicar o enviar esta semana, con la estructura completa y los elementos clave de respuesta directa aplicados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Escribir copy de respuesta directa para landing pages, emails y anuncios que convierten visitantes en clientes.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical writing para developers',
                'description'       => 'Documenta software como un profesional: guías de usuario, documentación de API, changelogs y los formatos de documentación técnica que los usuarios realmente leen.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un technical writer senior con experiencia documentando APIs, SDKs y productos SaaS para audiencias desarrolladoras. Necesito que me ayudes a mejorar la documentación técnica de mi proyecto: que sea clara, útil y que los desarrolladores realmente la lean y la encuentren.

**Contexto de mi proyecto:**
- Tipo de software a documentar: [API REST / SDK / librería / plataforma / CLI / otro]
- Audiencia principal de la documentación: [developers internos / externos / ambos]
- Estado actual de la documentación: [no existe / existe pero es mala / existe pero está desactualizada]
- Herramienta de documentación actual: [Notion / Confluence / Gitbook / README / ReadTheDocs / ninguna]
- Lenguaje de programación principal: [Python / JavaScript / Go / Java / otro]
- Mayor queja de los usuarios sobre la documentación actual: [no encuentran lo que buscan / los ejemplos no funcionan / está desactualizada / no existe]

**Necesito tu ayuda con:**

1. **La estrategia de documentación técnica**
   - Los tipos de documentación que necesita cualquier proyecto de software (tutorials, how-to guides, reference, explanation)
   - El framework Diátaxis: cómo organizar la documentación para que cada tipo tenga su lugar
   - Cuándo documentar y cuándo no: la regla de oro de la documentación útil
   - Cómo establecer un proceso de documentación que escale con el equipo

2. **Documentación de API: el estándar del sector**
   - La estructura de una referencia de API que los developers aman
   - OpenAPI / Swagger: cómo escribir la especificación que genera documentación automática
   - Los ejemplos de código que deben acompañar cada endpoint
   - Cómo documentar los errores y los edge cases que normalmente se olvidan

3. **Getting started y tutoriales que funcionan**
   - El tutorial de quickstart que tiene todo nuevo usuario exitoso en menos de 15 minutos
   - Cómo estructurar un tutorial step-by-step que funcione aunque el usuario cambie el contexto
   - Los conceptos previos que hay que explicar antes del tutorial
   - Cómo probar que el tutorial funciona: el proceso de revisión con usuarios reales

4. **Guías de how-to y recetas**
   - La diferencia entre un tutorial y una how-to guide (y por qué importa)
   - Cómo escribir una guía de tarea específica que sea escaneable y rápida de usar
   - Estructura de la how-to guide: contexto mínimo, pasos, resultado esperado
   - Los code snippets que se copian, pegan y funcionan

5. **READMEs y changelogs profesionales**
   - La estructura del README que hace que un proyecto open source sea tomado en serio
   - Badges, ejemplos de instalación y el primer ejemplo de código que enamora
   - Changelogs: el formato que los usuarios y los developers agradecen (Keep a Changelog)
   - Semantic versioning y cómo comunicar breaking changes sin perder usuarios

6. **Mantenimiento y calidad de la documentación**
   - Cómo detectar que la documentación está desactualizada antes de que se queje un usuario
   - Docs-as-code: cómo tratar la documentación igual que el código (PR reviews, tests, CI/CD)
   - Métricas de documentación: cómo saber si la documentación es útil
   - Cómo conseguir que el equipo de ingeniería participe en la documentación

Escríbeme un ejemplo concreto de cada tipo de contenido (referencia de API, tutorial de quickstart, how-to guide, README) adaptado a mi tipo de proyecto. Incluye el template que usaría para cada formato.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Escribir y estructurar documentación técnica de software que los desarrolladores realmente lean y encuentren útil.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX writing: las palabras como diseño',
                'description'       => 'Las palabras son parte del diseño: microcopy de botones, mensajes de error, onboarding y los textos que hacen que la interfaz sea intuitiva sin que el usuario tenga que pensar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX writer senior con experiencia trabajando con equipos de diseño y producto en empresas de tecnología. Necesito que me ayudes a mejorar los textos de mi interfaz: el microcopy que hace que los usuarios entiendan qué hacer sin necesitar ayuda y que sientan que el producto los entiende.

**Contexto de mi producto:**
- Tipo de producto: [app móvil / web app / SaaS / ecommerce / otro]
- Audiencia: [describe a los usuarios]
- Tono de voz de la marca: [formal / amigable / técnico / humano / otro]
- Flujo que más me preocupa: [onboarding / checkout / mensajes de error / formularios / otro]
- Estado actual del UX writing: [no hay nadie responsable / lo escriben los developers / ya tenemos algo pero es mejorable]
- Herramienta de diseño: [Figma / Sketch / Adobe XD / directamente en código]

**Enséñame y ayúdame con:**

1. **Los principios del UX writing**
   - La diferencia entre copywriting de marketing y UX writing
   - Los principios de Concise, Clear y Useful aplicados a la interfaz
   - Por qué el UX writing no es "poner texto bonito" sino resolver problemas de usabilidad
   - Las palabras que crean fricción vs. las palabras que facilitan la acción

2. **Microcopy de botones y llamadas a la acción**
   - Por qué "Enviar" y "Aceptar" son los peores textos de botón y qué poner en su lugar
   - La fórmula del botón que dice exactamente lo que va a pasar cuando el usuario lo pulse
   - Los botones de confirmación de acciones destructivas: cómo escribirlos para que no haya accidentes
   - Texto de los botones en contexto de loading: qué decir mientras espera el usuario

3. **Mensajes de error que no frustran**
   - Los errores de error message más comunes (culpar al usuario, ser vagos, no dar solución)
   - La estructura del mensaje de error perfecto: qué pasó, por qué, qué hacer ahora
   - Errores de validación de formularios: cuándo mostrarlos y qué decir
   - El tono en los mensajes de error: cómo ser claro sin ser frío o condescendiente

4. **Onboarding y textos de primera vez**
   - Los empty states que ayudan vs. los que abandonan al usuario
   - El tooltip y el hint text que enseñan sin estorbar
   - Los modales de onboarding: cuándo usarlos y cómo escribirlos para que el usuario los lea
   - El primer email de bienvenida: qué decir en las primeras 24 horas del usuario

5. **Formularios que se completan**
   - Labels, placeholders y hint text: cuándo usar cada uno
   - Cómo escribir las instrucciones de los campos complejos (formatos, requisitos)
   - El texto de confirmación después de enviar un formulario
   - Cómo comunicar los requisitos de contraseña sin frustrar al usuario

6. **Guía de voz y tono para el producto**
   - Qué es una guía de voz y tono y por qué el producto necesita una
   - Cómo definir la personalidad del producto en palabras (adjetivos, exemplos, anti-ejemplos)
   - Cómo mantener la consistencia de voz en un equipo donde varias personas escriben los textos
   - Cómo adaptar el tono al contexto (éxito vs. error vs. advertencia vs. información neutral)

Revisa el flujo que te indiqué como más problemático y reescribe los textos más críticos aplicando los principios de UX writing. Incluye la versión antes y después con la explicación de por qué cada cambio mejora la experiencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Mejorar el microcopy de la interfaz: botones, errores, onboarding y formularios que el usuario entiende sin esfuerzo.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Email de ventas que obtiene respuesta',
                'description'       => 'Escribe emails de prospección que abren conversaciones: el asunto, la primera línea, el valor y el CTA que obtiene respuesta de un ejecutivo que recibe 200 emails al día.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en sales development y outbound con experiencia escribiendo secuencias de email de prospección con tasas de respuesta superiores al 15% para empresas B2B. Necesito que me ayudes a escribir emails de ventas que realmente obtengan respuesta de ejecutivos que reciben cientos de emails al día.

**Mi contexto de ventas:**
- Producto o servicio que vendo: [describe qué vendes]
- Perfil del destinatario: [cargo, tipo de empresa, sector, tamaño]
- Ticket medio: [rango de precio]
- Propuesta de valor principal: [qué problema resuelves y cómo]
- Tiempo disponible para la prospección: [horas semanales]
- Canales que uso además del email: [LinkedIn / teléfono / solo email]
- Tasa de respuesta actual: [% si la tienes]

**Escríbeme y enséñame:**

1. **El framework del email de prospección que funciona**
   - La diferencia entre un email de ventas que funciona y el spam que todo el mundo borra
   - La estructura BASHO (personalización + relevancia + valor + CTA) y cómo aplicarla
   - Por qué los emails cortos convierten mejor que los largos en frío
   - El número óptimo de emails en una secuencia de prospección

2. **El asunto que consigue la apertura**
   - Los tipos de asunto que funcionan en ventas B2B (nombre del destinatario, empresa, referencia, pregunta)
   - Asuntos que NO funcionan aunque parezca que sí (URGENTE, Oportunidad exclusiva, Re: [nada])
   - Test A/B de asuntos: qué variar y cómo medir
   - Dame 15 variantes de asunto para mi propuesta de valor específica

3. **La primera línea que hace seguir leyendo**
   - Por qué la primera línea es más importante que el asunto en muchos casos
   - Las aperturas que funcionan: personalización genuina, dato relevante, pregunta de dolor
   - Cómo investigar al prospecto en 5 minutos para personalizar la apertura
   - Las aperturas que destruyen la credibilidad desde el primer segundo

4. **El cuerpo: propuesta de valor en 3 líneas**
   - Cómo comunicar el valor de tu producto en menos de 50 palabras
   - La prueba social en el email frío: cómo usarla sin parecer arrogante
   - El caso de uso o ejemplo específico que hace el valor tangible
   - Cómo adaptar el mensaje según el cargo y el sector del destinatario

5. **El CTA que obtiene respuesta**
   - Por qué "¿Te parece bien una llamada de 30 minutos?" no funciona (y qué poner en su lugar)
   - Las CTAs de bajo compromiso que obtienen más respuestas
   - El email de ruptura: cómo escribir el último email de la secuencia para conseguir una respuesta final
   - Follow-up emails: cómo añadir valor en cada toque sin ser repetitivo

6. **La secuencia completa de prospección**
   - Estructura de una secuencia de 5 emails (timing, propósito de cada email, cadencia)
   - Cómo variar el canal (LinkedIn, teléfono) dentro de la secuencia multicanal
   - Automatización vs. personalización: qué automatizar y qué hacer a mano
   - Métricas de la secuencia: tasas de apertura, respuesta y reunión que son realistas

Escríbeme la secuencia completa de 5 emails adaptada a mi producto y perfil de comprador, con los asuntos, el cuerpo de cada email y el razonamiento detrás de cada decisión de redacción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Escribir secuencias de email de prospección B2B que obtienen respuesta de ejecutivos ocupados.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product writing: la voz del producto',
                'description'       => 'Escribe los textos del producto: feature announcements, release notes, emails de ciclo de vida y el tono de voz que hace que el producto se sienta como una marca coherente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product writer con experiencia definiendo la voz de productos SaaS y escribiendo todos los textos que acompañan el ciclo de vida del usuario, desde el primer email de bienvenida hasta la comunicación de una bajada de precio. Necesito que me ayudes a desarrollar la voz del producto y a escribir los contenidos que hacen que el producto se sienta coherente y humano.

**Contexto de mi producto:**
- Tipo de producto: [SaaS B2B / app de productividad / marketplace / plataforma / otro]
- Audiencia: [describe a quiénes va dirigido]
- Tono de marca actual: [formal / casual / técnico / aspiracional / no está definido]
- Principal problema de comunicación: [no tenemos voz definida / cada persona escribe distinto / los emails no convierten / los release notes no los lee nadie]
- Canales de comunicación del producto: [email / in-app / push / changelog / blog]
- Tamaño del equipo de producto: [número de personas que escriben textos del producto]

**Necesito que me ayudes a:**

1. **Definir la voz y el tono del producto**
   - Qué es la voz del producto y por qué es diferente del branding de marketing
   - Cómo definir los atributos de voz del producto (ej: directo pero no frío, técnico pero comprensible)
   - Los ejemplos concretos: "sí decimos X, no decimos Y" para cada atributo de voz
   - Cómo documentar la guía de voz para que todo el equipo la siga

2. **Feature announcements que generan adopción**
   - Por qué la mayoría de los anuncios de funcionalidades no consiguen adopción
   - La estructura del announcement que conecta la feature con el problema del usuario
   - Dónde comunicar una nueva feature: in-app, email, changelog, blog o todo
   - Cómo hacer el launch de una feature pequeña vs. una grande

3. **Release notes que la gente lee**
   - Por qué los release notes técnicos no los lee nadie (y cómo hacerlos interesantes)
   - La estructura del changelog que los usuarios siguen voluntariamente
   - Cómo categorizar los cambios: nuevas features, mejoras, correcciones
   - Ejemplos de release notes que se han convertido en contenido de marca (Linear, Notion, etc.)

4. **Emails del ciclo de vida del usuario**
   - La secuencia de emails de onboarding que activa y retiene: cuántos, cuándo y qué decir
   - El email de win-back para usuarios que llevan semanas sin abrir el producto
   - El email de upsell en el momento correcto: cómo escribirlo para que no parezca vendedor
   - Los emails transaccionales (confirmación, factura, alerta) que construyen marca en lugar de destruirla

5. **Comunicación de crisis y cambios negativos**
   - Cómo comunicar una caída o incidencia: la estructura del mensaje de status
   - Cómo comunicar una subida de precio sin perder clientes
   - La comunicación de la eliminación de una feature que alguien usa
   - Los post-mortems públicos: cuándo publicarlos y cómo redactarlos

6. **Proceso de product writing en equipo**
   - Cómo incorporar el product writing al proceso de desarrollo (cuándo involucrar al writer)
   - El proceso de revisión de textos del producto sin que sea un cuello de botella
   - Cómo medir si los textos del producto funcionan (tasas de apertura, adopción de features, NPS)
   - Cómo construir una biblioteca de textos reutilizables para el equipo

Escríbeme los textos concretos para mi producto: el email de bienvenida, un anuncio de feature, un release note de ejemplo y la guía de voz de una página. Adapta todo al tono y audiencia que describí.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollar la voz del producto y escribir feature announcements, release notes y emails de ciclo de vida.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Escritura profesional en RRHH',
                'description'       => 'Redacta descripciones de puesto, cartas de oferta, políticas y comunicaciones internas que sean claras, inclusivas y que reflejen la cultura de la empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de People & Culture con experiencia redactando comunicaciones de RRHH para empresas de tecnología y servicios. Necesito que me ayudes a mejorar la escritura profesional del departamento de personas: desde las descripciones de puesto hasta las comunicaciones de cambio organizativo, pasando por las políticas internas.

**Contexto:**
- Tipo de empresa y sector: [tecnología / retail / servicios / otro]
- Tamaño: [número de empleados]
- Cultura de la empresa: [formal / casual / mixta]
- Principal reto de comunicación de RRHH: [las ofertas no atraen talento / las políticas no se leen / las comunicaciones internas se malinterpretan / otro]
- Documentos que más necesito mejorar: [descripciones de puesto / cartas de oferta / políticas / comunicados internos]
- Nivel de inglés del equipo: [solo español / bilingüe / todo en inglés]

**Ayúdame a escribir mejor:**

1. **Descripciones de puesto que atraen talento real**
   - Por qué las descripciones de puesto genéricas no atraen a los mejores candidatos
   - La estructura de la job description que convierte: qué incluir y en qué orden
   - Cómo escribir los requisitos sin desincentivar a los mejores candidatos (el efecto del 100% de requisitos)
   - Lenguaje inclusivo en las descripciones de puesto: las palabras que alejan talento sin que lo sepas
   - Dame una plantilla de job description para un puesto de [indica el puesto]

2. **Cartas de oferta que cierran la negociación**
   - La estructura de la carta de oferta que comunica valor más allá del salario
   - Cómo presentar el paquete retributivo total (salario, variable, beneficios, equity) de forma atractiva
   - El tono de la carta de oferta: entusiasta pero profesional
   - Cómo gestionar por escrito una contraoferta o una negociación de condiciones

3. **Políticas de empresa que la gente lee**
   - Por qué nadie lee las políticas de empresa y cómo cambiarlo
   - El formato de política que es scannable y fácil de consultar cuando se necesita
   - Cómo redactar una política sin el lenguaje legalista que genera distancia
   - Las políticas que más importa comunicar bien: vacaciones, trabajo remoto, gastos, código de conducta

4. **Comunicaciones internas de cambio organizativo**
   - Cómo comunicar una reorganización, una reducción de plantilla o un cambio de dirección
   - La estructura del comunicado interno que reduce la incertidumbre y los rumores
   - El tono en la comunicación de malas noticias: directo, empático y sin eufemismos
   - Cómo gestionar las preguntas que siguen a un comunicado difícil

5. **Feedback y evaluaciones de desempeño**
   - Cómo escribir un feedback de desempeño que sea útil, claro y constructivo
   - El lenguaje del feedback positivo que realmente motiva (no el "muy bien" genérico)
   - El feedback de áreas de mejora que no desmotiva ni ofende
   - La evaluación de desempeño escrita: estructura y los errores de redacción más comunes

6. **Onboarding: comunicaciones del primer mes**
   - El email de bienvenida del primer día: qué decir y cómo hacerlo memorable
   - Los mensajes de check-in de la primera semana, el primer mes y los 90 días
   - Cómo comunicar la cultura de empresa por escrito sin que suene a propaganda
   - La comunicación del primer día del manager con el nuevo empleado

Dame ejemplos concretos y plantillas para cada tipo de documento: una job description de ejemplo, un comunicado de cambio organizativo y la guía de estilo de comunicación de RRHH que usaría en la empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Mejorar la escritura profesional del departamento de RRHH: ofertas, políticas, comunicados y cartas que reflejan la cultura.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Informes financieros que cuentan una historia',
                'description'       => 'Escribe el informe que el CFO envía al board: estructura, visualización de datos y el lenguaje que hace que los números cuenten una historia clara y convincente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia presentando resultados financieros a boards de inversión y directivos no financieros. Necesito que me ayudes a escribir informes financieros que cuenten una historia clara y persuasiva, no solo un listado de números que nadie entiende.

**Contexto:**
- Rol desde el que escribo: [CFO / director financiero / controller / analista financiero]
- Audiencia del informe: [board / comité de dirección / accionistas / inversores / analistas externos]
- Tipo de informe: [mensual / trimestral / anual / ad hoc para una decisión concreta]
- Situación financiera actual: [crecimiento / estabilización / reestructuración / pre-fundraising]
- Herramienta de presentación: [PowerPoint / Word / Notion / Google Slides / PDF]
- Principal debilidad del reporting actual: [demasiados números / falta de narrativa / no se leen / no llevan a decisiones]

**Enséñame a escribir mejor:**

1. **La narrativa financiera: los números como historia**
   - La diferencia entre un informe financiero que informa y uno que convence
   - Cómo construir la narrativa: contexto, situación actual, implicaciones y recomendaciones
   - El principio de la pirámide (Minto): cómo estructurar el informe para audiencias ocupadas
   - Cómo presentar los resultados malos de una forma honesta pero constructiva

2. **La estructura del informe mensual para el board**
   - El executive summary de una página que el board lee aunque no tenga tiempo
   - El orden lógico del informe: P&L, balance, cash flow y KPIs operativos
   - Qué va en el informe y qué va en el anexo (la regla de lo que el board necesita vs. quiere)
   - La sección de riesgos y oportunidades: cómo escribirla para que sea útil, no defensiva

3. **El lenguaje financiero para no financieros**
   - Cómo traducir los números en implicaciones de negocio que un CEO entiende
   - Los términos financieros que hay que definir siempre (y los que se pueden dar por sabidos)
   - Cómo presentar una varianza negativa sin que parezca una excusa
   - El uso de la primera persona vs. la tercera persona en el informe financiero

4. **Visualización de datos financieros**
   - Los gráficos que funcionan en el informe financiero (y los que confunden)
   - Las tablas de P&L que son legibles vs. las que son un muro de números
   - Cómo usar el color en el informe financiero: verde / rojo / amarillo y sus convenciones
   - El waterfall chart: cuándo usarlo y cómo explicarlo a alguien que no lo conoce

5. **Los comentarios de las varianzas**
   - Cómo escribir el análisis de la varianza (real vs. budget) en una frase
   - La estructura del comentario de varianza: magnitud, causa, acción
   - Cómo ser específico en el comentario sin caer en el exceso de detalle
   - Ejemplos de comentarios de varianza buenos y malos para el mismo número

6. **El informe de fundraising**
   - La diferencia entre el informe mensual para el board y el informe para un nuevo inversor
   - Los KPIs que los fondos de inversión esperan ver en el reporting
   - Cómo presentar el burn rate, la runway y el uso de fondos de forma transparente
   - El follow-up del board deck: qué enviar por escrito después de la presentación

Escríbeme el template del informe mensual para el board con las secciones, los KPIs y ejemplos de comentarios de varianza aplicados a mi situación. Incluye el executive summary de una página con el formato exacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Escribir informes financieros con narrativa clara que el board lee y que llevan a decisiones.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Redacción jurídica en lenguaje claro',
                'description'       => 'Escribe contratos, avisos legales y documentos jurídicos que sean precisos Y comprensibles: el lenguaje claro en el ámbito legal como ventaja competitiva y obligación ética.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en lenguaje claro (plain legal language) con experiencia redactando contratos, condiciones de uso y documentos jurídicos que son al mismo tiempo legalmente sólidos y comprensibles para el ciudadano común. Necesito que me ayudes a mejorar la redacción de mis documentos legales para que sean más claros sin perder precisión jurídica.

**Contexto:**
- Tipo de práctica legal: [abogado interno / despacho / asesoría / legaltech]
- Documentos que más necesito mejorar: [contratos de servicios / condiciones generales / avisos legales / políticas de privacidad / contratos laborales / todos]
- Audiencia de los documentos: [consumidores / empresas / empleados / inversores]
- Idioma: [solo español / también inglés]
- Principal problema actual: [los clientes no leen los contratos / las cláusulas son confusas / los documentos no cumplen GDPR / la empresa tiene riesgo por documentos poco claros]

**Enséñame y ayúdame a:**

1. **Los principios del lenguaje claro en documentos jurídicos**
   - Qué es el movimiento de lenguaje claro (plain language) y su impacto en el sector legal
   - Por qué el legalese ya no protege al abogado y sí genera riesgo para el cliente
   - Los principios básicos: oraciones cortas, voz activa, vocabulario común, estructura visual
   - El argumento comercial del lenguaje claro: los contratos que la gente entiende se incumplen menos

2. **Estructura y organización del documento jurídico**
   - Cómo estructurar un contrato para que sea fácil de navegar
   - El uso de títulos, subtítulos y numeración en los documentos legales
   - La tabla de contenidos: cuándo es útil y cómo hacerla
   - El orden de las cláusulas: qué debe ir primero para que el documento sea útil

3. **El vocabulario jurídico y sus alternativas**
   - Las palabras y frases legales que tienen sustitutos más claros (en virtud de / con arreglo a / el presente)
   - Cuándo un término técnico jurídico es imprescindible y cuándo es tradición
   - Cómo usar las definiciones para clarificar sin multiplicar la complejidad
   - Los latinismos: cuándo usarlos y cuándo hay alternativas más claras en español

4. **Cláusulas específicas que siempre son confusas**
   - La cláusula de limitación de responsabilidad: cómo escribirla para que el cliente la entienda
   - Las condiciones de rescisión: estructura clara con ejemplos concretos
   - La política de privacidad: los requisitos del GDPR en lenguaje comprensible
   - Las condiciones generales de contratación B2C: los requisitos de transparencia de la normativa española

5. **Revisión y mejora de documentos existentes**
   - El proceso de revisión de un documento jurídico con lente de lenguaje claro
   - Las señales de que un documento es demasiado complejo (frases de más de 40 palabras, párrafos largos, voz pasiva)
   - Cómo negociar el lenguaje claro con la otra parte que prefiere el legalese tradicional
   - Cómo validar que el documento revisado sigue siendo jurídicamente válido

6. **Comunicaciones legales con clientes**
   - Las cartas y comunicaciones del abogado al cliente en lenguaje comprensible
   - Cómo explicar por escrito una situación jurídica compleja sin simplificar en exceso
   - El email de asesoramiento legal que el cliente entiende y puede actuar
   - Cómo documentar la entrega de asesoramiento para proteger al abogado

Toma uno de mis documentos habituales y reescríbeme las 5 cláusulas más complejas aplicando los principios de lenguaje claro. Muestra la versión original y la mejorada con la explicación de cada cambio y por qué no pierde precisión jurídica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Mejorar la redacción de documentos jurídicos con lenguaje claro que mantiene la precisión legal y es comprensible.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Escritura para soporte al cliente',
                'description'       => 'Redacta respuestas de soporte, artículos de ayuda y comunicaciones de incidente que resuelvan el problema Y mantengan la relación con el cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia construyendo equipos de soporte y bases de conocimiento para productos SaaS con miles de usuarios. Necesito que me ayudes a mejorar la escritura de mi equipo de soporte: las respuestas de tickets, los artículos de la base de conocimiento y las comunicaciones de incidente que construyen (o destruyen) la relación con el cliente.

**Contexto:**
- Tipo de producto o servicio: [SaaS / ecommerce / plataforma / aplicación / otro]
- Volumen de tickets mensual: [rango aproximado]
- Canal principal de soporte: [email / chat / tickets / teléfono]
- Tono de marca: [formal / casual / técnico / humano]
- Principal problema de calidad actual: [respuestas lentas / respuestas genéricas / artículos que no resuelven / clientes frustrados que escalan / otro]
- Nivel de experiencia del equipo: [junior / mixto / senior]

**Enséñame y ayúdame a:**

1. **Los principios de la escritura de soporte de calidad**
   - La diferencia entre una respuesta de soporte que resuelve y una que cierra el ticket sin ayudar
   - El triángulo de la respuesta perfecta: empática, clara y completa
   - La voz en las respuestas de soporte: cómo ser humano sin ser informal
   - Los errores de escritura que frustran al cliente aunque la solución técnica sea correcta

2. **La estructura de la respuesta de ticket perfecta**
   - El acuse de recibo que valida el problema sin parecer un robot
   - Cómo explicar una solución técnica a un usuario no técnico
   - El cierre de la respuesta que deja la puerta abierta sin invitar a la siguiente queja
   - Las respuestas de seguimiento cuando el problema necesita tiempo para resolverse

3. **Respuestas a los clientes enfadados**
   - El protocolo de escritura para un cliente que ha escrito en mayúsculas o con lenguaje agresivo
   - Cómo disculparse de forma genuina sin admitir responsabilidad legal
   - La desescalación por escrito: qué decir y qué no decir cuando el cliente está al límite
   - Cuándo un email de soporte debe pasar a una llamada y cómo hacer esa transición

4. **Artículos de base de conocimiento que resuelven**
   - La diferencia entre un artículo de ayuda que el usuario lee y uno que genera más tickets
   - La estructura del artículo de help center: título, contexto, pasos, resultado esperado
   - Cómo escribir instrucciones paso a paso que funcionen para todos los niveles técnicos
   - Las capturas de pantalla y los GIFs: cuándo añadirlos y cómo referenciarlos en el texto

5. **Comunicaciones de incidente**
   - La estructura del mensaje de status durante una caída: qué decir en cada fase
   - Cómo comunicar el impacto sin generar más pánico del necesario
   - El postmortem público: cuándo publicarlo y qué nivel de detalle incluir
   - Cómo comunicar la resolución de un incidente y qué ofrecer al cliente afectado

6. **Plantillas y macros que mantienen la calidad**
   - Cómo construir un sistema de plantillas que ahorre tiempo sin robotizar las respuestas
   - Las macros que nunca deben enviarse sin personalización
   - Cómo mantener la calidad de la escritura cuando el equipo crece
   - El proceso de revisión de calidad de las respuestas de soporte

Escríbeme las 10 plantillas de respuesta de soporte más usadas para mi tipo de producto: la disculpa por un bug, la respuesta a un precio demasiado caro, la explicación de una feature que no existe, el cierre de un ticket sin respuesta del usuario y 6 más que decidas tú. Incluye variantes de tono (formal y casual) para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Mejorar la escritura del equipo de soporte: respuestas de tickets, artículos de ayuda y comunicaciones de incidente.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Ghostwriting y redacción por encargo',
                'description'       => 'El nicho del redactor freelance que escribe para otros: la propuesta de valor, los tipos de proyectos y las tarifas de uno de los servicios freelance con mayor demanda constante.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ghostwriter freelance con experiencia escribiendo contenido para ejecutivos, empresas y creadores de contenido que no tienen tiempo o habilidad para escribir por sí mismos. Necesito que me ayudes a construir una práctica de ghostwriting y redacción por encargo sostenible y bien pagada.

**Mi perfil:**
- Experiencia escribiendo: [años de experiencia, contextos donde he escrito]
- Especialización temática: [tecnología / finanzas / marketing / salud / sin especialización]
- Tipos de contenido que mejor sé escribir: [artículos / posts de LinkedIn / libros / emails / guiones / otro]
- Idiomas en los que puedo trabajar: [español / inglés / ambos]
- Modelo de trabajo deseado: [100% ghostwriting / combinado con otros servicios / complemento a otro trabajo]
- Ingresos objetivo mensuales: [rango]
- Mayor duda sobre el ghostwriting: [cómo conseguir clientes / cómo poner precio / cómo gestionar la confidencialidad / cómo escalar]

**Necesito que me expliques:**

1. **El mercado del ghostwriting en 2024**
   - Los tipos de proyectos de ghostwriting con mayor demanda actual
   - Los nichos más rentables del ghostwriting (ejecutivos de LinkedIn, libros de negocio, newsletters, guiones)
   - Por qué el ghostwriting crece en la era del contenido: la demanda que no para
   - El perfil del cliente que contrata un ghostwriter: quién paga y por qué

2. **Posicionamiento y propuesta de valor del ghostwriter**
   - Generalista vs. especialista: qué funciona mejor en el mercado del ghostwriting
   - Cómo posicionarse como el ghostwriter de una industria o tipo de contenido específico
   - La propuesta de valor del ghostwriter: qué vendo realmente (tiempo, habilidad, perspectiva)
   - Cómo comunicar el servicio de ghostwriting en mi web y perfiles profesionales

3. **Tipos de proyectos y estructura de servicios**
   - Ghostwriting de posts de LinkedIn para ejecutivos: el servicio con mayor demanda y menor barrera de entrada
   - Ghostwriting de newsletters: cómo funciona el servicio y qué implica para el cliente
   - Ghostwriting de libros de negocio: el proceso, los plazos y el tipo de cliente
   - Guiones de vídeo y pódcast: el mercado del ghostwriting audiovisual
   - Cómo empaquetar los servicios para que el cliente entienda qué está comprando

4. **Tarifas y modelo de negocio**
   - Las tarifas del ghostwriting en el mercado español y latinoamericano
   - Precio por palabra vs. precio por proyecto vs. retainer mensual: cuándo usar cada modelo
   - El retainer de ghostwriting: cómo funciona y cómo conseguir clientes en este modelo
   - Cómo subir las tarifas sin perder clientes actuales

5. **El proceso de trabajo con el cliente**
   - La sesión de briefing: cómo capturar la voz y el estilo del cliente
   - El cuestionario de briefing que me permite escribir en la voz de otro
   - Cómo gestionar las revisiones sin que el proyecto se extienda indefinidamente
   - El contrato de ghostwriting: confidencialidad, derechos de autoría y condiciones de pago

6. **Captación de clientes de ghostwriting**
   - Los canales donde están los ejecutivos que contratan ghostwriters
   - LinkedIn para ghostwriters: el contenido que atrae a los clientes correctos
   - Cómo pedir referidos a los clientes actuales de ghostwriting
   - El portfolio del ghostwriter: cómo mostrar trabajo cuando no puedes poner tu nombre

Dame los primeros 5 servicios de ghostwriting que ofrecería según mi perfil, la estructura de precios con rangos de mercado para cada uno y el guión de la llamada de ventas con el primer cliente potencial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Construir una práctica de ghostwriting freelance: posicionamiento, tarifas, tipos de proyectos y captación de clientes.',
                'vote_score'        => 45,
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
