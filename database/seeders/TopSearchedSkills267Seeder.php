<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills267Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Customer journey mapping: diseñar la experiencia de principio a fin',
                'description'      => 'Aprende a crear mapas de experiencia del cliente que identifiquen puntos de dolor, momentos de verdad y oportunidades de mejora en cada etapa del ciclo de vida del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer experience y diseño de servicios con experiencia trabajando con empresas de retail, tecnología y servicios financieros en la mejora de la experiencia del cliente. Quiero construir un customer journey map completo y accionable para mi empresa.

Antes de empezar, hazme estas preguntas:
- ¿Qué producto o servicio ofrece mi empresa y cuál es el modelo de negocio?
- ¿Qué perfil de cliente quiero mapear (el cliente más frecuente, el más valioso, o el que más problemas tiene)?
- ¿Tenemos datos de comportamiento del cliente (encuestas, analítica web, grabaciones de sesión, entrevistas)?
- ¿Cuáles son los canales principales a través de los que el cliente interactúa con nosotros?
- ¿Cuál es el objetivo del mapa: mejorar conversión, reducir churn, mejorar satisfacción, o identificar oportunidades de nuevos productos?

Con esas respuestas, guíame paso a paso:

PASO 1: Definir la persona y el escenario
Un journey map sin un cliente concreto es un mapa de nadie:
- Cómo construir la persona del cliente para este journey: características demográficas, motivaciones, frustraciones, comportamiento digital
- Cómo definir el escenario específico: qué quiere conseguir el cliente, qué contexto tiene, qué alternativas ha considerado
- Por qué necesito personas distintas para journeys distintos y cuántas personas son demasiadas
- Cómo validar la persona con datos reales en lugar de suposiciones del equipo

PASO 2: Mapear las etapas del journey
Las etapas del journey son los capítulos de la historia del cliente:
- Cómo definir las etapas del journey según el modelo de negocio (para un SaaS: descubrimiento → evaluación → compra → onboarding → uso → renovación)
- Qué granularidad tiene sentido: cuántas etapas son demasiadas pocas y cuántas son demasiadas
- Cómo mapear tanto el journey deseado (lo que queremos que haga el cliente) como el journey real (lo que realmente hace)
- Cómo incluir los momentos previos a la interacción con la marca (el cliente ya tiene un problema antes de conocernos)

PASO 3: Identificar touchpoints, emociones y puntos de dolor
Este es el núcleo del customer journey map:
- Cómo listar todos los puntos de contacto del cliente con la marca en cada etapa
- Cómo mapear las emociones del cliente en cada touchpoint (de frustración máxima a deleite)
- Técnicas para identificar los puntos de dolor reales (entrevistas, análisis de tickets de soporte, encuestas NPS, grabaciones de sesión)
- Los "momentos de verdad": los touchpoints donde se gana o se pierde al cliente
- Cómo distinguir entre un punto de dolor tolerable y uno que destruye la experiencia

PASO 4: Mapear lo que pasa por detrás del escenario
El cliente solo ve la superficie; lo que le afecta está debajo:
- Frontstage vs backstage: qué ve el cliente y qué procesos y sistemas internos hay detrás
- Cómo identificar qué procesos internos están generando una mala experiencia externa
- La línea de visibilidad: dónde empieza lo invisible para el cliente pero crítico para la experiencia
- Sistemas, herramientas y departamentos que participan en cada touchpoint aunque el cliente no los vea

PASO 5: Identificar oportunidades y priorizar mejoras
El mapa es inútil si no lleva a acción:
- Cómo extraer las oportunidades de mejora más relevantes del journey map
- Cómo priorizar las oportunidades por impacto en la experiencia del cliente vs esfuerzo de implementación
- Cómo convertir las oportunidades del mapa en proyectos concretos con responsable y plazo
- Cómo usar el journey map en revisiones periódicas para medir si la experiencia está mejorando
- Cómo comunicar el customer journey map a equipos que no son de marketing para que lo usen en sus decisiones

Termina con una estructura de taller de 4 horas para construir el customer journey map con un equipo cross-funcional (marketing, producto, CS, ventas), con los ejercicios y materiales necesarios para cada bloque.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 65,
                'use_case'         => 'Construir un customer journey map completo que identifique puntos de dolor y oportunidades de mejora',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Accesibilidad técnica: implementar WCAG en aplicaciones web',
                'description'      => 'Guía técnica completa para implementar accesibilidad web según WCAG 2.1: semántica HTML, ARIA, navegación por teclado, contraste de color, lectores de pantalla y auditoría automatizada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero front-end especializado en accesibilidad web (a11y) con experiencia auditando y remediando aplicaciones web según los estándares WCAG 2.1 y 2.2. Quiero implementar accesibilidad correctamente en mi aplicación web y necesito una guía técnica que vaya más allá de los checklist superficiales.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el stack tecnológico de la aplicación (React, Vue, Angular, HTML vanilla, otro)?
- ¿Tenemos ya alguna auditoría de accesibilidad hecha, o empezamos desde cero?
- ¿Cuál es el nivel de conformidad que necesitamos alcanzar (WCAG 2.1 AA es el estándar más común)?
- ¿Hay requisitos legales de accesibilidad que debemos cumplir (directiva europea de accesibilidad, ADA)?

Con esas respuestas, guíame por:

MÓDULO 1: Fundamentos de accesibilidad técnica
Antes de implementar, hay que entender el modelo:
- Los cuatro principios WCAG (perceptible, operable, comprensible, robusto) y qué significa cada uno en la práctica
- La diferencia entre conformidad A, AA y AAA: cuál es el objetivo realista para la mayoría de aplicaciones
- Cómo piensan los usuarios de tecnologías asistivas: lectores de pantalla, navegación por teclado, ampliación de pantalla, control por voz
- Los errores de accesibilidad más comunes y más fáciles de corregir (alto impacto, bajo esfuerzo)
- La diferencia entre accesibilidad técnica y accesibilidad real: por qué pasar el validador automático no es suficiente

MÓDULO 2: HTML semántico y estructura de la página
La semántica correcta es la base de todo lo demás:
- Uso correcto de los elementos HTML5 de landmark (header, nav, main, aside, footer) y por qué importan para los lectores de pantalla
- Jerarquía de encabezados (h1-h6): el error más común y cómo corregirlo
- Tablas de datos accesibles: caption, scope, headers, resumen
- Formularios accesibles: label, fieldset, legend, mensajes de error asociados, grupos de campos relacionados
- Listas semánticas para contenido que es realmente una lista

MÓDULO 3: ARIA cuando el HTML no es suficiente
ARIA bien usado ayuda; ARIA mal usado daña:
- El primer principio de ARIA: no usar ARIA cuando hay un elemento HTML nativo equivalente
- Los roles, propiedades y estados ARIA más importantes: role, aria-label, aria-labelledby, aria-describedby, aria-expanded, aria-hidden, aria-live
- Patrones de ARIA para componentes complejos: modal, tabs, accordeon, combobox, tooltip
- Por qué aria-hidden="true" puede destruir la experiencia de usuarios de lector de pantalla si se usa mal
- Cómo validar que el ARIA que añado realmente mejora la experiencia (probar con lector de pantalla real)

MÓDULO 4: Navegación por teclado e interactividad
Todo lo que se puede hacer con ratón debe poder hacerse con teclado:
- Focus management: qué es, por qué importa y cómo gestionarlo en aplicaciones de una sola página
- El orden del foco: cómo el tabindex puede ayudar o destruir la navegación por teclado
- Cómo implementar Skip links para que los usuarios de teclado puedan saltar la navegación
- Trampas de foco en modales y dialogs: cómo implementarlas correctamente
- Atajos de teclado personalizados: cuándo usarlos y cómo documentarlos para el usuario

MÓDULO 5: Colores, contraste y presentación visual
Lo que no se ve con claridad no es accesible:
- Ratios de contraste WCAG AA: 4.5:1 para texto normal, 3:1 para texto grande y componentes de UI
- Cómo verificar el contraste con herramientas (WebAIM Contrast Checker, las DevTools de Chrome)
- No solo contraste: cómo no depender solo del color para transmitir información
- Texto redimensionable: cómo garantizar que el texto se puede ampliar hasta 200% sin pérdida de contenido
- Espaciado de texto: los requisitos de WCAG 1.4.12 y cómo implementarlos

MÓDULO 6: Auditoría y testing de accesibilidad
La accesibilidad que no se testea no se mantiene:
- Herramientas de auditoría automatizada: axe, Lighthouse, WAVE, IBM Equal Access Checker
- Cómo integrar la auditoría de accesibilidad en el pipeline de CI/CD con axe-core
- Cómo testear con lectores de pantalla reales: NVDA (Windows), JAWS (Windows), VoiceOver (Mac/iOS)
- Cómo hacer testing manual de navegación por teclado paso a paso
- Cómo priorizar y gestionar un backlog de issues de accesibilidad en el equipo de desarrollo

Termina con un checklist técnico de 25 puntos para revisar la accesibilidad de cualquier componente nuevo antes de hacer merge, organizado por categoría y con el nivel WCAG de cada criterio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 80,
                'use_case'         => 'Implementar accesibilidad web según WCAG 2.1 en aplicaciones con auditoría y testing incluidos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Service design: diseñar experiencias que van más allá de la pantalla',
                'description'      => 'Aprende a aplicar service design para diseñar experiencias completas: blueprints de servicio, orquestación de touchpoints físicos y digitales, y cómo involucrar a toda la organización en la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de servicios con experiencia aplicando metodologías de service design en organizaciones de salud, finanzas, retail y tecnología. Quiero aprender a diseñar la experiencia de mis clientes de forma holística, más allá de las pantallas digitales, incluyendo todos los puntos de contacto físicos, humanos y digitales.

Para contextualizar, hazme estas preguntas:
- ¿Qué tipo de servicio ofrece mi organización y cuáles son los canales principales (digital, físico, telefónico, mixto)?
- ¿Cuál es el problema de experiencia que quiero resolver o la oportunidad que quiero explorar?
- ¿Tenemos ya herramientas de diseño de servicios (blueprints, journey maps) o partimos de cero?
- ¿Qué equipos de la organización necesito involucrar en el proceso?

Con esas respuestas, guíame por:

BLOQUE 1: Diferencia entre UX y service design
El diseño de servicios amplía el alcance del diseño de interacción:
- Por qué el service design no es solo UX con más pantallas: la dimensión temporal, espacial y organizacional
- La diferencia entre el producto (lo que el cliente usa) y el servicio (la experiencia completa)
- El concepto de frontstage y backstage: lo que el cliente ve vs los procesos que lo hacen posible
- Por qué muchos problemas de experiencia no se resuelven rediseñando la interfaz sino cambiando los procesos internos
- Los principios del service design: centrado en el usuario, co-creativo, iterativo, evidencia, holístico

BLOQUE 2: Service blueprint como herramienta principal
El blueprint es el mapa técnico de cómo funciona un servicio:
- Cómo se estructura un service blueprint: línea de acción del cliente, de visibilidad, de interacción interna, procesos de soporte
- Diferencia entre el customer journey map (perspectiva del cliente) y el service blueprint (perspectiva de la organización)
- Cómo construir el blueprint paso a paso con el equipo: qué información necesito, cómo recogerla, cómo documentarla
- Cómo identificar los puntos de fallo del servicio en el blueprint (donde el proceso interno genera una mala experiencia)
- Ejemplos de blueprints para diferentes tipos de servicios: onboarding de cliente, proceso de reclamación, entrega de producto

BLOQUE 3: Diseño de touchpoints físicos y digitales
Un servicio suele cruzar múltiples canales que deben estar orquestados:
- Cómo diseñar la coherencia de la experiencia cuando el cliente cruza del canal digital al físico o al telefónico
- La continuidad de contexto: cómo el cliente no debería tener que repetir información que ya dio en otro canal
- Diseño del entorno físico como parte del servicio: esperas, señalética, disposición del espacio
- El papel de las personas (empleados, operadores, agentes) como parte del diseño del servicio
- Cómo diseñar los scripts y guías para los empleados que están en contacto directo con el cliente

BLOQUE 4: Co-diseño con usuarios y stakeholders
El service design se hace con las personas, no para ellas:
- Cómo organizar un taller de co-diseño con clientes para diseñar el servicio ideal
- Cómo involucrar a los empleados de primera línea en el diseño: son los que mejor conocen los fallos del servicio actual
- Técnicas de investigación para el service design: shadowing, entrevistas de contexto, service safari, diary studies
- Cómo gestionar los conflictos entre lo que el cliente quiere y lo que la organización puede ofrecer
- Cómo presentar el diseño de un servicio a stakeholders que no tienen vocabulario de diseño

BLOQUE 5: Prototipado y piloto de servicios
Un servicio no se puede prototipar solo en Figma:
- Técnicas de prototipado de servicios: role-playing, desktop walkthrough, piloto controlado
- Cómo hacer un piloto de un servicio nuevo con un grupo reducido de clientes antes del lanzamiento completo
- Qué medir en el piloto de un servicio: métricas de proceso (tiempo, errores) y métricas de experiencia (satisfacción, esfuerzo del cliente)
- Cómo iterar el diseño del servicio a partir de los aprendizajes del piloto
- Cómo escalar un servicio pilotado sin perder las características que lo hacían bueno

Termina con una guía para construir el primer service blueprint de un proceso clave de la organización en un taller de un día, con la estructura del día, los participantes necesarios y los materiales a preparar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Aplicar service design para diseñar experiencias completas que van más allá del producto digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales experience design: diseñar el proceso de ventas como experiencia memorable',
                'description'      => 'Aprende a diseñar el proceso de ventas desde la perspectiva del comprador: qué experimenta el cliente en cada etapa, cómo eliminar fricción y crear momentos memorables que diferencien la venta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de sales experience y diseño de procesos de venta con experiencia en empresas B2B de tecnología, servicios profesionales y consultoría. Quiero diseñar el proceso de ventas de mi empresa desde la perspectiva del comprador, no solo desde la del vendedor.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el tipo de venta que hacemos (B2B/B2C, ticket alto/bajo, ciclo corto/largo, consultivo/transaccional)?
- ¿Cuáles son las etapas actuales de nuestro proceso de ventas?
- ¿Qué feedback han dado los clientes sobre su experiencia de compra (quejas, elogios, razones por las que compraron o no compraron)?
- ¿Quiénes participan en el proceso de compra del lado del cliente (comité de compra, usuarios finales, decisores)?

Con esas respuestas, guíame por:

BLOQUE 1: El proceso de compra del cliente vs el proceso de venta del vendedor
El error más común es diseñar el proceso de ventas pensando en el vendedor, no en el comprador:
- Cómo mapear el proceso de compra del cliente (buyer journey) en paralelo al proceso de ventas
- La diferencia entre etapas del CRM (prospecting, demo, propuesta, cierre) y etapas del comprador (problema reconocido, opciones exploradas, decisión tomada)
- Por qué los compradores están más avanzados en su proceso de decisión antes del primer contacto con ventas
- Cómo identificar las emociones del comprador en cada etapa: incertidumbre, esperanza, desconfianza, presión interna
- Los puntos de fricción más comunes que hacen que los compradores abandonen el proceso

BLOQUE 2: Diseño de los momentos de contacto con el comprador
Cada interacción con el comprador debe estar diseñada, no improvisada:
- Cómo diseñar la primera llamada de descubrimiento como una experiencia de valor para el comprador, no solo una recogida de información para el vendedor
- La demo como experiencia: cómo diseñar una demostración que cuente la historia del comprador, no la del producto
- Cómo diseñar la propuesta comercial como un documento que el comprador pueda defender internamente
- Cómo diseñar el cierre de ventas para que se sienta como una decisión natural, no como presión
- Cómo diseñar el proceso de onboarding post-venta para que el cliente valide que tomó la decisión correcta

BLOQUE 3: Eliminar la fricción del proceso de compra
La fricción mata las ventas incluso cuando el comprador quiere comprar:
- Cómo identificar los puntos de fricción en el proceso de compra actual (tiempo de respuesta, complejidad de la propuesta, número de reuniones necesarias, proceso de firma)
- Cómo reducir el número de pasos que el comprador tiene que dar para llegar a la decisión
- Cómo diseñar materiales que el comprador pueda compartir con su equipo sin necesidad del vendedor
- Cómo facilitar el proceso de aprobación interna del comprador con materiales diseñados para ello
- Cómo hacer que la firma del contrato y el pago sean lo más sencillos posible

BLOQUE 4: Crear momentos memorables en el proceso de venta
La compra memorable genera referidos y acelera futuras ventas:
- Qué es un "momento de deleite" en el proceso de ventas y cómo diseñarlo sin que parezca forzado
- Cómo personalizar la experiencia de compra para que el cliente sienta que se le conoce y se le comprende
- El poder del reconocimiento: pequeños gestos que demuestran que el vendedor ha prestado atención
- Cómo diseñar el momento del "sí" para que sea memorable y genere compromiso emocional con la decisión
- La primera semana como cliente: cómo diseñar la experiencia post-firma para consolidar la relación

BLOQUE 5: Medir y mejorar la experiencia de compra
Lo que no se mide no se puede mejorar:
- Cómo recoger feedback del proceso de compra de los clientes que compraron y de los que no compraron
- Métricas de experiencia de venta: velocidad del ciclo, tasa de conversión por etapa, esfuerzo percibido del comprador
- Cómo hacer win/loss interviews estructuradas para entender qué experiencias generan ventas ganadas o perdidas
- Cómo iterar el diseño del proceso de ventas basándose en los datos de experiencia del comprador

Termina con una hoja de ruta para rediseñar los tres momentos de contacto más críticos del proceso de ventas (primera reunión, demo, propuesta) con criterios de éxito claros para cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar el proceso de ventas desde la perspectiva del comprador para eliminar fricción y crear momentos memorables',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product experience: la coherencia de experiencia en un producto complejo',
                'description'      => 'Aprende a mantener la coherencia de experiencia en productos complejos con múltiples equipos: design systems, principios de experiencia, gobernanza de UX y cómo escalar la calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de experiencia de producto (Head of Product Experience o VP of UX) con experiencia liderando la coherencia de experiencia en productos complejos con múltiples equipos de producto trabajando en paralelo. Quiero mejorar la coherencia de experiencia de mi producto y evitar que cada equipo construya de forma aislada sin visión común.

Para contextualizar, hazme estas preguntas:
- ¿Cuántos equipos de producto hay y cómo están organizados (por funcionalidad, por segmento de usuario, por plataforma)?
- ¿Cuál es la principal queja de los usuarios sobre la coherencia de la experiencia actual?
- ¿Tenemos ya un design system? ¿Está siendo adoptado por todos los equipos?
- ¿Cuál es el proceso actual de toma de decisiones de UX cuando hay conflicto entre equipos?

Con esas respuestas, guíame por:

BLOQUE 1: Por qué la coherencia de experiencia se rompe en productos complejos
Entender el problema antes de aplicar soluciones:
- Las causas sistémicas de la incoherencia: equipos autónomos sin visión compartida, design system subutilizado, decisiones de UX sin coordinación
- Cómo la autonomía de los equipos de producto (necesaria para la velocidad) genera incoherencia de experiencia (dañina para el usuario)
- El costo de la incoherencia: impacto en la curva de aprendizaje del usuario, en las métricas de satisfacción y en la velocidad de desarrollo
- Los síntomas más comunes de un producto que ha perdido coherencia de experiencia
- La diferencia entre consistencia (mismo patrón para lo mismo) y coherencia (experiencia que se siente unificada aunque varíe)

BLOQUE 2: Principios de experiencia como guía común
Los principios de diseño son la constitución de la experiencia del producto:
- Qué son los principios de experiencia de producto y cómo se diferencian de los principios de diseño visual
- Cómo definir los principios de experiencia con el equipo para que reflejen las decisiones reales
- Cómo hacer que los principios sean operativos: utilizados en decisiones de diseño reales, no decoración de paredes
- Ejemplos de principios de experiencia de producto que funcionan y por qué son efectivos
- Cómo usar los principios para resolver conflictos de diseño entre equipos

BLOQUE 3: Design system como infraestructura de coherencia
El design system es la capa técnica de la coherencia de experiencia:
- Qué debe incluir un design system maduro: componentes, tokens, patrones de interacción, guías de contenido
- Cómo escalar la adopción del design system en equipos que no quieren usarlo
- El modelo de gobernanza del design system: quién puede contribuir, quién toma decisiones sobre cambios
- Cómo gestionar la deuda de coherencia: pantallas antiguas que no siguen el design system
- Cómo medir la adopción del design system y la reducción de incoherencia en el producto

BLOQUE 4: Gobernanza de UX en equipos múltiples
La coordinación de UX no puede depender de reuniones interminables:
- Modelos de organización de UX para múltiples equipos: UX centralizado, UX embebido en equipos, modelo de capas (embedded + plataforma)
- Cómo definir quién toma las decisiones de UX que afectan a toda la experiencia vs las decisiones de UX locales al equipo
- El papel del design review: qué revisar, con qué frecuencia, quién debe participar
- Cómo documentar las decisiones de UX para que los equipos no repitan los mismos debates
- Cómo escalar el diseño sin que la calidad de la experiencia caiga

BLOQUE 5: Medir la coherencia y calidad de la experiencia
Lo que no se mide no se mejora:
- Cómo hacer una auditoría de coherencia de experiencia: qué buscar, cómo documentarlo, cómo priorizarlo
- Métricas de calidad de experiencia: SUS (System Usability Scale), error rate, tiempo en tarea, satisfacción por flujo
- Cómo crear un scorecard de calidad de experiencia por equipo de producto
- Cómo incluir la coherencia de experiencia en la definición de "done" del equipo de producto
- Cómo presentar el estado de la experiencia del producto al CEO y al board de forma que entiendan su impacto en el negocio

Termina con un plan de 90 días para mejorar la coherencia de experiencia en un producto complejo con múltiples equipos, con acciones concretas en design system, principios, gobernanza y medición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Mantener la coherencia de experiencia en productos complejos con múltiples equipos de producto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de la experiencia del candidato: del anuncio a la oferta',
                'description'      => 'Aprende a diseñar el proceso de selección como una experiencia para el candidato: desde el primer contacto hasta la oferta, eliminando fricción y construyendo marca empleadora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en talent acquisition y employee experience con experiencia rediseñando procesos de selección en empresas de tecnología, consultoría y retail. Quiero diseñar el proceso de selección de mi empresa desde la perspectiva del candidato para que sea una experiencia positiva que mejore nuestra marca empleadora.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el tipo de perfiles que más reclutamos y cuál es la competencia por ese talento?
- ¿Cuáles son las etapas actuales de nuestro proceso de selección y cuánto tiempo dura?
- ¿Hemos recibido feedback de candidatos sobre su experiencia? ¿Qué nos han dicho?
- ¿Cuáles son los principales cuellos de botella del proceso actual?

Con esas respuestas, guíame por:

BLOQUE 1: Por qué la experiencia del candidato importa
La contratación es un proceso de dos vías: el candidato también nos está evaluando:
- El impacto de una mala experiencia de candidato en la marca empleadora (el candidato rechazado que publica en Glassdoor o LinkedIn)
- Datos del mercado sobre la experiencia del candidato: cuántos candidatos comparten su experiencia negativa
- La paradoja de la selección exigente: cómo hacer un proceso riguroso sin que sea una experiencia deshumanizante
- Cómo la experiencia del candidato impacta en la tasa de aceptación de ofertas y en la calidad de los candidatos que atraemos
- Por qué los mejores candidatos tienen opciones y una mala experiencia hace que se vayan con la competencia

BLOQUE 2: Mapear la experiencia actual del candidato
Antes de rediseñar, hay que entender qué vive el candidato hoy:
- Cómo construir el journey map del candidato desde que ve el anuncio hasta que firma la oferta
- Cómo identificar los puntos de fricción: tiempos de espera largos, falta de comunicación, entrevistas mal estructuradas
- Técnicas para recoger feedback de candidatos (encuestas post-proceso, entrevistas con candidatos rechazados)
- Cómo analizar las métricas del proceso: tiempo de respuesta, tasa de abandono, tiempo total del proceso
- Los momentos de la verdad en el proceso de selección donde se gana o se pierde al candidato

BLOQUE 3: Rediseñar el proceso de selección como experiencia
Cada etapa del proceso debe aportar valor al candidato, no solo a la empresa:
- Cómo diseñar el anuncio de trabajo para que sea honesto, atractivo y filtre de forma efectiva
- Cómo diseñar el proceso de solicitud para que sea sencillo y no requiera más información de la necesaria
- Cómo diseñar la primera comunicación con el candidato (respuesta automática, llamada de screening) para que sea personal y respetuosa
- Cómo diseñar las entrevistas para que el candidato también aprenda sobre el rol y la empresa
- Cómo gestionar el rechazo de forma que el candidato quede con una imagen positiva de la empresa

BLOQUE 4: Comunicación y transparencia a lo largo del proceso
La falta de comunicación es el mayor destructor de experiencia del candidato:
- Cómo diseñar el flujo de comunicación con el candidato en cada etapa del proceso
- La regla de la actualización proactiva: el candidato siempre debe saber en qué punto está y qué sigue
- Cómo dar feedback a los candidatos rechazados de forma específica y útil (sin exposición legal)
- Cómo gestionar el tiempo entre etapas para que el candidato no sienta que ha desaparecido en el vacío
- Automatizaciones que mejoran la comunicación sin perder el toque humano

BLOQUE 5: Medir y mejorar la experiencia del candidato
Los datos son la base de la mejora continua:
- Cómo implementar encuestas de experiencia del candidato en diferentes puntos del proceso
- Métricas clave: tiempo de proceso, tasa de oferta aceptada, NPS del candidato, tasa de abandono por etapa
- Cómo analizar los datos de Glassdoor y LinkedIn para entender la percepción pública del proceso
- Cómo involucrar a los hiring managers en la mejora de la experiencia del candidato
- Cómo construir el caso de negocio para invertir en mejorar la experiencia del candidato con datos de impacto

Termina con una propuesta de rediseño del proceso de selección en tres fases (quick wins en el primer mes, mejoras estructurales en el trimestre, y mejoras sistémicas a seis meses) con responsables y métricas de éxito.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Rediseñar el proceso de selección como experiencia positiva para el candidato que mejore la marca empleadora',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Diseño de la experiencia financiera: simplificar procesos complejos para el usuario',
                'description'      => 'Aprende a diseñar experiencias financieras que sean simples para el usuario: onboarding, estados de cuenta, procesos de solicitud y comunicación de productos complejos con claridad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en diseño de experiencias financieras (financial UX) con experiencia trabajando en banca, fintech, seguros y gestión de inversiones. Quiero mejorar la experiencia de usuario de mis productos o procesos financieros para que los clientes los entiendan, los usen y confíen en ellos.

Para contextualizar, hazme estas preguntas:
- ¿Qué tipo de producto o proceso financiero quiero mejorar (onboarding, estados de cuenta, solicitud de crédito, gestión de inversiones, seguros, pagos)?
- ¿Cuáles son las quejas más frecuentes de los clientes sobre la experiencia actual?
- ¿Cuáles son las métricas de experiencia que ya medimos (NPS, abandono en el proceso, llamadas de soporte)?
- ¿Cuáles son las restricciones regulatorias o de compliance que limitan el diseño?

Con esas respuestas, guíame por:

BLOQUE 1: El reto de diseñar experiencias financieras
Lo financiero es inherentemente complejo; el diseño no puede ignorar esa complejidad, pero sí puede hacerla manejable:
- Por qué los productos financieros tienen una carga cognitiva especialmente alta para el usuario
- La tensión entre la obligación de informar (compliance) y la obligación de ser comprensible (UX)
- Los principios de diseño que son especialmente relevantes en contextos financieros: confianza, seguridad, claridad, control
- Cómo el miedo y la ansiedad afectan al comportamiento del usuario en contextos financieros y cómo el diseño puede reducirlos
- Casos de referencia de fintech que han resuelto bien la complejidad financiera

BLOQUE 2: Simplificación de información compleja
El mayor desafío del diseño financiero es comunicar con claridad:
- Cómo aplicar los principios de lenguaje claro (plain language) a los textos de productos financieros
- Cómo presentar datos numéricos y porcentajes para que el usuario entienda su impacto real (no solo el número)
- Visualización de datos financieros: cuándo un gráfico ayuda y cuándo confunde
- Cómo explicar productos complejos (seguros, inversiones, derivados) en el momento en que el usuario los necesita entender
- Cómo diseñar los términos y condiciones para que sean accesibles sin perder validez legal

BLOQUE 3: Diseño del onboarding financiero
El onboarding es el momento crítico donde el cliente decide si confía en la plataforma:
- Cómo diseñar un proceso de KYC (Know Your Customer) que cumpla la regulación sin destruir la experiencia
- La longitud del onboarding: cuántos pasos son los óptimos y cómo dividirlos en sesiones
- Cómo comunicar el estado del proceso de validación al usuario durante la espera
- Cómo diseñar el momento del primer valor: que el cliente haga su primera operación exitosa cuanto antes
- Cómo gestionar los rechazos de onboarding de forma que el cliente entienda qué hacer

BLOQUE 4: Diseño de estados de cuenta y reporting financiero
El estado de cuenta es el producto que el cliente ve más a menudo:
- Cómo diseñar un estado de cuenta que el cliente entienda sin necesitar a un asesor
- Cómo presentar cargos, comisiones e intereses con total transparencia
- Cómo diseñar las alertas y notificaciones financieras para que sean útiles y no spam
- Cómo visualizar la evolución financiera del cliente de forma que le motive a tomar mejores decisiones
- Cómo diseñar el resumen anual que los clientes realmente quieren ver

BLOQUE 5: Accesibilidad e inclusión financiera
Los servicios financieros deben ser accesibles para todos:
- Cómo diseñar para usuarios con diferentes niveles de educación financiera
- Accesibilidad técnica en plataformas financieras: lectores de pantalla, contraste, tipografía
- Diseño para usuarios mayores: tipografías, tamaños de botones, flujos más simples
- Cómo evitar el diseño de experiencias que perjudican a los usuarios más vulnerables
- El impacto del diseño inclusivo en la base de clientes y en la reputación de la marca

Termina con un audit de experiencia simplificado de 20 preguntas para evaluar la calidad de la experiencia financiera de un producto o proceso, con criterios de puntuación y recomendaciones de mejora por categoría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar experiencias financieras claras y accesibles que generen confianza y simplifiquen procesos complejos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal UX: simplificar los procesos jurídicos para el cliente',
                'description'      => 'Aprende a diseñar experiencias legales centradas en el cliente: contratos comprensibles, procesos de onboarding legal claros y cómo comunicar información jurídica sin perder rigor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en legal design y legal UX con experiencia ayudando a bufetes, departamentos jurídicos y legaltech a diseñar servicios legales más accesibles y comprensibles para sus clientes. Quiero mejorar la experiencia de mis clientes en los procesos jurídicos que gestionamos y que perciban valor y claridad en cada interacción.

Para contextualizar, hazme estas preguntas:
- ¿Qué tipo de servicio legal ofreces o qué procesos jurídicos quieres mejorar (contratos, onboarding de cliente, litigación, compliance, asesoría)?
- ¿Cuáles son las quejas más comunes de los clientes sobre la experiencia actual con los servicios jurídicos?
- ¿Cuál es el perfil del cliente final (empresas, consumidores, personas sin formación legal)?
- ¿Cuáles son las restricciones de confidencialidad, deontología profesional o regulatorias que limitan el diseño?

Con esas respuestas, guíame por:

BLOQUE 1: El problema de los servicios jurídicos para el cliente
Los clientes no compran asesoría legal porque les encante; lo hacen porque la necesitan y a menudo la temen:
- Por qué los clientes perciben los servicios jurídicos como opacos, lentos y caros incluso cuando no lo son
- La asimetría de información entre el abogado y el cliente: cómo diseñar para equilibrarla
- Cómo la complejidad del lenguaje jurídico excluye al cliente de las decisiones que le afectan
- El impacto de la experiencia del cliente en la retención, los referidos y la reputación del despacho
- Los principios del legal design: claridad, accesibilidad, centrado en el cliente, sin perder rigor jurídico

BLOQUE 2: Contratos y documentos jurídicos accesibles
El contrato que nadie lee no protege a nadie:
- Cómo aplicar el lenguaje claro (plain language) a los contratos sin perder validez jurídica
- Diseño visual de contratos: cómo el uso de jerarquía tipográfica, iconos y estructura mejora la comprensión
- Cómo resumir un contrato complejo en una "portada de contrato" que el cliente entienda en 2 minutos
- Contratos modularizados: cómo separar las cláusulas estándar de las específicas para facilitar la revisión
- Cuándo usar un contrato visual (con ilustraciones) y cuándo no tiene sentido

BLOQUE 3: Diseño del onboarding legal del cliente
El primer contacto jurídico debe generar confianza, no ansiedad:
- Cómo diseñar el proceso de intake del cliente (recogida de información inicial) para que sea sencillo y rápido
- Cómo comunicar al cliente qué va a pasar en el proceso jurídico, cuánto tiempo llevará y qué necesitamos de él
- Cómo diseñar el scope of work o el encargo profesional de forma comprensible
- Cómo gestionar las expectativas del cliente sobre tiempos, costes y resultados posibles desde el inicio
- La bienvenida al cliente: cómo el primer correo o reunión puede definir toda la relación

BLOQUE 4: Comunicación jurídica durante el proceso
El cliente que no entiende lo que está pasando se pone nervioso y llama constantemente:
- Cómo diseñar las actualizaciones periódicas al cliente para que sean informativas sin ser abrumadoras
- Cómo comunicar noticias difíciles (una sentencia desfavorable, un retraso, un riesgo nuevo) de forma clara y empática
- Cómo diseñar los informes jurídicos para que el cliente entienda las conclusiones antes de leer el análisis
- La comunicación proactiva: cómo anticiparse a las preguntas del cliente con actualizaciones regulares
- Cómo usar tecnología (portales de cliente, mensajería, actualización de estado) para mejorar la comunicación

BLOQUE 5: Métricas de experiencia del cliente jurídico
El servicio jurídico también puede (y debe) medirse:
- Cómo implementar encuestas de satisfacción del cliente en despachos y departamentos jurídicos
- Métricas de experiencia jurídica: tiempo de respuesta, claridad percibida de la comunicación, satisfacción con el resultado, recomendación
- Cómo usar el feedback del cliente para mejorar los procesos internos del equipo jurídico
- Cómo construir el caso de inversión en legal design usando datos de satisfacción del cliente y retención
- Cómo diseñar un programa de mejora continua de la experiencia del cliente en servicios jurídicos

Termina con un checklist de 15 puntos para evaluar la experiencia del cliente en un proceso jurídico específico, con criterios de calidad y recomendaciones de mejora para cada punto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar servicios jurídicos más claros y accesibles aplicando legal design y UX para mejorar la experiencia del cliente',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS experience design: diseñar el proceso de éxito del cliente como producto',
                'description'      => 'Aprende a diseñar el proceso de Customer Success como una experiencia estructurada: onboarding, touchpoints, playbooks y cómo cada interacción construye valor percibido y retención.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia diseñando el proceso de CS como una experiencia deliberada y estructurada en empresas de SaaS B2B. Quiero que el proceso de CS de mi empresa no sea reactivo ni ad hoc, sino una experiencia diseñada que guíe al cliente hacia el éxito de forma consistente.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el modelo de CS actual (high touch, tech touch, pooled) y cuántos clientes gestiona cada CSM?
- ¿Cuál es el proceso de onboarding actual y cuáles son sus puntos débiles?
- ¿Cuáles son los clientes que más éxito tienen con el producto y qué tienen en común?
- ¿Cuáles son las razones más frecuentes de churn?

Con esas respuestas, guíame por:

BLOQUE 1: El proceso de CS como experiencia diseñada
La mayoría de los equipos de CS improvisan en lugar de ejecutar un proceso deliberado:
- La diferencia entre un CS reactivo (responde a problemas) y un CS diseñado (guía al cliente hacia resultados)
- Cómo mapear el customer success journey: las etapas del cliente desde el onboarding hasta la renovación y la expansión
- Qué emociones experimenta el cliente en cada etapa y cómo el diseño del proceso puede gestionarlas
- El concepto de "success milestones": los hitos que el cliente debe alcanzar para que la renovación sea una decisión fácil
- Por qué el proceso de CS debe ser tan deliberado como el proceso de ventas

BLOQUE 2: Diseño del onboarding de CS
El onboarding determina si el cliente va a tener éxito o no:
- La estructura del onboarding exitoso: definición de éxito del cliente, plan de implementación, hitos, cadencia de revisión
- Cómo definir el "time-to-value" objetivo y diseñar el onboarding para alcanzarlo
- Cómo co-crear el success plan con el cliente para que haya compromiso, no solo expectativas del CSM
- Cómo diseñar el kickoff del cliente para que establezca la relación correcta desde el primer día
- Onboarding tech-touch: cómo diseñar secuencias automáticas que guíen al cliente sin CSM en cada paso

BLOQUE 3: Cadencia de touchpoints y playbooks
El CS necesita un ritmo de contacto deliberado, no reactivo:
- Cómo diseñar la cadencia de QBRs (revisiones de negocio), check-ins y revisiones de salud según el segmento de cliente
- Cómo diseñar una QBR que el cliente quiera asistir porque le aporta valor real
- Playbooks de CS: qué son, cómo estructurarlos y para qué situaciones crearlos (riesgo de churn, expansión, producto nuevo)
- El playbook de rescate: cómo diseñar la intervención cuando el cliente está en riesgo de abandono
- Cómo automatizar los playbooks de CS sin perder el toque humano en los momentos que más importan

BLOQUE 4: Diseñar para la expansión desde el onboarding
La expansión no es una venta; es el resultado natural de un buen proceso de CS:
- Cómo diseñar los touchpoints del ciclo de vida del cliente para identificar oportunidades de expansión naturales
- Cómo hacer que el cliente experimente el valor adicional antes de proponerle la expansión
- Cómo integrar las señales de expansión en el health score del cliente
- El modelo de land and expand: cómo el onboarding inicial prepara el terreno para la expansión futura
- Cómo entrenar al equipo de CS para identificar y trabajar oportunidades de expansión sin convertirse en vendedores

BLOQUE 5: Medir la calidad de la experiencia de CS
El proceso de CS diseñado necesita datos para mejorarse:
- Cómo medir la calidad de cada touchpoint del proceso de CS (¿el cliente percibió valor en cada interacción?)
- Customer Effort Score (CES) aplicado al proceso de CS: ¿cuánto esfuerzo le cuesta al cliente trabajar con nuestro equipo?
- Cómo medir si el onboarding está funcionando: adoption en las primeras 30, 60 y 90 días
- El health score como predictor de renovación: cómo construirlo y cómo usarlo en el proceso de CS
- Cómo usar los datos de experiencia del cliente para mejorar los playbooks y la cadencia de touchpoints

Termina con un blueprint del proceso de CS para el primer año de vida del cliente, con las etapas, los touchpoints clave, los success milestones y las métricas de éxito en cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar el proceso de Customer Success como una experiencia estructurada que guíe al cliente hacia resultados',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Experience design del negocio freelance: la experiencia del cliente que fideliza',
                'description'      => 'Aprende a diseñar la experiencia completa de tu cliente como freelance: desde el primer contacto hasta la entrega final, creando procesos que fidelizan y generan referidos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia ayudando a trabajadores independientes a profesionalizar su relación con los clientes y construir procesos que generen fidelización y referidos. Quiero diseñar la experiencia de cliente de mi negocio freelance de forma deliberada para que cada cliente quiera volver y me recomiende.

Para contextualizar bien, hazme estas preguntas:
- ¿Cuál es mi especialidad como freelance y cuál es el perfil de mis clientes típicos?
- ¿Cuánto dura un proyecto promedio y cuál es el ticket promedio?
- ¿Qué porcentaje de mis ingresos viene de clientes repetidos vs nuevos?
- ¿Qué feedback han dado mis clientes sobre trabajar conmigo (lo que más valoran, lo que mejorarían)?

Con esas respuestas, guíame por:

BLOQUE 1: La experiencia del cliente freelance como ventaja competitiva
Muchos freelancers compiten por precio; los mejores compiten por experiencia:
- Por qué la calidad técnica del trabajo ya no es suficiente para diferenciarse en mercados saturados
- La diferencia entre un freelance que entrega un proyecto y un freelance que crea una experiencia de cliente
- Cómo la experiencia del cliente impacta en los referidos: el cliente que tiene una experiencia memorable habla de ti
- Qué elementos de la experiencia del cliente son más recordados (según la peak-end rule)
- Cómo diseñar tu proceso de cliente para que sea un activo diferencial del negocio

BLOQUE 2: Diseño del primer contacto y la propuesta
La primera impresión define las expectativas para todo lo que viene:
- Cómo diseñar el proceso de descubrimiento con el cliente potencial (primera llamada, briefing, reunión)
- La propuesta como experiencia: cómo una propuesta bien diseñada vende antes de que el cliente lea el precio
- Cómo estructurar la propuesta para que el cliente entienda el valor que va a recibir, no solo la lista de tareas
- Cómo gestionar el periodo entre el envío de la propuesta y la respuesta del cliente
- Cómo presentar el precio de forma que no sea el único elemento que el cliente recuerda

BLOQUE 3: Diseño del onboarding del cliente
El inicio del proyecto define toda la relación:
- Cómo diseñar un proceso de kickoff que establezca expectativas claras y genere confianza desde el primer día
- Qué información necesito del cliente para empezar y cómo pedirla sin que parezca un formulario burocrático
- Cómo diseñar la bienvenida al cliente: la carpeta de proyecto, el welcome pack, la primera comunicación
- Cómo acordar el proceso de trabajo, las revisiones y las entregas de forma que proteja tanto al cliente como al freelance
- La gestión de expectativas desde el inicio: cómo evitar los malentendidos que generan conflictos al final

BLOQUE 4: Diseño del proceso de trabajo y comunicación
La comunicación durante el proyecto es donde más clientes se pierden:
- Cómo diseñar la cadencia de actualizaciones al cliente para que siempre sepa en qué punto está el proyecto
- Cómo estructurar las revisiones de trabajo para que sean productivas y no ciclos interminables de cambios
- Cómo gestionar los cambios de scope de forma que el cliente lo entienda y lo valore, no lo resista
- Cómo comunicar problemas o retrasos sin dañar la confianza del cliente
- Herramientas y canales de comunicación: cuándo usar email, cuándo una videollamada, cuándo un gestor de proyectos

BLOQUE 5: Diseño del cierre y la postventa
El final del proyecto es el momento más recordado y el que genera (o no) el referido:
- Cómo diseñar la entrega final para que sea un momento memorable: presentación del trabajo, documentación, formación
- Cómo solicitar feedback del cliente de forma que sea útil para mejorar y no solo un trámite
- Cómo pedir el testimonio o la recomendación en el momento adecuado y de la manera correcta
- Cómo mantener la relación con el cliente después del proyecto para que vuelva cuando te necesite
- Cómo diseñar un programa de seguimiento de exclientes para reactivar la relación

Termina con un mapa de experiencia del cliente freelance con los momentos clave del proceso, las emociones del cliente en cada punto, las acciones del freelance para maximizar la experiencia positiva y los materiales necesarios para cada etapa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la experiencia completa del cliente freelance para generar fidelización y referidos',
                'vote_score'       => 42,
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
