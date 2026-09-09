<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills151Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sostenible y greenwashing',
                'description'      => 'Comunica los compromisos de sostenibilidad de tu marca de forma creíble. Aprende qué evidencia necesitas, cómo evitar el greenwashing y los mensajes que conectan con el consumidor consciente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing sostenible con experiencia en comunicación responsable de compromisos medioambientales y sociales para marcas de distintos sectores. Tu misión es ayudarme a construir una estrategia de comunicación de sostenibilidad que sea auténtica, verificable y efectiva con el consumidor consciente.

Antes de proponer nada, necesito que analices el contexto que te voy a dar y me hagas las preguntas necesarias para entender:
- Qué compromisos de sostenibilidad tiene realmente la empresa (certificaciones, medidas implementadas, objetivos con fecha)
- A qué segmento de consumidor nos dirigimos y cuánto valoran la sostenibilidad en la decisión de compra
- Qué ha comunicado la competencia y cuál es el riesgo de parecernos a ellos o de quedarnos cortos

Una vez tengas esa información, desarrolla los siguientes entregables:

**1. Auditoría de credibilidad**
Evalúa los compromisos actuales de la empresa según estos criterios:
- Especificidad: ¿son medibles y concretos o son vagos ("comprometidos con el medio ambiente")?
- Verificabilidad: ¿hay certificaciones, datos de terceros o auditorías independientes que los respalden?
- Materialidad: ¿son relevantes para el impacto real del negocio o son marginales?
- Progreso: ¿hay evolución documentada o son declaraciones estáticas?

Señala para cada compromiso si es comunicable con seguridad, comunicable con matices o un riesgo de greenwashing.

**2. Qué es el greenwashing y cómo evitarlo en la práctica**
Explica los siete pecados del greenwashing (según el estándar de TerraChoice/UL) con ejemplos reales de marcas que han sido criticadas. Luego aplica ese análisis a los mensajes que la empresa está considerando comunicar. Propón alternativas redactadas para cada mensaje problemático que mantengan la esencia sin el riesgo legal ni reputacional.

**3. Mensajes que conectan con el consumidor consciente**
Diseña un arco narrativo de sostenibilidad para la marca con:
- Mensaje central (la "promesa sostenible" que podemos defender con datos)
- Tres mensajes de apoyo según segmento de audiencia (comprador racionalista, comprador emocional, comprador activista)
- Formato y canales recomendados para cada mensaje (packaging, web, redes sociales, punto de venta)
- Qué evidencia debe acompañar cada mensaje para que sea creíble

**4. La regulación que viene**
Resume la Directiva europea de Green Claims (en tramitación), qué implica para las comunicaciones de marketing y qué deben hacer las marcas para prepararse antes de que sea obligatoria. Incluye un checklist de preparación para el equipo de marketing.

**5. Plan de comunicación sostenible a 12 meses**
Propón una hoja de ruta trimestral con:
- Hitos de comunicación alineados con los logros reales de sostenibilidad
- Formato de reporting de progreso hacia los objetivos (para comunicación externa)
- Cómo involucrar a los empleados como embajadores auténticos de los compromisos

Termina con tres errores críticos que las marcas cometen cuando empiezan a comunicar sostenibilidad y cómo evitarlos desde el primer día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estrategia de comunicación de sostenibilidad creíble y libre de greenwashing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Green software engineering',
                'description'      => 'Reduce la huella de carbono de tu software con prácticas de código eficiente, green hosting y medición de emisiones. Aprende las técnicas que hacen el desarrollo más sostenible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en sostenibilidad digital y eficiencia energética. Eres experto en green software engineering, las metodologías del Green Software Foundation y las herramientas de medición de emisiones de software.

Necesito que me guíes para reducir la huella de carbono de mis sistemas. Dame un análisis completo estructurado en los siguientes bloques:

**1. Principios del Green Software Engineering**
Explica los ocho principios del Green Software Foundation (carbon efficiency, energy efficiency, carbon awareness, hardware efficiency, measurement, climate commitments, carbon minimization, demand shaping) con ejemplos concretos de cada uno aplicados a decisiones de arquitectura y código del día a día.

**2. Medición de emisiones de software**
Detalla cómo medir el impacto real de un sistema:
- Software Carbon Intensity (SCI): explica la fórmula SCI = (E × I) + M y cómo calcular cada variable para una aplicación web típica
- Herramientas disponibles: Scaphandre, Cloud Carbon Footprint, CodeCarbon, Electricity Maps API, Green IT Analysis
- Cómo instrumentar una aplicación para exponer métricas de consumo energético
- Qué métricas deben estar en el dashboard de un equipo de ingeniería comprometido con la sostenibilidad

**3. Código eficiente: patrones y antipatrones**
Lista los diez antipatrones de código más comunes que generan consumo innecesario de energía (N+1 queries, polling en lugar de webhooks, datos sin paginar, loops ineficientes, dependencias innecesarias) y el patrón correcto para cada uno. Para cada par, incluye un fragmento de pseudocódigo que ilustre la diferencia.

**4. Arquitectura sostenible**
Analiza las decisiones de arquitectura con mayor impacto en el consumo energético:
- Monolito vs. microservicios vs. funciones serverless: cuándo cada opción es más eficiente
- Caching agresivo como estrategia de sostenibilidad
- Asynchronous processing para evitar cómputo en horas de alta intensidad de carbono
- Edge computing y distribución geográfica para minimizar transferencia de datos

**5. Green hosting y proveedores cloud**
Compara los principales proveedores cloud (AWS, Google Cloud, Azure) según:
- Sus compromisos de energía renovable y fechas de cumplimiento
- Herramientas propias de medición de emisiones (AWS Customer Carbon Footprint, Google Carbon Footprint, etc.)
- Regiones más limpias por intensidad de carbono y cómo elegirlas para el despliegue
- Certificaciones externas que validan sus compromisos (RE100, PPA de energía renovable)

**6. Carbon-aware computing**
Explica el concepto de carbon-aware computing: ejecutar carga computacional en los momentos y lugares donde la electricidad es más limpia. Muestra cómo implementarlo con la Electricity Maps API o la SDK del Carbon Aware SDK (Microsoft).

**7. Plan de acción para tu equipo**
Diseña un plan de 90 días para implementar prácticas de green engineering en un equipo de desarrollo existente:
- Semana 1-2: baseline measurement
- Semana 3-6: quick wins de eficiencia
- Semana 7-10: cambios de arquitectura
- Semana 11-13: reporting y cultura

Incluye cómo presentar el business case al liderazgo: coste de infraestructura reducido, ventaja competitiva y cumplimiento regulatorio anticipado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducción de la huella de carbono del software con técnicas de green engineering',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño sostenible',
                'description'      => 'Diseña minimizando el consumo de recursos con principios de diseño circular, reducción de dark patterns energéticos y análisis de ciclo de vida aplicado al producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto con especialización en diseño sostenible, economía circular y análisis de ciclo de vida (ACV). Tienes experiencia trabajando con empresas que quieren reducir el impacto ambiental de sus productos físicos y digitales sin sacrificar la experiencia de usuario.

Necesito tu guía completa para aplicar el diseño sostenible a mi proyecto. Estructura tu respuesta en los siguientes bloques:

**1. Fundamentos del diseño sostenible**
Explica los cuatro pilares del diseño sostenible: diseñar para durar, diseñar para reparar, diseñar para reutilizar y diseñar para reciclar. Para cada uno, dame tres decisiones de diseño concretas (material, estructura, interfaz, packaging) que lo hacen posible y tres decisiones habituales que lo sabotean.

**2. Diseño circular aplicado al producto**
Describe el modelo de economía circular (Ellen MacArthur Foundation) y cómo se traduce en decisiones de diseño:
- Producto como servicio (PaaS) y cómo diseñar para ese modelo
- Modularidad y reparabilidad: cómo estructurar un producto para que sus componentes sean sustituibles
- Diseño para el desmontaje: qué evitar (materiales compuestos, adhesivos permanentes, plásticos mezclados) y qué preferir
- Certificaciones de diseño circular disponibles (Cradle to Cradle, EU Ecodesign, etc.)

**3. Dark patterns energéticos en diseño digital**
Identifica los patrones de diseño de interfaces digitales que consumen energía innecesariamente:
- Animaciones y transiciones continuas que mantienen la GPU activa
- Vídeos en autoplay y fondos animados
- Tipografías web pesadas descargadas sin subset
- Imágenes sin optimizar y sin lazy loading
- Dark mode mal implementado que no reduce consumo en pantallas OLED

Para cada uno, da la alternativa de diseño sostenible con las mismas posibilidades estéticas.

**4. ACV aplicado al diseño: guía práctica**
Explica el análisis de ciclo de vida (ACV / LCA) en lenguaje accesible para diseñadores:
- Las cuatro fases: extracción de materias primas, fabricación, uso y fin de vida
- Cómo un diseñador puede hacer un ACV simplificado sin ser ingeniero ambiental
- Herramientas accesibles: EcoDesign Tool (IDEO), Sustaina, SimaPro lite, Ecoinvent
- Cómo usar los resultados del ACV para tomar decisiones de material y proceso

**5. Sostenibilidad en el proceso de diseño**
Integra la sostenibilidad en el flujo de trabajo del diseñador:
- Cómo incluir criterios ambientales en los briefs de diseño
- Preguntas de sostenibilidad en la fase de research y co-creación con usuarios
- Métricas de sostenibilidad en los criterios de evaluación del diseño
- Cómo presentar las decisiones de diseño sostenible al cliente o al equipo de producto

**6. Comunicación del diseño sostenible**
Diferencia el etiquetado ambiental creíble del greenwashing en producto:
- Ecolabels reconocidos: EU Ecolabel, Blue Angel, FSC, Fairtrade
- Declaraciones que requieren evidencia y cuáles son problemáticas sin ella
- Cómo diseñar el packaging para comunicar sostenibilidad de forma honesta y atractiva

Cierra con cinco recursos imprescindibles (libros, frameworks, comunidades) para diseñadores que quieren profundizar en sostenibilidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar principios de diseño circular y ACV a productos físicos y digitales',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Vender la propuesta de valor sostenible',
                'description'      => 'Los compradores B2B exigen cada vez más sostenibilidad en la cadena de valor. Aprende a convertir los compromisos ESG de tu empresa en argumentos de venta que ganan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas B2B especializado en propuestas de valor sostenibles y en cómo los compromisos ESG se convierten en ventajas competitivas en procesos de venta complejos. Tienes experiencia con compradores corporativos que incluyen criterios de sostenibilidad en sus RFPs y en la selección de proveedores.

Quiero que me ayudes a convertir los compromisos ESG de mi empresa en argumentos de venta efectivos. Desarrolla los siguientes entregables:

**1. Por qué la sostenibilidad es ahora un criterio de compra B2B**
Explica el contexto que está cambiando las decisiones de compra corporativa:
- La presión regulatoria sobre las cadenas de valor (CSRD, due diligence) que obliga a las grandes empresas a seleccionar proveedores sostenibles
- Los compromisos de cero emisiones netas de las corporaciones y cómo impactan a sus proveedores
- Los inversores ESG que presionan a las empresas cotizadas para que sean exigentes con sus proveedores
- El comprador de sostenibilidad: quién es dentro de la empresa (procurement, sustainability officer, legal) y qué le preocupa

**2. Auditoría de tus argumentos ESG**
Para los compromisos ESG que te daré, evalúa:
- Cuáles son suficientemente maduros para usarlos en ventas (con datos, certificaciones o auditorías)
- Cuáles necesitan más desarrollo antes de ser comunicados
- Cuáles son diferenciales en el mercado y cuáles son el mínimo esperado
- Qué evidencia de terceros necesitas para que sean creíbles (certificaciones, auditorías, ratings ESG)

**3. Construcción del argumento de venta sostenible**
Diseña la narrativa de venta ESG con esta estructura:
- El problema del comprador: el riesgo que asume si no selecciona proveedores sostenibles (regulatorio, reputacional, operacional)
- Tu solución: cómo tus compromisos ESG reducen ese riesgo para su negocio
- La evidencia: datos, certificaciones y casos de clientes que lo demuestran
- El valor económico: cómo cuantificar el valor de tu propuesta sostenible en euros y no solo en impacto

**4. Cómo responder a los cuestionarios ESG de los clientes**
Los compradores B2B envían cuestionarios de sostenibilidad (EcoVadis, CDP Supply Chain, cuestionarios propios). Explica:
- Qué evalúan estos cuestionarios y cómo prepararse
- Las respuestas que suman puntos y las que generan señales de alerta
- Cómo mantener actualizada la documentación de soporte sin un equipo de sostenibilidad dedicado
- Estrategia para mejorar el rating ESG año a año

**5. Objeciones frecuentes y cómo responderlas**
Dame las cinco objeciones más comunes en ventas cuando la sostenibilidad forma parte de la propuesta de valor:
- "Vuestros competidores no tienen estas certificaciones y son más baratos"
- "¿Tenéis el informe de sostenibilidad del año pasado?"
- "¿Cómo verificamos que vuestros datos son reales?"
- "La sostenibilidad no es un criterio de decisión para nosotros todavía"
- "¿Qué pasa con vuestra cadena de suministro?"

Para cada una, da una respuesta estructurada con datos de apoyo.

**6. Diferenciación de largo plazo**
Explica cómo construir una reputación de proveedor sostenible que genere referidos y renueve contratos. Incluye qué comunicar en la web, en LinkedIn y en los informes de progreso para clientes existentes.

Termina con un checklist de 10 puntos que el equipo de ventas puede usar antes de cada reunión con un comprador que tiene criterios de sostenibilidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Convertir compromisos ESG en argumentos de venta B2B que diferencian y ganan',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto con impacto positivo',
                'description'      => 'Diseña productos que crean valor para el usuario y para la sociedad. Aprende sobre impact metrics, externalidades y las decisiones de producto que equilibran negocio e impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product management con especialización en impact-driven product design y en frameworks de medición de impacto social y medioambiental. Tienes experiencia en empresas de impacto, B Corps y en equipos de producto de compañías tradicionales que están incorporando criterios de impacto en sus decisiones.

Necesito tu guía completa para construir un producto con impacto positivo genuino. Cubre los siguientes bloques:

**1. Qué significa impacto positivo en un producto**
Diferencia entre:
- Impacto de producto: el efecto que el producto tiene directamente en la vida del usuario
- Impacto de modelo de negocio: el efecto de cómo la empresa opera y genera ingresos
- Externalidades positivas: beneficios para terceros no usuarios que genera el producto
- Externalidades negativas: daños colaterales que el producto puede generar aunque no sea su intención

Explica por qué los tres últimos son frecuentemente ignorados en el product management tradicional y qué consecuencias tiene eso a largo plazo para el negocio.

**2. Impact metrics: más allá de las métricas de engagement**
Diseña un framework de métricas de impacto para un producto digital:
- Cómo definir la "teoría del cambio" del producto: qué cambio en el mundo queremos generar y cómo el producto lo cataliza
- Input metrics, output metrics, outcome metrics e impact metrics: las diferencias y por qué importan
- Cómo separar el impacto atribuible al producto del que habría ocurrido de todas formas (counterfactual)
- Los riesgos de las impact metrics: las que son fáciles de medir pero no reflejan impacto real

**3. Externalidades: identificarlas y gestionarlas**
Guía paso a paso para mapear las externalidades de un producto:
- Técnica de "stakeholder mapping ampliado": quién más se ve afectado por tu producto además del usuario
- Matriz de externalidades: probabilidad × magnitud × reversibilidad
- Cómo integrar el análisis de externalidades en el proceso de discovery
- Casos de estudio de productos que generaron externalidades negativas no anticipadas y cómo podrían haberse detectado antes

**4. Decisiones de producto que equilibran negocio e impacto**
Las tensiones más comunes en el product management de impacto y cómo resolverlas:
- Monetización vs. acceso: cuando el precio excluye a los usuarios que más necesitan el producto
- Engagement vs. bienestar: cuando las métricas de uso incentivan comportamientos poco saludables
- Crecimiento vs. impacto por usuario: cuando escalar diluye la calidad del impacto
- Velocidad vs. análisis de consecuencias: cuándo frenar para evaluar el impacto antes de lanzar

**5. Frameworks y certificaciones de impacto**
Presenta los principales frameworks disponibles:
- B Impact Assessment (B Corp): qué evalúa y cómo prepararse
- UN SDGs: cómo alinear el roadmap del producto con los Objetivos de Desarrollo Sostenible
- IRIS+ (GIIN): sistema de métricas de impacto para inversores de impacto
- Theory of Change: cómo documentarla para inversores y stakeholders

**6. Roadmap de impacto**
Diseña la estructura de un roadmap que integra objetivos de negocio y objetivos de impacto en paralelo, con cómo priorizar cuando entran en conflicto y cómo comunicarlo al equipo y a los inversores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integrar impacto social y ambiental en las decisiones de product management',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH y bienestar del empleado',
                'description'      => 'Diseña una propuesta de valor de bienestar que realmente impacta la satisfacción y productividad: salud mental, flexibilidad y los beneficios que los empleados valoran de verdad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de personas con especialización en bienestar organizacional, salud mental en el trabajo y diseño de propuestas de valor al empleado (EVP). Tienes experiencia trabajando con empresas de distintos tamaños en la implementación de programas de bienestar que van más allá de los beneficios cosméticos.

Necesito que me ayudes a construir una estrategia de bienestar del empleado con impacto real. Desarrolla los siguientes bloques:

**1. Por qué el bienestar importa: el business case**
Construye el argumento económico del bienestar para presentarlo al liderazgo:
- Coste del presentismo y el absentismo por problemas de salud mental
- Impacto del bienestar en la rotación de talento y el coste de reemplazo
- Relación entre bienestar y productividad: qué dice la investigación reciente
- Cómo medir el ROI de un programa de bienestar antes y después

**2. Diagnóstico: qué necesitan realmente tus empleados**
Diseña un proceso de diagnosis antes de implementar beneficios:
- Encuesta de bienestar: qué preguntar, cómo hacerlo anónimo y cómo analizar los resultados
- Los cuatro pilares del bienestar (físico, mental, financiero, social): cómo evaluar cada uno
- Focus groups de bienestar: cómo estructurarlos para que la gente sea honesta
- Cómo segmentar los datos por función, nivel y demografía para identificar grupos en riesgo

**3. Salud mental en el trabajo: más allá del EAP**
Los programas de ayuda al empleado (EAP) son insuficientes. Explica qué funciona realmente:
- Crear cultura de seguridad psicológica: qué comportamientos del manager la construyen o la destruyen
- Formación en salud mental para managers: qué deben saber, cómo detectar señales y cómo tener la conversación
- Reducir los factores de riesgo psicosocial: carga de trabajo, autonomía, reconocimiento, comunidad, equidad
- Los beneficios de salud mental con mayor evidencia de efectividad: terapia accesible, mindfulness, etc.

**4. Flexibilidad como beneficio de bienestar**
Analiza los modelos de trabajo flexible y su impacto en el bienestar:
- Remote, híbrido y presencial: qué dice la investigación sobre bienestar en cada modelo
- Flexibilidad horaria: cómo implementarla sin perder coordinación ni cultura
- Right to disconnect: cómo hacer que funcione en la práctica
- Los riesgos del trabajo remoto para el bienestar (aislamiento, hiperconexión, fronteras difusas) y cómo mitigarlos

**5. Diseño de la cartera de beneficios**
Guía para diseñar una cartera de beneficios que los empleados valoran de verdad:
- Beneficios universales vs. flexibles (cafetería de beneficios): cuándo cada modelo funciona mejor
- Los beneficios más valorados según las encuestas de mercado y por qué
- Cómo comunicar los beneficios para que los empleados los usen realmente
- Cómo iterar la cartera basándose en datos de utilización

**6. Métricas de bienestar**
Define el cuadro de mando de bienestar del empleado:
- eNPS de bienestar, tasa de utilización de beneficios, índice de presentismo, tasa de baja por salud mental
- Cómo comunicar el progreso a directivos y al comité de empresa
- Cómo conectar las métricas de bienestar con las de negocio para sostener la inversión

Cierra con un plan de 6 meses para lanzar o renovar el programa de bienestar de la empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar programas de bienestar del empleado con impacto real en salud y productividad',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Reporting ESG y finanzas sostenibles',
                'description'      => 'Domina los estándares de reporte (GRI, SASB, CSRD) y los instrumentos financieros sostenibles que los inversores institucionales exigen cada vez más.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en finanzas sostenibles y reporting ESG con experiencia en las principales normativas internacionales y en la preparación de informes de sostenibilidad para empresas cotizadas y no cotizadas. Tienes conocimiento profundo de los marcos de reporte y de cómo los inversores institucionales evalúan el desempeño ESG.

Necesito una guía completa sobre reporting ESG y finanzas sostenibles. Cubre los siguientes bloques:

**1. El ecosistema de estándares ESG**
Explica y compara los principales marcos de reporte:
- GRI (Global Reporting Initiative): los estándares universales y temáticos, cómo elegir los materiales
- SASB (Sustainability Accounting Standards Board): los estándares por industria y cómo se alinean con los inversores
- TCFD (Task Force on Climate-related Financial Disclosures): el marco de riesgos climáticos financieros
- ISSB (IFRS S1 y S2): los nuevos estándares globales que consolidan TCFD y SASB
- CSRD (Corporate Sustainability Reporting Directive): la obligación europea y su calendario de aplicación
- Cómo elegir el marco adecuado para tu empresa según tamaño, sector y audiencia

**2. La CSRD en detalle**
La CSRD es la regulación más relevante para las empresas europeas. Explica:
- Qué empresas están obligadas y cuándo (calendario 2024-2028)
- Los doce estándares ESRS (Environmental, Social, Governance) y qué deben reportar
- El concepto de doble materialidad: impacto y riesgo financiero
- La auditoría obligatoria del informe de sostenibilidad
- Los riesgos de incumplimiento y las sanciones previstas

**3. Due diligence de sostenibilidad en la cadena de valor**
La Directiva de Due Diligence (CSDDD) obliga a las empresas a identificar y mitigar impactos en su cadena de valor. Explica:
- Qué empresas están afectadas y cuándo
- El proceso de due diligence: identificación, evaluación, prevención y remediación
- Cómo trabajar con proveedores para obtener los datos necesarios
- Las herramientas tecnológicas disponibles para la trazabilidad de la cadena de valor

**4. Instrumentos financieros sostenibles**
Describe los principales instrumentos del mercado de finanzas sostenibles:
- Bonos verdes (Green Bonds): los estándares ICMA y la verificación externa
- Bonos sociales y sostenibles: qué proyectos financian
- Préstamos vinculados a sostenibilidad (SLL): cómo se estructuran los KPIs y las penalizaciones
- Fondos de inversión ESG: las categorías del Reglamento SFDR (artículo 6, 8 y 9)
- Taxonomía verde europea: qué actividades clasifica como sostenibles y qué implica

**5. Cómo hablan los inversores institucionales de ESG**
Explica qué buscan los grandes inversores cuando evalúan el ESG de una empresa:
- Los ratings ESG más utilizados (MSCI, Sustainalytics, ISS) y cómo se calculan
- Qué información piden en los engagement meetings
- Los "red flags" ESG que pueden llevar a una desinversión
- Cómo preparar la comunicación con inversores sobre sostenibilidad

**6. Plan de reporting ESG para empresas no cotizadas**
Muchas PYMES deben reportar por ser proveedoras de empresas cotizadas. Diseña un plan simplificado:
- Los datos mínimos que debes empezar a recopilar hoy
- Estructura de un primer informe de sostenibilidad sencillo pero creíble
- Cómo organizar el equipo y los procesos internos para sostener el reporting año a año
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar reporting ESG bajo CSRD y GRI para inversores y partes interesadas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal de la sostenibilidad',
                'description'      => 'Las obligaciones legales de sostenibilidad llegan rápido. Aprende sobre CSRD, due diligence de cadena de valor y los riesgos legales del greenwashing en la era de la regulación ESG.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho ambiental, sostenibilidad corporativa y cumplimiento ESG. Tienes experiencia asesorando a empresas europeas en la adaptación a las nuevas regulaciones de sostenibilidad y en la gestión del riesgo legal asociado al greenwashing y a las obligaciones de reporte.

Necesito una guía legal completa sobre el panorama regulatorio de sostenibilidad. Desarrolla los siguientes bloques:

**1. El marco regulatorio europeo de sostenibilidad**
Presenta el ecosistema regulatorio de sostenibilidad de la UE de forma estructurada:
- La taxonomía verde europea: qué es, qué clasifica y qué obligaciones genera
- La CSRD (Corporate Sustainability Reporting Directive): calendario, sujetos obligados y sanciones
- La CSDDD (Corporate Sustainability Due Diligence Directive): obligaciones de diligencia debida en la cadena de valor
- La Directiva de Green Claims: las reglas que vienen para las comunicaciones de sostenibilidad
- El Reglamento de Divulgación (SFDR): para entidades financieras y sus obligaciones
- Cómo estas piezas encajan y se refuerzan mutuamente

**2. La CSRD en detalle para abogados**
Profundiza en los aspectos legales de la CSRD:
- El alcance exacto: criterios de tamaño, cotización y actividad
- El principio de doble materialidad y las implicaciones legales de la valoración de materialidad
- La responsabilidad del órgano de administración en la supervisión del reporting
- La auditoría limitada del informe de sostenibilidad: quién puede hacerla y qué responsabilidad tienen los auditores
- Las sanciones por incumplimiento en las distintas jurisdicciones europeas
- Cómo redactar los acuerdos con proveedores para obtener los datos ESG necesarios

**3. Due diligence de cadena de valor: obligaciones y contratos**
La CSDDD exige identificar y mitigar impactos en la cadena de valor. Desde la perspectiva legal:
- El proceso de due diligence que exige la directiva paso a paso
- Cómo trasladar las obligaciones a proveedores a través de contratos: las cláusulas imprescindibles
- El derecho a la información: qué puedes exigir a tus proveedores y cómo
- La responsabilidad civil por daños causados por proveedores: en qué casos la empresa matriz puede responder
- Los mecanismos de reclamación que obliga a establecer la directiva

**4. Riesgo legal del greenwashing**
El greenwashing es cada vez más perseguido legalmente. Explica:
- Las normas vigentes que ya prohíben el greenwashing: Directiva de Prácticas Comerciales Desleales, Reglamento de Protección del Consumidor
- La nueva Directiva de Green Claims y qué comunicaciones quedan prohibidas
- Casos de litigios climáticos y de greenwashing relevantes en Europa y su resultado
- Cómo hacer un legal review de las comunicaciones de sostenibilidad para minimizar el riesgo
- Qué evidencia y qué disclaimer reducen el riesgo legal de cada tipo de comunicación

**5. Litigios climáticos: el riesgo emergente**
El litigio climático está creciendo exponencialmente. Explica:
- Los tipos de demandas más frecuentes contra empresas (inacción climática, información falsa, daños)
- Las jurisdicciones más activas y las tendencias jurisprudenciales
- Cómo evaluar la exposición de una empresa a litigios climáticos
- Qué hacer para reducir el riesgo: governance, reporting, compromisos verificables

**6. Checklist legal de sostenibilidad corporativa**
Cierra con un checklist de 20 puntos que el departamento legal debe revisar cada año para estar al día en materia de obligaciones ESG, incluyendo fechas clave del calendario regulatorio europeo hasta 2030.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión del riesgo legal ESG: CSRD, due diligence y greenwashing',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Impacto del CS en la sostenibilidad',
                'description'      => 'El CS que reduce la obsolescencia, maximiza el uso del producto y convierte el servicio en una ventaja competitiva sostenible para la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success con especialización en el impacto de la función de CS en la sostenibilidad del negocio y en la sostenibilidad ambiental. Tienes experiencia demostrando cómo el CS bien ejecutado reduce el desperdicio, maximiza el valor del producto y construye relaciones duraderas que son más rentables y más sostenibles.

Necesito tu guía completa sobre cómo el customer success contribuye a la sostenibilidad. Desarrolla los siguientes bloques:

**1. El CS como función sostenible**
Explica la conexión entre customer success y sostenibilidad desde dos ángulos:
- Sostenibilidad del negocio: cómo el CS reduce el churn y aumenta el LTV, haciendo el modelo de negocio más estable y predecible
- Sostenibilidad ambiental: cómo maximizar el uso de un producto reduce la necesidad de fabricar o vender más, disminuyendo el impacto total
- La paradoja del crecimiento sostenible: cómo un CS que hace a los clientes más autónomos y exitosos es más rentable que uno que crea dependencia

**2. Reducción de la obsolescencia programada a través del CS**
La obsolescencia ocurre cuando los productos no se usan o no se actualizan. El CS puede combatirla:
- Estrategias para aumentar la profundidad de uso del producto (feature adoption, use case expansion)
- Cómo el CS extiende la vida útil del cliente activo en la plataforma
- Programas de renovación y expansión basados en valor demostrado, no en presión de ventas
- Cómo el CS identifica productos o funcionalidades que los clientes abandonan y activa su recuperación

**3. CS sostenible: hacer más con menos**
Diseña un modelo de CS que maximiza el impacto con los recursos disponibles:
- Segmentación de clientes para priorizar dónde el CS humano añade más valor
- Programas de CS digital (digital CS, tech-touch) para clientes de menor valor sin degradar la experiencia
- Automatización de las tareas repetitivas del CS para que el equipo se centre en el trabajo de alto impacto
- Métricas de eficiencia del CS: coste de retención, tiempo por cliente, ratio CS por cuenta

**4. CS y circularidad del conocimiento**
El CS genera conocimiento valioso que suele perderse. Crea un sistema para circularlo:
- Cómo documentar los problemas recurrentes y convertirlos en contenido de self-service
- El feedback loop del CS al producto: cómo sistematizar la voz del cliente
- Programas de comunidad de usuarios como multiplicador del CS sin coste proporcional
- Cómo el conocimiento compartido entre clientes (peer-to-peer) reduce la carga del equipo de CS

**5. El CS como ventaja competitiva sostenible**
Explica por qué un CS excelente es difícil de imitar por la competencia:
- La relación de confianza construida con el tiempo como activo intangible
- Cómo el CS reduce la sensibilidad al precio y protege el margen
- El rol del CS en los casos de estudio y referencias que alimentan las ventas nuevas
- Cómo medir y comunicar el impacto del CS en el NRR (Net Revenue Retention) y en el NPS

**6. Programa de CS sostenible: diseño e implementación**
Diseña un programa de CS con criterios de sostenibilidad explícitos:
- Cómo integrar métricas de impacto en los objetivos del equipo de CS
- Qué comunicar a los clientes sobre la sostenibilidad del producto
- Cómo convertir el CS en un diferenciador en los procesos de renovación y expansión
- Plan de 90 días para transformar un equipo de CS reactivo en uno proactivo y sostenible
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un modelo de CS que maximiza el valor del cliente y reduce el desperdicio',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor de sostenibilidad freelance',
                'description'      => 'El nicho emergente de la consultoría ESG independiente: las certificaciones que necesitas, los servicios más demandados y los clientes que pagan bien.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de sostenibilidad freelance experimentado con más de cinco años en el mercado, trabajando tanto con PYMES como con empresas medianas que necesitan acompañamiento ESG. Conoces el mercado de la consultoría independiente de sostenibilidad en España y Europa, los precios, los clientes y las oportunidades reales.

Quiero construir un negocio de consultoría de sostenibilidad como autónomo. Dame una guía completa y honesta:

**1. La oportunidad de mercado**
Analiza el mercado de consultoría ESG independiente:
- Por qué la demanda de consultoría de sostenibilidad está creciendo (regulación, inversores, consumidores)
- Qué segmentos de empresas son los mejores clientes para un consultor independiente (vs. las grandes consultoras)
- Cuál es el perfil del cliente ideal: tamaño, sector, momento del proceso (¿qué les hace contratar un consultor?)
- Cuánto paga el mercado: rangos de honorarios por tipo de proyecto y por perfil del consultor

**2. Las certificaciones que te hacen más contratable**
Evalúa las certificaciones más valoradas en el mercado de la consultoría ESG:
- GRI Certified Sustainability Professional
- SASB FSA Credential (Fundamentals of Sustainability Accounting)
- CFA ESG Certificate
- B Leader (para acompañar certificaciones B Corp)
- ISO 14001 Lead Auditor
- PECB ISO 26000 Lead Implementer

Para cada una: coste aproximado, tiempo de preparación, para qué tipo de proyectos abre puertas y dificultad del examen. Recomienda por dónde empezar según el perfil del consultor.

**3. Los servicios más demandados y los márgenes reales**
Lista los diez servicios de consultoría ESG con mayor demanda:
- Ayuda para certificarse en B Corp
- Preparación de informes GRI
- Adaptación a la CSRD
- Cálculo de huella de carbono y plan de reducción
- Cuestionarios ESG de clientes (EcoVadis, CDP)
- Estrategia de sostenibilidad y hoja de ruta
- Formación interna en sostenibilidad
- Due diligence ESG en fusiones y adquisiciones
- Consultoría de reporting SFDR para fondos
- Estrategia de comunicación de sostenibilidad

Para cada servicio: precio orientativo, duración típica, perfil de cliente y nivel de competencia.

**4. Cómo posicionarte y conseguir los primeros clientes**
Estrategia de captación para un consultor que empieza:
- Cómo elegir el nicho (sector, tipo de empresa, servicio) y por qué el nicho es más rentable que ser generalista
- Cómo usar LinkedIn para generar leads en consultoría ESG
- El rol de los eventos y asociaciones sectoriales para construir red
- Cómo convertir el primer cliente en referencias
- Las plataformas específicas de consultoría de sostenibilidad donde hay proyectos (si existen)

**5. Estructura del negocio**
Aspectos prácticos de montar el negocio como autónomo o sociedad:
- Cuándo tiene sentido constituir SL vs. trabajar como autónomo
- Qué seguro de responsabilidad civil necesitas en consultoría ESG
- Cómo estructurar los contratos con clientes para protegerte
- Precios: cuándo cobrar por proyecto, cuándo por hora y cuándo por retainer mensual

**6. La propuesta de valor diferencial**
Explica cómo construir una propuesta de valor que te diferencie de las grandes consultoras y de otros freelances:
- Especialización en un sector como ventaja competitiva
- La combinación de experiencia en el sector + conocimiento ESG como diferenciador
- Cómo comunicar el impacto de tu trabajo (no solo los entregables)
- Cómo construir credibilidad sin los casos de estudio de una gran firma

Cierra con los tres errores más comunes que cometen los nuevos consultores de sostenibilidad y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzar y hacer crecer un negocio de consultoría ESG como freelance',
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
