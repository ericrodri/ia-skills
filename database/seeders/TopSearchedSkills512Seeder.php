<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills512Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para marketing de moda y retail de lujo',
                'description'      => 'Aprende a usar IA para crear campañas de marketing aspiracional, predecir tendencias de moda, personalizar la comunicación para clientes VIP y posicionar marcas de lujo con narrativas auténticas y diferenciadoras.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo y estratega de marketing especializado en marcas de moda de lujo y retail premium. Tu experiencia abarca desde la narrativa de marca hasta la personalización de comunicaciones para clientes de alto poder adquisitivo. Quiero usar IA para elevar las campañas y estrategias de marketing de mi marca de lujo.

**Mi contexto:**
Trabajo en el departamento de marketing de una marca de moda de lujo o retail premium (segmento medio-alto o ultra-lujo). Mis clientes son exigentes, sofisticados y valoran la exclusividad, la herencia de marca y la experiencia personalizada. Necesito usar IA sin perder la autenticidad y el tono aspiracional que define al lujo.

**Instrucción 1 — Análisis de tendencias de moda con IA:**
Diseña un protocolo para detectar tendencias emergentes en moda y lifestyle de lujo usando IA, que incluya:
- Fuentes de señales tempranas: pasarelas, medios especializados, comportamiento en redes de influencers de nicho
- Metodología para distinguir micromodas pasajeras de macrotendencias con longevidad
- Cómo conectar una tendencia de moda con una oportunidad de campaña para mi marca
- Calendario editorial trimestral de tendencias con timing óptimo de activación

**Instrucción 2 — Personalización de comunicaciones para clientes VIP:**
Crea un sistema de comunicación personalizada con IA para los segmentos de clientes más valiosos:
- Protocolo de segmentación: cómo clasificar clientes por valor, preferencias estéticas y ocasiones de compra
- Plantillas de comunicación personalizadas para: invitaciones a eventos privados, presentaciones de nuevas colecciones, felicitaciones personales y ofertas exclusivas
- Tono y vocabulario apropiado para el lujo: qué palabras usar y cuáles evitar definitivamente
- Cómo usar el historial de compras para anticipar el deseo del cliente antes de que lo exprese

**Instrucción 3 — Narrativa de marca de lujo con IA:**
Genera el framework de storytelling para una campaña de lujo que incluya:
- La arquitectura narrativa de una campaña aspiracional: tensión, deseo, resolución
- Cómo integrar la herencia artesanal y la historia de la marca en contenido contemporáneo
- Guía de tono para diferentes canales: revista impresa, Instagram, email VIP, evento físico
- Cómo usar IA para generar variaciones de copy manteniendo la voz de marca sin que parezca generado artificialmente

**Instrucción 4 — Estrategia de marketing digital para el lujo:**
Diseña una estrategia de presencia digital para una marca de lujo que equilibre exclusividad y alcance:
- Cuándo publicar y qué no publicar nunca en redes sociales si eres una marca de lujo
- Estrategia de colaboraciones con creadores de contenido: criterios para seleccionar embajadores auténticos
- SEO de lujo: cómo posicionarse en búsquedas de alta intención de compra sin parecer desesperado
- Marketing de eventos exclusivos: cómo amplificar físico a digital manteniendo la percepción de rareza

**Instrucción 5 — Medición del marketing de lujo:**
Dame una guía de KPIs apropiados para el marketing de lujo, explicando por qué algunas métricas estándar (como CPM o CPC masivo) no son aplicables, y cuáles son los indicadores correctos: brand equity, deseable por las listas de espera, engagement de clientes VIP y cobertura editorial de calidad.

Termina con los 5 errores de marketing que destruyen la percepción de lujo de una marca y cómo la IA puede ayudar a evitarlos sin sacrificar la innovación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear campañas aspiracionales, personalizar comunicaciones VIP y posicionar marcas de moda de lujo con narrativas auténticas.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para plataformas de e-commerce de moda de lujo',
                'description'      => 'Aprende a usar IA para construir y optimizar plataformas digitales de moda de lujo, con personalización avanzada, recomendaciones de estilismo, búsqueda visual y experiencias de compra que estén a la altura de la exclusividad de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software y especialista en comercio digital de lujo con experiencia en plataformas de e-commerce premium como Net-a-Porter, Mytheresa o Farfetch. Quiero usar IA para construir o mejorar una plataforma de e-commerce que esté a la altura de una marca de moda de lujo.

**Mi contexto:**
Soy desarrollador senior o tech lead trabajando en la plataforma digital de una marca de moda de lujo o multi-marca premium. La experiencia de usuario en el sitio debe ser impecable: rápida, elegante y personalizada. Cada fricción en el proceso de compra representa perder un cliente de alto valor que no da segundas oportunidades.

**Instrucción 1 — Arquitectura de personalización para el lujo:**
Diseña la arquitectura técnica de un sistema de personalización para e-commerce de lujo que incluya:
- Motor de recomendaciones basado en historial de compras, preferencias de estilo y comportamiento de navegación
- Personalización en tiempo real de la página de inicio y las categorías según el perfil del cliente
- Sistema de alertas personalizadas para nuevas llegadas que coincidan con el gusto del cliente
- Privacidad y discreción en el uso de datos: cómo personalizar sin que el cliente sienta que está siendo vigilado

**Instrucción 2 — Búsqueda visual e inteligencia de estilismo:**
Crea la especificación técnica para implementar:
- Búsqueda visual: upload de foto para encontrar prendas similares en el catálogo
- Completar el look: motor de recomendación de prendas complementarias basado en imagen
- Asistente de estilismo conversacional: chatbot que ayude al cliente a encontrar el outfit perfecto para una ocasión
- Integración con el perfil de tallas y preferencias para filtrar resultados no relevantes

**Instrucción 3 — Performance y experiencia premium:**
Para una plataforma de lujo, el rendimiento técnico es parte de la experiencia de marca. Dame:
- Estándares de rendimiento que deben cumplirse: LCP, CLS, FID para e-commerce de lujo
- Estrategia de optimización de imágenes de alta calidad sin sacrificar velocidad
- Diseño de la experiencia de carga: qué mostrar mientras carga para mantener la percepción de calidad
- Testing de rendimiento bajo carga para eventos como Fashion Week o lanzamientos de colección

**Instrucción 4 — Gestión de inventario exclusivo con IA:**
Diseña un sistema de gestión de inventario para productos de edición limitada que incluya:
- Predicción de demanda para nuevas colecciones basada en datos de preventa y comportamiento de clientes VIP
- Sistema de listas de espera inteligente con comunicación personalizada
- Alertas de stock bajo para productos de alta demanda
- Gestión de devoluciones y segundas oportunidades para clientes prioritarios

**Instrucción 5 — Checkout y post-venta de lujo:**
El proceso de pago y la experiencia post-venta son parte del ritual de compra de lujo. Dame una especificación técnica para:
- Checkout simplificado pero con opciones premium: grabado personalizado, opciones de regalo, mensajes personalizados
- Seguimiento de pedido con comunicación de marca (no genérica)
- Experiencia de devolución que no degrade la relación con el cliente
- Sistema de fidelización digital que refleje los privilegios del mundo físico (acceso previo a colecciones, eventos, conserjería)

Termina con las 7 diferencias técnicas clave entre un e-commerce estándar y uno de lujo real, y cómo cada una impacta en la conversión y la fidelización de clientes premium.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir plataformas de e-commerce de moda de lujo con personalización avanzada, búsqueda visual y experiencias de compra premium.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseño de moda y colecciones asistido por IA',
                'description'      => 'Aprende a usar IA como herramienta creativa en el proceso de diseño de moda: desde la exploración de tendencias y la generación de conceptos hasta la presentación de colecciones y la comunicación del universo estético de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo de moda con experiencia en el proceso de diseño de colecciones, investigación de tendencias y presentación de universos estéticos a equipos comerciales e inversores. Quiero integrar la IA en mi proceso creativo de diseño de moda de forma que amplíe mi visión sin sustituir mi voz creativa.

**Mi contexto:**
Soy diseñador/a de moda, director/a creativo/a o responsable de diseño en una marca de moda. Trabajo en el desarrollo de colecciones desde la investigación de tendencias hasta los lookbooks y la presentación final. Quiero usar IA como asistente creativo que acelere algunas partes del proceso sin homogeneizar mi estética.

**Instrucción 1 — Investigación de tendencias con IA:**
Diseña un protocolo para usar IA en la fase de investigación de tendencias de moda:
- Cómo crear un brief de tendencias para IA que sea específico a mi ADN de marca
- Síntesis de referencias visuales: arquitectura, arte, cine, calle — cómo conectar territorios creativos distintos
- Análisis de tendencias de pasarela: qué está emergiendo, qué está en pico y qué está decayendo
- Mood boards conceptuales: cómo describir con palabras una estética para que la IA genere referencias útiles

**Instrucción 2 — Desarrollo de concepto de colección:**
Ayúdame a crear un proceso de desarrollo de concepto de colección con IA:
- Cómo definir el universo narrativo de una colección (el qué, el porqué y el para quién)
- Generación de familias de prendas: siluetas, paletas de color, texturas y materiales a explorar
- Naming de la colección: cómo generar nombres que tengan resonancia poética y comercial
- Coherencia interna: cómo verificar con IA que las piezas de la colección dialogan entre sí

**Instrucción 3 — Presentación creativa con IA:**
Crea materiales de presentación de una colección con IA:
- Estructura de una presentación de colección para prensa y compradores
- Textos de presentación de colección: el editorial, las notas de diseño y el comunicado de prensa
- Guión para un desfile o presentación de lookbook
- Cómo adaptar la narrativa de la colección para diferentes audiencias: prensa de moda, compradores retail, redes sociales y el cliente final

**Instrucción 4 — Diseño asistido por IA en el proceso técnico:**
Para las partes más técnicas del diseño, dame protocolos de uso de IA:
- Descripción técnica de prendas para el equipo de patronaje y producción
- Análisis de fit y proporciones: cómo evaluar con IA si una silueta está bien equilibrada
- Instrucciones para el equipo de muestra y producción que sean precisas y no ambiguas
- Gestión del range plan: cómo optimizar con IA el número de piezas, materiales y opciones de color

**Instrucción 5 — Identidad visual y comunicación de marca:**
Diseña con IA el manual de identidad visual de una colección o marca de moda que incluya:
- Paleta de color de temporada con sus nombres creativos y aplicaciones
- Tipografías y elementos gráficos que acompañen la colección
- Guía de fotografía: composición, luz, estilismo y casting que transmitan el universo de la colección
- Plantillas de comunicación para redes sociales que mantengan la coherencia estética

Termina con una reflexión honesta sobre los límites de la IA en el diseño de moda: qué puede hacer bien, qué hace mediocre y dónde el ojo humano del diseñador es insustituible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Integrar IA en el proceso creativo de diseño de moda: tendencias, concepto de colección, presentación y comunicación de marca.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para ventas y personalización en retail de lujo',
                'description'      => 'Aprende a usar IA para personalizar la experiencia de venta en retail de lujo, preparar interacciones con clientes VIP, gestionar relaciones de alta gama y maximizar el valor de cada cliente a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas de lujo y relaciones con clientes de alto patrimonio, con experiencia en marcas como Chanel, Hermès, Louis Vuitton o en joyería y relojería de alta gama. Quiero usar IA para elevar la experiencia de venta personalizada en mi punto de venta o canal de atención premium.

**Mi contexto:**
Soy responsable de ventas, client advisor o director de tienda en un retail de lujo o marca premium. Mis clientes son compradores de alto poder adquisitivo que esperan ser recordados, anticipados y sorprendidos positivamente. La relación con el cliente es el activo más valioso que tengo y la IA debe ayudarme a cultivarla, no a automatizarla de manera fría.

**Instrucción 1 — Perfil de cliente VIP con IA:**
Diseña un sistema para construir y mantener perfiles de clientes VIP con IA que incluya:
- Qué información capturar en cada interacción: preferencias, ocasiones de compra, prendas o piezas rechazadas, personas importantes en su vida
- Cómo organizar la información para que sea útil antes de una visita o llamada
- Señales de oportunidad: cumpleaños, aniversarios, nuevas colecciones afines al gusto del cliente
- Cómo usar IA para generar un resumen ejecutivo del cliente antes de cada interacción

**Instrucción 2 — Preparación de la venta consultiva de lujo:**
Crea protocolos de preparación con IA para diferentes tipos de interacciones de venta:
- Visita presencial en tienda: cómo llegar a la reunión sabiendo exactamente qué mostrar
- Llamada de seguimiento después de una compra: cómo hacer que se sienta especial sin ser invasivo
- Presentación de nueva colección a cliente VIP: cómo conectar las novedades con sus gustos específicos
- Gestión de una queja o devolución de un cliente VIP: cómo preservar la relación y convertirla en oportunidad

**Instrucción 3 — Comunicaciones escritas de lujo:**
Dame plantillas de comunicaciones escritas para clientes de lujo que incluyan:
- Nota de bienvenida para un nuevo cliente VIP (escrita a mano o en tarjeta de la marca)
- Email de presentación de una pieza pensada específicamente para él/ella
- Invitación a un evento privado de la maison
- Felicitación de cumpleaños o fecha especial que sea personal y no genérica
Cada plantilla debe tener el tono correcto para el lujo: cálido pero nunca familiar, atento pero nunca servil.

**Instrucción 4 — Upsell y cross-sell en el lujo:**
Diseña una estrategia de maximización de valor del cliente que sea elegante y no invasiva:
- Cuándo y cómo sugerir piezas complementarias sin presionar
- Cómo presentar el "completar la colección" o "la pieza que falta" de forma natural
- Estrategia de lista de espera para piezas exclusivas como herramienta de fidelización
- Cómo involucrar al cliente VIP en el proceso de personalización o bespoke

**Instrucción 5 — Métricas de relación de cliente de lujo:**
Dame un sistema de seguimiento de la relación con clientes VIP que incluya: frecuencia de contacto, valor de las últimas compras, tiempo sin interacción (señal de riesgo), net promoter individual y referidos generados. Cómo usar IA para identificar cuándo una relación se está enfriando y qué hacer al respecto.

Termina con los 6 errores de venta que alejan definitivamente a un cliente de lujo y cómo la IA puede ayudar a evitarlos sin quitar el factor humano que hace grande al retail de lujo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Personalizar la experiencia de venta en retail de lujo, gestionar relaciones VIP y maximizar el valor del cliente con IA.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de producto y predicción de inventario en moda',
                'description'      => 'Usa IA para optimizar la gestión de colecciones, predecir la demanda de inventario, tomar decisiones de compra más precisas y reducir el stock no vendido en marcas de moda y retail de lujo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de producto y merchandising con experiencia en planificación de colecciones, gestión de inventario y optimización de buying para marcas de moda premium y retail de lujo. Quiero usar IA para tomar mejores decisiones de producto, reducir el waste y maximizar la eficiencia del inventario.

**Mi contexto:**
Soy product manager, merchandiser o buyer en una marca de moda o retailer de lujo. Gestiono colecciones con miles de SKUs, trabajo con tiempos de producción de 6-12 meses de antelación y el costo de equivocarse es muy alto: el exceso de stock destruye la exclusividad; el faltante destruye las ventas. Necesito IA para mejorar la precisión de mis decisiones.

**Instrucción 1 — Predicción de demanda con IA:**
Diseña una metodología de predicción de demanda para una colección de moda que incluya:
- Variables a analizar: historial de ventas por categoría/color/talla, tendencias de búsqueda, comportamiento de la competencia, calendario de events y temporadas
- Cómo usar datos de preventa y listas de espera para ajustar el plan de producción
- Modelo de distribución de demanda por talla: cómo construir la curva de tallas óptima por mercado y canal
- Alertas de sobrecompra o infracompra: cuándo actuar y cómo ajustar pedidos en producción

**Instrucción 2 — Range plan y selección de colección con IA:**
Crea un proceso de toma de decisiones de range planning con IA que incluya:
- Cómo evaluar qué piezas de la temporada anterior deben continuarse, modificarse o descartarse
- Análisis de sell-through por categoría: qué tipos de producto venden bien y cuáles estancan inventario
- Optimización del mix de precio: proporción de piezas de entrada, media y alta gama en la colección
- Decisiones de profundidad vs amplitud: cuándo mejor ir a pocos estilos con mucho stock vs muchos estilos con poco stock

**Instrucción 3 — Gestión de inventario en tiempo real:**
Diseña un sistema de alertas de inventario con IA para el retail de lujo que incluya:
- Alertas de agotamiento prematuro: estilos que venderán antes de final de temporada con tiempo de reposición
- Alertas de sobrestock: piezas que necesitarán descuento si no se activa una acción de marketing
- Transferencias entre tiendas: cuándo mover inventario de una ubicación a otra para optimizar sell-through
- Flash reports de ventas: cómo interpretar los primeros 3 días de una colección para ajustar acciones

**Instrucción 4 — Gestión de descuentos y outlets en el lujo:**
Para el lujo, los descuentos son un arma de doble filo. Dame una estrategia con IA para:
- Decidir cuándo y cuánto descontar sin dañar la percepción de marca
- Distribución de stock no vendido a outlets o canales alternativos de forma controlada
- Gestión de privadas y ventas especiales para clientes VIP como alternativa al descuento público
- Cómo calcular el costo de descartar stock vs el costo de venderlo con descuento profundo

**Instrucción 5 — Reporting de producto para el comité directivo:**
Crea la estructura de un informe mensual de producto para el equipo directivo que incluya: sell-through por canal y categoría, cobertura de inventario por semana, oportunidades de reordering y riesgos de sobrestock, y recomendaciones de acción para las próximas 4 semanas.

Termina con las 5 señales de datos que indican que una colección está teniendo un éxito o fracaso mayor al esperado en las primeras semanas de venta, y las acciones inmediatas que debe tomar el equipo de producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Predecir demanda de inventario, optimizar range plans y tomar decisiones de buying más precisas en moda con IA.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para talento y cultura en empresas de moda de lujo',
                'description'      => 'Aprende a usar IA para atraer, desarrollar y retener talento creativo en empresas de moda de lujo, preservando la cultura artesanal y la identidad de marca mientras se moderniza la gestión de personas.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief People Officer especializado en empresas de moda de lujo y retail premium, con experiencia en la gestión del equilibrio entre tradición artesanal e innovación, en la atracción de talento creativo y en la construcción de culturas de excelencia. Quiero usar IA para modernizar la gestión de personas sin perder el alma de la marca.

**Mi contexto:**
Soy directora/director de RRHH o responsable de personas en una empresa de moda de lujo o retail premium. Gestiono perfiles muy diversos: desde artesanos y diseñadores creativos hasta perfiles digitales y comerciales. La cultura de la empresa es un activo de marca que debo preservar mientras el negocio se transforma digitalmente.

**Instrucción 1 — Atracción de talento creativo con IA:**
Diseña una estrategia de employer branding y atracción de talento para el sector moda de lujo que incluya:
- Cómo comunicar la cultura y los valores de la maison para atraer a los mejores perfiles creativos
- Descripción de puestos que transmitan la exclusividad y el propósito de la marca sin ser elitistas
- Estrategia de presencia en las escuelas de diseño y moda más relevantes
- Cómo usar IA para filtrar y pre-evaluar portfolios creativos de manera eficiente y objetiva

**Instrucción 2 — Onboarding de la cultura de marca:**
Crea un programa de onboarding con IA para nuevos empleados en una empresa de lujo que incluya:
- Inmersión en la historia, valores y savoir-faire de la maison
- Entendimiento del cliente VIP: quién es, qué espera y cómo tratarlo
- Formación en los estándares de excelencia de la marca: presentación personal, comunicación, atención al detalle
- Mentoring con artesanos o embajadores internos de la cultura de la empresa

**Instrucción 3 — Gestión del talento creativo:**
Dame un framework para gestionar perfiles creativos (diseñadores, artesanos, directores creativos) con IA que sea diferente al framework estándar corporativo:
- Evaluación de desempeño para creativos: qué medir y cómo, más allá de los KPIs comerciales
- Planes de desarrollo individuales que nutran la creatividad sin estandarizarla
- Cómo gestionar el ego y la sensibilidad de los perfiles más talentosos
- Retención de conocimiento artesanal: cómo capturar y transferir el saber hacer de los maestros artesanos

**Instrucción 4 — Cultura de excelencia y formación continua:**
Diseña un programa de formación continua para el equipo de ventas y atención al cliente de lujo que incluya:
- Formación en producto: historia, materiales, procesos artesanales y diferenciación frente a la competencia
- Protocolo de atención al cliente VIP: el ritual de la venta de lujo, desde la bienvenida hasta el seguimiento
- Roleplay de situaciones difíciles: clientes exigentes, quejas, comparaciones con competencia
- Evaluación y certificación interna de la excelencia en la atención al cliente

**Instrucción 5 — Gestión del cambio cultural en empresas de lujo:**
Para empresas de lujo en transformación digital, dame un protocolo de gestión del cambio que preserve lo mejor de la cultura tradicional mientras integra nuevas formas de trabajar:
- Cómo comunicar el cambio a artesanos y perfiles más tradicionales sin generar rechazo
- Equilibrio entre la digitalización de procesos y el savoir-faire artesanal como valor de marca
- Cómo identificar y empoderar a los embajadores internos del cambio

Termina con los 5 rasgos de cultura organizacional que distinguen a las mejores maisons de lujo y cómo la IA puede ayudar a detectarlos y preservarlos durante el crecimiento de la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atraer y retener talento creativo, preservar la cultura artesanal y gestionar personas en empresas de moda de lujo con IA.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para gestión financiera y análisis de rentabilidad en retail de lujo',
                'description'      => 'Usa IA para analizar la rentabilidad por producto, canal y cliente en el retail de lujo, optimizar los márgenes de colección y construir modelos financieros que soporten las decisiones de inversión de la maison.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO especializado en empresas de moda de lujo y retail premium con experiencia en la estructura de costos peculiar del sector (materiales de alta gama, artesanía, imagen de marca), en la gestión de márgenes y en el análisis financiero de colecciones. Quiero usar IA para mejorar la visibilidad financiera y la velocidad de decisión.

**Mi contexto:**
Soy CFO, controller o director financiero de una empresa de moda de lujo o retailer premium. La estructura financiera del lujo es peculiar: los márgenes brutos son altos, pero los costos de imagen, artesanía, tiendas flagship y personal de excelencia son también muy elevados. Necesito un sistema de análisis financiero que entienda estas particularidades.

**Instrucción 1 — Análisis de rentabilidad por colección y producto:**
Diseña un modelo de análisis de rentabilidad de colección con IA que incluya:
- Cálculo del margen real por SKU: material, artesanía, producción, overheads de diseño y packaging de lujo
- Análisis de la curva de ventas: cuándo se recupera la inversión de una colección y cuándo empieza a generar pérdidas por falta de sell-through
- Rentabilidad por canal: tienda propia vs multimarca vs e-commerce vs outlets — cuál es el más rentable y cuál es estratégicamente necesario aunque no sea el más rentable
- Rentabilidad por mercado geográfico: cómo ajustar pricing por región considerando costos de distribución y posicionamiento

**Instrucción 2 — Modelo financiero de expansión de tiendas:**
Para la decisión de abrir una nueva tienda flagship o boutique, dame un modelo de análisis financiero que incluya:
- Inversión total: capex de obra, decoración de lujo, inventario de apertura, recursos humanos
- Proyección de ventas a 3 y 5 años con escenarios conservador, base y optimista
- Punto de equilibrio y tiempo de recuperación de la inversión
- Riesgo de canibalización entre canales y tiendas cercanas
- Métricas de seguimiento post-apertura: ventas por metro cuadrado, ticket medio, clientes nuevos vs recurrentes

**Instrucción 3 — Gestión de márgenes de lujo con IA:**
Crea un sistema de alerta y optimización de márgenes que incluya:
- Monitorización del margen bruto por categoría en tiempo real
- Alertas cuando una categoría cae del umbral de margen mínimo definido
- Análisis de impacto de descuentos en el margen del período
- Recomendaciones de pricing dinámico que no dañen la percepción de exclusividad

**Instrucción 4 — Reporting financiero para el consejo de una maison:**
Diseña la estructura de un comité financiero trimestral para una maison de lujo que incluya:
- Performance de colección: sell-through, márgenes, ventas por canal y geografía
- Posición de caja y financiación: liquidez, deuda, capacidad de inversión para la próxima temporada
- Comparativa con competencia y posición en el mercado de lujo
- Decisiones de inversión pendientes con análisis financiero de soporte

**Instrucción 5 — Valoración y KPIs financieros de lujo:**
Dame una guía de los KPIs financieros específicos del sector lujo que los inversores y directivos de una maison deben monitorizar: EBITDA ajustado, revenue por metro cuadrado de boutique, customer lifetime value de un cliente VIP, ROI de campañas de imagen (no de performance) y cobertura de inventario óptima.

Termina con las 5 decisiones financieras que más destruyen valor en una empresa de lujo y cómo la IA puede ayudar a detectarlas antes de que sea demasiado tarde.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar rentabilidad de colecciones, optimizar márgenes y construir modelos financieros para empresas de moda de lujo con IA.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para protección de marca y propiedad intelectual en moda',
                'description'      => 'Aprende a usar IA para proteger los activos intangibles de una marca de moda: derechos de diseño, patrones, marcas registradas, combate a la falsificación y gestión de licencias internacionales.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual del sector moda y lujo, con experiencia en la protección de marcas, diseños industriales, derechos de autor aplicados a la moda y la lucha contra la falsificación en mercados internacionales. Quiero usar IA para construir un sistema robusto de protección de los activos intangibles de mi marca.

**Mi contexto:**
Soy directora/director jurídico, responsable de IP o abogado in-house de una marca de moda. Gestiono un portfolio de marcas registradas, diseños protegidos, acuerdos de licencia y me enfrento a la falsificación constante en mercados físicos y digitales. Necesito usar IA para ser más proactivo y eficiente en la protección de mi marca.

**Instrucción 1 — Auditoría y estrategia de protección de propiedad intelectual:**
Diseña un framework de auditoría de IP para una marca de moda que incluya:
- Inventario completo de activos de IP: marcas, diseños, derechos de autor, trade secrets (procesos artesanales)
- Análisis de brechas: qué activos no están suficientemente protegidos y en qué mercados
- Estrategia de registro prioritario por mercado: dónde registrar primero y por qué
- Cómo usar IA para monitorizar el estado de tus registros y fechas de renovación críticas

**Instrucción 2 — Detección y combate a la falsificación con IA:**
Crea un sistema de vigilancia de falsificación que incluya:
- Monitorización online: cómo usar IA para detectar falsificaciones en marketplaces, redes sociales y webs de reventa
- Protocolo de takedown: proceso estándar para solicitar la retirada de contenido o productos falsificados en plataformas
- Gestión de mercados físicos: cómo coordinar con aduanas y fuerzas de seguridad para operaciones antipiratería
- Métricas de impacto de la falsificación: cómo estimar el daño económico y reputacional para incluirlo en denuncias y estrategia legal

**Instrucción 3 — Protección del diseño de moda:**
Dame una guía de protección de los diseños específicos de moda que incluya:
- Qué es protegible por diseño industrial y qué no en la UE, EE.UU. y mercados asiáticos clave
- Cómo documentar el proceso creativo para poder defender la originalidad ante tribunales
- Diferencia entre protección de diseño registrado y no registrado: cuándo cada uno es suficiente
- Gestión de litigios de diseño: cómo preparar un caso con evidencia y qué aporta la IA al análisis

**Instrucción 4 — Gestión de licencias de marca:**
Para marcas de moda que otorgan licencias de su nombre o diseños, dame un sistema de gestión de licencias con IA que incluya:
- Due diligence del licenciatario: qué analizar antes de firmar un acuerdo de licencia
- Cláusulas esenciales de un contrato de licencia de moda: calidad, exclusividad, territorios, royalties, terminación
- Monitorización del cumplimiento del licenciatario: cómo verificar con IA que el producto bajo licencia mantiene los estándares de la marca
- Gestión de conflictos con licenciatarios incumplidores

**Instrucción 5 — Defensa de la marca en el entorno digital:**
El mundo digital ha multiplicado los desafíos de protección de marca. Dame un protocolo para:
- Proteger la marca en SEO: cómo actuar cuando competidores usan tu nombre como keyword
- Gestión de impersonación en redes sociales: cómo detectar y eliminar cuentas que suplantan la marca
- Protección en el metaverso y NFTs: qué hacer cuando tu marca aparece en activos digitales no autorizados
- Política de uso de la marca por terceros: embajadores, influencers, revendedores autorizados

Termina con los 5 errores más costosos en protección de IP que cometen las marcas de moda cuando empiezan a crecer internacionalmente y cómo evitarlos con planificación y uso de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Proteger marcas registradas, combatir la falsificación y gestionar licencias internacionales en el sector moda con IA.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para atención al cliente VIP y experiencia de lujo',
                'description'      => 'Aprende a usar IA para diseñar y ejecutar experiencias de atención al cliente de máxima excelencia en el retail de lujo: desde la gestión de clientes VIP hasta la resolución elegante de problemas sin perder la relación.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de experiencia de cliente y servicio de excelencia especializado en el sector lujo y retail de alta gama, con experiencia en marcas icónicas y en la formación de equipos de atención que crean recuerdos duraderos. Quiero usar IA para elevar el nivel de servicio de mi equipo sin perder el factor humano que define al lujo.

**Mi contexto:**
Soy responsable de customer service, director de tienda o manager de experiencia de cliente en un retail de lujo. Mi equipo atiende a clientes con expectativas extraordinariamente altas que no toleran errores, esperas ni respuestas genéricas. Cada interacción es una oportunidad de fidelizar o perder a un cliente de por vida.

**Instrucción 1 — Protocolos de atención VIP con IA:**
Diseña un sistema de atención al cliente VIP con IA que incluya:
- Protocolo de reconocimiento del cliente VIP: cómo identificarlo antes de que llegue, en el momento de la llegada y en cada canal de contacto
- Preparación de la interacción: qué debe saber el cliente advisor antes de atender a un VIP (historial, preferencias, último contacto, contexto personal relevante)
- Rituals de bienvenida y despedida adaptados a diferentes niveles de cliente
- Protocolo de atención cuando algo sale mal: cómo gestionar un problema de un cliente VIP sin perder la elegancia y la relación

**Instrucción 2 — Resolución de incidencias en el lujo:**
Para las siguientes situaciones de crisis de servicio, dame el protocolo de respuesta de lujo:
- Un producto premium llega dañado al cliente: protocolo de comunicación, compensación y recuperación de la relación
- Un cliente VIP espera más de lo prometido por un producto personalizado
- Un error de stock deja al cliente sin el producto que había reservado
- Una queja en redes sociales de un cliente de alto perfil
Para cada caso: tono de comunicación, acciones concretas, quién escala y cómo documentar para aprender.

**Instrucción 3 — Personalización del servicio post-venta:**
Crea un programa de seguimiento post-venta con IA para clientes de lujo que incluya:
- Contacto post-compra: cuándo, cómo y qué decir después de una venta importante
- Mantenimiento de la relación en períodos sin compra: cómo seguir presente de manera elegante
- Felicitaciones y gestos en momentos clave del cliente: cumpleaños, aniversarios, logros personales
- Cómo gestionar el silencio de un cliente que ha dejado de comprar: cuándo y cómo reactivar la relación

**Instrucción 4 — Formación de equipos de atención de lujo con IA:**
Diseña un programa de formación de equipos de atención al cliente de lujo con IA que incluya:
- Módulo de cultura de la excelencia: qué significa el servicio de lujo y por qué importa cada detalle
- Simulaciones de conversación con IA: escenarios de clientes difíciles, exigentes o emocionalmente complejos
- Evaluación del desempeño en atención: cómo medir la calidad del servicio más allá de los tiempos de respuesta
- Biblioteca de casos de buenas prácticas: situaciones reales (anonimizadas) de servicio excepcional

**Instrucción 5 — Métricas de experiencia de lujo:**
Dame un sistema de medición de la experiencia de cliente apropiado para el lujo, que vaya más allá del NPS y el tiempo de resolución:
- Métricas de relación: profundidad de la relación por cliente, frecuencia de contacto iniciado por el cliente, referidos VIP
- Métricas de recuperación: tasa de recuperación de clientes tras una incidencia, cambio en gasto post-recuperación
- Métricas de sentimiento: análisis de comunicaciones con IA para detectar señales de enfriamiento de la relación

Termina con los 7 estándares de excelencia que distinguen el servicio de las mejores maisons del mundo y cómo implementarlos en cualquier empresa de lujo que quiera elevar su nivel.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar protocolos de atención VIP, resolver incidencias con elegancia y formar equipos de excelencia en retail de lujo con IA.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para freelancers especializados en la industria de la moda',
                'description'      => 'Aprende a usar IA para posicionarte como freelancer especializado en moda, conseguir clientes de marcas de lujo y premium, crear propuestas irresistibles y construir una reputación de experto en el sector más competitivo del mundo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocios especializado en freelancers y consultores independientes del sector moda y lujo, con experiencia en estrategia de posicionamiento, captación de clientes de alto valor y construcción de reputación de experto en una industria donde las relaciones y la confianza lo son todo.

**Mi contexto:**
Soy freelancer con especialización en moda o retail: diseñador, consultor de marca, fotógrafo editorial, estilista, copywriter de lujo, consultor de marketing de moda o similar. Quiero usar IA para crecer profesionalmente, conseguir mejores clientes y gestionar mi negocio de manera más estratégica.

**Instrucción 1 — Posicionamiento como experto en moda con IA:**
Ayúdame a construir un posicionamiento de nicho como freelancer en el sector moda que incluya:
- Definición de mi especialidad única: qué combinación de habilidades me hace diferente en el mercado
- Cómo comunicar mi propuesta de valor para marcas de lujo sin parecer masivo o generalista
- Construcción de mi marca personal en el sector: portfolio, presencia online, presencia en eventos del sector
- Cómo usar IA para crear contenido de autoridad que demuestre mi expertise sin revelar los secretos de mis clientes

**Instrucción 2 — Captación de clientes de marcas de moda premium:**
Diseña una estrategia de captación de clientes para freelancers en el sector moda que incluya:
- Dónde están mis clientes ideales: eventos, ferias (Who's Next, Première Vision, Pitti), publicaciones y comunidades del sector
- Cómo hacer un outreach que no suene desesperado y esté a la altura de la cultura del lujo
- Propuesta inicial: cómo presentar un primer proyecto de bajo riesgo que demuestre mi valor antes de un encargo mayor
- Uso de IA para investigar a fondo una marca antes de contactarla: historia, posicionamiento, retos actuales, competencia

**Instrucción 3 — Propuestas y cotizaciones para el sector lujo:**
Dame una plantilla de propuesta profesional para el sector moda de lujo que incluya:
- Estructura de la propuesta: diagnóstico, objetivos, metodología, entregables, cronograma, inversión
- Cómo presentar el precio sin que sea el centro de la conversación
- Argumentos de valor que justifican una tarifa premium: experiencia, especialización, red de contactos, resultados anteriores
- Cómo usar IA para personalizar cada propuesta al lenguaje y los valores de la marca cliente

**Instrucción 4 — Gestión de proyectos en el sector moda:**
El sector moda tiene ritmos y exigencias muy particulares. Dame un sistema de gestión de proyectos freelance que incluya:
- Calendario de la industria: Fashion Weeks, temporadas de compras, deadlines de producción — cómo organizarme alrededor de estos hitos
- Gestión de clientes exigentes en el lujo: cómo mantener la calidad bajo presión sin comprometer el resultado
- Contratos: cláusulas esenciales para proyectos en moda (derechos de imagen, confidencialidad de colecciones, exclusividad temporal)
- Cómo usar IA para acelerar las partes más repetitivas del proyecto sin perder la calidad creativa

**Instrucción 5 — Crecimiento y escalabilidad como freelancer de moda:**
Dame una hoja de ruta de 2 años para crecer como freelancer especializado en moda que incluya:
- Cómo pasar de proyectos puntuales a relaciones de retainer con marcas
- Cuándo tiene sentido subir las tarifas y cómo comunicarlo a clientes actuales
- Cómo construir un equipo de colaboradores de confianza para proyectos más grandes
- Cómo crear activos de conocimiento (metodologías, frameworks, cursos) que generen ingresos pasivos en el sector

Termina con las 5 redes o comunidades del sector moda donde los freelancers más exitosos consiguen sus mejores clientes y cómo participar en ellas de manera estratégica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse como freelancer experto en moda, captar clientes de lujo y construir un negocio rentable en la industria de la moda.',
                'vote_score'       => 35,
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
