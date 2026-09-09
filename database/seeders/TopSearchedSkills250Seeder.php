<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills250Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Copywriting emocional: palabras que activan la compra',
                'description'       => 'Domina el copywriting emocional para marketing: los gatillos psicológicos, las estructuras de mensaje y las palabras que reducen la fricción y hacen que el lector pase a la acción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un copywriter senior especializado en marketing de respuesta directa con más de una década escribiendo textos que generan conversiones reales: páginas de venta, emails de lanzamiento, anuncios en redes sociales y landing pages que han producido resultados medibles para empresas de distintos sectores y tamaños.

Necesito mejorar el copywriting de mis materiales de marketing. Para asesorarte bien, primero pregúntame:

1. ¿Qué producto o servicio estás vendiendo y a qué tipo de cliente se lo vendes (perfil demográfico y psicográfico)?
2. ¿Cuál es el formato de copy que quieres mejorar: anuncio de redes sociales, landing page, email de ventas, página de producto o algo distinto?
3. ¿Cuál es el principal deseo o problema que resuelve tu oferta para tu cliente?
4. ¿Tienes ya un copy existente que quieres revisar o empezamos desde cero?
5. ¿Cuál es la acción específica que quieres que el lector tome al final del texto?

Con esas respuestas, desarrolla la guía de copywriting emocional:

**1. Los gatillos emocionales que activan la decisión de compra**
Las personas compran con las emociones y justifican con la razón. Define los siete gatillos emocionales más potentes en copywriting: el miedo a perder algo (la escasez real o el coste de la inacción), el deseo de pertenencia (pertenecer al grupo de personas que ya lo tienen), la prueba social (lo que hacen los demás reduce el riesgo percibido), la autoridad (la credencial o el caso de éxito que genera confianza), la reciprocidad (el valor que das antes de pedir), la urgencia (la razón legítima para actuar ahora) y la identidad (cómo la compra refleja quién quiere ser el cliente). Para cada uno, proporciona un ejemplo de frase concreta aplicada al producto descrito.

**2. La estructura del mensaje que convierte: de la atención a la acción**
Un buen texto de ventas sigue una arquitectura que guía al lector desde el primer impacto hasta la decisión. Desarrolla la estructura AIDA extendida para el contexto digital: la Atención (el titular que detiene el scroll o la apertura del email), el Interés (el gancho que conecta el problema del lector con lo que vas a decir), el Deseo (la visualización del beneficio transformado en resultado concreto de la vida del lector, no lista de características), la Acción (el llamado a la acción claro que elimina la ambigüedad sobre el siguiente paso) y la Tranquilidad (la garantía o el manejo de objeciones que elimina el riesgo percibido justo antes del clic). Explica qué proporción del texto debería ocupar cada sección según el formato.

**3. Las palabras que venden y las palabras que matan la conversión**
El vocabulario importa más de lo que parece. Define las categorías de palabras de poder en copywriting emocional: las palabras de transformación que pintan el antes y el después ("deja de", "empieza a", "por fin", "sin tener que"), las palabras de especificidad que añaden credibilidad ("exactamente", "en menos de 48 horas", "paso a paso"), las palabras de pertenencia que crean un sentido de comunidad ("para personas como tú", "si eres de los que"), y las palabras que matan la conversión porque suenan a argot corporativo vacío ("solución innovadora", "de vanguardia", "líder del sector", "sinergias") que disparan el detector de marketing del lector. Proporciona cinco alternativas concretas para las frases corporativas más comunes.

**4. El arte del titular: la batalla por la atención en los primeros tres segundos**
El titular es el 80% del trabajo del copy; si no detiene al lector, el resto no importa. Desarrolla las seis fórmulas de titular con mayor conversión histórica en marketing: la promesa de beneficio específico con timeframe ("Cómo [lograr X resultado] en [Y tiempo]"), el secreto o información privilegiada ("Lo que [expertos/competidores] no te cuentan sobre [tema]"), la pregunta que activa el autodiagnóstico ("¿Cuánto estás perdiendo por no [hacer X]?"), el titular de historia ("Cómo [persona similar al lector] [logró resultado] sin [objeción principal]"), el titular de curiosidad + beneficio ("El método que [empresa/persona conocida] usa para [resultado]"), y el titular de miedo específico ("El error que comete el 73% de [perfil del lector] y que te está costando [consecuencia concreta]"). Para cada fórmula, escribe un ejemplo aplicado al producto o servicio descrito.

**5. Escribir para el lector que escanea: la jerarquía visual del copy**
En el entorno digital, nadie lee en línea recta: escanean buscando lo que les importa. Define la arquitectura de lectura que captura tanto al lector que escanea como al que lee en profundidad: los subtítulos que cuentan la historia completa aunque el lector no lea los párrafos, los párrafos cortos de una a tres líneas máximo que respetan el ritmo de lectura digital, las bullets que hacen digerible la información densa (con la regla de que cada bullet debe empezar con el beneficio, no con la característica), el uso estratégico de negritas para destacar los tres o cuatro conceptos que no deben perderse aunque se haga un escaneo rápido, y el espacio en blanco como herramienta de énfasis.

**6. La revisión del copy: el filtro que separa el texto bueno del texto que convierte**
Escribir bien no es suficiente; hay que revisar con los ojos del cliente. Define el proceso de revisión en cinco pasos: el test del lector escéptico (leer el texto preguntándose "¿y qué?" después de cada afirmación para detectar beneficios no suficientemente desarrollados), el test de especificidad (reemplazar cada adjetivo vago por un dato concreto cuando sea posible), el test de la promesa-prueba (cada promesa grande debe ir seguida de su evidencia: el testimonial, la estadística o el caso de éxito), el test del call to action (¿es completamente claro qué pasa si hago clic?, ¿qué obtengo exactamente?), y el test de la objeción (las tres principales razones por las que el lector no compraría deben estar respondidas en el texto antes de que llegue al botón).

Termina con la reescritura de un fragmento del copy actual del usuario aplicando todos los principios desarrollados, con anotaciones que explican cada decisión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear y mejorar textos de marketing con técnicas de copywriting emocional que aumentan la conversión.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical writing persuasivo: documentación que convence',
                'description'       => 'Escribe documentación técnica que no solo informa sino que convence: READMEs que consiguen adopción, changelogs que generan entusiasmo y propuestas técnicas que aprueban los stakeholders.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un technical writer senior con experiencia en empresas de software donde la documentación no es solo un requisito, sino una herramienta estratégica: los READMEs que hacen que un proyecto open source gane estrellas, las propuestas técnicas que consiguen aprobación de dirección, los changelogs que generan adopción de nuevas versiones y los RFCs que alinean a un equipo de ingeniería sin reuniones interminables.

Necesito mejorar mi technical writing para que sea más persuasivo. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de documento técnico quieres mejorar: README, propuesta técnica, RFC, changelog, documentación de API, informe de incidente u otro?
2. ¿Quién es la audiencia principal del documento: desarrolladores junior, ingenieros senior, tech leads, CTOs o stakeholders de negocio?
3. ¿Cuál es el objetivo del documento: informar, conseguir aprobación, generar adopción, alinear al equipo o algo específico?
4. ¿Tienes ya un borrador que quieres revisar o empezamos desde la estructura?
5. ¿Cuál es el contexto de la empresa: startup, empresa de producto, consultora, empresa grande con procesos formales?

Con esas respuestas, desarrolla la guía de technical writing persuasivo:

**1. La diferencia entre escribir para informar y escribir para convencer**
La documentación técnica tradicional asume que el lector ya quiere leerla; el technical writing persuasivo reconoce que compites por la atención de personas ocupadas con agendas propias. Define el cambio de mentalidad: pasar de "describir qué hace esto" a "explicar por qué importa y qué gana el lector con ello", la importancia del contexto antes de los detalles (el lector necesita saber por qué debe leer antes de cómo funciona), y cómo la estructura piramidal invertida del periodismo (lo más importante primero, los detalles después) aplica perfectamente a la documentación técnica que compite con el inbox y el backlog de los ingenieros.

**2. El README que convierte visitantes en usuarios activos**
El README es la página de ventas de un proyecto técnico. Desarrolla la estructura del README que genera adopción: el párrafo de apertura que en tres líneas explica qué hace el proyecto, para quién y por qué es diferente (el pitch técnico sin buzzwords), el "quick start" que demuestra valor en menos de cinco minutos con el mínimo de pasos posibles, la sección de "por qué este proyecto" que aborda las alternativas existentes honestamente (genera más confianza que ignorarlas), la documentación de los casos de uso reales con ejemplos de código que el lector puede copiar directamente, y la sección de contribución que elimina la fricción para los que quieran ayudar.

**3. Propuestas técnicas y RFCs que consiguen aprobación**
Una propuesta técnica que no consigue aprobación es tiempo malgastado. Define la estructura de la propuesta que funciona: el resumen ejecutivo de media página que explica el problema, la solución propuesta y el impacto esperado para quien no leerá el resto (porque muchos stakeholders no lo harán), la sección de contexto que demuestra que entiendes profundamente el problema antes de proponer la solución, la evaluación honesta de las alternativas consideradas con sus trade-offs (demuestra rigor y reduce la objeción de "¿pero habéis considerado X?"), la estimación de esfuerzo con el rango de incertidumbre explícito, y el plan de rollback o reversibilidad que reduce el riesgo percibido de aprobar la propuesta.

**4. Changelogs y release notes que generan adopción**
El changelog es el texto técnico menos leído y, cuando se escribe bien, uno de los más efectivos para que los usuarios adopten nuevas versiones. Define cómo escribir release notes que la gente realmente lee: la apertura que destaca el beneficio principal de la versión (no la lista de commits), la organización por impacto para el usuario en lugar de por tipo de cambio (features primero, mejoras de rendimiento después, fixes al final), las migraciones explicadas como guías paso a paso con los casos de error más comunes y sus soluciones, el tono que celebra las mejoras sin sonar a marketing corporativo, y la sección de deprecaciones explicadas con el por qué y el plan de migración.

**5. Documentación de APIs y SDKs que reduce el tiempo hasta el primer éxito**
La documentación de API más importante es la que lleva al desarrollador de "acabo de descubrir esto" a "ya tengo algo funcionando" en el menor tiempo posible. Define los principios del API writing efectivo: el endpoint overview que explica cuándo usar cada endpoint antes de cómo usarlo, los ejemplos de request y response completos para los casos de uso más comunes (el 80% de los usuarios solo necesita cubrir el 20% de los casos), los mensajes de error explicados con la causa probable y la solución, no solo el código de error, el tutorial de "getting started" separado de la referencia completa (quien empieza no necesita ver todos los parámetros opcionales), y la sección de límites y consideraciones de rendimiento que el desarrollador necesita saber antes de ir a producción.

**6. El proceso de revisión de documentación técnica**
La documentación técnica tiene sus propios filtros de calidad. Define el proceso de revisión en cuatro pasos: la revisión técnica que garantiza que todo lo que se dice es correcto y está actualizado (el revisor técnico verifica que los ejemplos de código funcionan), la revisión de claridad que garantiza que alguien con el nivel de la audiencia objetivo puede seguirla sin preguntas adicionales (el mejor revisor es alguien del nivel del usuario objetivo, no el experto que escribió el código), la revisión de completitud que verifica que no hay gaps entre lo que el lector necesita saber y lo que el documento explica, y la revisión de consistencia terminológica que garantiza que los mismos conceptos se llaman siempre igual en todo el documento.

Termina con la reescritura de una sección del documento actual del usuario aplicando los principios desarrollados, con anotaciones sobre cada decisión de edición.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Mejorar READMEs, propuestas técnicas y documentación de API para que generen adopción y consigan aprobación.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX writing: microcopy que guía y convierte',
                'description'       => 'Domina el UX writing para diseñar el texto de interfaces: los mensajes de error, los CTAs, los tooltips y el microcopy que reduce la fricción y guía al usuario hacia la conversión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX writer senior con experiencia en productos digitales donde el texto de la interfaz no es un detalle de último momento sino un componente de diseño fundamental: los mensajes de error que no frustran, los CTAs que se hacen clic, los tooltips que responden la pregunta antes de que se formule, los empty states que orientan en lugar de confundir, y el onboarding que consigue que el usuario llegue al "aha moment" sin abandonar.

Necesito mejorar el microcopy y el UX writing de mi producto. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de producto digital estás trabajando: app móvil, plataforma web, e-commerce, SaaS B2B, app de consumidor u otro?
2. ¿Cuál es el tono de voz establecido para el producto: formal, cercano, técnico, empático, juguetón o algo intermedio?
3. ¿Qué parte específica del producto quieres mejorar: onboarding, mensajes de error, formularios, empty states, CTAs o notificaciones?
4. ¿Tienes ya textos existentes que quieres revisar o necesitas crear desde cero?
5. ¿Tienes acceso a datos de comportamiento que indiquen dónde los usuarios se quedan atascados o abandonan?

Con esas respuestas, desarrolla la guía completa de UX writing:

**1. Los principios del UX writing efectivo: texto que desaparece**
El mejor UX writing es el que el usuario no nota porque lo guía de forma tan natural que parece obvio. Define los principios fundamentales: la claridad (el texto nunca debe requerir que el usuario lo lea dos veces para entender qué hacer), la concisión (cada palabra que no añade información es una palabra que roba atención; el objetivo es el texto mínimo que cubre la máxima necesidad), la utilidad (el texto debe responder a la pregunta que el usuario tiene en ese momento, no explicar cómo funciona el sistema internamente), la consistencia terminológica (llamar a las mismas cosas siempre igual elimina la carga cognitiva de reaprender vocabulario en cada pantalla), y el tono situacional (la voz de marca es consistente pero el tono se adapta: más cálido en momentos de error, más conciso en flujos de alta frecuencia).

**2. CTAs que se hacen clic: el botón que habla**
El call to action es el microcopy con mayor impacto directo en la conversión. Desarrolla los principios de los CTAs efectivos: la especificidad que elimina la ambigüedad (no "Enviar" sino "Crear mi cuenta", no "Continuar" sino "Ver mi precio"), el principio de que el CTA debe describir qué pasa después del clic desde la perspectiva del usuario (no desde la perspectiva del sistema), la diferenciación entre el CTA principal y las acciones secundarias (el botón primario debe ser visualmente dominante y verbalmente específico; el secundario debe ser menos directo pero igualmente claro), y cómo manejar los CTAs en estados de carga, éxito y error para que el usuario sepa en todo momento qué está pasando.

**3. Mensajes de error que no frustran y que ayudan a resolver**
Los mensajes de error son el momento de mayor fricción en cualquier producto y la mayoría los escribe un desarrollador a las dos de la mañana. Define la anatomía del mensaje de error perfecto: el reconocimiento del problema (qué pasó exactamente, en lenguaje humano no en código de error), la causa cuando es útil saberla (no siempre es necesario y a veces genera más confusión), la solución concreta (qué debe hacer el usuario ahora, no qué debería haber hecho antes), el tono que no culpa al usuario ni suena a sistema roto (evitar exclamaciones, signos de advertencia innecesarios y el vocabulario técnico que solo tiene sentido para el equipo de desarrollo), y cuándo un error debe incluir un enlace de contacto o soporte.

**4. Onboarding que lleva al aha moment sin abandonar**
El onboarding es el UX writing más crítico del producto porque es la primera impresión y porque la tasa de abandono es máxima en los primeros minutos. Define la estrategia de texto para el onboarding efectivo: el welcome copy que establece la expectativa de valor antes de pedir nada al usuario, los tooltips de onboarding que aparecen en el momento contextual correcto (no todos a la vez en una slideshow que el usuario omite), las instrucciones de configuración inicial que explican el beneficio de cada paso antes de pedir el dato (¿por qué necesito darte mi número de teléfono?), los empty states del primer uso que orientan y no paralizan (la pantalla en blanco con "No tienes nada todavía" es un fracaso de UX writing), y los mensajes de progreso que celebran los pequeños logros del usuario en el camino al aha moment.

**5. Formularios: el texto que reduce el abandono**
Los formularios son donde más usuarios abandonan y donde el UX writing tiene mayor potencial de mejora sin tocar el diseño. Define las mejores prácticas para el texto de formularios: los labels que son siempre descriptivos y nunca desaparecen en el campo de texto al hacer clic (el placeholder no es un label y usarlo como tal es un error de accesibilidad y de UX), el helper text que aparece antes del error (explicar el formato esperado antes de que el usuario se equivoque es mejor que un mensaje de error después), los mensajes de validación en tiempo real que confirman que el usuario lo está haciendo bien (el tick verde después de una contraseña válida motiva), los mensajes de error de campo que son específicos al error cometido y no genéricos, y el copy del botón de envío que gestiona las expectativas sobre lo que pasa a continuación.

**6. El proceso de trabajo del UX writer en el equipo de producto**
El UX writing no puede ser un paso al final del diseño. Define cómo integrar el UX writing en el proceso de diseño: la revisión del texto en la fase de wireframing donde el contenido real todavía puede influir en el layout (el lorem ipsum oculta problemas de espacio que el texto real revelaría), el content audit del producto existente que mapea todos los textos de la interfaz y detecta las inconsistencias y las oportunidades, las pruebas de usabilidad específicas para el texto (pedir a los usuarios que piensen en voz alta mientras usan el producto revela qué textos generan confusión), y el glosario de producto que garantiza que todo el equipo llama a las mismas cosas con las mismas palabras.

Termina con la revisión de un fragmento de la interfaz actual del usuario, identificando los problemas de UX writing y proponiendo alternativas mejoradas con la justificación de cada cambio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el microcopy de interfaces digitales para reducir la fricción, mejorar la usabilidad y aumentar las conversiones.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Email de ventas que abre puertas: estructuras y trucos',
                'description'       => 'Escribe emails de prospección que generan respuestas reales: las estructuras, los asuntos y las técnicas de personalización que hacen que el decision maker responda en lugar de archivar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en ventas outbound con experiencia escribiendo emails de prospección en B2B que consiguen tasas de respuesta del 15 al 30% en sectores competitivos donde la bandeja de entrada del decision maker recibe cincuenta mensajes de ventas al día. Has testeado cientos de variantes y sabes exactamente qué funciona y qué va directo a la papelera.

Necesito mejorar mis emails de ventas y prospección. Para asesorarte bien, primero pregúntame:

1. ¿A quién le escribes: cuál es el cargo, el sector y el tamaño de empresa del prospecto típico?
2. ¿Qué vendes y cuál es el resultado concreto que consiguen tus mejores clientes?
3. ¿Estás haciendo cold outreach (sin contacto previo) o warm outreach (han tenido algún punto de contacto)?
4. ¿Cuál es el objetivo del email: conseguir una llamada, una demo, que descarguen algo o que respondan con información?
5. ¿Cuántos emails compone la secuencia y en qué posición de la secuencia está el email que quieres mejorar?

Con esas respuestas, desarrolla la guía de emails de ventas efectivos:

**1. El asunto que consigue la apertura: la batalla del inbox**
El asunto es la única parte del email que el prospecto lee para decidir si abre o archiva. Desarrolla las categorías de asuntos con mayor tasa de apertura en ventas B2B: el asunto de referencia ("Re: [nombre del proyecto que tienen en LinkedIn]"), el asunto de curiosidad específica ("[Empresa del prospecto] + [resultado concreto]"), el asunto de problema directo ("El problema que tienen las empresas de [sector] con [área]"), el asunto de nombre propio que usa el contexto de algo que el prospecto ha dicho o publicado, y los asuntos que nunca funcionan aunque parezcan creativos. Para cada tipo, proporciona tres ejemplos aplicados al contexto del usuario y explica por qué funciona psicológicamente.

**2. Las primeras dos líneas: el gancho que decide si siguen leyendo**
Después del asunto, el prospecto lee las primeras dos líneas (a veces en el preview del email sin abrirlo). Define qué no debe empezar nunca un email de ventas y qué sí funciona: los openers basados en investigación específica del prospecto (un artículo que publicó, un hito de la empresa, un comentario en LinkedIn que demuestra que no eres un robot enviando en masa), el opener de problema compartido con una empresa similar (el caso de cliente que genera identificación instantánea), y el opener de pregunta directa que activa la curiosidad antes de revelar que es un email de ventas.

**3. El cuerpo del email: brevedad y especificidad como estrategia**
El email de ventas perfecto es más corto de lo que el vendedor cree necesario. Define la estructura del cuerpo que funciona: la conexión entre el opener y la propuesta de valor (un puente natural que no parece un cambio de tema abrupto), la propuesta de valor en una línea que describe el resultado del cliente, no las características del producto ("ayudamos a [perfil de empresa] a [resultado medible] en [tiempo]"), la prueba de credibilidad en una sola frase (el cliente conocido, el número concreto, el dato específico que genera confianza sin exagerar), y la razón para actuar ahora que es genuina y no artificial.

**4. El call to action: la pregunta que baja el compromiso al mínimo**
El error más común en los emails de ventas es pedir demasiado en el primer contacto. Define el espectro de CTAs del menor al mayor compromiso y cuándo usar cada uno: la pregunta que valida interés ("¿tiene sentido hablar de esto?"), la propuesta de micro-reunión de quince minutos en lugar de una demo de una hora, la pregunta abierta que invita a responder con información ("¿cuál es el mayor desafío que tienen ahora mismo con [área]?"), y el CTA de recurso de valor que da antes de pedir ("te comparto el caso de cómo [empresa] resolvió exactamente esto, ¿te sería útil?").

**5. La secuencia de follow-ups: la persistencia que no molesta**
El 80% de las ventas ocurre después del quinto contacto pero la mayoría de los vendedores se rinde después del segundo. Define la estrategia de seguimiento que mantiene la conversación sin convertirse en spam: el follow-up que añade valor nuevo en lugar de repetir "solo quería saber si tuviste oportunidad de leer mi anterior mensaje", el espaciado entre emails que respeta el tiempo del prospecto (cuatro a siete días entre los primeros, más tiempo después), el breakup email al final de la secuencia que paradójicamente genera más respuestas que los anteriores, y cuándo y cómo cambiar de canal si el email no genera respuesta.

**6. La personalización que escala sin convertirse en un trabajo de jornada completa**
La personalización real es imposible de hacer a mano para cientos de prospectos, pero sin personalización los emails no funcionan. Define el sistema de personalización a escala: la investigación de tres minutos por prospecto que produce los insights de personalización de mayor impacto (LinkedIn, la web de la empresa y Google Alerts), las plantillas con campos de personalización que parecen escritas a mano sin serlo, la segmentación por perfil que permite crear versiones de email optimizadas para cada tipo de comprador (el CEO necesita oír cosas distintas que el Director de Marketing), y las herramientas de prospección que automatizan la personalización sin que suene robótico.

Termina con la reescritura del email actual del usuario aplicando todos los principios, con anotaciones que explican cada decisión editorial y las variantes de asunto para testear.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Escribir emails de prospección B2B que generan respuestas y consiguen reuniones con decision makers.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product copy: de feature spec a propuesta de valor',
                'description'       => 'Transforma las especificaciones técnicas en lenguaje de cliente: el copy de producto que hace que cada feature resuene, que los release notes generen adopción y que el producto page convierta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product marketer con especialización en copywriting de producto, con experiencia traduciendo la complejidad técnica de features y funcionalidades en mensajes que conectan emocionalmente con el usuario, generan adopción y crean el deseo de pagar por un upgrade. Has trabajado en productos SaaS de distintos tamaños y entiendes la tensión entre lo que el equipo de producto quiere comunicar y lo que el usuario realmente necesita escuchar.

Necesito mejorar el copy de mi producto digital. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de producto es y qué problema principal resuelve en la vida del usuario?
2. ¿Qué formato de copy quieres mejorar: la página principal del producto, los release notes, el copy de una feature específica, el onboarding o los mensajes de upsell?
3. ¿Quién es el usuario primario: desarrolladores, diseñadores, marketers, managers, consumidores finales u otro perfil?
4. ¿Tienes ya un copy existente que quieres revisar o necesitas desarrollar el messaging desde cero?
5. ¿Cuál es la diferenciación principal del producto frente a las alternativas que el usuario tiene?

Con esas respuestas, desarrolla la guía de product copy efectivo:

**1. La transformación fundamental: de features a outcomes**
El error más común en el copy de producto es describir lo que el producto hace en lugar de lo que el usuario logra. Define el framework de transformación feature-benefit-outcome: la feature es la capacidad técnica (informes automáticos de rendimiento), el beneficio es la consecuencia directa (ahorra dos horas a la semana en reporting), el outcome es la transformación en la vida del usuario (dedicar esas dos horas a la estrategia que realmente mueve el negocio). Desarrolla cómo aplicar este framework a tres tipos de features: las features de eficiencia que ahorran tiempo, las features de colaboración que mejoran el trabajo en equipo, y las features de insight que ayudan a tomar mejores decisiones.

**2. El positioning statement: el mensaje que diferencia en un mercado saturado**
Antes de escribir una sola línea de copy, necesitas un positioning statement claro. Define la metodología para construirlo: el marco de Geoffrey Moore adaptado al SaaS moderno (Para [quién], que [tiene este problema], [nombre del producto] es [categoría] que [beneficio diferenciador], a diferencia de [alternativa principal], nuestro producto [razón clave de la diferenciación]), la importancia de elegir un solo enemigo narrativo (el competidor, el proceso manual, la hoja de cálculo, el status quo), y cómo el positioning statement se convierte en el filtro que valida o descarta cada frase de copy del sitio web.

**3. Los release notes que generan adopción y no solo informan**
Los release notes son el copy de producto menos glamoroso y más infrautilizado. Define la diferencia entre los release notes que la gente omite y los que la gente espera: la apertura que destaca el beneficio principal de la release en lenguaje de usuario (no "hemos refactorizado el módulo de autenticación"), la historia de por qué se construyó esta feature (el problema real de usuario que la motivó genera empatía y adopción), las instrucciones de cómo empezar a usarla con el mínimo de pasos posibles, y el tono que celebra el progreso sin sonar a comunicado de prensa corporativo. Incluye los formatos alternativos: el changelog técnico para desarrolladores y el email de anuncio para usuarios menos técnicos.

**4. El copy de las páginas de feature: de la página de pricing a la página de producto**
Las páginas de feature son las páginas más visitadas después de la home en muchos SaaS y las más descuidadas. Define la arquitectura de la página de feature que convierte: el headline que enuncia el outcome principal en primera persona del usuario (no "nuestra plataforma ofrece", sino "consigue X sin tener que Y"), el subheadline que añade especificidad al headline y anticipa la objeción más común, la sección de beneficios en formato visual que diferencia entre lo que el usuario puede hacer y lo que el usuario puede lograr, las capturas de pantalla o demos que muestran el producto en el contexto de uso real del usuario objetivo, y los testimoniales específicos de feature (no de producto general) que prueban que el beneficio prometido se materializa.

**5. Los mensajes de upsell y upgrade que convierten sin sentirse presionadores**
El copy de conversión de free a paid o de plan básico a avanzado es el más delicado en un producto de consumo. Define la estrategia de copy para los momentos de upsell: el principio de mostrar el límite antes de alcanzarlo (el usuario ve que se acerca al límite cuando todavía está en el flujo de trabajo, no después de golpear la pared), el copy del upgrade que articula exactamente qué se desbloquea en términos del trabajo que el usuario ya está haciendo (no una lista de features abstractas), el manejo del precio que siempre lo enmarca como inversión con ROI concreto en lugar de como coste, y los mensajes de churning prevention que ofrecen el downgrade o la pausa antes de la cancelación.

**6. El A/B testing del product copy: qué testear y cómo interpretar los resultados**
El copy es uno de los elementos más fáciles de testear y más raramente testeado de forma sistemática. Define el proceso de testing del product copy: qué elementos tienen mayor impacto en la conversión y merecen ser testeados primero (el headline de la home, el copy del CTA principal, el pricing page headline), cómo diseñar un test de copy que produzca resultados interpretables (la importancia de cambiar una sola variable a la vez), el tamaño muestral mínimo para que el resultado sea estadísticamente significativo, y cómo documentar los aprendizajes de copy de forma que el equipo no tenga que repetir los mismos tests en seis meses.

Termina con la reescritura del copy actual del usuario aplicando el framework desarrollado, con las tres variantes de headline para testear y la justificación de cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Transformar especificaciones técnicas de producto en copy que resuena con el usuario y genera adopción y conversión.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Job descriptions que atraen al candidato ideal',
                'description'       => 'Escribe descripciones de puesto que atraen al talento correcto y filtran el incorrecto: el lenguaje inclusivo, la estructura y las técnicas que hacen que los mejores candidatos quieran aplicar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en talent acquisition con experiencia redactando job descriptions para empresas que compiten por el mismo talento que las grandes tecnológicas y necesitan diferenciarse con el copywriting de sus ofertas de empleo. Has visto de primera mano cómo una job description bien escrita duplica el número de candidatos cualificados y reduce a la mitad el tiempo de cierre de la posición.

Necesito mejorar mis job descriptions para atraer mejor talento. Para asesorarte bien, primero pregúntame:

1. ¿Para qué tipo de posición y sector estás escribiendo la job description?
2. ¿Cuál es el perfil del candidato ideal en términos de experiencia, habilidades y motivaciones?
3. ¿Cuáles son los principales diferenciadores de trabajar en tu empresa frente a las alternativas del candidato?
4. ¿Tienes ya una job description existente que quieres mejorar o empezamos desde cero?
5. ¿Cuáles son las principales dificultades que has tenido con las job descriptions actuales: pocos candidatos, candidatos no cualificados, poca diversidad u otro problema?

Con esas respuestas, desarrolla la guía de job descriptions efectivas:

**1. La apertura que hace que el candidato ideal siga leyendo**
La mayoría de las job descriptions empiezan con un párrafo sobre la empresa que el candidato omite porque podría aplicar a cualquier empresa del sector. Define cómo abrir una job description que engancha: el párrafo de apertura que describe el reto concreto que el nuevo hire va a resolver (no "buscamos a un profesional apasionado y dinámico", sino "nuestro equipo de producto lleva seis meses con una deuda técnica que está bloqueando el roadmap y necesitamos a alguien que la resuelva"), la importancia de explicar el impacto de la posición en el negocio antes de listar los requisitos, y cómo la apertura debe diferenciar la posición de las diez ofertas similares que el candidato leerá esta semana.

**2. Los requisitos que atraen en lugar de filtrar en exceso**
La lista de requisitos es el principal asesino de la diversidad de candidaturas. Define el enfoque correcto: la diferenciación entre requisitos imprescindibles y deseables (y la disciplina de tener no más de cinco en la lista de imprescindibles), la eliminación de los requisitos que no predicen el rendimiento en el puesto pero que excluyen sistemáticamente a ciertos candidatos (el número de años de experiencia que ignora el ritmo de aprendizaje, la titulación específica cuando lo que importa son las habilidades), el lenguaje de requisitos que describe capacidades en lugar de credenciales ("capacidad de gestionar proyectos complejos con múltiples stakeholders" en lugar de "MBA o equivalente"), y la sección de "no necesitas X" que reduce la auto-exclusión de candidatos cualificados que no aplican si no cumplen todos los requisitos.

**3. El lenguaje inclusivo que no excluye antes de que el candidato aplique**
El lenguaje de la job description envía señales sobre la cultura de la empresa antes de que el candidato ponga un pie en ella. Define las mejores prácticas de lenguaje inclusivo: el análisis de género del texto (las palabras con connotación masculina como "competitivo", "dominante" o "rockstar" reducen las aplicaciones de mujeres), el uso del lenguaje de segunda persona ("te unirás a un equipo") en lugar de la tercera ("el candidato se unirá"), la eliminación de los clichés que no dicen nada ("ambiente dinámico", "empresa en crecimiento", "cultura startup") y su reemplazo por descripciones concretas, y las herramientas para hacer el análisis de lenguaje inclusivo de forma automatizada.

**4. La sección de beneficios que diferencia de verdad**
"Salario competitivo, seguro médico y trabajo en equipo dinámico" es la descripción de beneficios que todas las empresas copian y que a ningún candidato le dice nada. Define la estrategia de comunicación de beneficios que diferencia: la especificidad que hace que los beneficios sean creíbles (el rango de salario exacto, los días de vacaciones concretos, el presupuesto de formación en euros), los beneficios no económicos que el talento senior más valora y que pocas empresas comunican bien (la autonomía real en la toma de decisiones, el acceso al equipo de dirección, la posibilidad de publicar sobre el trabajo técnico), y cómo comunicar la cultura de una forma que sea verificable y honesta.

**5. La estructura de la job description que el candidato navega de forma natural**
La arquitectura de la oferta de empleo afecta a cuántas personas la leen completa. Define la estructura óptima: el título del puesto que usa el lenguaje que el candidato busca en Google y LinkedIn (no el título interno que solo tiene sentido dentro de la jerarquía de la empresa), la longitud ideal (menos de 600 palabras en la mayoría de los casos; las listas de requisitos largas correlacionan negativamente con la calidad de las candidaturas), el orden de las secciones que pone el impacto de la posición antes de los requisitos y los requisitos antes de los beneficios, y la llamada a la acción que da instrucciones claras sobre cómo aplicar y qué esperar en el proceso.

**6. El proceso de revisión de la job description antes de publicar**
Define el checklist de revisión antes de publicar: la prueba del candidato ideal (pedir a alguien del perfil que la lea y diga qué preguntas le quedan sin responder), la prueba del espejo de cultura (¿describe la oferta cómo es realmente trabajar en la empresa o cómo le gustaría que fuera?), la verificación de que los requisitos son realmente necesarios para el puesto y no son un listado de lo que tiene el mejor empleado actual en ese rol, la comprobación de accesibilidad del lenguaje (¿una persona sin contexto del sector entendería a qué se dedica la empresa y cuál es el impacto de la posición?), y la revisión legal para la jurisdicción correspondiente.

Termina con la reescritura de la job description actual del usuario, con las anotaciones que explican cada cambio y las tres mejoras de mayor impacto en la cantidad y calidad de candidaturas esperadas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Escribir job descriptions que atraen candidatos cualificados y diversos, reduciendo el tiempo de contratación.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial storytelling: números que convencen a inversores',
                'description'       => 'Transforma datos financieros en narrativas que convencen: las técnicas de storytelling para presentaciones de inversión, pitch decks y comunicaciones a stakeholders que hacen que los números cobren vida.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en comunicación financiera con experiencia asesorando a equipos de dirección, CFOs y fundadores en cómo presentar información financiera compleja de forma que la audiencia no solo entienda los números sino que tome la decisión que el presenter espera. Has preparado pitch decks para rondas de financiación, presentaciones de resultados para consejos de administración y comunicaciones a inversores institucionales.

Necesito mejorar cómo comunico la información financiera de mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el formato de la presentación: pitch deck para inversores, presentación de resultados trimestrales, informe anual, comunicación interna al equipo directivo u otro?
2. ¿Quién es la audiencia: inversores de venture capital, business angels, inversores institucionales, el consejo de administración, accionistas u otra audiencia?
3. ¿Cuál es la situación financiera actual de la empresa: crecimiento acelerado, rentabilidad consolidada, reestructuración o una situación más compleja?
4. ¿Cuál es el objetivo concreto de la presentación: conseguir financiación, aprobar un presupuesto, comunicar resultados o alinear expectativas?
5. ¿Cuáles son los números o métricas principales que quieres comunicar y cuáles son las debilidades o los puntos delicados que necesitas gestionar?

Con esas respuestas, desarrolla la guía de financial storytelling:

**1. La narrativa antes de los números: el arco de la historia financiera**
Los números sin narrativa son datos; los datos sin contexto no convencen. Define el arco narrativo de una presentación financiera efectiva: el contexto de mercado que da escala a los números de la empresa (el tamaño del mercado que justifica la ambición, la tendencia del sector que hace inevitable el crecimiento), la historia del negocio que explica cómo se llegó a los números actuales (las decisiones estratégicas que produjeron los resultados, no solo los resultados), la narrativa del futuro que conecta el pasado con la proyección (por qué los drivers que han generado crecimiento seguirán operando), y el ask o la decisión que la presentación busca conseguir como consecuencia natural de la narrativa.

**2. La visualización de datos financieros que cuenta la historia correcta**
El mismo conjunto de datos puede contar historias muy diferentes según cómo se visualice. Define los principios de visualización financiera persuasiva: la elección del tipo de gráfico que refuerza el mensaje (el gráfico de línea para mostrar tendencia de crecimiento, el de barras para comparar periodos, el waterfall para explicar la evolución de un indicador), el uso del color para guiar la atención del espectador hacia el dato más importante de cada gráfico, la eliminación del ruido visual (las leyendas que no aportan, los decimales innecesarios, los ejes con demasiadas marcas) que diluye el impacto del dato clave, y la anotación directa en el gráfico que cuenta la historia sin obligar al espectador a interpretar.

**3. Las métricas que importan y cómo presentarlas según la audiencia**
Un inversor de venture capital mira métricas completamente diferentes a las que mira un inversor de private equity o un banco. Define el perfil de métricas por tipo de audiencia: para venture capital (el ARR y su tasa de crecimiento, el NRR o net revenue retention, el CAC y el LTV con el ratio LTV:CAC, el burn rate y el runway, el número de clientes enterprise), para private equity (el EBITDA y sus márgenes, el flujo de caja libre, la deuda neta sobre EBITDA, los drivers del múltiplo de valoración), y para el consejo de administración o accionistas (el cumplimiento del presupuesto con la explicación de las desviaciones, los indicadores adelantados que predicen el rendimiento futuro). Para cada audiencia, explica qué narrativa conecta cada métrica con la decisión que se les pide tomar.

**4. Gestionar los números difíciles: cómo presentar debilidades sin perder credibilidad**
Las presentaciones que omiten las malas noticias pierden credibilidad y las que las esconden destruyen la confianza cuando se descubren. Define la estrategia para comunicar resultados negativos, desviaciones o retos: el principio de la honestidad proactiva (decirlo tú antes de que lo pregunten demuestra control de la situación), la estructura problema-causa-acción que convierte un número negativo en una historia de gestión efectiva (aquí está el problema, aquí están las razones y aquí está lo que ya estamos haciendo), el contexto de mercado que distingue los problemas sistémicos de los específicos de la empresa, y los indicadores adelantados que demuestran que la corrección ya está funcionando incluso si los resultados rezagados todavía no lo reflejan.

**5. El pitch financiero para inversores: de los números al check**
El pitch financiero es el momento donde la narrativa y los números se funden en el argumento de inversión. Define la arquitectura del pitch financiero: la diapositiva de tracción que muestra el crecimiento de la forma más impactante posible (el gráfico de hockey stick con las fechas de los hitos que lo explican), la diapositiva de unit economics que demuestra que el modelo de negocio funciona a nivel individual antes de hablar de escala, la diapositiva de proyecciones que es ambiciosa pero defendible (con los supuestos explícitos que el inversor puede cuestionar), la diapositiva del uso de fondos que conecta cada euro con la métrica de crecimiento que financia, y cómo anticipar y preparar las respuestas a las preguntas que todo inversor serio hará.

**6. La comunicación financiera ongoing: los informes que generan confianza**
La confianza de los inversores y stakeholders se construye con la consistencia de la comunicación financiera a lo largo del tiempo. Define el sistema de comunicación financiera periódica: el investor update mensual que informa de los progresos sin convertirse en una presentación de ventas (los highlights, los lowlights y los asks en menos de una página), el informe trimestral que compara resultados vs. presupuesto con la explicación de las desviaciones más importantes, y las comunicaciones ad hoc para eventos significativos (una ronda de financiación, un hito de producto, un cambio en el equipo directivo) que requieren un tono y un formato diferente al update rutinario.

Termina con la revisión de la presentación financiera actual del usuario, identificando los tres cambios de mayor impacto en la narrativa y la visualización, con ejemplos concretos de antes y después.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Presentar información financiera compleja de forma que convenza a inversores, consejos de administración y stakeholders.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Redacción jurídica persuasiva: alegatos y memos que impactan',
                'description'       => 'Escribe documentos jurídicos que convencen: los alegatos que persuaden al tribunal, los memos que alinean al cliente y las técnicas de escritura legal que combinan rigor y poder persuasivo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado litigante con experiencia en la redacción de documentos jurídicos que no solo son legalmente impecables sino que tienen un poder persuasivo real: los alegatos que hacen que el juez incline su criterio, los memos jurídicos que el cliente entiende y valora, y las comunicaciones que simplifican la complejidad del derecho sin sacrificar la precisión. Has redactado para distintas jurisdicciones y conoces la diferencia entre escribir para un tribunal y escribir para un cliente.

Necesito mejorar la calidad persuasiva de mis documentos jurídicos. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de documento jurídico quieres mejorar: demanda, contestación, recurso, memo jurídico para cliente, contrato, o un tipo diferente?
2. ¿Quién es el destinatario principal: un juez o magistrado, un árbitro, el cliente, la contraparte o el departamento jurídico de una empresa?
3. ¿Cuál es la especialidad del asunto: civil, penal, mercantil, laboral, administrativo u otra?
4. ¿Tienes ya un borrador que quieres revisar o necesitas construir la estructura desde cero?
5. ¿Cuáles son los puntos fuertes y los puntos débiles de tu posición jurídica en este asunto?

Con esas respuestas, desarrolla la guía de redacción jurídica persuasiva:

**1. La estructura del argumento legal que convence**
Un documento jurídico persuasivo no es solo un inventario de argumentos sino una arquitectura que lleva al lector desde el problema hasta la conclusión de forma inevitable. Define la estructura del argumento legal efectivo: el principio IRAC aplicado a la escritura persuasiva (Issue, Rule, Application, Conclusion), pero adaptado para que el redactor no caiga en el error de presentar todos los argumentos con el mismo peso (el argumento más fuerte siempre va primero, no al final), la importancia de anticipar y refutar los argumentos de la parte contraria en el propio documento (el juez los leerá en el siguiente escrito; es mejor que los gestiones tú), y cómo construir la coherencia narrativa del documento de forma que cada sección refuerce la siguiente.

**2. El lenguaje jurídico que clarifica en lugar de oscurecer**
El mal lenguaje jurídico usa la complejidad para aparentar rigor; el buen lenguaje jurídico usa la claridad para demostrar dominio. Define las técnicas de simplificación sin pérdida de precisión: la eliminación de los latinismos innecesarios que tienen equivalente perfecto en castellano (sin sacrificar los que no tienen equivalente preciso), la preferencia por las frases cortas y activas frente a los párrafos de cincuenta palabras con múltiples subordinadas, la distinción entre el léxico técnico necesario (que el lector especializado espera) y el vocabulario arcaico que no añade precisión sino que añade distancia, y el uso de ejemplos y analogías para ilustrar los conceptos abstractos sin comprometer la exactitud jurídica.

**3. El alegato que persuade al tribunal: la narrativa de los hechos**
Los jueces no aplican el derecho en abstracto; lo aplican a unos hechos concretos que han interpretado de una determinada forma. Define la estrategia narrativa de los hechos en el alegato: la presentación de los hechos que no es neutral (siempre hay una forma de contar los mismos hechos que favorece más a tu cliente sin faltar a la verdad) pero que tampoco puede ser tendenciosa hasta el punto de perder credibilidad, la selección de los hechos que incluir y los que omitir basada en su relevancia para los argumentos jurídicos que vas a desarrollar, el uso del orden cronológico vs. el orden temático según qué estructura refuerza mejor la narrativa favorable al cliente, y el vocabulario que describe los hechos con las palabras que tienen la connotación jurídica correcta.

**4. El memo jurídico para el cliente: la traducción del derecho**
El memo para el cliente es un documento jurídico de un tipo muy diferente: el destinatario no es un experto y necesita entender no solo la conclusión sino el razonamiento detrás. Define la estructura del memo cliente efectivo: la conclusión al principio (el cliente quiere saber el resultado antes que el razonamiento; si la conclusión es favorable, ponla primero para que lea el resto con confianza; si es desfavorable, también ponla primero para gestionar la expectativa), la explicación del marco jurídico relevante en términos de riesgo y probabilidad en lugar de en términos de normas y jurisprudencia (el cliente quiere saber sus posibilidades, no las fuentes del derecho), y las recomendaciones prácticas que traducen el análisis jurídico en decisiones que el cliente puede tomar.

**5. La precisión terminológica que diferencia al abogado excelente**
En derecho, una palabra mal elegida puede cambiar el significado de un documento de forma sustancial. Define el proceso de revisión terminológica: la verificación de la consistencia en el uso de los términos jurídicos a lo largo de todo el documento (llamar siempre a las mismas partes, hechos y conceptos con los mismos términos), el análisis de las ambigüedades que podrían ser interpretadas en contra de la posición del cliente (en los contratos, toda ambigüedad es un litigio potencial; en los alegatos, toda imprecisión es una grieta que la parte contraria explotará), y la revisión de las referencias normativas y jurisprudenciales para verificar que son precisas, actuales y que el contexto citado es el correcto.

**6. La revisión final del documento jurídico: el filtro del abogado contrario**
El mejor test de un alegato es leerlo con los ojos del abogado de la contraparte buscando los puntos débiles. Define el proceso de revisión desde la perspectiva adversarial: los argumentos que el abogado contrario atacará primero y cómo reforzarlos o anticipar la respuesta, las incoherencias internas entre distintas partes del documento que un lector adversarial detectará aunque el redactor no las haya visto, las afirmaciones que van más allá de lo que los hechos demostrados permiten (el exceso de alcance en las afirmaciones daña la credibilidad del conjunto del argumento), y el tono que puede ser percibido como agresivo o poco profesional por el tribunal aunque sea jurídicamente correcto.

Termina con la revisión de un fragmento del documento actual del usuario, identificando los tres cambios que tendrían mayor impacto en la persuasividad del texto, con las alternativas de redacción propuestas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejorar la calidad persuasiva de documentos jurídicos: alegatos, memos y contratos que convencen al lector especializado.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer communication: emails y mensajes que retienen',
                'description'       => 'Escribe comunicaciones de Customer Success que construyen relación y retienen: los emails de onboarding, las actualizaciones de estado y los mensajes de recuperación que hacen que el cliente quiera quedarse.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en Customer Success con experiencia en cómo la comunicación escrita con el cliente afecta directamente a las métricas de retención, expansión y NPS. Has diseñado flujos de comunicación para productos SaaS donde la diferencia entre un cliente que renueva y uno que cancela a menudo se reduce a si sintió que alguien se preocupaba realmente por su éxito o solo por su contrato.

Necesito mejorar la calidad de mis comunicaciones escritas con clientes. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de comunicación quieres mejorar: emails de onboarding, actualizaciones de estado, mensajes de renovación, comunicaciones de incidencia, emails de recuperación de cuentas en riesgo u otro?
2. ¿Cuál es el perfil del cliente: empresa grande con múltiples stakeholders, pyme, consumidor individual o un perfil mixto?
3. ¿Cuál es el tono establecido para la comunicación de tu empresa: formal, cercano, técnico, empático u otro?
4. ¿Cuáles son los momentos del ciclo de vida del cliente donde la comunicación falla más actualmente?
5. ¿Tienes ya plantillas de comunicación existentes que quieres revisar o necesitamos construir desde cero?

Con esas respuestas, desarrolla la guía de comunicación de Customer Success efectiva:

**1. El principio de la comunicación centrada en el éxito del cliente, no en las necesidades del equipo**
La mayoría de los emails de Customer Success están escritos desde la perspectiva de quién los envía (el CSM que necesita hacer un check-in, el equipo que quiere promover una feature) en lugar de desde la perspectiva del cliente (qué problema tiene hoy, qué resultado está intentando conseguir). Define el cambio de perspectiva: empezar siempre por el contexto del cliente (qué ha pasado en su cuenta, en qué etapa de la adopción está, qué objetivos declaró al inicio), conectar la comunicación con ese contexto antes de pasar al mensaje principal, y el test de la relevancia para cada comunicación (¿este email hace la vida del cliente más fácil o solo satisface una necesidad interna del equipo de CS?).

**2. Los emails de onboarding que llevan al aha moment**
El onboarding por email es la primera conversación escrita con el cliente y determina si va a comprometerse con el producto o si va a adoptarlo de forma superficial y cancelar a los tres meses. Define la secuencia de emails de onboarding que construye hábito: el email de bienvenida que confirma que el cliente tomó la decisión correcta (con el quick win que puede conseguir en las primeras dos horas), los emails de activación que acompañan al cliente hasta completar las acciones de setup críticas para el éxito (con la razón del por qué cada acción importa, no solo el cómo), los emails de progreso que celebran los hitos de adopción (el primer informe generado, la primera integración configurada, el primer colaborador invitado), y el email de check-in a los catorce días que diagnostica si el cliente está en el camino correcto.

**3. Las actualizaciones de estado y los business reviews escritos que generan valor**
El QBR escrito es el documento que el cliente usa para justificar internamente la renovación de la suscripción a su dirección. Define la estructura del business review escrito que demuestra ROI: la sección de resultados que traduce el uso del producto en impacto en los KPIs del cliente (no el número de logins sino las horas ahorradas, no el número de informes generados sino la reducción del tiempo de decisión), la comparativa de los objetivos declarados al inicio vs. los resultados conseguidos (con la explicación honesta de los gaps cuando los hay), las recomendaciones de próximos pasos que demuestran que el CSM tiene un plan para el éxito futuro del cliente, y el resumen ejecutivo de media página para el stakeholder que no leerá el documento completo.

**4. Las comunicaciones de incidencia que convierten un problema en lealtad**
Paradójicamente, una incidencia bien gestionada puede ser el momento que más refuerza la relación con el cliente. Define la comunicación de incidencia perfecta: la actualización proactiva antes de que el cliente pregunte (el cliente que descubre el problema antes de que lo hayas notificado ya está en un estado de mayor alarma), el tono que reconoce el impacto sin exagerar ni minimizar, la estructura de actualización periódica que da visibilidad del progreso sin prometer tiempos que no puedes garantizar, la comunicación de resolución que explica qué pasó y qué medidas se han tomado para evitar que vuelva a ocurrir, y el seguimiento post-incidencia que verifica que el cliente ha recuperado la confianza.

**5. Los mensajes de cuenta en riesgo: la comunicación que evita la cancelación**
La comunicación con un cliente que está considerando cancelar es el tipo de comunicación de CS más difícil y más crítico. Define la estrategia de comunicación de retención: cómo identificar las señales de riesgo en el comportamiento del cliente que deben activar la comunicación proactiva antes de que el cliente diga que quiere cancelar, el email de diagnóstico que abre la conversación sin sonar a alarma de ventas ("hemos notado X en tu cuenta y queríamos asegurarnos de que no hay nada que podamos resolver"), la conversación de discovery escrita que identifica la raíz del desencanto (que raramente es el precio aunque el cliente diga que es el precio), y el plan de acción documentado que demuestra que hay un camino hacia el éxito antes de pedir la renovación.

**6. El tono y la voz en la comunicación de Customer Success**
La consistencia del tono en todas las comunicaciones construye la confianza del cliente a lo largo del tiempo. Define las dimensiones del tono en CS: el equilibrio entre la calidez personal (el cliente debe sentir que hay una persona que le conoce, no un sistema automatizado) y el profesionalismo que da confianza en la capacidad técnica, el uso del nombre del cliente y de detalles específicos de su cuenta que demuestran que la comunicación no es genérica, la adaptación del nivel técnico del lenguaje al interlocutor (el administrador técnico necesita detalles que el CEO no quiere ver), y cómo mantener el tono positivo en las conversaciones difíciles sin caer en el optimismo vacío que irrita al cliente que tiene un problema real.

Termina con la revisión de una comunicación existente del usuario, con las mejoras propuestas y las plantillas de los tres tipos de email más críticos para la retención, adaptadas al contexto descrito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Mejorar las comunicaciones escritas de Customer Success para aumentar la retención, la adopción y el NPS.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuestas freelance que ganan proyectos',
                'description'       => 'Escribe propuestas que consiguen el proyecto: la estructura, el lenguaje y las técnicas que hacen que el cliente potencial elija tu propuesta frente a la del competidor más barato.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con una tasa de conversión de propuesta a proyecto del 60% o superior, que ha aprendido a lo largo de cientos de propuestas enviadas qué funciona y qué no cuando compites con otros freelances o con agencias por el mismo proyecto. Sabes que la propuesta no es un documento administrativo sino el primer entregable del proyecto: demuestra tu forma de pensar, tu comprensión del problema del cliente y por qué eres la elección correcta.

Necesito mejorar mis propuestas para ganar más proyectos. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y cuál es el tipo de proyecto para el que sueles enviar propuestas?
2. ¿Cuál es el perfil típico del cliente que recibirá la propuesta: empresa grande, startup, agencia, autónomo, sector público?
3. ¿Cuántas propuestas envías al mes aproximadamente y cuál es tu tasa de conversión actual?
4. ¿Tienes ya una propuesta existente que quieres revisar o necesitamos construir la estructura desde cero?
5. ¿Cuál es el mayor obstáculo que encuentras en tus propuestas actuales: precio, confianza, diferenciación o algo específico?

Con esas respuestas, desarrolla la guía de propuestas freelance que ganan:

**1. El diagnóstico antes de la propuesta: la investigación que diferencia**
El freelance que envía una propuesta sin haber investigado a fondo el cliente y el proyecto tiene la misma tasa de éxito que el que responde a un anuncio de trabajo con el CV genérico. Define el proceso de investigación previo: las preguntas que debes responder antes de escribir una sola línea (cuál es el problema real detrás del brief, qué ha intentado el cliente antes, quiénes son sus competidores, qué métricas importan en su sector), cómo usar LinkedIn, la web del cliente y las publicaciones del sector para personalizar la propuesta con información que demuestra que la has preparado para este cliente específico, y la decisión de si enviar propuesta o no basada en la valoración honesta de si puedes entregar el resultado que el cliente necesita.

**2. La apertura que hace que el cliente deje de leer otras propuestas**
La mayoría de las propuestas freelance empiezan con un párrafo sobre el freelance ("soy un profesional con X años de experiencia especializado en Y"). El cliente ya leyó eso en diez propuestas antes que la tuya. Define la apertura que diferencia: la demostración de que has entendido el problema del cliente mejor de lo que lo entiende él mismo (articular el problema con más precisión que el propio cliente genera confianza inmediata), la hipótesis de trabajo que propones antes de conocer todos los detalles (demuestra pensamiento propio, no solo capacidad de seguir instrucciones), y el gancho que conecta la comprensión del problema con la solución que vas a proponer.

**3. La propuesta de solución que es específica y no genérica**
Las propuestas genéricas ("desarrollaré una estrategia personalizada para tus necesidades") no convencen a nadie porque no demuestran que tienes un enfoque claro. Define la estructura de la solución propuesta: el plan de trabajo en fases con entregables concretos para cada fase (el cliente debe poder imaginar exactamente qué va a recibir), la metodología que describes brevemente explicando por qué ese enfoque es el correcto para este problema específico (no la metodología genérica que usas para todo, sino la adaptación de ella al contexto del cliente), y las preguntas que necesitas que el cliente responda antes de empezar (demuestra rigor y genera una conversación que te diferencia del freelance que solo espera que le digan qué hacer).

**4. El precio que justifica y que no disculpa**
El precio es el momento donde más freelances pierden la propuesta, no porque sea alto sino porque no está justificado. Define la estrategia de presentación del precio: el desglose que hace visible el valor de cada componente (el cliente que ve 5.000 euros en una línea dice que es caro; el que ve qué incluye cada partida comprende el valor), el framing del precio como inversión con ROI cuando es posible articularlo (si tu trabajo va a generarle X euros o ahorrarle Y horas, mencionarlo transforma el precio en una ecuación racional), la política de revisiones y cambios que protege tu tiempo y da seguridad al cliente, y cuándo ofrecer opciones de precio y cuándo una sola propuesta es más efectiva.

**5. La prueba social y las credenciales que generan confianza sin sonar a currículum**
El cliente no puede evaluar tu trabajo antes de contratarte; solo puede evaluar las señales de que otros han confiado en ti y que ha funcionado. Define cómo integrar la prueba social en la propuesta de forma que no interrumpa el flujo: el caso de éxito relevante al problema actual (no el más impresionante sino el más parecido al problema del cliente, con métricas concretas de resultado), el testimonio específico de un cliente en una situación similar al que recibe la propuesta, y la forma de presentar tu experiencia que demuestra comprensión profunda del sector del cliente en lugar de listar proyectos sin contexto.

**6. El cierre y el seguimiento que convierte el interés en contrato**
La propuesta no termina cuando la envías; el seguimiento es parte de la propuesta. Define el proceso de cierre: el email de envío de la propuesta que no es solo "adjunto mi propuesta" sino que destaca el punto más importante y propone un próximo paso concreto, el seguimiento a los tres a cinco días si no hay respuesta (con valor añadido, no con "solo quería saber si tuviste oportunidad de revisar"), la conversación de feedback cuando el cliente no elige tu propuesta (que es la información más valiosa que puedes obtener para mejorar las siguientes), y la negociación del alcance o el precio cuando el cliente quiere trabajar contigo pero negocia las condiciones.

Termina con la reescritura de la propuesta actual del usuario aplicando todos los principios, con anotaciones sobre cada decisión y las tres fortalezas y las tres mejoras de mayor impacto en la tasa de conversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Escribir propuestas de freelance que consiguen más proyectos y justifican precios más altos frente a la competencia.',
                'vote_score'        => 47,
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
