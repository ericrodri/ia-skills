<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills121Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para startups en fase de fundraising',
                'description'      => 'Cómo usar el marketing para generar credibilidad con inversores: PR, tracción digital y narrativa pública que refuerza el pitch.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing para startups y relaciones con inversores. Voy a darte contexto sobre mi startup y quiero que me ayudes a construir una estrategia de marketing orientada a generar credibilidad de cara a una ronda de financiación.

**Contexto que necesito que me pidas si no lo tienes:**
- Sector y propuesta de valor de la startup
- Stage actual (pre-seed, seed, serie A)
- Tracción existente (usuarios, MRR, crecimiento)
- Tipo de inversor al que nos dirigimos (angels, family offices, VCs generalistas, VCs especializados)
- Plazo estimado hasta el cierre de la ronda

**Lo que quiero que construyas conmigo:**

1. **Narrativa pública de tracción**: Ayúdame a articular en un párrafo de 150 palabras la historia de crecimiento de la startup para que sea verificable, específica y emocionalmente resonante. Los inversores buscan evidencia de que el mercado ya está diciendo sí.

2. **Plan de PR pre-ronda**: Define qué medios, publicaciones o podcasts del sector debería aparecer en los próximos 90 días. No busco cobertura masiva, sino presencia estratégica en los medios que leen los inversores objetivo. Para cada canal, dame: (a) justificación de por qué este medio concretamente, (b) ángulo de historia más probable que acepten, (c) cómo contactar o conseguir la cobertura.

3. **LinkedIn como canal de inversores**: El 70% de los VCs en España y Latam hacen research del fundador en LinkedIn antes de la primera reunión. Dame un plan para los próximos 60 días: qué publicar, con qué frecuencia, qué temas posicionan al fundador como experto creíble en el problema que resuelve la startup.

4. **Social proof y tracción digital verificable**: ¿Qué señales digitales públicas generan confianza en un inversor que hace due diligence? Ayúdame a identificar cuáles tenemos, cuáles nos faltan y cómo construir las que faltan de forma auténtica (no inflada).

5. **El deck como pieza de marketing**: El pitch deck no es solo una presentación, es la primera pieza de marketing que ve el inversor. Dame feedback sobre cómo el marketing puede fortalecer la narrativa del deck sin convertirlo en un folleto publicitario.

6. **Errores de marketing que dañan la credibilidad ante inversores**: Dime los 5 errores más comunes que cometen los fundadores al intentar "hacer marketing para inversores" y que en realidad generan desconfianza.

Trabaja de forma estructurada, dame respuestas accionables y señala claramente qué se puede hacer en las primeras 2 semanas, qué en el primer mes y qué requiere más tiempo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir credibilidad pública y narrativa de tracción para atraer inversores durante una ronda de financiación.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Due diligence técnica para inversores y acquirers',
                'description'      => 'Prepara el repositorio, la arquitectura y la documentación para que el CTO del fondo o acquirer quede convencido en la revisión técnica.',
                'prompt_content'   => <<<'PROMPT'
Eres un CTO experimentado que ha pasado por procesos de due diligence técnica tanto como vendedor como revisor. Quiero que me ayudes a preparar nuestro stack técnico para resistir el escrutinio de un CTO de fondo de inversión o de una empresa que nos está considerando adquirir.

**Contexto que necesitaré que me preguntes:**
- Stack técnico actual (lenguajes, frameworks, bases de datos, infraestructura)
- Tamaño del equipo de ingeniería y seniority promedio
- Estado de la deuda técnica (honestidad total aquí)
- Tipo de proceso: due diligence para inversión o para M&A
- Plazo hasta la revisión técnica

**Áreas de revisión que quiero preparar:**

1. **Auditoría del repositorio**: Qué busca un revisor externo en el primer vistazo al código. Dame una lista de verificación de lo que debo tener en orden: README, arquitectura documentada, test coverage mínima esperada, .gitignore limpio, secrets nunca commiteados, y señales de calidad de código básica.

2. **Documentación de arquitectura**: Ayúdame a crear un documento de arquitectura de una página (Architecture Decision Record resumen) que explique las decisiones clave de diseño, por qué se tomaron y qué trade-offs implican. Los revisores técnicos valoran la capacidad de razonamiento más que la perfección de las decisiones.

3. **Deuda técnica: cómo presentarla**: La deuda técnica existe en todo producto. Ayúdame a preparar una presentación honesta y estructurada de nuestra deuda técnica que transmita que somos conscientes de ella, que tenemos un plan, y que no supone un riesgo para la escalabilidad del negocio.

4. **Seguridad y cumplimiento**: Las preguntas de seguridad que más se hacen en un due diligence técnico: gestión de dependencias, autenticación, manejo de datos de usuarios, backups, disaster recovery. Dame un checklist de lo mínimo que debo poder responder.

5. **Escalabilidad del stack**: Cómo comunicar de forma creíble que el sistema puede escalar 10x sin una reescritura completa. Qué evidencia técnica respalda esa afirmación y cómo se presenta.

6. **El equipo técnico como activo**: La due diligence no es solo del código, es del equipo. Ayúdame a preparar cómo presentar al equipo de ingeniería: seniority, riesgo de concentración de conocimiento, procesos de desarrollo y cultura técnica.

Dame respuestas detalladas y prácticas. Señala las áreas de mayor riesgo reputacional técnico y qué puedo hacer en 30, 60 y 90 días para mejorar la posición de partida.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Preparar el repositorio, arquitectura y documentación técnica para superar la due diligence de un inversor o acquirer.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Pitch deck visual que convence a inversores',
                'description'      => 'El diseño del deck de inversión que comunica claridad, ambición y rigor: estructura visual, tipografía y los slides que más importan.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador especializado en materiales de captación de inversión y comunicación ejecutiva de alto nivel. Quiero que me ayudes a crear o mejorar el diseño visual de un pitch deck para una ronda de inversión.

**Contexto que me pedirás antes de empezar:**
- Tipo de startup y sector
- Stage de la ronda (pre-seed, seed, serie A)
- Herramienta de diseño disponible (Figma, PowerPoint, Keynote, Canva, Google Slides)
- Estilo de marca actual (si existe) o preferencia de tono visual
- A quién va dirigido el deck (VCs generalistas, inversores de impacto, corporates)

**Lo que quiero construir contigo:**

1. **Estructura del deck y orden de los slides**: Los inversores ven cientos de decks. Dame el orden de slides que ha demostrado funcionar y el razonamiento detrás de cada posición. Cómo empieza el deck (el hook), cómo termina (el call to action), y qué slides puedes eliminar sin perder efectividad.

2. **Sistema visual del deck**: Paleta de colores que transmite confianza sin ser corporativamente aburrida. Tipografía: qué combinaciones de fuentes funcionan para un deck de inversión. Cuándo usar imágenes, cuándo datos, cuándo solo texto. La regla del espacio en blanco en presentaciones ejecutivas.

3. **Los slides que más importan**: El problema, la solución, el mercado y la tracción son los slides donde los inversores deciden si siguen leyendo. Dame guía específica de diseño para cada uno: qué información incluir, cómo visualizarla, qué errores de diseño hacen que estos slides fallen.

4. **Visualización de datos financieros**: Los MRR, el crecimiento, la proyección y el uso de fondos tienen que verse bien y leerse de un vistazo. Dame principios de diseño de gráficos financieros para presentaciones a inversores: escalas, etiquetas, colores, y cómo mostrar proyecciones sin perder credibilidad.

5. **El slide de equipo**: Es más importante de lo que parece. Cómo presentar al equipo visualmente para que transmita seniority, complementariedad y credibilidad. Fotos, logos de empresas anteriores, formato de bio corta.

6. **El deck como documento vs el deck como presentación oral**: Muchos decks se envían por email antes de la reunión. Dame estrategias de diseño para que el deck funcione solo (sin el presentador explicándolo) sin perder impacto en la presentación en vivo.

Dame criterios de diseño concretos, no generalidades. Quiero poder abrir Figma y saber exactamente qué hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un pitch deck visualmente efectivo que comunique claridad y credibilidad ante inversores.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Fundraising como proceso de ventas',
                'description'      => 'La captación de inversión tiene más en común con las ventas B2B de lo que parece: pipeline, follow-up y el cierre de la ronda.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas B2B complejas que ha trabajado también como asesor de fundraising para startups. Quiero que me ayudes a estructurar el proceso de captación de inversión usando los principios y herramientas de ventas que ya domino.

**Contexto que necesitaré compartirte:**
- Tipo de ronda y ticket objetivo por inversor
- Target de inversores (número y perfil)
- Experiencia previa levantando capital (si la hay)
- CRM o herramientas de gestión disponibles
- Cuánto tiempo puedo dedicar semanalmente al fundraising

**La mentalidad de ventas aplicada al fundraising:**

1. **El pipeline de inversores**: Construye conmigo un sistema de pipeline para el fundraising. Qué etapas tiene, qué criterios de avance de una etapa a la siguiente, cómo medir la velocidad del pipeline y cómo predecir el cierre. ¿Cuántos inversores necesito en cada etapa para cerrar la ronda?

2. **El ICP del inversor**: En ventas tenemos el Ideal Customer Profile. ¿Cuál es el Ideal Investor Profile para nuestra ronda? Ayúdame a definir: tesis de inversión compatible, tamaño del ticket típico, portfolio existente (competidores vs. sinergias), velocidad de decisión, y señales de que un inversor NO va a invertir aunque parezca interesado.

3. **Sourcing y prospección**: Cómo construir una lista de inversores target de forma sistemática. Qué fuentes usar, cómo priorizar, y cómo conseguir introductions cálidas en lugar de cold outreach. La diferencia entre un cold email a un VC y uno que tiene 30% de respuesta.

4. **El follow-up sin parecer desesperado**: El seguimiento en fundraising es delicado. Dame un sistema de follow-up que mantenga el interés del inversor sin parecer ansioso. Cuándo hacer follow-up, qué decir en cada contacto y cómo interpretar el silencio.

5. **Crear urgencia y momentum**: En ventas, el FOMO cierra deals. ¿Cómo se crea momentum legítimo en una ronda de inversión? ¿Cómo comunicar que la ronda está progresando sin mentir ni exagerar? ¿Cuándo y cómo usar los primeros compromisos para acelerar al resto?

6. **El cierre de la ronda**: Qué señales indican que un inversor está listo para comprometerse. Cómo pasar de "muy interesante" a term sheet firmado. Los errores de cierre más comunes en fundraising y cómo evitarlos.

Dame un sistema accionable que pueda implementar esta semana con las herramientas que ya tengo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el proceso de fundraising como un pipeline de ventas B2B con seguimiento sistemático hasta el cierre.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Métricas que importan a los inversores',
                'description'      => 'DAU, MAU, MRR, churn, LTV/CAC, NRR: qué quieren ver los VCs y cómo presentar los datos de forma convincente.',
                'prompt_content'   => <<<'PROMPT'
Eres un analista de venture capital con experiencia en evaluar startups en fase seed y serie A. Quiero que me ayudes a entender qué métricas son realmente importantes para los inversores, cómo calcularlas correctamente y cómo presentarlas de forma que cuenten la historia correcta sobre el negocio.

**Contexto que me pedirás:**
- Modelo de negocio (SaaS, marketplace, e-commerce, B2B, B2C, transaccional)
- Stage actual de la empresa
- Métricas que ya estamos midiendo
- Herramientas de analytics disponibles

**Las métricas que los VCs realmente miran:**

1. **MRR y crecimiento mensual**: Cómo calcular el MRR correctamente (diferencia entre new MRR, expansion MRR, contraction MRR y churned MRR). Qué tasa de crecimiento mensual se espera en cada stage. Cómo presentar el gráfico de MRR para que sea fácil de leer y difícil de malinterpretar.

2. **Churn y retención**: La diferencia entre logo churn y revenue churn. Por qué el NRR (Net Revenue Retention) es la métrica más importante en SaaS y cómo se calcula. Qué niveles de churn son aceptables según el tipo de cliente (SMB vs. enterprise) y qué nivel dispara alarmas en un VC.

3. **LTV y CAC**: Cómo calcular el LTV de forma conservadora (no optimista). Cómo medir el CAC real incluyendo todos los costes de ventas y marketing. El ratio LTV/CAC que quieren ver los inversores y cuántos meses de CAC payback es el umbral de preocupación.

4. **DAU/MAU y engagement**: Por qué el ratio DAU/MAU importa más que los usuarios activos en términos absolutos. Qué dice sobre la salud del producto. Cómo presentar métricas de engagement cuando el producto es de uso puntual y no diario.

5. **Unit economics del modelo de negocio**: Más allá del P&L general, los inversores quieren ver la economía de la unidad base: por cliente, por transacción, por campaña. Ayúdame a construir el modelo de unit economics específico de mi negocio.

6. **Cómo presentar métricas con honestidad y convicción**: La diferencia entre las startups que presentan sus métricas con claridad (aunque no sean perfectas) y las que intentan esconder los puntos débiles. Cómo encuadrar métricas difíciles dentro de una narrativa de aprendizaje y mejora continua que genere confianza.

Quiero salir de esta sesión con un dashboard de métricas priorizado y el lenguaje correcto para explicarlas a un inversor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar, calcular y presentar las métricas de negocio más relevantes para convencer a inversores en una reunión o pitch.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del equipo durante el fundraising',
                'description'      => 'Mantén al equipo motivado y productivo cuando los fundadores están levantando capital semanas o meses.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de liderazgo y gestión de personas con experiencia específica en startups en etapas de crecimiento. Quiero que me ayudes a gestionar al equipo de forma efectiva durante un proceso de fundraising en el que los fundadores van a estar menos disponibles de lo habitual.

**Contexto que me pedirás:**
- Tamaño del equipo y estructura actual
- Duración estimada del proceso de fundraising
- Nivel de información que el equipo tiene sobre la ronda
- Riesgos de retención que ya existen (personas clave en riesgo)
- Cultura del equipo: transparencia habitual con el equipo vs. más reservada

**Los retos específicos del fundraising en la gestión del equipo:**

1. **Comunicación interna sobre la ronda**: Cuánto y cuándo contarle al equipo sobre el proceso de fundraising. Los riesgos de la opacidad total (rumores, desconfianza) versus los riesgos de la transparencia total (distracción, ansiedad, fuga de información). Dame un plan de comunicación interna por etapas.

2. **Delegación real durante el fundraising**: Los fundadores necesitan delegar de verdad, no a medias. Ayúdame a identificar qué decisiones puedo delegar completamente, cuáles requieren mi aprobación y cómo estructuro la autorización para que el equipo no se quede bloqueado esperando mi respuesta.

3. **Mantener el momentum operativo**: El riesgo real durante el fundraising es que el negocio se desacelere por falta de liderazgo presente. ¿Cómo mantengo el ritmo operativo del equipo con rituales, métricas y estructuras de gobernanza temporal que no dependen de que yo esté?

4. **Gestión de la incertidumbre y la ansiedad del equipo**: El equipo va a notar que algo pasa aunque no le cuentes los detalles. Estrategias para gestionar la incertidumbre de forma que el equipo se sienta seguro y comprometido, no ansioso ni buscando otras opciones.

5. **Personas clave en riesgo**: Qué hacer con los empleados críticos que podrían marcharse si perciben inestabilidad. Cuándo y cómo tener conversaciones de retención, qué ofrecer (más allá del dinero) y cómo gestionar las promesas que puedes hacer ahora versus las que dependen del cierre de la ronda.

6. **El equipo después de la ronda**: Cómo comunicar el cierre de la ronda al equipo de forma que lo vivan como un logro colectivo y no solo de los fundadores. Cómo usar el momento del cierre para recargar energía y compromiso de cara al siguiente ciclo de crecimiento.

Dame un plan concreto, no principios generales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Mantener el equipo motivado y el negocio operando bien mientras los fundadores dedican tiempo al proceso de fundraising.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Rondas de financiación: seed, Serie A y Serie B',
                'description'      => 'Qué busca cada tipo de inversor, a qué valoración y qué términos son negociables y cuáles no.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor financiero especializado en financiación de startups con experiencia en el ecosistema de inversión europeo y latinoamericano. Quiero entender en profundidad cómo funcionan las rondas de financiación, qué espera cada tipo de inversor y qué puedo y qué no puedo negociar.

**Contexto que me pedirás:**
- Stage actual de la empresa y métricas principales
- Tipo de ronda que estamos considerando
- País de constitución e inversores objetivo
- Nivel de conocimiento previo sobre financiación de startups

**Lo que quiero entender:**

1. **Las diferencias reales entre seed, Serie A y Serie B**: No las definiciones de manual, sino qué significa en la práctica cada ronda. Qué nivel de tracción, qué team, qué métricas y qué narrativa se espera en cada etapa. Cómo saber si estamos "ready" para subir de ronda o si es prematuro.

2. **Valoración: cómo se calcula y cómo se negocia**: Qué métodos de valoración se usan en cada stage (pre-revenue: comparable transactions y conviction; post-revenue: múltiplos de ARR). Por qué la valoración pre-money importa menos que el cap table resultante. Cómo responder a la pregunta "¿a qué valoración buscáis?"

3. **Tipos de inversor y qué esperan**: La diferencia entre un business angel, un family office, un micro-VC, un VC institucional y un corporate VC. Qué buscan en cada caso, a qué velocidad deciden y qué valor añadido real pueden aportar más allá del dinero.

4. **El term sheet: los términos que importan**: Explícame en lenguaje claro los términos que más impactan en el resultado económico de los fundadores al exit: liquidation preference (1x non-participating vs. participating), anti-dilución (full ratchet vs. broad-based weighted average), pro-rata rights, drag-along y tag-along. Qué es estándar en el mercado y qué es aggressive.

5. **SAFE y notas convertibles**: Cuándo usar un SAFE o una nota convertible en lugar de un equity round tradicional. Las diferencias entre un SAFE con cap y sin cap, con descuento y sin descuento, y cuándo cada estructura favorece al fundador o al inversor.

6. **Errores de fundraising que cuestan caro**: Los errores en la estructuración de la ronda que los fundadores lamentan al exit: demasiada dilución en early stages, términos de liquidation preference que eliminan el upside del fundador, inversores que bloquean rondas futuras.

Explícame todo con ejemplos numéricos cuando sea posible. Quiero poder negociar desde el conocimiento, no desde la ignorancia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Entender la estructura financiera y los términos de las rondas de inversión para negociar con conocimiento y no cometer errores costosos.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Term sheet y negociación con VCs',
                'description'      => 'Las cláusulas de liquidación preferente, antidilución, drag-along y las que más impactan a los fundadores al exit.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en venture capital y financiación de startups con experiencia en negociaciones de term sheets en España, Europa y Latinoamérica. Acabo de recibir (o estoy a punto de recibir) un term sheet de un inversor y quiero entender cada cláusula y saber qué puedo y qué debo negociar.

**Contexto que me pedirás:**
- Stage de la ronda y perfil del inversor
- País de constitución de la sociedad
- Cap table actual (si existe) y rondas previas
- Si tenemos o no asesor legal especializado en VC

**Análisis del term sheet que quiero hacer contigo:**

1. **Estructura de la operación**: Equity round vs. préstamo participativo vs. SAFE vs. nota convertible. Cuál es la más habitual para este stage y por qué. Qué implicaciones fiscales y societarias tiene cada estructura para el fundador.

2. **Liquidation preference**: Explícame la diferencia entre 1x non-participating, 1x participating y múltiplos (2x, 3x) con ejemplos numéricos concretos de cómo impactan en el bolsillo del fundador en distintos escenarios de exit (venta pequeña, mediana y grande). Cuál es el estándar del mercado en Europa y cuándo debo rechazar lo que me proponen.

3. **Cláusulas antidilución**: Full ratchet vs. broad-based weighted average. Qué significa cada una en la práctica, en qué escenarios se activan y cuál es la diferencia de impacto para el fundador en una ronda bajista (down round). Cuál es la posición razonable para pedir en la negociación.

4. **Derechos de arrastre y acompañamiento**: Drag-along (arrastre) y tag-along (acompañamiento). Quién los suele tener, en qué condiciones se activan y qué umbrales de aprobación son razonables vs. perjudiciales para el fundador. Cómo negociar que el drag-along no pueda activarse sin el consentimiento de los fundadores.

5. **Derecho de veto y governance**: Qué decisiones suelen requerir consentimiento del inversor (reserved matters). Cuáles son razonables (operaciones de M&A, cambios en el cap table) y cuáles son excesivas (contratar por encima de X salario, cambiar el plan anual). Cómo negociar un governance que proteja al inversor sin paralizar la operativa.

6. **El ESOP y la dilución del fundador**: Cómo se negocia el pool de opciones para empleados, si va antes o después de la ronda (pre-money vs. post-money) y cuánto impacta eso en la dilución real del fundador. Cuál es el tamaño de ESOP habitual en cada stage.

Quiero terminar esta sesión sabiendo qué firmar, qué negociar y qué rechazar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar y negociar un term sheet de inversión entendiendo el impacto real de cada cláusula en los fundadores al momento del exit.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Churn y retención como argumento inversor',
                'description'      => 'Cómo presentar las métricas de retención al inversor para que sean un argumento a favor, no una objeción.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en métricas de SaaS y Customer Success con experiencia trabajando con startups en proceso de fundraising. Quiero que me ayudes a entender, calcular y presentar nuestras métricas de churn y retención de forma que sean un activo en el pitch inversor, no una fuente de objeciones.

**Contexto que me pedirás:**
- Modelo de negocio y tipo de cliente (SMB, mid-market, enterprise)
- Métricas de churn actuales (si las conoces)
- Herramientas de analytics disponibles
- En qué stage está la empresa y qué tipo de inversores estamos viendo

**Lo que quiero trabajar:**

1. **Calcular el churn correctamente**: La diferencia entre logo churn (clientes que se van) y revenue churn (ingresos que se van). Cómo calcular el Net Revenue Retention (NRR) y el Gross Revenue Retention (GRR). Por qué el NRR puede ser mayor que el 100% y qué significa eso para un inversor.

2. **Benchmarks por tipo de empresa**: Qué niveles de churn mensual y anual son buenos, aceptables y preocupantes según el tipo de cliente. Por qué el churn del 5% mensual que puede ser normal en B2C es catastrófico en B2B enterprise. Qué quieren ver los VCs según el tipo de negocio que estamos construyendo.

3. **Cohorte de retención: la métrica que más convence**: Cómo construir y presentar un análisis de cohortes que muestre la retención de los clientes en el tiempo. Por qué una curva de retención que se estabiliza es una de las señales más poderosas que puedes mostrar a un inversor. Cómo visualizarla para que sea fácil de leer en el deck.

4. **Encuadrar el churn cuando no es bueno**: Qué hacer cuando el churn es alto o no cumple los benchmarks del sector. Cómo presentarlo con honestidad mostrando: las causas que ya hemos identificado, las acciones que hemos tomado, la evidencia de que está mejorando. La narrativa de "aprendimos y actuamos" es más creíble que intentar esconder el problema.

5. **Churn involuntario vs. voluntario**: Cómo separar el churn por impago (que puede recuperarse) del churn por decisión del cliente. Qué estrategias de recuperación de clientes perdidos hemos implementado y qué resultados han dado.

6. **Retención como predictor de crecimiento**: Cómo conectar las métricas de retención con la narrativa de crecimiento futuro del negocio. Por qué una empresa con alto NRR puede crecer aunque no adquiera nuevos clientes, y cómo usar ese argumento en el pitch.

Ayúdame a construir el slide de retención del deck y el discurso que lo acompaña.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Calcular, analizar y presentar las métricas de retención y churn de forma convincente ante inversores en el proceso de fundraising.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Financiación para pasar de freelance a empresa',
                'description'      => 'Cuándo y cómo buscar inversión o financiación para escalar el negocio más allá del trabajo por proyecto.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor financiero y de negocio especializado en el ecosistema de profesionales independientes que quieren escalar. Tengo un negocio freelance que ha crecido bien y estoy pensando si tiene sentido buscar financiación externa para dar el salto a empresa. Quiero que me ayudes a pensar esto con claridad y a explorar las opciones que tengo.

**Contexto que me pedirás:**
- Facturación actual y tipo de servicios
- Si tengo empleados, socios o trabajo solo
- Qué significa "escalar" en mi caso concreto (equipo, producto, geografía)
- Si ya he hablado con algún inversor o entidad financiera

**Las preguntas que quiero responder:**

1. **¿Tengo realmente un negocio escalable o un autoempleo sofisticado?**: Esta es la pregunta más incómoda pero más importante. Ayúdame a evaluar honestamente si lo que tengo puede escalar con capital externo o si el modelo depende de mi tiempo personal de una forma que no se puede sustituir. Los criterios para distinguir un negocio de servicios escalable de uno que no lo es.

2. **¿Qué tipo de financiación tiene sentido para mí?**: La diferencia entre la deuda (préstamos bancarios, ICO, préstamos de familiares) y la inversión de capital (inversores ángel, aceleradoras, VCs). Por qué la mayoría de freelances no son candidatos para VC pero sí para otras formas de financiación. Cuándo cada opción tiene sentido.

3. **Bootstrapping vs. financiación externa**: Muchos negocios de servicios se escalan mejor con reinversión de beneficios que con capital externo. Cuándo el bootstrapping es la estrategia correcta y cuándo el capital externo acelera de forma que no se puede conseguir de otra manera.

4. **El modelo de producto como puerta de entrada a la inversión**: Muchos freelances que evolucionan a empresa lo hacen creando un producto (software, contenido, formación, herramienta) que acompaña a los servicios. Cómo este movimiento puede abrir la puerta a tipos de inversión que antes no eran accesibles.

5. **Opciones de financiación específicas para autónomos y pymes**: Líneas ICO, financiación ENISA, ayudas de la Comunidad o la UE, factoring para mejorar el flujo de caja. Cuáles son las más accesibles para alguien que viene del mundo freelance y cómo acceder a ellas.

6. **El plan antes de buscar financiación**: Qué debes tener preparado antes de acercarte a cualquier fuente de financiación. La diferencia entre pedir dinero desde una posición de necesidad y hacerlo desde una posición de oportunidad con números que lo respaldan.

Quiero terminar esta conversación sabiendo si tengo que buscar financiación ahora, de qué tipo, y cuáles son los tres primeros pasos concretos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Evaluar las opciones de financiación disponibles para un freelance o autónomo que quiere escalar su negocio y dar el salto a empresa.',
                'vote_score'       => 40,
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
