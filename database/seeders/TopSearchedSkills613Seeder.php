<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills613Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital para cervecería artesanal con IA',
                'description'      => 'Usa IA para crear campañas de marketing auténticas que conecten con los amantes de la cerveza artesanal y diferencien tu marca en un mercado en crecimiento.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en el sector de bebidas artesanales, con profundo conocimiento de la cultura cervecera, las tendencias de consumo y las mejores prácticas de comunicación para marcas craft.

contexto de la tarea:
Necesito desarrollar una estrategia de marketing digital completa para mi cervecería artesanal. Mi marca se diferencia por [describir propuesta de valor: recetas tradicionales, ingredientes locales, proceso de fermentación único, etc.], y mi público objetivo son [describir audiencia: entusiastas de 25-40 años, amantes de la gastronomía local, consumidores conscientes, etc.].

instrucción principal:
Diseña un plan de marketing digital de 90 días que incluya los siguientes elementos:

1. POSICIONAMIENTO DE MARCA ARTESANAL
Analiza los elementos diferenciadores de una cervecería artesanal y crea una narrativa de marca auténtica que comunique:
- La historia y filosofía detrás de la producción artesanal
- Los valores de calidad, tradición e innovación
- El vínculo con la comunidad local y los productores de materias primas
- La experiencia sensorial única que ofrece cada variedad

2. ESTRATEGIA DE CONTENIDOS POR CANAL
Desarrolla un calendario editorial detallado para:
- Instagram y TikTok: contenido visual del proceso de elaboración, behind the scenes de la cervecería, maridajes, catas comentadas
- Facebook: eventos, promociones para distribuidores y hostelería, noticias del sector
- Newsletter mensual: novedades de temporada, recetas de maridaje, historia de cada lúpulo o malta utilizada
- Blog/web: artículos SEO sobre cultura cervecera artesanal, guías de estilos, entrevistas con maestros cerveceros

3. CAMPAÑAS DE TEMPORADA
Proporciona ideas detalladas para campañas alineadas con momentos clave:
- Verano: cervezas de baja graduación y refrescantes, festivales al aire libre
- Otoño: cervezas de temporada con ingredientes de la cosecha, maduraciones especiales
- Navidad: ediciones limitadas, packs de regalo, cenas maridaje
- Primavera: lanzamientos de nuevas referencias, visitas guiadas a la cervecería

4. GESTIÓN DE COMUNIDAD Y EMBAJADORES
Diseña una estrategia para construir comunidad alrededor de la marca:
- Programa de embajadores entre influencers de gastronomía y cerveza artesanal
- Club de suscripción mensual con acceso exclusivo a ediciones limitadas
- Eventos de cata y educación cervecera para fidelizar clientes
- Gestión de reseñas en Untappd, Google My Business y Tripadvisor

5. MÉTRICAS Y KPIs
Define los indicadores clave de rendimiento para cada canal y canal, incluyendo engagement rate, alcance, conversiones a venta directa y distribución, y retorno sobre la inversión publicitaria.

tarea final:
Redacta los primeros 5 posts para Instagram con captions de al menos 150 palabras cada uno, incluyendo hashtags relevantes para el sector cervecero artesanal en España y Latinoamérica. Cada post debe contar una historia diferente: el maestro cervecero, el ingrediente estrella, el proceso de fermentación, la comunidad de clientes y la edición limitada del mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear estrategia de marketing digital y contenidos para cervecería artesanal',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma e-commerce para cervecería artesanal con IA',
                'description'      => 'Diseña y desarrolla la arquitectura técnica de una tienda online para cervecería artesanal con gestión de inventario, suscripciones y cumplimiento legal de venta de alcohol.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software con experiencia en e-commerce para el sector de bebidas alcohólicas, especializado en el cumplimiento normativo de venta online de alcohol y en plataformas de suscripción para productos artesanales.

contexto del proyecto:
Necesito diseñar la arquitectura técnica completa de una plataforma e-commerce para una cervecería artesanal que quiere vender directamente al consumidor (D2C) a través de internet. La cervecería produce entre 20 y 50 referencias diferentes, con ediciones limitadas estacionales.

objetivo técnico:
Proporciona una guía de desarrollo completa que incluya:

1. ARQUITECTURA DEL SISTEMA
Diseña la arquitectura técnica recomendada considerando:
- Stack tecnológico: evalúa opciones entre Shopify Plus con customizaciones, WooCommerce, o desarrollo a medida con Laravel/Next.js
- Base de datos: estructura de tablas para productos (con atributos específicos de cerveza: IBU, ABV, estilo, ingredientes), variantes, inventario por lote de producción
- APIs de terceros necesarias: pasarelas de pago, verificación de edad, logística, ERP de producción
- Gestión de inventario en tiempo real vinculado al proceso productivo

2. FUNCIONALIDADES ESPECÍFICAS DEL SECTOR CERVECERO
Desarrolla las especificaciones técnicas de:
- Verificación de edad obligatoria con integración de sistemas de identidad digital
- Restricciones geográficas de envío según legislación de cada comunidad autónoma
- Gestión de temperatura en el carrito de compra (indicadores de envío refrigerado)
- Etiquetado digital con información nutricional y alérgenos según normativa europea
- Sistema de lotes y trazabilidad para gestión de devoluciones y garantía de calidad

3. MODELO DE SUSCRIPCIÓN
Diseña el backend para un club de suscripción mensual:
- Tipos de suscripción: básico (4 cervezas), premium (8 cervezas), experto (12 con maridaje)
- Lógica de selección automática de referencias según perfil del suscriptor
- Sistema de pausas, cambios y cancelaciones con gestión de retención
- Cobros recurrentes con Stripe y manejo de tarjetas caducadas
- Dashboard del suscriptor con historial, valoraciones y preferencias

4. INTEGRACIÓN CON SISTEMAS DE PRODUCCIÓN
Explica cómo conectar la plataforma con:
- Software de gestión de producción cervecera (Ekos, OrchestratedBEER)
- Control de calidad por lote y alertas de rotura de stock anticipada
- Planificación de producción basada en demanda y pedidos pendientes

5. SEGURIDAD Y RENDIMIENTO
Proporciona checklist de seguridad y optimizaciones de rendimiento específicas para e-commerce de alcohol, incluyendo protección contra compras por menores de edad, auditoría de accesos y optimización de tiempos de carga para catálogos de productos con imágenes de alta calidad.

tarea de implementación:
Escribe el código de la migración de base de datos para la tabla de productos cerveceros en Laravel, con todos los campos necesarios, y el modelo Eloquent correspondiente con sus relaciones, scopes y accessors más útiles para este tipo de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura técnica de e-commerce para venta directa de cerveza artesanal',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad visual y etiquetas para cerveza artesanal con IA',
                'description'      => 'Desarrolla la identidad visual completa de una marca de cerveza artesanal, incluyendo etiquetas, packaging y materiales de punto de venta.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico especializado en branding de bebidas artesanales, con experiencia en packaging de cerveza, diseño de etiquetas y creación de identidades visuales para marcas craft que deben destacar en lineales de supermercado, bares especializados y tiendas online.

contexto del proyecto de diseño:
Necesito crear la identidad visual completa para una cervecería artesanal. La cervecería se llama [nombre] y su concepto es [describir concepto: rural/urbana, tradicional/moderna, con raíces en una región específica, temática fantástica, etc.]. Produce [número] referencias regulares y ediciones estacionales.

objetivo creativo:
Guíame paso a paso en el proceso de creación de la identidad visual con los siguientes entregables:

1. ESTRATEGIA DE MARCA VISUAL
Antes de diseñar, define:
- Territorio visual de la marca: qué emociones y valores debe transmitir visualmente
- Análisis de referentes: marcas de cerveza artesanal con identidades visuales potentes (BrewDog, Estrella Damm Inedit, Garage Beer Co.)
- Público objetivo y cómo influye en las decisiones estéticas
- Diferenciación visual respecto a competidores directos en el mercado local

2. SISTEMA DE IDENTIDAD
Describe detalladamente los componentes del sistema de identidad:
- Logotipo: opciones de concepto (wordmark, lettermark, símbolo + texto), estilo recomendado
- Paleta cromática primaria y secundaria con valores hexadecimales, Pantone y CMYK para impresión
- Tipografías: familia principal para logotipo, secundaria para textos, terciaria para datos técnicos
- Elementos gráficos de apoyo: texturas, tramas, ilustraciones, iconografía

3. DISEÑO DE ETIQUETAS POR ESTILO
Para cada tipo de cerveza (lager, ale, IPA, stout, weizen, etc.) proporciona:
- Concepto visual diferenciador que mantenga coherencia con la marca global
- Layout de la etiqueta frontal con jerarquía de información: nombre comercial, estilo, ABV
- Etiqueta trasera con ingredientes, alérgenos, información nutricional y código QR
- Recomendaciones de materiales: etiqueta autoadhesiva, papel, laminados, acabados especiales
- Especificaciones técnicas para imprenta: resolución, perfil de color, sangrado

4. PACKAGING COMPLEMENTARIO
Diseña la línea visual para:
- Caja de 6 y 12 unidades con ventana de exhibición
- Pack regalo para Navidad con tejido de papel kraft
- Growler (jarra reutilizable) con serigrafía
- Maletín de presentación para distribuidores y hostelería

5. MATERIALES PUNTO DE VENTA
Especifica el diseño de:
- Carteles para bares con la carta de cervezas disponibles
- Display de mostrador con presentación de referencias
- Roll-up para ferias y festivales cerveceros
- Materiales digitales: mockups para redes sociales, banners para tienda online

tarea práctica:
Redacta un briefing creativo completo de 500 palabras para compartir con un estudio de diseño o freelancer, describiendo con precisión la personalidad visual de la marca, los referentes estéticos, los colores y emociones que debe evocar, y los requisitos técnicos de los entregables esperados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear identidad visual y sistema de etiquetado para cerveza artesanal',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas B2B para distribución de cerveza artesanal con IA',
                'description'      => 'Diseña un proceso de ventas B2B para colocar tu cerveza artesanal en bares, restaurantes, hoteles y tiendas especializadas con argumentarios y materiales de presentación.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial con 15 años de experiencia en distribución de bebidas artesanales, especializado en la apertura de cuentas B2B en el canal HORECA (hoteles, restaurantes, cafeterías) y en tiendas especializadas de delicatessen y alimentación premium.

contexto comercial:
Mi cervecería artesanal quiere expandir su distribución más allá de la venta directa y necesita un proceso de ventas B2B estructurado para [definir mercado objetivo: ciudad, región, nacional]. Tenemos [número] referencias, con precio de salida de fábrica entre [rango de precios] y margen para el canal de distribución del [porcentaje]%.

objetivo de ventas:
Desarrolla un manual de ventas B2B completo que incluya:

1. SEGMENTACIÓN Y PRIORIZACIÓN DE CLIENTES
Clasifica los canales de venta según su potencial:
- Canal HORECA premium: restaurantes con carta de cervezas artesanales, gastrobares, hoteles boutique, rooftops
- Tiendas especializadas: tiendas de delicatessen, colmados gourmet, vinotecas con sección de cerveza
- Cadenas de supermercados: estrategia diferenciada para cadenas regionales vs nacionales
- Distribuidores mayoristas: criterios para seleccionar distribuidores alineados con los valores craft
- E-commerce de terceros: marketplaces especializados en bebidas artesanales

2. ARGUMENTARIO DE VENTAS POR CANAL
Crea scripts de venta específicos para cada tipo de cliente, incluyendo:
- Apertura de la conversación y generación de interés en 60 segundos
- Propuesta de valor diferenciadora respecto a cervezas industriales
- Manejo de las objeciones más frecuentes: precio, rotación, logística, almacenamiento
- Cierre de la primera venta y establecimiento de pedido de prueba

3. MATERIALES DE PRESENTACIÓN
Define el kit de ventas que debe llevar el comercial:
- Dossier de marca con historia, proceso productivo y valores artesanales
- Carta de productos con fichas técnicas de cada referencia (estilo, ABV, IBU, maridaje recomendado)
- Lista de precios por canal con condiciones de pago y volúmenes mínimos
- Muestras de producto y protocolo de cata para el primer contacto
- Testimoniales de otros establecimientos que ya distribuyen la cerveza

4. PROCESO DE SEGUIMIENTO Y FIDELIZACIÓN
Diseña el proceso post-venta:
- Frecuencia y contenido de las visitas de mantenimiento de cuenta
- Programa de apoyo al punto de venta: materiales, formación para camareros, eventos de cata
- Sistema de gestión de pedidos y logística de entrega
- Métricas para evaluar la salud de cada cuenta (rotación, frecuencia de pedido, tendencia)

5. CRM Y GESTIÓN DE PIPELINE
Recomienda cómo estructurar el CRM (HubSpot, Pipedrive, Notion) para:
- Registrar información relevante de cada establecimiento y contacto clave
- Gestionar las etapas del pipeline: prospecto, contactado, demo realizada, prueba, cliente activo
- Alertas automáticas para seguimientos y renovaciones de acuerdos

tarea inmediata:
Escribe el guion completo de la primera llamada telefónica a un restaurante de cocina de mercado para presentar nuestra cerveza artesanal, con todas las posibles objeciones y respuestas, en formato de árbol de conversación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Manual de ventas B2B para distribución en canal HORECA y tiendas especializadas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en cervecería artesanal con IA',
                'description'      => 'Aplica metodologías de product management al desarrollo y lanzamiento de nuevas referencias de cerveza artesanal, desde la ideación hasta el go-to-market.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en empresas de consumo artesanal y alimentación premium, especializado en aplicar metodologías ágiles de desarrollo de producto al lanzamiento de nuevas referencias en el sector cervecero.

contexto del producto:
Quiero lanzar una nueva referencia de cerveza artesanal que responda a una tendencia emergente del mercado [ej: cervezas sin alcohol premium, cervezas con bajo contenido en calorías, cervezas con ingredientes botánicos locales, etc.]. El objetivo es validar el concepto antes de invertir en la producción a gran escala.

objetivo de producto:
Diseña el proceso completo de desarrollo de producto aplicando PM best practices:

1. INVESTIGACIÓN Y DESCUBRIMIENTO
Diseña el plan de investigación para validar la oportunidad:
- Encuestas cuantitativas a clientes actuales y potenciales sobre preferencias de consumo
- Entrevistas cualitativas con bartenders, sommeliers de cerveza y consumidores entusiastas
- Análisis de datos de venta propios: qué referencias rotan más, en qué canales, en qué temporada
- Benchmark de nuevas referencias de competidores directos e internacionales
- Análisis de tendencias en Untappd, redes sociales y publicaciones del sector

2. DEFINICIÓN DEL PRODUCTO
Redacta el Product Requirements Document (PRD) para la nueva referencia:
- Propuesta de valor única y diferenciación clara en el mercado
- Perfil organoléptico objetivo: color, aroma, sabor, amargor, carbonatación
- Ingredientes clave y su historia/procedencia (en línea con tendencias de transparencia)
- Rango de precio objetivo por canal de distribución
- Restricciones técnicas de producción y capacidad de la cervecería

3. PROCESO DE DESARROLLO ITERATIVO
Adapta un proceso de desarrollo ágil a la producción cervecera:
- Sprint de receta: ciclos de prueba de 2 semanas con el maestro cervecero
- MVP de producción: primer lote pequeño para validación con panel de cata
- Beta testing: distribución limitada a 10 establecimientos de confianza con recogida de feedback estructurado
- Iteración de receta basada en datos de venta y feedback cualitativo
- Lanzamiento oficial con producción escalada

4. PLAN DE GO-TO-MARKET
Diseña la estrategia de lanzamiento:
- Timing óptimo según estacionalidad y calendario del sector cervecero
- Canales prioritarios para el lanzamiento (¿e-commerce propio primero? ¿eventos cerveceros? ¿HORECA premium?)
- Mensaje de lanzamiento y narrativa de comunicación para prensa y redes sociales
- Edición limitada de lanzamiento vs incorporación al catálogo permanente

5. MÉTRICAS DE ÉXITO
Define el framework de métricas:
- KPIs de adopción: unidades vendidas en los primeros 30/60/90 días
- KPIs de satisfacción: puntuación media en Untappd, reseñas cualitativas
- KPIs financieros: margen por unidad, contribución al mix de ventas
- Criterio de decisión: ¿qué resultados justifican escalar la producción o descontinuar la referencia?

tarea concreta:
Crea una plantilla de entrevista de usuario de 20 preguntas para validar la oportunidad de una nueva cerveza artesanal sin alcohol, con preguntas sobre hábitos de consumo, motivaciones de compra, disposición al pago y canales de distribución preferidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar product management al desarrollo de nuevas referencias de cerveza artesanal',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en cervecería artesanal con IA',
                'description'      => 'Diseña políticas de RRHH adaptadas a las particularidades del sector cervecero artesanal, incluyendo captación de maestros cerveceros y formación del equipo.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con experiencia en empresas del sector alimentación artesanal y bebidas premium, conocedor de las particularidades del mercado laboral cervecero y de la gestión de equipos pequeños con alta especialización técnica.

contexto de la organización:
Mi cervecería artesanal tiene [número] empleados y quiero profesionalizar la gestión de personas. El equipo incluye maestros cerveceros, personal de producción, comerciales y administración. La empresa está en fase de crecimiento y necesito atraer y retener talento especializado en un mercado competitivo.

objetivo de RRHH:
Desarrolla un plan integral de gestión de talento que incluya:

1. PERFIL Y CAPTACIÓN DE MAESTRO CERVECERO
Diseña el proceso de selección para el rol más crítico:
- Descripción de puesto detallada con competencias técnicas (dominio de estilos, manejo de equipos de producción, control de calidad) y competencias blandas (creatividad, trabajo en equipo, orientación al detalle)
- Canales de reclutamiento especializados: escuelas de elaboración cervecera, comunidades cerveceras, plataformas como CraftBeer.com
- Proceso de selección con prueba práctica de elaboración y cata a ciegas
- Política retributiva competitiva: salary benchmark del sector en España

2. ONBOARDING Y FORMACIÓN TÉCNICA
Diseña el plan de incorporación para nuevos empleados:
- Semana 1: inmersión en cultura de empresa, visita completa a instalaciones, presentación al equipo
- Primeros 30 días: formación técnica específica del rol con mentor asignado
- Primeros 90 días: participación activa en un ciclo completo de producción
- Plan de formación continua: cursos de cata, viajes a ferias cerveceras internacionales, formaciones en tendencias del sector

3. CULTURA DE EMPRESA Y EMPLOYER BRANDING
Define los pilares de la cultura organizacional:
- Valores de empresa alineados con la filosofía artesanal: calidad, curiosidad, colaboración, sostenibilidad
- Beneficios diferenciales del sector: acceso a producto, participación en decisiones de receta, flexibilidad de horarios en producción
- Estrategia de employer branding para atraer talento apasionado por el mundo cervecero
- Gestión del bienestar: turnos de producción, carga física del trabajo, ergonomía

4. EVALUACIÓN DEL DESEMPEÑO
Diseña un sistema de evaluación adaptado:
- KPIs técnicos para producción: rendimiento por lote, índices de calidad, desperdicio
- KPIs comerciales: nuevas cuentas abiertas, retención de clientes, volumen de ventas
- Evaluación 360 con feedback del equipo y del maestro cervecero
- Política de reconocimiento y bonus vinculados a resultados de producción y ventas

5. PLAN DE RETENCIÓN Y CARRERA
Diseña el plan de desarrollo profesional:
- Itinerario de carrera desde auxiliar de producción hasta maestro cervecero jefe
- Programa de participación en beneficios o co-ownership para empleados clave
- Gestión de la salida voluntaria: entrevistas de salida y protección del conocimiento técnico

tarea inmediata:
Redacta la oferta de empleo completa para contratar a un maestro cervecero junior, optimizada para publicarse en LinkedIn, Infojobs y comunidades cerveceras especializadas, con todos los requisitos, responsabilidades y condiciones que atraigan al perfil ideal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Plan de RRHH y captación de talento especializado para cervecería artesanal',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control financiero de producción cervecera artesanal con IA',
                'description'      => 'Analiza los costes de producción, márgenes por referencia y rentabilidad de canales de distribución en tu cervecería artesanal con modelos financieros detallados.',
                'prompt_content'   => <<<'EOT'
Eres un controller financiero especializado en empresas de producción de bebidas artesanales, con experiencia en contabilidad de costes de fabricación, análisis de márgenes por SKU y modelos de rentabilidad para pequeñas y medianas cervecerías.

contexto financiero:
Mi cervecería artesanal produce [número] referencias y quiero entender mejor la rentabilidad de cada una y de cada canal de distribución. Actualmente tengo dificultades para saber cuáles son mis productos más rentables y dónde se están yendo mis costes.

objetivo financiero:
Diseña un sistema de control financiero completo para cervecería artesanal:

1. ESTRUCTURA DE COSTES POR LOTE DE PRODUCCIÓN
Define el modelo de costes detallado:
- Materias primas directas: malta, lúpulo, levadura, adjuntos especiales, agua
- Envases y packaging: botellas, chapas, etiquetas, cajas, growlers
- Mano de obra directa: horas de producción del maestro cervecero y auxiliares
- Costes indirectos de fabricación: energía (electricidad, gas), agua, amortización de equipos
- Costes de calidad: análisis de laboratorio, pruebas organolépticas, gestiones de certificación

2. CÁLCULO DE COSTE POR UNIDAD
Explica la metodología para calcular el coste por botella/lata:
- Asignación de costes directos e indirectos a cada lote de producción
- Tratamiento del merma y las pérdidas de producción (trub, sedimentos)
- Coste del envejecimiento para cervezas con maduración prolongada
- Diferencias de coste entre formatos: botella 33cl, 50cl, lata, barril de 30L

3. ANÁLISIS DE MÁRGENES POR CANAL
Calcula la rentabilidad por canal de distribución:
- Venta directa en cervecería (mayor margen, menor volumen)
- E-commerce propio con costes de logística y devoluciones
- Canal HORECA con precio mayorista y coste de la fuerza comercial
- Distribuidores mayoristas con descuentos por volumen
- Tiendas especializadas y supermercados con condiciones específicas

4. MODELO DE PUNTO DE EQUILIBRIO
Diseña el análisis de break-even:
- Cálculo de costes fijos totales mensuales de la cervecería
- Volumen mínimo de producción y venta para cubrir costes
- Análisis de sensibilidad: ¿cómo cambia el break-even si sube el precio de la malta un 20%?
- Planificación de la capacidad productiva y su impacto en los costes unitarios

5. DASHBOARD FINANCIERO MENSUAL
Define los indicadores financieros clave a monitorizar:
- Coste por hectolitro producido vs objetivo
- Margen bruto por referencia y por canal
- Días de stock y rotación de inventario (materias primas y producto terminado)
- Flujo de caja operativo y previsión a 13 semanas
- Rentabilidad sobre activos invertidos en equipamiento de producción

tarea práctica:
Crea una plantilla de Excel (descrita en detalle con todas las fórmulas necesarias) para calcular el coste de producción de un lote de 500 litros de cerveza IPA artesanal, considerando todos los componentes de coste descritos y calculando automáticamente el precio mínimo de venta para cada canal con el margen objetivo deseado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Modelo de costes y análisis de rentabilidad para cervecería artesanal',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo en el sector cervecero con IA',
                'description'      => 'Navega el marco legal y regulatorio aplicable a la producción y comercialización de cerveza artesanal en España, incluyendo licencias, etiquetado y normativa fiscal.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho alimentario y regulación de bebidas alcohólicas en España y la Unión Europea, con experiencia asesorando a cervecerías artesanales en el cumplimiento de la normativa aplicable a su actividad.

contexto legal:
Tengo una cervecería artesanal en España y quiero asegurarme de cumplir con toda la normativa aplicable a la producción y comercialización de cerveza, tanto en el mercado nacional como para posibles exportaciones a la UE.

objetivo de compliance:
Proporciona una guía legal completa organizada por ámbitos:

1. LICENCIAS Y AUTORIZACIONES PARA LA ACTIVIDAD
Detalla los permisos necesarios para operar:
- Inscripción en el Registro de Establecimientos Alimentarios (REA) del Ministerio de Sanidad
- Autorización sanitaria autonómica específica para industrias alimentarias
- Autorización de la Agencia Tributaria como fabricante de bebidas alcohólicas (Impuesto sobre las Bebidas Derivadas del Alcohol - IIEE)
- Licencia de actividad del ayuntamiento para la ubicación de la cervecería
- Permisos medioambientales para gestión de aguas residuales y emisiones

2. NORMATIVA DE ETIQUETADO
Explica los requisitos obligatorios del etiquetado según el Reglamento UE 1169/2011:
- Información nutricional obligatoria desde 2023 para bebidas alcohólicas
- Lista de ingredientes y mención de alérgenos (gluten de cebada, sulfitos)
- Información sobre el contenido de alcohol expresada en porcentaje de volumen
- Indicaciones obligatorias: país de origen, nombre y dirección del fabricante, cantidad neta
- Advertencias sanitarias: pictograma de embarazo, mensaje disuasorio del consumo

3. IMPUESTO ESPECIAL SOBRE BEBIDAS ALCOHÓLICAS (IIEE)
Explica el régimen fiscal especial:
- Tipo impositivo aplicable a la cerveza según grados Plato y porcentaje de alcohol
- Régimen de depósito fiscal y circulación de productos en suspensión de IIEE
- Documentación de acompañamiento (DAA) para movimientos de producto
- Declaraciones e-DAS y uso del EMCS (sistema informático de la AEAT)
- Régimen especial para pequeños productores independientes y sus condiciones de acceso

4. NORMATIVA DE PUBLICIDAD DE BEBIDAS ALCOHÓLICAS
Detalla las restricciones publicitarias:
- Ley General de Publicidad y restricciones para bebidas con más de 20% vol.
- Normativa autonómica: diferencias entre comunidades autónomas
- Publicidad digital: restricciones en redes sociales y verificación de edad
- Patrocinio de eventos deportivos y culturales: condiciones y limitaciones

5. EXPORTACIÓN A LA UNIÓN EUROPEA
Requisitos para vender en otros mercados de la UE:
- Reconocimiento mutuo de autorizaciones en el mercado único
- Adaptación del etiquetado a los idiomas de los países destino
- Sistemas de certificación voluntaria que facilitan la entrada en mercados premium (organic, Reinheitsgebot, etc.)
- Gestión del IIEE en operaciones intracomunitarias

tarea legal:
Elabora un checklist de cumplimiento normativo con 30 ítems verificables que una cervecería artesanal debe revisar antes de su primer lanzamiento comercial, organizado por categorías (sanitaria, fiscal, etiquetado, publicidad) con la referencia legal aplicable a cada punto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Guía de cumplimiento legal y regulatorio para cervecería artesanal en España',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para cervecería artesanal con IA',
                'description'      => 'Diseña protocolos de atención al cliente omnicanal para una cervecería artesanal, incluyendo gestión de pedidos online, visitas a la cervecería y resolución de incidencias.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer experience especializado en negocios de consumo artesanal y retail premium, con experiencia en el diseño de protocolos de atención al cliente que equilibran la eficiencia operativa con la calidez y autenticidad que esperan los consumidores de productos artesanales.

contexto del negocio:
Mi cervecería artesanal atiende clientes a través de múltiples canales: tienda física en la cervecería, e-commerce propio, distribuidores, redes sociales y teléfono. Quiero estandarizar la experiencia del cliente manteniendo el trato personalizado que caracteriza a una empresa artesanal.

objetivo de customer experience:
Diseña un manual de atención al cliente completo para cervecería artesanal:

1. MAPEO DE LA EXPERIENCIA DEL CLIENTE (CUSTOMER JOURNEY)
Documenta los momentos clave en la relación con el cliente:
- Descubrimiento: cómo nos encuentran (búsqueda orgánica, recomendación, evento cervecero)
- Primera compra: proceso de decisión, dudas frecuentes, puntos de fricción
- Experiencia de consumo: apertura del producto, servicio, maridaje, valoración
- Recompra y fidelización: qué motiva a volver, club de suscripción, newsletter
- Prescripción: cómo convertimos clientes satisfechos en embajadores de marca

2. PROTOCOLOS POR CANAL DE ATENCIÓN
Define los procedimientos específicos para cada canal:
- E-commerce: gestión de pedidos, confirmaciones automáticas, actualizaciones de envío, incidencias con transportista
- Tienda física: protocolo de bienvenida, guía de cata, recomendaciones personalizadas según preferencias
- Redes sociales: tiempo de respuesta máximo 2h, tono de comunicación auténtico y cercano
- Email y WhatsApp Business: plantillas para las consultas más frecuentes adaptadas a lenguaje artesanal
- Teléfono: guion de atención para pedidos, consultas técnicas sobre el producto y atención de quejas

3. GESTIÓN DE INCIDENCIAS Y RECLAMACIONES
Diseña el proceso de resolución de problemas:
- Botella defectuosa o con problema de calidad: protocolo de recogida, análisis de laboratorio y reposición
- Pedido dañado en transporte: documentación fotográfica, gestión con transportista, reposición inmediata
- Retraso en la entrega: comunicación proactiva, alternativas al cliente, compensación
- Insatisfacción con el producto por razones de gusto: política de satisfacción garantizada
- Gestión de reseñas negativas en Google, Untappd y redes sociales

4. VISITAS Y EXPERIENCIAS EN LA CERVECERÍA
Protocolos para la atención presencial:
- Visitas guiadas grupales: estructura, duración, contenido educativo sobre el proceso de elaboración
- Catas comentadas con el maestro cervecero: selección de referencias, ficha de cata, maridajes
- Venta en tienda: recomendación personalizada según ocasión de consumo y preferencias de sabor
- Eventos privados: despedidas de soltero, team buildings, cumpleaños, celebraciones corporativas

5. FIDELIZACIÓN Y SEGUIMIENTO POST-COMPRA
Diseña el programa de fidelización:
- Email de seguimiento a los 7 días de la primera compra con solicitud de valoración
- Newsletter mensual con novedades, recetas de maridaje e historias del equipo
- Club de suscriptores con acceso anticipado a ediciones limitadas y descuentos especiales
- Gestión del programa de puntos o sellos para compras recurrentes

tarea práctica:
Escribe las 15 respuestas tipo más importantes para gestionar las consultas frecuentes por email y WhatsApp de clientes de una cervecería artesanal, con tono cálido, personal y auténtico que refleje los valores artesanales de la marca, incluyendo situaciones de queja y reclamación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Protocolos de atención al cliente omnicanal para cervecería artesanal',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance para marcas cerveceras artesanales con IA',
                'description'      => 'Estructura tu servicio de consultoría freelance para cervecerías artesanales, desde la definición de servicios hasta la propuesta económica y la gestión de proyectos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance senior especializado en el sector cervecero artesanal, con experiencia en estrategia de marca, lanzamientos de producto, distribución y captación de clientes para cervecerías de tamaño pequeño y mediano que quieren crecer de forma sostenida.

contexto del freelance:
Soy un profesional con experiencia en [marketing/estrategia/ventas/finanzas/diseño] que quiere especializarme como consultor freelance para el sector cervecero artesanal. Conozco el sector como consumidor entusiasta y he desarrollado proyectos puntuales, pero quiero formalizar mi propuesta de valor y construir una cartera de clientes estable.

objetivo de negocio freelance:
Diseña el modelo de negocio completo para mi consultoría especializada:

1. DEFINICIÓN DE LA PROPUESTA DE VALOR Y SERVICIOS
Ayúdame a definir mis servicios con precisión:
- Qué problemas resuelvo para las cervecerías artesanales en mi área de especialidad
- Cómo diferencio mi consultoría de agencias generalistas o consultores sin especialización en el sector
- Qué resultados concretos y medibles puedo garantizar a mis clientes
- Qué no hago (límites del servicio para mantener el foco y la excelencia)
- Propuesta de servicios en tres niveles: diagnóstico puntual, proyecto cerrado, retainer mensual

2. FIJACIÓN DE PRECIOS Y MODELOS DE CONTRATACIÓN
Define la estrategia de precios:
- Análisis del mercado: qué cobran las agencias especializadas y consultores independientes en el sector
- Pricing por hora vs por proyecto vs retainer mensual: ventajas e inconvenientes de cada modelo
- Propuesta de tarifas para cada tipo de servicio con justificación del valor aportado
- Condiciones de pago: señal inicial, hitos de facturación, pago final
- Política de revisiones y trabajo adicional fuera del alcance inicial

3. CAPTACIÓN DE PRIMEROS CLIENTES
Diseña la estrategia de desarrollo de negocio:
- Presencia en ferias cerveceras: Barcelona Beer Festival, Madrid Beer Week, Bierfest Mallorca
- Networking en asociaciones del sector: Cerveceros de España, asociaciones autonómicas
- LinkedIn y contenidos de liderazgo de pensamiento en el sector cervecero
- Colaboraciones con proveedores del sector: maltería, fábricas de envases, distribuidores
- Estrategia de referencias y testimoniales de los primeros clientes

4. GESTIÓN DE PROYECTOS Y ENTREGABLES
Estandariza tu metodología de trabajo:
- Proceso de onboarding del cliente: reunión de descubrimiento, propuesta, contrato, kick-off
- Herramientas de gestión de proyectos adaptadas al trabajo freelance (Notion, Trello, ClickUp)
- Formato de entregables: informes ejecutivos, presentaciones, planes de acción con responsables y fechas
- Comunicación con el cliente: frecuencia de reuniones, canales, gestión de expectativas
- Proceso de cierre del proyecto: entrega, formación al equipo interno, seguimiento post-proyecto

5. ESCALABILIDAD Y CRECIMIENTO DEL NEGOCIO FREELANCE
Planifica el crecimiento a largo plazo:
- Cuándo y cómo subir precios a medida que crece el porfolio y la reputación
- Gestión de la capacidad: cuántos clientes en paralelo puede atender un freelance especializado
- Posibilidad de subcontratar tareas operativas para escalar sin perder calidad
- Creación de productos digitales: cursos, plantillas, guías para monetizar el conocimiento más allá de las horas de consultoría

tarea de arranque:
Redacta una propuesta comercial completa de 2 páginas para ofrecer mis servicios de consultoría de marketing a una cervecería artesanal recién lanzada que necesita construir su presencia digital desde cero, incluyendo diagnóstico inicial, plan de acción de 6 meses, entregables y presupuesto detallado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar negocio freelance de consultoría especializada en cervecería artesanal',
                'vote_score'       => 30,
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
