<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills132Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Storytelling de marca: la narrativa que conecta emocionalmente',
                'description'       => 'Construye la narrativa de marca que conecta emocionalmente usando el arco del héroe, los momentos de verdad y coherencia en todos los canales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un estratega de marca y copywriter con experiencia construyendo narrativas de marca para empresas de consumo, tecnología y startups que compiten en mercados saturados. Quiero construir o reformular la historia de mi marca de forma que conecte emocionalmente con mi audiencia y sea coherente en todos los puntos de contacto.

**Por qué la historia importa más que el producto:**

Empieza explicando por qué en mercados donde los productos son cada vez más similares, la narrativa de marca es el principal diferenciador: cómo el cerebro humano procesa las historias de forma diferente a los datos (las historias activan emociones y memoria), y por qué las marcas que dominan su categoría suelen ser las mejores contadoras de historias, no necesariamente las de mejor producto.

**El arco del héroe aplicado al marketing:**

Explica cómo aplicar la estructura del viaje del héroe de Joseph Campbell a la comunicación de marca: la clave está en que el héroe de la historia NO es la marca sino el cliente. La marca es el mentor (como Gandalf o Yoda) que da al héroe (el cliente) las herramientas o la guía para superar su desafío y transformarse. Dame la estructura completa: el mundo ordinario del cliente (el problema actual), la llamada a la aventura (el deseo de cambio), el mentor que aparece (la marca), las pruebas y obstáculos, la transformación y el nuevo estado.

**La plataforma de storytelling de marca:**

Ayúdame a construir los elementos fundamentales de la narrativa de mi marca: el «por qué» (la causa o creencia que está detrás de la empresa, más allá del producto), el antagonista (el enemigo de la historia: puede ser una situación, una mentalidad o una industria obsoleta, nunca un competidor específico), los valores que guían las decisiones, y la promesa de transformación que hago al cliente.

**Los momentos de verdad:**

Define los cinco o seis momentos de verdad donde la historia de mi marca se manifiesta de forma tangible: el primer contacto (anuncio, referido, búsqueda en Google), la primera impresión del sitio web o tienda, el primer uso del producto, el primer problema que surge, la renovación o segunda compra, y la recomendación a otro. ¿Cómo aseguro que la narrativa de marca sea coherente y reconocible en cada uno de estos momentos?

**Coherencia en todos los canales:**

¿Cómo mantengo la coherencia de la narrativa cuando la marca habla en Instagram, LinkedIn, el blog, el email, el packaging y el equipo de ventas? Dame el proceso de documentación: la guía de voz y tono de marca (qué palabras usamos, cuáles evitamos, cómo suena la marca según el canal y el contexto emocional), los arquetipos de personaje de marca (Jung aplicado a las marcas) y los temas narrativos recurrentes que funcionan como leitmotifs.

**Storytelling en el contenido:**

Dame la estructura de los formatos de contenido que mejor comunican la historia de marca: el caso de éxito del cliente como historia de transformación (antes / desafío / intervención / resultado / vida después), el behind-the-scenes que humaniza la empresa, el manifiesto de marca para el «acerca de», y el contenido de valores que muestra en qué cree la empresa, no solo qué vende.

**Medir si la historia funciona:**

¿Cómo mido si el storytelling está funcionando? Dame las métricas cualitativas (coherencia de la percepción de marca en encuestas NPS, palabras que los clientes usan para describir la marca en reseñas) y cuantitativas (tasa de engagement en contenido narrativo vs contenido de producto, tiempo de permanencia en la página de «acerca de», tasa de conversión de usuarios que han consumido contenido de historia vs los que no).

Dame un ejercicio práctico de definición de la narrativa de marca con preguntas guía y un ejemplo de cómo se ve la historia completada para una marca ficticia que pueda usar como referencia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construcción de la narrativa de marca y estrategia de storytelling',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Documentación técnica que la gente realmente lee',
                'description'       => 'Escribe READMEs, ADRs, runbooks y guías de estilo de documentación que mantienen la consistencia y utilidad real en el equipo técnico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Technical Writer con experiencia en empresas de software que han pasado de la ausencia de documentación al caos de documentación desactualizada, y han llegado finalmente a un sistema que el equipo realmente usa y mantiene. Quiero mejorar radicalmente la documentación técnica de mi equipo.

**El problema de la documentación técnica:**

Empieza describiendo los tres estados típicos de la documentación en equipos de ingeniería: sin documentación (todo el conocimiento en la cabeza de las personas), documentación que nadie lee (extensa pero desactualizada y difícil de navegar), y documentación que funciona (concisa, actualizada y estructurada para ser encontrada cuando se necesita). ¿Por qué la mayoría de los equipos quedan atascados en el segundo estado?

**El README que convierte al nuevo desarrollador:**

Diseña la estructura del README ideal para un repositorio de código: qué es el proyecto en una oración, cuándo usar este servicio (y cuándo no), los prerrequisitos de entorno, la guía de instalación local paso a paso que funciona para alguien que llega hoy, cómo ejecutar los tests, la arquitectura de alto nivel en un diagrama simple, y los enlaces a la documentación más detallada. ¿Qué incluyo versus qué mantengo en otro documento?

**Architecture Decision Records (ADRs):**

Explica qué son los ADRs y por qué son el formato más valioso de documentación para decisiones técnicas: el contexto, la decisión, las alternativas consideradas y sus trade-offs, y las consecuencias esperadas. Dame la plantilla de ADR de Nygard con ejemplos concretos. ¿Cómo establezco el proceso de ADR en el equipo: quién los escribe, cuándo, dónde se almacenan y cómo se actualizan si la decisión cambia?

**Runbooks operacionales:**

Diseña el runbook para las incidencias más comunes en producción: la estructura básica (síntoma observable, causa probable, pasos de diagnóstico, pasos de resolución, cómo verificar que está resuelto, cómo documentar el incidente). ¿Cuál es el nivel de detalle correcto: tan específico que un ingeniero de guardia que nunca ha visto el sistema pueda seguirlo a las 2 de la mañana?

**La guía de estilo de documentación:**

Crea la guía de estilo que mantiene la consistencia en toda la documentación técnica del equipo: el tono (activo, directo, sin jerga innecesaria), el formato de los títulos, el uso de listas frente a párrafos, cómo documentar las APIs (con ejemplos de request y response siempre), cómo tratar el código en línea versus bloques de código, y las palabras que evitamos (simplemente, obviamente, trivialmente) porque insultan al lector.

**Documentación como parte del proceso de desarrollo:**

¿Cómo integro la documentación en el flujo de trabajo del equipo para que no sea una tarea que se pospone? Dame los gatillos que obligan a documentar: la definición de done de una PR incluye actualizar el README o añadir un ADR si la decisión es significativa, el runbook de un nuevo servicio se crea antes del go-live (no después del primer incidente), y la documentación de la API se genera automáticamente desde el código (OpenAPI/Swagger) siempre que sea posible.

**Encontrar la documentación cuando se necesita:**

¿Dónde vive la documentación y cómo la organizo? Compara las estrategias: Confluence (pros y contras), documentación en el mismo repositorio (docs-as-code con Markdown), wikis en GitHub/GitLab, y la herramienta de búsqueda unificada que conecta todas las fuentes. ¿Cuál es la estrategia de organización que hace la documentación encontrable sin taxonomías perfectas?

Dame una plantilla de ADR, la estructura de un README modelo y la checklist de documentación que incluyo en la definition of done de cualquier PR que cambia arquitectura o introduce un servicio nuevo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de documentación técnica que el equipo de ingeniería realmente mantiene y usa',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Presentación de diseño: convence sin comprometer la calidad',
                'description'       => 'Presenta tu trabajo de diseño de forma que convenza, maneja el feedback destructivo y consigue aprobación sin comprometer la calidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Design Lead con experiencia presentando trabajo de diseño a stakeholders con distintos niveles de comprensión del diseño: desde directores de marketing que opinan sobre el color del botón hasta CEOs que preguntan «¿por qué no ponemos el logo más grande?» Necesito aprender a presentar mi trabajo de diseño de forma que genere confianza, facilite feedback útil y consiga aprobación sin que la calidad del diseño se destruya en el proceso.

**El diseño como argumento, no como arte:**

Empieza explicando el cambio de mentalidad fundamental: cuando presentas diseño internamente, no estás mostrando algo bonito sino defendiendo decisiones. Cada decisión de diseño responde a una necesidad del usuario o un objetivo de negocio. Si no puedes articular por qué tomaste una decisión en términos de usuario o negocio, es difícil defenderla cuando alguien la cuestiona.

**Estructura de la presentación de diseño:**

Dame el guión de una presentación de diseño efectiva: empezar recordando el problema que estábamos resolviendo y los criterios de éxito que definimos juntos, explicar el proceso (no mostrar solo el resultado final: mostrar el camino genera confianza), presentar la solución conectando cada decisión con el problema o los datos, y terminar con los próximos pasos concretos (qué necesito del equipo para avanzar).

**La narrativa de las decisiones:**

Explica cómo narro cada decisión de diseño en una presentación: el formato «decidimos X porque Y» donde Y es siempre una necesidad del usuario, un dato de investigación o un objetivo de negocio. Dame ejemplos de cómo transformo la justificación débil («usé este color porque combina bien») en la justificación fuerte («elegí este nivel de contraste porque cumple AA de WCAG y en los tests de usabilidad los usuarios de mayor edad tuvieron dificultad con el color original»).

**Manejo del feedback destructivo:**

¿Qué hago cuando un stakeholder dice «no me gusta el azul», «ponlo más grande» o «mi mujer vio el prototipo y cree que...»? Dame las técnicas específicas para redirigir el feedback de opinión hacia el feedback útil: «¿qué problema estás intentando resolver con ese cambio?», «¿cómo afecta eso al objetivo que definimos?», y el uso del silencio y la reformulación para ganar tiempo y cambiar el foco.

**Facilitar el feedback en lugar de recibirlo:**

Explica cómo diseño la sesión de presentación para que el feedback sea útil desde el inicio: separar la sesión en dos partes (primero escucháis, luego hablamos), dar un framework de feedback («por favor, pensad en feedback desde la perspectiva de nuestro usuario objetivo»), usar el método CRIT (Critique Is To Improve, no para validar el gusto personal) y proporcionar un formulario de feedback estructurado cuando hay muchos stakeholders.

**Gestionar el diseño por comité:**

¿Cómo evito que cada stakeholder añada su opinión y el diseño termine siendo una ensalada de compromisos? Dame el proceso de decisión claro: quién es el Decider final, cómo documento los desacuerdos y la decisión tomada, y el proceso de escalar cuando hay un bloqueo genuino entre stakeholders de igual nivel.

**Comunicar el valor del diseño:**

¿Cómo hablo el lenguaje del negocio cuando defiendo una decisión de diseño? Dame el framework para traducir decisiones de UX a métricas de negocio: cómo un checkout simplificado reduce el abandono de carrito (tasa de conversión), cómo una arquitectura de información clara reduce las llamadas al soporte (coste operativo), y cómo la consistencia visual reduce el tiempo de producción de nuevas páginas (velocidad del equipo).

Dame el guión de apertura de una presentación de diseño, el framework de feedback para dar a los stakeholders y las cinco respuestas modelo para los comentarios más difíciles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Técnicas para presentar y defender trabajo de diseño ante stakeholders',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Negociación avanzada: BATNA, anclas y cierres de alto valor',
                'description'       => 'Técnicas de negociación para acuerdos complejos: BATNA, anclas, concesiones estratégicas y cómo cerrar deals donde ambas partes sienten que han ganado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un negociador experto y consultor de ventas con experiencia en negociaciones de alto valor en entornos B2B: contratos de software enterprise, acuerdos de distribución, negociaciones de M&A y deals con grandes corporaciones. Necesito mejorar mis habilidades de negociación para cerrar acuerdos complejos en mejores condiciones sin destruir la relación con el cliente.

**Los fundamentos de la negociación basada en intereses:**

Empieza explicando la diferencia entre negociar posiciones (yo quiero X, tú quieres Y, llegamos a X+Y/2) versus negociar intereses (entender qué hay detrás de cada posición para encontrar soluciones que satisfagan los intereses de ambas partes mejor de lo que lo hace el compromiso mecánico). Dame el método de Harvard (Getting to Yes) aplicado a una negociación de ventas B2B real.

**BATNA: tu mayor fuente de poder:**

Explica en detalle el concepto de BATNA (Best Alternative to a Negotiated Agreement): por qué tu poder en la negociación es directamente proporcional a lo buena que es tu alternativa si la negociación fracasa, cómo construyo activamente mi BATNA antes de una negociación importante (más leads en el pipeline, alternativas de precio, alianzas con otros proveedores), y cómo descubro el BATNA del otro lado mediante preguntas estratégicas.

**La estrategia de anclaje:**

Dame la técnica de anclaje: quien hace la primera oferta ancla la negociación, y el acuerdo final tiende a gravitar hacia ese número. ¿Cuándo es mejor hacer la primera oferta y cuándo dejar que la haga el otro? ¿Cómo construyo un ancla que sea ambiciosa pero no ridícula? ¿Cómo respondo a un ancla extrema del otro lado sin ceder terreno ni romper la negociación?

**Concesiones estratégicas:**

Explica la ciencia de las concesiones: nunca hagas una concesión sin recibir algo a cambio (el condicional «si tú haces X, yo puedo hacer Y»), reduce el tamaño de las concesiones a medida que avanza la negociación (la primera concesión es grande, las siguientes son menores, lo que señaliza que estás llegando a tu límite), y el valor de intercambiar concesiones de bajo coste para ti pero alto valor para el otro.

**Negociación de precio sin destruir el margen:**

¿Cómo respondo cuando el cliente pide un descuento? Dame el árbol de decisión: primero entender si el precio es una objeción real o una táctica de negociación (¿han dicho ya que quieren comprar?), luego explorar el «por qué» detrás del descuento (¿presupuesto limitado? ¿comparativa con un competidor? ¿quieren sentir que ganaron algo?), y las alternativas al descuento que preservan el margen (añadir valor en lugar de bajar precio, cambiar las condiciones de pago, ajustar el alcance).

**Cierre de deals complejos:**

Diseña el proceso de cierre de un deal B2B complejo con múltiples stakeholders: cómo mapeo el comité de compra (quién tiene influencia, quién tiene poder de veto, quién es el campeón interno), cómo gestiono las objeciones de última hora antes de la firma, y las técnicas de cierre que generan urgencia sin presionar de forma que dañe la relación.

**Negociación de win-win real:**

¿Cómo cierro un deal en el que las dos partes sienten que han ganado? Explica las técnicas de expansión del pastel (buscar más variables de negociación que el precio: plazo, condiciones de pago, scope, garantías, referencias, exclusividad) y el intercambio de concesiones asimétrico (tú cedes en lo que te importa poco y le importa mucho al otro, y viceversa).

Dame un plan de preparación de negociación para el próximo deal importante, con las preguntas que debo responder antes de sentarme en la mesa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Técnicas de negociación para cerrar deals B2B complejos preservando el margen',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Comunicación del PM: conectar negocio, diseño y tecnología',
                'description'       => 'El PM como conector entre áreas: cómo comunicar la visión hacia arriba y coordinar hacia los lados sin autoridad formal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en empresas donde el PM no tiene autoridad directa sobre los equipos de diseño, ingeniería o negocio, pero es responsable de que el producto avance. La comunicación es la principal herramienta del PM. Necesito mejorar cómo comunico en todas las direcciones: hacia arriba con líderes ejecutivos, hacia los lados con ingeniería y diseño, y hacia afuera con ventas y clientes.

**La paradoja del PM sin autoridad:**

Empieza describiendo la paradoja central del rol de Product Manager: eres responsable de los resultados del producto pero no tienes autoridad jerárquica sobre ninguno de los equipos que lo construyen. ¿Cómo consigues que la gente se comprometa con tus prioridades cuando técnicamente no pueden darte órdenes y pueden ignorar tus peticiones? La respuesta es la influencia, y la influencia se construye principalmente a través de la comunicación.

**Comunicar la visión hacia arriba:**

¿Cómo presento el estado del producto al CEO, al Consejo o a los inversores? Dame la estructura del update ejecutivo de producto: el progreso hacia los OKRs del quarter (con datos, no con actividades), las decisiones clave tomadas y por qué, los riesgos más importantes y el plan de mitigación, y lo que necesito del liderazgo (una decisión, un recurso, un desbloqueo). ¿Cómo adapto el nivel de detalle al interlocutor?

**Escribir documentos de producto que se leen:**

El PM escribe mucho: PRDs, specs, one-pagers de estrategia, memos de decisión. Dame el formato de cada documento clave: el PRD de una página (problema, objetivos de negocio, solución propuesta, métricas de éxito, out-of-scope, preguntas abiertas), el memo de decisión al estilo Amazon (contexto, alternativas consideradas, recomendación y razonamiento), y el one-pager de estrategia de un área de producto.

**Coordinación con ingeniería:**

¿Cómo trabajo con el equipo de ingeniería cuando hay tensión entre velocidad de entrega y calidad técnica? Dame las técnicas de comunicación que reducen el conflicto: la planning session donde el PM explica el «por qué» antes de que ingeniería discuta el «cómo», el proceso de estimación colaborativa (no imponer deadlines desde arriba), y cómo gestiono la presión del negocio sin transmitirla de forma tóxica al equipo de ingeniería.

**Coordinación con diseño:**

Explica la dinámica de trabajo PM-Diseño que genera los mejores productos: cuándo involucro a diseño (en la fase de discovery, no cuando ya tengo la solución definida), cómo le doy al diseñador el problema y los constraints sin dictarle la solución, y cómo gestiono el feedback sobre el diseño de forma que sea útil (qué problema estás resolviendo) sin ser una dictadura del PM.

**Comunicación con ventas y clientes:**

¿Cómo gestiono la presión de ventas que siempre quiere features específicas para deals concretos? Dame el proceso de intake de peticiones de ventas (formulario estructurado que captura el job-to-be-done del cliente, no la feature específica), el proceso de decisión sobre qué entra en el roadmap y cómo lo comunico (el «no» empático que da contexto) y la relación de partnership con ventas para que sean aliados del producto, no adversarios.

**Facilitación de reuniones de producto:**

¿Qué reuniones son imprescindibles y cómo las facilito para que sean efectivas? Dame el formato de las cinco reuniones del ciclo de producto: discovery review, sprint planning, design critique, team demo y retrospectiva de producto. Para cada una: quién asiste, cuánto dura, cuál es el output esperado y cómo evito que se convierta en una reunión de status.

Dame un template de PRD de una página, el guión del update ejecutivo quincenal y las cinco preguntas que hago para convertir una petición de feature en un job-to-be-done.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Comunicación e influencia del PM en todas las direcciones de la organización',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Conversaciones difíciles en RRHH: PIPs, despidos y feedback negativo',
                'description'       => 'Las conversaciones que los managers evitan: PIPs, despidos, feedback negativo y las técnicas para tenerlas con respeto y claridad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR Business Partner con experiencia apoyando a managers en las conversaciones más difíciles del entorno laboral. El mayor punto de dolor de la mayoría de los managers no es la estrategia sino las conversaciones que evitan: el feedback negativo que nunca dan, el PIP que retrasan meses, el despido que no quieren comunicar. Necesito una guía práctica para tener estas conversaciones con respeto, claridad y efectividad.

**Por qué evitamos las conversaciones difíciles:**

Empieza explicando la psicología detrás de la evitación: el miedo a la reacción emocional del otro, la incertidumbre sobre qué decir exactamente, la confusión entre ser amable y ser claro, y el sesgo de optimismo («a lo mejor mejora solo»). ¿Cuál es el coste real de retrasar estas conversaciones para el manager, para el equipo y para la propia persona afectada?

**Feedback negativo continuo:**

Diseña el proceso de dar feedback negativo de forma efectiva y regular: el modelo SBI (Situación, Comportamiento, Impacto) para estructurar el feedback de forma objetiva, el timing correcto (lo más cerca posible del comportamiento, en privado, cuando ambos tenéis tiempo), y cómo abro y cierro la conversación. Dame el guión exacto para las primeras treinta palabras, que es donde la mayoría de los managers se bloquea.

**La conversación de bajo rendimiento antes del PIP:**

Antes de un PIP, debe haber conversaciones de bajo rendimiento documentadas. Diseña este proceso: la primera conversación informal (señalo el problema sin amenaza formal), la segunda conversación con expectativas escritas (qué cambio necesito ver, en qué plazo, cómo lo vamos a medir), y la documentación de ambas conversaciones en el expediente del empleado. ¿Qué errores legales y humanos se cometen en este proceso?

**Planes de mejora del rendimiento (PIPs):**

Explica el PIP como herramienta de mejora genuina, no como paso previo al despido: cuándo tiene sentido un PIP versus cuándo el despido es la decisión correcta desde el principio. Dame la estructura de un PIP efectivo: los comportamientos específicos a mejorar (no actitudes vagas), los indicadores medibles de mejora, el plazo, el soporte que ofrece la empresa, las consecuencias si no mejora y la cadencia de revisión. ¿Cómo presento el PIP en la conversación sin que se convierta en una confrontación?

**La comunicación del despido:**

Dame el protocolo de la conversación de despido: la preparación previa (coordinar con legal y RRHH, tener el finiquito listo, preparar la logística de accesos y pertenencias), el guión de la conversación (breve, claro, sin rodeos y sin entrar en debates sobre la decisión), cómo gestiono la reacción emocional (llanto, enfado, negociación), y las cosas que nunca debo decir en una conversación de despido.

**Despidos colectivos y reestructuraciones:**

¿Cómo gestiono la comunicación cuando hay múltiples personas afectadas? Explica el proceso: el orden de comunicación (primero los afectados, luego el resto del equipo), el mensaje al equipo que se queda (cómo explico la decisión sin comprometer la confidencialidad de los que se van), y cómo recupero la moral del equipo después de una reestructuración.

**Apoyo al manager durante el proceso:**

¿Qué hace RRHH para apoyar al manager en estas conversaciones? Dame el rol del HR Business Partner: preparación previa (role-play de la conversación), presencia en la sala cuando es necesario, debriefing después y el seguimiento emocional del manager que también lo pasa mal en estas situaciones.

Dame el guión de las primeras cinco frases de una conversación de feedback negativo, una conversación de inicio de PIP y una conversación de despido, con las variaciones según la reacción del empleado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Guía práctica para managers en conversaciones de feedback negativo, PIPs y despidos',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Pitch financiero a inversores: estructura, métricas y preguntas difíciles',
                'description'       => 'Estructura el pitch financiero que convierte: el modelo, los supuestos, las métricas clave y cómo responder preguntas difíciles de inversores.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia en rondas de financiación (seed, Serie A y Serie B) y como ex-analista de fondos de venture capital. Necesito preparar el pitch financiero que convenza a inversores profesionales: la estructura del deck financiero, el modelo de negocio que presentar, las métricas que debo dominar y cómo responder a las preguntas más incómodas.

**Por qué la mayoría de los pitches financieros fallan:**

Empieza describiendo los errores más comunes: proyecciones de hockey stick sin supuestos creíbles, confusión entre ingresos y caja, métricas de vanidad en lugar de métricas de negocio, un slide de «uso de fondos» sin conexión con los hitos que pretende financiar, y la falta de sensibilidad a las preguntas que todo inversor tiene en mente aunque no haga explícitas.

**Las tres preguntas que todo inversor tiene en mente:**

Explica que detrás de todas las preguntas de un inversor hay tres preguntas fundamentales: ¿es grande el mercado? (¿puede este negocio llegar a ser muy grande?), ¿puede este equipo ejecutar? (¿tienen lo que hace falta para ganar en este mercado?), y ¿es un buen momento para invertir? (¿en qué fase está el negocio y cómo encaja con el fondo?). Dame las respuestas que construyo en el deck para cada una.

**La estructura del deck financiero:**

Diseña el deck financiero para una ronda Serie A: el resumen ejecutivo de los financieros actuales (ingresos, MRR, ARR, burn rate, runway), el modelo de unit economics (CAC, LTV, payback period, margen de contribución), las métricas de producto (DAU/MAU, retention, NPS, churn), las proyecciones a tres años con los supuestos clave explicitados, el uso de fondos con los hitos que financia, y el cap table actual y el objetivo post-ronda.

**Proyecciones creíbles:**

¿Cómo construyo proyecciones que un inversor encuentre creíbles? Explica el enfoque bottom-up versus top-down: en lugar de «capturar el 1% de un mercado de 10.000 millones», proyecto desde los drivers reales del negocio (número de comerciales, tasa de cierre por comercial, deal size promedio, tasa de expansión de clientes existentes). ¿Qué sensibilidades debo tener calculadas (escenario base, optimista y pesimista) y cuáles son los supuestos que más impactan el modelo?

**Métricas por tipo de negocio:**

Dame las métricas que debo dominar según el tipo de negocio: para SaaS B2B (MRR, ARR, NDR, GDR, CAC payback, Magic Number), para marketplace (GMV, take rate, liquidity, CAC por lado), para e-commerce (CAC, LTV, repeat purchase rate, contribution margin) y para hardware (BOM cost, gross margin, channel economics). ¿Cuáles son los benchmarks de referencia para cada métrica?

**Las preguntas más difíciles:**

Dame la respuesta modelo a las preguntas que más incomodan a los fundadores: «¿por qué no ha crecido más rápido?» (cómo explico un período de crecimiento lento sin defensividad), «¿qué pasa si un competidor con más recursos entra en tu mercado?», «tu burn rate es alto para la tracción que muestras», y «¿cuántos meses llevas buscando esta ronda?».

**El follow-up tras la reunión:**

¿Qué hago después de la primera reunión con un inversor? Dame el proceso de seguimiento: el correo de agradecimiento con los datos adicionales que hayan pedido, el data room estructurado para el due diligence, y cómo mantivo el momentum sin parecer desesperado.

Dame una estructura de los cinco slides financieros más importantes del deck y un ejemplo de modelo de proyecciones en formato de tabla simplificado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Preparación del pitch financiero para rondas de inversión seed y Serie A',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Comunicación legal clara: del lenguaje jurídico al lenguaje de negocio',
                'description'       => 'Traduce contratos, riesgos y obligaciones al lenguaje que los no-abogados entienden y sobre el que pueden actuar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o abogado in-house con experiencia trabajando en el cruce entre el mundo jurídico y el de negocio en empresas de tecnología y consumo. Una de las principales frustraciones de los equipos de negocio es que los documentos legales son incomprensibles y los abogados tardan en traducirlos. Necesito un sistema para comunicar de forma clara y accionable los temas legales a mi organización.

**El problema de la comunicación legal:**

Empieza describiendo el coste real de la mala comunicación legal en las empresas: los contratos que nadie lee hasta que hay un problema, los equipos de ventas que prometen cosas que el contrato no permite, los lanzamientos de producto que no contemplan los requisitos de privacidad, y las decisiones de negocio que se toman sin entender el riesgo legal que conllevan.

**El resumen ejecutivo legal:**

Diseña el formato del «executive summary legal» que acompaña a cualquier documento jurídico relevante: una página que explica en lenguaje llano qué es el documento, qué me comprometo a hacer y cuándo, qué me dan a cambio, cuáles son las tres cláusulas más importantes y por qué, y la recomendación con el riesgo en términos de negocio (no jurídicos). ¿Cómo calibro el nivel de detalle según el interlocutor?

**Explicar contratos complejos:**

¿Cómo explico a un director de ventas las cláusulas más relevantes de un contrato de distribución internacional? Dame la metodología: primero el propósito económico del contrato, luego las obligaciones de cada parte en lenguaje de negocio, después las cláusulas de riesgo clave (indemnización, limitación de responsabilidad, terminación, ley aplicable) explicadas con un ejemplo de cuándo activarían, y finalmente los puntos que son negociables versus los que son non-starters.

**El semáforo de riesgo legal:**

Diseña el sistema de semáforo que uso para comunicar el nivel de riesgo: verde (procede sin cambios), amarillo (procede con las modificaciones recomendadas o asume el riesgo entendido), rojo (no procede sin revisión legal adicional o aprobación del Consejo). ¿Cómo construyo la matriz de riesgo que me permite dar el semáforo de forma consistente y predecible?

**Comunicación de cambios regulatorios:**

Cuando entra en vigor una nueva regulación (una nueva directiva europea, una reforma de la Ley de Protección de Datos, un cambio en la normativa de comercio electrónico), ¿cómo lo comunico a los equipos afectados de forma que entiendan qué tienen que cambiar y cuándo? Dame la estructura del alert de compliance: qué ha cambiado, a quién afecta, qué deben hacer diferente, cuál es el plazo y cuál es la consecuencia de no cumplir.

**Negociación de contratos con lenguaje claro:**

Explica cómo guío al equipo de negocio en una negociación de contrato: el brief de negociación (cuáles son nuestros must-haves, nuestros nice-to-haves y nuestros non-starters), cómo proceso las redlines del otro lado (cuáles acepto directamente, cuáles contraofrezco, cuáles escalo), y la forma en que comunico el resultado de la negociación al equipo de negocio en términos de qué ganamos y qué cedimos.

**Formación legal para no-abogados:**

¿Cómo construyo el programa de formación legal básica para el equipo de negocio? Dame los temas que debo cubrir en una sesión de treinta minutos para el equipo de ventas (lo que pueden y no pueden prometer contractualmente), el equipo de producto (protección de datos por diseño, propiedad intelectual del código) y el equipo de marketing (publicidad comparativa, testimoniales, derechos de imagen).

Dame el template de executive summary legal de una página y la matriz de riesgo con ejemplos de contratos comunes (NDA, SaaS agreement, acuerdo de distribución).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Comunicación efectiva de temas legales a equipos de negocio no jurídicos',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Comunicación en crisis con clientes: incidentes y recuperación de confianza',
                'description'       => 'Gestiona la comunicación con clientes afectados por incidentes: templates, tono, cadencia y cómo recuperar la confianza tras un fallo grave.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Customer Experience con experiencia gestionando incidentes graves en empresas de software y e-commerce: caídas del servicio, brechas de datos, errores de facturación masivos y fallos de producto que afectaron a miles de clientes. La comunicación durante y después de un incidente determina cuántos clientes se quedan. Necesito un protocolo de comunicación de crisis con clientes.

**Por qué la comunicación es más importante que la solución técnica:**

Empieza explicando la paradoja de los incidentes: la mayoría de los clientes son más tolerantes con los fallos de lo que creemos, pero son absolutamente intolerantes con la falta de comunicación o con la comunicación evasiva. Un incidente bien comunicado puede fortalecer la relación con el cliente. Un incidente mal comunicado puede destruirla aunque se resuelva rápidamente. ¿Qué estudios o datos respaldan esta afirmación?

**El primer mensaje: los primeros treinta minutos:**

Diseña el protocolo de comunicación de los primeros treinta minutos tras detectar un incidente: quién decide el nivel de severidad (P0 / P1 / P2), quién es el responsable de la comunicación externa, y el template del primer mensaje de comunicación a clientes. Este primer mensaje debe salir en treinta minutos aunque no tengamos la causa raíz: el objetivo es que el cliente sepa que sabemos del problema. Dame el template exacto con el tono correcto (no frío ni alarmista).

**La cadencia de actualizaciones durante el incidente:**

¿Con qué frecuencia comunico mientras el incidente está activo? Dame la cadencia por nivel de severidad: P0 (afecta a todos los clientes, actualización cada treinta minutos), P1 (afecta a un segmento crítico, actualización cada hora), P2 (afecta a una funcionalidad no crítica, actualización cada dos o tres horas). ¿Qué información incluyo en cada actualización aunque no haya novedades?

**El mensaje de resolución:**

Diseña el template del mensaje de resolución del incidente: confirmación de que el servicio está restaurado, un resumen claro de lo que ocurrió (sin jerga técnica), el tiempo total de afectación, el impacto para el cliente (con datos si es posible), lo que hemos hecho para resolver el problema y lo que haremos para que no ocurra de nuevo. ¿Cómo calibro el nivel de detalle técnico según el segmento de clientes?

**El postmortem público:**

Para incidentes graves, ¿cuándo publico un postmortem? Dame la estructura del postmortem orientado al cliente: no el postmortem técnico interno sino el que comparto públicamente. ¿Qué incluyo (causa raíz en lenguaje comprensible, cronología del incidente, impacto, acciones correctoras) y qué no incluyo (detalles de seguridad que podrían ser explotados, responsabilización de personas concretas)?

**Recuperación de la confianza después del incidente:**

El incidente ha terminado pero el cliente está molesto. ¿Qué acciones concretas tomo para recuperar la confianza? Dame el framework de recuperación: el gesto de compensación (crédito, extensión de servicio, descuento) y cómo decido el importe según el impacto, el outreach proactivo del CSM a los clientes más afectados en las 24 horas siguientes, y el seguimiento a los 30 días para verificar que la confianza se ha recuperado.

**Comunicación diferenciada por segmento:**

¿Cómo adapto la comunicación según el tipo de cliente? Dame las variaciones para: clientes enterprise con SLA contractual (comunicación más formal, mención explícita del SLA y compensación automática), clientes de plan básico (comunicación más sencilla y empática), y clientes en proceso de evaluación o reciente onboarding (comunicación de especial atención).

Dame los tres templates de comunicación de incidente (primer mensaje, actualización periódica y mensaje de resolución) con instrucciones de personalización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Protocolo de comunicación durante incidentes y recuperación de la confianza del cliente',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Personal branding verbal para freelances: el pitch que convierte contactos en clientes',
                'description'       => 'El elevator pitch, la propuesta de valor y las conversaciones que convierten contactos en clientes sin vender de forma incómoda.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de comunicación y estratega de personal branding con experiencia trabajando con profesionales freelance que quieren atraer mejores clientes sin sentir que están «vendiendo». La comunicación verbal de lo que hacemos y el valor que aportamos es una de las habilidades más infradesarrolladas en los profesionales independientes. Necesito construir y practicar mi narrativa profesional.

**El problema de «me dedico a...»:**

Empieza explicando por qué la mayoría de los freelances y profesionales independientes se presentan mal: responden «soy diseñador gráfico» o «soy consultor de marketing» cuando alguien pregunta qué hacen, y esa respuesta no genera interés ni conversación porque describe la categoría profesional, no el valor que aportan. ¿Por qué la etiqueta profesional es el peor punto de partida para una presentación?

**La propuesta de valor en una frase:**

Diseña la fórmula de la propuesta de valor en una frase: «Ayudo a [perfil específico del cliente ideal] a [resultado concreto que consiguen] a través de [cómo lo hago / qué me diferencia]». Dame tres o cuatro ejemplos de distintas especialidades freelance (diseñador UX, consultor de e-commerce, copywriter, especialista en SEO) para que pueda ver cómo se construye. ¿Cómo identifico cuál es el resultado concreto más valioso que aporto a mis clientes actuales?

**El elevator pitch de treinta segundos:**

Diseña el elevator pitch de treinta segundos para un evento de networking o una conversación casual: la propuesta de valor, un ejemplo concreto de cliente o resultado reciente, y la pregunta de apertura que invita al interlocutor a hablar de su situación. ¿Cómo adapto el pitch según si estoy en un evento del sector de mi cliente o en un evento de profesionales independientes?

**La conversación que convierte sin vender:**

Explica la técnica de la conversación de diagnóstico: en lugar de hablar de mis servicios, hago preguntas que ayudan al interlocutor a articular su problema, y si ese problema es uno que yo resuelvo, la conexión emerge de forma natural. Dame el guión de las preguntas de diagnóstico para los primeros diez minutos de conversación con un posible cliente: preguntas sobre su situación actual, sus objetivos, los obstáculos que encuentra y lo que ha probado ya.

**El seguimiento que no es pesado:**

¿Cómo hago seguimiento después de un contacto inicial sin parecer desesperado o insistente? Dame el protocolo: el email de seguimiento en las 24 horas con el valor añadido (un artículo relevante, un recurso que mencioné en la conversación), la cadencia de seguimiento si no responden (cada cuánto, cuántas veces, cuándo paro), y el mensaje que reactiva una conversación que se enfrió meses atrás.

**LinkedIn como canal de comunicación:**

Diseña el perfil de LinkedIn que comunica la propuesta de valor del freelance: el titular que no es la etiqueta profesional sino el beneficio para el cliente («Ayudo a tiendas online a duplicar su tasa de conversión» en lugar de «Especialista en CRO»), el extracto que cuenta la historia de cómo llegué a especializarme en esto y el perfil del cliente con el que trabajo mejor, y la estrategia de contenido que demuestra expertise de forma no autopromocional.

**La propuesta por escrito:**

¿Cómo paso de una conversación de diagnóstico a una propuesta escrita que tenga alta probabilidad de convertir? Dame la estructura de la propuesta: el resumen del problema del cliente (demuestra que entendí su situación), la solución propuesta con los entregables específicos, los beneficios esperados (no las características del servicio sino los resultados para el cliente), el precio con la estructura de hitos y las condiciones.

Dame el ejercicio de definición de propuesta de valor con preguntas guía, el template del elevator pitch y el email de seguimiento post-primer contacto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Personal branding y comunicación verbal para atraer clientes como freelance',
                'vote_score'        => 29,
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
