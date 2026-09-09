<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills176Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de fondos de inversión y venture capital',
                'description'      => 'Los fondos de inversión y el capital riesgo también necesitan marketing. Cómo los VCs construyen su marca para atraer los mejores deals y los mejores LPs.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing especializado en el sector de capital riesgo y fondos de inversión. Trabajo en o con un fondo de venture capital, private equity o family office y necesito ayuda para construir la estrategia de marketing del fondo.

**Datos del fondo:**
- Tipo de fondo: [VC / PE / family office / angel network / fondo de fondos]
- Etapa de inversión: [pre-seed / seed / Series A / growth / buyout]
- Sector o tesis de inversión: [describe en qué invierte el fondo]
- AUM o tamaño objetivo del fondo: [importe]
- Geografía: [España / Europa / global]
- Audiencia objetivo principal: [LPs / fundadores / coinversores / talento para portfolio]
- Estado actual de la marca: [nuevo fondo sin presencia / fondo con marca establecida que quiere crecer / rebranding]

**Módulo 1 — La estrategia de marca del fondo**

El fondo necesita dos marcas simultáneas: una hacia los LPs (los inversores del fondo) y otra hacia los fundadores (las empresas en las que invierte). A veces entran en tensión.

1. **Propuesta de valor hacia LPs**: ¿qué hace diferente a este fondo que justifique que un LP elija invertir aquí en lugar de en otro fondo? Define el posicionamiento único: tesis de inversión diferencial, acceso privilegiado a dealflow, track record, equipo, valor añadido más allá del cheque.

2. **Propuesta de valor hacia fundadores**: ¿por qué un fundador debería querer este fondo en su cap table por encima de otros VCs? En un mercado donde los mejores founders pueden elegir su inversor, ¿qué ofrece el fondo que otros no ofrecen? (acceso a red, experiencia operativa, apoyo en contratación, acceso a mercados internacionales).

3. **El partner como marca personal**: en el VC, la marca personal del general partner es tan importante como la marca del fondo. ¿Cómo construyo la autoridad y visibilidad del GP en el ecosistema de startups? ¿Qué canales y qué tipo de contenido funcionan mejor para un inversor?

**Módulo 2 — Generación de dealflow de calidad**

El marketing del fondo es, en gran parte, marketing para atraer los mejores deals antes que los competidores:

1. **Estrategia de contenido para atraer fundadores**: qué tipo de contenido genera dealflow de calidad para un fondo (análisis de mercado, tesis de inversión públicas, cases de portfolio, posts de reflexión sobre startups). ¿Qué canales tienen mayor ROI para un VC: LinkedIn, Twitter/X, newsletters, podcasts, eventos?

2. **La newsletter del fondo**: ¿tiene sentido que el fondo publique una newsletter? ¿Qué contenido la hace valiosa para fundadores, no solo un marketing disfrazado? Dame una estructura de contenido para 12 semanas de newsletter.

3. **Eventos y comunidad**: ¿cómo uso los eventos como estrategia de dealflow y de LP relations? ¿Qué tipo de evento tiene sentido para un fondo de tamaño medio: conferencia propia, participación en otras, dinners de portfolio, programas de mentoring?

**Módulo 3 — LP Relations y fundraising del fondo**

Cuando el fondo necesita levantar capital de LPs, el proceso tiene mucho de marketing:

1. **El pitch deck para LPs**: ¿en qué se diferencia un pitch deck para LPs de uno para fundadores? ¿Qué buscan los LPs institucionales (fondos de fondos, family offices, fondos de pensiones) vs. los LPs individuales (HNWIs, business angels)?

2. **El DDM (data room y due diligence materials)**: ¿qué documentación debe tener el fondo preparada para un proceso de due diligence de un LP serio? Lista los documentos principales y el nivel de detalle esperado.

3. **El seguimiento post-reunión con LPs**: el proceso de captación de LPs puede durar 12-24 meses. ¿Cómo diseño un sistema de seguimiento que mantenga el interés sin resultar pesado? ¿Qué comunicaciones periódicas entre cierre de conversaciones mantienen vivo el interés?

**Módulo 4 — Marketing hacia el ecosistema y coinversores**

El fondo también necesita una buena reputación entre otros VCs y coinversores:

1. ¿Cómo posiciono el fondo como un buen coinversor que los mejores VCs querrán llevar en sus deals? ¿Qué comportamientos y qué comunicaciones construyen esa reputación?

2. ¿Cómo uso el éxito del portfolio para construir la marca del fondo? ¿Qué tipo de contenido sobre empresas en portfolio está bien visto y qué puede resultar inapropiado?

3. Dame un plan de marketing trimestral realista para un fondo de tamaño medio con equipo pequeño: qué canales priorizar, qué tipo de contenido publicar cada semana y cómo medir el impacto del marketing en dealflow y LP interest.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir la estrategia de marketing de un fondo de inversión: posicionamiento, dealflow, LP relations y contenido para el ecosistema.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Due diligence técnica para fusiones y adquisiciones',
                'description'      => 'Evalúa el estado técnico de una empresa en proceso de adquisición. El proceso de revisión de código, arquitectura, deuda técnica y las señales de alerta que pueden bloquear el precio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO o director técnico con experiencia en procesos de due diligence técnica para operaciones de M&A. He sido contratado para liderar la due diligence técnica de una empresa objetivo y necesito estructurar el proceso completo y saber qué buscar.

**Datos de la operación:**
- Tipo de operación: [adquisición total / adquisición parcial / fusión / acqui-hire]
- Empresa objetivo: [describe el sector, tamaño del equipo técnico, tipo de producto]
- Tecnología principal: [describe el stack conocido o "desconocido todavía"]
- Tiempo disponible para la due diligence: [días/semanas]
- Nivel de acceso al que tendré: [entrevistas con el equipo / acceso al code repository / acceso a sistemas de producción / todo]
- Precio de transacción estimado: [rango o "confidencial"]
- Mi rol: [CTO del comprador / consultor externo / Technical Partner de fondo PE]

**Fase 1 — Estructura del proceso de TDD (Technical Due Diligence)**

1. **El framework de evaluación**: explícame cómo estructurar la TDD en bloques temáticos que cubran todos los ángulos de riesgo técnico, con el tiempo estimado para cada uno y el nivel de profundidad adecuado dado el tiempo disponible.

2. **Priorización de áreas según el tipo de deal**: ¿qué áreas son más críticas si es una acqui-hire (el talento importa más que el código)? ¿Y si el producto SaaS es el activo clave (la escalabilidad y la deuda técnica importan más)? ¿Y si hay una IP específica que se está comprando (patentes, algoritmos, datos)?

3. **Documentación de solicitud inicial (information request list)**: ¿qué documentos y accesos debo solicitar en los primeros días antes de las entrevistas? Lista el set mínimo y el set completo de artefactos técnicos que necesito revisar.

**Fase 2 — Evaluación de la arquitectura y el stack**

1. **Preguntas de arquitectura para la primera sesión con el CTO/arquitecto**:
   - ¿Cómo está descompuesto el sistema? ¿Microservicios, monolito, híbrido?
   - ¿Cuáles son los puntos únicos de fallo (SPOF) en producción?
   - ¿Cómo escala el sistema ante picos de carga? ¿Han tenido problemas de disponibilidad?
   - ¿Cuál es el plan de recuperación ante desastres (DR) y cuándo fue el último test?

2. **Stack tecnológico — señales de alerta vs. señales positivas**: ¿qué elecciones de stack deben preocuparme (tecnologías obsoletas sin soporte, dependencia de un único proveedor en riesgo, versiones muy antiguas de frameworks críticos)? ¿Y qué señales técnicas son positivas (tests automatizados, CI/CD maduro, observabilidad implementada)?

3. **Infraestructura y costes de nube**: ¿cómo evalúo si el gasto en infraestructura es razonable vs. si hay una deuda de optimización significativa? ¿Qué preguntas hago y qué dashboards de costes pido ver?

**Fase 3 — Evaluación de la deuda técnica**

La deuda técnica puede cambiar el precio de la transacción o bloquearla:

1. **Metodología para cuantificar la deuda técnica**: ¿cómo convierto la deuda técnica en un número o rango en euros que pueda incluir en el informe? ¿Qué factores incluye ese cálculo (coste de refactoring, riesgo de incidentes, impacto en velocidad del equipo)?

2. **Deuda crítica vs. deuda aceptable**: ¿qué niveles de deuda son normales y aceptables en una empresa de la edad y tamaño de la objetivo? ¿Cuándo la deuda es un deal-breaker vs. cuándo es un ajuste de precio vs. cuándo es algo que se gestiona post-adquisición?

3. **Indicadores de calidad del código sin leer todo el código**: métricas que puedo obtener con herramientas estáticas (cobertura de tests, complejidad ciclomática, análisis de SonarQube, número de dependencias desactualizadas) y qué umbrales me preocupan.

**Fase 4 — Evaluación del equipo técnico**

En muchas adquisiciones, el equipo es el activo principal:

1. ¿Cómo evalúo en entrevistas cortas la calidad del equipo de ingeniería sin un proceso de selección formal?
2. ¿Qué preguntas hago al CTO para entender su estilo de liderazgo técnico y si encajará con la cultura del comprador?
3. ¿Cómo identifico las dependencias de personas clave (key-man risk) y cuál es el riesgo de fuga de talento post-adquisición?

**Fase 5 — El informe final de TDD**

1. Dame la estructura del informe de TDD que presentaré al comité de inversión o a la dirección del comprador.
2. ¿Cómo presento los hallazgos de forma que tengan impacto en el precio sin bloquear la operación si los problemas son manejables?
3. ¿Cuáles son los tres tipos de hallazgo que deben disparar una alerta roja y poner en pausa la transacción?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar y ejecutar la due diligence técnica en procesos de M&A: arquitectura, deuda técnica, equipo y elaboración del informe de riesgos.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para el mundo de la inversión y el capital riesgo',
                'description'      => 'Los fondos de inversión, las plataformas de inversión y los materiales de fundraising necesitan diseño que transmita rigor y sofisticación. Los estándares del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador con experiencia en el sector financiero, capital riesgo y plataformas de inversión. Necesito ayuda para diseñar materiales visuales para un fondo, una startup financiera o un proceso de fundraising.

**Datos del proyecto:**
- Tipo de material a diseñar: [pitch deck / informe para LPs / brand identity del fondo / plataforma digital de inversión / materiales de marketing para inversores / presentación de resultados de portfolio]
- Audiencia: [inversores institucionales / family offices / HNWIs / founders / reguladores]
- Tono de marca objetivo: [serio y conservador / moderno y sofisticado / accesible y tecnológico / premium y exclusivo]
- Restricciones regulatorias conocidas: [hay advertencias de inversión, disclaimers legales que debo incluir: sí/no]
- Referencias de diseño que te gusten: [cita fondos, bancos o plataformas cuyo diseño valoras]

**Módulo 1 — Los estándares visuales del sector financiero-inversor**

El diseño en el mundo inversor tiene convenciones propias que es importante conocer:

1. **Qué transmite credibilidad vs. qué transmite riesgo en diseño financiero**: colores, tipografías, layouts y estilos gráficos que los inversores institucionales asocian con solidez y rigor vs. los que les generan desconfianza. ¿Por qué los fondos de PE top usan tipografía serif y colores oscuros?

2. **La diferencia entre el diseño de un fondo de PE clásico y el de un VC moderno**: ¿qué señales visuales distinguen a Blackstone de Sequoia de a16z? ¿Qué comunica cada estilo sobre la cultura del fondo y quién es el inversor objetivo?

3. **Las plataformas de inversión retail y el diseño de confianza**: Robinhood, eToro y Revolut han enseñado que incluso el inversor retail necesita señales de seguridad en el diseño. ¿Qué elementos de UX aumentan la confianza y reducen la fricción de decisión en plataformas de inversión?

**Módulo 2 — Diseño de pitch deck para inversores**

El pitch deck es el material de diseño más crítico en el mundo inversor:

1. **La estructura visual que convierte**: ¿cómo ordeno las diapositivas para mantener la atención de un inversor que revisa 200 decks al mes? ¿Cuántas slides es el máximo razonable y qué debe tener cada una?

2. **Visualización de datos financieros**: cómo presento métricas de fondo (IRR, MOIC, DPI) o métricas de startup (ARR, growth, burn) de forma que sean inmediatamente legibles y no parezcan fabricadas. ¿Qué tipos de gráficos funcionan mejor para cada tipo de dato?

3. **Los errores de diseño más frecuentes en pitch decks**: slides sobrecargadas de texto, gráficos sin etiquetas claras, inconsistencia de estilo entre slides, uso de templates genéricos que no transmiten personalidad. ¿Cómo los evito?

4. **El one-pager o teaser**: muchos inversores piden un one-pager antes del pitch completo. ¿Cómo diseño un documento de una página que contenga lo esencial y genere curiosidad para seguir leyendo?

**Módulo 3 — Informes periódicos para LPs**

Los fondos envían informes trimestrales o anuales a sus LPs. El diseño importa:

1. **Estructura de un informe de LP report**: ¿qué secciones debe tener y en qué orden? ¿Cómo presento el performance del fondo de forma clara y honesta, también cuando los resultados no son los esperados?

2. **Diseño de tablas de portfolio**: cómo presento el estado de cada empresa en portfolio (nombre, entrada, valoración actual, múltiplo, estado) de forma que sea fácil de leer y compare bien con el período anterior.

3. **Storytelling en el informe**: los mejores LP reports no son solo tablas de números; cuentan la historia del fondo y del mercado. ¿Cómo combino los datos cuantitativos con narrativa cualitativa que construya confianza del LP en el equipo gestor?

**Módulo 4 — Identidad visual de un fondo de inversión**

Si el fondo necesita una identidad visual desde cero:

1. ¿Cómo se llama y qué significa el nombre? ¿Hay restricciones regulatorias para el nombre de un fondo registrado?
2. Diseñame las opciones de dirección de marca (naming + logo + color + tipografía) para tres posicionamientos distintos: fondo de PE clásico, VC tech europeo moderno, y family office de nueva generación.
3. ¿Qué materiales mínimos necesita un fondo nuevo para operar profesionalmente desde el día uno?

Termina con el checklist de revisión de diseño que aplicaría antes de enviar cualquier material a un inversor institucional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar materiales para el mundo inversor: pitch decks, LP reports, identidad de fondo y plataformas de inversión con los estándares del sector.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Fundraising como proceso de ventas para founders',
                'description'      => 'El levantamiento de capital es el proceso de ventas más importante del founder. El pipeline de inversores, el proceso y las técnicas que aplican los mejores fundraisers.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un fundraising advisor con experiencia trabajando con founders en sus rondas de financiación de venture capital. Estoy preparando una ronda de financiación y necesito ayuda para estructurar el proceso como un proceso de ventas profesional.

**Datos de mi ronda:**
- Empresa: [describe el sector, el producto, tracción principal]
- Ronda: [pre-seed / seed / Serie A / Serie B]
- Importe a levantar: [objetivo]
- Valoración objetivo (pre-money): [si la tengo definida o "por definir"]
- Tiempo objetivo para cerrar la ronda: [meses]
- Inversores actuales (si hay): [nombres o "ninguno todavía"]
- Principal tracción que tengo para mostrar: [ARR, usuarios, crecimiento mensual, contratos firmados, etc.]
- Mi mayor debilidad en el proceso actual: [no tengo leads / no consigo segundas reuniones / llego al TS y se rompe / no sé cuál es el número correcto]

**Módulo 1 — El pipeline de inversores como CRM de ventas**

El fundraising sin sistema es improvisation; con sistema, es proceso:

1. **Construcción del target list**: ¿cómo construyo la lista de inversores a los que voy a pitch? ¿Qué criterios uso para filtrar (tesis de inversión, ticket size, etapa, portfolio que no compite, geografía, con quién tengo warm intro)? Dame las fuentes para construir esta lista (Crunchbase, Pitchbook, LinkedIn, newsletters especializadas, portfolios públicos de los VCs).

2. **Segmentación y priorización**: ¿cómo divido mi lista entre Tier 1 (fondos ideales con los que empezaría el proceso), Tier 2 (fondos buenos) y Tier 3 (fondos de respaldo)? ¿Por qué es un error empezar con los mejores fondos antes de tener el pitch perfeccionado?

3. **El CRM del proceso**: ¿qué herramienta uso para gestionar el pipeline (Notion, Airtable, Google Sheets) y qué campos debe tener cada contacto? Dame la estructura del tracker de fundraising ideal.

4. **Las métricas del funnel**: ¿qué tasas de conversión son normales en cada etapa del funnel de fundraising (intro > primera reunión > segunda reunión > term sheet)? ¿Cómo sé si mi proceso tiene un problema de cantidad de intros, de conversión en primera reunión o de cierre?

**Módulo 2 — El outreach y las warm intros**

En venture capital, las introducciones importan más que en cualquier otra venta:

1. **La jerarquía de la intro**: ¿qué valor tiene una intro de un founder de portfolio vs. una intro de un LP vs. una intro de un coinversor vs. el cold outreach directo? ¿Cuándo tiene sentido ir en frío?

2. **Cómo conseguir las mejores intros**: ¿cómo mapeo quién de mi red tiene conexión con los VCs de mi lista? ¿Cómo le pido una intro a alguien que no me conoce bien? Dame el email o mensaje de LinkedIn tipo para pedir una intro.

3. **El forwardable memo**: algunos founders preparan un documento de una página que facilita la intro. ¿Qué debe incluir y cómo se diferencia de un pitch deck normal?

**Módulo 3 — El pitch como proceso de ventas**

1. **La estructura del pitch de primera reunión**: ¿cuántos minutos tiene el pitch ideal, en qué orden van los bloques (problema, solución, mercado, tracción, equipo, financiación) y cuánto tiempo de Q&A debo dejar?

2. **Cómo leer al inversor durante el pitch**: ¿qué señales indican que un VC está enganchado vs. que ya ha decidido que no invierte pero está siendo educado? ¿Qué preguntas son señales de interés real y cuáles son preguntas de descarte?

3. **El seguimiento post-reunión**: ¿qué envío después de la primera reunión y en qué plazo? ¿Cuándo sigo y cuándo espero? ¿Cómo gestiono el "necesito tiempo para pensarlo" sin perder el momentum?

**Módulo 4 — Creación de urgencia y cierre**

El cierre en fundraising requiere las mismas técnicas que el cierre en ventas:

1. ¿Cómo creo urgencia legítima sin mentir sobre otros inversores interesados?
2. ¿Cómo gestiono la situación en que tengo un TS y el resto del pipeline está frío?
3. ¿Cuándo es el momento de establecer una fecha de cierre de la ronda y cómo comunicarla?
4. ¿Cómo navego la negociación del term sheet sin destruir la relación con el inversor que va a ser tu socio durante los próximos 7-10 años?

Termina con el error número uno que cometen los founders en fundraising y cómo evitarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estructurar el fundraising como un proceso de ventas profesional: pipeline, intros, pitch, seguimiento y cierre de una ronda de inversión.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Preparar el producto para due diligence de inversores',
                'description'      => 'Cuando la empresa recibe interés inversor o comprador, el equipo de producto debe preparar la documentación. Qué buscan, qué presentar y cómo defender las decisiones tomadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product con experiencia en procesos de fundraising y M&A. Mi empresa está en proceso de due diligence con un inversor o un comprador y necesito preparar toda la documentación y narrativa del área de producto.

**Contexto:**
- Tipo de proceso: [due diligence de inversión Serie A/B / due diligence de adquisición / preparación para un primer contacto con VCs]
- Interlocutor principal: [VC tech partner / CTO del comprador / equipo de PE con asesor técnico externo]
- Tiempo que tengo para preparar: [días/semanas]
- Estado actual de la documentación de producto: [tenemos roadmap documentado / tenemos muy poca documentación / tenemos mucho pero desorganizado]
- La mayor fortaleza del producto: [describe tu ventaja principal]
- La mayor debilidad que más me preocupa defender: [describe el punto débil]

**Módulo 1 — Qué busca realmente el inversor o comprador en el área de producto**

Antes de preparar documentación, necesito entender el criterio de evaluación:

1. **La perspectiva del VC**: un inversor en una ronda de crecimiento evalúa el producto para entender si puede escalar, si hay moat real y si el equipo de producto puede ejecutar. ¿Cuáles son las preguntas de fondo que un tech-partner de VC hace aunque no las formule directamente?

2. **La perspectiva del comprador en M&A**: un comprador estratégico o financiero evalúa el producto para entender el riesgo de integración, la deuda de roadmap y si el producto puede operar autónomamente o depende de las personas actuales. ¿Qué documentos piden sistemáticamente los asesores de PE?

3. **La diferencia entre evaluar un producto B2B SaaS vs. un producto de consumo**: ¿qué métricas y qué documentación son más relevantes en cada caso?

**Módulo 2 — El dossier de producto para due diligence**

Ayúdame a construir el conjunto de documentos que debe tener preparado el área de producto:

1. **Product strategy document**: una descripción de la visión del producto, la tesis sobre el mercado y los tres horizontes de la estrategia (qué estamos construyendo ahora, qué construiremos en 12 meses, qué es el horizonte de 3 años). ¿Cómo lo presento sin revelar información competitiva sensible antes de tener un NDA firmado?

2. **Roadmap actual y razonamiento detrás de las prioridades**: no solo el "qué" sino el "por qué". ¿Cómo explico las decisiones de priorización de forma que demuestren rigor (datos de usuarios, impacto en retención, alineación con la estrategia de negocio) y no parezcan arbitrarias?

3. **Métricas de producto con contexto**: los números solos asustan o confunden. ¿Cómo presento las métricas de producto (DAU/MAU, retención por cohort, NPS, tiempo en la plataforma, feature adoption) con el contexto que las hace interpretables?

4. **Historial de decisiones de producto**: los inversores inteligentes preguntan sobre decisiones difíciles del pasado. ¿Cómo documento los pivots, las funcionalidades que se descontinuaron y los cambios de dirección de forma que muestren aprendizaje organizacional y no caos?

**Módulo 3 — Cómo defender decisiones difíciles**

La due diligence siempre llega a los puntos débiles. Prepárame para:

1. **"¿Por qué la retención de los usuarios de [X meses] es baja?"**: cómo respondo con datos, contexto y el plan de mejora sin sonar defensivo.

2. **"¿Por qué no tenéis [funcionalidad que tiene el competidor]?"**: cómo explico decisiones de NO construir algo como decisiones estratégicas deliberadas, no como omisiones.

3. **"¿Qué pasa si el PM actual se va? ¿Está el conocimiento documentado?"**: cómo demuestro que el conocimiento no está en las cabezas de las personas sino en los sistemas y procesos del equipo.

4. **"¿Cuánto tiempo llevaría reescribir X parte del producto?"**: cómo respondo sin sonar alarmista pero sin minimizar la complejidad.

**Módulo 4 — La presentación de producto en la due diligence**

1. ¿Cómo estructuro la demo del producto para una due diligence? ¿Qué muestro primero y qué no muestro?
2. ¿Qué métricas debo tener en tiempo real para responder las preguntas que surjan en la reunión?
3. ¿Cómo involucro al equipo de ingeniería y diseño en la preparación sin generar alarma interna sobre el proceso?

Dame un timeline de preparación de 4 semanas para tener todo listo antes de una due diligence de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Preparar la documentación y narrativa del área de producto para procesos de due diligence de inversores o compradores.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en transacciones de M&A: retención y cultura',
                'description'      => 'Las adquisiciones tienen un componente de personas crítico. Retención de talento clave, integración cultural y los aspectos de RRHH que hacen que las fusiones fracasen o tengan éxito.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con especialización en integraciones post-adquisición y transformación organizacional. Mi empresa está involucrada en una transacción de M&A (como compradora o como adquirida) y necesito gestionar todos los aspectos de personas del proceso.

**Datos de la situación:**
- Rol de mi empresa: [compradora / adquirida / fusión entre iguales]
- Tamaño del equipo de la empresa objetivo o fusionada: [número de empleados]
- Sectores de ambas empresas: [describe]
- Culturas organizacionales: [describe brevemente la cultura de cada empresa]
- Fase del proceso: [pre-firma (confidencial) / post-anuncio / integración activa]
- Mayor riesgo de personas identificado: [fuga de talento clave / choque de culturas / duplicidad de roles / incertidumbre generalizada / otro]
- Tiempo hasta que se espera la integración completa: [meses]

**Fase 1 — Due diligence de personas (antes del cierre)**

1. **Qué evalúo en la due diligence de RRHH**: lista de los documentos y datos que debo revisar en la empresa objetivo (contratos de empleados clave, acuerdos de no competencia, litigios laborales en curso, planes de retención existentes, estructura de compensación, beneficios, compromisos de pensión, acuerdos sindicales si existen).

2. **Key-man risk**: ¿cómo identifico las 5-10 personas cuya salida podría destruir valor en la transacción? ¿Qué información busco y qué preguntas hago al equipo directivo actual?

3. **Cultura como riesgo**: el 70% de las fusiones fracasan por problemas culturales. ¿Cómo hago un diagnóstico rápido de la cultura de la empresa objetivo con información limitada (entrevistas, Glassdoor, LinkedIn, análisis del equipo directivo)?

4. **Señales de alerta en la due diligence de personas**: qué hallazgos deben modificar el precio de la transacción o generar un earn-out ligado a retención de talento.

**Fase 2 — El anuncio: el momento más crítico**

El día del anuncio es cuando más gente decide si se queda o se va:

1. **La secuencia de comunicación**: ¿en qué orden comunico a empleados clave, al equipo directivo, a todo el personal y al mercado? ¿Qué pasa si hay filtraciones antes del anuncio oficial?

2. **El mensaje del día D**: dame la estructura del mensaje que deben recibir los empleados de ambas empresas el día del anuncio. ¿Qué incluye? ¿Qué preguntas deben responder y cuáles están vedadas legalmente?

3. **Gestión de la incertidumbre**: lo que más daña la retención es la incertidumbre prolongada sobre el empleo. ¿Cómo comunico lo que sé, lo que no sé todavía y los plazos en que lo sabré?

**Fase 3 — Retención de talento clave**

1. **Retention packages**: ¿qué tipos de incentivos de retención funcionan mejor (cash bonus con clawback, equity acelerado, bonus por hito de integración)? ¿Cómo los diseño para que retengan sin crear inequidad con el resto del equipo?

2. **Las conversaciones individuales con talento clave**: ¿cómo abordo la conversación con un empleado que sospecho que está buscando salida? ¿Qué ofrezco, qué no ofrezco y cómo manejo el caso en que decide irse de todas formas?

3. **Gestión de los duplicados**: cuando hay dos equipos con roles iguales, alguien se va. ¿Cómo gestiono el proceso de decisión de forma que los que se quedan vean el proceso como justo y los que se van salgan sin destruir la cultura?

**Fase 4 — Integración cultural**

1. **El modelo de integración cultural**: ¿cuándo tiene sentido que el comprador imponga su cultura vs. que construyan una cultura nueva juntos vs. que dejen que la empresa adquirida mantenga su cultura? ¿Qué factores determinan el modelo correcto?

2. **El playbook de integración de equipos**: ¿qué actividades concretas, en qué secuencia temporal, ayudan a construir relaciones entre personas de ambas empresas?

3. **Métricas de integración cultural**: ¿cómo mido si la integración está funcionando? ¿Qué indicadores me dicen que el proceso está en riesgo antes de que la situación se deteriore?

Dame un plan de 100 días post-cierre para el área de RRHH.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar el componente de personas en procesos de M&A: due diligence de RRHH, retención de talento clave e integración cultural.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de M&A: valoración y modelización financiera',
                'description'      => 'El proceso de análisis de una operación de fusión y adquisición: modelos de valoración, análisis de sinergias y la estructura del deal que maximiza el retorno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de M&A senior de un banco de inversión o fondo de private equity. Tengo que analizar una operación de fusión o adquisición y necesito construir el modelo financiero completo y la tesis de inversión.

**Datos de la operación:**
- Comprador: [describe el tipo de comprador: estratégico / PE / VC / familia empresarial]
- Empresa objetivo: [sector, facturación aproximada, EBITDA, modelo de negocio]
- Precio indicativo: [si hay precio / rango / "por determinar con el análisis"]
- Estructura de la operación: [compra de acciones / compra de activos / fusión / LBO]
- Financiación prevista: [100% equity / apalancado / earn-out / combinación]
- Plazo para el análisis: [días/semanas]
- Propósito del modelo: [comité de inversión / negociación con el vendedor / financiación bancaria / presentación a accionistas]

**Módulo 1 — Metodologías de valoración**

Un análisis de M&A riguroso usa múltiples metodologías y triangula el resultado:

1. **DCF (Discounted Cash Flow)**: explícame la metodología aplicada a este caso concreto. ¿Cómo proyecto los flujos de caja libres a 5-10 años? ¿Cómo calculo la tasa de descuento (WACC) apropiada para este sector y este riesgo? ¿Cómo calculo el valor terminal (perpetuidad vs. exit multiple)? ¿Qué sensibilidades son las más importantes en este modelo?

2. **Comparables de mercado (trading multiples)**: ¿qué empresas cotizadas son los mejores comparables para la empresa objetivo? ¿Qué múltiplos usar (EV/EBITDA, EV/Revenue, P/E) y cómo ajusto por diferencias de tamaño, crecimiento y margen entre los comparables y la empresa objetivo?

3. **Precedentes transaccionales**: ¿cómo busco transacciones comparables recientes? ¿Por qué los múltiplos de precedentes suelen ser más altos que los de cotizadas? ¿Cómo uso la prima de control como argumento en la negociación del precio?

4. **LBO analysis (si aplica)**: ¿cómo construyo el modelo LBO básico para determinar el precio máximo que puede pagar un fondo de PE dado un retorno objetivo del 20-25% IRR? ¿Qué apalancamiento es razonable para este perfil de empresa?

**Módulo 2 — Análisis de sinergias**

Las sinergias justifican las primas de control en adquisiciones estratégicas:

1. **Tipología de sinergias**: explícame las sinergias de ingresos (cross-selling, nuevos mercados, pricing power), las sinergias de costes (eliminación de duplicados, economías de escala, optimización de procurement) y las sinergias de capital (reducción de capex, optimización de circulante).

2. **Cómo cuantificar sinergias de forma creíble**: ¿qué nivel de detalle y qué evidencia necesito para que las sinergias sean defendibles ante un comité de inversión? ¿Por qué los bancos de inversión suelen ser más optimistas que los compradores sobre las sinergias y qué sesgo debo aplicar?

3. **El calendario de materialización de sinergias**: las sinergias no llegan el primer día. ¿Cómo modelo la curva de materialización (año 1, año 2, año 3) y los costes de integración que reducen el valor neto de las sinergias?

**Módulo 3 — Estructura del deal y earn-outs**

1. **Compra de acciones vs. compra de activos**: ¿cuál conviene a cada parte y por qué razones fiscales y de responsabilidad?

2. **Earn-out**: ¿cuándo tiene sentido estructurar un earn-out? ¿Qué KPIs se usan como base del earn-out, cuál es el período típico y cuáles son los conflictos habituales que generan los earn-outs post-cierre?

3. **Precio locked box vs. completion accounts**: explícame las dos metodologías de ajuste de precio y cuándo se usa cada una.

**Módulo 4 — La presentación del análisis**

Dame la estructura del Investment Committee Memo o del CIM (Confidential Information Memorandum) que presentaría el resultado de este análisis: los apartados obligatorios, el orden lógico de la argumentación y cómo presento el rango de valoración de forma que soporte la tesis de inversión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el modelo financiero de una operación de M&A: DCF, comparables, sinergias, LBO analysis y presentación al comité de inversión.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'M&A legal: SPA, due diligence y cierre de transacciones',
                'description'      => 'El proceso legal de una transacción de M&A: el acuerdo de compraventa, las declaraciones y garantías y el proceso de cierre que materializa la transacción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado corporativo especializado en fusiones y adquisiciones con experiencia en operaciones de M&A en España y en transacciones transfronterizas. Necesito ayuda para preparar o revisar los documentos legales de una transacción de M&A.

**Datos de la transacción:**
- Tipo de operación: [compraventa de acciones (SPA) / compraventa de activos (APA) / fusión / joint venture]
- Comprador: [tipo de comprador: estratégico español / PE / inversor internacional]
- Vendedor: [familia fundadora / fondo de PE / empresa cotizada]
- Empresa objetivo: [sector, tamaño, si hay estructuras especiales: holding, filiales internacionales]
- Precio pactado: [importe o "en negociación"]
- Estado del proceso legal: [term sheet firmado / due diligence en curso / primer borrador de SPA recibido / negociación de SPA / pre-cierre]
- Jurisdicción principal: [España / operación cross-border: indica países]
- Soy el abogado de: [comprador / vendedor]

**Módulo 1 — La due diligence legal**

1. **El scope de la due diligence legal**: ¿qué áreas jurídicas reviso siempre en una due diligence de M&A (corporativa, contractual, laboral, inmobiliaria, PI, fiscal, regulatoria, litigios, medioambiental)? ¿Cómo priorizo las áreas según el tipo de empresa objetivo?

2. **El data room y la request list**: ¿qué documentos incluyo en la request list inicial? ¿Cómo organizo el data room para que sea eficiente tanto para el vendedor (que tiene que poblarlo) como para el comprador (que tiene que revisarlo)?

3. **El due diligence report y los findings materiales**: ¿cómo clasifico los hallazgos de la DD (deal breakers, material issues, minor issues)? ¿Cómo traslado los riesgos jurídicos identificados a ajustes de precio, a reps & warranties específicas o a condiciones previas al cierre?

**Módulo 2 — El SPA (Share Purchase Agreement)**

El SPA es el documento central de la transacción:

1. **Estructura del SPA español**: explícame las partes principales de un SPA bajo ley española: partes, objeto, precio y ajustes (locked box vs. completion accounts, earn-outs), condiciones suspensivas, declaraciones y garantías (reps & warranties), obligaciones entre firma y cierre (covenants), indemnizaciones y el cierre.

2. **Declaraciones y garantías (Reps & Warranties)**: ¿cuáles son las declaraciones estándar en un SPA de M&A español? ¿Cómo negocio el alcance, los qualifiers (material adverse effect, conocimiento, materialidad) y las excepciones del Disclosure Letter desde el lado del vendedor? ¿Y desde el lado del comprador?

3. **El régimen de indemnización**: ¿qué parámetros negocio en la cláusula de indemnización? (cap de responsabilidad, basket/tipping basket o dollar one, de minimis por reclamación individual, plazo de prescripción para reclamaciones generales vs. fiscales vs. PI). ¿Cuáles son los rangos habituales en el mercado español y europeo?

4. **W&I Insurance (Warranty and Indemnity Insurance)**: ¿cuándo tiene sentido contratar un seguro de declaraciones y garantías? ¿Cómo afecta al proceso de negociación del SPA? ¿Qué cubre y qué excluye típicamente?

**Módulo 3 — Condiciones suspensivas y proceso de cierre**

1. **Condiciones regulatorias**: ¿cuándo se requiere notificación a la CNMC (control de concentraciones español) o a la Comisión Europea? ¿Cuáles son los umbrales y los plazos?

2. **El período entre firma y cierre (signing to closing)**: ¿qué covenants del vendedor son estándar durante este período (no material change, operating in ordinary course, no dividends)? ¿Cómo gestiono el MAC (Material Adverse Change) como condición de cierre?

3. **El cierre (completion/closing)**: ¿qué documentos se firman e intercambian en el closing? ¿Qué acciones se hacen simultáneamente y en qué orden? ¿Qué pasa si hay un defecto en el closing que una parte descubre en el último momento?

Dame un timeline tipo de un proceso de M&A de tamaño medio desde el NDA hasta el cierre, con los hitos legales clave y el tiempo estimado de cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar los documentos legales de una operación de M&A: due diligence, negociación del SPA, reps y warranties y proceso de cierre.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Integración de clientes en procesos de M&A',
                'description'      => 'Cuando la empresa adquiere o es adquirida, los clientes necesitan una gestión proactiva. El playbook de comunicación que retiene la cartera en los momentos de mayor incertidumbre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en procesos de M&A. Mi empresa está involucrada en una adquisición (como compradora o como adquirida) y necesito gestionar la cartera de clientes durante y después de la transacción para minimizar el churn y mantener la confianza.

**Contexto de la situación:**
- Rol de mi empresa: [compradora / adquirida]
- Tamaño de la cartera de clientes: [número de clientes, importe de ARR o revenue bajo gestión]
- Tipo de clientes: [enterprise / mid-market / SMB / mezcla]
- Relación contractual actual: [contratos anuales / plurianuales / mensual / sin contrato formal]
- Estado del proceso: [pre-anuncio (NDA) / post-anuncio / integración activa]
- Principal preocupación del cliente si se entera: [competidor del comprador en su cartera / cambio de producto / cambio de pricing / pérdida del equipo que les atiende / desconocimiento del nuevo propietario]
- ¿Cuánto conocen ya los clientes?: [ninguno lo sabe / algunos lo saben / acaba de anunciarse / ya está integrado]

**Fase 1 — Pre-anuncio: gestión bajo NDA**

Mientras la transacción es confidencial, los clientes no saben nada. Pero el equipo de CS sí:

1. ¿Qué puedo hacer antes del anuncio para preparar la retención sin violar el NDA? (identificar clientes en riesgo, revisar la salud de la cartera, resolver pendientes que podrían convertirse en motivo de churn, acelerar conversaciones de renovación que estaban en marcha).

2. ¿Cómo gestiono las preguntas de clientes sobre rumores que puedan haber circulado antes del anuncio? ¿Qué puedo decir legalmente y qué no?

3. ¿Qué información de la cartera debo preparar para que la empresa compradora entienda el riesgo de retención? (segmentación de clientes por riesgo, contratos con cláusulas de cambio de control, clientes donde hay relación personal con el equipo que podría irse).

**Fase 2 — El anuncio: los primeros 48 horas con clientes**

El anuncio es el momento de mayor riesgo de churn reactivo:

1. **La secuencia de comunicación con clientes**: ¿quién debe ser notificado primero? ¿Llamo antes del comunicado de prensa a los 10-20 clientes más importantes? ¿Cómo priorizo?

2. **El mensaje para clientes top**: dame el guión para la llamada proactiva con un cliente top el día del anuncio. ¿Qué digo, qué garantías puedo ofrecer y cuál es la respuesta para las preguntas difíciles?

3. **El email para el resto de la cartera**: redacta el email que enviamos al resto de clientes el día del anuncio. Debe ser claro, tranquilizador y honesto sobre lo que saben y lo que aún no pueden decir.

4. **Gestión de la cláusula de cambio de control**: algunos contratos incluyen el derecho del cliente a terminar el contrato si hay un cambio de control. ¿Cómo gestiono estas conversaciones? ¿Qué ofrezco para que no ejerciten ese derecho?

**Fase 3 — Los primeros 90 días post-anuncio**

1. **El QBR (Quarterly Business Review) de integración**: diseña un formato especial de QBR post-M&A que aborde las preocupaciones del cliente directamente, muestre la estabilidad del equipo y del producto, y use el momento como oportunidad de expansión.

2. **El team de CS en la integración**: si el equipo de CS de la empresa adquirida tiene miedo por su trabajo, ¿cómo los mantengo motivados para que cuiden a los clientes cuando ellos mismos están inseguros?

3. **Integración de carteras si hay clientes solapados**: cuando el comprador ya tiene clientes en el mismo sector o mercado, ¿cómo gestiono la situación en que el comprador era competidor del cliente antes de la adquisición?

4. **Métricas de retención durante la integración**: ¿qué KPIs debo medir semanalmente durante los primeros 6 meses para tener señales tempranas de riesgo de churn antes de que sea irreversible?

Dame el playbook completo de los primeros 100 días de gestión de clientes en un proceso de M&A, con las acciones concretas semana a semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar la cartera de clientes durante un proceso de M&A: comunicación del anuncio, retención, integración y gestión de clientes solapados.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios de consultoría en M&A como freelance',
                'description'      => 'El consultor independiente de operaciones corporativas: financial modeling, due diligence y los servicios que bancos boutique y family offices contratan a freelancers.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor freelance con experiencia en banca de inversión y M&A que ha construido una práctica independiente de éxito. Quiero ofrecer servicios de consultoría en M&A como profesional independiente y necesito ayuda para estructurar mi oferta, posicionarme y conseguir clientes.

**Mi perfil:**
- Experiencia previa: [años en banca de inversión / PE / corporate finance / asesoría estratégica]
- Especialización sectorial: [sector o sectores donde tengo más credibilidad]
- Tipo de operaciones en las que he trabajado: [tamaño de deals, tipo: buy-side / sell-side / fundraising / valoración]
- Mercado objetivo como freelance: [family offices / PE boutique / empresas familiares / startups en ronda / corporaciones / otro]
- Situación actual: [acabo de salir de un banco / ya estoy freelance pero quiero crecer / estoy pensando en hacer el salto]

**Módulo 1 — Qué servicios ofrecer como freelance de M&A**

El consultor freelance de M&A puede ofrecer varios servicios con distintos perfiles de cliente y distintos modelos de tarificación:

1. **Financial modeling**: construcción de modelos de valoración (DCF, LBO, comparables, merger model), actualización y mantenimiento de modelos existentes, revisión y auditoría de modelos de terceros. ¿Quién contrata esto? ¿Cómo se tarifica (por hora / por proyecto / por entregable)?

2. **Buy-side advisory para empresas familiares y PE boutique**: acompañar al comprador en la identificación de targets, análisis financiero, negociación de precio y coordinación del proceso. ¿Qué rol concreto puede tener un freelance aquí que no tenga un banco de inversión? ¿Cuál es el modelo de compensación habitual (retainer mensual + success fee)?

3. **Sell-side preparation**: preparar una empresa para la venta (financial model, CIM, gestión del data room, preparación del management team para los pitches). ¿Cuánto dura este trabajo y cómo se estructura el fee?

4. **Valoración independiente**: emitir opiniones de valoración para empresa familiares, para operaciones de compraventa entre accionistas, para fusiones, para litigios. ¿Requiere alguna habilitación regulatoria en España?

5. **Formación y mentoring**: formar a equipos de M&A de empresas corporativas, impartir talleres sobre financial modeling, mentoring a analistas junior. ¿Cómo posiciono este servicio sin que diluya mi imagen como practitioner senior?

**Módulo 2 — Posicionamiento y nicho**

1. **El error del generalista en M&A**: ¿por qué intentar cubrir todos los sectores y todos los tamaños de deal me hace menos competitivo como freelance? ¿Cómo elijo el nicho donde tengo una ventaja competitiva real?

2. **El posicionamiento geográfico**: ¿tiene sentido focalizarme en el mercado español o debo ir a Europa desde el principio? ¿Qué mercados europeos contratan más freelancers de M&A?

3. **Cómo demuestro credibilidad sin revelar información confidencial de deals pasados**: en M&A, la confidencialidad es sagrada. ¿Cómo construyo un portfolio que sea creíble sin violar los NDAs de mis empleadores anteriores?

**Módulo 3 — Conseguir los primeros clientes**

1. **Los primeros clientes siempre vienen de la red anterior**: ¿cómo activo mi red de contactos de forma sistemática para buscar el primer proyecto freelance sin parecer desesperado?

2. **Los bancos boutique y asesores de M&A como clientes**: muchas boutiques de M&A trabajan con freelancers para ampliar capacidad en momentos de alta actividad. ¿Cómo entro en su lista de consultores de confianza?

3. **LinkedIn como canal de generación de negocio para M&A freelance**: ¿qué tipo de contenido genera credibilidad e inbound leads para un consultor de M&A? (análisis de sectores, opiniones sobre deals del mercado, educación sobre procesos de M&A). Dame ideas de 10 posts para los primeros 3 meses.

4. **El modelo de tarificación**: ¿cómo fijo mi tarifa como freelance de M&A? ¿Qué estructura funciona mejor para cada tipo de proyecto (daily rate, project fee, retainer, success fee, combinaciones)? ¿Cuáles son las tarifas de mercado en España y Europa?

**Módulo 4 — Gestión del negocio freelance**

1. ¿Qué forma jurídica es más eficiente para operar como freelance de M&A en España?
2. ¿Necesito alguna habilitación, registro o seguro profesional para prestar servicios de asesoramiento en operaciones?
3. ¿Cómo gestiono los conflictos de interés cuando trabajo para varios clientes simultáneamente en el mismo mercado?

Dame un plan de 90 días para lanzar o relanzar mi práctica independiente de consultoría en M&A.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una práctica freelance de consultoría en M&A: qué servicios ofrecer, cómo posicionarse y conseguir los primeros clientes.',
                'vote_score'       => 31,
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
