<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills284Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de producto físico: de la caja al desempaquetado viral',
                'description'      => 'Diseña la estrategia de marketing para productos físicos: desde el packaging hasta el unboxing viral, pasando por la narrativa de marca tangible.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing de productos físicos con experiencia en lanzamientos para marcas de consumo, e-commerce y retail. Has trabajado en categorías como electrónica de consumo, cosmética, alimentación y lifestyle. Necesito tu ayuda para crear una estrategia de marketing completa para un producto físico.

**Mi contexto:**
Estamos lanzando [descripción del producto físico]. Se venderá en [canales: e-commerce propio, Amazon, retail, distribuidores]. Nuestro precio objetivo es [precio] y el público es [descripción del target].

**Ayúdame con:**

1. **La propuesta de valor del producto físico**: A diferencia del software, el producto físico tiene atributos tangibles: materiales, peso, textura, olor, sonido. ¿Cómo identifico y comunico los atributos físicos que más importan a mi comprador? Dame un framework para extraer los diferenciadores tangibles.

2. **El packaging como primer punto de marketing**: El packaging no es solo una caja. ¿Cómo diseño el packaging para que comunique los valores de marca, diferencie en el lineal o en la foto del e-commerce, y sea digno de ser fotografiado y compartido?

3. **El unboxing como experiencia de marketing**: ¿Qué hace que un unboxing se comparta orgánicamente? ¿Cómo diseño la secuencia de capas, los mensajes en el interior y los elementos sorpresa que generan contenido UGC sin pedirlo?

4. **Fotografía y vídeo de producto**: ¿Qué tipos de imágenes necesito para e-commerce (fondo blanco, lifestyle, detalle, escala)? ¿Cuál es el brief para un fotógrafo de producto? ¿Cómo optimizo las imágenes para Amazon vs tienda propia vs redes sociales?

5. **Marketing de contenidos para producto físico**: ¿Qué contenidos funcionan para educar, entretener y convencer sobre un producto físico? Habla de tutoriales de uso, comparativas, reviews de terceros, contenido de fabricación y behind-the-scenes.

6. **Estrategia de reviews y prueba social**: Las reviews son el diferenciador en e-commerce. ¿Cómo genero las primeras reviews de forma ética y escalable? ¿Cómo respondo a las reviews negativas? ¿Cómo uso el contenido de reviews en el resto del marketing?

7. **Marketing en retail y punto de venta**: ¿Qué elementos de PLV (publicidad en el lugar de venta), packaging secundario y materiales de display funcionan para diferenciarse en el lineal de una gran superficie o tienda especializada?

8. **Lanzamiento en Amazon**: Si Amazon es un canal importante, ¿cómo optimizo el listing, las imágenes A+, la descripción con keywords y la estrategia de PPC de lanzamiento? ¿Cómo genero velocidad de ventas en los primeros días para el algoritmo?

9. **Estacionalidad y campañas específicas**: ¿Cómo planeo el calendario de marketing de un producto físico considerando temporadas (Navidad, Black Friday, verano) y cómo gestiono el inventario alrededor de picos de demanda?

10. **Métricas del marketing de producto físico**: ¿Qué KPIs son específicos de productos físicos que van más allá de las métricas digitales? CAC por canal, sell-through rate, share of shelf, review velocity, devolution rate como métrica de expectativa vs realidad.

Empieza por la propuesta de valor tangible y el brief de unboxing. Quiero outputs prácticos: briefs, frameworks y ejemplos concretos adaptados a un producto físico, no a servicios digitales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la estrategia completa de marketing para el lanzamiento de un producto físico en e-commerce y retail, desde el packaging hasta las reviews.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software para supply chain: sistemas que gestionan el inventario y la logística',
                'description'      => 'Entiende la arquitectura y los retos de los sistemas de gestión de cadena de suministro: WMS, ERP, TMS y su integración con el ecosistema digital.',
                'prompt_content'   => <<<'PROMPT'
Eres un arquitecto de software con especialización en sistemas de supply chain, logística y gestión de inventario. Has diseñado e implementado soluciones para empresas con decenas de almacenes y millones de referencias de producto. Necesito tu ayuda para entender o mejorar nuestra arquitectura de software en este dominio.

**Contexto:**
[Somos una empresa de e-commerce / manufactura / distribución] con [volumen: X pedidos/día, Y SKUs, Z almacenes]. Actualmente usamos [sistema actual o estamos evaluando opciones]. Necesito orientación técnica y arquitectural.

**Ayúdame con:**

1. **El mapa del ecosistema de software en supply chain**: ¿Qué hace exactamente un WMS (Warehouse Management System), un ERP, un TMS (Transportation Management System), un OMS (Order Management System) y un sistema de previsión de demanda? ¿Cuáles son los límites entre ellos y cómo se integran?

2. **Diseño del modelo de datos de inventario**: ¿Cuáles son los conceptos fundamentales: SKU, FNSKU, lote, número de serie, ubicación, zona, almacén? ¿Cómo modelo el inventario para soportar múltiples almacenes, reservas, inventario en tránsito y devoluciones?

3. **El reto del inventario en tiempo real**: ¿Cómo consigo visibilidad de inventario en tiempo real cuando hay múltiples canales de venta, picking en proceso y recepciones simultáneas? ¿Cuáles son los patrones de consistencia eventual vs consistencia fuerte para el inventario?

4. **Integración con hardware de almacén**: ¿Cómo integro el software con lectores de código de barras, RFID, sistemas de picking por voz y robots de almacén? ¿Cuáles son los protocolos y estándares relevantes?

5. **Algoritmos de fulfillment**: ¿Cómo decido desde qué almacén sirvo un pedido cuando tengo múltiples localizaciones? ¿Cómo optimizo el picking (wave picking, zone picking, batch picking) y la generación de rutas dentro del almacén?

6. **Previsión de demanda y reposición automática**: ¿Qué modelos estadísticos se usan para predecir la demanda? ¿Cómo integro la previsión con los puntos de reorden automáticos? ¿Cómo gestiono los casos donde el modelo falla (productos nuevos, estacionalidad extrema)?

7. **El reto de las devoluciones (reverse logistics)**: ¿Cómo modelo el flujo de devoluciones en el sistema? ¿Cuáles son los estados posibles de un producto devuelto y cómo los gestiono para minimizar el impacto en el inventario disponible?

8. **Build vs buy para WMS**: ¿Cuándo tiene sentido construir un WMS propio vs comprar soluciones como Manhattan, Blue Yonder, Körber o usar las funcionalidades de SAP/Oracle? Dame el framework de decisión.

9. **Integración con marketplaces y 3PL**: ¿Cómo integro mis sistemas con Amazon FBA, proveedores 3PL y los marketplaces donde vendo? ¿Cuáles son los retos de sincronización de inventario en tiempo real con múltiples destinos?

10. **Rendimiento y escalabilidad**: ¿Cuáles son los cuellos de botella más frecuentes en sistemas de gestión de inventario a escala? ¿Qué patrones de arquitectura (CQRS, event sourcing, particionamiento) aplican bien a estos dominios?

Empieza por el mapa del ecosistema y el modelo de datos de inventario. Quiero orientación técnica concreta con ejemplos de diseño de sistemas, no solo descripción de productos comerciales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y evaluar la arquitectura de software para sistemas de gestión de inventario, almacén y logística en empresas con operaciones complejas.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño industrial y packaging: el producto físico que se vende solo',
                'description'      => 'Aplica los principios del diseño industrial y de packaging para crear productos físicos que comuniquen valor, diferencien en el lineal y generen deseo.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador industrial y especialista en packaging con experiencia en proyectos para marcas de consumo, diseño de producto y branding físico. Has diseñado productos que han ganado premios de diseño y han sido reconocidos por su impacto en ventas. Necesito tu ayuda para diseñar [producto / packaging] que sea tan bueno que se venda solo.

**Contexto del proyecto:**
El producto es [descripción]. El público objetivo es [perfil]. Los canales de venta son [e-commerce / retail / ambos]. El posicionamiento de precio es [premium / mid-market / accesible]. Los competidores principales son [marcas].

**Guíame a través de:**

1. **Research de usuarios para diseño físico**: ¿Cómo hago investigación de usuarios para un producto físico? ¿Qué metodologías (entrevistas de uso, shadowing, pruebas de usabilidad física, análisis de competencia) son más reveladoras para entender los pain points y el comportamiento de uso real?

2. **El brief de diseño industrial**: ¿Qué debe incluir un brief de diseño completo para un producto físico? Dame la estructura: constraints técnicos, restricciones de materiales, requisitos de usabilidad, criterios de éxito y los no-negociables de marca.

3. **Materiales y su impacto en la percepción**: ¿Cómo afecta la elección de material (plástico, metal, madera, vidrio, cartón reciclado) a la percepción de calidad, precio y valores de marca? Dame un análisis de materiales con sus connotaciones y sus restricciones prácticas.

4. **Ergonomía y usabilidad física**: ¿Cómo evalúo si un diseño es ergonómico? ¿Cuáles son los principios de ergonomía que más impactan en la satisfacción del usuario? ¿Cómo hago pruebas de usabilidad con prototipos físicos?

5. **Diseño para manufactura (DFM)**: ¿Qué decisiones de diseño hacen que un producto sea más barato y fiable de fabricar? ¿Cuáles son los errores de diseño más costosos que se descubren demasiado tarde en el proceso de producción?

6. **El packaging como extensión del diseño del producto**: ¿Cómo diseño el packaging para que sea coherente con el producto, proteja en el transporte, sea sostenible y cree una experiencia de apertura memorable?

7. **Diseño para e-commerce**: Los productos que se venden online deben fotografiarse bien y sobrevivir el envío. ¿Qué consideraciones de diseño son específicas del canal e-commerce? ¿Cómo optimizo el packaging para los costes de fulfillment?

8. **Sostenibilidad como requisito de diseño**: ¿Cómo incorporo la sostenibilidad desde el inicio del proceso de diseño? ¿Qué certificaciones (FSC, Cradle to Cradle, compostable) son relevantes y cómo afectan al diseño y al coste?

9. **Del prototipo a la producción**: ¿Cuáles son las etapas del proceso de prototipado? ¿Cuándo usar impresión 3D vs prototipos de materiales reales? ¿Qué debo validar en cada etapa antes de comprometer el tooling de producción?

10. **Métricas de éxito del diseño físico**: ¿Cómo mido si el diseño está funcionando más allá de las ventas? Habla de NPS de producto, tasa de devoluciones como indicador de expectativa vs realidad, análisis de quejas de calidad y métricas de sostenibilidad.

Empieza por el research de usuarios y el brief de diseño. Quiero orientación práctica con metodologías concretas y criterios de decisión claros, no solo principios de diseño abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar productos físicos y packaging siguiendo un proceso centrado en el usuario, desde el research hasta el prototipado y la producción.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de producto físico: del distribuidor al retail y el e-commerce',
                'description'      => 'Construye la estrategia go-to-market para productos físicos: cómo elegir y gestionar canales de distribución, negociar con retail y escalar el e-commerce.',
                'prompt_content'   => <<<'PROMPT'
Eres un director comercial con experiencia en ventas de productos de consumo masivo, FMCG y marcas de producto físico. Has gestionado redes de distribución, negociado con grandes superficies y escalado canales de e-commerce. Necesito tu ayuda para diseñar la estrategia de ventas de mi producto físico.

**Mi contexto:**
Tenemos un producto físico [descripción] con precio de venta al público de [precio]. Fabricamos en [origen]. Quiero llegar al mercado español / latinoamericano a través de [canales objetivo: distribuidores, retail, e-commerce, D2C]. Actualmente [situación actual de ventas].

**Ayúdame con:**

1. **Estrategia de canal: distribución directa vs indirecta**: ¿Cuándo tiene sentido vender directo al consumidor (D2C) vs a través de distribuidores vs en marketplaces? Dame el framework de decisión basado en márgenes, control de marca, volumen y recursos disponibles.

2. **La matemática del producto físico en retail**: ¿Cómo funciona la estructura de márgenes en la cadena distribución → mayorista → retailer → consumidor? Dame un ejemplo numérico con los porcentajes típicos de cada eslabón y las implicaciones para el precio de fabricante.

3. **Cómo entrar en retail (grandes superficies y especialistas)**: ¿Cuál es el proceso para conseguir que un retailer liste tu producto? ¿Qué necesitan ver (volumen mínimo, rotación esperada, soporte de marketing)? ¿Cómo preparo la presentación para un buyer de Carrefour, El Corte Inglés o una cadena especializada?

4. **Negociación con distribuidores**: ¿Qué busca un distribuidor en un nuevo producto? ¿Cuáles son las cláusulas críticas de un contrato de distribución (exclusividad, mínimos, territorio, precio, condiciones de pago)? ¿Qué nunca debo ceder sin contrapartida?

5. **Gestión de la red de distribución**: Una vez tengo distribuidores, ¿cómo los gestiono para maximizar su desempeño? ¿Cómo fijo objetivos, incentivo su equipo de ventas y evito que dejen de priorizar mi producto?

6. **Amazon como canal de ventas**: ¿Cuáles son las diferencias entre Vendor Central (1P) y Seller Central (3P) en Amazon? ¿Cuándo elige cada modelo? ¿Cómo gestiono el precio sugerido en Amazon cuando también tengo otros canales?

7. **E-commerce propio vs marketplaces**: ¿Cuál es la estrategia correcta de coexistencia entre mi tienda propia y los marketplaces? ¿Cómo evito canibalización de márgenes y conflicto de canal?

8. **Conflicto de canal**: Cuando vendo en múltiples canales al mismo tiempo, ¿cómo gestiono los conflictos de precio y competencia entre distribuidores, retail y e-commerce? ¿Cuáles son las políticas de MAP (Minimum Advertised Price) y cómo las aplico?

9. **El sell-in vs el sell-out**: La diferencia entre vender al distribuidor y que el distribuidor venda al consumidor es la diferencia entre inventario acumulado y negocio real. ¿Cómo gestiono el sell-out, no solo el sell-in?

10. **Internacionalización del canal de ventas**: ¿Por dónde empiezo cuando quiero exportar? ¿Agentes comerciales locales, distribuidores país por país, o marketplaces transfronterizos? Dame el proceso y las consideraciones logísticas, arancelarias y legales básicas.

Empieza por la estrategia de canal y la matemática de márgenes. Quiero orientación con números reales y ejemplos concretos, no solo teoría de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la estrategia de distribución y ventas para un producto físico: selección de canales, negociación con retail y gestión de la red de distribución.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para hardware: las diferencias con el software',
                'description'      => 'Domina las particularidades del product management para productos físicos y hardware: ciclos más largos, manufactura, supply chain y la gestión del inventario como riesgo.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager senior con experiencia tanto en software como en hardware y productos físicos. Has gestionado el ciclo de vida completo de productos físicos desde el concepto hasta la manufactura y el lanzamiento. Necesito entender las diferencias y adaptar mis habilidades de PM de software al mundo físico.

**Mi contexto:**
Vengo del product management de software y estoy ahora gestionando [producto físico / hardware / producto con componente físico y digital]. Noto que muchas de mis herramientas y heurísticas de PM de software no aplican directamente. Necesito entender las diferencias fundamentales.

**Ayúdame a entender:**

1. **Las diferencias fundamentales entre PM de software y hardware**: ¿Cuáles son los cambios de mentalidad más importantes que debo hacer? Habla de irreversibilidad de decisiones, longitud de los ciclos de desarrollo, coste de los errores y la relación con manufactura.

2. **El proceso de desarrollo de producto físico (NPD)**: ¿Cuáles son las etapas típicas: concepto, diseño, ingeniería, prototipado, validación, tooling, producción piloto, lanzamiento? ¿Qué decisiones se toman en cada etapa y qué es irreversible a partir de qué punto?

3. **El BOM (Bill of Materials) como herramienta de PM**: ¿Qué es el BOM y por qué el PM de hardware debe entenderlo aunque no lo construya? ¿Cómo impactan las decisiones de componentes en el coste, la disponibilidad y la calidad del producto?

4. **Gestión de proveedores y manufactura**: ¿Cómo se relaciona el PM con los fabricantes (CM - Contract Manufacturers)? ¿Qué decisiones son de PM y cuáles son de ingeniería o supply chain? ¿Qué documentos (PRD para hardware, especificaciones técnicas) debo dominar?

5. **Lead times y la planificación de inventario**: En software, despliegas cuando quieres. En hardware, los lead times de componentes son de semanas o meses. ¿Cómo integro los lead times en la planificación del roadmap? ¿Cómo gestiono el riesgo de inventario?

6. **El cálculo de COGS y sus implicaciones en la estrategia**: ¿Cómo calculo el coste real de un producto físico (COGS)? ¿Cuáles son las palancas para mejorarlo: volumen, diseño, supply chain? ¿Cómo afecta el COGS a las decisiones de roadmap y posicionamiento?

7. **Iteración en hardware: el MVP físico**: En software, el MVP se lanza y se itera. En hardware, cada iteración cuesta mucho más. ¿Cómo aplico el pensamiento lean al desarrollo de hardware? ¿Cuándo y cómo hago prototipos? ¿Cuándo tengo suficiente evidencia para comprometer el tooling?

8. **Certificaciones y cumplimiento normativo**: CE, FCC, RoHS, UL... ¿Por qué el PM de hardware necesita entender las certificaciones desde el diseño? ¿Qué pasa si las ignoras hasta el final? ¿Cómo las integro en el timeline de desarrollo?

9. **El lanzamiento de hardware: la gestión del inventario inicial**: ¿Cuántas unidades produzco para el lanzamiento? ¿Cómo equilibro el riesgo de stock-out vs el riesgo de inventario obsoleto? ¿Cómo gestiono el ramp-up de producción?

10. **Métricas de producto físico**: ¿Qué KPIs son específicos del hardware que no tienen equivalente en software? Habla de defect rate, warranty claim rate, sell-through rate, tiempo de producción, exactitud del forecast de demanda y coste de devoluciones.

Empieza por las diferencias fundamentales y el proceso de NPD. Quiero orientación práctica de alguien que ha vivido ambos mundos, no solo teoría de gestión de proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Adaptar las habilidades de product management al contexto de hardware y productos físicos, entendiendo los procesos, riesgos y métricas específicos.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos en manufactura y logística: RRHH en operaciones',
                'description'      => 'Desarrolla las capacidades de gestión de personas en entornos operativos: manufactura, almacenes y logística, donde el reto humano es tan exigente como el operativo.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en gestión de personas en entornos operativos con experiencia en manufactura, centros de distribución y logística. Has gestionado equipos de cientos de personas en turnos, con alta rotación y en entornos con fuerte presión de productividad. Necesito tu ayuda para mejorar la gestión de personas en nuestra operación.

**Contexto:**
Gestionamos [tipo de operación: almacén / línea de manufactura / centro de distribución] con [número] de empleados en [número de turnos]. La rotación es alta, la presión de productividad es constante y las relaciones laborales son complejas. Necesito mejorar el desempeño y la retención.

**Ayúdame con:**

1. **El reto específico de RRHH en operaciones**: ¿Cuáles son las diferencias fundamentales de gestionar personas en un entorno operativo vs en una oficina? Habla de la presión de productividad, el trabajo físico, los turnos, la diversidad del equipo y las relaciones con los sindicatos.

2. **Reclutamiento de personal operativo**: ¿Cómo diseño un proceso de selección eficiente para perfiles operativos cuando necesito volumen y velocidad? ¿Qué competencias son realmente predictoras del éxito en un almacén o una línea de producción?

3. **Onboarding de operarios**: Las primeras semanas son críticas para la retención. ¿Cómo diseño un programa de onboarding que integre rápidamente al nuevo empleado, garantice la seguridad y reduzca el tiempo hasta la productividad plena?

4. **Gestión del desempeño en operaciones**: ¿Cómo establezco estándares de productividad que sean justos y motivadores? ¿Cómo gestiono a los empleados que no alcanzan el estándar sin deteriorar el ambiente de equipo? ¿Qué herramientas de seguimiento son útiles sin ser vigilancia agobiante?

5. **Reducción de la rotación en entornos operativos**: La rotación en logística y manufactura puede ser del 30-50% anual. ¿Cuáles son las causas reales (no las que la gente declara) de la rotación en operaciones? ¿Qué intervenciones tienen mayor impacto?

6. **Gestión de la seguridad como función de RRHH**: La seguridad en entornos operativos es responsabilidad compartida entre operaciones y RRHH. ¿Cómo construyo una cultura de seguridad genuina (no solo burocrática)? ¿Cómo gestiono los accidentes de trabajo y el retorno?

7. **Relaciones laborales y negociación sindical**: ¿Cómo gestiono la relación con los sindicatos de forma que sea constructiva, no solo transaccional? ¿Cuáles son los temas más frecuentes de conflicto en operaciones y cómo los prevengo?

8. **Gestión de turnos y flexibilidad**: ¿Cómo diseño los turnos para equilibrar las necesidades operativas con el bienestar de los empleados? ¿Cómo gestiono la flexibilidad cuando la operación tiene picos de demanda estacionales?

9. **Formación y desarrollo en operaciones**: ¿Cómo diseño programas de formación para perfiles operativos que sean efectivos con equipos de bajo nivel educativo formal, alta diversidad lingüística y tiempo limitado fuera de la línea?

10. **Indicadores de RRHH para operaciones**: ¿Qué métricas debo seguir para tener una foto real del estado de los equipos operativos? Absentismo, rotación por causa, tiempo hasta productividad, tasa de accidentes, satisfacción y NPS de empleado. ¿Cómo las presento a la dirección de operaciones?

Empieza por el reto específico de RRHH en operaciones y la gestión de la rotación. Quiero intervenciones prácticas que hayan demostrado funcionar en entornos de alta presión, no solo buenas intenciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Mejorar la gestión de personas en entornos operativos: reducir la rotación, mejorar el desempeño y construir cultura en equipos de manufactura y logística.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de inventario: COGS, márgenes y el capital de trabajo',
                'description'      => 'Domina las finanzas del inventario: cómo calcular y mejorar el COGS, gestionar el capital de trabajo atrapado en stock y analizar la rentabilidad real por producto.',
                'prompt_content'   => <<<'PROMPT'
Eres un director financiero con especialización en empresas de producto físico: manufactura, distribución y e-commerce. Has optimizado la gestión financiera del inventario en empresas de distintos tamaños y sectores. Necesito mejorar el control financiero de nuestro inventario.

**Contexto:**
Somos una empresa de [tipo] con [volumen] de inventario valorado en aproximadamente [valor]. Nuestro problema principal es [margen menor al esperado / capital de trabajo insuficiente / dificultad para valorar rentabilidad por SKU / dificultad para planificar el inventario].

**Ayúdame a entender y mejorar:**

1. **El cálculo correcto del COGS**: ¿Qué costes incluye realmente el COGS de un producto físico más allá del coste de manufactura? Habla de costes de transporte, aranceles, almacenamiento, mermas, devoluciones y el coste financiero del inventario. Dame la fórmula completa.

2. **Métodos de valoración del inventario**: FIFO, LIFO, coste medio ponderado... ¿Cuál aplica mejor a mi negocio y cuál es el impacto en el P&L según el método elegido? ¿Cómo afecta la inflación de costes a la valoración del inventario?

3. **Análisis de margen por SKU**: ¿Cómo calculo la rentabilidad real de cada referencia de producto, incluyendo todos los costes de servicio al canal? ¿Qué herramientas y modelos uso para hacer este análisis cuando tengo cientos de SKUs?

4. **El inventario como capital de trabajo atrapado**: ¿Cómo calculo el coste del capital de trabajo invertido en inventario? ¿Cuál es el impacto del nivel de inventario en el flujo de caja y cómo lo presento a la dirección?

5. **KPIs de gestión financiera del inventario**: ¿Cuáles son las métricas clave? Rotación de inventario, días de inventario (DSI), GMROI (Gross Margin Return On Investment), fill rate... Dame los benchmarks por sector y cómo interpretarlos.

6. **Provisiones por obsolescencia**: ¿Cómo establezco la política de provisiones para inventario obsoleto o de lenta rotación? ¿Cómo determino cuándo provisionar y cuánto? ¿Cómo impacta en el P&L y cuándo tiene sentido liquidar el stock?

7. **Planificación financiera del inventario**: ¿Cómo integro el plan de inventario con el presupuesto anual y la planificación de tesorería? ¿Cómo gestiono los picos estacionales de inventario sin asfixiar el flujo de caja?

8. **Financiación del inventario**: ¿Cuáles son las opciones de financiación específicas para inventario (factoring, confirming, líneas de crédito para inventario, financiación de proveedores)? ¿Cuándo tiene sentido cada opción?

9. **Control de mermas y diferencias de inventario**: ¿Cómo establezco un sistema de control que detecte y cuantifique las mermas (rotura, robo, errores de conteo)? ¿Cuál es el impacto financiero aceptable y cómo lo gestiono?

10. **El cuadro de mando financiero del inventario**: ¿Qué métricas incluyo en un dashboard financiero mensual de inventario para la dirección? Dame la estructura, los KPIs y la frecuencia de actualización recomendada.

Empieza por el cálculo correcto del COGS y el análisis de margen por SKU. Quiero modelos financieros concretos y ejemplos numéricos, no solo conceptos contables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar y optimizar la gestión financiera del inventario: COGS real, margen por SKU, capital de trabajo y planificación de tesorería en empresas de producto físico.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal del producto físico: responsabilidad de producto, certificaciones y aduanas',
                'description'      => 'Navega el marco legal que rodea a los productos físicos: responsabilidad por daños, certificaciones obligatorias, normativa de importación y exportación.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho mercantil, responsabilidad de producto y comercio internacional con experiencia asesorando a fabricantes, importadores y distribuidores de productos físicos. Necesito orientación jurídica sobre los aspectos legales de comercializar productos físicos.

**Mi situación:**
[Fabricamos / importamos / distribuimos] productos físicos de la categoría [tipo de producto] para venderlos en [mercados objetivo: España, UE, LATAM, EEUU]. Necesito entender mis obligaciones legales y cómo proteger la empresa de los principales riesgos jurídicos.

**Como fabricante / importador, ayúdame con:**

1. **Responsabilidad de producto en la UE**: ¿Cuál es el marco legal de responsabilidad por daños causados por productos defectuosos en la UE (Directiva de Responsabilidad de Producto)? ¿Cuándo soy responsable como fabricante, importador o distribuidor? ¿Qué defensa tengo disponible?

2. **Certificaciones obligatorias para el mercado europeo**: ¿Qué significa el marcado CE y cuándo es obligatorio? ¿Qué organismos notificados participan en el proceso? ¿Cuáles son las directivas aplicables a mi categoría de producto (LVD, EMC, RED, ROHS, REACH)?

3. **El expediente técnico y la declaración de conformidad**: ¿Qué documentación debo preparar y conservar para demostrar el cumplimiento normativo? ¿Cuánto tiempo debo conservarla? ¿Qué pasa si la autoridad de mercado me hace una inspección?

4. **Seguridad del producto y retiradas de mercado (recalls)**: ¿Cuáles son mis obligaciones si detecto que mi producto tiene un problema de seguridad? ¿Cuál es el proceso de recall en la UE? ¿Cómo gestiono la comunicación y la logística inversa de un recall minimizando el daño reputacional?

5. **Normativa de envases y embalajes**: ¿Qué obligaciones legales tengo respecto al packaging (RAEE, punto verde, normativa de residuos de envases, etiquetado obligatorio)? ¿Cómo impacta la normativa de economía circular en el diseño del packaging?

**Para la importación y exportación:**

6. **Aranceles y clasificación arancelaria**: ¿Cómo clasifico correctamente mi producto en el código NC (nomenclatura combinada)? ¿Qué consecuencias tiene una clasificación incorrecta? ¿Cómo gestiono el riesgo arancelario en contextos de guerra comercial?

7. **Trámites de importación en la UE**: ¿Cuál es el proceso para importar productos de fuera de la UE? ¿Qué documentos necesito (factura comercial, packing list, certificado de origen, declaración aduanera)? ¿Cuáles son los errores más frecuentes que causan retenciones en aduana?

8. **Contratos de compraventa internacional (CISG e Incoterms)**: ¿Cuándo aplica la Convención de Viena sobre compraventa internacional? ¿Cuál es el Incoterm adecuado para mi operación? ¿Qué cláusulas críticas debo incluir en mis contratos con proveedores internacionales?

9. **Propiedad intelectual en productos físicos**: ¿Cómo protejo el diseño de mi producto (diseño industrial, patente, modelo de utilidad)? ¿Qué ocurre si la aduana detecta que mi producto infringe una patente de otra empresa? ¿Cómo actúo si alguien copia mi producto?

10. **Etiquetado obligatorio**: ¿Qué información es obligatoria en la etiqueta de un producto físico vendido en la UE? Dame los requisitos para las categorías más comunes: alimentación, cosmética, electrónica, textil y juguetes.

Empieza por la responsabilidad de producto y las certificaciones CE. Quiero orientación práctica con el proceso paso a paso, no solo el marco legal abstracto. Indica cuando es imprescindible la consulta con un abogado especialista.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Entender y cumplir el marco legal de responsabilidad de producto, certificaciones CE y normativa de importación para comercializar productos físicos en la UE.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS para productos físicos: devoluciones, garantías y la experiencia post-venta',
                'description'      => 'Diseña un programa de customer success para productos físicos que convierta las devoluciones y garantías en oportunidades de fidelización.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer experience y servicio post-venta para productos físicos con experiencia en e-commerce, manufactura de consumo y retail. Has diseñado programas de garantía y devoluciones que han mejorado la retención y reducido los costes operativos simultáneamente. Necesito tu ayuda para transformar nuestro servicio post-venta.

**Contexto:**
Vendemos productos físicos [descripción] con un precio medio de [precio]. Actualmente la tasa de devolución es [%], el tiempo medio de resolución de incidencias es [días] y la satisfacción post-venta es [métrica]. El proceso actual es manual, lento y genera fricciones con los clientes.

**Ayúdame a diseñar:**

1. **La política de devoluciones que aumenta las ventas**: Paradójicamente, una política de devoluciones generosa reduce las devoluciones reales y aumenta la conversión. ¿Cómo diseño una política de devoluciones que sea un argumento de venta, no una obligación legal? ¿Cuál es el lenguaje correcto?

2. **El proceso de devolución que no destruye la relación**: ¿Cuáles son los pasos de un proceso de devolución que el cliente viva como una experiencia positiva, no como una batalla? Diseña el flujo completo: solicitud → autorización → logística inversa → inspección → resolución.

3. **Clasificación del motivo de devolución como dato estratégico**: Cada devolución contiene información valiosa sobre el producto, la descripción, las expectativas del cliente o los problemas de calidad. ¿Cómo capturo y uso este dato para mejorar el producto y reducir futuras devoluciones?

4. **Gestión de garantías**: ¿Cómo diseño una política de garantía que sea competitiva, manejable operativamente y no sea explotada? ¿Qué diferencia hay entre garantía legal (2 años en la UE) y garantía comercial? ¿Cuándo tiene sentido ofrecer garantías extendidas?

5. **El centro de atención de CS para productos físicos**: ¿Qué herramientas (helpdesk, chatbot, portal de autoservicio, WhatsApp Business) son adecuadas para gestionar incidencias de productos físicos? ¿Cómo formo al equipo de CS para que resuelva problemas técnicos de producto sin ser ingenieros?

6. **Las devoluciones en e-commerce**: La tasa de devolución en e-commerce puede ser del 20-30% en categorías como moda. ¿Cuáles son las causas reales y cómo las atacan los líderes del sector? ¿Qué acciones reducen las devoluciones antes de que ocurran?

7. **El coste real de una devolución**: ¿Cuáles son todos los costes de procesar una devolución (logística, inspección, reacondicionamiento, restock, coste de oportunidad del stock fuera de disponibilidad)? ¿Cómo calculo el coste por devolución para tomar decisiones basadas en datos?

8. **Qué hacer con el producto devuelto**: ¿Cuáles son las opciones para el producto que vuelve (reventa como nuevo, reventa como reacondicionado, outlet, donación, reciclaje)? ¿Cómo diseño el proceso de inspección y clasificación para maximizar la recuperación de valor?

9. **Convertir una incidencia en fidelización**: Un cliente que tiene un problema y lo resuelves bien se convierte en un cliente más leal que uno que nunca tuvo problemas. ¿Cuáles son las tácticas concretas para convertir una devolución o reclamación en un momento de fidelización?

10. **Métricas de post-venta para producto físico**: ¿Qué KPIs son específicos del servicio post-venta de producto físico? Tasa de devolución por SKU y canal, tiempo de resolución, coste por incidencia, NPS post-incidencia, tasa de recompra post-devolución. ¿Cuáles son los benchmarks?

Empieza por la política de devoluciones y el análisis de los motivos de devolución como dato estratégico. Quiero un programa concreto, no solo principios de customer service.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un programa de post-venta para productos físicos que convierta devoluciones y garantías en oportunidades de fidelización y reducción de costes.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en el mundo físico: diseño, consultoría y gestión de proyectos tangibles',
                'description'      => 'Construye un negocio freelance en disciplinas del mundo físico: diseño industrial, consultoría de manufactura, gestión de proyectos de construcción o producción.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de negocios y coach especializado en freelancers y consultores independientes que trabajan en disciplinas del mundo físico: diseño industrial, ingeniería, arquitectura, consultoría de manufactura y gestión de proyectos de construcción o producción. Necesito tu ayuda para construir o mejorar mi negocio freelance en este ámbito.

**Mi situación:**
Soy [profesión: diseñador industrial / ingeniero / consultor de manufactura / gestor de proyectos de construcción] con [X años] de experiencia. Actualmente [trabajo por cuenta ajena y quiero montar mi freelance / ya soy freelance pero quiero escalar / tengo clientes pero el negocio no es predecible]. Mi especialidad es [descripción].

**Ayúdame con:**

1. **El nicho correcto para un freelance físico**: En el mundo tangible, la especialización importa más que en el digital. ¿Cómo identifico el nicho donde soy más valioso y el mercado está dispuesto a pagar más? Dame un proceso para evaluar mi especialidad y el mercado.

2. **El modelo de negocio: proyecto, retainer o producto**: ¿Cuándo es mejor cobrar por proyecto, por horas, por retainer mensual o crear un producto propio (curso, metodología, herramienta)? ¿Qué modelo encaja mejor con el tipo de trabajo físico que hago?

3. **El pricing de servicios físicos**: Los servicios físicos tienen componentes que el digital no tiene: desplazamientos, tiempo en planta, responsabilidad por errores con consecuencias físicas. ¿Cómo precio correctamente considerando todos los costes y el valor que entrego?

4. **El contrato del freelance físico**: ¿Qué cláusulas son imprescindibles en un contrato de consultoría o diseño industrial? Habla de alcance, revisiones, propiedad intelectual, responsabilidad por errores, condiciones de pago y gestión de cambios de scope.

5. **Generación de leads en sectores físicos**: LinkedIn funciona bien para el digital, pero ¿cómo consigo clientes en manufactura, construcción o diseño industrial? Habla de ferias sectoriales, asociaciones industriales, licitaciones y el papel de las referencias.

6. **El portfolio para un freelance del mundo físico**: ¿Cómo muestro mi trabajo cuando los proyectos son confidenciales, los NDA son frecuentes o los resultados no son fácilmente fotografiables? ¿Qué formatos de portfolio funcionan mejor: PDF, web, caso de estudio en papel?

7. **Gestión de proyectos físicos como freelance**: Cuando el proyecto implica coordinar proveedores, visitas a fábrica o supervisión de obra, la gestión es más compleja que en el digital. ¿Qué herramientas y metodologías uso para gestionar proyectos físicos sin un equipo?

8. **La gestión del riesgo y la responsabilidad**: Un error de diseño que llega a producción puede costar cientos de miles de euros. ¿Cómo gestiono el riesgo como freelance? ¿Cuándo necesito un seguro de responsabilidad profesional? ¿Cómo limito contractualmente mi exposición?

9. **Escalar sin contratar**: ¿Cómo escalo un negocio freelance físico más allá de mi capacidad personal? Habla de subcontratación de parte del trabajo, formación de red de colaboradores, venta de metodologías y herramientas propias, y la transición a una pequeña consultora.

10. **La digitalización como diferenciador del freelance físico**: Muchos profesionales del mundo físico son lentos en adoptar herramientas digitales. ¿Cómo uso la digitalización (simulación, modelado 3D, automatización de informes, herramientas colaborativas) como ventaja competitiva real frente a la competencia más tradicional?

Empieza por el nicho y el pricing. Quiero orientación práctica y honesta sobre cómo construir un negocio freelance físico predecible y rentable, con ejemplos concretos de tarifas y estructuras de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y escalar un negocio freelance en disciplinas del mundo físico: diseño industrial, ingeniería y consultoría, con modelo de negocio, pricing y captación de clientes.',
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
