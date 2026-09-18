<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills390Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Especializarse como consultor de marketing y cobrar más',
                'description'      => 'Transita de generalista de marketing a especialista de referencia en un nicho específico: define tu área de expertise, posiciona tu práctica, redefine tu tarifa y construye un negocio de consultoría sostenible y bien pagado.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para consultores de marketing independientes con experiencia en ayudar a profesionales a especializarse, posicionarse como expertos en su nicho y escalar sus tarifas de consultoría. Conoces el mercado de servicios de marketing y puedes distinguir los nichos más rentables de los saturados.

**CONTEXTO**

Uno de los mayores errores de los consultores de marketing freelance es intentar servir a todo tipo de clientes en todas las áreas del marketing. La especialización es el camino más directo hacia tarifas más altas, clientes más cualificados y una práctica de consultoría más sostenible. Un especialista siempre puede cobrar más que un generalista porque reduce el riesgo percibido del cliente, que sabe que está contratando a alguien que ha resuelto exactamente su problema antes.

**DATOS DE PARTIDA**

Cuéntame antes de empezar:
1. ¿Cuáles son las 3 áreas de marketing donde tienes más experiencia o resultados demostrables?
2. ¿En qué sector o tipo de empresa has trabajado más (B2B, e-commerce, SaaS, retail, etc.)?
3. ¿Cuál es tu tarifa actual (por hora o por proyecto) y cuánto quieres ganar en 12 meses?
4. ¿Tienes clientes actuales o estás empezando desde cero?
5. ¿Qué es lo que más disfrutas hacer en marketing y qué evitas en la medida de lo posible?

**PLAN DE ESPECIALIZACIÓN**

Desarrolla los siguientes componentes:

1. **Análisis de nicho rentable**: Evalúa las combinaciones posibles de mi expertise (área de marketing + tipo de empresa + problema específico) y construye una matriz que muestre las opciones de nicho con tres variables: demanda del mercado, nivel de competencia y tarifa promedio que cobra un especialista. Recomienda las 2-3 mejores opciones con justificación.

2. **Definición del posicionamiento**: Para el nicho elegido, ayúdame a articular:
   - Quién soy como especialista (el "título" de mi práctica)
   - A quién sirvo con exactitud (perfil de cliente ideal con detalles específicos)
   - Qué problema específico resuelvo y qué resultado entrego
   - Por qué soy la opción obvia para ese cliente (diferenciadores concretos)
   - Mi propuesta de valor en una frase de 15 palabras

3. **Oferta de servicios especializada**: Diseña un portfolio de 2-3 servicios específicos para mi nicho (en lugar de una lista genérica de servicios de marketing), con nombre del servicio, descripción orientada al cliente, entregables concretos, duración y precio sugerido.

4. **Estrategia de aumento de tarifas**: Plan en 6 meses para subir mis tarifas sin perder clientes:
   - Mes 1-2: Refinamiento del posicionamiento y actualización del portfolio
   - Mes 3-4: Nuevos clientes al nuevo precio, clientes actuales en transición
   - Mes 5-6: Tarifas consolidadas, eliminación de clientes que no encajan con el nicho
   Incluye cómo comunicar el aumento a clientes existentes con scripts concretos.

5. **Autoridad en el nicho**: Plan de 90 días para construir visibilidad como especialista: qué contenido crear, en qué plataformas, con qué frecuencia y qué métricas indican que el posicionamiento está funcionando.

6. **Proceso de captación especializada**: Cómo adaptar el proceso de venta para un servicio especializado: cómo cualificar clientes que encajan con el nicho, cómo manejar solicitudes que están fuera del nicho y cómo crear urgencia en clientes que te encuentran por primera vez.

7. **Métricas de éxito a 12 meses**: Define 5 indicadores que confirmarían que la especialización fue la decisión correcta: tarifa promedio, tipo de clientes, ingresos mensuales, horas trabajadas y satisfacción personal con el trabajo.

**ADVERTENCIA IMPORTANTE**

La especialización no significa rechazar todos los proyectos fuera del nicho de inmediato. Es un proceso gradual de 6 a 12 meses en el que se van sustituyendo clientes generalistas por clientes especializados. La impaciencia es el principal error en este proceso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Especializarse en un nicho de marketing y aumentar las tarifas de consultoría',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Productizar tus servicios de desarrollo y crear ingresos escalables',
                'description'      => 'Transforma tu trabajo de desarrollo freelance de proyectos a medida en productos o servicios estandarizados con precio fijo, entrega predecible y posibilidad de escalar sin aumentar proporcionalmente tus horas de trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para desarrolladores freelance con experiencia en ayudar a programadores a transformar su trabajo personalizado en productos o servicios empaquetados (productized services) que generan ingresos más predecibles, márgenes más altos y mayor escalabilidad. Conoces tanto el mundo del desarrollo como el negocio de los servicios profesionales.

**CONTEXTO**

El desarrollador freelance tradicional intercambia tiempo por dinero en proyectos a medida que varían en scope, precio y cliente. Este modelo tiene un techo natural de ingresos y genera estrés por la irregularidad. La alternativa es "productizar" los servicios: crear una oferta estandarizada con un precio fijo, un alcance definido, un proceso de entrega predecible y una promesa de resultado clara. Esto permite cobrar más, trabajar con más clientes al mismo tiempo y eventualmente automatizar o delegar partes del trabajo.

**INFORMACIÓN DE PARTIDA**

Antes de diseñar la estrategia:
1. ¿En qué stack o tecnologías tienes más experiencia (lenguaje, framework, plataforma)?
2. ¿Qué tipo de proyectos recibes con más frecuencia y cuál es el presupuesto típico?
3. ¿Cuántas horas semanales dedicas a trabajo de clientes actualmente?
4. ¿Hay algún tipo de proyecto que hayas repetido varias veces con resultados similares?
5. ¿Tienes interés en crear un producto de software propio además de servicios?

**PLAN DE PRODUCTIZACIÓN**

1. **Identificación de patrones en proyectos pasados**: Define el proceso para analizar los últimos 10 proyectos completados e identificar: tareas repetidas en casi todos los proyectos, componentes de código reutilizados, problemas recurrentes de los clientes y tipo de cliente con resultados más exitosos. Ayúdame a identificar el candidato ideal para productizar.

2. **Diseño del servicio productizado**: Para el tipo de proyecto identificado, crea la estructura del servicio productizado:
   - Nombre del servicio (orientado al resultado, no a la tecnología)
   - Descripción en lenguaje de cliente (qué obtiene, no cómo se hace)
   - Alcance exacto: qué incluye y qué NO incluye
   - Proceso de entrega en fases con plazos fijos
   - Precio fijo con justificación
   - Criterios de aceptación del proyecto completado

3. **Estrategia de precios basada en valor**: Explica cómo calcular el precio del servicio productizado basándome en el valor que aporta al cliente, no en las horas que me cuesta, incluyendo la comparativa con la alternativa de contratar un desarrollador por horas.

4. **Proceso de onboarding estandarizado**: Diseña el proceso de onboarding del cliente para el servicio productizado: formulario de briefing, primera llamada (si aplica), cronograma automático y protocolo de comunicación durante la entrega.

5. **Automatización y apalancamiento**: Identifica qué partes del servicio productizado pueden automatizarse (generación de código, configuración de entornos, tests básicos, documentación) y qué partes pueden delegarse a otro desarrollador junior en el futuro para escalar la capacidad.

6. **Ingresos recurrentes**: A partir del servicio productizado, diseña una oferta de mantenimiento o retainer mensual que genere ingresos predecibles: qué incluye, qué precio y cómo vendérselo a los clientes que ya compraron el servicio principal.

7. **Producto de software propio**: Evalúa si existe oportunidad de crear un micro-SaaS, plugin, template o herramienta basada en el conocimiento adquirido en proyectos de clientes. Propón 3 ideas específicas de productos que podrían venderse a otros desarrolladores o a los mismos clientes.

8. **Hoja de ruta a 12 meses**: Desde el primer servicio productizado hasta una práctica de desarrollo con ingresos diversificados (proyectos productizados, retainers, producto propio): define los hitos clave de cada trimestre.

**PRINCIPIO CLAVE**

El mayor reto de productizar es la tentación de personalizar demasiado para cada cliente. La disciplina de defender el alcance del servicio productizado es lo que protege la rentabilidad y la escalabilidad del modelo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Convertir proyectos de desarrollo a medida en servicios productizados y escalables',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Subir tarifas de diseño sin perder clientes ni oportunidades',
                'description'      => 'Aprende el proceso completo para aumentar tus tarifas como diseñador freelance: cómo comunicarlo a clientes actuales, cómo posicionar el incremento como reflejo de mayor valor, y cómo atraer proyectos de mayor presupuesto.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocio para diseñadores freelance con amplia experiencia en ayudar a profesionales del diseño a subir sus tarifas, mejorar su posicionamiento y transitar hacia proyectos de mayor valor. Entiendes la psicología del precio, la negociación en servicios creativos y los miedos específicos de los diseñadores al hablar de dinero.

**CONTEXTO**

La mayoría de los diseñadores freelance cobran por debajo de su valor de mercado por una combinación de factores: síndrome del impostor, miedo a perder clientes si suben precios, falta de referentes claros de mercado y dificultad para cuantificar el valor del diseño en términos de negocio. El resultado es un ciclo de trabajo intenso con ingresos insuficientes que lleva al burnout. Subir tarifas no es solo una decisión financiera: es un reposicionamiento completo del profesional.

**DATOS DE PARTIDA**

Necesito saber antes de comenzar:
1. ¿Cuál es tu especialidad de diseño y cuántos años de experiencia tienes?
2. ¿Cuál es tu tarifa actual (por hora, por proyecto o retainer mensual)?
3. ¿Cuántos clientes activos tienes ahora mismo?
4. ¿Cuánto quieres ganar mensualmente en 12 meses?
5. ¿Cuál ha sido tu proyecto o cliente más satisfactorio y por qué?

**PLAN DE INCREMENTO DE TARIFAS**

Desarrolla los siguientes elementos:

1. **Diagnóstico de tu tarifa actual**: Analiza si estás cobrando por debajo, en línea o por encima del mercado comparando mi tarifa con los benchmarks de mi especialidad, mi región y mi nivel de experiencia. Identifica la "tarifa objetivo" realista para mis próximos 12 meses.

2. **El argumento del valor**: Ayúdame a construir mi argumento de valor basado en resultados de negocios, no en entregables de diseño. Para 3 proyectos de mi cartera, crea el relato del impacto económico del diseño: "rediseñé el checkout → aumentó la conversión un X% → esto representó Y€ adicionales para el cliente". Este argumento es la base para justificar tarifas más altas.

3. **Estrategia por tipo de cliente**:
   - **Clientes actuales de larga duración**: Cómo comunicar el aumento, con cuánta antelación, qué porcentaje de incremento es razonable y cómo reaccionar si se niegan
   - **Nuevos clientes**: Cómo presentar directamente la nueva tarifa sin pedir disculpas ni justificarse en exceso
   - **Clientes de proyecto único**: Cómo manejar el brief que llega con un presupuesto por debajo de tu tarifa
   Incluye scripts de conversación o email para cada situación.

4. **Elevación del portfolio**: Identifica qué proyectos actuales del portfolio comunican bajo valor percibido (proyectos de bajo presupuesto, clientes pequeños, trabajos muy generalistas) y cómo actualizar la presentación de tus mejores proyectos para justificar la nueva tarifa.

5. **Atracción de proyectos de mayor presupuesto**: Diseña la estrategia para atraer clientes que puedan pagar las nuevas tarifas:
   - Dónde están esos clientes (sector, tamaño de empresa, roles que contratan diseño)
   - Cómo llegar a ellos (canales, mensajes, plataformas)
   - Cómo diferenciarse en el proceso de propuesta para ganar proyectos premium

6. **Gestión del período de transición**: Durante los primeros 3-6 meses del incremento de tarifas puede haber menos proyectos mientras se ajusta el mercado. Diseña un plan de contingencia financiero: cuánto necesitas en reservas, cómo gestionar el tiempo libre entre proyectos y qué trabajos de bajo presupuesto son los últimos en rechazar.

7. **Superar el bloqueo mental**: Identifica los 5 pensamientos saboteadores más frecuentes cuando un diseñador quiere subir sus tarifas ("nadie me pagará eso", "hay mucha competencia más barata", "no soy lo suficientemente bueno") y proporciona el reencuadre cognitivo y el argumento racional para cada uno.

**REGLA DE ORO**

La mejor forma de subir tarifas es tener más demanda de la que puedes atender. Cuando tienes lista de espera de clientes, el incremento de precio es inevitable y nadie lo cuestiona.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aumentar las tarifas de diseño freelance y atraer proyectos de mayor valor',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Construir activos de ventas pasivos como profesional independiente',
                'description'      => 'Diseña activos digitales que generen oportunidades de venta mientras duermes: templates de propuestas, recursos descargables, mini-cursos y herramientas que posicionan tu expertise y atraen clientes de mayor valor.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en estrategia de negocio para profesionales de ventas independientes (freelance sales consultants, SDRs autónomos, consultores de ventas B2B), con experiencia en ayudarles a construir activos digitales que generan oportunidades de negocio y reducen la dependencia de la prospección activa constante.

**CONTEXTO**

Un profesional de ventas independiente que solo prospecta activamente tiene un techo de ingresos fijo determinado por sus horas disponibles. Los activos de ventas pasivos son recursos digitales que trabajan 24 horas al día atrayendo a clientes potenciales, filtrando a los no cualificados y presellling las capacidades del consultor antes de la primera conversación. El resultado es un pipeline más predecible, clientes mejor cualificados y mayor tiempo disponible para el trabajo de alto valor.

**INFORMACIÓN DE PARTIDA**

Cuéntame:
1. ¿En qué tipo de ventas te especializas (SaaS, servicios profesionales, B2B industrial, otros)?
2. ¿Qué servicio ofreces como consultor o freelance de ventas (SDR as a service, auditoría del proceso de ventas, formación de equipos, fractional VP of Sales)?
3. ¿Cuáles son los 3 principales problemas de ventas de tus clientes potenciales?
4. ¿Qué canales de captación usas actualmente?
5. ¿Cuánto tiempo tienes disponible para crear activos (horas por semana)?

**PLAN DE ACTIVOS PASIVOS**

1. **Inventario de activos posibles**: Define las categorías de activos digitales más efectivos para un consultor de ventas y cuál es el tipo de cliente que atrae cada uno:
   - Plantillas de prospección (secuencias de emails, scripts de llamada)
   - Diagnóstico de proceso de ventas (cuestionario de autodiagnóstico)
   - Calculadora de ROI de mejoras en el proceso de ventas
   - Mini-guía o checklist del proceso de ventas ideal
   - Webinar o masterclass sobre una metodología de ventas
   Para cada uno, indica la dificultad de creación y el potencial de captación.

2. **Creación del activo principal**: Para el activo de mayor potencial para mi perfil, desarrolla la especificación completa:
   - Título y propuesta de valor
   - Estructura de contenido detallada
   - Formato y herramientas para crearlo
   - Landing page de captación (copy completo)
   - Email de entrega y seguimiento

3. **Sistema de cualificación automática**: Diseña el proceso post-descarga para filtrar leads y cualificarlos automáticamente antes de hablar con ellos: preguntas del formulario de descarga, segmentación por respuestas, secuencia de emails diferenciada por perfil y criterio para escalar a una llamada de consultoría.

4. **Estrategia de distribución**: Cómo llegar al mayor número de clientes potenciales con el activo creado:
   - LinkedIn: formato de post, frecuencia, llamadas a la acción
   - Newsletter o email marketing: integración en la secuencia regular
   - Partnerships: cómo colaborar con otros consultores o plataformas para amplificar el alcance
   - SEO: si el activo puede posicionarse orgánicamente para búsquedas relacionadas

5. **Conversión del lead al cliente**: Diseña el proceso desde que descarga el activo hasta que firma un contrato de consultoría: número de touchpoints, tipo de contenido en cada uno, criterio para proponer una llamada y estructura de la llamada de discovery.

6. **Escalabilidad del modelo**: Una vez validado el primer activo, cómo construir una biblioteca de activos que cubran diferentes etapas del funnel y diferentes perfiles de cliente, creando un ecosistema que genera leads de forma continua.

7. **Métricas de rendimiento de los activos**: KPIs para evaluar qué activos funcionan mejor: tasa de descarga, tasa de conversión a lead cualificado, tiempo desde descarga hasta primera llamada y tasa de conversión a cliente pagador.

**MENTALIDAD CLAVE**

Los activos pasivos requieren inversión de tiempo inicial que no genera retorno inmediato. El error más frecuente es abandonarlos demasiado pronto. Un activo necesita al menos 90 días de distribución constante antes de poder evaluar su rendimiento real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear activos digitales que generan oportunidades de venta de forma pasiva',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'De empleado a consultor de producto independiente: la transición',
                'description'      => 'Planifica y ejecuta la transición de Product Manager empleado a consultor de producto independiente: define tu oferta, construye tu red, gestiona la incertidumbre de los primeros meses y escala hacia una práctica de consultoría rentable.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en ayudar a Product Managers a realizar la transición de empleado a consultor independiente. Conoces tanto el trabajo de producto como el negocio de la consultoría, y tienes experiencia práctica acompañando a PMs en este proceso de cambio.

**CONTEXTO**

La transición de PM empleado a consultor independiente es una de las más atractivas y más mal ejecutadas en el mundo del producto. Los PMs tienen habilidades muy demandadas y bien pagadas en el mercado de consultoría, pero el paso de tener un salario fijo a generar ingresos de múltiples clientes requiere un cambio de mentalidad, de modelo de negocio y de habilidades que muchos subestiman. La diferencia entre los que triunfan y los que vuelven al empleo en 6 meses suele ser la planificación previa y la gestión de los primeros 3 meses.

**INFORMACIÓN DE PARTIDA**

Antes de diseñar el plan:
1. ¿Cuántos años de experiencia como PM tienes y en qué tipo de productos?
2. ¿Estás todavía empleado o ya has dejado tu trabajo?
3. ¿Cuántos meses de reserva financiera tienes para la transición?
4. ¿Tienes ya algún contacto que podría ser tu primer cliente?
5. ¿Qué tipo de consultoría quieres ofrecer (fractional PM, auditorías de producto, formación, estrategia)?

**PLAN DE TRANSICIÓN**

1. **Definición de la oferta de consultoría**: Ayúdame a diseñar 2-3 servicios de consultoría de producto específicos para mi perfil:
   - Fractional PM (qué incluye, qué horas mínimas y máximas, precio mensual sugerido)
   - Auditoría de producto (proceso, duración, entregables, precio por proyecto)
   - Formación o workshop (formato, audiencia, precio por participante o por empresa)
   Para cada uno, define el cliente ideal, la propuesta de valor y cómo diferenciarse de otros consultores de producto.

2. **Plan de primeros 90 días**: Los tres primeros meses son cruciales. Diseña la estrategia semana a semana:
   - Semanas 1-2: Configuración del negocio (web, LinkedIn, tarifas, contrato tipo)
   - Semanas 3-6: Activación de la red, primeras conversaciones exploratorias
   - Semanas 7-12: Cierre del primer cliente, ajuste de la oferta según feedback

3. **Estrategia de captación sin publicidad**: Plan de 90 días para conseguir los primeros 2-3 clientes a través de:
   - Red de contactos profesionales (ex-compañeros, ex-jefes, red de LinkedIn)
   - Contenido de posicionamiento en LinkedIn
   - Colaboraciones con otras agencias o consultoras que necesiten capacidad de producto
   - Comunidades de fundadores o startups que buscan apoyo de producto

4. **Gestión financiera de la transición**: Diseña el modelo financiero básico para los primeros 12 meses:
   - Cuánto necesitas ganar para cubrir tus costes (personales y del negocio)
   - Cuántos clientes necesitas al precio que defines
   - Qué hacer si en el mes 4 aún no tienes suficientes clientes (opciones de contingencia)
   - Cuándo y cómo aumentar tarifas una vez consolidada la práctica

5. **Posicionamiento como experto de producto**: Estrategia para construir autoridad en el ecosistema de producto independiente:
   - Qué punto de vista o metodología propia puedes articular y comunicar
   - Dónde publicar (LinkedIn, comunidades de PMs, podcasts, conferencias)
   - Cómo usar cada proyecto como caso de éxito anónimizado para el marketing futuro

6. **Gestión del síndrome del impostor**: Los primeros meses como consultor independiente son emocionalmente difíciles. Diseña estrategias para:
   - Mantener la confianza durante las semanas sin clientes
   - Manejar la comparación con el salario anterior
   - Construir una rutina de trabajo productiva sin la estructura de una empresa
   - Encontrar comunidad entre otros consultores independientes

7. **Roadmap a 3 años**: Define los hitos de crecimiento de la práctica de consultoría: año 1 (validación y primeros clientes), año 2 (especialización y aumento de tarifas), año 3 (escalar mediante productos o equipo pequeño).

**VERDAD INCÓMODA**

La mayoría de los consultores de producto tardan entre 6 y 12 meses en tener ingresos estables equivalentes a su salario anterior. Quien espera hacerlo en 2 meses casi siempre queda frustrado. La planificación financiera y la gestión de expectativas son tan importantes como la estrategia de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificar la transición de PM empleado a consultor de producto independiente',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Construir una consultoría de RRHH independiente rentable',
                'description'      => 'Diseña y lanza tu práctica de consultoría de Recursos Humanos independiente: define los servicios que ofrecerás, identifica tu cliente ideal, establece tarifas competitivas y crea el sistema para generar clientes de forma consistente.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en consultores de Recursos Humanos independientes, con experiencia en ayudar a profesionales de RRHH a lanzar y escalar prácticas de consultoría rentables. Conoces el mercado de servicios de RRHH, las necesidades de las empresas cliente y cómo posicionarse en un sector con mucha competencia de grandes consultoras.

**CONTEXTO**

El profesional de RRHH que decide independizarse tiene ventajas únicas: conoce los problemas reales de las empresas desde dentro, tiene red de contactos en el sector y un expertise operativo que las grandes consultoras a menudo no tienen a nivel práctico. El reto está en transformar ese conocimiento en una oferta de servicios clara, a un precio que refleje el valor real y con un modelo de captación de clientes que no dependa exclusivamente de las referencias.

**DATOS DE PARTIDA**

Antes de crear el plan:
1. ¿En qué áreas de RRHH tienes más expertise (reclutamiento, formación, compensación, relaciones laborales, transformación organizacional, employer branding)?
2. ¿A qué tamaño de empresa te diriges (startups, pymes, grandes empresas)?
3. ¿Estás aún empleado o ya has dado el salto? ¿Cuánta red profesional tienes activa?
4. ¿Cuánto quieres ganar anualmente con la consultoría?
5. ¿Tienes preferencia por proyectos puntuales, retainers o formación?

**PLAN DE CONSULTORÍA DE RRHH**

1. **Diseño de la oferta de servicios**: Para mi especialidad, diseña una cartera de 3-4 servicios diferenciados:
   - Servicio de entrada (menor precio, menor riesgo, más fácil de vender al primer cliente)
   - Servicio estrella (el más rentable y diferenciado)
   - Retainer mensual (para ingresos recurrentes)
   - Producto formativo (escalable, no requiere tiempo 1:1)
   Para cada servicio: nombre, descripción orientada al cliente, entregables, duración y precio sugerido.

2. **Identificación del cliente ideal**: Define el perfil exacto de mi cliente ideal con:
   - Tamaño, sector y etapa de crecimiento
   - El cargo que contrata los servicios de RRHH externos (CEO, Director de RRHH, CFO)
   - El problema de negocio que tiene (no el problema de RRHH, sino su impacto en el negocio)
   - La situación que le hace buscar un consultor externo (crecimiento rápido, conflictos laborales, alta rotación, ausencia de departamento de RRHH)

3. **Propuesta de valor diferenciada**: Ayúdame a articular por qué una empresa debería contratar mis servicios en lugar de las grandes consultoras de RRHH, una plataforma de RRHH tecnológica o contratar a un técnico de RRHH interno.

4. **Plan de captación de primeros 5 clientes**: Estrategia específica para las primeras contrataciones:
   - Mapa de la red de contactos existente y cómo activarla con un mensaje concreto
   - Estrategia de LinkedIn para posicionarse como especialista en el área elegida
   - Alianzas con despachos de abogados laboralistas, gestorías o asesores de empresas que pueden referir clientes
   - Participación en asociaciones empresariales o cámaras de comercio

5. **Modelo de propuesta y precio**: Cómo estructurar una propuesta de consultoría de RRHH que el cliente entienda fácilmente, con los componentes clave, la presentación del precio (por proyecto vs. por día vs. retainer) y cómo manejar la negociación de precio.

6. **Entregables y metodología propia**: Define el proceso de trabajo y los entregables de al menos un servicio principal, creando una metodología con nombre propio que pueda convertirse en un diferenciador y en un activo de marketing.

7. **Crecimiento de la práctica**: Hoja de ruta para pasar de los primeros clientes a una práctica establecida: cuándo subir tarifas, cuándo especializar más la oferta, cuándo incorporar a otros consultores asociados y cuándo lanzar productos formativos.

**NOTA SOBRE EL SECTOR**

La consultoría de RRHH tiene un componente de confianza muy alto: las empresas contratan consultores con quienes se sienten cómodos compartiendo información sensible sobre personas y organización. La inversión en relaciones a largo plazo y en reputación es más rentable a largo plazo que cualquier táctica de marketing agresiva.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Lanzar y escalar una práctica de consultoría de RRHH independiente',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo de CFO fraccionado: cómo ofrecer servicios financieros a empresas pequeñas',
                'description'      => 'Diseña y lanza un servicio de CFO fraccionado o dirección financiera externa para pymes: define tu oferta, tus tarifas, tu metodología de trabajo y cómo posicionarte como el director financiero que las empresas pequeñas no pueden permitirse contratar a tiempo completo.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para directores financieros y controllers que quieren lanzar una práctica de CFO fraccionado o finanzas externas para pymes. Conoces el modelo de negocio del CFO fraccionado, el perfil de empresa que lo contrata y cómo posicionar este servicio en un mercado que todavía no lo conoce bien.

**CONTEXTO**

El CFO fraccionado (o dirección financiera externa) es un modelo en el que un profesional financiero senior trabaja con varias empresas de forma simultánea, dedicando a cada una una fracción de su tiempo (habitualmente entre 5 y 20 horas al mes). Las pymes que lo contratan obtienen la experiencia de un director financiero por una fracción del coste de contratar uno a tiempo completo. El profesional financiero construye una práctica diversificada, con mayor autonomía y potencial de ingresos que en un empleo corporativo.

**INFORMACIÓN DE PARTIDA**

Necesito saber:
1. ¿Cuál es tu experiencia financiera (años, roles, sectores)?
2. ¿A qué tipo de empresa te diriges (facturación, sector, etapa)?
3. ¿Cuántos clientes simultáneos quieres tener como máximo?
4. ¿Estás todavía empleado o ya eres independiente?
5. ¿Tienes preferencia por el trabajo de estrategia financiera, control de gestión, tesorería o una combinación?

**PLAN DEL MODELO CFO FRACCIONADO**

1. **Diseño del servicio**: Define tu oferta de CFO fraccionado en tres niveles:
   - Nivel básico (empresa que necesita orden básico en sus finanzas): qué incluye, horas mensuales, precio
   - Nivel estándar (empresa en crecimiento que necesita control de gestión y reporting): qué incluye, horas, precio
   - Nivel premium (empresa en proceso de inversión, M&A o expansión): qué incluye, horas, precio
   Para cada nivel, define el perfil ideal de empresa cliente.

2. **Proceso de trabajo mensual**: Describe el flujo de trabajo típico mes a mes para un cliente estándar: qué información recopilas, qué análisis haces, qué entregables produces, qué reunión tienes y qué decisiones impulsa la información que generas.

3. **Herramientas y tecnología**: Define el stack de herramientas que necesitas para operar eficientemente con múltiples clientes: acceso a contabilidad (Holded, Sage, Xero, QuickBooks), herramientas de reporting financiero, gestión del cliente, videoconferencia y firma de contratos.

4. **Propuesta de valor para la pyme**: Diseña el argumento para convencer al empresario de que contratar un CFO fraccionado vale la inversión mensual. El argumento debe traducir el servicio financiero a impacto de negocio concreto: mejor gestión del flujo de caja, mejores decisiones de inversión, optimización fiscal, preparación para financiación bancaria o de inversores.

5. **Captación de primeros clientes**: Estrategia específica para conseguir los primeros 3-5 clientes:
   - Red de contactos de la carrera financiera corporativa
   - Alianzas con gestorías, despachos de abogados y bancos que atienden a pymes
   - Contenido financiero en LinkedIn dirigido a empresarios y directores generales
   - Aceleradoras de startups e incubadoras que buscan apoyo financiero para sus empresas

6. **Modelo económico del negocio**: Construye el modelo financiero de tu propia práctica:
   - Ingresos proyectados con 3, 5 y 8 clientes
   - Costes de la práctica (herramientas, seguro de responsabilidad civil profesional, formación)
   - Tiempo dedicado vs. ingresos por hora efectiva
   - Punto de equilibrio y cuándo alcanzar rentabilidad satisfactoria

7. **Escalabilidad a largo plazo**: Una vez consolidada la práctica con 5-7 clientes, qué opciones tienes para escalar: añadir asociados financieros junior que atienden a clientes bajo tu supervisión, crear productos formativos para empresarios, o especializarte en un sector o tipo de transacción.

**DIFERENCIADOR CLAVE**

El CFO fraccionado más valorado no es el que hace más análisis, sino el que traduce mejor los números en decisiones de negocio comprensibles para el empresario. La comunicación clara y la confianza son tan importantes como la expertise técnica financiera.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Lanzar un servicio de CFO fraccionado para pymes como profesional independiente',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Nicho jurídico y práctica legal independiente rentable',
                'description'      => 'Define y desarrolla tu nicho como abogado independiente: identifica el área jurídica más rentable para tu perfil, posiciónate como referente, diseña tu modelo de honorarios y crea un flujo constante de clientes cualificados.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en abogados independientes y pequeños despachos, con experiencia en ayudar a profesionales del Derecho a construir prácticas jurídicas rentables, especializadas y sostenibles sin depender de las grandes firmas ni de las plataformas de precios bajos.

**CONTEXTO**

El abogado independiente que intenta competir como generalista en precio está condenado a la carrera hacia el fondo. La especialización en un nicho jurídico específico permite cobrar honorarios premium, construir reputación y recibir referencias de calidad. Un abogado conocido como el mejor en contratos tecnológicos, en derecho de familia internacional o en regulación de criptoactivos tiene una posición de mercado que ninguna plataforma de precios bajos puede replicar.

**DATOS DE PARTIDA**

Antes de crear el plan:
1. ¿En qué áreas del Derecho tienes formación y experiencia?
2. ¿Has tenido un tipo de asunto que disfrutaste especialmente o en el que obtuviste resultados destacados?
3. ¿En qué jurisdicción y ciudad ejerces?
4. ¿Qué tipo de cliente prefieres (particulares, autónomos, pymes, grandes empresas)?
5. ¿Cuál es tu objetivo de ingresos y cuántos asuntos quieres llevar simultáneamente?

**ESTRATEGIA DE ESPECIALIZACIÓN**

1. **Análisis de nichos jurídicos rentables**: Para mi perfil y jurisdicción, identifica 4-5 nichos jurídicos con alta demanda y escasez relativa de especialistas cualificados. Para cada nicho, indica: el tipo de cliente que lo necesita, la urgencia típica del problema (mayor urgencia = mayor precio), el tipo de honorario habitual (por hora, por asunto, cuota mensual) y el nivel de competencia.

2. **Selección y posicionamiento del nicho**: Para el nicho elegido, ayúdame a articular mi posicionamiento:
   - El tipo exacto de problema que resuelvo (no el área jurídica, sino el problema de vida o negocio del cliente)
   - Por qué soy la opción ideal para ese problema
   - Qué me diferencia de otros abogados que también lo practican
   - El título o descriptor de mi práctica (no "abogado mercantilista" sino "abogado para startups tecnológicas en su primera ronda de inversión")

3. **Modelo de honorarios especializado**: Diseña una estructura de honorarios para mi nicho que maximice los ingresos y se alinee con el valor que percibe el cliente:
   - Cuándo usar honorarios fijos por asunto (predecibilidad para el cliente)
   - Cuándo usar tarifa por hora (asuntos complejos e impredecibles)
   - Cuándo ofrecer retainer mensual (clientes que necesitan apoyo jurídico continuo)
   - Cuándo usar honorarios de éxito (casos donde el resultado económico es cuantificable)
   Incluye rangos de precio por tipo de asunto en mi nicho.

4. **Sistema de captación de clientes**: Plan de generación de clientes específico para el nicho elegido:
   - Identificación de los canales donde están los clientes (asociaciones sectoriales, foros, eventos, LinkedIn)
   - Estrategia de contenido jurídico educativo que genera consultas
   - Alianzas estratégicas con profesionales complementarios (asesores fiscales, inversores, aceleradoras)
   - Optimización de ficha de Google Business y directorios jurídicos especializados

5. **Proceso de cualificación de clientes**: Diseña un sistema para filtrar asuntos que encajan con el nicho de los que no, con un formulario de contacto inicial, criterios de aceptación del asunto y cómo derivar los casos fuera del nicho a otros compañeros (y convertirlo en fuente de referencias recíprocas).

6. **Reputación y visibilidad**: Plan para convertirse en referente del nicho en 12 meses:
   - Contribuciones en publicaciones especializadas
   - Ponencias en eventos del sector (no jurídico, sino el sector del cliente)
   - Participación en asociaciones profesionales del sector cliente
   - Red de periodistas especializados a los que puedo aportar contexto jurídico

7. **Métricas de éxito de la práctica**: Define los indicadores que confirman que la especialización funciona: porcentaje de asuntos del nicho sobre el total, honorarios promedio por asunto (comparado con antes de especializar), número de referencias recibidas y porcentaje de clientes que repiten.

**ADVERTENCIA ÉTICA**

La especialización no exime de la diligencia debida. El abogado especialista tiene la obligación de mantenerse actualizado en los cambios normativos y jurisprudenciales de su nicho con más rigor que un generalista, precisamente porque los clientes esperan conocimiento de vanguardia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir un nicho jurídico rentable y construir una práctica legal independiente',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Consultoría de Customer Success independiente: de empleado a experto',
                'description'      => 'Construye tu práctica de consultoría de Customer Success: define los servicios que las empresas SaaS más demandan, establece tu metodología, fija tarifas premium y crea el sistema para atraer clientes que valoran la retención como prioridad de negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para profesionales de Customer Success que quieren independizarse y ofrecer servicios de consultoría a empresas SaaS y B2B. Conoces el mercado de la consultoría de CS, los problemas que estas empresas necesitan resolver y cómo posicionarse en un nicho que todavía está en formación.

**CONTEXTO**

El Customer Success como disciplina es relativamente nueva y hay escasez de consultores independientes con experiencia práctica real. Las empresas SaaS que están creciendo necesitan construir sus funciones de CS, definir su metodología de onboarding, diseñar sus playbooks y mejorar sus métricas de retención, pero no siempre tienen el presupuesto para un VP of CS a tiempo completo. El consultor de CS independiente con credenciales sólidas puede facturar tarifas muy competitivas y construir una práctica de alto valor.

**INFORMACIÓN DE PARTIDA**

Necesito saber:
1. ¿Cuántos años de experiencia en CS tienes y en qué tipo de empresa (early-stage, scale-up, enterprise)?
2. ¿En qué métricas de CS tienes más expertise (churn, NPS, expansion revenue, onboarding time-to-value)?
3. ¿Tienes preferencia por algún tipo de empresa cliente (ARR, sector, tamaño del equipo CS)?
4. ¿Estás empleado actualmente o ya eres independiente?
5. ¿Cuánto quieres ganar anualmente con la consultoría?

**PLAN DE CONSULTORÍA DE CS**

1. **Portfolio de servicios de CS**: Diseña una oferta de consultoría diferenciada con al menos 3 servicios:
   - Auditoría de CS (diagnóstico del estado actual de la función, entregables, duración y precio)
   - Diseño de playbooks y procesos (qué incluye, cómo se entrega, precio)
   - Fractional VP of CS o Head of CS (definición del rol, horas mensuales, precio)
   - Formación del equipo de CS (formato, audiencia, precio por sesión o programa)
   Para cada servicio, describe el ROI típico que genera para el cliente.

2. **Metodología propia de CS**: Desarrolla tu metodología de Customer Success con nombre propio, que pueda convertirse en tu diferenciador y en el eje de tu marketing. La metodología debe incluir: los principios que la guían, el proceso de evaluación inicial, los hitos del trabajo y los entregables. Propón un nombre para la metodología.

3. **Perfil de cliente ideal**: Define con exactitud qué empresa SaaS es tu cliente ideal:
   - ARR mínimo y máximo (ni muy pequeñas para pagar tu tarifa, ni tan grandes que necesiten una consultora)
   - Etapa de madurez de la función CS (sin función → construyendo → optimizando)
   - El cargo que contrata (CEO, CRO, VP CS)
   - El problema urgente que le lleva a buscar un consultor externo

4. **Captación de primeros clientes**: Estrategia específica para las primeras 3 contrataciones:
   - Activación de la red de ex-compañeros, colegas del sector y fundadores conocidos
   - LinkedIn como canal principal: qué contenido publicar, con qué frecuencia y con qué objetivos
   - Participación en comunidades de CS (Slack de Customer Success Collective, eventos de Gainsight, etc.)
   - Alianzas con inversores VC que recomiendan recursos a sus empresas de portfolio

5. **Propuesta y modelo de honorarios**: Diseña cómo estructurar una propuesta de consultoría de CS que justifique tus tarifas en términos del coste del churn que vas a reducir o el expansion revenue que vas a generar. Incluye una calculadora simple de ROI de los servicios de CS.

6. **Construcción de credibilidad**: Plan para consolidar tu autoridad en el mercado de CS independiente: casos de éxito (con permiso del cliente), artículos en publicaciones del sector, ponencias en conferencias de CS y un punto de vista propio sobre el futuro de la función.

7. **Escalar la práctica**: Una vez consolidados los primeros clientes, cómo escalar sin trabajar más horas: creación de cursos o programas de formación vendibles a múltiples empresas simultáneamente, contratación de un asociado junior para trabajo operativo y desarrollo de una comunidad o membership para profesionales de CS.

**INSIGHT CLAVE DE MERCADO**

El consultor de CS que mejor convierte no es el que tiene el CV más impresionante, sino el que mejor entiende el problema de negocio específico del founder o del CRO. Practica traducir tu expertise de CS a lenguaje de negocio: no "mejoraré tu onboarding", sino "reduciré tu churn en los primeros 90 días en un 20%, lo que a tu ARR actual representa X€ recuperados anualmente".
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Lanzar una consultoría de Customer Success independiente para empresas SaaS',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de ingresos pasivos para freelancers: de tiempo a activos',
                'description'      => 'Diseña e implementa un sistema de ingresos pasivos adaptado a tu expertise freelance: cursos online, templates, guías digitales, membership y SaaS de nicho que generan ingresos mientras sigues trabajando con clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para freelancers experimentados que quieren construir fuentes de ingresos pasivos o semipasivos que complementen (y eventualmente reduzcan) su dependencia del trabajo directo con clientes. Conoces los modelos de ingresos pasivos más efectivos para profesionales independientes, sus verdaderas tasas de éxito y cuánto trabajo real requieren.

**CONTEXTO**

El modelo de trabajo del freelancer intercambia tiempo por dinero, lo que crea un techo natural de ingresos y una vulnerabilidad a las interrupciones (vacaciones, enfermedad, falta de clientes). Los ingresos pasivos o semipasivos (cursos, productos digitales, software de nicho, comunidades de pago) permiten diversificar las fuentes de ingreso, crear activos que se valorizan con el tiempo y eventualmente reducir la dependencia del trabajo directo con clientes.

**IMPORTANTE**: Los ingresos "pasivos" raramente son 100% pasivos al principio. Requieren inversión de tiempo significativa para crear el activo y esfuerzo continuo de marketing para monetizarlo. La expectativa realista es que tarden entre 6 y 18 meses en generar ingresos significativos.

**INFORMACIÓN DE PARTIDA**

Antes de diseñar el plan:
1. ¿Cuál es tu especialidad freelance y cuántos años de experiencia tienes?
2. ¿Cuántas horas semanales puedes dedicar a crear activos sin reducir tus ingresos de cliente?
3. ¿Tienes ya algún activo (blog, newsletter, seguidores en redes sociales, lista de email)?
4. ¿Cuánto quieres ganar mensualmente con fuentes pasivas en 12 meses?
5. ¿Cuál es tu mayor fortaleza como creador: escribir, hacer video, diseñar, programar o hablar?

**PLAN DE INGRESOS PASIVOS**

1. **Mapa de activos posibles**: Para mi especialidad, propón los 5 tipos de activos más realistas y rentables con una evaluación honesta de cada uno:
   - Tiempo de creación inicial (horas reales, no estimaciones optimistas)
   - Dificultad de marketing (no el activo se vende solo)
   - Potencial de ingresos en 12 meses (escenario conservador y optimista)
   - Nivel de mantenimiento mensual requerido
   - Ejemplos reales de freelancers en mi especialidad que lo han hecho bien

2. **Selección y plan del primer activo**: Para el activo más adecuado a mi perfil:
   - Definición completa del producto (qué es, a quién va dirigido, qué problema resuelve, qué precio)
   - Estructura de contenido detallada si es un curso o guía
   - Especificación funcional si es una herramienta o template
   - Plataforma de distribución recomendada (Gumroad, Teachable, Notion, App Store, etc.)
   - Plan de creación de 8-12 semanas con hitos concretos

3. **Validación antes de crear**: Proceso para validar que existe demanda real antes de invertir tiempo en la creación del activo:
   - Encuesta a mi audiencia existente
   - Landing page de pre-venta o lista de espera
   - Conversaciones con potenciales compradores
   - Análisis de competencia (¿hay activos similares? ¿se venden?)

4. **Estrategia de lanzamiento**: Plan de lanzamiento del primer activo con:
   - Fase de pre-lanzamiento (2 semanas): creación de expectativa
   - Fase de lanzamiento (1 semana): comunicación a la lista, descuento de fundador
   - Fase post-lanzamiento (ongoing): distribución orgánica y de pago

5. **Sistema de marketing continuo**: Los activos pasivos requieren marketing activo para venderse. Diseña un sistema de 3-4 horas semanales para mantener las ventas:
   - Contenido que lleva tráfico al activo
   - Automatizaciones de email
   - Estrategia de afiliados si aplica

6. **Construcción de la segunda y tercera fuente**: Una vez el primer activo genera ingresos consistentes, roadmap para añadir activos complementarios que sirvan a la misma audiencia o a una audiencia adyacente.

7. **Meta de diversificación de ingresos**: Define la distribución objetivo de ingresos a 3 años: porcentaje de ingresos de trabajo directo con clientes vs. productos pasivos vs. membership o comunidad. Establece hitos realistas para cada año.

**VERDAD SOBRE LOS INGRESOS PASIVOS**

El 80% de los cursos y productos digitales de freelancers ganan menos de 500€ al mes. El 15% gana entre 500€ y 3.000€. El 5% supera esa cifra. La diferencia no está en la calidad del producto sino en el tamaño de la audiencia y en la consistencia del marketing. Construir audiencia primero y producto después es siempre más efectivo que al revés.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir fuentes de ingresos pasivos que complementen el trabajo freelance con clientes',
                'vote_score'       => 47,
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
