<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills301Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'B2C customer experience: acompañar al cliente en todo el journey',
                'description'      => 'Diseña y optimiza la experiencia del cliente en negocios B2C a lo largo de cada touchpoint, desde el descubrimiento hasta la fidelización, usando IA para identificar fricciones y oportunidades de mejora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Experience B2C con más de 10 años diseñando journeys de consumidor para marcas de gran consumo, retail y servicios digitales masivos.

Voy a darte información sobre mi negocio B2C y necesito que me ayudes a analizar y optimizar la experiencia completa del cliente.

**Mi negocio:**
[Describe tu sector, producto o servicio, y el perfil general de tu cliente]

**El reto específico:**
[¿Cuál es el punto del journey donde más clientes se pierden o más quejas recibes?]

---

Con esa información, realiza un análisis estructurado en los siguientes bloques:

**1. Mapa del journey B2C completo**
Identifica las fases clave del ciclo de vida del consumidor en mi contexto:
- Descubrimiento y conciencia de marca
- Consideración y comparación
- Primera compra o conversión
- Experiencia de uso o consumo del producto
- Postventa y soporte
- Fidelización y recompra
- Prescripción y boca a boca

Para cada fase, señala cuáles son las expectativas típicas del consumidor masivo y cuáles son los momentos de verdad donde la marca se juega la relación.

**2. Puntos de fricción más comunes en B2C**
Analiza los errores estructurales que deterioran la experiencia en negocios de gran consumo:
- Desconexión entre promesa de marketing y experiencia real
- Procesos de devolución o reclamación complicados
- Falta de personalización en comunicaciones masivas
- Tiempos de espera excesivos en atención al cliente
- Inconsistencia entre canales (tienda física, web, app, redes)
- Información de producto insuficiente o confusa

Para cada fricción, proporciona un indicador que la detecte y una acción correctiva concreta.

**3. Métricas de experiencia B2C que debes monitorizar**
Explica cómo calcular e interpretar:
- NPS (Net Promoter Score) en contexto B2C masivo
- CSAT por touchpoint
- CES (Customer Effort Score) para medir esfuerzo percibido
- Churn rate y señales tempranas de abandono
- Primera resolución en contacto (FCR) para soporte
- Tiempo medio de resolución de incidencias

Indica qué herramientas se usan habitualmente para recoger estas métricas a escala.

**4. Estrategia de personalización masiva**
El reto B2C es personalizar para millones de clientes sin un equipo de ventas detrás. Explica cómo usar:
- Segmentación por comportamiento de compra
- Automatización de comunicaciones basadas en eventos del journey
- Personalización de contenido en web y app sin aumentar el coste operativo
- Programas de fidelización que realmente cambian el comportamiento

**5. Plan de mejora priorizado**
Basándote en el reto que te he descrito, propón un plan de 90 días con:
- Semana 1-2: diagnóstico rápido con datos existentes
- Mes 1: quick wins que se pueden implementar sin sistemas nuevos
- Mes 2-3: iniciativas de mediano plazo que requieren más recursos

Cierra con los 3 KPIs que usarías para medir el éxito del programa de mejora de experiencia en los primeros 6 meses.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Optimización del journey del consumidor B2C y reducción de fricciones en cada touchpoint',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Consumer app development: construir apps que millones de personas realmente usan',
                'description'      => 'Guía técnica y de producto para desarrollar aplicaciones de consumo masivo con alta retención, rendimiento a escala y experiencia de usuario que compite con las grandes plataformas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior especializado en aplicaciones de consumo masivo con experiencia en plataformas que superan los 10 millones de usuarios activos mensuales.

Estoy desarrollando una consumer app y necesito orientación técnica y de producto para construirla de forma que realmente escale y retenga usuarios.

**Mi app:**
[Describe qué hace tu app, a qué tipo de usuario va dirigida y en qué plataformas (iOS, Android, web)]

**Mi situación actual:**
[¿Estás en fase de MVP, crecimiento temprano o ya tienes usuarios pero tienes problemas concretos?]

---

Analiza mi situación y dame orientación en estos bloques:

**1. Los principios que diferencian una consumer app de una app empresarial**
Explica las diferencias fundamentales en:
- Expectativas de rendimiento: un usuario B2C abandona si la app tarda más de 3 segundos
- Tolerancia al error: en B2C, un bug visible destruye la reputación en las reseñas
- Onboarding: tienes 60 segundos para demostrar valor antes de que el usuario cierre la app
- Retención: el D1, D7 y D30 como métricas clave que determinan si el modelo funciona
- Viralidad incorporada al producto vs. marketing pagado

**2. Arquitectura técnica para escalar a millones de usuarios**
Proporciona orientación sobre:
- Backend: qué patrones arquitectónicos soportan picos de tráfico masivos (event-driven, microservicios vs. monolito modular, serverless)
- Base de datos: cuándo usar caché agresiva, CDN para activos estáticos, y cómo manejar lecturas pesadas
- Push notifications: cómo diseñar una estrategia de notificaciones que no convierta a los usuarios en ex-usuarios
- Offline-first: qué funcionalidades deben funcionar sin conexión para mantener la experiencia
- Seguridad a escala: autenticación masiva, protección contra abuso y fraude

**3. Performance como característica de producto**
Desarrolla los aspectos técnicos del rendimiento que más impactan en la retención:
- Tiempo de carga inicial y estrategias de lazy loading
- Animaciones a 60fps y por qué importan psicológicamente
- Reducción del tamaño del bundle y carga progresiva
- Optimización de imágenes y vídeos para redes móviles lentas
- Instrumentación con herramientas de monitorización de rendimiento real de usuario (RUM)

**4. Ciclo de iteración con usuarios reales**
Explica cómo construir el sistema que permite iterar rápido sin romper la app:
- Feature flags para lanzamientos graduales
- A/B testing en mobile: qué herramientas usar y qué errores evitar
- Análisis del comportamiento en app (funnel, heatmaps, grabaciones de sesión)
- Sistema de feedback dentro de la app que los usuarios realmente usen
- Cómo priorizar el backlog cuando tienes cientos de solicitudes de usuarios

**5. Plan concreto para mi situación**
Basándote en lo que me has descrito, dame un plan de acción con las 5 decisiones técnicas más importantes que debo tomar ahora mismo y el razonamiento detrás de cada una.

Sé específico con tecnologías, herramientas y patrones. No me des teoría genérica: dame lo que harías tú si fueras el CTO de mi app.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Guía técnica para desarrollar aplicaciones de consumo masivo con alta retención y rendimiento a escala',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'B2C UX: diseñar para usuarios masivos con distintos niveles de alfabetización digital',
                'description'      => 'Metodología de diseño UX adaptada a productos de consumo masivo donde los usuarios tienen perfiles heterogéneos, poca tolerancia al error y expectativas formadas por las grandes plataformas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX senior especializado en productos de consumo masivo, con experiencia diseñando para audiencias de millones de usuarios con perfiles radicalmente distintos en términos de edad, educación y familiaridad tecnológica.

Necesito orientación para diseñar o rediseñar una experiencia B2C que funcione para la mayoría de mis usuarios, no solo para los tech-savvy.

**Mi producto:**
[Describe qué hace tu producto, si es una app, web o experiencia omnicanal, y quiénes son tus usuarios]

**Mi reto de diseño:**
[¿Qué flujo o sección te preocupa más? ¿Dónde ves más abandono o más errores de usuario?]

---

**1. El reto único del diseño B2C masivo**
Explica las diferencias fundamentales entre diseñar para usuarios empresariales (B2B) y para consumidores masivos (B2C):
- En B2B el usuario está motivado por su trabajo; en B2C tiene que querer usarlo
- En B2B tienes un manual de formación; en B2C la UI es el único manual
- La heterogeneidad del usuario B2C: desde nativos digitales hasta personas mayores con smartphone
- El coste de la confusión: un usuario B2C que no entiende algo simplemente se va
- Las expectativas formadas por apps como Instagram, WhatsApp o Amazon: todo debe sentirse igual de fácil

**2. Principios de diseño para alfabetización digital mixta**
Proporciona directrices concretas para cada dimensión:

*Lenguaje y microcopy:*
- Vocabulario simple: evitar jerga técnica, financiera o legal sin explicación
- CTAs que digan exactamente lo que va a pasar ("Confirmar pedido" vs. "Continuar")
- Mensajes de error que expliquen qué pasó y cómo solucionarlo, nunca solo un código de error
- Textos de ayuda contextual que aparecen cuando se necesitan, no siempre visibles

*Jerarquía visual y carga cognitiva:*
- Una decisión por pantalla: no presentar tres opciones importantes a la vez
- Progresión progresiva: mostrar solo lo que el usuario necesita en cada momento
- Contraste suficiente para usuarios con visión reducida (WCAG AA como mínimo)
- Tamaño de targets táctiles: nunca menos de 44x44px en mobile

*Onboarding inclusivo:*
- Diseño del primer minuto: qué ve el usuario y qué acción puede tomar inmediatamente
- Onboarding contextual vs. tutoriales lineales: cuál funciona mejor y cuándo
- Reducción del tiempo hasta el primer valor percibido

**3. Testing con usuarios reales heterogéneos**
Describe cómo realizar investigación de usuario que capture la diversidad B2C:
- Cómo reclutar usuarios representativos (no solo los más vocales)
- Tests de usabilidad no moderados con usuarios mayores de 55 años
- Qué revelan los mapas de calor y grabaciones de sesión en productos B2C
- Cómo usar los datos de soporte al cliente como insumo de diseño

**4. Diseño para el peor escenario**
Explica qué significa diseñar para las condiciones reales de uso B2C:
- Usuarios en redes lentas o con datos limitados
- Interrupciones frecuentes: el usuario B2C no está sentado en una oficina
- Usuarios con una sola mano porque van en el metro
- Pantallas pequeñas, sucias o con mucho sol

**5. Revisión de mi flujo**
Basándote en el reto que te he descrito, dame un análisis crítico con los 5 problemas de usabilidad más probables y una propuesta de solución concreta para cada uno.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño UX inclusivo para productos de consumo masivo con usuarios de perfiles heterogéneos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Retail y ventas B2C: técnicas que funcionan cuando el cliente está en la tienda',
                'description'      => 'Estrategias y técnicas de venta presencial y omnicanal para retail B2C: cómo maximizar la conversión cuando el cliente está físicamente en el punto de venta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas retail con 15 años de experiencia en puntos de venta de gran consumo, moda, electrónica y hogar. Has entrenado a cientos de equipos de venta en tienda y conoces la psicología del consumidor en el momento de compra.

Necesito mejorar las ventas en mi punto de venta físico y voy a contarte mi situación.

**Mi negocio:**
[Describe qué vendes, el tipo de tienda, el ticket medio y el perfil de tu cliente habitual]

**Mi reto:**
[¿Cuál es el problema principal? ¿Poco tráfico, baja conversión, ticket bajo, mucho abandono en caja?]

---

**1. La psicología del consumidor en el punto de venta**
Explica los principios psicológicos que gobiernan las decisiones de compra en tienda:
- El efecto del entorno: temperatura, música, iluminación y olor como palancas de venta
- Anclaje de precio: cómo la presentación de productos influye en la percepción de valor
- La paradoja de la elección: por qué menos opciones a veces venden más
- El principio de escasez y urgencia: cómo aplicarlo sin manipular
- Social proof en tienda: reseñas físicas, bestsellers señalizados, comportamiento de otros clientes

**2. El protocolo de atención al cliente que convierte**
Detalla una secuencia de atención de venta B2C en tienda:
- Los primeros 30 segundos: cómo saludar sin presionar y crear apertura
- Técnicas de diagnóstico de necesidades: las preguntas que abren la conversación
- Presentación de producto adaptada al perfil del cliente
- Manejo de objeciones más frecuentes (precio, "voy a pensarlo", "lo miro por internet más barato")
- Cierre natural: cómo llevar al cliente a la decisión sin que sienta presión
- Upselling y cross-selling: cuándo proponer y cómo hacerlo sin parecer agresivo

**3. Organización del espacio y visual merchandising**
Proporciona criterios para optimizar el layout de la tienda:
- Zonas calientes y frías: cómo distribuir el producto para maximizar exposición
- La regla de los tres primeros metros: qué comunicar nada más entrar
- Altura de ojos como posición premium: qué productos colocar ahí
- Señalización de precio y promociones que realmente leen los clientes
- El recorrido natural del cliente: cómo diseñar el flujo de circulación

**4. Gestión del equipo de venta en tienda**
Explica cómo construir un equipo que vende:
- Métricas individuales de vendedor: UPT (unidades por transacción), ticket medio, conversión por turno
- Briefings diarios de 5 minutos que activan al equipo antes de abrir
- Sistemas de incentivo que funcionan sin crear competencia destructiva
- Cómo dar feedback de venta en tiempo real sin desmotivar
- Formación continua con role-playing de los escenarios más frecuentes

**5. Integración con el canal online**
El cliente B2C pasa del online al offline y viceversa. Explica cómo:
- Usar el tráfico online para generar visitas a tienda (click & collect, citas previas)
- Armar al vendedor con información del historial digital del cliente
- Gestionar las comparativas de precio con Amazon o competidores online en el momento
- Convertir la visita a tienda en una relación de largo plazo (datos de contacto, programa de fidelización)

**6. Plan de mejora para mi situación**
Analiza el reto que te he descrito y propón un plan de acción de 30 días con acciones concretas, ordenadas por impacto esperado en la conversión.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Optimización de ventas en punto de venta retail B2C: conversión, ticket medio y experiencia del cliente',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Consumer product management: las diferencias críticas con el producto B2B',
                'description'      => 'Marco de trabajo para product managers que gestionan productos de consumo masivo, con énfasis en las diferencias de métricas, decisiones y cultura respecto al producto empresarial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en empresas de consumo como Spotify, Duolingo o una plataforma de comercio electrónico de gran escala. Has trabajado también en producto B2B y conoces las diferencias fundamentales entre ambos mundos.

Estoy haciendo la transición de producto B2B a B2C (o estoy gestionando un producto de consumo y tengo dudas sobre cómo debe funcionar diferente). Ayúdame a entender el marco completo.

**Mi producto:**
[Describe brevemente qué hace tu producto, a qué usuarios va dirigido y en qué fase está]

**Mi duda principal:**
[¿Qué aspecto de la gestión de producto B2C te resulta más diferente o confuso respecto a lo que conoces?]

---

**1. Las diferencias estructurales entre B2C y B2B que cambian todo**

Desarrolla cada diferencia con ejemplos concretos:

*Ciclo de ventas y adquisición:*
- En B2B hay un ciclo de ventas con humanos; en B2C el producto tiene que venderse solo
- CAC en B2C: el coste de adquirir un usuario masivo y por qué el payback period es diferente
- Virality coefficient: cómo un producto B2C puede crecer de forma no lineal

*Retención y engagement:*
- En B2B el usuario usa el producto porque su empresa paga por ello; en B2C porque quiere
- La importancia del D1/D7/D30 retention como señal de product-market fit
- Cómo medir el engagement real vs. vanity metrics (usuarios activos vs. usuarios que crean valor)

*Monetización:*
- Modelos freemium, suscripción de consumo, compras in-app, publicidad
- Por qué el ARPU (Average Revenue Per User) en B2C es típicamente más bajo que en B2B
- Cómo compensar el ARPU bajo con volumen masivo de usuarios

**2. Las métricas que gobiernan el producto B2C**
Para cada métrica, explica cómo calcularla, qué significa y qué acciones tomar si está mal:
- DAU/MAU ratio como indicador de engagement
- Retention curves: cómo leerlas e interpretar el punto de inflexión
- Churn rate y cómo diferenciarlo del abandono temporal
- LTV en un producto B2C con millones de usuarios pequeños
- NPS en consumo: limitaciones y alternativas más accionables
- Feature adoption rate: cómo saber si lo que lanzaste lo usa alguien

**3. Cómo priorizar el roadmap en B2C**
El product manager B2C tiene información de millones de usuarios pero no puede hablar con todos. Explica:
- Cómo usar los datos cuantitativos para identificar los problemas reales
- Cuándo hacer investigación cualitativa y cómo encontrar usuarios representativos
- Frameworks de priorización adaptados al contexto B2C (RICE, ICE, opportunity sizing)
- Cómo gestionar el ruido: usuarios muy vocales que no representan a la mayoría
- La tensión entre monetización y experiencia de usuario en B2C

**4. Cultura de producto B2C**
Explica cómo funciona internamente un equipo de producto de consumo:
- Velocidad de iteración: por qué en B2C se lanza más rápido y con menos proceso
- A/B testing como primera fuente de verdad en decisiones de producto
- La relación con marketing: mucho más integrada que en B2B
- Cómo se relaciona el PM con el CEO en una empresa de consumo

**5. Tu plan de acción**
Basándote en lo que me has descrito, dame las 5 cosas más importantes que debo cambiar en mi forma de gestionar el producto para tener éxito en B2C.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Marco de trabajo para product managers de consumo masivo: métricas, priorización y cultura B2C',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Customer-centric culture: construir una organización que pone al consumidor primero',
                'description'      => 'Estrategia de RRHH y cultura organizacional para construir una empresa genuinamente centrada en el cliente, desde la selección hasta los sistemas de incentivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas con experiencia en empresas de consumo masivo reconocidas por su cultura customer-centric, como Zappos, Amazon o Mercadona. Has liderado transformaciones culturales en organizaciones de 200 a 5.000 personas.

Necesito ayuda para construir o reforzar una cultura genuinamente centrada en el consumidor en mi organización.

**Mi organización:**
[Describe el sector, tamaño de la empresa, y cuál es tu rol actual]

**Mi diagnóstico:**
[¿Cuál es el síntoma principal de que la cultura no está centrada en el cliente? ¿Qué comportamientos observas que lo evidencian?]

---

**1. Cómo se ve una cultura customer-centric en la práctica**
No en los valores escritos en la pared, sino en los comportamientos del día a día. Describe:
- Cómo se toman las decisiones: ¿se pregunta "qué impacto tiene esto en el cliente" antes de aprobar cualquier proyecto?
- Cómo se resuelven los conflictos entre eficiencia interna y experiencia del cliente
- Cómo los líderes modelan el comportamiento (el famoso "walking the talk")
- Cómo se celebra y reconoce públicamente el buen servicio al cliente
- Qué pasa cuando un empleado rompe un proceso para hacer lo correcto para un cliente

**2. Selección de personas orientadas al cliente**
Explica cómo diseñar el proceso de selección para filtrar por mentalidad customer-centric:
- Las competencias que predicen una orientación genuina al cliente vs. las que son performativas
- Preguntas de entrevista conductual específicas (con ejemplos de respuestas que buscarías)
- Simulaciones y casos prácticos en el proceso de selección
- Las red flags en una entrevista que indican que una persona no encajará en una cultura de servicio
- Cómo evaluar el culture-fit sin caer en el culture-clone (diversidad de estilos, mismos valores)

**3. Onboarding y formación en mentalidad de cliente**
Describe cómo integrar la orientación al cliente desde el primer día:
- Qué experiencias inmersivas se usan en empresas customer-centric en el onboarding
- Cómo hacer que todos los empleados, incluso los que no tienen contacto directo con clientes, entiendan su impacto
- Programas de "un día en el call center" o "un día en tienda" para funciones de back office
- Métricas de cliente que cada equipo debería conocer y seguir, no solo el equipo de CS

**4. Sistemas de incentivos alineados con la experiencia del cliente**
El dinero habla. Explica cómo diseñar:
- Componentes variables ligados a métricas de cliente (NPS, CSAT, churn) vs. solo métricas financieras
- Cómo evitar el gaming de las métricas de satisfacción cuando están ligadas a bonus
- Reconocimiento no económico que refuerza el comportamiento centrado en el cliente
- Cómo equilibrar objetivos de eficiencia (coste por contacto, resoluciones por hora) con calidad de experiencia

**5. Medición de la cultura y plan de mejora**
Describe cómo saber si la cultura está evolucionando en la dirección correcta:
- Encuestas de cultura y clima: qué preguntas detectan la orientación real al cliente
- Auditoría de decisiones: revisar las últimas 10 decisiones importantes y preguntar si el cliente estuvo en la sala
- Mystery shopping interno y externo como termómetro
- Cómo comunicar los resultados a toda la organización para mantener el impulso

**6. Plan para mi organización**
Basándote en el diagnóstico que te he dado, propón un plan de 6 meses con las iniciativas de mayor impacto, ordenadas por facilidad de implementación.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Transformación cultural hacia la orientación al cliente: selección, formación e incentivos en organizaciones B2C',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Consumer business financials: las métricas que importan en negocios B2C masivos',
                'description'      => 'Análisis financiero específico para negocios de consumo masivo: las métricas únicas del B2C, cómo leer el unit economics y qué señales financieras predicen el éxito o el fracaso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en empresas de consumo masivo, incluyendo tanto startups de consumo en fase de crecimiento como empresas maduras de gran consumo. Conoces en profundidad las diferencias entre las finanzas B2C y B2B.

Necesito entender las métricas financieras específicas de un negocio de consumo y cómo leer la salud financiera de mi empresa.

**Mi negocio:**
[Describe tu modelo de negocio B2C: qué vendes, cómo monetizas, en qué fase estás (startup, crecimiento, madurez)]

**Mi duda financiera:**
[¿Cuál es la métrica o el aspecto financiero que más te cuesta interpretar o en el que tienes menos visibilidad?]

---

**1. Las métricas financieras únicas del modelo B2C**
Explica cada métrica con su fórmula, cómo interpretarla y qué acciones tomar según el resultado:

*Métricas de adquisición y coste:*
- CAC (Customer Acquisition Cost): cómo calcularlo correctamente incluyendo todos los costes de marketing y ventas
- Payback period: cuánto tiempo tardas en recuperar lo que costó adquirir al cliente
- Blended CAC vs. organic CAC: por qué es importante separar ambos

*Métricas de valor del cliente:*
- LTV (Lifetime Value): diferentes métodos de cálculo según el modelo de negocio (transaccional, suscripción, freemium)
- Ratio LTV/CAC: el indicador más importante de la salud de un negocio de consumo
- ARPU (Average Revenue Per User) y cómo segmentarlo por cohorte

*Métricas de retención con impacto financiero:*
- Churn rate mensual vs. anual: cómo convertirlo y qué implica para el crecimiento
- Revenue churn vs. customer churn: cuál es más importante y cuándo
- Net Revenue Retention: si aplica a tu modelo y cómo calcularlo

**2. Unit economics: la base de la sostenibilidad B2C**
Explica cómo construir el análisis de unit economics de un negocio de consumo:
- La unidad correcta de análisis (¿por cliente, por transacción, por cohorte?)
- Cómo proyectar los ingresos de una cohorte de clientes a 12, 24 y 36 meses
- Cuándo un unit economics negativo es aceptable y cuándo es una señal de alarma
- El impacto de la mejora del churn en el LTV: por qué pequeñas mejoras tienen efecto exponencial

**3. P&L de un negocio B2C: dónde están las diferencias**
Describe las particularidades del estado de resultados en negocios de consumo:
- El peso del gasto de marketing como porcentaje de ingresos: qué es normal por sector
- Gross margin en negocios de producto físico vs. digital vs. marketplace
- Estructura de costes de soporte al cliente a escala
- Cómo el crecimiento rápido puede esconder problemas en el P&L

**4. Proyecciones financieras realistas para B2C**
Explica cómo construir proyecciones financieras creíbles:
- El modelo de cohortes como base de proyección de ingresos
- Supuestos de crecimiento que los inversores y los bancos cuestionarán
- Escenarios: base, optimista y pesimista en un contexto de consumo masivo
- Los errores más comunes en proyecciones B2C (subestimar CAC, sobreestimar retención)

**5. Análisis de mi situación**
Basándote en lo que me has descrito, identifica los 3 principales indicadores que deberías monitorizar semanalmente y propón un dashboard financiero mínimo viable para un negocio B2C en mi fase.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Análisis financiero de negocios B2C: unit economics, LTV/CAC y métricas de retención con impacto en el P&L',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Consumer law: protección del consumidor, garantías y regulación en ventas al público',
                'description'      => 'Marco legal de la venta al consumidor final: derechos de garantía, desistimiento, publicidad engañosa, protección de datos y regulación sectorial en negocios B2C.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho del consumidor y comercio electrónico con experiencia asesorando a empresas de retail, marketplaces y negocios de suscripción B2C en España y la Unión Europea.

Necesito entender el marco legal que regula mi relación con los consumidores y asegurarme de que mi negocio cumple con la normativa vigente.

**Mi negocio:**
[Describe qué vendes, si es online, físico o mixto, y en qué países operas]

**Mi duda legal:**
[¿Cuál es el aspecto legal del que más dudas tienes o donde crees que tu negocio podría tener vulnerabilidades?]

---

**1. Los derechos del consumidor que todo negocio B2C debe conocer**

Explica en detalle y de forma práctica:

*Garantías legales:*
- Plazos de garantía legal en la UE: 2 años para productos físicos y qué significa para tu operativa
- Diferencia entre garantía legal y garantía comercial: qué puedes y no puedes cobrar por cada una
- Obligaciones del vendedor cuando un producto falla dentro del plazo de garantía
- Cómo gestionar las reclamaciones de garantía sin que se conviertan en un problema operativo

*Derecho de desistimiento:*
- Los 14 días hábiles de desistimiento en compras online: qué cubre y qué excepciones existen
- Qué productos y servicios están excluidos del derecho de desistimiento (productos personalizados, servicios ejecutados, etc.)
- Las obligaciones de información precontractual que debes cumplir para que el plazo cuente desde la entrega
- El procedimiento correcto para gestionar devoluciones y reembolsos: plazos y costes

**2. Regulación de la publicidad y las comunicaciones comerciales**
Desarrolla las normas que gobiernan cómo puedes comunicarte con los consumidores:
- Publicidad engañosa: qué la constituye y ejemplos de prácticas que han resultado en sanciones
- Comparativa con la competencia: cuándo es legal y cuándo no
- Marketing de influencers y publicidad encubierta: las obligaciones de etiquetado (#ad, #publicidad)
- Email marketing y SMS: los requisitos del RGPD para comunicaciones comerciales
- Dark patterns: las prácticas de UX que están siendo reguladas por la Comisión Europea

**3. Protección de datos en negocios B2C**
Los negocios de consumo manejan millones de datos de personas. Explica:
- Qué datos puedes recoger, con qué base legal y cómo debe ser el consentimiento
- Cookies y rastreo: lo que la normativa ePrivacy exige en la práctica (el banner de cookies correcto)
- Derechos ARCO+ del consumidor y los plazos para atenderlos
- La responsabilidad del responsable vs. el encargado del tratamiento en una plataforma de comercio
- Las multas del RGPD: cuándo son proporcionales y ejemplos de sanciones a empresas B2C

**4. Regulación específica por sector**
Identifica la regulación adicional que puede aplicar según el tipo de negocio B2C:
- Alimentación y etiquetado: obligaciones de información nutricional y alérgenos
- Servicios financieros al consumidor: crédito al consumo, seguros y regulación específica
- Farmacia y productos de salud: restricciones de venta online y publicidad
- Moda y textil: obligaciones de información sobre composición y origen

**5. Análisis de mi situación**
Basándote en lo que me has descrito, identifica los 3 riesgos legales más probables en mi negocio y las acciones concretas que debo tomar para mitigarlos. Si hay aspectos donde necesito consultar con un abogado, indícamelo claramente.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Marco legal de la venta al consumidor: garantías, desistimiento, publicidad y protección de datos en negocios B2C',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Consumer support at scale: gestionar millones de interacciones con calidad',
                'description'      => 'Estrategia y operativa de atención al cliente para negocios B2C de gran volumen: cómo automatizar sin perder humanidad, medir la calidad real y escalar el equipo de forma sostenible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia liderando equipos de atención al cliente en empresas B2C de alto volumen, desde 50.000 hasta 5 millones de contactos mensuales. Has implementado programas de IA conversacional, has escalado equipos distribuidos y sabes cómo equilibrar eficiencia y calidad de experiencia.

Necesito ayuda para diseñar o mejorar la operativa de soporte al cliente de mi negocio B2C.

**Mi negocio:**
[Describe tu empresa, cuántos contactos de clientes gestionas al mes y a través de qué canales]

**Mi reto principal:**
[¿Cuál es el mayor problema ahora mismo: volumen, calidad, coste, tiempo de respuesta, o algo diferente?]

---

**1. La arquitectura de soporte B2C a escala**
Explica cómo estructurar un sistema de atención al cliente que crece sin colapsar:

*El modelo de deflexión progresiva:*
- Nivel 0 – Self-service: FAQ, base de conocimiento, vídeos de ayuda. Cómo medir la tasa de deflexión real
- Nivel 1 – IA conversacional: chatbots y asistentes virtuales. Cuándo añaden valor y cuándo frustran
- Nivel 2 – Agentes de soporte general: los problemas que la IA no puede resolver todavía
- Nivel 3 – Especialistas: reclamaciones complejas, escalados legales, clientes de alto valor

Explica los criterios de enrutamiento entre niveles y cómo reducir los escalados innecesarios.

**2. Métricas de soporte que realmente importan en B2C**
Para cada métrica, explica cómo calcularla, qué benchmark esperar y qué acciones tomar si está mal:
- FCR (First Contact Resolution): el predictor más importante de satisfacción y coste
- AHT (Average Handle Time): cómo gestionarlo sin sacrificar calidad
- CSAT post-interacción: diseño de encuestas y tasas de respuesta realistas
- Tiempo de primera respuesta por canal: qué es aceptable en email, chat, redes y teléfono
- Tasa de abandono en cola: el coste oculto de los tiempos de espera
- Cost per contact: cómo calcularlo y cómo reducirlo sin degradar la experiencia

**3. Gestión de calidad en operaciones de gran volumen**
Describe cómo implementar un programa de QA que escale:
- Muestreo y evaluación de interacciones: qué porcentaje revisar y cómo
- Scorecards de calidad: los criterios de evaluación que predicen satisfacción del cliente
- Calibración del equipo de QA: cómo garantizar que todos evalúan igual
- Coaching basado en datos: cómo usar los resultados de QA para mejorar a los agentes
- IA para análisis de calidad: transcripción automática, análisis de sentimiento y detección de riesgos

**4. Escalabilidad del equipo en picos de demanda B2C**
El volumen B2C no es uniforme. Explica:
- Forecasting de volumen: cómo predecir los picos (Black Friday, lanzamientos, estacionalidad)
- Workforce management: dimensionamiento por intervalo de 30 minutos en canales síncronos
- Estrategias de flexibilidad: freelancers de soporte, trabajo part-time, equipos distribuidos globalmente
- Onboarding express: cómo entrenar a un agente de soporte B2C en 5 días sin bajar la calidad
- Playbooks por tipo de incidencia: cómo estandarizar las respuestas sin robotizar la comunicación

**5. Plan para mi situación**
Basándote en el reto que me has descrito, diseña un plan de mejora de 60 días con acciones priorizadas por impacto en la experiencia del cliente y en la eficiencia operativa.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Operativa de soporte al cliente B2C a gran escala: deflexión, métricas, calidad y dimensionamiento del equipo',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance para marcas de consumo: proyectos, creatividades y campañas B2C',
                'description'      => 'Guía para freelancers que trabajan con marcas de consumo masivo: cómo posicionarse, gestionar proyectos creativos y entregar campañas B2C que el cliente quiera repetir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de 10 años trabajando para marcas de gran consumo, desde startups de producto hasta multinacionales de FMCG (Fast-Moving Consumer Goods). Has trabajado como copywriter, diseñador, consultor de marketing, estratega de contenidos y gestor de campañas B2C de forma independiente.

Necesito orientación para posicionarme mejor y trabajar de forma más profesional con marcas de consumo.

**Mi perfil:**
[Describe tu especialidad freelance, qué tipo de proyectos B2C has hecho o quieres hacer, y en qué nivel estás]

**Mi reto:**
[¿Cuál es el mayor obstáculo ahora mismo: encontrar clientes, justificar tus tarifas, gestionar proyectos complejos, o diferenciarte de otros freelancers?]

---

**1. El mercado freelance B2C: dónde están las oportunidades**
Explica cómo está estructurada la demanda de talento freelance en marcas de consumo:

*Qué proyectos externalizan las marcas B2C y por qué:*
- Campañas puntuales con picos de demanda (Black Friday, Navidad, lanzamientos)
- Especialidades que no justifican un perfil interno (motion graphics, UX research, copy en otros idiomas)
- Proyectos piloto antes de decidir si contratar un perfil interno
- Overflow de trabajo cuando el equipo interno está saturado

*Dónde encontrar estos proyectos:*
- Agencias de publicidad y marketing que subcontratan producción
- Departamentos de marketing internos de marcas medianas y grandes
- Marketplaces especializados en talento creativo B2C
- Networking en eventos del sector (retail, marketing de gran consumo, e-commerce)

**2. Cómo posicionarte como especialista en B2C**
La especialización sectorial vale más que la especialización técnica genérica. Explica:
- Por qué "copywriter de gran consumo" cobra más que "copywriter generalista"
- Cómo construir un portfolio específico de B2C si estás empezando en el sector
- Los lenguajes y códigos que debes conocer para hablar con un Brand Manager de una gran marca
- Casos de estudio que convencen a clientes B2C: qué incluir y cómo presentarlos
- Cómo aprovechar proyectos pequeños para llegar a marcas más grandes

**3. Gestión de proyectos creativos B2C**
Los proyectos para marcas de consumo tienen dinámicas particulares. Describe:
- El proceso de briefing: cómo extraer la información que necesitas del cliente para no errar el tiro
- Gestión de revisiones y cambios: cuántas rondas son razonables y cómo establecerlo en el contrato
- Trabajo con equipos internos de la marca: cómo relacionarte con el Brand Manager, el Legal, el Trade Marketing
- Gestión de los plazos: el cliente B2C tiene fechas inamovibles (campañas de temporada, lanzamientos)
- Cómo gestionar las aprobaciones en cadena que ralentizan los proyectos de grandes marcas

**4. Tarifas y propuestas para proyectos B2C**
Explica cómo fijar y defender tus precios en el mercado de gran consumo:
- Por qué las marcas B2C tienen presupuestos de agencia y cómo acceder a ellos
- Tarifa por proyecto vs. tarifa por hora: cuál usar y cuándo
- Cómo estructurar una propuesta económica que justifique tu tarifa frente a opciones más baratas
- Los errores de pricing más comunes: cotizar demasiado bajo por miedo, no incluir revisiones en el precio
- Cómo negociar sin perder el proyecto ni tu margen

**5. Fidelización y crecimiento con marcas B2C**
La mejor fuente de proyectos es un cliente que repite. Explica:
- Cómo convertir un proyecto puntual en una relación de largo plazo
- Cuándo y cómo proponer un retainer mensual a una marca B2C
- Cómo pedir referencias y testimonios sin que resulte incómodo
- Cómo escalar tu negocio freelance B2C: subcontratar, crear un estudio, o especializarte más

**6. Plan para mi situación**
Basándote en mi perfil y mi reto, dame las 5 acciones concretas más importantes que debo tomar en los próximos 30 días para mejorar mi posición en el mercado freelance B2C.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Posicionamiento y gestión de proyectos freelance para marcas de consumo masivo B2C',
                'vote_score'       => 34,
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
