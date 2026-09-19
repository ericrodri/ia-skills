<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills407Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Analizar tendencias de mercado y competencia en marketing con IA',
                'description'       => 'Usa IA para realizar análisis competitivos profundos, identificar tendencias emergentes y detectar oportunidades de posicionamiento antes que la competencia.',
                'prompt_content'    => <<<'EOT'
Eres un analista de marketing estratégico con experiencia en inteligencia competitiva y análisis de mercado para empresas B2B y B2C. Ayúdame a realizar un análisis de mercado completo para [EMPRESA O PRODUCTO] en el sector [SECTOR] para el mercado [PAÍS O REGIÓN].

ANÁLISIS DEL ENTORNO MACRO (PESTEL simplificado)

Evalúa los factores externos más relevantes para este sector:
- Político-legal: regulaciones recientes o próximas que afecten al sector (privacidad, sostenibilidad, comercio)
- Económico: tendencias que impactan el poder adquisitivo del público objetivo y el comportamiento de compra
- Social: cambios en hábitos, valores o demografía que crean o eliminan demanda
- Tecnológico: innovaciones que disrumpen o transforman la forma de competir en este mercado
- Medioambiental: presiones sostenibles que influyen en las decisiones de compra o producción

Para cada factor, indica: nivel de impacto (alto/medio/bajo), horizonte temporal (inmediato/1-3 años/largo plazo) y oportunidad o amenaza principal.

ANÁLISIS COMPETITIVO DETALLADO

Identifica y analiza los 5 competidores más relevantes. Para cada uno:
Competidor [N]: [Nombre]
- Propuesta de valor principal: qué problema resuelven y para quién
- Segmento objetivo: a qué cliente van principalmente
- Ventaja competitiva: en qué son mejores que los demás (producto, precio, distribución, marca, servicio)
- Debilidad aparente: dónde dejan un hueco o atienden peor al cliente
- Estrategia de precio: posicionamiento (premium/mid/low) y modelo de monetización
- Presencia digital: canales donde son más activos y tipo de contenido que publican
- Mensajes clave: cómo se describen a sí mismos (tono, palabras frecuentes)
- Señales de movimiento reciente: lanzamientos, campañas, cambios de precio, expansión

MAPA DE POSICIONAMIENTO

Propón 2 matrices de posicionamiento competitivo:
Matriz 1: ejes de [precio vs. calidad percibida] — ubica todos los competidores y señala el espacio disponible
Matriz 2: ejes más relevantes para el sector [propón 2 ejes específicos] — repite el ejercicio

ANÁLISIS DE TENDENCIAS Y OPORTUNIDADES

Identifica:
- 3 tendencias de consumo en crecimiento en este sector (con datos o señales observables)
- 2 segmentos de cliente desatendidos o mal atendidos por la competencia actual
- 1 oportunidad de categoría nueva o sub-categoría emergente donde posicionarse como primero
- 3 palabras clave o temas de búsqueda con crecimiento sostenido en los últimos 12 meses

ANÁLISIS DE PROPUESTA DE VALOR PROPIA

Compara [EMPRESA O PRODUCTO] con la competencia:
- Dónde estás por encima de la media del sector
- Dónde estás por debajo (honestidad estratégica)
- Tu diferenciador más defendible a largo plazo
- Mensaje de posicionamiento sugerido de 1 frase (propuesta de valor única)

PLAN DE SEGUIMIENTO COMPETITIVO

Diseña un sistema de vigilancia continua:
- Fuentes a monitorizar semanalmente: (lista de 8-10 fuentes específicas)
- Herramientas gratuitas o de bajo costo para monitorización
- Frecuencia y formato del informe competitivo interno
- Señales de alerta que deben activar una respuesta estratégica urgente

Empresa o producto a analizar: [escribe aquí]
Sector y mercado geográfico: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Inteligencia competitiva y análisis estratégico de mercado',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Investigar mercado de tecnología y oportunidades de producto con IA',
                'description'       => 'Analiza el landscape tecnológico, identifica brechas en soluciones existentes y descubre oportunidades de producto usando IA para procesar grandes volúmenes de señales del mercado.',
                'prompt_content'    => <<<'EOT'
Eres un investigador de mercado tecnológico y estratega de producto con experiencia en análisis de ecosistemas de software y hardware. Ayúdame a investigar el mercado de [CATEGORÍA TECNOLÓGICA O PROBLEMA QUE RESUELVE EL PRODUCTO] para identificar oportunidades de desarrollo de producto o posicionamiento diferencial.

LANDSCAPE DEL ECOSISTEMA TECNOLÓGICO

Mapea el ecosistema completo de esta categoría:
- Soluciones líderes: los 5 productos o plataformas con mayor cuota de mercado, con su propuesta de valor en 1 frase
- Challengers: 3-5 productos emergentes que están creciendo rápido o disrumpiendo el segmento
- Herramientas adyacentes: soluciones de categorías cercanas que compiten indirectamente
- Plataformas e infraestructura: en qué se basan estas soluciones (cloud, APIs, frameworks)
- Vacíos del ecosistema: qué necesitan los usuarios que ninguna solución resuelve bien hoy

ANÁLISIS DE RESEÑAS Y FEEDBACK DE USUARIOS

Sintetiza lo que los usuarios dicen sobre las soluciones actuales:
- Las 5 quejas más repetidas en G2, Product Hunt, Reddit o foros especializados
- Las 5 características más valoradas y aplaudidas
- Peticiones de funcionalidades recurrentes que ningún competidor ha implementado
- Segmentos de usuario que expresan mayor insatisfacción con las opciones actuales
- Cambios recientes en valoraciones que indiquen deterioro o mejora de algún competidor

ANÁLISIS DE TENDENCIAS TÉCNICAS

Identifica las tendencias que van a transformar esta categoría:
- Avances tecnológicos relevantes (IA, nuevos protocolos, hardware) que cambian lo posible
- Estándares emergentes o cambios regulatorios que afectan al desarrollo
- Plataformas o APIs que están ganando adopción y crean nuevas posibilidades
- Deuda técnica acumulada en las soluciones líderes que abre oportunidad a nuevos entrantes

DEFINICIÓN DE OPORTUNIDADES DE PRODUCTO

A partir del análisis anterior, define 3 oportunidades concretas:
Oportunidad [N]:
- Nombre descriptivo de la oportunidad
- Problema específico que resuelve y para quién
- Por qué las soluciones actuales lo hacen mal
- Hipótesis de solución técnica (sin entrar en detalle de implementación)
- Tamaño estimado del mercado potencial (TAM/SAM/SOM aproximados con razonamiento)
- Barreras de entrada a superar
- Ventana de oportunidad: cuánto tiempo existe antes de que alguien lo resuelva

VALIDACIÓN DE LA OPORTUNIDAD

Para la oportunidad más prometedora, diseña un plan de validación:
- 5 preguntas clave para entrevistas con usuarios potenciales
- Experimento de smoke test: cómo validar demanda sin construir el producto
- Métricas de éxito del experimento de validación
- Señales que confirman continuar y señales que indican pivotar

Categoría tecnológica o problema a investigar: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Research de mercado tecnológico y descubrimiento de oportunidades de producto',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Analizar tendencias de diseño y benchmarking competitivo visual con IA',
                'description'       => 'Usa IA para investigar tendencias de diseño, analizar la identidad visual de la competencia y encontrar oportunidades de diferenciación estética para tu marca o cliente.',
                'prompt_content'    => <<<'EOT'
Eres un director de arte y estratega de diseño con experiencia en branding y análisis competitivo visual. Ayúdame a realizar un análisis de tendencias de diseño y benchmarking visual para el sector [SECTOR O INDUSTRIA] con el objetivo de [DEFINIR LA MARCA / REDISEÑAR / DIFERENCIAR].

ANÁLISIS DE TENDENCIAS VISUALES ACTUALES

Identifica las tendencias de diseño más relevantes para este sector en 2025-2026:
- Tipografía: estilos dominantes (serif clásico, sans experimental, display…), usos creativos emergentes
- Color: paletas que están ganando terreno, colores de acento recurrentes, transición desde paletas anteriores
- Composición: grids, uso del espacio blanco, asimetría vs. orden, composición en dispositivos móviles
- Ilustración y elementos gráficos: estilos ilustrativos, iconografía, texturas, patrones
- Fotografía: estilos fotográficos dominantes (lifestyle, flat lay, CGI, documental)
- Motion y microinteracciones: tendencias en animación para web y apps

Para cada área, indica: nivel de adopción en el sector (masiva/emergente/de nicho) y recomendación (seguir/adaptar/evitar por saturación).

BENCHMARKING VISUAL DE COMPETIDORES

Analiza la identidad visual de los 6 competidores principales. Para cada uno:
Marca [N]: [Nombre]
- Paleta de colores principal: colores dominantes y su connotación estratégica
- Tipografía: familia tipográfica y personalidad que transmite
- Estilo visual general: 3 adjetivos que definen su estética
- Tono de comunicación visual: emocional/racional/aspiracional/funcional
- Coherencia de marca: consistencia entre web, redes sociales y material impreso (alta/media/baja)
- Audiencia implícita: a quién parece dirigirse su estética
- Punto diferencial visual: qué los hace visualmente reconocibles

MAPA PERCEPTUAL DE POSICIONAMIENTO VISUAL

Crea un mapa verbal con dos ejes relevantes para el sector:
Eje horizontal: [ej. clásico/moderno] o [minimalista/expresivo]
Eje vertical: [ej. serio/juguetón] o [premium/accesible]

Ubica cada competidor en el mapa y señala el espacio visual disponible para diferenciarse.

OPORTUNIDADES DE DIFERENCIACIÓN VISUAL

Basándote en el análisis:
- Zona del mapa perceptual con menos competidores: oportunidad de ocupar un territorio visual propio
- Convención visual del sector que podría romperse estratégicamente sin perder credibilidad
- Elemento visual sub-utilizado en el sector con potencial de convertirse en signature mark
- Referencias de otros sectores que podrían inspirar una identidad fresca y diferente

BRIEF CREATIVO BASADO EN EL ANÁLISIS

Redacta un brief creativo de 400 palabras para el diseño o rediseño basado en todos los hallazgos:
- Posicionamiento de marca en una frase
- Valores a transmitir visualmente (máximo 4)
- Palabras que SÍ deben asociarse a la marca al verla
- Palabras que NO deben asociarse (para delimitar el territorio)
- Referencias inspiracionales de dentro y fuera del sector (describe la estética, sin nombres de marcas competidoras directas)
- Restricciones o requisitos no negociables

Sector o industria a analizar: [escribe aquí]
Marca o cliente para el que se realiza el análisis: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Benchmarking visual y análisis de tendencias de diseño',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Investigar mercado y perfilar clientes ideales para ventas B2B con IA',
                'description'       => 'Usa IA para definir perfiles de cliente ideal (ICP), investigar mercados objetivo y priorizar segmentos con mayor probabilidad de cierre en ventas B2B.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de ventas B2B y especialista en inteligencia de mercado. Ayúdame a investigar el mercado y construir perfiles de cliente ideal (ICP) para [EMPRESA: qué vende, a quién, ticket medio, ciclo de venta actual].

DEFINICIÓN DEL MERCADO TOTAL DIRECCIONABLE

Delimita el universo de clientes potenciales:
- Criterios de inclusión: qué tipo de empresa puede beneficiarse del producto (sector, tamaño, geografía, tecnología que usan, procesos que tienen)
- Criterios de exclusión: qué tipo de empresa NO es apta aunque parezca similar (casos donde el producto no funciona)
- Estimación del número de empresas que cumplen los criterios en el mercado objetivo
- Distribución por segmento: % de empresas en cada rango de tamaño (micro/pyme/mid-market/enterprise)

PERFILES DE CLIENTE IDEAL (ICP)

Desarrolla 3 perfiles de ICP distintos ordenados por prioridad:

ICP [N] — [Nombre descriptivo: ej. "Pyme industrial en transformación digital"]
- Descripción de la empresa: sector, tamaño (empleados y facturación), madurez tecnológica, ubicación
- Síntoma visible del problema: cómo reconocer desde fuera que esta empresa tiene el dolor que resuelves
- Desencadenante de compra: qué evento o situación interna los empuja a buscar una solución ahora
- Perfil del comprador económico: cargo, responsabilidades, métricas por las que le evalúan
- Perfil del usuario final: quién usa el producto en el día a día y qué valora
- Influenciadores y bloqueadores: quién más participa en la decisión y quién puede frenarla
- Criterios de decisión de compra: por qué nos elegiría a nosotros vs. a un competidor
- Tiempo medio de ciclo de venta estimado para este perfil
- Señales de que es un mal momento: cuándo aunque todo cuadre no debemos perseguir esta cuenta

ESTRATEGIA DE PROSPECCIÓN POR ICP

Para cada perfil, diseña la táctica de entrada:
- Fuentes de leads: dónde encontrar empresas de este perfil (LinkedIn, directorios, eventos, partners)
- Criterios de scoring para priorizar leads dentro del perfil
- Mensaje de apertura personalizado: asunto + primeras 3 frases del primer email o mensaje LinkedIn
- Secuencia de prospección: número de toques, canales y espaciado temporal recomendado
- Cuenta ancla de referencia: tipo de empresa que ya es cliente y puede usarse como caso de éxito con este perfil

ANÁLISIS DE LA COMPETENCIA DESDE LA PERSPECTIVA DEL COMPRADOR

Entiende qué evalúa el comprador cuando compara proveedores:
- Los 5 criterios más importantes en el proceso de evaluación de este tipo de cliente
- Dónde buscan referencias y validación antes de tomar la decisión
- Argumentos competitivos para los 3 competidores más frecuentes (por qué elegirnos a nosotros)
- Objeciones más frecuentes de este segmento y respuesta estratégica para cada una

Descripción de la empresa (producto, mercado actual, ticket medio): [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Definición de ICP y estrategia de prospección B2B',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Realizar análisis de competencia de producto y descubrir gaps del mercado con IA',
                'description'       => 'Analiza el landscape competitivo de tu categoría de producto, identifica oportunidades no cubiertas y prioriza funcionalidades basándote en señales del mercado.',
                'prompt_content'    => <<<'EOT'
Eres un product manager senior especializado en estrategia de producto y análisis competitivo. Ayúdame a realizar un análisis de competencia completo para [PRODUCTO] en la categoría [CATEGORÍA] para informar la hoja de ruta del producto y las decisiones de posicionamiento.

MAPEO DEL LANDSCAPE COMPETITIVO

Clasifica el ecosistema competitivo en capas:
Competidores directos (misma categoría, mismo problema, mismo segmento):
- Nombre del producto, empresa, año de fundación, modelo de negocio
- Para cada uno: propuesta de valor en 1 frase y segmento principal

Competidores indirectos (mismo problema, diferente solución):
- Lista con descripción de en qué se solapan y en qué difieren

Sustitutos (el cliente podría usar esto en lugar de tu producto):
- Lista con estimación de cuándo eligen el sustituto sobre una solución dedicada

MATRIZ DE FUNCIONALIDADES COMPARATIVA

Crea una tabla de comparación de funcionalidades. Para cada funcionalidad clave:
- Indica si el competidor la tiene: ✓ (completa) / ~ (parcial) / ✗ (ausente) / 💰 (solo en plan caro)
- Funcionalidades a incluir: las 15-20 más relevantes para los usuarios de esta categoría

A partir de la matriz, identifica:
- Funcionalidades que todos tienen: las "apuestas de mesa" que son requisito mínimo
- Funcionalidades que nadie tiene aún: oportunidades de innovación o liderazgo
- Funcionalidades donde la diferencia de calidad es mayor entre competidores

ANÁLISIS DE PRICING Y MODELO DE NEGOCIO

Para los 5 competidores principales:
- Modelo de precios: freemium / trial / suscripción / por uso / por asiento / enterprise
- Rango de precios: desde el plan de entrada hasta el plan más completo
- Qué incluye cada plan: diferencias principales entre tiers
- Estrategia de expansión de ingresos: cómo intentan aumentar el gasto por cliente

Análisis de huecos de precio: qué segmento de precio está desatendido (muy barato o muy caro)

ANÁLISIS DE RESEÑAS Y VOZ DEL CLIENTE

Sintetiza el feedback público de los competidores:
- Top 5 puntos fuertes más mencionados para cada competidor
- Top 5 quejas o frustraciones más mencionadas para cada competidor
- Funcionalidades más solicitadas en foros, Reddit, Product Hunt, AppSumo
- Segmentos de usuarios que expresan más frustración con las opciones actuales

OPORTUNIDADES ESTRATÉGICAS PRIORIZADAS

Basándote en todo el análisis, define:
Oportunidad [N]: [Nombre]
- Problema del usuario no resuelto bien por nadie
- Evidencia de demanda (señales concretas)
- Esfuerzo estimado de implementación: bajo/medio/alto
- Impacto potencial en retención/adquisición/expansión
- Urgencia: cuánto tiempo existe antes de que un competidor lo implemente
- Recomendación: construir / comprar / hacer alianza / descartarlo

Producto a analizar y categoría: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Análisis competitivo de producto y priorización de roadmap',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Investigar mercado laboral y tendencias de talento con IA para RRHH',
                'description'       => 'Analiza el mercado laboral de tu sector, identifica tendencias de compensación, demanda de habilidades y competencia por talento para tomar mejores decisiones de selección y retención.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en People Analytics e inteligencia de mercado laboral. Ayúdame a investigar el mercado de talento para [EMPRESA: sector, tamaño, ubicación] con foco en [ROLES O DEPARTAMENTOS CRÍTICOS] para mejorar la estrategia de atracción, compensación y retención.

ANÁLISIS DEL MERCADO LABORAL PARA ESTOS ROLES

Caracteriza la situación actual del mercado:
- Nivel de demanda: cuántas empresas buscan estos perfiles actualmente y tendencia (creciendo/estable/bajando)
- Nivel de oferta: escasez o abundancia de candidatos cualificados en el mercado local y remoto
- Tiempo medio de cobertura: cuánto tardan las empresas del sector en cubrir estas posiciones
- Perfiles más buscados vs. más disponibles: qué combinación de habilidades es más escasa

ANÁLISIS DE COMPENSACIÓN Y BENEFICIOS

Para cada rol o familia de roles:
Rango salarial de mercado: mínimo / mediana / máximo en el mercado objetivo
Distribución por nivel de experiencia:
- Junior (0-2 años): rango y qué ofrecen las empresas que consiguen atraer talento
- Mid (2-5 años): rango y diferenciales más comunes
- Senior (5+ años): rango, variables y equity si aplica

Beneficios más valorados por este perfil (ordenados por importancia percibida):
- Top 5 beneficios no monetarios que más influyen en la decisión de cambio
- Beneficios que el sector suele ofrecer pero que los candidatos valoran poco (para reasignar presupuesto)
- Beneficios diferenciales que pocas empresas ofrecen y que generan ventaja competitiva

ANÁLISIS DE COMPETIDORES POR TALENTO

Identifica quiénes compiten por el mismo talento:
- Empresas que contratan con más frecuencia estos perfiles en el mercado local
- Propuesta de valor al empleado (EVP) de los 5 empleadores más atractivos del sector
- Glassdoor, LinkedIn Salary o Infojobs: qué imagen tienen estas empresas como empleadoras
- Señales de rotación alta o baja en los competidores y posibles causas

TENDENCIAS DE HABILIDADES Y FORMACIÓN

Analiza cómo está evolucionando el perfil requerido:
- Habilidades técnicas con mayor crecimiento de demanda en los últimos 12 meses
- Habilidades que están perdiendo relevancia (para no sobrevaluar en selección)
- Certificaciones o formaciones más valoradas por los empleadores del sector
- Habilidades blandas más diferenciadores entre candidatos del mismo nivel técnico

RECOMENDACIONES ESTRATÉGICAS

A partir del análisis, propón acciones concretas:
- Ajuste de compensación: si hay brecha con el mercado, cuánto y cómo comunicarlo internamente
- Propuesta de valor al empleado (EVP): 3 puntos diferenciadores reales que pueden comunicarse a candidatos
- Fuentes de candidatos alternativas: dónde encontrar talento que la competencia no está mirando
- Programa de desarrollo interno: qué habilidades escasas pueden desarrollarse desde dentro
- Estrategia de retención preventiva: señales de riesgo de fuga y acciones de retención por segmento

Empresa, sector y roles críticos a analizar: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Inteligencia de mercado laboral y estrategia de talento',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Analizar oportunidades de inversión y tendencias de sector financiero con IA',
                'description'       => 'Usa IA para investigar sectores de inversión, analizar tendencias macroeconómicas y comparar vehículos de inversión con una metodología estructurada y reproducible.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero senior especializado en análisis sectorial e identificación de oportunidades de inversión. Ayúdame a realizar un análisis de mercado financiero sobre [SECTOR O CLASE DE ACTIVO] para [PERFIL DEL INVERSOR: particular / institucional, horizonte temporal, tolerancia al riesgo].

NOTA LEGAL IMPORTANTE: Este análisis tiene carácter exclusivamente educativo e informativo. No constituye asesoramiento financiero personalizado. Toda decisión de inversión debe ser tomada previa consulta con un asesor financiero regulado.

CONTEXTO MACROECONÓMICO RELEVANTE

Analiza los factores macro que más afectan a este sector o clase de activo:
- Ciclo económico actual: expansión/contracción y posición en el ciclo
- Política monetaria: tipos de interés, perspectivas de evolución y efecto sobre el sector
- Inflación: nivel actual y tendencia, impacto en márgenes y en valoración
- Geopolítica: riesgos o catalizadores geopolíticos específicos para este sector
- Regulación: cambios normativos recientes o esperados que impacten el sector

ANÁLISIS SECTORIAL

Caracteriza el sector o clase de activo:
- Tamaño del mercado global y tasa de crecimiento anual compuesto (CAGR) en los últimos 5 años
- Principales actores o índices representativos
- Fase del ciclo sectorial: nacimiento / crecimiento / madurez / declive
- Drivers de crecimiento: 3-5 factores que impulsan el crecimiento del sector
- Riesgos estructurales: 3-5 factores que podrían frenar o revertir el crecimiento
- Correlación con otros activos: cómo se comporta respecto a mercado general, bonos, materias primas

COMPARATIVA DE VEHÍCULOS DE INVERSIÓN

Para acceder a este sector, compara las opciones disponibles:
Opción [N]: [ETF / acción individual / fondo de inversión / bono sectorial / alternativo]
- Descripción: qué incluye, cómo está construido
- Exposición real: qué porcentaje al sector objetivo y qué otros activos lleva
- Costes totales (TER o comisiones): impacto en rentabilidad a largo plazo
- Liquidez: facilidad de entrada y salida
- Riesgo específico: riesgos adicionales de este vehículo vs. exposición directa
- Adecuado para: qué perfil de inversor y horizonte temporal es ideal

ESCENARIOS DE INVERSIÓN

Analiza 3 escenarios posibles a [HORIZONTE TEMPORAL]:
Escenario optimista (probabilidad estimada: X%):
- Qué tendría que ocurrir para que se materialice
- Rentabilidad potencial estimada y razonamiento

Escenario base (probabilidad estimada: X%):
- Hipótesis de trabajo más probable
- Rentabilidad esperada con este escenario

Escenario adverso (probabilidad estimada: X%):
- Riesgos que se materializan y su impacto
- Pérdida potencial y tiempo de recuperación estimado

FRAMEWORK DE DECISIÓN PARA EL INVERSOR

Guía para tomar la decisión de forma informada:
- Preguntas clave que el inversor debe responder antes de actuar
- Señales que confirmarían la tesis de inversión en los próximos 3-6 meses
- Señales de alerta que indicarían revisar o salir de la posición
- Tamaño de posición sugerido: cómo pensar en la asignación respecto al portfolio total

Sector o clase de activo a analizar: [escribe aquí]
Perfil del inversor y horizonte temporal: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Análisis sectorial e investigación de oportunidades de inversión',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Investigar jurisprudencia y tendencias legales del sector con IA',
                'description'       => 'Analiza tendencias regulatorias, jurisprudencia relevante y cambios normativos de un sector específico para anticipar riesgos y oportunidades legales para clientes o tu despacho.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especialista en [ÁREA DEL DERECHO] con amplia experiencia en inteligencia legal y análisis normativo. Ayúdame a realizar una investigación jurídica de mercado sobre las tendencias regulatorias y jurisprudenciales que afectan al sector [SECTOR] en [JURISDICCIÓN].

PANORAMA NORMATIVO ACTUAL

Mapea el marco legal vigente:
- Normas principales aplicables: leyes, reglamentos y directivas vigentes más relevantes (nombre, fecha de aprobación, ámbito)
- Normas en tramitación o anteproyectos: cambios normativos en proceso legislativo con probabilidad y plazo estimado
- Regulación internacional o comunitaria: normas supranacionales que condicionan la normativa local
- Organismos supervisores: autoridades reguladoras con competencia y sus criterios de interpretación recientes

ANÁLISIS JURISPRUDENCIAL RECIENTE

Identifica las resoluciones más relevantes de los últimos 12-24 meses:
- Tribunal Supremo / Tribunal Constitucional: sentencias que hayan creado o modificado doctrina aplicable al sector
- Tribunales de instancia: resoluciones relevantes que anticipen la dirección que tomará el alto tribunal
- TJUE / CEDH si aplica: resoluciones comunitarias o europeas con efecto en la jurisdicción objetivo
- Autoridades administrativas: resoluciones de la AEPD, CNMC, CNMV u organismos sectoriales equivalentes

Para cada resolución clave, indica:
- Hechos del caso de forma resumida
- Doctrina o criterio establecido
- Impacto práctico para las empresas del sector
- Riesgos que genera o elimina para los clientes

TENDENCIAS REGULATORIAS EMERGENTES

Anticipa hacia dónde va la regulación:
- Tendencias europeas o internacionales que suelen trasladarse a la jurisdicción objetivo
- Áreas donde el regulador está incrementando la supervisión y la cuantía de las sanciones
- Sectores o prácticas donde existe un vacío regulatorio que probablemente se cubrirá pronto
- Lobby y posiciones de la industria: qué cambios propone el sector y con qué probabilidad prosperan

ANÁLISIS DE RIESGO LEGAL PARA LOS CLIENTES

Para una empresa típica del sector, evalúa:
- Riesgo de cumplimiento: qué obligaciones son más frecuentemente incumplidas y por qué
- Riesgo de litigación: tipos de reclamaciones más frecuentes en el sector (clientes, empleados, competidores, regulador)
- Riesgo reputacional legal: casos con impacto mediático que deberían servir de aviso
- Riesgo emergente: nuevas áreas de exposición que aún no son frecuentes pero van a crecer

OPORTUNIDADES LEGALES PARA EL DESPACHO O ASESOR

Identifica oportunidades de negocio jurídico:
- Áreas donde la demanda de asesoramiento legal va a crecer en los próximos 12 meses
- Nuevos servicios de asesoramiento preventivo que el sector aún no contrata pero necesitará
- Perfil de empresa con mayor necesidad inmediata de asesoramiento en estas materias
- Argumentos para presentar estos servicios a clientes actuales y potenciales

Área del derecho y sector a investigar: [escribe aquí]
Jurisdicción principal: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Investigación jurídica de mercado y análisis de tendencias regulatorias',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Analizar churn y detectar patrones de abandono de clientes con IA',
                'description'       => 'Usa IA para investigar por qué los clientes se van, identificar señales tempranas de abandono y diseñar estrategias de retención basadas en datos cualitativos y cuantitativos.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en Customer Success y análisis de retención de clientes con experiencia en empresas SaaS y de suscripción. Ayúdame a investigar el churn de [EMPRESA O PRODUCTO] y desarrollar un plan de acción basado en los hallazgos.

DIAGNÓSTICO DE CHURN ACTUAL

Antes de buscar soluciones, entiende el problema con precisión:
- Tasa de churn actual: mensual, trimestral y anual (y comparativa con benchmark del sector)
- Tipos de churn: voluntario (el cliente decide irse), involuntario (fallo de pago), contracción (baja de plan)
- Distribución del churn por segmento: qué tipo de cliente se va más (tamaño, sector, plan, antigüedad)
- Revenue churn vs. logo churn: cuál de los dos es más preocupante y por qué
- Momento del churn: en qué mes del ciclo de vida se pierde más clientes (primeros 90 días, renovación anual, etc.)

INVESTIGACIÓN CUALITATIVA DE CAUSAS

Diseña la investigación para entender el "por qué":
- Guion de entrevista de exit: 10 preguntas para hablar con clientes que cancelaron recientemente (máx. 20 minutos)
- Encuesta de cancelación: 5 preguntas de opción múltiple + 1 abierta para capturar en el momento del churn
- Análisis de tickets de soporte: qué palabras, categorías o sentimientos aparecen más en los tickets de clientes que luego churnearon
- NPS de churners vs. activos: comparativa y análisis de verbatims de detractores

SEÑALES DE ALERTA TEMPRANA (LEADING INDICATORS)

Identifica los comportamientos que predicen el churn antes de que ocurra:
- Señales de uso del producto: métricas de engagement que caen antes de la cancelación (login frecuencia, funcionalidades usadas, volumen de datos procesados)
- Señales de relación: reducción de respuestas a emails, ausencia en revisiones de negocio, cambio de contacto
- Señales administrativas: preguntas sobre facturación, solicitudes de pausas, conversaciones sobre precio
- Señales externas: cambios en la empresa del cliente (recortes, fusión, cambio de dirección)

Para cada señal, define:
- Umbral de alerta: cuándo activar la señal (ej. "sin login en 14 días")
- Urgencia: rojo/amarillo según el riesgo
- Acción inmediata recomendada cuando se activa la señal

ESTRATEGIA DE INTERVENCIÓN POR SEGMENTO

Diseña playbooks de retención para los 3 segmentos con mayor churn:
Segmento [N]: [Descripción]
- Causa principal de churn en este segmento
- Señal de alerta más fiable para este perfil
- Secuencia de intervención: paso 1 (quién actúa, qué hace, cuándo), paso 2, paso 3
- Oferta de retención si la conversación llega a ese punto: qué proponer y qué autorización necesita el CSM
- Criterio para escalar: cuándo el CSM debe involucrar a su manager o al equipo de producto

MEDICIÓN DEL ÉXITO DEL PROGRAMA DE RETENCIÓN

- KPIs del programa: tasa de retención de cuentas en riesgo, revenue saved, tiempo medio de intervención
- Cadencia de revisión: con qué frecuencia revisar los playbooks y actualizarlos
- Herramienta de seguimiento: cómo documentar cada intervención y su resultado

Empresa o producto y contexto actual de churn: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Análisis de churn y diseño de estrategias de retención de clientes',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Investigar nichos de mercado rentables para servicios freelance con IA',
                'description'       => 'Usa IA para identificar nichos de mercado poco explotados, evaluar la rentabilidad de diferentes especializaciones y posicionarte en el segmento con mejor relación demanda-competencia.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de negocios para profesionales independientes con experiencia en estrategia de posicionamiento y desarrollo de clientela para freelancers. Ayúdame a identificar el nicho de mercado más rentable para mis servicios de [TIPO DE SERVICIO FREELANCE] considerando mi experiencia actual en [EXPERIENCIA Y HABILIDADES].

EVALUACIÓN DE TU SITUACIÓN ACTUAL

Antes de buscar nichos, define tu punto de partida honestamente:
- Servicios que ofreces: lista de 5-10 servicios o habilidades que puedes vender hoy
- Trabajos que más disfrutas: cuáles te generan más energía y mejores resultados
- Trabajos que haces bien pero odias: servicios que podrías ofrecer pero que drenan tu motivación
- Clientes actuales o pasados: en qué sectores o tipos de empresa tienes más experiencia
- Tarifa actual vs. tarifa objetivo: cuánto cobras ahora y cuánto quieres cobrar en 12 meses

ANÁLISIS DE NICHOS POTENCIALES

Para cada nicho candidato que identifiquemos, evalúa:
Nicho [N]: [Nombre descriptivo — ej. "Diseño UX para apps de salud mental" o "Copywriting para SaaS B2B en inglés"]
- Tamaño: número estimado de empresas o clientes potenciales en el mercado accesible
- Crecimiento: ¿el número de empresas en este nicho está creciendo o decreciendo?
- Competencia: cuántos freelancers con tu mismo perfil compiten activamente (busca en Upwork, LinkedIn, directorios)
- Ticket medio: cuánto pagan habitualmente las empresas de este nicho por servicios como los tuyos
- Facilidad de acceso: qué tan fácil es conseguir los primeros clientes sin una red establecida
- Barrera de entrada: qué hace falta para ser competitivo en este nicho (certificaciones, portfolio específico, red)
- Potencial de posicionamiento: qué tan fácil es diferenciarse y ser recordado como el experto

EVALUACIÓN Y PUNTUACIÓN DE NICHOS

Puntúa cada nicho del 1 al 10 en:
- Rentabilidad potencial (ticket x volumen de trabajo posible)
- Alineación con tus habilidades actuales
- Alineación con lo que disfrutas
- Facilidad de acceso en los próximos 90 días
- Potencial de posicionamiento a largo plazo
Suma ponderada y ranking final de nichos recomendados.

PLAN DE ENTRADA AL NICHO ELEGIDO

Para el nicho mejor puntuado, diseña el plan de los primeros 90 días:
Mes 1 — Posicionamiento:
- Actualización del perfil de LinkedIn: headline, about y servicios orientados al nicho
- Portfolio: qué piezas crear o adaptar para demostrar experiencia en el nicho (aunque sean proyectos ficticios o pro bono)
- Mensaje de posicionamiento: cómo explicar en 30 segundos qué haces y para quién

Mes 2 — Generación de demanda:
- Canal de adquisición principal: cuál funciona mejor para este nicho y por qué
- Contenido de autoridad: 4 temas sobre los que publicar que demuestren expertise en el nicho
- Primeras conversaciones: lista de 20 empresas del nicho a las que contactar y guion de primer mensaje

Mes 3 — Primeros clientes y aprendizaje:
- Oferta de lanzamiento: cómo estructurar un primer proyecto para un cliente del nicho que reduzca el riesgo percibido
- Proceso de feedback: cómo extraer testimonios y aprendizajes del primer proyecto
- Ajuste de tarifa: cuándo y cómo subir el precio una vez tengas referencia en el nicho

Tipo de servicio freelance y experiencia actual: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Identificación de nichos rentables y posicionamiento freelance',
                'vote_score'        => 51,
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
