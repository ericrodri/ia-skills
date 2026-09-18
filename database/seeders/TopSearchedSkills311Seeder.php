<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills311Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido SEO para blogs corporativos B2C',
                'description'      => 'Diseña una estrategia de contenido SEO integral para blogs corporativos orientados a consumidor final: investigación de palabras clave, clusters de contenido, autoridad temática y calendario editorial. Aprende a crear contenido que posicione, genere tráfico orgánico cualificado y convierta visitantes en clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenido SEO con más de ocho años de experiencia desarrollando estrategias de contenido para marcas de consumo en sectores de retail, moda, alimentación y tecnología de consumo. Has ayudado a docenas de marcas a multiplicar su tráfico orgánico entre tres y diez veces en periodos de doce a dieciocho meses. Tu misión es enseñarme a construir desde cero una estrategia de contenido SEO para mi blog corporativo.

CONTEXTO DEL PROYECTO
Tengo un blog corporativo que apenas recibe tráfico orgánico a pesar de publicar contenido regularmente. Los artículos no ranquean en Google, el contenido no tiene una estructura estratégica coherente y no sé qué temas abordar para atraer a mi cliente ideal. Necesito un sistema que me permita crear contenido con propósito estratégico, no solo llenar el blog.

PARTE 1 — INVESTIGACIÓN DE PALABRAS CLAVE PARA B2C
Explica el proceso completo de keyword research:
- Cómo identificar las seed keywords de mi negocio: partir del problema que resuelvo al cliente, no de mi producto
- Herramientas de investigación: Google Keyword Planner, Ahrefs, Semrush, Ubersuggest (cuándo usar cada una y qué métricas importan)
- Clasificación de keywords por intención de búsqueda: informacional (quiero aprender), navegacional (busco una marca específica), comercial (quiero comparar opciones), transaccional (quiero comprar)
- Long-tail keywords para B2C: por qué las keywords de baja competencia y alta especificidad son el mejor punto de entrada para un blog nuevo
- Análisis de la competencia SEO: cómo investigar qué keywords están posicionando tus competidores directos y encontrar huecos que ellos no cubren

PARTE 2 — ARQUITECTURA DE CLUSTERS DE CONTENIDO
Diseña la estructura de tu blog con modelo hub-and-spoke:
- Pillar pages (páginas pilar): artículos extensos de 3.000-5.000 palabras que cubren un tema amplio de forma exhaustiva (ej.: "Guía completa de alimentación saludable para deportistas")
- Cluster content: artículos de 1.000-2.000 palabras que profundizan en subtemas específicos de la pillar page (ej.: "Qué comer antes de una maratón", "Suplementos recomendados para corredores de fondo")
- Internal linking: cómo enlazar los artículos del cluster a la pillar page y entre sí para transferir autoridad y guiar al usuario
- Cómo decidir cuántos clusters construir en función de los temas estratégicos de tu negocio y la competitividad de las keywords

PARTE 3 — AUTORIDAD TEMÁTICA (TOPICAL AUTHORITY)
Explica el concepto de autoridad temática y cómo construirla:
- Por qué Google premia a los sitios que cubren un tema en profundidad frente a los que publican contenido variado sin coherencia
- Topical coverage: cómo identificar todos los subtemas y preguntas que rodean tu tema principal usando Answer the Public, "La gente también pregunta" de Google y foros especializados
- Content gap analysis: cómo identificar los subtemas que tu competencia ya cubre y que tú aún no has abordado
- Frecuencia de publicación: cuántos artículos publicar por semana para construir autoridad temática en seis a doce meses
- EEAT (Experiencia, Expertise, Autoridad y Fiabilidad): cómo demostrar credibilidad en el contenido de tu blog para satisfacer los criterios de evaluación de Google

PARTE 4 — CALENDARIO EDITORIAL SEO
Crea un sistema de planificación de contenidos:
- Estructura del calendario editorial: keyword objetivo, intención de búsqueda, cluster al que pertenece, responsable, fecha de publicación, fecha de revisión, URL, posición actual
- Cómo priorizar qué artículos escribir primero: Quick Wins (keywords de baja dificultad con volumen decente) vs. Moonshots (keywords muy competitivas con gran volumen)
- Proceso de briefing de contenido: qué información necesita el redactor antes de escribir para que el artículo esté optimizado desde el principio
- Gestión de contenido evergreen vs. contenido de tendencia: cuándo merece la pena escribir sobre tendencias y cómo estructurar el calendario para balancear ambos tipos

PARTE 5 — MEDICIÓN Y OPTIMIZACIÓN CONTINUA
Implementa el ciclo de mejora continua del blog SEO:
- Google Search Console: las cinco métricas más importantes que debes revisar cada semana (impresiones, clics, CTR, posición media, páginas que pierden tráfico)
- Content decay: cómo identificar artículos que estaban posicionando y han perdido tráfico, y cómo actualizarlos para recuperar el ranking
- Estrategia de link building para B2C: cómo conseguir enlaces externos de calidad a través de relaciones con medios, menciones de marca, contenido linkable y notas de prensa digitales
- ROI del contenido: cómo atribuir conversiones al canal orgánico y calcular el valor real de cada artículo

FORMATO DE ENTREGA
1. Proceso de keyword research paso a paso con herramientas y criterios de selección
2. Plantilla de arquitectura de clusters: cómo organizarla en una hoja de cálculo con columnas de keyword, volumen, dificultad, intención, cluster y estado
3. Calendario editorial de doce semanas listo para usar con ejemplos del sector de tu marca
4. Briefing de contenido SEO: las quince preguntas que debe responder antes de escribir un artículo
5. Dashboard de seguimiento SEO mensual con las métricas clave y umbrales de alerta
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño de estrategia de contenido SEO para blogs de marca',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'SEO técnico y estrategia de contenido para productos SaaS',
                'description'      => 'Combina SEO técnico y estrategia de contenido para hacer crecer el tráfico orgánico de un producto SaaS: optimización de Core Web Vitals, arquitectura de información, páginas de comparativas, casos de uso y contenido de fondo de embudo para capturar demanda transaccional. Aprende a posicionar keywords de alta intención comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en SEO técnico y estrategia de contenido especializado en empresas SaaS B2B. Has trabajado durante seis años como Head of SEO en startups de serie A y B, ayudándolas a pasar de cero a más de cien mil visitas mensuales orgánicas. Tu objetivo es enseñarme a implementar una estrategia de SEO integral que combine el aspecto técnico con el contenido para hacer crecer el tráfico cualificado de un producto SaaS.

CONTEXTO DEL PRODUCTO SAAS
Nuestro producto SaaS tiene buen posicionamiento en ciclos de ventas, pero casi todo el tráfico web viene de outbound y referidos. El canal orgánico apenas representa el 5% de los nuevos registros. La web tiene problemas técnicos de SEO no resueltos y no tenemos una estrategia de contenido coherente más allá del blog corporativo sin enfoque estratégico.

PARTE 1 — AUDITORÍA TÉCNICA SEO PARA SAAS
Explica los problemas técnicos más comunes en webs SaaS y cómo resolverlos:
- Core Web Vitals: LCP (Largest Contentful Paint), CLS (Cumulative Layout Shift) y FID/INP para aplicaciones web — cómo medirlos y optimizarlos
- Problemas de crawling e indexación: URLs de aplicación que no deben indexarse, contenido dinámico que Google no puede renderizar, sitemap mal configurado
- Canonical tags y contenido duplicado: problemas frecuentes en SaaS con variaciones de planes, idiomas y parámetros de URL
- JavaScript SEO: cómo asegurarte de que Google puede renderizar tu web si usa React, Vue o Angular, y qué hacer si el contenido importante está en el DOM del lado del cliente
- Schema markup para SaaS: cómo implementar datos estructurados de Software Application, FAQ, Reviews y Breadcrumb para enriquecer los resultados de búsqueda

PARTE 2 — ARQUITECTURA DE KEYWORDS PARA SAAS
Diseña la estrategia de keywords considerando el funnel:
- Top of funnel (TOFU): keywords informacionales sobre el problema que resuelve tu SaaS (ej.: "cómo gestionar proyectos con equipos remotos")
- Middle of funnel (MOFU): keywords de consideración y comparativa (ej.: "herramientas de gestión de proyectos", "alternativas a Asana")
- Bottom of funnel (BOFU): keywords transaccionales con alta intención de compra (ej.: "mejor software de gestión de proyectos para agencias", "precios Asana vs Notion")
- Product-led keywords: keywords que mencionan directamente tu categoría de producto (ej.: "software de gestión de proyectos para PYMES")
- Cómo distribuir el esfuerzo de contenido entre los tres niveles del funnel para maximizar el impacto en registros

PARTE 3 — PÁGINAS DE ALTA CONVERSIÓN PARA SAAS
Explica cómo crear las páginas con mayor impacto en BOFU:
- Páginas de comparativa: "Tu herramienta vs. Competidor" — cómo escribirlas de forma honesta y persuasiva sin dañar tu reputación
- Páginas de alternativas: "Las mejores alternativas a [Competidor Líder]" — cómo capturar búsquedas de usuarios insatisfechos con la competencia
- Páginas de casos de uso: "Software de gestión de proyectos para [profesión/sector]" — cómo crear diez a veinte páginas de landing específicas por vertical
- Páginas de integración: si tu SaaS se integra con otras herramientas, cada integración puede posicionar por búsquedas del tipo "Herramienta A + Herramienta B"
- Estructura y elementos de conversión de cada tipo de página para maximizar el registro de trial o demo

PARTE 4 — ESTRATEGIA DE CONTENIDO SEO PARA SAAS
Construye el plan de contenido completo:
- Content marketing para TOFU: blog de educación sobre el problema (ej.: un SaaS de RRHH publica guías sobre gestión del talento, onboarding, métricas de engagement)
- Glossary pages: glosarios de términos del sector con un artículo por concepto — páginas de bajo esfuerzo que capturan tráfico informacional de cola larga
- Tool pages: páginas de herramientas gratuitas (calculadoras, generadores, plantillas descargables) que atraen links y tráfico sin intención de compra pero que exponen el producto
- Customer stories como SEO: cómo estructurar las historias de clientes para que posicionen por el sector, caso de uso y nombre del cliente

PARTE 5 — LINK BUILDING PARA SAAS
Estrategias de construcción de autoridad de dominio:
- Digital PR para SaaS: cómo crear estudios de datos originales, informes del sector y encuestas que los medios especializados citen con enlace
- Relaciones con creadores de contenido: cómo colaborar con bloggers, youtubers y podcasters del sector para conseguir menciones y reseñas
- Product Hunt y directorios de software: cómo aprovechar los lanzamientos en plataformas de descubrimiento de software para conseguir backlinks de calidad
- Guest posting estratégico: cómo identificar los blogs del sector con mayor autoridad y proponer artículos de colaboración

FORMATO DE ENTREGA
1. Checklist de auditoría técnica SEO para SaaS: cincuenta puntos de verificación organizados por prioridad
2. Mapa de keywords por etapa del funnel con volumen, dificultad e intención
3. Plantilla de página de comparativa con estructura, secciones obligatorias y elementos de conversión
4. Plan de contenido de doce meses: distribución de artículos por tipo y etapa del funnel
5. Calculadora de impacto SEO: cómo estimar el tráfico incremental y los registros esperados de cada iniciativa
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crecimiento de tráfico orgánico cualificado para productos SaaS',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Estrategia de contenido SEO para portfolios y agencias creativas',
                'description'      => 'Diseña una estrategia de contenido SEO específica para portfolios de diseño, agencias creativas y estudios de branding: cómo posicionar tus servicios en Google, qué tipo de contenido atrae clientes de calidad y cómo convertir el tráfico orgánico en solicitudes de presupuesto y proyectos reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO y marketing de contenidos para agencias de diseño y creatividad. Has ayudado a más de treinta estudios de diseño, agencias de branding y fotógrafos profesionales a posicionarse en Google y atraer clientes de mayor calidad a través del canal orgánico. Tu objetivo es enseñarme a construir una presencia SEO que muestre mi experiencia creativa y atraiga a los clientes ideales.

CONTEXTO DEL NEGOCIO CREATIVO
El mayor desafío del SEO para creativos es que los servicios de diseño son difíciles de describir con keywords claras: los clientes no siempre saben el nombre técnico de lo que necesitan (identidad visual, sistema de diseño, UX audit) y muchos proyectos se consiguen por referidos, no por búsqueda orgánica. Sin embargo, hay una enorme oportunidad en el contenido educativo y en el posicionamiento local y por especialidad.

PARTE 1 — KEYWORD RESEARCH PARA SERVICIOS CREATIVOS
Identifica las palabras clave relevantes para tu tipo de negocio creativo:
- Keywords de servicio con intención transaccional: "agencia de diseño de marca Madrid", "estudio de branding para startups", "diseñador UX freelance"
- Keywords de problema: "cómo renovar la identidad visual de una empresa", "cuándo rediseñar el logo de mi empresa", "señales de que tu marca necesita un refresh"
- Keywords de portfolio: cómo posicionar tus casos de estudio para que aparezcan cuando buscan trabajos similares al tuyo
- Long-tail keywords locales: si trabajas con clientes locales, cómo combinat geolocalización y especialidad ("agencia de diseño packaging Barcelona")
- Keywords de comparativa de servicios: "diseñador freelance vs agencia de diseño — qué elegir"

PARTE 2 — CASOS DE ESTUDIO COMO CONTENIDO SEO
Transforma tus proyectos en contenido que posiciona:
- Estructura de caso de estudio SEO: título con keyword + cliente + sector + resultado medible (ej.: "Rediseño de identidad visual para Farmacia López: de marca genérica a referente de bienestar natural")
- Componentes del caso de estudio que Google valora: descripto del problema del cliente, proceso creativo documentado, decisiones de diseño justificadas, resultado con métricas cuando sea posible
- Cómo redactar el contenido del caso de estudio para que sea comprensible para no diseñadores (tu cliente objetivo) y al mismo tiempo demuestre expertise profesional
- Schema markup para portfolios: tipo de contenido CreativeWork y cómo implementarlo para que Google entienda la naturaleza del proyecto

PARTE 3 — BLOG EDUCATIVO PARA AGENCIAS CREATIVAS
Crea contenido que demuestre expertise y atrae a clientes:
- Artículos de educación para clientes: "Cuánto cuesta un proyecto de branding profesional", "Qué incluye un manual de marca completo", "Diferencias entre identidad visual e imagen corporativa"
- Contenido de proceso creativo: cómo documentar tu metodología de trabajo para atraer a clientes que valoran el proceso, no solo el resultado
- Tendencias de diseño con enfoque SEO: cómo escribir sobre tendencias de diseño posicionando keywords de temporada ("tendencias diseño web 2025", "paletas de color que funcionan en packaging 2025")
- Guías de sector: si te especializas en un sector (gastronomía, salud, tecnología), crea contenido específico que te posicione como referente en ese nicho

PARTE 4 — SEO LOCAL Y DE NICHO PARA CREATIVOS
Posiciónate en tu mercado geográfico y especialidad:
- Google Business Profile optimizado para agencias creativas: cómo completarlo, qué fotos subir, cómo gestionar reseñas
- Directorios de diseño y creatividad con valor SEO: Behance, Dribbble, Awwwards, The FWA, Design Rush — cómo usarlos para conseguir backlinks de calidad
- SEO de nicho: si te especializas en packaging, motion graphics o diseño de interiores, cómo construir autoridad temática en ese subtema específico
- Estrategia de contenido para LinkedIn como canal de apoyo al SEO: cómo el contenido de LinkedIn puede derivar tráfico cualificado a tu portfolio web

PARTE 5 — CALENDARIO EDITORIAL Y MEDICIÓN
Implementa el sistema de contenido de forma sostenible:
- Calendario editorial adaptado a la carga de trabajo de un estudio creativo: un artículo de blog de calidad al mes es más valioso que cuatro artículos mediocres a la semana
- Reutilización de contenido: cómo transformar un caso de estudio en cinco piezas de contenido para distintos canales (blog, LinkedIn, Instagram, presentación de ventas, newsletter)
- Métricas de SEO para creativos: posición en keywords de servicio, tráfico a páginas de servicios, conversión a contacto o solicitud de presupuesto, leads desde canal orgánico
- Cómo presentar el ROI del SEO a tus clientes si trabajas como freelance de SEO y marketing para agencias

FORMATO DE ENTREGA
1. Lista de cincuenta keywords prioritarias para agencias creativas con volumen e intención
2. Plantilla de caso de estudio SEO con estructura completa y ejemplos de copywriting
3. Calendario editorial de seis meses para un estudio de diseño con tiempo limitado
4. Checklist de optimización SEO on-page para páginas de portfolio y servicios
5. Guía de link building para creativos: los diez mejores directorios y plataformas de diseño con valor SEO
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Atracción de clientes de calidad mediante SEO y contenido para creativos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Contenido SEO para generación de leads B2B en ventas',
                'description'      => 'Crea una estrategia de contenido SEO orientada a la generación de leads B2B cualificados: páginas de comparativas, artículos de fondo de embudo, case studies con enfoque SEO y contenido de habilitación de ventas que también posiciona. Aprende a usar el SEO como canal de prospección escalable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en SEO para generación de demanda B2B con experiencia en empresas de servicios profesionales, consultoría tecnológica y software empresarial. Has diseñado estrategias de contenido SEO que generan entre cincuenta y doscientos leads cualificados al mes a través del canal orgánico. Tu objetivo es enseñarme a usar el contenido SEO como canal de prospección escalable para mi negocio B2B.

CONTEXTO DE VENTAS B2B
El ciclo de ventas B2B es largo (tres a doce meses), implica múltiples decisores y el comprador investiga extensamente antes de contactar a un proveedor. Esto significa que hay una enorme oportunidad para capturar a los compradores durante su fase de investigación con contenido de calidad. El problema es que la mayoría de los equipos de ventas no tienen una estrategia de contenido SEO que les apoye.

PARTE 1 — KEYWORD RESEARCH ORIENTADO AL COMPRADOR B2B
Identifica las búsquedas que realizan los compradores B2B:
- Búsquedas de problema: términos que usan los compradores cuando reconocen que tienen un problema pero no saben aún que tu solución existe (ej.: "cómo reducir el churn en empresas SaaS")
- Búsquedas de solución: términos de compradores que ya saben qué tipo de solución necesitan (ej.: "software de gestión de contratos para equipos legales")
- Búsquedas de proveedor: términos que usan compradores en fase avanzada del proceso de compra (ej.: "consultora de transformación digital para retail en España")
- Job-to-be-done keywords: cómo identificar las búsquedas relacionadas con los resultados que quiere conseguir el comprador, no solo la categoría de producto
- Inteligencia competitiva de keywords: cómo saber qué búsquedas están capturando tus competidores con sus contenidos

PARTE 2 — CONTENIDO DE FONDO DE EMBUDO (BOFU) PARA B2B
Crea las páginas que convierten compradores avanzados:
- Páginas de comparativa de proveedores: cómo estructurar "Tu empresa vs. Competidor" de forma honesta, con datos verificables y sin parecer agresivo con la competencia
- Páginas de casos de uso por industria: "Solución para el sector [X]" con especificidad de problemas, regulaciones y ejemplos del sector
- ROI calculators y herramientas de assessment: herramientas gratuitas que ayudan al comprador a calcular el valor de tu solución y que capturan leads a cambio de los resultados
- Páginas de precios y guías de inversión: aunque no publiques precios exactos, una guía de "cuánto cuesta implementar X" con rangos posiciona para búsquedas transaccionales y educa al comprador

PARTE 3 — CASE STUDIES CON ENFOQUE SEO
Transforma las historias de éxito de clientes en contenido que posiciona:
- Estructura del case study SEO para B2B: empresa cliente (sector, tamaño, reto), solución implementada (qué hiciste), resultados medibles (reducción de costes, incremento de eficiencia, ROI), aprendizajes
- Cómo elegir qué clientes usar para case studies SEO: aquellos cuya historia posicione para tu keyword más valiosa de sector o caso de uso
- Optimización de títulos de case study para SEO: "Cómo [Empresa] redujo en un 40% el tiempo de cierre de contratos con [Tu solución]"
- Distribución multicanal del case study: SEO, LinkedIn, newsletter, deck de ventas, presentación en eventos — cómo aprovechar el mismo contenido en todos los canales

PARTE 4 — CONTENIDO DE HABILITACIÓN DE VENTAS CON VALOR SEO
Crea materiales que ayudan a vender y también posicionan:
- Guías comparativas de categoría: "Guía para elegir el mejor software de [categoría] en 2025" — posicionan para búsquedas de compradores en fase de evaluación
- Whitepapers y reportes del sector: estudios originales con datos propios que consiguen backlinks de calidad y posicionan keywords de industria
- Glosarios de sector: vocabulario específico de tu industria con artículos individuales por término — bajo esfuerzo, alto impacto en autoridad temática
- FAQ de objeciones de ventas: las preguntas que hacen los compradores en el proceso de venta, convertidas en artículos de blog que posicionan y pre-responden las objeciones

PARTE 5 — ATRIBUCIÓN Y MEDICIÓN DEL SEO EN EL PIPELINE B2B
Mide el impacto real del SEO en el pipeline de ventas:
- Integración SEO con CRM: cómo rastrear qué leads llegaron por canal orgánico y cómo avanzaron en el pipeline
- Multi-touch attribution para ciclos de venta largos: el SEO raramente es el último toque antes del cierre, pero puede ser el primero — cómo dar crédito correcto al canal
- SQL from organic: cómo medir no solo leads orgánicos sino Sales Qualified Leads orgánicos para calcular el verdadero ROI del SEO
- Contenido como acelerador del ciclo de venta: cómo los comerciales comparten artículos del blog durante el proceso de venta para educar al comprador y acelerar la decisión

FORMATO DE ENTREGA
1. Mapa de keywords B2B por etapa del ciclo de compra con ejemplos de contenido para cada una
2. Plantilla de case study B2B con SEO integrado: estructura, longitud recomendada y checklist de optimización
3. Guía de contenido de habilitación de ventas con valor SEO: ocho formatos y cuándo usar cada uno
4. Sistema de atribución multicanal simplificado para equipos de ventas sin herramientas sofisticadas
5. Plan de doce semanas para construir la base de contenido BOFU desde cero
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Generación de leads B2B cualificados mediante contenido SEO',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de contenido SEO para product-led growth',
                'description'      => 'Diseña una estrategia de contenido SEO alineada con el modelo product-led growth (PLG): contenido que lleva al usuario a descubrir el producto, herramientas gratuitas como imán de links, páginas de casos de uso y contenido que reduce la fricción en la adopción. Aprende a usar el SEO como motor de adquisición orgánica escalable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Growth especializado en estrategias de product-led growth y SEO para empresas de software. Has implementado estrategias de contenido SEO en empresas PLG como referencia durante los últimos cinco años, ayudando a productos digitales a conseguir su mayor canal de adquisición a través del orgánico. Tu objetivo es enseñarme a alinear la estrategia de contenido SEO con el modelo PLG de mi empresa.

CONTEXTO DEL MODELO PLG
En un modelo product-led growth, el producto en sí mismo es el principal motor de adquisición, retención y expansión. El SEO puede amplificar este modelo exponencialmente: en lugar de solo capturar tráfico, el contenido puede llevar a los usuarios directamente a experimentar el producto (free trial, freemium, herramienta gratuita). El objetivo es que cada artículo del blog sea una puerta de entrada al producto, no solo al conocimiento.

PARTE 1 — ALINEACIÓN ENTRE SEO Y PLG
Explica cómo el SEO potencia el modelo product-led:
- User journey PLG + SEO: cómo el usuario pasa de búsqueda en Google a trial del producto en el menor número de pasos posible
- Product-adjacent content: contenido que habla del problema que resuelve el producto pero sin ser comercial — el usuario llega buscando solucionar un problema y encuentra el producto como solución natural
- SEO como canal de activación: cómo el contenido puede educar al usuario sobre cómo sacar el máximo valor del producto y reducir el time-to-value
- Free-to-paid content funnel: cómo el contenido gratuito (blog, herramientas, plantillas) cualifica al usuario y lo lleva a descubrir las funcionalidades premium

PARTE 2 — HERRAMIENTAS GRATUITAS COMO ESTRATEGIA SEO
Las free tools son el mayor activo SEO del PLG:
- Tipología de herramientas gratuitas con alto potencial SEO: calculadoras, generadores, analizadores, convertidores, test gratuitos, versiones simplificadas de funcionalidades clave del producto
- Por qué las herramientas gratuitas consiguen backlinks orgánicamente: son linkables, shareables y tienen utilidad inmediata sin necesidad de registro
- Cómo diseñar una herramienta gratuita que sea una versión reducida del producto: el usuario experimenta el valor y entiende por qué la versión completa es valiosa
- Integración de CTAs en herramientas gratuitas: cuándo y cómo mostrar la propuesta de valor del producto sin ser intrusivo

PARTE 3 — PÁGINAS DE CASO DE USO Y PLANTILLAS
Crea activos SEO de alta conversión:
- Páginas de caso de uso específico: "Cómo usar [producto] para [tarea concreta] en [sector]" — cada combinación de caso de uso y sector es una oportunidad de keyword
- Páginas de plantillas gratuitas: galería de plantillas descargables o disponibles directamente en el producto, cada una con su propia URL indexable
- Integration pages: si tu producto se integra con otros, una página por integración posiciona búsquedas de "[Herramienta A] + [Herramienta B]"
- Comparison pages: "vs. competidor" y "alternativas a [categoría]" adaptadas al contexto PLG para capturar usuarios que evalúan opciones

PARTE 4 — CONTENIDO DE ACTIVACIÓN Y RETENCIÓN
El SEO puede apoyar la retención, no solo la adquisición:
- Help center SEO: documentación de producto optimizada para búsquedas de usuarios que ya tienen el producto pero buscan en Google cómo hacer algo específico
- Tutorial SEO: artículos paso a paso que explican cómo usar el producto para casos de uso específicos — retienen usuarios activos y atraen nuevos con las mismas búsquedas
- Best practices content: artículos sobre cómo sacar el máximo partido al producto según tipo de equipo, sector o nivel de madurez
- Community SEO: si tienes comunidad o foro, cómo indexar las discusiones valiosas y usarlas como fuente de nuevas ideas de contenido

PARTE 5 — MÉTRICAS DE SEO ADAPTADAS AL PLG
Define el North Star del SEO para un modelo PLG:
- Product-qualified traffic: tráfico orgánico que llega a páginas de producto, herramientas gratuitas o templates (indicador de intención más alta que el tráfico al blog general)
- Organic-to-trial rate: porcentaje de visitantes orgánicos que inician un trial o se registran al freemium
- Organic-to-activated: cuántos usuarios orgánicos pasan por el momento "aha" del producto según los eventos de activación definidos
- Revenue influenced by organic: cómo estimar cuánto ARR está influenciado por el canal orgánico en el modelo de atribución multi-touch

FORMATO DE ENTREGA
1. Mapa del user journey PLG + SEO desde búsqueda en Google hasta usuario activado
2. Plantilla de página de caso de uso con estructura SEO y elementos de conversión al trial
3. Guía de diseño de herramientas gratuitas: cómo elegir qué construir, qué keywords atacar y cómo medir el impacto
4. Arquitectura de help center SEO: cómo organizar la documentación para que posicione en Google y retenga usuarios
5. Dashboard de SEO para PLG: las ocho métricas que conectan el tráfico orgánico con el crecimiento del producto
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'SEO como motor de adquisición en modelos product-led growth',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contenido SEO para employer branding y atracción de talento',
                'description'      => 'Diseña una estrategia de contenido SEO para posicionarte como empleador de referencia: qué buscan los candidatos en Google antes de aplicar a una empresa, cómo crear páginas de cultura y beneficios que posicionan, y cómo medir el impacto del SEO en la calidad y cantidad de candidatos recibidos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en employer branding digital y SEO de talento con experiencia en empresas tecnológicas de rápido crecimiento. Has ayudado a startups y empresas medianas a posicionar su marca empleadora en Google y reducir el coste de adquisición de candidatos cualificados en más de un 40%. Tu objetivo es enseñarme a usar el contenido SEO como herramienta de atracción de talento.

CONTEXTO DEL RETO DE TALENTO
Encontrar candidatos cualificados en un mercado de talento competitivo es cada vez más difícil y costoso. Las empresas gastan miles de euros en portales de empleo y headhunters, pero muy pocas han invertido en construir una presencia orgánica en Google que atraiga candidatos de forma continua y gratuita. El candidato moderno investiga a fondo la empresa antes de aplicar, y lo hace principalmente buscando en Google.

PARTE 1 — KEYWORD RESEARCH PARA EMPLOYER BRANDING
Identifica las búsquedas que realizan los candidatos:
- Búsquedas de empresa como empleador: "[nombre de empresa] opiniones empleados", "[nombre de empresa] trabajo", "trabajar en [nombre de empresa] — ¿cómo es?"
- Búsquedas de sector/rol: "[tipo de empresa] mejor empresa para trabajar España", "empresas tecnológicas mejor cultura Madrid", "startups con mejores beneficios Barcelona"
- Búsquedas de condiciones laborales: "empresas con trabajo remoto [sector]", "empresas con semana de cuatro días [país]", "mejores sueldos desarrolladores software España"
- Búsquedas de proceso de selección: "proceso de selección [nombre empresa]", "cómo es la entrevista en [empresa]", "cultura de trabajo en [empresa]"
- Cómo usar estas búsquedas para crear contenido que capture candidatos en cada etapa de su decisión

PARTE 2 — PÁGINAS DE CAREERS CON SEO INTEGRADO
Optimiza la sección de empleo de tu web corporativa:
- Careers page principal: cómo estructurarla para que posicione por búsquedas de empleador y convierta visitantes en candidatos
- Páginas de departamento o equipo: "Trabaja en el equipo de ingeniería de [empresa]" — una página por departamento con cultura específica, tecnologías usadas y beneficios
- Job descriptions optimizadas: cómo escribir ofertas de empleo con keywords naturales que posicionan en Google Jobs y en la búsqueda orgánica
- Páginas de ubicación: "Oficinas de [empresa] en Madrid" con contenido sobre la vida en la ciudad y el equipo local

PARTE 3 — CONTENIDO DE CULTURA CORPORATIVA CON VALOR SEO
Crea contenido auténtico que muestra cómo es trabajar en tu empresa:
- Blog de cultura: artículos escritos por empleados sobre su experiencia real trabajando en la empresa (un día en la vida de un data scientist en [empresa], cómo organizamos nuestros sprints, qué aprendí en mis primeros seis meses)
- Behind the scenes: contenido visual y escrito sobre la cultura, el espacio de trabajo y los rituales del equipo
- Engineering blog o blog de especialidad: si tienes equipos técnicos o creativos, un blog donde publican su conocimiento atrae a los mejores candidatos del sector
- Glassdoor y LinkedIn integrados en la estrategia SEO: cómo gestionar la reputación en plataformas de opiniones de empresa para fortalecer el SEO de employer branding

PARTE 4 — ESTRATEGIA DE LINK BUILDING PARA EMPLOYER BRANDING
Consigue autoridad de dominio para tu sección de careers:
- Participación en rankings de Best Place to Work: Great Place to Work, ranking de Expansión o sectorial — cada certificación genera backlinks de calidad
- Presencia en medios del sector: artículos de opinión de los fundadores o líderes sobre el futuro del trabajo, cultura remota, diversidad e inclusión
- Colaboraciones con universidades y escuelas de negocio: programa de prácticas, charlas, patrocinio de eventos — fuente de backlinks .edu de alta autoridad
- Podcast y apariciones en medios especializados: entrevistas en podcasts de recursos humanos, tecnología o startups que generan menciones y tráfico cualificado

PARTE 5 — MÉTRICAS DE EMPLOYER BRANDING SEO
Mide el impacto en la calidad y eficiencia de la contratación:
- Tráfico orgánico a la sección de careers: cuántos candidatos llegan desde Google a las páginas de empleo
- Organic-to-apply rate: porcentaje de visitantes orgánicos que envían una solicitud
- Quality of hire from organic: cómo los candidatos orgánicos se comparan con los de otros canales en calidad y permanencia
- Employer Brand Equity: cómo medir la percepción de marca empleadora con encuestas, Glassdoor rating y menciones en redes sociales
- Coste por candidato orgánico vs. canales de pago: cómo calcular el ROI de la inversión en contenido de employer branding

FORMATO DE ENTREGA
1. Mapa de keywords de employer branding con volúmenes estimados para el sector tecnológico en España
2. Plantilla de careers page principal con estructura SEO y elementos de conversión
3. Guía de publicación del blog de cultura: cómo estructurar el programa de contribuciones de empleados
4. Checklist de optimización de job descriptions para Google Jobs y búsqueda orgánica
5. Dashboard de Talent SEO: las diez métricas de employer branding con fuente de datos y frecuencia de revisión
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Atracción de candidatos cualificados mediante SEO y employer branding',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estrategia SEO de contenido para fintech y servicios financieros',
                'description'      => 'Diseña una estrategia de contenido SEO para empresas fintech, asesores financieros y entidades bancarias considerando las restricciones regulatorias del sector: EEAT financiero, disclaimers legales, contenido de alta autoridad y keywords de alta intención comercial en un sector con competencia extrema.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO para el sector financiero con experiencia en fintechs, gestoras de inversión, plataformas de seguros y asesores financieros independientes. Has navigado los estrictos requisitos de Google EEAT (Expertise, Experience, Authority, Trustworthiness) aplicados a sitios de "Your Money or Your Life" (YMYL) en los que el contenido financiero requiere un nivel de rigor excepcional. Tu objetivo es enseñarme a construir una estrategia de contenido SEO que posicione y genere confianza en el sector financiero.

CONTEXTO DEL SEO FINANCIERO
El SEO en el sector financiero tiene dos grandes complejidades: primero, es uno de los mercados más competitivos de internet (bancos, seguradoras, plataformas de inversión y comparadores invierten millones en SEO); segundo, Google aplica criterios de calidad extraordinariamente estrictos a los sitios YMYL, lo que significa que el contenido financiero debe demostrar expertise real, fuentes verificables y transparencia sobre quién lo produce.

PARTE 1 — EEAT FINANCIERO: CÓMO CONSTRUIRLO
Explica cómo demostrar a Google que eres una fuente financiera confiable:
- Autoría especializada: cada artículo financiero debe estar firmado por un experto identificable (asesor financiero registrado, economista, analista con credenciales verificables) con bio detallada y enlace al perfil de LinkedIn o registro oficial
- About page y credenciales: cómo estructurar la página de "Sobre nosotros" para que Google entienda quién hay detrás del contenido y por qué es confiable
- Citas a fuentes primarias: todo dato financiero debe citarse con enlace al organismo oficial (BCE, Banco de España, CNMV, Eurostat, INE) — no a otros blogs de finanzas
- Actualización de contenido: en finanzas, los tipos de interés, la legislación fiscal y los productos cambian constantemente — cómo establecer un proceso de revisión periódica del contenido
- Disclaimers y avisos legales: cómo redactar los disclaimers necesarios sin que bloqueen la indexación o penalicen el contenido

PARTE 2 — KEYWORD RESEARCH FINANCIERO
Identifica las keywords de alta intención en el sector financiero:
- Keywords informacionales de alto volumen: "cómo funciona la hipoteca variable", "diferencia entre fondo de inversión y ETF", "qué es la declaración de la renta"
- Keywords comerciales de alta intención: "mejor cuenta de ahorro 2025", "comparativa planes de pensiones", "hipoteca fija o variable — cuál elegir"
- Keywords de producto específico: nombre de productos financieros, tipos de seguros, categorías de inversión
- Keywords long-tail de nicho: "cómo invertir siendo autónomo España", "mejor ETF para principiantes en euros", "fiscalidad de los criptoactivos en España 2025"
- Análisis de SERP financiero: cómo interpretar los resultados de búsqueda para keywords financieras (comparadores, medios especializados, bancos) y encontrar huecos para posicionarte

PARTE 3 — TIPOS DE CONTENIDO FINANCIERO QUE POSICIONAN
Explica qué formatos de contenido funcionan mejor en el sector:
- Guías exhaustivas: guías de 4.000-8.000 palabras sobre productos o conceptos financieros complejos que actúan como pilar page del cluster
- Calculadoras financieras interactivas: calculadoras de hipoteca, de rentabilidad de inversión, de capacidad de ahorro — consiguen backlinks, engagement y señales de usuario positivas
- Comparativas de productos financieros: tablas comparativas de cuentas bancarias, planes de pensiones o seguros con datos actualizados regularmente
- Contenido de educación financiera: series de artículos para principiantes que construyen autoridad temática y capturan tráfico de usuarios en etapas tempranas del journey

PARTE 4 — LINK BUILDING EN EL SECTOR FINANCIERO
Consigue backlinks de calidad en un sector muy regulado:
- Relaciones con medios especializados: El Economista, Cinco Días, Expansión, Idealista/news — cómo hacer que tus expertos sean fuente de declaraciones para los periodistas
- Estudios de datos financieros propios: informes con estadísticas originales (encuesta de hábitos de ahorro, análisis de tipos hipotecarios, estudio de rentabilidades de fondos) que los medios citan
- Asociaciones del sector: ASNEF, EFPA, AEB, UNESPA — participación en eventos y publicaciones del sector que generan backlinks institucionales
- Colaboraciones con influencers de finanzas personales: creators de YouTube, podcasters o bloggers de finanzas personales que recomiendan herramientas y productos

PARTE 5 — CONTENIDO SEO BAJO RESTRICCIONES REGULATORIAS
Navega las restricciones legales sin sacrificar el SEO:
- Qué se puede y no se puede decir en contenido financiero según la normativa española y europea (MiFID II, Ley del Mercado de Valores)
- Cómo crear contenido educativo que sea útil para el usuario sin cruzar la línea de asesoramiento financiero no autorizado
- Compliance review del contenido: cómo establecer un proceso de revisión por el equipo legal que no ralentice excesivamente la publicación
- Cómo gestionar las actualizaciones de productos o cambios regulatorios (tipos de interés, cambios fiscales) para actualizar el contenido antes de que quede obsoleto y el posicionamiento caiga

FORMATO DE ENTREGA
1. Checklist EEAT financiero: veinte puntos para asegurarse de que el contenido cumple los criterios de Google para YMYL
2. Mapa de keywords financieras por etapa del journey con nivel de competencia y tipo de contenido recomendado
3. Plantilla de guía financiera completa: estructura, secciones obligatorias y disclaimer estándar
4. Proceso de link building financiero: calendario de relaciones con medios y publicación de estudios propios
5. Workflow de compliance de contenido financiero: cómo integrar la revisión legal sin bloquear la producción
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Posicionamiento SEO en el competitivo sector financiero y fintech',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marketing de contenidos SEO para despachos de abogados',
                'description'      => 'Diseña una estrategia de contenido SEO para abogados y despachos jurídicos que atraiga clientes potenciales con dudas legales: investigación de keywords de práctica jurídica, contenido educativo que posiciona, SEO local para abogados y medición de la conversión de tráfico en consultas y casos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing digital para el sector jurídico con experiencia en estrategias SEO para despachos de abogados, bufetes internacionales y abogados freelance en España y Latinoamérica. Has ayudado a despachos de todas las especialidades (laboral, mercantil, familia, penal, propiedad intelectual) a conseguir clientes a través del canal orgánico. Tu objetivo es enseñarme a construir una estrategia de contenido SEO para mi despacho o práctica jurídica.

CONTEXTO DEL MARKETING JURÍDICO
El SEO para abogados tiene desafíos únicos: la competencia es muy alta en keywords genéricas ("abogado Madrid"), el contenido legal es de alta sensibilidad (YMYL según Google) y las restricciones deontológicas limitan cómo los abogados pueden publicitar sus servicios. Sin embargo, hay una enorme demanda de información legal en internet que puede convertirse en clientes si se aborda correctamente.

PARTE 1 — KEYWORD RESEARCH PARA DESPACHOS JURÍDICOS
Identifica las búsquedas legales más valiosas:
- Keywords de servicio local: "abogado laboralista Barcelona", "despacho derecho de familia Madrid", "abogado accidentes tráfico Valencia" — alta intención, mayor facilidad de conversión
- Keywords de pregunta legal: "¿puedo reclamar por despido improcedente?", "cuánto tiempo tengo para reclamar un accidente", "qué hace un abogado de herencias" — alto volumen, usuario en fase de investigación
- Keywords de situación: "me han echado del trabajo qué hago", "cómo divorciarme sin ir a juicio", "mi socio quiere disolver la empresa" — el usuario describe su situación, no busca un abogado directamente
- Long-tail de especialidad: "abogado propiedad intelectual para agencias creativas", "asesoría legal para startups tecnológicas Madrid", "abogado laboral para autónomos"
- Herramientas específicas: cómo usar Google Autocomplete, "La gente también pregunta" y foros jurídicos para descubrir las dudas legales más frecuentes de tu público objetivo

PARTE 2 — CONTENIDO EDUCATIVO LEGAL QUE POSICIONA
Crea artículos que resuelven dudas y generan confianza:
- Artículos de pregunta-respuesta: "¿Qué es el despido objetivo y cuándo es procedente?" — responde la pregunta legalmente de forma comprensible, sin tecnicismos innecesarios
- Guías de procedimiento: "Proceso de divorcio de mutuo acuerdo en España: paso a paso" — guías exhaustivas que posicionan para búsquedas de proceso y atraen a usuarios en momento de decisión
- Artículos de novedad legislativa: cambios en la ley, sentencias relevantes del Tribunal Supremo o del TJUE que afectan a los ciudadanos — contenido de actualidad que posiciona rápido
- FAQ de especialidad: las veinte preguntas más frecuentes de tus clientes convertidas en artículos individuales — bajo esfuerzo, alto impacto en autoridad temática y long-tail keywords

PARTE 3 — SEO LOCAL PARA ABOGADOS
Posiciónate en tu ciudad o región:
- Google Business Profile para despachos: cómo optimizarlo con especialidades, horario, zona de servicio, fotos del despacho y gestión de reseñas de clientes
- NAP consistency (Name, Address, Phone): cómo asegurarse de que el nombre, dirección y teléfono del despacho son idénticos en todos los directorios jurídicos, Google Maps y la web
- Directorios jurídicos de alta autoridad: Abogados.com, Iabogado.com, Lexdir, registro oficial del Colegio de Abogados — backlinks de calidad y visibilidad adicional
- Contenido local: "Abogado laboralista en [ciudad]: qué derechos tienen los trabajadores según la legislación [comunidad autónoma]" — contenido geolocalizado que posiciona para búsquedas locales

PARTE 4 — EEAT JURÍDICO: CREDIBILIDAD Y AUTORIDAD
Construye autoridad en el contenido legal:
- Autoría identificada: cada artículo debe estar firmado por un abogado del despacho con número de colegiado y especialidad verificable
- Actualización de contenido legal: cómo establecer un calendario de revisión semestral de los artículos más importantes para asegurarse de que la información sigue siendo válida tras cambios legislativos
- Citas a fuentes jurídicas primarias: enlazar a legislación oficial (BOE, EUR-Lex), jurisprudencia (CENDOJ) y organismos oficiales (Ministerio de Justicia) en lugar de a otros blogs de abogados
- Deontología y publicidad de servicios jurídicos: qué está permitido y qué está prohibido en la comunicación de servicios legales según el Código Deontológico de la Abogacía Española

PARTE 5 — CONVERSIÓN Y MÉTRICAS DEL SEO JURÍDICO
Transforma el tráfico en consultas y clientes:
- Calls-to-action en contenido legal: cómo invitar a la consulta sin parecer agresivo (formulario de consulta inicial gratuita, teléfono visible, chat online)
- Lead qualification desde el blog: cómo los artículos pre-cualifican al potencial cliente antes de que llame (quien leyó "proceso de divorcio de mutuo acuerdo" probablemente busca exactamente ese servicio)
- Métricas del SEO jurídico: tráfico orgánico a páginas de servicio, formularios de contacto completados desde canal orgánico, llamadas atribuidas a búsqueda orgánica
- ROI del contenido jurídico: cómo calcular el valor de un nuevo cliente promedio y compararlo con el coste de producción del artículo que lo atrajo

FORMATO DE ENTREGA
1. Lista de cincuenta keywords jurídicas para las tres especialidades más comunes con volumen e intención
2. Plantilla de artículo de respuesta legal SEO con estructura, extensión y checklist de EEAT jurídico
3. Guía de SEO local para abogados: Google Business Profile paso a paso y lista de directorios jurídicos prioritarios
4. Política de actualización de contenido legal: calendario y proceso de revisión semestral
5. Sistema de seguimiento de leads orgánicos: cómo medir la conversión desde contenido hasta cliente en un despacho de abogados
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Captación de clientes para despachos jurídicos mediante SEO y contenido',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento SEO para reducir churn y retener clientes',
                'description'      => 'Construye una base de conocimiento optimizada para SEO que sirva simultáneamente para retener clientes actuales (reduciendo fricciones de uso) y atraer nuevos usuarios orgánicos desde Google. Aprende a identificar qué artículos de ayuda deben optimizarse para búsqueda y cómo medir el impacto en churn y satisfacción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en Knowledge Base SEO y Customer Success Operations con experiencia en empresas SaaS B2B. Has diseñado e implementado bases de conocimiento que simultáneamente sirven como herramienta de retención para clientes actuales y como canal SEO de adquisición para nuevos usuarios. Tu objetivo es enseñarme a construir y optimizar una knowledge base que cumpla ambos objetivos.

CONTEXTO DE LA KNOWLEDGE BASE DUAL
La mayoría de las empresas SaaS tienen dos problemas: los clientes actuales abren tickets de soporte para preguntas que ya están respondidas en la documentación (señal de que la documentación no es descubrible), y los usuarios potenciales buscan en Google "cómo hacer X con [categoría de software]" sin llegar a la documentación del producto. Una knowledge base bien construida y optimizada para SEO resuelve ambos problemas.

PARTE 1 — ARQUITECTURA DE LA KNOWLEDGE BASE SEO
Diseña la estructura de tu centro de ayuda para que posicione:
- Categorías principales: cómo organizar el contenido (por funcionalidad, por tipo de usuario, por caso de uso o por etapa del journey) para que sea intuitivo y rastreable por Google
- URLs limpias y descriptivas: cómo estructurar las URLs de los artículos de ayuda para que incluyan keywords naturales (ej.: /help/como-exportar-datos-csv en lugar de /help/article/12847)
- Breadcrumbs y navegación jerárquica: cómo implementar la navegación por niveles que ayuda tanto a los usuarios como a los motores de búsqueda a entender la estructura
- Internal linking en la knowledge base: cómo enlazar artículos relacionados de forma natural para reducir tickets de soporte y mejorar el SEO

PARTE 2 — KEYWORD RESEARCH PARA DOCUMENTACIÓN DE PRODUCTO
Identifica qué buscan los usuarios en Google sobre tu producto:
- Búsquedas de funcionalidad: "cómo crear un informe en [nombre de producto]", "cómo integrar [producto] con Slack", "exportar datos en [producto]"
- Búsquedas de categoría: "cómo gestionar proyectos online", "herramienta para automatizar reportes", "software de gestión de contratos — tutorial"
- Búsquedas de error o problema: "error al importar CSV en [producto]", "[nombre de producto] no envía notificaciones", "por qué no funciona X en [producto]"
- Búsquedas comparativas: "cómo hacer en [tu producto] lo que hacía en [competidor]" — captura usuarios que migran de la competencia
- Google Autocomplete y foros de la comunidad como fuentes de ideas de artículos: cómo sistematizar la captura de preguntas frecuentes

PARTE 3 — OPTIMIZACIÓN ON-PAGE DE ARTÍCULOS DE AYUDA
Aplica las mejores prácticas SEO a la documentación:
- Título del artículo como H1: debe incluir la keyword principal y responder explícitamente a la pregunta del usuario
- Párrafo de respuesta directa al inicio: los primeros cincuenta a cien palabras deben responder la pregunta de forma concisa — así Google puede mostrar featured snippets del artículo
- Estructura con H2 y H3: cómo organizar un tutorial largo con subtítulos claros que Google pueda indexar como índice de contenido
- Imágenes y videos: cómo optimizar las capturas de pantalla con alt text descriptivo y cuándo añadir un video tutorial corto que mejora el engagement
- Schema markup: cómo implementar HowTo Schema para tutoriales y FAQPage para artículos de pregunta-respuesta

PARTE 4 — KNOWLEDGE BASE COMO HERRAMIENTA DE RETENCIÓN
Usa la documentación para reducir el churn:
- Deflexión de tickets: cómo medir cuántos tickets de soporte se crean sobre temas que ya están documentados y usar ese dato para priorizar mejoras en la knowledge base
- Integración en el onboarding: cómo enlazar artículos específicos de la knowledge base en los correos de onboarding, tooltips del producto y mensajes in-app
- Proactive success content: artículos que educan a los clientes sobre features avanzadas que podrían no haber descubierto solos — reduce el riesgo de churn por infrautilización del producto
- Feedback loop: cómo el sistema de "¿Te fue útil este artículo?" de la knowledge base genera datos para identificar artículos que no responden bien a las preguntas

PARTE 5 — MÉTRICAS DE KNOWLEDGE BASE SEO
Mide el impacto dual de la documentación:
- Métricas SEO: tráfico orgánico a los artículos de ayuda, posición para keywords de funcionalidad, featured snippets conseguidos, conversión de tráfico de documentación a trial o registro
- Métricas de Customer Success: ticket deflection rate (% de tickets evitados gracias a la documentación), self-serve resolution rate, tiempo promedio de resolución de problemas por clientes que usan la knowledge base vs. los que abren tickets
- Correlación knowledge base con churn: cómo analizar si los clientes que más usan la knowledge base tienen un churn rate menor
- Content audit de la knowledge base: cómo identificar artículos obsoletos, artículos con mucho tráfico pero baja satisfacción, y artículos que faltan

FORMATO DE ENTREGA
1. Arquitectura de knowledge base SEO: estructura de categorías, URLs y navegación con ejemplos
2. Proceso de keyword research para documentación de producto: herramientas, fuentes de preguntas y criterios de priorización
3. Plantilla de artículo de ayuda optimizado para SEO: estructura, extensión y elementos clave
4. Sistema de ticket deflection: cómo medir, reportar y mejorar la tasa de resolución autónoma
5. Dashboard de knowledge base dual: métricas SEO y métricas de Customer Success en una sola vista
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Knowledge base que retiene clientes y atrae tráfico orgánico',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'SEO y estrategia de contenido para freelancers y consultores independientes',
                'description'      => 'Diseña una estrategia de contenido SEO realista para freelancers y consultores: cómo posicionarte como experto en tu especialidad en Google, qué tipo de contenido atrae clientes ideales, y cómo gestionar el SEO con tiempo limitado para que el canal orgánico se convierta en una fuente constante de proyectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO y marketing de contenidos para profesionales independientes, consultores y freelancers. Has ayudado a más de cien freelancers a posicionarse como expertos en su especialidad en Google y a reducir su dependencia del boca a boca y las plataformas de freelance. Tu objetivo es enseñarme a construir una presencia SEO que me traiga clientes de forma constante.

CONTEXTO DEL FREELANCER Y EL SEO
El mayor problema del freelancer que quiere hacer SEO es la falta de tiempo: entre los proyectos de clientes, las propuestas, la administración y el desarrollo profesional, no queda mucho tiempo para producir contenido regularmente. Necesito una estrategia que maximice el impacto con el mínimo tiempo invertido, que funcione para mi nicho específico y que se construya de forma acumulativa.

PARTE 1 — POSICIONAMIENTO Y NICHO SEO PARA FREELANCERS
Define tu posicionamiento SEO antes de crear contenido:
- La regla de la especificidad: "diseñador gráfico" nunca posicionará, pero "diseñador de packaging para marcas de alimentación ecológica" puede posicionar bien — cómo definir el nicho que quieres dominar
- Personal brand SEO: cómo posicionar tu nombre completo en Google para que cuando un cliente potencial te busque encuentre exactamente lo que quieres que vea
- Speciality keywords vs. name keywords: cómo trabajar las dos en paralelo (tu nombre + tu especialidad como keywords principales de tu estrategia)
- Análisis de la competencia freelance en SEO: cómo ver qué keywords usan otros freelancers de tu especialidad que ya tienen presencia orgánica y encontrar los huecos que ellos no cubren

PARTE 2 — ESTRATEGIA DE CONTENIDO PARA FREELANCERS CON POCO TIEMPO
Diseña un sistema de producción de contenido sostenible:
- El modelo de publicación mínima viable: un artículo de calidad al mes es suficiente para empezar a ver resultados en seis a doce meses — por qué la consistencia importa más que la frecuencia
- Tipos de contenido de alto impacto con bajo esfuerzo: casos de estudio de proyectos completados, lecciones aprendidas de proyectos difíciles, opiniones informadas sobre herramientas de tu especialidad
- Reutilización de contenido existente: cómo convertir propuestas de proyectos, procesos de trabajo y respuestas a preguntas frecuentes de clientes en artículos de blog con mínima edición adicional
- Evergreen vs. actualidad: por qué como freelancer debes priorizar casi exclusivamente el contenido evergreen (que sigue siendo relevante en dos o tres años) sobre el contenido de tendencias

PARTE 3 — WEB DE PORTFOLIO CON SEO INTEGRADO
Optimiza tu presencia web para posicionarte como experto:
- Homepage optimizada: cómo estructurar la página de inicio para que posicione tu especialidad + ubicación o sector objetivo desde el primer día
- Páginas de servicios SEO: una página por servicio principal con keyword específica, descripción del servicio, proceso de trabajo, para quién es y CTA de contacto
- Portfolio como contenido SEO: cómo presentar cada proyecto de tu portfolio como un mini caso de estudio con keyword objetivo (ej.: "Rediseño de identidad visual para empresa de tecnología de salud")
- Testimonios y casos de éxito: cómo estructurarlos para que tengan valor SEO además de valor de prueba social

PARTE 4 — LINK BUILDING PARA FREELANCERS SIN PRESUPUESTO
Consigue backlinks de calidad como profesional independiente:
- Guest posting en publicaciones del sector: cómo proponer artículos de opinión a blogs, revistas digitales y plataformas del sector donde están tus clientes potenciales
- Participación en podcasts como experto: cómo conseguir invitaciones como guest en podcasts de tu sector — cada episodio genera un backlink de la web del podcast y visibilidad ante su audiencia
- Directorios de profesionales: plataformas de freelancers reconocidas (Malt, Workana, Toptal en tu especialidad), directorios sectoriales, cámaras de comercio — cada uno aporta un backlink de calidad
- Menciones en estudios y encuestas: cómo colaborar con empresas que publican informes del sector aportando datos o citas de experto a cambio de una mención con enlace

PARTE 5 — CONVERSIÓN Y MEDICIÓN DE TU SEO FREELANCE
Convierte el tráfico en solicitudes de proyectos:
- CTA óptimo para freelancers: en lugar de "contrátame", usa llamadas a la acción que reduzcan la fricción ("Solicita una llamada de descubrimiento gratuita de 30 minutos", "Descarga mi guía de proceso de trabajo")
- Lead magnet para freelancers: qué recursos gratuitos puedes ofrecer (plantilla de brief, checklist de inicio de proyecto, mini-guía) que cualifiquen al potencial cliente y capturan su email
- Métricas mínimas que un freelancer debe revisar: tráfico mensual al portfolio, posición de keywords principales, formularios de contacto recibidos por canal, valor de los proyectos ganados desde canal orgánico
- Time investment vs. ROI: cómo calcular cuánto tiempo dedicar al SEO en función de tu tarifa por hora para asegurarte de que el ROI tiene sentido

FORMATO DE ENTREGA
1. Checklist de posicionamiento freelance: las diez decisiones que debes tomar antes de crear el primer artículo
2. Sistema de publicación mensual sostenible: proceso de selección de tema, redacción, publicación y distribución en cuatro horas al mes
3. Plantilla de página de servicio SEO para freelancers con estructura y copywriting de muestra
4. Lista de cincuenta ideas de artículos evergreen para freelancers creativos, técnicos y de negocio
5. Dashboard de SEO freelance simplificado: las cinco métricas que debes revisar cada mes y cómo obtenerlas gratis con Google Search Console y Analytics
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Posicionamiento SEO y captación de clientes para freelancers',
                'vote_score'       => 38,
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
